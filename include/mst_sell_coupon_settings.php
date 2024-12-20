<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamst_sell_coupon = array();
	$tdatamst_sell_coupon[".truncateText"] = true;
	$tdatamst_sell_coupon[".NumberOfChars"] = 80;
	$tdatamst_sell_coupon[".ShortName"] = "mst_sell_coupon";
	$tdatamst_sell_coupon[".OwnerID"] = "";
	$tdatamst_sell_coupon[".OriginalTable"] = "mst_sell_coupon";

//	field labels
$fieldLabelsmst_sell_coupon = array();
$fieldToolTipsmst_sell_coupon = array();
$pageTitlesmst_sell_coupon = array();
$placeHoldersmst_sell_coupon = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmst_sell_coupon["Japanese"] = array();
	$fieldToolTipsmst_sell_coupon["Japanese"] = array();
	$placeHoldersmst_sell_coupon["Japanese"] = array();
	$pageTitlesmst_sell_coupon["Japanese"] = array();
	$fieldLabelsmst_sell_coupon["Japanese"]["id"] = "Id";
	$fieldToolTipsmst_sell_coupon["Japanese"]["id"] = "";
	$placeHoldersmst_sell_coupon["Japanese"]["id"] = "";
	$fieldLabelsmst_sell_coupon["Japanese"]["mall_name"] = "対象モール";
	$fieldToolTipsmst_sell_coupon["Japanese"]["mall_name"] = "";
	$placeHoldersmst_sell_coupon["Japanese"]["mall_name"] = "";
	$fieldLabelsmst_sell_coupon["Japanese"]["startDate"] = "開始日時";
	$fieldToolTipsmst_sell_coupon["Japanese"]["startDate"] = "";
	$placeHoldersmst_sell_coupon["Japanese"]["startDate"] = "";
	$fieldLabelsmst_sell_coupon["Japanese"]["lastDate"] = "終了日時";
	$fieldToolTipsmst_sell_coupon["Japanese"]["lastDate"] = "";
	$placeHoldersmst_sell_coupon["Japanese"]["lastDate"] = "";
	$fieldLabelsmst_sell_coupon["Japanese"]["url"] = "クーポン取得URL";
	$fieldToolTipsmst_sell_coupon["Japanese"]["url"] = "";
	$placeHoldersmst_sell_coupon["Japanese"]["url"] = "";
	$fieldLabelsmst_sell_coupon["Japanese"]["img"] = "取得画像";
	$fieldToolTipsmst_sell_coupon["Japanese"]["img"] = "";
	$placeHoldersmst_sell_coupon["Japanese"]["img"] = "";
	$fieldLabelsmst_sell_coupon["Japanese"]["ttl"] = "タイトル";
	$fieldToolTipsmst_sell_coupon["Japanese"]["ttl"] = "";
	$placeHoldersmst_sell_coupon["Japanese"]["ttl"] = "";
	if (count($fieldToolTipsmst_sell_coupon["Japanese"]))
		$tdatamst_sell_coupon[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmst_sell_coupon[""] = array();
	$fieldToolTipsmst_sell_coupon[""] = array();
	$placeHoldersmst_sell_coupon[""] = array();
	$pageTitlesmst_sell_coupon[""] = array();
	$fieldLabelsmst_sell_coupon[""]["id"] = "Id";
	$fieldToolTipsmst_sell_coupon[""]["id"] = "";
	$placeHoldersmst_sell_coupon[""]["id"] = "";
	$fieldLabelsmst_sell_coupon[""]["mall_name"] = "Mall Name";
	$fieldToolTipsmst_sell_coupon[""]["mall_name"] = "";
	$placeHoldersmst_sell_coupon[""]["mall_name"] = "";
	$fieldLabelsmst_sell_coupon[""]["startDate"] = "Start Date";
	$fieldToolTipsmst_sell_coupon[""]["startDate"] = "";
	$placeHoldersmst_sell_coupon[""]["startDate"] = "";
	$fieldLabelsmst_sell_coupon[""]["lastDate"] = "Last Date";
	$fieldToolTipsmst_sell_coupon[""]["lastDate"] = "";
	$placeHoldersmst_sell_coupon[""]["lastDate"] = "";
	$fieldLabelsmst_sell_coupon[""]["url"] = "Url";
	$fieldToolTipsmst_sell_coupon[""]["url"] = "";
	$placeHoldersmst_sell_coupon[""]["url"] = "";
	$fieldLabelsmst_sell_coupon[""]["img"] = "Img";
	$fieldToolTipsmst_sell_coupon[""]["img"] = "";
	$placeHoldersmst_sell_coupon[""]["img"] = "";
	$fieldLabelsmst_sell_coupon[""]["ttl"] = "Ttl";
	$fieldToolTipsmst_sell_coupon[""]["ttl"] = "";
	$placeHoldersmst_sell_coupon[""]["ttl"] = "";
	if (count($fieldToolTipsmst_sell_coupon[""]))
		$tdatamst_sell_coupon[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmst_sell_coupon["English"] = array();
	$fieldToolTipsmst_sell_coupon["English"] = array();
	$placeHoldersmst_sell_coupon["English"] = array();
	$pageTitlesmst_sell_coupon["English"] = array();
	$fieldLabelsmst_sell_coupon["English"]["id"] = "Id";
	$fieldToolTipsmst_sell_coupon["English"]["id"] = "";
	$placeHoldersmst_sell_coupon["English"]["id"] = "";
	$fieldLabelsmst_sell_coupon["English"]["mall_name"] = "Mall Name";
	$fieldToolTipsmst_sell_coupon["English"]["mall_name"] = "";
	$placeHoldersmst_sell_coupon["English"]["mall_name"] = "";
	$fieldLabelsmst_sell_coupon["English"]["startDate"] = "Start Date";
	$fieldToolTipsmst_sell_coupon["English"]["startDate"] = "";
	$placeHoldersmst_sell_coupon["English"]["startDate"] = "";
	$fieldLabelsmst_sell_coupon["English"]["lastDate"] = "Last Date";
	$fieldToolTipsmst_sell_coupon["English"]["lastDate"] = "";
	$placeHoldersmst_sell_coupon["English"]["lastDate"] = "";
	$fieldLabelsmst_sell_coupon["English"]["url"] = "Url";
	$fieldToolTipsmst_sell_coupon["English"]["url"] = "";
	$placeHoldersmst_sell_coupon["English"]["url"] = "";
	$fieldLabelsmst_sell_coupon["English"]["img"] = "Img";
	$fieldToolTipsmst_sell_coupon["English"]["img"] = "";
	$placeHoldersmst_sell_coupon["English"]["img"] = "";
	$fieldLabelsmst_sell_coupon["English"]["ttl"] = "Ttl";
	$fieldToolTipsmst_sell_coupon["English"]["ttl"] = "";
	$placeHoldersmst_sell_coupon["English"]["ttl"] = "";
	if (count($fieldToolTipsmst_sell_coupon["English"]))
		$tdatamst_sell_coupon[".isUseToolTips"] = true;
}


	$tdatamst_sell_coupon[".NCSearch"] = true;



$tdatamst_sell_coupon[".shortTableName"] = "mst_sell_coupon";
$tdatamst_sell_coupon[".nSecOptions"] = 0;
$tdatamst_sell_coupon[".recsPerRowPrint"] = 1;
$tdatamst_sell_coupon[".mainTableOwnerID"] = "";
$tdatamst_sell_coupon[".moveNext"] = 1;
$tdatamst_sell_coupon[".entityType"] = 0;

$tdatamst_sell_coupon[".strOriginalTableName"] = "mst_sell_coupon";

	



$tdatamst_sell_coupon[".showAddInPopup"] = false;

$tdatamst_sell_coupon[".showEditInPopup"] = false;

$tdatamst_sell_coupon[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamst_sell_coupon[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamst_sell_coupon[".fieldsForRegister"] = array();

$tdatamst_sell_coupon[".listAjax"] = false;

	$tdatamst_sell_coupon[".audit"] = true;

	$tdatamst_sell_coupon[".locking"] = false;



$tdatamst_sell_coupon[".list"] = true;

$tdatamst_sell_coupon[".inlineEdit"] = true;


$tdatamst_sell_coupon[".reorderRecordsByHeader"] = true;



$tdatamst_sell_coupon[".inlineAdd"] = true;

$tdatamst_sell_coupon[".import"] = true;

$tdatamst_sell_coupon[".exportTo"] = true;


$tdatamst_sell_coupon[".delete"] = true;

$tdatamst_sell_coupon[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamst_sell_coupon[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamst_sell_coupon[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamst_sell_coupon[".searchSaving"] = false;
//

$tdatamst_sell_coupon[".showSearchPanel"] = true;
		$tdatamst_sell_coupon[".flexibleSearch"] = true;

$tdatamst_sell_coupon[".isUseAjaxSuggest"] = true;

$tdatamst_sell_coupon[".rowHighlite"] = true;



																																																								

$tdatamst_sell_coupon[".ajaxCodeSnippetAdded"] = false;

$tdatamst_sell_coupon[".buttonsAdded"] = false;

$tdatamst_sell_coupon[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamst_sell_coupon[".isUseTimeForSearch"] = false;





$tdatamst_sell_coupon[".allSearchFields"] = array();
$tdatamst_sell_coupon[".filterFields"] = array();
$tdatamst_sell_coupon[".requiredSearchFields"] = array();

$tdatamst_sell_coupon[".allSearchFields"][] = "id";
	$tdatamst_sell_coupon[".allSearchFields"][] = "mall_name";
	$tdatamst_sell_coupon[".allSearchFields"][] = "startDate";
	$tdatamst_sell_coupon[".allSearchFields"][] = "lastDate";
	$tdatamst_sell_coupon[".allSearchFields"][] = "url";
	$tdatamst_sell_coupon[".allSearchFields"][] = "img";
	$tdatamst_sell_coupon[".allSearchFields"][] = "ttl";
	

$tdatamst_sell_coupon[".googleLikeFields"] = array();
$tdatamst_sell_coupon[".googleLikeFields"][] = "id";
$tdatamst_sell_coupon[".googleLikeFields"][] = "mall_name";
$tdatamst_sell_coupon[".googleLikeFields"][] = "startDate";
$tdatamst_sell_coupon[".googleLikeFields"][] = "lastDate";
$tdatamst_sell_coupon[".googleLikeFields"][] = "url";
$tdatamst_sell_coupon[".googleLikeFields"][] = "img";
$tdatamst_sell_coupon[".googleLikeFields"][] = "ttl";


$tdatamst_sell_coupon[".advSearchFields"] = array();
$tdatamst_sell_coupon[".advSearchFields"][] = "id";
$tdatamst_sell_coupon[".advSearchFields"][] = "mall_name";
$tdatamst_sell_coupon[".advSearchFields"][] = "startDate";
$tdatamst_sell_coupon[".advSearchFields"][] = "lastDate";
$tdatamst_sell_coupon[".advSearchFields"][] = "url";
$tdatamst_sell_coupon[".advSearchFields"][] = "img";
$tdatamst_sell_coupon[".advSearchFields"][] = "ttl";

$tdatamst_sell_coupon[".tableType"] = "list";

$tdatamst_sell_coupon[".printerPageOrientation"] = 0;
$tdatamst_sell_coupon[".nPrinterPageScale"] = 100;

$tdatamst_sell_coupon[".nPrinterSplitRecords"] = 40;

$tdatamst_sell_coupon[".nPrinterPDFSplitRecords"] = 40;



$tdatamst_sell_coupon[".geocodingEnabled"] = false;





$tdatamst_sell_coupon[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamst_sell_coupon[".pageSize"] = 100;

$tdatamst_sell_coupon[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamst_sell_coupon[".strOrderBy"] = $tstrOrderBy;

$tdatamst_sell_coupon[".orderindexes"] = array();

$tdatamst_sell_coupon[".sqlHead"] = "SELECT id,  	mall_name,  	startDate,  	lastDate,  	url,  	img,  	ttl";
$tdatamst_sell_coupon[".sqlFrom"] = "FROM mst_sell_coupon";
$tdatamst_sell_coupon[".sqlWhereExpr"] = "";
$tdatamst_sell_coupon[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamst_sell_coupon[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamst_sell_coupon[".arrGroupsPerPage"] = $arrGPP;

$tdatamst_sell_coupon[".highlightSearchResults"] = true;

$tableKeysmst_sell_coupon = array();
$tableKeysmst_sell_coupon[] = "id";
$tdatamst_sell_coupon[".Keys"] = $tableKeysmst_sell_coupon;

$tdatamst_sell_coupon[".listFields"] = array();
$tdatamst_sell_coupon[".listFields"][] = "id";
$tdatamst_sell_coupon[".listFields"][] = "startDate";
$tdatamst_sell_coupon[".listFields"][] = "lastDate";
$tdatamst_sell_coupon[".listFields"][] = "mall_name";
$tdatamst_sell_coupon[".listFields"][] = "ttl";
$tdatamst_sell_coupon[".listFields"][] = "url";
$tdatamst_sell_coupon[".listFields"][] = "img";

$tdatamst_sell_coupon[".hideMobileList"] = array();


$tdatamst_sell_coupon[".viewFields"] = array();

$tdatamst_sell_coupon[".addFields"] = array();

$tdatamst_sell_coupon[".masterListFields"] = array();
$tdatamst_sell_coupon[".masterListFields"][] = "id";
$tdatamst_sell_coupon[".masterListFields"][] = "mall_name";
$tdatamst_sell_coupon[".masterListFields"][] = "startDate";
$tdatamst_sell_coupon[".masterListFields"][] = "lastDate";
$tdatamst_sell_coupon[".masterListFields"][] = "url";
$tdatamst_sell_coupon[".masterListFields"][] = "img";
$tdatamst_sell_coupon[".masterListFields"][] = "ttl";

$tdatamst_sell_coupon[".inlineAddFields"] = array();
$tdatamst_sell_coupon[".inlineAddFields"][] = "startDate";
$tdatamst_sell_coupon[".inlineAddFields"][] = "lastDate";
$tdatamst_sell_coupon[".inlineAddFields"][] = "mall_name";
$tdatamst_sell_coupon[".inlineAddFields"][] = "ttl";
$tdatamst_sell_coupon[".inlineAddFields"][] = "url";
$tdatamst_sell_coupon[".inlineAddFields"][] = "img";

$tdatamst_sell_coupon[".editFields"] = array();

$tdatamst_sell_coupon[".inlineEditFields"] = array();
$tdatamst_sell_coupon[".inlineEditFields"][] = "startDate";
$tdatamst_sell_coupon[".inlineEditFields"][] = "lastDate";
$tdatamst_sell_coupon[".inlineEditFields"][] = "mall_name";
$tdatamst_sell_coupon[".inlineEditFields"][] = "ttl";
$tdatamst_sell_coupon[".inlineEditFields"][] = "url";
$tdatamst_sell_coupon[".inlineEditFields"][] = "img";

$tdatamst_sell_coupon[".updateSelectedFields"] = array();


$tdatamst_sell_coupon[".exportFields"] = array();
$tdatamst_sell_coupon[".exportFields"][] = "id";
$tdatamst_sell_coupon[".exportFields"][] = "mall_name";
$tdatamst_sell_coupon[".exportFields"][] = "startDate";
$tdatamst_sell_coupon[".exportFields"][] = "lastDate";
$tdatamst_sell_coupon[".exportFields"][] = "url";
$tdatamst_sell_coupon[".exportFields"][] = "img";
$tdatamst_sell_coupon[".exportFields"][] = "ttl";

$tdatamst_sell_coupon[".importFields"] = array();
$tdatamst_sell_coupon[".importFields"][] = "id";
$tdatamst_sell_coupon[".importFields"][] = "mall_name";
$tdatamst_sell_coupon[".importFields"][] = "startDate";
$tdatamst_sell_coupon[".importFields"][] = "lastDate";
$tdatamst_sell_coupon[".importFields"][] = "url";
$tdatamst_sell_coupon[".importFields"][] = "img";
$tdatamst_sell_coupon[".importFields"][] = "ttl";

$tdatamst_sell_coupon[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "mst_sell_coupon";
	$fdata["Label"] = GetFieldLabel("mst_sell_coupon","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
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




	$tdatamst_sell_coupon["id"] = $fdata;
//	mall_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "mall_name";
	$fdata["GoodName"] = "mall_name";
	$fdata["ownerTable"] = "mst_sell_coupon";
	$fdata["Label"] = GetFieldLabel("mst_sell_coupon","mall_name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "mall_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mall_name";

	
	
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




	$tdatamst_sell_coupon["mall_name"] = $fdata;
//	startDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "startDate";
	$fdata["GoodName"] = "startDate";
	$fdata["ownerTable"] = "mst_sell_coupon";
	$fdata["Label"] = GetFieldLabel("mst_sell_coupon","startDate");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "startDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "startDate";

	
	
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

	
	
		$edata["DateEditType"] = 11;
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




	$tdatamst_sell_coupon["startDate"] = $fdata;
//	lastDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "lastDate";
	$fdata["GoodName"] = "lastDate";
	$fdata["ownerTable"] = "mst_sell_coupon";
	$fdata["Label"] = GetFieldLabel("mst_sell_coupon","lastDate");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "lastDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "lastDate";

	
	
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

	
	
		$edata["DateEditType"] = 11;
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




	$tdatamst_sell_coupon["lastDate"] = $fdata;
//	url
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "url";
	$fdata["GoodName"] = "url";
	$fdata["ownerTable"] = "mst_sell_coupon";
	$fdata["Label"] = GetFieldLabel("mst_sell_coupon","url");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "url";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "url";

	
	
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




	$tdatamst_sell_coupon["url"] = $fdata;
//	img
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "img";
	$fdata["GoodName"] = "img";
	$fdata["ownerTable"] = "mst_sell_coupon";
	$fdata["Label"] = GetFieldLabel("mst_sell_coupon","img");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "img";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "img";

	
	
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




	$tdatamst_sell_coupon["img"] = $fdata;
//	ttl
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "ttl";
	$fdata["GoodName"] = "ttl";
	$fdata["ownerTable"] = "mst_sell_coupon";
	$fdata["Label"] = GetFieldLabel("mst_sell_coupon","ttl");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ttl";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ttl";

	
	
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




	$tdatamst_sell_coupon["ttl"] = $fdata;


$tables_data["mst_sell_coupon"]=&$tdatamst_sell_coupon;
$field_labels["mst_sell_coupon"] = &$fieldLabelsmst_sell_coupon;
$fieldToolTips["mst_sell_coupon"] = &$fieldToolTipsmst_sell_coupon;
$placeHolders["mst_sell_coupon"] = &$placeHoldersmst_sell_coupon;
$page_titles["mst_sell_coupon"] = &$pageTitlesmst_sell_coupon;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mst_sell_coupon"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mst_sell_coupon"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mst_sell_coupon()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	mall_name,  	startDate,  	lastDate,  	url,  	img,  	ttl";
$proto0["m_strFrom"] = "FROM mst_sell_coupon";
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
	"m_strTable" => "mst_sell_coupon",
	"m_srcTableName" => "mst_sell_coupon"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "mst_sell_coupon";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "mall_name",
	"m_strTable" => "mst_sell_coupon",
	"m_srcTableName" => "mst_sell_coupon"
));

$proto8["m_sql"] = "mall_name";
$proto8["m_srcTableName"] = "mst_sell_coupon";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "startDate",
	"m_strTable" => "mst_sell_coupon",
	"m_srcTableName" => "mst_sell_coupon"
));

$proto10["m_sql"] = "startDate";
$proto10["m_srcTableName"] = "mst_sell_coupon";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "lastDate",
	"m_strTable" => "mst_sell_coupon",
	"m_srcTableName" => "mst_sell_coupon"
));

$proto12["m_sql"] = "lastDate";
$proto12["m_srcTableName"] = "mst_sell_coupon";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "url",
	"m_strTable" => "mst_sell_coupon",
	"m_srcTableName" => "mst_sell_coupon"
));

$proto14["m_sql"] = "url";
$proto14["m_srcTableName"] = "mst_sell_coupon";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "img",
	"m_strTable" => "mst_sell_coupon",
	"m_srcTableName" => "mst_sell_coupon"
));

$proto16["m_sql"] = "img";
$proto16["m_srcTableName"] = "mst_sell_coupon";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "ttl",
	"m_strTable" => "mst_sell_coupon",
	"m_srcTableName" => "mst_sell_coupon"
));

$proto18["m_sql"] = "ttl";
$proto18["m_srcTableName"] = "mst_sell_coupon";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "mst_sell_coupon";
$proto21["m_srcTableName"] = "mst_sell_coupon";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "id";
$proto21["m_columns"][] = "mall_name";
$proto21["m_columns"][] = "startDate";
$proto21["m_columns"][] = "lastDate";
$proto21["m_columns"][] = "url";
$proto21["m_columns"][] = "img";
$proto21["m_columns"][] = "ttl";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "mst_sell_coupon";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "mst_sell_coupon";
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
$proto0["m_srcTableName"]="mst_sell_coupon";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mst_sell_coupon = createSqlQuery_mst_sell_coupon();


	
		;

							

$tdatamst_sell_coupon[".sqlquery"] = $queryData_mst_sell_coupon;

$tableEvents["mst_sell_coupon"] = new eventsBase;
$tdatamst_sell_coupon[".hasEvents"] = false;

?>