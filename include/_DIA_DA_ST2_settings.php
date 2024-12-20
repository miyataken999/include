<?php
require_once(getabspath("classes/cipherer.php"));




$tdata_DIA_DA_ST2 = array();
	$tdata_DIA_DA_ST2[".truncateText"] = true;
	$tdata_DIA_DA_ST2[".NumberOfChars"] = 80;
	$tdata_DIA_DA_ST2[".ShortName"] = "_DIA_DA_ST2";
	$tdata_DIA_DA_ST2[".OwnerID"] = "";
	$tdata_DIA_DA_ST2[".OriginalTable"] = "_DIA_DA_ST2";

//	field labels
$fieldLabels_DIA_DA_ST2 = array();
$fieldToolTips_DIA_DA_ST2 = array();
$pageTitles_DIA_DA_ST2 = array();
$placeHolders_DIA_DA_ST2 = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabels_DIA_DA_ST2["Japanese"] = array();
	$fieldToolTips_DIA_DA_ST2["Japanese"] = array();
	$placeHolders_DIA_DA_ST2["Japanese"] = array();
	$pageTitles_DIA_DA_ST2["Japanese"] = array();
	$fieldLabels_DIA_DA_ST2["Japanese"]["id"] = "Id";
	$fieldToolTips_DIA_DA_ST2["Japanese"]["id"] = "";
	$placeHolders_DIA_DA_ST2["Japanese"]["id"] = "";
	$fieldLabels_DIA_DA_ST2["Japanese"]["name"] = "Name";
	$fieldToolTips_DIA_DA_ST2["Japanese"]["name"] = "";
	$placeHolders_DIA_DA_ST2["Japanese"]["name"] = "";
	$fieldLabels_DIA_DA_ST2["Japanese"]["sort"] = "Sort";
	$fieldToolTips_DIA_DA_ST2["Japanese"]["sort"] = "";
	$placeHolders_DIA_DA_ST2["Japanese"]["sort"] = "";
	$fieldLabels_DIA_DA_ST2["Japanese"]["parent"] = "Parent";
	$fieldToolTips_DIA_DA_ST2["Japanese"]["parent"] = "";
	$placeHolders_DIA_DA_ST2["Japanese"]["parent"] = "";
	if (count($fieldToolTips_DIA_DA_ST2["Japanese"]))
		$tdata_DIA_DA_ST2[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabels_DIA_DA_ST2[""] = array();
	$fieldToolTips_DIA_DA_ST2[""] = array();
	$placeHolders_DIA_DA_ST2[""] = array();
	$pageTitles_DIA_DA_ST2[""] = array();
	$fieldLabels_DIA_DA_ST2[""]["id"] = "Id";
	$fieldToolTips_DIA_DA_ST2[""]["id"] = "";
	$placeHolders_DIA_DA_ST2[""]["id"] = "";
	$fieldLabels_DIA_DA_ST2[""]["name"] = "Name";
	$fieldToolTips_DIA_DA_ST2[""]["name"] = "";
	$placeHolders_DIA_DA_ST2[""]["name"] = "";
	$fieldLabels_DIA_DA_ST2[""]["sort"] = "Sort";
	$fieldToolTips_DIA_DA_ST2[""]["sort"] = "";
	$placeHolders_DIA_DA_ST2[""]["sort"] = "";
	$fieldLabels_DIA_DA_ST2[""]["parent"] = "Parent";
	$fieldToolTips_DIA_DA_ST2[""]["parent"] = "";
	$placeHolders_DIA_DA_ST2[""]["parent"] = "";
	if (count($fieldToolTips_DIA_DA_ST2[""]))
		$tdata_DIA_DA_ST2[".isUseToolTips"] = true;
}


	$tdata_DIA_DA_ST2[".NCSearch"] = true;



$tdata_DIA_DA_ST2[".shortTableName"] = "_DIA_DA_ST2";
$tdata_DIA_DA_ST2[".nSecOptions"] = 0;
$tdata_DIA_DA_ST2[".recsPerRowPrint"] = 1;
$tdata_DIA_DA_ST2[".mainTableOwnerID"] = "";
$tdata_DIA_DA_ST2[".moveNext"] = 1;
$tdata_DIA_DA_ST2[".entityType"] = 0;

$tdata_DIA_DA_ST2[".strOriginalTableName"] = "_DIA_DA_ST2";

	



$tdata_DIA_DA_ST2[".showAddInPopup"] = false;

$tdata_DIA_DA_ST2[".showEditInPopup"] = false;

$tdata_DIA_DA_ST2[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdata_DIA_DA_ST2[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdata_DIA_DA_ST2[".fieldsForRegister"] = array();

$tdata_DIA_DA_ST2[".listAjax"] = false;

	$tdata_DIA_DA_ST2[".audit"] = false;

	$tdata_DIA_DA_ST2[".locking"] = false;






$tdata_DIA_DA_ST2[".reorderRecordsByHeader"] = true;








$tdata_DIA_DA_ST2[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdata_DIA_DA_ST2[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdata_DIA_DA_ST2[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdata_DIA_DA_ST2[".searchSaving"] = false;
//

$tdata_DIA_DA_ST2[".showSearchPanel"] = true;
		$tdata_DIA_DA_ST2[".flexibleSearch"] = true;

$tdata_DIA_DA_ST2[".isUseAjaxSuggest"] = true;

$tdata_DIA_DA_ST2[".rowHighlite"] = true;





$tdata_DIA_DA_ST2[".ajaxCodeSnippetAdded"] = false;

$tdata_DIA_DA_ST2[".buttonsAdded"] = false;

$tdata_DIA_DA_ST2[".addPageEvents"] = false;

// use timepicker for search panel
$tdata_DIA_DA_ST2[".isUseTimeForSearch"] = false;



$tdata_DIA_DA_ST2[".badgeColor"] = "E67349";


$tdata_DIA_DA_ST2[".allSearchFields"] = array();
$tdata_DIA_DA_ST2[".filterFields"] = array();
$tdata_DIA_DA_ST2[".requiredSearchFields"] = array();



$tdata_DIA_DA_ST2[".googleLikeFields"] = array();
$tdata_DIA_DA_ST2[".googleLikeFields"][] = "id";
$tdata_DIA_DA_ST2[".googleLikeFields"][] = "name";
$tdata_DIA_DA_ST2[".googleLikeFields"][] = "sort";
$tdata_DIA_DA_ST2[".googleLikeFields"][] = "parent";



$tdata_DIA_DA_ST2[".tableType"] = "list";

$tdata_DIA_DA_ST2[".printerPageOrientation"] = 0;
$tdata_DIA_DA_ST2[".nPrinterPageScale"] = 100;

$tdata_DIA_DA_ST2[".nPrinterSplitRecords"] = 40;

$tdata_DIA_DA_ST2[".nPrinterPDFSplitRecords"] = 40;



$tdata_DIA_DA_ST2[".geocodingEnabled"] = false;





$tdata_DIA_DA_ST2[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdata_DIA_DA_ST2[".pageSize"] = 20;

$tdata_DIA_DA_ST2[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdata_DIA_DA_ST2[".strOrderBy"] = $tstrOrderBy;

$tdata_DIA_DA_ST2[".orderindexes"] = array();

$tdata_DIA_DA_ST2[".sqlHead"] = "SELECT id,  	name,  	sort,  	parent";
$tdata_DIA_DA_ST2[".sqlFrom"] = "FROM `_DIA_DA_ST2`";
$tdata_DIA_DA_ST2[".sqlWhereExpr"] = "";
$tdata_DIA_DA_ST2[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdata_DIA_DA_ST2[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdata_DIA_DA_ST2[".arrGroupsPerPage"] = $arrGPP;

$tdata_DIA_DA_ST2[".highlightSearchResults"] = true;

$tableKeys_DIA_DA_ST2 = array();
$tableKeys_DIA_DA_ST2[] = "id";
$tdata_DIA_DA_ST2[".Keys"] = $tableKeys_DIA_DA_ST2;

$tdata_DIA_DA_ST2[".listFields"] = array();
$tdata_DIA_DA_ST2[".listFields"][] = "id";
$tdata_DIA_DA_ST2[".listFields"][] = "name";
$tdata_DIA_DA_ST2[".listFields"][] = "sort";
$tdata_DIA_DA_ST2[".listFields"][] = "parent";

$tdata_DIA_DA_ST2[".hideMobileList"] = array();


$tdata_DIA_DA_ST2[".viewFields"] = array();
$tdata_DIA_DA_ST2[".viewFields"][] = "id";
$tdata_DIA_DA_ST2[".viewFields"][] = "name";
$tdata_DIA_DA_ST2[".viewFields"][] = "sort";
$tdata_DIA_DA_ST2[".viewFields"][] = "parent";

$tdata_DIA_DA_ST2[".addFields"] = array();
$tdata_DIA_DA_ST2[".addFields"][] = "name";
$tdata_DIA_DA_ST2[".addFields"][] = "sort";
$tdata_DIA_DA_ST2[".addFields"][] = "parent";

$tdata_DIA_DA_ST2[".masterListFields"] = array();
$tdata_DIA_DA_ST2[".masterListFields"][] = "id";
$tdata_DIA_DA_ST2[".masterListFields"][] = "name";
$tdata_DIA_DA_ST2[".masterListFields"][] = "sort";
$tdata_DIA_DA_ST2[".masterListFields"][] = "parent";

$tdata_DIA_DA_ST2[".inlineAddFields"] = array();
$tdata_DIA_DA_ST2[".inlineAddFields"][] = "name";
$tdata_DIA_DA_ST2[".inlineAddFields"][] = "sort";
$tdata_DIA_DA_ST2[".inlineAddFields"][] = "parent";

$tdata_DIA_DA_ST2[".editFields"] = array();
$tdata_DIA_DA_ST2[".editFields"][] = "name";
$tdata_DIA_DA_ST2[".editFields"][] = "sort";
$tdata_DIA_DA_ST2[".editFields"][] = "parent";

$tdata_DIA_DA_ST2[".inlineEditFields"] = array();
$tdata_DIA_DA_ST2[".inlineEditFields"][] = "name";
$tdata_DIA_DA_ST2[".inlineEditFields"][] = "sort";
$tdata_DIA_DA_ST2[".inlineEditFields"][] = "parent";

$tdata_DIA_DA_ST2[".updateSelectedFields"] = array();
$tdata_DIA_DA_ST2[".updateSelectedFields"][] = "name";
$tdata_DIA_DA_ST2[".updateSelectedFields"][] = "sort";
$tdata_DIA_DA_ST2[".updateSelectedFields"][] = "parent";


$tdata_DIA_DA_ST2[".exportFields"] = array();
$tdata_DIA_DA_ST2[".exportFields"][] = "id";
$tdata_DIA_DA_ST2[".exportFields"][] = "name";
$tdata_DIA_DA_ST2[".exportFields"][] = "sort";
$tdata_DIA_DA_ST2[".exportFields"][] = "parent";

$tdata_DIA_DA_ST2[".importFields"] = array();
$tdata_DIA_DA_ST2[".importFields"][] = "id";
$tdata_DIA_DA_ST2[".importFields"][] = "name";
$tdata_DIA_DA_ST2[".importFields"][] = "sort";
$tdata_DIA_DA_ST2[".importFields"][] = "parent";

$tdata_DIA_DA_ST2[".printFields"] = array();
$tdata_DIA_DA_ST2[".printFields"][] = "id";
$tdata_DIA_DA_ST2[".printFields"][] = "name";
$tdata_DIA_DA_ST2[".printFields"][] = "sort";
$tdata_DIA_DA_ST2[".printFields"][] = "parent";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "_DIA_DA_ST2";
	$fdata["Label"] = GetFieldLabel("_DIA_DA_ST2","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
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








	$tdata_DIA_DA_ST2["id"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "_DIA_DA_ST2";
	$fdata["Label"] = GetFieldLabel("_DIA_DA_ST2","name");
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
	$fdata["FullName"] = "name";

	
	
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








	$tdata_DIA_DA_ST2["name"] = $fdata;
//	sort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sort";
	$fdata["GoodName"] = "sort";
	$fdata["ownerTable"] = "_DIA_DA_ST2";
	$fdata["Label"] = GetFieldLabel("_DIA_DA_ST2","sort");
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
	$fdata["FullName"] = "sort";

	
	
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








	$tdata_DIA_DA_ST2["sort"] = $fdata;
//	parent
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "parent";
	$fdata["GoodName"] = "parent";
	$fdata["ownerTable"] = "_DIA_DA_ST2";
	$fdata["Label"] = GetFieldLabel("_DIA_DA_ST2","parent");
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
	$fdata["FullName"] = "parent";

	
	
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








	$tdata_DIA_DA_ST2["parent"] = $fdata;


$tables_data["_DIA_DA_ST2"]=&$tdata_DIA_DA_ST2;
$field_labels["_DIA_DA_ST2"] = &$fieldLabels_DIA_DA_ST2;
$fieldToolTips["_DIA_DA_ST2"] = &$fieldToolTips_DIA_DA_ST2;
$placeHolders["_DIA_DA_ST2"] = &$placeHolders_DIA_DA_ST2;
$page_titles["_DIA_DA_ST2"] = &$pageTitles_DIA_DA_ST2;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["_DIA_DA_ST2"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["_DIA_DA_ST2"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery__DIA_DA_ST2()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	name,  	sort,  	parent";
$proto0["m_strFrom"] = "FROM `_DIA_DA_ST2`";
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
	"m_strTable" => "_DIA_DA_ST2",
	"m_srcTableName" => "_DIA_DA_ST2"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "_DIA_DA_ST2";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "_DIA_DA_ST2",
	"m_srcTableName" => "_DIA_DA_ST2"
));

$proto8["m_sql"] = "name";
$proto8["m_srcTableName"] = "_DIA_DA_ST2";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "sort",
	"m_strTable" => "_DIA_DA_ST2",
	"m_srcTableName" => "_DIA_DA_ST2"
));

$proto10["m_sql"] = "sort";
$proto10["m_srcTableName"] = "_DIA_DA_ST2";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "parent",
	"m_strTable" => "_DIA_DA_ST2",
	"m_srcTableName" => "_DIA_DA_ST2"
));

$proto12["m_sql"] = "parent";
$proto12["m_srcTableName"] = "_DIA_DA_ST2";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "_DIA_DA_ST2";
$proto15["m_srcTableName"] = "_DIA_DA_ST2";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "id";
$proto15["m_columns"][] = "name";
$proto15["m_columns"][] = "sort";
$proto15["m_columns"][] = "parent";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "`_DIA_DA_ST2`";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "_DIA_DA_ST2";
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
$proto0["m_srcTableName"]="_DIA_DA_ST2";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData__DIA_DA_ST2 = createSqlQuery__DIA_DA_ST2();


	
		;

				

$tdata_DIA_DA_ST2[".sqlquery"] = $queryData__DIA_DA_ST2;

$tableEvents["_DIA_DA_ST2"] = new eventsBase;
$tdata_DIA_DA_ST2[".hasEvents"] = false;

?>