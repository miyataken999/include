<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamst_area = array();
	$tdatamst_area[".truncateText"] = true;
	$tdatamst_area[".NumberOfChars"] = 80;
	$tdatamst_area[".ShortName"] = "mst_area";
	$tdatamst_area[".OwnerID"] = "";
	$tdatamst_area[".OriginalTable"] = "mst_area";

//	field labels
$fieldLabelsmst_area = array();
$fieldToolTipsmst_area = array();
$pageTitlesmst_area = array();
$placeHoldersmst_area = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmst_area["Japanese"] = array();
	$fieldToolTipsmst_area["Japanese"] = array();
	$placeHoldersmst_area["Japanese"] = array();
	$pageTitlesmst_area["Japanese"] = array();
	$fieldLabelsmst_area["Japanese"]["id"] = "Id";
	$fieldToolTipsmst_area["Japanese"]["id"] = "";
	$placeHoldersmst_area["Japanese"]["id"] = "";
	$fieldLabelsmst_area["Japanese"]["name"] = "Name";
	$fieldToolTipsmst_area["Japanese"]["name"] = "";
	$placeHoldersmst_area["Japanese"]["name"] = "";
	$fieldLabelsmst_area["Japanese"]["sort"] = "Sort";
	$fieldToolTipsmst_area["Japanese"]["sort"] = "";
	$placeHoldersmst_area["Japanese"]["sort"] = "";
	$fieldLabelsmst_area["Japanese"]["update_by"] = "Update By";
	$fieldToolTipsmst_area["Japanese"]["update_by"] = "";
	$placeHoldersmst_area["Japanese"]["update_by"] = "";
	$fieldLabelsmst_area["Japanese"]["update_at"] = "Update At";
	$fieldToolTipsmst_area["Japanese"]["update_at"] = "";
	$placeHoldersmst_area["Japanese"]["update_at"] = "";
	$fieldLabelsmst_area["Japanese"]["create_by"] = "Create By";
	$fieldToolTipsmst_area["Japanese"]["create_by"] = "";
	$placeHoldersmst_area["Japanese"]["create_by"] = "";
	$fieldLabelsmst_area["Japanese"]["create_at"] = "Create At";
	$fieldToolTipsmst_area["Japanese"]["create_at"] = "";
	$placeHoldersmst_area["Japanese"]["create_at"] = "";
	if (count($fieldToolTipsmst_area["Japanese"]))
		$tdatamst_area[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmst_area[""] = array();
	$fieldToolTipsmst_area[""] = array();
	$placeHoldersmst_area[""] = array();
	$pageTitlesmst_area[""] = array();
	$fieldLabelsmst_area[""]["id"] = "Id";
	$fieldToolTipsmst_area[""]["id"] = "";
	$placeHoldersmst_area[""]["id"] = "";
	$fieldLabelsmst_area[""]["name"] = "Name";
	$fieldToolTipsmst_area[""]["name"] = "";
	$placeHoldersmst_area[""]["name"] = "";
	$fieldLabelsmst_area[""]["sort"] = "Sort";
	$fieldToolTipsmst_area[""]["sort"] = "";
	$placeHoldersmst_area[""]["sort"] = "";
	$fieldLabelsmst_area[""]["update_by"] = "Update By";
	$fieldToolTipsmst_area[""]["update_by"] = "";
	$placeHoldersmst_area[""]["update_by"] = "";
	$fieldLabelsmst_area[""]["update_at"] = "Update At";
	$fieldToolTipsmst_area[""]["update_at"] = "";
	$placeHoldersmst_area[""]["update_at"] = "";
	$fieldLabelsmst_area[""]["create_by"] = "Create By";
	$fieldToolTipsmst_area[""]["create_by"] = "";
	$placeHoldersmst_area[""]["create_by"] = "";
	$fieldLabelsmst_area[""]["create_at"] = "Create At";
	$fieldToolTipsmst_area[""]["create_at"] = "";
	$placeHoldersmst_area[""]["create_at"] = "";
	if (count($fieldToolTipsmst_area[""]))
		$tdatamst_area[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmst_area["English"] = array();
	$fieldToolTipsmst_area["English"] = array();
	$placeHoldersmst_area["English"] = array();
	$pageTitlesmst_area["English"] = array();
	$fieldLabelsmst_area["English"]["id"] = "Id";
	$fieldToolTipsmst_area["English"]["id"] = "";
	$placeHoldersmst_area["English"]["id"] = "";
	$fieldLabelsmst_area["English"]["name"] = "Name";
	$fieldToolTipsmst_area["English"]["name"] = "";
	$placeHoldersmst_area["English"]["name"] = "";
	$fieldLabelsmst_area["English"]["sort"] = "Sort";
	$fieldToolTipsmst_area["English"]["sort"] = "";
	$placeHoldersmst_area["English"]["sort"] = "";
	$fieldLabelsmst_area["English"]["update_by"] = "Update By";
	$fieldToolTipsmst_area["English"]["update_by"] = "";
	$placeHoldersmst_area["English"]["update_by"] = "";
	$fieldLabelsmst_area["English"]["update_at"] = "Update At";
	$fieldToolTipsmst_area["English"]["update_at"] = "";
	$placeHoldersmst_area["English"]["update_at"] = "";
	$fieldLabelsmst_area["English"]["create_by"] = "Create By";
	$fieldToolTipsmst_area["English"]["create_by"] = "";
	$placeHoldersmst_area["English"]["create_by"] = "";
	$fieldLabelsmst_area["English"]["create_at"] = "Create At";
	$fieldToolTipsmst_area["English"]["create_at"] = "";
	$placeHoldersmst_area["English"]["create_at"] = "";
	if (count($fieldToolTipsmst_area["English"]))
		$tdatamst_area[".isUseToolTips"] = true;
}


	$tdatamst_area[".NCSearch"] = true;



$tdatamst_area[".shortTableName"] = "mst_area";
$tdatamst_area[".nSecOptions"] = 0;
$tdatamst_area[".recsPerRowPrint"] = 1;
$tdatamst_area[".mainTableOwnerID"] = "";
$tdatamst_area[".moveNext"] = 1;
$tdatamst_area[".entityType"] = 0;

$tdatamst_area[".strOriginalTableName"] = "mst_area";

	



$tdatamst_area[".showAddInPopup"] = false;

$tdatamst_area[".showEditInPopup"] = false;

$tdatamst_area[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamst_area[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamst_area[".fieldsForRegister"] = array();

$tdatamst_area[".listAjax"] = false;

	$tdatamst_area[".audit"] = false;

	$tdatamst_area[".locking"] = false;






$tdatamst_area[".reorderRecordsByHeader"] = true;








$tdatamst_area[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamst_area[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamst_area[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamst_area[".searchSaving"] = false;
//

$tdatamst_area[".showSearchPanel"] = true;
		$tdatamst_area[".flexibleSearch"] = true;

$tdatamst_area[".isUseAjaxSuggest"] = true;

$tdatamst_area[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatamst_area[".ajaxCodeSnippetAdded"] = false;

$tdatamst_area[".buttonsAdded"] = false;

$tdatamst_area[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamst_area[".isUseTimeForSearch"] = false;





$tdatamst_area[".allSearchFields"] = array();
$tdatamst_area[".filterFields"] = array();
$tdatamst_area[".requiredSearchFields"] = array();



$tdatamst_area[".googleLikeFields"] = array();
$tdatamst_area[".googleLikeFields"][] = "id";
$tdatamst_area[".googleLikeFields"][] = "name";
$tdatamst_area[".googleLikeFields"][] = "sort";
$tdatamst_area[".googleLikeFields"][] = "update_by";
$tdatamst_area[".googleLikeFields"][] = "update_at";
$tdatamst_area[".googleLikeFields"][] = "create_by";
$tdatamst_area[".googleLikeFields"][] = "create_at";



$tdatamst_area[".tableType"] = "list";

$tdatamst_area[".printerPageOrientation"] = 0;
$tdatamst_area[".nPrinterPageScale"] = 100;

$tdatamst_area[".nPrinterSplitRecords"] = 40;

$tdatamst_area[".nPrinterPDFSplitRecords"] = 40;



$tdatamst_area[".geocodingEnabled"] = false;





$tdatamst_area[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamst_area[".pageSize"] = 20;

$tdatamst_area[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamst_area[".strOrderBy"] = $tstrOrderBy;

$tdatamst_area[".orderindexes"] = array();

$tdatamst_area[".sqlHead"] = "SELECT `id`,  	`name`,  	`sort`,  	`update_by`,  	`update_at`,  	`create_by`,  	`create_at`";
$tdatamst_area[".sqlFrom"] = "FROM `mst_area`";
$tdatamst_area[".sqlWhereExpr"] = "";
$tdatamst_area[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamst_area[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamst_area[".arrGroupsPerPage"] = $arrGPP;

$tdatamst_area[".highlightSearchResults"] = true;

$tableKeysmst_area = array();
$tableKeysmst_area[] = "id";
$tdatamst_area[".Keys"] = $tableKeysmst_area;

$tdatamst_area[".listFields"] = array();

$tdatamst_area[".hideMobileList"] = array();


$tdatamst_area[".viewFields"] = array();

$tdatamst_area[".addFields"] = array();

$tdatamst_area[".masterListFields"] = array();
$tdatamst_area[".masterListFields"][] = "id";
$tdatamst_area[".masterListFields"][] = "name";
$tdatamst_area[".masterListFields"][] = "sort";
$tdatamst_area[".masterListFields"][] = "update_by";
$tdatamst_area[".masterListFields"][] = "update_at";
$tdatamst_area[".masterListFields"][] = "create_by";
$tdatamst_area[".masterListFields"][] = "create_at";

$tdatamst_area[".inlineAddFields"] = array();

$tdatamst_area[".editFields"] = array();

$tdatamst_area[".inlineEditFields"] = array();

$tdatamst_area[".updateSelectedFields"] = array();


$tdatamst_area[".exportFields"] = array();

$tdatamst_area[".importFields"] = array();

$tdatamst_area[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "mst_area";
	$fdata["Label"] = GetFieldLabel("mst_area","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`id`";

	
	
			
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








	$tdatamst_area["id"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "mst_area";
	$fdata["Label"] = GetFieldLabel("mst_area","name");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`name`";

	
	
			
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








	$tdatamst_area["name"] = $fdata;
//	sort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sort";
	$fdata["GoodName"] = "sort";
	$fdata["ownerTable"] = "mst_area";
	$fdata["Label"] = GetFieldLabel("mst_area","sort");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "sort";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`sort`";

	
	
			
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








	$tdatamst_area["sort"] = $fdata;
//	update_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "update_by";
	$fdata["GoodName"] = "update_by";
	$fdata["ownerTable"] = "mst_area";
	$fdata["Label"] = GetFieldLabel("mst_area","update_by");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "update_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`update_by`";

	
	
			
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








	$tdatamst_area["update_by"] = $fdata;
//	update_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "update_at";
	$fdata["GoodName"] = "update_at";
	$fdata["ownerTable"] = "mst_area";
	$fdata["Label"] = GetFieldLabel("mst_area","update_at");
	$fdata["FieldType"] = 135;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "update_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`update_at`";

	
	
			
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








	$tdatamst_area["update_at"] = $fdata;
//	create_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "create_by";
	$fdata["GoodName"] = "create_by";
	$fdata["ownerTable"] = "mst_area";
	$fdata["Label"] = GetFieldLabel("mst_area","create_by");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "create_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`create_by`";

	
	
			
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








	$tdatamst_area["create_by"] = $fdata;
//	create_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "create_at";
	$fdata["GoodName"] = "create_at";
	$fdata["ownerTable"] = "mst_area";
	$fdata["Label"] = GetFieldLabel("mst_area","create_at");
	$fdata["FieldType"] = 135;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "create_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`create_at`";

	
	
			
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








	$tdatamst_area["create_at"] = $fdata;


$tables_data["mst_area"]=&$tdatamst_area;
$field_labels["mst_area"] = &$fieldLabelsmst_area;
$fieldToolTips["mst_area"] = &$fieldToolTipsmst_area;
$placeHolders["mst_area"] = &$placeHoldersmst_area;
$page_titles["mst_area"] = &$pageTitlesmst_area;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mst_area"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mst_area"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mst_area()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  	`name`,  	`sort`,  	`update_by`,  	`update_at`,  	`create_by`,  	`create_at`";
$proto0["m_strFrom"] = "FROM `mst_area`";
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
	"m_strTable" => "mst_area",
	"m_srcTableName" => "mst_area"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "mst_area";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "mst_area",
	"m_srcTableName" => "mst_area"
));

$proto8["m_sql"] = "`name`";
$proto8["m_srcTableName"] = "mst_area";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "sort",
	"m_strTable" => "mst_area",
	"m_srcTableName" => "mst_area"
));

$proto10["m_sql"] = "`sort`";
$proto10["m_srcTableName"] = "mst_area";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "update_by",
	"m_strTable" => "mst_area",
	"m_srcTableName" => "mst_area"
));

$proto12["m_sql"] = "`update_by`";
$proto12["m_srcTableName"] = "mst_area";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "update_at",
	"m_strTable" => "mst_area",
	"m_srcTableName" => "mst_area"
));

$proto14["m_sql"] = "`update_at`";
$proto14["m_srcTableName"] = "mst_area";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "create_by",
	"m_strTable" => "mst_area",
	"m_srcTableName" => "mst_area"
));

$proto16["m_sql"] = "`create_by`";
$proto16["m_srcTableName"] = "mst_area";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "create_at",
	"m_strTable" => "mst_area",
	"m_srcTableName" => "mst_area"
));

$proto18["m_sql"] = "`create_at`";
$proto18["m_srcTableName"] = "mst_area";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "mst_area";
$proto21["m_srcTableName"] = "mst_area";
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
$proto20["m_sql"] = "`mst_area`";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "mst_area";
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
$proto0["m_srcTableName"]="mst_area";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mst_area = createSqlQuery_mst_area();


	
		;

							

$tdatamst_area[".sqlquery"] = $queryData_mst_area;

$tableEvents["mst_area"] = new eventsBase;
$tdatamst_area[".hasEvents"] = false;

?>