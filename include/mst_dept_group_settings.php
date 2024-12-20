<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamst_dept_group = array();
	$tdatamst_dept_group[".truncateText"] = true;
	$tdatamst_dept_group[".NumberOfChars"] = 80;
	$tdatamst_dept_group[".ShortName"] = "mst_dept_group";
	$tdatamst_dept_group[".OwnerID"] = "";
	$tdatamst_dept_group[".OriginalTable"] = "mst_dept_group";

//	field labels
$fieldLabelsmst_dept_group = array();
$fieldToolTipsmst_dept_group = array();
$pageTitlesmst_dept_group = array();
$placeHoldersmst_dept_group = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmst_dept_group["Japanese"] = array();
	$fieldToolTipsmst_dept_group["Japanese"] = array();
	$placeHoldersmst_dept_group["Japanese"] = array();
	$pageTitlesmst_dept_group["Japanese"] = array();
	$fieldLabelsmst_dept_group["Japanese"]["id"] = "Id";
	$fieldToolTipsmst_dept_group["Japanese"]["id"] = "";
	$placeHoldersmst_dept_group["Japanese"]["id"] = "";
	$fieldLabelsmst_dept_group["Japanese"]["name"] = "Name";
	$fieldToolTipsmst_dept_group["Japanese"]["name"] = "";
	$placeHoldersmst_dept_group["Japanese"]["name"] = "";
	$fieldLabelsmst_dept_group["Japanese"]["created_by"] = "Created By";
	$fieldToolTipsmst_dept_group["Japanese"]["created_by"] = "";
	$placeHoldersmst_dept_group["Japanese"]["created_by"] = "";
	$fieldLabelsmst_dept_group["Japanese"]["created_at"] = "Created At";
	$fieldToolTipsmst_dept_group["Japanese"]["created_at"] = "";
	$placeHoldersmst_dept_group["Japanese"]["created_at"] = "";
	$fieldLabelsmst_dept_group["Japanese"]["updated_by"] = "Updated By";
	$fieldToolTipsmst_dept_group["Japanese"]["updated_by"] = "";
	$placeHoldersmst_dept_group["Japanese"]["updated_by"] = "";
	$fieldLabelsmst_dept_group["Japanese"]["updated_at"] = "Updated At";
	$fieldToolTipsmst_dept_group["Japanese"]["updated_at"] = "";
	$placeHoldersmst_dept_group["Japanese"]["updated_at"] = "";
	$fieldLabelsmst_dept_group["Japanese"]["mst_dept_group_category_id"] = "Mst Dept Group Category Id";
	$fieldToolTipsmst_dept_group["Japanese"]["mst_dept_group_category_id"] = "";
	$placeHoldersmst_dept_group["Japanese"]["mst_dept_group_category_id"] = "";
	$fieldLabelsmst_dept_group["Japanese"]["background_color"] = "Background Color";
	$fieldToolTipsmst_dept_group["Japanese"]["background_color"] = "";
	$placeHoldersmst_dept_group["Japanese"]["background_color"] = "";
	$fieldLabelsmst_dept_group["Japanese"]["sort"] = "Sort";
	$fieldToolTipsmst_dept_group["Japanese"]["sort"] = "";
	$placeHoldersmst_dept_group["Japanese"]["sort"] = "";
	if (count($fieldToolTipsmst_dept_group["Japanese"]))
		$tdatamst_dept_group[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmst_dept_group[""] = array();
	$fieldToolTipsmst_dept_group[""] = array();
	$placeHoldersmst_dept_group[""] = array();
	$pageTitlesmst_dept_group[""] = array();
	$fieldLabelsmst_dept_group[""]["id"] = "Id";
	$fieldToolTipsmst_dept_group[""]["id"] = "";
	$placeHoldersmst_dept_group[""]["id"] = "";
	$fieldLabelsmst_dept_group[""]["name"] = "Name";
	$fieldToolTipsmst_dept_group[""]["name"] = "";
	$placeHoldersmst_dept_group[""]["name"] = "";
	$fieldLabelsmst_dept_group[""]["created_by"] = "Created By";
	$fieldToolTipsmst_dept_group[""]["created_by"] = "";
	$placeHoldersmst_dept_group[""]["created_by"] = "";
	$fieldLabelsmst_dept_group[""]["created_at"] = "Created At";
	$fieldToolTipsmst_dept_group[""]["created_at"] = "";
	$placeHoldersmst_dept_group[""]["created_at"] = "";
	$fieldLabelsmst_dept_group[""]["updated_by"] = "Updated By";
	$fieldToolTipsmst_dept_group[""]["updated_by"] = "";
	$placeHoldersmst_dept_group[""]["updated_by"] = "";
	$fieldLabelsmst_dept_group[""]["updated_at"] = "Updated At";
	$fieldToolTipsmst_dept_group[""]["updated_at"] = "";
	$placeHoldersmst_dept_group[""]["updated_at"] = "";
	$fieldLabelsmst_dept_group[""]["mst_dept_group_category_id"] = "Mst Dept Group Category Id";
	$fieldToolTipsmst_dept_group[""]["mst_dept_group_category_id"] = "";
	$placeHoldersmst_dept_group[""]["mst_dept_group_category_id"] = "";
	$fieldLabelsmst_dept_group[""]["background_color"] = "Background Color";
	$fieldToolTipsmst_dept_group[""]["background_color"] = "";
	$placeHoldersmst_dept_group[""]["background_color"] = "";
	$fieldLabelsmst_dept_group[""]["sort"] = "Sort";
	$fieldToolTipsmst_dept_group[""]["sort"] = "";
	$placeHoldersmst_dept_group[""]["sort"] = "";
	if (count($fieldToolTipsmst_dept_group[""]))
		$tdatamst_dept_group[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmst_dept_group["English"] = array();
	$fieldToolTipsmst_dept_group["English"] = array();
	$placeHoldersmst_dept_group["English"] = array();
	$pageTitlesmst_dept_group["English"] = array();
	$fieldLabelsmst_dept_group["English"]["id"] = "Id";
	$fieldToolTipsmst_dept_group["English"]["id"] = "";
	$placeHoldersmst_dept_group["English"]["id"] = "";
	$fieldLabelsmst_dept_group["English"]["name"] = "Name";
	$fieldToolTipsmst_dept_group["English"]["name"] = "";
	$placeHoldersmst_dept_group["English"]["name"] = "";
	$fieldLabelsmst_dept_group["English"]["created_by"] = "Created By";
	$fieldToolTipsmst_dept_group["English"]["created_by"] = "";
	$placeHoldersmst_dept_group["English"]["created_by"] = "";
	$fieldLabelsmst_dept_group["English"]["created_at"] = "Created At";
	$fieldToolTipsmst_dept_group["English"]["created_at"] = "";
	$placeHoldersmst_dept_group["English"]["created_at"] = "";
	$fieldLabelsmst_dept_group["English"]["updated_by"] = "Updated By";
	$fieldToolTipsmst_dept_group["English"]["updated_by"] = "";
	$placeHoldersmst_dept_group["English"]["updated_by"] = "";
	$fieldLabelsmst_dept_group["English"]["updated_at"] = "Updated At";
	$fieldToolTipsmst_dept_group["English"]["updated_at"] = "";
	$placeHoldersmst_dept_group["English"]["updated_at"] = "";
	$fieldLabelsmst_dept_group["English"]["mst_dept_group_category_id"] = "Mst Dept Group Category Id";
	$fieldToolTipsmst_dept_group["English"]["mst_dept_group_category_id"] = "";
	$placeHoldersmst_dept_group["English"]["mst_dept_group_category_id"] = "";
	$fieldLabelsmst_dept_group["English"]["background_color"] = "Background Color";
	$fieldToolTipsmst_dept_group["English"]["background_color"] = "";
	$placeHoldersmst_dept_group["English"]["background_color"] = "";
	$fieldLabelsmst_dept_group["English"]["sort"] = "Sort";
	$fieldToolTipsmst_dept_group["English"]["sort"] = "";
	$placeHoldersmst_dept_group["English"]["sort"] = "";
	if (count($fieldToolTipsmst_dept_group["English"]))
		$tdatamst_dept_group[".isUseToolTips"] = true;
}


	$tdatamst_dept_group[".NCSearch"] = true;



$tdatamst_dept_group[".shortTableName"] = "mst_dept_group";
$tdatamst_dept_group[".nSecOptions"] = 0;
$tdatamst_dept_group[".recsPerRowPrint"] = 1;
$tdatamst_dept_group[".mainTableOwnerID"] = "";
$tdatamst_dept_group[".moveNext"] = 1;
$tdatamst_dept_group[".entityType"] = 0;

$tdatamst_dept_group[".strOriginalTableName"] = "mst_dept_group";

	



$tdatamst_dept_group[".showAddInPopup"] = false;

$tdatamst_dept_group[".showEditInPopup"] = false;

$tdatamst_dept_group[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamst_dept_group[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamst_dept_group[".fieldsForRegister"] = array();

$tdatamst_dept_group[".listAjax"] = false;

	$tdatamst_dept_group[".audit"] = true;

	$tdatamst_dept_group[".locking"] = false;



$tdatamst_dept_group[".list"] = true;

$tdatamst_dept_group[".inlineEdit"] = true;


$tdatamst_dept_group[".reorderRecordsByHeader"] = true;



$tdatamst_dept_group[".inlineAdd"] = true;

$tdatamst_dept_group[".import"] = true;

$tdatamst_dept_group[".exportTo"] = true;


$tdatamst_dept_group[".delete"] = true;

$tdatamst_dept_group[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamst_dept_group[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamst_dept_group[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamst_dept_group[".searchSaving"] = false;
//

$tdatamst_dept_group[".showSearchPanel"] = true;
		$tdatamst_dept_group[".flexibleSearch"] = true;

$tdatamst_dept_group[".isUseAjaxSuggest"] = true;

$tdatamst_dept_group[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																								

$tdatamst_dept_group[".ajaxCodeSnippetAdded"] = false;

$tdatamst_dept_group[".buttonsAdded"] = false;

$tdatamst_dept_group[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamst_dept_group[".isUseTimeForSearch"] = false;



$tdatamst_dept_group[".badgeColor"] = "cfae83";


$tdatamst_dept_group[".allSearchFields"] = array();
$tdatamst_dept_group[".filterFields"] = array();
$tdatamst_dept_group[".requiredSearchFields"] = array();

$tdatamst_dept_group[".allSearchFields"][] = "id";
	$tdatamst_dept_group[".allSearchFields"][] = "name";
	$tdatamst_dept_group[".allSearchFields"][] = "created_by";
	$tdatamst_dept_group[".allSearchFields"][] = "created_at";
	$tdatamst_dept_group[".allSearchFields"][] = "updated_by";
	$tdatamst_dept_group[".allSearchFields"][] = "updated_at";
	$tdatamst_dept_group[".allSearchFields"][] = "mst_dept_group_category_id";
	$tdatamst_dept_group[".allSearchFields"][] = "background_color";
	$tdatamst_dept_group[".allSearchFields"][] = "sort";
	

$tdatamst_dept_group[".googleLikeFields"] = array();
$tdatamst_dept_group[".googleLikeFields"][] = "id";
$tdatamst_dept_group[".googleLikeFields"][] = "name";
$tdatamst_dept_group[".googleLikeFields"][] = "created_by";
$tdatamst_dept_group[".googleLikeFields"][] = "created_at";
$tdatamst_dept_group[".googleLikeFields"][] = "updated_by";
$tdatamst_dept_group[".googleLikeFields"][] = "updated_at";
$tdatamst_dept_group[".googleLikeFields"][] = "mst_dept_group_category_id";
$tdatamst_dept_group[".googleLikeFields"][] = "background_color";
$tdatamst_dept_group[".googleLikeFields"][] = "sort";


$tdatamst_dept_group[".advSearchFields"] = array();
$tdatamst_dept_group[".advSearchFields"][] = "id";
$tdatamst_dept_group[".advSearchFields"][] = "name";
$tdatamst_dept_group[".advSearchFields"][] = "created_by";
$tdatamst_dept_group[".advSearchFields"][] = "created_at";
$tdatamst_dept_group[".advSearchFields"][] = "updated_by";
$tdatamst_dept_group[".advSearchFields"][] = "updated_at";
$tdatamst_dept_group[".advSearchFields"][] = "mst_dept_group_category_id";
$tdatamst_dept_group[".advSearchFields"][] = "background_color";
$tdatamst_dept_group[".advSearchFields"][] = "sort";

$tdatamst_dept_group[".tableType"] = "list";

$tdatamst_dept_group[".printerPageOrientation"] = 0;
$tdatamst_dept_group[".nPrinterPageScale"] = 100;

$tdatamst_dept_group[".nPrinterSplitRecords"] = 40;

$tdatamst_dept_group[".nPrinterPDFSplitRecords"] = 40;



$tdatamst_dept_group[".geocodingEnabled"] = false;





$tdatamst_dept_group[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamst_dept_group[".pageSize"] = 20;

$tdatamst_dept_group[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamst_dept_group[".strOrderBy"] = $tstrOrderBy;

$tdatamst_dept_group[".orderindexes"] = array();

$tdatamst_dept_group[".sqlHead"] = "SELECT `id`,  	`name`,  	`created_by`,  	`created_at`,  	`updated_by`,  	`updated_at`,  	`mst_dept_group_category_id`,  	`background_color`,  	`sort`";
$tdatamst_dept_group[".sqlFrom"] = "FROM `mst_dept_group`";
$tdatamst_dept_group[".sqlWhereExpr"] = "";
$tdatamst_dept_group[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamst_dept_group[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamst_dept_group[".arrGroupsPerPage"] = $arrGPP;

$tdatamst_dept_group[".highlightSearchResults"] = true;

$tableKeysmst_dept_group = array();
$tableKeysmst_dept_group[] = "id";
$tdatamst_dept_group[".Keys"] = $tableKeysmst_dept_group;

$tdatamst_dept_group[".listFields"] = array();
$tdatamst_dept_group[".listFields"][] = "id";
$tdatamst_dept_group[".listFields"][] = "name";
$tdatamst_dept_group[".listFields"][] = "created_by";
$tdatamst_dept_group[".listFields"][] = "created_at";
$tdatamst_dept_group[".listFields"][] = "updated_by";
$tdatamst_dept_group[".listFields"][] = "updated_at";
$tdatamst_dept_group[".listFields"][] = "mst_dept_group_category_id";
$tdatamst_dept_group[".listFields"][] = "background_color";
$tdatamst_dept_group[".listFields"][] = "sort";

$tdatamst_dept_group[".hideMobileList"] = array();


$tdatamst_dept_group[".viewFields"] = array();

$tdatamst_dept_group[".addFields"] = array();

$tdatamst_dept_group[".masterListFields"] = array();
$tdatamst_dept_group[".masterListFields"][] = "id";
$tdatamst_dept_group[".masterListFields"][] = "name";
$tdatamst_dept_group[".masterListFields"][] = "created_by";
$tdatamst_dept_group[".masterListFields"][] = "created_at";
$tdatamst_dept_group[".masterListFields"][] = "updated_by";
$tdatamst_dept_group[".masterListFields"][] = "updated_at";
$tdatamst_dept_group[".masterListFields"][] = "mst_dept_group_category_id";
$tdatamst_dept_group[".masterListFields"][] = "background_color";
$tdatamst_dept_group[".masterListFields"][] = "sort";

$tdatamst_dept_group[".inlineAddFields"] = array();
$tdatamst_dept_group[".inlineAddFields"][] = "name";
$tdatamst_dept_group[".inlineAddFields"][] = "mst_dept_group_category_id";
$tdatamst_dept_group[".inlineAddFields"][] = "background_color";
$tdatamst_dept_group[".inlineAddFields"][] = "sort";

$tdatamst_dept_group[".editFields"] = array();

$tdatamst_dept_group[".inlineEditFields"] = array();
$tdatamst_dept_group[".inlineEditFields"][] = "name";
$tdatamst_dept_group[".inlineEditFields"][] = "mst_dept_group_category_id";
$tdatamst_dept_group[".inlineEditFields"][] = "background_color";
$tdatamst_dept_group[".inlineEditFields"][] = "sort";

$tdatamst_dept_group[".updateSelectedFields"] = array();


$tdatamst_dept_group[".exportFields"] = array();
$tdatamst_dept_group[".exportFields"][] = "id";
$tdatamst_dept_group[".exportFields"][] = "name";
$tdatamst_dept_group[".exportFields"][] = "created_by";
$tdatamst_dept_group[".exportFields"][] = "created_at";
$tdatamst_dept_group[".exportFields"][] = "updated_by";
$tdatamst_dept_group[".exportFields"][] = "updated_at";
$tdatamst_dept_group[".exportFields"][] = "mst_dept_group_category_id";
$tdatamst_dept_group[".exportFields"][] = "background_color";
$tdatamst_dept_group[".exportFields"][] = "sort";

$tdatamst_dept_group[".importFields"] = array();
$tdatamst_dept_group[".importFields"][] = "id";
$tdatamst_dept_group[".importFields"][] = "name";
$tdatamst_dept_group[".importFields"][] = "mst_dept_group_category_id";
$tdatamst_dept_group[".importFields"][] = "background_color";
$tdatamst_dept_group[".importFields"][] = "sort";

$tdatamst_dept_group[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "mst_dept_group";
	$fdata["Label"] = GetFieldLabel("mst_dept_group","id");
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




	$tdatamst_dept_group["id"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "mst_dept_group";
	$fdata["Label"] = GetFieldLabel("mst_dept_group","name");
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




	$tdatamst_dept_group["name"] = $fdata;
//	created_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "created_by";
	$fdata["GoodName"] = "created_by";
	$fdata["ownerTable"] = "mst_dept_group";
	$fdata["Label"] = GetFieldLabel("mst_dept_group","created_by");
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




	$tdatamst_dept_group["created_by"] = $fdata;
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "mst_dept_group";
	$fdata["Label"] = GetFieldLabel("mst_dept_group","created_at");
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




	$tdatamst_dept_group["created_at"] = $fdata;
//	updated_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "updated_by";
	$fdata["GoodName"] = "updated_by";
	$fdata["ownerTable"] = "mst_dept_group";
	$fdata["Label"] = GetFieldLabel("mst_dept_group","updated_by");
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




	$tdatamst_dept_group["updated_by"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "mst_dept_group";
	$fdata["Label"] = GetFieldLabel("mst_dept_group","updated_at");
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




	$tdatamst_dept_group["updated_at"] = $fdata;
//	mst_dept_group_category_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "mst_dept_group_category_id";
	$fdata["GoodName"] = "mst_dept_group_category_id";
	$fdata["ownerTable"] = "mst_dept_group";
	$fdata["Label"] = GetFieldLabel("mst_dept_group","mst_dept_group_category_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
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




	$tdatamst_dept_group["mst_dept_group_category_id"] = $fdata;
//	background_color
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "background_color";
	$fdata["GoodName"] = "background_color";
	$fdata["ownerTable"] = "mst_dept_group";
	$fdata["Label"] = GetFieldLabel("mst_dept_group","background_color");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "background_color";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`background_color`";

	
	
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

	$edata = array("EditFormat" => "ColorPicker");

	
	



	
	
	
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




	$tdatamst_dept_group["background_color"] = $fdata;
//	sort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "sort";
	$fdata["GoodName"] = "sort";
	$fdata["ownerTable"] = "mst_dept_group";
	$fdata["Label"] = GetFieldLabel("mst_dept_group","sort");
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




	$tdatamst_dept_group["sort"] = $fdata;


$tables_data["mst_dept_group"]=&$tdatamst_dept_group;
$field_labels["mst_dept_group"] = &$fieldLabelsmst_dept_group;
$fieldToolTips["mst_dept_group"] = &$fieldToolTipsmst_dept_group;
$placeHolders["mst_dept_group"] = &$placeHoldersmst_dept_group;
$page_titles["mst_dept_group"] = &$pageTitlesmst_dept_group;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mst_dept_group"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mst_dept_group"] = array();


	
				$strOriginalDetailsTable="mst_dept_group_categories";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="mst_dept_group_categories";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "mst_dept_group_categories";
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
					$masterTablesData["mst_dept_group"][0] = $masterParams;
				$masterTablesData["mst_dept_group"][0]["masterKeys"] = array();
	$masterTablesData["mst_dept_group"][0]["masterKeys"][]="mst_dept_group_category_id";
				$masterTablesData["mst_dept_group"][0]["detailKeys"] = array();
	$masterTablesData["mst_dept_group"][0]["detailKeys"][]="mst_dept_group_category_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mst_dept_group()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  	`name`,  	`created_by`,  	`created_at`,  	`updated_by`,  	`updated_at`,  	`mst_dept_group_category_id`,  	`background_color`,  	`sort`";
$proto0["m_strFrom"] = "FROM `mst_dept_group`";
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
	"m_strTable" => "mst_dept_group",
	"m_srcTableName" => "mst_dept_group"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "mst_dept_group";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "mst_dept_group",
	"m_srcTableName" => "mst_dept_group"
));

$proto8["m_sql"] = "`name`";
$proto8["m_srcTableName"] = "mst_dept_group";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "created_by",
	"m_strTable" => "mst_dept_group",
	"m_srcTableName" => "mst_dept_group"
));

$proto10["m_sql"] = "`created_by`";
$proto10["m_srcTableName"] = "mst_dept_group";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "mst_dept_group",
	"m_srcTableName" => "mst_dept_group"
));

$proto12["m_sql"] = "`created_at`";
$proto12["m_srcTableName"] = "mst_dept_group";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by",
	"m_strTable" => "mst_dept_group",
	"m_srcTableName" => "mst_dept_group"
));

$proto14["m_sql"] = "`updated_by`";
$proto14["m_srcTableName"] = "mst_dept_group";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "mst_dept_group",
	"m_srcTableName" => "mst_dept_group"
));

$proto16["m_sql"] = "`updated_at`";
$proto16["m_srcTableName"] = "mst_dept_group";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "mst_dept_group_category_id",
	"m_strTable" => "mst_dept_group",
	"m_srcTableName" => "mst_dept_group"
));

$proto18["m_sql"] = "`mst_dept_group_category_id`";
$proto18["m_srcTableName"] = "mst_dept_group";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "background_color",
	"m_strTable" => "mst_dept_group",
	"m_srcTableName" => "mst_dept_group"
));

$proto20["m_sql"] = "`background_color`";
$proto20["m_srcTableName"] = "mst_dept_group";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "sort",
	"m_strTable" => "mst_dept_group",
	"m_srcTableName" => "mst_dept_group"
));

$proto22["m_sql"] = "`sort`";
$proto22["m_srcTableName"] = "mst_dept_group";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "mst_dept_group";
$proto25["m_srcTableName"] = "mst_dept_group";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "id";
$proto25["m_columns"][] = "name";
$proto25["m_columns"][] = "created_by";
$proto25["m_columns"][] = "created_at";
$proto25["m_columns"][] = "updated_by";
$proto25["m_columns"][] = "updated_at";
$proto25["m_columns"][] = "mst_dept_group_category_id";
$proto25["m_columns"][] = "background_color";
$proto25["m_columns"][] = "sort";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "`mst_dept_group`";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "mst_dept_group";
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
$proto0["m_srcTableName"]="mst_dept_group";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mst_dept_group = createSqlQuery_mst_dept_group();


	
		;

									

$tdatamst_dept_group[".sqlquery"] = $queryData_mst_dept_group;

$tableEvents["mst_dept_group"] = new eventsBase;
$tdatamst_dept_group[".hasEvents"] = false;

?>