<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamst_cloth = array();
	$tdatamst_cloth[".truncateText"] = true;
	$tdatamst_cloth[".NumberOfChars"] = 80;
	$tdatamst_cloth[".ShortName"] = "mst_cloth";
	$tdatamst_cloth[".OwnerID"] = "";
	$tdatamst_cloth[".OriginalTable"] = "mst_cloth";

//	field labels
$fieldLabelsmst_cloth = array();
$fieldToolTipsmst_cloth = array();
$pageTitlesmst_cloth = array();
$placeHoldersmst_cloth = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmst_cloth["Japanese"] = array();
	$fieldToolTipsmst_cloth["Japanese"] = array();
	$placeHoldersmst_cloth["Japanese"] = array();
	$pageTitlesmst_cloth["Japanese"] = array();
	$fieldLabelsmst_cloth["Japanese"]["id"] = "Id";
	$fieldToolTipsmst_cloth["Japanese"]["id"] = "";
	$placeHoldersmst_cloth["Japanese"]["id"] = "";
	$fieldLabelsmst_cloth["Japanese"]["name"] = "Name";
	$fieldToolTipsmst_cloth["Japanese"]["name"] = "";
	$placeHoldersmst_cloth["Japanese"]["name"] = "";
	$fieldLabelsmst_cloth["Japanese"]["english_name"] = "English Name";
	$fieldToolTipsmst_cloth["Japanese"]["english_name"] = "";
	$placeHoldersmst_cloth["Japanese"]["english_name"] = "";
	$fieldLabelsmst_cloth["Japanese"]["sort"] = "Sort";
	$fieldToolTipsmst_cloth["Japanese"]["sort"] = "";
	$placeHoldersmst_cloth["Japanese"]["sort"] = "";
	$fieldLabelsmst_cloth["Japanese"]["line_category"] = "Line Category";
	$fieldToolTipsmst_cloth["Japanese"]["line_category"] = "";
	$placeHoldersmst_cloth["Japanese"]["line_category"] = "";
	$fieldLabelsmst_cloth["Japanese"]["yahoo_junle"] = "Yahoo Junle";
	$fieldToolTipsmst_cloth["Japanese"]["yahoo_junle"] = "";
	$placeHoldersmst_cloth["Japanese"]["yahoo_junle"] = "";
	$fieldLabelsmst_cloth["Japanese"]["category_id"] = "Category Id";
	$fieldToolTipsmst_cloth["Japanese"]["category_id"] = "";
	$placeHoldersmst_cloth["Japanese"]["category_id"] = "";
	$fieldLabelsmst_cloth["Japanese"]["sub_category_id1"] = "Sub Category Id1";
	$fieldToolTipsmst_cloth["Japanese"]["sub_category_id1"] = "";
	$placeHoldersmst_cloth["Japanese"]["sub_category_id1"] = "";
	$fieldLabelsmst_cloth["Japanese"]["update_by"] = "更新者";
	$fieldToolTipsmst_cloth["Japanese"]["update_by"] = "";
	$placeHoldersmst_cloth["Japanese"]["update_by"] = "";
	$fieldLabelsmst_cloth["Japanese"]["update_at"] = "更新日";
	$fieldToolTipsmst_cloth["Japanese"]["update_at"] = "";
	$placeHoldersmst_cloth["Japanese"]["update_at"] = "";
	$fieldLabelsmst_cloth["Japanese"]["create_by"] = "登録者";
	$fieldToolTipsmst_cloth["Japanese"]["create_by"] = "";
	$placeHoldersmst_cloth["Japanese"]["create_by"] = "";
	$fieldLabelsmst_cloth["Japanese"]["create_at"] = "登録日";
	$fieldToolTipsmst_cloth["Japanese"]["create_at"] = "";
	$placeHoldersmst_cloth["Japanese"]["create_at"] = "";
	if (count($fieldToolTipsmst_cloth["Japanese"]))
		$tdatamst_cloth[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmst_cloth[""] = array();
	$fieldToolTipsmst_cloth[""] = array();
	$placeHoldersmst_cloth[""] = array();
	$pageTitlesmst_cloth[""] = array();
	$fieldLabelsmst_cloth[""]["id"] = "Id";
	$fieldToolTipsmst_cloth[""]["id"] = "";
	$placeHoldersmst_cloth[""]["id"] = "";
	$fieldLabelsmst_cloth[""]["name"] = "Name";
	$fieldToolTipsmst_cloth[""]["name"] = "";
	$placeHoldersmst_cloth[""]["name"] = "";
	$fieldLabelsmst_cloth[""]["english_name"] = "English Name";
	$fieldToolTipsmst_cloth[""]["english_name"] = "";
	$placeHoldersmst_cloth[""]["english_name"] = "";
	$fieldLabelsmst_cloth[""]["sort"] = "Sort";
	$fieldToolTipsmst_cloth[""]["sort"] = "";
	$placeHoldersmst_cloth[""]["sort"] = "";
	$fieldLabelsmst_cloth[""]["line_category"] = "Line Category";
	$fieldToolTipsmst_cloth[""]["line_category"] = "";
	$placeHoldersmst_cloth[""]["line_category"] = "";
	$fieldLabelsmst_cloth[""]["yahoo_junle"] = "Yahoo Junle";
	$fieldToolTipsmst_cloth[""]["yahoo_junle"] = "";
	$placeHoldersmst_cloth[""]["yahoo_junle"] = "";
	$fieldLabelsmst_cloth[""]["category_id"] = "Category Id";
	$fieldToolTipsmst_cloth[""]["category_id"] = "";
	$placeHoldersmst_cloth[""]["category_id"] = "";
	$fieldLabelsmst_cloth[""]["sub_category_id1"] = "Sub Category Id1";
	$fieldToolTipsmst_cloth[""]["sub_category_id1"] = "";
	$placeHoldersmst_cloth[""]["sub_category_id1"] = "";
	$fieldLabelsmst_cloth[""]["update_by"] = "Update By";
	$fieldToolTipsmst_cloth[""]["update_by"] = "";
	$placeHoldersmst_cloth[""]["update_by"] = "";
	$fieldLabelsmst_cloth[""]["update_at"] = "Update At";
	$fieldToolTipsmst_cloth[""]["update_at"] = "";
	$placeHoldersmst_cloth[""]["update_at"] = "";
	$fieldLabelsmst_cloth[""]["create_by"] = "Create By";
	$fieldToolTipsmst_cloth[""]["create_by"] = "";
	$placeHoldersmst_cloth[""]["create_by"] = "";
	$fieldLabelsmst_cloth[""]["create_at"] = "Create At";
	$fieldToolTipsmst_cloth[""]["create_at"] = "";
	$placeHoldersmst_cloth[""]["create_at"] = "";
	if (count($fieldToolTipsmst_cloth[""]))
		$tdatamst_cloth[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmst_cloth["English"] = array();
	$fieldToolTipsmst_cloth["English"] = array();
	$placeHoldersmst_cloth["English"] = array();
	$pageTitlesmst_cloth["English"] = array();
	$fieldLabelsmst_cloth["English"]["id"] = "Id";
	$fieldToolTipsmst_cloth["English"]["id"] = "";
	$placeHoldersmst_cloth["English"]["id"] = "";
	$fieldLabelsmst_cloth["English"]["name"] = "Name";
	$fieldToolTipsmst_cloth["English"]["name"] = "";
	$placeHoldersmst_cloth["English"]["name"] = "";
	$fieldLabelsmst_cloth["English"]["english_name"] = "English Name";
	$fieldToolTipsmst_cloth["English"]["english_name"] = "";
	$placeHoldersmst_cloth["English"]["english_name"] = "";
	$fieldLabelsmst_cloth["English"]["sort"] = "Sort";
	$fieldToolTipsmst_cloth["English"]["sort"] = "";
	$placeHoldersmst_cloth["English"]["sort"] = "";
	$fieldLabelsmst_cloth["English"]["line_category"] = "Line Category";
	$fieldToolTipsmst_cloth["English"]["line_category"] = "";
	$placeHoldersmst_cloth["English"]["line_category"] = "";
	$fieldLabelsmst_cloth["English"]["yahoo_junle"] = "Yahoo Junle";
	$fieldToolTipsmst_cloth["English"]["yahoo_junle"] = "";
	$placeHoldersmst_cloth["English"]["yahoo_junle"] = "";
	$fieldLabelsmst_cloth["English"]["category_id"] = "Category Id";
	$fieldToolTipsmst_cloth["English"]["category_id"] = "";
	$placeHoldersmst_cloth["English"]["category_id"] = "";
	$fieldLabelsmst_cloth["English"]["sub_category_id1"] = "Sub Category Id1";
	$fieldToolTipsmst_cloth["English"]["sub_category_id1"] = "";
	$placeHoldersmst_cloth["English"]["sub_category_id1"] = "";
	$fieldLabelsmst_cloth["English"]["update_by"] = "Update By";
	$fieldToolTipsmst_cloth["English"]["update_by"] = "";
	$placeHoldersmst_cloth["English"]["update_by"] = "";
	$fieldLabelsmst_cloth["English"]["update_at"] = "Update At";
	$fieldToolTipsmst_cloth["English"]["update_at"] = "";
	$placeHoldersmst_cloth["English"]["update_at"] = "";
	$fieldLabelsmst_cloth["English"]["create_by"] = "Create By";
	$fieldToolTipsmst_cloth["English"]["create_by"] = "";
	$placeHoldersmst_cloth["English"]["create_by"] = "";
	$fieldLabelsmst_cloth["English"]["create_at"] = "Create At";
	$fieldToolTipsmst_cloth["English"]["create_at"] = "";
	$placeHoldersmst_cloth["English"]["create_at"] = "";
	if (count($fieldToolTipsmst_cloth["English"]))
		$tdatamst_cloth[".isUseToolTips"] = true;
}


	$tdatamst_cloth[".NCSearch"] = true;



$tdatamst_cloth[".shortTableName"] = "mst_cloth";
$tdatamst_cloth[".nSecOptions"] = 0;
$tdatamst_cloth[".recsPerRowPrint"] = 1;
$tdatamst_cloth[".mainTableOwnerID"] = "";
$tdatamst_cloth[".moveNext"] = 1;
$tdatamst_cloth[".entityType"] = 0;

$tdatamst_cloth[".strOriginalTableName"] = "mst_cloth";

	



$tdatamst_cloth[".showAddInPopup"] = false;

$tdatamst_cloth[".showEditInPopup"] = false;

$tdatamst_cloth[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamst_cloth[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamst_cloth[".fieldsForRegister"] = array();

$tdatamst_cloth[".listAjax"] = false;

	$tdatamst_cloth[".audit"] = true;

	$tdatamst_cloth[".locking"] = false;



$tdatamst_cloth[".list"] = true;

$tdatamst_cloth[".inlineEdit"] = true;


$tdatamst_cloth[".reorderRecordsByHeader"] = true;



$tdatamst_cloth[".inlineAdd"] = true;

$tdatamst_cloth[".import"] = true;

$tdatamst_cloth[".exportTo"] = true;


$tdatamst_cloth[".delete"] = true;

$tdatamst_cloth[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamst_cloth[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamst_cloth[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamst_cloth[".searchSaving"] = false;
//

$tdatamst_cloth[".showSearchPanel"] = true;
		$tdatamst_cloth[".flexibleSearch"] = true;

$tdatamst_cloth[".isUseAjaxSuggest"] = true;

$tdatamst_cloth[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatamst_cloth[".ajaxCodeSnippetAdded"] = false;

$tdatamst_cloth[".buttonsAdded"] = false;

$tdatamst_cloth[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamst_cloth[".isUseTimeForSearch"] = false;





$tdatamst_cloth[".allSearchFields"] = array();
$tdatamst_cloth[".filterFields"] = array();
$tdatamst_cloth[".requiredSearchFields"] = array();

$tdatamst_cloth[".allSearchFields"][] = "id";
	$tdatamst_cloth[".allSearchFields"][] = "name";
	$tdatamst_cloth[".allSearchFields"][] = "english_name";
	$tdatamst_cloth[".allSearchFields"][] = "sort";
	$tdatamst_cloth[".allSearchFields"][] = "line_category";
	$tdatamst_cloth[".allSearchFields"][] = "yahoo_junle";
	$tdatamst_cloth[".allSearchFields"][] = "category_id";
	$tdatamst_cloth[".allSearchFields"][] = "sub_category_id1";
	$tdatamst_cloth[".allSearchFields"][] = "update_by";
	$tdatamst_cloth[".allSearchFields"][] = "update_at";
	$tdatamst_cloth[".allSearchFields"][] = "create_by";
	$tdatamst_cloth[".allSearchFields"][] = "create_at";
	

$tdatamst_cloth[".googleLikeFields"] = array();
$tdatamst_cloth[".googleLikeFields"][] = "id";
$tdatamst_cloth[".googleLikeFields"][] = "name";
$tdatamst_cloth[".googleLikeFields"][] = "english_name";
$tdatamst_cloth[".googleLikeFields"][] = "sort";
$tdatamst_cloth[".googleLikeFields"][] = "line_category";
$tdatamst_cloth[".googleLikeFields"][] = "yahoo_junle";
$tdatamst_cloth[".googleLikeFields"][] = "category_id";
$tdatamst_cloth[".googleLikeFields"][] = "sub_category_id1";
$tdatamst_cloth[".googleLikeFields"][] = "update_by";
$tdatamst_cloth[".googleLikeFields"][] = "update_at";
$tdatamst_cloth[".googleLikeFields"][] = "create_by";
$tdatamst_cloth[".googleLikeFields"][] = "create_at";

$tdatamst_cloth[".panelSearchFields"] = array();
$tdatamst_cloth[".searchPanelOptions"] = array();
$tdatamst_cloth[".panelSearchFields"][] = "name";
	$tdatamst_cloth[".panelSearchFields"][] = "yahoo_junle";
	
$tdatamst_cloth[".advSearchFields"] = array();
$tdatamst_cloth[".advSearchFields"][] = "id";
$tdatamst_cloth[".advSearchFields"][] = "name";
$tdatamst_cloth[".advSearchFields"][] = "english_name";
$tdatamst_cloth[".advSearchFields"][] = "sort";
$tdatamst_cloth[".advSearchFields"][] = "line_category";
$tdatamst_cloth[".advSearchFields"][] = "yahoo_junle";
$tdatamst_cloth[".advSearchFields"][] = "category_id";
$tdatamst_cloth[".advSearchFields"][] = "sub_category_id1";
$tdatamst_cloth[".advSearchFields"][] = "update_by";
$tdatamst_cloth[".advSearchFields"][] = "update_at";
$tdatamst_cloth[".advSearchFields"][] = "create_by";
$tdatamst_cloth[".advSearchFields"][] = "create_at";

$tdatamst_cloth[".tableType"] = "list";

$tdatamst_cloth[".printerPageOrientation"] = 0;
$tdatamst_cloth[".nPrinterPageScale"] = 100;

$tdatamst_cloth[".nPrinterSplitRecords"] = 40;

$tdatamst_cloth[".nPrinterPDFSplitRecords"] = 40;



$tdatamst_cloth[".geocodingEnabled"] = false;





$tdatamst_cloth[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamst_cloth[".pageSize"] = 100;

$tdatamst_cloth[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY id DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamst_cloth[".strOrderBy"] = $tstrOrderBy;

$tdatamst_cloth[".orderindexes"] = array();
$tdatamst_cloth[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "`id`");

$tdatamst_cloth[".sqlHead"] = "SELECT id,  name,  english_name,  sort,  line_category,  yahoo_junle,  category_id,  sub_category_id1,  update_by,  update_at,  create_by,  create_at";
$tdatamst_cloth[".sqlFrom"] = "FROM mst_cloth";
$tdatamst_cloth[".sqlWhereExpr"] = "";
$tdatamst_cloth[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamst_cloth[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamst_cloth[".arrGroupsPerPage"] = $arrGPP;

$tdatamst_cloth[".highlightSearchResults"] = true;

$tableKeysmst_cloth = array();
$tableKeysmst_cloth[] = "id";
$tdatamst_cloth[".Keys"] = $tableKeysmst_cloth;

$tdatamst_cloth[".listFields"] = array();
$tdatamst_cloth[".listFields"][] = "id";
$tdatamst_cloth[".listFields"][] = "name";
$tdatamst_cloth[".listFields"][] = "english_name";
$tdatamst_cloth[".listFields"][] = "sort";
$tdatamst_cloth[".listFields"][] = "line_category";
$tdatamst_cloth[".listFields"][] = "yahoo_junle";
$tdatamst_cloth[".listFields"][] = "category_id";
$tdatamst_cloth[".listFields"][] = "sub_category_id1";
$tdatamst_cloth[".listFields"][] = "update_by";
$tdatamst_cloth[".listFields"][] = "update_at";
$tdatamst_cloth[".listFields"][] = "create_by";
$tdatamst_cloth[".listFields"][] = "create_at";

$tdatamst_cloth[".hideMobileList"] = array();


$tdatamst_cloth[".viewFields"] = array();

$tdatamst_cloth[".addFields"] = array();

$tdatamst_cloth[".masterListFields"] = array();
$tdatamst_cloth[".masterListFields"][] = "id";
$tdatamst_cloth[".masterListFields"][] = "name";
$tdatamst_cloth[".masterListFields"][] = "english_name";
$tdatamst_cloth[".masterListFields"][] = "sort";
$tdatamst_cloth[".masterListFields"][] = "line_category";
$tdatamst_cloth[".masterListFields"][] = "yahoo_junle";
$tdatamst_cloth[".masterListFields"][] = "category_id";
$tdatamst_cloth[".masterListFields"][] = "sub_category_id1";
$tdatamst_cloth[".masterListFields"][] = "update_by";
$tdatamst_cloth[".masterListFields"][] = "update_at";
$tdatamst_cloth[".masterListFields"][] = "create_by";
$tdatamst_cloth[".masterListFields"][] = "create_at";

$tdatamst_cloth[".inlineAddFields"] = array();
$tdatamst_cloth[".inlineAddFields"][] = "name";
$tdatamst_cloth[".inlineAddFields"][] = "english_name";
$tdatamst_cloth[".inlineAddFields"][] = "sort";
$tdatamst_cloth[".inlineAddFields"][] = "line_category";
$tdatamst_cloth[".inlineAddFields"][] = "yahoo_junle";
$tdatamst_cloth[".inlineAddFields"][] = "category_id";
$tdatamst_cloth[".inlineAddFields"][] = "sub_category_id1";

$tdatamst_cloth[".editFields"] = array();

$tdatamst_cloth[".inlineEditFields"] = array();
$tdatamst_cloth[".inlineEditFields"][] = "name";
$tdatamst_cloth[".inlineEditFields"][] = "english_name";
$tdatamst_cloth[".inlineEditFields"][] = "sort";
$tdatamst_cloth[".inlineEditFields"][] = "line_category";
$tdatamst_cloth[".inlineEditFields"][] = "yahoo_junle";
$tdatamst_cloth[".inlineEditFields"][] = "category_id";
$tdatamst_cloth[".inlineEditFields"][] = "sub_category_id1";

$tdatamst_cloth[".updateSelectedFields"] = array();


$tdatamst_cloth[".exportFields"] = array();
$tdatamst_cloth[".exportFields"][] = "id";
$tdatamst_cloth[".exportFields"][] = "name";
$tdatamst_cloth[".exportFields"][] = "english_name";
$tdatamst_cloth[".exportFields"][] = "sort";
$tdatamst_cloth[".exportFields"][] = "line_category";
$tdatamst_cloth[".exportFields"][] = "yahoo_junle";
$tdatamst_cloth[".exportFields"][] = "category_id";
$tdatamst_cloth[".exportFields"][] = "sub_category_id1";
$tdatamst_cloth[".exportFields"][] = "update_by";
$tdatamst_cloth[".exportFields"][] = "update_at";
$tdatamst_cloth[".exportFields"][] = "create_by";
$tdatamst_cloth[".exportFields"][] = "create_at";

$tdatamst_cloth[".importFields"] = array();
$tdatamst_cloth[".importFields"][] = "id";
$tdatamst_cloth[".importFields"][] = "name";
$tdatamst_cloth[".importFields"][] = "english_name";
$tdatamst_cloth[".importFields"][] = "sort";
$tdatamst_cloth[".importFields"][] = "line_category";
$tdatamst_cloth[".importFields"][] = "yahoo_junle";
$tdatamst_cloth[".importFields"][] = "category_id";
$tdatamst_cloth[".importFields"][] = "sub_category_id1";

$tdatamst_cloth[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "mst_cloth";
	$fdata["Label"] = GetFieldLabel("mst_cloth","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
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




	$tdatamst_cloth["id"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "mst_cloth";
	$fdata["Label"] = GetFieldLabel("mst_cloth","name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
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




	$tdatamst_cloth["name"] = $fdata;
//	english_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "english_name";
	$fdata["GoodName"] = "english_name";
	$fdata["ownerTable"] = "mst_cloth";
	$fdata["Label"] = GetFieldLabel("mst_cloth","english_name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
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




	$tdatamst_cloth["english_name"] = $fdata;
//	sort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "sort";
	$fdata["GoodName"] = "sort";
	$fdata["ownerTable"] = "mst_cloth";
	$fdata["Label"] = GetFieldLabel("mst_cloth","sort");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
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




	$tdatamst_cloth["sort"] = $fdata;
//	line_category
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "line_category";
	$fdata["GoodName"] = "line_category";
	$fdata["ownerTable"] = "mst_cloth";
	$fdata["Label"] = GetFieldLabel("mst_cloth","line_category");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
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




	$tdatamst_cloth["line_category"] = $fdata;
//	yahoo_junle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "yahoo_junle";
	$fdata["GoodName"] = "yahoo_junle";
	$fdata["ownerTable"] = "mst_cloth";
	$fdata["Label"] = GetFieldLabel("mst_cloth","yahoo_junle");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
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
	$edata["LookupTable"] = "mst_brand";
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




	$tdatamst_cloth["yahoo_junle"] = $fdata;
//	category_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "category_id";
	$fdata["GoodName"] = "category_id";
	$fdata["ownerTable"] = "mst_cloth";
	$fdata["Label"] = GetFieldLabel("mst_cloth","category_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
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




	$tdatamst_cloth["category_id"] = $fdata;
//	sub_category_id1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "sub_category_id1";
	$fdata["GoodName"] = "sub_category_id1";
	$fdata["ownerTable"] = "mst_cloth";
	$fdata["Label"] = GetFieldLabel("mst_cloth","sub_category_id1");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
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




	$tdatamst_cloth["sub_category_id1"] = $fdata;
//	update_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "update_by";
	$fdata["GoodName"] = "update_by";
	$fdata["ownerTable"] = "mst_cloth";
	$fdata["Label"] = GetFieldLabel("mst_cloth","update_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
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




	$tdatamst_cloth["update_by"] = $fdata;
//	update_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "update_at";
	$fdata["GoodName"] = "update_at";
	$fdata["ownerTable"] = "mst_cloth";
	$fdata["Label"] = GetFieldLabel("mst_cloth","update_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
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




	$tdatamst_cloth["update_at"] = $fdata;
//	create_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "create_by";
	$fdata["GoodName"] = "create_by";
	$fdata["ownerTable"] = "mst_cloth";
	$fdata["Label"] = GetFieldLabel("mst_cloth","create_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
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




	$tdatamst_cloth["create_by"] = $fdata;
//	create_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "create_at";
	$fdata["GoodName"] = "create_at";
	$fdata["ownerTable"] = "mst_cloth";
	$fdata["Label"] = GetFieldLabel("mst_cloth","create_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
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




	$tdatamst_cloth["create_at"] = $fdata;


$tables_data["mst_cloth"]=&$tdatamst_cloth;
$field_labels["mst_cloth"] = &$fieldLabelsmst_cloth;
$fieldToolTips["mst_cloth"] = &$fieldToolTipsmst_cloth;
$placeHolders["mst_cloth"] = &$placeHoldersmst_cloth;
$page_titles["mst_cloth"] = &$pageTitlesmst_cloth;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mst_cloth"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mst_cloth"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mst_cloth()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  name,  english_name,  sort,  line_category,  yahoo_junle,  category_id,  sub_category_id1,  update_by,  update_at,  create_by,  create_at";
$proto0["m_strFrom"] = "FROM mst_cloth";
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
	"m_strTable" => "mst_cloth",
	"m_srcTableName" => "mst_cloth"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "mst_cloth";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "mst_cloth",
	"m_srcTableName" => "mst_cloth"
));

$proto8["m_sql"] = "name";
$proto8["m_srcTableName"] = "mst_cloth";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "english_name",
	"m_strTable" => "mst_cloth",
	"m_srcTableName" => "mst_cloth"
));

$proto10["m_sql"] = "english_name";
$proto10["m_srcTableName"] = "mst_cloth";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "sort",
	"m_strTable" => "mst_cloth",
	"m_srcTableName" => "mst_cloth"
));

$proto12["m_sql"] = "sort";
$proto12["m_srcTableName"] = "mst_cloth";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "line_category",
	"m_strTable" => "mst_cloth",
	"m_srcTableName" => "mst_cloth"
));

$proto14["m_sql"] = "line_category";
$proto14["m_srcTableName"] = "mst_cloth";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_junle",
	"m_strTable" => "mst_cloth",
	"m_srcTableName" => "mst_cloth"
));

$proto16["m_sql"] = "yahoo_junle";
$proto16["m_srcTableName"] = "mst_cloth";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "category_id",
	"m_strTable" => "mst_cloth",
	"m_srcTableName" => "mst_cloth"
));

$proto18["m_sql"] = "category_id";
$proto18["m_srcTableName"] = "mst_cloth";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "sub_category_id1",
	"m_strTable" => "mst_cloth",
	"m_srcTableName" => "mst_cloth"
));

$proto20["m_sql"] = "sub_category_id1";
$proto20["m_srcTableName"] = "mst_cloth";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "update_by",
	"m_strTable" => "mst_cloth",
	"m_srcTableName" => "mst_cloth"
));

$proto22["m_sql"] = "update_by";
$proto22["m_srcTableName"] = "mst_cloth";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "update_at",
	"m_strTable" => "mst_cloth",
	"m_srcTableName" => "mst_cloth"
));

$proto24["m_sql"] = "update_at";
$proto24["m_srcTableName"] = "mst_cloth";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "create_by",
	"m_strTable" => "mst_cloth",
	"m_srcTableName" => "mst_cloth"
));

$proto26["m_sql"] = "create_by";
$proto26["m_srcTableName"] = "mst_cloth";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "create_at",
	"m_strTable" => "mst_cloth",
	"m_srcTableName" => "mst_cloth"
));

$proto28["m_sql"] = "create_at";
$proto28["m_srcTableName"] = "mst_cloth";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "mst_cloth";
$proto31["m_srcTableName"] = "mst_cloth";
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
$proto30["m_sql"] = "mst_cloth";
$proto30["m_alias"] = "";
$proto30["m_srcTableName"] = "mst_cloth";
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
	"m_strTable" => "mst_cloth",
	"m_srcTableName" => "mst_cloth"
));

$proto34["m_column"]=$obj;
$proto34["m_bAsc"] = 0;
$proto34["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto34);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="mst_cloth";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mst_cloth = createSqlQuery_mst_cloth();


	
		;

												

$tdatamst_cloth[".sqlquery"] = $queryData_mst_cloth;

include_once(getabspath("include/mst_cloth_events.php"));
$tableEvents["mst_cloth"] = new eventclass_mst_cloth;
$tdatamst_cloth[".hasEvents"] = true;

?>