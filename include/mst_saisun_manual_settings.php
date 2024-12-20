<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamst_saisun_manual = array();
	$tdatamst_saisun_manual[".truncateText"] = true;
	$tdatamst_saisun_manual[".NumberOfChars"] = 80;
	$tdatamst_saisun_manual[".ShortName"] = "mst_saisun_manual";
	$tdatamst_saisun_manual[".OwnerID"] = "";
	$tdatamst_saisun_manual[".OriginalTable"] = "mst_saisun_manual";

//	field labels
$fieldLabelsmst_saisun_manual = array();
$fieldToolTipsmst_saisun_manual = array();
$pageTitlesmst_saisun_manual = array();
$placeHoldersmst_saisun_manual = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmst_saisun_manual["Japanese"] = array();
	$fieldToolTipsmst_saisun_manual["Japanese"] = array();
	$placeHoldersmst_saisun_manual["Japanese"] = array();
	$pageTitlesmst_saisun_manual["Japanese"] = array();
	$fieldLabelsmst_saisun_manual["Japanese"]["id"] = "Id";
	$fieldToolTipsmst_saisun_manual["Japanese"]["id"] = "";
	$placeHoldersmst_saisun_manual["Japanese"]["id"] = "";
	$fieldLabelsmst_saisun_manual["Japanese"]["update_by"] = "更新者";
	$fieldToolTipsmst_saisun_manual["Japanese"]["update_by"] = "";
	$placeHoldersmst_saisun_manual["Japanese"]["update_by"] = "";
	$fieldLabelsmst_saisun_manual["Japanese"]["update_at"] = "更新日";
	$fieldToolTipsmst_saisun_manual["Japanese"]["update_at"] = "";
	$placeHoldersmst_saisun_manual["Japanese"]["update_at"] = "";
	$fieldLabelsmst_saisun_manual["Japanese"]["create_by"] = "作成者";
	$fieldToolTipsmst_saisun_manual["Japanese"]["create_by"] = "";
	$placeHoldersmst_saisun_manual["Japanese"]["create_by"] = "";
	$fieldLabelsmst_saisun_manual["Japanese"]["create_at"] = "作成日";
	$fieldToolTipsmst_saisun_manual["Japanese"]["create_at"] = "";
	$placeHoldersmst_saisun_manual["Japanese"]["create_at"] = "";
	$fieldLabelsmst_saisun_manual["Japanese"]["category_id"] = "大カテゴリー";
	$fieldToolTipsmst_saisun_manual["Japanese"]["category_id"] = "";
	$placeHoldersmst_saisun_manual["Japanese"]["category_id"] = "";
	$fieldLabelsmst_saisun_manual["Japanese"]["product_num"] = "ブランドID";
	$fieldToolTipsmst_saisun_manual["Japanese"]["product_num"] = "";
	$placeHoldersmst_saisun_manual["Japanese"]["product_num"] = "";
	$fieldLabelsmst_saisun_manual["Japanese"]["text"] = "テキスト";
	$fieldToolTipsmst_saisun_manual["Japanese"]["text"] = "";
	$placeHoldersmst_saisun_manual["Japanese"]["text"] = "";
	if (count($fieldToolTipsmst_saisun_manual["Japanese"]))
		$tdatamst_saisun_manual[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmst_saisun_manual[""] = array();
	$fieldToolTipsmst_saisun_manual[""] = array();
	$placeHoldersmst_saisun_manual[""] = array();
	$pageTitlesmst_saisun_manual[""] = array();
	$fieldLabelsmst_saisun_manual[""]["id"] = "Id";
	$fieldToolTipsmst_saisun_manual[""]["id"] = "";
	$placeHoldersmst_saisun_manual[""]["id"] = "";
	$fieldLabelsmst_saisun_manual[""]["update_by"] = "Update By";
	$fieldToolTipsmst_saisun_manual[""]["update_by"] = "";
	$placeHoldersmst_saisun_manual[""]["update_by"] = "";
	$fieldLabelsmst_saisun_manual[""]["update_at"] = "Update At";
	$fieldToolTipsmst_saisun_manual[""]["update_at"] = "";
	$placeHoldersmst_saisun_manual[""]["update_at"] = "";
	$fieldLabelsmst_saisun_manual[""]["create_by"] = "Create By";
	$fieldToolTipsmst_saisun_manual[""]["create_by"] = "";
	$placeHoldersmst_saisun_manual[""]["create_by"] = "";
	$fieldLabelsmst_saisun_manual[""]["create_at"] = "Create At";
	$fieldToolTipsmst_saisun_manual[""]["create_at"] = "";
	$placeHoldersmst_saisun_manual[""]["create_at"] = "";
	$fieldLabelsmst_saisun_manual[""]["category_id"] = "Category Id";
	$fieldToolTipsmst_saisun_manual[""]["category_id"] = "";
	$placeHoldersmst_saisun_manual[""]["category_id"] = "";
	$fieldLabelsmst_saisun_manual[""]["product_num"] = "Product Num";
	$fieldToolTipsmst_saisun_manual[""]["product_num"] = "";
	$placeHoldersmst_saisun_manual[""]["product_num"] = "";
	$fieldLabelsmst_saisun_manual[""]["text"] = "Text";
	$fieldToolTipsmst_saisun_manual[""]["text"] = "";
	$placeHoldersmst_saisun_manual[""]["text"] = "";
	if (count($fieldToolTipsmst_saisun_manual[""]))
		$tdatamst_saisun_manual[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmst_saisun_manual["English"] = array();
	$fieldToolTipsmst_saisun_manual["English"] = array();
	$placeHoldersmst_saisun_manual["English"] = array();
	$pageTitlesmst_saisun_manual["English"] = array();
	$fieldLabelsmst_saisun_manual["English"]["id"] = "Id";
	$fieldToolTipsmst_saisun_manual["English"]["id"] = "";
	$placeHoldersmst_saisun_manual["English"]["id"] = "";
	$fieldLabelsmst_saisun_manual["English"]["update_by"] = "Update By";
	$fieldToolTipsmst_saisun_manual["English"]["update_by"] = "";
	$placeHoldersmst_saisun_manual["English"]["update_by"] = "";
	$fieldLabelsmst_saisun_manual["English"]["update_at"] = "Update At";
	$fieldToolTipsmst_saisun_manual["English"]["update_at"] = "";
	$placeHoldersmst_saisun_manual["English"]["update_at"] = "";
	$fieldLabelsmst_saisun_manual["English"]["create_by"] = "Create By";
	$fieldToolTipsmst_saisun_manual["English"]["create_by"] = "";
	$placeHoldersmst_saisun_manual["English"]["create_by"] = "";
	$fieldLabelsmst_saisun_manual["English"]["create_at"] = "Create At";
	$fieldToolTipsmst_saisun_manual["English"]["create_at"] = "";
	$placeHoldersmst_saisun_manual["English"]["create_at"] = "";
	$fieldLabelsmst_saisun_manual["English"]["category_id"] = "Category Id";
	$fieldToolTipsmst_saisun_manual["English"]["category_id"] = "";
	$placeHoldersmst_saisun_manual["English"]["category_id"] = "";
	$fieldLabelsmst_saisun_manual["English"]["product_num"] = "Product Num";
	$fieldToolTipsmst_saisun_manual["English"]["product_num"] = "";
	$placeHoldersmst_saisun_manual["English"]["product_num"] = "";
	$fieldLabelsmst_saisun_manual["English"]["text"] = "Text";
	$fieldToolTipsmst_saisun_manual["English"]["text"] = "";
	$placeHoldersmst_saisun_manual["English"]["text"] = "";
	if (count($fieldToolTipsmst_saisun_manual["English"]))
		$tdatamst_saisun_manual[".isUseToolTips"] = true;
}


	$tdatamst_saisun_manual[".NCSearch"] = true;



$tdatamst_saisun_manual[".shortTableName"] = "mst_saisun_manual";
$tdatamst_saisun_manual[".nSecOptions"] = 0;
$tdatamst_saisun_manual[".recsPerRowPrint"] = 1;
$tdatamst_saisun_manual[".mainTableOwnerID"] = "";
$tdatamst_saisun_manual[".moveNext"] = 1;
$tdatamst_saisun_manual[".entityType"] = 0;

$tdatamst_saisun_manual[".strOriginalTableName"] = "mst_saisun_manual";

	



$tdatamst_saisun_manual[".showAddInPopup"] = false;

$tdatamst_saisun_manual[".showEditInPopup"] = false;

$tdatamst_saisun_manual[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamst_saisun_manual[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamst_saisun_manual[".fieldsForRegister"] = array();

$tdatamst_saisun_manual[".listAjax"] = false;

	$tdatamst_saisun_manual[".audit"] = true;

	$tdatamst_saisun_manual[".locking"] = false;

$tdatamst_saisun_manual[".edit"] = true;
$tdatamst_saisun_manual[".afterEditAction"] = 1;
$tdatamst_saisun_manual[".closePopupAfterEdit"] = 1;
$tdatamst_saisun_manual[".afterEditActionDetTable"] = "";

$tdatamst_saisun_manual[".add"] = true;
$tdatamst_saisun_manual[".afterAddAction"] = 1;
$tdatamst_saisun_manual[".closePopupAfterAdd"] = 1;
$tdatamst_saisun_manual[".afterAddActionDetTable"] = "";

$tdatamst_saisun_manual[".list"] = true;

$tdatamst_saisun_manual[".inlineEdit"] = true;


$tdatamst_saisun_manual[".reorderRecordsByHeader"] = true;



$tdatamst_saisun_manual[".inlineAdd"] = true;

$tdatamst_saisun_manual[".import"] = true;

$tdatamst_saisun_manual[".exportTo"] = true;


$tdatamst_saisun_manual[".delete"] = true;

$tdatamst_saisun_manual[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamst_saisun_manual[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamst_saisun_manual[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamst_saisun_manual[".searchSaving"] = false;
//

$tdatamst_saisun_manual[".showSearchPanel"] = true;
		$tdatamst_saisun_manual[".flexibleSearch"] = true;

$tdatamst_saisun_manual[".isUseAjaxSuggest"] = true;

$tdatamst_saisun_manual[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatamst_saisun_manual[".ajaxCodeSnippetAdded"] = false;

$tdatamst_saisun_manual[".buttonsAdded"] = false;

$tdatamst_saisun_manual[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamst_saisun_manual[".isUseTimeForSearch"] = false;





$tdatamst_saisun_manual[".allSearchFields"] = array();
$tdatamst_saisun_manual[".filterFields"] = array();
$tdatamst_saisun_manual[".requiredSearchFields"] = array();

$tdatamst_saisun_manual[".allSearchFields"][] = "id";
	$tdatamst_saisun_manual[".allSearchFields"][] = "category_id";
	$tdatamst_saisun_manual[".allSearchFields"][] = "product_num";
	$tdatamst_saisun_manual[".allSearchFields"][] = "text";
	$tdatamst_saisun_manual[".allSearchFields"][] = "update_by";
	$tdatamst_saisun_manual[".allSearchFields"][] = "update_at";
	$tdatamst_saisun_manual[".allSearchFields"][] = "create_by";
	$tdatamst_saisun_manual[".allSearchFields"][] = "create_at";
	

$tdatamst_saisun_manual[".googleLikeFields"] = array();
$tdatamst_saisun_manual[".googleLikeFields"][] = "id";
$tdatamst_saisun_manual[".googleLikeFields"][] = "category_id";
$tdatamst_saisun_manual[".googleLikeFields"][] = "product_num";
$tdatamst_saisun_manual[".googleLikeFields"][] = "text";
$tdatamst_saisun_manual[".googleLikeFields"][] = "update_by";
$tdatamst_saisun_manual[".googleLikeFields"][] = "update_at";
$tdatamst_saisun_manual[".googleLikeFields"][] = "create_by";
$tdatamst_saisun_manual[".googleLikeFields"][] = "create_at";


$tdatamst_saisun_manual[".advSearchFields"] = array();
$tdatamst_saisun_manual[".advSearchFields"][] = "id";
$tdatamst_saisun_manual[".advSearchFields"][] = "category_id";
$tdatamst_saisun_manual[".advSearchFields"][] = "product_num";
$tdatamst_saisun_manual[".advSearchFields"][] = "text";
$tdatamst_saisun_manual[".advSearchFields"][] = "update_by";
$tdatamst_saisun_manual[".advSearchFields"][] = "update_at";
$tdatamst_saisun_manual[".advSearchFields"][] = "create_by";
$tdatamst_saisun_manual[".advSearchFields"][] = "create_at";

$tdatamst_saisun_manual[".tableType"] = "list";

$tdatamst_saisun_manual[".printerPageOrientation"] = 0;
$tdatamst_saisun_manual[".nPrinterPageScale"] = 100;

$tdatamst_saisun_manual[".nPrinterSplitRecords"] = 40;

$tdatamst_saisun_manual[".nPrinterPDFSplitRecords"] = 40;



$tdatamst_saisun_manual[".geocodingEnabled"] = false;





$tdatamst_saisun_manual[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamst_saisun_manual[".pageSize"] = 20;

$tdatamst_saisun_manual[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamst_saisun_manual[".strOrderBy"] = $tstrOrderBy;

$tdatamst_saisun_manual[".orderindexes"] = array();

$tdatamst_saisun_manual[".sqlHead"] = "SELECT `id`,  `category_id`,  `product_num`,  `text`,  `update_by`,  `update_at`,  `create_by`,  `create_at`";
$tdatamst_saisun_manual[".sqlFrom"] = "FROM `mst_saisun_manual`";
$tdatamst_saisun_manual[".sqlWhereExpr"] = "";
$tdatamst_saisun_manual[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamst_saisun_manual[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamst_saisun_manual[".arrGroupsPerPage"] = $arrGPP;

$tdatamst_saisun_manual[".highlightSearchResults"] = true;

$tableKeysmst_saisun_manual = array();
$tableKeysmst_saisun_manual[] = "id";
$tdatamst_saisun_manual[".Keys"] = $tableKeysmst_saisun_manual;

$tdatamst_saisun_manual[".listFields"] = array();
$tdatamst_saisun_manual[".listFields"][] = "id";
$tdatamst_saisun_manual[".listFields"][] = "category_id";
$tdatamst_saisun_manual[".listFields"][] = "product_num";
$tdatamst_saisun_manual[".listFields"][] = "text";
$tdatamst_saisun_manual[".listFields"][] = "update_by";
$tdatamst_saisun_manual[".listFields"][] = "update_at";
$tdatamst_saisun_manual[".listFields"][] = "create_by";
$tdatamst_saisun_manual[".listFields"][] = "create_at";

$tdatamst_saisun_manual[".hideMobileList"] = array();


$tdatamst_saisun_manual[".viewFields"] = array();

$tdatamst_saisun_manual[".addFields"] = array();
$tdatamst_saisun_manual[".addFields"][] = "category_id";
$tdatamst_saisun_manual[".addFields"][] = "product_num";
$tdatamst_saisun_manual[".addFields"][] = "text";

$tdatamst_saisun_manual[".masterListFields"] = array();
$tdatamst_saisun_manual[".masterListFields"][] = "id";
$tdatamst_saisun_manual[".masterListFields"][] = "category_id";
$tdatamst_saisun_manual[".masterListFields"][] = "product_num";
$tdatamst_saisun_manual[".masterListFields"][] = "text";
$tdatamst_saisun_manual[".masterListFields"][] = "update_by";
$tdatamst_saisun_manual[".masterListFields"][] = "update_at";
$tdatamst_saisun_manual[".masterListFields"][] = "create_by";
$tdatamst_saisun_manual[".masterListFields"][] = "create_at";

$tdatamst_saisun_manual[".inlineAddFields"] = array();
$tdatamst_saisun_manual[".inlineAddFields"][] = "category_id";
$tdatamst_saisun_manual[".inlineAddFields"][] = "product_num";
$tdatamst_saisun_manual[".inlineAddFields"][] = "text";

$tdatamst_saisun_manual[".editFields"] = array();
$tdatamst_saisun_manual[".editFields"][] = "category_id";
$tdatamst_saisun_manual[".editFields"][] = "product_num";
$tdatamst_saisun_manual[".editFields"][] = "text";

$tdatamst_saisun_manual[".inlineEditFields"] = array();
$tdatamst_saisun_manual[".inlineEditFields"][] = "category_id";
$tdatamst_saisun_manual[".inlineEditFields"][] = "product_num";
$tdatamst_saisun_manual[".inlineEditFields"][] = "text";

$tdatamst_saisun_manual[".updateSelectedFields"] = array();
$tdatamst_saisun_manual[".updateSelectedFields"][] = "category_id";
$tdatamst_saisun_manual[".updateSelectedFields"][] = "product_num";
$tdatamst_saisun_manual[".updateSelectedFields"][] = "text";


$tdatamst_saisun_manual[".exportFields"] = array();
$tdatamst_saisun_manual[".exportFields"][] = "id";
$tdatamst_saisun_manual[".exportFields"][] = "category_id";
$tdatamst_saisun_manual[".exportFields"][] = "product_num";
$tdatamst_saisun_manual[".exportFields"][] = "text";
$tdatamst_saisun_manual[".exportFields"][] = "update_by";
$tdatamst_saisun_manual[".exportFields"][] = "update_at";
$tdatamst_saisun_manual[".exportFields"][] = "create_by";
$tdatamst_saisun_manual[".exportFields"][] = "create_at";

$tdatamst_saisun_manual[".importFields"] = array();
$tdatamst_saisun_manual[".importFields"][] = "id";
$tdatamst_saisun_manual[".importFields"][] = "category_id";
$tdatamst_saisun_manual[".importFields"][] = "product_num";
$tdatamst_saisun_manual[".importFields"][] = "text";

$tdatamst_saisun_manual[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "mst_saisun_manual";
	$fdata["Label"] = GetFieldLabel("mst_saisun_manual","id");
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




	$tdatamst_saisun_manual["id"] = $fdata;
//	category_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "category_id";
	$fdata["GoodName"] = "category_id";
	$fdata["ownerTable"] = "mst_saisun_manual";
	$fdata["Label"] = GetFieldLabel("mst_saisun_manual","category_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "category_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`category_id`";

	
	
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




	$tdatamst_saisun_manual["category_id"] = $fdata;
//	product_num
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "product_num";
	$fdata["GoodName"] = "product_num";
	$fdata["ownerTable"] = "mst_saisun_manual";
	$fdata["Label"] = GetFieldLabel("mst_saisun_manual","product_num");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "product_num";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`product_num`";

	
	
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

	
		
	$edata["LinkField"] = "id";
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




	$tdatamst_saisun_manual["product_num"] = $fdata;
//	text
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "text";
	$fdata["GoodName"] = "text";
	$fdata["ownerTable"] = "mst_saisun_manual";
	$fdata["Label"] = GetFieldLabel("mst_saisun_manual","text");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "text";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`text`";

	
	
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




	$tdatamst_saisun_manual["text"] = $fdata;
//	update_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "update_by";
	$fdata["GoodName"] = "update_by";
	$fdata["ownerTable"] = "mst_saisun_manual";
	$fdata["Label"] = GetFieldLabel("mst_saisun_manual","update_by");
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




	$tdatamst_saisun_manual["update_by"] = $fdata;
//	update_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "update_at";
	$fdata["GoodName"] = "update_at";
	$fdata["ownerTable"] = "mst_saisun_manual";
	$fdata["Label"] = GetFieldLabel("mst_saisun_manual","update_at");
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




	$tdatamst_saisun_manual["update_at"] = $fdata;
//	create_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "create_by";
	$fdata["GoodName"] = "create_by";
	$fdata["ownerTable"] = "mst_saisun_manual";
	$fdata["Label"] = GetFieldLabel("mst_saisun_manual","create_by");
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




	$tdatamst_saisun_manual["create_by"] = $fdata;
//	create_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "create_at";
	$fdata["GoodName"] = "create_at";
	$fdata["ownerTable"] = "mst_saisun_manual";
	$fdata["Label"] = GetFieldLabel("mst_saisun_manual","create_at");
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




	$tdatamst_saisun_manual["create_at"] = $fdata;


$tables_data["mst_saisun_manual"]=&$tdatamst_saisun_manual;
$field_labels["mst_saisun_manual"] = &$fieldLabelsmst_saisun_manual;
$fieldToolTips["mst_saisun_manual"] = &$fieldToolTipsmst_saisun_manual;
$placeHolders["mst_saisun_manual"] = &$placeHoldersmst_saisun_manual;
$page_titles["mst_saisun_manual"] = &$pageTitlesmst_saisun_manual;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mst_saisun_manual"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mst_saisun_manual"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mst_saisun_manual()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  `category_id`,  `product_num`,  `text`,  `update_by`,  `update_at`,  `create_by`,  `create_at`";
$proto0["m_strFrom"] = "FROM `mst_saisun_manual`";
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
	"m_strTable" => "mst_saisun_manual",
	"m_srcTableName" => "mst_saisun_manual"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "mst_saisun_manual";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "category_id",
	"m_strTable" => "mst_saisun_manual",
	"m_srcTableName" => "mst_saisun_manual"
));

$proto8["m_sql"] = "`category_id`";
$proto8["m_srcTableName"] = "mst_saisun_manual";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "product_num",
	"m_strTable" => "mst_saisun_manual",
	"m_srcTableName" => "mst_saisun_manual"
));

$proto10["m_sql"] = "`product_num`";
$proto10["m_srcTableName"] = "mst_saisun_manual";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "text",
	"m_strTable" => "mst_saisun_manual",
	"m_srcTableName" => "mst_saisun_manual"
));

$proto12["m_sql"] = "`text`";
$proto12["m_srcTableName"] = "mst_saisun_manual";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "update_by",
	"m_strTable" => "mst_saisun_manual",
	"m_srcTableName" => "mst_saisun_manual"
));

$proto14["m_sql"] = "`update_by`";
$proto14["m_srcTableName"] = "mst_saisun_manual";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "update_at",
	"m_strTable" => "mst_saisun_manual",
	"m_srcTableName" => "mst_saisun_manual"
));

$proto16["m_sql"] = "`update_at`";
$proto16["m_srcTableName"] = "mst_saisun_manual";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "create_by",
	"m_strTable" => "mst_saisun_manual",
	"m_srcTableName" => "mst_saisun_manual"
));

$proto18["m_sql"] = "`create_by`";
$proto18["m_srcTableName"] = "mst_saisun_manual";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "create_at",
	"m_strTable" => "mst_saisun_manual",
	"m_srcTableName" => "mst_saisun_manual"
));

$proto20["m_sql"] = "`create_at`";
$proto20["m_srcTableName"] = "mst_saisun_manual";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "mst_saisun_manual";
$proto23["m_srcTableName"] = "mst_saisun_manual";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "id";
$proto23["m_columns"][] = "update_by";
$proto23["m_columns"][] = "update_at";
$proto23["m_columns"][] = "create_by";
$proto23["m_columns"][] = "create_at";
$proto23["m_columns"][] = "category_id";
$proto23["m_columns"][] = "product_num";
$proto23["m_columns"][] = "text";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "`mst_saisun_manual`";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "mst_saisun_manual";
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
$proto0["m_srcTableName"]="mst_saisun_manual";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mst_saisun_manual = createSqlQuery_mst_saisun_manual();


	
		;

								

$tdatamst_saisun_manual[".sqlquery"] = $queryData_mst_saisun_manual;

include_once(getabspath("include/mst_saisun_manual_events.php"));
$tableEvents["mst_saisun_manual"] = new eventclass_mst_saisun_manual;
$tdatamst_saisun_manual[".hasEvents"] = true;

?>