<?php
require_once(getabspath("classes/cipherer.php"));




$tdataevashop5ugmembers = array();
	$tdataevashop5ugmembers[".truncateText"] = true;
	$tdataevashop5ugmembers[".NumberOfChars"] = 80;
	$tdataevashop5ugmembers[".ShortName"] = "evashop5ugmembers";
	$tdataevashop5ugmembers[".OwnerID"] = "";
	$tdataevashop5ugmembers[".OriginalTable"] = "evashop5ugmembers";

//	field labels
$fieldLabelsevashop5ugmembers = array();
$fieldToolTipsevashop5ugmembers = array();
$pageTitlesevashop5ugmembers = array();
$placeHoldersevashop5ugmembers = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsevashop5ugmembers["Japanese"] = array();
	$fieldToolTipsevashop5ugmembers["Japanese"] = array();
	$placeHoldersevashop5ugmembers["Japanese"] = array();
	$pageTitlesevashop5ugmembers["Japanese"] = array();
	$fieldLabelsevashop5ugmembers["Japanese"]["UserName"] = "User Name";
	$fieldToolTipsevashop5ugmembers["Japanese"]["UserName"] = "";
	$placeHoldersevashop5ugmembers["Japanese"]["UserName"] = "";
	$fieldLabelsevashop5ugmembers["Japanese"]["GroupID"] = "Group ID";
	$fieldToolTipsevashop5ugmembers["Japanese"]["GroupID"] = "";
	$placeHoldersevashop5ugmembers["Japanese"]["GroupID"] = "";
	if (count($fieldToolTipsevashop5ugmembers["Japanese"]))
		$tdataevashop5ugmembers[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsevashop5ugmembers[""] = array();
	$fieldToolTipsevashop5ugmembers[""] = array();
	$placeHoldersevashop5ugmembers[""] = array();
	$pageTitlesevashop5ugmembers[""] = array();
	$fieldLabelsevashop5ugmembers[""]["UserName"] = "User Name";
	$fieldToolTipsevashop5ugmembers[""]["UserName"] = "";
	$placeHoldersevashop5ugmembers[""]["UserName"] = "";
	$fieldLabelsevashop5ugmembers[""]["GroupID"] = "Group ID";
	$fieldToolTipsevashop5ugmembers[""]["GroupID"] = "";
	$placeHoldersevashop5ugmembers[""]["GroupID"] = "";
	if (count($fieldToolTipsevashop5ugmembers[""]))
		$tdataevashop5ugmembers[".isUseToolTips"] = true;
}


	$tdataevashop5ugmembers[".NCSearch"] = true;



$tdataevashop5ugmembers[".shortTableName"] = "evashop5ugmembers";
$tdataevashop5ugmembers[".nSecOptions"] = 0;
$tdataevashop5ugmembers[".recsPerRowPrint"] = 1;
$tdataevashop5ugmembers[".mainTableOwnerID"] = "";
$tdataevashop5ugmembers[".moveNext"] = 1;
$tdataevashop5ugmembers[".entityType"] = 0;

$tdataevashop5ugmembers[".strOriginalTableName"] = "evashop5ugmembers";

	



$tdataevashop5ugmembers[".showAddInPopup"] = false;

$tdataevashop5ugmembers[".showEditInPopup"] = false;

$tdataevashop5ugmembers[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataevashop5ugmembers[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataevashop5ugmembers[".fieldsForRegister"] = array();
	
$tdataevashop5ugmembers[".listAjax"] = false;

	$tdataevashop5ugmembers[".audit"] = false;

	$tdataevashop5ugmembers[".locking"] = false;

$tdataevashop5ugmembers[".edit"] = true;
$tdataevashop5ugmembers[".afterEditAction"] = 1;
$tdataevashop5ugmembers[".closePopupAfterEdit"] = 1;
$tdataevashop5ugmembers[".afterEditActionDetTable"] = "";

$tdataevashop5ugmembers[".add"] = true;
$tdataevashop5ugmembers[".afterAddAction"] = 1;
$tdataevashop5ugmembers[".closePopupAfterAdd"] = 1;
$tdataevashop5ugmembers[".afterAddActionDetTable"] = "";

$tdataevashop5ugmembers[".list"] = true;



$tdataevashop5ugmembers[".reorderRecordsByHeader"] = true;



$tdataevashop5ugmembers[".view"] = true;

$tdataevashop5ugmembers[".import"] = true;

$tdataevashop5ugmembers[".exportTo"] = true;

$tdataevashop5ugmembers[".printFriendly"] = true;

$tdataevashop5ugmembers[".delete"] = true;

$tdataevashop5ugmembers[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataevashop5ugmembers[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataevashop5ugmembers[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataevashop5ugmembers[".searchSaving"] = false;
//

$tdataevashop5ugmembers[".showSearchPanel"] = true;
		$tdataevashop5ugmembers[".flexibleSearch"] = true;

$tdataevashop5ugmembers[".isUseAjaxSuggest"] = true;

$tdataevashop5ugmembers[".rowHighlite"] = true;



																																																	

$tdataevashop5ugmembers[".ajaxCodeSnippetAdded"] = false;

$tdataevashop5ugmembers[".buttonsAdded"] = false;

$tdataevashop5ugmembers[".addPageEvents"] = false;

// use timepicker for search panel
$tdataevashop5ugmembers[".isUseTimeForSearch"] = false;





$tdataevashop5ugmembers[".allSearchFields"] = array();
$tdataevashop5ugmembers[".filterFields"] = array();
$tdataevashop5ugmembers[".requiredSearchFields"] = array();

$tdataevashop5ugmembers[".allSearchFields"][] = "UserName";
	$tdataevashop5ugmembers[".allSearchFields"][] = "GroupID";
	

$tdataevashop5ugmembers[".googleLikeFields"] = array();
$tdataevashop5ugmembers[".googleLikeFields"][] = "UserName";
$tdataevashop5ugmembers[".googleLikeFields"][] = "GroupID";


$tdataevashop5ugmembers[".advSearchFields"] = array();
$tdataevashop5ugmembers[".advSearchFields"][] = "UserName";
$tdataevashop5ugmembers[".advSearchFields"][] = "GroupID";

$tdataevashop5ugmembers[".tableType"] = "list";

$tdataevashop5ugmembers[".printerPageOrientation"] = 0;
$tdataevashop5ugmembers[".nPrinterPageScale"] = 100;

$tdataevashop5ugmembers[".nPrinterSplitRecords"] = 40;

$tdataevashop5ugmembers[".nPrinterPDFSplitRecords"] = 40;



$tdataevashop5ugmembers[".geocodingEnabled"] = false;





$tdataevashop5ugmembers[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataevashop5ugmembers[".pageSize"] = 20;

$tdataevashop5ugmembers[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataevashop5ugmembers[".strOrderBy"] = $tstrOrderBy;

$tdataevashop5ugmembers[".orderindexes"] = array();

$tdataevashop5ugmembers[".sqlHead"] = "SELECT UserName,  	GroupID";
$tdataevashop5ugmembers[".sqlFrom"] = "FROM evashop5ugmembers";
$tdataevashop5ugmembers[".sqlWhereExpr"] = "";
$tdataevashop5ugmembers[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataevashop5ugmembers[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataevashop5ugmembers[".arrGroupsPerPage"] = $arrGPP;

$tdataevashop5ugmembers[".highlightSearchResults"] = true;

$tableKeysevashop5ugmembers = array();
$tableKeysevashop5ugmembers[] = "UserName";
$tableKeysevashop5ugmembers[] = "GroupID";
$tdataevashop5ugmembers[".Keys"] = $tableKeysevashop5ugmembers;

$tdataevashop5ugmembers[".listFields"] = array();
$tdataevashop5ugmembers[".listFields"][] = "UserName";
$tdataevashop5ugmembers[".listFields"][] = "GroupID";

$tdataevashop5ugmembers[".hideMobileList"] = array();


$tdataevashop5ugmembers[".viewFields"] = array();
$tdataevashop5ugmembers[".viewFields"][] = "UserName";
$tdataevashop5ugmembers[".viewFields"][] = "GroupID";

$tdataevashop5ugmembers[".addFields"] = array();
$tdataevashop5ugmembers[".addFields"][] = "UserName";
$tdataevashop5ugmembers[".addFields"][] = "GroupID";

$tdataevashop5ugmembers[".masterListFields"] = array();
$tdataevashop5ugmembers[".masterListFields"][] = "UserName";
$tdataevashop5ugmembers[".masterListFields"][] = "GroupID";

$tdataevashop5ugmembers[".inlineAddFields"] = array();
$tdataevashop5ugmembers[".inlineAddFields"][] = "UserName";
$tdataevashop5ugmembers[".inlineAddFields"][] = "GroupID";

$tdataevashop5ugmembers[".editFields"] = array();
$tdataevashop5ugmembers[".editFields"][] = "UserName";
$tdataevashop5ugmembers[".editFields"][] = "GroupID";

$tdataevashop5ugmembers[".inlineEditFields"] = array();
$tdataevashop5ugmembers[".inlineEditFields"][] = "UserName";
$tdataevashop5ugmembers[".inlineEditFields"][] = "GroupID";

$tdataevashop5ugmembers[".updateSelectedFields"] = array();
$tdataevashop5ugmembers[".updateSelectedFields"][] = "UserName";
$tdataevashop5ugmembers[".updateSelectedFields"][] = "GroupID";


$tdataevashop5ugmembers[".exportFields"] = array();
$tdataevashop5ugmembers[".exportFields"][] = "UserName";
$tdataevashop5ugmembers[".exportFields"][] = "GroupID";

$tdataevashop5ugmembers[".importFields"] = array();
$tdataevashop5ugmembers[".importFields"][] = "UserName";
$tdataevashop5ugmembers[".importFields"][] = "GroupID";

$tdataevashop5ugmembers[".printFields"] = array();
$tdataevashop5ugmembers[".printFields"][] = "UserName";
$tdataevashop5ugmembers[".printFields"][] = "GroupID";

//	UserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "UserName";
	$fdata["GoodName"] = "UserName";
	$fdata["ownerTable"] = "evashop5ugmembers";
	$fdata["Label"] = GetFieldLabel("evashop5ugmembers","UserName");
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

		$fdata["strField"] = "UserName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "UserName";

	
	
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




	$tdataevashop5ugmembers["UserName"] = $fdata;
//	GroupID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "GroupID";
	$fdata["GoodName"] = "GroupID";
	$fdata["ownerTable"] = "evashop5ugmembers";
	$fdata["Label"] = GetFieldLabel("evashop5ugmembers","GroupID");
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




	$tdataevashop5ugmembers["GroupID"] = $fdata;


$tables_data["evashop5ugmembers"]=&$tdataevashop5ugmembers;
$field_labels["evashop5ugmembers"] = &$fieldLabelsevashop5ugmembers;
$fieldToolTips["evashop5ugmembers"] = &$fieldToolTipsevashop5ugmembers;
$placeHolders["evashop5ugmembers"] = &$placeHoldersevashop5ugmembers;
$page_titles["evashop5ugmembers"] = &$pageTitlesevashop5ugmembers;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["evashop5ugmembers"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["evashop5ugmembers"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_evashop5ugmembers()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "UserName,  	GroupID";
$proto0["m_strFrom"] = "FROM evashop5ugmembers";
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
	"m_strName" => "UserName",
	"m_strTable" => "evashop5ugmembers",
	"m_srcTableName" => "evashop5ugmembers"
));

$proto6["m_sql"] = "UserName";
$proto6["m_srcTableName"] = "evashop5ugmembers";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "GroupID",
	"m_strTable" => "evashop5ugmembers",
	"m_srcTableName" => "evashop5ugmembers"
));

$proto8["m_sql"] = "GroupID";
$proto8["m_srcTableName"] = "evashop5ugmembers";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "evashop5ugmembers";
$proto11["m_srcTableName"] = "evashop5ugmembers";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "UserName";
$proto11["m_columns"][] = "GroupID";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "evashop5ugmembers";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "evashop5ugmembers";
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
$proto0["m_srcTableName"]="evashop5ugmembers";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_evashop5ugmembers = createSqlQuery_evashop5ugmembers();


	
		;

		

$tdataevashop5ugmembers[".sqlquery"] = $queryData_evashop5ugmembers;

$tableEvents["evashop5ugmembers"] = new eventsBase;
$tdataevashop5ugmembers[".hasEvents"] = false;

?>