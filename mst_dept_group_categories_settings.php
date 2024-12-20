<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamst_dept_group_categories = array();
	$tdatamst_dept_group_categories[".truncateText"] = true;
	$tdatamst_dept_group_categories[".NumberOfChars"] = 80;
	$tdatamst_dept_group_categories[".ShortName"] = "mst_dept_group_categories";
	$tdatamst_dept_group_categories[".OwnerID"] = "";
	$tdatamst_dept_group_categories[".OriginalTable"] = "mst_dept_group_categories";

//	field labels
$fieldLabelsmst_dept_group_categories = array();
$fieldToolTipsmst_dept_group_categories = array();
$pageTitlesmst_dept_group_categories = array();
$placeHoldersmst_dept_group_categories = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmst_dept_group_categories["Japanese"] = array();
	$fieldToolTipsmst_dept_group_categories["Japanese"] = array();
	$placeHoldersmst_dept_group_categories["Japanese"] = array();
	$pageTitlesmst_dept_group_categories["Japanese"] = array();
	$fieldLabelsmst_dept_group_categories["Japanese"]["mst_dept_group_category_id"] = "Mst Dept Group Category Id";
	$fieldToolTipsmst_dept_group_categories["Japanese"]["mst_dept_group_category_id"] = "";
	$placeHoldersmst_dept_group_categories["Japanese"]["mst_dept_group_category_id"] = "";
	$fieldLabelsmst_dept_group_categories["Japanese"]["name"] = "Name";
	$fieldToolTipsmst_dept_group_categories["Japanese"]["name"] = "";
	$placeHoldersmst_dept_group_categories["Japanese"]["name"] = "";
	$fieldLabelsmst_dept_group_categories["Japanese"]["sort"] = "Sort";
	$fieldToolTipsmst_dept_group_categories["Japanese"]["sort"] = "";
	$placeHoldersmst_dept_group_categories["Japanese"]["sort"] = "";
	$fieldLabelsmst_dept_group_categories["Japanese"]["updated_by"] = "Updated By";
	$fieldToolTipsmst_dept_group_categories["Japanese"]["updated_by"] = "";
	$placeHoldersmst_dept_group_categories["Japanese"]["updated_by"] = "";
	$fieldLabelsmst_dept_group_categories["Japanese"]["updated_at"] = "Updated At";
	$fieldToolTipsmst_dept_group_categories["Japanese"]["updated_at"] = "";
	$placeHoldersmst_dept_group_categories["Japanese"]["updated_at"] = "";
	$fieldLabelsmst_dept_group_categories["Japanese"]["created_by"] = "Created By";
	$fieldToolTipsmst_dept_group_categories["Japanese"]["created_by"] = "";
	$placeHoldersmst_dept_group_categories["Japanese"]["created_by"] = "";
	$fieldLabelsmst_dept_group_categories["Japanese"]["created_at"] = "Created At";
	$fieldToolTipsmst_dept_group_categories["Japanese"]["created_at"] = "";
	$placeHoldersmst_dept_group_categories["Japanese"]["created_at"] = "";
	if (count($fieldToolTipsmst_dept_group_categories["Japanese"]))
		$tdatamst_dept_group_categories[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmst_dept_group_categories[""] = array();
	$fieldToolTipsmst_dept_group_categories[""] = array();
	$placeHoldersmst_dept_group_categories[""] = array();
	$pageTitlesmst_dept_group_categories[""] = array();
	$fieldLabelsmst_dept_group_categories[""]["mst_dept_group_category_id"] = "Mst Dept Group Category Id";
	$fieldToolTipsmst_dept_group_categories[""]["mst_dept_group_category_id"] = "";
	$placeHoldersmst_dept_group_categories[""]["mst_dept_group_category_id"] = "";
	$fieldLabelsmst_dept_group_categories[""]["name"] = "Name";
	$fieldToolTipsmst_dept_group_categories[""]["name"] = "";
	$placeHoldersmst_dept_group_categories[""]["name"] = "";
	$fieldLabelsmst_dept_group_categories[""]["sort"] = "Sort";
	$fieldToolTipsmst_dept_group_categories[""]["sort"] = "";
	$placeHoldersmst_dept_group_categories[""]["sort"] = "";
	$fieldLabelsmst_dept_group_categories[""]["updated_by"] = "Updated By";
	$fieldToolTipsmst_dept_group_categories[""]["updated_by"] = "";
	$placeHoldersmst_dept_group_categories[""]["updated_by"] = "";
	$fieldLabelsmst_dept_group_categories[""]["updated_at"] = "Updated At";
	$fieldToolTipsmst_dept_group_categories[""]["updated_at"] = "";
	$placeHoldersmst_dept_group_categories[""]["updated_at"] = "";
	$fieldLabelsmst_dept_group_categories[""]["created_by"] = "Created By";
	$fieldToolTipsmst_dept_group_categories[""]["created_by"] = "";
	$placeHoldersmst_dept_group_categories[""]["created_by"] = "";
	$fieldLabelsmst_dept_group_categories[""]["created_at"] = "Created At";
	$fieldToolTipsmst_dept_group_categories[""]["created_at"] = "";
	$placeHoldersmst_dept_group_categories[""]["created_at"] = "";
	if (count($fieldToolTipsmst_dept_group_categories[""]))
		$tdatamst_dept_group_categories[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmst_dept_group_categories["English"] = array();
	$fieldToolTipsmst_dept_group_categories["English"] = array();
	$placeHoldersmst_dept_group_categories["English"] = array();
	$pageTitlesmst_dept_group_categories["English"] = array();
	$fieldLabelsmst_dept_group_categories["English"]["mst_dept_group_category_id"] = "Mst Dept Group Category Id";
	$fieldToolTipsmst_dept_group_categories["English"]["mst_dept_group_category_id"] = "";
	$placeHoldersmst_dept_group_categories["English"]["mst_dept_group_category_id"] = "";
	$fieldLabelsmst_dept_group_categories["English"]["name"] = "Name";
	$fieldToolTipsmst_dept_group_categories["English"]["name"] = "";
	$placeHoldersmst_dept_group_categories["English"]["name"] = "";
	$fieldLabelsmst_dept_group_categories["English"]["sort"] = "Sort";
	$fieldToolTipsmst_dept_group_categories["English"]["sort"] = "";
	$placeHoldersmst_dept_group_categories["English"]["sort"] = "";
	$fieldLabelsmst_dept_group_categories["English"]["updated_by"] = "Updated By";
	$fieldToolTipsmst_dept_group_categories["English"]["updated_by"] = "";
	$placeHoldersmst_dept_group_categories["English"]["updated_by"] = "";
	$fieldLabelsmst_dept_group_categories["English"]["updated_at"] = "Updated At";
	$fieldToolTipsmst_dept_group_categories["English"]["updated_at"] = "";
	$placeHoldersmst_dept_group_categories["English"]["updated_at"] = "";
	$fieldLabelsmst_dept_group_categories["English"]["created_by"] = "Created By";
	$fieldToolTipsmst_dept_group_categories["English"]["created_by"] = "";
	$placeHoldersmst_dept_group_categories["English"]["created_by"] = "";
	$fieldLabelsmst_dept_group_categories["English"]["created_at"] = "Created At";
	$fieldToolTipsmst_dept_group_categories["English"]["created_at"] = "";
	$placeHoldersmst_dept_group_categories["English"]["created_at"] = "";
	if (count($fieldToolTipsmst_dept_group_categories["English"]))
		$tdatamst_dept_group_categories[".isUseToolTips"] = true;
}


	$tdatamst_dept_group_categories[".NCSearch"] = true;



$tdatamst_dept_group_categories[".shortTableName"] = "mst_dept_group_categories";
$tdatamst_dept_group_categories[".nSecOptions"] = 0;
$tdatamst_dept_group_categories[".recsPerRowPrint"] = 1;
$tdatamst_dept_group_categories[".mainTableOwnerID"] = "";
$tdatamst_dept_group_categories[".moveNext"] = 1;
$tdatamst_dept_group_categories[".entityType"] = 0;

$tdatamst_dept_group_categories[".strOriginalTableName"] = "mst_dept_group_categories";

	



$tdatamst_dept_group_categories[".showAddInPopup"] = false;

$tdatamst_dept_group_categories[".showEditInPopup"] = false;

$tdatamst_dept_group_categories[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamst_dept_group_categories[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamst_dept_group_categories[".fieldsForRegister"] = array();

$tdatamst_dept_group_categories[".listAjax"] = false;

	$tdatamst_dept_group_categories[".audit"] = true;

	$tdatamst_dept_group_categories[".locking"] = false;



$tdatamst_dept_group_categories[".list"] = true;

$tdatamst_dept_group_categories[".inlineEdit"] = true;


$tdatamst_dept_group_categories[".reorderRecordsByHeader"] = true;



$tdatamst_dept_group_categories[".inlineAdd"] = true;

$tdatamst_dept_group_categories[".import"] = true;

$tdatamst_dept_group_categories[".exportTo"] = true;


$tdatamst_dept_group_categories[".delete"] = true;

$tdatamst_dept_group_categories[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamst_dept_group_categories[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamst_dept_group_categories[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamst_dept_group_categories[".searchSaving"] = false;
//

$tdatamst_dept_group_categories[".showSearchPanel"] = true;
		$tdatamst_dept_group_categories[".flexibleSearch"] = true;

$tdatamst_dept_group_categories[".isUseAjaxSuggest"] = true;

$tdatamst_dept_group_categories[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatamst_dept_group_categories[".ajaxCodeSnippetAdded"] = false;

$tdatamst_dept_group_categories[".buttonsAdded"] = false;

$tdatamst_dept_group_categories[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamst_dept_group_categories[".isUseTimeForSearch"] = false;




$tdatamst_dept_group_categories[".detailsLinksOnList"] = "1";

$tdatamst_dept_group_categories[".allSearchFields"] = array();
$tdatamst_dept_group_categories[".filterFields"] = array();
$tdatamst_dept_group_categories[".requiredSearchFields"] = array();

$tdatamst_dept_group_categories[".allSearchFields"][] = "mst_dept_group_category_id";
	$tdatamst_dept_group_categories[".allSearchFields"][] = "name";
	$tdatamst_dept_group_categories[".allSearchFields"][] = "sort";
	$tdatamst_dept_group_categories[".allSearchFields"][] = "updated_by";
	$tdatamst_dept_group_categories[".allSearchFields"][] = "updated_at";
	$tdatamst_dept_group_categories[".allSearchFields"][] = "created_by";
	$tdatamst_dept_group_categories[".allSearchFields"][] = "created_at";
	

$tdatamst_dept_group_categories[".googleLikeFields"] = array();
$tdatamst_dept_group_categories[".googleLikeFields"][] = "mst_dept_group_category_id";
$tdatamst_dept_group_categories[".googleLikeFields"][] = "name";
$tdatamst_dept_group_categories[".googleLikeFields"][] = "sort";
$tdatamst_dept_group_categories[".googleLikeFields"][] = "updated_by";
$tdatamst_dept_group_categories[".googleLikeFields"][] = "updated_at";
$tdatamst_dept_group_categories[".googleLikeFields"][] = "created_by";
$tdatamst_dept_group_categories[".googleLikeFields"][] = "created_at";


$tdatamst_dept_group_categories[".advSearchFields"] = array();
$tdatamst_dept_group_categories[".advSearchFields"][] = "mst_dept_group_category_id";
$tdatamst_dept_group_categories[".advSearchFields"][] = "name";
$tdatamst_dept_group_categories[".advSearchFields"][] = "sort";
$tdatamst_dept_group_categories[".advSearchFields"][] = "updated_by";
$tdatamst_dept_group_categories[".advSearchFields"][] = "updated_at";
$tdatamst_dept_group_categories[".advSearchFields"][] = "created_by";
$tdatamst_dept_group_categories[".advSearchFields"][] = "created_at";

$tdatamst_dept_group_categories[".tableType"] = "list";

$tdatamst_dept_group_categories[".printerPageOrientation"] = 0;
$tdatamst_dept_group_categories[".nPrinterPageScale"] = 100;

$tdatamst_dept_group_categories[".nPrinterSplitRecords"] = 40;

$tdatamst_dept_group_categories[".nPrinterPDFSplitRecords"] = 40;



$tdatamst_dept_group_categories[".geocodingEnabled"] = false;





$tdatamst_dept_group_categories[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamst_dept_group_categories[".pageSize"] = 20;

$tdatamst_dept_group_categories[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamst_dept_group_categories[".strOrderBy"] = $tstrOrderBy;

$tdatamst_dept_group_categories[".orderindexes"] = array();

$tdatamst_dept_group_categories[".sqlHead"] = "SELECT `mst_dept_group_category_id`,  	`name`,  	`sort`,  	`updated_by`,  	`updated_at`,  	`created_by`,  	`created_at`";
$tdatamst_dept_group_categories[".sqlFrom"] = "FROM `mst_dept_group_categories`";
$tdatamst_dept_group_categories[".sqlWhereExpr"] = "";
$tdatamst_dept_group_categories[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamst_dept_group_categories[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamst_dept_group_categories[".arrGroupsPerPage"] = $arrGPP;

$tdatamst_dept_group_categories[".highlightSearchResults"] = true;

$tableKeysmst_dept_group_categories = array();
$tableKeysmst_dept_group_categories[] = "mst_dept_group_category_id";
$tdatamst_dept_group_categories[".Keys"] = $tableKeysmst_dept_group_categories;

$tdatamst_dept_group_categories[".listFields"] = array();
$tdatamst_dept_group_categories[".listFields"][] = "mst_dept_group_category_id";
$tdatamst_dept_group_categories[".listFields"][] = "name";
$tdatamst_dept_group_categories[".listFields"][] = "sort";
$tdatamst_dept_group_categories[".listFields"][] = "updated_by";
$tdatamst_dept_group_categories[".listFields"][] = "updated_at";
$tdatamst_dept_group_categories[".listFields"][] = "created_by";
$tdatamst_dept_group_categories[".listFields"][] = "created_at";

$tdatamst_dept_group_categories[".hideMobileList"] = array();


$tdatamst_dept_group_categories[".viewFields"] = array();

$tdatamst_dept_group_categories[".addFields"] = array();

$tdatamst_dept_group_categories[".masterListFields"] = array();
$tdatamst_dept_group_categories[".masterListFields"][] = "mst_dept_group_category_id";
$tdatamst_dept_group_categories[".masterListFields"][] = "name";
$tdatamst_dept_group_categories[".masterListFields"][] = "sort";
$tdatamst_dept_group_categories[".masterListFields"][] = "updated_by";
$tdatamst_dept_group_categories[".masterListFields"][] = "updated_at";
$tdatamst_dept_group_categories[".masterListFields"][] = "created_by";
$tdatamst_dept_group_categories[".masterListFields"][] = "created_at";

$tdatamst_dept_group_categories[".inlineAddFields"] = array();
$tdatamst_dept_group_categories[".inlineAddFields"][] = "name";
$tdatamst_dept_group_categories[".inlineAddFields"][] = "sort";
$tdatamst_dept_group_categories[".inlineAddFields"][] = "updated_by";
$tdatamst_dept_group_categories[".inlineAddFields"][] = "updated_at";
$tdatamst_dept_group_categories[".inlineAddFields"][] = "created_by";
$tdatamst_dept_group_categories[".inlineAddFields"][] = "created_at";

$tdatamst_dept_group_categories[".editFields"] = array();

$tdatamst_dept_group_categories[".inlineEditFields"] = array();
$tdatamst_dept_group_categories[".inlineEditFields"][] = "name";
$tdatamst_dept_group_categories[".inlineEditFields"][] = "sort";
$tdatamst_dept_group_categories[".inlineEditFields"][] = "updated_by";
$tdatamst_dept_group_categories[".inlineEditFields"][] = "updated_at";
$tdatamst_dept_group_categories[".inlineEditFields"][] = "created_by";
$tdatamst_dept_group_categories[".inlineEditFields"][] = "created_at";

$tdatamst_dept_group_categories[".updateSelectedFields"] = array();


$tdatamst_dept_group_categories[".exportFields"] = array();
$tdatamst_dept_group_categories[".exportFields"][] = "mst_dept_group_category_id";
$tdatamst_dept_group_categories[".exportFields"][] = "name";
$tdatamst_dept_group_categories[".exportFields"][] = "sort";
$tdatamst_dept_group_categories[".exportFields"][] = "updated_by";
$tdatamst_dept_group_categories[".exportFields"][] = "updated_at";
$tdatamst_dept_group_categories[".exportFields"][] = "created_by";
$tdatamst_dept_group_categories[".exportFields"][] = "created_at";

$tdatamst_dept_group_categories[".importFields"] = array();
$tdatamst_dept_group_categories[".importFields"][] = "mst_dept_group_category_id";
$tdatamst_dept_group_categories[".importFields"][] = "name";
$tdatamst_dept_group_categories[".importFields"][] = "sort";
$tdatamst_dept_group_categories[".importFields"][] = "updated_by";
$tdatamst_dept_group_categories[".importFields"][] = "updated_at";
$tdatamst_dept_group_categories[".importFields"][] = "created_by";
$tdatamst_dept_group_categories[".importFields"][] = "created_at";

$tdatamst_dept_group_categories[".printFields"] = array();

//	mst_dept_group_category_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "mst_dept_group_category_id";
	$fdata["GoodName"] = "mst_dept_group_category_id";
	$fdata["ownerTable"] = "mst_dept_group_categories";
	$fdata["Label"] = GetFieldLabel("mst_dept_group_categories","mst_dept_group_category_id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "mst_dept_group_category_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mst_dept_group_category_id`";

	
	
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




	$tdatamst_dept_group_categories["mst_dept_group_category_id"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "mst_dept_group_categories";
	$fdata["Label"] = GetFieldLabel("mst_dept_group_categories","name");
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




	$tdatamst_dept_group_categories["name"] = $fdata;
//	sort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sort";
	$fdata["GoodName"] = "sort";
	$fdata["ownerTable"] = "mst_dept_group_categories";
	$fdata["Label"] = GetFieldLabel("mst_dept_group_categories","sort");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "sort";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`sort`";

	
	
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




	$tdatamst_dept_group_categories["sort"] = $fdata;
//	updated_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "updated_by";
	$fdata["GoodName"] = "updated_by";
	$fdata["ownerTable"] = "mst_dept_group_categories";
	$fdata["Label"] = GetFieldLabel("mst_dept_group_categories","updated_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
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




	$tdatamst_dept_group_categories["updated_by"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "mst_dept_group_categories";
	$fdata["Label"] = GetFieldLabel("mst_dept_group_categories","updated_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "updated_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`updated_at`";

	
	
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




	$tdatamst_dept_group_categories["updated_at"] = $fdata;
//	created_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "created_by";
	$fdata["GoodName"] = "created_by";
	$fdata["ownerTable"] = "mst_dept_group_categories";
	$fdata["Label"] = GetFieldLabel("mst_dept_group_categories","created_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
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




	$tdatamst_dept_group_categories["created_by"] = $fdata;
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "mst_dept_group_categories";
	$fdata["Label"] = GetFieldLabel("mst_dept_group_categories","created_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "created_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`created_at`";

	
	
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




	$tdatamst_dept_group_categories["created_at"] = $fdata;


$tables_data["mst_dept_group_categories"]=&$tdatamst_dept_group_categories;
$field_labels["mst_dept_group_categories"] = &$fieldLabelsmst_dept_group_categories;
$fieldToolTips["mst_dept_group_categories"] = &$fieldToolTipsmst_dept_group_categories;
$placeHolders["mst_dept_group_categories"] = &$placeHoldersmst_dept_group_categories;
$page_titles["mst_dept_group_categories"] = &$pageTitlesmst_dept_group_categories;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mst_dept_group_categories"] = array();
//	mst_dept_group
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="mst_dept_group";
		$detailsParam["dOriginalTable"] = "mst_dept_group";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "mst_dept_group";
	$detailsParam["dCaptionTable"] = GetTableCaption("mst_dept_group");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

/*			$detailsParam["dispChildCount"] = "1";
*/
	$detailsParam["dispChildCount"] = "1";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 0;
		$detailsParam["previewOnView"] = 1;
		
	$detailsTablesData["mst_dept_group_categories"][$dIndex] = $detailsParam;

	
		$detailsTablesData["mst_dept_group_categories"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["mst_dept_group_categories"][$dIndex]["masterKeys"][]="mst_dept_group_category_id";

				$detailsTablesData["mst_dept_group_categories"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["mst_dept_group_categories"][$dIndex]["detailKeys"][]="mst_dept_group_category_id";

// tables which are master tables for current table (detail)
$masterTablesData["mst_dept_group_categories"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mst_dept_group_categories()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`mst_dept_group_category_id`,  	`name`,  	`sort`,  	`updated_by`,  	`updated_at`,  	`created_by`,  	`created_at`";
$proto0["m_strFrom"] = "FROM `mst_dept_group_categories`";
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
	"m_strName" => "mst_dept_group_category_id",
	"m_strTable" => "mst_dept_group_categories",
	"m_srcTableName" => "mst_dept_group_categories"
));

$proto6["m_sql"] = "`mst_dept_group_category_id`";
$proto6["m_srcTableName"] = "mst_dept_group_categories";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "mst_dept_group_categories",
	"m_srcTableName" => "mst_dept_group_categories"
));

$proto8["m_sql"] = "`name`";
$proto8["m_srcTableName"] = "mst_dept_group_categories";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "sort",
	"m_strTable" => "mst_dept_group_categories",
	"m_srcTableName" => "mst_dept_group_categories"
));

$proto10["m_sql"] = "`sort`";
$proto10["m_srcTableName"] = "mst_dept_group_categories";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by",
	"m_strTable" => "mst_dept_group_categories",
	"m_srcTableName" => "mst_dept_group_categories"
));

$proto12["m_sql"] = "`updated_by`";
$proto12["m_srcTableName"] = "mst_dept_group_categories";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "mst_dept_group_categories",
	"m_srcTableName" => "mst_dept_group_categories"
));

$proto14["m_sql"] = "`updated_at`";
$proto14["m_srcTableName"] = "mst_dept_group_categories";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "created_by",
	"m_strTable" => "mst_dept_group_categories",
	"m_srcTableName" => "mst_dept_group_categories"
));

$proto16["m_sql"] = "`created_by`";
$proto16["m_srcTableName"] = "mst_dept_group_categories";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "mst_dept_group_categories",
	"m_srcTableName" => "mst_dept_group_categories"
));

$proto18["m_sql"] = "`created_at`";
$proto18["m_srcTableName"] = "mst_dept_group_categories";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "mst_dept_group_categories";
$proto21["m_srcTableName"] = "mst_dept_group_categories";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "mst_dept_group_category_id";
$proto21["m_columns"][] = "name";
$proto21["m_columns"][] = "sort";
$proto21["m_columns"][] = "updated_by";
$proto21["m_columns"][] = "updated_at";
$proto21["m_columns"][] = "created_by";
$proto21["m_columns"][] = "created_at";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "`mst_dept_group_categories`";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "mst_dept_group_categories";
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
$proto0["m_srcTableName"]="mst_dept_group_categories";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mst_dept_group_categories = createSqlQuery_mst_dept_group_categories();


	
		;

							

$tdatamst_dept_group_categories[".sqlquery"] = $queryData_mst_dept_group_categories;

$tableEvents["mst_dept_group_categories"] = new eventsBase;
$tdatamst_dept_group_categories[".hasEvents"] = false;

?>