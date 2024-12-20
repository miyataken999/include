<?php
require_once(getabspath("classes/cipherer.php"));




$tdatascreenshots = array();
	$tdatascreenshots[".truncateText"] = true;
	$tdatascreenshots[".NumberOfChars"] = 80;
	$tdatascreenshots[".ShortName"] = "screenshots";
	$tdatascreenshots[".OwnerID"] = "";
	$tdatascreenshots[".OriginalTable"] = "screenshots";

//	field labels
$fieldLabelsscreenshots = array();
$fieldToolTipsscreenshots = array();
$pageTitlesscreenshots = array();
$placeHoldersscreenshots = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsscreenshots["Japanese"] = array();
	$fieldToolTipsscreenshots["Japanese"] = array();
	$placeHoldersscreenshots["Japanese"] = array();
	$pageTitlesscreenshots["Japanese"] = array();
	$fieldLabelsscreenshots["Japanese"]["id"] = "Id";
	$fieldToolTipsscreenshots["Japanese"]["id"] = "";
	$placeHoldersscreenshots["Japanese"]["id"] = "";
	$fieldLabelsscreenshots["Japanese"]["imgpass"] = "Imgpass";
	$fieldToolTipsscreenshots["Japanese"]["imgpass"] = "";
	$placeHoldersscreenshots["Japanese"]["imgpass"] = "";
	$fieldLabelsscreenshots["Japanese"]["difference"] = "Difference";
	$fieldToolTipsscreenshots["Japanese"]["difference"] = "";
	$placeHoldersscreenshots["Japanese"]["difference"] = "";
	$fieldLabelsscreenshots["Japanese"]["created_at"] = "Created At";
	$fieldToolTipsscreenshots["Japanese"]["created_at"] = "";
	$placeHoldersscreenshots["Japanese"]["created_at"] = "";
	$fieldLabelsscreenshots["Japanese"]["updated_at"] = "Updated At";
	$fieldToolTipsscreenshots["Japanese"]["updated_at"] = "";
	$placeHoldersscreenshots["Japanese"]["updated_at"] = "";
	if (count($fieldToolTipsscreenshots["Japanese"]))
		$tdatascreenshots[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsscreenshots[""] = array();
	$fieldToolTipsscreenshots[""] = array();
	$placeHoldersscreenshots[""] = array();
	$pageTitlesscreenshots[""] = array();
	$fieldLabelsscreenshots[""]["id"] = "Id";
	$fieldToolTipsscreenshots[""]["id"] = "";
	$placeHoldersscreenshots[""]["id"] = "";
	$fieldLabelsscreenshots[""]["imgpass"] = "Imgpass";
	$fieldToolTipsscreenshots[""]["imgpass"] = "";
	$placeHoldersscreenshots[""]["imgpass"] = "";
	$fieldLabelsscreenshots[""]["difference"] = "Difference";
	$fieldToolTipsscreenshots[""]["difference"] = "";
	$placeHoldersscreenshots[""]["difference"] = "";
	$fieldLabelsscreenshots[""]["created_at"] = "Created At";
	$fieldToolTipsscreenshots[""]["created_at"] = "";
	$placeHoldersscreenshots[""]["created_at"] = "";
	$fieldLabelsscreenshots[""]["updated_at"] = "Updated At";
	$fieldToolTipsscreenshots[""]["updated_at"] = "";
	$placeHoldersscreenshots[""]["updated_at"] = "";
	if (count($fieldToolTipsscreenshots[""]))
		$tdatascreenshots[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsscreenshots["English"] = array();
	$fieldToolTipsscreenshots["English"] = array();
	$placeHoldersscreenshots["English"] = array();
	$pageTitlesscreenshots["English"] = array();
	$fieldLabelsscreenshots["English"]["id"] = "Id";
	$fieldToolTipsscreenshots["English"]["id"] = "";
	$placeHoldersscreenshots["English"]["id"] = "";
	$fieldLabelsscreenshots["English"]["imgpass"] = "Imgpass";
	$fieldToolTipsscreenshots["English"]["imgpass"] = "";
	$placeHoldersscreenshots["English"]["imgpass"] = "";
	$fieldLabelsscreenshots["English"]["difference"] = "Difference";
	$fieldToolTipsscreenshots["English"]["difference"] = "";
	$placeHoldersscreenshots["English"]["difference"] = "";
	$fieldLabelsscreenshots["English"]["created_at"] = "Created At";
	$fieldToolTipsscreenshots["English"]["created_at"] = "";
	$placeHoldersscreenshots["English"]["created_at"] = "";
	$fieldLabelsscreenshots["English"]["updated_at"] = "Updated At";
	$fieldToolTipsscreenshots["English"]["updated_at"] = "";
	$placeHoldersscreenshots["English"]["updated_at"] = "";
	if (count($fieldToolTipsscreenshots["English"]))
		$tdatascreenshots[".isUseToolTips"] = true;
}


	$tdatascreenshots[".NCSearch"] = true;



$tdatascreenshots[".shortTableName"] = "screenshots";
$tdatascreenshots[".nSecOptions"] = 0;
$tdatascreenshots[".recsPerRowPrint"] = 1;
$tdatascreenshots[".mainTableOwnerID"] = "";
$tdatascreenshots[".moveNext"] = 1;
$tdatascreenshots[".entityType"] = 0;

$tdatascreenshots[".strOriginalTableName"] = "screenshots";

	



$tdatascreenshots[".showAddInPopup"] = false;

$tdatascreenshots[".showEditInPopup"] = false;

$tdatascreenshots[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatascreenshots[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatascreenshots[".fieldsForRegister"] = array();

$tdatascreenshots[".listAjax"] = false;

	$tdatascreenshots[".audit"] = false;

	$tdatascreenshots[".locking"] = false;



$tdatascreenshots[".list"] = true;



$tdatascreenshots[".reorderRecordsByHeader"] = true;





$tdatascreenshots[".exportTo"] = true;



$tdatascreenshots[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatascreenshots[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatascreenshots[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatascreenshots[".searchSaving"] = false;
//

$tdatascreenshots[".showSearchPanel"] = true;
		$tdatascreenshots[".flexibleSearch"] = true;

$tdatascreenshots[".isUseAjaxSuggest"] = true;

$tdatascreenshots[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatascreenshots[".ajaxCodeSnippetAdded"] = false;

$tdatascreenshots[".buttonsAdded"] = false;

$tdatascreenshots[".addPageEvents"] = false;

// use timepicker for search panel
$tdatascreenshots[".isUseTimeForSearch"] = false;





$tdatascreenshots[".allSearchFields"] = array();
$tdatascreenshots[".filterFields"] = array();
$tdatascreenshots[".requiredSearchFields"] = array();

$tdatascreenshots[".allSearchFields"][] = "id";
	$tdatascreenshots[".allSearchFields"][] = "imgpass";
	$tdatascreenshots[".allSearchFields"][] = "difference";
	$tdatascreenshots[".allSearchFields"][] = "created_at";
	$tdatascreenshots[".allSearchFields"][] = "updated_at";
	

$tdatascreenshots[".googleLikeFields"] = array();
$tdatascreenshots[".googleLikeFields"][] = "id";
$tdatascreenshots[".googleLikeFields"][] = "imgpass";
$tdatascreenshots[".googleLikeFields"][] = "difference";
$tdatascreenshots[".googleLikeFields"][] = "created_at";
$tdatascreenshots[".googleLikeFields"][] = "updated_at";


$tdatascreenshots[".advSearchFields"] = array();
$tdatascreenshots[".advSearchFields"][] = "id";
$tdatascreenshots[".advSearchFields"][] = "imgpass";
$tdatascreenshots[".advSearchFields"][] = "difference";
$tdatascreenshots[".advSearchFields"][] = "created_at";
$tdatascreenshots[".advSearchFields"][] = "updated_at";

$tdatascreenshots[".tableType"] = "list";

$tdatascreenshots[".printerPageOrientation"] = 0;
$tdatascreenshots[".nPrinterPageScale"] = 100;

$tdatascreenshots[".nPrinterSplitRecords"] = 40;

$tdatascreenshots[".nPrinterPDFSplitRecords"] = 40;



$tdatascreenshots[".geocodingEnabled"] = false;





$tdatascreenshots[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatascreenshots[".pageSize"] = 20;

$tdatascreenshots[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `id` DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatascreenshots[".strOrderBy"] = $tstrOrderBy;

$tdatascreenshots[".orderindexes"] = array();
$tdatascreenshots[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "`id`");

$tdatascreenshots[".sqlHead"] = "SELECT `id`,  `imgpass`,  `difference`,  `created_at`,  `updated_at`";
$tdatascreenshots[".sqlFrom"] = "FROM `screenshots`";
$tdatascreenshots[".sqlWhereExpr"] = "";
$tdatascreenshots[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatascreenshots[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatascreenshots[".arrGroupsPerPage"] = $arrGPP;

$tdatascreenshots[".highlightSearchResults"] = true;

$tableKeysscreenshots = array();
$tableKeysscreenshots[] = "id";
$tdatascreenshots[".Keys"] = $tableKeysscreenshots;

$tdatascreenshots[".listFields"] = array();
$tdatascreenshots[".listFields"][] = "id";
$tdatascreenshots[".listFields"][] = "imgpass";
$tdatascreenshots[".listFields"][] = "difference";
$tdatascreenshots[".listFields"][] = "created_at";
$tdatascreenshots[".listFields"][] = "updated_at";

$tdatascreenshots[".hideMobileList"] = array();


$tdatascreenshots[".viewFields"] = array();

$tdatascreenshots[".addFields"] = array();

$tdatascreenshots[".masterListFields"] = array();
$tdatascreenshots[".masterListFields"][] = "id";
$tdatascreenshots[".masterListFields"][] = "imgpass";
$tdatascreenshots[".masterListFields"][] = "difference";
$tdatascreenshots[".masterListFields"][] = "created_at";
$tdatascreenshots[".masterListFields"][] = "updated_at";

$tdatascreenshots[".inlineAddFields"] = array();

$tdatascreenshots[".editFields"] = array();

$tdatascreenshots[".inlineEditFields"] = array();

$tdatascreenshots[".updateSelectedFields"] = array();


$tdatascreenshots[".exportFields"] = array();
$tdatascreenshots[".exportFields"][] = "id";
$tdatascreenshots[".exportFields"][] = "imgpass";
$tdatascreenshots[".exportFields"][] = "difference";
$tdatascreenshots[".exportFields"][] = "created_at";
$tdatascreenshots[".exportFields"][] = "updated_at";

$tdatascreenshots[".importFields"] = array();

$tdatascreenshots[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "screenshots";
	$fdata["Label"] = GetFieldLabel("screenshots","id");
	$fdata["FieldType"] = 20;

	
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




	$tdatascreenshots["id"] = $fdata;
//	imgpass
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "imgpass";
	$fdata["GoodName"] = "imgpass";
	$fdata["ownerTable"] = "screenshots";
	$fdata["Label"] = GetFieldLabel("screenshots","imgpass");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "imgpass";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`imgpass`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Hyperlink");

	
	
	
	
				$vdata["hlNewWindow"] = true;
	$vdata["hlType"] = 0;
	$vdata["hlLinkWordNameType"] = "Text";
	$vdata["hlLinkWordText"] = "Link";
	$vdata["hlTitleField"] = "";

	
	
	
	
	
	
	
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




	$tdatascreenshots["imgpass"] = $fdata;
//	difference
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "difference";
	$fdata["GoodName"] = "difference";
	$fdata["ownerTable"] = "screenshots";
	$fdata["Label"] = GetFieldLabel("screenshots","difference");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "difference";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`difference`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
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




	$tdatascreenshots["difference"] = $fdata;
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "screenshots";
	$fdata["Label"] = GetFieldLabel("screenshots","created_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "created_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`created_at`";

	
	
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




	$tdatascreenshots["created_at"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "screenshots";
	$fdata["Label"] = GetFieldLabel("screenshots","updated_at");
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




	$tdatascreenshots["updated_at"] = $fdata;


$tables_data["screenshots"]=&$tdatascreenshots;
$field_labels["screenshots"] = &$fieldLabelsscreenshots;
$fieldToolTips["screenshots"] = &$fieldToolTipsscreenshots;
$placeHolders["screenshots"] = &$placeHoldersscreenshots;
$page_titles["screenshots"] = &$pageTitlesscreenshots;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["screenshots"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["screenshots"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_screenshots()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  `imgpass`,  `difference`,  `created_at`,  `updated_at`";
$proto0["m_strFrom"] = "FROM `screenshots`";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY `id` DESC";
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
	"m_strTable" => "screenshots",
	"m_srcTableName" => "screenshots"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "screenshots";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "imgpass",
	"m_strTable" => "screenshots",
	"m_srcTableName" => "screenshots"
));

$proto8["m_sql"] = "`imgpass`";
$proto8["m_srcTableName"] = "screenshots";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "difference",
	"m_strTable" => "screenshots",
	"m_srcTableName" => "screenshots"
));

$proto10["m_sql"] = "`difference`";
$proto10["m_srcTableName"] = "screenshots";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "screenshots",
	"m_srcTableName" => "screenshots"
));

$proto12["m_sql"] = "`created_at`";
$proto12["m_srcTableName"] = "screenshots";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "screenshots",
	"m_srcTableName" => "screenshots"
));

$proto14["m_sql"] = "`updated_at`";
$proto14["m_srcTableName"] = "screenshots";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "screenshots";
$proto17["m_srcTableName"] = "screenshots";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "id";
$proto17["m_columns"][] = "imgpass";
$proto17["m_columns"][] = "difference";
$proto17["m_columns"][] = "created_at";
$proto17["m_columns"][] = "updated_at";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "`screenshots`";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "screenshots";
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto20=array();
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "screenshots",
	"m_srcTableName" => "screenshots"
));

$proto20["m_column"]=$obj;
$proto20["m_bAsc"] = 0;
$proto20["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto20);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="screenshots";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_screenshots = createSqlQuery_screenshots();


	
		;

					

$tdatascreenshots[".sqlquery"] = $queryData_screenshots;

$tableEvents["screenshots"] = new eventsBase;
$tdatascreenshots[".hasEvents"] = false;

?>