<?php
require_once(getabspath("classes/cipherer.php"));




$tdata_mail_check_type = array();
	$tdata_mail_check_type[".truncateText"] = true;
	$tdata_mail_check_type[".NumberOfChars"] = 80;
	$tdata_mail_check_type[".ShortName"] = "_mail_check_type";
	$tdata_mail_check_type[".OwnerID"] = "";
	$tdata_mail_check_type[".OriginalTable"] = "_mail_check_type";

//	field labels
$fieldLabels_mail_check_type = array();
$fieldToolTips_mail_check_type = array();
$pageTitles_mail_check_type = array();
$placeHolders_mail_check_type = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabels_mail_check_type["Japanese"] = array();
	$fieldToolTips_mail_check_type["Japanese"] = array();
	$placeHolders_mail_check_type["Japanese"] = array();
	$pageTitles_mail_check_type["Japanese"] = array();
	$fieldLabels_mail_check_type["Japanese"]["mail_check_id"] = "Mail Check Id";
	$fieldToolTips_mail_check_type["Japanese"]["mail_check_id"] = "";
	$placeHolders_mail_check_type["Japanese"]["mail_check_id"] = "";
	$fieldLabels_mail_check_type["Japanese"]["mail_check_name"] = "Mail Check Name";
	$fieldToolTips_mail_check_type["Japanese"]["mail_check_name"] = "";
	$placeHolders_mail_check_type["Japanese"]["mail_check_name"] = "";
	if (count($fieldToolTips_mail_check_type["Japanese"]))
		$tdata_mail_check_type[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabels_mail_check_type[""] = array();
	$fieldToolTips_mail_check_type[""] = array();
	$placeHolders_mail_check_type[""] = array();
	$pageTitles_mail_check_type[""] = array();
	$fieldLabels_mail_check_type[""]["mail_check_id"] = "Mail Check Id";
	$fieldToolTips_mail_check_type[""]["mail_check_id"] = "";
	$placeHolders_mail_check_type[""]["mail_check_id"] = "";
	$fieldLabels_mail_check_type[""]["mail_check_name"] = "Mail Check Name";
	$fieldToolTips_mail_check_type[""]["mail_check_name"] = "";
	$placeHolders_mail_check_type[""]["mail_check_name"] = "";
	if (count($fieldToolTips_mail_check_type[""]))
		$tdata_mail_check_type[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabels_mail_check_type["English"] = array();
	$fieldToolTips_mail_check_type["English"] = array();
	$placeHolders_mail_check_type["English"] = array();
	$pageTitles_mail_check_type["English"] = array();
	$fieldLabels_mail_check_type["English"]["mail_check_id"] = "Mail Check Id";
	$fieldToolTips_mail_check_type["English"]["mail_check_id"] = "";
	$placeHolders_mail_check_type["English"]["mail_check_id"] = "";
	$fieldLabels_mail_check_type["English"]["mail_check_name"] = "Mail Check Name";
	$fieldToolTips_mail_check_type["English"]["mail_check_name"] = "";
	$placeHolders_mail_check_type["English"]["mail_check_name"] = "";
	if (count($fieldToolTips_mail_check_type["English"]))
		$tdata_mail_check_type[".isUseToolTips"] = true;
}


	$tdata_mail_check_type[".NCSearch"] = true;



$tdata_mail_check_type[".shortTableName"] = "_mail_check_type";
$tdata_mail_check_type[".nSecOptions"] = 0;
$tdata_mail_check_type[".recsPerRowPrint"] = 1;
$tdata_mail_check_type[".mainTableOwnerID"] = "";
$tdata_mail_check_type[".moveNext"] = 1;
$tdata_mail_check_type[".entityType"] = 0;

$tdata_mail_check_type[".strOriginalTableName"] = "_mail_check_type";

	



$tdata_mail_check_type[".showAddInPopup"] = false;

$tdata_mail_check_type[".showEditInPopup"] = false;

$tdata_mail_check_type[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdata_mail_check_type[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdata_mail_check_type[".fieldsForRegister"] = array();

$tdata_mail_check_type[".listAjax"] = false;

	$tdata_mail_check_type[".audit"] = false;

	$tdata_mail_check_type[".locking"] = false;






$tdata_mail_check_type[".reorderRecordsByHeader"] = true;








$tdata_mail_check_type[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdata_mail_check_type[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdata_mail_check_type[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdata_mail_check_type[".searchSaving"] = false;
//

$tdata_mail_check_type[".showSearchPanel"] = true;
		$tdata_mail_check_type[".flexibleSearch"] = true;

$tdata_mail_check_type[".isUseAjaxSuggest"] = true;

$tdata_mail_check_type[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdata_mail_check_type[".ajaxCodeSnippetAdded"] = false;

$tdata_mail_check_type[".buttonsAdded"] = false;

$tdata_mail_check_type[".addPageEvents"] = false;

// use timepicker for search panel
$tdata_mail_check_type[".isUseTimeForSearch"] = false;





$tdata_mail_check_type[".allSearchFields"] = array();
$tdata_mail_check_type[".filterFields"] = array();
$tdata_mail_check_type[".requiredSearchFields"] = array();



$tdata_mail_check_type[".googleLikeFields"] = array();
$tdata_mail_check_type[".googleLikeFields"][] = "mail_check_id";
$tdata_mail_check_type[".googleLikeFields"][] = "mail_check_name";



$tdata_mail_check_type[".tableType"] = "list";

$tdata_mail_check_type[".printerPageOrientation"] = 0;
$tdata_mail_check_type[".nPrinterPageScale"] = 100;

$tdata_mail_check_type[".nPrinterSplitRecords"] = 40;

$tdata_mail_check_type[".nPrinterPDFSplitRecords"] = 40;



$tdata_mail_check_type[".geocodingEnabled"] = false;





$tdata_mail_check_type[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdata_mail_check_type[".pageSize"] = 20;

$tdata_mail_check_type[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdata_mail_check_type[".strOrderBy"] = $tstrOrderBy;

$tdata_mail_check_type[".orderindexes"] = array();

$tdata_mail_check_type[".sqlHead"] = "SELECT mail_check_id,  	mail_check_name";
$tdata_mail_check_type[".sqlFrom"] = "FROM `_mail_check_type`";
$tdata_mail_check_type[".sqlWhereExpr"] = "";
$tdata_mail_check_type[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdata_mail_check_type[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdata_mail_check_type[".arrGroupsPerPage"] = $arrGPP;

$tdata_mail_check_type[".highlightSearchResults"] = true;

$tableKeys_mail_check_type = array();
$tableKeys_mail_check_type[] = "mail_check_id";
$tdata_mail_check_type[".Keys"] = $tableKeys_mail_check_type;

$tdata_mail_check_type[".listFields"] = array();

$tdata_mail_check_type[".hideMobileList"] = array();


$tdata_mail_check_type[".viewFields"] = array();

$tdata_mail_check_type[".addFields"] = array();

$tdata_mail_check_type[".masterListFields"] = array();
$tdata_mail_check_type[".masterListFields"][] = "mail_check_id";
$tdata_mail_check_type[".masterListFields"][] = "mail_check_name";

$tdata_mail_check_type[".inlineAddFields"] = array();

$tdata_mail_check_type[".editFields"] = array();

$tdata_mail_check_type[".inlineEditFields"] = array();

$tdata_mail_check_type[".updateSelectedFields"] = array();


$tdata_mail_check_type[".exportFields"] = array();

$tdata_mail_check_type[".importFields"] = array();

$tdata_mail_check_type[".printFields"] = array();

//	mail_check_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "mail_check_id";
	$fdata["GoodName"] = "mail_check_id";
	$fdata["ownerTable"] = "_mail_check_type";
	$fdata["Label"] = GetFieldLabel("_mail_check_type","mail_check_id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "mail_check_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mail_check_id";

	
	
			
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








	$tdata_mail_check_type["mail_check_id"] = $fdata;
//	mail_check_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "mail_check_name";
	$fdata["GoodName"] = "mail_check_name";
	$fdata["ownerTable"] = "_mail_check_type";
	$fdata["Label"] = GetFieldLabel("_mail_check_type","mail_check_name");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "mail_check_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mail_check_name";

	
	
			
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
			$edata["EditParams"].= " maxlength=32";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdata_mail_check_type["mail_check_name"] = $fdata;


$tables_data["_mail_check_type"]=&$tdata_mail_check_type;
$field_labels["_mail_check_type"] = &$fieldLabels_mail_check_type;
$fieldToolTips["_mail_check_type"] = &$fieldToolTips_mail_check_type;
$placeHolders["_mail_check_type"] = &$placeHolders_mail_check_type;
$page_titles["_mail_check_type"] = &$pageTitles_mail_check_type;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["_mail_check_type"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["_mail_check_type"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery__mail_check_type()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "mail_check_id,  	mail_check_name";
$proto0["m_strFrom"] = "FROM `_mail_check_type`";
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
	"m_strName" => "mail_check_id",
	"m_strTable" => "_mail_check_type",
	"m_srcTableName" => "_mail_check_type"
));

$proto6["m_sql"] = "mail_check_id";
$proto6["m_srcTableName"] = "_mail_check_type";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "mail_check_name",
	"m_strTable" => "_mail_check_type",
	"m_srcTableName" => "_mail_check_type"
));

$proto8["m_sql"] = "mail_check_name";
$proto8["m_srcTableName"] = "_mail_check_type";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "_mail_check_type";
$proto11["m_srcTableName"] = "_mail_check_type";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "mail_check_id";
$proto11["m_columns"][] = "mail_check_name";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "`_mail_check_type`";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "_mail_check_type";
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
$proto0["m_srcTableName"]="_mail_check_type";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData__mail_check_type = createSqlQuery__mail_check_type();


	
		;

		

$tdata_mail_check_type[".sqlquery"] = $queryData__mail_check_type;

$tableEvents["_mail_check_type"] = new eventsBase;
$tdata_mail_check_type[".hasEvents"] = false;

?>