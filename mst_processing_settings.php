<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamst_processing = array();
	$tdatamst_processing[".truncateText"] = true;
	$tdatamst_processing[".NumberOfChars"] = 80;
	$tdatamst_processing[".ShortName"] = "mst_processing";
	$tdatamst_processing[".OwnerID"] = "";
	$tdatamst_processing[".OriginalTable"] = "mst_processing";

//	field labels
$fieldLabelsmst_processing = array();
$fieldToolTipsmst_processing = array();
$pageTitlesmst_processing = array();
$placeHoldersmst_processing = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmst_processing["Japanese"] = array();
	$fieldToolTipsmst_processing["Japanese"] = array();
	$placeHoldersmst_processing["Japanese"] = array();
	$pageTitlesmst_processing["Japanese"] = array();
	$fieldLabelsmst_processing["Japanese"]["id"] = "Id";
	$fieldToolTipsmst_processing["Japanese"]["id"] = "";
	$placeHoldersmst_processing["Japanese"]["id"] = "";
	$fieldLabelsmst_processing["Japanese"]["name"] = "Name";
	$fieldToolTipsmst_processing["Japanese"]["name"] = "";
	$placeHoldersmst_processing["Japanese"]["name"] = "";
	$fieldLabelsmst_processing["Japanese"]["sort"] = "Sort";
	$fieldToolTipsmst_processing["Japanese"]["sort"] = "";
	$placeHoldersmst_processing["Japanese"]["sort"] = "";
	$fieldLabelsmst_processing["Japanese"]["update_at"] = "更新日";
	$fieldToolTipsmst_processing["Japanese"]["update_at"] = "";
	$placeHoldersmst_processing["Japanese"]["update_at"] = "";
	$fieldLabelsmst_processing["Japanese"]["update_by"] = "更新者";
	$fieldToolTipsmst_processing["Japanese"]["update_by"] = "";
	$placeHoldersmst_processing["Japanese"]["update_by"] = "";
	$fieldLabelsmst_processing["Japanese"]["create_at"] = "登録日";
	$fieldToolTipsmst_processing["Japanese"]["create_at"] = "";
	$placeHoldersmst_processing["Japanese"]["create_at"] = "";
	$fieldLabelsmst_processing["Japanese"]["create_by"] = "登録者";
	$fieldToolTipsmst_processing["Japanese"]["create_by"] = "";
	$placeHoldersmst_processing["Japanese"]["create_by"] = "";
	$fieldLabelsmst_processing["Japanese"]["yahoo_junle"] = "ブランドID";
	$fieldToolTipsmst_processing["Japanese"]["yahoo_junle"] = "";
	$placeHoldersmst_processing["Japanese"]["yahoo_junle"] = "";
	$fieldLabelsmst_processing["Japanese"]["category_id"] = "大カテゴリー";
	$fieldToolTipsmst_processing["Japanese"]["category_id"] = "";
	$placeHoldersmst_processing["Japanese"]["category_id"] = "";
	$fieldLabelsmst_processing["Japanese"]["sub_category_id1"] = "中カテゴリー";
	$fieldToolTipsmst_processing["Japanese"]["sub_category_id1"] = "";
	$placeHoldersmst_processing["Japanese"]["sub_category_id1"] = "";
	$fieldLabelsmst_processing["Japanese"]["english_name"] = "英名";
	$fieldToolTipsmst_processing["Japanese"]["english_name"] = "";
	$placeHoldersmst_processing["Japanese"]["english_name"] = "";
	if (count($fieldToolTipsmst_processing["Japanese"]))
		$tdatamst_processing[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmst_processing[""] = array();
	$fieldToolTipsmst_processing[""] = array();
	$placeHoldersmst_processing[""] = array();
	$pageTitlesmst_processing[""] = array();
	$fieldLabelsmst_processing[""]["id"] = "Id";
	$fieldToolTipsmst_processing[""]["id"] = "";
	$placeHoldersmst_processing[""]["id"] = "";
	$fieldLabelsmst_processing[""]["name"] = "Name";
	$fieldToolTipsmst_processing[""]["name"] = "";
	$placeHoldersmst_processing[""]["name"] = "";
	$fieldLabelsmst_processing[""]["sort"] = "Sort";
	$fieldToolTipsmst_processing[""]["sort"] = "";
	$placeHoldersmst_processing[""]["sort"] = "";
	$fieldLabelsmst_processing[""]["update_at"] = "Update At";
	$fieldToolTipsmst_processing[""]["update_at"] = "";
	$placeHoldersmst_processing[""]["update_at"] = "";
	$fieldLabelsmst_processing[""]["update_by"] = "Update By";
	$fieldToolTipsmst_processing[""]["update_by"] = "";
	$placeHoldersmst_processing[""]["update_by"] = "";
	$fieldLabelsmst_processing[""]["create_at"] = "Create At";
	$fieldToolTipsmst_processing[""]["create_at"] = "";
	$placeHoldersmst_processing[""]["create_at"] = "";
	$fieldLabelsmst_processing[""]["create_by"] = "Create By";
	$fieldToolTipsmst_processing[""]["create_by"] = "";
	$placeHoldersmst_processing[""]["create_by"] = "";
	$fieldLabelsmst_processing[""]["yahoo_junle"] = "Yahoo Junle";
	$fieldToolTipsmst_processing[""]["yahoo_junle"] = "";
	$placeHoldersmst_processing[""]["yahoo_junle"] = "";
	$fieldLabelsmst_processing[""]["category_id"] = "Category Id";
	$fieldToolTipsmst_processing[""]["category_id"] = "";
	$placeHoldersmst_processing[""]["category_id"] = "";
	$fieldLabelsmst_processing[""]["sub_category_id1"] = "Sub Category Id1";
	$fieldToolTipsmst_processing[""]["sub_category_id1"] = "";
	$placeHoldersmst_processing[""]["sub_category_id1"] = "";
	$fieldLabelsmst_processing[""]["english_name"] = "English Name";
	$fieldToolTipsmst_processing[""]["english_name"] = "";
	$placeHoldersmst_processing[""]["english_name"] = "";
	if (count($fieldToolTipsmst_processing[""]))
		$tdatamst_processing[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmst_processing["English"] = array();
	$fieldToolTipsmst_processing["English"] = array();
	$placeHoldersmst_processing["English"] = array();
	$pageTitlesmst_processing["English"] = array();
	$fieldLabelsmst_processing["English"]["id"] = "Id";
	$fieldToolTipsmst_processing["English"]["id"] = "";
	$placeHoldersmst_processing["English"]["id"] = "";
	$fieldLabelsmst_processing["English"]["name"] = "Name";
	$fieldToolTipsmst_processing["English"]["name"] = "";
	$placeHoldersmst_processing["English"]["name"] = "";
	$fieldLabelsmst_processing["English"]["sort"] = "Sort";
	$fieldToolTipsmst_processing["English"]["sort"] = "";
	$placeHoldersmst_processing["English"]["sort"] = "";
	$fieldLabelsmst_processing["English"]["update_at"] = "Update At";
	$fieldToolTipsmst_processing["English"]["update_at"] = "";
	$placeHoldersmst_processing["English"]["update_at"] = "";
	$fieldLabelsmst_processing["English"]["update_by"] = "Update By";
	$fieldToolTipsmst_processing["English"]["update_by"] = "";
	$placeHoldersmst_processing["English"]["update_by"] = "";
	$fieldLabelsmst_processing["English"]["create_at"] = "Create At";
	$fieldToolTipsmst_processing["English"]["create_at"] = "";
	$placeHoldersmst_processing["English"]["create_at"] = "";
	$fieldLabelsmst_processing["English"]["create_by"] = "Create By";
	$fieldToolTipsmst_processing["English"]["create_by"] = "";
	$placeHoldersmst_processing["English"]["create_by"] = "";
	$fieldLabelsmst_processing["English"]["yahoo_junle"] = "Yahoo Junle";
	$fieldToolTipsmst_processing["English"]["yahoo_junle"] = "";
	$placeHoldersmst_processing["English"]["yahoo_junle"] = "";
	$fieldLabelsmst_processing["English"]["category_id"] = "Category Id";
	$fieldToolTipsmst_processing["English"]["category_id"] = "";
	$placeHoldersmst_processing["English"]["category_id"] = "";
	$fieldLabelsmst_processing["English"]["sub_category_id1"] = "Sub Category Id1";
	$fieldToolTipsmst_processing["English"]["sub_category_id1"] = "";
	$placeHoldersmst_processing["English"]["sub_category_id1"] = "";
	$fieldLabelsmst_processing["English"]["english_name"] = "English Name";
	$fieldToolTipsmst_processing["English"]["english_name"] = "";
	$placeHoldersmst_processing["English"]["english_name"] = "";
	if (count($fieldToolTipsmst_processing["English"]))
		$tdatamst_processing[".isUseToolTips"] = true;
}


	$tdatamst_processing[".NCSearch"] = true;



$tdatamst_processing[".shortTableName"] = "mst_processing";
$tdatamst_processing[".nSecOptions"] = 0;
$tdatamst_processing[".recsPerRowPrint"] = 1;
$tdatamst_processing[".mainTableOwnerID"] = "";
$tdatamst_processing[".moveNext"] = 1;
$tdatamst_processing[".entityType"] = 0;

$tdatamst_processing[".strOriginalTableName"] = "mst_processing";

	



$tdatamst_processing[".showAddInPopup"] = false;

$tdatamst_processing[".showEditInPopup"] = false;

$tdatamst_processing[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamst_processing[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamst_processing[".fieldsForRegister"] = array();

$tdatamst_processing[".listAjax"] = false;

	$tdatamst_processing[".audit"] = true;

	$tdatamst_processing[".locking"] = false;



$tdatamst_processing[".list"] = true;

$tdatamst_processing[".inlineEdit"] = true;


$tdatamst_processing[".reorderRecordsByHeader"] = true;



$tdatamst_processing[".inlineAdd"] = true;

$tdatamst_processing[".import"] = true;

$tdatamst_processing[".exportTo"] = true;

$tdatamst_processing[".printFriendly"] = true;

$tdatamst_processing[".delete"] = true;

$tdatamst_processing[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamst_processing[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamst_processing[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamst_processing[".searchSaving"] = false;
//

$tdatamst_processing[".showSearchPanel"] = true;
		$tdatamst_processing[".flexibleSearch"] = true;

$tdatamst_processing[".isUseAjaxSuggest"] = true;

$tdatamst_processing[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatamst_processing[".ajaxCodeSnippetAdded"] = false;

$tdatamst_processing[".buttonsAdded"] = false;

$tdatamst_processing[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamst_processing[".isUseTimeForSearch"] = false;





$tdatamst_processing[".allSearchFields"] = array();
$tdatamst_processing[".filterFields"] = array();
$tdatamst_processing[".requiredSearchFields"] = array();

$tdatamst_processing[".allSearchFields"][] = "id";
	$tdatamst_processing[".allSearchFields"][] = "name";
	$tdatamst_processing[".allSearchFields"][] = "sort";
	$tdatamst_processing[".allSearchFields"][] = "update_at";
	$tdatamst_processing[".allSearchFields"][] = "update_by";
	$tdatamst_processing[".allSearchFields"][] = "create_at";
	$tdatamst_processing[".allSearchFields"][] = "create_by";
	$tdatamst_processing[".allSearchFields"][] = "yahoo_junle";
	$tdatamst_processing[".allSearchFields"][] = "category_id";
	$tdatamst_processing[".allSearchFields"][] = "sub_category_id1";
	$tdatamst_processing[".allSearchFields"][] = "english_name";
	

$tdatamst_processing[".googleLikeFields"] = array();
$tdatamst_processing[".googleLikeFields"][] = "id";
$tdatamst_processing[".googleLikeFields"][] = "name";
$tdatamst_processing[".googleLikeFields"][] = "sort";
$tdatamst_processing[".googleLikeFields"][] = "update_at";
$tdatamst_processing[".googleLikeFields"][] = "update_by";
$tdatamst_processing[".googleLikeFields"][] = "create_at";
$tdatamst_processing[".googleLikeFields"][] = "create_by";
$tdatamst_processing[".googleLikeFields"][] = "yahoo_junle";
$tdatamst_processing[".googleLikeFields"][] = "category_id";
$tdatamst_processing[".googleLikeFields"][] = "sub_category_id1";
$tdatamst_processing[".googleLikeFields"][] = "english_name";

$tdatamst_processing[".panelSearchFields"] = array();
$tdatamst_processing[".searchPanelOptions"] = array();
$tdatamst_processing[".panelSearchFields"][] = "name";
	$tdatamst_processing[".panelSearchFields"][] = "yahoo_junle";
	
$tdatamst_processing[".advSearchFields"] = array();
$tdatamst_processing[".advSearchFields"][] = "id";
$tdatamst_processing[".advSearchFields"][] = "name";
$tdatamst_processing[".advSearchFields"][] = "sort";
$tdatamst_processing[".advSearchFields"][] = "update_at";
$tdatamst_processing[".advSearchFields"][] = "update_by";
$tdatamst_processing[".advSearchFields"][] = "create_at";
$tdatamst_processing[".advSearchFields"][] = "create_by";
$tdatamst_processing[".advSearchFields"][] = "yahoo_junle";
$tdatamst_processing[".advSearchFields"][] = "category_id";
$tdatamst_processing[".advSearchFields"][] = "sub_category_id1";
$tdatamst_processing[".advSearchFields"][] = "english_name";

$tdatamst_processing[".tableType"] = "list";

$tdatamst_processing[".printerPageOrientation"] = 0;
$tdatamst_processing[".nPrinterPageScale"] = 100;

$tdatamst_processing[".nPrinterSplitRecords"] = 40;

$tdatamst_processing[".nPrinterPDFSplitRecords"] = 40;



$tdatamst_processing[".geocodingEnabled"] = false;





$tdatamst_processing[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamst_processing[".pageSize"] = 100;

$tdatamst_processing[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY id DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamst_processing[".strOrderBy"] = $tstrOrderBy;

$tdatamst_processing[".orderindexes"] = array();
$tdatamst_processing[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "`id`");

$tdatamst_processing[".sqlHead"] = "SELECT id,  name,  sort,  update_at,  update_by,  create_at,  create_by,  yahoo_junle,  category_id,  sub_category_id1,  english_name";
$tdatamst_processing[".sqlFrom"] = "FROM mst_processing";
$tdatamst_processing[".sqlWhereExpr"] = "";
$tdatamst_processing[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamst_processing[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamst_processing[".arrGroupsPerPage"] = $arrGPP;

$tdatamst_processing[".highlightSearchResults"] = true;

$tableKeysmst_processing = array();
$tableKeysmst_processing[] = "id";
$tdatamst_processing[".Keys"] = $tableKeysmst_processing;

$tdatamst_processing[".listFields"] = array();
$tdatamst_processing[".listFields"][] = "id";
$tdatamst_processing[".listFields"][] = "name";
$tdatamst_processing[".listFields"][] = "english_name";
$tdatamst_processing[".listFields"][] = "sort";
$tdatamst_processing[".listFields"][] = "yahoo_junle";
$tdatamst_processing[".listFields"][] = "category_id";
$tdatamst_processing[".listFields"][] = "sub_category_id1";
$tdatamst_processing[".listFields"][] = "update_by";
$tdatamst_processing[".listFields"][] = "update_at";
$tdatamst_processing[".listFields"][] = "create_by";
$tdatamst_processing[".listFields"][] = "create_at";

$tdatamst_processing[".hideMobileList"] = array();


$tdatamst_processing[".viewFields"] = array();

$tdatamst_processing[".addFields"] = array();

$tdatamst_processing[".masterListFields"] = array();
$tdatamst_processing[".masterListFields"][] = "id";
$tdatamst_processing[".masterListFields"][] = "name";
$tdatamst_processing[".masterListFields"][] = "sort";
$tdatamst_processing[".masterListFields"][] = "update_at";
$tdatamst_processing[".masterListFields"][] = "update_by";
$tdatamst_processing[".masterListFields"][] = "create_at";
$tdatamst_processing[".masterListFields"][] = "create_by";
$tdatamst_processing[".masterListFields"][] = "yahoo_junle";
$tdatamst_processing[".masterListFields"][] = "category_id";
$tdatamst_processing[".masterListFields"][] = "sub_category_id1";
$tdatamst_processing[".masterListFields"][] = "english_name";

$tdatamst_processing[".inlineAddFields"] = array();
$tdatamst_processing[".inlineAddFields"][] = "name";
$tdatamst_processing[".inlineAddFields"][] = "english_name";
$tdatamst_processing[".inlineAddFields"][] = "sort";
$tdatamst_processing[".inlineAddFields"][] = "yahoo_junle";
$tdatamst_processing[".inlineAddFields"][] = "category_id";
$tdatamst_processing[".inlineAddFields"][] = "sub_category_id1";

$tdatamst_processing[".editFields"] = array();

$tdatamst_processing[".inlineEditFields"] = array();
$tdatamst_processing[".inlineEditFields"][] = "name";
$tdatamst_processing[".inlineEditFields"][] = "english_name";
$tdatamst_processing[".inlineEditFields"][] = "sort";
$tdatamst_processing[".inlineEditFields"][] = "yahoo_junle";
$tdatamst_processing[".inlineEditFields"][] = "category_id";
$tdatamst_processing[".inlineEditFields"][] = "sub_category_id1";

$tdatamst_processing[".updateSelectedFields"] = array();


$tdatamst_processing[".exportFields"] = array();
$tdatamst_processing[".exportFields"][] = "id";
$tdatamst_processing[".exportFields"][] = "name";
$tdatamst_processing[".exportFields"][] = "sort";
$tdatamst_processing[".exportFields"][] = "update_at";
$tdatamst_processing[".exportFields"][] = "update_by";
$tdatamst_processing[".exportFields"][] = "create_at";
$tdatamst_processing[".exportFields"][] = "create_by";
$tdatamst_processing[".exportFields"][] = "yahoo_junle";
$tdatamst_processing[".exportFields"][] = "category_id";
$tdatamst_processing[".exportFields"][] = "sub_category_id1";
$tdatamst_processing[".exportFields"][] = "english_name";

$tdatamst_processing[".importFields"] = array();
$tdatamst_processing[".importFields"][] = "id";
$tdatamst_processing[".importFields"][] = "name";
$tdatamst_processing[".importFields"][] = "sort";
$tdatamst_processing[".importFields"][] = "yahoo_junle";
$tdatamst_processing[".importFields"][] = "category_id";
$tdatamst_processing[".importFields"][] = "sub_category_id1";
$tdatamst_processing[".importFields"][] = "english_name";

$tdatamst_processing[".printFields"] = array();
$tdatamst_processing[".printFields"][] = "id";
$tdatamst_processing[".printFields"][] = "name";
$tdatamst_processing[".printFields"][] = "sort";
$tdatamst_processing[".printFields"][] = "update_at";
$tdatamst_processing[".printFields"][] = "update_by";
$tdatamst_processing[".printFields"][] = "create_at";
$tdatamst_processing[".printFields"][] = "create_by";
$tdatamst_processing[".printFields"][] = "yahoo_junle";
$tdatamst_processing[".printFields"][] = "category_id";
$tdatamst_processing[".printFields"][] = "sub_category_id1";
$tdatamst_processing[".printFields"][] = "english_name";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "mst_processing";
	$fdata["Label"] = GetFieldLabel("mst_processing","id");
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




	$tdatamst_processing["id"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "mst_processing";
	$fdata["Label"] = GetFieldLabel("mst_processing","name");
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
			$edata["EditParams"].= " maxlength=150";

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




	$tdatamst_processing["name"] = $fdata;
//	sort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sort";
	$fdata["GoodName"] = "sort";
	$fdata["ownerTable"] = "mst_processing";
	$fdata["Label"] = GetFieldLabel("mst_processing","sort");
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




	$tdatamst_processing["sort"] = $fdata;
//	update_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "update_at";
	$fdata["GoodName"] = "update_at";
	$fdata["ownerTable"] = "mst_processing";
	$fdata["Label"] = GetFieldLabel("mst_processing","update_at");
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




	$tdatamst_processing["update_at"] = $fdata;
//	update_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "update_by";
	$fdata["GoodName"] = "update_by";
	$fdata["ownerTable"] = "mst_processing";
	$fdata["Label"] = GetFieldLabel("mst_processing","update_by");
	$fdata["FieldType"] = 200;

	
	
	
			
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




	$tdatamst_processing["update_by"] = $fdata;
//	create_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "create_at";
	$fdata["GoodName"] = "create_at";
	$fdata["ownerTable"] = "mst_processing";
	$fdata["Label"] = GetFieldLabel("mst_processing","create_at");
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




	$tdatamst_processing["create_at"] = $fdata;
//	create_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "create_by";
	$fdata["GoodName"] = "create_by";
	$fdata["ownerTable"] = "mst_processing";
	$fdata["Label"] = GetFieldLabel("mst_processing","create_by");
	$fdata["FieldType"] = 200;

	
	
	
			
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




	$tdatamst_processing["create_by"] = $fdata;
//	yahoo_junle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "yahoo_junle";
	$fdata["GoodName"] = "yahoo_junle";
	$fdata["ownerTable"] = "mst_processing";
	$fdata["Label"] = GetFieldLabel("mst_processing","yahoo_junle");
	$fdata["FieldType"] = 200;

	
	
	
			
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




	$tdatamst_processing["yahoo_junle"] = $fdata;
//	category_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "category_id";
	$fdata["GoodName"] = "category_id";
	$fdata["ownerTable"] = "mst_processing";
	$fdata["Label"] = GetFieldLabel("mst_processing","category_id");
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




	$tdatamst_processing["category_id"] = $fdata;
//	sub_category_id1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "sub_category_id1";
	$fdata["GoodName"] = "sub_category_id1";
	$fdata["ownerTable"] = "mst_processing";
	$fdata["Label"] = GetFieldLabel("mst_processing","sub_category_id1");
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




	$tdatamst_processing["sub_category_id1"] = $fdata;
//	english_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "english_name";
	$fdata["GoodName"] = "english_name";
	$fdata["ownerTable"] = "mst_processing";
	$fdata["Label"] = GetFieldLabel("mst_processing","english_name");
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
			$edata["EditParams"].= " maxlength=150";

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




	$tdatamst_processing["english_name"] = $fdata;


$tables_data["mst_processing"]=&$tdatamst_processing;
$field_labels["mst_processing"] = &$fieldLabelsmst_processing;
$fieldToolTips["mst_processing"] = &$fieldToolTipsmst_processing;
$placeHolders["mst_processing"] = &$placeHoldersmst_processing;
$page_titles["mst_processing"] = &$pageTitlesmst_processing;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mst_processing"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mst_processing"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mst_processing()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  name,  sort,  update_at,  update_by,  create_at,  create_by,  yahoo_junle,  category_id,  sub_category_id1,  english_name";
$proto0["m_strFrom"] = "FROM mst_processing";
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
	"m_strTable" => "mst_processing",
	"m_srcTableName" => "mst_processing"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "mst_processing";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "mst_processing",
	"m_srcTableName" => "mst_processing"
));

$proto8["m_sql"] = "name";
$proto8["m_srcTableName"] = "mst_processing";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "sort",
	"m_strTable" => "mst_processing",
	"m_srcTableName" => "mst_processing"
));

$proto10["m_sql"] = "sort";
$proto10["m_srcTableName"] = "mst_processing";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "update_at",
	"m_strTable" => "mst_processing",
	"m_srcTableName" => "mst_processing"
));

$proto12["m_sql"] = "update_at";
$proto12["m_srcTableName"] = "mst_processing";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "update_by",
	"m_strTable" => "mst_processing",
	"m_srcTableName" => "mst_processing"
));

$proto14["m_sql"] = "update_by";
$proto14["m_srcTableName"] = "mst_processing";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "create_at",
	"m_strTable" => "mst_processing",
	"m_srcTableName" => "mst_processing"
));

$proto16["m_sql"] = "create_at";
$proto16["m_srcTableName"] = "mst_processing";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "create_by",
	"m_strTable" => "mst_processing",
	"m_srcTableName" => "mst_processing"
));

$proto18["m_sql"] = "create_by";
$proto18["m_srcTableName"] = "mst_processing";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_junle",
	"m_strTable" => "mst_processing",
	"m_srcTableName" => "mst_processing"
));

$proto20["m_sql"] = "yahoo_junle";
$proto20["m_srcTableName"] = "mst_processing";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "category_id",
	"m_strTable" => "mst_processing",
	"m_srcTableName" => "mst_processing"
));

$proto22["m_sql"] = "category_id";
$proto22["m_srcTableName"] = "mst_processing";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "sub_category_id1",
	"m_strTable" => "mst_processing",
	"m_srcTableName" => "mst_processing"
));

$proto24["m_sql"] = "sub_category_id1";
$proto24["m_srcTableName"] = "mst_processing";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "english_name",
	"m_strTable" => "mst_processing",
	"m_srcTableName" => "mst_processing"
));

$proto26["m_sql"] = "english_name";
$proto26["m_srcTableName"] = "mst_processing";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto28=array();
$proto28["m_link"] = "SQLL_MAIN";
			$proto29=array();
$proto29["m_strName"] = "mst_processing";
$proto29["m_srcTableName"] = "mst_processing";
$proto29["m_columns"] = array();
$proto29["m_columns"][] = "id";
$proto29["m_columns"][] = "name";
$proto29["m_columns"][] = "sort";
$proto29["m_columns"][] = "update_at";
$proto29["m_columns"][] = "update_by";
$proto29["m_columns"][] = "create_at";
$proto29["m_columns"][] = "create_by";
$proto29["m_columns"][] = "yahoo_junle";
$proto29["m_columns"][] = "category_id";
$proto29["m_columns"][] = "sub_category_id1";
$proto29["m_columns"][] = "english_name";
$obj = new SQLTable($proto29);

$proto28["m_table"] = $obj;
$proto28["m_sql"] = "mst_processing";
$proto28["m_alias"] = "";
$proto28["m_srcTableName"] = "mst_processing";
$proto30=array();
$proto30["m_sql"] = "";
$proto30["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto30["m_column"]=$obj;
$proto30["m_contained"] = array();
$proto30["m_strCase"] = "";
$proto30["m_havingmode"] = false;
$proto30["m_inBrackets"] = false;
$proto30["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto30);

$proto28["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto28);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto32=array();
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "mst_processing",
	"m_srcTableName" => "mst_processing"
));

$proto32["m_column"]=$obj;
$proto32["m_bAsc"] = 0;
$proto32["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto32);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="mst_processing";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mst_processing = createSqlQuery_mst_processing();


	
		;

											

$tdatamst_processing[".sqlquery"] = $queryData_mst_processing;

include_once(getabspath("include/mst_processing_events.php"));
$tableEvents["mst_processing"] = new eventclass_mst_processing;
$tdatamst_processing[".hasEvents"] = true;

?>