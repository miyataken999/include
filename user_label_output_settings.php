<?php
require_once(getabspath("classes/cipherer.php"));




$tdatauser_label_output = array();
	$tdatauser_label_output[".truncateText"] = true;
	$tdatauser_label_output[".NumberOfChars"] = 80;
	$tdatauser_label_output[".ShortName"] = "user_label_output";
	$tdatauser_label_output[".OwnerID"] = "";
	$tdatauser_label_output[".OriginalTable"] = "user_label_output";

//	field labels
$fieldLabelsuser_label_output = array();
$fieldToolTipsuser_label_output = array();
$pageTitlesuser_label_output = array();
$placeHoldersuser_label_output = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsuser_label_output["Japanese"] = array();
	$fieldToolTipsuser_label_output["Japanese"] = array();
	$placeHoldersuser_label_output["Japanese"] = array();
	$pageTitlesuser_label_output["Japanese"] = array();
	$fieldLabelsuser_label_output["Japanese"]["id"] = "Id";
	$fieldToolTipsuser_label_output["Japanese"]["id"] = "";
	$placeHoldersuser_label_output["Japanese"]["id"] = "";
	$fieldLabelsuser_label_output["Japanese"]["user_id"] = "User Id";
	$fieldToolTipsuser_label_output["Japanese"]["user_id"] = "";
	$placeHoldersuser_label_output["Japanese"]["user_id"] = "";
	$fieldLabelsuser_label_output["Japanese"]["product_id"] = "Product Id";
	$fieldToolTipsuser_label_output["Japanese"]["product_id"] = "";
	$placeHoldersuser_label_output["Japanese"]["product_id"] = "";
	$fieldLabelsuser_label_output["Japanese"]["create_at"] = "Create At";
	$fieldToolTipsuser_label_output["Japanese"]["create_at"] = "";
	$placeHoldersuser_label_output["Japanese"]["create_at"] = "";
	$fieldLabelsuser_label_output["Japanese"]["output"] = "Output";
	$fieldToolTipsuser_label_output["Japanese"]["output"] = "";
	$placeHoldersuser_label_output["Japanese"]["output"] = "";
	$fieldLabelsuser_label_output["Japanese"]["update_at"] = "Update At";
	$fieldToolTipsuser_label_output["Japanese"]["update_at"] = "";
	$placeHoldersuser_label_output["Japanese"]["update_at"] = "";
	$fieldLabelsuser_label_output["Japanese"]["type"] = "Type";
	$fieldToolTipsuser_label_output["Japanese"]["type"] = "";
	$placeHoldersuser_label_output["Japanese"]["type"] = "";
	$fieldLabelsuser_label_output["Japanese"]["number_of_sheets"] = "Number Of Sheets";
	$fieldToolTipsuser_label_output["Japanese"]["number_of_sheets"] = "";
	$placeHoldersuser_label_output["Japanese"]["number_of_sheets"] = "";
	if (count($fieldToolTipsuser_label_output["Japanese"]))
		$tdatauser_label_output[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsuser_label_output[""] = array();
	$fieldToolTipsuser_label_output[""] = array();
	$placeHoldersuser_label_output[""] = array();
	$pageTitlesuser_label_output[""] = array();
	$fieldLabelsuser_label_output[""]["id"] = "Id";
	$fieldToolTipsuser_label_output[""]["id"] = "";
	$placeHoldersuser_label_output[""]["id"] = "";
	$fieldLabelsuser_label_output[""]["user_id"] = "User Id";
	$fieldToolTipsuser_label_output[""]["user_id"] = "";
	$placeHoldersuser_label_output[""]["user_id"] = "";
	$fieldLabelsuser_label_output[""]["product_id"] = "Product Id";
	$fieldToolTipsuser_label_output[""]["product_id"] = "";
	$placeHoldersuser_label_output[""]["product_id"] = "";
	$fieldLabelsuser_label_output[""]["create_at"] = "Create At";
	$fieldToolTipsuser_label_output[""]["create_at"] = "";
	$placeHoldersuser_label_output[""]["create_at"] = "";
	$fieldLabelsuser_label_output[""]["output"] = "Output";
	$fieldToolTipsuser_label_output[""]["output"] = "";
	$placeHoldersuser_label_output[""]["output"] = "";
	$fieldLabelsuser_label_output[""]["update_at"] = "Update At";
	$fieldToolTipsuser_label_output[""]["update_at"] = "";
	$placeHoldersuser_label_output[""]["update_at"] = "";
	$fieldLabelsuser_label_output[""]["type"] = "Type";
	$fieldToolTipsuser_label_output[""]["type"] = "";
	$placeHoldersuser_label_output[""]["type"] = "";
	$fieldLabelsuser_label_output[""]["number_of_sheets"] = "Number Of Sheets";
	$fieldToolTipsuser_label_output[""]["number_of_sheets"] = "";
	$placeHoldersuser_label_output[""]["number_of_sheets"] = "";
	if (count($fieldToolTipsuser_label_output[""]))
		$tdatauser_label_output[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsuser_label_output["English"] = array();
	$fieldToolTipsuser_label_output["English"] = array();
	$placeHoldersuser_label_output["English"] = array();
	$pageTitlesuser_label_output["English"] = array();
	$fieldLabelsuser_label_output["English"]["id"] = "Id";
	$fieldToolTipsuser_label_output["English"]["id"] = "";
	$placeHoldersuser_label_output["English"]["id"] = "";
	$fieldLabelsuser_label_output["English"]["user_id"] = "User Id";
	$fieldToolTipsuser_label_output["English"]["user_id"] = "";
	$placeHoldersuser_label_output["English"]["user_id"] = "";
	$fieldLabelsuser_label_output["English"]["product_id"] = "Product Id";
	$fieldToolTipsuser_label_output["English"]["product_id"] = "";
	$placeHoldersuser_label_output["English"]["product_id"] = "";
	$fieldLabelsuser_label_output["English"]["create_at"] = "Create At";
	$fieldToolTipsuser_label_output["English"]["create_at"] = "";
	$placeHoldersuser_label_output["English"]["create_at"] = "";
	$fieldLabelsuser_label_output["English"]["output"] = "Output";
	$fieldToolTipsuser_label_output["English"]["output"] = "";
	$placeHoldersuser_label_output["English"]["output"] = "";
	$fieldLabelsuser_label_output["English"]["update_at"] = "Update At";
	$fieldToolTipsuser_label_output["English"]["update_at"] = "";
	$placeHoldersuser_label_output["English"]["update_at"] = "";
	$fieldLabelsuser_label_output["English"]["type"] = "Type";
	$fieldToolTipsuser_label_output["English"]["type"] = "";
	$placeHoldersuser_label_output["English"]["type"] = "";
	$fieldLabelsuser_label_output["English"]["number_of_sheets"] = "Number Of Sheets";
	$fieldToolTipsuser_label_output["English"]["number_of_sheets"] = "";
	$placeHoldersuser_label_output["English"]["number_of_sheets"] = "";
	if (count($fieldToolTipsuser_label_output["English"]))
		$tdatauser_label_output[".isUseToolTips"] = true;
}


	$tdatauser_label_output[".NCSearch"] = true;



$tdatauser_label_output[".shortTableName"] = "user_label_output";
$tdatauser_label_output[".nSecOptions"] = 0;
$tdatauser_label_output[".recsPerRowPrint"] = 1;
$tdatauser_label_output[".mainTableOwnerID"] = "";
$tdatauser_label_output[".moveNext"] = 1;
$tdatauser_label_output[".entityType"] = 0;

$tdatauser_label_output[".strOriginalTableName"] = "user_label_output";

	



$tdatauser_label_output[".showAddInPopup"] = false;

$tdatauser_label_output[".showEditInPopup"] = false;

$tdatauser_label_output[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatauser_label_output[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatauser_label_output[".fieldsForRegister"] = array();

$tdatauser_label_output[".listAjax"] = false;

	$tdatauser_label_output[".audit"] = false;

	$tdatauser_label_output[".locking"] = false;



$tdatauser_label_output[".list"] = true;

$tdatauser_label_output[".inlineEdit"] = true;


$tdatauser_label_output[".reorderRecordsByHeader"] = true;



$tdatauser_label_output[".inlineAdd"] = true;


$tdatauser_label_output[".exportTo"] = true;



$tdatauser_label_output[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatauser_label_output[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatauser_label_output[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatauser_label_output[".searchSaving"] = false;
//

$tdatauser_label_output[".showSearchPanel"] = true;
		$tdatauser_label_output[".flexibleSearch"] = true;

$tdatauser_label_output[".isUseAjaxSuggest"] = true;

$tdatauser_label_output[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatauser_label_output[".ajaxCodeSnippetAdded"] = false;

$tdatauser_label_output[".buttonsAdded"] = false;

$tdatauser_label_output[".addPageEvents"] = false;

// use timepicker for search panel
$tdatauser_label_output[".isUseTimeForSearch"] = false;





$tdatauser_label_output[".allSearchFields"] = array();
$tdatauser_label_output[".filterFields"] = array();
$tdatauser_label_output[".requiredSearchFields"] = array();

$tdatauser_label_output[".allSearchFields"][] = "id";
	$tdatauser_label_output[".allSearchFields"][] = "user_id";
	$tdatauser_label_output[".allSearchFields"][] = "product_id";
	$tdatauser_label_output[".allSearchFields"][] = "number_of_sheets";
	$tdatauser_label_output[".allSearchFields"][] = "type";
	$tdatauser_label_output[".allSearchFields"][] = "output";
	$tdatauser_label_output[".allSearchFields"][] = "create_at";
	$tdatauser_label_output[".allSearchFields"][] = "update_at";
	

$tdatauser_label_output[".googleLikeFields"] = array();
$tdatauser_label_output[".googleLikeFields"][] = "id";
$tdatauser_label_output[".googleLikeFields"][] = "user_id";
$tdatauser_label_output[".googleLikeFields"][] = "product_id";
$tdatauser_label_output[".googleLikeFields"][] = "create_at";
$tdatauser_label_output[".googleLikeFields"][] = "output";
$tdatauser_label_output[".googleLikeFields"][] = "update_at";
$tdatauser_label_output[".googleLikeFields"][] = "type";
$tdatauser_label_output[".googleLikeFields"][] = "number_of_sheets";

$tdatauser_label_output[".panelSearchFields"] = array();
$tdatauser_label_output[".searchPanelOptions"] = array();
$tdatauser_label_output[".panelSearchFields"][] = "user_id";
	$tdatauser_label_output[".panelSearchFields"][] = "product_id";
	$tdatauser_label_output[".panelSearchFields"][] = "type";
	$tdatauser_label_output[".panelSearchFields"][] = "output";
	$tdatauser_label_output[".panelSearchFields"][] = "create_at";
	$tdatauser_label_output[".panelSearchFields"][] = "update_at";
	
$tdatauser_label_output[".advSearchFields"] = array();
$tdatauser_label_output[".advSearchFields"][] = "id";
$tdatauser_label_output[".advSearchFields"][] = "user_id";
$tdatauser_label_output[".advSearchFields"][] = "product_id";
$tdatauser_label_output[".advSearchFields"][] = "number_of_sheets";
$tdatauser_label_output[".advSearchFields"][] = "type";
$tdatauser_label_output[".advSearchFields"][] = "output";
$tdatauser_label_output[".advSearchFields"][] = "create_at";
$tdatauser_label_output[".advSearchFields"][] = "update_at";

$tdatauser_label_output[".tableType"] = "list";

$tdatauser_label_output[".printerPageOrientation"] = 0;
$tdatauser_label_output[".nPrinterPageScale"] = 100;

$tdatauser_label_output[".nPrinterSplitRecords"] = 40;

$tdatauser_label_output[".nPrinterPDFSplitRecords"] = 40;



$tdatauser_label_output[".geocodingEnabled"] = false;





$tdatauser_label_output[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatauser_label_output[".pageSize"] = 20;

$tdatauser_label_output[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `id` DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatauser_label_output[".strOrderBy"] = $tstrOrderBy;

$tdatauser_label_output[".orderindexes"] = array();
$tdatauser_label_output[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "`id`");

$tdatauser_label_output[".sqlHead"] = "SELECT `id`,  `user_id`,  `product_id`,  `create_at`,  `output`,  `update_at`,  `type`,  `number_of_sheets`";
$tdatauser_label_output[".sqlFrom"] = "FROM `user_label_output`";
$tdatauser_label_output[".sqlWhereExpr"] = "";
$tdatauser_label_output[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatauser_label_output[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatauser_label_output[".arrGroupsPerPage"] = $arrGPP;

$tdatauser_label_output[".highlightSearchResults"] = true;

$tableKeysuser_label_output = array();
$tableKeysuser_label_output[] = "id";
$tdatauser_label_output[".Keys"] = $tableKeysuser_label_output;

$tdatauser_label_output[".listFields"] = array();
$tdatauser_label_output[".listFields"][] = "id";
$tdatauser_label_output[".listFields"][] = "user_id";
$tdatauser_label_output[".listFields"][] = "product_id";
$tdatauser_label_output[".listFields"][] = "number_of_sheets";
$tdatauser_label_output[".listFields"][] = "type";
$tdatauser_label_output[".listFields"][] = "output";
$tdatauser_label_output[".listFields"][] = "create_at";
$tdatauser_label_output[".listFields"][] = "update_at";

$tdatauser_label_output[".hideMobileList"] = array();


$tdatauser_label_output[".viewFields"] = array();

$tdatauser_label_output[".addFields"] = array();

$tdatauser_label_output[".masterListFields"] = array();
$tdatauser_label_output[".masterListFields"][] = "id";
$tdatauser_label_output[".masterListFields"][] = "user_id";
$tdatauser_label_output[".masterListFields"][] = "product_id";
$tdatauser_label_output[".masterListFields"][] = "number_of_sheets";
$tdatauser_label_output[".masterListFields"][] = "type";
$tdatauser_label_output[".masterListFields"][] = "output";
$tdatauser_label_output[".masterListFields"][] = "create_at";
$tdatauser_label_output[".masterListFields"][] = "update_at";

$tdatauser_label_output[".inlineAddFields"] = array();
$tdatauser_label_output[".inlineAddFields"][] = "type";

$tdatauser_label_output[".editFields"] = array();

$tdatauser_label_output[".inlineEditFields"] = array();
$tdatauser_label_output[".inlineEditFields"][] = "type";
$tdatauser_label_output[".inlineEditFields"][] = "output";

$tdatauser_label_output[".updateSelectedFields"] = array();


$tdatauser_label_output[".exportFields"] = array();
$tdatauser_label_output[".exportFields"][] = "id";
$tdatauser_label_output[".exportFields"][] = "user_id";
$tdatauser_label_output[".exportFields"][] = "product_id";
$tdatauser_label_output[".exportFields"][] = "number_of_sheets";
$tdatauser_label_output[".exportFields"][] = "type";
$tdatauser_label_output[".exportFields"][] = "output";
$tdatauser_label_output[".exportFields"][] = "create_at";
$tdatauser_label_output[".exportFields"][] = "update_at";

$tdatauser_label_output[".importFields"] = array();

$tdatauser_label_output[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "user_label_output";
	$fdata["Label"] = GetFieldLabel("user_label_output","id");
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




	$tdatauser_label_output["id"] = $fdata;
//	user_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "user_id";
	$fdata["GoodName"] = "user_id";
	$fdata["ownerTable"] = "user_label_output";
	$fdata["Label"] = GetFieldLabel("user_label_output","user_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "user_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`user_id`";

	
	
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




	$tdatauser_label_output["user_id"] = $fdata;
//	product_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "product_id";
	$fdata["GoodName"] = "product_id";
	$fdata["ownerTable"] = "user_label_output";
	$fdata["Label"] = GetFieldLabel("user_label_output","product_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

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




	$tdatauser_label_output["product_id"] = $fdata;
//	create_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "create_at";
	$fdata["GoodName"] = "create_at";
	$fdata["ownerTable"] = "user_label_output";
	$fdata["Label"] = GetFieldLabel("user_label_output","create_at");
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




	$tdatauser_label_output["create_at"] = $fdata;
//	output
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "output";
	$fdata["GoodName"] = "output";
	$fdata["ownerTable"] = "user_label_output";
	$fdata["Label"] = GetFieldLabel("user_label_output","output");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "output";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`output`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
	



	
	
	
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




	$tdatauser_label_output["output"] = $fdata;
//	update_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "update_at";
	$fdata["GoodName"] = "update_at";
	$fdata["ownerTable"] = "user_label_output";
	$fdata["Label"] = GetFieldLabel("user_label_output","update_at");
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




	$tdatauser_label_output["update_at"] = $fdata;
//	type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "type";
	$fdata["GoodName"] = "type";
	$fdata["ownerTable"] = "user_label_output";
	$fdata["Label"] = GetFieldLabel("user_label_output","type");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "type";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`type`";

	
	
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




	$tdatauser_label_output["type"] = $fdata;
//	number_of_sheets
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "number_of_sheets";
	$fdata["GoodName"] = "number_of_sheets";
	$fdata["ownerTable"] = "user_label_output";
	$fdata["Label"] = GetFieldLabel("user_label_output","number_of_sheets");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "number_of_sheets";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`number_of_sheets`";

	
	
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




	$tdatauser_label_output["number_of_sheets"] = $fdata;


$tables_data["user_label_output"]=&$tdatauser_label_output;
$field_labels["user_label_output"] = &$fieldLabelsuser_label_output;
$fieldToolTips["user_label_output"] = &$fieldToolTipsuser_label_output;
$placeHolders["user_label_output"] = &$placeHoldersuser_label_output;
$page_titles["user_label_output"] = &$pageTitlesuser_label_output;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["user_label_output"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["user_label_output"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_user_label_output()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  `user_id`,  `product_id`,  `create_at`,  `output`,  `update_at`,  `type`,  `number_of_sheets`";
$proto0["m_strFrom"] = "FROM `user_label_output`";
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
	"m_strTable" => "user_label_output",
	"m_srcTableName" => "user_label_output"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "user_label_output";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "user_id",
	"m_strTable" => "user_label_output",
	"m_srcTableName" => "user_label_output"
));

$proto8["m_sql"] = "`user_id`";
$proto8["m_srcTableName"] = "user_label_output";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "product_id",
	"m_strTable" => "user_label_output",
	"m_srcTableName" => "user_label_output"
));

$proto10["m_sql"] = "`product_id`";
$proto10["m_srcTableName"] = "user_label_output";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "create_at",
	"m_strTable" => "user_label_output",
	"m_srcTableName" => "user_label_output"
));

$proto12["m_sql"] = "`create_at`";
$proto12["m_srcTableName"] = "user_label_output";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "output",
	"m_strTable" => "user_label_output",
	"m_srcTableName" => "user_label_output"
));

$proto14["m_sql"] = "`output`";
$proto14["m_srcTableName"] = "user_label_output";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "update_at",
	"m_strTable" => "user_label_output",
	"m_srcTableName" => "user_label_output"
));

$proto16["m_sql"] = "`update_at`";
$proto16["m_srcTableName"] = "user_label_output";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "type",
	"m_strTable" => "user_label_output",
	"m_srcTableName" => "user_label_output"
));

$proto18["m_sql"] = "`type`";
$proto18["m_srcTableName"] = "user_label_output";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "number_of_sheets",
	"m_strTable" => "user_label_output",
	"m_srcTableName" => "user_label_output"
));

$proto20["m_sql"] = "`number_of_sheets`";
$proto20["m_srcTableName"] = "user_label_output";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "user_label_output";
$proto23["m_srcTableName"] = "user_label_output";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "id";
$proto23["m_columns"][] = "user_id";
$proto23["m_columns"][] = "product_id";
$proto23["m_columns"][] = "create_at";
$proto23["m_columns"][] = "output";
$proto23["m_columns"][] = "update_at";
$proto23["m_columns"][] = "type";
$proto23["m_columns"][] = "output_flag";
$proto23["m_columns"][] = "number_of_sheets";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "`user_label_output`";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "user_label_output";
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
	"m_strName" => "id",
	"m_strTable" => "user_label_output",
	"m_srcTableName" => "user_label_output"
));

$proto26["m_column"]=$obj;
$proto26["m_bAsc"] = 0;
$proto26["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto26);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="user_label_output";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_user_label_output = createSqlQuery_user_label_output();


	
		;

								

$tdatauser_label_output[".sqlquery"] = $queryData_user_label_output;

$tableEvents["user_label_output"] = new eventsBase;
$tdatauser_label_output[".hasEvents"] = false;

?>