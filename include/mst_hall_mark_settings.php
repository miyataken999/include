<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamst_hall_mark = array();
	$tdatamst_hall_mark[".truncateText"] = true;
	$tdatamst_hall_mark[".NumberOfChars"] = 80;
	$tdatamst_hall_mark[".ShortName"] = "mst_hall_mark";
	$tdatamst_hall_mark[".OwnerID"] = "";
	$tdatamst_hall_mark[".OriginalTable"] = "mst_hall_mark";

//	field labels
$fieldLabelsmst_hall_mark = array();
$fieldToolTipsmst_hall_mark = array();
$pageTitlesmst_hall_mark = array();
$placeHoldersmst_hall_mark = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmst_hall_mark["Japanese"] = array();
	$fieldToolTipsmst_hall_mark["Japanese"] = array();
	$placeHoldersmst_hall_mark["Japanese"] = array();
	$pageTitlesmst_hall_mark["Japanese"] = array();
	$fieldLabelsmst_hall_mark["Japanese"]["id"] = "Id";
	$fieldToolTipsmst_hall_mark["Japanese"]["id"] = "";
	$placeHoldersmst_hall_mark["Japanese"]["id"] = "";
	$fieldLabelsmst_hall_mark["Japanese"]["country_of_origin"] = "原産国";
	$fieldToolTipsmst_hall_mark["Japanese"]["country_of_origin"] = "";
	$placeHoldersmst_hall_mark["Japanese"]["country_of_origin"] = "";
	$fieldLabelsmst_hall_mark["Japanese"]["name"] = "Name";
	$fieldToolTipsmst_hall_mark["Japanese"]["name"] = "";
	$placeHoldersmst_hall_mark["Japanese"]["name"] = "";
	$fieldLabelsmst_hall_mark["Japanese"]["sort"] = "Sort";
	$fieldToolTipsmst_hall_mark["Japanese"]["sort"] = "";
	$placeHoldersmst_hall_mark["Japanese"]["sort"] = "";
	$fieldLabelsmst_hall_mark["Japanese"]["update_at"] = "更新日";
	$fieldToolTipsmst_hall_mark["Japanese"]["update_at"] = "";
	$placeHoldersmst_hall_mark["Japanese"]["update_at"] = "";
	$fieldLabelsmst_hall_mark["Japanese"]["update_by"] = "更新者";
	$fieldToolTipsmst_hall_mark["Japanese"]["update_by"] = "";
	$placeHoldersmst_hall_mark["Japanese"]["update_by"] = "";
	$fieldLabelsmst_hall_mark["Japanese"]["create_at"] = "登録日";
	$fieldToolTipsmst_hall_mark["Japanese"]["create_at"] = "";
	$placeHoldersmst_hall_mark["Japanese"]["create_at"] = "";
	$fieldLabelsmst_hall_mark["Japanese"]["create_by"] = "登録者";
	$fieldToolTipsmst_hall_mark["Japanese"]["create_by"] = "";
	$placeHoldersmst_hall_mark["Japanese"]["create_by"] = "";
	if (count($fieldToolTipsmst_hall_mark["Japanese"]))
		$tdatamst_hall_mark[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmst_hall_mark[""] = array();
	$fieldToolTipsmst_hall_mark[""] = array();
	$placeHoldersmst_hall_mark[""] = array();
	$pageTitlesmst_hall_mark[""] = array();
	$fieldLabelsmst_hall_mark[""]["id"] = "Id";
	$fieldToolTipsmst_hall_mark[""]["id"] = "";
	$placeHoldersmst_hall_mark[""]["id"] = "";
	$fieldLabelsmst_hall_mark[""]["country_of_origin"] = "Country Of Origin";
	$fieldToolTipsmst_hall_mark[""]["country_of_origin"] = "";
	$placeHoldersmst_hall_mark[""]["country_of_origin"] = "";
	$fieldLabelsmst_hall_mark[""]["name"] = "Name";
	$fieldToolTipsmst_hall_mark[""]["name"] = "";
	$placeHoldersmst_hall_mark[""]["name"] = "";
	$fieldLabelsmst_hall_mark[""]["sort"] = "Sort";
	$fieldToolTipsmst_hall_mark[""]["sort"] = "";
	$placeHoldersmst_hall_mark[""]["sort"] = "";
	$fieldLabelsmst_hall_mark[""]["update_at"] = "Update At";
	$fieldToolTipsmst_hall_mark[""]["update_at"] = "";
	$placeHoldersmst_hall_mark[""]["update_at"] = "";
	$fieldLabelsmst_hall_mark[""]["update_by"] = "Update By";
	$fieldToolTipsmst_hall_mark[""]["update_by"] = "";
	$placeHoldersmst_hall_mark[""]["update_by"] = "";
	$fieldLabelsmst_hall_mark[""]["create_at"] = "Create At";
	$fieldToolTipsmst_hall_mark[""]["create_at"] = "";
	$placeHoldersmst_hall_mark[""]["create_at"] = "";
	$fieldLabelsmst_hall_mark[""]["create_by"] = "Create By";
	$fieldToolTipsmst_hall_mark[""]["create_by"] = "";
	$placeHoldersmst_hall_mark[""]["create_by"] = "";
	if (count($fieldToolTipsmst_hall_mark[""]))
		$tdatamst_hall_mark[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmst_hall_mark["English"] = array();
	$fieldToolTipsmst_hall_mark["English"] = array();
	$placeHoldersmst_hall_mark["English"] = array();
	$pageTitlesmst_hall_mark["English"] = array();
	$fieldLabelsmst_hall_mark["English"]["id"] = "Id";
	$fieldToolTipsmst_hall_mark["English"]["id"] = "";
	$placeHoldersmst_hall_mark["English"]["id"] = "";
	$fieldLabelsmst_hall_mark["English"]["country_of_origin"] = "Country Of Origin";
	$fieldToolTipsmst_hall_mark["English"]["country_of_origin"] = "";
	$placeHoldersmst_hall_mark["English"]["country_of_origin"] = "";
	$fieldLabelsmst_hall_mark["English"]["name"] = "Name";
	$fieldToolTipsmst_hall_mark["English"]["name"] = "";
	$placeHoldersmst_hall_mark["English"]["name"] = "";
	$fieldLabelsmst_hall_mark["English"]["sort"] = "Sort";
	$fieldToolTipsmst_hall_mark["English"]["sort"] = "";
	$placeHoldersmst_hall_mark["English"]["sort"] = "";
	$fieldLabelsmst_hall_mark["English"]["update_at"] = "Update At";
	$fieldToolTipsmst_hall_mark["English"]["update_at"] = "";
	$placeHoldersmst_hall_mark["English"]["update_at"] = "";
	$fieldLabelsmst_hall_mark["English"]["update_by"] = "Update By";
	$fieldToolTipsmst_hall_mark["English"]["update_by"] = "";
	$placeHoldersmst_hall_mark["English"]["update_by"] = "";
	$fieldLabelsmst_hall_mark["English"]["create_at"] = "Create At";
	$fieldToolTipsmst_hall_mark["English"]["create_at"] = "";
	$placeHoldersmst_hall_mark["English"]["create_at"] = "";
	$fieldLabelsmst_hall_mark["English"]["create_by"] = "Create By";
	$fieldToolTipsmst_hall_mark["English"]["create_by"] = "";
	$placeHoldersmst_hall_mark["English"]["create_by"] = "";
	if (count($fieldToolTipsmst_hall_mark["English"]))
		$tdatamst_hall_mark[".isUseToolTips"] = true;
}


	$tdatamst_hall_mark[".NCSearch"] = true;



$tdatamst_hall_mark[".shortTableName"] = "mst_hall_mark";
$tdatamst_hall_mark[".nSecOptions"] = 0;
$tdatamst_hall_mark[".recsPerRowPrint"] = 1;
$tdatamst_hall_mark[".mainTableOwnerID"] = "";
$tdatamst_hall_mark[".moveNext"] = 1;
$tdatamst_hall_mark[".entityType"] = 0;

$tdatamst_hall_mark[".strOriginalTableName"] = "mst_hall_mark";

	



$tdatamst_hall_mark[".showAddInPopup"] = false;

$tdatamst_hall_mark[".showEditInPopup"] = false;

$tdatamst_hall_mark[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamst_hall_mark[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamst_hall_mark[".fieldsForRegister"] = array();

$tdatamst_hall_mark[".listAjax"] = false;

	$tdatamst_hall_mark[".audit"] = true;

	$tdatamst_hall_mark[".locking"] = false;



$tdatamst_hall_mark[".list"] = true;

$tdatamst_hall_mark[".inlineEdit"] = true;


$tdatamst_hall_mark[".reorderRecordsByHeader"] = true;



$tdatamst_hall_mark[".inlineAdd"] = true;

$tdatamst_hall_mark[".import"] = true;

$tdatamst_hall_mark[".exportTo"] = true;


$tdatamst_hall_mark[".delete"] = true;

$tdatamst_hall_mark[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamst_hall_mark[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamst_hall_mark[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamst_hall_mark[".searchSaving"] = false;
//

$tdatamst_hall_mark[".showSearchPanel"] = true;
		$tdatamst_hall_mark[".flexibleSearch"] = true;

$tdatamst_hall_mark[".isUseAjaxSuggest"] = true;

$tdatamst_hall_mark[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatamst_hall_mark[".ajaxCodeSnippetAdded"] = false;

$tdatamst_hall_mark[".buttonsAdded"] = false;

$tdatamst_hall_mark[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamst_hall_mark[".isUseTimeForSearch"] = false;





$tdatamst_hall_mark[".allSearchFields"] = array();
$tdatamst_hall_mark[".filterFields"] = array();
$tdatamst_hall_mark[".requiredSearchFields"] = array();

$tdatamst_hall_mark[".allSearchFields"][] = "id";
	$tdatamst_hall_mark[".allSearchFields"][] = "country_of_origin";
	$tdatamst_hall_mark[".allSearchFields"][] = "name";
	$tdatamst_hall_mark[".allSearchFields"][] = "sort";
	$tdatamst_hall_mark[".allSearchFields"][] = "update_at";
	$tdatamst_hall_mark[".allSearchFields"][] = "update_by";
	$tdatamst_hall_mark[".allSearchFields"][] = "create_at";
	$tdatamst_hall_mark[".allSearchFields"][] = "create_by";
	

$tdatamst_hall_mark[".googleLikeFields"] = array();
$tdatamst_hall_mark[".googleLikeFields"][] = "id";
$tdatamst_hall_mark[".googleLikeFields"][] = "country_of_origin";
$tdatamst_hall_mark[".googleLikeFields"][] = "name";
$tdatamst_hall_mark[".googleLikeFields"][] = "sort";
$tdatamst_hall_mark[".googleLikeFields"][] = "update_at";
$tdatamst_hall_mark[".googleLikeFields"][] = "update_by";
$tdatamst_hall_mark[".googleLikeFields"][] = "create_at";
$tdatamst_hall_mark[".googleLikeFields"][] = "create_by";

$tdatamst_hall_mark[".panelSearchFields"] = array();
$tdatamst_hall_mark[".searchPanelOptions"] = array();
$tdatamst_hall_mark[".panelSearchFields"][] = "country_of_origin";
	$tdatamst_hall_mark[".panelSearchFields"][] = "name";
	
$tdatamst_hall_mark[".advSearchFields"] = array();
$tdatamst_hall_mark[".advSearchFields"][] = "id";
$tdatamst_hall_mark[".advSearchFields"][] = "country_of_origin";
$tdatamst_hall_mark[".advSearchFields"][] = "name";
$tdatamst_hall_mark[".advSearchFields"][] = "sort";
$tdatamst_hall_mark[".advSearchFields"][] = "update_at";
$tdatamst_hall_mark[".advSearchFields"][] = "update_by";
$tdatamst_hall_mark[".advSearchFields"][] = "create_at";
$tdatamst_hall_mark[".advSearchFields"][] = "create_by";

$tdatamst_hall_mark[".tableType"] = "list";

$tdatamst_hall_mark[".printerPageOrientation"] = 0;
$tdatamst_hall_mark[".nPrinterPageScale"] = 100;

$tdatamst_hall_mark[".nPrinterSplitRecords"] = 40;

$tdatamst_hall_mark[".nPrinterPDFSplitRecords"] = 40;



$tdatamst_hall_mark[".geocodingEnabled"] = false;





$tdatamst_hall_mark[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamst_hall_mark[".pageSize"] = 100;

$tdatamst_hall_mark[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY id DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamst_hall_mark[".strOrderBy"] = $tstrOrderBy;

$tdatamst_hall_mark[".orderindexes"] = array();
$tdatamst_hall_mark[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "`id`");

$tdatamst_hall_mark[".sqlHead"] = "SELECT id,  country_of_origin,  name,  sort,  update_at,  update_by,  create_at,  create_by";
$tdatamst_hall_mark[".sqlFrom"] = "FROM mst_hall_mark";
$tdatamst_hall_mark[".sqlWhereExpr"] = "";
$tdatamst_hall_mark[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamst_hall_mark[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamst_hall_mark[".arrGroupsPerPage"] = $arrGPP;

$tdatamst_hall_mark[".highlightSearchResults"] = true;

$tableKeysmst_hall_mark = array();
$tableKeysmst_hall_mark[] = "id";
$tdatamst_hall_mark[".Keys"] = $tableKeysmst_hall_mark;

$tdatamst_hall_mark[".listFields"] = array();
$tdatamst_hall_mark[".listFields"][] = "id";
$tdatamst_hall_mark[".listFields"][] = "country_of_origin";
$tdatamst_hall_mark[".listFields"][] = "name";
$tdatamst_hall_mark[".listFields"][] = "sort";
$tdatamst_hall_mark[".listFields"][] = "update_at";
$tdatamst_hall_mark[".listFields"][] = "update_by";
$tdatamst_hall_mark[".listFields"][] = "create_at";
$tdatamst_hall_mark[".listFields"][] = "create_by";

$tdatamst_hall_mark[".hideMobileList"] = array();


$tdatamst_hall_mark[".viewFields"] = array();

$tdatamst_hall_mark[".addFields"] = array();

$tdatamst_hall_mark[".masterListFields"] = array();
$tdatamst_hall_mark[".masterListFields"][] = "id";
$tdatamst_hall_mark[".masterListFields"][] = "country_of_origin";
$tdatamst_hall_mark[".masterListFields"][] = "name";
$tdatamst_hall_mark[".masterListFields"][] = "sort";
$tdatamst_hall_mark[".masterListFields"][] = "update_at";
$tdatamst_hall_mark[".masterListFields"][] = "update_by";
$tdatamst_hall_mark[".masterListFields"][] = "create_at";
$tdatamst_hall_mark[".masterListFields"][] = "create_by";

$tdatamst_hall_mark[".inlineAddFields"] = array();
$tdatamst_hall_mark[".inlineAddFields"][] = "country_of_origin";
$tdatamst_hall_mark[".inlineAddFields"][] = "name";
$tdatamst_hall_mark[".inlineAddFields"][] = "sort";

$tdatamst_hall_mark[".editFields"] = array();

$tdatamst_hall_mark[".inlineEditFields"] = array();
$tdatamst_hall_mark[".inlineEditFields"][] = "country_of_origin";
$tdatamst_hall_mark[".inlineEditFields"][] = "name";
$tdatamst_hall_mark[".inlineEditFields"][] = "sort";

$tdatamst_hall_mark[".updateSelectedFields"] = array();


$tdatamst_hall_mark[".exportFields"] = array();
$tdatamst_hall_mark[".exportFields"][] = "id";
$tdatamst_hall_mark[".exportFields"][] = "country_of_origin";
$tdatamst_hall_mark[".exportFields"][] = "name";
$tdatamst_hall_mark[".exportFields"][] = "sort";
$tdatamst_hall_mark[".exportFields"][] = "update_at";
$tdatamst_hall_mark[".exportFields"][] = "update_by";
$tdatamst_hall_mark[".exportFields"][] = "create_at";
$tdatamst_hall_mark[".exportFields"][] = "create_by";

$tdatamst_hall_mark[".importFields"] = array();
$tdatamst_hall_mark[".importFields"][] = "id";
$tdatamst_hall_mark[".importFields"][] = "country_of_origin";
$tdatamst_hall_mark[".importFields"][] = "name";
$tdatamst_hall_mark[".importFields"][] = "sort";

$tdatamst_hall_mark[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "mst_hall_mark";
	$fdata["Label"] = GetFieldLabel("mst_hall_mark","id");
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




	$tdatamst_hall_mark["id"] = $fdata;
//	country_of_origin
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "country_of_origin";
	$fdata["GoodName"] = "country_of_origin";
	$fdata["ownerTable"] = "mst_hall_mark";
	$fdata["Label"] = GetFieldLabel("mst_hall_mark","country_of_origin");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "country_of_origin";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "country_of_origin";

	
	
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




	$tdatamst_hall_mark["country_of_origin"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "mst_hall_mark";
	$fdata["Label"] = GetFieldLabel("mst_hall_mark","name");
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




	$tdatamst_hall_mark["name"] = $fdata;
//	sort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "sort";
	$fdata["GoodName"] = "sort";
	$fdata["ownerTable"] = "mst_hall_mark";
	$fdata["Label"] = GetFieldLabel("mst_hall_mark","sort");
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




	$tdatamst_hall_mark["sort"] = $fdata;
//	update_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "update_at";
	$fdata["GoodName"] = "update_at";
	$fdata["ownerTable"] = "mst_hall_mark";
	$fdata["Label"] = GetFieldLabel("mst_hall_mark","update_at");
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




	$tdatamst_hall_mark["update_at"] = $fdata;
//	update_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "update_by";
	$fdata["GoodName"] = "update_by";
	$fdata["ownerTable"] = "mst_hall_mark";
	$fdata["Label"] = GetFieldLabel("mst_hall_mark","update_by");
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




	$tdatamst_hall_mark["update_by"] = $fdata;
//	create_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "create_at";
	$fdata["GoodName"] = "create_at";
	$fdata["ownerTable"] = "mst_hall_mark";
	$fdata["Label"] = GetFieldLabel("mst_hall_mark","create_at");
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




	$tdatamst_hall_mark["create_at"] = $fdata;
//	create_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "create_by";
	$fdata["GoodName"] = "create_by";
	$fdata["ownerTable"] = "mst_hall_mark";
	$fdata["Label"] = GetFieldLabel("mst_hall_mark","create_by");
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




	$tdatamst_hall_mark["create_by"] = $fdata;


$tables_data["mst_hall_mark"]=&$tdatamst_hall_mark;
$field_labels["mst_hall_mark"] = &$fieldLabelsmst_hall_mark;
$fieldToolTips["mst_hall_mark"] = &$fieldToolTipsmst_hall_mark;
$placeHolders["mst_hall_mark"] = &$placeHoldersmst_hall_mark;
$page_titles["mst_hall_mark"] = &$pageTitlesmst_hall_mark;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mst_hall_mark"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mst_hall_mark"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mst_hall_mark()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  country_of_origin,  name,  sort,  update_at,  update_by,  create_at,  create_by";
$proto0["m_strFrom"] = "FROM mst_hall_mark";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY id DESC";
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
	"m_strTable" => "mst_hall_mark",
	"m_srcTableName" => "mst_hall_mark"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "mst_hall_mark";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "country_of_origin",
	"m_strTable" => "mst_hall_mark",
	"m_srcTableName" => "mst_hall_mark"
));

$proto8["m_sql"] = "country_of_origin";
$proto8["m_srcTableName"] = "mst_hall_mark";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "mst_hall_mark",
	"m_srcTableName" => "mst_hall_mark"
));

$proto10["m_sql"] = "name";
$proto10["m_srcTableName"] = "mst_hall_mark";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "sort",
	"m_strTable" => "mst_hall_mark",
	"m_srcTableName" => "mst_hall_mark"
));

$proto12["m_sql"] = "sort";
$proto12["m_srcTableName"] = "mst_hall_mark";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "update_at",
	"m_strTable" => "mst_hall_mark",
	"m_srcTableName" => "mst_hall_mark"
));

$proto14["m_sql"] = "update_at";
$proto14["m_srcTableName"] = "mst_hall_mark";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "update_by",
	"m_strTable" => "mst_hall_mark",
	"m_srcTableName" => "mst_hall_mark"
));

$proto16["m_sql"] = "update_by";
$proto16["m_srcTableName"] = "mst_hall_mark";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "create_at",
	"m_strTable" => "mst_hall_mark",
	"m_srcTableName" => "mst_hall_mark"
));

$proto18["m_sql"] = "create_at";
$proto18["m_srcTableName"] = "mst_hall_mark";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "create_by",
	"m_strTable" => "mst_hall_mark",
	"m_srcTableName" => "mst_hall_mark"
));

$proto20["m_sql"] = "create_by";
$proto20["m_srcTableName"] = "mst_hall_mark";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "mst_hall_mark";
$proto23["m_srcTableName"] = "mst_hall_mark";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "id";
$proto23["m_columns"][] = "country_of_origin";
$proto23["m_columns"][] = "name";
$proto23["m_columns"][] = "sort";
$proto23["m_columns"][] = "update_at";
$proto23["m_columns"][] = "update_by";
$proto23["m_columns"][] = "create_at";
$proto23["m_columns"][] = "create_by";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "mst_hall_mark";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "mst_hall_mark";
$proto24=array();
$proto24["m_sql"] = "";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

$proto22["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto22);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto26=array();
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "mst_hall_mark",
	"m_srcTableName" => "mst_hall_mark"
));

$proto26["m_column"]=$obj;
$proto26["m_bAsc"] = 0;
$proto26["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto26);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="mst_hall_mark";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mst_hall_mark = createSqlQuery_mst_hall_mark();


	
		;

								

$tdatamst_hall_mark[".sqlquery"] = $queryData_mst_hall_mark;

include_once(getabspath("include/mst_hall_mark_events.php"));
$tableEvents["mst_hall_mark"] = new eventclass_mst_hall_mark;
$tdatamst_hall_mark[".hasEvents"] = true;

?>