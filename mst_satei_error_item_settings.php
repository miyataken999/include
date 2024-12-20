<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamst_satei_error_item = array();
	$tdatamst_satei_error_item[".truncateText"] = true;
	$tdatamst_satei_error_item[".NumberOfChars"] = 80;
	$tdatamst_satei_error_item[".ShortName"] = "mst_satei_error_item";
	$tdatamst_satei_error_item[".OwnerID"] = "";
	$tdatamst_satei_error_item[".OriginalTable"] = "mst_satei_error_item";

//	field labels
$fieldLabelsmst_satei_error_item = array();
$fieldToolTipsmst_satei_error_item = array();
$pageTitlesmst_satei_error_item = array();
$placeHoldersmst_satei_error_item = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmst_satei_error_item["Japanese"] = array();
	$fieldToolTipsmst_satei_error_item["Japanese"] = array();
	$placeHoldersmst_satei_error_item["Japanese"] = array();
	$pageTitlesmst_satei_error_item["Japanese"] = array();
	$fieldLabelsmst_satei_error_item["Japanese"]["id"] = "Id";
	$fieldToolTipsmst_satei_error_item["Japanese"]["id"] = "";
	$placeHoldersmst_satei_error_item["Japanese"]["id"] = "";
	$fieldLabelsmst_satei_error_item["Japanese"]["name"] = "Name";
	$fieldToolTipsmst_satei_error_item["Japanese"]["name"] = "";
	$placeHoldersmst_satei_error_item["Japanese"]["name"] = "";
	$fieldLabelsmst_satei_error_item["Japanese"]["sort"] = "Sort";
	$fieldToolTipsmst_satei_error_item["Japanese"]["sort"] = "";
	$placeHoldersmst_satei_error_item["Japanese"]["sort"] = "";
	$fieldLabelsmst_satei_error_item["Japanese"]["update_by"] = "更新者";
	$fieldToolTipsmst_satei_error_item["Japanese"]["update_by"] = "";
	$placeHoldersmst_satei_error_item["Japanese"]["update_by"] = "";
	$fieldLabelsmst_satei_error_item["Japanese"]["update_at"] = "更新日";
	$fieldToolTipsmst_satei_error_item["Japanese"]["update_at"] = "";
	$placeHoldersmst_satei_error_item["Japanese"]["update_at"] = "";
	$fieldLabelsmst_satei_error_item["Japanese"]["create_by"] = "登録者";
	$fieldToolTipsmst_satei_error_item["Japanese"]["create_by"] = "";
	$placeHoldersmst_satei_error_item["Japanese"]["create_by"] = "";
	$fieldLabelsmst_satei_error_item["Japanese"]["create_at"] = "登録日";
	$fieldToolTipsmst_satei_error_item["Japanese"]["create_at"] = "";
	$placeHoldersmst_satei_error_item["Japanese"]["create_at"] = "";
	$fieldLabelsmst_satei_error_item["Japanese"]["field_name"] = "Field Name";
	$fieldToolTipsmst_satei_error_item["Japanese"]["field_name"] = "";
	$placeHoldersmst_satei_error_item["Japanese"]["field_name"] = "";
	$fieldLabelsmst_satei_error_item["Japanese"]["error_text"] = "エラー文";
	$fieldToolTipsmst_satei_error_item["Japanese"]["error_text"] = "";
	$placeHoldersmst_satei_error_item["Japanese"]["error_text"] = "";
	if (count($fieldToolTipsmst_satei_error_item["Japanese"]))
		$tdatamst_satei_error_item[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmst_satei_error_item[""] = array();
	$fieldToolTipsmst_satei_error_item[""] = array();
	$placeHoldersmst_satei_error_item[""] = array();
	$pageTitlesmst_satei_error_item[""] = array();
	$fieldLabelsmst_satei_error_item[""]["id"] = "Id";
	$fieldToolTipsmst_satei_error_item[""]["id"] = "";
	$placeHoldersmst_satei_error_item[""]["id"] = "";
	$fieldLabelsmst_satei_error_item[""]["name"] = "Name";
	$fieldToolTipsmst_satei_error_item[""]["name"] = "";
	$placeHoldersmst_satei_error_item[""]["name"] = "";
	$fieldLabelsmst_satei_error_item[""]["sort"] = "Sort";
	$fieldToolTipsmst_satei_error_item[""]["sort"] = "";
	$placeHoldersmst_satei_error_item[""]["sort"] = "";
	$fieldLabelsmst_satei_error_item[""]["update_by"] = "Update By";
	$fieldToolTipsmst_satei_error_item[""]["update_by"] = "";
	$placeHoldersmst_satei_error_item[""]["update_by"] = "";
	$fieldLabelsmst_satei_error_item[""]["update_at"] = "Update At";
	$fieldToolTipsmst_satei_error_item[""]["update_at"] = "";
	$placeHoldersmst_satei_error_item[""]["update_at"] = "";
	$fieldLabelsmst_satei_error_item[""]["create_by"] = "Create By";
	$fieldToolTipsmst_satei_error_item[""]["create_by"] = "";
	$placeHoldersmst_satei_error_item[""]["create_by"] = "";
	$fieldLabelsmst_satei_error_item[""]["create_at"] = "Create At";
	$fieldToolTipsmst_satei_error_item[""]["create_at"] = "";
	$placeHoldersmst_satei_error_item[""]["create_at"] = "";
	$fieldLabelsmst_satei_error_item[""]["field_name"] = "Field Name";
	$fieldToolTipsmst_satei_error_item[""]["field_name"] = "";
	$placeHoldersmst_satei_error_item[""]["field_name"] = "";
	$fieldLabelsmst_satei_error_item[""]["error_text"] = "Error Text";
	$fieldToolTipsmst_satei_error_item[""]["error_text"] = "";
	$placeHoldersmst_satei_error_item[""]["error_text"] = "";
	if (count($fieldToolTipsmst_satei_error_item[""]))
		$tdatamst_satei_error_item[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmst_satei_error_item["English"] = array();
	$fieldToolTipsmst_satei_error_item["English"] = array();
	$placeHoldersmst_satei_error_item["English"] = array();
	$pageTitlesmst_satei_error_item["English"] = array();
	$fieldLabelsmst_satei_error_item["English"]["id"] = "Id";
	$fieldToolTipsmst_satei_error_item["English"]["id"] = "";
	$placeHoldersmst_satei_error_item["English"]["id"] = "";
	$fieldLabelsmst_satei_error_item["English"]["name"] = "Name";
	$fieldToolTipsmst_satei_error_item["English"]["name"] = "";
	$placeHoldersmst_satei_error_item["English"]["name"] = "";
	$fieldLabelsmst_satei_error_item["English"]["sort"] = "Sort";
	$fieldToolTipsmst_satei_error_item["English"]["sort"] = "";
	$placeHoldersmst_satei_error_item["English"]["sort"] = "";
	$fieldLabelsmst_satei_error_item["English"]["update_by"] = "Update By";
	$fieldToolTipsmst_satei_error_item["English"]["update_by"] = "";
	$placeHoldersmst_satei_error_item["English"]["update_by"] = "";
	$fieldLabelsmst_satei_error_item["English"]["update_at"] = "Update At";
	$fieldToolTipsmst_satei_error_item["English"]["update_at"] = "";
	$placeHoldersmst_satei_error_item["English"]["update_at"] = "";
	$fieldLabelsmst_satei_error_item["English"]["create_by"] = "Create By";
	$fieldToolTipsmst_satei_error_item["English"]["create_by"] = "";
	$placeHoldersmst_satei_error_item["English"]["create_by"] = "";
	$fieldLabelsmst_satei_error_item["English"]["create_at"] = "Create At";
	$fieldToolTipsmst_satei_error_item["English"]["create_at"] = "";
	$placeHoldersmst_satei_error_item["English"]["create_at"] = "";
	$fieldLabelsmst_satei_error_item["English"]["field_name"] = "Field Name";
	$fieldToolTipsmst_satei_error_item["English"]["field_name"] = "";
	$placeHoldersmst_satei_error_item["English"]["field_name"] = "";
	$fieldLabelsmst_satei_error_item["English"]["error_text"] = "Error Text";
	$fieldToolTipsmst_satei_error_item["English"]["error_text"] = "";
	$placeHoldersmst_satei_error_item["English"]["error_text"] = "";
	if (count($fieldToolTipsmst_satei_error_item["English"]))
		$tdatamst_satei_error_item[".isUseToolTips"] = true;
}


	$tdatamst_satei_error_item[".NCSearch"] = true;



$tdatamst_satei_error_item[".shortTableName"] = "mst_satei_error_item";
$tdatamst_satei_error_item[".nSecOptions"] = 0;
$tdatamst_satei_error_item[".recsPerRowPrint"] = 1;
$tdatamst_satei_error_item[".mainTableOwnerID"] = "";
$tdatamst_satei_error_item[".moveNext"] = 1;
$tdatamst_satei_error_item[".entityType"] = 0;

$tdatamst_satei_error_item[".strOriginalTableName"] = "mst_satei_error_item";

	



$tdatamst_satei_error_item[".showAddInPopup"] = false;

$tdatamst_satei_error_item[".showEditInPopup"] = false;

$tdatamst_satei_error_item[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamst_satei_error_item[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamst_satei_error_item[".fieldsForRegister"] = array();

$tdatamst_satei_error_item[".listAjax"] = false;

	$tdatamst_satei_error_item[".audit"] = true;

	$tdatamst_satei_error_item[".locking"] = false;



$tdatamst_satei_error_item[".list"] = true;

$tdatamst_satei_error_item[".inlineEdit"] = true;


$tdatamst_satei_error_item[".reorderRecordsByHeader"] = true;



$tdatamst_satei_error_item[".inlineAdd"] = true;

$tdatamst_satei_error_item[".import"] = true;

$tdatamst_satei_error_item[".exportTo"] = true;

$tdatamst_satei_error_item[".printFriendly"] = true;

$tdatamst_satei_error_item[".delete"] = true;

$tdatamst_satei_error_item[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamst_satei_error_item[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamst_satei_error_item[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamst_satei_error_item[".searchSaving"] = false;
//

$tdatamst_satei_error_item[".showSearchPanel"] = true;
		$tdatamst_satei_error_item[".flexibleSearch"] = true;

$tdatamst_satei_error_item[".isUseAjaxSuggest"] = true;

$tdatamst_satei_error_item[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatamst_satei_error_item[".ajaxCodeSnippetAdded"] = false;

$tdatamst_satei_error_item[".buttonsAdded"] = false;

$tdatamst_satei_error_item[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamst_satei_error_item[".isUseTimeForSearch"] = false;





$tdatamst_satei_error_item[".allSearchFields"] = array();
$tdatamst_satei_error_item[".filterFields"] = array();
$tdatamst_satei_error_item[".requiredSearchFields"] = array();

$tdatamst_satei_error_item[".allSearchFields"][] = "id";
	$tdatamst_satei_error_item[".allSearchFields"][] = "name";
	$tdatamst_satei_error_item[".allSearchFields"][] = "sort";
	$tdatamst_satei_error_item[".allSearchFields"][] = "update_by";
	$tdatamst_satei_error_item[".allSearchFields"][] = "update_at";
	$tdatamst_satei_error_item[".allSearchFields"][] = "create_by";
	$tdatamst_satei_error_item[".allSearchFields"][] = "create_at";
	$tdatamst_satei_error_item[".allSearchFields"][] = "field_name";
	$tdatamst_satei_error_item[".allSearchFields"][] = "error_text";
	

$tdatamst_satei_error_item[".googleLikeFields"] = array();
$tdatamst_satei_error_item[".googleLikeFields"][] = "id";
$tdatamst_satei_error_item[".googleLikeFields"][] = "name";
$tdatamst_satei_error_item[".googleLikeFields"][] = "sort";
$tdatamst_satei_error_item[".googleLikeFields"][] = "update_by";
$tdatamst_satei_error_item[".googleLikeFields"][] = "update_at";
$tdatamst_satei_error_item[".googleLikeFields"][] = "create_by";
$tdatamst_satei_error_item[".googleLikeFields"][] = "create_at";
$tdatamst_satei_error_item[".googleLikeFields"][] = "field_name";
$tdatamst_satei_error_item[".googleLikeFields"][] = "error_text";


$tdatamst_satei_error_item[".advSearchFields"] = array();
$tdatamst_satei_error_item[".advSearchFields"][] = "id";
$tdatamst_satei_error_item[".advSearchFields"][] = "name";
$tdatamst_satei_error_item[".advSearchFields"][] = "sort";
$tdatamst_satei_error_item[".advSearchFields"][] = "update_by";
$tdatamst_satei_error_item[".advSearchFields"][] = "update_at";
$tdatamst_satei_error_item[".advSearchFields"][] = "create_by";
$tdatamst_satei_error_item[".advSearchFields"][] = "create_at";
$tdatamst_satei_error_item[".advSearchFields"][] = "field_name";
$tdatamst_satei_error_item[".advSearchFields"][] = "error_text";

$tdatamst_satei_error_item[".tableType"] = "list";

$tdatamst_satei_error_item[".printerPageOrientation"] = 0;
$tdatamst_satei_error_item[".nPrinterPageScale"] = 100;

$tdatamst_satei_error_item[".nPrinterSplitRecords"] = 40;

$tdatamst_satei_error_item[".nPrinterPDFSplitRecords"] = 40;



$tdatamst_satei_error_item[".geocodingEnabled"] = false;





$tdatamst_satei_error_item[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamst_satei_error_item[".pageSize"] = 100;

$tdatamst_satei_error_item[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY sort";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamst_satei_error_item[".strOrderBy"] = $tstrOrderBy;

$tdatamst_satei_error_item[".orderindexes"] = array();
$tdatamst_satei_error_item[".orderindexes"][] = array(3, (1 ? "ASC" : "DESC"), "`sort`");

$tdatamst_satei_error_item[".sqlHead"] = "SELECT id,  name,  sort,  update_by,  update_at,  create_by,  create_at,  field_name,  error_text";
$tdatamst_satei_error_item[".sqlFrom"] = "FROM mst_satei_error_item";
$tdatamst_satei_error_item[".sqlWhereExpr"] = "";
$tdatamst_satei_error_item[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamst_satei_error_item[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamst_satei_error_item[".arrGroupsPerPage"] = $arrGPP;

$tdatamst_satei_error_item[".highlightSearchResults"] = true;

$tableKeysmst_satei_error_item = array();
$tableKeysmst_satei_error_item[] = "id";
$tdatamst_satei_error_item[".Keys"] = $tableKeysmst_satei_error_item;

$tdatamst_satei_error_item[".listFields"] = array();
$tdatamst_satei_error_item[".listFields"][] = "id";
$tdatamst_satei_error_item[".listFields"][] = "name";
$tdatamst_satei_error_item[".listFields"][] = "field_name";
$tdatamst_satei_error_item[".listFields"][] = "sort";
$tdatamst_satei_error_item[".listFields"][] = "error_text";
$tdatamst_satei_error_item[".listFields"][] = "update_by";
$tdatamst_satei_error_item[".listFields"][] = "update_at";
$tdatamst_satei_error_item[".listFields"][] = "create_by";
$tdatamst_satei_error_item[".listFields"][] = "create_at";

$tdatamst_satei_error_item[".hideMobileList"] = array();


$tdatamst_satei_error_item[".viewFields"] = array();

$tdatamst_satei_error_item[".addFields"] = array();

$tdatamst_satei_error_item[".masterListFields"] = array();
$tdatamst_satei_error_item[".masterListFields"][] = "id";
$tdatamst_satei_error_item[".masterListFields"][] = "name";
$tdatamst_satei_error_item[".masterListFields"][] = "sort";
$tdatamst_satei_error_item[".masterListFields"][] = "update_by";
$tdatamst_satei_error_item[".masterListFields"][] = "update_at";
$tdatamst_satei_error_item[".masterListFields"][] = "create_by";
$tdatamst_satei_error_item[".masterListFields"][] = "create_at";
$tdatamst_satei_error_item[".masterListFields"][] = "field_name";
$tdatamst_satei_error_item[".masterListFields"][] = "error_text";

$tdatamst_satei_error_item[".inlineAddFields"] = array();
$tdatamst_satei_error_item[".inlineAddFields"][] = "name";
$tdatamst_satei_error_item[".inlineAddFields"][] = "field_name";
$tdatamst_satei_error_item[".inlineAddFields"][] = "sort";
$tdatamst_satei_error_item[".inlineAddFields"][] = "error_text";

$tdatamst_satei_error_item[".editFields"] = array();

$tdatamst_satei_error_item[".inlineEditFields"] = array();
$tdatamst_satei_error_item[".inlineEditFields"][] = "name";
$tdatamst_satei_error_item[".inlineEditFields"][] = "field_name";
$tdatamst_satei_error_item[".inlineEditFields"][] = "sort";
$tdatamst_satei_error_item[".inlineEditFields"][] = "error_text";

$tdatamst_satei_error_item[".updateSelectedFields"] = array();


$tdatamst_satei_error_item[".exportFields"] = array();
$tdatamst_satei_error_item[".exportFields"][] = "id";
$tdatamst_satei_error_item[".exportFields"][] = "name";
$tdatamst_satei_error_item[".exportFields"][] = "sort";
$tdatamst_satei_error_item[".exportFields"][] = "update_by";
$tdatamst_satei_error_item[".exportFields"][] = "update_at";
$tdatamst_satei_error_item[".exportFields"][] = "create_by";
$tdatamst_satei_error_item[".exportFields"][] = "create_at";
$tdatamst_satei_error_item[".exportFields"][] = "field_name";
$tdatamst_satei_error_item[".exportFields"][] = "error_text";

$tdatamst_satei_error_item[".importFields"] = array();
$tdatamst_satei_error_item[".importFields"][] = "id";
$tdatamst_satei_error_item[".importFields"][] = "name";
$tdatamst_satei_error_item[".importFields"][] = "sort";
$tdatamst_satei_error_item[".importFields"][] = "field_name";
$tdatamst_satei_error_item[".importFields"][] = "error_text";

$tdatamst_satei_error_item[".printFields"] = array();
$tdatamst_satei_error_item[".printFields"][] = "id";
$tdatamst_satei_error_item[".printFields"][] = "name";
$tdatamst_satei_error_item[".printFields"][] = "sort";
$tdatamst_satei_error_item[".printFields"][] = "update_by";
$tdatamst_satei_error_item[".printFields"][] = "update_at";
$tdatamst_satei_error_item[".printFields"][] = "create_by";
$tdatamst_satei_error_item[".printFields"][] = "create_at";
$tdatamst_satei_error_item[".printFields"][] = "field_name";
$tdatamst_satei_error_item[".printFields"][] = "error_text";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "mst_satei_error_item";
	$fdata["Label"] = GetFieldLabel("mst_satei_error_item","id");
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




	$tdatamst_satei_error_item["id"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "mst_satei_error_item";
	$fdata["Label"] = GetFieldLabel("mst_satei_error_item","name");
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




	$tdatamst_satei_error_item["name"] = $fdata;
//	sort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sort";
	$fdata["GoodName"] = "sort";
	$fdata["ownerTable"] = "mst_satei_error_item";
	$fdata["Label"] = GetFieldLabel("mst_satei_error_item","sort");
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




	$tdatamst_satei_error_item["sort"] = $fdata;
//	update_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "update_by";
	$fdata["GoodName"] = "update_by";
	$fdata["ownerTable"] = "mst_satei_error_item";
	$fdata["Label"] = GetFieldLabel("mst_satei_error_item","update_by");
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




	$tdatamst_satei_error_item["update_by"] = $fdata;
//	update_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "update_at";
	$fdata["GoodName"] = "update_at";
	$fdata["ownerTable"] = "mst_satei_error_item";
	$fdata["Label"] = GetFieldLabel("mst_satei_error_item","update_at");
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




	$tdatamst_satei_error_item["update_at"] = $fdata;
//	create_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "create_by";
	$fdata["GoodName"] = "create_by";
	$fdata["ownerTable"] = "mst_satei_error_item";
	$fdata["Label"] = GetFieldLabel("mst_satei_error_item","create_by");
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




	$tdatamst_satei_error_item["create_by"] = $fdata;
//	create_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "create_at";
	$fdata["GoodName"] = "create_at";
	$fdata["ownerTable"] = "mst_satei_error_item";
	$fdata["Label"] = GetFieldLabel("mst_satei_error_item","create_at");
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




	$tdatamst_satei_error_item["create_at"] = $fdata;
//	field_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "field_name";
	$fdata["GoodName"] = "field_name";
	$fdata["ownerTable"] = "mst_satei_error_item";
	$fdata["Label"] = GetFieldLabel("mst_satei_error_item","field_name");
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




	$tdatamst_satei_error_item["field_name"] = $fdata;
//	error_text
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "error_text";
	$fdata["GoodName"] = "error_text";
	$fdata["ownerTable"] = "mst_satei_error_item";
	$fdata["Label"] = GetFieldLabel("mst_satei_error_item","error_text");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "error_text";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "error_text";

	
	
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




	$tdatamst_satei_error_item["error_text"] = $fdata;


$tables_data["mst_satei_error_item"]=&$tdatamst_satei_error_item;
$field_labels["mst_satei_error_item"] = &$fieldLabelsmst_satei_error_item;
$fieldToolTips["mst_satei_error_item"] = &$fieldToolTipsmst_satei_error_item;
$placeHolders["mst_satei_error_item"] = &$placeHoldersmst_satei_error_item;
$page_titles["mst_satei_error_item"] = &$pageTitlesmst_satei_error_item;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mst_satei_error_item"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mst_satei_error_item"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mst_satei_error_item()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  name,  sort,  update_by,  update_at,  create_by,  create_at,  field_name,  error_text";
$proto0["m_strFrom"] = "FROM mst_satei_error_item";
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
	"m_strTable" => "mst_satei_error_item",
	"m_srcTableName" => "mst_satei_error_item"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "mst_satei_error_item";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "mst_satei_error_item",
	"m_srcTableName" => "mst_satei_error_item"
));

$proto8["m_sql"] = "name";
$proto8["m_srcTableName"] = "mst_satei_error_item";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "sort",
	"m_strTable" => "mst_satei_error_item",
	"m_srcTableName" => "mst_satei_error_item"
));

$proto10["m_sql"] = "sort";
$proto10["m_srcTableName"] = "mst_satei_error_item";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "update_by",
	"m_strTable" => "mst_satei_error_item",
	"m_srcTableName" => "mst_satei_error_item"
));

$proto12["m_sql"] = "update_by";
$proto12["m_srcTableName"] = "mst_satei_error_item";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "update_at",
	"m_strTable" => "mst_satei_error_item",
	"m_srcTableName" => "mst_satei_error_item"
));

$proto14["m_sql"] = "update_at";
$proto14["m_srcTableName"] = "mst_satei_error_item";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "create_by",
	"m_strTable" => "mst_satei_error_item",
	"m_srcTableName" => "mst_satei_error_item"
));

$proto16["m_sql"] = "create_by";
$proto16["m_srcTableName"] = "mst_satei_error_item";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "create_at",
	"m_strTable" => "mst_satei_error_item",
	"m_srcTableName" => "mst_satei_error_item"
));

$proto18["m_sql"] = "create_at";
$proto18["m_srcTableName"] = "mst_satei_error_item";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "field_name",
	"m_strTable" => "mst_satei_error_item",
	"m_srcTableName" => "mst_satei_error_item"
));

$proto20["m_sql"] = "field_name";
$proto20["m_srcTableName"] = "mst_satei_error_item";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "error_text",
	"m_strTable" => "mst_satei_error_item",
	"m_srcTableName" => "mst_satei_error_item"
));

$proto22["m_sql"] = "error_text";
$proto22["m_srcTableName"] = "mst_satei_error_item";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "mst_satei_error_item";
$proto25["m_srcTableName"] = "mst_satei_error_item";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "id";
$proto25["m_columns"][] = "name";
$proto25["m_columns"][] = "sort";
$proto25["m_columns"][] = "update_by";
$proto25["m_columns"][] = "update_at";
$proto25["m_columns"][] = "create_by";
$proto25["m_columns"][] = "create_at";
$proto25["m_columns"][] = "field_name";
$proto25["m_columns"][] = "error_text";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "mst_satei_error_item";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "mst_satei_error_item";
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
												$proto28=array();
						$obj = new SQLField(array(
	"m_strName" => "sort",
	"m_strTable" => "mst_satei_error_item",
	"m_srcTableName" => "mst_satei_error_item"
));

$proto28["m_column"]=$obj;
$proto28["m_bAsc"] = 1;
$proto28["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto28);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="mst_satei_error_item";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mst_satei_error_item = createSqlQuery_mst_satei_error_item();


	
		;

									

$tdatamst_satei_error_item[".sqlquery"] = $queryData_mst_satei_error_item;

include_once(getabspath("include/mst_satei_error_item_events.php"));
$tableEvents["mst_satei_error_item"] = new eventclass_mst_satei_error_item;
$tdatamst_satei_error_item[".hasEvents"] = true;

?>