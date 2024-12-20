<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamst_designer = array();
	$tdatamst_designer[".truncateText"] = true;
	$tdatamst_designer[".NumberOfChars"] = 80;
	$tdatamst_designer[".ShortName"] = "mst_designer";
	$tdatamst_designer[".OwnerID"] = "";
	$tdatamst_designer[".OriginalTable"] = "mst_designer";

//	field labels
$fieldLabelsmst_designer = array();
$fieldToolTipsmst_designer = array();
$pageTitlesmst_designer = array();
$placeHoldersmst_designer = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmst_designer["Japanese"] = array();
	$fieldToolTipsmst_designer["Japanese"] = array();
	$placeHoldersmst_designer["Japanese"] = array();
	$pageTitlesmst_designer["Japanese"] = array();
	$fieldLabelsmst_designer["Japanese"]["id"] = "Id";
	$fieldToolTipsmst_designer["Japanese"]["id"] = "";
	$placeHoldersmst_designer["Japanese"]["id"] = "";
	$fieldLabelsmst_designer["Japanese"]["name"] = "Name";
	$fieldToolTipsmst_designer["Japanese"]["name"] = "";
	$placeHoldersmst_designer["Japanese"]["name"] = "";
	$fieldLabelsmst_designer["Japanese"]["sort"] = "Sort";
	$fieldToolTipsmst_designer["Japanese"]["sort"] = "";
	$placeHoldersmst_designer["Japanese"]["sort"] = "";
	$fieldLabelsmst_designer["Japanese"]["update_at"] = "更新日";
	$fieldToolTipsmst_designer["Japanese"]["update_at"] = "";
	$placeHoldersmst_designer["Japanese"]["update_at"] = "";
	$fieldLabelsmst_designer["Japanese"]["update_by"] = "更新者";
	$fieldToolTipsmst_designer["Japanese"]["update_by"] = "";
	$placeHoldersmst_designer["Japanese"]["update_by"] = "";
	$fieldLabelsmst_designer["Japanese"]["create_at"] = "登録日";
	$fieldToolTipsmst_designer["Japanese"]["create_at"] = "";
	$placeHoldersmst_designer["Japanese"]["create_at"] = "";
	$fieldLabelsmst_designer["Japanese"]["create_by"] = "登録者";
	$fieldToolTipsmst_designer["Japanese"]["create_by"] = "";
	$placeHoldersmst_designer["Japanese"]["create_by"] = "";
	$fieldLabelsmst_designer["Japanese"]["line_category"] = "ラインカテゴリー";
	$fieldToolTipsmst_designer["Japanese"]["line_category"] = "";
	$placeHoldersmst_designer["Japanese"]["line_category"] = "";
	$fieldLabelsmst_designer["Japanese"]["yahoo_junle"] = "ブランドID";
	$fieldToolTipsmst_designer["Japanese"]["yahoo_junle"] = "";
	$placeHoldersmst_designer["Japanese"]["yahoo_junle"] = "";
	$fieldLabelsmst_designer["Japanese"]["category_id"] = "大カテゴリー";
	$fieldToolTipsmst_designer["Japanese"]["category_id"] = "";
	$placeHoldersmst_designer["Japanese"]["category_id"] = "";
	$fieldLabelsmst_designer["Japanese"]["sub_category_id1"] = "中カテゴリー";
	$fieldToolTipsmst_designer["Japanese"]["sub_category_id1"] = "";
	$placeHoldersmst_designer["Japanese"]["sub_category_id1"] = "";
	$fieldLabelsmst_designer["Japanese"]["english_name"] = "英名";
	$fieldToolTipsmst_designer["Japanese"]["english_name"] = "";
	$placeHoldersmst_designer["Japanese"]["english_name"] = "";
	if (count($fieldToolTipsmst_designer["Japanese"]))
		$tdatamst_designer[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmst_designer[""] = array();
	$fieldToolTipsmst_designer[""] = array();
	$placeHoldersmst_designer[""] = array();
	$pageTitlesmst_designer[""] = array();
	$fieldLabelsmst_designer[""]["id"] = "Id";
	$fieldToolTipsmst_designer[""]["id"] = "";
	$placeHoldersmst_designer[""]["id"] = "";
	$fieldLabelsmst_designer[""]["name"] = "Name";
	$fieldToolTipsmst_designer[""]["name"] = "";
	$placeHoldersmst_designer[""]["name"] = "";
	$fieldLabelsmst_designer[""]["sort"] = "Sort";
	$fieldToolTipsmst_designer[""]["sort"] = "";
	$placeHoldersmst_designer[""]["sort"] = "";
	$fieldLabelsmst_designer[""]["update_at"] = "Update At";
	$fieldToolTipsmst_designer[""]["update_at"] = "";
	$placeHoldersmst_designer[""]["update_at"] = "";
	$fieldLabelsmst_designer[""]["update_by"] = "Update By";
	$fieldToolTipsmst_designer[""]["update_by"] = "";
	$placeHoldersmst_designer[""]["update_by"] = "";
	$fieldLabelsmst_designer[""]["create_at"] = "Create At";
	$fieldToolTipsmst_designer[""]["create_at"] = "";
	$placeHoldersmst_designer[""]["create_at"] = "";
	$fieldLabelsmst_designer[""]["create_by"] = "Create By";
	$fieldToolTipsmst_designer[""]["create_by"] = "";
	$placeHoldersmst_designer[""]["create_by"] = "";
	$fieldLabelsmst_designer[""]["line_category"] = "Line Category";
	$fieldToolTipsmst_designer[""]["line_category"] = "";
	$placeHoldersmst_designer[""]["line_category"] = "";
	$fieldLabelsmst_designer[""]["yahoo_junle"] = "Yahoo Junle";
	$fieldToolTipsmst_designer[""]["yahoo_junle"] = "";
	$placeHoldersmst_designer[""]["yahoo_junle"] = "";
	$fieldLabelsmst_designer[""]["category_id"] = "Category Id";
	$fieldToolTipsmst_designer[""]["category_id"] = "";
	$placeHoldersmst_designer[""]["category_id"] = "";
	$fieldLabelsmst_designer[""]["sub_category_id1"] = "Sub Category Id1";
	$fieldToolTipsmst_designer[""]["sub_category_id1"] = "";
	$placeHoldersmst_designer[""]["sub_category_id1"] = "";
	$fieldLabelsmst_designer[""]["english_name"] = "English Name";
	$fieldToolTipsmst_designer[""]["english_name"] = "";
	$placeHoldersmst_designer[""]["english_name"] = "";
	if (count($fieldToolTipsmst_designer[""]))
		$tdatamst_designer[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmst_designer["English"] = array();
	$fieldToolTipsmst_designer["English"] = array();
	$placeHoldersmst_designer["English"] = array();
	$pageTitlesmst_designer["English"] = array();
	$fieldLabelsmst_designer["English"]["id"] = "Id";
	$fieldToolTipsmst_designer["English"]["id"] = "";
	$placeHoldersmst_designer["English"]["id"] = "";
	$fieldLabelsmst_designer["English"]["name"] = "Name";
	$fieldToolTipsmst_designer["English"]["name"] = "";
	$placeHoldersmst_designer["English"]["name"] = "";
	$fieldLabelsmst_designer["English"]["sort"] = "Sort";
	$fieldToolTipsmst_designer["English"]["sort"] = "";
	$placeHoldersmst_designer["English"]["sort"] = "";
	$fieldLabelsmst_designer["English"]["update_at"] = "Update At";
	$fieldToolTipsmst_designer["English"]["update_at"] = "";
	$placeHoldersmst_designer["English"]["update_at"] = "";
	$fieldLabelsmst_designer["English"]["update_by"] = "Update By";
	$fieldToolTipsmst_designer["English"]["update_by"] = "";
	$placeHoldersmst_designer["English"]["update_by"] = "";
	$fieldLabelsmst_designer["English"]["create_at"] = "Create At";
	$fieldToolTipsmst_designer["English"]["create_at"] = "";
	$placeHoldersmst_designer["English"]["create_at"] = "";
	$fieldLabelsmst_designer["English"]["create_by"] = "Create By";
	$fieldToolTipsmst_designer["English"]["create_by"] = "";
	$placeHoldersmst_designer["English"]["create_by"] = "";
	$fieldLabelsmst_designer["English"]["line_category"] = "Line Category";
	$fieldToolTipsmst_designer["English"]["line_category"] = "";
	$placeHoldersmst_designer["English"]["line_category"] = "";
	$fieldLabelsmst_designer["English"]["yahoo_junle"] = "Yahoo Junle";
	$fieldToolTipsmst_designer["English"]["yahoo_junle"] = "";
	$placeHoldersmst_designer["English"]["yahoo_junle"] = "";
	$fieldLabelsmst_designer["English"]["category_id"] = "Category Id";
	$fieldToolTipsmst_designer["English"]["category_id"] = "";
	$placeHoldersmst_designer["English"]["category_id"] = "";
	$fieldLabelsmst_designer["English"]["sub_category_id1"] = "Sub Category Id1";
	$fieldToolTipsmst_designer["English"]["sub_category_id1"] = "";
	$placeHoldersmst_designer["English"]["sub_category_id1"] = "";
	$fieldLabelsmst_designer["English"]["english_name"] = "English Name";
	$fieldToolTipsmst_designer["English"]["english_name"] = "";
	$placeHoldersmst_designer["English"]["english_name"] = "";
	if (count($fieldToolTipsmst_designer["English"]))
		$tdatamst_designer[".isUseToolTips"] = true;
}


	$tdatamst_designer[".NCSearch"] = true;



$tdatamst_designer[".shortTableName"] = "mst_designer";
$tdatamst_designer[".nSecOptions"] = 0;
$tdatamst_designer[".recsPerRowPrint"] = 1;
$tdatamst_designer[".mainTableOwnerID"] = "";
$tdatamst_designer[".moveNext"] = 1;
$tdatamst_designer[".entityType"] = 0;

$tdatamst_designer[".strOriginalTableName"] = "mst_designer";

	



$tdatamst_designer[".showAddInPopup"] = false;

$tdatamst_designer[".showEditInPopup"] = false;

$tdatamst_designer[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamst_designer[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamst_designer[".fieldsForRegister"] = array();

$tdatamst_designer[".listAjax"] = false;

	$tdatamst_designer[".audit"] = true;

	$tdatamst_designer[".locking"] = false;



$tdatamst_designer[".list"] = true;

$tdatamst_designer[".inlineEdit"] = true;


$tdatamst_designer[".reorderRecordsByHeader"] = true;



$tdatamst_designer[".inlineAdd"] = true;

$tdatamst_designer[".import"] = true;

$tdatamst_designer[".exportTo"] = true;

$tdatamst_designer[".printFriendly"] = true;

$tdatamst_designer[".delete"] = true;

$tdatamst_designer[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamst_designer[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamst_designer[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamst_designer[".searchSaving"] = false;
//

$tdatamst_designer[".showSearchPanel"] = true;
		$tdatamst_designer[".flexibleSearch"] = true;

$tdatamst_designer[".isUseAjaxSuggest"] = true;

$tdatamst_designer[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatamst_designer[".ajaxCodeSnippetAdded"] = false;

$tdatamst_designer[".buttonsAdded"] = false;

$tdatamst_designer[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamst_designer[".isUseTimeForSearch"] = false;





$tdatamst_designer[".allSearchFields"] = array();
$tdatamst_designer[".filterFields"] = array();
$tdatamst_designer[".requiredSearchFields"] = array();

$tdatamst_designer[".allSearchFields"][] = "id";
	$tdatamst_designer[".allSearchFields"][] = "name";
	$tdatamst_designer[".allSearchFields"][] = "sort";
	$tdatamst_designer[".allSearchFields"][] = "update_at";
	$tdatamst_designer[".allSearchFields"][] = "update_by";
	$tdatamst_designer[".allSearchFields"][] = "create_at";
	$tdatamst_designer[".allSearchFields"][] = "create_by";
	$tdatamst_designer[".allSearchFields"][] = "line_category";
	$tdatamst_designer[".allSearchFields"][] = "yahoo_junle";
	$tdatamst_designer[".allSearchFields"][] = "category_id";
	$tdatamst_designer[".allSearchFields"][] = "sub_category_id1";
	$tdatamst_designer[".allSearchFields"][] = "english_name";
	

$tdatamst_designer[".googleLikeFields"] = array();
$tdatamst_designer[".googleLikeFields"][] = "id";
$tdatamst_designer[".googleLikeFields"][] = "name";
$tdatamst_designer[".googleLikeFields"][] = "sort";
$tdatamst_designer[".googleLikeFields"][] = "update_at";
$tdatamst_designer[".googleLikeFields"][] = "update_by";
$tdatamst_designer[".googleLikeFields"][] = "create_at";
$tdatamst_designer[".googleLikeFields"][] = "create_by";
$tdatamst_designer[".googleLikeFields"][] = "line_category";
$tdatamst_designer[".googleLikeFields"][] = "yahoo_junle";
$tdatamst_designer[".googleLikeFields"][] = "category_id";
$tdatamst_designer[".googleLikeFields"][] = "sub_category_id1";
$tdatamst_designer[".googleLikeFields"][] = "english_name";

$tdatamst_designer[".panelSearchFields"] = array();
$tdatamst_designer[".searchPanelOptions"] = array();
$tdatamst_designer[".panelSearchFields"][] = "name";
	$tdatamst_designer[".panelSearchFields"][] = "yahoo_junle";
	
$tdatamst_designer[".advSearchFields"] = array();
$tdatamst_designer[".advSearchFields"][] = "id";
$tdatamst_designer[".advSearchFields"][] = "name";
$tdatamst_designer[".advSearchFields"][] = "sort";
$tdatamst_designer[".advSearchFields"][] = "update_at";
$tdatamst_designer[".advSearchFields"][] = "update_by";
$tdatamst_designer[".advSearchFields"][] = "create_at";
$tdatamst_designer[".advSearchFields"][] = "create_by";
$tdatamst_designer[".advSearchFields"][] = "line_category";
$tdatamst_designer[".advSearchFields"][] = "yahoo_junle";
$tdatamst_designer[".advSearchFields"][] = "category_id";
$tdatamst_designer[".advSearchFields"][] = "sub_category_id1";
$tdatamst_designer[".advSearchFields"][] = "english_name";

$tdatamst_designer[".tableType"] = "list";

$tdatamst_designer[".printerPageOrientation"] = 0;
$tdatamst_designer[".nPrinterPageScale"] = 100;

$tdatamst_designer[".nPrinterSplitRecords"] = 40;

$tdatamst_designer[".nPrinterPDFSplitRecords"] = 40;



$tdatamst_designer[".geocodingEnabled"] = false;





$tdatamst_designer[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamst_designer[".pageSize"] = 100;

$tdatamst_designer[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY id DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamst_designer[".strOrderBy"] = $tstrOrderBy;

$tdatamst_designer[".orderindexes"] = array();
$tdatamst_designer[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "`id`");

$tdatamst_designer[".sqlHead"] = "SELECT id,  name,  sort,  update_at,  update_by,  create_at,  create_by,  line_category,  yahoo_junle,  category_id,  sub_category_id1,  english_name";
$tdatamst_designer[".sqlFrom"] = "FROM mst_designer";
$tdatamst_designer[".sqlWhereExpr"] = "";
$tdatamst_designer[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamst_designer[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamst_designer[".arrGroupsPerPage"] = $arrGPP;

$tdatamst_designer[".highlightSearchResults"] = true;

$tableKeysmst_designer = array();
$tableKeysmst_designer[] = "id";
$tdatamst_designer[".Keys"] = $tableKeysmst_designer;

$tdatamst_designer[".listFields"] = array();
$tdatamst_designer[".listFields"][] = "id";
$tdatamst_designer[".listFields"][] = "name";
$tdatamst_designer[".listFields"][] = "english_name";
$tdatamst_designer[".listFields"][] = "sort";
$tdatamst_designer[".listFields"][] = "line_category";
$tdatamst_designer[".listFields"][] = "yahoo_junle";
$tdatamst_designer[".listFields"][] = "category_id";
$tdatamst_designer[".listFields"][] = "sub_category_id1";
$tdatamst_designer[".listFields"][] = "update_by";
$tdatamst_designer[".listFields"][] = "update_at";
$tdatamst_designer[".listFields"][] = "create_by";
$tdatamst_designer[".listFields"][] = "create_at";

$tdatamst_designer[".hideMobileList"] = array();


$tdatamst_designer[".viewFields"] = array();

$tdatamst_designer[".addFields"] = array();

$tdatamst_designer[".masterListFields"] = array();
$tdatamst_designer[".masterListFields"][] = "id";
$tdatamst_designer[".masterListFields"][] = "name";
$tdatamst_designer[".masterListFields"][] = "sort";
$tdatamst_designer[".masterListFields"][] = "update_at";
$tdatamst_designer[".masterListFields"][] = "update_by";
$tdatamst_designer[".masterListFields"][] = "create_at";
$tdatamst_designer[".masterListFields"][] = "create_by";
$tdatamst_designer[".masterListFields"][] = "line_category";
$tdatamst_designer[".masterListFields"][] = "yahoo_junle";
$tdatamst_designer[".masterListFields"][] = "category_id";
$tdatamst_designer[".masterListFields"][] = "sub_category_id1";
$tdatamst_designer[".masterListFields"][] = "english_name";

$tdatamst_designer[".inlineAddFields"] = array();
$tdatamst_designer[".inlineAddFields"][] = "name";
$tdatamst_designer[".inlineAddFields"][] = "english_name";
$tdatamst_designer[".inlineAddFields"][] = "sort";
$tdatamst_designer[".inlineAddFields"][] = "line_category";
$tdatamst_designer[".inlineAddFields"][] = "yahoo_junle";
$tdatamst_designer[".inlineAddFields"][] = "category_id";
$tdatamst_designer[".inlineAddFields"][] = "sub_category_id1";

$tdatamst_designer[".editFields"] = array();

$tdatamst_designer[".inlineEditFields"] = array();
$tdatamst_designer[".inlineEditFields"][] = "name";
$tdatamst_designer[".inlineEditFields"][] = "english_name";
$tdatamst_designer[".inlineEditFields"][] = "sort";
$tdatamst_designer[".inlineEditFields"][] = "line_category";
$tdatamst_designer[".inlineEditFields"][] = "yahoo_junle";
$tdatamst_designer[".inlineEditFields"][] = "category_id";
$tdatamst_designer[".inlineEditFields"][] = "sub_category_id1";

$tdatamst_designer[".updateSelectedFields"] = array();


$tdatamst_designer[".exportFields"] = array();
$tdatamst_designer[".exportFields"][] = "english_name";
$tdatamst_designer[".exportFields"][] = "id";
$tdatamst_designer[".exportFields"][] = "name";
$tdatamst_designer[".exportFields"][] = "sort";
$tdatamst_designer[".exportFields"][] = "update_at";
$tdatamst_designer[".exportFields"][] = "update_by";
$tdatamst_designer[".exportFields"][] = "create_at";
$tdatamst_designer[".exportFields"][] = "create_by";
$tdatamst_designer[".exportFields"][] = "line_category";
$tdatamst_designer[".exportFields"][] = "yahoo_junle";
$tdatamst_designer[".exportFields"][] = "category_id";
$tdatamst_designer[".exportFields"][] = "sub_category_id1";

$tdatamst_designer[".importFields"] = array();
$tdatamst_designer[".importFields"][] = "id";
$tdatamst_designer[".importFields"][] = "name";
$tdatamst_designer[".importFields"][] = "sort";
$tdatamst_designer[".importFields"][] = "line_category";
$tdatamst_designer[".importFields"][] = "yahoo_junle";
$tdatamst_designer[".importFields"][] = "category_id";
$tdatamst_designer[".importFields"][] = "sub_category_id1";
$tdatamst_designer[".importFields"][] = "english_name";

$tdatamst_designer[".printFields"] = array();
$tdatamst_designer[".printFields"][] = "id";
$tdatamst_designer[".printFields"][] = "name";
$tdatamst_designer[".printFields"][] = "sort";
$tdatamst_designer[".printFields"][] = "update_at";
$tdatamst_designer[".printFields"][] = "update_by";
$tdatamst_designer[".printFields"][] = "create_at";
$tdatamst_designer[".printFields"][] = "create_by";
$tdatamst_designer[".printFields"][] = "line_category";
$tdatamst_designer[".printFields"][] = "yahoo_junle";
$tdatamst_designer[".printFields"][] = "category_id";
$tdatamst_designer[".printFields"][] = "sub_category_id1";
$tdatamst_designer[".printFields"][] = "english_name";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "mst_designer";
	$fdata["Label"] = GetFieldLabel("mst_designer","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdatamst_designer["id"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "mst_designer";
	$fdata["Label"] = GetFieldLabel("mst_designer","name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

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

	
	



		$edata["IsRequired"] = true;

	
	
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




	$tdatamst_designer["name"] = $fdata;
//	sort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sort";
	$fdata["GoodName"] = "sort";
	$fdata["ownerTable"] = "mst_designer";
	$fdata["Label"] = GetFieldLabel("mst_designer","sort");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
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




	$tdatamst_designer["sort"] = $fdata;
//	update_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "update_at";
	$fdata["GoodName"] = "update_at";
	$fdata["ownerTable"] = "mst_designer";
	$fdata["Label"] = GetFieldLabel("mst_designer","update_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

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




	$tdatamst_designer["update_at"] = $fdata;
//	update_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "update_by";
	$fdata["GoodName"] = "update_by";
	$fdata["ownerTable"] = "mst_designer";
	$fdata["Label"] = GetFieldLabel("mst_designer","update_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

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




	$tdatamst_designer["update_by"] = $fdata;
//	create_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "create_at";
	$fdata["GoodName"] = "create_at";
	$fdata["ownerTable"] = "mst_designer";
	$fdata["Label"] = GetFieldLabel("mst_designer","create_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

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




	$tdatamst_designer["create_at"] = $fdata;
//	create_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "create_by";
	$fdata["GoodName"] = "create_by";
	$fdata["ownerTable"] = "mst_designer";
	$fdata["Label"] = GetFieldLabel("mst_designer","create_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

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




	$tdatamst_designer["create_by"] = $fdata;
//	line_category
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "line_category";
	$fdata["GoodName"] = "line_category";
	$fdata["ownerTable"] = "mst_designer";
	$fdata["Label"] = GetFieldLabel("mst_designer","line_category");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

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

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "mst_line";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "line_category";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "line_category";

	
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




	$tdatamst_designer["line_category"] = $fdata;
//	yahoo_junle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "yahoo_junle";
	$fdata["GoodName"] = "yahoo_junle";
	$fdata["ownerTable"] = "mst_designer";
	$fdata["Label"] = GetFieldLabel("mst_designer","yahoo_junle");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

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
	$edata["LookupTable"] = "mst_brand2";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 1;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "name";

	
	$edata["LookupOrderBy"] = "mst_band_title";

	
	
	
	

	
	
	
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




	$tdatamst_designer["yahoo_junle"] = $fdata;
//	category_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "category_id";
	$fdata["GoodName"] = "category_id";
	$fdata["ownerTable"] = "mst_designer";
	$fdata["Label"] = GetFieldLabel("mst_designer","category_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

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




	$tdatamst_designer["category_id"] = $fdata;
//	sub_category_id1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "sub_category_id1";
	$fdata["GoodName"] = "sub_category_id1";
	$fdata["ownerTable"] = "mst_designer";
	$fdata["Label"] = GetFieldLabel("mst_designer","sub_category_id1");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

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




	$tdatamst_designer["sub_category_id1"] = $fdata;
//	english_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "english_name";
	$fdata["GoodName"] = "english_name";
	$fdata["ownerTable"] = "mst_designer";
	$fdata["Label"] = GetFieldLabel("mst_designer","english_name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

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

	
	



		$edata["IsRequired"] = true;

	
	
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




	$tdatamst_designer["english_name"] = $fdata;


$tables_data["mst_designer"]=&$tdatamst_designer;
$field_labels["mst_designer"] = &$fieldLabelsmst_designer;
$fieldToolTips["mst_designer"] = &$fieldToolTipsmst_designer;
$placeHolders["mst_designer"] = &$placeHoldersmst_designer;
$page_titles["mst_designer"] = &$pageTitlesmst_designer;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mst_designer"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mst_designer"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mst_designer()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  name,  sort,  update_at,  update_by,  create_at,  create_by,  line_category,  yahoo_junle,  category_id,  sub_category_id1,  english_name";
$proto0["m_strFrom"] = "FROM mst_designer";
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
	"m_strTable" => "mst_designer",
	"m_srcTableName" => "mst_designer"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "mst_designer";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "mst_designer",
	"m_srcTableName" => "mst_designer"
));

$proto8["m_sql"] = "name";
$proto8["m_srcTableName"] = "mst_designer";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "sort",
	"m_strTable" => "mst_designer",
	"m_srcTableName" => "mst_designer"
));

$proto10["m_sql"] = "sort";
$proto10["m_srcTableName"] = "mst_designer";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "update_at",
	"m_strTable" => "mst_designer",
	"m_srcTableName" => "mst_designer"
));

$proto12["m_sql"] = "update_at";
$proto12["m_srcTableName"] = "mst_designer";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "update_by",
	"m_strTable" => "mst_designer",
	"m_srcTableName" => "mst_designer"
));

$proto14["m_sql"] = "update_by";
$proto14["m_srcTableName"] = "mst_designer";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "create_at",
	"m_strTable" => "mst_designer",
	"m_srcTableName" => "mst_designer"
));

$proto16["m_sql"] = "create_at";
$proto16["m_srcTableName"] = "mst_designer";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "create_by",
	"m_strTable" => "mst_designer",
	"m_srcTableName" => "mst_designer"
));

$proto18["m_sql"] = "create_by";
$proto18["m_srcTableName"] = "mst_designer";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "line_category",
	"m_strTable" => "mst_designer",
	"m_srcTableName" => "mst_designer"
));

$proto20["m_sql"] = "line_category";
$proto20["m_srcTableName"] = "mst_designer";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_junle",
	"m_strTable" => "mst_designer",
	"m_srcTableName" => "mst_designer"
));

$proto22["m_sql"] = "yahoo_junle";
$proto22["m_srcTableName"] = "mst_designer";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "category_id",
	"m_strTable" => "mst_designer",
	"m_srcTableName" => "mst_designer"
));

$proto24["m_sql"] = "category_id";
$proto24["m_srcTableName"] = "mst_designer";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "sub_category_id1",
	"m_strTable" => "mst_designer",
	"m_srcTableName" => "mst_designer"
));

$proto26["m_sql"] = "sub_category_id1";
$proto26["m_srcTableName"] = "mst_designer";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "english_name",
	"m_strTable" => "mst_designer",
	"m_srcTableName" => "mst_designer"
));

$proto28["m_sql"] = "english_name";
$proto28["m_srcTableName"] = "mst_designer";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "mst_designer";
$proto31["m_srcTableName"] = "mst_designer";
$proto31["m_columns"] = array();
$proto31["m_columns"][] = "id";
$proto31["m_columns"][] = "name";
$proto31["m_columns"][] = "sort";
$proto31["m_columns"][] = "update_at";
$proto31["m_columns"][] = "update_by";
$proto31["m_columns"][] = "create_at";
$proto31["m_columns"][] = "create_by";
$proto31["m_columns"][] = "line_category";
$proto31["m_columns"][] = "yahoo_junle";
$proto31["m_columns"][] = "category_id";
$proto31["m_columns"][] = "sub_category_id1";
$proto31["m_columns"][] = "english_name";
$obj = new SQLTable($proto31);

$proto30["m_table"] = $obj;
$proto30["m_sql"] = "mst_designer";
$proto30["m_alias"] = "";
$proto30["m_srcTableName"] = "mst_designer";
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
	"m_strTable" => "mst_designer",
	"m_srcTableName" => "mst_designer"
));

$proto34["m_column"]=$obj;
$proto34["m_bAsc"] = 0;
$proto34["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto34);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="mst_designer";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mst_designer = createSqlQuery_mst_designer();


	
		;

												

$tdatamst_designer[".sqlquery"] = $queryData_mst_designer;

include_once(getabspath("include/mst_designer_events.php"));
$tableEvents["mst_designer"] = new eventclass_mst_designer;
$tdatamst_designer[".hasEvents"] = true;

?>