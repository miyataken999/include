<?php
require_once(getabspath("classes/cipherer.php"));




$tdatawork_check_target_details = array();
	$tdatawork_check_target_details[".truncateText"] = true;
	$tdatawork_check_target_details[".NumberOfChars"] = 80;
	$tdatawork_check_target_details[".ShortName"] = "work_check_target_details";
	$tdatawork_check_target_details[".OwnerID"] = "";
	$tdatawork_check_target_details[".OriginalTable"] = "work_check_target_details";

//	field labels
$fieldLabelswork_check_target_details = array();
$fieldToolTipswork_check_target_details = array();
$pageTitleswork_check_target_details = array();
$placeHolderswork_check_target_details = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelswork_check_target_details["Japanese"] = array();
	$fieldToolTipswork_check_target_details["Japanese"] = array();
	$placeHolderswork_check_target_details["Japanese"] = array();
	$pageTitleswork_check_target_details["Japanese"] = array();
	$fieldLabelswork_check_target_details["Japanese"]["id"] = "Id";
	$fieldToolTipswork_check_target_details["Japanese"]["id"] = "";
	$placeHolderswork_check_target_details["Japanese"]["id"] = "";
	$fieldLabelswork_check_target_details["Japanese"]["work_check_target_id"] = "Work Check Target Id";
	$fieldToolTipswork_check_target_details["Japanese"]["work_check_target_id"] = "";
	$placeHolderswork_check_target_details["Japanese"]["work_check_target_id"] = "";
	$fieldLabelswork_check_target_details["Japanese"]["id_who_check_master"] = "Id Who Check Master";
	$fieldToolTipswork_check_target_details["Japanese"]["id_who_check_master"] = "";
	$placeHolderswork_check_target_details["Japanese"]["id_who_check_master"] = "";
	$fieldLabelswork_check_target_details["Japanese"]["id_who_check"] = "Id Who Check";
	$fieldToolTipswork_check_target_details["Japanese"]["id_who_check"] = "";
	$placeHolderswork_check_target_details["Japanese"]["id_who_check"] = "";
	$fieldLabelswork_check_target_details["Japanese"]["updated_by"] = "Updated By";
	$fieldToolTipswork_check_target_details["Japanese"]["updated_by"] = "";
	$placeHolderswork_check_target_details["Japanese"]["updated_by"] = "";
	$fieldLabelswork_check_target_details["Japanese"]["updated_at"] = "Updated At";
	$fieldToolTipswork_check_target_details["Japanese"]["updated_at"] = "";
	$placeHolderswork_check_target_details["Japanese"]["updated_at"] = "";
	$fieldLabelswork_check_target_details["Japanese"]["created_by"] = "Created By";
	$fieldToolTipswork_check_target_details["Japanese"]["created_by"] = "";
	$placeHolderswork_check_target_details["Japanese"]["created_by"] = "";
	$fieldLabelswork_check_target_details["Japanese"]["created_at"] = "Created At";
	$fieldToolTipswork_check_target_details["Japanese"]["created_at"] = "";
	$placeHolderswork_check_target_details["Japanese"]["created_at"] = "";
	$fieldLabelswork_check_target_details["Japanese"]["check_by"] = "Check By";
	$fieldToolTipswork_check_target_details["Japanese"]["check_by"] = "";
	$placeHolderswork_check_target_details["Japanese"]["check_by"] = "";
	$fieldLabelswork_check_target_details["Japanese"]["check_at"] = "Check At";
	$fieldToolTipswork_check_target_details["Japanese"]["check_at"] = "";
	$placeHolderswork_check_target_details["Japanese"]["check_at"] = "";
	if (count($fieldToolTipswork_check_target_details["Japanese"]))
		$tdatawork_check_target_details[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelswork_check_target_details[""] = array();
	$fieldToolTipswork_check_target_details[""] = array();
	$placeHolderswork_check_target_details[""] = array();
	$pageTitleswork_check_target_details[""] = array();
	$fieldLabelswork_check_target_details[""]["id"] = "Id";
	$fieldToolTipswork_check_target_details[""]["id"] = "";
	$placeHolderswork_check_target_details[""]["id"] = "";
	$fieldLabelswork_check_target_details[""]["work_check_target_id"] = "Work Check Target Id";
	$fieldToolTipswork_check_target_details[""]["work_check_target_id"] = "";
	$placeHolderswork_check_target_details[""]["work_check_target_id"] = "";
	$fieldLabelswork_check_target_details[""]["id_who_check_master"] = "Id Who Check Master";
	$fieldToolTipswork_check_target_details[""]["id_who_check_master"] = "";
	$placeHolderswork_check_target_details[""]["id_who_check_master"] = "";
	$fieldLabelswork_check_target_details[""]["id_who_check"] = "Id Who Check";
	$fieldToolTipswork_check_target_details[""]["id_who_check"] = "";
	$placeHolderswork_check_target_details[""]["id_who_check"] = "";
	$fieldLabelswork_check_target_details[""]["updated_by"] = "Updated By";
	$fieldToolTipswork_check_target_details[""]["updated_by"] = "";
	$placeHolderswork_check_target_details[""]["updated_by"] = "";
	$fieldLabelswork_check_target_details[""]["updated_at"] = "Updated At";
	$fieldToolTipswork_check_target_details[""]["updated_at"] = "";
	$placeHolderswork_check_target_details[""]["updated_at"] = "";
	$fieldLabelswork_check_target_details[""]["created_by"] = "Created By";
	$fieldToolTipswork_check_target_details[""]["created_by"] = "";
	$placeHolderswork_check_target_details[""]["created_by"] = "";
	$fieldLabelswork_check_target_details[""]["created_at"] = "Created At";
	$fieldToolTipswork_check_target_details[""]["created_at"] = "";
	$placeHolderswork_check_target_details[""]["created_at"] = "";
	$fieldLabelswork_check_target_details[""]["check_by"] = "Check By";
	$fieldToolTipswork_check_target_details[""]["check_by"] = "";
	$placeHolderswork_check_target_details[""]["check_by"] = "";
	$fieldLabelswork_check_target_details[""]["check_at"] = "Check At";
	$fieldToolTipswork_check_target_details[""]["check_at"] = "";
	$placeHolderswork_check_target_details[""]["check_at"] = "";
	if (count($fieldToolTipswork_check_target_details[""]))
		$tdatawork_check_target_details[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelswork_check_target_details["English"] = array();
	$fieldToolTipswork_check_target_details["English"] = array();
	$placeHolderswork_check_target_details["English"] = array();
	$pageTitleswork_check_target_details["English"] = array();
	$fieldLabelswork_check_target_details["English"]["id"] = "Id";
	$fieldToolTipswork_check_target_details["English"]["id"] = "";
	$placeHolderswork_check_target_details["English"]["id"] = "";
	$fieldLabelswork_check_target_details["English"]["work_check_target_id"] = "Work Check Target Id";
	$fieldToolTipswork_check_target_details["English"]["work_check_target_id"] = "";
	$placeHolderswork_check_target_details["English"]["work_check_target_id"] = "";
	$fieldLabelswork_check_target_details["English"]["id_who_check_master"] = "Id Who Check Master";
	$fieldToolTipswork_check_target_details["English"]["id_who_check_master"] = "";
	$placeHolderswork_check_target_details["English"]["id_who_check_master"] = "";
	$fieldLabelswork_check_target_details["English"]["id_who_check"] = "Id Who Check";
	$fieldToolTipswork_check_target_details["English"]["id_who_check"] = "";
	$placeHolderswork_check_target_details["English"]["id_who_check"] = "";
	$fieldLabelswork_check_target_details["English"]["updated_by"] = "Updated By";
	$fieldToolTipswork_check_target_details["English"]["updated_by"] = "";
	$placeHolderswork_check_target_details["English"]["updated_by"] = "";
	$fieldLabelswork_check_target_details["English"]["updated_at"] = "Updated At";
	$fieldToolTipswork_check_target_details["English"]["updated_at"] = "";
	$placeHolderswork_check_target_details["English"]["updated_at"] = "";
	$fieldLabelswork_check_target_details["English"]["created_by"] = "Created By";
	$fieldToolTipswork_check_target_details["English"]["created_by"] = "";
	$placeHolderswork_check_target_details["English"]["created_by"] = "";
	$fieldLabelswork_check_target_details["English"]["created_at"] = "Created At";
	$fieldToolTipswork_check_target_details["English"]["created_at"] = "";
	$placeHolderswork_check_target_details["English"]["created_at"] = "";
	$fieldLabelswork_check_target_details["English"]["check_by"] = "Check By";
	$fieldToolTipswork_check_target_details["English"]["check_by"] = "";
	$placeHolderswork_check_target_details["English"]["check_by"] = "";
	$fieldLabelswork_check_target_details["English"]["check_at"] = "Check At";
	$fieldToolTipswork_check_target_details["English"]["check_at"] = "";
	$placeHolderswork_check_target_details["English"]["check_at"] = "";
	if (count($fieldToolTipswork_check_target_details["English"]))
		$tdatawork_check_target_details[".isUseToolTips"] = true;
}


	$tdatawork_check_target_details[".NCSearch"] = true;



$tdatawork_check_target_details[".shortTableName"] = "work_check_target_details";
$tdatawork_check_target_details[".nSecOptions"] = 0;
$tdatawork_check_target_details[".recsPerRowPrint"] = 1;
$tdatawork_check_target_details[".mainTableOwnerID"] = "";
$tdatawork_check_target_details[".moveNext"] = 1;
$tdatawork_check_target_details[".entityType"] = 0;

$tdatawork_check_target_details[".strOriginalTableName"] = "work_check_target_details";

	



$tdatawork_check_target_details[".showAddInPopup"] = false;

$tdatawork_check_target_details[".showEditInPopup"] = false;

$tdatawork_check_target_details[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatawork_check_target_details[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatawork_check_target_details[".fieldsForRegister"] = array();

$tdatawork_check_target_details[".listAjax"] = false;

	$tdatawork_check_target_details[".audit"] = true;

	$tdatawork_check_target_details[".locking"] = false;



$tdatawork_check_target_details[".list"] = true;

$tdatawork_check_target_details[".inlineEdit"] = true;


$tdatawork_check_target_details[".reorderRecordsByHeader"] = true;



$tdatawork_check_target_details[".inlineAdd"] = true;

$tdatawork_check_target_details[".import"] = true;

$tdatawork_check_target_details[".exportTo"] = true;


$tdatawork_check_target_details[".delete"] = true;

$tdatawork_check_target_details[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatawork_check_target_details[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatawork_check_target_details[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatawork_check_target_details[".searchSaving"] = false;
//

$tdatawork_check_target_details[".showSearchPanel"] = true;
		$tdatawork_check_target_details[".flexibleSearch"] = true;

$tdatawork_check_target_details[".isUseAjaxSuggest"] = true;

$tdatawork_check_target_details[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatawork_check_target_details[".ajaxCodeSnippetAdded"] = false;

$tdatawork_check_target_details[".buttonsAdded"] = false;

$tdatawork_check_target_details[".addPageEvents"] = false;

// use timepicker for search panel
$tdatawork_check_target_details[".isUseTimeForSearch"] = false;





$tdatawork_check_target_details[".allSearchFields"] = array();
$tdatawork_check_target_details[".filterFields"] = array();
$tdatawork_check_target_details[".requiredSearchFields"] = array();

$tdatawork_check_target_details[".allSearchFields"][] = "id";
	$tdatawork_check_target_details[".allSearchFields"][] = "work_check_target_id";
	$tdatawork_check_target_details[".allSearchFields"][] = "id_who_check_master";
	$tdatawork_check_target_details[".allSearchFields"][] = "id_who_check";
	$tdatawork_check_target_details[".allSearchFields"][] = "updated_by";
	$tdatawork_check_target_details[".allSearchFields"][] = "updated_at";
	$tdatawork_check_target_details[".allSearchFields"][] = "created_by";
	$tdatawork_check_target_details[".allSearchFields"][] = "created_at";
	$tdatawork_check_target_details[".allSearchFields"][] = "check_by";
	$tdatawork_check_target_details[".allSearchFields"][] = "check_at";
	

$tdatawork_check_target_details[".googleLikeFields"] = array();
$tdatawork_check_target_details[".googleLikeFields"][] = "id";
$tdatawork_check_target_details[".googleLikeFields"][] = "work_check_target_id";
$tdatawork_check_target_details[".googleLikeFields"][] = "id_who_check_master";
$tdatawork_check_target_details[".googleLikeFields"][] = "id_who_check";
$tdatawork_check_target_details[".googleLikeFields"][] = "updated_by";
$tdatawork_check_target_details[".googleLikeFields"][] = "updated_at";
$tdatawork_check_target_details[".googleLikeFields"][] = "created_by";
$tdatawork_check_target_details[".googleLikeFields"][] = "created_at";
$tdatawork_check_target_details[".googleLikeFields"][] = "check_by";
$tdatawork_check_target_details[".googleLikeFields"][] = "check_at";


$tdatawork_check_target_details[".advSearchFields"] = array();
$tdatawork_check_target_details[".advSearchFields"][] = "id";
$tdatawork_check_target_details[".advSearchFields"][] = "work_check_target_id";
$tdatawork_check_target_details[".advSearchFields"][] = "id_who_check_master";
$tdatawork_check_target_details[".advSearchFields"][] = "id_who_check";
$tdatawork_check_target_details[".advSearchFields"][] = "updated_by";
$tdatawork_check_target_details[".advSearchFields"][] = "updated_at";
$tdatawork_check_target_details[".advSearchFields"][] = "created_by";
$tdatawork_check_target_details[".advSearchFields"][] = "created_at";
$tdatawork_check_target_details[".advSearchFields"][] = "check_by";
$tdatawork_check_target_details[".advSearchFields"][] = "check_at";

$tdatawork_check_target_details[".tableType"] = "list";

$tdatawork_check_target_details[".printerPageOrientation"] = 0;
$tdatawork_check_target_details[".nPrinterPageScale"] = 100;

$tdatawork_check_target_details[".nPrinterSplitRecords"] = 40;

$tdatawork_check_target_details[".nPrinterPDFSplitRecords"] = 40;



$tdatawork_check_target_details[".geocodingEnabled"] = false;





$tdatawork_check_target_details[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatawork_check_target_details[".pageSize"] = 20;

$tdatawork_check_target_details[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatawork_check_target_details[".strOrderBy"] = $tstrOrderBy;

$tdatawork_check_target_details[".orderindexes"] = array();

$tdatawork_check_target_details[".sqlHead"] = "SELECT `id`,  	`work_check_target_id`,  	`id_who_check_master`,  	`id_who_check`,  	`updated_by`,  	`updated_at`,  	`created_by`,  	`created_at`,  	`check_by`,  	`check_at`";
$tdatawork_check_target_details[".sqlFrom"] = "FROM `work_check_target_details`";
$tdatawork_check_target_details[".sqlWhereExpr"] = "";
$tdatawork_check_target_details[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatawork_check_target_details[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatawork_check_target_details[".arrGroupsPerPage"] = $arrGPP;

$tdatawork_check_target_details[".highlightSearchResults"] = true;

$tableKeyswork_check_target_details = array();
$tableKeyswork_check_target_details[] = "id";
$tdatawork_check_target_details[".Keys"] = $tableKeyswork_check_target_details;

$tdatawork_check_target_details[".listFields"] = array();
$tdatawork_check_target_details[".listFields"][] = "id";
$tdatawork_check_target_details[".listFields"][] = "work_check_target_id";
$tdatawork_check_target_details[".listFields"][] = "id_who_check_master";
$tdatawork_check_target_details[".listFields"][] = "id_who_check";
$tdatawork_check_target_details[".listFields"][] = "updated_by";
$tdatawork_check_target_details[".listFields"][] = "updated_at";
$tdatawork_check_target_details[".listFields"][] = "created_by";
$tdatawork_check_target_details[".listFields"][] = "created_at";
$tdatawork_check_target_details[".listFields"][] = "check_by";
$tdatawork_check_target_details[".listFields"][] = "check_at";

$tdatawork_check_target_details[".hideMobileList"] = array();


$tdatawork_check_target_details[".viewFields"] = array();

$tdatawork_check_target_details[".addFields"] = array();

$tdatawork_check_target_details[".masterListFields"] = array();
$tdatawork_check_target_details[".masterListFields"][] = "id";
$tdatawork_check_target_details[".masterListFields"][] = "work_check_target_id";
$tdatawork_check_target_details[".masterListFields"][] = "id_who_check_master";
$tdatawork_check_target_details[".masterListFields"][] = "id_who_check";
$tdatawork_check_target_details[".masterListFields"][] = "updated_by";
$tdatawork_check_target_details[".masterListFields"][] = "updated_at";
$tdatawork_check_target_details[".masterListFields"][] = "created_by";
$tdatawork_check_target_details[".masterListFields"][] = "created_at";
$tdatawork_check_target_details[".masterListFields"][] = "check_by";
$tdatawork_check_target_details[".masterListFields"][] = "check_at";

$tdatawork_check_target_details[".inlineAddFields"] = array();
$tdatawork_check_target_details[".inlineAddFields"][] = "work_check_target_id";
$tdatawork_check_target_details[".inlineAddFields"][] = "id_who_check_master";
$tdatawork_check_target_details[".inlineAddFields"][] = "id_who_check";
$tdatawork_check_target_details[".inlineAddFields"][] = "updated_by";
$tdatawork_check_target_details[".inlineAddFields"][] = "updated_at";
$tdatawork_check_target_details[".inlineAddFields"][] = "created_by";
$tdatawork_check_target_details[".inlineAddFields"][] = "created_at";
$tdatawork_check_target_details[".inlineAddFields"][] = "check_by";
$tdatawork_check_target_details[".inlineAddFields"][] = "check_at";

$tdatawork_check_target_details[".editFields"] = array();

$tdatawork_check_target_details[".inlineEditFields"] = array();
$tdatawork_check_target_details[".inlineEditFields"][] = "work_check_target_id";
$tdatawork_check_target_details[".inlineEditFields"][] = "id_who_check_master";
$tdatawork_check_target_details[".inlineEditFields"][] = "id_who_check";
$tdatawork_check_target_details[".inlineEditFields"][] = "updated_by";
$tdatawork_check_target_details[".inlineEditFields"][] = "updated_at";
$tdatawork_check_target_details[".inlineEditFields"][] = "created_by";
$tdatawork_check_target_details[".inlineEditFields"][] = "created_at";
$tdatawork_check_target_details[".inlineEditFields"][] = "check_by";
$tdatawork_check_target_details[".inlineEditFields"][] = "check_at";

$tdatawork_check_target_details[".updateSelectedFields"] = array();


$tdatawork_check_target_details[".exportFields"] = array();
$tdatawork_check_target_details[".exportFields"][] = "id";
$tdatawork_check_target_details[".exportFields"][] = "work_check_target_id";
$tdatawork_check_target_details[".exportFields"][] = "id_who_check_master";
$tdatawork_check_target_details[".exportFields"][] = "id_who_check";
$tdatawork_check_target_details[".exportFields"][] = "updated_by";
$tdatawork_check_target_details[".exportFields"][] = "updated_at";
$tdatawork_check_target_details[".exportFields"][] = "created_by";
$tdatawork_check_target_details[".exportFields"][] = "created_at";
$tdatawork_check_target_details[".exportFields"][] = "check_by";
$tdatawork_check_target_details[".exportFields"][] = "check_at";

$tdatawork_check_target_details[".importFields"] = array();
$tdatawork_check_target_details[".importFields"][] = "id";
$tdatawork_check_target_details[".importFields"][] = "work_check_target_id";
$tdatawork_check_target_details[".importFields"][] = "id_who_check_master";
$tdatawork_check_target_details[".importFields"][] = "id_who_check";
$tdatawork_check_target_details[".importFields"][] = "updated_by";
$tdatawork_check_target_details[".importFields"][] = "updated_at";
$tdatawork_check_target_details[".importFields"][] = "created_by";
$tdatawork_check_target_details[".importFields"][] = "created_at";
$tdatawork_check_target_details[".importFields"][] = "check_by";
$tdatawork_check_target_details[".importFields"][] = "check_at";

$tdatawork_check_target_details[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "work_check_target_details";
	$fdata["Label"] = GetFieldLabel("work_check_target_details","id");
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




	$tdatawork_check_target_details["id"] = $fdata;
//	work_check_target_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "work_check_target_id";
	$fdata["GoodName"] = "work_check_target_id";
	$fdata["ownerTable"] = "work_check_target_details";
	$fdata["Label"] = GetFieldLabel("work_check_target_details","work_check_target_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
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




	$tdatawork_check_target_details["work_check_target_id"] = $fdata;
//	id_who_check_master
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "id_who_check_master";
	$fdata["GoodName"] = "id_who_check_master";
	$fdata["ownerTable"] = "work_check_target_details";
	$fdata["Label"] = GetFieldLabel("work_check_target_details","id_who_check_master");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "id_who_check_master";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`id_who_check_master`";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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




	$tdatawork_check_target_details["id_who_check_master"] = $fdata;
//	id_who_check
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "id_who_check";
	$fdata["GoodName"] = "id_who_check";
	$fdata["ownerTable"] = "work_check_target_details";
	$fdata["Label"] = GetFieldLabel("work_check_target_details","id_who_check");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "id_who_check";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`id_who_check`";

	
	
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




	$tdatawork_check_target_details["id_who_check"] = $fdata;
//	updated_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "updated_by";
	$fdata["GoodName"] = "updated_by";
	$fdata["ownerTable"] = "work_check_target_details";
	$fdata["Label"] = GetFieldLabel("work_check_target_details","updated_by");
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




	$tdatawork_check_target_details["updated_by"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "work_check_target_details";
	$fdata["Label"] = GetFieldLabel("work_check_target_details","updated_at");
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




	$tdatawork_check_target_details["updated_at"] = $fdata;
//	created_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "created_by";
	$fdata["GoodName"] = "created_by";
	$fdata["ownerTable"] = "work_check_target_details";
	$fdata["Label"] = GetFieldLabel("work_check_target_details","created_by");
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




	$tdatawork_check_target_details["created_by"] = $fdata;
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "work_check_target_details";
	$fdata["Label"] = GetFieldLabel("work_check_target_details","created_at");
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




	$tdatawork_check_target_details["created_at"] = $fdata;
//	check_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "check_by";
	$fdata["GoodName"] = "check_by";
	$fdata["ownerTable"] = "work_check_target_details";
	$fdata["Label"] = GetFieldLabel("work_check_target_details","check_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "check_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`check_by`";

	
	
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




	$tdatawork_check_target_details["check_by"] = $fdata;
//	check_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "check_at";
	$fdata["GoodName"] = "check_at";
	$fdata["ownerTable"] = "work_check_target_details";
	$fdata["Label"] = GetFieldLabel("work_check_target_details","check_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "check_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`check_at`";

	
	
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




	$tdatawork_check_target_details["check_at"] = $fdata;


$tables_data["work_check_target_details"]=&$tdatawork_check_target_details;
$field_labels["work_check_target_details"] = &$fieldLabelswork_check_target_details;
$fieldToolTips["work_check_target_details"] = &$fieldToolTipswork_check_target_details;
$placeHolders["work_check_target_details"] = &$placeHolderswork_check_target_details;
$page_titles["work_check_target_details"] = &$pageTitleswork_check_target_details;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["work_check_target_details"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["work_check_target_details"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_work_check_target_details()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  	`work_check_target_id`,  	`id_who_check_master`,  	`id_who_check`,  	`updated_by`,  	`updated_at`,  	`created_by`,  	`created_at`,  	`check_by`,  	`check_at`";
$proto0["m_strFrom"] = "FROM `work_check_target_details`";
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
	"m_strTable" => "work_check_target_details",
	"m_srcTableName" => "work_check_target_details"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "work_check_target_details";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "work_check_target_id",
	"m_strTable" => "work_check_target_details",
	"m_srcTableName" => "work_check_target_details"
));

$proto8["m_sql"] = "`work_check_target_id`";
$proto8["m_srcTableName"] = "work_check_target_details";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "id_who_check_master",
	"m_strTable" => "work_check_target_details",
	"m_srcTableName" => "work_check_target_details"
));

$proto10["m_sql"] = "`id_who_check_master`";
$proto10["m_srcTableName"] = "work_check_target_details";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "id_who_check",
	"m_strTable" => "work_check_target_details",
	"m_srcTableName" => "work_check_target_details"
));

$proto12["m_sql"] = "`id_who_check`";
$proto12["m_srcTableName"] = "work_check_target_details";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by",
	"m_strTable" => "work_check_target_details",
	"m_srcTableName" => "work_check_target_details"
));

$proto14["m_sql"] = "`updated_by`";
$proto14["m_srcTableName"] = "work_check_target_details";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "work_check_target_details",
	"m_srcTableName" => "work_check_target_details"
));

$proto16["m_sql"] = "`updated_at`";
$proto16["m_srcTableName"] = "work_check_target_details";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "created_by",
	"m_strTable" => "work_check_target_details",
	"m_srcTableName" => "work_check_target_details"
));

$proto18["m_sql"] = "`created_by`";
$proto18["m_srcTableName"] = "work_check_target_details";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "work_check_target_details",
	"m_srcTableName" => "work_check_target_details"
));

$proto20["m_sql"] = "`created_at`";
$proto20["m_srcTableName"] = "work_check_target_details";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "check_by",
	"m_strTable" => "work_check_target_details",
	"m_srcTableName" => "work_check_target_details"
));

$proto22["m_sql"] = "`check_by`";
$proto22["m_srcTableName"] = "work_check_target_details";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "check_at",
	"m_strTable" => "work_check_target_details",
	"m_srcTableName" => "work_check_target_details"
));

$proto24["m_sql"] = "`check_at`";
$proto24["m_srcTableName"] = "work_check_target_details";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "work_check_target_details";
$proto27["m_srcTableName"] = "work_check_target_details";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "id";
$proto27["m_columns"][] = "work_check_target_id";
$proto27["m_columns"][] = "id_who_check_master";
$proto27["m_columns"][] = "id_who_check";
$proto27["m_columns"][] = "updated_by";
$proto27["m_columns"][] = "updated_at";
$proto27["m_columns"][] = "created_by";
$proto27["m_columns"][] = "created_at";
$proto27["m_columns"][] = "check_by";
$proto27["m_columns"][] = "check_at";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "`work_check_target_details`";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "work_check_target_details";
$proto28=array();
$proto28["m_sql"] = "";
$proto28["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto28["m_column"]=$obj;
$proto28["m_contained"] = array();
$proto28["m_strCase"] = "";
$proto28["m_havingmode"] = false;
$proto28["m_inBrackets"] = false;
$proto28["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto28);

$proto26["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto26);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="work_check_target_details";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_work_check_target_details = createSqlQuery_work_check_target_details();


	
		;

										

$tdatawork_check_target_details[".sqlquery"] = $queryData_work_check_target_details;

$tableEvents["work_check_target_details"] = new eventsBase;
$tdatawork_check_target_details[".hasEvents"] = false;

?>