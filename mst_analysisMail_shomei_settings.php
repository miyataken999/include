<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamst_analysisMail_shomei = array();
	$tdatamst_analysisMail_shomei[".truncateText"] = true;
	$tdatamst_analysisMail_shomei[".NumberOfChars"] = 80;
	$tdatamst_analysisMail_shomei[".ShortName"] = "mst_analysisMail_shomei";
	$tdatamst_analysisMail_shomei[".OwnerID"] = "";
	$tdatamst_analysisMail_shomei[".OriginalTable"] = "mst_analysisMail_shomei";

//	field labels
$fieldLabelsmst_analysisMail_shomei = array();
$fieldToolTipsmst_analysisMail_shomei = array();
$pageTitlesmst_analysisMail_shomei = array();
$placeHoldersmst_analysisMail_shomei = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmst_analysisMail_shomei["Japanese"] = array();
	$fieldToolTipsmst_analysisMail_shomei["Japanese"] = array();
	$placeHoldersmst_analysisMail_shomei["Japanese"] = array();
	$pageTitlesmst_analysisMail_shomei["Japanese"] = array();
	$fieldLabelsmst_analysisMail_shomei["Japanese"]["id"] = "Id";
	$fieldToolTipsmst_analysisMail_shomei["Japanese"]["id"] = "";
	$placeHoldersmst_analysisMail_shomei["Japanese"]["id"] = "";
	$fieldLabelsmst_analysisMail_shomei["Japanese"]["shomei"] = "署名";
	$fieldToolTipsmst_analysisMail_shomei["Japanese"]["shomei"] = "";
	$placeHoldersmst_analysisMail_shomei["Japanese"]["shomei"] = "";
	$fieldLabelsmst_analysisMail_shomei["Japanese"]["updated_by"] = "更新者";
	$fieldToolTipsmst_analysisMail_shomei["Japanese"]["updated_by"] = "";
	$placeHoldersmst_analysisMail_shomei["Japanese"]["updated_by"] = "";
	$fieldLabelsmst_analysisMail_shomei["Japanese"]["updated_at"] = "更新日";
	$fieldToolTipsmst_analysisMail_shomei["Japanese"]["updated_at"] = "";
	$placeHoldersmst_analysisMail_shomei["Japanese"]["updated_at"] = "";
	$fieldLabelsmst_analysisMail_shomei["Japanese"]["created_by"] = "作成者";
	$fieldToolTipsmst_analysisMail_shomei["Japanese"]["created_by"] = "";
	$placeHoldersmst_analysisMail_shomei["Japanese"]["created_by"] = "";
	$fieldLabelsmst_analysisMail_shomei["Japanese"]["created_at"] = "作成日";
	$fieldToolTipsmst_analysisMail_shomei["Japanese"]["created_at"] = "";
	$placeHoldersmst_analysisMail_shomei["Japanese"]["created_at"] = "";
	if (count($fieldToolTipsmst_analysisMail_shomei["Japanese"]))
		$tdatamst_analysisMail_shomei[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmst_analysisMail_shomei[""] = array();
	$fieldToolTipsmst_analysisMail_shomei[""] = array();
	$placeHoldersmst_analysisMail_shomei[""] = array();
	$pageTitlesmst_analysisMail_shomei[""] = array();
	$fieldLabelsmst_analysisMail_shomei[""]["id"] = "Id";
	$fieldToolTipsmst_analysisMail_shomei[""]["id"] = "";
	$placeHoldersmst_analysisMail_shomei[""]["id"] = "";
	$fieldLabelsmst_analysisMail_shomei[""]["shomei"] = "Shomei";
	$fieldToolTipsmst_analysisMail_shomei[""]["shomei"] = "";
	$placeHoldersmst_analysisMail_shomei[""]["shomei"] = "";
	$fieldLabelsmst_analysisMail_shomei[""]["updated_by"] = "Updated By";
	$fieldToolTipsmst_analysisMail_shomei[""]["updated_by"] = "";
	$placeHoldersmst_analysisMail_shomei[""]["updated_by"] = "";
	$fieldLabelsmst_analysisMail_shomei[""]["updated_at"] = "Updated At";
	$fieldToolTipsmst_analysisMail_shomei[""]["updated_at"] = "";
	$placeHoldersmst_analysisMail_shomei[""]["updated_at"] = "";
	$fieldLabelsmst_analysisMail_shomei[""]["created_by"] = "Created By";
	$fieldToolTipsmst_analysisMail_shomei[""]["created_by"] = "";
	$placeHoldersmst_analysisMail_shomei[""]["created_by"] = "";
	$fieldLabelsmst_analysisMail_shomei[""]["created_at"] = "Created At";
	$fieldToolTipsmst_analysisMail_shomei[""]["created_at"] = "";
	$placeHoldersmst_analysisMail_shomei[""]["created_at"] = "";
	if (count($fieldToolTipsmst_analysisMail_shomei[""]))
		$tdatamst_analysisMail_shomei[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmst_analysisMail_shomei["English"] = array();
	$fieldToolTipsmst_analysisMail_shomei["English"] = array();
	$placeHoldersmst_analysisMail_shomei["English"] = array();
	$pageTitlesmst_analysisMail_shomei["English"] = array();
	$fieldLabelsmst_analysisMail_shomei["English"]["id"] = "Id";
	$fieldToolTipsmst_analysisMail_shomei["English"]["id"] = "";
	$placeHoldersmst_analysisMail_shomei["English"]["id"] = "";
	$fieldLabelsmst_analysisMail_shomei["English"]["shomei"] = "Shomei";
	$fieldToolTipsmst_analysisMail_shomei["English"]["shomei"] = "";
	$placeHoldersmst_analysisMail_shomei["English"]["shomei"] = "";
	$fieldLabelsmst_analysisMail_shomei["English"]["updated_by"] = "Updated By";
	$fieldToolTipsmst_analysisMail_shomei["English"]["updated_by"] = "";
	$placeHoldersmst_analysisMail_shomei["English"]["updated_by"] = "";
	$fieldLabelsmst_analysisMail_shomei["English"]["updated_at"] = "Updated At";
	$fieldToolTipsmst_analysisMail_shomei["English"]["updated_at"] = "";
	$placeHoldersmst_analysisMail_shomei["English"]["updated_at"] = "";
	$fieldLabelsmst_analysisMail_shomei["English"]["created_by"] = "Created By";
	$fieldToolTipsmst_analysisMail_shomei["English"]["created_by"] = "";
	$placeHoldersmst_analysisMail_shomei["English"]["created_by"] = "";
	$fieldLabelsmst_analysisMail_shomei["English"]["created_at"] = "Created At";
	$fieldToolTipsmst_analysisMail_shomei["English"]["created_at"] = "";
	$placeHoldersmst_analysisMail_shomei["English"]["created_at"] = "";
	if (count($fieldToolTipsmst_analysisMail_shomei["English"]))
		$tdatamst_analysisMail_shomei[".isUseToolTips"] = true;
}


	$tdatamst_analysisMail_shomei[".NCSearch"] = true;



$tdatamst_analysisMail_shomei[".shortTableName"] = "mst_analysisMail_shomei";
$tdatamst_analysisMail_shomei[".nSecOptions"] = 0;
$tdatamst_analysisMail_shomei[".recsPerRowPrint"] = 1;
$tdatamst_analysisMail_shomei[".mainTableOwnerID"] = "";
$tdatamst_analysisMail_shomei[".moveNext"] = 1;
$tdatamst_analysisMail_shomei[".entityType"] = 0;

$tdatamst_analysisMail_shomei[".strOriginalTableName"] = "mst_analysisMail_shomei";

	



$tdatamst_analysisMail_shomei[".showAddInPopup"] = false;

$tdatamst_analysisMail_shomei[".showEditInPopup"] = false;

$tdatamst_analysisMail_shomei[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamst_analysisMail_shomei[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamst_analysisMail_shomei[".fieldsForRegister"] = array();

$tdatamst_analysisMail_shomei[".listAjax"] = false;

	$tdatamst_analysisMail_shomei[".audit"] = true;

	$tdatamst_analysisMail_shomei[".locking"] = false;



$tdatamst_analysisMail_shomei[".list"] = true;

$tdatamst_analysisMail_shomei[".inlineEdit"] = true;


$tdatamst_analysisMail_shomei[".reorderRecordsByHeader"] = true;



$tdatamst_analysisMail_shomei[".inlineAdd"] = true;

$tdatamst_analysisMail_shomei[".import"] = true;

$tdatamst_analysisMail_shomei[".exportTo"] = true;


$tdatamst_analysisMail_shomei[".delete"] = true;

$tdatamst_analysisMail_shomei[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamst_analysisMail_shomei[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamst_analysisMail_shomei[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamst_analysisMail_shomei[".searchSaving"] = false;
//

$tdatamst_analysisMail_shomei[".showSearchPanel"] = true;
		$tdatamst_analysisMail_shomei[".flexibleSearch"] = true;

$tdatamst_analysisMail_shomei[".isUseAjaxSuggest"] = true;

$tdatamst_analysisMail_shomei[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatamst_analysisMail_shomei[".ajaxCodeSnippetAdded"] = false;

$tdatamst_analysisMail_shomei[".buttonsAdded"] = false;

$tdatamst_analysisMail_shomei[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamst_analysisMail_shomei[".isUseTimeForSearch"] = false;





$tdatamst_analysisMail_shomei[".allSearchFields"] = array();
$tdatamst_analysisMail_shomei[".filterFields"] = array();
$tdatamst_analysisMail_shomei[".requiredSearchFields"] = array();

$tdatamst_analysisMail_shomei[".allSearchFields"][] = "id";
	$tdatamst_analysisMail_shomei[".allSearchFields"][] = "shomei";
	$tdatamst_analysisMail_shomei[".allSearchFields"][] = "updated_by";
	$tdatamst_analysisMail_shomei[".allSearchFields"][] = "updated_at";
	$tdatamst_analysisMail_shomei[".allSearchFields"][] = "created_by";
	$tdatamst_analysisMail_shomei[".allSearchFields"][] = "created_at";
	

$tdatamst_analysisMail_shomei[".googleLikeFields"] = array();
$tdatamst_analysisMail_shomei[".googleLikeFields"][] = "id";
$tdatamst_analysisMail_shomei[".googleLikeFields"][] = "shomei";
$tdatamst_analysisMail_shomei[".googleLikeFields"][] = "updated_by";
$tdatamst_analysisMail_shomei[".googleLikeFields"][] = "updated_at";
$tdatamst_analysisMail_shomei[".googleLikeFields"][] = "created_by";
$tdatamst_analysisMail_shomei[".googleLikeFields"][] = "created_at";


$tdatamst_analysisMail_shomei[".advSearchFields"] = array();
$tdatamst_analysisMail_shomei[".advSearchFields"][] = "id";
$tdatamst_analysisMail_shomei[".advSearchFields"][] = "shomei";
$tdatamst_analysisMail_shomei[".advSearchFields"][] = "updated_by";
$tdatamst_analysisMail_shomei[".advSearchFields"][] = "updated_at";
$tdatamst_analysisMail_shomei[".advSearchFields"][] = "created_by";
$tdatamst_analysisMail_shomei[".advSearchFields"][] = "created_at";

$tdatamst_analysisMail_shomei[".tableType"] = "list";

$tdatamst_analysisMail_shomei[".printerPageOrientation"] = 0;
$tdatamst_analysisMail_shomei[".nPrinterPageScale"] = 100;

$tdatamst_analysisMail_shomei[".nPrinterSplitRecords"] = 40;

$tdatamst_analysisMail_shomei[".nPrinterPDFSplitRecords"] = 40;



$tdatamst_analysisMail_shomei[".geocodingEnabled"] = false;





$tdatamst_analysisMail_shomei[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamst_analysisMail_shomei[".pageSize"] = 20;

$tdatamst_analysisMail_shomei[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `id` DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamst_analysisMail_shomei[".strOrderBy"] = $tstrOrderBy;

$tdatamst_analysisMail_shomei[".orderindexes"] = array();
$tdatamst_analysisMail_shomei[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "`id`");

$tdatamst_analysisMail_shomei[".sqlHead"] = "SELECT `id`,  `shomei`,  `updated_by`,  `updated_at`,  `created_by`,  `created_at`";
$tdatamst_analysisMail_shomei[".sqlFrom"] = "FROM `mst_analysisMail_shomei`";
$tdatamst_analysisMail_shomei[".sqlWhereExpr"] = "";
$tdatamst_analysisMail_shomei[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamst_analysisMail_shomei[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamst_analysisMail_shomei[".arrGroupsPerPage"] = $arrGPP;

$tdatamst_analysisMail_shomei[".highlightSearchResults"] = true;

$tableKeysmst_analysisMail_shomei = array();
$tableKeysmst_analysisMail_shomei[] = "id";
$tdatamst_analysisMail_shomei[".Keys"] = $tableKeysmst_analysisMail_shomei;

$tdatamst_analysisMail_shomei[".listFields"] = array();
$tdatamst_analysisMail_shomei[".listFields"][] = "id";
$tdatamst_analysisMail_shomei[".listFields"][] = "shomei";
$tdatamst_analysisMail_shomei[".listFields"][] = "updated_by";
$tdatamst_analysisMail_shomei[".listFields"][] = "updated_at";
$tdatamst_analysisMail_shomei[".listFields"][] = "created_by";
$tdatamst_analysisMail_shomei[".listFields"][] = "created_at";

$tdatamst_analysisMail_shomei[".hideMobileList"] = array();


$tdatamst_analysisMail_shomei[".viewFields"] = array();

$tdatamst_analysisMail_shomei[".addFields"] = array();

$tdatamst_analysisMail_shomei[".masterListFields"] = array();
$tdatamst_analysisMail_shomei[".masterListFields"][] = "id";
$tdatamst_analysisMail_shomei[".masterListFields"][] = "shomei";
$tdatamst_analysisMail_shomei[".masterListFields"][] = "updated_by";
$tdatamst_analysisMail_shomei[".masterListFields"][] = "updated_at";
$tdatamst_analysisMail_shomei[".masterListFields"][] = "created_by";
$tdatamst_analysisMail_shomei[".masterListFields"][] = "created_at";

$tdatamst_analysisMail_shomei[".inlineAddFields"] = array();
$tdatamst_analysisMail_shomei[".inlineAddFields"][] = "shomei";

$tdatamst_analysisMail_shomei[".editFields"] = array();

$tdatamst_analysisMail_shomei[".inlineEditFields"] = array();
$tdatamst_analysisMail_shomei[".inlineEditFields"][] = "shomei";

$tdatamst_analysisMail_shomei[".updateSelectedFields"] = array();


$tdatamst_analysisMail_shomei[".exportFields"] = array();
$tdatamst_analysisMail_shomei[".exportFields"][] = "id";
$tdatamst_analysisMail_shomei[".exportFields"][] = "shomei";
$tdatamst_analysisMail_shomei[".exportFields"][] = "updated_by";
$tdatamst_analysisMail_shomei[".exportFields"][] = "updated_at";
$tdatamst_analysisMail_shomei[".exportFields"][] = "created_by";
$tdatamst_analysisMail_shomei[".exportFields"][] = "created_at";

$tdatamst_analysisMail_shomei[".importFields"] = array();
$tdatamst_analysisMail_shomei[".importFields"][] = "id";
$tdatamst_analysisMail_shomei[".importFields"][] = "shomei";

$tdatamst_analysisMail_shomei[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "mst_analysisMail_shomei";
	$fdata["Label"] = GetFieldLabel("mst_analysisMail_shomei","id");
	$fdata["FieldType"] = 20;

	
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




	$tdatamst_analysisMail_shomei["id"] = $fdata;
//	shomei
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "shomei";
	$fdata["GoodName"] = "shomei";
	$fdata["ownerTable"] = "mst_analysisMail_shomei";
	$fdata["Label"] = GetFieldLabel("mst_analysisMail_shomei","shomei");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "shomei";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shomei`";

	
	
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




	$tdatamst_analysisMail_shomei["shomei"] = $fdata;
//	updated_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "updated_by";
	$fdata["GoodName"] = "updated_by";
	$fdata["ownerTable"] = "mst_analysisMail_shomei";
	$fdata["Label"] = GetFieldLabel("mst_analysisMail_shomei","updated_by");
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




	$tdatamst_analysisMail_shomei["updated_by"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "mst_analysisMail_shomei";
	$fdata["Label"] = GetFieldLabel("mst_analysisMail_shomei","updated_at");
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




	$tdatamst_analysisMail_shomei["updated_at"] = $fdata;
//	created_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "created_by";
	$fdata["GoodName"] = "created_by";
	$fdata["ownerTable"] = "mst_analysisMail_shomei";
	$fdata["Label"] = GetFieldLabel("mst_analysisMail_shomei","created_by");
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




	$tdatamst_analysisMail_shomei["created_by"] = $fdata;
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "mst_analysisMail_shomei";
	$fdata["Label"] = GetFieldLabel("mst_analysisMail_shomei","created_at");
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




	$tdatamst_analysisMail_shomei["created_at"] = $fdata;


$tables_data["mst_analysisMail_shomei"]=&$tdatamst_analysisMail_shomei;
$field_labels["mst_analysisMail_shomei"] = &$fieldLabelsmst_analysisMail_shomei;
$fieldToolTips["mst_analysisMail_shomei"] = &$fieldToolTipsmst_analysisMail_shomei;
$placeHolders["mst_analysisMail_shomei"] = &$placeHoldersmst_analysisMail_shomei;
$page_titles["mst_analysisMail_shomei"] = &$pageTitlesmst_analysisMail_shomei;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mst_analysisMail_shomei"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mst_analysisMail_shomei"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mst_analysisMail_shomei()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  `shomei`,  `updated_by`,  `updated_at`,  `created_by`,  `created_at`";
$proto0["m_strFrom"] = "FROM `mst_analysisMail_shomei`";
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
	"m_strTable" => "mst_analysisMail_shomei",
	"m_srcTableName" => "mst_analysisMail_shomei"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "mst_analysisMail_shomei";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "shomei",
	"m_strTable" => "mst_analysisMail_shomei",
	"m_srcTableName" => "mst_analysisMail_shomei"
));

$proto8["m_sql"] = "`shomei`";
$proto8["m_srcTableName"] = "mst_analysisMail_shomei";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by",
	"m_strTable" => "mst_analysisMail_shomei",
	"m_srcTableName" => "mst_analysisMail_shomei"
));

$proto10["m_sql"] = "`updated_by`";
$proto10["m_srcTableName"] = "mst_analysisMail_shomei";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "mst_analysisMail_shomei",
	"m_srcTableName" => "mst_analysisMail_shomei"
));

$proto12["m_sql"] = "`updated_at`";
$proto12["m_srcTableName"] = "mst_analysisMail_shomei";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "created_by",
	"m_strTable" => "mst_analysisMail_shomei",
	"m_srcTableName" => "mst_analysisMail_shomei"
));

$proto14["m_sql"] = "`created_by`";
$proto14["m_srcTableName"] = "mst_analysisMail_shomei";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "mst_analysisMail_shomei",
	"m_srcTableName" => "mst_analysisMail_shomei"
));

$proto16["m_sql"] = "`created_at`";
$proto16["m_srcTableName"] = "mst_analysisMail_shomei";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "mst_analysisMail_shomei";
$proto19["m_srcTableName"] = "mst_analysisMail_shomei";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "id";
$proto19["m_columns"][] = "shomei";
$proto19["m_columns"][] = "updated_by";
$proto19["m_columns"][] = "updated_at";
$proto19["m_columns"][] = "created_by";
$proto19["m_columns"][] = "created_at";
$proto19["m_columns"][] = "sort";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "`mst_analysisMail_shomei`";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "mst_analysisMail_shomei";
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
	"m_strTable" => "mst_analysisMail_shomei",
	"m_srcTableName" => "mst_analysisMail_shomei"
));

$proto22["m_column"]=$obj;
$proto22["m_bAsc"] = 0;
$proto22["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto22);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="mst_analysisMail_shomei";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mst_analysisMail_shomei = createSqlQuery_mst_analysisMail_shomei();


	
		;

						

$tdatamst_analysisMail_shomei[".sqlquery"] = $queryData_mst_analysisMail_shomei;

$tableEvents["mst_analysisMail_shomei"] = new eventsBase;
$tdatamst_analysisMail_shomei[".hasEvents"] = false;

?>