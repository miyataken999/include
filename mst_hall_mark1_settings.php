<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamst_hall_mark1 = array();
	$tdatamst_hall_mark1[".truncateText"] = true;
	$tdatamst_hall_mark1[".NumberOfChars"] = 80;
	$tdatamst_hall_mark1[".ShortName"] = "mst_hall_mark1";
	$tdatamst_hall_mark1[".OwnerID"] = "";
	$tdatamst_hall_mark1[".OriginalTable"] = "mst_hall_mark";

//	field labels
$fieldLabelsmst_hall_mark1 = array();
$fieldToolTipsmst_hall_mark1 = array();
$pageTitlesmst_hall_mark1 = array();
$placeHoldersmst_hall_mark1 = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmst_hall_mark1["Japanese"] = array();
	$fieldToolTipsmst_hall_mark1["Japanese"] = array();
	$placeHoldersmst_hall_mark1["Japanese"] = array();
	$pageTitlesmst_hall_mark1["Japanese"] = array();
	$fieldLabelsmst_hall_mark1["Japanese"]["name"] = "Name";
	$fieldToolTipsmst_hall_mark1["Japanese"]["name"] = "";
	$placeHoldersmst_hall_mark1["Japanese"]["name"] = "";
	if (count($fieldToolTipsmst_hall_mark1["Japanese"]))
		$tdatamst_hall_mark1[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmst_hall_mark1[""] = array();
	$fieldToolTipsmst_hall_mark1[""] = array();
	$placeHoldersmst_hall_mark1[""] = array();
	$pageTitlesmst_hall_mark1[""] = array();
	if (count($fieldToolTipsmst_hall_mark1[""]))
		$tdatamst_hall_mark1[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmst_hall_mark1["English"] = array();
	$fieldToolTipsmst_hall_mark1["English"] = array();
	$placeHoldersmst_hall_mark1["English"] = array();
	$pageTitlesmst_hall_mark1["English"] = array();
	if (count($fieldToolTipsmst_hall_mark1["English"]))
		$tdatamst_hall_mark1[".isUseToolTips"] = true;
}


	$tdatamst_hall_mark1[".NCSearch"] = true;



$tdatamst_hall_mark1[".shortTableName"] = "mst_hall_mark1";
$tdatamst_hall_mark1[".nSecOptions"] = 0;
$tdatamst_hall_mark1[".recsPerRowPrint"] = 1;
$tdatamst_hall_mark1[".mainTableOwnerID"] = "";
$tdatamst_hall_mark1[".moveNext"] = 1;
$tdatamst_hall_mark1[".entityType"] = 1;

$tdatamst_hall_mark1[".strOriginalTableName"] = "mst_hall_mark";

	



$tdatamst_hall_mark1[".showAddInPopup"] = false;

$tdatamst_hall_mark1[".showEditInPopup"] = false;

$tdatamst_hall_mark1[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamst_hall_mark1[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamst_hall_mark1[".fieldsForRegister"] = array();

$tdatamst_hall_mark1[".listAjax"] = false;

	$tdatamst_hall_mark1[".audit"] = true;

	$tdatamst_hall_mark1[".locking"] = false;



$tdatamst_hall_mark1[".list"] = true;



$tdatamst_hall_mark1[".reorderRecordsByHeader"] = true;



$tdatamst_hall_mark1[".inlineAdd"] = true;

$tdatamst_hall_mark1[".import"] = true;

$tdatamst_hall_mark1[".exportTo"] = true;



$tdatamst_hall_mark1[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamst_hall_mark1[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamst_hall_mark1[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamst_hall_mark1[".searchSaving"] = false;
//

$tdatamst_hall_mark1[".showSearchPanel"] = true;
		$tdatamst_hall_mark1[".flexibleSearch"] = true;

$tdatamst_hall_mark1[".isUseAjaxSuggest"] = true;

$tdatamst_hall_mark1[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatamst_hall_mark1[".ajaxCodeSnippetAdded"] = false;

$tdatamst_hall_mark1[".buttonsAdded"] = false;

$tdatamst_hall_mark1[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamst_hall_mark1[".isUseTimeForSearch"] = false;





$tdatamst_hall_mark1[".allSearchFields"] = array();
$tdatamst_hall_mark1[".filterFields"] = array();
$tdatamst_hall_mark1[".requiredSearchFields"] = array();

$tdatamst_hall_mark1[".allSearchFields"][] = "name";
	

$tdatamst_hall_mark1[".googleLikeFields"] = array();
$tdatamst_hall_mark1[".googleLikeFields"][] = "name";


$tdatamst_hall_mark1[".advSearchFields"] = array();
$tdatamst_hall_mark1[".advSearchFields"][] = "name";

$tdatamst_hall_mark1[".tableType"] = "list";

$tdatamst_hall_mark1[".printerPageOrientation"] = 0;
$tdatamst_hall_mark1[".nPrinterPageScale"] = 100;

$tdatamst_hall_mark1[".nPrinterSplitRecords"] = 40;

$tdatamst_hall_mark1[".nPrinterPDFSplitRecords"] = 40;



$tdatamst_hall_mark1[".geocodingEnabled"] = false;





$tdatamst_hall_mark1[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamst_hall_mark1[".pageSize"] = 100;

$tdatamst_hall_mark1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamst_hall_mark1[".strOrderBy"] = $tstrOrderBy;

$tdatamst_hall_mark1[".orderindexes"] = array();

$tdatamst_hall_mark1[".sqlHead"] = "SELECT mst_hall_mark.name";
$tdatamst_hall_mark1[".sqlFrom"] = "FROM mst_hall_mark  INNER JOIN mst_country_of_origin ON mst_country_of_origin.country_group = mst_hall_mark.country_of_origin";
$tdatamst_hall_mark1[".sqlWhereExpr"] = "";
$tdatamst_hall_mark1[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamst_hall_mark1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamst_hall_mark1[".arrGroupsPerPage"] = $arrGPP;

$tdatamst_hall_mark1[".highlightSearchResults"] = true;

$tableKeysmst_hall_mark1 = array();
$tdatamst_hall_mark1[".Keys"] = $tableKeysmst_hall_mark1;

$tdatamst_hall_mark1[".listFields"] = array();
$tdatamst_hall_mark1[".listFields"][] = "name";

$tdatamst_hall_mark1[".hideMobileList"] = array();


$tdatamst_hall_mark1[".viewFields"] = array();

$tdatamst_hall_mark1[".addFields"] = array();

$tdatamst_hall_mark1[".masterListFields"] = array();
$tdatamst_hall_mark1[".masterListFields"][] = "name";

$tdatamst_hall_mark1[".inlineAddFields"] = array();
$tdatamst_hall_mark1[".inlineAddFields"][] = "name";

$tdatamst_hall_mark1[".editFields"] = array();

$tdatamst_hall_mark1[".inlineEditFields"] = array();
$tdatamst_hall_mark1[".inlineEditFields"][] = "name";

$tdatamst_hall_mark1[".updateSelectedFields"] = array();


$tdatamst_hall_mark1[".exportFields"] = array();
$tdatamst_hall_mark1[".exportFields"][] = "name";

$tdatamst_hall_mark1[".importFields"] = array();
$tdatamst_hall_mark1[".importFields"][] = "name";

$tdatamst_hall_mark1[".printFields"] = array();

//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "mst_hall_mark";
	$fdata["Label"] = GetFieldLabel("mst_hall_mark1","name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mst_hall_mark.name";

	
	
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




	$tdatamst_hall_mark1["name"] = $fdata;


$tables_data["mst_hall_mark1"]=&$tdatamst_hall_mark1;
$field_labels["mst_hall_mark1"] = &$fieldLabelsmst_hall_mark1;
$fieldToolTips["mst_hall_mark1"] = &$fieldToolTipsmst_hall_mark1;
$placeHolders["mst_hall_mark1"] = &$placeHoldersmst_hall_mark1;
$page_titles["mst_hall_mark1"] = &$pageTitlesmst_hall_mark1;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mst_hall_mark1"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mst_hall_mark1"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mst_hall_mark1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "mst_hall_mark.name";
$proto0["m_strFrom"] = "FROM mst_hall_mark  INNER JOIN mst_country_of_origin ON mst_country_of_origin.country_group = mst_hall_mark.country_of_origin";
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
	"m_strName" => "name",
	"m_strTable" => "mst_hall_mark",
	"m_srcTableName" => "mst_hall_mark1"
));

$proto6["m_sql"] = "mst_hall_mark.name";
$proto6["m_srcTableName"] = "mst_hall_mark1";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto8=array();
$proto8["m_link"] = "SQLL_MAIN";
			$proto9=array();
$proto9["m_strName"] = "mst_hall_mark";
$proto9["m_srcTableName"] = "mst_hall_mark1";
$proto9["m_columns"] = array();
$proto9["m_columns"][] = "id";
$proto9["m_columns"][] = "country_of_origin";
$proto9["m_columns"][] = "name";
$proto9["m_columns"][] = "sort";
$proto9["m_columns"][] = "update_at";
$proto9["m_columns"][] = "update_by";
$proto9["m_columns"][] = "create_at";
$proto9["m_columns"][] = "create_by";
$obj = new SQLTable($proto9);

$proto8["m_table"] = $obj;
$proto8["m_sql"] = "mst_hall_mark";
$proto8["m_alias"] = "";
$proto8["m_srcTableName"] = "mst_hall_mark1";
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
												$proto12=array();
$proto12["m_link"] = "SQLL_INNERJOIN";
			$proto13=array();
$proto13["m_strName"] = "mst_country_of_origin";
$proto13["m_srcTableName"] = "mst_hall_mark1";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "id";
$proto13["m_columns"][] = "name";
$proto13["m_columns"][] = "sort";
$proto13["m_columns"][] = "line";
$proto13["m_columns"][] = "yahoo_junle";
$proto13["m_columns"][] = "category_id";
$proto13["m_columns"][] = "sub_category_id1";
$proto13["m_columns"][] = "updated_at";
$proto13["m_columns"][] = "updated_by";
$proto13["m_columns"][] = "created_at";
$proto13["m_columns"][] = "created_by";
$proto13["m_columns"][] = "english_name";
$proto13["m_columns"][] = "country_group";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "INNER JOIN mst_country_of_origin ON mst_country_of_origin.country_group = mst_hall_mark.country_of_origin";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "mst_hall_mark1";
$proto14=array();
$proto14["m_sql"] = "mst_country_of_origin.country_group = mst_hall_mark.country_of_origin";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "country_group",
	"m_strTable" => "mst_country_of_origin",
	"m_srcTableName" => "mst_hall_mark1"
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "= mst_hall_mark.country_of_origin";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = false;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

$proto12["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto12);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="mst_hall_mark1";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mst_hall_mark1 = createSqlQuery_mst_hall_mark1();


	
		;

	

$tdatamst_hall_mark1[".sqlquery"] = $queryData_mst_hall_mark1;

include_once(getabspath("include/mst_hall_mark1_events.php"));
$tableEvents["mst_hall_mark1"] = new eventclass_mst_hall_mark1;
$tdatamst_hall_mark1[".hasEvents"] = true;

?>