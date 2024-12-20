<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamst_zipper = array();
	$tdatamst_zipper[".truncateText"] = true;
	$tdatamst_zipper[".NumberOfChars"] = 80;
	$tdatamst_zipper[".ShortName"] = "mst_zipper";
	$tdatamst_zipper[".OwnerID"] = "";
	$tdatamst_zipper[".OriginalTable"] = "mst_zipper";

//	field labels
$fieldLabelsmst_zipper = array();
$fieldToolTipsmst_zipper = array();
$pageTitlesmst_zipper = array();
$placeHoldersmst_zipper = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmst_zipper["Japanese"] = array();
	$fieldToolTipsmst_zipper["Japanese"] = array();
	$placeHoldersmst_zipper["Japanese"] = array();
	$pageTitlesmst_zipper["Japanese"] = array();
	$fieldLabelsmst_zipper["Japanese"]["id"] = "Id";
	$fieldToolTipsmst_zipper["Japanese"]["id"] = "";
	$placeHoldersmst_zipper["Japanese"]["id"] = "";
	$fieldLabelsmst_zipper["Japanese"]["name"] = "Name";
	$fieldToolTipsmst_zipper["Japanese"]["name"] = "";
	$placeHoldersmst_zipper["Japanese"]["name"] = "";
	$fieldLabelsmst_zipper["Japanese"]["sort"] = "Sort";
	$fieldToolTipsmst_zipper["Japanese"]["sort"] = "";
	$placeHoldersmst_zipper["Japanese"]["sort"] = "";
	$fieldLabelsmst_zipper["Japanese"]["line"] = "ラインカテゴリー";
	$fieldToolTipsmst_zipper["Japanese"]["line"] = "";
	$placeHoldersmst_zipper["Japanese"]["line"] = "";
	$fieldLabelsmst_zipper["Japanese"]["yahoo_junle"] = "ブランドID";
	$fieldToolTipsmst_zipper["Japanese"]["yahoo_junle"] = "";
	$placeHoldersmst_zipper["Japanese"]["yahoo_junle"] = "";
	$fieldLabelsmst_zipper["Japanese"]["category_id"] = "大カテゴリー";
	$fieldToolTipsmst_zipper["Japanese"]["category_id"] = "";
	$placeHoldersmst_zipper["Japanese"]["category_id"] = "";
	$fieldLabelsmst_zipper["Japanese"]["sub_category_id1"] = "中カテゴリー";
	$fieldToolTipsmst_zipper["Japanese"]["sub_category_id1"] = "";
	$placeHoldersmst_zipper["Japanese"]["sub_category_id1"] = "";
	$fieldLabelsmst_zipper["Japanese"]["updated_at"] = "更新日";
	$fieldToolTipsmst_zipper["Japanese"]["updated_at"] = "";
	$placeHoldersmst_zipper["Japanese"]["updated_at"] = "";
	$fieldLabelsmst_zipper["Japanese"]["updated_by"] = "更新者";
	$fieldToolTipsmst_zipper["Japanese"]["updated_by"] = "";
	$placeHoldersmst_zipper["Japanese"]["updated_by"] = "";
	$fieldLabelsmst_zipper["Japanese"]["created_at"] = "登録日";
	$fieldToolTipsmst_zipper["Japanese"]["created_at"] = "";
	$placeHoldersmst_zipper["Japanese"]["created_at"] = "";
	$fieldLabelsmst_zipper["Japanese"]["created_by"] = "登録者";
	$fieldToolTipsmst_zipper["Japanese"]["created_by"] = "";
	$placeHoldersmst_zipper["Japanese"]["created_by"] = "";
	$fieldLabelsmst_zipper["Japanese"]["english_name"] = "英名";
	$fieldToolTipsmst_zipper["Japanese"]["english_name"] = "";
	$placeHoldersmst_zipper["Japanese"]["english_name"] = "";
	if (count($fieldToolTipsmst_zipper["Japanese"]))
		$tdatamst_zipper[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmst_zipper[""] = array();
	$fieldToolTipsmst_zipper[""] = array();
	$placeHoldersmst_zipper[""] = array();
	$pageTitlesmst_zipper[""] = array();
	$fieldLabelsmst_zipper[""]["id"] = "Id";
	$fieldToolTipsmst_zipper[""]["id"] = "";
	$placeHoldersmst_zipper[""]["id"] = "";
	$fieldLabelsmst_zipper[""]["name"] = "Name";
	$fieldToolTipsmst_zipper[""]["name"] = "";
	$placeHoldersmst_zipper[""]["name"] = "";
	$fieldLabelsmst_zipper[""]["sort"] = "Sort";
	$fieldToolTipsmst_zipper[""]["sort"] = "";
	$placeHoldersmst_zipper[""]["sort"] = "";
	$fieldLabelsmst_zipper[""]["line"] = "Line";
	$fieldToolTipsmst_zipper[""]["line"] = "";
	$placeHoldersmst_zipper[""]["line"] = "";
	$fieldLabelsmst_zipper[""]["yahoo_junle"] = "Yahoo Junle";
	$fieldToolTipsmst_zipper[""]["yahoo_junle"] = "";
	$placeHoldersmst_zipper[""]["yahoo_junle"] = "";
	$fieldLabelsmst_zipper[""]["category_id"] = "Category Id";
	$fieldToolTipsmst_zipper[""]["category_id"] = "";
	$placeHoldersmst_zipper[""]["category_id"] = "";
	$fieldLabelsmst_zipper[""]["sub_category_id1"] = "Sub Category Id1";
	$fieldToolTipsmst_zipper[""]["sub_category_id1"] = "";
	$placeHoldersmst_zipper[""]["sub_category_id1"] = "";
	$fieldLabelsmst_zipper[""]["updated_at"] = "Updated At";
	$fieldToolTipsmst_zipper[""]["updated_at"] = "";
	$placeHoldersmst_zipper[""]["updated_at"] = "";
	$fieldLabelsmst_zipper[""]["updated_by"] = "Updated By";
	$fieldToolTipsmst_zipper[""]["updated_by"] = "";
	$placeHoldersmst_zipper[""]["updated_by"] = "";
	$fieldLabelsmst_zipper[""]["created_at"] = "Created At";
	$fieldToolTipsmst_zipper[""]["created_at"] = "";
	$placeHoldersmst_zipper[""]["created_at"] = "";
	$fieldLabelsmst_zipper[""]["created_by"] = "Created By";
	$fieldToolTipsmst_zipper[""]["created_by"] = "";
	$placeHoldersmst_zipper[""]["created_by"] = "";
	$fieldLabelsmst_zipper[""]["english_name"] = "English Name";
	$fieldToolTipsmst_zipper[""]["english_name"] = "";
	$placeHoldersmst_zipper[""]["english_name"] = "";
	if (count($fieldToolTipsmst_zipper[""]))
		$tdatamst_zipper[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmst_zipper["English"] = array();
	$fieldToolTipsmst_zipper["English"] = array();
	$placeHoldersmst_zipper["English"] = array();
	$pageTitlesmst_zipper["English"] = array();
	$fieldLabelsmst_zipper["English"]["id"] = "Id";
	$fieldToolTipsmst_zipper["English"]["id"] = "";
	$placeHoldersmst_zipper["English"]["id"] = "";
	$fieldLabelsmst_zipper["English"]["name"] = "Name";
	$fieldToolTipsmst_zipper["English"]["name"] = "";
	$placeHoldersmst_zipper["English"]["name"] = "";
	$fieldLabelsmst_zipper["English"]["sort"] = "Sort";
	$fieldToolTipsmst_zipper["English"]["sort"] = "";
	$placeHoldersmst_zipper["English"]["sort"] = "";
	$fieldLabelsmst_zipper["English"]["line"] = "Line";
	$fieldToolTipsmst_zipper["English"]["line"] = "";
	$placeHoldersmst_zipper["English"]["line"] = "";
	$fieldLabelsmst_zipper["English"]["yahoo_junle"] = "Yahoo Junle";
	$fieldToolTipsmst_zipper["English"]["yahoo_junle"] = "";
	$placeHoldersmst_zipper["English"]["yahoo_junle"] = "";
	$fieldLabelsmst_zipper["English"]["category_id"] = "Category Id";
	$fieldToolTipsmst_zipper["English"]["category_id"] = "";
	$placeHoldersmst_zipper["English"]["category_id"] = "";
	$fieldLabelsmst_zipper["English"]["sub_category_id1"] = "Sub Category Id1";
	$fieldToolTipsmst_zipper["English"]["sub_category_id1"] = "";
	$placeHoldersmst_zipper["English"]["sub_category_id1"] = "";
	$fieldLabelsmst_zipper["English"]["updated_at"] = "Updated At";
	$fieldToolTipsmst_zipper["English"]["updated_at"] = "";
	$placeHoldersmst_zipper["English"]["updated_at"] = "";
	$fieldLabelsmst_zipper["English"]["updated_by"] = "Updated By";
	$fieldToolTipsmst_zipper["English"]["updated_by"] = "";
	$placeHoldersmst_zipper["English"]["updated_by"] = "";
	$fieldLabelsmst_zipper["English"]["created_at"] = "Created At";
	$fieldToolTipsmst_zipper["English"]["created_at"] = "";
	$placeHoldersmst_zipper["English"]["created_at"] = "";
	$fieldLabelsmst_zipper["English"]["created_by"] = "Created By";
	$fieldToolTipsmst_zipper["English"]["created_by"] = "";
	$placeHoldersmst_zipper["English"]["created_by"] = "";
	$fieldLabelsmst_zipper["English"]["english_name"] = "English Name";
	$fieldToolTipsmst_zipper["English"]["english_name"] = "";
	$placeHoldersmst_zipper["English"]["english_name"] = "";
	if (count($fieldToolTipsmst_zipper["English"]))
		$tdatamst_zipper[".isUseToolTips"] = true;
}


	$tdatamst_zipper[".NCSearch"] = true;



$tdatamst_zipper[".shortTableName"] = "mst_zipper";
$tdatamst_zipper[".nSecOptions"] = 0;
$tdatamst_zipper[".recsPerRowPrint"] = 1;
$tdatamst_zipper[".mainTableOwnerID"] = "";
$tdatamst_zipper[".moveNext"] = 1;
$tdatamst_zipper[".entityType"] = 0;

$tdatamst_zipper[".strOriginalTableName"] = "mst_zipper";

	



$tdatamst_zipper[".showAddInPopup"] = false;

$tdatamst_zipper[".showEditInPopup"] = false;

$tdatamst_zipper[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamst_zipper[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamst_zipper[".fieldsForRegister"] = array();

$tdatamst_zipper[".listAjax"] = false;

	$tdatamst_zipper[".audit"] = true;

	$tdatamst_zipper[".locking"] = false;



$tdatamst_zipper[".list"] = true;

$tdatamst_zipper[".inlineEdit"] = true;


$tdatamst_zipper[".reorderRecordsByHeader"] = true;



$tdatamst_zipper[".inlineAdd"] = true;

$tdatamst_zipper[".import"] = true;

$tdatamst_zipper[".exportTo"] = true;

$tdatamst_zipper[".printFriendly"] = true;

$tdatamst_zipper[".delete"] = true;

$tdatamst_zipper[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamst_zipper[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamst_zipper[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamst_zipper[".searchSaving"] = false;
//

$tdatamst_zipper[".showSearchPanel"] = true;
		$tdatamst_zipper[".flexibleSearch"] = true;

$tdatamst_zipper[".isUseAjaxSuggest"] = true;

$tdatamst_zipper[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatamst_zipper[".ajaxCodeSnippetAdded"] = false;

$tdatamst_zipper[".buttonsAdded"] = false;

$tdatamst_zipper[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamst_zipper[".isUseTimeForSearch"] = false;





$tdatamst_zipper[".allSearchFields"] = array();
$tdatamst_zipper[".filterFields"] = array();
$tdatamst_zipper[".requiredSearchFields"] = array();

$tdatamst_zipper[".allSearchFields"][] = "updated_at";
	$tdatamst_zipper[".allSearchFields"][] = "updated_by";
	$tdatamst_zipper[".allSearchFields"][] = "created_at";
	$tdatamst_zipper[".allSearchFields"][] = "created_by";
	$tdatamst_zipper[".allSearchFields"][] = "english_name";
	$tdatamst_zipper[".allSearchFields"][] = "id";
	$tdatamst_zipper[".allSearchFields"][] = "name";
	$tdatamst_zipper[".allSearchFields"][] = "sort";
	$tdatamst_zipper[".allSearchFields"][] = "line";
	$tdatamst_zipper[".allSearchFields"][] = "yahoo_junle";
	$tdatamst_zipper[".allSearchFields"][] = "category_id";
	$tdatamst_zipper[".allSearchFields"][] = "sub_category_id1";
	

$tdatamst_zipper[".googleLikeFields"] = array();
$tdatamst_zipper[".googleLikeFields"][] = "id";
$tdatamst_zipper[".googleLikeFields"][] = "name";
$tdatamst_zipper[".googleLikeFields"][] = "sort";
$tdatamst_zipper[".googleLikeFields"][] = "line";
$tdatamst_zipper[".googleLikeFields"][] = "yahoo_junle";
$tdatamst_zipper[".googleLikeFields"][] = "category_id";
$tdatamst_zipper[".googleLikeFields"][] = "sub_category_id1";
$tdatamst_zipper[".googleLikeFields"][] = "updated_at";
$tdatamst_zipper[".googleLikeFields"][] = "updated_by";
$tdatamst_zipper[".googleLikeFields"][] = "created_at";
$tdatamst_zipper[".googleLikeFields"][] = "created_by";
$tdatamst_zipper[".googleLikeFields"][] = "english_name";

$tdatamst_zipper[".panelSearchFields"] = array();
$tdatamst_zipper[".searchPanelOptions"] = array();
$tdatamst_zipper[".panelSearchFields"][] = "id";
	$tdatamst_zipper[".panelSearchFields"][] = "name";
	$tdatamst_zipper[".panelSearchFields"][] = "sort";
	$tdatamst_zipper[".panelSearchFields"][] = "line";
	$tdatamst_zipper[".panelSearchFields"][] = "yahoo_junle";
	$tdatamst_zipper[".panelSearchFields"][] = "category_id";
	$tdatamst_zipper[".panelSearchFields"][] = "sub_category_id1";
	
$tdatamst_zipper[".advSearchFields"] = array();
$tdatamst_zipper[".advSearchFields"][] = "updated_at";
$tdatamst_zipper[".advSearchFields"][] = "updated_by";
$tdatamst_zipper[".advSearchFields"][] = "created_at";
$tdatamst_zipper[".advSearchFields"][] = "created_by";
$tdatamst_zipper[".advSearchFields"][] = "english_name";
$tdatamst_zipper[".advSearchFields"][] = "id";
$tdatamst_zipper[".advSearchFields"][] = "name";
$tdatamst_zipper[".advSearchFields"][] = "sort";
$tdatamst_zipper[".advSearchFields"][] = "line";
$tdatamst_zipper[".advSearchFields"][] = "yahoo_junle";
$tdatamst_zipper[".advSearchFields"][] = "category_id";
$tdatamst_zipper[".advSearchFields"][] = "sub_category_id1";

$tdatamst_zipper[".tableType"] = "list";

$tdatamst_zipper[".printerPageOrientation"] = 0;
$tdatamst_zipper[".nPrinterPageScale"] = 100;

$tdatamst_zipper[".nPrinterSplitRecords"] = 40;

$tdatamst_zipper[".nPrinterPDFSplitRecords"] = 40;



$tdatamst_zipper[".geocodingEnabled"] = false;





$tdatamst_zipper[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamst_zipper[".pageSize"] = 100;

$tdatamst_zipper[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY id DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamst_zipper[".strOrderBy"] = $tstrOrderBy;

$tdatamst_zipper[".orderindexes"] = array();
$tdatamst_zipper[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "`id`");

$tdatamst_zipper[".sqlHead"] = "SELECT id,  name,  sort,  line,  yahoo_junle,  category_id,  sub_category_id1,  updated_at,  updated_by,  created_at,  created_by,  english_name";
$tdatamst_zipper[".sqlFrom"] = "FROM mst_zipper";
$tdatamst_zipper[".sqlWhereExpr"] = "";
$tdatamst_zipper[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamst_zipper[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamst_zipper[".arrGroupsPerPage"] = $arrGPP;

$tdatamst_zipper[".highlightSearchResults"] = true;

$tableKeysmst_zipper = array();
$tableKeysmst_zipper[] = "id";
$tdatamst_zipper[".Keys"] = $tableKeysmst_zipper;

$tdatamst_zipper[".listFields"] = array();
$tdatamst_zipper[".listFields"][] = "id";
$tdatamst_zipper[".listFields"][] = "name";
$tdatamst_zipper[".listFields"][] = "english_name";
$tdatamst_zipper[".listFields"][] = "sort";
$tdatamst_zipper[".listFields"][] = "line";
$tdatamst_zipper[".listFields"][] = "yahoo_junle";
$tdatamst_zipper[".listFields"][] = "category_id";
$tdatamst_zipper[".listFields"][] = "sub_category_id1";
$tdatamst_zipper[".listFields"][] = "updated_by";
$tdatamst_zipper[".listFields"][] = "updated_at";
$tdatamst_zipper[".listFields"][] = "created_by";
$tdatamst_zipper[".listFields"][] = "created_at";

$tdatamst_zipper[".hideMobileList"] = array();


$tdatamst_zipper[".viewFields"] = array();

$tdatamst_zipper[".addFields"] = array();

$tdatamst_zipper[".masterListFields"] = array();
$tdatamst_zipper[".masterListFields"][] = "id";
$tdatamst_zipper[".masterListFields"][] = "name";
$tdatamst_zipper[".masterListFields"][] = "sort";
$tdatamst_zipper[".masterListFields"][] = "line";
$tdatamst_zipper[".masterListFields"][] = "yahoo_junle";
$tdatamst_zipper[".masterListFields"][] = "category_id";
$tdatamst_zipper[".masterListFields"][] = "sub_category_id1";
$tdatamst_zipper[".masterListFields"][] = "updated_at";
$tdatamst_zipper[".masterListFields"][] = "updated_by";
$tdatamst_zipper[".masterListFields"][] = "created_at";
$tdatamst_zipper[".masterListFields"][] = "created_by";
$tdatamst_zipper[".masterListFields"][] = "english_name";

$tdatamst_zipper[".inlineAddFields"] = array();
$tdatamst_zipper[".inlineAddFields"][] = "name";
$tdatamst_zipper[".inlineAddFields"][] = "english_name";
$tdatamst_zipper[".inlineAddFields"][] = "sort";
$tdatamst_zipper[".inlineAddFields"][] = "line";
$tdatamst_zipper[".inlineAddFields"][] = "yahoo_junle";
$tdatamst_zipper[".inlineAddFields"][] = "category_id";
$tdatamst_zipper[".inlineAddFields"][] = "sub_category_id1";

$tdatamst_zipper[".editFields"] = array();

$tdatamst_zipper[".inlineEditFields"] = array();
$tdatamst_zipper[".inlineEditFields"][] = "name";
$tdatamst_zipper[".inlineEditFields"][] = "english_name";
$tdatamst_zipper[".inlineEditFields"][] = "sort";
$tdatamst_zipper[".inlineEditFields"][] = "line";
$tdatamst_zipper[".inlineEditFields"][] = "yahoo_junle";
$tdatamst_zipper[".inlineEditFields"][] = "category_id";
$tdatamst_zipper[".inlineEditFields"][] = "sub_category_id1";

$tdatamst_zipper[".updateSelectedFields"] = array();


$tdatamst_zipper[".exportFields"] = array();
$tdatamst_zipper[".exportFields"][] = "english_name";
$tdatamst_zipper[".exportFields"][] = "id";
$tdatamst_zipper[".exportFields"][] = "name";
$tdatamst_zipper[".exportFields"][] = "sort";
$tdatamst_zipper[".exportFields"][] = "line";
$tdatamst_zipper[".exportFields"][] = "yahoo_junle";
$tdatamst_zipper[".exportFields"][] = "category_id";
$tdatamst_zipper[".exportFields"][] = "sub_category_id1";
$tdatamst_zipper[".exportFields"][] = "updated_at";
$tdatamst_zipper[".exportFields"][] = "updated_by";
$tdatamst_zipper[".exportFields"][] = "created_at";
$tdatamst_zipper[".exportFields"][] = "created_by";

$tdatamst_zipper[".importFields"] = array();
$tdatamst_zipper[".importFields"][] = "id";
$tdatamst_zipper[".importFields"][] = "name";
$tdatamst_zipper[".importFields"][] = "sort";
$tdatamst_zipper[".importFields"][] = "line";
$tdatamst_zipper[".importFields"][] = "yahoo_junle";
$tdatamst_zipper[".importFields"][] = "category_id";
$tdatamst_zipper[".importFields"][] = "sub_category_id1";
$tdatamst_zipper[".importFields"][] = "english_name";

$tdatamst_zipper[".printFields"] = array();
$tdatamst_zipper[".printFields"][] = "english_name";
$tdatamst_zipper[".printFields"][] = "id";
$tdatamst_zipper[".printFields"][] = "name";
$tdatamst_zipper[".printFields"][] = "sort";
$tdatamst_zipper[".printFields"][] = "line";
$tdatamst_zipper[".printFields"][] = "yahoo_junle";
$tdatamst_zipper[".printFields"][] = "category_id";
$tdatamst_zipper[".printFields"][] = "sub_category_id1";
$tdatamst_zipper[".printFields"][] = "updated_at";
$tdatamst_zipper[".printFields"][] = "updated_by";
$tdatamst_zipper[".printFields"][] = "created_at";
$tdatamst_zipper[".printFields"][] = "created_by";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "mst_zipper";
	$fdata["Label"] = GetFieldLabel("mst_zipper","id");
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




	$tdatamst_zipper["id"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "mst_zipper";
	$fdata["Label"] = GetFieldLabel("mst_zipper","name");
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




	$tdatamst_zipper["name"] = $fdata;
//	sort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sort";
	$fdata["GoodName"] = "sort";
	$fdata["ownerTable"] = "mst_zipper";
	$fdata["Label"] = GetFieldLabel("mst_zipper","sort");
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




	$tdatamst_zipper["sort"] = $fdata;
//	line
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "line";
	$fdata["GoodName"] = "line";
	$fdata["ownerTable"] = "mst_zipper";
	$fdata["Label"] = GetFieldLabel("mst_zipper","line");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "line";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "line";

	
	
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
			$edata["EditParams"].= " maxlength=150";

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




	$tdatamst_zipper["line"] = $fdata;
//	yahoo_junle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "yahoo_junle";
	$fdata["GoodName"] = "yahoo_junle";
	$fdata["ownerTable"] = "mst_zipper";
	$fdata["Label"] = GetFieldLabel("mst_zipper","yahoo_junle");
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
	$edata["LinkFieldType"] = 3;
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




	$tdatamst_zipper["yahoo_junle"] = $fdata;
//	category_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "category_id";
	$fdata["GoodName"] = "category_id";
	$fdata["ownerTable"] = "mst_zipper";
	$fdata["Label"] = GetFieldLabel("mst_zipper","category_id");
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




	$tdatamst_zipper["category_id"] = $fdata;
//	sub_category_id1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "sub_category_id1";
	$fdata["GoodName"] = "sub_category_id1";
	$fdata["ownerTable"] = "mst_zipper";
	$fdata["Label"] = GetFieldLabel("mst_zipper","sub_category_id1");
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




	$tdatamst_zipper["sub_category_id1"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "mst_zipper";
	$fdata["Label"] = GetFieldLabel("mst_zipper","updated_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "updated_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "updated_at";

	
	
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




	$tdatamst_zipper["updated_at"] = $fdata;
//	updated_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "updated_by";
	$fdata["GoodName"] = "updated_by";
	$fdata["ownerTable"] = "mst_zipper";
	$fdata["Label"] = GetFieldLabel("mst_zipper","updated_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "updated_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "updated_by";

	
	
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




	$tdatamst_zipper["updated_by"] = $fdata;
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "mst_zipper";
	$fdata["Label"] = GetFieldLabel("mst_zipper","created_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "created_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "created_at";

	
	
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




	$tdatamst_zipper["created_at"] = $fdata;
//	created_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "created_by";
	$fdata["GoodName"] = "created_by";
	$fdata["ownerTable"] = "mst_zipper";
	$fdata["Label"] = GetFieldLabel("mst_zipper","created_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "created_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "created_by";

	
	
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




	$tdatamst_zipper["created_by"] = $fdata;
//	english_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "english_name";
	$fdata["GoodName"] = "english_name";
	$fdata["ownerTable"] = "mst_zipper";
	$fdata["Label"] = GetFieldLabel("mst_zipper","english_name");
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




	$tdatamst_zipper["english_name"] = $fdata;


$tables_data["mst_zipper"]=&$tdatamst_zipper;
$field_labels["mst_zipper"] = &$fieldLabelsmst_zipper;
$fieldToolTips["mst_zipper"] = &$fieldToolTipsmst_zipper;
$placeHolders["mst_zipper"] = &$placeHoldersmst_zipper;
$page_titles["mst_zipper"] = &$pageTitlesmst_zipper;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mst_zipper"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mst_zipper"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mst_zipper()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  name,  sort,  line,  yahoo_junle,  category_id,  sub_category_id1,  updated_at,  updated_by,  created_at,  created_by,  english_name";
$proto0["m_strFrom"] = "FROM mst_zipper";
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
	"m_strTable" => "mst_zipper",
	"m_srcTableName" => "mst_zipper"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "mst_zipper";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "mst_zipper",
	"m_srcTableName" => "mst_zipper"
));

$proto8["m_sql"] = "name";
$proto8["m_srcTableName"] = "mst_zipper";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "sort",
	"m_strTable" => "mst_zipper",
	"m_srcTableName" => "mst_zipper"
));

$proto10["m_sql"] = "sort";
$proto10["m_srcTableName"] = "mst_zipper";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "line",
	"m_strTable" => "mst_zipper",
	"m_srcTableName" => "mst_zipper"
));

$proto12["m_sql"] = "line";
$proto12["m_srcTableName"] = "mst_zipper";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_junle",
	"m_strTable" => "mst_zipper",
	"m_srcTableName" => "mst_zipper"
));

$proto14["m_sql"] = "yahoo_junle";
$proto14["m_srcTableName"] = "mst_zipper";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "category_id",
	"m_strTable" => "mst_zipper",
	"m_srcTableName" => "mst_zipper"
));

$proto16["m_sql"] = "category_id";
$proto16["m_srcTableName"] = "mst_zipper";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "sub_category_id1",
	"m_strTable" => "mst_zipper",
	"m_srcTableName" => "mst_zipper"
));

$proto18["m_sql"] = "sub_category_id1";
$proto18["m_srcTableName"] = "mst_zipper";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "mst_zipper",
	"m_srcTableName" => "mst_zipper"
));

$proto20["m_sql"] = "updated_at";
$proto20["m_srcTableName"] = "mst_zipper";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by",
	"m_strTable" => "mst_zipper",
	"m_srcTableName" => "mst_zipper"
));

$proto22["m_sql"] = "updated_by";
$proto22["m_srcTableName"] = "mst_zipper";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "mst_zipper",
	"m_srcTableName" => "mst_zipper"
));

$proto24["m_sql"] = "created_at";
$proto24["m_srcTableName"] = "mst_zipper";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "created_by",
	"m_strTable" => "mst_zipper",
	"m_srcTableName" => "mst_zipper"
));

$proto26["m_sql"] = "created_by";
$proto26["m_srcTableName"] = "mst_zipper";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "english_name",
	"m_strTable" => "mst_zipper",
	"m_srcTableName" => "mst_zipper"
));

$proto28["m_sql"] = "english_name";
$proto28["m_srcTableName"] = "mst_zipper";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "mst_zipper";
$proto31["m_srcTableName"] = "mst_zipper";
$proto31["m_columns"] = array();
$proto31["m_columns"][] = "id";
$proto31["m_columns"][] = "name";
$proto31["m_columns"][] = "sort";
$proto31["m_columns"][] = "line";
$proto31["m_columns"][] = "yahoo_junle";
$proto31["m_columns"][] = "category_id";
$proto31["m_columns"][] = "sub_category_id1";
$proto31["m_columns"][] = "updated_at";
$proto31["m_columns"][] = "updated_by";
$proto31["m_columns"][] = "created_at";
$proto31["m_columns"][] = "created_by";
$proto31["m_columns"][] = "english_name";
$obj = new SQLTable($proto31);

$proto30["m_table"] = $obj;
$proto30["m_sql"] = "mst_zipper";
$proto30["m_alias"] = "";
$proto30["m_srcTableName"] = "mst_zipper";
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
	"m_strTable" => "mst_zipper",
	"m_srcTableName" => "mst_zipper"
));

$proto34["m_column"]=$obj;
$proto34["m_bAsc"] = 0;
$proto34["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto34);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="mst_zipper";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mst_zipper = createSqlQuery_mst_zipper();


	
		;

												

$tdatamst_zipper[".sqlquery"] = $queryData_mst_zipper;

include_once(getabspath("include/mst_zipper_events.php"));
$tableEvents["mst_zipper"] = new eventclass_mst_zipper;
$tdatamst_zipper[".hasEvents"] = true;

?>