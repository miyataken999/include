<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamst_price_zone = array();
	$tdatamst_price_zone[".truncateText"] = true;
	$tdatamst_price_zone[".NumberOfChars"] = 80;
	$tdatamst_price_zone[".ShortName"] = "mst_price_zone";
	$tdatamst_price_zone[".OwnerID"] = "";
	$tdatamst_price_zone[".OriginalTable"] = "mst_price_zone";

//	field labels
$fieldLabelsmst_price_zone = array();
$fieldToolTipsmst_price_zone = array();
$pageTitlesmst_price_zone = array();
$placeHoldersmst_price_zone = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmst_price_zone["Japanese"] = array();
	$fieldToolTipsmst_price_zone["Japanese"] = array();
	$placeHoldersmst_price_zone["Japanese"] = array();
	$pageTitlesmst_price_zone["Japanese"] = array();
	$fieldLabelsmst_price_zone["Japanese"]["id"] = "Id";
	$fieldToolTipsmst_price_zone["Japanese"]["id"] = "";
	$placeHoldersmst_price_zone["Japanese"]["id"] = "";
	$fieldLabelsmst_price_zone["Japanese"]["output_price"] = "販売価格";
	$fieldToolTipsmst_price_zone["Japanese"]["output_price"] = "";
	$placeHoldersmst_price_zone["Japanese"]["output_price"] = "";
	$fieldLabelsmst_price_zone["Japanese"]["minimum_price"] = "下限金額";
	$fieldToolTipsmst_price_zone["Japanese"]["minimum_price"] = "";
	$placeHoldersmst_price_zone["Japanese"]["minimum_price"] = "";
	$fieldLabelsmst_price_zone["Japanese"]["updated_at"] = "更新日";
	$fieldToolTipsmst_price_zone["Japanese"]["updated_at"] = "";
	$placeHoldersmst_price_zone["Japanese"]["updated_at"] = "";
	if (count($fieldToolTipsmst_price_zone["Japanese"]))
		$tdatamst_price_zone[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmst_price_zone[""] = array();
	$fieldToolTipsmst_price_zone[""] = array();
	$placeHoldersmst_price_zone[""] = array();
	$pageTitlesmst_price_zone[""] = array();
	$fieldLabelsmst_price_zone[""]["id"] = "Id";
	$fieldToolTipsmst_price_zone[""]["id"] = "";
	$placeHoldersmst_price_zone[""]["id"] = "";
	$fieldLabelsmst_price_zone[""]["output_price"] = "Output Price";
	$fieldToolTipsmst_price_zone[""]["output_price"] = "";
	$placeHoldersmst_price_zone[""]["output_price"] = "";
	$fieldLabelsmst_price_zone[""]["minimum_price"] = "Minimum Price";
	$fieldToolTipsmst_price_zone[""]["minimum_price"] = "";
	$placeHoldersmst_price_zone[""]["minimum_price"] = "";
	$fieldLabelsmst_price_zone[""]["updated_at"] = "Updated At";
	$fieldToolTipsmst_price_zone[""]["updated_at"] = "";
	$placeHoldersmst_price_zone[""]["updated_at"] = "";
	if (count($fieldToolTipsmst_price_zone[""]))
		$tdatamst_price_zone[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmst_price_zone["English"] = array();
	$fieldToolTipsmst_price_zone["English"] = array();
	$placeHoldersmst_price_zone["English"] = array();
	$pageTitlesmst_price_zone["English"] = array();
	$fieldLabelsmst_price_zone["English"]["id"] = "Id";
	$fieldToolTipsmst_price_zone["English"]["id"] = "";
	$placeHoldersmst_price_zone["English"]["id"] = "";
	$fieldLabelsmst_price_zone["English"]["output_price"] = "Output Price";
	$fieldToolTipsmst_price_zone["English"]["output_price"] = "";
	$placeHoldersmst_price_zone["English"]["output_price"] = "";
	$fieldLabelsmst_price_zone["English"]["minimum_price"] = "Minimum Price";
	$fieldToolTipsmst_price_zone["English"]["minimum_price"] = "";
	$placeHoldersmst_price_zone["English"]["minimum_price"] = "";
	$fieldLabelsmst_price_zone["English"]["updated_at"] = "Updated At";
	$fieldToolTipsmst_price_zone["English"]["updated_at"] = "";
	$placeHoldersmst_price_zone["English"]["updated_at"] = "";
	if (count($fieldToolTipsmst_price_zone["English"]))
		$tdatamst_price_zone[".isUseToolTips"] = true;
}


	$tdatamst_price_zone[".NCSearch"] = true;



$tdatamst_price_zone[".shortTableName"] = "mst_price_zone";
$tdatamst_price_zone[".nSecOptions"] = 0;
$tdatamst_price_zone[".recsPerRowPrint"] = 1;
$tdatamst_price_zone[".mainTableOwnerID"] = "";
$tdatamst_price_zone[".moveNext"] = 1;
$tdatamst_price_zone[".entityType"] = 0;

$tdatamst_price_zone[".strOriginalTableName"] = "mst_price_zone";

	



$tdatamst_price_zone[".showAddInPopup"] = false;

$tdatamst_price_zone[".showEditInPopup"] = false;

$tdatamst_price_zone[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamst_price_zone[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamst_price_zone[".fieldsForRegister"] = array();

$tdatamst_price_zone[".listAjax"] = false;

	$tdatamst_price_zone[".audit"] = true;

	$tdatamst_price_zone[".locking"] = false;



$tdatamst_price_zone[".list"] = true;

$tdatamst_price_zone[".inlineEdit"] = true;


$tdatamst_price_zone[".reorderRecordsByHeader"] = true;



$tdatamst_price_zone[".inlineAdd"] = true;

$tdatamst_price_zone[".import"] = true;

$tdatamst_price_zone[".exportTo"] = true;


$tdatamst_price_zone[".delete"] = true;

$tdatamst_price_zone[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamst_price_zone[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamst_price_zone[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamst_price_zone[".searchSaving"] = false;
//

$tdatamst_price_zone[".showSearchPanel"] = true;
		$tdatamst_price_zone[".flexibleSearch"] = true;

$tdatamst_price_zone[".isUseAjaxSuggest"] = true;

$tdatamst_price_zone[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatamst_price_zone[".ajaxCodeSnippetAdded"] = false;

$tdatamst_price_zone[".buttonsAdded"] = false;

$tdatamst_price_zone[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamst_price_zone[".isUseTimeForSearch"] = false;





$tdatamst_price_zone[".allSearchFields"] = array();
$tdatamst_price_zone[".filterFields"] = array();
$tdatamst_price_zone[".requiredSearchFields"] = array();

$tdatamst_price_zone[".allSearchFields"][] = "id";
	$tdatamst_price_zone[".allSearchFields"][] = "output_price";
	$tdatamst_price_zone[".allSearchFields"][] = "minimum_price";
	$tdatamst_price_zone[".allSearchFields"][] = "updated_at";
	

$tdatamst_price_zone[".googleLikeFields"] = array();
$tdatamst_price_zone[".googleLikeFields"][] = "id";
$tdatamst_price_zone[".googleLikeFields"][] = "output_price";
$tdatamst_price_zone[".googleLikeFields"][] = "minimum_price";
$tdatamst_price_zone[".googleLikeFields"][] = "updated_at";


$tdatamst_price_zone[".advSearchFields"] = array();
$tdatamst_price_zone[".advSearchFields"][] = "id";
$tdatamst_price_zone[".advSearchFields"][] = "output_price";
$tdatamst_price_zone[".advSearchFields"][] = "minimum_price";
$tdatamst_price_zone[".advSearchFields"][] = "updated_at";

$tdatamst_price_zone[".tableType"] = "list";

$tdatamst_price_zone[".printerPageOrientation"] = 0;
$tdatamst_price_zone[".nPrinterPageScale"] = 100;

$tdatamst_price_zone[".nPrinterSplitRecords"] = 40;

$tdatamst_price_zone[".nPrinterPDFSplitRecords"] = 40;



$tdatamst_price_zone[".geocodingEnabled"] = false;





$tdatamst_price_zone[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamst_price_zone[".pageSize"] = 20;

$tdatamst_price_zone[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `minimum_price` DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamst_price_zone[".strOrderBy"] = $tstrOrderBy;

$tdatamst_price_zone[".orderindexes"] = array();
$tdatamst_price_zone[".orderindexes"][] = array(3, (0 ? "ASC" : "DESC"), "`minimum_price`");

$tdatamst_price_zone[".sqlHead"] = "SELECT `id`,  `output_price`,  `minimum_price`,  `updated_at`";
$tdatamst_price_zone[".sqlFrom"] = "FROM `mst_price_zone`";
$tdatamst_price_zone[".sqlWhereExpr"] = "";
$tdatamst_price_zone[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamst_price_zone[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamst_price_zone[".arrGroupsPerPage"] = $arrGPP;

$tdatamst_price_zone[".highlightSearchResults"] = true;

$tableKeysmst_price_zone = array();
$tableKeysmst_price_zone[] = "id";
$tdatamst_price_zone[".Keys"] = $tableKeysmst_price_zone;

$tdatamst_price_zone[".listFields"] = array();
$tdatamst_price_zone[".listFields"][] = "id";
$tdatamst_price_zone[".listFields"][] = "output_price";
$tdatamst_price_zone[".listFields"][] = "minimum_price";
$tdatamst_price_zone[".listFields"][] = "updated_at";

$tdatamst_price_zone[".hideMobileList"] = array();


$tdatamst_price_zone[".viewFields"] = array();

$tdatamst_price_zone[".addFields"] = array();

$tdatamst_price_zone[".masterListFields"] = array();
$tdatamst_price_zone[".masterListFields"][] = "id";
$tdatamst_price_zone[".masterListFields"][] = "output_price";
$tdatamst_price_zone[".masterListFields"][] = "minimum_price";
$tdatamst_price_zone[".masterListFields"][] = "updated_at";

$tdatamst_price_zone[".inlineAddFields"] = array();
$tdatamst_price_zone[".inlineAddFields"][] = "output_price";
$tdatamst_price_zone[".inlineAddFields"][] = "minimum_price";

$tdatamst_price_zone[".editFields"] = array();

$tdatamst_price_zone[".inlineEditFields"] = array();
$tdatamst_price_zone[".inlineEditFields"][] = "output_price";
$tdatamst_price_zone[".inlineEditFields"][] = "minimum_price";

$tdatamst_price_zone[".updateSelectedFields"] = array();


$tdatamst_price_zone[".exportFields"] = array();
$tdatamst_price_zone[".exportFields"][] = "id";
$tdatamst_price_zone[".exportFields"][] = "output_price";
$tdatamst_price_zone[".exportFields"][] = "minimum_price";
$tdatamst_price_zone[".exportFields"][] = "updated_at";

$tdatamst_price_zone[".importFields"] = array();
$tdatamst_price_zone[".importFields"][] = "id";
$tdatamst_price_zone[".importFields"][] = "output_price";
$tdatamst_price_zone[".importFields"][] = "minimum_price";
$tdatamst_price_zone[".importFields"][] = "updated_at";

$tdatamst_price_zone[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "mst_price_zone";
	$fdata["Label"] = GetFieldLabel("mst_price_zone","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatamst_price_zone["id"] = $fdata;
//	output_price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "output_price";
	$fdata["GoodName"] = "output_price";
	$fdata["ownerTable"] = "mst_price_zone";
	$fdata["Label"] = GetFieldLabel("mst_price_zone","output_price");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "output_price";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`output_price`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Currency");

	
	
	
	
	
	
	
	
	
	
	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatamst_price_zone["output_price"] = $fdata;
//	minimum_price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "minimum_price";
	$fdata["GoodName"] = "minimum_price";
	$fdata["ownerTable"] = "mst_price_zone";
	$fdata["Label"] = GetFieldLabel("mst_price_zone","minimum_price");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "minimum_price";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`minimum_price`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Currency");

	
	
	
	
	
	
	
	
	
	
	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatamst_price_zone["minimum_price"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "mst_price_zone";
	$fdata["Label"] = GetFieldLabel("mst_price_zone","updated_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "updated_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`updated_at`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Datetime");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

		$edata["ShowTime"] = true;

	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdatamst_price_zone["updated_at"] = $fdata;


$tables_data["mst_price_zone"]=&$tdatamst_price_zone;
$field_labels["mst_price_zone"] = &$fieldLabelsmst_price_zone;
$fieldToolTips["mst_price_zone"] = &$fieldToolTipsmst_price_zone;
$placeHolders["mst_price_zone"] = &$placeHoldersmst_price_zone;
$page_titles["mst_price_zone"] = &$pageTitlesmst_price_zone;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mst_price_zone"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mst_price_zone"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mst_price_zone()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  `output_price`,  `minimum_price`,  `updated_at`";
$proto0["m_strFrom"] = "FROM `mst_price_zone`";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY `minimum_price` DESC";
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
	"m_strTable" => "mst_price_zone",
	"m_srcTableName" => "mst_price_zone"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "mst_price_zone";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "output_price",
	"m_strTable" => "mst_price_zone",
	"m_srcTableName" => "mst_price_zone"
));

$proto8["m_sql"] = "`output_price`";
$proto8["m_srcTableName"] = "mst_price_zone";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "minimum_price",
	"m_strTable" => "mst_price_zone",
	"m_srcTableName" => "mst_price_zone"
));

$proto10["m_sql"] = "`minimum_price`";
$proto10["m_srcTableName"] = "mst_price_zone";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "mst_price_zone",
	"m_srcTableName" => "mst_price_zone"
));

$proto12["m_sql"] = "`updated_at`";
$proto12["m_srcTableName"] = "mst_price_zone";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "mst_price_zone";
$proto15["m_srcTableName"] = "mst_price_zone";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "id";
$proto15["m_columns"][] = "output_price";
$proto15["m_columns"][] = "minimum_price";
$proto15["m_columns"][] = "updated_at";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "`mst_price_zone`";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "mst_price_zone";
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
												$proto18=array();
						$obj = new SQLField(array(
	"m_strName" => "minimum_price",
	"m_strTable" => "mst_price_zone",
	"m_srcTableName" => "mst_price_zone"
));

$proto18["m_column"]=$obj;
$proto18["m_bAsc"] = 0;
$proto18["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto18);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="mst_price_zone";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mst_price_zone = createSqlQuery_mst_price_zone();


	
		;

				

$tdatamst_price_zone[".sqlquery"] = $queryData_mst_price_zone;

$tableEvents["mst_price_zone"] = new eventsBase;
$tdatamst_price_zone[".hasEvents"] = false;

?>