<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamst_shape = array();
	$tdatamst_shape[".truncateText"] = true;
	$tdatamst_shape[".NumberOfChars"] = 80;
	$tdatamst_shape[".ShortName"] = "mst_shape";
	$tdatamst_shape[".OwnerID"] = "";
	$tdatamst_shape[".OriginalTable"] = "mst_shape";

//	field labels
$fieldLabelsmst_shape = array();
$fieldToolTipsmst_shape = array();
$pageTitlesmst_shape = array();
$placeHoldersmst_shape = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmst_shape["Japanese"] = array();
	$fieldToolTipsmst_shape["Japanese"] = array();
	$placeHoldersmst_shape["Japanese"] = array();
	$pageTitlesmst_shape["Japanese"] = array();
	$fieldLabelsmst_shape["Japanese"]["id"] = "Id";
	$fieldToolTipsmst_shape["Japanese"]["id"] = "";
	$placeHoldersmst_shape["Japanese"]["id"] = "";
	$fieldLabelsmst_shape["Japanese"]["name"] = "Name";
	$fieldToolTipsmst_shape["Japanese"]["name"] = "";
	$placeHoldersmst_shape["Japanese"]["name"] = "";
	$fieldLabelsmst_shape["Japanese"]["sort"] = "Sort";
	$fieldToolTipsmst_shape["Japanese"]["sort"] = "";
	$placeHoldersmst_shape["Japanese"]["sort"] = "";
	$fieldLabelsmst_shape["Japanese"]["update_at"] = "更新日";
	$fieldToolTipsmst_shape["Japanese"]["update_at"] = "";
	$placeHoldersmst_shape["Japanese"]["update_at"] = "";
	$fieldLabelsmst_shape["Japanese"]["update_by"] = "更新者";
	$fieldToolTipsmst_shape["Japanese"]["update_by"] = "";
	$placeHoldersmst_shape["Japanese"]["update_by"] = "";
	$fieldLabelsmst_shape["Japanese"]["create_at"] = "登録日";
	$fieldToolTipsmst_shape["Japanese"]["create_at"] = "";
	$placeHoldersmst_shape["Japanese"]["create_at"] = "";
	$fieldLabelsmst_shape["Japanese"]["create_by"] = "登録者";
	$fieldToolTipsmst_shape["Japanese"]["create_by"] = "";
	$placeHoldersmst_shape["Japanese"]["create_by"] = "";
	$fieldLabelsmst_shape["Japanese"]["line_category"] = "ラインカテゴリー";
	$fieldToolTipsmst_shape["Japanese"]["line_category"] = "";
	$placeHoldersmst_shape["Japanese"]["line_category"] = "";
	$fieldLabelsmst_shape["Japanese"]["yahoo_junle"] = "ブランドID";
	$fieldToolTipsmst_shape["Japanese"]["yahoo_junle"] = "";
	$placeHoldersmst_shape["Japanese"]["yahoo_junle"] = "";
	$fieldLabelsmst_shape["Japanese"]["category_id"] = "大カテゴリー";
	$fieldToolTipsmst_shape["Japanese"]["category_id"] = "";
	$placeHoldersmst_shape["Japanese"]["category_id"] = "";
	$fieldLabelsmst_shape["Japanese"]["sub_category_id1"] = "中カテゴリー";
	$fieldToolTipsmst_shape["Japanese"]["sub_category_id1"] = "";
	$placeHoldersmst_shape["Japanese"]["sub_category_id1"] = "";
	$fieldLabelsmst_shape["Japanese"]["english_name"] = "英名";
	$fieldToolTipsmst_shape["Japanese"]["english_name"] = "";
	$placeHoldersmst_shape["Japanese"]["english_name"] = "";
	if (count($fieldToolTipsmst_shape["Japanese"]))
		$tdatamst_shape[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmst_shape[""] = array();
	$fieldToolTipsmst_shape[""] = array();
	$placeHoldersmst_shape[""] = array();
	$pageTitlesmst_shape[""] = array();
	$fieldLabelsmst_shape[""]["id"] = "Id";
	$fieldToolTipsmst_shape[""]["id"] = "";
	$placeHoldersmst_shape[""]["id"] = "";
	$fieldLabelsmst_shape[""]["name"] = "Name";
	$fieldToolTipsmst_shape[""]["name"] = "";
	$placeHoldersmst_shape[""]["name"] = "";
	$fieldLabelsmst_shape[""]["sort"] = "Sort";
	$fieldToolTipsmst_shape[""]["sort"] = "";
	$placeHoldersmst_shape[""]["sort"] = "";
	$fieldLabelsmst_shape[""]["update_at"] = "Update At";
	$fieldToolTipsmst_shape[""]["update_at"] = "";
	$placeHoldersmst_shape[""]["update_at"] = "";
	$fieldLabelsmst_shape[""]["update_by"] = "Update By";
	$fieldToolTipsmst_shape[""]["update_by"] = "";
	$placeHoldersmst_shape[""]["update_by"] = "";
	$fieldLabelsmst_shape[""]["create_at"] = "Create At";
	$fieldToolTipsmst_shape[""]["create_at"] = "";
	$placeHoldersmst_shape[""]["create_at"] = "";
	$fieldLabelsmst_shape[""]["create_by"] = "Create By";
	$fieldToolTipsmst_shape[""]["create_by"] = "";
	$placeHoldersmst_shape[""]["create_by"] = "";
	$fieldLabelsmst_shape[""]["line_category"] = "Line Category";
	$fieldToolTipsmst_shape[""]["line_category"] = "";
	$placeHoldersmst_shape[""]["line_category"] = "";
	$fieldLabelsmst_shape[""]["yahoo_junle"] = "Yahoo Junle";
	$fieldToolTipsmst_shape[""]["yahoo_junle"] = "";
	$placeHoldersmst_shape[""]["yahoo_junle"] = "";
	$fieldLabelsmst_shape[""]["category_id"] = "Category Id";
	$fieldToolTipsmst_shape[""]["category_id"] = "";
	$placeHoldersmst_shape[""]["category_id"] = "";
	$fieldLabelsmst_shape[""]["sub_category_id1"] = "Sub Category Id1";
	$fieldToolTipsmst_shape[""]["sub_category_id1"] = "";
	$placeHoldersmst_shape[""]["sub_category_id1"] = "";
	$fieldLabelsmst_shape[""]["english_name"] = "English Name";
	$fieldToolTipsmst_shape[""]["english_name"] = "";
	$placeHoldersmst_shape[""]["english_name"] = "";
	if (count($fieldToolTipsmst_shape[""]))
		$tdatamst_shape[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmst_shape["English"] = array();
	$fieldToolTipsmst_shape["English"] = array();
	$placeHoldersmst_shape["English"] = array();
	$pageTitlesmst_shape["English"] = array();
	$fieldLabelsmst_shape["English"]["id"] = "Id";
	$fieldToolTipsmst_shape["English"]["id"] = "";
	$placeHoldersmst_shape["English"]["id"] = "";
	$fieldLabelsmst_shape["English"]["name"] = "Name";
	$fieldToolTipsmst_shape["English"]["name"] = "";
	$placeHoldersmst_shape["English"]["name"] = "";
	$fieldLabelsmst_shape["English"]["sort"] = "Sort";
	$fieldToolTipsmst_shape["English"]["sort"] = "";
	$placeHoldersmst_shape["English"]["sort"] = "";
	$fieldLabelsmst_shape["English"]["update_at"] = "Update At";
	$fieldToolTipsmst_shape["English"]["update_at"] = "";
	$placeHoldersmst_shape["English"]["update_at"] = "";
	$fieldLabelsmst_shape["English"]["update_by"] = "Update By";
	$fieldToolTipsmst_shape["English"]["update_by"] = "";
	$placeHoldersmst_shape["English"]["update_by"] = "";
	$fieldLabelsmst_shape["English"]["create_at"] = "Create At";
	$fieldToolTipsmst_shape["English"]["create_at"] = "";
	$placeHoldersmst_shape["English"]["create_at"] = "";
	$fieldLabelsmst_shape["English"]["create_by"] = "Create By";
	$fieldToolTipsmst_shape["English"]["create_by"] = "";
	$placeHoldersmst_shape["English"]["create_by"] = "";
	$fieldLabelsmst_shape["English"]["line_category"] = "Line Category";
	$fieldToolTipsmst_shape["English"]["line_category"] = "";
	$placeHoldersmst_shape["English"]["line_category"] = "";
	$fieldLabelsmst_shape["English"]["yahoo_junle"] = "Yahoo Junle";
	$fieldToolTipsmst_shape["English"]["yahoo_junle"] = "";
	$placeHoldersmst_shape["English"]["yahoo_junle"] = "";
	$fieldLabelsmst_shape["English"]["category_id"] = "Category Id";
	$fieldToolTipsmst_shape["English"]["category_id"] = "";
	$placeHoldersmst_shape["English"]["category_id"] = "";
	$fieldLabelsmst_shape["English"]["sub_category_id1"] = "Sub Category Id1";
	$fieldToolTipsmst_shape["English"]["sub_category_id1"] = "";
	$placeHoldersmst_shape["English"]["sub_category_id1"] = "";
	$fieldLabelsmst_shape["English"]["english_name"] = "English Name";
	$fieldToolTipsmst_shape["English"]["english_name"] = "";
	$placeHoldersmst_shape["English"]["english_name"] = "";
	if (count($fieldToolTipsmst_shape["English"]))
		$tdatamst_shape[".isUseToolTips"] = true;
}


	$tdatamst_shape[".NCSearch"] = true;



$tdatamst_shape[".shortTableName"] = "mst_shape";
$tdatamst_shape[".nSecOptions"] = 0;
$tdatamst_shape[".recsPerRowPrint"] = 1;
$tdatamst_shape[".mainTableOwnerID"] = "";
$tdatamst_shape[".moveNext"] = 1;
$tdatamst_shape[".entityType"] = 0;

$tdatamst_shape[".strOriginalTableName"] = "mst_shape";

	



$tdatamst_shape[".showAddInPopup"] = false;

$tdatamst_shape[".showEditInPopup"] = false;

$tdatamst_shape[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamst_shape[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamst_shape[".fieldsForRegister"] = array();

$tdatamst_shape[".listAjax"] = false;

	$tdatamst_shape[".audit"] = true;

	$tdatamst_shape[".locking"] = false;



$tdatamst_shape[".list"] = true;

$tdatamst_shape[".inlineEdit"] = true;


$tdatamst_shape[".reorderRecordsByHeader"] = true;



$tdatamst_shape[".inlineAdd"] = true;

$tdatamst_shape[".import"] = true;

$tdatamst_shape[".exportTo"] = true;

$tdatamst_shape[".printFriendly"] = true;

$tdatamst_shape[".delete"] = true;

$tdatamst_shape[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamst_shape[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamst_shape[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamst_shape[".searchSaving"] = false;
//

$tdatamst_shape[".showSearchPanel"] = true;
		$tdatamst_shape[".flexibleSearch"] = true;

$tdatamst_shape[".isUseAjaxSuggest"] = true;

$tdatamst_shape[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatamst_shape[".ajaxCodeSnippetAdded"] = false;

$tdatamst_shape[".buttonsAdded"] = false;

$tdatamst_shape[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamst_shape[".isUseTimeForSearch"] = false;





$tdatamst_shape[".allSearchFields"] = array();
$tdatamst_shape[".filterFields"] = array();
$tdatamst_shape[".requiredSearchFields"] = array();

$tdatamst_shape[".allSearchFields"][] = "id";
	$tdatamst_shape[".allSearchFields"][] = "name";
	$tdatamst_shape[".allSearchFields"][] = "sort";
	$tdatamst_shape[".allSearchFields"][] = "update_at";
	$tdatamst_shape[".allSearchFields"][] = "update_by";
	$tdatamst_shape[".allSearchFields"][] = "create_at";
	$tdatamst_shape[".allSearchFields"][] = "create_by";
	$tdatamst_shape[".allSearchFields"][] = "line_category";
	$tdatamst_shape[".allSearchFields"][] = "yahoo_junle";
	$tdatamst_shape[".allSearchFields"][] = "category_id";
	$tdatamst_shape[".allSearchFields"][] = "sub_category_id1";
	$tdatamst_shape[".allSearchFields"][] = "english_name";
	

$tdatamst_shape[".googleLikeFields"] = array();
$tdatamst_shape[".googleLikeFields"][] = "id";
$tdatamst_shape[".googleLikeFields"][] = "name";
$tdatamst_shape[".googleLikeFields"][] = "sort";
$tdatamst_shape[".googleLikeFields"][] = "update_at";
$tdatamst_shape[".googleLikeFields"][] = "update_by";
$tdatamst_shape[".googleLikeFields"][] = "create_at";
$tdatamst_shape[".googleLikeFields"][] = "create_by";
$tdatamst_shape[".googleLikeFields"][] = "line_category";
$tdatamst_shape[".googleLikeFields"][] = "yahoo_junle";
$tdatamst_shape[".googleLikeFields"][] = "category_id";
$tdatamst_shape[".googleLikeFields"][] = "sub_category_id1";
$tdatamst_shape[".googleLikeFields"][] = "english_name";

$tdatamst_shape[".panelSearchFields"] = array();
$tdatamst_shape[".searchPanelOptions"] = array();
$tdatamst_shape[".panelSearchFields"][] = "name";
	$tdatamst_shape[".panelSearchFields"][] = "yahoo_junle";
	
$tdatamst_shape[".advSearchFields"] = array();
$tdatamst_shape[".advSearchFields"][] = "id";
$tdatamst_shape[".advSearchFields"][] = "name";
$tdatamst_shape[".advSearchFields"][] = "sort";
$tdatamst_shape[".advSearchFields"][] = "update_at";
$tdatamst_shape[".advSearchFields"][] = "update_by";
$tdatamst_shape[".advSearchFields"][] = "create_at";
$tdatamst_shape[".advSearchFields"][] = "create_by";
$tdatamst_shape[".advSearchFields"][] = "line_category";
$tdatamst_shape[".advSearchFields"][] = "yahoo_junle";
$tdatamst_shape[".advSearchFields"][] = "category_id";
$tdatamst_shape[".advSearchFields"][] = "sub_category_id1";
$tdatamst_shape[".advSearchFields"][] = "english_name";

$tdatamst_shape[".tableType"] = "list";

$tdatamst_shape[".printerPageOrientation"] = 0;
$tdatamst_shape[".nPrinterPageScale"] = 100;

$tdatamst_shape[".nPrinterSplitRecords"] = 40;

$tdatamst_shape[".nPrinterPDFSplitRecords"] = 40;



$tdatamst_shape[".geocodingEnabled"] = false;





$tdatamst_shape[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamst_shape[".pageSize"] = 100;

$tdatamst_shape[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY id DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamst_shape[".strOrderBy"] = $tstrOrderBy;

$tdatamst_shape[".orderindexes"] = array();
$tdatamst_shape[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "`id`");

$tdatamst_shape[".sqlHead"] = "SELECT id,  name,  sort,  update_at,  update_by,  create_at,  create_by,  line_category,  yahoo_junle,  category_id,  sub_category_id1,  english_name";
$tdatamst_shape[".sqlFrom"] = "FROM mst_shape";
$tdatamst_shape[".sqlWhereExpr"] = "";
$tdatamst_shape[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamst_shape[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamst_shape[".arrGroupsPerPage"] = $arrGPP;

$tdatamst_shape[".highlightSearchResults"] = true;

$tableKeysmst_shape = array();
$tableKeysmst_shape[] = "id";
$tdatamst_shape[".Keys"] = $tableKeysmst_shape;

$tdatamst_shape[".listFields"] = array();
$tdatamst_shape[".listFields"][] = "id";
$tdatamst_shape[".listFields"][] = "name";
$tdatamst_shape[".listFields"][] = "english_name";
$tdatamst_shape[".listFields"][] = "sort";
$tdatamst_shape[".listFields"][] = "line_category";
$tdatamst_shape[".listFields"][] = "yahoo_junle";
$tdatamst_shape[".listFields"][] = "category_id";
$tdatamst_shape[".listFields"][] = "sub_category_id1";
$tdatamst_shape[".listFields"][] = "update_by";
$tdatamst_shape[".listFields"][] = "update_at";
$tdatamst_shape[".listFields"][] = "create_by";
$tdatamst_shape[".listFields"][] = "create_at";

$tdatamst_shape[".hideMobileList"] = array();


$tdatamst_shape[".viewFields"] = array();

$tdatamst_shape[".addFields"] = array();

$tdatamst_shape[".masterListFields"] = array();
$tdatamst_shape[".masterListFields"][] = "id";
$tdatamst_shape[".masterListFields"][] = "name";
$tdatamst_shape[".masterListFields"][] = "sort";
$tdatamst_shape[".masterListFields"][] = "update_at";
$tdatamst_shape[".masterListFields"][] = "update_by";
$tdatamst_shape[".masterListFields"][] = "create_at";
$tdatamst_shape[".masterListFields"][] = "create_by";
$tdatamst_shape[".masterListFields"][] = "line_category";
$tdatamst_shape[".masterListFields"][] = "yahoo_junle";
$tdatamst_shape[".masterListFields"][] = "category_id";
$tdatamst_shape[".masterListFields"][] = "sub_category_id1";
$tdatamst_shape[".masterListFields"][] = "english_name";

$tdatamst_shape[".inlineAddFields"] = array();
$tdatamst_shape[".inlineAddFields"][] = "name";
$tdatamst_shape[".inlineAddFields"][] = "english_name";
$tdatamst_shape[".inlineAddFields"][] = "sort";
$tdatamst_shape[".inlineAddFields"][] = "line_category";
$tdatamst_shape[".inlineAddFields"][] = "yahoo_junle";
$tdatamst_shape[".inlineAddFields"][] = "category_id";
$tdatamst_shape[".inlineAddFields"][] = "sub_category_id1";

$tdatamst_shape[".editFields"] = array();

$tdatamst_shape[".inlineEditFields"] = array();
$tdatamst_shape[".inlineEditFields"][] = "name";
$tdatamst_shape[".inlineEditFields"][] = "english_name";
$tdatamst_shape[".inlineEditFields"][] = "sort";
$tdatamst_shape[".inlineEditFields"][] = "line_category";
$tdatamst_shape[".inlineEditFields"][] = "yahoo_junle";
$tdatamst_shape[".inlineEditFields"][] = "category_id";
$tdatamst_shape[".inlineEditFields"][] = "sub_category_id1";

$tdatamst_shape[".updateSelectedFields"] = array();


$tdatamst_shape[".exportFields"] = array();
$tdatamst_shape[".exportFields"][] = "id";
$tdatamst_shape[".exportFields"][] = "name";
$tdatamst_shape[".exportFields"][] = "sort";
$tdatamst_shape[".exportFields"][] = "update_at";
$tdatamst_shape[".exportFields"][] = "update_by";
$tdatamst_shape[".exportFields"][] = "create_at";
$tdatamst_shape[".exportFields"][] = "create_by";
$tdatamst_shape[".exportFields"][] = "line_category";
$tdatamst_shape[".exportFields"][] = "yahoo_junle";
$tdatamst_shape[".exportFields"][] = "category_id";
$tdatamst_shape[".exportFields"][] = "sub_category_id1";
$tdatamst_shape[".exportFields"][] = "english_name";

$tdatamst_shape[".importFields"] = array();
$tdatamst_shape[".importFields"][] = "id";
$tdatamst_shape[".importFields"][] = "name";
$tdatamst_shape[".importFields"][] = "sort";
$tdatamst_shape[".importFields"][] = "line_category";
$tdatamst_shape[".importFields"][] = "yahoo_junle";
$tdatamst_shape[".importFields"][] = "category_id";
$tdatamst_shape[".importFields"][] = "sub_category_id1";
$tdatamst_shape[".importFields"][] = "english_name";

$tdatamst_shape[".printFields"] = array();
$tdatamst_shape[".printFields"][] = "english_name";
$tdatamst_shape[".printFields"][] = "id";
$tdatamst_shape[".printFields"][] = "name";
$tdatamst_shape[".printFields"][] = "sort";
$tdatamst_shape[".printFields"][] = "line_category";
$tdatamst_shape[".printFields"][] = "yahoo_junle";
$tdatamst_shape[".printFields"][] = "category_id";
$tdatamst_shape[".printFields"][] = "sub_category_id1";
$tdatamst_shape[".printFields"][] = "update_by";
$tdatamst_shape[".printFields"][] = "update_at";
$tdatamst_shape[".printFields"][] = "create_by";
$tdatamst_shape[".printFields"][] = "create_at";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "mst_shape";
	$fdata["Label"] = GetFieldLabel("mst_shape","id");
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




	$tdatamst_shape["id"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "mst_shape";
	$fdata["Label"] = GetFieldLabel("mst_shape","name");
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




	$tdatamst_shape["name"] = $fdata;
//	sort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sort";
	$fdata["GoodName"] = "sort";
	$fdata["ownerTable"] = "mst_shape";
	$fdata["Label"] = GetFieldLabel("mst_shape","sort");
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




	$tdatamst_shape["sort"] = $fdata;
//	update_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "update_at";
	$fdata["GoodName"] = "update_at";
	$fdata["ownerTable"] = "mst_shape";
	$fdata["Label"] = GetFieldLabel("mst_shape","update_at");
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




	$tdatamst_shape["update_at"] = $fdata;
//	update_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "update_by";
	$fdata["GoodName"] = "update_by";
	$fdata["ownerTable"] = "mst_shape";
	$fdata["Label"] = GetFieldLabel("mst_shape","update_by");
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




	$tdatamst_shape["update_by"] = $fdata;
//	create_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "create_at";
	$fdata["GoodName"] = "create_at";
	$fdata["ownerTable"] = "mst_shape";
	$fdata["Label"] = GetFieldLabel("mst_shape","create_at");
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




	$tdatamst_shape["create_at"] = $fdata;
//	create_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "create_by";
	$fdata["GoodName"] = "create_by";
	$fdata["ownerTable"] = "mst_shape";
	$fdata["Label"] = GetFieldLabel("mst_shape","create_by");
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




	$tdatamst_shape["create_by"] = $fdata;
//	line_category
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "line_category";
	$fdata["GoodName"] = "line_category";
	$fdata["ownerTable"] = "mst_shape";
	$fdata["Label"] = GetFieldLabel("mst_shape","line_category");
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




	$tdatamst_shape["line_category"] = $fdata;
//	yahoo_junle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "yahoo_junle";
	$fdata["GoodName"] = "yahoo_junle";
	$fdata["ownerTable"] = "mst_shape";
	$fdata["Label"] = GetFieldLabel("mst_shape","yahoo_junle");
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




	$tdatamst_shape["yahoo_junle"] = $fdata;
//	category_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "category_id";
	$fdata["GoodName"] = "category_id";
	$fdata["ownerTable"] = "mst_shape";
	$fdata["Label"] = GetFieldLabel("mst_shape","category_id");
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




	$tdatamst_shape["category_id"] = $fdata;
//	sub_category_id1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "sub_category_id1";
	$fdata["GoodName"] = "sub_category_id1";
	$fdata["ownerTable"] = "mst_shape";
	$fdata["Label"] = GetFieldLabel("mst_shape","sub_category_id1");
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




	$tdatamst_shape["sub_category_id1"] = $fdata;
//	english_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "english_name";
	$fdata["GoodName"] = "english_name";
	$fdata["ownerTable"] = "mst_shape";
	$fdata["Label"] = GetFieldLabel("mst_shape","english_name");
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




	$tdatamst_shape["english_name"] = $fdata;


$tables_data["mst_shape"]=&$tdatamst_shape;
$field_labels["mst_shape"] = &$fieldLabelsmst_shape;
$fieldToolTips["mst_shape"] = &$fieldToolTipsmst_shape;
$placeHolders["mst_shape"] = &$placeHoldersmst_shape;
$page_titles["mst_shape"] = &$pageTitlesmst_shape;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mst_shape"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mst_shape"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mst_shape()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  name,  sort,  update_at,  update_by,  create_at,  create_by,  line_category,  yahoo_junle,  category_id,  sub_category_id1,  english_name";
$proto0["m_strFrom"] = "FROM mst_shape";
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
	"m_strTable" => "mst_shape",
	"m_srcTableName" => "mst_shape"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "mst_shape";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "mst_shape",
	"m_srcTableName" => "mst_shape"
));

$proto8["m_sql"] = "name";
$proto8["m_srcTableName"] = "mst_shape";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "sort",
	"m_strTable" => "mst_shape",
	"m_srcTableName" => "mst_shape"
));

$proto10["m_sql"] = "sort";
$proto10["m_srcTableName"] = "mst_shape";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "update_at",
	"m_strTable" => "mst_shape",
	"m_srcTableName" => "mst_shape"
));

$proto12["m_sql"] = "update_at";
$proto12["m_srcTableName"] = "mst_shape";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "update_by",
	"m_strTable" => "mst_shape",
	"m_srcTableName" => "mst_shape"
));

$proto14["m_sql"] = "update_by";
$proto14["m_srcTableName"] = "mst_shape";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "create_at",
	"m_strTable" => "mst_shape",
	"m_srcTableName" => "mst_shape"
));

$proto16["m_sql"] = "create_at";
$proto16["m_srcTableName"] = "mst_shape";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "create_by",
	"m_strTable" => "mst_shape",
	"m_srcTableName" => "mst_shape"
));

$proto18["m_sql"] = "create_by";
$proto18["m_srcTableName"] = "mst_shape";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "line_category",
	"m_strTable" => "mst_shape",
	"m_srcTableName" => "mst_shape"
));

$proto20["m_sql"] = "line_category";
$proto20["m_srcTableName"] = "mst_shape";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_junle",
	"m_strTable" => "mst_shape",
	"m_srcTableName" => "mst_shape"
));

$proto22["m_sql"] = "yahoo_junle";
$proto22["m_srcTableName"] = "mst_shape";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "category_id",
	"m_strTable" => "mst_shape",
	"m_srcTableName" => "mst_shape"
));

$proto24["m_sql"] = "category_id";
$proto24["m_srcTableName"] = "mst_shape";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "sub_category_id1",
	"m_strTable" => "mst_shape",
	"m_srcTableName" => "mst_shape"
));

$proto26["m_sql"] = "sub_category_id1";
$proto26["m_srcTableName"] = "mst_shape";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "english_name",
	"m_strTable" => "mst_shape",
	"m_srcTableName" => "mst_shape"
));

$proto28["m_sql"] = "english_name";
$proto28["m_srcTableName"] = "mst_shape";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "mst_shape";
$proto31["m_srcTableName"] = "mst_shape";
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
$proto30["m_sql"] = "mst_shape";
$proto30["m_alias"] = "";
$proto30["m_srcTableName"] = "mst_shape";
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
	"m_strTable" => "mst_shape",
	"m_srcTableName" => "mst_shape"
));

$proto34["m_column"]=$obj;
$proto34["m_bAsc"] = 0;
$proto34["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto34);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="mst_shape";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mst_shape = createSqlQuery_mst_shape();


	
		;

												

$tdatamst_shape[".sqlquery"] = $queryData_mst_shape;

include_once(getabspath("include/mst_shape_events.php"));
$tableEvents["mst_shape"] = new eventclass_mst_shape;
$tdatamst_shape[".hasEvents"] = true;

?>