<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamst_heel = array();
	$tdatamst_heel[".truncateText"] = true;
	$tdatamst_heel[".NumberOfChars"] = 80;
	$tdatamst_heel[".ShortName"] = "mst_heel";
	$tdatamst_heel[".OwnerID"] = "";
	$tdatamst_heel[".OriginalTable"] = "mst_heel";

//	field labels
$fieldLabelsmst_heel = array();
$fieldToolTipsmst_heel = array();
$pageTitlesmst_heel = array();
$placeHoldersmst_heel = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmst_heel["Japanese"] = array();
	$fieldToolTipsmst_heel["Japanese"] = array();
	$placeHoldersmst_heel["Japanese"] = array();
	$pageTitlesmst_heel["Japanese"] = array();
	$fieldLabelsmst_heel["Japanese"]["id"] = "Id";
	$fieldToolTipsmst_heel["Japanese"]["id"] = "";
	$placeHoldersmst_heel["Japanese"]["id"] = "";
	$fieldLabelsmst_heel["Japanese"]["name"] = "Name";
	$fieldToolTipsmst_heel["Japanese"]["name"] = "";
	$placeHoldersmst_heel["Japanese"]["name"] = "";
	$fieldLabelsmst_heel["Japanese"]["english_name"] = "English Name";
	$fieldToolTipsmst_heel["Japanese"]["english_name"] = "";
	$placeHoldersmst_heel["Japanese"]["english_name"] = "";
	$fieldLabelsmst_heel["Japanese"]["sort"] = "Sort";
	$fieldToolTipsmst_heel["Japanese"]["sort"] = "";
	$placeHoldersmst_heel["Japanese"]["sort"] = "";
	$fieldLabelsmst_heel["Japanese"]["line_category"] = "Line Category";
	$fieldToolTipsmst_heel["Japanese"]["line_category"] = "";
	$placeHoldersmst_heel["Japanese"]["line_category"] = "";
	$fieldLabelsmst_heel["Japanese"]["yahoo_junle"] = "Yahoo Junle";
	$fieldToolTipsmst_heel["Japanese"]["yahoo_junle"] = "";
	$placeHoldersmst_heel["Japanese"]["yahoo_junle"] = "";
	$fieldLabelsmst_heel["Japanese"]["category_id"] = "Category Id";
	$fieldToolTipsmst_heel["Japanese"]["category_id"] = "";
	$placeHoldersmst_heel["Japanese"]["category_id"] = "";
	$fieldLabelsmst_heel["Japanese"]["sub_category_id1"] = "Sub Category Id1";
	$fieldToolTipsmst_heel["Japanese"]["sub_category_id1"] = "";
	$placeHoldersmst_heel["Japanese"]["sub_category_id1"] = "";
	$fieldLabelsmst_heel["Japanese"]["update_by"] = "更新者";
	$fieldToolTipsmst_heel["Japanese"]["update_by"] = "";
	$placeHoldersmst_heel["Japanese"]["update_by"] = "";
	$fieldLabelsmst_heel["Japanese"]["update_at"] = "更新日";
	$fieldToolTipsmst_heel["Japanese"]["update_at"] = "";
	$placeHoldersmst_heel["Japanese"]["update_at"] = "";
	$fieldLabelsmst_heel["Japanese"]["create_by"] = "登録者";
	$fieldToolTipsmst_heel["Japanese"]["create_by"] = "";
	$placeHoldersmst_heel["Japanese"]["create_by"] = "";
	$fieldLabelsmst_heel["Japanese"]["create_at"] = "登録日";
	$fieldToolTipsmst_heel["Japanese"]["create_at"] = "";
	$placeHoldersmst_heel["Japanese"]["create_at"] = "";
	if (count($fieldToolTipsmst_heel["Japanese"]))
		$tdatamst_heel[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmst_heel[""] = array();
	$fieldToolTipsmst_heel[""] = array();
	$placeHoldersmst_heel[""] = array();
	$pageTitlesmst_heel[""] = array();
	$fieldLabelsmst_heel[""]["id"] = "Id";
	$fieldToolTipsmst_heel[""]["id"] = "";
	$placeHoldersmst_heel[""]["id"] = "";
	$fieldLabelsmst_heel[""]["name"] = "Name";
	$fieldToolTipsmst_heel[""]["name"] = "";
	$placeHoldersmst_heel[""]["name"] = "";
	$fieldLabelsmst_heel[""]["english_name"] = "English Name";
	$fieldToolTipsmst_heel[""]["english_name"] = "";
	$placeHoldersmst_heel[""]["english_name"] = "";
	$fieldLabelsmst_heel[""]["sort"] = "Sort";
	$fieldToolTipsmst_heel[""]["sort"] = "";
	$placeHoldersmst_heel[""]["sort"] = "";
	$fieldLabelsmst_heel[""]["line_category"] = "Line Category";
	$fieldToolTipsmst_heel[""]["line_category"] = "";
	$placeHoldersmst_heel[""]["line_category"] = "";
	$fieldLabelsmst_heel[""]["yahoo_junle"] = "Yahoo Junle";
	$fieldToolTipsmst_heel[""]["yahoo_junle"] = "";
	$placeHoldersmst_heel[""]["yahoo_junle"] = "";
	$fieldLabelsmst_heel[""]["category_id"] = "Category Id";
	$fieldToolTipsmst_heel[""]["category_id"] = "";
	$placeHoldersmst_heel[""]["category_id"] = "";
	$fieldLabelsmst_heel[""]["sub_category_id1"] = "Sub Category Id1";
	$fieldToolTipsmst_heel[""]["sub_category_id1"] = "";
	$placeHoldersmst_heel[""]["sub_category_id1"] = "";
	$fieldLabelsmst_heel[""]["update_by"] = "Update By";
	$fieldToolTipsmst_heel[""]["update_by"] = "";
	$placeHoldersmst_heel[""]["update_by"] = "";
	$fieldLabelsmst_heel[""]["update_at"] = "Update At";
	$fieldToolTipsmst_heel[""]["update_at"] = "";
	$placeHoldersmst_heel[""]["update_at"] = "";
	$fieldLabelsmst_heel[""]["create_by"] = "Create By";
	$fieldToolTipsmst_heel[""]["create_by"] = "";
	$placeHoldersmst_heel[""]["create_by"] = "";
	$fieldLabelsmst_heel[""]["create_at"] = "Create At";
	$fieldToolTipsmst_heel[""]["create_at"] = "";
	$placeHoldersmst_heel[""]["create_at"] = "";
	if (count($fieldToolTipsmst_heel[""]))
		$tdatamst_heel[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmst_heel["English"] = array();
	$fieldToolTipsmst_heel["English"] = array();
	$placeHoldersmst_heel["English"] = array();
	$pageTitlesmst_heel["English"] = array();
	$fieldLabelsmst_heel["English"]["id"] = "Id";
	$fieldToolTipsmst_heel["English"]["id"] = "";
	$placeHoldersmst_heel["English"]["id"] = "";
	$fieldLabelsmst_heel["English"]["name"] = "Name";
	$fieldToolTipsmst_heel["English"]["name"] = "";
	$placeHoldersmst_heel["English"]["name"] = "";
	$fieldLabelsmst_heel["English"]["english_name"] = "English Name";
	$fieldToolTipsmst_heel["English"]["english_name"] = "";
	$placeHoldersmst_heel["English"]["english_name"] = "";
	$fieldLabelsmst_heel["English"]["sort"] = "Sort";
	$fieldToolTipsmst_heel["English"]["sort"] = "";
	$placeHoldersmst_heel["English"]["sort"] = "";
	$fieldLabelsmst_heel["English"]["line_category"] = "Line Category";
	$fieldToolTipsmst_heel["English"]["line_category"] = "";
	$placeHoldersmst_heel["English"]["line_category"] = "";
	$fieldLabelsmst_heel["English"]["yahoo_junle"] = "Yahoo Junle";
	$fieldToolTipsmst_heel["English"]["yahoo_junle"] = "";
	$placeHoldersmst_heel["English"]["yahoo_junle"] = "";
	$fieldLabelsmst_heel["English"]["category_id"] = "Category Id";
	$fieldToolTipsmst_heel["English"]["category_id"] = "";
	$placeHoldersmst_heel["English"]["category_id"] = "";
	$fieldLabelsmst_heel["English"]["sub_category_id1"] = "Sub Category Id1";
	$fieldToolTipsmst_heel["English"]["sub_category_id1"] = "";
	$placeHoldersmst_heel["English"]["sub_category_id1"] = "";
	$fieldLabelsmst_heel["English"]["update_by"] = "Update By";
	$fieldToolTipsmst_heel["English"]["update_by"] = "";
	$placeHoldersmst_heel["English"]["update_by"] = "";
	$fieldLabelsmst_heel["English"]["update_at"] = "Update At";
	$fieldToolTipsmst_heel["English"]["update_at"] = "";
	$placeHoldersmst_heel["English"]["update_at"] = "";
	$fieldLabelsmst_heel["English"]["create_by"] = "Create By";
	$fieldToolTipsmst_heel["English"]["create_by"] = "";
	$placeHoldersmst_heel["English"]["create_by"] = "";
	$fieldLabelsmst_heel["English"]["create_at"] = "Create At";
	$fieldToolTipsmst_heel["English"]["create_at"] = "";
	$placeHoldersmst_heel["English"]["create_at"] = "";
	if (count($fieldToolTipsmst_heel["English"]))
		$tdatamst_heel[".isUseToolTips"] = true;
}


	$tdatamst_heel[".NCSearch"] = true;



$tdatamst_heel[".shortTableName"] = "mst_heel";
$tdatamst_heel[".nSecOptions"] = 0;
$tdatamst_heel[".recsPerRowPrint"] = 1;
$tdatamst_heel[".mainTableOwnerID"] = "";
$tdatamst_heel[".moveNext"] = 1;
$tdatamst_heel[".entityType"] = 0;

$tdatamst_heel[".strOriginalTableName"] = "mst_heel";

	



$tdatamst_heel[".showAddInPopup"] = false;

$tdatamst_heel[".showEditInPopup"] = false;

$tdatamst_heel[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamst_heel[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamst_heel[".fieldsForRegister"] = array();

$tdatamst_heel[".listAjax"] = false;

	$tdatamst_heel[".audit"] = true;

	$tdatamst_heel[".locking"] = false;



$tdatamst_heel[".list"] = true;

$tdatamst_heel[".inlineEdit"] = true;


$tdatamst_heel[".reorderRecordsByHeader"] = true;



$tdatamst_heel[".inlineAdd"] = true;

$tdatamst_heel[".import"] = true;

$tdatamst_heel[".exportTo"] = true;


$tdatamst_heel[".delete"] = true;

$tdatamst_heel[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamst_heel[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamst_heel[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamst_heel[".searchSaving"] = false;
//

$tdatamst_heel[".showSearchPanel"] = true;
		$tdatamst_heel[".flexibleSearch"] = true;

$tdatamst_heel[".isUseAjaxSuggest"] = true;

$tdatamst_heel[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatamst_heel[".ajaxCodeSnippetAdded"] = false;

$tdatamst_heel[".buttonsAdded"] = false;

$tdatamst_heel[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamst_heel[".isUseTimeForSearch"] = false;





$tdatamst_heel[".allSearchFields"] = array();
$tdatamst_heel[".filterFields"] = array();
$tdatamst_heel[".requiredSearchFields"] = array();

$tdatamst_heel[".allSearchFields"][] = "id";
	$tdatamst_heel[".allSearchFields"][] = "name";
	$tdatamst_heel[".allSearchFields"][] = "english_name";
	$tdatamst_heel[".allSearchFields"][] = "sort";
	$tdatamst_heel[".allSearchFields"][] = "line_category";
	$tdatamst_heel[".allSearchFields"][] = "yahoo_junle";
	$tdatamst_heel[".allSearchFields"][] = "category_id";
	$tdatamst_heel[".allSearchFields"][] = "sub_category_id1";
	$tdatamst_heel[".allSearchFields"][] = "update_by";
	$tdatamst_heel[".allSearchFields"][] = "update_at";
	$tdatamst_heel[".allSearchFields"][] = "create_by";
	$tdatamst_heel[".allSearchFields"][] = "create_at";
	

$tdatamst_heel[".googleLikeFields"] = array();
$tdatamst_heel[".googleLikeFields"][] = "id";
$tdatamst_heel[".googleLikeFields"][] = "name";
$tdatamst_heel[".googleLikeFields"][] = "english_name";
$tdatamst_heel[".googleLikeFields"][] = "sort";
$tdatamst_heel[".googleLikeFields"][] = "line_category";
$tdatamst_heel[".googleLikeFields"][] = "yahoo_junle";
$tdatamst_heel[".googleLikeFields"][] = "category_id";
$tdatamst_heel[".googleLikeFields"][] = "sub_category_id1";
$tdatamst_heel[".googleLikeFields"][] = "update_by";
$tdatamst_heel[".googleLikeFields"][] = "update_at";
$tdatamst_heel[".googleLikeFields"][] = "create_by";
$tdatamst_heel[".googleLikeFields"][] = "create_at";

$tdatamst_heel[".panelSearchFields"] = array();
$tdatamst_heel[".searchPanelOptions"] = array();
$tdatamst_heel[".panelSearchFields"][] = "name";
	$tdatamst_heel[".panelSearchFields"][] = "yahoo_junle";
	
$tdatamst_heel[".advSearchFields"] = array();
$tdatamst_heel[".advSearchFields"][] = "id";
$tdatamst_heel[".advSearchFields"][] = "name";
$tdatamst_heel[".advSearchFields"][] = "english_name";
$tdatamst_heel[".advSearchFields"][] = "sort";
$tdatamst_heel[".advSearchFields"][] = "line_category";
$tdatamst_heel[".advSearchFields"][] = "yahoo_junle";
$tdatamst_heel[".advSearchFields"][] = "category_id";
$tdatamst_heel[".advSearchFields"][] = "sub_category_id1";
$tdatamst_heel[".advSearchFields"][] = "update_by";
$tdatamst_heel[".advSearchFields"][] = "update_at";
$tdatamst_heel[".advSearchFields"][] = "create_by";
$tdatamst_heel[".advSearchFields"][] = "create_at";

$tdatamst_heel[".tableType"] = "list";

$tdatamst_heel[".printerPageOrientation"] = 0;
$tdatamst_heel[".nPrinterPageScale"] = 100;

$tdatamst_heel[".nPrinterSplitRecords"] = 40;

$tdatamst_heel[".nPrinterPDFSplitRecords"] = 40;



$tdatamst_heel[".geocodingEnabled"] = false;





$tdatamst_heel[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamst_heel[".pageSize"] = 100;

$tdatamst_heel[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY id DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamst_heel[".strOrderBy"] = $tstrOrderBy;

$tdatamst_heel[".orderindexes"] = array();
$tdatamst_heel[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "`id`");

$tdatamst_heel[".sqlHead"] = "SELECT id,  name,  english_name,  sort,  line_category,  yahoo_junle,  category_id,  sub_category_id1,  update_by,  update_at,  create_by,  create_at";
$tdatamst_heel[".sqlFrom"] = "FROM mst_heel";
$tdatamst_heel[".sqlWhereExpr"] = "";
$tdatamst_heel[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamst_heel[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamst_heel[".arrGroupsPerPage"] = $arrGPP;

$tdatamst_heel[".highlightSearchResults"] = true;

$tableKeysmst_heel = array();
$tableKeysmst_heel[] = "id";
$tdatamst_heel[".Keys"] = $tableKeysmst_heel;

$tdatamst_heel[".listFields"] = array();
$tdatamst_heel[".listFields"][] = "id";
$tdatamst_heel[".listFields"][] = "name";
$tdatamst_heel[".listFields"][] = "english_name";
$tdatamst_heel[".listFields"][] = "sort";
$tdatamst_heel[".listFields"][] = "line_category";
$tdatamst_heel[".listFields"][] = "yahoo_junle";
$tdatamst_heel[".listFields"][] = "category_id";
$tdatamst_heel[".listFields"][] = "sub_category_id1";
$tdatamst_heel[".listFields"][] = "update_by";
$tdatamst_heel[".listFields"][] = "update_at";
$tdatamst_heel[".listFields"][] = "create_by";
$tdatamst_heel[".listFields"][] = "create_at";

$tdatamst_heel[".hideMobileList"] = array();


$tdatamst_heel[".viewFields"] = array();

$tdatamst_heel[".addFields"] = array();

$tdatamst_heel[".masterListFields"] = array();
$tdatamst_heel[".masterListFields"][] = "id";
$tdatamst_heel[".masterListFields"][] = "name";
$tdatamst_heel[".masterListFields"][] = "english_name";
$tdatamst_heel[".masterListFields"][] = "sort";
$tdatamst_heel[".masterListFields"][] = "line_category";
$tdatamst_heel[".masterListFields"][] = "yahoo_junle";
$tdatamst_heel[".masterListFields"][] = "category_id";
$tdatamst_heel[".masterListFields"][] = "sub_category_id1";
$tdatamst_heel[".masterListFields"][] = "update_by";
$tdatamst_heel[".masterListFields"][] = "update_at";
$tdatamst_heel[".masterListFields"][] = "create_by";
$tdatamst_heel[".masterListFields"][] = "create_at";

$tdatamst_heel[".inlineAddFields"] = array();
$tdatamst_heel[".inlineAddFields"][] = "name";
$tdatamst_heel[".inlineAddFields"][] = "english_name";
$tdatamst_heel[".inlineAddFields"][] = "sort";
$tdatamst_heel[".inlineAddFields"][] = "line_category";
$tdatamst_heel[".inlineAddFields"][] = "yahoo_junle";
$tdatamst_heel[".inlineAddFields"][] = "category_id";
$tdatamst_heel[".inlineAddFields"][] = "sub_category_id1";

$tdatamst_heel[".editFields"] = array();

$tdatamst_heel[".inlineEditFields"] = array();
$tdatamst_heel[".inlineEditFields"][] = "name";
$tdatamst_heel[".inlineEditFields"][] = "english_name";
$tdatamst_heel[".inlineEditFields"][] = "sort";
$tdatamst_heel[".inlineEditFields"][] = "line_category";
$tdatamst_heel[".inlineEditFields"][] = "yahoo_junle";
$tdatamst_heel[".inlineEditFields"][] = "category_id";
$tdatamst_heel[".inlineEditFields"][] = "sub_category_id1";

$tdatamst_heel[".updateSelectedFields"] = array();


$tdatamst_heel[".exportFields"] = array();
$tdatamst_heel[".exportFields"][] = "id";
$tdatamst_heel[".exportFields"][] = "name";
$tdatamst_heel[".exportFields"][] = "english_name";
$tdatamst_heel[".exportFields"][] = "sort";
$tdatamst_heel[".exportFields"][] = "line_category";
$tdatamst_heel[".exportFields"][] = "yahoo_junle";
$tdatamst_heel[".exportFields"][] = "category_id";
$tdatamst_heel[".exportFields"][] = "sub_category_id1";
$tdatamst_heel[".exportFields"][] = "update_by";
$tdatamst_heel[".exportFields"][] = "update_at";
$tdatamst_heel[".exportFields"][] = "create_by";
$tdatamst_heel[".exportFields"][] = "create_at";

$tdatamst_heel[".importFields"] = array();
$tdatamst_heel[".importFields"][] = "id";
$tdatamst_heel[".importFields"][] = "name";
$tdatamst_heel[".importFields"][] = "english_name";
$tdatamst_heel[".importFields"][] = "sort";
$tdatamst_heel[".importFields"][] = "line_category";
$tdatamst_heel[".importFields"][] = "yahoo_junle";
$tdatamst_heel[".importFields"][] = "category_id";
$tdatamst_heel[".importFields"][] = "sub_category_id1";

$tdatamst_heel[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "mst_heel";
	$fdata["Label"] = GetFieldLabel("mst_heel","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
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




	$tdatamst_heel["id"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "mst_heel";
	$fdata["Label"] = GetFieldLabel("mst_heel","name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "name";

	
	
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




	$tdatamst_heel["name"] = $fdata;
//	english_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "english_name";
	$fdata["GoodName"] = "english_name";
	$fdata["ownerTable"] = "mst_heel";
	$fdata["Label"] = GetFieldLabel("mst_heel","english_name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "english_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "english_name";

	
	
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




	$tdatamst_heel["english_name"] = $fdata;
//	sort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "sort";
	$fdata["GoodName"] = "sort";
	$fdata["ownerTable"] = "mst_heel";
	$fdata["Label"] = GetFieldLabel("mst_heel","sort");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
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




	$tdatamst_heel["sort"] = $fdata;
//	line_category
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "line_category";
	$fdata["GoodName"] = "line_category";
	$fdata["ownerTable"] = "mst_heel";
	$fdata["Label"] = GetFieldLabel("mst_heel","line_category");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "line_category";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "line_category";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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




	$tdatamst_heel["line_category"] = $fdata;
//	yahoo_junle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "yahoo_junle";
	$fdata["GoodName"] = "yahoo_junle";
	$fdata["ownerTable"] = "mst_heel";
	$fdata["Label"] = GetFieldLabel("mst_heel","yahoo_junle");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "yahoo_junle";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "yahoo_junle";

	
	
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
	$edata["LookupTable"] = "mst_brand";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 1;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "name";

	
	$edata["LookupOrderBy"] = "name";

	
	
	
	

	
	
	
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




	$tdatamst_heel["yahoo_junle"] = $fdata;
//	category_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "category_id";
	$fdata["GoodName"] = "category_id";
	$fdata["ownerTable"] = "mst_heel";
	$fdata["Label"] = GetFieldLabel("mst_heel","category_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "category_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "category_id";

	
	
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
	$edata["DependentLookups"][] = "sub_category_id1";

	
	
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




	$tdatamst_heel["category_id"] = $fdata;
//	sub_category_id1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "sub_category_id1";
	$fdata["GoodName"] = "sub_category_id1";
	$fdata["ownerTable"] = "mst_heel";
	$fdata["Label"] = GetFieldLabel("mst_heel","sub_category_id1");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "sub_category_id1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sub_category_id1";

	
	
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




	$tdatamst_heel["sub_category_id1"] = $fdata;
//	update_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "update_by";
	$fdata["GoodName"] = "update_by";
	$fdata["ownerTable"] = "mst_heel";
	$fdata["Label"] = GetFieldLabel("mst_heel","update_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "update_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "update_by";

	
	
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




	$tdatamst_heel["update_by"] = $fdata;
//	update_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "update_at";
	$fdata["GoodName"] = "update_at";
	$fdata["ownerTable"] = "mst_heel";
	$fdata["Label"] = GetFieldLabel("mst_heel","update_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "update_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "update_at";

	
	
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




	$tdatamst_heel["update_at"] = $fdata;
//	create_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "create_by";
	$fdata["GoodName"] = "create_by";
	$fdata["ownerTable"] = "mst_heel";
	$fdata["Label"] = GetFieldLabel("mst_heel","create_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "create_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "create_by";

	
	
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




	$tdatamst_heel["create_by"] = $fdata;
//	create_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "create_at";
	$fdata["GoodName"] = "create_at";
	$fdata["ownerTable"] = "mst_heel";
	$fdata["Label"] = GetFieldLabel("mst_heel","create_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "create_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "create_at";

	
	
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




	$tdatamst_heel["create_at"] = $fdata;


$tables_data["mst_heel"]=&$tdatamst_heel;
$field_labels["mst_heel"] = &$fieldLabelsmst_heel;
$fieldToolTips["mst_heel"] = &$fieldToolTipsmst_heel;
$placeHolders["mst_heel"] = &$placeHoldersmst_heel;
$page_titles["mst_heel"] = &$pageTitlesmst_heel;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mst_heel"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mst_heel"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mst_heel()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  name,  english_name,  sort,  line_category,  yahoo_junle,  category_id,  sub_category_id1,  update_by,  update_at,  create_by,  create_at";
$proto0["m_strFrom"] = "FROM mst_heel";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY id DESC";
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
	"m_strTable" => "mst_heel",
	"m_srcTableName" => "mst_heel"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "mst_heel";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "mst_heel",
	"m_srcTableName" => "mst_heel"
));

$proto8["m_sql"] = "name";
$proto8["m_srcTableName"] = "mst_heel";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "english_name",
	"m_strTable" => "mst_heel",
	"m_srcTableName" => "mst_heel"
));

$proto10["m_sql"] = "english_name";
$proto10["m_srcTableName"] = "mst_heel";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "sort",
	"m_strTable" => "mst_heel",
	"m_srcTableName" => "mst_heel"
));

$proto12["m_sql"] = "sort";
$proto12["m_srcTableName"] = "mst_heel";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "line_category",
	"m_strTable" => "mst_heel",
	"m_srcTableName" => "mst_heel"
));

$proto14["m_sql"] = "line_category";
$proto14["m_srcTableName"] = "mst_heel";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_junle",
	"m_strTable" => "mst_heel",
	"m_srcTableName" => "mst_heel"
));

$proto16["m_sql"] = "yahoo_junle";
$proto16["m_srcTableName"] = "mst_heel";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "category_id",
	"m_strTable" => "mst_heel",
	"m_srcTableName" => "mst_heel"
));

$proto18["m_sql"] = "category_id";
$proto18["m_srcTableName"] = "mst_heel";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "sub_category_id1",
	"m_strTable" => "mst_heel",
	"m_srcTableName" => "mst_heel"
));

$proto20["m_sql"] = "sub_category_id1";
$proto20["m_srcTableName"] = "mst_heel";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "update_by",
	"m_strTable" => "mst_heel",
	"m_srcTableName" => "mst_heel"
));

$proto22["m_sql"] = "update_by";
$proto22["m_srcTableName"] = "mst_heel";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "update_at",
	"m_strTable" => "mst_heel",
	"m_srcTableName" => "mst_heel"
));

$proto24["m_sql"] = "update_at";
$proto24["m_srcTableName"] = "mst_heel";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "create_by",
	"m_strTable" => "mst_heel",
	"m_srcTableName" => "mst_heel"
));

$proto26["m_sql"] = "create_by";
$proto26["m_srcTableName"] = "mst_heel";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "create_at",
	"m_strTable" => "mst_heel",
	"m_srcTableName" => "mst_heel"
));

$proto28["m_sql"] = "create_at";
$proto28["m_srcTableName"] = "mst_heel";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "mst_heel";
$proto31["m_srcTableName"] = "mst_heel";
$proto31["m_columns"] = array();
$proto31["m_columns"][] = "id";
$proto31["m_columns"][] = "name";
$proto31["m_columns"][] = "english_name";
$proto31["m_columns"][] = "sort";
$proto31["m_columns"][] = "line_category";
$proto31["m_columns"][] = "yahoo_junle";
$proto31["m_columns"][] = "category_id";
$proto31["m_columns"][] = "sub_category_id1";
$proto31["m_columns"][] = "update_by";
$proto31["m_columns"][] = "update_at";
$proto31["m_columns"][] = "create_by";
$proto31["m_columns"][] = "create_at";
$obj = new SQLTable($proto31);

$proto30["m_table"] = $obj;
$proto30["m_sql"] = "mst_heel";
$proto30["m_alias"] = "";
$proto30["m_srcTableName"] = "mst_heel";
$proto32=array();
$proto32["m_sql"] = "";
$proto32["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto32["m_column"]=$obj;
$proto32["m_contained"] = array();
$proto32["m_strCase"] = "";
$proto32["m_havingmode"] = false;
$proto32["m_inBrackets"] = false;
$proto32["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto32);

$proto30["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto30);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto34=array();
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "mst_heel",
	"m_srcTableName" => "mst_heel"
));

$proto34["m_column"]=$obj;
$proto34["m_bAsc"] = 0;
$proto34["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto34);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="mst_heel";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mst_heel = createSqlQuery_mst_heel();


	
		;

												

$tdatamst_heel[".sqlquery"] = $queryData_mst_heel;

include_once(getabspath("include/mst_heel_events.php"));
$tableEvents["mst_heel"] = new eventclass_mst_heel;
$tdatamst_heel[".hasEvents"] = true;

?>