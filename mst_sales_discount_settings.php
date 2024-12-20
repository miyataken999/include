<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamst_sales_discount = array();
	$tdatamst_sales_discount[".truncateText"] = true;
	$tdatamst_sales_discount[".NumberOfChars"] = 80;
	$tdatamst_sales_discount[".ShortName"] = "mst_sales_discount";
	$tdatamst_sales_discount[".OwnerID"] = "";
	$tdatamst_sales_discount[".OriginalTable"] = "mst_sales_discount";

//	field labels
$fieldLabelsmst_sales_discount = array();
$fieldToolTipsmst_sales_discount = array();
$pageTitlesmst_sales_discount = array();
$placeHoldersmst_sales_discount = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmst_sales_discount["Japanese"] = array();
	$fieldToolTipsmst_sales_discount["Japanese"] = array();
	$placeHoldersmst_sales_discount["Japanese"] = array();
	$pageTitlesmst_sales_discount["Japanese"] = array();
	$fieldLabelsmst_sales_discount["Japanese"]["discount_base"] = "割引ベース";
	$fieldToolTipsmst_sales_discount["Japanese"]["discount_base"] = "";
	$placeHoldersmst_sales_discount["Japanese"]["discount_base"] = "";
	$fieldLabelsmst_sales_discount["Japanese"]["count"] = "日数";
	$fieldToolTipsmst_sales_discount["Japanese"]["count"] = "";
	$placeHoldersmst_sales_discount["Japanese"]["count"] = "";
	$fieldLabelsmst_sales_discount["Japanese"]["discount"] = "割引率";
	$fieldToolTipsmst_sales_discount["Japanese"]["discount"] = "";
	$placeHoldersmst_sales_discount["Japanese"]["discount"] = "";
	if (count($fieldToolTipsmst_sales_discount["Japanese"]))
		$tdatamst_sales_discount[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmst_sales_discount[""] = array();
	$fieldToolTipsmst_sales_discount[""] = array();
	$placeHoldersmst_sales_discount[""] = array();
	$pageTitlesmst_sales_discount[""] = array();
	$fieldLabelsmst_sales_discount[""]["discount_base"] = "Discount Base";
	$fieldToolTipsmst_sales_discount[""]["discount_base"] = "";
	$placeHoldersmst_sales_discount[""]["discount_base"] = "";
	$fieldLabelsmst_sales_discount[""]["count"] = "Count";
	$fieldToolTipsmst_sales_discount[""]["count"] = "";
	$placeHoldersmst_sales_discount[""]["count"] = "";
	$fieldLabelsmst_sales_discount[""]["discount"] = "Discount";
	$fieldToolTipsmst_sales_discount[""]["discount"] = "";
	$placeHoldersmst_sales_discount[""]["discount"] = "";
	if (count($fieldToolTipsmst_sales_discount[""]))
		$tdatamst_sales_discount[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmst_sales_discount["English"] = array();
	$fieldToolTipsmst_sales_discount["English"] = array();
	$placeHoldersmst_sales_discount["English"] = array();
	$pageTitlesmst_sales_discount["English"] = array();
	$fieldLabelsmst_sales_discount["English"]["discount_base"] = "Discount Base";
	$fieldToolTipsmst_sales_discount["English"]["discount_base"] = "";
	$placeHoldersmst_sales_discount["English"]["discount_base"] = "";
	$fieldLabelsmst_sales_discount["English"]["count"] = "Count";
	$fieldToolTipsmst_sales_discount["English"]["count"] = "";
	$placeHoldersmst_sales_discount["English"]["count"] = "";
	$fieldLabelsmst_sales_discount["English"]["discount"] = "Discount";
	$fieldToolTipsmst_sales_discount["English"]["discount"] = "";
	$placeHoldersmst_sales_discount["English"]["discount"] = "";
	if (count($fieldToolTipsmst_sales_discount["English"]))
		$tdatamst_sales_discount[".isUseToolTips"] = true;
}


	$tdatamst_sales_discount[".NCSearch"] = true;



$tdatamst_sales_discount[".shortTableName"] = "mst_sales_discount";
$tdatamst_sales_discount[".nSecOptions"] = 0;
$tdatamst_sales_discount[".recsPerRowPrint"] = 1;
$tdatamst_sales_discount[".mainTableOwnerID"] = "";
$tdatamst_sales_discount[".moveNext"] = 1;
$tdatamst_sales_discount[".entityType"] = 0;

$tdatamst_sales_discount[".strOriginalTableName"] = "mst_sales_discount";

	



$tdatamst_sales_discount[".showAddInPopup"] = false;

$tdatamst_sales_discount[".showEditInPopup"] = false;

$tdatamst_sales_discount[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamst_sales_discount[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamst_sales_discount[".fieldsForRegister"] = array();

$tdatamst_sales_discount[".listAjax"] = false;

	$tdatamst_sales_discount[".audit"] = true;

	$tdatamst_sales_discount[".locking"] = false;



$tdatamst_sales_discount[".list"] = true;



$tdatamst_sales_discount[".reorderRecordsByHeader"] = true;





$tdatamst_sales_discount[".exportTo"] = true;



$tdatamst_sales_discount[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamst_sales_discount[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamst_sales_discount[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamst_sales_discount[".searchSaving"] = false;
//

$tdatamst_sales_discount[".showSearchPanel"] = true;
		$tdatamst_sales_discount[".flexibleSearch"] = true;

$tdatamst_sales_discount[".isUseAjaxSuggest"] = true;

$tdatamst_sales_discount[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatamst_sales_discount[".ajaxCodeSnippetAdded"] = false;

$tdatamst_sales_discount[".buttonsAdded"] = false;

$tdatamst_sales_discount[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamst_sales_discount[".isUseTimeForSearch"] = false;





$tdatamst_sales_discount[".allSearchFields"] = array();
$tdatamst_sales_discount[".filterFields"] = array();
$tdatamst_sales_discount[".requiredSearchFields"] = array();

$tdatamst_sales_discount[".allSearchFields"][] = "discount_base";
	$tdatamst_sales_discount[".allSearchFields"][] = "count";
	$tdatamst_sales_discount[".allSearchFields"][] = "discount";
	

$tdatamst_sales_discount[".googleLikeFields"] = array();
$tdatamst_sales_discount[".googleLikeFields"][] = "discount_base";
$tdatamst_sales_discount[".googleLikeFields"][] = "count";
$tdatamst_sales_discount[".googleLikeFields"][] = "discount";


$tdatamst_sales_discount[".advSearchFields"] = array();
$tdatamst_sales_discount[".advSearchFields"][] = "discount_base";
$tdatamst_sales_discount[".advSearchFields"][] = "count";
$tdatamst_sales_discount[".advSearchFields"][] = "discount";

$tdatamst_sales_discount[".tableType"] = "list";

$tdatamst_sales_discount[".printerPageOrientation"] = 0;
$tdatamst_sales_discount[".nPrinterPageScale"] = 100;

$tdatamst_sales_discount[".nPrinterSplitRecords"] = 40;

$tdatamst_sales_discount[".nPrinterPDFSplitRecords"] = 40;



$tdatamst_sales_discount[".geocodingEnabled"] = false;





$tdatamst_sales_discount[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamst_sales_discount[".pageSize"] = 500;

$tdatamst_sales_discount[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `discount_base`, `count`";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamst_sales_discount[".strOrderBy"] = $tstrOrderBy;

$tdatamst_sales_discount[".orderindexes"] = array();
$tdatamst_sales_discount[".orderindexes"][] = array(1, (1 ? "ASC" : "DESC"), "`discount_base`");
$tdatamst_sales_discount[".orderindexes"][] = array(2, (1 ? "ASC" : "DESC"), "`count`");

$tdatamst_sales_discount[".sqlHead"] = "SELECT `discount_base`,  `count`,  `discount`";
$tdatamst_sales_discount[".sqlFrom"] = "FROM `mst_sales_discount`";
$tdatamst_sales_discount[".sqlWhereExpr"] = "";
$tdatamst_sales_discount[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamst_sales_discount[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamst_sales_discount[".arrGroupsPerPage"] = $arrGPP;

$tdatamst_sales_discount[".highlightSearchResults"] = true;

$tableKeysmst_sales_discount = array();
$tdatamst_sales_discount[".Keys"] = $tableKeysmst_sales_discount;

$tdatamst_sales_discount[".listFields"] = array();
$tdatamst_sales_discount[".listFields"][] = "discount_base";
$tdatamst_sales_discount[".listFields"][] = "count";
$tdatamst_sales_discount[".listFields"][] = "discount";

$tdatamst_sales_discount[".hideMobileList"] = array();


$tdatamst_sales_discount[".viewFields"] = array();

$tdatamst_sales_discount[".addFields"] = array();

$tdatamst_sales_discount[".masterListFields"] = array();
$tdatamst_sales_discount[".masterListFields"][] = "discount_base";
$tdatamst_sales_discount[".masterListFields"][] = "count";
$tdatamst_sales_discount[".masterListFields"][] = "discount";

$tdatamst_sales_discount[".inlineAddFields"] = array();

$tdatamst_sales_discount[".editFields"] = array();

$tdatamst_sales_discount[".inlineEditFields"] = array();

$tdatamst_sales_discount[".updateSelectedFields"] = array();


$tdatamst_sales_discount[".exportFields"] = array();
$tdatamst_sales_discount[".exportFields"][] = "discount_base";
$tdatamst_sales_discount[".exportFields"][] = "count";
$tdatamst_sales_discount[".exportFields"][] = "discount";

$tdatamst_sales_discount[".importFields"] = array();

$tdatamst_sales_discount[".printFields"] = array();

//	discount_base
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "discount_base";
	$fdata["GoodName"] = "discount_base";
	$fdata["ownerTable"] = "mst_sales_discount";
	$fdata["Label"] = GetFieldLabel("mst_sales_discount","discount_base");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "discount_base";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`discount_base`";

	
	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatamst_sales_discount["discount_base"] = $fdata;
//	count
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "count";
	$fdata["GoodName"] = "count";
	$fdata["ownerTable"] = "mst_sales_discount";
	$fdata["Label"] = GetFieldLabel("mst_sales_discount","count");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "count";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`count`";

	
	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatamst_sales_discount["count"] = $fdata;
//	discount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "discount";
	$fdata["GoodName"] = "discount";
	$fdata["ownerTable"] = "mst_sales_discount";
	$fdata["Label"] = GetFieldLabel("mst_sales_discount","discount");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "discount";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`discount`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

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




	$tdatamst_sales_discount["discount"] = $fdata;


$tables_data["mst_sales_discount"]=&$tdatamst_sales_discount;
$field_labels["mst_sales_discount"] = &$fieldLabelsmst_sales_discount;
$fieldToolTips["mst_sales_discount"] = &$fieldToolTipsmst_sales_discount;
$placeHolders["mst_sales_discount"] = &$placeHoldersmst_sales_discount;
$page_titles["mst_sales_discount"] = &$pageTitlesmst_sales_discount;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mst_sales_discount"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mst_sales_discount"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mst_sales_discount()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`discount_base`,  `count`,  `discount`";
$proto0["m_strFrom"] = "FROM `mst_sales_discount`";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY `discount_base`, `count`";
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
	"m_strName" => "discount_base",
	"m_strTable" => "mst_sales_discount",
	"m_srcTableName" => "mst_sales_discount"
));

$proto6["m_sql"] = "`discount_base`";
$proto6["m_srcTableName"] = "mst_sales_discount";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "count",
	"m_strTable" => "mst_sales_discount",
	"m_srcTableName" => "mst_sales_discount"
));

$proto8["m_sql"] = "`count`";
$proto8["m_srcTableName"] = "mst_sales_discount";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "discount",
	"m_strTable" => "mst_sales_discount",
	"m_srcTableName" => "mst_sales_discount"
));

$proto10["m_sql"] = "`discount`";
$proto10["m_srcTableName"] = "mst_sales_discount";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "mst_sales_discount";
$proto13["m_srcTableName"] = "mst_sales_discount";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "discount_base";
$proto13["m_columns"][] = "count";
$proto13["m_columns"][] = "discount";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "`mst_sales_discount`";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "mst_sales_discount";
$proto14=array();
$proto14["m_sql"] = "";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = false;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

$proto12["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto12);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto16=array();
						$obj = new SQLField(array(
	"m_strName" => "discount_base",
	"m_strTable" => "mst_sales_discount",
	"m_srcTableName" => "mst_sales_discount"
));

$proto16["m_column"]=$obj;
$proto16["m_bAsc"] = 1;
$proto16["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto16);

$proto0["m_orderby"][]=$obj;					
												$proto18=array();
						$obj = new SQLField(array(
	"m_strName" => "count",
	"m_strTable" => "mst_sales_discount",
	"m_srcTableName" => "mst_sales_discount"
));

$proto18["m_column"]=$obj;
$proto18["m_bAsc"] = 1;
$proto18["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto18);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="mst_sales_discount";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mst_sales_discount = createSqlQuery_mst_sales_discount();


	
		;

			

$tdatamst_sales_discount[".sqlquery"] = $queryData_mst_sales_discount;

$tableEvents["mst_sales_discount"] = new eventsBase;
$tdatamst_sales_discount[".hasEvents"] = false;

?>