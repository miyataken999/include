<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamst_bullion_type = array();
	$tdatamst_bullion_type[".truncateText"] = true;
	$tdatamst_bullion_type[".NumberOfChars"] = 80;
	$tdatamst_bullion_type[".ShortName"] = "mst_bullion_type";
	$tdatamst_bullion_type[".OwnerID"] = "";
	$tdatamst_bullion_type[".OriginalTable"] = "mst_bullion_type";

//	field labels
$fieldLabelsmst_bullion_type = array();
$fieldToolTipsmst_bullion_type = array();
$pageTitlesmst_bullion_type = array();
$placeHoldersmst_bullion_type = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmst_bullion_type["Japanese"] = array();
	$fieldToolTipsmst_bullion_type["Japanese"] = array();
	$placeHoldersmst_bullion_type["Japanese"] = array();
	$pageTitlesmst_bullion_type["Japanese"] = array();
	$fieldLabelsmst_bullion_type["Japanese"]["id"] = "Id";
	$fieldToolTipsmst_bullion_type["Japanese"]["id"] = "";
	$placeHoldersmst_bullion_type["Japanese"]["id"] = "";
	$fieldLabelsmst_bullion_type["Japanese"]["name"] = "名称";
	$fieldToolTipsmst_bullion_type["Japanese"]["name"] = "";
	$placeHoldersmst_bullion_type["Japanese"]["name"] = "";
	$fieldLabelsmst_bullion_type["Japanese"]["update_by"] = "更新者";
	$fieldToolTipsmst_bullion_type["Japanese"]["update_by"] = "";
	$placeHoldersmst_bullion_type["Japanese"]["update_by"] = "";
	$fieldLabelsmst_bullion_type["Japanese"]["update_at"] = "更新日";
	$fieldToolTipsmst_bullion_type["Japanese"]["update_at"] = "";
	$placeHoldersmst_bullion_type["Japanese"]["update_at"] = "";
	$fieldLabelsmst_bullion_type["Japanese"]["create_by"] = "作成者";
	$fieldToolTipsmst_bullion_type["Japanese"]["create_by"] = "";
	$placeHoldersmst_bullion_type["Japanese"]["create_by"] = "";
	$fieldLabelsmst_bullion_type["Japanese"]["create_at"] = "作成日";
	$fieldToolTipsmst_bullion_type["Japanese"]["create_at"] = "";
	$placeHoldersmst_bullion_type["Japanese"]["create_at"] = "";
	$fieldLabelsmst_bullion_type["Japanese"]["sort"] = "Sort";
	$fieldToolTipsmst_bullion_type["Japanese"]["sort"] = "";
	$placeHoldersmst_bullion_type["Japanese"]["sort"] = "";
	if (count($fieldToolTipsmst_bullion_type["Japanese"]))
		$tdatamst_bullion_type[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmst_bullion_type[""] = array();
	$fieldToolTipsmst_bullion_type[""] = array();
	$placeHoldersmst_bullion_type[""] = array();
	$pageTitlesmst_bullion_type[""] = array();
	$fieldLabelsmst_bullion_type[""]["id"] = "Id";
	$fieldToolTipsmst_bullion_type[""]["id"] = "";
	$placeHoldersmst_bullion_type[""]["id"] = "";
	$fieldLabelsmst_bullion_type[""]["name"] = "Name";
	$fieldToolTipsmst_bullion_type[""]["name"] = "";
	$placeHoldersmst_bullion_type[""]["name"] = "";
	$fieldLabelsmst_bullion_type[""]["update_by"] = "Update By";
	$fieldToolTipsmst_bullion_type[""]["update_by"] = "";
	$placeHoldersmst_bullion_type[""]["update_by"] = "";
	$fieldLabelsmst_bullion_type[""]["update_at"] = "Update At";
	$fieldToolTipsmst_bullion_type[""]["update_at"] = "";
	$placeHoldersmst_bullion_type[""]["update_at"] = "";
	$fieldLabelsmst_bullion_type[""]["create_by"] = "Create By";
	$fieldToolTipsmst_bullion_type[""]["create_by"] = "";
	$placeHoldersmst_bullion_type[""]["create_by"] = "";
	$fieldLabelsmst_bullion_type[""]["create_at"] = "Create At";
	$fieldToolTipsmst_bullion_type[""]["create_at"] = "";
	$placeHoldersmst_bullion_type[""]["create_at"] = "";
	$fieldLabelsmst_bullion_type[""]["sort"] = "Sort";
	$fieldToolTipsmst_bullion_type[""]["sort"] = "";
	$placeHoldersmst_bullion_type[""]["sort"] = "";
	if (count($fieldToolTipsmst_bullion_type[""]))
		$tdatamst_bullion_type[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmst_bullion_type["English"] = array();
	$fieldToolTipsmst_bullion_type["English"] = array();
	$placeHoldersmst_bullion_type["English"] = array();
	$pageTitlesmst_bullion_type["English"] = array();
	$fieldLabelsmst_bullion_type["English"]["id"] = "Id";
	$fieldToolTipsmst_bullion_type["English"]["id"] = "";
	$placeHoldersmst_bullion_type["English"]["id"] = "";
	$fieldLabelsmst_bullion_type["English"]["name"] = "Name";
	$fieldToolTipsmst_bullion_type["English"]["name"] = "";
	$placeHoldersmst_bullion_type["English"]["name"] = "";
	$fieldLabelsmst_bullion_type["English"]["update_by"] = "Update By";
	$fieldToolTipsmst_bullion_type["English"]["update_by"] = "";
	$placeHoldersmst_bullion_type["English"]["update_by"] = "";
	$fieldLabelsmst_bullion_type["English"]["update_at"] = "Update At";
	$fieldToolTipsmst_bullion_type["English"]["update_at"] = "";
	$placeHoldersmst_bullion_type["English"]["update_at"] = "";
	$fieldLabelsmst_bullion_type["English"]["create_by"] = "Create By";
	$fieldToolTipsmst_bullion_type["English"]["create_by"] = "";
	$placeHoldersmst_bullion_type["English"]["create_by"] = "";
	$fieldLabelsmst_bullion_type["English"]["create_at"] = "Create At";
	$fieldToolTipsmst_bullion_type["English"]["create_at"] = "";
	$placeHoldersmst_bullion_type["English"]["create_at"] = "";
	$fieldLabelsmst_bullion_type["English"]["sort"] = "Sort";
	$fieldToolTipsmst_bullion_type["English"]["sort"] = "";
	$placeHoldersmst_bullion_type["English"]["sort"] = "";
	if (count($fieldToolTipsmst_bullion_type["English"]))
		$tdatamst_bullion_type[".isUseToolTips"] = true;
}


	$tdatamst_bullion_type[".NCSearch"] = true;



$tdatamst_bullion_type[".shortTableName"] = "mst_bullion_type";
$tdatamst_bullion_type[".nSecOptions"] = 0;
$tdatamst_bullion_type[".recsPerRowPrint"] = 1;
$tdatamst_bullion_type[".mainTableOwnerID"] = "";
$tdatamst_bullion_type[".moveNext"] = 1;
$tdatamst_bullion_type[".entityType"] = 0;

$tdatamst_bullion_type[".strOriginalTableName"] = "mst_bullion_type";

	



$tdatamst_bullion_type[".showAddInPopup"] = false;

$tdatamst_bullion_type[".showEditInPopup"] = false;

$tdatamst_bullion_type[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamst_bullion_type[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamst_bullion_type[".fieldsForRegister"] = array();

$tdatamst_bullion_type[".listAjax"] = false;

	$tdatamst_bullion_type[".audit"] = true;

	$tdatamst_bullion_type[".locking"] = false;



$tdatamst_bullion_type[".list"] = true;

$tdatamst_bullion_type[".inlineEdit"] = true;


$tdatamst_bullion_type[".reorderRecordsByHeader"] = true;



$tdatamst_bullion_type[".inlineAdd"] = true;

$tdatamst_bullion_type[".import"] = true;

$tdatamst_bullion_type[".exportTo"] = true;


$tdatamst_bullion_type[".delete"] = true;

$tdatamst_bullion_type[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamst_bullion_type[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamst_bullion_type[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamst_bullion_type[".searchSaving"] = false;
//

$tdatamst_bullion_type[".showSearchPanel"] = true;
		$tdatamst_bullion_type[".flexibleSearch"] = true;

$tdatamst_bullion_type[".isUseAjaxSuggest"] = true;

$tdatamst_bullion_type[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatamst_bullion_type[".ajaxCodeSnippetAdded"] = false;

$tdatamst_bullion_type[".buttonsAdded"] = false;

$tdatamst_bullion_type[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamst_bullion_type[".isUseTimeForSearch"] = false;





$tdatamst_bullion_type[".allSearchFields"] = array();
$tdatamst_bullion_type[".filterFields"] = array();
$tdatamst_bullion_type[".requiredSearchFields"] = array();

$tdatamst_bullion_type[".allSearchFields"][] = "id";
	$tdatamst_bullion_type[".allSearchFields"][] = "name";
	$tdatamst_bullion_type[".allSearchFields"][] = "update_by";
	$tdatamst_bullion_type[".allSearchFields"][] = "update_at";
	$tdatamst_bullion_type[".allSearchFields"][] = "create_by";
	$tdatamst_bullion_type[".allSearchFields"][] = "create_at";
	$tdatamst_bullion_type[".allSearchFields"][] = "sort";
	

$tdatamst_bullion_type[".googleLikeFields"] = array();
$tdatamst_bullion_type[".googleLikeFields"][] = "id";
$tdatamst_bullion_type[".googleLikeFields"][] = "name";
$tdatamst_bullion_type[".googleLikeFields"][] = "update_by";
$tdatamst_bullion_type[".googleLikeFields"][] = "update_at";
$tdatamst_bullion_type[".googleLikeFields"][] = "create_by";
$tdatamst_bullion_type[".googleLikeFields"][] = "create_at";
$tdatamst_bullion_type[".googleLikeFields"][] = "sort";


$tdatamst_bullion_type[".advSearchFields"] = array();
$tdatamst_bullion_type[".advSearchFields"][] = "id";
$tdatamst_bullion_type[".advSearchFields"][] = "name";
$tdatamst_bullion_type[".advSearchFields"][] = "update_by";
$tdatamst_bullion_type[".advSearchFields"][] = "update_at";
$tdatamst_bullion_type[".advSearchFields"][] = "create_by";
$tdatamst_bullion_type[".advSearchFields"][] = "create_at";
$tdatamst_bullion_type[".advSearchFields"][] = "sort";

$tdatamst_bullion_type[".tableType"] = "list";

$tdatamst_bullion_type[".printerPageOrientation"] = 0;
$tdatamst_bullion_type[".nPrinterPageScale"] = 100;

$tdatamst_bullion_type[".nPrinterSplitRecords"] = 40;

$tdatamst_bullion_type[".nPrinterPDFSplitRecords"] = 40;



$tdatamst_bullion_type[".geocodingEnabled"] = false;





$tdatamst_bullion_type[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamst_bullion_type[".pageSize"] = 20;

$tdatamst_bullion_type[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY sort";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamst_bullion_type[".strOrderBy"] = $tstrOrderBy;

$tdatamst_bullion_type[".orderindexes"] = array();
$tdatamst_bullion_type[".orderindexes"][] = array(7, (1 ? "ASC" : "DESC"), "`sort`");

$tdatamst_bullion_type[".sqlHead"] = "SELECT `id`,  	`name`,  	`update_by`,  	`update_at`,  	`create_by`,  	`create_at`,  	`sort`";
$tdatamst_bullion_type[".sqlFrom"] = "FROM `mst_bullion_type`";
$tdatamst_bullion_type[".sqlWhereExpr"] = "";
$tdatamst_bullion_type[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamst_bullion_type[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamst_bullion_type[".arrGroupsPerPage"] = $arrGPP;

$tdatamst_bullion_type[".highlightSearchResults"] = true;

$tableKeysmst_bullion_type = array();
$tableKeysmst_bullion_type[] = "id";
$tdatamst_bullion_type[".Keys"] = $tableKeysmst_bullion_type;

$tdatamst_bullion_type[".listFields"] = array();
$tdatamst_bullion_type[".listFields"][] = "id";
$tdatamst_bullion_type[".listFields"][] = "name";
$tdatamst_bullion_type[".listFields"][] = "sort";
$tdatamst_bullion_type[".listFields"][] = "update_by";
$tdatamst_bullion_type[".listFields"][] = "update_at";
$tdatamst_bullion_type[".listFields"][] = "create_by";
$tdatamst_bullion_type[".listFields"][] = "create_at";

$tdatamst_bullion_type[".hideMobileList"] = array();


$tdatamst_bullion_type[".viewFields"] = array();

$tdatamst_bullion_type[".addFields"] = array();

$tdatamst_bullion_type[".masterListFields"] = array();
$tdatamst_bullion_type[".masterListFields"][] = "id";
$tdatamst_bullion_type[".masterListFields"][] = "name";
$tdatamst_bullion_type[".masterListFields"][] = "update_by";
$tdatamst_bullion_type[".masterListFields"][] = "update_at";
$tdatamst_bullion_type[".masterListFields"][] = "create_by";
$tdatamst_bullion_type[".masterListFields"][] = "create_at";
$tdatamst_bullion_type[".masterListFields"][] = "sort";

$tdatamst_bullion_type[".inlineAddFields"] = array();
$tdatamst_bullion_type[".inlineAddFields"][] = "name";
$tdatamst_bullion_type[".inlineAddFields"][] = "sort";

$tdatamst_bullion_type[".editFields"] = array();

$tdatamst_bullion_type[".inlineEditFields"] = array();
$tdatamst_bullion_type[".inlineEditFields"][] = "name";
$tdatamst_bullion_type[".inlineEditFields"][] = "sort";

$tdatamst_bullion_type[".updateSelectedFields"] = array();


$tdatamst_bullion_type[".exportFields"] = array();
$tdatamst_bullion_type[".exportFields"][] = "id";
$tdatamst_bullion_type[".exportFields"][] = "name";
$tdatamst_bullion_type[".exportFields"][] = "update_by";
$tdatamst_bullion_type[".exportFields"][] = "update_at";
$tdatamst_bullion_type[".exportFields"][] = "create_by";
$tdatamst_bullion_type[".exportFields"][] = "create_at";
$tdatamst_bullion_type[".exportFields"][] = "sort";

$tdatamst_bullion_type[".importFields"] = array();
$tdatamst_bullion_type[".importFields"][] = "id";
$tdatamst_bullion_type[".importFields"][] = "name";
$tdatamst_bullion_type[".importFields"][] = "update_by";
$tdatamst_bullion_type[".importFields"][] = "update_at";
$tdatamst_bullion_type[".importFields"][] = "create_by";
$tdatamst_bullion_type[".importFields"][] = "create_at";
$tdatamst_bullion_type[".importFields"][] = "sort";

$tdatamst_bullion_type[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "mst_bullion_type";
	$fdata["Label"] = GetFieldLabel("mst_bullion_type","id");
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




	$tdatamst_bullion_type["id"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "mst_bullion_type";
	$fdata["Label"] = GetFieldLabel("mst_bullion_type","name");
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




	$tdatamst_bullion_type["name"] = $fdata;
//	update_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "update_by";
	$fdata["GoodName"] = "update_by";
	$fdata["ownerTable"] = "mst_bullion_type";
	$fdata["Label"] = GetFieldLabel("mst_bullion_type","update_by");
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




	$tdatamst_bullion_type["update_by"] = $fdata;
//	update_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "update_at";
	$fdata["GoodName"] = "update_at";
	$fdata["ownerTable"] = "mst_bullion_type";
	$fdata["Label"] = GetFieldLabel("mst_bullion_type","update_at");
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




	$tdatamst_bullion_type["update_at"] = $fdata;
//	create_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "create_by";
	$fdata["GoodName"] = "create_by";
	$fdata["ownerTable"] = "mst_bullion_type";
	$fdata["Label"] = GetFieldLabel("mst_bullion_type","create_by");
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




	$tdatamst_bullion_type["create_by"] = $fdata;
//	create_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "create_at";
	$fdata["GoodName"] = "create_at";
	$fdata["ownerTable"] = "mst_bullion_type";
	$fdata["Label"] = GetFieldLabel("mst_bullion_type","create_at");
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




	$tdatamst_bullion_type["create_at"] = $fdata;
//	sort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "sort";
	$fdata["GoodName"] = "sort";
	$fdata["ownerTable"] = "mst_bullion_type";
	$fdata["Label"] = GetFieldLabel("mst_bullion_type","sort");
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




	$tdatamst_bullion_type["sort"] = $fdata;


$tables_data["mst_bullion_type"]=&$tdatamst_bullion_type;
$field_labels["mst_bullion_type"] = &$fieldLabelsmst_bullion_type;
$fieldToolTips["mst_bullion_type"] = &$fieldToolTipsmst_bullion_type;
$placeHolders["mst_bullion_type"] = &$placeHoldersmst_bullion_type;
$page_titles["mst_bullion_type"] = &$pageTitlesmst_bullion_type;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mst_bullion_type"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mst_bullion_type"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mst_bullion_type()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  	`name`,  	`update_by`,  	`update_at`,  	`create_by`,  	`create_at`,  	`sort`";
$proto0["m_strFrom"] = "FROM `mst_bullion_type`";
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
	"m_strTable" => "mst_bullion_type",
	"m_srcTableName" => "mst_bullion_type"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "mst_bullion_type";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "mst_bullion_type",
	"m_srcTableName" => "mst_bullion_type"
));

$proto8["m_sql"] = "`name`";
$proto8["m_srcTableName"] = "mst_bullion_type";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "update_by",
	"m_strTable" => "mst_bullion_type",
	"m_srcTableName" => "mst_bullion_type"
));

$proto10["m_sql"] = "`update_by`";
$proto10["m_srcTableName"] = "mst_bullion_type";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "update_at",
	"m_strTable" => "mst_bullion_type",
	"m_srcTableName" => "mst_bullion_type"
));

$proto12["m_sql"] = "`update_at`";
$proto12["m_srcTableName"] = "mst_bullion_type";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "create_by",
	"m_strTable" => "mst_bullion_type",
	"m_srcTableName" => "mst_bullion_type"
));

$proto14["m_sql"] = "`create_by`";
$proto14["m_srcTableName"] = "mst_bullion_type";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "create_at",
	"m_strTable" => "mst_bullion_type",
	"m_srcTableName" => "mst_bullion_type"
));

$proto16["m_sql"] = "`create_at`";
$proto16["m_srcTableName"] = "mst_bullion_type";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "sort",
	"m_strTable" => "mst_bullion_type",
	"m_srcTableName" => "mst_bullion_type"
));

$proto18["m_sql"] = "`sort`";
$proto18["m_srcTableName"] = "mst_bullion_type";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "mst_bullion_type";
$proto21["m_srcTableName"] = "mst_bullion_type";
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
$proto20["m_sql"] = "`mst_bullion_type`";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "mst_bullion_type";
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
	"m_strTable" => "mst_bullion_type",
	"m_srcTableName" => "mst_bullion_type"
));

$proto24["m_column"]=$obj;
$proto24["m_bAsc"] = 1;
$proto24["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto24);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="mst_bullion_type";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mst_bullion_type = createSqlQuery_mst_bullion_type();


	
		;

							

$tdatamst_bullion_type[".sqlquery"] = $queryData_mst_bullion_type;

include_once(getabspath("include/mst_bullion_type_events.php"));
$tableEvents["mst_bullion_type"] = new eventclass_mst_bullion_type;
$tdatamst_bullion_type[".hasEvents"] = true;

?>