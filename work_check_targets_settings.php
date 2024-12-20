<?php
require_once(getabspath("classes/cipherer.php"));




$tdatawork_check_targets = array();
	$tdatawork_check_targets[".truncateText"] = true;
	$tdatawork_check_targets[".NumberOfChars"] = 80;
	$tdatawork_check_targets[".ShortName"] = "work_check_targets";
	$tdatawork_check_targets[".OwnerID"] = "";
	$tdatawork_check_targets[".OriginalTable"] = "work_check_targets";

//	field labels
$fieldLabelswork_check_targets = array();
$fieldToolTipswork_check_targets = array();
$pageTitleswork_check_targets = array();
$placeHolderswork_check_targets = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelswork_check_targets["Japanese"] = array();
	$fieldToolTipswork_check_targets["Japanese"] = array();
	$placeHolderswork_check_targets["Japanese"] = array();
	$pageTitleswork_check_targets["Japanese"] = array();
	$fieldLabelswork_check_targets["Japanese"]["work_check_target_id"] = "Work Check Target Id";
	$fieldToolTipswork_check_targets["Japanese"]["work_check_target_id"] = "";
	$placeHolderswork_check_targets["Japanese"]["work_check_target_id"] = "";
	$fieldLabelswork_check_targets["Japanese"]["target_table"] = "Target Table";
	$fieldToolTipswork_check_targets["Japanese"]["target_table"] = "";
	$placeHolderswork_check_targets["Japanese"]["target_table"] = "";
	$fieldLabelswork_check_targets["Japanese"]["target_id"] = "Target Id";
	$fieldToolTipswork_check_targets["Japanese"]["target_id"] = "";
	$placeHolderswork_check_targets["Japanese"]["target_id"] = "";
	$fieldLabelswork_check_targets["Japanese"]["status"] = "Status";
	$fieldToolTipswork_check_targets["Japanese"]["status"] = "";
	$placeHolderswork_check_targets["Japanese"]["status"] = "";
	$fieldLabelswork_check_targets["Japanese"]["handle_details"] = "Handle Details";
	$fieldToolTipswork_check_targets["Japanese"]["handle_details"] = "";
	$placeHolderswork_check_targets["Japanese"]["handle_details"] = "";
	$fieldLabelswork_check_targets["Japanese"]["updated_by"] = "Updated By";
	$fieldToolTipswork_check_targets["Japanese"]["updated_by"] = "";
	$placeHolderswork_check_targets["Japanese"]["updated_by"] = "";
	$fieldLabelswork_check_targets["Japanese"]["updated_at"] = "Updated At";
	$fieldToolTipswork_check_targets["Japanese"]["updated_at"] = "";
	$placeHolderswork_check_targets["Japanese"]["updated_at"] = "";
	$fieldLabelswork_check_targets["Japanese"]["created_by"] = "Created By";
	$fieldToolTipswork_check_targets["Japanese"]["created_by"] = "";
	$placeHolderswork_check_targets["Japanese"]["created_by"] = "";
	$fieldLabelswork_check_targets["Japanese"]["created_at"] = "Created At";
	$fieldToolTipswork_check_targets["Japanese"]["created_at"] = "";
	$placeHolderswork_check_targets["Japanese"]["created_at"] = "";
	if (count($fieldToolTipswork_check_targets["Japanese"]))
		$tdatawork_check_targets[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelswork_check_targets[""] = array();
	$fieldToolTipswork_check_targets[""] = array();
	$placeHolderswork_check_targets[""] = array();
	$pageTitleswork_check_targets[""] = array();
	$fieldLabelswork_check_targets[""]["work_check_target_id"] = "Work Check Target Id";
	$fieldToolTipswork_check_targets[""]["work_check_target_id"] = "";
	$placeHolderswork_check_targets[""]["work_check_target_id"] = "";
	$fieldLabelswork_check_targets[""]["target_table"] = "Target Table";
	$fieldToolTipswork_check_targets[""]["target_table"] = "";
	$placeHolderswork_check_targets[""]["target_table"] = "";
	$fieldLabelswork_check_targets[""]["target_id"] = "Target Id";
	$fieldToolTipswork_check_targets[""]["target_id"] = "";
	$placeHolderswork_check_targets[""]["target_id"] = "";
	$fieldLabelswork_check_targets[""]["status"] = "Status";
	$fieldToolTipswork_check_targets[""]["status"] = "";
	$placeHolderswork_check_targets[""]["status"] = "";
	$fieldLabelswork_check_targets[""]["handle_details"] = "Handle Details";
	$fieldToolTipswork_check_targets[""]["handle_details"] = "";
	$placeHolderswork_check_targets[""]["handle_details"] = "";
	$fieldLabelswork_check_targets[""]["updated_by"] = "Updated By";
	$fieldToolTipswork_check_targets[""]["updated_by"] = "";
	$placeHolderswork_check_targets[""]["updated_by"] = "";
	$fieldLabelswork_check_targets[""]["updated_at"] = "Updated At";
	$fieldToolTipswork_check_targets[""]["updated_at"] = "";
	$placeHolderswork_check_targets[""]["updated_at"] = "";
	$fieldLabelswork_check_targets[""]["created_by"] = "Created By";
	$fieldToolTipswork_check_targets[""]["created_by"] = "";
	$placeHolderswork_check_targets[""]["created_by"] = "";
	$fieldLabelswork_check_targets[""]["created_at"] = "Created At";
	$fieldToolTipswork_check_targets[""]["created_at"] = "";
	$placeHolderswork_check_targets[""]["created_at"] = "";
	if (count($fieldToolTipswork_check_targets[""]))
		$tdatawork_check_targets[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelswork_check_targets["English"] = array();
	$fieldToolTipswork_check_targets["English"] = array();
	$placeHolderswork_check_targets["English"] = array();
	$pageTitleswork_check_targets["English"] = array();
	$fieldLabelswork_check_targets["English"]["work_check_target_id"] = "Work Check Target Id";
	$fieldToolTipswork_check_targets["English"]["work_check_target_id"] = "";
	$placeHolderswork_check_targets["English"]["work_check_target_id"] = "";
	$fieldLabelswork_check_targets["English"]["target_table"] = "Target Table";
	$fieldToolTipswork_check_targets["English"]["target_table"] = "";
	$placeHolderswork_check_targets["English"]["target_table"] = "";
	$fieldLabelswork_check_targets["English"]["target_id"] = "Target Id";
	$fieldToolTipswork_check_targets["English"]["target_id"] = "";
	$placeHolderswork_check_targets["English"]["target_id"] = "";
	$fieldLabelswork_check_targets["English"]["status"] = "Status";
	$fieldToolTipswork_check_targets["English"]["status"] = "";
	$placeHolderswork_check_targets["English"]["status"] = "";
	$fieldLabelswork_check_targets["English"]["handle_details"] = "Handle Details";
	$fieldToolTipswork_check_targets["English"]["handle_details"] = "";
	$placeHolderswork_check_targets["English"]["handle_details"] = "";
	$fieldLabelswork_check_targets["English"]["updated_by"] = "Updated By";
	$fieldToolTipswork_check_targets["English"]["updated_by"] = "";
	$placeHolderswork_check_targets["English"]["updated_by"] = "";
	$fieldLabelswork_check_targets["English"]["updated_at"] = "Updated At";
	$fieldToolTipswork_check_targets["English"]["updated_at"] = "";
	$placeHolderswork_check_targets["English"]["updated_at"] = "";
	$fieldLabelswork_check_targets["English"]["created_by"] = "Created By";
	$fieldToolTipswork_check_targets["English"]["created_by"] = "";
	$placeHolderswork_check_targets["English"]["created_by"] = "";
	$fieldLabelswork_check_targets["English"]["created_at"] = "Created At";
	$fieldToolTipswork_check_targets["English"]["created_at"] = "";
	$placeHolderswork_check_targets["English"]["created_at"] = "";
	if (count($fieldToolTipswork_check_targets["English"]))
		$tdatawork_check_targets[".isUseToolTips"] = true;
}


	$tdatawork_check_targets[".NCSearch"] = true;



$tdatawork_check_targets[".shortTableName"] = "work_check_targets";
$tdatawork_check_targets[".nSecOptions"] = 0;
$tdatawork_check_targets[".recsPerRowPrint"] = 1;
$tdatawork_check_targets[".mainTableOwnerID"] = "";
$tdatawork_check_targets[".moveNext"] = 1;
$tdatawork_check_targets[".entityType"] = 0;

$tdatawork_check_targets[".strOriginalTableName"] = "work_check_targets";

	



$tdatawork_check_targets[".showAddInPopup"] = false;

$tdatawork_check_targets[".showEditInPopup"] = false;

$tdatawork_check_targets[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatawork_check_targets[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatawork_check_targets[".fieldsForRegister"] = array();

$tdatawork_check_targets[".listAjax"] = false;

	$tdatawork_check_targets[".audit"] = true;

	$tdatawork_check_targets[".locking"] = false;



$tdatawork_check_targets[".list"] = true;

$tdatawork_check_targets[".inlineEdit"] = true;


$tdatawork_check_targets[".reorderRecordsByHeader"] = true;



$tdatawork_check_targets[".inlineAdd"] = true;

$tdatawork_check_targets[".import"] = true;

$tdatawork_check_targets[".exportTo"] = true;


$tdatawork_check_targets[".delete"] = true;

$tdatawork_check_targets[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatawork_check_targets[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatawork_check_targets[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatawork_check_targets[".searchSaving"] = false;
//

$tdatawork_check_targets[".showSearchPanel"] = true;
		$tdatawork_check_targets[".flexibleSearch"] = true;

$tdatawork_check_targets[".isUseAjaxSuggest"] = true;

$tdatawork_check_targets[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatawork_check_targets[".ajaxCodeSnippetAdded"] = false;

$tdatawork_check_targets[".buttonsAdded"] = false;

$tdatawork_check_targets[".addPageEvents"] = false;

// use timepicker for search panel
$tdatawork_check_targets[".isUseTimeForSearch"] = false;





$tdatawork_check_targets[".allSearchFields"] = array();
$tdatawork_check_targets[".filterFields"] = array();
$tdatawork_check_targets[".requiredSearchFields"] = array();

$tdatawork_check_targets[".allSearchFields"][] = "work_check_target_id";
	$tdatawork_check_targets[".allSearchFields"][] = "target_table";
	$tdatawork_check_targets[".allSearchFields"][] = "target_id";
	$tdatawork_check_targets[".allSearchFields"][] = "status";
	$tdatawork_check_targets[".allSearchFields"][] = "handle_details";
	$tdatawork_check_targets[".allSearchFields"][] = "updated_by";
	$tdatawork_check_targets[".allSearchFields"][] = "updated_at";
	$tdatawork_check_targets[".allSearchFields"][] = "created_by";
	$tdatawork_check_targets[".allSearchFields"][] = "created_at";
	

$tdatawork_check_targets[".googleLikeFields"] = array();
$tdatawork_check_targets[".googleLikeFields"][] = "work_check_target_id";
$tdatawork_check_targets[".googleLikeFields"][] = "target_table";
$tdatawork_check_targets[".googleLikeFields"][] = "target_id";
$tdatawork_check_targets[".googleLikeFields"][] = "status";
$tdatawork_check_targets[".googleLikeFields"][] = "handle_details";
$tdatawork_check_targets[".googleLikeFields"][] = "updated_by";
$tdatawork_check_targets[".googleLikeFields"][] = "updated_at";
$tdatawork_check_targets[".googleLikeFields"][] = "created_by";
$tdatawork_check_targets[".googleLikeFields"][] = "created_at";


$tdatawork_check_targets[".advSearchFields"] = array();
$tdatawork_check_targets[".advSearchFields"][] = "work_check_target_id";
$tdatawork_check_targets[".advSearchFields"][] = "target_table";
$tdatawork_check_targets[".advSearchFields"][] = "target_id";
$tdatawork_check_targets[".advSearchFields"][] = "status";
$tdatawork_check_targets[".advSearchFields"][] = "handle_details";
$tdatawork_check_targets[".advSearchFields"][] = "updated_by";
$tdatawork_check_targets[".advSearchFields"][] = "updated_at";
$tdatawork_check_targets[".advSearchFields"][] = "created_by";
$tdatawork_check_targets[".advSearchFields"][] = "created_at";

$tdatawork_check_targets[".tableType"] = "list";

$tdatawork_check_targets[".printerPageOrientation"] = 0;
$tdatawork_check_targets[".nPrinterPageScale"] = 100;

$tdatawork_check_targets[".nPrinterSplitRecords"] = 40;

$tdatawork_check_targets[".nPrinterPDFSplitRecords"] = 40;



$tdatawork_check_targets[".geocodingEnabled"] = false;





$tdatawork_check_targets[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatawork_check_targets[".pageSize"] = 20;

$tdatawork_check_targets[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatawork_check_targets[".strOrderBy"] = $tstrOrderBy;

$tdatawork_check_targets[".orderindexes"] = array();

$tdatawork_check_targets[".sqlHead"] = "SELECT `work_check_target_id`,  	`target_table`,  	`target_id`,  	`status`,  	`handle_details`,  	`updated_by`,  	`updated_at`,  	`created_by`,  	`created_at`";
$tdatawork_check_targets[".sqlFrom"] = "FROM `work_check_targets`";
$tdatawork_check_targets[".sqlWhereExpr"] = "";
$tdatawork_check_targets[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatawork_check_targets[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatawork_check_targets[".arrGroupsPerPage"] = $arrGPP;

$tdatawork_check_targets[".highlightSearchResults"] = true;

$tableKeyswork_check_targets = array();
$tableKeyswork_check_targets[] = "work_check_target_id";
$tdatawork_check_targets[".Keys"] = $tableKeyswork_check_targets;

$tdatawork_check_targets[".listFields"] = array();
$tdatawork_check_targets[".listFields"][] = "work_check_target_id";
$tdatawork_check_targets[".listFields"][] = "target_table";
$tdatawork_check_targets[".listFields"][] = "target_id";
$tdatawork_check_targets[".listFields"][] = "status";
$tdatawork_check_targets[".listFields"][] = "handle_details";
$tdatawork_check_targets[".listFields"][] = "updated_by";
$tdatawork_check_targets[".listFields"][] = "updated_at";
$tdatawork_check_targets[".listFields"][] = "created_by";
$tdatawork_check_targets[".listFields"][] = "created_at";

$tdatawork_check_targets[".hideMobileList"] = array();


$tdatawork_check_targets[".viewFields"] = array();

$tdatawork_check_targets[".addFields"] = array();

$tdatawork_check_targets[".masterListFields"] = array();
$tdatawork_check_targets[".masterListFields"][] = "work_check_target_id";
$tdatawork_check_targets[".masterListFields"][] = "target_table";
$tdatawork_check_targets[".masterListFields"][] = "target_id";
$tdatawork_check_targets[".masterListFields"][] = "status";
$tdatawork_check_targets[".masterListFields"][] = "handle_details";
$tdatawork_check_targets[".masterListFields"][] = "updated_by";
$tdatawork_check_targets[".masterListFields"][] = "updated_at";
$tdatawork_check_targets[".masterListFields"][] = "created_by";
$tdatawork_check_targets[".masterListFields"][] = "created_at";

$tdatawork_check_targets[".inlineAddFields"] = array();
$tdatawork_check_targets[".inlineAddFields"][] = "target_table";
$tdatawork_check_targets[".inlineAddFields"][] = "target_id";
$tdatawork_check_targets[".inlineAddFields"][] = "status";
$tdatawork_check_targets[".inlineAddFields"][] = "handle_details";
$tdatawork_check_targets[".inlineAddFields"][] = "updated_by";
$tdatawork_check_targets[".inlineAddFields"][] = "updated_at";
$tdatawork_check_targets[".inlineAddFields"][] = "created_by";
$tdatawork_check_targets[".inlineAddFields"][] = "created_at";

$tdatawork_check_targets[".editFields"] = array();

$tdatawork_check_targets[".inlineEditFields"] = array();
$tdatawork_check_targets[".inlineEditFields"][] = "target_table";
$tdatawork_check_targets[".inlineEditFields"][] = "target_id";
$tdatawork_check_targets[".inlineEditFields"][] = "status";
$tdatawork_check_targets[".inlineEditFields"][] = "handle_details";
$tdatawork_check_targets[".inlineEditFields"][] = "updated_by";
$tdatawork_check_targets[".inlineEditFields"][] = "updated_at";
$tdatawork_check_targets[".inlineEditFields"][] = "created_by";
$tdatawork_check_targets[".inlineEditFields"][] = "created_at";

$tdatawork_check_targets[".updateSelectedFields"] = array();


$tdatawork_check_targets[".exportFields"] = array();
$tdatawork_check_targets[".exportFields"][] = "work_check_target_id";
$tdatawork_check_targets[".exportFields"][] = "target_table";
$tdatawork_check_targets[".exportFields"][] = "target_id";
$tdatawork_check_targets[".exportFields"][] = "status";
$tdatawork_check_targets[".exportFields"][] = "handle_details";
$tdatawork_check_targets[".exportFields"][] = "updated_by";
$tdatawork_check_targets[".exportFields"][] = "updated_at";
$tdatawork_check_targets[".exportFields"][] = "created_by";
$tdatawork_check_targets[".exportFields"][] = "created_at";

$tdatawork_check_targets[".importFields"] = array();
$tdatawork_check_targets[".importFields"][] = "work_check_target_id";
$tdatawork_check_targets[".importFields"][] = "target_table";
$tdatawork_check_targets[".importFields"][] = "target_id";
$tdatawork_check_targets[".importFields"][] = "status";
$tdatawork_check_targets[".importFields"][] = "handle_details";
$tdatawork_check_targets[".importFields"][] = "updated_by";
$tdatawork_check_targets[".importFields"][] = "updated_at";
$tdatawork_check_targets[".importFields"][] = "created_by";
$tdatawork_check_targets[".importFields"][] = "created_at";

$tdatawork_check_targets[".printFields"] = array();

//	work_check_target_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "work_check_target_id";
	$fdata["GoodName"] = "work_check_target_id";
	$fdata["ownerTable"] = "work_check_targets";
	$fdata["Label"] = GetFieldLabel("work_check_targets","work_check_target_id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "work_check_target_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`work_check_target_id`";

	
	
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




	$tdatawork_check_targets["work_check_target_id"] = $fdata;
//	target_table
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "target_table";
	$fdata["GoodName"] = "target_table";
	$fdata["ownerTable"] = "work_check_targets";
	$fdata["Label"] = GetFieldLabel("work_check_targets","target_table");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "target_table";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`target_table`";

	
	
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




	$tdatawork_check_targets["target_table"] = $fdata;
//	target_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "target_id";
	$fdata["GoodName"] = "target_id";
	$fdata["ownerTable"] = "work_check_targets";
	$fdata["Label"] = GetFieldLabel("work_check_targets","target_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "target_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`target_id`";

	
	
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




	$tdatawork_check_targets["target_id"] = $fdata;
//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "work_check_targets";
	$fdata["Label"] = GetFieldLabel("work_check_targets","status");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "status";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`status`";

	
	
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




	$tdatawork_check_targets["status"] = $fdata;
//	handle_details
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "handle_details";
	$fdata["GoodName"] = "handle_details";
	$fdata["ownerTable"] = "work_check_targets";
	$fdata["Label"] = GetFieldLabel("work_check_targets","handle_details");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "handle_details";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`handle_details`";

	
	
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




	$tdatawork_check_targets["handle_details"] = $fdata;
//	updated_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "updated_by";
	$fdata["GoodName"] = "updated_by";
	$fdata["ownerTable"] = "work_check_targets";
	$fdata["Label"] = GetFieldLabel("work_check_targets","updated_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
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




	$tdatawork_check_targets["updated_by"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "work_check_targets";
	$fdata["Label"] = GetFieldLabel("work_check_targets","updated_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "updated_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`updated_at`";

	
	
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




	$tdatawork_check_targets["updated_at"] = $fdata;
//	created_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "created_by";
	$fdata["GoodName"] = "created_by";
	$fdata["ownerTable"] = "work_check_targets";
	$fdata["Label"] = GetFieldLabel("work_check_targets","created_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
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




	$tdatawork_check_targets["created_by"] = $fdata;
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "work_check_targets";
	$fdata["Label"] = GetFieldLabel("work_check_targets","created_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "created_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`created_at`";

	
	
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




	$tdatawork_check_targets["created_at"] = $fdata;


$tables_data["work_check_targets"]=&$tdatawork_check_targets;
$field_labels["work_check_targets"] = &$fieldLabelswork_check_targets;
$fieldToolTips["work_check_targets"] = &$fieldToolTipswork_check_targets;
$placeHolders["work_check_targets"] = &$placeHolderswork_check_targets;
$page_titles["work_check_targets"] = &$pageTitleswork_check_targets;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["work_check_targets"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["work_check_targets"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_work_check_targets()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`work_check_target_id`,  	`target_table`,  	`target_id`,  	`status`,  	`handle_details`,  	`updated_by`,  	`updated_at`,  	`created_by`,  	`created_at`";
$proto0["m_strFrom"] = "FROM `work_check_targets`";
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
	"m_strName" => "work_check_target_id",
	"m_strTable" => "work_check_targets",
	"m_srcTableName" => "work_check_targets"
));

$proto6["m_sql"] = "`work_check_target_id`";
$proto6["m_srcTableName"] = "work_check_targets";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "target_table",
	"m_strTable" => "work_check_targets",
	"m_srcTableName" => "work_check_targets"
));

$proto8["m_sql"] = "`target_table`";
$proto8["m_srcTableName"] = "work_check_targets";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "target_id",
	"m_strTable" => "work_check_targets",
	"m_srcTableName" => "work_check_targets"
));

$proto10["m_sql"] = "`target_id`";
$proto10["m_srcTableName"] = "work_check_targets";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "work_check_targets",
	"m_srcTableName" => "work_check_targets"
));

$proto12["m_sql"] = "`status`";
$proto12["m_srcTableName"] = "work_check_targets";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "handle_details",
	"m_strTable" => "work_check_targets",
	"m_srcTableName" => "work_check_targets"
));

$proto14["m_sql"] = "`handle_details`";
$proto14["m_srcTableName"] = "work_check_targets";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by",
	"m_strTable" => "work_check_targets",
	"m_srcTableName" => "work_check_targets"
));

$proto16["m_sql"] = "`updated_by`";
$proto16["m_srcTableName"] = "work_check_targets";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "work_check_targets",
	"m_srcTableName" => "work_check_targets"
));

$proto18["m_sql"] = "`updated_at`";
$proto18["m_srcTableName"] = "work_check_targets";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "created_by",
	"m_strTable" => "work_check_targets",
	"m_srcTableName" => "work_check_targets"
));

$proto20["m_sql"] = "`created_by`";
$proto20["m_srcTableName"] = "work_check_targets";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "work_check_targets",
	"m_srcTableName" => "work_check_targets"
));

$proto22["m_sql"] = "`created_at`";
$proto22["m_srcTableName"] = "work_check_targets";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "work_check_targets";
$proto25["m_srcTableName"] = "work_check_targets";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "work_check_target_id";
$proto25["m_columns"][] = "target_table";
$proto25["m_columns"][] = "target_id";
$proto25["m_columns"][] = "status";
$proto25["m_columns"][] = "handle_details";
$proto25["m_columns"][] = "updated_by";
$proto25["m_columns"][] = "updated_at";
$proto25["m_columns"][] = "created_by";
$proto25["m_columns"][] = "created_at";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "`work_check_targets`";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "work_check_targets";
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
$proto0["m_srcTableName"]="work_check_targets";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_work_check_targets = createSqlQuery_work_check_targets();


	
		;

									

$tdatawork_check_targets[".sqlquery"] = $queryData_work_check_targets;

$tableEvents["work_check_targets"] = new eventsBase;
$tdatawork_check_targets[".hasEvents"] = false;

?>