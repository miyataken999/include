<?php
require_once(getabspath("classes/cipherer.php"));




$tdata_raku_shouhinjyouhou_layout = array();
	$tdata_raku_shouhinjyouhou_layout[".truncateText"] = true;
	$tdata_raku_shouhinjyouhou_layout[".NumberOfChars"] = 80;
	$tdata_raku_shouhinjyouhou_layout[".ShortName"] = "_raku_shouhinjyouhou_layout";
	$tdata_raku_shouhinjyouhou_layout[".OwnerID"] = "";
	$tdata_raku_shouhinjyouhou_layout[".OriginalTable"] = "_raku_shouhinjyouhou_layout";

//	field labels
$fieldLabels_raku_shouhinjyouhou_layout = array();
$fieldToolTips_raku_shouhinjyouhou_layout = array();
$pageTitles_raku_shouhinjyouhou_layout = array();
$placeHolders_raku_shouhinjyouhou_layout = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabels_raku_shouhinjyouhou_layout["Japanese"] = array();
	$fieldToolTips_raku_shouhinjyouhou_layout["Japanese"] = array();
	$placeHolders_raku_shouhinjyouhou_layout["Japanese"] = array();
	$pageTitles_raku_shouhinjyouhou_layout["Japanese"] = array();
	$fieldLabels_raku_shouhinjyouhou_layout["Japanese"]["id"] = "Id";
	$fieldToolTips_raku_shouhinjyouhou_layout["Japanese"]["id"] = "";
	$placeHolders_raku_shouhinjyouhou_layout["Japanese"]["id"] = "";
	$fieldLabels_raku_shouhinjyouhou_layout["Japanese"]["name"] = "Name";
	$fieldToolTips_raku_shouhinjyouhou_layout["Japanese"]["name"] = "";
	$placeHolders_raku_shouhinjyouhou_layout["Japanese"]["name"] = "";
	$fieldLabels_raku_shouhinjyouhou_layout["Japanese"]["ms_id"] = "Ms Id";
	$fieldToolTips_raku_shouhinjyouhou_layout["Japanese"]["ms_id"] = "";
	$placeHolders_raku_shouhinjyouhou_layout["Japanese"]["ms_id"] = "";
	if (count($fieldToolTips_raku_shouhinjyouhou_layout["Japanese"]))
		$tdata_raku_shouhinjyouhou_layout[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabels_raku_shouhinjyouhou_layout[""] = array();
	$fieldToolTips_raku_shouhinjyouhou_layout[""] = array();
	$placeHolders_raku_shouhinjyouhou_layout[""] = array();
	$pageTitles_raku_shouhinjyouhou_layout[""] = array();
	$fieldLabels_raku_shouhinjyouhou_layout[""]["id"] = "Id";
	$fieldToolTips_raku_shouhinjyouhou_layout[""]["id"] = "";
	$placeHolders_raku_shouhinjyouhou_layout[""]["id"] = "";
	$fieldLabels_raku_shouhinjyouhou_layout[""]["name"] = "Name";
	$fieldToolTips_raku_shouhinjyouhou_layout[""]["name"] = "";
	$placeHolders_raku_shouhinjyouhou_layout[""]["name"] = "";
	$fieldLabels_raku_shouhinjyouhou_layout[""]["ms_id"] = "Ms Id";
	$fieldToolTips_raku_shouhinjyouhou_layout[""]["ms_id"] = "";
	$placeHolders_raku_shouhinjyouhou_layout[""]["ms_id"] = "";
	if (count($fieldToolTips_raku_shouhinjyouhou_layout[""]))
		$tdata_raku_shouhinjyouhou_layout[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabels_raku_shouhinjyouhou_layout["English"] = array();
	$fieldToolTips_raku_shouhinjyouhou_layout["English"] = array();
	$placeHolders_raku_shouhinjyouhou_layout["English"] = array();
	$pageTitles_raku_shouhinjyouhou_layout["English"] = array();
	$fieldLabels_raku_shouhinjyouhou_layout["English"]["id"] = "Id";
	$fieldToolTips_raku_shouhinjyouhou_layout["English"]["id"] = "";
	$placeHolders_raku_shouhinjyouhou_layout["English"]["id"] = "";
	$fieldLabels_raku_shouhinjyouhou_layout["English"]["name"] = "Name";
	$fieldToolTips_raku_shouhinjyouhou_layout["English"]["name"] = "";
	$placeHolders_raku_shouhinjyouhou_layout["English"]["name"] = "";
	$fieldLabels_raku_shouhinjyouhou_layout["English"]["ms_id"] = "Ms Id";
	$fieldToolTips_raku_shouhinjyouhou_layout["English"]["ms_id"] = "";
	$placeHolders_raku_shouhinjyouhou_layout["English"]["ms_id"] = "";
	if (count($fieldToolTips_raku_shouhinjyouhou_layout["English"]))
		$tdata_raku_shouhinjyouhou_layout[".isUseToolTips"] = true;
}


	$tdata_raku_shouhinjyouhou_layout[".NCSearch"] = true;



$tdata_raku_shouhinjyouhou_layout[".shortTableName"] = "_raku_shouhinjyouhou_layout";
$tdata_raku_shouhinjyouhou_layout[".nSecOptions"] = 0;
$tdata_raku_shouhinjyouhou_layout[".recsPerRowPrint"] = 1;
$tdata_raku_shouhinjyouhou_layout[".mainTableOwnerID"] = "";
$tdata_raku_shouhinjyouhou_layout[".moveNext"] = 1;
$tdata_raku_shouhinjyouhou_layout[".entityType"] = 1;

$tdata_raku_shouhinjyouhou_layout[".strOriginalTableName"] = "_raku_shouhinjyouhou_layout";

	



$tdata_raku_shouhinjyouhou_layout[".showAddInPopup"] = false;

$tdata_raku_shouhinjyouhou_layout[".showEditInPopup"] = false;

$tdata_raku_shouhinjyouhou_layout[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdata_raku_shouhinjyouhou_layout[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdata_raku_shouhinjyouhou_layout[".fieldsForRegister"] = array();

$tdata_raku_shouhinjyouhou_layout[".listAjax"] = false;

	$tdata_raku_shouhinjyouhou_layout[".audit"] = false;

	$tdata_raku_shouhinjyouhou_layout[".locking"] = false;

$tdata_raku_shouhinjyouhou_layout[".edit"] = true;
$tdata_raku_shouhinjyouhou_layout[".afterEditAction"] = 1;
$tdata_raku_shouhinjyouhou_layout[".closePopupAfterEdit"] = 1;
$tdata_raku_shouhinjyouhou_layout[".afterEditActionDetTable"] = "";

$tdata_raku_shouhinjyouhou_layout[".add"] = true;
$tdata_raku_shouhinjyouhou_layout[".afterAddAction"] = 1;
$tdata_raku_shouhinjyouhou_layout[".closePopupAfterAdd"] = 1;
$tdata_raku_shouhinjyouhou_layout[".afterAddActionDetTable"] = "";

$tdata_raku_shouhinjyouhou_layout[".list"] = true;



$tdata_raku_shouhinjyouhou_layout[".reorderRecordsByHeader"] = true;



$tdata_raku_shouhinjyouhou_layout[".view"] = true;

$tdata_raku_shouhinjyouhou_layout[".import"] = true;

$tdata_raku_shouhinjyouhou_layout[".exportTo"] = true;

$tdata_raku_shouhinjyouhou_layout[".printFriendly"] = true;

$tdata_raku_shouhinjyouhou_layout[".delete"] = true;

$tdata_raku_shouhinjyouhou_layout[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdata_raku_shouhinjyouhou_layout[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdata_raku_shouhinjyouhou_layout[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdata_raku_shouhinjyouhou_layout[".searchSaving"] = false;
//

$tdata_raku_shouhinjyouhou_layout[".showSearchPanel"] = true;
		$tdata_raku_shouhinjyouhou_layout[".flexibleSearch"] = true;

$tdata_raku_shouhinjyouhou_layout[".isUseAjaxSuggest"] = true;

$tdata_raku_shouhinjyouhou_layout[".rowHighlite"] = true;



																																																																																																																																																																																																																													

$tdata_raku_shouhinjyouhou_layout[".ajaxCodeSnippetAdded"] = false;

$tdata_raku_shouhinjyouhou_layout[".buttonsAdded"] = false;

$tdata_raku_shouhinjyouhou_layout[".addPageEvents"] = false;

// use timepicker for search panel
$tdata_raku_shouhinjyouhou_layout[".isUseTimeForSearch"] = false;





$tdata_raku_shouhinjyouhou_layout[".allSearchFields"] = array();
$tdata_raku_shouhinjyouhou_layout[".filterFields"] = array();
$tdata_raku_shouhinjyouhou_layout[".requiredSearchFields"] = array();

$tdata_raku_shouhinjyouhou_layout[".allSearchFields"][] = "id";
	$tdata_raku_shouhinjyouhou_layout[".allSearchFields"][] = "name";
	$tdata_raku_shouhinjyouhou_layout[".allSearchFields"][] = "ms_id";
	

$tdata_raku_shouhinjyouhou_layout[".googleLikeFields"] = array();
$tdata_raku_shouhinjyouhou_layout[".googleLikeFields"][] = "id";
$tdata_raku_shouhinjyouhou_layout[".googleLikeFields"][] = "name";
$tdata_raku_shouhinjyouhou_layout[".googleLikeFields"][] = "ms_id";


$tdata_raku_shouhinjyouhou_layout[".advSearchFields"] = array();
$tdata_raku_shouhinjyouhou_layout[".advSearchFields"][] = "id";
$tdata_raku_shouhinjyouhou_layout[".advSearchFields"][] = "name";
$tdata_raku_shouhinjyouhou_layout[".advSearchFields"][] = "ms_id";

$tdata_raku_shouhinjyouhou_layout[".tableType"] = "list";

$tdata_raku_shouhinjyouhou_layout[".printerPageOrientation"] = 0;
$tdata_raku_shouhinjyouhou_layout[".nPrinterPageScale"] = 100;

$tdata_raku_shouhinjyouhou_layout[".nPrinterSplitRecords"] = 40;

$tdata_raku_shouhinjyouhou_layout[".nPrinterPDFSplitRecords"] = 40;



$tdata_raku_shouhinjyouhou_layout[".geocodingEnabled"] = false;





$tdata_raku_shouhinjyouhou_layout[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdata_raku_shouhinjyouhou_layout[".pageSize"] = 20;

$tdata_raku_shouhinjyouhou_layout[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdata_raku_shouhinjyouhou_layout[".strOrderBy"] = $tstrOrderBy;

$tdata_raku_shouhinjyouhou_layout[".orderindexes"] = array();

$tdata_raku_shouhinjyouhou_layout[".sqlHead"] = "SELECT `id`,  	`name`,  	`ms_id`";
$tdata_raku_shouhinjyouhou_layout[".sqlFrom"] = "FROM `_raku_shouhinjyouhou_layout`";
$tdata_raku_shouhinjyouhou_layout[".sqlWhereExpr"] = "";
$tdata_raku_shouhinjyouhou_layout[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdata_raku_shouhinjyouhou_layout[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdata_raku_shouhinjyouhou_layout[".arrGroupsPerPage"] = $arrGPP;

$tdata_raku_shouhinjyouhou_layout[".highlightSearchResults"] = true;

$tableKeys_raku_shouhinjyouhou_layout = array();
$tableKeys_raku_shouhinjyouhou_layout[] = "ms_id";
$tdata_raku_shouhinjyouhou_layout[".Keys"] = $tableKeys_raku_shouhinjyouhou_layout;

$tdata_raku_shouhinjyouhou_layout[".listFields"] = array();
$tdata_raku_shouhinjyouhou_layout[".listFields"][] = "id";
$tdata_raku_shouhinjyouhou_layout[".listFields"][] = "name";
$tdata_raku_shouhinjyouhou_layout[".listFields"][] = "ms_id";

$tdata_raku_shouhinjyouhou_layout[".hideMobileList"] = array();


$tdata_raku_shouhinjyouhou_layout[".viewFields"] = array();
$tdata_raku_shouhinjyouhou_layout[".viewFields"][] = "id";
$tdata_raku_shouhinjyouhou_layout[".viewFields"][] = "name";
$tdata_raku_shouhinjyouhou_layout[".viewFields"][] = "ms_id";

$tdata_raku_shouhinjyouhou_layout[".addFields"] = array();
$tdata_raku_shouhinjyouhou_layout[".addFields"][] = "id";
$tdata_raku_shouhinjyouhou_layout[".addFields"][] = "name";

$tdata_raku_shouhinjyouhou_layout[".masterListFields"] = array();
$tdata_raku_shouhinjyouhou_layout[".masterListFields"][] = "id";
$tdata_raku_shouhinjyouhou_layout[".masterListFields"][] = "name";
$tdata_raku_shouhinjyouhou_layout[".masterListFields"][] = "ms_id";

$tdata_raku_shouhinjyouhou_layout[".inlineAddFields"] = array();
$tdata_raku_shouhinjyouhou_layout[".inlineAddFields"][] = "id";
$tdata_raku_shouhinjyouhou_layout[".inlineAddFields"][] = "name";

$tdata_raku_shouhinjyouhou_layout[".editFields"] = array();
$tdata_raku_shouhinjyouhou_layout[".editFields"][] = "id";
$tdata_raku_shouhinjyouhou_layout[".editFields"][] = "name";

$tdata_raku_shouhinjyouhou_layout[".inlineEditFields"] = array();
$tdata_raku_shouhinjyouhou_layout[".inlineEditFields"][] = "id";
$tdata_raku_shouhinjyouhou_layout[".inlineEditFields"][] = "name";

$tdata_raku_shouhinjyouhou_layout[".updateSelectedFields"] = array();
$tdata_raku_shouhinjyouhou_layout[".updateSelectedFields"][] = "id";
$tdata_raku_shouhinjyouhou_layout[".updateSelectedFields"][] = "name";


$tdata_raku_shouhinjyouhou_layout[".exportFields"] = array();
$tdata_raku_shouhinjyouhou_layout[".exportFields"][] = "id";
$tdata_raku_shouhinjyouhou_layout[".exportFields"][] = "name";
$tdata_raku_shouhinjyouhou_layout[".exportFields"][] = "ms_id";

$tdata_raku_shouhinjyouhou_layout[".importFields"] = array();
$tdata_raku_shouhinjyouhou_layout[".importFields"][] = "id";
$tdata_raku_shouhinjyouhou_layout[".importFields"][] = "name";
$tdata_raku_shouhinjyouhou_layout[".importFields"][] = "ms_id";

$tdata_raku_shouhinjyouhou_layout[".printFields"] = array();
$tdata_raku_shouhinjyouhou_layout[".printFields"][] = "id";
$tdata_raku_shouhinjyouhou_layout[".printFields"][] = "name";
$tdata_raku_shouhinjyouhou_layout[".printFields"][] = "ms_id";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "_raku_shouhinjyouhou_layout";
	$fdata["Label"] = GetFieldLabel("_raku_shouhinjyouhou_layout","id");
	$fdata["FieldType"] = 16;

	
	
	
			
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




	$tdata_raku_shouhinjyouhou_layout["id"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "_raku_shouhinjyouhou_layout";
	$fdata["Label"] = GetFieldLabel("_raku_shouhinjyouhou_layout","name");
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
			$edata["EditParams"].= " maxlength=32";

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




	$tdata_raku_shouhinjyouhou_layout["name"] = $fdata;
//	ms_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ms_id";
	$fdata["GoodName"] = "ms_id";
	$fdata["ownerTable"] = "_raku_shouhinjyouhou_layout";
	$fdata["Label"] = GetFieldLabel("_raku_shouhinjyouhou_layout","ms_id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ms_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`ms_id`";

	
	
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




	$tdata_raku_shouhinjyouhou_layout["ms_id"] = $fdata;


$tables_data["_raku_shouhinjyouhou_layout"]=&$tdata_raku_shouhinjyouhou_layout;
$field_labels["_raku_shouhinjyouhou_layout"] = &$fieldLabels_raku_shouhinjyouhou_layout;
$fieldToolTips["_raku_shouhinjyouhou_layout"] = &$fieldToolTips_raku_shouhinjyouhou_layout;
$placeHolders["_raku_shouhinjyouhou_layout"] = &$placeHolders_raku_shouhinjyouhou_layout;
$page_titles["_raku_shouhinjyouhou_layout"] = &$pageTitles_raku_shouhinjyouhou_layout;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["_raku_shouhinjyouhou_layout"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["_raku_shouhinjyouhou_layout"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery__raku_shouhinjyouhou_layout()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  	`name`,  	`ms_id`";
$proto0["m_strFrom"] = "FROM `_raku_shouhinjyouhou_layout`";
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
	"m_strTable" => "_raku_shouhinjyouhou_layout",
	"m_srcTableName" => "_raku_shouhinjyouhou_layout"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "_raku_shouhinjyouhou_layout";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "_raku_shouhinjyouhou_layout",
	"m_srcTableName" => "_raku_shouhinjyouhou_layout"
));

$proto8["m_sql"] = "`name`";
$proto8["m_srcTableName"] = "_raku_shouhinjyouhou_layout";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "ms_id",
	"m_strTable" => "_raku_shouhinjyouhou_layout",
	"m_srcTableName" => "_raku_shouhinjyouhou_layout"
));

$proto10["m_sql"] = "`ms_id`";
$proto10["m_srcTableName"] = "_raku_shouhinjyouhou_layout";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "_raku_shouhinjyouhou_layout";
$proto13["m_srcTableName"] = "_raku_shouhinjyouhou_layout";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "id";
$proto13["m_columns"][] = "name";
$proto13["m_columns"][] = "ms_id";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "`_raku_shouhinjyouhou_layout`";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "_raku_shouhinjyouhou_layout";
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
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="_raku_shouhinjyouhou_layout";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData__raku_shouhinjyouhou_layout = createSqlQuery__raku_shouhinjyouhou_layout();


	
		;

			

$tdata_raku_shouhinjyouhou_layout[".sqlquery"] = $queryData__raku_shouhinjyouhou_layout;

$tableEvents["_raku_shouhinjyouhou_layout"] = new eventsBase;
$tdata_raku_shouhinjyouhou_layout[".hasEvents"] = false;

?>