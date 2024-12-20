<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamst_bullion_dealer = array();
	$tdatamst_bullion_dealer[".truncateText"] = true;
	$tdatamst_bullion_dealer[".NumberOfChars"] = 80;
	$tdatamst_bullion_dealer[".ShortName"] = "mst_bullion_dealer";
	$tdatamst_bullion_dealer[".OwnerID"] = "";
	$tdatamst_bullion_dealer[".OriginalTable"] = "mst_bullion_dealer";

//	field labels
$fieldLabelsmst_bullion_dealer = array();
$fieldToolTipsmst_bullion_dealer = array();
$pageTitlesmst_bullion_dealer = array();
$placeHoldersmst_bullion_dealer = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmst_bullion_dealer["Japanese"] = array();
	$fieldToolTipsmst_bullion_dealer["Japanese"] = array();
	$placeHoldersmst_bullion_dealer["Japanese"] = array();
	$pageTitlesmst_bullion_dealer["Japanese"] = array();
	$fieldLabelsmst_bullion_dealer["Japanese"]["id"] = "Id";
	$fieldToolTipsmst_bullion_dealer["Japanese"]["id"] = "";
	$placeHoldersmst_bullion_dealer["Japanese"]["id"] = "";
	$fieldLabelsmst_bullion_dealer["Japanese"]["name"] = "Name";
	$fieldToolTipsmst_bullion_dealer["Japanese"]["name"] = "";
	$placeHoldersmst_bullion_dealer["Japanese"]["name"] = "";
	$fieldLabelsmst_bullion_dealer["Japanese"]["sort"] = "Sort";
	$fieldToolTipsmst_bullion_dealer["Japanese"]["sort"] = "";
	$placeHoldersmst_bullion_dealer["Japanese"]["sort"] = "";
	$fieldLabelsmst_bullion_dealer["Japanese"]["create_at"] = "作成日";
	$fieldToolTipsmst_bullion_dealer["Japanese"]["create_at"] = "";
	$placeHoldersmst_bullion_dealer["Japanese"]["create_at"] = "";
	$fieldLabelsmst_bullion_dealer["Japanese"]["create_by"] = "作成者";
	$fieldToolTipsmst_bullion_dealer["Japanese"]["create_by"] = "";
	$placeHoldersmst_bullion_dealer["Japanese"]["create_by"] = "";
	$fieldLabelsmst_bullion_dealer["Japanese"]["update_at"] = "更新日";
	$fieldToolTipsmst_bullion_dealer["Japanese"]["update_at"] = "";
	$placeHoldersmst_bullion_dealer["Japanese"]["update_at"] = "";
	$fieldLabelsmst_bullion_dealer["Japanese"]["update_by"] = "更新者";
	$fieldToolTipsmst_bullion_dealer["Japanese"]["update_by"] = "";
	$placeHoldersmst_bullion_dealer["Japanese"]["update_by"] = "";
	$fieldLabelsmst_bullion_dealer["Japanese"]["mst_business_partner_id"] = "取引先ID";
	$fieldToolTipsmst_bullion_dealer["Japanese"]["mst_business_partner_id"] = "";
	$placeHoldersmst_bullion_dealer["Japanese"]["mst_business_partner_id"] = "";
	if (count($fieldToolTipsmst_bullion_dealer["Japanese"]))
		$tdatamst_bullion_dealer[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmst_bullion_dealer[""] = array();
	$fieldToolTipsmst_bullion_dealer[""] = array();
	$placeHoldersmst_bullion_dealer[""] = array();
	$pageTitlesmst_bullion_dealer[""] = array();
	$fieldLabelsmst_bullion_dealer[""]["id"] = "Id";
	$fieldToolTipsmst_bullion_dealer[""]["id"] = "";
	$placeHoldersmst_bullion_dealer[""]["id"] = "";
	$fieldLabelsmst_bullion_dealer[""]["name"] = "Name";
	$fieldToolTipsmst_bullion_dealer[""]["name"] = "";
	$placeHoldersmst_bullion_dealer[""]["name"] = "";
	$fieldLabelsmst_bullion_dealer[""]["sort"] = "Sort";
	$fieldToolTipsmst_bullion_dealer[""]["sort"] = "";
	$placeHoldersmst_bullion_dealer[""]["sort"] = "";
	$fieldLabelsmst_bullion_dealer[""]["create_at"] = "Create At";
	$fieldToolTipsmst_bullion_dealer[""]["create_at"] = "";
	$placeHoldersmst_bullion_dealer[""]["create_at"] = "";
	$fieldLabelsmst_bullion_dealer[""]["create_by"] = "Create By";
	$fieldToolTipsmst_bullion_dealer[""]["create_by"] = "";
	$placeHoldersmst_bullion_dealer[""]["create_by"] = "";
	$fieldLabelsmst_bullion_dealer[""]["update_at"] = "Update At";
	$fieldToolTipsmst_bullion_dealer[""]["update_at"] = "";
	$placeHoldersmst_bullion_dealer[""]["update_at"] = "";
	$fieldLabelsmst_bullion_dealer[""]["update_by"] = "Update By";
	$fieldToolTipsmst_bullion_dealer[""]["update_by"] = "";
	$placeHoldersmst_bullion_dealer[""]["update_by"] = "";
	$fieldLabelsmst_bullion_dealer[""]["mst_business_partner_id"] = "Mst Business Partner Id";
	$fieldToolTipsmst_bullion_dealer[""]["mst_business_partner_id"] = "";
	$placeHoldersmst_bullion_dealer[""]["mst_business_partner_id"] = "";
	if (count($fieldToolTipsmst_bullion_dealer[""]))
		$tdatamst_bullion_dealer[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmst_bullion_dealer["English"] = array();
	$fieldToolTipsmst_bullion_dealer["English"] = array();
	$placeHoldersmst_bullion_dealer["English"] = array();
	$pageTitlesmst_bullion_dealer["English"] = array();
	$fieldLabelsmst_bullion_dealer["English"]["id"] = "Id";
	$fieldToolTipsmst_bullion_dealer["English"]["id"] = "";
	$placeHoldersmst_bullion_dealer["English"]["id"] = "";
	$fieldLabelsmst_bullion_dealer["English"]["name"] = "Name";
	$fieldToolTipsmst_bullion_dealer["English"]["name"] = "";
	$placeHoldersmst_bullion_dealer["English"]["name"] = "";
	$fieldLabelsmst_bullion_dealer["English"]["sort"] = "Sort";
	$fieldToolTipsmst_bullion_dealer["English"]["sort"] = "";
	$placeHoldersmst_bullion_dealer["English"]["sort"] = "";
	$fieldLabelsmst_bullion_dealer["English"]["create_at"] = "Create At";
	$fieldToolTipsmst_bullion_dealer["English"]["create_at"] = "";
	$placeHoldersmst_bullion_dealer["English"]["create_at"] = "";
	$fieldLabelsmst_bullion_dealer["English"]["create_by"] = "Create By";
	$fieldToolTipsmst_bullion_dealer["English"]["create_by"] = "";
	$placeHoldersmst_bullion_dealer["English"]["create_by"] = "";
	$fieldLabelsmst_bullion_dealer["English"]["update_at"] = "Update At";
	$fieldToolTipsmst_bullion_dealer["English"]["update_at"] = "";
	$placeHoldersmst_bullion_dealer["English"]["update_at"] = "";
	$fieldLabelsmst_bullion_dealer["English"]["update_by"] = "Update By";
	$fieldToolTipsmst_bullion_dealer["English"]["update_by"] = "";
	$placeHoldersmst_bullion_dealer["English"]["update_by"] = "";
	$fieldLabelsmst_bullion_dealer["English"]["mst_business_partner_id"] = "Mst Business Partner Id";
	$fieldToolTipsmst_bullion_dealer["English"]["mst_business_partner_id"] = "";
	$placeHoldersmst_bullion_dealer["English"]["mst_business_partner_id"] = "";
	if (count($fieldToolTipsmst_bullion_dealer["English"]))
		$tdatamst_bullion_dealer[".isUseToolTips"] = true;
}


	$tdatamst_bullion_dealer[".NCSearch"] = true;



$tdatamst_bullion_dealer[".shortTableName"] = "mst_bullion_dealer";
$tdatamst_bullion_dealer[".nSecOptions"] = 0;
$tdatamst_bullion_dealer[".recsPerRowPrint"] = 1;
$tdatamst_bullion_dealer[".mainTableOwnerID"] = "";
$tdatamst_bullion_dealer[".moveNext"] = 1;
$tdatamst_bullion_dealer[".entityType"] = 0;

$tdatamst_bullion_dealer[".strOriginalTableName"] = "mst_bullion_dealer";

	



$tdatamst_bullion_dealer[".showAddInPopup"] = false;

$tdatamst_bullion_dealer[".showEditInPopup"] = false;

$tdatamst_bullion_dealer[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamst_bullion_dealer[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamst_bullion_dealer[".fieldsForRegister"] = array();

$tdatamst_bullion_dealer[".listAjax"] = false;

	$tdatamst_bullion_dealer[".audit"] = false;

	$tdatamst_bullion_dealer[".locking"] = false;



$tdatamst_bullion_dealer[".list"] = true;

$tdatamst_bullion_dealer[".inlineEdit"] = true;


$tdatamst_bullion_dealer[".reorderRecordsByHeader"] = true;



$tdatamst_bullion_dealer[".inlineAdd"] = true;

$tdatamst_bullion_dealer[".import"] = true;

$tdatamst_bullion_dealer[".exportTo"] = true;


$tdatamst_bullion_dealer[".delete"] = true;

$tdatamst_bullion_dealer[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamst_bullion_dealer[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamst_bullion_dealer[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamst_bullion_dealer[".searchSaving"] = false;
//

$tdatamst_bullion_dealer[".showSearchPanel"] = true;
		$tdatamst_bullion_dealer[".flexibleSearch"] = true;

$tdatamst_bullion_dealer[".isUseAjaxSuggest"] = true;

$tdatamst_bullion_dealer[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																								

$tdatamst_bullion_dealer[".ajaxCodeSnippetAdded"] = false;

$tdatamst_bullion_dealer[".buttonsAdded"] = false;

$tdatamst_bullion_dealer[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamst_bullion_dealer[".isUseTimeForSearch"] = false;



$tdatamst_bullion_dealer[".badgeColor"] = "edca00";


$tdatamst_bullion_dealer[".allSearchFields"] = array();
$tdatamst_bullion_dealer[".filterFields"] = array();
$tdatamst_bullion_dealer[".requiredSearchFields"] = array();

$tdatamst_bullion_dealer[".allSearchFields"][] = "id";
	$tdatamst_bullion_dealer[".allSearchFields"][] = "name";
	$tdatamst_bullion_dealer[".allSearchFields"][] = "sort";
	$tdatamst_bullion_dealer[".allSearchFields"][] = "create_at";
	$tdatamst_bullion_dealer[".allSearchFields"][] = "create_by";
	$tdatamst_bullion_dealer[".allSearchFields"][] = "update_at";
	$tdatamst_bullion_dealer[".allSearchFields"][] = "update_by";
	$tdatamst_bullion_dealer[".allSearchFields"][] = "mst_business_partner_id";
	

$tdatamst_bullion_dealer[".googleLikeFields"] = array();
$tdatamst_bullion_dealer[".googleLikeFields"][] = "id";
$tdatamst_bullion_dealer[".googleLikeFields"][] = "name";
$tdatamst_bullion_dealer[".googleLikeFields"][] = "sort";
$tdatamst_bullion_dealer[".googleLikeFields"][] = "create_at";
$tdatamst_bullion_dealer[".googleLikeFields"][] = "create_by";
$tdatamst_bullion_dealer[".googleLikeFields"][] = "update_at";
$tdatamst_bullion_dealer[".googleLikeFields"][] = "update_by";
$tdatamst_bullion_dealer[".googleLikeFields"][] = "mst_business_partner_id";


$tdatamst_bullion_dealer[".advSearchFields"] = array();
$tdatamst_bullion_dealer[".advSearchFields"][] = "id";
$tdatamst_bullion_dealer[".advSearchFields"][] = "name";
$tdatamst_bullion_dealer[".advSearchFields"][] = "sort";
$tdatamst_bullion_dealer[".advSearchFields"][] = "create_at";
$tdatamst_bullion_dealer[".advSearchFields"][] = "create_by";
$tdatamst_bullion_dealer[".advSearchFields"][] = "update_at";
$tdatamst_bullion_dealer[".advSearchFields"][] = "update_by";
$tdatamst_bullion_dealer[".advSearchFields"][] = "mst_business_partner_id";

$tdatamst_bullion_dealer[".tableType"] = "list";

$tdatamst_bullion_dealer[".printerPageOrientation"] = 0;
$tdatamst_bullion_dealer[".nPrinterPageScale"] = 100;

$tdatamst_bullion_dealer[".nPrinterSplitRecords"] = 40;

$tdatamst_bullion_dealer[".nPrinterPDFSplitRecords"] = 40;



$tdatamst_bullion_dealer[".geocodingEnabled"] = false;





$tdatamst_bullion_dealer[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamst_bullion_dealer[".pageSize"] = 20;

$tdatamst_bullion_dealer[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamst_bullion_dealer[".strOrderBy"] = $tstrOrderBy;

$tdatamst_bullion_dealer[".orderindexes"] = array();

$tdatamst_bullion_dealer[".sqlHead"] = "SELECT `id`,  	`name`,  	`sort`,  	`create_at`,  	`create_by`,  	`update_at`,  	`update_by`,  	`mst_business_partner_id`";
$tdatamst_bullion_dealer[".sqlFrom"] = "FROM `mst_bullion_dealer`";
$tdatamst_bullion_dealer[".sqlWhereExpr"] = "";
$tdatamst_bullion_dealer[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamst_bullion_dealer[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamst_bullion_dealer[".arrGroupsPerPage"] = $arrGPP;

$tdatamst_bullion_dealer[".highlightSearchResults"] = true;

$tableKeysmst_bullion_dealer = array();
$tableKeysmst_bullion_dealer[] = "id";
$tdatamst_bullion_dealer[".Keys"] = $tableKeysmst_bullion_dealer;

$tdatamst_bullion_dealer[".listFields"] = array();
$tdatamst_bullion_dealer[".listFields"][] = "mst_business_partner_id";
$tdatamst_bullion_dealer[".listFields"][] = "id";
$tdatamst_bullion_dealer[".listFields"][] = "name";
$tdatamst_bullion_dealer[".listFields"][] = "sort";
$tdatamst_bullion_dealer[".listFields"][] = "create_at";
$tdatamst_bullion_dealer[".listFields"][] = "create_by";
$tdatamst_bullion_dealer[".listFields"][] = "update_at";
$tdatamst_bullion_dealer[".listFields"][] = "update_by";

$tdatamst_bullion_dealer[".hideMobileList"] = array();


$tdatamst_bullion_dealer[".viewFields"] = array();

$tdatamst_bullion_dealer[".addFields"] = array();

$tdatamst_bullion_dealer[".masterListFields"] = array();
$tdatamst_bullion_dealer[".masterListFields"][] = "id";
$tdatamst_bullion_dealer[".masterListFields"][] = "name";
$tdatamst_bullion_dealer[".masterListFields"][] = "sort";
$tdatamst_bullion_dealer[".masterListFields"][] = "create_at";
$tdatamst_bullion_dealer[".masterListFields"][] = "create_by";
$tdatamst_bullion_dealer[".masterListFields"][] = "update_at";
$tdatamst_bullion_dealer[".masterListFields"][] = "update_by";
$tdatamst_bullion_dealer[".masterListFields"][] = "mst_business_partner_id";

$tdatamst_bullion_dealer[".inlineAddFields"] = array();
$tdatamst_bullion_dealer[".inlineAddFields"][] = "mst_business_partner_id";
$tdatamst_bullion_dealer[".inlineAddFields"][] = "name";
$tdatamst_bullion_dealer[".inlineAddFields"][] = "sort";

$tdatamst_bullion_dealer[".editFields"] = array();

$tdatamst_bullion_dealer[".inlineEditFields"] = array();
$tdatamst_bullion_dealer[".inlineEditFields"][] = "mst_business_partner_id";
$tdatamst_bullion_dealer[".inlineEditFields"][] = "name";
$tdatamst_bullion_dealer[".inlineEditFields"][] = "sort";

$tdatamst_bullion_dealer[".updateSelectedFields"] = array();


$tdatamst_bullion_dealer[".exportFields"] = array();
$tdatamst_bullion_dealer[".exportFields"][] = "id";
$tdatamst_bullion_dealer[".exportFields"][] = "name";
$tdatamst_bullion_dealer[".exportFields"][] = "sort";
$tdatamst_bullion_dealer[".exportFields"][] = "create_at";
$tdatamst_bullion_dealer[".exportFields"][] = "create_by";
$tdatamst_bullion_dealer[".exportFields"][] = "update_at";
$tdatamst_bullion_dealer[".exportFields"][] = "update_by";
$tdatamst_bullion_dealer[".exportFields"][] = "mst_business_partner_id";

$tdatamst_bullion_dealer[".importFields"] = array();
$tdatamst_bullion_dealer[".importFields"][] = "id";
$tdatamst_bullion_dealer[".importFields"][] = "name";
$tdatamst_bullion_dealer[".importFields"][] = "sort";
$tdatamst_bullion_dealer[".importFields"][] = "mst_business_partner_id";

$tdatamst_bullion_dealer[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "mst_bullion_dealer";
	$fdata["Label"] = GetFieldLabel("mst_bullion_dealer","id");
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




	$tdatamst_bullion_dealer["id"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "mst_bullion_dealer";
	$fdata["Label"] = GetFieldLabel("mst_bullion_dealer","name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`name`";

	
	
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




	$tdatamst_bullion_dealer["name"] = $fdata;
//	sort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sort";
	$fdata["GoodName"] = "sort";
	$fdata["ownerTable"] = "mst_bullion_dealer";
	$fdata["Label"] = GetFieldLabel("mst_bullion_dealer","sort");
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




	$tdatamst_bullion_dealer["sort"] = $fdata;
//	create_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "create_at";
	$fdata["GoodName"] = "create_at";
	$fdata["ownerTable"] = "mst_bullion_dealer";
	$fdata["Label"] = GetFieldLabel("mst_bullion_dealer","create_at");
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




	$tdatamst_bullion_dealer["create_at"] = $fdata;
//	create_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "create_by";
	$fdata["GoodName"] = "create_by";
	$fdata["ownerTable"] = "mst_bullion_dealer";
	$fdata["Label"] = GetFieldLabel("mst_bullion_dealer","create_by");
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




	$tdatamst_bullion_dealer["create_by"] = $fdata;
//	update_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "update_at";
	$fdata["GoodName"] = "update_at";
	$fdata["ownerTable"] = "mst_bullion_dealer";
	$fdata["Label"] = GetFieldLabel("mst_bullion_dealer","update_at");
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




	$tdatamst_bullion_dealer["update_at"] = $fdata;
//	update_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "update_by";
	$fdata["GoodName"] = "update_by";
	$fdata["ownerTable"] = "mst_bullion_dealer";
	$fdata["Label"] = GetFieldLabel("mst_bullion_dealer","update_by");
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




	$tdatamst_bullion_dealer["update_by"] = $fdata;
//	mst_business_partner_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "mst_business_partner_id";
	$fdata["GoodName"] = "mst_business_partner_id";
	$fdata["ownerTable"] = "mst_bullion_dealer";
	$fdata["Label"] = GetFieldLabel("mst_bullion_dealer","mst_business_partner_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "mst_business_partner_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mst_business_partner_id`";

	
	
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




	$tdatamst_bullion_dealer["mst_business_partner_id"] = $fdata;


$tables_data["mst_bullion_dealer"]=&$tdatamst_bullion_dealer;
$field_labels["mst_bullion_dealer"] = &$fieldLabelsmst_bullion_dealer;
$fieldToolTips["mst_bullion_dealer"] = &$fieldToolTipsmst_bullion_dealer;
$placeHolders["mst_bullion_dealer"] = &$placeHoldersmst_bullion_dealer;
$page_titles["mst_bullion_dealer"] = &$pageTitlesmst_bullion_dealer;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mst_bullion_dealer"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mst_bullion_dealer"] = array();


	
				$strOriginalDetailsTable="mst_business_partner";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="mst_business_partner";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "mst_business_partner";
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
					$masterTablesData["mst_bullion_dealer"][0] = $masterParams;
				$masterTablesData["mst_bullion_dealer"][0]["masterKeys"] = array();
	$masterTablesData["mst_bullion_dealer"][0]["masterKeys"][]="id";
				$masterTablesData["mst_bullion_dealer"][0]["detailKeys"] = array();
	$masterTablesData["mst_bullion_dealer"][0]["detailKeys"][]="mst_business_partner_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mst_bullion_dealer()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  	`name`,  	`sort`,  	`create_at`,  	`create_by`,  	`update_at`,  	`update_by`,  	`mst_business_partner_id`";
$proto0["m_strFrom"] = "FROM `mst_bullion_dealer`";
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
	"m_strTable" => "mst_bullion_dealer",
	"m_srcTableName" => "mst_bullion_dealer"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "mst_bullion_dealer";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "mst_bullion_dealer",
	"m_srcTableName" => "mst_bullion_dealer"
));

$proto8["m_sql"] = "`name`";
$proto8["m_srcTableName"] = "mst_bullion_dealer";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "sort",
	"m_strTable" => "mst_bullion_dealer",
	"m_srcTableName" => "mst_bullion_dealer"
));

$proto10["m_sql"] = "`sort`";
$proto10["m_srcTableName"] = "mst_bullion_dealer";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "create_at",
	"m_strTable" => "mst_bullion_dealer",
	"m_srcTableName" => "mst_bullion_dealer"
));

$proto12["m_sql"] = "`create_at`";
$proto12["m_srcTableName"] = "mst_bullion_dealer";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "create_by",
	"m_strTable" => "mst_bullion_dealer",
	"m_srcTableName" => "mst_bullion_dealer"
));

$proto14["m_sql"] = "`create_by`";
$proto14["m_srcTableName"] = "mst_bullion_dealer";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "update_at",
	"m_strTable" => "mst_bullion_dealer",
	"m_srcTableName" => "mst_bullion_dealer"
));

$proto16["m_sql"] = "`update_at`";
$proto16["m_srcTableName"] = "mst_bullion_dealer";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "update_by",
	"m_strTable" => "mst_bullion_dealer",
	"m_srcTableName" => "mst_bullion_dealer"
));

$proto18["m_sql"] = "`update_by`";
$proto18["m_srcTableName"] = "mst_bullion_dealer";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "mst_business_partner_id",
	"m_strTable" => "mst_bullion_dealer",
	"m_srcTableName" => "mst_bullion_dealer"
));

$proto20["m_sql"] = "`mst_business_partner_id`";
$proto20["m_srcTableName"] = "mst_bullion_dealer";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "mst_bullion_dealer";
$proto23["m_srcTableName"] = "mst_bullion_dealer";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "id";
$proto23["m_columns"][] = "name";
$proto23["m_columns"][] = "sort";
$proto23["m_columns"][] = "create_at";
$proto23["m_columns"][] = "create_by";
$proto23["m_columns"][] = "update_at";
$proto23["m_columns"][] = "update_by";
$proto23["m_columns"][] = "mst_business_partner_id";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "`mst_bullion_dealer`";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "mst_bullion_dealer";
$proto24=array();
$proto24["m_sql"] = "";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

$proto22["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto22);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="mst_bullion_dealer";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mst_bullion_dealer = createSqlQuery_mst_bullion_dealer();


	
		;

								

$tdatamst_bullion_dealer[".sqlquery"] = $queryData_mst_bullion_dealer;

$tableEvents["mst_bullion_dealer"] = new eventsBase;
$tdatamst_bullion_dealer[".hasEvents"] = false;

?>