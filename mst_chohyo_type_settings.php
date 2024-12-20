<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamst_chohyo_type = array();
	$tdatamst_chohyo_type[".truncateText"] = true;
	$tdatamst_chohyo_type[".NumberOfChars"] = 80;
	$tdatamst_chohyo_type[".ShortName"] = "mst_chohyo_type";
	$tdatamst_chohyo_type[".OwnerID"] = "";
	$tdatamst_chohyo_type[".OriginalTable"] = "mst_chohyo_type";

//	field labels
$fieldLabelsmst_chohyo_type = array();
$fieldToolTipsmst_chohyo_type = array();
$pageTitlesmst_chohyo_type = array();
$placeHoldersmst_chohyo_type = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmst_chohyo_type["Japanese"] = array();
	$fieldToolTipsmst_chohyo_type["Japanese"] = array();
	$placeHoldersmst_chohyo_type["Japanese"] = array();
	$pageTitlesmst_chohyo_type["Japanese"] = array();
	$fieldLabelsmst_chohyo_type["Japanese"]["id"] = "Id";
	$fieldToolTipsmst_chohyo_type["Japanese"]["id"] = "";
	$placeHoldersmst_chohyo_type["Japanese"]["id"] = "";
	$fieldLabelsmst_chohyo_type["Japanese"]["name"] = "Name";
	$fieldToolTipsmst_chohyo_type["Japanese"]["name"] = "";
	$placeHoldersmst_chohyo_type["Japanese"]["name"] = "";
	if (count($fieldToolTipsmst_chohyo_type["Japanese"]))
		$tdatamst_chohyo_type[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmst_chohyo_type[""] = array();
	$fieldToolTipsmst_chohyo_type[""] = array();
	$placeHoldersmst_chohyo_type[""] = array();
	$pageTitlesmst_chohyo_type[""] = array();
	$fieldLabelsmst_chohyo_type[""]["id"] = "Id";
	$fieldToolTipsmst_chohyo_type[""]["id"] = "";
	$placeHoldersmst_chohyo_type[""]["id"] = "";
	$fieldLabelsmst_chohyo_type[""]["name"] = "Name";
	$fieldToolTipsmst_chohyo_type[""]["name"] = "";
	$placeHoldersmst_chohyo_type[""]["name"] = "";
	if (count($fieldToolTipsmst_chohyo_type[""]))
		$tdatamst_chohyo_type[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmst_chohyo_type["English"] = array();
	$fieldToolTipsmst_chohyo_type["English"] = array();
	$placeHoldersmst_chohyo_type["English"] = array();
	$pageTitlesmst_chohyo_type["English"] = array();
	$fieldLabelsmst_chohyo_type["English"]["id"] = "Id";
	$fieldToolTipsmst_chohyo_type["English"]["id"] = "";
	$placeHoldersmst_chohyo_type["English"]["id"] = "";
	$fieldLabelsmst_chohyo_type["English"]["name"] = "Name";
	$fieldToolTipsmst_chohyo_type["English"]["name"] = "";
	$placeHoldersmst_chohyo_type["English"]["name"] = "";
	if (count($fieldToolTipsmst_chohyo_type["English"]))
		$tdatamst_chohyo_type[".isUseToolTips"] = true;
}


	$tdatamst_chohyo_type[".NCSearch"] = true;



$tdatamst_chohyo_type[".shortTableName"] = "mst_chohyo_type";
$tdatamst_chohyo_type[".nSecOptions"] = 0;
$tdatamst_chohyo_type[".recsPerRowPrint"] = 1;
$tdatamst_chohyo_type[".mainTableOwnerID"] = "";
$tdatamst_chohyo_type[".moveNext"] = 1;
$tdatamst_chohyo_type[".entityType"] = 0;

$tdatamst_chohyo_type[".strOriginalTableName"] = "mst_chohyo_type";

	



$tdatamst_chohyo_type[".showAddInPopup"] = false;

$tdatamst_chohyo_type[".showEditInPopup"] = false;

$tdatamst_chohyo_type[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamst_chohyo_type[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamst_chohyo_type[".fieldsForRegister"] = array();

$tdatamst_chohyo_type[".listAjax"] = false;

	$tdatamst_chohyo_type[".audit"] = true;

	$tdatamst_chohyo_type[".locking"] = false;



$tdatamst_chohyo_type[".list"] = true;

$tdatamst_chohyo_type[".inlineEdit"] = true;


$tdatamst_chohyo_type[".reorderRecordsByHeader"] = true;



$tdatamst_chohyo_type[".inlineAdd"] = true;





$tdatamst_chohyo_type[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamst_chohyo_type[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamst_chohyo_type[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamst_chohyo_type[".searchSaving"] = false;
//

$tdatamst_chohyo_type[".showSearchPanel"] = true;
		$tdatamst_chohyo_type[".flexibleSearch"] = true;

$tdatamst_chohyo_type[".isUseAjaxSuggest"] = true;

$tdatamst_chohyo_type[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatamst_chohyo_type[".ajaxCodeSnippetAdded"] = false;

$tdatamst_chohyo_type[".buttonsAdded"] = false;

$tdatamst_chohyo_type[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamst_chohyo_type[".isUseTimeForSearch"] = false;





$tdatamst_chohyo_type[".allSearchFields"] = array();
$tdatamst_chohyo_type[".filterFields"] = array();
$tdatamst_chohyo_type[".requiredSearchFields"] = array();



$tdatamst_chohyo_type[".googleLikeFields"] = array();
$tdatamst_chohyo_type[".googleLikeFields"][] = "id";
$tdatamst_chohyo_type[".googleLikeFields"][] = "name";



$tdatamst_chohyo_type[".tableType"] = "list";

$tdatamst_chohyo_type[".printerPageOrientation"] = 0;
$tdatamst_chohyo_type[".nPrinterPageScale"] = 100;

$tdatamst_chohyo_type[".nPrinterSplitRecords"] = 40;

$tdatamst_chohyo_type[".nPrinterPDFSplitRecords"] = 40;



$tdatamst_chohyo_type[".geocodingEnabled"] = false;





$tdatamst_chohyo_type[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamst_chohyo_type[".pageSize"] = 20;

$tdatamst_chohyo_type[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamst_chohyo_type[".strOrderBy"] = $tstrOrderBy;

$tdatamst_chohyo_type[".orderindexes"] = array();

$tdatamst_chohyo_type[".sqlHead"] = "SELECT `id`,  	`name`";
$tdatamst_chohyo_type[".sqlFrom"] = "FROM `mst_chohyo_type`";
$tdatamst_chohyo_type[".sqlWhereExpr"] = "";
$tdatamst_chohyo_type[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamst_chohyo_type[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamst_chohyo_type[".arrGroupsPerPage"] = $arrGPP;

$tdatamst_chohyo_type[".highlightSearchResults"] = true;

$tableKeysmst_chohyo_type = array();
$tableKeysmst_chohyo_type[] = "id";
$tdatamst_chohyo_type[".Keys"] = $tableKeysmst_chohyo_type;

$tdatamst_chohyo_type[".listFields"] = array();
$tdatamst_chohyo_type[".listFields"][] = "id";
$tdatamst_chohyo_type[".listFields"][] = "name";

$tdatamst_chohyo_type[".hideMobileList"] = array();


$tdatamst_chohyo_type[".viewFields"] = array();
$tdatamst_chohyo_type[".viewFields"][] = "id";
$tdatamst_chohyo_type[".viewFields"][] = "name";

$tdatamst_chohyo_type[".addFields"] = array();
$tdatamst_chohyo_type[".addFields"][] = "id";
$tdatamst_chohyo_type[".addFields"][] = "name";

$tdatamst_chohyo_type[".masterListFields"] = array();
$tdatamst_chohyo_type[".masterListFields"][] = "id";
$tdatamst_chohyo_type[".masterListFields"][] = "name";

$tdatamst_chohyo_type[".inlineAddFields"] = array();
$tdatamst_chohyo_type[".inlineAddFields"][] = "id";
$tdatamst_chohyo_type[".inlineAddFields"][] = "name";

$tdatamst_chohyo_type[".editFields"] = array();
$tdatamst_chohyo_type[".editFields"][] = "id";
$tdatamst_chohyo_type[".editFields"][] = "name";

$tdatamst_chohyo_type[".inlineEditFields"] = array();
$tdatamst_chohyo_type[".inlineEditFields"][] = "id";
$tdatamst_chohyo_type[".inlineEditFields"][] = "name";

$tdatamst_chohyo_type[".updateSelectedFields"] = array();
$tdatamst_chohyo_type[".updateSelectedFields"][] = "id";
$tdatamst_chohyo_type[".updateSelectedFields"][] = "name";


$tdatamst_chohyo_type[".exportFields"] = array();
$tdatamst_chohyo_type[".exportFields"][] = "id";
$tdatamst_chohyo_type[".exportFields"][] = "name";

$tdatamst_chohyo_type[".importFields"] = array();
$tdatamst_chohyo_type[".importFields"][] = "id";
$tdatamst_chohyo_type[".importFields"][] = "name";

$tdatamst_chohyo_type[".printFields"] = array();
$tdatamst_chohyo_type[".printFields"][] = "id";
$tdatamst_chohyo_type[".printFields"][] = "name";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "mst_chohyo_type";
	$fdata["Label"] = GetFieldLabel("mst_chohyo_type","id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

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








	$tdatamst_chohyo_type["id"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "mst_chohyo_type";
	$fdata["Label"] = GetFieldLabel("mst_chohyo_type","name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
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








	$tdatamst_chohyo_type["name"] = $fdata;


$tables_data["mst_chohyo_type"]=&$tdatamst_chohyo_type;
$field_labels["mst_chohyo_type"] = &$fieldLabelsmst_chohyo_type;
$fieldToolTips["mst_chohyo_type"] = &$fieldToolTipsmst_chohyo_type;
$placeHolders["mst_chohyo_type"] = &$placeHoldersmst_chohyo_type;
$page_titles["mst_chohyo_type"] = &$pageTitlesmst_chohyo_type;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mst_chohyo_type"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mst_chohyo_type"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mst_chohyo_type()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  	`name`";
$proto0["m_strFrom"] = "FROM `mst_chohyo_type`";
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
	"m_strTable" => "mst_chohyo_type",
	"m_srcTableName" => "mst_chohyo_type"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "mst_chohyo_type";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "mst_chohyo_type",
	"m_srcTableName" => "mst_chohyo_type"
));

$proto8["m_sql"] = "`name`";
$proto8["m_srcTableName"] = "mst_chohyo_type";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "mst_chohyo_type";
$proto11["m_srcTableName"] = "mst_chohyo_type";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "id";
$proto11["m_columns"][] = "name";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "`mst_chohyo_type`";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "mst_chohyo_type";
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
$proto0["m_srcTableName"]="mst_chohyo_type";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mst_chohyo_type = createSqlQuery_mst_chohyo_type();


	
		;

		

$tdatamst_chohyo_type[".sqlquery"] = $queryData_mst_chohyo_type;

$tableEvents["mst_chohyo_type"] = new eventsBase;
$tdatamst_chohyo_type[".hasEvents"] = false;

?>