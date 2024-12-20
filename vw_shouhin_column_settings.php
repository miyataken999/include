<?php
require_once(getabspath("classes/cipherer.php"));




$tdatavw_shouhin_column = array();
	$tdatavw_shouhin_column[".truncateText"] = true;
	$tdatavw_shouhin_column[".NumberOfChars"] = 80;
	$tdatavw_shouhin_column[".ShortName"] = "vw_shouhin_column";
	$tdatavw_shouhin_column[".OwnerID"] = "";
	$tdatavw_shouhin_column[".OriginalTable"] = "vw_shouhin_column";

//	field labels
$fieldLabelsvw_shouhin_column = array();
$fieldToolTipsvw_shouhin_column = array();
$pageTitlesvw_shouhin_column = array();
$placeHoldersvw_shouhin_column = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsvw_shouhin_column["Japanese"] = array();
	$fieldToolTipsvw_shouhin_column["Japanese"] = array();
	$placeHoldersvw_shouhin_column["Japanese"] = array();
	$pageTitlesvw_shouhin_column["Japanese"] = array();
	$fieldLabelsvw_shouhin_column["Japanese"]["COLUMN_NAME"] = "COLUMN NAME";
	$fieldToolTipsvw_shouhin_column["Japanese"]["COLUMN_NAME"] = "";
	$placeHoldersvw_shouhin_column["Japanese"]["COLUMN_NAME"] = "";
	if (count($fieldToolTipsvw_shouhin_column["Japanese"]))
		$tdatavw_shouhin_column[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsvw_shouhin_column[""] = array();
	$fieldToolTipsvw_shouhin_column[""] = array();
	$placeHoldersvw_shouhin_column[""] = array();
	$pageTitlesvw_shouhin_column[""] = array();
	$fieldLabelsvw_shouhin_column[""]["COLUMN_NAME"] = "COLUMN NAME";
	$fieldToolTipsvw_shouhin_column[""]["COLUMN_NAME"] = "";
	$placeHoldersvw_shouhin_column[""]["COLUMN_NAME"] = "";
	if (count($fieldToolTipsvw_shouhin_column[""]))
		$tdatavw_shouhin_column[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsvw_shouhin_column["English"] = array();
	$fieldToolTipsvw_shouhin_column["English"] = array();
	$placeHoldersvw_shouhin_column["English"] = array();
	$pageTitlesvw_shouhin_column["English"] = array();
	$fieldLabelsvw_shouhin_column["English"]["COLUMN_NAME"] = "COLUMN NAME";
	$fieldToolTipsvw_shouhin_column["English"]["COLUMN_NAME"] = "";
	$placeHoldersvw_shouhin_column["English"]["COLUMN_NAME"] = "";
	if (count($fieldToolTipsvw_shouhin_column["English"]))
		$tdatavw_shouhin_column[".isUseToolTips"] = true;
}


	$tdatavw_shouhin_column[".NCSearch"] = true;



$tdatavw_shouhin_column[".shortTableName"] = "vw_shouhin_column";
$tdatavw_shouhin_column[".nSecOptions"] = 0;
$tdatavw_shouhin_column[".recsPerRowPrint"] = 1;
$tdatavw_shouhin_column[".mainTableOwnerID"] = "";
$tdatavw_shouhin_column[".moveNext"] = 1;
$tdatavw_shouhin_column[".entityType"] = 0;

$tdatavw_shouhin_column[".strOriginalTableName"] = "vw_shouhin_column";

	



$tdatavw_shouhin_column[".showAddInPopup"] = false;

$tdatavw_shouhin_column[".showEditInPopup"] = false;

$tdatavw_shouhin_column[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatavw_shouhin_column[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatavw_shouhin_column[".fieldsForRegister"] = array();

$tdatavw_shouhin_column[".listAjax"] = false;

	$tdatavw_shouhin_column[".audit"] = true;

	$tdatavw_shouhin_column[".locking"] = false;






$tdatavw_shouhin_column[".reorderRecordsByHeader"] = true;








$tdatavw_shouhin_column[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatavw_shouhin_column[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatavw_shouhin_column[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatavw_shouhin_column[".searchSaving"] = false;
//

$tdatavw_shouhin_column[".showSearchPanel"] = true;
		$tdatavw_shouhin_column[".flexibleSearch"] = true;

$tdatavw_shouhin_column[".isUseAjaxSuggest"] = true;

$tdatavw_shouhin_column[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatavw_shouhin_column[".ajaxCodeSnippetAdded"] = false;

$tdatavw_shouhin_column[".buttonsAdded"] = false;

$tdatavw_shouhin_column[".addPageEvents"] = false;

// use timepicker for search panel
$tdatavw_shouhin_column[".isUseTimeForSearch"] = false;





$tdatavw_shouhin_column[".allSearchFields"] = array();
$tdatavw_shouhin_column[".filterFields"] = array();
$tdatavw_shouhin_column[".requiredSearchFields"] = array();



$tdatavw_shouhin_column[".googleLikeFields"] = array();
$tdatavw_shouhin_column[".googleLikeFields"][] = "COLUMN_NAME";



$tdatavw_shouhin_column[".tableType"] = "list";

$tdatavw_shouhin_column[".printerPageOrientation"] = 0;
$tdatavw_shouhin_column[".nPrinterPageScale"] = 100;

$tdatavw_shouhin_column[".nPrinterSplitRecords"] = 40;

$tdatavw_shouhin_column[".nPrinterPDFSplitRecords"] = 40;



$tdatavw_shouhin_column[".geocodingEnabled"] = false;





$tdatavw_shouhin_column[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatavw_shouhin_column[".pageSize"] = 20;

$tdatavw_shouhin_column[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatavw_shouhin_column[".strOrderBy"] = $tstrOrderBy;

$tdatavw_shouhin_column[".orderindexes"] = array();

$tdatavw_shouhin_column[".sqlHead"] = "SELECT COLUMN_NAME";
$tdatavw_shouhin_column[".sqlFrom"] = "FROM vw_shouhin_column";
$tdatavw_shouhin_column[".sqlWhereExpr"] = "";
$tdatavw_shouhin_column[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatavw_shouhin_column[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatavw_shouhin_column[".arrGroupsPerPage"] = $arrGPP;

$tdatavw_shouhin_column[".highlightSearchResults"] = true;

$tableKeysvw_shouhin_column = array();
$tdatavw_shouhin_column[".Keys"] = $tableKeysvw_shouhin_column;

$tdatavw_shouhin_column[".listFields"] = array();
$tdatavw_shouhin_column[".listFields"][] = "COLUMN_NAME";

$tdatavw_shouhin_column[".hideMobileList"] = array();


$tdatavw_shouhin_column[".viewFields"] = array();
$tdatavw_shouhin_column[".viewFields"][] = "COLUMN_NAME";

$tdatavw_shouhin_column[".addFields"] = array();
$tdatavw_shouhin_column[".addFields"][] = "COLUMN_NAME";

$tdatavw_shouhin_column[".masterListFields"] = array();
$tdatavw_shouhin_column[".masterListFields"][] = "COLUMN_NAME";

$tdatavw_shouhin_column[".inlineAddFields"] = array();
$tdatavw_shouhin_column[".inlineAddFields"][] = "COLUMN_NAME";

$tdatavw_shouhin_column[".editFields"] = array();
$tdatavw_shouhin_column[".editFields"][] = "COLUMN_NAME";

$tdatavw_shouhin_column[".inlineEditFields"] = array();
$tdatavw_shouhin_column[".inlineEditFields"][] = "COLUMN_NAME";

$tdatavw_shouhin_column[".updateSelectedFields"] = array();
$tdatavw_shouhin_column[".updateSelectedFields"][] = "COLUMN_NAME";


$tdatavw_shouhin_column[".exportFields"] = array();
$tdatavw_shouhin_column[".exportFields"][] = "COLUMN_NAME";

$tdatavw_shouhin_column[".importFields"] = array();
$tdatavw_shouhin_column[".importFields"][] = "COLUMN_NAME";

$tdatavw_shouhin_column[".printFields"] = array();
$tdatavw_shouhin_column[".printFields"][] = "COLUMN_NAME";

//	COLUMN_NAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "COLUMN_NAME";
	$fdata["GoodName"] = "COLUMN_NAME";
	$fdata["ownerTable"] = "vw_shouhin_column";
	$fdata["Label"] = GetFieldLabel("vw_shouhin_column","COLUMN_NAME");
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

		$fdata["strField"] = "COLUMN_NAME";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COLUMN_NAME";

	
	
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
			$edata["EditParams"].= " maxlength=64";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatavw_shouhin_column["COLUMN_NAME"] = $fdata;


$tables_data["vw_shouhin_column"]=&$tdatavw_shouhin_column;
$field_labels["vw_shouhin_column"] = &$fieldLabelsvw_shouhin_column;
$fieldToolTips["vw_shouhin_column"] = &$fieldToolTipsvw_shouhin_column;
$placeHolders["vw_shouhin_column"] = &$placeHoldersvw_shouhin_column;
$page_titles["vw_shouhin_column"] = &$pageTitlesvw_shouhin_column;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["vw_shouhin_column"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["vw_shouhin_column"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_vw_shouhin_column()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "COLUMN_NAME";
$proto0["m_strFrom"] = "FROM vw_shouhin_column";
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
	"m_strName" => "COLUMN_NAME",
	"m_strTable" => "vw_shouhin_column",
	"m_srcTableName" => "vw_shouhin_column"
));

$proto6["m_sql"] = "COLUMN_NAME";
$proto6["m_srcTableName"] = "vw_shouhin_column";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto8=array();
$proto8["m_link"] = "SQLL_MAIN";
			$proto9=array();
$proto9["m_strName"] = "vw_shouhin_column";
$proto9["m_srcTableName"] = "vw_shouhin_column";
$proto9["m_columns"] = array();
$proto9["m_columns"][] = "COLUMN_NAME";
$obj = new SQLTable($proto9);

$proto8["m_table"] = $obj;
$proto8["m_sql"] = "vw_shouhin_column";
$proto8["m_alias"] = "";
$proto8["m_srcTableName"] = "vw_shouhin_column";
$proto10=array();
$proto10["m_sql"] = "";
$proto10["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto10["m_column"]=$obj;
$proto10["m_contained"] = array();
$proto10["m_strCase"] = "";
$proto10["m_havingmode"] = false;
$proto10["m_inBrackets"] = false;
$proto10["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto10);

$proto8["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto8);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="vw_shouhin_column";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_vw_shouhin_column = createSqlQuery_vw_shouhin_column();


	
		;

	

$tdatavw_shouhin_column[".sqlquery"] = $queryData_vw_shouhin_column;

$tableEvents["vw_shouhin_column"] = new eventsBase;
$tdatavw_shouhin_column[".hasEvents"] = false;

?>