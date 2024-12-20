<?php
require_once(getabspath("classes/cipherer.php"));




$tdataKEN_ALL = array();
	$tdataKEN_ALL[".truncateText"] = true;
	$tdataKEN_ALL[".NumberOfChars"] = 80;
	$tdataKEN_ALL[".ShortName"] = "KEN_ALL";
	$tdataKEN_ALL[".OwnerID"] = "";
	$tdataKEN_ALL[".OriginalTable"] = "KEN_ALL";

//	field labels
$fieldLabelsKEN_ALL = array();
$fieldToolTipsKEN_ALL = array();
$pageTitlesKEN_ALL = array();
$placeHoldersKEN_ALL = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsKEN_ALL["Japanese"] = array();
	$fieldToolTipsKEN_ALL["Japanese"] = array();
	$placeHoldersKEN_ALL["Japanese"] = array();
	$pageTitlesKEN_ALL["Japanese"] = array();
	$fieldLabelsKEN_ALL["Japanese"]["A"] = "A";
	$fieldToolTipsKEN_ALL["Japanese"]["A"] = "";
	$placeHoldersKEN_ALL["Japanese"]["A"] = "";
	$fieldLabelsKEN_ALL["Japanese"]["B"] = "B";
	$fieldToolTipsKEN_ALL["Japanese"]["B"] = "";
	$placeHoldersKEN_ALL["Japanese"]["B"] = "";
	$fieldLabelsKEN_ALL["Japanese"]["C"] = "C";
	$fieldToolTipsKEN_ALL["Japanese"]["C"] = "";
	$placeHoldersKEN_ALL["Japanese"]["C"] = "";
	$fieldLabelsKEN_ALL["Japanese"]["D"] = "D";
	$fieldToolTipsKEN_ALL["Japanese"]["D"] = "";
	$placeHoldersKEN_ALL["Japanese"]["D"] = "";
	$fieldLabelsKEN_ALL["Japanese"]["E"] = "E";
	$fieldToolTipsKEN_ALL["Japanese"]["E"] = "";
	$placeHoldersKEN_ALL["Japanese"]["E"] = "";
	$fieldLabelsKEN_ALL["Japanese"]["F"] = "F";
	$fieldToolTipsKEN_ALL["Japanese"]["F"] = "";
	$placeHoldersKEN_ALL["Japanese"]["F"] = "";
	$fieldLabelsKEN_ALL["Japanese"]["G"] = "G";
	$fieldToolTipsKEN_ALL["Japanese"]["G"] = "";
	$placeHoldersKEN_ALL["Japanese"]["G"] = "";
	$fieldLabelsKEN_ALL["Japanese"]["H"] = "H";
	$fieldToolTipsKEN_ALL["Japanese"]["H"] = "";
	$placeHoldersKEN_ALL["Japanese"]["H"] = "";
	$fieldLabelsKEN_ALL["Japanese"]["I"] = "I";
	$fieldToolTipsKEN_ALL["Japanese"]["I"] = "";
	$placeHoldersKEN_ALL["Japanese"]["I"] = "";
	$fieldLabelsKEN_ALL["Japanese"]["J"] = "J";
	$fieldToolTipsKEN_ALL["Japanese"]["J"] = "";
	$placeHoldersKEN_ALL["Japanese"]["J"] = "";
	$fieldLabelsKEN_ALL["Japanese"]["K"] = "K";
	$fieldToolTipsKEN_ALL["Japanese"]["K"] = "";
	$placeHoldersKEN_ALL["Japanese"]["K"] = "";
	$fieldLabelsKEN_ALL["Japanese"]["L"] = "L";
	$fieldToolTipsKEN_ALL["Japanese"]["L"] = "";
	$placeHoldersKEN_ALL["Japanese"]["L"] = "";
	$fieldLabelsKEN_ALL["Japanese"]["M"] = "M";
	$fieldToolTipsKEN_ALL["Japanese"]["M"] = "";
	$placeHoldersKEN_ALL["Japanese"]["M"] = "";
	$fieldLabelsKEN_ALL["Japanese"]["N"] = "N";
	$fieldToolTipsKEN_ALL["Japanese"]["N"] = "";
	$placeHoldersKEN_ALL["Japanese"]["N"] = "";
	$fieldLabelsKEN_ALL["Japanese"]["O"] = "O";
	$fieldToolTipsKEN_ALL["Japanese"]["O"] = "";
	$placeHoldersKEN_ALL["Japanese"]["O"] = "";
	if (count($fieldToolTipsKEN_ALL["Japanese"]))
		$tdataKEN_ALL[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsKEN_ALL[""] = array();
	$fieldToolTipsKEN_ALL[""] = array();
	$placeHoldersKEN_ALL[""] = array();
	$pageTitlesKEN_ALL[""] = array();
	$fieldLabelsKEN_ALL[""]["A"] = "A";
	$fieldToolTipsKEN_ALL[""]["A"] = "";
	$placeHoldersKEN_ALL[""]["A"] = "";
	$fieldLabelsKEN_ALL[""]["B"] = "B";
	$fieldToolTipsKEN_ALL[""]["B"] = "";
	$placeHoldersKEN_ALL[""]["B"] = "";
	$fieldLabelsKEN_ALL[""]["C"] = "C";
	$fieldToolTipsKEN_ALL[""]["C"] = "";
	$placeHoldersKEN_ALL[""]["C"] = "";
	$fieldLabelsKEN_ALL[""]["D"] = "D";
	$fieldToolTipsKEN_ALL[""]["D"] = "";
	$placeHoldersKEN_ALL[""]["D"] = "";
	$fieldLabelsKEN_ALL[""]["E"] = "E";
	$fieldToolTipsKEN_ALL[""]["E"] = "";
	$placeHoldersKEN_ALL[""]["E"] = "";
	$fieldLabelsKEN_ALL[""]["F"] = "F";
	$fieldToolTipsKEN_ALL[""]["F"] = "";
	$placeHoldersKEN_ALL[""]["F"] = "";
	$fieldLabelsKEN_ALL[""]["G"] = "G";
	$fieldToolTipsKEN_ALL[""]["G"] = "";
	$placeHoldersKEN_ALL[""]["G"] = "";
	$fieldLabelsKEN_ALL[""]["H"] = "H";
	$fieldToolTipsKEN_ALL[""]["H"] = "";
	$placeHoldersKEN_ALL[""]["H"] = "";
	$fieldLabelsKEN_ALL[""]["I"] = "I";
	$fieldToolTipsKEN_ALL[""]["I"] = "";
	$placeHoldersKEN_ALL[""]["I"] = "";
	$fieldLabelsKEN_ALL[""]["J"] = "J";
	$fieldToolTipsKEN_ALL[""]["J"] = "";
	$placeHoldersKEN_ALL[""]["J"] = "";
	$fieldLabelsKEN_ALL[""]["K"] = "K";
	$fieldToolTipsKEN_ALL[""]["K"] = "";
	$placeHoldersKEN_ALL[""]["K"] = "";
	$fieldLabelsKEN_ALL[""]["L"] = "L";
	$fieldToolTipsKEN_ALL[""]["L"] = "";
	$placeHoldersKEN_ALL[""]["L"] = "";
	$fieldLabelsKEN_ALL[""]["M"] = "M";
	$fieldToolTipsKEN_ALL[""]["M"] = "";
	$placeHoldersKEN_ALL[""]["M"] = "";
	$fieldLabelsKEN_ALL[""]["N"] = "N";
	$fieldToolTipsKEN_ALL[""]["N"] = "";
	$placeHoldersKEN_ALL[""]["N"] = "";
	$fieldLabelsKEN_ALL[""]["O"] = "O";
	$fieldToolTipsKEN_ALL[""]["O"] = "";
	$placeHoldersKEN_ALL[""]["O"] = "";
	if (count($fieldToolTipsKEN_ALL[""]))
		$tdataKEN_ALL[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsKEN_ALL["English"] = array();
	$fieldToolTipsKEN_ALL["English"] = array();
	$placeHoldersKEN_ALL["English"] = array();
	$pageTitlesKEN_ALL["English"] = array();
	if (count($fieldToolTipsKEN_ALL["English"]))
		$tdataKEN_ALL[".isUseToolTips"] = true;
}


	$tdataKEN_ALL[".NCSearch"] = true;



$tdataKEN_ALL[".shortTableName"] = "KEN_ALL";
$tdataKEN_ALL[".nSecOptions"] = 0;
$tdataKEN_ALL[".recsPerRowPrint"] = 1;
$tdataKEN_ALL[".mainTableOwnerID"] = "";
$tdataKEN_ALL[".moveNext"] = 1;
$tdataKEN_ALL[".entityType"] = 0;

$tdataKEN_ALL[".strOriginalTableName"] = "KEN_ALL";

	



$tdataKEN_ALL[".showAddInPopup"] = false;

$tdataKEN_ALL[".showEditInPopup"] = false;

$tdataKEN_ALL[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataKEN_ALL[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataKEN_ALL[".fieldsForRegister"] = array();

$tdataKEN_ALL[".listAjax"] = false;

	$tdataKEN_ALL[".audit"] = false;

	$tdataKEN_ALL[".locking"] = false;



$tdataKEN_ALL[".list"] = true;



$tdataKEN_ALL[".reorderRecordsByHeader"] = true;




$tdataKEN_ALL[".import"] = true;

$tdataKEN_ALL[".exportTo"] = true;

$tdataKEN_ALL[".printFriendly"] = true;


$tdataKEN_ALL[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataKEN_ALL[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataKEN_ALL[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataKEN_ALL[".searchSaving"] = false;
//

$tdataKEN_ALL[".showSearchPanel"] = true;
		$tdataKEN_ALL[".flexibleSearch"] = true;

$tdataKEN_ALL[".isUseAjaxSuggest"] = true;

$tdataKEN_ALL[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdataKEN_ALL[".ajaxCodeSnippetAdded"] = false;

$tdataKEN_ALL[".buttonsAdded"] = false;

$tdataKEN_ALL[".addPageEvents"] = false;

// use timepicker for search panel
$tdataKEN_ALL[".isUseTimeForSearch"] = false;





$tdataKEN_ALL[".allSearchFields"] = array();
$tdataKEN_ALL[".filterFields"] = array();
$tdataKEN_ALL[".requiredSearchFields"] = array();

$tdataKEN_ALL[".allSearchFields"][] = "A";
	$tdataKEN_ALL[".allSearchFields"][] = "B";
	$tdataKEN_ALL[".allSearchFields"][] = "C";
	$tdataKEN_ALL[".allSearchFields"][] = "D";
	$tdataKEN_ALL[".allSearchFields"][] = "E";
	$tdataKEN_ALL[".allSearchFields"][] = "F";
	$tdataKEN_ALL[".allSearchFields"][] = "G";
	$tdataKEN_ALL[".allSearchFields"][] = "H";
	$tdataKEN_ALL[".allSearchFields"][] = "I";
	$tdataKEN_ALL[".allSearchFields"][] = "J";
	$tdataKEN_ALL[".allSearchFields"][] = "K";
	$tdataKEN_ALL[".allSearchFields"][] = "L";
	$tdataKEN_ALL[".allSearchFields"][] = "M";
	$tdataKEN_ALL[".allSearchFields"][] = "N";
	$tdataKEN_ALL[".allSearchFields"][] = "O";
	

$tdataKEN_ALL[".googleLikeFields"] = array();
$tdataKEN_ALL[".googleLikeFields"][] = "A";
$tdataKEN_ALL[".googleLikeFields"][] = "B";
$tdataKEN_ALL[".googleLikeFields"][] = "C";
$tdataKEN_ALL[".googleLikeFields"][] = "D";
$tdataKEN_ALL[".googleLikeFields"][] = "E";
$tdataKEN_ALL[".googleLikeFields"][] = "F";
$tdataKEN_ALL[".googleLikeFields"][] = "G";
$tdataKEN_ALL[".googleLikeFields"][] = "H";
$tdataKEN_ALL[".googleLikeFields"][] = "I";
$tdataKEN_ALL[".googleLikeFields"][] = "J";
$tdataKEN_ALL[".googleLikeFields"][] = "K";
$tdataKEN_ALL[".googleLikeFields"][] = "L";
$tdataKEN_ALL[".googleLikeFields"][] = "M";
$tdataKEN_ALL[".googleLikeFields"][] = "N";
$tdataKEN_ALL[".googleLikeFields"][] = "O";


$tdataKEN_ALL[".advSearchFields"] = array();
$tdataKEN_ALL[".advSearchFields"][] = "A";
$tdataKEN_ALL[".advSearchFields"][] = "B";
$tdataKEN_ALL[".advSearchFields"][] = "C";
$tdataKEN_ALL[".advSearchFields"][] = "D";
$tdataKEN_ALL[".advSearchFields"][] = "E";
$tdataKEN_ALL[".advSearchFields"][] = "F";
$tdataKEN_ALL[".advSearchFields"][] = "G";
$tdataKEN_ALL[".advSearchFields"][] = "H";
$tdataKEN_ALL[".advSearchFields"][] = "I";
$tdataKEN_ALL[".advSearchFields"][] = "J";
$tdataKEN_ALL[".advSearchFields"][] = "K";
$tdataKEN_ALL[".advSearchFields"][] = "L";
$tdataKEN_ALL[".advSearchFields"][] = "M";
$tdataKEN_ALL[".advSearchFields"][] = "N";
$tdataKEN_ALL[".advSearchFields"][] = "O";

$tdataKEN_ALL[".tableType"] = "list";

$tdataKEN_ALL[".printerPageOrientation"] = 0;
$tdataKEN_ALL[".nPrinterPageScale"] = 100;

$tdataKEN_ALL[".nPrinterSplitRecords"] = 40;

$tdataKEN_ALL[".nPrinterPDFSplitRecords"] = 40;



$tdataKEN_ALL[".geocodingEnabled"] = false;





$tdataKEN_ALL[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataKEN_ALL[".pageSize"] = 20;

$tdataKEN_ALL[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataKEN_ALL[".strOrderBy"] = $tstrOrderBy;

$tdataKEN_ALL[".orderindexes"] = array();

$tdataKEN_ALL[".sqlHead"] = "SELECT A,  	B,  	C,  	D,  	E,  	F,  	G,  	H,  	I,  	J,  	K,  	L,  	M,  	N,  	O";
$tdataKEN_ALL[".sqlFrom"] = "FROM KEN_ALL";
$tdataKEN_ALL[".sqlWhereExpr"] = "";
$tdataKEN_ALL[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataKEN_ALL[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataKEN_ALL[".arrGroupsPerPage"] = $arrGPP;

$tdataKEN_ALL[".highlightSearchResults"] = true;

$tableKeysKEN_ALL = array();
$tdataKEN_ALL[".Keys"] = $tableKeysKEN_ALL;

$tdataKEN_ALL[".listFields"] = array();
$tdataKEN_ALL[".listFields"][] = "A";
$tdataKEN_ALL[".listFields"][] = "B";
$tdataKEN_ALL[".listFields"][] = "C";
$tdataKEN_ALL[".listFields"][] = "D";
$tdataKEN_ALL[".listFields"][] = "E";
$tdataKEN_ALL[".listFields"][] = "F";
$tdataKEN_ALL[".listFields"][] = "G";
$tdataKEN_ALL[".listFields"][] = "H";
$tdataKEN_ALL[".listFields"][] = "I";
$tdataKEN_ALL[".listFields"][] = "J";
$tdataKEN_ALL[".listFields"][] = "K";
$tdataKEN_ALL[".listFields"][] = "L";
$tdataKEN_ALL[".listFields"][] = "M";
$tdataKEN_ALL[".listFields"][] = "N";
$tdataKEN_ALL[".listFields"][] = "O";

$tdataKEN_ALL[".hideMobileList"] = array();


$tdataKEN_ALL[".viewFields"] = array();

$tdataKEN_ALL[".addFields"] = array();

$tdataKEN_ALL[".masterListFields"] = array();
$tdataKEN_ALL[".masterListFields"][] = "A";
$tdataKEN_ALL[".masterListFields"][] = "B";
$tdataKEN_ALL[".masterListFields"][] = "C";
$tdataKEN_ALL[".masterListFields"][] = "D";
$tdataKEN_ALL[".masterListFields"][] = "E";
$tdataKEN_ALL[".masterListFields"][] = "F";
$tdataKEN_ALL[".masterListFields"][] = "G";
$tdataKEN_ALL[".masterListFields"][] = "H";
$tdataKEN_ALL[".masterListFields"][] = "I";
$tdataKEN_ALL[".masterListFields"][] = "J";
$tdataKEN_ALL[".masterListFields"][] = "K";
$tdataKEN_ALL[".masterListFields"][] = "L";
$tdataKEN_ALL[".masterListFields"][] = "M";
$tdataKEN_ALL[".masterListFields"][] = "N";
$tdataKEN_ALL[".masterListFields"][] = "O";

$tdataKEN_ALL[".inlineAddFields"] = array();

$tdataKEN_ALL[".editFields"] = array();

$tdataKEN_ALL[".inlineEditFields"] = array();

$tdataKEN_ALL[".updateSelectedFields"] = array();


$tdataKEN_ALL[".exportFields"] = array();
$tdataKEN_ALL[".exportFields"][] = "A";
$tdataKEN_ALL[".exportFields"][] = "B";
$tdataKEN_ALL[".exportFields"][] = "C";
$tdataKEN_ALL[".exportFields"][] = "D";
$tdataKEN_ALL[".exportFields"][] = "E";
$tdataKEN_ALL[".exportFields"][] = "F";
$tdataKEN_ALL[".exportFields"][] = "G";
$tdataKEN_ALL[".exportFields"][] = "H";
$tdataKEN_ALL[".exportFields"][] = "I";
$tdataKEN_ALL[".exportFields"][] = "J";
$tdataKEN_ALL[".exportFields"][] = "K";
$tdataKEN_ALL[".exportFields"][] = "L";
$tdataKEN_ALL[".exportFields"][] = "M";
$tdataKEN_ALL[".exportFields"][] = "N";
$tdataKEN_ALL[".exportFields"][] = "O";

$tdataKEN_ALL[".importFields"] = array();
$tdataKEN_ALL[".importFields"][] = "A";
$tdataKEN_ALL[".importFields"][] = "B";
$tdataKEN_ALL[".importFields"][] = "C";
$tdataKEN_ALL[".importFields"][] = "D";
$tdataKEN_ALL[".importFields"][] = "E";
$tdataKEN_ALL[".importFields"][] = "F";
$tdataKEN_ALL[".importFields"][] = "G";
$tdataKEN_ALL[".importFields"][] = "H";
$tdataKEN_ALL[".importFields"][] = "I";
$tdataKEN_ALL[".importFields"][] = "J";
$tdataKEN_ALL[".importFields"][] = "K";
$tdataKEN_ALL[".importFields"][] = "L";
$tdataKEN_ALL[".importFields"][] = "M";
$tdataKEN_ALL[".importFields"][] = "N";
$tdataKEN_ALL[".importFields"][] = "O";

$tdataKEN_ALL[".printFields"] = array();
$tdataKEN_ALL[".printFields"][] = "A";
$tdataKEN_ALL[".printFields"][] = "B";
$tdataKEN_ALL[".printFields"][] = "C";
$tdataKEN_ALL[".printFields"][] = "D";
$tdataKEN_ALL[".printFields"][] = "E";
$tdataKEN_ALL[".printFields"][] = "F";
$tdataKEN_ALL[".printFields"][] = "G";
$tdataKEN_ALL[".printFields"][] = "H";
$tdataKEN_ALL[".printFields"][] = "I";
$tdataKEN_ALL[".printFields"][] = "J";
$tdataKEN_ALL[".printFields"][] = "K";
$tdataKEN_ALL[".printFields"][] = "L";
$tdataKEN_ALL[".printFields"][] = "M";
$tdataKEN_ALL[".printFields"][] = "N";
$tdataKEN_ALL[".printFields"][] = "O";

//	A
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "A";
	$fdata["GoodName"] = "A";
	$fdata["ownerTable"] = "KEN_ALL";
	$fdata["Label"] = GetFieldLabel("KEN_ALL","A");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "A";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "A";

	
	
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




	$tdataKEN_ALL["A"] = $fdata;
//	B
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "B";
	$fdata["GoodName"] = "B";
	$fdata["ownerTable"] = "KEN_ALL";
	$fdata["Label"] = GetFieldLabel("KEN_ALL","B");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "B";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "B";

	
	
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




	$tdataKEN_ALL["B"] = $fdata;
//	C
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "C";
	$fdata["GoodName"] = "C";
	$fdata["ownerTable"] = "KEN_ALL";
	$fdata["Label"] = GetFieldLabel("KEN_ALL","C");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "C";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "C";

	
	
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




	$tdataKEN_ALL["C"] = $fdata;
//	D
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "D";
	$fdata["GoodName"] = "D";
	$fdata["ownerTable"] = "KEN_ALL";
	$fdata["Label"] = GetFieldLabel("KEN_ALL","D");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "D";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "D";

	
	
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




	$tdataKEN_ALL["D"] = $fdata;
//	E
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "E";
	$fdata["GoodName"] = "E";
	$fdata["ownerTable"] = "KEN_ALL";
	$fdata["Label"] = GetFieldLabel("KEN_ALL","E");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "E";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "E";

	
	
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




	$tdataKEN_ALL["E"] = $fdata;
//	F
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "F";
	$fdata["GoodName"] = "F";
	$fdata["ownerTable"] = "KEN_ALL";
	$fdata["Label"] = GetFieldLabel("KEN_ALL","F");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "F";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "F";

	
	
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




	$tdataKEN_ALL["F"] = $fdata;
//	G
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "G";
	$fdata["GoodName"] = "G";
	$fdata["ownerTable"] = "KEN_ALL";
	$fdata["Label"] = GetFieldLabel("KEN_ALL","G");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "G";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "G";

	
	
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




	$tdataKEN_ALL["G"] = $fdata;
//	H
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "H";
	$fdata["GoodName"] = "H";
	$fdata["ownerTable"] = "KEN_ALL";
	$fdata["Label"] = GetFieldLabel("KEN_ALL","H");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "H";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "H";

	
	
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




	$tdataKEN_ALL["H"] = $fdata;
//	I
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "I";
	$fdata["GoodName"] = "I";
	$fdata["ownerTable"] = "KEN_ALL";
	$fdata["Label"] = GetFieldLabel("KEN_ALL","I");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "I";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "I";

	
	
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




	$tdataKEN_ALL["I"] = $fdata;
//	J
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "J";
	$fdata["GoodName"] = "J";
	$fdata["ownerTable"] = "KEN_ALL";
	$fdata["Label"] = GetFieldLabel("KEN_ALL","J");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "J";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "J";

	
	
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




	$tdataKEN_ALL["J"] = $fdata;
//	K
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "K";
	$fdata["GoodName"] = "K";
	$fdata["ownerTable"] = "KEN_ALL";
	$fdata["Label"] = GetFieldLabel("KEN_ALL","K");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "K";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "K";

	
	
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




	$tdataKEN_ALL["K"] = $fdata;
//	L
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "L";
	$fdata["GoodName"] = "L";
	$fdata["ownerTable"] = "KEN_ALL";
	$fdata["Label"] = GetFieldLabel("KEN_ALL","L");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "L";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "L";

	
	
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




	$tdataKEN_ALL["L"] = $fdata;
//	M
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "M";
	$fdata["GoodName"] = "M";
	$fdata["ownerTable"] = "KEN_ALL";
	$fdata["Label"] = GetFieldLabel("KEN_ALL","M");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "M";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "M";

	
	
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




	$tdataKEN_ALL["M"] = $fdata;
//	N
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "N";
	$fdata["GoodName"] = "N";
	$fdata["ownerTable"] = "KEN_ALL";
	$fdata["Label"] = GetFieldLabel("KEN_ALL","N");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "N";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "N";

	
	
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




	$tdataKEN_ALL["N"] = $fdata;
//	O
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "O";
	$fdata["GoodName"] = "O";
	$fdata["ownerTable"] = "KEN_ALL";
	$fdata["Label"] = GetFieldLabel("KEN_ALL","O");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "O";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "O";

	
	
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




	$tdataKEN_ALL["O"] = $fdata;


$tables_data["KEN_ALL"]=&$tdataKEN_ALL;
$field_labels["KEN_ALL"] = &$fieldLabelsKEN_ALL;
$fieldToolTips["KEN_ALL"] = &$fieldToolTipsKEN_ALL;
$placeHolders["KEN_ALL"] = &$placeHoldersKEN_ALL;
$page_titles["KEN_ALL"] = &$pageTitlesKEN_ALL;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["KEN_ALL"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["KEN_ALL"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_KEN_ALL()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "A,  	B,  	C,  	D,  	E,  	F,  	G,  	H,  	I,  	J,  	K,  	L,  	M,  	N,  	O";
$proto0["m_strFrom"] = "FROM KEN_ALL";
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
	"m_strName" => "A",
	"m_strTable" => "KEN_ALL",
	"m_srcTableName" => "KEN_ALL"
));

$proto6["m_sql"] = "A";
$proto6["m_srcTableName"] = "KEN_ALL";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "B",
	"m_strTable" => "KEN_ALL",
	"m_srcTableName" => "KEN_ALL"
));

$proto8["m_sql"] = "B";
$proto8["m_srcTableName"] = "KEN_ALL";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "C",
	"m_strTable" => "KEN_ALL",
	"m_srcTableName" => "KEN_ALL"
));

$proto10["m_sql"] = "C";
$proto10["m_srcTableName"] = "KEN_ALL";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "D",
	"m_strTable" => "KEN_ALL",
	"m_srcTableName" => "KEN_ALL"
));

$proto12["m_sql"] = "D";
$proto12["m_srcTableName"] = "KEN_ALL";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "E",
	"m_strTable" => "KEN_ALL",
	"m_srcTableName" => "KEN_ALL"
));

$proto14["m_sql"] = "E";
$proto14["m_srcTableName"] = "KEN_ALL";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "F",
	"m_strTable" => "KEN_ALL",
	"m_srcTableName" => "KEN_ALL"
));

$proto16["m_sql"] = "F";
$proto16["m_srcTableName"] = "KEN_ALL";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "G",
	"m_strTable" => "KEN_ALL",
	"m_srcTableName" => "KEN_ALL"
));

$proto18["m_sql"] = "G";
$proto18["m_srcTableName"] = "KEN_ALL";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "H",
	"m_strTable" => "KEN_ALL",
	"m_srcTableName" => "KEN_ALL"
));

$proto20["m_sql"] = "H";
$proto20["m_srcTableName"] = "KEN_ALL";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "I",
	"m_strTable" => "KEN_ALL",
	"m_srcTableName" => "KEN_ALL"
));

$proto22["m_sql"] = "I";
$proto22["m_srcTableName"] = "KEN_ALL";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "J",
	"m_strTable" => "KEN_ALL",
	"m_srcTableName" => "KEN_ALL"
));

$proto24["m_sql"] = "J";
$proto24["m_srcTableName"] = "KEN_ALL";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "K",
	"m_strTable" => "KEN_ALL",
	"m_srcTableName" => "KEN_ALL"
));

$proto26["m_sql"] = "K";
$proto26["m_srcTableName"] = "KEN_ALL";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "L",
	"m_strTable" => "KEN_ALL",
	"m_srcTableName" => "KEN_ALL"
));

$proto28["m_sql"] = "L";
$proto28["m_srcTableName"] = "KEN_ALL";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "M",
	"m_strTable" => "KEN_ALL",
	"m_srcTableName" => "KEN_ALL"
));

$proto30["m_sql"] = "M";
$proto30["m_srcTableName"] = "KEN_ALL";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "N",
	"m_strTable" => "KEN_ALL",
	"m_srcTableName" => "KEN_ALL"
));

$proto32["m_sql"] = "N";
$proto32["m_srcTableName"] = "KEN_ALL";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "O",
	"m_strTable" => "KEN_ALL",
	"m_srcTableName" => "KEN_ALL"
));

$proto34["m_sql"] = "O";
$proto34["m_srcTableName"] = "KEN_ALL";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto36=array();
$proto36["m_link"] = "SQLL_MAIN";
			$proto37=array();
$proto37["m_strName"] = "KEN_ALL";
$proto37["m_srcTableName"] = "KEN_ALL";
$proto37["m_columns"] = array();
$proto37["m_columns"][] = "A";
$proto37["m_columns"][] = "B";
$proto37["m_columns"][] = "C";
$proto37["m_columns"][] = "D";
$proto37["m_columns"][] = "E";
$proto37["m_columns"][] = "F";
$proto37["m_columns"][] = "G";
$proto37["m_columns"][] = "H";
$proto37["m_columns"][] = "I";
$proto37["m_columns"][] = "J";
$proto37["m_columns"][] = "K";
$proto37["m_columns"][] = "L";
$proto37["m_columns"][] = "M";
$proto37["m_columns"][] = "N";
$proto37["m_columns"][] = "O";
$obj = new SQLTable($proto37);

$proto36["m_table"] = $obj;
$proto36["m_sql"] = "KEN_ALL";
$proto36["m_alias"] = "";
$proto36["m_srcTableName"] = "KEN_ALL";
$proto38=array();
$proto38["m_sql"] = "";
$proto38["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto38["m_column"]=$obj;
$proto38["m_contained"] = array();
$proto38["m_strCase"] = "";
$proto38["m_havingmode"] = false;
$proto38["m_inBrackets"] = false;
$proto38["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto38);

$proto36["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto36);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="KEN_ALL";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_KEN_ALL = createSqlQuery_KEN_ALL();


	
		;

															

$tdataKEN_ALL[".sqlquery"] = $queryData_KEN_ALL;

$tableEvents["KEN_ALL"] = new eventsBase;
$tdataKEN_ALL[".hasEvents"] = false;

?>