<?php
require_once(getabspath("classes/cipherer.php"));




$tdataEoc_takuhai_return_items = array();
	$tdataEoc_takuhai_return_items[".truncateText"] = true;
	$tdataEoc_takuhai_return_items[".NumberOfChars"] = 80;
	$tdataEoc_takuhai_return_items[".ShortName"] = "Eoc_takuhai_return_items";
	$tdataEoc_takuhai_return_items[".OwnerID"] = "";
	$tdataEoc_takuhai_return_items[".OriginalTable"] = "Eoc_takuhai_return_items";

//	field labels
$fieldLabelsEoc_takuhai_return_items = array();
$fieldToolTipsEoc_takuhai_return_items = array();
$pageTitlesEoc_takuhai_return_items = array();
$placeHoldersEoc_takuhai_return_items = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsEoc_takuhai_return_items["Japanese"] = array();
	$fieldToolTipsEoc_takuhai_return_items["Japanese"] = array();
	$placeHoldersEoc_takuhai_return_items["Japanese"] = array();
	$pageTitlesEoc_takuhai_return_items["Japanese"] = array();
	$fieldLabelsEoc_takuhai_return_items["Japanese"]["id"] = "Id";
	$fieldToolTipsEoc_takuhai_return_items["Japanese"]["id"] = "";
	$placeHoldersEoc_takuhai_return_items["Japanese"]["id"] = "";
	$fieldLabelsEoc_takuhai_return_items["Japanese"]["Eoc_takuhai_return_id"] = "返却管理ID";
	$fieldToolTipsEoc_takuhai_return_items["Japanese"]["Eoc_takuhai_return_id"] = "";
	$placeHoldersEoc_takuhai_return_items["Japanese"]["Eoc_takuhai_return_id"] = "";
	$fieldLabelsEoc_takuhai_return_items["Japanese"]["product_id"] = "SEQ";
	$fieldToolTipsEoc_takuhai_return_items["Japanese"]["product_id"] = "";
	$placeHoldersEoc_takuhai_return_items["Japanese"]["product_id"] = "";
	$fieldLabelsEoc_takuhai_return_items["Japanese"]["created_at"] = "作成日";
	$fieldToolTipsEoc_takuhai_return_items["Japanese"]["created_at"] = "";
	$placeHoldersEoc_takuhai_return_items["Japanese"]["created_at"] = "";
	$fieldLabelsEoc_takuhai_return_items["Japanese"]["created_by"] = "作成者";
	$fieldToolTipsEoc_takuhai_return_items["Japanese"]["created_by"] = "";
	$placeHoldersEoc_takuhai_return_items["Japanese"]["created_by"] = "";
	$fieldLabelsEoc_takuhai_return_items["Japanese"]["updated_at"] = "更新日";
	$fieldToolTipsEoc_takuhai_return_items["Japanese"]["updated_at"] = "";
	$placeHoldersEoc_takuhai_return_items["Japanese"]["updated_at"] = "";
	$fieldLabelsEoc_takuhai_return_items["Japanese"]["updated_by"] = "更新者";
	$fieldToolTipsEoc_takuhai_return_items["Japanese"]["updated_by"] = "";
	$placeHoldersEoc_takuhai_return_items["Japanese"]["updated_by"] = "";
	$fieldLabelsEoc_takuhai_return_items["Japanese"]["link"] = "Link";
	$fieldToolTipsEoc_takuhai_return_items["Japanese"]["link"] = "";
	$placeHoldersEoc_takuhai_return_items["Japanese"]["link"] = "";
	if (count($fieldToolTipsEoc_takuhai_return_items["Japanese"]))
		$tdataEoc_takuhai_return_items[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsEoc_takuhai_return_items[""] = array();
	$fieldToolTipsEoc_takuhai_return_items[""] = array();
	$placeHoldersEoc_takuhai_return_items[""] = array();
	$pageTitlesEoc_takuhai_return_items[""] = array();
	$fieldLabelsEoc_takuhai_return_items[""]["id"] = "Id";
	$fieldToolTipsEoc_takuhai_return_items[""]["id"] = "";
	$placeHoldersEoc_takuhai_return_items[""]["id"] = "";
	$fieldLabelsEoc_takuhai_return_items[""]["Eoc_takuhai_return_id"] = "Eoc Takuhai Return Id";
	$fieldToolTipsEoc_takuhai_return_items[""]["Eoc_takuhai_return_id"] = "";
	$placeHoldersEoc_takuhai_return_items[""]["Eoc_takuhai_return_id"] = "";
	$fieldLabelsEoc_takuhai_return_items[""]["product_id"] = "Product Id";
	$fieldToolTipsEoc_takuhai_return_items[""]["product_id"] = "";
	$placeHoldersEoc_takuhai_return_items[""]["product_id"] = "";
	$fieldLabelsEoc_takuhai_return_items[""]["created_at"] = "Created At";
	$fieldToolTipsEoc_takuhai_return_items[""]["created_at"] = "";
	$placeHoldersEoc_takuhai_return_items[""]["created_at"] = "";
	$fieldLabelsEoc_takuhai_return_items[""]["created_by"] = "Created By";
	$fieldToolTipsEoc_takuhai_return_items[""]["created_by"] = "";
	$placeHoldersEoc_takuhai_return_items[""]["created_by"] = "";
	$fieldLabelsEoc_takuhai_return_items[""]["updated_at"] = "Updated At";
	$fieldToolTipsEoc_takuhai_return_items[""]["updated_at"] = "";
	$placeHoldersEoc_takuhai_return_items[""]["updated_at"] = "";
	$fieldLabelsEoc_takuhai_return_items[""]["updated_by"] = "Updated By";
	$fieldToolTipsEoc_takuhai_return_items[""]["updated_by"] = "";
	$placeHoldersEoc_takuhai_return_items[""]["updated_by"] = "";
	$fieldLabelsEoc_takuhai_return_items[""]["link"] = "Link";
	$fieldToolTipsEoc_takuhai_return_items[""]["link"] = "";
	$placeHoldersEoc_takuhai_return_items[""]["link"] = "";
	if (count($fieldToolTipsEoc_takuhai_return_items[""]))
		$tdataEoc_takuhai_return_items[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsEoc_takuhai_return_items["English"] = array();
	$fieldToolTipsEoc_takuhai_return_items["English"] = array();
	$placeHoldersEoc_takuhai_return_items["English"] = array();
	$pageTitlesEoc_takuhai_return_items["English"] = array();
	$fieldLabelsEoc_takuhai_return_items["English"]["id"] = "Id";
	$fieldToolTipsEoc_takuhai_return_items["English"]["id"] = "";
	$placeHoldersEoc_takuhai_return_items["English"]["id"] = "";
	$fieldLabelsEoc_takuhai_return_items["English"]["Eoc_takuhai_return_id"] = "Eoc Takuhai Return Id";
	$fieldToolTipsEoc_takuhai_return_items["English"]["Eoc_takuhai_return_id"] = "";
	$placeHoldersEoc_takuhai_return_items["English"]["Eoc_takuhai_return_id"] = "";
	$fieldLabelsEoc_takuhai_return_items["English"]["product_id"] = "Product Id";
	$fieldToolTipsEoc_takuhai_return_items["English"]["product_id"] = "";
	$placeHoldersEoc_takuhai_return_items["English"]["product_id"] = "";
	$fieldLabelsEoc_takuhai_return_items["English"]["created_at"] = "Created At";
	$fieldToolTipsEoc_takuhai_return_items["English"]["created_at"] = "";
	$placeHoldersEoc_takuhai_return_items["English"]["created_at"] = "";
	$fieldLabelsEoc_takuhai_return_items["English"]["created_by"] = "Created By";
	$fieldToolTipsEoc_takuhai_return_items["English"]["created_by"] = "";
	$placeHoldersEoc_takuhai_return_items["English"]["created_by"] = "";
	$fieldLabelsEoc_takuhai_return_items["English"]["updated_at"] = "Updated At";
	$fieldToolTipsEoc_takuhai_return_items["English"]["updated_at"] = "";
	$placeHoldersEoc_takuhai_return_items["English"]["updated_at"] = "";
	$fieldLabelsEoc_takuhai_return_items["English"]["updated_by"] = "Updated By";
	$fieldToolTipsEoc_takuhai_return_items["English"]["updated_by"] = "";
	$placeHoldersEoc_takuhai_return_items["English"]["updated_by"] = "";
	$fieldLabelsEoc_takuhai_return_items["English"]["link"] = "Link";
	$fieldToolTipsEoc_takuhai_return_items["English"]["link"] = "";
	$placeHoldersEoc_takuhai_return_items["English"]["link"] = "";
	if (count($fieldToolTipsEoc_takuhai_return_items["English"]))
		$tdataEoc_takuhai_return_items[".isUseToolTips"] = true;
}


	$tdataEoc_takuhai_return_items[".NCSearch"] = true;



$tdataEoc_takuhai_return_items[".shortTableName"] = "Eoc_takuhai_return_items";
$tdataEoc_takuhai_return_items[".nSecOptions"] = 0;
$tdataEoc_takuhai_return_items[".recsPerRowPrint"] = 1;
$tdataEoc_takuhai_return_items[".mainTableOwnerID"] = "";
$tdataEoc_takuhai_return_items[".moveNext"] = 1;
$tdataEoc_takuhai_return_items[".entityType"] = 0;

$tdataEoc_takuhai_return_items[".strOriginalTableName"] = "Eoc_takuhai_return_items";

	



$tdataEoc_takuhai_return_items[".showAddInPopup"] = false;

$tdataEoc_takuhai_return_items[".showEditInPopup"] = false;

$tdataEoc_takuhai_return_items[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataEoc_takuhai_return_items[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataEoc_takuhai_return_items[".fieldsForRegister"] = array();

$tdataEoc_takuhai_return_items[".listAjax"] = false;

	$tdataEoc_takuhai_return_items[".audit"] = true;

	$tdataEoc_takuhai_return_items[".locking"] = false;



$tdataEoc_takuhai_return_items[".list"] = true;

$tdataEoc_takuhai_return_items[".inlineEdit"] = true;


$tdataEoc_takuhai_return_items[".reorderRecordsByHeader"] = true;



$tdataEoc_takuhai_return_items[".inlineAdd"] = true;

$tdataEoc_takuhai_return_items[".import"] = true;

$tdataEoc_takuhai_return_items[".exportTo"] = true;


$tdataEoc_takuhai_return_items[".delete"] = true;

$tdataEoc_takuhai_return_items[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataEoc_takuhai_return_items[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataEoc_takuhai_return_items[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataEoc_takuhai_return_items[".searchSaving"] = false;
//

$tdataEoc_takuhai_return_items[".showSearchPanel"] = true;
		$tdataEoc_takuhai_return_items[".flexibleSearch"] = true;

$tdataEoc_takuhai_return_items[".isUseAjaxSuggest"] = true;

$tdataEoc_takuhai_return_items[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																								

$tdataEoc_takuhai_return_items[".ajaxCodeSnippetAdded"] = false;

$tdataEoc_takuhai_return_items[".buttonsAdded"] = false;

$tdataEoc_takuhai_return_items[".addPageEvents"] = false;

// use timepicker for search panel
$tdataEoc_takuhai_return_items[".isUseTimeForSearch"] = false;



$tdataEoc_takuhai_return_items[".badgeColor"] = "cd853f";


$tdataEoc_takuhai_return_items[".allSearchFields"] = array();
$tdataEoc_takuhai_return_items[".filterFields"] = array();
$tdataEoc_takuhai_return_items[".requiredSearchFields"] = array();

$tdataEoc_takuhai_return_items[".allSearchFields"][] = "link";
	$tdataEoc_takuhai_return_items[".allSearchFields"][] = "id";
	$tdataEoc_takuhai_return_items[".allSearchFields"][] = "Eoc_takuhai_return_id";
	$tdataEoc_takuhai_return_items[".allSearchFields"][] = "product_id";
	$tdataEoc_takuhai_return_items[".allSearchFields"][] = "created_at";
	$tdataEoc_takuhai_return_items[".allSearchFields"][] = "created_by";
	$tdataEoc_takuhai_return_items[".allSearchFields"][] = "updated_at";
	$tdataEoc_takuhai_return_items[".allSearchFields"][] = "updated_by";
	

$tdataEoc_takuhai_return_items[".googleLikeFields"] = array();
$tdataEoc_takuhai_return_items[".googleLikeFields"][] = "link";
$tdataEoc_takuhai_return_items[".googleLikeFields"][] = "id";
$tdataEoc_takuhai_return_items[".googleLikeFields"][] = "Eoc_takuhai_return_id";
$tdataEoc_takuhai_return_items[".googleLikeFields"][] = "product_id";
$tdataEoc_takuhai_return_items[".googleLikeFields"][] = "created_at";
$tdataEoc_takuhai_return_items[".googleLikeFields"][] = "created_by";
$tdataEoc_takuhai_return_items[".googleLikeFields"][] = "updated_at";
$tdataEoc_takuhai_return_items[".googleLikeFields"][] = "updated_by";

$tdataEoc_takuhai_return_items[".panelSearchFields"] = array();
$tdataEoc_takuhai_return_items[".searchPanelOptions"] = array();
$tdataEoc_takuhai_return_items[".panelSearchFields"][] = "id";
	$tdataEoc_takuhai_return_items[".panelSearchFields"][] = "Eoc_takuhai_return_id";
	$tdataEoc_takuhai_return_items[".panelSearchFields"][] = "product_id";
	
$tdataEoc_takuhai_return_items[".advSearchFields"] = array();
$tdataEoc_takuhai_return_items[".advSearchFields"][] = "link";
$tdataEoc_takuhai_return_items[".advSearchFields"][] = "id";
$tdataEoc_takuhai_return_items[".advSearchFields"][] = "Eoc_takuhai_return_id";
$tdataEoc_takuhai_return_items[".advSearchFields"][] = "product_id";
$tdataEoc_takuhai_return_items[".advSearchFields"][] = "created_at";
$tdataEoc_takuhai_return_items[".advSearchFields"][] = "created_by";
$tdataEoc_takuhai_return_items[".advSearchFields"][] = "updated_at";
$tdataEoc_takuhai_return_items[".advSearchFields"][] = "updated_by";

$tdataEoc_takuhai_return_items[".tableType"] = "list";

$tdataEoc_takuhai_return_items[".printerPageOrientation"] = 0;
$tdataEoc_takuhai_return_items[".nPrinterPageScale"] = 100;

$tdataEoc_takuhai_return_items[".nPrinterSplitRecords"] = 40;

$tdataEoc_takuhai_return_items[".nPrinterPDFSplitRecords"] = 40;



$tdataEoc_takuhai_return_items[".geocodingEnabled"] = false;





$tdataEoc_takuhai_return_items[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataEoc_takuhai_return_items[".pageSize"] = 20;

$tdataEoc_takuhai_return_items[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `id` DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataEoc_takuhai_return_items[".strOrderBy"] = $tstrOrderBy;

$tdataEoc_takuhai_return_items[".orderindexes"] = array();
$tdataEoc_takuhai_return_items[".orderindexes"][] = array(2, (0 ? "ASC" : "DESC"), "`id`");

$tdataEoc_takuhai_return_items[".sqlHead"] = "SELECT '' as `link`,  `id`,  `Eoc_takuhai_return_id`,  `product_id`,  `created_at`,  `created_by`,  `updated_at`,  `updated_by`";
$tdataEoc_takuhai_return_items[".sqlFrom"] = "FROM `Eoc_takuhai_return_items`";
$tdataEoc_takuhai_return_items[".sqlWhereExpr"] = "";
$tdataEoc_takuhai_return_items[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataEoc_takuhai_return_items[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataEoc_takuhai_return_items[".arrGroupsPerPage"] = $arrGPP;

$tdataEoc_takuhai_return_items[".highlightSearchResults"] = true;

$tableKeysEoc_takuhai_return_items = array();
$tableKeysEoc_takuhai_return_items[] = "id";
$tdataEoc_takuhai_return_items[".Keys"] = $tableKeysEoc_takuhai_return_items;

$tdataEoc_takuhai_return_items[".listFields"] = array();
$tdataEoc_takuhai_return_items[".listFields"][] = "link";
$tdataEoc_takuhai_return_items[".listFields"][] = "id";
$tdataEoc_takuhai_return_items[".listFields"][] = "Eoc_takuhai_return_id";
$tdataEoc_takuhai_return_items[".listFields"][] = "product_id";
$tdataEoc_takuhai_return_items[".listFields"][] = "created_by";
$tdataEoc_takuhai_return_items[".listFields"][] = "created_at";
$tdataEoc_takuhai_return_items[".listFields"][] = "updated_by";
$tdataEoc_takuhai_return_items[".listFields"][] = "updated_at";

$tdataEoc_takuhai_return_items[".hideMobileList"] = array();


$tdataEoc_takuhai_return_items[".viewFields"] = array();

$tdataEoc_takuhai_return_items[".addFields"] = array();

$tdataEoc_takuhai_return_items[".masterListFields"] = array();
$tdataEoc_takuhai_return_items[".masterListFields"][] = "link";
$tdataEoc_takuhai_return_items[".masterListFields"][] = "id";
$tdataEoc_takuhai_return_items[".masterListFields"][] = "Eoc_takuhai_return_id";
$tdataEoc_takuhai_return_items[".masterListFields"][] = "product_id";
$tdataEoc_takuhai_return_items[".masterListFields"][] = "created_at";
$tdataEoc_takuhai_return_items[".masterListFields"][] = "created_by";
$tdataEoc_takuhai_return_items[".masterListFields"][] = "updated_at";
$tdataEoc_takuhai_return_items[".masterListFields"][] = "updated_by";

$tdataEoc_takuhai_return_items[".inlineAddFields"] = array();

$tdataEoc_takuhai_return_items[".editFields"] = array();

$tdataEoc_takuhai_return_items[".inlineEditFields"] = array();

$tdataEoc_takuhai_return_items[".updateSelectedFields"] = array();


$tdataEoc_takuhai_return_items[".exportFields"] = array();
$tdataEoc_takuhai_return_items[".exportFields"][] = "link";
$tdataEoc_takuhai_return_items[".exportFields"][] = "id";
$tdataEoc_takuhai_return_items[".exportFields"][] = "Eoc_takuhai_return_id";
$tdataEoc_takuhai_return_items[".exportFields"][] = "product_id";
$tdataEoc_takuhai_return_items[".exportFields"][] = "created_at";
$tdataEoc_takuhai_return_items[".exportFields"][] = "created_by";
$tdataEoc_takuhai_return_items[".exportFields"][] = "updated_at";
$tdataEoc_takuhai_return_items[".exportFields"][] = "updated_by";

$tdataEoc_takuhai_return_items[".importFields"] = array();
$tdataEoc_takuhai_return_items[".importFields"][] = "link";
$tdataEoc_takuhai_return_items[".importFields"][] = "id";
$tdataEoc_takuhai_return_items[".importFields"][] = "Eoc_takuhai_return_id";
$tdataEoc_takuhai_return_items[".importFields"][] = "product_id";
$tdataEoc_takuhai_return_items[".importFields"][] = "created_at";
$tdataEoc_takuhai_return_items[".importFields"][] = "created_by";
$tdataEoc_takuhai_return_items[".importFields"][] = "updated_at";
$tdataEoc_takuhai_return_items[".importFields"][] = "updated_by";

$tdataEoc_takuhai_return_items[".printFields"] = array();

//	link
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "link";
	$fdata["GoodName"] = "link";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai_return_items","link");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "link";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "''";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
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
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataEoc_takuhai_return_items["link"] = $fdata;
//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "Eoc_takuhai_return_items";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai_return_items","id");
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




	$tdataEoc_takuhai_return_items["id"] = $fdata;
//	Eoc_takuhai_return_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Eoc_takuhai_return_id";
	$fdata["GoodName"] = "Eoc_takuhai_return_id";
	$fdata["ownerTable"] = "Eoc_takuhai_return_items";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai_return_items","Eoc_takuhai_return_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Eoc_takuhai_return_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_takuhai_return_id`";

	
	
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




	$tdataEoc_takuhai_return_items["Eoc_takuhai_return_id"] = $fdata;
//	product_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "product_id";
	$fdata["GoodName"] = "product_id";
	$fdata["ownerTable"] = "Eoc_takuhai_return_items";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai_return_items","product_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "product_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`product_id`";

	
	
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




	$tdataEoc_takuhai_return_items["product_id"] = $fdata;
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "Eoc_takuhai_return_items";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai_return_items","created_at");
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




	$tdataEoc_takuhai_return_items["created_at"] = $fdata;
//	created_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "created_by";
	$fdata["GoodName"] = "created_by";
	$fdata["ownerTable"] = "Eoc_takuhai_return_items";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai_return_items","created_by");
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




	$tdataEoc_takuhai_return_items["created_by"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "Eoc_takuhai_return_items";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai_return_items","updated_at");
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




	$tdataEoc_takuhai_return_items["updated_at"] = $fdata;
//	updated_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "updated_by";
	$fdata["GoodName"] = "updated_by";
	$fdata["ownerTable"] = "Eoc_takuhai_return_items";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai_return_items","updated_by");
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




	$tdataEoc_takuhai_return_items["updated_by"] = $fdata;


$tables_data["Eoc_takuhai_return_items"]=&$tdataEoc_takuhai_return_items;
$field_labels["Eoc_takuhai_return_items"] = &$fieldLabelsEoc_takuhai_return_items;
$fieldToolTips["Eoc_takuhai_return_items"] = &$fieldToolTipsEoc_takuhai_return_items;
$placeHolders["Eoc_takuhai_return_items"] = &$placeHoldersEoc_takuhai_return_items;
$page_titles["Eoc_takuhai_return_items"] = &$pageTitlesEoc_takuhai_return_items;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Eoc_takuhai_return_items"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["Eoc_takuhai_return_items"] = array();


	
				$strOriginalDetailsTable="Eoc_takuhai_return";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="Eoc_takuhai_return";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "Eoc_takuhai_return";
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
					$masterTablesData["Eoc_takuhai_return_items"][0] = $masterParams;
				$masterTablesData["Eoc_takuhai_return_items"][0]["masterKeys"] = array();
	$masterTablesData["Eoc_takuhai_return_items"][0]["masterKeys"][]="id";
				$masterTablesData["Eoc_takuhai_return_items"][0]["detailKeys"] = array();
	$masterTablesData["Eoc_takuhai_return_items"][0]["detailKeys"][]="Eoc_takuhai_return_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Eoc_takuhai_return_items()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "'' as `link`,  `id`,  `Eoc_takuhai_return_id`,  `product_id`,  `created_at`,  `created_by`,  `updated_at`,  `updated_by`";
$proto0["m_strFrom"] = "FROM `Eoc_takuhai_return_items`";
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
			$obj = new SQLNonParsed(array(
	"m_sql" => "''"
));

$proto6["m_sql"] = "''";
$proto6["m_srcTableName"] = "Eoc_takuhai_return_items";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "link";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "Eoc_takuhai_return_items",
	"m_srcTableName" => "Eoc_takuhai_return_items"
));

$proto8["m_sql"] = "`id`";
$proto8["m_srcTableName"] = "Eoc_takuhai_return_items";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Eoc_takuhai_return_id",
	"m_strTable" => "Eoc_takuhai_return_items",
	"m_srcTableName" => "Eoc_takuhai_return_items"
));

$proto10["m_sql"] = "`Eoc_takuhai_return_id`";
$proto10["m_srcTableName"] = "Eoc_takuhai_return_items";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "product_id",
	"m_strTable" => "Eoc_takuhai_return_items",
	"m_srcTableName" => "Eoc_takuhai_return_items"
));

$proto12["m_sql"] = "`product_id`";
$proto12["m_srcTableName"] = "Eoc_takuhai_return_items";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "Eoc_takuhai_return_items",
	"m_srcTableName" => "Eoc_takuhai_return_items"
));

$proto14["m_sql"] = "`created_at`";
$proto14["m_srcTableName"] = "Eoc_takuhai_return_items";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "created_by",
	"m_strTable" => "Eoc_takuhai_return_items",
	"m_srcTableName" => "Eoc_takuhai_return_items"
));

$proto16["m_sql"] = "`created_by`";
$proto16["m_srcTableName"] = "Eoc_takuhai_return_items";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "Eoc_takuhai_return_items",
	"m_srcTableName" => "Eoc_takuhai_return_items"
));

$proto18["m_sql"] = "`updated_at`";
$proto18["m_srcTableName"] = "Eoc_takuhai_return_items";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by",
	"m_strTable" => "Eoc_takuhai_return_items",
	"m_srcTableName" => "Eoc_takuhai_return_items"
));

$proto20["m_sql"] = "`updated_by`";
$proto20["m_srcTableName"] = "Eoc_takuhai_return_items";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "Eoc_takuhai_return_items";
$proto23["m_srcTableName"] = "Eoc_takuhai_return_items";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "id";
$proto23["m_columns"][] = "Eoc_takuhai_return_id";
$proto23["m_columns"][] = "product_id";
$proto23["m_columns"][] = "created_at";
$proto23["m_columns"][] = "created_by";
$proto23["m_columns"][] = "updated_at";
$proto23["m_columns"][] = "updated_by";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "`Eoc_takuhai_return_items`";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "Eoc_takuhai_return_items";
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
	"m_strTable" => "Eoc_takuhai_return_items",
	"m_srcTableName" => "Eoc_takuhai_return_items"
));

$proto26["m_column"]=$obj;
$proto26["m_bAsc"] = 0;
$proto26["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto26);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Eoc_takuhai_return_items";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Eoc_takuhai_return_items = createSqlQuery_Eoc_takuhai_return_items();


	
		;

								

$tdataEoc_takuhai_return_items[".sqlquery"] = $queryData_Eoc_takuhai_return_items;

$tableEvents["Eoc_takuhai_return_items"] = new eventsBase;
$tdataEoc_takuhai_return_items[".hasEvents"] = false;

?>