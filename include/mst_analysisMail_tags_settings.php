<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamst_analysisMail_tags = array();
	$tdatamst_analysisMail_tags[".truncateText"] = true;
	$tdatamst_analysisMail_tags[".NumberOfChars"] = 80;
	$tdatamst_analysisMail_tags[".ShortName"] = "mst_analysisMail_tags";
	$tdatamst_analysisMail_tags[".OwnerID"] = "";
	$tdatamst_analysisMail_tags[".OriginalTable"] = "mst_analysisMail_tags";

//	field labels
$fieldLabelsmst_analysisMail_tags = array();
$fieldToolTipsmst_analysisMail_tags = array();
$pageTitlesmst_analysisMail_tags = array();
$placeHoldersmst_analysisMail_tags = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmst_analysisMail_tags["Japanese"] = array();
	$fieldToolTipsmst_analysisMail_tags["Japanese"] = array();
	$placeHoldersmst_analysisMail_tags["Japanese"] = array();
	$pageTitlesmst_analysisMail_tags["Japanese"] = array();
	$fieldLabelsmst_analysisMail_tags["Japanese"]["analysisMail_tag_id"] = "AnalysisMail Tag Id";
	$fieldToolTipsmst_analysisMail_tags["Japanese"]["analysisMail_tag_id"] = "";
	$placeHoldersmst_analysisMail_tags["Japanese"]["analysisMail_tag_id"] = "";
	$fieldLabelsmst_analysisMail_tags["Japanese"]["name"] = "Name";
	$fieldToolTipsmst_analysisMail_tags["Japanese"]["name"] = "";
	$placeHoldersmst_analysisMail_tags["Japanese"]["name"] = "";
	$fieldLabelsmst_analysisMail_tags["Japanese"]["updated_by"] = "Updated By";
	$fieldToolTipsmst_analysisMail_tags["Japanese"]["updated_by"] = "";
	$placeHoldersmst_analysisMail_tags["Japanese"]["updated_by"] = "";
	$fieldLabelsmst_analysisMail_tags["Japanese"]["updated_at"] = "Updated At";
	$fieldToolTipsmst_analysisMail_tags["Japanese"]["updated_at"] = "";
	$placeHoldersmst_analysisMail_tags["Japanese"]["updated_at"] = "";
	$fieldLabelsmst_analysisMail_tags["Japanese"]["created_by"] = "Created By";
	$fieldToolTipsmst_analysisMail_tags["Japanese"]["created_by"] = "";
	$placeHoldersmst_analysisMail_tags["Japanese"]["created_by"] = "";
	$fieldLabelsmst_analysisMail_tags["Japanese"]["created_at"] = "Created At";
	$fieldToolTipsmst_analysisMail_tags["Japanese"]["created_at"] = "";
	$placeHoldersmst_analysisMail_tags["Japanese"]["created_at"] = "";
	if (count($fieldToolTipsmst_analysisMail_tags["Japanese"]))
		$tdatamst_analysisMail_tags[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmst_analysisMail_tags[""] = array();
	$fieldToolTipsmst_analysisMail_tags[""] = array();
	$placeHoldersmst_analysisMail_tags[""] = array();
	$pageTitlesmst_analysisMail_tags[""] = array();
	$fieldLabelsmst_analysisMail_tags[""]["analysisMail_tag_id"] = "AnalysisMail Tag Id";
	$fieldToolTipsmst_analysisMail_tags[""]["analysisMail_tag_id"] = "";
	$placeHoldersmst_analysisMail_tags[""]["analysisMail_tag_id"] = "";
	$fieldLabelsmst_analysisMail_tags[""]["name"] = "Name";
	$fieldToolTipsmst_analysisMail_tags[""]["name"] = "";
	$placeHoldersmst_analysisMail_tags[""]["name"] = "";
	$fieldLabelsmst_analysisMail_tags[""]["updated_by"] = "Updated By";
	$fieldToolTipsmst_analysisMail_tags[""]["updated_by"] = "";
	$placeHoldersmst_analysisMail_tags[""]["updated_by"] = "";
	$fieldLabelsmst_analysisMail_tags[""]["updated_at"] = "Updated At";
	$fieldToolTipsmst_analysisMail_tags[""]["updated_at"] = "";
	$placeHoldersmst_analysisMail_tags[""]["updated_at"] = "";
	$fieldLabelsmst_analysisMail_tags[""]["created_by"] = "Created By";
	$fieldToolTipsmst_analysisMail_tags[""]["created_by"] = "";
	$placeHoldersmst_analysisMail_tags[""]["created_by"] = "";
	$fieldLabelsmst_analysisMail_tags[""]["created_at"] = "Created At";
	$fieldToolTipsmst_analysisMail_tags[""]["created_at"] = "";
	$placeHoldersmst_analysisMail_tags[""]["created_at"] = "";
	if (count($fieldToolTipsmst_analysisMail_tags[""]))
		$tdatamst_analysisMail_tags[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmst_analysisMail_tags["English"] = array();
	$fieldToolTipsmst_analysisMail_tags["English"] = array();
	$placeHoldersmst_analysisMail_tags["English"] = array();
	$pageTitlesmst_analysisMail_tags["English"] = array();
	$fieldLabelsmst_analysisMail_tags["English"]["analysisMail_tag_id"] = "AnalysisMail Tag Id";
	$fieldToolTipsmst_analysisMail_tags["English"]["analysisMail_tag_id"] = "";
	$placeHoldersmst_analysisMail_tags["English"]["analysisMail_tag_id"] = "";
	$fieldLabelsmst_analysisMail_tags["English"]["name"] = "Name";
	$fieldToolTipsmst_analysisMail_tags["English"]["name"] = "";
	$placeHoldersmst_analysisMail_tags["English"]["name"] = "";
	$fieldLabelsmst_analysisMail_tags["English"]["updated_by"] = "Updated By";
	$fieldToolTipsmst_analysisMail_tags["English"]["updated_by"] = "";
	$placeHoldersmst_analysisMail_tags["English"]["updated_by"] = "";
	$fieldLabelsmst_analysisMail_tags["English"]["updated_at"] = "Updated At";
	$fieldToolTipsmst_analysisMail_tags["English"]["updated_at"] = "";
	$placeHoldersmst_analysisMail_tags["English"]["updated_at"] = "";
	$fieldLabelsmst_analysisMail_tags["English"]["created_by"] = "Created By";
	$fieldToolTipsmst_analysisMail_tags["English"]["created_by"] = "";
	$placeHoldersmst_analysisMail_tags["English"]["created_by"] = "";
	$fieldLabelsmst_analysisMail_tags["English"]["created_at"] = "Created At";
	$fieldToolTipsmst_analysisMail_tags["English"]["created_at"] = "";
	$placeHoldersmst_analysisMail_tags["English"]["created_at"] = "";
	if (count($fieldToolTipsmst_analysisMail_tags["English"]))
		$tdatamst_analysisMail_tags[".isUseToolTips"] = true;
}


	$tdatamst_analysisMail_tags[".NCSearch"] = true;



$tdatamst_analysisMail_tags[".shortTableName"] = "mst_analysisMail_tags";
$tdatamst_analysisMail_tags[".nSecOptions"] = 0;
$tdatamst_analysisMail_tags[".recsPerRowPrint"] = 1;
$tdatamst_analysisMail_tags[".mainTableOwnerID"] = "";
$tdatamst_analysisMail_tags[".moveNext"] = 1;
$tdatamst_analysisMail_tags[".entityType"] = 0;

$tdatamst_analysisMail_tags[".strOriginalTableName"] = "mst_analysisMail_tags";

	



$tdatamst_analysisMail_tags[".showAddInPopup"] = false;

$tdatamst_analysisMail_tags[".showEditInPopup"] = false;

$tdatamst_analysisMail_tags[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamst_analysisMail_tags[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamst_analysisMail_tags[".fieldsForRegister"] = array();

$tdatamst_analysisMail_tags[".listAjax"] = false;

	$tdatamst_analysisMail_tags[".audit"] = true;

	$tdatamst_analysisMail_tags[".locking"] = false;


$tdatamst_analysisMail_tags[".add"] = true;
$tdatamst_analysisMail_tags[".afterAddAction"] = 1;
$tdatamst_analysisMail_tags[".closePopupAfterAdd"] = 1;
$tdatamst_analysisMail_tags[".afterAddActionDetTable"] = "";

$tdatamst_analysisMail_tags[".list"] = true;

$tdatamst_analysisMail_tags[".inlineEdit"] = true;


$tdatamst_analysisMail_tags[".reorderRecordsByHeader"] = true;



$tdatamst_analysisMail_tags[".inlineAdd"] = true;

$tdatamst_analysisMail_tags[".import"] = true;

$tdatamst_analysisMail_tags[".exportTo"] = true;


$tdatamst_analysisMail_tags[".delete"] = true;

$tdatamst_analysisMail_tags[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamst_analysisMail_tags[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamst_analysisMail_tags[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamst_analysisMail_tags[".searchSaving"] = false;
//

$tdatamst_analysisMail_tags[".showSearchPanel"] = true;
		$tdatamst_analysisMail_tags[".flexibleSearch"] = true;

$tdatamst_analysisMail_tags[".isUseAjaxSuggest"] = true;

$tdatamst_analysisMail_tags[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatamst_analysisMail_tags[".ajaxCodeSnippetAdded"] = false;

$tdatamst_analysisMail_tags[".buttonsAdded"] = false;

$tdatamst_analysisMail_tags[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamst_analysisMail_tags[".isUseTimeForSearch"] = false;





$tdatamst_analysisMail_tags[".allSearchFields"] = array();
$tdatamst_analysisMail_tags[".filterFields"] = array();
$tdatamst_analysisMail_tags[".requiredSearchFields"] = array();

$tdatamst_analysisMail_tags[".allSearchFields"][] = "analysisMail_tag_id";
	$tdatamst_analysisMail_tags[".allSearchFields"][] = "name";
	$tdatamst_analysisMail_tags[".allSearchFields"][] = "updated_by";
	$tdatamst_analysisMail_tags[".allSearchFields"][] = "updated_at";
	$tdatamst_analysisMail_tags[".allSearchFields"][] = "created_by";
	$tdatamst_analysisMail_tags[".allSearchFields"][] = "created_at";
	

$tdatamst_analysisMail_tags[".googleLikeFields"] = array();
$tdatamst_analysisMail_tags[".googleLikeFields"][] = "analysisMail_tag_id";
$tdatamst_analysisMail_tags[".googleLikeFields"][] = "name";
$tdatamst_analysisMail_tags[".googleLikeFields"][] = "updated_by";
$tdatamst_analysisMail_tags[".googleLikeFields"][] = "updated_at";
$tdatamst_analysisMail_tags[".googleLikeFields"][] = "created_by";
$tdatamst_analysisMail_tags[".googleLikeFields"][] = "created_at";


$tdatamst_analysisMail_tags[".advSearchFields"] = array();
$tdatamst_analysisMail_tags[".advSearchFields"][] = "analysisMail_tag_id";
$tdatamst_analysisMail_tags[".advSearchFields"][] = "name";
$tdatamst_analysisMail_tags[".advSearchFields"][] = "updated_by";
$tdatamst_analysisMail_tags[".advSearchFields"][] = "updated_at";
$tdatamst_analysisMail_tags[".advSearchFields"][] = "created_by";
$tdatamst_analysisMail_tags[".advSearchFields"][] = "created_at";

$tdatamst_analysisMail_tags[".tableType"] = "list";

$tdatamst_analysisMail_tags[".printerPageOrientation"] = 0;
$tdatamst_analysisMail_tags[".nPrinterPageScale"] = 100;

$tdatamst_analysisMail_tags[".nPrinterSplitRecords"] = 40;

$tdatamst_analysisMail_tags[".nPrinterPDFSplitRecords"] = 40;



$tdatamst_analysisMail_tags[".geocodingEnabled"] = false;





$tdatamst_analysisMail_tags[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamst_analysisMail_tags[".pageSize"] = 20;

$tdatamst_analysisMail_tags[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamst_analysisMail_tags[".strOrderBy"] = $tstrOrderBy;

$tdatamst_analysisMail_tags[".orderindexes"] = array();

$tdatamst_analysisMail_tags[".sqlHead"] = "SELECT `analysisMail_tag_id`,  	`name`,  	`updated_by`,  	`updated_at`,  	`created_by`,  	`created_at`";
$tdatamst_analysisMail_tags[".sqlFrom"] = "FROM `mst_analysisMail_tags`";
$tdatamst_analysisMail_tags[".sqlWhereExpr"] = "";
$tdatamst_analysisMail_tags[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamst_analysisMail_tags[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamst_analysisMail_tags[".arrGroupsPerPage"] = $arrGPP;

$tdatamst_analysisMail_tags[".highlightSearchResults"] = true;

$tableKeysmst_analysisMail_tags = array();
$tableKeysmst_analysisMail_tags[] = "analysisMail_tag_id";
$tdatamst_analysisMail_tags[".Keys"] = $tableKeysmst_analysisMail_tags;

$tdatamst_analysisMail_tags[".listFields"] = array();
$tdatamst_analysisMail_tags[".listFields"][] = "analysisMail_tag_id";
$tdatamst_analysisMail_tags[".listFields"][] = "name";
$tdatamst_analysisMail_tags[".listFields"][] = "updated_by";
$tdatamst_analysisMail_tags[".listFields"][] = "updated_at";
$tdatamst_analysisMail_tags[".listFields"][] = "created_by";
$tdatamst_analysisMail_tags[".listFields"][] = "created_at";

$tdatamst_analysisMail_tags[".hideMobileList"] = array();


$tdatamst_analysisMail_tags[".viewFields"] = array();

$tdatamst_analysisMail_tags[".addFields"] = array();

$tdatamst_analysisMail_tags[".masterListFields"] = array();
$tdatamst_analysisMail_tags[".masterListFields"][] = "analysisMail_tag_id";
$tdatamst_analysisMail_tags[".masterListFields"][] = "name";
$tdatamst_analysisMail_tags[".masterListFields"][] = "updated_by";
$tdatamst_analysisMail_tags[".masterListFields"][] = "updated_at";
$tdatamst_analysisMail_tags[".masterListFields"][] = "created_by";
$tdatamst_analysisMail_tags[".masterListFields"][] = "created_at";

$tdatamst_analysisMail_tags[".inlineAddFields"] = array();
$tdatamst_analysisMail_tags[".inlineAddFields"][] = "name";

$tdatamst_analysisMail_tags[".editFields"] = array();

$tdatamst_analysisMail_tags[".inlineEditFields"] = array();
$tdatamst_analysisMail_tags[".inlineEditFields"][] = "name";

$tdatamst_analysisMail_tags[".updateSelectedFields"] = array();


$tdatamst_analysisMail_tags[".exportFields"] = array();
$tdatamst_analysisMail_tags[".exportFields"][] = "analysisMail_tag_id";
$tdatamst_analysisMail_tags[".exportFields"][] = "name";
$tdatamst_analysisMail_tags[".exportFields"][] = "updated_by";
$tdatamst_analysisMail_tags[".exportFields"][] = "updated_at";
$tdatamst_analysisMail_tags[".exportFields"][] = "created_by";
$tdatamst_analysisMail_tags[".exportFields"][] = "created_at";

$tdatamst_analysisMail_tags[".importFields"] = array();
$tdatamst_analysisMail_tags[".importFields"][] = "analysisMail_tag_id";
$tdatamst_analysisMail_tags[".importFields"][] = "name";
$tdatamst_analysisMail_tags[".importFields"][] = "updated_by";
$tdatamst_analysisMail_tags[".importFields"][] = "updated_at";
$tdatamst_analysisMail_tags[".importFields"][] = "created_by";
$tdatamst_analysisMail_tags[".importFields"][] = "created_at";

$tdatamst_analysisMail_tags[".printFields"] = array();

//	analysisMail_tag_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "analysisMail_tag_id";
	$fdata["GoodName"] = "analysisMail_tag_id";
	$fdata["ownerTable"] = "mst_analysisMail_tags";
	$fdata["Label"] = GetFieldLabel("mst_analysisMail_tags","analysisMail_tag_id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdatamst_analysisMail_tags["analysisMail_tag_id"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "mst_analysisMail_tags";
	$fdata["Label"] = GetFieldLabel("mst_analysisMail_tags","name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`name`";

	
	
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




	$tdatamst_analysisMail_tags["name"] = $fdata;
//	updated_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "updated_by";
	$fdata["GoodName"] = "updated_by";
	$fdata["ownerTable"] = "mst_analysisMail_tags";
	$fdata["Label"] = GetFieldLabel("mst_analysisMail_tags","updated_by");
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




	$tdatamst_analysisMail_tags["updated_by"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "mst_analysisMail_tags";
	$fdata["Label"] = GetFieldLabel("mst_analysisMail_tags","updated_at");
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




	$tdatamst_analysisMail_tags["updated_at"] = $fdata;
//	created_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "created_by";
	$fdata["GoodName"] = "created_by";
	$fdata["ownerTable"] = "mst_analysisMail_tags";
	$fdata["Label"] = GetFieldLabel("mst_analysisMail_tags","created_by");
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




	$tdatamst_analysisMail_tags["created_by"] = $fdata;
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "mst_analysisMail_tags";
	$fdata["Label"] = GetFieldLabel("mst_analysisMail_tags","created_at");
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




	$tdatamst_analysisMail_tags["created_at"] = $fdata;


$tables_data["mst_analysisMail_tags"]=&$tdatamst_analysisMail_tags;
$field_labels["mst_analysisMail_tags"] = &$fieldLabelsmst_analysisMail_tags;
$fieldToolTips["mst_analysisMail_tags"] = &$fieldToolTipsmst_analysisMail_tags;
$placeHolders["mst_analysisMail_tags"] = &$placeHoldersmst_analysisMail_tags;
$page_titles["mst_analysisMail_tags"] = &$pageTitlesmst_analysisMail_tags;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mst_analysisMail_tags"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mst_analysisMail_tags"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mst_analysisMail_tags()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`analysisMail_tag_id`,  	`name`,  	`updated_by`,  	`updated_at`,  	`created_by`,  	`created_at`";
$proto0["m_strFrom"] = "FROM `mst_analysisMail_tags`";
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
	"m_strName" => "analysisMail_tag_id",
	"m_strTable" => "mst_analysisMail_tags",
	"m_srcTableName" => "mst_analysisMail_tags"
));

$proto6["m_sql"] = "`analysisMail_tag_id`";
$proto6["m_srcTableName"] = "mst_analysisMail_tags";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "mst_analysisMail_tags",
	"m_srcTableName" => "mst_analysisMail_tags"
));

$proto8["m_sql"] = "`name`";
$proto8["m_srcTableName"] = "mst_analysisMail_tags";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by",
	"m_strTable" => "mst_analysisMail_tags",
	"m_srcTableName" => "mst_analysisMail_tags"
));

$proto10["m_sql"] = "`updated_by`";
$proto10["m_srcTableName"] = "mst_analysisMail_tags";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "mst_analysisMail_tags",
	"m_srcTableName" => "mst_analysisMail_tags"
));

$proto12["m_sql"] = "`updated_at`";
$proto12["m_srcTableName"] = "mst_analysisMail_tags";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "created_by",
	"m_strTable" => "mst_analysisMail_tags",
	"m_srcTableName" => "mst_analysisMail_tags"
));

$proto14["m_sql"] = "`created_by`";
$proto14["m_srcTableName"] = "mst_analysisMail_tags";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "mst_analysisMail_tags",
	"m_srcTableName" => "mst_analysisMail_tags"
));

$proto16["m_sql"] = "`created_at`";
$proto16["m_srcTableName"] = "mst_analysisMail_tags";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "mst_analysisMail_tags";
$proto19["m_srcTableName"] = "mst_analysisMail_tags";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "analysisMail_tag_id";
$proto19["m_columns"][] = "name";
$proto19["m_columns"][] = "updated_by";
$proto19["m_columns"][] = "updated_at";
$proto19["m_columns"][] = "created_by";
$proto19["m_columns"][] = "created_at";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "`mst_analysisMail_tags`";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "mst_analysisMail_tags";
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
$proto0["m_srcTableName"]="mst_analysisMail_tags";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mst_analysisMail_tags = createSqlQuery_mst_analysisMail_tags();


	
		;

						

$tdatamst_analysisMail_tags[".sqlquery"] = $queryData_mst_analysisMail_tags;

$tableEvents["mst_analysisMail_tags"] = new eventsBase;
$tdatamst_analysisMail_tags[".hasEvents"] = false;

?>