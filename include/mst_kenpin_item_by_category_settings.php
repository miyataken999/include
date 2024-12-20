<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamst_kenpin_item_by_category = array();
	$tdatamst_kenpin_item_by_category[".truncateText"] = true;
	$tdatamst_kenpin_item_by_category[".NumberOfChars"] = 80;
	$tdatamst_kenpin_item_by_category[".ShortName"] = "mst_kenpin_item_by_category";
	$tdatamst_kenpin_item_by_category[".OwnerID"] = "";
	$tdatamst_kenpin_item_by_category[".OriginalTable"] = "mst_kenpin_item_by_category";

//	field labels
$fieldLabelsmst_kenpin_item_by_category = array();
$fieldToolTipsmst_kenpin_item_by_category = array();
$pageTitlesmst_kenpin_item_by_category = array();
$placeHoldersmst_kenpin_item_by_category = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmst_kenpin_item_by_category["Japanese"] = array();
	$fieldToolTipsmst_kenpin_item_by_category["Japanese"] = array();
	$placeHoldersmst_kenpin_item_by_category["Japanese"] = array();
	$pageTitlesmst_kenpin_item_by_category["Japanese"] = array();
	$fieldLabelsmst_kenpin_item_by_category["Japanese"]["id"] = "Id";
	$fieldToolTipsmst_kenpin_item_by_category["Japanese"]["id"] = "";
	$placeHoldersmst_kenpin_item_by_category["Japanese"]["id"] = "";
	$fieldLabelsmst_kenpin_item_by_category["Japanese"]["category_id"] = "大カテ";
	$fieldToolTipsmst_kenpin_item_by_category["Japanese"]["category_id"] = "";
	$placeHoldersmst_kenpin_item_by_category["Japanese"]["category_id"] = "";
	$fieldLabelsmst_kenpin_item_by_category["Japanese"]["sub_category_id1"] = "中カテ";
	$fieldToolTipsmst_kenpin_item_by_category["Japanese"]["sub_category_id1"] = "";
	$placeHoldersmst_kenpin_item_by_category["Japanese"]["sub_category_id1"] = "";
	$fieldLabelsmst_kenpin_item_by_category["Japanese"]["name"] = "Name";
	$fieldToolTipsmst_kenpin_item_by_category["Japanese"]["name"] = "";
	$placeHoldersmst_kenpin_item_by_category["Japanese"]["name"] = "";
	$fieldLabelsmst_kenpin_item_by_category["Japanese"]["sort"] = "Sort";
	$fieldToolTipsmst_kenpin_item_by_category["Japanese"]["sort"] = "";
	$placeHoldersmst_kenpin_item_by_category["Japanese"]["sort"] = "";
	$fieldLabelsmst_kenpin_item_by_category["Japanese"]["update_by"] = "更新者";
	$fieldToolTipsmst_kenpin_item_by_category["Japanese"]["update_by"] = "";
	$placeHoldersmst_kenpin_item_by_category["Japanese"]["update_by"] = "";
	$fieldLabelsmst_kenpin_item_by_category["Japanese"]["update_at"] = "更新日";
	$fieldToolTipsmst_kenpin_item_by_category["Japanese"]["update_at"] = "";
	$placeHoldersmst_kenpin_item_by_category["Japanese"]["update_at"] = "";
	$fieldLabelsmst_kenpin_item_by_category["Japanese"]["create_by"] = "登録者";
	$fieldToolTipsmst_kenpin_item_by_category["Japanese"]["create_by"] = "";
	$placeHoldersmst_kenpin_item_by_category["Japanese"]["create_by"] = "";
	$fieldLabelsmst_kenpin_item_by_category["Japanese"]["create_at"] = "登録日";
	$fieldToolTipsmst_kenpin_item_by_category["Japanese"]["create_at"] = "";
	$placeHoldersmst_kenpin_item_by_category["Japanese"]["create_at"] = "";
	if (count($fieldToolTipsmst_kenpin_item_by_category["Japanese"]))
		$tdatamst_kenpin_item_by_category[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmst_kenpin_item_by_category[""] = array();
	$fieldToolTipsmst_kenpin_item_by_category[""] = array();
	$placeHoldersmst_kenpin_item_by_category[""] = array();
	$pageTitlesmst_kenpin_item_by_category[""] = array();
	$fieldLabelsmst_kenpin_item_by_category[""]["id"] = "Id";
	$fieldToolTipsmst_kenpin_item_by_category[""]["id"] = "";
	$placeHoldersmst_kenpin_item_by_category[""]["id"] = "";
	$fieldLabelsmst_kenpin_item_by_category[""]["category_id"] = "Category Id";
	$fieldToolTipsmst_kenpin_item_by_category[""]["category_id"] = "";
	$placeHoldersmst_kenpin_item_by_category[""]["category_id"] = "";
	$fieldLabelsmst_kenpin_item_by_category[""]["sub_category_id1"] = "Sub Category Id1";
	$fieldToolTipsmst_kenpin_item_by_category[""]["sub_category_id1"] = "";
	$placeHoldersmst_kenpin_item_by_category[""]["sub_category_id1"] = "";
	$fieldLabelsmst_kenpin_item_by_category[""]["name"] = "Name";
	$fieldToolTipsmst_kenpin_item_by_category[""]["name"] = "";
	$placeHoldersmst_kenpin_item_by_category[""]["name"] = "";
	$fieldLabelsmst_kenpin_item_by_category[""]["sort"] = "Sort";
	$fieldToolTipsmst_kenpin_item_by_category[""]["sort"] = "";
	$placeHoldersmst_kenpin_item_by_category[""]["sort"] = "";
	$fieldLabelsmst_kenpin_item_by_category[""]["update_by"] = "Update By";
	$fieldToolTipsmst_kenpin_item_by_category[""]["update_by"] = "";
	$placeHoldersmst_kenpin_item_by_category[""]["update_by"] = "";
	$fieldLabelsmst_kenpin_item_by_category[""]["update_at"] = "Update At";
	$fieldToolTipsmst_kenpin_item_by_category[""]["update_at"] = "";
	$placeHoldersmst_kenpin_item_by_category[""]["update_at"] = "";
	$fieldLabelsmst_kenpin_item_by_category[""]["create_by"] = "Create By";
	$fieldToolTipsmst_kenpin_item_by_category[""]["create_by"] = "";
	$placeHoldersmst_kenpin_item_by_category[""]["create_by"] = "";
	$fieldLabelsmst_kenpin_item_by_category[""]["create_at"] = "Create At";
	$fieldToolTipsmst_kenpin_item_by_category[""]["create_at"] = "";
	$placeHoldersmst_kenpin_item_by_category[""]["create_at"] = "";
	if (count($fieldToolTipsmst_kenpin_item_by_category[""]))
		$tdatamst_kenpin_item_by_category[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmst_kenpin_item_by_category["English"] = array();
	$fieldToolTipsmst_kenpin_item_by_category["English"] = array();
	$placeHoldersmst_kenpin_item_by_category["English"] = array();
	$pageTitlesmst_kenpin_item_by_category["English"] = array();
	$fieldLabelsmst_kenpin_item_by_category["English"]["id"] = "Id";
	$fieldToolTipsmst_kenpin_item_by_category["English"]["id"] = "";
	$placeHoldersmst_kenpin_item_by_category["English"]["id"] = "";
	$fieldLabelsmst_kenpin_item_by_category["English"]["category_id"] = "Category Id";
	$fieldToolTipsmst_kenpin_item_by_category["English"]["category_id"] = "";
	$placeHoldersmst_kenpin_item_by_category["English"]["category_id"] = "";
	$fieldLabelsmst_kenpin_item_by_category["English"]["sub_category_id1"] = "Sub Category Id1";
	$fieldToolTipsmst_kenpin_item_by_category["English"]["sub_category_id1"] = "";
	$placeHoldersmst_kenpin_item_by_category["English"]["sub_category_id1"] = "";
	$fieldLabelsmst_kenpin_item_by_category["English"]["name"] = "Name";
	$fieldToolTipsmst_kenpin_item_by_category["English"]["name"] = "";
	$placeHoldersmst_kenpin_item_by_category["English"]["name"] = "";
	$fieldLabelsmst_kenpin_item_by_category["English"]["sort"] = "Sort";
	$fieldToolTipsmst_kenpin_item_by_category["English"]["sort"] = "";
	$placeHoldersmst_kenpin_item_by_category["English"]["sort"] = "";
	$fieldLabelsmst_kenpin_item_by_category["English"]["update_by"] = "Update By";
	$fieldToolTipsmst_kenpin_item_by_category["English"]["update_by"] = "";
	$placeHoldersmst_kenpin_item_by_category["English"]["update_by"] = "";
	$fieldLabelsmst_kenpin_item_by_category["English"]["update_at"] = "Update At";
	$fieldToolTipsmst_kenpin_item_by_category["English"]["update_at"] = "";
	$placeHoldersmst_kenpin_item_by_category["English"]["update_at"] = "";
	$fieldLabelsmst_kenpin_item_by_category["English"]["create_by"] = "Create By";
	$fieldToolTipsmst_kenpin_item_by_category["English"]["create_by"] = "";
	$placeHoldersmst_kenpin_item_by_category["English"]["create_by"] = "";
	$fieldLabelsmst_kenpin_item_by_category["English"]["create_at"] = "Create At";
	$fieldToolTipsmst_kenpin_item_by_category["English"]["create_at"] = "";
	$placeHoldersmst_kenpin_item_by_category["English"]["create_at"] = "";
	if (count($fieldToolTipsmst_kenpin_item_by_category["English"]))
		$tdatamst_kenpin_item_by_category[".isUseToolTips"] = true;
}


	$tdatamst_kenpin_item_by_category[".NCSearch"] = true;



$tdatamst_kenpin_item_by_category[".shortTableName"] = "mst_kenpin_item_by_category";
$tdatamst_kenpin_item_by_category[".nSecOptions"] = 0;
$tdatamst_kenpin_item_by_category[".recsPerRowPrint"] = 1;
$tdatamst_kenpin_item_by_category[".mainTableOwnerID"] = "";
$tdatamst_kenpin_item_by_category[".moveNext"] = 1;
$tdatamst_kenpin_item_by_category[".entityType"] = 0;

$tdatamst_kenpin_item_by_category[".strOriginalTableName"] = "mst_kenpin_item_by_category";

	



$tdatamst_kenpin_item_by_category[".showAddInPopup"] = false;

$tdatamst_kenpin_item_by_category[".showEditInPopup"] = false;

$tdatamst_kenpin_item_by_category[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamst_kenpin_item_by_category[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamst_kenpin_item_by_category[".fieldsForRegister"] = array();

$tdatamst_kenpin_item_by_category[".listAjax"] = false;

	$tdatamst_kenpin_item_by_category[".audit"] = true;

	$tdatamst_kenpin_item_by_category[".locking"] = false;



$tdatamst_kenpin_item_by_category[".list"] = true;

$tdatamst_kenpin_item_by_category[".inlineEdit"] = true;


$tdatamst_kenpin_item_by_category[".reorderRecordsByHeader"] = true;



$tdatamst_kenpin_item_by_category[".inlineAdd"] = true;
$tdatamst_kenpin_item_by_category[".view"] = true;

$tdatamst_kenpin_item_by_category[".import"] = true;

$tdatamst_kenpin_item_by_category[".exportTo"] = true;


$tdatamst_kenpin_item_by_category[".delete"] = true;

$tdatamst_kenpin_item_by_category[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamst_kenpin_item_by_category[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamst_kenpin_item_by_category[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamst_kenpin_item_by_category[".searchSaving"] = false;
//

$tdatamst_kenpin_item_by_category[".showSearchPanel"] = true;
		$tdatamst_kenpin_item_by_category[".flexibleSearch"] = true;

$tdatamst_kenpin_item_by_category[".isUseAjaxSuggest"] = true;

$tdatamst_kenpin_item_by_category[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																															

$tdatamst_kenpin_item_by_category[".ajaxCodeSnippetAdded"] = false;

$tdatamst_kenpin_item_by_category[".buttonsAdded"] = false;

$tdatamst_kenpin_item_by_category[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamst_kenpin_item_by_category[".isUseTimeForSearch"] = false;



$tdatamst_kenpin_item_by_category[".badgeColor"] = "1e90ff";


$tdatamst_kenpin_item_by_category[".allSearchFields"] = array();
$tdatamst_kenpin_item_by_category[".filterFields"] = array();
$tdatamst_kenpin_item_by_category[".requiredSearchFields"] = array();

$tdatamst_kenpin_item_by_category[".allSearchFields"][] = "id";
	$tdatamst_kenpin_item_by_category[".allSearchFields"][] = "category_id";
	$tdatamst_kenpin_item_by_category[".allSearchFields"][] = "sub_category_id1";
	$tdatamst_kenpin_item_by_category[".allSearchFields"][] = "name";
	$tdatamst_kenpin_item_by_category[".allSearchFields"][] = "sort";
	$tdatamst_kenpin_item_by_category[".allSearchFields"][] = "update_by";
	$tdatamst_kenpin_item_by_category[".allSearchFields"][] = "update_at";
	$tdatamst_kenpin_item_by_category[".allSearchFields"][] = "create_by";
	$tdatamst_kenpin_item_by_category[".allSearchFields"][] = "create_at";
	

$tdatamst_kenpin_item_by_category[".googleLikeFields"] = array();
$tdatamst_kenpin_item_by_category[".googleLikeFields"][] = "id";
$tdatamst_kenpin_item_by_category[".googleLikeFields"][] = "category_id";
$tdatamst_kenpin_item_by_category[".googleLikeFields"][] = "sub_category_id1";
$tdatamst_kenpin_item_by_category[".googleLikeFields"][] = "name";
$tdatamst_kenpin_item_by_category[".googleLikeFields"][] = "sort";
$tdatamst_kenpin_item_by_category[".googleLikeFields"][] = "update_by";
$tdatamst_kenpin_item_by_category[".googleLikeFields"][] = "update_at";
$tdatamst_kenpin_item_by_category[".googleLikeFields"][] = "create_by";
$tdatamst_kenpin_item_by_category[".googleLikeFields"][] = "create_at";


$tdatamst_kenpin_item_by_category[".advSearchFields"] = array();
$tdatamst_kenpin_item_by_category[".advSearchFields"][] = "id";
$tdatamst_kenpin_item_by_category[".advSearchFields"][] = "category_id";
$tdatamst_kenpin_item_by_category[".advSearchFields"][] = "sub_category_id1";
$tdatamst_kenpin_item_by_category[".advSearchFields"][] = "name";
$tdatamst_kenpin_item_by_category[".advSearchFields"][] = "sort";
$tdatamst_kenpin_item_by_category[".advSearchFields"][] = "update_by";
$tdatamst_kenpin_item_by_category[".advSearchFields"][] = "update_at";
$tdatamst_kenpin_item_by_category[".advSearchFields"][] = "create_by";
$tdatamst_kenpin_item_by_category[".advSearchFields"][] = "create_at";

$tdatamst_kenpin_item_by_category[".tableType"] = "list";

$tdatamst_kenpin_item_by_category[".printerPageOrientation"] = 0;
$tdatamst_kenpin_item_by_category[".nPrinterPageScale"] = 100;

$tdatamst_kenpin_item_by_category[".nPrinterSplitRecords"] = 40;

$tdatamst_kenpin_item_by_category[".nPrinterPDFSplitRecords"] = 40;



$tdatamst_kenpin_item_by_category[".geocodingEnabled"] = false;





$tdatamst_kenpin_item_by_category[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamst_kenpin_item_by_category[".pageSize"] = 20;

$tdatamst_kenpin_item_by_category[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamst_kenpin_item_by_category[".strOrderBy"] = $tstrOrderBy;

$tdatamst_kenpin_item_by_category[".orderindexes"] = array();

$tdatamst_kenpin_item_by_category[".sqlHead"] = "SELECT id,  	category_id,  	sub_category_id1,  	name,  	sort,  	update_by,  	update_at,  	create_by,  	create_at";
$tdatamst_kenpin_item_by_category[".sqlFrom"] = "FROM mst_kenpin_item_by_category";
$tdatamst_kenpin_item_by_category[".sqlWhereExpr"] = "";
$tdatamst_kenpin_item_by_category[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamst_kenpin_item_by_category[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamst_kenpin_item_by_category[".arrGroupsPerPage"] = $arrGPP;

$tdatamst_kenpin_item_by_category[".highlightSearchResults"] = true;

$tableKeysmst_kenpin_item_by_category = array();
$tableKeysmst_kenpin_item_by_category[] = "id";
$tdatamst_kenpin_item_by_category[".Keys"] = $tableKeysmst_kenpin_item_by_category;

$tdatamst_kenpin_item_by_category[".listFields"] = array();
$tdatamst_kenpin_item_by_category[".listFields"][] = "id";
$tdatamst_kenpin_item_by_category[".listFields"][] = "category_id";
$tdatamst_kenpin_item_by_category[".listFields"][] = "sub_category_id1";
$tdatamst_kenpin_item_by_category[".listFields"][] = "name";
$tdatamst_kenpin_item_by_category[".listFields"][] = "sort";
$tdatamst_kenpin_item_by_category[".listFields"][] = "update_by";
$tdatamst_kenpin_item_by_category[".listFields"][] = "update_at";
$tdatamst_kenpin_item_by_category[".listFields"][] = "create_by";
$tdatamst_kenpin_item_by_category[".listFields"][] = "create_at";

$tdatamst_kenpin_item_by_category[".hideMobileList"] = array();


$tdatamst_kenpin_item_by_category[".viewFields"] = array();
$tdatamst_kenpin_item_by_category[".viewFields"][] = "id";
$tdatamst_kenpin_item_by_category[".viewFields"][] = "category_id";
$tdatamst_kenpin_item_by_category[".viewFields"][] = "sub_category_id1";
$tdatamst_kenpin_item_by_category[".viewFields"][] = "name";
$tdatamst_kenpin_item_by_category[".viewFields"][] = "sort";
$tdatamst_kenpin_item_by_category[".viewFields"][] = "update_by";
$tdatamst_kenpin_item_by_category[".viewFields"][] = "update_at";
$tdatamst_kenpin_item_by_category[".viewFields"][] = "create_by";
$tdatamst_kenpin_item_by_category[".viewFields"][] = "create_at";

$tdatamst_kenpin_item_by_category[".addFields"] = array();

$tdatamst_kenpin_item_by_category[".masterListFields"] = array();
$tdatamst_kenpin_item_by_category[".masterListFields"][] = "id";
$tdatamst_kenpin_item_by_category[".masterListFields"][] = "category_id";
$tdatamst_kenpin_item_by_category[".masterListFields"][] = "sub_category_id1";
$tdatamst_kenpin_item_by_category[".masterListFields"][] = "name";
$tdatamst_kenpin_item_by_category[".masterListFields"][] = "sort";
$tdatamst_kenpin_item_by_category[".masterListFields"][] = "update_by";
$tdatamst_kenpin_item_by_category[".masterListFields"][] = "update_at";
$tdatamst_kenpin_item_by_category[".masterListFields"][] = "create_by";
$tdatamst_kenpin_item_by_category[".masterListFields"][] = "create_at";

$tdatamst_kenpin_item_by_category[".inlineAddFields"] = array();
$tdatamst_kenpin_item_by_category[".inlineAddFields"][] = "name";
$tdatamst_kenpin_item_by_category[".inlineAddFields"][] = "sort";

$tdatamst_kenpin_item_by_category[".editFields"] = array();

$tdatamst_kenpin_item_by_category[".inlineEditFields"] = array();
$tdatamst_kenpin_item_by_category[".inlineEditFields"][] = "name";
$tdatamst_kenpin_item_by_category[".inlineEditFields"][] = "sort";

$tdatamst_kenpin_item_by_category[".updateSelectedFields"] = array();


$tdatamst_kenpin_item_by_category[".exportFields"] = array();
$tdatamst_kenpin_item_by_category[".exportFields"][] = "id";
$tdatamst_kenpin_item_by_category[".exportFields"][] = "category_id";
$tdatamst_kenpin_item_by_category[".exportFields"][] = "sub_category_id1";
$tdatamst_kenpin_item_by_category[".exportFields"][] = "name";
$tdatamst_kenpin_item_by_category[".exportFields"][] = "sort";
$tdatamst_kenpin_item_by_category[".exportFields"][] = "update_by";
$tdatamst_kenpin_item_by_category[".exportFields"][] = "update_at";
$tdatamst_kenpin_item_by_category[".exportFields"][] = "create_by";
$tdatamst_kenpin_item_by_category[".exportFields"][] = "create_at";

$tdatamst_kenpin_item_by_category[".importFields"] = array();
$tdatamst_kenpin_item_by_category[".importFields"][] = "id";
$tdatamst_kenpin_item_by_category[".importFields"][] = "category_id";
$tdatamst_kenpin_item_by_category[".importFields"][] = "sub_category_id1";
$tdatamst_kenpin_item_by_category[".importFields"][] = "name";
$tdatamst_kenpin_item_by_category[".importFields"][] = "sort";

$tdatamst_kenpin_item_by_category[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "mst_kenpin_item_by_category";
	$fdata["Label"] = GetFieldLabel("mst_kenpin_item_by_category","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

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




	$tdatamst_kenpin_item_by_category["id"] = $fdata;
//	category_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "category_id";
	$fdata["GoodName"] = "category_id";
	$fdata["ownerTable"] = "mst_kenpin_item_by_category";
	$fdata["Label"] = GetFieldLabel("mst_kenpin_item_by_category","category_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

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




	$tdatamst_kenpin_item_by_category["category_id"] = $fdata;
//	sub_category_id1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sub_category_id1";
	$fdata["GoodName"] = "sub_category_id1";
	$fdata["ownerTable"] = "mst_kenpin_item_by_category";
	$fdata["Label"] = GetFieldLabel("mst_kenpin_item_by_category","sub_category_id1");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

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




	$tdatamst_kenpin_item_by_category["sub_category_id1"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "mst_kenpin_item_by_category";
	$fdata["Label"] = GetFieldLabel("mst_kenpin_item_by_category","name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

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

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "mst_shouhin_column_name";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 1;

	
		
	$edata["LinkField"] = "name";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "waname";

	
	$edata["LookupOrderBy"] = "sort";

	
	
	
	

	
	
	
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




	$tdatamst_kenpin_item_by_category["name"] = $fdata;
//	sort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "sort";
	$fdata["GoodName"] = "sort";
	$fdata["ownerTable"] = "mst_kenpin_item_by_category";
	$fdata["Label"] = GetFieldLabel("mst_kenpin_item_by_category","sort");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

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




	$tdatamst_kenpin_item_by_category["sort"] = $fdata;
//	update_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "update_by";
	$fdata["GoodName"] = "update_by";
	$fdata["ownerTable"] = "mst_kenpin_item_by_category";
	$fdata["Label"] = GetFieldLabel("mst_kenpin_item_by_category","update_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

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




	$tdatamst_kenpin_item_by_category["update_by"] = $fdata;
//	update_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "update_at";
	$fdata["GoodName"] = "update_at";
	$fdata["ownerTable"] = "mst_kenpin_item_by_category";
	$fdata["Label"] = GetFieldLabel("mst_kenpin_item_by_category","update_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

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




	$tdatamst_kenpin_item_by_category["update_at"] = $fdata;
//	create_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "create_by";
	$fdata["GoodName"] = "create_by";
	$fdata["ownerTable"] = "mst_kenpin_item_by_category";
	$fdata["Label"] = GetFieldLabel("mst_kenpin_item_by_category","create_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

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




	$tdatamst_kenpin_item_by_category["create_by"] = $fdata;
//	create_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "create_at";
	$fdata["GoodName"] = "create_at";
	$fdata["ownerTable"] = "mst_kenpin_item_by_category";
	$fdata["Label"] = GetFieldLabel("mst_kenpin_item_by_category","create_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

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




	$tdatamst_kenpin_item_by_category["create_at"] = $fdata;


$tables_data["mst_kenpin_item_by_category"]=&$tdatamst_kenpin_item_by_category;
$field_labels["mst_kenpin_item_by_category"] = &$fieldLabelsmst_kenpin_item_by_category;
$fieldToolTips["mst_kenpin_item_by_category"] = &$fieldToolTipsmst_kenpin_item_by_category;
$placeHolders["mst_kenpin_item_by_category"] = &$placeHoldersmst_kenpin_item_by_category;
$page_titles["mst_kenpin_item_by_category"] = &$pageTitlesmst_kenpin_item_by_category;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mst_kenpin_item_by_category"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mst_kenpin_item_by_category"] = array();


	
				$strOriginalDetailsTable="store_categories";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="store_categories";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "store_categories";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispMasterInfo"] = array();
				$masterParams["dispMasterInfo"][PAGE_LIST] = true;
			
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 1;
	$masterParams["proceedLink"]= 1;

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["mst_kenpin_item_by_category"][0] = $masterParams;
				$masterTablesData["mst_kenpin_item_by_category"][0]["masterKeys"] = array();
	$masterTablesData["mst_kenpin_item_by_category"][0]["masterKeys"][]="category_id";
				$masterTablesData["mst_kenpin_item_by_category"][0]["detailKeys"] = array();
	$masterTablesData["mst_kenpin_item_by_category"][0]["detailKeys"][]="category_id";
		
	
				$strOriginalDetailsTable="store_sub_categories";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="store_sub_categories";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "store_sub_categories";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispMasterInfo"] = array();
				$masterParams["dispMasterInfo"][PAGE_LIST] = true;
			
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 1;
	$masterParams["proceedLink"]= 1;

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["mst_kenpin_item_by_category"][1] = $masterParams;
				$masterTablesData["mst_kenpin_item_by_category"][1]["masterKeys"] = array();
	$masterTablesData["mst_kenpin_item_by_category"][1]["masterKeys"][]="id";
				$masterTablesData["mst_kenpin_item_by_category"][1]["detailKeys"] = array();
	$masterTablesData["mst_kenpin_item_by_category"][1]["detailKeys"][]="sub_category_id1";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mst_kenpin_item_by_category()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	category_id,  	sub_category_id1,  	name,  	sort,  	update_by,  	update_at,  	create_by,  	create_at";
$proto0["m_strFrom"] = "FROM mst_kenpin_item_by_category";
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
	"m_strTable" => "mst_kenpin_item_by_category",
	"m_srcTableName" => "mst_kenpin_item_by_category"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "mst_kenpin_item_by_category";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "category_id",
	"m_strTable" => "mst_kenpin_item_by_category",
	"m_srcTableName" => "mst_kenpin_item_by_category"
));

$proto8["m_sql"] = "category_id";
$proto8["m_srcTableName"] = "mst_kenpin_item_by_category";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "sub_category_id1",
	"m_strTable" => "mst_kenpin_item_by_category",
	"m_srcTableName" => "mst_kenpin_item_by_category"
));

$proto10["m_sql"] = "sub_category_id1";
$proto10["m_srcTableName"] = "mst_kenpin_item_by_category";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "mst_kenpin_item_by_category",
	"m_srcTableName" => "mst_kenpin_item_by_category"
));

$proto12["m_sql"] = "name";
$proto12["m_srcTableName"] = "mst_kenpin_item_by_category";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "sort",
	"m_strTable" => "mst_kenpin_item_by_category",
	"m_srcTableName" => "mst_kenpin_item_by_category"
));

$proto14["m_sql"] = "sort";
$proto14["m_srcTableName"] = "mst_kenpin_item_by_category";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "update_by",
	"m_strTable" => "mst_kenpin_item_by_category",
	"m_srcTableName" => "mst_kenpin_item_by_category"
));

$proto16["m_sql"] = "update_by";
$proto16["m_srcTableName"] = "mst_kenpin_item_by_category";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "update_at",
	"m_strTable" => "mst_kenpin_item_by_category",
	"m_srcTableName" => "mst_kenpin_item_by_category"
));

$proto18["m_sql"] = "update_at";
$proto18["m_srcTableName"] = "mst_kenpin_item_by_category";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "create_by",
	"m_strTable" => "mst_kenpin_item_by_category",
	"m_srcTableName" => "mst_kenpin_item_by_category"
));

$proto20["m_sql"] = "create_by";
$proto20["m_srcTableName"] = "mst_kenpin_item_by_category";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "create_at",
	"m_strTable" => "mst_kenpin_item_by_category",
	"m_srcTableName" => "mst_kenpin_item_by_category"
));

$proto22["m_sql"] = "create_at";
$proto22["m_srcTableName"] = "mst_kenpin_item_by_category";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "mst_kenpin_item_by_category";
$proto25["m_srcTableName"] = "mst_kenpin_item_by_category";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "id";
$proto25["m_columns"][] = "category_id";
$proto25["m_columns"][] = "sub_category_id1";
$proto25["m_columns"][] = "name";
$proto25["m_columns"][] = "sort";
$proto25["m_columns"][] = "update_by";
$proto25["m_columns"][] = "update_at";
$proto25["m_columns"][] = "create_by";
$proto25["m_columns"][] = "create_at";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "mst_kenpin_item_by_category";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "mst_kenpin_item_by_category";
$proto26=array();
$proto26["m_sql"] = "";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "";
$proto26["m_havingmode"] = false;
$proto26["m_inBrackets"] = false;
$proto26["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto26);

$proto24["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto24);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="mst_kenpin_item_by_category";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mst_kenpin_item_by_category = createSqlQuery_mst_kenpin_item_by_category();


	
		;

									

$tdatamst_kenpin_item_by_category[".sqlquery"] = $queryData_mst_kenpin_item_by_category;

include_once(getabspath("include/mst_kenpin_item_by_category_events.php"));
$tableEvents["mst_kenpin_item_by_category"] = new eventclass_mst_kenpin_item_by_category;
$tdatamst_kenpin_item_by_category[".hasEvents"] = true;

?>