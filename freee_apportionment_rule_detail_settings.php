<?php
require_once(getabspath("classes/cipherer.php"));




$tdatafreee_apportionment_rule_detail = array();
	$tdatafreee_apportionment_rule_detail[".truncateText"] = true;
	$tdatafreee_apportionment_rule_detail[".NumberOfChars"] = 80;
	$tdatafreee_apportionment_rule_detail[".ShortName"] = "freee_apportionment_rule_detail";
	$tdatafreee_apportionment_rule_detail[".OwnerID"] = "";
	$tdatafreee_apportionment_rule_detail[".OriginalTable"] = "freee_apportionment_rule_detail";

//	field labels
$fieldLabelsfreee_apportionment_rule_detail = array();
$fieldToolTipsfreee_apportionment_rule_detail = array();
$pageTitlesfreee_apportionment_rule_detail = array();
$placeHoldersfreee_apportionment_rule_detail = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsfreee_apportionment_rule_detail["Japanese"] = array();
	$fieldToolTipsfreee_apportionment_rule_detail["Japanese"] = array();
	$placeHoldersfreee_apportionment_rule_detail["Japanese"] = array();
	$pageTitlesfreee_apportionment_rule_detail["Japanese"] = array();
	$fieldLabelsfreee_apportionment_rule_detail["Japanese"]["id"] = "Id";
	$fieldToolTipsfreee_apportionment_rule_detail["Japanese"]["id"] = "";
	$placeHoldersfreee_apportionment_rule_detail["Japanese"]["id"] = "";
	$fieldLabelsfreee_apportionment_rule_detail["Japanese"]["dept_group_id"] = "部署Id";
	$fieldToolTipsfreee_apportionment_rule_detail["Japanese"]["dept_group_id"] = "";
	$placeHoldersfreee_apportionment_rule_detail["Japanese"]["dept_group_id"] = "";
	$fieldLabelsfreee_apportionment_rule_detail["Japanese"]["updated_at"] = "更新日";
	$fieldToolTipsfreee_apportionment_rule_detail["Japanese"]["updated_at"] = "";
	$placeHoldersfreee_apportionment_rule_detail["Japanese"]["updated_at"] = "";
	$fieldLabelsfreee_apportionment_rule_detail["Japanese"]["updated_by"] = "更新者";
	$fieldToolTipsfreee_apportionment_rule_detail["Japanese"]["updated_by"] = "";
	$placeHoldersfreee_apportionment_rule_detail["Japanese"]["updated_by"] = "";
	$fieldLabelsfreee_apportionment_rule_detail["Japanese"]["created_at"] = "作成日";
	$fieldToolTipsfreee_apportionment_rule_detail["Japanese"]["created_at"] = "";
	$placeHoldersfreee_apportionment_rule_detail["Japanese"]["created_at"] = "";
	$fieldLabelsfreee_apportionment_rule_detail["Japanese"]["created_by"] = "作成者";
	$fieldToolTipsfreee_apportionment_rule_detail["Japanese"]["created_by"] = "";
	$placeHoldersfreee_apportionment_rule_detail["Japanese"]["created_by"] = "";
	$fieldLabelsfreee_apportionment_rule_detail["Japanese"]["rate"] = "割合";
	$fieldToolTipsfreee_apportionment_rule_detail["Japanese"]["rate"] = "";
	$placeHoldersfreee_apportionment_rule_detail["Japanese"]["rate"] = "";
	$fieldLabelsfreee_apportionment_rule_detail["Japanese"]["freee_apportionment_rule_id"] = "按分ルールId";
	$fieldToolTipsfreee_apportionment_rule_detail["Japanese"]["freee_apportionment_rule_id"] = "";
	$placeHoldersfreee_apportionment_rule_detail["Japanese"]["freee_apportionment_rule_id"] = "";
	if (count($fieldToolTipsfreee_apportionment_rule_detail["Japanese"]))
		$tdatafreee_apportionment_rule_detail[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsfreee_apportionment_rule_detail[""] = array();
	$fieldToolTipsfreee_apportionment_rule_detail[""] = array();
	$placeHoldersfreee_apportionment_rule_detail[""] = array();
	$pageTitlesfreee_apportionment_rule_detail[""] = array();
	$fieldLabelsfreee_apportionment_rule_detail[""]["id"] = "Id";
	$fieldToolTipsfreee_apportionment_rule_detail[""]["id"] = "";
	$placeHoldersfreee_apportionment_rule_detail[""]["id"] = "";
	$fieldLabelsfreee_apportionment_rule_detail[""]["dept_group_id"] = "Dept Group Id";
	$fieldToolTipsfreee_apportionment_rule_detail[""]["dept_group_id"] = "";
	$placeHoldersfreee_apportionment_rule_detail[""]["dept_group_id"] = "";
	$fieldLabelsfreee_apportionment_rule_detail[""]["updated_at"] = "Updated At";
	$fieldToolTipsfreee_apportionment_rule_detail[""]["updated_at"] = "";
	$placeHoldersfreee_apportionment_rule_detail[""]["updated_at"] = "";
	$fieldLabelsfreee_apportionment_rule_detail[""]["updated_by"] = "Updated By";
	$fieldToolTipsfreee_apportionment_rule_detail[""]["updated_by"] = "";
	$placeHoldersfreee_apportionment_rule_detail[""]["updated_by"] = "";
	$fieldLabelsfreee_apportionment_rule_detail[""]["created_at"] = "Created At";
	$fieldToolTipsfreee_apportionment_rule_detail[""]["created_at"] = "";
	$placeHoldersfreee_apportionment_rule_detail[""]["created_at"] = "";
	$fieldLabelsfreee_apportionment_rule_detail[""]["created_by"] = "Created By";
	$fieldToolTipsfreee_apportionment_rule_detail[""]["created_by"] = "";
	$placeHoldersfreee_apportionment_rule_detail[""]["created_by"] = "";
	$fieldLabelsfreee_apportionment_rule_detail[""]["rate"] = "Rate";
	$fieldToolTipsfreee_apportionment_rule_detail[""]["rate"] = "";
	$placeHoldersfreee_apportionment_rule_detail[""]["rate"] = "";
	$fieldLabelsfreee_apportionment_rule_detail[""]["freee_apportionment_rule_id"] = "Freee Apportionment Rule Id";
	$fieldToolTipsfreee_apportionment_rule_detail[""]["freee_apportionment_rule_id"] = "";
	$placeHoldersfreee_apportionment_rule_detail[""]["freee_apportionment_rule_id"] = "";
	if (count($fieldToolTipsfreee_apportionment_rule_detail[""]))
		$tdatafreee_apportionment_rule_detail[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsfreee_apportionment_rule_detail["English"] = array();
	$fieldToolTipsfreee_apportionment_rule_detail["English"] = array();
	$placeHoldersfreee_apportionment_rule_detail["English"] = array();
	$pageTitlesfreee_apportionment_rule_detail["English"] = array();
	$fieldLabelsfreee_apportionment_rule_detail["English"]["id"] = "Id";
	$fieldToolTipsfreee_apportionment_rule_detail["English"]["id"] = "";
	$placeHoldersfreee_apportionment_rule_detail["English"]["id"] = "";
	$fieldLabelsfreee_apportionment_rule_detail["English"]["dept_group_id"] = "Dept Group Id";
	$fieldToolTipsfreee_apportionment_rule_detail["English"]["dept_group_id"] = "";
	$placeHoldersfreee_apportionment_rule_detail["English"]["dept_group_id"] = "";
	$fieldLabelsfreee_apportionment_rule_detail["English"]["updated_at"] = "Updated At";
	$fieldToolTipsfreee_apportionment_rule_detail["English"]["updated_at"] = "";
	$placeHoldersfreee_apportionment_rule_detail["English"]["updated_at"] = "";
	$fieldLabelsfreee_apportionment_rule_detail["English"]["updated_by"] = "Updated By";
	$fieldToolTipsfreee_apportionment_rule_detail["English"]["updated_by"] = "";
	$placeHoldersfreee_apportionment_rule_detail["English"]["updated_by"] = "";
	$fieldLabelsfreee_apportionment_rule_detail["English"]["created_at"] = "Created At";
	$fieldToolTipsfreee_apportionment_rule_detail["English"]["created_at"] = "";
	$placeHoldersfreee_apportionment_rule_detail["English"]["created_at"] = "";
	$fieldLabelsfreee_apportionment_rule_detail["English"]["created_by"] = "Created By";
	$fieldToolTipsfreee_apportionment_rule_detail["English"]["created_by"] = "";
	$placeHoldersfreee_apportionment_rule_detail["English"]["created_by"] = "";
	$fieldLabelsfreee_apportionment_rule_detail["English"]["rate"] = "Rate";
	$fieldToolTipsfreee_apportionment_rule_detail["English"]["rate"] = "";
	$placeHoldersfreee_apportionment_rule_detail["English"]["rate"] = "";
	$fieldLabelsfreee_apportionment_rule_detail["English"]["freee_apportionment_rule_id"] = "Freee Apportionment Rule Id";
	$fieldToolTipsfreee_apportionment_rule_detail["English"]["freee_apportionment_rule_id"] = "";
	$placeHoldersfreee_apportionment_rule_detail["English"]["freee_apportionment_rule_id"] = "";
	if (count($fieldToolTipsfreee_apportionment_rule_detail["English"]))
		$tdatafreee_apportionment_rule_detail[".isUseToolTips"] = true;
}


	$tdatafreee_apportionment_rule_detail[".NCSearch"] = true;



$tdatafreee_apportionment_rule_detail[".shortTableName"] = "freee_apportionment_rule_detail";
$tdatafreee_apportionment_rule_detail[".nSecOptions"] = 0;
$tdatafreee_apportionment_rule_detail[".recsPerRowPrint"] = 1;
$tdatafreee_apportionment_rule_detail[".mainTableOwnerID"] = "";
$tdatafreee_apportionment_rule_detail[".moveNext"] = 1;
$tdatafreee_apportionment_rule_detail[".entityType"] = 0;

$tdatafreee_apportionment_rule_detail[".strOriginalTableName"] = "freee_apportionment_rule_detail";

	



$tdatafreee_apportionment_rule_detail[".showAddInPopup"] = false;

$tdatafreee_apportionment_rule_detail[".showEditInPopup"] = false;

$tdatafreee_apportionment_rule_detail[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatafreee_apportionment_rule_detail[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatafreee_apportionment_rule_detail[".fieldsForRegister"] = array();

$tdatafreee_apportionment_rule_detail[".listAjax"] = false;

	$tdatafreee_apportionment_rule_detail[".audit"] = false;

	$tdatafreee_apportionment_rule_detail[".locking"] = false;



$tdatafreee_apportionment_rule_detail[".list"] = true;

$tdatafreee_apportionment_rule_detail[".inlineEdit"] = true;


$tdatafreee_apportionment_rule_detail[".reorderRecordsByHeader"] = true;



$tdatafreee_apportionment_rule_detail[".inlineAdd"] = true;

$tdatafreee_apportionment_rule_detail[".import"] = true;

$tdatafreee_apportionment_rule_detail[".exportTo"] = true;


$tdatafreee_apportionment_rule_detail[".delete"] = true;

$tdatafreee_apportionment_rule_detail[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatafreee_apportionment_rule_detail[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatafreee_apportionment_rule_detail[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatafreee_apportionment_rule_detail[".searchSaving"] = false;
//

$tdatafreee_apportionment_rule_detail[".showSearchPanel"] = true;
		$tdatafreee_apportionment_rule_detail[".flexibleSearch"] = true;

$tdatafreee_apportionment_rule_detail[".isUseAjaxSuggest"] = true;

$tdatafreee_apportionment_rule_detail[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																								

$tdatafreee_apportionment_rule_detail[".ajaxCodeSnippetAdded"] = false;

$tdatafreee_apportionment_rule_detail[".buttonsAdded"] = false;

$tdatafreee_apportionment_rule_detail[".addPageEvents"] = false;

// use timepicker for search panel
$tdatafreee_apportionment_rule_detail[".isUseTimeForSearch"] = false;



$tdatafreee_apportionment_rule_detail[".badgeColor"] = "daa520";


$tdatafreee_apportionment_rule_detail[".allSearchFields"] = array();
$tdatafreee_apportionment_rule_detail[".filterFields"] = array();
$tdatafreee_apportionment_rule_detail[".requiredSearchFields"] = array();

$tdatafreee_apportionment_rule_detail[".allSearchFields"][] = "id";
	$tdatafreee_apportionment_rule_detail[".allSearchFields"][] = "dept_group_id";
	$tdatafreee_apportionment_rule_detail[".allSearchFields"][] = "rate";
	$tdatafreee_apportionment_rule_detail[".allSearchFields"][] = "updated_at";
	$tdatafreee_apportionment_rule_detail[".allSearchFields"][] = "updated_by";
	$tdatafreee_apportionment_rule_detail[".allSearchFields"][] = "created_at";
	$tdatafreee_apportionment_rule_detail[".allSearchFields"][] = "created_by";
	$tdatafreee_apportionment_rule_detail[".allSearchFields"][] = "freee_apportionment_rule_id";
	

$tdatafreee_apportionment_rule_detail[".googleLikeFields"] = array();
$tdatafreee_apportionment_rule_detail[".googleLikeFields"][] = "id";
$tdatafreee_apportionment_rule_detail[".googleLikeFields"][] = "dept_group_id";
$tdatafreee_apportionment_rule_detail[".googleLikeFields"][] = "rate";
$tdatafreee_apportionment_rule_detail[".googleLikeFields"][] = "updated_at";
$tdatafreee_apportionment_rule_detail[".googleLikeFields"][] = "updated_by";
$tdatafreee_apportionment_rule_detail[".googleLikeFields"][] = "created_at";
$tdatafreee_apportionment_rule_detail[".googleLikeFields"][] = "created_by";
$tdatafreee_apportionment_rule_detail[".googleLikeFields"][] = "freee_apportionment_rule_id";


$tdatafreee_apportionment_rule_detail[".advSearchFields"] = array();
$tdatafreee_apportionment_rule_detail[".advSearchFields"][] = "id";
$tdatafreee_apportionment_rule_detail[".advSearchFields"][] = "dept_group_id";
$tdatafreee_apportionment_rule_detail[".advSearchFields"][] = "rate";
$tdatafreee_apportionment_rule_detail[".advSearchFields"][] = "updated_at";
$tdatafreee_apportionment_rule_detail[".advSearchFields"][] = "updated_by";
$tdatafreee_apportionment_rule_detail[".advSearchFields"][] = "created_at";
$tdatafreee_apportionment_rule_detail[".advSearchFields"][] = "created_by";
$tdatafreee_apportionment_rule_detail[".advSearchFields"][] = "freee_apportionment_rule_id";

$tdatafreee_apportionment_rule_detail[".tableType"] = "list";

$tdatafreee_apportionment_rule_detail[".printerPageOrientation"] = 0;
$tdatafreee_apportionment_rule_detail[".nPrinterPageScale"] = 100;

$tdatafreee_apportionment_rule_detail[".nPrinterSplitRecords"] = 40;

$tdatafreee_apportionment_rule_detail[".nPrinterPDFSplitRecords"] = 40;



$tdatafreee_apportionment_rule_detail[".geocodingEnabled"] = false;





$tdatafreee_apportionment_rule_detail[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatafreee_apportionment_rule_detail[".pageSize"] = 20;

$tdatafreee_apportionment_rule_detail[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatafreee_apportionment_rule_detail[".strOrderBy"] = $tstrOrderBy;

$tdatafreee_apportionment_rule_detail[".orderindexes"] = array();

$tdatafreee_apportionment_rule_detail[".sqlHead"] = "SELECT `id`,  	`dept_group_id`,  	`rate`,  	`updated_at`,  	`updated_by`,  	`created_at`,  	`created_by`,  	`freee_apportionment_rule_id`";
$tdatafreee_apportionment_rule_detail[".sqlFrom"] = "FROM `freee_apportionment_rule_detail`";
$tdatafreee_apportionment_rule_detail[".sqlWhereExpr"] = "";
$tdatafreee_apportionment_rule_detail[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatafreee_apportionment_rule_detail[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatafreee_apportionment_rule_detail[".arrGroupsPerPage"] = $arrGPP;

$tdatafreee_apportionment_rule_detail[".highlightSearchResults"] = true;

$tableKeysfreee_apportionment_rule_detail = array();
$tableKeysfreee_apportionment_rule_detail[] = "id";
$tdatafreee_apportionment_rule_detail[".Keys"] = $tableKeysfreee_apportionment_rule_detail;

$tdatafreee_apportionment_rule_detail[".listFields"] = array();
$tdatafreee_apportionment_rule_detail[".listFields"][] = "id";
$tdatafreee_apportionment_rule_detail[".listFields"][] = "dept_group_id";
$tdatafreee_apportionment_rule_detail[".listFields"][] = "rate";
$tdatafreee_apportionment_rule_detail[".listFields"][] = "updated_at";
$tdatafreee_apportionment_rule_detail[".listFields"][] = "updated_by";
$tdatafreee_apportionment_rule_detail[".listFields"][] = "created_at";
$tdatafreee_apportionment_rule_detail[".listFields"][] = "created_by";
$tdatafreee_apportionment_rule_detail[".listFields"][] = "freee_apportionment_rule_id";

$tdatafreee_apportionment_rule_detail[".hideMobileList"] = array();


$tdatafreee_apportionment_rule_detail[".viewFields"] = array();

$tdatafreee_apportionment_rule_detail[".addFields"] = array();

$tdatafreee_apportionment_rule_detail[".masterListFields"] = array();
$tdatafreee_apportionment_rule_detail[".masterListFields"][] = "id";
$tdatafreee_apportionment_rule_detail[".masterListFields"][] = "dept_group_id";
$tdatafreee_apportionment_rule_detail[".masterListFields"][] = "rate";
$tdatafreee_apportionment_rule_detail[".masterListFields"][] = "updated_at";
$tdatafreee_apportionment_rule_detail[".masterListFields"][] = "updated_by";
$tdatafreee_apportionment_rule_detail[".masterListFields"][] = "created_at";
$tdatafreee_apportionment_rule_detail[".masterListFields"][] = "created_by";
$tdatafreee_apportionment_rule_detail[".masterListFields"][] = "freee_apportionment_rule_id";

$tdatafreee_apportionment_rule_detail[".inlineAddFields"] = array();
$tdatafreee_apportionment_rule_detail[".inlineAddFields"][] = "dept_group_id";
$tdatafreee_apportionment_rule_detail[".inlineAddFields"][] = "rate";
$tdatafreee_apportionment_rule_detail[".inlineAddFields"][] = "freee_apportionment_rule_id";

$tdatafreee_apportionment_rule_detail[".editFields"] = array();

$tdatafreee_apportionment_rule_detail[".inlineEditFields"] = array();
$tdatafreee_apportionment_rule_detail[".inlineEditFields"][] = "dept_group_id";
$tdatafreee_apportionment_rule_detail[".inlineEditFields"][] = "rate";
$tdatafreee_apportionment_rule_detail[".inlineEditFields"][] = "freee_apportionment_rule_id";

$tdatafreee_apportionment_rule_detail[".updateSelectedFields"] = array();


$tdatafreee_apportionment_rule_detail[".exportFields"] = array();
$tdatafreee_apportionment_rule_detail[".exportFields"][] = "id";
$tdatafreee_apportionment_rule_detail[".exportFields"][] = "dept_group_id";
$tdatafreee_apportionment_rule_detail[".exportFields"][] = "rate";
$tdatafreee_apportionment_rule_detail[".exportFields"][] = "updated_at";
$tdatafreee_apportionment_rule_detail[".exportFields"][] = "updated_by";
$tdatafreee_apportionment_rule_detail[".exportFields"][] = "created_at";
$tdatafreee_apportionment_rule_detail[".exportFields"][] = "created_by";
$tdatafreee_apportionment_rule_detail[".exportFields"][] = "freee_apportionment_rule_id";

$tdatafreee_apportionment_rule_detail[".importFields"] = array();
$tdatafreee_apportionment_rule_detail[".importFields"][] = "id";
$tdatafreee_apportionment_rule_detail[".importFields"][] = "dept_group_id";
$tdatafreee_apportionment_rule_detail[".importFields"][] = "rate";
$tdatafreee_apportionment_rule_detail[".importFields"][] = "freee_apportionment_rule_id";

$tdatafreee_apportionment_rule_detail[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "freee_apportionment_rule_detail";
	$fdata["Label"] = GetFieldLabel("freee_apportionment_rule_detail","id");
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




	$tdatafreee_apportionment_rule_detail["id"] = $fdata;
//	dept_group_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "dept_group_id";
	$fdata["GoodName"] = "dept_group_id";
	$fdata["ownerTable"] = "freee_apportionment_rule_detail";
	$fdata["Label"] = GetFieldLabel("freee_apportionment_rule_detail","dept_group_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "dept_group_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`dept_group_id`";

	
	
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
	$edata["LookupTable"] = "mst_dept_group";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "name";

	
	$edata["LookupOrderBy"] = "sort";

	
	
	
	

	
	
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




	$tdatafreee_apportionment_rule_detail["dept_group_id"] = $fdata;
//	rate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "rate";
	$fdata["GoodName"] = "rate";
	$fdata["ownerTable"] = "freee_apportionment_rule_detail";
	$fdata["Label"] = GetFieldLabel("freee_apportionment_rule_detail","rate");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "rate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`rate`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
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




	$tdatafreee_apportionment_rule_detail["rate"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "freee_apportionment_rule_detail";
	$fdata["Label"] = GetFieldLabel("freee_apportionment_rule_detail","updated_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

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




	$tdatafreee_apportionment_rule_detail["updated_at"] = $fdata;
//	updated_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "updated_by";
	$fdata["GoodName"] = "updated_by";
	$fdata["ownerTable"] = "freee_apportionment_rule_detail";
	$fdata["Label"] = GetFieldLabel("freee_apportionment_rule_detail","updated_by");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdatafreee_apportionment_rule_detail["updated_by"] = $fdata;
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "freee_apportionment_rule_detail";
	$fdata["Label"] = GetFieldLabel("freee_apportionment_rule_detail","created_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

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




	$tdatafreee_apportionment_rule_detail["created_at"] = $fdata;
//	created_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "created_by";
	$fdata["GoodName"] = "created_by";
	$fdata["ownerTable"] = "freee_apportionment_rule_detail";
	$fdata["Label"] = GetFieldLabel("freee_apportionment_rule_detail","created_by");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdatafreee_apportionment_rule_detail["created_by"] = $fdata;
//	freee_apportionment_rule_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "freee_apportionment_rule_id";
	$fdata["GoodName"] = "freee_apportionment_rule_id";
	$fdata["ownerTable"] = "freee_apportionment_rule_detail";
	$fdata["Label"] = GetFieldLabel("freee_apportionment_rule_detail","freee_apportionment_rule_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "freee_apportionment_rule_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`freee_apportionment_rule_id`";

	
	
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




	$tdatafreee_apportionment_rule_detail["freee_apportionment_rule_id"] = $fdata;


$tables_data["freee_apportionment_rule_detail"]=&$tdatafreee_apportionment_rule_detail;
$field_labels["freee_apportionment_rule_detail"] = &$fieldLabelsfreee_apportionment_rule_detail;
$fieldToolTips["freee_apportionment_rule_detail"] = &$fieldToolTipsfreee_apportionment_rule_detail;
$placeHolders["freee_apportionment_rule_detail"] = &$placeHoldersfreee_apportionment_rule_detail;
$page_titles["freee_apportionment_rule_detail"] = &$pageTitlesfreee_apportionment_rule_detail;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["freee_apportionment_rule_detail"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["freee_apportionment_rule_detail"] = array();


	
				$strOriginalDetailsTable="freee_apportionment_rules";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="freee_apportionment_rules";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "freee_apportionment_rules";
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
					$masterTablesData["freee_apportionment_rule_detail"][0] = $masterParams;
				$masterTablesData["freee_apportionment_rule_detail"][0]["masterKeys"] = array();
	$masterTablesData["freee_apportionment_rule_detail"][0]["masterKeys"][]="id";
				$masterTablesData["freee_apportionment_rule_detail"][0]["detailKeys"] = array();
	$masterTablesData["freee_apportionment_rule_detail"][0]["detailKeys"][]="freee_apportionment_rule_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_freee_apportionment_rule_detail()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  	`dept_group_id`,  	`rate`,  	`updated_at`,  	`updated_by`,  	`created_at`,  	`created_by`,  	`freee_apportionment_rule_id`";
$proto0["m_strFrom"] = "FROM `freee_apportionment_rule_detail`";
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
	"m_strTable" => "freee_apportionment_rule_detail",
	"m_srcTableName" => "freee_apportionment_rule_detail"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "freee_apportionment_rule_detail";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "dept_group_id",
	"m_strTable" => "freee_apportionment_rule_detail",
	"m_srcTableName" => "freee_apportionment_rule_detail"
));

$proto8["m_sql"] = "`dept_group_id`";
$proto8["m_srcTableName"] = "freee_apportionment_rule_detail";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "rate",
	"m_strTable" => "freee_apportionment_rule_detail",
	"m_srcTableName" => "freee_apportionment_rule_detail"
));

$proto10["m_sql"] = "`rate`";
$proto10["m_srcTableName"] = "freee_apportionment_rule_detail";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "freee_apportionment_rule_detail",
	"m_srcTableName" => "freee_apportionment_rule_detail"
));

$proto12["m_sql"] = "`updated_at`";
$proto12["m_srcTableName"] = "freee_apportionment_rule_detail";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by",
	"m_strTable" => "freee_apportionment_rule_detail",
	"m_srcTableName" => "freee_apportionment_rule_detail"
));

$proto14["m_sql"] = "`updated_by`";
$proto14["m_srcTableName"] = "freee_apportionment_rule_detail";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "freee_apportionment_rule_detail",
	"m_srcTableName" => "freee_apportionment_rule_detail"
));

$proto16["m_sql"] = "`created_at`";
$proto16["m_srcTableName"] = "freee_apportionment_rule_detail";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "created_by",
	"m_strTable" => "freee_apportionment_rule_detail",
	"m_srcTableName" => "freee_apportionment_rule_detail"
));

$proto18["m_sql"] = "`created_by`";
$proto18["m_srcTableName"] = "freee_apportionment_rule_detail";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "freee_apportionment_rule_id",
	"m_strTable" => "freee_apportionment_rule_detail",
	"m_srcTableName" => "freee_apportionment_rule_detail"
));

$proto20["m_sql"] = "`freee_apportionment_rule_id`";
$proto20["m_srcTableName"] = "freee_apportionment_rule_detail";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "freee_apportionment_rule_detail";
$proto23["m_srcTableName"] = "freee_apportionment_rule_detail";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "id";
$proto23["m_columns"][] = "dept_group_id";
$proto23["m_columns"][] = "rate";
$proto23["m_columns"][] = "updated_at";
$proto23["m_columns"][] = "updated_by";
$proto23["m_columns"][] = "created_at";
$proto23["m_columns"][] = "created_by";
$proto23["m_columns"][] = "freee_apportionment_rule_id";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "`freee_apportionment_rule_detail`";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "freee_apportionment_rule_detail";
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
$proto0["m_srcTableName"]="freee_apportionment_rule_detail";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_freee_apportionment_rule_detail = createSqlQuery_freee_apportionment_rule_detail();


	
		;

								

$tdatafreee_apportionment_rule_detail[".sqlquery"] = $queryData_freee_apportionment_rule_detail;

$tableEvents["freee_apportionment_rule_detail"] = new eventsBase;
$tdatafreee_apportionment_rule_detail[".hasEvents"] = false;

?>