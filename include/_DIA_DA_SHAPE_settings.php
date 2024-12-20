<?php
require_once(getabspath("classes/cipherer.php"));




$tdata_DIA_DA_SHAPE = array();
	$tdata_DIA_DA_SHAPE[".truncateText"] = true;
	$tdata_DIA_DA_SHAPE[".NumberOfChars"] = 80;
	$tdata_DIA_DA_SHAPE[".ShortName"] = "_DIA_DA_SHAPE";
	$tdata_DIA_DA_SHAPE[".OwnerID"] = "";
	$tdata_DIA_DA_SHAPE[".OriginalTable"] = "_DIA_DA_SHAPE";

//	field labels
$fieldLabels_DIA_DA_SHAPE = array();
$fieldToolTips_DIA_DA_SHAPE = array();
$pageTitles_DIA_DA_SHAPE = array();
$placeHolders_DIA_DA_SHAPE = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabels_DIA_DA_SHAPE["Japanese"] = array();
	$fieldToolTips_DIA_DA_SHAPE["Japanese"] = array();
	$placeHolders_DIA_DA_SHAPE["Japanese"] = array();
	$pageTitles_DIA_DA_SHAPE["Japanese"] = array();
	$fieldLabels_DIA_DA_SHAPE["Japanese"]["id"] = "Id";
	$fieldToolTips_DIA_DA_SHAPE["Japanese"]["id"] = "";
	$placeHolders_DIA_DA_SHAPE["Japanese"]["id"] = "";
	$fieldLabels_DIA_DA_SHAPE["Japanese"]["name"] = "Name";
	$fieldToolTips_DIA_DA_SHAPE["Japanese"]["name"] = "";
	$placeHolders_DIA_DA_SHAPE["Japanese"]["name"] = "";
	$fieldLabels_DIA_DA_SHAPE["Japanese"]["sort"] = "Sort";
	$fieldToolTips_DIA_DA_SHAPE["Japanese"]["sort"] = "";
	$placeHolders_DIA_DA_SHAPE["Japanese"]["sort"] = "";
	$fieldLabels_DIA_DA_SHAPE["Japanese"]["parent"] = "Parent";
	$fieldToolTips_DIA_DA_SHAPE["Japanese"]["parent"] = "";
	$placeHolders_DIA_DA_SHAPE["Japanese"]["parent"] = "";
	if (count($fieldToolTips_DIA_DA_SHAPE["Japanese"]))
		$tdata_DIA_DA_SHAPE[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabels_DIA_DA_SHAPE[""] = array();
	$fieldToolTips_DIA_DA_SHAPE[""] = array();
	$placeHolders_DIA_DA_SHAPE[""] = array();
	$pageTitles_DIA_DA_SHAPE[""] = array();
	$fieldLabels_DIA_DA_SHAPE[""]["id"] = "Id";
	$fieldToolTips_DIA_DA_SHAPE[""]["id"] = "";
	$placeHolders_DIA_DA_SHAPE[""]["id"] = "";
	$fieldLabels_DIA_DA_SHAPE[""]["name"] = "Name";
	$fieldToolTips_DIA_DA_SHAPE[""]["name"] = "";
	$placeHolders_DIA_DA_SHAPE[""]["name"] = "";
	$fieldLabels_DIA_DA_SHAPE[""]["sort"] = "Sort";
	$fieldToolTips_DIA_DA_SHAPE[""]["sort"] = "";
	$placeHolders_DIA_DA_SHAPE[""]["sort"] = "";
	$fieldLabels_DIA_DA_SHAPE[""]["parent"] = "Parent";
	$fieldToolTips_DIA_DA_SHAPE[""]["parent"] = "";
	$placeHolders_DIA_DA_SHAPE[""]["parent"] = "";
	if (count($fieldToolTips_DIA_DA_SHAPE[""]))
		$tdata_DIA_DA_SHAPE[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabels_DIA_DA_SHAPE["English"] = array();
	$fieldToolTips_DIA_DA_SHAPE["English"] = array();
	$placeHolders_DIA_DA_SHAPE["English"] = array();
	$pageTitles_DIA_DA_SHAPE["English"] = array();
	$fieldLabels_DIA_DA_SHAPE["English"]["id"] = "Id";
	$fieldToolTips_DIA_DA_SHAPE["English"]["id"] = "";
	$placeHolders_DIA_DA_SHAPE["English"]["id"] = "";
	$fieldLabels_DIA_DA_SHAPE["English"]["name"] = "Name";
	$fieldToolTips_DIA_DA_SHAPE["English"]["name"] = "";
	$placeHolders_DIA_DA_SHAPE["English"]["name"] = "";
	$fieldLabels_DIA_DA_SHAPE["English"]["sort"] = "Sort";
	$fieldToolTips_DIA_DA_SHAPE["English"]["sort"] = "";
	$placeHolders_DIA_DA_SHAPE["English"]["sort"] = "";
	$fieldLabels_DIA_DA_SHAPE["English"]["parent"] = "Parent";
	$fieldToolTips_DIA_DA_SHAPE["English"]["parent"] = "";
	$placeHolders_DIA_DA_SHAPE["English"]["parent"] = "";
	if (count($fieldToolTips_DIA_DA_SHAPE["English"]))
		$tdata_DIA_DA_SHAPE[".isUseToolTips"] = true;
}


	$tdata_DIA_DA_SHAPE[".NCSearch"] = true;



$tdata_DIA_DA_SHAPE[".shortTableName"] = "_DIA_DA_SHAPE";
$tdata_DIA_DA_SHAPE[".nSecOptions"] = 0;
$tdata_DIA_DA_SHAPE[".recsPerRowPrint"] = 1;
$tdata_DIA_DA_SHAPE[".mainTableOwnerID"] = "";
$tdata_DIA_DA_SHAPE[".moveNext"] = 1;
$tdata_DIA_DA_SHAPE[".entityType"] = 0;

$tdata_DIA_DA_SHAPE[".strOriginalTableName"] = "_DIA_DA_SHAPE";

	



$tdata_DIA_DA_SHAPE[".showAddInPopup"] = false;

$tdata_DIA_DA_SHAPE[".showEditInPopup"] = false;

$tdata_DIA_DA_SHAPE[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdata_DIA_DA_SHAPE[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdata_DIA_DA_SHAPE[".fieldsForRegister"] = array();

$tdata_DIA_DA_SHAPE[".listAjax"] = false;

	$tdata_DIA_DA_SHAPE[".audit"] = false;

	$tdata_DIA_DA_SHAPE[".locking"] = false;






$tdata_DIA_DA_SHAPE[".reorderRecordsByHeader"] = true;








$tdata_DIA_DA_SHAPE[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdata_DIA_DA_SHAPE[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdata_DIA_DA_SHAPE[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdata_DIA_DA_SHAPE[".searchSaving"] = false;
//

$tdata_DIA_DA_SHAPE[".showSearchPanel"] = true;
		$tdata_DIA_DA_SHAPE[".flexibleSearch"] = true;

$tdata_DIA_DA_SHAPE[".isUseAjaxSuggest"] = true;

$tdata_DIA_DA_SHAPE[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdata_DIA_DA_SHAPE[".ajaxCodeSnippetAdded"] = false;

$tdata_DIA_DA_SHAPE[".buttonsAdded"] = false;

$tdata_DIA_DA_SHAPE[".addPageEvents"] = false;

// use timepicker for search panel
$tdata_DIA_DA_SHAPE[".isUseTimeForSearch"] = false;





$tdata_DIA_DA_SHAPE[".allSearchFields"] = array();
$tdata_DIA_DA_SHAPE[".filterFields"] = array();
$tdata_DIA_DA_SHAPE[".requiredSearchFields"] = array();



$tdata_DIA_DA_SHAPE[".googleLikeFields"] = array();
$tdata_DIA_DA_SHAPE[".googleLikeFields"][] = "id";
$tdata_DIA_DA_SHAPE[".googleLikeFields"][] = "name";
$tdata_DIA_DA_SHAPE[".googleLikeFields"][] = "sort";
$tdata_DIA_DA_SHAPE[".googleLikeFields"][] = "parent";



$tdata_DIA_DA_SHAPE[".tableType"] = "list";

$tdata_DIA_DA_SHAPE[".printerPageOrientation"] = 0;
$tdata_DIA_DA_SHAPE[".nPrinterPageScale"] = 100;

$tdata_DIA_DA_SHAPE[".nPrinterSplitRecords"] = 40;

$tdata_DIA_DA_SHAPE[".nPrinterPDFSplitRecords"] = 40;



$tdata_DIA_DA_SHAPE[".geocodingEnabled"] = false;





$tdata_DIA_DA_SHAPE[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdata_DIA_DA_SHAPE[".pageSize"] = 20;

$tdata_DIA_DA_SHAPE[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdata_DIA_DA_SHAPE[".strOrderBy"] = $tstrOrderBy;

$tdata_DIA_DA_SHAPE[".orderindexes"] = array();

$tdata_DIA_DA_SHAPE[".sqlHead"] = "SELECT `id`,  	`name`,  	`sort`,  	`parent`";
$tdata_DIA_DA_SHAPE[".sqlFrom"] = "FROM `_DIA_DA_SHAPE`";
$tdata_DIA_DA_SHAPE[".sqlWhereExpr"] = "";
$tdata_DIA_DA_SHAPE[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdata_DIA_DA_SHAPE[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdata_DIA_DA_SHAPE[".arrGroupsPerPage"] = $arrGPP;

$tdata_DIA_DA_SHAPE[".highlightSearchResults"] = true;

$tableKeys_DIA_DA_SHAPE = array();
$tableKeys_DIA_DA_SHAPE[] = "id";
$tdata_DIA_DA_SHAPE[".Keys"] = $tableKeys_DIA_DA_SHAPE;

$tdata_DIA_DA_SHAPE[".listFields"] = array();
$tdata_DIA_DA_SHAPE[".listFields"][] = "id";
$tdata_DIA_DA_SHAPE[".listFields"][] = "name";
$tdata_DIA_DA_SHAPE[".listFields"][] = "sort";
$tdata_DIA_DA_SHAPE[".listFields"][] = "parent";

$tdata_DIA_DA_SHAPE[".hideMobileList"] = array();


$tdata_DIA_DA_SHAPE[".viewFields"] = array();
$tdata_DIA_DA_SHAPE[".viewFields"][] = "id";
$tdata_DIA_DA_SHAPE[".viewFields"][] = "name";
$tdata_DIA_DA_SHAPE[".viewFields"][] = "sort";
$tdata_DIA_DA_SHAPE[".viewFields"][] = "parent";

$tdata_DIA_DA_SHAPE[".addFields"] = array();
$tdata_DIA_DA_SHAPE[".addFields"][] = "name";
$tdata_DIA_DA_SHAPE[".addFields"][] = "sort";
$tdata_DIA_DA_SHAPE[".addFields"][] = "parent";

$tdata_DIA_DA_SHAPE[".masterListFields"] = array();
$tdata_DIA_DA_SHAPE[".masterListFields"][] = "id";
$tdata_DIA_DA_SHAPE[".masterListFields"][] = "name";
$tdata_DIA_DA_SHAPE[".masterListFields"][] = "sort";
$tdata_DIA_DA_SHAPE[".masterListFields"][] = "parent";

$tdata_DIA_DA_SHAPE[".inlineAddFields"] = array();
$tdata_DIA_DA_SHAPE[".inlineAddFields"][] = "name";
$tdata_DIA_DA_SHAPE[".inlineAddFields"][] = "sort";
$tdata_DIA_DA_SHAPE[".inlineAddFields"][] = "parent";

$tdata_DIA_DA_SHAPE[".editFields"] = array();
$tdata_DIA_DA_SHAPE[".editFields"][] = "name";
$tdata_DIA_DA_SHAPE[".editFields"][] = "sort";
$tdata_DIA_DA_SHAPE[".editFields"][] = "parent";

$tdata_DIA_DA_SHAPE[".inlineEditFields"] = array();
$tdata_DIA_DA_SHAPE[".inlineEditFields"][] = "name";
$tdata_DIA_DA_SHAPE[".inlineEditFields"][] = "sort";
$tdata_DIA_DA_SHAPE[".inlineEditFields"][] = "parent";

$tdata_DIA_DA_SHAPE[".updateSelectedFields"] = array();
$tdata_DIA_DA_SHAPE[".updateSelectedFields"][] = "name";
$tdata_DIA_DA_SHAPE[".updateSelectedFields"][] = "sort";
$tdata_DIA_DA_SHAPE[".updateSelectedFields"][] = "parent";


$tdata_DIA_DA_SHAPE[".exportFields"] = array();
$tdata_DIA_DA_SHAPE[".exportFields"][] = "id";
$tdata_DIA_DA_SHAPE[".exportFields"][] = "name";
$tdata_DIA_DA_SHAPE[".exportFields"][] = "sort";
$tdata_DIA_DA_SHAPE[".exportFields"][] = "parent";

$tdata_DIA_DA_SHAPE[".importFields"] = array();
$tdata_DIA_DA_SHAPE[".importFields"][] = "id";
$tdata_DIA_DA_SHAPE[".importFields"][] = "name";
$tdata_DIA_DA_SHAPE[".importFields"][] = "sort";
$tdata_DIA_DA_SHAPE[".importFields"][] = "parent";

$tdata_DIA_DA_SHAPE[".printFields"] = array();
$tdata_DIA_DA_SHAPE[".printFields"][] = "id";
$tdata_DIA_DA_SHAPE[".printFields"][] = "name";
$tdata_DIA_DA_SHAPE[".printFields"][] = "sort";
$tdata_DIA_DA_SHAPE[".printFields"][] = "parent";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "_DIA_DA_SHAPE";
	$fdata["Label"] = GetFieldLabel("_DIA_DA_SHAPE","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`id`";

	
	
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








	$tdata_DIA_DA_SHAPE["id"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "_DIA_DA_SHAPE";
	$fdata["Label"] = GetFieldLabel("_DIA_DA_SHAPE","name");
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
	$fdata["FullName"] = "`name`";

	
	
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








	$tdata_DIA_DA_SHAPE["name"] = $fdata;
//	sort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sort";
	$fdata["GoodName"] = "sort";
	$fdata["ownerTable"] = "_DIA_DA_SHAPE";
	$fdata["Label"] = GetFieldLabel("_DIA_DA_SHAPE","sort");
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
	$fdata["FullName"] = "`sort`";

	
	
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








	$tdata_DIA_DA_SHAPE["sort"] = $fdata;
//	parent
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "parent";
	$fdata["GoodName"] = "parent";
	$fdata["ownerTable"] = "_DIA_DA_SHAPE";
	$fdata["Label"] = GetFieldLabel("_DIA_DA_SHAPE","parent");
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

		$fdata["strField"] = "parent";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`parent`";

	
	
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








	$tdata_DIA_DA_SHAPE["parent"] = $fdata;


$tables_data["_DIA_DA_SHAPE"]=&$tdata_DIA_DA_SHAPE;
$field_labels["_DIA_DA_SHAPE"] = &$fieldLabels_DIA_DA_SHAPE;
$fieldToolTips["_DIA_DA_SHAPE"] = &$fieldToolTips_DIA_DA_SHAPE;
$placeHolders["_DIA_DA_SHAPE"] = &$placeHolders_DIA_DA_SHAPE;
$page_titles["_DIA_DA_SHAPE"] = &$pageTitles_DIA_DA_SHAPE;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["_DIA_DA_SHAPE"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["_DIA_DA_SHAPE"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery__DIA_DA_SHAPE()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  	`name`,  	`sort`,  	`parent`";
$proto0["m_strFrom"] = "FROM `_DIA_DA_SHAPE`";
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
	"m_strTable" => "_DIA_DA_SHAPE",
	"m_srcTableName" => "_DIA_DA_SHAPE"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "_DIA_DA_SHAPE";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "_DIA_DA_SHAPE",
	"m_srcTableName" => "_DIA_DA_SHAPE"
));

$proto8["m_sql"] = "`name`";
$proto8["m_srcTableName"] = "_DIA_DA_SHAPE";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "sort",
	"m_strTable" => "_DIA_DA_SHAPE",
	"m_srcTableName" => "_DIA_DA_SHAPE"
));

$proto10["m_sql"] = "`sort`";
$proto10["m_srcTableName"] = "_DIA_DA_SHAPE";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "parent",
	"m_strTable" => "_DIA_DA_SHAPE",
	"m_srcTableName" => "_DIA_DA_SHAPE"
));

$proto12["m_sql"] = "`parent`";
$proto12["m_srcTableName"] = "_DIA_DA_SHAPE";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "_DIA_DA_SHAPE";
$proto15["m_srcTableName"] = "_DIA_DA_SHAPE";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "id";
$proto15["m_columns"][] = "name";
$proto15["m_columns"][] = "sort";
$proto15["m_columns"][] = "parent";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "`_DIA_DA_SHAPE`";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "_DIA_DA_SHAPE";
$proto16=array();
$proto16["m_sql"] = "";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = false;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

$proto14["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto14);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="_DIA_DA_SHAPE";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData__DIA_DA_SHAPE = createSqlQuery__DIA_DA_SHAPE();


	
		;

				

$tdata_DIA_DA_SHAPE[".sqlquery"] = $queryData__DIA_DA_SHAPE;

$tableEvents["_DIA_DA_SHAPE"] = new eventsBase;
$tdata_DIA_DA_SHAPE[".hasEvents"] = false;

?>