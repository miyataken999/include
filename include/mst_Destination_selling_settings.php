<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamst_Destination_selling = array();
	$tdatamst_Destination_selling[".truncateText"] = true;
	$tdatamst_Destination_selling[".NumberOfChars"] = 80;
	$tdatamst_Destination_selling[".ShortName"] = "mst_Destination_selling";
	$tdatamst_Destination_selling[".OwnerID"] = "";
	$tdatamst_Destination_selling[".OriginalTable"] = "mst_Destination_selling";

//	field labels
$fieldLabelsmst_Destination_selling = array();
$fieldToolTipsmst_Destination_selling = array();
$pageTitlesmst_Destination_selling = array();
$placeHoldersmst_Destination_selling = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmst_Destination_selling["Japanese"] = array();
	$fieldToolTipsmst_Destination_selling["Japanese"] = array();
	$placeHoldersmst_Destination_selling["Japanese"] = array();
	$pageTitlesmst_Destination_selling["Japanese"] = array();
	$fieldLabelsmst_Destination_selling["Japanese"]["id"] = "Id";
	$fieldToolTipsmst_Destination_selling["Japanese"]["id"] = "";
	$placeHoldersmst_Destination_selling["Japanese"]["id"] = "";
	$fieldLabelsmst_Destination_selling["Japanese"]["val"] = "Val";
	$fieldToolTipsmst_Destination_selling["Japanese"]["val"] = "";
	$placeHoldersmst_Destination_selling["Japanese"]["val"] = "";
	$fieldLabelsmst_Destination_selling["Japanese"]["sort"] = "Sort";
	$fieldToolTipsmst_Destination_selling["Japanese"]["sort"] = "";
	$placeHoldersmst_Destination_selling["Japanese"]["sort"] = "";
	$fieldLabelsmst_Destination_selling["Japanese"]["update_at"] = "Update At";
	$fieldToolTipsmst_Destination_selling["Japanese"]["update_at"] = "";
	$placeHoldersmst_Destination_selling["Japanese"]["update_at"] = "";
	$fieldLabelsmst_Destination_selling["Japanese"]["update_by"] = "Update By";
	$fieldToolTipsmst_Destination_selling["Japanese"]["update_by"] = "";
	$placeHoldersmst_Destination_selling["Japanese"]["update_by"] = "";
	$fieldLabelsmst_Destination_selling["Japanese"]["create_at"] = "Create At";
	$fieldToolTipsmst_Destination_selling["Japanese"]["create_at"] = "";
	$placeHoldersmst_Destination_selling["Japanese"]["create_at"] = "";
	$fieldLabelsmst_Destination_selling["Japanese"]["create_by"] = "Create By";
	$fieldToolTipsmst_Destination_selling["Japanese"]["create_by"] = "";
	$placeHoldersmst_Destination_selling["Japanese"]["create_by"] = "";
	if (count($fieldToolTipsmst_Destination_selling["Japanese"]))
		$tdatamst_Destination_selling[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmst_Destination_selling[""] = array();
	$fieldToolTipsmst_Destination_selling[""] = array();
	$placeHoldersmst_Destination_selling[""] = array();
	$pageTitlesmst_Destination_selling[""] = array();
	$fieldLabelsmst_Destination_selling[""]["id"] = "Id";
	$fieldToolTipsmst_Destination_selling[""]["id"] = "";
	$placeHoldersmst_Destination_selling[""]["id"] = "";
	$fieldLabelsmst_Destination_selling[""]["val"] = "Val";
	$fieldToolTipsmst_Destination_selling[""]["val"] = "";
	$placeHoldersmst_Destination_selling[""]["val"] = "";
	$fieldLabelsmst_Destination_selling[""]["sort"] = "Sort";
	$fieldToolTipsmst_Destination_selling[""]["sort"] = "";
	$placeHoldersmst_Destination_selling[""]["sort"] = "";
	$fieldLabelsmst_Destination_selling[""]["update_at"] = "Update At";
	$fieldToolTipsmst_Destination_selling[""]["update_at"] = "";
	$placeHoldersmst_Destination_selling[""]["update_at"] = "";
	$fieldLabelsmst_Destination_selling[""]["update_by"] = "Update By";
	$fieldToolTipsmst_Destination_selling[""]["update_by"] = "";
	$placeHoldersmst_Destination_selling[""]["update_by"] = "";
	$fieldLabelsmst_Destination_selling[""]["create_at"] = "Create At";
	$fieldToolTipsmst_Destination_selling[""]["create_at"] = "";
	$placeHoldersmst_Destination_selling[""]["create_at"] = "";
	$fieldLabelsmst_Destination_selling[""]["create_by"] = "Create By";
	$fieldToolTipsmst_Destination_selling[""]["create_by"] = "";
	$placeHoldersmst_Destination_selling[""]["create_by"] = "";
	if (count($fieldToolTipsmst_Destination_selling[""]))
		$tdatamst_Destination_selling[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmst_Destination_selling["English"] = array();
	$fieldToolTipsmst_Destination_selling["English"] = array();
	$placeHoldersmst_Destination_selling["English"] = array();
	$pageTitlesmst_Destination_selling["English"] = array();
	$fieldLabelsmst_Destination_selling["English"]["id"] = "Id";
	$fieldToolTipsmst_Destination_selling["English"]["id"] = "";
	$placeHoldersmst_Destination_selling["English"]["id"] = "";
	$fieldLabelsmst_Destination_selling["English"]["val"] = "Val";
	$fieldToolTipsmst_Destination_selling["English"]["val"] = "";
	$placeHoldersmst_Destination_selling["English"]["val"] = "";
	$fieldLabelsmst_Destination_selling["English"]["sort"] = "Sort";
	$fieldToolTipsmst_Destination_selling["English"]["sort"] = "";
	$placeHoldersmst_Destination_selling["English"]["sort"] = "";
	$fieldLabelsmst_Destination_selling["English"]["update_at"] = "Update At";
	$fieldToolTipsmst_Destination_selling["English"]["update_at"] = "";
	$placeHoldersmst_Destination_selling["English"]["update_at"] = "";
	$fieldLabelsmst_Destination_selling["English"]["update_by"] = "Update By";
	$fieldToolTipsmst_Destination_selling["English"]["update_by"] = "";
	$placeHoldersmst_Destination_selling["English"]["update_by"] = "";
	$fieldLabelsmst_Destination_selling["English"]["create_at"] = "Create At";
	$fieldToolTipsmst_Destination_selling["English"]["create_at"] = "";
	$placeHoldersmst_Destination_selling["English"]["create_at"] = "";
	$fieldLabelsmst_Destination_selling["English"]["create_by"] = "Create By";
	$fieldToolTipsmst_Destination_selling["English"]["create_by"] = "";
	$placeHoldersmst_Destination_selling["English"]["create_by"] = "";
	if (count($fieldToolTipsmst_Destination_selling["English"]))
		$tdatamst_Destination_selling[".isUseToolTips"] = true;
}


	$tdatamst_Destination_selling[".NCSearch"] = true;



$tdatamst_Destination_selling[".shortTableName"] = "mst_Destination_selling";
$tdatamst_Destination_selling[".nSecOptions"] = 0;
$tdatamst_Destination_selling[".recsPerRowPrint"] = 1;
$tdatamst_Destination_selling[".mainTableOwnerID"] = "";
$tdatamst_Destination_selling[".moveNext"] = 1;
$tdatamst_Destination_selling[".entityType"] = 0;

$tdatamst_Destination_selling[".strOriginalTableName"] = "mst_Destination_selling";

	



$tdatamst_Destination_selling[".showAddInPopup"] = false;

$tdatamst_Destination_selling[".showEditInPopup"] = false;

$tdatamst_Destination_selling[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamst_Destination_selling[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamst_Destination_selling[".fieldsForRegister"] = array();

$tdatamst_Destination_selling[".listAjax"] = false;

	$tdatamst_Destination_selling[".audit"] = true;

	$tdatamst_Destination_selling[".locking"] = false;






$tdatamst_Destination_selling[".reorderRecordsByHeader"] = true;








$tdatamst_Destination_selling[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamst_Destination_selling[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamst_Destination_selling[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamst_Destination_selling[".searchSaving"] = false;
//

$tdatamst_Destination_selling[".showSearchPanel"] = true;
		$tdatamst_Destination_selling[".flexibleSearch"] = true;

$tdatamst_Destination_selling[".isUseAjaxSuggest"] = true;

$tdatamst_Destination_selling[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatamst_Destination_selling[".ajaxCodeSnippetAdded"] = false;

$tdatamst_Destination_selling[".buttonsAdded"] = false;

$tdatamst_Destination_selling[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamst_Destination_selling[".isUseTimeForSearch"] = false;





$tdatamst_Destination_selling[".allSearchFields"] = array();
$tdatamst_Destination_selling[".filterFields"] = array();
$tdatamst_Destination_selling[".requiredSearchFields"] = array();



$tdatamst_Destination_selling[".googleLikeFields"] = array();
$tdatamst_Destination_selling[".googleLikeFields"][] = "id";
$tdatamst_Destination_selling[".googleLikeFields"][] = "val";
$tdatamst_Destination_selling[".googleLikeFields"][] = "sort";
$tdatamst_Destination_selling[".googleLikeFields"][] = "update_at";
$tdatamst_Destination_selling[".googleLikeFields"][] = "update_by";
$tdatamst_Destination_selling[".googleLikeFields"][] = "create_at";
$tdatamst_Destination_selling[".googleLikeFields"][] = "create_by";



$tdatamst_Destination_selling[".tableType"] = "list";

$tdatamst_Destination_selling[".printerPageOrientation"] = 0;
$tdatamst_Destination_selling[".nPrinterPageScale"] = 100;

$tdatamst_Destination_selling[".nPrinterSplitRecords"] = 40;

$tdatamst_Destination_selling[".nPrinterPDFSplitRecords"] = 40;



$tdatamst_Destination_selling[".geocodingEnabled"] = false;





$tdatamst_Destination_selling[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamst_Destination_selling[".pageSize"] = 20;

$tdatamst_Destination_selling[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamst_Destination_selling[".strOrderBy"] = $tstrOrderBy;

$tdatamst_Destination_selling[".orderindexes"] = array();

$tdatamst_Destination_selling[".sqlHead"] = "SELECT id,  	val,  	sort,  	update_at,  	update_by,  	create_at,  	create_by";
$tdatamst_Destination_selling[".sqlFrom"] = "FROM mst_Destination_selling";
$tdatamst_Destination_selling[".sqlWhereExpr"] = "";
$tdatamst_Destination_selling[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamst_Destination_selling[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamst_Destination_selling[".arrGroupsPerPage"] = $arrGPP;

$tdatamst_Destination_selling[".highlightSearchResults"] = true;

$tableKeysmst_Destination_selling = array();
$tableKeysmst_Destination_selling[] = "id";
$tdatamst_Destination_selling[".Keys"] = $tableKeysmst_Destination_selling;

$tdatamst_Destination_selling[".listFields"] = array();

$tdatamst_Destination_selling[".hideMobileList"] = array();


$tdatamst_Destination_selling[".viewFields"] = array();

$tdatamst_Destination_selling[".addFields"] = array();

$tdatamst_Destination_selling[".masterListFields"] = array();
$tdatamst_Destination_selling[".masterListFields"][] = "id";
$tdatamst_Destination_selling[".masterListFields"][] = "val";
$tdatamst_Destination_selling[".masterListFields"][] = "sort";
$tdatamst_Destination_selling[".masterListFields"][] = "update_at";
$tdatamst_Destination_selling[".masterListFields"][] = "update_by";
$tdatamst_Destination_selling[".masterListFields"][] = "create_at";
$tdatamst_Destination_selling[".masterListFields"][] = "create_by";

$tdatamst_Destination_selling[".inlineAddFields"] = array();

$tdatamst_Destination_selling[".editFields"] = array();

$tdatamst_Destination_selling[".inlineEditFields"] = array();

$tdatamst_Destination_selling[".updateSelectedFields"] = array();


$tdatamst_Destination_selling[".exportFields"] = array();

$tdatamst_Destination_selling[".importFields"] = array();

$tdatamst_Destination_selling[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "mst_Destination_selling";
	$fdata["Label"] = GetFieldLabel("mst_Destination_selling","id");
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








	$tdatamst_Destination_selling["id"] = $fdata;
//	val
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "val";
	$fdata["GoodName"] = "val";
	$fdata["ownerTable"] = "mst_Destination_selling";
	$fdata["Label"] = GetFieldLabel("mst_Destination_selling","val");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "val";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "val";

	
	
			
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








	$tdatamst_Destination_selling["val"] = $fdata;
//	sort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sort";
	$fdata["GoodName"] = "sort";
	$fdata["ownerTable"] = "mst_Destination_selling";
	$fdata["Label"] = GetFieldLabel("mst_Destination_selling","sort");
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








	$tdatamst_Destination_selling["sort"] = $fdata;
//	update_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "update_at";
	$fdata["GoodName"] = "update_at";
	$fdata["ownerTable"] = "mst_Destination_selling";
	$fdata["Label"] = GetFieldLabel("mst_Destination_selling","update_at");
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








	$tdatamst_Destination_selling["update_at"] = $fdata;
//	update_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "update_by";
	$fdata["GoodName"] = "update_by";
	$fdata["ownerTable"] = "mst_Destination_selling";
	$fdata["Label"] = GetFieldLabel("mst_Destination_selling","update_by");
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








	$tdatamst_Destination_selling["update_by"] = $fdata;
//	create_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "create_at";
	$fdata["GoodName"] = "create_at";
	$fdata["ownerTable"] = "mst_Destination_selling";
	$fdata["Label"] = GetFieldLabel("mst_Destination_selling","create_at");
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








	$tdatamst_Destination_selling["create_at"] = $fdata;
//	create_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "create_by";
	$fdata["GoodName"] = "create_by";
	$fdata["ownerTable"] = "mst_Destination_selling";
	$fdata["Label"] = GetFieldLabel("mst_Destination_selling","create_by");
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








	$tdatamst_Destination_selling["create_by"] = $fdata;


$tables_data["mst_Destination_selling"]=&$tdatamst_Destination_selling;
$field_labels["mst_Destination_selling"] = &$fieldLabelsmst_Destination_selling;
$fieldToolTips["mst_Destination_selling"] = &$fieldToolTipsmst_Destination_selling;
$placeHolders["mst_Destination_selling"] = &$placeHoldersmst_Destination_selling;
$page_titles["mst_Destination_selling"] = &$pageTitlesmst_Destination_selling;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mst_Destination_selling"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mst_Destination_selling"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mst_Destination_selling()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	val,  	sort,  	update_at,  	update_by,  	create_at,  	create_by";
$proto0["m_strFrom"] = "FROM mst_Destination_selling";
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
	"m_strTable" => "mst_Destination_selling",
	"m_srcTableName" => "mst_Destination_selling"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "mst_Destination_selling";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "val",
	"m_strTable" => "mst_Destination_selling",
	"m_srcTableName" => "mst_Destination_selling"
));

$proto8["m_sql"] = "val";
$proto8["m_srcTableName"] = "mst_Destination_selling";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "sort",
	"m_strTable" => "mst_Destination_selling",
	"m_srcTableName" => "mst_Destination_selling"
));

$proto10["m_sql"] = "sort";
$proto10["m_srcTableName"] = "mst_Destination_selling";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "update_at",
	"m_strTable" => "mst_Destination_selling",
	"m_srcTableName" => "mst_Destination_selling"
));

$proto12["m_sql"] = "update_at";
$proto12["m_srcTableName"] = "mst_Destination_selling";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "update_by",
	"m_strTable" => "mst_Destination_selling",
	"m_srcTableName" => "mst_Destination_selling"
));

$proto14["m_sql"] = "update_by";
$proto14["m_srcTableName"] = "mst_Destination_selling";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "create_at",
	"m_strTable" => "mst_Destination_selling",
	"m_srcTableName" => "mst_Destination_selling"
));

$proto16["m_sql"] = "create_at";
$proto16["m_srcTableName"] = "mst_Destination_selling";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "create_by",
	"m_strTable" => "mst_Destination_selling",
	"m_srcTableName" => "mst_Destination_selling"
));

$proto18["m_sql"] = "create_by";
$proto18["m_srcTableName"] = "mst_Destination_selling";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "mst_Destination_selling";
$proto21["m_srcTableName"] = "mst_Destination_selling";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "id";
$proto21["m_columns"][] = "val";
$proto21["m_columns"][] = "sort";
$proto21["m_columns"][] = "update_at";
$proto21["m_columns"][] = "update_by";
$proto21["m_columns"][] = "create_at";
$proto21["m_columns"][] = "create_by";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "mst_Destination_selling";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "mst_Destination_selling";
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
$proto0["m_srcTableName"]="mst_Destination_selling";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mst_Destination_selling = createSqlQuery_mst_Destination_selling();


	
		;

							

$tdatamst_Destination_selling[".sqlquery"] = $queryData_mst_Destination_selling;

$tableEvents["mst_Destination_selling"] = new eventsBase;
$tdatamst_Destination_selling[".hasEvents"] = false;

?>