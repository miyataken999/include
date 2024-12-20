<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamst_accessories = array();
	$tdatamst_accessories[".truncateText"] = true;
	$tdatamst_accessories[".NumberOfChars"] = 80;
	$tdatamst_accessories[".ShortName"] = "mst_accessories";
	$tdatamst_accessories[".OwnerID"] = "";
	$tdatamst_accessories[".OriginalTable"] = "mst_accessories";

//	field labels
$fieldLabelsmst_accessories = array();
$fieldToolTipsmst_accessories = array();
$pageTitlesmst_accessories = array();
$placeHoldersmst_accessories = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmst_accessories["Japanese"] = array();
	$fieldToolTipsmst_accessories["Japanese"] = array();
	$placeHoldersmst_accessories["Japanese"] = array();
	$pageTitlesmst_accessories["Japanese"] = array();
	$fieldLabelsmst_accessories["Japanese"]["id"] = "Id";
	$fieldToolTipsmst_accessories["Japanese"]["id"] = "";
	$placeHoldersmst_accessories["Japanese"]["id"] = "";
	$fieldLabelsmst_accessories["Japanese"]["val"] = "Val";
	$fieldToolTipsmst_accessories["Japanese"]["val"] = "";
	$placeHoldersmst_accessories["Japanese"]["val"] = "";
	$fieldLabelsmst_accessories["Japanese"]["sort"] = "Sort";
	$fieldToolTipsmst_accessories["Japanese"]["sort"] = "";
	$placeHoldersmst_accessories["Japanese"]["sort"] = "";
	$fieldLabelsmst_accessories["Japanese"]["update_at"] = "Update At";
	$fieldToolTipsmst_accessories["Japanese"]["update_at"] = "";
	$placeHoldersmst_accessories["Japanese"]["update_at"] = "";
	$fieldLabelsmst_accessories["Japanese"]["update_by"] = "Update By";
	$fieldToolTipsmst_accessories["Japanese"]["update_by"] = "";
	$placeHoldersmst_accessories["Japanese"]["update_by"] = "";
	$fieldLabelsmst_accessories["Japanese"]["create_at"] = "Create At";
	$fieldToolTipsmst_accessories["Japanese"]["create_at"] = "";
	$placeHoldersmst_accessories["Japanese"]["create_at"] = "";
	$fieldLabelsmst_accessories["Japanese"]["create_by"] = "Create By";
	$fieldToolTipsmst_accessories["Japanese"]["create_by"] = "";
	$placeHoldersmst_accessories["Japanese"]["create_by"] = "";
	if (count($fieldToolTipsmst_accessories["Japanese"]))
		$tdatamst_accessories[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmst_accessories[""] = array();
	$fieldToolTipsmst_accessories[""] = array();
	$placeHoldersmst_accessories[""] = array();
	$pageTitlesmst_accessories[""] = array();
	$fieldLabelsmst_accessories[""]["id"] = "Id";
	$fieldToolTipsmst_accessories[""]["id"] = "";
	$placeHoldersmst_accessories[""]["id"] = "";
	$fieldLabelsmst_accessories[""]["val"] = "Val";
	$fieldToolTipsmst_accessories[""]["val"] = "";
	$placeHoldersmst_accessories[""]["val"] = "";
	$fieldLabelsmst_accessories[""]["sort"] = "Sort";
	$fieldToolTipsmst_accessories[""]["sort"] = "";
	$placeHoldersmst_accessories[""]["sort"] = "";
	$fieldLabelsmst_accessories[""]["update_at"] = "Update At";
	$fieldToolTipsmst_accessories[""]["update_at"] = "";
	$placeHoldersmst_accessories[""]["update_at"] = "";
	$fieldLabelsmst_accessories[""]["update_by"] = "Update By";
	$fieldToolTipsmst_accessories[""]["update_by"] = "";
	$placeHoldersmst_accessories[""]["update_by"] = "";
	$fieldLabelsmst_accessories[""]["create_at"] = "Create At";
	$fieldToolTipsmst_accessories[""]["create_at"] = "";
	$placeHoldersmst_accessories[""]["create_at"] = "";
	$fieldLabelsmst_accessories[""]["create_by"] = "Create By";
	$fieldToolTipsmst_accessories[""]["create_by"] = "";
	$placeHoldersmst_accessories[""]["create_by"] = "";
	if (count($fieldToolTipsmst_accessories[""]))
		$tdatamst_accessories[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmst_accessories["English"] = array();
	$fieldToolTipsmst_accessories["English"] = array();
	$placeHoldersmst_accessories["English"] = array();
	$pageTitlesmst_accessories["English"] = array();
	$fieldLabelsmst_accessories["English"]["id"] = "Id";
	$fieldToolTipsmst_accessories["English"]["id"] = "";
	$placeHoldersmst_accessories["English"]["id"] = "";
	$fieldLabelsmst_accessories["English"]["val"] = "Val";
	$fieldToolTipsmst_accessories["English"]["val"] = "";
	$placeHoldersmst_accessories["English"]["val"] = "";
	$fieldLabelsmst_accessories["English"]["sort"] = "Sort";
	$fieldToolTipsmst_accessories["English"]["sort"] = "";
	$placeHoldersmst_accessories["English"]["sort"] = "";
	$fieldLabelsmst_accessories["English"]["update_at"] = "Update At";
	$fieldToolTipsmst_accessories["English"]["update_at"] = "";
	$placeHoldersmst_accessories["English"]["update_at"] = "";
	$fieldLabelsmst_accessories["English"]["update_by"] = "Update By";
	$fieldToolTipsmst_accessories["English"]["update_by"] = "";
	$placeHoldersmst_accessories["English"]["update_by"] = "";
	$fieldLabelsmst_accessories["English"]["create_at"] = "Create At";
	$fieldToolTipsmst_accessories["English"]["create_at"] = "";
	$placeHoldersmst_accessories["English"]["create_at"] = "";
	$fieldLabelsmst_accessories["English"]["create_by"] = "Create By";
	$fieldToolTipsmst_accessories["English"]["create_by"] = "";
	$placeHoldersmst_accessories["English"]["create_by"] = "";
	if (count($fieldToolTipsmst_accessories["English"]))
		$tdatamst_accessories[".isUseToolTips"] = true;
}


	$tdatamst_accessories[".NCSearch"] = true;



$tdatamst_accessories[".shortTableName"] = "mst_accessories";
$tdatamst_accessories[".nSecOptions"] = 0;
$tdatamst_accessories[".recsPerRowPrint"] = 1;
$tdatamst_accessories[".mainTableOwnerID"] = "";
$tdatamst_accessories[".moveNext"] = 1;
$tdatamst_accessories[".entityType"] = 0;

$tdatamst_accessories[".strOriginalTableName"] = "mst_accessories";

	



$tdatamst_accessories[".showAddInPopup"] = false;

$tdatamst_accessories[".showEditInPopup"] = false;

$tdatamst_accessories[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamst_accessories[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamst_accessories[".fieldsForRegister"] = array();

$tdatamst_accessories[".listAjax"] = false;

	$tdatamst_accessories[".audit"] = true;

	$tdatamst_accessories[".locking"] = false;






$tdatamst_accessories[".reorderRecordsByHeader"] = true;








$tdatamst_accessories[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamst_accessories[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamst_accessories[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamst_accessories[".searchSaving"] = false;
//

$tdatamst_accessories[".showSearchPanel"] = true;
		$tdatamst_accessories[".flexibleSearch"] = true;

$tdatamst_accessories[".isUseAjaxSuggest"] = true;

$tdatamst_accessories[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatamst_accessories[".ajaxCodeSnippetAdded"] = false;

$tdatamst_accessories[".buttonsAdded"] = false;

$tdatamst_accessories[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamst_accessories[".isUseTimeForSearch"] = false;





$tdatamst_accessories[".allSearchFields"] = array();
$tdatamst_accessories[".filterFields"] = array();
$tdatamst_accessories[".requiredSearchFields"] = array();



$tdatamst_accessories[".googleLikeFields"] = array();
$tdatamst_accessories[".googleLikeFields"][] = "id";
$tdatamst_accessories[".googleLikeFields"][] = "val";
$tdatamst_accessories[".googleLikeFields"][] = "sort";
$tdatamst_accessories[".googleLikeFields"][] = "update_at";
$tdatamst_accessories[".googleLikeFields"][] = "update_by";
$tdatamst_accessories[".googleLikeFields"][] = "create_at";
$tdatamst_accessories[".googleLikeFields"][] = "create_by";



$tdatamst_accessories[".tableType"] = "list";

$tdatamst_accessories[".printerPageOrientation"] = 0;
$tdatamst_accessories[".nPrinterPageScale"] = 100;

$tdatamst_accessories[".nPrinterSplitRecords"] = 40;

$tdatamst_accessories[".nPrinterPDFSplitRecords"] = 40;



$tdatamst_accessories[".geocodingEnabled"] = false;





$tdatamst_accessories[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamst_accessories[".pageSize"] = 20;

$tdatamst_accessories[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamst_accessories[".strOrderBy"] = $tstrOrderBy;

$tdatamst_accessories[".orderindexes"] = array();

$tdatamst_accessories[".sqlHead"] = "SELECT id,  	val,  	sort,  	update_at,  	update_by,  	create_at,  	create_by";
$tdatamst_accessories[".sqlFrom"] = "FROM mst_accessories";
$tdatamst_accessories[".sqlWhereExpr"] = "";
$tdatamst_accessories[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamst_accessories[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamst_accessories[".arrGroupsPerPage"] = $arrGPP;

$tdatamst_accessories[".highlightSearchResults"] = true;

$tableKeysmst_accessories = array();
$tableKeysmst_accessories[] = "id";
$tdatamst_accessories[".Keys"] = $tableKeysmst_accessories;

$tdatamst_accessories[".listFields"] = array();

$tdatamst_accessories[".hideMobileList"] = array();


$tdatamst_accessories[".viewFields"] = array();

$tdatamst_accessories[".addFields"] = array();

$tdatamst_accessories[".masterListFields"] = array();
$tdatamst_accessories[".masterListFields"][] = "id";
$tdatamst_accessories[".masterListFields"][] = "val";
$tdatamst_accessories[".masterListFields"][] = "sort";
$tdatamst_accessories[".masterListFields"][] = "update_at";
$tdatamst_accessories[".masterListFields"][] = "update_by";
$tdatamst_accessories[".masterListFields"][] = "create_at";
$tdatamst_accessories[".masterListFields"][] = "create_by";

$tdatamst_accessories[".inlineAddFields"] = array();

$tdatamst_accessories[".editFields"] = array();

$tdatamst_accessories[".inlineEditFields"] = array();

$tdatamst_accessories[".updateSelectedFields"] = array();


$tdatamst_accessories[".exportFields"] = array();

$tdatamst_accessories[".importFields"] = array();

$tdatamst_accessories[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "mst_accessories";
	$fdata["Label"] = GetFieldLabel("mst_accessories","id");
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








	$tdatamst_accessories["id"] = $fdata;
//	val
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "val";
	$fdata["GoodName"] = "val";
	$fdata["ownerTable"] = "mst_accessories";
	$fdata["Label"] = GetFieldLabel("mst_accessories","val");
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








	$tdatamst_accessories["val"] = $fdata;
//	sort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sort";
	$fdata["GoodName"] = "sort";
	$fdata["ownerTable"] = "mst_accessories";
	$fdata["Label"] = GetFieldLabel("mst_accessories","sort");
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








	$tdatamst_accessories["sort"] = $fdata;
//	update_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "update_at";
	$fdata["GoodName"] = "update_at";
	$fdata["ownerTable"] = "mst_accessories";
	$fdata["Label"] = GetFieldLabel("mst_accessories","update_at");
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








	$tdatamst_accessories["update_at"] = $fdata;
//	update_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "update_by";
	$fdata["GoodName"] = "update_by";
	$fdata["ownerTable"] = "mst_accessories";
	$fdata["Label"] = GetFieldLabel("mst_accessories","update_by");
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








	$tdatamst_accessories["update_by"] = $fdata;
//	create_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "create_at";
	$fdata["GoodName"] = "create_at";
	$fdata["ownerTable"] = "mst_accessories";
	$fdata["Label"] = GetFieldLabel("mst_accessories","create_at");
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








	$tdatamst_accessories["create_at"] = $fdata;
//	create_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "create_by";
	$fdata["GoodName"] = "create_by";
	$fdata["ownerTable"] = "mst_accessories";
	$fdata["Label"] = GetFieldLabel("mst_accessories","create_by");
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








	$tdatamst_accessories["create_by"] = $fdata;


$tables_data["mst_accessories"]=&$tdatamst_accessories;
$field_labels["mst_accessories"] = &$fieldLabelsmst_accessories;
$fieldToolTips["mst_accessories"] = &$fieldToolTipsmst_accessories;
$placeHolders["mst_accessories"] = &$placeHoldersmst_accessories;
$page_titles["mst_accessories"] = &$pageTitlesmst_accessories;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mst_accessories"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mst_accessories"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mst_accessories()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	val,  	sort,  	update_at,  	update_by,  	create_at,  	create_by";
$proto0["m_strFrom"] = "FROM mst_accessories";
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
	"m_strTable" => "mst_accessories",
	"m_srcTableName" => "mst_accessories"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "mst_accessories";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "val",
	"m_strTable" => "mst_accessories",
	"m_srcTableName" => "mst_accessories"
));

$proto8["m_sql"] = "val";
$proto8["m_srcTableName"] = "mst_accessories";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "sort",
	"m_strTable" => "mst_accessories",
	"m_srcTableName" => "mst_accessories"
));

$proto10["m_sql"] = "sort";
$proto10["m_srcTableName"] = "mst_accessories";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "update_at",
	"m_strTable" => "mst_accessories",
	"m_srcTableName" => "mst_accessories"
));

$proto12["m_sql"] = "update_at";
$proto12["m_srcTableName"] = "mst_accessories";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "update_by",
	"m_strTable" => "mst_accessories",
	"m_srcTableName" => "mst_accessories"
));

$proto14["m_sql"] = "update_by";
$proto14["m_srcTableName"] = "mst_accessories";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "create_at",
	"m_strTable" => "mst_accessories",
	"m_srcTableName" => "mst_accessories"
));

$proto16["m_sql"] = "create_at";
$proto16["m_srcTableName"] = "mst_accessories";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "create_by",
	"m_strTable" => "mst_accessories",
	"m_srcTableName" => "mst_accessories"
));

$proto18["m_sql"] = "create_by";
$proto18["m_srcTableName"] = "mst_accessories";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "mst_accessories";
$proto21["m_srcTableName"] = "mst_accessories";
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
$proto20["m_sql"] = "mst_accessories";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "mst_accessories";
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
$proto0["m_srcTableName"]="mst_accessories";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mst_accessories = createSqlQuery_mst_accessories();


	
		;

							

$tdatamst_accessories[".sqlquery"] = $queryData_mst_accessories;

$tableEvents["mst_accessories"] = new eventsBase;
$tdatamst_accessories[".hasEvents"] = false;

?>