<?php
require_once(getabspath("classes/cipherer.php"));




$tdata_chigin_result_type = array();
	$tdata_chigin_result_type[".truncateText"] = true;
	$tdata_chigin_result_type[".NumberOfChars"] = 80;
	$tdata_chigin_result_type[".ShortName"] = "_chigin_result_type";
	$tdata_chigin_result_type[".OwnerID"] = "";
	$tdata_chigin_result_type[".OriginalTable"] = "_chigin_result_type";

//	field labels
$fieldLabels_chigin_result_type = array();
$fieldToolTips_chigin_result_type = array();
$pageTitles_chigin_result_type = array();
$placeHolders_chigin_result_type = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabels_chigin_result_type["Japanese"] = array();
	$fieldToolTips_chigin_result_type["Japanese"] = array();
	$placeHolders_chigin_result_type["Japanese"] = array();
	$pageTitles_chigin_result_type["Japanese"] = array();
	$fieldLabels_chigin_result_type["Japanese"]["id"] = "Id";
	$fieldToolTips_chigin_result_type["Japanese"]["id"] = "";
	$placeHolders_chigin_result_type["Japanese"]["id"] = "";
	$fieldLabels_chigin_result_type["Japanese"]["name"] = "Name";
	$fieldToolTips_chigin_result_type["Japanese"]["name"] = "";
	$placeHolders_chigin_result_type["Japanese"]["name"] = "";
	$fieldLabels_chigin_result_type["Japanese"]["sort"] = "Sort";
	$fieldToolTips_chigin_result_type["Japanese"]["sort"] = "";
	$placeHolders_chigin_result_type["Japanese"]["sort"] = "";
	$fieldLabels_chigin_result_type["Japanese"]["update_by"] = "更新者";
	$fieldToolTips_chigin_result_type["Japanese"]["update_by"] = "";
	$placeHolders_chigin_result_type["Japanese"]["update_by"] = "";
	$fieldLabels_chigin_result_type["Japanese"]["update_at"] = "更新日";
	$fieldToolTips_chigin_result_type["Japanese"]["update_at"] = "";
	$placeHolders_chigin_result_type["Japanese"]["update_at"] = "";
	$fieldLabels_chigin_result_type["Japanese"]["create_by"] = "登録者";
	$fieldToolTips_chigin_result_type["Japanese"]["create_by"] = "";
	$placeHolders_chigin_result_type["Japanese"]["create_by"] = "";
	$fieldLabels_chigin_result_type["Japanese"]["create_at"] = "登録日";
	$fieldToolTips_chigin_result_type["Japanese"]["create_at"] = "";
	$placeHolders_chigin_result_type["Japanese"]["create_at"] = "";
	if (count($fieldToolTips_chigin_result_type["Japanese"]))
		$tdata_chigin_result_type[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabels_chigin_result_type[""] = array();
	$fieldToolTips_chigin_result_type[""] = array();
	$placeHolders_chigin_result_type[""] = array();
	$pageTitles_chigin_result_type[""] = array();
	$fieldLabels_chigin_result_type[""]["id"] = "Id";
	$fieldToolTips_chigin_result_type[""]["id"] = "";
	$placeHolders_chigin_result_type[""]["id"] = "";
	$fieldLabels_chigin_result_type[""]["name"] = "Name";
	$fieldToolTips_chigin_result_type[""]["name"] = "";
	$placeHolders_chigin_result_type[""]["name"] = "";
	$fieldLabels_chigin_result_type[""]["sort"] = "Sort";
	$fieldToolTips_chigin_result_type[""]["sort"] = "";
	$placeHolders_chigin_result_type[""]["sort"] = "";
	$fieldLabels_chigin_result_type[""]["update_by"] = "Update By";
	$fieldToolTips_chigin_result_type[""]["update_by"] = "";
	$placeHolders_chigin_result_type[""]["update_by"] = "";
	$fieldLabels_chigin_result_type[""]["update_at"] = "Update At";
	$fieldToolTips_chigin_result_type[""]["update_at"] = "";
	$placeHolders_chigin_result_type[""]["update_at"] = "";
	$fieldLabels_chigin_result_type[""]["create_by"] = "Create By";
	$fieldToolTips_chigin_result_type[""]["create_by"] = "";
	$placeHolders_chigin_result_type[""]["create_by"] = "";
	$fieldLabels_chigin_result_type[""]["create_at"] = "Create At";
	$fieldToolTips_chigin_result_type[""]["create_at"] = "";
	$placeHolders_chigin_result_type[""]["create_at"] = "";
	if (count($fieldToolTips_chigin_result_type[""]))
		$tdata_chigin_result_type[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabels_chigin_result_type["English"] = array();
	$fieldToolTips_chigin_result_type["English"] = array();
	$placeHolders_chigin_result_type["English"] = array();
	$pageTitles_chigin_result_type["English"] = array();
	$fieldLabels_chigin_result_type["English"]["id"] = "Id";
	$fieldToolTips_chigin_result_type["English"]["id"] = "";
	$placeHolders_chigin_result_type["English"]["id"] = "";
	$fieldLabels_chigin_result_type["English"]["name"] = "Name";
	$fieldToolTips_chigin_result_type["English"]["name"] = "";
	$placeHolders_chigin_result_type["English"]["name"] = "";
	$fieldLabels_chigin_result_type["English"]["sort"] = "Sort";
	$fieldToolTips_chigin_result_type["English"]["sort"] = "";
	$placeHolders_chigin_result_type["English"]["sort"] = "";
	$fieldLabels_chigin_result_type["English"]["update_by"] = "Update By";
	$fieldToolTips_chigin_result_type["English"]["update_by"] = "";
	$placeHolders_chigin_result_type["English"]["update_by"] = "";
	$fieldLabels_chigin_result_type["English"]["update_at"] = "Update At";
	$fieldToolTips_chigin_result_type["English"]["update_at"] = "";
	$placeHolders_chigin_result_type["English"]["update_at"] = "";
	$fieldLabels_chigin_result_type["English"]["create_by"] = "Create By";
	$fieldToolTips_chigin_result_type["English"]["create_by"] = "";
	$placeHolders_chigin_result_type["English"]["create_by"] = "";
	$fieldLabels_chigin_result_type["English"]["create_at"] = "Create At";
	$fieldToolTips_chigin_result_type["English"]["create_at"] = "";
	$placeHolders_chigin_result_type["English"]["create_at"] = "";
	if (count($fieldToolTips_chigin_result_type["English"]))
		$tdata_chigin_result_type[".isUseToolTips"] = true;
}


	$tdata_chigin_result_type[".NCSearch"] = true;



$tdata_chigin_result_type[".shortTableName"] = "_chigin_result_type";
$tdata_chigin_result_type[".nSecOptions"] = 0;
$tdata_chigin_result_type[".recsPerRowPrint"] = 1;
$tdata_chigin_result_type[".mainTableOwnerID"] = "";
$tdata_chigin_result_type[".moveNext"] = 1;
$tdata_chigin_result_type[".entityType"] = 0;

$tdata_chigin_result_type[".strOriginalTableName"] = "_chigin_result_type";

	



$tdata_chigin_result_type[".showAddInPopup"] = false;

$tdata_chigin_result_type[".showEditInPopup"] = false;

$tdata_chigin_result_type[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdata_chigin_result_type[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdata_chigin_result_type[".fieldsForRegister"] = array();

$tdata_chigin_result_type[".listAjax"] = false;

	$tdata_chigin_result_type[".audit"] = true;

	$tdata_chigin_result_type[".locking"] = false;



$tdata_chigin_result_type[".list"] = true;

$tdata_chigin_result_type[".inlineEdit"] = true;


$tdata_chigin_result_type[".reorderRecordsByHeader"] = true;



$tdata_chigin_result_type[".inlineAdd"] = true;

$tdata_chigin_result_type[".import"] = true;

$tdata_chigin_result_type[".exportTo"] = true;


$tdata_chigin_result_type[".delete"] = true;

$tdata_chigin_result_type[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdata_chigin_result_type[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdata_chigin_result_type[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdata_chigin_result_type[".searchSaving"] = false;
//

$tdata_chigin_result_type[".showSearchPanel"] = true;
		$tdata_chigin_result_type[".flexibleSearch"] = true;

$tdata_chigin_result_type[".isUseAjaxSuggest"] = true;

$tdata_chigin_result_type[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdata_chigin_result_type[".ajaxCodeSnippetAdded"] = false;

$tdata_chigin_result_type[".buttonsAdded"] = false;

$tdata_chigin_result_type[".addPageEvents"] = false;

// use timepicker for search panel
$tdata_chigin_result_type[".isUseTimeForSearch"] = false;





$tdata_chigin_result_type[".allSearchFields"] = array();
$tdata_chigin_result_type[".filterFields"] = array();
$tdata_chigin_result_type[".requiredSearchFields"] = array();

$tdata_chigin_result_type[".allSearchFields"][] = "id";
	$tdata_chigin_result_type[".allSearchFields"][] = "name";
	$tdata_chigin_result_type[".allSearchFields"][] = "sort";
	$tdata_chigin_result_type[".allSearchFields"][] = "update_by";
	$tdata_chigin_result_type[".allSearchFields"][] = "update_at";
	$tdata_chigin_result_type[".allSearchFields"][] = "create_by";
	$tdata_chigin_result_type[".allSearchFields"][] = "create_at";
	

$tdata_chigin_result_type[".googleLikeFields"] = array();
$tdata_chigin_result_type[".googleLikeFields"][] = "id";
$tdata_chigin_result_type[".googleLikeFields"][] = "name";
$tdata_chigin_result_type[".googleLikeFields"][] = "sort";
$tdata_chigin_result_type[".googleLikeFields"][] = "update_by";
$tdata_chigin_result_type[".googleLikeFields"][] = "update_at";
$tdata_chigin_result_type[".googleLikeFields"][] = "create_by";
$tdata_chigin_result_type[".googleLikeFields"][] = "create_at";

$tdata_chigin_result_type[".panelSearchFields"] = array();
$tdata_chigin_result_type[".searchPanelOptions"] = array();
$tdata_chigin_result_type[".panelSearchFields"][] = "id";
	$tdata_chigin_result_type[".panelSearchFields"][] = "name";
	
$tdata_chigin_result_type[".advSearchFields"] = array();
$tdata_chigin_result_type[".advSearchFields"][] = "id";
$tdata_chigin_result_type[".advSearchFields"][] = "name";
$tdata_chigin_result_type[".advSearchFields"][] = "sort";
$tdata_chigin_result_type[".advSearchFields"][] = "update_by";
$tdata_chigin_result_type[".advSearchFields"][] = "update_at";
$tdata_chigin_result_type[".advSearchFields"][] = "create_by";
$tdata_chigin_result_type[".advSearchFields"][] = "create_at";

$tdata_chigin_result_type[".tableType"] = "list";

$tdata_chigin_result_type[".printerPageOrientation"] = 0;
$tdata_chigin_result_type[".nPrinterPageScale"] = 100;

$tdata_chigin_result_type[".nPrinterSplitRecords"] = 40;

$tdata_chigin_result_type[".nPrinterPDFSplitRecords"] = 40;



$tdata_chigin_result_type[".geocodingEnabled"] = false;





$tdata_chigin_result_type[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdata_chigin_result_type[".pageSize"] = 20;

$tdata_chigin_result_type[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdata_chigin_result_type[".strOrderBy"] = $tstrOrderBy;

$tdata_chigin_result_type[".orderindexes"] = array();

$tdata_chigin_result_type[".sqlHead"] = "SELECT id,  	name,  	sort,  	update_by,  	update_at,  	create_by,  	create_at";
$tdata_chigin_result_type[".sqlFrom"] = "FROM `_chigin_result_type`";
$tdata_chigin_result_type[".sqlWhereExpr"] = "";
$tdata_chigin_result_type[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdata_chigin_result_type[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdata_chigin_result_type[".arrGroupsPerPage"] = $arrGPP;

$tdata_chigin_result_type[".highlightSearchResults"] = true;

$tableKeys_chigin_result_type = array();
$tableKeys_chigin_result_type[] = "id";
$tdata_chigin_result_type[".Keys"] = $tableKeys_chigin_result_type;

$tdata_chigin_result_type[".listFields"] = array();
$tdata_chigin_result_type[".listFields"][] = "id";
$tdata_chigin_result_type[".listFields"][] = "name";
$tdata_chigin_result_type[".listFields"][] = "sort";
$tdata_chigin_result_type[".listFields"][] = "update_by";
$tdata_chigin_result_type[".listFields"][] = "update_at";
$tdata_chigin_result_type[".listFields"][] = "create_by";
$tdata_chigin_result_type[".listFields"][] = "create_at";

$tdata_chigin_result_type[".hideMobileList"] = array();


$tdata_chigin_result_type[".viewFields"] = array();

$tdata_chigin_result_type[".addFields"] = array();

$tdata_chigin_result_type[".masterListFields"] = array();
$tdata_chigin_result_type[".masterListFields"][] = "id";
$tdata_chigin_result_type[".masterListFields"][] = "name";
$tdata_chigin_result_type[".masterListFields"][] = "sort";
$tdata_chigin_result_type[".masterListFields"][] = "update_by";
$tdata_chigin_result_type[".masterListFields"][] = "update_at";
$tdata_chigin_result_type[".masterListFields"][] = "create_by";
$tdata_chigin_result_type[".masterListFields"][] = "create_at";

$tdata_chigin_result_type[".inlineAddFields"] = array();
$tdata_chigin_result_type[".inlineAddFields"][] = "name";
$tdata_chigin_result_type[".inlineAddFields"][] = "sort";

$tdata_chigin_result_type[".editFields"] = array();

$tdata_chigin_result_type[".inlineEditFields"] = array();
$tdata_chigin_result_type[".inlineEditFields"][] = "name";
$tdata_chigin_result_type[".inlineEditFields"][] = "sort";

$tdata_chigin_result_type[".updateSelectedFields"] = array();


$tdata_chigin_result_type[".exportFields"] = array();
$tdata_chigin_result_type[".exportFields"][] = "id";
$tdata_chigin_result_type[".exportFields"][] = "name";
$tdata_chigin_result_type[".exportFields"][] = "sort";
$tdata_chigin_result_type[".exportFields"][] = "update_by";
$tdata_chigin_result_type[".exportFields"][] = "update_at";
$tdata_chigin_result_type[".exportFields"][] = "create_by";
$tdata_chigin_result_type[".exportFields"][] = "create_at";

$tdata_chigin_result_type[".importFields"] = array();
$tdata_chigin_result_type[".importFields"][] = "id";
$tdata_chigin_result_type[".importFields"][] = "name";
$tdata_chigin_result_type[".importFields"][] = "sort";
$tdata_chigin_result_type[".importFields"][] = "update_by";
$tdata_chigin_result_type[".importFields"][] = "update_at";
$tdata_chigin_result_type[".importFields"][] = "create_by";
$tdata_chigin_result_type[".importFields"][] = "create_at";

$tdata_chigin_result_type[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "_chigin_result_type";
	$fdata["Label"] = GetFieldLabel("_chigin_result_type","id");
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




	$tdata_chigin_result_type["id"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "_chigin_result_type";
	$fdata["Label"] = GetFieldLabel("_chigin_result_type","name");
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




	$tdata_chigin_result_type["name"] = $fdata;
//	sort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sort";
	$fdata["GoodName"] = "sort";
	$fdata["ownerTable"] = "_chigin_result_type";
	$fdata["Label"] = GetFieldLabel("_chigin_result_type","sort");
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




	$tdata_chigin_result_type["sort"] = $fdata;
//	update_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "update_by";
	$fdata["GoodName"] = "update_by";
	$fdata["ownerTable"] = "_chigin_result_type";
	$fdata["Label"] = GetFieldLabel("_chigin_result_type","update_by");
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




	$tdata_chigin_result_type["update_by"] = $fdata;
//	update_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "update_at";
	$fdata["GoodName"] = "update_at";
	$fdata["ownerTable"] = "_chigin_result_type";
	$fdata["Label"] = GetFieldLabel("_chigin_result_type","update_at");
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




	$tdata_chigin_result_type["update_at"] = $fdata;
//	create_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "create_by";
	$fdata["GoodName"] = "create_by";
	$fdata["ownerTable"] = "_chigin_result_type";
	$fdata["Label"] = GetFieldLabel("_chigin_result_type","create_by");
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




	$tdata_chigin_result_type["create_by"] = $fdata;
//	create_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "create_at";
	$fdata["GoodName"] = "create_at";
	$fdata["ownerTable"] = "_chigin_result_type";
	$fdata["Label"] = GetFieldLabel("_chigin_result_type","create_at");
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




	$tdata_chigin_result_type["create_at"] = $fdata;


$tables_data["_chigin_result_type"]=&$tdata_chigin_result_type;
$field_labels["_chigin_result_type"] = &$fieldLabels_chigin_result_type;
$fieldToolTips["_chigin_result_type"] = &$fieldToolTips_chigin_result_type;
$placeHolders["_chigin_result_type"] = &$placeHolders_chigin_result_type;
$page_titles["_chigin_result_type"] = &$pageTitles_chigin_result_type;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["_chigin_result_type"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["_chigin_result_type"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery__chigin_result_type()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	name,  	sort,  	update_by,  	update_at,  	create_by,  	create_at";
$proto0["m_strFrom"] = "FROM `_chigin_result_type`";
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
	"m_strTable" => "_chigin_result_type",
	"m_srcTableName" => "_chigin_result_type"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "_chigin_result_type";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "_chigin_result_type",
	"m_srcTableName" => "_chigin_result_type"
));

$proto8["m_sql"] = "name";
$proto8["m_srcTableName"] = "_chigin_result_type";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "sort",
	"m_strTable" => "_chigin_result_type",
	"m_srcTableName" => "_chigin_result_type"
));

$proto10["m_sql"] = "sort";
$proto10["m_srcTableName"] = "_chigin_result_type";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "update_by",
	"m_strTable" => "_chigin_result_type",
	"m_srcTableName" => "_chigin_result_type"
));

$proto12["m_sql"] = "update_by";
$proto12["m_srcTableName"] = "_chigin_result_type";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "update_at",
	"m_strTable" => "_chigin_result_type",
	"m_srcTableName" => "_chigin_result_type"
));

$proto14["m_sql"] = "update_at";
$proto14["m_srcTableName"] = "_chigin_result_type";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "create_by",
	"m_strTable" => "_chigin_result_type",
	"m_srcTableName" => "_chigin_result_type"
));

$proto16["m_sql"] = "create_by";
$proto16["m_srcTableName"] = "_chigin_result_type";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "create_at",
	"m_strTable" => "_chigin_result_type",
	"m_srcTableName" => "_chigin_result_type"
));

$proto18["m_sql"] = "create_at";
$proto18["m_srcTableName"] = "_chigin_result_type";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "_chigin_result_type";
$proto21["m_srcTableName"] = "_chigin_result_type";
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
$proto20["m_sql"] = "`_chigin_result_type`";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "_chigin_result_type";
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
$proto0["m_srcTableName"]="_chigin_result_type";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData__chigin_result_type = createSqlQuery__chigin_result_type();


	
		;

							

$tdata_chigin_result_type[".sqlquery"] = $queryData__chigin_result_type;

include_once(getabspath("include/_chigin_result_type_events.php"));
$tableEvents["_chigin_result_type"] = new eventclass__chigin_result_type;
$tdata_chigin_result_type[".hasEvents"] = true;

?>