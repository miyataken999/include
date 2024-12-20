<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamst_rakuten_category = array();
	$tdatamst_rakuten_category[".ShortName"] = "mst_rakuten_category";
	$tdatamst_rakuten_category[".OwnerID"] = "";
	$tdatamst_rakuten_category[".OriginalTable"] = "mst_rakuten_category";

//	field labels
$fieldLabelsmst_rakuten_category = array();
$fieldToolTipsmst_rakuten_category = array();
$pageTitlesmst_rakuten_category = array();
$placeHoldersmst_rakuten_category = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmst_rakuten_category["Japanese"] = array();
	$fieldToolTipsmst_rakuten_category["Japanese"] = array();
	$placeHoldersmst_rakuten_category["Japanese"] = array();
	$pageTitlesmst_rakuten_category["Japanese"] = array();
	$fieldLabelsmst_rakuten_category["Japanese"]["id"] = "Id";
	$fieldToolTipsmst_rakuten_category["Japanese"]["id"] = "";
	$placeHoldersmst_rakuten_category["Japanese"]["id"] = "";
	$fieldLabelsmst_rakuten_category["Japanese"]["remark"] = "楽天カテゴリー";
	$fieldToolTipsmst_rakuten_category["Japanese"]["remark"] = "";
	$placeHoldersmst_rakuten_category["Japanese"]["remark"] = "";
	$fieldLabelsmst_rakuten_category["Japanese"]["parent_id"] = "大カテゴリーId";
	$fieldToolTipsmst_rakuten_category["Japanese"]["parent_id"] = "";
	$placeHoldersmst_rakuten_category["Japanese"]["parent_id"] = "";
	$fieldLabelsmst_rakuten_category["Japanese"]["sort"] = "Sort";
	$fieldToolTipsmst_rakuten_category["Japanese"]["sort"] = "";
	$placeHoldersmst_rakuten_category["Japanese"]["sort"] = "";
	if (count($fieldToolTipsmst_rakuten_category["Japanese"]))
		$tdatamst_rakuten_category[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmst_rakuten_category[""] = array();
	$fieldToolTipsmst_rakuten_category[""] = array();
	$placeHoldersmst_rakuten_category[""] = array();
	$pageTitlesmst_rakuten_category[""] = array();
	if (count($fieldToolTipsmst_rakuten_category[""]))
		$tdatamst_rakuten_category[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmst_rakuten_category["English"] = array();
	$fieldToolTipsmst_rakuten_category["English"] = array();
	$placeHoldersmst_rakuten_category["English"] = array();
	$pageTitlesmst_rakuten_category["English"] = array();
	if (count($fieldToolTipsmst_rakuten_category["English"]))
		$tdatamst_rakuten_category[".isUseToolTips"] = true;
}


	$tdatamst_rakuten_category[".NCSearch"] = true;



$tdatamst_rakuten_category[".shortTableName"] = "mst_rakuten_category";
$tdatamst_rakuten_category[".nSecOptions"] = 0;
$tdatamst_rakuten_category[".recsPerRowPrint"] = 1;
$tdatamst_rakuten_category[".mainTableOwnerID"] = "";
$tdatamst_rakuten_category[".moveNext"] = 1;
$tdatamst_rakuten_category[".entityType"] = 0;

$tdatamst_rakuten_category[".strOriginalTableName"] = "mst_rakuten_category";

	



$tdatamst_rakuten_category[".showAddInPopup"] = false;

$tdatamst_rakuten_category[".showEditInPopup"] = false;

$tdatamst_rakuten_category[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamst_rakuten_category[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamst_rakuten_category[".fieldsForRegister"] = array();

$tdatamst_rakuten_category[".listAjax"] = false;

	$tdatamst_rakuten_category[".audit"] = false;

	$tdatamst_rakuten_category[".locking"] = false;

$tdatamst_rakuten_category[".edit"] = true;
$tdatamst_rakuten_category[".afterEditAction"] = 1;
$tdatamst_rakuten_category[".closePopupAfterEdit"] = 1;
$tdatamst_rakuten_category[".afterEditActionDetTable"] = "";

$tdatamst_rakuten_category[".add"] = true;
$tdatamst_rakuten_category[".afterAddAction"] = 1;
$tdatamst_rakuten_category[".closePopupAfterAdd"] = 1;
$tdatamst_rakuten_category[".afterAddActionDetTable"] = "";

$tdatamst_rakuten_category[".list"] = true;

$tdatamst_rakuten_category[".inlineEdit"] = true;

$tdatamst_rakuten_category[".updateSelected"] = true;

$tdatamst_rakuten_category[".reorderRecordsByHeader"] = true;



$tdatamst_rakuten_category[".inlineAdd"] = true;
$tdatamst_rakuten_category[".copy"] = true;
$tdatamst_rakuten_category[".view"] = true;

$tdatamst_rakuten_category[".import"] = true;

$tdatamst_rakuten_category[".exportTo"] = true;

$tdatamst_rakuten_category[".printFriendly"] = true;

$tdatamst_rakuten_category[".delete"] = true;

$tdatamst_rakuten_category[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamst_rakuten_category[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamst_rakuten_category[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamst_rakuten_category[".searchSaving"] = false;
//

$tdatamst_rakuten_category[".showSearchPanel"] = true;
		$tdatamst_rakuten_category[".flexibleSearch"] = true;

$tdatamst_rakuten_category[".isUseAjaxSuggest"] = true;

$tdatamst_rakuten_category[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																								

$tdatamst_rakuten_category[".ajaxCodeSnippetAdded"] = false;

$tdatamst_rakuten_category[".buttonsAdded"] = false;

$tdatamst_rakuten_category[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamst_rakuten_category[".isUseTimeForSearch"] = false;



$tdatamst_rakuten_category[".badgeColor"] = "6493ea";


$tdatamst_rakuten_category[".allSearchFields"] = array();
$tdatamst_rakuten_category[".filterFields"] = array();
$tdatamst_rakuten_category[".requiredSearchFields"] = array();

$tdatamst_rakuten_category[".allSearchFields"][] = "id";
	$tdatamst_rakuten_category[".allSearchFields"][] = "parent_id";
	$tdatamst_rakuten_category[".allSearchFields"][] = "sort";
	$tdatamst_rakuten_category[".allSearchFields"][] = "remark";
	

$tdatamst_rakuten_category[".googleLikeFields"] = array();
$tdatamst_rakuten_category[".googleLikeFields"][] = "id";
$tdatamst_rakuten_category[".googleLikeFields"][] = "remark";
$tdatamst_rakuten_category[".googleLikeFields"][] = "parent_id";
$tdatamst_rakuten_category[".googleLikeFields"][] = "sort";

$tdatamst_rakuten_category[".panelSearchFields"] = array();
$tdatamst_rakuten_category[".searchPanelOptions"] = array();
$tdatamst_rakuten_category[".panelSearchFields"][] = "id";
	$tdatamst_rakuten_category[".panelSearchFields"][] = "parent_id";
	$tdatamst_rakuten_category[".panelSearchFields"][] = "sort";
	$tdatamst_rakuten_category[".panelSearchFields"][] = "remark";
	
$tdatamst_rakuten_category[".advSearchFields"] = array();
$tdatamst_rakuten_category[".advSearchFields"][] = "id";
$tdatamst_rakuten_category[".advSearchFields"][] = "parent_id";
$tdatamst_rakuten_category[".advSearchFields"][] = "sort";
$tdatamst_rakuten_category[".advSearchFields"][] = "remark";

$tdatamst_rakuten_category[".tableType"] = "list";

$tdatamst_rakuten_category[".printerPageOrientation"] = 0;
$tdatamst_rakuten_category[".nPrinterPageScale"] = 100;

$tdatamst_rakuten_category[".nPrinterSplitRecords"] = 40;

$tdatamst_rakuten_category[".nPrinterPDFSplitRecords"] = 40;



$tdatamst_rakuten_category[".geocodingEnabled"] = false;





$tdatamst_rakuten_category[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamst_rakuten_category[".pageSize"] = 20;

$tdatamst_rakuten_category[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamst_rakuten_category[".strOrderBy"] = $tstrOrderBy;

$tdatamst_rakuten_category[".orderindexes"] = array();

$tdatamst_rakuten_category[".sqlHead"] = "SELECT id,  remark,  parent_id,  sort";
$tdatamst_rakuten_category[".sqlFrom"] = "FROM mst_rakuten_category";
$tdatamst_rakuten_category[".sqlWhereExpr"] = "";
$tdatamst_rakuten_category[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamst_rakuten_category[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamst_rakuten_category[".arrGroupsPerPage"] = $arrGPP;

$tdatamst_rakuten_category[".highlightSearchResults"] = true;

$tableKeysmst_rakuten_category = array();
$tableKeysmst_rakuten_category[] = "id";
$tdatamst_rakuten_category[".Keys"] = $tableKeysmst_rakuten_category;

$tdatamst_rakuten_category[".listFields"] = array();
$tdatamst_rakuten_category[".listFields"][] = "id";
$tdatamst_rakuten_category[".listFields"][] = "parent_id";
$tdatamst_rakuten_category[".listFields"][] = "sort";
$tdatamst_rakuten_category[".listFields"][] = "remark";

$tdatamst_rakuten_category[".hideMobileList"] = array();


$tdatamst_rakuten_category[".viewFields"] = array();
$tdatamst_rakuten_category[".viewFields"][] = "id";
$tdatamst_rakuten_category[".viewFields"][] = "parent_id";
$tdatamst_rakuten_category[".viewFields"][] = "sort";
$tdatamst_rakuten_category[".viewFields"][] = "remark";

$tdatamst_rakuten_category[".addFields"] = array();
$tdatamst_rakuten_category[".addFields"][] = "parent_id";
$tdatamst_rakuten_category[".addFields"][] = "sort";
$tdatamst_rakuten_category[".addFields"][] = "remark";

$tdatamst_rakuten_category[".masterListFields"] = array();
$tdatamst_rakuten_category[".masterListFields"][] = "id";
$tdatamst_rakuten_category[".masterListFields"][] = "parent_id";
$tdatamst_rakuten_category[".masterListFields"][] = "sort";
$tdatamst_rakuten_category[".masterListFields"][] = "remark";

$tdatamst_rakuten_category[".inlineAddFields"] = array();
$tdatamst_rakuten_category[".inlineAddFields"][] = "parent_id";
$tdatamst_rakuten_category[".inlineAddFields"][] = "sort";
$tdatamst_rakuten_category[".inlineAddFields"][] = "remark";

$tdatamst_rakuten_category[".editFields"] = array();
$tdatamst_rakuten_category[".editFields"][] = "parent_id";
$tdatamst_rakuten_category[".editFields"][] = "sort";
$tdatamst_rakuten_category[".editFields"][] = "remark";

$tdatamst_rakuten_category[".inlineEditFields"] = array();
$tdatamst_rakuten_category[".inlineEditFields"][] = "parent_id";
$tdatamst_rakuten_category[".inlineEditFields"][] = "sort";
$tdatamst_rakuten_category[".inlineEditFields"][] = "remark";

$tdatamst_rakuten_category[".updateSelectedFields"] = array();
$tdatamst_rakuten_category[".updateSelectedFields"][] = "parent_id";
$tdatamst_rakuten_category[".updateSelectedFields"][] = "sort";
$tdatamst_rakuten_category[".updateSelectedFields"][] = "remark";


$tdatamst_rakuten_category[".exportFields"] = array();
$tdatamst_rakuten_category[".exportFields"][] = "id";
$tdatamst_rakuten_category[".exportFields"][] = "parent_id";
$tdatamst_rakuten_category[".exportFields"][] = "sort";
$tdatamst_rakuten_category[".exportFields"][] = "remark";

$tdatamst_rakuten_category[".importFields"] = array();
$tdatamst_rakuten_category[".importFields"][] = "id";
$tdatamst_rakuten_category[".importFields"][] = "remark";
$tdatamst_rakuten_category[".importFields"][] = "parent_id";
$tdatamst_rakuten_category[".importFields"][] = "sort";

$tdatamst_rakuten_category[".printFields"] = array();
$tdatamst_rakuten_category[".printFields"][] = "id";
$tdatamst_rakuten_category[".printFields"][] = "parent_id";
$tdatamst_rakuten_category[".printFields"][] = "sort";
$tdatamst_rakuten_category[".printFields"][] = "remark";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "mst_rakuten_category";
	$fdata["Label"] = GetFieldLabel("mst_rakuten_category","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
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




	$tdatamst_rakuten_category["id"] = $fdata;
//	remark
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "remark";
	$fdata["GoodName"] = "remark";
	$fdata["ownerTable"] = "mst_rakuten_category";
	$fdata["Label"] = GetFieldLabel("mst_rakuten_category","remark");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "remark";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "remark";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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




	$tdatamst_rakuten_category["remark"] = $fdata;
//	parent_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "parent_id";
	$fdata["GoodName"] = "parent_id";
	$fdata["ownerTable"] = "mst_rakuten_category";
	$fdata["Label"] = GetFieldLabel("mst_rakuten_category","parent_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "parent_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "parent_id";

	
	
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




	$tdatamst_rakuten_category["parent_id"] = $fdata;
//	sort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "sort";
	$fdata["GoodName"] = "sort";
	$fdata["ownerTable"] = "mst_rakuten_category";
	$fdata["Label"] = GetFieldLabel("mst_rakuten_category","sort");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "sort";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sort";

	
	
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




	$tdatamst_rakuten_category["sort"] = $fdata;


$tables_data["mst_rakuten_category"]=&$tdatamst_rakuten_category;
$field_labels["mst_rakuten_category"] = &$fieldLabelsmst_rakuten_category;
$fieldToolTips["mst_rakuten_category"] = &$fieldToolTipsmst_rakuten_category;
$placeHolders["mst_rakuten_category"] = &$placeHoldersmst_rakuten_category;
$page_titles["mst_rakuten_category"] = &$pageTitlesmst_rakuten_category;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mst_rakuten_category"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mst_rakuten_category"] = array();


	
				$strOriginalDetailsTable="store_categories";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="store_categories";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "store_categories";
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
					$masterTablesData["mst_rakuten_category"][0] = $masterParams;
				$masterTablesData["mst_rakuten_category"][0]["masterKeys"] = array();
	$masterTablesData["mst_rakuten_category"][0]["masterKeys"][]="category_id";
				$masterTablesData["mst_rakuten_category"][0]["detailKeys"] = array();
	$masterTablesData["mst_rakuten_category"][0]["detailKeys"][]="parent_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mst_rakuten_category()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  remark,  parent_id,  sort";
$proto0["m_strFrom"] = "FROM mst_rakuten_category";
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
	"m_strTable" => "mst_rakuten_category",
	"m_srcTableName" => "mst_rakuten_category"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "mst_rakuten_category";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "remark",
	"m_strTable" => "mst_rakuten_category",
	"m_srcTableName" => "mst_rakuten_category"
));

$proto8["m_sql"] = "remark";
$proto8["m_srcTableName"] = "mst_rakuten_category";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "parent_id",
	"m_strTable" => "mst_rakuten_category",
	"m_srcTableName" => "mst_rakuten_category"
));

$proto10["m_sql"] = "parent_id";
$proto10["m_srcTableName"] = "mst_rakuten_category";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "sort",
	"m_strTable" => "mst_rakuten_category",
	"m_srcTableName" => "mst_rakuten_category"
));

$proto12["m_sql"] = "sort";
$proto12["m_srcTableName"] = "mst_rakuten_category";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "mst_rakuten_category";
$proto15["m_srcTableName"] = "mst_rakuten_category";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "id";
$proto15["m_columns"][] = "name";
$proto15["m_columns"][] = "parent_id";
$proto15["m_columns"][] = "remark";
$proto15["m_columns"][] = "sort";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "mst_rakuten_category";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "mst_rakuten_category";
$proto16=array();
$proto16["m_sql"] = "";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = false;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

$proto14["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto14);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="mst_rakuten_category";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mst_rakuten_category = createSqlQuery_mst_rakuten_category();


	
		;

				

$tdatamst_rakuten_category[".sqlquery"] = $queryData_mst_rakuten_category;

$tableEvents["mst_rakuten_category"] = new eventsBase;
$tdatamst_rakuten_category[".hasEvents"] = false;

?>