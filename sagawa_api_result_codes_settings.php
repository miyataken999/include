<?php
require_once(getabspath("classes/cipherer.php"));




$tdatasagawa_api_result_codes = array();
	$tdatasagawa_api_result_codes[".truncateText"] = true;
	$tdatasagawa_api_result_codes[".NumberOfChars"] = 80;
	$tdatasagawa_api_result_codes[".ShortName"] = "sagawa_api_result_codes";
	$tdatasagawa_api_result_codes[".OwnerID"] = "";
	$tdatasagawa_api_result_codes[".OriginalTable"] = "sagawa_api_result_codes";

//	field labels
$fieldLabelssagawa_api_result_codes = array();
$fieldToolTipssagawa_api_result_codes = array();
$pageTitlessagawa_api_result_codes = array();
$placeHolderssagawa_api_result_codes = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelssagawa_api_result_codes["Japanese"] = array();
	$fieldToolTipssagawa_api_result_codes["Japanese"] = array();
	$placeHolderssagawa_api_result_codes["Japanese"] = array();
	$pageTitlessagawa_api_result_codes["Japanese"] = array();
	$fieldLabelssagawa_api_result_codes["Japanese"]["id"] = "Id";
	$fieldToolTipssagawa_api_result_codes["Japanese"]["id"] = "";
	$placeHolderssagawa_api_result_codes["Japanese"]["id"] = "";
	$fieldLabelssagawa_api_result_codes["Japanese"]["sagawa_api_result_id"] = "佐川APIId";
	$fieldToolTipssagawa_api_result_codes["Japanese"]["sagawa_api_result_id"] = "";
	$placeHolderssagawa_api_result_codes["Japanese"]["sagawa_api_result_id"] = "";
	$fieldLabelssagawa_api_result_codes["Japanese"]["result_code"] = "結果コード";
	$fieldToolTipssagawa_api_result_codes["Japanese"]["result_code"] = "";
	$placeHolderssagawa_api_result_codes["Japanese"]["result_code"] = "";
	$fieldLabelssagawa_api_result_codes["Japanese"]["updated_by"] = "更新者";
	$fieldToolTipssagawa_api_result_codes["Japanese"]["updated_by"] = "";
	$placeHolderssagawa_api_result_codes["Japanese"]["updated_by"] = "";
	$fieldLabelssagawa_api_result_codes["Japanese"]["updated_at"] = "更新日";
	$fieldToolTipssagawa_api_result_codes["Japanese"]["updated_at"] = "";
	$placeHolderssagawa_api_result_codes["Japanese"]["updated_at"] = "";
	$fieldLabelssagawa_api_result_codes["Japanese"]["created_by"] = "作成者";
	$fieldToolTipssagawa_api_result_codes["Japanese"]["created_by"] = "";
	$placeHolderssagawa_api_result_codes["Japanese"]["created_by"] = "";
	$fieldLabelssagawa_api_result_codes["Japanese"]["created_at"] = "作成日";
	$fieldToolTipssagawa_api_result_codes["Japanese"]["created_at"] = "";
	$placeHolderssagawa_api_result_codes["Japanese"]["created_at"] = "";
	if (count($fieldToolTipssagawa_api_result_codes["Japanese"]))
		$tdatasagawa_api_result_codes[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelssagawa_api_result_codes[""] = array();
	$fieldToolTipssagawa_api_result_codes[""] = array();
	$placeHolderssagawa_api_result_codes[""] = array();
	$pageTitlessagawa_api_result_codes[""] = array();
	$fieldLabelssagawa_api_result_codes[""]["id"] = "Id";
	$fieldToolTipssagawa_api_result_codes[""]["id"] = "";
	$placeHolderssagawa_api_result_codes[""]["id"] = "";
	$fieldLabelssagawa_api_result_codes[""]["sagawa_api_result_id"] = "Sagawa Api Result Id";
	$fieldToolTipssagawa_api_result_codes[""]["sagawa_api_result_id"] = "";
	$placeHolderssagawa_api_result_codes[""]["sagawa_api_result_id"] = "";
	$fieldLabelssagawa_api_result_codes[""]["result_code"] = "Result Code";
	$fieldToolTipssagawa_api_result_codes[""]["result_code"] = "";
	$placeHolderssagawa_api_result_codes[""]["result_code"] = "";
	$fieldLabelssagawa_api_result_codes[""]["updated_by"] = "Updated By";
	$fieldToolTipssagawa_api_result_codes[""]["updated_by"] = "";
	$placeHolderssagawa_api_result_codes[""]["updated_by"] = "";
	$fieldLabelssagawa_api_result_codes[""]["updated_at"] = "Updated At";
	$fieldToolTipssagawa_api_result_codes[""]["updated_at"] = "";
	$placeHolderssagawa_api_result_codes[""]["updated_at"] = "";
	$fieldLabelssagawa_api_result_codes[""]["created_by"] = "Created By";
	$fieldToolTipssagawa_api_result_codes[""]["created_by"] = "";
	$placeHolderssagawa_api_result_codes[""]["created_by"] = "";
	$fieldLabelssagawa_api_result_codes[""]["created_at"] = "Created At";
	$fieldToolTipssagawa_api_result_codes[""]["created_at"] = "";
	$placeHolderssagawa_api_result_codes[""]["created_at"] = "";
	if (count($fieldToolTipssagawa_api_result_codes[""]))
		$tdatasagawa_api_result_codes[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelssagawa_api_result_codes["English"] = array();
	$fieldToolTipssagawa_api_result_codes["English"] = array();
	$placeHolderssagawa_api_result_codes["English"] = array();
	$pageTitlessagawa_api_result_codes["English"] = array();
	$fieldLabelssagawa_api_result_codes["English"]["id"] = "Id";
	$fieldToolTipssagawa_api_result_codes["English"]["id"] = "";
	$placeHolderssagawa_api_result_codes["English"]["id"] = "";
	$fieldLabelssagawa_api_result_codes["English"]["sagawa_api_result_id"] = "Sagawa Api Result Id";
	$fieldToolTipssagawa_api_result_codes["English"]["sagawa_api_result_id"] = "";
	$placeHolderssagawa_api_result_codes["English"]["sagawa_api_result_id"] = "";
	$fieldLabelssagawa_api_result_codes["English"]["result_code"] = "Result Code";
	$fieldToolTipssagawa_api_result_codes["English"]["result_code"] = "";
	$placeHolderssagawa_api_result_codes["English"]["result_code"] = "";
	$fieldLabelssagawa_api_result_codes["English"]["updated_by"] = "Updated By";
	$fieldToolTipssagawa_api_result_codes["English"]["updated_by"] = "";
	$placeHolderssagawa_api_result_codes["English"]["updated_by"] = "";
	$fieldLabelssagawa_api_result_codes["English"]["updated_at"] = "Updated At";
	$fieldToolTipssagawa_api_result_codes["English"]["updated_at"] = "";
	$placeHolderssagawa_api_result_codes["English"]["updated_at"] = "";
	$fieldLabelssagawa_api_result_codes["English"]["created_by"] = "Created By";
	$fieldToolTipssagawa_api_result_codes["English"]["created_by"] = "";
	$placeHolderssagawa_api_result_codes["English"]["created_by"] = "";
	$fieldLabelssagawa_api_result_codes["English"]["created_at"] = "Created At";
	$fieldToolTipssagawa_api_result_codes["English"]["created_at"] = "";
	$placeHolderssagawa_api_result_codes["English"]["created_at"] = "";
	if (count($fieldToolTipssagawa_api_result_codes["English"]))
		$tdatasagawa_api_result_codes[".isUseToolTips"] = true;
}


	$tdatasagawa_api_result_codes[".NCSearch"] = true;



$tdatasagawa_api_result_codes[".shortTableName"] = "sagawa_api_result_codes";
$tdatasagawa_api_result_codes[".nSecOptions"] = 0;
$tdatasagawa_api_result_codes[".recsPerRowPrint"] = 1;
$tdatasagawa_api_result_codes[".mainTableOwnerID"] = "";
$tdatasagawa_api_result_codes[".moveNext"] = 1;
$tdatasagawa_api_result_codes[".entityType"] = 0;

$tdatasagawa_api_result_codes[".strOriginalTableName"] = "sagawa_api_result_codes";

	



$tdatasagawa_api_result_codes[".showAddInPopup"] = false;

$tdatasagawa_api_result_codes[".showEditInPopup"] = false;

$tdatasagawa_api_result_codes[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatasagawa_api_result_codes[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatasagawa_api_result_codes[".fieldsForRegister"] = array();

$tdatasagawa_api_result_codes[".listAjax"] = false;

	$tdatasagawa_api_result_codes[".audit"] = true;

	$tdatasagawa_api_result_codes[".locking"] = false;



$tdatasagawa_api_result_codes[".list"] = true;



$tdatasagawa_api_result_codes[".reorderRecordsByHeader"] = true;





$tdatasagawa_api_result_codes[".exportTo"] = true;



$tdatasagawa_api_result_codes[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatasagawa_api_result_codes[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatasagawa_api_result_codes[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatasagawa_api_result_codes[".searchSaving"] = false;
//

$tdatasagawa_api_result_codes[".showSearchPanel"] = true;
		$tdatasagawa_api_result_codes[".flexibleSearch"] = true;

$tdatasagawa_api_result_codes[".isUseAjaxSuggest"] = true;

$tdatasagawa_api_result_codes[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																								

$tdatasagawa_api_result_codes[".ajaxCodeSnippetAdded"] = false;

$tdatasagawa_api_result_codes[".buttonsAdded"] = false;

$tdatasagawa_api_result_codes[".addPageEvents"] = false;

// use timepicker for search panel
$tdatasagawa_api_result_codes[".isUseTimeForSearch"] = false;



$tdatasagawa_api_result_codes[".badgeColor"] = "dc143c";


$tdatasagawa_api_result_codes[".allSearchFields"] = array();
$tdatasagawa_api_result_codes[".filterFields"] = array();
$tdatasagawa_api_result_codes[".requiredSearchFields"] = array();

$tdatasagawa_api_result_codes[".allSearchFields"][] = "id";
	$tdatasagawa_api_result_codes[".allSearchFields"][] = "sagawa_api_result_id";
	$tdatasagawa_api_result_codes[".allSearchFields"][] = "result_code";
	$tdatasagawa_api_result_codes[".allSearchFields"][] = "updated_by";
	$tdatasagawa_api_result_codes[".allSearchFields"][] = "updated_at";
	$tdatasagawa_api_result_codes[".allSearchFields"][] = "created_by";
	$tdatasagawa_api_result_codes[".allSearchFields"][] = "created_at";
	

$tdatasagawa_api_result_codes[".googleLikeFields"] = array();
$tdatasagawa_api_result_codes[".googleLikeFields"][] = "id";
$tdatasagawa_api_result_codes[".googleLikeFields"][] = "sagawa_api_result_id";
$tdatasagawa_api_result_codes[".googleLikeFields"][] = "result_code";
$tdatasagawa_api_result_codes[".googleLikeFields"][] = "updated_by";
$tdatasagawa_api_result_codes[".googleLikeFields"][] = "updated_at";
$tdatasagawa_api_result_codes[".googleLikeFields"][] = "created_by";
$tdatasagawa_api_result_codes[".googleLikeFields"][] = "created_at";


$tdatasagawa_api_result_codes[".advSearchFields"] = array();
$tdatasagawa_api_result_codes[".advSearchFields"][] = "id";
$tdatasagawa_api_result_codes[".advSearchFields"][] = "sagawa_api_result_id";
$tdatasagawa_api_result_codes[".advSearchFields"][] = "result_code";
$tdatasagawa_api_result_codes[".advSearchFields"][] = "updated_by";
$tdatasagawa_api_result_codes[".advSearchFields"][] = "updated_at";
$tdatasagawa_api_result_codes[".advSearchFields"][] = "created_by";
$tdatasagawa_api_result_codes[".advSearchFields"][] = "created_at";

$tdatasagawa_api_result_codes[".tableType"] = "list";

$tdatasagawa_api_result_codes[".printerPageOrientation"] = 0;
$tdatasagawa_api_result_codes[".nPrinterPageScale"] = 100;

$tdatasagawa_api_result_codes[".nPrinterSplitRecords"] = 40;

$tdatasagawa_api_result_codes[".nPrinterPDFSplitRecords"] = 40;



$tdatasagawa_api_result_codes[".geocodingEnabled"] = false;





$tdatasagawa_api_result_codes[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatasagawa_api_result_codes[".pageSize"] = 20;

$tdatasagawa_api_result_codes[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatasagawa_api_result_codes[".strOrderBy"] = $tstrOrderBy;

$tdatasagawa_api_result_codes[".orderindexes"] = array();

$tdatasagawa_api_result_codes[".sqlHead"] = "SELECT `id`,  	`sagawa_api_result_id`,  	`result_code`,  	`updated_by`,  	`updated_at`,  	`created_by`,  	`created_at`";
$tdatasagawa_api_result_codes[".sqlFrom"] = "FROM `sagawa_api_result_codes`";
$tdatasagawa_api_result_codes[".sqlWhereExpr"] = "";
$tdatasagawa_api_result_codes[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasagawa_api_result_codes[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasagawa_api_result_codes[".arrGroupsPerPage"] = $arrGPP;

$tdatasagawa_api_result_codes[".highlightSearchResults"] = true;

$tableKeyssagawa_api_result_codes = array();
$tableKeyssagawa_api_result_codes[] = "id";
$tdatasagawa_api_result_codes[".Keys"] = $tableKeyssagawa_api_result_codes;

$tdatasagawa_api_result_codes[".listFields"] = array();
$tdatasagawa_api_result_codes[".listFields"][] = "id";
$tdatasagawa_api_result_codes[".listFields"][] = "sagawa_api_result_id";
$tdatasagawa_api_result_codes[".listFields"][] = "result_code";
$tdatasagawa_api_result_codes[".listFields"][] = "updated_by";
$tdatasagawa_api_result_codes[".listFields"][] = "updated_at";
$tdatasagawa_api_result_codes[".listFields"][] = "created_by";
$tdatasagawa_api_result_codes[".listFields"][] = "created_at";

$tdatasagawa_api_result_codes[".hideMobileList"] = array();


$tdatasagawa_api_result_codes[".viewFields"] = array();

$tdatasagawa_api_result_codes[".addFields"] = array();

$tdatasagawa_api_result_codes[".masterListFields"] = array();
$tdatasagawa_api_result_codes[".masterListFields"][] = "id";
$tdatasagawa_api_result_codes[".masterListFields"][] = "sagawa_api_result_id";
$tdatasagawa_api_result_codes[".masterListFields"][] = "result_code";
$tdatasagawa_api_result_codes[".masterListFields"][] = "updated_by";
$tdatasagawa_api_result_codes[".masterListFields"][] = "updated_at";
$tdatasagawa_api_result_codes[".masterListFields"][] = "created_by";
$tdatasagawa_api_result_codes[".masterListFields"][] = "created_at";

$tdatasagawa_api_result_codes[".inlineAddFields"] = array();

$tdatasagawa_api_result_codes[".editFields"] = array();

$tdatasagawa_api_result_codes[".inlineEditFields"] = array();

$tdatasagawa_api_result_codes[".updateSelectedFields"] = array();


$tdatasagawa_api_result_codes[".exportFields"] = array();
$tdatasagawa_api_result_codes[".exportFields"][] = "id";
$tdatasagawa_api_result_codes[".exportFields"][] = "sagawa_api_result_id";
$tdatasagawa_api_result_codes[".exportFields"][] = "result_code";
$tdatasagawa_api_result_codes[".exportFields"][] = "updated_by";
$tdatasagawa_api_result_codes[".exportFields"][] = "updated_at";
$tdatasagawa_api_result_codes[".exportFields"][] = "created_by";
$tdatasagawa_api_result_codes[".exportFields"][] = "created_at";

$tdatasagawa_api_result_codes[".importFields"] = array();

$tdatasagawa_api_result_codes[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "sagawa_api_result_codes";
	$fdata["Label"] = GetFieldLabel("sagawa_api_result_codes","id");
	$fdata["FieldType"] = 20;

	
	
	
			
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




	$tdatasagawa_api_result_codes["id"] = $fdata;
//	sagawa_api_result_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "sagawa_api_result_id";
	$fdata["GoodName"] = "sagawa_api_result_id";
	$fdata["ownerTable"] = "sagawa_api_result_codes";
	$fdata["Label"] = GetFieldLabel("sagawa_api_result_codes","sagawa_api_result_id");
	$fdata["FieldType"] = 20;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "sagawa_api_result_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`sagawa_api_result_id`";

	
	
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




	$tdatasagawa_api_result_codes["sagawa_api_result_id"] = $fdata;
//	result_code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "result_code";
	$fdata["GoodName"] = "result_code";
	$fdata["ownerTable"] = "sagawa_api_result_codes";
	$fdata["Label"] = GetFieldLabel("sagawa_api_result_codes","result_code");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "result_code";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`result_code`";

	
	
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
	$edata["LookupTable"] = "sagawa_api_error_details1";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "error_code";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "error_output";

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
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




	$tdatasagawa_api_result_codes["result_code"] = $fdata;
//	updated_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "updated_by";
	$fdata["GoodName"] = "updated_by";
	$fdata["ownerTable"] = "sagawa_api_result_codes";
	$fdata["Label"] = GetFieldLabel("sagawa_api_result_codes","updated_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "updated_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`updated_by`";

	
	
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




	$tdatasagawa_api_result_codes["updated_by"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "sagawa_api_result_codes";
	$fdata["Label"] = GetFieldLabel("sagawa_api_result_codes","updated_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "updated_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`updated_at`";

	
	
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




	$tdatasagawa_api_result_codes["updated_at"] = $fdata;
//	created_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "created_by";
	$fdata["GoodName"] = "created_by";
	$fdata["ownerTable"] = "sagawa_api_result_codes";
	$fdata["Label"] = GetFieldLabel("sagawa_api_result_codes","created_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "created_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`created_by`";

	
	
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




	$tdatasagawa_api_result_codes["created_by"] = $fdata;
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "sagawa_api_result_codes";
	$fdata["Label"] = GetFieldLabel("sagawa_api_result_codes","created_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "created_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`created_at`";

	
	
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




	$tdatasagawa_api_result_codes["created_at"] = $fdata;


$tables_data["sagawa_api_result_codes"]=&$tdatasagawa_api_result_codes;
$field_labels["sagawa_api_result_codes"] = &$fieldLabelssagawa_api_result_codes;
$fieldToolTips["sagawa_api_result_codes"] = &$fieldToolTipssagawa_api_result_codes;
$placeHolders["sagawa_api_result_codes"] = &$placeHolderssagawa_api_result_codes;
$page_titles["sagawa_api_result_codes"] = &$pageTitlessagawa_api_result_codes;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["sagawa_api_result_codes"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["sagawa_api_result_codes"] = array();


	
				$strOriginalDetailsTable="sagawa_api_results";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="sagawa_api_results";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "sagawa_api_results";
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
					$masterTablesData["sagawa_api_result_codes"][0] = $masterParams;
				$masterTablesData["sagawa_api_result_codes"][0]["masterKeys"] = array();
	$masterTablesData["sagawa_api_result_codes"][0]["masterKeys"][]="sagawa_api_result_id";
				$masterTablesData["sagawa_api_result_codes"][0]["detailKeys"] = array();
	$masterTablesData["sagawa_api_result_codes"][0]["detailKeys"][]="sagawa_api_result_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_sagawa_api_result_codes()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  	`sagawa_api_result_id`,  	`result_code`,  	`updated_by`,  	`updated_at`,  	`created_by`,  	`created_at`";
$proto0["m_strFrom"] = "FROM `sagawa_api_result_codes`";
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
	"m_strTable" => "sagawa_api_result_codes",
	"m_srcTableName" => "sagawa_api_result_codes"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "sagawa_api_result_codes";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "sagawa_api_result_id",
	"m_strTable" => "sagawa_api_result_codes",
	"m_srcTableName" => "sagawa_api_result_codes"
));

$proto8["m_sql"] = "`sagawa_api_result_id`";
$proto8["m_srcTableName"] = "sagawa_api_result_codes";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "result_code",
	"m_strTable" => "sagawa_api_result_codes",
	"m_srcTableName" => "sagawa_api_result_codes"
));

$proto10["m_sql"] = "`result_code`";
$proto10["m_srcTableName"] = "sagawa_api_result_codes";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by",
	"m_strTable" => "sagawa_api_result_codes",
	"m_srcTableName" => "sagawa_api_result_codes"
));

$proto12["m_sql"] = "`updated_by`";
$proto12["m_srcTableName"] = "sagawa_api_result_codes";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "sagawa_api_result_codes",
	"m_srcTableName" => "sagawa_api_result_codes"
));

$proto14["m_sql"] = "`updated_at`";
$proto14["m_srcTableName"] = "sagawa_api_result_codes";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "created_by",
	"m_strTable" => "sagawa_api_result_codes",
	"m_srcTableName" => "sagawa_api_result_codes"
));

$proto16["m_sql"] = "`created_by`";
$proto16["m_srcTableName"] = "sagawa_api_result_codes";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "sagawa_api_result_codes",
	"m_srcTableName" => "sagawa_api_result_codes"
));

$proto18["m_sql"] = "`created_at`";
$proto18["m_srcTableName"] = "sagawa_api_result_codes";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "sagawa_api_result_codes";
$proto21["m_srcTableName"] = "sagawa_api_result_codes";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "id";
$proto21["m_columns"][] = "sagawa_api_result_id";
$proto21["m_columns"][] = "result_code";
$proto21["m_columns"][] = "updated_by";
$proto21["m_columns"][] = "updated_at";
$proto21["m_columns"][] = "created_by";
$proto21["m_columns"][] = "created_at";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "`sagawa_api_result_codes`";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "sagawa_api_result_codes";
$proto22=array();
$proto22["m_sql"] = "";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="sagawa_api_result_codes";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_sagawa_api_result_codes = createSqlQuery_sagawa_api_result_codes();


	
		;

							

$tdatasagawa_api_result_codes[".sqlquery"] = $queryData_sagawa_api_result_codes;

$tableEvents["sagawa_api_result_codes"] = new eventsBase;
$tdatasagawa_api_result_codes[".hasEvents"] = false;

?>