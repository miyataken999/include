<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamst_condition_details = array();
	$tdatamst_condition_details[".truncateText"] = true;
	$tdatamst_condition_details[".NumberOfChars"] = 80;
	$tdatamst_condition_details[".ShortName"] = "mst_condition_details";
	$tdatamst_condition_details[".OwnerID"] = "";
	$tdatamst_condition_details[".OriginalTable"] = "mst_condition_details";

//	field labels
$fieldLabelsmst_condition_details = array();
$fieldToolTipsmst_condition_details = array();
$pageTitlesmst_condition_details = array();
$placeHoldersmst_condition_details = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmst_condition_details["Japanese"] = array();
	$fieldToolTipsmst_condition_details["Japanese"] = array();
	$placeHoldersmst_condition_details["Japanese"] = array();
	$pageTitlesmst_condition_details["Japanese"] = array();
	$fieldLabelsmst_condition_details["Japanese"]["id"] = "Id";
	$fieldToolTipsmst_condition_details["Japanese"]["id"] = "";
	$placeHoldersmst_condition_details["Japanese"]["id"] = "";
	$fieldLabelsmst_condition_details["Japanese"]["condition_detail_id"] = "Id（大カテ保存値）";
	$fieldToolTipsmst_condition_details["Japanese"]["condition_detail_id"] = "";
	$placeHoldersmst_condition_details["Japanese"]["condition_detail_id"] = "";
	$fieldLabelsmst_condition_details["Japanese"]["name"] = "Name";
	$fieldToolTipsmst_condition_details["Japanese"]["name"] = "";
	$placeHoldersmst_condition_details["Japanese"]["name"] = "";
	$fieldLabelsmst_condition_details["Japanese"]["condition_details"] = "コンディション詳細";
	$fieldToolTipsmst_condition_details["Japanese"]["condition_details"] = "";
	$placeHoldersmst_condition_details["Japanese"]["condition_details"] = "";
	$fieldLabelsmst_condition_details["Japanese"]["update_by"] = "更新者";
	$fieldToolTipsmst_condition_details["Japanese"]["update_by"] = "";
	$placeHoldersmst_condition_details["Japanese"]["update_by"] = "";
	$fieldLabelsmst_condition_details["Japanese"]["update_at"] = "更新日";
	$fieldToolTipsmst_condition_details["Japanese"]["update_at"] = "";
	$placeHoldersmst_condition_details["Japanese"]["update_at"] = "";
	$fieldLabelsmst_condition_details["Japanese"]["create_by"] = "作成者";
	$fieldToolTipsmst_condition_details["Japanese"]["create_by"] = "";
	$placeHoldersmst_condition_details["Japanese"]["create_by"] = "";
	$fieldLabelsmst_condition_details["Japanese"]["create_at"] = "作成日";
	$fieldToolTipsmst_condition_details["Japanese"]["create_at"] = "";
	$placeHoldersmst_condition_details["Japanese"]["create_at"] = "";
	if (count($fieldToolTipsmst_condition_details["Japanese"]))
		$tdatamst_condition_details[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmst_condition_details[""] = array();
	$fieldToolTipsmst_condition_details[""] = array();
	$placeHoldersmst_condition_details[""] = array();
	$pageTitlesmst_condition_details[""] = array();
	$fieldLabelsmst_condition_details[""]["id"] = "Id";
	$fieldToolTipsmst_condition_details[""]["id"] = "";
	$placeHoldersmst_condition_details[""]["id"] = "";
	$fieldLabelsmst_condition_details[""]["condition_detail_id"] = "Condition Detail Id";
	$fieldToolTipsmst_condition_details[""]["condition_detail_id"] = "";
	$placeHoldersmst_condition_details[""]["condition_detail_id"] = "";
	$fieldLabelsmst_condition_details[""]["name"] = "Name";
	$fieldToolTipsmst_condition_details[""]["name"] = "";
	$placeHoldersmst_condition_details[""]["name"] = "";
	$fieldLabelsmst_condition_details[""]["condition_details"] = "Condition Details";
	$fieldToolTipsmst_condition_details[""]["condition_details"] = "";
	$placeHoldersmst_condition_details[""]["condition_details"] = "";
	$fieldLabelsmst_condition_details[""]["update_by"] = "Update By";
	$fieldToolTipsmst_condition_details[""]["update_by"] = "";
	$placeHoldersmst_condition_details[""]["update_by"] = "";
	$fieldLabelsmst_condition_details[""]["update_at"] = "Update At";
	$fieldToolTipsmst_condition_details[""]["update_at"] = "";
	$placeHoldersmst_condition_details[""]["update_at"] = "";
	$fieldLabelsmst_condition_details[""]["create_by"] = "Create By";
	$fieldToolTipsmst_condition_details[""]["create_by"] = "";
	$placeHoldersmst_condition_details[""]["create_by"] = "";
	$fieldLabelsmst_condition_details[""]["create_at"] = "Create At";
	$fieldToolTipsmst_condition_details[""]["create_at"] = "";
	$placeHoldersmst_condition_details[""]["create_at"] = "";
	if (count($fieldToolTipsmst_condition_details[""]))
		$tdatamst_condition_details[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmst_condition_details["English"] = array();
	$fieldToolTipsmst_condition_details["English"] = array();
	$placeHoldersmst_condition_details["English"] = array();
	$pageTitlesmst_condition_details["English"] = array();
	$fieldLabelsmst_condition_details["English"]["id"] = "Id";
	$fieldToolTipsmst_condition_details["English"]["id"] = "";
	$placeHoldersmst_condition_details["English"]["id"] = "";
	$fieldLabelsmst_condition_details["English"]["condition_detail_id"] = "Condition Detail Id";
	$fieldToolTipsmst_condition_details["English"]["condition_detail_id"] = "";
	$placeHoldersmst_condition_details["English"]["condition_detail_id"] = "";
	$fieldLabelsmst_condition_details["English"]["name"] = "Name";
	$fieldToolTipsmst_condition_details["English"]["name"] = "";
	$placeHoldersmst_condition_details["English"]["name"] = "";
	$fieldLabelsmst_condition_details["English"]["condition_details"] = "Condition Details";
	$fieldToolTipsmst_condition_details["English"]["condition_details"] = "";
	$placeHoldersmst_condition_details["English"]["condition_details"] = "";
	$fieldLabelsmst_condition_details["English"]["update_by"] = "Update By";
	$fieldToolTipsmst_condition_details["English"]["update_by"] = "";
	$placeHoldersmst_condition_details["English"]["update_by"] = "";
	$fieldLabelsmst_condition_details["English"]["update_at"] = "Update At";
	$fieldToolTipsmst_condition_details["English"]["update_at"] = "";
	$placeHoldersmst_condition_details["English"]["update_at"] = "";
	$fieldLabelsmst_condition_details["English"]["create_by"] = "Create By";
	$fieldToolTipsmst_condition_details["English"]["create_by"] = "";
	$placeHoldersmst_condition_details["English"]["create_by"] = "";
	$fieldLabelsmst_condition_details["English"]["create_at"] = "Create At";
	$fieldToolTipsmst_condition_details["English"]["create_at"] = "";
	$placeHoldersmst_condition_details["English"]["create_at"] = "";
	if (count($fieldToolTipsmst_condition_details["English"]))
		$tdatamst_condition_details[".isUseToolTips"] = true;
}


	$tdatamst_condition_details[".NCSearch"] = true;



$tdatamst_condition_details[".shortTableName"] = "mst_condition_details";
$tdatamst_condition_details[".nSecOptions"] = 0;
$tdatamst_condition_details[".recsPerRowPrint"] = 1;
$tdatamst_condition_details[".mainTableOwnerID"] = "";
$tdatamst_condition_details[".moveNext"] = 1;
$tdatamst_condition_details[".entityType"] = 0;

$tdatamst_condition_details[".strOriginalTableName"] = "mst_condition_details";

	



$tdatamst_condition_details[".showAddInPopup"] = false;

$tdatamst_condition_details[".showEditInPopup"] = false;

$tdatamst_condition_details[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamst_condition_details[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamst_condition_details[".fieldsForRegister"] = array();

$tdatamst_condition_details[".listAjax"] = false;

	$tdatamst_condition_details[".audit"] = false;

	$tdatamst_condition_details[".locking"] = false;



$tdatamst_condition_details[".list"] = true;

$tdatamst_condition_details[".inlineEdit"] = true;


$tdatamst_condition_details[".reorderRecordsByHeader"] = true;



$tdatamst_condition_details[".inlineAdd"] = true;




$tdatamst_condition_details[".delete"] = true;

$tdatamst_condition_details[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamst_condition_details[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamst_condition_details[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamst_condition_details[".searchSaving"] = false;
//

$tdatamst_condition_details[".showSearchPanel"] = true;
		$tdatamst_condition_details[".flexibleSearch"] = true;

$tdatamst_condition_details[".isUseAjaxSuggest"] = true;

$tdatamst_condition_details[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatamst_condition_details[".ajaxCodeSnippetAdded"] = false;

$tdatamst_condition_details[".buttonsAdded"] = false;

$tdatamst_condition_details[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamst_condition_details[".isUseTimeForSearch"] = false;





$tdatamst_condition_details[".allSearchFields"] = array();
$tdatamst_condition_details[".filterFields"] = array();
$tdatamst_condition_details[".requiredSearchFields"] = array();

$tdatamst_condition_details[".allSearchFields"][] = "id";
	$tdatamst_condition_details[".allSearchFields"][] = "condition_detail_id";
	$tdatamst_condition_details[".allSearchFields"][] = "name";
	$tdatamst_condition_details[".allSearchFields"][] = "condition_details";
	$tdatamst_condition_details[".allSearchFields"][] = "update_by";
	$tdatamst_condition_details[".allSearchFields"][] = "update_at";
	$tdatamst_condition_details[".allSearchFields"][] = "create_by";
	$tdatamst_condition_details[".allSearchFields"][] = "create_at";
	

$tdatamst_condition_details[".googleLikeFields"] = array();
$tdatamst_condition_details[".googleLikeFields"][] = "id";
$tdatamst_condition_details[".googleLikeFields"][] = "condition_detail_id";
$tdatamst_condition_details[".googleLikeFields"][] = "name";
$tdatamst_condition_details[".googleLikeFields"][] = "condition_details";
$tdatamst_condition_details[".googleLikeFields"][] = "update_by";
$tdatamst_condition_details[".googleLikeFields"][] = "update_at";
$tdatamst_condition_details[".googleLikeFields"][] = "create_by";
$tdatamst_condition_details[".googleLikeFields"][] = "create_at";


$tdatamst_condition_details[".advSearchFields"] = array();
$tdatamst_condition_details[".advSearchFields"][] = "id";
$tdatamst_condition_details[".advSearchFields"][] = "condition_detail_id";
$tdatamst_condition_details[".advSearchFields"][] = "name";
$tdatamst_condition_details[".advSearchFields"][] = "condition_details";
$tdatamst_condition_details[".advSearchFields"][] = "update_by";
$tdatamst_condition_details[".advSearchFields"][] = "update_at";
$tdatamst_condition_details[".advSearchFields"][] = "create_by";
$tdatamst_condition_details[".advSearchFields"][] = "create_at";

$tdatamst_condition_details[".tableType"] = "list";

$tdatamst_condition_details[".printerPageOrientation"] = 0;
$tdatamst_condition_details[".nPrinterPageScale"] = 100;

$tdatamst_condition_details[".nPrinterSplitRecords"] = 40;

$tdatamst_condition_details[".nPrinterPDFSplitRecords"] = 40;



$tdatamst_condition_details[".geocodingEnabled"] = false;





$tdatamst_condition_details[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamst_condition_details[".pageSize"] = 20;

$tdatamst_condition_details[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `id` DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamst_condition_details[".strOrderBy"] = $tstrOrderBy;

$tdatamst_condition_details[".orderindexes"] = array();
$tdatamst_condition_details[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "`id`");

$tdatamst_condition_details[".sqlHead"] = "SELECT `id`,  `condition_detail_id`,  `name`,  `condition_details`,  `update_by`,  `update_at`,  `create_by`,  `create_at`";
$tdatamst_condition_details[".sqlFrom"] = "FROM `mst_condition_details`";
$tdatamst_condition_details[".sqlWhereExpr"] = "";
$tdatamst_condition_details[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamst_condition_details[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamst_condition_details[".arrGroupsPerPage"] = $arrGPP;

$tdatamst_condition_details[".highlightSearchResults"] = true;

$tableKeysmst_condition_details = array();
$tableKeysmst_condition_details[] = "id";
$tdatamst_condition_details[".Keys"] = $tableKeysmst_condition_details;

$tdatamst_condition_details[".listFields"] = array();
$tdatamst_condition_details[".listFields"][] = "id";
$tdatamst_condition_details[".listFields"][] = "condition_detail_id";
$tdatamst_condition_details[".listFields"][] = "name";
$tdatamst_condition_details[".listFields"][] = "condition_details";
$tdatamst_condition_details[".listFields"][] = "update_by";
$tdatamst_condition_details[".listFields"][] = "update_at";
$tdatamst_condition_details[".listFields"][] = "create_by";
$tdatamst_condition_details[".listFields"][] = "create_at";

$tdatamst_condition_details[".hideMobileList"] = array();


$tdatamst_condition_details[".viewFields"] = array();

$tdatamst_condition_details[".addFields"] = array();

$tdatamst_condition_details[".masterListFields"] = array();
$tdatamst_condition_details[".masterListFields"][] = "id";
$tdatamst_condition_details[".masterListFields"][] = "condition_detail_id";
$tdatamst_condition_details[".masterListFields"][] = "name";
$tdatamst_condition_details[".masterListFields"][] = "condition_details";
$tdatamst_condition_details[".masterListFields"][] = "update_by";
$tdatamst_condition_details[".masterListFields"][] = "update_at";
$tdatamst_condition_details[".masterListFields"][] = "create_by";
$tdatamst_condition_details[".masterListFields"][] = "create_at";

$tdatamst_condition_details[".inlineAddFields"] = array();
$tdatamst_condition_details[".inlineAddFields"][] = "condition_detail_id";
$tdatamst_condition_details[".inlineAddFields"][] = "name";
$tdatamst_condition_details[".inlineAddFields"][] = "condition_details";

$tdatamst_condition_details[".editFields"] = array();

$tdatamst_condition_details[".inlineEditFields"] = array();
$tdatamst_condition_details[".inlineEditFields"][] = "condition_detail_id";
$tdatamst_condition_details[".inlineEditFields"][] = "name";
$tdatamst_condition_details[".inlineEditFields"][] = "condition_details";

$tdatamst_condition_details[".updateSelectedFields"] = array();


$tdatamst_condition_details[".exportFields"] = array();

$tdatamst_condition_details[".importFields"] = array();

$tdatamst_condition_details[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "mst_condition_details";
	$fdata["Label"] = GetFieldLabel("mst_condition_details","id");
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




	$tdatamst_condition_details["id"] = $fdata;
//	condition_detail_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "condition_detail_id";
	$fdata["GoodName"] = "condition_detail_id";
	$fdata["ownerTable"] = "mst_condition_details";
	$fdata["Label"] = GetFieldLabel("mst_condition_details","condition_detail_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "condition_detail_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`condition_detail_id`";

	
	
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




	$tdatamst_condition_details["condition_detail_id"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "mst_condition_details";
	$fdata["Label"] = GetFieldLabel("mst_condition_details","name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
	
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
			$edata["EditParams"].= " maxlength=50";

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




	$tdatamst_condition_details["name"] = $fdata;
//	condition_details
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "condition_details";
	$fdata["GoodName"] = "condition_details";
	$fdata["ownerTable"] = "mst_condition_details";
	$fdata["Label"] = GetFieldLabel("mst_condition_details","condition_details");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "condition_details";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`condition_details`";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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




	$tdatamst_condition_details["condition_details"] = $fdata;
//	update_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "update_by";
	$fdata["GoodName"] = "update_by";
	$fdata["ownerTable"] = "mst_condition_details";
	$fdata["Label"] = GetFieldLabel("mst_condition_details","update_by");
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




	$tdatamst_condition_details["update_by"] = $fdata;
//	update_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "update_at";
	$fdata["GoodName"] = "update_at";
	$fdata["ownerTable"] = "mst_condition_details";
	$fdata["Label"] = GetFieldLabel("mst_condition_details","update_at");
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




	$tdatamst_condition_details["update_at"] = $fdata;
//	create_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "create_by";
	$fdata["GoodName"] = "create_by";
	$fdata["ownerTable"] = "mst_condition_details";
	$fdata["Label"] = GetFieldLabel("mst_condition_details","create_by");
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




	$tdatamst_condition_details["create_by"] = $fdata;
//	create_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "create_at";
	$fdata["GoodName"] = "create_at";
	$fdata["ownerTable"] = "mst_condition_details";
	$fdata["Label"] = GetFieldLabel("mst_condition_details","create_at");
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




	$tdatamst_condition_details["create_at"] = $fdata;


$tables_data["mst_condition_details"]=&$tdatamst_condition_details;
$field_labels["mst_condition_details"] = &$fieldLabelsmst_condition_details;
$fieldToolTips["mst_condition_details"] = &$fieldToolTipsmst_condition_details;
$placeHolders["mst_condition_details"] = &$placeHoldersmst_condition_details;
$page_titles["mst_condition_details"] = &$pageTitlesmst_condition_details;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mst_condition_details"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mst_condition_details"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mst_condition_details()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  `condition_detail_id`,  `name`,  `condition_details`,  `update_by`,  `update_at`,  `create_by`,  `create_at`";
$proto0["m_strFrom"] = "FROM `mst_condition_details`";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY `id` DESC";
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
	"m_strTable" => "mst_condition_details",
	"m_srcTableName" => "mst_condition_details"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "mst_condition_details";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "condition_detail_id",
	"m_strTable" => "mst_condition_details",
	"m_srcTableName" => "mst_condition_details"
));

$proto8["m_sql"] = "`condition_detail_id`";
$proto8["m_srcTableName"] = "mst_condition_details";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "mst_condition_details",
	"m_srcTableName" => "mst_condition_details"
));

$proto10["m_sql"] = "`name`";
$proto10["m_srcTableName"] = "mst_condition_details";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "condition_details",
	"m_strTable" => "mst_condition_details",
	"m_srcTableName" => "mst_condition_details"
));

$proto12["m_sql"] = "`condition_details`";
$proto12["m_srcTableName"] = "mst_condition_details";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "update_by",
	"m_strTable" => "mst_condition_details",
	"m_srcTableName" => "mst_condition_details"
));

$proto14["m_sql"] = "`update_by`";
$proto14["m_srcTableName"] = "mst_condition_details";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "update_at",
	"m_strTable" => "mst_condition_details",
	"m_srcTableName" => "mst_condition_details"
));

$proto16["m_sql"] = "`update_at`";
$proto16["m_srcTableName"] = "mst_condition_details";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "create_by",
	"m_strTable" => "mst_condition_details",
	"m_srcTableName" => "mst_condition_details"
));

$proto18["m_sql"] = "`create_by`";
$proto18["m_srcTableName"] = "mst_condition_details";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "create_at",
	"m_strTable" => "mst_condition_details",
	"m_srcTableName" => "mst_condition_details"
));

$proto20["m_sql"] = "`create_at`";
$proto20["m_srcTableName"] = "mst_condition_details";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "mst_condition_details";
$proto23["m_srcTableName"] = "mst_condition_details";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "id";
$proto23["m_columns"][] = "condition_detail_id";
$proto23["m_columns"][] = "name";
$proto23["m_columns"][] = "condition_details";
$proto23["m_columns"][] = "update_by";
$proto23["m_columns"][] = "update_at";
$proto23["m_columns"][] = "create_by";
$proto23["m_columns"][] = "create_at";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "`mst_condition_details`";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "mst_condition_details";
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
	"m_strTable" => "mst_condition_details",
	"m_srcTableName" => "mst_condition_details"
));

$proto26["m_column"]=$obj;
$proto26["m_bAsc"] = 0;
$proto26["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto26);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="mst_condition_details";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mst_condition_details = createSqlQuery_mst_condition_details();


	
		;

								

$tdatamst_condition_details[".sqlquery"] = $queryData_mst_condition_details;

include_once(getabspath("include/mst_condition_details_events.php"));
$tableEvents["mst_condition_details"] = new eventclass_mst_condition_details;
$tdatamst_condition_details[".hasEvents"] = true;

?>