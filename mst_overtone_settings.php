<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamst_overtone = array();
	$tdatamst_overtone[".truncateText"] = true;
	$tdatamst_overtone[".NumberOfChars"] = 80;
	$tdatamst_overtone[".ShortName"] = "mst_overtone";
	$tdatamst_overtone[".OwnerID"] = "";
	$tdatamst_overtone[".OriginalTable"] = "mst_overtone";

//	field labels
$fieldLabelsmst_overtone = array();
$fieldToolTipsmst_overtone = array();
$pageTitlesmst_overtone = array();
$placeHoldersmst_overtone = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmst_overtone["Japanese"] = array();
	$fieldToolTipsmst_overtone["Japanese"] = array();
	$placeHoldersmst_overtone["Japanese"] = array();
	$pageTitlesmst_overtone["Japanese"] = array();
	$fieldLabelsmst_overtone["Japanese"]["Id"] = "Id";
	$fieldToolTipsmst_overtone["Japanese"]["Id"] = "";
	$placeHoldersmst_overtone["Japanese"]["Id"] = "";
	$fieldLabelsmst_overtone["Japanese"]["Name"] = "Name";
	$fieldToolTipsmst_overtone["Japanese"]["Name"] = "";
	$placeHoldersmst_overtone["Japanese"]["Name"] = "";
	$fieldLabelsmst_overtone["Japanese"]["sort"] = "Sort";
	$fieldToolTipsmst_overtone["Japanese"]["sort"] = "";
	$placeHoldersmst_overtone["Japanese"]["sort"] = "";
	if (count($fieldToolTipsmst_overtone["Japanese"]))
		$tdatamst_overtone[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmst_overtone[""] = array();
	$fieldToolTipsmst_overtone[""] = array();
	$placeHoldersmst_overtone[""] = array();
	$pageTitlesmst_overtone[""] = array();
	$fieldLabelsmst_overtone[""]["Id"] = "Id";
	$fieldToolTipsmst_overtone[""]["Id"] = "";
	$placeHoldersmst_overtone[""]["Id"] = "";
	$fieldLabelsmst_overtone[""]["Name"] = "Name";
	$fieldToolTipsmst_overtone[""]["Name"] = "";
	$placeHoldersmst_overtone[""]["Name"] = "";
	$fieldLabelsmst_overtone[""]["sort"] = "Sort";
	$fieldToolTipsmst_overtone[""]["sort"] = "";
	$placeHoldersmst_overtone[""]["sort"] = "";
	if (count($fieldToolTipsmst_overtone[""]))
		$tdatamst_overtone[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmst_overtone["English"] = array();
	$fieldToolTipsmst_overtone["English"] = array();
	$placeHoldersmst_overtone["English"] = array();
	$pageTitlesmst_overtone["English"] = array();
	$fieldLabelsmst_overtone["English"]["Id"] = "Id";
	$fieldToolTipsmst_overtone["English"]["Id"] = "";
	$placeHoldersmst_overtone["English"]["Id"] = "";
	$fieldLabelsmst_overtone["English"]["Name"] = "Name";
	$fieldToolTipsmst_overtone["English"]["Name"] = "";
	$placeHoldersmst_overtone["English"]["Name"] = "";
	$fieldLabelsmst_overtone["English"]["sort"] = "Sort";
	$fieldToolTipsmst_overtone["English"]["sort"] = "";
	$placeHoldersmst_overtone["English"]["sort"] = "";
	if (count($fieldToolTipsmst_overtone["English"]))
		$tdatamst_overtone[".isUseToolTips"] = true;
}


	$tdatamst_overtone[".NCSearch"] = true;



$tdatamst_overtone[".shortTableName"] = "mst_overtone";
$tdatamst_overtone[".nSecOptions"] = 0;
$tdatamst_overtone[".recsPerRowPrint"] = 1;
$tdatamst_overtone[".mainTableOwnerID"] = "";
$tdatamst_overtone[".moveNext"] = 1;
$tdatamst_overtone[".entityType"] = 0;

$tdatamst_overtone[".strOriginalTableName"] = "mst_overtone";

	



$tdatamst_overtone[".showAddInPopup"] = false;

$tdatamst_overtone[".showEditInPopup"] = false;

$tdatamst_overtone[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamst_overtone[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamst_overtone[".fieldsForRegister"] = array();

$tdatamst_overtone[".listAjax"] = false;

	$tdatamst_overtone[".audit"] = false;

	$tdatamst_overtone[".locking"] = false;






$tdatamst_overtone[".reorderRecordsByHeader"] = true;








$tdatamst_overtone[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamst_overtone[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamst_overtone[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamst_overtone[".searchSaving"] = false;
//

$tdatamst_overtone[".showSearchPanel"] = true;
		$tdatamst_overtone[".flexibleSearch"] = true;

$tdatamst_overtone[".isUseAjaxSuggest"] = true;

$tdatamst_overtone[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatamst_overtone[".ajaxCodeSnippetAdded"] = false;

$tdatamst_overtone[".buttonsAdded"] = false;

$tdatamst_overtone[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamst_overtone[".isUseTimeForSearch"] = false;





$tdatamst_overtone[".allSearchFields"] = array();
$tdatamst_overtone[".filterFields"] = array();
$tdatamst_overtone[".requiredSearchFields"] = array();



$tdatamst_overtone[".googleLikeFields"] = array();
$tdatamst_overtone[".googleLikeFields"][] = "Id";
$tdatamst_overtone[".googleLikeFields"][] = "Name";
$tdatamst_overtone[".googleLikeFields"][] = "sort";



$tdatamst_overtone[".tableType"] = "list";

$tdatamst_overtone[".printerPageOrientation"] = 0;
$tdatamst_overtone[".nPrinterPageScale"] = 100;

$tdatamst_overtone[".nPrinterSplitRecords"] = 40;

$tdatamst_overtone[".nPrinterPDFSplitRecords"] = 40;



$tdatamst_overtone[".geocodingEnabled"] = false;





$tdatamst_overtone[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamst_overtone[".pageSize"] = 20;

$tdatamst_overtone[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamst_overtone[".strOrderBy"] = $tstrOrderBy;

$tdatamst_overtone[".orderindexes"] = array();

$tdatamst_overtone[".sqlHead"] = "SELECT `Id`,  	`Name`,  	`sort`";
$tdatamst_overtone[".sqlFrom"] = "FROM `mst_overtone`";
$tdatamst_overtone[".sqlWhereExpr"] = "";
$tdatamst_overtone[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamst_overtone[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamst_overtone[".arrGroupsPerPage"] = $arrGPP;

$tdatamst_overtone[".highlightSearchResults"] = true;

$tableKeysmst_overtone = array();
$tableKeysmst_overtone[] = "Id";
$tdatamst_overtone[".Keys"] = $tableKeysmst_overtone;

$tdatamst_overtone[".listFields"] = array();

$tdatamst_overtone[".hideMobileList"] = array();


$tdatamst_overtone[".viewFields"] = array();

$tdatamst_overtone[".addFields"] = array();

$tdatamst_overtone[".masterListFields"] = array();
$tdatamst_overtone[".masterListFields"][] = "Id";
$tdatamst_overtone[".masterListFields"][] = "Name";
$tdatamst_overtone[".masterListFields"][] = "sort";

$tdatamst_overtone[".inlineAddFields"] = array();

$tdatamst_overtone[".editFields"] = array();

$tdatamst_overtone[".inlineEditFields"] = array();

$tdatamst_overtone[".updateSelectedFields"] = array();


$tdatamst_overtone[".exportFields"] = array();

$tdatamst_overtone[".importFields"] = array();

$tdatamst_overtone[".printFields"] = array();

//	Id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Id";
	$fdata["GoodName"] = "Id";
	$fdata["ownerTable"] = "mst_overtone";
	$fdata["Label"] = GetFieldLabel("mst_overtone","Id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "Id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Id`";

	
	
			
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








	$tdatamst_overtone["Id"] = $fdata;
//	Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Name";
	$fdata["GoodName"] = "Name";
	$fdata["ownerTable"] = "mst_overtone";
	$fdata["Label"] = GetFieldLabel("mst_overtone","Name");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "Name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Name`";

	
	
			
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








	$tdatamst_overtone["Name"] = $fdata;
//	sort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sort";
	$fdata["GoodName"] = "sort";
	$fdata["ownerTable"] = "mst_overtone";
	$fdata["Label"] = GetFieldLabel("mst_overtone","sort");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "sort";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`sort`";

	
	
			
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








	$tdatamst_overtone["sort"] = $fdata;


$tables_data["mst_overtone"]=&$tdatamst_overtone;
$field_labels["mst_overtone"] = &$fieldLabelsmst_overtone;
$fieldToolTips["mst_overtone"] = &$fieldToolTipsmst_overtone;
$placeHolders["mst_overtone"] = &$placeHoldersmst_overtone;
$page_titles["mst_overtone"] = &$pageTitlesmst_overtone;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mst_overtone"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mst_overtone"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mst_overtone()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`Id`,  	`Name`,  	`sort`";
$proto0["m_strFrom"] = "FROM `mst_overtone`";
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
	"m_strName" => "Id",
	"m_strTable" => "mst_overtone",
	"m_srcTableName" => "mst_overtone"
));

$proto6["m_sql"] = "`Id`";
$proto6["m_srcTableName"] = "mst_overtone";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Name",
	"m_strTable" => "mst_overtone",
	"m_srcTableName" => "mst_overtone"
));

$proto8["m_sql"] = "`Name`";
$proto8["m_srcTableName"] = "mst_overtone";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "sort",
	"m_strTable" => "mst_overtone",
	"m_srcTableName" => "mst_overtone"
));

$proto10["m_sql"] = "`sort`";
$proto10["m_srcTableName"] = "mst_overtone";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "mst_overtone";
$proto13["m_srcTableName"] = "mst_overtone";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "Id";
$proto13["m_columns"][] = "Name";
$proto13["m_columns"][] = "sort";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "`mst_overtone`";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "mst_overtone";
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
$proto0["m_srcTableName"]="mst_overtone";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mst_overtone = createSqlQuery_mst_overtone();


	
		;

			

$tdatamst_overtone[".sqlquery"] = $queryData_mst_overtone;

$tableEvents["mst_overtone"] = new eventsBase;
$tdatamst_overtone[".hasEvents"] = false;

?>