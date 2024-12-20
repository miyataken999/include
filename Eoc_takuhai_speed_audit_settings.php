<?php
require_once(getabspath("classes/cipherer.php"));




$tdataEoc_takuhai_speed_audit = array();
	$tdataEoc_takuhai_speed_audit[".truncateText"] = true;
	$tdataEoc_takuhai_speed_audit[".NumberOfChars"] = 80;
	$tdataEoc_takuhai_speed_audit[".ShortName"] = "Eoc_takuhai_speed_audit";
	$tdataEoc_takuhai_speed_audit[".OwnerID"] = "";
	$tdataEoc_takuhai_speed_audit[".OriginalTable"] = "Eoc_takuhai_speed_audit";

//	field labels
$fieldLabelsEoc_takuhai_speed_audit = array();
$fieldToolTipsEoc_takuhai_speed_audit = array();
$pageTitlesEoc_takuhai_speed_audit = array();
$placeHoldersEoc_takuhai_speed_audit = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsEoc_takuhai_speed_audit["Japanese"] = array();
	$fieldToolTipsEoc_takuhai_speed_audit["Japanese"] = array();
	$placeHoldersEoc_takuhai_speed_audit["Japanese"] = array();
	$pageTitlesEoc_takuhai_speed_audit["Japanese"] = array();
	$fieldLabelsEoc_takuhai_speed_audit["Japanese"]["id"] = "Id";
	$fieldToolTipsEoc_takuhai_speed_audit["Japanese"]["id"] = "";
	$placeHoldersEoc_takuhai_speed_audit["Japanese"]["id"] = "";
	$fieldLabelsEoc_takuhai_speed_audit["Japanese"]["takuhai_id"] = "宅配id";
	$fieldToolTipsEoc_takuhai_speed_audit["Japanese"]["takuhai_id"] = "";
	$placeHoldersEoc_takuhai_speed_audit["Japanese"]["takuhai_id"] = "";
	$fieldLabelsEoc_takuhai_speed_audit["Japanese"]["datetime"] = "発生日時";
	$fieldToolTipsEoc_takuhai_speed_audit["Japanese"]["datetime"] = "";
	$placeHoldersEoc_takuhai_speed_audit["Japanese"]["datetime"] = "";
	$fieldLabelsEoc_takuhai_speed_audit["Japanese"]["field"] = "発生場所";
	$fieldToolTipsEoc_takuhai_speed_audit["Japanese"]["field"] = "";
	$placeHoldersEoc_takuhai_speed_audit["Japanese"]["field"] = "";
	$fieldLabelsEoc_takuhai_speed_audit["Japanese"]["description"] = "エラー内容";
	$fieldToolTipsEoc_takuhai_speed_audit["Japanese"]["description"] = "";
	$placeHoldersEoc_takuhai_speed_audit["Japanese"]["description"] = "";
	$fieldLabelsEoc_takuhai_speed_audit["Japanese"]["SignatureString"] = "シグネチャー";
	$fieldToolTipsEoc_takuhai_speed_audit["Japanese"]["SignatureString"] = "";
	$placeHoldersEoc_takuhai_speed_audit["Japanese"]["SignatureString"] = "";
	if (count($fieldToolTipsEoc_takuhai_speed_audit["Japanese"]))
		$tdataEoc_takuhai_speed_audit[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsEoc_takuhai_speed_audit[""] = array();
	$fieldToolTipsEoc_takuhai_speed_audit[""] = array();
	$placeHoldersEoc_takuhai_speed_audit[""] = array();
	$pageTitlesEoc_takuhai_speed_audit[""] = array();
	$fieldLabelsEoc_takuhai_speed_audit[""]["id"] = "Id";
	$fieldToolTipsEoc_takuhai_speed_audit[""]["id"] = "";
	$placeHoldersEoc_takuhai_speed_audit[""]["id"] = "";
	$fieldLabelsEoc_takuhai_speed_audit[""]["takuhai_id"] = "Takuhai Id";
	$fieldToolTipsEoc_takuhai_speed_audit[""]["takuhai_id"] = "";
	$placeHoldersEoc_takuhai_speed_audit[""]["takuhai_id"] = "";
	$fieldLabelsEoc_takuhai_speed_audit[""]["datetime"] = "Datetime";
	$fieldToolTipsEoc_takuhai_speed_audit[""]["datetime"] = "";
	$placeHoldersEoc_takuhai_speed_audit[""]["datetime"] = "";
	$fieldLabelsEoc_takuhai_speed_audit[""]["field"] = "Field";
	$fieldToolTipsEoc_takuhai_speed_audit[""]["field"] = "";
	$placeHoldersEoc_takuhai_speed_audit[""]["field"] = "";
	$fieldLabelsEoc_takuhai_speed_audit[""]["description"] = "Description";
	$fieldToolTipsEoc_takuhai_speed_audit[""]["description"] = "";
	$placeHoldersEoc_takuhai_speed_audit[""]["description"] = "";
	$fieldLabelsEoc_takuhai_speed_audit[""]["SignatureString"] = "Signature String";
	$fieldToolTipsEoc_takuhai_speed_audit[""]["SignatureString"] = "";
	$placeHoldersEoc_takuhai_speed_audit[""]["SignatureString"] = "";
	if (count($fieldToolTipsEoc_takuhai_speed_audit[""]))
		$tdataEoc_takuhai_speed_audit[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsEoc_takuhai_speed_audit["English"] = array();
	$fieldToolTipsEoc_takuhai_speed_audit["English"] = array();
	$placeHoldersEoc_takuhai_speed_audit["English"] = array();
	$pageTitlesEoc_takuhai_speed_audit["English"] = array();
	$fieldLabelsEoc_takuhai_speed_audit["English"]["id"] = "Id";
	$fieldToolTipsEoc_takuhai_speed_audit["English"]["id"] = "";
	$placeHoldersEoc_takuhai_speed_audit["English"]["id"] = "";
	$fieldLabelsEoc_takuhai_speed_audit["English"]["takuhai_id"] = "Takuhai Id";
	$fieldToolTipsEoc_takuhai_speed_audit["English"]["takuhai_id"] = "";
	$placeHoldersEoc_takuhai_speed_audit["English"]["takuhai_id"] = "";
	$fieldLabelsEoc_takuhai_speed_audit["English"]["datetime"] = "Datetime";
	$fieldToolTipsEoc_takuhai_speed_audit["English"]["datetime"] = "";
	$placeHoldersEoc_takuhai_speed_audit["English"]["datetime"] = "";
	$fieldLabelsEoc_takuhai_speed_audit["English"]["field"] = "Field";
	$fieldToolTipsEoc_takuhai_speed_audit["English"]["field"] = "";
	$placeHoldersEoc_takuhai_speed_audit["English"]["field"] = "";
	$fieldLabelsEoc_takuhai_speed_audit["English"]["description"] = "Description";
	$fieldToolTipsEoc_takuhai_speed_audit["English"]["description"] = "";
	$placeHoldersEoc_takuhai_speed_audit["English"]["description"] = "";
	$fieldLabelsEoc_takuhai_speed_audit["English"]["SignatureString"] = "Signature String";
	$fieldToolTipsEoc_takuhai_speed_audit["English"]["SignatureString"] = "";
	$placeHoldersEoc_takuhai_speed_audit["English"]["SignatureString"] = "";
	if (count($fieldToolTipsEoc_takuhai_speed_audit["English"]))
		$tdataEoc_takuhai_speed_audit[".isUseToolTips"] = true;
}


	$tdataEoc_takuhai_speed_audit[".NCSearch"] = true;



$tdataEoc_takuhai_speed_audit[".shortTableName"] = "Eoc_takuhai_speed_audit";
$tdataEoc_takuhai_speed_audit[".nSecOptions"] = 0;
$tdataEoc_takuhai_speed_audit[".recsPerRowPrint"] = 1;
$tdataEoc_takuhai_speed_audit[".mainTableOwnerID"] = "";
$tdataEoc_takuhai_speed_audit[".moveNext"] = 1;
$tdataEoc_takuhai_speed_audit[".entityType"] = 0;

$tdataEoc_takuhai_speed_audit[".strOriginalTableName"] = "Eoc_takuhai_speed_audit";

	



$tdataEoc_takuhai_speed_audit[".showAddInPopup"] = false;

$tdataEoc_takuhai_speed_audit[".showEditInPopup"] = false;

$tdataEoc_takuhai_speed_audit[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataEoc_takuhai_speed_audit[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataEoc_takuhai_speed_audit[".fieldsForRegister"] = array();

$tdataEoc_takuhai_speed_audit[".listAjax"] = false;

	$tdataEoc_takuhai_speed_audit[".audit"] = true;

	$tdataEoc_takuhai_speed_audit[".locking"] = false;



$tdataEoc_takuhai_speed_audit[".list"] = true;



$tdataEoc_takuhai_speed_audit[".reorderRecordsByHeader"] = true;



$tdataEoc_takuhai_speed_audit[".view"] = true;





$tdataEoc_takuhai_speed_audit[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataEoc_takuhai_speed_audit[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataEoc_takuhai_speed_audit[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataEoc_takuhai_speed_audit[".searchSaving"] = false;
//

$tdataEoc_takuhai_speed_audit[".showSearchPanel"] = true;
		$tdataEoc_takuhai_speed_audit[".flexibleSearch"] = true;

$tdataEoc_takuhai_speed_audit[".isUseAjaxSuggest"] = true;

$tdataEoc_takuhai_speed_audit[".rowHighlite"] = true;



																																																																																																																																													

$tdataEoc_takuhai_speed_audit[".ajaxCodeSnippetAdded"] = false;

$tdataEoc_takuhai_speed_audit[".buttonsAdded"] = false;

$tdataEoc_takuhai_speed_audit[".addPageEvents"] = false;

// use timepicker for search panel
$tdataEoc_takuhai_speed_audit[".isUseTimeForSearch"] = false;





$tdataEoc_takuhai_speed_audit[".allSearchFields"] = array();
$tdataEoc_takuhai_speed_audit[".filterFields"] = array();
$tdataEoc_takuhai_speed_audit[".requiredSearchFields"] = array();

$tdataEoc_takuhai_speed_audit[".allSearchFields"][] = "id";
	$tdataEoc_takuhai_speed_audit[".allSearchFields"][] = "takuhai_id";
	$tdataEoc_takuhai_speed_audit[".allSearchFields"][] = "datetime";
	$tdataEoc_takuhai_speed_audit[".allSearchFields"][] = "field";
	$tdataEoc_takuhai_speed_audit[".allSearchFields"][] = "description";
	$tdataEoc_takuhai_speed_audit[".allSearchFields"][] = "SignatureString";
	

$tdataEoc_takuhai_speed_audit[".googleLikeFields"] = array();
$tdataEoc_takuhai_speed_audit[".googleLikeFields"][] = "id";
$tdataEoc_takuhai_speed_audit[".googleLikeFields"][] = "takuhai_id";
$tdataEoc_takuhai_speed_audit[".googleLikeFields"][] = "datetime";
$tdataEoc_takuhai_speed_audit[".googleLikeFields"][] = "field";
$tdataEoc_takuhai_speed_audit[".googleLikeFields"][] = "description";
$tdataEoc_takuhai_speed_audit[".googleLikeFields"][] = "SignatureString";


$tdataEoc_takuhai_speed_audit[".advSearchFields"] = array();
$tdataEoc_takuhai_speed_audit[".advSearchFields"][] = "id";
$tdataEoc_takuhai_speed_audit[".advSearchFields"][] = "takuhai_id";
$tdataEoc_takuhai_speed_audit[".advSearchFields"][] = "datetime";
$tdataEoc_takuhai_speed_audit[".advSearchFields"][] = "field";
$tdataEoc_takuhai_speed_audit[".advSearchFields"][] = "description";
$tdataEoc_takuhai_speed_audit[".advSearchFields"][] = "SignatureString";

$tdataEoc_takuhai_speed_audit[".tableType"] = "list";

$tdataEoc_takuhai_speed_audit[".printerPageOrientation"] = 0;
$tdataEoc_takuhai_speed_audit[".nPrinterPageScale"] = 100;

$tdataEoc_takuhai_speed_audit[".nPrinterSplitRecords"] = 40;

$tdataEoc_takuhai_speed_audit[".nPrinterPDFSplitRecords"] = 40;



$tdataEoc_takuhai_speed_audit[".geocodingEnabled"] = false;





$tdataEoc_takuhai_speed_audit[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataEoc_takuhai_speed_audit[".pageSize"] = 20;

$tdataEoc_takuhai_speed_audit[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `id` DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataEoc_takuhai_speed_audit[".strOrderBy"] = $tstrOrderBy;

$tdataEoc_takuhai_speed_audit[".orderindexes"] = array();
$tdataEoc_takuhai_speed_audit[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "`id`");

$tdataEoc_takuhai_speed_audit[".sqlHead"] = "SELECT `id`,  	`takuhai_id`,  	`datetime`,  	`field`,  	`description`,  	`SignatureString`";
$tdataEoc_takuhai_speed_audit[".sqlFrom"] = "FROM `Eoc_takuhai_speed_audit`";
$tdataEoc_takuhai_speed_audit[".sqlWhereExpr"] = "";
$tdataEoc_takuhai_speed_audit[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataEoc_takuhai_speed_audit[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataEoc_takuhai_speed_audit[".arrGroupsPerPage"] = $arrGPP;

$tdataEoc_takuhai_speed_audit[".highlightSearchResults"] = true;

$tableKeysEoc_takuhai_speed_audit = array();
$tableKeysEoc_takuhai_speed_audit[] = "id";
$tdataEoc_takuhai_speed_audit[".Keys"] = $tableKeysEoc_takuhai_speed_audit;

$tdataEoc_takuhai_speed_audit[".listFields"] = array();
$tdataEoc_takuhai_speed_audit[".listFields"][] = "id";
$tdataEoc_takuhai_speed_audit[".listFields"][] = "takuhai_id";
$tdataEoc_takuhai_speed_audit[".listFields"][] = "SignatureString";
$tdataEoc_takuhai_speed_audit[".listFields"][] = "datetime";
$tdataEoc_takuhai_speed_audit[".listFields"][] = "field";
$tdataEoc_takuhai_speed_audit[".listFields"][] = "description";

$tdataEoc_takuhai_speed_audit[".hideMobileList"] = array();


$tdataEoc_takuhai_speed_audit[".viewFields"] = array();

$tdataEoc_takuhai_speed_audit[".addFields"] = array();

$tdataEoc_takuhai_speed_audit[".masterListFields"] = array();
$tdataEoc_takuhai_speed_audit[".masterListFields"][] = "id";
$tdataEoc_takuhai_speed_audit[".masterListFields"][] = "takuhai_id";
$tdataEoc_takuhai_speed_audit[".masterListFields"][] = "datetime";
$tdataEoc_takuhai_speed_audit[".masterListFields"][] = "field";
$tdataEoc_takuhai_speed_audit[".masterListFields"][] = "description";
$tdataEoc_takuhai_speed_audit[".masterListFields"][] = "SignatureString";

$tdataEoc_takuhai_speed_audit[".inlineAddFields"] = array();

$tdataEoc_takuhai_speed_audit[".editFields"] = array();

$tdataEoc_takuhai_speed_audit[".inlineEditFields"] = array();

$tdataEoc_takuhai_speed_audit[".updateSelectedFields"] = array();


$tdataEoc_takuhai_speed_audit[".exportFields"] = array();

$tdataEoc_takuhai_speed_audit[".importFields"] = array();

$tdataEoc_takuhai_speed_audit[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "Eoc_takuhai_speed_audit";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai_speed_audit","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdataEoc_takuhai_speed_audit["id"] = $fdata;
//	takuhai_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "takuhai_id";
	$fdata["GoodName"] = "takuhai_id";
	$fdata["ownerTable"] = "Eoc_takuhai_speed_audit";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai_speed_audit","takuhai_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "takuhai_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`takuhai_id`";

	
	
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




	$tdataEoc_takuhai_speed_audit["takuhai_id"] = $fdata;
//	datetime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "datetime";
	$fdata["GoodName"] = "datetime";
	$fdata["ownerTable"] = "Eoc_takuhai_speed_audit";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai_speed_audit","datetime");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "datetime";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`datetime`";

	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataEoc_takuhai_speed_audit["datetime"] = $fdata;
//	field
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "field";
	$fdata["GoodName"] = "field";
	$fdata["ownerTable"] = "Eoc_takuhai_speed_audit";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai_speed_audit","field");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "field";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`field`";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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




	$tdataEoc_takuhai_speed_audit["field"] = $fdata;
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "Eoc_takuhai_speed_audit";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai_speed_audit","description");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "description";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`description`";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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




	$tdataEoc_takuhai_speed_audit["description"] = $fdata;
//	SignatureString
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "SignatureString";
	$fdata["GoodName"] = "SignatureString";
	$fdata["ownerTable"] = "Eoc_takuhai_speed_audit";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai_speed_audit","SignatureString");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "SignatureString";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`SignatureString`";

	
	
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




	$tdataEoc_takuhai_speed_audit["SignatureString"] = $fdata;


$tables_data["Eoc_takuhai_speed_audit"]=&$tdataEoc_takuhai_speed_audit;
$field_labels["Eoc_takuhai_speed_audit"] = &$fieldLabelsEoc_takuhai_speed_audit;
$fieldToolTips["Eoc_takuhai_speed_audit"] = &$fieldToolTipsEoc_takuhai_speed_audit;
$placeHolders["Eoc_takuhai_speed_audit"] = &$placeHoldersEoc_takuhai_speed_audit;
$page_titles["Eoc_takuhai_speed_audit"] = &$pageTitlesEoc_takuhai_speed_audit;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Eoc_takuhai_speed_audit"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["Eoc_takuhai_speed_audit"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Eoc_takuhai_speed_audit()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  	`takuhai_id`,  	`datetime`,  	`field`,  	`description`,  	`SignatureString`";
$proto0["m_strFrom"] = "FROM `Eoc_takuhai_speed_audit`";
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
	"m_strTable" => "Eoc_takuhai_speed_audit",
	"m_srcTableName" => "Eoc_takuhai_speed_audit"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "Eoc_takuhai_speed_audit";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "takuhai_id",
	"m_strTable" => "Eoc_takuhai_speed_audit",
	"m_srcTableName" => "Eoc_takuhai_speed_audit"
));

$proto8["m_sql"] = "`takuhai_id`";
$proto8["m_srcTableName"] = "Eoc_takuhai_speed_audit";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "datetime",
	"m_strTable" => "Eoc_takuhai_speed_audit",
	"m_srcTableName" => "Eoc_takuhai_speed_audit"
));

$proto10["m_sql"] = "`datetime`";
$proto10["m_srcTableName"] = "Eoc_takuhai_speed_audit";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "field",
	"m_strTable" => "Eoc_takuhai_speed_audit",
	"m_srcTableName" => "Eoc_takuhai_speed_audit"
));

$proto12["m_sql"] = "`field`";
$proto12["m_srcTableName"] = "Eoc_takuhai_speed_audit";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "Eoc_takuhai_speed_audit",
	"m_srcTableName" => "Eoc_takuhai_speed_audit"
));

$proto14["m_sql"] = "`description`";
$proto14["m_srcTableName"] = "Eoc_takuhai_speed_audit";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "SignatureString",
	"m_strTable" => "Eoc_takuhai_speed_audit",
	"m_srcTableName" => "Eoc_takuhai_speed_audit"
));

$proto16["m_sql"] = "`SignatureString`";
$proto16["m_srcTableName"] = "Eoc_takuhai_speed_audit";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "Eoc_takuhai_speed_audit";
$proto19["m_srcTableName"] = "Eoc_takuhai_speed_audit";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "id";
$proto19["m_columns"][] = "takuhai_id";
$proto19["m_columns"][] = "datetime";
$proto19["m_columns"][] = "field";
$proto19["m_columns"][] = "description";
$proto19["m_columns"][] = "SignatureString";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "`Eoc_takuhai_speed_audit`";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "Eoc_takuhai_speed_audit";
$proto20=array();
$proto20["m_sql"] = "";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto22=array();
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "Eoc_takuhai_speed_audit",
	"m_srcTableName" => "Eoc_takuhai_speed_audit"
));

$proto22["m_column"]=$obj;
$proto22["m_bAsc"] = 0;
$proto22["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto22);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Eoc_takuhai_speed_audit";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Eoc_takuhai_speed_audit = createSqlQuery_Eoc_takuhai_speed_audit();


	
		;

						

$tdataEoc_takuhai_speed_audit[".sqlquery"] = $queryData_Eoc_takuhai_speed_audit;

$tableEvents["Eoc_takuhai_speed_audit"] = new eventsBase;
$tdataEoc_takuhai_speed_audit[".hasEvents"] = false;

?>