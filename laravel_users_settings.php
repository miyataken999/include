<?php
require_once(getabspath("classes/cipherer.php"));




$tdatalaravel_users = array();
	$tdatalaravel_users[".truncateText"] = true;
	$tdatalaravel_users[".NumberOfChars"] = 80;
	$tdatalaravel_users[".ShortName"] = "laravel_users";
	$tdatalaravel_users[".OwnerID"] = "";
	$tdatalaravel_users[".OriginalTable"] = "laravel_users";

//	field labels
$fieldLabelslaravel_users = array();
$fieldToolTipslaravel_users = array();
$pageTitleslaravel_users = array();
$placeHolderslaravel_users = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelslaravel_users["Japanese"] = array();
	$fieldToolTipslaravel_users["Japanese"] = array();
	$placeHolderslaravel_users["Japanese"] = array();
	$pageTitleslaravel_users["Japanese"] = array();
	$fieldLabelslaravel_users["Japanese"]["id"] = "Id";
	$fieldToolTipslaravel_users["Japanese"]["id"] = "";
	$placeHolderslaravel_users["Japanese"]["id"] = "";
	$fieldLabelslaravel_users["Japanese"]["name"] = "Name";
	$fieldToolTipslaravel_users["Japanese"]["name"] = "";
	$placeHolderslaravel_users["Japanese"]["name"] = "";
	$fieldLabelslaravel_users["Japanese"]["user_login"] = "User Login";
	$fieldToolTipslaravel_users["Japanese"]["user_login"] = "";
	$placeHolderslaravel_users["Japanese"]["user_login"] = "";
	$fieldLabelslaravel_users["Japanese"]["user_id"] = "User Id";
	$fieldToolTipslaravel_users["Japanese"]["user_id"] = "";
	$placeHolderslaravel_users["Japanese"]["user_id"] = "";
	if (count($fieldToolTipslaravel_users["Japanese"]))
		$tdatalaravel_users[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelslaravel_users[""] = array();
	$fieldToolTipslaravel_users[""] = array();
	$placeHolderslaravel_users[""] = array();
	$pageTitleslaravel_users[""] = array();
	$fieldLabelslaravel_users[""]["id"] = "Id";
	$fieldToolTipslaravel_users[""]["id"] = "";
	$placeHolderslaravel_users[""]["id"] = "";
	$fieldLabelslaravel_users[""]["name"] = "Name";
	$fieldToolTipslaravel_users[""]["name"] = "";
	$placeHolderslaravel_users[""]["name"] = "";
	$fieldLabelslaravel_users[""]["user_login"] = "User Login";
	$fieldToolTipslaravel_users[""]["user_login"] = "";
	$placeHolderslaravel_users[""]["user_login"] = "";
	$fieldLabelslaravel_users[""]["user_id"] = "User Id";
	$fieldToolTipslaravel_users[""]["user_id"] = "";
	$placeHolderslaravel_users[""]["user_id"] = "";
	if (count($fieldToolTipslaravel_users[""]))
		$tdatalaravel_users[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelslaravel_users["English"] = array();
	$fieldToolTipslaravel_users["English"] = array();
	$placeHolderslaravel_users["English"] = array();
	$pageTitleslaravel_users["English"] = array();
	$fieldLabelslaravel_users["English"]["id"] = "Id";
	$fieldToolTipslaravel_users["English"]["id"] = "";
	$placeHolderslaravel_users["English"]["id"] = "";
	$fieldLabelslaravel_users["English"]["name"] = "Name";
	$fieldToolTipslaravel_users["English"]["name"] = "";
	$placeHolderslaravel_users["English"]["name"] = "";
	$fieldLabelslaravel_users["English"]["user_login"] = "User Login";
	$fieldToolTipslaravel_users["English"]["user_login"] = "";
	$placeHolderslaravel_users["English"]["user_login"] = "";
	$fieldLabelslaravel_users["English"]["user_id"] = "User Id";
	$fieldToolTipslaravel_users["English"]["user_id"] = "";
	$placeHolderslaravel_users["English"]["user_id"] = "";
	if (count($fieldToolTipslaravel_users["English"]))
		$tdatalaravel_users[".isUseToolTips"] = true;
}


	$tdatalaravel_users[".NCSearch"] = true;



$tdatalaravel_users[".shortTableName"] = "laravel_users";
$tdatalaravel_users[".nSecOptions"] = 0;
$tdatalaravel_users[".recsPerRowPrint"] = 1;
$tdatalaravel_users[".mainTableOwnerID"] = "";
$tdatalaravel_users[".moveNext"] = 1;
$tdatalaravel_users[".entityType"] = 0;

$tdatalaravel_users[".strOriginalTableName"] = "laravel_users";

	



$tdatalaravel_users[".showAddInPopup"] = false;

$tdatalaravel_users[".showEditInPopup"] = false;

$tdatalaravel_users[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatalaravel_users[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatalaravel_users[".fieldsForRegister"] = array();

$tdatalaravel_users[".listAjax"] = false;

	$tdatalaravel_users[".audit"] = true;

	$tdatalaravel_users[".locking"] = false;



$tdatalaravel_users[".list"] = true;

$tdatalaravel_users[".inlineEdit"] = true;


$tdatalaravel_users[".reorderRecordsByHeader"] = true;








$tdatalaravel_users[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatalaravel_users[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatalaravel_users[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatalaravel_users[".searchSaving"] = false;
//

$tdatalaravel_users[".showSearchPanel"] = true;
		$tdatalaravel_users[".flexibleSearch"] = true;

$tdatalaravel_users[".isUseAjaxSuggest"] = true;

$tdatalaravel_users[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatalaravel_users[".ajaxCodeSnippetAdded"] = false;

$tdatalaravel_users[".buttonsAdded"] = false;

$tdatalaravel_users[".addPageEvents"] = false;

// use timepicker for search panel
$tdatalaravel_users[".isUseTimeForSearch"] = false;





$tdatalaravel_users[".allSearchFields"] = array();
$tdatalaravel_users[".filterFields"] = array();
$tdatalaravel_users[".requiredSearchFields"] = array();

$tdatalaravel_users[".allSearchFields"][] = "id";
	$tdatalaravel_users[".allSearchFields"][] = "user_id";
	$tdatalaravel_users[".allSearchFields"][] = "user_login";
	$tdatalaravel_users[".allSearchFields"][] = "name";
	

$tdatalaravel_users[".googleLikeFields"] = array();
$tdatalaravel_users[".googleLikeFields"][] = "id";
$tdatalaravel_users[".googleLikeFields"][] = "name";
$tdatalaravel_users[".googleLikeFields"][] = "user_login";
$tdatalaravel_users[".googleLikeFields"][] = "user_id";


$tdatalaravel_users[".advSearchFields"] = array();
$tdatalaravel_users[".advSearchFields"][] = "id";
$tdatalaravel_users[".advSearchFields"][] = "user_id";
$tdatalaravel_users[".advSearchFields"][] = "user_login";
$tdatalaravel_users[".advSearchFields"][] = "name";

$tdatalaravel_users[".tableType"] = "list";

$tdatalaravel_users[".printerPageOrientation"] = 0;
$tdatalaravel_users[".nPrinterPageScale"] = 100;

$tdatalaravel_users[".nPrinterSplitRecords"] = 40;

$tdatalaravel_users[".nPrinterPDFSplitRecords"] = 40;



$tdatalaravel_users[".geocodingEnabled"] = false;





$tdatalaravel_users[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatalaravel_users[".pageSize"] = 100;

$tdatalaravel_users[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatalaravel_users[".strOrderBy"] = $tstrOrderBy;

$tdatalaravel_users[".orderindexes"] = array();

$tdatalaravel_users[".sqlHead"] = "SELECT id,  name,  user_login,  user_id";
$tdatalaravel_users[".sqlFrom"] = "FROM laravel_users";
$tdatalaravel_users[".sqlWhereExpr"] = "";
$tdatalaravel_users[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatalaravel_users[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatalaravel_users[".arrGroupsPerPage"] = $arrGPP;

$tdatalaravel_users[".highlightSearchResults"] = true;

$tableKeyslaravel_users = array();
$tableKeyslaravel_users[] = "id";
$tableKeyslaravel_users[] = "user_login";
$tdatalaravel_users[".Keys"] = $tableKeyslaravel_users;

$tdatalaravel_users[".listFields"] = array();
$tdatalaravel_users[".listFields"][] = "id";
$tdatalaravel_users[".listFields"][] = "user_id";
$tdatalaravel_users[".listFields"][] = "user_login";
$tdatalaravel_users[".listFields"][] = "name";

$tdatalaravel_users[".hideMobileList"] = array();


$tdatalaravel_users[".viewFields"] = array();

$tdatalaravel_users[".addFields"] = array();

$tdatalaravel_users[".masterListFields"] = array();
$tdatalaravel_users[".masterListFields"][] = "id";
$tdatalaravel_users[".masterListFields"][] = "name";
$tdatalaravel_users[".masterListFields"][] = "user_login";
$tdatalaravel_users[".masterListFields"][] = "user_id";

$tdatalaravel_users[".inlineAddFields"] = array();

$tdatalaravel_users[".editFields"] = array();

$tdatalaravel_users[".inlineEditFields"] = array();
$tdatalaravel_users[".inlineEditFields"][] = "user_id";
$tdatalaravel_users[".inlineEditFields"][] = "user_login";
$tdatalaravel_users[".inlineEditFields"][] = "name";

$tdatalaravel_users[".updateSelectedFields"] = array();


$tdatalaravel_users[".exportFields"] = array();

$tdatalaravel_users[".importFields"] = array();

$tdatalaravel_users[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "laravel_users";
	$fdata["Label"] = GetFieldLabel("laravel_users","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatalaravel_users["id"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "laravel_users";
	$fdata["Label"] = GetFieldLabel("laravel_users","name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatalaravel_users["name"] = $fdata;
//	user_login
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "user_login";
	$fdata["GoodName"] = "user_login";
	$fdata["ownerTable"] = "laravel_users";
	$fdata["Label"] = GetFieldLabel("laravel_users","user_login");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "user_login";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "user_login";

	
	
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




	$tdatalaravel_users["user_login"] = $fdata;
//	user_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "user_id";
	$fdata["GoodName"] = "user_id";
	$fdata["ownerTable"] = "laravel_users";
	$fdata["Label"] = GetFieldLabel("laravel_users","user_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "user_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "user_id";

	
	
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




	$tdatalaravel_users["user_id"] = $fdata;


$tables_data["laravel_users"]=&$tdatalaravel_users;
$field_labels["laravel_users"] = &$fieldLabelslaravel_users;
$fieldToolTips["laravel_users"] = &$fieldToolTipslaravel_users;
$placeHolders["laravel_users"] = &$placeHolderslaravel_users;
$page_titles["laravel_users"] = &$pageTitleslaravel_users;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["laravel_users"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["laravel_users"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_laravel_users()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  name,  user_login,  user_id";
$proto0["m_strFrom"] = "FROM laravel_users";
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
	"m_strTable" => "laravel_users",
	"m_srcTableName" => "laravel_users"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "laravel_users";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "laravel_users",
	"m_srcTableName" => "laravel_users"
));

$proto8["m_sql"] = "name";
$proto8["m_srcTableName"] = "laravel_users";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "user_login",
	"m_strTable" => "laravel_users",
	"m_srcTableName" => "laravel_users"
));

$proto10["m_sql"] = "user_login";
$proto10["m_srcTableName"] = "laravel_users";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "user_id",
	"m_strTable" => "laravel_users",
	"m_srcTableName" => "laravel_users"
));

$proto12["m_sql"] = "user_id";
$proto12["m_srcTableName"] = "laravel_users";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "laravel_users";
$proto15["m_srcTableName"] = "laravel_users";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "id";
$proto15["m_columns"][] = "name";
$proto15["m_columns"][] = "user_login";
$proto15["m_columns"][] = "password";
$proto15["m_columns"][] = "remember_token";
$proto15["m_columns"][] = "updated_at";
$proto15["m_columns"][] = "created_at";
$proto15["m_columns"][] = "email";
$proto15["m_columns"][] = "user_id";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "laravel_users";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "laravel_users";
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
$proto0["m_srcTableName"]="laravel_users";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_laravel_users = createSqlQuery_laravel_users();


	
		;

				

$tdatalaravel_users[".sqlquery"] = $queryData_laravel_users;

$tableEvents["laravel_users"] = new eventsBase;
$tdatalaravel_users[".hasEvents"] = false;

?>