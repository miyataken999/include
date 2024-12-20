<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamst_refining_status = array();
	$tdatamst_refining_status[".truncateText"] = true;
	$tdatamst_refining_status[".NumberOfChars"] = 80;
	$tdatamst_refining_status[".ShortName"] = "mst_refining_status";
	$tdatamst_refining_status[".OwnerID"] = "";
	$tdatamst_refining_status[".OriginalTable"] = "mst_refining_status";

//	field labels
$fieldLabelsmst_refining_status = array();
$fieldToolTipsmst_refining_status = array();
$pageTitlesmst_refining_status = array();
$placeHoldersmst_refining_status = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmst_refining_status["Japanese"] = array();
	$fieldToolTipsmst_refining_status["Japanese"] = array();
	$placeHoldersmst_refining_status["Japanese"] = array();
	$pageTitlesmst_refining_status["Japanese"] = array();
	$fieldLabelsmst_refining_status["Japanese"]["id"] = "Id";
	$fieldToolTipsmst_refining_status["Japanese"]["id"] = "";
	$placeHoldersmst_refining_status["Japanese"]["id"] = "";
	$fieldLabelsmst_refining_status["Japanese"]["name"] = "名称";
	$fieldToolTipsmst_refining_status["Japanese"]["name"] = "";
	$placeHoldersmst_refining_status["Japanese"]["name"] = "";
	$fieldLabelsmst_refining_status["Japanese"]["update_by"] = "更新者";
	$fieldToolTipsmst_refining_status["Japanese"]["update_by"] = "";
	$placeHoldersmst_refining_status["Japanese"]["update_by"] = "";
	$fieldLabelsmst_refining_status["Japanese"]["update_at"] = "更新日";
	$fieldToolTipsmst_refining_status["Japanese"]["update_at"] = "";
	$placeHoldersmst_refining_status["Japanese"]["update_at"] = "";
	$fieldLabelsmst_refining_status["Japanese"]["create_by"] = "作成者";
	$fieldToolTipsmst_refining_status["Japanese"]["create_by"] = "";
	$placeHoldersmst_refining_status["Japanese"]["create_by"] = "";
	$fieldLabelsmst_refining_status["Japanese"]["create_at"] = "作成日";
	$fieldToolTipsmst_refining_status["Japanese"]["create_at"] = "";
	$placeHoldersmst_refining_status["Japanese"]["create_at"] = "";
	$fieldLabelsmst_refining_status["Japanese"]["sort"] = "Sort";
	$fieldToolTipsmst_refining_status["Japanese"]["sort"] = "";
	$placeHoldersmst_refining_status["Japanese"]["sort"] = "";
	if (count($fieldToolTipsmst_refining_status["Japanese"]))
		$tdatamst_refining_status[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmst_refining_status[""] = array();
	$fieldToolTipsmst_refining_status[""] = array();
	$placeHoldersmst_refining_status[""] = array();
	$pageTitlesmst_refining_status[""] = array();
	$fieldLabelsmst_refining_status[""]["id"] = "Id";
	$fieldToolTipsmst_refining_status[""]["id"] = "";
	$placeHoldersmst_refining_status[""]["id"] = "";
	$fieldLabelsmst_refining_status[""]["name"] = "Name";
	$fieldToolTipsmst_refining_status[""]["name"] = "";
	$placeHoldersmst_refining_status[""]["name"] = "";
	$fieldLabelsmst_refining_status[""]["update_by"] = "Update By";
	$fieldToolTipsmst_refining_status[""]["update_by"] = "";
	$placeHoldersmst_refining_status[""]["update_by"] = "";
	$fieldLabelsmst_refining_status[""]["update_at"] = "Update At";
	$fieldToolTipsmst_refining_status[""]["update_at"] = "";
	$placeHoldersmst_refining_status[""]["update_at"] = "";
	$fieldLabelsmst_refining_status[""]["create_by"] = "Create By";
	$fieldToolTipsmst_refining_status[""]["create_by"] = "";
	$placeHoldersmst_refining_status[""]["create_by"] = "";
	$fieldLabelsmst_refining_status[""]["create_at"] = "Create At";
	$fieldToolTipsmst_refining_status[""]["create_at"] = "";
	$placeHoldersmst_refining_status[""]["create_at"] = "";
	$fieldLabelsmst_refining_status[""]["sort"] = "Sort";
	$fieldToolTipsmst_refining_status[""]["sort"] = "";
	$placeHoldersmst_refining_status[""]["sort"] = "";
	if (count($fieldToolTipsmst_refining_status[""]))
		$tdatamst_refining_status[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmst_refining_status["English"] = array();
	$fieldToolTipsmst_refining_status["English"] = array();
	$placeHoldersmst_refining_status["English"] = array();
	$pageTitlesmst_refining_status["English"] = array();
	$fieldLabelsmst_refining_status["English"]["id"] = "Id";
	$fieldToolTipsmst_refining_status["English"]["id"] = "";
	$placeHoldersmst_refining_status["English"]["id"] = "";
	$fieldLabelsmst_refining_status["English"]["name"] = "Name";
	$fieldToolTipsmst_refining_status["English"]["name"] = "";
	$placeHoldersmst_refining_status["English"]["name"] = "";
	$fieldLabelsmst_refining_status["English"]["update_by"] = "Update By";
	$fieldToolTipsmst_refining_status["English"]["update_by"] = "";
	$placeHoldersmst_refining_status["English"]["update_by"] = "";
	$fieldLabelsmst_refining_status["English"]["update_at"] = "Update At";
	$fieldToolTipsmst_refining_status["English"]["update_at"] = "";
	$placeHoldersmst_refining_status["English"]["update_at"] = "";
	$fieldLabelsmst_refining_status["English"]["create_by"] = "Create By";
	$fieldToolTipsmst_refining_status["English"]["create_by"] = "";
	$placeHoldersmst_refining_status["English"]["create_by"] = "";
	$fieldLabelsmst_refining_status["English"]["create_at"] = "Create At";
	$fieldToolTipsmst_refining_status["English"]["create_at"] = "";
	$placeHoldersmst_refining_status["English"]["create_at"] = "";
	$fieldLabelsmst_refining_status["English"]["sort"] = "Sort";
	$fieldToolTipsmst_refining_status["English"]["sort"] = "";
	$placeHoldersmst_refining_status["English"]["sort"] = "";
	if (count($fieldToolTipsmst_refining_status["English"]))
		$tdatamst_refining_status[".isUseToolTips"] = true;
}


	$tdatamst_refining_status[".NCSearch"] = true;



$tdatamst_refining_status[".shortTableName"] = "mst_refining_status";
$tdatamst_refining_status[".nSecOptions"] = 0;
$tdatamst_refining_status[".recsPerRowPrint"] = 1;
$tdatamst_refining_status[".mainTableOwnerID"] = "";
$tdatamst_refining_status[".moveNext"] = 1;
$tdatamst_refining_status[".entityType"] = 0;

$tdatamst_refining_status[".strOriginalTableName"] = "mst_refining_status";

	



$tdatamst_refining_status[".showAddInPopup"] = false;

$tdatamst_refining_status[".showEditInPopup"] = false;

$tdatamst_refining_status[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamst_refining_status[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamst_refining_status[".fieldsForRegister"] = array();

$tdatamst_refining_status[".listAjax"] = false;

	$tdatamst_refining_status[".audit"] = true;

	$tdatamst_refining_status[".locking"] = false;



$tdatamst_refining_status[".list"] = true;

$tdatamst_refining_status[".inlineEdit"] = true;


$tdatamst_refining_status[".reorderRecordsByHeader"] = true;



$tdatamst_refining_status[".inlineAdd"] = true;

$tdatamst_refining_status[".import"] = true;

$tdatamst_refining_status[".exportTo"] = true;


$tdatamst_refining_status[".delete"] = true;

$tdatamst_refining_status[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamst_refining_status[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamst_refining_status[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamst_refining_status[".searchSaving"] = false;
//

$tdatamst_refining_status[".showSearchPanel"] = true;
		$tdatamst_refining_status[".flexibleSearch"] = true;

$tdatamst_refining_status[".isUseAjaxSuggest"] = true;

$tdatamst_refining_status[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatamst_refining_status[".ajaxCodeSnippetAdded"] = false;

$tdatamst_refining_status[".buttonsAdded"] = false;

$tdatamst_refining_status[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamst_refining_status[".isUseTimeForSearch"] = false;





$tdatamst_refining_status[".allSearchFields"] = array();
$tdatamst_refining_status[".filterFields"] = array();
$tdatamst_refining_status[".requiredSearchFields"] = array();

$tdatamst_refining_status[".allSearchFields"][] = "sort";
	$tdatamst_refining_status[".allSearchFields"][] = "id";
	$tdatamst_refining_status[".allSearchFields"][] = "name";
	$tdatamst_refining_status[".allSearchFields"][] = "update_by";
	$tdatamst_refining_status[".allSearchFields"][] = "update_at";
	$tdatamst_refining_status[".allSearchFields"][] = "create_by";
	$tdatamst_refining_status[".allSearchFields"][] = "create_at";
	

$tdatamst_refining_status[".googleLikeFields"] = array();
$tdatamst_refining_status[".googleLikeFields"][] = "id";
$tdatamst_refining_status[".googleLikeFields"][] = "name";
$tdatamst_refining_status[".googleLikeFields"][] = "update_by";
$tdatamst_refining_status[".googleLikeFields"][] = "update_at";
$tdatamst_refining_status[".googleLikeFields"][] = "create_by";
$tdatamst_refining_status[".googleLikeFields"][] = "create_at";
$tdatamst_refining_status[".googleLikeFields"][] = "sort";


$tdatamst_refining_status[".advSearchFields"] = array();
$tdatamst_refining_status[".advSearchFields"][] = "sort";
$tdatamst_refining_status[".advSearchFields"][] = "id";
$tdatamst_refining_status[".advSearchFields"][] = "name";
$tdatamst_refining_status[".advSearchFields"][] = "update_by";
$tdatamst_refining_status[".advSearchFields"][] = "update_at";
$tdatamst_refining_status[".advSearchFields"][] = "create_by";
$tdatamst_refining_status[".advSearchFields"][] = "create_at";

$tdatamst_refining_status[".tableType"] = "list";

$tdatamst_refining_status[".printerPageOrientation"] = 0;
$tdatamst_refining_status[".nPrinterPageScale"] = 100;

$tdatamst_refining_status[".nPrinterSplitRecords"] = 40;

$tdatamst_refining_status[".nPrinterPDFSplitRecords"] = 40;



$tdatamst_refining_status[".geocodingEnabled"] = false;





$tdatamst_refining_status[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamst_refining_status[".pageSize"] = 20;

$tdatamst_refining_status[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY sort";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamst_refining_status[".strOrderBy"] = $tstrOrderBy;

$tdatamst_refining_status[".orderindexes"] = array();
$tdatamst_refining_status[".orderindexes"][] = array(7, (1 ? "ASC" : "DESC"), "`sort`");

$tdatamst_refining_status[".sqlHead"] = "SELECT `id`,  	`name`,  	`update_by`,  	`update_at`,  	`create_by`,  	`create_at`,  	`sort`";
$tdatamst_refining_status[".sqlFrom"] = "FROM `mst_refining_status`";
$tdatamst_refining_status[".sqlWhereExpr"] = "";
$tdatamst_refining_status[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamst_refining_status[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamst_refining_status[".arrGroupsPerPage"] = $arrGPP;

$tdatamst_refining_status[".highlightSearchResults"] = true;

$tableKeysmst_refining_status = array();
$tableKeysmst_refining_status[] = "id";
$tdatamst_refining_status[".Keys"] = $tableKeysmst_refining_status;

$tdatamst_refining_status[".listFields"] = array();
$tdatamst_refining_status[".listFields"][] = "id";
$tdatamst_refining_status[".listFields"][] = "name";
$tdatamst_refining_status[".listFields"][] = "sort";
$tdatamst_refining_status[".listFields"][] = "update_by";
$tdatamst_refining_status[".listFields"][] = "update_at";
$tdatamst_refining_status[".listFields"][] = "create_by";
$tdatamst_refining_status[".listFields"][] = "create_at";

$tdatamst_refining_status[".hideMobileList"] = array();


$tdatamst_refining_status[".viewFields"] = array();

$tdatamst_refining_status[".addFields"] = array();

$tdatamst_refining_status[".masterListFields"] = array();
$tdatamst_refining_status[".masterListFields"][] = "id";
$tdatamst_refining_status[".masterListFields"][] = "name";
$tdatamst_refining_status[".masterListFields"][] = "update_by";
$tdatamst_refining_status[".masterListFields"][] = "update_at";
$tdatamst_refining_status[".masterListFields"][] = "create_by";
$tdatamst_refining_status[".masterListFields"][] = "create_at";
$tdatamst_refining_status[".masterListFields"][] = "sort";

$tdatamst_refining_status[".inlineAddFields"] = array();
$tdatamst_refining_status[".inlineAddFields"][] = "name";
$tdatamst_refining_status[".inlineAddFields"][] = "sort";

$tdatamst_refining_status[".editFields"] = array();

$tdatamst_refining_status[".inlineEditFields"] = array();
$tdatamst_refining_status[".inlineEditFields"][] = "name";
$tdatamst_refining_status[".inlineEditFields"][] = "sort";

$tdatamst_refining_status[".updateSelectedFields"] = array();


$tdatamst_refining_status[".exportFields"] = array();
$tdatamst_refining_status[".exportFields"][] = "sort";
$tdatamst_refining_status[".exportFields"][] = "id";
$tdatamst_refining_status[".exportFields"][] = "name";
$tdatamst_refining_status[".exportFields"][] = "update_by";
$tdatamst_refining_status[".exportFields"][] = "update_at";
$tdatamst_refining_status[".exportFields"][] = "create_by";
$tdatamst_refining_status[".exportFields"][] = "create_at";

$tdatamst_refining_status[".importFields"] = array();
$tdatamst_refining_status[".importFields"][] = "id";
$tdatamst_refining_status[".importFields"][] = "name";
$tdatamst_refining_status[".importFields"][] = "update_by";
$tdatamst_refining_status[".importFields"][] = "update_at";
$tdatamst_refining_status[".importFields"][] = "create_by";
$tdatamst_refining_status[".importFields"][] = "create_at";
$tdatamst_refining_status[".importFields"][] = "sort";

$tdatamst_refining_status[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "mst_refining_status";
	$fdata["Label"] = GetFieldLabel("mst_refining_status","id");
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




	$tdatamst_refining_status["id"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "mst_refining_status";
	$fdata["Label"] = GetFieldLabel("mst_refining_status","name");
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




	$tdatamst_refining_status["name"] = $fdata;
//	update_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "update_by";
	$fdata["GoodName"] = "update_by";
	$fdata["ownerTable"] = "mst_refining_status";
	$fdata["Label"] = GetFieldLabel("mst_refining_status","update_by");
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




	$tdatamst_refining_status["update_by"] = $fdata;
//	update_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "update_at";
	$fdata["GoodName"] = "update_at";
	$fdata["ownerTable"] = "mst_refining_status";
	$fdata["Label"] = GetFieldLabel("mst_refining_status","update_at");
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




	$tdatamst_refining_status["update_at"] = $fdata;
//	create_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "create_by";
	$fdata["GoodName"] = "create_by";
	$fdata["ownerTable"] = "mst_refining_status";
	$fdata["Label"] = GetFieldLabel("mst_refining_status","create_by");
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




	$tdatamst_refining_status["create_by"] = $fdata;
//	create_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "create_at";
	$fdata["GoodName"] = "create_at";
	$fdata["ownerTable"] = "mst_refining_status";
	$fdata["Label"] = GetFieldLabel("mst_refining_status","create_at");
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




	$tdatamst_refining_status["create_at"] = $fdata;
//	sort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "sort";
	$fdata["GoodName"] = "sort";
	$fdata["ownerTable"] = "mst_refining_status";
	$fdata["Label"] = GetFieldLabel("mst_refining_status","sort");
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




	$tdatamst_refining_status["sort"] = $fdata;


$tables_data["mst_refining_status"]=&$tdatamst_refining_status;
$field_labels["mst_refining_status"] = &$fieldLabelsmst_refining_status;
$fieldToolTips["mst_refining_status"] = &$fieldToolTipsmst_refining_status;
$placeHolders["mst_refining_status"] = &$placeHoldersmst_refining_status;
$page_titles["mst_refining_status"] = &$pageTitlesmst_refining_status;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mst_refining_status"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mst_refining_status"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mst_refining_status()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  	`name`,  	`update_by`,  	`update_at`,  	`create_by`,  	`create_at`,  	`sort`";
$proto0["m_strFrom"] = "FROM `mst_refining_status`";
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
	"m_strTable" => "mst_refining_status",
	"m_srcTableName" => "mst_refining_status"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "mst_refining_status";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "mst_refining_status",
	"m_srcTableName" => "mst_refining_status"
));

$proto8["m_sql"] = "`name`";
$proto8["m_srcTableName"] = "mst_refining_status";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "update_by",
	"m_strTable" => "mst_refining_status",
	"m_srcTableName" => "mst_refining_status"
));

$proto10["m_sql"] = "`update_by`";
$proto10["m_srcTableName"] = "mst_refining_status";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "update_at",
	"m_strTable" => "mst_refining_status",
	"m_srcTableName" => "mst_refining_status"
));

$proto12["m_sql"] = "`update_at`";
$proto12["m_srcTableName"] = "mst_refining_status";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "create_by",
	"m_strTable" => "mst_refining_status",
	"m_srcTableName" => "mst_refining_status"
));

$proto14["m_sql"] = "`create_by`";
$proto14["m_srcTableName"] = "mst_refining_status";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "create_at",
	"m_strTable" => "mst_refining_status",
	"m_srcTableName" => "mst_refining_status"
));

$proto16["m_sql"] = "`create_at`";
$proto16["m_srcTableName"] = "mst_refining_status";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "sort",
	"m_strTable" => "mst_refining_status",
	"m_srcTableName" => "mst_refining_status"
));

$proto18["m_sql"] = "`sort`";
$proto18["m_srcTableName"] = "mst_refining_status";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "mst_refining_status";
$proto21["m_srcTableName"] = "mst_refining_status";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "id";
$proto21["m_columns"][] = "name";
$proto21["m_columns"][] = "update_by";
$proto21["m_columns"][] = "update_at";
$proto21["m_columns"][] = "create_by";
$proto21["m_columns"][] = "create_at";
$proto21["m_columns"][] = "sort";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "`mst_refining_status`";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "mst_refining_status";
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
	"m_strTable" => "mst_refining_status",
	"m_srcTableName" => "mst_refining_status"
));

$proto24["m_column"]=$obj;
$proto24["m_bAsc"] = 1;
$proto24["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto24);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="mst_refining_status";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mst_refining_status = createSqlQuery_mst_refining_status();


	
		;

							

$tdatamst_refining_status[".sqlquery"] = $queryData_mst_refining_status;

include_once(getabspath("include/mst_refining_status_events.php"));
$tableEvents["mst_refining_status"] = new eventclass_mst_refining_status;
$tdatamst_refining_status[".hasEvents"] = true;

?>