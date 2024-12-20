<?php
require_once(getabspath("classes/cipherer.php"));




$tdatasatei_items = array();
	$tdatasatei_items[".ShortName"] = "satei_items";
	$tdatasatei_items[".OwnerID"] = "";
	$tdatasatei_items[".OriginalTable"] = "satei_items";

//	field labels
$fieldLabelssatei_items = array();
$fieldToolTipssatei_items = array();
$pageTitlessatei_items = array();
$placeHolderssatei_items = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelssatei_items["Japanese"] = array();
	$fieldToolTipssatei_items["Japanese"] = array();
	$placeHolderssatei_items["Japanese"] = array();
	$pageTitlessatei_items["Japanese"] = array();
	$fieldLabelssatei_items["Japanese"]["id"] = "Id";
	$fieldToolTipssatei_items["Japanese"]["id"] = "";
	$placeHolderssatei_items["Japanese"]["id"] = "";
	$fieldLabelssatei_items["Japanese"]["sort"] = "Sort";
	$fieldToolTipssatei_items["Japanese"]["sort"] = "";
	$placeHolderssatei_items["Japanese"]["sort"] = "";
	$fieldLabelssatei_items["Japanese"]["update_by"] = "更新者";
	$fieldToolTipssatei_items["Japanese"]["update_by"] = "";
	$placeHolderssatei_items["Japanese"]["update_by"] = "";
	$fieldLabelssatei_items["Japanese"]["update_at"] = "更新日";
	$fieldToolTipssatei_items["Japanese"]["update_at"] = "";
	$placeHolderssatei_items["Japanese"]["update_at"] = "";
	$fieldLabelssatei_items["Japanese"]["create_by"] = "作成者";
	$fieldToolTipssatei_items["Japanese"]["create_by"] = "";
	$placeHolderssatei_items["Japanese"]["create_by"] = "";
	$fieldLabelssatei_items["Japanese"]["create_at"] = "作成日";
	$fieldToolTipssatei_items["Japanese"]["create_at"] = "";
	$placeHolderssatei_items["Japanese"]["create_at"] = "";
	$fieldLabelssatei_items["Japanese"]["item_name"] = "カラム名";
	$fieldToolTipssatei_items["Japanese"]["item_name"] = "";
	$placeHolderssatei_items["Japanese"]["item_name"] = "";
	$fieldLabelssatei_items["Japanese"]["item_display_name"] = "表示名";
	$fieldToolTipssatei_items["Japanese"]["item_display_name"] = "";
	$placeHolderssatei_items["Japanese"]["item_display_name"] = "";
	$fieldLabelssatei_items["Japanese"]["option"] = "オプション";
	$fieldToolTipssatei_items["Japanese"]["option"] = "";
	$placeHolderssatei_items["Japanese"]["option"] = "";
	$fieldLabelssatei_items["Japanese"]["input_type"] = "入力形式";
	$fieldToolTipssatei_items["Japanese"]["input_type"] = "";
	$placeHolderssatei_items["Japanese"]["input_type"] = "";
	if (count($fieldToolTipssatei_items["Japanese"]))
		$tdatasatei_items[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelssatei_items[""] = array();
	$fieldToolTipssatei_items[""] = array();
	$placeHolderssatei_items[""] = array();
	$pageTitlessatei_items[""] = array();
	$fieldLabelssatei_items[""]["id"] = "Id";
	$fieldToolTipssatei_items[""]["id"] = "";
	$placeHolderssatei_items[""]["id"] = "";
	$fieldLabelssatei_items[""]["sort"] = "Sort";
	$fieldToolTipssatei_items[""]["sort"] = "";
	$placeHolderssatei_items[""]["sort"] = "";
	$fieldLabelssatei_items[""]["update_by"] = "Update By";
	$fieldToolTipssatei_items[""]["update_by"] = "";
	$placeHolderssatei_items[""]["update_by"] = "";
	$fieldLabelssatei_items[""]["update_at"] = "Update At";
	$fieldToolTipssatei_items[""]["update_at"] = "";
	$placeHolderssatei_items[""]["update_at"] = "";
	$fieldLabelssatei_items[""]["create_by"] = "Create By";
	$fieldToolTipssatei_items[""]["create_by"] = "";
	$placeHolderssatei_items[""]["create_by"] = "";
	$fieldLabelssatei_items[""]["create_at"] = "Create At";
	$fieldToolTipssatei_items[""]["create_at"] = "";
	$placeHolderssatei_items[""]["create_at"] = "";
	$fieldLabelssatei_items[""]["item_name"] = "Item Name";
	$fieldToolTipssatei_items[""]["item_name"] = "";
	$placeHolderssatei_items[""]["item_name"] = "";
	$fieldLabelssatei_items[""]["item_display_name"] = "Item Display Name";
	$fieldToolTipssatei_items[""]["item_display_name"] = "";
	$placeHolderssatei_items[""]["item_display_name"] = "";
	$fieldLabelssatei_items[""]["option"] = "Option";
	$fieldToolTipssatei_items[""]["option"] = "";
	$placeHolderssatei_items[""]["option"] = "";
	$fieldLabelssatei_items[""]["input_type"] = "Input Type";
	$fieldToolTipssatei_items[""]["input_type"] = "";
	$placeHolderssatei_items[""]["input_type"] = "";
	if (count($fieldToolTipssatei_items[""]))
		$tdatasatei_items[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelssatei_items["English"] = array();
	$fieldToolTipssatei_items["English"] = array();
	$placeHolderssatei_items["English"] = array();
	$pageTitlessatei_items["English"] = array();
	$fieldLabelssatei_items["English"]["id"] = "Id";
	$fieldToolTipssatei_items["English"]["id"] = "";
	$placeHolderssatei_items["English"]["id"] = "";
	$fieldLabelssatei_items["English"]["sort"] = "Sort";
	$fieldToolTipssatei_items["English"]["sort"] = "";
	$placeHolderssatei_items["English"]["sort"] = "";
	$fieldLabelssatei_items["English"]["update_by"] = "Update By";
	$fieldToolTipssatei_items["English"]["update_by"] = "";
	$placeHolderssatei_items["English"]["update_by"] = "";
	$fieldLabelssatei_items["English"]["update_at"] = "Update At";
	$fieldToolTipssatei_items["English"]["update_at"] = "";
	$placeHolderssatei_items["English"]["update_at"] = "";
	$fieldLabelssatei_items["English"]["create_by"] = "Create By";
	$fieldToolTipssatei_items["English"]["create_by"] = "";
	$placeHolderssatei_items["English"]["create_by"] = "";
	$fieldLabelssatei_items["English"]["create_at"] = "Create At";
	$fieldToolTipssatei_items["English"]["create_at"] = "";
	$placeHolderssatei_items["English"]["create_at"] = "";
	$fieldLabelssatei_items["English"]["item_name"] = "Item Name";
	$fieldToolTipssatei_items["English"]["item_name"] = "";
	$placeHolderssatei_items["English"]["item_name"] = "";
	$fieldLabelssatei_items["English"]["item_display_name"] = "Item Display Name";
	$fieldToolTipssatei_items["English"]["item_display_name"] = "";
	$placeHolderssatei_items["English"]["item_display_name"] = "";
	$fieldLabelssatei_items["English"]["option"] = "Option";
	$fieldToolTipssatei_items["English"]["option"] = "";
	$placeHolderssatei_items["English"]["option"] = "";
	$fieldLabelssatei_items["English"]["input_type"] = "Input Type";
	$fieldToolTipssatei_items["English"]["input_type"] = "";
	$placeHolderssatei_items["English"]["input_type"] = "";
	if (count($fieldToolTipssatei_items["English"]))
		$tdatasatei_items[".isUseToolTips"] = true;
}


	$tdatasatei_items[".NCSearch"] = true;



$tdatasatei_items[".shortTableName"] = "satei_items";
$tdatasatei_items[".nSecOptions"] = 0;
$tdatasatei_items[".recsPerRowPrint"] = 1;
$tdatasatei_items[".mainTableOwnerID"] = "";
$tdatasatei_items[".moveNext"] = 1;
$tdatasatei_items[".entityType"] = 0;

$tdatasatei_items[".strOriginalTableName"] = "satei_items";

	



$tdatasatei_items[".showAddInPopup"] = false;

$tdatasatei_items[".showEditInPopup"] = false;

$tdatasatei_items[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatasatei_items[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatasatei_items[".fieldsForRegister"] = array();

$tdatasatei_items[".listAjax"] = false;

	$tdatasatei_items[".audit"] = false;

	$tdatasatei_items[".locking"] = false;



$tdatasatei_items[".list"] = true;

$tdatasatei_items[".inlineEdit"] = true;


$tdatasatei_items[".reorderRecordsByHeader"] = true;



$tdatasatei_items[".inlineAdd"] = true;

$tdatasatei_items[".import"] = true;

$tdatasatei_items[".exportTo"] = true;


$tdatasatei_items[".delete"] = true;

$tdatasatei_items[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatasatei_items[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatasatei_items[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatasatei_items[".searchSaving"] = false;
//

$tdatasatei_items[".showSearchPanel"] = true;
		$tdatasatei_items[".flexibleSearch"] = true;

$tdatasatei_items[".isUseAjaxSuggest"] = true;

$tdatasatei_items[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatasatei_items[".ajaxCodeSnippetAdded"] = false;

$tdatasatei_items[".buttonsAdded"] = false;

$tdatasatei_items[".addPageEvents"] = false;

// use timepicker for search panel
$tdatasatei_items[".isUseTimeForSearch"] = false;





$tdatasatei_items[".allSearchFields"] = array();
$tdatasatei_items[".filterFields"] = array();
$tdatasatei_items[".requiredSearchFields"] = array();

$tdatasatei_items[".allSearchFields"][] = "id";
	$tdatasatei_items[".allSearchFields"][] = "sort";
	$tdatasatei_items[".allSearchFields"][] = "item_name";
	$tdatasatei_items[".allSearchFields"][] = "item_display_name";
	$tdatasatei_items[".allSearchFields"][] = "option";
	$tdatasatei_items[".allSearchFields"][] = "input_type";
	$tdatasatei_items[".allSearchFields"][] = "update_by";
	$tdatasatei_items[".allSearchFields"][] = "update_at";
	$tdatasatei_items[".allSearchFields"][] = "create_by";
	$tdatasatei_items[".allSearchFields"][] = "create_at";
	

$tdatasatei_items[".googleLikeFields"] = array();
$tdatasatei_items[".googleLikeFields"][] = "id";
$tdatasatei_items[".googleLikeFields"][] = "sort";
$tdatasatei_items[".googleLikeFields"][] = "update_by";
$tdatasatei_items[".googleLikeFields"][] = "update_at";
$tdatasatei_items[".googleLikeFields"][] = "create_by";
$tdatasatei_items[".googleLikeFields"][] = "create_at";
$tdatasatei_items[".googleLikeFields"][] = "item_name";
$tdatasatei_items[".googleLikeFields"][] = "item_display_name";
$tdatasatei_items[".googleLikeFields"][] = "option";
$tdatasatei_items[".googleLikeFields"][] = "input_type";


$tdatasatei_items[".advSearchFields"] = array();
$tdatasatei_items[".advSearchFields"][] = "id";
$tdatasatei_items[".advSearchFields"][] = "sort";
$tdatasatei_items[".advSearchFields"][] = "item_name";
$tdatasatei_items[".advSearchFields"][] = "item_display_name";
$tdatasatei_items[".advSearchFields"][] = "option";
$tdatasatei_items[".advSearchFields"][] = "input_type";
$tdatasatei_items[".advSearchFields"][] = "update_by";
$tdatasatei_items[".advSearchFields"][] = "update_at";
$tdatasatei_items[".advSearchFields"][] = "create_by";
$tdatasatei_items[".advSearchFields"][] = "create_at";

$tdatasatei_items[".tableType"] = "list";

$tdatasatei_items[".printerPageOrientation"] = 0;
$tdatasatei_items[".nPrinterPageScale"] = 100;

$tdatasatei_items[".nPrinterSplitRecords"] = 40;

$tdatasatei_items[".nPrinterPDFSplitRecords"] = 40;



$tdatasatei_items[".geocodingEnabled"] = false;





$tdatasatei_items[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatasatei_items[".pageSize"] = 100;

$tdatasatei_items[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `sort`";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatasatei_items[".strOrderBy"] = $tstrOrderBy;

$tdatasatei_items[".orderindexes"] = array();
$tdatasatei_items[".orderindexes"][] = array(2, (1 ? "ASC" : "DESC"), "`sort`");

$tdatasatei_items[".sqlHead"] = "SELECT `id`,  `sort`,  `update_by`,  `update_at`,  `create_by`,  `create_at`,  `item_name`,  `item_display_name`,  `option`,  `input_type`";
$tdatasatei_items[".sqlFrom"] = "FROM `satei_items`";
$tdatasatei_items[".sqlWhereExpr"] = "";
$tdatasatei_items[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasatei_items[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasatei_items[".arrGroupsPerPage"] = $arrGPP;

$tdatasatei_items[".highlightSearchResults"] = true;

$tableKeyssatei_items = array();
$tableKeyssatei_items[] = "id";
$tdatasatei_items[".Keys"] = $tableKeyssatei_items;

$tdatasatei_items[".listFields"] = array();
$tdatasatei_items[".listFields"][] = "id";
$tdatasatei_items[".listFields"][] = "sort";
$tdatasatei_items[".listFields"][] = "item_name";
$tdatasatei_items[".listFields"][] = "item_display_name";
$tdatasatei_items[".listFields"][] = "option";
$tdatasatei_items[".listFields"][] = "input_type";
$tdatasatei_items[".listFields"][] = "update_by";
$tdatasatei_items[".listFields"][] = "update_at";
$tdatasatei_items[".listFields"][] = "create_by";
$tdatasatei_items[".listFields"][] = "create_at";

$tdatasatei_items[".hideMobileList"] = array();


$tdatasatei_items[".viewFields"] = array();

$tdatasatei_items[".addFields"] = array();

$tdatasatei_items[".masterListFields"] = array();
$tdatasatei_items[".masterListFields"][] = "id";
$tdatasatei_items[".masterListFields"][] = "sort";
$tdatasatei_items[".masterListFields"][] = "item_name";
$tdatasatei_items[".masterListFields"][] = "item_display_name";
$tdatasatei_items[".masterListFields"][] = "option";
$tdatasatei_items[".masterListFields"][] = "input_type";
$tdatasatei_items[".masterListFields"][] = "update_by";
$tdatasatei_items[".masterListFields"][] = "update_at";
$tdatasatei_items[".masterListFields"][] = "create_by";
$tdatasatei_items[".masterListFields"][] = "create_at";

$tdatasatei_items[".inlineAddFields"] = array();
$tdatasatei_items[".inlineAddFields"][] = "sort";
$tdatasatei_items[".inlineAddFields"][] = "item_name";
$tdatasatei_items[".inlineAddFields"][] = "item_display_name";
$tdatasatei_items[".inlineAddFields"][] = "option";
$tdatasatei_items[".inlineAddFields"][] = "input_type";

$tdatasatei_items[".editFields"] = array();

$tdatasatei_items[".inlineEditFields"] = array();
$tdatasatei_items[".inlineEditFields"][] = "sort";
$tdatasatei_items[".inlineEditFields"][] = "item_name";
$tdatasatei_items[".inlineEditFields"][] = "item_display_name";
$tdatasatei_items[".inlineEditFields"][] = "option";
$tdatasatei_items[".inlineEditFields"][] = "input_type";

$tdatasatei_items[".updateSelectedFields"] = array();


$tdatasatei_items[".exportFields"] = array();
$tdatasatei_items[".exportFields"][] = "id";
$tdatasatei_items[".exportFields"][] = "sort";
$tdatasatei_items[".exportFields"][] = "item_name";
$tdatasatei_items[".exportFields"][] = "item_display_name";
$tdatasatei_items[".exportFields"][] = "option";
$tdatasatei_items[".exportFields"][] = "input_type";
$tdatasatei_items[".exportFields"][] = "update_by";
$tdatasatei_items[".exportFields"][] = "update_at";
$tdatasatei_items[".exportFields"][] = "create_by";
$tdatasatei_items[".exportFields"][] = "create_at";

$tdatasatei_items[".importFields"] = array();
$tdatasatei_items[".importFields"][] = "id";
$tdatasatei_items[".importFields"][] = "sort";
$tdatasatei_items[".importFields"][] = "item_name";
$tdatasatei_items[".importFields"][] = "item_display_name";
$tdatasatei_items[".importFields"][] = "option";
$tdatasatei_items[".importFields"][] = "input_type";

$tdatasatei_items[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "satei_items";
	$fdata["Label"] = GetFieldLabel("satei_items","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`id`";

	
	
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




	$tdatasatei_items["id"] = $fdata;
//	sort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "sort";
	$fdata["GoodName"] = "sort";
	$fdata["ownerTable"] = "satei_items";
	$fdata["Label"] = GetFieldLabel("satei_items","sort");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "sort";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`sort`";

	
	
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




	$tdatasatei_items["sort"] = $fdata;
//	update_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "update_by";
	$fdata["GoodName"] = "update_by";
	$fdata["ownerTable"] = "satei_items";
	$fdata["Label"] = GetFieldLabel("satei_items","update_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "update_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`update_by`";

	
	
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




	$tdatasatei_items["update_by"] = $fdata;
//	update_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "update_at";
	$fdata["GoodName"] = "update_at";
	$fdata["ownerTable"] = "satei_items";
	$fdata["Label"] = GetFieldLabel("satei_items","update_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "update_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`update_at`";

	
	
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




	$tdatasatei_items["update_at"] = $fdata;
//	create_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "create_by";
	$fdata["GoodName"] = "create_by";
	$fdata["ownerTable"] = "satei_items";
	$fdata["Label"] = GetFieldLabel("satei_items","create_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "create_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`create_by`";

	
	
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




	$tdatasatei_items["create_by"] = $fdata;
//	create_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "create_at";
	$fdata["GoodName"] = "create_at";
	$fdata["ownerTable"] = "satei_items";
	$fdata["Label"] = GetFieldLabel("satei_items","create_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "create_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`create_at`";

	
	
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




	$tdatasatei_items["create_at"] = $fdata;
//	item_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "item_name";
	$fdata["GoodName"] = "item_name";
	$fdata["ownerTable"] = "satei_items";
	$fdata["Label"] = GetFieldLabel("satei_items","item_name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "item_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`item_name`";

	
	
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




	$tdatasatei_items["item_name"] = $fdata;
//	item_display_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "item_display_name";
	$fdata["GoodName"] = "item_display_name";
	$fdata["ownerTable"] = "satei_items";
	$fdata["Label"] = GetFieldLabel("satei_items","item_display_name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "item_display_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`item_display_name`";

	
	
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




	$tdatasatei_items["item_display_name"] = $fdata;
//	option
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "option";
	$fdata["GoodName"] = "option";
	$fdata["ownerTable"] = "satei_items";
	$fdata["Label"] = GetFieldLabel("satei_items","option");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "option";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`option`";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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




	$tdatasatei_items["option"] = $fdata;
//	input_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "input_type";
	$fdata["GoodName"] = "input_type";
	$fdata["ownerTable"] = "satei_items";
	$fdata["Label"] = GetFieldLabel("satei_items","input_type");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "input_type";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`input_type`";

	
	
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




	$tdatasatei_items["input_type"] = $fdata;


$tables_data["satei_items"]=&$tdatasatei_items;
$field_labels["satei_items"] = &$fieldLabelssatei_items;
$fieldToolTips["satei_items"] = &$fieldToolTipssatei_items;
$placeHolders["satei_items"] = &$placeHolderssatei_items;
$page_titles["satei_items"] = &$pageTitlessatei_items;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["satei_items"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["satei_items"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_satei_items()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  `sort`,  `update_by`,  `update_at`,  `create_by`,  `create_at`,  `item_name`,  `item_display_name`,  `option`,  `input_type`";
$proto0["m_strFrom"] = "FROM `satei_items`";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY `sort`";
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
	"m_strTable" => "satei_items",
	"m_srcTableName" => "satei_items"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "satei_items";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "sort",
	"m_strTable" => "satei_items",
	"m_srcTableName" => "satei_items"
));

$proto8["m_sql"] = "`sort`";
$proto8["m_srcTableName"] = "satei_items";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "update_by",
	"m_strTable" => "satei_items",
	"m_srcTableName" => "satei_items"
));

$proto10["m_sql"] = "`update_by`";
$proto10["m_srcTableName"] = "satei_items";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "update_at",
	"m_strTable" => "satei_items",
	"m_srcTableName" => "satei_items"
));

$proto12["m_sql"] = "`update_at`";
$proto12["m_srcTableName"] = "satei_items";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "create_by",
	"m_strTable" => "satei_items",
	"m_srcTableName" => "satei_items"
));

$proto14["m_sql"] = "`create_by`";
$proto14["m_srcTableName"] = "satei_items";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "create_at",
	"m_strTable" => "satei_items",
	"m_srcTableName" => "satei_items"
));

$proto16["m_sql"] = "`create_at`";
$proto16["m_srcTableName"] = "satei_items";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "item_name",
	"m_strTable" => "satei_items",
	"m_srcTableName" => "satei_items"
));

$proto18["m_sql"] = "`item_name`";
$proto18["m_srcTableName"] = "satei_items";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "item_display_name",
	"m_strTable" => "satei_items",
	"m_srcTableName" => "satei_items"
));

$proto20["m_sql"] = "`item_display_name`";
$proto20["m_srcTableName"] = "satei_items";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "option",
	"m_strTable" => "satei_items",
	"m_srcTableName" => "satei_items"
));

$proto22["m_sql"] = "`option`";
$proto22["m_srcTableName"] = "satei_items";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "input_type",
	"m_strTable" => "satei_items",
	"m_srcTableName" => "satei_items"
));

$proto24["m_sql"] = "`input_type`";
$proto24["m_srcTableName"] = "satei_items";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "satei_items";
$proto27["m_srcTableName"] = "satei_items";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "id";
$proto27["m_columns"][] = "sort";
$proto27["m_columns"][] = "update_by";
$proto27["m_columns"][] = "update_at";
$proto27["m_columns"][] = "create_by";
$proto27["m_columns"][] = "create_at";
$proto27["m_columns"][] = "item_name";
$proto27["m_columns"][] = "item_display_name";
$proto27["m_columns"][] = "option";
$proto27["m_columns"][] = "input_type";
$proto27["m_columns"][] = "html_parts";
$proto27["m_columns"][] = "template_name";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "`satei_items`";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "satei_items";
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
	"m_strTable" => "satei_items",
	"m_srcTableName" => "satei_items"
));

$proto30["m_column"]=$obj;
$proto30["m_bAsc"] = 1;
$proto30["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto30);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="satei_items";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_satei_items = createSqlQuery_satei_items();


	
		;

										

$tdatasatei_items[".sqlquery"] = $queryData_satei_items;

$tableEvents["satei_items"] = new eventsBase;
$tdatasatei_items[".hasEvents"] = false;

?>