<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamst_wasabi_apparel_size = array();
	$tdatamst_wasabi_apparel_size[".truncateText"] = true;
	$tdatamst_wasabi_apparel_size[".NumberOfChars"] = 80;
	$tdatamst_wasabi_apparel_size[".ShortName"] = "mst_wasabi_apparel_size";
	$tdatamst_wasabi_apparel_size[".OwnerID"] = "";
	$tdatamst_wasabi_apparel_size[".OriginalTable"] = "mst_wasabi_apparel_size";

//	field labels
$fieldLabelsmst_wasabi_apparel_size = array();
$fieldToolTipsmst_wasabi_apparel_size = array();
$pageTitlesmst_wasabi_apparel_size = array();
$placeHoldersmst_wasabi_apparel_size = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmst_wasabi_apparel_size["Japanese"] = array();
	$fieldToolTipsmst_wasabi_apparel_size["Japanese"] = array();
	$placeHoldersmst_wasabi_apparel_size["Japanese"] = array();
	$pageTitlesmst_wasabi_apparel_size["Japanese"] = array();
	$fieldLabelsmst_wasabi_apparel_size["Japanese"]["id"] = "Id";
	$fieldToolTipsmst_wasabi_apparel_size["Japanese"]["id"] = "";
	$placeHoldersmst_wasabi_apparel_size["Japanese"]["id"] = "";
	$fieldLabelsmst_wasabi_apparel_size["Japanese"]["jp"] = "JP";
	$fieldToolTipsmst_wasabi_apparel_size["Japanese"]["jp"] = "";
	$placeHoldersmst_wasabi_apparel_size["Japanese"]["jp"] = "";
	$fieldLabelsmst_wasabi_apparel_size["Japanese"]["eu"] = "EU";
	$fieldToolTipsmst_wasabi_apparel_size["Japanese"]["eu"] = "";
	$placeHoldersmst_wasabi_apparel_size["Japanese"]["eu"] = "";
	$fieldLabelsmst_wasabi_apparel_size["Japanese"]["uk"] = "UK";
	$fieldToolTipsmst_wasabi_apparel_size["Japanese"]["uk"] = "";
	$placeHoldersmst_wasabi_apparel_size["Japanese"]["uk"] = "";
	$fieldLabelsmst_wasabi_apparel_size["Japanese"]["us"] = "US";
	$fieldToolTipsmst_wasabi_apparel_size["Japanese"]["us"] = "";
	$placeHoldersmst_wasabi_apparel_size["Japanese"]["us"] = "";
	$fieldLabelsmst_wasabi_apparel_size["Japanese"]["update_by"] = "Update By";
	$fieldToolTipsmst_wasabi_apparel_size["Japanese"]["update_by"] = "";
	$placeHoldersmst_wasabi_apparel_size["Japanese"]["update_by"] = "";
	$fieldLabelsmst_wasabi_apparel_size["Japanese"]["update_at"] = "Update At";
	$fieldToolTipsmst_wasabi_apparel_size["Japanese"]["update_at"] = "";
	$placeHoldersmst_wasabi_apparel_size["Japanese"]["update_at"] = "";
	$fieldLabelsmst_wasabi_apparel_size["Japanese"]["create_by"] = "Create By";
	$fieldToolTipsmst_wasabi_apparel_size["Japanese"]["create_by"] = "";
	$placeHoldersmst_wasabi_apparel_size["Japanese"]["create_by"] = "";
	$fieldLabelsmst_wasabi_apparel_size["Japanese"]["create_at"] = "Create At";
	$fieldToolTipsmst_wasabi_apparel_size["Japanese"]["create_at"] = "";
	$placeHoldersmst_wasabi_apparel_size["Japanese"]["create_at"] = "";
	if (count($fieldToolTipsmst_wasabi_apparel_size["Japanese"]))
		$tdatamst_wasabi_apparel_size[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmst_wasabi_apparel_size[""] = array();
	$fieldToolTipsmst_wasabi_apparel_size[""] = array();
	$placeHoldersmst_wasabi_apparel_size[""] = array();
	$pageTitlesmst_wasabi_apparel_size[""] = array();
	$fieldLabelsmst_wasabi_apparel_size[""]["id"] = "Id";
	$fieldToolTipsmst_wasabi_apparel_size[""]["id"] = "";
	$placeHoldersmst_wasabi_apparel_size[""]["id"] = "";
	$fieldLabelsmst_wasabi_apparel_size[""]["jp"] = "JP";
	$fieldToolTipsmst_wasabi_apparel_size[""]["jp"] = "";
	$placeHoldersmst_wasabi_apparel_size[""]["jp"] = "";
	$fieldLabelsmst_wasabi_apparel_size[""]["eu"] = "EU";
	$fieldToolTipsmst_wasabi_apparel_size[""]["eu"] = "";
	$placeHoldersmst_wasabi_apparel_size[""]["eu"] = "";
	$fieldLabelsmst_wasabi_apparel_size[""]["uk"] = "UK";
	$fieldToolTipsmst_wasabi_apparel_size[""]["uk"] = "";
	$placeHoldersmst_wasabi_apparel_size[""]["uk"] = "";
	$fieldLabelsmst_wasabi_apparel_size[""]["us"] = "US";
	$fieldToolTipsmst_wasabi_apparel_size[""]["us"] = "";
	$placeHoldersmst_wasabi_apparel_size[""]["us"] = "";
	$fieldLabelsmst_wasabi_apparel_size[""]["update_by"] = "Update By";
	$fieldToolTipsmst_wasabi_apparel_size[""]["update_by"] = "";
	$placeHoldersmst_wasabi_apparel_size[""]["update_by"] = "";
	$fieldLabelsmst_wasabi_apparel_size[""]["update_at"] = "Update At";
	$fieldToolTipsmst_wasabi_apparel_size[""]["update_at"] = "";
	$placeHoldersmst_wasabi_apparel_size[""]["update_at"] = "";
	$fieldLabelsmst_wasabi_apparel_size[""]["create_by"] = "Create By";
	$fieldToolTipsmst_wasabi_apparel_size[""]["create_by"] = "";
	$placeHoldersmst_wasabi_apparel_size[""]["create_by"] = "";
	$fieldLabelsmst_wasabi_apparel_size[""]["create_at"] = "Create At";
	$fieldToolTipsmst_wasabi_apparel_size[""]["create_at"] = "";
	$placeHoldersmst_wasabi_apparel_size[""]["create_at"] = "";
	if (count($fieldToolTipsmst_wasabi_apparel_size[""]))
		$tdatamst_wasabi_apparel_size[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmst_wasabi_apparel_size["English"] = array();
	$fieldToolTipsmst_wasabi_apparel_size["English"] = array();
	$placeHoldersmst_wasabi_apparel_size["English"] = array();
	$pageTitlesmst_wasabi_apparel_size["English"] = array();
	$fieldLabelsmst_wasabi_apparel_size["English"]["id"] = "Id";
	$fieldToolTipsmst_wasabi_apparel_size["English"]["id"] = "";
	$placeHoldersmst_wasabi_apparel_size["English"]["id"] = "";
	$fieldLabelsmst_wasabi_apparel_size["English"]["jp"] = "JP";
	$fieldToolTipsmst_wasabi_apparel_size["English"]["jp"] = "";
	$placeHoldersmst_wasabi_apparel_size["English"]["jp"] = "";
	$fieldLabelsmst_wasabi_apparel_size["English"]["eu"] = "EU";
	$fieldToolTipsmst_wasabi_apparel_size["English"]["eu"] = "";
	$placeHoldersmst_wasabi_apparel_size["English"]["eu"] = "";
	$fieldLabelsmst_wasabi_apparel_size["English"]["uk"] = "UK";
	$fieldToolTipsmst_wasabi_apparel_size["English"]["uk"] = "";
	$placeHoldersmst_wasabi_apparel_size["English"]["uk"] = "";
	$fieldLabelsmst_wasabi_apparel_size["English"]["us"] = "US";
	$fieldToolTipsmst_wasabi_apparel_size["English"]["us"] = "";
	$placeHoldersmst_wasabi_apparel_size["English"]["us"] = "";
	$fieldLabelsmst_wasabi_apparel_size["English"]["update_by"] = "Update By";
	$fieldToolTipsmst_wasabi_apparel_size["English"]["update_by"] = "";
	$placeHoldersmst_wasabi_apparel_size["English"]["update_by"] = "";
	$fieldLabelsmst_wasabi_apparel_size["English"]["update_at"] = "Update At";
	$fieldToolTipsmst_wasabi_apparel_size["English"]["update_at"] = "";
	$placeHoldersmst_wasabi_apparel_size["English"]["update_at"] = "";
	$fieldLabelsmst_wasabi_apparel_size["English"]["create_by"] = "Create By";
	$fieldToolTipsmst_wasabi_apparel_size["English"]["create_by"] = "";
	$placeHoldersmst_wasabi_apparel_size["English"]["create_by"] = "";
	$fieldLabelsmst_wasabi_apparel_size["English"]["create_at"] = "Create At";
	$fieldToolTipsmst_wasabi_apparel_size["English"]["create_at"] = "";
	$placeHoldersmst_wasabi_apparel_size["English"]["create_at"] = "";
	if (count($fieldToolTipsmst_wasabi_apparel_size["English"]))
		$tdatamst_wasabi_apparel_size[".isUseToolTips"] = true;
}


	$tdatamst_wasabi_apparel_size[".NCSearch"] = true;



$tdatamst_wasabi_apparel_size[".shortTableName"] = "mst_wasabi_apparel_size";
$tdatamst_wasabi_apparel_size[".nSecOptions"] = 0;
$tdatamst_wasabi_apparel_size[".recsPerRowPrint"] = 1;
$tdatamst_wasabi_apparel_size[".mainTableOwnerID"] = "";
$tdatamst_wasabi_apparel_size[".moveNext"] = 1;
$tdatamst_wasabi_apparel_size[".entityType"] = 0;

$tdatamst_wasabi_apparel_size[".strOriginalTableName"] = "mst_wasabi_apparel_size";

	



$tdatamst_wasabi_apparel_size[".showAddInPopup"] = false;

$tdatamst_wasabi_apparel_size[".showEditInPopup"] = false;

$tdatamst_wasabi_apparel_size[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamst_wasabi_apparel_size[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamst_wasabi_apparel_size[".fieldsForRegister"] = array();

$tdatamst_wasabi_apparel_size[".listAjax"] = false;

	$tdatamst_wasabi_apparel_size[".audit"] = true;

	$tdatamst_wasabi_apparel_size[".locking"] = false;



$tdatamst_wasabi_apparel_size[".list"] = true;

$tdatamst_wasabi_apparel_size[".inlineEdit"] = true;


$tdatamst_wasabi_apparel_size[".reorderRecordsByHeader"] = true;



$tdatamst_wasabi_apparel_size[".inlineAdd"] = true;

$tdatamst_wasabi_apparel_size[".import"] = true;

$tdatamst_wasabi_apparel_size[".exportTo"] = true;


$tdatamst_wasabi_apparel_size[".delete"] = true;

$tdatamst_wasabi_apparel_size[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamst_wasabi_apparel_size[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamst_wasabi_apparel_size[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamst_wasabi_apparel_size[".searchSaving"] = false;
//

$tdatamst_wasabi_apparel_size[".showSearchPanel"] = true;
		$tdatamst_wasabi_apparel_size[".flexibleSearch"] = true;

$tdatamst_wasabi_apparel_size[".isUseAjaxSuggest"] = true;

$tdatamst_wasabi_apparel_size[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatamst_wasabi_apparel_size[".ajaxCodeSnippetAdded"] = false;

$tdatamst_wasabi_apparel_size[".buttonsAdded"] = false;

$tdatamst_wasabi_apparel_size[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamst_wasabi_apparel_size[".isUseTimeForSearch"] = false;





$tdatamst_wasabi_apparel_size[".allSearchFields"] = array();
$tdatamst_wasabi_apparel_size[".filterFields"] = array();
$tdatamst_wasabi_apparel_size[".requiredSearchFields"] = array();

$tdatamst_wasabi_apparel_size[".allSearchFields"][] = "id";
	$tdatamst_wasabi_apparel_size[".allSearchFields"][] = "jp";
	$tdatamst_wasabi_apparel_size[".allSearchFields"][] = "eu";
	$tdatamst_wasabi_apparel_size[".allSearchFields"][] = "uk";
	$tdatamst_wasabi_apparel_size[".allSearchFields"][] = "us";
	$tdatamst_wasabi_apparel_size[".allSearchFields"][] = "update_by";
	$tdatamst_wasabi_apparel_size[".allSearchFields"][] = "update_at";
	$tdatamst_wasabi_apparel_size[".allSearchFields"][] = "create_by";
	$tdatamst_wasabi_apparel_size[".allSearchFields"][] = "create_at";
	

$tdatamst_wasabi_apparel_size[".googleLikeFields"] = array();
$tdatamst_wasabi_apparel_size[".googleLikeFields"][] = "id";
$tdatamst_wasabi_apparel_size[".googleLikeFields"][] = "jp";
$tdatamst_wasabi_apparel_size[".googleLikeFields"][] = "eu";
$tdatamst_wasabi_apparel_size[".googleLikeFields"][] = "uk";
$tdatamst_wasabi_apparel_size[".googleLikeFields"][] = "us";
$tdatamst_wasabi_apparel_size[".googleLikeFields"][] = "update_by";
$tdatamst_wasabi_apparel_size[".googleLikeFields"][] = "update_at";
$tdatamst_wasabi_apparel_size[".googleLikeFields"][] = "create_by";
$tdatamst_wasabi_apparel_size[".googleLikeFields"][] = "create_at";


$tdatamst_wasabi_apparel_size[".advSearchFields"] = array();
$tdatamst_wasabi_apparel_size[".advSearchFields"][] = "id";
$tdatamst_wasabi_apparel_size[".advSearchFields"][] = "jp";
$tdatamst_wasabi_apparel_size[".advSearchFields"][] = "eu";
$tdatamst_wasabi_apparel_size[".advSearchFields"][] = "uk";
$tdatamst_wasabi_apparel_size[".advSearchFields"][] = "us";
$tdatamst_wasabi_apparel_size[".advSearchFields"][] = "update_by";
$tdatamst_wasabi_apparel_size[".advSearchFields"][] = "update_at";
$tdatamst_wasabi_apparel_size[".advSearchFields"][] = "create_by";
$tdatamst_wasabi_apparel_size[".advSearchFields"][] = "create_at";

$tdatamst_wasabi_apparel_size[".tableType"] = "list";

$tdatamst_wasabi_apparel_size[".printerPageOrientation"] = 0;
$tdatamst_wasabi_apparel_size[".nPrinterPageScale"] = 100;

$tdatamst_wasabi_apparel_size[".nPrinterSplitRecords"] = 40;

$tdatamst_wasabi_apparel_size[".nPrinterPDFSplitRecords"] = 40;



$tdatamst_wasabi_apparel_size[".geocodingEnabled"] = false;





$tdatamst_wasabi_apparel_size[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamst_wasabi_apparel_size[".pageSize"] = 100;

$tdatamst_wasabi_apparel_size[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY id";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamst_wasabi_apparel_size[".strOrderBy"] = $tstrOrderBy;

$tdatamst_wasabi_apparel_size[".orderindexes"] = array();
$tdatamst_wasabi_apparel_size[".orderindexes"][] = array(1, (1 ? "ASC" : "DESC"), "`id`");

$tdatamst_wasabi_apparel_size[".sqlHead"] = "SELECT id,  jp,  eu,  uk,  us,  update_by,  update_at,  create_by,  create_at";
$tdatamst_wasabi_apparel_size[".sqlFrom"] = "FROM mst_wasabi_apparel_size";
$tdatamst_wasabi_apparel_size[".sqlWhereExpr"] = "";
$tdatamst_wasabi_apparel_size[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamst_wasabi_apparel_size[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamst_wasabi_apparel_size[".arrGroupsPerPage"] = $arrGPP;

$tdatamst_wasabi_apparel_size[".highlightSearchResults"] = true;

$tableKeysmst_wasabi_apparel_size = array();
$tableKeysmst_wasabi_apparel_size[] = "id";
$tdatamst_wasabi_apparel_size[".Keys"] = $tableKeysmst_wasabi_apparel_size;

$tdatamst_wasabi_apparel_size[".listFields"] = array();
$tdatamst_wasabi_apparel_size[".listFields"][] = "id";
$tdatamst_wasabi_apparel_size[".listFields"][] = "jp";
$tdatamst_wasabi_apparel_size[".listFields"][] = "eu";
$tdatamst_wasabi_apparel_size[".listFields"][] = "uk";
$tdatamst_wasabi_apparel_size[".listFields"][] = "us";
$tdatamst_wasabi_apparel_size[".listFields"][] = "update_by";
$tdatamst_wasabi_apparel_size[".listFields"][] = "update_at";
$tdatamst_wasabi_apparel_size[".listFields"][] = "create_by";
$tdatamst_wasabi_apparel_size[".listFields"][] = "create_at";

$tdatamst_wasabi_apparel_size[".hideMobileList"] = array();


$tdatamst_wasabi_apparel_size[".viewFields"] = array();

$tdatamst_wasabi_apparel_size[".addFields"] = array();

$tdatamst_wasabi_apparel_size[".masterListFields"] = array();
$tdatamst_wasabi_apparel_size[".masterListFields"][] = "id";
$tdatamst_wasabi_apparel_size[".masterListFields"][] = "jp";
$tdatamst_wasabi_apparel_size[".masterListFields"][] = "eu";
$tdatamst_wasabi_apparel_size[".masterListFields"][] = "uk";
$tdatamst_wasabi_apparel_size[".masterListFields"][] = "us";
$tdatamst_wasabi_apparel_size[".masterListFields"][] = "update_by";
$tdatamst_wasabi_apparel_size[".masterListFields"][] = "update_at";
$tdatamst_wasabi_apparel_size[".masterListFields"][] = "create_by";
$tdatamst_wasabi_apparel_size[".masterListFields"][] = "create_at";

$tdatamst_wasabi_apparel_size[".inlineAddFields"] = array();
$tdatamst_wasabi_apparel_size[".inlineAddFields"][] = "id";
$tdatamst_wasabi_apparel_size[".inlineAddFields"][] = "jp";
$tdatamst_wasabi_apparel_size[".inlineAddFields"][] = "eu";
$tdatamst_wasabi_apparel_size[".inlineAddFields"][] = "uk";
$tdatamst_wasabi_apparel_size[".inlineAddFields"][] = "us";

$tdatamst_wasabi_apparel_size[".editFields"] = array();

$tdatamst_wasabi_apparel_size[".inlineEditFields"] = array();
$tdatamst_wasabi_apparel_size[".inlineEditFields"][] = "id";
$tdatamst_wasabi_apparel_size[".inlineEditFields"][] = "jp";
$tdatamst_wasabi_apparel_size[".inlineEditFields"][] = "eu";
$tdatamst_wasabi_apparel_size[".inlineEditFields"][] = "uk";
$tdatamst_wasabi_apparel_size[".inlineEditFields"][] = "us";

$tdatamst_wasabi_apparel_size[".updateSelectedFields"] = array();


$tdatamst_wasabi_apparel_size[".exportFields"] = array();
$tdatamst_wasabi_apparel_size[".exportFields"][] = "id";
$tdatamst_wasabi_apparel_size[".exportFields"][] = "jp";
$tdatamst_wasabi_apparel_size[".exportFields"][] = "eu";
$tdatamst_wasabi_apparel_size[".exportFields"][] = "uk";
$tdatamst_wasabi_apparel_size[".exportFields"][] = "us";

$tdatamst_wasabi_apparel_size[".importFields"] = array();
$tdatamst_wasabi_apparel_size[".importFields"][] = "id";
$tdatamst_wasabi_apparel_size[".importFields"][] = "jp";
$tdatamst_wasabi_apparel_size[".importFields"][] = "eu";
$tdatamst_wasabi_apparel_size[".importFields"][] = "uk";
$tdatamst_wasabi_apparel_size[".importFields"][] = "us";

$tdatamst_wasabi_apparel_size[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "mst_wasabi_apparel_size";
	$fdata["Label"] = GetFieldLabel("mst_wasabi_apparel_size","id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
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




	$tdatamst_wasabi_apparel_size["id"] = $fdata;
//	jp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "jp";
	$fdata["GoodName"] = "jp";
	$fdata["ownerTable"] = "mst_wasabi_apparel_size";
	$fdata["Label"] = GetFieldLabel("mst_wasabi_apparel_size","jp");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "jp";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "jp";

	
	
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




	$tdatamst_wasabi_apparel_size["jp"] = $fdata;
//	eu
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "eu";
	$fdata["GoodName"] = "eu";
	$fdata["ownerTable"] = "mst_wasabi_apparel_size";
	$fdata["Label"] = GetFieldLabel("mst_wasabi_apparel_size","eu");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "eu";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "eu";

	
	
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




	$tdatamst_wasabi_apparel_size["eu"] = $fdata;
//	uk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "uk";
	$fdata["GoodName"] = "uk";
	$fdata["ownerTable"] = "mst_wasabi_apparel_size";
	$fdata["Label"] = GetFieldLabel("mst_wasabi_apparel_size","uk");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "uk";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "uk";

	
	
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




	$tdatamst_wasabi_apparel_size["uk"] = $fdata;
//	us
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "us";
	$fdata["GoodName"] = "us";
	$fdata["ownerTable"] = "mst_wasabi_apparel_size";
	$fdata["Label"] = GetFieldLabel("mst_wasabi_apparel_size","us");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "us";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "us";

	
	
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




	$tdatamst_wasabi_apparel_size["us"] = $fdata;
//	update_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "update_by";
	$fdata["GoodName"] = "update_by";
	$fdata["ownerTable"] = "mst_wasabi_apparel_size";
	$fdata["Label"] = GetFieldLabel("mst_wasabi_apparel_size","update_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "update_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "update_by";

	
	
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




	$tdatamst_wasabi_apparel_size["update_by"] = $fdata;
//	update_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "update_at";
	$fdata["GoodName"] = "update_at";
	$fdata["ownerTable"] = "mst_wasabi_apparel_size";
	$fdata["Label"] = GetFieldLabel("mst_wasabi_apparel_size","update_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "update_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "update_at";

	
	
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




	$tdatamst_wasabi_apparel_size["update_at"] = $fdata;
//	create_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "create_by";
	$fdata["GoodName"] = "create_by";
	$fdata["ownerTable"] = "mst_wasabi_apparel_size";
	$fdata["Label"] = GetFieldLabel("mst_wasabi_apparel_size","create_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "create_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "create_by";

	
	
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




	$tdatamst_wasabi_apparel_size["create_by"] = $fdata;
//	create_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "create_at";
	$fdata["GoodName"] = "create_at";
	$fdata["ownerTable"] = "mst_wasabi_apparel_size";
	$fdata["Label"] = GetFieldLabel("mst_wasabi_apparel_size","create_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "create_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "create_at";

	
	
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




	$tdatamst_wasabi_apparel_size["create_at"] = $fdata;


$tables_data["mst_wasabi_apparel_size"]=&$tdatamst_wasabi_apparel_size;
$field_labels["mst_wasabi_apparel_size"] = &$fieldLabelsmst_wasabi_apparel_size;
$fieldToolTips["mst_wasabi_apparel_size"] = &$fieldToolTipsmst_wasabi_apparel_size;
$placeHolders["mst_wasabi_apparel_size"] = &$placeHoldersmst_wasabi_apparel_size;
$page_titles["mst_wasabi_apparel_size"] = &$pageTitlesmst_wasabi_apparel_size;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mst_wasabi_apparel_size"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mst_wasabi_apparel_size"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mst_wasabi_apparel_size()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  jp,  eu,  uk,  us,  update_by,  update_at,  create_by,  create_at";
$proto0["m_strFrom"] = "FROM mst_wasabi_apparel_size";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY id";
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
	"m_strTable" => "mst_wasabi_apparel_size",
	"m_srcTableName" => "mst_wasabi_apparel_size"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "mst_wasabi_apparel_size";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "jp",
	"m_strTable" => "mst_wasabi_apparel_size",
	"m_srcTableName" => "mst_wasabi_apparel_size"
));

$proto8["m_sql"] = "jp";
$proto8["m_srcTableName"] = "mst_wasabi_apparel_size";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "eu",
	"m_strTable" => "mst_wasabi_apparel_size",
	"m_srcTableName" => "mst_wasabi_apparel_size"
));

$proto10["m_sql"] = "eu";
$proto10["m_srcTableName"] = "mst_wasabi_apparel_size";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "uk",
	"m_strTable" => "mst_wasabi_apparel_size",
	"m_srcTableName" => "mst_wasabi_apparel_size"
));

$proto12["m_sql"] = "uk";
$proto12["m_srcTableName"] = "mst_wasabi_apparel_size";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "us",
	"m_strTable" => "mst_wasabi_apparel_size",
	"m_srcTableName" => "mst_wasabi_apparel_size"
));

$proto14["m_sql"] = "us";
$proto14["m_srcTableName"] = "mst_wasabi_apparel_size";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "update_by",
	"m_strTable" => "mst_wasabi_apparel_size",
	"m_srcTableName" => "mst_wasabi_apparel_size"
));

$proto16["m_sql"] = "update_by";
$proto16["m_srcTableName"] = "mst_wasabi_apparel_size";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "update_at",
	"m_strTable" => "mst_wasabi_apparel_size",
	"m_srcTableName" => "mst_wasabi_apparel_size"
));

$proto18["m_sql"] = "update_at";
$proto18["m_srcTableName"] = "mst_wasabi_apparel_size";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "create_by",
	"m_strTable" => "mst_wasabi_apparel_size",
	"m_srcTableName" => "mst_wasabi_apparel_size"
));

$proto20["m_sql"] = "create_by";
$proto20["m_srcTableName"] = "mst_wasabi_apparel_size";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "create_at",
	"m_strTable" => "mst_wasabi_apparel_size",
	"m_srcTableName" => "mst_wasabi_apparel_size"
));

$proto22["m_sql"] = "create_at";
$proto22["m_srcTableName"] = "mst_wasabi_apparel_size";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "mst_wasabi_apparel_size";
$proto25["m_srcTableName"] = "mst_wasabi_apparel_size";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "id";
$proto25["m_columns"][] = "jp";
$proto25["m_columns"][] = "eu";
$proto25["m_columns"][] = "uk";
$proto25["m_columns"][] = "us";
$proto25["m_columns"][] = "update_by";
$proto25["m_columns"][] = "update_at";
$proto25["m_columns"][] = "create_by";
$proto25["m_columns"][] = "create_at";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "mst_wasabi_apparel_size";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "mst_wasabi_apparel_size";
$proto26=array();
$proto26["m_sql"] = "";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "";
$proto26["m_havingmode"] = false;
$proto26["m_inBrackets"] = false;
$proto26["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto26);

$proto24["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto24);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto28=array();
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "mst_wasabi_apparel_size",
	"m_srcTableName" => "mst_wasabi_apparel_size"
));

$proto28["m_column"]=$obj;
$proto28["m_bAsc"] = 1;
$proto28["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto28);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="mst_wasabi_apparel_size";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mst_wasabi_apparel_size = createSqlQuery_mst_wasabi_apparel_size();


	
		;

									

$tdatamst_wasabi_apparel_size[".sqlquery"] = $queryData_mst_wasabi_apparel_size;

include_once(getabspath("include/mst_wasabi_apparel_size_events.php"));
$tableEvents["mst_wasabi_apparel_size"] = new eventclass_mst_wasabi_apparel_size;
$tdatamst_wasabi_apparel_size[".hasEvents"] = true;

?>