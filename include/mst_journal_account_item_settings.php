<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamst_journal_account_item = array();
	$tdatamst_journal_account_item[".truncateText"] = true;
	$tdatamst_journal_account_item[".NumberOfChars"] = 80;
	$tdatamst_journal_account_item[".ShortName"] = "mst_journal_account_item";
	$tdatamst_journal_account_item[".OwnerID"] = "";
	$tdatamst_journal_account_item[".OriginalTable"] = "mst_journal_account_item";

//	field labels
$fieldLabelsmst_journal_account_item = array();
$fieldToolTipsmst_journal_account_item = array();
$pageTitlesmst_journal_account_item = array();
$placeHoldersmst_journal_account_item = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmst_journal_account_item["Japanese"] = array();
	$fieldToolTipsmst_journal_account_item["Japanese"] = array();
	$placeHoldersmst_journal_account_item["Japanese"] = array();
	$pageTitlesmst_journal_account_item["Japanese"] = array();
	$fieldLabelsmst_journal_account_item["Japanese"]["id"] = "Id";
	$fieldToolTipsmst_journal_account_item["Japanese"]["id"] = "";
	$placeHoldersmst_journal_account_item["Japanese"]["id"] = "";
	$fieldLabelsmst_journal_account_item["Japanese"]["name"] = "Name";
	$fieldToolTipsmst_journal_account_item["Japanese"]["name"] = "";
	$placeHoldersmst_journal_account_item["Japanese"]["name"] = "";
	$fieldLabelsmst_journal_account_item["Japanese"]["sort"] = "Sort";
	$fieldToolTipsmst_journal_account_item["Japanese"]["sort"] = "";
	$placeHoldersmst_journal_account_item["Japanese"]["sort"] = "";
	$fieldLabelsmst_journal_account_item["Japanese"]["update_by"] = "更新者";
	$fieldToolTipsmst_journal_account_item["Japanese"]["update_by"] = "";
	$placeHoldersmst_journal_account_item["Japanese"]["update_by"] = "";
	$fieldLabelsmst_journal_account_item["Japanese"]["update_at"] = "更新日";
	$fieldToolTipsmst_journal_account_item["Japanese"]["update_at"] = "";
	$placeHoldersmst_journal_account_item["Japanese"]["update_at"] = "";
	$fieldLabelsmst_journal_account_item["Japanese"]["create_by"] = "登録者";
	$fieldToolTipsmst_journal_account_item["Japanese"]["create_by"] = "";
	$placeHoldersmst_journal_account_item["Japanese"]["create_by"] = "";
	$fieldLabelsmst_journal_account_item["Japanese"]["create_at"] = "登録日";
	$fieldToolTipsmst_journal_account_item["Japanese"]["create_at"] = "";
	$placeHoldersmst_journal_account_item["Japanese"]["create_at"] = "";
	if (count($fieldToolTipsmst_journal_account_item["Japanese"]))
		$tdatamst_journal_account_item[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmst_journal_account_item[""] = array();
	$fieldToolTipsmst_journal_account_item[""] = array();
	$placeHoldersmst_journal_account_item[""] = array();
	$pageTitlesmst_journal_account_item[""] = array();
	$fieldLabelsmst_journal_account_item[""]["id"] = "Id";
	$fieldToolTipsmst_journal_account_item[""]["id"] = "";
	$placeHoldersmst_journal_account_item[""]["id"] = "";
	$fieldLabelsmst_journal_account_item[""]["name"] = "Name";
	$fieldToolTipsmst_journal_account_item[""]["name"] = "";
	$placeHoldersmst_journal_account_item[""]["name"] = "";
	$fieldLabelsmst_journal_account_item[""]["sort"] = "Sort";
	$fieldToolTipsmst_journal_account_item[""]["sort"] = "";
	$placeHoldersmst_journal_account_item[""]["sort"] = "";
	$fieldLabelsmst_journal_account_item[""]["update_by"] = "Update By";
	$fieldToolTipsmst_journal_account_item[""]["update_by"] = "";
	$placeHoldersmst_journal_account_item[""]["update_by"] = "";
	$fieldLabelsmst_journal_account_item[""]["update_at"] = "Update At";
	$fieldToolTipsmst_journal_account_item[""]["update_at"] = "";
	$placeHoldersmst_journal_account_item[""]["update_at"] = "";
	$fieldLabelsmst_journal_account_item[""]["create_by"] = "Create By";
	$fieldToolTipsmst_journal_account_item[""]["create_by"] = "";
	$placeHoldersmst_journal_account_item[""]["create_by"] = "";
	$fieldLabelsmst_journal_account_item[""]["create_at"] = "Create At";
	$fieldToolTipsmst_journal_account_item[""]["create_at"] = "";
	$placeHoldersmst_journal_account_item[""]["create_at"] = "";
	if (count($fieldToolTipsmst_journal_account_item[""]))
		$tdatamst_journal_account_item[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmst_journal_account_item["English"] = array();
	$fieldToolTipsmst_journal_account_item["English"] = array();
	$placeHoldersmst_journal_account_item["English"] = array();
	$pageTitlesmst_journal_account_item["English"] = array();
	$fieldLabelsmst_journal_account_item["English"]["id"] = "Id";
	$fieldToolTipsmst_journal_account_item["English"]["id"] = "";
	$placeHoldersmst_journal_account_item["English"]["id"] = "";
	$fieldLabelsmst_journal_account_item["English"]["name"] = "Name";
	$fieldToolTipsmst_journal_account_item["English"]["name"] = "";
	$placeHoldersmst_journal_account_item["English"]["name"] = "";
	$fieldLabelsmst_journal_account_item["English"]["sort"] = "Sort";
	$fieldToolTipsmst_journal_account_item["English"]["sort"] = "";
	$placeHoldersmst_journal_account_item["English"]["sort"] = "";
	$fieldLabelsmst_journal_account_item["English"]["update_by"] = "Update By";
	$fieldToolTipsmst_journal_account_item["English"]["update_by"] = "";
	$placeHoldersmst_journal_account_item["English"]["update_by"] = "";
	$fieldLabelsmst_journal_account_item["English"]["update_at"] = "Update At";
	$fieldToolTipsmst_journal_account_item["English"]["update_at"] = "";
	$placeHoldersmst_journal_account_item["English"]["update_at"] = "";
	$fieldLabelsmst_journal_account_item["English"]["create_by"] = "Create By";
	$fieldToolTipsmst_journal_account_item["English"]["create_by"] = "";
	$placeHoldersmst_journal_account_item["English"]["create_by"] = "";
	$fieldLabelsmst_journal_account_item["English"]["create_at"] = "Create At";
	$fieldToolTipsmst_journal_account_item["English"]["create_at"] = "";
	$placeHoldersmst_journal_account_item["English"]["create_at"] = "";
	if (count($fieldToolTipsmst_journal_account_item["English"]))
		$tdatamst_journal_account_item[".isUseToolTips"] = true;
}


	$tdatamst_journal_account_item[".NCSearch"] = true;



$tdatamst_journal_account_item[".shortTableName"] = "mst_journal_account_item";
$tdatamst_journal_account_item[".nSecOptions"] = 0;
$tdatamst_journal_account_item[".recsPerRowPrint"] = 1;
$tdatamst_journal_account_item[".mainTableOwnerID"] = "";
$tdatamst_journal_account_item[".moveNext"] = 1;
$tdatamst_journal_account_item[".entityType"] = 0;

$tdatamst_journal_account_item[".strOriginalTableName"] = "mst_journal_account_item";

	



$tdatamst_journal_account_item[".showAddInPopup"] = false;

$tdatamst_journal_account_item[".showEditInPopup"] = false;

$tdatamst_journal_account_item[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamst_journal_account_item[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamst_journal_account_item[".fieldsForRegister"] = array();

$tdatamst_journal_account_item[".listAjax"] = false;

	$tdatamst_journal_account_item[".audit"] = true;

	$tdatamst_journal_account_item[".locking"] = false;



$tdatamst_journal_account_item[".list"] = true;

$tdatamst_journal_account_item[".inlineEdit"] = true;


$tdatamst_journal_account_item[".reorderRecordsByHeader"] = true;



$tdatamst_journal_account_item[".inlineAdd"] = true;

$tdatamst_journal_account_item[".import"] = true;

$tdatamst_journal_account_item[".exportTo"] = true;


$tdatamst_journal_account_item[".delete"] = true;

$tdatamst_journal_account_item[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamst_journal_account_item[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamst_journal_account_item[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamst_journal_account_item[".searchSaving"] = false;
//

$tdatamst_journal_account_item[".showSearchPanel"] = true;
		$tdatamst_journal_account_item[".flexibleSearch"] = true;

$tdatamst_journal_account_item[".isUseAjaxSuggest"] = true;

$tdatamst_journal_account_item[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatamst_journal_account_item[".ajaxCodeSnippetAdded"] = false;

$tdatamst_journal_account_item[".buttonsAdded"] = false;

$tdatamst_journal_account_item[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamst_journal_account_item[".isUseTimeForSearch"] = false;





$tdatamst_journal_account_item[".allSearchFields"] = array();
$tdatamst_journal_account_item[".filterFields"] = array();
$tdatamst_journal_account_item[".requiredSearchFields"] = array();

$tdatamst_journal_account_item[".allSearchFields"][] = "id";
	$tdatamst_journal_account_item[".allSearchFields"][] = "name";
	$tdatamst_journal_account_item[".allSearchFields"][] = "sort";
	$tdatamst_journal_account_item[".allSearchFields"][] = "update_by";
	$tdatamst_journal_account_item[".allSearchFields"][] = "update_at";
	$tdatamst_journal_account_item[".allSearchFields"][] = "create_by";
	$tdatamst_journal_account_item[".allSearchFields"][] = "create_at";
	

$tdatamst_journal_account_item[".googleLikeFields"] = array();
$tdatamst_journal_account_item[".googleLikeFields"][] = "id";
$tdatamst_journal_account_item[".googleLikeFields"][] = "name";
$tdatamst_journal_account_item[".googleLikeFields"][] = "sort";
$tdatamst_journal_account_item[".googleLikeFields"][] = "update_by";
$tdatamst_journal_account_item[".googleLikeFields"][] = "update_at";
$tdatamst_journal_account_item[".googleLikeFields"][] = "create_by";
$tdatamst_journal_account_item[".googleLikeFields"][] = "create_at";


$tdatamst_journal_account_item[".advSearchFields"] = array();
$tdatamst_journal_account_item[".advSearchFields"][] = "id";
$tdatamst_journal_account_item[".advSearchFields"][] = "name";
$tdatamst_journal_account_item[".advSearchFields"][] = "sort";
$tdatamst_journal_account_item[".advSearchFields"][] = "update_by";
$tdatamst_journal_account_item[".advSearchFields"][] = "update_at";
$tdatamst_journal_account_item[".advSearchFields"][] = "create_by";
$tdatamst_journal_account_item[".advSearchFields"][] = "create_at";

$tdatamst_journal_account_item[".tableType"] = "list";

$tdatamst_journal_account_item[".printerPageOrientation"] = 0;
$tdatamst_journal_account_item[".nPrinterPageScale"] = 100;

$tdatamst_journal_account_item[".nPrinterSplitRecords"] = 40;

$tdatamst_journal_account_item[".nPrinterPDFSplitRecords"] = 40;



$tdatamst_journal_account_item[".geocodingEnabled"] = false;





$tdatamst_journal_account_item[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamst_journal_account_item[".pageSize"] = 100;

$tdatamst_journal_account_item[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY sort";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamst_journal_account_item[".strOrderBy"] = $tstrOrderBy;

$tdatamst_journal_account_item[".orderindexes"] = array();
$tdatamst_journal_account_item[".orderindexes"][] = array(3, (1 ? "ASC" : "DESC"), "`sort`");

$tdatamst_journal_account_item[".sqlHead"] = "SELECT id,  name,  sort,  update_by,  update_at,  create_by,  create_at";
$tdatamst_journal_account_item[".sqlFrom"] = "FROM mst_journal_account_item";
$tdatamst_journal_account_item[".sqlWhereExpr"] = "";
$tdatamst_journal_account_item[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamst_journal_account_item[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamst_journal_account_item[".arrGroupsPerPage"] = $arrGPP;

$tdatamst_journal_account_item[".highlightSearchResults"] = true;

$tableKeysmst_journal_account_item = array();
$tableKeysmst_journal_account_item[] = "id";
$tdatamst_journal_account_item[".Keys"] = $tableKeysmst_journal_account_item;

$tdatamst_journal_account_item[".listFields"] = array();
$tdatamst_journal_account_item[".listFields"][] = "id";
$tdatamst_journal_account_item[".listFields"][] = "name";
$tdatamst_journal_account_item[".listFields"][] = "sort";
$tdatamst_journal_account_item[".listFields"][] = "update_by";
$tdatamst_journal_account_item[".listFields"][] = "update_at";
$tdatamst_journal_account_item[".listFields"][] = "create_by";
$tdatamst_journal_account_item[".listFields"][] = "create_at";

$tdatamst_journal_account_item[".hideMobileList"] = array();


$tdatamst_journal_account_item[".viewFields"] = array();

$tdatamst_journal_account_item[".addFields"] = array();

$tdatamst_journal_account_item[".masterListFields"] = array();
$tdatamst_journal_account_item[".masterListFields"][] = "id";
$tdatamst_journal_account_item[".masterListFields"][] = "name";
$tdatamst_journal_account_item[".masterListFields"][] = "sort";
$tdatamst_journal_account_item[".masterListFields"][] = "update_by";
$tdatamst_journal_account_item[".masterListFields"][] = "update_at";
$tdatamst_journal_account_item[".masterListFields"][] = "create_by";
$tdatamst_journal_account_item[".masterListFields"][] = "create_at";

$tdatamst_journal_account_item[".inlineAddFields"] = array();
$tdatamst_journal_account_item[".inlineAddFields"][] = "name";
$tdatamst_journal_account_item[".inlineAddFields"][] = "sort";
$tdatamst_journal_account_item[".inlineAddFields"][] = "update_by";
$tdatamst_journal_account_item[".inlineAddFields"][] = "update_at";
$tdatamst_journal_account_item[".inlineAddFields"][] = "create_by";
$tdatamst_journal_account_item[".inlineAddFields"][] = "create_at";

$tdatamst_journal_account_item[".editFields"] = array();

$tdatamst_journal_account_item[".inlineEditFields"] = array();
$tdatamst_journal_account_item[".inlineEditFields"][] = "name";
$tdatamst_journal_account_item[".inlineEditFields"][] = "sort";
$tdatamst_journal_account_item[".inlineEditFields"][] = "update_by";
$tdatamst_journal_account_item[".inlineEditFields"][] = "update_at";
$tdatamst_journal_account_item[".inlineEditFields"][] = "create_by";
$tdatamst_journal_account_item[".inlineEditFields"][] = "create_at";

$tdatamst_journal_account_item[".updateSelectedFields"] = array();


$tdatamst_journal_account_item[".exportFields"] = array();
$tdatamst_journal_account_item[".exportFields"][] = "id";
$tdatamst_journal_account_item[".exportFields"][] = "name";
$tdatamst_journal_account_item[".exportFields"][] = "sort";
$tdatamst_journal_account_item[".exportFields"][] = "update_by";
$tdatamst_journal_account_item[".exportFields"][] = "update_at";
$tdatamst_journal_account_item[".exportFields"][] = "create_by";
$tdatamst_journal_account_item[".exportFields"][] = "create_at";

$tdatamst_journal_account_item[".importFields"] = array();
$tdatamst_journal_account_item[".importFields"][] = "id";
$tdatamst_journal_account_item[".importFields"][] = "name";
$tdatamst_journal_account_item[".importFields"][] = "sort";
$tdatamst_journal_account_item[".importFields"][] = "update_by";
$tdatamst_journal_account_item[".importFields"][] = "update_at";
$tdatamst_journal_account_item[".importFields"][] = "create_by";
$tdatamst_journal_account_item[".importFields"][] = "create_at";

$tdatamst_journal_account_item[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "mst_journal_account_item";
	$fdata["Label"] = GetFieldLabel("mst_journal_account_item","id");
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




	$tdatamst_journal_account_item["id"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "mst_journal_account_item";
	$fdata["Label"] = GetFieldLabel("mst_journal_account_item","name");
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




	$tdatamst_journal_account_item["name"] = $fdata;
//	sort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sort";
	$fdata["GoodName"] = "sort";
	$fdata["ownerTable"] = "mst_journal_account_item";
	$fdata["Label"] = GetFieldLabel("mst_journal_account_item","sort");
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




	$tdatamst_journal_account_item["sort"] = $fdata;
//	update_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "update_by";
	$fdata["GoodName"] = "update_by";
	$fdata["ownerTable"] = "mst_journal_account_item";
	$fdata["Label"] = GetFieldLabel("mst_journal_account_item","update_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "update_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "update_by";

	
	
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




	$tdatamst_journal_account_item["update_by"] = $fdata;
//	update_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "update_at";
	$fdata["GoodName"] = "update_at";
	$fdata["ownerTable"] = "mst_journal_account_item";
	$fdata["Label"] = GetFieldLabel("mst_journal_account_item","update_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "update_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "update_at";

	
	
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




	$tdatamst_journal_account_item["update_at"] = $fdata;
//	create_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "create_by";
	$fdata["GoodName"] = "create_by";
	$fdata["ownerTable"] = "mst_journal_account_item";
	$fdata["Label"] = GetFieldLabel("mst_journal_account_item","create_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

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




	$tdatamst_journal_account_item["create_by"] = $fdata;
//	create_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "create_at";
	$fdata["GoodName"] = "create_at";
	$fdata["ownerTable"] = "mst_journal_account_item";
	$fdata["Label"] = GetFieldLabel("mst_journal_account_item","create_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

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




	$tdatamst_journal_account_item["create_at"] = $fdata;


$tables_data["mst_journal_account_item"]=&$tdatamst_journal_account_item;
$field_labels["mst_journal_account_item"] = &$fieldLabelsmst_journal_account_item;
$fieldToolTips["mst_journal_account_item"] = &$fieldToolTipsmst_journal_account_item;
$placeHolders["mst_journal_account_item"] = &$placeHoldersmst_journal_account_item;
$page_titles["mst_journal_account_item"] = &$pageTitlesmst_journal_account_item;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mst_journal_account_item"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mst_journal_account_item"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mst_journal_account_item()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  name,  sort,  update_by,  update_at,  create_by,  create_at";
$proto0["m_strFrom"] = "FROM mst_journal_account_item";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY sort";
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
	"m_strTable" => "mst_journal_account_item",
	"m_srcTableName" => "mst_journal_account_item"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "mst_journal_account_item";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "mst_journal_account_item",
	"m_srcTableName" => "mst_journal_account_item"
));

$proto8["m_sql"] = "name";
$proto8["m_srcTableName"] = "mst_journal_account_item";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "sort",
	"m_strTable" => "mst_journal_account_item",
	"m_srcTableName" => "mst_journal_account_item"
));

$proto10["m_sql"] = "sort";
$proto10["m_srcTableName"] = "mst_journal_account_item";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "update_by",
	"m_strTable" => "mst_journal_account_item",
	"m_srcTableName" => "mst_journal_account_item"
));

$proto12["m_sql"] = "update_by";
$proto12["m_srcTableName"] = "mst_journal_account_item";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "update_at",
	"m_strTable" => "mst_journal_account_item",
	"m_srcTableName" => "mst_journal_account_item"
));

$proto14["m_sql"] = "update_at";
$proto14["m_srcTableName"] = "mst_journal_account_item";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "create_by",
	"m_strTable" => "mst_journal_account_item",
	"m_srcTableName" => "mst_journal_account_item"
));

$proto16["m_sql"] = "create_by";
$proto16["m_srcTableName"] = "mst_journal_account_item";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "create_at",
	"m_strTable" => "mst_journal_account_item",
	"m_srcTableName" => "mst_journal_account_item"
));

$proto18["m_sql"] = "create_at";
$proto18["m_srcTableName"] = "mst_journal_account_item";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "mst_journal_account_item";
$proto21["m_srcTableName"] = "mst_journal_account_item";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "id";
$proto21["m_columns"][] = "name";
$proto21["m_columns"][] = "sort";
$proto21["m_columns"][] = "update_by";
$proto21["m_columns"][] = "update_at";
$proto21["m_columns"][] = "create_by";
$proto21["m_columns"][] = "create_at";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "mst_journal_account_item";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "mst_journal_account_item";
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
												$proto24=array();
						$obj = new SQLField(array(
	"m_strName" => "sort",
	"m_strTable" => "mst_journal_account_item",
	"m_srcTableName" => "mst_journal_account_item"
));

$proto24["m_column"]=$obj;
$proto24["m_bAsc"] = 1;
$proto24["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto24);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="mst_journal_account_item";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mst_journal_account_item = createSqlQuery_mst_journal_account_item();


	
		;

							

$tdatamst_journal_account_item[".sqlquery"] = $queryData_mst_journal_account_item;

include_once(getabspath("include/mst_journal_account_item_events.php"));
$tableEvents["mst_journal_account_item"] = new eventclass_mst_journal_account_item;
$tdatamst_journal_account_item[".hasEvents"] = true;

?>