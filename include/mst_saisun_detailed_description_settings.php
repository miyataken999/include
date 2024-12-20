<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamst_saisun_detailed_description = array();
	$tdatamst_saisun_detailed_description[".truncateText"] = true;
	$tdatamst_saisun_detailed_description[".NumberOfChars"] = 80;
	$tdatamst_saisun_detailed_description[".ShortName"] = "mst_saisun_detailed_description";
	$tdatamst_saisun_detailed_description[".OwnerID"] = "";
	$tdatamst_saisun_detailed_description[".OriginalTable"] = "mst_saisun_detailed_description";

//	field labels
$fieldLabelsmst_saisun_detailed_description = array();
$fieldToolTipsmst_saisun_detailed_description = array();
$pageTitlesmst_saisun_detailed_description = array();
$placeHoldersmst_saisun_detailed_description = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmst_saisun_detailed_description["Japanese"] = array();
	$fieldToolTipsmst_saisun_detailed_description["Japanese"] = array();
	$placeHoldersmst_saisun_detailed_description["Japanese"] = array();
	$pageTitlesmst_saisun_detailed_description["Japanese"] = array();
	$fieldLabelsmst_saisun_detailed_description["Japanese"]["id"] = "Id";
	$fieldToolTipsmst_saisun_detailed_description["Japanese"]["id"] = "";
	$placeHoldersmst_saisun_detailed_description["Japanese"]["id"] = "";
	$fieldLabelsmst_saisun_detailed_description["Japanese"]["category_id"] = "大カテ";
	$fieldToolTipsmst_saisun_detailed_description["Japanese"]["category_id"] = "";
	$placeHoldersmst_saisun_detailed_description["Japanese"]["category_id"] = "";
	$fieldLabelsmst_saisun_detailed_description["Japanese"]["text"] = "テキスト";
	$fieldToolTipsmst_saisun_detailed_description["Japanese"]["text"] = "";
	$placeHoldersmst_saisun_detailed_description["Japanese"]["text"] = "";
	$fieldLabelsmst_saisun_detailed_description["Japanese"]["sort"] = "ソート";
	$fieldToolTipsmst_saisun_detailed_description["Japanese"]["sort"] = "";
	$placeHoldersmst_saisun_detailed_description["Japanese"]["sort"] = "";
	$fieldLabelsmst_saisun_detailed_description["Japanese"]["create_by"] = "登録者";
	$fieldToolTipsmst_saisun_detailed_description["Japanese"]["create_by"] = "";
	$placeHoldersmst_saisun_detailed_description["Japanese"]["create_by"] = "";
	$fieldLabelsmst_saisun_detailed_description["Japanese"]["create_at"] = "登録日";
	$fieldToolTipsmst_saisun_detailed_description["Japanese"]["create_at"] = "";
	$placeHoldersmst_saisun_detailed_description["Japanese"]["create_at"] = "";
	$fieldLabelsmst_saisun_detailed_description["Japanese"]["update_by"] = "更新者";
	$fieldToolTipsmst_saisun_detailed_description["Japanese"]["update_by"] = "";
	$placeHoldersmst_saisun_detailed_description["Japanese"]["update_by"] = "";
	$fieldLabelsmst_saisun_detailed_description["Japanese"]["update_at"] = "更新日";
	$fieldToolTipsmst_saisun_detailed_description["Japanese"]["update_at"] = "";
	$placeHoldersmst_saisun_detailed_description["Japanese"]["update_at"] = "";
	if (count($fieldToolTipsmst_saisun_detailed_description["Japanese"]))
		$tdatamst_saisun_detailed_description[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmst_saisun_detailed_description[""] = array();
	$fieldToolTipsmst_saisun_detailed_description[""] = array();
	$placeHoldersmst_saisun_detailed_description[""] = array();
	$pageTitlesmst_saisun_detailed_description[""] = array();
	$fieldLabelsmst_saisun_detailed_description[""]["id"] = "Id";
	$fieldToolTipsmst_saisun_detailed_description[""]["id"] = "";
	$placeHoldersmst_saisun_detailed_description[""]["id"] = "";
	$fieldLabelsmst_saisun_detailed_description[""]["category_id"] = "Category Id";
	$fieldToolTipsmst_saisun_detailed_description[""]["category_id"] = "";
	$placeHoldersmst_saisun_detailed_description[""]["category_id"] = "";
	$fieldLabelsmst_saisun_detailed_description[""]["text"] = "Text";
	$fieldToolTipsmst_saisun_detailed_description[""]["text"] = "";
	$placeHoldersmst_saisun_detailed_description[""]["text"] = "";
	$fieldLabelsmst_saisun_detailed_description[""]["sort"] = "Sort";
	$fieldToolTipsmst_saisun_detailed_description[""]["sort"] = "";
	$placeHoldersmst_saisun_detailed_description[""]["sort"] = "";
	$fieldLabelsmst_saisun_detailed_description[""]["create_by"] = "Create By";
	$fieldToolTipsmst_saisun_detailed_description[""]["create_by"] = "";
	$placeHoldersmst_saisun_detailed_description[""]["create_by"] = "";
	$fieldLabelsmst_saisun_detailed_description[""]["create_at"] = "Create At";
	$fieldToolTipsmst_saisun_detailed_description[""]["create_at"] = "";
	$placeHoldersmst_saisun_detailed_description[""]["create_at"] = "";
	$fieldLabelsmst_saisun_detailed_description[""]["update_by"] = "Update By";
	$fieldToolTipsmst_saisun_detailed_description[""]["update_by"] = "";
	$placeHoldersmst_saisun_detailed_description[""]["update_by"] = "";
	$fieldLabelsmst_saisun_detailed_description[""]["update_at"] = "Update At";
	$fieldToolTipsmst_saisun_detailed_description[""]["update_at"] = "";
	$placeHoldersmst_saisun_detailed_description[""]["update_at"] = "";
	if (count($fieldToolTipsmst_saisun_detailed_description[""]))
		$tdatamst_saisun_detailed_description[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmst_saisun_detailed_description["English"] = array();
	$fieldToolTipsmst_saisun_detailed_description["English"] = array();
	$placeHoldersmst_saisun_detailed_description["English"] = array();
	$pageTitlesmst_saisun_detailed_description["English"] = array();
	$fieldLabelsmst_saisun_detailed_description["English"]["id"] = "Id";
	$fieldToolTipsmst_saisun_detailed_description["English"]["id"] = "";
	$placeHoldersmst_saisun_detailed_description["English"]["id"] = "";
	$fieldLabelsmst_saisun_detailed_description["English"]["category_id"] = "Category Id";
	$fieldToolTipsmst_saisun_detailed_description["English"]["category_id"] = "";
	$placeHoldersmst_saisun_detailed_description["English"]["category_id"] = "";
	$fieldLabelsmst_saisun_detailed_description["English"]["text"] = "Text";
	$fieldToolTipsmst_saisun_detailed_description["English"]["text"] = "";
	$placeHoldersmst_saisun_detailed_description["English"]["text"] = "";
	$fieldLabelsmst_saisun_detailed_description["English"]["sort"] = "Sort";
	$fieldToolTipsmst_saisun_detailed_description["English"]["sort"] = "";
	$placeHoldersmst_saisun_detailed_description["English"]["sort"] = "";
	$fieldLabelsmst_saisun_detailed_description["English"]["create_by"] = "Create By";
	$fieldToolTipsmst_saisun_detailed_description["English"]["create_by"] = "";
	$placeHoldersmst_saisun_detailed_description["English"]["create_by"] = "";
	$fieldLabelsmst_saisun_detailed_description["English"]["create_at"] = "Create At";
	$fieldToolTipsmst_saisun_detailed_description["English"]["create_at"] = "";
	$placeHoldersmst_saisun_detailed_description["English"]["create_at"] = "";
	$fieldLabelsmst_saisun_detailed_description["English"]["update_by"] = "Update By";
	$fieldToolTipsmst_saisun_detailed_description["English"]["update_by"] = "";
	$placeHoldersmst_saisun_detailed_description["English"]["update_by"] = "";
	$fieldLabelsmst_saisun_detailed_description["English"]["update_at"] = "Update At";
	$fieldToolTipsmst_saisun_detailed_description["English"]["update_at"] = "";
	$placeHoldersmst_saisun_detailed_description["English"]["update_at"] = "";
	if (count($fieldToolTipsmst_saisun_detailed_description["English"]))
		$tdatamst_saisun_detailed_description[".isUseToolTips"] = true;
}


	$tdatamst_saisun_detailed_description[".NCSearch"] = true;



$tdatamst_saisun_detailed_description[".shortTableName"] = "mst_saisun_detailed_description";
$tdatamst_saisun_detailed_description[".nSecOptions"] = 0;
$tdatamst_saisun_detailed_description[".recsPerRowPrint"] = 1;
$tdatamst_saisun_detailed_description[".mainTableOwnerID"] = "";
$tdatamst_saisun_detailed_description[".moveNext"] = 1;
$tdatamst_saisun_detailed_description[".entityType"] = 0;

$tdatamst_saisun_detailed_description[".strOriginalTableName"] = "mst_saisun_detailed_description";

	



$tdatamst_saisun_detailed_description[".showAddInPopup"] = false;

$tdatamst_saisun_detailed_description[".showEditInPopup"] = false;

$tdatamst_saisun_detailed_description[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamst_saisun_detailed_description[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamst_saisun_detailed_description[".fieldsForRegister"] = array();

$tdatamst_saisun_detailed_description[".listAjax"] = false;

	$tdatamst_saisun_detailed_description[".audit"] = true;

	$tdatamst_saisun_detailed_description[".locking"] = false;



$tdatamst_saisun_detailed_description[".list"] = true;

$tdatamst_saisun_detailed_description[".inlineEdit"] = true;


$tdatamst_saisun_detailed_description[".reorderRecordsByHeader"] = true;



$tdatamst_saisun_detailed_description[".inlineAdd"] = true;

$tdatamst_saisun_detailed_description[".import"] = true;

$tdatamst_saisun_detailed_description[".exportTo"] = true;


$tdatamst_saisun_detailed_description[".delete"] = true;

$tdatamst_saisun_detailed_description[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamst_saisun_detailed_description[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamst_saisun_detailed_description[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamst_saisun_detailed_description[".searchSaving"] = false;
//

$tdatamst_saisun_detailed_description[".showSearchPanel"] = true;
		$tdatamst_saisun_detailed_description[".flexibleSearch"] = true;

$tdatamst_saisun_detailed_description[".isUseAjaxSuggest"] = true;

$tdatamst_saisun_detailed_description[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatamst_saisun_detailed_description[".ajaxCodeSnippetAdded"] = false;

$tdatamst_saisun_detailed_description[".buttonsAdded"] = false;

$tdatamst_saisun_detailed_description[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamst_saisun_detailed_description[".isUseTimeForSearch"] = false;





$tdatamst_saisun_detailed_description[".allSearchFields"] = array();
$tdatamst_saisun_detailed_description[".filterFields"] = array();
$tdatamst_saisun_detailed_description[".requiredSearchFields"] = array();

$tdatamst_saisun_detailed_description[".allSearchFields"][] = "id";
	$tdatamst_saisun_detailed_description[".allSearchFields"][] = "category_id";
	$tdatamst_saisun_detailed_description[".allSearchFields"][] = "text";
	$tdatamst_saisun_detailed_description[".allSearchFields"][] = "sort";
	$tdatamst_saisun_detailed_description[".allSearchFields"][] = "create_by";
	$tdatamst_saisun_detailed_description[".allSearchFields"][] = "create_at";
	$tdatamst_saisun_detailed_description[".allSearchFields"][] = "update_by";
	$tdatamst_saisun_detailed_description[".allSearchFields"][] = "update_at";
	

$tdatamst_saisun_detailed_description[".googleLikeFields"] = array();
$tdatamst_saisun_detailed_description[".googleLikeFields"][] = "id";
$tdatamst_saisun_detailed_description[".googleLikeFields"][] = "category_id";
$tdatamst_saisun_detailed_description[".googleLikeFields"][] = "text";
$tdatamst_saisun_detailed_description[".googleLikeFields"][] = "sort";
$tdatamst_saisun_detailed_description[".googleLikeFields"][] = "create_by";
$tdatamst_saisun_detailed_description[".googleLikeFields"][] = "create_at";
$tdatamst_saisun_detailed_description[".googleLikeFields"][] = "update_by";
$tdatamst_saisun_detailed_description[".googleLikeFields"][] = "update_at";


$tdatamst_saisun_detailed_description[".advSearchFields"] = array();
$tdatamst_saisun_detailed_description[".advSearchFields"][] = "id";
$tdatamst_saisun_detailed_description[".advSearchFields"][] = "category_id";
$tdatamst_saisun_detailed_description[".advSearchFields"][] = "text";
$tdatamst_saisun_detailed_description[".advSearchFields"][] = "sort";
$tdatamst_saisun_detailed_description[".advSearchFields"][] = "create_by";
$tdatamst_saisun_detailed_description[".advSearchFields"][] = "create_at";
$tdatamst_saisun_detailed_description[".advSearchFields"][] = "update_by";
$tdatamst_saisun_detailed_description[".advSearchFields"][] = "update_at";

$tdatamst_saisun_detailed_description[".tableType"] = "list";

$tdatamst_saisun_detailed_description[".printerPageOrientation"] = 0;
$tdatamst_saisun_detailed_description[".nPrinterPageScale"] = 100;

$tdatamst_saisun_detailed_description[".nPrinterSplitRecords"] = 40;

$tdatamst_saisun_detailed_description[".nPrinterPDFSplitRecords"] = 40;



$tdatamst_saisun_detailed_description[".geocodingEnabled"] = false;





$tdatamst_saisun_detailed_description[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamst_saisun_detailed_description[".pageSize"] = 20;

$tdatamst_saisun_detailed_description[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `sort`";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamst_saisun_detailed_description[".strOrderBy"] = $tstrOrderBy;

$tdatamst_saisun_detailed_description[".orderindexes"] = array();
$tdatamst_saisun_detailed_description[".orderindexes"][] = array(4, (1 ? "ASC" : "DESC"), "`sort`");

$tdatamst_saisun_detailed_description[".sqlHead"] = "SELECT `id`,  `category_id`,  `text`,  `sort`,  `create_by`,  `create_at`,  `update_by`,  `update_at`";
$tdatamst_saisun_detailed_description[".sqlFrom"] = "FROM `mst_saisun_detailed_description`";
$tdatamst_saisun_detailed_description[".sqlWhereExpr"] = "";
$tdatamst_saisun_detailed_description[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamst_saisun_detailed_description[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamst_saisun_detailed_description[".arrGroupsPerPage"] = $arrGPP;

$tdatamst_saisun_detailed_description[".highlightSearchResults"] = true;

$tableKeysmst_saisun_detailed_description = array();
$tableKeysmst_saisun_detailed_description[] = "id";
$tdatamst_saisun_detailed_description[".Keys"] = $tableKeysmst_saisun_detailed_description;

$tdatamst_saisun_detailed_description[".listFields"] = array();
$tdatamst_saisun_detailed_description[".listFields"][] = "id";
$tdatamst_saisun_detailed_description[".listFields"][] = "category_id";
$tdatamst_saisun_detailed_description[".listFields"][] = "text";
$tdatamst_saisun_detailed_description[".listFields"][] = "sort";
$tdatamst_saisun_detailed_description[".listFields"][] = "create_by";
$tdatamst_saisun_detailed_description[".listFields"][] = "create_at";
$tdatamst_saisun_detailed_description[".listFields"][] = "update_by";
$tdatamst_saisun_detailed_description[".listFields"][] = "update_at";

$tdatamst_saisun_detailed_description[".hideMobileList"] = array();


$tdatamst_saisun_detailed_description[".viewFields"] = array();

$tdatamst_saisun_detailed_description[".addFields"] = array();

$tdatamst_saisun_detailed_description[".masterListFields"] = array();
$tdatamst_saisun_detailed_description[".masterListFields"][] = "id";
$tdatamst_saisun_detailed_description[".masterListFields"][] = "category_id";
$tdatamst_saisun_detailed_description[".masterListFields"][] = "text";
$tdatamst_saisun_detailed_description[".masterListFields"][] = "sort";
$tdatamst_saisun_detailed_description[".masterListFields"][] = "create_by";
$tdatamst_saisun_detailed_description[".masterListFields"][] = "create_at";
$tdatamst_saisun_detailed_description[".masterListFields"][] = "update_by";
$tdatamst_saisun_detailed_description[".masterListFields"][] = "update_at";

$tdatamst_saisun_detailed_description[".inlineAddFields"] = array();
$tdatamst_saisun_detailed_description[".inlineAddFields"][] = "category_id";
$tdatamst_saisun_detailed_description[".inlineAddFields"][] = "text";
$tdatamst_saisun_detailed_description[".inlineAddFields"][] = "sort";

$tdatamst_saisun_detailed_description[".editFields"] = array();

$tdatamst_saisun_detailed_description[".inlineEditFields"] = array();
$tdatamst_saisun_detailed_description[".inlineEditFields"][] = "category_id";
$tdatamst_saisun_detailed_description[".inlineEditFields"][] = "text";
$tdatamst_saisun_detailed_description[".inlineEditFields"][] = "sort";

$tdatamst_saisun_detailed_description[".updateSelectedFields"] = array();


$tdatamst_saisun_detailed_description[".exportFields"] = array();
$tdatamst_saisun_detailed_description[".exportFields"][] = "id";
$tdatamst_saisun_detailed_description[".exportFields"][] = "category_id";
$tdatamst_saisun_detailed_description[".exportFields"][] = "text";
$tdatamst_saisun_detailed_description[".exportFields"][] = "sort";
$tdatamst_saisun_detailed_description[".exportFields"][] = "create_by";
$tdatamst_saisun_detailed_description[".exportFields"][] = "create_at";
$tdatamst_saisun_detailed_description[".exportFields"][] = "update_by";
$tdatamst_saisun_detailed_description[".exportFields"][] = "update_at";

$tdatamst_saisun_detailed_description[".importFields"] = array();
$tdatamst_saisun_detailed_description[".importFields"][] = "id";
$tdatamst_saisun_detailed_description[".importFields"][] = "category_id";
$tdatamst_saisun_detailed_description[".importFields"][] = "text";
$tdatamst_saisun_detailed_description[".importFields"][] = "sort";

$tdatamst_saisun_detailed_description[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "mst_saisun_detailed_description";
	$fdata["Label"] = GetFieldLabel("mst_saisun_detailed_description","id");
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




	$tdatamst_saisun_detailed_description["id"] = $fdata;
//	category_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "category_id";
	$fdata["GoodName"] = "category_id";
	$fdata["ownerTable"] = "mst_saisun_detailed_description";
	$fdata["Label"] = GetFieldLabel("mst_saisun_detailed_description","category_id");
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
	$edata["LookupTable"] = "vw_store_categories_for_saisun_group";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "category_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "category_name";

	
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




	$tdatamst_saisun_detailed_description["category_id"] = $fdata;
//	text
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "text";
	$fdata["GoodName"] = "text";
	$fdata["ownerTable"] = "mst_saisun_detailed_description";
	$fdata["Label"] = GetFieldLabel("mst_saisun_detailed_description","text");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "text";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`text`";

	
	
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




	$tdatamst_saisun_detailed_description["text"] = $fdata;
//	sort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "sort";
	$fdata["GoodName"] = "sort";
	$fdata["ownerTable"] = "mst_saisun_detailed_description";
	$fdata["Label"] = GetFieldLabel("mst_saisun_detailed_description","sort");
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




	$tdatamst_saisun_detailed_description["sort"] = $fdata;
//	create_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "create_by";
	$fdata["GoodName"] = "create_by";
	$fdata["ownerTable"] = "mst_saisun_detailed_description";
	$fdata["Label"] = GetFieldLabel("mst_saisun_detailed_description","create_by");
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




	$tdatamst_saisun_detailed_description["create_by"] = $fdata;
//	create_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "create_at";
	$fdata["GoodName"] = "create_at";
	$fdata["ownerTable"] = "mst_saisun_detailed_description";
	$fdata["Label"] = GetFieldLabel("mst_saisun_detailed_description","create_at");
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




	$tdatamst_saisun_detailed_description["create_at"] = $fdata;
//	update_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "update_by";
	$fdata["GoodName"] = "update_by";
	$fdata["ownerTable"] = "mst_saisun_detailed_description";
	$fdata["Label"] = GetFieldLabel("mst_saisun_detailed_description","update_by");
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




	$tdatamst_saisun_detailed_description["update_by"] = $fdata;
//	update_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "update_at";
	$fdata["GoodName"] = "update_at";
	$fdata["ownerTable"] = "mst_saisun_detailed_description";
	$fdata["Label"] = GetFieldLabel("mst_saisun_detailed_description","update_at");
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




	$tdatamst_saisun_detailed_description["update_at"] = $fdata;


$tables_data["mst_saisun_detailed_description"]=&$tdatamst_saisun_detailed_description;
$field_labels["mst_saisun_detailed_description"] = &$fieldLabelsmst_saisun_detailed_description;
$fieldToolTips["mst_saisun_detailed_description"] = &$fieldToolTipsmst_saisun_detailed_description;
$placeHolders["mst_saisun_detailed_description"] = &$placeHoldersmst_saisun_detailed_description;
$page_titles["mst_saisun_detailed_description"] = &$pageTitlesmst_saisun_detailed_description;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mst_saisun_detailed_description"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mst_saisun_detailed_description"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mst_saisun_detailed_description()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  `category_id`,  `text`,  `sort`,  `create_by`,  `create_at`,  `update_by`,  `update_at`";
$proto0["m_strFrom"] = "FROM `mst_saisun_detailed_description`";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY `sort`";
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
	"m_strTable" => "mst_saisun_detailed_description",
	"m_srcTableName" => "mst_saisun_detailed_description"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "mst_saisun_detailed_description";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "category_id",
	"m_strTable" => "mst_saisun_detailed_description",
	"m_srcTableName" => "mst_saisun_detailed_description"
));

$proto8["m_sql"] = "`category_id`";
$proto8["m_srcTableName"] = "mst_saisun_detailed_description";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "text",
	"m_strTable" => "mst_saisun_detailed_description",
	"m_srcTableName" => "mst_saisun_detailed_description"
));

$proto10["m_sql"] = "`text`";
$proto10["m_srcTableName"] = "mst_saisun_detailed_description";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "sort",
	"m_strTable" => "mst_saisun_detailed_description",
	"m_srcTableName" => "mst_saisun_detailed_description"
));

$proto12["m_sql"] = "`sort`";
$proto12["m_srcTableName"] = "mst_saisun_detailed_description";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "create_by",
	"m_strTable" => "mst_saisun_detailed_description",
	"m_srcTableName" => "mst_saisun_detailed_description"
));

$proto14["m_sql"] = "`create_by`";
$proto14["m_srcTableName"] = "mst_saisun_detailed_description";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "create_at",
	"m_strTable" => "mst_saisun_detailed_description",
	"m_srcTableName" => "mst_saisun_detailed_description"
));

$proto16["m_sql"] = "`create_at`";
$proto16["m_srcTableName"] = "mst_saisun_detailed_description";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "update_by",
	"m_strTable" => "mst_saisun_detailed_description",
	"m_srcTableName" => "mst_saisun_detailed_description"
));

$proto18["m_sql"] = "`update_by`";
$proto18["m_srcTableName"] = "mst_saisun_detailed_description";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "update_at",
	"m_strTable" => "mst_saisun_detailed_description",
	"m_srcTableName" => "mst_saisun_detailed_description"
));

$proto20["m_sql"] = "`update_at`";
$proto20["m_srcTableName"] = "mst_saisun_detailed_description";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "mst_saisun_detailed_description";
$proto23["m_srcTableName"] = "mst_saisun_detailed_description";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "id";
$proto23["m_columns"][] = "category_id";
$proto23["m_columns"][] = "text";
$proto23["m_columns"][] = "sort";
$proto23["m_columns"][] = "create_by";
$proto23["m_columns"][] = "create_at";
$proto23["m_columns"][] = "update_by";
$proto23["m_columns"][] = "update_at";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "`mst_saisun_detailed_description`";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "mst_saisun_detailed_description";
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
	"m_strName" => "sort",
	"m_strTable" => "mst_saisun_detailed_description",
	"m_srcTableName" => "mst_saisun_detailed_description"
));

$proto26["m_column"]=$obj;
$proto26["m_bAsc"] = 1;
$proto26["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto26);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="mst_saisun_detailed_description";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mst_saisun_detailed_description = createSqlQuery_mst_saisun_detailed_description();


	
		;

								

$tdatamst_saisun_detailed_description[".sqlquery"] = $queryData_mst_saisun_detailed_description;

include_once(getabspath("include/mst_saisun_detailed_description_events.php"));
$tableEvents["mst_saisun_detailed_description"] = new eventclass_mst_saisun_detailed_description;
$tdatamst_saisun_detailed_description[".hasEvents"] = true;

?>