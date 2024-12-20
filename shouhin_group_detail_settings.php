<?php
require_once(getabspath("classes/cipherer.php"));




$tdatashouhin_group_detail = array();
	$tdatashouhin_group_detail[".truncateText"] = true;
	$tdatashouhin_group_detail[".NumberOfChars"] = 80;
	$tdatashouhin_group_detail[".ShortName"] = "shouhin_group_detail";
	$tdatashouhin_group_detail[".OwnerID"] = "";
	$tdatashouhin_group_detail[".OriginalTable"] = "shouhin_group_detail";

//	field labels
$fieldLabelsshouhin_group_detail = array();
$fieldToolTipsshouhin_group_detail = array();
$pageTitlesshouhin_group_detail = array();
$placeHoldersshouhin_group_detail = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsshouhin_group_detail["Japanese"] = array();
	$fieldToolTipsshouhin_group_detail["Japanese"] = array();
	$placeHoldersshouhin_group_detail["Japanese"] = array();
	$pageTitlesshouhin_group_detail["Japanese"] = array();
	$fieldLabelsshouhin_group_detail["Japanese"]["id"] = "Id";
	$fieldToolTipsshouhin_group_detail["Japanese"]["id"] = "";
	$placeHoldersshouhin_group_detail["Japanese"]["id"] = "";
	$fieldLabelsshouhin_group_detail["Japanese"]["shouhin_group_id"] = "商品グループID";
	$fieldToolTipsshouhin_group_detail["Japanese"]["shouhin_group_id"] = "";
	$placeHoldersshouhin_group_detail["Japanese"]["shouhin_group_id"] = "";
	$fieldLabelsshouhin_group_detail["Japanese"]["name"] = "Name";
	$fieldToolTipsshouhin_group_detail["Japanese"]["name"] = "";
	$placeHoldersshouhin_group_detail["Japanese"]["name"] = "";
	$fieldLabelsshouhin_group_detail["Japanese"]["key"] = "項目名";
	$fieldToolTipsshouhin_group_detail["Japanese"]["key"] = "";
	$placeHoldersshouhin_group_detail["Japanese"]["key"] = "";
	$fieldLabelsshouhin_group_detail["Japanese"]["value"] = "値";
	$fieldToolTipsshouhin_group_detail["Japanese"]["value"] = "";
	$placeHoldersshouhin_group_detail["Japanese"]["value"] = "";
	$fieldLabelsshouhin_group_detail["Japanese"]["sort"] = "Sort";
	$fieldToolTipsshouhin_group_detail["Japanese"]["sort"] = "";
	$placeHoldersshouhin_group_detail["Japanese"]["sort"] = "";
	$fieldLabelsshouhin_group_detail["Japanese"]["update_by"] = "更新者";
	$fieldToolTipsshouhin_group_detail["Japanese"]["update_by"] = "";
	$placeHoldersshouhin_group_detail["Japanese"]["update_by"] = "";
	$fieldLabelsshouhin_group_detail["Japanese"]["update_at"] = "更新日";
	$fieldToolTipsshouhin_group_detail["Japanese"]["update_at"] = "";
	$placeHoldersshouhin_group_detail["Japanese"]["update_at"] = "";
	$fieldLabelsshouhin_group_detail["Japanese"]["create_by"] = "作成者";
	$fieldToolTipsshouhin_group_detail["Japanese"]["create_by"] = "";
	$placeHoldersshouhin_group_detail["Japanese"]["create_by"] = "";
	$fieldLabelsshouhin_group_detail["Japanese"]["create_at"] = "作成日";
	$fieldToolTipsshouhin_group_detail["Japanese"]["create_at"] = "";
	$placeHoldersshouhin_group_detail["Japanese"]["create_at"] = "";
	if (count($fieldToolTipsshouhin_group_detail["Japanese"]))
		$tdatashouhin_group_detail[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsshouhin_group_detail[""] = array();
	$fieldToolTipsshouhin_group_detail[""] = array();
	$placeHoldersshouhin_group_detail[""] = array();
	$pageTitlesshouhin_group_detail[""] = array();
	$fieldLabelsshouhin_group_detail[""]["id"] = "Id";
	$fieldToolTipsshouhin_group_detail[""]["id"] = "";
	$placeHoldersshouhin_group_detail[""]["id"] = "";
	$fieldLabelsshouhin_group_detail[""]["shouhin_group_id"] = "Shouhin Group Id";
	$fieldToolTipsshouhin_group_detail[""]["shouhin_group_id"] = "";
	$placeHoldersshouhin_group_detail[""]["shouhin_group_id"] = "";
	$fieldLabelsshouhin_group_detail[""]["name"] = "Name";
	$fieldToolTipsshouhin_group_detail[""]["name"] = "";
	$placeHoldersshouhin_group_detail[""]["name"] = "";
	$fieldLabelsshouhin_group_detail[""]["key"] = "Key";
	$fieldToolTipsshouhin_group_detail[""]["key"] = "";
	$placeHoldersshouhin_group_detail[""]["key"] = "";
	$fieldLabelsshouhin_group_detail[""]["value"] = "Value";
	$fieldToolTipsshouhin_group_detail[""]["value"] = "";
	$placeHoldersshouhin_group_detail[""]["value"] = "";
	$fieldLabelsshouhin_group_detail[""]["sort"] = "Sort";
	$fieldToolTipsshouhin_group_detail[""]["sort"] = "";
	$placeHoldersshouhin_group_detail[""]["sort"] = "";
	$fieldLabelsshouhin_group_detail[""]["update_by"] = "Update By";
	$fieldToolTipsshouhin_group_detail[""]["update_by"] = "";
	$placeHoldersshouhin_group_detail[""]["update_by"] = "";
	$fieldLabelsshouhin_group_detail[""]["update_at"] = "Update At";
	$fieldToolTipsshouhin_group_detail[""]["update_at"] = "";
	$placeHoldersshouhin_group_detail[""]["update_at"] = "";
	$fieldLabelsshouhin_group_detail[""]["create_by"] = "Create By";
	$fieldToolTipsshouhin_group_detail[""]["create_by"] = "";
	$placeHoldersshouhin_group_detail[""]["create_by"] = "";
	$fieldLabelsshouhin_group_detail[""]["create_at"] = "Create At";
	$fieldToolTipsshouhin_group_detail[""]["create_at"] = "";
	$placeHoldersshouhin_group_detail[""]["create_at"] = "";
	if (count($fieldToolTipsshouhin_group_detail[""]))
		$tdatashouhin_group_detail[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsshouhin_group_detail["English"] = array();
	$fieldToolTipsshouhin_group_detail["English"] = array();
	$placeHoldersshouhin_group_detail["English"] = array();
	$pageTitlesshouhin_group_detail["English"] = array();
	$fieldLabelsshouhin_group_detail["English"]["id"] = "Id";
	$fieldToolTipsshouhin_group_detail["English"]["id"] = "";
	$placeHoldersshouhin_group_detail["English"]["id"] = "";
	$fieldLabelsshouhin_group_detail["English"]["shouhin_group_id"] = "Shouhin Group Id";
	$fieldToolTipsshouhin_group_detail["English"]["shouhin_group_id"] = "";
	$placeHoldersshouhin_group_detail["English"]["shouhin_group_id"] = "";
	$fieldLabelsshouhin_group_detail["English"]["name"] = "Name";
	$fieldToolTipsshouhin_group_detail["English"]["name"] = "";
	$placeHoldersshouhin_group_detail["English"]["name"] = "";
	$fieldLabelsshouhin_group_detail["English"]["key"] = "Key";
	$fieldToolTipsshouhin_group_detail["English"]["key"] = "";
	$placeHoldersshouhin_group_detail["English"]["key"] = "";
	$fieldLabelsshouhin_group_detail["English"]["value"] = "Value";
	$fieldToolTipsshouhin_group_detail["English"]["value"] = "";
	$placeHoldersshouhin_group_detail["English"]["value"] = "";
	$fieldLabelsshouhin_group_detail["English"]["sort"] = "Sort";
	$fieldToolTipsshouhin_group_detail["English"]["sort"] = "";
	$placeHoldersshouhin_group_detail["English"]["sort"] = "";
	$fieldLabelsshouhin_group_detail["English"]["update_by"] = "Update By";
	$fieldToolTipsshouhin_group_detail["English"]["update_by"] = "";
	$placeHoldersshouhin_group_detail["English"]["update_by"] = "";
	$fieldLabelsshouhin_group_detail["English"]["update_at"] = "Update At";
	$fieldToolTipsshouhin_group_detail["English"]["update_at"] = "";
	$placeHoldersshouhin_group_detail["English"]["update_at"] = "";
	$fieldLabelsshouhin_group_detail["English"]["create_by"] = "Create By";
	$fieldToolTipsshouhin_group_detail["English"]["create_by"] = "";
	$placeHoldersshouhin_group_detail["English"]["create_by"] = "";
	$fieldLabelsshouhin_group_detail["English"]["create_at"] = "Create At";
	$fieldToolTipsshouhin_group_detail["English"]["create_at"] = "";
	$placeHoldersshouhin_group_detail["English"]["create_at"] = "";
	if (count($fieldToolTipsshouhin_group_detail["English"]))
		$tdatashouhin_group_detail[".isUseToolTips"] = true;
}


	$tdatashouhin_group_detail[".NCSearch"] = true;



$tdatashouhin_group_detail[".shortTableName"] = "shouhin_group_detail";
$tdatashouhin_group_detail[".nSecOptions"] = 0;
$tdatashouhin_group_detail[".recsPerRowPrint"] = 1;
$tdatashouhin_group_detail[".mainTableOwnerID"] = "";
$tdatashouhin_group_detail[".moveNext"] = 1;
$tdatashouhin_group_detail[".entityType"] = 0;

$tdatashouhin_group_detail[".strOriginalTableName"] = "shouhin_group_detail";

	



$tdatashouhin_group_detail[".showAddInPopup"] = false;

$tdatashouhin_group_detail[".showEditInPopup"] = false;

$tdatashouhin_group_detail[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatashouhin_group_detail[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatashouhin_group_detail[".fieldsForRegister"] = array();

$tdatashouhin_group_detail[".listAjax"] = false;

	$tdatashouhin_group_detail[".audit"] = true;

	$tdatashouhin_group_detail[".locking"] = false;



$tdatashouhin_group_detail[".list"] = true;

$tdatashouhin_group_detail[".inlineEdit"] = true;


$tdatashouhin_group_detail[".reorderRecordsByHeader"] = true;



$tdatashouhin_group_detail[".inlineAdd"] = true;

$tdatashouhin_group_detail[".import"] = true;

$tdatashouhin_group_detail[".exportTo"] = true;


$tdatashouhin_group_detail[".delete"] = true;

$tdatashouhin_group_detail[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatashouhin_group_detail[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatashouhin_group_detail[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatashouhin_group_detail[".searchSaving"] = false;
//

$tdatashouhin_group_detail[".showSearchPanel"] = true;
		$tdatashouhin_group_detail[".flexibleSearch"] = true;

$tdatashouhin_group_detail[".isUseAjaxSuggest"] = true;

$tdatashouhin_group_detail[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																								

$tdatashouhin_group_detail[".ajaxCodeSnippetAdded"] = false;

$tdatashouhin_group_detail[".buttonsAdded"] = false;

$tdatashouhin_group_detail[".addPageEvents"] = false;

// use timepicker for search panel
$tdatashouhin_group_detail[".isUseTimeForSearch"] = false;



$tdatashouhin_group_detail[".badgeColor"] = "db7093";


$tdatashouhin_group_detail[".allSearchFields"] = array();
$tdatashouhin_group_detail[".filterFields"] = array();
$tdatashouhin_group_detail[".requiredSearchFields"] = array();

$tdatashouhin_group_detail[".allSearchFields"][] = "id";
	$tdatashouhin_group_detail[".allSearchFields"][] = "shouhin_group_id";
	$tdatashouhin_group_detail[".allSearchFields"][] = "name";
	$tdatashouhin_group_detail[".allSearchFields"][] = "key";
	$tdatashouhin_group_detail[".allSearchFields"][] = "value";
	$tdatashouhin_group_detail[".allSearchFields"][] = "sort";
	$tdatashouhin_group_detail[".allSearchFields"][] = "update_by";
	$tdatashouhin_group_detail[".allSearchFields"][] = "update_at";
	$tdatashouhin_group_detail[".allSearchFields"][] = "create_by";
	$tdatashouhin_group_detail[".allSearchFields"][] = "create_at";
	

$tdatashouhin_group_detail[".googleLikeFields"] = array();
$tdatashouhin_group_detail[".googleLikeFields"][] = "id";
$tdatashouhin_group_detail[".googleLikeFields"][] = "shouhin_group_id";
$tdatashouhin_group_detail[".googleLikeFields"][] = "name";
$tdatashouhin_group_detail[".googleLikeFields"][] = "key";
$tdatashouhin_group_detail[".googleLikeFields"][] = "value";
$tdatashouhin_group_detail[".googleLikeFields"][] = "sort";
$tdatashouhin_group_detail[".googleLikeFields"][] = "update_by";
$tdatashouhin_group_detail[".googleLikeFields"][] = "update_at";
$tdatashouhin_group_detail[".googleLikeFields"][] = "create_by";
$tdatashouhin_group_detail[".googleLikeFields"][] = "create_at";


$tdatashouhin_group_detail[".advSearchFields"] = array();
$tdatashouhin_group_detail[".advSearchFields"][] = "id";
$tdatashouhin_group_detail[".advSearchFields"][] = "shouhin_group_id";
$tdatashouhin_group_detail[".advSearchFields"][] = "name";
$tdatashouhin_group_detail[".advSearchFields"][] = "key";
$tdatashouhin_group_detail[".advSearchFields"][] = "value";
$tdatashouhin_group_detail[".advSearchFields"][] = "sort";
$tdatashouhin_group_detail[".advSearchFields"][] = "update_by";
$tdatashouhin_group_detail[".advSearchFields"][] = "update_at";
$tdatashouhin_group_detail[".advSearchFields"][] = "create_by";
$tdatashouhin_group_detail[".advSearchFields"][] = "create_at";

$tdatashouhin_group_detail[".tableType"] = "list";

$tdatashouhin_group_detail[".printerPageOrientation"] = 0;
$tdatashouhin_group_detail[".nPrinterPageScale"] = 100;

$tdatashouhin_group_detail[".nPrinterSplitRecords"] = 40;

$tdatashouhin_group_detail[".nPrinterPDFSplitRecords"] = 40;



$tdatashouhin_group_detail[".geocodingEnabled"] = false;





$tdatashouhin_group_detail[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatashouhin_group_detail[".pageSize"] = 20;

$tdatashouhin_group_detail[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatashouhin_group_detail[".strOrderBy"] = $tstrOrderBy;

$tdatashouhin_group_detail[".orderindexes"] = array();

$tdatashouhin_group_detail[".sqlHead"] = "SELECT `id`,  	`shouhin_group_id`,  	`name`,  	`key`,  	`value`,  	`sort`,  	`update_by`,  	`update_at`,  	`create_by`,  	`create_at`";
$tdatashouhin_group_detail[".sqlFrom"] = "FROM `shouhin_group_detail`";
$tdatashouhin_group_detail[".sqlWhereExpr"] = "";
$tdatashouhin_group_detail[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatashouhin_group_detail[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatashouhin_group_detail[".arrGroupsPerPage"] = $arrGPP;

$tdatashouhin_group_detail[".highlightSearchResults"] = true;

$tableKeysshouhin_group_detail = array();
$tableKeysshouhin_group_detail[] = "id";
$tdatashouhin_group_detail[".Keys"] = $tableKeysshouhin_group_detail;

$tdatashouhin_group_detail[".listFields"] = array();
$tdatashouhin_group_detail[".listFields"][] = "id";
$tdatashouhin_group_detail[".listFields"][] = "shouhin_group_id";
$tdatashouhin_group_detail[".listFields"][] = "sort";
$tdatashouhin_group_detail[".listFields"][] = "name";
$tdatashouhin_group_detail[".listFields"][] = "key";
$tdatashouhin_group_detail[".listFields"][] = "value";
$tdatashouhin_group_detail[".listFields"][] = "update_by";
$tdatashouhin_group_detail[".listFields"][] = "update_at";
$tdatashouhin_group_detail[".listFields"][] = "create_by";
$tdatashouhin_group_detail[".listFields"][] = "create_at";

$tdatashouhin_group_detail[".hideMobileList"] = array();


$tdatashouhin_group_detail[".viewFields"] = array();

$tdatashouhin_group_detail[".addFields"] = array();

$tdatashouhin_group_detail[".masterListFields"] = array();
$tdatashouhin_group_detail[".masterListFields"][] = "id";
$tdatashouhin_group_detail[".masterListFields"][] = "shouhin_group_id";
$tdatashouhin_group_detail[".masterListFields"][] = "name";
$tdatashouhin_group_detail[".masterListFields"][] = "key";
$tdatashouhin_group_detail[".masterListFields"][] = "value";
$tdatashouhin_group_detail[".masterListFields"][] = "sort";
$tdatashouhin_group_detail[".masterListFields"][] = "update_by";
$tdatashouhin_group_detail[".masterListFields"][] = "update_at";
$tdatashouhin_group_detail[".masterListFields"][] = "create_by";
$tdatashouhin_group_detail[".masterListFields"][] = "create_at";

$tdatashouhin_group_detail[".inlineAddFields"] = array();
$tdatashouhin_group_detail[".inlineAddFields"][] = "shouhin_group_id";
$tdatashouhin_group_detail[".inlineAddFields"][] = "sort";
$tdatashouhin_group_detail[".inlineAddFields"][] = "name";
$tdatashouhin_group_detail[".inlineAddFields"][] = "key";
$tdatashouhin_group_detail[".inlineAddFields"][] = "value";

$tdatashouhin_group_detail[".editFields"] = array();

$tdatashouhin_group_detail[".inlineEditFields"] = array();
$tdatashouhin_group_detail[".inlineEditFields"][] = "shouhin_group_id";
$tdatashouhin_group_detail[".inlineEditFields"][] = "sort";
$tdatashouhin_group_detail[".inlineEditFields"][] = "name";
$tdatashouhin_group_detail[".inlineEditFields"][] = "key";
$tdatashouhin_group_detail[".inlineEditFields"][] = "value";

$tdatashouhin_group_detail[".updateSelectedFields"] = array();


$tdatashouhin_group_detail[".exportFields"] = array();
$tdatashouhin_group_detail[".exportFields"][] = "id";
$tdatashouhin_group_detail[".exportFields"][] = "shouhin_group_id";
$tdatashouhin_group_detail[".exportFields"][] = "name";
$tdatashouhin_group_detail[".exportFields"][] = "key";
$tdatashouhin_group_detail[".exportFields"][] = "value";
$tdatashouhin_group_detail[".exportFields"][] = "sort";
$tdatashouhin_group_detail[".exportFields"][] = "update_by";
$tdatashouhin_group_detail[".exportFields"][] = "update_at";
$tdatashouhin_group_detail[".exportFields"][] = "create_by";
$tdatashouhin_group_detail[".exportFields"][] = "create_at";

$tdatashouhin_group_detail[".importFields"] = array();
$tdatashouhin_group_detail[".importFields"][] = "id";
$tdatashouhin_group_detail[".importFields"][] = "shouhin_group_id";
$tdatashouhin_group_detail[".importFields"][] = "name";
$tdatashouhin_group_detail[".importFields"][] = "key";
$tdatashouhin_group_detail[".importFields"][] = "value";
$tdatashouhin_group_detail[".importFields"][] = "sort";
$tdatashouhin_group_detail[".importFields"][] = "update_by";
$tdatashouhin_group_detail[".importFields"][] = "update_at";
$tdatashouhin_group_detail[".importFields"][] = "create_by";
$tdatashouhin_group_detail[".importFields"][] = "create_at";

$tdatashouhin_group_detail[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "shouhin_group_detail";
	$fdata["Label"] = GetFieldLabel("shouhin_group_detail","id");
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




	$tdatashouhin_group_detail["id"] = $fdata;
//	shouhin_group_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "shouhin_group_id";
	$fdata["GoodName"] = "shouhin_group_id";
	$fdata["ownerTable"] = "shouhin_group_detail";
	$fdata["Label"] = GetFieldLabel("shouhin_group_detail","shouhin_group_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "shouhin_group_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin_group_id`";

	
	
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




	$tdatashouhin_group_detail["shouhin_group_id"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "shouhin_group_detail";
	$fdata["Label"] = GetFieldLabel("shouhin_group_detail","name");
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




	$tdatashouhin_group_detail["name"] = $fdata;
//	key
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "key";
	$fdata["GoodName"] = "key";
	$fdata["ownerTable"] = "shouhin_group_detail";
	$fdata["Label"] = GetFieldLabel("shouhin_group_detail","key");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "key";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`key`";

	
	
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




	$tdatashouhin_group_detail["key"] = $fdata;
//	value
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "value";
	$fdata["GoodName"] = "value";
	$fdata["ownerTable"] = "shouhin_group_detail";
	$fdata["Label"] = GetFieldLabel("shouhin_group_detail","value");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "value";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`value`";

	
	
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




	$tdatashouhin_group_detail["value"] = $fdata;
//	sort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "sort";
	$fdata["GoodName"] = "sort";
	$fdata["ownerTable"] = "shouhin_group_detail";
	$fdata["Label"] = GetFieldLabel("shouhin_group_detail","sort");
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




	$tdatashouhin_group_detail["sort"] = $fdata;
//	update_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "update_by";
	$fdata["GoodName"] = "update_by";
	$fdata["ownerTable"] = "shouhin_group_detail";
	$fdata["Label"] = GetFieldLabel("shouhin_group_detail","update_by");
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




	$tdatashouhin_group_detail["update_by"] = $fdata;
//	update_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "update_at";
	$fdata["GoodName"] = "update_at";
	$fdata["ownerTable"] = "shouhin_group_detail";
	$fdata["Label"] = GetFieldLabel("shouhin_group_detail","update_at");
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




	$tdatashouhin_group_detail["update_at"] = $fdata;
//	create_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "create_by";
	$fdata["GoodName"] = "create_by";
	$fdata["ownerTable"] = "shouhin_group_detail";
	$fdata["Label"] = GetFieldLabel("shouhin_group_detail","create_by");
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




	$tdatashouhin_group_detail["create_by"] = $fdata;
//	create_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "create_at";
	$fdata["GoodName"] = "create_at";
	$fdata["ownerTable"] = "shouhin_group_detail";
	$fdata["Label"] = GetFieldLabel("shouhin_group_detail","create_at");
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




	$tdatashouhin_group_detail["create_at"] = $fdata;


$tables_data["shouhin_group_detail"]=&$tdatashouhin_group_detail;
$field_labels["shouhin_group_detail"] = &$fieldLabelsshouhin_group_detail;
$fieldToolTips["shouhin_group_detail"] = &$fieldToolTipsshouhin_group_detail;
$placeHolders["shouhin_group_detail"] = &$placeHoldersshouhin_group_detail;
$page_titles["shouhin_group_detail"] = &$pageTitlesshouhin_group_detail;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["shouhin_group_detail"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["shouhin_group_detail"] = array();


	
				$strOriginalDetailsTable="shouhin_group";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="shouhin_group";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "shouhin_group";
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
					$masterTablesData["shouhin_group_detail"][0] = $masterParams;
				$masterTablesData["shouhin_group_detail"][0]["masterKeys"] = array();
	$masterTablesData["shouhin_group_detail"][0]["masterKeys"][]="id";
				$masterTablesData["shouhin_group_detail"][0]["detailKeys"] = array();
	$masterTablesData["shouhin_group_detail"][0]["detailKeys"][]="shouhin_group_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_shouhin_group_detail()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  	`shouhin_group_id`,  	`name`,  	`key`,  	`value`,  	`sort`,  	`update_by`,  	`update_at`,  	`create_by`,  	`create_at`";
$proto0["m_strFrom"] = "FROM `shouhin_group_detail`";
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
	"m_strTable" => "shouhin_group_detail",
	"m_srcTableName" => "shouhin_group_detail"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "shouhin_group_detail";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "shouhin_group_id",
	"m_strTable" => "shouhin_group_detail",
	"m_srcTableName" => "shouhin_group_detail"
));

$proto8["m_sql"] = "`shouhin_group_id`";
$proto8["m_srcTableName"] = "shouhin_group_detail";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "shouhin_group_detail",
	"m_srcTableName" => "shouhin_group_detail"
));

$proto10["m_sql"] = "`name`";
$proto10["m_srcTableName"] = "shouhin_group_detail";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "key",
	"m_strTable" => "shouhin_group_detail",
	"m_srcTableName" => "shouhin_group_detail"
));

$proto12["m_sql"] = "`key`";
$proto12["m_srcTableName"] = "shouhin_group_detail";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "value",
	"m_strTable" => "shouhin_group_detail",
	"m_srcTableName" => "shouhin_group_detail"
));

$proto14["m_sql"] = "`value`";
$proto14["m_srcTableName"] = "shouhin_group_detail";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "sort",
	"m_strTable" => "shouhin_group_detail",
	"m_srcTableName" => "shouhin_group_detail"
));

$proto16["m_sql"] = "`sort`";
$proto16["m_srcTableName"] = "shouhin_group_detail";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "update_by",
	"m_strTable" => "shouhin_group_detail",
	"m_srcTableName" => "shouhin_group_detail"
));

$proto18["m_sql"] = "`update_by`";
$proto18["m_srcTableName"] = "shouhin_group_detail";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "update_at",
	"m_strTable" => "shouhin_group_detail",
	"m_srcTableName" => "shouhin_group_detail"
));

$proto20["m_sql"] = "`update_at`";
$proto20["m_srcTableName"] = "shouhin_group_detail";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "create_by",
	"m_strTable" => "shouhin_group_detail",
	"m_srcTableName" => "shouhin_group_detail"
));

$proto22["m_sql"] = "`create_by`";
$proto22["m_srcTableName"] = "shouhin_group_detail";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "create_at",
	"m_strTable" => "shouhin_group_detail",
	"m_srcTableName" => "shouhin_group_detail"
));

$proto24["m_sql"] = "`create_at`";
$proto24["m_srcTableName"] = "shouhin_group_detail";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "shouhin_group_detail";
$proto27["m_srcTableName"] = "shouhin_group_detail";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "id";
$proto27["m_columns"][] = "shouhin_group_id";
$proto27["m_columns"][] = "name";
$proto27["m_columns"][] = "key";
$proto27["m_columns"][] = "value";
$proto27["m_columns"][] = "sort";
$proto27["m_columns"][] = "update_by";
$proto27["m_columns"][] = "update_at";
$proto27["m_columns"][] = "create_by";
$proto27["m_columns"][] = "create_at";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "`shouhin_group_detail`";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "shouhin_group_detail";
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
$proto0["m_srcTableName"]="shouhin_group_detail";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_shouhin_group_detail = createSqlQuery_shouhin_group_detail();


	
		;

										

$tdatashouhin_group_detail[".sqlquery"] = $queryData_shouhin_group_detail;

$tableEvents["shouhin_group_detail"] = new eventsBase;
$tdatashouhin_group_detail[".hasEvents"] = false;

?>