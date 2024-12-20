<?php
require_once(getabspath("classes/cipherer.php"));




$tdata_DIA_DA_STATUS = array();
	$tdata_DIA_DA_STATUS[".truncateText"] = true;
	$tdata_DIA_DA_STATUS[".NumberOfChars"] = 80;
	$tdata_DIA_DA_STATUS[".ShortName"] = "_DIA_DA_STATUS";
	$tdata_DIA_DA_STATUS[".OwnerID"] = "";
	$tdata_DIA_DA_STATUS[".OriginalTable"] = "_DIA_DA_STATUS";

//	field labels
$fieldLabels_DIA_DA_STATUS = array();
$fieldToolTips_DIA_DA_STATUS = array();
$pageTitles_DIA_DA_STATUS = array();
$placeHolders_DIA_DA_STATUS = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabels_DIA_DA_STATUS["Japanese"] = array();
	$fieldToolTips_DIA_DA_STATUS["Japanese"] = array();
	$placeHolders_DIA_DA_STATUS["Japanese"] = array();
	$pageTitles_DIA_DA_STATUS["Japanese"] = array();
	$fieldLabels_DIA_DA_STATUS["Japanese"]["id"] = "Id";
	$fieldToolTips_DIA_DA_STATUS["Japanese"]["id"] = "";
	$placeHolders_DIA_DA_STATUS["Japanese"]["id"] = "";
	$fieldLabels_DIA_DA_STATUS["Japanese"]["name"] = "Name";
	$fieldToolTips_DIA_DA_STATUS["Japanese"]["name"] = "";
	$placeHolders_DIA_DA_STATUS["Japanese"]["name"] = "";
	$fieldLabels_DIA_DA_STATUS["Japanese"]["sort"] = "Sort";
	$fieldToolTips_DIA_DA_STATUS["Japanese"]["sort"] = "";
	$placeHolders_DIA_DA_STATUS["Japanese"]["sort"] = "";
	$fieldLabels_DIA_DA_STATUS["Japanese"]["pareint"] = "Pareint";
	$fieldToolTips_DIA_DA_STATUS["Japanese"]["pareint"] = "";
	$placeHolders_DIA_DA_STATUS["Japanese"]["pareint"] = "";
	$fieldLabels_DIA_DA_STATUS["Japanese"]["id_store_prod"] = "Id Store Prod";
	$fieldToolTips_DIA_DA_STATUS["Japanese"]["id_store_prod"] = "";
	$placeHolders_DIA_DA_STATUS["Japanese"]["id_store_prod"] = "";
	if (count($fieldToolTips_DIA_DA_STATUS["Japanese"]))
		$tdata_DIA_DA_STATUS[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabels_DIA_DA_STATUS[""] = array();
	$fieldToolTips_DIA_DA_STATUS[""] = array();
	$placeHolders_DIA_DA_STATUS[""] = array();
	$pageTitles_DIA_DA_STATUS[""] = array();
	$fieldLabels_DIA_DA_STATUS[""]["id"] = "Id";
	$fieldToolTips_DIA_DA_STATUS[""]["id"] = "";
	$placeHolders_DIA_DA_STATUS[""]["id"] = "";
	$fieldLabels_DIA_DA_STATUS[""]["name"] = "Name";
	$fieldToolTips_DIA_DA_STATUS[""]["name"] = "";
	$placeHolders_DIA_DA_STATUS[""]["name"] = "";
	$fieldLabels_DIA_DA_STATUS[""]["sort"] = "Sort";
	$fieldToolTips_DIA_DA_STATUS[""]["sort"] = "";
	$placeHolders_DIA_DA_STATUS[""]["sort"] = "";
	$fieldLabels_DIA_DA_STATUS[""]["pareint"] = "Pareint";
	$fieldToolTips_DIA_DA_STATUS[""]["pareint"] = "";
	$placeHolders_DIA_DA_STATUS[""]["pareint"] = "";
	$fieldLabels_DIA_DA_STATUS[""]["id_store_prod"] = "Id Store Prod";
	$fieldToolTips_DIA_DA_STATUS[""]["id_store_prod"] = "";
	$placeHolders_DIA_DA_STATUS[""]["id_store_prod"] = "";
	if (count($fieldToolTips_DIA_DA_STATUS[""]))
		$tdata_DIA_DA_STATUS[".isUseToolTips"] = true;
}


	$tdata_DIA_DA_STATUS[".NCSearch"] = true;



$tdata_DIA_DA_STATUS[".shortTableName"] = "_DIA_DA_STATUS";
$tdata_DIA_DA_STATUS[".nSecOptions"] = 0;
$tdata_DIA_DA_STATUS[".recsPerRowPrint"] = 1;
$tdata_DIA_DA_STATUS[".mainTableOwnerID"] = "";
$tdata_DIA_DA_STATUS[".moveNext"] = 1;
$tdata_DIA_DA_STATUS[".entityType"] = 0;

$tdata_DIA_DA_STATUS[".strOriginalTableName"] = "_DIA_DA_STATUS";

	



$tdata_DIA_DA_STATUS[".showAddInPopup"] = false;

$tdata_DIA_DA_STATUS[".showEditInPopup"] = false;

$tdata_DIA_DA_STATUS[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdata_DIA_DA_STATUS[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdata_DIA_DA_STATUS[".fieldsForRegister"] = array();

$tdata_DIA_DA_STATUS[".listAjax"] = false;

	$tdata_DIA_DA_STATUS[".audit"] = false;

	$tdata_DIA_DA_STATUS[".locking"] = false;






$tdata_DIA_DA_STATUS[".reorderRecordsByHeader"] = true;








$tdata_DIA_DA_STATUS[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdata_DIA_DA_STATUS[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdata_DIA_DA_STATUS[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdata_DIA_DA_STATUS[".searchSaving"] = false;
//

$tdata_DIA_DA_STATUS[".showSearchPanel"] = true;
		$tdata_DIA_DA_STATUS[".flexibleSearch"] = true;

$tdata_DIA_DA_STATUS[".isUseAjaxSuggest"] = true;

$tdata_DIA_DA_STATUS[".rowHighlite"] = true;





$tdata_DIA_DA_STATUS[".ajaxCodeSnippetAdded"] = false;

$tdata_DIA_DA_STATUS[".buttonsAdded"] = false;

$tdata_DIA_DA_STATUS[".addPageEvents"] = false;

// use timepicker for search panel
$tdata_DIA_DA_STATUS[".isUseTimeForSearch"] = false;



$tdata_DIA_DA_STATUS[".badgeColor"] = "EDCA00";


$tdata_DIA_DA_STATUS[".allSearchFields"] = array();
$tdata_DIA_DA_STATUS[".filterFields"] = array();
$tdata_DIA_DA_STATUS[".requiredSearchFields"] = array();



$tdata_DIA_DA_STATUS[".googleLikeFields"] = array();
$tdata_DIA_DA_STATUS[".googleLikeFields"][] = "id";
$tdata_DIA_DA_STATUS[".googleLikeFields"][] = "name";
$tdata_DIA_DA_STATUS[".googleLikeFields"][] = "sort";
$tdata_DIA_DA_STATUS[".googleLikeFields"][] = "pareint";
$tdata_DIA_DA_STATUS[".googleLikeFields"][] = "id_store_prod";



$tdata_DIA_DA_STATUS[".tableType"] = "list";

$tdata_DIA_DA_STATUS[".printerPageOrientation"] = 0;
$tdata_DIA_DA_STATUS[".nPrinterPageScale"] = 100;

$tdata_DIA_DA_STATUS[".nPrinterSplitRecords"] = 40;

$tdata_DIA_DA_STATUS[".nPrinterPDFSplitRecords"] = 40;



$tdata_DIA_DA_STATUS[".geocodingEnabled"] = false;





$tdata_DIA_DA_STATUS[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdata_DIA_DA_STATUS[".pageSize"] = 20;

$tdata_DIA_DA_STATUS[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdata_DIA_DA_STATUS[".strOrderBy"] = $tstrOrderBy;

$tdata_DIA_DA_STATUS[".orderindexes"] = array();

$tdata_DIA_DA_STATUS[".sqlHead"] = "SELECT id,  	name,  	sort,  	pareint,  	id_store_prod";
$tdata_DIA_DA_STATUS[".sqlFrom"] = "FROM `_DIA_DA_STATUS`";
$tdata_DIA_DA_STATUS[".sqlWhereExpr"] = "";
$tdata_DIA_DA_STATUS[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdata_DIA_DA_STATUS[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdata_DIA_DA_STATUS[".arrGroupsPerPage"] = $arrGPP;

$tdata_DIA_DA_STATUS[".highlightSearchResults"] = true;

$tableKeys_DIA_DA_STATUS = array();
$tableKeys_DIA_DA_STATUS[] = "id";
$tdata_DIA_DA_STATUS[".Keys"] = $tableKeys_DIA_DA_STATUS;

$tdata_DIA_DA_STATUS[".listFields"] = array();

$tdata_DIA_DA_STATUS[".hideMobileList"] = array();


$tdata_DIA_DA_STATUS[".viewFields"] = array();

$tdata_DIA_DA_STATUS[".addFields"] = array();

$tdata_DIA_DA_STATUS[".masterListFields"] = array();
$tdata_DIA_DA_STATUS[".masterListFields"][] = "id";
$tdata_DIA_DA_STATUS[".masterListFields"][] = "name";
$tdata_DIA_DA_STATUS[".masterListFields"][] = "sort";
$tdata_DIA_DA_STATUS[".masterListFields"][] = "pareint";
$tdata_DIA_DA_STATUS[".masterListFields"][] = "id_store_prod";

$tdata_DIA_DA_STATUS[".inlineAddFields"] = array();

$tdata_DIA_DA_STATUS[".editFields"] = array();

$tdata_DIA_DA_STATUS[".inlineEditFields"] = array();

$tdata_DIA_DA_STATUS[".updateSelectedFields"] = array();


$tdata_DIA_DA_STATUS[".exportFields"] = array();

$tdata_DIA_DA_STATUS[".importFields"] = array();

$tdata_DIA_DA_STATUS[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "_DIA_DA_STATUS";
	$fdata["Label"] = GetFieldLabel("_DIA_DA_STATUS","id");
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








	$tdata_DIA_DA_STATUS["id"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "_DIA_DA_STATUS";
	$fdata["Label"] = GetFieldLabel("_DIA_DA_STATUS","name");
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








	$tdata_DIA_DA_STATUS["name"] = $fdata;
//	sort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sort";
	$fdata["GoodName"] = "sort";
	$fdata["ownerTable"] = "_DIA_DA_STATUS";
	$fdata["Label"] = GetFieldLabel("_DIA_DA_STATUS","sort");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "sort";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sort";

	
	
			
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








	$tdata_DIA_DA_STATUS["sort"] = $fdata;
//	pareint
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "pareint";
	$fdata["GoodName"] = "pareint";
	$fdata["ownerTable"] = "_DIA_DA_STATUS";
	$fdata["Label"] = GetFieldLabel("_DIA_DA_STATUS","pareint");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "pareint";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pareint";

	
	
			
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








	$tdata_DIA_DA_STATUS["pareint"] = $fdata;
//	id_store_prod
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "id_store_prod";
	$fdata["GoodName"] = "id_store_prod";
	$fdata["ownerTable"] = "_DIA_DA_STATUS";
	$fdata["Label"] = GetFieldLabel("_DIA_DA_STATUS","id_store_prod");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "id_store_prod";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_store_prod";

	
	
			
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








	$tdata_DIA_DA_STATUS["id_store_prod"] = $fdata;


$tables_data["_DIA_DA_STATUS"]=&$tdata_DIA_DA_STATUS;
$field_labels["_DIA_DA_STATUS"] = &$fieldLabels_DIA_DA_STATUS;
$fieldToolTips["_DIA_DA_STATUS"] = &$fieldToolTips_DIA_DA_STATUS;
$placeHolders["_DIA_DA_STATUS"] = &$placeHolders_DIA_DA_STATUS;
$page_titles["_DIA_DA_STATUS"] = &$pageTitles_DIA_DA_STATUS;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["_DIA_DA_STATUS"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["_DIA_DA_STATUS"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery__DIA_DA_STATUS()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	name,  	sort,  	pareint,  	id_store_prod";
$proto0["m_strFrom"] = "FROM `_DIA_DA_STATUS`";
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
	"m_strTable" => "_DIA_DA_STATUS",
	"m_srcTableName" => "_DIA_DA_STATUS"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "_DIA_DA_STATUS";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "_DIA_DA_STATUS",
	"m_srcTableName" => "_DIA_DA_STATUS"
));

$proto8["m_sql"] = "name";
$proto8["m_srcTableName"] = "_DIA_DA_STATUS";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "sort",
	"m_strTable" => "_DIA_DA_STATUS",
	"m_srcTableName" => "_DIA_DA_STATUS"
));

$proto10["m_sql"] = "sort";
$proto10["m_srcTableName"] = "_DIA_DA_STATUS";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "pareint",
	"m_strTable" => "_DIA_DA_STATUS",
	"m_srcTableName" => "_DIA_DA_STATUS"
));

$proto12["m_sql"] = "pareint";
$proto12["m_srcTableName"] = "_DIA_DA_STATUS";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "id_store_prod",
	"m_strTable" => "_DIA_DA_STATUS",
	"m_srcTableName" => "_DIA_DA_STATUS"
));

$proto14["m_sql"] = "id_store_prod";
$proto14["m_srcTableName"] = "_DIA_DA_STATUS";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "_DIA_DA_STATUS";
$proto17["m_srcTableName"] = "_DIA_DA_STATUS";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "id";
$proto17["m_columns"][] = "name";
$proto17["m_columns"][] = "sort";
$proto17["m_columns"][] = "pareint";
$proto17["m_columns"][] = "id_store_prod";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "`_DIA_DA_STATUS`";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "_DIA_DA_STATUS";
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="_DIA_DA_STATUS";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData__DIA_DA_STATUS = createSqlQuery__DIA_DA_STATUS();


	
		;

					

$tdata_DIA_DA_STATUS[".sqlquery"] = $queryData__DIA_DA_STATUS;

$tableEvents["_DIA_DA_STATUS"] = new eventsBase;
$tdata_DIA_DA_STATUS[".hasEvents"] = false;

?>