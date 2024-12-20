<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamst_amount = array();
	$tdatamst_amount[".truncateText"] = true;
	$tdatamst_amount[".NumberOfChars"] = 80;
	$tdatamst_amount[".ShortName"] = "mst_amount";
	$tdatamst_amount[".OwnerID"] = "";
	$tdatamst_amount[".OriginalTable"] = "mst_amount";

//	field labels
$fieldLabelsmst_amount = array();
$fieldToolTipsmst_amount = array();
$pageTitlesmst_amount = array();
$placeHoldersmst_amount = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmst_amount["Japanese"] = array();
	$fieldToolTipsmst_amount["Japanese"] = array();
	$placeHoldersmst_amount["Japanese"] = array();
	$pageTitlesmst_amount["Japanese"] = array();
	$fieldLabelsmst_amount["Japanese"]["id"] = "Id";
	$fieldToolTipsmst_amount["Japanese"]["id"] = "";
	$placeHoldersmst_amount["Japanese"]["id"] = "";
	$fieldLabelsmst_amount["Japanese"]["name"] = "Name";
	$fieldToolTipsmst_amount["Japanese"]["name"] = "";
	$placeHoldersmst_amount["Japanese"]["name"] = "";
	$fieldLabelsmst_amount["Japanese"]["sort"] = "Sort";
	$fieldToolTipsmst_amount["Japanese"]["sort"] = "";
	$placeHoldersmst_amount["Japanese"]["sort"] = "";
	$fieldLabelsmst_amount["Japanese"]["update_at"] = "更新日";
	$fieldToolTipsmst_amount["Japanese"]["update_at"] = "";
	$placeHoldersmst_amount["Japanese"]["update_at"] = "";
	$fieldLabelsmst_amount["Japanese"]["update_by"] = "更新者";
	$fieldToolTipsmst_amount["Japanese"]["update_by"] = "";
	$placeHoldersmst_amount["Japanese"]["update_by"] = "";
	$fieldLabelsmst_amount["Japanese"]["create_at"] = "登録日";
	$fieldToolTipsmst_amount["Japanese"]["create_at"] = "";
	$placeHoldersmst_amount["Japanese"]["create_at"] = "";
	$fieldLabelsmst_amount["Japanese"]["create_by"] = "登録者";
	$fieldToolTipsmst_amount["Japanese"]["create_by"] = "";
	$placeHoldersmst_amount["Japanese"]["create_by"] = "";
	$fieldLabelsmst_amount["Japanese"]["line_category"] = "ラインカテゴリー";
	$fieldToolTipsmst_amount["Japanese"]["line_category"] = "";
	$placeHoldersmst_amount["Japanese"]["line_category"] = "";
	$fieldLabelsmst_amount["Japanese"]["yahoo_junle"] = "ブランドID";
	$fieldToolTipsmst_amount["Japanese"]["yahoo_junle"] = "";
	$placeHoldersmst_amount["Japanese"]["yahoo_junle"] = "";
	$fieldLabelsmst_amount["Japanese"]["category_id"] = "大カテゴリー";
	$fieldToolTipsmst_amount["Japanese"]["category_id"] = "";
	$placeHoldersmst_amount["Japanese"]["category_id"] = "";
	$fieldLabelsmst_amount["Japanese"]["sub_category_id1"] = "中カテゴリー";
	$fieldToolTipsmst_amount["Japanese"]["sub_category_id1"] = "";
	$placeHoldersmst_amount["Japanese"]["sub_category_id1"] = "";
	$fieldLabelsmst_amount["Japanese"]["english_name"] = "英名";
	$fieldToolTipsmst_amount["Japanese"]["english_name"] = "";
	$placeHoldersmst_amount["Japanese"]["english_name"] = "";
	if (count($fieldToolTipsmst_amount["Japanese"]))
		$tdatamst_amount[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmst_amount[""] = array();
	$fieldToolTipsmst_amount[""] = array();
	$placeHoldersmst_amount[""] = array();
	$pageTitlesmst_amount[""] = array();
	$fieldLabelsmst_amount[""]["id"] = "Id";
	$fieldToolTipsmst_amount[""]["id"] = "";
	$placeHoldersmst_amount[""]["id"] = "";
	$fieldLabelsmst_amount[""]["name"] = "Name";
	$fieldToolTipsmst_amount[""]["name"] = "";
	$placeHoldersmst_amount[""]["name"] = "";
	$fieldLabelsmst_amount[""]["sort"] = "Sort";
	$fieldToolTipsmst_amount[""]["sort"] = "";
	$placeHoldersmst_amount[""]["sort"] = "";
	$fieldLabelsmst_amount[""]["update_at"] = "Update At";
	$fieldToolTipsmst_amount[""]["update_at"] = "";
	$placeHoldersmst_amount[""]["update_at"] = "";
	$fieldLabelsmst_amount[""]["update_by"] = "Update By";
	$fieldToolTipsmst_amount[""]["update_by"] = "";
	$placeHoldersmst_amount[""]["update_by"] = "";
	$fieldLabelsmst_amount[""]["create_at"] = "Create At";
	$fieldToolTipsmst_amount[""]["create_at"] = "";
	$placeHoldersmst_amount[""]["create_at"] = "";
	$fieldLabelsmst_amount[""]["create_by"] = "Create By";
	$fieldToolTipsmst_amount[""]["create_by"] = "";
	$placeHoldersmst_amount[""]["create_by"] = "";
	$fieldLabelsmst_amount[""]["line_category"] = "Line Category";
	$fieldToolTipsmst_amount[""]["line_category"] = "";
	$placeHoldersmst_amount[""]["line_category"] = "";
	$fieldLabelsmst_amount[""]["yahoo_junle"] = "Yahoo Junle";
	$fieldToolTipsmst_amount[""]["yahoo_junle"] = "";
	$placeHoldersmst_amount[""]["yahoo_junle"] = "";
	$fieldLabelsmst_amount[""]["category_id"] = "Category Id";
	$fieldToolTipsmst_amount[""]["category_id"] = "";
	$placeHoldersmst_amount[""]["category_id"] = "";
	$fieldLabelsmst_amount[""]["sub_category_id1"] = "Sub Category Id1";
	$fieldToolTipsmst_amount[""]["sub_category_id1"] = "";
	$placeHoldersmst_amount[""]["sub_category_id1"] = "";
	$fieldLabelsmst_amount[""]["english_name"] = "English Name";
	$fieldToolTipsmst_amount[""]["english_name"] = "";
	$placeHoldersmst_amount[""]["english_name"] = "";
	if (count($fieldToolTipsmst_amount[""]))
		$tdatamst_amount[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmst_amount["English"] = array();
	$fieldToolTipsmst_amount["English"] = array();
	$placeHoldersmst_amount["English"] = array();
	$pageTitlesmst_amount["English"] = array();
	$fieldLabelsmst_amount["English"]["id"] = "Id";
	$fieldToolTipsmst_amount["English"]["id"] = "";
	$placeHoldersmst_amount["English"]["id"] = "";
	$fieldLabelsmst_amount["English"]["name"] = "Name";
	$fieldToolTipsmst_amount["English"]["name"] = "";
	$placeHoldersmst_amount["English"]["name"] = "";
	$fieldLabelsmst_amount["English"]["sort"] = "Sort";
	$fieldToolTipsmst_amount["English"]["sort"] = "";
	$placeHoldersmst_amount["English"]["sort"] = "";
	$fieldLabelsmst_amount["English"]["update_at"] = "Update At";
	$fieldToolTipsmst_amount["English"]["update_at"] = "";
	$placeHoldersmst_amount["English"]["update_at"] = "";
	$fieldLabelsmst_amount["English"]["update_by"] = "Update By";
	$fieldToolTipsmst_amount["English"]["update_by"] = "";
	$placeHoldersmst_amount["English"]["update_by"] = "";
	$fieldLabelsmst_amount["English"]["create_at"] = "Create At";
	$fieldToolTipsmst_amount["English"]["create_at"] = "";
	$placeHoldersmst_amount["English"]["create_at"] = "";
	$fieldLabelsmst_amount["English"]["create_by"] = "Create By";
	$fieldToolTipsmst_amount["English"]["create_by"] = "";
	$placeHoldersmst_amount["English"]["create_by"] = "";
	$fieldLabelsmst_amount["English"]["line_category"] = "Line Category";
	$fieldToolTipsmst_amount["English"]["line_category"] = "";
	$placeHoldersmst_amount["English"]["line_category"] = "";
	$fieldLabelsmst_amount["English"]["yahoo_junle"] = "Yahoo Junle";
	$fieldToolTipsmst_amount["English"]["yahoo_junle"] = "";
	$placeHoldersmst_amount["English"]["yahoo_junle"] = "";
	$fieldLabelsmst_amount["English"]["category_id"] = "Category Id";
	$fieldToolTipsmst_amount["English"]["category_id"] = "";
	$placeHoldersmst_amount["English"]["category_id"] = "";
	$fieldLabelsmst_amount["English"]["sub_category_id1"] = "Sub Category Id1";
	$fieldToolTipsmst_amount["English"]["sub_category_id1"] = "";
	$placeHoldersmst_amount["English"]["sub_category_id1"] = "";
	$fieldLabelsmst_amount["English"]["english_name"] = "English Name";
	$fieldToolTipsmst_amount["English"]["english_name"] = "";
	$placeHoldersmst_amount["English"]["english_name"] = "";
	if (count($fieldToolTipsmst_amount["English"]))
		$tdatamst_amount[".isUseToolTips"] = true;
}


	$tdatamst_amount[".NCSearch"] = true;



$tdatamst_amount[".shortTableName"] = "mst_amount";
$tdatamst_amount[".nSecOptions"] = 0;
$tdatamst_amount[".recsPerRowPrint"] = 1;
$tdatamst_amount[".mainTableOwnerID"] = "";
$tdatamst_amount[".moveNext"] = 1;
$tdatamst_amount[".entityType"] = 0;

$tdatamst_amount[".strOriginalTableName"] = "mst_amount";

	



$tdatamst_amount[".showAddInPopup"] = false;

$tdatamst_amount[".showEditInPopup"] = false;

$tdatamst_amount[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamst_amount[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamst_amount[".fieldsForRegister"] = array();

$tdatamst_amount[".listAjax"] = false;

	$tdatamst_amount[".audit"] = true;

	$tdatamst_amount[".locking"] = false;



$tdatamst_amount[".list"] = true;

$tdatamst_amount[".inlineEdit"] = true;


$tdatamst_amount[".reorderRecordsByHeader"] = true;



$tdatamst_amount[".inlineAdd"] = true;

$tdatamst_amount[".import"] = true;

$tdatamst_amount[".exportTo"] = true;

$tdatamst_amount[".printFriendly"] = true;

$tdatamst_amount[".delete"] = true;

$tdatamst_amount[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamst_amount[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamst_amount[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamst_amount[".searchSaving"] = false;
//

$tdatamst_amount[".showSearchPanel"] = true;
		$tdatamst_amount[".flexibleSearch"] = true;

$tdatamst_amount[".isUseAjaxSuggest"] = true;

$tdatamst_amount[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatamst_amount[".ajaxCodeSnippetAdded"] = false;

$tdatamst_amount[".buttonsAdded"] = false;

$tdatamst_amount[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamst_amount[".isUseTimeForSearch"] = false;





$tdatamst_amount[".allSearchFields"] = array();
$tdatamst_amount[".filterFields"] = array();
$tdatamst_amount[".requiredSearchFields"] = array();

$tdatamst_amount[".allSearchFields"][] = "id";
	$tdatamst_amount[".allSearchFields"][] = "name";
	$tdatamst_amount[".allSearchFields"][] = "sort";
	$tdatamst_amount[".allSearchFields"][] = "update_at";
	$tdatamst_amount[".allSearchFields"][] = "update_by";
	$tdatamst_amount[".allSearchFields"][] = "create_at";
	$tdatamst_amount[".allSearchFields"][] = "create_by";
	$tdatamst_amount[".allSearchFields"][] = "line_category";
	$tdatamst_amount[".allSearchFields"][] = "yahoo_junle";
	$tdatamst_amount[".allSearchFields"][] = "category_id";
	$tdatamst_amount[".allSearchFields"][] = "sub_category_id1";
	$tdatamst_amount[".allSearchFields"][] = "english_name";
	

$tdatamst_amount[".googleLikeFields"] = array();
$tdatamst_amount[".googleLikeFields"][] = "id";
$tdatamst_amount[".googleLikeFields"][] = "name";
$tdatamst_amount[".googleLikeFields"][] = "sort";
$tdatamst_amount[".googleLikeFields"][] = "update_at";
$tdatamst_amount[".googleLikeFields"][] = "update_by";
$tdatamst_amount[".googleLikeFields"][] = "create_at";
$tdatamst_amount[".googleLikeFields"][] = "create_by";
$tdatamst_amount[".googleLikeFields"][] = "line_category";
$tdatamst_amount[".googleLikeFields"][] = "yahoo_junle";
$tdatamst_amount[".googleLikeFields"][] = "category_id";
$tdatamst_amount[".googleLikeFields"][] = "sub_category_id1";
$tdatamst_amount[".googleLikeFields"][] = "english_name";

$tdatamst_amount[".panelSearchFields"] = array();
$tdatamst_amount[".searchPanelOptions"] = array();
$tdatamst_amount[".panelSearchFields"][] = "name";
	$tdatamst_amount[".panelSearchFields"][] = "yahoo_junle";
	
$tdatamst_amount[".advSearchFields"] = array();
$tdatamst_amount[".advSearchFields"][] = "id";
$tdatamst_amount[".advSearchFields"][] = "name";
$tdatamst_amount[".advSearchFields"][] = "sort";
$tdatamst_amount[".advSearchFields"][] = "update_at";
$tdatamst_amount[".advSearchFields"][] = "update_by";
$tdatamst_amount[".advSearchFields"][] = "create_at";
$tdatamst_amount[".advSearchFields"][] = "create_by";
$tdatamst_amount[".advSearchFields"][] = "line_category";
$tdatamst_amount[".advSearchFields"][] = "yahoo_junle";
$tdatamst_amount[".advSearchFields"][] = "category_id";
$tdatamst_amount[".advSearchFields"][] = "sub_category_id1";
$tdatamst_amount[".advSearchFields"][] = "english_name";

$tdatamst_amount[".tableType"] = "list";

$tdatamst_amount[".printerPageOrientation"] = 0;
$tdatamst_amount[".nPrinterPageScale"] = 100;

$tdatamst_amount[".nPrinterSplitRecords"] = 40;

$tdatamst_amount[".nPrinterPDFSplitRecords"] = 40;



$tdatamst_amount[".geocodingEnabled"] = false;





$tdatamst_amount[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamst_amount[".pageSize"] = 100;

$tdatamst_amount[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY id DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamst_amount[".strOrderBy"] = $tstrOrderBy;

$tdatamst_amount[".orderindexes"] = array();
$tdatamst_amount[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "`id`");

$tdatamst_amount[".sqlHead"] = "SELECT id,  name,  sort,  update_at,  update_by,  create_at,  create_by,  line_category,  yahoo_junle,  category_id,  sub_category_id1,  english_name";
$tdatamst_amount[".sqlFrom"] = "FROM mst_amount";
$tdatamst_amount[".sqlWhereExpr"] = "";
$tdatamst_amount[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamst_amount[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamst_amount[".arrGroupsPerPage"] = $arrGPP;

$tdatamst_amount[".highlightSearchResults"] = true;

$tableKeysmst_amount = array();
$tableKeysmst_amount[] = "id";
$tdatamst_amount[".Keys"] = $tableKeysmst_amount;

$tdatamst_amount[".listFields"] = array();
$tdatamst_amount[".listFields"][] = "id";
$tdatamst_amount[".listFields"][] = "name";
$tdatamst_amount[".listFields"][] = "english_name";
$tdatamst_amount[".listFields"][] = "sort";
$tdatamst_amount[".listFields"][] = "line_category";
$tdatamst_amount[".listFields"][] = "yahoo_junle";
$tdatamst_amount[".listFields"][] = "category_id";
$tdatamst_amount[".listFields"][] = "sub_category_id1";
$tdatamst_amount[".listFields"][] = "update_by";
$tdatamst_amount[".listFields"][] = "update_at";
$tdatamst_amount[".listFields"][] = "create_by";
$tdatamst_amount[".listFields"][] = "create_at";

$tdatamst_amount[".hideMobileList"] = array();


$tdatamst_amount[".viewFields"] = array();

$tdatamst_amount[".addFields"] = array();

$tdatamst_amount[".masterListFields"] = array();
$tdatamst_amount[".masterListFields"][] = "id";
$tdatamst_amount[".masterListFields"][] = "name";
$tdatamst_amount[".masterListFields"][] = "sort";
$tdatamst_amount[".masterListFields"][] = "update_at";
$tdatamst_amount[".masterListFields"][] = "update_by";
$tdatamst_amount[".masterListFields"][] = "create_at";
$tdatamst_amount[".masterListFields"][] = "create_by";
$tdatamst_amount[".masterListFields"][] = "line_category";
$tdatamst_amount[".masterListFields"][] = "yahoo_junle";
$tdatamst_amount[".masterListFields"][] = "category_id";
$tdatamst_amount[".masterListFields"][] = "sub_category_id1";
$tdatamst_amount[".masterListFields"][] = "english_name";

$tdatamst_amount[".inlineAddFields"] = array();
$tdatamst_amount[".inlineAddFields"][] = "name";
$tdatamst_amount[".inlineAddFields"][] = "english_name";
$tdatamst_amount[".inlineAddFields"][] = "sort";
$tdatamst_amount[".inlineAddFields"][] = "line_category";
$tdatamst_amount[".inlineAddFields"][] = "yahoo_junle";
$tdatamst_amount[".inlineAddFields"][] = "category_id";
$tdatamst_amount[".inlineAddFields"][] = "sub_category_id1";

$tdatamst_amount[".editFields"] = array();

$tdatamst_amount[".inlineEditFields"] = array();
$tdatamst_amount[".inlineEditFields"][] = "name";
$tdatamst_amount[".inlineEditFields"][] = "english_name";
$tdatamst_amount[".inlineEditFields"][] = "sort";
$tdatamst_amount[".inlineEditFields"][] = "line_category";
$tdatamst_amount[".inlineEditFields"][] = "yahoo_junle";
$tdatamst_amount[".inlineEditFields"][] = "category_id";
$tdatamst_amount[".inlineEditFields"][] = "sub_category_id1";

$tdatamst_amount[".updateSelectedFields"] = array();


$tdatamst_amount[".exportFields"] = array();
$tdatamst_amount[".exportFields"][] = "id";
$tdatamst_amount[".exportFields"][] = "name";
$tdatamst_amount[".exportFields"][] = "sort";
$tdatamst_amount[".exportFields"][] = "update_at";
$tdatamst_amount[".exportFields"][] = "update_by";
$tdatamst_amount[".exportFields"][] = "create_at";
$tdatamst_amount[".exportFields"][] = "create_by";
$tdatamst_amount[".exportFields"][] = "line_category";
$tdatamst_amount[".exportFields"][] = "yahoo_junle";
$tdatamst_amount[".exportFields"][] = "category_id";
$tdatamst_amount[".exportFields"][] = "sub_category_id1";
$tdatamst_amount[".exportFields"][] = "english_name";

$tdatamst_amount[".importFields"] = array();
$tdatamst_amount[".importFields"][] = "id";
$tdatamst_amount[".importFields"][] = "name";
$tdatamst_amount[".importFields"][] = "sort";
$tdatamst_amount[".importFields"][] = "line_category";
$tdatamst_amount[".importFields"][] = "yahoo_junle";
$tdatamst_amount[".importFields"][] = "category_id";
$tdatamst_amount[".importFields"][] = "sub_category_id1";
$tdatamst_amount[".importFields"][] = "english_name";

$tdatamst_amount[".printFields"] = array();
$tdatamst_amount[".printFields"][] = "id";
$tdatamst_amount[".printFields"][] = "name";
$tdatamst_amount[".printFields"][] = "sort";
$tdatamst_amount[".printFields"][] = "update_at";
$tdatamst_amount[".printFields"][] = "update_by";
$tdatamst_amount[".printFields"][] = "create_at";
$tdatamst_amount[".printFields"][] = "create_by";
$tdatamst_amount[".printFields"][] = "line_category";
$tdatamst_amount[".printFields"][] = "yahoo_junle";
$tdatamst_amount[".printFields"][] = "category_id";
$tdatamst_amount[".printFields"][] = "sub_category_id1";
$tdatamst_amount[".printFields"][] = "english_name";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "mst_amount";
	$fdata["Label"] = GetFieldLabel("mst_amount","id");
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




	$tdatamst_amount["id"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "mst_amount";
	$fdata["Label"] = GetFieldLabel("mst_amount","name");
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




	$tdatamst_amount["name"] = $fdata;
//	sort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sort";
	$fdata["GoodName"] = "sort";
	$fdata["ownerTable"] = "mst_amount";
	$fdata["Label"] = GetFieldLabel("mst_amount","sort");
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




	$tdatamst_amount["sort"] = $fdata;
//	update_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "update_at";
	$fdata["GoodName"] = "update_at";
	$fdata["ownerTable"] = "mst_amount";
	$fdata["Label"] = GetFieldLabel("mst_amount","update_at");
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




	$tdatamst_amount["update_at"] = $fdata;
//	update_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "update_by";
	$fdata["GoodName"] = "update_by";
	$fdata["ownerTable"] = "mst_amount";
	$fdata["Label"] = GetFieldLabel("mst_amount","update_by");
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




	$tdatamst_amount["update_by"] = $fdata;
//	create_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "create_at";
	$fdata["GoodName"] = "create_at";
	$fdata["ownerTable"] = "mst_amount";
	$fdata["Label"] = GetFieldLabel("mst_amount","create_at");
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




	$tdatamst_amount["create_at"] = $fdata;
//	create_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "create_by";
	$fdata["GoodName"] = "create_by";
	$fdata["ownerTable"] = "mst_amount";
	$fdata["Label"] = GetFieldLabel("mst_amount","create_by");
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




	$tdatamst_amount["create_by"] = $fdata;
//	line_category
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "line_category";
	$fdata["GoodName"] = "line_category";
	$fdata["ownerTable"] = "mst_amount";
	$fdata["Label"] = GetFieldLabel("mst_amount","line_category");
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




	$tdatamst_amount["line_category"] = $fdata;
//	yahoo_junle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "yahoo_junle";
	$fdata["GoodName"] = "yahoo_junle";
	$fdata["ownerTable"] = "mst_amount";
	$fdata["Label"] = GetFieldLabel("mst_amount","yahoo_junle");
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




	$tdatamst_amount["yahoo_junle"] = $fdata;
//	category_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "category_id";
	$fdata["GoodName"] = "category_id";
	$fdata["ownerTable"] = "mst_amount";
	$fdata["Label"] = GetFieldLabel("mst_amount","category_id");
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




	$tdatamst_amount["category_id"] = $fdata;
//	sub_category_id1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "sub_category_id1";
	$fdata["GoodName"] = "sub_category_id1";
	$fdata["ownerTable"] = "mst_amount";
	$fdata["Label"] = GetFieldLabel("mst_amount","sub_category_id1");
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




	$tdatamst_amount["sub_category_id1"] = $fdata;
//	english_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "english_name";
	$fdata["GoodName"] = "english_name";
	$fdata["ownerTable"] = "mst_amount";
	$fdata["Label"] = GetFieldLabel("mst_amount","english_name");
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




	$tdatamst_amount["english_name"] = $fdata;


$tables_data["mst_amount"]=&$tdatamst_amount;
$field_labels["mst_amount"] = &$fieldLabelsmst_amount;
$fieldToolTips["mst_amount"] = &$fieldToolTipsmst_amount;
$placeHolders["mst_amount"] = &$placeHoldersmst_amount;
$page_titles["mst_amount"] = &$pageTitlesmst_amount;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mst_amount"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mst_amount"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mst_amount()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  name,  sort,  update_at,  update_by,  create_at,  create_by,  line_category,  yahoo_junle,  category_id,  sub_category_id1,  english_name";
$proto0["m_strFrom"] = "FROM mst_amount";
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
	"m_strTable" => "mst_amount",
	"m_srcTableName" => "mst_amount"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "mst_amount";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "mst_amount",
	"m_srcTableName" => "mst_amount"
));

$proto8["m_sql"] = "name";
$proto8["m_srcTableName"] = "mst_amount";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "sort",
	"m_strTable" => "mst_amount",
	"m_srcTableName" => "mst_amount"
));

$proto10["m_sql"] = "sort";
$proto10["m_srcTableName"] = "mst_amount";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "update_at",
	"m_strTable" => "mst_amount",
	"m_srcTableName" => "mst_amount"
));

$proto12["m_sql"] = "update_at";
$proto12["m_srcTableName"] = "mst_amount";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "update_by",
	"m_strTable" => "mst_amount",
	"m_srcTableName" => "mst_amount"
));

$proto14["m_sql"] = "update_by";
$proto14["m_srcTableName"] = "mst_amount";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "create_at",
	"m_strTable" => "mst_amount",
	"m_srcTableName" => "mst_amount"
));

$proto16["m_sql"] = "create_at";
$proto16["m_srcTableName"] = "mst_amount";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "create_by",
	"m_strTable" => "mst_amount",
	"m_srcTableName" => "mst_amount"
));

$proto18["m_sql"] = "create_by";
$proto18["m_srcTableName"] = "mst_amount";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "line_category",
	"m_strTable" => "mst_amount",
	"m_srcTableName" => "mst_amount"
));

$proto20["m_sql"] = "line_category";
$proto20["m_srcTableName"] = "mst_amount";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_junle",
	"m_strTable" => "mst_amount",
	"m_srcTableName" => "mst_amount"
));

$proto22["m_sql"] = "yahoo_junle";
$proto22["m_srcTableName"] = "mst_amount";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "category_id",
	"m_strTable" => "mst_amount",
	"m_srcTableName" => "mst_amount"
));

$proto24["m_sql"] = "category_id";
$proto24["m_srcTableName"] = "mst_amount";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "sub_category_id1",
	"m_strTable" => "mst_amount",
	"m_srcTableName" => "mst_amount"
));

$proto26["m_sql"] = "sub_category_id1";
$proto26["m_srcTableName"] = "mst_amount";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "english_name",
	"m_strTable" => "mst_amount",
	"m_srcTableName" => "mst_amount"
));

$proto28["m_sql"] = "english_name";
$proto28["m_srcTableName"] = "mst_amount";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "mst_amount";
$proto31["m_srcTableName"] = "mst_amount";
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
$proto30["m_sql"] = "mst_amount";
$proto30["m_alias"] = "";
$proto30["m_srcTableName"] = "mst_amount";
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
	"m_strTable" => "mst_amount",
	"m_srcTableName" => "mst_amount"
));

$proto34["m_column"]=$obj;
$proto34["m_bAsc"] = 0;
$proto34["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto34);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="mst_amount";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mst_amount = createSqlQuery_mst_amount();


	
		;

												

$tdatamst_amount[".sqlquery"] = $queryData_mst_amount;

include_once(getabspath("include/mst_amount_events.php"));
$tableEvents["mst_amount"] = new eventclass_mst_amount;
$tdatamst_amount[".hasEvents"] = true;

?>