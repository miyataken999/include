<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamst_ebay_price = array();
	$tdatamst_ebay_price[".truncateText"] = true;
	$tdatamst_ebay_price[".NumberOfChars"] = 80;
	$tdatamst_ebay_price[".ShortName"] = "mst_ebay_price";
	$tdatamst_ebay_price[".OwnerID"] = "";
	$tdatamst_ebay_price[".OriginalTable"] = "mst_ebay_price";

//	field labels
$fieldLabelsmst_ebay_price = array();
$fieldToolTipsmst_ebay_price = array();
$pageTitlesmst_ebay_price = array();
$placeHoldersmst_ebay_price = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmst_ebay_price["Japanese"] = array();
	$fieldToolTipsmst_ebay_price["Japanese"] = array();
	$placeHoldersmst_ebay_price["Japanese"] = array();
	$pageTitlesmst_ebay_price["Japanese"] = array();
	$fieldLabelsmst_ebay_price["Japanese"]["id"] = "Id";
	$fieldToolTipsmst_ebay_price["Japanese"]["id"] = "";
	$placeHoldersmst_ebay_price["Japanese"]["id"] = "";
	$fieldLabelsmst_ebay_price["Japanese"]["category_id"] = "Category Id";
	$fieldToolTipsmst_ebay_price["Japanese"]["category_id"] = "";
	$placeHoldersmst_ebay_price["Japanese"]["category_id"] = "";
	$fieldLabelsmst_ebay_price["Japanese"]["sub_category_id"] = "Sub Category Id";
	$fieldToolTipsmst_ebay_price["Japanese"]["sub_category_id"] = "";
	$placeHoldersmst_ebay_price["Japanese"]["sub_category_id"] = "";
	$fieldLabelsmst_ebay_price["Japanese"]["price"] = "Price";
	$fieldToolTipsmst_ebay_price["Japanese"]["price"] = "";
	$placeHoldersmst_ebay_price["Japanese"]["price"] = "";
	$fieldLabelsmst_ebay_price["Japanese"]["not_exhibition"] = "Not Exhibition";
	$fieldToolTipsmst_ebay_price["Japanese"]["not_exhibition"] = "";
	$placeHoldersmst_ebay_price["Japanese"]["not_exhibition"] = "";
	$fieldLabelsmst_ebay_price["Japanese"]["sort"] = "Sort";
	$fieldToolTipsmst_ebay_price["Japanese"]["sort"] = "";
	$placeHoldersmst_ebay_price["Japanese"]["sort"] = "";
	$fieldLabelsmst_ebay_price["Japanese"]["update_by"] = "Update By";
	$fieldToolTipsmst_ebay_price["Japanese"]["update_by"] = "";
	$placeHoldersmst_ebay_price["Japanese"]["update_by"] = "";
	$fieldLabelsmst_ebay_price["Japanese"]["update_at"] = "Update At";
	$fieldToolTipsmst_ebay_price["Japanese"]["update_at"] = "";
	$placeHoldersmst_ebay_price["Japanese"]["update_at"] = "";
	$fieldLabelsmst_ebay_price["Japanese"]["create_by"] = "Create By";
	$fieldToolTipsmst_ebay_price["Japanese"]["create_by"] = "";
	$placeHoldersmst_ebay_price["Japanese"]["create_by"] = "";
	$fieldLabelsmst_ebay_price["Japanese"]["create_at"] = "Create At";
	$fieldToolTipsmst_ebay_price["Japanese"]["create_at"] = "";
	$placeHoldersmst_ebay_price["Japanese"]["create_at"] = "";
	if (count($fieldToolTipsmst_ebay_price["Japanese"]))
		$tdatamst_ebay_price[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmst_ebay_price[""] = array();
	$fieldToolTipsmst_ebay_price[""] = array();
	$placeHoldersmst_ebay_price[""] = array();
	$pageTitlesmst_ebay_price[""] = array();
	$fieldLabelsmst_ebay_price[""]["id"] = "Id";
	$fieldToolTipsmst_ebay_price[""]["id"] = "";
	$placeHoldersmst_ebay_price[""]["id"] = "";
	$fieldLabelsmst_ebay_price[""]["category_id"] = "Category Id";
	$fieldToolTipsmst_ebay_price[""]["category_id"] = "";
	$placeHoldersmst_ebay_price[""]["category_id"] = "";
	$fieldLabelsmst_ebay_price[""]["sub_category_id"] = "Sub Category Id";
	$fieldToolTipsmst_ebay_price[""]["sub_category_id"] = "";
	$placeHoldersmst_ebay_price[""]["sub_category_id"] = "";
	$fieldLabelsmst_ebay_price[""]["price"] = "Price";
	$fieldToolTipsmst_ebay_price[""]["price"] = "";
	$placeHoldersmst_ebay_price[""]["price"] = "";
	$fieldLabelsmst_ebay_price[""]["not_exhibition"] = "Not Exhibition";
	$fieldToolTipsmst_ebay_price[""]["not_exhibition"] = "";
	$placeHoldersmst_ebay_price[""]["not_exhibition"] = "";
	$fieldLabelsmst_ebay_price[""]["sort"] = "Sort";
	$fieldToolTipsmst_ebay_price[""]["sort"] = "";
	$placeHoldersmst_ebay_price[""]["sort"] = "";
	$fieldLabelsmst_ebay_price[""]["update_by"] = "Update By";
	$fieldToolTipsmst_ebay_price[""]["update_by"] = "";
	$placeHoldersmst_ebay_price[""]["update_by"] = "";
	$fieldLabelsmst_ebay_price[""]["update_at"] = "Update At";
	$fieldToolTipsmst_ebay_price[""]["update_at"] = "";
	$placeHoldersmst_ebay_price[""]["update_at"] = "";
	$fieldLabelsmst_ebay_price[""]["create_by"] = "Create By";
	$fieldToolTipsmst_ebay_price[""]["create_by"] = "";
	$placeHoldersmst_ebay_price[""]["create_by"] = "";
	$fieldLabelsmst_ebay_price[""]["create_at"] = "Create At";
	$fieldToolTipsmst_ebay_price[""]["create_at"] = "";
	$placeHoldersmst_ebay_price[""]["create_at"] = "";
	if (count($fieldToolTipsmst_ebay_price[""]))
		$tdatamst_ebay_price[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmst_ebay_price["English"] = array();
	$fieldToolTipsmst_ebay_price["English"] = array();
	$placeHoldersmst_ebay_price["English"] = array();
	$pageTitlesmst_ebay_price["English"] = array();
	$fieldLabelsmst_ebay_price["English"]["id"] = "Id";
	$fieldToolTipsmst_ebay_price["English"]["id"] = "";
	$placeHoldersmst_ebay_price["English"]["id"] = "";
	$fieldLabelsmst_ebay_price["English"]["category_id"] = "Category Id";
	$fieldToolTipsmst_ebay_price["English"]["category_id"] = "";
	$placeHoldersmst_ebay_price["English"]["category_id"] = "";
	$fieldLabelsmst_ebay_price["English"]["sub_category_id"] = "Sub Category Id";
	$fieldToolTipsmst_ebay_price["English"]["sub_category_id"] = "";
	$placeHoldersmst_ebay_price["English"]["sub_category_id"] = "";
	$fieldLabelsmst_ebay_price["English"]["price"] = "Price";
	$fieldToolTipsmst_ebay_price["English"]["price"] = "";
	$placeHoldersmst_ebay_price["English"]["price"] = "";
	$fieldLabelsmst_ebay_price["English"]["not_exhibition"] = "Not Exhibition";
	$fieldToolTipsmst_ebay_price["English"]["not_exhibition"] = "";
	$placeHoldersmst_ebay_price["English"]["not_exhibition"] = "";
	$fieldLabelsmst_ebay_price["English"]["sort"] = "Sort";
	$fieldToolTipsmst_ebay_price["English"]["sort"] = "";
	$placeHoldersmst_ebay_price["English"]["sort"] = "";
	$fieldLabelsmst_ebay_price["English"]["update_by"] = "Update By";
	$fieldToolTipsmst_ebay_price["English"]["update_by"] = "";
	$placeHoldersmst_ebay_price["English"]["update_by"] = "";
	$fieldLabelsmst_ebay_price["English"]["update_at"] = "Update At";
	$fieldToolTipsmst_ebay_price["English"]["update_at"] = "";
	$placeHoldersmst_ebay_price["English"]["update_at"] = "";
	$fieldLabelsmst_ebay_price["English"]["create_by"] = "Create By";
	$fieldToolTipsmst_ebay_price["English"]["create_by"] = "";
	$placeHoldersmst_ebay_price["English"]["create_by"] = "";
	$fieldLabelsmst_ebay_price["English"]["create_at"] = "Create At";
	$fieldToolTipsmst_ebay_price["English"]["create_at"] = "";
	$placeHoldersmst_ebay_price["English"]["create_at"] = "";
	if (count($fieldToolTipsmst_ebay_price["English"]))
		$tdatamst_ebay_price[".isUseToolTips"] = true;
}


	$tdatamst_ebay_price[".NCSearch"] = true;



$tdatamst_ebay_price[".shortTableName"] = "mst_ebay_price";
$tdatamst_ebay_price[".nSecOptions"] = 0;
$tdatamst_ebay_price[".recsPerRowPrint"] = 1;
$tdatamst_ebay_price[".mainTableOwnerID"] = "";
$tdatamst_ebay_price[".moveNext"] = 1;
$tdatamst_ebay_price[".entityType"] = 0;

$tdatamst_ebay_price[".strOriginalTableName"] = "mst_ebay_price";

	



$tdatamst_ebay_price[".showAddInPopup"] = false;

$tdatamst_ebay_price[".showEditInPopup"] = false;

$tdatamst_ebay_price[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamst_ebay_price[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamst_ebay_price[".fieldsForRegister"] = array();

$tdatamst_ebay_price[".listAjax"] = false;

	$tdatamst_ebay_price[".audit"] = true;

	$tdatamst_ebay_price[".locking"] = false;



$tdatamst_ebay_price[".list"] = true;

$tdatamst_ebay_price[".inlineEdit"] = true;


$tdatamst_ebay_price[".reorderRecordsByHeader"] = true;



$tdatamst_ebay_price[".inlineAdd"] = true;

$tdatamst_ebay_price[".import"] = true;

$tdatamst_ebay_price[".exportTo"] = true;


$tdatamst_ebay_price[".delete"] = true;

$tdatamst_ebay_price[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamst_ebay_price[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamst_ebay_price[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamst_ebay_price[".searchSaving"] = false;
//

$tdatamst_ebay_price[".showSearchPanel"] = true;
		$tdatamst_ebay_price[".flexibleSearch"] = true;

$tdatamst_ebay_price[".isUseAjaxSuggest"] = true;

$tdatamst_ebay_price[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatamst_ebay_price[".ajaxCodeSnippetAdded"] = false;

$tdatamst_ebay_price[".buttonsAdded"] = false;

$tdatamst_ebay_price[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamst_ebay_price[".isUseTimeForSearch"] = false;





$tdatamst_ebay_price[".allSearchFields"] = array();
$tdatamst_ebay_price[".filterFields"] = array();
$tdatamst_ebay_price[".requiredSearchFields"] = array();

$tdatamst_ebay_price[".allSearchFields"][] = "id";
	$tdatamst_ebay_price[".allSearchFields"][] = "category_id";
	$tdatamst_ebay_price[".allSearchFields"][] = "sub_category_id";
	$tdatamst_ebay_price[".allSearchFields"][] = "price";
	$tdatamst_ebay_price[".allSearchFields"][] = "not_exhibition";
	$tdatamst_ebay_price[".allSearchFields"][] = "sort";
	$tdatamst_ebay_price[".allSearchFields"][] = "update_by";
	$tdatamst_ebay_price[".allSearchFields"][] = "update_at";
	$tdatamst_ebay_price[".allSearchFields"][] = "create_by";
	$tdatamst_ebay_price[".allSearchFields"][] = "create_at";
	

$tdatamst_ebay_price[".googleLikeFields"] = array();
$tdatamst_ebay_price[".googleLikeFields"][] = "id";
$tdatamst_ebay_price[".googleLikeFields"][] = "category_id";
$tdatamst_ebay_price[".googleLikeFields"][] = "sub_category_id";
$tdatamst_ebay_price[".googleLikeFields"][] = "price";
$tdatamst_ebay_price[".googleLikeFields"][] = "not_exhibition";
$tdatamst_ebay_price[".googleLikeFields"][] = "sort";
$tdatamst_ebay_price[".googleLikeFields"][] = "update_by";
$tdatamst_ebay_price[".googleLikeFields"][] = "update_at";
$tdatamst_ebay_price[".googleLikeFields"][] = "create_by";
$tdatamst_ebay_price[".googleLikeFields"][] = "create_at";


$tdatamst_ebay_price[".advSearchFields"] = array();
$tdatamst_ebay_price[".advSearchFields"][] = "id";
$tdatamst_ebay_price[".advSearchFields"][] = "category_id";
$tdatamst_ebay_price[".advSearchFields"][] = "sub_category_id";
$tdatamst_ebay_price[".advSearchFields"][] = "price";
$tdatamst_ebay_price[".advSearchFields"][] = "not_exhibition";
$tdatamst_ebay_price[".advSearchFields"][] = "sort";
$tdatamst_ebay_price[".advSearchFields"][] = "update_by";
$tdatamst_ebay_price[".advSearchFields"][] = "update_at";
$tdatamst_ebay_price[".advSearchFields"][] = "create_by";
$tdatamst_ebay_price[".advSearchFields"][] = "create_at";

$tdatamst_ebay_price[".tableType"] = "list";

$tdatamst_ebay_price[".printerPageOrientation"] = 0;
$tdatamst_ebay_price[".nPrinterPageScale"] = 100;

$tdatamst_ebay_price[".nPrinterSplitRecords"] = 40;

$tdatamst_ebay_price[".nPrinterPDFSplitRecords"] = 40;



$tdatamst_ebay_price[".geocodingEnabled"] = false;





$tdatamst_ebay_price[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamst_ebay_price[".pageSize"] = 20;

$tdatamst_ebay_price[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamst_ebay_price[".strOrderBy"] = $tstrOrderBy;

$tdatamst_ebay_price[".orderindexes"] = array();

$tdatamst_ebay_price[".sqlHead"] = "SELECT `id`,  	`category_id`,  	`sub_category_id`,  	`price`,  	`not_exhibition`,  	`sort`,  	`update_by`,  	`update_at`,  	`create_by`,  	`create_at`";
$tdatamst_ebay_price[".sqlFrom"] = "FROM `mst_ebay_price`";
$tdatamst_ebay_price[".sqlWhereExpr"] = "";
$tdatamst_ebay_price[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamst_ebay_price[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamst_ebay_price[".arrGroupsPerPage"] = $arrGPP;

$tdatamst_ebay_price[".highlightSearchResults"] = true;

$tableKeysmst_ebay_price = array();
$tableKeysmst_ebay_price[] = "id";
$tdatamst_ebay_price[".Keys"] = $tableKeysmst_ebay_price;

$tdatamst_ebay_price[".listFields"] = array();
$tdatamst_ebay_price[".listFields"][] = "id";
$tdatamst_ebay_price[".listFields"][] = "category_id";
$tdatamst_ebay_price[".listFields"][] = "sub_category_id";
$tdatamst_ebay_price[".listFields"][] = "price";
$tdatamst_ebay_price[".listFields"][] = "not_exhibition";
$tdatamst_ebay_price[".listFields"][] = "sort";
$tdatamst_ebay_price[".listFields"][] = "update_by";
$tdatamst_ebay_price[".listFields"][] = "update_at";
$tdatamst_ebay_price[".listFields"][] = "create_by";
$tdatamst_ebay_price[".listFields"][] = "create_at";

$tdatamst_ebay_price[".hideMobileList"] = array();


$tdatamst_ebay_price[".viewFields"] = array();

$tdatamst_ebay_price[".addFields"] = array();

$tdatamst_ebay_price[".masterListFields"] = array();
$tdatamst_ebay_price[".masterListFields"][] = "id";
$tdatamst_ebay_price[".masterListFields"][] = "category_id";
$tdatamst_ebay_price[".masterListFields"][] = "sub_category_id";
$tdatamst_ebay_price[".masterListFields"][] = "price";
$tdatamst_ebay_price[".masterListFields"][] = "not_exhibition";
$tdatamst_ebay_price[".masterListFields"][] = "sort";
$tdatamst_ebay_price[".masterListFields"][] = "update_by";
$tdatamst_ebay_price[".masterListFields"][] = "update_at";
$tdatamst_ebay_price[".masterListFields"][] = "create_by";
$tdatamst_ebay_price[".masterListFields"][] = "create_at";

$tdatamst_ebay_price[".inlineAddFields"] = array();
$tdatamst_ebay_price[".inlineAddFields"][] = "category_id";
$tdatamst_ebay_price[".inlineAddFields"][] = "sub_category_id";
$tdatamst_ebay_price[".inlineAddFields"][] = "price";
$tdatamst_ebay_price[".inlineAddFields"][] = "not_exhibition";
$tdatamst_ebay_price[".inlineAddFields"][] = "sort";
$tdatamst_ebay_price[".inlineAddFields"][] = "update_by";
$tdatamst_ebay_price[".inlineAddFields"][] = "update_at";
$tdatamst_ebay_price[".inlineAddFields"][] = "create_by";
$tdatamst_ebay_price[".inlineAddFields"][] = "create_at";

$tdatamst_ebay_price[".editFields"] = array();

$tdatamst_ebay_price[".inlineEditFields"] = array();
$tdatamst_ebay_price[".inlineEditFields"][] = "category_id";
$tdatamst_ebay_price[".inlineEditFields"][] = "sub_category_id";
$tdatamst_ebay_price[".inlineEditFields"][] = "price";
$tdatamst_ebay_price[".inlineEditFields"][] = "not_exhibition";
$tdatamst_ebay_price[".inlineEditFields"][] = "sort";
$tdatamst_ebay_price[".inlineEditFields"][] = "update_by";
$tdatamst_ebay_price[".inlineEditFields"][] = "update_at";
$tdatamst_ebay_price[".inlineEditFields"][] = "create_by";
$tdatamst_ebay_price[".inlineEditFields"][] = "create_at";

$tdatamst_ebay_price[".updateSelectedFields"] = array();


$tdatamst_ebay_price[".exportFields"] = array();
$tdatamst_ebay_price[".exportFields"][] = "id";
$tdatamst_ebay_price[".exportFields"][] = "category_id";
$tdatamst_ebay_price[".exportFields"][] = "sub_category_id";
$tdatamst_ebay_price[".exportFields"][] = "price";
$tdatamst_ebay_price[".exportFields"][] = "not_exhibition";
$tdatamst_ebay_price[".exportFields"][] = "sort";
$tdatamst_ebay_price[".exportFields"][] = "update_by";
$tdatamst_ebay_price[".exportFields"][] = "update_at";
$tdatamst_ebay_price[".exportFields"][] = "create_by";
$tdatamst_ebay_price[".exportFields"][] = "create_at";

$tdatamst_ebay_price[".importFields"] = array();
$tdatamst_ebay_price[".importFields"][] = "id";
$tdatamst_ebay_price[".importFields"][] = "category_id";
$tdatamst_ebay_price[".importFields"][] = "sub_category_id";
$tdatamst_ebay_price[".importFields"][] = "price";
$tdatamst_ebay_price[".importFields"][] = "not_exhibition";
$tdatamst_ebay_price[".importFields"][] = "sort";
$tdatamst_ebay_price[".importFields"][] = "update_by";
$tdatamst_ebay_price[".importFields"][] = "update_at";
$tdatamst_ebay_price[".importFields"][] = "create_by";
$tdatamst_ebay_price[".importFields"][] = "create_at";

$tdatamst_ebay_price[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "mst_ebay_price";
	$fdata["Label"] = GetFieldLabel("mst_ebay_price","id");
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




	$tdatamst_ebay_price["id"] = $fdata;
//	category_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "category_id";
	$fdata["GoodName"] = "category_id";
	$fdata["ownerTable"] = "mst_ebay_price";
	$fdata["Label"] = GetFieldLabel("mst_ebay_price","category_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "category_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`category_id`";

	
	
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
	$edata["LookupTable"] = "store_categories";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "category_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "category_name";

	
	$edata["LookupOrderBy"] = "sort";

	
	
	
	
				//dependent dropdowns
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "sub_category_id";

	
	
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




	$tdatamst_ebay_price["category_id"] = $fdata;
//	sub_category_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sub_category_id";
	$fdata["GoodName"] = "sub_category_id";
	$fdata["ownerTable"] = "mst_ebay_price";
	$fdata["Label"] = GetFieldLabel("mst_ebay_price","sub_category_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "sub_category_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`sub_category_id`";

	
	
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
	$edata["LookupTable"] = "store_sub_categories";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "name";

	
	$edata["LookupOrderBy"] = "sort";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "category_id", "lookup" => "category_id" );

	
	

	
	
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




	$tdatamst_ebay_price["sub_category_id"] = $fdata;
//	price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "price";
	$fdata["GoodName"] = "price";
	$fdata["ownerTable"] = "mst_ebay_price";
	$fdata["Label"] = GetFieldLabel("mst_ebay_price","price");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "price";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`price`";

	
	
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




	$tdatamst_ebay_price["price"] = $fdata;
//	not_exhibition
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "not_exhibition";
	$fdata["GoodName"] = "not_exhibition";
	$fdata["ownerTable"] = "mst_ebay_price";
	$fdata["Label"] = GetFieldLabel("mst_ebay_price","not_exhibition");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "not_exhibition";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`not_exhibition`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
	



	
	
	
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




	$tdatamst_ebay_price["not_exhibition"] = $fdata;
//	sort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "sort";
	$fdata["GoodName"] = "sort";
	$fdata["ownerTable"] = "mst_ebay_price";
	$fdata["Label"] = GetFieldLabel("mst_ebay_price","sort");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "sort";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`sort`";

	
	
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




	$tdatamst_ebay_price["sort"] = $fdata;
//	update_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "update_by";
	$fdata["GoodName"] = "update_by";
	$fdata["ownerTable"] = "mst_ebay_price";
	$fdata["Label"] = GetFieldLabel("mst_ebay_price","update_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

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




	$tdatamst_ebay_price["update_by"] = $fdata;
//	update_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "update_at";
	$fdata["GoodName"] = "update_at";
	$fdata["ownerTable"] = "mst_ebay_price";
	$fdata["Label"] = GetFieldLabel("mst_ebay_price","update_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

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




	$tdatamst_ebay_price["update_at"] = $fdata;
//	create_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "create_by";
	$fdata["GoodName"] = "create_by";
	$fdata["ownerTable"] = "mst_ebay_price";
	$fdata["Label"] = GetFieldLabel("mst_ebay_price","create_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

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




	$tdatamst_ebay_price["create_by"] = $fdata;
//	create_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "create_at";
	$fdata["GoodName"] = "create_at";
	$fdata["ownerTable"] = "mst_ebay_price";
	$fdata["Label"] = GetFieldLabel("mst_ebay_price","create_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

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




	$tdatamst_ebay_price["create_at"] = $fdata;


$tables_data["mst_ebay_price"]=&$tdatamst_ebay_price;
$field_labels["mst_ebay_price"] = &$fieldLabelsmst_ebay_price;
$fieldToolTips["mst_ebay_price"] = &$fieldToolTipsmst_ebay_price;
$placeHolders["mst_ebay_price"] = &$placeHoldersmst_ebay_price;
$page_titles["mst_ebay_price"] = &$pageTitlesmst_ebay_price;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mst_ebay_price"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mst_ebay_price"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mst_ebay_price()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  	`category_id`,  	`sub_category_id`,  	`price`,  	`not_exhibition`,  	`sort`,  	`update_by`,  	`update_at`,  	`create_by`,  	`create_at`";
$proto0["m_strFrom"] = "FROM `mst_ebay_price`";
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
	"m_strTable" => "mst_ebay_price",
	"m_srcTableName" => "mst_ebay_price"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "mst_ebay_price";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "category_id",
	"m_strTable" => "mst_ebay_price",
	"m_srcTableName" => "mst_ebay_price"
));

$proto8["m_sql"] = "`category_id`";
$proto8["m_srcTableName"] = "mst_ebay_price";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "sub_category_id",
	"m_strTable" => "mst_ebay_price",
	"m_srcTableName" => "mst_ebay_price"
));

$proto10["m_sql"] = "`sub_category_id`";
$proto10["m_srcTableName"] = "mst_ebay_price";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "price",
	"m_strTable" => "mst_ebay_price",
	"m_srcTableName" => "mst_ebay_price"
));

$proto12["m_sql"] = "`price`";
$proto12["m_srcTableName"] = "mst_ebay_price";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "not_exhibition",
	"m_strTable" => "mst_ebay_price",
	"m_srcTableName" => "mst_ebay_price"
));

$proto14["m_sql"] = "`not_exhibition`";
$proto14["m_srcTableName"] = "mst_ebay_price";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "sort",
	"m_strTable" => "mst_ebay_price",
	"m_srcTableName" => "mst_ebay_price"
));

$proto16["m_sql"] = "`sort`";
$proto16["m_srcTableName"] = "mst_ebay_price";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "update_by",
	"m_strTable" => "mst_ebay_price",
	"m_srcTableName" => "mst_ebay_price"
));

$proto18["m_sql"] = "`update_by`";
$proto18["m_srcTableName"] = "mst_ebay_price";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "update_at",
	"m_strTable" => "mst_ebay_price",
	"m_srcTableName" => "mst_ebay_price"
));

$proto20["m_sql"] = "`update_at`";
$proto20["m_srcTableName"] = "mst_ebay_price";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "create_by",
	"m_strTable" => "mst_ebay_price",
	"m_srcTableName" => "mst_ebay_price"
));

$proto22["m_sql"] = "`create_by`";
$proto22["m_srcTableName"] = "mst_ebay_price";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "create_at",
	"m_strTable" => "mst_ebay_price",
	"m_srcTableName" => "mst_ebay_price"
));

$proto24["m_sql"] = "`create_at`";
$proto24["m_srcTableName"] = "mst_ebay_price";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "mst_ebay_price";
$proto27["m_srcTableName"] = "mst_ebay_price";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "id";
$proto27["m_columns"][] = "category_id";
$proto27["m_columns"][] = "sub_category_id";
$proto27["m_columns"][] = "price";
$proto27["m_columns"][] = "not_exhibition";
$proto27["m_columns"][] = "sort";
$proto27["m_columns"][] = "update_by";
$proto27["m_columns"][] = "update_at";
$proto27["m_columns"][] = "create_by";
$proto27["m_columns"][] = "create_at";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "`mst_ebay_price`";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "mst_ebay_price";
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
$proto0["m_srcTableName"]="mst_ebay_price";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mst_ebay_price = createSqlQuery_mst_ebay_price();


	
		;

										

$tdatamst_ebay_price[".sqlquery"] = $queryData_mst_ebay_price;

include_once(getabspath("include/mst_ebay_price_events.php"));
$tableEvents["mst_ebay_price"] = new eventclass_mst_ebay_price;
$tdatamst_ebay_price[".hasEvents"] = true;

?>