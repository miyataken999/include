<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamst_brand_color = array();
	$tdatamst_brand_color[".truncateText"] = true;
	$tdatamst_brand_color[".NumberOfChars"] = 80;
	$tdatamst_brand_color[".ShortName"] = "mst_brand_color";
	$tdatamst_brand_color[".OwnerID"] = "";
	$tdatamst_brand_color[".OriginalTable"] = "mst_brand_color";

//	field labels
$fieldLabelsmst_brand_color = array();
$fieldToolTipsmst_brand_color = array();
$pageTitlesmst_brand_color = array();
$placeHoldersmst_brand_color = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmst_brand_color["Japanese"] = array();
	$fieldToolTipsmst_brand_color["Japanese"] = array();
	$placeHoldersmst_brand_color["Japanese"] = array();
	$pageTitlesmst_brand_color["Japanese"] = array();
	$fieldLabelsmst_brand_color["Japanese"]["id"] = "Id";
	$fieldToolTipsmst_brand_color["Japanese"]["id"] = "";
	$placeHoldersmst_brand_color["Japanese"]["id"] = "";
	$fieldLabelsmst_brand_color["Japanese"]["name"] = "Name";
	$fieldToolTipsmst_brand_color["Japanese"]["name"] = "";
	$placeHoldersmst_brand_color["Japanese"]["name"] = "";
	$fieldLabelsmst_brand_color["Japanese"]["product_num"] = "ブランドID";
	$fieldToolTipsmst_brand_color["Japanese"]["product_num"] = "";
	$placeHoldersmst_brand_color["Japanese"]["product_num"] = "";
	$fieldLabelsmst_brand_color["Japanese"]["line"] = "ライン";
	$fieldToolTipsmst_brand_color["Japanese"]["line"] = "";
	$placeHoldersmst_brand_color["Japanese"]["line"] = "";
	$fieldLabelsmst_brand_color["Japanese"]["sort"] = "Sort";
	$fieldToolTipsmst_brand_color["Japanese"]["sort"] = "";
	$placeHoldersmst_brand_color["Japanese"]["sort"] = "";
	$fieldLabelsmst_brand_color["Japanese"]["update_by"] = "Update By";
	$fieldToolTipsmst_brand_color["Japanese"]["update_by"] = "";
	$placeHoldersmst_brand_color["Japanese"]["update_by"] = "";
	$fieldLabelsmst_brand_color["Japanese"]["update_at"] = "Update At";
	$fieldToolTipsmst_brand_color["Japanese"]["update_at"] = "";
	$placeHoldersmst_brand_color["Japanese"]["update_at"] = "";
	$fieldLabelsmst_brand_color["Japanese"]["create_by"] = "Create By";
	$fieldToolTipsmst_brand_color["Japanese"]["create_by"] = "";
	$placeHoldersmst_brand_color["Japanese"]["create_by"] = "";
	$fieldLabelsmst_brand_color["Japanese"]["create_at"] = "Create At";
	$fieldToolTipsmst_brand_color["Japanese"]["create_at"] = "";
	$placeHoldersmst_brand_color["Japanese"]["create_at"] = "";
	if (count($fieldToolTipsmst_brand_color["Japanese"]))
		$tdatamst_brand_color[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmst_brand_color[""] = array();
	$fieldToolTipsmst_brand_color[""] = array();
	$placeHoldersmst_brand_color[""] = array();
	$pageTitlesmst_brand_color[""] = array();
	$fieldLabelsmst_brand_color[""]["id"] = "Id";
	$fieldToolTipsmst_brand_color[""]["id"] = "";
	$placeHoldersmst_brand_color[""]["id"] = "";
	$fieldLabelsmst_brand_color[""]["name"] = "Name";
	$fieldToolTipsmst_brand_color[""]["name"] = "";
	$placeHoldersmst_brand_color[""]["name"] = "";
	$fieldLabelsmst_brand_color[""]["product_num"] = "Product Num";
	$fieldToolTipsmst_brand_color[""]["product_num"] = "";
	$placeHoldersmst_brand_color[""]["product_num"] = "";
	$fieldLabelsmst_brand_color[""]["line"] = "Line";
	$fieldToolTipsmst_brand_color[""]["line"] = "";
	$placeHoldersmst_brand_color[""]["line"] = "";
	$fieldLabelsmst_brand_color[""]["sort"] = "Sort";
	$fieldToolTipsmst_brand_color[""]["sort"] = "";
	$placeHoldersmst_brand_color[""]["sort"] = "";
	$fieldLabelsmst_brand_color[""]["update_by"] = "Update By";
	$fieldToolTipsmst_brand_color[""]["update_by"] = "";
	$placeHoldersmst_brand_color[""]["update_by"] = "";
	$fieldLabelsmst_brand_color[""]["update_at"] = "Update At";
	$fieldToolTipsmst_brand_color[""]["update_at"] = "";
	$placeHoldersmst_brand_color[""]["update_at"] = "";
	$fieldLabelsmst_brand_color[""]["create_by"] = "Create By";
	$fieldToolTipsmst_brand_color[""]["create_by"] = "";
	$placeHoldersmst_brand_color[""]["create_by"] = "";
	$fieldLabelsmst_brand_color[""]["create_at"] = "Create At";
	$fieldToolTipsmst_brand_color[""]["create_at"] = "";
	$placeHoldersmst_brand_color[""]["create_at"] = "";
	if (count($fieldToolTipsmst_brand_color[""]))
		$tdatamst_brand_color[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmst_brand_color["English"] = array();
	$fieldToolTipsmst_brand_color["English"] = array();
	$placeHoldersmst_brand_color["English"] = array();
	$pageTitlesmst_brand_color["English"] = array();
	$fieldLabelsmst_brand_color["English"]["id"] = "Id";
	$fieldToolTipsmst_brand_color["English"]["id"] = "";
	$placeHoldersmst_brand_color["English"]["id"] = "";
	$fieldLabelsmst_brand_color["English"]["name"] = "Name";
	$fieldToolTipsmst_brand_color["English"]["name"] = "";
	$placeHoldersmst_brand_color["English"]["name"] = "";
	$fieldLabelsmst_brand_color["English"]["product_num"] = "Product Num";
	$fieldToolTipsmst_brand_color["English"]["product_num"] = "";
	$placeHoldersmst_brand_color["English"]["product_num"] = "";
	$fieldLabelsmst_brand_color["English"]["line"] = "Line";
	$fieldToolTipsmst_brand_color["English"]["line"] = "";
	$placeHoldersmst_brand_color["English"]["line"] = "";
	$fieldLabelsmst_brand_color["English"]["sort"] = "Sort";
	$fieldToolTipsmst_brand_color["English"]["sort"] = "";
	$placeHoldersmst_brand_color["English"]["sort"] = "";
	$fieldLabelsmst_brand_color["English"]["update_by"] = "Update By";
	$fieldToolTipsmst_brand_color["English"]["update_by"] = "";
	$placeHoldersmst_brand_color["English"]["update_by"] = "";
	$fieldLabelsmst_brand_color["English"]["update_at"] = "Update At";
	$fieldToolTipsmst_brand_color["English"]["update_at"] = "";
	$placeHoldersmst_brand_color["English"]["update_at"] = "";
	$fieldLabelsmst_brand_color["English"]["create_by"] = "Create By";
	$fieldToolTipsmst_brand_color["English"]["create_by"] = "";
	$placeHoldersmst_brand_color["English"]["create_by"] = "";
	$fieldLabelsmst_brand_color["English"]["create_at"] = "Create At";
	$fieldToolTipsmst_brand_color["English"]["create_at"] = "";
	$placeHoldersmst_brand_color["English"]["create_at"] = "";
	if (count($fieldToolTipsmst_brand_color["English"]))
		$tdatamst_brand_color[".isUseToolTips"] = true;
}


	$tdatamst_brand_color[".NCSearch"] = true;



$tdatamst_brand_color[".shortTableName"] = "mst_brand_color";
$tdatamst_brand_color[".nSecOptions"] = 0;
$tdatamst_brand_color[".recsPerRowPrint"] = 1;
$tdatamst_brand_color[".mainTableOwnerID"] = "";
$tdatamst_brand_color[".moveNext"] = 1;
$tdatamst_brand_color[".entityType"] = 0;

$tdatamst_brand_color[".strOriginalTableName"] = "mst_brand_color";

	



$tdatamst_brand_color[".showAddInPopup"] = false;

$tdatamst_brand_color[".showEditInPopup"] = false;

$tdatamst_brand_color[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamst_brand_color[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamst_brand_color[".fieldsForRegister"] = array();

$tdatamst_brand_color[".listAjax"] = false;

	$tdatamst_brand_color[".audit"] = true;

	$tdatamst_brand_color[".locking"] = false;



$tdatamst_brand_color[".list"] = true;

$tdatamst_brand_color[".inlineEdit"] = true;


$tdatamst_brand_color[".reorderRecordsByHeader"] = true;



$tdatamst_brand_color[".inlineAdd"] = true;

$tdatamst_brand_color[".import"] = true;

$tdatamst_brand_color[".exportTo"] = true;


$tdatamst_brand_color[".delete"] = true;

$tdatamst_brand_color[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamst_brand_color[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamst_brand_color[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamst_brand_color[".searchSaving"] = false;
//

$tdatamst_brand_color[".showSearchPanel"] = true;
		$tdatamst_brand_color[".flexibleSearch"] = true;

$tdatamst_brand_color[".isUseAjaxSuggest"] = true;

$tdatamst_brand_color[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatamst_brand_color[".ajaxCodeSnippetAdded"] = false;

$tdatamst_brand_color[".buttonsAdded"] = false;

$tdatamst_brand_color[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamst_brand_color[".isUseTimeForSearch"] = false;





$tdatamst_brand_color[".allSearchFields"] = array();
$tdatamst_brand_color[".filterFields"] = array();
$tdatamst_brand_color[".requiredSearchFields"] = array();

$tdatamst_brand_color[".allSearchFields"][] = "id";
	$tdatamst_brand_color[".allSearchFields"][] = "name";
	$tdatamst_brand_color[".allSearchFields"][] = "product_num";
	$tdatamst_brand_color[".allSearchFields"][] = "line";
	$tdatamst_brand_color[".allSearchFields"][] = "sort";
	$tdatamst_brand_color[".allSearchFields"][] = "update_by";
	$tdatamst_brand_color[".allSearchFields"][] = "update_at";
	$tdatamst_brand_color[".allSearchFields"][] = "create_by";
	$tdatamst_brand_color[".allSearchFields"][] = "create_at";
	

$tdatamst_brand_color[".googleLikeFields"] = array();
$tdatamst_brand_color[".googleLikeFields"][] = "id";
$tdatamst_brand_color[".googleLikeFields"][] = "name";
$tdatamst_brand_color[".googleLikeFields"][] = "product_num";
$tdatamst_brand_color[".googleLikeFields"][] = "line";
$tdatamst_brand_color[".googleLikeFields"][] = "sort";
$tdatamst_brand_color[".googleLikeFields"][] = "update_by";
$tdatamst_brand_color[".googleLikeFields"][] = "update_at";
$tdatamst_brand_color[".googleLikeFields"][] = "create_by";
$tdatamst_brand_color[".googleLikeFields"][] = "create_at";


$tdatamst_brand_color[".advSearchFields"] = array();
$tdatamst_brand_color[".advSearchFields"][] = "id";
$tdatamst_brand_color[".advSearchFields"][] = "name";
$tdatamst_brand_color[".advSearchFields"][] = "product_num";
$tdatamst_brand_color[".advSearchFields"][] = "line";
$tdatamst_brand_color[".advSearchFields"][] = "sort";
$tdatamst_brand_color[".advSearchFields"][] = "update_by";
$tdatamst_brand_color[".advSearchFields"][] = "update_at";
$tdatamst_brand_color[".advSearchFields"][] = "create_by";
$tdatamst_brand_color[".advSearchFields"][] = "create_at";

$tdatamst_brand_color[".tableType"] = "list";

$tdatamst_brand_color[".printerPageOrientation"] = 0;
$tdatamst_brand_color[".nPrinterPageScale"] = 100;

$tdatamst_brand_color[".nPrinterSplitRecords"] = 40;

$tdatamst_brand_color[".nPrinterPDFSplitRecords"] = 40;



$tdatamst_brand_color[".geocodingEnabled"] = false;





$tdatamst_brand_color[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamst_brand_color[".pageSize"] = 20;

$tdatamst_brand_color[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamst_brand_color[".strOrderBy"] = $tstrOrderBy;

$tdatamst_brand_color[".orderindexes"] = array();

$tdatamst_brand_color[".sqlHead"] = "SELECT `id`,  	`name`,  	`product_num`,  	`line`,  	`sort`,  	`update_by`,  	`update_at`,  	`create_by`,  	`create_at`";
$tdatamst_brand_color[".sqlFrom"] = "FROM `mst_brand_color`";
$tdatamst_brand_color[".sqlWhereExpr"] = "";
$tdatamst_brand_color[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamst_brand_color[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamst_brand_color[".arrGroupsPerPage"] = $arrGPP;

$tdatamst_brand_color[".highlightSearchResults"] = true;

$tableKeysmst_brand_color = array();
$tableKeysmst_brand_color[] = "id";
$tdatamst_brand_color[".Keys"] = $tableKeysmst_brand_color;

$tdatamst_brand_color[".listFields"] = array();
$tdatamst_brand_color[".listFields"][] = "id";
$tdatamst_brand_color[".listFields"][] = "name";
$tdatamst_brand_color[".listFields"][] = "product_num";
$tdatamst_brand_color[".listFields"][] = "line";
$tdatamst_brand_color[".listFields"][] = "sort";
$tdatamst_brand_color[".listFields"][] = "update_by";
$tdatamst_brand_color[".listFields"][] = "update_at";
$tdatamst_brand_color[".listFields"][] = "create_by";
$tdatamst_brand_color[".listFields"][] = "create_at";

$tdatamst_brand_color[".hideMobileList"] = array();


$tdatamst_brand_color[".viewFields"] = array();

$tdatamst_brand_color[".addFields"] = array();

$tdatamst_brand_color[".masterListFields"] = array();
$tdatamst_brand_color[".masterListFields"][] = "id";
$tdatamst_brand_color[".masterListFields"][] = "name";
$tdatamst_brand_color[".masterListFields"][] = "product_num";
$tdatamst_brand_color[".masterListFields"][] = "line";
$tdatamst_brand_color[".masterListFields"][] = "sort";
$tdatamst_brand_color[".masterListFields"][] = "update_by";
$tdatamst_brand_color[".masterListFields"][] = "update_at";
$tdatamst_brand_color[".masterListFields"][] = "create_by";
$tdatamst_brand_color[".masterListFields"][] = "create_at";

$tdatamst_brand_color[".inlineAddFields"] = array();
$tdatamst_brand_color[".inlineAddFields"][] = "name";
$tdatamst_brand_color[".inlineAddFields"][] = "product_num";
$tdatamst_brand_color[".inlineAddFields"][] = "line";
$tdatamst_brand_color[".inlineAddFields"][] = "sort";

$tdatamst_brand_color[".editFields"] = array();

$tdatamst_brand_color[".inlineEditFields"] = array();
$tdatamst_brand_color[".inlineEditFields"][] = "name";
$tdatamst_brand_color[".inlineEditFields"][] = "product_num";
$tdatamst_brand_color[".inlineEditFields"][] = "line";
$tdatamst_brand_color[".inlineEditFields"][] = "sort";

$tdatamst_brand_color[".updateSelectedFields"] = array();


$tdatamst_brand_color[".exportFields"] = array();
$tdatamst_brand_color[".exportFields"][] = "id";
$tdatamst_brand_color[".exportFields"][] = "name";
$tdatamst_brand_color[".exportFields"][] = "product_num";
$tdatamst_brand_color[".exportFields"][] = "line";
$tdatamst_brand_color[".exportFields"][] = "sort";
$tdatamst_brand_color[".exportFields"][] = "update_by";
$tdatamst_brand_color[".exportFields"][] = "update_at";
$tdatamst_brand_color[".exportFields"][] = "create_by";
$tdatamst_brand_color[".exportFields"][] = "create_at";

$tdatamst_brand_color[".importFields"] = array();
$tdatamst_brand_color[".importFields"][] = "id";
$tdatamst_brand_color[".importFields"][] = "name";
$tdatamst_brand_color[".importFields"][] = "product_num";
$tdatamst_brand_color[".importFields"][] = "line";
$tdatamst_brand_color[".importFields"][] = "sort";
$tdatamst_brand_color[".importFields"][] = "update_by";
$tdatamst_brand_color[".importFields"][] = "update_at";
$tdatamst_brand_color[".importFields"][] = "create_by";
$tdatamst_brand_color[".importFields"][] = "create_at";

$tdatamst_brand_color[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "mst_brand_color";
	$fdata["Label"] = GetFieldLabel("mst_brand_color","id");
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




	$tdatamst_brand_color["id"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "mst_brand_color";
	$fdata["Label"] = GetFieldLabel("mst_brand_color","name");
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




	$tdatamst_brand_color["name"] = $fdata;
//	product_num
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "product_num";
	$fdata["GoodName"] = "product_num";
	$fdata["ownerTable"] = "mst_brand_color";
	$fdata["Label"] = GetFieldLabel("mst_brand_color","product_num");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "product_num";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`product_num`";

	
	
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
	$edata["LookupTable"] = "mst_brand2";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 1;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "name";

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
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




	$tdatamst_brand_color["product_num"] = $fdata;
//	line
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "line";
	$fdata["GoodName"] = "line";
	$fdata["ownerTable"] = "mst_brand_color";
	$fdata["Label"] = GetFieldLabel("mst_brand_color","line");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "line";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`line`";

	
	
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
	$edata["LookupTable"] = "mst_item";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 1;

	
		
	$edata["LinkField"] = "name";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "name";

	
	$edata["LookupOrderBy"] = "sort";

	
	
	
	

	
	
	
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




	$tdatamst_brand_color["line"] = $fdata;
//	sort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "sort";
	$fdata["GoodName"] = "sort";
	$fdata["ownerTable"] = "mst_brand_color";
	$fdata["Label"] = GetFieldLabel("mst_brand_color","sort");
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




	$tdatamst_brand_color["sort"] = $fdata;
//	update_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "update_by";
	$fdata["GoodName"] = "update_by";
	$fdata["ownerTable"] = "mst_brand_color";
	$fdata["Label"] = GetFieldLabel("mst_brand_color","update_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdatamst_brand_color["update_by"] = $fdata;
//	update_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "update_at";
	$fdata["GoodName"] = "update_at";
	$fdata["ownerTable"] = "mst_brand_color";
	$fdata["Label"] = GetFieldLabel("mst_brand_color","update_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdatamst_brand_color["update_at"] = $fdata;
//	create_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "create_by";
	$fdata["GoodName"] = "create_by";
	$fdata["ownerTable"] = "mst_brand_color";
	$fdata["Label"] = GetFieldLabel("mst_brand_color","create_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdatamst_brand_color["create_by"] = $fdata;
//	create_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "create_at";
	$fdata["GoodName"] = "create_at";
	$fdata["ownerTable"] = "mst_brand_color";
	$fdata["Label"] = GetFieldLabel("mst_brand_color","create_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdatamst_brand_color["create_at"] = $fdata;


$tables_data["mst_brand_color"]=&$tdatamst_brand_color;
$field_labels["mst_brand_color"] = &$fieldLabelsmst_brand_color;
$fieldToolTips["mst_brand_color"] = &$fieldToolTipsmst_brand_color;
$placeHolders["mst_brand_color"] = &$placeHoldersmst_brand_color;
$page_titles["mst_brand_color"] = &$pageTitlesmst_brand_color;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mst_brand_color"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mst_brand_color"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mst_brand_color()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  	`name`,  	`product_num`,  	`line`,  	`sort`,  	`update_by`,  	`update_at`,  	`create_by`,  	`create_at`";
$proto0["m_strFrom"] = "FROM `mst_brand_color`";
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
	"m_strTable" => "mst_brand_color",
	"m_srcTableName" => "mst_brand_color"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "mst_brand_color";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "mst_brand_color",
	"m_srcTableName" => "mst_brand_color"
));

$proto8["m_sql"] = "`name`";
$proto8["m_srcTableName"] = "mst_brand_color";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "product_num",
	"m_strTable" => "mst_brand_color",
	"m_srcTableName" => "mst_brand_color"
));

$proto10["m_sql"] = "`product_num`";
$proto10["m_srcTableName"] = "mst_brand_color";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "line",
	"m_strTable" => "mst_brand_color",
	"m_srcTableName" => "mst_brand_color"
));

$proto12["m_sql"] = "`line`";
$proto12["m_srcTableName"] = "mst_brand_color";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "sort",
	"m_strTable" => "mst_brand_color",
	"m_srcTableName" => "mst_brand_color"
));

$proto14["m_sql"] = "`sort`";
$proto14["m_srcTableName"] = "mst_brand_color";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "update_by",
	"m_strTable" => "mst_brand_color",
	"m_srcTableName" => "mst_brand_color"
));

$proto16["m_sql"] = "`update_by`";
$proto16["m_srcTableName"] = "mst_brand_color";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "update_at",
	"m_strTable" => "mst_brand_color",
	"m_srcTableName" => "mst_brand_color"
));

$proto18["m_sql"] = "`update_at`";
$proto18["m_srcTableName"] = "mst_brand_color";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "create_by",
	"m_strTable" => "mst_brand_color",
	"m_srcTableName" => "mst_brand_color"
));

$proto20["m_sql"] = "`create_by`";
$proto20["m_srcTableName"] = "mst_brand_color";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "create_at",
	"m_strTable" => "mst_brand_color",
	"m_srcTableName" => "mst_brand_color"
));

$proto22["m_sql"] = "`create_at`";
$proto22["m_srcTableName"] = "mst_brand_color";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "mst_brand_color";
$proto25["m_srcTableName"] = "mst_brand_color";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "id";
$proto25["m_columns"][] = "name";
$proto25["m_columns"][] = "product_num";
$proto25["m_columns"][] = "line";
$proto25["m_columns"][] = "sort";
$proto25["m_columns"][] = "update_by";
$proto25["m_columns"][] = "update_at";
$proto25["m_columns"][] = "create_by";
$proto25["m_columns"][] = "create_at";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "`mst_brand_color`";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "mst_brand_color";
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
$proto0["m_srcTableName"]="mst_brand_color";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mst_brand_color = createSqlQuery_mst_brand_color();


	
		;

									

$tdatamst_brand_color[".sqlquery"] = $queryData_mst_brand_color;

$tableEvents["mst_brand_color"] = new eventsBase;
$tdatamst_brand_color[".hasEvents"] = false;

?>