<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamst_sorting_color_apart = array();
	$tdatamst_sorting_color_apart[".truncateText"] = true;
	$tdatamst_sorting_color_apart[".NumberOfChars"] = 80;
	$tdatamst_sorting_color_apart[".ShortName"] = "mst_sorting_color_apart";
	$tdatamst_sorting_color_apart[".OwnerID"] = "";
	$tdatamst_sorting_color_apart[".OriginalTable"] = "mst_sorting_color_apart";

//	field labels
$fieldLabelsmst_sorting_color_apart = array();
$fieldToolTipsmst_sorting_color_apart = array();
$pageTitlesmst_sorting_color_apart = array();
$placeHoldersmst_sorting_color_apart = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmst_sorting_color_apart["Japanese"] = array();
	$fieldToolTipsmst_sorting_color_apart["Japanese"] = array();
	$placeHoldersmst_sorting_color_apart["Japanese"] = array();
	$pageTitlesmst_sorting_color_apart["Japanese"] = array();
	$fieldLabelsmst_sorting_color_apart["Japanese"]["id"] = "Id";
	$fieldToolTipsmst_sorting_color_apart["Japanese"]["id"] = "";
	$placeHoldersmst_sorting_color_apart["Japanese"]["id"] = "";
	$fieldLabelsmst_sorting_color_apart["Japanese"]["sorting_color"] = "Sorting Color";
	$fieldToolTipsmst_sorting_color_apart["Japanese"]["sorting_color"] = "";
	$placeHoldersmst_sorting_color_apart["Japanese"]["sorting_color"] = "";
	$fieldLabelsmst_sorting_color_apart["Japanese"]["intensity"] = "Intensity";
	$fieldToolTipsmst_sorting_color_apart["Japanese"]["intensity"] = "";
	$placeHoldersmst_sorting_color_apart["Japanese"]["intensity"] = "";
	$fieldLabelsmst_sorting_color_apart["Japanese"]["overtone"] = "Overtone";
	$fieldToolTipsmst_sorting_color_apart["Japanese"]["overtone"] = "";
	$placeHoldersmst_sorting_color_apart["Japanese"]["overtone"] = "";
	$fieldLabelsmst_sorting_color_apart["Japanese"]["color"] = "Color";
	$fieldToolTipsmst_sorting_color_apart["Japanese"]["color"] = "";
	$placeHoldersmst_sorting_color_apart["Japanese"]["color"] = "";
	$fieldLabelsmst_sorting_color_apart["Japanese"]["update_at"] = "Update At";
	$fieldToolTipsmst_sorting_color_apart["Japanese"]["update_at"] = "";
	$placeHoldersmst_sorting_color_apart["Japanese"]["update_at"] = "";
	$fieldLabelsmst_sorting_color_apart["Japanese"]["update_by"] = "Update By";
	$fieldToolTipsmst_sorting_color_apart["Japanese"]["update_by"] = "";
	$placeHoldersmst_sorting_color_apart["Japanese"]["update_by"] = "";
	$fieldLabelsmst_sorting_color_apart["Japanese"]["create_at"] = "Create At";
	$fieldToolTipsmst_sorting_color_apart["Japanese"]["create_at"] = "";
	$placeHoldersmst_sorting_color_apart["Japanese"]["create_at"] = "";
	$fieldLabelsmst_sorting_color_apart["Japanese"]["create_by"] = "Create By";
	$fieldToolTipsmst_sorting_color_apart["Japanese"]["create_by"] = "";
	$placeHoldersmst_sorting_color_apart["Japanese"]["create_by"] = "";
	if (count($fieldToolTipsmst_sorting_color_apart["Japanese"]))
		$tdatamst_sorting_color_apart[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmst_sorting_color_apart[""] = array();
	$fieldToolTipsmst_sorting_color_apart[""] = array();
	$placeHoldersmst_sorting_color_apart[""] = array();
	$pageTitlesmst_sorting_color_apart[""] = array();
	$fieldLabelsmst_sorting_color_apart[""]["id"] = "Id";
	$fieldToolTipsmst_sorting_color_apart[""]["id"] = "";
	$placeHoldersmst_sorting_color_apart[""]["id"] = "";
	$fieldLabelsmst_sorting_color_apart[""]["sorting_color"] = "Sorting Color";
	$fieldToolTipsmst_sorting_color_apart[""]["sorting_color"] = "";
	$placeHoldersmst_sorting_color_apart[""]["sorting_color"] = "";
	$fieldLabelsmst_sorting_color_apart[""]["intensity"] = "Intensity";
	$fieldToolTipsmst_sorting_color_apart[""]["intensity"] = "";
	$placeHoldersmst_sorting_color_apart[""]["intensity"] = "";
	$fieldLabelsmst_sorting_color_apart[""]["overtone"] = "Overtone";
	$fieldToolTipsmst_sorting_color_apart[""]["overtone"] = "";
	$placeHoldersmst_sorting_color_apart[""]["overtone"] = "";
	$fieldLabelsmst_sorting_color_apart[""]["color"] = "Color";
	$fieldToolTipsmst_sorting_color_apart[""]["color"] = "";
	$placeHoldersmst_sorting_color_apart[""]["color"] = "";
	$fieldLabelsmst_sorting_color_apart[""]["update_at"] = "Update At";
	$fieldToolTipsmst_sorting_color_apart[""]["update_at"] = "";
	$placeHoldersmst_sorting_color_apart[""]["update_at"] = "";
	$fieldLabelsmst_sorting_color_apart[""]["update_by"] = "Update By";
	$fieldToolTipsmst_sorting_color_apart[""]["update_by"] = "";
	$placeHoldersmst_sorting_color_apart[""]["update_by"] = "";
	$fieldLabelsmst_sorting_color_apart[""]["create_at"] = "Create At";
	$fieldToolTipsmst_sorting_color_apart[""]["create_at"] = "";
	$placeHoldersmst_sorting_color_apart[""]["create_at"] = "";
	$fieldLabelsmst_sorting_color_apart[""]["create_by"] = "Create By";
	$fieldToolTipsmst_sorting_color_apart[""]["create_by"] = "";
	$placeHoldersmst_sorting_color_apart[""]["create_by"] = "";
	if (count($fieldToolTipsmst_sorting_color_apart[""]))
		$tdatamst_sorting_color_apart[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmst_sorting_color_apart["English"] = array();
	$fieldToolTipsmst_sorting_color_apart["English"] = array();
	$placeHoldersmst_sorting_color_apart["English"] = array();
	$pageTitlesmst_sorting_color_apart["English"] = array();
	$fieldLabelsmst_sorting_color_apart["English"]["id"] = "Id";
	$fieldToolTipsmst_sorting_color_apart["English"]["id"] = "";
	$placeHoldersmst_sorting_color_apart["English"]["id"] = "";
	$fieldLabelsmst_sorting_color_apart["English"]["sorting_color"] = "Sorting Color";
	$fieldToolTipsmst_sorting_color_apart["English"]["sorting_color"] = "";
	$placeHoldersmst_sorting_color_apart["English"]["sorting_color"] = "";
	$fieldLabelsmst_sorting_color_apart["English"]["intensity"] = "Intensity";
	$fieldToolTipsmst_sorting_color_apart["English"]["intensity"] = "";
	$placeHoldersmst_sorting_color_apart["English"]["intensity"] = "";
	$fieldLabelsmst_sorting_color_apart["English"]["overtone"] = "Overtone";
	$fieldToolTipsmst_sorting_color_apart["English"]["overtone"] = "";
	$placeHoldersmst_sorting_color_apart["English"]["overtone"] = "";
	$fieldLabelsmst_sorting_color_apart["English"]["color"] = "Color";
	$fieldToolTipsmst_sorting_color_apart["English"]["color"] = "";
	$placeHoldersmst_sorting_color_apart["English"]["color"] = "";
	$fieldLabelsmst_sorting_color_apart["English"]["update_at"] = "Update At";
	$fieldToolTipsmst_sorting_color_apart["English"]["update_at"] = "";
	$placeHoldersmst_sorting_color_apart["English"]["update_at"] = "";
	$fieldLabelsmst_sorting_color_apart["English"]["update_by"] = "Update By";
	$fieldToolTipsmst_sorting_color_apart["English"]["update_by"] = "";
	$placeHoldersmst_sorting_color_apart["English"]["update_by"] = "";
	$fieldLabelsmst_sorting_color_apart["English"]["create_at"] = "Create At";
	$fieldToolTipsmst_sorting_color_apart["English"]["create_at"] = "";
	$placeHoldersmst_sorting_color_apart["English"]["create_at"] = "";
	$fieldLabelsmst_sorting_color_apart["English"]["create_by"] = "Create By";
	$fieldToolTipsmst_sorting_color_apart["English"]["create_by"] = "";
	$placeHoldersmst_sorting_color_apart["English"]["create_by"] = "";
	if (count($fieldToolTipsmst_sorting_color_apart["English"]))
		$tdatamst_sorting_color_apart[".isUseToolTips"] = true;
}


	$tdatamst_sorting_color_apart[".NCSearch"] = true;



$tdatamst_sorting_color_apart[".shortTableName"] = "mst_sorting_color_apart";
$tdatamst_sorting_color_apart[".nSecOptions"] = 0;
$tdatamst_sorting_color_apart[".recsPerRowPrint"] = 1;
$tdatamst_sorting_color_apart[".mainTableOwnerID"] = "";
$tdatamst_sorting_color_apart[".moveNext"] = 1;
$tdatamst_sorting_color_apart[".entityType"] = 0;

$tdatamst_sorting_color_apart[".strOriginalTableName"] = "mst_sorting_color_apart";

	



$tdatamst_sorting_color_apart[".showAddInPopup"] = false;

$tdatamst_sorting_color_apart[".showEditInPopup"] = false;

$tdatamst_sorting_color_apart[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamst_sorting_color_apart[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamst_sorting_color_apart[".fieldsForRegister"] = array();

$tdatamst_sorting_color_apart[".listAjax"] = false;

	$tdatamst_sorting_color_apart[".audit"] = true;

	$tdatamst_sorting_color_apart[".locking"] = false;



$tdatamst_sorting_color_apart[".list"] = true;

$tdatamst_sorting_color_apart[".inlineEdit"] = true;


$tdatamst_sorting_color_apart[".reorderRecordsByHeader"] = true;



$tdatamst_sorting_color_apart[".inlineAdd"] = true;

$tdatamst_sorting_color_apart[".import"] = true;

$tdatamst_sorting_color_apart[".exportTo"] = true;


$tdatamst_sorting_color_apart[".delete"] = true;

$tdatamst_sorting_color_apart[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamst_sorting_color_apart[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamst_sorting_color_apart[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamst_sorting_color_apart[".searchSaving"] = false;
//

$tdatamst_sorting_color_apart[".showSearchPanel"] = true;
		$tdatamst_sorting_color_apart[".flexibleSearch"] = true;

$tdatamst_sorting_color_apart[".isUseAjaxSuggest"] = true;

$tdatamst_sorting_color_apart[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatamst_sorting_color_apart[".ajaxCodeSnippetAdded"] = false;

$tdatamst_sorting_color_apart[".buttonsAdded"] = false;

$tdatamst_sorting_color_apart[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamst_sorting_color_apart[".isUseTimeForSearch"] = false;





$tdatamst_sorting_color_apart[".allSearchFields"] = array();
$tdatamst_sorting_color_apart[".filterFields"] = array();
$tdatamst_sorting_color_apart[".requiredSearchFields"] = array();

$tdatamst_sorting_color_apart[".allSearchFields"][] = "id";
	$tdatamst_sorting_color_apart[".allSearchFields"][] = "sorting_color";
	$tdatamst_sorting_color_apart[".allSearchFields"][] = "intensity";
	$tdatamst_sorting_color_apart[".allSearchFields"][] = "overtone";
	$tdatamst_sorting_color_apart[".allSearchFields"][] = "color";
	$tdatamst_sorting_color_apart[".allSearchFields"][] = "update_at";
	$tdatamst_sorting_color_apart[".allSearchFields"][] = "update_by";
	$tdatamst_sorting_color_apart[".allSearchFields"][] = "create_at";
	$tdatamst_sorting_color_apart[".allSearchFields"][] = "create_by";
	

$tdatamst_sorting_color_apart[".googleLikeFields"] = array();
$tdatamst_sorting_color_apart[".googleLikeFields"][] = "id";
$tdatamst_sorting_color_apart[".googleLikeFields"][] = "sorting_color";
$tdatamst_sorting_color_apart[".googleLikeFields"][] = "intensity";
$tdatamst_sorting_color_apart[".googleLikeFields"][] = "overtone";
$tdatamst_sorting_color_apart[".googleLikeFields"][] = "color";
$tdatamst_sorting_color_apart[".googleLikeFields"][] = "update_at";
$tdatamst_sorting_color_apart[".googleLikeFields"][] = "update_by";
$tdatamst_sorting_color_apart[".googleLikeFields"][] = "create_at";
$tdatamst_sorting_color_apart[".googleLikeFields"][] = "create_by";


$tdatamst_sorting_color_apart[".advSearchFields"] = array();
$tdatamst_sorting_color_apart[".advSearchFields"][] = "id";
$tdatamst_sorting_color_apart[".advSearchFields"][] = "sorting_color";
$tdatamst_sorting_color_apart[".advSearchFields"][] = "intensity";
$tdatamst_sorting_color_apart[".advSearchFields"][] = "overtone";
$tdatamst_sorting_color_apart[".advSearchFields"][] = "color";
$tdatamst_sorting_color_apart[".advSearchFields"][] = "update_at";
$tdatamst_sorting_color_apart[".advSearchFields"][] = "update_by";
$tdatamst_sorting_color_apart[".advSearchFields"][] = "create_at";
$tdatamst_sorting_color_apart[".advSearchFields"][] = "create_by";

$tdatamst_sorting_color_apart[".tableType"] = "list";

$tdatamst_sorting_color_apart[".printerPageOrientation"] = 0;
$tdatamst_sorting_color_apart[".nPrinterPageScale"] = 100;

$tdatamst_sorting_color_apart[".nPrinterSplitRecords"] = 40;

$tdatamst_sorting_color_apart[".nPrinterPDFSplitRecords"] = 40;



$tdatamst_sorting_color_apart[".geocodingEnabled"] = false;





$tdatamst_sorting_color_apart[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamst_sorting_color_apart[".pageSize"] = 100;

$tdatamst_sorting_color_apart[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `id` DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamst_sorting_color_apart[".strOrderBy"] = $tstrOrderBy;

$tdatamst_sorting_color_apart[".orderindexes"] = array();
$tdatamst_sorting_color_apart[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "`id`");

$tdatamst_sorting_color_apart[".sqlHead"] = "SELECT `id`,  `sorting_color`,  `intensity`,  `overtone`,  `color`,  `update_at`,  `update_by`,  `create_at`,  `create_by`";
$tdatamst_sorting_color_apart[".sqlFrom"] = "FROM `mst_sorting_color_apart`";
$tdatamst_sorting_color_apart[".sqlWhereExpr"] = "";
$tdatamst_sorting_color_apart[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamst_sorting_color_apart[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamst_sorting_color_apart[".arrGroupsPerPage"] = $arrGPP;

$tdatamst_sorting_color_apart[".highlightSearchResults"] = true;

$tableKeysmst_sorting_color_apart = array();
$tableKeysmst_sorting_color_apart[] = "id";
$tdatamst_sorting_color_apart[".Keys"] = $tableKeysmst_sorting_color_apart;

$tdatamst_sorting_color_apart[".listFields"] = array();
$tdatamst_sorting_color_apart[".listFields"][] = "id";
$tdatamst_sorting_color_apart[".listFields"][] = "sorting_color";
$tdatamst_sorting_color_apart[".listFields"][] = "intensity";
$tdatamst_sorting_color_apart[".listFields"][] = "overtone";
$tdatamst_sorting_color_apart[".listFields"][] = "color";
$tdatamst_sorting_color_apart[".listFields"][] = "update_at";
$tdatamst_sorting_color_apart[".listFields"][] = "update_by";
$tdatamst_sorting_color_apart[".listFields"][] = "create_at";
$tdatamst_sorting_color_apart[".listFields"][] = "create_by";

$tdatamst_sorting_color_apart[".hideMobileList"] = array();


$tdatamst_sorting_color_apart[".viewFields"] = array();

$tdatamst_sorting_color_apart[".addFields"] = array();

$tdatamst_sorting_color_apart[".masterListFields"] = array();
$tdatamst_sorting_color_apart[".masterListFields"][] = "id";
$tdatamst_sorting_color_apart[".masterListFields"][] = "sorting_color";
$tdatamst_sorting_color_apart[".masterListFields"][] = "intensity";
$tdatamst_sorting_color_apart[".masterListFields"][] = "overtone";
$tdatamst_sorting_color_apart[".masterListFields"][] = "color";
$tdatamst_sorting_color_apart[".masterListFields"][] = "update_at";
$tdatamst_sorting_color_apart[".masterListFields"][] = "update_by";
$tdatamst_sorting_color_apart[".masterListFields"][] = "create_at";
$tdatamst_sorting_color_apart[".masterListFields"][] = "create_by";

$tdatamst_sorting_color_apart[".inlineAddFields"] = array();
$tdatamst_sorting_color_apart[".inlineAddFields"][] = "sorting_color";
$tdatamst_sorting_color_apart[".inlineAddFields"][] = "intensity";
$tdatamst_sorting_color_apart[".inlineAddFields"][] = "overtone";
$tdatamst_sorting_color_apart[".inlineAddFields"][] = "color";

$tdatamst_sorting_color_apart[".editFields"] = array();

$tdatamst_sorting_color_apart[".inlineEditFields"] = array();
$tdatamst_sorting_color_apart[".inlineEditFields"][] = "sorting_color";
$tdatamst_sorting_color_apart[".inlineEditFields"][] = "intensity";
$tdatamst_sorting_color_apart[".inlineEditFields"][] = "overtone";
$tdatamst_sorting_color_apart[".inlineEditFields"][] = "color";

$tdatamst_sorting_color_apart[".updateSelectedFields"] = array();


$tdatamst_sorting_color_apart[".exportFields"] = array();
$tdatamst_sorting_color_apart[".exportFields"][] = "id";
$tdatamst_sorting_color_apart[".exportFields"][] = "sorting_color";
$tdatamst_sorting_color_apart[".exportFields"][] = "intensity";
$tdatamst_sorting_color_apart[".exportFields"][] = "overtone";
$tdatamst_sorting_color_apart[".exportFields"][] = "color";
$tdatamst_sorting_color_apart[".exportFields"][] = "update_at";
$tdatamst_sorting_color_apart[".exportFields"][] = "update_by";
$tdatamst_sorting_color_apart[".exportFields"][] = "create_at";
$tdatamst_sorting_color_apart[".exportFields"][] = "create_by";

$tdatamst_sorting_color_apart[".importFields"] = array();
$tdatamst_sorting_color_apart[".importFields"][] = "id";
$tdatamst_sorting_color_apart[".importFields"][] = "sorting_color";
$tdatamst_sorting_color_apart[".importFields"][] = "intensity";
$tdatamst_sorting_color_apart[".importFields"][] = "overtone";
$tdatamst_sorting_color_apart[".importFields"][] = "color";
$tdatamst_sorting_color_apart[".importFields"][] = "update_at";
$tdatamst_sorting_color_apart[".importFields"][] = "update_by";
$tdatamst_sorting_color_apart[".importFields"][] = "create_at";
$tdatamst_sorting_color_apart[".importFields"][] = "create_by";

$tdatamst_sorting_color_apart[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "mst_sorting_color_apart";
	$fdata["Label"] = GetFieldLabel("mst_sorting_color_apart","id");
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




	$tdatamst_sorting_color_apart["id"] = $fdata;
//	sorting_color
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "sorting_color";
	$fdata["GoodName"] = "sorting_color";
	$fdata["ownerTable"] = "mst_sorting_color_apart";
	$fdata["Label"] = GetFieldLabel("mst_sorting_color_apart","sorting_color");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "sorting_color";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`sorting_color`";

	
	
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




	$tdatamst_sorting_color_apart["sorting_color"] = $fdata;
//	intensity
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "intensity";
	$fdata["GoodName"] = "intensity";
	$fdata["ownerTable"] = "mst_sorting_color_apart";
	$fdata["Label"] = GetFieldLabel("mst_sorting_color_apart","intensity");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "intensity";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`intensity`";

	
	
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
	$edata["LookupTable"] = "mst_Intensity";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "ID0";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Name";

	
	$edata["LookupOrderBy"] = "Sort";

	
	
	
	

	
	
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




	$tdatamst_sorting_color_apart["intensity"] = $fdata;
//	overtone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "overtone";
	$fdata["GoodName"] = "overtone";
	$fdata["ownerTable"] = "mst_sorting_color_apart";
	$fdata["Label"] = GetFieldLabel("mst_sorting_color_apart","overtone");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "overtone";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`overtone`";

	
	
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
	$edata["LookupTable"] = "mst_overtone";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "Id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Name";

	
	$edata["LookupOrderBy"] = "sort";

	
	
	
	

	
	
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




	$tdatamst_sorting_color_apart["overtone"] = $fdata;
//	color
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "color";
	$fdata["GoodName"] = "color";
	$fdata["ownerTable"] = "mst_sorting_color_apart";
	$fdata["Label"] = GetFieldLabel("mst_sorting_color_apart","color");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "color";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`color`";

	
	
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
	$edata["LookupTable"] = "_DIA_DA_COLOR";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "name";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "name";

	
	$edata["LookupOrderBy"] = "sort";

	
	
	
	

	
	
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




	$tdatamst_sorting_color_apart["color"] = $fdata;
//	update_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "update_at";
	$fdata["GoodName"] = "update_at";
	$fdata["ownerTable"] = "mst_sorting_color_apart";
	$fdata["Label"] = GetFieldLabel("mst_sorting_color_apart","update_at");
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




	$tdatamst_sorting_color_apart["update_at"] = $fdata;
//	update_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "update_by";
	$fdata["GoodName"] = "update_by";
	$fdata["ownerTable"] = "mst_sorting_color_apart";
	$fdata["Label"] = GetFieldLabel("mst_sorting_color_apart","update_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "update_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`update_by`";

	
	
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




	$tdatamst_sorting_color_apart["update_by"] = $fdata;
//	create_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "create_at";
	$fdata["GoodName"] = "create_at";
	$fdata["ownerTable"] = "mst_sorting_color_apart";
	$fdata["Label"] = GetFieldLabel("mst_sorting_color_apart","create_at");
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




	$tdatamst_sorting_color_apart["create_at"] = $fdata;
//	create_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "create_by";
	$fdata["GoodName"] = "create_by";
	$fdata["ownerTable"] = "mst_sorting_color_apart";
	$fdata["Label"] = GetFieldLabel("mst_sorting_color_apart","create_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "create_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`create_by`";

	
	
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




	$tdatamst_sorting_color_apart["create_by"] = $fdata;


$tables_data["mst_sorting_color_apart"]=&$tdatamst_sorting_color_apart;
$field_labels["mst_sorting_color_apart"] = &$fieldLabelsmst_sorting_color_apart;
$fieldToolTips["mst_sorting_color_apart"] = &$fieldToolTipsmst_sorting_color_apart;
$placeHolders["mst_sorting_color_apart"] = &$placeHoldersmst_sorting_color_apart;
$page_titles["mst_sorting_color_apart"] = &$pageTitlesmst_sorting_color_apart;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mst_sorting_color_apart"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mst_sorting_color_apart"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mst_sorting_color_apart()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  `sorting_color`,  `intensity`,  `overtone`,  `color`,  `update_at`,  `update_by`,  `create_at`,  `create_by`";
$proto0["m_strFrom"] = "FROM `mst_sorting_color_apart`";
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
	"m_strTable" => "mst_sorting_color_apart",
	"m_srcTableName" => "mst_sorting_color_apart"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "mst_sorting_color_apart";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "sorting_color",
	"m_strTable" => "mst_sorting_color_apart",
	"m_srcTableName" => "mst_sorting_color_apart"
));

$proto8["m_sql"] = "`sorting_color`";
$proto8["m_srcTableName"] = "mst_sorting_color_apart";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "intensity",
	"m_strTable" => "mst_sorting_color_apart",
	"m_srcTableName" => "mst_sorting_color_apart"
));

$proto10["m_sql"] = "`intensity`";
$proto10["m_srcTableName"] = "mst_sorting_color_apart";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "overtone",
	"m_strTable" => "mst_sorting_color_apart",
	"m_srcTableName" => "mst_sorting_color_apart"
));

$proto12["m_sql"] = "`overtone`";
$proto12["m_srcTableName"] = "mst_sorting_color_apart";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "color",
	"m_strTable" => "mst_sorting_color_apart",
	"m_srcTableName" => "mst_sorting_color_apart"
));

$proto14["m_sql"] = "`color`";
$proto14["m_srcTableName"] = "mst_sorting_color_apart";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "update_at",
	"m_strTable" => "mst_sorting_color_apart",
	"m_srcTableName" => "mst_sorting_color_apart"
));

$proto16["m_sql"] = "`update_at`";
$proto16["m_srcTableName"] = "mst_sorting_color_apart";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "update_by",
	"m_strTable" => "mst_sorting_color_apart",
	"m_srcTableName" => "mst_sorting_color_apart"
));

$proto18["m_sql"] = "`update_by`";
$proto18["m_srcTableName"] = "mst_sorting_color_apart";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "create_at",
	"m_strTable" => "mst_sorting_color_apart",
	"m_srcTableName" => "mst_sorting_color_apart"
));

$proto20["m_sql"] = "`create_at`";
$proto20["m_srcTableName"] = "mst_sorting_color_apart";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "create_by",
	"m_strTable" => "mst_sorting_color_apart",
	"m_srcTableName" => "mst_sorting_color_apart"
));

$proto22["m_sql"] = "`create_by`";
$proto22["m_srcTableName"] = "mst_sorting_color_apart";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "mst_sorting_color_apart";
$proto25["m_srcTableName"] = "mst_sorting_color_apart";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "id";
$proto25["m_columns"][] = "sorting_color";
$proto25["m_columns"][] = "intensity";
$proto25["m_columns"][] = "overtone";
$proto25["m_columns"][] = "color";
$proto25["m_columns"][] = "update_at";
$proto25["m_columns"][] = "update_by";
$proto25["m_columns"][] = "create_at";
$proto25["m_columns"][] = "create_by";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "`mst_sorting_color_apart`";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "mst_sorting_color_apart";
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
	"m_strTable" => "mst_sorting_color_apart",
	"m_srcTableName" => "mst_sorting_color_apart"
));

$proto28["m_column"]=$obj;
$proto28["m_bAsc"] = 0;
$proto28["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto28);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="mst_sorting_color_apart";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mst_sorting_color_apart = createSqlQuery_mst_sorting_color_apart();


	
		;

									

$tdatamst_sorting_color_apart[".sqlquery"] = $queryData_mst_sorting_color_apart;

$tableEvents["mst_sorting_color_apart"] = new eventsBase;
$tdatamst_sorting_color_apart[".hasEvents"] = false;

?>