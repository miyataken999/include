<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamst_wasabi = array();
	$tdatamst_wasabi[".truncateText"] = true;
	$tdatamst_wasabi[".NumberOfChars"] = 80;
	$tdatamst_wasabi[".ShortName"] = "mst_wasabi";
	$tdatamst_wasabi[".OwnerID"] = "";
	$tdatamst_wasabi[".OriginalTable"] = "mst_wasabi";

//	field labels
$fieldLabelsmst_wasabi = array();
$fieldToolTipsmst_wasabi = array();
$pageTitlesmst_wasabi = array();
$placeHoldersmst_wasabi = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmst_wasabi["Japanese"] = array();
	$fieldToolTipsmst_wasabi["Japanese"] = array();
	$placeHoldersmst_wasabi["Japanese"] = array();
	$pageTitlesmst_wasabi["Japanese"] = array();
	$fieldLabelsmst_wasabi["Japanese"]["id"] = "Id";
	$fieldToolTipsmst_wasabi["Japanese"]["id"] = "";
	$placeHoldersmst_wasabi["Japanese"]["id"] = "";
	$fieldLabelsmst_wasabi["Japanese"]["category"] = "Category";
	$fieldToolTipsmst_wasabi["Japanese"]["category"] = "";
	$placeHoldersmst_wasabi["Japanese"]["category"] = "";
	$fieldLabelsmst_wasabi["Japanese"]["data1"] = "Data1";
	$fieldToolTipsmst_wasabi["Japanese"]["data1"] = "";
	$placeHoldersmst_wasabi["Japanese"]["data1"] = "";
	$fieldLabelsmst_wasabi["Japanese"]["data2"] = "Data2";
	$fieldToolTipsmst_wasabi["Japanese"]["data2"] = "";
	$placeHoldersmst_wasabi["Japanese"]["data2"] = "";
	$fieldLabelsmst_wasabi["Japanese"]["data3"] = "Data3";
	$fieldToolTipsmst_wasabi["Japanese"]["data3"] = "";
	$placeHoldersmst_wasabi["Japanese"]["data3"] = "";
	$fieldLabelsmst_wasabi["Japanese"]["data4"] = "Data4";
	$fieldToolTipsmst_wasabi["Japanese"]["data4"] = "";
	$placeHoldersmst_wasabi["Japanese"]["data4"] = "";
	$fieldLabelsmst_wasabi["Japanese"]["data5"] = "Data5";
	$fieldToolTipsmst_wasabi["Japanese"]["data5"] = "";
	$placeHoldersmst_wasabi["Japanese"]["data5"] = "";
	$fieldLabelsmst_wasabi["Japanese"]["data6"] = "Data6";
	$fieldToolTipsmst_wasabi["Japanese"]["data6"] = "";
	$placeHoldersmst_wasabi["Japanese"]["data6"] = "";
	$fieldLabelsmst_wasabi["Japanese"]["data7"] = "Data7";
	$fieldToolTipsmst_wasabi["Japanese"]["data7"] = "";
	$placeHoldersmst_wasabi["Japanese"]["data7"] = "";
	$fieldLabelsmst_wasabi["Japanese"]["data8"] = "Data8";
	$fieldToolTipsmst_wasabi["Japanese"]["data8"] = "";
	$placeHoldersmst_wasabi["Japanese"]["data8"] = "";
	$fieldLabelsmst_wasabi["Japanese"]["data9"] = "Data9";
	$fieldToolTipsmst_wasabi["Japanese"]["data9"] = "";
	$placeHoldersmst_wasabi["Japanese"]["data9"] = "";
	$fieldLabelsmst_wasabi["Japanese"]["data10"] = "Data10";
	$fieldToolTipsmst_wasabi["Japanese"]["data10"] = "";
	$placeHoldersmst_wasabi["Japanese"]["data10"] = "";
	$fieldLabelsmst_wasabi["Japanese"]["rank"] = "Rank";
	$fieldToolTipsmst_wasabi["Japanese"]["rank"] = "";
	$placeHoldersmst_wasabi["Japanese"]["rank"] = "";
	if (count($fieldToolTipsmst_wasabi["Japanese"]))
		$tdatamst_wasabi[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmst_wasabi[""] = array();
	$fieldToolTipsmst_wasabi[""] = array();
	$placeHoldersmst_wasabi[""] = array();
	$pageTitlesmst_wasabi[""] = array();
	$fieldLabelsmst_wasabi[""]["id"] = "Id";
	$fieldToolTipsmst_wasabi[""]["id"] = "";
	$placeHoldersmst_wasabi[""]["id"] = "";
	$fieldLabelsmst_wasabi[""]["category"] = "Category";
	$fieldToolTipsmst_wasabi[""]["category"] = "";
	$placeHoldersmst_wasabi[""]["category"] = "";
	$fieldLabelsmst_wasabi[""]["data1"] = "Data1";
	$fieldToolTipsmst_wasabi[""]["data1"] = "";
	$placeHoldersmst_wasabi[""]["data1"] = "";
	$fieldLabelsmst_wasabi[""]["data2"] = "Data2";
	$fieldToolTipsmst_wasabi[""]["data2"] = "";
	$placeHoldersmst_wasabi[""]["data2"] = "";
	$fieldLabelsmst_wasabi[""]["data3"] = "Data3";
	$fieldToolTipsmst_wasabi[""]["data3"] = "";
	$placeHoldersmst_wasabi[""]["data3"] = "";
	$fieldLabelsmst_wasabi[""]["data4"] = "Data4";
	$fieldToolTipsmst_wasabi[""]["data4"] = "";
	$placeHoldersmst_wasabi[""]["data4"] = "";
	$fieldLabelsmst_wasabi[""]["data5"] = "Data5";
	$fieldToolTipsmst_wasabi[""]["data5"] = "";
	$placeHoldersmst_wasabi[""]["data5"] = "";
	$fieldLabelsmst_wasabi[""]["data6"] = "Data6";
	$fieldToolTipsmst_wasabi[""]["data6"] = "";
	$placeHoldersmst_wasabi[""]["data6"] = "";
	$fieldLabelsmst_wasabi[""]["data7"] = "Data7";
	$fieldToolTipsmst_wasabi[""]["data7"] = "";
	$placeHoldersmst_wasabi[""]["data7"] = "";
	$fieldLabelsmst_wasabi[""]["data8"] = "Data8";
	$fieldToolTipsmst_wasabi[""]["data8"] = "";
	$placeHoldersmst_wasabi[""]["data8"] = "";
	$fieldLabelsmst_wasabi[""]["data9"] = "Data9";
	$fieldToolTipsmst_wasabi[""]["data9"] = "";
	$placeHoldersmst_wasabi[""]["data9"] = "";
	$fieldLabelsmst_wasabi[""]["data10"] = "Data10";
	$fieldToolTipsmst_wasabi[""]["data10"] = "";
	$placeHoldersmst_wasabi[""]["data10"] = "";
	$fieldLabelsmst_wasabi[""]["rank"] = "Rank";
	$fieldToolTipsmst_wasabi[""]["rank"] = "";
	$placeHoldersmst_wasabi[""]["rank"] = "";
	if (count($fieldToolTipsmst_wasabi[""]))
		$tdatamst_wasabi[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmst_wasabi["English"] = array();
	$fieldToolTipsmst_wasabi["English"] = array();
	$placeHoldersmst_wasabi["English"] = array();
	$pageTitlesmst_wasabi["English"] = array();
	$fieldLabelsmst_wasabi["English"]["id"] = "Id";
	$fieldToolTipsmst_wasabi["English"]["id"] = "";
	$placeHoldersmst_wasabi["English"]["id"] = "";
	$fieldLabelsmst_wasabi["English"]["category"] = "Category";
	$fieldToolTipsmst_wasabi["English"]["category"] = "";
	$placeHoldersmst_wasabi["English"]["category"] = "";
	$fieldLabelsmst_wasabi["English"]["data1"] = "Data1";
	$fieldToolTipsmst_wasabi["English"]["data1"] = "";
	$placeHoldersmst_wasabi["English"]["data1"] = "";
	$fieldLabelsmst_wasabi["English"]["data2"] = "Data2";
	$fieldToolTipsmst_wasabi["English"]["data2"] = "";
	$placeHoldersmst_wasabi["English"]["data2"] = "";
	$fieldLabelsmst_wasabi["English"]["data3"] = "Data3";
	$fieldToolTipsmst_wasabi["English"]["data3"] = "";
	$placeHoldersmst_wasabi["English"]["data3"] = "";
	$fieldLabelsmst_wasabi["English"]["data4"] = "Data4";
	$fieldToolTipsmst_wasabi["English"]["data4"] = "";
	$placeHoldersmst_wasabi["English"]["data4"] = "";
	$fieldLabelsmst_wasabi["English"]["data5"] = "Data5";
	$fieldToolTipsmst_wasabi["English"]["data5"] = "";
	$placeHoldersmst_wasabi["English"]["data5"] = "";
	$fieldLabelsmst_wasabi["English"]["data6"] = "Data6";
	$fieldToolTipsmst_wasabi["English"]["data6"] = "";
	$placeHoldersmst_wasabi["English"]["data6"] = "";
	$fieldLabelsmst_wasabi["English"]["data7"] = "Data7";
	$fieldToolTipsmst_wasabi["English"]["data7"] = "";
	$placeHoldersmst_wasabi["English"]["data7"] = "";
	$fieldLabelsmst_wasabi["English"]["data8"] = "Data8";
	$fieldToolTipsmst_wasabi["English"]["data8"] = "";
	$placeHoldersmst_wasabi["English"]["data8"] = "";
	$fieldLabelsmst_wasabi["English"]["data9"] = "Data9";
	$fieldToolTipsmst_wasabi["English"]["data9"] = "";
	$placeHoldersmst_wasabi["English"]["data9"] = "";
	$fieldLabelsmst_wasabi["English"]["data10"] = "Data10";
	$fieldToolTipsmst_wasabi["English"]["data10"] = "";
	$placeHoldersmst_wasabi["English"]["data10"] = "";
	$fieldLabelsmst_wasabi["English"]["rank"] = "Rank";
	$fieldToolTipsmst_wasabi["English"]["rank"] = "";
	$placeHoldersmst_wasabi["English"]["rank"] = "";
	if (count($fieldToolTipsmst_wasabi["English"]))
		$tdatamst_wasabi[".isUseToolTips"] = true;
}


	$tdatamst_wasabi[".NCSearch"] = true;



$tdatamst_wasabi[".shortTableName"] = "mst_wasabi";
$tdatamst_wasabi[".nSecOptions"] = 0;
$tdatamst_wasabi[".recsPerRowPrint"] = 1;
$tdatamst_wasabi[".mainTableOwnerID"] = "";
$tdatamst_wasabi[".moveNext"] = 1;
$tdatamst_wasabi[".entityType"] = 0;

$tdatamst_wasabi[".strOriginalTableName"] = "mst_wasabi";

	



$tdatamst_wasabi[".showAddInPopup"] = false;

$tdatamst_wasabi[".showEditInPopup"] = false;

$tdatamst_wasabi[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamst_wasabi[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamst_wasabi[".fieldsForRegister"] = array();

$tdatamst_wasabi[".listAjax"] = false;

	$tdatamst_wasabi[".audit"] = true;

	$tdatamst_wasabi[".locking"] = false;



$tdatamst_wasabi[".list"] = true;

$tdatamst_wasabi[".inlineEdit"] = true;


$tdatamst_wasabi[".reorderRecordsByHeader"] = true;



$tdatamst_wasabi[".inlineAdd"] = true;

$tdatamst_wasabi[".import"] = true;

$tdatamst_wasabi[".exportTo"] = true;


$tdatamst_wasabi[".delete"] = true;

$tdatamst_wasabi[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamst_wasabi[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamst_wasabi[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamst_wasabi[".searchSaving"] = false;
//

$tdatamst_wasabi[".showSearchPanel"] = true;
		$tdatamst_wasabi[".flexibleSearch"] = true;

$tdatamst_wasabi[".isUseAjaxSuggest"] = true;

$tdatamst_wasabi[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatamst_wasabi[".ajaxCodeSnippetAdded"] = false;

$tdatamst_wasabi[".buttonsAdded"] = false;

$tdatamst_wasabi[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamst_wasabi[".isUseTimeForSearch"] = false;





$tdatamst_wasabi[".allSearchFields"] = array();
$tdatamst_wasabi[".filterFields"] = array();
$tdatamst_wasabi[".requiredSearchFields"] = array();

$tdatamst_wasabi[".allSearchFields"][] = "id";
	$tdatamst_wasabi[".allSearchFields"][] = "category";
	$tdatamst_wasabi[".allSearchFields"][] = "data1";
	$tdatamst_wasabi[".allSearchFields"][] = "data2";
	$tdatamst_wasabi[".allSearchFields"][] = "data3";
	$tdatamst_wasabi[".allSearchFields"][] = "data4";
	$tdatamst_wasabi[".allSearchFields"][] = "data5";
	$tdatamst_wasabi[".allSearchFields"][] = "data6";
	$tdatamst_wasabi[".allSearchFields"][] = "data7";
	$tdatamst_wasabi[".allSearchFields"][] = "data8";
	$tdatamst_wasabi[".allSearchFields"][] = "data9";
	$tdatamst_wasabi[".allSearchFields"][] = "data10";
	$tdatamst_wasabi[".allSearchFields"][] = "rank";
	

$tdatamst_wasabi[".googleLikeFields"] = array();
$tdatamst_wasabi[".googleLikeFields"][] = "id";
$tdatamst_wasabi[".googleLikeFields"][] = "category";
$tdatamst_wasabi[".googleLikeFields"][] = "data1";
$tdatamst_wasabi[".googleLikeFields"][] = "data2";
$tdatamst_wasabi[".googleLikeFields"][] = "data3";
$tdatamst_wasabi[".googleLikeFields"][] = "data4";
$tdatamst_wasabi[".googleLikeFields"][] = "data5";
$tdatamst_wasabi[".googleLikeFields"][] = "data6";
$tdatamst_wasabi[".googleLikeFields"][] = "data7";
$tdatamst_wasabi[".googleLikeFields"][] = "data8";
$tdatamst_wasabi[".googleLikeFields"][] = "data9";
$tdatamst_wasabi[".googleLikeFields"][] = "data10";
$tdatamst_wasabi[".googleLikeFields"][] = "rank";


$tdatamst_wasabi[".advSearchFields"] = array();
$tdatamst_wasabi[".advSearchFields"][] = "id";
$tdatamst_wasabi[".advSearchFields"][] = "category";
$tdatamst_wasabi[".advSearchFields"][] = "data1";
$tdatamst_wasabi[".advSearchFields"][] = "data2";
$tdatamst_wasabi[".advSearchFields"][] = "data3";
$tdatamst_wasabi[".advSearchFields"][] = "data4";
$tdatamst_wasabi[".advSearchFields"][] = "data5";
$tdatamst_wasabi[".advSearchFields"][] = "data6";
$tdatamst_wasabi[".advSearchFields"][] = "data7";
$tdatamst_wasabi[".advSearchFields"][] = "data8";
$tdatamst_wasabi[".advSearchFields"][] = "data9";
$tdatamst_wasabi[".advSearchFields"][] = "data10";
$tdatamst_wasabi[".advSearchFields"][] = "rank";

$tdatamst_wasabi[".tableType"] = "list";

$tdatamst_wasabi[".printerPageOrientation"] = 0;
$tdatamst_wasabi[".nPrinterPageScale"] = 100;

$tdatamst_wasabi[".nPrinterSplitRecords"] = 40;

$tdatamst_wasabi[".nPrinterPDFSplitRecords"] = 40;



$tdatamst_wasabi[".geocodingEnabled"] = false;





$tdatamst_wasabi[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamst_wasabi[".pageSize"] = 100;

$tdatamst_wasabi[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY id DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamst_wasabi[".strOrderBy"] = $tstrOrderBy;

$tdatamst_wasabi[".orderindexes"] = array();
$tdatamst_wasabi[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "`id`");

$tdatamst_wasabi[".sqlHead"] = "SELECT id,  category,  data1,  data2,  data3,  data4,  data5,  data6,  data7,  data8,  data9,  data10,  rank";
$tdatamst_wasabi[".sqlFrom"] = "FROM mst_wasabi";
$tdatamst_wasabi[".sqlWhereExpr"] = "";
$tdatamst_wasabi[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamst_wasabi[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamst_wasabi[".arrGroupsPerPage"] = $arrGPP;

$tdatamst_wasabi[".highlightSearchResults"] = true;

$tableKeysmst_wasabi = array();
$tableKeysmst_wasabi[] = "id";
$tdatamst_wasabi[".Keys"] = $tableKeysmst_wasabi;

$tdatamst_wasabi[".listFields"] = array();
$tdatamst_wasabi[".listFields"][] = "id";
$tdatamst_wasabi[".listFields"][] = "category";
$tdatamst_wasabi[".listFields"][] = "data1";
$tdatamst_wasabi[".listFields"][] = "data2";
$tdatamst_wasabi[".listFields"][] = "data3";
$tdatamst_wasabi[".listFields"][] = "data4";
$tdatamst_wasabi[".listFields"][] = "data5";
$tdatamst_wasabi[".listFields"][] = "data6";
$tdatamst_wasabi[".listFields"][] = "data7";
$tdatamst_wasabi[".listFields"][] = "data8";
$tdatamst_wasabi[".listFields"][] = "data9";
$tdatamst_wasabi[".listFields"][] = "data10";
$tdatamst_wasabi[".listFields"][] = "rank";

$tdatamst_wasabi[".hideMobileList"] = array();


$tdatamst_wasabi[".viewFields"] = array();

$tdatamst_wasabi[".addFields"] = array();

$tdatamst_wasabi[".masterListFields"] = array();
$tdatamst_wasabi[".masterListFields"][] = "id";
$tdatamst_wasabi[".masterListFields"][] = "category";
$tdatamst_wasabi[".masterListFields"][] = "data1";
$tdatamst_wasabi[".masterListFields"][] = "data2";
$tdatamst_wasabi[".masterListFields"][] = "data3";
$tdatamst_wasabi[".masterListFields"][] = "data4";
$tdatamst_wasabi[".masterListFields"][] = "data5";
$tdatamst_wasabi[".masterListFields"][] = "data6";
$tdatamst_wasabi[".masterListFields"][] = "data7";
$tdatamst_wasabi[".masterListFields"][] = "data8";
$tdatamst_wasabi[".masterListFields"][] = "data9";
$tdatamst_wasabi[".masterListFields"][] = "data10";
$tdatamst_wasabi[".masterListFields"][] = "rank";

$tdatamst_wasabi[".inlineAddFields"] = array();
$tdatamst_wasabi[".inlineAddFields"][] = "category";
$tdatamst_wasabi[".inlineAddFields"][] = "data1";
$tdatamst_wasabi[".inlineAddFields"][] = "data2";
$tdatamst_wasabi[".inlineAddFields"][] = "data3";
$tdatamst_wasabi[".inlineAddFields"][] = "data4";
$tdatamst_wasabi[".inlineAddFields"][] = "data5";
$tdatamst_wasabi[".inlineAddFields"][] = "data6";
$tdatamst_wasabi[".inlineAddFields"][] = "data7";
$tdatamst_wasabi[".inlineAddFields"][] = "data8";
$tdatamst_wasabi[".inlineAddFields"][] = "data9";
$tdatamst_wasabi[".inlineAddFields"][] = "data10";
$tdatamst_wasabi[".inlineAddFields"][] = "rank";

$tdatamst_wasabi[".editFields"] = array();

$tdatamst_wasabi[".inlineEditFields"] = array();
$tdatamst_wasabi[".inlineEditFields"][] = "category";
$tdatamst_wasabi[".inlineEditFields"][] = "data1";
$tdatamst_wasabi[".inlineEditFields"][] = "data2";
$tdatamst_wasabi[".inlineEditFields"][] = "data3";
$tdatamst_wasabi[".inlineEditFields"][] = "data4";
$tdatamst_wasabi[".inlineEditFields"][] = "data5";
$tdatamst_wasabi[".inlineEditFields"][] = "data6";
$tdatamst_wasabi[".inlineEditFields"][] = "data7";
$tdatamst_wasabi[".inlineEditFields"][] = "data8";
$tdatamst_wasabi[".inlineEditFields"][] = "data9";
$tdatamst_wasabi[".inlineEditFields"][] = "data10";
$tdatamst_wasabi[".inlineEditFields"][] = "rank";

$tdatamst_wasabi[".updateSelectedFields"] = array();


$tdatamst_wasabi[".exportFields"] = array();
$tdatamst_wasabi[".exportFields"][] = "id";
$tdatamst_wasabi[".exportFields"][] = "category";
$tdatamst_wasabi[".exportFields"][] = "data1";
$tdatamst_wasabi[".exportFields"][] = "data2";
$tdatamst_wasabi[".exportFields"][] = "data3";
$tdatamst_wasabi[".exportFields"][] = "data4";
$tdatamst_wasabi[".exportFields"][] = "data5";
$tdatamst_wasabi[".exportFields"][] = "data6";
$tdatamst_wasabi[".exportFields"][] = "data7";
$tdatamst_wasabi[".exportFields"][] = "data8";
$tdatamst_wasabi[".exportFields"][] = "data9";
$tdatamst_wasabi[".exportFields"][] = "data10";
$tdatamst_wasabi[".exportFields"][] = "rank";

$tdatamst_wasabi[".importFields"] = array();
$tdatamst_wasabi[".importFields"][] = "id";
$tdatamst_wasabi[".importFields"][] = "category";
$tdatamst_wasabi[".importFields"][] = "data1";
$tdatamst_wasabi[".importFields"][] = "data2";
$tdatamst_wasabi[".importFields"][] = "data3";
$tdatamst_wasabi[".importFields"][] = "data4";
$tdatamst_wasabi[".importFields"][] = "data5";
$tdatamst_wasabi[".importFields"][] = "data6";
$tdatamst_wasabi[".importFields"][] = "data7";
$tdatamst_wasabi[".importFields"][] = "data8";
$tdatamst_wasabi[".importFields"][] = "data9";
$tdatamst_wasabi[".importFields"][] = "data10";
$tdatamst_wasabi[".importFields"][] = "rank";

$tdatamst_wasabi[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "mst_wasabi";
	$fdata["Label"] = GetFieldLabel("mst_wasabi","id");
	$fdata["FieldType"] = 3;

	
	
	
			
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




	$tdatamst_wasabi["id"] = $fdata;
//	category
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "category";
	$fdata["GoodName"] = "category";
	$fdata["ownerTable"] = "mst_wasabi";
	$fdata["Label"] = GetFieldLabel("mst_wasabi","category");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "category";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "category";

	
	
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




	$tdatamst_wasabi["category"] = $fdata;
//	data1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "data1";
	$fdata["GoodName"] = "data1";
	$fdata["ownerTable"] = "mst_wasabi";
	$fdata["Label"] = GetFieldLabel("mst_wasabi","data1");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "data1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "data1";

	
	
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




	$tdatamst_wasabi["data1"] = $fdata;
//	data2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "data2";
	$fdata["GoodName"] = "data2";
	$fdata["ownerTable"] = "mst_wasabi";
	$fdata["Label"] = GetFieldLabel("mst_wasabi","data2");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "data2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "data2";

	
	
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




	$tdatamst_wasabi["data2"] = $fdata;
//	data3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "data3";
	$fdata["GoodName"] = "data3";
	$fdata["ownerTable"] = "mst_wasabi";
	$fdata["Label"] = GetFieldLabel("mst_wasabi","data3");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "data3";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "data3";

	
	
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




	$tdatamst_wasabi["data3"] = $fdata;
//	data4
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "data4";
	$fdata["GoodName"] = "data4";
	$fdata["ownerTable"] = "mst_wasabi";
	$fdata["Label"] = GetFieldLabel("mst_wasabi","data4");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "data4";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "data4";

	
	
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




	$tdatamst_wasabi["data4"] = $fdata;
//	data5
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "data5";
	$fdata["GoodName"] = "data5";
	$fdata["ownerTable"] = "mst_wasabi";
	$fdata["Label"] = GetFieldLabel("mst_wasabi","data5");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "data5";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "data5";

	
	
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




	$tdatamst_wasabi["data5"] = $fdata;
//	data6
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "data6";
	$fdata["GoodName"] = "data6";
	$fdata["ownerTable"] = "mst_wasabi";
	$fdata["Label"] = GetFieldLabel("mst_wasabi","data6");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "data6";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "data6";

	
	
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




	$tdatamst_wasabi["data6"] = $fdata;
//	data7
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "data7";
	$fdata["GoodName"] = "data7";
	$fdata["ownerTable"] = "mst_wasabi";
	$fdata["Label"] = GetFieldLabel("mst_wasabi","data7");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "data7";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "data7";

	
	
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




	$tdatamst_wasabi["data7"] = $fdata;
//	data8
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "data8";
	$fdata["GoodName"] = "data8";
	$fdata["ownerTable"] = "mst_wasabi";
	$fdata["Label"] = GetFieldLabel("mst_wasabi","data8");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "data8";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "data8";

	
	
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




	$tdatamst_wasabi["data8"] = $fdata;
//	data9
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "data9";
	$fdata["GoodName"] = "data9";
	$fdata["ownerTable"] = "mst_wasabi";
	$fdata["Label"] = GetFieldLabel("mst_wasabi","data9");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "data9";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "data9";

	
	
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




	$tdatamst_wasabi["data9"] = $fdata;
//	data10
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "data10";
	$fdata["GoodName"] = "data10";
	$fdata["ownerTable"] = "mst_wasabi";
	$fdata["Label"] = GetFieldLabel("mst_wasabi","data10");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "data10";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "data10";

	
	
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




	$tdatamst_wasabi["data10"] = $fdata;
//	rank
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "rank";
	$fdata["GoodName"] = "rank";
	$fdata["ownerTable"] = "mst_wasabi";
	$fdata["Label"] = GetFieldLabel("mst_wasabi","rank");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "rank";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rank";

	
	
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




	$tdatamst_wasabi["rank"] = $fdata;


$tables_data["mst_wasabi"]=&$tdatamst_wasabi;
$field_labels["mst_wasabi"] = &$fieldLabelsmst_wasabi;
$fieldToolTips["mst_wasabi"] = &$fieldToolTipsmst_wasabi;
$placeHolders["mst_wasabi"] = &$placeHoldersmst_wasabi;
$page_titles["mst_wasabi"] = &$pageTitlesmst_wasabi;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mst_wasabi"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mst_wasabi"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mst_wasabi()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  category,  data1,  data2,  data3,  data4,  data5,  data6,  data7,  data8,  data9,  data10,  rank";
$proto0["m_strFrom"] = "FROM mst_wasabi";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY id DESC";
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
	"m_strTable" => "mst_wasabi",
	"m_srcTableName" => "mst_wasabi"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "mst_wasabi";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "category",
	"m_strTable" => "mst_wasabi",
	"m_srcTableName" => "mst_wasabi"
));

$proto8["m_sql"] = "category";
$proto8["m_srcTableName"] = "mst_wasabi";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "data1",
	"m_strTable" => "mst_wasabi",
	"m_srcTableName" => "mst_wasabi"
));

$proto10["m_sql"] = "data1";
$proto10["m_srcTableName"] = "mst_wasabi";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "data2",
	"m_strTable" => "mst_wasabi",
	"m_srcTableName" => "mst_wasabi"
));

$proto12["m_sql"] = "data2";
$proto12["m_srcTableName"] = "mst_wasabi";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "data3",
	"m_strTable" => "mst_wasabi",
	"m_srcTableName" => "mst_wasabi"
));

$proto14["m_sql"] = "data3";
$proto14["m_srcTableName"] = "mst_wasabi";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "data4",
	"m_strTable" => "mst_wasabi",
	"m_srcTableName" => "mst_wasabi"
));

$proto16["m_sql"] = "data4";
$proto16["m_srcTableName"] = "mst_wasabi";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "data5",
	"m_strTable" => "mst_wasabi",
	"m_srcTableName" => "mst_wasabi"
));

$proto18["m_sql"] = "data5";
$proto18["m_srcTableName"] = "mst_wasabi";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "data6",
	"m_strTable" => "mst_wasabi",
	"m_srcTableName" => "mst_wasabi"
));

$proto20["m_sql"] = "data6";
$proto20["m_srcTableName"] = "mst_wasabi";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "data7",
	"m_strTable" => "mst_wasabi",
	"m_srcTableName" => "mst_wasabi"
));

$proto22["m_sql"] = "data7";
$proto22["m_srcTableName"] = "mst_wasabi";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "data8",
	"m_strTable" => "mst_wasabi",
	"m_srcTableName" => "mst_wasabi"
));

$proto24["m_sql"] = "data8";
$proto24["m_srcTableName"] = "mst_wasabi";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "data9",
	"m_strTable" => "mst_wasabi",
	"m_srcTableName" => "mst_wasabi"
));

$proto26["m_sql"] = "data9";
$proto26["m_srcTableName"] = "mst_wasabi";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "data10",
	"m_strTable" => "mst_wasabi",
	"m_srcTableName" => "mst_wasabi"
));

$proto28["m_sql"] = "data10";
$proto28["m_srcTableName"] = "mst_wasabi";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "rank",
	"m_strTable" => "mst_wasabi",
	"m_srcTableName" => "mst_wasabi"
));

$proto30["m_sql"] = "rank";
$proto30["m_srcTableName"] = "mst_wasabi";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto32=array();
$proto32["m_link"] = "SQLL_MAIN";
			$proto33=array();
$proto33["m_strName"] = "mst_wasabi";
$proto33["m_srcTableName"] = "mst_wasabi";
$proto33["m_columns"] = array();
$proto33["m_columns"][] = "id";
$proto33["m_columns"][] = "category";
$proto33["m_columns"][] = "data1";
$proto33["m_columns"][] = "data2";
$proto33["m_columns"][] = "data3";
$proto33["m_columns"][] = "data4";
$proto33["m_columns"][] = "data5";
$proto33["m_columns"][] = "data6";
$proto33["m_columns"][] = "data7";
$proto33["m_columns"][] = "data8";
$proto33["m_columns"][] = "data9";
$proto33["m_columns"][] = "data10";
$proto33["m_columns"][] = "rank";
$obj = new SQLTable($proto33);

$proto32["m_table"] = $obj;
$proto32["m_sql"] = "mst_wasabi";
$proto32["m_alias"] = "";
$proto32["m_srcTableName"] = "mst_wasabi";
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
	"m_strTable" => "mst_wasabi",
	"m_srcTableName" => "mst_wasabi"
));

$proto36["m_column"]=$obj;
$proto36["m_bAsc"] = 0;
$proto36["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto36);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="mst_wasabi";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mst_wasabi = createSqlQuery_mst_wasabi();


	
		;

													

$tdatamst_wasabi[".sqlquery"] = $queryData_mst_wasabi;

$tableEvents["mst_wasabi"] = new eventsBase;
$tdatamst_wasabi[".hasEvents"] = false;

?>