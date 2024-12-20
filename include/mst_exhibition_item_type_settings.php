<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamst_exhibition_item_type = array();
	$tdatamst_exhibition_item_type[".truncateText"] = true;
	$tdatamst_exhibition_item_type[".NumberOfChars"] = 80;
	$tdatamst_exhibition_item_type[".ShortName"] = "mst_exhibition_item_type";
	$tdatamst_exhibition_item_type[".OwnerID"] = "";
	$tdatamst_exhibition_item_type[".OriginalTable"] = "mst_exhibition_item_type";

//	field labels
$fieldLabelsmst_exhibition_item_type = array();
$fieldToolTipsmst_exhibition_item_type = array();
$pageTitlesmst_exhibition_item_type = array();
$placeHoldersmst_exhibition_item_type = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmst_exhibition_item_type["Japanese"] = array();
	$fieldToolTipsmst_exhibition_item_type["Japanese"] = array();
	$placeHoldersmst_exhibition_item_type["Japanese"] = array();
	$pageTitlesmst_exhibition_item_type["Japanese"] = array();
	$fieldLabelsmst_exhibition_item_type["Japanese"]["value"] = "Value";
	$fieldToolTipsmst_exhibition_item_type["Japanese"]["value"] = "";
	$placeHoldersmst_exhibition_item_type["Japanese"]["value"] = "";
	$fieldLabelsmst_exhibition_item_type["Japanese"]["name"] = "Name";
	$fieldToolTipsmst_exhibition_item_type["Japanese"]["name"] = "";
	$placeHoldersmst_exhibition_item_type["Japanese"]["name"] = "";
	if (count($fieldToolTipsmst_exhibition_item_type["Japanese"]))
		$tdatamst_exhibition_item_type[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmst_exhibition_item_type[""] = array();
	$fieldToolTipsmst_exhibition_item_type[""] = array();
	$placeHoldersmst_exhibition_item_type[""] = array();
	$pageTitlesmst_exhibition_item_type[""] = array();
	$fieldLabelsmst_exhibition_item_type[""]["value"] = "Value";
	$fieldToolTipsmst_exhibition_item_type[""]["value"] = "";
	$placeHoldersmst_exhibition_item_type[""]["value"] = "";
	$fieldLabelsmst_exhibition_item_type[""]["name"] = "Name";
	$fieldToolTipsmst_exhibition_item_type[""]["name"] = "";
	$placeHoldersmst_exhibition_item_type[""]["name"] = "";
	if (count($fieldToolTipsmst_exhibition_item_type[""]))
		$tdatamst_exhibition_item_type[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmst_exhibition_item_type["English"] = array();
	$fieldToolTipsmst_exhibition_item_type["English"] = array();
	$placeHoldersmst_exhibition_item_type["English"] = array();
	$pageTitlesmst_exhibition_item_type["English"] = array();
	$fieldLabelsmst_exhibition_item_type["English"]["value"] = "Value";
	$fieldToolTipsmst_exhibition_item_type["English"]["value"] = "";
	$placeHoldersmst_exhibition_item_type["English"]["value"] = "";
	$fieldLabelsmst_exhibition_item_type["English"]["name"] = "Name";
	$fieldToolTipsmst_exhibition_item_type["English"]["name"] = "";
	$placeHoldersmst_exhibition_item_type["English"]["name"] = "";
	if (count($fieldToolTipsmst_exhibition_item_type["English"]))
		$tdatamst_exhibition_item_type[".isUseToolTips"] = true;
}


	$tdatamst_exhibition_item_type[".NCSearch"] = true;



$tdatamst_exhibition_item_type[".shortTableName"] = "mst_exhibition_item_type";
$tdatamst_exhibition_item_type[".nSecOptions"] = 0;
$tdatamst_exhibition_item_type[".recsPerRowPrint"] = 1;
$tdatamst_exhibition_item_type[".mainTableOwnerID"] = "";
$tdatamst_exhibition_item_type[".moveNext"] = 1;
$tdatamst_exhibition_item_type[".entityType"] = 0;

$tdatamst_exhibition_item_type[".strOriginalTableName"] = "mst_exhibition_item_type";

	



$tdatamst_exhibition_item_type[".showAddInPopup"] = false;

$tdatamst_exhibition_item_type[".showEditInPopup"] = false;

$tdatamst_exhibition_item_type[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamst_exhibition_item_type[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamst_exhibition_item_type[".fieldsForRegister"] = array();

$tdatamst_exhibition_item_type[".listAjax"] = false;

	$tdatamst_exhibition_item_type[".audit"] = true;

	$tdatamst_exhibition_item_type[".locking"] = false;



$tdatamst_exhibition_item_type[".list"] = true;



$tdatamst_exhibition_item_type[".reorderRecordsByHeader"] = true;




$tdatamst_exhibition_item_type[".import"] = true;

$tdatamst_exhibition_item_type[".exportTo"] = true;

$tdatamst_exhibition_item_type[".printFriendly"] = true;


$tdatamst_exhibition_item_type[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamst_exhibition_item_type[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamst_exhibition_item_type[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamst_exhibition_item_type[".searchSaving"] = false;
//

$tdatamst_exhibition_item_type[".showSearchPanel"] = true;
		$tdatamst_exhibition_item_type[".flexibleSearch"] = true;

$tdatamst_exhibition_item_type[".isUseAjaxSuggest"] = true;

$tdatamst_exhibition_item_type[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatamst_exhibition_item_type[".ajaxCodeSnippetAdded"] = false;

$tdatamst_exhibition_item_type[".buttonsAdded"] = false;

$tdatamst_exhibition_item_type[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamst_exhibition_item_type[".isUseTimeForSearch"] = false;





$tdatamst_exhibition_item_type[".allSearchFields"] = array();
$tdatamst_exhibition_item_type[".filterFields"] = array();
$tdatamst_exhibition_item_type[".requiredSearchFields"] = array();

$tdatamst_exhibition_item_type[".allSearchFields"][] = "value";
	$tdatamst_exhibition_item_type[".allSearchFields"][] = "name";
	

$tdatamst_exhibition_item_type[".googleLikeFields"] = array();
$tdatamst_exhibition_item_type[".googleLikeFields"][] = "value";
$tdatamst_exhibition_item_type[".googleLikeFields"][] = "name";


$tdatamst_exhibition_item_type[".advSearchFields"] = array();
$tdatamst_exhibition_item_type[".advSearchFields"][] = "value";
$tdatamst_exhibition_item_type[".advSearchFields"][] = "name";

$tdatamst_exhibition_item_type[".tableType"] = "list";

$tdatamst_exhibition_item_type[".printerPageOrientation"] = 0;
$tdatamst_exhibition_item_type[".nPrinterPageScale"] = 100;

$tdatamst_exhibition_item_type[".nPrinterSplitRecords"] = 40;

$tdatamst_exhibition_item_type[".nPrinterPDFSplitRecords"] = 40;



$tdatamst_exhibition_item_type[".geocodingEnabled"] = false;





$tdatamst_exhibition_item_type[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamst_exhibition_item_type[".pageSize"] = 20;

$tdatamst_exhibition_item_type[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamst_exhibition_item_type[".strOrderBy"] = $tstrOrderBy;

$tdatamst_exhibition_item_type[".orderindexes"] = array();

$tdatamst_exhibition_item_type[".sqlHead"] = "SELECT `value`,  	`name`";
$tdatamst_exhibition_item_type[".sqlFrom"] = "FROM `mst_exhibition_item_type`";
$tdatamst_exhibition_item_type[".sqlWhereExpr"] = "";
$tdatamst_exhibition_item_type[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamst_exhibition_item_type[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamst_exhibition_item_type[".arrGroupsPerPage"] = $arrGPP;

$tdatamst_exhibition_item_type[".highlightSearchResults"] = true;

$tableKeysmst_exhibition_item_type = array();
$tdatamst_exhibition_item_type[".Keys"] = $tableKeysmst_exhibition_item_type;

$tdatamst_exhibition_item_type[".listFields"] = array();
$tdatamst_exhibition_item_type[".listFields"][] = "value";
$tdatamst_exhibition_item_type[".listFields"][] = "name";

$tdatamst_exhibition_item_type[".hideMobileList"] = array();


$tdatamst_exhibition_item_type[".viewFields"] = array();

$tdatamst_exhibition_item_type[".addFields"] = array();

$tdatamst_exhibition_item_type[".masterListFields"] = array();
$tdatamst_exhibition_item_type[".masterListFields"][] = "value";
$tdatamst_exhibition_item_type[".masterListFields"][] = "name";

$tdatamst_exhibition_item_type[".inlineAddFields"] = array();

$tdatamst_exhibition_item_type[".editFields"] = array();

$tdatamst_exhibition_item_type[".inlineEditFields"] = array();

$tdatamst_exhibition_item_type[".updateSelectedFields"] = array();


$tdatamst_exhibition_item_type[".exportFields"] = array();
$tdatamst_exhibition_item_type[".exportFields"][] = "value";
$tdatamst_exhibition_item_type[".exportFields"][] = "name";

$tdatamst_exhibition_item_type[".importFields"] = array();
$tdatamst_exhibition_item_type[".importFields"][] = "value";
$tdatamst_exhibition_item_type[".importFields"][] = "name";

$tdatamst_exhibition_item_type[".printFields"] = array();
$tdatamst_exhibition_item_type[".printFields"][] = "value";
$tdatamst_exhibition_item_type[".printFields"][] = "name";

//	value
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "value";
	$fdata["GoodName"] = "value";
	$fdata["ownerTable"] = "mst_exhibition_item_type";
	$fdata["Label"] = GetFieldLabel("mst_exhibition_item_type","value");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "value";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`value`";

	
	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatamst_exhibition_item_type["value"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "mst_exhibition_item_type";
	$fdata["Label"] = GetFieldLabel("mst_exhibition_item_type","name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatamst_exhibition_item_type["name"] = $fdata;


$tables_data["mst_exhibition_item_type"]=&$tdatamst_exhibition_item_type;
$field_labels["mst_exhibition_item_type"] = &$fieldLabelsmst_exhibition_item_type;
$fieldToolTips["mst_exhibition_item_type"] = &$fieldToolTipsmst_exhibition_item_type;
$placeHolders["mst_exhibition_item_type"] = &$placeHoldersmst_exhibition_item_type;
$page_titles["mst_exhibition_item_type"] = &$pageTitlesmst_exhibition_item_type;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mst_exhibition_item_type"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mst_exhibition_item_type"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mst_exhibition_item_type()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`value`,  	`name`";
$proto0["m_strFrom"] = "FROM `mst_exhibition_item_type`";
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
	"m_strName" => "value",
	"m_strTable" => "mst_exhibition_item_type",
	"m_srcTableName" => "mst_exhibition_item_type"
));

$proto6["m_sql"] = "`value`";
$proto6["m_srcTableName"] = "mst_exhibition_item_type";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "mst_exhibition_item_type",
	"m_srcTableName" => "mst_exhibition_item_type"
));

$proto8["m_sql"] = "`name`";
$proto8["m_srcTableName"] = "mst_exhibition_item_type";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "mst_exhibition_item_type";
$proto11["m_srcTableName"] = "mst_exhibition_item_type";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "value";
$proto11["m_columns"][] = "name";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "`mst_exhibition_item_type`";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "mst_exhibition_item_type";
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
$proto0["m_srcTableName"]="mst_exhibition_item_type";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mst_exhibition_item_type = createSqlQuery_mst_exhibition_item_type();


	
		;

		

$tdatamst_exhibition_item_type[".sqlquery"] = $queryData_mst_exhibition_item_type;

$tableEvents["mst_exhibition_item_type"] = new eventsBase;
$tdatamst_exhibition_item_type[".hasEvents"] = false;

?>