<?php
require_once(getabspath("classes/cipherer.php"));




$tdatashomei_tbl = array();
	$tdatashomei_tbl[".truncateText"] = true;
	$tdatashomei_tbl[".NumberOfChars"] = 80;
	$tdatashomei_tbl[".ShortName"] = "shomei_tbl";
	$tdatashomei_tbl[".OwnerID"] = "";
	$tdatashomei_tbl[".OriginalTable"] = "shomei_tbl";

//	field labels
$fieldLabelsshomei_tbl = array();
$fieldToolTipsshomei_tbl = array();
$pageTitlesshomei_tbl = array();
$placeHoldersshomei_tbl = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsshomei_tbl["Japanese"] = array();
	$fieldToolTipsshomei_tbl["Japanese"] = array();
	$placeHoldersshomei_tbl["Japanese"] = array();
	$pageTitlesshomei_tbl["Japanese"] = array();
	$fieldLabelsshomei_tbl["Japanese"]["id"] = "Id";
	$fieldToolTipsshomei_tbl["Japanese"]["id"] = "";
	$placeHoldersshomei_tbl["Japanese"]["id"] = "";
	$fieldLabelsshomei_tbl["Japanese"]["title"] = "Title";
	$fieldToolTipsshomei_tbl["Japanese"]["title"] = "";
	$placeHoldersshomei_tbl["Japanese"]["title"] = "";
	$fieldLabelsshomei_tbl["Japanese"]["str"] = "Str";
	$fieldToolTipsshomei_tbl["Japanese"]["str"] = "";
	$placeHoldersshomei_tbl["Japanese"]["str"] = "";
	if (count($fieldToolTipsshomei_tbl["Japanese"]))
		$tdatashomei_tbl[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsshomei_tbl[""] = array();
	$fieldToolTipsshomei_tbl[""] = array();
	$placeHoldersshomei_tbl[""] = array();
	$pageTitlesshomei_tbl[""] = array();
	$fieldLabelsshomei_tbl[""]["id"] = "Id";
	$fieldToolTipsshomei_tbl[""]["id"] = "";
	$placeHoldersshomei_tbl[""]["id"] = "";
	$fieldLabelsshomei_tbl[""]["title"] = "Title";
	$fieldToolTipsshomei_tbl[""]["title"] = "";
	$placeHoldersshomei_tbl[""]["title"] = "";
	$fieldLabelsshomei_tbl[""]["str"] = "Str";
	$fieldToolTipsshomei_tbl[""]["str"] = "";
	$placeHoldersshomei_tbl[""]["str"] = "";
	if (count($fieldToolTipsshomei_tbl[""]))
		$tdatashomei_tbl[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsshomei_tbl["English"] = array();
	$fieldToolTipsshomei_tbl["English"] = array();
	$placeHoldersshomei_tbl["English"] = array();
	$pageTitlesshomei_tbl["English"] = array();
	$fieldLabelsshomei_tbl["English"]["id"] = "Id";
	$fieldToolTipsshomei_tbl["English"]["id"] = "";
	$placeHoldersshomei_tbl["English"]["id"] = "";
	$fieldLabelsshomei_tbl["English"]["title"] = "Title";
	$fieldToolTipsshomei_tbl["English"]["title"] = "";
	$placeHoldersshomei_tbl["English"]["title"] = "";
	$fieldLabelsshomei_tbl["English"]["str"] = "Str";
	$fieldToolTipsshomei_tbl["English"]["str"] = "";
	$placeHoldersshomei_tbl["English"]["str"] = "";
	if (count($fieldToolTipsshomei_tbl["English"]))
		$tdatashomei_tbl[".isUseToolTips"] = true;
}


	$tdatashomei_tbl[".NCSearch"] = true;



$tdatashomei_tbl[".shortTableName"] = "shomei_tbl";
$tdatashomei_tbl[".nSecOptions"] = 0;
$tdatashomei_tbl[".recsPerRowPrint"] = 1;
$tdatashomei_tbl[".mainTableOwnerID"] = "";
$tdatashomei_tbl[".moveNext"] = 1;
$tdatashomei_tbl[".entityType"] = 0;

$tdatashomei_tbl[".strOriginalTableName"] = "shomei_tbl";

	



$tdatashomei_tbl[".showAddInPopup"] = false;

$tdatashomei_tbl[".showEditInPopup"] = false;

$tdatashomei_tbl[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatashomei_tbl[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatashomei_tbl[".fieldsForRegister"] = array();

$tdatashomei_tbl[".listAjax"] = false;

	$tdatashomei_tbl[".audit"] = true;

	$tdatashomei_tbl[".locking"] = false;



$tdatashomei_tbl[".list"] = true;

$tdatashomei_tbl[".inlineEdit"] = true;


$tdatashomei_tbl[".reorderRecordsByHeader"] = true;



$tdatashomei_tbl[".inlineAdd"] = true;

$tdatashomei_tbl[".import"] = true;

$tdatashomei_tbl[".exportTo"] = true;


$tdatashomei_tbl[".delete"] = true;

$tdatashomei_tbl[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatashomei_tbl[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatashomei_tbl[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatashomei_tbl[".searchSaving"] = false;
//

$tdatashomei_tbl[".showSearchPanel"] = true;
		$tdatashomei_tbl[".flexibleSearch"] = true;

$tdatashomei_tbl[".isUseAjaxSuggest"] = true;

$tdatashomei_tbl[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatashomei_tbl[".ajaxCodeSnippetAdded"] = false;

$tdatashomei_tbl[".buttonsAdded"] = false;

$tdatashomei_tbl[".addPageEvents"] = false;

// use timepicker for search panel
$tdatashomei_tbl[".isUseTimeForSearch"] = false;





$tdatashomei_tbl[".allSearchFields"] = array();
$tdatashomei_tbl[".filterFields"] = array();
$tdatashomei_tbl[".requiredSearchFields"] = array();

$tdatashomei_tbl[".allSearchFields"][] = "id";
	$tdatashomei_tbl[".allSearchFields"][] = "title";
	$tdatashomei_tbl[".allSearchFields"][] = "str";
	

$tdatashomei_tbl[".googleLikeFields"] = array();
$tdatashomei_tbl[".googleLikeFields"][] = "id";
$tdatashomei_tbl[".googleLikeFields"][] = "title";
$tdatashomei_tbl[".googleLikeFields"][] = "str";


$tdatashomei_tbl[".advSearchFields"] = array();
$tdatashomei_tbl[".advSearchFields"][] = "id";
$tdatashomei_tbl[".advSearchFields"][] = "title";
$tdatashomei_tbl[".advSearchFields"][] = "str";

$tdatashomei_tbl[".tableType"] = "list";

$tdatashomei_tbl[".printerPageOrientation"] = 0;
$tdatashomei_tbl[".nPrinterPageScale"] = 100;

$tdatashomei_tbl[".nPrinterSplitRecords"] = 40;

$tdatashomei_tbl[".nPrinterPDFSplitRecords"] = 40;



$tdatashomei_tbl[".geocodingEnabled"] = false;





$tdatashomei_tbl[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatashomei_tbl[".pageSize"] = 20;

$tdatashomei_tbl[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatashomei_tbl[".strOrderBy"] = $tstrOrderBy;

$tdatashomei_tbl[".orderindexes"] = array();

$tdatashomei_tbl[".sqlHead"] = "SELECT `id`,  	`title`,  	`str`";
$tdatashomei_tbl[".sqlFrom"] = "FROM `shomei_tbl`";
$tdatashomei_tbl[".sqlWhereExpr"] = "";
$tdatashomei_tbl[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatashomei_tbl[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatashomei_tbl[".arrGroupsPerPage"] = $arrGPP;

$tdatashomei_tbl[".highlightSearchResults"] = true;

$tableKeysshomei_tbl = array();
$tableKeysshomei_tbl[] = "id";
$tdatashomei_tbl[".Keys"] = $tableKeysshomei_tbl;

$tdatashomei_tbl[".listFields"] = array();
$tdatashomei_tbl[".listFields"][] = "id";
$tdatashomei_tbl[".listFields"][] = "title";
$tdatashomei_tbl[".listFields"][] = "str";

$tdatashomei_tbl[".hideMobileList"] = array();


$tdatashomei_tbl[".viewFields"] = array();

$tdatashomei_tbl[".addFields"] = array();

$tdatashomei_tbl[".masterListFields"] = array();
$tdatashomei_tbl[".masterListFields"][] = "id";
$tdatashomei_tbl[".masterListFields"][] = "title";
$tdatashomei_tbl[".masterListFields"][] = "str";

$tdatashomei_tbl[".inlineAddFields"] = array();
$tdatashomei_tbl[".inlineAddFields"][] = "title";
$tdatashomei_tbl[".inlineAddFields"][] = "str";

$tdatashomei_tbl[".editFields"] = array();

$tdatashomei_tbl[".inlineEditFields"] = array();
$tdatashomei_tbl[".inlineEditFields"][] = "title";
$tdatashomei_tbl[".inlineEditFields"][] = "str";

$tdatashomei_tbl[".updateSelectedFields"] = array();


$tdatashomei_tbl[".exportFields"] = array();
$tdatashomei_tbl[".exportFields"][] = "id";
$tdatashomei_tbl[".exportFields"][] = "title";
$tdatashomei_tbl[".exportFields"][] = "str";

$tdatashomei_tbl[".importFields"] = array();
$tdatashomei_tbl[".importFields"][] = "id";
$tdatashomei_tbl[".importFields"][] = "title";
$tdatashomei_tbl[".importFields"][] = "str";

$tdatashomei_tbl[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "shomei_tbl";
	$fdata["Label"] = GetFieldLabel("shomei_tbl","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`id`";

	
	
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




	$tdatashomei_tbl["id"] = $fdata;
//	title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "title";
	$fdata["GoodName"] = "title";
	$fdata["ownerTable"] = "shomei_tbl";
	$fdata["Label"] = GetFieldLabel("shomei_tbl","title");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "title";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`title`";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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




	$tdatashomei_tbl["title"] = $fdata;
//	str
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "str";
	$fdata["GoodName"] = "str";
	$fdata["ownerTable"] = "shomei_tbl";
	$fdata["Label"] = GetFieldLabel("shomei_tbl","str");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "str";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`str`";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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




	$tdatashomei_tbl["str"] = $fdata;


$tables_data["shomei_tbl"]=&$tdatashomei_tbl;
$field_labels["shomei_tbl"] = &$fieldLabelsshomei_tbl;
$fieldToolTips["shomei_tbl"] = &$fieldToolTipsshomei_tbl;
$placeHolders["shomei_tbl"] = &$placeHoldersshomei_tbl;
$page_titles["shomei_tbl"] = &$pageTitlesshomei_tbl;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["shomei_tbl"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["shomei_tbl"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_shomei_tbl()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  	`title`,  	`str`";
$proto0["m_strFrom"] = "FROM `shomei_tbl`";
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
	"m_strTable" => "shomei_tbl",
	"m_srcTableName" => "shomei_tbl"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "shomei_tbl";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "title",
	"m_strTable" => "shomei_tbl",
	"m_srcTableName" => "shomei_tbl"
));

$proto8["m_sql"] = "`title`";
$proto8["m_srcTableName"] = "shomei_tbl";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "str",
	"m_strTable" => "shomei_tbl",
	"m_srcTableName" => "shomei_tbl"
));

$proto10["m_sql"] = "`str`";
$proto10["m_srcTableName"] = "shomei_tbl";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "shomei_tbl";
$proto13["m_srcTableName"] = "shomei_tbl";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "id";
$proto13["m_columns"][] = "title";
$proto13["m_columns"][] = "str";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "`shomei_tbl`";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "shomei_tbl";
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
$proto0["m_srcTableName"]="shomei_tbl";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_shomei_tbl = createSqlQuery_shomei_tbl();


	
		;

			

$tdatashomei_tbl[".sqlquery"] = $queryData_shomei_tbl;

$tableEvents["shomei_tbl"] = new eventsBase;
$tdatashomei_tbl[".hasEvents"] = false;

?>