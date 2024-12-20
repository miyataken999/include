<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamst_jigane_sheet = array();
	$tdatamst_jigane_sheet[".truncateText"] = true;
	$tdatamst_jigane_sheet[".NumberOfChars"] = 80;
	$tdatamst_jigane_sheet[".ShortName"] = "mst_jigane_sheet";
	$tdatamst_jigane_sheet[".OwnerID"] = "";
	$tdatamst_jigane_sheet[".OriginalTable"] = "mst_jigane_sheet";

//	field labels
$fieldLabelsmst_jigane_sheet = array();
$fieldToolTipsmst_jigane_sheet = array();
$pageTitlesmst_jigane_sheet = array();
$placeHoldersmst_jigane_sheet = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmst_jigane_sheet["Japanese"] = array();
	$fieldToolTipsmst_jigane_sheet["Japanese"] = array();
	$placeHoldersmst_jigane_sheet["Japanese"] = array();
	$pageTitlesmst_jigane_sheet["Japanese"] = array();
	$fieldLabelsmst_jigane_sheet["Japanese"]["product_id"] = "Product Id";
	$fieldToolTipsmst_jigane_sheet["Japanese"]["product_id"] = "";
	$placeHoldersmst_jigane_sheet["Japanese"]["product_id"] = "";
	$fieldLabelsmst_jigane_sheet["Japanese"]["sheet_title"] = "Sheet Title";
	$fieldToolTipsmst_jigane_sheet["Japanese"]["sheet_title"] = "";
	$placeHoldersmst_jigane_sheet["Japanese"]["sheet_title"] = "";
	$fieldLabelsmst_jigane_sheet["Japanese"]["url_id"] = "Url Id";
	$fieldToolTipsmst_jigane_sheet["Japanese"]["url_id"] = "";
	$placeHoldersmst_jigane_sheet["Japanese"]["url_id"] = "";
	$fieldLabelsmst_jigane_sheet["Japanese"]["sheet_id"] = "Sheet Id";
	$fieldToolTipsmst_jigane_sheet["Japanese"]["sheet_id"] = "";
	$placeHoldersmst_jigane_sheet["Japanese"]["sheet_id"] = "";
	$fieldLabelsmst_jigane_sheet["Japanese"]["sheet_name"] = "Sheet Name";
	$fieldToolTipsmst_jigane_sheet["Japanese"]["sheet_name"] = "";
	$placeHoldersmst_jigane_sheet["Japanese"]["sheet_name"] = "";
	$fieldLabelsmst_jigane_sheet["Japanese"]["sheet_url"] = "Sheet Url";
	$fieldToolTipsmst_jigane_sheet["Japanese"]["sheet_url"] = "";
	$placeHoldersmst_jigane_sheet["Japanese"]["sheet_url"] = "";
	$fieldLabelsmst_jigane_sheet["Japanese"]["update_by"] = "Update By";
	$fieldToolTipsmst_jigane_sheet["Japanese"]["update_by"] = "";
	$placeHoldersmst_jigane_sheet["Japanese"]["update_by"] = "";
	$fieldLabelsmst_jigane_sheet["Japanese"]["update_at"] = "Update At";
	$fieldToolTipsmst_jigane_sheet["Japanese"]["update_at"] = "";
	$placeHoldersmst_jigane_sheet["Japanese"]["update_at"] = "";
	$fieldLabelsmst_jigane_sheet["Japanese"]["create_by"] = "Create By";
	$fieldToolTipsmst_jigane_sheet["Japanese"]["create_by"] = "";
	$placeHoldersmst_jigane_sheet["Japanese"]["create_by"] = "";
	$fieldLabelsmst_jigane_sheet["Japanese"]["create_at"] = "Create At";
	$fieldToolTipsmst_jigane_sheet["Japanese"]["create_at"] = "";
	$placeHoldersmst_jigane_sheet["Japanese"]["create_at"] = "";
	if (count($fieldToolTipsmst_jigane_sheet["Japanese"]))
		$tdatamst_jigane_sheet[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmst_jigane_sheet[""] = array();
	$fieldToolTipsmst_jigane_sheet[""] = array();
	$placeHoldersmst_jigane_sheet[""] = array();
	$pageTitlesmst_jigane_sheet[""] = array();
	$fieldLabelsmst_jigane_sheet[""]["product_id"] = "Product Id";
	$fieldToolTipsmst_jigane_sheet[""]["product_id"] = "";
	$placeHoldersmst_jigane_sheet[""]["product_id"] = "";
	$fieldLabelsmst_jigane_sheet[""]["sheet_title"] = "Sheet Title";
	$fieldToolTipsmst_jigane_sheet[""]["sheet_title"] = "";
	$placeHoldersmst_jigane_sheet[""]["sheet_title"] = "";
	$fieldLabelsmst_jigane_sheet[""]["url_id"] = "Url Id";
	$fieldToolTipsmst_jigane_sheet[""]["url_id"] = "";
	$placeHoldersmst_jigane_sheet[""]["url_id"] = "";
	$fieldLabelsmst_jigane_sheet[""]["sheet_id"] = "Sheet Id";
	$fieldToolTipsmst_jigane_sheet[""]["sheet_id"] = "";
	$placeHoldersmst_jigane_sheet[""]["sheet_id"] = "";
	$fieldLabelsmst_jigane_sheet[""]["sheet_name"] = "Sheet Name";
	$fieldToolTipsmst_jigane_sheet[""]["sheet_name"] = "";
	$placeHoldersmst_jigane_sheet[""]["sheet_name"] = "";
	$fieldLabelsmst_jigane_sheet[""]["sheet_url"] = "Sheet Url";
	$fieldToolTipsmst_jigane_sheet[""]["sheet_url"] = "";
	$placeHoldersmst_jigane_sheet[""]["sheet_url"] = "";
	$fieldLabelsmst_jigane_sheet[""]["update_by"] = "Update By";
	$fieldToolTipsmst_jigane_sheet[""]["update_by"] = "";
	$placeHoldersmst_jigane_sheet[""]["update_by"] = "";
	$fieldLabelsmst_jigane_sheet[""]["update_at"] = "Update At";
	$fieldToolTipsmst_jigane_sheet[""]["update_at"] = "";
	$placeHoldersmst_jigane_sheet[""]["update_at"] = "";
	$fieldLabelsmst_jigane_sheet[""]["create_by"] = "Create By";
	$fieldToolTipsmst_jigane_sheet[""]["create_by"] = "";
	$placeHoldersmst_jigane_sheet[""]["create_by"] = "";
	$fieldLabelsmst_jigane_sheet[""]["create_at"] = "Create At";
	$fieldToolTipsmst_jigane_sheet[""]["create_at"] = "";
	$placeHoldersmst_jigane_sheet[""]["create_at"] = "";
	if (count($fieldToolTipsmst_jigane_sheet[""]))
		$tdatamst_jigane_sheet[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmst_jigane_sheet["English"] = array();
	$fieldToolTipsmst_jigane_sheet["English"] = array();
	$placeHoldersmst_jigane_sheet["English"] = array();
	$pageTitlesmst_jigane_sheet["English"] = array();
	$fieldLabelsmst_jigane_sheet["English"]["product_id"] = "Product Id";
	$fieldToolTipsmst_jigane_sheet["English"]["product_id"] = "";
	$placeHoldersmst_jigane_sheet["English"]["product_id"] = "";
	$fieldLabelsmst_jigane_sheet["English"]["sheet_title"] = "Sheet Title";
	$fieldToolTipsmst_jigane_sheet["English"]["sheet_title"] = "";
	$placeHoldersmst_jigane_sheet["English"]["sheet_title"] = "";
	$fieldLabelsmst_jigane_sheet["English"]["url_id"] = "Url Id";
	$fieldToolTipsmst_jigane_sheet["English"]["url_id"] = "";
	$placeHoldersmst_jigane_sheet["English"]["url_id"] = "";
	$fieldLabelsmst_jigane_sheet["English"]["sheet_id"] = "Sheet Id";
	$fieldToolTipsmst_jigane_sheet["English"]["sheet_id"] = "";
	$placeHoldersmst_jigane_sheet["English"]["sheet_id"] = "";
	$fieldLabelsmst_jigane_sheet["English"]["sheet_name"] = "Sheet Name";
	$fieldToolTipsmst_jigane_sheet["English"]["sheet_name"] = "";
	$placeHoldersmst_jigane_sheet["English"]["sheet_name"] = "";
	$fieldLabelsmst_jigane_sheet["English"]["sheet_url"] = "Sheet Url";
	$fieldToolTipsmst_jigane_sheet["English"]["sheet_url"] = "";
	$placeHoldersmst_jigane_sheet["English"]["sheet_url"] = "";
	$fieldLabelsmst_jigane_sheet["English"]["update_by"] = "Update By";
	$fieldToolTipsmst_jigane_sheet["English"]["update_by"] = "";
	$placeHoldersmst_jigane_sheet["English"]["update_by"] = "";
	$fieldLabelsmst_jigane_sheet["English"]["update_at"] = "Update At";
	$fieldToolTipsmst_jigane_sheet["English"]["update_at"] = "";
	$placeHoldersmst_jigane_sheet["English"]["update_at"] = "";
	$fieldLabelsmst_jigane_sheet["English"]["create_by"] = "Create By";
	$fieldToolTipsmst_jigane_sheet["English"]["create_by"] = "";
	$placeHoldersmst_jigane_sheet["English"]["create_by"] = "";
	$fieldLabelsmst_jigane_sheet["English"]["create_at"] = "Create At";
	$fieldToolTipsmst_jigane_sheet["English"]["create_at"] = "";
	$placeHoldersmst_jigane_sheet["English"]["create_at"] = "";
	if (count($fieldToolTipsmst_jigane_sheet["English"]))
		$tdatamst_jigane_sheet[".isUseToolTips"] = true;
}


	$tdatamst_jigane_sheet[".NCSearch"] = true;



$tdatamst_jigane_sheet[".shortTableName"] = "mst_jigane_sheet";
$tdatamst_jigane_sheet[".nSecOptions"] = 0;
$tdatamst_jigane_sheet[".recsPerRowPrint"] = 1;
$tdatamst_jigane_sheet[".mainTableOwnerID"] = "";
$tdatamst_jigane_sheet[".moveNext"] = 1;
$tdatamst_jigane_sheet[".entityType"] = 0;

$tdatamst_jigane_sheet[".strOriginalTableName"] = "mst_jigane_sheet";

	



$tdatamst_jigane_sheet[".showAddInPopup"] = false;

$tdatamst_jigane_sheet[".showEditInPopup"] = false;

$tdatamst_jigane_sheet[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamst_jigane_sheet[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamst_jigane_sheet[".fieldsForRegister"] = array();

$tdatamst_jigane_sheet[".listAjax"] = false;

	$tdatamst_jigane_sheet[".audit"] = false;

	$tdatamst_jigane_sheet[".locking"] = false;



$tdatamst_jigane_sheet[".list"] = true;



$tdatamst_jigane_sheet[".reorderRecordsByHeader"] = true;








$tdatamst_jigane_sheet[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamst_jigane_sheet[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamst_jigane_sheet[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamst_jigane_sheet[".searchSaving"] = false;
//

$tdatamst_jigane_sheet[".showSearchPanel"] = true;
		$tdatamst_jigane_sheet[".flexibleSearch"] = true;

$tdatamst_jigane_sheet[".isUseAjaxSuggest"] = true;

$tdatamst_jigane_sheet[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatamst_jigane_sheet[".ajaxCodeSnippetAdded"] = false;

$tdatamst_jigane_sheet[".buttonsAdded"] = false;

$tdatamst_jigane_sheet[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamst_jigane_sheet[".isUseTimeForSearch"] = false;





$tdatamst_jigane_sheet[".allSearchFields"] = array();
$tdatamst_jigane_sheet[".filterFields"] = array();
$tdatamst_jigane_sheet[".requiredSearchFields"] = array();

$tdatamst_jigane_sheet[".allSearchFields"][] = "product_id";
	$tdatamst_jigane_sheet[".allSearchFields"][] = "sheet_title";
	$tdatamst_jigane_sheet[".allSearchFields"][] = "url_id";
	$tdatamst_jigane_sheet[".allSearchFields"][] = "sheet_id";
	$tdatamst_jigane_sheet[".allSearchFields"][] = "sheet_name";
	$tdatamst_jigane_sheet[".allSearchFields"][] = "sheet_url";
	$tdatamst_jigane_sheet[".allSearchFields"][] = "update_by";
	$tdatamst_jigane_sheet[".allSearchFields"][] = "update_at";
	$tdatamst_jigane_sheet[".allSearchFields"][] = "create_by";
	$tdatamst_jigane_sheet[".allSearchFields"][] = "create_at";
	

$tdatamst_jigane_sheet[".googleLikeFields"] = array();
$tdatamst_jigane_sheet[".googleLikeFields"][] = "product_id";
$tdatamst_jigane_sheet[".googleLikeFields"][] = "sheet_title";
$tdatamst_jigane_sheet[".googleLikeFields"][] = "url_id";
$tdatamst_jigane_sheet[".googleLikeFields"][] = "sheet_id";
$tdatamst_jigane_sheet[".googleLikeFields"][] = "sheet_name";
$tdatamst_jigane_sheet[".googleLikeFields"][] = "sheet_url";
$tdatamst_jigane_sheet[".googleLikeFields"][] = "update_by";
$tdatamst_jigane_sheet[".googleLikeFields"][] = "update_at";
$tdatamst_jigane_sheet[".googleLikeFields"][] = "create_by";
$tdatamst_jigane_sheet[".googleLikeFields"][] = "create_at";


$tdatamst_jigane_sheet[".advSearchFields"] = array();
$tdatamst_jigane_sheet[".advSearchFields"][] = "product_id";
$tdatamst_jigane_sheet[".advSearchFields"][] = "sheet_title";
$tdatamst_jigane_sheet[".advSearchFields"][] = "url_id";
$tdatamst_jigane_sheet[".advSearchFields"][] = "sheet_id";
$tdatamst_jigane_sheet[".advSearchFields"][] = "sheet_name";
$tdatamst_jigane_sheet[".advSearchFields"][] = "sheet_url";
$tdatamst_jigane_sheet[".advSearchFields"][] = "update_by";
$tdatamst_jigane_sheet[".advSearchFields"][] = "update_at";
$tdatamst_jigane_sheet[".advSearchFields"][] = "create_by";
$tdatamst_jigane_sheet[".advSearchFields"][] = "create_at";

$tdatamst_jigane_sheet[".tableType"] = "list";

$tdatamst_jigane_sheet[".printerPageOrientation"] = 0;
$tdatamst_jigane_sheet[".nPrinterPageScale"] = 100;

$tdatamst_jigane_sheet[".nPrinterSplitRecords"] = 40;

$tdatamst_jigane_sheet[".nPrinterPDFSplitRecords"] = 40;



$tdatamst_jigane_sheet[".geocodingEnabled"] = false;





$tdatamst_jigane_sheet[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamst_jigane_sheet[".pageSize"] = 20;

$tdatamst_jigane_sheet[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamst_jigane_sheet[".strOrderBy"] = $tstrOrderBy;

$tdatamst_jigane_sheet[".orderindexes"] = array();

$tdatamst_jigane_sheet[".sqlHead"] = "SELECT `product_id`,  	`sheet_title`,  	`url_id`,  	`sheet_id`,  	`sheet_name`,  	`sheet_url`,  	`update_by`,  	`update_at`,  	`create_by`,  	`create_at`";
$tdatamst_jigane_sheet[".sqlFrom"] = "FROM `mst_jigane_sheet`";
$tdatamst_jigane_sheet[".sqlWhereExpr"] = "";
$tdatamst_jigane_sheet[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamst_jigane_sheet[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamst_jigane_sheet[".arrGroupsPerPage"] = $arrGPP;

$tdatamst_jigane_sheet[".highlightSearchResults"] = true;

$tableKeysmst_jigane_sheet = array();
$tableKeysmst_jigane_sheet[] = "product_id";
$tdatamst_jigane_sheet[".Keys"] = $tableKeysmst_jigane_sheet;

$tdatamst_jigane_sheet[".listFields"] = array();
$tdatamst_jigane_sheet[".listFields"][] = "product_id";
$tdatamst_jigane_sheet[".listFields"][] = "sheet_title";
$tdatamst_jigane_sheet[".listFields"][] = "url_id";
$tdatamst_jigane_sheet[".listFields"][] = "sheet_id";
$tdatamst_jigane_sheet[".listFields"][] = "sheet_name";
$tdatamst_jigane_sheet[".listFields"][] = "sheet_url";
$tdatamst_jigane_sheet[".listFields"][] = "update_by";
$tdatamst_jigane_sheet[".listFields"][] = "update_at";
$tdatamst_jigane_sheet[".listFields"][] = "create_by";
$tdatamst_jigane_sheet[".listFields"][] = "create_at";

$tdatamst_jigane_sheet[".hideMobileList"] = array();


$tdatamst_jigane_sheet[".viewFields"] = array();

$tdatamst_jigane_sheet[".addFields"] = array();

$tdatamst_jigane_sheet[".masterListFields"] = array();
$tdatamst_jigane_sheet[".masterListFields"][] = "product_id";
$tdatamst_jigane_sheet[".masterListFields"][] = "sheet_title";
$tdatamst_jigane_sheet[".masterListFields"][] = "url_id";
$tdatamst_jigane_sheet[".masterListFields"][] = "sheet_id";
$tdatamst_jigane_sheet[".masterListFields"][] = "sheet_name";
$tdatamst_jigane_sheet[".masterListFields"][] = "sheet_url";
$tdatamst_jigane_sheet[".masterListFields"][] = "update_by";
$tdatamst_jigane_sheet[".masterListFields"][] = "update_at";
$tdatamst_jigane_sheet[".masterListFields"][] = "create_by";
$tdatamst_jigane_sheet[".masterListFields"][] = "create_at";

$tdatamst_jigane_sheet[".inlineAddFields"] = array();

$tdatamst_jigane_sheet[".editFields"] = array();

$tdatamst_jigane_sheet[".inlineEditFields"] = array();

$tdatamst_jigane_sheet[".updateSelectedFields"] = array();


$tdatamst_jigane_sheet[".exportFields"] = array();

$tdatamst_jigane_sheet[".importFields"] = array();

$tdatamst_jigane_sheet[".printFields"] = array();

//	product_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "product_id";
	$fdata["GoodName"] = "product_id";
	$fdata["ownerTable"] = "mst_jigane_sheet";
	$fdata["Label"] = GetFieldLabel("mst_jigane_sheet","product_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdatamst_jigane_sheet["product_id"] = $fdata;
//	sheet_title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "sheet_title";
	$fdata["GoodName"] = "sheet_title";
	$fdata["ownerTable"] = "mst_jigane_sheet";
	$fdata["Label"] = GetFieldLabel("mst_jigane_sheet","sheet_title");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "sheet_title";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`sheet_title`";

	
	
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




	$tdatamst_jigane_sheet["sheet_title"] = $fdata;
//	url_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "url_id";
	$fdata["GoodName"] = "url_id";
	$fdata["ownerTable"] = "mst_jigane_sheet";
	$fdata["Label"] = GetFieldLabel("mst_jigane_sheet","url_id");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "url_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`url_id`";

	
	
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




	$tdatamst_jigane_sheet["url_id"] = $fdata;
//	sheet_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "sheet_id";
	$fdata["GoodName"] = "sheet_id";
	$fdata["ownerTable"] = "mst_jigane_sheet";
	$fdata["Label"] = GetFieldLabel("mst_jigane_sheet","sheet_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "sheet_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`sheet_id`";

	
	
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




	$tdatamst_jigane_sheet["sheet_id"] = $fdata;
//	sheet_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "sheet_name";
	$fdata["GoodName"] = "sheet_name";
	$fdata["ownerTable"] = "mst_jigane_sheet";
	$fdata["Label"] = GetFieldLabel("mst_jigane_sheet","sheet_name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "sheet_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`sheet_name`";

	
	
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




	$tdatamst_jigane_sheet["sheet_name"] = $fdata;
//	sheet_url
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "sheet_url";
	$fdata["GoodName"] = "sheet_url";
	$fdata["ownerTable"] = "mst_jigane_sheet";
	$fdata["Label"] = GetFieldLabel("mst_jigane_sheet","sheet_url");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "sheet_url";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`sheet_url`";

	
	
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




	$tdatamst_jigane_sheet["sheet_url"] = $fdata;
//	update_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "update_by";
	$fdata["GoodName"] = "update_by";
	$fdata["ownerTable"] = "mst_jigane_sheet";
	$fdata["Label"] = GetFieldLabel("mst_jigane_sheet","update_by");
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




	$tdatamst_jigane_sheet["update_by"] = $fdata;
//	update_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "update_at";
	$fdata["GoodName"] = "update_at";
	$fdata["ownerTable"] = "mst_jigane_sheet";
	$fdata["Label"] = GetFieldLabel("mst_jigane_sheet","update_at");
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




	$tdatamst_jigane_sheet["update_at"] = $fdata;
//	create_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "create_by";
	$fdata["GoodName"] = "create_by";
	$fdata["ownerTable"] = "mst_jigane_sheet";
	$fdata["Label"] = GetFieldLabel("mst_jigane_sheet","create_by");
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




	$tdatamst_jigane_sheet["create_by"] = $fdata;
//	create_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "create_at";
	$fdata["GoodName"] = "create_at";
	$fdata["ownerTable"] = "mst_jigane_sheet";
	$fdata["Label"] = GetFieldLabel("mst_jigane_sheet","create_at");
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




	$tdatamst_jigane_sheet["create_at"] = $fdata;


$tables_data["mst_jigane_sheet"]=&$tdatamst_jigane_sheet;
$field_labels["mst_jigane_sheet"] = &$fieldLabelsmst_jigane_sheet;
$fieldToolTips["mst_jigane_sheet"] = &$fieldToolTipsmst_jigane_sheet;
$placeHolders["mst_jigane_sheet"] = &$placeHoldersmst_jigane_sheet;
$page_titles["mst_jigane_sheet"] = &$pageTitlesmst_jigane_sheet;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mst_jigane_sheet"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mst_jigane_sheet"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mst_jigane_sheet()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`product_id`,  	`sheet_title`,  	`url_id`,  	`sheet_id`,  	`sheet_name`,  	`sheet_url`,  	`update_by`,  	`update_at`,  	`create_by`,  	`create_at`";
$proto0["m_strFrom"] = "FROM `mst_jigane_sheet`";
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
	"m_strName" => "product_id",
	"m_strTable" => "mst_jigane_sheet",
	"m_srcTableName" => "mst_jigane_sheet"
));

$proto6["m_sql"] = "`product_id`";
$proto6["m_srcTableName"] = "mst_jigane_sheet";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "sheet_title",
	"m_strTable" => "mst_jigane_sheet",
	"m_srcTableName" => "mst_jigane_sheet"
));

$proto8["m_sql"] = "`sheet_title`";
$proto8["m_srcTableName"] = "mst_jigane_sheet";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "url_id",
	"m_strTable" => "mst_jigane_sheet",
	"m_srcTableName" => "mst_jigane_sheet"
));

$proto10["m_sql"] = "`url_id`";
$proto10["m_srcTableName"] = "mst_jigane_sheet";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "sheet_id",
	"m_strTable" => "mst_jigane_sheet",
	"m_srcTableName" => "mst_jigane_sheet"
));

$proto12["m_sql"] = "`sheet_id`";
$proto12["m_srcTableName"] = "mst_jigane_sheet";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "sheet_name",
	"m_strTable" => "mst_jigane_sheet",
	"m_srcTableName" => "mst_jigane_sheet"
));

$proto14["m_sql"] = "`sheet_name`";
$proto14["m_srcTableName"] = "mst_jigane_sheet";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "sheet_url",
	"m_strTable" => "mst_jigane_sheet",
	"m_srcTableName" => "mst_jigane_sheet"
));

$proto16["m_sql"] = "`sheet_url`";
$proto16["m_srcTableName"] = "mst_jigane_sheet";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "update_by",
	"m_strTable" => "mst_jigane_sheet",
	"m_srcTableName" => "mst_jigane_sheet"
));

$proto18["m_sql"] = "`update_by`";
$proto18["m_srcTableName"] = "mst_jigane_sheet";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "update_at",
	"m_strTable" => "mst_jigane_sheet",
	"m_srcTableName" => "mst_jigane_sheet"
));

$proto20["m_sql"] = "`update_at`";
$proto20["m_srcTableName"] = "mst_jigane_sheet";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "create_by",
	"m_strTable" => "mst_jigane_sheet",
	"m_srcTableName" => "mst_jigane_sheet"
));

$proto22["m_sql"] = "`create_by`";
$proto22["m_srcTableName"] = "mst_jigane_sheet";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "create_at",
	"m_strTable" => "mst_jigane_sheet",
	"m_srcTableName" => "mst_jigane_sheet"
));

$proto24["m_sql"] = "`create_at`";
$proto24["m_srcTableName"] = "mst_jigane_sheet";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "mst_jigane_sheet";
$proto27["m_srcTableName"] = "mst_jigane_sheet";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "product_id";
$proto27["m_columns"][] = "sheet_title";
$proto27["m_columns"][] = "url_id";
$proto27["m_columns"][] = "sheet_id";
$proto27["m_columns"][] = "sheet_name";
$proto27["m_columns"][] = "sheet_url";
$proto27["m_columns"][] = "update_by";
$proto27["m_columns"][] = "update_at";
$proto27["m_columns"][] = "create_by";
$proto27["m_columns"][] = "create_at";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "`mst_jigane_sheet`";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "mst_jigane_sheet";
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
$proto0["m_srcTableName"]="mst_jigane_sheet";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mst_jigane_sheet = createSqlQuery_mst_jigane_sheet();


	
		;

										

$tdatamst_jigane_sheet[".sqlquery"] = $queryData_mst_jigane_sheet;

$tableEvents["mst_jigane_sheet"] = new eventsBase;
$tdatamst_jigane_sheet[".hasEvents"] = false;

?>