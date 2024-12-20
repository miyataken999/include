<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamst_analysisMail_send_categories = array();
	$tdatamst_analysisMail_send_categories[".truncateText"] = true;
	$tdatamst_analysisMail_send_categories[".NumberOfChars"] = 80;
	$tdatamst_analysisMail_send_categories[".ShortName"] = "mst_analysisMail_send_categories";
	$tdatamst_analysisMail_send_categories[".OwnerID"] = "";
	$tdatamst_analysisMail_send_categories[".OriginalTable"] = "mst_analysisMail_send_categories";

//	field labels
$fieldLabelsmst_analysisMail_send_categories = array();
$fieldToolTipsmst_analysisMail_send_categories = array();
$pageTitlesmst_analysisMail_send_categories = array();
$placeHoldersmst_analysisMail_send_categories = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmst_analysisMail_send_categories["Japanese"] = array();
	$fieldToolTipsmst_analysisMail_send_categories["Japanese"] = array();
	$placeHoldersmst_analysisMail_send_categories["Japanese"] = array();
	$pageTitlesmst_analysisMail_send_categories["Japanese"] = array();
	$fieldLabelsmst_analysisMail_send_categories["Japanese"]["send_category_id"] = "送信カテゴリーId";
	$fieldToolTipsmst_analysisMail_send_categories["Japanese"]["send_category_id"] = "";
	$placeHoldersmst_analysisMail_send_categories["Japanese"]["send_category_id"] = "";
	$fieldLabelsmst_analysisMail_send_categories["Japanese"]["name"] = "カテゴリー名";
	$fieldToolTipsmst_analysisMail_send_categories["Japanese"]["name"] = "";
	$placeHoldersmst_analysisMail_send_categories["Japanese"]["name"] = "";
	$fieldLabelsmst_analysisMail_send_categories["Japanese"]["updated_by"] = "更新者";
	$fieldToolTipsmst_analysisMail_send_categories["Japanese"]["updated_by"] = "";
	$placeHoldersmst_analysisMail_send_categories["Japanese"]["updated_by"] = "";
	$fieldLabelsmst_analysisMail_send_categories["Japanese"]["updated_at"] = "更新日";
	$fieldToolTipsmst_analysisMail_send_categories["Japanese"]["updated_at"] = "";
	$placeHoldersmst_analysisMail_send_categories["Japanese"]["updated_at"] = "";
	$fieldLabelsmst_analysisMail_send_categories["Japanese"]["created_by"] = "作成者";
	$fieldToolTipsmst_analysisMail_send_categories["Japanese"]["created_by"] = "";
	$placeHoldersmst_analysisMail_send_categories["Japanese"]["created_by"] = "";
	$fieldLabelsmst_analysisMail_send_categories["Japanese"]["created_at"] = "作成日";
	$fieldToolTipsmst_analysisMail_send_categories["Japanese"]["created_at"] = "";
	$placeHoldersmst_analysisMail_send_categories["Japanese"]["created_at"] = "";
	if (count($fieldToolTipsmst_analysisMail_send_categories["Japanese"]))
		$tdatamst_analysisMail_send_categories[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmst_analysisMail_send_categories[""] = array();
	$fieldToolTipsmst_analysisMail_send_categories[""] = array();
	$placeHoldersmst_analysisMail_send_categories[""] = array();
	$pageTitlesmst_analysisMail_send_categories[""] = array();
	$fieldLabelsmst_analysisMail_send_categories[""]["send_category_id"] = "Send Category Id";
	$fieldToolTipsmst_analysisMail_send_categories[""]["send_category_id"] = "";
	$placeHoldersmst_analysisMail_send_categories[""]["send_category_id"] = "";
	$fieldLabelsmst_analysisMail_send_categories[""]["name"] = "Name";
	$fieldToolTipsmst_analysisMail_send_categories[""]["name"] = "";
	$placeHoldersmst_analysisMail_send_categories[""]["name"] = "";
	$fieldLabelsmst_analysisMail_send_categories[""]["updated_by"] = "Updated By";
	$fieldToolTipsmst_analysisMail_send_categories[""]["updated_by"] = "";
	$placeHoldersmst_analysisMail_send_categories[""]["updated_by"] = "";
	$fieldLabelsmst_analysisMail_send_categories[""]["updated_at"] = "Updated At";
	$fieldToolTipsmst_analysisMail_send_categories[""]["updated_at"] = "";
	$placeHoldersmst_analysisMail_send_categories[""]["updated_at"] = "";
	$fieldLabelsmst_analysisMail_send_categories[""]["created_by"] = "Created By";
	$fieldToolTipsmst_analysisMail_send_categories[""]["created_by"] = "";
	$placeHoldersmst_analysisMail_send_categories[""]["created_by"] = "";
	$fieldLabelsmst_analysisMail_send_categories[""]["created_at"] = "Created At";
	$fieldToolTipsmst_analysisMail_send_categories[""]["created_at"] = "";
	$placeHoldersmst_analysisMail_send_categories[""]["created_at"] = "";
	if (count($fieldToolTipsmst_analysisMail_send_categories[""]))
		$tdatamst_analysisMail_send_categories[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmst_analysisMail_send_categories["English"] = array();
	$fieldToolTipsmst_analysisMail_send_categories["English"] = array();
	$placeHoldersmst_analysisMail_send_categories["English"] = array();
	$pageTitlesmst_analysisMail_send_categories["English"] = array();
	$fieldLabelsmst_analysisMail_send_categories["English"]["send_category_id"] = "Send Category Id";
	$fieldToolTipsmst_analysisMail_send_categories["English"]["send_category_id"] = "";
	$placeHoldersmst_analysisMail_send_categories["English"]["send_category_id"] = "";
	$fieldLabelsmst_analysisMail_send_categories["English"]["name"] = "Name";
	$fieldToolTipsmst_analysisMail_send_categories["English"]["name"] = "";
	$placeHoldersmst_analysisMail_send_categories["English"]["name"] = "";
	$fieldLabelsmst_analysisMail_send_categories["English"]["updated_by"] = "Updated By";
	$fieldToolTipsmst_analysisMail_send_categories["English"]["updated_by"] = "";
	$placeHoldersmst_analysisMail_send_categories["English"]["updated_by"] = "";
	$fieldLabelsmst_analysisMail_send_categories["English"]["updated_at"] = "Updated At";
	$fieldToolTipsmst_analysisMail_send_categories["English"]["updated_at"] = "";
	$placeHoldersmst_analysisMail_send_categories["English"]["updated_at"] = "";
	$fieldLabelsmst_analysisMail_send_categories["English"]["created_by"] = "Created By";
	$fieldToolTipsmst_analysisMail_send_categories["English"]["created_by"] = "";
	$placeHoldersmst_analysisMail_send_categories["English"]["created_by"] = "";
	$fieldLabelsmst_analysisMail_send_categories["English"]["created_at"] = "Created At";
	$fieldToolTipsmst_analysisMail_send_categories["English"]["created_at"] = "";
	$placeHoldersmst_analysisMail_send_categories["English"]["created_at"] = "";
	if (count($fieldToolTipsmst_analysisMail_send_categories["English"]))
		$tdatamst_analysisMail_send_categories[".isUseToolTips"] = true;
}


	$tdatamst_analysisMail_send_categories[".NCSearch"] = true;



$tdatamst_analysisMail_send_categories[".shortTableName"] = "mst_analysisMail_send_categories";
$tdatamst_analysisMail_send_categories[".nSecOptions"] = 0;
$tdatamst_analysisMail_send_categories[".recsPerRowPrint"] = 1;
$tdatamst_analysisMail_send_categories[".mainTableOwnerID"] = "";
$tdatamst_analysisMail_send_categories[".moveNext"] = 1;
$tdatamst_analysisMail_send_categories[".entityType"] = 0;

$tdatamst_analysisMail_send_categories[".strOriginalTableName"] = "mst_analysisMail_send_categories";

	



$tdatamst_analysisMail_send_categories[".showAddInPopup"] = false;

$tdatamst_analysisMail_send_categories[".showEditInPopup"] = false;

$tdatamst_analysisMail_send_categories[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamst_analysisMail_send_categories[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamst_analysisMail_send_categories[".fieldsForRegister"] = array();

$tdatamst_analysisMail_send_categories[".listAjax"] = false;

	$tdatamst_analysisMail_send_categories[".audit"] = true;

	$tdatamst_analysisMail_send_categories[".locking"] = false;



$tdatamst_analysisMail_send_categories[".list"] = true;

$tdatamst_analysisMail_send_categories[".inlineEdit"] = true;


$tdatamst_analysisMail_send_categories[".reorderRecordsByHeader"] = true;



$tdatamst_analysisMail_send_categories[".inlineAdd"] = true;

$tdatamst_analysisMail_send_categories[".import"] = true;

$tdatamst_analysisMail_send_categories[".exportTo"] = true;


$tdatamst_analysisMail_send_categories[".delete"] = true;

$tdatamst_analysisMail_send_categories[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamst_analysisMail_send_categories[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamst_analysisMail_send_categories[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamst_analysisMail_send_categories[".searchSaving"] = false;
//

$tdatamst_analysisMail_send_categories[".showSearchPanel"] = true;
		$tdatamst_analysisMail_send_categories[".flexibleSearch"] = true;

$tdatamst_analysisMail_send_categories[".isUseAjaxSuggest"] = true;

$tdatamst_analysisMail_send_categories[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatamst_analysisMail_send_categories[".ajaxCodeSnippetAdded"] = false;

$tdatamst_analysisMail_send_categories[".buttonsAdded"] = false;

$tdatamst_analysisMail_send_categories[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamst_analysisMail_send_categories[".isUseTimeForSearch"] = false;




$tdatamst_analysisMail_send_categories[".detailsLinksOnList"] = "1";

$tdatamst_analysisMail_send_categories[".allSearchFields"] = array();
$tdatamst_analysisMail_send_categories[".filterFields"] = array();
$tdatamst_analysisMail_send_categories[".requiredSearchFields"] = array();

$tdatamst_analysisMail_send_categories[".allSearchFields"][] = "send_category_id";
	$tdatamst_analysisMail_send_categories[".allSearchFields"][] = "name";
	$tdatamst_analysisMail_send_categories[".allSearchFields"][] = "updated_by";
	$tdatamst_analysisMail_send_categories[".allSearchFields"][] = "updated_at";
	$tdatamst_analysisMail_send_categories[".allSearchFields"][] = "created_by";
	$tdatamst_analysisMail_send_categories[".allSearchFields"][] = "created_at";
	

$tdatamst_analysisMail_send_categories[".googleLikeFields"] = array();
$tdatamst_analysisMail_send_categories[".googleLikeFields"][] = "send_category_id";
$tdatamst_analysisMail_send_categories[".googleLikeFields"][] = "name";
$tdatamst_analysisMail_send_categories[".googleLikeFields"][] = "updated_by";
$tdatamst_analysisMail_send_categories[".googleLikeFields"][] = "updated_at";
$tdatamst_analysisMail_send_categories[".googleLikeFields"][] = "created_by";
$tdatamst_analysisMail_send_categories[".googleLikeFields"][] = "created_at";


$tdatamst_analysisMail_send_categories[".advSearchFields"] = array();
$tdatamst_analysisMail_send_categories[".advSearchFields"][] = "send_category_id";
$tdatamst_analysisMail_send_categories[".advSearchFields"][] = "name";
$tdatamst_analysisMail_send_categories[".advSearchFields"][] = "updated_by";
$tdatamst_analysisMail_send_categories[".advSearchFields"][] = "updated_at";
$tdatamst_analysisMail_send_categories[".advSearchFields"][] = "created_by";
$tdatamst_analysisMail_send_categories[".advSearchFields"][] = "created_at";

$tdatamst_analysisMail_send_categories[".tableType"] = "list";

$tdatamst_analysisMail_send_categories[".printerPageOrientation"] = 0;
$tdatamst_analysisMail_send_categories[".nPrinterPageScale"] = 100;

$tdatamst_analysisMail_send_categories[".nPrinterSplitRecords"] = 40;

$tdatamst_analysisMail_send_categories[".nPrinterPDFSplitRecords"] = 40;



$tdatamst_analysisMail_send_categories[".geocodingEnabled"] = false;





$tdatamst_analysisMail_send_categories[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamst_analysisMail_send_categories[".pageSize"] = 20;

$tdatamst_analysisMail_send_categories[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `send_category_id` DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamst_analysisMail_send_categories[".strOrderBy"] = $tstrOrderBy;

$tdatamst_analysisMail_send_categories[".orderindexes"] = array();
$tdatamst_analysisMail_send_categories[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "`send_category_id`");

$tdatamst_analysisMail_send_categories[".sqlHead"] = "SELECT `send_category_id`,  `name`,  `updated_by`,  `updated_at`,  `created_by`,  `created_at`";
$tdatamst_analysisMail_send_categories[".sqlFrom"] = "FROM `mst_analysisMail_send_categories`";
$tdatamst_analysisMail_send_categories[".sqlWhereExpr"] = "";
$tdatamst_analysisMail_send_categories[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamst_analysisMail_send_categories[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamst_analysisMail_send_categories[".arrGroupsPerPage"] = $arrGPP;

$tdatamst_analysisMail_send_categories[".highlightSearchResults"] = true;

$tableKeysmst_analysisMail_send_categories = array();
$tableKeysmst_analysisMail_send_categories[] = "send_category_id";
$tdatamst_analysisMail_send_categories[".Keys"] = $tableKeysmst_analysisMail_send_categories;

$tdatamst_analysisMail_send_categories[".listFields"] = array();
$tdatamst_analysisMail_send_categories[".listFields"][] = "send_category_id";
$tdatamst_analysisMail_send_categories[".listFields"][] = "name";
$tdatamst_analysisMail_send_categories[".listFields"][] = "updated_by";
$tdatamst_analysisMail_send_categories[".listFields"][] = "updated_at";
$tdatamst_analysisMail_send_categories[".listFields"][] = "created_by";
$tdatamst_analysisMail_send_categories[".listFields"][] = "created_at";

$tdatamst_analysisMail_send_categories[".hideMobileList"] = array();


$tdatamst_analysisMail_send_categories[".viewFields"] = array();

$tdatamst_analysisMail_send_categories[".addFields"] = array();

$tdatamst_analysisMail_send_categories[".masterListFields"] = array();
$tdatamst_analysisMail_send_categories[".masterListFields"][] = "send_category_id";
$tdatamst_analysisMail_send_categories[".masterListFields"][] = "name";
$tdatamst_analysisMail_send_categories[".masterListFields"][] = "updated_by";
$tdatamst_analysisMail_send_categories[".masterListFields"][] = "updated_at";
$tdatamst_analysisMail_send_categories[".masterListFields"][] = "created_by";
$tdatamst_analysisMail_send_categories[".masterListFields"][] = "created_at";

$tdatamst_analysisMail_send_categories[".inlineAddFields"] = array();
$tdatamst_analysisMail_send_categories[".inlineAddFields"][] = "name";

$tdatamst_analysisMail_send_categories[".editFields"] = array();

$tdatamst_analysisMail_send_categories[".inlineEditFields"] = array();
$tdatamst_analysisMail_send_categories[".inlineEditFields"][] = "name";

$tdatamst_analysisMail_send_categories[".updateSelectedFields"] = array();


$tdatamst_analysisMail_send_categories[".exportFields"] = array();
$tdatamst_analysisMail_send_categories[".exportFields"][] = "send_category_id";
$tdatamst_analysisMail_send_categories[".exportFields"][] = "name";
$tdatamst_analysisMail_send_categories[".exportFields"][] = "updated_by";
$tdatamst_analysisMail_send_categories[".exportFields"][] = "updated_at";
$tdatamst_analysisMail_send_categories[".exportFields"][] = "created_by";
$tdatamst_analysisMail_send_categories[".exportFields"][] = "created_at";

$tdatamst_analysisMail_send_categories[".importFields"] = array();
$tdatamst_analysisMail_send_categories[".importFields"][] = "send_category_id";
$tdatamst_analysisMail_send_categories[".importFields"][] = "name";

$tdatamst_analysisMail_send_categories[".printFields"] = array();

//	send_category_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "send_category_id";
	$fdata["GoodName"] = "send_category_id";
	$fdata["ownerTable"] = "mst_analysisMail_send_categories";
	$fdata["Label"] = GetFieldLabel("mst_analysisMail_send_categories","send_category_id");
	$fdata["FieldType"] = 20;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdatamst_analysisMail_send_categories["send_category_id"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "mst_analysisMail_send_categories";
	$fdata["Label"] = GetFieldLabel("mst_analysisMail_send_categories","name");
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




	$tdatamst_analysisMail_send_categories["name"] = $fdata;
//	updated_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "updated_by";
	$fdata["GoodName"] = "updated_by";
	$fdata["ownerTable"] = "mst_analysisMail_send_categories";
	$fdata["Label"] = GetFieldLabel("mst_analysisMail_send_categories","updated_by");
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




	$tdatamst_analysisMail_send_categories["updated_by"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "mst_analysisMail_send_categories";
	$fdata["Label"] = GetFieldLabel("mst_analysisMail_send_categories","updated_at");
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




	$tdatamst_analysisMail_send_categories["updated_at"] = $fdata;
//	created_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "created_by";
	$fdata["GoodName"] = "created_by";
	$fdata["ownerTable"] = "mst_analysisMail_send_categories";
	$fdata["Label"] = GetFieldLabel("mst_analysisMail_send_categories","created_by");
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




	$tdatamst_analysisMail_send_categories["created_by"] = $fdata;
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "mst_analysisMail_send_categories";
	$fdata["Label"] = GetFieldLabel("mst_analysisMail_send_categories","created_at");
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




	$tdatamst_analysisMail_send_categories["created_at"] = $fdata;


$tables_data["mst_analysisMail_send_categories"]=&$tdatamst_analysisMail_send_categories;
$field_labels["mst_analysisMail_send_categories"] = &$fieldLabelsmst_analysisMail_send_categories;
$fieldToolTips["mst_analysisMail_send_categories"] = &$fieldToolTipsmst_analysisMail_send_categories;
$placeHolders["mst_analysisMail_send_categories"] = &$placeHoldersmst_analysisMail_send_categories;
$page_titles["mst_analysisMail_send_categories"] = &$pageTitlesmst_analysisMail_send_categories;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mst_analysisMail_send_categories"] = array();
//	mst_analysisMail_send_groups
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="mst_analysisMail_send_groups";
		$detailsParam["dOriginalTable"] = "mst_analysisMail_send_groups";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "mst_analysisMail_send_groups";
	$detailsParam["dCaptionTable"] = GetTableCaption("mst_analysisMail_send_groups");
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
		
	$detailsTablesData["mst_analysisMail_send_categories"][$dIndex] = $detailsParam;

	
		$detailsTablesData["mst_analysisMail_send_categories"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["mst_analysisMail_send_categories"][$dIndex]["masterKeys"][]="send_category_id";

				$detailsTablesData["mst_analysisMail_send_categories"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["mst_analysisMail_send_categories"][$dIndex]["detailKeys"][]="send_category_id";

// tables which are master tables for current table (detail)
$masterTablesData["mst_analysisMail_send_categories"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mst_analysisMail_send_categories()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`send_category_id`,  `name`,  `updated_by`,  `updated_at`,  `created_by`,  `created_at`";
$proto0["m_strFrom"] = "FROM `mst_analysisMail_send_categories`";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY `send_category_id` DESC";
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
	"m_strName" => "send_category_id",
	"m_strTable" => "mst_analysisMail_send_categories",
	"m_srcTableName" => "mst_analysisMail_send_categories"
));

$proto6["m_sql"] = "`send_category_id`";
$proto6["m_srcTableName"] = "mst_analysisMail_send_categories";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "mst_analysisMail_send_categories",
	"m_srcTableName" => "mst_analysisMail_send_categories"
));

$proto8["m_sql"] = "`name`";
$proto8["m_srcTableName"] = "mst_analysisMail_send_categories";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by",
	"m_strTable" => "mst_analysisMail_send_categories",
	"m_srcTableName" => "mst_analysisMail_send_categories"
));

$proto10["m_sql"] = "`updated_by`";
$proto10["m_srcTableName"] = "mst_analysisMail_send_categories";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "mst_analysisMail_send_categories",
	"m_srcTableName" => "mst_analysisMail_send_categories"
));

$proto12["m_sql"] = "`updated_at`";
$proto12["m_srcTableName"] = "mst_analysisMail_send_categories";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "created_by",
	"m_strTable" => "mst_analysisMail_send_categories",
	"m_srcTableName" => "mst_analysisMail_send_categories"
));

$proto14["m_sql"] = "`created_by`";
$proto14["m_srcTableName"] = "mst_analysisMail_send_categories";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "mst_analysisMail_send_categories",
	"m_srcTableName" => "mst_analysisMail_send_categories"
));

$proto16["m_sql"] = "`created_at`";
$proto16["m_srcTableName"] = "mst_analysisMail_send_categories";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "mst_analysisMail_send_categories";
$proto19["m_srcTableName"] = "mst_analysisMail_send_categories";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "send_category_id";
$proto19["m_columns"][] = "name";
$proto19["m_columns"][] = "updated_by";
$proto19["m_columns"][] = "updated_at";
$proto19["m_columns"][] = "created_by";
$proto19["m_columns"][] = "created_at";
$proto19["m_columns"][] = "sort";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "`mst_analysisMail_send_categories`";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "mst_analysisMail_send_categories";
$proto20=array();
$proto20["m_sql"] = "";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto22=array();
						$obj = new SQLField(array(
	"m_strName" => "send_category_id",
	"m_strTable" => "mst_analysisMail_send_categories",
	"m_srcTableName" => "mst_analysisMail_send_categories"
));

$proto22["m_column"]=$obj;
$proto22["m_bAsc"] = 0;
$proto22["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto22);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="mst_analysisMail_send_categories";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mst_analysisMail_send_categories = createSqlQuery_mst_analysisMail_send_categories();


	
		;

						

$tdatamst_analysisMail_send_categories[".sqlquery"] = $queryData_mst_analysisMail_send_categories;

$tableEvents["mst_analysisMail_send_categories"] = new eventsBase;
$tdatamst_analysisMail_send_categories[".hasEvents"] = false;

?>