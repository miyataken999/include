<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamst_Material = array();
	$tdatamst_Material[".truncateText"] = true;
	$tdatamst_Material[".NumberOfChars"] = 80;
	$tdatamst_Material[".ShortName"] = "mst_Material";
	$tdatamst_Material[".OwnerID"] = "";
	$tdatamst_Material[".OriginalTable"] = "mst_Material";

//	field labels
$fieldLabelsmst_Material = array();
$fieldToolTipsmst_Material = array();
$pageTitlesmst_Material = array();
$placeHoldersmst_Material = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmst_Material["Japanese"] = array();
	$fieldToolTipsmst_Material["Japanese"] = array();
	$placeHoldersmst_Material["Japanese"] = array();
	$pageTitlesmst_Material["Japanese"] = array();
	$fieldLabelsmst_Material["Japanese"]["id"] = "Id";
	$fieldToolTipsmst_Material["Japanese"]["id"] = "";
	$placeHoldersmst_Material["Japanese"]["id"] = "";
	$fieldLabelsmst_Material["Japanese"]["name"] = "Name";
	$fieldToolTipsmst_Material["Japanese"]["name"] = "";
	$placeHoldersmst_Material["Japanese"]["name"] = "";
	$fieldLabelsmst_Material["Japanese"]["sort"] = "Sort";
	$fieldToolTipsmst_Material["Japanese"]["sort"] = "";
	$placeHoldersmst_Material["Japanese"]["sort"] = "";
	$fieldLabelsmst_Material["Japanese"]["yahoo_junle"] = "Yahoo Junle";
	$fieldToolTipsmst_Material["Japanese"]["yahoo_junle"] = "";
	$placeHoldersmst_Material["Japanese"]["yahoo_junle"] = "";
	$fieldLabelsmst_Material["Japanese"]["category_id"] = "Category Id";
	$fieldToolTipsmst_Material["Japanese"]["category_id"] = "";
	$placeHoldersmst_Material["Japanese"]["category_id"] = "";
	$fieldLabelsmst_Material["Japanese"]["sub_category_id1"] = "Sub Category Id1";
	$fieldToolTipsmst_Material["Japanese"]["sub_category_id1"] = "";
	$placeHoldersmst_Material["Japanese"]["sub_category_id1"] = "";
	$fieldLabelsmst_Material["Japanese"]["update_at"] = "Update At";
	$fieldToolTipsmst_Material["Japanese"]["update_at"] = "";
	$placeHoldersmst_Material["Japanese"]["update_at"] = "";
	$fieldLabelsmst_Material["Japanese"]["update_by"] = "Update By";
	$fieldToolTipsmst_Material["Japanese"]["update_by"] = "";
	$placeHoldersmst_Material["Japanese"]["update_by"] = "";
	$fieldLabelsmst_Material["Japanese"]["create_at"] = "Create At";
	$fieldToolTipsmst_Material["Japanese"]["create_at"] = "";
	$placeHoldersmst_Material["Japanese"]["create_at"] = "";
	$fieldLabelsmst_Material["Japanese"]["create_by"] = "Create By";
	$fieldToolTipsmst_Material["Japanese"]["create_by"] = "";
	$placeHoldersmst_Material["Japanese"]["create_by"] = "";
	if (count($fieldToolTipsmst_Material["Japanese"]))
		$tdatamst_Material[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmst_Material[""] = array();
	$fieldToolTipsmst_Material[""] = array();
	$placeHoldersmst_Material[""] = array();
	$pageTitlesmst_Material[""] = array();
	$fieldLabelsmst_Material[""]["id"] = "Id";
	$fieldToolTipsmst_Material[""]["id"] = "";
	$placeHoldersmst_Material[""]["id"] = "";
	$fieldLabelsmst_Material[""]["name"] = "Name";
	$fieldToolTipsmst_Material[""]["name"] = "";
	$placeHoldersmst_Material[""]["name"] = "";
	$fieldLabelsmst_Material[""]["sort"] = "Sort";
	$fieldToolTipsmst_Material[""]["sort"] = "";
	$placeHoldersmst_Material[""]["sort"] = "";
	$fieldLabelsmst_Material[""]["update_at"] = "Update At";
	$fieldToolTipsmst_Material[""]["update_at"] = "";
	$placeHoldersmst_Material[""]["update_at"] = "";
	$fieldLabelsmst_Material[""]["update_by"] = "Update By";
	$fieldToolTipsmst_Material[""]["update_by"] = "";
	$placeHoldersmst_Material[""]["update_by"] = "";
	$fieldLabelsmst_Material[""]["create_at"] = "Create At";
	$fieldToolTipsmst_Material[""]["create_at"] = "";
	$placeHoldersmst_Material[""]["create_at"] = "";
	$fieldLabelsmst_Material[""]["create_by"] = "Create By";
	$fieldToolTipsmst_Material[""]["create_by"] = "";
	$placeHoldersmst_Material[""]["create_by"] = "";
	$fieldLabelsmst_Material[""]["yahoo_junle"] = "Yahoo Junle";
	$fieldToolTipsmst_Material[""]["yahoo_junle"] = "";
	$placeHoldersmst_Material[""]["yahoo_junle"] = "";
	$fieldLabelsmst_Material[""]["category_id"] = "Category Id";
	$fieldToolTipsmst_Material[""]["category_id"] = "";
	$placeHoldersmst_Material[""]["category_id"] = "";
	$fieldLabelsmst_Material[""]["sub_category_id1"] = "Sub Category Id1";
	$fieldToolTipsmst_Material[""]["sub_category_id1"] = "";
	$placeHoldersmst_Material[""]["sub_category_id1"] = "";
	if (count($fieldToolTipsmst_Material[""]))
		$tdatamst_Material[".isUseToolTips"] = true;
}


	$tdatamst_Material[".NCSearch"] = true;



$tdatamst_Material[".shortTableName"] = "mst_Material";
$tdatamst_Material[".nSecOptions"] = 0;
$tdatamst_Material[".recsPerRowPrint"] = 1;
$tdatamst_Material[".mainTableOwnerID"] = "";
$tdatamst_Material[".moveNext"] = 1;
$tdatamst_Material[".entityType"] = 0;

$tdatamst_Material[".strOriginalTableName"] = "mst_Material";

	



$tdatamst_Material[".showAddInPopup"] = false;

$tdatamst_Material[".showEditInPopup"] = false;

$tdatamst_Material[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamst_Material[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamst_Material[".fieldsForRegister"] = array();

$tdatamst_Material[".listAjax"] = false;

	$tdatamst_Material[".audit"] = false;

	$tdatamst_Material[".locking"] = false;






$tdatamst_Material[".reorderRecordsByHeader"] = true;








$tdatamst_Material[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamst_Material[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamst_Material[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamst_Material[".searchSaving"] = false;
//

$tdatamst_Material[".showSearchPanel"] = true;
		$tdatamst_Material[".flexibleSearch"] = true;

$tdatamst_Material[".isUseAjaxSuggest"] = true;

$tdatamst_Material[".rowHighlite"] = true;



																														

$tdatamst_Material[".ajaxCodeSnippetAdded"] = false;

$tdatamst_Material[".buttonsAdded"] = false;

$tdatamst_Material[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamst_Material[".isUseTimeForSearch"] = false;





$tdatamst_Material[".allSearchFields"] = array();
$tdatamst_Material[".filterFields"] = array();
$tdatamst_Material[".requiredSearchFields"] = array();



$tdatamst_Material[".googleLikeFields"] = array();
$tdatamst_Material[".googleLikeFields"][] = "id";
$tdatamst_Material[".googleLikeFields"][] = "name";
$tdatamst_Material[".googleLikeFields"][] = "sort";
$tdatamst_Material[".googleLikeFields"][] = "update_at";
$tdatamst_Material[".googleLikeFields"][] = "update_by";
$tdatamst_Material[".googleLikeFields"][] = "create_at";
$tdatamst_Material[".googleLikeFields"][] = "create_by";
$tdatamst_Material[".googleLikeFields"][] = "yahoo_junle";
$tdatamst_Material[".googleLikeFields"][] = "category_id";
$tdatamst_Material[".googleLikeFields"][] = "sub_category_id1";



$tdatamst_Material[".tableType"] = "list";

$tdatamst_Material[".printerPageOrientation"] = 0;
$tdatamst_Material[".nPrinterPageScale"] = 100;

$tdatamst_Material[".nPrinterSplitRecords"] = 40;

$tdatamst_Material[".nPrinterPDFSplitRecords"] = 40;



$tdatamst_Material[".geocodingEnabled"] = false;





$tdatamst_Material[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamst_Material[".pageSize"] = 20;

$tdatamst_Material[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamst_Material[".strOrderBy"] = $tstrOrderBy;

$tdatamst_Material[".orderindexes"] = array();

$tdatamst_Material[".sqlHead"] = "SELECT id,  	name,  	sort,  	update_at,  	update_by,  	create_at,  	create_by,  	yahoo_junle,  	category_id,  	sub_category_id1";
$tdatamst_Material[".sqlFrom"] = "FROM mst_Material";
$tdatamst_Material[".sqlWhereExpr"] = "";
$tdatamst_Material[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamst_Material[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamst_Material[".arrGroupsPerPage"] = $arrGPP;

$tdatamst_Material[".highlightSearchResults"] = true;

$tableKeysmst_Material = array();
$tableKeysmst_Material[] = "id";
$tdatamst_Material[".Keys"] = $tableKeysmst_Material;

$tdatamst_Material[".listFields"] = array();
$tdatamst_Material[".listFields"][] = "id";
$tdatamst_Material[".listFields"][] = "name";
$tdatamst_Material[".listFields"][] = "sort";
$tdatamst_Material[".listFields"][] = "update_at";
$tdatamst_Material[".listFields"][] = "update_by";
$tdatamst_Material[".listFields"][] = "create_at";
$tdatamst_Material[".listFields"][] = "create_by";
$tdatamst_Material[".listFields"][] = "yahoo_junle";
$tdatamst_Material[".listFields"][] = "category_id";
$tdatamst_Material[".listFields"][] = "sub_category_id1";

$tdatamst_Material[".hideMobileList"] = array();


$tdatamst_Material[".viewFields"] = array();
$tdatamst_Material[".viewFields"][] = "id";
$tdatamst_Material[".viewFields"][] = "name";
$tdatamst_Material[".viewFields"][] = "sort";
$tdatamst_Material[".viewFields"][] = "update_at";
$tdatamst_Material[".viewFields"][] = "update_by";
$tdatamst_Material[".viewFields"][] = "create_at";
$tdatamst_Material[".viewFields"][] = "create_by";
$tdatamst_Material[".viewFields"][] = "yahoo_junle";
$tdatamst_Material[".viewFields"][] = "category_id";
$tdatamst_Material[".viewFields"][] = "sub_category_id1";

$tdatamst_Material[".addFields"] = array();
$tdatamst_Material[".addFields"][] = "name";
$tdatamst_Material[".addFields"][] = "sort";
$tdatamst_Material[".addFields"][] = "update_at";
$tdatamst_Material[".addFields"][] = "update_by";
$tdatamst_Material[".addFields"][] = "create_at";
$tdatamst_Material[".addFields"][] = "create_by";
$tdatamst_Material[".addFields"][] = "yahoo_junle";
$tdatamst_Material[".addFields"][] = "category_id";
$tdatamst_Material[".addFields"][] = "sub_category_id1";

$tdatamst_Material[".masterListFields"] = array();
$tdatamst_Material[".masterListFields"][] = "id";
$tdatamst_Material[".masterListFields"][] = "name";
$tdatamst_Material[".masterListFields"][] = "sort";
$tdatamst_Material[".masterListFields"][] = "update_at";
$tdatamst_Material[".masterListFields"][] = "update_by";
$tdatamst_Material[".masterListFields"][] = "create_at";
$tdatamst_Material[".masterListFields"][] = "create_by";
$tdatamst_Material[".masterListFields"][] = "yahoo_junle";
$tdatamst_Material[".masterListFields"][] = "category_id";
$tdatamst_Material[".masterListFields"][] = "sub_category_id1";

$tdatamst_Material[".inlineAddFields"] = array();
$tdatamst_Material[".inlineAddFields"][] = "name";
$tdatamst_Material[".inlineAddFields"][] = "sort";
$tdatamst_Material[".inlineAddFields"][] = "update_at";
$tdatamst_Material[".inlineAddFields"][] = "update_by";
$tdatamst_Material[".inlineAddFields"][] = "create_at";
$tdatamst_Material[".inlineAddFields"][] = "create_by";
$tdatamst_Material[".inlineAddFields"][] = "yahoo_junle";
$tdatamst_Material[".inlineAddFields"][] = "category_id";
$tdatamst_Material[".inlineAddFields"][] = "sub_category_id1";

$tdatamst_Material[".editFields"] = array();
$tdatamst_Material[".editFields"][] = "name";
$tdatamst_Material[".editFields"][] = "sort";
$tdatamst_Material[".editFields"][] = "update_at";
$tdatamst_Material[".editFields"][] = "update_by";
$tdatamst_Material[".editFields"][] = "create_at";
$tdatamst_Material[".editFields"][] = "create_by";
$tdatamst_Material[".editFields"][] = "yahoo_junle";
$tdatamst_Material[".editFields"][] = "category_id";
$tdatamst_Material[".editFields"][] = "sub_category_id1";

$tdatamst_Material[".inlineEditFields"] = array();
$tdatamst_Material[".inlineEditFields"][] = "name";
$tdatamst_Material[".inlineEditFields"][] = "sort";
$tdatamst_Material[".inlineEditFields"][] = "update_at";
$tdatamst_Material[".inlineEditFields"][] = "update_by";
$tdatamst_Material[".inlineEditFields"][] = "create_at";
$tdatamst_Material[".inlineEditFields"][] = "create_by";
$tdatamst_Material[".inlineEditFields"][] = "yahoo_junle";
$tdatamst_Material[".inlineEditFields"][] = "category_id";
$tdatamst_Material[".inlineEditFields"][] = "sub_category_id1";

$tdatamst_Material[".updateSelectedFields"] = array();
$tdatamst_Material[".updateSelectedFields"][] = "name";
$tdatamst_Material[".updateSelectedFields"][] = "sort";
$tdatamst_Material[".updateSelectedFields"][] = "update_at";
$tdatamst_Material[".updateSelectedFields"][] = "update_by";
$tdatamst_Material[".updateSelectedFields"][] = "create_at";
$tdatamst_Material[".updateSelectedFields"][] = "create_by";
$tdatamst_Material[".updateSelectedFields"][] = "yahoo_junle";
$tdatamst_Material[".updateSelectedFields"][] = "category_id";
$tdatamst_Material[".updateSelectedFields"][] = "sub_category_id1";


$tdatamst_Material[".exportFields"] = array();
$tdatamst_Material[".exportFields"][] = "id";
$tdatamst_Material[".exportFields"][] = "name";
$tdatamst_Material[".exportFields"][] = "sort";
$tdatamst_Material[".exportFields"][] = "update_at";
$tdatamst_Material[".exportFields"][] = "update_by";
$tdatamst_Material[".exportFields"][] = "create_at";
$tdatamst_Material[".exportFields"][] = "create_by";
$tdatamst_Material[".exportFields"][] = "yahoo_junle";
$tdatamst_Material[".exportFields"][] = "category_id";
$tdatamst_Material[".exportFields"][] = "sub_category_id1";

$tdatamst_Material[".importFields"] = array();
$tdatamst_Material[".importFields"][] = "id";
$tdatamst_Material[".importFields"][] = "name";
$tdatamst_Material[".importFields"][] = "sort";
$tdatamst_Material[".importFields"][] = "update_at";
$tdatamst_Material[".importFields"][] = "update_by";
$tdatamst_Material[".importFields"][] = "create_at";
$tdatamst_Material[".importFields"][] = "create_by";
$tdatamst_Material[".importFields"][] = "yahoo_junle";
$tdatamst_Material[".importFields"][] = "category_id";
$tdatamst_Material[".importFields"][] = "sub_category_id1";

$tdatamst_Material[".printFields"] = array();
$tdatamst_Material[".printFields"][] = "id";
$tdatamst_Material[".printFields"][] = "name";
$tdatamst_Material[".printFields"][] = "sort";
$tdatamst_Material[".printFields"][] = "update_at";
$tdatamst_Material[".printFields"][] = "update_by";
$tdatamst_Material[".printFields"][] = "create_at";
$tdatamst_Material[".printFields"][] = "create_by";
$tdatamst_Material[".printFields"][] = "yahoo_junle";
$tdatamst_Material[".printFields"][] = "category_id";
$tdatamst_Material[".printFields"][] = "sub_category_id1";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "mst_Material";
	$fdata["Label"] = GetFieldLabel("mst_Material","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

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








	$tdatamst_Material["id"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "mst_Material";
	$fdata["Label"] = GetFieldLabel("mst_Material","name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

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
			$edata["EditParams"].= " maxlength=150";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatamst_Material["name"] = $fdata;
//	sort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sort";
	$fdata["GoodName"] = "sort";
	$fdata["ownerTable"] = "mst_Material";
	$fdata["Label"] = GetFieldLabel("mst_Material","sort");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

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








	$tdatamst_Material["sort"] = $fdata;
//	update_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "update_at";
	$fdata["GoodName"] = "update_at";
	$fdata["ownerTable"] = "mst_Material";
	$fdata["Label"] = GetFieldLabel("mst_Material","update_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "update_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "update_at";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
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








	$tdatamst_Material["update_at"] = $fdata;
//	update_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "update_by";
	$fdata["GoodName"] = "update_by";
	$fdata["ownerTable"] = "mst_Material";
	$fdata["Label"] = GetFieldLabel("mst_Material","update_by");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

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








	$tdatamst_Material["update_by"] = $fdata;
//	create_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "create_at";
	$fdata["GoodName"] = "create_at";
	$fdata["ownerTable"] = "mst_Material";
	$fdata["Label"] = GetFieldLabel("mst_Material","create_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "create_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "create_at";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
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








	$tdatamst_Material["create_at"] = $fdata;
//	create_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "create_by";
	$fdata["GoodName"] = "create_by";
	$fdata["ownerTable"] = "mst_Material";
	$fdata["Label"] = GetFieldLabel("mst_Material","create_by");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

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








	$tdatamst_Material["create_by"] = $fdata;
//	yahoo_junle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "yahoo_junle";
	$fdata["GoodName"] = "yahoo_junle";
	$fdata["ownerTable"] = "mst_Material";
	$fdata["Label"] = GetFieldLabel("mst_Material","yahoo_junle");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "yahoo_junle";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "yahoo_junle";

	
	
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
			$edata["EditParams"].= " maxlength=128";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatamst_Material["yahoo_junle"] = $fdata;
//	category_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "category_id";
	$fdata["GoodName"] = "category_id";
	$fdata["ownerTable"] = "mst_Material";
	$fdata["Label"] = GetFieldLabel("mst_Material","category_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

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








	$tdatamst_Material["category_id"] = $fdata;
//	sub_category_id1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "sub_category_id1";
	$fdata["GoodName"] = "sub_category_id1";
	$fdata["ownerTable"] = "mst_Material";
	$fdata["Label"] = GetFieldLabel("mst_Material","sub_category_id1");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "sub_category_id1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sub_category_id1";

	
	
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








	$tdatamst_Material["sub_category_id1"] = $fdata;


$tables_data["mst_Material"]=&$tdatamst_Material;
$field_labels["mst_Material"] = &$fieldLabelsmst_Material;
$fieldToolTips["mst_Material"] = &$fieldToolTipsmst_Material;
$placeHolders["mst_Material"] = &$placeHoldersmst_Material;
$page_titles["mst_Material"] = &$pageTitlesmst_Material;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mst_Material"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mst_Material"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mst_Material()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	name,  	sort,  	update_at,  	update_by,  	create_at,  	create_by,  	yahoo_junle,  	category_id,  	sub_category_id1";
$proto0["m_strFrom"] = "FROM mst_Material";
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
	"m_strTable" => "mst_Material",
	"m_srcTableName" => "mst_Material"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "mst_Material";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "mst_Material",
	"m_srcTableName" => "mst_Material"
));

$proto8["m_sql"] = "name";
$proto8["m_srcTableName"] = "mst_Material";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "sort",
	"m_strTable" => "mst_Material",
	"m_srcTableName" => "mst_Material"
));

$proto10["m_sql"] = "sort";
$proto10["m_srcTableName"] = "mst_Material";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "update_at",
	"m_strTable" => "mst_Material",
	"m_srcTableName" => "mst_Material"
));

$proto12["m_sql"] = "update_at";
$proto12["m_srcTableName"] = "mst_Material";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "update_by",
	"m_strTable" => "mst_Material",
	"m_srcTableName" => "mst_Material"
));

$proto14["m_sql"] = "update_by";
$proto14["m_srcTableName"] = "mst_Material";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "create_at",
	"m_strTable" => "mst_Material",
	"m_srcTableName" => "mst_Material"
));

$proto16["m_sql"] = "create_at";
$proto16["m_srcTableName"] = "mst_Material";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "create_by",
	"m_strTable" => "mst_Material",
	"m_srcTableName" => "mst_Material"
));

$proto18["m_sql"] = "create_by";
$proto18["m_srcTableName"] = "mst_Material";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_junle",
	"m_strTable" => "mst_Material",
	"m_srcTableName" => "mst_Material"
));

$proto20["m_sql"] = "yahoo_junle";
$proto20["m_srcTableName"] = "mst_Material";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "category_id",
	"m_strTable" => "mst_Material",
	"m_srcTableName" => "mst_Material"
));

$proto22["m_sql"] = "category_id";
$proto22["m_srcTableName"] = "mst_Material";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "sub_category_id1",
	"m_strTable" => "mst_Material",
	"m_srcTableName" => "mst_Material"
));

$proto24["m_sql"] = "sub_category_id1";
$proto24["m_srcTableName"] = "mst_Material";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "mst_Material";
$proto27["m_srcTableName"] = "mst_Material";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "id";
$proto27["m_columns"][] = "name";
$proto27["m_columns"][] = "sort";
$proto27["m_columns"][] = "update_at";
$proto27["m_columns"][] = "update_by";
$proto27["m_columns"][] = "create_at";
$proto27["m_columns"][] = "create_by";
$proto27["m_columns"][] = "yahoo_junle";
$proto27["m_columns"][] = "category_id";
$proto27["m_columns"][] = "sub_category_id1";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "mst_Material";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "mst_Material";
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
$proto0["m_srcTableName"]="mst_Material";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mst_Material = createSqlQuery_mst_Material();


	
		;

										

$tdatamst_Material[".sqlquery"] = $queryData_mst_Material;

$tableEvents["mst_Material"] = new eventsBase;
$tdatamst_Material[".hasEvents"] = false;

?>