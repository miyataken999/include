<?php
require_once(getabspath("classes/cipherer.php"));




$tdata_hentou_houhou_type = array();
	$tdata_hentou_houhou_type[".truncateText"] = true;
	$tdata_hentou_houhou_type[".NumberOfChars"] = 80;
	$tdata_hentou_houhou_type[".ShortName"] = "_hentou_houhou_type";
	$tdata_hentou_houhou_type[".OwnerID"] = "";
	$tdata_hentou_houhou_type[".OriginalTable"] = "_hentou_houhou_type";

//	field labels
$fieldLabels_hentou_houhou_type = array();
$fieldToolTips_hentou_houhou_type = array();
$pageTitles_hentou_houhou_type = array();
$placeHolders_hentou_houhou_type = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabels_hentou_houhou_type["Japanese"] = array();
	$fieldToolTips_hentou_houhou_type["Japanese"] = array();
	$placeHolders_hentou_houhou_type["Japanese"] = array();
	$pageTitles_hentou_houhou_type["Japanese"] = array();
	$fieldLabels_hentou_houhou_type["Japanese"]["id"] = "Id";
	$fieldToolTips_hentou_houhou_type["Japanese"]["id"] = "";
	$placeHolders_hentou_houhou_type["Japanese"]["id"] = "";
	$fieldLabels_hentou_houhou_type["Japanese"]["data"] = "Data";
	$fieldToolTips_hentou_houhou_type["Japanese"]["data"] = "";
	$placeHolders_hentou_houhou_type["Japanese"]["data"] = "";
	if (count($fieldToolTips_hentou_houhou_type["Japanese"]))
		$tdata_hentou_houhou_type[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabels_hentou_houhou_type[""] = array();
	$fieldToolTips_hentou_houhou_type[""] = array();
	$placeHolders_hentou_houhou_type[""] = array();
	$pageTitles_hentou_houhou_type[""] = array();
	$fieldLabels_hentou_houhou_type[""]["id"] = "Id";
	$fieldToolTips_hentou_houhou_type[""]["id"] = "";
	$placeHolders_hentou_houhou_type[""]["id"] = "";
	$fieldLabels_hentou_houhou_type[""]["data"] = "Data";
	$fieldToolTips_hentou_houhou_type[""]["data"] = "";
	$placeHolders_hentou_houhou_type[""]["data"] = "";
	if (count($fieldToolTips_hentou_houhou_type[""]))
		$tdata_hentou_houhou_type[".isUseToolTips"] = true;
}


	$tdata_hentou_houhou_type[".NCSearch"] = true;



$tdata_hentou_houhou_type[".shortTableName"] = "_hentou_houhou_type";
$tdata_hentou_houhou_type[".nSecOptions"] = 0;
$tdata_hentou_houhou_type[".recsPerRowPrint"] = 1;
$tdata_hentou_houhou_type[".mainTableOwnerID"] = "";
$tdata_hentou_houhou_type[".moveNext"] = 1;
$tdata_hentou_houhou_type[".entityType"] = 0;

$tdata_hentou_houhou_type[".strOriginalTableName"] = "_hentou_houhou_type";

	



$tdata_hentou_houhou_type[".showAddInPopup"] = false;

$tdata_hentou_houhou_type[".showEditInPopup"] = false;

$tdata_hentou_houhou_type[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdata_hentou_houhou_type[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdata_hentou_houhou_type[".fieldsForRegister"] = array();

$tdata_hentou_houhou_type[".listAjax"] = false;

	$tdata_hentou_houhou_type[".audit"] = false;

	$tdata_hentou_houhou_type[".locking"] = false;






$tdata_hentou_houhou_type[".reorderRecordsByHeader"] = true;








$tdata_hentou_houhou_type[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdata_hentou_houhou_type[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdata_hentou_houhou_type[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdata_hentou_houhou_type[".searchSaving"] = false;
//

$tdata_hentou_houhou_type[".showSearchPanel"] = true;
		$tdata_hentou_houhou_type[".flexibleSearch"] = true;

$tdata_hentou_houhou_type[".isUseAjaxSuggest"] = true;

$tdata_hentou_houhou_type[".rowHighlite"] = true;



																														

$tdata_hentou_houhou_type[".ajaxCodeSnippetAdded"] = false;

$tdata_hentou_houhou_type[".buttonsAdded"] = false;

$tdata_hentou_houhou_type[".addPageEvents"] = false;

// use timepicker for search panel
$tdata_hentou_houhou_type[".isUseTimeForSearch"] = false;





$tdata_hentou_houhou_type[".allSearchFields"] = array();
$tdata_hentou_houhou_type[".filterFields"] = array();
$tdata_hentou_houhou_type[".requiredSearchFields"] = array();



$tdata_hentou_houhou_type[".googleLikeFields"] = array();
$tdata_hentou_houhou_type[".googleLikeFields"][] = "id";
$tdata_hentou_houhou_type[".googleLikeFields"][] = "data";



$tdata_hentou_houhou_type[".tableType"] = "list";

$tdata_hentou_houhou_type[".printerPageOrientation"] = 0;
$tdata_hentou_houhou_type[".nPrinterPageScale"] = 100;

$tdata_hentou_houhou_type[".nPrinterSplitRecords"] = 40;

$tdata_hentou_houhou_type[".nPrinterPDFSplitRecords"] = 40;



$tdata_hentou_houhou_type[".geocodingEnabled"] = false;





$tdata_hentou_houhou_type[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdata_hentou_houhou_type[".pageSize"] = 20;

$tdata_hentou_houhou_type[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdata_hentou_houhou_type[".strOrderBy"] = $tstrOrderBy;

$tdata_hentou_houhou_type[".orderindexes"] = array();

$tdata_hentou_houhou_type[".sqlHead"] = "SELECT id,  	`data`";
$tdata_hentou_houhou_type[".sqlFrom"] = "FROM `_hentou_houhou_type`";
$tdata_hentou_houhou_type[".sqlWhereExpr"] = "";
$tdata_hentou_houhou_type[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdata_hentou_houhou_type[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdata_hentou_houhou_type[".arrGroupsPerPage"] = $arrGPP;

$tdata_hentou_houhou_type[".highlightSearchResults"] = true;

$tableKeys_hentou_houhou_type = array();
$tableKeys_hentou_houhou_type[] = "id";
$tdata_hentou_houhou_type[".Keys"] = $tableKeys_hentou_houhou_type;

$tdata_hentou_houhou_type[".listFields"] = array();
$tdata_hentou_houhou_type[".listFields"][] = "id";
$tdata_hentou_houhou_type[".listFields"][] = "data";

$tdata_hentou_houhou_type[".hideMobileList"] = array();


$tdata_hentou_houhou_type[".viewFields"] = array();
$tdata_hentou_houhou_type[".viewFields"][] = "id";
$tdata_hentou_houhou_type[".viewFields"][] = "data";

$tdata_hentou_houhou_type[".addFields"] = array();
$tdata_hentou_houhou_type[".addFields"][] = "id";
$tdata_hentou_houhou_type[".addFields"][] = "data";

$tdata_hentou_houhou_type[".masterListFields"] = array();
$tdata_hentou_houhou_type[".masterListFields"][] = "id";
$tdata_hentou_houhou_type[".masterListFields"][] = "data";

$tdata_hentou_houhou_type[".inlineAddFields"] = array();
$tdata_hentou_houhou_type[".inlineAddFields"][] = "id";
$tdata_hentou_houhou_type[".inlineAddFields"][] = "data";

$tdata_hentou_houhou_type[".editFields"] = array();
$tdata_hentou_houhou_type[".editFields"][] = "id";
$tdata_hentou_houhou_type[".editFields"][] = "data";

$tdata_hentou_houhou_type[".inlineEditFields"] = array();
$tdata_hentou_houhou_type[".inlineEditFields"][] = "id";
$tdata_hentou_houhou_type[".inlineEditFields"][] = "data";

$tdata_hentou_houhou_type[".updateSelectedFields"] = array();
$tdata_hentou_houhou_type[".updateSelectedFields"][] = "id";
$tdata_hentou_houhou_type[".updateSelectedFields"][] = "data";


$tdata_hentou_houhou_type[".exportFields"] = array();
$tdata_hentou_houhou_type[".exportFields"][] = "id";
$tdata_hentou_houhou_type[".exportFields"][] = "data";

$tdata_hentou_houhou_type[".importFields"] = array();
$tdata_hentou_houhou_type[".importFields"][] = "id";
$tdata_hentou_houhou_type[".importFields"][] = "data";

$tdata_hentou_houhou_type[".printFields"] = array();
$tdata_hentou_houhou_type[".printFields"][] = "id";
$tdata_hentou_houhou_type[".printFields"][] = "data";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "_hentou_houhou_type";
	$fdata["Label"] = GetFieldLabel("_hentou_houhou_type","id");
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

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=12";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdata_hentou_houhou_type["id"] = $fdata;
//	data
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "data";
	$fdata["GoodName"] = "data";
	$fdata["ownerTable"] = "_hentou_houhou_type";
	$fdata["Label"] = GetFieldLabel("_hentou_houhou_type","data");
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
			$edata["EditParams"].= " maxlength=12";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdata_hentou_houhou_type["data"] = $fdata;


$tables_data["_hentou_houhou_type"]=&$tdata_hentou_houhou_type;
$field_labels["_hentou_houhou_type"] = &$fieldLabels_hentou_houhou_type;
$fieldToolTips["_hentou_houhou_type"] = &$fieldToolTips_hentou_houhou_type;
$placeHolders["_hentou_houhou_type"] = &$placeHolders_hentou_houhou_type;
$page_titles["_hentou_houhou_type"] = &$pageTitles_hentou_houhou_type;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["_hentou_houhou_type"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["_hentou_houhou_type"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery__hentou_houhou_type()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	`data`";
$proto0["m_strFrom"] = "FROM `_hentou_houhou_type`";
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
	"m_strTable" => "_hentou_houhou_type",
	"m_srcTableName" => "_hentou_houhou_type"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "_hentou_houhou_type";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "data",
	"m_strTable" => "_hentou_houhou_type",
	"m_srcTableName" => "_hentou_houhou_type"
));

$proto8["m_sql"] = "`data`";
$proto8["m_srcTableName"] = "_hentou_houhou_type";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "_hentou_houhou_type";
$proto11["m_srcTableName"] = "_hentou_houhou_type";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "id";
$proto11["m_columns"][] = "data";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "`_hentou_houhou_type`";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "_hentou_houhou_type";
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
$proto0["m_srcTableName"]="_hentou_houhou_type";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData__hentou_houhou_type = createSqlQuery__hentou_houhou_type();


	
		;

		

$tdata_hentou_houhou_type[".sqlquery"] = $queryData__hentou_houhou_type;

$tableEvents["_hentou_houhou_type"] = new eventsBase;
$tdata_hentou_houhou_type[".hasEvents"] = false;

?>