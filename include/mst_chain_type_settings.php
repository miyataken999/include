<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamst_chain_type = array();
	$tdatamst_chain_type[".truncateText"] = true;
	$tdatamst_chain_type[".NumberOfChars"] = 80;
	$tdatamst_chain_type[".ShortName"] = "mst_chain_type";
	$tdatamst_chain_type[".OwnerID"] = "";
	$tdatamst_chain_type[".OriginalTable"] = "mst_chain_type";

//	field labels
$fieldLabelsmst_chain_type = array();
$fieldToolTipsmst_chain_type = array();
$pageTitlesmst_chain_type = array();
$placeHoldersmst_chain_type = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmst_chain_type["Japanese"] = array();
	$fieldToolTipsmst_chain_type["Japanese"] = array();
	$placeHoldersmst_chain_type["Japanese"] = array();
	$pageTitlesmst_chain_type["Japanese"] = array();
	$fieldLabelsmst_chain_type["Japanese"]["id"] = "Id";
	$fieldToolTipsmst_chain_type["Japanese"]["id"] = "";
	$placeHoldersmst_chain_type["Japanese"]["id"] = "";
	$fieldLabelsmst_chain_type["Japanese"]["name"] = "Name";
	$fieldToolTipsmst_chain_type["Japanese"]["name"] = "";
	$placeHoldersmst_chain_type["Japanese"]["name"] = "";
	$fieldLabelsmst_chain_type["Japanese"]["sort"] = "Sort";
	$fieldToolTipsmst_chain_type["Japanese"]["sort"] = "";
	$placeHoldersmst_chain_type["Japanese"]["sort"] = "";
	$fieldLabelsmst_chain_type["Japanese"]["update_at"] = "更新日";
	$fieldToolTipsmst_chain_type["Japanese"]["update_at"] = "";
	$placeHoldersmst_chain_type["Japanese"]["update_at"] = "";
	$fieldLabelsmst_chain_type["Japanese"]["update_by"] = "更新者";
	$fieldToolTipsmst_chain_type["Japanese"]["update_by"] = "";
	$placeHoldersmst_chain_type["Japanese"]["update_by"] = "";
	$fieldLabelsmst_chain_type["Japanese"]["create_at"] = "登録日";
	$fieldToolTipsmst_chain_type["Japanese"]["create_at"] = "";
	$placeHoldersmst_chain_type["Japanese"]["create_at"] = "";
	$fieldLabelsmst_chain_type["Japanese"]["create_by"] = "登録者";
	$fieldToolTipsmst_chain_type["Japanese"]["create_by"] = "";
	$placeHoldersmst_chain_type["Japanese"]["create_by"] = "";
	$fieldLabelsmst_chain_type["Japanese"]["line_category"] = "ラインカテゴリー";
	$fieldToolTipsmst_chain_type["Japanese"]["line_category"] = "";
	$placeHoldersmst_chain_type["Japanese"]["line_category"] = "";
	$fieldLabelsmst_chain_type["Japanese"]["yahoo_junle"] = "ブランドID";
	$fieldToolTipsmst_chain_type["Japanese"]["yahoo_junle"] = "";
	$placeHoldersmst_chain_type["Japanese"]["yahoo_junle"] = "";
	$fieldLabelsmst_chain_type["Japanese"]["category_id"] = "大カテゴリー";
	$fieldToolTipsmst_chain_type["Japanese"]["category_id"] = "";
	$placeHoldersmst_chain_type["Japanese"]["category_id"] = "";
	$fieldLabelsmst_chain_type["Japanese"]["sub_category_id1"] = "中カテゴリー";
	$fieldToolTipsmst_chain_type["Japanese"]["sub_category_id1"] = "";
	$placeHoldersmst_chain_type["Japanese"]["sub_category_id1"] = "";
	$fieldLabelsmst_chain_type["Japanese"]["english_name"] = "英名";
	$fieldToolTipsmst_chain_type["Japanese"]["english_name"] = "";
	$placeHoldersmst_chain_type["Japanese"]["english_name"] = "";
	if (count($fieldToolTipsmst_chain_type["Japanese"]))
		$tdatamst_chain_type[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmst_chain_type[""] = array();
	$fieldToolTipsmst_chain_type[""] = array();
	$placeHoldersmst_chain_type[""] = array();
	$pageTitlesmst_chain_type[""] = array();
	$fieldLabelsmst_chain_type[""]["id"] = "Id";
	$fieldToolTipsmst_chain_type[""]["id"] = "";
	$placeHoldersmst_chain_type[""]["id"] = "";
	$fieldLabelsmst_chain_type[""]["name"] = "Name";
	$fieldToolTipsmst_chain_type[""]["name"] = "";
	$placeHoldersmst_chain_type[""]["name"] = "";
	$fieldLabelsmst_chain_type[""]["sort"] = "Sort";
	$fieldToolTipsmst_chain_type[""]["sort"] = "";
	$placeHoldersmst_chain_type[""]["sort"] = "";
	$fieldLabelsmst_chain_type[""]["update_at"] = "Update At";
	$fieldToolTipsmst_chain_type[""]["update_at"] = "";
	$placeHoldersmst_chain_type[""]["update_at"] = "";
	$fieldLabelsmst_chain_type[""]["update_by"] = "Update By";
	$fieldToolTipsmst_chain_type[""]["update_by"] = "";
	$placeHoldersmst_chain_type[""]["update_by"] = "";
	$fieldLabelsmst_chain_type[""]["create_at"] = "Create At";
	$fieldToolTipsmst_chain_type[""]["create_at"] = "";
	$placeHoldersmst_chain_type[""]["create_at"] = "";
	$fieldLabelsmst_chain_type[""]["create_by"] = "Create By";
	$fieldToolTipsmst_chain_type[""]["create_by"] = "";
	$placeHoldersmst_chain_type[""]["create_by"] = "";
	$fieldLabelsmst_chain_type[""]["line_category"] = "Line Category";
	$fieldToolTipsmst_chain_type[""]["line_category"] = "";
	$placeHoldersmst_chain_type[""]["line_category"] = "";
	$fieldLabelsmst_chain_type[""]["yahoo_junle"] = "Yahoo Junle";
	$fieldToolTipsmst_chain_type[""]["yahoo_junle"] = "";
	$placeHoldersmst_chain_type[""]["yahoo_junle"] = "";
	$fieldLabelsmst_chain_type[""]["category_id"] = "Category Id";
	$fieldToolTipsmst_chain_type[""]["category_id"] = "";
	$placeHoldersmst_chain_type[""]["category_id"] = "";
	$fieldLabelsmst_chain_type[""]["sub_category_id1"] = "Sub Category Id1";
	$fieldToolTipsmst_chain_type[""]["sub_category_id1"] = "";
	$placeHoldersmst_chain_type[""]["sub_category_id1"] = "";
	$fieldLabelsmst_chain_type[""]["english_name"] = "English Name";
	$fieldToolTipsmst_chain_type[""]["english_name"] = "";
	$placeHoldersmst_chain_type[""]["english_name"] = "";
	if (count($fieldToolTipsmst_chain_type[""]))
		$tdatamst_chain_type[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmst_chain_type["English"] = array();
	$fieldToolTipsmst_chain_type["English"] = array();
	$placeHoldersmst_chain_type["English"] = array();
	$pageTitlesmst_chain_type["English"] = array();
	$fieldLabelsmst_chain_type["English"]["id"] = "Id";
	$fieldToolTipsmst_chain_type["English"]["id"] = "";
	$placeHoldersmst_chain_type["English"]["id"] = "";
	$fieldLabelsmst_chain_type["English"]["name"] = "Name";
	$fieldToolTipsmst_chain_type["English"]["name"] = "";
	$placeHoldersmst_chain_type["English"]["name"] = "";
	$fieldLabelsmst_chain_type["English"]["sort"] = "Sort";
	$fieldToolTipsmst_chain_type["English"]["sort"] = "";
	$placeHoldersmst_chain_type["English"]["sort"] = "";
	$fieldLabelsmst_chain_type["English"]["update_at"] = "Update At";
	$fieldToolTipsmst_chain_type["English"]["update_at"] = "";
	$placeHoldersmst_chain_type["English"]["update_at"] = "";
	$fieldLabelsmst_chain_type["English"]["update_by"] = "Update By";
	$fieldToolTipsmst_chain_type["English"]["update_by"] = "";
	$placeHoldersmst_chain_type["English"]["update_by"] = "";
	$fieldLabelsmst_chain_type["English"]["create_at"] = "Create At";
	$fieldToolTipsmst_chain_type["English"]["create_at"] = "";
	$placeHoldersmst_chain_type["English"]["create_at"] = "";
	$fieldLabelsmst_chain_type["English"]["create_by"] = "Create By";
	$fieldToolTipsmst_chain_type["English"]["create_by"] = "";
	$placeHoldersmst_chain_type["English"]["create_by"] = "";
	$fieldLabelsmst_chain_type["English"]["line_category"] = "Line Category";
	$fieldToolTipsmst_chain_type["English"]["line_category"] = "";
	$placeHoldersmst_chain_type["English"]["line_category"] = "";
	$fieldLabelsmst_chain_type["English"]["yahoo_junle"] = "Yahoo Junle";
	$fieldToolTipsmst_chain_type["English"]["yahoo_junle"] = "";
	$placeHoldersmst_chain_type["English"]["yahoo_junle"] = "";
	$fieldLabelsmst_chain_type["English"]["category_id"] = "Category Id";
	$fieldToolTipsmst_chain_type["English"]["category_id"] = "";
	$placeHoldersmst_chain_type["English"]["category_id"] = "";
	$fieldLabelsmst_chain_type["English"]["sub_category_id1"] = "Sub Category Id1";
	$fieldToolTipsmst_chain_type["English"]["sub_category_id1"] = "";
	$placeHoldersmst_chain_type["English"]["sub_category_id1"] = "";
	$fieldLabelsmst_chain_type["English"]["english_name"] = "English Name";
	$fieldToolTipsmst_chain_type["English"]["english_name"] = "";
	$placeHoldersmst_chain_type["English"]["english_name"] = "";
	if (count($fieldToolTipsmst_chain_type["English"]))
		$tdatamst_chain_type[".isUseToolTips"] = true;
}


	$tdatamst_chain_type[".NCSearch"] = true;



$tdatamst_chain_type[".shortTableName"] = "mst_chain_type";
$tdatamst_chain_type[".nSecOptions"] = 0;
$tdatamst_chain_type[".recsPerRowPrint"] = 1;
$tdatamst_chain_type[".mainTableOwnerID"] = "";
$tdatamst_chain_type[".moveNext"] = 1;
$tdatamst_chain_type[".entityType"] = 0;

$tdatamst_chain_type[".strOriginalTableName"] = "mst_chain_type";

	



$tdatamst_chain_type[".showAddInPopup"] = false;

$tdatamst_chain_type[".showEditInPopup"] = false;

$tdatamst_chain_type[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamst_chain_type[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamst_chain_type[".fieldsForRegister"] = array();

$tdatamst_chain_type[".listAjax"] = false;

	$tdatamst_chain_type[".audit"] = true;

	$tdatamst_chain_type[".locking"] = false;



$tdatamst_chain_type[".list"] = true;

$tdatamst_chain_type[".inlineEdit"] = true;


$tdatamst_chain_type[".reorderRecordsByHeader"] = true;



$tdatamst_chain_type[".inlineAdd"] = true;

$tdatamst_chain_type[".import"] = true;

$tdatamst_chain_type[".exportTo"] = true;

$tdatamst_chain_type[".printFriendly"] = true;

$tdatamst_chain_type[".delete"] = true;

$tdatamst_chain_type[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamst_chain_type[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamst_chain_type[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamst_chain_type[".searchSaving"] = false;
//

$tdatamst_chain_type[".showSearchPanel"] = true;
		$tdatamst_chain_type[".flexibleSearch"] = true;

$tdatamst_chain_type[".isUseAjaxSuggest"] = true;

$tdatamst_chain_type[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatamst_chain_type[".ajaxCodeSnippetAdded"] = false;

$tdatamst_chain_type[".buttonsAdded"] = false;

$tdatamst_chain_type[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamst_chain_type[".isUseTimeForSearch"] = false;





$tdatamst_chain_type[".allSearchFields"] = array();
$tdatamst_chain_type[".filterFields"] = array();
$tdatamst_chain_type[".requiredSearchFields"] = array();

$tdatamst_chain_type[".allSearchFields"][] = "id";
	$tdatamst_chain_type[".allSearchFields"][] = "name";
	$tdatamst_chain_type[".allSearchFields"][] = "sort";
	$tdatamst_chain_type[".allSearchFields"][] = "update_at";
	$tdatamst_chain_type[".allSearchFields"][] = "update_by";
	$tdatamst_chain_type[".allSearchFields"][] = "create_at";
	$tdatamst_chain_type[".allSearchFields"][] = "create_by";
	$tdatamst_chain_type[".allSearchFields"][] = "line_category";
	$tdatamst_chain_type[".allSearchFields"][] = "yahoo_junle";
	$tdatamst_chain_type[".allSearchFields"][] = "category_id";
	$tdatamst_chain_type[".allSearchFields"][] = "sub_category_id1";
	$tdatamst_chain_type[".allSearchFields"][] = "english_name";
	

$tdatamst_chain_type[".googleLikeFields"] = array();
$tdatamst_chain_type[".googleLikeFields"][] = "id";
$tdatamst_chain_type[".googleLikeFields"][] = "name";
$tdatamst_chain_type[".googleLikeFields"][] = "sort";
$tdatamst_chain_type[".googleLikeFields"][] = "update_at";
$tdatamst_chain_type[".googleLikeFields"][] = "update_by";
$tdatamst_chain_type[".googleLikeFields"][] = "create_at";
$tdatamst_chain_type[".googleLikeFields"][] = "create_by";
$tdatamst_chain_type[".googleLikeFields"][] = "line_category";
$tdatamst_chain_type[".googleLikeFields"][] = "yahoo_junle";
$tdatamst_chain_type[".googleLikeFields"][] = "category_id";
$tdatamst_chain_type[".googleLikeFields"][] = "sub_category_id1";
$tdatamst_chain_type[".googleLikeFields"][] = "english_name";

$tdatamst_chain_type[".panelSearchFields"] = array();
$tdatamst_chain_type[".searchPanelOptions"] = array();
$tdatamst_chain_type[".panelSearchFields"][] = "name";
	$tdatamst_chain_type[".panelSearchFields"][] = "yahoo_junle";
	
$tdatamst_chain_type[".advSearchFields"] = array();
$tdatamst_chain_type[".advSearchFields"][] = "id";
$tdatamst_chain_type[".advSearchFields"][] = "name";
$tdatamst_chain_type[".advSearchFields"][] = "sort";
$tdatamst_chain_type[".advSearchFields"][] = "update_at";
$tdatamst_chain_type[".advSearchFields"][] = "update_by";
$tdatamst_chain_type[".advSearchFields"][] = "create_at";
$tdatamst_chain_type[".advSearchFields"][] = "create_by";
$tdatamst_chain_type[".advSearchFields"][] = "line_category";
$tdatamst_chain_type[".advSearchFields"][] = "yahoo_junle";
$tdatamst_chain_type[".advSearchFields"][] = "category_id";
$tdatamst_chain_type[".advSearchFields"][] = "sub_category_id1";
$tdatamst_chain_type[".advSearchFields"][] = "english_name";

$tdatamst_chain_type[".tableType"] = "list";

$tdatamst_chain_type[".printerPageOrientation"] = 0;
$tdatamst_chain_type[".nPrinterPageScale"] = 100;

$tdatamst_chain_type[".nPrinterSplitRecords"] = 40;

$tdatamst_chain_type[".nPrinterPDFSplitRecords"] = 40;



$tdatamst_chain_type[".geocodingEnabled"] = false;





$tdatamst_chain_type[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamst_chain_type[".pageSize"] = 100;

$tdatamst_chain_type[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY id DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamst_chain_type[".strOrderBy"] = $tstrOrderBy;

$tdatamst_chain_type[".orderindexes"] = array();
$tdatamst_chain_type[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "`id`");

$tdatamst_chain_type[".sqlHead"] = "SELECT id,  name,  sort,  update_at,  update_by,  create_at,  create_by,  line_category,  yahoo_junle,  category_id,  sub_category_id1,  english_name";
$tdatamst_chain_type[".sqlFrom"] = "FROM mst_chain_type";
$tdatamst_chain_type[".sqlWhereExpr"] = "";
$tdatamst_chain_type[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamst_chain_type[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamst_chain_type[".arrGroupsPerPage"] = $arrGPP;

$tdatamst_chain_type[".highlightSearchResults"] = true;

$tableKeysmst_chain_type = array();
$tableKeysmst_chain_type[] = "id";
$tdatamst_chain_type[".Keys"] = $tableKeysmst_chain_type;

$tdatamst_chain_type[".listFields"] = array();
$tdatamst_chain_type[".listFields"][] = "id";
$tdatamst_chain_type[".listFields"][] = "name";
$tdatamst_chain_type[".listFields"][] = "english_name";
$tdatamst_chain_type[".listFields"][] = "sort";
$tdatamst_chain_type[".listFields"][] = "line_category";
$tdatamst_chain_type[".listFields"][] = "yahoo_junle";
$tdatamst_chain_type[".listFields"][] = "category_id";
$tdatamst_chain_type[".listFields"][] = "sub_category_id1";
$tdatamst_chain_type[".listFields"][] = "update_by";
$tdatamst_chain_type[".listFields"][] = "update_at";
$tdatamst_chain_type[".listFields"][] = "create_by";
$tdatamst_chain_type[".listFields"][] = "create_at";

$tdatamst_chain_type[".hideMobileList"] = array();


$tdatamst_chain_type[".viewFields"] = array();

$tdatamst_chain_type[".addFields"] = array();

$tdatamst_chain_type[".masterListFields"] = array();
$tdatamst_chain_type[".masterListFields"][] = "id";
$tdatamst_chain_type[".masterListFields"][] = "name";
$tdatamst_chain_type[".masterListFields"][] = "sort";
$tdatamst_chain_type[".masterListFields"][] = "update_at";
$tdatamst_chain_type[".masterListFields"][] = "update_by";
$tdatamst_chain_type[".masterListFields"][] = "create_at";
$tdatamst_chain_type[".masterListFields"][] = "create_by";
$tdatamst_chain_type[".masterListFields"][] = "line_category";
$tdatamst_chain_type[".masterListFields"][] = "yahoo_junle";
$tdatamst_chain_type[".masterListFields"][] = "category_id";
$tdatamst_chain_type[".masterListFields"][] = "sub_category_id1";
$tdatamst_chain_type[".masterListFields"][] = "english_name";

$tdatamst_chain_type[".inlineAddFields"] = array();
$tdatamst_chain_type[".inlineAddFields"][] = "name";
$tdatamst_chain_type[".inlineAddFields"][] = "english_name";
$tdatamst_chain_type[".inlineAddFields"][] = "sort";
$tdatamst_chain_type[".inlineAddFields"][] = "line_category";
$tdatamst_chain_type[".inlineAddFields"][] = "yahoo_junle";
$tdatamst_chain_type[".inlineAddFields"][] = "category_id";
$tdatamst_chain_type[".inlineAddFields"][] = "sub_category_id1";

$tdatamst_chain_type[".editFields"] = array();

$tdatamst_chain_type[".inlineEditFields"] = array();
$tdatamst_chain_type[".inlineEditFields"][] = "name";
$tdatamst_chain_type[".inlineEditFields"][] = "english_name";
$tdatamst_chain_type[".inlineEditFields"][] = "sort";
$tdatamst_chain_type[".inlineEditFields"][] = "line_category";
$tdatamst_chain_type[".inlineEditFields"][] = "yahoo_junle";
$tdatamst_chain_type[".inlineEditFields"][] = "category_id";
$tdatamst_chain_type[".inlineEditFields"][] = "sub_category_id1";

$tdatamst_chain_type[".updateSelectedFields"] = array();


$tdatamst_chain_type[".exportFields"] = array();
$tdatamst_chain_type[".exportFields"][] = "id";
$tdatamst_chain_type[".exportFields"][] = "name";
$tdatamst_chain_type[".exportFields"][] = "sort";
$tdatamst_chain_type[".exportFields"][] = "update_at";
$tdatamst_chain_type[".exportFields"][] = "update_by";
$tdatamst_chain_type[".exportFields"][] = "create_at";
$tdatamst_chain_type[".exportFields"][] = "create_by";
$tdatamst_chain_type[".exportFields"][] = "line_category";
$tdatamst_chain_type[".exportFields"][] = "yahoo_junle";
$tdatamst_chain_type[".exportFields"][] = "category_id";
$tdatamst_chain_type[".exportFields"][] = "sub_category_id1";
$tdatamst_chain_type[".exportFields"][] = "english_name";

$tdatamst_chain_type[".importFields"] = array();
$tdatamst_chain_type[".importFields"][] = "id";
$tdatamst_chain_type[".importFields"][] = "name";
$tdatamst_chain_type[".importFields"][] = "sort";
$tdatamst_chain_type[".importFields"][] = "line_category";
$tdatamst_chain_type[".importFields"][] = "yahoo_junle";
$tdatamst_chain_type[".importFields"][] = "category_id";
$tdatamst_chain_type[".importFields"][] = "sub_category_id1";
$tdatamst_chain_type[".importFields"][] = "english_name";

$tdatamst_chain_type[".printFields"] = array();
$tdatamst_chain_type[".printFields"][] = "id";
$tdatamst_chain_type[".printFields"][] = "name";
$tdatamst_chain_type[".printFields"][] = "sort";
$tdatamst_chain_type[".printFields"][] = "update_at";
$tdatamst_chain_type[".printFields"][] = "update_by";
$tdatamst_chain_type[".printFields"][] = "create_at";
$tdatamst_chain_type[".printFields"][] = "create_by";
$tdatamst_chain_type[".printFields"][] = "line_category";
$tdatamst_chain_type[".printFields"][] = "yahoo_junle";
$tdatamst_chain_type[".printFields"][] = "category_id";
$tdatamst_chain_type[".printFields"][] = "sub_category_id1";
$tdatamst_chain_type[".printFields"][] = "english_name";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "mst_chain_type";
	$fdata["Label"] = GetFieldLabel("mst_chain_type","id");
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




	$tdatamst_chain_type["id"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "mst_chain_type";
	$fdata["Label"] = GetFieldLabel("mst_chain_type","name");
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




	$tdatamst_chain_type["name"] = $fdata;
//	sort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sort";
	$fdata["GoodName"] = "sort";
	$fdata["ownerTable"] = "mst_chain_type";
	$fdata["Label"] = GetFieldLabel("mst_chain_type","sort");
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




	$tdatamst_chain_type["sort"] = $fdata;
//	update_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "update_at";
	$fdata["GoodName"] = "update_at";
	$fdata["ownerTable"] = "mst_chain_type";
	$fdata["Label"] = GetFieldLabel("mst_chain_type","update_at");
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




	$tdatamst_chain_type["update_at"] = $fdata;
//	update_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "update_by";
	$fdata["GoodName"] = "update_by";
	$fdata["ownerTable"] = "mst_chain_type";
	$fdata["Label"] = GetFieldLabel("mst_chain_type","update_by");
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




	$tdatamst_chain_type["update_by"] = $fdata;
//	create_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "create_at";
	$fdata["GoodName"] = "create_at";
	$fdata["ownerTable"] = "mst_chain_type";
	$fdata["Label"] = GetFieldLabel("mst_chain_type","create_at");
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




	$tdatamst_chain_type["create_at"] = $fdata;
//	create_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "create_by";
	$fdata["GoodName"] = "create_by";
	$fdata["ownerTable"] = "mst_chain_type";
	$fdata["Label"] = GetFieldLabel("mst_chain_type","create_by");
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




	$tdatamst_chain_type["create_by"] = $fdata;
//	line_category
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "line_category";
	$fdata["GoodName"] = "line_category";
	$fdata["ownerTable"] = "mst_chain_type";
	$fdata["Label"] = GetFieldLabel("mst_chain_type","line_category");
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




	$tdatamst_chain_type["line_category"] = $fdata;
//	yahoo_junle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "yahoo_junle";
	$fdata["GoodName"] = "yahoo_junle";
	$fdata["ownerTable"] = "mst_chain_type";
	$fdata["Label"] = GetFieldLabel("mst_chain_type","yahoo_junle");
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




	$tdatamst_chain_type["yahoo_junle"] = $fdata;
//	category_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "category_id";
	$fdata["GoodName"] = "category_id";
	$fdata["ownerTable"] = "mst_chain_type";
	$fdata["Label"] = GetFieldLabel("mst_chain_type","category_id");
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




	$tdatamst_chain_type["category_id"] = $fdata;
//	sub_category_id1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "sub_category_id1";
	$fdata["GoodName"] = "sub_category_id1";
	$fdata["ownerTable"] = "mst_chain_type";
	$fdata["Label"] = GetFieldLabel("mst_chain_type","sub_category_id1");
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




	$tdatamst_chain_type["sub_category_id1"] = $fdata;
//	english_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "english_name";
	$fdata["GoodName"] = "english_name";
	$fdata["ownerTable"] = "mst_chain_type";
	$fdata["Label"] = GetFieldLabel("mst_chain_type","english_name");
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




	$tdatamst_chain_type["english_name"] = $fdata;


$tables_data["mst_chain_type"]=&$tdatamst_chain_type;
$field_labels["mst_chain_type"] = &$fieldLabelsmst_chain_type;
$fieldToolTips["mst_chain_type"] = &$fieldToolTipsmst_chain_type;
$placeHolders["mst_chain_type"] = &$placeHoldersmst_chain_type;
$page_titles["mst_chain_type"] = &$pageTitlesmst_chain_type;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mst_chain_type"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mst_chain_type"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mst_chain_type()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  name,  sort,  update_at,  update_by,  create_at,  create_by,  line_category,  yahoo_junle,  category_id,  sub_category_id1,  english_name";
$proto0["m_strFrom"] = "FROM mst_chain_type";
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
	"m_strTable" => "mst_chain_type",
	"m_srcTableName" => "mst_chain_type"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "mst_chain_type";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "mst_chain_type",
	"m_srcTableName" => "mst_chain_type"
));

$proto8["m_sql"] = "name";
$proto8["m_srcTableName"] = "mst_chain_type";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "sort",
	"m_strTable" => "mst_chain_type",
	"m_srcTableName" => "mst_chain_type"
));

$proto10["m_sql"] = "sort";
$proto10["m_srcTableName"] = "mst_chain_type";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "update_at",
	"m_strTable" => "mst_chain_type",
	"m_srcTableName" => "mst_chain_type"
));

$proto12["m_sql"] = "update_at";
$proto12["m_srcTableName"] = "mst_chain_type";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "update_by",
	"m_strTable" => "mst_chain_type",
	"m_srcTableName" => "mst_chain_type"
));

$proto14["m_sql"] = "update_by";
$proto14["m_srcTableName"] = "mst_chain_type";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "create_at",
	"m_strTable" => "mst_chain_type",
	"m_srcTableName" => "mst_chain_type"
));

$proto16["m_sql"] = "create_at";
$proto16["m_srcTableName"] = "mst_chain_type";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "create_by",
	"m_strTable" => "mst_chain_type",
	"m_srcTableName" => "mst_chain_type"
));

$proto18["m_sql"] = "create_by";
$proto18["m_srcTableName"] = "mst_chain_type";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "line_category",
	"m_strTable" => "mst_chain_type",
	"m_srcTableName" => "mst_chain_type"
));

$proto20["m_sql"] = "line_category";
$proto20["m_srcTableName"] = "mst_chain_type";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_junle",
	"m_strTable" => "mst_chain_type",
	"m_srcTableName" => "mst_chain_type"
));

$proto22["m_sql"] = "yahoo_junle";
$proto22["m_srcTableName"] = "mst_chain_type";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "category_id",
	"m_strTable" => "mst_chain_type",
	"m_srcTableName" => "mst_chain_type"
));

$proto24["m_sql"] = "category_id";
$proto24["m_srcTableName"] = "mst_chain_type";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "sub_category_id1",
	"m_strTable" => "mst_chain_type",
	"m_srcTableName" => "mst_chain_type"
));

$proto26["m_sql"] = "sub_category_id1";
$proto26["m_srcTableName"] = "mst_chain_type";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "english_name",
	"m_strTable" => "mst_chain_type",
	"m_srcTableName" => "mst_chain_type"
));

$proto28["m_sql"] = "english_name";
$proto28["m_srcTableName"] = "mst_chain_type";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "mst_chain_type";
$proto31["m_srcTableName"] = "mst_chain_type";
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
$proto30["m_sql"] = "mst_chain_type";
$proto30["m_alias"] = "";
$proto30["m_srcTableName"] = "mst_chain_type";
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
	"m_strTable" => "mst_chain_type",
	"m_srcTableName" => "mst_chain_type"
));

$proto34["m_column"]=$obj;
$proto34["m_bAsc"] = 0;
$proto34["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto34);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="mst_chain_type";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mst_chain_type = createSqlQuery_mst_chain_type();


	
		;

												

$tdatamst_chain_type[".sqlquery"] = $queryData_mst_chain_type;

include_once(getabspath("include/mst_chain_type_events.php"));
$tableEvents["mst_chain_type"] = new eventclass_mst_chain_type;
$tdatamst_chain_type[".hasEvents"] = true;

?>