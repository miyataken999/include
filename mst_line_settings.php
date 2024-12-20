<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamst_line = array();
	$tdatamst_line[".truncateText"] = true;
	$tdatamst_line[".NumberOfChars"] = 80;
	$tdatamst_line[".ShortName"] = "mst_line";
	$tdatamst_line[".OwnerID"] = "";
	$tdatamst_line[".OriginalTable"] = "mst_line";

//	field labels
$fieldLabelsmst_line = array();
$fieldToolTipsmst_line = array();
$pageTitlesmst_line = array();
$placeHoldersmst_line = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmst_line["Japanese"] = array();
	$fieldToolTipsmst_line["Japanese"] = array();
	$placeHoldersmst_line["Japanese"] = array();
	$pageTitlesmst_line["Japanese"] = array();
	$fieldLabelsmst_line["Japanese"]["id"] = "Id";
	$fieldToolTipsmst_line["Japanese"]["id"] = "";
	$placeHoldersmst_line["Japanese"]["id"] = "";
	$fieldLabelsmst_line["Japanese"]["line_category"] = "Line Category";
	$fieldToolTipsmst_line["Japanese"]["line_category"] = "";
	$placeHoldersmst_line["Japanese"]["line_category"] = "";
	$fieldLabelsmst_line["Japanese"]["sort"] = "Sort";
	$fieldToolTipsmst_line["Japanese"]["sort"] = "";
	$placeHoldersmst_line["Japanese"]["sort"] = "";
	$fieldLabelsmst_line["Japanese"]["update_at"] = "Update At";
	$fieldToolTipsmst_line["Japanese"]["update_at"] = "";
	$placeHoldersmst_line["Japanese"]["update_at"] = "";
	$fieldLabelsmst_line["Japanese"]["update_by"] = "Update By";
	$fieldToolTipsmst_line["Japanese"]["update_by"] = "";
	$placeHoldersmst_line["Japanese"]["update_by"] = "";
	$fieldLabelsmst_line["Japanese"]["create_at"] = "Create At";
	$fieldToolTipsmst_line["Japanese"]["create_at"] = "";
	$placeHoldersmst_line["Japanese"]["create_at"] = "";
	$fieldLabelsmst_line["Japanese"]["create_by"] = "Create By";
	$fieldToolTipsmst_line["Japanese"]["create_by"] = "";
	$placeHoldersmst_line["Japanese"]["create_by"] = "";
	if (count($fieldToolTipsmst_line["Japanese"]))
		$tdatamst_line[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmst_line[""] = array();
	$fieldToolTipsmst_line[""] = array();
	$placeHoldersmst_line[""] = array();
	$pageTitlesmst_line[""] = array();
	$fieldLabelsmst_line[""]["id"] = "Id";
	$fieldToolTipsmst_line[""]["id"] = "";
	$placeHoldersmst_line[""]["id"] = "";
	$fieldLabelsmst_line[""]["line_category"] = "Line Category";
	$fieldToolTipsmst_line[""]["line_category"] = "";
	$placeHoldersmst_line[""]["line_category"] = "";
	$fieldLabelsmst_line[""]["sort"] = "Sort";
	$fieldToolTipsmst_line[""]["sort"] = "";
	$placeHoldersmst_line[""]["sort"] = "";
	$fieldLabelsmst_line[""]["update_at"] = "Update At";
	$fieldToolTipsmst_line[""]["update_at"] = "";
	$placeHoldersmst_line[""]["update_at"] = "";
	$fieldLabelsmst_line[""]["update_by"] = "Update By";
	$fieldToolTipsmst_line[""]["update_by"] = "";
	$placeHoldersmst_line[""]["update_by"] = "";
	$fieldLabelsmst_line[""]["create_at"] = "Create At";
	$fieldToolTipsmst_line[""]["create_at"] = "";
	$placeHoldersmst_line[""]["create_at"] = "";
	$fieldLabelsmst_line[""]["create_by"] = "Create By";
	$fieldToolTipsmst_line[""]["create_by"] = "";
	$placeHoldersmst_line[""]["create_by"] = "";
	if (count($fieldToolTipsmst_line[""]))
		$tdatamst_line[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmst_line["English"] = array();
	$fieldToolTipsmst_line["English"] = array();
	$placeHoldersmst_line["English"] = array();
	$pageTitlesmst_line["English"] = array();
	$fieldLabelsmst_line["English"]["id"] = "Id";
	$fieldToolTipsmst_line["English"]["id"] = "";
	$placeHoldersmst_line["English"]["id"] = "";
	$fieldLabelsmst_line["English"]["line_category"] = "Line Category";
	$fieldToolTipsmst_line["English"]["line_category"] = "";
	$placeHoldersmst_line["English"]["line_category"] = "";
	$fieldLabelsmst_line["English"]["sort"] = "Sort";
	$fieldToolTipsmst_line["English"]["sort"] = "";
	$placeHoldersmst_line["English"]["sort"] = "";
	$fieldLabelsmst_line["English"]["update_at"] = "Update At";
	$fieldToolTipsmst_line["English"]["update_at"] = "";
	$placeHoldersmst_line["English"]["update_at"] = "";
	$fieldLabelsmst_line["English"]["update_by"] = "Update By";
	$fieldToolTipsmst_line["English"]["update_by"] = "";
	$placeHoldersmst_line["English"]["update_by"] = "";
	$fieldLabelsmst_line["English"]["create_at"] = "Create At";
	$fieldToolTipsmst_line["English"]["create_at"] = "";
	$placeHoldersmst_line["English"]["create_at"] = "";
	$fieldLabelsmst_line["English"]["create_by"] = "Create By";
	$fieldToolTipsmst_line["English"]["create_by"] = "";
	$placeHoldersmst_line["English"]["create_by"] = "";
	if (count($fieldToolTipsmst_line["English"]))
		$tdatamst_line[".isUseToolTips"] = true;
}


	$tdatamst_line[".NCSearch"] = true;



$tdatamst_line[".shortTableName"] = "mst_line";
$tdatamst_line[".nSecOptions"] = 0;
$tdatamst_line[".recsPerRowPrint"] = 1;
$tdatamst_line[".mainTableOwnerID"] = "";
$tdatamst_line[".moveNext"] = 1;
$tdatamst_line[".entityType"] = 0;

$tdatamst_line[".strOriginalTableName"] = "mst_line";

	



$tdatamst_line[".showAddInPopup"] = false;

$tdatamst_line[".showEditInPopup"] = false;

$tdatamst_line[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamst_line[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamst_line[".fieldsForRegister"] = array();

$tdatamst_line[".listAjax"] = false;

	$tdatamst_line[".audit"] = true;

	$tdatamst_line[".locking"] = false;






$tdatamst_line[".reorderRecordsByHeader"] = true;








$tdatamst_line[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamst_line[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamst_line[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamst_line[".searchSaving"] = false;
//

$tdatamst_line[".showSearchPanel"] = true;
		$tdatamst_line[".flexibleSearch"] = true;

$tdatamst_line[".isUseAjaxSuggest"] = true;

$tdatamst_line[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatamst_line[".ajaxCodeSnippetAdded"] = false;

$tdatamst_line[".buttonsAdded"] = false;

$tdatamst_line[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamst_line[".isUseTimeForSearch"] = false;





$tdatamst_line[".allSearchFields"] = array();
$tdatamst_line[".filterFields"] = array();
$tdatamst_line[".requiredSearchFields"] = array();



$tdatamst_line[".googleLikeFields"] = array();
$tdatamst_line[".googleLikeFields"][] = "id";
$tdatamst_line[".googleLikeFields"][] = "line_category";
$tdatamst_line[".googleLikeFields"][] = "sort";
$tdatamst_line[".googleLikeFields"][] = "update_at";
$tdatamst_line[".googleLikeFields"][] = "update_by";
$tdatamst_line[".googleLikeFields"][] = "create_at";
$tdatamst_line[".googleLikeFields"][] = "create_by";



$tdatamst_line[".tableType"] = "list";

$tdatamst_line[".printerPageOrientation"] = 0;
$tdatamst_line[".nPrinterPageScale"] = 100;

$tdatamst_line[".nPrinterSplitRecords"] = 40;

$tdatamst_line[".nPrinterPDFSplitRecords"] = 40;



$tdatamst_line[".geocodingEnabled"] = false;





$tdatamst_line[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamst_line[".pageSize"] = 20;

$tdatamst_line[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamst_line[".strOrderBy"] = $tstrOrderBy;

$tdatamst_line[".orderindexes"] = array();

$tdatamst_line[".sqlHead"] = "SELECT id,  	line_category,  	sort,  	update_at,  	update_by,  	create_at,  	create_by";
$tdatamst_line[".sqlFrom"] = "FROM mst_line";
$tdatamst_line[".sqlWhereExpr"] = "";
$tdatamst_line[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamst_line[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamst_line[".arrGroupsPerPage"] = $arrGPP;

$tdatamst_line[".highlightSearchResults"] = true;

$tableKeysmst_line = array();
$tableKeysmst_line[] = "id";
$tdatamst_line[".Keys"] = $tableKeysmst_line;

$tdatamst_line[".listFields"] = array();

$tdatamst_line[".hideMobileList"] = array();


$tdatamst_line[".viewFields"] = array();

$tdatamst_line[".addFields"] = array();

$tdatamst_line[".masterListFields"] = array();
$tdatamst_line[".masterListFields"][] = "id";
$tdatamst_line[".masterListFields"][] = "line_category";
$tdatamst_line[".masterListFields"][] = "sort";
$tdatamst_line[".masterListFields"][] = "update_at";
$tdatamst_line[".masterListFields"][] = "update_by";
$tdatamst_line[".masterListFields"][] = "create_at";
$tdatamst_line[".masterListFields"][] = "create_by";

$tdatamst_line[".inlineAddFields"] = array();

$tdatamst_line[".editFields"] = array();

$tdatamst_line[".inlineEditFields"] = array();

$tdatamst_line[".updateSelectedFields"] = array();


$tdatamst_line[".exportFields"] = array();

$tdatamst_line[".importFields"] = array();

$tdatamst_line[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "mst_line";
	$fdata["Label"] = GetFieldLabel("mst_line","id");
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








	$tdatamst_line["id"] = $fdata;
//	line_category
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "line_category";
	$fdata["GoodName"] = "line_category";
	$fdata["ownerTable"] = "mst_line";
	$fdata["Label"] = GetFieldLabel("mst_line","line_category");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "line_category";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "line_category";

	
	
			
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








	$tdatamst_line["line_category"] = $fdata;
//	sort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sort";
	$fdata["GoodName"] = "sort";
	$fdata["ownerTable"] = "mst_line";
	$fdata["Label"] = GetFieldLabel("mst_line","sort");
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








	$tdatamst_line["sort"] = $fdata;
//	update_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "update_at";
	$fdata["GoodName"] = "update_at";
	$fdata["ownerTable"] = "mst_line";
	$fdata["Label"] = GetFieldLabel("mst_line","update_at");
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








	$tdatamst_line["update_at"] = $fdata;
//	update_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "update_by";
	$fdata["GoodName"] = "update_by";
	$fdata["ownerTable"] = "mst_line";
	$fdata["Label"] = GetFieldLabel("mst_line","update_by");
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








	$tdatamst_line["update_by"] = $fdata;
//	create_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "create_at";
	$fdata["GoodName"] = "create_at";
	$fdata["ownerTable"] = "mst_line";
	$fdata["Label"] = GetFieldLabel("mst_line","create_at");
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








	$tdatamst_line["create_at"] = $fdata;
//	create_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "create_by";
	$fdata["GoodName"] = "create_by";
	$fdata["ownerTable"] = "mst_line";
	$fdata["Label"] = GetFieldLabel("mst_line","create_by");
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








	$tdatamst_line["create_by"] = $fdata;


$tables_data["mst_line"]=&$tdatamst_line;
$field_labels["mst_line"] = &$fieldLabelsmst_line;
$fieldToolTips["mst_line"] = &$fieldToolTipsmst_line;
$placeHolders["mst_line"] = &$placeHoldersmst_line;
$page_titles["mst_line"] = &$pageTitlesmst_line;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mst_line"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mst_line"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mst_line()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	line_category,  	sort,  	update_at,  	update_by,  	create_at,  	create_by";
$proto0["m_strFrom"] = "FROM mst_line";
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
	"m_strTable" => "mst_line",
	"m_srcTableName" => "mst_line"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "mst_line";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "line_category",
	"m_strTable" => "mst_line",
	"m_srcTableName" => "mst_line"
));

$proto8["m_sql"] = "line_category";
$proto8["m_srcTableName"] = "mst_line";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "sort",
	"m_strTable" => "mst_line",
	"m_srcTableName" => "mst_line"
));

$proto10["m_sql"] = "sort";
$proto10["m_srcTableName"] = "mst_line";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "update_at",
	"m_strTable" => "mst_line",
	"m_srcTableName" => "mst_line"
));

$proto12["m_sql"] = "update_at";
$proto12["m_srcTableName"] = "mst_line";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "update_by",
	"m_strTable" => "mst_line",
	"m_srcTableName" => "mst_line"
));

$proto14["m_sql"] = "update_by";
$proto14["m_srcTableName"] = "mst_line";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "create_at",
	"m_strTable" => "mst_line",
	"m_srcTableName" => "mst_line"
));

$proto16["m_sql"] = "create_at";
$proto16["m_srcTableName"] = "mst_line";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "create_by",
	"m_strTable" => "mst_line",
	"m_srcTableName" => "mst_line"
));

$proto18["m_sql"] = "create_by";
$proto18["m_srcTableName"] = "mst_line";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "mst_line";
$proto21["m_srcTableName"] = "mst_line";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "id";
$proto21["m_columns"][] = "line_category";
$proto21["m_columns"][] = "sort";
$proto21["m_columns"][] = "update_at";
$proto21["m_columns"][] = "update_by";
$proto21["m_columns"][] = "create_at";
$proto21["m_columns"][] = "create_by";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "mst_line";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "mst_line";
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
$proto0["m_srcTableName"]="mst_line";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mst_line = createSqlQuery_mst_line();


	
		;

							

$tdatamst_line[".sqlquery"] = $queryData_mst_line;

$tableEvents["mst_line"] = new eventsBase;
$tdatamst_line[".hasEvents"] = false;

?>