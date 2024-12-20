<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamst_satei_error = array();
	$tdatamst_satei_error[".truncateText"] = true;
	$tdatamst_satei_error[".NumberOfChars"] = 80;
	$tdatamst_satei_error[".ShortName"] = "mst_satei_error";
	$tdatamst_satei_error[".OwnerID"] = "";
	$tdatamst_satei_error[".OriginalTable"] = "mst_satei_error";

//	field labels
$fieldLabelsmst_satei_error = array();
$fieldToolTipsmst_satei_error = array();
$pageTitlesmst_satei_error = array();
$placeHoldersmst_satei_error = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmst_satei_error["Japanese"] = array();
	$fieldToolTipsmst_satei_error["Japanese"] = array();
	$placeHoldersmst_satei_error["Japanese"] = array();
	$pageTitlesmst_satei_error["Japanese"] = array();
	$fieldLabelsmst_satei_error["Japanese"]["id"] = "Id";
	$fieldToolTipsmst_satei_error["Japanese"]["id"] = "";
	$placeHoldersmst_satei_error["Japanese"]["id"] = "";
	$fieldLabelsmst_satei_error["Japanese"]["name"] = "Name";
	$fieldToolTipsmst_satei_error["Japanese"]["name"] = "";
	$placeHoldersmst_satei_error["Japanese"]["name"] = "";
	$fieldLabelsmst_satei_error["Japanese"]["sort"] = "Sort";
	$fieldToolTipsmst_satei_error["Japanese"]["sort"] = "";
	$placeHoldersmst_satei_error["Japanese"]["sort"] = "";
	$fieldLabelsmst_satei_error["Japanese"]["category_id"] = "大カテゴリー";
	$fieldToolTipsmst_satei_error["Japanese"]["category_id"] = "";
	$placeHoldersmst_satei_error["Japanese"]["category_id"] = "";
	$fieldLabelsmst_satei_error["Japanese"]["sub_category_id1"] = "中カテゴリー";
	$fieldToolTipsmst_satei_error["Japanese"]["sub_category_id1"] = "";
	$placeHoldersmst_satei_error["Japanese"]["sub_category_id1"] = "";
	$fieldLabelsmst_satei_error["Japanese"]["yahoo_junle"] = "ブランドID";
	$fieldToolTipsmst_satei_error["Japanese"]["yahoo_junle"] = "";
	$placeHoldersmst_satei_error["Japanese"]["yahoo_junle"] = "";
	$fieldLabelsmst_satei_error["Japanese"]["update_by"] = "更新者";
	$fieldToolTipsmst_satei_error["Japanese"]["update_by"] = "";
	$placeHoldersmst_satei_error["Japanese"]["update_by"] = "";
	$fieldLabelsmst_satei_error["Japanese"]["update_at"] = "更新日";
	$fieldToolTipsmst_satei_error["Japanese"]["update_at"] = "";
	$placeHoldersmst_satei_error["Japanese"]["update_at"] = "";
	$fieldLabelsmst_satei_error["Japanese"]["create_by"] = "登録者";
	$fieldToolTipsmst_satei_error["Japanese"]["create_by"] = "";
	$placeHoldersmst_satei_error["Japanese"]["create_by"] = "";
	$fieldLabelsmst_satei_error["Japanese"]["create_at"] = "登録日";
	$fieldToolTipsmst_satei_error["Japanese"]["create_at"] = "";
	$placeHoldersmst_satei_error["Japanese"]["create_at"] = "";
	if (count($fieldToolTipsmst_satei_error["Japanese"]))
		$tdatamst_satei_error[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmst_satei_error[""] = array();
	$fieldToolTipsmst_satei_error[""] = array();
	$placeHoldersmst_satei_error[""] = array();
	$pageTitlesmst_satei_error[""] = array();
	$fieldLabelsmst_satei_error[""]["id"] = "Id";
	$fieldToolTipsmst_satei_error[""]["id"] = "";
	$placeHoldersmst_satei_error[""]["id"] = "";
	$fieldLabelsmst_satei_error[""]["name"] = "Name";
	$fieldToolTipsmst_satei_error[""]["name"] = "";
	$placeHoldersmst_satei_error[""]["name"] = "";
	$fieldLabelsmst_satei_error[""]["sort"] = "Sort";
	$fieldToolTipsmst_satei_error[""]["sort"] = "";
	$placeHoldersmst_satei_error[""]["sort"] = "";
	$fieldLabelsmst_satei_error[""]["category_id"] = "Category Id";
	$fieldToolTipsmst_satei_error[""]["category_id"] = "";
	$placeHoldersmst_satei_error[""]["category_id"] = "";
	$fieldLabelsmst_satei_error[""]["sub_category_id1"] = "Sub Category Id1";
	$fieldToolTipsmst_satei_error[""]["sub_category_id1"] = "";
	$placeHoldersmst_satei_error[""]["sub_category_id1"] = "";
	$fieldLabelsmst_satei_error[""]["yahoo_junle"] = "Yahoo Junle";
	$fieldToolTipsmst_satei_error[""]["yahoo_junle"] = "";
	$placeHoldersmst_satei_error[""]["yahoo_junle"] = "";
	$fieldLabelsmst_satei_error[""]["update_by"] = "Update By";
	$fieldToolTipsmst_satei_error[""]["update_by"] = "";
	$placeHoldersmst_satei_error[""]["update_by"] = "";
	$fieldLabelsmst_satei_error[""]["update_at"] = "Update At";
	$fieldToolTipsmst_satei_error[""]["update_at"] = "";
	$placeHoldersmst_satei_error[""]["update_at"] = "";
	$fieldLabelsmst_satei_error[""]["create_by"] = "Create By";
	$fieldToolTipsmst_satei_error[""]["create_by"] = "";
	$placeHoldersmst_satei_error[""]["create_by"] = "";
	$fieldLabelsmst_satei_error[""]["create_at"] = "Create At";
	$fieldToolTipsmst_satei_error[""]["create_at"] = "";
	$placeHoldersmst_satei_error[""]["create_at"] = "";
	if (count($fieldToolTipsmst_satei_error[""]))
		$tdatamst_satei_error[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmst_satei_error["English"] = array();
	$fieldToolTipsmst_satei_error["English"] = array();
	$placeHoldersmst_satei_error["English"] = array();
	$pageTitlesmst_satei_error["English"] = array();
	$fieldLabelsmst_satei_error["English"]["id"] = "Id";
	$fieldToolTipsmst_satei_error["English"]["id"] = "";
	$placeHoldersmst_satei_error["English"]["id"] = "";
	$fieldLabelsmst_satei_error["English"]["name"] = "Name";
	$fieldToolTipsmst_satei_error["English"]["name"] = "";
	$placeHoldersmst_satei_error["English"]["name"] = "";
	$fieldLabelsmst_satei_error["English"]["sort"] = "Sort";
	$fieldToolTipsmst_satei_error["English"]["sort"] = "";
	$placeHoldersmst_satei_error["English"]["sort"] = "";
	$fieldLabelsmst_satei_error["English"]["category_id"] = "Category Id";
	$fieldToolTipsmst_satei_error["English"]["category_id"] = "";
	$placeHoldersmst_satei_error["English"]["category_id"] = "";
	$fieldLabelsmst_satei_error["English"]["sub_category_id1"] = "Sub Category Id1";
	$fieldToolTipsmst_satei_error["English"]["sub_category_id1"] = "";
	$placeHoldersmst_satei_error["English"]["sub_category_id1"] = "";
	$fieldLabelsmst_satei_error["English"]["yahoo_junle"] = "Yahoo Junle";
	$fieldToolTipsmst_satei_error["English"]["yahoo_junle"] = "";
	$placeHoldersmst_satei_error["English"]["yahoo_junle"] = "";
	$fieldLabelsmst_satei_error["English"]["update_by"] = "Update By";
	$fieldToolTipsmst_satei_error["English"]["update_by"] = "";
	$placeHoldersmst_satei_error["English"]["update_by"] = "";
	$fieldLabelsmst_satei_error["English"]["update_at"] = "Update At";
	$fieldToolTipsmst_satei_error["English"]["update_at"] = "";
	$placeHoldersmst_satei_error["English"]["update_at"] = "";
	$fieldLabelsmst_satei_error["English"]["create_by"] = "Create By";
	$fieldToolTipsmst_satei_error["English"]["create_by"] = "";
	$placeHoldersmst_satei_error["English"]["create_by"] = "";
	$fieldLabelsmst_satei_error["English"]["create_at"] = "Create At";
	$fieldToolTipsmst_satei_error["English"]["create_at"] = "";
	$placeHoldersmst_satei_error["English"]["create_at"] = "";
	if (count($fieldToolTipsmst_satei_error["English"]))
		$tdatamst_satei_error[".isUseToolTips"] = true;
}


	$tdatamst_satei_error[".NCSearch"] = true;



$tdatamst_satei_error[".shortTableName"] = "mst_satei_error";
$tdatamst_satei_error[".nSecOptions"] = 0;
$tdatamst_satei_error[".recsPerRowPrint"] = 1;
$tdatamst_satei_error[".mainTableOwnerID"] = "";
$tdatamst_satei_error[".moveNext"] = 1;
$tdatamst_satei_error[".entityType"] = 0;

$tdatamst_satei_error[".strOriginalTableName"] = "mst_satei_error";

	



$tdatamst_satei_error[".showAddInPopup"] = false;

$tdatamst_satei_error[".showEditInPopup"] = false;

$tdatamst_satei_error[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamst_satei_error[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamst_satei_error[".fieldsForRegister"] = array();

$tdatamst_satei_error[".listAjax"] = false;

	$tdatamst_satei_error[".audit"] = true;

	$tdatamst_satei_error[".locking"] = false;



$tdatamst_satei_error[".list"] = true;

$tdatamst_satei_error[".inlineEdit"] = true;


$tdatamst_satei_error[".reorderRecordsByHeader"] = true;



$tdatamst_satei_error[".inlineAdd"] = true;

$tdatamst_satei_error[".import"] = true;

$tdatamst_satei_error[".exportTo"] = true;

$tdatamst_satei_error[".printFriendly"] = true;

$tdatamst_satei_error[".delete"] = true;

$tdatamst_satei_error[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamst_satei_error[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamst_satei_error[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamst_satei_error[".searchSaving"] = false;
//

$tdatamst_satei_error[".showSearchPanel"] = true;
		$tdatamst_satei_error[".flexibleSearch"] = true;

$tdatamst_satei_error[".isUseAjaxSuggest"] = true;

$tdatamst_satei_error[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatamst_satei_error[".ajaxCodeSnippetAdded"] = false;

$tdatamst_satei_error[".buttonsAdded"] = false;

$tdatamst_satei_error[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamst_satei_error[".isUseTimeForSearch"] = false;





$tdatamst_satei_error[".allSearchFields"] = array();
$tdatamst_satei_error[".filterFields"] = array();
$tdatamst_satei_error[".requiredSearchFields"] = array();

$tdatamst_satei_error[".allSearchFields"][] = "id";
	$tdatamst_satei_error[".allSearchFields"][] = "name";
	$tdatamst_satei_error[".allSearchFields"][] = "sort";
	$tdatamst_satei_error[".allSearchFields"][] = "category_id";
	$tdatamst_satei_error[".allSearchFields"][] = "sub_category_id1";
	$tdatamst_satei_error[".allSearchFields"][] = "yahoo_junle";
	$tdatamst_satei_error[".allSearchFields"][] = "update_by";
	$tdatamst_satei_error[".allSearchFields"][] = "update_at";
	$tdatamst_satei_error[".allSearchFields"][] = "create_by";
	$tdatamst_satei_error[".allSearchFields"][] = "create_at";
	

$tdatamst_satei_error[".googleLikeFields"] = array();
$tdatamst_satei_error[".googleLikeFields"][] = "id";
$tdatamst_satei_error[".googleLikeFields"][] = "name";
$tdatamst_satei_error[".googleLikeFields"][] = "sort";
$tdatamst_satei_error[".googleLikeFields"][] = "category_id";
$tdatamst_satei_error[".googleLikeFields"][] = "sub_category_id1";
$tdatamst_satei_error[".googleLikeFields"][] = "yahoo_junle";
$tdatamst_satei_error[".googleLikeFields"][] = "update_by";
$tdatamst_satei_error[".googleLikeFields"][] = "update_at";
$tdatamst_satei_error[".googleLikeFields"][] = "create_by";
$tdatamst_satei_error[".googleLikeFields"][] = "create_at";


$tdatamst_satei_error[".advSearchFields"] = array();
$tdatamst_satei_error[".advSearchFields"][] = "id";
$tdatamst_satei_error[".advSearchFields"][] = "name";
$tdatamst_satei_error[".advSearchFields"][] = "sort";
$tdatamst_satei_error[".advSearchFields"][] = "category_id";
$tdatamst_satei_error[".advSearchFields"][] = "sub_category_id1";
$tdatamst_satei_error[".advSearchFields"][] = "yahoo_junle";
$tdatamst_satei_error[".advSearchFields"][] = "update_by";
$tdatamst_satei_error[".advSearchFields"][] = "update_at";
$tdatamst_satei_error[".advSearchFields"][] = "create_by";
$tdatamst_satei_error[".advSearchFields"][] = "create_at";

$tdatamst_satei_error[".tableType"] = "list";

$tdatamst_satei_error[".printerPageOrientation"] = 0;
$tdatamst_satei_error[".nPrinterPageScale"] = 100;

$tdatamst_satei_error[".nPrinterSplitRecords"] = 40;

$tdatamst_satei_error[".nPrinterPDFSplitRecords"] = 40;



$tdatamst_satei_error[".geocodingEnabled"] = false;





$tdatamst_satei_error[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamst_satei_error[".pageSize"] = 100;

$tdatamst_satei_error[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY id DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamst_satei_error[".strOrderBy"] = $tstrOrderBy;

$tdatamst_satei_error[".orderindexes"] = array();
$tdatamst_satei_error[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "`id`");

$tdatamst_satei_error[".sqlHead"] = "SELECT id,  name,  sort,  category_id,  sub_category_id1,  yahoo_junle,  update_by,  update_at,  create_by,  create_at";
$tdatamst_satei_error[".sqlFrom"] = "FROM mst_satei_error";
$tdatamst_satei_error[".sqlWhereExpr"] = "";
$tdatamst_satei_error[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamst_satei_error[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamst_satei_error[".arrGroupsPerPage"] = $arrGPP;

$tdatamst_satei_error[".highlightSearchResults"] = true;

$tableKeysmst_satei_error = array();
$tableKeysmst_satei_error[] = "id";
$tdatamst_satei_error[".Keys"] = $tableKeysmst_satei_error;

$tdatamst_satei_error[".listFields"] = array();
$tdatamst_satei_error[".listFields"][] = "id";
$tdatamst_satei_error[".listFields"][] = "name";
$tdatamst_satei_error[".listFields"][] = "sort";
$tdatamst_satei_error[".listFields"][] = "category_id";
$tdatamst_satei_error[".listFields"][] = "sub_category_id1";
$tdatamst_satei_error[".listFields"][] = "yahoo_junle";
$tdatamst_satei_error[".listFields"][] = "update_by";
$tdatamst_satei_error[".listFields"][] = "update_at";
$tdatamst_satei_error[".listFields"][] = "create_by";
$tdatamst_satei_error[".listFields"][] = "create_at";

$tdatamst_satei_error[".hideMobileList"] = array();


$tdatamst_satei_error[".viewFields"] = array();

$tdatamst_satei_error[".addFields"] = array();

$tdatamst_satei_error[".masterListFields"] = array();
$tdatamst_satei_error[".masterListFields"][] = "id";
$tdatamst_satei_error[".masterListFields"][] = "name";
$tdatamst_satei_error[".masterListFields"][] = "sort";
$tdatamst_satei_error[".masterListFields"][] = "category_id";
$tdatamst_satei_error[".masterListFields"][] = "sub_category_id1";
$tdatamst_satei_error[".masterListFields"][] = "yahoo_junle";
$tdatamst_satei_error[".masterListFields"][] = "update_by";
$tdatamst_satei_error[".masterListFields"][] = "update_at";
$tdatamst_satei_error[".masterListFields"][] = "create_by";
$tdatamst_satei_error[".masterListFields"][] = "create_at";

$tdatamst_satei_error[".inlineAddFields"] = array();
$tdatamst_satei_error[".inlineAddFields"][] = "name";
$tdatamst_satei_error[".inlineAddFields"][] = "sort";
$tdatamst_satei_error[".inlineAddFields"][] = "category_id";
$tdatamst_satei_error[".inlineAddFields"][] = "sub_category_id1";
$tdatamst_satei_error[".inlineAddFields"][] = "yahoo_junle";

$tdatamst_satei_error[".editFields"] = array();

$tdatamst_satei_error[".inlineEditFields"] = array();
$tdatamst_satei_error[".inlineEditFields"][] = "name";
$tdatamst_satei_error[".inlineEditFields"][] = "sort";
$tdatamst_satei_error[".inlineEditFields"][] = "category_id";
$tdatamst_satei_error[".inlineEditFields"][] = "sub_category_id1";
$tdatamst_satei_error[".inlineEditFields"][] = "yahoo_junle";

$tdatamst_satei_error[".updateSelectedFields"] = array();


$tdatamst_satei_error[".exportFields"] = array();
$tdatamst_satei_error[".exportFields"][] = "id";
$tdatamst_satei_error[".exportFields"][] = "name";
$tdatamst_satei_error[".exportFields"][] = "sort";
$tdatamst_satei_error[".exportFields"][] = "category_id";
$tdatamst_satei_error[".exportFields"][] = "sub_category_id1";
$tdatamst_satei_error[".exportFields"][] = "yahoo_junle";
$tdatamst_satei_error[".exportFields"][] = "update_by";
$tdatamst_satei_error[".exportFields"][] = "update_at";
$tdatamst_satei_error[".exportFields"][] = "create_by";
$tdatamst_satei_error[".exportFields"][] = "create_at";

$tdatamst_satei_error[".importFields"] = array();
$tdatamst_satei_error[".importFields"][] = "id";
$tdatamst_satei_error[".importFields"][] = "name";
$tdatamst_satei_error[".importFields"][] = "sort";
$tdatamst_satei_error[".importFields"][] = "category_id";
$tdatamst_satei_error[".importFields"][] = "sub_category_id1";
$tdatamst_satei_error[".importFields"][] = "yahoo_junle";

$tdatamst_satei_error[".printFields"] = array();
$tdatamst_satei_error[".printFields"][] = "id";
$tdatamst_satei_error[".printFields"][] = "name";
$tdatamst_satei_error[".printFields"][] = "sort";
$tdatamst_satei_error[".printFields"][] = "category_id";
$tdatamst_satei_error[".printFields"][] = "sub_category_id1";
$tdatamst_satei_error[".printFields"][] = "yahoo_junle";
$tdatamst_satei_error[".printFields"][] = "update_by";
$tdatamst_satei_error[".printFields"][] = "update_at";
$tdatamst_satei_error[".printFields"][] = "create_by";
$tdatamst_satei_error[".printFields"][] = "create_at";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "mst_satei_error";
	$fdata["Label"] = GetFieldLabel("mst_satei_error","id");
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




	$tdatamst_satei_error["id"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "mst_satei_error";
	$fdata["Label"] = GetFieldLabel("mst_satei_error","name");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "mst_satei_error_item";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "name";

	
	$edata["LookupOrderBy"] = "sort";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatamst_satei_error["name"] = $fdata;
//	sort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sort";
	$fdata["GoodName"] = "sort";
	$fdata["ownerTable"] = "mst_satei_error";
	$fdata["Label"] = GetFieldLabel("mst_satei_error","sort");
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




	$tdatamst_satei_error["sort"] = $fdata;
//	category_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "category_id";
	$fdata["GoodName"] = "category_id";
	$fdata["ownerTable"] = "mst_satei_error";
	$fdata["Label"] = GetFieldLabel("mst_satei_error","category_id");
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




	$tdatamst_satei_error["category_id"] = $fdata;
//	sub_category_id1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "sub_category_id1";
	$fdata["GoodName"] = "sub_category_id1";
	$fdata["ownerTable"] = "mst_satei_error";
	$fdata["Label"] = GetFieldLabel("mst_satei_error","sub_category_id1");
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




	$tdatamst_satei_error["sub_category_id1"] = $fdata;
//	yahoo_junle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "yahoo_junle";
	$fdata["GoodName"] = "yahoo_junle";
	$fdata["ownerTable"] = "mst_satei_error";
	$fdata["Label"] = GetFieldLabel("mst_satei_error","yahoo_junle");
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

	
		
	$edata["LinkField"] = "name";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "name";

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
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




	$tdatamst_satei_error["yahoo_junle"] = $fdata;
//	update_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "update_by";
	$fdata["GoodName"] = "update_by";
	$fdata["ownerTable"] = "mst_satei_error";
	$fdata["Label"] = GetFieldLabel("mst_satei_error","update_by");
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




	$tdatamst_satei_error["update_by"] = $fdata;
//	update_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "update_at";
	$fdata["GoodName"] = "update_at";
	$fdata["ownerTable"] = "mst_satei_error";
	$fdata["Label"] = GetFieldLabel("mst_satei_error","update_at");
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




	$tdatamst_satei_error["update_at"] = $fdata;
//	create_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "create_by";
	$fdata["GoodName"] = "create_by";
	$fdata["ownerTable"] = "mst_satei_error";
	$fdata["Label"] = GetFieldLabel("mst_satei_error","create_by");
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




	$tdatamst_satei_error["create_by"] = $fdata;
//	create_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "create_at";
	$fdata["GoodName"] = "create_at";
	$fdata["ownerTable"] = "mst_satei_error";
	$fdata["Label"] = GetFieldLabel("mst_satei_error","create_at");
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




	$tdatamst_satei_error["create_at"] = $fdata;


$tables_data["mst_satei_error"]=&$tdatamst_satei_error;
$field_labels["mst_satei_error"] = &$fieldLabelsmst_satei_error;
$fieldToolTips["mst_satei_error"] = &$fieldToolTipsmst_satei_error;
$placeHolders["mst_satei_error"] = &$placeHoldersmst_satei_error;
$page_titles["mst_satei_error"] = &$pageTitlesmst_satei_error;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mst_satei_error"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mst_satei_error"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mst_satei_error()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  name,  sort,  category_id,  sub_category_id1,  yahoo_junle,  update_by,  update_at,  create_by,  create_at";
$proto0["m_strFrom"] = "FROM mst_satei_error";
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
	"m_strTable" => "mst_satei_error",
	"m_srcTableName" => "mst_satei_error"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "mst_satei_error";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "mst_satei_error",
	"m_srcTableName" => "mst_satei_error"
));

$proto8["m_sql"] = "name";
$proto8["m_srcTableName"] = "mst_satei_error";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "sort",
	"m_strTable" => "mst_satei_error",
	"m_srcTableName" => "mst_satei_error"
));

$proto10["m_sql"] = "sort";
$proto10["m_srcTableName"] = "mst_satei_error";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "category_id",
	"m_strTable" => "mst_satei_error",
	"m_srcTableName" => "mst_satei_error"
));

$proto12["m_sql"] = "category_id";
$proto12["m_srcTableName"] = "mst_satei_error";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "sub_category_id1",
	"m_strTable" => "mst_satei_error",
	"m_srcTableName" => "mst_satei_error"
));

$proto14["m_sql"] = "sub_category_id1";
$proto14["m_srcTableName"] = "mst_satei_error";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_junle",
	"m_strTable" => "mst_satei_error",
	"m_srcTableName" => "mst_satei_error"
));

$proto16["m_sql"] = "yahoo_junle";
$proto16["m_srcTableName"] = "mst_satei_error";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "update_by",
	"m_strTable" => "mst_satei_error",
	"m_srcTableName" => "mst_satei_error"
));

$proto18["m_sql"] = "update_by";
$proto18["m_srcTableName"] = "mst_satei_error";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "update_at",
	"m_strTable" => "mst_satei_error",
	"m_srcTableName" => "mst_satei_error"
));

$proto20["m_sql"] = "update_at";
$proto20["m_srcTableName"] = "mst_satei_error";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "create_by",
	"m_strTable" => "mst_satei_error",
	"m_srcTableName" => "mst_satei_error"
));

$proto22["m_sql"] = "create_by";
$proto22["m_srcTableName"] = "mst_satei_error";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "create_at",
	"m_strTable" => "mst_satei_error",
	"m_srcTableName" => "mst_satei_error"
));

$proto24["m_sql"] = "create_at";
$proto24["m_srcTableName"] = "mst_satei_error";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "mst_satei_error";
$proto27["m_srcTableName"] = "mst_satei_error";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "id";
$proto27["m_columns"][] = "name";
$proto27["m_columns"][] = "sort";
$proto27["m_columns"][] = "category_id";
$proto27["m_columns"][] = "sub_category_id1";
$proto27["m_columns"][] = "yahoo_junle";
$proto27["m_columns"][] = "update_by";
$proto27["m_columns"][] = "update_at";
$proto27["m_columns"][] = "create_by";
$proto27["m_columns"][] = "create_at";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "mst_satei_error";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "mst_satei_error";
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
	"m_strName" => "id",
	"m_strTable" => "mst_satei_error",
	"m_srcTableName" => "mst_satei_error"
));

$proto30["m_column"]=$obj;
$proto30["m_bAsc"] = 0;
$proto30["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto30);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="mst_satei_error";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mst_satei_error = createSqlQuery_mst_satei_error();


	
		;

										

$tdatamst_satei_error[".sqlquery"] = $queryData_mst_satei_error;

include_once(getabspath("include/mst_satei_error_events.php"));
$tableEvents["mst_satei_error"] = new eventclass_mst_satei_error;
$tdatamst_satei_error[".hasEvents"] = true;

?>