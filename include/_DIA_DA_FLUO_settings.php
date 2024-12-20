<?php
require_once(getabspath("classes/cipherer.php"));




$tdata_DIA_DA_FLUO = array();
	$tdata_DIA_DA_FLUO[".truncateText"] = true;
	$tdata_DIA_DA_FLUO[".NumberOfChars"] = 80;
	$tdata_DIA_DA_FLUO[".ShortName"] = "_DIA_DA_FLUO";
	$tdata_DIA_DA_FLUO[".OwnerID"] = "";
	$tdata_DIA_DA_FLUO[".OriginalTable"] = "_DIA_DA_FLUO";

//	field labels
$fieldLabels_DIA_DA_FLUO = array();
$fieldToolTips_DIA_DA_FLUO = array();
$pageTitles_DIA_DA_FLUO = array();
$placeHolders_DIA_DA_FLUO = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabels_DIA_DA_FLUO["Japanese"] = array();
	$fieldToolTips_DIA_DA_FLUO["Japanese"] = array();
	$placeHolders_DIA_DA_FLUO["Japanese"] = array();
	$pageTitles_DIA_DA_FLUO["Japanese"] = array();
	$fieldLabels_DIA_DA_FLUO["Japanese"]["id"] = "Id";
	$fieldToolTips_DIA_DA_FLUO["Japanese"]["id"] = "";
	$placeHolders_DIA_DA_FLUO["Japanese"]["id"] = "";
	$fieldLabels_DIA_DA_FLUO["Japanese"]["name"] = "Name";
	$fieldToolTips_DIA_DA_FLUO["Japanese"]["name"] = "";
	$placeHolders_DIA_DA_FLUO["Japanese"]["name"] = "";
	$fieldLabels_DIA_DA_FLUO["Japanese"]["sort"] = "Sort";
	$fieldToolTips_DIA_DA_FLUO["Japanese"]["sort"] = "";
	$placeHolders_DIA_DA_FLUO["Japanese"]["sort"] = "";
	$fieldLabels_DIA_DA_FLUO["Japanese"]["parent"] = "Parent";
	$fieldToolTips_DIA_DA_FLUO["Japanese"]["parent"] = "";
	$placeHolders_DIA_DA_FLUO["Japanese"]["parent"] = "";
	if (count($fieldToolTips_DIA_DA_FLUO["Japanese"]))
		$tdata_DIA_DA_FLUO[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabels_DIA_DA_FLUO[""] = array();
	$fieldToolTips_DIA_DA_FLUO[""] = array();
	$placeHolders_DIA_DA_FLUO[""] = array();
	$pageTitles_DIA_DA_FLUO[""] = array();
	$fieldLabels_DIA_DA_FLUO[""]["id"] = "Id";
	$fieldToolTips_DIA_DA_FLUO[""]["id"] = "";
	$placeHolders_DIA_DA_FLUO[""]["id"] = "";
	$fieldLabels_DIA_DA_FLUO[""]["name"] = "Name";
	$fieldToolTips_DIA_DA_FLUO[""]["name"] = "";
	$placeHolders_DIA_DA_FLUO[""]["name"] = "";
	$fieldLabels_DIA_DA_FLUO[""]["sort"] = "Sort";
	$fieldToolTips_DIA_DA_FLUO[""]["sort"] = "";
	$placeHolders_DIA_DA_FLUO[""]["sort"] = "";
	$fieldLabels_DIA_DA_FLUO[""]["parent"] = "Parent";
	$fieldToolTips_DIA_DA_FLUO[""]["parent"] = "";
	$placeHolders_DIA_DA_FLUO[""]["parent"] = "";
	if (count($fieldToolTips_DIA_DA_FLUO[""]))
		$tdata_DIA_DA_FLUO[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabels_DIA_DA_FLUO["English"] = array();
	$fieldToolTips_DIA_DA_FLUO["English"] = array();
	$placeHolders_DIA_DA_FLUO["English"] = array();
	$pageTitles_DIA_DA_FLUO["English"] = array();
	$fieldLabels_DIA_DA_FLUO["English"]["id"] = "Id";
	$fieldToolTips_DIA_DA_FLUO["English"]["id"] = "";
	$placeHolders_DIA_DA_FLUO["English"]["id"] = "";
	$fieldLabels_DIA_DA_FLUO["English"]["name"] = "Name";
	$fieldToolTips_DIA_DA_FLUO["English"]["name"] = "";
	$placeHolders_DIA_DA_FLUO["English"]["name"] = "";
	$fieldLabels_DIA_DA_FLUO["English"]["sort"] = "Sort";
	$fieldToolTips_DIA_DA_FLUO["English"]["sort"] = "";
	$placeHolders_DIA_DA_FLUO["English"]["sort"] = "";
	$fieldLabels_DIA_DA_FLUO["English"]["parent"] = "Parent";
	$fieldToolTips_DIA_DA_FLUO["English"]["parent"] = "";
	$placeHolders_DIA_DA_FLUO["English"]["parent"] = "";
	if (count($fieldToolTips_DIA_DA_FLUO["English"]))
		$tdata_DIA_DA_FLUO[".isUseToolTips"] = true;
}


	$tdata_DIA_DA_FLUO[".NCSearch"] = true;



$tdata_DIA_DA_FLUO[".shortTableName"] = "_DIA_DA_FLUO";
$tdata_DIA_DA_FLUO[".nSecOptions"] = 0;
$tdata_DIA_DA_FLUO[".recsPerRowPrint"] = 1;
$tdata_DIA_DA_FLUO[".mainTableOwnerID"] = "";
$tdata_DIA_DA_FLUO[".moveNext"] = 1;
$tdata_DIA_DA_FLUO[".entityType"] = 0;

$tdata_DIA_DA_FLUO[".strOriginalTableName"] = "_DIA_DA_FLUO";

	



$tdata_DIA_DA_FLUO[".showAddInPopup"] = false;

$tdata_DIA_DA_FLUO[".showEditInPopup"] = false;

$tdata_DIA_DA_FLUO[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdata_DIA_DA_FLUO[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdata_DIA_DA_FLUO[".fieldsForRegister"] = array();

$tdata_DIA_DA_FLUO[".listAjax"] = false;

	$tdata_DIA_DA_FLUO[".audit"] = false;

	$tdata_DIA_DA_FLUO[".locking"] = false;






$tdata_DIA_DA_FLUO[".reorderRecordsByHeader"] = true;








$tdata_DIA_DA_FLUO[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdata_DIA_DA_FLUO[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdata_DIA_DA_FLUO[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdata_DIA_DA_FLUO[".searchSaving"] = false;
//

$tdata_DIA_DA_FLUO[".showSearchPanel"] = true;
		$tdata_DIA_DA_FLUO[".flexibleSearch"] = true;

$tdata_DIA_DA_FLUO[".isUseAjaxSuggest"] = true;

$tdata_DIA_DA_FLUO[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdata_DIA_DA_FLUO[".ajaxCodeSnippetAdded"] = false;

$tdata_DIA_DA_FLUO[".buttonsAdded"] = false;

$tdata_DIA_DA_FLUO[".addPageEvents"] = false;

// use timepicker for search panel
$tdata_DIA_DA_FLUO[".isUseTimeForSearch"] = false;





$tdata_DIA_DA_FLUO[".allSearchFields"] = array();
$tdata_DIA_DA_FLUO[".filterFields"] = array();
$tdata_DIA_DA_FLUO[".requiredSearchFields"] = array();



$tdata_DIA_DA_FLUO[".googleLikeFields"] = array();
$tdata_DIA_DA_FLUO[".googleLikeFields"][] = "id";
$tdata_DIA_DA_FLUO[".googleLikeFields"][] = "name";
$tdata_DIA_DA_FLUO[".googleLikeFields"][] = "sort";
$tdata_DIA_DA_FLUO[".googleLikeFields"][] = "parent";



$tdata_DIA_DA_FLUO[".tableType"] = "list";

$tdata_DIA_DA_FLUO[".printerPageOrientation"] = 0;
$tdata_DIA_DA_FLUO[".nPrinterPageScale"] = 100;

$tdata_DIA_DA_FLUO[".nPrinterSplitRecords"] = 40;

$tdata_DIA_DA_FLUO[".nPrinterPDFSplitRecords"] = 40;



$tdata_DIA_DA_FLUO[".geocodingEnabled"] = false;





$tdata_DIA_DA_FLUO[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdata_DIA_DA_FLUO[".pageSize"] = 20;

$tdata_DIA_DA_FLUO[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdata_DIA_DA_FLUO[".strOrderBy"] = $tstrOrderBy;

$tdata_DIA_DA_FLUO[".orderindexes"] = array();

$tdata_DIA_DA_FLUO[".sqlHead"] = "SELECT `id`,  	`name`,  	`sort`,  	`parent`";
$tdata_DIA_DA_FLUO[".sqlFrom"] = "FROM `_DIA_DA_FLUO`";
$tdata_DIA_DA_FLUO[".sqlWhereExpr"] = "";
$tdata_DIA_DA_FLUO[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdata_DIA_DA_FLUO[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdata_DIA_DA_FLUO[".arrGroupsPerPage"] = $arrGPP;

$tdata_DIA_DA_FLUO[".highlightSearchResults"] = true;

$tableKeys_DIA_DA_FLUO = array();
$tableKeys_DIA_DA_FLUO[] = "id";
$tdata_DIA_DA_FLUO[".Keys"] = $tableKeys_DIA_DA_FLUO;

$tdata_DIA_DA_FLUO[".listFields"] = array();
$tdata_DIA_DA_FLUO[".listFields"][] = "id";
$tdata_DIA_DA_FLUO[".listFields"][] = "name";
$tdata_DIA_DA_FLUO[".listFields"][] = "sort";
$tdata_DIA_DA_FLUO[".listFields"][] = "parent";

$tdata_DIA_DA_FLUO[".hideMobileList"] = array();


$tdata_DIA_DA_FLUO[".viewFields"] = array();
$tdata_DIA_DA_FLUO[".viewFields"][] = "id";
$tdata_DIA_DA_FLUO[".viewFields"][] = "name";
$tdata_DIA_DA_FLUO[".viewFields"][] = "sort";
$tdata_DIA_DA_FLUO[".viewFields"][] = "parent";

$tdata_DIA_DA_FLUO[".addFields"] = array();
$tdata_DIA_DA_FLUO[".addFields"][] = "name";
$tdata_DIA_DA_FLUO[".addFields"][] = "sort";
$tdata_DIA_DA_FLUO[".addFields"][] = "parent";

$tdata_DIA_DA_FLUO[".masterListFields"] = array();
$tdata_DIA_DA_FLUO[".masterListFields"][] = "id";
$tdata_DIA_DA_FLUO[".masterListFields"][] = "name";
$tdata_DIA_DA_FLUO[".masterListFields"][] = "sort";
$tdata_DIA_DA_FLUO[".masterListFields"][] = "parent";

$tdata_DIA_DA_FLUO[".inlineAddFields"] = array();
$tdata_DIA_DA_FLUO[".inlineAddFields"][] = "name";
$tdata_DIA_DA_FLUO[".inlineAddFields"][] = "sort";
$tdata_DIA_DA_FLUO[".inlineAddFields"][] = "parent";

$tdata_DIA_DA_FLUO[".editFields"] = array();
$tdata_DIA_DA_FLUO[".editFields"][] = "name";
$tdata_DIA_DA_FLUO[".editFields"][] = "sort";
$tdata_DIA_DA_FLUO[".editFields"][] = "parent";

$tdata_DIA_DA_FLUO[".inlineEditFields"] = array();
$tdata_DIA_DA_FLUO[".inlineEditFields"][] = "name";
$tdata_DIA_DA_FLUO[".inlineEditFields"][] = "sort";
$tdata_DIA_DA_FLUO[".inlineEditFields"][] = "parent";

$tdata_DIA_DA_FLUO[".updateSelectedFields"] = array();
$tdata_DIA_DA_FLUO[".updateSelectedFields"][] = "name";
$tdata_DIA_DA_FLUO[".updateSelectedFields"][] = "sort";
$tdata_DIA_DA_FLUO[".updateSelectedFields"][] = "parent";


$tdata_DIA_DA_FLUO[".exportFields"] = array();
$tdata_DIA_DA_FLUO[".exportFields"][] = "id";
$tdata_DIA_DA_FLUO[".exportFields"][] = "name";
$tdata_DIA_DA_FLUO[".exportFields"][] = "sort";
$tdata_DIA_DA_FLUO[".exportFields"][] = "parent";

$tdata_DIA_DA_FLUO[".importFields"] = array();
$tdata_DIA_DA_FLUO[".importFields"][] = "id";
$tdata_DIA_DA_FLUO[".importFields"][] = "name";
$tdata_DIA_DA_FLUO[".importFields"][] = "sort";
$tdata_DIA_DA_FLUO[".importFields"][] = "parent";

$tdata_DIA_DA_FLUO[".printFields"] = array();
$tdata_DIA_DA_FLUO[".printFields"][] = "id";
$tdata_DIA_DA_FLUO[".printFields"][] = "name";
$tdata_DIA_DA_FLUO[".printFields"][] = "sort";
$tdata_DIA_DA_FLUO[".printFields"][] = "parent";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "_DIA_DA_FLUO";
	$fdata["Label"] = GetFieldLabel("_DIA_DA_FLUO","id");
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








	$tdata_DIA_DA_FLUO["id"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "_DIA_DA_FLUO";
	$fdata["Label"] = GetFieldLabel("_DIA_DA_FLUO","name");
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








	$tdata_DIA_DA_FLUO["name"] = $fdata;
//	sort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sort";
	$fdata["GoodName"] = "sort";
	$fdata["ownerTable"] = "_DIA_DA_FLUO";
	$fdata["Label"] = GetFieldLabel("_DIA_DA_FLUO","sort");
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








	$tdata_DIA_DA_FLUO["sort"] = $fdata;
//	parent
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "parent";
	$fdata["GoodName"] = "parent";
	$fdata["ownerTable"] = "_DIA_DA_FLUO";
	$fdata["Label"] = GetFieldLabel("_DIA_DA_FLUO","parent");
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








	$tdata_DIA_DA_FLUO["parent"] = $fdata;


$tables_data["_DIA_DA_FLUO"]=&$tdata_DIA_DA_FLUO;
$field_labels["_DIA_DA_FLUO"] = &$fieldLabels_DIA_DA_FLUO;
$fieldToolTips["_DIA_DA_FLUO"] = &$fieldToolTips_DIA_DA_FLUO;
$placeHolders["_DIA_DA_FLUO"] = &$placeHolders_DIA_DA_FLUO;
$page_titles["_DIA_DA_FLUO"] = &$pageTitles_DIA_DA_FLUO;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["_DIA_DA_FLUO"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["_DIA_DA_FLUO"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery__DIA_DA_FLUO()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  	`name`,  	`sort`,  	`parent`";
$proto0["m_strFrom"] = "FROM `_DIA_DA_FLUO`";
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
	"m_strTable" => "_DIA_DA_FLUO",
	"m_srcTableName" => "_DIA_DA_FLUO"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "_DIA_DA_FLUO";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "_DIA_DA_FLUO",
	"m_srcTableName" => "_DIA_DA_FLUO"
));

$proto8["m_sql"] = "`name`";
$proto8["m_srcTableName"] = "_DIA_DA_FLUO";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "sort",
	"m_strTable" => "_DIA_DA_FLUO",
	"m_srcTableName" => "_DIA_DA_FLUO"
));

$proto10["m_sql"] = "`sort`";
$proto10["m_srcTableName"] = "_DIA_DA_FLUO";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "parent",
	"m_strTable" => "_DIA_DA_FLUO",
	"m_srcTableName" => "_DIA_DA_FLUO"
));

$proto12["m_sql"] = "`parent`";
$proto12["m_srcTableName"] = "_DIA_DA_FLUO";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "_DIA_DA_FLUO";
$proto15["m_srcTableName"] = "_DIA_DA_FLUO";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "id";
$proto15["m_columns"][] = "name";
$proto15["m_columns"][] = "sort";
$proto15["m_columns"][] = "parent";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "`_DIA_DA_FLUO`";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "_DIA_DA_FLUO";
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
$proto0["m_srcTableName"]="_DIA_DA_FLUO";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData__DIA_DA_FLUO = createSqlQuery__DIA_DA_FLUO();


	
		;

				

$tdata_DIA_DA_FLUO[".sqlquery"] = $queryData__DIA_DA_FLUO;

$tableEvents["_DIA_DA_FLUO"] = new eventsBase;
$tdata_DIA_DA_FLUO[".hasEvents"] = false;

?>