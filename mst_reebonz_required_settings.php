<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamst_reebonz_required = array();
	$tdatamst_reebonz_required[".truncateText"] = true;
	$tdatamst_reebonz_required[".NumberOfChars"] = 80;
	$tdatamst_reebonz_required[".ShortName"] = "mst_reebonz_required";
	$tdatamst_reebonz_required[".OwnerID"] = "";
	$tdatamst_reebonz_required[".OriginalTable"] = "mst_reebonz_required";

//	field labels
$fieldLabelsmst_reebonz_required = array();
$fieldToolTipsmst_reebonz_required = array();
$pageTitlesmst_reebonz_required = array();
$placeHoldersmst_reebonz_required = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmst_reebonz_required["Japanese"] = array();
	$fieldToolTipsmst_reebonz_required["Japanese"] = array();
	$placeHoldersmst_reebonz_required["Japanese"] = array();
	$pageTitlesmst_reebonz_required["Japanese"] = array();
	$fieldLabelsmst_reebonz_required["Japanese"]["id"] = "Id";
	$fieldToolTipsmst_reebonz_required["Japanese"]["id"] = "";
	$placeHoldersmst_reebonz_required["Japanese"]["id"] = "";
	$fieldLabelsmst_reebonz_required["Japanese"]["field_name"] = "ワサビ項目名";
	$fieldToolTipsmst_reebonz_required["Japanese"]["field_name"] = "";
	$placeHoldersmst_reebonz_required["Japanese"]["field_name"] = "";
	$fieldLabelsmst_reebonz_required["Japanese"]["sort"] = "Sort";
	$fieldToolTipsmst_reebonz_required["Japanese"]["sort"] = "";
	$placeHoldersmst_reebonz_required["Japanese"]["sort"] = "";
	$fieldLabelsmst_reebonz_required["Japanese"]["category_id"] = "大カテゴリー";
	$fieldToolTipsmst_reebonz_required["Japanese"]["category_id"] = "";
	$placeHoldersmst_reebonz_required["Japanese"]["category_id"] = "";
	$fieldLabelsmst_reebonz_required["Japanese"]["sub_category_id1"] = "中カテゴリー";
	$fieldToolTipsmst_reebonz_required["Japanese"]["sub_category_id1"] = "";
	$placeHoldersmst_reebonz_required["Japanese"]["sub_category_id1"] = "";
	$fieldLabelsmst_reebonz_required["Japanese"]["sex"] = "性別";
	$fieldToolTipsmst_reebonz_required["Japanese"]["sex"] = "";
	$placeHoldersmst_reebonz_required["Japanese"]["sex"] = "";
	$fieldLabelsmst_reebonz_required["Japanese"]["update_by"] = "更新者";
	$fieldToolTipsmst_reebonz_required["Japanese"]["update_by"] = "";
	$placeHoldersmst_reebonz_required["Japanese"]["update_by"] = "";
	$fieldLabelsmst_reebonz_required["Japanese"]["update_at"] = "更新日";
	$fieldToolTipsmst_reebonz_required["Japanese"]["update_at"] = "";
	$placeHoldersmst_reebonz_required["Japanese"]["update_at"] = "";
	$fieldLabelsmst_reebonz_required["Japanese"]["create_by"] = "登録者";
	$fieldToolTipsmst_reebonz_required["Japanese"]["create_by"] = "";
	$placeHoldersmst_reebonz_required["Japanese"]["create_by"] = "";
	$fieldLabelsmst_reebonz_required["Japanese"]["create_at"] = "登録日";
	$fieldToolTipsmst_reebonz_required["Japanese"]["create_at"] = "";
	$placeHoldersmst_reebonz_required["Japanese"]["create_at"] = "";
	if (count($fieldToolTipsmst_reebonz_required["Japanese"]))
		$tdatamst_reebonz_required[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmst_reebonz_required[""] = array();
	$fieldToolTipsmst_reebonz_required[""] = array();
	$placeHoldersmst_reebonz_required[""] = array();
	$pageTitlesmst_reebonz_required[""] = array();
	$fieldLabelsmst_reebonz_required[""]["id"] = "Id";
	$fieldToolTipsmst_reebonz_required[""]["id"] = "";
	$placeHoldersmst_reebonz_required[""]["id"] = "";
	$fieldLabelsmst_reebonz_required[""]["field_name"] = "Field Name";
	$fieldToolTipsmst_reebonz_required[""]["field_name"] = "";
	$placeHoldersmst_reebonz_required[""]["field_name"] = "";
	$fieldLabelsmst_reebonz_required[""]["sort"] = "Sort";
	$fieldToolTipsmst_reebonz_required[""]["sort"] = "";
	$placeHoldersmst_reebonz_required[""]["sort"] = "";
	$fieldLabelsmst_reebonz_required[""]["category_id"] = "Category Id";
	$fieldToolTipsmst_reebonz_required[""]["category_id"] = "";
	$placeHoldersmst_reebonz_required[""]["category_id"] = "";
	$fieldLabelsmst_reebonz_required[""]["sub_category_id1"] = "Sub Category Id1";
	$fieldToolTipsmst_reebonz_required[""]["sub_category_id1"] = "";
	$placeHoldersmst_reebonz_required[""]["sub_category_id1"] = "";
	$fieldLabelsmst_reebonz_required[""]["sex"] = "Sex";
	$fieldToolTipsmst_reebonz_required[""]["sex"] = "";
	$placeHoldersmst_reebonz_required[""]["sex"] = "";
	$fieldLabelsmst_reebonz_required[""]["update_by"] = "Update By";
	$fieldToolTipsmst_reebonz_required[""]["update_by"] = "";
	$placeHoldersmst_reebonz_required[""]["update_by"] = "";
	$fieldLabelsmst_reebonz_required[""]["update_at"] = "Update At";
	$fieldToolTipsmst_reebonz_required[""]["update_at"] = "";
	$placeHoldersmst_reebonz_required[""]["update_at"] = "";
	$fieldLabelsmst_reebonz_required[""]["create_by"] = "Create By";
	$fieldToolTipsmst_reebonz_required[""]["create_by"] = "";
	$placeHoldersmst_reebonz_required[""]["create_by"] = "";
	$fieldLabelsmst_reebonz_required[""]["create_at"] = "Create At";
	$fieldToolTipsmst_reebonz_required[""]["create_at"] = "";
	$placeHoldersmst_reebonz_required[""]["create_at"] = "";
	if (count($fieldToolTipsmst_reebonz_required[""]))
		$tdatamst_reebonz_required[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmst_reebonz_required["English"] = array();
	$fieldToolTipsmst_reebonz_required["English"] = array();
	$placeHoldersmst_reebonz_required["English"] = array();
	$pageTitlesmst_reebonz_required["English"] = array();
	$fieldLabelsmst_reebonz_required["English"]["id"] = "Id";
	$fieldToolTipsmst_reebonz_required["English"]["id"] = "";
	$placeHoldersmst_reebonz_required["English"]["id"] = "";
	$fieldLabelsmst_reebonz_required["English"]["field_name"] = "Field Name";
	$fieldToolTipsmst_reebonz_required["English"]["field_name"] = "";
	$placeHoldersmst_reebonz_required["English"]["field_name"] = "";
	$fieldLabelsmst_reebonz_required["English"]["sort"] = "Sort";
	$fieldToolTipsmst_reebonz_required["English"]["sort"] = "";
	$placeHoldersmst_reebonz_required["English"]["sort"] = "";
	$fieldLabelsmst_reebonz_required["English"]["category_id"] = "Category Id";
	$fieldToolTipsmst_reebonz_required["English"]["category_id"] = "";
	$placeHoldersmst_reebonz_required["English"]["category_id"] = "";
	$fieldLabelsmst_reebonz_required["English"]["sub_category_id1"] = "Sub Category Id1";
	$fieldToolTipsmst_reebonz_required["English"]["sub_category_id1"] = "";
	$placeHoldersmst_reebonz_required["English"]["sub_category_id1"] = "";
	$fieldLabelsmst_reebonz_required["English"]["sex"] = "Sex";
	$fieldToolTipsmst_reebonz_required["English"]["sex"] = "";
	$placeHoldersmst_reebonz_required["English"]["sex"] = "";
	$fieldLabelsmst_reebonz_required["English"]["update_by"] = "Update By";
	$fieldToolTipsmst_reebonz_required["English"]["update_by"] = "";
	$placeHoldersmst_reebonz_required["English"]["update_by"] = "";
	$fieldLabelsmst_reebonz_required["English"]["update_at"] = "Update At";
	$fieldToolTipsmst_reebonz_required["English"]["update_at"] = "";
	$placeHoldersmst_reebonz_required["English"]["update_at"] = "";
	$fieldLabelsmst_reebonz_required["English"]["create_by"] = "Create By";
	$fieldToolTipsmst_reebonz_required["English"]["create_by"] = "";
	$placeHoldersmst_reebonz_required["English"]["create_by"] = "";
	$fieldLabelsmst_reebonz_required["English"]["create_at"] = "Create At";
	$fieldToolTipsmst_reebonz_required["English"]["create_at"] = "";
	$placeHoldersmst_reebonz_required["English"]["create_at"] = "";
	if (count($fieldToolTipsmst_reebonz_required["English"]))
		$tdatamst_reebonz_required[".isUseToolTips"] = true;
}


	$tdatamst_reebonz_required[".NCSearch"] = true;



$tdatamst_reebonz_required[".shortTableName"] = "mst_reebonz_required";
$tdatamst_reebonz_required[".nSecOptions"] = 0;
$tdatamst_reebonz_required[".recsPerRowPrint"] = 1;
$tdatamst_reebonz_required[".mainTableOwnerID"] = "";
$tdatamst_reebonz_required[".moveNext"] = 1;
$tdatamst_reebonz_required[".entityType"] = 0;

$tdatamst_reebonz_required[".strOriginalTableName"] = "mst_reebonz_required";

	



$tdatamst_reebonz_required[".showAddInPopup"] = false;

$tdatamst_reebonz_required[".showEditInPopup"] = false;

$tdatamst_reebonz_required[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamst_reebonz_required[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamst_reebonz_required[".fieldsForRegister"] = array();

$tdatamst_reebonz_required[".listAjax"] = false;

	$tdatamst_reebonz_required[".audit"] = true;

	$tdatamst_reebonz_required[".locking"] = false;



$tdatamst_reebonz_required[".list"] = true;

$tdatamst_reebonz_required[".inlineEdit"] = true;


$tdatamst_reebonz_required[".reorderRecordsByHeader"] = true;



$tdatamst_reebonz_required[".inlineAdd"] = true;

$tdatamst_reebonz_required[".import"] = true;

$tdatamst_reebonz_required[".exportTo"] = true;

$tdatamst_reebonz_required[".printFriendly"] = true;

$tdatamst_reebonz_required[".delete"] = true;

$tdatamst_reebonz_required[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamst_reebonz_required[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamst_reebonz_required[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamst_reebonz_required[".searchSaving"] = false;
//

$tdatamst_reebonz_required[".showSearchPanel"] = true;
		$tdatamst_reebonz_required[".flexibleSearch"] = true;

$tdatamst_reebonz_required[".isUseAjaxSuggest"] = true;

$tdatamst_reebonz_required[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatamst_reebonz_required[".ajaxCodeSnippetAdded"] = false;

$tdatamst_reebonz_required[".buttonsAdded"] = false;

$tdatamst_reebonz_required[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamst_reebonz_required[".isUseTimeForSearch"] = false;





$tdatamst_reebonz_required[".allSearchFields"] = array();
$tdatamst_reebonz_required[".filterFields"] = array();
$tdatamst_reebonz_required[".requiredSearchFields"] = array();

$tdatamst_reebonz_required[".allSearchFields"][] = "id";
	$tdatamst_reebonz_required[".allSearchFields"][] = "field_name";
	$tdatamst_reebonz_required[".allSearchFields"][] = "sort";
	$tdatamst_reebonz_required[".allSearchFields"][] = "category_id";
	$tdatamst_reebonz_required[".allSearchFields"][] = "sub_category_id1";
	$tdatamst_reebonz_required[".allSearchFields"][] = "sex";
	$tdatamst_reebonz_required[".allSearchFields"][] = "update_by";
	$tdatamst_reebonz_required[".allSearchFields"][] = "update_at";
	$tdatamst_reebonz_required[".allSearchFields"][] = "create_by";
	$tdatamst_reebonz_required[".allSearchFields"][] = "create_at";
	

$tdatamst_reebonz_required[".googleLikeFields"] = array();
$tdatamst_reebonz_required[".googleLikeFields"][] = "id";
$tdatamst_reebonz_required[".googleLikeFields"][] = "field_name";
$tdatamst_reebonz_required[".googleLikeFields"][] = "sort";
$tdatamst_reebonz_required[".googleLikeFields"][] = "category_id";
$tdatamst_reebonz_required[".googleLikeFields"][] = "sub_category_id1";
$tdatamst_reebonz_required[".googleLikeFields"][] = "sex";
$tdatamst_reebonz_required[".googleLikeFields"][] = "update_by";
$tdatamst_reebonz_required[".googleLikeFields"][] = "update_at";
$tdatamst_reebonz_required[".googleLikeFields"][] = "create_by";
$tdatamst_reebonz_required[".googleLikeFields"][] = "create_at";

$tdatamst_reebonz_required[".panelSearchFields"] = array();
$tdatamst_reebonz_required[".searchPanelOptions"] = array();
$tdatamst_reebonz_required[".panelSearchFields"][] = "id";
	$tdatamst_reebonz_required[".panelSearchFields"][] = "field_name";
	$tdatamst_reebonz_required[".panelSearchFields"][] = "sort";
	$tdatamst_reebonz_required[".panelSearchFields"][] = "category_id";
	$tdatamst_reebonz_required[".panelSearchFields"][] = "sub_category_id1";
	$tdatamst_reebonz_required[".panelSearchFields"][] = "sex";
	
$tdatamst_reebonz_required[".advSearchFields"] = array();
$tdatamst_reebonz_required[".advSearchFields"][] = "id";
$tdatamst_reebonz_required[".advSearchFields"][] = "field_name";
$tdatamst_reebonz_required[".advSearchFields"][] = "sort";
$tdatamst_reebonz_required[".advSearchFields"][] = "category_id";
$tdatamst_reebonz_required[".advSearchFields"][] = "sub_category_id1";
$tdatamst_reebonz_required[".advSearchFields"][] = "sex";
$tdatamst_reebonz_required[".advSearchFields"][] = "update_by";
$tdatamst_reebonz_required[".advSearchFields"][] = "update_at";
$tdatamst_reebonz_required[".advSearchFields"][] = "create_by";
$tdatamst_reebonz_required[".advSearchFields"][] = "create_at";

$tdatamst_reebonz_required[".tableType"] = "list";

$tdatamst_reebonz_required[".printerPageOrientation"] = 0;
$tdatamst_reebonz_required[".nPrinterPageScale"] = 100;

$tdatamst_reebonz_required[".nPrinterSplitRecords"] = 40;

$tdatamst_reebonz_required[".nPrinterPDFSplitRecords"] = 40;



$tdatamst_reebonz_required[".geocodingEnabled"] = false;





$tdatamst_reebonz_required[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamst_reebonz_required[".pageSize"] = 100;

$tdatamst_reebonz_required[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY sort";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamst_reebonz_required[".strOrderBy"] = $tstrOrderBy;

$tdatamst_reebonz_required[".orderindexes"] = array();
$tdatamst_reebonz_required[".orderindexes"][] = array(3, (1 ? "ASC" : "DESC"), "`sort`");

$tdatamst_reebonz_required[".sqlHead"] = "SELECT id,  field_name,  sort,  category_id,  sub_category_id1,  sex,  update_by,  update_at,  create_by,  create_at";
$tdatamst_reebonz_required[".sqlFrom"] = "FROM mst_reebonz_required";
$tdatamst_reebonz_required[".sqlWhereExpr"] = "";
$tdatamst_reebonz_required[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamst_reebonz_required[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamst_reebonz_required[".arrGroupsPerPage"] = $arrGPP;

$tdatamst_reebonz_required[".highlightSearchResults"] = true;

$tableKeysmst_reebonz_required = array();
$tableKeysmst_reebonz_required[] = "id";
$tdatamst_reebonz_required[".Keys"] = $tableKeysmst_reebonz_required;

$tdatamst_reebonz_required[".listFields"] = array();
$tdatamst_reebonz_required[".listFields"][] = "id";
$tdatamst_reebonz_required[".listFields"][] = "field_name";
$tdatamst_reebonz_required[".listFields"][] = "sort";
$tdatamst_reebonz_required[".listFields"][] = "category_id";
$tdatamst_reebonz_required[".listFields"][] = "sub_category_id1";
$tdatamst_reebonz_required[".listFields"][] = "sex";
$tdatamst_reebonz_required[".listFields"][] = "update_by";
$tdatamst_reebonz_required[".listFields"][] = "update_at";
$tdatamst_reebonz_required[".listFields"][] = "create_by";
$tdatamst_reebonz_required[".listFields"][] = "create_at";

$tdatamst_reebonz_required[".hideMobileList"] = array();


$tdatamst_reebonz_required[".viewFields"] = array();

$tdatamst_reebonz_required[".addFields"] = array();

$tdatamst_reebonz_required[".masterListFields"] = array();
$tdatamst_reebonz_required[".masterListFields"][] = "id";
$tdatamst_reebonz_required[".masterListFields"][] = "field_name";
$tdatamst_reebonz_required[".masterListFields"][] = "sort";
$tdatamst_reebonz_required[".masterListFields"][] = "category_id";
$tdatamst_reebonz_required[".masterListFields"][] = "sub_category_id1";
$tdatamst_reebonz_required[".masterListFields"][] = "sex";
$tdatamst_reebonz_required[".masterListFields"][] = "update_by";
$tdatamst_reebonz_required[".masterListFields"][] = "update_at";
$tdatamst_reebonz_required[".masterListFields"][] = "create_by";
$tdatamst_reebonz_required[".masterListFields"][] = "create_at";

$tdatamst_reebonz_required[".inlineAddFields"] = array();
$tdatamst_reebonz_required[".inlineAddFields"][] = "field_name";
$tdatamst_reebonz_required[".inlineAddFields"][] = "sort";
$tdatamst_reebonz_required[".inlineAddFields"][] = "category_id";
$tdatamst_reebonz_required[".inlineAddFields"][] = "sub_category_id1";
$tdatamst_reebonz_required[".inlineAddFields"][] = "sex";

$tdatamst_reebonz_required[".editFields"] = array();

$tdatamst_reebonz_required[".inlineEditFields"] = array();
$tdatamst_reebonz_required[".inlineEditFields"][] = "field_name";
$tdatamst_reebonz_required[".inlineEditFields"][] = "sort";
$tdatamst_reebonz_required[".inlineEditFields"][] = "category_id";
$tdatamst_reebonz_required[".inlineEditFields"][] = "sub_category_id1";
$tdatamst_reebonz_required[".inlineEditFields"][] = "sex";

$tdatamst_reebonz_required[".updateSelectedFields"] = array();


$tdatamst_reebonz_required[".exportFields"] = array();
$tdatamst_reebonz_required[".exportFields"][] = "id";
$tdatamst_reebonz_required[".exportFields"][] = "field_name";
$tdatamst_reebonz_required[".exportFields"][] = "sort";
$tdatamst_reebonz_required[".exportFields"][] = "category_id";
$tdatamst_reebonz_required[".exportFields"][] = "sub_category_id1";
$tdatamst_reebonz_required[".exportFields"][] = "sex";
$tdatamst_reebonz_required[".exportFields"][] = "update_by";
$tdatamst_reebonz_required[".exportFields"][] = "update_at";
$tdatamst_reebonz_required[".exportFields"][] = "create_by";
$tdatamst_reebonz_required[".exportFields"][] = "create_at";

$tdatamst_reebonz_required[".importFields"] = array();
$tdatamst_reebonz_required[".importFields"][] = "id";
$tdatamst_reebonz_required[".importFields"][] = "field_name";
$tdatamst_reebonz_required[".importFields"][] = "sort";
$tdatamst_reebonz_required[".importFields"][] = "category_id";
$tdatamst_reebonz_required[".importFields"][] = "sub_category_id1";
$tdatamst_reebonz_required[".importFields"][] = "sex";
$tdatamst_reebonz_required[".importFields"][] = "update_by";
$tdatamst_reebonz_required[".importFields"][] = "update_at";
$tdatamst_reebonz_required[".importFields"][] = "create_by";
$tdatamst_reebonz_required[".importFields"][] = "create_at";

$tdatamst_reebonz_required[".printFields"] = array();
$tdatamst_reebonz_required[".printFields"][] = "id";
$tdatamst_reebonz_required[".printFields"][] = "field_name";
$tdatamst_reebonz_required[".printFields"][] = "sort";
$tdatamst_reebonz_required[".printFields"][] = "category_id";
$tdatamst_reebonz_required[".printFields"][] = "sub_category_id1";
$tdatamst_reebonz_required[".printFields"][] = "sex";
$tdatamst_reebonz_required[".printFields"][] = "update_by";
$tdatamst_reebonz_required[".printFields"][] = "update_at";
$tdatamst_reebonz_required[".printFields"][] = "create_by";
$tdatamst_reebonz_required[".printFields"][] = "create_at";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "mst_reebonz_required";
	$fdata["Label"] = GetFieldLabel("mst_reebonz_required","id");
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




	$tdatamst_reebonz_required["id"] = $fdata;
//	field_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "field_name";
	$fdata["GoodName"] = "field_name";
	$fdata["ownerTable"] = "mst_reebonz_required";
	$fdata["Label"] = GetFieldLabel("mst_reebonz_required","field_name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "field_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "field_name";

	
	
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
	$edata["LookupTable"] = "mst_wasabi";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "category";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "category";

	
	$edata["LookupOrderBy"] = "category";

	
	
	
	

	
	
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




	$tdatamst_reebonz_required["field_name"] = $fdata;
//	sort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sort";
	$fdata["GoodName"] = "sort";
	$fdata["ownerTable"] = "mst_reebonz_required";
	$fdata["Label"] = GetFieldLabel("mst_reebonz_required","sort");
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




	$tdatamst_reebonz_required["sort"] = $fdata;
//	category_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "category_id";
	$fdata["GoodName"] = "category_id";
	$fdata["ownerTable"] = "mst_reebonz_required";
	$fdata["Label"] = GetFieldLabel("mst_reebonz_required","category_id");
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




	$tdatamst_reebonz_required["category_id"] = $fdata;
//	sub_category_id1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "sub_category_id1";
	$fdata["GoodName"] = "sub_category_id1";
	$fdata["ownerTable"] = "mst_reebonz_required";
	$fdata["Label"] = GetFieldLabel("mst_reebonz_required","sub_category_id1");
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




	$tdatamst_reebonz_required["sub_category_id1"] = $fdata;
//	sex
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "sex";
	$fdata["GoodName"] = "sex";
	$fdata["ownerTable"] = "mst_reebonz_required";
	$fdata["Label"] = GetFieldLabel("mst_reebonz_required","sex");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "sex";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sex";

	
	
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
		$edata["LookupType"] = 0;
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "ALL";
	$edata["LookupValues"][] = "Womens";

	
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




	$tdatamst_reebonz_required["sex"] = $fdata;
//	update_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "update_by";
	$fdata["GoodName"] = "update_by";
	$fdata["ownerTable"] = "mst_reebonz_required";
	$fdata["Label"] = GetFieldLabel("mst_reebonz_required","update_by");
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




	$tdatamst_reebonz_required["update_by"] = $fdata;
//	update_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "update_at";
	$fdata["GoodName"] = "update_at";
	$fdata["ownerTable"] = "mst_reebonz_required";
	$fdata["Label"] = GetFieldLabel("mst_reebonz_required","update_at");
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




	$tdatamst_reebonz_required["update_at"] = $fdata;
//	create_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "create_by";
	$fdata["GoodName"] = "create_by";
	$fdata["ownerTable"] = "mst_reebonz_required";
	$fdata["Label"] = GetFieldLabel("mst_reebonz_required","create_by");
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




	$tdatamst_reebonz_required["create_by"] = $fdata;
//	create_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "create_at";
	$fdata["GoodName"] = "create_at";
	$fdata["ownerTable"] = "mst_reebonz_required";
	$fdata["Label"] = GetFieldLabel("mst_reebonz_required","create_at");
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




	$tdatamst_reebonz_required["create_at"] = $fdata;


$tables_data["mst_reebonz_required"]=&$tdatamst_reebonz_required;
$field_labels["mst_reebonz_required"] = &$fieldLabelsmst_reebonz_required;
$fieldToolTips["mst_reebonz_required"] = &$fieldToolTipsmst_reebonz_required;
$placeHolders["mst_reebonz_required"] = &$placeHoldersmst_reebonz_required;
$page_titles["mst_reebonz_required"] = &$pageTitlesmst_reebonz_required;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mst_reebonz_required"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mst_reebonz_required"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mst_reebonz_required()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  field_name,  sort,  category_id,  sub_category_id1,  sex,  update_by,  update_at,  create_by,  create_at";
$proto0["m_strFrom"] = "FROM mst_reebonz_required";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY sort";
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
	"m_strTable" => "mst_reebonz_required",
	"m_srcTableName" => "mst_reebonz_required"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "mst_reebonz_required";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "field_name",
	"m_strTable" => "mst_reebonz_required",
	"m_srcTableName" => "mst_reebonz_required"
));

$proto8["m_sql"] = "field_name";
$proto8["m_srcTableName"] = "mst_reebonz_required";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "sort",
	"m_strTable" => "mst_reebonz_required",
	"m_srcTableName" => "mst_reebonz_required"
));

$proto10["m_sql"] = "sort";
$proto10["m_srcTableName"] = "mst_reebonz_required";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "category_id",
	"m_strTable" => "mst_reebonz_required",
	"m_srcTableName" => "mst_reebonz_required"
));

$proto12["m_sql"] = "category_id";
$proto12["m_srcTableName"] = "mst_reebonz_required";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "sub_category_id1",
	"m_strTable" => "mst_reebonz_required",
	"m_srcTableName" => "mst_reebonz_required"
));

$proto14["m_sql"] = "sub_category_id1";
$proto14["m_srcTableName"] = "mst_reebonz_required";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "sex",
	"m_strTable" => "mst_reebonz_required",
	"m_srcTableName" => "mst_reebonz_required"
));

$proto16["m_sql"] = "sex";
$proto16["m_srcTableName"] = "mst_reebonz_required";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "update_by",
	"m_strTable" => "mst_reebonz_required",
	"m_srcTableName" => "mst_reebonz_required"
));

$proto18["m_sql"] = "update_by";
$proto18["m_srcTableName"] = "mst_reebonz_required";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "update_at",
	"m_strTable" => "mst_reebonz_required",
	"m_srcTableName" => "mst_reebonz_required"
));

$proto20["m_sql"] = "update_at";
$proto20["m_srcTableName"] = "mst_reebonz_required";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "create_by",
	"m_strTable" => "mst_reebonz_required",
	"m_srcTableName" => "mst_reebonz_required"
));

$proto22["m_sql"] = "create_by";
$proto22["m_srcTableName"] = "mst_reebonz_required";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "create_at",
	"m_strTable" => "mst_reebonz_required",
	"m_srcTableName" => "mst_reebonz_required"
));

$proto24["m_sql"] = "create_at";
$proto24["m_srcTableName"] = "mst_reebonz_required";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "mst_reebonz_required";
$proto27["m_srcTableName"] = "mst_reebonz_required";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "id";
$proto27["m_columns"][] = "field_name";
$proto27["m_columns"][] = "sort";
$proto27["m_columns"][] = "category_id";
$proto27["m_columns"][] = "sub_category_id1";
$proto27["m_columns"][] = "sex";
$proto27["m_columns"][] = "update_by";
$proto27["m_columns"][] = "update_at";
$proto27["m_columns"][] = "create_by";
$proto27["m_columns"][] = "create_at";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "mst_reebonz_required";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "mst_reebonz_required";
$proto28=array();
$proto28["m_sql"] = "";
$proto28["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto28["m_column"]=$obj;
$proto28["m_contained"] = array();
$proto28["m_strCase"] = "";
$proto28["m_havingmode"] = false;
$proto28["m_inBrackets"] = false;
$proto28["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto28);

$proto26["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto26);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto30=array();
						$obj = new SQLField(array(
	"m_strName" => "sort",
	"m_strTable" => "mst_reebonz_required",
	"m_srcTableName" => "mst_reebonz_required"
));

$proto30["m_column"]=$obj;
$proto30["m_bAsc"] = 1;
$proto30["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto30);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="mst_reebonz_required";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mst_reebonz_required = createSqlQuery_mst_reebonz_required();


	
		;

										

$tdatamst_reebonz_required[".sqlquery"] = $queryData_mst_reebonz_required;

include_once(getabspath("include/mst_reebonz_required_events.php"));
$tableEvents["mst_reebonz_required"] = new eventclass_mst_reebonz_required;
$tdatamst_reebonz_required[".hasEvents"] = true;

?>