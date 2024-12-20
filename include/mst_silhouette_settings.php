<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamst_silhouette = array();
	$tdatamst_silhouette[".truncateText"] = true;
	$tdatamst_silhouette[".NumberOfChars"] = 80;
	$tdatamst_silhouette[".ShortName"] = "mst_silhouette";
	$tdatamst_silhouette[".OwnerID"] = "";
	$tdatamst_silhouette[".OriginalTable"] = "mst_silhouette";

//	field labels
$fieldLabelsmst_silhouette = array();
$fieldToolTipsmst_silhouette = array();
$pageTitlesmst_silhouette = array();
$placeHoldersmst_silhouette = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmst_silhouette["Japanese"] = array();
	$fieldToolTipsmst_silhouette["Japanese"] = array();
	$placeHoldersmst_silhouette["Japanese"] = array();
	$pageTitlesmst_silhouette["Japanese"] = array();
	$fieldLabelsmst_silhouette["Japanese"]["id"] = "Id";
	$fieldToolTipsmst_silhouette["Japanese"]["id"] = "";
	$placeHoldersmst_silhouette["Japanese"]["id"] = "";
	$fieldLabelsmst_silhouette["Japanese"]["name"] = "Name";
	$fieldToolTipsmst_silhouette["Japanese"]["name"] = "";
	$placeHoldersmst_silhouette["Japanese"]["name"] = "";
	$fieldLabelsmst_silhouette["Japanese"]["english_name"] = "English Name";
	$fieldToolTipsmst_silhouette["Japanese"]["english_name"] = "";
	$placeHoldersmst_silhouette["Japanese"]["english_name"] = "";
	$fieldLabelsmst_silhouette["Japanese"]["sort"] = "Sort";
	$fieldToolTipsmst_silhouette["Japanese"]["sort"] = "";
	$placeHoldersmst_silhouette["Japanese"]["sort"] = "";
	$fieldLabelsmst_silhouette["Japanese"]["line_category"] = "Line Category";
	$fieldToolTipsmst_silhouette["Japanese"]["line_category"] = "";
	$placeHoldersmst_silhouette["Japanese"]["line_category"] = "";
	$fieldLabelsmst_silhouette["Japanese"]["yahoo_junle"] = "Yahoo Junle";
	$fieldToolTipsmst_silhouette["Japanese"]["yahoo_junle"] = "";
	$placeHoldersmst_silhouette["Japanese"]["yahoo_junle"] = "";
	$fieldLabelsmst_silhouette["Japanese"]["category_id"] = "Category Id";
	$fieldToolTipsmst_silhouette["Japanese"]["category_id"] = "";
	$placeHoldersmst_silhouette["Japanese"]["category_id"] = "";
	$fieldLabelsmst_silhouette["Japanese"]["sub_category_id1"] = "Sub Category Id1";
	$fieldToolTipsmst_silhouette["Japanese"]["sub_category_id1"] = "";
	$placeHoldersmst_silhouette["Japanese"]["sub_category_id1"] = "";
	$fieldLabelsmst_silhouette["Japanese"]["update_by"] = "Update By";
	$fieldToolTipsmst_silhouette["Japanese"]["update_by"] = "";
	$placeHoldersmst_silhouette["Japanese"]["update_by"] = "";
	$fieldLabelsmst_silhouette["Japanese"]["update_at"] = "Update At";
	$fieldToolTipsmst_silhouette["Japanese"]["update_at"] = "";
	$placeHoldersmst_silhouette["Japanese"]["update_at"] = "";
	$fieldLabelsmst_silhouette["Japanese"]["create_by"] = "Create By";
	$fieldToolTipsmst_silhouette["Japanese"]["create_by"] = "";
	$placeHoldersmst_silhouette["Japanese"]["create_by"] = "";
	$fieldLabelsmst_silhouette["Japanese"]["create_at"] = "Create At";
	$fieldToolTipsmst_silhouette["Japanese"]["create_at"] = "";
	$placeHoldersmst_silhouette["Japanese"]["create_at"] = "";
	if (count($fieldToolTipsmst_silhouette["Japanese"]))
		$tdatamst_silhouette[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmst_silhouette[""] = array();
	$fieldToolTipsmst_silhouette[""] = array();
	$placeHoldersmst_silhouette[""] = array();
	$pageTitlesmst_silhouette[""] = array();
	$fieldLabelsmst_silhouette[""]["id"] = "Id";
	$fieldToolTipsmst_silhouette[""]["id"] = "";
	$placeHoldersmst_silhouette[""]["id"] = "";
	$fieldLabelsmst_silhouette[""]["name"] = "Name";
	$fieldToolTipsmst_silhouette[""]["name"] = "";
	$placeHoldersmst_silhouette[""]["name"] = "";
	$fieldLabelsmst_silhouette[""]["english_name"] = "English Name";
	$fieldToolTipsmst_silhouette[""]["english_name"] = "";
	$placeHoldersmst_silhouette[""]["english_name"] = "";
	$fieldLabelsmst_silhouette[""]["sort"] = "Sort";
	$fieldToolTipsmst_silhouette[""]["sort"] = "";
	$placeHoldersmst_silhouette[""]["sort"] = "";
	$fieldLabelsmst_silhouette[""]["line_category"] = "Line Category";
	$fieldToolTipsmst_silhouette[""]["line_category"] = "";
	$placeHoldersmst_silhouette[""]["line_category"] = "";
	$fieldLabelsmst_silhouette[""]["yahoo_junle"] = "Yahoo Junle";
	$fieldToolTipsmst_silhouette[""]["yahoo_junle"] = "";
	$placeHoldersmst_silhouette[""]["yahoo_junle"] = "";
	$fieldLabelsmst_silhouette[""]["category_id"] = "Category Id";
	$fieldToolTipsmst_silhouette[""]["category_id"] = "";
	$placeHoldersmst_silhouette[""]["category_id"] = "";
	$fieldLabelsmst_silhouette[""]["sub_category_id1"] = "Sub Category Id1";
	$fieldToolTipsmst_silhouette[""]["sub_category_id1"] = "";
	$placeHoldersmst_silhouette[""]["sub_category_id1"] = "";
	$fieldLabelsmst_silhouette[""]["update_by"] = "Update By";
	$fieldToolTipsmst_silhouette[""]["update_by"] = "";
	$placeHoldersmst_silhouette[""]["update_by"] = "";
	$fieldLabelsmst_silhouette[""]["update_at"] = "Update At";
	$fieldToolTipsmst_silhouette[""]["update_at"] = "";
	$placeHoldersmst_silhouette[""]["update_at"] = "";
	$fieldLabelsmst_silhouette[""]["create_by"] = "Create By";
	$fieldToolTipsmst_silhouette[""]["create_by"] = "";
	$placeHoldersmst_silhouette[""]["create_by"] = "";
	$fieldLabelsmst_silhouette[""]["create_at"] = "Create At";
	$fieldToolTipsmst_silhouette[""]["create_at"] = "";
	$placeHoldersmst_silhouette[""]["create_at"] = "";
	if (count($fieldToolTipsmst_silhouette[""]))
		$tdatamst_silhouette[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmst_silhouette["English"] = array();
	$fieldToolTipsmst_silhouette["English"] = array();
	$placeHoldersmst_silhouette["English"] = array();
	$pageTitlesmst_silhouette["English"] = array();
	$fieldLabelsmst_silhouette["English"]["id"] = "Id";
	$fieldToolTipsmst_silhouette["English"]["id"] = "";
	$placeHoldersmst_silhouette["English"]["id"] = "";
	$fieldLabelsmst_silhouette["English"]["name"] = "Name";
	$fieldToolTipsmst_silhouette["English"]["name"] = "";
	$placeHoldersmst_silhouette["English"]["name"] = "";
	$fieldLabelsmst_silhouette["English"]["english_name"] = "English Name";
	$fieldToolTipsmst_silhouette["English"]["english_name"] = "";
	$placeHoldersmst_silhouette["English"]["english_name"] = "";
	$fieldLabelsmst_silhouette["English"]["sort"] = "Sort";
	$fieldToolTipsmst_silhouette["English"]["sort"] = "";
	$placeHoldersmst_silhouette["English"]["sort"] = "";
	$fieldLabelsmst_silhouette["English"]["line_category"] = "Line Category";
	$fieldToolTipsmst_silhouette["English"]["line_category"] = "";
	$placeHoldersmst_silhouette["English"]["line_category"] = "";
	$fieldLabelsmst_silhouette["English"]["yahoo_junle"] = "Yahoo Junle";
	$fieldToolTipsmst_silhouette["English"]["yahoo_junle"] = "";
	$placeHoldersmst_silhouette["English"]["yahoo_junle"] = "";
	$fieldLabelsmst_silhouette["English"]["category_id"] = "Category Id";
	$fieldToolTipsmst_silhouette["English"]["category_id"] = "";
	$placeHoldersmst_silhouette["English"]["category_id"] = "";
	$fieldLabelsmst_silhouette["English"]["sub_category_id1"] = "Sub Category Id1";
	$fieldToolTipsmst_silhouette["English"]["sub_category_id1"] = "";
	$placeHoldersmst_silhouette["English"]["sub_category_id1"] = "";
	$fieldLabelsmst_silhouette["English"]["update_by"] = "Update By";
	$fieldToolTipsmst_silhouette["English"]["update_by"] = "";
	$placeHoldersmst_silhouette["English"]["update_by"] = "";
	$fieldLabelsmst_silhouette["English"]["update_at"] = "Update At";
	$fieldToolTipsmst_silhouette["English"]["update_at"] = "";
	$placeHoldersmst_silhouette["English"]["update_at"] = "";
	$fieldLabelsmst_silhouette["English"]["create_by"] = "Create By";
	$fieldToolTipsmst_silhouette["English"]["create_by"] = "";
	$placeHoldersmst_silhouette["English"]["create_by"] = "";
	$fieldLabelsmst_silhouette["English"]["create_at"] = "Create At";
	$fieldToolTipsmst_silhouette["English"]["create_at"] = "";
	$placeHoldersmst_silhouette["English"]["create_at"] = "";
	if (count($fieldToolTipsmst_silhouette["English"]))
		$tdatamst_silhouette[".isUseToolTips"] = true;
}


	$tdatamst_silhouette[".NCSearch"] = true;



$tdatamst_silhouette[".shortTableName"] = "mst_silhouette";
$tdatamst_silhouette[".nSecOptions"] = 0;
$tdatamst_silhouette[".recsPerRowPrint"] = 1;
$tdatamst_silhouette[".mainTableOwnerID"] = "";
$tdatamst_silhouette[".moveNext"] = 1;
$tdatamst_silhouette[".entityType"] = 0;

$tdatamst_silhouette[".strOriginalTableName"] = "mst_silhouette";

	



$tdatamst_silhouette[".showAddInPopup"] = false;

$tdatamst_silhouette[".showEditInPopup"] = false;

$tdatamst_silhouette[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamst_silhouette[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamst_silhouette[".fieldsForRegister"] = array();

$tdatamst_silhouette[".listAjax"] = false;

	$tdatamst_silhouette[".audit"] = true;

	$tdatamst_silhouette[".locking"] = false;



$tdatamst_silhouette[".list"] = true;

$tdatamst_silhouette[".inlineEdit"] = true;


$tdatamst_silhouette[".reorderRecordsByHeader"] = true;



$tdatamst_silhouette[".inlineAdd"] = true;

$tdatamst_silhouette[".import"] = true;

$tdatamst_silhouette[".exportTo"] = true;

$tdatamst_silhouette[".printFriendly"] = true;

$tdatamst_silhouette[".delete"] = true;

$tdatamst_silhouette[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamst_silhouette[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamst_silhouette[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamst_silhouette[".searchSaving"] = false;
//

$tdatamst_silhouette[".showSearchPanel"] = true;
		$tdatamst_silhouette[".flexibleSearch"] = true;

$tdatamst_silhouette[".isUseAjaxSuggest"] = true;

$tdatamst_silhouette[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatamst_silhouette[".ajaxCodeSnippetAdded"] = false;

$tdatamst_silhouette[".buttonsAdded"] = false;

$tdatamst_silhouette[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamst_silhouette[".isUseTimeForSearch"] = false;





$tdatamst_silhouette[".allSearchFields"] = array();
$tdatamst_silhouette[".filterFields"] = array();
$tdatamst_silhouette[".requiredSearchFields"] = array();

$tdatamst_silhouette[".allSearchFields"][] = "id";
	$tdatamst_silhouette[".allSearchFields"][] = "name";
	$tdatamst_silhouette[".allSearchFields"][] = "english_name";
	$tdatamst_silhouette[".allSearchFields"][] = "sort";
	$tdatamst_silhouette[".allSearchFields"][] = "line_category";
	$tdatamst_silhouette[".allSearchFields"][] = "yahoo_junle";
	$tdatamst_silhouette[".allSearchFields"][] = "category_id";
	$tdatamst_silhouette[".allSearchFields"][] = "sub_category_id1";
	$tdatamst_silhouette[".allSearchFields"][] = "update_by";
	$tdatamst_silhouette[".allSearchFields"][] = "update_at";
	$tdatamst_silhouette[".allSearchFields"][] = "create_by";
	$tdatamst_silhouette[".allSearchFields"][] = "create_at";
	

$tdatamst_silhouette[".googleLikeFields"] = array();
$tdatamst_silhouette[".googleLikeFields"][] = "id";
$tdatamst_silhouette[".googleLikeFields"][] = "name";
$tdatamst_silhouette[".googleLikeFields"][] = "english_name";
$tdatamst_silhouette[".googleLikeFields"][] = "sort";
$tdatamst_silhouette[".googleLikeFields"][] = "line_category";
$tdatamst_silhouette[".googleLikeFields"][] = "yahoo_junle";
$tdatamst_silhouette[".googleLikeFields"][] = "category_id";
$tdatamst_silhouette[".googleLikeFields"][] = "sub_category_id1";
$tdatamst_silhouette[".googleLikeFields"][] = "update_by";
$tdatamst_silhouette[".googleLikeFields"][] = "update_at";
$tdatamst_silhouette[".googleLikeFields"][] = "create_by";
$tdatamst_silhouette[".googleLikeFields"][] = "create_at";

$tdatamst_silhouette[".panelSearchFields"] = array();
$tdatamst_silhouette[".searchPanelOptions"] = array();
$tdatamst_silhouette[".panelSearchFields"][] = "name";
	$tdatamst_silhouette[".panelSearchFields"][] = "yahoo_junle";
	
$tdatamst_silhouette[".advSearchFields"] = array();
$tdatamst_silhouette[".advSearchFields"][] = "id";
$tdatamst_silhouette[".advSearchFields"][] = "name";
$tdatamst_silhouette[".advSearchFields"][] = "english_name";
$tdatamst_silhouette[".advSearchFields"][] = "sort";
$tdatamst_silhouette[".advSearchFields"][] = "line_category";
$tdatamst_silhouette[".advSearchFields"][] = "yahoo_junle";
$tdatamst_silhouette[".advSearchFields"][] = "category_id";
$tdatamst_silhouette[".advSearchFields"][] = "sub_category_id1";
$tdatamst_silhouette[".advSearchFields"][] = "update_by";
$tdatamst_silhouette[".advSearchFields"][] = "update_at";
$tdatamst_silhouette[".advSearchFields"][] = "create_by";
$tdatamst_silhouette[".advSearchFields"][] = "create_at";

$tdatamst_silhouette[".tableType"] = "list";

$tdatamst_silhouette[".printerPageOrientation"] = 0;
$tdatamst_silhouette[".nPrinterPageScale"] = 100;

$tdatamst_silhouette[".nPrinterSplitRecords"] = 40;

$tdatamst_silhouette[".nPrinterPDFSplitRecords"] = 40;



$tdatamst_silhouette[".geocodingEnabled"] = false;





$tdatamst_silhouette[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamst_silhouette[".pageSize"] = 100;

$tdatamst_silhouette[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamst_silhouette[".strOrderBy"] = $tstrOrderBy;

$tdatamst_silhouette[".orderindexes"] = array();

$tdatamst_silhouette[".sqlHead"] = "SELECT id,  	name,  	english_name,  	sort,  	line_category,  	yahoo_junle,  	category_id,  	sub_category_id1,  	update_by,  	update_at,  	create_by,  	create_at";
$tdatamst_silhouette[".sqlFrom"] = "FROM mst_silhouette";
$tdatamst_silhouette[".sqlWhereExpr"] = "";
$tdatamst_silhouette[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamst_silhouette[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamst_silhouette[".arrGroupsPerPage"] = $arrGPP;

$tdatamst_silhouette[".highlightSearchResults"] = true;

$tableKeysmst_silhouette = array();
$tableKeysmst_silhouette[] = "id";
$tdatamst_silhouette[".Keys"] = $tableKeysmst_silhouette;

$tdatamst_silhouette[".listFields"] = array();
$tdatamst_silhouette[".listFields"][] = "id";
$tdatamst_silhouette[".listFields"][] = "name";
$tdatamst_silhouette[".listFields"][] = "english_name";
$tdatamst_silhouette[".listFields"][] = "sort";
$tdatamst_silhouette[".listFields"][] = "line_category";
$tdatamst_silhouette[".listFields"][] = "yahoo_junle";
$tdatamst_silhouette[".listFields"][] = "category_id";
$tdatamst_silhouette[".listFields"][] = "sub_category_id1";
$tdatamst_silhouette[".listFields"][] = "update_by";
$tdatamst_silhouette[".listFields"][] = "update_at";
$tdatamst_silhouette[".listFields"][] = "create_by";
$tdatamst_silhouette[".listFields"][] = "create_at";

$tdatamst_silhouette[".hideMobileList"] = array();


$tdatamst_silhouette[".viewFields"] = array();

$tdatamst_silhouette[".addFields"] = array();

$tdatamst_silhouette[".masterListFields"] = array();
$tdatamst_silhouette[".masterListFields"][] = "id";
$tdatamst_silhouette[".masterListFields"][] = "name";
$tdatamst_silhouette[".masterListFields"][] = "english_name";
$tdatamst_silhouette[".masterListFields"][] = "sort";
$tdatamst_silhouette[".masterListFields"][] = "line_category";
$tdatamst_silhouette[".masterListFields"][] = "yahoo_junle";
$tdatamst_silhouette[".masterListFields"][] = "category_id";
$tdatamst_silhouette[".masterListFields"][] = "sub_category_id1";
$tdatamst_silhouette[".masterListFields"][] = "update_by";
$tdatamst_silhouette[".masterListFields"][] = "update_at";
$tdatamst_silhouette[".masterListFields"][] = "create_by";
$tdatamst_silhouette[".masterListFields"][] = "create_at";

$tdatamst_silhouette[".inlineAddFields"] = array();
$tdatamst_silhouette[".inlineAddFields"][] = "name";
$tdatamst_silhouette[".inlineAddFields"][] = "english_name";
$tdatamst_silhouette[".inlineAddFields"][] = "sort";
$tdatamst_silhouette[".inlineAddFields"][] = "line_category";
$tdatamst_silhouette[".inlineAddFields"][] = "yahoo_junle";
$tdatamst_silhouette[".inlineAddFields"][] = "category_id";
$tdatamst_silhouette[".inlineAddFields"][] = "sub_category_id1";

$tdatamst_silhouette[".editFields"] = array();

$tdatamst_silhouette[".inlineEditFields"] = array();
$tdatamst_silhouette[".inlineEditFields"][] = "name";
$tdatamst_silhouette[".inlineEditFields"][] = "english_name";
$tdatamst_silhouette[".inlineEditFields"][] = "sort";
$tdatamst_silhouette[".inlineEditFields"][] = "line_category";
$tdatamst_silhouette[".inlineEditFields"][] = "yahoo_junle";
$tdatamst_silhouette[".inlineEditFields"][] = "category_id";
$tdatamst_silhouette[".inlineEditFields"][] = "sub_category_id1";

$tdatamst_silhouette[".updateSelectedFields"] = array();


$tdatamst_silhouette[".exportFields"] = array();
$tdatamst_silhouette[".exportFields"][] = "id";
$tdatamst_silhouette[".exportFields"][] = "name";
$tdatamst_silhouette[".exportFields"][] = "english_name";
$tdatamst_silhouette[".exportFields"][] = "sort";
$tdatamst_silhouette[".exportFields"][] = "line_category";
$tdatamst_silhouette[".exportFields"][] = "yahoo_junle";
$tdatamst_silhouette[".exportFields"][] = "category_id";
$tdatamst_silhouette[".exportFields"][] = "sub_category_id1";
$tdatamst_silhouette[".exportFields"][] = "update_by";
$tdatamst_silhouette[".exportFields"][] = "update_at";
$tdatamst_silhouette[".exportFields"][] = "create_by";
$tdatamst_silhouette[".exportFields"][] = "create_at";

$tdatamst_silhouette[".importFields"] = array();
$tdatamst_silhouette[".importFields"][] = "id";
$tdatamst_silhouette[".importFields"][] = "name";
$tdatamst_silhouette[".importFields"][] = "english_name";
$tdatamst_silhouette[".importFields"][] = "sort";
$tdatamst_silhouette[".importFields"][] = "line_category";
$tdatamst_silhouette[".importFields"][] = "yahoo_junle";
$tdatamst_silhouette[".importFields"][] = "category_id";
$tdatamst_silhouette[".importFields"][] = "sub_category_id1";

$tdatamst_silhouette[".printFields"] = array();
$tdatamst_silhouette[".printFields"][] = "id";
$tdatamst_silhouette[".printFields"][] = "name";
$tdatamst_silhouette[".printFields"][] = "english_name";
$tdatamst_silhouette[".printFields"][] = "sort";
$tdatamst_silhouette[".printFields"][] = "line_category";
$tdatamst_silhouette[".printFields"][] = "yahoo_junle";
$tdatamst_silhouette[".printFields"][] = "category_id";
$tdatamst_silhouette[".printFields"][] = "sub_category_id1";
$tdatamst_silhouette[".printFields"][] = "update_by";
$tdatamst_silhouette[".printFields"][] = "update_at";
$tdatamst_silhouette[".printFields"][] = "create_by";
$tdatamst_silhouette[".printFields"][] = "create_at";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "mst_silhouette";
	$fdata["Label"] = GetFieldLabel("mst_silhouette","id");
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




	$tdatamst_silhouette["id"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "mst_silhouette";
	$fdata["Label"] = GetFieldLabel("mst_silhouette","name");
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




	$tdatamst_silhouette["name"] = $fdata;
//	english_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "english_name";
	$fdata["GoodName"] = "english_name";
	$fdata["ownerTable"] = "mst_silhouette";
	$fdata["Label"] = GetFieldLabel("mst_silhouette","english_name");
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




	$tdatamst_silhouette["english_name"] = $fdata;
//	sort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "sort";
	$fdata["GoodName"] = "sort";
	$fdata["ownerTable"] = "mst_silhouette";
	$fdata["Label"] = GetFieldLabel("mst_silhouette","sort");
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




	$tdatamst_silhouette["sort"] = $fdata;
//	line_category
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "line_category";
	$fdata["GoodName"] = "line_category";
	$fdata["ownerTable"] = "mst_silhouette";
	$fdata["Label"] = GetFieldLabel("mst_silhouette","line_category");
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




	$tdatamst_silhouette["line_category"] = $fdata;
//	yahoo_junle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "yahoo_junle";
	$fdata["GoodName"] = "yahoo_junle";
	$fdata["ownerTable"] = "mst_silhouette";
	$fdata["Label"] = GetFieldLabel("mst_silhouette","yahoo_junle");
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




	$tdatamst_silhouette["yahoo_junle"] = $fdata;
//	category_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "category_id";
	$fdata["GoodName"] = "category_id";
	$fdata["ownerTable"] = "mst_silhouette";
	$fdata["Label"] = GetFieldLabel("mst_silhouette","category_id");
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




	$tdatamst_silhouette["category_id"] = $fdata;
//	sub_category_id1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "sub_category_id1";
	$fdata["GoodName"] = "sub_category_id1";
	$fdata["ownerTable"] = "mst_silhouette";
	$fdata["Label"] = GetFieldLabel("mst_silhouette","sub_category_id1");
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




	$tdatamst_silhouette["sub_category_id1"] = $fdata;
//	update_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "update_by";
	$fdata["GoodName"] = "update_by";
	$fdata["ownerTable"] = "mst_silhouette";
	$fdata["Label"] = GetFieldLabel("mst_silhouette","update_by");
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




	$tdatamst_silhouette["update_by"] = $fdata;
//	update_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "update_at";
	$fdata["GoodName"] = "update_at";
	$fdata["ownerTable"] = "mst_silhouette";
	$fdata["Label"] = GetFieldLabel("mst_silhouette","update_at");
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

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
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




	$tdatamst_silhouette["update_at"] = $fdata;
//	create_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "create_by";
	$fdata["GoodName"] = "create_by";
	$fdata["ownerTable"] = "mst_silhouette";
	$fdata["Label"] = GetFieldLabel("mst_silhouette","create_by");
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




	$tdatamst_silhouette["create_by"] = $fdata;
//	create_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "create_at";
	$fdata["GoodName"] = "create_at";
	$fdata["ownerTable"] = "mst_silhouette";
	$fdata["Label"] = GetFieldLabel("mst_silhouette","create_at");
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

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
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




	$tdatamst_silhouette["create_at"] = $fdata;


$tables_data["mst_silhouette"]=&$tdatamst_silhouette;
$field_labels["mst_silhouette"] = &$fieldLabelsmst_silhouette;
$fieldToolTips["mst_silhouette"] = &$fieldToolTipsmst_silhouette;
$placeHolders["mst_silhouette"] = &$placeHoldersmst_silhouette;
$page_titles["mst_silhouette"] = &$pageTitlesmst_silhouette;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mst_silhouette"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mst_silhouette"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mst_silhouette()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	name,  	english_name,  	sort,  	line_category,  	yahoo_junle,  	category_id,  	sub_category_id1,  	update_by,  	update_at,  	create_by,  	create_at";
$proto0["m_strFrom"] = "FROM mst_silhouette";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
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
	"m_strTable" => "mst_silhouette",
	"m_srcTableName" => "mst_silhouette"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "mst_silhouette";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "mst_silhouette",
	"m_srcTableName" => "mst_silhouette"
));

$proto8["m_sql"] = "name";
$proto8["m_srcTableName"] = "mst_silhouette";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "english_name",
	"m_strTable" => "mst_silhouette",
	"m_srcTableName" => "mst_silhouette"
));

$proto10["m_sql"] = "english_name";
$proto10["m_srcTableName"] = "mst_silhouette";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "sort",
	"m_strTable" => "mst_silhouette",
	"m_srcTableName" => "mst_silhouette"
));

$proto12["m_sql"] = "sort";
$proto12["m_srcTableName"] = "mst_silhouette";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "line_category",
	"m_strTable" => "mst_silhouette",
	"m_srcTableName" => "mst_silhouette"
));

$proto14["m_sql"] = "line_category";
$proto14["m_srcTableName"] = "mst_silhouette";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_junle",
	"m_strTable" => "mst_silhouette",
	"m_srcTableName" => "mst_silhouette"
));

$proto16["m_sql"] = "yahoo_junle";
$proto16["m_srcTableName"] = "mst_silhouette";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "category_id",
	"m_strTable" => "mst_silhouette",
	"m_srcTableName" => "mst_silhouette"
));

$proto18["m_sql"] = "category_id";
$proto18["m_srcTableName"] = "mst_silhouette";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "sub_category_id1",
	"m_strTable" => "mst_silhouette",
	"m_srcTableName" => "mst_silhouette"
));

$proto20["m_sql"] = "sub_category_id1";
$proto20["m_srcTableName"] = "mst_silhouette";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "update_by",
	"m_strTable" => "mst_silhouette",
	"m_srcTableName" => "mst_silhouette"
));

$proto22["m_sql"] = "update_by";
$proto22["m_srcTableName"] = "mst_silhouette";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "update_at",
	"m_strTable" => "mst_silhouette",
	"m_srcTableName" => "mst_silhouette"
));

$proto24["m_sql"] = "update_at";
$proto24["m_srcTableName"] = "mst_silhouette";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "create_by",
	"m_strTable" => "mst_silhouette",
	"m_srcTableName" => "mst_silhouette"
));

$proto26["m_sql"] = "create_by";
$proto26["m_srcTableName"] = "mst_silhouette";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "create_at",
	"m_strTable" => "mst_silhouette",
	"m_srcTableName" => "mst_silhouette"
));

$proto28["m_sql"] = "create_at";
$proto28["m_srcTableName"] = "mst_silhouette";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "mst_silhouette";
$proto31["m_srcTableName"] = "mst_silhouette";
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
$proto30["m_sql"] = "mst_silhouette";
$proto30["m_alias"] = "";
$proto30["m_srcTableName"] = "mst_silhouette";
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
$proto0["m_srcTableName"]="mst_silhouette";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mst_silhouette = createSqlQuery_mst_silhouette();


	
		;

												

$tdatamst_silhouette[".sqlquery"] = $queryData_mst_silhouette;

$tableEvents["mst_silhouette"] = new eventsBase;
$tdatamst_silhouette[".hasEvents"] = false;

?>