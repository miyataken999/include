<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamst_producing_area = array();
	$tdatamst_producing_area[".truncateText"] = true;
	$tdatamst_producing_area[".NumberOfChars"] = 80;
	$tdatamst_producing_area[".ShortName"] = "mst_producing_area";
	$tdatamst_producing_area[".OwnerID"] = "";
	$tdatamst_producing_area[".OriginalTable"] = "mst_producing_area";

//	field labels
$fieldLabelsmst_producing_area = array();
$fieldToolTipsmst_producing_area = array();
$pageTitlesmst_producing_area = array();
$placeHoldersmst_producing_area = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmst_producing_area["Japanese"] = array();
	$fieldToolTipsmst_producing_area["Japanese"] = array();
	$placeHoldersmst_producing_area["Japanese"] = array();
	$pageTitlesmst_producing_area["Japanese"] = array();
	$fieldLabelsmst_producing_area["Japanese"]["id"] = "Id";
	$fieldToolTipsmst_producing_area["Japanese"]["id"] = "";
	$placeHoldersmst_producing_area["Japanese"]["id"] = "";
	$fieldLabelsmst_producing_area["Japanese"]["name"] = "Name";
	$fieldToolTipsmst_producing_area["Japanese"]["name"] = "";
	$placeHoldersmst_producing_area["Japanese"]["name"] = "";
	$fieldLabelsmst_producing_area["Japanese"]["sort"] = "Sort";
	$fieldToolTipsmst_producing_area["Japanese"]["sort"] = "";
	$placeHoldersmst_producing_area["Japanese"]["sort"] = "";
	$fieldLabelsmst_producing_area["Japanese"]["update_at"] = "更新日";
	$fieldToolTipsmst_producing_area["Japanese"]["update_at"] = "";
	$placeHoldersmst_producing_area["Japanese"]["update_at"] = "";
	$fieldLabelsmst_producing_area["Japanese"]["update_by"] = "更新者";
	$fieldToolTipsmst_producing_area["Japanese"]["update_by"] = "";
	$placeHoldersmst_producing_area["Japanese"]["update_by"] = "";
	$fieldLabelsmst_producing_area["Japanese"]["create_at"] = "登録日";
	$fieldToolTipsmst_producing_area["Japanese"]["create_at"] = "";
	$placeHoldersmst_producing_area["Japanese"]["create_at"] = "";
	$fieldLabelsmst_producing_area["Japanese"]["create_by"] = "登録者";
	$fieldToolTipsmst_producing_area["Japanese"]["create_by"] = "";
	$placeHoldersmst_producing_area["Japanese"]["create_by"] = "";
	$fieldLabelsmst_producing_area["Japanese"]["line_category"] = "ラインカテゴリー";
	$fieldToolTipsmst_producing_area["Japanese"]["line_category"] = "";
	$placeHoldersmst_producing_area["Japanese"]["line_category"] = "";
	$fieldLabelsmst_producing_area["Japanese"]["yahoo_junle"] = "ブランドID";
	$fieldToolTipsmst_producing_area["Japanese"]["yahoo_junle"] = "";
	$placeHoldersmst_producing_area["Japanese"]["yahoo_junle"] = "";
	$fieldLabelsmst_producing_area["Japanese"]["category_id"] = "大カテゴリー";
	$fieldToolTipsmst_producing_area["Japanese"]["category_id"] = "";
	$placeHoldersmst_producing_area["Japanese"]["category_id"] = "";
	$fieldLabelsmst_producing_area["Japanese"]["sub_category_id1"] = "中カテゴリー";
	$fieldToolTipsmst_producing_area["Japanese"]["sub_category_id1"] = "";
	$placeHoldersmst_producing_area["Japanese"]["sub_category_id1"] = "";
	$fieldLabelsmst_producing_area["Japanese"]["english_name"] = "英名";
	$fieldToolTipsmst_producing_area["Japanese"]["english_name"] = "";
	$placeHoldersmst_producing_area["Japanese"]["english_name"] = "";
	if (count($fieldToolTipsmst_producing_area["Japanese"]))
		$tdatamst_producing_area[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmst_producing_area[""] = array();
	$fieldToolTipsmst_producing_area[""] = array();
	$placeHoldersmst_producing_area[""] = array();
	$pageTitlesmst_producing_area[""] = array();
	$fieldLabelsmst_producing_area[""]["id"] = "Id";
	$fieldToolTipsmst_producing_area[""]["id"] = "";
	$placeHoldersmst_producing_area[""]["id"] = "";
	$fieldLabelsmst_producing_area[""]["name"] = "Name";
	$fieldToolTipsmst_producing_area[""]["name"] = "";
	$placeHoldersmst_producing_area[""]["name"] = "";
	$fieldLabelsmst_producing_area[""]["sort"] = "Sort";
	$fieldToolTipsmst_producing_area[""]["sort"] = "";
	$placeHoldersmst_producing_area[""]["sort"] = "";
	$fieldLabelsmst_producing_area[""]["update_at"] = "Update At";
	$fieldToolTipsmst_producing_area[""]["update_at"] = "";
	$placeHoldersmst_producing_area[""]["update_at"] = "";
	$fieldLabelsmst_producing_area[""]["update_by"] = "Update By";
	$fieldToolTipsmst_producing_area[""]["update_by"] = "";
	$placeHoldersmst_producing_area[""]["update_by"] = "";
	$fieldLabelsmst_producing_area[""]["create_at"] = "Create At";
	$fieldToolTipsmst_producing_area[""]["create_at"] = "";
	$placeHoldersmst_producing_area[""]["create_at"] = "";
	$fieldLabelsmst_producing_area[""]["create_by"] = "Create By";
	$fieldToolTipsmst_producing_area[""]["create_by"] = "";
	$placeHoldersmst_producing_area[""]["create_by"] = "";
	$fieldLabelsmst_producing_area[""]["line_category"] = "Line Category";
	$fieldToolTipsmst_producing_area[""]["line_category"] = "";
	$placeHoldersmst_producing_area[""]["line_category"] = "";
	$fieldLabelsmst_producing_area[""]["yahoo_junle"] = "Yahoo Junle";
	$fieldToolTipsmst_producing_area[""]["yahoo_junle"] = "";
	$placeHoldersmst_producing_area[""]["yahoo_junle"] = "";
	$fieldLabelsmst_producing_area[""]["category_id"] = "Category Id";
	$fieldToolTipsmst_producing_area[""]["category_id"] = "";
	$placeHoldersmst_producing_area[""]["category_id"] = "";
	$fieldLabelsmst_producing_area[""]["sub_category_id1"] = "Sub Category Id1";
	$fieldToolTipsmst_producing_area[""]["sub_category_id1"] = "";
	$placeHoldersmst_producing_area[""]["sub_category_id1"] = "";
	$fieldLabelsmst_producing_area[""]["english_name"] = "English Name";
	$fieldToolTipsmst_producing_area[""]["english_name"] = "";
	$placeHoldersmst_producing_area[""]["english_name"] = "";
	if (count($fieldToolTipsmst_producing_area[""]))
		$tdatamst_producing_area[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmst_producing_area["English"] = array();
	$fieldToolTipsmst_producing_area["English"] = array();
	$placeHoldersmst_producing_area["English"] = array();
	$pageTitlesmst_producing_area["English"] = array();
	$fieldLabelsmst_producing_area["English"]["id"] = "Id";
	$fieldToolTipsmst_producing_area["English"]["id"] = "";
	$placeHoldersmst_producing_area["English"]["id"] = "";
	$fieldLabelsmst_producing_area["English"]["name"] = "Name";
	$fieldToolTipsmst_producing_area["English"]["name"] = "";
	$placeHoldersmst_producing_area["English"]["name"] = "";
	$fieldLabelsmst_producing_area["English"]["sort"] = "Sort";
	$fieldToolTipsmst_producing_area["English"]["sort"] = "";
	$placeHoldersmst_producing_area["English"]["sort"] = "";
	$fieldLabelsmst_producing_area["English"]["update_at"] = "Update At";
	$fieldToolTipsmst_producing_area["English"]["update_at"] = "";
	$placeHoldersmst_producing_area["English"]["update_at"] = "";
	$fieldLabelsmst_producing_area["English"]["update_by"] = "Update By";
	$fieldToolTipsmst_producing_area["English"]["update_by"] = "";
	$placeHoldersmst_producing_area["English"]["update_by"] = "";
	$fieldLabelsmst_producing_area["English"]["create_at"] = "Create At";
	$fieldToolTipsmst_producing_area["English"]["create_at"] = "";
	$placeHoldersmst_producing_area["English"]["create_at"] = "";
	$fieldLabelsmst_producing_area["English"]["create_by"] = "Create By";
	$fieldToolTipsmst_producing_area["English"]["create_by"] = "";
	$placeHoldersmst_producing_area["English"]["create_by"] = "";
	$fieldLabelsmst_producing_area["English"]["line_category"] = "Line Category";
	$fieldToolTipsmst_producing_area["English"]["line_category"] = "";
	$placeHoldersmst_producing_area["English"]["line_category"] = "";
	$fieldLabelsmst_producing_area["English"]["yahoo_junle"] = "Yahoo Junle";
	$fieldToolTipsmst_producing_area["English"]["yahoo_junle"] = "";
	$placeHoldersmst_producing_area["English"]["yahoo_junle"] = "";
	$fieldLabelsmst_producing_area["English"]["category_id"] = "Category Id";
	$fieldToolTipsmst_producing_area["English"]["category_id"] = "";
	$placeHoldersmst_producing_area["English"]["category_id"] = "";
	$fieldLabelsmst_producing_area["English"]["sub_category_id1"] = "Sub Category Id1";
	$fieldToolTipsmst_producing_area["English"]["sub_category_id1"] = "";
	$placeHoldersmst_producing_area["English"]["sub_category_id1"] = "";
	$fieldLabelsmst_producing_area["English"]["english_name"] = "English Name";
	$fieldToolTipsmst_producing_area["English"]["english_name"] = "";
	$placeHoldersmst_producing_area["English"]["english_name"] = "";
	if (count($fieldToolTipsmst_producing_area["English"]))
		$tdatamst_producing_area[".isUseToolTips"] = true;
}


	$tdatamst_producing_area[".NCSearch"] = true;



$tdatamst_producing_area[".shortTableName"] = "mst_producing_area";
$tdatamst_producing_area[".nSecOptions"] = 0;
$tdatamst_producing_area[".recsPerRowPrint"] = 1;
$tdatamst_producing_area[".mainTableOwnerID"] = "";
$tdatamst_producing_area[".moveNext"] = 1;
$tdatamst_producing_area[".entityType"] = 0;

$tdatamst_producing_area[".strOriginalTableName"] = "mst_producing_area";

	



$tdatamst_producing_area[".showAddInPopup"] = false;

$tdatamst_producing_area[".showEditInPopup"] = false;

$tdatamst_producing_area[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamst_producing_area[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamst_producing_area[".fieldsForRegister"] = array();

$tdatamst_producing_area[".listAjax"] = false;

	$tdatamst_producing_area[".audit"] = true;

	$tdatamst_producing_area[".locking"] = false;



$tdatamst_producing_area[".list"] = true;

$tdatamst_producing_area[".inlineEdit"] = true;


$tdatamst_producing_area[".reorderRecordsByHeader"] = true;



$tdatamst_producing_area[".inlineAdd"] = true;

$tdatamst_producing_area[".import"] = true;

$tdatamst_producing_area[".exportTo"] = true;

$tdatamst_producing_area[".printFriendly"] = true;

$tdatamst_producing_area[".delete"] = true;

$tdatamst_producing_area[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamst_producing_area[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamst_producing_area[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamst_producing_area[".searchSaving"] = false;
//

$tdatamst_producing_area[".showSearchPanel"] = true;
		$tdatamst_producing_area[".flexibleSearch"] = true;

$tdatamst_producing_area[".isUseAjaxSuggest"] = true;

$tdatamst_producing_area[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatamst_producing_area[".ajaxCodeSnippetAdded"] = false;

$tdatamst_producing_area[".buttonsAdded"] = false;

$tdatamst_producing_area[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamst_producing_area[".isUseTimeForSearch"] = false;





$tdatamst_producing_area[".allSearchFields"] = array();
$tdatamst_producing_area[".filterFields"] = array();
$tdatamst_producing_area[".requiredSearchFields"] = array();

$tdatamst_producing_area[".allSearchFields"][] = "id";
	$tdatamst_producing_area[".allSearchFields"][] = "name";
	$tdatamst_producing_area[".allSearchFields"][] = "sort";
	$tdatamst_producing_area[".allSearchFields"][] = "update_at";
	$tdatamst_producing_area[".allSearchFields"][] = "update_by";
	$tdatamst_producing_area[".allSearchFields"][] = "create_at";
	$tdatamst_producing_area[".allSearchFields"][] = "create_by";
	$tdatamst_producing_area[".allSearchFields"][] = "line_category";
	$tdatamst_producing_area[".allSearchFields"][] = "yahoo_junle";
	$tdatamst_producing_area[".allSearchFields"][] = "category_id";
	$tdatamst_producing_area[".allSearchFields"][] = "sub_category_id1";
	$tdatamst_producing_area[".allSearchFields"][] = "english_name";
	

$tdatamst_producing_area[".googleLikeFields"] = array();
$tdatamst_producing_area[".googleLikeFields"][] = "id";
$tdatamst_producing_area[".googleLikeFields"][] = "name";
$tdatamst_producing_area[".googleLikeFields"][] = "sort";
$tdatamst_producing_area[".googleLikeFields"][] = "update_at";
$tdatamst_producing_area[".googleLikeFields"][] = "update_by";
$tdatamst_producing_area[".googleLikeFields"][] = "create_at";
$tdatamst_producing_area[".googleLikeFields"][] = "create_by";
$tdatamst_producing_area[".googleLikeFields"][] = "line_category";
$tdatamst_producing_area[".googleLikeFields"][] = "yahoo_junle";
$tdatamst_producing_area[".googleLikeFields"][] = "category_id";
$tdatamst_producing_area[".googleLikeFields"][] = "sub_category_id1";
$tdatamst_producing_area[".googleLikeFields"][] = "english_name";

$tdatamst_producing_area[".panelSearchFields"] = array();
$tdatamst_producing_area[".searchPanelOptions"] = array();
$tdatamst_producing_area[".panelSearchFields"][] = "name";
	$tdatamst_producing_area[".panelSearchFields"][] = "yahoo_junle";
	
$tdatamst_producing_area[".advSearchFields"] = array();
$tdatamst_producing_area[".advSearchFields"][] = "id";
$tdatamst_producing_area[".advSearchFields"][] = "name";
$tdatamst_producing_area[".advSearchFields"][] = "sort";
$tdatamst_producing_area[".advSearchFields"][] = "update_at";
$tdatamst_producing_area[".advSearchFields"][] = "update_by";
$tdatamst_producing_area[".advSearchFields"][] = "create_at";
$tdatamst_producing_area[".advSearchFields"][] = "create_by";
$tdatamst_producing_area[".advSearchFields"][] = "line_category";
$tdatamst_producing_area[".advSearchFields"][] = "yahoo_junle";
$tdatamst_producing_area[".advSearchFields"][] = "category_id";
$tdatamst_producing_area[".advSearchFields"][] = "sub_category_id1";
$tdatamst_producing_area[".advSearchFields"][] = "english_name";

$tdatamst_producing_area[".tableType"] = "list";

$tdatamst_producing_area[".printerPageOrientation"] = 0;
$tdatamst_producing_area[".nPrinterPageScale"] = 100;

$tdatamst_producing_area[".nPrinterSplitRecords"] = 40;

$tdatamst_producing_area[".nPrinterPDFSplitRecords"] = 40;



$tdatamst_producing_area[".geocodingEnabled"] = false;





$tdatamst_producing_area[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamst_producing_area[".pageSize"] = 100;

$tdatamst_producing_area[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY id DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamst_producing_area[".strOrderBy"] = $tstrOrderBy;

$tdatamst_producing_area[".orderindexes"] = array();
$tdatamst_producing_area[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "`id`");

$tdatamst_producing_area[".sqlHead"] = "SELECT id,  name,  sort,  update_at,  update_by,  create_at,  create_by,  line_category,  yahoo_junle,  category_id,  sub_category_id1,  english_name";
$tdatamst_producing_area[".sqlFrom"] = "FROM mst_producing_area";
$tdatamst_producing_area[".sqlWhereExpr"] = "";
$tdatamst_producing_area[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamst_producing_area[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamst_producing_area[".arrGroupsPerPage"] = $arrGPP;

$tdatamst_producing_area[".highlightSearchResults"] = true;

$tableKeysmst_producing_area = array();
$tableKeysmst_producing_area[] = "id";
$tdatamst_producing_area[".Keys"] = $tableKeysmst_producing_area;

$tdatamst_producing_area[".listFields"] = array();
$tdatamst_producing_area[".listFields"][] = "id";
$tdatamst_producing_area[".listFields"][] = "name";
$tdatamst_producing_area[".listFields"][] = "english_name";
$tdatamst_producing_area[".listFields"][] = "sort";
$tdatamst_producing_area[".listFields"][] = "line_category";
$tdatamst_producing_area[".listFields"][] = "yahoo_junle";
$tdatamst_producing_area[".listFields"][] = "category_id";
$tdatamst_producing_area[".listFields"][] = "sub_category_id1";
$tdatamst_producing_area[".listFields"][] = "update_by";
$tdatamst_producing_area[".listFields"][] = "update_at";
$tdatamst_producing_area[".listFields"][] = "create_by";
$tdatamst_producing_area[".listFields"][] = "create_at";

$tdatamst_producing_area[".hideMobileList"] = array();


$tdatamst_producing_area[".viewFields"] = array();

$tdatamst_producing_area[".addFields"] = array();

$tdatamst_producing_area[".masterListFields"] = array();
$tdatamst_producing_area[".masterListFields"][] = "id";
$tdatamst_producing_area[".masterListFields"][] = "name";
$tdatamst_producing_area[".masterListFields"][] = "sort";
$tdatamst_producing_area[".masterListFields"][] = "update_at";
$tdatamst_producing_area[".masterListFields"][] = "update_by";
$tdatamst_producing_area[".masterListFields"][] = "create_at";
$tdatamst_producing_area[".masterListFields"][] = "create_by";
$tdatamst_producing_area[".masterListFields"][] = "line_category";
$tdatamst_producing_area[".masterListFields"][] = "yahoo_junle";
$tdatamst_producing_area[".masterListFields"][] = "category_id";
$tdatamst_producing_area[".masterListFields"][] = "sub_category_id1";
$tdatamst_producing_area[".masterListFields"][] = "english_name";

$tdatamst_producing_area[".inlineAddFields"] = array();
$tdatamst_producing_area[".inlineAddFields"][] = "name";
$tdatamst_producing_area[".inlineAddFields"][] = "english_name";
$tdatamst_producing_area[".inlineAddFields"][] = "sort";
$tdatamst_producing_area[".inlineAddFields"][] = "line_category";
$tdatamst_producing_area[".inlineAddFields"][] = "yahoo_junle";
$tdatamst_producing_area[".inlineAddFields"][] = "category_id";
$tdatamst_producing_area[".inlineAddFields"][] = "sub_category_id1";

$tdatamst_producing_area[".editFields"] = array();

$tdatamst_producing_area[".inlineEditFields"] = array();
$tdatamst_producing_area[".inlineEditFields"][] = "name";
$tdatamst_producing_area[".inlineEditFields"][] = "english_name";
$tdatamst_producing_area[".inlineEditFields"][] = "sort";
$tdatamst_producing_area[".inlineEditFields"][] = "line_category";
$tdatamst_producing_area[".inlineEditFields"][] = "yahoo_junle";
$tdatamst_producing_area[".inlineEditFields"][] = "category_id";
$tdatamst_producing_area[".inlineEditFields"][] = "sub_category_id1";

$tdatamst_producing_area[".updateSelectedFields"] = array();


$tdatamst_producing_area[".exportFields"] = array();
$tdatamst_producing_area[".exportFields"][] = "id";
$tdatamst_producing_area[".exportFields"][] = "name";
$tdatamst_producing_area[".exportFields"][] = "english_name";
$tdatamst_producing_area[".exportFields"][] = "sort";
$tdatamst_producing_area[".exportFields"][] = "line_category";
$tdatamst_producing_area[".exportFields"][] = "yahoo_junle";
$tdatamst_producing_area[".exportFields"][] = "category_id";
$tdatamst_producing_area[".exportFields"][] = "sub_category_id1";
$tdatamst_producing_area[".exportFields"][] = "update_by";
$tdatamst_producing_area[".exportFields"][] = "update_at";
$tdatamst_producing_area[".exportFields"][] = "create_by";
$tdatamst_producing_area[".exportFields"][] = "create_at";

$tdatamst_producing_area[".importFields"] = array();
$tdatamst_producing_area[".importFields"][] = "id";
$tdatamst_producing_area[".importFields"][] = "name";
$tdatamst_producing_area[".importFields"][] = "sort";
$tdatamst_producing_area[".importFields"][] = "line_category";
$tdatamst_producing_area[".importFields"][] = "yahoo_junle";
$tdatamst_producing_area[".importFields"][] = "category_id";
$tdatamst_producing_area[".importFields"][] = "sub_category_id1";
$tdatamst_producing_area[".importFields"][] = "english_name";

$tdatamst_producing_area[".printFields"] = array();
$tdatamst_producing_area[".printFields"][] = "id";
$tdatamst_producing_area[".printFields"][] = "name";
$tdatamst_producing_area[".printFields"][] = "sort";
$tdatamst_producing_area[".printFields"][] = "update_at";
$tdatamst_producing_area[".printFields"][] = "update_by";
$tdatamst_producing_area[".printFields"][] = "create_at";
$tdatamst_producing_area[".printFields"][] = "create_by";
$tdatamst_producing_area[".printFields"][] = "line_category";
$tdatamst_producing_area[".printFields"][] = "yahoo_junle";
$tdatamst_producing_area[".printFields"][] = "category_id";
$tdatamst_producing_area[".printFields"][] = "sub_category_id1";
$tdatamst_producing_area[".printFields"][] = "english_name";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "mst_producing_area";
	$fdata["Label"] = GetFieldLabel("mst_producing_area","id");
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




	$tdatamst_producing_area["id"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "mst_producing_area";
	$fdata["Label"] = GetFieldLabel("mst_producing_area","name");
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




	$tdatamst_producing_area["name"] = $fdata;
//	sort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sort";
	$fdata["GoodName"] = "sort";
	$fdata["ownerTable"] = "mst_producing_area";
	$fdata["Label"] = GetFieldLabel("mst_producing_area","sort");
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




	$tdatamst_producing_area["sort"] = $fdata;
//	update_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "update_at";
	$fdata["GoodName"] = "update_at";
	$fdata["ownerTable"] = "mst_producing_area";
	$fdata["Label"] = GetFieldLabel("mst_producing_area","update_at");
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




	$tdatamst_producing_area["update_at"] = $fdata;
//	update_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "update_by";
	$fdata["GoodName"] = "update_by";
	$fdata["ownerTable"] = "mst_producing_area";
	$fdata["Label"] = GetFieldLabel("mst_producing_area","update_by");
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




	$tdatamst_producing_area["update_by"] = $fdata;
//	create_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "create_at";
	$fdata["GoodName"] = "create_at";
	$fdata["ownerTable"] = "mst_producing_area";
	$fdata["Label"] = GetFieldLabel("mst_producing_area","create_at");
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




	$tdatamst_producing_area["create_at"] = $fdata;
//	create_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "create_by";
	$fdata["GoodName"] = "create_by";
	$fdata["ownerTable"] = "mst_producing_area";
	$fdata["Label"] = GetFieldLabel("mst_producing_area","create_by");
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




	$tdatamst_producing_area["create_by"] = $fdata;
//	line_category
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "line_category";
	$fdata["GoodName"] = "line_category";
	$fdata["ownerTable"] = "mst_producing_area";
	$fdata["Label"] = GetFieldLabel("mst_producing_area","line_category");
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




	$tdatamst_producing_area["line_category"] = $fdata;
//	yahoo_junle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "yahoo_junle";
	$fdata["GoodName"] = "yahoo_junle";
	$fdata["ownerTable"] = "mst_producing_area";
	$fdata["Label"] = GetFieldLabel("mst_producing_area","yahoo_junle");
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




	$tdatamst_producing_area["yahoo_junle"] = $fdata;
//	category_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "category_id";
	$fdata["GoodName"] = "category_id";
	$fdata["ownerTable"] = "mst_producing_area";
	$fdata["Label"] = GetFieldLabel("mst_producing_area","category_id");
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




	$tdatamst_producing_area["category_id"] = $fdata;
//	sub_category_id1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "sub_category_id1";
	$fdata["GoodName"] = "sub_category_id1";
	$fdata["ownerTable"] = "mst_producing_area";
	$fdata["Label"] = GetFieldLabel("mst_producing_area","sub_category_id1");
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




	$tdatamst_producing_area["sub_category_id1"] = $fdata;
//	english_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "english_name";
	$fdata["GoodName"] = "english_name";
	$fdata["ownerTable"] = "mst_producing_area";
	$fdata["Label"] = GetFieldLabel("mst_producing_area","english_name");
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




	$tdatamst_producing_area["english_name"] = $fdata;


$tables_data["mst_producing_area"]=&$tdatamst_producing_area;
$field_labels["mst_producing_area"] = &$fieldLabelsmst_producing_area;
$fieldToolTips["mst_producing_area"] = &$fieldToolTipsmst_producing_area;
$placeHolders["mst_producing_area"] = &$placeHoldersmst_producing_area;
$page_titles["mst_producing_area"] = &$pageTitlesmst_producing_area;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mst_producing_area"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mst_producing_area"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mst_producing_area()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  name,  sort,  update_at,  update_by,  create_at,  create_by,  line_category,  yahoo_junle,  category_id,  sub_category_id1,  english_name";
$proto0["m_strFrom"] = "FROM mst_producing_area";
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
	"m_strTable" => "mst_producing_area",
	"m_srcTableName" => "mst_producing_area"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "mst_producing_area";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "mst_producing_area",
	"m_srcTableName" => "mst_producing_area"
));

$proto8["m_sql"] = "name";
$proto8["m_srcTableName"] = "mst_producing_area";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "sort",
	"m_strTable" => "mst_producing_area",
	"m_srcTableName" => "mst_producing_area"
));

$proto10["m_sql"] = "sort";
$proto10["m_srcTableName"] = "mst_producing_area";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "update_at",
	"m_strTable" => "mst_producing_area",
	"m_srcTableName" => "mst_producing_area"
));

$proto12["m_sql"] = "update_at";
$proto12["m_srcTableName"] = "mst_producing_area";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "update_by",
	"m_strTable" => "mst_producing_area",
	"m_srcTableName" => "mst_producing_area"
));

$proto14["m_sql"] = "update_by";
$proto14["m_srcTableName"] = "mst_producing_area";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "create_at",
	"m_strTable" => "mst_producing_area",
	"m_srcTableName" => "mst_producing_area"
));

$proto16["m_sql"] = "create_at";
$proto16["m_srcTableName"] = "mst_producing_area";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "create_by",
	"m_strTable" => "mst_producing_area",
	"m_srcTableName" => "mst_producing_area"
));

$proto18["m_sql"] = "create_by";
$proto18["m_srcTableName"] = "mst_producing_area";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "line_category",
	"m_strTable" => "mst_producing_area",
	"m_srcTableName" => "mst_producing_area"
));

$proto20["m_sql"] = "line_category";
$proto20["m_srcTableName"] = "mst_producing_area";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_junle",
	"m_strTable" => "mst_producing_area",
	"m_srcTableName" => "mst_producing_area"
));

$proto22["m_sql"] = "yahoo_junle";
$proto22["m_srcTableName"] = "mst_producing_area";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "category_id",
	"m_strTable" => "mst_producing_area",
	"m_srcTableName" => "mst_producing_area"
));

$proto24["m_sql"] = "category_id";
$proto24["m_srcTableName"] = "mst_producing_area";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "sub_category_id1",
	"m_strTable" => "mst_producing_area",
	"m_srcTableName" => "mst_producing_area"
));

$proto26["m_sql"] = "sub_category_id1";
$proto26["m_srcTableName"] = "mst_producing_area";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "english_name",
	"m_strTable" => "mst_producing_area",
	"m_srcTableName" => "mst_producing_area"
));

$proto28["m_sql"] = "english_name";
$proto28["m_srcTableName"] = "mst_producing_area";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "mst_producing_area";
$proto31["m_srcTableName"] = "mst_producing_area";
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
$proto30["m_sql"] = "mst_producing_area";
$proto30["m_alias"] = "";
$proto30["m_srcTableName"] = "mst_producing_area";
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
	"m_strTable" => "mst_producing_area",
	"m_srcTableName" => "mst_producing_area"
));

$proto34["m_column"]=$obj;
$proto34["m_bAsc"] = 0;
$proto34["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto34);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="mst_producing_area";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mst_producing_area = createSqlQuery_mst_producing_area();


	
		;

												

$tdatamst_producing_area[".sqlquery"] = $queryData_mst_producing_area;

include_once(getabspath("include/mst_producing_area_events.php"));
$tableEvents["mst_producing_area"] = new eventclass_mst_producing_area;
$tdatamst_producing_area[".hasEvents"] = true;

?>