<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamst_hahakai = array();
	$tdatamst_hahakai[".truncateText"] = true;
	$tdatamst_hahakai[".NumberOfChars"] = 80;
	$tdatamst_hahakai[".ShortName"] = "mst_hahakai";
	$tdatamst_hahakai[".OwnerID"] = "";
	$tdatamst_hahakai[".OriginalTable"] = "mst_hahakai";

//	field labels
$fieldLabelsmst_hahakai = array();
$fieldToolTipsmst_hahakai = array();
$pageTitlesmst_hahakai = array();
$placeHoldersmst_hahakai = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmst_hahakai["Japanese"] = array();
	$fieldToolTipsmst_hahakai["Japanese"] = array();
	$placeHoldersmst_hahakai["Japanese"] = array();
	$pageTitlesmst_hahakai["Japanese"] = array();
	$fieldLabelsmst_hahakai["Japanese"]["id"] = "Id";
	$fieldToolTipsmst_hahakai["Japanese"]["id"] = "";
	$placeHoldersmst_hahakai["Japanese"]["id"] = "";
	$fieldLabelsmst_hahakai["Japanese"]["name"] = "Name";
	$fieldToolTipsmst_hahakai["Japanese"]["name"] = "";
	$placeHoldersmst_hahakai["Japanese"]["name"] = "";
	$fieldLabelsmst_hahakai["Japanese"]["sort"] = "Sort";
	$fieldToolTipsmst_hahakai["Japanese"]["sort"] = "";
	$placeHoldersmst_hahakai["Japanese"]["sort"] = "";
	$fieldLabelsmst_hahakai["Japanese"]["update_at"] = "更新日";
	$fieldToolTipsmst_hahakai["Japanese"]["update_at"] = "";
	$placeHoldersmst_hahakai["Japanese"]["update_at"] = "";
	$fieldLabelsmst_hahakai["Japanese"]["update_by"] = "更新者";
	$fieldToolTipsmst_hahakai["Japanese"]["update_by"] = "";
	$placeHoldersmst_hahakai["Japanese"]["update_by"] = "";
	$fieldLabelsmst_hahakai["Japanese"]["create_at"] = "登録日";
	$fieldToolTipsmst_hahakai["Japanese"]["create_at"] = "";
	$placeHoldersmst_hahakai["Japanese"]["create_at"] = "";
	$fieldLabelsmst_hahakai["Japanese"]["create_by"] = "登録者";
	$fieldToolTipsmst_hahakai["Japanese"]["create_by"] = "";
	$placeHoldersmst_hahakai["Japanese"]["create_by"] = "";
	$fieldLabelsmst_hahakai["Japanese"]["line_category"] = "ラインカテゴリー";
	$fieldToolTipsmst_hahakai["Japanese"]["line_category"] = "";
	$placeHoldersmst_hahakai["Japanese"]["line_category"] = "";
	$fieldLabelsmst_hahakai["Japanese"]["yahoo_junle"] = "ブランドID";
	$fieldToolTipsmst_hahakai["Japanese"]["yahoo_junle"] = "";
	$placeHoldersmst_hahakai["Japanese"]["yahoo_junle"] = "";
	$fieldLabelsmst_hahakai["Japanese"]["category_id"] = "大カテゴリー";
	$fieldToolTipsmst_hahakai["Japanese"]["category_id"] = "";
	$placeHoldersmst_hahakai["Japanese"]["category_id"] = "";
	$fieldLabelsmst_hahakai["Japanese"]["sub_category_id1"] = "中カテゴリー";
	$fieldToolTipsmst_hahakai["Japanese"]["sub_category_id1"] = "";
	$placeHoldersmst_hahakai["Japanese"]["sub_category_id1"] = "";
	$fieldLabelsmst_hahakai["Japanese"]["english_name"] = "英名";
	$fieldToolTipsmst_hahakai["Japanese"]["english_name"] = "";
	$placeHoldersmst_hahakai["Japanese"]["english_name"] = "";
	if (count($fieldToolTipsmst_hahakai["Japanese"]))
		$tdatamst_hahakai[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmst_hahakai[""] = array();
	$fieldToolTipsmst_hahakai[""] = array();
	$placeHoldersmst_hahakai[""] = array();
	$pageTitlesmst_hahakai[""] = array();
	$fieldLabelsmst_hahakai[""]["id"] = "Id";
	$fieldToolTipsmst_hahakai[""]["id"] = "";
	$placeHoldersmst_hahakai[""]["id"] = "";
	$fieldLabelsmst_hahakai[""]["name"] = "Name";
	$fieldToolTipsmst_hahakai[""]["name"] = "";
	$placeHoldersmst_hahakai[""]["name"] = "";
	$fieldLabelsmst_hahakai[""]["sort"] = "Sort";
	$fieldToolTipsmst_hahakai[""]["sort"] = "";
	$placeHoldersmst_hahakai[""]["sort"] = "";
	$fieldLabelsmst_hahakai[""]["update_at"] = "Update At";
	$fieldToolTipsmst_hahakai[""]["update_at"] = "";
	$placeHoldersmst_hahakai[""]["update_at"] = "";
	$fieldLabelsmst_hahakai[""]["update_by"] = "Update By";
	$fieldToolTipsmst_hahakai[""]["update_by"] = "";
	$placeHoldersmst_hahakai[""]["update_by"] = "";
	$fieldLabelsmst_hahakai[""]["create_at"] = "Create At";
	$fieldToolTipsmst_hahakai[""]["create_at"] = "";
	$placeHoldersmst_hahakai[""]["create_at"] = "";
	$fieldLabelsmst_hahakai[""]["create_by"] = "Create By";
	$fieldToolTipsmst_hahakai[""]["create_by"] = "";
	$placeHoldersmst_hahakai[""]["create_by"] = "";
	$fieldLabelsmst_hahakai[""]["line_category"] = "Line Category";
	$fieldToolTipsmst_hahakai[""]["line_category"] = "";
	$placeHoldersmst_hahakai[""]["line_category"] = "";
	$fieldLabelsmst_hahakai[""]["yahoo_junle"] = "Yahoo Junle";
	$fieldToolTipsmst_hahakai[""]["yahoo_junle"] = "";
	$placeHoldersmst_hahakai[""]["yahoo_junle"] = "";
	$fieldLabelsmst_hahakai[""]["category_id"] = "Category Id";
	$fieldToolTipsmst_hahakai[""]["category_id"] = "";
	$placeHoldersmst_hahakai[""]["category_id"] = "";
	$fieldLabelsmst_hahakai[""]["sub_category_id1"] = "Sub Category Id1";
	$fieldToolTipsmst_hahakai[""]["sub_category_id1"] = "";
	$placeHoldersmst_hahakai[""]["sub_category_id1"] = "";
	$fieldLabelsmst_hahakai[""]["english_name"] = "English Name";
	$fieldToolTipsmst_hahakai[""]["english_name"] = "";
	$placeHoldersmst_hahakai[""]["english_name"] = "";
	if (count($fieldToolTipsmst_hahakai[""]))
		$tdatamst_hahakai[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmst_hahakai["English"] = array();
	$fieldToolTipsmst_hahakai["English"] = array();
	$placeHoldersmst_hahakai["English"] = array();
	$pageTitlesmst_hahakai["English"] = array();
	$fieldLabelsmst_hahakai["English"]["id"] = "Id";
	$fieldToolTipsmst_hahakai["English"]["id"] = "";
	$placeHoldersmst_hahakai["English"]["id"] = "";
	$fieldLabelsmst_hahakai["English"]["name"] = "Name";
	$fieldToolTipsmst_hahakai["English"]["name"] = "";
	$placeHoldersmst_hahakai["English"]["name"] = "";
	$fieldLabelsmst_hahakai["English"]["sort"] = "Sort";
	$fieldToolTipsmst_hahakai["English"]["sort"] = "";
	$placeHoldersmst_hahakai["English"]["sort"] = "";
	$fieldLabelsmst_hahakai["English"]["update_at"] = "Update At";
	$fieldToolTipsmst_hahakai["English"]["update_at"] = "";
	$placeHoldersmst_hahakai["English"]["update_at"] = "";
	$fieldLabelsmst_hahakai["English"]["update_by"] = "Update By";
	$fieldToolTipsmst_hahakai["English"]["update_by"] = "";
	$placeHoldersmst_hahakai["English"]["update_by"] = "";
	$fieldLabelsmst_hahakai["English"]["create_at"] = "Create At";
	$fieldToolTipsmst_hahakai["English"]["create_at"] = "";
	$placeHoldersmst_hahakai["English"]["create_at"] = "";
	$fieldLabelsmst_hahakai["English"]["create_by"] = "Create By";
	$fieldToolTipsmst_hahakai["English"]["create_by"] = "";
	$placeHoldersmst_hahakai["English"]["create_by"] = "";
	$fieldLabelsmst_hahakai["English"]["line_category"] = "Line Category";
	$fieldToolTipsmst_hahakai["English"]["line_category"] = "";
	$placeHoldersmst_hahakai["English"]["line_category"] = "";
	$fieldLabelsmst_hahakai["English"]["yahoo_junle"] = "Yahoo Junle";
	$fieldToolTipsmst_hahakai["English"]["yahoo_junle"] = "";
	$placeHoldersmst_hahakai["English"]["yahoo_junle"] = "";
	$fieldLabelsmst_hahakai["English"]["category_id"] = "Category Id";
	$fieldToolTipsmst_hahakai["English"]["category_id"] = "";
	$placeHoldersmst_hahakai["English"]["category_id"] = "";
	$fieldLabelsmst_hahakai["English"]["sub_category_id1"] = "Sub Category Id1";
	$fieldToolTipsmst_hahakai["English"]["sub_category_id1"] = "";
	$placeHoldersmst_hahakai["English"]["sub_category_id1"] = "";
	$fieldLabelsmst_hahakai["English"]["english_name"] = "English Name";
	$fieldToolTipsmst_hahakai["English"]["english_name"] = "";
	$placeHoldersmst_hahakai["English"]["english_name"] = "";
	if (count($fieldToolTipsmst_hahakai["English"]))
		$tdatamst_hahakai[".isUseToolTips"] = true;
}


	$tdatamst_hahakai[".NCSearch"] = true;



$tdatamst_hahakai[".shortTableName"] = "mst_hahakai";
$tdatamst_hahakai[".nSecOptions"] = 0;
$tdatamst_hahakai[".recsPerRowPrint"] = 1;
$tdatamst_hahakai[".mainTableOwnerID"] = "";
$tdatamst_hahakai[".moveNext"] = 1;
$tdatamst_hahakai[".entityType"] = 0;

$tdatamst_hahakai[".strOriginalTableName"] = "mst_hahakai";

	



$tdatamst_hahakai[".showAddInPopup"] = false;

$tdatamst_hahakai[".showEditInPopup"] = false;

$tdatamst_hahakai[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamst_hahakai[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamst_hahakai[".fieldsForRegister"] = array();

$tdatamst_hahakai[".listAjax"] = false;

	$tdatamst_hahakai[".audit"] = true;

	$tdatamst_hahakai[".locking"] = false;



$tdatamst_hahakai[".list"] = true;

$tdatamst_hahakai[".inlineEdit"] = true;


$tdatamst_hahakai[".reorderRecordsByHeader"] = true;



$tdatamst_hahakai[".inlineAdd"] = true;

$tdatamst_hahakai[".import"] = true;

$tdatamst_hahakai[".exportTo"] = true;

$tdatamst_hahakai[".printFriendly"] = true;

$tdatamst_hahakai[".delete"] = true;

$tdatamst_hahakai[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamst_hahakai[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamst_hahakai[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamst_hahakai[".searchSaving"] = false;
//

$tdatamst_hahakai[".showSearchPanel"] = true;
		$tdatamst_hahakai[".flexibleSearch"] = true;

$tdatamst_hahakai[".isUseAjaxSuggest"] = true;

$tdatamst_hahakai[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatamst_hahakai[".ajaxCodeSnippetAdded"] = false;

$tdatamst_hahakai[".buttonsAdded"] = false;

$tdatamst_hahakai[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamst_hahakai[".isUseTimeForSearch"] = false;





$tdatamst_hahakai[".allSearchFields"] = array();
$tdatamst_hahakai[".filterFields"] = array();
$tdatamst_hahakai[".requiredSearchFields"] = array();

$tdatamst_hahakai[".allSearchFields"][] = "id";
	$tdatamst_hahakai[".allSearchFields"][] = "name";
	$tdatamst_hahakai[".allSearchFields"][] = "sort";
	$tdatamst_hahakai[".allSearchFields"][] = "update_at";
	$tdatamst_hahakai[".allSearchFields"][] = "update_by";
	$tdatamst_hahakai[".allSearchFields"][] = "create_at";
	$tdatamst_hahakai[".allSearchFields"][] = "create_by";
	$tdatamst_hahakai[".allSearchFields"][] = "line_category";
	$tdatamst_hahakai[".allSearchFields"][] = "yahoo_junle";
	$tdatamst_hahakai[".allSearchFields"][] = "category_id";
	$tdatamst_hahakai[".allSearchFields"][] = "sub_category_id1";
	$tdatamst_hahakai[".allSearchFields"][] = "english_name";
	

$tdatamst_hahakai[".googleLikeFields"] = array();
$tdatamst_hahakai[".googleLikeFields"][] = "id";
$tdatamst_hahakai[".googleLikeFields"][] = "name";
$tdatamst_hahakai[".googleLikeFields"][] = "sort";
$tdatamst_hahakai[".googleLikeFields"][] = "update_at";
$tdatamst_hahakai[".googleLikeFields"][] = "update_by";
$tdatamst_hahakai[".googleLikeFields"][] = "create_at";
$tdatamst_hahakai[".googleLikeFields"][] = "create_by";
$tdatamst_hahakai[".googleLikeFields"][] = "line_category";
$tdatamst_hahakai[".googleLikeFields"][] = "yahoo_junle";
$tdatamst_hahakai[".googleLikeFields"][] = "category_id";
$tdatamst_hahakai[".googleLikeFields"][] = "sub_category_id1";
$tdatamst_hahakai[".googleLikeFields"][] = "english_name";

$tdatamst_hahakai[".panelSearchFields"] = array();
$tdatamst_hahakai[".searchPanelOptions"] = array();
$tdatamst_hahakai[".panelSearchFields"][] = "name";
	$tdatamst_hahakai[".panelSearchFields"][] = "yahoo_junle";
	
$tdatamst_hahakai[".advSearchFields"] = array();
$tdatamst_hahakai[".advSearchFields"][] = "id";
$tdatamst_hahakai[".advSearchFields"][] = "name";
$tdatamst_hahakai[".advSearchFields"][] = "sort";
$tdatamst_hahakai[".advSearchFields"][] = "update_at";
$tdatamst_hahakai[".advSearchFields"][] = "update_by";
$tdatamst_hahakai[".advSearchFields"][] = "create_at";
$tdatamst_hahakai[".advSearchFields"][] = "create_by";
$tdatamst_hahakai[".advSearchFields"][] = "line_category";
$tdatamst_hahakai[".advSearchFields"][] = "yahoo_junle";
$tdatamst_hahakai[".advSearchFields"][] = "category_id";
$tdatamst_hahakai[".advSearchFields"][] = "sub_category_id1";
$tdatamst_hahakai[".advSearchFields"][] = "english_name";

$tdatamst_hahakai[".tableType"] = "list";

$tdatamst_hahakai[".printerPageOrientation"] = 0;
$tdatamst_hahakai[".nPrinterPageScale"] = 100;

$tdatamst_hahakai[".nPrinterSplitRecords"] = 40;

$tdatamst_hahakai[".nPrinterPDFSplitRecords"] = 40;



$tdatamst_hahakai[".geocodingEnabled"] = false;





$tdatamst_hahakai[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamst_hahakai[".pageSize"] = 100;

$tdatamst_hahakai[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY id DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamst_hahakai[".strOrderBy"] = $tstrOrderBy;

$tdatamst_hahakai[".orderindexes"] = array();
$tdatamst_hahakai[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "`id`");

$tdatamst_hahakai[".sqlHead"] = "SELECT id,  name,  sort,  update_at,  update_by,  create_at,  create_by,  line_category,  yahoo_junle,  category_id,  sub_category_id1,  english_name";
$tdatamst_hahakai[".sqlFrom"] = "FROM mst_hahakai";
$tdatamst_hahakai[".sqlWhereExpr"] = "";
$tdatamst_hahakai[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamst_hahakai[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamst_hahakai[".arrGroupsPerPage"] = $arrGPP;

$tdatamst_hahakai[".highlightSearchResults"] = true;

$tableKeysmst_hahakai = array();
$tableKeysmst_hahakai[] = "id";
$tdatamst_hahakai[".Keys"] = $tableKeysmst_hahakai;

$tdatamst_hahakai[".listFields"] = array();
$tdatamst_hahakai[".listFields"][] = "id";
$tdatamst_hahakai[".listFields"][] = "name";
$tdatamst_hahakai[".listFields"][] = "english_name";
$tdatamst_hahakai[".listFields"][] = "sort";
$tdatamst_hahakai[".listFields"][] = "line_category";
$tdatamst_hahakai[".listFields"][] = "yahoo_junle";
$tdatamst_hahakai[".listFields"][] = "category_id";
$tdatamst_hahakai[".listFields"][] = "sub_category_id1";
$tdatamst_hahakai[".listFields"][] = "update_by";
$tdatamst_hahakai[".listFields"][] = "update_at";
$tdatamst_hahakai[".listFields"][] = "create_by";
$tdatamst_hahakai[".listFields"][] = "create_at";

$tdatamst_hahakai[".hideMobileList"] = array();


$tdatamst_hahakai[".viewFields"] = array();

$tdatamst_hahakai[".addFields"] = array();

$tdatamst_hahakai[".masterListFields"] = array();
$tdatamst_hahakai[".masterListFields"][] = "id";
$tdatamst_hahakai[".masterListFields"][] = "name";
$tdatamst_hahakai[".masterListFields"][] = "sort";
$tdatamst_hahakai[".masterListFields"][] = "update_at";
$tdatamst_hahakai[".masterListFields"][] = "update_by";
$tdatamst_hahakai[".masterListFields"][] = "create_at";
$tdatamst_hahakai[".masterListFields"][] = "create_by";
$tdatamst_hahakai[".masterListFields"][] = "line_category";
$tdatamst_hahakai[".masterListFields"][] = "yahoo_junle";
$tdatamst_hahakai[".masterListFields"][] = "category_id";
$tdatamst_hahakai[".masterListFields"][] = "sub_category_id1";
$tdatamst_hahakai[".masterListFields"][] = "english_name";

$tdatamst_hahakai[".inlineAddFields"] = array();
$tdatamst_hahakai[".inlineAddFields"][] = "name";
$tdatamst_hahakai[".inlineAddFields"][] = "english_name";
$tdatamst_hahakai[".inlineAddFields"][] = "sort";
$tdatamst_hahakai[".inlineAddFields"][] = "line_category";
$tdatamst_hahakai[".inlineAddFields"][] = "yahoo_junle";
$tdatamst_hahakai[".inlineAddFields"][] = "category_id";
$tdatamst_hahakai[".inlineAddFields"][] = "sub_category_id1";

$tdatamst_hahakai[".editFields"] = array();

$tdatamst_hahakai[".inlineEditFields"] = array();
$tdatamst_hahakai[".inlineEditFields"][] = "name";
$tdatamst_hahakai[".inlineEditFields"][] = "english_name";
$tdatamst_hahakai[".inlineEditFields"][] = "sort";
$tdatamst_hahakai[".inlineEditFields"][] = "line_category";
$tdatamst_hahakai[".inlineEditFields"][] = "yahoo_junle";
$tdatamst_hahakai[".inlineEditFields"][] = "category_id";
$tdatamst_hahakai[".inlineEditFields"][] = "sub_category_id1";

$tdatamst_hahakai[".updateSelectedFields"] = array();


$tdatamst_hahakai[".exportFields"] = array();
$tdatamst_hahakai[".exportFields"][] = "id";
$tdatamst_hahakai[".exportFields"][] = "name";
$tdatamst_hahakai[".exportFields"][] = "sort";
$tdatamst_hahakai[".exportFields"][] = "update_at";
$tdatamst_hahakai[".exportFields"][] = "update_by";
$tdatamst_hahakai[".exportFields"][] = "create_at";
$tdatamst_hahakai[".exportFields"][] = "create_by";
$tdatamst_hahakai[".exportFields"][] = "line_category";
$tdatamst_hahakai[".exportFields"][] = "yahoo_junle";
$tdatamst_hahakai[".exportFields"][] = "category_id";
$tdatamst_hahakai[".exportFields"][] = "sub_category_id1";
$tdatamst_hahakai[".exportFields"][] = "english_name";

$tdatamst_hahakai[".importFields"] = array();
$tdatamst_hahakai[".importFields"][] = "id";
$tdatamst_hahakai[".importFields"][] = "name";
$tdatamst_hahakai[".importFields"][] = "sort";
$tdatamst_hahakai[".importFields"][] = "line_category";
$tdatamst_hahakai[".importFields"][] = "yahoo_junle";
$tdatamst_hahakai[".importFields"][] = "category_id";
$tdatamst_hahakai[".importFields"][] = "sub_category_id1";
$tdatamst_hahakai[".importFields"][] = "english_name";

$tdatamst_hahakai[".printFields"] = array();
$tdatamst_hahakai[".printFields"][] = "id";
$tdatamst_hahakai[".printFields"][] = "name";
$tdatamst_hahakai[".printFields"][] = "sort";
$tdatamst_hahakai[".printFields"][] = "update_at";
$tdatamst_hahakai[".printFields"][] = "update_by";
$tdatamst_hahakai[".printFields"][] = "create_at";
$tdatamst_hahakai[".printFields"][] = "create_by";
$tdatamst_hahakai[".printFields"][] = "line_category";
$tdatamst_hahakai[".printFields"][] = "yahoo_junle";
$tdatamst_hahakai[".printFields"][] = "category_id";
$tdatamst_hahakai[".printFields"][] = "sub_category_id1";
$tdatamst_hahakai[".printFields"][] = "english_name";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "mst_hahakai";
	$fdata["Label"] = GetFieldLabel("mst_hahakai","id");
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




	$tdatamst_hahakai["id"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "mst_hahakai";
	$fdata["Label"] = GetFieldLabel("mst_hahakai","name");
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




	$tdatamst_hahakai["name"] = $fdata;
//	sort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sort";
	$fdata["GoodName"] = "sort";
	$fdata["ownerTable"] = "mst_hahakai";
	$fdata["Label"] = GetFieldLabel("mst_hahakai","sort");
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




	$tdatamst_hahakai["sort"] = $fdata;
//	update_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "update_at";
	$fdata["GoodName"] = "update_at";
	$fdata["ownerTable"] = "mst_hahakai";
	$fdata["Label"] = GetFieldLabel("mst_hahakai","update_at");
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




	$tdatamst_hahakai["update_at"] = $fdata;
//	update_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "update_by";
	$fdata["GoodName"] = "update_by";
	$fdata["ownerTable"] = "mst_hahakai";
	$fdata["Label"] = GetFieldLabel("mst_hahakai","update_by");
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




	$tdatamst_hahakai["update_by"] = $fdata;
//	create_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "create_at";
	$fdata["GoodName"] = "create_at";
	$fdata["ownerTable"] = "mst_hahakai";
	$fdata["Label"] = GetFieldLabel("mst_hahakai","create_at");
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




	$tdatamst_hahakai["create_at"] = $fdata;
//	create_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "create_by";
	$fdata["GoodName"] = "create_by";
	$fdata["ownerTable"] = "mst_hahakai";
	$fdata["Label"] = GetFieldLabel("mst_hahakai","create_by");
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




	$tdatamst_hahakai["create_by"] = $fdata;
//	line_category
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "line_category";
	$fdata["GoodName"] = "line_category";
	$fdata["ownerTable"] = "mst_hahakai";
	$fdata["Label"] = GetFieldLabel("mst_hahakai","line_category");
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




	$tdatamst_hahakai["line_category"] = $fdata;
//	yahoo_junle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "yahoo_junle";
	$fdata["GoodName"] = "yahoo_junle";
	$fdata["ownerTable"] = "mst_hahakai";
	$fdata["Label"] = GetFieldLabel("mst_hahakai","yahoo_junle");
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




	$tdatamst_hahakai["yahoo_junle"] = $fdata;
//	category_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "category_id";
	$fdata["GoodName"] = "category_id";
	$fdata["ownerTable"] = "mst_hahakai";
	$fdata["Label"] = GetFieldLabel("mst_hahakai","category_id");
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




	$tdatamst_hahakai["category_id"] = $fdata;
//	sub_category_id1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "sub_category_id1";
	$fdata["GoodName"] = "sub_category_id1";
	$fdata["ownerTable"] = "mst_hahakai";
	$fdata["Label"] = GetFieldLabel("mst_hahakai","sub_category_id1");
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




	$tdatamst_hahakai["sub_category_id1"] = $fdata;
//	english_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "english_name";
	$fdata["GoodName"] = "english_name";
	$fdata["ownerTable"] = "mst_hahakai";
	$fdata["Label"] = GetFieldLabel("mst_hahakai","english_name");
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




	$tdatamst_hahakai["english_name"] = $fdata;


$tables_data["mst_hahakai"]=&$tdatamst_hahakai;
$field_labels["mst_hahakai"] = &$fieldLabelsmst_hahakai;
$fieldToolTips["mst_hahakai"] = &$fieldToolTipsmst_hahakai;
$placeHolders["mst_hahakai"] = &$placeHoldersmst_hahakai;
$page_titles["mst_hahakai"] = &$pageTitlesmst_hahakai;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mst_hahakai"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mst_hahakai"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mst_hahakai()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  name,  sort,  update_at,  update_by,  create_at,  create_by,  line_category,  yahoo_junle,  category_id,  sub_category_id1,  english_name";
$proto0["m_strFrom"] = "FROM mst_hahakai";
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
	"m_strTable" => "mst_hahakai",
	"m_srcTableName" => "mst_hahakai"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "mst_hahakai";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "mst_hahakai",
	"m_srcTableName" => "mst_hahakai"
));

$proto8["m_sql"] = "name";
$proto8["m_srcTableName"] = "mst_hahakai";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "sort",
	"m_strTable" => "mst_hahakai",
	"m_srcTableName" => "mst_hahakai"
));

$proto10["m_sql"] = "sort";
$proto10["m_srcTableName"] = "mst_hahakai";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "update_at",
	"m_strTable" => "mst_hahakai",
	"m_srcTableName" => "mst_hahakai"
));

$proto12["m_sql"] = "update_at";
$proto12["m_srcTableName"] = "mst_hahakai";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "update_by",
	"m_strTable" => "mst_hahakai",
	"m_srcTableName" => "mst_hahakai"
));

$proto14["m_sql"] = "update_by";
$proto14["m_srcTableName"] = "mst_hahakai";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "create_at",
	"m_strTable" => "mst_hahakai",
	"m_srcTableName" => "mst_hahakai"
));

$proto16["m_sql"] = "create_at";
$proto16["m_srcTableName"] = "mst_hahakai";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "create_by",
	"m_strTable" => "mst_hahakai",
	"m_srcTableName" => "mst_hahakai"
));

$proto18["m_sql"] = "create_by";
$proto18["m_srcTableName"] = "mst_hahakai";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "line_category",
	"m_strTable" => "mst_hahakai",
	"m_srcTableName" => "mst_hahakai"
));

$proto20["m_sql"] = "line_category";
$proto20["m_srcTableName"] = "mst_hahakai";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_junle",
	"m_strTable" => "mst_hahakai",
	"m_srcTableName" => "mst_hahakai"
));

$proto22["m_sql"] = "yahoo_junle";
$proto22["m_srcTableName"] = "mst_hahakai";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "category_id",
	"m_strTable" => "mst_hahakai",
	"m_srcTableName" => "mst_hahakai"
));

$proto24["m_sql"] = "category_id";
$proto24["m_srcTableName"] = "mst_hahakai";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "sub_category_id1",
	"m_strTable" => "mst_hahakai",
	"m_srcTableName" => "mst_hahakai"
));

$proto26["m_sql"] = "sub_category_id1";
$proto26["m_srcTableName"] = "mst_hahakai";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "english_name",
	"m_strTable" => "mst_hahakai",
	"m_srcTableName" => "mst_hahakai"
));

$proto28["m_sql"] = "english_name";
$proto28["m_srcTableName"] = "mst_hahakai";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "mst_hahakai";
$proto31["m_srcTableName"] = "mst_hahakai";
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
$proto30["m_sql"] = "mst_hahakai";
$proto30["m_alias"] = "";
$proto30["m_srcTableName"] = "mst_hahakai";
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
	"m_strTable" => "mst_hahakai",
	"m_srcTableName" => "mst_hahakai"
));

$proto34["m_column"]=$obj;
$proto34["m_bAsc"] = 0;
$proto34["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto34);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="mst_hahakai";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mst_hahakai = createSqlQuery_mst_hahakai();


	
		;

												

$tdatamst_hahakai[".sqlquery"] = $queryData_mst_hahakai;

include_once(getabspath("include/mst_hahakai_events.php"));
$tableEvents["mst_hahakai"] = new eventclass_mst_hahakai;
$tdatamst_hahakai[".hasEvents"] = true;

?>