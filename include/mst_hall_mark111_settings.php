<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamst_hall_mark111 = array();
	$tdatamst_hall_mark111[".truncateText"] = true;
	$tdatamst_hall_mark111[".NumberOfChars"] = 80;
	$tdatamst_hall_mark111[".ShortName"] = "mst_hall_mark111";
	$tdatamst_hall_mark111[".OwnerID"] = "";
	$tdatamst_hall_mark111[".OriginalTable"] = "mst_hall_mark";

//	field labels
$fieldLabelsmst_hall_mark111 = array();
$fieldToolTipsmst_hall_mark111 = array();
$pageTitlesmst_hall_mark111 = array();
$placeHoldersmst_hall_mark111 = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmst_hall_mark111["Japanese"] = array();
	$fieldToolTipsmst_hall_mark111["Japanese"] = array();
	$placeHoldersmst_hall_mark111["Japanese"] = array();
	$pageTitlesmst_hall_mark111["Japanese"] = array();
	$fieldLabelsmst_hall_mark111["Japanese"]["name"] = "Name";
	$fieldToolTipsmst_hall_mark111["Japanese"]["name"] = "";
	$placeHoldersmst_hall_mark111["Japanese"]["name"] = "";
	$fieldLabelsmst_hall_mark111["Japanese"]["id"] = "Id";
	$fieldToolTipsmst_hall_mark111["Japanese"]["id"] = "";
	$placeHoldersmst_hall_mark111["Japanese"]["id"] = "";
	if (count($fieldToolTipsmst_hall_mark111["Japanese"]))
		$tdatamst_hall_mark111[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmst_hall_mark111[""] = array();
	$fieldToolTipsmst_hall_mark111[""] = array();
	$placeHoldersmst_hall_mark111[""] = array();
	$pageTitlesmst_hall_mark111[""] = array();
	if (count($fieldToolTipsmst_hall_mark111[""]))
		$tdatamst_hall_mark111[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmst_hall_mark111["English"] = array();
	$fieldToolTipsmst_hall_mark111["English"] = array();
	$placeHoldersmst_hall_mark111["English"] = array();
	$pageTitlesmst_hall_mark111["English"] = array();
	if (count($fieldToolTipsmst_hall_mark111["English"]))
		$tdatamst_hall_mark111[".isUseToolTips"] = true;
}


	$tdatamst_hall_mark111[".NCSearch"] = true;



$tdatamst_hall_mark111[".shortTableName"] = "mst_hall_mark111";
$tdatamst_hall_mark111[".nSecOptions"] = 0;
$tdatamst_hall_mark111[".recsPerRowPrint"] = 1;
$tdatamst_hall_mark111[".mainTableOwnerID"] = "";
$tdatamst_hall_mark111[".moveNext"] = 1;
$tdatamst_hall_mark111[".entityType"] = 1;

$tdatamst_hall_mark111[".strOriginalTableName"] = "mst_hall_mark";

	



$tdatamst_hall_mark111[".showAddInPopup"] = false;

$tdatamst_hall_mark111[".showEditInPopup"] = false;

$tdatamst_hall_mark111[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamst_hall_mark111[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamst_hall_mark111[".fieldsForRegister"] = array();

$tdatamst_hall_mark111[".listAjax"] = false;

	$tdatamst_hall_mark111[".audit"] = true;

	$tdatamst_hall_mark111[".locking"] = false;



$tdatamst_hall_mark111[".list"] = true;



$tdatamst_hall_mark111[".reorderRecordsByHeader"] = true;



$tdatamst_hall_mark111[".inlineAdd"] = true;

$tdatamst_hall_mark111[".import"] = true;

$tdatamst_hall_mark111[".exportTo"] = true;



$tdatamst_hall_mark111[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamst_hall_mark111[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamst_hall_mark111[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamst_hall_mark111[".searchSaving"] = false;
//

$tdatamst_hall_mark111[".showSearchPanel"] = true;
		$tdatamst_hall_mark111[".flexibleSearch"] = true;

$tdatamst_hall_mark111[".isUseAjaxSuggest"] = true;

$tdatamst_hall_mark111[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatamst_hall_mark111[".ajaxCodeSnippetAdded"] = false;

$tdatamst_hall_mark111[".buttonsAdded"] = false;

$tdatamst_hall_mark111[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamst_hall_mark111[".isUseTimeForSearch"] = false;





$tdatamst_hall_mark111[".allSearchFields"] = array();
$tdatamst_hall_mark111[".filterFields"] = array();
$tdatamst_hall_mark111[".requiredSearchFields"] = array();

$tdatamst_hall_mark111[".allSearchFields"][] = "name";
	$tdatamst_hall_mark111[".allSearchFields"][] = "id";
	

$tdatamst_hall_mark111[".googleLikeFields"] = array();
$tdatamst_hall_mark111[".googleLikeFields"][] = "name";
$tdatamst_hall_mark111[".googleLikeFields"][] = "id";


$tdatamst_hall_mark111[".advSearchFields"] = array();
$tdatamst_hall_mark111[".advSearchFields"][] = "name";
$tdatamst_hall_mark111[".advSearchFields"][] = "id";

$tdatamst_hall_mark111[".tableType"] = "list";

$tdatamst_hall_mark111[".printerPageOrientation"] = 0;
$tdatamst_hall_mark111[".nPrinterPageScale"] = 100;

$tdatamst_hall_mark111[".nPrinterSplitRecords"] = 40;

$tdatamst_hall_mark111[".nPrinterPDFSplitRecords"] = 40;



$tdatamst_hall_mark111[".geocodingEnabled"] = false;





$tdatamst_hall_mark111[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamst_hall_mark111[".pageSize"] = 100;

$tdatamst_hall_mark111[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamst_hall_mark111[".strOrderBy"] = $tstrOrderBy;

$tdatamst_hall_mark111[".orderindexes"] = array();

$tdatamst_hall_mark111[".sqlHead"] = "SELECT `mst_hall_mark`.`name`,  `mst_country_of_origin`.`id`";
$tdatamst_hall_mark111[".sqlFrom"] = "FROM `mst_hall_mark`  INNER JOIN `mst_country_of_origin` ON `mst_hall_mark`.`country_of_origin` = `mst_country_of_origin`.`country_group`";
$tdatamst_hall_mark111[".sqlWhereExpr"] = "";
$tdatamst_hall_mark111[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamst_hall_mark111[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamst_hall_mark111[".arrGroupsPerPage"] = $arrGPP;

$tdatamst_hall_mark111[".highlightSearchResults"] = true;

$tableKeysmst_hall_mark111 = array();
$tdatamst_hall_mark111[".Keys"] = $tableKeysmst_hall_mark111;

$tdatamst_hall_mark111[".listFields"] = array();
$tdatamst_hall_mark111[".listFields"][] = "id";
$tdatamst_hall_mark111[".listFields"][] = "name";

$tdatamst_hall_mark111[".hideMobileList"] = array();


$tdatamst_hall_mark111[".viewFields"] = array();

$tdatamst_hall_mark111[".addFields"] = array();

$tdatamst_hall_mark111[".masterListFields"] = array();
$tdatamst_hall_mark111[".masterListFields"][] = "name";
$tdatamst_hall_mark111[".masterListFields"][] = "id";

$tdatamst_hall_mark111[".inlineAddFields"] = array();
$tdatamst_hall_mark111[".inlineAddFields"][] = "name";

$tdatamst_hall_mark111[".editFields"] = array();

$tdatamst_hall_mark111[".inlineEditFields"] = array();

$tdatamst_hall_mark111[".updateSelectedFields"] = array();


$tdatamst_hall_mark111[".exportFields"] = array();
$tdatamst_hall_mark111[".exportFields"][] = "name";
$tdatamst_hall_mark111[".exportFields"][] = "id";

$tdatamst_hall_mark111[".importFields"] = array();
$tdatamst_hall_mark111[".importFields"][] = "name";
$tdatamst_hall_mark111[".importFields"][] = "id";

$tdatamst_hall_mark111[".printFields"] = array();

//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "mst_hall_mark";
	$fdata["Label"] = GetFieldLabel("mst_hall_mark111","name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mst_hall_mark`.`name`";

	
	
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




	$tdatamst_hall_mark111["name"] = $fdata;
//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "mst_country_of_origin";
	$fdata["Label"] = GetFieldLabel("mst_hall_mark111","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mst_country_of_origin`.`id`";

	
	
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




	$tdatamst_hall_mark111["id"] = $fdata;


$tables_data["mst_hall_mark111"]=&$tdatamst_hall_mark111;
$field_labels["mst_hall_mark111"] = &$fieldLabelsmst_hall_mark111;
$fieldToolTips["mst_hall_mark111"] = &$fieldToolTipsmst_hall_mark111;
$placeHolders["mst_hall_mark111"] = &$placeHoldersmst_hall_mark111;
$page_titles["mst_hall_mark111"] = &$pageTitlesmst_hall_mark111;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mst_hall_mark111"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mst_hall_mark111"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mst_hall_mark111()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`mst_hall_mark`.`name`,  `mst_country_of_origin`.`id`";
$proto0["m_strFrom"] = "FROM `mst_hall_mark`  INNER JOIN `mst_country_of_origin` ON `mst_hall_mark`.`country_of_origin` = `mst_country_of_origin`.`country_group`";
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
	"m_srcTableName" => "mst_hall_mark111"
));

$proto6["m_sql"] = "`mst_hall_mark`.`name`";
$proto6["m_srcTableName"] = "mst_hall_mark111";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "mst_country_of_origin",
	"m_srcTableName" => "mst_hall_mark111"
));

$proto8["m_sql"] = "`mst_country_of_origin`.`id`";
$proto8["m_srcTableName"] = "mst_hall_mark111";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "mst_hall_mark";
$proto11["m_srcTableName"] = "mst_hall_mark111";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "id";
$proto11["m_columns"][] = "country_of_origin";
$proto11["m_columns"][] = "name";
$proto11["m_columns"][] = "sort";
$proto11["m_columns"][] = "update_at";
$proto11["m_columns"][] = "update_by";
$proto11["m_columns"][] = "create_at";
$proto11["m_columns"][] = "create_by";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "`mst_hall_mark`";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "mst_hall_mark111";
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
												$proto14=array();
$proto14["m_link"] = "SQLL_INNERJOIN";
			$proto15=array();
$proto15["m_strName"] = "mst_country_of_origin";
$proto15["m_srcTableName"] = "mst_hall_mark111";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "id";
$proto15["m_columns"][] = "name";
$proto15["m_columns"][] = "sort";
$proto15["m_columns"][] = "line";
$proto15["m_columns"][] = "yahoo_junle";
$proto15["m_columns"][] = "category_id";
$proto15["m_columns"][] = "sub_category_id1";
$proto15["m_columns"][] = "updated_at";
$proto15["m_columns"][] = "updated_by";
$proto15["m_columns"][] = "created_at";
$proto15["m_columns"][] = "created_by";
$proto15["m_columns"][] = "english_name";
$proto15["m_columns"][] = "country_group";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "INNER JOIN `mst_country_of_origin` ON `mst_hall_mark`.`country_of_origin` = `mst_country_of_origin`.`country_group`";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "mst_hall_mark111";
$proto16=array();
$proto16["m_sql"] = "`mst_hall_mark`.`country_of_origin` = `mst_country_of_origin`.`country_group`";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "country_of_origin",
	"m_strTable" => "mst_hall_mark",
	"m_srcTableName" => "mst_hall_mark111"
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "= `mst_country_of_origin`.`country_group`";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = false;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

$proto14["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto14);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="mst_hall_mark111";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mst_hall_mark111 = createSqlQuery_mst_hall_mark111();


	
		;

		

$tdatamst_hall_mark111[".sqlquery"] = $queryData_mst_hall_mark111;

include_once(getabspath("include/mst_hall_mark111_events.php"));
$tableEvents["mst_hall_mark111"] = new eventclass_mst_hall_mark111;
$tdatamst_hall_mark111[".hasEvents"] = true;

?>