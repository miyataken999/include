<?php
require_once(getabspath("classes/cipherer.php"));




$tdata_pref = array();
	$tdata_pref[".truncateText"] = true;
	$tdata_pref[".NumberOfChars"] = 80;
	$tdata_pref[".ShortName"] = "_pref";
	$tdata_pref[".OwnerID"] = "";
	$tdata_pref[".OriginalTable"] = "_pref";

//	field labels
$fieldLabels_pref = array();
$fieldToolTips_pref = array();
$pageTitles_pref = array();
$placeHolders_pref = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabels_pref["Japanese"] = array();
	$fieldToolTips_pref["Japanese"] = array();
	$placeHolders_pref["Japanese"] = array();
	$pageTitles_pref["Japanese"] = array();
	$fieldLabels_pref["Japanese"]["id"] = "Id";
	$fieldToolTips_pref["Japanese"]["id"] = "";
	$placeHolders_pref["Japanese"]["id"] = "";
	$fieldLabels_pref["Japanese"]["data"] = "Data";
	$fieldToolTips_pref["Japanese"]["data"] = "";
	$placeHolders_pref["Japanese"]["data"] = "";
	if (count($fieldToolTips_pref["Japanese"]))
		$tdata_pref[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabels_pref[""] = array();
	$fieldToolTips_pref[""] = array();
	$placeHolders_pref[""] = array();
	$pageTitles_pref[""] = array();
	$fieldLabels_pref[""]["id"] = "Id";
	$fieldToolTips_pref[""]["id"] = "";
	$placeHolders_pref[""]["id"] = "";
	$fieldLabels_pref[""]["data"] = "Data";
	$fieldToolTips_pref[""]["data"] = "";
	$placeHolders_pref[""]["data"] = "";
	if (count($fieldToolTips_pref[""]))
		$tdata_pref[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabels_pref["English"] = array();
	$fieldToolTips_pref["English"] = array();
	$placeHolders_pref["English"] = array();
	$pageTitles_pref["English"] = array();
	$fieldLabels_pref["English"]["id"] = "Id";
	$fieldToolTips_pref["English"]["id"] = "";
	$placeHolders_pref["English"]["id"] = "";
	$fieldLabels_pref["English"]["data"] = "Data";
	$fieldToolTips_pref["English"]["data"] = "";
	$placeHolders_pref["English"]["data"] = "";
	if (count($fieldToolTips_pref["English"]))
		$tdata_pref[".isUseToolTips"] = true;
}


	$tdata_pref[".NCSearch"] = true;



$tdata_pref[".shortTableName"] = "_pref";
$tdata_pref[".nSecOptions"] = 0;
$tdata_pref[".recsPerRowPrint"] = 1;
$tdata_pref[".mainTableOwnerID"] = "";
$tdata_pref[".moveNext"] = 1;
$tdata_pref[".entityType"] = 0;

$tdata_pref[".strOriginalTableName"] = "_pref";

	



$tdata_pref[".showAddInPopup"] = false;

$tdata_pref[".showEditInPopup"] = false;

$tdata_pref[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdata_pref[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdata_pref[".fieldsForRegister"] = array();

$tdata_pref[".listAjax"] = false;

	$tdata_pref[".audit"] = false;

	$tdata_pref[".locking"] = false;






$tdata_pref[".reorderRecordsByHeader"] = true;








$tdata_pref[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdata_pref[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdata_pref[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdata_pref[".searchSaving"] = false;
//

$tdata_pref[".showSearchPanel"] = true;
		$tdata_pref[".flexibleSearch"] = true;

$tdata_pref[".isUseAjaxSuggest"] = true;

$tdata_pref[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdata_pref[".ajaxCodeSnippetAdded"] = false;

$tdata_pref[".buttonsAdded"] = false;

$tdata_pref[".addPageEvents"] = false;

// use timepicker for search panel
$tdata_pref[".isUseTimeForSearch"] = false;





$tdata_pref[".allSearchFields"] = array();
$tdata_pref[".filterFields"] = array();
$tdata_pref[".requiredSearchFields"] = array();



$tdata_pref[".googleLikeFields"] = array();
$tdata_pref[".googleLikeFields"][] = "id";
$tdata_pref[".googleLikeFields"][] = "data";



$tdata_pref[".tableType"] = "list";

$tdata_pref[".printerPageOrientation"] = 0;
$tdata_pref[".nPrinterPageScale"] = 100;

$tdata_pref[".nPrinterSplitRecords"] = 40;

$tdata_pref[".nPrinterPDFSplitRecords"] = 40;



$tdata_pref[".geocodingEnabled"] = false;





$tdata_pref[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdata_pref[".pageSize"] = 20;

$tdata_pref[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdata_pref[".strOrderBy"] = $tstrOrderBy;

$tdata_pref[".orderindexes"] = array();

$tdata_pref[".sqlHead"] = "SELECT id,  	`data`";
$tdata_pref[".sqlFrom"] = "FROM `_pref`";
$tdata_pref[".sqlWhereExpr"] = "";
$tdata_pref[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdata_pref[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdata_pref[".arrGroupsPerPage"] = $arrGPP;

$tdata_pref[".highlightSearchResults"] = true;

$tableKeys_pref = array();
$tableKeys_pref[] = "id";
$tdata_pref[".Keys"] = $tableKeys_pref;

$tdata_pref[".listFields"] = array();
$tdata_pref[".listFields"][] = "id";
$tdata_pref[".listFields"][] = "data";

$tdata_pref[".hideMobileList"] = array();


$tdata_pref[".viewFields"] = array();
$tdata_pref[".viewFields"][] = "id";
$tdata_pref[".viewFields"][] = "data";

$tdata_pref[".addFields"] = array();
$tdata_pref[".addFields"][] = "data";

$tdata_pref[".masterListFields"] = array();
$tdata_pref[".masterListFields"][] = "id";
$tdata_pref[".masterListFields"][] = "data";

$tdata_pref[".inlineAddFields"] = array();
$tdata_pref[".inlineAddFields"][] = "data";

$tdata_pref[".editFields"] = array();
$tdata_pref[".editFields"][] = "data";

$tdata_pref[".inlineEditFields"] = array();
$tdata_pref[".inlineEditFields"][] = "data";

$tdata_pref[".updateSelectedFields"] = array();
$tdata_pref[".updateSelectedFields"][] = "data";


$tdata_pref[".exportFields"] = array();
$tdata_pref[".exportFields"][] = "id";
$tdata_pref[".exportFields"][] = "data";

$tdata_pref[".importFields"] = array();
$tdata_pref[".importFields"][] = "id";
$tdata_pref[".importFields"][] = "data";

$tdata_pref[".printFields"] = array();
$tdata_pref[".printFields"][] = "id";
$tdata_pref[".printFields"][] = "data";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "_pref";
	$fdata["Label"] = GetFieldLabel("_pref","id");
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








	$tdata_pref["id"] = $fdata;
//	data
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "data";
	$fdata["GoodName"] = "data";
	$fdata["ownerTable"] = "_pref";
	$fdata["Label"] = GetFieldLabel("_pref","data");
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

		$fdata["strField"] = "data";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`data`";

	
	
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








	$tdata_pref["data"] = $fdata;


$tables_data["_pref"]=&$tdata_pref;
$field_labels["_pref"] = &$fieldLabels_pref;
$fieldToolTips["_pref"] = &$fieldToolTips_pref;
$placeHolders["_pref"] = &$placeHolders_pref;
$page_titles["_pref"] = &$pageTitles_pref;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["_pref"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["_pref"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery__pref()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	`data`";
$proto0["m_strFrom"] = "FROM `_pref`";
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
	"m_strTable" => "_pref",
	"m_srcTableName" => "_pref"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "_pref";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "data",
	"m_strTable" => "_pref",
	"m_srcTableName" => "_pref"
));

$proto8["m_sql"] = "`data`";
$proto8["m_srcTableName"] = "_pref";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "_pref";
$proto11["m_srcTableName"] = "_pref";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "id";
$proto11["m_columns"][] = "data";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "`_pref`";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "_pref";
$proto12=array();
$proto12["m_sql"] = "";
$proto12["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto12["m_column"]=$obj;
$proto12["m_contained"] = array();
$proto12["m_strCase"] = "";
$proto12["m_havingmode"] = false;
$proto12["m_inBrackets"] = false;
$proto12["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto12);

$proto10["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto10);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="_pref";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData__pref = createSqlQuery__pref();


	
		;

		

$tdata_pref[".sqlquery"] = $queryData__pref;

$tableEvents["_pref"] = new eventsBase;
$tdata_pref[".hasEvents"] = false;

?>