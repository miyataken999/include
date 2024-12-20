<?php
require_once(getabspath("classes/cipherer.php"));




$tdataharaidasi = array();
	$tdataharaidasi[".truncateText"] = true;
	$tdataharaidasi[".NumberOfChars"] = 80;
	$tdataharaidasi[".ShortName"] = "haraidasi";
	$tdataharaidasi[".OwnerID"] = "";
	$tdataharaidasi[".OriginalTable"] = "haraidasi";

//	field labels
$fieldLabelsharaidasi = array();
$fieldToolTipsharaidasi = array();
$pageTitlesharaidasi = array();
$placeHoldersharaidasi = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsharaidasi["Japanese"] = array();
	$fieldToolTipsharaidasi["Japanese"] = array();
	$placeHoldersharaidasi["Japanese"] = array();
	$pageTitlesharaidasi["Japanese"] = array();
	$fieldLabelsharaidasi["Japanese"]["id"] = "Id";
	$fieldToolTipsharaidasi["Japanese"]["id"] = "";
	$placeHoldersharaidasi["Japanese"]["id"] = "";
	$fieldLabelsharaidasi["Japanese"]["haraidasi_name"] = "Haraidasi Name";
	$fieldToolTipsharaidasi["Japanese"]["haraidasi_name"] = "";
	$placeHoldersharaidasi["Japanese"]["haraidasi_name"] = "";
	$fieldLabelsharaidasi["Japanese"]["haraidasi_address"] = "Haraidasi Address";
	$fieldToolTipsharaidasi["Japanese"]["haraidasi_address"] = "";
	$placeHoldersharaidasi["Japanese"]["haraidasi_address"] = "";
	$fieldLabelsharaidasi["Japanese"]["haraidasi_tel"] = "Haraidasi Tel";
	$fieldToolTipsharaidasi["Japanese"]["haraidasi_tel"] = "";
	$placeHoldersharaidasi["Japanese"]["haraidasi_tel"] = "";
	if (count($fieldToolTipsharaidasi["Japanese"]))
		$tdataharaidasi[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsharaidasi[""] = array();
	$fieldToolTipsharaidasi[""] = array();
	$placeHoldersharaidasi[""] = array();
	$pageTitlesharaidasi[""] = array();
	$fieldLabelsharaidasi[""]["id"] = "Id";
	$fieldToolTipsharaidasi[""]["id"] = "";
	$placeHoldersharaidasi[""]["id"] = "";
	$fieldLabelsharaidasi[""]["haraidasi_name"] = "Haraidasi Name";
	$fieldToolTipsharaidasi[""]["haraidasi_name"] = "";
	$placeHoldersharaidasi[""]["haraidasi_name"] = "";
	$fieldLabelsharaidasi[""]["haraidasi_address"] = "Haraidasi Address";
	$fieldToolTipsharaidasi[""]["haraidasi_address"] = "";
	$placeHoldersharaidasi[""]["haraidasi_address"] = "";
	$fieldLabelsharaidasi[""]["haraidasi_tel"] = "Haraidasi Tel";
	$fieldToolTipsharaidasi[""]["haraidasi_tel"] = "";
	$placeHoldersharaidasi[""]["haraidasi_tel"] = "";
	if (count($fieldToolTipsharaidasi[""]))
		$tdataharaidasi[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsharaidasi["English"] = array();
	$fieldToolTipsharaidasi["English"] = array();
	$placeHoldersharaidasi["English"] = array();
	$pageTitlesharaidasi["English"] = array();
	$fieldLabelsharaidasi["English"]["id"] = "Id";
	$fieldToolTipsharaidasi["English"]["id"] = "";
	$placeHoldersharaidasi["English"]["id"] = "";
	$fieldLabelsharaidasi["English"]["haraidasi_name"] = "Haraidasi Name";
	$fieldToolTipsharaidasi["English"]["haraidasi_name"] = "";
	$placeHoldersharaidasi["English"]["haraidasi_name"] = "";
	$fieldLabelsharaidasi["English"]["haraidasi_address"] = "Haraidasi Address";
	$fieldToolTipsharaidasi["English"]["haraidasi_address"] = "";
	$placeHoldersharaidasi["English"]["haraidasi_address"] = "";
	$fieldLabelsharaidasi["English"]["haraidasi_tel"] = "Haraidasi Tel";
	$fieldToolTipsharaidasi["English"]["haraidasi_tel"] = "";
	$placeHoldersharaidasi["English"]["haraidasi_tel"] = "";
	if (count($fieldToolTipsharaidasi["English"]))
		$tdataharaidasi[".isUseToolTips"] = true;
}


	$tdataharaidasi[".NCSearch"] = true;



$tdataharaidasi[".shortTableName"] = "haraidasi";
$tdataharaidasi[".nSecOptions"] = 0;
$tdataharaidasi[".recsPerRowPrint"] = 1;
$tdataharaidasi[".mainTableOwnerID"] = "";
$tdataharaidasi[".moveNext"] = 1;
$tdataharaidasi[".entityType"] = 0;

$tdataharaidasi[".strOriginalTableName"] = "haraidasi";

	



$tdataharaidasi[".showAddInPopup"] = false;

$tdataharaidasi[".showEditInPopup"] = false;

$tdataharaidasi[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataharaidasi[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataharaidasi[".fieldsForRegister"] = array();

$tdataharaidasi[".listAjax"] = false;

	$tdataharaidasi[".audit"] = false;

	$tdataharaidasi[".locking"] = false;






$tdataharaidasi[".reorderRecordsByHeader"] = true;








$tdataharaidasi[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataharaidasi[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataharaidasi[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataharaidasi[".searchSaving"] = false;
//

$tdataharaidasi[".showSearchPanel"] = true;
		$tdataharaidasi[".flexibleSearch"] = true;

$tdataharaidasi[".isUseAjaxSuggest"] = true;

$tdataharaidasi[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdataharaidasi[".ajaxCodeSnippetAdded"] = false;

$tdataharaidasi[".buttonsAdded"] = false;

$tdataharaidasi[".addPageEvents"] = false;

// use timepicker for search panel
$tdataharaidasi[".isUseTimeForSearch"] = false;





$tdataharaidasi[".allSearchFields"] = array();
$tdataharaidasi[".filterFields"] = array();
$tdataharaidasi[".requiredSearchFields"] = array();



$tdataharaidasi[".googleLikeFields"] = array();
$tdataharaidasi[".googleLikeFields"][] = "id";
$tdataharaidasi[".googleLikeFields"][] = "haraidasi_name";
$tdataharaidasi[".googleLikeFields"][] = "haraidasi_address";
$tdataharaidasi[".googleLikeFields"][] = "haraidasi_tel";



$tdataharaidasi[".tableType"] = "list";

$tdataharaidasi[".printerPageOrientation"] = 0;
$tdataharaidasi[".nPrinterPageScale"] = 100;

$tdataharaidasi[".nPrinterSplitRecords"] = 40;

$tdataharaidasi[".nPrinterPDFSplitRecords"] = 40;



$tdataharaidasi[".geocodingEnabled"] = false;





$tdataharaidasi[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataharaidasi[".pageSize"] = 20;

$tdataharaidasi[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataharaidasi[".strOrderBy"] = $tstrOrderBy;

$tdataharaidasi[".orderindexes"] = array();

$tdataharaidasi[".sqlHead"] = "SELECT id,  	haraidasi_name,  	haraidasi_address,  	haraidasi_tel";
$tdataharaidasi[".sqlFrom"] = "FROM haraidasi";
$tdataharaidasi[".sqlWhereExpr"] = "";
$tdataharaidasi[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataharaidasi[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataharaidasi[".arrGroupsPerPage"] = $arrGPP;

$tdataharaidasi[".highlightSearchResults"] = true;

$tableKeysharaidasi = array();
$tableKeysharaidasi[] = "id";
$tdataharaidasi[".Keys"] = $tableKeysharaidasi;

$tdataharaidasi[".listFields"] = array();

$tdataharaidasi[".hideMobileList"] = array();


$tdataharaidasi[".viewFields"] = array();

$tdataharaidasi[".addFields"] = array();

$tdataharaidasi[".masterListFields"] = array();
$tdataharaidasi[".masterListFields"][] = "id";
$tdataharaidasi[".masterListFields"][] = "haraidasi_name";
$tdataharaidasi[".masterListFields"][] = "haraidasi_address";
$tdataharaidasi[".masterListFields"][] = "haraidasi_tel";

$tdataharaidasi[".inlineAddFields"] = array();

$tdataharaidasi[".editFields"] = array();

$tdataharaidasi[".inlineEditFields"] = array();

$tdataharaidasi[".updateSelectedFields"] = array();


$tdataharaidasi[".exportFields"] = array();

$tdataharaidasi[".importFields"] = array();

$tdataharaidasi[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "haraidasi";
	$fdata["Label"] = GetFieldLabel("haraidasi","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
			
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








	$tdataharaidasi["id"] = $fdata;
//	haraidasi_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "haraidasi_name";
	$fdata["GoodName"] = "haraidasi_name";
	$fdata["ownerTable"] = "haraidasi";
	$fdata["Label"] = GetFieldLabel("haraidasi","haraidasi_name");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "haraidasi_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "haraidasi_name";

	
	
			
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








	$tdataharaidasi["haraidasi_name"] = $fdata;
//	haraidasi_address
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "haraidasi_address";
	$fdata["GoodName"] = "haraidasi_address";
	$fdata["ownerTable"] = "haraidasi";
	$fdata["Label"] = GetFieldLabel("haraidasi","haraidasi_address");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "haraidasi_address";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "haraidasi_address";

	
	
			
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








	$tdataharaidasi["haraidasi_address"] = $fdata;
//	haraidasi_tel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "haraidasi_tel";
	$fdata["GoodName"] = "haraidasi_tel";
	$fdata["ownerTable"] = "haraidasi";
	$fdata["Label"] = GetFieldLabel("haraidasi","haraidasi_tel");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "haraidasi_tel";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "haraidasi_tel";

	
	
			
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








	$tdataharaidasi["haraidasi_tel"] = $fdata;


$tables_data["haraidasi"]=&$tdataharaidasi;
$field_labels["haraidasi"] = &$fieldLabelsharaidasi;
$fieldToolTips["haraidasi"] = &$fieldToolTipsharaidasi;
$placeHolders["haraidasi"] = &$placeHoldersharaidasi;
$page_titles["haraidasi"] = &$pageTitlesharaidasi;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["haraidasi"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["haraidasi"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_haraidasi()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	haraidasi_name,  	haraidasi_address,  	haraidasi_tel";
$proto0["m_strFrom"] = "FROM haraidasi";
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
	"m_strTable" => "haraidasi",
	"m_srcTableName" => "haraidasi"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "haraidasi";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "haraidasi_name",
	"m_strTable" => "haraidasi",
	"m_srcTableName" => "haraidasi"
));

$proto8["m_sql"] = "haraidasi_name";
$proto8["m_srcTableName"] = "haraidasi";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "haraidasi_address",
	"m_strTable" => "haraidasi",
	"m_srcTableName" => "haraidasi"
));

$proto10["m_sql"] = "haraidasi_address";
$proto10["m_srcTableName"] = "haraidasi";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "haraidasi_tel",
	"m_strTable" => "haraidasi",
	"m_srcTableName" => "haraidasi"
));

$proto12["m_sql"] = "haraidasi_tel";
$proto12["m_srcTableName"] = "haraidasi";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "haraidasi";
$proto15["m_srcTableName"] = "haraidasi";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "id";
$proto15["m_columns"][] = "haraidasi_name";
$proto15["m_columns"][] = "haraidasi_address";
$proto15["m_columns"][] = "haraidasi_tel";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "haraidasi";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "haraidasi";
$proto16=array();
$proto16["m_sql"] = "";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = false;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

$proto14["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto14);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="haraidasi";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_haraidasi = createSqlQuery_haraidasi();


	
		;

				

$tdataharaidasi[".sqlquery"] = $queryData_haraidasi;

$tableEvents["haraidasi"] = new eventsBase;
$tdataharaidasi[".hasEvents"] = false;

?>