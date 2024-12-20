<?php
require_once(getabspath("classes/cipherer.php"));




$tdataEoc_timeline = array();
	$tdataEoc_timeline[".truncateText"] = true;
	$tdataEoc_timeline[".NumberOfChars"] = 80;
	$tdataEoc_timeline[".ShortName"] = "Eoc_timeline";
	$tdataEoc_timeline[".OwnerID"] = "";
	$tdataEoc_timeline[".OriginalTable"] = "Eoc_timeline";

//	field labels
$fieldLabelsEoc_timeline = array();
$fieldToolTipsEoc_timeline = array();
$pageTitlesEoc_timeline = array();
$placeHoldersEoc_timeline = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsEoc_timeline["Japanese"] = array();
	$fieldToolTipsEoc_timeline["Japanese"] = array();
	$placeHoldersEoc_timeline["Japanese"] = array();
	$pageTitlesEoc_timeline["Japanese"] = array();
	$fieldLabelsEoc_timeline["Japanese"]["id"] = "Id";
	$fieldToolTipsEoc_timeline["Japanese"]["id"] = "";
	$placeHoldersEoc_timeline["Japanese"]["id"] = "";
	$fieldLabelsEoc_timeline["Japanese"]["ecc_id"] = "顧客SEQ";
	$fieldToolTipsEoc_timeline["Japanese"]["ecc_id"] = "";
	$placeHoldersEoc_timeline["Japanese"]["ecc_id"] = "";
	$fieldLabelsEoc_timeline["Japanese"]["category"] = "カテゴリー";
	$fieldToolTipsEoc_timeline["Japanese"]["category"] = "";
	$placeHoldersEoc_timeline["Japanese"]["category"] = "";
	$fieldLabelsEoc_timeline["Japanese"]["detail"] = "内容";
	$fieldToolTipsEoc_timeline["Japanese"]["detail"] = "";
	$placeHoldersEoc_timeline["Japanese"]["detail"] = "";
	$fieldLabelsEoc_timeline["Japanese"]["create_by"] = "登録者";
	$fieldToolTipsEoc_timeline["Japanese"]["create_by"] = "";
	$placeHoldersEoc_timeline["Japanese"]["create_by"] = "";
	$fieldLabelsEoc_timeline["Japanese"]["create_at"] = "登録日";
	$fieldToolTipsEoc_timeline["Japanese"]["create_at"] = "";
	$placeHoldersEoc_timeline["Japanese"]["create_at"] = "";
	$fieldLabelsEoc_timeline["Japanese"]["update_by"] = "更新者";
	$fieldToolTipsEoc_timeline["Japanese"]["update_by"] = "";
	$placeHoldersEoc_timeline["Japanese"]["update_by"] = "";
	$fieldLabelsEoc_timeline["Japanese"]["update_at"] = "更新日";
	$fieldToolTipsEoc_timeline["Japanese"]["update_at"] = "";
	$placeHoldersEoc_timeline["Japanese"]["update_at"] = "";
	$fieldLabelsEoc_timeline["Japanese"]["title"] = "タイトル";
	$fieldToolTipsEoc_timeline["Japanese"]["title"] = "";
	$placeHoldersEoc_timeline["Japanese"]["title"] = "";
	if (count($fieldToolTipsEoc_timeline["Japanese"]))
		$tdataEoc_timeline[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsEoc_timeline[""] = array();
	$fieldToolTipsEoc_timeline[""] = array();
	$placeHoldersEoc_timeline[""] = array();
	$pageTitlesEoc_timeline[""] = array();
	$fieldLabelsEoc_timeline[""]["id"] = "Id";
	$fieldToolTipsEoc_timeline[""]["id"] = "";
	$placeHoldersEoc_timeline[""]["id"] = "";
	$fieldLabelsEoc_timeline[""]["ecc_id"] = "Ecc Id";
	$fieldToolTipsEoc_timeline[""]["ecc_id"] = "";
	$placeHoldersEoc_timeline[""]["ecc_id"] = "";
	$fieldLabelsEoc_timeline[""]["category"] = "Category";
	$fieldToolTipsEoc_timeline[""]["category"] = "";
	$placeHoldersEoc_timeline[""]["category"] = "";
	$fieldLabelsEoc_timeline[""]["detail"] = "Detail";
	$fieldToolTipsEoc_timeline[""]["detail"] = "";
	$placeHoldersEoc_timeline[""]["detail"] = "";
	$fieldLabelsEoc_timeline[""]["create_by"] = "Create By";
	$fieldToolTipsEoc_timeline[""]["create_by"] = "";
	$placeHoldersEoc_timeline[""]["create_by"] = "";
	$fieldLabelsEoc_timeline[""]["create_at"] = "Create At";
	$fieldToolTipsEoc_timeline[""]["create_at"] = "";
	$placeHoldersEoc_timeline[""]["create_at"] = "";
	$fieldLabelsEoc_timeline[""]["update_by"] = "Update By";
	$fieldToolTipsEoc_timeline[""]["update_by"] = "";
	$placeHoldersEoc_timeline[""]["update_by"] = "";
	$fieldLabelsEoc_timeline[""]["update_at"] = "Update At";
	$fieldToolTipsEoc_timeline[""]["update_at"] = "";
	$placeHoldersEoc_timeline[""]["update_at"] = "";
	$fieldLabelsEoc_timeline[""]["title"] = "Title";
	$fieldToolTipsEoc_timeline[""]["title"] = "";
	$placeHoldersEoc_timeline[""]["title"] = "";
	if (count($fieldToolTipsEoc_timeline[""]))
		$tdataEoc_timeline[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsEoc_timeline["English"] = array();
	$fieldToolTipsEoc_timeline["English"] = array();
	$placeHoldersEoc_timeline["English"] = array();
	$pageTitlesEoc_timeline["English"] = array();
	$fieldLabelsEoc_timeline["English"]["id"] = "Id";
	$fieldToolTipsEoc_timeline["English"]["id"] = "";
	$placeHoldersEoc_timeline["English"]["id"] = "";
	$fieldLabelsEoc_timeline["English"]["ecc_id"] = "Ecc Id";
	$fieldToolTipsEoc_timeline["English"]["ecc_id"] = "";
	$placeHoldersEoc_timeline["English"]["ecc_id"] = "";
	$fieldLabelsEoc_timeline["English"]["category"] = "Category";
	$fieldToolTipsEoc_timeline["English"]["category"] = "";
	$placeHoldersEoc_timeline["English"]["category"] = "";
	$fieldLabelsEoc_timeline["English"]["detail"] = "Detail";
	$fieldToolTipsEoc_timeline["English"]["detail"] = "";
	$placeHoldersEoc_timeline["English"]["detail"] = "";
	$fieldLabelsEoc_timeline["English"]["create_by"] = "Create By";
	$fieldToolTipsEoc_timeline["English"]["create_by"] = "";
	$placeHoldersEoc_timeline["English"]["create_by"] = "";
	$fieldLabelsEoc_timeline["English"]["create_at"] = "Create At";
	$fieldToolTipsEoc_timeline["English"]["create_at"] = "";
	$placeHoldersEoc_timeline["English"]["create_at"] = "";
	$fieldLabelsEoc_timeline["English"]["update_by"] = "Update By";
	$fieldToolTipsEoc_timeline["English"]["update_by"] = "";
	$placeHoldersEoc_timeline["English"]["update_by"] = "";
	$fieldLabelsEoc_timeline["English"]["update_at"] = "Update At";
	$fieldToolTipsEoc_timeline["English"]["update_at"] = "";
	$placeHoldersEoc_timeline["English"]["update_at"] = "";
	$fieldLabelsEoc_timeline["English"]["title"] = "Title";
	$fieldToolTipsEoc_timeline["English"]["title"] = "";
	$placeHoldersEoc_timeline["English"]["title"] = "";
	if (count($fieldToolTipsEoc_timeline["English"]))
		$tdataEoc_timeline[".isUseToolTips"] = true;
}


	$tdataEoc_timeline[".NCSearch"] = true;



$tdataEoc_timeline[".shortTableName"] = "Eoc_timeline";
$tdataEoc_timeline[".nSecOptions"] = 0;
$tdataEoc_timeline[".recsPerRowPrint"] = 1;
$tdataEoc_timeline[".mainTableOwnerID"] = "";
$tdataEoc_timeline[".moveNext"] = 1;
$tdataEoc_timeline[".entityType"] = 0;

$tdataEoc_timeline[".strOriginalTableName"] = "Eoc_timeline";

	



$tdataEoc_timeline[".showAddInPopup"] = false;

$tdataEoc_timeline[".showEditInPopup"] = false;

$tdataEoc_timeline[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataEoc_timeline[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataEoc_timeline[".fieldsForRegister"] = array();

$tdataEoc_timeline[".listAjax"] = false;

	$tdataEoc_timeline[".audit"] = true;

	$tdataEoc_timeline[".locking"] = false;



$tdataEoc_timeline[".list"] = true;

$tdataEoc_timeline[".inlineEdit"] = true;


$tdataEoc_timeline[".reorderRecordsByHeader"] = true;



$tdataEoc_timeline[".inlineAdd"] = true;

$tdataEoc_timeline[".import"] = true;

$tdataEoc_timeline[".exportTo"] = true;


$tdataEoc_timeline[".delete"] = true;

$tdataEoc_timeline[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataEoc_timeline[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataEoc_timeline[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataEoc_timeline[".searchSaving"] = false;
//

$tdataEoc_timeline[".showSearchPanel"] = true;
		$tdataEoc_timeline[".flexibleSearch"] = true;

$tdataEoc_timeline[".isUseAjaxSuggest"] = true;

$tdataEoc_timeline[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																		

$tdataEoc_timeline[".ajaxCodeSnippetAdded"] = false;

$tdataEoc_timeline[".buttonsAdded"] = false;

$tdataEoc_timeline[".addPageEvents"] = false;

// use timepicker for search panel
$tdataEoc_timeline[".isUseTimeForSearch"] = false;



$tdataEoc_timeline[".badgeColor"] = "cd5c5c";


$tdataEoc_timeline[".allSearchFields"] = array();
$tdataEoc_timeline[".filterFields"] = array();
$tdataEoc_timeline[".requiredSearchFields"] = array();

$tdataEoc_timeline[".allSearchFields"][] = "id";
	$tdataEoc_timeline[".allSearchFields"][] = "ecc_id";
	$tdataEoc_timeline[".allSearchFields"][] = "category";
	$tdataEoc_timeline[".allSearchFields"][] = "title";
	$tdataEoc_timeline[".allSearchFields"][] = "detail";
	$tdataEoc_timeline[".allSearchFields"][] = "create_by";
	$tdataEoc_timeline[".allSearchFields"][] = "create_at";
	$tdataEoc_timeline[".allSearchFields"][] = "update_by";
	$tdataEoc_timeline[".allSearchFields"][] = "update_at";
	

$tdataEoc_timeline[".googleLikeFields"] = array();
$tdataEoc_timeline[".googleLikeFields"][] = "id";
$tdataEoc_timeline[".googleLikeFields"][] = "ecc_id";
$tdataEoc_timeline[".googleLikeFields"][] = "category";
$tdataEoc_timeline[".googleLikeFields"][] = "detail";
$tdataEoc_timeline[".googleLikeFields"][] = "create_by";
$tdataEoc_timeline[".googleLikeFields"][] = "create_at";
$tdataEoc_timeline[".googleLikeFields"][] = "update_by";
$tdataEoc_timeline[".googleLikeFields"][] = "update_at";
$tdataEoc_timeline[".googleLikeFields"][] = "title";

$tdataEoc_timeline[".panelSearchFields"] = array();
$tdataEoc_timeline[".searchPanelOptions"] = array();
$tdataEoc_timeline[".panelSearchFields"][] = "id";
	$tdataEoc_timeline[".panelSearchFields"][] = "ecc_id";
	$tdataEoc_timeline[".panelSearchFields"][] = "category";
	$tdataEoc_timeline[".panelSearchFields"][] = "title";
	$tdataEoc_timeline[".panelSearchFields"][] = "detail";
	$tdataEoc_timeline[".panelSearchFields"][] = "create_by";
	$tdataEoc_timeline[".panelSearchFields"][] = "create_at";
	$tdataEoc_timeline[".panelSearchFields"][] = "update_by";
	$tdataEoc_timeline[".panelSearchFields"][] = "update_at";
	
$tdataEoc_timeline[".advSearchFields"] = array();
$tdataEoc_timeline[".advSearchFields"][] = "id";
$tdataEoc_timeline[".advSearchFields"][] = "ecc_id";
$tdataEoc_timeline[".advSearchFields"][] = "category";
$tdataEoc_timeline[".advSearchFields"][] = "title";
$tdataEoc_timeline[".advSearchFields"][] = "detail";
$tdataEoc_timeline[".advSearchFields"][] = "create_by";
$tdataEoc_timeline[".advSearchFields"][] = "create_at";
$tdataEoc_timeline[".advSearchFields"][] = "update_by";
$tdataEoc_timeline[".advSearchFields"][] = "update_at";

$tdataEoc_timeline[".tableType"] = "list";

$tdataEoc_timeline[".printerPageOrientation"] = 0;
$tdataEoc_timeline[".nPrinterPageScale"] = 100;

$tdataEoc_timeline[".nPrinterSplitRecords"] = 40;

$tdataEoc_timeline[".nPrinterPDFSplitRecords"] = 40;



$tdataEoc_timeline[".geocodingEnabled"] = false;





$tdataEoc_timeline[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataEoc_timeline[".pageSize"] = 5;

$tdataEoc_timeline[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `id` DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataEoc_timeline[".strOrderBy"] = $tstrOrderBy;

$tdataEoc_timeline[".orderindexes"] = array();
$tdataEoc_timeline[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "`id`");

$tdataEoc_timeline[".sqlHead"] = "SELECT `id`,  `ecc_id`,  `category`,  `detail`,  `create_by`,  `create_at`,  `update_by`,  `update_at`,  `title`";
$tdataEoc_timeline[".sqlFrom"] = "FROM `Eoc_timeline`";
$tdataEoc_timeline[".sqlWhereExpr"] = "";
$tdataEoc_timeline[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataEoc_timeline[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataEoc_timeline[".arrGroupsPerPage"] = $arrGPP;

$tdataEoc_timeline[".highlightSearchResults"] = true;

$tableKeysEoc_timeline = array();
$tableKeysEoc_timeline[] = "id";
$tdataEoc_timeline[".Keys"] = $tableKeysEoc_timeline;

$tdataEoc_timeline[".listFields"] = array();
$tdataEoc_timeline[".listFields"][] = "id";
$tdataEoc_timeline[".listFields"][] = "ecc_id";
$tdataEoc_timeline[".listFields"][] = "category";
$tdataEoc_timeline[".listFields"][] = "title";
$tdataEoc_timeline[".listFields"][] = "detail";
$tdataEoc_timeline[".listFields"][] = "create_by";
$tdataEoc_timeline[".listFields"][] = "create_at";
$tdataEoc_timeline[".listFields"][] = "update_by";
$tdataEoc_timeline[".listFields"][] = "update_at";

$tdataEoc_timeline[".hideMobileList"] = array();


$tdataEoc_timeline[".viewFields"] = array();

$tdataEoc_timeline[".addFields"] = array();

$tdataEoc_timeline[".masterListFields"] = array();
$tdataEoc_timeline[".masterListFields"][] = "id";
$tdataEoc_timeline[".masterListFields"][] = "ecc_id";
$tdataEoc_timeline[".masterListFields"][] = "category";
$tdataEoc_timeline[".masterListFields"][] = "title";
$tdataEoc_timeline[".masterListFields"][] = "detail";
$tdataEoc_timeline[".masterListFields"][] = "create_by";
$tdataEoc_timeline[".masterListFields"][] = "create_at";
$tdataEoc_timeline[".masterListFields"][] = "update_by";
$tdataEoc_timeline[".masterListFields"][] = "update_at";

$tdataEoc_timeline[".inlineAddFields"] = array();
$tdataEoc_timeline[".inlineAddFields"][] = "ecc_id";
$tdataEoc_timeline[".inlineAddFields"][] = "category";
$tdataEoc_timeline[".inlineAddFields"][] = "title";
$tdataEoc_timeline[".inlineAddFields"][] = "detail";

$tdataEoc_timeline[".editFields"] = array();

$tdataEoc_timeline[".inlineEditFields"] = array();
$tdataEoc_timeline[".inlineEditFields"][] = "ecc_id";
$tdataEoc_timeline[".inlineEditFields"][] = "category";
$tdataEoc_timeline[".inlineEditFields"][] = "title";
$tdataEoc_timeline[".inlineEditFields"][] = "detail";

$tdataEoc_timeline[".updateSelectedFields"] = array();


$tdataEoc_timeline[".exportFields"] = array();
$tdataEoc_timeline[".exportFields"][] = "id";
$tdataEoc_timeline[".exportFields"][] = "ecc_id";
$tdataEoc_timeline[".exportFields"][] = "category";
$tdataEoc_timeline[".exportFields"][] = "title";
$tdataEoc_timeline[".exportFields"][] = "detail";
$tdataEoc_timeline[".exportFields"][] = "create_by";
$tdataEoc_timeline[".exportFields"][] = "create_at";
$tdataEoc_timeline[".exportFields"][] = "update_by";
$tdataEoc_timeline[".exportFields"][] = "update_at";

$tdataEoc_timeline[".importFields"] = array();
$tdataEoc_timeline[".importFields"][] = "id";
$tdataEoc_timeline[".importFields"][] = "ecc_id";
$tdataEoc_timeline[".importFields"][] = "category";
$tdataEoc_timeline[".importFields"][] = "detail";
$tdataEoc_timeline[".importFields"][] = "title";

$tdataEoc_timeline[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "Eoc_timeline";
	$fdata["Label"] = GetFieldLabel("Eoc_timeline","id");
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




	$tdataEoc_timeline["id"] = $fdata;
//	ecc_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ecc_id";
	$fdata["GoodName"] = "ecc_id";
	$fdata["ownerTable"] = "Eoc_timeline";
	$fdata["Label"] = GetFieldLabel("Eoc_timeline","ecc_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ecc_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`ecc_id`";

	
	
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




	$tdataEoc_timeline["ecc_id"] = $fdata;
//	category
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "category";
	$fdata["GoodName"] = "category";
	$fdata["ownerTable"] = "Eoc_timeline";
	$fdata["Label"] = GetFieldLabel("Eoc_timeline","category");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "category";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`category`";

	
	
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
	$edata["LookupTable"] = "mst_Eoc_timeline_category";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "name";

	
	$edata["LookupOrderBy"] = "sort";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataEoc_timeline["category"] = $fdata;
//	detail
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "detail";
	$fdata["GoodName"] = "detail";
	$fdata["ownerTable"] = "Eoc_timeline";
	$fdata["Label"] = GetFieldLabel("Eoc_timeline","detail");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "detail";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`detail`";

	
	
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




	$tdataEoc_timeline["detail"] = $fdata;
//	create_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "create_by";
	$fdata["GoodName"] = "create_by";
	$fdata["ownerTable"] = "Eoc_timeline";
	$fdata["Label"] = GetFieldLabel("Eoc_timeline","create_by");
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




	$tdataEoc_timeline["create_by"] = $fdata;
//	create_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "create_at";
	$fdata["GoodName"] = "create_at";
	$fdata["ownerTable"] = "Eoc_timeline";
	$fdata["Label"] = GetFieldLabel("Eoc_timeline","create_at");
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




	$tdataEoc_timeline["create_at"] = $fdata;
//	update_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "update_by";
	$fdata["GoodName"] = "update_by";
	$fdata["ownerTable"] = "Eoc_timeline";
	$fdata["Label"] = GetFieldLabel("Eoc_timeline","update_by");
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




	$tdataEoc_timeline["update_by"] = $fdata;
//	update_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "update_at";
	$fdata["GoodName"] = "update_at";
	$fdata["ownerTable"] = "Eoc_timeline";
	$fdata["Label"] = GetFieldLabel("Eoc_timeline","update_at");
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




	$tdataEoc_timeline["update_at"] = $fdata;
//	title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "title";
	$fdata["GoodName"] = "title";
	$fdata["ownerTable"] = "Eoc_timeline";
	$fdata["Label"] = GetFieldLabel("Eoc_timeline","title");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "title";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`title`";

	
	
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




	$tdataEoc_timeline["title"] = $fdata;


$tables_data["Eoc_timeline"]=&$tdataEoc_timeline;
$field_labels["Eoc_timeline"] = &$fieldLabelsEoc_timeline;
$fieldToolTips["Eoc_timeline"] = &$fieldToolTipsEoc_timeline;
$placeHolders["Eoc_timeline"] = &$placeHoldersEoc_timeline;
$page_titles["Eoc_timeline"] = &$pageTitlesEoc_timeline;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Eoc_timeline"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["Eoc_timeline"] = array();


	
				$strOriginalDetailsTable="Eoc";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="Eoc_catch";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "Eoc_catch";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispMasterInfo"] = array();
				$masterParams["dispMasterInfo"][PAGE_LIST] = true;
			
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 1;
	$masterParams["previewOnView"]= 0;
	$masterParams["proceedLink"]= 1;

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Eoc_timeline"][0] = $masterParams;
				$masterTablesData["Eoc_timeline"][0]["masterKeys"] = array();
	$masterTablesData["Eoc_timeline"][0]["masterKeys"][]="ecc_id";
				$masterTablesData["Eoc_timeline"][0]["detailKeys"] = array();
	$masterTablesData["Eoc_timeline"][0]["detailKeys"][]="ecc_id";
		
	
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
	$masterParams["previewOnEdit"]= 1;
	$masterParams["previewOnView"]= 1;
	$masterParams["proceedLink"]= 1;

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Eoc_timeline"][1] = $masterParams;
				$masterTablesData["Eoc_timeline"][1]["masterKeys"] = array();
	$masterTablesData["Eoc_timeline"][1]["masterKeys"][]="ecc_id";
				$masterTablesData["Eoc_timeline"][1]["detailKeys"] = array();
	$masterTablesData["Eoc_timeline"][1]["detailKeys"][]="ecc_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Eoc_timeline()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  `ecc_id`,  `category`,  `detail`,  `create_by`,  `create_at`,  `update_by`,  `update_at`,  `title`";
$proto0["m_strFrom"] = "FROM `Eoc_timeline`";
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
	"m_strTable" => "Eoc_timeline",
	"m_srcTableName" => "Eoc_timeline"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "Eoc_timeline";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ecc_id",
	"m_strTable" => "Eoc_timeline",
	"m_srcTableName" => "Eoc_timeline"
));

$proto8["m_sql"] = "`ecc_id`";
$proto8["m_srcTableName"] = "Eoc_timeline";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "category",
	"m_strTable" => "Eoc_timeline",
	"m_srcTableName" => "Eoc_timeline"
));

$proto10["m_sql"] = "`category`";
$proto10["m_srcTableName"] = "Eoc_timeline";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "detail",
	"m_strTable" => "Eoc_timeline",
	"m_srcTableName" => "Eoc_timeline"
));

$proto12["m_sql"] = "`detail`";
$proto12["m_srcTableName"] = "Eoc_timeline";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "create_by",
	"m_strTable" => "Eoc_timeline",
	"m_srcTableName" => "Eoc_timeline"
));

$proto14["m_sql"] = "`create_by`";
$proto14["m_srcTableName"] = "Eoc_timeline";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "create_at",
	"m_strTable" => "Eoc_timeline",
	"m_srcTableName" => "Eoc_timeline"
));

$proto16["m_sql"] = "`create_at`";
$proto16["m_srcTableName"] = "Eoc_timeline";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "update_by",
	"m_strTable" => "Eoc_timeline",
	"m_srcTableName" => "Eoc_timeline"
));

$proto18["m_sql"] = "`update_by`";
$proto18["m_srcTableName"] = "Eoc_timeline";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "update_at",
	"m_strTable" => "Eoc_timeline",
	"m_srcTableName" => "Eoc_timeline"
));

$proto20["m_sql"] = "`update_at`";
$proto20["m_srcTableName"] = "Eoc_timeline";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "title",
	"m_strTable" => "Eoc_timeline",
	"m_srcTableName" => "Eoc_timeline"
));

$proto22["m_sql"] = "`title`";
$proto22["m_srcTableName"] = "Eoc_timeline";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "Eoc_timeline";
$proto25["m_srcTableName"] = "Eoc_timeline";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "id";
$proto25["m_columns"][] = "ecc_id";
$proto25["m_columns"][] = "category";
$proto25["m_columns"][] = "title";
$proto25["m_columns"][] = "detail";
$proto25["m_columns"][] = "create_by";
$proto25["m_columns"][] = "create_at";
$proto25["m_columns"][] = "update_by";
$proto25["m_columns"][] = "update_at";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "`Eoc_timeline`";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "Eoc_timeline";
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
	"m_strTable" => "Eoc_timeline",
	"m_srcTableName" => "Eoc_timeline"
));

$proto28["m_column"]=$obj;
$proto28["m_bAsc"] = 0;
$proto28["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto28);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Eoc_timeline";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Eoc_timeline = createSqlQuery_Eoc_timeline();


	
		;

									

$tdataEoc_timeline[".sqlquery"] = $queryData_Eoc_timeline;

include_once(getabspath("include/Eoc_timeline_events.php"));
$tableEvents["Eoc_timeline"] = new eventclass_Eoc_timeline;
$tdataEoc_timeline[".hasEvents"] = true;

?>