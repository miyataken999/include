<?php
require_once(getabspath("classes/cipherer.php"));




$tdatashouhin_group = array();
	$tdatashouhin_group[".truncateText"] = true;
	$tdatashouhin_group[".NumberOfChars"] = 80;
	$tdatashouhin_group[".ShortName"] = "shouhin_group";
	$tdatashouhin_group[".OwnerID"] = "";
	$tdatashouhin_group[".OriginalTable"] = "shouhin_group";

//	field labels
$fieldLabelsshouhin_group = array();
$fieldToolTipsshouhin_group = array();
$pageTitlesshouhin_group = array();
$placeHoldersshouhin_group = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsshouhin_group["Japanese"] = array();
	$fieldToolTipsshouhin_group["Japanese"] = array();
	$placeHoldersshouhin_group["Japanese"] = array();
	$pageTitlesshouhin_group["Japanese"] = array();
	$fieldLabelsshouhin_group["Japanese"]["id"] = "Id";
	$fieldToolTipsshouhin_group["Japanese"]["id"] = "";
	$placeHoldersshouhin_group["Japanese"]["id"] = "";
	$fieldLabelsshouhin_group["Japanese"]["name"] = "Name";
	$fieldToolTipsshouhin_group["Japanese"]["name"] = "";
	$placeHoldersshouhin_group["Japanese"]["name"] = "";
	$fieldLabelsshouhin_group["Japanese"]["sort"] = "Sort";
	$fieldToolTipsshouhin_group["Japanese"]["sort"] = "";
	$placeHoldersshouhin_group["Japanese"]["sort"] = "";
	$fieldLabelsshouhin_group["Japanese"]["update_by"] = "更新者";
	$fieldToolTipsshouhin_group["Japanese"]["update_by"] = "";
	$placeHoldersshouhin_group["Japanese"]["update_by"] = "";
	$fieldLabelsshouhin_group["Japanese"]["update_at"] = "更新日";
	$fieldToolTipsshouhin_group["Japanese"]["update_at"] = "";
	$placeHoldersshouhin_group["Japanese"]["update_at"] = "";
	$fieldLabelsshouhin_group["Japanese"]["create_by"] = "作成者";
	$fieldToolTipsshouhin_group["Japanese"]["create_by"] = "";
	$placeHoldersshouhin_group["Japanese"]["create_by"] = "";
	$fieldLabelsshouhin_group["Japanese"]["create_at"] = "作成日";
	$fieldToolTipsshouhin_group["Japanese"]["create_at"] = "";
	$placeHoldersshouhin_group["Japanese"]["create_at"] = "";
	if (count($fieldToolTipsshouhin_group["Japanese"]))
		$tdatashouhin_group[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsshouhin_group[""] = array();
	$fieldToolTipsshouhin_group[""] = array();
	$placeHoldersshouhin_group[""] = array();
	$pageTitlesshouhin_group[""] = array();
	$fieldLabelsshouhin_group[""]["id"] = "Id";
	$fieldToolTipsshouhin_group[""]["id"] = "";
	$placeHoldersshouhin_group[""]["id"] = "";
	$fieldLabelsshouhin_group[""]["name"] = "Name";
	$fieldToolTipsshouhin_group[""]["name"] = "";
	$placeHoldersshouhin_group[""]["name"] = "";
	$fieldLabelsshouhin_group[""]["sort"] = "Sort";
	$fieldToolTipsshouhin_group[""]["sort"] = "";
	$placeHoldersshouhin_group[""]["sort"] = "";
	$fieldLabelsshouhin_group[""]["update_by"] = "Update By";
	$fieldToolTipsshouhin_group[""]["update_by"] = "";
	$placeHoldersshouhin_group[""]["update_by"] = "";
	$fieldLabelsshouhin_group[""]["update_at"] = "Update At";
	$fieldToolTipsshouhin_group[""]["update_at"] = "";
	$placeHoldersshouhin_group[""]["update_at"] = "";
	$fieldLabelsshouhin_group[""]["create_by"] = "Create By";
	$fieldToolTipsshouhin_group[""]["create_by"] = "";
	$placeHoldersshouhin_group[""]["create_by"] = "";
	$fieldLabelsshouhin_group[""]["create_at"] = "Create At";
	$fieldToolTipsshouhin_group[""]["create_at"] = "";
	$placeHoldersshouhin_group[""]["create_at"] = "";
	if (count($fieldToolTipsshouhin_group[""]))
		$tdatashouhin_group[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsshouhin_group["English"] = array();
	$fieldToolTipsshouhin_group["English"] = array();
	$placeHoldersshouhin_group["English"] = array();
	$pageTitlesshouhin_group["English"] = array();
	$fieldLabelsshouhin_group["English"]["id"] = "Id";
	$fieldToolTipsshouhin_group["English"]["id"] = "";
	$placeHoldersshouhin_group["English"]["id"] = "";
	$fieldLabelsshouhin_group["English"]["name"] = "Name";
	$fieldToolTipsshouhin_group["English"]["name"] = "";
	$placeHoldersshouhin_group["English"]["name"] = "";
	$fieldLabelsshouhin_group["English"]["sort"] = "Sort";
	$fieldToolTipsshouhin_group["English"]["sort"] = "";
	$placeHoldersshouhin_group["English"]["sort"] = "";
	$fieldLabelsshouhin_group["English"]["update_by"] = "Update By";
	$fieldToolTipsshouhin_group["English"]["update_by"] = "";
	$placeHoldersshouhin_group["English"]["update_by"] = "";
	$fieldLabelsshouhin_group["English"]["update_at"] = "Update At";
	$fieldToolTipsshouhin_group["English"]["update_at"] = "";
	$placeHoldersshouhin_group["English"]["update_at"] = "";
	$fieldLabelsshouhin_group["English"]["create_by"] = "Create By";
	$fieldToolTipsshouhin_group["English"]["create_by"] = "";
	$placeHoldersshouhin_group["English"]["create_by"] = "";
	$fieldLabelsshouhin_group["English"]["create_at"] = "Create At";
	$fieldToolTipsshouhin_group["English"]["create_at"] = "";
	$placeHoldersshouhin_group["English"]["create_at"] = "";
	if (count($fieldToolTipsshouhin_group["English"]))
		$tdatashouhin_group[".isUseToolTips"] = true;
}


	$tdatashouhin_group[".NCSearch"] = true;



$tdatashouhin_group[".shortTableName"] = "shouhin_group";
$tdatashouhin_group[".nSecOptions"] = 0;
$tdatashouhin_group[".recsPerRowPrint"] = 1;
$tdatashouhin_group[".mainTableOwnerID"] = "";
$tdatashouhin_group[".moveNext"] = 1;
$tdatashouhin_group[".entityType"] = 0;

$tdatashouhin_group[".strOriginalTableName"] = "shouhin_group";

	



$tdatashouhin_group[".showAddInPopup"] = false;

$tdatashouhin_group[".showEditInPopup"] = false;

$tdatashouhin_group[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatashouhin_group[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatashouhin_group[".fieldsForRegister"] = array();

$tdatashouhin_group[".listAjax"] = false;

	$tdatashouhin_group[".audit"] = true;

	$tdatashouhin_group[".locking"] = false;



$tdatashouhin_group[".list"] = true;

$tdatashouhin_group[".inlineEdit"] = true;


$tdatashouhin_group[".reorderRecordsByHeader"] = true;



$tdatashouhin_group[".inlineAdd"] = true;

$tdatashouhin_group[".import"] = true;

$tdatashouhin_group[".exportTo"] = true;


$tdatashouhin_group[".delete"] = true;

$tdatashouhin_group[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatashouhin_group[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatashouhin_group[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatashouhin_group[".searchSaving"] = false;
//

$tdatashouhin_group[".showSearchPanel"] = true;
		$tdatashouhin_group[".flexibleSearch"] = true;

$tdatashouhin_group[".isUseAjaxSuggest"] = true;

$tdatashouhin_group[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatashouhin_group[".ajaxCodeSnippetAdded"] = false;

$tdatashouhin_group[".buttonsAdded"] = false;

$tdatashouhin_group[".addPageEvents"] = false;

// use timepicker for search panel
$tdatashouhin_group[".isUseTimeForSearch"] = false;




$tdatashouhin_group[".detailsLinksOnList"] = "1";

$tdatashouhin_group[".allSearchFields"] = array();
$tdatashouhin_group[".filterFields"] = array();
$tdatashouhin_group[".requiredSearchFields"] = array();

$tdatashouhin_group[".allSearchFields"][] = "id";
	$tdatashouhin_group[".allSearchFields"][] = "name";
	$tdatashouhin_group[".allSearchFields"][] = "sort";
	$tdatashouhin_group[".allSearchFields"][] = "update_by";
	$tdatashouhin_group[".allSearchFields"][] = "update_at";
	$tdatashouhin_group[".allSearchFields"][] = "create_by";
	$tdatashouhin_group[".allSearchFields"][] = "create_at";
	

$tdatashouhin_group[".googleLikeFields"] = array();
$tdatashouhin_group[".googleLikeFields"][] = "id";
$tdatashouhin_group[".googleLikeFields"][] = "name";
$tdatashouhin_group[".googleLikeFields"][] = "sort";
$tdatashouhin_group[".googleLikeFields"][] = "update_by";
$tdatashouhin_group[".googleLikeFields"][] = "update_at";
$tdatashouhin_group[".googleLikeFields"][] = "create_by";
$tdatashouhin_group[".googleLikeFields"][] = "create_at";


$tdatashouhin_group[".advSearchFields"] = array();
$tdatashouhin_group[".advSearchFields"][] = "id";
$tdatashouhin_group[".advSearchFields"][] = "name";
$tdatashouhin_group[".advSearchFields"][] = "sort";
$tdatashouhin_group[".advSearchFields"][] = "update_by";
$tdatashouhin_group[".advSearchFields"][] = "update_at";
$tdatashouhin_group[".advSearchFields"][] = "create_by";
$tdatashouhin_group[".advSearchFields"][] = "create_at";

$tdatashouhin_group[".tableType"] = "list";

$tdatashouhin_group[".printerPageOrientation"] = 0;
$tdatashouhin_group[".nPrinterPageScale"] = 100;

$tdatashouhin_group[".nPrinterSplitRecords"] = 40;

$tdatashouhin_group[".nPrinterPDFSplitRecords"] = 40;



$tdatashouhin_group[".geocodingEnabled"] = false;





$tdatashouhin_group[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatashouhin_group[".pageSize"] = 20;

$tdatashouhin_group[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatashouhin_group[".strOrderBy"] = $tstrOrderBy;

$tdatashouhin_group[".orderindexes"] = array();

$tdatashouhin_group[".sqlHead"] = "SELECT `id`,  	`name`,  	`sort`,  	`update_by`,  	`update_at`,  	`create_by`,  	`create_at`";
$tdatashouhin_group[".sqlFrom"] = "FROM `shouhin_group`";
$tdatashouhin_group[".sqlWhereExpr"] = "";
$tdatashouhin_group[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatashouhin_group[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatashouhin_group[".arrGroupsPerPage"] = $arrGPP;

$tdatashouhin_group[".highlightSearchResults"] = true;

$tableKeysshouhin_group = array();
$tableKeysshouhin_group[] = "id";
$tdatashouhin_group[".Keys"] = $tableKeysshouhin_group;

$tdatashouhin_group[".listFields"] = array();
$tdatashouhin_group[".listFields"][] = "id";
$tdatashouhin_group[".listFields"][] = "sort";
$tdatashouhin_group[".listFields"][] = "name";
$tdatashouhin_group[".listFields"][] = "update_by";
$tdatashouhin_group[".listFields"][] = "update_at";
$tdatashouhin_group[".listFields"][] = "create_by";
$tdatashouhin_group[".listFields"][] = "create_at";

$tdatashouhin_group[".hideMobileList"] = array();


$tdatashouhin_group[".viewFields"] = array();

$tdatashouhin_group[".addFields"] = array();

$tdatashouhin_group[".masterListFields"] = array();
$tdatashouhin_group[".masterListFields"][] = "id";
$tdatashouhin_group[".masterListFields"][] = "name";
$tdatashouhin_group[".masterListFields"][] = "sort";
$tdatashouhin_group[".masterListFields"][] = "update_by";
$tdatashouhin_group[".masterListFields"][] = "update_at";
$tdatashouhin_group[".masterListFields"][] = "create_by";
$tdatashouhin_group[".masterListFields"][] = "create_at";

$tdatashouhin_group[".inlineAddFields"] = array();
$tdatashouhin_group[".inlineAddFields"][] = "sort";
$tdatashouhin_group[".inlineAddFields"][] = "name";

$tdatashouhin_group[".editFields"] = array();

$tdatashouhin_group[".inlineEditFields"] = array();
$tdatashouhin_group[".inlineEditFields"][] = "sort";
$tdatashouhin_group[".inlineEditFields"][] = "name";

$tdatashouhin_group[".updateSelectedFields"] = array();


$tdatashouhin_group[".exportFields"] = array();
$tdatashouhin_group[".exportFields"][] = "id";
$tdatashouhin_group[".exportFields"][] = "name";
$tdatashouhin_group[".exportFields"][] = "sort";
$tdatashouhin_group[".exportFields"][] = "update_by";
$tdatashouhin_group[".exportFields"][] = "update_at";
$tdatashouhin_group[".exportFields"][] = "create_by";
$tdatashouhin_group[".exportFields"][] = "create_at";

$tdatashouhin_group[".importFields"] = array();
$tdatashouhin_group[".importFields"][] = "id";
$tdatashouhin_group[".importFields"][] = "name";
$tdatashouhin_group[".importFields"][] = "sort";
$tdatashouhin_group[".importFields"][] = "update_by";
$tdatashouhin_group[".importFields"][] = "update_at";
$tdatashouhin_group[".importFields"][] = "create_by";
$tdatashouhin_group[".importFields"][] = "create_at";

$tdatashouhin_group[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "shouhin_group";
	$fdata["Label"] = GetFieldLabel("shouhin_group","id");
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




	$tdatashouhin_group["id"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "shouhin_group";
	$fdata["Label"] = GetFieldLabel("shouhin_group","name");
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




	$tdatashouhin_group["name"] = $fdata;
//	sort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sort";
	$fdata["GoodName"] = "sort";
	$fdata["ownerTable"] = "shouhin_group";
	$fdata["Label"] = GetFieldLabel("shouhin_group","sort");
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




	$tdatashouhin_group["sort"] = $fdata;
//	update_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "update_by";
	$fdata["GoodName"] = "update_by";
	$fdata["ownerTable"] = "shouhin_group";
	$fdata["Label"] = GetFieldLabel("shouhin_group","update_by");
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




	$tdatashouhin_group["update_by"] = $fdata;
//	update_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "update_at";
	$fdata["GoodName"] = "update_at";
	$fdata["ownerTable"] = "shouhin_group";
	$fdata["Label"] = GetFieldLabel("shouhin_group","update_at");
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




	$tdatashouhin_group["update_at"] = $fdata;
//	create_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "create_by";
	$fdata["GoodName"] = "create_by";
	$fdata["ownerTable"] = "shouhin_group";
	$fdata["Label"] = GetFieldLabel("shouhin_group","create_by");
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




	$tdatashouhin_group["create_by"] = $fdata;
//	create_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "create_at";
	$fdata["GoodName"] = "create_at";
	$fdata["ownerTable"] = "shouhin_group";
	$fdata["Label"] = GetFieldLabel("shouhin_group","create_at");
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




	$tdatashouhin_group["create_at"] = $fdata;


$tables_data["shouhin_group"]=&$tdatashouhin_group;
$field_labels["shouhin_group"] = &$fieldLabelsshouhin_group;
$fieldToolTips["shouhin_group"] = &$fieldToolTipsshouhin_group;
$placeHolders["shouhin_group"] = &$placeHoldersshouhin_group;
$page_titles["shouhin_group"] = &$pageTitlesshouhin_group;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["shouhin_group"] = array();
//	shouhin_group_detail
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="shouhin_group_detail";
		$detailsParam["dOriginalTable"] = "shouhin_group_detail";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "shouhin_group_detail";
	$detailsParam["dCaptionTable"] = GetTableCaption("shouhin_group_detail");
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
		
	$detailsTablesData["shouhin_group"][$dIndex] = $detailsParam;

	
		$detailsTablesData["shouhin_group"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["shouhin_group"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["shouhin_group"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["shouhin_group"][$dIndex]["detailKeys"][]="shouhin_group_id";

// tables which are master tables for current table (detail)
$masterTablesData["shouhin_group"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_shouhin_group()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  	`name`,  	`sort`,  	`update_by`,  	`update_at`,  	`create_by`,  	`create_at`";
$proto0["m_strFrom"] = "FROM `shouhin_group`";
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
	"m_strTable" => "shouhin_group",
	"m_srcTableName" => "shouhin_group"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "shouhin_group";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "shouhin_group",
	"m_srcTableName" => "shouhin_group"
));

$proto8["m_sql"] = "`name`";
$proto8["m_srcTableName"] = "shouhin_group";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "sort",
	"m_strTable" => "shouhin_group",
	"m_srcTableName" => "shouhin_group"
));

$proto10["m_sql"] = "`sort`";
$proto10["m_srcTableName"] = "shouhin_group";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "update_by",
	"m_strTable" => "shouhin_group",
	"m_srcTableName" => "shouhin_group"
));

$proto12["m_sql"] = "`update_by`";
$proto12["m_srcTableName"] = "shouhin_group";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "update_at",
	"m_strTable" => "shouhin_group",
	"m_srcTableName" => "shouhin_group"
));

$proto14["m_sql"] = "`update_at`";
$proto14["m_srcTableName"] = "shouhin_group";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "create_by",
	"m_strTable" => "shouhin_group",
	"m_srcTableName" => "shouhin_group"
));

$proto16["m_sql"] = "`create_by`";
$proto16["m_srcTableName"] = "shouhin_group";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "create_at",
	"m_strTable" => "shouhin_group",
	"m_srcTableName" => "shouhin_group"
));

$proto18["m_sql"] = "`create_at`";
$proto18["m_srcTableName"] = "shouhin_group";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "shouhin_group";
$proto21["m_srcTableName"] = "shouhin_group";
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
$proto20["m_sql"] = "`shouhin_group`";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "shouhin_group";
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
$proto0["m_srcTableName"]="shouhin_group";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_shouhin_group = createSqlQuery_shouhin_group();


	
		;

							

$tdatashouhin_group[".sqlquery"] = $queryData_shouhin_group;

$tableEvents["shouhin_group"] = new eventsBase;
$tdatashouhin_group[".hasEvents"] = false;

?>