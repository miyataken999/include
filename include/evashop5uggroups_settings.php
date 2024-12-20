<?php
require_once(getabspath("classes/cipherer.php"));




$tdataevashop5uggroups = array();
	$tdataevashop5uggroups[".truncateText"] = true;
	$tdataevashop5uggroups[".NumberOfChars"] = 80;
	$tdataevashop5uggroups[".ShortName"] = "evashop5uggroups";
	$tdataevashop5uggroups[".OwnerID"] = "";
	$tdataevashop5uggroups[".OriginalTable"] = "evashop5uggroups";

//	field labels
$fieldLabelsevashop5uggroups = array();
$fieldToolTipsevashop5uggroups = array();
$pageTitlesevashop5uggroups = array();
$placeHoldersevashop5uggroups = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsevashop5uggroups["Japanese"] = array();
	$fieldToolTipsevashop5uggroups["Japanese"] = array();
	$placeHoldersevashop5uggroups["Japanese"] = array();
	$pageTitlesevashop5uggroups["Japanese"] = array();
	$fieldLabelsevashop5uggroups["Japanese"]["GroupID"] = "Group ID";
	$fieldToolTipsevashop5uggroups["Japanese"]["GroupID"] = "";
	$placeHoldersevashop5uggroups["Japanese"]["GroupID"] = "";
	$fieldLabelsevashop5uggroups["Japanese"]["Label"] = "Label";
	$fieldToolTipsevashop5uggroups["Japanese"]["Label"] = "";
	$placeHoldersevashop5uggroups["Japanese"]["Label"] = "";
	if (count($fieldToolTipsevashop5uggroups["Japanese"]))
		$tdataevashop5uggroups[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsevashop5uggroups[""] = array();
	$fieldToolTipsevashop5uggroups[""] = array();
	$placeHoldersevashop5uggroups[""] = array();
	$pageTitlesevashop5uggroups[""] = array();
	$fieldLabelsevashop5uggroups[""]["GroupID"] = "Group ID";
	$fieldToolTipsevashop5uggroups[""]["GroupID"] = "";
	$placeHoldersevashop5uggroups[""]["GroupID"] = "";
	$fieldLabelsevashop5uggroups[""]["Label"] = "Label";
	$fieldToolTipsevashop5uggroups[""]["Label"] = "";
	$placeHoldersevashop5uggroups[""]["Label"] = "";
	if (count($fieldToolTipsevashop5uggroups[""]))
		$tdataevashop5uggroups[".isUseToolTips"] = true;
}


	$tdataevashop5uggroups[".NCSearch"] = true;



$tdataevashop5uggroups[".shortTableName"] = "evashop5uggroups";
$tdataevashop5uggroups[".nSecOptions"] = 0;
$tdataevashop5uggroups[".recsPerRowPrint"] = 1;
$tdataevashop5uggroups[".mainTableOwnerID"] = "";
$tdataevashop5uggroups[".moveNext"] = 1;
$tdataevashop5uggroups[".entityType"] = 0;

$tdataevashop5uggroups[".strOriginalTableName"] = "evashop5uggroups";

	



$tdataevashop5uggroups[".showAddInPopup"] = false;

$tdataevashop5uggroups[".showEditInPopup"] = false;

$tdataevashop5uggroups[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataevashop5uggroups[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataevashop5uggroups[".fieldsForRegister"] = array();
	
$tdataevashop5uggroups[".listAjax"] = false;

	$tdataevashop5uggroups[".audit"] = false;

	$tdataevashop5uggroups[".locking"] = false;

$tdataevashop5uggroups[".edit"] = true;
$tdataevashop5uggroups[".afterEditAction"] = 1;
$tdataevashop5uggroups[".closePopupAfterEdit"] = 1;
$tdataevashop5uggroups[".afterEditActionDetTable"] = "";

$tdataevashop5uggroups[".add"] = true;
$tdataevashop5uggroups[".afterAddAction"] = 1;
$tdataevashop5uggroups[".closePopupAfterAdd"] = 1;
$tdataevashop5uggroups[".afterAddActionDetTable"] = "";

$tdataevashop5uggroups[".list"] = true;



$tdataevashop5uggroups[".reorderRecordsByHeader"] = true;



$tdataevashop5uggroups[".view"] = true;

$tdataevashop5uggroups[".import"] = true;

$tdataevashop5uggroups[".exportTo"] = true;

$tdataevashop5uggroups[".printFriendly"] = true;

$tdataevashop5uggroups[".delete"] = true;

$tdataevashop5uggroups[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataevashop5uggroups[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataevashop5uggroups[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataevashop5uggroups[".searchSaving"] = false;
//

$tdataevashop5uggroups[".showSearchPanel"] = true;
		$tdataevashop5uggroups[".flexibleSearch"] = true;

$tdataevashop5uggroups[".isUseAjaxSuggest"] = true;

$tdataevashop5uggroups[".rowHighlite"] = true;



																																																	

$tdataevashop5uggroups[".ajaxCodeSnippetAdded"] = false;

$tdataevashop5uggroups[".buttonsAdded"] = false;

$tdataevashop5uggroups[".addPageEvents"] = false;

// use timepicker for search panel
$tdataevashop5uggroups[".isUseTimeForSearch"] = false;





$tdataevashop5uggroups[".allSearchFields"] = array();
$tdataevashop5uggroups[".filterFields"] = array();
$tdataevashop5uggroups[".requiredSearchFields"] = array();

$tdataevashop5uggroups[".allSearchFields"][] = "GroupID";
	$tdataevashop5uggroups[".allSearchFields"][] = "Label";
	

$tdataevashop5uggroups[".googleLikeFields"] = array();
$tdataevashop5uggroups[".googleLikeFields"][] = "GroupID";
$tdataevashop5uggroups[".googleLikeFields"][] = "Label";


$tdataevashop5uggroups[".advSearchFields"] = array();
$tdataevashop5uggroups[".advSearchFields"][] = "GroupID";
$tdataevashop5uggroups[".advSearchFields"][] = "Label";

$tdataevashop5uggroups[".tableType"] = "list";

$tdataevashop5uggroups[".printerPageOrientation"] = 0;
$tdataevashop5uggroups[".nPrinterPageScale"] = 100;

$tdataevashop5uggroups[".nPrinterSplitRecords"] = 40;

$tdataevashop5uggroups[".nPrinterPDFSplitRecords"] = 40;



$tdataevashop5uggroups[".geocodingEnabled"] = false;





$tdataevashop5uggroups[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataevashop5uggroups[".pageSize"] = 20;

$tdataevashop5uggroups[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataevashop5uggroups[".strOrderBy"] = $tstrOrderBy;

$tdataevashop5uggroups[".orderindexes"] = array();

$tdataevashop5uggroups[".sqlHead"] = "SELECT GroupID,  	`Label`";
$tdataevashop5uggroups[".sqlFrom"] = "FROM evashop5uggroups";
$tdataevashop5uggroups[".sqlWhereExpr"] = "";
$tdataevashop5uggroups[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataevashop5uggroups[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataevashop5uggroups[".arrGroupsPerPage"] = $arrGPP;

$tdataevashop5uggroups[".highlightSearchResults"] = true;

$tableKeysevashop5uggroups = array();
$tableKeysevashop5uggroups[] = "GroupID";
$tdataevashop5uggroups[".Keys"] = $tableKeysevashop5uggroups;

$tdataevashop5uggroups[".listFields"] = array();
$tdataevashop5uggroups[".listFields"][] = "GroupID";
$tdataevashop5uggroups[".listFields"][] = "Label";

$tdataevashop5uggroups[".hideMobileList"] = array();


$tdataevashop5uggroups[".viewFields"] = array();
$tdataevashop5uggroups[".viewFields"][] = "GroupID";
$tdataevashop5uggroups[".viewFields"][] = "Label";

$tdataevashop5uggroups[".addFields"] = array();
$tdataevashop5uggroups[".addFields"][] = "Label";

$tdataevashop5uggroups[".masterListFields"] = array();
$tdataevashop5uggroups[".masterListFields"][] = "GroupID";
$tdataevashop5uggroups[".masterListFields"][] = "Label";

$tdataevashop5uggroups[".inlineAddFields"] = array();
$tdataevashop5uggroups[".inlineAddFields"][] = "Label";

$tdataevashop5uggroups[".editFields"] = array();
$tdataevashop5uggroups[".editFields"][] = "Label";

$tdataevashop5uggroups[".inlineEditFields"] = array();
$tdataevashop5uggroups[".inlineEditFields"][] = "Label";

$tdataevashop5uggroups[".updateSelectedFields"] = array();
$tdataevashop5uggroups[".updateSelectedFields"][] = "Label";


$tdataevashop5uggroups[".exportFields"] = array();
$tdataevashop5uggroups[".exportFields"][] = "GroupID";
$tdataevashop5uggroups[".exportFields"][] = "Label";

$tdataevashop5uggroups[".importFields"] = array();
$tdataevashop5uggroups[".importFields"][] = "GroupID";
$tdataevashop5uggroups[".importFields"][] = "Label";

$tdataevashop5uggroups[".printFields"] = array();
$tdataevashop5uggroups[".printFields"][] = "GroupID";
$tdataevashop5uggroups[".printFields"][] = "Label";

//	GroupID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "GroupID";
	$fdata["GoodName"] = "GroupID";
	$fdata["ownerTable"] = "evashop5uggroups";
	$fdata["Label"] = GetFieldLabel("evashop5uggroups","GroupID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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




	$tdataevashop5uggroups["GroupID"] = $fdata;
//	Label
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Label";
	$fdata["GoodName"] = "Label";
	$fdata["ownerTable"] = "evashop5uggroups";
	$fdata["Label"] = GetFieldLabel("evashop5uggroups","Label");
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

		$fdata["strField"] = "Label";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Label`";

	
	
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




	$tdataevashop5uggroups["Label"] = $fdata;


$tables_data["evashop5uggroups"]=&$tdataevashop5uggroups;
$field_labels["evashop5uggroups"] = &$fieldLabelsevashop5uggroups;
$fieldToolTips["evashop5uggroups"] = &$fieldToolTipsevashop5uggroups;
$placeHolders["evashop5uggroups"] = &$placeHoldersevashop5uggroups;
$page_titles["evashop5uggroups"] = &$pageTitlesevashop5uggroups;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["evashop5uggroups"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["evashop5uggroups"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_evashop5uggroups()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "GroupID,  	`Label`";
$proto0["m_strFrom"] = "FROM evashop5uggroups";
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
	"m_strName" => "GroupID",
	"m_strTable" => "evashop5uggroups",
	"m_srcTableName" => "evashop5uggroups"
));

$proto6["m_sql"] = "GroupID";
$proto6["m_srcTableName"] = "evashop5uggroups";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Label",
	"m_strTable" => "evashop5uggroups",
	"m_srcTableName" => "evashop5uggroups"
));

$proto8["m_sql"] = "`Label`";
$proto8["m_srcTableName"] = "evashop5uggroups";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "evashop5uggroups";
$proto11["m_srcTableName"] = "evashop5uggroups";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "GroupID";
$proto11["m_columns"][] = "Label";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "evashop5uggroups";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "evashop5uggroups";
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
$proto0["m_srcTableName"]="evashop5uggroups";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_evashop5uggroups = createSqlQuery_evashop5uggroups();


	
		;

		

$tdataevashop5uggroups[".sqlquery"] = $queryData_evashop5uggroups;

$tableEvents["evashop5uggroups"] = new eventsBase;
$tdataevashop5uggroups[".hasEvents"] = false;

?>