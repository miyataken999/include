<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamst_hall_mark11 = array();
	$tdatamst_hall_mark11[".truncateText"] = true;
	$tdatamst_hall_mark11[".NumberOfChars"] = 80;
	$tdatamst_hall_mark11[".ShortName"] = "mst_hall_mark11";
	$tdatamst_hall_mark11[".OwnerID"] = "";
	$tdatamst_hall_mark11[".OriginalTable"] = "mst_hall_mark";

//	field labels
$fieldLabelsmst_hall_mark11 = array();
$fieldToolTipsmst_hall_mark11 = array();
$pageTitlesmst_hall_mark11 = array();
$placeHoldersmst_hall_mark11 = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmst_hall_mark11["Japanese"] = array();
	$fieldToolTipsmst_hall_mark11["Japanese"] = array();
	$placeHoldersmst_hall_mark11["Japanese"] = array();
	$pageTitlesmst_hall_mark11["Japanese"] = array();
	$fieldLabelsmst_hall_mark11["Japanese"]["name"] = "Name";
	$fieldToolTipsmst_hall_mark11["Japanese"]["name"] = "";
	$placeHoldersmst_hall_mark11["Japanese"]["name"] = "";
	$fieldLabelsmst_hall_mark11["Japanese"]["country_of_origin"] = "Country Of Origin";
	$fieldToolTipsmst_hall_mark11["Japanese"]["country_of_origin"] = "";
	$placeHoldersmst_hall_mark11["Japanese"]["country_of_origin"] = "";
	$fieldLabelsmst_hall_mark11["Japanese"]["country_group"] = "Country Group";
	$fieldToolTipsmst_hall_mark11["Japanese"]["country_group"] = "";
	$placeHoldersmst_hall_mark11["Japanese"]["country_group"] = "";
	$fieldLabelsmst_hall_mark11["Japanese"]["id"] = "Id";
	$fieldToolTipsmst_hall_mark11["Japanese"]["id"] = "";
	$placeHoldersmst_hall_mark11["Japanese"]["id"] = "";
	if (count($fieldToolTipsmst_hall_mark11["Japanese"]))
		$tdatamst_hall_mark11[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmst_hall_mark11[""] = array();
	$fieldToolTipsmst_hall_mark11[""] = array();
	$placeHoldersmst_hall_mark11[""] = array();
	$pageTitlesmst_hall_mark11[""] = array();
	if (count($fieldToolTipsmst_hall_mark11[""]))
		$tdatamst_hall_mark11[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmst_hall_mark11["English"] = array();
	$fieldToolTipsmst_hall_mark11["English"] = array();
	$placeHoldersmst_hall_mark11["English"] = array();
	$pageTitlesmst_hall_mark11["English"] = array();
	if (count($fieldToolTipsmst_hall_mark11["English"]))
		$tdatamst_hall_mark11[".isUseToolTips"] = true;
}


	$tdatamst_hall_mark11[".NCSearch"] = true;



$tdatamst_hall_mark11[".shortTableName"] = "mst_hall_mark11";
$tdatamst_hall_mark11[".nSecOptions"] = 0;
$tdatamst_hall_mark11[".recsPerRowPrint"] = 1;
$tdatamst_hall_mark11[".mainTableOwnerID"] = "";
$tdatamst_hall_mark11[".moveNext"] = 1;
$tdatamst_hall_mark11[".entityType"] = 1;

$tdatamst_hall_mark11[".strOriginalTableName"] = "mst_hall_mark";

	



$tdatamst_hall_mark11[".showAddInPopup"] = false;

$tdatamst_hall_mark11[".showEditInPopup"] = false;

$tdatamst_hall_mark11[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamst_hall_mark11[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamst_hall_mark11[".fieldsForRegister"] = array();

$tdatamst_hall_mark11[".listAjax"] = false;

	$tdatamst_hall_mark11[".audit"] = true;

	$tdatamst_hall_mark11[".locking"] = false;



$tdatamst_hall_mark11[".list"] = true;



$tdatamst_hall_mark11[".reorderRecordsByHeader"] = true;



$tdatamst_hall_mark11[".inlineAdd"] = true;

$tdatamst_hall_mark11[".import"] = true;

$tdatamst_hall_mark11[".exportTo"] = true;



$tdatamst_hall_mark11[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamst_hall_mark11[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamst_hall_mark11[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamst_hall_mark11[".searchSaving"] = false;
//

$tdatamst_hall_mark11[".showSearchPanel"] = true;
		$tdatamst_hall_mark11[".flexibleSearch"] = true;

$tdatamst_hall_mark11[".isUseAjaxSuggest"] = true;

$tdatamst_hall_mark11[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatamst_hall_mark11[".ajaxCodeSnippetAdded"] = false;

$tdatamst_hall_mark11[".buttonsAdded"] = false;

$tdatamst_hall_mark11[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamst_hall_mark11[".isUseTimeForSearch"] = false;





$tdatamst_hall_mark11[".allSearchFields"] = array();
$tdatamst_hall_mark11[".filterFields"] = array();
$tdatamst_hall_mark11[".requiredSearchFields"] = array();

$tdatamst_hall_mark11[".allSearchFields"][] = "name";
	$tdatamst_hall_mark11[".allSearchFields"][] = "country_of_origin";
	$tdatamst_hall_mark11[".allSearchFields"][] = "country_group";
	$tdatamst_hall_mark11[".allSearchFields"][] = "id";
	

$tdatamst_hall_mark11[".googleLikeFields"] = array();
$tdatamst_hall_mark11[".googleLikeFields"][] = "name";
$tdatamst_hall_mark11[".googleLikeFields"][] = "country_of_origin";
$tdatamst_hall_mark11[".googleLikeFields"][] = "country_group";
$tdatamst_hall_mark11[".googleLikeFields"][] = "id";


$tdatamst_hall_mark11[".advSearchFields"] = array();
$tdatamst_hall_mark11[".advSearchFields"][] = "name";
$tdatamst_hall_mark11[".advSearchFields"][] = "country_of_origin";
$tdatamst_hall_mark11[".advSearchFields"][] = "country_group";
$tdatamst_hall_mark11[".advSearchFields"][] = "id";

$tdatamst_hall_mark11[".tableType"] = "list";

$tdatamst_hall_mark11[".printerPageOrientation"] = 0;
$tdatamst_hall_mark11[".nPrinterPageScale"] = 100;

$tdatamst_hall_mark11[".nPrinterSplitRecords"] = 40;

$tdatamst_hall_mark11[".nPrinterPDFSplitRecords"] = 40;



$tdatamst_hall_mark11[".geocodingEnabled"] = false;





$tdatamst_hall_mark11[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamst_hall_mark11[".pageSize"] = 100;

$tdatamst_hall_mark11[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamst_hall_mark11[".strOrderBy"] = $tstrOrderBy;

$tdatamst_hall_mark11[".orderindexes"] = array();

$tdatamst_hall_mark11[".sqlHead"] = "SELECT mst_hall_mark.name,  mst_hall_mark.country_of_origin,  mst_country_of_origin.country_group,  mst_country_of_origin.id";
$tdatamst_hall_mark11[".sqlFrom"] = "FROM mst_hall_mark  INNER JOIN mst_country_of_origin ON mst_hall_mark.country_of_origin = mst_country_of_origin.country_group";
$tdatamst_hall_mark11[".sqlWhereExpr"] = "";
$tdatamst_hall_mark11[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamst_hall_mark11[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamst_hall_mark11[".arrGroupsPerPage"] = $arrGPP;

$tdatamst_hall_mark11[".highlightSearchResults"] = true;

$tableKeysmst_hall_mark11 = array();
$tdatamst_hall_mark11[".Keys"] = $tableKeysmst_hall_mark11;

$tdatamst_hall_mark11[".listFields"] = array();
$tdatamst_hall_mark11[".listFields"][] = "country_of_origin";
$tdatamst_hall_mark11[".listFields"][] = "country_group";
$tdatamst_hall_mark11[".listFields"][] = "id";
$tdatamst_hall_mark11[".listFields"][] = "name";

$tdatamst_hall_mark11[".hideMobileList"] = array();


$tdatamst_hall_mark11[".viewFields"] = array();
$tdatamst_hall_mark11[".viewFields"][] = "country_of_origin";
$tdatamst_hall_mark11[".viewFields"][] = "country_group";
$tdatamst_hall_mark11[".viewFields"][] = "id";

$tdatamst_hall_mark11[".addFields"] = array();
$tdatamst_hall_mark11[".addFields"][] = "country_of_origin";

$tdatamst_hall_mark11[".masterListFields"] = array();
$tdatamst_hall_mark11[".masterListFields"][] = "name";
$tdatamst_hall_mark11[".masterListFields"][] = "country_of_origin";
$tdatamst_hall_mark11[".masterListFields"][] = "country_group";
$tdatamst_hall_mark11[".masterListFields"][] = "id";

$tdatamst_hall_mark11[".inlineAddFields"] = array();
$tdatamst_hall_mark11[".inlineAddFields"][] = "country_of_origin";
$tdatamst_hall_mark11[".inlineAddFields"][] = "name";

$tdatamst_hall_mark11[".editFields"] = array();
$tdatamst_hall_mark11[".editFields"][] = "country_of_origin";

$tdatamst_hall_mark11[".inlineEditFields"] = array();
$tdatamst_hall_mark11[".inlineEditFields"][] = "country_of_origin";
$tdatamst_hall_mark11[".inlineEditFields"][] = "name";

$tdatamst_hall_mark11[".updateSelectedFields"] = array();
$tdatamst_hall_mark11[".updateSelectedFields"][] = "country_of_origin";


$tdatamst_hall_mark11[".exportFields"] = array();
$tdatamst_hall_mark11[".exportFields"][] = "name";
$tdatamst_hall_mark11[".exportFields"][] = "country_of_origin";
$tdatamst_hall_mark11[".exportFields"][] = "country_group";
$tdatamst_hall_mark11[".exportFields"][] = "id";

$tdatamst_hall_mark11[".importFields"] = array();
$tdatamst_hall_mark11[".importFields"][] = "name";
$tdatamst_hall_mark11[".importFields"][] = "country_of_origin";
$tdatamst_hall_mark11[".importFields"][] = "country_group";
$tdatamst_hall_mark11[".importFields"][] = "id";

$tdatamst_hall_mark11[".printFields"] = array();
$tdatamst_hall_mark11[".printFields"][] = "country_of_origin";
$tdatamst_hall_mark11[".printFields"][] = "country_group";
$tdatamst_hall_mark11[".printFields"][] = "id";

//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "mst_hall_mark";
	$fdata["Label"] = GetFieldLabel("mst_hall_mark11","name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mst_hall_mark.name";

	
	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatamst_hall_mark11["name"] = $fdata;
//	country_of_origin
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "country_of_origin";
	$fdata["GoodName"] = "country_of_origin";
	$fdata["ownerTable"] = "mst_hall_mark";
	$fdata["Label"] = GetFieldLabel("mst_hall_mark11","country_of_origin");
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

		$fdata["strField"] = "country_of_origin";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mst_hall_mark.country_of_origin";

	
	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatamst_hall_mark11["country_of_origin"] = $fdata;
//	country_group
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "country_group";
	$fdata["GoodName"] = "country_group";
	$fdata["ownerTable"] = "mst_country_of_origin";
	$fdata["Label"] = GetFieldLabel("mst_hall_mark11","country_group");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "country_group";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mst_country_of_origin.country_group";

	
	
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
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatamst_hall_mark11["country_group"] = $fdata;
//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "mst_country_of_origin";
	$fdata["Label"] = GetFieldLabel("mst_hall_mark11","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mst_country_of_origin.id";

	
	
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




	$tdatamst_hall_mark11["id"] = $fdata;


$tables_data["mst_hall_mark11"]=&$tdatamst_hall_mark11;
$field_labels["mst_hall_mark11"] = &$fieldLabelsmst_hall_mark11;
$fieldToolTips["mst_hall_mark11"] = &$fieldToolTipsmst_hall_mark11;
$placeHolders["mst_hall_mark11"] = &$placeHoldersmst_hall_mark11;
$page_titles["mst_hall_mark11"] = &$pageTitlesmst_hall_mark11;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mst_hall_mark11"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mst_hall_mark11"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mst_hall_mark11()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "mst_hall_mark.name,  mst_hall_mark.country_of_origin,  mst_country_of_origin.country_group,  mst_country_of_origin.id";
$proto0["m_strFrom"] = "FROM mst_hall_mark  INNER JOIN mst_country_of_origin ON mst_hall_mark.country_of_origin = mst_country_of_origin.country_group";
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
	"m_strName" => "name",
	"m_strTable" => "mst_hall_mark",
	"m_srcTableName" => "mst_hall_mark11"
));

$proto6["m_sql"] = "mst_hall_mark.name";
$proto6["m_srcTableName"] = "mst_hall_mark11";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "country_of_origin",
	"m_strTable" => "mst_hall_mark",
	"m_srcTableName" => "mst_hall_mark11"
));

$proto8["m_sql"] = "mst_hall_mark.country_of_origin";
$proto8["m_srcTableName"] = "mst_hall_mark11";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "country_group",
	"m_strTable" => "mst_country_of_origin",
	"m_srcTableName" => "mst_hall_mark11"
));

$proto10["m_sql"] = "mst_country_of_origin.country_group";
$proto10["m_srcTableName"] = "mst_hall_mark11";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "mst_country_of_origin",
	"m_srcTableName" => "mst_hall_mark11"
));

$proto12["m_sql"] = "mst_country_of_origin.id";
$proto12["m_srcTableName"] = "mst_hall_mark11";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "mst_hall_mark";
$proto15["m_srcTableName"] = "mst_hall_mark11";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "id";
$proto15["m_columns"][] = "country_of_origin";
$proto15["m_columns"][] = "name";
$proto15["m_columns"][] = "sort";
$proto15["m_columns"][] = "update_at";
$proto15["m_columns"][] = "update_by";
$proto15["m_columns"][] = "create_at";
$proto15["m_columns"][] = "create_by";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "mst_hall_mark";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "mst_hall_mark11";
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
												$proto18=array();
$proto18["m_link"] = "SQLL_INNERJOIN";
			$proto19=array();
$proto19["m_strName"] = "mst_country_of_origin";
$proto19["m_srcTableName"] = "mst_hall_mark11";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "id";
$proto19["m_columns"][] = "name";
$proto19["m_columns"][] = "sort";
$proto19["m_columns"][] = "line";
$proto19["m_columns"][] = "yahoo_junle";
$proto19["m_columns"][] = "category_id";
$proto19["m_columns"][] = "sub_category_id1";
$proto19["m_columns"][] = "updated_at";
$proto19["m_columns"][] = "updated_by";
$proto19["m_columns"][] = "created_at";
$proto19["m_columns"][] = "created_by";
$proto19["m_columns"][] = "english_name";
$proto19["m_columns"][] = "country_group";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "INNER JOIN mst_country_of_origin ON mst_hall_mark.country_of_origin = mst_country_of_origin.country_group";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "mst_hall_mark11";
$proto20=array();
$proto20["m_sql"] = "mst_hall_mark.country_of_origin = mst_country_of_origin.country_group";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "country_of_origin",
	"m_strTable" => "mst_hall_mark",
	"m_srcTableName" => "mst_hall_mark11"
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "= mst_country_of_origin.country_group";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="mst_hall_mark11";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mst_hall_mark11 = createSqlQuery_mst_hall_mark11();


	
		;

				

$tdatamst_hall_mark11[".sqlquery"] = $queryData_mst_hall_mark11;

include_once(getabspath("include/mst_hall_mark11_events.php"));
$tableEvents["mst_hall_mark11"] = new eventclass_mst_hall_mark11;
$tdatamst_hall_mark11[".hasEvents"] = true;

?>