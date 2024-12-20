<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamst_hall_mark1111 = array();
	$tdatamst_hall_mark1111[".truncateText"] = true;
	$tdatamst_hall_mark1111[".NumberOfChars"] = 80;
	$tdatamst_hall_mark1111[".ShortName"] = "mst_hall_mark1111";
	$tdatamst_hall_mark1111[".OwnerID"] = "";
	$tdatamst_hall_mark1111[".OriginalTable"] = "mst_hall_mark";

//	field labels
$fieldLabelsmst_hall_mark1111 = array();
$fieldToolTipsmst_hall_mark1111 = array();
$pageTitlesmst_hall_mark1111 = array();
$placeHoldersmst_hall_mark1111 = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmst_hall_mark1111["Japanese"] = array();
	$fieldToolTipsmst_hall_mark1111["Japanese"] = array();
	$placeHoldersmst_hall_mark1111["Japanese"] = array();
	$pageTitlesmst_hall_mark1111["Japanese"] = array();
	$fieldLabelsmst_hall_mark1111["Japanese"]["name"] = "Name";
	$fieldToolTipsmst_hall_mark1111["Japanese"]["name"] = "";
	$placeHoldersmst_hall_mark1111["Japanese"]["name"] = "";
	$fieldLabelsmst_hall_mark1111["Japanese"]["id"] = "Id";
	$fieldToolTipsmst_hall_mark1111["Japanese"]["id"] = "";
	$placeHoldersmst_hall_mark1111["Japanese"]["id"] = "";
	$fieldLabelsmst_hall_mark1111["Japanese"]["sort"] = "Sort";
	$fieldToolTipsmst_hall_mark1111["Japanese"]["sort"] = "";
	$placeHoldersmst_hall_mark1111["Japanese"]["sort"] = "";
	if (count($fieldToolTipsmst_hall_mark1111["Japanese"]))
		$tdatamst_hall_mark1111[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmst_hall_mark1111[""] = array();
	$fieldToolTipsmst_hall_mark1111[""] = array();
	$placeHoldersmst_hall_mark1111[""] = array();
	$pageTitlesmst_hall_mark1111[""] = array();
	if (count($fieldToolTipsmst_hall_mark1111[""]))
		$tdatamst_hall_mark1111[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmst_hall_mark1111["English"] = array();
	$fieldToolTipsmst_hall_mark1111["English"] = array();
	$placeHoldersmst_hall_mark1111["English"] = array();
	$pageTitlesmst_hall_mark1111["English"] = array();
	if (count($fieldToolTipsmst_hall_mark1111["English"]))
		$tdatamst_hall_mark1111[".isUseToolTips"] = true;
}


	$tdatamst_hall_mark1111[".NCSearch"] = true;



$tdatamst_hall_mark1111[".shortTableName"] = "mst_hall_mark1111";
$tdatamst_hall_mark1111[".nSecOptions"] = 0;
$tdatamst_hall_mark1111[".recsPerRowPrint"] = 1;
$tdatamst_hall_mark1111[".mainTableOwnerID"] = "";
$tdatamst_hall_mark1111[".moveNext"] = 1;
$tdatamst_hall_mark1111[".entityType"] = 1;

$tdatamst_hall_mark1111[".strOriginalTableName"] = "mst_hall_mark";

	



$tdatamst_hall_mark1111[".showAddInPopup"] = false;

$tdatamst_hall_mark1111[".showEditInPopup"] = false;

$tdatamst_hall_mark1111[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamst_hall_mark1111[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamst_hall_mark1111[".fieldsForRegister"] = array();

$tdatamst_hall_mark1111[".listAjax"] = false;

	$tdatamst_hall_mark1111[".audit"] = true;

	$tdatamst_hall_mark1111[".locking"] = false;



$tdatamst_hall_mark1111[".list"] = true;



$tdatamst_hall_mark1111[".reorderRecordsByHeader"] = true;



$tdatamst_hall_mark1111[".inlineAdd"] = true;

$tdatamst_hall_mark1111[".import"] = true;

$tdatamst_hall_mark1111[".exportTo"] = true;



$tdatamst_hall_mark1111[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamst_hall_mark1111[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamst_hall_mark1111[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamst_hall_mark1111[".searchSaving"] = false;
//

$tdatamst_hall_mark1111[".showSearchPanel"] = true;
		$tdatamst_hall_mark1111[".flexibleSearch"] = true;

$tdatamst_hall_mark1111[".isUseAjaxSuggest"] = true;

$tdatamst_hall_mark1111[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatamst_hall_mark1111[".ajaxCodeSnippetAdded"] = false;

$tdatamst_hall_mark1111[".buttonsAdded"] = false;

$tdatamst_hall_mark1111[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamst_hall_mark1111[".isUseTimeForSearch"] = false;





$tdatamst_hall_mark1111[".allSearchFields"] = array();
$tdatamst_hall_mark1111[".filterFields"] = array();
$tdatamst_hall_mark1111[".requiredSearchFields"] = array();

$tdatamst_hall_mark1111[".allSearchFields"][] = "name";
	$tdatamst_hall_mark1111[".allSearchFields"][] = "id";
	$tdatamst_hall_mark1111[".allSearchFields"][] = "sort";
	

$tdatamst_hall_mark1111[".googleLikeFields"] = array();
$tdatamst_hall_mark1111[".googleLikeFields"][] = "name";
$tdatamst_hall_mark1111[".googleLikeFields"][] = "id";
$tdatamst_hall_mark1111[".googleLikeFields"][] = "sort";


$tdatamst_hall_mark1111[".advSearchFields"] = array();
$tdatamst_hall_mark1111[".advSearchFields"][] = "name";
$tdatamst_hall_mark1111[".advSearchFields"][] = "id";
$tdatamst_hall_mark1111[".advSearchFields"][] = "sort";

$tdatamst_hall_mark1111[".tableType"] = "list";

$tdatamst_hall_mark1111[".printerPageOrientation"] = 0;
$tdatamst_hall_mark1111[".nPrinterPageScale"] = 100;

$tdatamst_hall_mark1111[".nPrinterSplitRecords"] = 40;

$tdatamst_hall_mark1111[".nPrinterPDFSplitRecords"] = 40;



$tdatamst_hall_mark1111[".geocodingEnabled"] = false;





$tdatamst_hall_mark1111[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamst_hall_mark1111[".pageSize"] = 100;

$tdatamst_hall_mark1111[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamst_hall_mark1111[".strOrderBy"] = $tstrOrderBy;

$tdatamst_hall_mark1111[".orderindexes"] = array();

$tdatamst_hall_mark1111[".sqlHead"] = "SELECT mst_hall_mark.name,  mst_country_of_origin.id,  mst_hall_mark.sort";
$tdatamst_hall_mark1111[".sqlFrom"] = "FROM mst_hall_mark  INNER JOIN mst_country_of_origin ON mst_hall_mark.country_of_origin = mst_country_of_origin.country_group";
$tdatamst_hall_mark1111[".sqlWhereExpr"] = "";
$tdatamst_hall_mark1111[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamst_hall_mark1111[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamst_hall_mark1111[".arrGroupsPerPage"] = $arrGPP;

$tdatamst_hall_mark1111[".highlightSearchResults"] = true;

$tableKeysmst_hall_mark1111 = array();
$tdatamst_hall_mark1111[".Keys"] = $tableKeysmst_hall_mark1111;

$tdatamst_hall_mark1111[".listFields"] = array();
$tdatamst_hall_mark1111[".listFields"][] = "id";
$tdatamst_hall_mark1111[".listFields"][] = "sort";
$tdatamst_hall_mark1111[".listFields"][] = "name";

$tdatamst_hall_mark1111[".hideMobileList"] = array();


$tdatamst_hall_mark1111[".viewFields"] = array();

$tdatamst_hall_mark1111[".addFields"] = array();

$tdatamst_hall_mark1111[".masterListFields"] = array();
$tdatamst_hall_mark1111[".masterListFields"][] = "name";
$tdatamst_hall_mark1111[".masterListFields"][] = "id";
$tdatamst_hall_mark1111[".masterListFields"][] = "sort";

$tdatamst_hall_mark1111[".inlineAddFields"] = array();
$tdatamst_hall_mark1111[".inlineAddFields"][] = "sort";
$tdatamst_hall_mark1111[".inlineAddFields"][] = "name";

$tdatamst_hall_mark1111[".editFields"] = array();

$tdatamst_hall_mark1111[".inlineEditFields"] = array();

$tdatamst_hall_mark1111[".updateSelectedFields"] = array();


$tdatamst_hall_mark1111[".exportFields"] = array();
$tdatamst_hall_mark1111[".exportFields"][] = "name";
$tdatamst_hall_mark1111[".exportFields"][] = "id";
$tdatamst_hall_mark1111[".exportFields"][] = "sort";

$tdatamst_hall_mark1111[".importFields"] = array();
$tdatamst_hall_mark1111[".importFields"][] = "name";
$tdatamst_hall_mark1111[".importFields"][] = "id";
$tdatamst_hall_mark1111[".importFields"][] = "sort";

$tdatamst_hall_mark1111[".printFields"] = array();

//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "mst_hall_mark";
	$fdata["Label"] = GetFieldLabel("mst_hall_mark1111","name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
	
	

	
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




	$tdatamst_hall_mark1111["name"] = $fdata;
//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "mst_country_of_origin";
	$fdata["Label"] = GetFieldLabel("mst_hall_mark1111","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
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




	$tdatamst_hall_mark1111["id"] = $fdata;
//	sort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sort";
	$fdata["GoodName"] = "sort";
	$fdata["ownerTable"] = "mst_hall_mark";
	$fdata["Label"] = GetFieldLabel("mst_hall_mark1111","sort");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "sort";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mst_hall_mark.sort";

	
	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatamst_hall_mark1111["sort"] = $fdata;


$tables_data["mst_hall_mark1111"]=&$tdatamst_hall_mark1111;
$field_labels["mst_hall_mark1111"] = &$fieldLabelsmst_hall_mark1111;
$fieldToolTips["mst_hall_mark1111"] = &$fieldToolTipsmst_hall_mark1111;
$placeHolders["mst_hall_mark1111"] = &$placeHoldersmst_hall_mark1111;
$page_titles["mst_hall_mark1111"] = &$pageTitlesmst_hall_mark1111;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mst_hall_mark1111"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mst_hall_mark1111"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mst_hall_mark1111()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "mst_hall_mark.name,  mst_country_of_origin.id,  mst_hall_mark.sort";
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
	"m_srcTableName" => "mst_hall_mark1111"
));

$proto6["m_sql"] = "mst_hall_mark.name";
$proto6["m_srcTableName"] = "mst_hall_mark1111";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "mst_country_of_origin",
	"m_srcTableName" => "mst_hall_mark1111"
));

$proto8["m_sql"] = "mst_country_of_origin.id";
$proto8["m_srcTableName"] = "mst_hall_mark1111";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "sort",
	"m_strTable" => "mst_hall_mark",
	"m_srcTableName" => "mst_hall_mark1111"
));

$proto10["m_sql"] = "mst_hall_mark.sort";
$proto10["m_srcTableName"] = "mst_hall_mark1111";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "mst_hall_mark";
$proto13["m_srcTableName"] = "mst_hall_mark1111";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "id";
$proto13["m_columns"][] = "country_of_origin";
$proto13["m_columns"][] = "name";
$proto13["m_columns"][] = "sort";
$proto13["m_columns"][] = "update_at";
$proto13["m_columns"][] = "update_by";
$proto13["m_columns"][] = "create_at";
$proto13["m_columns"][] = "create_by";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "mst_hall_mark";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "mst_hall_mark1111";
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
												$proto16=array();
$proto16["m_link"] = "SQLL_INNERJOIN";
			$proto17=array();
$proto17["m_strName"] = "mst_country_of_origin";
$proto17["m_srcTableName"] = "mst_hall_mark1111";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "id";
$proto17["m_columns"][] = "name";
$proto17["m_columns"][] = "sort";
$proto17["m_columns"][] = "line";
$proto17["m_columns"][] = "yahoo_junle";
$proto17["m_columns"][] = "category_id";
$proto17["m_columns"][] = "sub_category_id1";
$proto17["m_columns"][] = "updated_at";
$proto17["m_columns"][] = "updated_by";
$proto17["m_columns"][] = "created_at";
$proto17["m_columns"][] = "created_by";
$proto17["m_columns"][] = "english_name";
$proto17["m_columns"][] = "country_group";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "INNER JOIN mst_country_of_origin ON mst_hall_mark.country_of_origin = mst_country_of_origin.country_group";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "mst_hall_mark1111";
$proto18=array();
$proto18["m_sql"] = "mst_hall_mark.country_of_origin = mst_country_of_origin.country_group";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "country_of_origin",
	"m_strTable" => "mst_hall_mark",
	"m_srcTableName" => "mst_hall_mark1111"
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "= mst_country_of_origin.country_group";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="mst_hall_mark1111";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mst_hall_mark1111 = createSqlQuery_mst_hall_mark1111();


	
		;

			

$tdatamst_hall_mark1111[".sqlquery"] = $queryData_mst_hall_mark1111;

include_once(getabspath("include/mst_hall_mark1111_events.php"));
$tableEvents["mst_hall_mark1111"] = new eventclass_mst_hall_mark1111;
$tdatamst_hall_mark1111[".hasEvents"] = true;

?>