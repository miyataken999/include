<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamst_journalizing = array();
	$tdatamst_journalizing[".truncateText"] = true;
	$tdatamst_journalizing[".NumberOfChars"] = 80;
	$tdatamst_journalizing[".ShortName"] = "mst_journalizing";
	$tdatamst_journalizing[".OwnerID"] = "";
	$tdatamst_journalizing[".OriginalTable"] = "mst_journalizing";

//	field labels
$fieldLabelsmst_journalizing = array();
$fieldToolTipsmst_journalizing = array();
$pageTitlesmst_journalizing = array();
$placeHoldersmst_journalizing = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmst_journalizing["Japanese"] = array();
	$fieldToolTipsmst_journalizing["Japanese"] = array();
	$placeHoldersmst_journalizing["Japanese"] = array();
	$pageTitlesmst_journalizing["Japanese"] = array();
	$fieldLabelsmst_journalizing["Japanese"]["id"] = "Id";
	$fieldToolTipsmst_journalizing["Japanese"]["id"] = "";
	$placeHoldersmst_journalizing["Japanese"]["id"] = "";
	$fieldLabelsmst_journalizing["Japanese"]["name"] = "Name";
	$fieldToolTipsmst_journalizing["Japanese"]["name"] = "";
	$placeHoldersmst_journalizing["Japanese"]["name"] = "";
	$fieldLabelsmst_journalizing["Japanese"]["sort"] = "Sort";
	$fieldToolTipsmst_journalizing["Japanese"]["sort"] = "";
	$placeHoldersmst_journalizing["Japanese"]["sort"] = "";
	$fieldLabelsmst_journalizing["Japanese"]["group"] = "仕訳け項目";
	$fieldToolTipsmst_journalizing["Japanese"]["group"] = "";
	$placeHoldersmst_journalizing["Japanese"]["group"] = "";
	$fieldLabelsmst_journalizing["Japanese"]["update_by"] = "更新者";
	$fieldToolTipsmst_journalizing["Japanese"]["update_by"] = "";
	$placeHoldersmst_journalizing["Japanese"]["update_by"] = "";
	$fieldLabelsmst_journalizing["Japanese"]["update_at"] = "更新日";
	$fieldToolTipsmst_journalizing["Japanese"]["update_at"] = "";
	$placeHoldersmst_journalizing["Japanese"]["update_at"] = "";
	$fieldLabelsmst_journalizing["Japanese"]["create_by"] = "登録者";
	$fieldToolTipsmst_journalizing["Japanese"]["create_by"] = "";
	$placeHoldersmst_journalizing["Japanese"]["create_by"] = "";
	$fieldLabelsmst_journalizing["Japanese"]["create_at"] = "登録日";
	$fieldToolTipsmst_journalizing["Japanese"]["create_at"] = "";
	$placeHoldersmst_journalizing["Japanese"]["create_at"] = "";
	if (count($fieldToolTipsmst_journalizing["Japanese"]))
		$tdatamst_journalizing[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmst_journalizing[""] = array();
	$fieldToolTipsmst_journalizing[""] = array();
	$placeHoldersmst_journalizing[""] = array();
	$pageTitlesmst_journalizing[""] = array();
	$fieldLabelsmst_journalizing[""]["id"] = "Id";
	$fieldToolTipsmst_journalizing[""]["id"] = "";
	$placeHoldersmst_journalizing[""]["id"] = "";
	$fieldLabelsmst_journalizing[""]["name"] = "Name";
	$fieldToolTipsmst_journalizing[""]["name"] = "";
	$placeHoldersmst_journalizing[""]["name"] = "";
	$fieldLabelsmst_journalizing[""]["sort"] = "Sort";
	$fieldToolTipsmst_journalizing[""]["sort"] = "";
	$placeHoldersmst_journalizing[""]["sort"] = "";
	$fieldLabelsmst_journalizing[""]["group"] = "Group";
	$fieldToolTipsmst_journalizing[""]["group"] = "";
	$placeHoldersmst_journalizing[""]["group"] = "";
	$fieldLabelsmst_journalizing[""]["update_by"] = "Update By";
	$fieldToolTipsmst_journalizing[""]["update_by"] = "";
	$placeHoldersmst_journalizing[""]["update_by"] = "";
	$fieldLabelsmst_journalizing[""]["update_at"] = "Update At";
	$fieldToolTipsmst_journalizing[""]["update_at"] = "";
	$placeHoldersmst_journalizing[""]["update_at"] = "";
	$fieldLabelsmst_journalizing[""]["create_by"] = "Create By";
	$fieldToolTipsmst_journalizing[""]["create_by"] = "";
	$placeHoldersmst_journalizing[""]["create_by"] = "";
	$fieldLabelsmst_journalizing[""]["create_at"] = "Create At";
	$fieldToolTipsmst_journalizing[""]["create_at"] = "";
	$placeHoldersmst_journalizing[""]["create_at"] = "";
	if (count($fieldToolTipsmst_journalizing[""]))
		$tdatamst_journalizing[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmst_journalizing["English"] = array();
	$fieldToolTipsmst_journalizing["English"] = array();
	$placeHoldersmst_journalizing["English"] = array();
	$pageTitlesmst_journalizing["English"] = array();
	$fieldLabelsmst_journalizing["English"]["id"] = "Id";
	$fieldToolTipsmst_journalizing["English"]["id"] = "";
	$placeHoldersmst_journalizing["English"]["id"] = "";
	$fieldLabelsmst_journalizing["English"]["name"] = "Name";
	$fieldToolTipsmst_journalizing["English"]["name"] = "";
	$placeHoldersmst_journalizing["English"]["name"] = "";
	$fieldLabelsmst_journalizing["English"]["sort"] = "Sort";
	$fieldToolTipsmst_journalizing["English"]["sort"] = "";
	$placeHoldersmst_journalizing["English"]["sort"] = "";
	$fieldLabelsmst_journalizing["English"]["group"] = "Group";
	$fieldToolTipsmst_journalizing["English"]["group"] = "";
	$placeHoldersmst_journalizing["English"]["group"] = "";
	$fieldLabelsmst_journalizing["English"]["update_by"] = "Update By";
	$fieldToolTipsmst_journalizing["English"]["update_by"] = "";
	$placeHoldersmst_journalizing["English"]["update_by"] = "";
	$fieldLabelsmst_journalizing["English"]["update_at"] = "Update At";
	$fieldToolTipsmst_journalizing["English"]["update_at"] = "";
	$placeHoldersmst_journalizing["English"]["update_at"] = "";
	$fieldLabelsmst_journalizing["English"]["create_by"] = "Create By";
	$fieldToolTipsmst_journalizing["English"]["create_by"] = "";
	$placeHoldersmst_journalizing["English"]["create_by"] = "";
	$fieldLabelsmst_journalizing["English"]["create_at"] = "Create At";
	$fieldToolTipsmst_journalizing["English"]["create_at"] = "";
	$placeHoldersmst_journalizing["English"]["create_at"] = "";
	if (count($fieldToolTipsmst_journalizing["English"]))
		$tdatamst_journalizing[".isUseToolTips"] = true;
}


	$tdatamst_journalizing[".NCSearch"] = true;



$tdatamst_journalizing[".shortTableName"] = "mst_journalizing";
$tdatamst_journalizing[".nSecOptions"] = 0;
$tdatamst_journalizing[".recsPerRowPrint"] = 1;
$tdatamst_journalizing[".mainTableOwnerID"] = "";
$tdatamst_journalizing[".moveNext"] = 1;
$tdatamst_journalizing[".entityType"] = 0;

$tdatamst_journalizing[".strOriginalTableName"] = "mst_journalizing";

	



$tdatamst_journalizing[".showAddInPopup"] = false;

$tdatamst_journalizing[".showEditInPopup"] = false;

$tdatamst_journalizing[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamst_journalizing[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamst_journalizing[".fieldsForRegister"] = array();

$tdatamst_journalizing[".listAjax"] = false;

	$tdatamst_journalizing[".audit"] = true;

	$tdatamst_journalizing[".locking"] = false;



$tdatamst_journalizing[".list"] = true;

$tdatamst_journalizing[".inlineEdit"] = true;


$tdatamst_journalizing[".reorderRecordsByHeader"] = true;



$tdatamst_journalizing[".inlineAdd"] = true;

$tdatamst_journalizing[".import"] = true;

$tdatamst_journalizing[".exportTo"] = true;


$tdatamst_journalizing[".delete"] = true;

$tdatamst_journalizing[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamst_journalizing[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamst_journalizing[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamst_journalizing[".searchSaving"] = false;
//

$tdatamst_journalizing[".showSearchPanel"] = true;
		$tdatamst_journalizing[".flexibleSearch"] = true;

$tdatamst_journalizing[".isUseAjaxSuggest"] = true;

$tdatamst_journalizing[".rowHighlite"] = true;



																																																								

$tdatamst_journalizing[".ajaxCodeSnippetAdded"] = false;

$tdatamst_journalizing[".buttonsAdded"] = false;

$tdatamst_journalizing[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamst_journalizing[".isUseTimeForSearch"] = false;





$tdatamst_journalizing[".allSearchFields"] = array();
$tdatamst_journalizing[".filterFields"] = array();
$tdatamst_journalizing[".requiredSearchFields"] = array();

$tdatamst_journalizing[".allSearchFields"][] = "id";
	$tdatamst_journalizing[".allSearchFields"][] = "group";
	$tdatamst_journalizing[".allSearchFields"][] = "name";
	$tdatamst_journalizing[".allSearchFields"][] = "sort";
	$tdatamst_journalizing[".allSearchFields"][] = "update_by";
	$tdatamst_journalizing[".allSearchFields"][] = "update_at";
	$tdatamst_journalizing[".allSearchFields"][] = "create_by";
	$tdatamst_journalizing[".allSearchFields"][] = "create_at";
	

$tdatamst_journalizing[".googleLikeFields"] = array();
$tdatamst_journalizing[".googleLikeFields"][] = "id";
$tdatamst_journalizing[".googleLikeFields"][] = "name";
$tdatamst_journalizing[".googleLikeFields"][] = "sort";
$tdatamst_journalizing[".googleLikeFields"][] = "group";
$tdatamst_journalizing[".googleLikeFields"][] = "update_by";
$tdatamst_journalizing[".googleLikeFields"][] = "update_at";
$tdatamst_journalizing[".googleLikeFields"][] = "create_by";
$tdatamst_journalizing[".googleLikeFields"][] = "create_at";


$tdatamst_journalizing[".advSearchFields"] = array();
$tdatamst_journalizing[".advSearchFields"][] = "id";
$tdatamst_journalizing[".advSearchFields"][] = "group";
$tdatamst_journalizing[".advSearchFields"][] = "name";
$tdatamst_journalizing[".advSearchFields"][] = "sort";
$tdatamst_journalizing[".advSearchFields"][] = "update_by";
$tdatamst_journalizing[".advSearchFields"][] = "update_at";
$tdatamst_journalizing[".advSearchFields"][] = "create_by";
$tdatamst_journalizing[".advSearchFields"][] = "create_at";

$tdatamst_journalizing[".tableType"] = "list";

$tdatamst_journalizing[".printerPageOrientation"] = 0;
$tdatamst_journalizing[".nPrinterPageScale"] = 100;

$tdatamst_journalizing[".nPrinterSplitRecords"] = 40;

$tdatamst_journalizing[".nPrinterPDFSplitRecords"] = 40;



$tdatamst_journalizing[".geocodingEnabled"] = false;





$tdatamst_journalizing[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamst_journalizing[".pageSize"] = 100;

$tdatamst_journalizing[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `group`, sort";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamst_journalizing[".strOrderBy"] = $tstrOrderBy;

$tdatamst_journalizing[".orderindexes"] = array();
$tdatamst_journalizing[".orderindexes"][] = array(4, (1 ? "ASC" : "DESC"), "`group`");
$tdatamst_journalizing[".orderindexes"][] = array(3, (1 ? "ASC" : "DESC"), "sort");

$tdatamst_journalizing[".sqlHead"] = "SELECT id,  name,  sort,  `group`,  update_by,  update_at,  create_by,  create_at";
$tdatamst_journalizing[".sqlFrom"] = "FROM mst_journalizing";
$tdatamst_journalizing[".sqlWhereExpr"] = "";
$tdatamst_journalizing[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamst_journalizing[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamst_journalizing[".arrGroupsPerPage"] = $arrGPP;

$tdatamst_journalizing[".highlightSearchResults"] = true;

$tableKeysmst_journalizing = array();
$tableKeysmst_journalizing[] = "id";
$tdatamst_journalizing[".Keys"] = $tableKeysmst_journalizing;

$tdatamst_journalizing[".listFields"] = array();
$tdatamst_journalizing[".listFields"][] = "id";
$tdatamst_journalizing[".listFields"][] = "group";
$tdatamst_journalizing[".listFields"][] = "name";
$tdatamst_journalizing[".listFields"][] = "sort";
$tdatamst_journalizing[".listFields"][] = "update_by";
$tdatamst_journalizing[".listFields"][] = "update_at";
$tdatamst_journalizing[".listFields"][] = "create_by";
$tdatamst_journalizing[".listFields"][] = "create_at";

$tdatamst_journalizing[".hideMobileList"] = array();


$tdatamst_journalizing[".viewFields"] = array();

$tdatamst_journalizing[".addFields"] = array();

$tdatamst_journalizing[".masterListFields"] = array();
$tdatamst_journalizing[".masterListFields"][] = "id";
$tdatamst_journalizing[".masterListFields"][] = "name";
$tdatamst_journalizing[".masterListFields"][] = "sort";
$tdatamst_journalizing[".masterListFields"][] = "group";
$tdatamst_journalizing[".masterListFields"][] = "update_by";
$tdatamst_journalizing[".masterListFields"][] = "update_at";
$tdatamst_journalizing[".masterListFields"][] = "create_by";
$tdatamst_journalizing[".masterListFields"][] = "create_at";

$tdatamst_journalizing[".inlineAddFields"] = array();
$tdatamst_journalizing[".inlineAddFields"][] = "group";
$tdatamst_journalizing[".inlineAddFields"][] = "name";
$tdatamst_journalizing[".inlineAddFields"][] = "sort";

$tdatamst_journalizing[".editFields"] = array();

$tdatamst_journalizing[".inlineEditFields"] = array();
$tdatamst_journalizing[".inlineEditFields"][] = "group";
$tdatamst_journalizing[".inlineEditFields"][] = "name";
$tdatamst_journalizing[".inlineEditFields"][] = "sort";

$tdatamst_journalizing[".updateSelectedFields"] = array();


$tdatamst_journalizing[".exportFields"] = array();
$tdatamst_journalizing[".exportFields"][] = "id";
$tdatamst_journalizing[".exportFields"][] = "group";
$tdatamst_journalizing[".exportFields"][] = "name";
$tdatamst_journalizing[".exportFields"][] = "sort";
$tdatamst_journalizing[".exportFields"][] = "update_by";
$tdatamst_journalizing[".exportFields"][] = "update_at";
$tdatamst_journalizing[".exportFields"][] = "create_by";
$tdatamst_journalizing[".exportFields"][] = "create_at";

$tdatamst_journalizing[".importFields"] = array();
$tdatamst_journalizing[".importFields"][] = "id";
$tdatamst_journalizing[".importFields"][] = "name";
$tdatamst_journalizing[".importFields"][] = "sort";
$tdatamst_journalizing[".importFields"][] = "group";

$tdatamst_journalizing[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "mst_journalizing";
	$fdata["Label"] = GetFieldLabel("mst_journalizing","id");
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




	$tdatamst_journalizing["id"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "mst_journalizing";
	$fdata["Label"] = GetFieldLabel("mst_journalizing","name");
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




	$tdatamst_journalizing["name"] = $fdata;
//	sort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sort";
	$fdata["GoodName"] = "sort";
	$fdata["ownerTable"] = "mst_journalizing";
	$fdata["Label"] = GetFieldLabel("mst_journalizing","sort");
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




	$tdatamst_journalizing["sort"] = $fdata;
//	group
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "group";
	$fdata["GoodName"] = "group";
	$fdata["ownerTable"] = "mst_journalizing";
	$fdata["Label"] = GetFieldLabel("mst_journalizing","group");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "group";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`group`";

	
	
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
	$edata["LookupValues"][] = "勘定科目";
	$edata["LookupValues"][] = "補助科目";
	$edata["LookupValues"][] = "部門";

	
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




	$tdatamst_journalizing["group"] = $fdata;
//	update_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "update_by";
	$fdata["GoodName"] = "update_by";
	$fdata["ownerTable"] = "mst_journalizing";
	$fdata["Label"] = GetFieldLabel("mst_journalizing","update_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdatamst_journalizing["update_by"] = $fdata;
//	update_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "update_at";
	$fdata["GoodName"] = "update_at";
	$fdata["ownerTable"] = "mst_journalizing";
	$fdata["Label"] = GetFieldLabel("mst_journalizing","update_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdatamst_journalizing["update_at"] = $fdata;
//	create_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "create_by";
	$fdata["GoodName"] = "create_by";
	$fdata["ownerTable"] = "mst_journalizing";
	$fdata["Label"] = GetFieldLabel("mst_journalizing","create_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdatamst_journalizing["create_by"] = $fdata;
//	create_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "create_at";
	$fdata["GoodName"] = "create_at";
	$fdata["ownerTable"] = "mst_journalizing";
	$fdata["Label"] = GetFieldLabel("mst_journalizing","create_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdatamst_journalizing["create_at"] = $fdata;


$tables_data["mst_journalizing"]=&$tdatamst_journalizing;
$field_labels["mst_journalizing"] = &$fieldLabelsmst_journalizing;
$fieldToolTips["mst_journalizing"] = &$fieldToolTipsmst_journalizing;
$placeHolders["mst_journalizing"] = &$placeHoldersmst_journalizing;
$page_titles["mst_journalizing"] = &$pageTitlesmst_journalizing;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mst_journalizing"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mst_journalizing"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mst_journalizing()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  name,  sort,  `group`,  update_by,  update_at,  create_by,  create_at";
$proto0["m_strFrom"] = "FROM mst_journalizing";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY `group`, sort";
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
	"m_strTable" => "mst_journalizing",
	"m_srcTableName" => "mst_journalizing"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "mst_journalizing";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "mst_journalizing",
	"m_srcTableName" => "mst_journalizing"
));

$proto8["m_sql"] = "name";
$proto8["m_srcTableName"] = "mst_journalizing";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "sort",
	"m_strTable" => "mst_journalizing",
	"m_srcTableName" => "mst_journalizing"
));

$proto10["m_sql"] = "sort";
$proto10["m_srcTableName"] = "mst_journalizing";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "group",
	"m_strTable" => "mst_journalizing",
	"m_srcTableName" => "mst_journalizing"
));

$proto12["m_sql"] = "`group`";
$proto12["m_srcTableName"] = "mst_journalizing";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "update_by",
	"m_strTable" => "mst_journalizing",
	"m_srcTableName" => "mst_journalizing"
));

$proto14["m_sql"] = "update_by";
$proto14["m_srcTableName"] = "mst_journalizing";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "update_at",
	"m_strTable" => "mst_journalizing",
	"m_srcTableName" => "mst_journalizing"
));

$proto16["m_sql"] = "update_at";
$proto16["m_srcTableName"] = "mst_journalizing";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "create_by",
	"m_strTable" => "mst_journalizing",
	"m_srcTableName" => "mst_journalizing"
));

$proto18["m_sql"] = "create_by";
$proto18["m_srcTableName"] = "mst_journalizing";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "create_at",
	"m_strTable" => "mst_journalizing",
	"m_srcTableName" => "mst_journalizing"
));

$proto20["m_sql"] = "create_at";
$proto20["m_srcTableName"] = "mst_journalizing";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "mst_journalizing";
$proto23["m_srcTableName"] = "mst_journalizing";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "id";
$proto23["m_columns"][] = "name";
$proto23["m_columns"][] = "sort";
$proto23["m_columns"][] = "group";
$proto23["m_columns"][] = "update_by";
$proto23["m_columns"][] = "update_at";
$proto23["m_columns"][] = "create_by";
$proto23["m_columns"][] = "create_at";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "mst_journalizing";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "mst_journalizing";
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
												$proto26=array();
						$obj = new SQLField(array(
	"m_strName" => "group",
	"m_strTable" => "mst_journalizing",
	"m_srcTableName" => "mst_journalizing"
));

$proto26["m_column"]=$obj;
$proto26["m_bAsc"] = 1;
$proto26["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto26);

$proto0["m_orderby"][]=$obj;					
												$proto28=array();
						$obj = new SQLField(array(
	"m_strName" => "sort",
	"m_strTable" => "mst_journalizing",
	"m_srcTableName" => "mst_journalizing"
));

$proto28["m_column"]=$obj;
$proto28["m_bAsc"] = 1;
$proto28["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto28);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="mst_journalizing";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mst_journalizing = createSqlQuery_mst_journalizing();


	
		;

								

$tdatamst_journalizing[".sqlquery"] = $queryData_mst_journalizing;

include_once(getabspath("include/mst_journalizing_events.php"));
$tableEvents["mst_journalizing"] = new eventclass_mst_journalizing;
$tdatamst_journalizing[".hasEvents"] = true;

?>