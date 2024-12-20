<?php
require_once(getabspath("classes/cipherer.php"));




$tdata_sex = array();
	$tdata_sex[".truncateText"] = true;
	$tdata_sex[".NumberOfChars"] = 80;
	$tdata_sex[".ShortName"] = "_sex";
	$tdata_sex[".OwnerID"] = "";
	$tdata_sex[".OriginalTable"] = "_sex";

//	field labels
$fieldLabels_sex = array();
$fieldToolTips_sex = array();
$pageTitles_sex = array();
$placeHolders_sex = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabels_sex["Japanese"] = array();
	$fieldToolTips_sex["Japanese"] = array();
	$placeHolders_sex["Japanese"] = array();
	$pageTitles_sex["Japanese"] = array();
	$fieldLabels_sex["Japanese"]["sex_id"] = "Sex Id";
	$fieldToolTips_sex["Japanese"]["sex_id"] = "";
	$placeHolders_sex["Japanese"]["sex_id"] = "";
	$fieldLabels_sex["Japanese"]["sex_name"] = "Sex Name";
	$fieldToolTips_sex["Japanese"]["sex_name"] = "";
	$placeHolders_sex["Japanese"]["sex_name"] = "";
	$fieldLabels_sex["Japanese"]["sex_ini"] = "Sex Ini";
	$fieldToolTips_sex["Japanese"]["sex_ini"] = "";
	$placeHolders_sex["Japanese"]["sex_ini"] = "";
	if (count($fieldToolTips_sex["Japanese"]))
		$tdata_sex[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabels_sex[""] = array();
	$fieldToolTips_sex[""] = array();
	$placeHolders_sex[""] = array();
	$pageTitles_sex[""] = array();
	if (count($fieldToolTips_sex[""]))
		$tdata_sex[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabels_sex["English"] = array();
	$fieldToolTips_sex["English"] = array();
	$placeHolders_sex["English"] = array();
	$pageTitles_sex["English"] = array();
	if (count($fieldToolTips_sex["English"]))
		$tdata_sex[".isUseToolTips"] = true;
}


	$tdata_sex[".NCSearch"] = true;



$tdata_sex[".shortTableName"] = "_sex";
$tdata_sex[".nSecOptions"] = 0;
$tdata_sex[".recsPerRowPrint"] = 1;
$tdata_sex[".mainTableOwnerID"] = "";
$tdata_sex[".moveNext"] = 1;
$tdata_sex[".entityType"] = 0;

$tdata_sex[".strOriginalTableName"] = "_sex";

	



$tdata_sex[".showAddInPopup"] = false;

$tdata_sex[".showEditInPopup"] = false;

$tdata_sex[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdata_sex[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdata_sex[".fieldsForRegister"] = array();

$tdata_sex[".listAjax"] = false;

	$tdata_sex[".audit"] = false;

	$tdata_sex[".locking"] = false;






$tdata_sex[".reorderRecordsByHeader"] = true;








$tdata_sex[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdata_sex[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdata_sex[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdata_sex[".searchSaving"] = false;
//

$tdata_sex[".showSearchPanel"] = true;
		$tdata_sex[".flexibleSearch"] = true;

$tdata_sex[".isUseAjaxSuggest"] = true;

$tdata_sex[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdata_sex[".ajaxCodeSnippetAdded"] = false;

$tdata_sex[".buttonsAdded"] = false;

$tdata_sex[".addPageEvents"] = false;

// use timepicker for search panel
$tdata_sex[".isUseTimeForSearch"] = false;





$tdata_sex[".allSearchFields"] = array();
$tdata_sex[".filterFields"] = array();
$tdata_sex[".requiredSearchFields"] = array();



$tdata_sex[".googleLikeFields"] = array();
$tdata_sex[".googleLikeFields"][] = "sex_id";
$tdata_sex[".googleLikeFields"][] = "sex_name";
$tdata_sex[".googleLikeFields"][] = "sex_ini";



$tdata_sex[".tableType"] = "list";

$tdata_sex[".printerPageOrientation"] = 0;
$tdata_sex[".nPrinterPageScale"] = 100;

$tdata_sex[".nPrinterSplitRecords"] = 40;

$tdata_sex[".nPrinterPDFSplitRecords"] = 40;



$tdata_sex[".geocodingEnabled"] = false;





$tdata_sex[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdata_sex[".pageSize"] = 20;

$tdata_sex[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdata_sex[".strOrderBy"] = $tstrOrderBy;

$tdata_sex[".orderindexes"] = array();

$tdata_sex[".sqlHead"] = "SELECT sex_id,  	sex_name,  	sex_ini";
$tdata_sex[".sqlFrom"] = "FROM `_sex`";
$tdata_sex[".sqlWhereExpr"] = "";
$tdata_sex[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdata_sex[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdata_sex[".arrGroupsPerPage"] = $arrGPP;

$tdata_sex[".highlightSearchResults"] = true;

$tableKeys_sex = array();
$tableKeys_sex[] = "sex_id";
$tdata_sex[".Keys"] = $tableKeys_sex;

$tdata_sex[".listFields"] = array();

$tdata_sex[".hideMobileList"] = array();


$tdata_sex[".viewFields"] = array();

$tdata_sex[".addFields"] = array();

$tdata_sex[".masterListFields"] = array();
$tdata_sex[".masterListFields"][] = "sex_id";
$tdata_sex[".masterListFields"][] = "sex_name";
$tdata_sex[".masterListFields"][] = "sex_ini";

$tdata_sex[".inlineAddFields"] = array();

$tdata_sex[".editFields"] = array();

$tdata_sex[".inlineEditFields"] = array();

$tdata_sex[".updateSelectedFields"] = array();


$tdata_sex[".exportFields"] = array();

$tdata_sex[".importFields"] = array();

$tdata_sex[".printFields"] = array();

//	sex_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "sex_id";
	$fdata["GoodName"] = "sex_id";
	$fdata["ownerTable"] = "_sex";
	$fdata["Label"] = GetFieldLabel("_sex","sex_id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "sex_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sex_id";

	
	
			
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








	$tdata_sex["sex_id"] = $fdata;
//	sex_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "sex_name";
	$fdata["GoodName"] = "sex_name";
	$fdata["ownerTable"] = "_sex";
	$fdata["Label"] = GetFieldLabel("_sex","sex_name");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "sex_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sex_name";

	
	
			
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
			$edata["EditParams"].= " maxlength=12";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdata_sex["sex_name"] = $fdata;
//	sex_ini
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sex_ini";
	$fdata["GoodName"] = "sex_ini";
	$fdata["ownerTable"] = "_sex";
	$fdata["Label"] = GetFieldLabel("_sex","sex_ini");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "sex_ini";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sex_ini";

	
	
			
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
			$edata["EditParams"].= " maxlength=12";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdata_sex["sex_ini"] = $fdata;


$tables_data["_sex"]=&$tdata_sex;
$field_labels["_sex"] = &$fieldLabels_sex;
$fieldToolTips["_sex"] = &$fieldToolTips_sex;
$placeHolders["_sex"] = &$placeHolders_sex;
$page_titles["_sex"] = &$pageTitles_sex;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["_sex"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["_sex"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery__sex()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "sex_id,  	sex_name,  	sex_ini";
$proto0["m_strFrom"] = "FROM `_sex`";
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
	"m_strName" => "sex_id",
	"m_strTable" => "_sex",
	"m_srcTableName" => "_sex"
));

$proto6["m_sql"] = "sex_id";
$proto6["m_srcTableName"] = "_sex";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "sex_name",
	"m_strTable" => "_sex",
	"m_srcTableName" => "_sex"
));

$proto8["m_sql"] = "sex_name";
$proto8["m_srcTableName"] = "_sex";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "sex_ini",
	"m_strTable" => "_sex",
	"m_srcTableName" => "_sex"
));

$proto10["m_sql"] = "sex_ini";
$proto10["m_srcTableName"] = "_sex";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "_sex";
$proto13["m_srcTableName"] = "_sex";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "sex_id";
$proto13["m_columns"][] = "sex_name";
$proto13["m_columns"][] = "sex_ini";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "`_sex`";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "_sex";
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
$proto0["m_srcTableName"]="_sex";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData__sex = createSqlQuery__sex();


	
		;

			

$tdata_sex[".sqlquery"] = $queryData__sex;

$tableEvents["_sex"] = new eventsBase;
$tdata_sex[".hasEvents"] = false;

?>