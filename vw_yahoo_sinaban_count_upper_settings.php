<?php
require_once(getabspath("classes/cipherer.php"));




$tdatavw_yahoo_sinaban_count_upper = array();
	$tdatavw_yahoo_sinaban_count_upper[".truncateText"] = true;
	$tdatavw_yahoo_sinaban_count_upper[".NumberOfChars"] = 80;
	$tdatavw_yahoo_sinaban_count_upper[".ShortName"] = "vw_yahoo_sinaban_count_upper";
	$tdatavw_yahoo_sinaban_count_upper[".OwnerID"] = "";
	$tdatavw_yahoo_sinaban_count_upper[".OriginalTable"] = "vw_yahoo_sinaban_count_upper";

//	field labels
$fieldLabelsvw_yahoo_sinaban_count_upper = array();
$fieldToolTipsvw_yahoo_sinaban_count_upper = array();
$pageTitlesvw_yahoo_sinaban_count_upper = array();
$placeHoldersvw_yahoo_sinaban_count_upper = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsvw_yahoo_sinaban_count_upper["Japanese"] = array();
	$fieldToolTipsvw_yahoo_sinaban_count_upper["Japanese"] = array();
	$placeHoldersvw_yahoo_sinaban_count_upper["Japanese"] = array();
	$pageTitlesvw_yahoo_sinaban_count_upper["Japanese"] = array();
	$fieldLabelsvw_yahoo_sinaban_count_upper["Japanese"]["yahoo_sinaban"] = "重複品番";
	$fieldToolTipsvw_yahoo_sinaban_count_upper["Japanese"]["yahoo_sinaban"] = "";
	$placeHoldersvw_yahoo_sinaban_count_upper["Japanese"]["yahoo_sinaban"] = "";
	if (count($fieldToolTipsvw_yahoo_sinaban_count_upper["Japanese"]))
		$tdatavw_yahoo_sinaban_count_upper[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsvw_yahoo_sinaban_count_upper[""] = array();
	$fieldToolTipsvw_yahoo_sinaban_count_upper[""] = array();
	$placeHoldersvw_yahoo_sinaban_count_upper[""] = array();
	$pageTitlesvw_yahoo_sinaban_count_upper[""] = array();
	$fieldLabelsvw_yahoo_sinaban_count_upper[""]["yahoo_sinaban"] = "Yahoo Sinaban";
	$fieldToolTipsvw_yahoo_sinaban_count_upper[""]["yahoo_sinaban"] = "";
	$placeHoldersvw_yahoo_sinaban_count_upper[""]["yahoo_sinaban"] = "";
	if (count($fieldToolTipsvw_yahoo_sinaban_count_upper[""]))
		$tdatavw_yahoo_sinaban_count_upper[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsvw_yahoo_sinaban_count_upper["English"] = array();
	$fieldToolTipsvw_yahoo_sinaban_count_upper["English"] = array();
	$placeHoldersvw_yahoo_sinaban_count_upper["English"] = array();
	$pageTitlesvw_yahoo_sinaban_count_upper["English"] = array();
	$fieldLabelsvw_yahoo_sinaban_count_upper["English"]["yahoo_sinaban"] = "Yahoo Sinaban";
	$fieldToolTipsvw_yahoo_sinaban_count_upper["English"]["yahoo_sinaban"] = "";
	$placeHoldersvw_yahoo_sinaban_count_upper["English"]["yahoo_sinaban"] = "";
	if (count($fieldToolTipsvw_yahoo_sinaban_count_upper["English"]))
		$tdatavw_yahoo_sinaban_count_upper[".isUseToolTips"] = true;
}


	$tdatavw_yahoo_sinaban_count_upper[".NCSearch"] = true;



$tdatavw_yahoo_sinaban_count_upper[".shortTableName"] = "vw_yahoo_sinaban_count_upper";
$tdatavw_yahoo_sinaban_count_upper[".nSecOptions"] = 0;
$tdatavw_yahoo_sinaban_count_upper[".recsPerRowPrint"] = 1;
$tdatavw_yahoo_sinaban_count_upper[".mainTableOwnerID"] = "";
$tdatavw_yahoo_sinaban_count_upper[".moveNext"] = 1;
$tdatavw_yahoo_sinaban_count_upper[".entityType"] = 0;

$tdatavw_yahoo_sinaban_count_upper[".strOriginalTableName"] = "vw_yahoo_sinaban_count_upper";

	



$tdatavw_yahoo_sinaban_count_upper[".showAddInPopup"] = false;

$tdatavw_yahoo_sinaban_count_upper[".showEditInPopup"] = false;

$tdatavw_yahoo_sinaban_count_upper[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatavw_yahoo_sinaban_count_upper[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatavw_yahoo_sinaban_count_upper[".fieldsForRegister"] = array();

$tdatavw_yahoo_sinaban_count_upper[".listAjax"] = false;

	$tdatavw_yahoo_sinaban_count_upper[".audit"] = true;

	$tdatavw_yahoo_sinaban_count_upper[".locking"] = false;



$tdatavw_yahoo_sinaban_count_upper[".list"] = true;



$tdatavw_yahoo_sinaban_count_upper[".reorderRecordsByHeader"] = true;





$tdatavw_yahoo_sinaban_count_upper[".exportTo"] = true;



$tdatavw_yahoo_sinaban_count_upper[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatavw_yahoo_sinaban_count_upper[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatavw_yahoo_sinaban_count_upper[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatavw_yahoo_sinaban_count_upper[".searchSaving"] = false;
//

$tdatavw_yahoo_sinaban_count_upper[".showSearchPanel"] = true;
		$tdatavw_yahoo_sinaban_count_upper[".flexibleSearch"] = true;

$tdatavw_yahoo_sinaban_count_upper[".isUseAjaxSuggest"] = true;

$tdatavw_yahoo_sinaban_count_upper[".rowHighlite"] = true;



																																																																						

$tdatavw_yahoo_sinaban_count_upper[".ajaxCodeSnippetAdded"] = false;

$tdatavw_yahoo_sinaban_count_upper[".buttonsAdded"] = false;

$tdatavw_yahoo_sinaban_count_upper[".addPageEvents"] = false;

// use timepicker for search panel
$tdatavw_yahoo_sinaban_count_upper[".isUseTimeForSearch"] = false;





$tdatavw_yahoo_sinaban_count_upper[".allSearchFields"] = array();
$tdatavw_yahoo_sinaban_count_upper[".filterFields"] = array();
$tdatavw_yahoo_sinaban_count_upper[".requiredSearchFields"] = array();

$tdatavw_yahoo_sinaban_count_upper[".allSearchFields"][] = "yahoo_sinaban";
	

$tdatavw_yahoo_sinaban_count_upper[".googleLikeFields"] = array();
$tdatavw_yahoo_sinaban_count_upper[".googleLikeFields"][] = "yahoo_sinaban";

$tdatavw_yahoo_sinaban_count_upper[".panelSearchFields"] = array();
$tdatavw_yahoo_sinaban_count_upper[".searchPanelOptions"] = array();
$tdatavw_yahoo_sinaban_count_upper[".panelSearchFields"][] = "yahoo_sinaban";
	
$tdatavw_yahoo_sinaban_count_upper[".advSearchFields"] = array();
$tdatavw_yahoo_sinaban_count_upper[".advSearchFields"][] = "yahoo_sinaban";

$tdatavw_yahoo_sinaban_count_upper[".tableType"] = "list";

$tdatavw_yahoo_sinaban_count_upper[".printerPageOrientation"] = 0;
$tdatavw_yahoo_sinaban_count_upper[".nPrinterPageScale"] = 100;

$tdatavw_yahoo_sinaban_count_upper[".nPrinterSplitRecords"] = 40;

$tdatavw_yahoo_sinaban_count_upper[".nPrinterPDFSplitRecords"] = 40;



$tdatavw_yahoo_sinaban_count_upper[".geocodingEnabled"] = false;





$tdatavw_yahoo_sinaban_count_upper[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatavw_yahoo_sinaban_count_upper[".pageSize"] = 20;

$tdatavw_yahoo_sinaban_count_upper[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatavw_yahoo_sinaban_count_upper[".strOrderBy"] = $tstrOrderBy;

$tdatavw_yahoo_sinaban_count_upper[".orderindexes"] = array();

$tdatavw_yahoo_sinaban_count_upper[".sqlHead"] = "SELECT yahoo_sinaban";
$tdatavw_yahoo_sinaban_count_upper[".sqlFrom"] = "FROM vw_yahoo_sinaban_count_upper";
$tdatavw_yahoo_sinaban_count_upper[".sqlWhereExpr"] = "";
$tdatavw_yahoo_sinaban_count_upper[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatavw_yahoo_sinaban_count_upper[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatavw_yahoo_sinaban_count_upper[".arrGroupsPerPage"] = $arrGPP;

$tdatavw_yahoo_sinaban_count_upper[".highlightSearchResults"] = true;

$tableKeysvw_yahoo_sinaban_count_upper = array();
$tdatavw_yahoo_sinaban_count_upper[".Keys"] = $tableKeysvw_yahoo_sinaban_count_upper;

$tdatavw_yahoo_sinaban_count_upper[".listFields"] = array();
$tdatavw_yahoo_sinaban_count_upper[".listFields"][] = "yahoo_sinaban";

$tdatavw_yahoo_sinaban_count_upper[".hideMobileList"] = array();


$tdatavw_yahoo_sinaban_count_upper[".viewFields"] = array();

$tdatavw_yahoo_sinaban_count_upper[".addFields"] = array();

$tdatavw_yahoo_sinaban_count_upper[".masterListFields"] = array();
$tdatavw_yahoo_sinaban_count_upper[".masterListFields"][] = "yahoo_sinaban";

$tdatavw_yahoo_sinaban_count_upper[".inlineAddFields"] = array();

$tdatavw_yahoo_sinaban_count_upper[".editFields"] = array();

$tdatavw_yahoo_sinaban_count_upper[".inlineEditFields"] = array();

$tdatavw_yahoo_sinaban_count_upper[".updateSelectedFields"] = array();


$tdatavw_yahoo_sinaban_count_upper[".exportFields"] = array();
$tdatavw_yahoo_sinaban_count_upper[".exportFields"][] = "yahoo_sinaban";

$tdatavw_yahoo_sinaban_count_upper[".importFields"] = array();

$tdatavw_yahoo_sinaban_count_upper[".printFields"] = array();

//	yahoo_sinaban
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "yahoo_sinaban";
	$fdata["GoodName"] = "yahoo_sinaban";
	$fdata["ownerTable"] = "vw_yahoo_sinaban_count_upper";
	$fdata["Label"] = GetFieldLabel("vw_yahoo_sinaban_count_upper","yahoo_sinaban");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "yahoo_sinaban";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "yahoo_sinaban";

	
	
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
			$edata["EditParams"].= " maxlength=11";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatavw_yahoo_sinaban_count_upper["yahoo_sinaban"] = $fdata;


$tables_data["vw_yahoo_sinaban_count_upper"]=&$tdatavw_yahoo_sinaban_count_upper;
$field_labels["vw_yahoo_sinaban_count_upper"] = &$fieldLabelsvw_yahoo_sinaban_count_upper;
$fieldToolTips["vw_yahoo_sinaban_count_upper"] = &$fieldToolTipsvw_yahoo_sinaban_count_upper;
$placeHolders["vw_yahoo_sinaban_count_upper"] = &$placeHoldersvw_yahoo_sinaban_count_upper;
$page_titles["vw_yahoo_sinaban_count_upper"] = &$pageTitlesvw_yahoo_sinaban_count_upper;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["vw_yahoo_sinaban_count_upper"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["vw_yahoo_sinaban_count_upper"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_vw_yahoo_sinaban_count_upper()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "yahoo_sinaban";
$proto0["m_strFrom"] = "FROM vw_yahoo_sinaban_count_upper";
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
	"m_strName" => "yahoo_sinaban",
	"m_strTable" => "vw_yahoo_sinaban_count_upper",
	"m_srcTableName" => "vw_yahoo_sinaban_count_upper"
));

$proto6["m_sql"] = "yahoo_sinaban";
$proto6["m_srcTableName"] = "vw_yahoo_sinaban_count_upper";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto8=array();
$proto8["m_link"] = "SQLL_MAIN";
			$proto9=array();
$proto9["m_strName"] = "vw_yahoo_sinaban_count_upper";
$proto9["m_srcTableName"] = "vw_yahoo_sinaban_count_upper";
$proto9["m_columns"] = array();
$proto9["m_columns"][] = "product_id";
$proto9["m_columns"][] = "yahoo_sinaban";
$obj = new SQLTable($proto9);

$proto8["m_table"] = $obj;
$proto8["m_sql"] = "vw_yahoo_sinaban_count_upper";
$proto8["m_alias"] = "";
$proto8["m_srcTableName"] = "vw_yahoo_sinaban_count_upper";
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
$proto0["m_srcTableName"]="vw_yahoo_sinaban_count_upper";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_vw_yahoo_sinaban_count_upper = createSqlQuery_vw_yahoo_sinaban_count_upper();


	
		;

	

$tdatavw_yahoo_sinaban_count_upper[".sqlquery"] = $queryData_vw_yahoo_sinaban_count_upper;

$tableEvents["vw_yahoo_sinaban_count_upper"] = new eventsBase;
$tdatavw_yahoo_sinaban_count_upper[".hasEvents"] = false;

?>