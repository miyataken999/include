<?php
require_once(getabspath("classes/cipherer.php"));




$tdatavw_hinbankaburi = array();
	$tdatavw_hinbankaburi[".truncateText"] = true;
	$tdatavw_hinbankaburi[".NumberOfChars"] = 80;
	$tdatavw_hinbankaburi[".ShortName"] = "vw_hinbankaburi";
	$tdatavw_hinbankaburi[".OwnerID"] = "";
	$tdatavw_hinbankaburi[".OriginalTable"] = "vw_hinbankaburi";

//	field labels
$fieldLabelsvw_hinbankaburi = array();
$fieldToolTipsvw_hinbankaburi = array();
$pageTitlesvw_hinbankaburi = array();
$placeHoldersvw_hinbankaburi = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsvw_hinbankaburi["Japanese"] = array();
	$fieldToolTipsvw_hinbankaburi["Japanese"] = array();
	$placeHoldersvw_hinbankaburi["Japanese"] = array();
	$pageTitlesvw_hinbankaburi["Japanese"] = array();
	$fieldLabelsvw_hinbankaburi["Japanese"]["product_id"] = "Product Id";
	$fieldToolTipsvw_hinbankaburi["Japanese"]["product_id"] = "";
	$placeHoldersvw_hinbankaburi["Japanese"]["product_id"] = "";
	$fieldLabelsvw_hinbankaburi["Japanese"]["yahoo_sinaban"] = "Yahoo Sinaban";
	$fieldToolTipsvw_hinbankaburi["Japanese"]["yahoo_sinaban"] = "";
	$placeHoldersvw_hinbankaburi["Japanese"]["yahoo_sinaban"] = "";
	if (count($fieldToolTipsvw_hinbankaburi["Japanese"]))
		$tdatavw_hinbankaburi[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsvw_hinbankaburi[""] = array();
	$fieldToolTipsvw_hinbankaburi[""] = array();
	$placeHoldersvw_hinbankaburi[""] = array();
	$pageTitlesvw_hinbankaburi[""] = array();
	$fieldLabelsvw_hinbankaburi[""]["product_id"] = "Product Id";
	$fieldToolTipsvw_hinbankaburi[""]["product_id"] = "";
	$placeHoldersvw_hinbankaburi[""]["product_id"] = "";
	$fieldLabelsvw_hinbankaburi[""]["yahoo_sinaban"] = "Yahoo Sinaban";
	$fieldToolTipsvw_hinbankaburi[""]["yahoo_sinaban"] = "";
	$placeHoldersvw_hinbankaburi[""]["yahoo_sinaban"] = "";
	if (count($fieldToolTipsvw_hinbankaburi[""]))
		$tdatavw_hinbankaburi[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsvw_hinbankaburi["English"] = array();
	$fieldToolTipsvw_hinbankaburi["English"] = array();
	$placeHoldersvw_hinbankaburi["English"] = array();
	$pageTitlesvw_hinbankaburi["English"] = array();
	$fieldLabelsvw_hinbankaburi["English"]["product_id"] = "Product Id";
	$fieldToolTipsvw_hinbankaburi["English"]["product_id"] = "";
	$placeHoldersvw_hinbankaburi["English"]["product_id"] = "";
	$fieldLabelsvw_hinbankaburi["English"]["yahoo_sinaban"] = "Yahoo Sinaban";
	$fieldToolTipsvw_hinbankaburi["English"]["yahoo_sinaban"] = "";
	$placeHoldersvw_hinbankaburi["English"]["yahoo_sinaban"] = "";
	if (count($fieldToolTipsvw_hinbankaburi["English"]))
		$tdatavw_hinbankaburi[".isUseToolTips"] = true;
}


	$tdatavw_hinbankaburi[".NCSearch"] = true;



$tdatavw_hinbankaburi[".shortTableName"] = "vw_hinbankaburi";
$tdatavw_hinbankaburi[".nSecOptions"] = 0;
$tdatavw_hinbankaburi[".recsPerRowPrint"] = 1;
$tdatavw_hinbankaburi[".mainTableOwnerID"] = "";
$tdatavw_hinbankaburi[".moveNext"] = 1;
$tdatavw_hinbankaburi[".entityType"] = 0;

$tdatavw_hinbankaburi[".strOriginalTableName"] = "vw_hinbankaburi";

	



$tdatavw_hinbankaburi[".showAddInPopup"] = false;

$tdatavw_hinbankaburi[".showEditInPopup"] = false;

$tdatavw_hinbankaburi[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatavw_hinbankaburi[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatavw_hinbankaburi[".fieldsForRegister"] = array();

$tdatavw_hinbankaburi[".listAjax"] = false;

	$tdatavw_hinbankaburi[".audit"] = false;

	$tdatavw_hinbankaburi[".locking"] = false;



$tdatavw_hinbankaburi[".list"] = true;



$tdatavw_hinbankaburi[".reorderRecordsByHeader"] = true;





$tdatavw_hinbankaburi[".exportTo"] = true;



$tdatavw_hinbankaburi[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatavw_hinbankaburi[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatavw_hinbankaburi[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatavw_hinbankaburi[".searchSaving"] = false;
//

$tdatavw_hinbankaburi[".showSearchPanel"] = true;
		$tdatavw_hinbankaburi[".flexibleSearch"] = true;

$tdatavw_hinbankaburi[".isUseAjaxSuggest"] = true;

$tdatavw_hinbankaburi[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatavw_hinbankaburi[".ajaxCodeSnippetAdded"] = false;

$tdatavw_hinbankaburi[".buttonsAdded"] = false;

$tdatavw_hinbankaburi[".addPageEvents"] = false;

// use timepicker for search panel
$tdatavw_hinbankaburi[".isUseTimeForSearch"] = false;





$tdatavw_hinbankaburi[".allSearchFields"] = array();
$tdatavw_hinbankaburi[".filterFields"] = array();
$tdatavw_hinbankaburi[".requiredSearchFields"] = array();

$tdatavw_hinbankaburi[".allSearchFields"][] = "product_id";
	$tdatavw_hinbankaburi[".allSearchFields"][] = "yahoo_sinaban";
	

$tdatavw_hinbankaburi[".googleLikeFields"] = array();
$tdatavw_hinbankaburi[".googleLikeFields"][] = "product_id";
$tdatavw_hinbankaburi[".googleLikeFields"][] = "yahoo_sinaban";


$tdatavw_hinbankaburi[".advSearchFields"] = array();
$tdatavw_hinbankaburi[".advSearchFields"][] = "product_id";
$tdatavw_hinbankaburi[".advSearchFields"][] = "yahoo_sinaban";

$tdatavw_hinbankaburi[".tableType"] = "list";

$tdatavw_hinbankaburi[".printerPageOrientation"] = 0;
$tdatavw_hinbankaburi[".nPrinterPageScale"] = 100;

$tdatavw_hinbankaburi[".nPrinterSplitRecords"] = 40;

$tdatavw_hinbankaburi[".nPrinterPDFSplitRecords"] = 40;



$tdatavw_hinbankaburi[".geocodingEnabled"] = false;





$tdatavw_hinbankaburi[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatavw_hinbankaburi[".pageSize"] = 20;

$tdatavw_hinbankaburi[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatavw_hinbankaburi[".strOrderBy"] = $tstrOrderBy;

$tdatavw_hinbankaburi[".orderindexes"] = array();

$tdatavw_hinbankaburi[".sqlHead"] = "SELECT product_id,  	yahoo_sinaban";
$tdatavw_hinbankaburi[".sqlFrom"] = "FROM vw_hinbankaburi";
$tdatavw_hinbankaburi[".sqlWhereExpr"] = "";
$tdatavw_hinbankaburi[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatavw_hinbankaburi[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatavw_hinbankaburi[".arrGroupsPerPage"] = $arrGPP;

$tdatavw_hinbankaburi[".highlightSearchResults"] = true;

$tableKeysvw_hinbankaburi = array();
$tdatavw_hinbankaburi[".Keys"] = $tableKeysvw_hinbankaburi;

$tdatavw_hinbankaburi[".listFields"] = array();
$tdatavw_hinbankaburi[".listFields"][] = "product_id";
$tdatavw_hinbankaburi[".listFields"][] = "yahoo_sinaban";

$tdatavw_hinbankaburi[".hideMobileList"] = array();


$tdatavw_hinbankaburi[".viewFields"] = array();
$tdatavw_hinbankaburi[".viewFields"][] = "product_id";
$tdatavw_hinbankaburi[".viewFields"][] = "yahoo_sinaban";

$tdatavw_hinbankaburi[".addFields"] = array();
$tdatavw_hinbankaburi[".addFields"][] = "product_id";
$tdatavw_hinbankaburi[".addFields"][] = "yahoo_sinaban";

$tdatavw_hinbankaburi[".masterListFields"] = array();
$tdatavw_hinbankaburi[".masterListFields"][] = "product_id";
$tdatavw_hinbankaburi[".masterListFields"][] = "yahoo_sinaban";

$tdatavw_hinbankaburi[".inlineAddFields"] = array();
$tdatavw_hinbankaburi[".inlineAddFields"][] = "product_id";
$tdatavw_hinbankaburi[".inlineAddFields"][] = "yahoo_sinaban";

$tdatavw_hinbankaburi[".editFields"] = array();
$tdatavw_hinbankaburi[".editFields"][] = "product_id";
$tdatavw_hinbankaburi[".editFields"][] = "yahoo_sinaban";

$tdatavw_hinbankaburi[".inlineEditFields"] = array();
$tdatavw_hinbankaburi[".inlineEditFields"][] = "product_id";
$tdatavw_hinbankaburi[".inlineEditFields"][] = "yahoo_sinaban";

$tdatavw_hinbankaburi[".updateSelectedFields"] = array();
$tdatavw_hinbankaburi[".updateSelectedFields"][] = "product_id";
$tdatavw_hinbankaburi[".updateSelectedFields"][] = "yahoo_sinaban";


$tdatavw_hinbankaburi[".exportFields"] = array();
$tdatavw_hinbankaburi[".exportFields"][] = "product_id";
$tdatavw_hinbankaburi[".exportFields"][] = "yahoo_sinaban";

$tdatavw_hinbankaburi[".importFields"] = array();
$tdatavw_hinbankaburi[".importFields"][] = "product_id";
$tdatavw_hinbankaburi[".importFields"][] = "yahoo_sinaban";

$tdatavw_hinbankaburi[".printFields"] = array();
$tdatavw_hinbankaburi[".printFields"][] = "product_id";
$tdatavw_hinbankaburi[".printFields"][] = "yahoo_sinaban";

//	product_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "product_id";
	$fdata["GoodName"] = "product_id";
	$fdata["ownerTable"] = "vw_hinbankaburi";
	$fdata["Label"] = GetFieldLabel("vw_hinbankaburi","product_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "product_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "product_id";

	
	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatavw_hinbankaburi["product_id"] = $fdata;
//	yahoo_sinaban
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "yahoo_sinaban";
	$fdata["GoodName"] = "yahoo_sinaban";
	$fdata["ownerTable"] = "vw_hinbankaburi";
	$fdata["Label"] = GetFieldLabel("vw_hinbankaburi","yahoo_sinaban");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

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




	$tdatavw_hinbankaburi["yahoo_sinaban"] = $fdata;


$tables_data["vw_hinbankaburi"]=&$tdatavw_hinbankaburi;
$field_labels["vw_hinbankaburi"] = &$fieldLabelsvw_hinbankaburi;
$fieldToolTips["vw_hinbankaburi"] = &$fieldToolTipsvw_hinbankaburi;
$placeHolders["vw_hinbankaburi"] = &$placeHoldersvw_hinbankaburi;
$page_titles["vw_hinbankaburi"] = &$pageTitlesvw_hinbankaburi;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["vw_hinbankaburi"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["vw_hinbankaburi"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_vw_hinbankaburi()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "product_id,  	yahoo_sinaban";
$proto0["m_strFrom"] = "FROM vw_hinbankaburi";
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
	"m_strName" => "product_id",
	"m_strTable" => "vw_hinbankaburi",
	"m_srcTableName" => "vw_hinbankaburi"
));

$proto6["m_sql"] = "product_id";
$proto6["m_srcTableName"] = "vw_hinbankaburi";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_sinaban",
	"m_strTable" => "vw_hinbankaburi",
	"m_srcTableName" => "vw_hinbankaburi"
));

$proto8["m_sql"] = "yahoo_sinaban";
$proto8["m_srcTableName"] = "vw_hinbankaburi";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "vw_hinbankaburi";
$proto11["m_srcTableName"] = "vw_hinbankaburi";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "product_id";
$proto11["m_columns"][] = "yahoo_sinaban";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "vw_hinbankaburi";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "vw_hinbankaburi";
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
$proto0["m_srcTableName"]="vw_hinbankaburi";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_vw_hinbankaburi = createSqlQuery_vw_hinbankaburi();


	
		;

		

$tdatavw_hinbankaburi[".sqlquery"] = $queryData_vw_hinbankaburi;

$tableEvents["vw_hinbankaburi"] = new eventsBase;
$tdatavw_hinbankaburi[".hasEvents"] = false;

?>