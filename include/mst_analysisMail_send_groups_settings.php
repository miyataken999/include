<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamst_analysisMail_send_groups = array();
	$tdatamst_analysisMail_send_groups[".truncateText"] = true;
	$tdatamst_analysisMail_send_groups[".NumberOfChars"] = 80;
	$tdatamst_analysisMail_send_groups[".ShortName"] = "mst_analysisMail_send_groups";
	$tdatamst_analysisMail_send_groups[".OwnerID"] = "";
	$tdatamst_analysisMail_send_groups[".OriginalTable"] = "mst_analysisMail_send_groups";

//	field labels
$fieldLabelsmst_analysisMail_send_groups = array();
$fieldToolTipsmst_analysisMail_send_groups = array();
$pageTitlesmst_analysisMail_send_groups = array();
$placeHoldersmst_analysisMail_send_groups = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmst_analysisMail_send_groups["Japanese"] = array();
	$fieldToolTipsmst_analysisMail_send_groups["Japanese"] = array();
	$placeHoldersmst_analysisMail_send_groups["Japanese"] = array();
	$pageTitlesmst_analysisMail_send_groups["Japanese"] = array();
	$fieldLabelsmst_analysisMail_send_groups["Japanese"]["send_group_id"] = "送信グループId";
	$fieldToolTipsmst_analysisMail_send_groups["Japanese"]["send_group_id"] = "";
	$placeHoldersmst_analysisMail_send_groups["Japanese"]["send_group_id"] = "";
	$fieldLabelsmst_analysisMail_send_groups["Japanese"]["send_category_id"] = "送信カテゴリーId";
	$fieldToolTipsmst_analysisMail_send_groups["Japanese"]["send_category_id"] = "";
	$placeHoldersmst_analysisMail_send_groups["Japanese"]["send_category_id"] = "";
	$fieldLabelsmst_analysisMail_send_groups["Japanese"]["name"] = "名称";
	$fieldToolTipsmst_analysisMail_send_groups["Japanese"]["name"] = "";
	$placeHoldersmst_analysisMail_send_groups["Japanese"]["name"] = "";
	$fieldLabelsmst_analysisMail_send_groups["Japanese"]["updated_by"] = "更新者";
	$fieldToolTipsmst_analysisMail_send_groups["Japanese"]["updated_by"] = "";
	$placeHoldersmst_analysisMail_send_groups["Japanese"]["updated_by"] = "";
	$fieldLabelsmst_analysisMail_send_groups["Japanese"]["updated_at"] = "更新日";
	$fieldToolTipsmst_analysisMail_send_groups["Japanese"]["updated_at"] = "";
	$placeHoldersmst_analysisMail_send_groups["Japanese"]["updated_at"] = "";
	$fieldLabelsmst_analysisMail_send_groups["Japanese"]["created_by"] = "作成者";
	$fieldToolTipsmst_analysisMail_send_groups["Japanese"]["created_by"] = "";
	$placeHoldersmst_analysisMail_send_groups["Japanese"]["created_by"] = "";
	$fieldLabelsmst_analysisMail_send_groups["Japanese"]["created_at"] = "作成日";
	$fieldToolTipsmst_analysisMail_send_groups["Japanese"]["created_at"] = "";
	$placeHoldersmst_analysisMail_send_groups["Japanese"]["created_at"] = "";
	if (count($fieldToolTipsmst_analysisMail_send_groups["Japanese"]))
		$tdatamst_analysisMail_send_groups[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmst_analysisMail_send_groups[""] = array();
	$fieldToolTipsmst_analysisMail_send_groups[""] = array();
	$placeHoldersmst_analysisMail_send_groups[""] = array();
	$pageTitlesmst_analysisMail_send_groups[""] = array();
	$fieldLabelsmst_analysisMail_send_groups[""]["send_group_id"] = "Send Group Id";
	$fieldToolTipsmst_analysisMail_send_groups[""]["send_group_id"] = "";
	$placeHoldersmst_analysisMail_send_groups[""]["send_group_id"] = "";
	$fieldLabelsmst_analysisMail_send_groups[""]["send_category_id"] = "Send Category Id";
	$fieldToolTipsmst_analysisMail_send_groups[""]["send_category_id"] = "";
	$placeHoldersmst_analysisMail_send_groups[""]["send_category_id"] = "";
	$fieldLabelsmst_analysisMail_send_groups[""]["name"] = "Name";
	$fieldToolTipsmst_analysisMail_send_groups[""]["name"] = "";
	$placeHoldersmst_analysisMail_send_groups[""]["name"] = "";
	$fieldLabelsmst_analysisMail_send_groups[""]["updated_by"] = "Updated By";
	$fieldToolTipsmst_analysisMail_send_groups[""]["updated_by"] = "";
	$placeHoldersmst_analysisMail_send_groups[""]["updated_by"] = "";
	$fieldLabelsmst_analysisMail_send_groups[""]["updated_at"] = "Updated At";
	$fieldToolTipsmst_analysisMail_send_groups[""]["updated_at"] = "";
	$placeHoldersmst_analysisMail_send_groups[""]["updated_at"] = "";
	$fieldLabelsmst_analysisMail_send_groups[""]["created_by"] = "Created By";
	$fieldToolTipsmst_analysisMail_send_groups[""]["created_by"] = "";
	$placeHoldersmst_analysisMail_send_groups[""]["created_by"] = "";
	$fieldLabelsmst_analysisMail_send_groups[""]["created_at"] = "Created At";
	$fieldToolTipsmst_analysisMail_send_groups[""]["created_at"] = "";
	$placeHoldersmst_analysisMail_send_groups[""]["created_at"] = "";
	if (count($fieldToolTipsmst_analysisMail_send_groups[""]))
		$tdatamst_analysisMail_send_groups[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmst_analysisMail_send_groups["English"] = array();
	$fieldToolTipsmst_analysisMail_send_groups["English"] = array();
	$placeHoldersmst_analysisMail_send_groups["English"] = array();
	$pageTitlesmst_analysisMail_send_groups["English"] = array();
	$fieldLabelsmst_analysisMail_send_groups["English"]["send_group_id"] = "Send Group Id";
	$fieldToolTipsmst_analysisMail_send_groups["English"]["send_group_id"] = "";
	$placeHoldersmst_analysisMail_send_groups["English"]["send_group_id"] = "";
	$fieldLabelsmst_analysisMail_send_groups["English"]["send_category_id"] = "Send Category Id";
	$fieldToolTipsmst_analysisMail_send_groups["English"]["send_category_id"] = "";
	$placeHoldersmst_analysisMail_send_groups["English"]["send_category_id"] = "";
	$fieldLabelsmst_analysisMail_send_groups["English"]["name"] = "Name";
	$fieldToolTipsmst_analysisMail_send_groups["English"]["name"] = "";
	$placeHoldersmst_analysisMail_send_groups["English"]["name"] = "";
	$fieldLabelsmst_analysisMail_send_groups["English"]["updated_by"] = "Updated By";
	$fieldToolTipsmst_analysisMail_send_groups["English"]["updated_by"] = "";
	$placeHoldersmst_analysisMail_send_groups["English"]["updated_by"] = "";
	$fieldLabelsmst_analysisMail_send_groups["English"]["updated_at"] = "Updated At";
	$fieldToolTipsmst_analysisMail_send_groups["English"]["updated_at"] = "";
	$placeHoldersmst_analysisMail_send_groups["English"]["updated_at"] = "";
	$fieldLabelsmst_analysisMail_send_groups["English"]["created_by"] = "Created By";
	$fieldToolTipsmst_analysisMail_send_groups["English"]["created_by"] = "";
	$placeHoldersmst_analysisMail_send_groups["English"]["created_by"] = "";
	$fieldLabelsmst_analysisMail_send_groups["English"]["created_at"] = "Created At";
	$fieldToolTipsmst_analysisMail_send_groups["English"]["created_at"] = "";
	$placeHoldersmst_analysisMail_send_groups["English"]["created_at"] = "";
	if (count($fieldToolTipsmst_analysisMail_send_groups["English"]))
		$tdatamst_analysisMail_send_groups[".isUseToolTips"] = true;
}


	$tdatamst_analysisMail_send_groups[".NCSearch"] = true;



$tdatamst_analysisMail_send_groups[".shortTableName"] = "mst_analysisMail_send_groups";
$tdatamst_analysisMail_send_groups[".nSecOptions"] = 0;
$tdatamst_analysisMail_send_groups[".recsPerRowPrint"] = 1;
$tdatamst_analysisMail_send_groups[".mainTableOwnerID"] = "";
$tdatamst_analysisMail_send_groups[".moveNext"] = 1;
$tdatamst_analysisMail_send_groups[".entityType"] = 0;

$tdatamst_analysisMail_send_groups[".strOriginalTableName"] = "mst_analysisMail_send_groups";

	



$tdatamst_analysisMail_send_groups[".showAddInPopup"] = false;

$tdatamst_analysisMail_send_groups[".showEditInPopup"] = false;

$tdatamst_analysisMail_send_groups[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamst_analysisMail_send_groups[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamst_analysisMail_send_groups[".fieldsForRegister"] = array();

$tdatamst_analysisMail_send_groups[".listAjax"] = false;

	$tdatamst_analysisMail_send_groups[".audit"] = true;

	$tdatamst_analysisMail_send_groups[".locking"] = false;



$tdatamst_analysisMail_send_groups[".list"] = true;

$tdatamst_analysisMail_send_groups[".inlineEdit"] = true;


$tdatamst_analysisMail_send_groups[".reorderRecordsByHeader"] = true;



$tdatamst_analysisMail_send_groups[".inlineAdd"] = true;

$tdatamst_analysisMail_send_groups[".import"] = true;

$tdatamst_analysisMail_send_groups[".exportTo"] = true;


$tdatamst_analysisMail_send_groups[".delete"] = true;

$tdatamst_analysisMail_send_groups[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamst_analysisMail_send_groups[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamst_analysisMail_send_groups[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamst_analysisMail_send_groups[".searchSaving"] = false;
//

$tdatamst_analysisMail_send_groups[".showSearchPanel"] = true;
		$tdatamst_analysisMail_send_groups[".flexibleSearch"] = true;

$tdatamst_analysisMail_send_groups[".isUseAjaxSuggest"] = true;

$tdatamst_analysisMail_send_groups[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																								

$tdatamst_analysisMail_send_groups[".ajaxCodeSnippetAdded"] = false;

$tdatamst_analysisMail_send_groups[".buttonsAdded"] = false;

$tdatamst_analysisMail_send_groups[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamst_analysisMail_send_groups[".isUseTimeForSearch"] = false;



$tdatamst_analysisMail_send_groups[".badgeColor"] = "e67349";

$tdatamst_analysisMail_send_groups[".detailsLinksOnList"] = "1";

$tdatamst_analysisMail_send_groups[".allSearchFields"] = array();
$tdatamst_analysisMail_send_groups[".filterFields"] = array();
$tdatamst_analysisMail_send_groups[".requiredSearchFields"] = array();

$tdatamst_analysisMail_send_groups[".allSearchFields"][] = "send_group_id";
	$tdatamst_analysisMail_send_groups[".allSearchFields"][] = "send_category_id";
	$tdatamst_analysisMail_send_groups[".allSearchFields"][] = "name";
	$tdatamst_analysisMail_send_groups[".allSearchFields"][] = "updated_by";
	$tdatamst_analysisMail_send_groups[".allSearchFields"][] = "updated_at";
	$tdatamst_analysisMail_send_groups[".allSearchFields"][] = "created_by";
	$tdatamst_analysisMail_send_groups[".allSearchFields"][] = "created_at";
	

$tdatamst_analysisMail_send_groups[".googleLikeFields"] = array();
$tdatamst_analysisMail_send_groups[".googleLikeFields"][] = "send_group_id";
$tdatamst_analysisMail_send_groups[".googleLikeFields"][] = "send_category_id";
$tdatamst_analysisMail_send_groups[".googleLikeFields"][] = "name";
$tdatamst_analysisMail_send_groups[".googleLikeFields"][] = "updated_by";
$tdatamst_analysisMail_send_groups[".googleLikeFields"][] = "updated_at";
$tdatamst_analysisMail_send_groups[".googleLikeFields"][] = "created_by";
$tdatamst_analysisMail_send_groups[".googleLikeFields"][] = "created_at";


$tdatamst_analysisMail_send_groups[".advSearchFields"] = array();
$tdatamst_analysisMail_send_groups[".advSearchFields"][] = "send_group_id";
$tdatamst_analysisMail_send_groups[".advSearchFields"][] = "send_category_id";
$tdatamst_analysisMail_send_groups[".advSearchFields"][] = "name";
$tdatamst_analysisMail_send_groups[".advSearchFields"][] = "updated_by";
$tdatamst_analysisMail_send_groups[".advSearchFields"][] = "updated_at";
$tdatamst_analysisMail_send_groups[".advSearchFields"][] = "created_by";
$tdatamst_analysisMail_send_groups[".advSearchFields"][] = "created_at";

$tdatamst_analysisMail_send_groups[".tableType"] = "list";

$tdatamst_analysisMail_send_groups[".printerPageOrientation"] = 0;
$tdatamst_analysisMail_send_groups[".nPrinterPageScale"] = 100;

$tdatamst_analysisMail_send_groups[".nPrinterSplitRecords"] = 40;

$tdatamst_analysisMail_send_groups[".nPrinterPDFSplitRecords"] = 40;



$tdatamst_analysisMail_send_groups[".geocodingEnabled"] = false;





$tdatamst_analysisMail_send_groups[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamst_analysisMail_send_groups[".pageSize"] = 20;

$tdatamst_analysisMail_send_groups[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `send_group_id` DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamst_analysisMail_send_groups[".strOrderBy"] = $tstrOrderBy;

$tdatamst_analysisMail_send_groups[".orderindexes"] = array();
$tdatamst_analysisMail_send_groups[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "`send_group_id`");

$tdatamst_analysisMail_send_groups[".sqlHead"] = "SELECT `send_group_id`,  `send_category_id`,  `name`,  `updated_by`,  `updated_at`,  `created_by`,  `created_at`";
$tdatamst_analysisMail_send_groups[".sqlFrom"] = "FROM `mst_analysisMail_send_groups`";
$tdatamst_analysisMail_send_groups[".sqlWhereExpr"] = "";
$tdatamst_analysisMail_send_groups[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamst_analysisMail_send_groups[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamst_analysisMail_send_groups[".arrGroupsPerPage"] = $arrGPP;

$tdatamst_analysisMail_send_groups[".highlightSearchResults"] = true;

$tableKeysmst_analysisMail_send_groups = array();
$tableKeysmst_analysisMail_send_groups[] = "send_group_id";
$tdatamst_analysisMail_send_groups[".Keys"] = $tableKeysmst_analysisMail_send_groups;

$tdatamst_analysisMail_send_groups[".listFields"] = array();
$tdatamst_analysisMail_send_groups[".listFields"][] = "send_group_id";
$tdatamst_analysisMail_send_groups[".listFields"][] = "send_category_id";
$tdatamst_analysisMail_send_groups[".listFields"][] = "name";
$tdatamst_analysisMail_send_groups[".listFields"][] = "updated_by";
$tdatamst_analysisMail_send_groups[".listFields"][] = "updated_at";
$tdatamst_analysisMail_send_groups[".listFields"][] = "created_by";
$tdatamst_analysisMail_send_groups[".listFields"][] = "created_at";

$tdatamst_analysisMail_send_groups[".hideMobileList"] = array();


$tdatamst_analysisMail_send_groups[".viewFields"] = array();

$tdatamst_analysisMail_send_groups[".addFields"] = array();

$tdatamst_analysisMail_send_groups[".masterListFields"] = array();
$tdatamst_analysisMail_send_groups[".masterListFields"][] = "send_group_id";
$tdatamst_analysisMail_send_groups[".masterListFields"][] = "send_category_id";
$tdatamst_analysisMail_send_groups[".masterListFields"][] = "name";
$tdatamst_analysisMail_send_groups[".masterListFields"][] = "updated_by";
$tdatamst_analysisMail_send_groups[".masterListFields"][] = "updated_at";
$tdatamst_analysisMail_send_groups[".masterListFields"][] = "created_by";
$tdatamst_analysisMail_send_groups[".masterListFields"][] = "created_at";

$tdatamst_analysisMail_send_groups[".inlineAddFields"] = array();
$tdatamst_analysisMail_send_groups[".inlineAddFields"][] = "send_category_id";
$tdatamst_analysisMail_send_groups[".inlineAddFields"][] = "name";

$tdatamst_analysisMail_send_groups[".editFields"] = array();

$tdatamst_analysisMail_send_groups[".inlineEditFields"] = array();
$tdatamst_analysisMail_send_groups[".inlineEditFields"][] = "send_category_id";
$tdatamst_analysisMail_send_groups[".inlineEditFields"][] = "name";

$tdatamst_analysisMail_send_groups[".updateSelectedFields"] = array();


$tdatamst_analysisMail_send_groups[".exportFields"] = array();
$tdatamst_analysisMail_send_groups[".exportFields"][] = "send_group_id";
$tdatamst_analysisMail_send_groups[".exportFields"][] = "send_category_id";
$tdatamst_analysisMail_send_groups[".exportFields"][] = "name";
$tdatamst_analysisMail_send_groups[".exportFields"][] = "updated_by";
$tdatamst_analysisMail_send_groups[".exportFields"][] = "updated_at";
$tdatamst_analysisMail_send_groups[".exportFields"][] = "created_by";
$tdatamst_analysisMail_send_groups[".exportFields"][] = "created_at";

$tdatamst_analysisMail_send_groups[".importFields"] = array();
$tdatamst_analysisMail_send_groups[".importFields"][] = "send_group_id";
$tdatamst_analysisMail_send_groups[".importFields"][] = "send_category_id";
$tdatamst_analysisMail_send_groups[".importFields"][] = "name";

$tdatamst_analysisMail_send_groups[".printFields"] = array();

//	send_group_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "send_group_id";
	$fdata["GoodName"] = "send_group_id";
	$fdata["ownerTable"] = "mst_analysisMail_send_groups";
	$fdata["Label"] = GetFieldLabel("mst_analysisMail_send_groups","send_group_id");
	$fdata["FieldType"] = 20;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "send_group_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`send_group_id`";

	
	
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




	$tdatamst_analysisMail_send_groups["send_group_id"] = $fdata;
//	send_category_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "send_category_id";
	$fdata["GoodName"] = "send_category_id";
	$fdata["ownerTable"] = "mst_analysisMail_send_groups";
	$fdata["Label"] = GetFieldLabel("mst_analysisMail_send_groups","send_category_id");
	$fdata["FieldType"] = 20;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "send_category_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`send_category_id`";

	
	
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




	$tdatamst_analysisMail_send_groups["send_category_id"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "mst_analysisMail_send_groups";
	$fdata["Label"] = GetFieldLabel("mst_analysisMail_send_groups","name");
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




	$tdatamst_analysisMail_send_groups["name"] = $fdata;
//	updated_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "updated_by";
	$fdata["GoodName"] = "updated_by";
	$fdata["ownerTable"] = "mst_analysisMail_send_groups";
	$fdata["Label"] = GetFieldLabel("mst_analysisMail_send_groups","updated_by");
	$fdata["FieldType"] = 3;

	
	
	
			
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




	$tdatamst_analysisMail_send_groups["updated_by"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "mst_analysisMail_send_groups";
	$fdata["Label"] = GetFieldLabel("mst_analysisMail_send_groups","updated_at");
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




	$tdatamst_analysisMail_send_groups["updated_at"] = $fdata;
//	created_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "created_by";
	$fdata["GoodName"] = "created_by";
	$fdata["ownerTable"] = "mst_analysisMail_send_groups";
	$fdata["Label"] = GetFieldLabel("mst_analysisMail_send_groups","created_by");
	$fdata["FieldType"] = 3;

	
	
	
			
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




	$tdatamst_analysisMail_send_groups["created_by"] = $fdata;
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "mst_analysisMail_send_groups";
	$fdata["Label"] = GetFieldLabel("mst_analysisMail_send_groups","created_at");
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




	$tdatamst_analysisMail_send_groups["created_at"] = $fdata;


$tables_data["mst_analysisMail_send_groups"]=&$tdatamst_analysisMail_send_groups;
$field_labels["mst_analysisMail_send_groups"] = &$fieldLabelsmst_analysisMail_send_groups;
$fieldToolTips["mst_analysisMail_send_groups"] = &$fieldToolTipsmst_analysisMail_send_groups;
$placeHolders["mst_analysisMail_send_groups"] = &$placeHoldersmst_analysisMail_send_groups;
$page_titles["mst_analysisMail_send_groups"] = &$pageTitlesmst_analysisMail_send_groups;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mst_analysisMail_send_groups"] = array();
//	mst_analysisMail_send_targets
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="mst_analysisMail_send_targets";
		$detailsParam["dOriginalTable"] = "mst_analysisMail_send_targets";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "mst_analysisMail_send_targets";
	$detailsParam["dCaptionTable"] = GetTableCaption("mst_analysisMail_send_targets");
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
		
	$detailsTablesData["mst_analysisMail_send_groups"][$dIndex] = $detailsParam;

	
		$detailsTablesData["mst_analysisMail_send_groups"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["mst_analysisMail_send_groups"][$dIndex]["masterKeys"][]="send_group_id";

				$detailsTablesData["mst_analysisMail_send_groups"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["mst_analysisMail_send_groups"][$dIndex]["detailKeys"][]="send_group_id";

// tables which are master tables for current table (detail)
$masterTablesData["mst_analysisMail_send_groups"] = array();


	
				$strOriginalDetailsTable="mst_analysisMail_send_categories";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="mst_analysisMail_send_categories";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "mst_analysisMail_send_categories";
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
					$masterTablesData["mst_analysisMail_send_groups"][0] = $masterParams;
				$masterTablesData["mst_analysisMail_send_groups"][0]["masterKeys"] = array();
	$masterTablesData["mst_analysisMail_send_groups"][0]["masterKeys"][]="send_category_id";
				$masterTablesData["mst_analysisMail_send_groups"][0]["detailKeys"] = array();
	$masterTablesData["mst_analysisMail_send_groups"][0]["detailKeys"][]="send_category_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mst_analysisMail_send_groups()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`send_group_id`,  `send_category_id`,  `name`,  `updated_by`,  `updated_at`,  `created_by`,  `created_at`";
$proto0["m_strFrom"] = "FROM `mst_analysisMail_send_groups`";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY `send_group_id` DESC";
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
	"m_strName" => "send_group_id",
	"m_strTable" => "mst_analysisMail_send_groups",
	"m_srcTableName" => "mst_analysisMail_send_groups"
));

$proto6["m_sql"] = "`send_group_id`";
$proto6["m_srcTableName"] = "mst_analysisMail_send_groups";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "send_category_id",
	"m_strTable" => "mst_analysisMail_send_groups",
	"m_srcTableName" => "mst_analysisMail_send_groups"
));

$proto8["m_sql"] = "`send_category_id`";
$proto8["m_srcTableName"] = "mst_analysisMail_send_groups";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "mst_analysisMail_send_groups",
	"m_srcTableName" => "mst_analysisMail_send_groups"
));

$proto10["m_sql"] = "`name`";
$proto10["m_srcTableName"] = "mst_analysisMail_send_groups";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by",
	"m_strTable" => "mst_analysisMail_send_groups",
	"m_srcTableName" => "mst_analysisMail_send_groups"
));

$proto12["m_sql"] = "`updated_by`";
$proto12["m_srcTableName"] = "mst_analysisMail_send_groups";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "mst_analysisMail_send_groups",
	"m_srcTableName" => "mst_analysisMail_send_groups"
));

$proto14["m_sql"] = "`updated_at`";
$proto14["m_srcTableName"] = "mst_analysisMail_send_groups";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "created_by",
	"m_strTable" => "mst_analysisMail_send_groups",
	"m_srcTableName" => "mst_analysisMail_send_groups"
));

$proto16["m_sql"] = "`created_by`";
$proto16["m_srcTableName"] = "mst_analysisMail_send_groups";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "mst_analysisMail_send_groups",
	"m_srcTableName" => "mst_analysisMail_send_groups"
));

$proto18["m_sql"] = "`created_at`";
$proto18["m_srcTableName"] = "mst_analysisMail_send_groups";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "mst_analysisMail_send_groups";
$proto21["m_srcTableName"] = "mst_analysisMail_send_groups";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "send_group_id";
$proto21["m_columns"][] = "send_category_id";
$proto21["m_columns"][] = "name";
$proto21["m_columns"][] = "updated_by";
$proto21["m_columns"][] = "updated_at";
$proto21["m_columns"][] = "created_by";
$proto21["m_columns"][] = "created_at";
$proto21["m_columns"][] = "sort";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "`mst_analysisMail_send_groups`";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "mst_analysisMail_send_groups";
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
	"m_strName" => "send_group_id",
	"m_strTable" => "mst_analysisMail_send_groups",
	"m_srcTableName" => "mst_analysisMail_send_groups"
));

$proto24["m_column"]=$obj;
$proto24["m_bAsc"] = 0;
$proto24["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto24);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="mst_analysisMail_send_groups";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mst_analysisMail_send_groups = createSqlQuery_mst_analysisMail_send_groups();


	
		;

							

$tdatamst_analysisMail_send_groups[".sqlquery"] = $queryData_mst_analysisMail_send_groups;

$tableEvents["mst_analysisMail_send_groups"] = new eventsBase;
$tdatamst_analysisMail_send_groups[".hasEvents"] = false;

?>