<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamst_effect = array();
	$tdatamst_effect[".truncateText"] = true;
	$tdatamst_effect[".NumberOfChars"] = 80;
	$tdatamst_effect[".ShortName"] = "mst_effect";
	$tdatamst_effect[".OwnerID"] = "";
	$tdatamst_effect[".OriginalTable"] = "mst_effect";

//	field labels
$fieldLabelsmst_effect = array();
$fieldToolTipsmst_effect = array();
$pageTitlesmst_effect = array();
$placeHoldersmst_effect = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmst_effect["Japanese"] = array();
	$fieldToolTipsmst_effect["Japanese"] = array();
	$placeHoldersmst_effect["Japanese"] = array();
	$pageTitlesmst_effect["Japanese"] = array();
	$fieldLabelsmst_effect["Japanese"]["id"] = "Id";
	$fieldToolTipsmst_effect["Japanese"]["id"] = "";
	$placeHoldersmst_effect["Japanese"]["id"] = "";
	$fieldLabelsmst_effect["Japanese"]["name"] = "Name";
	$fieldToolTipsmst_effect["Japanese"]["name"] = "";
	$placeHoldersmst_effect["Japanese"]["name"] = "";
	$fieldLabelsmst_effect["Japanese"]["sort"] = "Sort";
	$fieldToolTipsmst_effect["Japanese"]["sort"] = "";
	$placeHoldersmst_effect["Japanese"]["sort"] = "";
	$fieldLabelsmst_effect["Japanese"]["update_at"] = "更新日";
	$fieldToolTipsmst_effect["Japanese"]["update_at"] = "";
	$placeHoldersmst_effect["Japanese"]["update_at"] = "";
	$fieldLabelsmst_effect["Japanese"]["update_by"] = "更新者";
	$fieldToolTipsmst_effect["Japanese"]["update_by"] = "";
	$placeHoldersmst_effect["Japanese"]["update_by"] = "";
	$fieldLabelsmst_effect["Japanese"]["create_at"] = "登録日";
	$fieldToolTipsmst_effect["Japanese"]["create_at"] = "";
	$placeHoldersmst_effect["Japanese"]["create_at"] = "";
	$fieldLabelsmst_effect["Japanese"]["create_by"] = "登録者";
	$fieldToolTipsmst_effect["Japanese"]["create_by"] = "";
	$placeHoldersmst_effect["Japanese"]["create_by"] = "";
	$fieldLabelsmst_effect["Japanese"]["line_category"] = "ラインカテゴリー";
	$fieldToolTipsmst_effect["Japanese"]["line_category"] = "";
	$placeHoldersmst_effect["Japanese"]["line_category"] = "";
	$fieldLabelsmst_effect["Japanese"]["yahoo_junle"] = "ブランドID";
	$fieldToolTipsmst_effect["Japanese"]["yahoo_junle"] = "";
	$placeHoldersmst_effect["Japanese"]["yahoo_junle"] = "";
	$fieldLabelsmst_effect["Japanese"]["category_id"] = "大カテゴリー";
	$fieldToolTipsmst_effect["Japanese"]["category_id"] = "";
	$placeHoldersmst_effect["Japanese"]["category_id"] = "";
	$fieldLabelsmst_effect["Japanese"]["sub_category_id1"] = "中カテゴリー";
	$fieldToolTipsmst_effect["Japanese"]["sub_category_id1"] = "";
	$placeHoldersmst_effect["Japanese"]["sub_category_id1"] = "";
	$fieldLabelsmst_effect["Japanese"]["english_name"] = "英名";
	$fieldToolTipsmst_effect["Japanese"]["english_name"] = "";
	$placeHoldersmst_effect["Japanese"]["english_name"] = "";
	if (count($fieldToolTipsmst_effect["Japanese"]))
		$tdatamst_effect[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmst_effect[""] = array();
	$fieldToolTipsmst_effect[""] = array();
	$placeHoldersmst_effect[""] = array();
	$pageTitlesmst_effect[""] = array();
	$fieldLabelsmst_effect[""]["id"] = "Id";
	$fieldToolTipsmst_effect[""]["id"] = "";
	$placeHoldersmst_effect[""]["id"] = "";
	$fieldLabelsmst_effect[""]["name"] = "Name";
	$fieldToolTipsmst_effect[""]["name"] = "";
	$placeHoldersmst_effect[""]["name"] = "";
	$fieldLabelsmst_effect[""]["sort"] = "Sort";
	$fieldToolTipsmst_effect[""]["sort"] = "";
	$placeHoldersmst_effect[""]["sort"] = "";
	$fieldLabelsmst_effect[""]["update_at"] = "Update At";
	$fieldToolTipsmst_effect[""]["update_at"] = "";
	$placeHoldersmst_effect[""]["update_at"] = "";
	$fieldLabelsmst_effect[""]["update_by"] = "Update By";
	$fieldToolTipsmst_effect[""]["update_by"] = "";
	$placeHoldersmst_effect[""]["update_by"] = "";
	$fieldLabelsmst_effect[""]["create_at"] = "Create At";
	$fieldToolTipsmst_effect[""]["create_at"] = "";
	$placeHoldersmst_effect[""]["create_at"] = "";
	$fieldLabelsmst_effect[""]["create_by"] = "Create By";
	$fieldToolTipsmst_effect[""]["create_by"] = "";
	$placeHoldersmst_effect[""]["create_by"] = "";
	$fieldLabelsmst_effect[""]["line_category"] = "Line Category";
	$fieldToolTipsmst_effect[""]["line_category"] = "";
	$placeHoldersmst_effect[""]["line_category"] = "";
	$fieldLabelsmst_effect[""]["yahoo_junle"] = "Yahoo Junle";
	$fieldToolTipsmst_effect[""]["yahoo_junle"] = "";
	$placeHoldersmst_effect[""]["yahoo_junle"] = "";
	$fieldLabelsmst_effect[""]["category_id"] = "Category Id";
	$fieldToolTipsmst_effect[""]["category_id"] = "";
	$placeHoldersmst_effect[""]["category_id"] = "";
	$fieldLabelsmst_effect[""]["sub_category_id1"] = "Sub Category Id1";
	$fieldToolTipsmst_effect[""]["sub_category_id1"] = "";
	$placeHoldersmst_effect[""]["sub_category_id1"] = "";
	$fieldLabelsmst_effect[""]["english_name"] = "English Name";
	$fieldToolTipsmst_effect[""]["english_name"] = "";
	$placeHoldersmst_effect[""]["english_name"] = "";
	if (count($fieldToolTipsmst_effect[""]))
		$tdatamst_effect[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmst_effect["English"] = array();
	$fieldToolTipsmst_effect["English"] = array();
	$placeHoldersmst_effect["English"] = array();
	$pageTitlesmst_effect["English"] = array();
	$fieldLabelsmst_effect["English"]["id"] = "Id";
	$fieldToolTipsmst_effect["English"]["id"] = "";
	$placeHoldersmst_effect["English"]["id"] = "";
	$fieldLabelsmst_effect["English"]["name"] = "Name";
	$fieldToolTipsmst_effect["English"]["name"] = "";
	$placeHoldersmst_effect["English"]["name"] = "";
	$fieldLabelsmst_effect["English"]["sort"] = "Sort";
	$fieldToolTipsmst_effect["English"]["sort"] = "";
	$placeHoldersmst_effect["English"]["sort"] = "";
	$fieldLabelsmst_effect["English"]["update_at"] = "Update At";
	$fieldToolTipsmst_effect["English"]["update_at"] = "";
	$placeHoldersmst_effect["English"]["update_at"] = "";
	$fieldLabelsmst_effect["English"]["update_by"] = "Update By";
	$fieldToolTipsmst_effect["English"]["update_by"] = "";
	$placeHoldersmst_effect["English"]["update_by"] = "";
	$fieldLabelsmst_effect["English"]["create_at"] = "Create At";
	$fieldToolTipsmst_effect["English"]["create_at"] = "";
	$placeHoldersmst_effect["English"]["create_at"] = "";
	$fieldLabelsmst_effect["English"]["create_by"] = "Create By";
	$fieldToolTipsmst_effect["English"]["create_by"] = "";
	$placeHoldersmst_effect["English"]["create_by"] = "";
	$fieldLabelsmst_effect["English"]["line_category"] = "Line Category";
	$fieldToolTipsmst_effect["English"]["line_category"] = "";
	$placeHoldersmst_effect["English"]["line_category"] = "";
	$fieldLabelsmst_effect["English"]["yahoo_junle"] = "Yahoo Junle";
	$fieldToolTipsmst_effect["English"]["yahoo_junle"] = "";
	$placeHoldersmst_effect["English"]["yahoo_junle"] = "";
	$fieldLabelsmst_effect["English"]["category_id"] = "Category Id";
	$fieldToolTipsmst_effect["English"]["category_id"] = "";
	$placeHoldersmst_effect["English"]["category_id"] = "";
	$fieldLabelsmst_effect["English"]["sub_category_id1"] = "Sub Category Id1";
	$fieldToolTipsmst_effect["English"]["sub_category_id1"] = "";
	$placeHoldersmst_effect["English"]["sub_category_id1"] = "";
	$fieldLabelsmst_effect["English"]["english_name"] = "English Name";
	$fieldToolTipsmst_effect["English"]["english_name"] = "";
	$placeHoldersmst_effect["English"]["english_name"] = "";
	if (count($fieldToolTipsmst_effect["English"]))
		$tdatamst_effect[".isUseToolTips"] = true;
}


	$tdatamst_effect[".NCSearch"] = true;



$tdatamst_effect[".shortTableName"] = "mst_effect";
$tdatamst_effect[".nSecOptions"] = 0;
$tdatamst_effect[".recsPerRowPrint"] = 1;
$tdatamst_effect[".mainTableOwnerID"] = "";
$tdatamst_effect[".moveNext"] = 1;
$tdatamst_effect[".entityType"] = 0;

$tdatamst_effect[".strOriginalTableName"] = "mst_effect";

	



$tdatamst_effect[".showAddInPopup"] = false;

$tdatamst_effect[".showEditInPopup"] = false;

$tdatamst_effect[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamst_effect[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamst_effect[".fieldsForRegister"] = array();

$tdatamst_effect[".listAjax"] = false;

	$tdatamst_effect[".audit"] = true;

	$tdatamst_effect[".locking"] = false;



$tdatamst_effect[".list"] = true;

$tdatamst_effect[".inlineEdit"] = true;


$tdatamst_effect[".reorderRecordsByHeader"] = true;



$tdatamst_effect[".inlineAdd"] = true;

$tdatamst_effect[".import"] = true;

$tdatamst_effect[".exportTo"] = true;

$tdatamst_effect[".printFriendly"] = true;

$tdatamst_effect[".delete"] = true;

$tdatamst_effect[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamst_effect[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamst_effect[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamst_effect[".searchSaving"] = false;
//

$tdatamst_effect[".showSearchPanel"] = true;
		$tdatamst_effect[".flexibleSearch"] = true;

$tdatamst_effect[".isUseAjaxSuggest"] = true;

$tdatamst_effect[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatamst_effect[".ajaxCodeSnippetAdded"] = false;

$tdatamst_effect[".buttonsAdded"] = false;

$tdatamst_effect[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamst_effect[".isUseTimeForSearch"] = false;





$tdatamst_effect[".allSearchFields"] = array();
$tdatamst_effect[".filterFields"] = array();
$tdatamst_effect[".requiredSearchFields"] = array();

$tdatamst_effect[".allSearchFields"][] = "id";
	$tdatamst_effect[".allSearchFields"][] = "name";
	$tdatamst_effect[".allSearchFields"][] = "sort";
	$tdatamst_effect[".allSearchFields"][] = "update_at";
	$tdatamst_effect[".allSearchFields"][] = "update_by";
	$tdatamst_effect[".allSearchFields"][] = "create_at";
	$tdatamst_effect[".allSearchFields"][] = "create_by";
	$tdatamst_effect[".allSearchFields"][] = "line_category";
	$tdatamst_effect[".allSearchFields"][] = "yahoo_junle";
	$tdatamst_effect[".allSearchFields"][] = "category_id";
	$tdatamst_effect[".allSearchFields"][] = "sub_category_id1";
	$tdatamst_effect[".allSearchFields"][] = "english_name";
	

$tdatamst_effect[".googleLikeFields"] = array();
$tdatamst_effect[".googleLikeFields"][] = "id";
$tdatamst_effect[".googleLikeFields"][] = "name";
$tdatamst_effect[".googleLikeFields"][] = "sort";
$tdatamst_effect[".googleLikeFields"][] = "update_at";
$tdatamst_effect[".googleLikeFields"][] = "update_by";
$tdatamst_effect[".googleLikeFields"][] = "create_at";
$tdatamst_effect[".googleLikeFields"][] = "create_by";
$tdatamst_effect[".googleLikeFields"][] = "line_category";
$tdatamst_effect[".googleLikeFields"][] = "yahoo_junle";
$tdatamst_effect[".googleLikeFields"][] = "category_id";
$tdatamst_effect[".googleLikeFields"][] = "sub_category_id1";
$tdatamst_effect[".googleLikeFields"][] = "english_name";

$tdatamst_effect[".panelSearchFields"] = array();
$tdatamst_effect[".searchPanelOptions"] = array();
$tdatamst_effect[".panelSearchFields"][] = "name";
	$tdatamst_effect[".panelSearchFields"][] = "yahoo_junle";
	
$tdatamst_effect[".advSearchFields"] = array();
$tdatamst_effect[".advSearchFields"][] = "id";
$tdatamst_effect[".advSearchFields"][] = "name";
$tdatamst_effect[".advSearchFields"][] = "sort";
$tdatamst_effect[".advSearchFields"][] = "update_at";
$tdatamst_effect[".advSearchFields"][] = "update_by";
$tdatamst_effect[".advSearchFields"][] = "create_at";
$tdatamst_effect[".advSearchFields"][] = "create_by";
$tdatamst_effect[".advSearchFields"][] = "line_category";
$tdatamst_effect[".advSearchFields"][] = "yahoo_junle";
$tdatamst_effect[".advSearchFields"][] = "category_id";
$tdatamst_effect[".advSearchFields"][] = "sub_category_id1";
$tdatamst_effect[".advSearchFields"][] = "english_name";

$tdatamst_effect[".tableType"] = "list";

$tdatamst_effect[".printerPageOrientation"] = 0;
$tdatamst_effect[".nPrinterPageScale"] = 100;

$tdatamst_effect[".nPrinterSplitRecords"] = 40;

$tdatamst_effect[".nPrinterPDFSplitRecords"] = 40;



$tdatamst_effect[".geocodingEnabled"] = false;





$tdatamst_effect[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamst_effect[".pageSize"] = 100;

$tdatamst_effect[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY id DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamst_effect[".strOrderBy"] = $tstrOrderBy;

$tdatamst_effect[".orderindexes"] = array();
$tdatamst_effect[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "`id`");

$tdatamst_effect[".sqlHead"] = "SELECT id,  name,  sort,  update_at,  update_by,  create_at,  create_by,  line_category,  yahoo_junle,  category_id,  sub_category_id1,  english_name";
$tdatamst_effect[".sqlFrom"] = "FROM mst_effect";
$tdatamst_effect[".sqlWhereExpr"] = "";
$tdatamst_effect[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamst_effect[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamst_effect[".arrGroupsPerPage"] = $arrGPP;

$tdatamst_effect[".highlightSearchResults"] = true;

$tableKeysmst_effect = array();
$tableKeysmst_effect[] = "id";
$tdatamst_effect[".Keys"] = $tableKeysmst_effect;

$tdatamst_effect[".listFields"] = array();
$tdatamst_effect[".listFields"][] = "id";
$tdatamst_effect[".listFields"][] = "name";
$tdatamst_effect[".listFields"][] = "english_name";
$tdatamst_effect[".listFields"][] = "sort";
$tdatamst_effect[".listFields"][] = "line_category";
$tdatamst_effect[".listFields"][] = "yahoo_junle";
$tdatamst_effect[".listFields"][] = "category_id";
$tdatamst_effect[".listFields"][] = "sub_category_id1";
$tdatamst_effect[".listFields"][] = "update_by";
$tdatamst_effect[".listFields"][] = "update_at";
$tdatamst_effect[".listFields"][] = "create_by";
$tdatamst_effect[".listFields"][] = "create_at";

$tdatamst_effect[".hideMobileList"] = array();


$tdatamst_effect[".viewFields"] = array();

$tdatamst_effect[".addFields"] = array();

$tdatamst_effect[".masterListFields"] = array();
$tdatamst_effect[".masterListFields"][] = "id";
$tdatamst_effect[".masterListFields"][] = "name";
$tdatamst_effect[".masterListFields"][] = "sort";
$tdatamst_effect[".masterListFields"][] = "update_at";
$tdatamst_effect[".masterListFields"][] = "update_by";
$tdatamst_effect[".masterListFields"][] = "create_at";
$tdatamst_effect[".masterListFields"][] = "create_by";
$tdatamst_effect[".masterListFields"][] = "line_category";
$tdatamst_effect[".masterListFields"][] = "yahoo_junle";
$tdatamst_effect[".masterListFields"][] = "category_id";
$tdatamst_effect[".masterListFields"][] = "sub_category_id1";
$tdatamst_effect[".masterListFields"][] = "english_name";

$tdatamst_effect[".inlineAddFields"] = array();
$tdatamst_effect[".inlineAddFields"][] = "name";
$tdatamst_effect[".inlineAddFields"][] = "english_name";
$tdatamst_effect[".inlineAddFields"][] = "sort";
$tdatamst_effect[".inlineAddFields"][] = "line_category";
$tdatamst_effect[".inlineAddFields"][] = "yahoo_junle";
$tdatamst_effect[".inlineAddFields"][] = "category_id";
$tdatamst_effect[".inlineAddFields"][] = "sub_category_id1";

$tdatamst_effect[".editFields"] = array();

$tdatamst_effect[".inlineEditFields"] = array();
$tdatamst_effect[".inlineEditFields"][] = "name";
$tdatamst_effect[".inlineEditFields"][] = "english_name";
$tdatamst_effect[".inlineEditFields"][] = "sort";
$tdatamst_effect[".inlineEditFields"][] = "line_category";
$tdatamst_effect[".inlineEditFields"][] = "yahoo_junle";
$tdatamst_effect[".inlineEditFields"][] = "category_id";
$tdatamst_effect[".inlineEditFields"][] = "sub_category_id1";

$tdatamst_effect[".updateSelectedFields"] = array();


$tdatamst_effect[".exportFields"] = array();
$tdatamst_effect[".exportFields"][] = "id";
$tdatamst_effect[".exportFields"][] = "name";
$tdatamst_effect[".exportFields"][] = "sort";
$tdatamst_effect[".exportFields"][] = "update_at";
$tdatamst_effect[".exportFields"][] = "update_by";
$tdatamst_effect[".exportFields"][] = "create_at";
$tdatamst_effect[".exportFields"][] = "create_by";
$tdatamst_effect[".exportFields"][] = "line_category";
$tdatamst_effect[".exportFields"][] = "yahoo_junle";
$tdatamst_effect[".exportFields"][] = "category_id";
$tdatamst_effect[".exportFields"][] = "sub_category_id1";
$tdatamst_effect[".exportFields"][] = "english_name";

$tdatamst_effect[".importFields"] = array();
$tdatamst_effect[".importFields"][] = "id";
$tdatamst_effect[".importFields"][] = "name";
$tdatamst_effect[".importFields"][] = "sort";
$tdatamst_effect[".importFields"][] = "line_category";
$tdatamst_effect[".importFields"][] = "yahoo_junle";
$tdatamst_effect[".importFields"][] = "category_id";
$tdatamst_effect[".importFields"][] = "sub_category_id1";
$tdatamst_effect[".importFields"][] = "english_name";

$tdatamst_effect[".printFields"] = array();
$tdatamst_effect[".printFields"][] = "id";
$tdatamst_effect[".printFields"][] = "name";
$tdatamst_effect[".printFields"][] = "sort";
$tdatamst_effect[".printFields"][] = "update_at";
$tdatamst_effect[".printFields"][] = "update_by";
$tdatamst_effect[".printFields"][] = "create_at";
$tdatamst_effect[".printFields"][] = "create_by";
$tdatamst_effect[".printFields"][] = "line_category";
$tdatamst_effect[".printFields"][] = "yahoo_junle";
$tdatamst_effect[".printFields"][] = "category_id";
$tdatamst_effect[".printFields"][] = "sub_category_id1";
$tdatamst_effect[".printFields"][] = "english_name";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "mst_effect";
	$fdata["Label"] = GetFieldLabel("mst_effect","id");
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




	$tdatamst_effect["id"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "mst_effect";
	$fdata["Label"] = GetFieldLabel("mst_effect","name");
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




	$tdatamst_effect["name"] = $fdata;
//	sort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sort";
	$fdata["GoodName"] = "sort";
	$fdata["ownerTable"] = "mst_effect";
	$fdata["Label"] = GetFieldLabel("mst_effect","sort");
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




	$tdatamst_effect["sort"] = $fdata;
//	update_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "update_at";
	$fdata["GoodName"] = "update_at";
	$fdata["ownerTable"] = "mst_effect";
	$fdata["Label"] = GetFieldLabel("mst_effect","update_at");
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




	$tdatamst_effect["update_at"] = $fdata;
//	update_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "update_by";
	$fdata["GoodName"] = "update_by";
	$fdata["ownerTable"] = "mst_effect";
	$fdata["Label"] = GetFieldLabel("mst_effect","update_by");
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




	$tdatamst_effect["update_by"] = $fdata;
//	create_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "create_at";
	$fdata["GoodName"] = "create_at";
	$fdata["ownerTable"] = "mst_effect";
	$fdata["Label"] = GetFieldLabel("mst_effect","create_at");
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




	$tdatamst_effect["create_at"] = $fdata;
//	create_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "create_by";
	$fdata["GoodName"] = "create_by";
	$fdata["ownerTable"] = "mst_effect";
	$fdata["Label"] = GetFieldLabel("mst_effect","create_by");
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




	$tdatamst_effect["create_by"] = $fdata;
//	line_category
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "line_category";
	$fdata["GoodName"] = "line_category";
	$fdata["ownerTable"] = "mst_effect";
	$fdata["Label"] = GetFieldLabel("mst_effect","line_category");
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




	$tdatamst_effect["line_category"] = $fdata;
//	yahoo_junle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "yahoo_junle";
	$fdata["GoodName"] = "yahoo_junle";
	$fdata["ownerTable"] = "mst_effect";
	$fdata["Label"] = GetFieldLabel("mst_effect","yahoo_junle");
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




	$tdatamst_effect["yahoo_junle"] = $fdata;
//	category_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "category_id";
	$fdata["GoodName"] = "category_id";
	$fdata["ownerTable"] = "mst_effect";
	$fdata["Label"] = GetFieldLabel("mst_effect","category_id");
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




	$tdatamst_effect["category_id"] = $fdata;
//	sub_category_id1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "sub_category_id1";
	$fdata["GoodName"] = "sub_category_id1";
	$fdata["ownerTable"] = "mst_effect";
	$fdata["Label"] = GetFieldLabel("mst_effect","sub_category_id1");
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




	$tdatamst_effect["sub_category_id1"] = $fdata;
//	english_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "english_name";
	$fdata["GoodName"] = "english_name";
	$fdata["ownerTable"] = "mst_effect";
	$fdata["Label"] = GetFieldLabel("mst_effect","english_name");
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




	$tdatamst_effect["english_name"] = $fdata;


$tables_data["mst_effect"]=&$tdatamst_effect;
$field_labels["mst_effect"] = &$fieldLabelsmst_effect;
$fieldToolTips["mst_effect"] = &$fieldToolTipsmst_effect;
$placeHolders["mst_effect"] = &$placeHoldersmst_effect;
$page_titles["mst_effect"] = &$pageTitlesmst_effect;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mst_effect"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mst_effect"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mst_effect()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  name,  sort,  update_at,  update_by,  create_at,  create_by,  line_category,  yahoo_junle,  category_id,  sub_category_id1,  english_name";
$proto0["m_strFrom"] = "FROM mst_effect";
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
	"m_strTable" => "mst_effect",
	"m_srcTableName" => "mst_effect"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "mst_effect";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "mst_effect",
	"m_srcTableName" => "mst_effect"
));

$proto8["m_sql"] = "name";
$proto8["m_srcTableName"] = "mst_effect";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "sort",
	"m_strTable" => "mst_effect",
	"m_srcTableName" => "mst_effect"
));

$proto10["m_sql"] = "sort";
$proto10["m_srcTableName"] = "mst_effect";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "update_at",
	"m_strTable" => "mst_effect",
	"m_srcTableName" => "mst_effect"
));

$proto12["m_sql"] = "update_at";
$proto12["m_srcTableName"] = "mst_effect";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "update_by",
	"m_strTable" => "mst_effect",
	"m_srcTableName" => "mst_effect"
));

$proto14["m_sql"] = "update_by";
$proto14["m_srcTableName"] = "mst_effect";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "create_at",
	"m_strTable" => "mst_effect",
	"m_srcTableName" => "mst_effect"
));

$proto16["m_sql"] = "create_at";
$proto16["m_srcTableName"] = "mst_effect";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "create_by",
	"m_strTable" => "mst_effect",
	"m_srcTableName" => "mst_effect"
));

$proto18["m_sql"] = "create_by";
$proto18["m_srcTableName"] = "mst_effect";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "line_category",
	"m_strTable" => "mst_effect",
	"m_srcTableName" => "mst_effect"
));

$proto20["m_sql"] = "line_category";
$proto20["m_srcTableName"] = "mst_effect";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_junle",
	"m_strTable" => "mst_effect",
	"m_srcTableName" => "mst_effect"
));

$proto22["m_sql"] = "yahoo_junle";
$proto22["m_srcTableName"] = "mst_effect";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "category_id",
	"m_strTable" => "mst_effect",
	"m_srcTableName" => "mst_effect"
));

$proto24["m_sql"] = "category_id";
$proto24["m_srcTableName"] = "mst_effect";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "sub_category_id1",
	"m_strTable" => "mst_effect",
	"m_srcTableName" => "mst_effect"
));

$proto26["m_sql"] = "sub_category_id1";
$proto26["m_srcTableName"] = "mst_effect";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "english_name",
	"m_strTable" => "mst_effect",
	"m_srcTableName" => "mst_effect"
));

$proto28["m_sql"] = "english_name";
$proto28["m_srcTableName"] = "mst_effect";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "mst_effect";
$proto31["m_srcTableName"] = "mst_effect";
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
$proto30["m_sql"] = "mst_effect";
$proto30["m_alias"] = "";
$proto30["m_srcTableName"] = "mst_effect";
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
	"m_strTable" => "mst_effect",
	"m_srcTableName" => "mst_effect"
));

$proto34["m_column"]=$obj;
$proto34["m_bAsc"] = 0;
$proto34["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto34);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="mst_effect";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mst_effect = createSqlQuery_mst_effect();


	
		;

												

$tdatamst_effect[".sqlquery"] = $queryData_mst_effect;

include_once(getabspath("include/mst_effect_events.php"));
$tableEvents["mst_effect"] = new eventclass_mst_effect;
$tdatamst_effect[".hasEvents"] = true;

?>