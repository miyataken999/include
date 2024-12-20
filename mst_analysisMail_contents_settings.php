<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamst_analysisMail_contents = array();
	$tdatamst_analysisMail_contents[".truncateText"] = true;
	$tdatamst_analysisMail_contents[".NumberOfChars"] = 80;
	$tdatamst_analysisMail_contents[".ShortName"] = "mst_analysisMail_contents";
	$tdatamst_analysisMail_contents[".OwnerID"] = "";
	$tdatamst_analysisMail_contents[".OriginalTable"] = "mst_analysisMail_contents";

//	field labels
$fieldLabelsmst_analysisMail_contents = array();
$fieldToolTipsmst_analysisMail_contents = array();
$pageTitlesmst_analysisMail_contents = array();
$placeHoldersmst_analysisMail_contents = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmst_analysisMail_contents["Japanese"] = array();
	$fieldToolTipsmst_analysisMail_contents["Japanese"] = array();
	$placeHoldersmst_analysisMail_contents["Japanese"] = array();
	$pageTitlesmst_analysisMail_contents["Japanese"] = array();
	$fieldLabelsmst_analysisMail_contents["Japanese"]["id"] = "Id";
	$fieldToolTipsmst_analysisMail_contents["Japanese"]["id"] = "";
	$placeHoldersmst_analysisMail_contents["Japanese"]["id"] = "";
	$fieldLabelsmst_analysisMail_contents["Japanese"]["name"] = "名称";
	$fieldToolTipsmst_analysisMail_contents["Japanese"]["name"] = "";
	$placeHoldersmst_analysisMail_contents["Japanese"]["name"] = "";
	$fieldLabelsmst_analysisMail_contents["Japanese"]["contents"] = "コンテンツ";
	$fieldToolTipsmst_analysisMail_contents["Japanese"]["contents"] = "";
	$placeHoldersmst_analysisMail_contents["Japanese"]["contents"] = "";
	$fieldLabelsmst_analysisMail_contents["Japanese"]["updated_by"] = "更新者";
	$fieldToolTipsmst_analysisMail_contents["Japanese"]["updated_by"] = "";
	$placeHoldersmst_analysisMail_contents["Japanese"]["updated_by"] = "";
	$fieldLabelsmst_analysisMail_contents["Japanese"]["updated_at"] = "更新日";
	$fieldToolTipsmst_analysisMail_contents["Japanese"]["updated_at"] = "";
	$placeHoldersmst_analysisMail_contents["Japanese"]["updated_at"] = "";
	$fieldLabelsmst_analysisMail_contents["Japanese"]["created_by"] = "作成者";
	$fieldToolTipsmst_analysisMail_contents["Japanese"]["created_by"] = "";
	$placeHoldersmst_analysisMail_contents["Japanese"]["created_by"] = "";
	$fieldLabelsmst_analysisMail_contents["Japanese"]["created_at"] = "作成日";
	$fieldToolTipsmst_analysisMail_contents["Japanese"]["created_at"] = "";
	$placeHoldersmst_analysisMail_contents["Japanese"]["created_at"] = "";
	if (count($fieldToolTipsmst_analysisMail_contents["Japanese"]))
		$tdatamst_analysisMail_contents[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmst_analysisMail_contents[""] = array();
	$fieldToolTipsmst_analysisMail_contents[""] = array();
	$placeHoldersmst_analysisMail_contents[""] = array();
	$pageTitlesmst_analysisMail_contents[""] = array();
	$fieldLabelsmst_analysisMail_contents[""]["id"] = "Id";
	$fieldToolTipsmst_analysisMail_contents[""]["id"] = "";
	$placeHoldersmst_analysisMail_contents[""]["id"] = "";
	$fieldLabelsmst_analysisMail_contents[""]["name"] = "Name";
	$fieldToolTipsmst_analysisMail_contents[""]["name"] = "";
	$placeHoldersmst_analysisMail_contents[""]["name"] = "";
	$fieldLabelsmst_analysisMail_contents[""]["contents"] = "Contents";
	$fieldToolTipsmst_analysisMail_contents[""]["contents"] = "";
	$placeHoldersmst_analysisMail_contents[""]["contents"] = "";
	$fieldLabelsmst_analysisMail_contents[""]["updated_by"] = "Updated By";
	$fieldToolTipsmst_analysisMail_contents[""]["updated_by"] = "";
	$placeHoldersmst_analysisMail_contents[""]["updated_by"] = "";
	$fieldLabelsmst_analysisMail_contents[""]["updated_at"] = "Updated At";
	$fieldToolTipsmst_analysisMail_contents[""]["updated_at"] = "";
	$placeHoldersmst_analysisMail_contents[""]["updated_at"] = "";
	$fieldLabelsmst_analysisMail_contents[""]["created_by"] = "Created By";
	$fieldToolTipsmst_analysisMail_contents[""]["created_by"] = "";
	$placeHoldersmst_analysisMail_contents[""]["created_by"] = "";
	$fieldLabelsmst_analysisMail_contents[""]["created_at"] = "Created At";
	$fieldToolTipsmst_analysisMail_contents[""]["created_at"] = "";
	$placeHoldersmst_analysisMail_contents[""]["created_at"] = "";
	if (count($fieldToolTipsmst_analysisMail_contents[""]))
		$tdatamst_analysisMail_contents[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmst_analysisMail_contents["English"] = array();
	$fieldToolTipsmst_analysisMail_contents["English"] = array();
	$placeHoldersmst_analysisMail_contents["English"] = array();
	$pageTitlesmst_analysisMail_contents["English"] = array();
	$fieldLabelsmst_analysisMail_contents["English"]["id"] = "Id";
	$fieldToolTipsmst_analysisMail_contents["English"]["id"] = "";
	$placeHoldersmst_analysisMail_contents["English"]["id"] = "";
	$fieldLabelsmst_analysisMail_contents["English"]["name"] = "Name";
	$fieldToolTipsmst_analysisMail_contents["English"]["name"] = "";
	$placeHoldersmst_analysisMail_contents["English"]["name"] = "";
	$fieldLabelsmst_analysisMail_contents["English"]["contents"] = "Contents";
	$fieldToolTipsmst_analysisMail_contents["English"]["contents"] = "";
	$placeHoldersmst_analysisMail_contents["English"]["contents"] = "";
	$fieldLabelsmst_analysisMail_contents["English"]["updated_by"] = "Updated By";
	$fieldToolTipsmst_analysisMail_contents["English"]["updated_by"] = "";
	$placeHoldersmst_analysisMail_contents["English"]["updated_by"] = "";
	$fieldLabelsmst_analysisMail_contents["English"]["updated_at"] = "Updated At";
	$fieldToolTipsmst_analysisMail_contents["English"]["updated_at"] = "";
	$placeHoldersmst_analysisMail_contents["English"]["updated_at"] = "";
	$fieldLabelsmst_analysisMail_contents["English"]["created_by"] = "Created By";
	$fieldToolTipsmst_analysisMail_contents["English"]["created_by"] = "";
	$placeHoldersmst_analysisMail_contents["English"]["created_by"] = "";
	$fieldLabelsmst_analysisMail_contents["English"]["created_at"] = "Created At";
	$fieldToolTipsmst_analysisMail_contents["English"]["created_at"] = "";
	$placeHoldersmst_analysisMail_contents["English"]["created_at"] = "";
	if (count($fieldToolTipsmst_analysisMail_contents["English"]))
		$tdatamst_analysisMail_contents[".isUseToolTips"] = true;
}


	$tdatamst_analysisMail_contents[".NCSearch"] = true;



$tdatamst_analysisMail_contents[".shortTableName"] = "mst_analysisMail_contents";
$tdatamst_analysisMail_contents[".nSecOptions"] = 0;
$tdatamst_analysisMail_contents[".recsPerRowPrint"] = 1;
$tdatamst_analysisMail_contents[".mainTableOwnerID"] = "";
$tdatamst_analysisMail_contents[".moveNext"] = 1;
$tdatamst_analysisMail_contents[".entityType"] = 0;

$tdatamst_analysisMail_contents[".strOriginalTableName"] = "mst_analysisMail_contents";

	



$tdatamst_analysisMail_contents[".showAddInPopup"] = false;

$tdatamst_analysisMail_contents[".showEditInPopup"] = false;

$tdatamst_analysisMail_contents[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamst_analysisMail_contents[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamst_analysisMail_contents[".fieldsForRegister"] = array();

$tdatamst_analysisMail_contents[".listAjax"] = false;

	$tdatamst_analysisMail_contents[".audit"] = true;

	$tdatamst_analysisMail_contents[".locking"] = false;



$tdatamst_analysisMail_contents[".list"] = true;

$tdatamst_analysisMail_contents[".inlineEdit"] = true;


$tdatamst_analysisMail_contents[".reorderRecordsByHeader"] = true;



$tdatamst_analysisMail_contents[".inlineAdd"] = true;

$tdatamst_analysisMail_contents[".import"] = true;

$tdatamst_analysisMail_contents[".exportTo"] = true;


$tdatamst_analysisMail_contents[".delete"] = true;

$tdatamst_analysisMail_contents[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamst_analysisMail_contents[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamst_analysisMail_contents[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamst_analysisMail_contents[".searchSaving"] = false;
//

$tdatamst_analysisMail_contents[".showSearchPanel"] = true;
		$tdatamst_analysisMail_contents[".flexibleSearch"] = true;

$tdatamst_analysisMail_contents[".isUseAjaxSuggest"] = true;

$tdatamst_analysisMail_contents[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatamst_analysisMail_contents[".ajaxCodeSnippetAdded"] = false;

$tdatamst_analysisMail_contents[".buttonsAdded"] = false;

$tdatamst_analysisMail_contents[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamst_analysisMail_contents[".isUseTimeForSearch"] = false;





$tdatamst_analysisMail_contents[".allSearchFields"] = array();
$tdatamst_analysisMail_contents[".filterFields"] = array();
$tdatamst_analysisMail_contents[".requiredSearchFields"] = array();

$tdatamst_analysisMail_contents[".allSearchFields"][] = "id";
	$tdatamst_analysisMail_contents[".allSearchFields"][] = "name";
	$tdatamst_analysisMail_contents[".allSearchFields"][] = "contents";
	$tdatamst_analysisMail_contents[".allSearchFields"][] = "updated_by";
	$tdatamst_analysisMail_contents[".allSearchFields"][] = "updated_at";
	$tdatamst_analysisMail_contents[".allSearchFields"][] = "created_by";
	$tdatamst_analysisMail_contents[".allSearchFields"][] = "created_at";
	

$tdatamst_analysisMail_contents[".googleLikeFields"] = array();
$tdatamst_analysisMail_contents[".googleLikeFields"][] = "id";
$tdatamst_analysisMail_contents[".googleLikeFields"][] = "name";
$tdatamst_analysisMail_contents[".googleLikeFields"][] = "contents";
$tdatamst_analysisMail_contents[".googleLikeFields"][] = "updated_by";
$tdatamst_analysisMail_contents[".googleLikeFields"][] = "updated_at";
$tdatamst_analysisMail_contents[".googleLikeFields"][] = "created_by";
$tdatamst_analysisMail_contents[".googleLikeFields"][] = "created_at";


$tdatamst_analysisMail_contents[".advSearchFields"] = array();
$tdatamst_analysisMail_contents[".advSearchFields"][] = "id";
$tdatamst_analysisMail_contents[".advSearchFields"][] = "name";
$tdatamst_analysisMail_contents[".advSearchFields"][] = "contents";
$tdatamst_analysisMail_contents[".advSearchFields"][] = "updated_by";
$tdatamst_analysisMail_contents[".advSearchFields"][] = "updated_at";
$tdatamst_analysisMail_contents[".advSearchFields"][] = "created_by";
$tdatamst_analysisMail_contents[".advSearchFields"][] = "created_at";

$tdatamst_analysisMail_contents[".tableType"] = "list";

$tdatamst_analysisMail_contents[".printerPageOrientation"] = 0;
$tdatamst_analysisMail_contents[".nPrinterPageScale"] = 100;

$tdatamst_analysisMail_contents[".nPrinterSplitRecords"] = 40;

$tdatamst_analysisMail_contents[".nPrinterPDFSplitRecords"] = 40;



$tdatamst_analysisMail_contents[".geocodingEnabled"] = false;





$tdatamst_analysisMail_contents[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamst_analysisMail_contents[".pageSize"] = 20;

$tdatamst_analysisMail_contents[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `id` DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamst_analysisMail_contents[".strOrderBy"] = $tstrOrderBy;

$tdatamst_analysisMail_contents[".orderindexes"] = array();
$tdatamst_analysisMail_contents[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "`id`");

$tdatamst_analysisMail_contents[".sqlHead"] = "SELECT `id`,  `name`,  `contents`,  `updated_by`,  `updated_at`,  `created_by`,  `created_at`";
$tdatamst_analysisMail_contents[".sqlFrom"] = "FROM `mst_analysisMail_contents`";
$tdatamst_analysisMail_contents[".sqlWhereExpr"] = "";
$tdatamst_analysisMail_contents[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamst_analysisMail_contents[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamst_analysisMail_contents[".arrGroupsPerPage"] = $arrGPP;

$tdatamst_analysisMail_contents[".highlightSearchResults"] = true;

$tableKeysmst_analysisMail_contents = array();
$tableKeysmst_analysisMail_contents[] = "id";
$tdatamst_analysisMail_contents[".Keys"] = $tableKeysmst_analysisMail_contents;

$tdatamst_analysisMail_contents[".listFields"] = array();
$tdatamst_analysisMail_contents[".listFields"][] = "id";
$tdatamst_analysisMail_contents[".listFields"][] = "name";
$tdatamst_analysisMail_contents[".listFields"][] = "contents";
$tdatamst_analysisMail_contents[".listFields"][] = "updated_by";
$tdatamst_analysisMail_contents[".listFields"][] = "updated_at";
$tdatamst_analysisMail_contents[".listFields"][] = "created_by";
$tdatamst_analysisMail_contents[".listFields"][] = "created_at";

$tdatamst_analysisMail_contents[".hideMobileList"] = array();


$tdatamst_analysisMail_contents[".viewFields"] = array();

$tdatamst_analysisMail_contents[".addFields"] = array();

$tdatamst_analysisMail_contents[".masterListFields"] = array();
$tdatamst_analysisMail_contents[".masterListFields"][] = "id";
$tdatamst_analysisMail_contents[".masterListFields"][] = "name";
$tdatamst_analysisMail_contents[".masterListFields"][] = "contents";
$tdatamst_analysisMail_contents[".masterListFields"][] = "updated_by";
$tdatamst_analysisMail_contents[".masterListFields"][] = "updated_at";
$tdatamst_analysisMail_contents[".masterListFields"][] = "created_by";
$tdatamst_analysisMail_contents[".masterListFields"][] = "created_at";

$tdatamst_analysisMail_contents[".inlineAddFields"] = array();
$tdatamst_analysisMail_contents[".inlineAddFields"][] = "name";
$tdatamst_analysisMail_contents[".inlineAddFields"][] = "contents";

$tdatamst_analysisMail_contents[".editFields"] = array();

$tdatamst_analysisMail_contents[".inlineEditFields"] = array();
$tdatamst_analysisMail_contents[".inlineEditFields"][] = "name";
$tdatamst_analysisMail_contents[".inlineEditFields"][] = "contents";

$tdatamst_analysisMail_contents[".updateSelectedFields"] = array();


$tdatamst_analysisMail_contents[".exportFields"] = array();
$tdatamst_analysisMail_contents[".exportFields"][] = "id";
$tdatamst_analysisMail_contents[".exportFields"][] = "name";
$tdatamst_analysisMail_contents[".exportFields"][] = "contents";
$tdatamst_analysisMail_contents[".exportFields"][] = "updated_by";
$tdatamst_analysisMail_contents[".exportFields"][] = "updated_at";
$tdatamst_analysisMail_contents[".exportFields"][] = "created_by";
$tdatamst_analysisMail_contents[".exportFields"][] = "created_at";

$tdatamst_analysisMail_contents[".importFields"] = array();
$tdatamst_analysisMail_contents[".importFields"][] = "id";
$tdatamst_analysisMail_contents[".importFields"][] = "name";
$tdatamst_analysisMail_contents[".importFields"][] = "contents";

$tdatamst_analysisMail_contents[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "mst_analysisMail_contents";
	$fdata["Label"] = GetFieldLabel("mst_analysisMail_contents","id");
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




	$tdatamst_analysisMail_contents["id"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "mst_analysisMail_contents";
	$fdata["Label"] = GetFieldLabel("mst_analysisMail_contents","name");
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




	$tdatamst_analysisMail_contents["name"] = $fdata;
//	contents
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "contents";
	$fdata["GoodName"] = "contents";
	$fdata["ownerTable"] = "mst_analysisMail_contents";
	$fdata["Label"] = GetFieldLabel("mst_analysisMail_contents","contents");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "contents";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`contents`";

	
	
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




	$tdatamst_analysisMail_contents["contents"] = $fdata;
//	updated_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "updated_by";
	$fdata["GoodName"] = "updated_by";
	$fdata["ownerTable"] = "mst_analysisMail_contents";
	$fdata["Label"] = GetFieldLabel("mst_analysisMail_contents","updated_by");
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




	$tdatamst_analysisMail_contents["updated_by"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "mst_analysisMail_contents";
	$fdata["Label"] = GetFieldLabel("mst_analysisMail_contents","updated_at");
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




	$tdatamst_analysisMail_contents["updated_at"] = $fdata;
//	created_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "created_by";
	$fdata["GoodName"] = "created_by";
	$fdata["ownerTable"] = "mst_analysisMail_contents";
	$fdata["Label"] = GetFieldLabel("mst_analysisMail_contents","created_by");
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




	$tdatamst_analysisMail_contents["created_by"] = $fdata;
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "mst_analysisMail_contents";
	$fdata["Label"] = GetFieldLabel("mst_analysisMail_contents","created_at");
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




	$tdatamst_analysisMail_contents["created_at"] = $fdata;


$tables_data["mst_analysisMail_contents"]=&$tdatamst_analysisMail_contents;
$field_labels["mst_analysisMail_contents"] = &$fieldLabelsmst_analysisMail_contents;
$fieldToolTips["mst_analysisMail_contents"] = &$fieldToolTipsmst_analysisMail_contents;
$placeHolders["mst_analysisMail_contents"] = &$placeHoldersmst_analysisMail_contents;
$page_titles["mst_analysisMail_contents"] = &$pageTitlesmst_analysisMail_contents;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mst_analysisMail_contents"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mst_analysisMail_contents"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mst_analysisMail_contents()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  `name`,  `contents`,  `updated_by`,  `updated_at`,  `created_by`,  `created_at`";
$proto0["m_strFrom"] = "FROM `mst_analysisMail_contents`";
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
	"m_strTable" => "mst_analysisMail_contents",
	"m_srcTableName" => "mst_analysisMail_contents"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "mst_analysisMail_contents";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "mst_analysisMail_contents",
	"m_srcTableName" => "mst_analysisMail_contents"
));

$proto8["m_sql"] = "`name`";
$proto8["m_srcTableName"] = "mst_analysisMail_contents";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "contents",
	"m_strTable" => "mst_analysisMail_contents",
	"m_srcTableName" => "mst_analysisMail_contents"
));

$proto10["m_sql"] = "`contents`";
$proto10["m_srcTableName"] = "mst_analysisMail_contents";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by",
	"m_strTable" => "mst_analysisMail_contents",
	"m_srcTableName" => "mst_analysisMail_contents"
));

$proto12["m_sql"] = "`updated_by`";
$proto12["m_srcTableName"] = "mst_analysisMail_contents";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "mst_analysisMail_contents",
	"m_srcTableName" => "mst_analysisMail_contents"
));

$proto14["m_sql"] = "`updated_at`";
$proto14["m_srcTableName"] = "mst_analysisMail_contents";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "created_by",
	"m_strTable" => "mst_analysisMail_contents",
	"m_srcTableName" => "mst_analysisMail_contents"
));

$proto16["m_sql"] = "`created_by`";
$proto16["m_srcTableName"] = "mst_analysisMail_contents";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "mst_analysisMail_contents",
	"m_srcTableName" => "mst_analysisMail_contents"
));

$proto18["m_sql"] = "`created_at`";
$proto18["m_srcTableName"] = "mst_analysisMail_contents";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "mst_analysisMail_contents";
$proto21["m_srcTableName"] = "mst_analysisMail_contents";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "id";
$proto21["m_columns"][] = "name";
$proto21["m_columns"][] = "contents";
$proto21["m_columns"][] = "updated_by";
$proto21["m_columns"][] = "updated_at";
$proto21["m_columns"][] = "created_by";
$proto21["m_columns"][] = "created_at";
$proto21["m_columns"][] = "sort";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "`mst_analysisMail_contents`";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "mst_analysisMail_contents";
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
												$proto24=array();
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "mst_analysisMail_contents",
	"m_srcTableName" => "mst_analysisMail_contents"
));

$proto24["m_column"]=$obj;
$proto24["m_bAsc"] = 0;
$proto24["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto24);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="mst_analysisMail_contents";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mst_analysisMail_contents = createSqlQuery_mst_analysisMail_contents();


	
		;

							

$tdatamst_analysisMail_contents[".sqlquery"] = $queryData_mst_analysisMail_contents;

$tableEvents["mst_analysisMail_contents"] = new eventsBase;
$tdatamst_analysisMail_contents[".hasEvents"] = false;

?>