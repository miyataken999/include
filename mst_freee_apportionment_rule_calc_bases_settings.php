<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamst_freee_apportionment_rule_calc_bases = array();
	$tdatamst_freee_apportionment_rule_calc_bases[".truncateText"] = true;
	$tdatamst_freee_apportionment_rule_calc_bases[".NumberOfChars"] = 80;
	$tdatamst_freee_apportionment_rule_calc_bases[".ShortName"] = "mst_freee_apportionment_rule_calc_bases";
	$tdatamst_freee_apportionment_rule_calc_bases[".OwnerID"] = "";
	$tdatamst_freee_apportionment_rule_calc_bases[".OriginalTable"] = "mst_freee_apportionment_rule_calc_bases";

//	field labels
$fieldLabelsmst_freee_apportionment_rule_calc_bases = array();
$fieldToolTipsmst_freee_apportionment_rule_calc_bases = array();
$pageTitlesmst_freee_apportionment_rule_calc_bases = array();
$placeHoldersmst_freee_apportionment_rule_calc_bases = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmst_freee_apportionment_rule_calc_bases["Japanese"] = array();
	$fieldToolTipsmst_freee_apportionment_rule_calc_bases["Japanese"] = array();
	$placeHoldersmst_freee_apportionment_rule_calc_bases["Japanese"] = array();
	$pageTitlesmst_freee_apportionment_rule_calc_bases["Japanese"] = array();
	$fieldLabelsmst_freee_apportionment_rule_calc_bases["Japanese"]["id"] = "Id";
	$fieldToolTipsmst_freee_apportionment_rule_calc_bases["Japanese"]["id"] = "";
	$placeHoldersmst_freee_apportionment_rule_calc_bases["Japanese"]["id"] = "";
	$fieldLabelsmst_freee_apportionment_rule_calc_bases["Japanese"]["name"] = "Name";
	$fieldToolTipsmst_freee_apportionment_rule_calc_bases["Japanese"]["name"] = "";
	$placeHoldersmst_freee_apportionment_rule_calc_bases["Japanese"]["name"] = "";
	$fieldLabelsmst_freee_apportionment_rule_calc_bases["Japanese"]["memo"] = "Memo";
	$fieldToolTipsmst_freee_apportionment_rule_calc_bases["Japanese"]["memo"] = "";
	$placeHoldersmst_freee_apportionment_rule_calc_bases["Japanese"]["memo"] = "";
	$fieldLabelsmst_freee_apportionment_rule_calc_bases["Japanese"]["created_at"] = "Created At";
	$fieldToolTipsmst_freee_apportionment_rule_calc_bases["Japanese"]["created_at"] = "";
	$placeHoldersmst_freee_apportionment_rule_calc_bases["Japanese"]["created_at"] = "";
	$fieldLabelsmst_freee_apportionment_rule_calc_bases["Japanese"]["updated_at"] = "Updated At";
	$fieldToolTipsmst_freee_apportionment_rule_calc_bases["Japanese"]["updated_at"] = "";
	$placeHoldersmst_freee_apportionment_rule_calc_bases["Japanese"]["updated_at"] = "";
	if (count($fieldToolTipsmst_freee_apportionment_rule_calc_bases["Japanese"]))
		$tdatamst_freee_apportionment_rule_calc_bases[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmst_freee_apportionment_rule_calc_bases[""] = array();
	$fieldToolTipsmst_freee_apportionment_rule_calc_bases[""] = array();
	$placeHoldersmst_freee_apportionment_rule_calc_bases[""] = array();
	$pageTitlesmst_freee_apportionment_rule_calc_bases[""] = array();
	$fieldLabelsmst_freee_apportionment_rule_calc_bases[""]["id"] = "Id";
	$fieldToolTipsmst_freee_apportionment_rule_calc_bases[""]["id"] = "";
	$placeHoldersmst_freee_apportionment_rule_calc_bases[""]["id"] = "";
	$fieldLabelsmst_freee_apportionment_rule_calc_bases[""]["name"] = "Name";
	$fieldToolTipsmst_freee_apportionment_rule_calc_bases[""]["name"] = "";
	$placeHoldersmst_freee_apportionment_rule_calc_bases[""]["name"] = "";
	$fieldLabelsmst_freee_apportionment_rule_calc_bases[""]["memo"] = "Memo";
	$fieldToolTipsmst_freee_apportionment_rule_calc_bases[""]["memo"] = "";
	$placeHoldersmst_freee_apportionment_rule_calc_bases[""]["memo"] = "";
	$fieldLabelsmst_freee_apportionment_rule_calc_bases[""]["created_at"] = "Created At";
	$fieldToolTipsmst_freee_apportionment_rule_calc_bases[""]["created_at"] = "";
	$placeHoldersmst_freee_apportionment_rule_calc_bases[""]["created_at"] = "";
	$fieldLabelsmst_freee_apportionment_rule_calc_bases[""]["updated_at"] = "Updated At";
	$fieldToolTipsmst_freee_apportionment_rule_calc_bases[""]["updated_at"] = "";
	$placeHoldersmst_freee_apportionment_rule_calc_bases[""]["updated_at"] = "";
	if (count($fieldToolTipsmst_freee_apportionment_rule_calc_bases[""]))
		$tdatamst_freee_apportionment_rule_calc_bases[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmst_freee_apportionment_rule_calc_bases["English"] = array();
	$fieldToolTipsmst_freee_apportionment_rule_calc_bases["English"] = array();
	$placeHoldersmst_freee_apportionment_rule_calc_bases["English"] = array();
	$pageTitlesmst_freee_apportionment_rule_calc_bases["English"] = array();
	$fieldLabelsmst_freee_apportionment_rule_calc_bases["English"]["id"] = "Id";
	$fieldToolTipsmst_freee_apportionment_rule_calc_bases["English"]["id"] = "";
	$placeHoldersmst_freee_apportionment_rule_calc_bases["English"]["id"] = "";
	$fieldLabelsmst_freee_apportionment_rule_calc_bases["English"]["name"] = "Name";
	$fieldToolTipsmst_freee_apportionment_rule_calc_bases["English"]["name"] = "";
	$placeHoldersmst_freee_apportionment_rule_calc_bases["English"]["name"] = "";
	$fieldLabelsmst_freee_apportionment_rule_calc_bases["English"]["memo"] = "Memo";
	$fieldToolTipsmst_freee_apportionment_rule_calc_bases["English"]["memo"] = "";
	$placeHoldersmst_freee_apportionment_rule_calc_bases["English"]["memo"] = "";
	$fieldLabelsmst_freee_apportionment_rule_calc_bases["English"]["created_at"] = "Created At";
	$fieldToolTipsmst_freee_apportionment_rule_calc_bases["English"]["created_at"] = "";
	$placeHoldersmst_freee_apportionment_rule_calc_bases["English"]["created_at"] = "";
	$fieldLabelsmst_freee_apportionment_rule_calc_bases["English"]["updated_at"] = "Updated At";
	$fieldToolTipsmst_freee_apportionment_rule_calc_bases["English"]["updated_at"] = "";
	$placeHoldersmst_freee_apportionment_rule_calc_bases["English"]["updated_at"] = "";
	if (count($fieldToolTipsmst_freee_apportionment_rule_calc_bases["English"]))
		$tdatamst_freee_apportionment_rule_calc_bases[".isUseToolTips"] = true;
}


	$tdatamst_freee_apportionment_rule_calc_bases[".NCSearch"] = true;



$tdatamst_freee_apportionment_rule_calc_bases[".shortTableName"] = "mst_freee_apportionment_rule_calc_bases";
$tdatamst_freee_apportionment_rule_calc_bases[".nSecOptions"] = 0;
$tdatamst_freee_apportionment_rule_calc_bases[".recsPerRowPrint"] = 1;
$tdatamst_freee_apportionment_rule_calc_bases[".mainTableOwnerID"] = "";
$tdatamst_freee_apportionment_rule_calc_bases[".moveNext"] = 1;
$tdatamst_freee_apportionment_rule_calc_bases[".entityType"] = 0;

$tdatamst_freee_apportionment_rule_calc_bases[".strOriginalTableName"] = "mst_freee_apportionment_rule_calc_bases";

	



$tdatamst_freee_apportionment_rule_calc_bases[".showAddInPopup"] = false;

$tdatamst_freee_apportionment_rule_calc_bases[".showEditInPopup"] = false;

$tdatamst_freee_apportionment_rule_calc_bases[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamst_freee_apportionment_rule_calc_bases[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamst_freee_apportionment_rule_calc_bases[".fieldsForRegister"] = array();

$tdatamst_freee_apportionment_rule_calc_bases[".listAjax"] = false;

	$tdatamst_freee_apportionment_rule_calc_bases[".audit"] = true;

	$tdatamst_freee_apportionment_rule_calc_bases[".locking"] = false;



$tdatamst_freee_apportionment_rule_calc_bases[".list"] = true;

$tdatamst_freee_apportionment_rule_calc_bases[".inlineEdit"] = true;


$tdatamst_freee_apportionment_rule_calc_bases[".reorderRecordsByHeader"] = true;



$tdatamst_freee_apportionment_rule_calc_bases[".inlineAdd"] = true;
$tdatamst_freee_apportionment_rule_calc_bases[".view"] = true;

$tdatamst_freee_apportionment_rule_calc_bases[".import"] = true;

$tdatamst_freee_apportionment_rule_calc_bases[".exportTo"] = true;


$tdatamst_freee_apportionment_rule_calc_bases[".delete"] = true;

$tdatamst_freee_apportionment_rule_calc_bases[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamst_freee_apportionment_rule_calc_bases[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamst_freee_apportionment_rule_calc_bases[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamst_freee_apportionment_rule_calc_bases[".searchSaving"] = false;
//

$tdatamst_freee_apportionment_rule_calc_bases[".showSearchPanel"] = true;
		$tdatamst_freee_apportionment_rule_calc_bases[".flexibleSearch"] = true;

$tdatamst_freee_apportionment_rule_calc_bases[".isUseAjaxSuggest"] = true;

$tdatamst_freee_apportionment_rule_calc_bases[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatamst_freee_apportionment_rule_calc_bases[".ajaxCodeSnippetAdded"] = false;

$tdatamst_freee_apportionment_rule_calc_bases[".buttonsAdded"] = false;

$tdatamst_freee_apportionment_rule_calc_bases[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamst_freee_apportionment_rule_calc_bases[".isUseTimeForSearch"] = false;





$tdatamst_freee_apportionment_rule_calc_bases[".allSearchFields"] = array();
$tdatamst_freee_apportionment_rule_calc_bases[".filterFields"] = array();
$tdatamst_freee_apportionment_rule_calc_bases[".requiredSearchFields"] = array();

$tdatamst_freee_apportionment_rule_calc_bases[".allSearchFields"][] = "id";
	$tdatamst_freee_apportionment_rule_calc_bases[".allSearchFields"][] = "name";
	$tdatamst_freee_apportionment_rule_calc_bases[".allSearchFields"][] = "memo";
	$tdatamst_freee_apportionment_rule_calc_bases[".allSearchFields"][] = "created_at";
	$tdatamst_freee_apportionment_rule_calc_bases[".allSearchFields"][] = "updated_at";
	

$tdatamst_freee_apportionment_rule_calc_bases[".googleLikeFields"] = array();
$tdatamst_freee_apportionment_rule_calc_bases[".googleLikeFields"][] = "id";
$tdatamst_freee_apportionment_rule_calc_bases[".googleLikeFields"][] = "name";
$tdatamst_freee_apportionment_rule_calc_bases[".googleLikeFields"][] = "memo";
$tdatamst_freee_apportionment_rule_calc_bases[".googleLikeFields"][] = "created_at";
$tdatamst_freee_apportionment_rule_calc_bases[".googleLikeFields"][] = "updated_at";


$tdatamst_freee_apportionment_rule_calc_bases[".advSearchFields"] = array();
$tdatamst_freee_apportionment_rule_calc_bases[".advSearchFields"][] = "id";
$tdatamst_freee_apportionment_rule_calc_bases[".advSearchFields"][] = "name";
$tdatamst_freee_apportionment_rule_calc_bases[".advSearchFields"][] = "memo";
$tdatamst_freee_apportionment_rule_calc_bases[".advSearchFields"][] = "created_at";
$tdatamst_freee_apportionment_rule_calc_bases[".advSearchFields"][] = "updated_at";

$tdatamst_freee_apportionment_rule_calc_bases[".tableType"] = "list";

$tdatamst_freee_apportionment_rule_calc_bases[".printerPageOrientation"] = 0;
$tdatamst_freee_apportionment_rule_calc_bases[".nPrinterPageScale"] = 100;

$tdatamst_freee_apportionment_rule_calc_bases[".nPrinterSplitRecords"] = 40;

$tdatamst_freee_apportionment_rule_calc_bases[".nPrinterPDFSplitRecords"] = 40;



$tdatamst_freee_apportionment_rule_calc_bases[".geocodingEnabled"] = false;





$tdatamst_freee_apportionment_rule_calc_bases[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamst_freee_apportionment_rule_calc_bases[".pageSize"] = 20;

$tdatamst_freee_apportionment_rule_calc_bases[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamst_freee_apportionment_rule_calc_bases[".strOrderBy"] = $tstrOrderBy;

$tdatamst_freee_apportionment_rule_calc_bases[".orderindexes"] = array();

$tdatamst_freee_apportionment_rule_calc_bases[".sqlHead"] = "SELECT `id`,  	`name`,  	`memo`,  	`created_at`,  	`updated_at`";
$tdatamst_freee_apportionment_rule_calc_bases[".sqlFrom"] = "FROM `mst_freee_apportionment_rule_calc_bases`";
$tdatamst_freee_apportionment_rule_calc_bases[".sqlWhereExpr"] = "";
$tdatamst_freee_apportionment_rule_calc_bases[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamst_freee_apportionment_rule_calc_bases[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamst_freee_apportionment_rule_calc_bases[".arrGroupsPerPage"] = $arrGPP;

$tdatamst_freee_apportionment_rule_calc_bases[".highlightSearchResults"] = true;

$tableKeysmst_freee_apportionment_rule_calc_bases = array();
$tableKeysmst_freee_apportionment_rule_calc_bases[] = "id";
$tdatamst_freee_apportionment_rule_calc_bases[".Keys"] = $tableKeysmst_freee_apportionment_rule_calc_bases;

$tdatamst_freee_apportionment_rule_calc_bases[".listFields"] = array();
$tdatamst_freee_apportionment_rule_calc_bases[".listFields"][] = "id";
$tdatamst_freee_apportionment_rule_calc_bases[".listFields"][] = "name";
$tdatamst_freee_apportionment_rule_calc_bases[".listFields"][] = "memo";
$tdatamst_freee_apportionment_rule_calc_bases[".listFields"][] = "created_at";
$tdatamst_freee_apportionment_rule_calc_bases[".listFields"][] = "updated_at";

$tdatamst_freee_apportionment_rule_calc_bases[".hideMobileList"] = array();


$tdatamst_freee_apportionment_rule_calc_bases[".viewFields"] = array();
$tdatamst_freee_apportionment_rule_calc_bases[".viewFields"][] = "id";
$tdatamst_freee_apportionment_rule_calc_bases[".viewFields"][] = "name";
$tdatamst_freee_apportionment_rule_calc_bases[".viewFields"][] = "memo";
$tdatamst_freee_apportionment_rule_calc_bases[".viewFields"][] = "created_at";
$tdatamst_freee_apportionment_rule_calc_bases[".viewFields"][] = "updated_at";

$tdatamst_freee_apportionment_rule_calc_bases[".addFields"] = array();

$tdatamst_freee_apportionment_rule_calc_bases[".masterListFields"] = array();
$tdatamst_freee_apportionment_rule_calc_bases[".masterListFields"][] = "id";
$tdatamst_freee_apportionment_rule_calc_bases[".masterListFields"][] = "name";
$tdatamst_freee_apportionment_rule_calc_bases[".masterListFields"][] = "memo";
$tdatamst_freee_apportionment_rule_calc_bases[".masterListFields"][] = "created_at";
$tdatamst_freee_apportionment_rule_calc_bases[".masterListFields"][] = "updated_at";

$tdatamst_freee_apportionment_rule_calc_bases[".inlineAddFields"] = array();
$tdatamst_freee_apportionment_rule_calc_bases[".inlineAddFields"][] = "name";
$tdatamst_freee_apportionment_rule_calc_bases[".inlineAddFields"][] = "memo";
$tdatamst_freee_apportionment_rule_calc_bases[".inlineAddFields"][] = "created_at";
$tdatamst_freee_apportionment_rule_calc_bases[".inlineAddFields"][] = "updated_at";

$tdatamst_freee_apportionment_rule_calc_bases[".editFields"] = array();

$tdatamst_freee_apportionment_rule_calc_bases[".inlineEditFields"] = array();
$tdatamst_freee_apportionment_rule_calc_bases[".inlineEditFields"][] = "name";
$tdatamst_freee_apportionment_rule_calc_bases[".inlineEditFields"][] = "memo";
$tdatamst_freee_apportionment_rule_calc_bases[".inlineEditFields"][] = "created_at";
$tdatamst_freee_apportionment_rule_calc_bases[".inlineEditFields"][] = "updated_at";

$tdatamst_freee_apportionment_rule_calc_bases[".updateSelectedFields"] = array();


$tdatamst_freee_apportionment_rule_calc_bases[".exportFields"] = array();
$tdatamst_freee_apportionment_rule_calc_bases[".exportFields"][] = "id";
$tdatamst_freee_apportionment_rule_calc_bases[".exportFields"][] = "name";
$tdatamst_freee_apportionment_rule_calc_bases[".exportFields"][] = "memo";
$tdatamst_freee_apportionment_rule_calc_bases[".exportFields"][] = "created_at";
$tdatamst_freee_apportionment_rule_calc_bases[".exportFields"][] = "updated_at";

$tdatamst_freee_apportionment_rule_calc_bases[".importFields"] = array();
$tdatamst_freee_apportionment_rule_calc_bases[".importFields"][] = "id";
$tdatamst_freee_apportionment_rule_calc_bases[".importFields"][] = "name";
$tdatamst_freee_apportionment_rule_calc_bases[".importFields"][] = "memo";
$tdatamst_freee_apportionment_rule_calc_bases[".importFields"][] = "created_at";
$tdatamst_freee_apportionment_rule_calc_bases[".importFields"][] = "updated_at";

$tdatamst_freee_apportionment_rule_calc_bases[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "mst_freee_apportionment_rule_calc_bases";
	$fdata["Label"] = GetFieldLabel("mst_freee_apportionment_rule_calc_bases","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

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




	$tdatamst_freee_apportionment_rule_calc_bases["id"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "mst_freee_apportionment_rule_calc_bases";
	$fdata["Label"] = GetFieldLabel("mst_freee_apportionment_rule_calc_bases","name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

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
			$edata["EditParams"].= " maxlength=10";

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




	$tdatamst_freee_apportionment_rule_calc_bases["name"] = $fdata;
//	memo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "memo";
	$fdata["GoodName"] = "memo";
	$fdata["ownerTable"] = "mst_freee_apportionment_rule_calc_bases";
	$fdata["Label"] = GetFieldLabel("mst_freee_apportionment_rule_calc_bases","memo");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "memo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`memo`";

	
	
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
			$edata["EditParams"].= " maxlength=1000";

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




	$tdatamst_freee_apportionment_rule_calc_bases["memo"] = $fdata;
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "mst_freee_apportionment_rule_calc_bases";
	$fdata["Label"] = GetFieldLabel("mst_freee_apportionment_rule_calc_bases","created_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

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




	$tdatamst_freee_apportionment_rule_calc_bases["created_at"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "mst_freee_apportionment_rule_calc_bases";
	$fdata["Label"] = GetFieldLabel("mst_freee_apportionment_rule_calc_bases","updated_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

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




	$tdatamst_freee_apportionment_rule_calc_bases["updated_at"] = $fdata;


$tables_data["mst_freee_apportionment_rule_calc_bases"]=&$tdatamst_freee_apportionment_rule_calc_bases;
$field_labels["mst_freee_apportionment_rule_calc_bases"] = &$fieldLabelsmst_freee_apportionment_rule_calc_bases;
$fieldToolTips["mst_freee_apportionment_rule_calc_bases"] = &$fieldToolTipsmst_freee_apportionment_rule_calc_bases;
$placeHolders["mst_freee_apportionment_rule_calc_bases"] = &$placeHoldersmst_freee_apportionment_rule_calc_bases;
$page_titles["mst_freee_apportionment_rule_calc_bases"] = &$pageTitlesmst_freee_apportionment_rule_calc_bases;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mst_freee_apportionment_rule_calc_bases"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mst_freee_apportionment_rule_calc_bases"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mst_freee_apportionment_rule_calc_bases()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  	`name`,  	`memo`,  	`created_at`,  	`updated_at`";
$proto0["m_strFrom"] = "FROM `mst_freee_apportionment_rule_calc_bases`";
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
	"m_strTable" => "mst_freee_apportionment_rule_calc_bases",
	"m_srcTableName" => "mst_freee_apportionment_rule_calc_bases"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "mst_freee_apportionment_rule_calc_bases";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "mst_freee_apportionment_rule_calc_bases",
	"m_srcTableName" => "mst_freee_apportionment_rule_calc_bases"
));

$proto8["m_sql"] = "`name`";
$proto8["m_srcTableName"] = "mst_freee_apportionment_rule_calc_bases";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "memo",
	"m_strTable" => "mst_freee_apportionment_rule_calc_bases",
	"m_srcTableName" => "mst_freee_apportionment_rule_calc_bases"
));

$proto10["m_sql"] = "`memo`";
$proto10["m_srcTableName"] = "mst_freee_apportionment_rule_calc_bases";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "mst_freee_apportionment_rule_calc_bases",
	"m_srcTableName" => "mst_freee_apportionment_rule_calc_bases"
));

$proto12["m_sql"] = "`created_at`";
$proto12["m_srcTableName"] = "mst_freee_apportionment_rule_calc_bases";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "mst_freee_apportionment_rule_calc_bases",
	"m_srcTableName" => "mst_freee_apportionment_rule_calc_bases"
));

$proto14["m_sql"] = "`updated_at`";
$proto14["m_srcTableName"] = "mst_freee_apportionment_rule_calc_bases";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "mst_freee_apportionment_rule_calc_bases";
$proto17["m_srcTableName"] = "mst_freee_apportionment_rule_calc_bases";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "id";
$proto17["m_columns"][] = "name";
$proto17["m_columns"][] = "memo";
$proto17["m_columns"][] = "created_at";
$proto17["m_columns"][] = "updated_at";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "`mst_freee_apportionment_rule_calc_bases`";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "mst_freee_apportionment_rule_calc_bases";
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="mst_freee_apportionment_rule_calc_bases";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mst_freee_apportionment_rule_calc_bases = createSqlQuery_mst_freee_apportionment_rule_calc_bases();


	
		;

					

$tdatamst_freee_apportionment_rule_calc_bases[".sqlquery"] = $queryData_mst_freee_apportionment_rule_calc_bases;

$tableEvents["mst_freee_apportionment_rule_calc_bases"] = new eventsBase;
$tdatamst_freee_apportionment_rule_calc_bases[".hasEvents"] = false;

?>