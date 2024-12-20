<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamst_bank = array();
	$tdatamst_bank[".truncateText"] = true;
	$tdatamst_bank[".NumberOfChars"] = 80;
	$tdatamst_bank[".ShortName"] = "mst_bank";
	$tdatamst_bank[".OwnerID"] = "";
	$tdatamst_bank[".OriginalTable"] = "mst_bank";

//	field labels
$fieldLabelsmst_bank = array();
$fieldToolTipsmst_bank = array();
$pageTitlesmst_bank = array();
$placeHoldersmst_bank = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmst_bank["Japanese"] = array();
	$fieldToolTipsmst_bank["Japanese"] = array();
	$placeHoldersmst_bank["Japanese"] = array();
	$pageTitlesmst_bank["Japanese"] = array();
	$fieldLabelsmst_bank["Japanese"]["id"] = "Id";
	$fieldToolTipsmst_bank["Japanese"]["id"] = "";
	$placeHoldersmst_bank["Japanese"]["id"] = "";
	$fieldLabelsmst_bank["Japanese"]["bank_code"] = "金融機関コード";
	$fieldToolTipsmst_bank["Japanese"]["bank_code"] = "";
	$placeHoldersmst_bank["Japanese"]["bank_code"] = "";
	$fieldLabelsmst_bank["Japanese"]["siten_code"] = "支店コード";
	$fieldToolTipsmst_bank["Japanese"]["siten_code"] = "";
	$placeHoldersmst_bank["Japanese"]["siten_code"] = "";
	$fieldLabelsmst_bank["Japanese"]["kana"] = "フリガナ";
	$fieldToolTipsmst_bank["Japanese"]["kana"] = "";
	$placeHoldersmst_bank["Japanese"]["kana"] = "";
	$fieldLabelsmst_bank["Japanese"]["name"] = "Name";
	$fieldToolTipsmst_bank["Japanese"]["name"] = "";
	$placeHoldersmst_bank["Japanese"]["name"] = "";
	$fieldLabelsmst_bank["Japanese"]["category"] = "Category";
	$fieldToolTipsmst_bank["Japanese"]["category"] = "";
	$placeHoldersmst_bank["Japanese"]["category"] = "";
	$fieldLabelsmst_bank["Japanese"]["create_by"] = "登録者";
	$fieldToolTipsmst_bank["Japanese"]["create_by"] = "";
	$placeHoldersmst_bank["Japanese"]["create_by"] = "";
	$fieldLabelsmst_bank["Japanese"]["create_at"] = "登録日";
	$fieldToolTipsmst_bank["Japanese"]["create_at"] = "";
	$placeHoldersmst_bank["Japanese"]["create_at"] = "";
	if (count($fieldToolTipsmst_bank["Japanese"]))
		$tdatamst_bank[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmst_bank[""] = array();
	$fieldToolTipsmst_bank[""] = array();
	$placeHoldersmst_bank[""] = array();
	$pageTitlesmst_bank[""] = array();
	$fieldLabelsmst_bank[""]["id"] = "Id";
	$fieldToolTipsmst_bank[""]["id"] = "";
	$placeHoldersmst_bank[""]["id"] = "";
	$fieldLabelsmst_bank[""]["bank_code"] = "Bank Code";
	$fieldToolTipsmst_bank[""]["bank_code"] = "";
	$placeHoldersmst_bank[""]["bank_code"] = "";
	$fieldLabelsmst_bank[""]["siten_code"] = "Siten Code";
	$fieldToolTipsmst_bank[""]["siten_code"] = "";
	$placeHoldersmst_bank[""]["siten_code"] = "";
	$fieldLabelsmst_bank[""]["kana"] = "Kana";
	$fieldToolTipsmst_bank[""]["kana"] = "";
	$placeHoldersmst_bank[""]["kana"] = "";
	$fieldLabelsmst_bank[""]["name"] = "Name";
	$fieldToolTipsmst_bank[""]["name"] = "";
	$placeHoldersmst_bank[""]["name"] = "";
	$fieldLabelsmst_bank[""]["category"] = "Category";
	$fieldToolTipsmst_bank[""]["category"] = "";
	$placeHoldersmst_bank[""]["category"] = "";
	$fieldLabelsmst_bank[""]["create_by"] = "Create By";
	$fieldToolTipsmst_bank[""]["create_by"] = "";
	$placeHoldersmst_bank[""]["create_by"] = "";
	$fieldLabelsmst_bank[""]["create_at"] = "Create At";
	$fieldToolTipsmst_bank[""]["create_at"] = "";
	$placeHoldersmst_bank[""]["create_at"] = "";
	if (count($fieldToolTipsmst_bank[""]))
		$tdatamst_bank[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmst_bank["English"] = array();
	$fieldToolTipsmst_bank["English"] = array();
	$placeHoldersmst_bank["English"] = array();
	$pageTitlesmst_bank["English"] = array();
	$fieldLabelsmst_bank["English"]["id"] = "Id";
	$fieldToolTipsmst_bank["English"]["id"] = "";
	$placeHoldersmst_bank["English"]["id"] = "";
	$fieldLabelsmst_bank["English"]["bank_code"] = "Bank Code";
	$fieldToolTipsmst_bank["English"]["bank_code"] = "";
	$placeHoldersmst_bank["English"]["bank_code"] = "";
	$fieldLabelsmst_bank["English"]["siten_code"] = "Siten Code";
	$fieldToolTipsmst_bank["English"]["siten_code"] = "";
	$placeHoldersmst_bank["English"]["siten_code"] = "";
	$fieldLabelsmst_bank["English"]["kana"] = "Kana";
	$fieldToolTipsmst_bank["English"]["kana"] = "";
	$placeHoldersmst_bank["English"]["kana"] = "";
	$fieldLabelsmst_bank["English"]["name"] = "Name";
	$fieldToolTipsmst_bank["English"]["name"] = "";
	$placeHoldersmst_bank["English"]["name"] = "";
	$fieldLabelsmst_bank["English"]["category"] = "Category";
	$fieldToolTipsmst_bank["English"]["category"] = "";
	$placeHoldersmst_bank["English"]["category"] = "";
	$fieldLabelsmst_bank["English"]["create_by"] = "Create By";
	$fieldToolTipsmst_bank["English"]["create_by"] = "";
	$placeHoldersmst_bank["English"]["create_by"] = "";
	$fieldLabelsmst_bank["English"]["create_at"] = "Create At";
	$fieldToolTipsmst_bank["English"]["create_at"] = "";
	$placeHoldersmst_bank["English"]["create_at"] = "";
	if (count($fieldToolTipsmst_bank["English"]))
		$tdatamst_bank[".isUseToolTips"] = true;
}


	$tdatamst_bank[".NCSearch"] = true;



$tdatamst_bank[".shortTableName"] = "mst_bank";
$tdatamst_bank[".nSecOptions"] = 0;
$tdatamst_bank[".recsPerRowPrint"] = 1;
$tdatamst_bank[".mainTableOwnerID"] = "";
$tdatamst_bank[".moveNext"] = 1;
$tdatamst_bank[".entityType"] = 0;

$tdatamst_bank[".strOriginalTableName"] = "mst_bank";

	



$tdatamst_bank[".showAddInPopup"] = false;

$tdatamst_bank[".showEditInPopup"] = false;

$tdatamst_bank[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamst_bank[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamst_bank[".fieldsForRegister"] = array();

$tdatamst_bank[".listAjax"] = false;

	$tdatamst_bank[".audit"] = true;

	$tdatamst_bank[".locking"] = false;



$tdatamst_bank[".list"] = true;



$tdatamst_bank[".reorderRecordsByHeader"] = true;




$tdatamst_bank[".import"] = true;

$tdatamst_bank[".exportTo"] = true;



$tdatamst_bank[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamst_bank[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamst_bank[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamst_bank[".searchSaving"] = false;
//

$tdatamst_bank[".showSearchPanel"] = true;
		$tdatamst_bank[".flexibleSearch"] = true;

$tdatamst_bank[".isUseAjaxSuggest"] = true;

$tdatamst_bank[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatamst_bank[".ajaxCodeSnippetAdded"] = false;

$tdatamst_bank[".buttonsAdded"] = false;

$tdatamst_bank[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamst_bank[".isUseTimeForSearch"] = false;





$tdatamst_bank[".allSearchFields"] = array();
$tdatamst_bank[".filterFields"] = array();
$tdatamst_bank[".requiredSearchFields"] = array();

$tdatamst_bank[".allSearchFields"][] = "id";
	$tdatamst_bank[".allSearchFields"][] = "bank_code";
	$tdatamst_bank[".allSearchFields"][] = "siten_code";
	$tdatamst_bank[".allSearchFields"][] = "kana";
	$tdatamst_bank[".allSearchFields"][] = "name";
	$tdatamst_bank[".allSearchFields"][] = "category";
	$tdatamst_bank[".allSearchFields"][] = "create_by";
	$tdatamst_bank[".allSearchFields"][] = "create_at";
	

$tdatamst_bank[".googleLikeFields"] = array();
$tdatamst_bank[".googleLikeFields"][] = "id";
$tdatamst_bank[".googleLikeFields"][] = "bank_code";
$tdatamst_bank[".googleLikeFields"][] = "siten_code";
$tdatamst_bank[".googleLikeFields"][] = "kana";
$tdatamst_bank[".googleLikeFields"][] = "name";
$tdatamst_bank[".googleLikeFields"][] = "category";
$tdatamst_bank[".googleLikeFields"][] = "create_by";
$tdatamst_bank[".googleLikeFields"][] = "create_at";


$tdatamst_bank[".advSearchFields"] = array();
$tdatamst_bank[".advSearchFields"][] = "id";
$tdatamst_bank[".advSearchFields"][] = "bank_code";
$tdatamst_bank[".advSearchFields"][] = "siten_code";
$tdatamst_bank[".advSearchFields"][] = "kana";
$tdatamst_bank[".advSearchFields"][] = "name";
$tdatamst_bank[".advSearchFields"][] = "category";
$tdatamst_bank[".advSearchFields"][] = "create_by";
$tdatamst_bank[".advSearchFields"][] = "create_at";

$tdatamst_bank[".tableType"] = "list";

$tdatamst_bank[".printerPageOrientation"] = 0;
$tdatamst_bank[".nPrinterPageScale"] = 100;

$tdatamst_bank[".nPrinterSplitRecords"] = 40;

$tdatamst_bank[".nPrinterPDFSplitRecords"] = 40;



$tdatamst_bank[".geocodingEnabled"] = false;





$tdatamst_bank[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamst_bank[".pageSize"] = 100;

$tdatamst_bank[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamst_bank[".strOrderBy"] = $tstrOrderBy;

$tdatamst_bank[".orderindexes"] = array();

$tdatamst_bank[".sqlHead"] = "SELECT id,  bank_code,  siten_code,  kana,  name,  category,  create_by,  create_at";
$tdatamst_bank[".sqlFrom"] = "FROM mst_bank";
$tdatamst_bank[".sqlWhereExpr"] = "";
$tdatamst_bank[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamst_bank[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamst_bank[".arrGroupsPerPage"] = $arrGPP;

$tdatamst_bank[".highlightSearchResults"] = true;

$tableKeysmst_bank = array();
$tableKeysmst_bank[] = "id";
$tdatamst_bank[".Keys"] = $tableKeysmst_bank;

$tdatamst_bank[".listFields"] = array();
$tdatamst_bank[".listFields"][] = "id";
$tdatamst_bank[".listFields"][] = "bank_code";
$tdatamst_bank[".listFields"][] = "siten_code";
$tdatamst_bank[".listFields"][] = "kana";
$tdatamst_bank[".listFields"][] = "name";
$tdatamst_bank[".listFields"][] = "category";
$tdatamst_bank[".listFields"][] = "create_by";
$tdatamst_bank[".listFields"][] = "create_at";

$tdatamst_bank[".hideMobileList"] = array();


$tdatamst_bank[".viewFields"] = array();

$tdatamst_bank[".addFields"] = array();

$tdatamst_bank[".masterListFields"] = array();
$tdatamst_bank[".masterListFields"][] = "id";
$tdatamst_bank[".masterListFields"][] = "bank_code";
$tdatamst_bank[".masterListFields"][] = "siten_code";
$tdatamst_bank[".masterListFields"][] = "kana";
$tdatamst_bank[".masterListFields"][] = "name";
$tdatamst_bank[".masterListFields"][] = "category";
$tdatamst_bank[".masterListFields"][] = "create_by";
$tdatamst_bank[".masterListFields"][] = "create_at";

$tdatamst_bank[".inlineAddFields"] = array();

$tdatamst_bank[".editFields"] = array();

$tdatamst_bank[".inlineEditFields"] = array();

$tdatamst_bank[".updateSelectedFields"] = array();


$tdatamst_bank[".exportFields"] = array();
$tdatamst_bank[".exportFields"][] = "id";
$tdatamst_bank[".exportFields"][] = "bank_code";
$tdatamst_bank[".exportFields"][] = "siten_code";
$tdatamst_bank[".exportFields"][] = "kana";
$tdatamst_bank[".exportFields"][] = "name";
$tdatamst_bank[".exportFields"][] = "category";

$tdatamst_bank[".importFields"] = array();
$tdatamst_bank[".importFields"][] = "id";
$tdatamst_bank[".importFields"][] = "bank_code";
$tdatamst_bank[".importFields"][] = "siten_code";
$tdatamst_bank[".importFields"][] = "kana";
$tdatamst_bank[".importFields"][] = "name";
$tdatamst_bank[".importFields"][] = "category";

$tdatamst_bank[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "mst_bank";
	$fdata["Label"] = GetFieldLabel("mst_bank","id");
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




	$tdatamst_bank["id"] = $fdata;
//	bank_code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "bank_code";
	$fdata["GoodName"] = "bank_code";
	$fdata["ownerTable"] = "mst_bank";
	$fdata["Label"] = GetFieldLabel("mst_bank","bank_code");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "bank_code";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bank_code";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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




	$tdatamst_bank["bank_code"] = $fdata;
//	siten_code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "siten_code";
	$fdata["GoodName"] = "siten_code";
	$fdata["ownerTable"] = "mst_bank";
	$fdata["Label"] = GetFieldLabel("mst_bank","siten_code");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "siten_code";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "siten_code";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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




	$tdatamst_bank["siten_code"] = $fdata;
//	kana
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "kana";
	$fdata["GoodName"] = "kana";
	$fdata["ownerTable"] = "mst_bank";
	$fdata["Label"] = GetFieldLabel("mst_bank","kana");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "kana";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "kana";

	
	
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




	$tdatamst_bank["kana"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "mst_bank";
	$fdata["Label"] = GetFieldLabel("mst_bank","name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdatamst_bank["name"] = $fdata;
//	category
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "category";
	$fdata["GoodName"] = "category";
	$fdata["ownerTable"] = "mst_bank";
	$fdata["Label"] = GetFieldLabel("mst_bank","category");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "category";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "category";

	
	
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




	$tdatamst_bank["category"] = $fdata;
//	create_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "create_by";
	$fdata["GoodName"] = "create_by";
	$fdata["ownerTable"] = "mst_bank";
	$fdata["Label"] = GetFieldLabel("mst_bank","create_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdatamst_bank["create_by"] = $fdata;
//	create_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "create_at";
	$fdata["GoodName"] = "create_at";
	$fdata["ownerTable"] = "mst_bank";
	$fdata["Label"] = GetFieldLabel("mst_bank","create_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdatamst_bank["create_at"] = $fdata;


$tables_data["mst_bank"]=&$tdatamst_bank;
$field_labels["mst_bank"] = &$fieldLabelsmst_bank;
$fieldToolTips["mst_bank"] = &$fieldToolTipsmst_bank;
$placeHolders["mst_bank"] = &$placeHoldersmst_bank;
$page_titles["mst_bank"] = &$pageTitlesmst_bank;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mst_bank"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mst_bank"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mst_bank()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  bank_code,  siten_code,  kana,  name,  category,  create_by,  create_at";
$proto0["m_strFrom"] = "FROM mst_bank";
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
	"m_strTable" => "mst_bank",
	"m_srcTableName" => "mst_bank"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "mst_bank";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "bank_code",
	"m_strTable" => "mst_bank",
	"m_srcTableName" => "mst_bank"
));

$proto8["m_sql"] = "bank_code";
$proto8["m_srcTableName"] = "mst_bank";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "siten_code",
	"m_strTable" => "mst_bank",
	"m_srcTableName" => "mst_bank"
));

$proto10["m_sql"] = "siten_code";
$proto10["m_srcTableName"] = "mst_bank";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "kana",
	"m_strTable" => "mst_bank",
	"m_srcTableName" => "mst_bank"
));

$proto12["m_sql"] = "kana";
$proto12["m_srcTableName"] = "mst_bank";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "mst_bank",
	"m_srcTableName" => "mst_bank"
));

$proto14["m_sql"] = "name";
$proto14["m_srcTableName"] = "mst_bank";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "category",
	"m_strTable" => "mst_bank",
	"m_srcTableName" => "mst_bank"
));

$proto16["m_sql"] = "category";
$proto16["m_srcTableName"] = "mst_bank";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "create_by",
	"m_strTable" => "mst_bank",
	"m_srcTableName" => "mst_bank"
));

$proto18["m_sql"] = "create_by";
$proto18["m_srcTableName"] = "mst_bank";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "create_at",
	"m_strTable" => "mst_bank",
	"m_srcTableName" => "mst_bank"
));

$proto20["m_sql"] = "create_at";
$proto20["m_srcTableName"] = "mst_bank";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "mst_bank";
$proto23["m_srcTableName"] = "mst_bank";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "id";
$proto23["m_columns"][] = "bank_code";
$proto23["m_columns"][] = "siten_code";
$proto23["m_columns"][] = "kana";
$proto23["m_columns"][] = "name";
$proto23["m_columns"][] = "category";
$proto23["m_columns"][] = "update_by";
$proto23["m_columns"][] = "update_at";
$proto23["m_columns"][] = "create_by";
$proto23["m_columns"][] = "create_at";
$proto23["m_columns"][] = "bank_type";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "mst_bank";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "mst_bank";
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
$proto0["m_srcTableName"]="mst_bank";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mst_bank = createSqlQuery_mst_bank();


	
		;

								

$tdatamst_bank[".sqlquery"] = $queryData_mst_bank;

include_once(getabspath("include/mst_bank_events.php"));
$tableEvents["mst_bank"] = new eventclass_mst_bank;
$tdatamst_bank[".hasEvents"] = true;

?>