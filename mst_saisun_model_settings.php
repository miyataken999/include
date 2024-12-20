<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamst_saisun_model = array();
	$tdatamst_saisun_model[".truncateText"] = true;
	$tdatamst_saisun_model[".NumberOfChars"] = 80;
	$tdatamst_saisun_model[".ShortName"] = "mst_saisun_model";
	$tdatamst_saisun_model[".OwnerID"] = "";
	$tdatamst_saisun_model[".OriginalTable"] = "mst_saisun_model";

//	field labels
$fieldLabelsmst_saisun_model = array();
$fieldToolTipsmst_saisun_model = array();
$pageTitlesmst_saisun_model = array();
$placeHoldersmst_saisun_model = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmst_saisun_model["Japanese"] = array();
	$fieldToolTipsmst_saisun_model["Japanese"] = array();
	$placeHoldersmst_saisun_model["Japanese"] = array();
	$pageTitlesmst_saisun_model["Japanese"] = array();
	$fieldLabelsmst_saisun_model["Japanese"]["id"] = "Id";
	$fieldToolTipsmst_saisun_model["Japanese"]["id"] = "";
	$placeHoldersmst_saisun_model["Japanese"]["id"] = "";
	$fieldLabelsmst_saisun_model["Japanese"]["name"] = "Name";
	$fieldToolTipsmst_saisun_model["Japanese"]["name"] = "";
	$placeHoldersmst_saisun_model["Japanese"]["name"] = "";
	$fieldLabelsmst_saisun_model["Japanese"]["sort"] = "Sort";
	$fieldToolTipsmst_saisun_model["Japanese"]["sort"] = "";
	$placeHoldersmst_saisun_model["Japanese"]["sort"] = "";
	$fieldLabelsmst_saisun_model["Japanese"]["condition_tmp_id"] = "採寸詳細テンプレート";
	$fieldToolTipsmst_saisun_model["Japanese"]["condition_tmp_id"] = "";
	$placeHoldersmst_saisun_model["Japanese"]["condition_tmp_id"] = "";
	$fieldLabelsmst_saisun_model["Japanese"]["output_template"] = "出力フォーマット";
	$fieldToolTipsmst_saisun_model["Japanese"]["output_template"] = "";
	$placeHoldersmst_saisun_model["Japanese"]["output_template"] = "";
	$fieldLabelsmst_saisun_model["Japanese"]["created_at"] = "作成日";
	$fieldToolTipsmst_saisun_model["Japanese"]["created_at"] = "";
	$placeHoldersmst_saisun_model["Japanese"]["created_at"] = "";
	$fieldLabelsmst_saisun_model["Japanese"]["created_by"] = "作成者";
	$fieldToolTipsmst_saisun_model["Japanese"]["created_by"] = "";
	$placeHoldersmst_saisun_model["Japanese"]["created_by"] = "";
	$fieldLabelsmst_saisun_model["Japanese"]["updated_at"] = "更新日";
	$fieldToolTipsmst_saisun_model["Japanese"]["updated_at"] = "";
	$placeHoldersmst_saisun_model["Japanese"]["updated_at"] = "";
	$fieldLabelsmst_saisun_model["Japanese"]["updated_by"] = "更新者";
	$fieldToolTipsmst_saisun_model["Japanese"]["updated_by"] = "";
	$placeHoldersmst_saisun_model["Japanese"]["updated_by"] = "";
	if (count($fieldToolTipsmst_saisun_model["Japanese"]))
		$tdatamst_saisun_model[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmst_saisun_model[""] = array();
	$fieldToolTipsmst_saisun_model[""] = array();
	$placeHoldersmst_saisun_model[""] = array();
	$pageTitlesmst_saisun_model[""] = array();
	$fieldLabelsmst_saisun_model[""]["id"] = "Id";
	$fieldToolTipsmst_saisun_model[""]["id"] = "";
	$placeHoldersmst_saisun_model[""]["id"] = "";
	$fieldLabelsmst_saisun_model[""]["name"] = "Name";
	$fieldToolTipsmst_saisun_model[""]["name"] = "";
	$placeHoldersmst_saisun_model[""]["name"] = "";
	$fieldLabelsmst_saisun_model[""]["sort"] = "Sort";
	$fieldToolTipsmst_saisun_model[""]["sort"] = "";
	$placeHoldersmst_saisun_model[""]["sort"] = "";
	$fieldLabelsmst_saisun_model[""]["condition_tmp_id"] = "Condition Tmp Id";
	$fieldToolTipsmst_saisun_model[""]["condition_tmp_id"] = "";
	$placeHoldersmst_saisun_model[""]["condition_tmp_id"] = "";
	$fieldLabelsmst_saisun_model[""]["output_template"] = "Output Template";
	$fieldToolTipsmst_saisun_model[""]["output_template"] = "";
	$placeHoldersmst_saisun_model[""]["output_template"] = "";
	$fieldLabelsmst_saisun_model[""]["created_at"] = "Created At";
	$fieldToolTipsmst_saisun_model[""]["created_at"] = "";
	$placeHoldersmst_saisun_model[""]["created_at"] = "";
	$fieldLabelsmst_saisun_model[""]["created_by"] = "Created By";
	$fieldToolTipsmst_saisun_model[""]["created_by"] = "";
	$placeHoldersmst_saisun_model[""]["created_by"] = "";
	$fieldLabelsmst_saisun_model[""]["updated_at"] = "Updated At";
	$fieldToolTipsmst_saisun_model[""]["updated_at"] = "";
	$placeHoldersmst_saisun_model[""]["updated_at"] = "";
	$fieldLabelsmst_saisun_model[""]["updated_by"] = "Updated By";
	$fieldToolTipsmst_saisun_model[""]["updated_by"] = "";
	$placeHoldersmst_saisun_model[""]["updated_by"] = "";
	if (count($fieldToolTipsmst_saisun_model[""]))
		$tdatamst_saisun_model[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmst_saisun_model["English"] = array();
	$fieldToolTipsmst_saisun_model["English"] = array();
	$placeHoldersmst_saisun_model["English"] = array();
	$pageTitlesmst_saisun_model["English"] = array();
	$fieldLabelsmst_saisun_model["English"]["id"] = "Id";
	$fieldToolTipsmst_saisun_model["English"]["id"] = "";
	$placeHoldersmst_saisun_model["English"]["id"] = "";
	$fieldLabelsmst_saisun_model["English"]["name"] = "Name";
	$fieldToolTipsmst_saisun_model["English"]["name"] = "";
	$placeHoldersmst_saisun_model["English"]["name"] = "";
	$fieldLabelsmst_saisun_model["English"]["sort"] = "Sort";
	$fieldToolTipsmst_saisun_model["English"]["sort"] = "";
	$placeHoldersmst_saisun_model["English"]["sort"] = "";
	$fieldLabelsmst_saisun_model["English"]["condition_tmp_id"] = "Condition Tmp Id";
	$fieldToolTipsmst_saisun_model["English"]["condition_tmp_id"] = "";
	$placeHoldersmst_saisun_model["English"]["condition_tmp_id"] = "";
	$fieldLabelsmst_saisun_model["English"]["output_template"] = "Output Template";
	$fieldToolTipsmst_saisun_model["English"]["output_template"] = "";
	$placeHoldersmst_saisun_model["English"]["output_template"] = "";
	$fieldLabelsmst_saisun_model["English"]["created_at"] = "Created At";
	$fieldToolTipsmst_saisun_model["English"]["created_at"] = "";
	$placeHoldersmst_saisun_model["English"]["created_at"] = "";
	$fieldLabelsmst_saisun_model["English"]["created_by"] = "Created By";
	$fieldToolTipsmst_saisun_model["English"]["created_by"] = "";
	$placeHoldersmst_saisun_model["English"]["created_by"] = "";
	$fieldLabelsmst_saisun_model["English"]["updated_at"] = "Updated At";
	$fieldToolTipsmst_saisun_model["English"]["updated_at"] = "";
	$placeHoldersmst_saisun_model["English"]["updated_at"] = "";
	$fieldLabelsmst_saisun_model["English"]["updated_by"] = "Updated By";
	$fieldToolTipsmst_saisun_model["English"]["updated_by"] = "";
	$placeHoldersmst_saisun_model["English"]["updated_by"] = "";
	if (count($fieldToolTipsmst_saisun_model["English"]))
		$tdatamst_saisun_model[".isUseToolTips"] = true;
}


	$tdatamst_saisun_model[".NCSearch"] = true;



$tdatamst_saisun_model[".shortTableName"] = "mst_saisun_model";
$tdatamst_saisun_model[".nSecOptions"] = 0;
$tdatamst_saisun_model[".recsPerRowPrint"] = 1;
$tdatamst_saisun_model[".mainTableOwnerID"] = "";
$tdatamst_saisun_model[".moveNext"] = 1;
$tdatamst_saisun_model[".entityType"] = 0;

$tdatamst_saisun_model[".strOriginalTableName"] = "mst_saisun_model";

	



$tdatamst_saisun_model[".showAddInPopup"] = false;

$tdatamst_saisun_model[".showEditInPopup"] = false;

$tdatamst_saisun_model[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamst_saisun_model[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamst_saisun_model[".fieldsForRegister"] = array();

$tdatamst_saisun_model[".listAjax"] = false;

	$tdatamst_saisun_model[".audit"] = true;

	$tdatamst_saisun_model[".locking"] = false;



$tdatamst_saisun_model[".list"] = true;

$tdatamst_saisun_model[".inlineEdit"] = true;


$tdatamst_saisun_model[".reorderRecordsByHeader"] = true;



$tdatamst_saisun_model[".inlineAdd"] = true;

$tdatamst_saisun_model[".import"] = true;

$tdatamst_saisun_model[".exportTo"] = true;


$tdatamst_saisun_model[".delete"] = true;

$tdatamst_saisun_model[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamst_saisun_model[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamst_saisun_model[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamst_saisun_model[".searchSaving"] = false;
//

$tdatamst_saisun_model[".showSearchPanel"] = true;
		$tdatamst_saisun_model[".flexibleSearch"] = true;

$tdatamst_saisun_model[".isUseAjaxSuggest"] = true;

$tdatamst_saisun_model[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatamst_saisun_model[".ajaxCodeSnippetAdded"] = false;

$tdatamst_saisun_model[".buttonsAdded"] = false;

$tdatamst_saisun_model[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamst_saisun_model[".isUseTimeForSearch"] = false;




$tdatamst_saisun_model[".detailsLinksOnList"] = "1";

$tdatamst_saisun_model[".allSearchFields"] = array();
$tdatamst_saisun_model[".filterFields"] = array();
$tdatamst_saisun_model[".requiredSearchFields"] = array();

$tdatamst_saisun_model[".allSearchFields"][] = "id";
	$tdatamst_saisun_model[".allSearchFields"][] = "name";
	$tdatamst_saisun_model[".allSearchFields"][] = "sort";
	$tdatamst_saisun_model[".allSearchFields"][] = "condition_tmp_id";
	$tdatamst_saisun_model[".allSearchFields"][] = "output_template";
	$tdatamst_saisun_model[".allSearchFields"][] = "created_at";
	$tdatamst_saisun_model[".allSearchFields"][] = "created_by";
	$tdatamst_saisun_model[".allSearchFields"][] = "updated_at";
	$tdatamst_saisun_model[".allSearchFields"][] = "updated_by";
	

$tdatamst_saisun_model[".googleLikeFields"] = array();
$tdatamst_saisun_model[".googleLikeFields"][] = "id";
$tdatamst_saisun_model[".googleLikeFields"][] = "name";
$tdatamst_saisun_model[".googleLikeFields"][] = "sort";
$tdatamst_saisun_model[".googleLikeFields"][] = "condition_tmp_id";
$tdatamst_saisun_model[".googleLikeFields"][] = "output_template";
$tdatamst_saisun_model[".googleLikeFields"][] = "created_at";
$tdatamst_saisun_model[".googleLikeFields"][] = "created_by";
$tdatamst_saisun_model[".googleLikeFields"][] = "updated_at";
$tdatamst_saisun_model[".googleLikeFields"][] = "updated_by";


$tdatamst_saisun_model[".advSearchFields"] = array();
$tdatamst_saisun_model[".advSearchFields"][] = "id";
$tdatamst_saisun_model[".advSearchFields"][] = "name";
$tdatamst_saisun_model[".advSearchFields"][] = "sort";
$tdatamst_saisun_model[".advSearchFields"][] = "condition_tmp_id";
$tdatamst_saisun_model[".advSearchFields"][] = "output_template";
$tdatamst_saisun_model[".advSearchFields"][] = "created_at";
$tdatamst_saisun_model[".advSearchFields"][] = "created_by";
$tdatamst_saisun_model[".advSearchFields"][] = "updated_at";
$tdatamst_saisun_model[".advSearchFields"][] = "updated_by";

$tdatamst_saisun_model[".tableType"] = "list";

$tdatamst_saisun_model[".printerPageOrientation"] = 0;
$tdatamst_saisun_model[".nPrinterPageScale"] = 100;

$tdatamst_saisun_model[".nPrinterSplitRecords"] = 40;

$tdatamst_saisun_model[".nPrinterPDFSplitRecords"] = 40;



$tdatamst_saisun_model[".geocodingEnabled"] = false;





$tdatamst_saisun_model[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamst_saisun_model[".pageSize"] = 20;

$tdatamst_saisun_model[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamst_saisun_model[".strOrderBy"] = $tstrOrderBy;

$tdatamst_saisun_model[".orderindexes"] = array();

$tdatamst_saisun_model[".sqlHead"] = "SELECT id,  	name,  	sort,  	condition_tmp_id,  	output_template,  	created_at,  	created_by,  	updated_at,  	updated_by";
$tdatamst_saisun_model[".sqlFrom"] = "FROM mst_saisun_model";
$tdatamst_saisun_model[".sqlWhereExpr"] = "";
$tdatamst_saisun_model[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamst_saisun_model[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamst_saisun_model[".arrGroupsPerPage"] = $arrGPP;

$tdatamst_saisun_model[".highlightSearchResults"] = true;

$tableKeysmst_saisun_model = array();
$tableKeysmst_saisun_model[] = "id";
$tdatamst_saisun_model[".Keys"] = $tableKeysmst_saisun_model;

$tdatamst_saisun_model[".listFields"] = array();
$tdatamst_saisun_model[".listFields"][] = "id";
$tdatamst_saisun_model[".listFields"][] = "name";
$tdatamst_saisun_model[".listFields"][] = "sort";
$tdatamst_saisun_model[".listFields"][] = "condition_tmp_id";
$tdatamst_saisun_model[".listFields"][] = "output_template";
$tdatamst_saisun_model[".listFields"][] = "created_at";
$tdatamst_saisun_model[".listFields"][] = "created_by";
$tdatamst_saisun_model[".listFields"][] = "updated_at";
$tdatamst_saisun_model[".listFields"][] = "updated_by";

$tdatamst_saisun_model[".hideMobileList"] = array();


$tdatamst_saisun_model[".viewFields"] = array();

$tdatamst_saisun_model[".addFields"] = array();

$tdatamst_saisun_model[".masterListFields"] = array();
$tdatamst_saisun_model[".masterListFields"][] = "id";
$tdatamst_saisun_model[".masterListFields"][] = "name";
$tdatamst_saisun_model[".masterListFields"][] = "sort";
$tdatamst_saisun_model[".masterListFields"][] = "condition_tmp_id";
$tdatamst_saisun_model[".masterListFields"][] = "output_template";
$tdatamst_saisun_model[".masterListFields"][] = "created_at";
$tdatamst_saisun_model[".masterListFields"][] = "created_by";
$tdatamst_saisun_model[".masterListFields"][] = "updated_at";
$tdatamst_saisun_model[".masterListFields"][] = "updated_by";

$tdatamst_saisun_model[".inlineAddFields"] = array();
$tdatamst_saisun_model[".inlineAddFields"][] = "name";
$tdatamst_saisun_model[".inlineAddFields"][] = "sort";
$tdatamst_saisun_model[".inlineAddFields"][] = "condition_tmp_id";
$tdatamst_saisun_model[".inlineAddFields"][] = "output_template";
$tdatamst_saisun_model[".inlineAddFields"][] = "created_at";
$tdatamst_saisun_model[".inlineAddFields"][] = "created_by";
$tdatamst_saisun_model[".inlineAddFields"][] = "updated_at";
$tdatamst_saisun_model[".inlineAddFields"][] = "updated_by";

$tdatamst_saisun_model[".editFields"] = array();

$tdatamst_saisun_model[".inlineEditFields"] = array();
$tdatamst_saisun_model[".inlineEditFields"][] = "name";
$tdatamst_saisun_model[".inlineEditFields"][] = "sort";
$tdatamst_saisun_model[".inlineEditFields"][] = "condition_tmp_id";
$tdatamst_saisun_model[".inlineEditFields"][] = "output_template";
$tdatamst_saisun_model[".inlineEditFields"][] = "created_at";
$tdatamst_saisun_model[".inlineEditFields"][] = "created_by";
$tdatamst_saisun_model[".inlineEditFields"][] = "updated_at";
$tdatamst_saisun_model[".inlineEditFields"][] = "updated_by";

$tdatamst_saisun_model[".updateSelectedFields"] = array();


$tdatamst_saisun_model[".exportFields"] = array();
$tdatamst_saisun_model[".exportFields"][] = "id";
$tdatamst_saisun_model[".exportFields"][] = "name";
$tdatamst_saisun_model[".exportFields"][] = "sort";
$tdatamst_saisun_model[".exportFields"][] = "condition_tmp_id";
$tdatamst_saisun_model[".exportFields"][] = "output_template";
$tdatamst_saisun_model[".exportFields"][] = "created_at";
$tdatamst_saisun_model[".exportFields"][] = "created_by";
$tdatamst_saisun_model[".exportFields"][] = "updated_at";
$tdatamst_saisun_model[".exportFields"][] = "updated_by";

$tdatamst_saisun_model[".importFields"] = array();
$tdatamst_saisun_model[".importFields"][] = "id";
$tdatamst_saisun_model[".importFields"][] = "name";
$tdatamst_saisun_model[".importFields"][] = "sort";
$tdatamst_saisun_model[".importFields"][] = "condition_tmp_id";
$tdatamst_saisun_model[".importFields"][] = "output_template";
$tdatamst_saisun_model[".importFields"][] = "created_at";
$tdatamst_saisun_model[".importFields"][] = "created_by";
$tdatamst_saisun_model[".importFields"][] = "updated_at";
$tdatamst_saisun_model[".importFields"][] = "updated_by";

$tdatamst_saisun_model[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "mst_saisun_model";
	$fdata["Label"] = GetFieldLabel("mst_saisun_model","id");
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




	$tdatamst_saisun_model["id"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "mst_saisun_model";
	$fdata["Label"] = GetFieldLabel("mst_saisun_model","name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
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




	$tdatamst_saisun_model["name"] = $fdata;
//	sort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sort";
	$fdata["GoodName"] = "sort";
	$fdata["ownerTable"] = "mst_saisun_model";
	$fdata["Label"] = GetFieldLabel("mst_saisun_model","sort");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "sort";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sort";

	
	
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




	$tdatamst_saisun_model["sort"] = $fdata;
//	condition_tmp_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "condition_tmp_id";
	$fdata["GoodName"] = "condition_tmp_id";
	$fdata["ownerTable"] = "mst_saisun_model";
	$fdata["Label"] = GetFieldLabel("mst_saisun_model","condition_tmp_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "condition_tmp_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "condition_tmp_id";

	
	
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




	$tdatamst_saisun_model["condition_tmp_id"] = $fdata;
//	output_template
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "output_template";
	$fdata["GoodName"] = "output_template";
	$fdata["ownerTable"] = "mst_saisun_model";
	$fdata["Label"] = GetFieldLabel("mst_saisun_model","output_template");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "output_template";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "output_template";

	
	
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




	$tdatamst_saisun_model["output_template"] = $fdata;
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "mst_saisun_model";
	$fdata["Label"] = GetFieldLabel("mst_saisun_model","created_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "created_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "created_at";

	
	
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




	$tdatamst_saisun_model["created_at"] = $fdata;
//	created_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "created_by";
	$fdata["GoodName"] = "created_by";
	$fdata["ownerTable"] = "mst_saisun_model";
	$fdata["Label"] = GetFieldLabel("mst_saisun_model","created_by");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "created_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "created_by";

	
	
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




	$tdatamst_saisun_model["created_by"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "mst_saisun_model";
	$fdata["Label"] = GetFieldLabel("mst_saisun_model","updated_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "updated_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "updated_at";

	
	
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




	$tdatamst_saisun_model["updated_at"] = $fdata;
//	updated_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "updated_by";
	$fdata["GoodName"] = "updated_by";
	$fdata["ownerTable"] = "mst_saisun_model";
	$fdata["Label"] = GetFieldLabel("mst_saisun_model","updated_by");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "updated_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "updated_by";

	
	
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




	$tdatamst_saisun_model["updated_by"] = $fdata;


$tables_data["mst_saisun_model"]=&$tdatamst_saisun_model;
$field_labels["mst_saisun_model"] = &$fieldLabelsmst_saisun_model;
$fieldToolTips["mst_saisun_model"] = &$fieldToolTipsmst_saisun_model;
$placeHolders["mst_saisun_model"] = &$placeHoldersmst_saisun_model;
$page_titles["mst_saisun_model"] = &$pageTitlesmst_saisun_model;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mst_saisun_model"] = array();
//	mst_saisun_item_by_category
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="mst_saisun_item_by_category";
		$detailsParam["dOriginalTable"] = "mst_saisun_item_by_category";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "mst_saisun_item_by_category";
	$detailsParam["dCaptionTable"] = GetTableCaption("mst_saisun_item_by_category");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

/*			$detailsParam["dispChildCount"] = "1";
*/
	$detailsParam["dispChildCount"] = "1";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 0;
		$detailsParam["previewOnView"] = 1;
		
	$detailsTablesData["mst_saisun_model"][$dIndex] = $detailsParam;

	
		$detailsTablesData["mst_saisun_model"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["mst_saisun_model"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["mst_saisun_model"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["mst_saisun_model"][$dIndex]["detailKeys"][]="saisun_model_id";

// tables which are master tables for current table (detail)
$masterTablesData["mst_saisun_model"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mst_saisun_model()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	name,  	sort,  	condition_tmp_id,  	output_template,  	created_at,  	created_by,  	updated_at,  	updated_by";
$proto0["m_strFrom"] = "FROM mst_saisun_model";
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
	"m_strTable" => "mst_saisun_model",
	"m_srcTableName" => "mst_saisun_model"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "mst_saisun_model";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "mst_saisun_model",
	"m_srcTableName" => "mst_saisun_model"
));

$proto8["m_sql"] = "name";
$proto8["m_srcTableName"] = "mst_saisun_model";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "sort",
	"m_strTable" => "mst_saisun_model",
	"m_srcTableName" => "mst_saisun_model"
));

$proto10["m_sql"] = "sort";
$proto10["m_srcTableName"] = "mst_saisun_model";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "condition_tmp_id",
	"m_strTable" => "mst_saisun_model",
	"m_srcTableName" => "mst_saisun_model"
));

$proto12["m_sql"] = "condition_tmp_id";
$proto12["m_srcTableName"] = "mst_saisun_model";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "output_template",
	"m_strTable" => "mst_saisun_model",
	"m_srcTableName" => "mst_saisun_model"
));

$proto14["m_sql"] = "output_template";
$proto14["m_srcTableName"] = "mst_saisun_model";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "mst_saisun_model",
	"m_srcTableName" => "mst_saisun_model"
));

$proto16["m_sql"] = "created_at";
$proto16["m_srcTableName"] = "mst_saisun_model";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "created_by",
	"m_strTable" => "mst_saisun_model",
	"m_srcTableName" => "mst_saisun_model"
));

$proto18["m_sql"] = "created_by";
$proto18["m_srcTableName"] = "mst_saisun_model";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "mst_saisun_model",
	"m_srcTableName" => "mst_saisun_model"
));

$proto20["m_sql"] = "updated_at";
$proto20["m_srcTableName"] = "mst_saisun_model";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by",
	"m_strTable" => "mst_saisun_model",
	"m_srcTableName" => "mst_saisun_model"
));

$proto22["m_sql"] = "updated_by";
$proto22["m_srcTableName"] = "mst_saisun_model";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "mst_saisun_model";
$proto25["m_srcTableName"] = "mst_saisun_model";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "id";
$proto25["m_columns"][] = "name";
$proto25["m_columns"][] = "sort";
$proto25["m_columns"][] = "condition_tmp_id";
$proto25["m_columns"][] = "output_template";
$proto25["m_columns"][] = "created_at";
$proto25["m_columns"][] = "created_by";
$proto25["m_columns"][] = "updated_at";
$proto25["m_columns"][] = "updated_by";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "mst_saisun_model";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "mst_saisun_model";
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
$proto0["m_srcTableName"]="mst_saisun_model";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mst_saisun_model = createSqlQuery_mst_saisun_model();


	
		;

									

$tdatamst_saisun_model[".sqlquery"] = $queryData_mst_saisun_model;

$tableEvents["mst_saisun_model"] = new eventsBase;
$tdatamst_saisun_model[".hasEvents"] = false;

?>