<?php
require_once(getabspath("classes/cipherer.php"));




$tdatavw_box_csv = array();
	$tdatavw_box_csv[".truncateText"] = true;
	$tdatavw_box_csv[".NumberOfChars"] = 80;
	$tdatavw_box_csv[".ShortName"] = "vw_box_csv";
	$tdatavw_box_csv[".OwnerID"] = "";
	$tdatavw_box_csv[".OriginalTable"] = "vw_box_csv";

//	field labels
$fieldLabelsvw_box_csv = array();
$fieldToolTipsvw_box_csv = array();
$pageTitlesvw_box_csv = array();
$placeHoldersvw_box_csv = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsvw_box_csv["Japanese"] = array();
	$fieldToolTipsvw_box_csv["Japanese"] = array();
	$placeHoldersvw_box_csv["Japanese"] = array();
	$pageTitlesvw_box_csv["Japanese"] = array();
	$fieldLabelsvw_box_csv["Japanese"]["sales_price"] = "販売額";
	$fieldToolTipsvw_box_csv["Japanese"]["sales_price"] = "";
	$placeHoldersvw_box_csv["Japanese"]["sales_price"] = "";
	$fieldLabelsvw_box_csv["Japanese"]["box_id"] = "ボックスID";
	$fieldToolTipsvw_box_csv["Japanese"]["box_id"] = "";
	$placeHoldersvw_box_csv["Japanese"]["box_id"] = "";
	$fieldLabelsvw_box_csv["Japanese"]["product_id"] = "SEQ";
	$fieldToolTipsvw_box_csv["Japanese"]["product_id"] = "";
	$placeHoldersvw_box_csv["Japanese"]["product_id"] = "";
	$fieldLabelsvw_box_csv["Japanese"]["title"] = "タイトル";
	$fieldToolTipsvw_box_csv["Japanese"]["title"] = "";
	$placeHoldersvw_box_csv["Japanese"]["title"] = "";
	$fieldLabelsvw_box_csv["Japanese"]["yahoo_sinaban"] = "品番";
	$fieldToolTipsvw_box_csv["Japanese"]["yahoo_sinaban"] = "";
	$placeHoldersvw_box_csv["Japanese"]["yahoo_sinaban"] = "";
	$fieldLabelsvw_box_csv["Japanese"]["yahoo_junle"] = "ブランド";
	$fieldToolTipsvw_box_csv["Japanese"]["yahoo_junle"] = "";
	$placeHoldersvw_box_csv["Japanese"]["yahoo_junle"] = "";
	$fieldLabelsvw_box_csv["Japanese"]["serial_number"] = "機番";
	$fieldToolTipsvw_box_csv["Japanese"]["serial_number"] = "";
	$placeHoldersvw_box_csv["Japanese"]["serial_number"] = "";
	$fieldLabelsvw_box_csv["Japanese"]["box_name"] = "ボックス名";
	$fieldToolTipsvw_box_csv["Japanese"]["box_name"] = "";
	$placeHoldersvw_box_csv["Japanese"]["box_name"] = "";
	$fieldLabelsvw_box_csv["Japanese"]["stamp"] = "刻印";
	$fieldToolTipsvw_box_csv["Japanese"]["stamp"] = "";
	$placeHoldersvw_box_csv["Japanese"]["stamp"] = "";
	if (count($fieldToolTipsvw_box_csv["Japanese"]))
		$tdatavw_box_csv[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsvw_box_csv[""] = array();
	$fieldToolTipsvw_box_csv[""] = array();
	$placeHoldersvw_box_csv[""] = array();
	$pageTitlesvw_box_csv[""] = array();
	$fieldLabelsvw_box_csv[""]["sales_price"] = "Sales Price";
	$fieldToolTipsvw_box_csv[""]["sales_price"] = "";
	$placeHoldersvw_box_csv[""]["sales_price"] = "";
	$fieldLabelsvw_box_csv[""]["box_id"] = "Box Id";
	$fieldToolTipsvw_box_csv[""]["box_id"] = "";
	$placeHoldersvw_box_csv[""]["box_id"] = "";
	$fieldLabelsvw_box_csv[""]["product_id"] = "Product Id";
	$fieldToolTipsvw_box_csv[""]["product_id"] = "";
	$placeHoldersvw_box_csv[""]["product_id"] = "";
	$fieldLabelsvw_box_csv[""]["title"] = "Title";
	$fieldToolTipsvw_box_csv[""]["title"] = "";
	$placeHoldersvw_box_csv[""]["title"] = "";
	$fieldLabelsvw_box_csv[""]["yahoo_sinaban"] = "Yahoo Sinaban";
	$fieldToolTipsvw_box_csv[""]["yahoo_sinaban"] = "";
	$placeHoldersvw_box_csv[""]["yahoo_sinaban"] = "";
	$fieldLabelsvw_box_csv[""]["yahoo_junle"] = "Yahoo Junle";
	$fieldToolTipsvw_box_csv[""]["yahoo_junle"] = "";
	$placeHoldersvw_box_csv[""]["yahoo_junle"] = "";
	$fieldLabelsvw_box_csv[""]["serial_number"] = "Serial Number";
	$fieldToolTipsvw_box_csv[""]["serial_number"] = "";
	$placeHoldersvw_box_csv[""]["serial_number"] = "";
	$fieldLabelsvw_box_csv[""]["box_name"] = "Box Name";
	$fieldToolTipsvw_box_csv[""]["box_name"] = "";
	$placeHoldersvw_box_csv[""]["box_name"] = "";
	$fieldLabelsvw_box_csv[""]["stamp"] = "Stamp";
	$fieldToolTipsvw_box_csv[""]["stamp"] = "";
	$placeHoldersvw_box_csv[""]["stamp"] = "";
	if (count($fieldToolTipsvw_box_csv[""]))
		$tdatavw_box_csv[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsvw_box_csv["English"] = array();
	$fieldToolTipsvw_box_csv["English"] = array();
	$placeHoldersvw_box_csv["English"] = array();
	$pageTitlesvw_box_csv["English"] = array();
	$fieldLabelsvw_box_csv["English"]["sales_price"] = "Sales Price";
	$fieldToolTipsvw_box_csv["English"]["sales_price"] = "";
	$placeHoldersvw_box_csv["English"]["sales_price"] = "";
	$fieldLabelsvw_box_csv["English"]["box_id"] = "Box Id";
	$fieldToolTipsvw_box_csv["English"]["box_id"] = "";
	$placeHoldersvw_box_csv["English"]["box_id"] = "";
	$fieldLabelsvw_box_csv["English"]["product_id"] = "Product Id";
	$fieldToolTipsvw_box_csv["English"]["product_id"] = "";
	$placeHoldersvw_box_csv["English"]["product_id"] = "";
	$fieldLabelsvw_box_csv["English"]["title"] = "Title";
	$fieldToolTipsvw_box_csv["English"]["title"] = "";
	$placeHoldersvw_box_csv["English"]["title"] = "";
	$fieldLabelsvw_box_csv["English"]["yahoo_sinaban"] = "Yahoo Sinaban";
	$fieldToolTipsvw_box_csv["English"]["yahoo_sinaban"] = "";
	$placeHoldersvw_box_csv["English"]["yahoo_sinaban"] = "";
	$fieldLabelsvw_box_csv["English"]["yahoo_junle"] = "Yahoo Junle";
	$fieldToolTipsvw_box_csv["English"]["yahoo_junle"] = "";
	$placeHoldersvw_box_csv["English"]["yahoo_junle"] = "";
	$fieldLabelsvw_box_csv["English"]["serial_number"] = "Serial Number";
	$fieldToolTipsvw_box_csv["English"]["serial_number"] = "";
	$placeHoldersvw_box_csv["English"]["serial_number"] = "";
	$fieldLabelsvw_box_csv["English"]["box_name"] = "Box Name";
	$fieldToolTipsvw_box_csv["English"]["box_name"] = "";
	$placeHoldersvw_box_csv["English"]["box_name"] = "";
	$fieldLabelsvw_box_csv["English"]["stamp"] = "Stamp";
	$fieldToolTipsvw_box_csv["English"]["stamp"] = "";
	$placeHoldersvw_box_csv["English"]["stamp"] = "";
	if (count($fieldToolTipsvw_box_csv["English"]))
		$tdatavw_box_csv[".isUseToolTips"] = true;
}


	$tdatavw_box_csv[".NCSearch"] = true;



$tdatavw_box_csv[".shortTableName"] = "vw_box_csv";
$tdatavw_box_csv[".nSecOptions"] = 0;
$tdatavw_box_csv[".recsPerRowPrint"] = 1;
$tdatavw_box_csv[".mainTableOwnerID"] = "";
$tdatavw_box_csv[".moveNext"] = 1;
$tdatavw_box_csv[".entityType"] = 0;

$tdatavw_box_csv[".strOriginalTableName"] = "vw_box_csv";

	



$tdatavw_box_csv[".showAddInPopup"] = false;

$tdatavw_box_csv[".showEditInPopup"] = false;

$tdatavw_box_csv[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatavw_box_csv[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatavw_box_csv[".fieldsForRegister"] = array();

$tdatavw_box_csv[".listAjax"] = false;

	$tdatavw_box_csv[".audit"] = false;

	$tdatavw_box_csv[".locking"] = false;



$tdatavw_box_csv[".list"] = true;



$tdatavw_box_csv[".reorderRecordsByHeader"] = true;





$tdatavw_box_csv[".exportTo"] = true;



$tdatavw_box_csv[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatavw_box_csv[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatavw_box_csv[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatavw_box_csv[".searchSaving"] = false;
//

$tdatavw_box_csv[".showSearchPanel"] = true;
		$tdatavw_box_csv[".flexibleSearch"] = true;

$tdatavw_box_csv[".isUseAjaxSuggest"] = true;

$tdatavw_box_csv[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatavw_box_csv[".ajaxCodeSnippetAdded"] = false;

$tdatavw_box_csv[".buttonsAdded"] = false;

$tdatavw_box_csv[".addPageEvents"] = false;

// use timepicker for search panel
$tdatavw_box_csv[".isUseTimeForSearch"] = false;





$tdatavw_box_csv[".allSearchFields"] = array();
$tdatavw_box_csv[".filterFields"] = array();
$tdatavw_box_csv[".requiredSearchFields"] = array();

$tdatavw_box_csv[".allSearchFields"][] = "sales_price";
	$tdatavw_box_csv[".allSearchFields"][] = "box_id";
	$tdatavw_box_csv[".allSearchFields"][] = "box_name";
	$tdatavw_box_csv[".allSearchFields"][] = "product_id";
	$tdatavw_box_csv[".allSearchFields"][] = "title";
	$tdatavw_box_csv[".allSearchFields"][] = "yahoo_sinaban";
	$tdatavw_box_csv[".allSearchFields"][] = "yahoo_junle";
	$tdatavw_box_csv[".allSearchFields"][] = "serial_number";
	$tdatavw_box_csv[".allSearchFields"][] = "stamp";
	

$tdatavw_box_csv[".googleLikeFields"] = array();
$tdatavw_box_csv[".googleLikeFields"][] = "sales_price";
$tdatavw_box_csv[".googleLikeFields"][] = "box_id";
$tdatavw_box_csv[".googleLikeFields"][] = "product_id";
$tdatavw_box_csv[".googleLikeFields"][] = "title";
$tdatavw_box_csv[".googleLikeFields"][] = "yahoo_sinaban";
$tdatavw_box_csv[".googleLikeFields"][] = "yahoo_junle";
$tdatavw_box_csv[".googleLikeFields"][] = "serial_number";
$tdatavw_box_csv[".googleLikeFields"][] = "box_name";
$tdatavw_box_csv[".googleLikeFields"][] = "stamp";

$tdatavw_box_csv[".panelSearchFields"] = array();
$tdatavw_box_csv[".searchPanelOptions"] = array();
$tdatavw_box_csv[".panelSearchFields"][] = "box_id";
	
$tdatavw_box_csv[".advSearchFields"] = array();
$tdatavw_box_csv[".advSearchFields"][] = "sales_price";
$tdatavw_box_csv[".advSearchFields"][] = "box_id";
$tdatavw_box_csv[".advSearchFields"][] = "box_name";
$tdatavw_box_csv[".advSearchFields"][] = "product_id";
$tdatavw_box_csv[".advSearchFields"][] = "title";
$tdatavw_box_csv[".advSearchFields"][] = "yahoo_sinaban";
$tdatavw_box_csv[".advSearchFields"][] = "yahoo_junle";
$tdatavw_box_csv[".advSearchFields"][] = "serial_number";
$tdatavw_box_csv[".advSearchFields"][] = "stamp";

$tdatavw_box_csv[".tableType"] = "list";

$tdatavw_box_csv[".printerPageOrientation"] = 0;
$tdatavw_box_csv[".nPrinterPageScale"] = 100;

$tdatavw_box_csv[".nPrinterSplitRecords"] = 40;

$tdatavw_box_csv[".nPrinterPDFSplitRecords"] = 40;



$tdatavw_box_csv[".geocodingEnabled"] = false;





$tdatavw_box_csv[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatavw_box_csv[".pageSize"] = 20;

$tdatavw_box_csv[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatavw_box_csv[".strOrderBy"] = $tstrOrderBy;

$tdatavw_box_csv[".orderindexes"] = array();

$tdatavw_box_csv[".sqlHead"] = "SELECT vw_box_csv.sales_price,  vw_box_csv.box_id,  vw_box_csv.product_id,  vw_box_csv.title,  vw_box_csv.yahoo_sinaban,  vw_box_csv.yahoo_junle,  vw_box_csv.serial_number,  box.box_name,  vw_box_csv.stamp";
$tdatavw_box_csv[".sqlFrom"] = "FROM vw_box_csv  LEFT OUTER JOIN box ON vw_box_csv.box_id = box.box_id";
$tdatavw_box_csv[".sqlWhereExpr"] = "";
$tdatavw_box_csv[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatavw_box_csv[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatavw_box_csv[".arrGroupsPerPage"] = $arrGPP;

$tdatavw_box_csv[".highlightSearchResults"] = true;

$tableKeysvw_box_csv = array();
$tdatavw_box_csv[".Keys"] = $tableKeysvw_box_csv;

$tdatavw_box_csv[".listFields"] = array();
$tdatavw_box_csv[".listFields"][] = "sales_price";
$tdatavw_box_csv[".listFields"][] = "box_id";
$tdatavw_box_csv[".listFields"][] = "box_name";
$tdatavw_box_csv[".listFields"][] = "product_id";
$tdatavw_box_csv[".listFields"][] = "title";
$tdatavw_box_csv[".listFields"][] = "yahoo_sinaban";
$tdatavw_box_csv[".listFields"][] = "yahoo_junle";
$tdatavw_box_csv[".listFields"][] = "serial_number";
$tdatavw_box_csv[".listFields"][] = "stamp";

$tdatavw_box_csv[".hideMobileList"] = array();


$tdatavw_box_csv[".viewFields"] = array();

$tdatavw_box_csv[".addFields"] = array();

$tdatavw_box_csv[".masterListFields"] = array();
$tdatavw_box_csv[".masterListFields"][] = "sales_price";
$tdatavw_box_csv[".masterListFields"][] = "box_id";
$tdatavw_box_csv[".masterListFields"][] = "product_id";
$tdatavw_box_csv[".masterListFields"][] = "title";
$tdatavw_box_csv[".masterListFields"][] = "yahoo_sinaban";
$tdatavw_box_csv[".masterListFields"][] = "yahoo_junle";
$tdatavw_box_csv[".masterListFields"][] = "serial_number";
$tdatavw_box_csv[".masterListFields"][] = "box_name";
$tdatavw_box_csv[".masterListFields"][] = "stamp";

$tdatavw_box_csv[".inlineAddFields"] = array();

$tdatavw_box_csv[".editFields"] = array();

$tdatavw_box_csv[".inlineEditFields"] = array();

$tdatavw_box_csv[".updateSelectedFields"] = array();


$tdatavw_box_csv[".exportFields"] = array();
$tdatavw_box_csv[".exportFields"][] = "sales_price";
$tdatavw_box_csv[".exportFields"][] = "box_id";
$tdatavw_box_csv[".exportFields"][] = "box_name";
$tdatavw_box_csv[".exportFields"][] = "product_id";
$tdatavw_box_csv[".exportFields"][] = "title";
$tdatavw_box_csv[".exportFields"][] = "yahoo_sinaban";
$tdatavw_box_csv[".exportFields"][] = "yahoo_junle";

$tdatavw_box_csv[".importFields"] = array();

$tdatavw_box_csv[".printFields"] = array();

//	sales_price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "sales_price";
	$fdata["GoodName"] = "sales_price";
	$fdata["ownerTable"] = "vw_box_csv";
	$fdata["Label"] = GetFieldLabel("vw_box_csv","sales_price");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "sales_price";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "vw_box_csv.sales_price";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
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




	$tdatavw_box_csv["sales_price"] = $fdata;
//	box_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "box_id";
	$fdata["GoodName"] = "box_id";
	$fdata["ownerTable"] = "vw_box_csv";
	$fdata["Label"] = GetFieldLabel("vw_box_csv","box_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "box_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "vw_box_csv.box_id";

	
	
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




	$tdatavw_box_csv["box_id"] = $fdata;
//	product_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "product_id";
	$fdata["GoodName"] = "product_id";
	$fdata["ownerTable"] = "vw_box_csv";
	$fdata["Label"] = GetFieldLabel("vw_box_csv","product_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "product_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "vw_box_csv.product_id";

	
	
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




	$tdatavw_box_csv["product_id"] = $fdata;
//	title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "title";
	$fdata["GoodName"] = "title";
	$fdata["ownerTable"] = "vw_box_csv";
	$fdata["Label"] = GetFieldLabel("vw_box_csv","title");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "title";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "vw_box_csv.title";

	
	
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




	$tdatavw_box_csv["title"] = $fdata;
//	yahoo_sinaban
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "yahoo_sinaban";
	$fdata["GoodName"] = "yahoo_sinaban";
	$fdata["ownerTable"] = "vw_box_csv";
	$fdata["Label"] = GetFieldLabel("vw_box_csv","yahoo_sinaban");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "yahoo_sinaban";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "vw_box_csv.yahoo_sinaban";

	
	
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
			$edata["EditParams"].= " maxlength=11";

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




	$tdatavw_box_csv["yahoo_sinaban"] = $fdata;
//	yahoo_junle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "yahoo_junle";
	$fdata["GoodName"] = "yahoo_junle";
	$fdata["ownerTable"] = "vw_box_csv";
	$fdata["Label"] = GetFieldLabel("vw_box_csv","yahoo_junle");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "yahoo_junle";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "vw_box_csv.yahoo_junle";

	
	
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
	$edata["LookupTable"] = "mst_brand2";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 1;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "name";

	
	$edata["LookupOrderBy"] = "name";

	
	
	
	

	
	
	
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




	$tdatavw_box_csv["yahoo_junle"] = $fdata;
//	serial_number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "serial_number";
	$fdata["GoodName"] = "serial_number";
	$fdata["ownerTable"] = "vw_box_csv";
	$fdata["Label"] = GetFieldLabel("vw_box_csv","serial_number");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "serial_number";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "vw_box_csv.serial_number";

	
	
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
			$edata["EditParams"].= " maxlength=150";

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




	$tdatavw_box_csv["serial_number"] = $fdata;
//	box_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "box_name";
	$fdata["GoodName"] = "box_name";
	$fdata["ownerTable"] = "box";
	$fdata["Label"] = GetFieldLabel("vw_box_csv","box_name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "box_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "box.box_name";

	
	
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




	$tdatavw_box_csv["box_name"] = $fdata;
//	stamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "stamp";
	$fdata["GoodName"] = "stamp";
	$fdata["ownerTable"] = "vw_box_csv";
	$fdata["Label"] = GetFieldLabel("vw_box_csv","stamp");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "stamp";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "vw_box_csv.stamp";

	
	
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
			$edata["EditParams"].= " maxlength=150";

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




	$tdatavw_box_csv["stamp"] = $fdata;


$tables_data["vw_box_csv"]=&$tdatavw_box_csv;
$field_labels["vw_box_csv"] = &$fieldLabelsvw_box_csv;
$fieldToolTips["vw_box_csv"] = &$fieldToolTipsvw_box_csv;
$placeHolders["vw_box_csv"] = &$placeHoldersvw_box_csv;
$page_titles["vw_box_csv"] = &$pageTitlesvw_box_csv;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["vw_box_csv"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["vw_box_csv"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_vw_box_csv()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "vw_box_csv.sales_price,  vw_box_csv.box_id,  vw_box_csv.product_id,  vw_box_csv.title,  vw_box_csv.yahoo_sinaban,  vw_box_csv.yahoo_junle,  vw_box_csv.serial_number,  box.box_name,  vw_box_csv.stamp";
$proto0["m_strFrom"] = "FROM vw_box_csv  LEFT OUTER JOIN box ON vw_box_csv.box_id = box.box_id";
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
	"m_strName" => "sales_price",
	"m_strTable" => "vw_box_csv",
	"m_srcTableName" => "vw_box_csv"
));

$proto6["m_sql"] = "vw_box_csv.sales_price";
$proto6["m_srcTableName"] = "vw_box_csv";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "box_id",
	"m_strTable" => "vw_box_csv",
	"m_srcTableName" => "vw_box_csv"
));

$proto8["m_sql"] = "vw_box_csv.box_id";
$proto8["m_srcTableName"] = "vw_box_csv";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "product_id",
	"m_strTable" => "vw_box_csv",
	"m_srcTableName" => "vw_box_csv"
));

$proto10["m_sql"] = "vw_box_csv.product_id";
$proto10["m_srcTableName"] = "vw_box_csv";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "title",
	"m_strTable" => "vw_box_csv",
	"m_srcTableName" => "vw_box_csv"
));

$proto12["m_sql"] = "vw_box_csv.title";
$proto12["m_srcTableName"] = "vw_box_csv";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_sinaban",
	"m_strTable" => "vw_box_csv",
	"m_srcTableName" => "vw_box_csv"
));

$proto14["m_sql"] = "vw_box_csv.yahoo_sinaban";
$proto14["m_srcTableName"] = "vw_box_csv";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_junle",
	"m_strTable" => "vw_box_csv",
	"m_srcTableName" => "vw_box_csv"
));

$proto16["m_sql"] = "vw_box_csv.yahoo_junle";
$proto16["m_srcTableName"] = "vw_box_csv";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "serial_number",
	"m_strTable" => "vw_box_csv",
	"m_srcTableName" => "vw_box_csv"
));

$proto18["m_sql"] = "vw_box_csv.serial_number";
$proto18["m_srcTableName"] = "vw_box_csv";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "box_name",
	"m_strTable" => "box",
	"m_srcTableName" => "vw_box_csv"
));

$proto20["m_sql"] = "box.box_name";
$proto20["m_srcTableName"] = "vw_box_csv";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "stamp",
	"m_strTable" => "vw_box_csv",
	"m_srcTableName" => "vw_box_csv"
));

$proto22["m_sql"] = "vw_box_csv.stamp";
$proto22["m_srcTableName"] = "vw_box_csv";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "vw_box_csv";
$proto25["m_srcTableName"] = "vw_box_csv";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "sales_price";
$proto25["m_columns"][] = "box_id";
$proto25["m_columns"][] = "product_id";
$proto25["m_columns"][] = "title";
$proto25["m_columns"][] = "yahoo_sinaban";
$proto25["m_columns"][] = "yahoo_junle";
$proto25["m_columns"][] = "serial_number";
$proto25["m_columns"][] = "stamp";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "vw_box_csv";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "vw_box_csv";
$proto26=array();
$proto26["m_sql"] = "";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "";
$proto26["m_havingmode"] = false;
$proto26["m_inBrackets"] = false;
$proto26["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto26);

$proto24["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto24);

$proto0["m_fromlist"][]=$obj;
												$proto28=array();
$proto28["m_link"] = "SQLL_LEFTJOIN";
			$proto29=array();
$proto29["m_strName"] = "box";
$proto29["m_srcTableName"] = "vw_box_csv";
$proto29["m_columns"] = array();
$proto29["m_columns"][] = "box_id";
$proto29["m_columns"][] = "box_pass";
$proto29["m_columns"][] = "box_name";
$proto29["m_columns"][] = "box_name_jp";
$proto29["m_columns"][] = "created_at";
$proto29["m_columns"][] = "created_by";
$proto29["m_columns"][] = "zip";
$proto29["m_columns"][] = "zip_status";
$proto29["m_columns"][] = "zip_name";
$proto29["m_columns"][] = "box_csv_template_id";
$proto29["m_columns"][] = "updated_at";
$proto29["m_columns"][] = "rakuten_cabinet_name";
$proto29["m_columns"][] = "rakuup";
$proto29["m_columns"][] = "yup";
$proto29["m_columns"][] = "raku_image_name";
$proto29["m_columns"][] = "csv";
$proto29["m_columns"][] = "up";
$proto29["m_columns"][] = "box_id_new";
$proto29["m_columns"][] = "satuei_sha";
$proto29["m_columns"][] = "satuei_jikan";
$proto29["m_columns"][] = "kakou_sha";
$proto29["m_columns"][] = "kakou_jikan";
$proto29["m_columns"][] = "konpou_sha";
$proto29["m_columns"][] = "konpou_Jikan";
$proto29["m_columns"][] = "link1";
$proto29["m_columns"][] = "zip_create";
$proto29["m_columns"][] = "updated_by";
$proto29["m_columns"][] = "count";
$proto29["m_columns"][] = "zip_flag";
$proto29["m_columns"][] = "img_count";
$proto29["m_columns"][] = "finished_at";
$proto29["m_columns"][] = "is_pause";
$proto29["m_columns"][] = "pause_finished_at";
$obj = new SQLTable($proto29);

$proto28["m_table"] = $obj;
$proto28["m_sql"] = "LEFT OUTER JOIN box ON vw_box_csv.box_id = box.box_id";
$proto28["m_alias"] = "";
$proto28["m_srcTableName"] = "vw_box_csv";
$proto30=array();
$proto30["m_sql"] = "vw_box_csv.box_id = box.box_id";
$proto30["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "box_id",
	"m_strTable" => "vw_box_csv",
	"m_srcTableName" => "vw_box_csv"
));

$proto30["m_column"]=$obj;
$proto30["m_contained"] = array();
$proto30["m_strCase"] = "= box.box_id";
$proto30["m_havingmode"] = false;
$proto30["m_inBrackets"] = false;
$proto30["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto30);

$proto28["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto28);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="vw_box_csv";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_vw_box_csv = createSqlQuery_vw_box_csv();


	
		;

									

$tdatavw_box_csv[".sqlquery"] = $queryData_vw_box_csv;

$tableEvents["vw_box_csv"] = new eventsBase;
$tdatavw_box_csv[".hasEvents"] = false;

?>