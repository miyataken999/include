<?php
require_once(getabspath("classes/cipherer.php"));




$tdataevashop5ugrights = array();
	$tdataevashop5ugrights[".truncateText"] = true;
	$tdataevashop5ugrights[".NumberOfChars"] = 80;
	$tdataevashop5ugrights[".ShortName"] = "evashop5ugrights";
	$tdataevashop5ugrights[".OwnerID"] = "";
	$tdataevashop5ugrights[".OriginalTable"] = "evashop5ugrights";

//	field labels
$fieldLabelsevashop5ugrights = array();
$fieldToolTipsevashop5ugrights = array();
$pageTitlesevashop5ugrights = array();
$placeHoldersevashop5ugrights = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsevashop5ugrights["Japanese"] = array();
	$fieldToolTipsevashop5ugrights["Japanese"] = array();
	$placeHoldersevashop5ugrights["Japanese"] = array();
	$pageTitlesevashop5ugrights["Japanese"] = array();
	$fieldLabelsevashop5ugrights["Japanese"]["TableName"] = "Table Name";
	$fieldToolTipsevashop5ugrights["Japanese"]["TableName"] = "";
	$placeHoldersevashop5ugrights["Japanese"]["TableName"] = "";
	$fieldLabelsevashop5ugrights["Japanese"]["GroupID"] = "Group ID";
	$fieldToolTipsevashop5ugrights["Japanese"]["GroupID"] = "";
	$placeHoldersevashop5ugrights["Japanese"]["GroupID"] = "";
	$fieldLabelsevashop5ugrights["Japanese"]["AccessMask"] = "Access Mask";
	$fieldToolTipsevashop5ugrights["Japanese"]["AccessMask"] = "";
	$placeHoldersevashop5ugrights["Japanese"]["AccessMask"] = "";
	if (count($fieldToolTipsevashop5ugrights["Japanese"]))
		$tdataevashop5ugrights[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsevashop5ugrights[""] = array();
	$fieldToolTipsevashop5ugrights[""] = array();
	$placeHoldersevashop5ugrights[""] = array();
	$pageTitlesevashop5ugrights[""] = array();
	$fieldLabelsevashop5ugrights[""]["TableName"] = "Table Name";
	$fieldToolTipsevashop5ugrights[""]["TableName"] = "";
	$placeHoldersevashop5ugrights[""]["TableName"] = "";
	$fieldLabelsevashop5ugrights[""]["GroupID"] = "Group ID";
	$fieldToolTipsevashop5ugrights[""]["GroupID"] = "";
	$placeHoldersevashop5ugrights[""]["GroupID"] = "";
	$fieldLabelsevashop5ugrights[""]["AccessMask"] = "Access Mask";
	$fieldToolTipsevashop5ugrights[""]["AccessMask"] = "";
	$placeHoldersevashop5ugrights[""]["AccessMask"] = "";
	if (count($fieldToolTipsevashop5ugrights[""]))
		$tdataevashop5ugrights[".isUseToolTips"] = true;
}


	$tdataevashop5ugrights[".NCSearch"] = true;



$tdataevashop5ugrights[".shortTableName"] = "evashop5ugrights";
$tdataevashop5ugrights[".nSecOptions"] = 0;
$tdataevashop5ugrights[".recsPerRowPrint"] = 1;
$tdataevashop5ugrights[".mainTableOwnerID"] = "";
$tdataevashop5ugrights[".moveNext"] = 1;
$tdataevashop5ugrights[".entityType"] = 0;

$tdataevashop5ugrights[".strOriginalTableName"] = "evashop5ugrights";

	



$tdataevashop5ugrights[".showAddInPopup"] = false;

$tdataevashop5ugrights[".showEditInPopup"] = false;

$tdataevashop5ugrights[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataevashop5ugrights[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataevashop5ugrights[".fieldsForRegister"] = array();
	
$tdataevashop5ugrights[".listAjax"] = false;

	$tdataevashop5ugrights[".audit"] = false;

	$tdataevashop5ugrights[".locking"] = false;

$tdataevashop5ugrights[".edit"] = true;
$tdataevashop5ugrights[".afterEditAction"] = 1;
$tdataevashop5ugrights[".closePopupAfterEdit"] = 1;
$tdataevashop5ugrights[".afterEditActionDetTable"] = "";

$tdataevashop5ugrights[".add"] = true;
$tdataevashop5ugrights[".afterAddAction"] = 1;
$tdataevashop5ugrights[".closePopupAfterAdd"] = 1;
$tdataevashop5ugrights[".afterAddActionDetTable"] = "";

$tdataevashop5ugrights[".list"] = true;



$tdataevashop5ugrights[".reorderRecordsByHeader"] = true;



$tdataevashop5ugrights[".view"] = true;

$tdataevashop5ugrights[".import"] = true;

$tdataevashop5ugrights[".exportTo"] = true;

$tdataevashop5ugrights[".printFriendly"] = true;

$tdataevashop5ugrights[".delete"] = true;

$tdataevashop5ugrights[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataevashop5ugrights[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataevashop5ugrights[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataevashop5ugrights[".searchSaving"] = false;
//

$tdataevashop5ugrights[".showSearchPanel"] = true;
		$tdataevashop5ugrights[".flexibleSearch"] = true;

$tdataevashop5ugrights[".isUseAjaxSuggest"] = true;

$tdataevashop5ugrights[".rowHighlite"] = true;



																																																	

$tdataevashop5ugrights[".ajaxCodeSnippetAdded"] = false;

$tdataevashop5ugrights[".buttonsAdded"] = false;

$tdataevashop5ugrights[".addPageEvents"] = false;

// use timepicker for search panel
$tdataevashop5ugrights[".isUseTimeForSearch"] = false;





$tdataevashop5ugrights[".allSearchFields"] = array();
$tdataevashop5ugrights[".filterFields"] = array();
$tdataevashop5ugrights[".requiredSearchFields"] = array();

$tdataevashop5ugrights[".allSearchFields"][] = "TableName";
	$tdataevashop5ugrights[".allSearchFields"][] = "GroupID";
	$tdataevashop5ugrights[".allSearchFields"][] = "AccessMask";
	

$tdataevashop5ugrights[".googleLikeFields"] = array();
$tdataevashop5ugrights[".googleLikeFields"][] = "TableName";
$tdataevashop5ugrights[".googleLikeFields"][] = "GroupID";
$tdataevashop5ugrights[".googleLikeFields"][] = "AccessMask";


$tdataevashop5ugrights[".advSearchFields"] = array();
$tdataevashop5ugrights[".advSearchFields"][] = "TableName";
$tdataevashop5ugrights[".advSearchFields"][] = "GroupID";
$tdataevashop5ugrights[".advSearchFields"][] = "AccessMask";

$tdataevashop5ugrights[".tableType"] = "list";

$tdataevashop5ugrights[".printerPageOrientation"] = 0;
$tdataevashop5ugrights[".nPrinterPageScale"] = 100;

$tdataevashop5ugrights[".nPrinterSplitRecords"] = 40;

$tdataevashop5ugrights[".nPrinterPDFSplitRecords"] = 40;



$tdataevashop5ugrights[".geocodingEnabled"] = false;





$tdataevashop5ugrights[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataevashop5ugrights[".pageSize"] = 20;

$tdataevashop5ugrights[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataevashop5ugrights[".strOrderBy"] = $tstrOrderBy;

$tdataevashop5ugrights[".orderindexes"] = array();

$tdataevashop5ugrights[".sqlHead"] = "SELECT TableName,  	GroupID,  	AccessMask";
$tdataevashop5ugrights[".sqlFrom"] = "FROM evashop5ugrights";
$tdataevashop5ugrights[".sqlWhereExpr"] = "";
$tdataevashop5ugrights[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataevashop5ugrights[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataevashop5ugrights[".arrGroupsPerPage"] = $arrGPP;

$tdataevashop5ugrights[".highlightSearchResults"] = true;

$tableKeysevashop5ugrights = array();
$tableKeysevashop5ugrights[] = "TableName";
$tableKeysevashop5ugrights[] = "GroupID";
$tdataevashop5ugrights[".Keys"] = $tableKeysevashop5ugrights;

$tdataevashop5ugrights[".listFields"] = array();
$tdataevashop5ugrights[".listFields"][] = "TableName";
$tdataevashop5ugrights[".listFields"][] = "GroupID";
$tdataevashop5ugrights[".listFields"][] = "AccessMask";

$tdataevashop5ugrights[".hideMobileList"] = array();


$tdataevashop5ugrights[".viewFields"] = array();
$tdataevashop5ugrights[".viewFields"][] = "TableName";
$tdataevashop5ugrights[".viewFields"][] = "GroupID";
$tdataevashop5ugrights[".viewFields"][] = "AccessMask";

$tdataevashop5ugrights[".addFields"] = array();
$tdataevashop5ugrights[".addFields"][] = "TableName";
$tdataevashop5ugrights[".addFields"][] = "GroupID";
$tdataevashop5ugrights[".addFields"][] = "AccessMask";

$tdataevashop5ugrights[".masterListFields"] = array();
$tdataevashop5ugrights[".masterListFields"][] = "TableName";
$tdataevashop5ugrights[".masterListFields"][] = "GroupID";
$tdataevashop5ugrights[".masterListFields"][] = "AccessMask";

$tdataevashop5ugrights[".inlineAddFields"] = array();
$tdataevashop5ugrights[".inlineAddFields"][] = "TableName";
$tdataevashop5ugrights[".inlineAddFields"][] = "GroupID";
$tdataevashop5ugrights[".inlineAddFields"][] = "AccessMask";

$tdataevashop5ugrights[".editFields"] = array();
$tdataevashop5ugrights[".editFields"][] = "TableName";
$tdataevashop5ugrights[".editFields"][] = "GroupID";
$tdataevashop5ugrights[".editFields"][] = "AccessMask";

$tdataevashop5ugrights[".inlineEditFields"] = array();
$tdataevashop5ugrights[".inlineEditFields"][] = "TableName";
$tdataevashop5ugrights[".inlineEditFields"][] = "GroupID";
$tdataevashop5ugrights[".inlineEditFields"][] = "AccessMask";

$tdataevashop5ugrights[".updateSelectedFields"] = array();
$tdataevashop5ugrights[".updateSelectedFields"][] = "TableName";
$tdataevashop5ugrights[".updateSelectedFields"][] = "GroupID";
$tdataevashop5ugrights[".updateSelectedFields"][] = "AccessMask";


$tdataevashop5ugrights[".exportFields"] = array();
$tdataevashop5ugrights[".exportFields"][] = "TableName";
$tdataevashop5ugrights[".exportFields"][] = "GroupID";
$tdataevashop5ugrights[".exportFields"][] = "AccessMask";

$tdataevashop5ugrights[".importFields"] = array();
$tdataevashop5ugrights[".importFields"][] = "TableName";
$tdataevashop5ugrights[".importFields"][] = "GroupID";
$tdataevashop5ugrights[".importFields"][] = "AccessMask";

$tdataevashop5ugrights[".printFields"] = array();
$tdataevashop5ugrights[".printFields"][] = "TableName";
$tdataevashop5ugrights[".printFields"][] = "GroupID";
$tdataevashop5ugrights[".printFields"][] = "AccessMask";

//	TableName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "TableName";
	$fdata["GoodName"] = "TableName";
	$fdata["ownerTable"] = "evashop5ugrights";
	$fdata["Label"] = GetFieldLabel("evashop5ugrights","TableName");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TableName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TableName";

	
	
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
			$edata["EditParams"].= " maxlength=300";

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




	$tdataevashop5ugrights["TableName"] = $fdata;
//	GroupID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "GroupID";
	$fdata["GoodName"] = "GroupID";
	$fdata["ownerTable"] = "evashop5ugrights";
	$fdata["Label"] = GetFieldLabel("evashop5ugrights","GroupID");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "GroupID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "GroupID";

	
	
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




	$tdataevashop5ugrights["GroupID"] = $fdata;
//	AccessMask
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "AccessMask";
	$fdata["GoodName"] = "AccessMask";
	$fdata["ownerTable"] = "evashop5ugrights";
	$fdata["Label"] = GetFieldLabel("evashop5ugrights","AccessMask");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "AccessMask";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AccessMask";

	
	
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
			$edata["EditParams"].= " maxlength=10";

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




	$tdataevashop5ugrights["AccessMask"] = $fdata;


$tables_data["evashop5ugrights"]=&$tdataevashop5ugrights;
$field_labels["evashop5ugrights"] = &$fieldLabelsevashop5ugrights;
$fieldToolTips["evashop5ugrights"] = &$fieldToolTipsevashop5ugrights;
$placeHolders["evashop5ugrights"] = &$placeHoldersevashop5ugrights;
$page_titles["evashop5ugrights"] = &$pageTitlesevashop5ugrights;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["evashop5ugrights"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["evashop5ugrights"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_evashop5ugrights()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "TableName,  	GroupID,  	AccessMask";
$proto0["m_strFrom"] = "FROM evashop5ugrights";
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
	"m_strName" => "TableName",
	"m_strTable" => "evashop5ugrights",
	"m_srcTableName" => "evashop5ugrights"
));

$proto6["m_sql"] = "TableName";
$proto6["m_srcTableName"] = "evashop5ugrights";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "GroupID",
	"m_strTable" => "evashop5ugrights",
	"m_srcTableName" => "evashop5ugrights"
));

$proto8["m_sql"] = "GroupID";
$proto8["m_srcTableName"] = "evashop5ugrights";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "AccessMask",
	"m_strTable" => "evashop5ugrights",
	"m_srcTableName" => "evashop5ugrights"
));

$proto10["m_sql"] = "AccessMask";
$proto10["m_srcTableName"] = "evashop5ugrights";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "evashop5ugrights";
$proto13["m_srcTableName"] = "evashop5ugrights";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "TableName";
$proto13["m_columns"][] = "GroupID";
$proto13["m_columns"][] = "AccessMask";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "evashop5ugrights";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "evashop5ugrights";
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
$proto0["m_srcTableName"]="evashop5ugrights";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_evashop5ugrights = createSqlQuery_evashop5ugrights();


	
		;

			

$tdataevashop5ugrights[".sqlquery"] = $queryData_evashop5ugrights;

$tableEvents["evashop5ugrights"] = new eventsBase;
$tdataevashop5ugrights[".hasEvents"] = false;

?>