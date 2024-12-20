<?php
require_once(getabspath("classes/cipherer.php"));




$tdatavw_store_categories_add_all = array();
	$tdatavw_store_categories_add_all[".truncateText"] = true;
	$tdatavw_store_categories_add_all[".NumberOfChars"] = 80;
	$tdatavw_store_categories_add_all[".ShortName"] = "vw_store_categories_add_all";
	$tdatavw_store_categories_add_all[".OwnerID"] = "";
	$tdatavw_store_categories_add_all[".OriginalTable"] = "vw_store_categories_add_all";

//	field labels
$fieldLabelsvw_store_categories_add_all = array();
$fieldToolTipsvw_store_categories_add_all = array();
$pageTitlesvw_store_categories_add_all = array();
$placeHoldersvw_store_categories_add_all = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsvw_store_categories_add_all["Japanese"] = array();
	$fieldToolTipsvw_store_categories_add_all["Japanese"] = array();
	$placeHoldersvw_store_categories_add_all["Japanese"] = array();
	$pageTitlesvw_store_categories_add_all["Japanese"] = array();
	$fieldLabelsvw_store_categories_add_all["Japanese"]["category_id"] = "Category Id";
	$fieldToolTipsvw_store_categories_add_all["Japanese"]["category_id"] = "";
	$placeHoldersvw_store_categories_add_all["Japanese"]["category_id"] = "";
	$fieldLabelsvw_store_categories_add_all["Japanese"]["category_name"] = "Category Name";
	$fieldToolTipsvw_store_categories_add_all["Japanese"]["category_name"] = "";
	$placeHoldersvw_store_categories_add_all["Japanese"]["category_name"] = "";
	$fieldLabelsvw_store_categories_add_all["Japanese"]["sort"] = "Sort";
	$fieldToolTipsvw_store_categories_add_all["Japanese"]["sort"] = "";
	$placeHoldersvw_store_categories_add_all["Japanese"]["sort"] = "";
	if (count($fieldToolTipsvw_store_categories_add_all["Japanese"]))
		$tdatavw_store_categories_add_all[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsvw_store_categories_add_all[""] = array();
	$fieldToolTipsvw_store_categories_add_all[""] = array();
	$placeHoldersvw_store_categories_add_all[""] = array();
	$pageTitlesvw_store_categories_add_all[""] = array();
	$fieldLabelsvw_store_categories_add_all[""]["category_id"] = "Category Id";
	$fieldToolTipsvw_store_categories_add_all[""]["category_id"] = "";
	$placeHoldersvw_store_categories_add_all[""]["category_id"] = "";
	$fieldLabelsvw_store_categories_add_all[""]["category_name"] = "Category Name";
	$fieldToolTipsvw_store_categories_add_all[""]["category_name"] = "";
	$placeHoldersvw_store_categories_add_all[""]["category_name"] = "";
	$fieldLabelsvw_store_categories_add_all[""]["sort"] = "Sort";
	$fieldToolTipsvw_store_categories_add_all[""]["sort"] = "";
	$placeHoldersvw_store_categories_add_all[""]["sort"] = "";
	if (count($fieldToolTipsvw_store_categories_add_all[""]))
		$tdatavw_store_categories_add_all[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsvw_store_categories_add_all["English"] = array();
	$fieldToolTipsvw_store_categories_add_all["English"] = array();
	$placeHoldersvw_store_categories_add_all["English"] = array();
	$pageTitlesvw_store_categories_add_all["English"] = array();
	$fieldLabelsvw_store_categories_add_all["English"]["category_id"] = "Category Id";
	$fieldToolTipsvw_store_categories_add_all["English"]["category_id"] = "";
	$placeHoldersvw_store_categories_add_all["English"]["category_id"] = "";
	$fieldLabelsvw_store_categories_add_all["English"]["category_name"] = "Category Name";
	$fieldToolTipsvw_store_categories_add_all["English"]["category_name"] = "";
	$placeHoldersvw_store_categories_add_all["English"]["category_name"] = "";
	$fieldLabelsvw_store_categories_add_all["English"]["sort"] = "Sort";
	$fieldToolTipsvw_store_categories_add_all["English"]["sort"] = "";
	$placeHoldersvw_store_categories_add_all["English"]["sort"] = "";
	if (count($fieldToolTipsvw_store_categories_add_all["English"]))
		$tdatavw_store_categories_add_all[".isUseToolTips"] = true;
}


	$tdatavw_store_categories_add_all[".NCSearch"] = true;



$tdatavw_store_categories_add_all[".shortTableName"] = "vw_store_categories_add_all";
$tdatavw_store_categories_add_all[".nSecOptions"] = 0;
$tdatavw_store_categories_add_all[".recsPerRowPrint"] = 1;
$tdatavw_store_categories_add_all[".mainTableOwnerID"] = "";
$tdatavw_store_categories_add_all[".moveNext"] = 1;
$tdatavw_store_categories_add_all[".entityType"] = 0;

$tdatavw_store_categories_add_all[".strOriginalTableName"] = "vw_store_categories_add_all";

	



$tdatavw_store_categories_add_all[".showAddInPopup"] = false;

$tdatavw_store_categories_add_all[".showEditInPopup"] = false;

$tdatavw_store_categories_add_all[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatavw_store_categories_add_all[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatavw_store_categories_add_all[".fieldsForRegister"] = array();

$tdatavw_store_categories_add_all[".listAjax"] = false;

	$tdatavw_store_categories_add_all[".audit"] = false;

	$tdatavw_store_categories_add_all[".locking"] = false;






$tdatavw_store_categories_add_all[".reorderRecordsByHeader"] = true;








$tdatavw_store_categories_add_all[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatavw_store_categories_add_all[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatavw_store_categories_add_all[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatavw_store_categories_add_all[".searchSaving"] = false;
//

$tdatavw_store_categories_add_all[".showSearchPanel"] = true;
		$tdatavw_store_categories_add_all[".flexibleSearch"] = true;

$tdatavw_store_categories_add_all[".isUseAjaxSuggest"] = true;

$tdatavw_store_categories_add_all[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatavw_store_categories_add_all[".ajaxCodeSnippetAdded"] = false;

$tdatavw_store_categories_add_all[".buttonsAdded"] = false;

$tdatavw_store_categories_add_all[".addPageEvents"] = false;

// use timepicker for search panel
$tdatavw_store_categories_add_all[".isUseTimeForSearch"] = false;





$tdatavw_store_categories_add_all[".allSearchFields"] = array();
$tdatavw_store_categories_add_all[".filterFields"] = array();
$tdatavw_store_categories_add_all[".requiredSearchFields"] = array();



$tdatavw_store_categories_add_all[".googleLikeFields"] = array();
$tdatavw_store_categories_add_all[".googleLikeFields"][] = "category_id";
$tdatavw_store_categories_add_all[".googleLikeFields"][] = "category_name";
$tdatavw_store_categories_add_all[".googleLikeFields"][] = "sort";



$tdatavw_store_categories_add_all[".tableType"] = "list";

$tdatavw_store_categories_add_all[".printerPageOrientation"] = 0;
$tdatavw_store_categories_add_all[".nPrinterPageScale"] = 100;

$tdatavw_store_categories_add_all[".nPrinterSplitRecords"] = 40;

$tdatavw_store_categories_add_all[".nPrinterPDFSplitRecords"] = 40;



$tdatavw_store_categories_add_all[".geocodingEnabled"] = false;





$tdatavw_store_categories_add_all[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatavw_store_categories_add_all[".pageSize"] = 20;

$tdatavw_store_categories_add_all[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatavw_store_categories_add_all[".strOrderBy"] = $tstrOrderBy;

$tdatavw_store_categories_add_all[".orderindexes"] = array();

$tdatavw_store_categories_add_all[".sqlHead"] = "SELECT `category_id`,  	`category_name`,  	`sort`";
$tdatavw_store_categories_add_all[".sqlFrom"] = "FROM `vw_store_categories_add_all`";
$tdatavw_store_categories_add_all[".sqlWhereExpr"] = "";
$tdatavw_store_categories_add_all[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatavw_store_categories_add_all[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatavw_store_categories_add_all[".arrGroupsPerPage"] = $arrGPP;

$tdatavw_store_categories_add_all[".highlightSearchResults"] = true;

$tableKeysvw_store_categories_add_all = array();
$tdatavw_store_categories_add_all[".Keys"] = $tableKeysvw_store_categories_add_all;

$tdatavw_store_categories_add_all[".listFields"] = array();
$tdatavw_store_categories_add_all[".listFields"][] = "category_id";
$tdatavw_store_categories_add_all[".listFields"][] = "category_name";
$tdatavw_store_categories_add_all[".listFields"][] = "sort";

$tdatavw_store_categories_add_all[".hideMobileList"] = array();


$tdatavw_store_categories_add_all[".viewFields"] = array();
$tdatavw_store_categories_add_all[".viewFields"][] = "category_id";
$tdatavw_store_categories_add_all[".viewFields"][] = "category_name";
$tdatavw_store_categories_add_all[".viewFields"][] = "sort";

$tdatavw_store_categories_add_all[".addFields"] = array();
$tdatavw_store_categories_add_all[".addFields"][] = "category_id";
$tdatavw_store_categories_add_all[".addFields"][] = "category_name";
$tdatavw_store_categories_add_all[".addFields"][] = "sort";

$tdatavw_store_categories_add_all[".masterListFields"] = array();
$tdatavw_store_categories_add_all[".masterListFields"][] = "category_id";
$tdatavw_store_categories_add_all[".masterListFields"][] = "category_name";
$tdatavw_store_categories_add_all[".masterListFields"][] = "sort";

$tdatavw_store_categories_add_all[".inlineAddFields"] = array();
$tdatavw_store_categories_add_all[".inlineAddFields"][] = "category_id";
$tdatavw_store_categories_add_all[".inlineAddFields"][] = "category_name";
$tdatavw_store_categories_add_all[".inlineAddFields"][] = "sort";

$tdatavw_store_categories_add_all[".editFields"] = array();
$tdatavw_store_categories_add_all[".editFields"][] = "category_id";
$tdatavw_store_categories_add_all[".editFields"][] = "category_name";
$tdatavw_store_categories_add_all[".editFields"][] = "sort";

$tdatavw_store_categories_add_all[".inlineEditFields"] = array();
$tdatavw_store_categories_add_all[".inlineEditFields"][] = "category_id";
$tdatavw_store_categories_add_all[".inlineEditFields"][] = "category_name";
$tdatavw_store_categories_add_all[".inlineEditFields"][] = "sort";

$tdatavw_store_categories_add_all[".updateSelectedFields"] = array();
$tdatavw_store_categories_add_all[".updateSelectedFields"][] = "category_id";
$tdatavw_store_categories_add_all[".updateSelectedFields"][] = "category_name";
$tdatavw_store_categories_add_all[".updateSelectedFields"][] = "sort";


$tdatavw_store_categories_add_all[".exportFields"] = array();
$tdatavw_store_categories_add_all[".exportFields"][] = "category_id";
$tdatavw_store_categories_add_all[".exportFields"][] = "category_name";
$tdatavw_store_categories_add_all[".exportFields"][] = "sort";

$tdatavw_store_categories_add_all[".importFields"] = array();
$tdatavw_store_categories_add_all[".importFields"][] = "category_id";
$tdatavw_store_categories_add_all[".importFields"][] = "category_name";
$tdatavw_store_categories_add_all[".importFields"][] = "sort";

$tdatavw_store_categories_add_all[".printFields"] = array();
$tdatavw_store_categories_add_all[".printFields"][] = "category_id";
$tdatavw_store_categories_add_all[".printFields"][] = "category_name";
$tdatavw_store_categories_add_all[".printFields"][] = "sort";

//	category_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "category_id";
	$fdata["GoodName"] = "category_id";
	$fdata["ownerTable"] = "vw_store_categories_add_all";
	$fdata["Label"] = GetFieldLabel("vw_store_categories_add_all","category_id");
	$fdata["FieldType"] = 13;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "category_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`category_id`";

	
	
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
			$edata["EditParams"].= " maxlength=11";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatavw_store_categories_add_all["category_id"] = $fdata;
//	category_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "category_name";
	$fdata["GoodName"] = "category_name";
	$fdata["ownerTable"] = "vw_store_categories_add_all";
	$fdata["Label"] = GetFieldLabel("vw_store_categories_add_all","category_name");
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

		$fdata["strField"] = "category_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`category_name`";

	
	
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








	$tdatavw_store_categories_add_all["category_name"] = $fdata;
//	sort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sort";
	$fdata["GoodName"] = "sort";
	$fdata["ownerTable"] = "vw_store_categories_add_all";
	$fdata["Label"] = GetFieldLabel("vw_store_categories_add_all","sort");
	$fdata["FieldType"] = 13;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "sort";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`sort`";

	
	
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
			$edata["EditParams"].= " maxlength=11";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatavw_store_categories_add_all["sort"] = $fdata;


$tables_data["vw_store_categories_add_all"]=&$tdatavw_store_categories_add_all;
$field_labels["vw_store_categories_add_all"] = &$fieldLabelsvw_store_categories_add_all;
$fieldToolTips["vw_store_categories_add_all"] = &$fieldToolTipsvw_store_categories_add_all;
$placeHolders["vw_store_categories_add_all"] = &$placeHoldersvw_store_categories_add_all;
$page_titles["vw_store_categories_add_all"] = &$pageTitlesvw_store_categories_add_all;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["vw_store_categories_add_all"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["vw_store_categories_add_all"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_vw_store_categories_add_all()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`category_id`,  	`category_name`,  	`sort`";
$proto0["m_strFrom"] = "FROM `vw_store_categories_add_all`";
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
	"m_strName" => "category_id",
	"m_strTable" => "vw_store_categories_add_all",
	"m_srcTableName" => "vw_store_categories_add_all"
));

$proto6["m_sql"] = "`category_id`";
$proto6["m_srcTableName"] = "vw_store_categories_add_all";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "category_name",
	"m_strTable" => "vw_store_categories_add_all",
	"m_srcTableName" => "vw_store_categories_add_all"
));

$proto8["m_sql"] = "`category_name`";
$proto8["m_srcTableName"] = "vw_store_categories_add_all";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "sort",
	"m_strTable" => "vw_store_categories_add_all",
	"m_srcTableName" => "vw_store_categories_add_all"
));

$proto10["m_sql"] = "`sort`";
$proto10["m_srcTableName"] = "vw_store_categories_add_all";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "vw_store_categories_add_all";
$proto13["m_srcTableName"] = "vw_store_categories_add_all";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "category_id";
$proto13["m_columns"][] = "category_name";
$proto13["m_columns"][] = "sort";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "`vw_store_categories_add_all`";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "vw_store_categories_add_all";
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
$proto0["m_srcTableName"]="vw_store_categories_add_all";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_vw_store_categories_add_all = createSqlQuery_vw_store_categories_add_all();


	
		;

			

$tdatavw_store_categories_add_all[".sqlquery"] = $queryData_vw_store_categories_add_all;

$tableEvents["vw_store_categories_add_all"] = new eventsBase;
$tdatavw_store_categories_add_all[".hasEvents"] = false;

?>