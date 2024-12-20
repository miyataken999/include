<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamst_Intensity = array();
	$tdatamst_Intensity[".truncateText"] = true;
	$tdatamst_Intensity[".NumberOfChars"] = 80;
	$tdatamst_Intensity[".ShortName"] = "mst_Intensity";
	$tdatamst_Intensity[".OwnerID"] = "";
	$tdatamst_Intensity[".OriginalTable"] = "mst_Intensity";

//	field labels
$fieldLabelsmst_Intensity = array();
$fieldToolTipsmst_Intensity = array();
$pageTitlesmst_Intensity = array();
$placeHoldersmst_Intensity = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmst_Intensity["Japanese"] = array();
	$fieldToolTipsmst_Intensity["Japanese"] = array();
	$placeHoldersmst_Intensity["Japanese"] = array();
	$pageTitlesmst_Intensity["Japanese"] = array();
	$fieldLabelsmst_Intensity["Japanese"]["ID0"] = "ID0";
	$fieldToolTipsmst_Intensity["Japanese"]["ID0"] = "";
	$placeHoldersmst_Intensity["Japanese"]["ID0"] = "";
	$fieldLabelsmst_Intensity["Japanese"]["Name"] = "Name";
	$fieldToolTipsmst_Intensity["Japanese"]["Name"] = "";
	$placeHoldersmst_Intensity["Japanese"]["Name"] = "";
	$fieldLabelsmst_Intensity["Japanese"]["Sort"] = "Sort";
	$fieldToolTipsmst_Intensity["Japanese"]["Sort"] = "";
	$placeHoldersmst_Intensity["Japanese"]["Sort"] = "";
	if (count($fieldToolTipsmst_Intensity["Japanese"]))
		$tdatamst_Intensity[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmst_Intensity[""] = array();
	$fieldToolTipsmst_Intensity[""] = array();
	$placeHoldersmst_Intensity[""] = array();
	$pageTitlesmst_Intensity[""] = array();
	$fieldLabelsmst_Intensity[""]["ID0"] = "ID0";
	$fieldToolTipsmst_Intensity[""]["ID0"] = "";
	$placeHoldersmst_Intensity[""]["ID0"] = "";
	$fieldLabelsmst_Intensity[""]["Name"] = "Name";
	$fieldToolTipsmst_Intensity[""]["Name"] = "";
	$placeHoldersmst_Intensity[""]["Name"] = "";
	$fieldLabelsmst_Intensity[""]["Sort"] = "Sort";
	$fieldToolTipsmst_Intensity[""]["Sort"] = "";
	$placeHoldersmst_Intensity[""]["Sort"] = "";
	if (count($fieldToolTipsmst_Intensity[""]))
		$tdatamst_Intensity[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmst_Intensity["English"] = array();
	$fieldToolTipsmst_Intensity["English"] = array();
	$placeHoldersmst_Intensity["English"] = array();
	$pageTitlesmst_Intensity["English"] = array();
	$fieldLabelsmst_Intensity["English"]["ID0"] = "ID0";
	$fieldToolTipsmst_Intensity["English"]["ID0"] = "";
	$placeHoldersmst_Intensity["English"]["ID0"] = "";
	$fieldLabelsmst_Intensity["English"]["Name"] = "Name";
	$fieldToolTipsmst_Intensity["English"]["Name"] = "";
	$placeHoldersmst_Intensity["English"]["Name"] = "";
	$fieldLabelsmst_Intensity["English"]["Sort"] = "Sort";
	$fieldToolTipsmst_Intensity["English"]["Sort"] = "";
	$placeHoldersmst_Intensity["English"]["Sort"] = "";
	if (count($fieldToolTipsmst_Intensity["English"]))
		$tdatamst_Intensity[".isUseToolTips"] = true;
}


	$tdatamst_Intensity[".NCSearch"] = true;



$tdatamst_Intensity[".shortTableName"] = "mst_Intensity";
$tdatamst_Intensity[".nSecOptions"] = 0;
$tdatamst_Intensity[".recsPerRowPrint"] = 1;
$tdatamst_Intensity[".mainTableOwnerID"] = "";
$tdatamst_Intensity[".moveNext"] = 1;
$tdatamst_Intensity[".entityType"] = 0;

$tdatamst_Intensity[".strOriginalTableName"] = "mst_Intensity";

	



$tdatamst_Intensity[".showAddInPopup"] = false;

$tdatamst_Intensity[".showEditInPopup"] = false;

$tdatamst_Intensity[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamst_Intensity[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamst_Intensity[".fieldsForRegister"] = array();

$tdatamst_Intensity[".listAjax"] = false;

	$tdatamst_Intensity[".audit"] = false;

	$tdatamst_Intensity[".locking"] = false;






$tdatamst_Intensity[".reorderRecordsByHeader"] = true;








$tdatamst_Intensity[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamst_Intensity[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamst_Intensity[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamst_Intensity[".searchSaving"] = false;
//

$tdatamst_Intensity[".showSearchPanel"] = true;
		$tdatamst_Intensity[".flexibleSearch"] = true;

$tdatamst_Intensity[".isUseAjaxSuggest"] = true;

$tdatamst_Intensity[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatamst_Intensity[".ajaxCodeSnippetAdded"] = false;

$tdatamst_Intensity[".buttonsAdded"] = false;

$tdatamst_Intensity[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamst_Intensity[".isUseTimeForSearch"] = false;





$tdatamst_Intensity[".allSearchFields"] = array();
$tdatamst_Intensity[".filterFields"] = array();
$tdatamst_Intensity[".requiredSearchFields"] = array();



$tdatamst_Intensity[".googleLikeFields"] = array();
$tdatamst_Intensity[".googleLikeFields"][] = "ID0";
$tdatamst_Intensity[".googleLikeFields"][] = "Name";
$tdatamst_Intensity[".googleLikeFields"][] = "Sort";



$tdatamst_Intensity[".tableType"] = "list";

$tdatamst_Intensity[".printerPageOrientation"] = 0;
$tdatamst_Intensity[".nPrinterPageScale"] = 100;

$tdatamst_Intensity[".nPrinterSplitRecords"] = 40;

$tdatamst_Intensity[".nPrinterPDFSplitRecords"] = 40;



$tdatamst_Intensity[".geocodingEnabled"] = false;





$tdatamst_Intensity[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamst_Intensity[".pageSize"] = 20;

$tdatamst_Intensity[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamst_Intensity[".strOrderBy"] = $tstrOrderBy;

$tdatamst_Intensity[".orderindexes"] = array();

$tdatamst_Intensity[".sqlHead"] = "SELECT `ID0`,  	`Name`,  	`Sort`";
$tdatamst_Intensity[".sqlFrom"] = "FROM `mst_Intensity`";
$tdatamst_Intensity[".sqlWhereExpr"] = "";
$tdatamst_Intensity[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamst_Intensity[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamst_Intensity[".arrGroupsPerPage"] = $arrGPP;

$tdatamst_Intensity[".highlightSearchResults"] = true;

$tableKeysmst_Intensity = array();
$tableKeysmst_Intensity[] = "ID0";
$tdatamst_Intensity[".Keys"] = $tableKeysmst_Intensity;

$tdatamst_Intensity[".listFields"] = array();

$tdatamst_Intensity[".hideMobileList"] = array();


$tdatamst_Intensity[".viewFields"] = array();

$tdatamst_Intensity[".addFields"] = array();

$tdatamst_Intensity[".masterListFields"] = array();
$tdatamst_Intensity[".masterListFields"][] = "ID0";
$tdatamst_Intensity[".masterListFields"][] = "Name";
$tdatamst_Intensity[".masterListFields"][] = "Sort";

$tdatamst_Intensity[".inlineAddFields"] = array();

$tdatamst_Intensity[".editFields"] = array();

$tdatamst_Intensity[".inlineEditFields"] = array();

$tdatamst_Intensity[".updateSelectedFields"] = array();


$tdatamst_Intensity[".exportFields"] = array();

$tdatamst_Intensity[".importFields"] = array();

$tdatamst_Intensity[".printFields"] = array();

//	ID0
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID0";
	$fdata["GoodName"] = "ID0";
	$fdata["ownerTable"] = "mst_Intensity";
	$fdata["Label"] = GetFieldLabel("mst_Intensity","ID0");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "ID0";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`ID0`";

	
	
			
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








	$tdatamst_Intensity["ID0"] = $fdata;
//	Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Name";
	$fdata["GoodName"] = "Name";
	$fdata["ownerTable"] = "mst_Intensity";
	$fdata["Label"] = GetFieldLabel("mst_Intensity","Name");
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








	$tdatamst_Intensity["Name"] = $fdata;
//	Sort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Sort";
	$fdata["GoodName"] = "Sort";
	$fdata["ownerTable"] = "mst_Intensity";
	$fdata["Label"] = GetFieldLabel("mst_Intensity","Sort");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "Sort";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Sort`";

	
	
			
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








	$tdatamst_Intensity["Sort"] = $fdata;


$tables_data["mst_Intensity"]=&$tdatamst_Intensity;
$field_labels["mst_Intensity"] = &$fieldLabelsmst_Intensity;
$fieldToolTips["mst_Intensity"] = &$fieldToolTipsmst_Intensity;
$placeHolders["mst_Intensity"] = &$placeHoldersmst_Intensity;
$page_titles["mst_Intensity"] = &$pageTitlesmst_Intensity;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mst_Intensity"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mst_Intensity"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mst_Intensity()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`ID0`,  	`Name`,  	`Sort`";
$proto0["m_strFrom"] = "FROM `mst_Intensity`";
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
	"m_strName" => "ID0",
	"m_strTable" => "mst_Intensity",
	"m_srcTableName" => "mst_Intensity"
));

$proto6["m_sql"] = "`ID0`";
$proto6["m_srcTableName"] = "mst_Intensity";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Name",
	"m_strTable" => "mst_Intensity",
	"m_srcTableName" => "mst_Intensity"
));

$proto8["m_sql"] = "`Name`";
$proto8["m_srcTableName"] = "mst_Intensity";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Sort",
	"m_strTable" => "mst_Intensity",
	"m_srcTableName" => "mst_Intensity"
));

$proto10["m_sql"] = "`Sort`";
$proto10["m_srcTableName"] = "mst_Intensity";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "mst_Intensity";
$proto13["m_srcTableName"] = "mst_Intensity";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "ID0";
$proto13["m_columns"][] = "Name";
$proto13["m_columns"][] = "Sort";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "`mst_Intensity`";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "mst_Intensity";
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
$proto0["m_srcTableName"]="mst_Intensity";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mst_Intensity = createSqlQuery_mst_Intensity();


	
		;

			

$tdatamst_Intensity[".sqlquery"] = $queryData_mst_Intensity;

$tableEvents["mst_Intensity"] = new eventsBase;
$tdatamst_Intensity[".hasEvents"] = false;

?>