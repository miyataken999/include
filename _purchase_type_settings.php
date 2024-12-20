<?php
require_once(getabspath("classes/cipherer.php"));




$tdata_purchase_type = array();
	$tdata_purchase_type[".truncateText"] = true;
	$tdata_purchase_type[".NumberOfChars"] = 80;
	$tdata_purchase_type[".ShortName"] = "_purchase_type";
	$tdata_purchase_type[".OwnerID"] = "";
	$tdata_purchase_type[".OriginalTable"] = "_purchase_type";

//	field labels
$fieldLabels_purchase_type = array();
$fieldToolTips_purchase_type = array();
$pageTitles_purchase_type = array();
$placeHolders_purchase_type = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabels_purchase_type["Japanese"] = array();
	$fieldToolTips_purchase_type["Japanese"] = array();
	$placeHolders_purchase_type["Japanese"] = array();
	$pageTitles_purchase_type["Japanese"] = array();
	$fieldLabels_purchase_type["Japanese"]["purchase_id"] = "Purchase Id";
	$fieldToolTips_purchase_type["Japanese"]["purchase_id"] = "";
	$placeHolders_purchase_type["Japanese"]["purchase_id"] = "";
	$fieldLabels_purchase_type["Japanese"]["purchase_name"] = "Purchase Name";
	$fieldToolTips_purchase_type["Japanese"]["purchase_name"] = "";
	$placeHolders_purchase_type["Japanese"]["purchase_name"] = "";
	$fieldLabels_purchase_type["Japanese"]["purchaze_type"] = "Purchaze Type";
	$fieldToolTips_purchase_type["Japanese"]["purchaze_type"] = "";
	$placeHolders_purchase_type["Japanese"]["purchaze_type"] = "";
	$fieldLabels_purchase_type["Japanese"]["sorter"] = "Sorter";
	$fieldToolTips_purchase_type["Japanese"]["sorter"] = "";
	$placeHolders_purchase_type["Japanese"]["sorter"] = "";
	$fieldLabels_purchase_type["Japanese"]["supplementary_subject"] = "補助科目";
	$fieldToolTips_purchase_type["Japanese"]["supplementary_subject"] = "";
	$placeHolders_purchase_type["Japanese"]["supplementary_subject"] = "";
	$fieldLabels_purchase_type["Japanese"]["group"] = "部門";
	$fieldToolTips_purchase_type["Japanese"]["group"] = "";
	$placeHolders_purchase_type["Japanese"]["group"] = "";
	$fieldLabels_purchase_type["Japanese"]["update_by"] = "更新者";
	$fieldToolTips_purchase_type["Japanese"]["update_by"] = "";
	$placeHolders_purchase_type["Japanese"]["update_by"] = "";
	$fieldLabels_purchase_type["Japanese"]["update_at"] = "更新日";
	$fieldToolTips_purchase_type["Japanese"]["update_at"] = "";
	$placeHolders_purchase_type["Japanese"]["update_at"] = "";
	$fieldLabels_purchase_type["Japanese"]["create_by"] = "登録者";
	$fieldToolTips_purchase_type["Japanese"]["create_by"] = "";
	$placeHolders_purchase_type["Japanese"]["create_by"] = "";
	$fieldLabels_purchase_type["Japanese"]["create_at"] = "登録日";
	$fieldToolTips_purchase_type["Japanese"]["create_at"] = "";
	$placeHolders_purchase_type["Japanese"]["create_at"] = "";
	$fieldLabels_purchase_type["Japanese"]["category"] = "Category";
	$fieldToolTips_purchase_type["Japanese"]["category"] = "";
	$placeHolders_purchase_type["Japanese"]["category"] = "";
	if (count($fieldToolTips_purchase_type["Japanese"]))
		$tdata_purchase_type[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabels_purchase_type[""] = array();
	$fieldToolTips_purchase_type[""] = array();
	$placeHolders_purchase_type[""] = array();
	$pageTitles_purchase_type[""] = array();
	$fieldLabels_purchase_type[""]["purchase_id"] = "Purchase Id";
	$fieldToolTips_purchase_type[""]["purchase_id"] = "";
	$placeHolders_purchase_type[""]["purchase_id"] = "";
	$fieldLabels_purchase_type[""]["purchase_name"] = "Purchase Name";
	$fieldToolTips_purchase_type[""]["purchase_name"] = "";
	$placeHolders_purchase_type[""]["purchase_name"] = "";
	$fieldLabels_purchase_type[""]["purchaze_type"] = "Purchaze Type";
	$fieldToolTips_purchase_type[""]["purchaze_type"] = "";
	$placeHolders_purchase_type[""]["purchaze_type"] = "";
	$fieldLabels_purchase_type[""]["sorter"] = "Sorter";
	$fieldToolTips_purchase_type[""]["sorter"] = "";
	$placeHolders_purchase_type[""]["sorter"] = "";
	$fieldLabels_purchase_type[""]["supplementary_subject"] = "Supplementary Subject";
	$fieldToolTips_purchase_type[""]["supplementary_subject"] = "";
	$placeHolders_purchase_type[""]["supplementary_subject"] = "";
	$fieldLabels_purchase_type[""]["group"] = "Group";
	$fieldToolTips_purchase_type[""]["group"] = "";
	$placeHolders_purchase_type[""]["group"] = "";
	$fieldLabels_purchase_type[""]["update_by"] = "Update By";
	$fieldToolTips_purchase_type[""]["update_by"] = "";
	$placeHolders_purchase_type[""]["update_by"] = "";
	$fieldLabels_purchase_type[""]["update_at"] = "Update At";
	$fieldToolTips_purchase_type[""]["update_at"] = "";
	$placeHolders_purchase_type[""]["update_at"] = "";
	$fieldLabels_purchase_type[""]["create_by"] = "Create By";
	$fieldToolTips_purchase_type[""]["create_by"] = "";
	$placeHolders_purchase_type[""]["create_by"] = "";
	$fieldLabels_purchase_type[""]["create_at"] = "Create At";
	$fieldToolTips_purchase_type[""]["create_at"] = "";
	$placeHolders_purchase_type[""]["create_at"] = "";
	$fieldLabels_purchase_type[""]["category"] = "Category";
	$fieldToolTips_purchase_type[""]["category"] = "";
	$placeHolders_purchase_type[""]["category"] = "";
	if (count($fieldToolTips_purchase_type[""]))
		$tdata_purchase_type[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabels_purchase_type["English"] = array();
	$fieldToolTips_purchase_type["English"] = array();
	$placeHolders_purchase_type["English"] = array();
	$pageTitles_purchase_type["English"] = array();
	$fieldLabels_purchase_type["English"]["purchase_id"] = "Purchase Id";
	$fieldToolTips_purchase_type["English"]["purchase_id"] = "";
	$placeHolders_purchase_type["English"]["purchase_id"] = "";
	$fieldLabels_purchase_type["English"]["purchase_name"] = "Purchase Name";
	$fieldToolTips_purchase_type["English"]["purchase_name"] = "";
	$placeHolders_purchase_type["English"]["purchase_name"] = "";
	$fieldLabels_purchase_type["English"]["purchaze_type"] = "Purchaze Type";
	$fieldToolTips_purchase_type["English"]["purchaze_type"] = "";
	$placeHolders_purchase_type["English"]["purchaze_type"] = "";
	$fieldLabels_purchase_type["English"]["sorter"] = "Sorter";
	$fieldToolTips_purchase_type["English"]["sorter"] = "";
	$placeHolders_purchase_type["English"]["sorter"] = "";
	$fieldLabels_purchase_type["English"]["supplementary_subject"] = "Supplementary Subject";
	$fieldToolTips_purchase_type["English"]["supplementary_subject"] = "";
	$placeHolders_purchase_type["English"]["supplementary_subject"] = "";
	$fieldLabels_purchase_type["English"]["group"] = "Group";
	$fieldToolTips_purchase_type["English"]["group"] = "";
	$placeHolders_purchase_type["English"]["group"] = "";
	$fieldLabels_purchase_type["English"]["update_by"] = "Update By";
	$fieldToolTips_purchase_type["English"]["update_by"] = "";
	$placeHolders_purchase_type["English"]["update_by"] = "";
	$fieldLabels_purchase_type["English"]["update_at"] = "Update At";
	$fieldToolTips_purchase_type["English"]["update_at"] = "";
	$placeHolders_purchase_type["English"]["update_at"] = "";
	$fieldLabels_purchase_type["English"]["create_by"] = "Create By";
	$fieldToolTips_purchase_type["English"]["create_by"] = "";
	$placeHolders_purchase_type["English"]["create_by"] = "";
	$fieldLabels_purchase_type["English"]["create_at"] = "Create At";
	$fieldToolTips_purchase_type["English"]["create_at"] = "";
	$placeHolders_purchase_type["English"]["create_at"] = "";
	$fieldLabels_purchase_type["English"]["category"] = "Category";
	$fieldToolTips_purchase_type["English"]["category"] = "";
	$placeHolders_purchase_type["English"]["category"] = "";
	if (count($fieldToolTips_purchase_type["English"]))
		$tdata_purchase_type[".isUseToolTips"] = true;
}


	$tdata_purchase_type[".NCSearch"] = true;



$tdata_purchase_type[".shortTableName"] = "_purchase_type";
$tdata_purchase_type[".nSecOptions"] = 0;
$tdata_purchase_type[".recsPerRowPrint"] = 1;
$tdata_purchase_type[".mainTableOwnerID"] = "";
$tdata_purchase_type[".moveNext"] = 1;
$tdata_purchase_type[".entityType"] = 0;

$tdata_purchase_type[".strOriginalTableName"] = "_purchase_type";

	



$tdata_purchase_type[".showAddInPopup"] = false;

$tdata_purchase_type[".showEditInPopup"] = false;

$tdata_purchase_type[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdata_purchase_type[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdata_purchase_type[".fieldsForRegister"] = array();

$tdata_purchase_type[".listAjax"] = false;

	$tdata_purchase_type[".audit"] = true;

	$tdata_purchase_type[".locking"] = false;



$tdata_purchase_type[".list"] = true;

$tdata_purchase_type[".inlineEdit"] = true;


$tdata_purchase_type[".reorderRecordsByHeader"] = true;



$tdata_purchase_type[".inlineAdd"] = true;

$tdata_purchase_type[".import"] = true;

$tdata_purchase_type[".exportTo"] = true;


$tdata_purchase_type[".delete"] = true;

$tdata_purchase_type[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdata_purchase_type[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdata_purchase_type[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdata_purchase_type[".searchSaving"] = false;
//

$tdata_purchase_type[".showSearchPanel"] = true;
		$tdata_purchase_type[".flexibleSearch"] = true;

$tdata_purchase_type[".isUseAjaxSuggest"] = true;

$tdata_purchase_type[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdata_purchase_type[".ajaxCodeSnippetAdded"] = false;

$tdata_purchase_type[".buttonsAdded"] = false;

$tdata_purchase_type[".addPageEvents"] = false;

// use timepicker for search panel
$tdata_purchase_type[".isUseTimeForSearch"] = false;





$tdata_purchase_type[".allSearchFields"] = array();
$tdata_purchase_type[".filterFields"] = array();
$tdata_purchase_type[".requiredSearchFields"] = array();

$tdata_purchase_type[".allSearchFields"][] = "category";
	$tdata_purchase_type[".allSearchFields"][] = "purchase_id";
	$tdata_purchase_type[".allSearchFields"][] = "purchase_name";
	$tdata_purchase_type[".allSearchFields"][] = "purchaze_type";
	$tdata_purchase_type[".allSearchFields"][] = "sorter";
	$tdata_purchase_type[".allSearchFields"][] = "supplementary_subject";
	$tdata_purchase_type[".allSearchFields"][] = "update_by";
	$tdata_purchase_type[".allSearchFields"][] = "update_at";
	$tdata_purchase_type[".allSearchFields"][] = "create_by";
	$tdata_purchase_type[".allSearchFields"][] = "create_at";
	

$tdata_purchase_type[".googleLikeFields"] = array();
$tdata_purchase_type[".googleLikeFields"][] = "purchase_id";
$tdata_purchase_type[".googleLikeFields"][] = "purchase_name";
$tdata_purchase_type[".googleLikeFields"][] = "purchaze_type";
$tdata_purchase_type[".googleLikeFields"][] = "sorter";
$tdata_purchase_type[".googleLikeFields"][] = "supplementary_subject";
$tdata_purchase_type[".googleLikeFields"][] = "group";
$tdata_purchase_type[".googleLikeFields"][] = "update_by";
$tdata_purchase_type[".googleLikeFields"][] = "update_at";
$tdata_purchase_type[".googleLikeFields"][] = "create_by";
$tdata_purchase_type[".googleLikeFields"][] = "create_at";
$tdata_purchase_type[".googleLikeFields"][] = "category";


$tdata_purchase_type[".advSearchFields"] = array();
$tdata_purchase_type[".advSearchFields"][] = "category";
$tdata_purchase_type[".advSearchFields"][] = "purchase_id";
$tdata_purchase_type[".advSearchFields"][] = "purchase_name";
$tdata_purchase_type[".advSearchFields"][] = "purchaze_type";
$tdata_purchase_type[".advSearchFields"][] = "sorter";
$tdata_purchase_type[".advSearchFields"][] = "supplementary_subject";
$tdata_purchase_type[".advSearchFields"][] = "update_by";
$tdata_purchase_type[".advSearchFields"][] = "update_at";
$tdata_purchase_type[".advSearchFields"][] = "create_by";
$tdata_purchase_type[".advSearchFields"][] = "create_at";

$tdata_purchase_type[".tableType"] = "list";

$tdata_purchase_type[".printerPageOrientation"] = 0;
$tdata_purchase_type[".nPrinterPageScale"] = 100;

$tdata_purchase_type[".nPrinterSplitRecords"] = 40;

$tdata_purchase_type[".nPrinterPDFSplitRecords"] = 40;



$tdata_purchase_type[".geocodingEnabled"] = false;





$tdata_purchase_type[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdata_purchase_type[".pageSize"] = 100;

$tdata_purchase_type[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdata_purchase_type[".strOrderBy"] = $tstrOrderBy;

$tdata_purchase_type[".orderindexes"] = array();

$tdata_purchase_type[".sqlHead"] = "SELECT `purchase_id`,  `purchase_name`,  `purchaze_type`,  `sorter`,  `supplementary_subject`,  `group`,  `update_by`,  `update_at`,  `create_by`,  `create_at`,  `category`";
$tdata_purchase_type[".sqlFrom"] = "FROM `_purchase_type`";
$tdata_purchase_type[".sqlWhereExpr"] = "";
$tdata_purchase_type[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdata_purchase_type[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdata_purchase_type[".arrGroupsPerPage"] = $arrGPP;

$tdata_purchase_type[".highlightSearchResults"] = true;

$tableKeys_purchase_type = array();
$tableKeys_purchase_type[] = "purchase_id";
$tdata_purchase_type[".Keys"] = $tableKeys_purchase_type;

$tdata_purchase_type[".listFields"] = array();
$tdata_purchase_type[".listFields"][] = "purchase_id";
$tdata_purchase_type[".listFields"][] = "purchase_name";
$tdata_purchase_type[".listFields"][] = "purchaze_type";
$tdata_purchase_type[".listFields"][] = "sorter";
$tdata_purchase_type[".listFields"][] = "supplementary_subject";
$tdata_purchase_type[".listFields"][] = "category";
$tdata_purchase_type[".listFields"][] = "update_by";
$tdata_purchase_type[".listFields"][] = "update_at";
$tdata_purchase_type[".listFields"][] = "create_by";
$tdata_purchase_type[".listFields"][] = "create_at";

$tdata_purchase_type[".hideMobileList"] = array();


$tdata_purchase_type[".viewFields"] = array();

$tdata_purchase_type[".addFields"] = array();

$tdata_purchase_type[".masterListFields"] = array();
$tdata_purchase_type[".masterListFields"][] = "purchase_id";
$tdata_purchase_type[".masterListFields"][] = "purchase_name";
$tdata_purchase_type[".masterListFields"][] = "purchaze_type";
$tdata_purchase_type[".masterListFields"][] = "sorter";
$tdata_purchase_type[".masterListFields"][] = "supplementary_subject";
$tdata_purchase_type[".masterListFields"][] = "group";
$tdata_purchase_type[".masterListFields"][] = "update_by";
$tdata_purchase_type[".masterListFields"][] = "update_at";
$tdata_purchase_type[".masterListFields"][] = "create_by";
$tdata_purchase_type[".masterListFields"][] = "create_at";
$tdata_purchase_type[".masterListFields"][] = "category";

$tdata_purchase_type[".inlineAddFields"] = array();
$tdata_purchase_type[".inlineAddFields"][] = "purchase_name";
$tdata_purchase_type[".inlineAddFields"][] = "purchaze_type";
$tdata_purchase_type[".inlineAddFields"][] = "sorter";
$tdata_purchase_type[".inlineAddFields"][] = "supplementary_subject";
$tdata_purchase_type[".inlineAddFields"][] = "category";

$tdata_purchase_type[".editFields"] = array();

$tdata_purchase_type[".inlineEditFields"] = array();
$tdata_purchase_type[".inlineEditFields"][] = "purchase_name";
$tdata_purchase_type[".inlineEditFields"][] = "purchaze_type";
$tdata_purchase_type[".inlineEditFields"][] = "sorter";
$tdata_purchase_type[".inlineEditFields"][] = "supplementary_subject";
$tdata_purchase_type[".inlineEditFields"][] = "category";

$tdata_purchase_type[".updateSelectedFields"] = array();


$tdata_purchase_type[".exportFields"] = array();
$tdata_purchase_type[".exportFields"][] = "category";
$tdata_purchase_type[".exportFields"][] = "purchase_id";
$tdata_purchase_type[".exportFields"][] = "purchase_name";
$tdata_purchase_type[".exportFields"][] = "purchaze_type";
$tdata_purchase_type[".exportFields"][] = "sorter";
$tdata_purchase_type[".exportFields"][] = "supplementary_subject";
$tdata_purchase_type[".exportFields"][] = "update_by";
$tdata_purchase_type[".exportFields"][] = "update_at";
$tdata_purchase_type[".exportFields"][] = "create_by";
$tdata_purchase_type[".exportFields"][] = "create_at";

$tdata_purchase_type[".importFields"] = array();
$tdata_purchase_type[".importFields"][] = "purchase_id";
$tdata_purchase_type[".importFields"][] = "purchase_name";
$tdata_purchase_type[".importFields"][] = "purchaze_type";
$tdata_purchase_type[".importFields"][] = "sorter";
$tdata_purchase_type[".importFields"][] = "supplementary_subject";
$tdata_purchase_type[".importFields"][] = "category";

$tdata_purchase_type[".printFields"] = array();

//	purchase_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "purchase_id";
	$fdata["GoodName"] = "purchase_id";
	$fdata["ownerTable"] = "_purchase_type";
	$fdata["Label"] = GetFieldLabel("_purchase_type","purchase_id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "purchase_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`purchase_id`";

	
	
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




	$tdata_purchase_type["purchase_id"] = $fdata;
//	purchase_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "purchase_name";
	$fdata["GoodName"] = "purchase_name";
	$fdata["ownerTable"] = "_purchase_type";
	$fdata["Label"] = GetFieldLabel("_purchase_type","purchase_name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "purchase_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`purchase_name`";

	
	
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
			$edata["EditParams"].= " maxlength=32";

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




	$tdata_purchase_type["purchase_name"] = $fdata;
//	purchaze_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "purchaze_type";
	$fdata["GoodName"] = "purchaze_type";
	$fdata["ownerTable"] = "_purchase_type";
	$fdata["Label"] = GetFieldLabel("_purchase_type","purchaze_type");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "purchaze_type";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`purchaze_type`";

	
	
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
			$edata["EditParams"].= " maxlength=32";

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




	$tdata_purchase_type["purchaze_type"] = $fdata;
//	sorter
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "sorter";
	$fdata["GoodName"] = "sorter";
	$fdata["ownerTable"] = "_purchase_type";
	$fdata["Label"] = GetFieldLabel("_purchase_type","sorter");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "sorter";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`sorter`";

	
	
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




	$tdata_purchase_type["sorter"] = $fdata;
//	supplementary_subject
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "supplementary_subject";
	$fdata["GoodName"] = "supplementary_subject";
	$fdata["ownerTable"] = "_purchase_type";
	$fdata["Label"] = GetFieldLabel("_purchase_type","supplementary_subject");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "supplementary_subject";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`supplementary_subject`";

	
	
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
	$edata["LookupTable"] = "mst_journal_supplementary_subject";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "name";
	$edata["LinkFieldType"] = 200;
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




	$tdata_purchase_type["supplementary_subject"] = $fdata;
//	group
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "group";
	$fdata["GoodName"] = "group";
	$fdata["ownerTable"] = "_purchase_type";
	$fdata["Label"] = GetFieldLabel("_purchase_type","group");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "group";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`group`";

	
	
			
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
	$edata["LookupTable"] = "mst_journal_group";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "name";
	$edata["LinkFieldType"] = 200;
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








	$tdata_purchase_type["group"] = $fdata;
//	update_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "update_by";
	$fdata["GoodName"] = "update_by";
	$fdata["ownerTable"] = "_purchase_type";
	$fdata["Label"] = GetFieldLabel("_purchase_type","update_by");
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




	$tdata_purchase_type["update_by"] = $fdata;
//	update_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "update_at";
	$fdata["GoodName"] = "update_at";
	$fdata["ownerTable"] = "_purchase_type";
	$fdata["Label"] = GetFieldLabel("_purchase_type","update_at");
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




	$tdata_purchase_type["update_at"] = $fdata;
//	create_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "create_by";
	$fdata["GoodName"] = "create_by";
	$fdata["ownerTable"] = "_purchase_type";
	$fdata["Label"] = GetFieldLabel("_purchase_type","create_by");
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




	$tdata_purchase_type["create_by"] = $fdata;
//	create_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "create_at";
	$fdata["GoodName"] = "create_at";
	$fdata["ownerTable"] = "_purchase_type";
	$fdata["Label"] = GetFieldLabel("_purchase_type","create_at");
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




	$tdata_purchase_type["create_at"] = $fdata;
//	category
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "category";
	$fdata["GoodName"] = "category";
	$fdata["ownerTable"] = "_purchase_type";
	$fdata["Label"] = GetFieldLabel("_purchase_type","category");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "category";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`category`";

	
	
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
		$edata["LookupType"] = 0;
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "K";
	$edata["LookupValues"][] = "D";
	$edata["LookupValues"][] = "B";

	
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




	$tdata_purchase_type["category"] = $fdata;


$tables_data["_purchase_type"]=&$tdata_purchase_type;
$field_labels["_purchase_type"] = &$fieldLabels_purchase_type;
$fieldToolTips["_purchase_type"] = &$fieldToolTips_purchase_type;
$placeHolders["_purchase_type"] = &$placeHolders_purchase_type;
$page_titles["_purchase_type"] = &$pageTitles_purchase_type;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["_purchase_type"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["_purchase_type"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery__purchase_type()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`purchase_id`,  `purchase_name`,  `purchaze_type`,  `sorter`,  `supplementary_subject`,  `group`,  `update_by`,  `update_at`,  `create_by`,  `create_at`,  `category`";
$proto0["m_strFrom"] = "FROM `_purchase_type`";
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
	"m_strName" => "purchase_id",
	"m_strTable" => "_purchase_type",
	"m_srcTableName" => "_purchase_type"
));

$proto6["m_sql"] = "`purchase_id`";
$proto6["m_srcTableName"] = "_purchase_type";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "purchase_name",
	"m_strTable" => "_purchase_type",
	"m_srcTableName" => "_purchase_type"
));

$proto8["m_sql"] = "`purchase_name`";
$proto8["m_srcTableName"] = "_purchase_type";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "purchaze_type",
	"m_strTable" => "_purchase_type",
	"m_srcTableName" => "_purchase_type"
));

$proto10["m_sql"] = "`purchaze_type`";
$proto10["m_srcTableName"] = "_purchase_type";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "sorter",
	"m_strTable" => "_purchase_type",
	"m_srcTableName" => "_purchase_type"
));

$proto12["m_sql"] = "`sorter`";
$proto12["m_srcTableName"] = "_purchase_type";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "supplementary_subject",
	"m_strTable" => "_purchase_type",
	"m_srcTableName" => "_purchase_type"
));

$proto14["m_sql"] = "`supplementary_subject`";
$proto14["m_srcTableName"] = "_purchase_type";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "group",
	"m_strTable" => "_purchase_type",
	"m_srcTableName" => "_purchase_type"
));

$proto16["m_sql"] = "`group`";
$proto16["m_srcTableName"] = "_purchase_type";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "update_by",
	"m_strTable" => "_purchase_type",
	"m_srcTableName" => "_purchase_type"
));

$proto18["m_sql"] = "`update_by`";
$proto18["m_srcTableName"] = "_purchase_type";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "update_at",
	"m_strTable" => "_purchase_type",
	"m_srcTableName" => "_purchase_type"
));

$proto20["m_sql"] = "`update_at`";
$proto20["m_srcTableName"] = "_purchase_type";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "create_by",
	"m_strTable" => "_purchase_type",
	"m_srcTableName" => "_purchase_type"
));

$proto22["m_sql"] = "`create_by`";
$proto22["m_srcTableName"] = "_purchase_type";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "create_at",
	"m_strTable" => "_purchase_type",
	"m_srcTableName" => "_purchase_type"
));

$proto24["m_sql"] = "`create_at`";
$proto24["m_srcTableName"] = "_purchase_type";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "category",
	"m_strTable" => "_purchase_type",
	"m_srcTableName" => "_purchase_type"
));

$proto26["m_sql"] = "`category`";
$proto26["m_srcTableName"] = "_purchase_type";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto28=array();
$proto28["m_link"] = "SQLL_MAIN";
			$proto29=array();
$proto29["m_strName"] = "_purchase_type";
$proto29["m_srcTableName"] = "_purchase_type";
$proto29["m_columns"] = array();
$proto29["m_columns"][] = "purchase_id";
$proto29["m_columns"][] = "purchase_name";
$proto29["m_columns"][] = "purchaze_type";
$proto29["m_columns"][] = "sorter";
$proto29["m_columns"][] = "account_item";
$proto29["m_columns"][] = "supplementary_subject";
$proto29["m_columns"][] = "group";
$proto29["m_columns"][] = "update_by";
$proto29["m_columns"][] = "update_at";
$proto29["m_columns"][] = "create_by";
$proto29["m_columns"][] = "create_at";
$proto29["m_columns"][] = "category";
$obj = new SQLTable($proto29);

$proto28["m_table"] = $obj;
$proto28["m_sql"] = "`_purchase_type`";
$proto28["m_alias"] = "";
$proto28["m_srcTableName"] = "_purchase_type";
$proto30=array();
$proto30["m_sql"] = "";
$proto30["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto30["m_column"]=$obj;
$proto30["m_contained"] = array();
$proto30["m_strCase"] = "";
$proto30["m_havingmode"] = false;
$proto30["m_inBrackets"] = false;
$proto30["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto30);

$proto28["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto28);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="_purchase_type";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData__purchase_type = createSqlQuery__purchase_type();


	
		;

											

$tdata_purchase_type[".sqlquery"] = $queryData__purchase_type;

include_once(getabspath("include/_purchase_type_events.php"));
$tableEvents["_purchase_type"] = new eventclass__purchase_type;
$tdata_purchase_type[".hasEvents"] = true;

?>