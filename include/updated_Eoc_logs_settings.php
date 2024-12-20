<?php
require_once(getabspath("classes/cipherer.php"));




$tdataupdated_Eoc_logs = array();
	$tdataupdated_Eoc_logs[".truncateText"] = true;
	$tdataupdated_Eoc_logs[".NumberOfChars"] = 80;
	$tdataupdated_Eoc_logs[".ShortName"] = "updated_Eoc_logs";
	$tdataupdated_Eoc_logs[".OwnerID"] = "";
	$tdataupdated_Eoc_logs[".OriginalTable"] = "updated_Eoc_logs";

//	field labels
$fieldLabelsupdated_Eoc_logs = array();
$fieldToolTipsupdated_Eoc_logs = array();
$pageTitlesupdated_Eoc_logs = array();
$placeHoldersupdated_Eoc_logs = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsupdated_Eoc_logs["Japanese"] = array();
	$fieldToolTipsupdated_Eoc_logs["Japanese"] = array();
	$placeHoldersupdated_Eoc_logs["Japanese"] = array();
	$pageTitlesupdated_Eoc_logs["Japanese"] = array();
	$fieldLabelsupdated_Eoc_logs["Japanese"]["id"] = "Id";
	$fieldToolTipsupdated_Eoc_logs["Japanese"]["id"] = "";
	$placeHoldersupdated_Eoc_logs["Japanese"]["id"] = "";
	$fieldLabelsupdated_Eoc_logs["Japanese"]["ecc_id"] = "顧客SEQ";
	$fieldToolTipsupdated_Eoc_logs["Japanese"]["ecc_id"] = "";
	$placeHoldersupdated_Eoc_logs["Japanese"]["ecc_id"] = "";
	$fieldLabelsupdated_Eoc_logs["Japanese"]["key"] = "Key";
	$fieldToolTipsupdated_Eoc_logs["Japanese"]["key"] = "";
	$placeHoldersupdated_Eoc_logs["Japanese"]["key"] = "";
	$fieldLabelsupdated_Eoc_logs["Japanese"]["old_value"] = "更新前";
	$fieldToolTipsupdated_Eoc_logs["Japanese"]["old_value"] = "";
	$placeHoldersupdated_Eoc_logs["Japanese"]["old_value"] = "";
	$fieldLabelsupdated_Eoc_logs["Japanese"]["new_value"] = "更新後";
	$fieldToolTipsupdated_Eoc_logs["Japanese"]["new_value"] = "";
	$placeHoldersupdated_Eoc_logs["Japanese"]["new_value"] = "";
	$fieldLabelsupdated_Eoc_logs["Japanese"]["update_type"] = "処理タイプ";
	$fieldToolTipsupdated_Eoc_logs["Japanese"]["update_type"] = "";
	$placeHoldersupdated_Eoc_logs["Japanese"]["update_type"] = "";
	$fieldLabelsupdated_Eoc_logs["Japanese"]["update_id"] = "処理ID";
	$fieldToolTipsupdated_Eoc_logs["Japanese"]["update_id"] = "";
	$placeHoldersupdated_Eoc_logs["Japanese"]["update_id"] = "";
	$fieldLabelsupdated_Eoc_logs["Japanese"]["created_at"] = "作成日";
	$fieldToolTipsupdated_Eoc_logs["Japanese"]["created_at"] = "";
	$placeHoldersupdated_Eoc_logs["Japanese"]["created_at"] = "";
	$fieldLabelsupdated_Eoc_logs["Japanese"]["updated_at"] = "更新日";
	$fieldToolTipsupdated_Eoc_logs["Japanese"]["updated_at"] = "";
	$placeHoldersupdated_Eoc_logs["Japanese"]["updated_at"] = "";
	if (count($fieldToolTipsupdated_Eoc_logs["Japanese"]))
		$tdataupdated_Eoc_logs[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsupdated_Eoc_logs[""] = array();
	$fieldToolTipsupdated_Eoc_logs[""] = array();
	$placeHoldersupdated_Eoc_logs[""] = array();
	$pageTitlesupdated_Eoc_logs[""] = array();
	$fieldLabelsupdated_Eoc_logs[""]["id"] = "Id";
	$fieldToolTipsupdated_Eoc_logs[""]["id"] = "";
	$placeHoldersupdated_Eoc_logs[""]["id"] = "";
	$fieldLabelsupdated_Eoc_logs[""]["ecc_id"] = "Ecc Id";
	$fieldToolTipsupdated_Eoc_logs[""]["ecc_id"] = "";
	$placeHoldersupdated_Eoc_logs[""]["ecc_id"] = "";
	$fieldLabelsupdated_Eoc_logs[""]["key"] = "Key";
	$fieldToolTipsupdated_Eoc_logs[""]["key"] = "";
	$placeHoldersupdated_Eoc_logs[""]["key"] = "";
	$fieldLabelsupdated_Eoc_logs[""]["old_value"] = "Old Value";
	$fieldToolTipsupdated_Eoc_logs[""]["old_value"] = "";
	$placeHoldersupdated_Eoc_logs[""]["old_value"] = "";
	$fieldLabelsupdated_Eoc_logs[""]["new_value"] = "New Value";
	$fieldToolTipsupdated_Eoc_logs[""]["new_value"] = "";
	$placeHoldersupdated_Eoc_logs[""]["new_value"] = "";
	$fieldLabelsupdated_Eoc_logs[""]["update_type"] = "Update Type";
	$fieldToolTipsupdated_Eoc_logs[""]["update_type"] = "";
	$placeHoldersupdated_Eoc_logs[""]["update_type"] = "";
	$fieldLabelsupdated_Eoc_logs[""]["update_id"] = "Update Id";
	$fieldToolTipsupdated_Eoc_logs[""]["update_id"] = "";
	$placeHoldersupdated_Eoc_logs[""]["update_id"] = "";
	$fieldLabelsupdated_Eoc_logs[""]["created_at"] = "Created At";
	$fieldToolTipsupdated_Eoc_logs[""]["created_at"] = "";
	$placeHoldersupdated_Eoc_logs[""]["created_at"] = "";
	$fieldLabelsupdated_Eoc_logs[""]["updated_at"] = "Updated At";
	$fieldToolTipsupdated_Eoc_logs[""]["updated_at"] = "";
	$placeHoldersupdated_Eoc_logs[""]["updated_at"] = "";
	if (count($fieldToolTipsupdated_Eoc_logs[""]))
		$tdataupdated_Eoc_logs[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsupdated_Eoc_logs["English"] = array();
	$fieldToolTipsupdated_Eoc_logs["English"] = array();
	$placeHoldersupdated_Eoc_logs["English"] = array();
	$pageTitlesupdated_Eoc_logs["English"] = array();
	$fieldLabelsupdated_Eoc_logs["English"]["id"] = "Id";
	$fieldToolTipsupdated_Eoc_logs["English"]["id"] = "";
	$placeHoldersupdated_Eoc_logs["English"]["id"] = "";
	$fieldLabelsupdated_Eoc_logs["English"]["ecc_id"] = "Ecc Id";
	$fieldToolTipsupdated_Eoc_logs["English"]["ecc_id"] = "";
	$placeHoldersupdated_Eoc_logs["English"]["ecc_id"] = "";
	$fieldLabelsupdated_Eoc_logs["English"]["key"] = "Key";
	$fieldToolTipsupdated_Eoc_logs["English"]["key"] = "";
	$placeHoldersupdated_Eoc_logs["English"]["key"] = "";
	$fieldLabelsupdated_Eoc_logs["English"]["old_value"] = "Old Value";
	$fieldToolTipsupdated_Eoc_logs["English"]["old_value"] = "";
	$placeHoldersupdated_Eoc_logs["English"]["old_value"] = "";
	$fieldLabelsupdated_Eoc_logs["English"]["new_value"] = "New Value";
	$fieldToolTipsupdated_Eoc_logs["English"]["new_value"] = "";
	$placeHoldersupdated_Eoc_logs["English"]["new_value"] = "";
	$fieldLabelsupdated_Eoc_logs["English"]["update_type"] = "Update Type";
	$fieldToolTipsupdated_Eoc_logs["English"]["update_type"] = "";
	$placeHoldersupdated_Eoc_logs["English"]["update_type"] = "";
	$fieldLabelsupdated_Eoc_logs["English"]["update_id"] = "Update Id";
	$fieldToolTipsupdated_Eoc_logs["English"]["update_id"] = "";
	$placeHoldersupdated_Eoc_logs["English"]["update_id"] = "";
	$fieldLabelsupdated_Eoc_logs["English"]["created_at"] = "Created At";
	$fieldToolTipsupdated_Eoc_logs["English"]["created_at"] = "";
	$placeHoldersupdated_Eoc_logs["English"]["created_at"] = "";
	$fieldLabelsupdated_Eoc_logs["English"]["updated_at"] = "Updated At";
	$fieldToolTipsupdated_Eoc_logs["English"]["updated_at"] = "";
	$placeHoldersupdated_Eoc_logs["English"]["updated_at"] = "";
	if (count($fieldToolTipsupdated_Eoc_logs["English"]))
		$tdataupdated_Eoc_logs[".isUseToolTips"] = true;
}


	$tdataupdated_Eoc_logs[".NCSearch"] = true;



$tdataupdated_Eoc_logs[".shortTableName"] = "updated_Eoc_logs";
$tdataupdated_Eoc_logs[".nSecOptions"] = 0;
$tdataupdated_Eoc_logs[".recsPerRowPrint"] = 1;
$tdataupdated_Eoc_logs[".mainTableOwnerID"] = "";
$tdataupdated_Eoc_logs[".moveNext"] = 1;
$tdataupdated_Eoc_logs[".entityType"] = 0;

$tdataupdated_Eoc_logs[".strOriginalTableName"] = "updated_Eoc_logs";

	



$tdataupdated_Eoc_logs[".showAddInPopup"] = false;

$tdataupdated_Eoc_logs[".showEditInPopup"] = false;

$tdataupdated_Eoc_logs[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataupdated_Eoc_logs[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataupdated_Eoc_logs[".fieldsForRegister"] = array();

$tdataupdated_Eoc_logs[".listAjax"] = false;

	$tdataupdated_Eoc_logs[".audit"] = true;

	$tdataupdated_Eoc_logs[".locking"] = false;



$tdataupdated_Eoc_logs[".list"] = true;

$tdataupdated_Eoc_logs[".inlineEdit"] = true;


$tdataupdated_Eoc_logs[".reorderRecordsByHeader"] = true;








$tdataupdated_Eoc_logs[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataupdated_Eoc_logs[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataupdated_Eoc_logs[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataupdated_Eoc_logs[".searchSaving"] = false;
//

$tdataupdated_Eoc_logs[".showSearchPanel"] = true;
		$tdataupdated_Eoc_logs[".flexibleSearch"] = true;

$tdataupdated_Eoc_logs[".isUseAjaxSuggest"] = true;

$tdataupdated_Eoc_logs[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																								

$tdataupdated_Eoc_logs[".ajaxCodeSnippetAdded"] = false;

$tdataupdated_Eoc_logs[".buttonsAdded"] = false;

$tdataupdated_Eoc_logs[".addPageEvents"] = false;

// use timepicker for search panel
$tdataupdated_Eoc_logs[".isUseTimeForSearch"] = false;



$tdataupdated_Eoc_logs[".badgeColor"] = "4682b4";


$tdataupdated_Eoc_logs[".allSearchFields"] = array();
$tdataupdated_Eoc_logs[".filterFields"] = array();
$tdataupdated_Eoc_logs[".requiredSearchFields"] = array();

$tdataupdated_Eoc_logs[".allSearchFields"][] = "id";
	$tdataupdated_Eoc_logs[".allSearchFields"][] = "ecc_id";
	$tdataupdated_Eoc_logs[".allSearchFields"][] = "key";
	$tdataupdated_Eoc_logs[".allSearchFields"][] = "old_value";
	$tdataupdated_Eoc_logs[".allSearchFields"][] = "new_value";
	$tdataupdated_Eoc_logs[".allSearchFields"][] = "update_type";
	$tdataupdated_Eoc_logs[".allSearchFields"][] = "update_id";
	$tdataupdated_Eoc_logs[".allSearchFields"][] = "created_at";
	$tdataupdated_Eoc_logs[".allSearchFields"][] = "updated_at";
	

$tdataupdated_Eoc_logs[".googleLikeFields"] = array();
$tdataupdated_Eoc_logs[".googleLikeFields"][] = "id";
$tdataupdated_Eoc_logs[".googleLikeFields"][] = "ecc_id";
$tdataupdated_Eoc_logs[".googleLikeFields"][] = "key";
$tdataupdated_Eoc_logs[".googleLikeFields"][] = "old_value";
$tdataupdated_Eoc_logs[".googleLikeFields"][] = "new_value";
$tdataupdated_Eoc_logs[".googleLikeFields"][] = "update_type";
$tdataupdated_Eoc_logs[".googleLikeFields"][] = "update_id";
$tdataupdated_Eoc_logs[".googleLikeFields"][] = "created_at";
$tdataupdated_Eoc_logs[".googleLikeFields"][] = "updated_at";


$tdataupdated_Eoc_logs[".advSearchFields"] = array();
$tdataupdated_Eoc_logs[".advSearchFields"][] = "id";
$tdataupdated_Eoc_logs[".advSearchFields"][] = "ecc_id";
$tdataupdated_Eoc_logs[".advSearchFields"][] = "key";
$tdataupdated_Eoc_logs[".advSearchFields"][] = "old_value";
$tdataupdated_Eoc_logs[".advSearchFields"][] = "new_value";
$tdataupdated_Eoc_logs[".advSearchFields"][] = "update_type";
$tdataupdated_Eoc_logs[".advSearchFields"][] = "update_id";
$tdataupdated_Eoc_logs[".advSearchFields"][] = "created_at";
$tdataupdated_Eoc_logs[".advSearchFields"][] = "updated_at";

$tdataupdated_Eoc_logs[".tableType"] = "list";

$tdataupdated_Eoc_logs[".printerPageOrientation"] = 0;
$tdataupdated_Eoc_logs[".nPrinterPageScale"] = 100;

$tdataupdated_Eoc_logs[".nPrinterSplitRecords"] = 40;

$tdataupdated_Eoc_logs[".nPrinterPDFSplitRecords"] = 40;



$tdataupdated_Eoc_logs[".geocodingEnabled"] = false;





$tdataupdated_Eoc_logs[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataupdated_Eoc_logs[".pageSize"] = 20;

$tdataupdated_Eoc_logs[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `id` DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataupdated_Eoc_logs[".strOrderBy"] = $tstrOrderBy;

$tdataupdated_Eoc_logs[".orderindexes"] = array();
$tdataupdated_Eoc_logs[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "`id`");

$tdataupdated_Eoc_logs[".sqlHead"] = "SELECT `id`,  `ecc_id`,  `key`,  `old_value`,  `new_value`,  `update_type`,  `update_id`,  `created_at`,  `updated_at`";
$tdataupdated_Eoc_logs[".sqlFrom"] = "FROM `updated_Eoc_logs`";
$tdataupdated_Eoc_logs[".sqlWhereExpr"] = "";
$tdataupdated_Eoc_logs[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataupdated_Eoc_logs[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataupdated_Eoc_logs[".arrGroupsPerPage"] = $arrGPP;

$tdataupdated_Eoc_logs[".highlightSearchResults"] = true;

$tableKeysupdated_Eoc_logs = array();
$tableKeysupdated_Eoc_logs[] = "id";
$tdataupdated_Eoc_logs[".Keys"] = $tableKeysupdated_Eoc_logs;

$tdataupdated_Eoc_logs[".listFields"] = array();
$tdataupdated_Eoc_logs[".listFields"][] = "id";
$tdataupdated_Eoc_logs[".listFields"][] = "ecc_id";
$tdataupdated_Eoc_logs[".listFields"][] = "key";
$tdataupdated_Eoc_logs[".listFields"][] = "old_value";
$tdataupdated_Eoc_logs[".listFields"][] = "new_value";
$tdataupdated_Eoc_logs[".listFields"][] = "update_type";
$tdataupdated_Eoc_logs[".listFields"][] = "update_id";
$tdataupdated_Eoc_logs[".listFields"][] = "created_at";
$tdataupdated_Eoc_logs[".listFields"][] = "updated_at";

$tdataupdated_Eoc_logs[".hideMobileList"] = array();


$tdataupdated_Eoc_logs[".viewFields"] = array();

$tdataupdated_Eoc_logs[".addFields"] = array();

$tdataupdated_Eoc_logs[".masterListFields"] = array();
$tdataupdated_Eoc_logs[".masterListFields"][] = "id";
$tdataupdated_Eoc_logs[".masterListFields"][] = "ecc_id";
$tdataupdated_Eoc_logs[".masterListFields"][] = "key";
$tdataupdated_Eoc_logs[".masterListFields"][] = "old_value";
$tdataupdated_Eoc_logs[".masterListFields"][] = "new_value";
$tdataupdated_Eoc_logs[".masterListFields"][] = "update_type";
$tdataupdated_Eoc_logs[".masterListFields"][] = "update_id";
$tdataupdated_Eoc_logs[".masterListFields"][] = "created_at";
$tdataupdated_Eoc_logs[".masterListFields"][] = "updated_at";

$tdataupdated_Eoc_logs[".inlineAddFields"] = array();

$tdataupdated_Eoc_logs[".editFields"] = array();

$tdataupdated_Eoc_logs[".inlineEditFields"] = array();
$tdataupdated_Eoc_logs[".inlineEditFields"][] = "ecc_id";

$tdataupdated_Eoc_logs[".updateSelectedFields"] = array();


$tdataupdated_Eoc_logs[".exportFields"] = array();

$tdataupdated_Eoc_logs[".importFields"] = array();

$tdataupdated_Eoc_logs[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "updated_Eoc_logs";
	$fdata["Label"] = GetFieldLabel("updated_Eoc_logs","id");
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




	$tdataupdated_Eoc_logs["id"] = $fdata;
//	ecc_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ecc_id";
	$fdata["GoodName"] = "ecc_id";
	$fdata["ownerTable"] = "updated_Eoc_logs";
	$fdata["Label"] = GetFieldLabel("updated_Eoc_logs","ecc_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "ecc_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`ecc_id`";

	
	
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




	$tdataupdated_Eoc_logs["ecc_id"] = $fdata;
//	key
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "key";
	$fdata["GoodName"] = "key";
	$fdata["ownerTable"] = "updated_Eoc_logs";
	$fdata["Label"] = GetFieldLabel("updated_Eoc_logs","key");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "key";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`key`";

	
	
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




	$tdataupdated_Eoc_logs["key"] = $fdata;
//	old_value
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "old_value";
	$fdata["GoodName"] = "old_value";
	$fdata["ownerTable"] = "updated_Eoc_logs";
	$fdata["Label"] = GetFieldLabel("updated_Eoc_logs","old_value");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "old_value";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`old_value`";

	
	
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




	$tdataupdated_Eoc_logs["old_value"] = $fdata;
//	new_value
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "new_value";
	$fdata["GoodName"] = "new_value";
	$fdata["ownerTable"] = "updated_Eoc_logs";
	$fdata["Label"] = GetFieldLabel("updated_Eoc_logs","new_value");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "new_value";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`new_value`";

	
	
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




	$tdataupdated_Eoc_logs["new_value"] = $fdata;
//	update_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "update_type";
	$fdata["GoodName"] = "update_type";
	$fdata["ownerTable"] = "updated_Eoc_logs";
	$fdata["Label"] = GetFieldLabel("updated_Eoc_logs","update_type");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "update_type";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`update_type`";

	
	
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




	$tdataupdated_Eoc_logs["update_type"] = $fdata;
//	update_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "update_id";
	$fdata["GoodName"] = "update_id";
	$fdata["ownerTable"] = "updated_Eoc_logs";
	$fdata["Label"] = GetFieldLabel("updated_Eoc_logs","update_id");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "update_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`update_id`";

	
	
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




	$tdataupdated_Eoc_logs["update_id"] = $fdata;
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "updated_Eoc_logs";
	$fdata["Label"] = GetFieldLabel("updated_Eoc_logs","created_at");
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




	$tdataupdated_Eoc_logs["created_at"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "updated_Eoc_logs";
	$fdata["Label"] = GetFieldLabel("updated_Eoc_logs","updated_at");
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




	$tdataupdated_Eoc_logs["updated_at"] = $fdata;


$tables_data["updated_Eoc_logs"]=&$tdataupdated_Eoc_logs;
$field_labels["updated_Eoc_logs"] = &$fieldLabelsupdated_Eoc_logs;
$fieldToolTips["updated_Eoc_logs"] = &$fieldToolTipsupdated_Eoc_logs;
$placeHolders["updated_Eoc_logs"] = &$placeHoldersupdated_Eoc_logs;
$page_titles["updated_Eoc_logs"] = &$pageTitlesupdated_Eoc_logs;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["updated_Eoc_logs"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["updated_Eoc_logs"] = array();


	
				$strOriginalDetailsTable="Eoc";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="Eoc";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "Eoc";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "0";
	$masterParams["hideChild"]= "0";
	$masterParams["dispMasterInfo"] = array();
				$masterParams["dispMasterInfo"][PAGE_LIST] = true;
			
	$masterParams["previewOnList"]= 2;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 1;
	$masterParams["proceedLink"]= 1;

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["updated_Eoc_logs"][0] = $masterParams;
				$masterTablesData["updated_Eoc_logs"][0]["masterKeys"] = array();
	$masterTablesData["updated_Eoc_logs"][0]["masterKeys"][]="ecc_id";
				$masterTablesData["updated_Eoc_logs"][0]["detailKeys"] = array();
	$masterTablesData["updated_Eoc_logs"][0]["detailKeys"][]="ecc_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_updated_Eoc_logs()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  `ecc_id`,  `key`,  `old_value`,  `new_value`,  `update_type`,  `update_id`,  `created_at`,  `updated_at`";
$proto0["m_strFrom"] = "FROM `updated_Eoc_logs`";
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
	"m_strTable" => "updated_Eoc_logs",
	"m_srcTableName" => "updated_Eoc_logs"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "updated_Eoc_logs";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ecc_id",
	"m_strTable" => "updated_Eoc_logs",
	"m_srcTableName" => "updated_Eoc_logs"
));

$proto8["m_sql"] = "`ecc_id`";
$proto8["m_srcTableName"] = "updated_Eoc_logs";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "key",
	"m_strTable" => "updated_Eoc_logs",
	"m_srcTableName" => "updated_Eoc_logs"
));

$proto10["m_sql"] = "`key`";
$proto10["m_srcTableName"] = "updated_Eoc_logs";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "old_value",
	"m_strTable" => "updated_Eoc_logs",
	"m_srcTableName" => "updated_Eoc_logs"
));

$proto12["m_sql"] = "`old_value`";
$proto12["m_srcTableName"] = "updated_Eoc_logs";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "new_value",
	"m_strTable" => "updated_Eoc_logs",
	"m_srcTableName" => "updated_Eoc_logs"
));

$proto14["m_sql"] = "`new_value`";
$proto14["m_srcTableName"] = "updated_Eoc_logs";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "update_type",
	"m_strTable" => "updated_Eoc_logs",
	"m_srcTableName" => "updated_Eoc_logs"
));

$proto16["m_sql"] = "`update_type`";
$proto16["m_srcTableName"] = "updated_Eoc_logs";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "update_id",
	"m_strTable" => "updated_Eoc_logs",
	"m_srcTableName" => "updated_Eoc_logs"
));

$proto18["m_sql"] = "`update_id`";
$proto18["m_srcTableName"] = "updated_Eoc_logs";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "updated_Eoc_logs",
	"m_srcTableName" => "updated_Eoc_logs"
));

$proto20["m_sql"] = "`created_at`";
$proto20["m_srcTableName"] = "updated_Eoc_logs";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "updated_Eoc_logs",
	"m_srcTableName" => "updated_Eoc_logs"
));

$proto22["m_sql"] = "`updated_at`";
$proto22["m_srcTableName"] = "updated_Eoc_logs";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "updated_Eoc_logs";
$proto25["m_srcTableName"] = "updated_Eoc_logs";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "id";
$proto25["m_columns"][] = "ecc_id";
$proto25["m_columns"][] = "key";
$proto25["m_columns"][] = "old_value";
$proto25["m_columns"][] = "new_value";
$proto25["m_columns"][] = "update_type";
$proto25["m_columns"][] = "update_id";
$proto25["m_columns"][] = "created_at";
$proto25["m_columns"][] = "updated_at";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "`updated_Eoc_logs`";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "updated_Eoc_logs";
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
												$proto28=array();
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "updated_Eoc_logs",
	"m_srcTableName" => "updated_Eoc_logs"
));

$proto28["m_column"]=$obj;
$proto28["m_bAsc"] = 0;
$proto28["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto28);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="updated_Eoc_logs";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_updated_Eoc_logs = createSqlQuery_updated_Eoc_logs();


	
		;

									

$tdataupdated_Eoc_logs[".sqlquery"] = $queryData_updated_Eoc_logs;

$tableEvents["updated_Eoc_logs"] = new eventsBase;
$tdataupdated_Eoc_logs[".hasEvents"] = false;

?>