<?php
require_once(getabspath("classes/cipherer.php"));




$tdataanalysisMail_send_logs_bcc = array();
	$tdataanalysisMail_send_logs_bcc[".truncateText"] = true;
	$tdataanalysisMail_send_logs_bcc[".NumberOfChars"] = 80;
	$tdataanalysisMail_send_logs_bcc[".ShortName"] = "analysisMail_send_logs_bcc";
	$tdataanalysisMail_send_logs_bcc[".OwnerID"] = "";
	$tdataanalysisMail_send_logs_bcc[".OriginalTable"] = "analysisMail_send_logs_bcc";

//	field labels
$fieldLabelsanalysisMail_send_logs_bcc = array();
$fieldToolTipsanalysisMail_send_logs_bcc = array();
$pageTitlesanalysisMail_send_logs_bcc = array();
$placeHoldersanalysisMail_send_logs_bcc = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsanalysisMail_send_logs_bcc["Japanese"] = array();
	$fieldToolTipsanalysisMail_send_logs_bcc["Japanese"] = array();
	$placeHoldersanalysisMail_send_logs_bcc["Japanese"] = array();
	$pageTitlesanalysisMail_send_logs_bcc["Japanese"] = array();
	$fieldLabelsanalysisMail_send_logs_bcc["Japanese"]["id"] = "Id";
	$fieldToolTipsanalysisMail_send_logs_bcc["Japanese"]["id"] = "";
	$placeHoldersanalysisMail_send_logs_bcc["Japanese"]["id"] = "";
	$fieldLabelsanalysisMail_send_logs_bcc["Japanese"]["send_log_id"] = "メールログId";
	$fieldToolTipsanalysisMail_send_logs_bcc["Japanese"]["send_log_id"] = "";
	$placeHoldersanalysisMail_send_logs_bcc["Japanese"]["send_log_id"] = "";
	$fieldLabelsanalysisMail_send_logs_bcc["Japanese"]["mailaddress"] = "メアド";
	$fieldToolTipsanalysisMail_send_logs_bcc["Japanese"]["mailaddress"] = "";
	$placeHoldersanalysisMail_send_logs_bcc["Japanese"]["mailaddress"] = "";
	$fieldLabelsanalysisMail_send_logs_bcc["Japanese"]["updated_by"] = "更新者";
	$fieldToolTipsanalysisMail_send_logs_bcc["Japanese"]["updated_by"] = "";
	$placeHoldersanalysisMail_send_logs_bcc["Japanese"]["updated_by"] = "";
	$fieldLabelsanalysisMail_send_logs_bcc["Japanese"]["updated_at"] = "更新日";
	$fieldToolTipsanalysisMail_send_logs_bcc["Japanese"]["updated_at"] = "";
	$placeHoldersanalysisMail_send_logs_bcc["Japanese"]["updated_at"] = "";
	$fieldLabelsanalysisMail_send_logs_bcc["Japanese"]["created_by"] = "作成者";
	$fieldToolTipsanalysisMail_send_logs_bcc["Japanese"]["created_by"] = "";
	$placeHoldersanalysisMail_send_logs_bcc["Japanese"]["created_by"] = "";
	$fieldLabelsanalysisMail_send_logs_bcc["Japanese"]["created_at"] = "作成日";
	$fieldToolTipsanalysisMail_send_logs_bcc["Japanese"]["created_at"] = "";
	$placeHoldersanalysisMail_send_logs_bcc["Japanese"]["created_at"] = "";
	if (count($fieldToolTipsanalysisMail_send_logs_bcc["Japanese"]))
		$tdataanalysisMail_send_logs_bcc[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsanalysisMail_send_logs_bcc[""] = array();
	$fieldToolTipsanalysisMail_send_logs_bcc[""] = array();
	$placeHoldersanalysisMail_send_logs_bcc[""] = array();
	$pageTitlesanalysisMail_send_logs_bcc[""] = array();
	$fieldLabelsanalysisMail_send_logs_bcc[""]["id"] = "Id";
	$fieldToolTipsanalysisMail_send_logs_bcc[""]["id"] = "";
	$placeHoldersanalysisMail_send_logs_bcc[""]["id"] = "";
	$fieldLabelsanalysisMail_send_logs_bcc[""]["send_log_id"] = "Send Log Id";
	$fieldToolTipsanalysisMail_send_logs_bcc[""]["send_log_id"] = "";
	$placeHoldersanalysisMail_send_logs_bcc[""]["send_log_id"] = "";
	$fieldLabelsanalysisMail_send_logs_bcc[""]["mailaddress"] = "Mailaddress";
	$fieldToolTipsanalysisMail_send_logs_bcc[""]["mailaddress"] = "";
	$placeHoldersanalysisMail_send_logs_bcc[""]["mailaddress"] = "";
	$fieldLabelsanalysisMail_send_logs_bcc[""]["updated_by"] = "Updated By";
	$fieldToolTipsanalysisMail_send_logs_bcc[""]["updated_by"] = "";
	$placeHoldersanalysisMail_send_logs_bcc[""]["updated_by"] = "";
	$fieldLabelsanalysisMail_send_logs_bcc[""]["updated_at"] = "Updated At";
	$fieldToolTipsanalysisMail_send_logs_bcc[""]["updated_at"] = "";
	$placeHoldersanalysisMail_send_logs_bcc[""]["updated_at"] = "";
	$fieldLabelsanalysisMail_send_logs_bcc[""]["created_by"] = "Created By";
	$fieldToolTipsanalysisMail_send_logs_bcc[""]["created_by"] = "";
	$placeHoldersanalysisMail_send_logs_bcc[""]["created_by"] = "";
	$fieldLabelsanalysisMail_send_logs_bcc[""]["created_at"] = "Created At";
	$fieldToolTipsanalysisMail_send_logs_bcc[""]["created_at"] = "";
	$placeHoldersanalysisMail_send_logs_bcc[""]["created_at"] = "";
	if (count($fieldToolTipsanalysisMail_send_logs_bcc[""]))
		$tdataanalysisMail_send_logs_bcc[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsanalysisMail_send_logs_bcc["English"] = array();
	$fieldToolTipsanalysisMail_send_logs_bcc["English"] = array();
	$placeHoldersanalysisMail_send_logs_bcc["English"] = array();
	$pageTitlesanalysisMail_send_logs_bcc["English"] = array();
	$fieldLabelsanalysisMail_send_logs_bcc["English"]["id"] = "Id";
	$fieldToolTipsanalysisMail_send_logs_bcc["English"]["id"] = "";
	$placeHoldersanalysisMail_send_logs_bcc["English"]["id"] = "";
	$fieldLabelsanalysisMail_send_logs_bcc["English"]["send_log_id"] = "Send Log Id";
	$fieldToolTipsanalysisMail_send_logs_bcc["English"]["send_log_id"] = "";
	$placeHoldersanalysisMail_send_logs_bcc["English"]["send_log_id"] = "";
	$fieldLabelsanalysisMail_send_logs_bcc["English"]["mailaddress"] = "Mailaddress";
	$fieldToolTipsanalysisMail_send_logs_bcc["English"]["mailaddress"] = "";
	$placeHoldersanalysisMail_send_logs_bcc["English"]["mailaddress"] = "";
	$fieldLabelsanalysisMail_send_logs_bcc["English"]["updated_by"] = "Updated By";
	$fieldToolTipsanalysisMail_send_logs_bcc["English"]["updated_by"] = "";
	$placeHoldersanalysisMail_send_logs_bcc["English"]["updated_by"] = "";
	$fieldLabelsanalysisMail_send_logs_bcc["English"]["updated_at"] = "Updated At";
	$fieldToolTipsanalysisMail_send_logs_bcc["English"]["updated_at"] = "";
	$placeHoldersanalysisMail_send_logs_bcc["English"]["updated_at"] = "";
	$fieldLabelsanalysisMail_send_logs_bcc["English"]["created_by"] = "Created By";
	$fieldToolTipsanalysisMail_send_logs_bcc["English"]["created_by"] = "";
	$placeHoldersanalysisMail_send_logs_bcc["English"]["created_by"] = "";
	$fieldLabelsanalysisMail_send_logs_bcc["English"]["created_at"] = "Created At";
	$fieldToolTipsanalysisMail_send_logs_bcc["English"]["created_at"] = "";
	$placeHoldersanalysisMail_send_logs_bcc["English"]["created_at"] = "";
	if (count($fieldToolTipsanalysisMail_send_logs_bcc["English"]))
		$tdataanalysisMail_send_logs_bcc[".isUseToolTips"] = true;
}


	$tdataanalysisMail_send_logs_bcc[".NCSearch"] = true;



$tdataanalysisMail_send_logs_bcc[".shortTableName"] = "analysisMail_send_logs_bcc";
$tdataanalysisMail_send_logs_bcc[".nSecOptions"] = 0;
$tdataanalysisMail_send_logs_bcc[".recsPerRowPrint"] = 1;
$tdataanalysisMail_send_logs_bcc[".mainTableOwnerID"] = "";
$tdataanalysisMail_send_logs_bcc[".moveNext"] = 1;
$tdataanalysisMail_send_logs_bcc[".entityType"] = 0;

$tdataanalysisMail_send_logs_bcc[".strOriginalTableName"] = "analysisMail_send_logs_bcc";

	



$tdataanalysisMail_send_logs_bcc[".showAddInPopup"] = false;

$tdataanalysisMail_send_logs_bcc[".showEditInPopup"] = false;

$tdataanalysisMail_send_logs_bcc[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataanalysisMail_send_logs_bcc[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataanalysisMail_send_logs_bcc[".fieldsForRegister"] = array();

$tdataanalysisMail_send_logs_bcc[".listAjax"] = false;

	$tdataanalysisMail_send_logs_bcc[".audit"] = true;

	$tdataanalysisMail_send_logs_bcc[".locking"] = false;



$tdataanalysisMail_send_logs_bcc[".list"] = true;



$tdataanalysisMail_send_logs_bcc[".reorderRecordsByHeader"] = true;








$tdataanalysisMail_send_logs_bcc[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataanalysisMail_send_logs_bcc[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataanalysisMail_send_logs_bcc[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataanalysisMail_send_logs_bcc[".searchSaving"] = false;
//

$tdataanalysisMail_send_logs_bcc[".showSearchPanel"] = true;
		$tdataanalysisMail_send_logs_bcc[".flexibleSearch"] = true;

$tdataanalysisMail_send_logs_bcc[".isUseAjaxSuggest"] = true;

$tdataanalysisMail_send_logs_bcc[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																								

$tdataanalysisMail_send_logs_bcc[".ajaxCodeSnippetAdded"] = false;

$tdataanalysisMail_send_logs_bcc[".buttonsAdded"] = false;

$tdataanalysisMail_send_logs_bcc[".addPageEvents"] = false;

// use timepicker for search panel
$tdataanalysisMail_send_logs_bcc[".isUseTimeForSearch"] = false;



$tdataanalysisMail_send_logs_bcc[".badgeColor"] = "cd853f";


$tdataanalysisMail_send_logs_bcc[".allSearchFields"] = array();
$tdataanalysisMail_send_logs_bcc[".filterFields"] = array();
$tdataanalysisMail_send_logs_bcc[".requiredSearchFields"] = array();

$tdataanalysisMail_send_logs_bcc[".allSearchFields"][] = "id";
	$tdataanalysisMail_send_logs_bcc[".allSearchFields"][] = "send_log_id";
	$tdataanalysisMail_send_logs_bcc[".allSearchFields"][] = "mailaddress";
	$tdataanalysisMail_send_logs_bcc[".allSearchFields"][] = "updated_by";
	$tdataanalysisMail_send_logs_bcc[".allSearchFields"][] = "updated_at";
	$tdataanalysisMail_send_logs_bcc[".allSearchFields"][] = "created_by";
	$tdataanalysisMail_send_logs_bcc[".allSearchFields"][] = "created_at";
	

$tdataanalysisMail_send_logs_bcc[".googleLikeFields"] = array();
$tdataanalysisMail_send_logs_bcc[".googleLikeFields"][] = "id";
$tdataanalysisMail_send_logs_bcc[".googleLikeFields"][] = "send_log_id";
$tdataanalysisMail_send_logs_bcc[".googleLikeFields"][] = "mailaddress";
$tdataanalysisMail_send_logs_bcc[".googleLikeFields"][] = "updated_by";
$tdataanalysisMail_send_logs_bcc[".googleLikeFields"][] = "updated_at";
$tdataanalysisMail_send_logs_bcc[".googleLikeFields"][] = "created_by";
$tdataanalysisMail_send_logs_bcc[".googleLikeFields"][] = "created_at";


$tdataanalysisMail_send_logs_bcc[".advSearchFields"] = array();
$tdataanalysisMail_send_logs_bcc[".advSearchFields"][] = "id";
$tdataanalysisMail_send_logs_bcc[".advSearchFields"][] = "send_log_id";
$tdataanalysisMail_send_logs_bcc[".advSearchFields"][] = "mailaddress";
$tdataanalysisMail_send_logs_bcc[".advSearchFields"][] = "updated_by";
$tdataanalysisMail_send_logs_bcc[".advSearchFields"][] = "updated_at";
$tdataanalysisMail_send_logs_bcc[".advSearchFields"][] = "created_by";
$tdataanalysisMail_send_logs_bcc[".advSearchFields"][] = "created_at";

$tdataanalysisMail_send_logs_bcc[".tableType"] = "list";

$tdataanalysisMail_send_logs_bcc[".printerPageOrientation"] = 0;
$tdataanalysisMail_send_logs_bcc[".nPrinterPageScale"] = 100;

$tdataanalysisMail_send_logs_bcc[".nPrinterSplitRecords"] = 40;

$tdataanalysisMail_send_logs_bcc[".nPrinterPDFSplitRecords"] = 40;



$tdataanalysisMail_send_logs_bcc[".geocodingEnabled"] = false;





$tdataanalysisMail_send_logs_bcc[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataanalysisMail_send_logs_bcc[".pageSize"] = 20;

$tdataanalysisMail_send_logs_bcc[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `id` DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataanalysisMail_send_logs_bcc[".strOrderBy"] = $tstrOrderBy;

$tdataanalysisMail_send_logs_bcc[".orderindexes"] = array();
$tdataanalysisMail_send_logs_bcc[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "`id`");

$tdataanalysisMail_send_logs_bcc[".sqlHead"] = "SELECT `id`,  `send_log_id`,  `mailaddress`,  `updated_by`,  `updated_at`,  `created_by`,  `created_at`";
$tdataanalysisMail_send_logs_bcc[".sqlFrom"] = "FROM `analysisMail_send_logs_bcc`";
$tdataanalysisMail_send_logs_bcc[".sqlWhereExpr"] = "";
$tdataanalysisMail_send_logs_bcc[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataanalysisMail_send_logs_bcc[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataanalysisMail_send_logs_bcc[".arrGroupsPerPage"] = $arrGPP;

$tdataanalysisMail_send_logs_bcc[".highlightSearchResults"] = true;

$tableKeysanalysisMail_send_logs_bcc = array();
$tableKeysanalysisMail_send_logs_bcc[] = "id";
$tdataanalysisMail_send_logs_bcc[".Keys"] = $tableKeysanalysisMail_send_logs_bcc;

$tdataanalysisMail_send_logs_bcc[".listFields"] = array();
$tdataanalysisMail_send_logs_bcc[".listFields"][] = "id";
$tdataanalysisMail_send_logs_bcc[".listFields"][] = "send_log_id";
$tdataanalysisMail_send_logs_bcc[".listFields"][] = "mailaddress";
$tdataanalysisMail_send_logs_bcc[".listFields"][] = "updated_by";
$tdataanalysisMail_send_logs_bcc[".listFields"][] = "updated_at";
$tdataanalysisMail_send_logs_bcc[".listFields"][] = "created_by";
$tdataanalysisMail_send_logs_bcc[".listFields"][] = "created_at";

$tdataanalysisMail_send_logs_bcc[".hideMobileList"] = array();


$tdataanalysisMail_send_logs_bcc[".viewFields"] = array();

$tdataanalysisMail_send_logs_bcc[".addFields"] = array();

$tdataanalysisMail_send_logs_bcc[".masterListFields"] = array();
$tdataanalysisMail_send_logs_bcc[".masterListFields"][] = "id";
$tdataanalysisMail_send_logs_bcc[".masterListFields"][] = "send_log_id";
$tdataanalysisMail_send_logs_bcc[".masterListFields"][] = "mailaddress";
$tdataanalysisMail_send_logs_bcc[".masterListFields"][] = "updated_by";
$tdataanalysisMail_send_logs_bcc[".masterListFields"][] = "updated_at";
$tdataanalysisMail_send_logs_bcc[".masterListFields"][] = "created_by";
$tdataanalysisMail_send_logs_bcc[".masterListFields"][] = "created_at";

$tdataanalysisMail_send_logs_bcc[".inlineAddFields"] = array();

$tdataanalysisMail_send_logs_bcc[".editFields"] = array();

$tdataanalysisMail_send_logs_bcc[".inlineEditFields"] = array();

$tdataanalysisMail_send_logs_bcc[".updateSelectedFields"] = array();


$tdataanalysisMail_send_logs_bcc[".exportFields"] = array();

$tdataanalysisMail_send_logs_bcc[".importFields"] = array();

$tdataanalysisMail_send_logs_bcc[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "analysisMail_send_logs_bcc";
	$fdata["Label"] = GetFieldLabel("analysisMail_send_logs_bcc","id");
	$fdata["FieldType"] = 20;

	
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




	$tdataanalysisMail_send_logs_bcc["id"] = $fdata;
//	send_log_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "send_log_id";
	$fdata["GoodName"] = "send_log_id";
	$fdata["ownerTable"] = "analysisMail_send_logs_bcc";
	$fdata["Label"] = GetFieldLabel("analysisMail_send_logs_bcc","send_log_id");
	$fdata["FieldType"] = 20;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "send_log_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`send_log_id`";

	
	
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




	$tdataanalysisMail_send_logs_bcc["send_log_id"] = $fdata;
//	mailaddress
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "mailaddress";
	$fdata["GoodName"] = "mailaddress";
	$fdata["ownerTable"] = "analysisMail_send_logs_bcc";
	$fdata["Label"] = GetFieldLabel("analysisMail_send_logs_bcc","mailaddress");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "mailaddress";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mailaddress`";

	
	
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




	$tdataanalysisMail_send_logs_bcc["mailaddress"] = $fdata;
//	updated_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "updated_by";
	$fdata["GoodName"] = "updated_by";
	$fdata["ownerTable"] = "analysisMail_send_logs_bcc";
	$fdata["Label"] = GetFieldLabel("analysisMail_send_logs_bcc","updated_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdataanalysisMail_send_logs_bcc["updated_by"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "analysisMail_send_logs_bcc";
	$fdata["Label"] = GetFieldLabel("analysisMail_send_logs_bcc","updated_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "updated_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`updated_at`";

	
	
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




	$tdataanalysisMail_send_logs_bcc["updated_at"] = $fdata;
//	created_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "created_by";
	$fdata["GoodName"] = "created_by";
	$fdata["ownerTable"] = "analysisMail_send_logs_bcc";
	$fdata["Label"] = GetFieldLabel("analysisMail_send_logs_bcc","created_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdataanalysisMail_send_logs_bcc["created_by"] = $fdata;
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "analysisMail_send_logs_bcc";
	$fdata["Label"] = GetFieldLabel("analysisMail_send_logs_bcc","created_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "created_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`created_at`";

	
	
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




	$tdataanalysisMail_send_logs_bcc["created_at"] = $fdata;


$tables_data["analysisMail_send_logs_bcc"]=&$tdataanalysisMail_send_logs_bcc;
$field_labels["analysisMail_send_logs_bcc"] = &$fieldLabelsanalysisMail_send_logs_bcc;
$fieldToolTips["analysisMail_send_logs_bcc"] = &$fieldToolTipsanalysisMail_send_logs_bcc;
$placeHolders["analysisMail_send_logs_bcc"] = &$placeHoldersanalysisMail_send_logs_bcc;
$page_titles["analysisMail_send_logs_bcc"] = &$pageTitlesanalysisMail_send_logs_bcc;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["analysisMail_send_logs_bcc"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["analysisMail_send_logs_bcc"] = array();


	
				$strOriginalDetailsTable="analysisMail_send_logs";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="analysisMail_send_logs";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "analysisMail_send_logs";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispMasterInfo"] = array();
				$masterParams["dispMasterInfo"][PAGE_LIST] = true;
			
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 1;
	$masterParams["proceedLink"]= 1;

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["analysisMail_send_logs_bcc"][0] = $masterParams;
				$masterTablesData["analysisMail_send_logs_bcc"][0]["masterKeys"] = array();
	$masterTablesData["analysisMail_send_logs_bcc"][0]["masterKeys"][]="send_log_id";
				$masterTablesData["analysisMail_send_logs_bcc"][0]["detailKeys"] = array();
	$masterTablesData["analysisMail_send_logs_bcc"][0]["detailKeys"][]="send_log_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_analysisMail_send_logs_bcc()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  `send_log_id`,  `mailaddress`,  `updated_by`,  `updated_at`,  `created_by`,  `created_at`";
$proto0["m_strFrom"] = "FROM `analysisMail_send_logs_bcc`";
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
	"m_strTable" => "analysisMail_send_logs_bcc",
	"m_srcTableName" => "analysisMail_send_logs_bcc"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "analysisMail_send_logs_bcc";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "send_log_id",
	"m_strTable" => "analysisMail_send_logs_bcc",
	"m_srcTableName" => "analysisMail_send_logs_bcc"
));

$proto8["m_sql"] = "`send_log_id`";
$proto8["m_srcTableName"] = "analysisMail_send_logs_bcc";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "mailaddress",
	"m_strTable" => "analysisMail_send_logs_bcc",
	"m_srcTableName" => "analysisMail_send_logs_bcc"
));

$proto10["m_sql"] = "`mailaddress`";
$proto10["m_srcTableName"] = "analysisMail_send_logs_bcc";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by",
	"m_strTable" => "analysisMail_send_logs_bcc",
	"m_srcTableName" => "analysisMail_send_logs_bcc"
));

$proto12["m_sql"] = "`updated_by`";
$proto12["m_srcTableName"] = "analysisMail_send_logs_bcc";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "analysisMail_send_logs_bcc",
	"m_srcTableName" => "analysisMail_send_logs_bcc"
));

$proto14["m_sql"] = "`updated_at`";
$proto14["m_srcTableName"] = "analysisMail_send_logs_bcc";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "created_by",
	"m_strTable" => "analysisMail_send_logs_bcc",
	"m_srcTableName" => "analysisMail_send_logs_bcc"
));

$proto16["m_sql"] = "`created_by`";
$proto16["m_srcTableName"] = "analysisMail_send_logs_bcc";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "analysisMail_send_logs_bcc",
	"m_srcTableName" => "analysisMail_send_logs_bcc"
));

$proto18["m_sql"] = "`created_at`";
$proto18["m_srcTableName"] = "analysisMail_send_logs_bcc";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "analysisMail_send_logs_bcc";
$proto21["m_srcTableName"] = "analysisMail_send_logs_bcc";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "id";
$proto21["m_columns"][] = "send_log_id";
$proto21["m_columns"][] = "mailaddress";
$proto21["m_columns"][] = "updated_by";
$proto21["m_columns"][] = "updated_at";
$proto21["m_columns"][] = "created_by";
$proto21["m_columns"][] = "created_at";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "`analysisMail_send_logs_bcc`";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "analysisMail_send_logs_bcc";
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
	"m_strName" => "id",
	"m_strTable" => "analysisMail_send_logs_bcc",
	"m_srcTableName" => "analysisMail_send_logs_bcc"
));

$proto24["m_column"]=$obj;
$proto24["m_bAsc"] = 0;
$proto24["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto24);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="analysisMail_send_logs_bcc";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_analysisMail_send_logs_bcc = createSqlQuery_analysisMail_send_logs_bcc();


	
		;

							

$tdataanalysisMail_send_logs_bcc[".sqlquery"] = $queryData_analysisMail_send_logs_bcc;

$tableEvents["analysisMail_send_logs_bcc"] = new eventsBase;
$tdataanalysisMail_send_logs_bcc[".hasEvents"] = false;

?>