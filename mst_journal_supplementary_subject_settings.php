<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamst_journal_supplementary_subject = array();
	$tdatamst_journal_supplementary_subject[".truncateText"] = true;
	$tdatamst_journal_supplementary_subject[".NumberOfChars"] = 80;
	$tdatamst_journal_supplementary_subject[".ShortName"] = "mst_journal_supplementary_subject";
	$tdatamst_journal_supplementary_subject[".OwnerID"] = "";
	$tdatamst_journal_supplementary_subject[".OriginalTable"] = "mst_journal_supplementary_subject";

//	field labels
$fieldLabelsmst_journal_supplementary_subject = array();
$fieldToolTipsmst_journal_supplementary_subject = array();
$pageTitlesmst_journal_supplementary_subject = array();
$placeHoldersmst_journal_supplementary_subject = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmst_journal_supplementary_subject["Japanese"] = array();
	$fieldToolTipsmst_journal_supplementary_subject["Japanese"] = array();
	$placeHoldersmst_journal_supplementary_subject["Japanese"] = array();
	$pageTitlesmst_journal_supplementary_subject["Japanese"] = array();
	$fieldLabelsmst_journal_supplementary_subject["Japanese"]["id"] = "Id";
	$fieldToolTipsmst_journal_supplementary_subject["Japanese"]["id"] = "";
	$placeHoldersmst_journal_supplementary_subject["Japanese"]["id"] = "";
	$fieldLabelsmst_journal_supplementary_subject["Japanese"]["name"] = "Name";
	$fieldToolTipsmst_journal_supplementary_subject["Japanese"]["name"] = "";
	$placeHoldersmst_journal_supplementary_subject["Japanese"]["name"] = "";
	$fieldLabelsmst_journal_supplementary_subject["Japanese"]["sort"] = "Sort";
	$fieldToolTipsmst_journal_supplementary_subject["Japanese"]["sort"] = "";
	$placeHoldersmst_journal_supplementary_subject["Japanese"]["sort"] = "";
	$fieldLabelsmst_journal_supplementary_subject["Japanese"]["update_by"] = "Update By";
	$fieldToolTipsmst_journal_supplementary_subject["Japanese"]["update_by"] = "";
	$placeHoldersmst_journal_supplementary_subject["Japanese"]["update_by"] = "";
	$fieldLabelsmst_journal_supplementary_subject["Japanese"]["update_at"] = "Update At";
	$fieldToolTipsmst_journal_supplementary_subject["Japanese"]["update_at"] = "";
	$placeHoldersmst_journal_supplementary_subject["Japanese"]["update_at"] = "";
	$fieldLabelsmst_journal_supplementary_subject["Japanese"]["create_by"] = "Create By";
	$fieldToolTipsmst_journal_supplementary_subject["Japanese"]["create_by"] = "";
	$placeHoldersmst_journal_supplementary_subject["Japanese"]["create_by"] = "";
	$fieldLabelsmst_journal_supplementary_subject["Japanese"]["create_at"] = "Create At";
	$fieldToolTipsmst_journal_supplementary_subject["Japanese"]["create_at"] = "";
	$placeHoldersmst_journal_supplementary_subject["Japanese"]["create_at"] = "";
	if (count($fieldToolTipsmst_journal_supplementary_subject["Japanese"]))
		$tdatamst_journal_supplementary_subject[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmst_journal_supplementary_subject[""] = array();
	$fieldToolTipsmst_journal_supplementary_subject[""] = array();
	$placeHoldersmst_journal_supplementary_subject[""] = array();
	$pageTitlesmst_journal_supplementary_subject[""] = array();
	$fieldLabelsmst_journal_supplementary_subject[""]["id"] = "Id";
	$fieldToolTipsmst_journal_supplementary_subject[""]["id"] = "";
	$placeHoldersmst_journal_supplementary_subject[""]["id"] = "";
	$fieldLabelsmst_journal_supplementary_subject[""]["name"] = "Name";
	$fieldToolTipsmst_journal_supplementary_subject[""]["name"] = "";
	$placeHoldersmst_journal_supplementary_subject[""]["name"] = "";
	$fieldLabelsmst_journal_supplementary_subject[""]["sort"] = "Sort";
	$fieldToolTipsmst_journal_supplementary_subject[""]["sort"] = "";
	$placeHoldersmst_journal_supplementary_subject[""]["sort"] = "";
	$fieldLabelsmst_journal_supplementary_subject[""]["update_by"] = "Update By";
	$fieldToolTipsmst_journal_supplementary_subject[""]["update_by"] = "";
	$placeHoldersmst_journal_supplementary_subject[""]["update_by"] = "";
	$fieldLabelsmst_journal_supplementary_subject[""]["update_at"] = "Update At";
	$fieldToolTipsmst_journal_supplementary_subject[""]["update_at"] = "";
	$placeHoldersmst_journal_supplementary_subject[""]["update_at"] = "";
	$fieldLabelsmst_journal_supplementary_subject[""]["create_by"] = "Create By";
	$fieldToolTipsmst_journal_supplementary_subject[""]["create_by"] = "";
	$placeHoldersmst_journal_supplementary_subject[""]["create_by"] = "";
	$fieldLabelsmst_journal_supplementary_subject[""]["create_at"] = "Create At";
	$fieldToolTipsmst_journal_supplementary_subject[""]["create_at"] = "";
	$placeHoldersmst_journal_supplementary_subject[""]["create_at"] = "";
	if (count($fieldToolTipsmst_journal_supplementary_subject[""]))
		$tdatamst_journal_supplementary_subject[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmst_journal_supplementary_subject["English"] = array();
	$fieldToolTipsmst_journal_supplementary_subject["English"] = array();
	$placeHoldersmst_journal_supplementary_subject["English"] = array();
	$pageTitlesmst_journal_supplementary_subject["English"] = array();
	$fieldLabelsmst_journal_supplementary_subject["English"]["id"] = "Id";
	$fieldToolTipsmst_journal_supplementary_subject["English"]["id"] = "";
	$placeHoldersmst_journal_supplementary_subject["English"]["id"] = "";
	$fieldLabelsmst_journal_supplementary_subject["English"]["name"] = "Name";
	$fieldToolTipsmst_journal_supplementary_subject["English"]["name"] = "";
	$placeHoldersmst_journal_supplementary_subject["English"]["name"] = "";
	$fieldLabelsmst_journal_supplementary_subject["English"]["sort"] = "Sort";
	$fieldToolTipsmst_journal_supplementary_subject["English"]["sort"] = "";
	$placeHoldersmst_journal_supplementary_subject["English"]["sort"] = "";
	$fieldLabelsmst_journal_supplementary_subject["English"]["update_by"] = "Update By";
	$fieldToolTipsmst_journal_supplementary_subject["English"]["update_by"] = "";
	$placeHoldersmst_journal_supplementary_subject["English"]["update_by"] = "";
	$fieldLabelsmst_journal_supplementary_subject["English"]["update_at"] = "Update At";
	$fieldToolTipsmst_journal_supplementary_subject["English"]["update_at"] = "";
	$placeHoldersmst_journal_supplementary_subject["English"]["update_at"] = "";
	$fieldLabelsmst_journal_supplementary_subject["English"]["create_by"] = "Create By";
	$fieldToolTipsmst_journal_supplementary_subject["English"]["create_by"] = "";
	$placeHoldersmst_journal_supplementary_subject["English"]["create_by"] = "";
	$fieldLabelsmst_journal_supplementary_subject["English"]["create_at"] = "Create At";
	$fieldToolTipsmst_journal_supplementary_subject["English"]["create_at"] = "";
	$placeHoldersmst_journal_supplementary_subject["English"]["create_at"] = "";
	if (count($fieldToolTipsmst_journal_supplementary_subject["English"]))
		$tdatamst_journal_supplementary_subject[".isUseToolTips"] = true;
}


	$tdatamst_journal_supplementary_subject[".NCSearch"] = true;



$tdatamst_journal_supplementary_subject[".shortTableName"] = "mst_journal_supplementary_subject";
$tdatamst_journal_supplementary_subject[".nSecOptions"] = 0;
$tdatamst_journal_supplementary_subject[".recsPerRowPrint"] = 1;
$tdatamst_journal_supplementary_subject[".mainTableOwnerID"] = "";
$tdatamst_journal_supplementary_subject[".moveNext"] = 1;
$tdatamst_journal_supplementary_subject[".entityType"] = 0;

$tdatamst_journal_supplementary_subject[".strOriginalTableName"] = "mst_journal_supplementary_subject";

	



$tdatamst_journal_supplementary_subject[".showAddInPopup"] = false;

$tdatamst_journal_supplementary_subject[".showEditInPopup"] = false;

$tdatamst_journal_supplementary_subject[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamst_journal_supplementary_subject[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamst_journal_supplementary_subject[".fieldsForRegister"] = array();

$tdatamst_journal_supplementary_subject[".listAjax"] = false;

	$tdatamst_journal_supplementary_subject[".audit"] = true;

	$tdatamst_journal_supplementary_subject[".locking"] = false;






$tdatamst_journal_supplementary_subject[".reorderRecordsByHeader"] = true;








$tdatamst_journal_supplementary_subject[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamst_journal_supplementary_subject[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamst_journal_supplementary_subject[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamst_journal_supplementary_subject[".searchSaving"] = false;
//

$tdatamst_journal_supplementary_subject[".showSearchPanel"] = true;
		$tdatamst_journal_supplementary_subject[".flexibleSearch"] = true;

$tdatamst_journal_supplementary_subject[".isUseAjaxSuggest"] = true;

$tdatamst_journal_supplementary_subject[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatamst_journal_supplementary_subject[".ajaxCodeSnippetAdded"] = false;

$tdatamst_journal_supplementary_subject[".buttonsAdded"] = false;

$tdatamst_journal_supplementary_subject[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamst_journal_supplementary_subject[".isUseTimeForSearch"] = false;





$tdatamst_journal_supplementary_subject[".allSearchFields"] = array();
$tdatamst_journal_supplementary_subject[".filterFields"] = array();
$tdatamst_journal_supplementary_subject[".requiredSearchFields"] = array();



$tdatamst_journal_supplementary_subject[".googleLikeFields"] = array();
$tdatamst_journal_supplementary_subject[".googleLikeFields"][] = "id";
$tdatamst_journal_supplementary_subject[".googleLikeFields"][] = "name";
$tdatamst_journal_supplementary_subject[".googleLikeFields"][] = "sort";
$tdatamst_journal_supplementary_subject[".googleLikeFields"][] = "update_by";
$tdatamst_journal_supplementary_subject[".googleLikeFields"][] = "update_at";
$tdatamst_journal_supplementary_subject[".googleLikeFields"][] = "create_by";
$tdatamst_journal_supplementary_subject[".googleLikeFields"][] = "create_at";



$tdatamst_journal_supplementary_subject[".tableType"] = "list";

$tdatamst_journal_supplementary_subject[".printerPageOrientation"] = 0;
$tdatamst_journal_supplementary_subject[".nPrinterPageScale"] = 100;

$tdatamst_journal_supplementary_subject[".nPrinterSplitRecords"] = 40;

$tdatamst_journal_supplementary_subject[".nPrinterPDFSplitRecords"] = 40;



$tdatamst_journal_supplementary_subject[".geocodingEnabled"] = false;





$tdatamst_journal_supplementary_subject[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamst_journal_supplementary_subject[".pageSize"] = 20;

$tdatamst_journal_supplementary_subject[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamst_journal_supplementary_subject[".strOrderBy"] = $tstrOrderBy;

$tdatamst_journal_supplementary_subject[".orderindexes"] = array();

$tdatamst_journal_supplementary_subject[".sqlHead"] = "SELECT id,  	name,  	sort,  	update_by,  	update_at,  	create_by,  	create_at";
$tdatamst_journal_supplementary_subject[".sqlFrom"] = "FROM mst_journal_supplementary_subject";
$tdatamst_journal_supplementary_subject[".sqlWhereExpr"] = "";
$tdatamst_journal_supplementary_subject[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamst_journal_supplementary_subject[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamst_journal_supplementary_subject[".arrGroupsPerPage"] = $arrGPP;

$tdatamst_journal_supplementary_subject[".highlightSearchResults"] = true;

$tableKeysmst_journal_supplementary_subject = array();
$tableKeysmst_journal_supplementary_subject[] = "id";
$tdatamst_journal_supplementary_subject[".Keys"] = $tableKeysmst_journal_supplementary_subject;

$tdatamst_journal_supplementary_subject[".listFields"] = array();

$tdatamst_journal_supplementary_subject[".hideMobileList"] = array();


$tdatamst_journal_supplementary_subject[".viewFields"] = array();

$tdatamst_journal_supplementary_subject[".addFields"] = array();

$tdatamst_journal_supplementary_subject[".masterListFields"] = array();
$tdatamst_journal_supplementary_subject[".masterListFields"][] = "id";
$tdatamst_journal_supplementary_subject[".masterListFields"][] = "name";
$tdatamst_journal_supplementary_subject[".masterListFields"][] = "sort";
$tdatamst_journal_supplementary_subject[".masterListFields"][] = "update_by";
$tdatamst_journal_supplementary_subject[".masterListFields"][] = "update_at";
$tdatamst_journal_supplementary_subject[".masterListFields"][] = "create_by";
$tdatamst_journal_supplementary_subject[".masterListFields"][] = "create_at";

$tdatamst_journal_supplementary_subject[".inlineAddFields"] = array();

$tdatamst_journal_supplementary_subject[".editFields"] = array();

$tdatamst_journal_supplementary_subject[".inlineEditFields"] = array();

$tdatamst_journal_supplementary_subject[".updateSelectedFields"] = array();


$tdatamst_journal_supplementary_subject[".exportFields"] = array();

$tdatamst_journal_supplementary_subject[".importFields"] = array();

$tdatamst_journal_supplementary_subject[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "mst_journal_supplementary_subject";
	$fdata["Label"] = GetFieldLabel("mst_journal_supplementary_subject","id");
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








	$tdatamst_journal_supplementary_subject["id"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "mst_journal_supplementary_subject";
	$fdata["Label"] = GetFieldLabel("mst_journal_supplementary_subject","name");
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








	$tdatamst_journal_supplementary_subject["name"] = $fdata;
//	sort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sort";
	$fdata["GoodName"] = "sort";
	$fdata["ownerTable"] = "mst_journal_supplementary_subject";
	$fdata["Label"] = GetFieldLabel("mst_journal_supplementary_subject","sort");
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








	$tdatamst_journal_supplementary_subject["sort"] = $fdata;
//	update_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "update_by";
	$fdata["GoodName"] = "update_by";
	$fdata["ownerTable"] = "mst_journal_supplementary_subject";
	$fdata["Label"] = GetFieldLabel("mst_journal_supplementary_subject","update_by");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
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








	$tdatamst_journal_supplementary_subject["update_by"] = $fdata;
//	update_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "update_at";
	$fdata["GoodName"] = "update_at";
	$fdata["ownerTable"] = "mst_journal_supplementary_subject";
	$fdata["Label"] = GetFieldLabel("mst_journal_supplementary_subject","update_at");
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








	$tdatamst_journal_supplementary_subject["update_at"] = $fdata;
//	create_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "create_by";
	$fdata["GoodName"] = "create_by";
	$fdata["ownerTable"] = "mst_journal_supplementary_subject";
	$fdata["Label"] = GetFieldLabel("mst_journal_supplementary_subject","create_by");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
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








	$tdatamst_journal_supplementary_subject["create_by"] = $fdata;
//	create_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "create_at";
	$fdata["GoodName"] = "create_at";
	$fdata["ownerTable"] = "mst_journal_supplementary_subject";
	$fdata["Label"] = GetFieldLabel("mst_journal_supplementary_subject","create_at");
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








	$tdatamst_journal_supplementary_subject["create_at"] = $fdata;


$tables_data["mst_journal_supplementary_subject"]=&$tdatamst_journal_supplementary_subject;
$field_labels["mst_journal_supplementary_subject"] = &$fieldLabelsmst_journal_supplementary_subject;
$fieldToolTips["mst_journal_supplementary_subject"] = &$fieldToolTipsmst_journal_supplementary_subject;
$placeHolders["mst_journal_supplementary_subject"] = &$placeHoldersmst_journal_supplementary_subject;
$page_titles["mst_journal_supplementary_subject"] = &$pageTitlesmst_journal_supplementary_subject;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mst_journal_supplementary_subject"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mst_journal_supplementary_subject"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mst_journal_supplementary_subject()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	name,  	sort,  	update_by,  	update_at,  	create_by,  	create_at";
$proto0["m_strFrom"] = "FROM mst_journal_supplementary_subject";
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
	"m_strTable" => "mst_journal_supplementary_subject",
	"m_srcTableName" => "mst_journal_supplementary_subject"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "mst_journal_supplementary_subject";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "mst_journal_supplementary_subject",
	"m_srcTableName" => "mst_journal_supplementary_subject"
));

$proto8["m_sql"] = "name";
$proto8["m_srcTableName"] = "mst_journal_supplementary_subject";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "sort",
	"m_strTable" => "mst_journal_supplementary_subject",
	"m_srcTableName" => "mst_journal_supplementary_subject"
));

$proto10["m_sql"] = "sort";
$proto10["m_srcTableName"] = "mst_journal_supplementary_subject";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "update_by",
	"m_strTable" => "mst_journal_supplementary_subject",
	"m_srcTableName" => "mst_journal_supplementary_subject"
));

$proto12["m_sql"] = "update_by";
$proto12["m_srcTableName"] = "mst_journal_supplementary_subject";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "update_at",
	"m_strTable" => "mst_journal_supplementary_subject",
	"m_srcTableName" => "mst_journal_supplementary_subject"
));

$proto14["m_sql"] = "update_at";
$proto14["m_srcTableName"] = "mst_journal_supplementary_subject";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "create_by",
	"m_strTable" => "mst_journal_supplementary_subject",
	"m_srcTableName" => "mst_journal_supplementary_subject"
));

$proto16["m_sql"] = "create_by";
$proto16["m_srcTableName"] = "mst_journal_supplementary_subject";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "create_at",
	"m_strTable" => "mst_journal_supplementary_subject",
	"m_srcTableName" => "mst_journal_supplementary_subject"
));

$proto18["m_sql"] = "create_at";
$proto18["m_srcTableName"] = "mst_journal_supplementary_subject";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "mst_journal_supplementary_subject";
$proto21["m_srcTableName"] = "mst_journal_supplementary_subject";
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
$proto20["m_sql"] = "mst_journal_supplementary_subject";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "mst_journal_supplementary_subject";
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
$proto0["m_srcTableName"]="mst_journal_supplementary_subject";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mst_journal_supplementary_subject = createSqlQuery_mst_journal_supplementary_subject();


	
		;

							

$tdatamst_journal_supplementary_subject[".sqlquery"] = $queryData_mst_journal_supplementary_subject;

$tableEvents["mst_journal_supplementary_subject"] = new eventsBase;
$tdatamst_journal_supplementary_subject[".hasEvents"] = false;

?>