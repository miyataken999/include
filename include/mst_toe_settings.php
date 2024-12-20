<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamst_toe = array();
	$tdatamst_toe[".truncateText"] = true;
	$tdatamst_toe[".NumberOfChars"] = 80;
	$tdatamst_toe[".ShortName"] = "mst_toe";
	$tdatamst_toe[".OwnerID"] = "";
	$tdatamst_toe[".OriginalTable"] = "mst_toe";

//	field labels
$fieldLabelsmst_toe = array();
$fieldToolTipsmst_toe = array();
$pageTitlesmst_toe = array();
$placeHoldersmst_toe = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmst_toe["Japanese"] = array();
	$fieldToolTipsmst_toe["Japanese"] = array();
	$placeHoldersmst_toe["Japanese"] = array();
	$pageTitlesmst_toe["Japanese"] = array();
	$fieldLabelsmst_toe["Japanese"]["id"] = "Id";
	$fieldToolTipsmst_toe["Japanese"]["id"] = "";
	$placeHoldersmst_toe["Japanese"]["id"] = "";
	$fieldLabelsmst_toe["Japanese"]["name"] = "Name";
	$fieldToolTipsmst_toe["Japanese"]["name"] = "";
	$placeHoldersmst_toe["Japanese"]["name"] = "";
	$fieldLabelsmst_toe["Japanese"]["english_name"] = "English Name";
	$fieldToolTipsmst_toe["Japanese"]["english_name"] = "";
	$placeHoldersmst_toe["Japanese"]["english_name"] = "";
	$fieldLabelsmst_toe["Japanese"]["sort"] = "Sort";
	$fieldToolTipsmst_toe["Japanese"]["sort"] = "";
	$placeHoldersmst_toe["Japanese"]["sort"] = "";
	$fieldLabelsmst_toe["Japanese"]["line_category"] = "Line Category";
	$fieldToolTipsmst_toe["Japanese"]["line_category"] = "";
	$placeHoldersmst_toe["Japanese"]["line_category"] = "";
	$fieldLabelsmst_toe["Japanese"]["yahoo_junle"] = "Yahoo Junle";
	$fieldToolTipsmst_toe["Japanese"]["yahoo_junle"] = "";
	$placeHoldersmst_toe["Japanese"]["yahoo_junle"] = "";
	$fieldLabelsmst_toe["Japanese"]["category_id"] = "Category Id";
	$fieldToolTipsmst_toe["Japanese"]["category_id"] = "";
	$placeHoldersmst_toe["Japanese"]["category_id"] = "";
	$fieldLabelsmst_toe["Japanese"]["sub_category_id1"] = "Sub Category Id1";
	$fieldToolTipsmst_toe["Japanese"]["sub_category_id1"] = "";
	$placeHoldersmst_toe["Japanese"]["sub_category_id1"] = "";
	$fieldLabelsmst_toe["Japanese"]["update_by"] = "更新者";
	$fieldToolTipsmst_toe["Japanese"]["update_by"] = "";
	$placeHoldersmst_toe["Japanese"]["update_by"] = "";
	$fieldLabelsmst_toe["Japanese"]["update_at"] = "更新日";
	$fieldToolTipsmst_toe["Japanese"]["update_at"] = "";
	$placeHoldersmst_toe["Japanese"]["update_at"] = "";
	$fieldLabelsmst_toe["Japanese"]["create_by"] = "登録者";
	$fieldToolTipsmst_toe["Japanese"]["create_by"] = "";
	$placeHoldersmst_toe["Japanese"]["create_by"] = "";
	$fieldLabelsmst_toe["Japanese"]["create_at"] = "登録日";
	$fieldToolTipsmst_toe["Japanese"]["create_at"] = "";
	$placeHoldersmst_toe["Japanese"]["create_at"] = "";
	if (count($fieldToolTipsmst_toe["Japanese"]))
		$tdatamst_toe[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmst_toe[""] = array();
	$fieldToolTipsmst_toe[""] = array();
	$placeHoldersmst_toe[""] = array();
	$pageTitlesmst_toe[""] = array();
	$fieldLabelsmst_toe[""]["id"] = "Id";
	$fieldToolTipsmst_toe[""]["id"] = "";
	$placeHoldersmst_toe[""]["id"] = "";
	$fieldLabelsmst_toe[""]["name"] = "Name";
	$fieldToolTipsmst_toe[""]["name"] = "";
	$placeHoldersmst_toe[""]["name"] = "";
	$fieldLabelsmst_toe[""]["english_name"] = "English Name";
	$fieldToolTipsmst_toe[""]["english_name"] = "";
	$placeHoldersmst_toe[""]["english_name"] = "";
	$fieldLabelsmst_toe[""]["sort"] = "Sort";
	$fieldToolTipsmst_toe[""]["sort"] = "";
	$placeHoldersmst_toe[""]["sort"] = "";
	$fieldLabelsmst_toe[""]["line_category"] = "Line Category";
	$fieldToolTipsmst_toe[""]["line_category"] = "";
	$placeHoldersmst_toe[""]["line_category"] = "";
	$fieldLabelsmst_toe[""]["yahoo_junle"] = "Yahoo Junle";
	$fieldToolTipsmst_toe[""]["yahoo_junle"] = "";
	$placeHoldersmst_toe[""]["yahoo_junle"] = "";
	$fieldLabelsmst_toe[""]["category_id"] = "Category Id";
	$fieldToolTipsmst_toe[""]["category_id"] = "";
	$placeHoldersmst_toe[""]["category_id"] = "";
	$fieldLabelsmst_toe[""]["sub_category_id1"] = "Sub Category Id1";
	$fieldToolTipsmst_toe[""]["sub_category_id1"] = "";
	$placeHoldersmst_toe[""]["sub_category_id1"] = "";
	$fieldLabelsmst_toe[""]["update_by"] = "Update By";
	$fieldToolTipsmst_toe[""]["update_by"] = "";
	$placeHoldersmst_toe[""]["update_by"] = "";
	$fieldLabelsmst_toe[""]["update_at"] = "Update At";
	$fieldToolTipsmst_toe[""]["update_at"] = "";
	$placeHoldersmst_toe[""]["update_at"] = "";
	$fieldLabelsmst_toe[""]["create_by"] = "Create By";
	$fieldToolTipsmst_toe[""]["create_by"] = "";
	$placeHoldersmst_toe[""]["create_by"] = "";
	$fieldLabelsmst_toe[""]["create_at"] = "Create At";
	$fieldToolTipsmst_toe[""]["create_at"] = "";
	$placeHoldersmst_toe[""]["create_at"] = "";
	if (count($fieldToolTipsmst_toe[""]))
		$tdatamst_toe[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmst_toe["English"] = array();
	$fieldToolTipsmst_toe["English"] = array();
	$placeHoldersmst_toe["English"] = array();
	$pageTitlesmst_toe["English"] = array();
	$fieldLabelsmst_toe["English"]["id"] = "Id";
	$fieldToolTipsmst_toe["English"]["id"] = "";
	$placeHoldersmst_toe["English"]["id"] = "";
	$fieldLabelsmst_toe["English"]["name"] = "Name";
	$fieldToolTipsmst_toe["English"]["name"] = "";
	$placeHoldersmst_toe["English"]["name"] = "";
	$fieldLabelsmst_toe["English"]["english_name"] = "English Name";
	$fieldToolTipsmst_toe["English"]["english_name"] = "";
	$placeHoldersmst_toe["English"]["english_name"] = "";
	$fieldLabelsmst_toe["English"]["sort"] = "Sort";
	$fieldToolTipsmst_toe["English"]["sort"] = "";
	$placeHoldersmst_toe["English"]["sort"] = "";
	$fieldLabelsmst_toe["English"]["line_category"] = "Line Category";
	$fieldToolTipsmst_toe["English"]["line_category"] = "";
	$placeHoldersmst_toe["English"]["line_category"] = "";
	$fieldLabelsmst_toe["English"]["yahoo_junle"] = "Yahoo Junle";
	$fieldToolTipsmst_toe["English"]["yahoo_junle"] = "";
	$placeHoldersmst_toe["English"]["yahoo_junle"] = "";
	$fieldLabelsmst_toe["English"]["category_id"] = "Category Id";
	$fieldToolTipsmst_toe["English"]["category_id"] = "";
	$placeHoldersmst_toe["English"]["category_id"] = "";
	$fieldLabelsmst_toe["English"]["sub_category_id1"] = "Sub Category Id1";
	$fieldToolTipsmst_toe["English"]["sub_category_id1"] = "";
	$placeHoldersmst_toe["English"]["sub_category_id1"] = "";
	$fieldLabelsmst_toe["English"]["update_by"] = "Update By";
	$fieldToolTipsmst_toe["English"]["update_by"] = "";
	$placeHoldersmst_toe["English"]["update_by"] = "";
	$fieldLabelsmst_toe["English"]["update_at"] = "Update At";
	$fieldToolTipsmst_toe["English"]["update_at"] = "";
	$placeHoldersmst_toe["English"]["update_at"] = "";
	$fieldLabelsmst_toe["English"]["create_by"] = "Create By";
	$fieldToolTipsmst_toe["English"]["create_by"] = "";
	$placeHoldersmst_toe["English"]["create_by"] = "";
	$fieldLabelsmst_toe["English"]["create_at"] = "Create At";
	$fieldToolTipsmst_toe["English"]["create_at"] = "";
	$placeHoldersmst_toe["English"]["create_at"] = "";
	if (count($fieldToolTipsmst_toe["English"]))
		$tdatamst_toe[".isUseToolTips"] = true;
}


	$tdatamst_toe[".NCSearch"] = true;



$tdatamst_toe[".shortTableName"] = "mst_toe";
$tdatamst_toe[".nSecOptions"] = 0;
$tdatamst_toe[".recsPerRowPrint"] = 1;
$tdatamst_toe[".mainTableOwnerID"] = "";
$tdatamst_toe[".moveNext"] = 1;
$tdatamst_toe[".entityType"] = 0;

$tdatamst_toe[".strOriginalTableName"] = "mst_toe";

	



$tdatamst_toe[".showAddInPopup"] = false;

$tdatamst_toe[".showEditInPopup"] = false;

$tdatamst_toe[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamst_toe[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamst_toe[".fieldsForRegister"] = array();

$tdatamst_toe[".listAjax"] = false;

	$tdatamst_toe[".audit"] = true;

	$tdatamst_toe[".locking"] = false;



$tdatamst_toe[".list"] = true;

$tdatamst_toe[".inlineEdit"] = true;


$tdatamst_toe[".reorderRecordsByHeader"] = true;



$tdatamst_toe[".inlineAdd"] = true;

$tdatamst_toe[".import"] = true;

$tdatamst_toe[".exportTo"] = true;


$tdatamst_toe[".delete"] = true;

$tdatamst_toe[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamst_toe[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamst_toe[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamst_toe[".searchSaving"] = false;
//

$tdatamst_toe[".showSearchPanel"] = true;
		$tdatamst_toe[".flexibleSearch"] = true;

$tdatamst_toe[".isUseAjaxSuggest"] = true;

$tdatamst_toe[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatamst_toe[".ajaxCodeSnippetAdded"] = false;

$tdatamst_toe[".buttonsAdded"] = false;

$tdatamst_toe[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamst_toe[".isUseTimeForSearch"] = false;





$tdatamst_toe[".allSearchFields"] = array();
$tdatamst_toe[".filterFields"] = array();
$tdatamst_toe[".requiredSearchFields"] = array();

$tdatamst_toe[".allSearchFields"][] = "id";
	$tdatamst_toe[".allSearchFields"][] = "name";
	$tdatamst_toe[".allSearchFields"][] = "english_name";
	$tdatamst_toe[".allSearchFields"][] = "sort";
	$tdatamst_toe[".allSearchFields"][] = "line_category";
	$tdatamst_toe[".allSearchFields"][] = "yahoo_junle";
	$tdatamst_toe[".allSearchFields"][] = "category_id";
	$tdatamst_toe[".allSearchFields"][] = "sub_category_id1";
	$tdatamst_toe[".allSearchFields"][] = "update_by";
	$tdatamst_toe[".allSearchFields"][] = "update_at";
	$tdatamst_toe[".allSearchFields"][] = "create_by";
	$tdatamst_toe[".allSearchFields"][] = "create_at";
	

$tdatamst_toe[".googleLikeFields"] = array();
$tdatamst_toe[".googleLikeFields"][] = "id";
$tdatamst_toe[".googleLikeFields"][] = "name";
$tdatamst_toe[".googleLikeFields"][] = "english_name";
$tdatamst_toe[".googleLikeFields"][] = "sort";
$tdatamst_toe[".googleLikeFields"][] = "line_category";
$tdatamst_toe[".googleLikeFields"][] = "yahoo_junle";
$tdatamst_toe[".googleLikeFields"][] = "category_id";
$tdatamst_toe[".googleLikeFields"][] = "sub_category_id1";
$tdatamst_toe[".googleLikeFields"][] = "update_by";
$tdatamst_toe[".googleLikeFields"][] = "update_at";
$tdatamst_toe[".googleLikeFields"][] = "create_by";
$tdatamst_toe[".googleLikeFields"][] = "create_at";


$tdatamst_toe[".advSearchFields"] = array();
$tdatamst_toe[".advSearchFields"][] = "id";
$tdatamst_toe[".advSearchFields"][] = "name";
$tdatamst_toe[".advSearchFields"][] = "english_name";
$tdatamst_toe[".advSearchFields"][] = "sort";
$tdatamst_toe[".advSearchFields"][] = "line_category";
$tdatamst_toe[".advSearchFields"][] = "yahoo_junle";
$tdatamst_toe[".advSearchFields"][] = "category_id";
$tdatamst_toe[".advSearchFields"][] = "sub_category_id1";
$tdatamst_toe[".advSearchFields"][] = "update_by";
$tdatamst_toe[".advSearchFields"][] = "update_at";
$tdatamst_toe[".advSearchFields"][] = "create_by";
$tdatamst_toe[".advSearchFields"][] = "create_at";

$tdatamst_toe[".tableType"] = "list";

$tdatamst_toe[".printerPageOrientation"] = 0;
$tdatamst_toe[".nPrinterPageScale"] = 100;

$tdatamst_toe[".nPrinterSplitRecords"] = 40;

$tdatamst_toe[".nPrinterPDFSplitRecords"] = 40;



$tdatamst_toe[".geocodingEnabled"] = false;





$tdatamst_toe[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamst_toe[".pageSize"] = 100;

$tdatamst_toe[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY id DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamst_toe[".strOrderBy"] = $tstrOrderBy;

$tdatamst_toe[".orderindexes"] = array();
$tdatamst_toe[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "`id`");

$tdatamst_toe[".sqlHead"] = "SELECT id,  name,  english_name,  sort,  line_category,  yahoo_junle,  category_id,  sub_category_id1,  update_by,  update_at,  create_by,  create_at";
$tdatamst_toe[".sqlFrom"] = "FROM mst_toe";
$tdatamst_toe[".sqlWhereExpr"] = "";
$tdatamst_toe[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamst_toe[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamst_toe[".arrGroupsPerPage"] = $arrGPP;

$tdatamst_toe[".highlightSearchResults"] = true;

$tableKeysmst_toe = array();
$tableKeysmst_toe[] = "id";
$tdatamst_toe[".Keys"] = $tableKeysmst_toe;

$tdatamst_toe[".listFields"] = array();
$tdatamst_toe[".listFields"][] = "id";
$tdatamst_toe[".listFields"][] = "name";
$tdatamst_toe[".listFields"][] = "english_name";
$tdatamst_toe[".listFields"][] = "sort";
$tdatamst_toe[".listFields"][] = "line_category";
$tdatamst_toe[".listFields"][] = "yahoo_junle";
$tdatamst_toe[".listFields"][] = "category_id";
$tdatamst_toe[".listFields"][] = "sub_category_id1";
$tdatamst_toe[".listFields"][] = "update_by";
$tdatamst_toe[".listFields"][] = "update_at";
$tdatamst_toe[".listFields"][] = "create_by";
$tdatamst_toe[".listFields"][] = "create_at";

$tdatamst_toe[".hideMobileList"] = array();


$tdatamst_toe[".viewFields"] = array();

$tdatamst_toe[".addFields"] = array();

$tdatamst_toe[".masterListFields"] = array();
$tdatamst_toe[".masterListFields"][] = "id";
$tdatamst_toe[".masterListFields"][] = "name";
$tdatamst_toe[".masterListFields"][] = "english_name";
$tdatamst_toe[".masterListFields"][] = "sort";
$tdatamst_toe[".masterListFields"][] = "line_category";
$tdatamst_toe[".masterListFields"][] = "yahoo_junle";
$tdatamst_toe[".masterListFields"][] = "category_id";
$tdatamst_toe[".masterListFields"][] = "sub_category_id1";
$tdatamst_toe[".masterListFields"][] = "update_by";
$tdatamst_toe[".masterListFields"][] = "update_at";
$tdatamst_toe[".masterListFields"][] = "create_by";
$tdatamst_toe[".masterListFields"][] = "create_at";

$tdatamst_toe[".inlineAddFields"] = array();
$tdatamst_toe[".inlineAddFields"][] = "name";
$tdatamst_toe[".inlineAddFields"][] = "english_name";
$tdatamst_toe[".inlineAddFields"][] = "sort";
$tdatamst_toe[".inlineAddFields"][] = "line_category";
$tdatamst_toe[".inlineAddFields"][] = "yahoo_junle";
$tdatamst_toe[".inlineAddFields"][] = "category_id";
$tdatamst_toe[".inlineAddFields"][] = "sub_category_id1";

$tdatamst_toe[".editFields"] = array();

$tdatamst_toe[".inlineEditFields"] = array();
$tdatamst_toe[".inlineEditFields"][] = "name";
$tdatamst_toe[".inlineEditFields"][] = "english_name";
$tdatamst_toe[".inlineEditFields"][] = "sort";
$tdatamst_toe[".inlineEditFields"][] = "line_category";
$tdatamst_toe[".inlineEditFields"][] = "yahoo_junle";
$tdatamst_toe[".inlineEditFields"][] = "category_id";
$tdatamst_toe[".inlineEditFields"][] = "sub_category_id1";

$tdatamst_toe[".updateSelectedFields"] = array();


$tdatamst_toe[".exportFields"] = array();
$tdatamst_toe[".exportFields"][] = "id";
$tdatamst_toe[".exportFields"][] = "name";
$tdatamst_toe[".exportFields"][] = "english_name";
$tdatamst_toe[".exportFields"][] = "sort";
$tdatamst_toe[".exportFields"][] = "line_category";
$tdatamst_toe[".exportFields"][] = "yahoo_junle";
$tdatamst_toe[".exportFields"][] = "category_id";
$tdatamst_toe[".exportFields"][] = "sub_category_id1";
$tdatamst_toe[".exportFields"][] = "update_by";
$tdatamst_toe[".exportFields"][] = "update_at";
$tdatamst_toe[".exportFields"][] = "create_by";
$tdatamst_toe[".exportFields"][] = "create_at";

$tdatamst_toe[".importFields"] = array();
$tdatamst_toe[".importFields"][] = "id";
$tdatamst_toe[".importFields"][] = "name";
$tdatamst_toe[".importFields"][] = "english_name";
$tdatamst_toe[".importFields"][] = "sort";
$tdatamst_toe[".importFields"][] = "line_category";
$tdatamst_toe[".importFields"][] = "yahoo_junle";
$tdatamst_toe[".importFields"][] = "category_id";
$tdatamst_toe[".importFields"][] = "sub_category_id1";

$tdatamst_toe[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "mst_toe";
	$fdata["Label"] = GetFieldLabel("mst_toe","id");
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




	$tdatamst_toe["id"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "mst_toe";
	$fdata["Label"] = GetFieldLabel("mst_toe","name");
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




	$tdatamst_toe["name"] = $fdata;
//	english_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "english_name";
	$fdata["GoodName"] = "english_name";
	$fdata["ownerTable"] = "mst_toe";
	$fdata["Label"] = GetFieldLabel("mst_toe","english_name");
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




	$tdatamst_toe["english_name"] = $fdata;
//	sort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "sort";
	$fdata["GoodName"] = "sort";
	$fdata["ownerTable"] = "mst_toe";
	$fdata["Label"] = GetFieldLabel("mst_toe","sort");
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




	$tdatamst_toe["sort"] = $fdata;
//	line_category
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "line_category";
	$fdata["GoodName"] = "line_category";
	$fdata["ownerTable"] = "mst_toe";
	$fdata["Label"] = GetFieldLabel("mst_toe","line_category");
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




	$tdatamst_toe["line_category"] = $fdata;
//	yahoo_junle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "yahoo_junle";
	$fdata["GoodName"] = "yahoo_junle";
	$fdata["ownerTable"] = "mst_toe";
	$fdata["Label"] = GetFieldLabel("mst_toe","yahoo_junle");
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




	$tdatamst_toe["yahoo_junle"] = $fdata;
//	category_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "category_id";
	$fdata["GoodName"] = "category_id";
	$fdata["ownerTable"] = "mst_toe";
	$fdata["Label"] = GetFieldLabel("mst_toe","category_id");
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




	$tdatamst_toe["category_id"] = $fdata;
//	sub_category_id1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "sub_category_id1";
	$fdata["GoodName"] = "sub_category_id1";
	$fdata["ownerTable"] = "mst_toe";
	$fdata["Label"] = GetFieldLabel("mst_toe","sub_category_id1");
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




	$tdatamst_toe["sub_category_id1"] = $fdata;
//	update_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "update_by";
	$fdata["GoodName"] = "update_by";
	$fdata["ownerTable"] = "mst_toe";
	$fdata["Label"] = GetFieldLabel("mst_toe","update_by");
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




	$tdatamst_toe["update_by"] = $fdata;
//	update_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "update_at";
	$fdata["GoodName"] = "update_at";
	$fdata["ownerTable"] = "mst_toe";
	$fdata["Label"] = GetFieldLabel("mst_toe","update_at");
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




	$tdatamst_toe["update_at"] = $fdata;
//	create_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "create_by";
	$fdata["GoodName"] = "create_by";
	$fdata["ownerTable"] = "mst_toe";
	$fdata["Label"] = GetFieldLabel("mst_toe","create_by");
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




	$tdatamst_toe["create_by"] = $fdata;
//	create_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "create_at";
	$fdata["GoodName"] = "create_at";
	$fdata["ownerTable"] = "mst_toe";
	$fdata["Label"] = GetFieldLabel("mst_toe","create_at");
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




	$tdatamst_toe["create_at"] = $fdata;


$tables_data["mst_toe"]=&$tdatamst_toe;
$field_labels["mst_toe"] = &$fieldLabelsmst_toe;
$fieldToolTips["mst_toe"] = &$fieldToolTipsmst_toe;
$placeHolders["mst_toe"] = &$placeHoldersmst_toe;
$page_titles["mst_toe"] = &$pageTitlesmst_toe;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mst_toe"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mst_toe"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mst_toe()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  name,  english_name,  sort,  line_category,  yahoo_junle,  category_id,  sub_category_id1,  update_by,  update_at,  create_by,  create_at";
$proto0["m_strFrom"] = "FROM mst_toe";
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
	"m_strTable" => "mst_toe",
	"m_srcTableName" => "mst_toe"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "mst_toe";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "mst_toe",
	"m_srcTableName" => "mst_toe"
));

$proto8["m_sql"] = "name";
$proto8["m_srcTableName"] = "mst_toe";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "english_name",
	"m_strTable" => "mst_toe",
	"m_srcTableName" => "mst_toe"
));

$proto10["m_sql"] = "english_name";
$proto10["m_srcTableName"] = "mst_toe";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "sort",
	"m_strTable" => "mst_toe",
	"m_srcTableName" => "mst_toe"
));

$proto12["m_sql"] = "sort";
$proto12["m_srcTableName"] = "mst_toe";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "line_category",
	"m_strTable" => "mst_toe",
	"m_srcTableName" => "mst_toe"
));

$proto14["m_sql"] = "line_category";
$proto14["m_srcTableName"] = "mst_toe";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_junle",
	"m_strTable" => "mst_toe",
	"m_srcTableName" => "mst_toe"
));

$proto16["m_sql"] = "yahoo_junle";
$proto16["m_srcTableName"] = "mst_toe";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "category_id",
	"m_strTable" => "mst_toe",
	"m_srcTableName" => "mst_toe"
));

$proto18["m_sql"] = "category_id";
$proto18["m_srcTableName"] = "mst_toe";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "sub_category_id1",
	"m_strTable" => "mst_toe",
	"m_srcTableName" => "mst_toe"
));

$proto20["m_sql"] = "sub_category_id1";
$proto20["m_srcTableName"] = "mst_toe";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "update_by",
	"m_strTable" => "mst_toe",
	"m_srcTableName" => "mst_toe"
));

$proto22["m_sql"] = "update_by";
$proto22["m_srcTableName"] = "mst_toe";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "update_at",
	"m_strTable" => "mst_toe",
	"m_srcTableName" => "mst_toe"
));

$proto24["m_sql"] = "update_at";
$proto24["m_srcTableName"] = "mst_toe";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "create_by",
	"m_strTable" => "mst_toe",
	"m_srcTableName" => "mst_toe"
));

$proto26["m_sql"] = "create_by";
$proto26["m_srcTableName"] = "mst_toe";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "create_at",
	"m_strTable" => "mst_toe",
	"m_srcTableName" => "mst_toe"
));

$proto28["m_sql"] = "create_at";
$proto28["m_srcTableName"] = "mst_toe";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "mst_toe";
$proto31["m_srcTableName"] = "mst_toe";
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
$proto30["m_sql"] = "mst_toe";
$proto30["m_alias"] = "";
$proto30["m_srcTableName"] = "mst_toe";
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
	"m_strTable" => "mst_toe",
	"m_srcTableName" => "mst_toe"
));

$proto34["m_column"]=$obj;
$proto34["m_bAsc"] = 0;
$proto34["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto34);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="mst_toe";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mst_toe = createSqlQuery_mst_toe();


	
		;

												

$tdatamst_toe[".sqlquery"] = $queryData_mst_toe;

include_once(getabspath("include/mst_toe_events.php"));
$tableEvents["mst_toe"] = new eventclass_mst_toe;
$tdatamst_toe[".hasEvents"] = true;

?>