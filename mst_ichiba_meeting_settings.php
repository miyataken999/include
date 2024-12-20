<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamst_ichiba_meeting = array();
	$tdatamst_ichiba_meeting[".truncateText"] = true;
	$tdatamst_ichiba_meeting[".NumberOfChars"] = 80;
	$tdatamst_ichiba_meeting[".ShortName"] = "mst_ichiba_meeting";
	$tdatamst_ichiba_meeting[".OwnerID"] = "";
	$tdatamst_ichiba_meeting[".OriginalTable"] = "mst_ichiba_meeting";

//	field labels
$fieldLabelsmst_ichiba_meeting = array();
$fieldToolTipsmst_ichiba_meeting = array();
$pageTitlesmst_ichiba_meeting = array();
$placeHoldersmst_ichiba_meeting = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmst_ichiba_meeting["Japanese"] = array();
	$fieldToolTipsmst_ichiba_meeting["Japanese"] = array();
	$placeHoldersmst_ichiba_meeting["Japanese"] = array();
	$pageTitlesmst_ichiba_meeting["Japanese"] = array();
	$fieldLabelsmst_ichiba_meeting["Japanese"]["id"] = "Id";
	$fieldToolTipsmst_ichiba_meeting["Japanese"]["id"] = "";
	$placeHoldersmst_ichiba_meeting["Japanese"]["id"] = "";
	$fieldLabelsmst_ichiba_meeting["Japanese"]["name"] = "名称";
	$fieldToolTipsmst_ichiba_meeting["Japanese"]["name"] = "";
	$placeHoldersmst_ichiba_meeting["Japanese"]["name"] = "";
	$fieldLabelsmst_ichiba_meeting["Japanese"]["company"] = "会社名";
	$fieldToolTipsmst_ichiba_meeting["Japanese"]["company"] = "";
	$placeHoldersmst_ichiba_meeting["Japanese"]["company"] = "";
	$fieldLabelsmst_ichiba_meeting["Japanese"]["representative"] = "代表者名";
	$fieldToolTipsmst_ichiba_meeting["Japanese"]["representative"] = "";
	$placeHoldersmst_ichiba_meeting["Japanese"]["representative"] = "";
	$fieldLabelsmst_ichiba_meeting["Japanese"]["meeting_name"] = "セレクト名";
	$fieldToolTipsmst_ichiba_meeting["Japanese"]["meeting_name"] = "";
	$placeHoldersmst_ichiba_meeting["Japanese"]["meeting_name"] = "";
	$fieldLabelsmst_ichiba_meeting["Japanese"]["default_date"] = "デフォルト日付";
	$fieldToolTipsmst_ichiba_meeting["Japanese"]["default_date"] = "";
	$placeHoldersmst_ichiba_meeting["Japanese"]["default_date"] = "";
	$fieldLabelsmst_ichiba_meeting["Japanese"]["original_id"] = "GSS原本Id";
	$fieldToolTipsmst_ichiba_meeting["Japanese"]["original_id"] = "";
	$placeHoldersmst_ichiba_meeting["Japanese"]["original_id"] = "";
	$fieldLabelsmst_ichiba_meeting["Japanese"]["product_list_sheet_id"] = "出品表シート原本Id";
	$fieldToolTipsmst_ichiba_meeting["Japanese"]["product_list_sheet_id"] = "";
	$placeHoldersmst_ichiba_meeting["Japanese"]["product_list_sheet_id"] = "";
	$fieldLabelsmst_ichiba_meeting["Japanese"]["mst_business_partner_id"] = "取引先ID";
	$fieldToolTipsmst_ichiba_meeting["Japanese"]["mst_business_partner_id"] = "";
	$placeHoldersmst_ichiba_meeting["Japanese"]["mst_business_partner_id"] = "";
	if (count($fieldToolTipsmst_ichiba_meeting["Japanese"]))
		$tdatamst_ichiba_meeting[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmst_ichiba_meeting[""] = array();
	$fieldToolTipsmst_ichiba_meeting[""] = array();
	$placeHoldersmst_ichiba_meeting[""] = array();
	$pageTitlesmst_ichiba_meeting[""] = array();
	$fieldLabelsmst_ichiba_meeting[""]["id"] = "Id";
	$fieldToolTipsmst_ichiba_meeting[""]["id"] = "";
	$placeHoldersmst_ichiba_meeting[""]["id"] = "";
	$fieldLabelsmst_ichiba_meeting[""]["name"] = "Name";
	$fieldToolTipsmst_ichiba_meeting[""]["name"] = "";
	$placeHoldersmst_ichiba_meeting[""]["name"] = "";
	$fieldLabelsmst_ichiba_meeting[""]["company"] = "Company";
	$fieldToolTipsmst_ichiba_meeting[""]["company"] = "";
	$placeHoldersmst_ichiba_meeting[""]["company"] = "";
	$fieldLabelsmst_ichiba_meeting[""]["representative"] = "Representative";
	$fieldToolTipsmst_ichiba_meeting[""]["representative"] = "";
	$placeHoldersmst_ichiba_meeting[""]["representative"] = "";
	$fieldLabelsmst_ichiba_meeting[""]["meeting_name"] = "Meeting Name";
	$fieldToolTipsmst_ichiba_meeting[""]["meeting_name"] = "";
	$placeHoldersmst_ichiba_meeting[""]["meeting_name"] = "";
	$fieldLabelsmst_ichiba_meeting[""]["default_date"] = "Default Date";
	$fieldToolTipsmst_ichiba_meeting[""]["default_date"] = "";
	$placeHoldersmst_ichiba_meeting[""]["default_date"] = "";
	$fieldLabelsmst_ichiba_meeting[""]["original_id"] = "Original Id";
	$fieldToolTipsmst_ichiba_meeting[""]["original_id"] = "";
	$placeHoldersmst_ichiba_meeting[""]["original_id"] = "";
	$fieldLabelsmst_ichiba_meeting[""]["product_list_sheet_id"] = "Product List Sheet Id";
	$fieldToolTipsmst_ichiba_meeting[""]["product_list_sheet_id"] = "";
	$placeHoldersmst_ichiba_meeting[""]["product_list_sheet_id"] = "";
	$fieldLabelsmst_ichiba_meeting[""]["mst_business_partner_id"] = "Mst Business Partner Id";
	$fieldToolTipsmst_ichiba_meeting[""]["mst_business_partner_id"] = "";
	$placeHoldersmst_ichiba_meeting[""]["mst_business_partner_id"] = "";
	if (count($fieldToolTipsmst_ichiba_meeting[""]))
		$tdatamst_ichiba_meeting[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmst_ichiba_meeting["English"] = array();
	$fieldToolTipsmst_ichiba_meeting["English"] = array();
	$placeHoldersmst_ichiba_meeting["English"] = array();
	$pageTitlesmst_ichiba_meeting["English"] = array();
	$fieldLabelsmst_ichiba_meeting["English"]["id"] = "Id";
	$fieldToolTipsmst_ichiba_meeting["English"]["id"] = "";
	$placeHoldersmst_ichiba_meeting["English"]["id"] = "";
	$fieldLabelsmst_ichiba_meeting["English"]["name"] = "Name";
	$fieldToolTipsmst_ichiba_meeting["English"]["name"] = "";
	$placeHoldersmst_ichiba_meeting["English"]["name"] = "";
	$fieldLabelsmst_ichiba_meeting["English"]["company"] = "Company";
	$fieldToolTipsmst_ichiba_meeting["English"]["company"] = "";
	$placeHoldersmst_ichiba_meeting["English"]["company"] = "";
	$fieldLabelsmst_ichiba_meeting["English"]["representative"] = "Representative";
	$fieldToolTipsmst_ichiba_meeting["English"]["representative"] = "";
	$placeHoldersmst_ichiba_meeting["English"]["representative"] = "";
	$fieldLabelsmst_ichiba_meeting["English"]["meeting_name"] = "Meeting Name";
	$fieldToolTipsmst_ichiba_meeting["English"]["meeting_name"] = "";
	$placeHoldersmst_ichiba_meeting["English"]["meeting_name"] = "";
	$fieldLabelsmst_ichiba_meeting["English"]["default_date"] = "Default Date";
	$fieldToolTipsmst_ichiba_meeting["English"]["default_date"] = "";
	$placeHoldersmst_ichiba_meeting["English"]["default_date"] = "";
	$fieldLabelsmst_ichiba_meeting["English"]["original_id"] = "Original Id";
	$fieldToolTipsmst_ichiba_meeting["English"]["original_id"] = "";
	$placeHoldersmst_ichiba_meeting["English"]["original_id"] = "";
	$fieldLabelsmst_ichiba_meeting["English"]["product_list_sheet_id"] = "Product List Sheet Id";
	$fieldToolTipsmst_ichiba_meeting["English"]["product_list_sheet_id"] = "";
	$placeHoldersmst_ichiba_meeting["English"]["product_list_sheet_id"] = "";
	$fieldLabelsmst_ichiba_meeting["English"]["mst_business_partner_id"] = "Mst Business Partner Id";
	$fieldToolTipsmst_ichiba_meeting["English"]["mst_business_partner_id"] = "";
	$placeHoldersmst_ichiba_meeting["English"]["mst_business_partner_id"] = "";
	if (count($fieldToolTipsmst_ichiba_meeting["English"]))
		$tdatamst_ichiba_meeting[".isUseToolTips"] = true;
}


	$tdatamst_ichiba_meeting[".NCSearch"] = true;



$tdatamst_ichiba_meeting[".shortTableName"] = "mst_ichiba_meeting";
$tdatamst_ichiba_meeting[".nSecOptions"] = 0;
$tdatamst_ichiba_meeting[".recsPerRowPrint"] = 1;
$tdatamst_ichiba_meeting[".mainTableOwnerID"] = "";
$tdatamst_ichiba_meeting[".moveNext"] = 1;
$tdatamst_ichiba_meeting[".entityType"] = 0;

$tdatamst_ichiba_meeting[".strOriginalTableName"] = "mst_ichiba_meeting";

	



$tdatamst_ichiba_meeting[".showAddInPopup"] = false;

$tdatamst_ichiba_meeting[".showEditInPopup"] = false;

$tdatamst_ichiba_meeting[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamst_ichiba_meeting[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamst_ichiba_meeting[".fieldsForRegister"] = array();

$tdatamst_ichiba_meeting[".listAjax"] = false;

	$tdatamst_ichiba_meeting[".audit"] = true;

	$tdatamst_ichiba_meeting[".locking"] = false;



$tdatamst_ichiba_meeting[".list"] = true;

$tdatamst_ichiba_meeting[".inlineEdit"] = true;


$tdatamst_ichiba_meeting[".reorderRecordsByHeader"] = true;



$tdatamst_ichiba_meeting[".inlineAdd"] = true;

$tdatamst_ichiba_meeting[".import"] = true;

$tdatamst_ichiba_meeting[".exportTo"] = true;


$tdatamst_ichiba_meeting[".delete"] = true;

$tdatamst_ichiba_meeting[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamst_ichiba_meeting[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamst_ichiba_meeting[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamst_ichiba_meeting[".searchSaving"] = false;
//

$tdatamst_ichiba_meeting[".showSearchPanel"] = true;
		$tdatamst_ichiba_meeting[".flexibleSearch"] = true;

$tdatamst_ichiba_meeting[".isUseAjaxSuggest"] = true;

$tdatamst_ichiba_meeting[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																								

$tdatamst_ichiba_meeting[".ajaxCodeSnippetAdded"] = false;

$tdatamst_ichiba_meeting[".buttonsAdded"] = false;

$tdatamst_ichiba_meeting[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamst_ichiba_meeting[".isUseTimeForSearch"] = false;



$tdatamst_ichiba_meeting[".badgeColor"] = "edca00";


$tdatamst_ichiba_meeting[".allSearchFields"] = array();
$tdatamst_ichiba_meeting[".filterFields"] = array();
$tdatamst_ichiba_meeting[".requiredSearchFields"] = array();

$tdatamst_ichiba_meeting[".allSearchFields"][] = "mst_business_partner_id";
	$tdatamst_ichiba_meeting[".allSearchFields"][] = "id";
	$tdatamst_ichiba_meeting[".allSearchFields"][] = "name";
	$tdatamst_ichiba_meeting[".allSearchFields"][] = "company";
	$tdatamst_ichiba_meeting[".allSearchFields"][] = "representative";
	$tdatamst_ichiba_meeting[".allSearchFields"][] = "meeting_name";
	$tdatamst_ichiba_meeting[".allSearchFields"][] = "default_date";
	$tdatamst_ichiba_meeting[".allSearchFields"][] = "original_id";
	$tdatamst_ichiba_meeting[".allSearchFields"][] = "product_list_sheet_id";
	

$tdatamst_ichiba_meeting[".googleLikeFields"] = array();
$tdatamst_ichiba_meeting[".googleLikeFields"][] = "id";
$tdatamst_ichiba_meeting[".googleLikeFields"][] = "name";
$tdatamst_ichiba_meeting[".googleLikeFields"][] = "company";
$tdatamst_ichiba_meeting[".googleLikeFields"][] = "representative";
$tdatamst_ichiba_meeting[".googleLikeFields"][] = "meeting_name";
$tdatamst_ichiba_meeting[".googleLikeFields"][] = "default_date";
$tdatamst_ichiba_meeting[".googleLikeFields"][] = "original_id";
$tdatamst_ichiba_meeting[".googleLikeFields"][] = "product_list_sheet_id";
$tdatamst_ichiba_meeting[".googleLikeFields"][] = "mst_business_partner_id";


$tdatamst_ichiba_meeting[".advSearchFields"] = array();
$tdatamst_ichiba_meeting[".advSearchFields"][] = "mst_business_partner_id";
$tdatamst_ichiba_meeting[".advSearchFields"][] = "id";
$tdatamst_ichiba_meeting[".advSearchFields"][] = "name";
$tdatamst_ichiba_meeting[".advSearchFields"][] = "company";
$tdatamst_ichiba_meeting[".advSearchFields"][] = "representative";
$tdatamst_ichiba_meeting[".advSearchFields"][] = "meeting_name";
$tdatamst_ichiba_meeting[".advSearchFields"][] = "default_date";
$tdatamst_ichiba_meeting[".advSearchFields"][] = "original_id";
$tdatamst_ichiba_meeting[".advSearchFields"][] = "product_list_sheet_id";

$tdatamst_ichiba_meeting[".tableType"] = "list";

$tdatamst_ichiba_meeting[".printerPageOrientation"] = 0;
$tdatamst_ichiba_meeting[".nPrinterPageScale"] = 100;

$tdatamst_ichiba_meeting[".nPrinterSplitRecords"] = 40;

$tdatamst_ichiba_meeting[".nPrinterPDFSplitRecords"] = 40;



$tdatamst_ichiba_meeting[".geocodingEnabled"] = false;





$tdatamst_ichiba_meeting[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamst_ichiba_meeting[".pageSize"] = 20;

$tdatamst_ichiba_meeting[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `id` DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamst_ichiba_meeting[".strOrderBy"] = $tstrOrderBy;

$tdatamst_ichiba_meeting[".orderindexes"] = array();
$tdatamst_ichiba_meeting[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "`id`");

$tdatamst_ichiba_meeting[".sqlHead"] = "SELECT `id`,  `name`,  `company`,  `representative`,  `meeting_name`,  `default_date`,  `original_id`,  `product_list_sheet_id`,  `mst_business_partner_id`";
$tdatamst_ichiba_meeting[".sqlFrom"] = "FROM `mst_ichiba_meeting`";
$tdatamst_ichiba_meeting[".sqlWhereExpr"] = "";
$tdatamst_ichiba_meeting[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamst_ichiba_meeting[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamst_ichiba_meeting[".arrGroupsPerPage"] = $arrGPP;

$tdatamst_ichiba_meeting[".highlightSearchResults"] = true;

$tableKeysmst_ichiba_meeting = array();
$tableKeysmst_ichiba_meeting[] = "id";
$tdatamst_ichiba_meeting[".Keys"] = $tableKeysmst_ichiba_meeting;

$tdatamst_ichiba_meeting[".listFields"] = array();
$tdatamst_ichiba_meeting[".listFields"][] = "mst_business_partner_id";
$tdatamst_ichiba_meeting[".listFields"][] = "id";
$tdatamst_ichiba_meeting[".listFields"][] = "name";
$tdatamst_ichiba_meeting[".listFields"][] = "company";
$tdatamst_ichiba_meeting[".listFields"][] = "representative";
$tdatamst_ichiba_meeting[".listFields"][] = "meeting_name";
$tdatamst_ichiba_meeting[".listFields"][] = "default_date";
$tdatamst_ichiba_meeting[".listFields"][] = "original_id";
$tdatamst_ichiba_meeting[".listFields"][] = "product_list_sheet_id";

$tdatamst_ichiba_meeting[".hideMobileList"] = array();


$tdatamst_ichiba_meeting[".viewFields"] = array();

$tdatamst_ichiba_meeting[".addFields"] = array();

$tdatamst_ichiba_meeting[".masterListFields"] = array();
$tdatamst_ichiba_meeting[".masterListFields"][] = "mst_business_partner_id";
$tdatamst_ichiba_meeting[".masterListFields"][] = "id";
$tdatamst_ichiba_meeting[".masterListFields"][] = "name";
$tdatamst_ichiba_meeting[".masterListFields"][] = "company";
$tdatamst_ichiba_meeting[".masterListFields"][] = "representative";
$tdatamst_ichiba_meeting[".masterListFields"][] = "meeting_name";
$tdatamst_ichiba_meeting[".masterListFields"][] = "default_date";
$tdatamst_ichiba_meeting[".masterListFields"][] = "original_id";
$tdatamst_ichiba_meeting[".masterListFields"][] = "product_list_sheet_id";

$tdatamst_ichiba_meeting[".inlineAddFields"] = array();
$tdatamst_ichiba_meeting[".inlineAddFields"][] = "mst_business_partner_id";
$tdatamst_ichiba_meeting[".inlineAddFields"][] = "name";
$tdatamst_ichiba_meeting[".inlineAddFields"][] = "company";
$tdatamst_ichiba_meeting[".inlineAddFields"][] = "representative";
$tdatamst_ichiba_meeting[".inlineAddFields"][] = "meeting_name";
$tdatamst_ichiba_meeting[".inlineAddFields"][] = "default_date";
$tdatamst_ichiba_meeting[".inlineAddFields"][] = "original_id";
$tdatamst_ichiba_meeting[".inlineAddFields"][] = "product_list_sheet_id";

$tdatamst_ichiba_meeting[".editFields"] = array();

$tdatamst_ichiba_meeting[".inlineEditFields"] = array();
$tdatamst_ichiba_meeting[".inlineEditFields"][] = "mst_business_partner_id";
$tdatamst_ichiba_meeting[".inlineEditFields"][] = "name";
$tdatamst_ichiba_meeting[".inlineEditFields"][] = "company";
$tdatamst_ichiba_meeting[".inlineEditFields"][] = "representative";
$tdatamst_ichiba_meeting[".inlineEditFields"][] = "meeting_name";
$tdatamst_ichiba_meeting[".inlineEditFields"][] = "default_date";
$tdatamst_ichiba_meeting[".inlineEditFields"][] = "original_id";
$tdatamst_ichiba_meeting[".inlineEditFields"][] = "product_list_sheet_id";

$tdatamst_ichiba_meeting[".updateSelectedFields"] = array();


$tdatamst_ichiba_meeting[".exportFields"] = array();
$tdatamst_ichiba_meeting[".exportFields"][] = "mst_business_partner_id";
$tdatamst_ichiba_meeting[".exportFields"][] = "id";
$tdatamst_ichiba_meeting[".exportFields"][] = "name";
$tdatamst_ichiba_meeting[".exportFields"][] = "company";
$tdatamst_ichiba_meeting[".exportFields"][] = "representative";
$tdatamst_ichiba_meeting[".exportFields"][] = "meeting_name";
$tdatamst_ichiba_meeting[".exportFields"][] = "default_date";
$tdatamst_ichiba_meeting[".exportFields"][] = "original_id";
$tdatamst_ichiba_meeting[".exportFields"][] = "product_list_sheet_id";

$tdatamst_ichiba_meeting[".importFields"] = array();
$tdatamst_ichiba_meeting[".importFields"][] = "id";
$tdatamst_ichiba_meeting[".importFields"][] = "name";
$tdatamst_ichiba_meeting[".importFields"][] = "company";
$tdatamst_ichiba_meeting[".importFields"][] = "representative";
$tdatamst_ichiba_meeting[".importFields"][] = "meeting_name";
$tdatamst_ichiba_meeting[".importFields"][] = "default_date";
$tdatamst_ichiba_meeting[".importFields"][] = "original_id";
$tdatamst_ichiba_meeting[".importFields"][] = "product_list_sheet_id";
$tdatamst_ichiba_meeting[".importFields"][] = "mst_business_partner_id";

$tdatamst_ichiba_meeting[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "mst_ichiba_meeting";
	$fdata["Label"] = GetFieldLabel("mst_ichiba_meeting","id");
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




	$tdatamst_ichiba_meeting["id"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "mst_ichiba_meeting";
	$fdata["Label"] = GetFieldLabel("mst_ichiba_meeting","name");
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




	$tdatamst_ichiba_meeting["name"] = $fdata;
//	company
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "company";
	$fdata["GoodName"] = "company";
	$fdata["ownerTable"] = "mst_ichiba_meeting";
	$fdata["Label"] = GetFieldLabel("mst_ichiba_meeting","company");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "company";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`company`";

	
	
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




	$tdatamst_ichiba_meeting["company"] = $fdata;
//	representative
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "representative";
	$fdata["GoodName"] = "representative";
	$fdata["ownerTable"] = "mst_ichiba_meeting";
	$fdata["Label"] = GetFieldLabel("mst_ichiba_meeting","representative");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "representative";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`representative`";

	
	
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




	$tdatamst_ichiba_meeting["representative"] = $fdata;
//	meeting_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "meeting_name";
	$fdata["GoodName"] = "meeting_name";
	$fdata["ownerTable"] = "mst_ichiba_meeting";
	$fdata["Label"] = GetFieldLabel("mst_ichiba_meeting","meeting_name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "meeting_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`meeting_name`";

	
	
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




	$tdatamst_ichiba_meeting["meeting_name"] = $fdata;
//	default_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "default_date";
	$fdata["GoodName"] = "default_date";
	$fdata["ownerTable"] = "mst_ichiba_meeting";
	$fdata["Label"] = GetFieldLabel("mst_ichiba_meeting","default_date");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "default_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`default_date`";

	
	
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




	$tdatamst_ichiba_meeting["default_date"] = $fdata;
//	original_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "original_id";
	$fdata["GoodName"] = "original_id";
	$fdata["ownerTable"] = "mst_ichiba_meeting";
	$fdata["Label"] = GetFieldLabel("mst_ichiba_meeting","original_id");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "original_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`original_id`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
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




	$tdatamst_ichiba_meeting["original_id"] = $fdata;
//	product_list_sheet_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "product_list_sheet_id";
	$fdata["GoodName"] = "product_list_sheet_id";
	$fdata["ownerTable"] = "mst_ichiba_meeting";
	$fdata["Label"] = GetFieldLabel("mst_ichiba_meeting","product_list_sheet_id");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "product_list_sheet_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`product_list_sheet_id`";

	
	
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




	$tdatamst_ichiba_meeting["product_list_sheet_id"] = $fdata;
//	mst_business_partner_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "mst_business_partner_id";
	$fdata["GoodName"] = "mst_business_partner_id";
	$fdata["ownerTable"] = "mst_ichiba_meeting";
	$fdata["Label"] = GetFieldLabel("mst_ichiba_meeting","mst_business_partner_id");
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




	$tdatamst_ichiba_meeting["mst_business_partner_id"] = $fdata;


$tables_data["mst_ichiba_meeting"]=&$tdatamst_ichiba_meeting;
$field_labels["mst_ichiba_meeting"] = &$fieldLabelsmst_ichiba_meeting;
$fieldToolTips["mst_ichiba_meeting"] = &$fieldToolTipsmst_ichiba_meeting;
$placeHolders["mst_ichiba_meeting"] = &$placeHoldersmst_ichiba_meeting;
$page_titles["mst_ichiba_meeting"] = &$pageTitlesmst_ichiba_meeting;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mst_ichiba_meeting"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mst_ichiba_meeting"] = array();


	
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
					$masterTablesData["mst_ichiba_meeting"][0] = $masterParams;
				$masterTablesData["mst_ichiba_meeting"][0]["masterKeys"] = array();
	$masterTablesData["mst_ichiba_meeting"][0]["masterKeys"][]="id";
				$masterTablesData["mst_ichiba_meeting"][0]["detailKeys"] = array();
	$masterTablesData["mst_ichiba_meeting"][0]["detailKeys"][]="mst_business_partner_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mst_ichiba_meeting()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  `name`,  `company`,  `representative`,  `meeting_name`,  `default_date`,  `original_id`,  `product_list_sheet_id`,  `mst_business_partner_id`";
$proto0["m_strFrom"] = "FROM `mst_ichiba_meeting`";
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
	"m_strTable" => "mst_ichiba_meeting",
	"m_srcTableName" => "mst_ichiba_meeting"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "mst_ichiba_meeting";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "mst_ichiba_meeting",
	"m_srcTableName" => "mst_ichiba_meeting"
));

$proto8["m_sql"] = "`name`";
$proto8["m_srcTableName"] = "mst_ichiba_meeting";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "company",
	"m_strTable" => "mst_ichiba_meeting",
	"m_srcTableName" => "mst_ichiba_meeting"
));

$proto10["m_sql"] = "`company`";
$proto10["m_srcTableName"] = "mst_ichiba_meeting";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "representative",
	"m_strTable" => "mst_ichiba_meeting",
	"m_srcTableName" => "mst_ichiba_meeting"
));

$proto12["m_sql"] = "`representative`";
$proto12["m_srcTableName"] = "mst_ichiba_meeting";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "meeting_name",
	"m_strTable" => "mst_ichiba_meeting",
	"m_srcTableName" => "mst_ichiba_meeting"
));

$proto14["m_sql"] = "`meeting_name`";
$proto14["m_srcTableName"] = "mst_ichiba_meeting";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "default_date",
	"m_strTable" => "mst_ichiba_meeting",
	"m_srcTableName" => "mst_ichiba_meeting"
));

$proto16["m_sql"] = "`default_date`";
$proto16["m_srcTableName"] = "mst_ichiba_meeting";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "original_id",
	"m_strTable" => "mst_ichiba_meeting",
	"m_srcTableName" => "mst_ichiba_meeting"
));

$proto18["m_sql"] = "`original_id`";
$proto18["m_srcTableName"] = "mst_ichiba_meeting";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "product_list_sheet_id",
	"m_strTable" => "mst_ichiba_meeting",
	"m_srcTableName" => "mst_ichiba_meeting"
));

$proto20["m_sql"] = "`product_list_sheet_id`";
$proto20["m_srcTableName"] = "mst_ichiba_meeting";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "mst_business_partner_id",
	"m_strTable" => "mst_ichiba_meeting",
	"m_srcTableName" => "mst_ichiba_meeting"
));

$proto22["m_sql"] = "`mst_business_partner_id`";
$proto22["m_srcTableName"] = "mst_ichiba_meeting";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "mst_ichiba_meeting";
$proto25["m_srcTableName"] = "mst_ichiba_meeting";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "id";
$proto25["m_columns"][] = "name";
$proto25["m_columns"][] = "company";
$proto25["m_columns"][] = "representative";
$proto25["m_columns"][] = "meeting_name";
$proto25["m_columns"][] = "default_date";
$proto25["m_columns"][] = "original_id";
$proto25["m_columns"][] = "product_list_sheet_id";
$proto25["m_columns"][] = "mst_business_partner_id";
$proto25["m_columns"][] = "set_product_status_id";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "`mst_ichiba_meeting`";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "mst_ichiba_meeting";
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
	"m_strName" => "id",
	"m_strTable" => "mst_ichiba_meeting",
	"m_srcTableName" => "mst_ichiba_meeting"
));

$proto28["m_column"]=$obj;
$proto28["m_bAsc"] = 0;
$proto28["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto28);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="mst_ichiba_meeting";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mst_ichiba_meeting = createSqlQuery_mst_ichiba_meeting();


	
		;

									

$tdatamst_ichiba_meeting[".sqlquery"] = $queryData_mst_ichiba_meeting;

$tableEvents["mst_ichiba_meeting"] = new eventsBase;
$tdatamst_ichiba_meeting[".hasEvents"] = false;

?>