<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamst_wasabi_brand = array();
	$tdatamst_wasabi_brand[".truncateText"] = true;
	$tdatamst_wasabi_brand[".NumberOfChars"] = 80;
	$tdatamst_wasabi_brand[".ShortName"] = "mst_wasabi_brand";
	$tdatamst_wasabi_brand[".OwnerID"] = "";
	$tdatamst_wasabi_brand[".OriginalTable"] = "mst_wasabi_brand";

//	field labels
$fieldLabelsmst_wasabi_brand = array();
$fieldToolTipsmst_wasabi_brand = array();
$pageTitlesmst_wasabi_brand = array();
$placeHoldersmst_wasabi_brand = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmst_wasabi_brand["Japanese"] = array();
	$fieldToolTipsmst_wasabi_brand["Japanese"] = array();
	$placeHoldersmst_wasabi_brand["Japanese"] = array();
	$pageTitlesmst_wasabi_brand["Japanese"] = array();
	$fieldLabelsmst_wasabi_brand["Japanese"]["id"] = "Id";
	$fieldToolTipsmst_wasabi_brand["Japanese"]["id"] = "";
	$placeHoldersmst_wasabi_brand["Japanese"]["id"] = "";
	$fieldLabelsmst_wasabi_brand["Japanese"]["category"] = "Category";
	$fieldToolTipsmst_wasabi_brand["Japanese"]["category"] = "";
	$placeHoldersmst_wasabi_brand["Japanese"]["category"] = "";
	$fieldLabelsmst_wasabi_brand["Japanese"]["data1"] = "Data1";
	$fieldToolTipsmst_wasabi_brand["Japanese"]["data1"] = "";
	$placeHoldersmst_wasabi_brand["Japanese"]["data1"] = "";
	$fieldLabelsmst_wasabi_brand["Japanese"]["data2"] = "Data2";
	$fieldToolTipsmst_wasabi_brand["Japanese"]["data2"] = "";
	$placeHoldersmst_wasabi_brand["Japanese"]["data2"] = "";
	$fieldLabelsmst_wasabi_brand["Japanese"]["data3"] = "Data3";
	$fieldToolTipsmst_wasabi_brand["Japanese"]["data3"] = "";
	$placeHoldersmst_wasabi_brand["Japanese"]["data3"] = "";
	$fieldLabelsmst_wasabi_brand["Japanese"]["data4"] = "Data4";
	$fieldToolTipsmst_wasabi_brand["Japanese"]["data4"] = "";
	$placeHoldersmst_wasabi_brand["Japanese"]["data4"] = "";
	$fieldLabelsmst_wasabi_brand["Japanese"]["data5"] = "Data5";
	$fieldToolTipsmst_wasabi_brand["Japanese"]["data5"] = "";
	$placeHoldersmst_wasabi_brand["Japanese"]["data5"] = "";
	$fieldLabelsmst_wasabi_brand["Japanese"]["data6"] = "Data6";
	$fieldToolTipsmst_wasabi_brand["Japanese"]["data6"] = "";
	$placeHoldersmst_wasabi_brand["Japanese"]["data6"] = "";
	$fieldLabelsmst_wasabi_brand["Japanese"]["data7"] = "Data7";
	$fieldToolTipsmst_wasabi_brand["Japanese"]["data7"] = "";
	$placeHoldersmst_wasabi_brand["Japanese"]["data7"] = "";
	$fieldLabelsmst_wasabi_brand["Japanese"]["data8"] = "Data8";
	$fieldToolTipsmst_wasabi_brand["Japanese"]["data8"] = "";
	$placeHoldersmst_wasabi_brand["Japanese"]["data8"] = "";
	$fieldLabelsmst_wasabi_brand["Japanese"]["data9"] = "Data9";
	$fieldToolTipsmst_wasabi_brand["Japanese"]["data9"] = "";
	$placeHoldersmst_wasabi_brand["Japanese"]["data9"] = "";
	$fieldLabelsmst_wasabi_brand["Japanese"]["data10"] = "Data10";
	$fieldToolTipsmst_wasabi_brand["Japanese"]["data10"] = "";
	$placeHoldersmst_wasabi_brand["Japanese"]["data10"] = "";
	$fieldLabelsmst_wasabi_brand["Japanese"]["rank"] = "Rank";
	$fieldToolTipsmst_wasabi_brand["Japanese"]["rank"] = "";
	$placeHoldersmst_wasabi_brand["Japanese"]["rank"] = "";
	if (count($fieldToolTipsmst_wasabi_brand["Japanese"]))
		$tdatamst_wasabi_brand[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmst_wasabi_brand[""] = array();
	$fieldToolTipsmst_wasabi_brand[""] = array();
	$placeHoldersmst_wasabi_brand[""] = array();
	$pageTitlesmst_wasabi_brand[""] = array();
	$fieldLabelsmst_wasabi_brand[""]["id"] = "Id";
	$fieldToolTipsmst_wasabi_brand[""]["id"] = "";
	$placeHoldersmst_wasabi_brand[""]["id"] = "";
	$fieldLabelsmst_wasabi_brand[""]["category"] = "Category";
	$fieldToolTipsmst_wasabi_brand[""]["category"] = "";
	$placeHoldersmst_wasabi_brand[""]["category"] = "";
	$fieldLabelsmst_wasabi_brand[""]["data1"] = "Data1";
	$fieldToolTipsmst_wasabi_brand[""]["data1"] = "";
	$placeHoldersmst_wasabi_brand[""]["data1"] = "";
	$fieldLabelsmst_wasabi_brand[""]["data2"] = "Data2";
	$fieldToolTipsmst_wasabi_brand[""]["data2"] = "";
	$placeHoldersmst_wasabi_brand[""]["data2"] = "";
	$fieldLabelsmst_wasabi_brand[""]["data3"] = "Data3";
	$fieldToolTipsmst_wasabi_brand[""]["data3"] = "";
	$placeHoldersmst_wasabi_brand[""]["data3"] = "";
	$fieldLabelsmst_wasabi_brand[""]["data4"] = "Data4";
	$fieldToolTipsmst_wasabi_brand[""]["data4"] = "";
	$placeHoldersmst_wasabi_brand[""]["data4"] = "";
	$fieldLabelsmst_wasabi_brand[""]["data5"] = "Data5";
	$fieldToolTipsmst_wasabi_brand[""]["data5"] = "";
	$placeHoldersmst_wasabi_brand[""]["data5"] = "";
	$fieldLabelsmst_wasabi_brand[""]["data6"] = "Data6";
	$fieldToolTipsmst_wasabi_brand[""]["data6"] = "";
	$placeHoldersmst_wasabi_brand[""]["data6"] = "";
	$fieldLabelsmst_wasabi_brand[""]["data7"] = "Data7";
	$fieldToolTipsmst_wasabi_brand[""]["data7"] = "";
	$placeHoldersmst_wasabi_brand[""]["data7"] = "";
	$fieldLabelsmst_wasabi_brand[""]["data8"] = "Data8";
	$fieldToolTipsmst_wasabi_brand[""]["data8"] = "";
	$placeHoldersmst_wasabi_brand[""]["data8"] = "";
	$fieldLabelsmst_wasabi_brand[""]["data9"] = "Data9";
	$fieldToolTipsmst_wasabi_brand[""]["data9"] = "";
	$placeHoldersmst_wasabi_brand[""]["data9"] = "";
	$fieldLabelsmst_wasabi_brand[""]["data10"] = "Data10";
	$fieldToolTipsmst_wasabi_brand[""]["data10"] = "";
	$placeHoldersmst_wasabi_brand[""]["data10"] = "";
	$fieldLabelsmst_wasabi_brand[""]["rank"] = "Rank";
	$fieldToolTipsmst_wasabi_brand[""]["rank"] = "";
	$placeHoldersmst_wasabi_brand[""]["rank"] = "";
	if (count($fieldToolTipsmst_wasabi_brand[""]))
		$tdatamst_wasabi_brand[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmst_wasabi_brand["English"] = array();
	$fieldToolTipsmst_wasabi_brand["English"] = array();
	$placeHoldersmst_wasabi_brand["English"] = array();
	$pageTitlesmst_wasabi_brand["English"] = array();
	$fieldLabelsmst_wasabi_brand["English"]["id"] = "Id";
	$fieldToolTipsmst_wasabi_brand["English"]["id"] = "";
	$placeHoldersmst_wasabi_brand["English"]["id"] = "";
	$fieldLabelsmst_wasabi_brand["English"]["category"] = "Category";
	$fieldToolTipsmst_wasabi_brand["English"]["category"] = "";
	$placeHoldersmst_wasabi_brand["English"]["category"] = "";
	$fieldLabelsmst_wasabi_brand["English"]["data1"] = "Data1";
	$fieldToolTipsmst_wasabi_brand["English"]["data1"] = "";
	$placeHoldersmst_wasabi_brand["English"]["data1"] = "";
	$fieldLabelsmst_wasabi_brand["English"]["data2"] = "Data2";
	$fieldToolTipsmst_wasabi_brand["English"]["data2"] = "";
	$placeHoldersmst_wasabi_brand["English"]["data2"] = "";
	$fieldLabelsmst_wasabi_brand["English"]["data3"] = "Data3";
	$fieldToolTipsmst_wasabi_brand["English"]["data3"] = "";
	$placeHoldersmst_wasabi_brand["English"]["data3"] = "";
	$fieldLabelsmst_wasabi_brand["English"]["data4"] = "Data4";
	$fieldToolTipsmst_wasabi_brand["English"]["data4"] = "";
	$placeHoldersmst_wasabi_brand["English"]["data4"] = "";
	$fieldLabelsmst_wasabi_brand["English"]["data5"] = "Data5";
	$fieldToolTipsmst_wasabi_brand["English"]["data5"] = "";
	$placeHoldersmst_wasabi_brand["English"]["data5"] = "";
	$fieldLabelsmst_wasabi_brand["English"]["data6"] = "Data6";
	$fieldToolTipsmst_wasabi_brand["English"]["data6"] = "";
	$placeHoldersmst_wasabi_brand["English"]["data6"] = "";
	$fieldLabelsmst_wasabi_brand["English"]["data7"] = "Data7";
	$fieldToolTipsmst_wasabi_brand["English"]["data7"] = "";
	$placeHoldersmst_wasabi_brand["English"]["data7"] = "";
	$fieldLabelsmst_wasabi_brand["English"]["data8"] = "Data8";
	$fieldToolTipsmst_wasabi_brand["English"]["data8"] = "";
	$placeHoldersmst_wasabi_brand["English"]["data8"] = "";
	$fieldLabelsmst_wasabi_brand["English"]["data9"] = "Data9";
	$fieldToolTipsmst_wasabi_brand["English"]["data9"] = "";
	$placeHoldersmst_wasabi_brand["English"]["data9"] = "";
	$fieldLabelsmst_wasabi_brand["English"]["data10"] = "Data10";
	$fieldToolTipsmst_wasabi_brand["English"]["data10"] = "";
	$placeHoldersmst_wasabi_brand["English"]["data10"] = "";
	$fieldLabelsmst_wasabi_brand["English"]["rank"] = "Rank";
	$fieldToolTipsmst_wasabi_brand["English"]["rank"] = "";
	$placeHoldersmst_wasabi_brand["English"]["rank"] = "";
	if (count($fieldToolTipsmst_wasabi_brand["English"]))
		$tdatamst_wasabi_brand[".isUseToolTips"] = true;
}


	$tdatamst_wasabi_brand[".NCSearch"] = true;



$tdatamst_wasabi_brand[".shortTableName"] = "mst_wasabi_brand";
$tdatamst_wasabi_brand[".nSecOptions"] = 0;
$tdatamst_wasabi_brand[".recsPerRowPrint"] = 1;
$tdatamst_wasabi_brand[".mainTableOwnerID"] = "";
$tdatamst_wasabi_brand[".moveNext"] = 1;
$tdatamst_wasabi_brand[".entityType"] = 0;

$tdatamst_wasabi_brand[".strOriginalTableName"] = "mst_wasabi_brand";

	



$tdatamst_wasabi_brand[".showAddInPopup"] = false;

$tdatamst_wasabi_brand[".showEditInPopup"] = false;

$tdatamst_wasabi_brand[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamst_wasabi_brand[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamst_wasabi_brand[".fieldsForRegister"] = array();

$tdatamst_wasabi_brand[".listAjax"] = false;

	$tdatamst_wasabi_brand[".audit"] = true;

	$tdatamst_wasabi_brand[".locking"] = false;



$tdatamst_wasabi_brand[".list"] = true;

$tdatamst_wasabi_brand[".inlineEdit"] = true;


$tdatamst_wasabi_brand[".reorderRecordsByHeader"] = true;



$tdatamst_wasabi_brand[".inlineAdd"] = true;

$tdatamst_wasabi_brand[".import"] = true;




$tdatamst_wasabi_brand[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamst_wasabi_brand[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamst_wasabi_brand[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamst_wasabi_brand[".searchSaving"] = false;
//

$tdatamst_wasabi_brand[".showSearchPanel"] = true;
		$tdatamst_wasabi_brand[".flexibleSearch"] = true;

$tdatamst_wasabi_brand[".isUseAjaxSuggest"] = true;

$tdatamst_wasabi_brand[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatamst_wasabi_brand[".ajaxCodeSnippetAdded"] = false;

$tdatamst_wasabi_brand[".buttonsAdded"] = false;

$tdatamst_wasabi_brand[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamst_wasabi_brand[".isUseTimeForSearch"] = false;





$tdatamst_wasabi_brand[".allSearchFields"] = array();
$tdatamst_wasabi_brand[".filterFields"] = array();
$tdatamst_wasabi_brand[".requiredSearchFields"] = array();

$tdatamst_wasabi_brand[".allSearchFields"][] = "id";
	$tdatamst_wasabi_brand[".allSearchFields"][] = "category";
	$tdatamst_wasabi_brand[".allSearchFields"][] = "data1";
	$tdatamst_wasabi_brand[".allSearchFields"][] = "data2";
	$tdatamst_wasabi_brand[".allSearchFields"][] = "data3";
	$tdatamst_wasabi_brand[".allSearchFields"][] = "data4";
	$tdatamst_wasabi_brand[".allSearchFields"][] = "data5";
	$tdatamst_wasabi_brand[".allSearchFields"][] = "data6";
	$tdatamst_wasabi_brand[".allSearchFields"][] = "data7";
	$tdatamst_wasabi_brand[".allSearchFields"][] = "data8";
	$tdatamst_wasabi_brand[".allSearchFields"][] = "data9";
	$tdatamst_wasabi_brand[".allSearchFields"][] = "data10";
	$tdatamst_wasabi_brand[".allSearchFields"][] = "rank";
	

$tdatamst_wasabi_brand[".googleLikeFields"] = array();
$tdatamst_wasabi_brand[".googleLikeFields"][] = "id";
$tdatamst_wasabi_brand[".googleLikeFields"][] = "category";
$tdatamst_wasabi_brand[".googleLikeFields"][] = "data1";
$tdatamst_wasabi_brand[".googleLikeFields"][] = "data2";
$tdatamst_wasabi_brand[".googleLikeFields"][] = "data3";
$tdatamst_wasabi_brand[".googleLikeFields"][] = "data4";
$tdatamst_wasabi_brand[".googleLikeFields"][] = "data5";
$tdatamst_wasabi_brand[".googleLikeFields"][] = "data6";
$tdatamst_wasabi_brand[".googleLikeFields"][] = "data7";
$tdatamst_wasabi_brand[".googleLikeFields"][] = "data8";
$tdatamst_wasabi_brand[".googleLikeFields"][] = "data9";
$tdatamst_wasabi_brand[".googleLikeFields"][] = "data10";
$tdatamst_wasabi_brand[".googleLikeFields"][] = "rank";


$tdatamst_wasabi_brand[".advSearchFields"] = array();
$tdatamst_wasabi_brand[".advSearchFields"][] = "id";
$tdatamst_wasabi_brand[".advSearchFields"][] = "category";
$tdatamst_wasabi_brand[".advSearchFields"][] = "data1";
$tdatamst_wasabi_brand[".advSearchFields"][] = "data2";
$tdatamst_wasabi_brand[".advSearchFields"][] = "data3";
$tdatamst_wasabi_brand[".advSearchFields"][] = "data4";
$tdatamst_wasabi_brand[".advSearchFields"][] = "data5";
$tdatamst_wasabi_brand[".advSearchFields"][] = "data6";
$tdatamst_wasabi_brand[".advSearchFields"][] = "data7";
$tdatamst_wasabi_brand[".advSearchFields"][] = "data8";
$tdatamst_wasabi_brand[".advSearchFields"][] = "data9";
$tdatamst_wasabi_brand[".advSearchFields"][] = "data10";
$tdatamst_wasabi_brand[".advSearchFields"][] = "rank";

$tdatamst_wasabi_brand[".tableType"] = "list";

$tdatamst_wasabi_brand[".printerPageOrientation"] = 0;
$tdatamst_wasabi_brand[".nPrinterPageScale"] = 100;

$tdatamst_wasabi_brand[".nPrinterSplitRecords"] = 40;

$tdatamst_wasabi_brand[".nPrinterPDFSplitRecords"] = 40;



$tdatamst_wasabi_brand[".geocodingEnabled"] = false;





$tdatamst_wasabi_brand[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamst_wasabi_brand[".pageSize"] = 100;

$tdatamst_wasabi_brand[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamst_wasabi_brand[".strOrderBy"] = $tstrOrderBy;

$tdatamst_wasabi_brand[".orderindexes"] = array();

$tdatamst_wasabi_brand[".sqlHead"] = "SELECT id,  	category,  	data1,  	data2,  	data3,  	data4,  	data5,  	data6,  	data7,  	data8,  	data9,  	data10,  	rank";
$tdatamst_wasabi_brand[".sqlFrom"] = "FROM mst_wasabi_brand";
$tdatamst_wasabi_brand[".sqlWhereExpr"] = "";
$tdatamst_wasabi_brand[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamst_wasabi_brand[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamst_wasabi_brand[".arrGroupsPerPage"] = $arrGPP;

$tdatamst_wasabi_brand[".highlightSearchResults"] = true;

$tableKeysmst_wasabi_brand = array();
$tableKeysmst_wasabi_brand[] = "id";
$tdatamst_wasabi_brand[".Keys"] = $tableKeysmst_wasabi_brand;

$tdatamst_wasabi_brand[".listFields"] = array();
$tdatamst_wasabi_brand[".listFields"][] = "id";
$tdatamst_wasabi_brand[".listFields"][] = "category";
$tdatamst_wasabi_brand[".listFields"][] = "data1";
$tdatamst_wasabi_brand[".listFields"][] = "data2";
$tdatamst_wasabi_brand[".listFields"][] = "data3";
$tdatamst_wasabi_brand[".listFields"][] = "data4";
$tdatamst_wasabi_brand[".listFields"][] = "data5";
$tdatamst_wasabi_brand[".listFields"][] = "data6";
$tdatamst_wasabi_brand[".listFields"][] = "data7";
$tdatamst_wasabi_brand[".listFields"][] = "data8";
$tdatamst_wasabi_brand[".listFields"][] = "data9";
$tdatamst_wasabi_brand[".listFields"][] = "data10";
$tdatamst_wasabi_brand[".listFields"][] = "rank";

$tdatamst_wasabi_brand[".hideMobileList"] = array();


$tdatamst_wasabi_brand[".viewFields"] = array();

$tdatamst_wasabi_brand[".addFields"] = array();

$tdatamst_wasabi_brand[".masterListFields"] = array();
$tdatamst_wasabi_brand[".masterListFields"][] = "id";
$tdatamst_wasabi_brand[".masterListFields"][] = "category";
$tdatamst_wasabi_brand[".masterListFields"][] = "data1";
$tdatamst_wasabi_brand[".masterListFields"][] = "data2";
$tdatamst_wasabi_brand[".masterListFields"][] = "data3";
$tdatamst_wasabi_brand[".masterListFields"][] = "data4";
$tdatamst_wasabi_brand[".masterListFields"][] = "data5";
$tdatamst_wasabi_brand[".masterListFields"][] = "data6";
$tdatamst_wasabi_brand[".masterListFields"][] = "data7";
$tdatamst_wasabi_brand[".masterListFields"][] = "data8";
$tdatamst_wasabi_brand[".masterListFields"][] = "data9";
$tdatamst_wasabi_brand[".masterListFields"][] = "data10";
$tdatamst_wasabi_brand[".masterListFields"][] = "rank";

$tdatamst_wasabi_brand[".inlineAddFields"] = array();
$tdatamst_wasabi_brand[".inlineAddFields"][] = "category";
$tdatamst_wasabi_brand[".inlineAddFields"][] = "data1";
$tdatamst_wasabi_brand[".inlineAddFields"][] = "data2";
$tdatamst_wasabi_brand[".inlineAddFields"][] = "data3";
$tdatamst_wasabi_brand[".inlineAddFields"][] = "data4";
$tdatamst_wasabi_brand[".inlineAddFields"][] = "data5";
$tdatamst_wasabi_brand[".inlineAddFields"][] = "data6";
$tdatamst_wasabi_brand[".inlineAddFields"][] = "data7";
$tdatamst_wasabi_brand[".inlineAddFields"][] = "data8";
$tdatamst_wasabi_brand[".inlineAddFields"][] = "data9";
$tdatamst_wasabi_brand[".inlineAddFields"][] = "data10";
$tdatamst_wasabi_brand[".inlineAddFields"][] = "rank";

$tdatamst_wasabi_brand[".editFields"] = array();

$tdatamst_wasabi_brand[".inlineEditFields"] = array();
$tdatamst_wasabi_brand[".inlineEditFields"][] = "category";
$tdatamst_wasabi_brand[".inlineEditFields"][] = "data1";
$tdatamst_wasabi_brand[".inlineEditFields"][] = "data2";
$tdatamst_wasabi_brand[".inlineEditFields"][] = "data3";
$tdatamst_wasabi_brand[".inlineEditFields"][] = "data4";
$tdatamst_wasabi_brand[".inlineEditFields"][] = "data5";
$tdatamst_wasabi_brand[".inlineEditFields"][] = "data6";
$tdatamst_wasabi_brand[".inlineEditFields"][] = "data7";
$tdatamst_wasabi_brand[".inlineEditFields"][] = "data8";
$tdatamst_wasabi_brand[".inlineEditFields"][] = "data9";
$tdatamst_wasabi_brand[".inlineEditFields"][] = "data10";
$tdatamst_wasabi_brand[".inlineEditFields"][] = "rank";

$tdatamst_wasabi_brand[".updateSelectedFields"] = array();


$tdatamst_wasabi_brand[".exportFields"] = array();

$tdatamst_wasabi_brand[".importFields"] = array();
$tdatamst_wasabi_brand[".importFields"][] = "id";
$tdatamst_wasabi_brand[".importFields"][] = "category";
$tdatamst_wasabi_brand[".importFields"][] = "data1";
$tdatamst_wasabi_brand[".importFields"][] = "data2";
$tdatamst_wasabi_brand[".importFields"][] = "data3";
$tdatamst_wasabi_brand[".importFields"][] = "data4";
$tdatamst_wasabi_brand[".importFields"][] = "data5";
$tdatamst_wasabi_brand[".importFields"][] = "data6";
$tdatamst_wasabi_brand[".importFields"][] = "data7";
$tdatamst_wasabi_brand[".importFields"][] = "data8";
$tdatamst_wasabi_brand[".importFields"][] = "data9";
$tdatamst_wasabi_brand[".importFields"][] = "data10";
$tdatamst_wasabi_brand[".importFields"][] = "rank";

$tdatamst_wasabi_brand[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "mst_wasabi_brand";
	$fdata["Label"] = GetFieldLabel("mst_wasabi_brand","id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdatamst_wasabi_brand["id"] = $fdata;
//	category
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "category";
	$fdata["GoodName"] = "category";
	$fdata["ownerTable"] = "mst_wasabi_brand";
	$fdata["Label"] = GetFieldLabel("mst_wasabi_brand","category");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdatamst_wasabi_brand["category"] = $fdata;
//	data1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "data1";
	$fdata["GoodName"] = "data1";
	$fdata["ownerTable"] = "mst_wasabi_brand";
	$fdata["Label"] = GetFieldLabel("mst_wasabi_brand","data1");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdatamst_wasabi_brand["data1"] = $fdata;
//	data2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "data2";
	$fdata["GoodName"] = "data2";
	$fdata["ownerTable"] = "mst_wasabi_brand";
	$fdata["Label"] = GetFieldLabel("mst_wasabi_brand","data2");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdatamst_wasabi_brand["data2"] = $fdata;
//	data3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "data3";
	$fdata["GoodName"] = "data3";
	$fdata["ownerTable"] = "mst_wasabi_brand";
	$fdata["Label"] = GetFieldLabel("mst_wasabi_brand","data3");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdatamst_wasabi_brand["data3"] = $fdata;
//	data4
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "data4";
	$fdata["GoodName"] = "data4";
	$fdata["ownerTable"] = "mst_wasabi_brand";
	$fdata["Label"] = GetFieldLabel("mst_wasabi_brand","data4");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdatamst_wasabi_brand["data4"] = $fdata;
//	data5
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "data5";
	$fdata["GoodName"] = "data5";
	$fdata["ownerTable"] = "mst_wasabi_brand";
	$fdata["Label"] = GetFieldLabel("mst_wasabi_brand","data5");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdatamst_wasabi_brand["data5"] = $fdata;
//	data6
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "data6";
	$fdata["GoodName"] = "data6";
	$fdata["ownerTable"] = "mst_wasabi_brand";
	$fdata["Label"] = GetFieldLabel("mst_wasabi_brand","data6");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdatamst_wasabi_brand["data6"] = $fdata;
//	data7
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "data7";
	$fdata["GoodName"] = "data7";
	$fdata["ownerTable"] = "mst_wasabi_brand";
	$fdata["Label"] = GetFieldLabel("mst_wasabi_brand","data7");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdatamst_wasabi_brand["data7"] = $fdata;
//	data8
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "data8";
	$fdata["GoodName"] = "data8";
	$fdata["ownerTable"] = "mst_wasabi_brand";
	$fdata["Label"] = GetFieldLabel("mst_wasabi_brand","data8");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdatamst_wasabi_brand["data8"] = $fdata;
//	data9
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "data9";
	$fdata["GoodName"] = "data9";
	$fdata["ownerTable"] = "mst_wasabi_brand";
	$fdata["Label"] = GetFieldLabel("mst_wasabi_brand","data9");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdatamst_wasabi_brand["data9"] = $fdata;
//	data10
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "data10";
	$fdata["GoodName"] = "data10";
	$fdata["ownerTable"] = "mst_wasabi_brand";
	$fdata["Label"] = GetFieldLabel("mst_wasabi_brand","data10");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdatamst_wasabi_brand["data10"] = $fdata;
//	rank
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "rank";
	$fdata["GoodName"] = "rank";
	$fdata["ownerTable"] = "mst_wasabi_brand";
	$fdata["Label"] = GetFieldLabel("mst_wasabi_brand","rank");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdatamst_wasabi_brand["rank"] = $fdata;


$tables_data["mst_wasabi_brand"]=&$tdatamst_wasabi_brand;
$field_labels["mst_wasabi_brand"] = &$fieldLabelsmst_wasabi_brand;
$fieldToolTips["mst_wasabi_brand"] = &$fieldToolTipsmst_wasabi_brand;
$placeHolders["mst_wasabi_brand"] = &$placeHoldersmst_wasabi_brand;
$page_titles["mst_wasabi_brand"] = &$pageTitlesmst_wasabi_brand;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mst_wasabi_brand"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mst_wasabi_brand"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mst_wasabi_brand()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	category,  	data1,  	data2,  	data3,  	data4,  	data5,  	data6,  	data7,  	data8,  	data9,  	data10,  	rank";
$proto0["m_strFrom"] = "FROM mst_wasabi_brand";
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
	"m_strTable" => "mst_wasabi_brand",
	"m_srcTableName" => "mst_wasabi_brand"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "mst_wasabi_brand";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "category",
	"m_strTable" => "mst_wasabi_brand",
	"m_srcTableName" => "mst_wasabi_brand"
));

$proto8["m_sql"] = "category";
$proto8["m_srcTableName"] = "mst_wasabi_brand";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "data1",
	"m_strTable" => "mst_wasabi_brand",
	"m_srcTableName" => "mst_wasabi_brand"
));

$proto10["m_sql"] = "data1";
$proto10["m_srcTableName"] = "mst_wasabi_brand";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "data2",
	"m_strTable" => "mst_wasabi_brand",
	"m_srcTableName" => "mst_wasabi_brand"
));

$proto12["m_sql"] = "data2";
$proto12["m_srcTableName"] = "mst_wasabi_brand";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "data3",
	"m_strTable" => "mst_wasabi_brand",
	"m_srcTableName" => "mst_wasabi_brand"
));

$proto14["m_sql"] = "data3";
$proto14["m_srcTableName"] = "mst_wasabi_brand";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "data4",
	"m_strTable" => "mst_wasabi_brand",
	"m_srcTableName" => "mst_wasabi_brand"
));

$proto16["m_sql"] = "data4";
$proto16["m_srcTableName"] = "mst_wasabi_brand";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "data5",
	"m_strTable" => "mst_wasabi_brand",
	"m_srcTableName" => "mst_wasabi_brand"
));

$proto18["m_sql"] = "data5";
$proto18["m_srcTableName"] = "mst_wasabi_brand";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "data6",
	"m_strTable" => "mst_wasabi_brand",
	"m_srcTableName" => "mst_wasabi_brand"
));

$proto20["m_sql"] = "data6";
$proto20["m_srcTableName"] = "mst_wasabi_brand";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "data7",
	"m_strTable" => "mst_wasabi_brand",
	"m_srcTableName" => "mst_wasabi_brand"
));

$proto22["m_sql"] = "data7";
$proto22["m_srcTableName"] = "mst_wasabi_brand";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "data8",
	"m_strTable" => "mst_wasabi_brand",
	"m_srcTableName" => "mst_wasabi_brand"
));

$proto24["m_sql"] = "data8";
$proto24["m_srcTableName"] = "mst_wasabi_brand";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "data9",
	"m_strTable" => "mst_wasabi_brand",
	"m_srcTableName" => "mst_wasabi_brand"
));

$proto26["m_sql"] = "data9";
$proto26["m_srcTableName"] = "mst_wasabi_brand";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "data10",
	"m_strTable" => "mst_wasabi_brand",
	"m_srcTableName" => "mst_wasabi_brand"
));

$proto28["m_sql"] = "data10";
$proto28["m_srcTableName"] = "mst_wasabi_brand";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "rank",
	"m_strTable" => "mst_wasabi_brand",
	"m_srcTableName" => "mst_wasabi_brand"
));

$proto30["m_sql"] = "rank";
$proto30["m_srcTableName"] = "mst_wasabi_brand";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto32=array();
$proto32["m_link"] = "SQLL_MAIN";
			$proto33=array();
$proto33["m_strName"] = "mst_wasabi_brand";
$proto33["m_srcTableName"] = "mst_wasabi_brand";
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
$proto32["m_sql"] = "mst_wasabi_brand";
$proto32["m_alias"] = "";
$proto32["m_srcTableName"] = "mst_wasabi_brand";
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
$proto0["m_srcTableName"]="mst_wasabi_brand";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mst_wasabi_brand = createSqlQuery_mst_wasabi_brand();


	
		;

													

$tdatamst_wasabi_brand[".sqlquery"] = $queryData_mst_wasabi_brand;

$tableEvents["mst_wasabi_brand"] = new eventsBase;
$tdatamst_wasabi_brand[".hasEvents"] = false;

?>