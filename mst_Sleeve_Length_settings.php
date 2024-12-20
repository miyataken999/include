<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamst_Sleeve_Length = array();
	$tdatamst_Sleeve_Length[".truncateText"] = true;
	$tdatamst_Sleeve_Length[".NumberOfChars"] = 80;
	$tdatamst_Sleeve_Length[".ShortName"] = "mst_Sleeve_Length";
	$tdatamst_Sleeve_Length[".OwnerID"] = "";
	$tdatamst_Sleeve_Length[".OriginalTable"] = "mst_Sleeve_Length";

//	field labels
$fieldLabelsmst_Sleeve_Length = array();
$fieldToolTipsmst_Sleeve_Length = array();
$pageTitlesmst_Sleeve_Length = array();
$placeHoldersmst_Sleeve_Length = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmst_Sleeve_Length["Japanese"] = array();
	$fieldToolTipsmst_Sleeve_Length["Japanese"] = array();
	$placeHoldersmst_Sleeve_Length["Japanese"] = array();
	$pageTitlesmst_Sleeve_Length["Japanese"] = array();
	$fieldLabelsmst_Sleeve_Length["Japanese"]["id"] = "Id";
	$fieldToolTipsmst_Sleeve_Length["Japanese"]["id"] = "";
	$placeHoldersmst_Sleeve_Length["Japanese"]["id"] = "";
	$fieldLabelsmst_Sleeve_Length["Japanese"]["name"] = "Name";
	$fieldToolTipsmst_Sleeve_Length["Japanese"]["name"] = "";
	$placeHoldersmst_Sleeve_Length["Japanese"]["name"] = "";
	$fieldLabelsmst_Sleeve_Length["Japanese"]["sort"] = "Sort";
	$fieldToolTipsmst_Sleeve_Length["Japanese"]["sort"] = "";
	$placeHoldersmst_Sleeve_Length["Japanese"]["sort"] = "";
	$fieldLabelsmst_Sleeve_Length["Japanese"]["update_at"] = "Update At";
	$fieldToolTipsmst_Sleeve_Length["Japanese"]["update_at"] = "";
	$placeHoldersmst_Sleeve_Length["Japanese"]["update_at"] = "";
	$fieldLabelsmst_Sleeve_Length["Japanese"]["update_by"] = "Update By";
	$fieldToolTipsmst_Sleeve_Length["Japanese"]["update_by"] = "";
	$placeHoldersmst_Sleeve_Length["Japanese"]["update_by"] = "";
	$fieldLabelsmst_Sleeve_Length["Japanese"]["create_at"] = "Create At";
	$fieldToolTipsmst_Sleeve_Length["Japanese"]["create_at"] = "";
	$placeHoldersmst_Sleeve_Length["Japanese"]["create_at"] = "";
	$fieldLabelsmst_Sleeve_Length["Japanese"]["create_by"] = "Create By";
	$fieldToolTipsmst_Sleeve_Length["Japanese"]["create_by"] = "";
	$placeHoldersmst_Sleeve_Length["Japanese"]["create_by"] = "";
	$fieldLabelsmst_Sleeve_Length["Japanese"]["yahoo_junle"] = "Yahoo Junle";
	$fieldToolTipsmst_Sleeve_Length["Japanese"]["yahoo_junle"] = "";
	$placeHoldersmst_Sleeve_Length["Japanese"]["yahoo_junle"] = "";
	$fieldLabelsmst_Sleeve_Length["Japanese"]["category_id"] = "Category Id";
	$fieldToolTipsmst_Sleeve_Length["Japanese"]["category_id"] = "";
	$placeHoldersmst_Sleeve_Length["Japanese"]["category_id"] = "";
	$fieldLabelsmst_Sleeve_Length["Japanese"]["sub_category_id1"] = "Sub Category Id1";
	$fieldToolTipsmst_Sleeve_Length["Japanese"]["sub_category_id1"] = "";
	$placeHoldersmst_Sleeve_Length["Japanese"]["sub_category_id1"] = "";
	if (count($fieldToolTipsmst_Sleeve_Length["Japanese"]))
		$tdatamst_Sleeve_Length[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmst_Sleeve_Length[""] = array();
	$fieldToolTipsmst_Sleeve_Length[""] = array();
	$placeHoldersmst_Sleeve_Length[""] = array();
	$pageTitlesmst_Sleeve_Length[""] = array();
	$fieldLabelsmst_Sleeve_Length[""]["id"] = "Id";
	$fieldToolTipsmst_Sleeve_Length[""]["id"] = "";
	$placeHoldersmst_Sleeve_Length[""]["id"] = "";
	$fieldLabelsmst_Sleeve_Length[""]["name"] = "Name";
	$fieldToolTipsmst_Sleeve_Length[""]["name"] = "";
	$placeHoldersmst_Sleeve_Length[""]["name"] = "";
	$fieldLabelsmst_Sleeve_Length[""]["sort"] = "Sort";
	$fieldToolTipsmst_Sleeve_Length[""]["sort"] = "";
	$placeHoldersmst_Sleeve_Length[""]["sort"] = "";
	$fieldLabelsmst_Sleeve_Length[""]["update_at"] = "Update At";
	$fieldToolTipsmst_Sleeve_Length[""]["update_at"] = "";
	$placeHoldersmst_Sleeve_Length[""]["update_at"] = "";
	$fieldLabelsmst_Sleeve_Length[""]["update_by"] = "Update By";
	$fieldToolTipsmst_Sleeve_Length[""]["update_by"] = "";
	$placeHoldersmst_Sleeve_Length[""]["update_by"] = "";
	$fieldLabelsmst_Sleeve_Length[""]["create_at"] = "Create At";
	$fieldToolTipsmst_Sleeve_Length[""]["create_at"] = "";
	$placeHoldersmst_Sleeve_Length[""]["create_at"] = "";
	$fieldLabelsmst_Sleeve_Length[""]["create_by"] = "Create By";
	$fieldToolTipsmst_Sleeve_Length[""]["create_by"] = "";
	$placeHoldersmst_Sleeve_Length[""]["create_by"] = "";
	$fieldLabelsmst_Sleeve_Length[""]["yahoo_junle"] = "Yahoo Junle";
	$fieldToolTipsmst_Sleeve_Length[""]["yahoo_junle"] = "";
	$placeHoldersmst_Sleeve_Length[""]["yahoo_junle"] = "";
	$fieldLabelsmst_Sleeve_Length[""]["category_id"] = "Category Id";
	$fieldToolTipsmst_Sleeve_Length[""]["category_id"] = "";
	$placeHoldersmst_Sleeve_Length[""]["category_id"] = "";
	$fieldLabelsmst_Sleeve_Length[""]["sub_category_id1"] = "Sub Category Id1";
	$fieldToolTipsmst_Sleeve_Length[""]["sub_category_id1"] = "";
	$placeHoldersmst_Sleeve_Length[""]["sub_category_id1"] = "";
	if (count($fieldToolTipsmst_Sleeve_Length[""]))
		$tdatamst_Sleeve_Length[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmst_Sleeve_Length["English"] = array();
	$fieldToolTipsmst_Sleeve_Length["English"] = array();
	$placeHoldersmst_Sleeve_Length["English"] = array();
	$pageTitlesmst_Sleeve_Length["English"] = array();
	$fieldLabelsmst_Sleeve_Length["English"]["id"] = "Id";
	$fieldToolTipsmst_Sleeve_Length["English"]["id"] = "";
	$placeHoldersmst_Sleeve_Length["English"]["id"] = "";
	$fieldLabelsmst_Sleeve_Length["English"]["name"] = "Name";
	$fieldToolTipsmst_Sleeve_Length["English"]["name"] = "";
	$placeHoldersmst_Sleeve_Length["English"]["name"] = "";
	$fieldLabelsmst_Sleeve_Length["English"]["sort"] = "Sort";
	$fieldToolTipsmst_Sleeve_Length["English"]["sort"] = "";
	$placeHoldersmst_Sleeve_Length["English"]["sort"] = "";
	$fieldLabelsmst_Sleeve_Length["English"]["update_at"] = "Update At";
	$fieldToolTipsmst_Sleeve_Length["English"]["update_at"] = "";
	$placeHoldersmst_Sleeve_Length["English"]["update_at"] = "";
	$fieldLabelsmst_Sleeve_Length["English"]["update_by"] = "Update By";
	$fieldToolTipsmst_Sleeve_Length["English"]["update_by"] = "";
	$placeHoldersmst_Sleeve_Length["English"]["update_by"] = "";
	$fieldLabelsmst_Sleeve_Length["English"]["create_at"] = "Create At";
	$fieldToolTipsmst_Sleeve_Length["English"]["create_at"] = "";
	$placeHoldersmst_Sleeve_Length["English"]["create_at"] = "";
	$fieldLabelsmst_Sleeve_Length["English"]["create_by"] = "Create By";
	$fieldToolTipsmst_Sleeve_Length["English"]["create_by"] = "";
	$placeHoldersmst_Sleeve_Length["English"]["create_by"] = "";
	$fieldLabelsmst_Sleeve_Length["English"]["yahoo_junle"] = "Yahoo Junle";
	$fieldToolTipsmst_Sleeve_Length["English"]["yahoo_junle"] = "";
	$placeHoldersmst_Sleeve_Length["English"]["yahoo_junle"] = "";
	$fieldLabelsmst_Sleeve_Length["English"]["category_id"] = "Category Id";
	$fieldToolTipsmst_Sleeve_Length["English"]["category_id"] = "";
	$placeHoldersmst_Sleeve_Length["English"]["category_id"] = "";
	$fieldLabelsmst_Sleeve_Length["English"]["sub_category_id1"] = "Sub Category Id1";
	$fieldToolTipsmst_Sleeve_Length["English"]["sub_category_id1"] = "";
	$placeHoldersmst_Sleeve_Length["English"]["sub_category_id1"] = "";
	if (count($fieldToolTipsmst_Sleeve_Length["English"]))
		$tdatamst_Sleeve_Length[".isUseToolTips"] = true;
}


	$tdatamst_Sleeve_Length[".NCSearch"] = true;



$tdatamst_Sleeve_Length[".shortTableName"] = "mst_Sleeve_Length";
$tdatamst_Sleeve_Length[".nSecOptions"] = 0;
$tdatamst_Sleeve_Length[".recsPerRowPrint"] = 1;
$tdatamst_Sleeve_Length[".mainTableOwnerID"] = "";
$tdatamst_Sleeve_Length[".moveNext"] = 1;
$tdatamst_Sleeve_Length[".entityType"] = 0;

$tdatamst_Sleeve_Length[".strOriginalTableName"] = "mst_Sleeve_Length";

	



$tdatamst_Sleeve_Length[".showAddInPopup"] = false;

$tdatamst_Sleeve_Length[".showEditInPopup"] = false;

$tdatamst_Sleeve_Length[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamst_Sleeve_Length[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamst_Sleeve_Length[".fieldsForRegister"] = array();

$tdatamst_Sleeve_Length[".listAjax"] = false;

	$tdatamst_Sleeve_Length[".audit"] = true;

	$tdatamst_Sleeve_Length[".locking"] = false;






$tdatamst_Sleeve_Length[".reorderRecordsByHeader"] = true;








$tdatamst_Sleeve_Length[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamst_Sleeve_Length[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamst_Sleeve_Length[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamst_Sleeve_Length[".searchSaving"] = false;
//

$tdatamst_Sleeve_Length[".showSearchPanel"] = true;
		$tdatamst_Sleeve_Length[".flexibleSearch"] = true;

$tdatamst_Sleeve_Length[".isUseAjaxSuggest"] = true;

$tdatamst_Sleeve_Length[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatamst_Sleeve_Length[".ajaxCodeSnippetAdded"] = false;

$tdatamst_Sleeve_Length[".buttonsAdded"] = false;

$tdatamst_Sleeve_Length[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamst_Sleeve_Length[".isUseTimeForSearch"] = false;





$tdatamst_Sleeve_Length[".allSearchFields"] = array();
$tdatamst_Sleeve_Length[".filterFields"] = array();
$tdatamst_Sleeve_Length[".requiredSearchFields"] = array();



$tdatamst_Sleeve_Length[".googleLikeFields"] = array();
$tdatamst_Sleeve_Length[".googleLikeFields"][] = "id";
$tdatamst_Sleeve_Length[".googleLikeFields"][] = "name";
$tdatamst_Sleeve_Length[".googleLikeFields"][] = "sort";
$tdatamst_Sleeve_Length[".googleLikeFields"][] = "update_at";
$tdatamst_Sleeve_Length[".googleLikeFields"][] = "update_by";
$tdatamst_Sleeve_Length[".googleLikeFields"][] = "create_at";
$tdatamst_Sleeve_Length[".googleLikeFields"][] = "create_by";
$tdatamst_Sleeve_Length[".googleLikeFields"][] = "yahoo_junle";
$tdatamst_Sleeve_Length[".googleLikeFields"][] = "category_id";
$tdatamst_Sleeve_Length[".googleLikeFields"][] = "sub_category_id1";



$tdatamst_Sleeve_Length[".tableType"] = "list";

$tdatamst_Sleeve_Length[".printerPageOrientation"] = 0;
$tdatamst_Sleeve_Length[".nPrinterPageScale"] = 100;

$tdatamst_Sleeve_Length[".nPrinterSplitRecords"] = 40;

$tdatamst_Sleeve_Length[".nPrinterPDFSplitRecords"] = 40;



$tdatamst_Sleeve_Length[".geocodingEnabled"] = false;





$tdatamst_Sleeve_Length[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamst_Sleeve_Length[".pageSize"] = 20;

$tdatamst_Sleeve_Length[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamst_Sleeve_Length[".strOrderBy"] = $tstrOrderBy;

$tdatamst_Sleeve_Length[".orderindexes"] = array();

$tdatamst_Sleeve_Length[".sqlHead"] = "SELECT id,  	name,  	sort,  	update_at,  	update_by,  	create_at,  	create_by,  	yahoo_junle,  	category_id,  	sub_category_id1";
$tdatamst_Sleeve_Length[".sqlFrom"] = "FROM mst_Sleeve_Length";
$tdatamst_Sleeve_Length[".sqlWhereExpr"] = "";
$tdatamst_Sleeve_Length[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamst_Sleeve_Length[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamst_Sleeve_Length[".arrGroupsPerPage"] = $arrGPP;

$tdatamst_Sleeve_Length[".highlightSearchResults"] = true;

$tableKeysmst_Sleeve_Length = array();
$tableKeysmst_Sleeve_Length[] = "id";
$tdatamst_Sleeve_Length[".Keys"] = $tableKeysmst_Sleeve_Length;

$tdatamst_Sleeve_Length[".listFields"] = array();

$tdatamst_Sleeve_Length[".hideMobileList"] = array();


$tdatamst_Sleeve_Length[".viewFields"] = array();

$tdatamst_Sleeve_Length[".addFields"] = array();

$tdatamst_Sleeve_Length[".masterListFields"] = array();
$tdatamst_Sleeve_Length[".masterListFields"][] = "id";
$tdatamst_Sleeve_Length[".masterListFields"][] = "name";
$tdatamst_Sleeve_Length[".masterListFields"][] = "sort";
$tdatamst_Sleeve_Length[".masterListFields"][] = "update_at";
$tdatamst_Sleeve_Length[".masterListFields"][] = "update_by";
$tdatamst_Sleeve_Length[".masterListFields"][] = "create_at";
$tdatamst_Sleeve_Length[".masterListFields"][] = "create_by";
$tdatamst_Sleeve_Length[".masterListFields"][] = "yahoo_junle";
$tdatamst_Sleeve_Length[".masterListFields"][] = "category_id";
$tdatamst_Sleeve_Length[".masterListFields"][] = "sub_category_id1";

$tdatamst_Sleeve_Length[".inlineAddFields"] = array();

$tdatamst_Sleeve_Length[".editFields"] = array();

$tdatamst_Sleeve_Length[".inlineEditFields"] = array();

$tdatamst_Sleeve_Length[".updateSelectedFields"] = array();


$tdatamst_Sleeve_Length[".exportFields"] = array();

$tdatamst_Sleeve_Length[".importFields"] = array();

$tdatamst_Sleeve_Length[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "mst_Sleeve_Length";
	$fdata["Label"] = GetFieldLabel("mst_Sleeve_Length","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
			
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








	$tdatamst_Sleeve_Length["id"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "mst_Sleeve_Length";
	$fdata["Label"] = GetFieldLabel("mst_Sleeve_Length","name");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "name";

	
	
			
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








	$tdatamst_Sleeve_Length["name"] = $fdata;
//	sort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sort";
	$fdata["GoodName"] = "sort";
	$fdata["ownerTable"] = "mst_Sleeve_Length";
	$fdata["Label"] = GetFieldLabel("mst_Sleeve_Length","sort");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "sort";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sort";

	
	
			
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








	$tdatamst_Sleeve_Length["sort"] = $fdata;
//	update_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "update_at";
	$fdata["GoodName"] = "update_at";
	$fdata["ownerTable"] = "mst_Sleeve_Length";
	$fdata["Label"] = GetFieldLabel("mst_Sleeve_Length","update_at");
	$fdata["FieldType"] = 135;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "update_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "update_at";

	
	
			
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








	$tdatamst_Sleeve_Length["update_at"] = $fdata;
//	update_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "update_by";
	$fdata["GoodName"] = "update_by";
	$fdata["ownerTable"] = "mst_Sleeve_Length";
	$fdata["Label"] = GetFieldLabel("mst_Sleeve_Length","update_by");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "update_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "update_by";

	
	
			
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








	$tdatamst_Sleeve_Length["update_by"] = $fdata;
//	create_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "create_at";
	$fdata["GoodName"] = "create_at";
	$fdata["ownerTable"] = "mst_Sleeve_Length";
	$fdata["Label"] = GetFieldLabel("mst_Sleeve_Length","create_at");
	$fdata["FieldType"] = 135;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "create_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "create_at";

	
	
			
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








	$tdatamst_Sleeve_Length["create_at"] = $fdata;
//	create_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "create_by";
	$fdata["GoodName"] = "create_by";
	$fdata["ownerTable"] = "mst_Sleeve_Length";
	$fdata["Label"] = GetFieldLabel("mst_Sleeve_Length","create_by");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "create_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "create_by";

	
	
			
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








	$tdatamst_Sleeve_Length["create_by"] = $fdata;
//	yahoo_junle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "yahoo_junle";
	$fdata["GoodName"] = "yahoo_junle";
	$fdata["ownerTable"] = "mst_Sleeve_Length";
	$fdata["Label"] = GetFieldLabel("mst_Sleeve_Length","yahoo_junle");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "yahoo_junle";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "yahoo_junle";

	
	
			
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








	$tdatamst_Sleeve_Length["yahoo_junle"] = $fdata;
//	category_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "category_id";
	$fdata["GoodName"] = "category_id";
	$fdata["ownerTable"] = "mst_Sleeve_Length";
	$fdata["Label"] = GetFieldLabel("mst_Sleeve_Length","category_id");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "category_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "category_id";

	
	
			
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








	$tdatamst_Sleeve_Length["category_id"] = $fdata;
//	sub_category_id1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "sub_category_id1";
	$fdata["GoodName"] = "sub_category_id1";
	$fdata["ownerTable"] = "mst_Sleeve_Length";
	$fdata["Label"] = GetFieldLabel("mst_Sleeve_Length","sub_category_id1");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "sub_category_id1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sub_category_id1";

	
	
			
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








	$tdatamst_Sleeve_Length["sub_category_id1"] = $fdata;


$tables_data["mst_Sleeve_Length"]=&$tdatamst_Sleeve_Length;
$field_labels["mst_Sleeve_Length"] = &$fieldLabelsmst_Sleeve_Length;
$fieldToolTips["mst_Sleeve_Length"] = &$fieldToolTipsmst_Sleeve_Length;
$placeHolders["mst_Sleeve_Length"] = &$placeHoldersmst_Sleeve_Length;
$page_titles["mst_Sleeve_Length"] = &$pageTitlesmst_Sleeve_Length;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mst_Sleeve_Length"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mst_Sleeve_Length"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mst_Sleeve_Length()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	name,  	sort,  	update_at,  	update_by,  	create_at,  	create_by,  	yahoo_junle,  	category_id,  	sub_category_id1";
$proto0["m_strFrom"] = "FROM mst_Sleeve_Length";
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
	"m_strTable" => "mst_Sleeve_Length",
	"m_srcTableName" => "mst_Sleeve_Length"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "mst_Sleeve_Length";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "mst_Sleeve_Length",
	"m_srcTableName" => "mst_Sleeve_Length"
));

$proto8["m_sql"] = "name";
$proto8["m_srcTableName"] = "mst_Sleeve_Length";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "sort",
	"m_strTable" => "mst_Sleeve_Length",
	"m_srcTableName" => "mst_Sleeve_Length"
));

$proto10["m_sql"] = "sort";
$proto10["m_srcTableName"] = "mst_Sleeve_Length";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "update_at",
	"m_strTable" => "mst_Sleeve_Length",
	"m_srcTableName" => "mst_Sleeve_Length"
));

$proto12["m_sql"] = "update_at";
$proto12["m_srcTableName"] = "mst_Sleeve_Length";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "update_by",
	"m_strTable" => "mst_Sleeve_Length",
	"m_srcTableName" => "mst_Sleeve_Length"
));

$proto14["m_sql"] = "update_by";
$proto14["m_srcTableName"] = "mst_Sleeve_Length";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "create_at",
	"m_strTable" => "mst_Sleeve_Length",
	"m_srcTableName" => "mst_Sleeve_Length"
));

$proto16["m_sql"] = "create_at";
$proto16["m_srcTableName"] = "mst_Sleeve_Length";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "create_by",
	"m_strTable" => "mst_Sleeve_Length",
	"m_srcTableName" => "mst_Sleeve_Length"
));

$proto18["m_sql"] = "create_by";
$proto18["m_srcTableName"] = "mst_Sleeve_Length";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_junle",
	"m_strTable" => "mst_Sleeve_Length",
	"m_srcTableName" => "mst_Sleeve_Length"
));

$proto20["m_sql"] = "yahoo_junle";
$proto20["m_srcTableName"] = "mst_Sleeve_Length";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "category_id",
	"m_strTable" => "mst_Sleeve_Length",
	"m_srcTableName" => "mst_Sleeve_Length"
));

$proto22["m_sql"] = "category_id";
$proto22["m_srcTableName"] = "mst_Sleeve_Length";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "sub_category_id1",
	"m_strTable" => "mst_Sleeve_Length",
	"m_srcTableName" => "mst_Sleeve_Length"
));

$proto24["m_sql"] = "sub_category_id1";
$proto24["m_srcTableName"] = "mst_Sleeve_Length";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "mst_Sleeve_Length";
$proto27["m_srcTableName"] = "mst_Sleeve_Length";
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
$proto26["m_sql"] = "mst_Sleeve_Length";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "mst_Sleeve_Length";
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
$proto0["m_srcTableName"]="mst_Sleeve_Length";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mst_Sleeve_Length = createSqlQuery_mst_Sleeve_Length();


	
		;

										

$tdatamst_Sleeve_Length[".sqlquery"] = $queryData_mst_Sleeve_Length;

$tableEvents["mst_Sleeve_Length"] = new eventsBase;
$tdatamst_Sleeve_Length[".hasEvents"] = false;

?>