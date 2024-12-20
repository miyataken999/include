<?php
require_once(getabspath("classes/cipherer.php"));




$tdatausers_code = array();
	$tdatausers_code[".truncateText"] = true;
	$tdatausers_code[".NumberOfChars"] = 80;
	$tdatausers_code[".ShortName"] = "users_code";
	$tdatausers_code[".OwnerID"] = "";
	$tdatausers_code[".OriginalTable"] = "users";

//	field labels
$fieldLabelsusers_code = array();
$fieldToolTipsusers_code = array();
$pageTitlesusers_code = array();
$placeHoldersusers_code = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsusers_code["Japanese"] = array();
	$fieldToolTipsusers_code["Japanese"] = array();
	$placeHoldersusers_code["Japanese"] = array();
	$pageTitlesusers_code["Japanese"] = array();
	$fieldLabelsusers_code["Japanese"]["user_id"] = "User Id";
	$fieldToolTipsusers_code["Japanese"]["user_id"] = "";
	$placeHoldersusers_code["Japanese"]["user_id"] = "";
	$fieldLabelsusers_code["Japanese"]["first_name"] = "First Name";
	$fieldToolTipsusers_code["Japanese"]["first_name"] = "";
	$placeHoldersusers_code["Japanese"]["first_name"] = "";
	$fieldLabelsusers_code["Japanese"]["income_id"] = "Income Id";
	$fieldToolTipsusers_code["Japanese"]["income_id"] = "";
	$placeHoldersusers_code["Japanese"]["income_id"] = "";
	$fieldLabelsusers_code["Japanese"]["cw_TO_id"] = "Cw TO Id";
	$fieldToolTipsusers_code["Japanese"]["cw_TO_id"] = "";
	$placeHoldersusers_code["Japanese"]["cw_TO_id"] = "";
	$fieldLabelsusers_code["Japanese"]["cw_task_id"] = "Cw Task Id";
	$fieldToolTipsusers_code["Japanese"]["cw_task_id"] = "";
	$placeHoldersusers_code["Japanese"]["cw_task_id"] = "";
	if (count($fieldToolTipsusers_code["Japanese"]))
		$tdatausers_code[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsusers_code[""] = array();
	$fieldToolTipsusers_code[""] = array();
	$placeHoldersusers_code[""] = array();
	$pageTitlesusers_code[""] = array();
	$fieldLabelsusers_code[""]["cw_TO_id"] = "Cw TO Id";
	$fieldToolTipsusers_code[""]["cw_TO_id"] = "";
	$placeHoldersusers_code[""]["cw_TO_id"] = "";
	$fieldLabelsusers_code[""]["cw_task_id"] = "Cw Task Id";
	$fieldToolTipsusers_code[""]["cw_task_id"] = "";
	$placeHoldersusers_code[""]["cw_task_id"] = "";
	if (count($fieldToolTipsusers_code[""]))
		$tdatausers_code[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsusers_code["English"] = array();
	$fieldToolTipsusers_code["English"] = array();
	$placeHoldersusers_code["English"] = array();
	$pageTitlesusers_code["English"] = array();
	$fieldLabelsusers_code["English"]["cw_TO_id"] = "Cw TO Id";
	$fieldToolTipsusers_code["English"]["cw_TO_id"] = "";
	$placeHoldersusers_code["English"]["cw_TO_id"] = "";
	$fieldLabelsusers_code["English"]["cw_task_id"] = "Cw Task Id";
	$fieldToolTipsusers_code["English"]["cw_task_id"] = "";
	$placeHoldersusers_code["English"]["cw_task_id"] = "";
	if (count($fieldToolTipsusers_code["English"]))
		$tdatausers_code[".isUseToolTips"] = true;
}


	$tdatausers_code[".NCSearch"] = true;



$tdatausers_code[".shortTableName"] = "users_code";
$tdatausers_code[".nSecOptions"] = 0;
$tdatausers_code[".recsPerRowPrint"] = 1;
$tdatausers_code[".mainTableOwnerID"] = "";
$tdatausers_code[".moveNext"] = 1;
$tdatausers_code[".entityType"] = 1;

$tdatausers_code[".strOriginalTableName"] = "users";

	



$tdatausers_code[".showAddInPopup"] = false;

$tdatausers_code[".showEditInPopup"] = false;

$tdatausers_code[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatausers_code[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatausers_code[".fieldsForRegister"] = array();

$tdatausers_code[".listAjax"] = false;

	$tdatausers_code[".audit"] = true;

	$tdatausers_code[".locking"] = false;



$tdatausers_code[".list"] = true;

$tdatausers_code[".inlineEdit"] = true;


$tdatausers_code[".reorderRecordsByHeader"] = true;
$tdatausers_code[".createSortByDropdown"] = true;
$tdatausers_code[".strSortControlSettingsJSON"] = "";








$tdatausers_code[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatausers_code[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdatausers_code[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdatausers_code[".searchSaving"] = false;
//

$tdatausers_code[".showSearchPanel"] = true;
		$tdatausers_code[".flexibleSearch"] = true;

$tdatausers_code[".isUseAjaxSuggest"] = true;

$tdatausers_code[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatausers_code[".ajaxCodeSnippetAdded"] = false;

$tdatausers_code[".buttonsAdded"] = false;

$tdatausers_code[".addPageEvents"] = false;

// use timepicker for search panel
$tdatausers_code[".isUseTimeForSearch"] = false;



$tdatausers_code[".badgeColor"] = "9ACD32";


$tdatausers_code[".allSearchFields"] = array();
$tdatausers_code[".filterFields"] = array();
$tdatausers_code[".requiredSearchFields"] = array();

$tdatausers_code[".allSearchFields"][] = "first_name";
	

$tdatausers_code[".googleLikeFields"] = array();
$tdatausers_code[".googleLikeFields"][] = "user_id";
$tdatausers_code[".googleLikeFields"][] = "first_name";
$tdatausers_code[".googleLikeFields"][] = "income_id";
$tdatausers_code[".googleLikeFields"][] = "cw_TO_id";
$tdatausers_code[".googleLikeFields"][] = "cw_task_id";


$tdatausers_code[".advSearchFields"] = array();
$tdatausers_code[".advSearchFields"][] = "first_name";

$tdatausers_code[".tableType"] = "list";

$tdatausers_code[".printerPageOrientation"] = 0;
$tdatausers_code[".nPrinterPageScale"] = 100;

$tdatausers_code[".nPrinterSplitRecords"] = 40;

$tdatausers_code[".nPrinterPDFSplitRecords"] = 40;



$tdatausers_code[".geocodingEnabled"] = false;





$tdatausers_code[".listGridLayout"] = 3;


$tdatausers_code[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdatausers_code[".pageSize"] = 20;

$tdatausers_code[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `income_id`";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatausers_code[".strOrderBy"] = $tstrOrderBy;

$tdatausers_code[".orderindexes"] = array();
$tdatausers_code[".orderindexes"][] = array(3, (1 ? "ASC" : "DESC"), "`income_id`");

$tdatausers_code[".sqlHead"] = "SELECT `user_id`,  `first_name`,  `income_id`,  `cw_TO_id`,  `cw_task_id`";
$tdatausers_code[".sqlFrom"] = "FROM `users`";
$tdatausers_code[".sqlWhereExpr"] = "";
$tdatausers_code[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatausers_code[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatausers_code[".arrGroupsPerPage"] = $arrGPP;

$tdatausers_code[".highlightSearchResults"] = true;

$tableKeysusers_code = array();
$tableKeysusers_code[] = "user_id";
$tdatausers_code[".Keys"] = $tableKeysusers_code;

$tdatausers_code[".listFields"] = array();
$tdatausers_code[".listFields"][] = "user_id";
$tdatausers_code[".listFields"][] = "first_name";
$tdatausers_code[".listFields"][] = "income_id";
$tdatausers_code[".listFields"][] = "cw_TO_id";
$tdatausers_code[".listFields"][] = "cw_task_id";

$tdatausers_code[".hideMobileList"] = array();


$tdatausers_code[".viewFields"] = array();

$tdatausers_code[".addFields"] = array();

$tdatausers_code[".masterListFields"] = array();
$tdatausers_code[".masterListFields"][] = "user_id";
$tdatausers_code[".masterListFields"][] = "first_name";
$tdatausers_code[".masterListFields"][] = "income_id";
$tdatausers_code[".masterListFields"][] = "cw_TO_id";
$tdatausers_code[".masterListFields"][] = "cw_task_id";

$tdatausers_code[".inlineAddFields"] = array();

$tdatausers_code[".editFields"] = array();

$tdatausers_code[".inlineEditFields"] = array();
$tdatausers_code[".inlineEditFields"][] = "cw_TO_id";
$tdatausers_code[".inlineEditFields"][] = "cw_task_id";

$tdatausers_code[".updateSelectedFields"] = array();


$tdatausers_code[".exportFields"] = array();

$tdatausers_code[".importFields"] = array();

$tdatausers_code[".printFields"] = array();

//	user_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "user_id";
	$fdata["GoodName"] = "user_id";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users_code","user_id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "user_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`user_id`";

	
	
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








	$tdatausers_code["user_id"] = $fdata;
//	first_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "first_name";
	$fdata["GoodName"] = "first_name";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users_code","first_name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "first_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`first_name`";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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




	$tdatausers_code["first_name"] = $fdata;
//	income_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "income_id";
	$fdata["GoodName"] = "income_id";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users_code","income_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "income_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`income_id`";

	
	
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








	$tdatausers_code["income_id"] = $fdata;
//	cw_TO_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "cw_TO_id";
	$fdata["GoodName"] = "cw_TO_id";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users_code","cw_TO_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
	
	
	
		$fdata["strField"] = "cw_TO_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`cw_TO_id`";

	
	
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








	$tdatausers_code["cw_TO_id"] = $fdata;
//	cw_task_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "cw_task_id";
	$fdata["GoodName"] = "cw_task_id";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users_code","cw_task_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
	
	
	
		$fdata["strField"] = "cw_task_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`cw_task_id`";

	
	
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








	$tdatausers_code["cw_task_id"] = $fdata;


$tables_data["users_code"]=&$tdatausers_code;
$field_labels["users_code"] = &$fieldLabelsusers_code;
$fieldToolTips["users_code"] = &$fieldToolTipsusers_code;
$placeHolders["users_code"] = &$placeHoldersusers_code;
$page_titles["users_code"] = &$pageTitlesusers_code;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["users_code"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["users_code"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_users_code()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`user_id`,  `first_name`,  `income_id`,  `cw_TO_id`,  `cw_task_id`";
$proto0["m_strFrom"] = "FROM `users`";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY `income_id`";
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
	"m_strName" => "user_id",
	"m_strTable" => "users",
	"m_srcTableName" => "users_code"
));

$proto6["m_sql"] = "`user_id`";
$proto6["m_srcTableName"] = "users_code";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "first_name",
	"m_strTable" => "users",
	"m_srcTableName" => "users_code"
));

$proto8["m_sql"] = "`first_name`";
$proto8["m_srcTableName"] = "users_code";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "income_id",
	"m_strTable" => "users",
	"m_srcTableName" => "users_code"
));

$proto10["m_sql"] = "`income_id`";
$proto10["m_srcTableName"] = "users_code";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "cw_TO_id",
	"m_strTable" => "users",
	"m_srcTableName" => "users_code"
));

$proto12["m_sql"] = "`cw_TO_id`";
$proto12["m_srcTableName"] = "users_code";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "cw_task_id",
	"m_strTable" => "users",
	"m_srcTableName" => "users_code"
));

$proto14["m_sql"] = "`cw_task_id`";
$proto14["m_srcTableName"] = "users_code";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "users";
$proto17["m_srcTableName"] = "users_code";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "user_id";
$proto17["m_columns"][] = "user_login";
$proto17["m_columns"][] = "user_password";
$proto17["m_columns"][] = "first_name";
$proto17["m_columns"][] = "last_name";
$proto17["m_columns"][] = "title";
$proto17["m_columns"][] = "group_id";
$proto17["m_columns"][] = "english_name";
$proto17["m_columns"][] = "phone_home";
$proto17["m_columns"][] = "phone_work";
$proto17["m_columns"][] = "phone_day";
$proto17["m_columns"][] = "phone_cell";
$proto17["m_columns"][] = "phone_evening";
$proto17["m_columns"][] = "fax";
$proto17["m_columns"][] = "email";
$proto17["m_columns"][] = "notes";
$proto17["m_columns"][] = "card_number";
$proto17["m_columns"][] = "card_expire_date";
$proto17["m_columns"][] = "country_id";
$proto17["m_columns"][] = "state_id";
$proto17["m_columns"][] = "city";
$proto17["m_columns"][] = "zip";
$proto17["m_columns"][] = "address1";
$proto17["m_columns"][] = "address2";
$proto17["m_columns"][] = "address3";
$proto17["m_columns"][] = "date_add";
$proto17["m_columns"][] = "date_last_login";
$proto17["m_columns"][] = "ip_add";
$proto17["m_columns"][] = "ip_update";
$proto17["m_columns"][] = "language_id";
$proto17["m_columns"][] = "image_url";
$proto17["m_columns"][] = "age_id";
$proto17["m_columns"][] = "gender_id";
$proto17["m_columns"][] = "education_id";
$proto17["m_columns"][] = "income_id";
$proto17["m_columns"][] = "user_SSN";
$proto17["m_columns"][] = "total_purchase";
$proto17["m_columns"][] = "tatal_sales";
$proto17["m_columns"][] = "template";
$proto17["m_columns"][] = "cw_task_id";
$proto17["m_columns"][] = "cw_TO_id";
$proto17["m_columns"][] = "label_print_now";
$proto17["m_columns"][] = "dept_group_id";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "`users`";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "users_code";
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
	"m_strName" => "income_id",
	"m_strTable" => "users",
	"m_srcTableName" => "users_code"
));

$proto20["m_column"]=$obj;
$proto20["m_bAsc"] = 1;
$proto20["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto20);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="users_code";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_users_code = createSqlQuery_users_code();


	
		;

					

$tdatausers_code[".sqlquery"] = $queryData_users_code;

$tableEvents["users_code"] = new eventsBase;
$tdatausers_code[".hasEvents"] = false;

?>