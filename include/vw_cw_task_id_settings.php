<?php
require_once(getabspath("classes/cipherer.php"));




$tdatavw_cw_task_id = array();
	$tdatavw_cw_task_id[".truncateText"] = true;
	$tdatavw_cw_task_id[".NumberOfChars"] = 80;
	$tdatavw_cw_task_id[".ShortName"] = "vw_cw_task_id";
	$tdatavw_cw_task_id[".OwnerID"] = "";
	$tdatavw_cw_task_id[".OriginalTable"] = "vw_cw_task_id";

//	field labels
$fieldLabelsvw_cw_task_id = array();
$fieldToolTipsvw_cw_task_id = array();
$pageTitlesvw_cw_task_id = array();
$placeHoldersvw_cw_task_id = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsvw_cw_task_id["Japanese"] = array();
	$fieldToolTipsvw_cw_task_id["Japanese"] = array();
	$placeHoldersvw_cw_task_id["Japanese"] = array();
	$pageTitlesvw_cw_task_id["Japanese"] = array();
	$fieldLabelsvw_cw_task_id["Japanese"]["user_id"] = "User Id";
	$fieldToolTipsvw_cw_task_id["Japanese"]["user_id"] = "";
	$placeHoldersvw_cw_task_id["Japanese"]["user_id"] = "";
	$fieldLabelsvw_cw_task_id["Japanese"]["first_name"] = "First Name";
	$fieldToolTipsvw_cw_task_id["Japanese"]["first_name"] = "";
	$placeHoldersvw_cw_task_id["Japanese"]["first_name"] = "";
	$fieldLabelsvw_cw_task_id["Japanese"]["cw_task_id"] = "Cw Task Id";
	$fieldToolTipsvw_cw_task_id["Japanese"]["cw_task_id"] = "";
	$placeHoldersvw_cw_task_id["Japanese"]["cw_task_id"] = "";
	$fieldLabelsvw_cw_task_id["Japanese"]["cw_TO_id"] = "Cw TO Id";
	$fieldToolTipsvw_cw_task_id["Japanese"]["cw_TO_id"] = "";
	$placeHoldersvw_cw_task_id["Japanese"]["cw_TO_id"] = "";
	if (count($fieldToolTipsvw_cw_task_id["Japanese"]))
		$tdatavw_cw_task_id[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsvw_cw_task_id[""] = array();
	$fieldToolTipsvw_cw_task_id[""] = array();
	$placeHoldersvw_cw_task_id[""] = array();
	$pageTitlesvw_cw_task_id[""] = array();
	$fieldLabelsvw_cw_task_id[""]["user_id"] = "User Id";
	$fieldToolTipsvw_cw_task_id[""]["user_id"] = "";
	$placeHoldersvw_cw_task_id[""]["user_id"] = "";
	$fieldLabelsvw_cw_task_id[""]["first_name"] = "First Name";
	$fieldToolTipsvw_cw_task_id[""]["first_name"] = "";
	$placeHoldersvw_cw_task_id[""]["first_name"] = "";
	$fieldLabelsvw_cw_task_id[""]["cw_task_id"] = "Cw Task Id";
	$fieldToolTipsvw_cw_task_id[""]["cw_task_id"] = "";
	$placeHoldersvw_cw_task_id[""]["cw_task_id"] = "";
	$fieldLabelsvw_cw_task_id[""]["cw_TO_id"] = "Cw TO Id";
	$fieldToolTipsvw_cw_task_id[""]["cw_TO_id"] = "";
	$placeHoldersvw_cw_task_id[""]["cw_TO_id"] = "";
	if (count($fieldToolTipsvw_cw_task_id[""]))
		$tdatavw_cw_task_id[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsvw_cw_task_id["English"] = array();
	$fieldToolTipsvw_cw_task_id["English"] = array();
	$placeHoldersvw_cw_task_id["English"] = array();
	$pageTitlesvw_cw_task_id["English"] = array();
	$fieldLabelsvw_cw_task_id["English"]["user_id"] = "User Id";
	$fieldToolTipsvw_cw_task_id["English"]["user_id"] = "";
	$placeHoldersvw_cw_task_id["English"]["user_id"] = "";
	$fieldLabelsvw_cw_task_id["English"]["first_name"] = "First Name";
	$fieldToolTipsvw_cw_task_id["English"]["first_name"] = "";
	$placeHoldersvw_cw_task_id["English"]["first_name"] = "";
	$fieldLabelsvw_cw_task_id["English"]["cw_task_id"] = "Cw Task Id";
	$fieldToolTipsvw_cw_task_id["English"]["cw_task_id"] = "";
	$placeHoldersvw_cw_task_id["English"]["cw_task_id"] = "";
	$fieldLabelsvw_cw_task_id["English"]["cw_TO_id"] = "Cw TO Id";
	$fieldToolTipsvw_cw_task_id["English"]["cw_TO_id"] = "";
	$placeHoldersvw_cw_task_id["English"]["cw_TO_id"] = "";
	if (count($fieldToolTipsvw_cw_task_id["English"]))
		$tdatavw_cw_task_id[".isUseToolTips"] = true;
}


	$tdatavw_cw_task_id[".NCSearch"] = true;



$tdatavw_cw_task_id[".shortTableName"] = "vw_cw_task_id";
$tdatavw_cw_task_id[".nSecOptions"] = 0;
$tdatavw_cw_task_id[".recsPerRowPrint"] = 1;
$tdatavw_cw_task_id[".mainTableOwnerID"] = "";
$tdatavw_cw_task_id[".moveNext"] = 1;
$tdatavw_cw_task_id[".entityType"] = 0;

$tdatavw_cw_task_id[".strOriginalTableName"] = "vw_cw_task_id";

	



$tdatavw_cw_task_id[".showAddInPopup"] = false;

$tdatavw_cw_task_id[".showEditInPopup"] = false;

$tdatavw_cw_task_id[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatavw_cw_task_id[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatavw_cw_task_id[".fieldsForRegister"] = array();

$tdatavw_cw_task_id[".listAjax"] = false;

	$tdatavw_cw_task_id[".audit"] = true;

	$tdatavw_cw_task_id[".locking"] = false;



$tdatavw_cw_task_id[".list"] = true;



$tdatavw_cw_task_id[".reorderRecordsByHeader"] = true;








$tdatavw_cw_task_id[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatavw_cw_task_id[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatavw_cw_task_id[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatavw_cw_task_id[".searchSaving"] = false;
//

$tdatavw_cw_task_id[".showSearchPanel"] = true;
		$tdatavw_cw_task_id[".flexibleSearch"] = true;

$tdatavw_cw_task_id[".isUseAjaxSuggest"] = true;

$tdatavw_cw_task_id[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatavw_cw_task_id[".ajaxCodeSnippetAdded"] = false;

$tdatavw_cw_task_id[".buttonsAdded"] = false;

$tdatavw_cw_task_id[".addPageEvents"] = false;

// use timepicker for search panel
$tdatavw_cw_task_id[".isUseTimeForSearch"] = false;





$tdatavw_cw_task_id[".allSearchFields"] = array();
$tdatavw_cw_task_id[".filterFields"] = array();
$tdatavw_cw_task_id[".requiredSearchFields"] = array();

$tdatavw_cw_task_id[".allSearchFields"][] = "user_id";
	$tdatavw_cw_task_id[".allSearchFields"][] = "first_name";
	$tdatavw_cw_task_id[".allSearchFields"][] = "cw_TO_id";
	$tdatavw_cw_task_id[".allSearchFields"][] = "cw_task_id";
	

$tdatavw_cw_task_id[".googleLikeFields"] = array();
$tdatavw_cw_task_id[".googleLikeFields"][] = "user_id";
$tdatavw_cw_task_id[".googleLikeFields"][] = "first_name";
$tdatavw_cw_task_id[".googleLikeFields"][] = "cw_TO_id";
$tdatavw_cw_task_id[".googleLikeFields"][] = "cw_task_id";


$tdatavw_cw_task_id[".advSearchFields"] = array();
$tdatavw_cw_task_id[".advSearchFields"][] = "user_id";
$tdatavw_cw_task_id[".advSearchFields"][] = "first_name";
$tdatavw_cw_task_id[".advSearchFields"][] = "cw_TO_id";
$tdatavw_cw_task_id[".advSearchFields"][] = "cw_task_id";

$tdatavw_cw_task_id[".tableType"] = "list";

$tdatavw_cw_task_id[".printerPageOrientation"] = 0;
$tdatavw_cw_task_id[".nPrinterPageScale"] = 100;

$tdatavw_cw_task_id[".nPrinterSplitRecords"] = 40;

$tdatavw_cw_task_id[".nPrinterPDFSplitRecords"] = 40;



$tdatavw_cw_task_id[".geocodingEnabled"] = false;





$tdatavw_cw_task_id[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatavw_cw_task_id[".pageSize"] = 20;

$tdatavw_cw_task_id[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatavw_cw_task_id[".strOrderBy"] = $tstrOrderBy;

$tdatavw_cw_task_id[".orderindexes"] = array();

$tdatavw_cw_task_id[".sqlHead"] = "SELECT `user_id`,  	`first_name`,  	`cw_TO_id`,  	`cw_task_id`";
$tdatavw_cw_task_id[".sqlFrom"] = "FROM `vw_cw_task_id`";
$tdatavw_cw_task_id[".sqlWhereExpr"] = "";
$tdatavw_cw_task_id[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatavw_cw_task_id[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatavw_cw_task_id[".arrGroupsPerPage"] = $arrGPP;

$tdatavw_cw_task_id[".highlightSearchResults"] = true;

$tableKeysvw_cw_task_id = array();
$tdatavw_cw_task_id[".Keys"] = $tableKeysvw_cw_task_id;

$tdatavw_cw_task_id[".listFields"] = array();
$tdatavw_cw_task_id[".listFields"][] = "cw_TO_id";
$tdatavw_cw_task_id[".listFields"][] = "user_id";
$tdatavw_cw_task_id[".listFields"][] = "first_name";
$tdatavw_cw_task_id[".listFields"][] = "cw_task_id";

$tdatavw_cw_task_id[".hideMobileList"] = array();


$tdatavw_cw_task_id[".viewFields"] = array();
$tdatavw_cw_task_id[".viewFields"][] = "cw_TO_id";

$tdatavw_cw_task_id[".addFields"] = array();
$tdatavw_cw_task_id[".addFields"][] = "cw_TO_id";

$tdatavw_cw_task_id[".masterListFields"] = array();
$tdatavw_cw_task_id[".masterListFields"][] = "user_id";
$tdatavw_cw_task_id[".masterListFields"][] = "first_name";
$tdatavw_cw_task_id[".masterListFields"][] = "cw_TO_id";
$tdatavw_cw_task_id[".masterListFields"][] = "cw_task_id";

$tdatavw_cw_task_id[".inlineAddFields"] = array();
$tdatavw_cw_task_id[".inlineAddFields"][] = "cw_TO_id";

$tdatavw_cw_task_id[".editFields"] = array();
$tdatavw_cw_task_id[".editFields"][] = "cw_TO_id";

$tdatavw_cw_task_id[".inlineEditFields"] = array();
$tdatavw_cw_task_id[".inlineEditFields"][] = "cw_TO_id";

$tdatavw_cw_task_id[".updateSelectedFields"] = array();
$tdatavw_cw_task_id[".updateSelectedFields"][] = "cw_TO_id";


$tdatavw_cw_task_id[".exportFields"] = array();
$tdatavw_cw_task_id[".exportFields"][] = "cw_TO_id";

$tdatavw_cw_task_id[".importFields"] = array();
$tdatavw_cw_task_id[".importFields"][] = "cw_TO_id";

$tdatavw_cw_task_id[".printFields"] = array();
$tdatavw_cw_task_id[".printFields"][] = "cw_TO_id";

//	user_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "user_id";
	$fdata["GoodName"] = "user_id";
	$fdata["ownerTable"] = "vw_cw_task_id";
	$fdata["Label"] = GetFieldLabel("vw_cw_task_id","user_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatavw_cw_task_id["user_id"] = $fdata;
//	first_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "first_name";
	$fdata["GoodName"] = "first_name";
	$fdata["ownerTable"] = "vw_cw_task_id";
	$fdata["Label"] = GetFieldLabel("vw_cw_task_id","first_name");
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




	$tdatavw_cw_task_id["first_name"] = $fdata;
//	cw_TO_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "cw_TO_id";
	$fdata["GoodName"] = "cw_TO_id";
	$fdata["ownerTable"] = "vw_cw_task_id";
	$fdata["Label"] = GetFieldLabel("vw_cw_task_id","cw_TO_id");
	$fdata["FieldType"] = 3;

	
	
	
			
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatavw_cw_task_id["cw_TO_id"] = $fdata;
//	cw_task_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "cw_task_id";
	$fdata["GoodName"] = "cw_task_id";
	$fdata["ownerTable"] = "vw_cw_task_id";
	$fdata["Label"] = GetFieldLabel("vw_cw_task_id","cw_task_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatavw_cw_task_id["cw_task_id"] = $fdata;


$tables_data["vw_cw_task_id"]=&$tdatavw_cw_task_id;
$field_labels["vw_cw_task_id"] = &$fieldLabelsvw_cw_task_id;
$fieldToolTips["vw_cw_task_id"] = &$fieldToolTipsvw_cw_task_id;
$placeHolders["vw_cw_task_id"] = &$placeHoldersvw_cw_task_id;
$page_titles["vw_cw_task_id"] = &$pageTitlesvw_cw_task_id;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["vw_cw_task_id"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["vw_cw_task_id"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_vw_cw_task_id()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`user_id`,  	`first_name`,  	`cw_TO_id`,  	`cw_task_id`";
$proto0["m_strFrom"] = "FROM `vw_cw_task_id`";
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
	"m_strName" => "user_id",
	"m_strTable" => "vw_cw_task_id",
	"m_srcTableName" => "vw_cw_task_id"
));

$proto6["m_sql"] = "`user_id`";
$proto6["m_srcTableName"] = "vw_cw_task_id";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "first_name",
	"m_strTable" => "vw_cw_task_id",
	"m_srcTableName" => "vw_cw_task_id"
));

$proto8["m_sql"] = "`first_name`";
$proto8["m_srcTableName"] = "vw_cw_task_id";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "cw_TO_id",
	"m_strTable" => "vw_cw_task_id",
	"m_srcTableName" => "vw_cw_task_id"
));

$proto10["m_sql"] = "`cw_TO_id`";
$proto10["m_srcTableName"] = "vw_cw_task_id";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "cw_task_id",
	"m_strTable" => "vw_cw_task_id",
	"m_srcTableName" => "vw_cw_task_id"
));

$proto12["m_sql"] = "`cw_task_id`";
$proto12["m_srcTableName"] = "vw_cw_task_id";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "vw_cw_task_id";
$proto15["m_srcTableName"] = "vw_cw_task_id";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "user_id";
$proto15["m_columns"][] = "first_name";
$proto15["m_columns"][] = "cw_TO_id";
$proto15["m_columns"][] = "cw_task_id";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "`vw_cw_task_id`";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "vw_cw_task_id";
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
$proto0["m_srcTableName"]="vw_cw_task_id";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_vw_cw_task_id = createSqlQuery_vw_cw_task_id();


	
		;

				

$tdatavw_cw_task_id[".sqlquery"] = $queryData_vw_cw_task_id;

$tableEvents["vw_cw_task_id"] = new eventsBase;
$tdatavw_cw_task_id[".hasEvents"] = false;

?>