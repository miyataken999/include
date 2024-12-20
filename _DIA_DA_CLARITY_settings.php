<?php
require_once(getabspath("classes/cipherer.php"));




$tdata_DIA_DA_CLARITY = array();
	$tdata_DIA_DA_CLARITY[".truncateText"] = true;
	$tdata_DIA_DA_CLARITY[".NumberOfChars"] = 80;
	$tdata_DIA_DA_CLARITY[".ShortName"] = "_DIA_DA_CLARITY";
	$tdata_DIA_DA_CLARITY[".OwnerID"] = "";
	$tdata_DIA_DA_CLARITY[".OriginalTable"] = "_DIA_DA_CLARITY";

//	field labels
$fieldLabels_DIA_DA_CLARITY = array();
$fieldToolTips_DIA_DA_CLARITY = array();
$pageTitles_DIA_DA_CLARITY = array();
$placeHolders_DIA_DA_CLARITY = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabels_DIA_DA_CLARITY["Japanese"] = array();
	$fieldToolTips_DIA_DA_CLARITY["Japanese"] = array();
	$placeHolders_DIA_DA_CLARITY["Japanese"] = array();
	$pageTitles_DIA_DA_CLARITY["Japanese"] = array();
	$fieldLabels_DIA_DA_CLARITY["Japanese"]["id"] = "Id";
	$fieldToolTips_DIA_DA_CLARITY["Japanese"]["id"] = "";
	$placeHolders_DIA_DA_CLARITY["Japanese"]["id"] = "";
	$fieldLabels_DIA_DA_CLARITY["Japanese"]["name"] = "Name";
	$fieldToolTips_DIA_DA_CLARITY["Japanese"]["name"] = "";
	$placeHolders_DIA_DA_CLARITY["Japanese"]["name"] = "";
	$fieldLabels_DIA_DA_CLARITY["Japanese"]["sort"] = "Sort";
	$fieldToolTips_DIA_DA_CLARITY["Japanese"]["sort"] = "";
	$placeHolders_DIA_DA_CLARITY["Japanese"]["sort"] = "";
	$fieldLabels_DIA_DA_CLARITY["Japanese"]["parent"] = "Parent";
	$fieldToolTips_DIA_DA_CLARITY["Japanese"]["parent"] = "";
	$placeHolders_DIA_DA_CLARITY["Japanese"]["parent"] = "";
	if (count($fieldToolTips_DIA_DA_CLARITY["Japanese"]))
		$tdata_DIA_DA_CLARITY[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabels_DIA_DA_CLARITY[""] = array();
	$fieldToolTips_DIA_DA_CLARITY[""] = array();
	$placeHolders_DIA_DA_CLARITY[""] = array();
	$pageTitles_DIA_DA_CLARITY[""] = array();
	$fieldLabels_DIA_DA_CLARITY[""]["id"] = "Id";
	$fieldToolTips_DIA_DA_CLARITY[""]["id"] = "";
	$placeHolders_DIA_DA_CLARITY[""]["id"] = "";
	$fieldLabels_DIA_DA_CLARITY[""]["name"] = "Name";
	$fieldToolTips_DIA_DA_CLARITY[""]["name"] = "";
	$placeHolders_DIA_DA_CLARITY[""]["name"] = "";
	$fieldLabels_DIA_DA_CLARITY[""]["sort"] = "Sort";
	$fieldToolTips_DIA_DA_CLARITY[""]["sort"] = "";
	$placeHolders_DIA_DA_CLARITY[""]["sort"] = "";
	$fieldLabels_DIA_DA_CLARITY[""]["parent"] = "Parent";
	$fieldToolTips_DIA_DA_CLARITY[""]["parent"] = "";
	$placeHolders_DIA_DA_CLARITY[""]["parent"] = "";
	if (count($fieldToolTips_DIA_DA_CLARITY[""]))
		$tdata_DIA_DA_CLARITY[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabels_DIA_DA_CLARITY["English"] = array();
	$fieldToolTips_DIA_DA_CLARITY["English"] = array();
	$placeHolders_DIA_DA_CLARITY["English"] = array();
	$pageTitles_DIA_DA_CLARITY["English"] = array();
	$fieldLabels_DIA_DA_CLARITY["English"]["id"] = "Id";
	$fieldToolTips_DIA_DA_CLARITY["English"]["id"] = "";
	$placeHolders_DIA_DA_CLARITY["English"]["id"] = "";
	$fieldLabels_DIA_DA_CLARITY["English"]["name"] = "Name";
	$fieldToolTips_DIA_DA_CLARITY["English"]["name"] = "";
	$placeHolders_DIA_DA_CLARITY["English"]["name"] = "";
	$fieldLabels_DIA_DA_CLARITY["English"]["sort"] = "Sort";
	$fieldToolTips_DIA_DA_CLARITY["English"]["sort"] = "";
	$placeHolders_DIA_DA_CLARITY["English"]["sort"] = "";
	$fieldLabels_DIA_DA_CLARITY["English"]["parent"] = "Parent";
	$fieldToolTips_DIA_DA_CLARITY["English"]["parent"] = "";
	$placeHolders_DIA_DA_CLARITY["English"]["parent"] = "";
	if (count($fieldToolTips_DIA_DA_CLARITY["English"]))
		$tdata_DIA_DA_CLARITY[".isUseToolTips"] = true;
}


	$tdata_DIA_DA_CLARITY[".NCSearch"] = true;



$tdata_DIA_DA_CLARITY[".shortTableName"] = "_DIA_DA_CLARITY";
$tdata_DIA_DA_CLARITY[".nSecOptions"] = 0;
$tdata_DIA_DA_CLARITY[".recsPerRowPrint"] = 1;
$tdata_DIA_DA_CLARITY[".mainTableOwnerID"] = "";
$tdata_DIA_DA_CLARITY[".moveNext"] = 1;
$tdata_DIA_DA_CLARITY[".entityType"] = 0;

$tdata_DIA_DA_CLARITY[".strOriginalTableName"] = "_DIA_DA_CLARITY";

	



$tdata_DIA_DA_CLARITY[".showAddInPopup"] = false;

$tdata_DIA_DA_CLARITY[".showEditInPopup"] = false;

$tdata_DIA_DA_CLARITY[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdata_DIA_DA_CLARITY[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdata_DIA_DA_CLARITY[".fieldsForRegister"] = array();

$tdata_DIA_DA_CLARITY[".listAjax"] = false;

	$tdata_DIA_DA_CLARITY[".audit"] = false;

	$tdata_DIA_DA_CLARITY[".locking"] = false;






$tdata_DIA_DA_CLARITY[".reorderRecordsByHeader"] = true;








$tdata_DIA_DA_CLARITY[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdata_DIA_DA_CLARITY[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdata_DIA_DA_CLARITY[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdata_DIA_DA_CLARITY[".searchSaving"] = false;
//

$tdata_DIA_DA_CLARITY[".showSearchPanel"] = true;
		$tdata_DIA_DA_CLARITY[".flexibleSearch"] = true;

$tdata_DIA_DA_CLARITY[".isUseAjaxSuggest"] = true;

$tdata_DIA_DA_CLARITY[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdata_DIA_DA_CLARITY[".ajaxCodeSnippetAdded"] = false;

$tdata_DIA_DA_CLARITY[".buttonsAdded"] = false;

$tdata_DIA_DA_CLARITY[".addPageEvents"] = false;

// use timepicker for search panel
$tdata_DIA_DA_CLARITY[".isUseTimeForSearch"] = false;





$tdata_DIA_DA_CLARITY[".allSearchFields"] = array();
$tdata_DIA_DA_CLARITY[".filterFields"] = array();
$tdata_DIA_DA_CLARITY[".requiredSearchFields"] = array();



$tdata_DIA_DA_CLARITY[".googleLikeFields"] = array();
$tdata_DIA_DA_CLARITY[".googleLikeFields"][] = "id";
$tdata_DIA_DA_CLARITY[".googleLikeFields"][] = "name";
$tdata_DIA_DA_CLARITY[".googleLikeFields"][] = "sort";
$tdata_DIA_DA_CLARITY[".googleLikeFields"][] = "parent";



$tdata_DIA_DA_CLARITY[".tableType"] = "list";

$tdata_DIA_DA_CLARITY[".printerPageOrientation"] = 0;
$tdata_DIA_DA_CLARITY[".nPrinterPageScale"] = 100;

$tdata_DIA_DA_CLARITY[".nPrinterSplitRecords"] = 40;

$tdata_DIA_DA_CLARITY[".nPrinterPDFSplitRecords"] = 40;



$tdata_DIA_DA_CLARITY[".geocodingEnabled"] = false;





$tdata_DIA_DA_CLARITY[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdata_DIA_DA_CLARITY[".pageSize"] = 20;

$tdata_DIA_DA_CLARITY[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdata_DIA_DA_CLARITY[".strOrderBy"] = $tstrOrderBy;

$tdata_DIA_DA_CLARITY[".orderindexes"] = array();

$tdata_DIA_DA_CLARITY[".sqlHead"] = "SELECT `id`,  	`name`,  	`sort`,  	`parent`";
$tdata_DIA_DA_CLARITY[".sqlFrom"] = "FROM `_DIA_DA_CLARITY`";
$tdata_DIA_DA_CLARITY[".sqlWhereExpr"] = "";
$tdata_DIA_DA_CLARITY[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdata_DIA_DA_CLARITY[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdata_DIA_DA_CLARITY[".arrGroupsPerPage"] = $arrGPP;

$tdata_DIA_DA_CLARITY[".highlightSearchResults"] = true;

$tableKeys_DIA_DA_CLARITY = array();
$tableKeys_DIA_DA_CLARITY[] = "id";
$tdata_DIA_DA_CLARITY[".Keys"] = $tableKeys_DIA_DA_CLARITY;

$tdata_DIA_DA_CLARITY[".listFields"] = array();
$tdata_DIA_DA_CLARITY[".listFields"][] = "id";
$tdata_DIA_DA_CLARITY[".listFields"][] = "name";
$tdata_DIA_DA_CLARITY[".listFields"][] = "sort";
$tdata_DIA_DA_CLARITY[".listFields"][] = "parent";

$tdata_DIA_DA_CLARITY[".hideMobileList"] = array();


$tdata_DIA_DA_CLARITY[".viewFields"] = array();
$tdata_DIA_DA_CLARITY[".viewFields"][] = "id";
$tdata_DIA_DA_CLARITY[".viewFields"][] = "name";
$tdata_DIA_DA_CLARITY[".viewFields"][] = "sort";
$tdata_DIA_DA_CLARITY[".viewFields"][] = "parent";

$tdata_DIA_DA_CLARITY[".addFields"] = array();
$tdata_DIA_DA_CLARITY[".addFields"][] = "name";
$tdata_DIA_DA_CLARITY[".addFields"][] = "sort";
$tdata_DIA_DA_CLARITY[".addFields"][] = "parent";

$tdata_DIA_DA_CLARITY[".masterListFields"] = array();
$tdata_DIA_DA_CLARITY[".masterListFields"][] = "id";
$tdata_DIA_DA_CLARITY[".masterListFields"][] = "name";
$tdata_DIA_DA_CLARITY[".masterListFields"][] = "sort";
$tdata_DIA_DA_CLARITY[".masterListFields"][] = "parent";

$tdata_DIA_DA_CLARITY[".inlineAddFields"] = array();
$tdata_DIA_DA_CLARITY[".inlineAddFields"][] = "name";
$tdata_DIA_DA_CLARITY[".inlineAddFields"][] = "sort";
$tdata_DIA_DA_CLARITY[".inlineAddFields"][] = "parent";

$tdata_DIA_DA_CLARITY[".editFields"] = array();
$tdata_DIA_DA_CLARITY[".editFields"][] = "name";
$tdata_DIA_DA_CLARITY[".editFields"][] = "sort";
$tdata_DIA_DA_CLARITY[".editFields"][] = "parent";

$tdata_DIA_DA_CLARITY[".inlineEditFields"] = array();
$tdata_DIA_DA_CLARITY[".inlineEditFields"][] = "name";
$tdata_DIA_DA_CLARITY[".inlineEditFields"][] = "sort";
$tdata_DIA_DA_CLARITY[".inlineEditFields"][] = "parent";

$tdata_DIA_DA_CLARITY[".updateSelectedFields"] = array();
$tdata_DIA_DA_CLARITY[".updateSelectedFields"][] = "name";
$tdata_DIA_DA_CLARITY[".updateSelectedFields"][] = "sort";
$tdata_DIA_DA_CLARITY[".updateSelectedFields"][] = "parent";


$tdata_DIA_DA_CLARITY[".exportFields"] = array();
$tdata_DIA_DA_CLARITY[".exportFields"][] = "id";
$tdata_DIA_DA_CLARITY[".exportFields"][] = "name";
$tdata_DIA_DA_CLARITY[".exportFields"][] = "sort";
$tdata_DIA_DA_CLARITY[".exportFields"][] = "parent";

$tdata_DIA_DA_CLARITY[".importFields"] = array();
$tdata_DIA_DA_CLARITY[".importFields"][] = "id";
$tdata_DIA_DA_CLARITY[".importFields"][] = "name";
$tdata_DIA_DA_CLARITY[".importFields"][] = "sort";
$tdata_DIA_DA_CLARITY[".importFields"][] = "parent";

$tdata_DIA_DA_CLARITY[".printFields"] = array();
$tdata_DIA_DA_CLARITY[".printFields"][] = "id";
$tdata_DIA_DA_CLARITY[".printFields"][] = "name";
$tdata_DIA_DA_CLARITY[".printFields"][] = "sort";
$tdata_DIA_DA_CLARITY[".printFields"][] = "parent";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "_DIA_DA_CLARITY";
	$fdata["Label"] = GetFieldLabel("_DIA_DA_CLARITY","id");
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








	$tdata_DIA_DA_CLARITY["id"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "_DIA_DA_CLARITY";
	$fdata["Label"] = GetFieldLabel("_DIA_DA_CLARITY","name");
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








	$tdata_DIA_DA_CLARITY["name"] = $fdata;
//	sort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sort";
	$fdata["GoodName"] = "sort";
	$fdata["ownerTable"] = "_DIA_DA_CLARITY";
	$fdata["Label"] = GetFieldLabel("_DIA_DA_CLARITY","sort");
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








	$tdata_DIA_DA_CLARITY["sort"] = $fdata;
//	parent
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "parent";
	$fdata["GoodName"] = "parent";
	$fdata["ownerTable"] = "_DIA_DA_CLARITY";
	$fdata["Label"] = GetFieldLabel("_DIA_DA_CLARITY","parent");
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








	$tdata_DIA_DA_CLARITY["parent"] = $fdata;


$tables_data["_DIA_DA_CLARITY"]=&$tdata_DIA_DA_CLARITY;
$field_labels["_DIA_DA_CLARITY"] = &$fieldLabels_DIA_DA_CLARITY;
$fieldToolTips["_DIA_DA_CLARITY"] = &$fieldToolTips_DIA_DA_CLARITY;
$placeHolders["_DIA_DA_CLARITY"] = &$placeHolders_DIA_DA_CLARITY;
$page_titles["_DIA_DA_CLARITY"] = &$pageTitles_DIA_DA_CLARITY;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["_DIA_DA_CLARITY"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["_DIA_DA_CLARITY"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery__DIA_DA_CLARITY()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  	`name`,  	`sort`,  	`parent`";
$proto0["m_strFrom"] = "FROM `_DIA_DA_CLARITY`";
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
	"m_strTable" => "_DIA_DA_CLARITY",
	"m_srcTableName" => "_DIA_DA_CLARITY"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "_DIA_DA_CLARITY";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "_DIA_DA_CLARITY",
	"m_srcTableName" => "_DIA_DA_CLARITY"
));

$proto8["m_sql"] = "`name`";
$proto8["m_srcTableName"] = "_DIA_DA_CLARITY";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "sort",
	"m_strTable" => "_DIA_DA_CLARITY",
	"m_srcTableName" => "_DIA_DA_CLARITY"
));

$proto10["m_sql"] = "`sort`";
$proto10["m_srcTableName"] = "_DIA_DA_CLARITY";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "parent",
	"m_strTable" => "_DIA_DA_CLARITY",
	"m_srcTableName" => "_DIA_DA_CLARITY"
));

$proto12["m_sql"] = "`parent`";
$proto12["m_srcTableName"] = "_DIA_DA_CLARITY";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "_DIA_DA_CLARITY";
$proto15["m_srcTableName"] = "_DIA_DA_CLARITY";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "id";
$proto15["m_columns"][] = "name";
$proto15["m_columns"][] = "sort";
$proto15["m_columns"][] = "parent";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "`_DIA_DA_CLARITY`";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "_DIA_DA_CLARITY";
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
$proto0["m_srcTableName"]="_DIA_DA_CLARITY";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData__DIA_DA_CLARITY = createSqlQuery__DIA_DA_CLARITY();


	
		;

				

$tdata_DIA_DA_CLARITY[".sqlquery"] = $queryData__DIA_DA_CLARITY;

$tableEvents["_DIA_DA_CLARITY"] = new eventsBase;
$tdata_DIA_DA_CLARITY[".hasEvents"] = false;

?>