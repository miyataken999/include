<?php
require_once(getabspath("classes/cipherer.php"));




$tdataanalysisMail_tags = array();
	$tdataanalysisMail_tags[".truncateText"] = true;
	$tdataanalysisMail_tags[".NumberOfChars"] = 80;
	$tdataanalysisMail_tags[".ShortName"] = "analysisMail_tags";
	$tdataanalysisMail_tags[".OwnerID"] = "";
	$tdataanalysisMail_tags[".OriginalTable"] = "analysisMail_tags";

//	field labels
$fieldLabelsanalysisMail_tags = array();
$fieldToolTipsanalysisMail_tags = array();
$pageTitlesanalysisMail_tags = array();
$placeHoldersanalysisMail_tags = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsanalysisMail_tags["Japanese"] = array();
	$fieldToolTipsanalysisMail_tags["Japanese"] = array();
	$placeHoldersanalysisMail_tags["Japanese"] = array();
	$pageTitlesanalysisMail_tags["Japanese"] = array();
	$fieldLabelsanalysisMail_tags["Japanese"]["id"] = "Id";
	$fieldToolTipsanalysisMail_tags["Japanese"]["id"] = "";
	$placeHoldersanalysisMail_tags["Japanese"]["id"] = "";
	$fieldLabelsanalysisMail_tags["Japanese"]["ecc_id"] = "Ecc Id";
	$fieldToolTipsanalysisMail_tags["Japanese"]["ecc_id"] = "";
	$placeHoldersanalysisMail_tags["Japanese"]["ecc_id"] = "";
	$fieldLabelsanalysisMail_tags["Japanese"]["analysisMail_tag_id"] = "AnalysisMail Tag Id";
	$fieldToolTipsanalysisMail_tags["Japanese"]["analysisMail_tag_id"] = "";
	$placeHoldersanalysisMail_tags["Japanese"]["analysisMail_tag_id"] = "";
	$fieldLabelsanalysisMail_tags["Japanese"]["updated_by"] = "Updated By";
	$fieldToolTipsanalysisMail_tags["Japanese"]["updated_by"] = "";
	$placeHoldersanalysisMail_tags["Japanese"]["updated_by"] = "";
	$fieldLabelsanalysisMail_tags["Japanese"]["updated_at"] = "Updated At";
	$fieldToolTipsanalysisMail_tags["Japanese"]["updated_at"] = "";
	$placeHoldersanalysisMail_tags["Japanese"]["updated_at"] = "";
	$fieldLabelsanalysisMail_tags["Japanese"]["created_by"] = "Created By";
	$fieldToolTipsanalysisMail_tags["Japanese"]["created_by"] = "";
	$placeHoldersanalysisMail_tags["Japanese"]["created_by"] = "";
	$fieldLabelsanalysisMail_tags["Japanese"]["created_at"] = "Created At";
	$fieldToolTipsanalysisMail_tags["Japanese"]["created_at"] = "";
	$placeHoldersanalysisMail_tags["Japanese"]["created_at"] = "";
	if (count($fieldToolTipsanalysisMail_tags["Japanese"]))
		$tdataanalysisMail_tags[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsanalysisMail_tags[""] = array();
	$fieldToolTipsanalysisMail_tags[""] = array();
	$placeHoldersanalysisMail_tags[""] = array();
	$pageTitlesanalysisMail_tags[""] = array();
	$fieldLabelsanalysisMail_tags[""]["id"] = "Id";
	$fieldToolTipsanalysisMail_tags[""]["id"] = "";
	$placeHoldersanalysisMail_tags[""]["id"] = "";
	$fieldLabelsanalysisMail_tags[""]["ecc_id"] = "Ecc Id";
	$fieldToolTipsanalysisMail_tags[""]["ecc_id"] = "";
	$placeHoldersanalysisMail_tags[""]["ecc_id"] = "";
	$fieldLabelsanalysisMail_tags[""]["analysisMail_tag_id"] = "AnalysisMail Tag Id";
	$fieldToolTipsanalysisMail_tags[""]["analysisMail_tag_id"] = "";
	$placeHoldersanalysisMail_tags[""]["analysisMail_tag_id"] = "";
	$fieldLabelsanalysisMail_tags[""]["updated_by"] = "Updated By";
	$fieldToolTipsanalysisMail_tags[""]["updated_by"] = "";
	$placeHoldersanalysisMail_tags[""]["updated_by"] = "";
	$fieldLabelsanalysisMail_tags[""]["updated_at"] = "Updated At";
	$fieldToolTipsanalysisMail_tags[""]["updated_at"] = "";
	$placeHoldersanalysisMail_tags[""]["updated_at"] = "";
	$fieldLabelsanalysisMail_tags[""]["created_by"] = "Created By";
	$fieldToolTipsanalysisMail_tags[""]["created_by"] = "";
	$placeHoldersanalysisMail_tags[""]["created_by"] = "";
	$fieldLabelsanalysisMail_tags[""]["created_at"] = "Created At";
	$fieldToolTipsanalysisMail_tags[""]["created_at"] = "";
	$placeHoldersanalysisMail_tags[""]["created_at"] = "";
	if (count($fieldToolTipsanalysisMail_tags[""]))
		$tdataanalysisMail_tags[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsanalysisMail_tags["English"] = array();
	$fieldToolTipsanalysisMail_tags["English"] = array();
	$placeHoldersanalysisMail_tags["English"] = array();
	$pageTitlesanalysisMail_tags["English"] = array();
	$fieldLabelsanalysisMail_tags["English"]["id"] = "Id";
	$fieldToolTipsanalysisMail_tags["English"]["id"] = "";
	$placeHoldersanalysisMail_tags["English"]["id"] = "";
	$fieldLabelsanalysisMail_tags["English"]["ecc_id"] = "Ecc Id";
	$fieldToolTipsanalysisMail_tags["English"]["ecc_id"] = "";
	$placeHoldersanalysisMail_tags["English"]["ecc_id"] = "";
	$fieldLabelsanalysisMail_tags["English"]["analysisMail_tag_id"] = "AnalysisMail Tag Id";
	$fieldToolTipsanalysisMail_tags["English"]["analysisMail_tag_id"] = "";
	$placeHoldersanalysisMail_tags["English"]["analysisMail_tag_id"] = "";
	$fieldLabelsanalysisMail_tags["English"]["updated_by"] = "Updated By";
	$fieldToolTipsanalysisMail_tags["English"]["updated_by"] = "";
	$placeHoldersanalysisMail_tags["English"]["updated_by"] = "";
	$fieldLabelsanalysisMail_tags["English"]["updated_at"] = "Updated At";
	$fieldToolTipsanalysisMail_tags["English"]["updated_at"] = "";
	$placeHoldersanalysisMail_tags["English"]["updated_at"] = "";
	$fieldLabelsanalysisMail_tags["English"]["created_by"] = "Created By";
	$fieldToolTipsanalysisMail_tags["English"]["created_by"] = "";
	$placeHoldersanalysisMail_tags["English"]["created_by"] = "";
	$fieldLabelsanalysisMail_tags["English"]["created_at"] = "Created At";
	$fieldToolTipsanalysisMail_tags["English"]["created_at"] = "";
	$placeHoldersanalysisMail_tags["English"]["created_at"] = "";
	if (count($fieldToolTipsanalysisMail_tags["English"]))
		$tdataanalysisMail_tags[".isUseToolTips"] = true;
}


	$tdataanalysisMail_tags[".NCSearch"] = true;



$tdataanalysisMail_tags[".shortTableName"] = "analysisMail_tags";
$tdataanalysisMail_tags[".nSecOptions"] = 0;
$tdataanalysisMail_tags[".recsPerRowPrint"] = 1;
$tdataanalysisMail_tags[".mainTableOwnerID"] = "";
$tdataanalysisMail_tags[".moveNext"] = 1;
$tdataanalysisMail_tags[".entityType"] = 0;

$tdataanalysisMail_tags[".strOriginalTableName"] = "analysisMail_tags";

	



$tdataanalysisMail_tags[".showAddInPopup"] = false;

$tdataanalysisMail_tags[".showEditInPopup"] = false;

$tdataanalysisMail_tags[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataanalysisMail_tags[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataanalysisMail_tags[".fieldsForRegister"] = array();

$tdataanalysisMail_tags[".listAjax"] = false;

	$tdataanalysisMail_tags[".audit"] = true;

	$tdataanalysisMail_tags[".locking"] = false;



$tdataanalysisMail_tags[".list"] = true;

$tdataanalysisMail_tags[".inlineEdit"] = true;


$tdataanalysisMail_tags[".reorderRecordsByHeader"] = true;



$tdataanalysisMail_tags[".inlineAdd"] = true;

$tdataanalysisMail_tags[".import"] = true;

$tdataanalysisMail_tags[".exportTo"] = true;


$tdataanalysisMail_tags[".delete"] = true;

$tdataanalysisMail_tags[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataanalysisMail_tags[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataanalysisMail_tags[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataanalysisMail_tags[".searchSaving"] = false;
//

$tdataanalysisMail_tags[".showSearchPanel"] = true;
		$tdataanalysisMail_tags[".flexibleSearch"] = true;

$tdataanalysisMail_tags[".isUseAjaxSuggest"] = true;

$tdataanalysisMail_tags[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																								

$tdataanalysisMail_tags[".ajaxCodeSnippetAdded"] = false;

$tdataanalysisMail_tags[".buttonsAdded"] = false;

$tdataanalysisMail_tags[".addPageEvents"] = false;

// use timepicker for search panel
$tdataanalysisMail_tags[".isUseTimeForSearch"] = false;



$tdataanalysisMail_tags[".badgeColor"] = "9acd32";


$tdataanalysisMail_tags[".allSearchFields"] = array();
$tdataanalysisMail_tags[".filterFields"] = array();
$tdataanalysisMail_tags[".requiredSearchFields"] = array();

$tdataanalysisMail_tags[".allSearchFields"][] = "id";
	$tdataanalysisMail_tags[".allSearchFields"][] = "ecc_id";
	$tdataanalysisMail_tags[".allSearchFields"][] = "analysisMail_tag_id";
	$tdataanalysisMail_tags[".allSearchFields"][] = "updated_by";
	$tdataanalysisMail_tags[".allSearchFields"][] = "updated_at";
	$tdataanalysisMail_tags[".allSearchFields"][] = "created_by";
	$tdataanalysisMail_tags[".allSearchFields"][] = "created_at";
	

$tdataanalysisMail_tags[".googleLikeFields"] = array();
$tdataanalysisMail_tags[".googleLikeFields"][] = "id";
$tdataanalysisMail_tags[".googleLikeFields"][] = "ecc_id";
$tdataanalysisMail_tags[".googleLikeFields"][] = "analysisMail_tag_id";
$tdataanalysisMail_tags[".googleLikeFields"][] = "updated_by";
$tdataanalysisMail_tags[".googleLikeFields"][] = "updated_at";
$tdataanalysisMail_tags[".googleLikeFields"][] = "created_by";
$tdataanalysisMail_tags[".googleLikeFields"][] = "created_at";


$tdataanalysisMail_tags[".advSearchFields"] = array();
$tdataanalysisMail_tags[".advSearchFields"][] = "id";
$tdataanalysisMail_tags[".advSearchFields"][] = "ecc_id";
$tdataanalysisMail_tags[".advSearchFields"][] = "analysisMail_tag_id";
$tdataanalysisMail_tags[".advSearchFields"][] = "updated_by";
$tdataanalysisMail_tags[".advSearchFields"][] = "updated_at";
$tdataanalysisMail_tags[".advSearchFields"][] = "created_by";
$tdataanalysisMail_tags[".advSearchFields"][] = "created_at";

$tdataanalysisMail_tags[".tableType"] = "list";

$tdataanalysisMail_tags[".printerPageOrientation"] = 0;
$tdataanalysisMail_tags[".nPrinterPageScale"] = 100;

$tdataanalysisMail_tags[".nPrinterSplitRecords"] = 40;

$tdataanalysisMail_tags[".nPrinterPDFSplitRecords"] = 40;



$tdataanalysisMail_tags[".geocodingEnabled"] = false;





$tdataanalysisMail_tags[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataanalysisMail_tags[".pageSize"] = 20;

$tdataanalysisMail_tags[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataanalysisMail_tags[".strOrderBy"] = $tstrOrderBy;

$tdataanalysisMail_tags[".orderindexes"] = array();

$tdataanalysisMail_tags[".sqlHead"] = "SELECT `id`,  	`ecc_id`,  	`analysisMail_tag_id`,  	`updated_by`,  	`updated_at`,  	`created_by`,  	`created_at`";
$tdataanalysisMail_tags[".sqlFrom"] = "FROM `analysisMail_tags`";
$tdataanalysisMail_tags[".sqlWhereExpr"] = "";
$tdataanalysisMail_tags[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataanalysisMail_tags[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataanalysisMail_tags[".arrGroupsPerPage"] = $arrGPP;

$tdataanalysisMail_tags[".highlightSearchResults"] = true;

$tableKeysanalysisMail_tags = array();
$tableKeysanalysisMail_tags[] = "id";
$tdataanalysisMail_tags[".Keys"] = $tableKeysanalysisMail_tags;

$tdataanalysisMail_tags[".listFields"] = array();
$tdataanalysisMail_tags[".listFields"][] = "id";
$tdataanalysisMail_tags[".listFields"][] = "ecc_id";
$tdataanalysisMail_tags[".listFields"][] = "analysisMail_tag_id";
$tdataanalysisMail_tags[".listFields"][] = "updated_by";
$tdataanalysisMail_tags[".listFields"][] = "updated_at";
$tdataanalysisMail_tags[".listFields"][] = "created_by";
$tdataanalysisMail_tags[".listFields"][] = "created_at";

$tdataanalysisMail_tags[".hideMobileList"] = array();


$tdataanalysisMail_tags[".viewFields"] = array();

$tdataanalysisMail_tags[".addFields"] = array();

$tdataanalysisMail_tags[".masterListFields"] = array();
$tdataanalysisMail_tags[".masterListFields"][] = "id";
$tdataanalysisMail_tags[".masterListFields"][] = "ecc_id";
$tdataanalysisMail_tags[".masterListFields"][] = "analysisMail_tag_id";
$tdataanalysisMail_tags[".masterListFields"][] = "updated_by";
$tdataanalysisMail_tags[".masterListFields"][] = "updated_at";
$tdataanalysisMail_tags[".masterListFields"][] = "created_by";
$tdataanalysisMail_tags[".masterListFields"][] = "created_at";

$tdataanalysisMail_tags[".inlineAddFields"] = array();
$tdataanalysisMail_tags[".inlineAddFields"][] = "ecc_id";
$tdataanalysisMail_tags[".inlineAddFields"][] = "analysisMail_tag_id";

$tdataanalysisMail_tags[".editFields"] = array();

$tdataanalysisMail_tags[".inlineEditFields"] = array();
$tdataanalysisMail_tags[".inlineEditFields"][] = "ecc_id";
$tdataanalysisMail_tags[".inlineEditFields"][] = "analysisMail_tag_id";

$tdataanalysisMail_tags[".updateSelectedFields"] = array();


$tdataanalysisMail_tags[".exportFields"] = array();
$tdataanalysisMail_tags[".exportFields"][] = "id";
$tdataanalysisMail_tags[".exportFields"][] = "ecc_id";
$tdataanalysisMail_tags[".exportFields"][] = "analysisMail_tag_id";
$tdataanalysisMail_tags[".exportFields"][] = "updated_by";
$tdataanalysisMail_tags[".exportFields"][] = "updated_at";
$tdataanalysisMail_tags[".exportFields"][] = "created_by";
$tdataanalysisMail_tags[".exportFields"][] = "created_at";

$tdataanalysisMail_tags[".importFields"] = array();
$tdataanalysisMail_tags[".importFields"][] = "id";
$tdataanalysisMail_tags[".importFields"][] = "ecc_id";
$tdataanalysisMail_tags[".importFields"][] = "analysisMail_tag_id";
$tdataanalysisMail_tags[".importFields"][] = "updated_by";
$tdataanalysisMail_tags[".importFields"][] = "updated_at";
$tdataanalysisMail_tags[".importFields"][] = "created_by";
$tdataanalysisMail_tags[".importFields"][] = "created_at";

$tdataanalysisMail_tags[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "analysisMail_tags";
	$fdata["Label"] = GetFieldLabel("analysisMail_tags","id");
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




	$tdataanalysisMail_tags["id"] = $fdata;
//	ecc_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ecc_id";
	$fdata["GoodName"] = "ecc_id";
	$fdata["ownerTable"] = "analysisMail_tags";
	$fdata["Label"] = GetFieldLabel("analysisMail_tags","ecc_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ecc_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`ecc_id`";

	
	
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




	$tdataanalysisMail_tags["ecc_id"] = $fdata;
//	analysisMail_tag_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "analysisMail_tag_id";
	$fdata["GoodName"] = "analysisMail_tag_id";
	$fdata["ownerTable"] = "analysisMail_tags";
	$fdata["Label"] = GetFieldLabel("analysisMail_tags","analysisMail_tag_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "analysisMail_tag_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`analysisMail_tag_id`";

	
	
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
	$edata["LookupTable"] = "mst_analysisMail_tags";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 1;

	
		
	$edata["LinkField"] = "analysisMail_tag_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "name";

	
	$edata["LookupOrderBy"] = "";

	
	
		$edata["AllowToAdd"] = true;

	

	
	
	
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




	$tdataanalysisMail_tags["analysisMail_tag_id"] = $fdata;
//	updated_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "updated_by";
	$fdata["GoodName"] = "updated_by";
	$fdata["ownerTable"] = "analysisMail_tags";
	$fdata["Label"] = GetFieldLabel("analysisMail_tags","updated_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "updated_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`updated_by`";

	
	
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




	$tdataanalysisMail_tags["updated_by"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "analysisMail_tags";
	$fdata["Label"] = GetFieldLabel("analysisMail_tags","updated_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "updated_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`updated_at`";

	
	
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




	$tdataanalysisMail_tags["updated_at"] = $fdata;
//	created_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "created_by";
	$fdata["GoodName"] = "created_by";
	$fdata["ownerTable"] = "analysisMail_tags";
	$fdata["Label"] = GetFieldLabel("analysisMail_tags","created_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "created_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`created_by`";

	
	
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




	$tdataanalysisMail_tags["created_by"] = $fdata;
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "analysisMail_tags";
	$fdata["Label"] = GetFieldLabel("analysisMail_tags","created_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "created_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`created_at`";

	
	
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




	$tdataanalysisMail_tags["created_at"] = $fdata;


$tables_data["analysisMail_tags"]=&$tdataanalysisMail_tags;
$field_labels["analysisMail_tags"] = &$fieldLabelsanalysisMail_tags;
$fieldToolTips["analysisMail_tags"] = &$fieldToolTipsanalysisMail_tags;
$placeHolders["analysisMail_tags"] = &$placeHoldersanalysisMail_tags;
$page_titles["analysisMail_tags"] = &$pageTitlesanalysisMail_tags;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["analysisMail_tags"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["analysisMail_tags"] = array();


	
				$strOriginalDetailsTable="Eoc";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="Eoc_royal_customers";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "Eoc_royal_customers";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispMasterInfo"] = array();
				$masterParams["dispMasterInfo"][PAGE_LIST] = true;
			
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 1;
	$masterParams["proceedLink"]= 1;

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["analysisMail_tags"][0] = $masterParams;
				$masterTablesData["analysisMail_tags"][0]["masterKeys"] = array();
	$masterTablesData["analysisMail_tags"][0]["masterKeys"][]="ecc_id";
				$masterTablesData["analysisMail_tags"][0]["detailKeys"] = array();
	$masterTablesData["analysisMail_tags"][0]["detailKeys"][]="ecc_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_analysisMail_tags()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  	`ecc_id`,  	`analysisMail_tag_id`,  	`updated_by`,  	`updated_at`,  	`created_by`,  	`created_at`";
$proto0["m_strFrom"] = "FROM `analysisMail_tags`";
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
	"m_strTable" => "analysisMail_tags",
	"m_srcTableName" => "analysisMail_tags"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "analysisMail_tags";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ecc_id",
	"m_strTable" => "analysisMail_tags",
	"m_srcTableName" => "analysisMail_tags"
));

$proto8["m_sql"] = "`ecc_id`";
$proto8["m_srcTableName"] = "analysisMail_tags";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "analysisMail_tag_id",
	"m_strTable" => "analysisMail_tags",
	"m_srcTableName" => "analysisMail_tags"
));

$proto10["m_sql"] = "`analysisMail_tag_id`";
$proto10["m_srcTableName"] = "analysisMail_tags";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by",
	"m_strTable" => "analysisMail_tags",
	"m_srcTableName" => "analysisMail_tags"
));

$proto12["m_sql"] = "`updated_by`";
$proto12["m_srcTableName"] = "analysisMail_tags";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "analysisMail_tags",
	"m_srcTableName" => "analysisMail_tags"
));

$proto14["m_sql"] = "`updated_at`";
$proto14["m_srcTableName"] = "analysisMail_tags";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "created_by",
	"m_strTable" => "analysisMail_tags",
	"m_srcTableName" => "analysisMail_tags"
));

$proto16["m_sql"] = "`created_by`";
$proto16["m_srcTableName"] = "analysisMail_tags";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "analysisMail_tags",
	"m_srcTableName" => "analysisMail_tags"
));

$proto18["m_sql"] = "`created_at`";
$proto18["m_srcTableName"] = "analysisMail_tags";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "analysisMail_tags";
$proto21["m_srcTableName"] = "analysisMail_tags";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "id";
$proto21["m_columns"][] = "ecc_id";
$proto21["m_columns"][] = "analysisMail_tag_id";
$proto21["m_columns"][] = "updated_by";
$proto21["m_columns"][] = "updated_at";
$proto21["m_columns"][] = "created_by";
$proto21["m_columns"][] = "created_at";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "`analysisMail_tags`";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "analysisMail_tags";
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
$proto0["m_srcTableName"]="analysisMail_tags";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_analysisMail_tags = createSqlQuery_analysisMail_tags();


	
		;

							

$tdataanalysisMail_tags[".sqlquery"] = $queryData_analysisMail_tags;

$tableEvents["analysisMail_tags"] = new eventsBase;
$tdataanalysisMail_tags[".hasEvents"] = false;

?>