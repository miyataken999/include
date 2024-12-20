<?php
require_once(getabspath("classes/cipherer.php"));




$tdataseq = array();
	$tdataseq[".truncateText"] = true;
	$tdataseq[".NumberOfChars"] = 80;
	$tdataseq[".ShortName"] = "seq";
	$tdataseq[".OwnerID"] = "";
	$tdataseq[".OriginalTable"] = "seq";

//	field labels
$fieldLabelsseq = array();
$fieldToolTipsseq = array();
$pageTitlesseq = array();
$placeHoldersseq = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsseq["Japanese"] = array();
	$fieldToolTipsseq["Japanese"] = array();
	$placeHoldersseq["Japanese"] = array();
	$pageTitlesseq["Japanese"] = array();
	$fieldLabelsseq["Japanese"]["sub_cate"] = "Sub Cate";
	$fieldToolTipsseq["Japanese"]["sub_cate"] = "";
	$placeHoldersseq["Japanese"]["sub_cate"] = "";
	$fieldLabelsseq["Japanese"]["category_initial"] = "Category Initial";
	$fieldToolTipsseq["Japanese"]["category_initial"] = "";
	$placeHoldersseq["Japanese"]["category_initial"] = "";
	$fieldLabelsseq["Japanese"]["c"] = "C";
	$fieldToolTipsseq["Japanese"]["c"] = "";
	$placeHoldersseq["Japanese"]["c"] = "";
	$fieldLabelsseq["Japanese"]["d"] = "D";
	$fieldToolTipsseq["Japanese"]["d"] = "";
	$placeHoldersseq["Japanese"]["d"] = "";
	$fieldLabelsseq["Japanese"]["initial_name"] = "Initial Name";
	$fieldToolTipsseq["Japanese"]["initial_name"] = "";
	$placeHoldersseq["Japanese"]["initial_name"] = "";
	$fieldLabelsseq["Japanese"]["sex_ini"] = "Sex Ini";
	$fieldToolTipsseq["Japanese"]["sex_ini"] = "";
	$placeHoldersseq["Japanese"]["sex_ini"] = "";
	$fieldLabelsseq["Japanese"]["product_id"] = "Product Id";
	$fieldToolTipsseq["Japanese"]["product_id"] = "";
	$placeHoldersseq["Japanese"]["product_id"] = "";
	$fieldLabelsseq["Japanese"]["initial_cc"] = "Initial Cc";
	$fieldToolTipsseq["Japanese"]["initial_cc"] = "";
	$placeHoldersseq["Japanese"]["initial_cc"] = "";
	if (count($fieldToolTipsseq["Japanese"]))
		$tdataseq[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsseq[""] = array();
	$fieldToolTipsseq[""] = array();
	$placeHoldersseq[""] = array();
	$pageTitlesseq[""] = array();
	$fieldLabelsseq[""]["sub_cate"] = "Sub Cate";
	$fieldToolTipsseq[""]["sub_cate"] = "";
	$placeHoldersseq[""]["sub_cate"] = "";
	$fieldLabelsseq[""]["category_initial"] = "Category Initial";
	$fieldToolTipsseq[""]["category_initial"] = "";
	$placeHoldersseq[""]["category_initial"] = "";
	$fieldLabelsseq[""]["c"] = "C";
	$fieldToolTipsseq[""]["c"] = "";
	$placeHoldersseq[""]["c"] = "";
	$fieldLabelsseq[""]["d"] = "D";
	$fieldToolTipsseq[""]["d"] = "";
	$placeHoldersseq[""]["d"] = "";
	$fieldLabelsseq[""]["initial_name"] = "Initial Name";
	$fieldToolTipsseq[""]["initial_name"] = "";
	$placeHoldersseq[""]["initial_name"] = "";
	$fieldLabelsseq[""]["sex_ini"] = "Sex Ini";
	$fieldToolTipsseq[""]["sex_ini"] = "";
	$placeHoldersseq[""]["sex_ini"] = "";
	$fieldLabelsseq[""]["product_id"] = "Product Id";
	$fieldToolTipsseq[""]["product_id"] = "";
	$placeHoldersseq[""]["product_id"] = "";
	$fieldLabelsseq[""]["initial_cc"] = "Initial Cc";
	$fieldToolTipsseq[""]["initial_cc"] = "";
	$placeHoldersseq[""]["initial_cc"] = "";
	if (count($fieldToolTipsseq[""]))
		$tdataseq[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsseq["English"] = array();
	$fieldToolTipsseq["English"] = array();
	$placeHoldersseq["English"] = array();
	$pageTitlesseq["English"] = array();
	$fieldLabelsseq["English"]["sub_cate"] = "Sub Cate";
	$fieldToolTipsseq["English"]["sub_cate"] = "";
	$placeHoldersseq["English"]["sub_cate"] = "";
	$fieldLabelsseq["English"]["category_initial"] = "Category Initial";
	$fieldToolTipsseq["English"]["category_initial"] = "";
	$placeHoldersseq["English"]["category_initial"] = "";
	$fieldLabelsseq["English"]["c"] = "C";
	$fieldToolTipsseq["English"]["c"] = "";
	$placeHoldersseq["English"]["c"] = "";
	$fieldLabelsseq["English"]["d"] = "D";
	$fieldToolTipsseq["English"]["d"] = "";
	$placeHoldersseq["English"]["d"] = "";
	$fieldLabelsseq["English"]["initial_name"] = "Initial Name";
	$fieldToolTipsseq["English"]["initial_name"] = "";
	$placeHoldersseq["English"]["initial_name"] = "";
	$fieldLabelsseq["English"]["sex_ini"] = "Sex Ini";
	$fieldToolTipsseq["English"]["sex_ini"] = "";
	$placeHoldersseq["English"]["sex_ini"] = "";
	$fieldLabelsseq["English"]["product_id"] = "Product Id";
	$fieldToolTipsseq["English"]["product_id"] = "";
	$placeHoldersseq["English"]["product_id"] = "";
	$fieldLabelsseq["English"]["initial_cc"] = "Initial Cc";
	$fieldToolTipsseq["English"]["initial_cc"] = "";
	$placeHoldersseq["English"]["initial_cc"] = "";
	if (count($fieldToolTipsseq["English"]))
		$tdataseq[".isUseToolTips"] = true;
}


	$tdataseq[".NCSearch"] = true;



$tdataseq[".shortTableName"] = "seq";
$tdataseq[".nSecOptions"] = 0;
$tdataseq[".recsPerRowPrint"] = 1;
$tdataseq[".mainTableOwnerID"] = "";
$tdataseq[".moveNext"] = 1;
$tdataseq[".entityType"] = 0;

$tdataseq[".strOriginalTableName"] = "seq";

	



$tdataseq[".showAddInPopup"] = false;

$tdataseq[".showEditInPopup"] = false;

$tdataseq[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataseq[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataseq[".fieldsForRegister"] = array();

$tdataseq[".listAjax"] = false;

	$tdataseq[".audit"] = false;

	$tdataseq[".locking"] = false;



$tdataseq[".list"] = true;



$tdataseq[".reorderRecordsByHeader"] = true;








$tdataseq[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataseq[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataseq[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataseq[".searchSaving"] = false;
//

$tdataseq[".showSearchPanel"] = true;
		$tdataseq[".flexibleSearch"] = true;

$tdataseq[".isUseAjaxSuggest"] = true;

$tdataseq[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdataseq[".ajaxCodeSnippetAdded"] = false;

$tdataseq[".buttonsAdded"] = false;

$tdataseq[".addPageEvents"] = false;

// use timepicker for search panel
$tdataseq[".isUseTimeForSearch"] = false;





$tdataseq[".allSearchFields"] = array();
$tdataseq[".filterFields"] = array();
$tdataseq[".requiredSearchFields"] = array();

$tdataseq[".allSearchFields"][] = "sub_cate";
	$tdataseq[".allSearchFields"][] = "category_initial";
	$tdataseq[".allSearchFields"][] = "c";
	$tdataseq[".allSearchFields"][] = "d";
	$tdataseq[".allSearchFields"][] = "initial_name";
	$tdataseq[".allSearchFields"][] = "sex_ini";
	$tdataseq[".allSearchFields"][] = "product_id";
	$tdataseq[".allSearchFields"][] = "initial_cc";
	

$tdataseq[".googleLikeFields"] = array();
$tdataseq[".googleLikeFields"][] = "sub_cate";
$tdataseq[".googleLikeFields"][] = "category_initial";
$tdataseq[".googleLikeFields"][] = "c";
$tdataseq[".googleLikeFields"][] = "d";
$tdataseq[".googleLikeFields"][] = "initial_name";
$tdataseq[".googleLikeFields"][] = "sex_ini";
$tdataseq[".googleLikeFields"][] = "product_id";
$tdataseq[".googleLikeFields"][] = "initial_cc";


$tdataseq[".advSearchFields"] = array();
$tdataseq[".advSearchFields"][] = "sub_cate";
$tdataseq[".advSearchFields"][] = "category_initial";
$tdataseq[".advSearchFields"][] = "c";
$tdataseq[".advSearchFields"][] = "d";
$tdataseq[".advSearchFields"][] = "initial_name";
$tdataseq[".advSearchFields"][] = "sex_ini";
$tdataseq[".advSearchFields"][] = "product_id";
$tdataseq[".advSearchFields"][] = "initial_cc";

$tdataseq[".tableType"] = "list";

$tdataseq[".printerPageOrientation"] = 0;
$tdataseq[".nPrinterPageScale"] = 100;

$tdataseq[".nPrinterSplitRecords"] = 40;

$tdataseq[".nPrinterPDFSplitRecords"] = 40;



$tdataseq[".geocodingEnabled"] = false;





$tdataseq[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataseq[".pageSize"] = 20;

$tdataseq[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataseq[".strOrderBy"] = $tstrOrderBy;

$tdataseq[".orderindexes"] = array();

$tdataseq[".sqlHead"] = "SELECT `sub_cate`,  	`category_initial`,  	`c`,  	`d`,  	`initial_name`,  	`sex_ini`,  	`product_id`,  	`initial_cc`";
$tdataseq[".sqlFrom"] = "FROM `seq`";
$tdataseq[".sqlWhereExpr"] = "";
$tdataseq[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataseq[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataseq[".arrGroupsPerPage"] = $arrGPP;

$tdataseq[".highlightSearchResults"] = true;

$tableKeysseq = array();
$tdataseq[".Keys"] = $tableKeysseq;

$tdataseq[".listFields"] = array();
$tdataseq[".listFields"][] = "sub_cate";
$tdataseq[".listFields"][] = "category_initial";
$tdataseq[".listFields"][] = "c";
$tdataseq[".listFields"][] = "d";
$tdataseq[".listFields"][] = "initial_name";
$tdataseq[".listFields"][] = "sex_ini";
$tdataseq[".listFields"][] = "product_id";
$tdataseq[".listFields"][] = "initial_cc";

$tdataseq[".hideMobileList"] = array();


$tdataseq[".viewFields"] = array();

$tdataseq[".addFields"] = array();

$tdataseq[".masterListFields"] = array();
$tdataseq[".masterListFields"][] = "sub_cate";
$tdataseq[".masterListFields"][] = "category_initial";
$tdataseq[".masterListFields"][] = "c";
$tdataseq[".masterListFields"][] = "d";
$tdataseq[".masterListFields"][] = "initial_name";
$tdataseq[".masterListFields"][] = "sex_ini";
$tdataseq[".masterListFields"][] = "product_id";
$tdataseq[".masterListFields"][] = "initial_cc";

$tdataseq[".inlineAddFields"] = array();

$tdataseq[".editFields"] = array();

$tdataseq[".inlineEditFields"] = array();

$tdataseq[".updateSelectedFields"] = array();


$tdataseq[".exportFields"] = array();

$tdataseq[".importFields"] = array();

$tdataseq[".printFields"] = array();

//	sub_cate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "sub_cate";
	$fdata["GoodName"] = "sub_cate";
	$fdata["ownerTable"] = "seq";
	$fdata["Label"] = GetFieldLabel("seq","sub_cate");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "sub_cate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`sub_cate`";

	
	
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
			$edata["EditParams"].= " maxlength=2";

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




	$tdataseq["sub_cate"] = $fdata;
//	category_initial
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "category_initial";
	$fdata["GoodName"] = "category_initial";
	$fdata["ownerTable"] = "seq";
	$fdata["Label"] = GetFieldLabel("seq","category_initial");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "category_initial";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`category_initial`";

	
	
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
			$edata["EditParams"].= " maxlength=4";

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




	$tdataseq["category_initial"] = $fdata;
//	c
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "c";
	$fdata["GoodName"] = "c";
	$fdata["ownerTable"] = "seq";
	$fdata["Label"] = GetFieldLabel("seq","c");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "c";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`c`";

	
	
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
			$edata["EditParams"].= " maxlength=3";

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




	$tdataseq["c"] = $fdata;
//	d
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "d";
	$fdata["GoodName"] = "d";
	$fdata["ownerTable"] = "seq";
	$fdata["Label"] = GetFieldLabel("seq","d");
	$fdata["FieldType"] = 13;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "d";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`d`";

	
	
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
			$edata["EditParams"].= " maxlength=4";

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




	$tdataseq["d"] = $fdata;
//	initial_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "initial_name";
	$fdata["GoodName"] = "initial_name";
	$fdata["ownerTable"] = "seq";
	$fdata["Label"] = GetFieldLabel("seq","initial_name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "initial_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`initial_name`";

	
	
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
			$edata["EditParams"].= " maxlength=32";

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




	$tdataseq["initial_name"] = $fdata;
//	sex_ini
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "sex_ini";
	$fdata["GoodName"] = "sex_ini";
	$fdata["ownerTable"] = "seq";
	$fdata["Label"] = GetFieldLabel("seq","sex_ini");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "sex_ini";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`sex_ini`";

	
	
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
			$edata["EditParams"].= " maxlength=12";

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




	$tdataseq["sex_ini"] = $fdata;
//	product_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "product_id";
	$fdata["GoodName"] = "product_id";
	$fdata["ownerTable"] = "seq";
	$fdata["Label"] = GetFieldLabel("seq","product_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "product_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`product_id`";

	
	
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




	$tdataseq["product_id"] = $fdata;
//	initial_cc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "initial_cc";
	$fdata["GoodName"] = "initial_cc";
	$fdata["ownerTable"] = "seq";
	$fdata["Label"] = GetFieldLabel("seq","initial_cc");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "initial_cc";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`initial_cc`";

	
	
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
			$edata["EditParams"].= " maxlength=32";

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




	$tdataseq["initial_cc"] = $fdata;


$tables_data["seq"]=&$tdataseq;
$field_labels["seq"] = &$fieldLabelsseq;
$fieldToolTips["seq"] = &$fieldToolTipsseq;
$placeHolders["seq"] = &$placeHoldersseq;
$page_titles["seq"] = &$pageTitlesseq;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["seq"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["seq"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_seq()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`sub_cate`,  	`category_initial`,  	`c`,  	`d`,  	`initial_name`,  	`sex_ini`,  	`product_id`,  	`initial_cc`";
$proto0["m_strFrom"] = "FROM `seq`";
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
	"m_strName" => "sub_cate",
	"m_strTable" => "seq",
	"m_srcTableName" => "seq"
));

$proto6["m_sql"] = "`sub_cate`";
$proto6["m_srcTableName"] = "seq";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "category_initial",
	"m_strTable" => "seq",
	"m_srcTableName" => "seq"
));

$proto8["m_sql"] = "`category_initial`";
$proto8["m_srcTableName"] = "seq";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "c",
	"m_strTable" => "seq",
	"m_srcTableName" => "seq"
));

$proto10["m_sql"] = "`c`";
$proto10["m_srcTableName"] = "seq";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "d",
	"m_strTable" => "seq",
	"m_srcTableName" => "seq"
));

$proto12["m_sql"] = "`d`";
$proto12["m_srcTableName"] = "seq";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "initial_name",
	"m_strTable" => "seq",
	"m_srcTableName" => "seq"
));

$proto14["m_sql"] = "`initial_name`";
$proto14["m_srcTableName"] = "seq";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "sex_ini",
	"m_strTable" => "seq",
	"m_srcTableName" => "seq"
));

$proto16["m_sql"] = "`sex_ini`";
$proto16["m_srcTableName"] = "seq";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "product_id",
	"m_strTable" => "seq",
	"m_srcTableName" => "seq"
));

$proto18["m_sql"] = "`product_id`";
$proto18["m_srcTableName"] = "seq";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "initial_cc",
	"m_strTable" => "seq",
	"m_srcTableName" => "seq"
));

$proto20["m_sql"] = "`initial_cc`";
$proto20["m_srcTableName"] = "seq";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "seq";
$proto23["m_srcTableName"] = "seq";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "sub_cate";
$proto23["m_columns"][] = "category_initial";
$proto23["m_columns"][] = "c";
$proto23["m_columns"][] = "d";
$proto23["m_columns"][] = "initial_name";
$proto23["m_columns"][] = "sex_ini";
$proto23["m_columns"][] = "product_id";
$proto23["m_columns"][] = "initial_cc";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "`seq`";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "seq";
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
$proto0["m_srcTableName"]="seq";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_seq = createSqlQuery_seq();


	
		;

								

$tdataseq[".sqlquery"] = $queryData_seq;

$tableEvents["seq"] = new eventsBase;
$tdataseq[".hasEvents"] = false;

?>