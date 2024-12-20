<?php
require_once(getabspath("classes/cipherer.php"));




$tdataid_key = array();
	$tdataid_key[".truncateText"] = true;
	$tdataid_key[".NumberOfChars"] = 80;
	$tdataid_key[".ShortName"] = "id_key";
	$tdataid_key[".OwnerID"] = "";
	$tdataid_key[".OriginalTable"] = "id_key";

//	field labels
$fieldLabelsid_key = array();
$fieldToolTipsid_key = array();
$pageTitlesid_key = array();
$placeHoldersid_key = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsid_key["Japanese"] = array();
	$fieldToolTipsid_key["Japanese"] = array();
	$placeHoldersid_key["Japanese"] = array();
	$pageTitlesid_key["Japanese"] = array();
	$fieldLabelsid_key["Japanese"]["category_id"] = "Category Id";
	$fieldToolTipsid_key["Japanese"]["category_id"] = "";
	$placeHoldersid_key["Japanese"]["category_id"] = "";
	$fieldLabelsid_key["Japanese"]["sub_category_id"] = "Sub Category Id";
	$fieldToolTipsid_key["Japanese"]["sub_category_id"] = "";
	$placeHoldersid_key["Japanese"]["sub_category_id"] = "";
	$fieldLabelsid_key["Japanese"]["id_key"] = "Id Key";
	$fieldToolTipsid_key["Japanese"]["id_key"] = "";
	$placeHoldersid_key["Japanese"]["id_key"] = "";
	$fieldLabelsid_key["Japanese"]["product_id"] = "Product Id";
	$fieldToolTipsid_key["Japanese"]["product_id"] = "";
	$placeHoldersid_key["Japanese"]["product_id"] = "";
	$fieldLabelsid_key["Japanese"]["sub_cate_ini"] = "Sub Cate Ini";
	$fieldToolTipsid_key["Japanese"]["sub_cate_ini"] = "";
	$placeHoldersid_key["Japanese"]["sub_cate_ini"] = "";
	$fieldLabelsid_key["Japanese"]["sex"] = "Sex";
	$fieldToolTipsid_key["Japanese"]["sex"] = "";
	$placeHoldersid_key["Japanese"]["sex"] = "";
	if (count($fieldToolTipsid_key["Japanese"]))
		$tdataid_key[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsid_key[""] = array();
	$fieldToolTipsid_key[""] = array();
	$placeHoldersid_key[""] = array();
	$pageTitlesid_key[""] = array();
	$fieldLabelsid_key[""]["category_id"] = "Category Id";
	$fieldToolTipsid_key[""]["category_id"] = "";
	$placeHoldersid_key[""]["category_id"] = "";
	$fieldLabelsid_key[""]["sub_category_id"] = "Sub Category Id";
	$fieldToolTipsid_key[""]["sub_category_id"] = "";
	$placeHoldersid_key[""]["sub_category_id"] = "";
	$fieldLabelsid_key[""]["id_key"] = "Id Key";
	$fieldToolTipsid_key[""]["id_key"] = "";
	$placeHoldersid_key[""]["id_key"] = "";
	$fieldLabelsid_key[""]["product_id"] = "Product Id";
	$fieldToolTipsid_key[""]["product_id"] = "";
	$placeHoldersid_key[""]["product_id"] = "";
	$fieldLabelsid_key[""]["sub_cate_ini"] = "Sub Cate Ini";
	$fieldToolTipsid_key[""]["sub_cate_ini"] = "";
	$placeHoldersid_key[""]["sub_cate_ini"] = "";
	$fieldLabelsid_key[""]["sex"] = "Sex";
	$fieldToolTipsid_key[""]["sex"] = "";
	$placeHoldersid_key[""]["sex"] = "";
	if (count($fieldToolTipsid_key[""]))
		$tdataid_key[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsid_key["English"] = array();
	$fieldToolTipsid_key["English"] = array();
	$placeHoldersid_key["English"] = array();
	$pageTitlesid_key["English"] = array();
	$fieldLabelsid_key["English"]["category_id"] = "Category Id";
	$fieldToolTipsid_key["English"]["category_id"] = "";
	$placeHoldersid_key["English"]["category_id"] = "";
	$fieldLabelsid_key["English"]["sub_category_id"] = "Sub Category Id";
	$fieldToolTipsid_key["English"]["sub_category_id"] = "";
	$placeHoldersid_key["English"]["sub_category_id"] = "";
	$fieldLabelsid_key["English"]["id_key"] = "Id Key";
	$fieldToolTipsid_key["English"]["id_key"] = "";
	$placeHoldersid_key["English"]["id_key"] = "";
	$fieldLabelsid_key["English"]["product_id"] = "Product Id";
	$fieldToolTipsid_key["English"]["product_id"] = "";
	$placeHoldersid_key["English"]["product_id"] = "";
	$fieldLabelsid_key["English"]["sub_cate_ini"] = "Sub Cate Ini";
	$fieldToolTipsid_key["English"]["sub_cate_ini"] = "";
	$placeHoldersid_key["English"]["sub_cate_ini"] = "";
	$fieldLabelsid_key["English"]["sex"] = "Sex";
	$fieldToolTipsid_key["English"]["sex"] = "";
	$placeHoldersid_key["English"]["sex"] = "";
	if (count($fieldToolTipsid_key["English"]))
		$tdataid_key[".isUseToolTips"] = true;
}


	$tdataid_key[".NCSearch"] = true;



$tdataid_key[".shortTableName"] = "id_key";
$tdataid_key[".nSecOptions"] = 0;
$tdataid_key[".recsPerRowPrint"] = 1;
$tdataid_key[".mainTableOwnerID"] = "";
$tdataid_key[".moveNext"] = 1;
$tdataid_key[".entityType"] = 0;

$tdataid_key[".strOriginalTableName"] = "id_key";

	



$tdataid_key[".showAddInPopup"] = false;

$tdataid_key[".showEditInPopup"] = false;

$tdataid_key[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataid_key[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataid_key[".fieldsForRegister"] = array();

$tdataid_key[".listAjax"] = false;

	$tdataid_key[".audit"] = true;

	$tdataid_key[".locking"] = false;



$tdataid_key[".list"] = true;



$tdataid_key[".reorderRecordsByHeader"] = true;








$tdataid_key[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataid_key[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataid_key[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataid_key[".searchSaving"] = false;
//

$tdataid_key[".showSearchPanel"] = true;
		$tdataid_key[".flexibleSearch"] = true;

$tdataid_key[".isUseAjaxSuggest"] = true;

$tdataid_key[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdataid_key[".ajaxCodeSnippetAdded"] = false;

$tdataid_key[".buttonsAdded"] = false;

$tdataid_key[".addPageEvents"] = false;

// use timepicker for search panel
$tdataid_key[".isUseTimeForSearch"] = false;





$tdataid_key[".allSearchFields"] = array();
$tdataid_key[".filterFields"] = array();
$tdataid_key[".requiredSearchFields"] = array();

$tdataid_key[".allSearchFields"][] = "category_id";
	$tdataid_key[".allSearchFields"][] = "sub_category_id";
	$tdataid_key[".allSearchFields"][] = "id_key";
	$tdataid_key[".allSearchFields"][] = "product_id";
	$tdataid_key[".allSearchFields"][] = "sub_cate_ini";
	$tdataid_key[".allSearchFields"][] = "sex";
	

$tdataid_key[".googleLikeFields"] = array();
$tdataid_key[".googleLikeFields"][] = "category_id";
$tdataid_key[".googleLikeFields"][] = "sub_category_id";
$tdataid_key[".googleLikeFields"][] = "id_key";
$tdataid_key[".googleLikeFields"][] = "product_id";
$tdataid_key[".googleLikeFields"][] = "sub_cate_ini";
$tdataid_key[".googleLikeFields"][] = "sex";


$tdataid_key[".advSearchFields"] = array();
$tdataid_key[".advSearchFields"][] = "category_id";
$tdataid_key[".advSearchFields"][] = "sub_category_id";
$tdataid_key[".advSearchFields"][] = "id_key";
$tdataid_key[".advSearchFields"][] = "product_id";
$tdataid_key[".advSearchFields"][] = "sub_cate_ini";
$tdataid_key[".advSearchFields"][] = "sex";

$tdataid_key[".tableType"] = "list";

$tdataid_key[".printerPageOrientation"] = 0;
$tdataid_key[".nPrinterPageScale"] = 100;

$tdataid_key[".nPrinterSplitRecords"] = 40;

$tdataid_key[".nPrinterPDFSplitRecords"] = 40;



$tdataid_key[".geocodingEnabled"] = false;





$tdataid_key[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataid_key[".pageSize"] = 20;

$tdataid_key[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataid_key[".strOrderBy"] = $tstrOrderBy;

$tdataid_key[".orderindexes"] = array();

$tdataid_key[".sqlHead"] = "SELECT category_id,  	sub_category_id,  	id_key,  	product_id,  	sub_cate_ini,  	sex";
$tdataid_key[".sqlFrom"] = "FROM id_key";
$tdataid_key[".sqlWhereExpr"] = "";
$tdataid_key[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataid_key[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataid_key[".arrGroupsPerPage"] = $arrGPP;

$tdataid_key[".highlightSearchResults"] = true;

$tableKeysid_key = array();
$tableKeysid_key[] = "category_id";
$tableKeysid_key[] = "sub_category_id";
$tableKeysid_key[] = "id_key";
$tdataid_key[".Keys"] = $tableKeysid_key;

$tdataid_key[".listFields"] = array();
$tdataid_key[".listFields"][] = "category_id";
$tdataid_key[".listFields"][] = "sub_category_id";
$tdataid_key[".listFields"][] = "id_key";
$tdataid_key[".listFields"][] = "product_id";
$tdataid_key[".listFields"][] = "sub_cate_ini";
$tdataid_key[".listFields"][] = "sex";

$tdataid_key[".hideMobileList"] = array();


$tdataid_key[".viewFields"] = array();

$tdataid_key[".addFields"] = array();

$tdataid_key[".masterListFields"] = array();
$tdataid_key[".masterListFields"][] = "category_id";
$tdataid_key[".masterListFields"][] = "sub_category_id";
$tdataid_key[".masterListFields"][] = "id_key";
$tdataid_key[".masterListFields"][] = "product_id";
$tdataid_key[".masterListFields"][] = "sub_cate_ini";
$tdataid_key[".masterListFields"][] = "sex";

$tdataid_key[".inlineAddFields"] = array();

$tdataid_key[".editFields"] = array();

$tdataid_key[".inlineEditFields"] = array();
$tdataid_key[".inlineEditFields"][] = "category_id";
$tdataid_key[".inlineEditFields"][] = "sub_category_id";
$tdataid_key[".inlineEditFields"][] = "product_id";
$tdataid_key[".inlineEditFields"][] = "sub_cate_ini";
$tdataid_key[".inlineEditFields"][] = "sex";

$tdataid_key[".updateSelectedFields"] = array();


$tdataid_key[".exportFields"] = array();

$tdataid_key[".importFields"] = array();

$tdataid_key[".printFields"] = array();

//	category_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "category_id";
	$fdata["GoodName"] = "category_id";
	$fdata["ownerTable"] = "id_key";
	$fdata["Label"] = GetFieldLabel("id_key","category_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdataid_key["category_id"] = $fdata;
//	sub_category_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "sub_category_id";
	$fdata["GoodName"] = "sub_category_id";
	$fdata["ownerTable"] = "id_key";
	$fdata["Label"] = GetFieldLabel("id_key","sub_category_id");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "sub_category_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sub_category_id";

	
	
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
			$edata["EditParams"].= " maxlength=12";

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




	$tdataid_key["sub_category_id"] = $fdata;
//	id_key
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "id_key";
	$fdata["GoodName"] = "id_key";
	$fdata["ownerTable"] = "id_key";
	$fdata["Label"] = GetFieldLabel("id_key","id_key");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "id_key";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_key";

	
	
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




	$tdataid_key["id_key"] = $fdata;
//	product_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "product_id";
	$fdata["GoodName"] = "product_id";
	$fdata["ownerTable"] = "id_key";
	$fdata["Label"] = GetFieldLabel("id_key","product_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "product_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "product_id";

	
	
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




	$tdataid_key["product_id"] = $fdata;
//	sub_cate_ini
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "sub_cate_ini";
	$fdata["GoodName"] = "sub_cate_ini";
	$fdata["ownerTable"] = "id_key";
	$fdata["Label"] = GetFieldLabel("id_key","sub_cate_ini");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "sub_cate_ini";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sub_cate_ini";

	
	
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
			$edata["EditParams"].= " maxlength=12";

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




	$tdataid_key["sub_cate_ini"] = $fdata;
//	sex
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "sex";
	$fdata["GoodName"] = "sex";
	$fdata["ownerTable"] = "id_key";
	$fdata["Label"] = GetFieldLabel("id_key","sex");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "sex";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sex";

	
	
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




	$tdataid_key["sex"] = $fdata;


$tables_data["id_key"]=&$tdataid_key;
$field_labels["id_key"] = &$fieldLabelsid_key;
$fieldToolTips["id_key"] = &$fieldToolTipsid_key;
$placeHolders["id_key"] = &$placeHoldersid_key;
$page_titles["id_key"] = &$pageTitlesid_key;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["id_key"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["id_key"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_id_key()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "category_id,  	sub_category_id,  	id_key,  	product_id,  	sub_cate_ini,  	sex";
$proto0["m_strFrom"] = "FROM id_key";
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
	"m_strName" => "category_id",
	"m_strTable" => "id_key",
	"m_srcTableName" => "id_key"
));

$proto6["m_sql"] = "category_id";
$proto6["m_srcTableName"] = "id_key";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "sub_category_id",
	"m_strTable" => "id_key",
	"m_srcTableName" => "id_key"
));

$proto8["m_sql"] = "sub_category_id";
$proto8["m_srcTableName"] = "id_key";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "id_key",
	"m_strTable" => "id_key",
	"m_srcTableName" => "id_key"
));

$proto10["m_sql"] = "id_key";
$proto10["m_srcTableName"] = "id_key";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "product_id",
	"m_strTable" => "id_key",
	"m_srcTableName" => "id_key"
));

$proto12["m_sql"] = "product_id";
$proto12["m_srcTableName"] = "id_key";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "sub_cate_ini",
	"m_strTable" => "id_key",
	"m_srcTableName" => "id_key"
));

$proto14["m_sql"] = "sub_cate_ini";
$proto14["m_srcTableName"] = "id_key";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "sex",
	"m_strTable" => "id_key",
	"m_srcTableName" => "id_key"
));

$proto16["m_sql"] = "sex";
$proto16["m_srcTableName"] = "id_key";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "id_key";
$proto19["m_srcTableName"] = "id_key";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "category_id";
$proto19["m_columns"][] = "sub_category_id";
$proto19["m_columns"][] = "id_key";
$proto19["m_columns"][] = "product_id";
$proto19["m_columns"][] = "sub_cate_ini";
$proto19["m_columns"][] = "sex";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "id_key";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "id_key";
$proto20=array();
$proto20["m_sql"] = "";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="id_key";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_id_key = createSqlQuery_id_key();


	
		;

						

$tdataid_key[".sqlquery"] = $queryData_id_key;

$tableEvents["id_key"] = new eventsBase;
$tdataid_key[".hasEvents"] = false;

?>