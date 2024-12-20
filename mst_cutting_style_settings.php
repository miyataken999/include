<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamst_cutting_style = array();
	$tdatamst_cutting_style[".truncateText"] = true;
	$tdatamst_cutting_style[".NumberOfChars"] = 80;
	$tdatamst_cutting_style[".ShortName"] = "mst_cutting_style";
	$tdatamst_cutting_style[".OwnerID"] = "";
	$tdatamst_cutting_style[".OriginalTable"] = "mst_cutting_style";

//	field labels
$fieldLabelsmst_cutting_style = array();
$fieldToolTipsmst_cutting_style = array();
$pageTitlesmst_cutting_style = array();
$placeHoldersmst_cutting_style = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmst_cutting_style["Japanese"] = array();
	$fieldToolTipsmst_cutting_style["Japanese"] = array();
	$placeHoldersmst_cutting_style["Japanese"] = array();
	$pageTitlesmst_cutting_style["Japanese"] = array();
	$fieldLabelsmst_cutting_style["Japanese"]["id"] = "Id";
	$fieldToolTipsmst_cutting_style["Japanese"]["id"] = "";
	$placeHoldersmst_cutting_style["Japanese"]["id"] = "";
	$fieldLabelsmst_cutting_style["Japanese"]["name"] = "Name";
	$fieldToolTipsmst_cutting_style["Japanese"]["name"] = "";
	$placeHoldersmst_cutting_style["Japanese"]["name"] = "";
	$fieldLabelsmst_cutting_style["Japanese"]["sort"] = "Sort";
	$fieldToolTipsmst_cutting_style["Japanese"]["sort"] = "";
	$placeHoldersmst_cutting_style["Japanese"]["sort"] = "";
	$fieldLabelsmst_cutting_style["Japanese"]["update_at"] = "更新日";
	$fieldToolTipsmst_cutting_style["Japanese"]["update_at"] = "";
	$placeHoldersmst_cutting_style["Japanese"]["update_at"] = "";
	$fieldLabelsmst_cutting_style["Japanese"]["update_by"] = "更新者";
	$fieldToolTipsmst_cutting_style["Japanese"]["update_by"] = "";
	$placeHoldersmst_cutting_style["Japanese"]["update_by"] = "";
	$fieldLabelsmst_cutting_style["Japanese"]["create_at"] = "登録日";
	$fieldToolTipsmst_cutting_style["Japanese"]["create_at"] = "";
	$placeHoldersmst_cutting_style["Japanese"]["create_at"] = "";
	$fieldLabelsmst_cutting_style["Japanese"]["create_by"] = "登録者";
	$fieldToolTipsmst_cutting_style["Japanese"]["create_by"] = "";
	$placeHoldersmst_cutting_style["Japanese"]["create_by"] = "";
	$fieldLabelsmst_cutting_style["Japanese"]["line_category"] = "ラインカテゴリー";
	$fieldToolTipsmst_cutting_style["Japanese"]["line_category"] = "";
	$placeHoldersmst_cutting_style["Japanese"]["line_category"] = "";
	$fieldLabelsmst_cutting_style["Japanese"]["yahoo_junle"] = "ブランドID";
	$fieldToolTipsmst_cutting_style["Japanese"]["yahoo_junle"] = "";
	$placeHoldersmst_cutting_style["Japanese"]["yahoo_junle"] = "";
	$fieldLabelsmst_cutting_style["Japanese"]["category_id"] = "大カテゴリー";
	$fieldToolTipsmst_cutting_style["Japanese"]["category_id"] = "";
	$placeHoldersmst_cutting_style["Japanese"]["category_id"] = "";
	$fieldLabelsmst_cutting_style["Japanese"]["sub_category_id1"] = "中カテゴリー";
	$fieldToolTipsmst_cutting_style["Japanese"]["sub_category_id1"] = "";
	$placeHoldersmst_cutting_style["Japanese"]["sub_category_id1"] = "";
	$fieldLabelsmst_cutting_style["Japanese"]["english_name"] = "英名";
	$fieldToolTipsmst_cutting_style["Japanese"]["english_name"] = "";
	$placeHoldersmst_cutting_style["Japanese"]["english_name"] = "";
	if (count($fieldToolTipsmst_cutting_style["Japanese"]))
		$tdatamst_cutting_style[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmst_cutting_style[""] = array();
	$fieldToolTipsmst_cutting_style[""] = array();
	$placeHoldersmst_cutting_style[""] = array();
	$pageTitlesmst_cutting_style[""] = array();
	$fieldLabelsmst_cutting_style[""]["id"] = "Id";
	$fieldToolTipsmst_cutting_style[""]["id"] = "";
	$placeHoldersmst_cutting_style[""]["id"] = "";
	$fieldLabelsmst_cutting_style[""]["name"] = "Name";
	$fieldToolTipsmst_cutting_style[""]["name"] = "";
	$placeHoldersmst_cutting_style[""]["name"] = "";
	$fieldLabelsmst_cutting_style[""]["sort"] = "Sort";
	$fieldToolTipsmst_cutting_style[""]["sort"] = "";
	$placeHoldersmst_cutting_style[""]["sort"] = "";
	$fieldLabelsmst_cutting_style[""]["update_at"] = "Update At";
	$fieldToolTipsmst_cutting_style[""]["update_at"] = "";
	$placeHoldersmst_cutting_style[""]["update_at"] = "";
	$fieldLabelsmst_cutting_style[""]["update_by"] = "Update By";
	$fieldToolTipsmst_cutting_style[""]["update_by"] = "";
	$placeHoldersmst_cutting_style[""]["update_by"] = "";
	$fieldLabelsmst_cutting_style[""]["create_at"] = "Create At";
	$fieldToolTipsmst_cutting_style[""]["create_at"] = "";
	$placeHoldersmst_cutting_style[""]["create_at"] = "";
	$fieldLabelsmst_cutting_style[""]["create_by"] = "Create By";
	$fieldToolTipsmst_cutting_style[""]["create_by"] = "";
	$placeHoldersmst_cutting_style[""]["create_by"] = "";
	$fieldLabelsmst_cutting_style[""]["line_category"] = "Line Category";
	$fieldToolTipsmst_cutting_style[""]["line_category"] = "";
	$placeHoldersmst_cutting_style[""]["line_category"] = "";
	$fieldLabelsmst_cutting_style[""]["yahoo_junle"] = "Yahoo Junle";
	$fieldToolTipsmst_cutting_style[""]["yahoo_junle"] = "";
	$placeHoldersmst_cutting_style[""]["yahoo_junle"] = "";
	$fieldLabelsmst_cutting_style[""]["category_id"] = "Category Id";
	$fieldToolTipsmst_cutting_style[""]["category_id"] = "";
	$placeHoldersmst_cutting_style[""]["category_id"] = "";
	$fieldLabelsmst_cutting_style[""]["sub_category_id1"] = "Sub Category Id1";
	$fieldToolTipsmst_cutting_style[""]["sub_category_id1"] = "";
	$placeHoldersmst_cutting_style[""]["sub_category_id1"] = "";
	$fieldLabelsmst_cutting_style[""]["english_name"] = "English Name";
	$fieldToolTipsmst_cutting_style[""]["english_name"] = "";
	$placeHoldersmst_cutting_style[""]["english_name"] = "";
	if (count($fieldToolTipsmst_cutting_style[""]))
		$tdatamst_cutting_style[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmst_cutting_style["English"] = array();
	$fieldToolTipsmst_cutting_style["English"] = array();
	$placeHoldersmst_cutting_style["English"] = array();
	$pageTitlesmst_cutting_style["English"] = array();
	$fieldLabelsmst_cutting_style["English"]["id"] = "Id";
	$fieldToolTipsmst_cutting_style["English"]["id"] = "";
	$placeHoldersmst_cutting_style["English"]["id"] = "";
	$fieldLabelsmst_cutting_style["English"]["name"] = "Name";
	$fieldToolTipsmst_cutting_style["English"]["name"] = "";
	$placeHoldersmst_cutting_style["English"]["name"] = "";
	$fieldLabelsmst_cutting_style["English"]["sort"] = "Sort";
	$fieldToolTipsmst_cutting_style["English"]["sort"] = "";
	$placeHoldersmst_cutting_style["English"]["sort"] = "";
	$fieldLabelsmst_cutting_style["English"]["update_at"] = "Update At";
	$fieldToolTipsmst_cutting_style["English"]["update_at"] = "";
	$placeHoldersmst_cutting_style["English"]["update_at"] = "";
	$fieldLabelsmst_cutting_style["English"]["update_by"] = "Update By";
	$fieldToolTipsmst_cutting_style["English"]["update_by"] = "";
	$placeHoldersmst_cutting_style["English"]["update_by"] = "";
	$fieldLabelsmst_cutting_style["English"]["create_at"] = "Create At";
	$fieldToolTipsmst_cutting_style["English"]["create_at"] = "";
	$placeHoldersmst_cutting_style["English"]["create_at"] = "";
	$fieldLabelsmst_cutting_style["English"]["create_by"] = "Create By";
	$fieldToolTipsmst_cutting_style["English"]["create_by"] = "";
	$placeHoldersmst_cutting_style["English"]["create_by"] = "";
	$fieldLabelsmst_cutting_style["English"]["line_category"] = "Line Category";
	$fieldToolTipsmst_cutting_style["English"]["line_category"] = "";
	$placeHoldersmst_cutting_style["English"]["line_category"] = "";
	$fieldLabelsmst_cutting_style["English"]["yahoo_junle"] = "Yahoo Junle";
	$fieldToolTipsmst_cutting_style["English"]["yahoo_junle"] = "";
	$placeHoldersmst_cutting_style["English"]["yahoo_junle"] = "";
	$fieldLabelsmst_cutting_style["English"]["category_id"] = "Category Id";
	$fieldToolTipsmst_cutting_style["English"]["category_id"] = "";
	$placeHoldersmst_cutting_style["English"]["category_id"] = "";
	$fieldLabelsmst_cutting_style["English"]["sub_category_id1"] = "Sub Category Id1";
	$fieldToolTipsmst_cutting_style["English"]["sub_category_id1"] = "";
	$placeHoldersmst_cutting_style["English"]["sub_category_id1"] = "";
	$fieldLabelsmst_cutting_style["English"]["english_name"] = "English Name";
	$fieldToolTipsmst_cutting_style["English"]["english_name"] = "";
	$placeHoldersmst_cutting_style["English"]["english_name"] = "";
	if (count($fieldToolTipsmst_cutting_style["English"]))
		$tdatamst_cutting_style[".isUseToolTips"] = true;
}


	$tdatamst_cutting_style[".NCSearch"] = true;



$tdatamst_cutting_style[".shortTableName"] = "mst_cutting_style";
$tdatamst_cutting_style[".nSecOptions"] = 0;
$tdatamst_cutting_style[".recsPerRowPrint"] = 1;
$tdatamst_cutting_style[".mainTableOwnerID"] = "";
$tdatamst_cutting_style[".moveNext"] = 1;
$tdatamst_cutting_style[".entityType"] = 0;

$tdatamst_cutting_style[".strOriginalTableName"] = "mst_cutting_style";

	



$tdatamst_cutting_style[".showAddInPopup"] = false;

$tdatamst_cutting_style[".showEditInPopup"] = false;

$tdatamst_cutting_style[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamst_cutting_style[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamst_cutting_style[".fieldsForRegister"] = array();

$tdatamst_cutting_style[".listAjax"] = false;

	$tdatamst_cutting_style[".audit"] = true;

	$tdatamst_cutting_style[".locking"] = false;



$tdatamst_cutting_style[".list"] = true;

$tdatamst_cutting_style[".inlineEdit"] = true;


$tdatamst_cutting_style[".reorderRecordsByHeader"] = true;



$tdatamst_cutting_style[".inlineAdd"] = true;

$tdatamst_cutting_style[".import"] = true;

$tdatamst_cutting_style[".exportTo"] = true;

$tdatamst_cutting_style[".printFriendly"] = true;

$tdatamst_cutting_style[".delete"] = true;

$tdatamst_cutting_style[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamst_cutting_style[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamst_cutting_style[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamst_cutting_style[".searchSaving"] = false;
//

$tdatamst_cutting_style[".showSearchPanel"] = true;
		$tdatamst_cutting_style[".flexibleSearch"] = true;

$tdatamst_cutting_style[".isUseAjaxSuggest"] = true;

$tdatamst_cutting_style[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatamst_cutting_style[".ajaxCodeSnippetAdded"] = false;

$tdatamst_cutting_style[".buttonsAdded"] = false;

$tdatamst_cutting_style[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamst_cutting_style[".isUseTimeForSearch"] = false;





$tdatamst_cutting_style[".allSearchFields"] = array();
$tdatamst_cutting_style[".filterFields"] = array();
$tdatamst_cutting_style[".requiredSearchFields"] = array();

$tdatamst_cutting_style[".allSearchFields"][] = "id";
	$tdatamst_cutting_style[".allSearchFields"][] = "name";
	$tdatamst_cutting_style[".allSearchFields"][] = "sort";
	$tdatamst_cutting_style[".allSearchFields"][] = "update_at";
	$tdatamst_cutting_style[".allSearchFields"][] = "update_by";
	$tdatamst_cutting_style[".allSearchFields"][] = "create_at";
	$tdatamst_cutting_style[".allSearchFields"][] = "create_by";
	$tdatamst_cutting_style[".allSearchFields"][] = "line_category";
	$tdatamst_cutting_style[".allSearchFields"][] = "yahoo_junle";
	$tdatamst_cutting_style[".allSearchFields"][] = "category_id";
	$tdatamst_cutting_style[".allSearchFields"][] = "sub_category_id1";
	$tdatamst_cutting_style[".allSearchFields"][] = "english_name";
	

$tdatamst_cutting_style[".googleLikeFields"] = array();
$tdatamst_cutting_style[".googleLikeFields"][] = "id";
$tdatamst_cutting_style[".googleLikeFields"][] = "name";
$tdatamst_cutting_style[".googleLikeFields"][] = "sort";
$tdatamst_cutting_style[".googleLikeFields"][] = "update_at";
$tdatamst_cutting_style[".googleLikeFields"][] = "update_by";
$tdatamst_cutting_style[".googleLikeFields"][] = "create_at";
$tdatamst_cutting_style[".googleLikeFields"][] = "create_by";
$tdatamst_cutting_style[".googleLikeFields"][] = "line_category";
$tdatamst_cutting_style[".googleLikeFields"][] = "yahoo_junle";
$tdatamst_cutting_style[".googleLikeFields"][] = "category_id";
$tdatamst_cutting_style[".googleLikeFields"][] = "sub_category_id1";
$tdatamst_cutting_style[".googleLikeFields"][] = "english_name";

$tdatamst_cutting_style[".panelSearchFields"] = array();
$tdatamst_cutting_style[".searchPanelOptions"] = array();
$tdatamst_cutting_style[".panelSearchFields"][] = "name";
	$tdatamst_cutting_style[".panelSearchFields"][] = "yahoo_junle";
	
$tdatamst_cutting_style[".advSearchFields"] = array();
$tdatamst_cutting_style[".advSearchFields"][] = "id";
$tdatamst_cutting_style[".advSearchFields"][] = "name";
$tdatamst_cutting_style[".advSearchFields"][] = "sort";
$tdatamst_cutting_style[".advSearchFields"][] = "update_at";
$tdatamst_cutting_style[".advSearchFields"][] = "update_by";
$tdatamst_cutting_style[".advSearchFields"][] = "create_at";
$tdatamst_cutting_style[".advSearchFields"][] = "create_by";
$tdatamst_cutting_style[".advSearchFields"][] = "line_category";
$tdatamst_cutting_style[".advSearchFields"][] = "yahoo_junle";
$tdatamst_cutting_style[".advSearchFields"][] = "category_id";
$tdatamst_cutting_style[".advSearchFields"][] = "sub_category_id1";
$tdatamst_cutting_style[".advSearchFields"][] = "english_name";

$tdatamst_cutting_style[".tableType"] = "list";

$tdatamst_cutting_style[".printerPageOrientation"] = 0;
$tdatamst_cutting_style[".nPrinterPageScale"] = 100;

$tdatamst_cutting_style[".nPrinterSplitRecords"] = 40;

$tdatamst_cutting_style[".nPrinterPDFSplitRecords"] = 40;



$tdatamst_cutting_style[".geocodingEnabled"] = false;





$tdatamst_cutting_style[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamst_cutting_style[".pageSize"] = 100;

$tdatamst_cutting_style[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY id DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamst_cutting_style[".strOrderBy"] = $tstrOrderBy;

$tdatamst_cutting_style[".orderindexes"] = array();
$tdatamst_cutting_style[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "`id`");

$tdatamst_cutting_style[".sqlHead"] = "SELECT id,  name,  sort,  update_at,  update_by,  create_at,  create_by,  line_category,  yahoo_junle,  category_id,  sub_category_id1,  english_name";
$tdatamst_cutting_style[".sqlFrom"] = "FROM mst_cutting_style";
$tdatamst_cutting_style[".sqlWhereExpr"] = "";
$tdatamst_cutting_style[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamst_cutting_style[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamst_cutting_style[".arrGroupsPerPage"] = $arrGPP;

$tdatamst_cutting_style[".highlightSearchResults"] = true;

$tableKeysmst_cutting_style = array();
$tableKeysmst_cutting_style[] = "id";
$tdatamst_cutting_style[".Keys"] = $tableKeysmst_cutting_style;

$tdatamst_cutting_style[".listFields"] = array();
$tdatamst_cutting_style[".listFields"][] = "id";
$tdatamst_cutting_style[".listFields"][] = "name";
$tdatamst_cutting_style[".listFields"][] = "english_name";
$tdatamst_cutting_style[".listFields"][] = "sort";
$tdatamst_cutting_style[".listFields"][] = "line_category";
$tdatamst_cutting_style[".listFields"][] = "yahoo_junle";
$tdatamst_cutting_style[".listFields"][] = "category_id";
$tdatamst_cutting_style[".listFields"][] = "sub_category_id1";
$tdatamst_cutting_style[".listFields"][] = "update_by";
$tdatamst_cutting_style[".listFields"][] = "update_at";
$tdatamst_cutting_style[".listFields"][] = "create_by";
$tdatamst_cutting_style[".listFields"][] = "create_at";

$tdatamst_cutting_style[".hideMobileList"] = array();


$tdatamst_cutting_style[".viewFields"] = array();

$tdatamst_cutting_style[".addFields"] = array();

$tdatamst_cutting_style[".masterListFields"] = array();
$tdatamst_cutting_style[".masterListFields"][] = "id";
$tdatamst_cutting_style[".masterListFields"][] = "name";
$tdatamst_cutting_style[".masterListFields"][] = "sort";
$tdatamst_cutting_style[".masterListFields"][] = "update_at";
$tdatamst_cutting_style[".masterListFields"][] = "update_by";
$tdatamst_cutting_style[".masterListFields"][] = "create_at";
$tdatamst_cutting_style[".masterListFields"][] = "create_by";
$tdatamst_cutting_style[".masterListFields"][] = "line_category";
$tdatamst_cutting_style[".masterListFields"][] = "yahoo_junle";
$tdatamst_cutting_style[".masterListFields"][] = "category_id";
$tdatamst_cutting_style[".masterListFields"][] = "sub_category_id1";
$tdatamst_cutting_style[".masterListFields"][] = "english_name";

$tdatamst_cutting_style[".inlineAddFields"] = array();
$tdatamst_cutting_style[".inlineAddFields"][] = "name";
$tdatamst_cutting_style[".inlineAddFields"][] = "english_name";
$tdatamst_cutting_style[".inlineAddFields"][] = "sort";
$tdatamst_cutting_style[".inlineAddFields"][] = "line_category";
$tdatamst_cutting_style[".inlineAddFields"][] = "yahoo_junle";
$tdatamst_cutting_style[".inlineAddFields"][] = "category_id";
$tdatamst_cutting_style[".inlineAddFields"][] = "sub_category_id1";

$tdatamst_cutting_style[".editFields"] = array();

$tdatamst_cutting_style[".inlineEditFields"] = array();
$tdatamst_cutting_style[".inlineEditFields"][] = "name";
$tdatamst_cutting_style[".inlineEditFields"][] = "english_name";
$tdatamst_cutting_style[".inlineEditFields"][] = "sort";
$tdatamst_cutting_style[".inlineEditFields"][] = "line_category";
$tdatamst_cutting_style[".inlineEditFields"][] = "yahoo_junle";
$tdatamst_cutting_style[".inlineEditFields"][] = "category_id";
$tdatamst_cutting_style[".inlineEditFields"][] = "sub_category_id1";

$tdatamst_cutting_style[".updateSelectedFields"] = array();


$tdatamst_cutting_style[".exportFields"] = array();
$tdatamst_cutting_style[".exportFields"][] = "id";
$tdatamst_cutting_style[".exportFields"][] = "name";
$tdatamst_cutting_style[".exportFields"][] = "sort";
$tdatamst_cutting_style[".exportFields"][] = "update_at";
$tdatamst_cutting_style[".exportFields"][] = "update_by";
$tdatamst_cutting_style[".exportFields"][] = "create_at";
$tdatamst_cutting_style[".exportFields"][] = "create_by";
$tdatamst_cutting_style[".exportFields"][] = "line_category";
$tdatamst_cutting_style[".exportFields"][] = "yahoo_junle";
$tdatamst_cutting_style[".exportFields"][] = "category_id";
$tdatamst_cutting_style[".exportFields"][] = "sub_category_id1";
$tdatamst_cutting_style[".exportFields"][] = "english_name";

$tdatamst_cutting_style[".importFields"] = array();
$tdatamst_cutting_style[".importFields"][] = "id";
$tdatamst_cutting_style[".importFields"][] = "name";
$tdatamst_cutting_style[".importFields"][] = "sort";
$tdatamst_cutting_style[".importFields"][] = "line_category";
$tdatamst_cutting_style[".importFields"][] = "yahoo_junle";
$tdatamst_cutting_style[".importFields"][] = "category_id";
$tdatamst_cutting_style[".importFields"][] = "sub_category_id1";
$tdatamst_cutting_style[".importFields"][] = "english_name";

$tdatamst_cutting_style[".printFields"] = array();
$tdatamst_cutting_style[".printFields"][] = "id";
$tdatamst_cutting_style[".printFields"][] = "name";
$tdatamst_cutting_style[".printFields"][] = "sort";
$tdatamst_cutting_style[".printFields"][] = "update_at";
$tdatamst_cutting_style[".printFields"][] = "update_by";
$tdatamst_cutting_style[".printFields"][] = "create_at";
$tdatamst_cutting_style[".printFields"][] = "create_by";
$tdatamst_cutting_style[".printFields"][] = "line_category";
$tdatamst_cutting_style[".printFields"][] = "yahoo_junle";
$tdatamst_cutting_style[".printFields"][] = "category_id";
$tdatamst_cutting_style[".printFields"][] = "sub_category_id1";
$tdatamst_cutting_style[".printFields"][] = "english_name";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "mst_cutting_style";
	$fdata["Label"] = GetFieldLabel("mst_cutting_style","id");
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




	$tdatamst_cutting_style["id"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "mst_cutting_style";
	$fdata["Label"] = GetFieldLabel("mst_cutting_style","name");
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




	$tdatamst_cutting_style["name"] = $fdata;
//	sort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sort";
	$fdata["GoodName"] = "sort";
	$fdata["ownerTable"] = "mst_cutting_style";
	$fdata["Label"] = GetFieldLabel("mst_cutting_style","sort");
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




	$tdatamst_cutting_style["sort"] = $fdata;
//	update_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "update_at";
	$fdata["GoodName"] = "update_at";
	$fdata["ownerTable"] = "mst_cutting_style";
	$fdata["Label"] = GetFieldLabel("mst_cutting_style","update_at");
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




	$tdatamst_cutting_style["update_at"] = $fdata;
//	update_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "update_by";
	$fdata["GoodName"] = "update_by";
	$fdata["ownerTable"] = "mst_cutting_style";
	$fdata["Label"] = GetFieldLabel("mst_cutting_style","update_by");
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




	$tdatamst_cutting_style["update_by"] = $fdata;
//	create_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "create_at";
	$fdata["GoodName"] = "create_at";
	$fdata["ownerTable"] = "mst_cutting_style";
	$fdata["Label"] = GetFieldLabel("mst_cutting_style","create_at");
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




	$tdatamst_cutting_style["create_at"] = $fdata;
//	create_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "create_by";
	$fdata["GoodName"] = "create_by";
	$fdata["ownerTable"] = "mst_cutting_style";
	$fdata["Label"] = GetFieldLabel("mst_cutting_style","create_by");
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




	$tdatamst_cutting_style["create_by"] = $fdata;
//	line_category
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "line_category";
	$fdata["GoodName"] = "line_category";
	$fdata["ownerTable"] = "mst_cutting_style";
	$fdata["Label"] = GetFieldLabel("mst_cutting_style","line_category");
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




	$tdatamst_cutting_style["line_category"] = $fdata;
//	yahoo_junle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "yahoo_junle";
	$fdata["GoodName"] = "yahoo_junle";
	$fdata["ownerTable"] = "mst_cutting_style";
	$fdata["Label"] = GetFieldLabel("mst_cutting_style","yahoo_junle");
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




	$tdatamst_cutting_style["yahoo_junle"] = $fdata;
//	category_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "category_id";
	$fdata["GoodName"] = "category_id";
	$fdata["ownerTable"] = "mst_cutting_style";
	$fdata["Label"] = GetFieldLabel("mst_cutting_style","category_id");
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




	$tdatamst_cutting_style["category_id"] = $fdata;
//	sub_category_id1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "sub_category_id1";
	$fdata["GoodName"] = "sub_category_id1";
	$fdata["ownerTable"] = "mst_cutting_style";
	$fdata["Label"] = GetFieldLabel("mst_cutting_style","sub_category_id1");
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




	$tdatamst_cutting_style["sub_category_id1"] = $fdata;
//	english_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "english_name";
	$fdata["GoodName"] = "english_name";
	$fdata["ownerTable"] = "mst_cutting_style";
	$fdata["Label"] = GetFieldLabel("mst_cutting_style","english_name");
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




	$tdatamst_cutting_style["english_name"] = $fdata;


$tables_data["mst_cutting_style"]=&$tdatamst_cutting_style;
$field_labels["mst_cutting_style"] = &$fieldLabelsmst_cutting_style;
$fieldToolTips["mst_cutting_style"] = &$fieldToolTipsmst_cutting_style;
$placeHolders["mst_cutting_style"] = &$placeHoldersmst_cutting_style;
$page_titles["mst_cutting_style"] = &$pageTitlesmst_cutting_style;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mst_cutting_style"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mst_cutting_style"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mst_cutting_style()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  name,  sort,  update_at,  update_by,  create_at,  create_by,  line_category,  yahoo_junle,  category_id,  sub_category_id1,  english_name";
$proto0["m_strFrom"] = "FROM mst_cutting_style";
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
	"m_strTable" => "mst_cutting_style",
	"m_srcTableName" => "mst_cutting_style"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "mst_cutting_style";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "mst_cutting_style",
	"m_srcTableName" => "mst_cutting_style"
));

$proto8["m_sql"] = "name";
$proto8["m_srcTableName"] = "mst_cutting_style";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "sort",
	"m_strTable" => "mst_cutting_style",
	"m_srcTableName" => "mst_cutting_style"
));

$proto10["m_sql"] = "sort";
$proto10["m_srcTableName"] = "mst_cutting_style";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "update_at",
	"m_strTable" => "mst_cutting_style",
	"m_srcTableName" => "mst_cutting_style"
));

$proto12["m_sql"] = "update_at";
$proto12["m_srcTableName"] = "mst_cutting_style";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "update_by",
	"m_strTable" => "mst_cutting_style",
	"m_srcTableName" => "mst_cutting_style"
));

$proto14["m_sql"] = "update_by";
$proto14["m_srcTableName"] = "mst_cutting_style";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "create_at",
	"m_strTable" => "mst_cutting_style",
	"m_srcTableName" => "mst_cutting_style"
));

$proto16["m_sql"] = "create_at";
$proto16["m_srcTableName"] = "mst_cutting_style";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "create_by",
	"m_strTable" => "mst_cutting_style",
	"m_srcTableName" => "mst_cutting_style"
));

$proto18["m_sql"] = "create_by";
$proto18["m_srcTableName"] = "mst_cutting_style";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "line_category",
	"m_strTable" => "mst_cutting_style",
	"m_srcTableName" => "mst_cutting_style"
));

$proto20["m_sql"] = "line_category";
$proto20["m_srcTableName"] = "mst_cutting_style";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_junle",
	"m_strTable" => "mst_cutting_style",
	"m_srcTableName" => "mst_cutting_style"
));

$proto22["m_sql"] = "yahoo_junle";
$proto22["m_srcTableName"] = "mst_cutting_style";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "category_id",
	"m_strTable" => "mst_cutting_style",
	"m_srcTableName" => "mst_cutting_style"
));

$proto24["m_sql"] = "category_id";
$proto24["m_srcTableName"] = "mst_cutting_style";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "sub_category_id1",
	"m_strTable" => "mst_cutting_style",
	"m_srcTableName" => "mst_cutting_style"
));

$proto26["m_sql"] = "sub_category_id1";
$proto26["m_srcTableName"] = "mst_cutting_style";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "english_name",
	"m_strTable" => "mst_cutting_style",
	"m_srcTableName" => "mst_cutting_style"
));

$proto28["m_sql"] = "english_name";
$proto28["m_srcTableName"] = "mst_cutting_style";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "mst_cutting_style";
$proto31["m_srcTableName"] = "mst_cutting_style";
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
$proto30["m_sql"] = "mst_cutting_style";
$proto30["m_alias"] = "";
$proto30["m_srcTableName"] = "mst_cutting_style";
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
	"m_strTable" => "mst_cutting_style",
	"m_srcTableName" => "mst_cutting_style"
));

$proto34["m_column"]=$obj;
$proto34["m_bAsc"] = 0;
$proto34["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto34);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="mst_cutting_style";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mst_cutting_style = createSqlQuery_mst_cutting_style();


	
		;

												

$tdatamst_cutting_style[".sqlquery"] = $queryData_mst_cutting_style;

include_once(getabspath("include/mst_cutting_style_events.php"));
$tableEvents["mst_cutting_style"] = new eventclass_mst_cutting_style;
$tdatamst_cutting_style[".hasEvents"] = true;

?>