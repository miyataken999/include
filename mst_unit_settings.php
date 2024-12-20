<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamst_unit = array();
	$tdatamst_unit[".truncateText"] = true;
	$tdatamst_unit[".NumberOfChars"] = 80;
	$tdatamst_unit[".ShortName"] = "mst_unit";
	$tdatamst_unit[".OwnerID"] = "";
	$tdatamst_unit[".OriginalTable"] = "mst_unit";

//	field labels
$fieldLabelsmst_unit = array();
$fieldToolTipsmst_unit = array();
$pageTitlesmst_unit = array();
$placeHoldersmst_unit = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmst_unit["Japanese"] = array();
	$fieldToolTipsmst_unit["Japanese"] = array();
	$placeHoldersmst_unit["Japanese"] = array();
	$pageTitlesmst_unit["Japanese"] = array();
	$fieldLabelsmst_unit["Japanese"]["id"] = "Id";
	$fieldToolTipsmst_unit["Japanese"]["id"] = "";
	$placeHoldersmst_unit["Japanese"]["id"] = "";
	$fieldLabelsmst_unit["Japanese"]["name"] = "Name";
	$fieldToolTipsmst_unit["Japanese"]["name"] = "";
	$placeHoldersmst_unit["Japanese"]["name"] = "";
	$fieldLabelsmst_unit["Japanese"]["sort"] = "Sort";
	$fieldToolTipsmst_unit["Japanese"]["sort"] = "";
	$placeHoldersmst_unit["Japanese"]["sort"] = "";
	$fieldLabelsmst_unit["Japanese"]["update_by"] = "更新者";
	$fieldToolTipsmst_unit["Japanese"]["update_by"] = "";
	$placeHoldersmst_unit["Japanese"]["update_by"] = "";
	$fieldLabelsmst_unit["Japanese"]["update_at"] = "更新日";
	$fieldToolTipsmst_unit["Japanese"]["update_at"] = "";
	$placeHoldersmst_unit["Japanese"]["update_at"] = "";
	$fieldLabelsmst_unit["Japanese"]["create_by"] = "登録者";
	$fieldToolTipsmst_unit["Japanese"]["create_by"] = "";
	$placeHoldersmst_unit["Japanese"]["create_by"] = "";
	$fieldLabelsmst_unit["Japanese"]["create_at"] = "登録日";
	$fieldToolTipsmst_unit["Japanese"]["create_at"] = "";
	$placeHoldersmst_unit["Japanese"]["create_at"] = "";
	if (count($fieldToolTipsmst_unit["Japanese"]))
		$tdatamst_unit[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmst_unit[""] = array();
	$fieldToolTipsmst_unit[""] = array();
	$placeHoldersmst_unit[""] = array();
	$pageTitlesmst_unit[""] = array();
	$fieldLabelsmst_unit[""]["id"] = "Id";
	$fieldToolTipsmst_unit[""]["id"] = "";
	$placeHoldersmst_unit[""]["id"] = "";
	$fieldLabelsmst_unit[""]["name"] = "Name";
	$fieldToolTipsmst_unit[""]["name"] = "";
	$placeHoldersmst_unit[""]["name"] = "";
	$fieldLabelsmst_unit[""]["sort"] = "Sort";
	$fieldToolTipsmst_unit[""]["sort"] = "";
	$placeHoldersmst_unit[""]["sort"] = "";
	$fieldLabelsmst_unit[""]["update_by"] = "Update By";
	$fieldToolTipsmst_unit[""]["update_by"] = "";
	$placeHoldersmst_unit[""]["update_by"] = "";
	$fieldLabelsmst_unit[""]["update_at"] = "Update At";
	$fieldToolTipsmst_unit[""]["update_at"] = "";
	$placeHoldersmst_unit[""]["update_at"] = "";
	$fieldLabelsmst_unit[""]["create_by"] = "Create By";
	$fieldToolTipsmst_unit[""]["create_by"] = "";
	$placeHoldersmst_unit[""]["create_by"] = "";
	$fieldLabelsmst_unit[""]["create_at"] = "Create At";
	$fieldToolTipsmst_unit[""]["create_at"] = "";
	$placeHoldersmst_unit[""]["create_at"] = "";
	if (count($fieldToolTipsmst_unit[""]))
		$tdatamst_unit[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmst_unit["English"] = array();
	$fieldToolTipsmst_unit["English"] = array();
	$placeHoldersmst_unit["English"] = array();
	$pageTitlesmst_unit["English"] = array();
	$fieldLabelsmst_unit["English"]["id"] = "Id";
	$fieldToolTipsmst_unit["English"]["id"] = "";
	$placeHoldersmst_unit["English"]["id"] = "";
	$fieldLabelsmst_unit["English"]["name"] = "Name";
	$fieldToolTipsmst_unit["English"]["name"] = "";
	$placeHoldersmst_unit["English"]["name"] = "";
	$fieldLabelsmst_unit["English"]["sort"] = "Sort";
	$fieldToolTipsmst_unit["English"]["sort"] = "";
	$placeHoldersmst_unit["English"]["sort"] = "";
	$fieldLabelsmst_unit["English"]["update_by"] = "Update By";
	$fieldToolTipsmst_unit["English"]["update_by"] = "";
	$placeHoldersmst_unit["English"]["update_by"] = "";
	$fieldLabelsmst_unit["English"]["update_at"] = "Update At";
	$fieldToolTipsmst_unit["English"]["update_at"] = "";
	$placeHoldersmst_unit["English"]["update_at"] = "";
	$fieldLabelsmst_unit["English"]["create_by"] = "Create By";
	$fieldToolTipsmst_unit["English"]["create_by"] = "";
	$placeHoldersmst_unit["English"]["create_by"] = "";
	$fieldLabelsmst_unit["English"]["create_at"] = "Create At";
	$fieldToolTipsmst_unit["English"]["create_at"] = "";
	$placeHoldersmst_unit["English"]["create_at"] = "";
	if (count($fieldToolTipsmst_unit["English"]))
		$tdatamst_unit[".isUseToolTips"] = true;
}


	$tdatamst_unit[".NCSearch"] = true;



$tdatamst_unit[".shortTableName"] = "mst_unit";
$tdatamst_unit[".nSecOptions"] = 0;
$tdatamst_unit[".recsPerRowPrint"] = 1;
$tdatamst_unit[".mainTableOwnerID"] = "";
$tdatamst_unit[".moveNext"] = 1;
$tdatamst_unit[".entityType"] = 0;

$tdatamst_unit[".strOriginalTableName"] = "mst_unit";

	



$tdatamst_unit[".showAddInPopup"] = false;

$tdatamst_unit[".showEditInPopup"] = false;

$tdatamst_unit[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamst_unit[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamst_unit[".fieldsForRegister"] = array();

$tdatamst_unit[".listAjax"] = false;

	$tdatamst_unit[".audit"] = true;

	$tdatamst_unit[".locking"] = false;



$tdatamst_unit[".list"] = true;

$tdatamst_unit[".inlineEdit"] = true;


$tdatamst_unit[".reorderRecordsByHeader"] = true;



$tdatamst_unit[".inlineAdd"] = true;

$tdatamst_unit[".import"] = true;

$tdatamst_unit[".exportTo"] = true;


$tdatamst_unit[".delete"] = true;

$tdatamst_unit[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamst_unit[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamst_unit[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamst_unit[".searchSaving"] = false;
//

$tdatamst_unit[".showSearchPanel"] = true;
		$tdatamst_unit[".flexibleSearch"] = true;

$tdatamst_unit[".isUseAjaxSuggest"] = true;

$tdatamst_unit[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatamst_unit[".ajaxCodeSnippetAdded"] = false;

$tdatamst_unit[".buttonsAdded"] = false;

$tdatamst_unit[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamst_unit[".isUseTimeForSearch"] = false;





$tdatamst_unit[".allSearchFields"] = array();
$tdatamst_unit[".filterFields"] = array();
$tdatamst_unit[".requiredSearchFields"] = array();

$tdatamst_unit[".allSearchFields"][] = "id";
	$tdatamst_unit[".allSearchFields"][] = "name";
	$tdatamst_unit[".allSearchFields"][] = "sort";
	$tdatamst_unit[".allSearchFields"][] = "update_by";
	$tdatamst_unit[".allSearchFields"][] = "update_at";
	$tdatamst_unit[".allSearchFields"][] = "create_by";
	$tdatamst_unit[".allSearchFields"][] = "create_at";
	

$tdatamst_unit[".googleLikeFields"] = array();
$tdatamst_unit[".googleLikeFields"][] = "id";
$tdatamst_unit[".googleLikeFields"][] = "name";
$tdatamst_unit[".googleLikeFields"][] = "sort";
$tdatamst_unit[".googleLikeFields"][] = "update_by";
$tdatamst_unit[".googleLikeFields"][] = "update_at";
$tdatamst_unit[".googleLikeFields"][] = "create_by";
$tdatamst_unit[".googleLikeFields"][] = "create_at";


$tdatamst_unit[".advSearchFields"] = array();
$tdatamst_unit[".advSearchFields"][] = "id";
$tdatamst_unit[".advSearchFields"][] = "name";
$tdatamst_unit[".advSearchFields"][] = "sort";
$tdatamst_unit[".advSearchFields"][] = "update_by";
$tdatamst_unit[".advSearchFields"][] = "update_at";
$tdatamst_unit[".advSearchFields"][] = "create_by";
$tdatamst_unit[".advSearchFields"][] = "create_at";

$tdatamst_unit[".tableType"] = "list";

$tdatamst_unit[".printerPageOrientation"] = 0;
$tdatamst_unit[".nPrinterPageScale"] = 100;

$tdatamst_unit[".nPrinterSplitRecords"] = 40;

$tdatamst_unit[".nPrinterPDFSplitRecords"] = 40;



$tdatamst_unit[".geocodingEnabled"] = false;





$tdatamst_unit[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamst_unit[".pageSize"] = 100;

$tdatamst_unit[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY sort";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamst_unit[".strOrderBy"] = $tstrOrderBy;

$tdatamst_unit[".orderindexes"] = array();
$tdatamst_unit[".orderindexes"][] = array(3, (1 ? "ASC" : "DESC"), "`sort`");

$tdatamst_unit[".sqlHead"] = "SELECT id,  name,  sort,  update_by,  update_at,  create_by,  create_at";
$tdatamst_unit[".sqlFrom"] = "FROM mst_unit";
$tdatamst_unit[".sqlWhereExpr"] = "";
$tdatamst_unit[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamst_unit[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamst_unit[".arrGroupsPerPage"] = $arrGPP;

$tdatamst_unit[".highlightSearchResults"] = true;

$tableKeysmst_unit = array();
$tableKeysmst_unit[] = "id";
$tdatamst_unit[".Keys"] = $tableKeysmst_unit;

$tdatamst_unit[".listFields"] = array();
$tdatamst_unit[".listFields"][] = "id";
$tdatamst_unit[".listFields"][] = "name";
$tdatamst_unit[".listFields"][] = "sort";
$tdatamst_unit[".listFields"][] = "update_by";
$tdatamst_unit[".listFields"][] = "update_at";
$tdatamst_unit[".listFields"][] = "create_by";
$tdatamst_unit[".listFields"][] = "create_at";

$tdatamst_unit[".hideMobileList"] = array();


$tdatamst_unit[".viewFields"] = array();

$tdatamst_unit[".addFields"] = array();

$tdatamst_unit[".masterListFields"] = array();
$tdatamst_unit[".masterListFields"][] = "id";
$tdatamst_unit[".masterListFields"][] = "name";
$tdatamst_unit[".masterListFields"][] = "sort";
$tdatamst_unit[".masterListFields"][] = "update_by";
$tdatamst_unit[".masterListFields"][] = "update_at";
$tdatamst_unit[".masterListFields"][] = "create_by";
$tdatamst_unit[".masterListFields"][] = "create_at";

$tdatamst_unit[".inlineAddFields"] = array();
$tdatamst_unit[".inlineAddFields"][] = "name";
$tdatamst_unit[".inlineAddFields"][] = "sort";

$tdatamst_unit[".editFields"] = array();

$tdatamst_unit[".inlineEditFields"] = array();
$tdatamst_unit[".inlineEditFields"][] = "name";
$tdatamst_unit[".inlineEditFields"][] = "sort";

$tdatamst_unit[".updateSelectedFields"] = array();


$tdatamst_unit[".exportFields"] = array();
$tdatamst_unit[".exportFields"][] = "id";
$tdatamst_unit[".exportFields"][] = "name";
$tdatamst_unit[".exportFields"][] = "sort";
$tdatamst_unit[".exportFields"][] = "update_by";
$tdatamst_unit[".exportFields"][] = "update_at";
$tdatamst_unit[".exportFields"][] = "create_by";
$tdatamst_unit[".exportFields"][] = "create_at";

$tdatamst_unit[".importFields"] = array();
$tdatamst_unit[".importFields"][] = "id";
$tdatamst_unit[".importFields"][] = "name";
$tdatamst_unit[".importFields"][] = "sort";

$tdatamst_unit[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "mst_unit";
	$fdata["Label"] = GetFieldLabel("mst_unit","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdatamst_unit["id"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "mst_unit";
	$fdata["Label"] = GetFieldLabel("mst_unit","name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "name";

	
	
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




	$tdatamst_unit["name"] = $fdata;
//	sort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sort";
	$fdata["GoodName"] = "sort";
	$fdata["ownerTable"] = "mst_unit";
	$fdata["Label"] = GetFieldLabel("mst_unit","sort");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "sort";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sort";

	
	
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




	$tdatamst_unit["sort"] = $fdata;
//	update_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "update_by";
	$fdata["GoodName"] = "update_by";
	$fdata["ownerTable"] = "mst_unit";
	$fdata["Label"] = GetFieldLabel("mst_unit","update_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

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




	$tdatamst_unit["update_by"] = $fdata;
//	update_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "update_at";
	$fdata["GoodName"] = "update_at";
	$fdata["ownerTable"] = "mst_unit";
	$fdata["Label"] = GetFieldLabel("mst_unit","update_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

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




	$tdatamst_unit["update_at"] = $fdata;
//	create_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "create_by";
	$fdata["GoodName"] = "create_by";
	$fdata["ownerTable"] = "mst_unit";
	$fdata["Label"] = GetFieldLabel("mst_unit","create_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

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




	$tdatamst_unit["create_by"] = $fdata;
//	create_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "create_at";
	$fdata["GoodName"] = "create_at";
	$fdata["ownerTable"] = "mst_unit";
	$fdata["Label"] = GetFieldLabel("mst_unit","create_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

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




	$tdatamst_unit["create_at"] = $fdata;


$tables_data["mst_unit"]=&$tdatamst_unit;
$field_labels["mst_unit"] = &$fieldLabelsmst_unit;
$fieldToolTips["mst_unit"] = &$fieldToolTipsmst_unit;
$placeHolders["mst_unit"] = &$placeHoldersmst_unit;
$page_titles["mst_unit"] = &$pageTitlesmst_unit;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mst_unit"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mst_unit"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mst_unit()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  name,  sort,  update_by,  update_at,  create_by,  create_at";
$proto0["m_strFrom"] = "FROM mst_unit";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY sort";
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
	"m_strTable" => "mst_unit",
	"m_srcTableName" => "mst_unit"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "mst_unit";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "mst_unit",
	"m_srcTableName" => "mst_unit"
));

$proto8["m_sql"] = "name";
$proto8["m_srcTableName"] = "mst_unit";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "sort",
	"m_strTable" => "mst_unit",
	"m_srcTableName" => "mst_unit"
));

$proto10["m_sql"] = "sort";
$proto10["m_srcTableName"] = "mst_unit";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "update_by",
	"m_strTable" => "mst_unit",
	"m_srcTableName" => "mst_unit"
));

$proto12["m_sql"] = "update_by";
$proto12["m_srcTableName"] = "mst_unit";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "update_at",
	"m_strTable" => "mst_unit",
	"m_srcTableName" => "mst_unit"
));

$proto14["m_sql"] = "update_at";
$proto14["m_srcTableName"] = "mst_unit";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "create_by",
	"m_strTable" => "mst_unit",
	"m_srcTableName" => "mst_unit"
));

$proto16["m_sql"] = "create_by";
$proto16["m_srcTableName"] = "mst_unit";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "create_at",
	"m_strTable" => "mst_unit",
	"m_srcTableName" => "mst_unit"
));

$proto18["m_sql"] = "create_at";
$proto18["m_srcTableName"] = "mst_unit";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "mst_unit";
$proto21["m_srcTableName"] = "mst_unit";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "id";
$proto21["m_columns"][] = "name";
$proto21["m_columns"][] = "sort";
$proto21["m_columns"][] = "update_by";
$proto21["m_columns"][] = "update_at";
$proto21["m_columns"][] = "create_by";
$proto21["m_columns"][] = "create_at";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "mst_unit";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "mst_unit";
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
	"m_strTable" => "mst_unit",
	"m_srcTableName" => "mst_unit"
));

$proto24["m_column"]=$obj;
$proto24["m_bAsc"] = 1;
$proto24["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto24);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="mst_unit";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mst_unit = createSqlQuery_mst_unit();


	
		;

							

$tdatamst_unit[".sqlquery"] = $queryData_mst_unit;

include_once(getabspath("include/mst_unit_events.php"));
$tableEvents["mst_unit"] = new eventclass_mst_unit;
$tdatamst_unit[".hasEvents"] = true;

?>