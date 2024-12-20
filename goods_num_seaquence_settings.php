<?php
require_once(getabspath("classes/cipherer.php"));




$tdatagoods_num_seaquence = array();
	$tdatagoods_num_seaquence[".truncateText"] = true;
	$tdatagoods_num_seaquence[".NumberOfChars"] = 80;
	$tdatagoods_num_seaquence[".ShortName"] = "goods_num_seaquence";
	$tdatagoods_num_seaquence[".OwnerID"] = "";
	$tdatagoods_num_seaquence[".OriginalTable"] = "goods_num_seaquence";

//	field labels
$fieldLabelsgoods_num_seaquence = array();
$fieldToolTipsgoods_num_seaquence = array();
$pageTitlesgoods_num_seaquence = array();
$placeHoldersgoods_num_seaquence = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsgoods_num_seaquence["Japanese"] = array();
	$fieldToolTipsgoods_num_seaquence["Japanese"] = array();
	$placeHoldersgoods_num_seaquence["Japanese"] = array();
	$pageTitlesgoods_num_seaquence["Japanese"] = array();
	$fieldLabelsgoods_num_seaquence["Japanese"]["id"] = "Id";
	$fieldToolTipsgoods_num_seaquence["Japanese"]["id"] = "";
	$placeHoldersgoods_num_seaquence["Japanese"]["id"] = "";
	$fieldLabelsgoods_num_seaquence["Japanese"]["initial"] = "Initial";
	$fieldToolTipsgoods_num_seaquence["Japanese"]["initial"] = "";
	$placeHoldersgoods_num_seaquence["Japanese"]["initial"] = "";
	$fieldLabelsgoods_num_seaquence["Japanese"]["seq_id"] = "Seq Id";
	$fieldToolTipsgoods_num_seaquence["Japanese"]["seq_id"] = "";
	$placeHoldersgoods_num_seaquence["Japanese"]["seq_id"] = "";
	if (count($fieldToolTipsgoods_num_seaquence["Japanese"]))
		$tdatagoods_num_seaquence[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsgoods_num_seaquence[""] = array();
	$fieldToolTipsgoods_num_seaquence[""] = array();
	$placeHoldersgoods_num_seaquence[""] = array();
	$pageTitlesgoods_num_seaquence[""] = array();
	$fieldLabelsgoods_num_seaquence[""]["id"] = "Id";
	$fieldToolTipsgoods_num_seaquence[""]["id"] = "";
	$placeHoldersgoods_num_seaquence[""]["id"] = "";
	$fieldLabelsgoods_num_seaquence[""]["initial"] = "Initial";
	$fieldToolTipsgoods_num_seaquence[""]["initial"] = "";
	$placeHoldersgoods_num_seaquence[""]["initial"] = "";
	$fieldLabelsgoods_num_seaquence[""]["seq_id"] = "Seq Id";
	$fieldToolTipsgoods_num_seaquence[""]["seq_id"] = "";
	$placeHoldersgoods_num_seaquence[""]["seq_id"] = "";
	if (count($fieldToolTipsgoods_num_seaquence[""]))
		$tdatagoods_num_seaquence[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsgoods_num_seaquence["English"] = array();
	$fieldToolTipsgoods_num_seaquence["English"] = array();
	$placeHoldersgoods_num_seaquence["English"] = array();
	$pageTitlesgoods_num_seaquence["English"] = array();
	$fieldLabelsgoods_num_seaquence["English"]["id"] = "Id";
	$fieldToolTipsgoods_num_seaquence["English"]["id"] = "";
	$placeHoldersgoods_num_seaquence["English"]["id"] = "";
	$fieldLabelsgoods_num_seaquence["English"]["initial"] = "Initial";
	$fieldToolTipsgoods_num_seaquence["English"]["initial"] = "";
	$placeHoldersgoods_num_seaquence["English"]["initial"] = "";
	$fieldLabelsgoods_num_seaquence["English"]["seq_id"] = "Seq Id";
	$fieldToolTipsgoods_num_seaquence["English"]["seq_id"] = "";
	$placeHoldersgoods_num_seaquence["English"]["seq_id"] = "";
	if (count($fieldToolTipsgoods_num_seaquence["English"]))
		$tdatagoods_num_seaquence[".isUseToolTips"] = true;
}


	$tdatagoods_num_seaquence[".NCSearch"] = true;



$tdatagoods_num_seaquence[".shortTableName"] = "goods_num_seaquence";
$tdatagoods_num_seaquence[".nSecOptions"] = 0;
$tdatagoods_num_seaquence[".recsPerRowPrint"] = 1;
$tdatagoods_num_seaquence[".mainTableOwnerID"] = "";
$tdatagoods_num_seaquence[".moveNext"] = 1;
$tdatagoods_num_seaquence[".entityType"] = 0;

$tdatagoods_num_seaquence[".strOriginalTableName"] = "goods_num_seaquence";

	



$tdatagoods_num_seaquence[".showAddInPopup"] = false;

$tdatagoods_num_seaquence[".showEditInPopup"] = false;

$tdatagoods_num_seaquence[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatagoods_num_seaquence[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatagoods_num_seaquence[".fieldsForRegister"] = array();

$tdatagoods_num_seaquence[".listAjax"] = false;

	$tdatagoods_num_seaquence[".audit"] = false;

	$tdatagoods_num_seaquence[".locking"] = false;



$tdatagoods_num_seaquence[".list"] = true;



$tdatagoods_num_seaquence[".reorderRecordsByHeader"] = true;








$tdatagoods_num_seaquence[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatagoods_num_seaquence[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatagoods_num_seaquence[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatagoods_num_seaquence[".searchSaving"] = false;
//

$tdatagoods_num_seaquence[".showSearchPanel"] = true;
		$tdatagoods_num_seaquence[".flexibleSearch"] = true;

$tdatagoods_num_seaquence[".isUseAjaxSuggest"] = true;

$tdatagoods_num_seaquence[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatagoods_num_seaquence[".ajaxCodeSnippetAdded"] = false;

$tdatagoods_num_seaquence[".buttonsAdded"] = false;

$tdatagoods_num_seaquence[".addPageEvents"] = false;

// use timepicker for search panel
$tdatagoods_num_seaquence[".isUseTimeForSearch"] = false;





$tdatagoods_num_seaquence[".allSearchFields"] = array();
$tdatagoods_num_seaquence[".filterFields"] = array();
$tdatagoods_num_seaquence[".requiredSearchFields"] = array();

$tdatagoods_num_seaquence[".allSearchFields"][] = "id";
	$tdatagoods_num_seaquence[".allSearchFields"][] = "initial";
	$tdatagoods_num_seaquence[".allSearchFields"][] = "seq_id";
	

$tdatagoods_num_seaquence[".googleLikeFields"] = array();
$tdatagoods_num_seaquence[".googleLikeFields"][] = "id";
$tdatagoods_num_seaquence[".googleLikeFields"][] = "initial";
$tdatagoods_num_seaquence[".googleLikeFields"][] = "seq_id";


$tdatagoods_num_seaquence[".advSearchFields"] = array();
$tdatagoods_num_seaquence[".advSearchFields"][] = "id";
$tdatagoods_num_seaquence[".advSearchFields"][] = "initial";
$tdatagoods_num_seaquence[".advSearchFields"][] = "seq_id";

$tdatagoods_num_seaquence[".tableType"] = "list";

$tdatagoods_num_seaquence[".printerPageOrientation"] = 0;
$tdatagoods_num_seaquence[".nPrinterPageScale"] = 100;

$tdatagoods_num_seaquence[".nPrinterSplitRecords"] = 40;

$tdatagoods_num_seaquence[".nPrinterPDFSplitRecords"] = 40;



$tdatagoods_num_seaquence[".geocodingEnabled"] = false;





$tdatagoods_num_seaquence[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatagoods_num_seaquence[".pageSize"] = 20;

$tdatagoods_num_seaquence[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatagoods_num_seaquence[".strOrderBy"] = $tstrOrderBy;

$tdatagoods_num_seaquence[".orderindexes"] = array();

$tdatagoods_num_seaquence[".sqlHead"] = "SELECT `id`,  	`initial`,  	`seq_id`";
$tdatagoods_num_seaquence[".sqlFrom"] = "FROM `goods_num_seaquence`";
$tdatagoods_num_seaquence[".sqlWhereExpr"] = "";
$tdatagoods_num_seaquence[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatagoods_num_seaquence[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatagoods_num_seaquence[".arrGroupsPerPage"] = $arrGPP;

$tdatagoods_num_seaquence[".highlightSearchResults"] = true;

$tableKeysgoods_num_seaquence = array();
$tableKeysgoods_num_seaquence[] = "id";
$tdatagoods_num_seaquence[".Keys"] = $tableKeysgoods_num_seaquence;

$tdatagoods_num_seaquence[".listFields"] = array();
$tdatagoods_num_seaquence[".listFields"][] = "id";
$tdatagoods_num_seaquence[".listFields"][] = "initial";
$tdatagoods_num_seaquence[".listFields"][] = "seq_id";

$tdatagoods_num_seaquence[".hideMobileList"] = array();


$tdatagoods_num_seaquence[".viewFields"] = array();

$tdatagoods_num_seaquence[".addFields"] = array();

$tdatagoods_num_seaquence[".masterListFields"] = array();
$tdatagoods_num_seaquence[".masterListFields"][] = "id";
$tdatagoods_num_seaquence[".masterListFields"][] = "initial";
$tdatagoods_num_seaquence[".masterListFields"][] = "seq_id";

$tdatagoods_num_seaquence[".inlineAddFields"] = array();

$tdatagoods_num_seaquence[".editFields"] = array();

$tdatagoods_num_seaquence[".inlineEditFields"] = array();

$tdatagoods_num_seaquence[".updateSelectedFields"] = array();


$tdatagoods_num_seaquence[".exportFields"] = array();

$tdatagoods_num_seaquence[".importFields"] = array();

$tdatagoods_num_seaquence[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "goods_num_seaquence";
	$fdata["Label"] = GetFieldLabel("goods_num_seaquence","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdatagoods_num_seaquence["id"] = $fdata;
//	initial
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "initial";
	$fdata["GoodName"] = "initial";
	$fdata["ownerTable"] = "goods_num_seaquence";
	$fdata["Label"] = GetFieldLabel("goods_num_seaquence","initial");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "initial";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`initial`";

	
	
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
			$edata["EditParams"].= " maxlength=3";

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




	$tdatagoods_num_seaquence["initial"] = $fdata;
//	seq_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "seq_id";
	$fdata["GoodName"] = "seq_id";
	$fdata["ownerTable"] = "goods_num_seaquence";
	$fdata["Label"] = GetFieldLabel("goods_num_seaquence","seq_id");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "seq_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`seq_id`";

	
	
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
			$edata["EditParams"].= " maxlength=3";

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




	$tdatagoods_num_seaquence["seq_id"] = $fdata;


$tables_data["goods_num_seaquence"]=&$tdatagoods_num_seaquence;
$field_labels["goods_num_seaquence"] = &$fieldLabelsgoods_num_seaquence;
$fieldToolTips["goods_num_seaquence"] = &$fieldToolTipsgoods_num_seaquence;
$placeHolders["goods_num_seaquence"] = &$placeHoldersgoods_num_seaquence;
$page_titles["goods_num_seaquence"] = &$pageTitlesgoods_num_seaquence;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["goods_num_seaquence"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["goods_num_seaquence"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_goods_num_seaquence()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  	`initial`,  	`seq_id`";
$proto0["m_strFrom"] = "FROM `goods_num_seaquence`";
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
	"m_strTable" => "goods_num_seaquence",
	"m_srcTableName" => "goods_num_seaquence"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "goods_num_seaquence";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "initial",
	"m_strTable" => "goods_num_seaquence",
	"m_srcTableName" => "goods_num_seaquence"
));

$proto8["m_sql"] = "`initial`";
$proto8["m_srcTableName"] = "goods_num_seaquence";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "seq_id",
	"m_strTable" => "goods_num_seaquence",
	"m_srcTableName" => "goods_num_seaquence"
));

$proto10["m_sql"] = "`seq_id`";
$proto10["m_srcTableName"] = "goods_num_seaquence";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "goods_num_seaquence";
$proto13["m_srcTableName"] = "goods_num_seaquence";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "id";
$proto13["m_columns"][] = "initial";
$proto13["m_columns"][] = "seq_id";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "`goods_num_seaquence`";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "goods_num_seaquence";
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
$proto0["m_srcTableName"]="goods_num_seaquence";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_goods_num_seaquence = createSqlQuery_goods_num_seaquence();


	
		;

			

$tdatagoods_num_seaquence[".sqlquery"] = $queryData_goods_num_seaquence;

$tableEvents["goods_num_seaquence"] = new eventsBase;
$tdatagoods_num_seaquence[".hasEvents"] = false;

?>