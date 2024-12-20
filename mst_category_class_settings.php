<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamst_category_class = array();
	$tdatamst_category_class[".truncateText"] = true;
	$tdatamst_category_class[".NumberOfChars"] = 80;
	$tdatamst_category_class[".ShortName"] = "mst_category_class";
	$tdatamst_category_class[".OwnerID"] = "";
	$tdatamst_category_class[".OriginalTable"] = "mst_category_class";

//	field labels
$fieldLabelsmst_category_class = array();
$fieldToolTipsmst_category_class = array();
$pageTitlesmst_category_class = array();
$placeHoldersmst_category_class = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmst_category_class["Japanese"] = array();
	$fieldToolTipsmst_category_class["Japanese"] = array();
	$placeHoldersmst_category_class["Japanese"] = array();
	$pageTitlesmst_category_class["Japanese"] = array();
	$fieldLabelsmst_category_class["Japanese"]["id"] = "Id";
	$fieldToolTipsmst_category_class["Japanese"]["id"] = "";
	$placeHoldersmst_category_class["Japanese"]["id"] = "";
	$fieldLabelsmst_category_class["Japanese"]["name"] = "Name";
	$fieldToolTipsmst_category_class["Japanese"]["name"] = "";
	$placeHoldersmst_category_class["Japanese"]["name"] = "";
	$fieldLabelsmst_category_class["Japanese"]["sort"] = "Sort";
	$fieldToolTipsmst_category_class["Japanese"]["sort"] = "";
	$placeHoldersmst_category_class["Japanese"]["sort"] = "";
	$fieldLabelsmst_category_class["Japanese"]["create_by"] = "Create By";
	$fieldToolTipsmst_category_class["Japanese"]["create_by"] = "";
	$placeHoldersmst_category_class["Japanese"]["create_by"] = "";
	$fieldLabelsmst_category_class["Japanese"]["create_at"] = "Create At";
	$fieldToolTipsmst_category_class["Japanese"]["create_at"] = "";
	$placeHoldersmst_category_class["Japanese"]["create_at"] = "";
	$fieldLabelsmst_category_class["Japanese"]["update_by"] = "Update By";
	$fieldToolTipsmst_category_class["Japanese"]["update_by"] = "";
	$placeHoldersmst_category_class["Japanese"]["update_by"] = "";
	$fieldLabelsmst_category_class["Japanese"]["update_at"] = "Update At";
	$fieldToolTipsmst_category_class["Japanese"]["update_at"] = "";
	$placeHoldersmst_category_class["Japanese"]["update_at"] = "";
	if (count($fieldToolTipsmst_category_class["Japanese"]))
		$tdatamst_category_class[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmst_category_class[""] = array();
	$fieldToolTipsmst_category_class[""] = array();
	$placeHoldersmst_category_class[""] = array();
	$pageTitlesmst_category_class[""] = array();
	$fieldLabelsmst_category_class[""]["id"] = "Id";
	$fieldToolTipsmst_category_class[""]["id"] = "";
	$placeHoldersmst_category_class[""]["id"] = "";
	$fieldLabelsmst_category_class[""]["name"] = "Name";
	$fieldToolTipsmst_category_class[""]["name"] = "";
	$placeHoldersmst_category_class[""]["name"] = "";
	$fieldLabelsmst_category_class[""]["sort"] = "Sort";
	$fieldToolTipsmst_category_class[""]["sort"] = "";
	$placeHoldersmst_category_class[""]["sort"] = "";
	$fieldLabelsmst_category_class[""]["create_by"] = "Create By";
	$fieldToolTipsmst_category_class[""]["create_by"] = "";
	$placeHoldersmst_category_class[""]["create_by"] = "";
	$fieldLabelsmst_category_class[""]["create_at"] = "Create At";
	$fieldToolTipsmst_category_class[""]["create_at"] = "";
	$placeHoldersmst_category_class[""]["create_at"] = "";
	$fieldLabelsmst_category_class[""]["update_by"] = "Update By";
	$fieldToolTipsmst_category_class[""]["update_by"] = "";
	$placeHoldersmst_category_class[""]["update_by"] = "";
	$fieldLabelsmst_category_class[""]["update_at"] = "Update At";
	$fieldToolTipsmst_category_class[""]["update_at"] = "";
	$placeHoldersmst_category_class[""]["update_at"] = "";
	if (count($fieldToolTipsmst_category_class[""]))
		$tdatamst_category_class[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmst_category_class["English"] = array();
	$fieldToolTipsmst_category_class["English"] = array();
	$placeHoldersmst_category_class["English"] = array();
	$pageTitlesmst_category_class["English"] = array();
	$fieldLabelsmst_category_class["English"]["id"] = "Id";
	$fieldToolTipsmst_category_class["English"]["id"] = "";
	$placeHoldersmst_category_class["English"]["id"] = "";
	$fieldLabelsmst_category_class["English"]["name"] = "Name";
	$fieldToolTipsmst_category_class["English"]["name"] = "";
	$placeHoldersmst_category_class["English"]["name"] = "";
	$fieldLabelsmst_category_class["English"]["sort"] = "Sort";
	$fieldToolTipsmst_category_class["English"]["sort"] = "";
	$placeHoldersmst_category_class["English"]["sort"] = "";
	$fieldLabelsmst_category_class["English"]["create_by"] = "Create By";
	$fieldToolTipsmst_category_class["English"]["create_by"] = "";
	$placeHoldersmst_category_class["English"]["create_by"] = "";
	$fieldLabelsmst_category_class["English"]["create_at"] = "Create At";
	$fieldToolTipsmst_category_class["English"]["create_at"] = "";
	$placeHoldersmst_category_class["English"]["create_at"] = "";
	$fieldLabelsmst_category_class["English"]["update_by"] = "Update By";
	$fieldToolTipsmst_category_class["English"]["update_by"] = "";
	$placeHoldersmst_category_class["English"]["update_by"] = "";
	$fieldLabelsmst_category_class["English"]["update_at"] = "Update At";
	$fieldToolTipsmst_category_class["English"]["update_at"] = "";
	$placeHoldersmst_category_class["English"]["update_at"] = "";
	if (count($fieldToolTipsmst_category_class["English"]))
		$tdatamst_category_class[".isUseToolTips"] = true;
}


	$tdatamst_category_class[".NCSearch"] = true;



$tdatamst_category_class[".shortTableName"] = "mst_category_class";
$tdatamst_category_class[".nSecOptions"] = 0;
$tdatamst_category_class[".recsPerRowPrint"] = 1;
$tdatamst_category_class[".mainTableOwnerID"] = "";
$tdatamst_category_class[".moveNext"] = 1;
$tdatamst_category_class[".entityType"] = 0;

$tdatamst_category_class[".strOriginalTableName"] = "mst_category_class";

	



$tdatamst_category_class[".showAddInPopup"] = false;

$tdatamst_category_class[".showEditInPopup"] = false;

$tdatamst_category_class[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamst_category_class[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamst_category_class[".fieldsForRegister"] = array();

$tdatamst_category_class[".listAjax"] = false;

	$tdatamst_category_class[".audit"] = false;

	$tdatamst_category_class[".locking"] = false;



$tdatamst_category_class[".list"] = true;

$tdatamst_category_class[".inlineEdit"] = true;


$tdatamst_category_class[".reorderRecordsByHeader"] = true;



$tdatamst_category_class[".inlineAdd"] = true;

$tdatamst_category_class[".import"] = true;

$tdatamst_category_class[".exportTo"] = true;


$tdatamst_category_class[".delete"] = true;

$tdatamst_category_class[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamst_category_class[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamst_category_class[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamst_category_class[".searchSaving"] = false;
//

$tdatamst_category_class[".showSearchPanel"] = true;
		$tdatamst_category_class[".flexibleSearch"] = true;

$tdatamst_category_class[".isUseAjaxSuggest"] = true;

$tdatamst_category_class[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatamst_category_class[".ajaxCodeSnippetAdded"] = false;

$tdatamst_category_class[".buttonsAdded"] = false;

$tdatamst_category_class[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamst_category_class[".isUseTimeForSearch"] = false;





$tdatamst_category_class[".allSearchFields"] = array();
$tdatamst_category_class[".filterFields"] = array();
$tdatamst_category_class[".requiredSearchFields"] = array();

$tdatamst_category_class[".allSearchFields"][] = "id";
	$tdatamst_category_class[".allSearchFields"][] = "name";
	$tdatamst_category_class[".allSearchFields"][] = "sort";
	$tdatamst_category_class[".allSearchFields"][] = "create_by";
	$tdatamst_category_class[".allSearchFields"][] = "create_at";
	$tdatamst_category_class[".allSearchFields"][] = "update_by";
	$tdatamst_category_class[".allSearchFields"][] = "update_at";
	

$tdatamst_category_class[".googleLikeFields"] = array();
$tdatamst_category_class[".googleLikeFields"][] = "id";
$tdatamst_category_class[".googleLikeFields"][] = "name";
$tdatamst_category_class[".googleLikeFields"][] = "sort";
$tdatamst_category_class[".googleLikeFields"][] = "create_by";
$tdatamst_category_class[".googleLikeFields"][] = "create_at";
$tdatamst_category_class[".googleLikeFields"][] = "update_by";
$tdatamst_category_class[".googleLikeFields"][] = "update_at";


$tdatamst_category_class[".advSearchFields"] = array();
$tdatamst_category_class[".advSearchFields"][] = "id";
$tdatamst_category_class[".advSearchFields"][] = "name";
$tdatamst_category_class[".advSearchFields"][] = "sort";
$tdatamst_category_class[".advSearchFields"][] = "create_by";
$tdatamst_category_class[".advSearchFields"][] = "create_at";
$tdatamst_category_class[".advSearchFields"][] = "update_by";
$tdatamst_category_class[".advSearchFields"][] = "update_at";

$tdatamst_category_class[".tableType"] = "list";

$tdatamst_category_class[".printerPageOrientation"] = 0;
$tdatamst_category_class[".nPrinterPageScale"] = 100;

$tdatamst_category_class[".nPrinterSplitRecords"] = 40;

$tdatamst_category_class[".nPrinterPDFSplitRecords"] = 40;



$tdatamst_category_class[".geocodingEnabled"] = false;





$tdatamst_category_class[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamst_category_class[".pageSize"] = 20;

$tdatamst_category_class[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `sort`";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamst_category_class[".strOrderBy"] = $tstrOrderBy;

$tdatamst_category_class[".orderindexes"] = array();
$tdatamst_category_class[".orderindexes"][] = array(3, (1 ? "ASC" : "DESC"), "`sort`");

$tdatamst_category_class[".sqlHead"] = "SELECT `id`,  `name`,  `sort`,  `create_by`,  `create_at`,  `update_by`,  `update_at`";
$tdatamst_category_class[".sqlFrom"] = "FROM `mst_category_class`";
$tdatamst_category_class[".sqlWhereExpr"] = "";
$tdatamst_category_class[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamst_category_class[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamst_category_class[".arrGroupsPerPage"] = $arrGPP;

$tdatamst_category_class[".highlightSearchResults"] = true;

$tableKeysmst_category_class = array();
$tableKeysmst_category_class[] = "id";
$tdatamst_category_class[".Keys"] = $tableKeysmst_category_class;

$tdatamst_category_class[".listFields"] = array();
$tdatamst_category_class[".listFields"][] = "id";
$tdatamst_category_class[".listFields"][] = "name";
$tdatamst_category_class[".listFields"][] = "sort";
$tdatamst_category_class[".listFields"][] = "create_by";
$tdatamst_category_class[".listFields"][] = "create_at";
$tdatamst_category_class[".listFields"][] = "update_by";
$tdatamst_category_class[".listFields"][] = "update_at";

$tdatamst_category_class[".hideMobileList"] = array();


$tdatamst_category_class[".viewFields"] = array();

$tdatamst_category_class[".addFields"] = array();

$tdatamst_category_class[".masterListFields"] = array();
$tdatamst_category_class[".masterListFields"][] = "id";
$tdatamst_category_class[".masterListFields"][] = "name";
$tdatamst_category_class[".masterListFields"][] = "sort";
$tdatamst_category_class[".masterListFields"][] = "create_by";
$tdatamst_category_class[".masterListFields"][] = "create_at";
$tdatamst_category_class[".masterListFields"][] = "update_by";
$tdatamst_category_class[".masterListFields"][] = "update_at";

$tdatamst_category_class[".inlineAddFields"] = array();
$tdatamst_category_class[".inlineAddFields"][] = "name";
$tdatamst_category_class[".inlineAddFields"][] = "sort";

$tdatamst_category_class[".editFields"] = array();

$tdatamst_category_class[".inlineEditFields"] = array();
$tdatamst_category_class[".inlineEditFields"][] = "name";
$tdatamst_category_class[".inlineEditFields"][] = "sort";

$tdatamst_category_class[".updateSelectedFields"] = array();


$tdatamst_category_class[".exportFields"] = array();
$tdatamst_category_class[".exportFields"][] = "id";
$tdatamst_category_class[".exportFields"][] = "name";
$tdatamst_category_class[".exportFields"][] = "sort";

$tdatamst_category_class[".importFields"] = array();
$tdatamst_category_class[".importFields"][] = "id";
$tdatamst_category_class[".importFields"][] = "name";
$tdatamst_category_class[".importFields"][] = "sort";

$tdatamst_category_class[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "mst_category_class";
	$fdata["Label"] = GetFieldLabel("mst_category_class","id");
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




	$tdatamst_category_class["id"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "mst_category_class";
	$fdata["Label"] = GetFieldLabel("mst_category_class","name");
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




	$tdatamst_category_class["name"] = $fdata;
//	sort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sort";
	$fdata["GoodName"] = "sort";
	$fdata["ownerTable"] = "mst_category_class";
	$fdata["Label"] = GetFieldLabel("mst_category_class","sort");
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




	$tdatamst_category_class["sort"] = $fdata;
//	create_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "create_by";
	$fdata["GoodName"] = "create_by";
	$fdata["ownerTable"] = "mst_category_class";
	$fdata["Label"] = GetFieldLabel("mst_category_class","create_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdatamst_category_class["create_by"] = $fdata;
//	create_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "create_at";
	$fdata["GoodName"] = "create_at";
	$fdata["ownerTable"] = "mst_category_class";
	$fdata["Label"] = GetFieldLabel("mst_category_class","create_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdatamst_category_class["create_at"] = $fdata;
//	update_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "update_by";
	$fdata["GoodName"] = "update_by";
	$fdata["ownerTable"] = "mst_category_class";
	$fdata["Label"] = GetFieldLabel("mst_category_class","update_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdatamst_category_class["update_by"] = $fdata;
//	update_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "update_at";
	$fdata["GoodName"] = "update_at";
	$fdata["ownerTable"] = "mst_category_class";
	$fdata["Label"] = GetFieldLabel("mst_category_class","update_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdatamst_category_class["update_at"] = $fdata;


$tables_data["mst_category_class"]=&$tdatamst_category_class;
$field_labels["mst_category_class"] = &$fieldLabelsmst_category_class;
$fieldToolTips["mst_category_class"] = &$fieldToolTipsmst_category_class;
$placeHolders["mst_category_class"] = &$placeHoldersmst_category_class;
$page_titles["mst_category_class"] = &$pageTitlesmst_category_class;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mst_category_class"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mst_category_class"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mst_category_class()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  `name`,  `sort`,  `create_by`,  `create_at`,  `update_by`,  `update_at`";
$proto0["m_strFrom"] = "FROM `mst_category_class`";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY `sort`";
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
	"m_strTable" => "mst_category_class",
	"m_srcTableName" => "mst_category_class"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "mst_category_class";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "mst_category_class",
	"m_srcTableName" => "mst_category_class"
));

$proto8["m_sql"] = "`name`";
$proto8["m_srcTableName"] = "mst_category_class";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "sort",
	"m_strTable" => "mst_category_class",
	"m_srcTableName" => "mst_category_class"
));

$proto10["m_sql"] = "`sort`";
$proto10["m_srcTableName"] = "mst_category_class";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "create_by",
	"m_strTable" => "mst_category_class",
	"m_srcTableName" => "mst_category_class"
));

$proto12["m_sql"] = "`create_by`";
$proto12["m_srcTableName"] = "mst_category_class";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "create_at",
	"m_strTable" => "mst_category_class",
	"m_srcTableName" => "mst_category_class"
));

$proto14["m_sql"] = "`create_at`";
$proto14["m_srcTableName"] = "mst_category_class";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "update_by",
	"m_strTable" => "mst_category_class",
	"m_srcTableName" => "mst_category_class"
));

$proto16["m_sql"] = "`update_by`";
$proto16["m_srcTableName"] = "mst_category_class";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "update_at",
	"m_strTable" => "mst_category_class",
	"m_srcTableName" => "mst_category_class"
));

$proto18["m_sql"] = "`update_at`";
$proto18["m_srcTableName"] = "mst_category_class";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "mst_category_class";
$proto21["m_srcTableName"] = "mst_category_class";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "id";
$proto21["m_columns"][] = "name";
$proto21["m_columns"][] = "sort";
$proto21["m_columns"][] = "create_by";
$proto21["m_columns"][] = "create_at";
$proto21["m_columns"][] = "update_by";
$proto21["m_columns"][] = "update_at";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "`mst_category_class`";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "mst_category_class";
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
	"m_strName" => "sort",
	"m_strTable" => "mst_category_class",
	"m_srcTableName" => "mst_category_class"
));

$proto24["m_column"]=$obj;
$proto24["m_bAsc"] = 1;
$proto24["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto24);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="mst_category_class";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mst_category_class = createSqlQuery_mst_category_class();


	
		;

							

$tdatamst_category_class[".sqlquery"] = $queryData_mst_category_class;

$tableEvents["mst_category_class"] = new eventsBase;
$tdatamst_category_class[".hasEvents"] = false;

?>