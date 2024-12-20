<?php
require_once(getabspath("classes/cipherer.php"));




$tdata_DIA_DA_CUSTOMER = array();
	$tdata_DIA_DA_CUSTOMER[".truncateText"] = true;
	$tdata_DIA_DA_CUSTOMER[".NumberOfChars"] = 80;
	$tdata_DIA_DA_CUSTOMER[".ShortName"] = "_DIA_DA_CUSTOMER";
	$tdata_DIA_DA_CUSTOMER[".OwnerID"] = "";
	$tdata_DIA_DA_CUSTOMER[".OriginalTable"] = "_DIA_DA_CUSTOMER";

//	field labels
$fieldLabels_DIA_DA_CUSTOMER = array();
$fieldToolTips_DIA_DA_CUSTOMER = array();
$pageTitles_DIA_DA_CUSTOMER = array();
$placeHolders_DIA_DA_CUSTOMER = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabels_DIA_DA_CUSTOMER["Japanese"] = array();
	$fieldToolTips_DIA_DA_CUSTOMER["Japanese"] = array();
	$placeHolders_DIA_DA_CUSTOMER["Japanese"] = array();
	$pageTitles_DIA_DA_CUSTOMER["Japanese"] = array();
	$fieldLabels_DIA_DA_CUSTOMER["Japanese"]["id"] = "Id";
	$fieldToolTips_DIA_DA_CUSTOMER["Japanese"]["id"] = "";
	$placeHolders_DIA_DA_CUSTOMER["Japanese"]["id"] = "";
	$fieldLabels_DIA_DA_CUSTOMER["Japanese"]["name"] = "Name";
	$fieldToolTips_DIA_DA_CUSTOMER["Japanese"]["name"] = "";
	$placeHolders_DIA_DA_CUSTOMER["Japanese"]["name"] = "";
	$fieldLabels_DIA_DA_CUSTOMER["Japanese"]["sort"] = "Sort";
	$fieldToolTips_DIA_DA_CUSTOMER["Japanese"]["sort"] = "";
	$placeHolders_DIA_DA_CUSTOMER["Japanese"]["sort"] = "";
	$fieldLabels_DIA_DA_CUSTOMER["Japanese"]["parent"] = "Parent";
	$fieldToolTips_DIA_DA_CUSTOMER["Japanese"]["parent"] = "";
	$placeHolders_DIA_DA_CUSTOMER["Japanese"]["parent"] = "";
	if (count($fieldToolTips_DIA_DA_CUSTOMER["Japanese"]))
		$tdata_DIA_DA_CUSTOMER[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabels_DIA_DA_CUSTOMER[""] = array();
	$fieldToolTips_DIA_DA_CUSTOMER[""] = array();
	$placeHolders_DIA_DA_CUSTOMER[""] = array();
	$pageTitles_DIA_DA_CUSTOMER[""] = array();
	$fieldLabels_DIA_DA_CUSTOMER[""]["id"] = "Id";
	$fieldToolTips_DIA_DA_CUSTOMER[""]["id"] = "";
	$placeHolders_DIA_DA_CUSTOMER[""]["id"] = "";
	$fieldLabels_DIA_DA_CUSTOMER[""]["name"] = "Name";
	$fieldToolTips_DIA_DA_CUSTOMER[""]["name"] = "";
	$placeHolders_DIA_DA_CUSTOMER[""]["name"] = "";
	$fieldLabels_DIA_DA_CUSTOMER[""]["sort"] = "Sort";
	$fieldToolTips_DIA_DA_CUSTOMER[""]["sort"] = "";
	$placeHolders_DIA_DA_CUSTOMER[""]["sort"] = "";
	$fieldLabels_DIA_DA_CUSTOMER[""]["parent"] = "Parent";
	$fieldToolTips_DIA_DA_CUSTOMER[""]["parent"] = "";
	$placeHolders_DIA_DA_CUSTOMER[""]["parent"] = "";
	if (count($fieldToolTips_DIA_DA_CUSTOMER[""]))
		$tdata_DIA_DA_CUSTOMER[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabels_DIA_DA_CUSTOMER["English"] = array();
	$fieldToolTips_DIA_DA_CUSTOMER["English"] = array();
	$placeHolders_DIA_DA_CUSTOMER["English"] = array();
	$pageTitles_DIA_DA_CUSTOMER["English"] = array();
	$fieldLabels_DIA_DA_CUSTOMER["English"]["id"] = "Id";
	$fieldToolTips_DIA_DA_CUSTOMER["English"]["id"] = "";
	$placeHolders_DIA_DA_CUSTOMER["English"]["id"] = "";
	$fieldLabels_DIA_DA_CUSTOMER["English"]["name"] = "Name";
	$fieldToolTips_DIA_DA_CUSTOMER["English"]["name"] = "";
	$placeHolders_DIA_DA_CUSTOMER["English"]["name"] = "";
	$fieldLabels_DIA_DA_CUSTOMER["English"]["sort"] = "Sort";
	$fieldToolTips_DIA_DA_CUSTOMER["English"]["sort"] = "";
	$placeHolders_DIA_DA_CUSTOMER["English"]["sort"] = "";
	$fieldLabels_DIA_DA_CUSTOMER["English"]["parent"] = "Parent";
	$fieldToolTips_DIA_DA_CUSTOMER["English"]["parent"] = "";
	$placeHolders_DIA_DA_CUSTOMER["English"]["parent"] = "";
	if (count($fieldToolTips_DIA_DA_CUSTOMER["English"]))
		$tdata_DIA_DA_CUSTOMER[".isUseToolTips"] = true;
}


	$tdata_DIA_DA_CUSTOMER[".NCSearch"] = true;



$tdata_DIA_DA_CUSTOMER[".shortTableName"] = "_DIA_DA_CUSTOMER";
$tdata_DIA_DA_CUSTOMER[".nSecOptions"] = 0;
$tdata_DIA_DA_CUSTOMER[".recsPerRowPrint"] = 1;
$tdata_DIA_DA_CUSTOMER[".mainTableOwnerID"] = "";
$tdata_DIA_DA_CUSTOMER[".moveNext"] = 1;
$tdata_DIA_DA_CUSTOMER[".entityType"] = 0;

$tdata_DIA_DA_CUSTOMER[".strOriginalTableName"] = "_DIA_DA_CUSTOMER";

	



$tdata_DIA_DA_CUSTOMER[".showAddInPopup"] = false;

$tdata_DIA_DA_CUSTOMER[".showEditInPopup"] = false;

$tdata_DIA_DA_CUSTOMER[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdata_DIA_DA_CUSTOMER[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdata_DIA_DA_CUSTOMER[".fieldsForRegister"] = array();

$tdata_DIA_DA_CUSTOMER[".listAjax"] = false;

	$tdata_DIA_DA_CUSTOMER[".audit"] = false;

	$tdata_DIA_DA_CUSTOMER[".locking"] = false;






$tdata_DIA_DA_CUSTOMER[".reorderRecordsByHeader"] = true;








$tdata_DIA_DA_CUSTOMER[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdata_DIA_DA_CUSTOMER[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdata_DIA_DA_CUSTOMER[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdata_DIA_DA_CUSTOMER[".searchSaving"] = false;
//

$tdata_DIA_DA_CUSTOMER[".showSearchPanel"] = true;
		$tdata_DIA_DA_CUSTOMER[".flexibleSearch"] = true;

$tdata_DIA_DA_CUSTOMER[".isUseAjaxSuggest"] = true;

$tdata_DIA_DA_CUSTOMER[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdata_DIA_DA_CUSTOMER[".ajaxCodeSnippetAdded"] = false;

$tdata_DIA_DA_CUSTOMER[".buttonsAdded"] = false;

$tdata_DIA_DA_CUSTOMER[".addPageEvents"] = false;

// use timepicker for search panel
$tdata_DIA_DA_CUSTOMER[".isUseTimeForSearch"] = false;





$tdata_DIA_DA_CUSTOMER[".allSearchFields"] = array();
$tdata_DIA_DA_CUSTOMER[".filterFields"] = array();
$tdata_DIA_DA_CUSTOMER[".requiredSearchFields"] = array();



$tdata_DIA_DA_CUSTOMER[".googleLikeFields"] = array();
$tdata_DIA_DA_CUSTOMER[".googleLikeFields"][] = "id";
$tdata_DIA_DA_CUSTOMER[".googleLikeFields"][] = "name";
$tdata_DIA_DA_CUSTOMER[".googleLikeFields"][] = "sort";
$tdata_DIA_DA_CUSTOMER[".googleLikeFields"][] = "parent";



$tdata_DIA_DA_CUSTOMER[".tableType"] = "list";

$tdata_DIA_DA_CUSTOMER[".printerPageOrientation"] = 0;
$tdata_DIA_DA_CUSTOMER[".nPrinterPageScale"] = 100;

$tdata_DIA_DA_CUSTOMER[".nPrinterSplitRecords"] = 40;

$tdata_DIA_DA_CUSTOMER[".nPrinterPDFSplitRecords"] = 40;



$tdata_DIA_DA_CUSTOMER[".geocodingEnabled"] = false;





$tdata_DIA_DA_CUSTOMER[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdata_DIA_DA_CUSTOMER[".pageSize"] = 20;

$tdata_DIA_DA_CUSTOMER[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdata_DIA_DA_CUSTOMER[".strOrderBy"] = $tstrOrderBy;

$tdata_DIA_DA_CUSTOMER[".orderindexes"] = array();

$tdata_DIA_DA_CUSTOMER[".sqlHead"] = "SELECT `id`,  	`name`,  	`sort`,  	`parent`";
$tdata_DIA_DA_CUSTOMER[".sqlFrom"] = "FROM `_DIA_DA_CUSTOMER`";
$tdata_DIA_DA_CUSTOMER[".sqlWhereExpr"] = "";
$tdata_DIA_DA_CUSTOMER[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdata_DIA_DA_CUSTOMER[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdata_DIA_DA_CUSTOMER[".arrGroupsPerPage"] = $arrGPP;

$tdata_DIA_DA_CUSTOMER[".highlightSearchResults"] = true;

$tableKeys_DIA_DA_CUSTOMER = array();
$tableKeys_DIA_DA_CUSTOMER[] = "id";
$tdata_DIA_DA_CUSTOMER[".Keys"] = $tableKeys_DIA_DA_CUSTOMER;

$tdata_DIA_DA_CUSTOMER[".listFields"] = array();
$tdata_DIA_DA_CUSTOMER[".listFields"][] = "id";
$tdata_DIA_DA_CUSTOMER[".listFields"][] = "name";
$tdata_DIA_DA_CUSTOMER[".listFields"][] = "sort";
$tdata_DIA_DA_CUSTOMER[".listFields"][] = "parent";

$tdata_DIA_DA_CUSTOMER[".hideMobileList"] = array();


$tdata_DIA_DA_CUSTOMER[".viewFields"] = array();
$tdata_DIA_DA_CUSTOMER[".viewFields"][] = "id";
$tdata_DIA_DA_CUSTOMER[".viewFields"][] = "name";
$tdata_DIA_DA_CUSTOMER[".viewFields"][] = "sort";
$tdata_DIA_DA_CUSTOMER[".viewFields"][] = "parent";

$tdata_DIA_DA_CUSTOMER[".addFields"] = array();
$tdata_DIA_DA_CUSTOMER[".addFields"][] = "name";
$tdata_DIA_DA_CUSTOMER[".addFields"][] = "sort";
$tdata_DIA_DA_CUSTOMER[".addFields"][] = "parent";

$tdata_DIA_DA_CUSTOMER[".masterListFields"] = array();
$tdata_DIA_DA_CUSTOMER[".masterListFields"][] = "id";
$tdata_DIA_DA_CUSTOMER[".masterListFields"][] = "name";
$tdata_DIA_DA_CUSTOMER[".masterListFields"][] = "sort";
$tdata_DIA_DA_CUSTOMER[".masterListFields"][] = "parent";

$tdata_DIA_DA_CUSTOMER[".inlineAddFields"] = array();
$tdata_DIA_DA_CUSTOMER[".inlineAddFields"][] = "name";
$tdata_DIA_DA_CUSTOMER[".inlineAddFields"][] = "sort";
$tdata_DIA_DA_CUSTOMER[".inlineAddFields"][] = "parent";

$tdata_DIA_DA_CUSTOMER[".editFields"] = array();
$tdata_DIA_DA_CUSTOMER[".editFields"][] = "name";
$tdata_DIA_DA_CUSTOMER[".editFields"][] = "sort";
$tdata_DIA_DA_CUSTOMER[".editFields"][] = "parent";

$tdata_DIA_DA_CUSTOMER[".inlineEditFields"] = array();
$tdata_DIA_DA_CUSTOMER[".inlineEditFields"][] = "name";
$tdata_DIA_DA_CUSTOMER[".inlineEditFields"][] = "sort";
$tdata_DIA_DA_CUSTOMER[".inlineEditFields"][] = "parent";

$tdata_DIA_DA_CUSTOMER[".updateSelectedFields"] = array();
$tdata_DIA_DA_CUSTOMER[".updateSelectedFields"][] = "name";
$tdata_DIA_DA_CUSTOMER[".updateSelectedFields"][] = "sort";
$tdata_DIA_DA_CUSTOMER[".updateSelectedFields"][] = "parent";


$tdata_DIA_DA_CUSTOMER[".exportFields"] = array();
$tdata_DIA_DA_CUSTOMER[".exportFields"][] = "id";
$tdata_DIA_DA_CUSTOMER[".exportFields"][] = "name";
$tdata_DIA_DA_CUSTOMER[".exportFields"][] = "sort";
$tdata_DIA_DA_CUSTOMER[".exportFields"][] = "parent";

$tdata_DIA_DA_CUSTOMER[".importFields"] = array();
$tdata_DIA_DA_CUSTOMER[".importFields"][] = "id";
$tdata_DIA_DA_CUSTOMER[".importFields"][] = "name";
$tdata_DIA_DA_CUSTOMER[".importFields"][] = "sort";
$tdata_DIA_DA_CUSTOMER[".importFields"][] = "parent";

$tdata_DIA_DA_CUSTOMER[".printFields"] = array();
$tdata_DIA_DA_CUSTOMER[".printFields"][] = "id";
$tdata_DIA_DA_CUSTOMER[".printFields"][] = "name";
$tdata_DIA_DA_CUSTOMER[".printFields"][] = "sort";
$tdata_DIA_DA_CUSTOMER[".printFields"][] = "parent";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "_DIA_DA_CUSTOMER";
	$fdata["Label"] = GetFieldLabel("_DIA_DA_CUSTOMER","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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








	$tdata_DIA_DA_CUSTOMER["id"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "_DIA_DA_CUSTOMER";
	$fdata["Label"] = GetFieldLabel("_DIA_DA_CUSTOMER","name");
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








	$tdata_DIA_DA_CUSTOMER["name"] = $fdata;
//	sort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sort";
	$fdata["GoodName"] = "sort";
	$fdata["ownerTable"] = "_DIA_DA_CUSTOMER";
	$fdata["Label"] = GetFieldLabel("_DIA_DA_CUSTOMER","sort");
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








	$tdata_DIA_DA_CUSTOMER["sort"] = $fdata;
//	parent
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "parent";
	$fdata["GoodName"] = "parent";
	$fdata["ownerTable"] = "_DIA_DA_CUSTOMER";
	$fdata["Label"] = GetFieldLabel("_DIA_DA_CUSTOMER","parent");
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

		$fdata["strField"] = "parent";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`parent`";

	
	
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








	$tdata_DIA_DA_CUSTOMER["parent"] = $fdata;


$tables_data["_DIA_DA_CUSTOMER"]=&$tdata_DIA_DA_CUSTOMER;
$field_labels["_DIA_DA_CUSTOMER"] = &$fieldLabels_DIA_DA_CUSTOMER;
$fieldToolTips["_DIA_DA_CUSTOMER"] = &$fieldToolTips_DIA_DA_CUSTOMER;
$placeHolders["_DIA_DA_CUSTOMER"] = &$placeHolders_DIA_DA_CUSTOMER;
$page_titles["_DIA_DA_CUSTOMER"] = &$pageTitles_DIA_DA_CUSTOMER;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["_DIA_DA_CUSTOMER"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["_DIA_DA_CUSTOMER"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery__DIA_DA_CUSTOMER()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  	`name`,  	`sort`,  	`parent`";
$proto0["m_strFrom"] = "FROM `_DIA_DA_CUSTOMER`";
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
	"m_strTable" => "_DIA_DA_CUSTOMER",
	"m_srcTableName" => "_DIA_DA_CUSTOMER"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "_DIA_DA_CUSTOMER";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "_DIA_DA_CUSTOMER",
	"m_srcTableName" => "_DIA_DA_CUSTOMER"
));

$proto8["m_sql"] = "`name`";
$proto8["m_srcTableName"] = "_DIA_DA_CUSTOMER";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "sort",
	"m_strTable" => "_DIA_DA_CUSTOMER",
	"m_srcTableName" => "_DIA_DA_CUSTOMER"
));

$proto10["m_sql"] = "`sort`";
$proto10["m_srcTableName"] = "_DIA_DA_CUSTOMER";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "parent",
	"m_strTable" => "_DIA_DA_CUSTOMER",
	"m_srcTableName" => "_DIA_DA_CUSTOMER"
));

$proto12["m_sql"] = "`parent`";
$proto12["m_srcTableName"] = "_DIA_DA_CUSTOMER";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "_DIA_DA_CUSTOMER";
$proto15["m_srcTableName"] = "_DIA_DA_CUSTOMER";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "id";
$proto15["m_columns"][] = "name";
$proto15["m_columns"][] = "sort";
$proto15["m_columns"][] = "parent";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "`_DIA_DA_CUSTOMER`";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "_DIA_DA_CUSTOMER";
$proto16=array();
$proto16["m_sql"] = "";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = false;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

$proto14["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto14);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="_DIA_DA_CUSTOMER";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData__DIA_DA_CUSTOMER = createSqlQuery__DIA_DA_CUSTOMER();


	
		;

				

$tdata_DIA_DA_CUSTOMER[".sqlquery"] = $queryData__DIA_DA_CUSTOMER;

$tableEvents["_DIA_DA_CUSTOMER"] = new eventsBase;
$tdata_DIA_DA_CUSTOMER[".hasEvents"] = false;

?>