<?php
require_once(getabspath("classes/cipherer.php"));




$tdataEoc_trader = array();
	$tdataEoc_trader[".truncateText"] = true;
	$tdataEoc_trader[".NumberOfChars"] = 80;
	$tdataEoc_trader[".ShortName"] = "Eoc_trader";
	$tdataEoc_trader[".OwnerID"] = "";
	$tdataEoc_trader[".OriginalTable"] = "Eoc_trader";

//	field labels
$fieldLabelsEoc_trader = array();
$fieldToolTipsEoc_trader = array();
$pageTitlesEoc_trader = array();
$placeHoldersEoc_trader = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsEoc_trader["Japanese"] = array();
	$fieldToolTipsEoc_trader["Japanese"] = array();
	$placeHoldersEoc_trader["Japanese"] = array();
	$pageTitlesEoc_trader["Japanese"] = array();
	$fieldLabelsEoc_trader["Japanese"]["id"] = "Id";
	$fieldToolTipsEoc_trader["Japanese"]["id"] = "";
	$placeHoldersEoc_trader["Japanese"]["id"] = "";
	$fieldLabelsEoc_trader["Japanese"]["slip_number"] = "取引伝票番号";
	$fieldToolTipsEoc_trader["Japanese"]["slip_number"] = "";
	$placeHoldersEoc_trader["Japanese"]["slip_number"] = "";
	$fieldLabelsEoc_trader["Japanese"]["market"] = "取引先";
	$fieldToolTipsEoc_trader["Japanese"]["market"] = "";
	$placeHoldersEoc_trader["Japanese"]["market"] = "";
	$fieldLabelsEoc_trader["Japanese"]["date"] = "取引日";
	$fieldToolTipsEoc_trader["Japanese"]["date"] = "";
	$placeHoldersEoc_trader["Japanese"]["date"] = "";
	$fieldLabelsEoc_trader["Japanese"]["create_at"] = "作成日";
	$fieldToolTipsEoc_trader["Japanese"]["create_at"] = "";
	$placeHoldersEoc_trader["Japanese"]["create_at"] = "";
	$fieldLabelsEoc_trader["Japanese"]["create_by"] = "作成者";
	$fieldToolTipsEoc_trader["Japanese"]["create_by"] = "";
	$placeHoldersEoc_trader["Japanese"]["create_by"] = "";
	$fieldLabelsEoc_trader["Japanese"]["update_at"] = "更新日";
	$fieldToolTipsEoc_trader["Japanese"]["update_at"] = "";
	$placeHoldersEoc_trader["Japanese"]["update_at"] = "";
	$fieldLabelsEoc_trader["Japanese"]["update_by"] = "更新者";
	$fieldToolTipsEoc_trader["Japanese"]["update_by"] = "";
	$placeHoldersEoc_trader["Japanese"]["update_by"] = "";
	$fieldLabelsEoc_trader["Japanese"]["link_field"] = "link";
	$fieldToolTipsEoc_trader["Japanese"]["link_field"] = "";
	$placeHoldersEoc_trader["Japanese"]["link_field"] = "";
	$fieldLabelsEoc_trader["Japanese"]["many_satei_btn"] = "大量査定ボタン";
	$fieldToolTipsEoc_trader["Japanese"]["many_satei_btn"] = "";
	$placeHoldersEoc_trader["Japanese"]["many_satei_btn"] = "";
	if (count($fieldToolTipsEoc_trader["Japanese"]))
		$tdataEoc_trader[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsEoc_trader[""] = array();
	$fieldToolTipsEoc_trader[""] = array();
	$placeHoldersEoc_trader[""] = array();
	$pageTitlesEoc_trader[""] = array();
	$fieldLabelsEoc_trader[""]["id"] = "Id";
	$fieldToolTipsEoc_trader[""]["id"] = "";
	$placeHoldersEoc_trader[""]["id"] = "";
	$fieldLabelsEoc_trader[""]["slip_number"] = "Slip Number";
	$fieldToolTipsEoc_trader[""]["slip_number"] = "";
	$placeHoldersEoc_trader[""]["slip_number"] = "";
	$fieldLabelsEoc_trader[""]["market"] = "Market";
	$fieldToolTipsEoc_trader[""]["market"] = "";
	$placeHoldersEoc_trader[""]["market"] = "";
	$fieldLabelsEoc_trader[""]["date"] = "Date";
	$fieldToolTipsEoc_trader[""]["date"] = "";
	$placeHoldersEoc_trader[""]["date"] = "";
	$fieldLabelsEoc_trader[""]["create_at"] = "Create At";
	$fieldToolTipsEoc_trader[""]["create_at"] = "";
	$placeHoldersEoc_trader[""]["create_at"] = "";
	$fieldLabelsEoc_trader[""]["create_by"] = "Create By";
	$fieldToolTipsEoc_trader[""]["create_by"] = "";
	$placeHoldersEoc_trader[""]["create_by"] = "";
	$fieldLabelsEoc_trader[""]["update_at"] = "Update At";
	$fieldToolTipsEoc_trader[""]["update_at"] = "";
	$placeHoldersEoc_trader[""]["update_at"] = "";
	$fieldLabelsEoc_trader[""]["update_by"] = "Update By";
	$fieldToolTipsEoc_trader[""]["update_by"] = "";
	$placeHoldersEoc_trader[""]["update_by"] = "";
	$fieldLabelsEoc_trader[""]["link_field"] = "Link Field";
	$fieldToolTipsEoc_trader[""]["link_field"] = "";
	$placeHoldersEoc_trader[""]["link_field"] = "";
	$fieldLabelsEoc_trader[""]["many_satei_btn"] = "Many Satei Btn";
	$fieldToolTipsEoc_trader[""]["many_satei_btn"] = "";
	$placeHoldersEoc_trader[""]["many_satei_btn"] = "";
	if (count($fieldToolTipsEoc_trader[""]))
		$tdataEoc_trader[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsEoc_trader["English"] = array();
	$fieldToolTipsEoc_trader["English"] = array();
	$placeHoldersEoc_trader["English"] = array();
	$pageTitlesEoc_trader["English"] = array();
	$fieldLabelsEoc_trader["English"]["id"] = "Id";
	$fieldToolTipsEoc_trader["English"]["id"] = "";
	$placeHoldersEoc_trader["English"]["id"] = "";
	$fieldLabelsEoc_trader["English"]["slip_number"] = "Slip Number";
	$fieldToolTipsEoc_trader["English"]["slip_number"] = "";
	$placeHoldersEoc_trader["English"]["slip_number"] = "";
	$fieldLabelsEoc_trader["English"]["market"] = "Market";
	$fieldToolTipsEoc_trader["English"]["market"] = "";
	$placeHoldersEoc_trader["English"]["market"] = "";
	$fieldLabelsEoc_trader["English"]["date"] = "Date";
	$fieldToolTipsEoc_trader["English"]["date"] = "";
	$placeHoldersEoc_trader["English"]["date"] = "";
	$fieldLabelsEoc_trader["English"]["create_at"] = "Create At";
	$fieldToolTipsEoc_trader["English"]["create_at"] = "";
	$placeHoldersEoc_trader["English"]["create_at"] = "";
	$fieldLabelsEoc_trader["English"]["create_by"] = "Create By";
	$fieldToolTipsEoc_trader["English"]["create_by"] = "";
	$placeHoldersEoc_trader["English"]["create_by"] = "";
	$fieldLabelsEoc_trader["English"]["update_at"] = "Update At";
	$fieldToolTipsEoc_trader["English"]["update_at"] = "";
	$placeHoldersEoc_trader["English"]["update_at"] = "";
	$fieldLabelsEoc_trader["English"]["update_by"] = "Update By";
	$fieldToolTipsEoc_trader["English"]["update_by"] = "";
	$placeHoldersEoc_trader["English"]["update_by"] = "";
	$fieldLabelsEoc_trader["English"]["link_field"] = "Link Field";
	$fieldToolTipsEoc_trader["English"]["link_field"] = "";
	$placeHoldersEoc_trader["English"]["link_field"] = "";
	$fieldLabelsEoc_trader["English"]["many_satei_btn"] = "Many Satei Btn";
	$fieldToolTipsEoc_trader["English"]["many_satei_btn"] = "";
	$placeHoldersEoc_trader["English"]["many_satei_btn"] = "";
	if (count($fieldToolTipsEoc_trader["English"]))
		$tdataEoc_trader[".isUseToolTips"] = true;
}


	$tdataEoc_trader[".NCSearch"] = true;



$tdataEoc_trader[".shortTableName"] = "Eoc_trader";
$tdataEoc_trader[".nSecOptions"] = 0;
$tdataEoc_trader[".recsPerRowPrint"] = 1;
$tdataEoc_trader[".mainTableOwnerID"] = "";
$tdataEoc_trader[".moveNext"] = 1;
$tdataEoc_trader[".entityType"] = 0;

$tdataEoc_trader[".strOriginalTableName"] = "Eoc_trader";

	



$tdataEoc_trader[".showAddInPopup"] = false;

$tdataEoc_trader[".showEditInPopup"] = false;

$tdataEoc_trader[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataEoc_trader[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataEoc_trader[".fieldsForRegister"] = array();

$tdataEoc_trader[".listAjax"] = false;

	$tdataEoc_trader[".audit"] = true;

	$tdataEoc_trader[".locking"] = false;



$tdataEoc_trader[".list"] = true;

$tdataEoc_trader[".inlineEdit"] = true;


$tdataEoc_trader[".reorderRecordsByHeader"] = true;



$tdataEoc_trader[".inlineAdd"] = true;

$tdataEoc_trader[".import"] = true;

$tdataEoc_trader[".exportTo"] = true;


$tdataEoc_trader[".delete"] = true;

$tdataEoc_trader[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataEoc_trader[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataEoc_trader[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataEoc_trader[".searchSaving"] = false;
//

$tdataEoc_trader[".showSearchPanel"] = true;
		$tdataEoc_trader[".flexibleSearch"] = true;

$tdataEoc_trader[".isUseAjaxSuggest"] = true;

$tdataEoc_trader[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdataEoc_trader[".ajaxCodeSnippetAdded"] = false;

$tdataEoc_trader[".buttonsAdded"] = false;

$tdataEoc_trader[".addPageEvents"] = false;

// use timepicker for search panel
$tdataEoc_trader[".isUseTimeForSearch"] = false;




$tdataEoc_trader[".detailsLinksOnList"] = "2";

$tdataEoc_trader[".allSearchFields"] = array();
$tdataEoc_trader[".filterFields"] = array();
$tdataEoc_trader[".requiredSearchFields"] = array();

$tdataEoc_trader[".allSearchFields"][] = "link_field";
	$tdataEoc_trader[".allSearchFields"][] = "many_satei_btn";
	$tdataEoc_trader[".allSearchFields"][] = "id";
	$tdataEoc_trader[".allSearchFields"][] = "slip_number";
	$tdataEoc_trader[".allSearchFields"][] = "market";
	$tdataEoc_trader[".allSearchFields"][] = "date";
	$tdataEoc_trader[".allSearchFields"][] = "create_at";
	$tdataEoc_trader[".allSearchFields"][] = "create_by";
	$tdataEoc_trader[".allSearchFields"][] = "update_at";
	$tdataEoc_trader[".allSearchFields"][] = "update_by";
	

$tdataEoc_trader[".googleLikeFields"] = array();
$tdataEoc_trader[".googleLikeFields"][] = "link_field";
$tdataEoc_trader[".googleLikeFields"][] = "many_satei_btn";
$tdataEoc_trader[".googleLikeFields"][] = "id";
$tdataEoc_trader[".googleLikeFields"][] = "slip_number";
$tdataEoc_trader[".googleLikeFields"][] = "market";
$tdataEoc_trader[".googleLikeFields"][] = "date";
$tdataEoc_trader[".googleLikeFields"][] = "create_at";
$tdataEoc_trader[".googleLikeFields"][] = "create_by";
$tdataEoc_trader[".googleLikeFields"][] = "update_at";
$tdataEoc_trader[".googleLikeFields"][] = "update_by";


$tdataEoc_trader[".advSearchFields"] = array();
$tdataEoc_trader[".advSearchFields"][] = "link_field";
$tdataEoc_trader[".advSearchFields"][] = "many_satei_btn";
$tdataEoc_trader[".advSearchFields"][] = "id";
$tdataEoc_trader[".advSearchFields"][] = "slip_number";
$tdataEoc_trader[".advSearchFields"][] = "market";
$tdataEoc_trader[".advSearchFields"][] = "date";
$tdataEoc_trader[".advSearchFields"][] = "create_at";
$tdataEoc_trader[".advSearchFields"][] = "create_by";
$tdataEoc_trader[".advSearchFields"][] = "update_at";
$tdataEoc_trader[".advSearchFields"][] = "update_by";

$tdataEoc_trader[".tableType"] = "list";

$tdataEoc_trader[".printerPageOrientation"] = 0;
$tdataEoc_trader[".nPrinterPageScale"] = 100;

$tdataEoc_trader[".nPrinterSplitRecords"] = 40;

$tdataEoc_trader[".nPrinterPDFSplitRecords"] = 40;



$tdataEoc_trader[".geocodingEnabled"] = false;





$tdataEoc_trader[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataEoc_trader[".pageSize"] = 20;

$tdataEoc_trader[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `id` DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataEoc_trader[".strOrderBy"] = $tstrOrderBy;

$tdataEoc_trader[".orderindexes"] = array();
$tdataEoc_trader[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "`id`");

$tdataEoc_trader[".sqlHead"] = "SELECT id AS `link_field`,  id AS `many_satei_btn`,  `id`,  `slip_number`,  `market`,  `date`,  `create_at`,  `create_by`,  `update_at`,  `update_by`";
$tdataEoc_trader[".sqlFrom"] = "FROM `Eoc_trader`";
$tdataEoc_trader[".sqlWhereExpr"] = "";
$tdataEoc_trader[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataEoc_trader[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataEoc_trader[".arrGroupsPerPage"] = $arrGPP;

$tdataEoc_trader[".highlightSearchResults"] = true;

$tableKeysEoc_trader = array();
$tableKeysEoc_trader[] = "id";
$tdataEoc_trader[".Keys"] = $tableKeysEoc_trader;

$tdataEoc_trader[".listFields"] = array();
$tdataEoc_trader[".listFields"][] = "link_field";
$tdataEoc_trader[".listFields"][] = "many_satei_btn";
$tdataEoc_trader[".listFields"][] = "id";
$tdataEoc_trader[".listFields"][] = "slip_number";
$tdataEoc_trader[".listFields"][] = "market";
$tdataEoc_trader[".listFields"][] = "date";
$tdataEoc_trader[".listFields"][] = "create_at";
$tdataEoc_trader[".listFields"][] = "create_by";
$tdataEoc_trader[".listFields"][] = "update_at";
$tdataEoc_trader[".listFields"][] = "update_by";

$tdataEoc_trader[".hideMobileList"] = array();


$tdataEoc_trader[".viewFields"] = array();

$tdataEoc_trader[".addFields"] = array();

$tdataEoc_trader[".masterListFields"] = array();
$tdataEoc_trader[".masterListFields"][] = "link_field";
$tdataEoc_trader[".masterListFields"][] = "many_satei_btn";
$tdataEoc_trader[".masterListFields"][] = "id";
$tdataEoc_trader[".masterListFields"][] = "slip_number";
$tdataEoc_trader[".masterListFields"][] = "market";
$tdataEoc_trader[".masterListFields"][] = "date";
$tdataEoc_trader[".masterListFields"][] = "create_at";
$tdataEoc_trader[".masterListFields"][] = "create_by";
$tdataEoc_trader[".masterListFields"][] = "update_at";
$tdataEoc_trader[".masterListFields"][] = "update_by";

$tdataEoc_trader[".inlineAddFields"] = array();
$tdataEoc_trader[".inlineAddFields"][] = "slip_number";
$tdataEoc_trader[".inlineAddFields"][] = "market";
$tdataEoc_trader[".inlineAddFields"][] = "date";

$tdataEoc_trader[".editFields"] = array();

$tdataEoc_trader[".inlineEditFields"] = array();
$tdataEoc_trader[".inlineEditFields"][] = "slip_number";
$tdataEoc_trader[".inlineEditFields"][] = "market";
$tdataEoc_trader[".inlineEditFields"][] = "date";

$tdataEoc_trader[".updateSelectedFields"] = array();


$tdataEoc_trader[".exportFields"] = array();
$tdataEoc_trader[".exportFields"][] = "link_field";
$tdataEoc_trader[".exportFields"][] = "many_satei_btn";
$tdataEoc_trader[".exportFields"][] = "id";
$tdataEoc_trader[".exportFields"][] = "slip_number";
$tdataEoc_trader[".exportFields"][] = "market";
$tdataEoc_trader[".exportFields"][] = "date";
$tdataEoc_trader[".exportFields"][] = "create_at";
$tdataEoc_trader[".exportFields"][] = "create_by";
$tdataEoc_trader[".exportFields"][] = "update_at";
$tdataEoc_trader[".exportFields"][] = "update_by";

$tdataEoc_trader[".importFields"] = array();
$tdataEoc_trader[".importFields"][] = "link_field";
$tdataEoc_trader[".importFields"][] = "many_satei_btn";
$tdataEoc_trader[".importFields"][] = "id";
$tdataEoc_trader[".importFields"][] = "slip_number";
$tdataEoc_trader[".importFields"][] = "market";
$tdataEoc_trader[".importFields"][] = "date";
$tdataEoc_trader[".importFields"][] = "create_at";
$tdataEoc_trader[".importFields"][] = "create_by";
$tdataEoc_trader[".importFields"][] = "update_at";
$tdataEoc_trader[".importFields"][] = "update_by";

$tdataEoc_trader[".printFields"] = array();

//	link_field
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "link_field";
	$fdata["GoodName"] = "link_field";
	$fdata["ownerTable"] = "Eoc_trader";
	$fdata["Label"] = GetFieldLabel("Eoc_trader","link_field");
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

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
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
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataEoc_trader["link_field"] = $fdata;
//	many_satei_btn
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "many_satei_btn";
	$fdata["GoodName"] = "many_satei_btn";
	$fdata["ownerTable"] = "Eoc_trader";
	$fdata["Label"] = GetFieldLabel("Eoc_trader","many_satei_btn");
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

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
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
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataEoc_trader["many_satei_btn"] = $fdata;
//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "Eoc_trader";
	$fdata["Label"] = GetFieldLabel("Eoc_trader","id");
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




	$tdataEoc_trader["id"] = $fdata;
//	slip_number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "slip_number";
	$fdata["GoodName"] = "slip_number";
	$fdata["ownerTable"] = "Eoc_trader";
	$fdata["Label"] = GetFieldLabel("Eoc_trader","slip_number");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "slip_number";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`slip_number`";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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




	$tdataEoc_trader["slip_number"] = $fdata;
//	market
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "market";
	$fdata["GoodName"] = "market";
	$fdata["ownerTable"] = "Eoc_trader";
	$fdata["Label"] = GetFieldLabel("Eoc_trader","market");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "market";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`market`";

	
	
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
	$edata["LookupTable"] = "mst_business_partner";
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




	$tdataEoc_trader["market"] = $fdata;
//	date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "date";
	$fdata["GoodName"] = "date";
	$fdata["ownerTable"] = "Eoc_trader";
	$fdata["Label"] = GetFieldLabel("Eoc_trader","date");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`date`";

	
	
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

	
	



		$edata["IsRequired"] = true;

	
	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataEoc_trader["date"] = $fdata;
//	create_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "create_at";
	$fdata["GoodName"] = "create_at";
	$fdata["ownerTable"] = "Eoc_trader";
	$fdata["Label"] = GetFieldLabel("Eoc_trader","create_at");
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




	$tdataEoc_trader["create_at"] = $fdata;
//	create_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "create_by";
	$fdata["GoodName"] = "create_by";
	$fdata["ownerTable"] = "Eoc_trader";
	$fdata["Label"] = GetFieldLabel("Eoc_trader","create_by");
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




	$tdataEoc_trader["create_by"] = $fdata;
//	update_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "update_at";
	$fdata["GoodName"] = "update_at";
	$fdata["ownerTable"] = "Eoc_trader";
	$fdata["Label"] = GetFieldLabel("Eoc_trader","update_at");
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




	$tdataEoc_trader["update_at"] = $fdata;
//	update_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "update_by";
	$fdata["GoodName"] = "update_by";
	$fdata["ownerTable"] = "Eoc_trader";
	$fdata["Label"] = GetFieldLabel("Eoc_trader","update_by");
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




	$tdataEoc_trader["update_by"] = $fdata;


$tables_data["Eoc_trader"]=&$tdataEoc_trader;
$field_labels["Eoc_trader"] = &$fieldLabelsEoc_trader;
$fieldToolTips["Eoc_trader"] = &$fieldToolTipsEoc_trader;
$placeHolders["Eoc_trader"] = &$placeHoldersEoc_trader;
$page_titles["Eoc_trader"] = &$pageTitlesEoc_trader;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Eoc_trader"] = array();
//	kin_satei
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="kin_satei";
		$detailsParam["dOriginalTable"] = "shouhin";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "kin_satei";
	$detailsParam["dCaptionTable"] = GetTableCaption("kin_satei");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

/*			$detailsParam["dispChildCount"] = 0;
	*/
	$detailsParam["dispChildCount"] = "0";

		$detailsParam["hideChild"] = false;
					$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 0;
		$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["Eoc_trader"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Eoc_trader"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Eoc_trader"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["Eoc_trader"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Eoc_trader"][$dIndex]["detailKeys"][]="Eoc_trader_id_for_buy";
//	satei_of_jewelry
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="satei_of_jewelry";
		$detailsParam["dOriginalTable"] = "shouhin";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "satei_of_jewelry";
	$detailsParam["dCaptionTable"] = GetTableCaption("satei_of_jewelry");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

/*			$detailsParam["dispChildCount"] = 0;
	*/
	$detailsParam["dispChildCount"] = "1";

		$detailsParam["hideChild"] = false;
					$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 0;
		$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["Eoc_trader"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Eoc_trader"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Eoc_trader"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["Eoc_trader"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Eoc_trader"][$dIndex]["detailKeys"][]="Eoc_trader_id_for_buy";
//	satei_of_brand
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="satei_of_brand";
		$detailsParam["dOriginalTable"] = "shouhin";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "satei_of_brand1";
	$detailsParam["dCaptionTable"] = GetTableCaption("satei_of_brand");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

/*			$detailsParam["dispChildCount"] = 0;
	*/
	$detailsParam["dispChildCount"] = "1";

		$detailsParam["hideChild"] = false;
					$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 0;
		$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["Eoc_trader"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Eoc_trader"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Eoc_trader"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["Eoc_trader"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Eoc_trader"][$dIndex]["detailKeys"][]="Eoc_trader_id_for_buy";

// tables which are master tables for current table (detail)
$masterTablesData["Eoc_trader"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Eoc_trader()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id AS `link_field`,  id AS `many_satei_btn`,  `id`,  `slip_number`,  `market`,  `date`,  `create_at`,  `create_by`,  `update_at`,  `update_by`";
$proto0["m_strFrom"] = "FROM `Eoc_trader`";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY `id` DESC";
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
	"m_strTable" => "Eoc_trader",
	"m_srcTableName" => "Eoc_trader"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "Eoc_trader";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "link_field";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "Eoc_trader",
	"m_srcTableName" => "Eoc_trader"
));

$proto8["m_sql"] = "id";
$proto8["m_srcTableName"] = "Eoc_trader";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "many_satei_btn";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "Eoc_trader",
	"m_srcTableName" => "Eoc_trader"
));

$proto10["m_sql"] = "`id`";
$proto10["m_srcTableName"] = "Eoc_trader";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "slip_number",
	"m_strTable" => "Eoc_trader",
	"m_srcTableName" => "Eoc_trader"
));

$proto12["m_sql"] = "`slip_number`";
$proto12["m_srcTableName"] = "Eoc_trader";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "market",
	"m_strTable" => "Eoc_trader",
	"m_srcTableName" => "Eoc_trader"
));

$proto14["m_sql"] = "`market`";
$proto14["m_srcTableName"] = "Eoc_trader";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "date",
	"m_strTable" => "Eoc_trader",
	"m_srcTableName" => "Eoc_trader"
));

$proto16["m_sql"] = "`date`";
$proto16["m_srcTableName"] = "Eoc_trader";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "create_at",
	"m_strTable" => "Eoc_trader",
	"m_srcTableName" => "Eoc_trader"
));

$proto18["m_sql"] = "`create_at`";
$proto18["m_srcTableName"] = "Eoc_trader";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "create_by",
	"m_strTable" => "Eoc_trader",
	"m_srcTableName" => "Eoc_trader"
));

$proto20["m_sql"] = "`create_by`";
$proto20["m_srcTableName"] = "Eoc_trader";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "update_at",
	"m_strTable" => "Eoc_trader",
	"m_srcTableName" => "Eoc_trader"
));

$proto22["m_sql"] = "`update_at`";
$proto22["m_srcTableName"] = "Eoc_trader";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "update_by",
	"m_strTable" => "Eoc_trader",
	"m_srcTableName" => "Eoc_trader"
));

$proto24["m_sql"] = "`update_by`";
$proto24["m_srcTableName"] = "Eoc_trader";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "Eoc_trader";
$proto27["m_srcTableName"] = "Eoc_trader";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "id";
$proto27["m_columns"][] = "slip_number";
$proto27["m_columns"][] = "market";
$proto27["m_columns"][] = "date";
$proto27["m_columns"][] = "create_at";
$proto27["m_columns"][] = "create_by";
$proto27["m_columns"][] = "update_at";
$proto27["m_columns"][] = "update_by";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "`Eoc_trader`";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "Eoc_trader";
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
	"m_strTable" => "Eoc_trader",
	"m_srcTableName" => "Eoc_trader"
));

$proto30["m_column"]=$obj;
$proto30["m_bAsc"] = 0;
$proto30["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto30);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Eoc_trader";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Eoc_trader = createSqlQuery_Eoc_trader();


	
		;

										

$tdataEoc_trader[".sqlquery"] = $queryData_Eoc_trader;

include_once(getabspath("include/Eoc_trader_events.php"));
$tableEvents["Eoc_trader"] = new eventclass_Eoc_trader;
$tdataEoc_trader[".hasEvents"] = true;

?>