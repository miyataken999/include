<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamst_motif = array();
	$tdatamst_motif[".truncateText"] = true;
	$tdatamst_motif[".NumberOfChars"] = 80;
	$tdatamst_motif[".ShortName"] = "mst_motif";
	$tdatamst_motif[".OwnerID"] = "";
	$tdatamst_motif[".OriginalTable"] = "mst_motif";

//	field labels
$fieldLabelsmst_motif = array();
$fieldToolTipsmst_motif = array();
$pageTitlesmst_motif = array();
$placeHoldersmst_motif = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmst_motif["Japanese"] = array();
	$fieldToolTipsmst_motif["Japanese"] = array();
	$placeHoldersmst_motif["Japanese"] = array();
	$pageTitlesmst_motif["Japanese"] = array();
	$fieldLabelsmst_motif["Japanese"]["id"] = "Id";
	$fieldToolTipsmst_motif["Japanese"]["id"] = "";
	$placeHoldersmst_motif["Japanese"]["id"] = "";
	$fieldLabelsmst_motif["Japanese"]["name"] = "Name";
	$fieldToolTipsmst_motif["Japanese"]["name"] = "";
	$placeHoldersmst_motif["Japanese"]["name"] = "";
	$fieldLabelsmst_motif["Japanese"]["sort"] = "Sort";
	$fieldToolTipsmst_motif["Japanese"]["sort"] = "";
	$placeHoldersmst_motif["Japanese"]["sort"] = "";
	$fieldLabelsmst_motif["Japanese"]["update_at"] = "更新日";
	$fieldToolTipsmst_motif["Japanese"]["update_at"] = "";
	$placeHoldersmst_motif["Japanese"]["update_at"] = "";
	$fieldLabelsmst_motif["Japanese"]["update_by"] = "更新者";
	$fieldToolTipsmst_motif["Japanese"]["update_by"] = "";
	$placeHoldersmst_motif["Japanese"]["update_by"] = "";
	$fieldLabelsmst_motif["Japanese"]["create_at"] = "登録日";
	$fieldToolTipsmst_motif["Japanese"]["create_at"] = "";
	$placeHoldersmst_motif["Japanese"]["create_at"] = "";
	$fieldLabelsmst_motif["Japanese"]["create_by"] = "登録者";
	$fieldToolTipsmst_motif["Japanese"]["create_by"] = "";
	$placeHoldersmst_motif["Japanese"]["create_by"] = "";
	$fieldLabelsmst_motif["Japanese"]["yahoo_junle"] = "ブランドID";
	$fieldToolTipsmst_motif["Japanese"]["yahoo_junle"] = "";
	$placeHoldersmst_motif["Japanese"]["yahoo_junle"] = "";
	$fieldLabelsmst_motif["Japanese"]["category_id"] = "大カテゴリー";
	$fieldToolTipsmst_motif["Japanese"]["category_id"] = "";
	$placeHoldersmst_motif["Japanese"]["category_id"] = "";
	$fieldLabelsmst_motif["Japanese"]["sub_category_id1"] = "中カテゴリー";
	$fieldToolTipsmst_motif["Japanese"]["sub_category_id1"] = "";
	$placeHoldersmst_motif["Japanese"]["sub_category_id1"] = "";
	$fieldLabelsmst_motif["Japanese"]["english_name"] = "英名";
	$fieldToolTipsmst_motif["Japanese"]["english_name"] = "";
	$placeHoldersmst_motif["Japanese"]["english_name"] = "";
	if (count($fieldToolTipsmst_motif["Japanese"]))
		$tdatamst_motif[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmst_motif[""] = array();
	$fieldToolTipsmst_motif[""] = array();
	$placeHoldersmst_motif[""] = array();
	$pageTitlesmst_motif[""] = array();
	$fieldLabelsmst_motif[""]["id"] = "Id";
	$fieldToolTipsmst_motif[""]["id"] = "";
	$placeHoldersmst_motif[""]["id"] = "";
	$fieldLabelsmst_motif[""]["name"] = "Name";
	$fieldToolTipsmst_motif[""]["name"] = "";
	$placeHoldersmst_motif[""]["name"] = "";
	$fieldLabelsmst_motif[""]["sort"] = "Sort";
	$fieldToolTipsmst_motif[""]["sort"] = "";
	$placeHoldersmst_motif[""]["sort"] = "";
	$fieldLabelsmst_motif[""]["update_at"] = "Update At";
	$fieldToolTipsmst_motif[""]["update_at"] = "";
	$placeHoldersmst_motif[""]["update_at"] = "";
	$fieldLabelsmst_motif[""]["update_by"] = "Update By";
	$fieldToolTipsmst_motif[""]["update_by"] = "";
	$placeHoldersmst_motif[""]["update_by"] = "";
	$fieldLabelsmst_motif[""]["create_at"] = "Create At";
	$fieldToolTipsmst_motif[""]["create_at"] = "";
	$placeHoldersmst_motif[""]["create_at"] = "";
	$fieldLabelsmst_motif[""]["create_by"] = "Create By";
	$fieldToolTipsmst_motif[""]["create_by"] = "";
	$placeHoldersmst_motif[""]["create_by"] = "";
	$fieldLabelsmst_motif[""]["yahoo_junle"] = "Yahoo Junle";
	$fieldToolTipsmst_motif[""]["yahoo_junle"] = "";
	$placeHoldersmst_motif[""]["yahoo_junle"] = "";
	$fieldLabelsmst_motif[""]["category_id"] = "Category Id";
	$fieldToolTipsmst_motif[""]["category_id"] = "";
	$placeHoldersmst_motif[""]["category_id"] = "";
	$fieldLabelsmst_motif[""]["sub_category_id1"] = "Sub Category Id1";
	$fieldToolTipsmst_motif[""]["sub_category_id1"] = "";
	$placeHoldersmst_motif[""]["sub_category_id1"] = "";
	$fieldLabelsmst_motif[""]["english_name"] = "English Name";
	$fieldToolTipsmst_motif[""]["english_name"] = "";
	$placeHoldersmst_motif[""]["english_name"] = "";
	if (count($fieldToolTipsmst_motif[""]))
		$tdatamst_motif[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmst_motif["English"] = array();
	$fieldToolTipsmst_motif["English"] = array();
	$placeHoldersmst_motif["English"] = array();
	$pageTitlesmst_motif["English"] = array();
	$fieldLabelsmst_motif["English"]["id"] = "Id";
	$fieldToolTipsmst_motif["English"]["id"] = "";
	$placeHoldersmst_motif["English"]["id"] = "";
	$fieldLabelsmst_motif["English"]["name"] = "Name";
	$fieldToolTipsmst_motif["English"]["name"] = "";
	$placeHoldersmst_motif["English"]["name"] = "";
	$fieldLabelsmst_motif["English"]["sort"] = "Sort";
	$fieldToolTipsmst_motif["English"]["sort"] = "";
	$placeHoldersmst_motif["English"]["sort"] = "";
	$fieldLabelsmst_motif["English"]["update_at"] = "Update At";
	$fieldToolTipsmst_motif["English"]["update_at"] = "";
	$placeHoldersmst_motif["English"]["update_at"] = "";
	$fieldLabelsmst_motif["English"]["update_by"] = "Update By";
	$fieldToolTipsmst_motif["English"]["update_by"] = "";
	$placeHoldersmst_motif["English"]["update_by"] = "";
	$fieldLabelsmst_motif["English"]["create_at"] = "Create At";
	$fieldToolTipsmst_motif["English"]["create_at"] = "";
	$placeHoldersmst_motif["English"]["create_at"] = "";
	$fieldLabelsmst_motif["English"]["create_by"] = "Create By";
	$fieldToolTipsmst_motif["English"]["create_by"] = "";
	$placeHoldersmst_motif["English"]["create_by"] = "";
	$fieldLabelsmst_motif["English"]["yahoo_junle"] = "Yahoo Junle";
	$fieldToolTipsmst_motif["English"]["yahoo_junle"] = "";
	$placeHoldersmst_motif["English"]["yahoo_junle"] = "";
	$fieldLabelsmst_motif["English"]["category_id"] = "Category Id";
	$fieldToolTipsmst_motif["English"]["category_id"] = "";
	$placeHoldersmst_motif["English"]["category_id"] = "";
	$fieldLabelsmst_motif["English"]["sub_category_id1"] = "Sub Category Id1";
	$fieldToolTipsmst_motif["English"]["sub_category_id1"] = "";
	$placeHoldersmst_motif["English"]["sub_category_id1"] = "";
	$fieldLabelsmst_motif["English"]["english_name"] = "English Name";
	$fieldToolTipsmst_motif["English"]["english_name"] = "";
	$placeHoldersmst_motif["English"]["english_name"] = "";
	if (count($fieldToolTipsmst_motif["English"]))
		$tdatamst_motif[".isUseToolTips"] = true;
}


	$tdatamst_motif[".NCSearch"] = true;



$tdatamst_motif[".shortTableName"] = "mst_motif";
$tdatamst_motif[".nSecOptions"] = 0;
$tdatamst_motif[".recsPerRowPrint"] = 1;
$tdatamst_motif[".mainTableOwnerID"] = "";
$tdatamst_motif[".moveNext"] = 1;
$tdatamst_motif[".entityType"] = 0;

$tdatamst_motif[".strOriginalTableName"] = "mst_motif";

	



$tdatamst_motif[".showAddInPopup"] = false;

$tdatamst_motif[".showEditInPopup"] = false;

$tdatamst_motif[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamst_motif[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamst_motif[".fieldsForRegister"] = array();

$tdatamst_motif[".listAjax"] = false;

	$tdatamst_motif[".audit"] = true;

	$tdatamst_motif[".locking"] = false;



$tdatamst_motif[".list"] = true;

$tdatamst_motif[".inlineEdit"] = true;


$tdatamst_motif[".reorderRecordsByHeader"] = true;



$tdatamst_motif[".inlineAdd"] = true;

$tdatamst_motif[".import"] = true;

$tdatamst_motif[".exportTo"] = true;

$tdatamst_motif[".printFriendly"] = true;

$tdatamst_motif[".delete"] = true;

$tdatamst_motif[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamst_motif[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamst_motif[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamst_motif[".searchSaving"] = false;
//

$tdatamst_motif[".showSearchPanel"] = true;
		$tdatamst_motif[".flexibleSearch"] = true;

$tdatamst_motif[".isUseAjaxSuggest"] = true;

$tdatamst_motif[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatamst_motif[".ajaxCodeSnippetAdded"] = false;

$tdatamst_motif[".buttonsAdded"] = false;

$tdatamst_motif[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamst_motif[".isUseTimeForSearch"] = false;





$tdatamst_motif[".allSearchFields"] = array();
$tdatamst_motif[".filterFields"] = array();
$tdatamst_motif[".requiredSearchFields"] = array();

$tdatamst_motif[".allSearchFields"][] = "id";
	$tdatamst_motif[".allSearchFields"][] = "name";
	$tdatamst_motif[".allSearchFields"][] = "sort";
	$tdatamst_motif[".allSearchFields"][] = "update_at";
	$tdatamst_motif[".allSearchFields"][] = "update_by";
	$tdatamst_motif[".allSearchFields"][] = "create_at";
	$tdatamst_motif[".allSearchFields"][] = "create_by";
	$tdatamst_motif[".allSearchFields"][] = "yahoo_junle";
	$tdatamst_motif[".allSearchFields"][] = "category_id";
	$tdatamst_motif[".allSearchFields"][] = "sub_category_id1";
	$tdatamst_motif[".allSearchFields"][] = "english_name";
	

$tdatamst_motif[".googleLikeFields"] = array();
$tdatamst_motif[".googleLikeFields"][] = "id";
$tdatamst_motif[".googleLikeFields"][] = "name";
$tdatamst_motif[".googleLikeFields"][] = "sort";
$tdatamst_motif[".googleLikeFields"][] = "update_at";
$tdatamst_motif[".googleLikeFields"][] = "update_by";
$tdatamst_motif[".googleLikeFields"][] = "create_at";
$tdatamst_motif[".googleLikeFields"][] = "create_by";
$tdatamst_motif[".googleLikeFields"][] = "yahoo_junle";
$tdatamst_motif[".googleLikeFields"][] = "category_id";
$tdatamst_motif[".googleLikeFields"][] = "sub_category_id1";
$tdatamst_motif[".googleLikeFields"][] = "english_name";

$tdatamst_motif[".panelSearchFields"] = array();
$tdatamst_motif[".searchPanelOptions"] = array();
$tdatamst_motif[".panelSearchFields"][] = "name";
	$tdatamst_motif[".panelSearchFields"][] = "yahoo_junle";
	
$tdatamst_motif[".advSearchFields"] = array();
$tdatamst_motif[".advSearchFields"][] = "id";
$tdatamst_motif[".advSearchFields"][] = "name";
$tdatamst_motif[".advSearchFields"][] = "sort";
$tdatamst_motif[".advSearchFields"][] = "update_at";
$tdatamst_motif[".advSearchFields"][] = "update_by";
$tdatamst_motif[".advSearchFields"][] = "create_at";
$tdatamst_motif[".advSearchFields"][] = "create_by";
$tdatamst_motif[".advSearchFields"][] = "yahoo_junle";
$tdatamst_motif[".advSearchFields"][] = "category_id";
$tdatamst_motif[".advSearchFields"][] = "sub_category_id1";
$tdatamst_motif[".advSearchFields"][] = "english_name";

$tdatamst_motif[".tableType"] = "list";

$tdatamst_motif[".printerPageOrientation"] = 0;
$tdatamst_motif[".nPrinterPageScale"] = 100;

$tdatamst_motif[".nPrinterSplitRecords"] = 40;

$tdatamst_motif[".nPrinterPDFSplitRecords"] = 40;



$tdatamst_motif[".geocodingEnabled"] = false;





$tdatamst_motif[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamst_motif[".pageSize"] = 500;

$tdatamst_motif[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY id DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamst_motif[".strOrderBy"] = $tstrOrderBy;

$tdatamst_motif[".orderindexes"] = array();
$tdatamst_motif[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "`id`");

$tdatamst_motif[".sqlHead"] = "SELECT id,  name,  sort,  update_at,  update_by,  create_at,  create_by,  yahoo_junle,  category_id,  sub_category_id1,  english_name";
$tdatamst_motif[".sqlFrom"] = "FROM mst_motif";
$tdatamst_motif[".sqlWhereExpr"] = "";
$tdatamst_motif[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamst_motif[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamst_motif[".arrGroupsPerPage"] = $arrGPP;

$tdatamst_motif[".highlightSearchResults"] = true;

$tableKeysmst_motif = array();
$tableKeysmst_motif[] = "id";
$tdatamst_motif[".Keys"] = $tableKeysmst_motif;

$tdatamst_motif[".listFields"] = array();
$tdatamst_motif[".listFields"][] = "id";
$tdatamst_motif[".listFields"][] = "name";
$tdatamst_motif[".listFields"][] = "english_name";
$tdatamst_motif[".listFields"][] = "sort";
$tdatamst_motif[".listFields"][] = "yahoo_junle";
$tdatamst_motif[".listFields"][] = "category_id";
$tdatamst_motif[".listFields"][] = "sub_category_id1";
$tdatamst_motif[".listFields"][] = "update_by";
$tdatamst_motif[".listFields"][] = "update_at";
$tdatamst_motif[".listFields"][] = "create_by";
$tdatamst_motif[".listFields"][] = "create_at";

$tdatamst_motif[".hideMobileList"] = array();


$tdatamst_motif[".viewFields"] = array();

$tdatamst_motif[".addFields"] = array();

$tdatamst_motif[".masterListFields"] = array();
$tdatamst_motif[".masterListFields"][] = "id";
$tdatamst_motif[".masterListFields"][] = "name";
$tdatamst_motif[".masterListFields"][] = "sort";
$tdatamst_motif[".masterListFields"][] = "update_at";
$tdatamst_motif[".masterListFields"][] = "update_by";
$tdatamst_motif[".masterListFields"][] = "create_at";
$tdatamst_motif[".masterListFields"][] = "create_by";
$tdatamst_motif[".masterListFields"][] = "yahoo_junle";
$tdatamst_motif[".masterListFields"][] = "category_id";
$tdatamst_motif[".masterListFields"][] = "sub_category_id1";
$tdatamst_motif[".masterListFields"][] = "english_name";

$tdatamst_motif[".inlineAddFields"] = array();
$tdatamst_motif[".inlineAddFields"][] = "name";
$tdatamst_motif[".inlineAddFields"][] = "english_name";
$tdatamst_motif[".inlineAddFields"][] = "sort";
$tdatamst_motif[".inlineAddFields"][] = "yahoo_junle";
$tdatamst_motif[".inlineAddFields"][] = "category_id";
$tdatamst_motif[".inlineAddFields"][] = "sub_category_id1";

$tdatamst_motif[".editFields"] = array();

$tdatamst_motif[".inlineEditFields"] = array();
$tdatamst_motif[".inlineEditFields"][] = "name";
$tdatamst_motif[".inlineEditFields"][] = "english_name";
$tdatamst_motif[".inlineEditFields"][] = "sort";
$tdatamst_motif[".inlineEditFields"][] = "yahoo_junle";
$tdatamst_motif[".inlineEditFields"][] = "category_id";
$tdatamst_motif[".inlineEditFields"][] = "sub_category_id1";

$tdatamst_motif[".updateSelectedFields"] = array();


$tdatamst_motif[".exportFields"] = array();
$tdatamst_motif[".exportFields"][] = "id";
$tdatamst_motif[".exportFields"][] = "name";
$tdatamst_motif[".exportFields"][] = "sort";
$tdatamst_motif[".exportFields"][] = "update_at";
$tdatamst_motif[".exportFields"][] = "update_by";
$tdatamst_motif[".exportFields"][] = "create_at";
$tdatamst_motif[".exportFields"][] = "create_by";
$tdatamst_motif[".exportFields"][] = "yahoo_junle";
$tdatamst_motif[".exportFields"][] = "category_id";
$tdatamst_motif[".exportFields"][] = "sub_category_id1";
$tdatamst_motif[".exportFields"][] = "english_name";

$tdatamst_motif[".importFields"] = array();
$tdatamst_motif[".importFields"][] = "id";
$tdatamst_motif[".importFields"][] = "name";
$tdatamst_motif[".importFields"][] = "sort";
$tdatamst_motif[".importFields"][] = "yahoo_junle";
$tdatamst_motif[".importFields"][] = "category_id";
$tdatamst_motif[".importFields"][] = "sub_category_id1";
$tdatamst_motif[".importFields"][] = "english_name";

$tdatamst_motif[".printFields"] = array();
$tdatamst_motif[".printFields"][] = "id";
$tdatamst_motif[".printFields"][] = "name";
$tdatamst_motif[".printFields"][] = "sort";
$tdatamst_motif[".printFields"][] = "update_at";
$tdatamst_motif[".printFields"][] = "update_by";
$tdatamst_motif[".printFields"][] = "create_at";
$tdatamst_motif[".printFields"][] = "create_by";
$tdatamst_motif[".printFields"][] = "yahoo_junle";
$tdatamst_motif[".printFields"][] = "category_id";
$tdatamst_motif[".printFields"][] = "sub_category_id1";
$tdatamst_motif[".printFields"][] = "english_name";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "mst_motif";
	$fdata["Label"] = GetFieldLabel("mst_motif","id");
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




	$tdatamst_motif["id"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "mst_motif";
	$fdata["Label"] = GetFieldLabel("mst_motif","name");
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




	$tdatamst_motif["name"] = $fdata;
//	sort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sort";
	$fdata["GoodName"] = "sort";
	$fdata["ownerTable"] = "mst_motif";
	$fdata["Label"] = GetFieldLabel("mst_motif","sort");
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




	$tdatamst_motif["sort"] = $fdata;
//	update_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "update_at";
	$fdata["GoodName"] = "update_at";
	$fdata["ownerTable"] = "mst_motif";
	$fdata["Label"] = GetFieldLabel("mst_motif","update_at");
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




	$tdatamst_motif["update_at"] = $fdata;
//	update_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "update_by";
	$fdata["GoodName"] = "update_by";
	$fdata["ownerTable"] = "mst_motif";
	$fdata["Label"] = GetFieldLabel("mst_motif","update_by");
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




	$tdatamst_motif["update_by"] = $fdata;
//	create_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "create_at";
	$fdata["GoodName"] = "create_at";
	$fdata["ownerTable"] = "mst_motif";
	$fdata["Label"] = GetFieldLabel("mst_motif","create_at");
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




	$tdatamst_motif["create_at"] = $fdata;
//	create_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "create_by";
	$fdata["GoodName"] = "create_by";
	$fdata["ownerTable"] = "mst_motif";
	$fdata["Label"] = GetFieldLabel("mst_motif","create_by");
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




	$tdatamst_motif["create_by"] = $fdata;
//	yahoo_junle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "yahoo_junle";
	$fdata["GoodName"] = "yahoo_junle";
	$fdata["ownerTable"] = "mst_motif";
	$fdata["Label"] = GetFieldLabel("mst_motif","yahoo_junle");
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




	$tdatamst_motif["yahoo_junle"] = $fdata;
//	category_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "category_id";
	$fdata["GoodName"] = "category_id";
	$fdata["ownerTable"] = "mst_motif";
	$fdata["Label"] = GetFieldLabel("mst_motif","category_id");
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




	$tdatamst_motif["category_id"] = $fdata;
//	sub_category_id1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "sub_category_id1";
	$fdata["GoodName"] = "sub_category_id1";
	$fdata["ownerTable"] = "mst_motif";
	$fdata["Label"] = GetFieldLabel("mst_motif","sub_category_id1");
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




	$tdatamst_motif["sub_category_id1"] = $fdata;
//	english_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "english_name";
	$fdata["GoodName"] = "english_name";
	$fdata["ownerTable"] = "mst_motif";
	$fdata["Label"] = GetFieldLabel("mst_motif","english_name");
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




	$tdatamst_motif["english_name"] = $fdata;


$tables_data["mst_motif"]=&$tdatamst_motif;
$field_labels["mst_motif"] = &$fieldLabelsmst_motif;
$fieldToolTips["mst_motif"] = &$fieldToolTipsmst_motif;
$placeHolders["mst_motif"] = &$placeHoldersmst_motif;
$page_titles["mst_motif"] = &$pageTitlesmst_motif;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mst_motif"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mst_motif"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mst_motif()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  name,  sort,  update_at,  update_by,  create_at,  create_by,  yahoo_junle,  category_id,  sub_category_id1,  english_name";
$proto0["m_strFrom"] = "FROM mst_motif";
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
	"m_strTable" => "mst_motif",
	"m_srcTableName" => "mst_motif"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "mst_motif";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "mst_motif",
	"m_srcTableName" => "mst_motif"
));

$proto8["m_sql"] = "name";
$proto8["m_srcTableName"] = "mst_motif";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "sort",
	"m_strTable" => "mst_motif",
	"m_srcTableName" => "mst_motif"
));

$proto10["m_sql"] = "sort";
$proto10["m_srcTableName"] = "mst_motif";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "update_at",
	"m_strTable" => "mst_motif",
	"m_srcTableName" => "mst_motif"
));

$proto12["m_sql"] = "update_at";
$proto12["m_srcTableName"] = "mst_motif";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "update_by",
	"m_strTable" => "mst_motif",
	"m_srcTableName" => "mst_motif"
));

$proto14["m_sql"] = "update_by";
$proto14["m_srcTableName"] = "mst_motif";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "create_at",
	"m_strTable" => "mst_motif",
	"m_srcTableName" => "mst_motif"
));

$proto16["m_sql"] = "create_at";
$proto16["m_srcTableName"] = "mst_motif";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "create_by",
	"m_strTable" => "mst_motif",
	"m_srcTableName" => "mst_motif"
));

$proto18["m_sql"] = "create_by";
$proto18["m_srcTableName"] = "mst_motif";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_junle",
	"m_strTable" => "mst_motif",
	"m_srcTableName" => "mst_motif"
));

$proto20["m_sql"] = "yahoo_junle";
$proto20["m_srcTableName"] = "mst_motif";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "category_id",
	"m_strTable" => "mst_motif",
	"m_srcTableName" => "mst_motif"
));

$proto22["m_sql"] = "category_id";
$proto22["m_srcTableName"] = "mst_motif";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "sub_category_id1",
	"m_strTable" => "mst_motif",
	"m_srcTableName" => "mst_motif"
));

$proto24["m_sql"] = "sub_category_id1";
$proto24["m_srcTableName"] = "mst_motif";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "english_name",
	"m_strTable" => "mst_motif",
	"m_srcTableName" => "mst_motif"
));

$proto26["m_sql"] = "english_name";
$proto26["m_srcTableName"] = "mst_motif";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto28=array();
$proto28["m_link"] = "SQLL_MAIN";
			$proto29=array();
$proto29["m_strName"] = "mst_motif";
$proto29["m_srcTableName"] = "mst_motif";
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
$proto28["m_sql"] = "mst_motif";
$proto28["m_alias"] = "";
$proto28["m_srcTableName"] = "mst_motif";
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
	"m_strTable" => "mst_motif",
	"m_srcTableName" => "mst_motif"
));

$proto32["m_column"]=$obj;
$proto32["m_bAsc"] = 0;
$proto32["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto32);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="mst_motif";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mst_motif = createSqlQuery_mst_motif();


	
		;

											

$tdatamst_motif[".sqlquery"] = $queryData_mst_motif;

include_once(getabspath("include/mst_motif_events.php"));
$tableEvents["mst_motif"] = new eventclass_mst_motif;
$tdatamst_motif[".hasEvents"] = true;

?>