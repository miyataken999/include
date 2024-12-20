<?php
require_once(getabspath("classes/cipherer.php"));




$tdata_shokugyou = array();
	$tdata_shokugyou[".truncateText"] = true;
	$tdata_shokugyou[".NumberOfChars"] = 80;
	$tdata_shokugyou[".ShortName"] = "_shokugyou";
	$tdata_shokugyou[".OwnerID"] = "";
	$tdata_shokugyou[".OriginalTable"] = "_shokugyou";

//	field labels
$fieldLabels_shokugyou = array();
$fieldToolTips_shokugyou = array();
$pageTitles_shokugyou = array();
$placeHolders_shokugyou = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabels_shokugyou["Japanese"] = array();
	$fieldToolTips_shokugyou["Japanese"] = array();
	$placeHolders_shokugyou["Japanese"] = array();
	$pageTitles_shokugyou["Japanese"] = array();
	$fieldLabels_shokugyou["Japanese"]["id"] = "Id";
	$fieldToolTips_shokugyou["Japanese"]["id"] = "";
	$placeHolders_shokugyou["Japanese"]["id"] = "";
	$fieldLabels_shokugyou["Japanese"]["name"] = "Name";
	$fieldToolTips_shokugyou["Japanese"]["name"] = "";
	$placeHolders_shokugyou["Japanese"]["name"] = "";
	if (count($fieldToolTips_shokugyou["Japanese"]))
		$tdata_shokugyou[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabels_shokugyou[""] = array();
	$fieldToolTips_shokugyou[""] = array();
	$placeHolders_shokugyou[""] = array();
	$pageTitles_shokugyou[""] = array();
	$fieldLabels_shokugyou[""]["id"] = "Id";
	$fieldToolTips_shokugyou[""]["id"] = "";
	$placeHolders_shokugyou[""]["id"] = "";
	$fieldLabels_shokugyou[""]["name"] = "Name";
	$fieldToolTips_shokugyou[""]["name"] = "";
	$placeHolders_shokugyou[""]["name"] = "";
	if (count($fieldToolTips_shokugyou[""]))
		$tdata_shokugyou[".isUseToolTips"] = true;
}


	$tdata_shokugyou[".NCSearch"] = true;



$tdata_shokugyou[".shortTableName"] = "_shokugyou";
$tdata_shokugyou[".nSecOptions"] = 0;
$tdata_shokugyou[".recsPerRowPrint"] = 1;
$tdata_shokugyou[".mainTableOwnerID"] = "";
$tdata_shokugyou[".moveNext"] = 1;
$tdata_shokugyou[".entityType"] = 0;

$tdata_shokugyou[".strOriginalTableName"] = "_shokugyou";

	



$tdata_shokugyou[".showAddInPopup"] = false;

$tdata_shokugyou[".showEditInPopup"] = false;

$tdata_shokugyou[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdata_shokugyou[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdata_shokugyou[".fieldsForRegister"] = array();

$tdata_shokugyou[".listAjax"] = false;

	$tdata_shokugyou[".audit"] = false;

	$tdata_shokugyou[".locking"] = false;






$tdata_shokugyou[".reorderRecordsByHeader"] = true;








$tdata_shokugyou[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdata_shokugyou[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdata_shokugyou[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdata_shokugyou[".searchSaving"] = false;
//

$tdata_shokugyou[".showSearchPanel"] = true;
		$tdata_shokugyou[".flexibleSearch"] = true;

$tdata_shokugyou[".isUseAjaxSuggest"] = true;

$tdata_shokugyou[".rowHighlite"] = true;





$tdata_shokugyou[".ajaxCodeSnippetAdded"] = false;

$tdata_shokugyou[".buttonsAdded"] = false;

$tdata_shokugyou[".addPageEvents"] = false;

// use timepicker for search panel
$tdata_shokugyou[".isUseTimeForSearch"] = false;



$tdata_shokugyou[".badgeColor"] = "B22222";


$tdata_shokugyou[".allSearchFields"] = array();
$tdata_shokugyou[".filterFields"] = array();
$tdata_shokugyou[".requiredSearchFields"] = array();



$tdata_shokugyou[".googleLikeFields"] = array();
$tdata_shokugyou[".googleLikeFields"][] = "id";
$tdata_shokugyou[".googleLikeFields"][] = "name";



$tdata_shokugyou[".tableType"] = "list";

$tdata_shokugyou[".printerPageOrientation"] = 0;
$tdata_shokugyou[".nPrinterPageScale"] = 100;

$tdata_shokugyou[".nPrinterSplitRecords"] = 40;

$tdata_shokugyou[".nPrinterPDFSplitRecords"] = 40;



$tdata_shokugyou[".geocodingEnabled"] = false;





$tdata_shokugyou[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdata_shokugyou[".pageSize"] = 20;

$tdata_shokugyou[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdata_shokugyou[".strOrderBy"] = $tstrOrderBy;

$tdata_shokugyou[".orderindexes"] = array();

$tdata_shokugyou[".sqlHead"] = "SELECT id,  	name";
$tdata_shokugyou[".sqlFrom"] = "FROM `_shokugyou`";
$tdata_shokugyou[".sqlWhereExpr"] = "";
$tdata_shokugyou[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdata_shokugyou[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdata_shokugyou[".arrGroupsPerPage"] = $arrGPP;

$tdata_shokugyou[".highlightSearchResults"] = true;

$tableKeys_shokugyou = array();
$tableKeys_shokugyou[] = "id";
$tdata_shokugyou[".Keys"] = $tableKeys_shokugyou;

$tdata_shokugyou[".listFields"] = array();

$tdata_shokugyou[".hideMobileList"] = array();


$tdata_shokugyou[".viewFields"] = array();

$tdata_shokugyou[".addFields"] = array();

$tdata_shokugyou[".masterListFields"] = array();
$tdata_shokugyou[".masterListFields"][] = "id";
$tdata_shokugyou[".masterListFields"][] = "name";

$tdata_shokugyou[".inlineAddFields"] = array();

$tdata_shokugyou[".editFields"] = array();

$tdata_shokugyou[".inlineEditFields"] = array();

$tdata_shokugyou[".updateSelectedFields"] = array();


$tdata_shokugyou[".exportFields"] = array();

$tdata_shokugyou[".importFields"] = array();

$tdata_shokugyou[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "_shokugyou";
	$fdata["Label"] = GetFieldLabel("_shokugyou","id");
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








	$tdata_shokugyou["id"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "_shokugyou";
	$fdata["Label"] = GetFieldLabel("_shokugyou","name");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "name";

	
	
			
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








	$tdata_shokugyou["name"] = $fdata;


$tables_data["_shokugyou"]=&$tdata_shokugyou;
$field_labels["_shokugyou"] = &$fieldLabels_shokugyou;
$fieldToolTips["_shokugyou"] = &$fieldToolTips_shokugyou;
$placeHolders["_shokugyou"] = &$placeHolders_shokugyou;
$page_titles["_shokugyou"] = &$pageTitles_shokugyou;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["_shokugyou"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["_shokugyou"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery__shokugyou()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	name";
$proto0["m_strFrom"] = "FROM `_shokugyou`";
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
	"m_strTable" => "_shokugyou",
	"m_srcTableName" => "_shokugyou"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "_shokugyou";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "_shokugyou",
	"m_srcTableName" => "_shokugyou"
));

$proto8["m_sql"] = "name";
$proto8["m_srcTableName"] = "_shokugyou";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "_shokugyou";
$proto11["m_srcTableName"] = "_shokugyou";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "id";
$proto11["m_columns"][] = "name";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "`_shokugyou`";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "_shokugyou";
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
$proto0["m_srcTableName"]="_shokugyou";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData__shokugyou = createSqlQuery__shokugyou();


	
		;

		

$tdata_shokugyou[".sqlquery"] = $queryData__shokugyou;

$tableEvents["_shokugyou"] = new eventsBase;
$tdata_shokugyou[".hasEvents"] = false;

?>