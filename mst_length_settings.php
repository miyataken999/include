<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamst_length = array();
	$tdatamst_length[".truncateText"] = true;
	$tdatamst_length[".NumberOfChars"] = 80;
	$tdatamst_length[".ShortName"] = "mst_length";
	$tdatamst_length[".OwnerID"] = "";
	$tdatamst_length[".OriginalTable"] = "mst_length";

//	field labels
$fieldLabelsmst_length = array();
$fieldToolTipsmst_length = array();
$pageTitlesmst_length = array();
$placeHoldersmst_length = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmst_length["Japanese"] = array();
	$fieldToolTipsmst_length["Japanese"] = array();
	$placeHoldersmst_length["Japanese"] = array();
	$pageTitlesmst_length["Japanese"] = array();
	$fieldLabelsmst_length["Japanese"]["id"] = "Id";
	$fieldToolTipsmst_length["Japanese"]["id"] = "";
	$placeHoldersmst_length["Japanese"]["id"] = "";
	$fieldLabelsmst_length["Japanese"]["name"] = "Name";
	$fieldToolTipsmst_length["Japanese"]["name"] = "";
	$placeHoldersmst_length["Japanese"]["name"] = "";
	$fieldLabelsmst_length["Japanese"]["sort"] = "Sort";
	$fieldToolTipsmst_length["Japanese"]["sort"] = "";
	$placeHoldersmst_length["Japanese"]["sort"] = "";
	$fieldLabelsmst_length["Japanese"]["update_at"] = "Update At";
	$fieldToolTipsmst_length["Japanese"]["update_at"] = "";
	$placeHoldersmst_length["Japanese"]["update_at"] = "";
	$fieldLabelsmst_length["Japanese"]["update_by"] = "Update By";
	$fieldToolTipsmst_length["Japanese"]["update_by"] = "";
	$placeHoldersmst_length["Japanese"]["update_by"] = "";
	$fieldLabelsmst_length["Japanese"]["create_at"] = "Create At";
	$fieldToolTipsmst_length["Japanese"]["create_at"] = "";
	$placeHoldersmst_length["Japanese"]["create_at"] = "";
	$fieldLabelsmst_length["Japanese"]["create_by"] = "Create By";
	$fieldToolTipsmst_length["Japanese"]["create_by"] = "";
	$placeHoldersmst_length["Japanese"]["create_by"] = "";
	$fieldLabelsmst_length["Japanese"]["yahoo_junle"] = "Yahoo Junle";
	$fieldToolTipsmst_length["Japanese"]["yahoo_junle"] = "";
	$placeHoldersmst_length["Japanese"]["yahoo_junle"] = "";
	$fieldLabelsmst_length["Japanese"]["category_id"] = "Category Id";
	$fieldToolTipsmst_length["Japanese"]["category_id"] = "";
	$placeHoldersmst_length["Japanese"]["category_id"] = "";
	$fieldLabelsmst_length["Japanese"]["sub_category_id1"] = "Sub Category Id1";
	$fieldToolTipsmst_length["Japanese"]["sub_category_id1"] = "";
	$placeHoldersmst_length["Japanese"]["sub_category_id1"] = "";
	if (count($fieldToolTipsmst_length["Japanese"]))
		$tdatamst_length[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmst_length[""] = array();
	$fieldToolTipsmst_length[""] = array();
	$placeHoldersmst_length[""] = array();
	$pageTitlesmst_length[""] = array();
	$fieldLabelsmst_length[""]["id"] = "Id";
	$fieldToolTipsmst_length[""]["id"] = "";
	$placeHoldersmst_length[""]["id"] = "";
	$fieldLabelsmst_length[""]["name"] = "Name";
	$fieldToolTipsmst_length[""]["name"] = "";
	$placeHoldersmst_length[""]["name"] = "";
	$fieldLabelsmst_length[""]["sort"] = "Sort";
	$fieldToolTipsmst_length[""]["sort"] = "";
	$placeHoldersmst_length[""]["sort"] = "";
	$fieldLabelsmst_length[""]["update_at"] = "Update At";
	$fieldToolTipsmst_length[""]["update_at"] = "";
	$placeHoldersmst_length[""]["update_at"] = "";
	$fieldLabelsmst_length[""]["update_by"] = "Update By";
	$fieldToolTipsmst_length[""]["update_by"] = "";
	$placeHoldersmst_length[""]["update_by"] = "";
	$fieldLabelsmst_length[""]["create_at"] = "Create At";
	$fieldToolTipsmst_length[""]["create_at"] = "";
	$placeHoldersmst_length[""]["create_at"] = "";
	$fieldLabelsmst_length[""]["create_by"] = "Create By";
	$fieldToolTipsmst_length[""]["create_by"] = "";
	$placeHoldersmst_length[""]["create_by"] = "";
	$fieldLabelsmst_length[""]["yahoo_junle"] = "Yahoo Junle";
	$fieldToolTipsmst_length[""]["yahoo_junle"] = "";
	$placeHoldersmst_length[""]["yahoo_junle"] = "";
	$fieldLabelsmst_length[""]["category_id"] = "Category Id";
	$fieldToolTipsmst_length[""]["category_id"] = "";
	$placeHoldersmst_length[""]["category_id"] = "";
	$fieldLabelsmst_length[""]["sub_category_id1"] = "Sub Category Id1";
	$fieldToolTipsmst_length[""]["sub_category_id1"] = "";
	$placeHoldersmst_length[""]["sub_category_id1"] = "";
	if (count($fieldToolTipsmst_length[""]))
		$tdatamst_length[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmst_length["English"] = array();
	$fieldToolTipsmst_length["English"] = array();
	$placeHoldersmst_length["English"] = array();
	$pageTitlesmst_length["English"] = array();
	$fieldLabelsmst_length["English"]["id"] = "Id";
	$fieldToolTipsmst_length["English"]["id"] = "";
	$placeHoldersmst_length["English"]["id"] = "";
	$fieldLabelsmst_length["English"]["name"] = "Name";
	$fieldToolTipsmst_length["English"]["name"] = "";
	$placeHoldersmst_length["English"]["name"] = "";
	$fieldLabelsmst_length["English"]["sort"] = "Sort";
	$fieldToolTipsmst_length["English"]["sort"] = "";
	$placeHoldersmst_length["English"]["sort"] = "";
	$fieldLabelsmst_length["English"]["update_at"] = "Update At";
	$fieldToolTipsmst_length["English"]["update_at"] = "";
	$placeHoldersmst_length["English"]["update_at"] = "";
	$fieldLabelsmst_length["English"]["update_by"] = "Update By";
	$fieldToolTipsmst_length["English"]["update_by"] = "";
	$placeHoldersmst_length["English"]["update_by"] = "";
	$fieldLabelsmst_length["English"]["create_at"] = "Create At";
	$fieldToolTipsmst_length["English"]["create_at"] = "";
	$placeHoldersmst_length["English"]["create_at"] = "";
	$fieldLabelsmst_length["English"]["create_by"] = "Create By";
	$fieldToolTipsmst_length["English"]["create_by"] = "";
	$placeHoldersmst_length["English"]["create_by"] = "";
	$fieldLabelsmst_length["English"]["yahoo_junle"] = "Yahoo Junle";
	$fieldToolTipsmst_length["English"]["yahoo_junle"] = "";
	$placeHoldersmst_length["English"]["yahoo_junle"] = "";
	$fieldLabelsmst_length["English"]["category_id"] = "Category Id";
	$fieldToolTipsmst_length["English"]["category_id"] = "";
	$placeHoldersmst_length["English"]["category_id"] = "";
	$fieldLabelsmst_length["English"]["sub_category_id1"] = "Sub Category Id1";
	$fieldToolTipsmst_length["English"]["sub_category_id1"] = "";
	$placeHoldersmst_length["English"]["sub_category_id1"] = "";
	if (count($fieldToolTipsmst_length["English"]))
		$tdatamst_length[".isUseToolTips"] = true;
}


	$tdatamst_length[".NCSearch"] = true;



$tdatamst_length[".shortTableName"] = "mst_length";
$tdatamst_length[".nSecOptions"] = 0;
$tdatamst_length[".recsPerRowPrint"] = 1;
$tdatamst_length[".mainTableOwnerID"] = "";
$tdatamst_length[".moveNext"] = 1;
$tdatamst_length[".entityType"] = 0;

$tdatamst_length[".strOriginalTableName"] = "mst_length";

	



$tdatamst_length[".showAddInPopup"] = false;

$tdatamst_length[".showEditInPopup"] = false;

$tdatamst_length[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamst_length[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamst_length[".fieldsForRegister"] = array();

$tdatamst_length[".listAjax"] = false;

	$tdatamst_length[".audit"] = true;

	$tdatamst_length[".locking"] = false;






$tdatamst_length[".reorderRecordsByHeader"] = true;








$tdatamst_length[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamst_length[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamst_length[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamst_length[".searchSaving"] = false;
//

$tdatamst_length[".showSearchPanel"] = true;
		$tdatamst_length[".flexibleSearch"] = true;

$tdatamst_length[".isUseAjaxSuggest"] = true;

$tdatamst_length[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatamst_length[".ajaxCodeSnippetAdded"] = false;

$tdatamst_length[".buttonsAdded"] = false;

$tdatamst_length[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamst_length[".isUseTimeForSearch"] = false;





$tdatamst_length[".allSearchFields"] = array();
$tdatamst_length[".filterFields"] = array();
$tdatamst_length[".requiredSearchFields"] = array();



$tdatamst_length[".googleLikeFields"] = array();
$tdatamst_length[".googleLikeFields"][] = "id";
$tdatamst_length[".googleLikeFields"][] = "name";
$tdatamst_length[".googleLikeFields"][] = "sort";
$tdatamst_length[".googleLikeFields"][] = "update_at";
$tdatamst_length[".googleLikeFields"][] = "update_by";
$tdatamst_length[".googleLikeFields"][] = "create_at";
$tdatamst_length[".googleLikeFields"][] = "create_by";
$tdatamst_length[".googleLikeFields"][] = "yahoo_junle";
$tdatamst_length[".googleLikeFields"][] = "category_id";
$tdatamst_length[".googleLikeFields"][] = "sub_category_id1";



$tdatamst_length[".tableType"] = "list";

$tdatamst_length[".printerPageOrientation"] = 0;
$tdatamst_length[".nPrinterPageScale"] = 100;

$tdatamst_length[".nPrinterSplitRecords"] = 40;

$tdatamst_length[".nPrinterPDFSplitRecords"] = 40;



$tdatamst_length[".geocodingEnabled"] = false;





$tdatamst_length[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamst_length[".pageSize"] = 20;

$tdatamst_length[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamst_length[".strOrderBy"] = $tstrOrderBy;

$tdatamst_length[".orderindexes"] = array();

$tdatamst_length[".sqlHead"] = "SELECT id,  	name,  	sort,  	update_at,  	update_by,  	create_at,  	create_by,  	yahoo_junle,  	category_id,  	sub_category_id1";
$tdatamst_length[".sqlFrom"] = "FROM mst_length";
$tdatamst_length[".sqlWhereExpr"] = "";
$tdatamst_length[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamst_length[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamst_length[".arrGroupsPerPage"] = $arrGPP;

$tdatamst_length[".highlightSearchResults"] = true;

$tableKeysmst_length = array();
$tableKeysmst_length[] = "id";
$tdatamst_length[".Keys"] = $tableKeysmst_length;

$tdatamst_length[".listFields"] = array();

$tdatamst_length[".hideMobileList"] = array();


$tdatamst_length[".viewFields"] = array();

$tdatamst_length[".addFields"] = array();

$tdatamst_length[".masterListFields"] = array();
$tdatamst_length[".masterListFields"][] = "id";
$tdatamst_length[".masterListFields"][] = "name";
$tdatamst_length[".masterListFields"][] = "sort";
$tdatamst_length[".masterListFields"][] = "update_at";
$tdatamst_length[".masterListFields"][] = "update_by";
$tdatamst_length[".masterListFields"][] = "create_at";
$tdatamst_length[".masterListFields"][] = "create_by";
$tdatamst_length[".masterListFields"][] = "yahoo_junle";
$tdatamst_length[".masterListFields"][] = "category_id";
$tdatamst_length[".masterListFields"][] = "sub_category_id1";

$tdatamst_length[".inlineAddFields"] = array();

$tdatamst_length[".editFields"] = array();

$tdatamst_length[".inlineEditFields"] = array();

$tdatamst_length[".updateSelectedFields"] = array();


$tdatamst_length[".exportFields"] = array();

$tdatamst_length[".importFields"] = array();

$tdatamst_length[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "mst_length";
	$fdata["Label"] = GetFieldLabel("mst_length","id");
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








	$tdatamst_length["id"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "mst_length";
	$fdata["Label"] = GetFieldLabel("mst_length","name");
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








	$tdatamst_length["name"] = $fdata;
//	sort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sort";
	$fdata["GoodName"] = "sort";
	$fdata["ownerTable"] = "mst_length";
	$fdata["Label"] = GetFieldLabel("mst_length","sort");
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








	$tdatamst_length["sort"] = $fdata;
//	update_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "update_at";
	$fdata["GoodName"] = "update_at";
	$fdata["ownerTable"] = "mst_length";
	$fdata["Label"] = GetFieldLabel("mst_length","update_at");
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








	$tdatamst_length["update_at"] = $fdata;
//	update_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "update_by";
	$fdata["GoodName"] = "update_by";
	$fdata["ownerTable"] = "mst_length";
	$fdata["Label"] = GetFieldLabel("mst_length","update_by");
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








	$tdatamst_length["update_by"] = $fdata;
//	create_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "create_at";
	$fdata["GoodName"] = "create_at";
	$fdata["ownerTable"] = "mst_length";
	$fdata["Label"] = GetFieldLabel("mst_length","create_at");
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








	$tdatamst_length["create_at"] = $fdata;
//	create_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "create_by";
	$fdata["GoodName"] = "create_by";
	$fdata["ownerTable"] = "mst_length";
	$fdata["Label"] = GetFieldLabel("mst_length","create_by");
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








	$tdatamst_length["create_by"] = $fdata;
//	yahoo_junle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "yahoo_junle";
	$fdata["GoodName"] = "yahoo_junle";
	$fdata["ownerTable"] = "mst_length";
	$fdata["Label"] = GetFieldLabel("mst_length","yahoo_junle");
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








	$tdatamst_length["yahoo_junle"] = $fdata;
//	category_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "category_id";
	$fdata["GoodName"] = "category_id";
	$fdata["ownerTable"] = "mst_length";
	$fdata["Label"] = GetFieldLabel("mst_length","category_id");
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








	$tdatamst_length["category_id"] = $fdata;
//	sub_category_id1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "sub_category_id1";
	$fdata["GoodName"] = "sub_category_id1";
	$fdata["ownerTable"] = "mst_length";
	$fdata["Label"] = GetFieldLabel("mst_length","sub_category_id1");
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








	$tdatamst_length["sub_category_id1"] = $fdata;


$tables_data["mst_length"]=&$tdatamst_length;
$field_labels["mst_length"] = &$fieldLabelsmst_length;
$fieldToolTips["mst_length"] = &$fieldToolTipsmst_length;
$placeHolders["mst_length"] = &$placeHoldersmst_length;
$page_titles["mst_length"] = &$pageTitlesmst_length;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mst_length"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mst_length"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mst_length()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	name,  	sort,  	update_at,  	update_by,  	create_at,  	create_by,  	yahoo_junle,  	category_id,  	sub_category_id1";
$proto0["m_strFrom"] = "FROM mst_length";
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
	"m_strTable" => "mst_length",
	"m_srcTableName" => "mst_length"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "mst_length";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "mst_length",
	"m_srcTableName" => "mst_length"
));

$proto8["m_sql"] = "name";
$proto8["m_srcTableName"] = "mst_length";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "sort",
	"m_strTable" => "mst_length",
	"m_srcTableName" => "mst_length"
));

$proto10["m_sql"] = "sort";
$proto10["m_srcTableName"] = "mst_length";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "update_at",
	"m_strTable" => "mst_length",
	"m_srcTableName" => "mst_length"
));

$proto12["m_sql"] = "update_at";
$proto12["m_srcTableName"] = "mst_length";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "update_by",
	"m_strTable" => "mst_length",
	"m_srcTableName" => "mst_length"
));

$proto14["m_sql"] = "update_by";
$proto14["m_srcTableName"] = "mst_length";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "create_at",
	"m_strTable" => "mst_length",
	"m_srcTableName" => "mst_length"
));

$proto16["m_sql"] = "create_at";
$proto16["m_srcTableName"] = "mst_length";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "create_by",
	"m_strTable" => "mst_length",
	"m_srcTableName" => "mst_length"
));

$proto18["m_sql"] = "create_by";
$proto18["m_srcTableName"] = "mst_length";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_junle",
	"m_strTable" => "mst_length",
	"m_srcTableName" => "mst_length"
));

$proto20["m_sql"] = "yahoo_junle";
$proto20["m_srcTableName"] = "mst_length";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "category_id",
	"m_strTable" => "mst_length",
	"m_srcTableName" => "mst_length"
));

$proto22["m_sql"] = "category_id";
$proto22["m_srcTableName"] = "mst_length";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "sub_category_id1",
	"m_strTable" => "mst_length",
	"m_srcTableName" => "mst_length"
));

$proto24["m_sql"] = "sub_category_id1";
$proto24["m_srcTableName"] = "mst_length";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "mst_length";
$proto27["m_srcTableName"] = "mst_length";
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
$proto26["m_sql"] = "mst_length";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "mst_length";
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
$proto0["m_srcTableName"]="mst_length";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mst_length = createSqlQuery_mst_length();


	
		;

										

$tdatamst_length[".sqlquery"] = $queryData_mst_length;

$tableEvents["mst_length"] = new eventsBase;
$tdatamst_length[".hasEvents"] = false;

?>