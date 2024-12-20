<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamst_Setting = array();
	$tdatamst_Setting[".truncateText"] = true;
	$tdatamst_Setting[".NumberOfChars"] = 80;
	$tdatamst_Setting[".ShortName"] = "mst_Setting";
	$tdatamst_Setting[".OwnerID"] = "";
	$tdatamst_Setting[".OriginalTable"] = "mst_Setting";

//	field labels
$fieldLabelsmst_Setting = array();
$fieldToolTipsmst_Setting = array();
$pageTitlesmst_Setting = array();
$placeHoldersmst_Setting = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmst_Setting["Japanese"] = array();
	$fieldToolTipsmst_Setting["Japanese"] = array();
	$placeHoldersmst_Setting["Japanese"] = array();
	$pageTitlesmst_Setting["Japanese"] = array();
	$fieldLabelsmst_Setting["Japanese"]["id"] = "Id";
	$fieldToolTipsmst_Setting["Japanese"]["id"] = "";
	$placeHoldersmst_Setting["Japanese"]["id"] = "";
	$fieldLabelsmst_Setting["Japanese"]["name"] = "Name";
	$fieldToolTipsmst_Setting["Japanese"]["name"] = "";
	$placeHoldersmst_Setting["Japanese"]["name"] = "";
	$fieldLabelsmst_Setting["Japanese"]["sort"] = "Sort";
	$fieldToolTipsmst_Setting["Japanese"]["sort"] = "";
	$placeHoldersmst_Setting["Japanese"]["sort"] = "";
	$fieldLabelsmst_Setting["Japanese"]["update_at"] = "更新日";
	$fieldToolTipsmst_Setting["Japanese"]["update_at"] = "";
	$placeHoldersmst_Setting["Japanese"]["update_at"] = "";
	$fieldLabelsmst_Setting["Japanese"]["update_by"] = "更新者";
	$fieldToolTipsmst_Setting["Japanese"]["update_by"] = "";
	$placeHoldersmst_Setting["Japanese"]["update_by"] = "";
	$fieldLabelsmst_Setting["Japanese"]["create_at"] = "登録日";
	$fieldToolTipsmst_Setting["Japanese"]["create_at"] = "";
	$placeHoldersmst_Setting["Japanese"]["create_at"] = "";
	$fieldLabelsmst_Setting["Japanese"]["create_by"] = "登録者";
	$fieldToolTipsmst_Setting["Japanese"]["create_by"] = "";
	$placeHoldersmst_Setting["Japanese"]["create_by"] = "";
	$fieldLabelsmst_Setting["Japanese"]["yahoo_junle"] = "ブランドID";
	$fieldToolTipsmst_Setting["Japanese"]["yahoo_junle"] = "";
	$placeHoldersmst_Setting["Japanese"]["yahoo_junle"] = "";
	$fieldLabelsmst_Setting["Japanese"]["category_id"] = "大カテゴリー";
	$fieldToolTipsmst_Setting["Japanese"]["category_id"] = "";
	$placeHoldersmst_Setting["Japanese"]["category_id"] = "";
	$fieldLabelsmst_Setting["Japanese"]["sub_category_id1"] = "中カテゴリー";
	$fieldToolTipsmst_Setting["Japanese"]["sub_category_id1"] = "";
	$placeHoldersmst_Setting["Japanese"]["sub_category_id1"] = "";
	$fieldLabelsmst_Setting["Japanese"]["english_name"] = "英名";
	$fieldToolTipsmst_Setting["Japanese"]["english_name"] = "";
	$placeHoldersmst_Setting["Japanese"]["english_name"] = "";
	if (count($fieldToolTipsmst_Setting["Japanese"]))
		$tdatamst_Setting[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmst_Setting[""] = array();
	$fieldToolTipsmst_Setting[""] = array();
	$placeHoldersmst_Setting[""] = array();
	$pageTitlesmst_Setting[""] = array();
	$fieldLabelsmst_Setting[""]["id"] = "Id";
	$fieldToolTipsmst_Setting[""]["id"] = "";
	$placeHoldersmst_Setting[""]["id"] = "";
	$fieldLabelsmst_Setting[""]["name"] = "Name";
	$fieldToolTipsmst_Setting[""]["name"] = "";
	$placeHoldersmst_Setting[""]["name"] = "";
	$fieldLabelsmst_Setting[""]["sort"] = "Sort";
	$fieldToolTipsmst_Setting[""]["sort"] = "";
	$placeHoldersmst_Setting[""]["sort"] = "";
	$fieldLabelsmst_Setting[""]["update_at"] = "Update At";
	$fieldToolTipsmst_Setting[""]["update_at"] = "";
	$placeHoldersmst_Setting[""]["update_at"] = "";
	$fieldLabelsmst_Setting[""]["update_by"] = "Update By";
	$fieldToolTipsmst_Setting[""]["update_by"] = "";
	$placeHoldersmst_Setting[""]["update_by"] = "";
	$fieldLabelsmst_Setting[""]["create_at"] = "Create At";
	$fieldToolTipsmst_Setting[""]["create_at"] = "";
	$placeHoldersmst_Setting[""]["create_at"] = "";
	$fieldLabelsmst_Setting[""]["create_by"] = "Create By";
	$fieldToolTipsmst_Setting[""]["create_by"] = "";
	$placeHoldersmst_Setting[""]["create_by"] = "";
	$fieldLabelsmst_Setting[""]["yahoo_junle"] = "Yahoo Junle";
	$fieldToolTipsmst_Setting[""]["yahoo_junle"] = "";
	$placeHoldersmst_Setting[""]["yahoo_junle"] = "";
	$fieldLabelsmst_Setting[""]["category_id"] = "Category Id";
	$fieldToolTipsmst_Setting[""]["category_id"] = "";
	$placeHoldersmst_Setting[""]["category_id"] = "";
	$fieldLabelsmst_Setting[""]["sub_category_id1"] = "Sub Category Id1";
	$fieldToolTipsmst_Setting[""]["sub_category_id1"] = "";
	$placeHoldersmst_Setting[""]["sub_category_id1"] = "";
	$fieldLabelsmst_Setting[""]["english_name"] = "English Name";
	$fieldToolTipsmst_Setting[""]["english_name"] = "";
	$placeHoldersmst_Setting[""]["english_name"] = "";
	if (count($fieldToolTipsmst_Setting[""]))
		$tdatamst_Setting[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmst_Setting["English"] = array();
	$fieldToolTipsmst_Setting["English"] = array();
	$placeHoldersmst_Setting["English"] = array();
	$pageTitlesmst_Setting["English"] = array();
	$fieldLabelsmst_Setting["English"]["id"] = "Id";
	$fieldToolTipsmst_Setting["English"]["id"] = "";
	$placeHoldersmst_Setting["English"]["id"] = "";
	$fieldLabelsmst_Setting["English"]["name"] = "Name";
	$fieldToolTipsmst_Setting["English"]["name"] = "";
	$placeHoldersmst_Setting["English"]["name"] = "";
	$fieldLabelsmst_Setting["English"]["sort"] = "Sort";
	$fieldToolTipsmst_Setting["English"]["sort"] = "";
	$placeHoldersmst_Setting["English"]["sort"] = "";
	$fieldLabelsmst_Setting["English"]["update_at"] = "Update At";
	$fieldToolTipsmst_Setting["English"]["update_at"] = "";
	$placeHoldersmst_Setting["English"]["update_at"] = "";
	$fieldLabelsmst_Setting["English"]["update_by"] = "Update By";
	$fieldToolTipsmst_Setting["English"]["update_by"] = "";
	$placeHoldersmst_Setting["English"]["update_by"] = "";
	$fieldLabelsmst_Setting["English"]["create_at"] = "Create At";
	$fieldToolTipsmst_Setting["English"]["create_at"] = "";
	$placeHoldersmst_Setting["English"]["create_at"] = "";
	$fieldLabelsmst_Setting["English"]["create_by"] = "Create By";
	$fieldToolTipsmst_Setting["English"]["create_by"] = "";
	$placeHoldersmst_Setting["English"]["create_by"] = "";
	$fieldLabelsmst_Setting["English"]["yahoo_junle"] = "Yahoo Junle";
	$fieldToolTipsmst_Setting["English"]["yahoo_junle"] = "";
	$placeHoldersmst_Setting["English"]["yahoo_junle"] = "";
	$fieldLabelsmst_Setting["English"]["category_id"] = "Category Id";
	$fieldToolTipsmst_Setting["English"]["category_id"] = "";
	$placeHoldersmst_Setting["English"]["category_id"] = "";
	$fieldLabelsmst_Setting["English"]["sub_category_id1"] = "Sub Category Id1";
	$fieldToolTipsmst_Setting["English"]["sub_category_id1"] = "";
	$placeHoldersmst_Setting["English"]["sub_category_id1"] = "";
	$fieldLabelsmst_Setting["English"]["english_name"] = "English Name";
	$fieldToolTipsmst_Setting["English"]["english_name"] = "";
	$placeHoldersmst_Setting["English"]["english_name"] = "";
	if (count($fieldToolTipsmst_Setting["English"]))
		$tdatamst_Setting[".isUseToolTips"] = true;
}


	$tdatamst_Setting[".NCSearch"] = true;



$tdatamst_Setting[".shortTableName"] = "mst_Setting";
$tdatamst_Setting[".nSecOptions"] = 0;
$tdatamst_Setting[".recsPerRowPrint"] = 1;
$tdatamst_Setting[".mainTableOwnerID"] = "";
$tdatamst_Setting[".moveNext"] = 1;
$tdatamst_Setting[".entityType"] = 0;

$tdatamst_Setting[".strOriginalTableName"] = "mst_Setting";

	



$tdatamst_Setting[".showAddInPopup"] = false;

$tdatamst_Setting[".showEditInPopup"] = false;

$tdatamst_Setting[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamst_Setting[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamst_Setting[".fieldsForRegister"] = array();

$tdatamst_Setting[".listAjax"] = false;

	$tdatamst_Setting[".audit"] = true;

	$tdatamst_Setting[".locking"] = false;



$tdatamst_Setting[".list"] = true;

$tdatamst_Setting[".inlineEdit"] = true;


$tdatamst_Setting[".reorderRecordsByHeader"] = true;



$tdatamst_Setting[".inlineAdd"] = true;

$tdatamst_Setting[".import"] = true;

$tdatamst_Setting[".exportTo"] = true;

$tdatamst_Setting[".printFriendly"] = true;

$tdatamst_Setting[".delete"] = true;

$tdatamst_Setting[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamst_Setting[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamst_Setting[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamst_Setting[".searchSaving"] = false;
//

$tdatamst_Setting[".showSearchPanel"] = true;
		$tdatamst_Setting[".flexibleSearch"] = true;

$tdatamst_Setting[".isUseAjaxSuggest"] = true;

$tdatamst_Setting[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatamst_Setting[".ajaxCodeSnippetAdded"] = false;

$tdatamst_Setting[".buttonsAdded"] = false;

$tdatamst_Setting[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamst_Setting[".isUseTimeForSearch"] = false;





$tdatamst_Setting[".allSearchFields"] = array();
$tdatamst_Setting[".filterFields"] = array();
$tdatamst_Setting[".requiredSearchFields"] = array();

$tdatamst_Setting[".allSearchFields"][] = "id";
	$tdatamst_Setting[".allSearchFields"][] = "name";
	$tdatamst_Setting[".allSearchFields"][] = "sort";
	$tdatamst_Setting[".allSearchFields"][] = "update_at";
	$tdatamst_Setting[".allSearchFields"][] = "update_by";
	$tdatamst_Setting[".allSearchFields"][] = "create_at";
	$tdatamst_Setting[".allSearchFields"][] = "create_by";
	$tdatamst_Setting[".allSearchFields"][] = "yahoo_junle";
	$tdatamst_Setting[".allSearchFields"][] = "category_id";
	$tdatamst_Setting[".allSearchFields"][] = "sub_category_id1";
	$tdatamst_Setting[".allSearchFields"][] = "english_name";
	

$tdatamst_Setting[".googleLikeFields"] = array();
$tdatamst_Setting[".googleLikeFields"][] = "id";
$tdatamst_Setting[".googleLikeFields"][] = "name";
$tdatamst_Setting[".googleLikeFields"][] = "sort";
$tdatamst_Setting[".googleLikeFields"][] = "update_at";
$tdatamst_Setting[".googleLikeFields"][] = "update_by";
$tdatamst_Setting[".googleLikeFields"][] = "create_at";
$tdatamst_Setting[".googleLikeFields"][] = "create_by";
$tdatamst_Setting[".googleLikeFields"][] = "yahoo_junle";
$tdatamst_Setting[".googleLikeFields"][] = "category_id";
$tdatamst_Setting[".googleLikeFields"][] = "sub_category_id1";
$tdatamst_Setting[".googleLikeFields"][] = "english_name";

$tdatamst_Setting[".panelSearchFields"] = array();
$tdatamst_Setting[".searchPanelOptions"] = array();
$tdatamst_Setting[".panelSearchFields"][] = "name";
	$tdatamst_Setting[".panelSearchFields"][] = "yahoo_junle";
	
$tdatamst_Setting[".advSearchFields"] = array();
$tdatamst_Setting[".advSearchFields"][] = "id";
$tdatamst_Setting[".advSearchFields"][] = "name";
$tdatamst_Setting[".advSearchFields"][] = "sort";
$tdatamst_Setting[".advSearchFields"][] = "update_at";
$tdatamst_Setting[".advSearchFields"][] = "update_by";
$tdatamst_Setting[".advSearchFields"][] = "create_at";
$tdatamst_Setting[".advSearchFields"][] = "create_by";
$tdatamst_Setting[".advSearchFields"][] = "yahoo_junle";
$tdatamst_Setting[".advSearchFields"][] = "category_id";
$tdatamst_Setting[".advSearchFields"][] = "sub_category_id1";
$tdatamst_Setting[".advSearchFields"][] = "english_name";

$tdatamst_Setting[".tableType"] = "list";

$tdatamst_Setting[".printerPageOrientation"] = 0;
$tdatamst_Setting[".nPrinterPageScale"] = 100;

$tdatamst_Setting[".nPrinterSplitRecords"] = 40;

$tdatamst_Setting[".nPrinterPDFSplitRecords"] = 40;



$tdatamst_Setting[".geocodingEnabled"] = false;





$tdatamst_Setting[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamst_Setting[".pageSize"] = 100;

$tdatamst_Setting[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY id DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamst_Setting[".strOrderBy"] = $tstrOrderBy;

$tdatamst_Setting[".orderindexes"] = array();
$tdatamst_Setting[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "`id`");

$tdatamst_Setting[".sqlHead"] = "SELECT id,  name,  sort,  update_at,  update_by,  create_at,  create_by,  yahoo_junle,  category_id,  sub_category_id1,  english_name";
$tdatamst_Setting[".sqlFrom"] = "FROM mst_Setting";
$tdatamst_Setting[".sqlWhereExpr"] = "";
$tdatamst_Setting[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamst_Setting[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamst_Setting[".arrGroupsPerPage"] = $arrGPP;

$tdatamst_Setting[".highlightSearchResults"] = true;

$tableKeysmst_Setting = array();
$tableKeysmst_Setting[] = "id";
$tdatamst_Setting[".Keys"] = $tableKeysmst_Setting;

$tdatamst_Setting[".listFields"] = array();
$tdatamst_Setting[".listFields"][] = "id";
$tdatamst_Setting[".listFields"][] = "name";
$tdatamst_Setting[".listFields"][] = "english_name";
$tdatamst_Setting[".listFields"][] = "sort";
$tdatamst_Setting[".listFields"][] = "yahoo_junle";
$tdatamst_Setting[".listFields"][] = "category_id";
$tdatamst_Setting[".listFields"][] = "sub_category_id1";
$tdatamst_Setting[".listFields"][] = "update_by";
$tdatamst_Setting[".listFields"][] = "update_at";
$tdatamst_Setting[".listFields"][] = "create_by";
$tdatamst_Setting[".listFields"][] = "create_at";

$tdatamst_Setting[".hideMobileList"] = array();


$tdatamst_Setting[".viewFields"] = array();

$tdatamst_Setting[".addFields"] = array();

$tdatamst_Setting[".masterListFields"] = array();
$tdatamst_Setting[".masterListFields"][] = "id";
$tdatamst_Setting[".masterListFields"][] = "name";
$tdatamst_Setting[".masterListFields"][] = "sort";
$tdatamst_Setting[".masterListFields"][] = "update_at";
$tdatamst_Setting[".masterListFields"][] = "update_by";
$tdatamst_Setting[".masterListFields"][] = "create_at";
$tdatamst_Setting[".masterListFields"][] = "create_by";
$tdatamst_Setting[".masterListFields"][] = "yahoo_junle";
$tdatamst_Setting[".masterListFields"][] = "category_id";
$tdatamst_Setting[".masterListFields"][] = "sub_category_id1";
$tdatamst_Setting[".masterListFields"][] = "english_name";

$tdatamst_Setting[".inlineAddFields"] = array();
$tdatamst_Setting[".inlineAddFields"][] = "name";
$tdatamst_Setting[".inlineAddFields"][] = "english_name";
$tdatamst_Setting[".inlineAddFields"][] = "sort";
$tdatamst_Setting[".inlineAddFields"][] = "yahoo_junle";
$tdatamst_Setting[".inlineAddFields"][] = "category_id";
$tdatamst_Setting[".inlineAddFields"][] = "sub_category_id1";

$tdatamst_Setting[".editFields"] = array();

$tdatamst_Setting[".inlineEditFields"] = array();
$tdatamst_Setting[".inlineEditFields"][] = "name";
$tdatamst_Setting[".inlineEditFields"][] = "english_name";
$tdatamst_Setting[".inlineEditFields"][] = "sort";
$tdatamst_Setting[".inlineEditFields"][] = "yahoo_junle";
$tdatamst_Setting[".inlineEditFields"][] = "category_id";
$tdatamst_Setting[".inlineEditFields"][] = "sub_category_id1";

$tdatamst_Setting[".updateSelectedFields"] = array();


$tdatamst_Setting[".exportFields"] = array();
$tdatamst_Setting[".exportFields"][] = "id";
$tdatamst_Setting[".exportFields"][] = "name";
$tdatamst_Setting[".exportFields"][] = "sort";
$tdatamst_Setting[".exportFields"][] = "update_at";
$tdatamst_Setting[".exportFields"][] = "update_by";
$tdatamst_Setting[".exportFields"][] = "create_at";
$tdatamst_Setting[".exportFields"][] = "create_by";
$tdatamst_Setting[".exportFields"][] = "yahoo_junle";
$tdatamst_Setting[".exportFields"][] = "category_id";
$tdatamst_Setting[".exportFields"][] = "sub_category_id1";
$tdatamst_Setting[".exportFields"][] = "english_name";

$tdatamst_Setting[".importFields"] = array();
$tdatamst_Setting[".importFields"][] = "id";
$tdatamst_Setting[".importFields"][] = "name";
$tdatamst_Setting[".importFields"][] = "sort";
$tdatamst_Setting[".importFields"][] = "yahoo_junle";
$tdatamst_Setting[".importFields"][] = "category_id";
$tdatamst_Setting[".importFields"][] = "sub_category_id1";
$tdatamst_Setting[".importFields"][] = "english_name";

$tdatamst_Setting[".printFields"] = array();
$tdatamst_Setting[".printFields"][] = "id";
$tdatamst_Setting[".printFields"][] = "name";
$tdatamst_Setting[".printFields"][] = "sort";
$tdatamst_Setting[".printFields"][] = "update_at";
$tdatamst_Setting[".printFields"][] = "update_by";
$tdatamst_Setting[".printFields"][] = "create_at";
$tdatamst_Setting[".printFields"][] = "create_by";
$tdatamst_Setting[".printFields"][] = "yahoo_junle";
$tdatamst_Setting[".printFields"][] = "category_id";
$tdatamst_Setting[".printFields"][] = "sub_category_id1";
$tdatamst_Setting[".printFields"][] = "english_name";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "mst_Setting";
	$fdata["Label"] = GetFieldLabel("mst_Setting","id");
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




	$tdatamst_Setting["id"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "mst_Setting";
	$fdata["Label"] = GetFieldLabel("mst_Setting","name");
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




	$tdatamst_Setting["name"] = $fdata;
//	sort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sort";
	$fdata["GoodName"] = "sort";
	$fdata["ownerTable"] = "mst_Setting";
	$fdata["Label"] = GetFieldLabel("mst_Setting","sort");
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




	$tdatamst_Setting["sort"] = $fdata;
//	update_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "update_at";
	$fdata["GoodName"] = "update_at";
	$fdata["ownerTable"] = "mst_Setting";
	$fdata["Label"] = GetFieldLabel("mst_Setting","update_at");
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




	$tdatamst_Setting["update_at"] = $fdata;
//	update_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "update_by";
	$fdata["GoodName"] = "update_by";
	$fdata["ownerTable"] = "mst_Setting";
	$fdata["Label"] = GetFieldLabel("mst_Setting","update_by");
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




	$tdatamst_Setting["update_by"] = $fdata;
//	create_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "create_at";
	$fdata["GoodName"] = "create_at";
	$fdata["ownerTable"] = "mst_Setting";
	$fdata["Label"] = GetFieldLabel("mst_Setting","create_at");
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




	$tdatamst_Setting["create_at"] = $fdata;
//	create_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "create_by";
	$fdata["GoodName"] = "create_by";
	$fdata["ownerTable"] = "mst_Setting";
	$fdata["Label"] = GetFieldLabel("mst_Setting","create_by");
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




	$tdatamst_Setting["create_by"] = $fdata;
//	yahoo_junle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "yahoo_junle";
	$fdata["GoodName"] = "yahoo_junle";
	$fdata["ownerTable"] = "mst_Setting";
	$fdata["Label"] = GetFieldLabel("mst_Setting","yahoo_junle");
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




	$tdatamst_Setting["yahoo_junle"] = $fdata;
//	category_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "category_id";
	$fdata["GoodName"] = "category_id";
	$fdata["ownerTable"] = "mst_Setting";
	$fdata["Label"] = GetFieldLabel("mst_Setting","category_id");
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




	$tdatamst_Setting["category_id"] = $fdata;
//	sub_category_id1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "sub_category_id1";
	$fdata["GoodName"] = "sub_category_id1";
	$fdata["ownerTable"] = "mst_Setting";
	$fdata["Label"] = GetFieldLabel("mst_Setting","sub_category_id1");
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




	$tdatamst_Setting["sub_category_id1"] = $fdata;
//	english_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "english_name";
	$fdata["GoodName"] = "english_name";
	$fdata["ownerTable"] = "mst_Setting";
	$fdata["Label"] = GetFieldLabel("mst_Setting","english_name");
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




	$tdatamst_Setting["english_name"] = $fdata;


$tables_data["mst_Setting"]=&$tdatamst_Setting;
$field_labels["mst_Setting"] = &$fieldLabelsmst_Setting;
$fieldToolTips["mst_Setting"] = &$fieldToolTipsmst_Setting;
$placeHolders["mst_Setting"] = &$placeHoldersmst_Setting;
$page_titles["mst_Setting"] = &$pageTitlesmst_Setting;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mst_Setting"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mst_Setting"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mst_Setting()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  name,  sort,  update_at,  update_by,  create_at,  create_by,  yahoo_junle,  category_id,  sub_category_id1,  english_name";
$proto0["m_strFrom"] = "FROM mst_Setting";
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
	"m_strTable" => "mst_Setting",
	"m_srcTableName" => "mst_Setting"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "mst_Setting";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "mst_Setting",
	"m_srcTableName" => "mst_Setting"
));

$proto8["m_sql"] = "name";
$proto8["m_srcTableName"] = "mst_Setting";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "sort",
	"m_strTable" => "mst_Setting",
	"m_srcTableName" => "mst_Setting"
));

$proto10["m_sql"] = "sort";
$proto10["m_srcTableName"] = "mst_Setting";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "update_at",
	"m_strTable" => "mst_Setting",
	"m_srcTableName" => "mst_Setting"
));

$proto12["m_sql"] = "update_at";
$proto12["m_srcTableName"] = "mst_Setting";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "update_by",
	"m_strTable" => "mst_Setting",
	"m_srcTableName" => "mst_Setting"
));

$proto14["m_sql"] = "update_by";
$proto14["m_srcTableName"] = "mst_Setting";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "create_at",
	"m_strTable" => "mst_Setting",
	"m_srcTableName" => "mst_Setting"
));

$proto16["m_sql"] = "create_at";
$proto16["m_srcTableName"] = "mst_Setting";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "create_by",
	"m_strTable" => "mst_Setting",
	"m_srcTableName" => "mst_Setting"
));

$proto18["m_sql"] = "create_by";
$proto18["m_srcTableName"] = "mst_Setting";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_junle",
	"m_strTable" => "mst_Setting",
	"m_srcTableName" => "mst_Setting"
));

$proto20["m_sql"] = "yahoo_junle";
$proto20["m_srcTableName"] = "mst_Setting";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "category_id",
	"m_strTable" => "mst_Setting",
	"m_srcTableName" => "mst_Setting"
));

$proto22["m_sql"] = "category_id";
$proto22["m_srcTableName"] = "mst_Setting";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "sub_category_id1",
	"m_strTable" => "mst_Setting",
	"m_srcTableName" => "mst_Setting"
));

$proto24["m_sql"] = "sub_category_id1";
$proto24["m_srcTableName"] = "mst_Setting";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "english_name",
	"m_strTable" => "mst_Setting",
	"m_srcTableName" => "mst_Setting"
));

$proto26["m_sql"] = "english_name";
$proto26["m_srcTableName"] = "mst_Setting";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto28=array();
$proto28["m_link"] = "SQLL_MAIN";
			$proto29=array();
$proto29["m_strName"] = "mst_Setting";
$proto29["m_srcTableName"] = "mst_Setting";
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
$proto28["m_sql"] = "mst_Setting";
$proto28["m_alias"] = "";
$proto28["m_srcTableName"] = "mst_Setting";
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
	"m_strTable" => "mst_Setting",
	"m_srcTableName" => "mst_Setting"
));

$proto32["m_column"]=$obj;
$proto32["m_bAsc"] = 0;
$proto32["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto32);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="mst_Setting";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mst_Setting = createSqlQuery_mst_Setting();


	
		;

											

$tdatamst_Setting[".sqlquery"] = $queryData_mst_Setting;

include_once(getabspath("include/mst_Setting_events.php"));
$tableEvents["mst_Setting"] = new eventclass_mst_Setting;
$tdatamst_Setting[".hasEvents"] = true;

?>