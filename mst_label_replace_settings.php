<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamst_label_replace = array();
	$tdatamst_label_replace[".truncateText"] = true;
	$tdatamst_label_replace[".NumberOfChars"] = 80;
	$tdatamst_label_replace[".ShortName"] = "mst_label_replace";
	$tdatamst_label_replace[".OwnerID"] = "";
	$tdatamst_label_replace[".OriginalTable"] = "mst_label_replace";

//	field labels
$fieldLabelsmst_label_replace = array();
$fieldToolTipsmst_label_replace = array();
$pageTitlesmst_label_replace = array();
$placeHoldersmst_label_replace = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmst_label_replace["Japanese"] = array();
	$fieldToolTipsmst_label_replace["Japanese"] = array();
	$placeHoldersmst_label_replace["Japanese"] = array();
	$pageTitlesmst_label_replace["Japanese"] = array();
	$fieldLabelsmst_label_replace["Japanese"]["id"] = "Id";
	$fieldToolTipsmst_label_replace["Japanese"]["id"] = "";
	$placeHoldersmst_label_replace["Japanese"]["id"] = "";
	$fieldLabelsmst_label_replace["Japanese"]["object_name"] = "Object Name";
	$fieldToolTipsmst_label_replace["Japanese"]["object_name"] = "";
	$placeHoldersmst_label_replace["Japanese"]["object_name"] = "";
	$fieldLabelsmst_label_replace["Japanese"]["data_name"] = "Data Name";
	$fieldToolTipsmst_label_replace["Japanese"]["data_name"] = "";
	$placeHoldersmst_label_replace["Japanese"]["data_name"] = "";
	$fieldLabelsmst_label_replace["Japanese"]["update_by"] = "Update By";
	$fieldToolTipsmst_label_replace["Japanese"]["update_by"] = "";
	$placeHoldersmst_label_replace["Japanese"]["update_by"] = "";
	$fieldLabelsmst_label_replace["Japanese"]["update_at"] = "Update At";
	$fieldToolTipsmst_label_replace["Japanese"]["update_at"] = "";
	$placeHoldersmst_label_replace["Japanese"]["update_at"] = "";
	$fieldLabelsmst_label_replace["Japanese"]["create_by"] = "Create By";
	$fieldToolTipsmst_label_replace["Japanese"]["create_by"] = "";
	$placeHoldersmst_label_replace["Japanese"]["create_by"] = "";
	$fieldLabelsmst_label_replace["Japanese"]["create_at"] = "Create At";
	$fieldToolTipsmst_label_replace["Japanese"]["create_at"] = "";
	$placeHoldersmst_label_replace["Japanese"]["create_at"] = "";
	if (count($fieldToolTipsmst_label_replace["Japanese"]))
		$tdatamst_label_replace[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmst_label_replace[""] = array();
	$fieldToolTipsmst_label_replace[""] = array();
	$placeHoldersmst_label_replace[""] = array();
	$pageTitlesmst_label_replace[""] = array();
	$fieldLabelsmst_label_replace[""]["id"] = "Id";
	$fieldToolTipsmst_label_replace[""]["id"] = "";
	$placeHoldersmst_label_replace[""]["id"] = "";
	$fieldLabelsmst_label_replace[""]["object_name"] = "Object Name";
	$fieldToolTipsmst_label_replace[""]["object_name"] = "";
	$placeHoldersmst_label_replace[""]["object_name"] = "";
	$fieldLabelsmst_label_replace[""]["data_name"] = "Data Name";
	$fieldToolTipsmst_label_replace[""]["data_name"] = "";
	$placeHoldersmst_label_replace[""]["data_name"] = "";
	$fieldLabelsmst_label_replace[""]["update_by"] = "Update By";
	$fieldToolTipsmst_label_replace[""]["update_by"] = "";
	$placeHoldersmst_label_replace[""]["update_by"] = "";
	$fieldLabelsmst_label_replace[""]["update_at"] = "Update At";
	$fieldToolTipsmst_label_replace[""]["update_at"] = "";
	$placeHoldersmst_label_replace[""]["update_at"] = "";
	$fieldLabelsmst_label_replace[""]["create_by"] = "Create By";
	$fieldToolTipsmst_label_replace[""]["create_by"] = "";
	$placeHoldersmst_label_replace[""]["create_by"] = "";
	$fieldLabelsmst_label_replace[""]["create_at"] = "Create At";
	$fieldToolTipsmst_label_replace[""]["create_at"] = "";
	$placeHoldersmst_label_replace[""]["create_at"] = "";
	if (count($fieldToolTipsmst_label_replace[""]))
		$tdatamst_label_replace[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmst_label_replace["English"] = array();
	$fieldToolTipsmst_label_replace["English"] = array();
	$placeHoldersmst_label_replace["English"] = array();
	$pageTitlesmst_label_replace["English"] = array();
	$fieldLabelsmst_label_replace["English"]["id"] = "Id";
	$fieldToolTipsmst_label_replace["English"]["id"] = "";
	$placeHoldersmst_label_replace["English"]["id"] = "";
	$fieldLabelsmst_label_replace["English"]["object_name"] = "Object Name";
	$fieldToolTipsmst_label_replace["English"]["object_name"] = "";
	$placeHoldersmst_label_replace["English"]["object_name"] = "";
	$fieldLabelsmst_label_replace["English"]["data_name"] = "Data Name";
	$fieldToolTipsmst_label_replace["English"]["data_name"] = "";
	$placeHoldersmst_label_replace["English"]["data_name"] = "";
	$fieldLabelsmst_label_replace["English"]["update_by"] = "Update By";
	$fieldToolTipsmst_label_replace["English"]["update_by"] = "";
	$placeHoldersmst_label_replace["English"]["update_by"] = "";
	$fieldLabelsmst_label_replace["English"]["update_at"] = "Update At";
	$fieldToolTipsmst_label_replace["English"]["update_at"] = "";
	$placeHoldersmst_label_replace["English"]["update_at"] = "";
	$fieldLabelsmst_label_replace["English"]["create_by"] = "Create By";
	$fieldToolTipsmst_label_replace["English"]["create_by"] = "";
	$placeHoldersmst_label_replace["English"]["create_by"] = "";
	$fieldLabelsmst_label_replace["English"]["create_at"] = "Create At";
	$fieldToolTipsmst_label_replace["English"]["create_at"] = "";
	$placeHoldersmst_label_replace["English"]["create_at"] = "";
	if (count($fieldToolTipsmst_label_replace["English"]))
		$tdatamst_label_replace[".isUseToolTips"] = true;
}


	$tdatamst_label_replace[".NCSearch"] = true;



$tdatamst_label_replace[".shortTableName"] = "mst_label_replace";
$tdatamst_label_replace[".nSecOptions"] = 0;
$tdatamst_label_replace[".recsPerRowPrint"] = 1;
$tdatamst_label_replace[".mainTableOwnerID"] = "";
$tdatamst_label_replace[".moveNext"] = 1;
$tdatamst_label_replace[".entityType"] = 0;

$tdatamst_label_replace[".strOriginalTableName"] = "mst_label_replace";

	



$tdatamst_label_replace[".showAddInPopup"] = false;

$tdatamst_label_replace[".showEditInPopup"] = false;

$tdatamst_label_replace[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamst_label_replace[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamst_label_replace[".fieldsForRegister"] = array();

$tdatamst_label_replace[".listAjax"] = false;

	$tdatamst_label_replace[".audit"] = false;

	$tdatamst_label_replace[".locking"] = false;

$tdatamst_label_replace[".edit"] = true;
$tdatamst_label_replace[".afterEditAction"] = 1;
$tdatamst_label_replace[".closePopupAfterEdit"] = 1;
$tdatamst_label_replace[".afterEditActionDetTable"] = "";


$tdatamst_label_replace[".list"] = true;

$tdatamst_label_replace[".inlineEdit"] = true;


$tdatamst_label_replace[".reorderRecordsByHeader"] = true;



$tdatamst_label_replace[".inlineAdd"] = true;





$tdatamst_label_replace[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamst_label_replace[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamst_label_replace[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamst_label_replace[".searchSaving"] = false;
//

$tdatamst_label_replace[".showSearchPanel"] = true;
		$tdatamst_label_replace[".flexibleSearch"] = true;

$tdatamst_label_replace[".isUseAjaxSuggest"] = true;

$tdatamst_label_replace[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatamst_label_replace[".ajaxCodeSnippetAdded"] = false;

$tdatamst_label_replace[".buttonsAdded"] = false;

$tdatamst_label_replace[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamst_label_replace[".isUseTimeForSearch"] = false;





$tdatamst_label_replace[".allSearchFields"] = array();
$tdatamst_label_replace[".filterFields"] = array();
$tdatamst_label_replace[".requiredSearchFields"] = array();

$tdatamst_label_replace[".allSearchFields"][] = "id";
	$tdatamst_label_replace[".allSearchFields"][] = "object_name";
	$tdatamst_label_replace[".allSearchFields"][] = "data_name";
	$tdatamst_label_replace[".allSearchFields"][] = "update_by";
	$tdatamst_label_replace[".allSearchFields"][] = "update_at";
	$tdatamst_label_replace[".allSearchFields"][] = "create_by";
	$tdatamst_label_replace[".allSearchFields"][] = "create_at";
	

$tdatamst_label_replace[".googleLikeFields"] = array();
$tdatamst_label_replace[".googleLikeFields"][] = "id";
$tdatamst_label_replace[".googleLikeFields"][] = "object_name";
$tdatamst_label_replace[".googleLikeFields"][] = "data_name";
$tdatamst_label_replace[".googleLikeFields"][] = "update_by";
$tdatamst_label_replace[".googleLikeFields"][] = "update_at";
$tdatamst_label_replace[".googleLikeFields"][] = "create_by";
$tdatamst_label_replace[".googleLikeFields"][] = "create_at";


$tdatamst_label_replace[".advSearchFields"] = array();
$tdatamst_label_replace[".advSearchFields"][] = "id";
$tdatamst_label_replace[".advSearchFields"][] = "object_name";
$tdatamst_label_replace[".advSearchFields"][] = "data_name";
$tdatamst_label_replace[".advSearchFields"][] = "update_by";
$tdatamst_label_replace[".advSearchFields"][] = "update_at";
$tdatamst_label_replace[".advSearchFields"][] = "create_by";
$tdatamst_label_replace[".advSearchFields"][] = "create_at";

$tdatamst_label_replace[".tableType"] = "list";

$tdatamst_label_replace[".printerPageOrientation"] = 0;
$tdatamst_label_replace[".nPrinterPageScale"] = 100;

$tdatamst_label_replace[".nPrinterSplitRecords"] = 40;

$tdatamst_label_replace[".nPrinterPDFSplitRecords"] = 40;



$tdatamst_label_replace[".geocodingEnabled"] = false;





$tdatamst_label_replace[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamst_label_replace[".pageSize"] = 20;

$tdatamst_label_replace[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamst_label_replace[".strOrderBy"] = $tstrOrderBy;

$tdatamst_label_replace[".orderindexes"] = array();

$tdatamst_label_replace[".sqlHead"] = "SELECT `id`,  	`object_name`,  	`data_name`,  	`update_by`,  	`update_at`,  	`create_by`,  	`create_at`";
$tdatamst_label_replace[".sqlFrom"] = "FROM `mst_label_replace`";
$tdatamst_label_replace[".sqlWhereExpr"] = "";
$tdatamst_label_replace[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamst_label_replace[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamst_label_replace[".arrGroupsPerPage"] = $arrGPP;

$tdatamst_label_replace[".highlightSearchResults"] = true;

$tableKeysmst_label_replace = array();
$tableKeysmst_label_replace[] = "id";
$tdatamst_label_replace[".Keys"] = $tableKeysmst_label_replace;

$tdatamst_label_replace[".listFields"] = array();
$tdatamst_label_replace[".listFields"][] = "id";
$tdatamst_label_replace[".listFields"][] = "object_name";
$tdatamst_label_replace[".listFields"][] = "data_name";
$tdatamst_label_replace[".listFields"][] = "update_by";
$tdatamst_label_replace[".listFields"][] = "update_at";
$tdatamst_label_replace[".listFields"][] = "create_by";
$tdatamst_label_replace[".listFields"][] = "create_at";

$tdatamst_label_replace[".hideMobileList"] = array();


$tdatamst_label_replace[".viewFields"] = array();

$tdatamst_label_replace[".addFields"] = array();

$tdatamst_label_replace[".masterListFields"] = array();
$tdatamst_label_replace[".masterListFields"][] = "id";
$tdatamst_label_replace[".masterListFields"][] = "object_name";
$tdatamst_label_replace[".masterListFields"][] = "data_name";
$tdatamst_label_replace[".masterListFields"][] = "update_by";
$tdatamst_label_replace[".masterListFields"][] = "update_at";
$tdatamst_label_replace[".masterListFields"][] = "create_by";
$tdatamst_label_replace[".masterListFields"][] = "create_at";

$tdatamst_label_replace[".inlineAddFields"] = array();
$tdatamst_label_replace[".inlineAddFields"][] = "object_name";
$tdatamst_label_replace[".inlineAddFields"][] = "data_name";
$tdatamst_label_replace[".inlineAddFields"][] = "update_by";
$tdatamst_label_replace[".inlineAddFields"][] = "update_at";
$tdatamst_label_replace[".inlineAddFields"][] = "create_by";
$tdatamst_label_replace[".inlineAddFields"][] = "create_at";

$tdatamst_label_replace[".editFields"] = array();
$tdatamst_label_replace[".editFields"][] = "object_name";
$tdatamst_label_replace[".editFields"][] = "data_name";
$tdatamst_label_replace[".editFields"][] = "update_by";
$tdatamst_label_replace[".editFields"][] = "update_at";
$tdatamst_label_replace[".editFields"][] = "create_by";
$tdatamst_label_replace[".editFields"][] = "create_at";

$tdatamst_label_replace[".inlineEditFields"] = array();
$tdatamst_label_replace[".inlineEditFields"][] = "object_name";
$tdatamst_label_replace[".inlineEditFields"][] = "data_name";
$tdatamst_label_replace[".inlineEditFields"][] = "update_by";
$tdatamst_label_replace[".inlineEditFields"][] = "update_at";
$tdatamst_label_replace[".inlineEditFields"][] = "create_by";
$tdatamst_label_replace[".inlineEditFields"][] = "create_at";

$tdatamst_label_replace[".updateSelectedFields"] = array();
$tdatamst_label_replace[".updateSelectedFields"][] = "object_name";
$tdatamst_label_replace[".updateSelectedFields"][] = "data_name";
$tdatamst_label_replace[".updateSelectedFields"][] = "update_by";
$tdatamst_label_replace[".updateSelectedFields"][] = "update_at";
$tdatamst_label_replace[".updateSelectedFields"][] = "create_by";
$tdatamst_label_replace[".updateSelectedFields"][] = "create_at";


$tdatamst_label_replace[".exportFields"] = array();

$tdatamst_label_replace[".importFields"] = array();

$tdatamst_label_replace[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "mst_label_replace";
	$fdata["Label"] = GetFieldLabel("mst_label_replace","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdatamst_label_replace["id"] = $fdata;
//	object_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "object_name";
	$fdata["GoodName"] = "object_name";
	$fdata["ownerTable"] = "mst_label_replace";
	$fdata["Label"] = GetFieldLabel("mst_label_replace","object_name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "object_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`object_name`";

	
	
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




	$tdatamst_label_replace["object_name"] = $fdata;
//	data_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "data_name";
	$fdata["GoodName"] = "data_name";
	$fdata["ownerTable"] = "mst_label_replace";
	$fdata["Label"] = GetFieldLabel("mst_label_replace","data_name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "data_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`data_name`";

	
	
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




	$tdatamst_label_replace["data_name"] = $fdata;
//	update_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "update_by";
	$fdata["GoodName"] = "update_by";
	$fdata["ownerTable"] = "mst_label_replace";
	$fdata["Label"] = GetFieldLabel("mst_label_replace","update_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


	
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




	$tdatamst_label_replace["update_by"] = $fdata;
//	update_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "update_at";
	$fdata["GoodName"] = "update_at";
	$fdata["ownerTable"] = "mst_label_replace";
	$fdata["Label"] = GetFieldLabel("mst_label_replace","update_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "update_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`update_at`";

	
	
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




	$tdatamst_label_replace["update_at"] = $fdata;
//	create_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "create_by";
	$fdata["GoodName"] = "create_by";
	$fdata["ownerTable"] = "mst_label_replace";
	$fdata["Label"] = GetFieldLabel("mst_label_replace","create_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


	
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




	$tdatamst_label_replace["create_by"] = $fdata;
//	create_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "create_at";
	$fdata["GoodName"] = "create_at";
	$fdata["ownerTable"] = "mst_label_replace";
	$fdata["Label"] = GetFieldLabel("mst_label_replace","create_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "create_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`create_at`";

	
	
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




	$tdatamst_label_replace["create_at"] = $fdata;


$tables_data["mst_label_replace"]=&$tdatamst_label_replace;
$field_labels["mst_label_replace"] = &$fieldLabelsmst_label_replace;
$fieldToolTips["mst_label_replace"] = &$fieldToolTipsmst_label_replace;
$placeHolders["mst_label_replace"] = &$placeHoldersmst_label_replace;
$page_titles["mst_label_replace"] = &$pageTitlesmst_label_replace;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mst_label_replace"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mst_label_replace"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mst_label_replace()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  	`object_name`,  	`data_name`,  	`update_by`,  	`update_at`,  	`create_by`,  	`create_at`";
$proto0["m_strFrom"] = "FROM `mst_label_replace`";
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
	"m_strTable" => "mst_label_replace",
	"m_srcTableName" => "mst_label_replace"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "mst_label_replace";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "object_name",
	"m_strTable" => "mst_label_replace",
	"m_srcTableName" => "mst_label_replace"
));

$proto8["m_sql"] = "`object_name`";
$proto8["m_srcTableName"] = "mst_label_replace";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "data_name",
	"m_strTable" => "mst_label_replace",
	"m_srcTableName" => "mst_label_replace"
));

$proto10["m_sql"] = "`data_name`";
$proto10["m_srcTableName"] = "mst_label_replace";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "update_by",
	"m_strTable" => "mst_label_replace",
	"m_srcTableName" => "mst_label_replace"
));

$proto12["m_sql"] = "`update_by`";
$proto12["m_srcTableName"] = "mst_label_replace";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "update_at",
	"m_strTable" => "mst_label_replace",
	"m_srcTableName" => "mst_label_replace"
));

$proto14["m_sql"] = "`update_at`";
$proto14["m_srcTableName"] = "mst_label_replace";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "create_by",
	"m_strTable" => "mst_label_replace",
	"m_srcTableName" => "mst_label_replace"
));

$proto16["m_sql"] = "`create_by`";
$proto16["m_srcTableName"] = "mst_label_replace";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "create_at",
	"m_strTable" => "mst_label_replace",
	"m_srcTableName" => "mst_label_replace"
));

$proto18["m_sql"] = "`create_at`";
$proto18["m_srcTableName"] = "mst_label_replace";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "mst_label_replace";
$proto21["m_srcTableName"] = "mst_label_replace";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "id";
$proto21["m_columns"][] = "object_name";
$proto21["m_columns"][] = "data_name";
$proto21["m_columns"][] = "update_by";
$proto21["m_columns"][] = "update_at";
$proto21["m_columns"][] = "create_by";
$proto21["m_columns"][] = "create_at";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "`mst_label_replace`";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "mst_label_replace";
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
$proto0["m_srcTableName"]="mst_label_replace";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mst_label_replace = createSqlQuery_mst_label_replace();


	
		;

							

$tdatamst_label_replace[".sqlquery"] = $queryData_mst_label_replace;

$tableEvents["mst_label_replace"] = new eventsBase;
$tdatamst_label_replace[".hasEvents"] = false;

?>