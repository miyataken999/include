<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamst_freee_deal_status = array();
	$tdatamst_freee_deal_status[".truncateText"] = true;
	$tdatamst_freee_deal_status[".NumberOfChars"] = 80;
	$tdatamst_freee_deal_status[".ShortName"] = "mst_freee_deal_status";
	$tdatamst_freee_deal_status[".OwnerID"] = "";
	$tdatamst_freee_deal_status[".OriginalTable"] = "mst_freee_deal_status";

//	field labels
$fieldLabelsmst_freee_deal_status = array();
$fieldToolTipsmst_freee_deal_status = array();
$pageTitlesmst_freee_deal_status = array();
$placeHoldersmst_freee_deal_status = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmst_freee_deal_status["Japanese"] = array();
	$fieldToolTipsmst_freee_deal_status["Japanese"] = array();
	$placeHoldersmst_freee_deal_status["Japanese"] = array();
	$pageTitlesmst_freee_deal_status["Japanese"] = array();
	$fieldLabelsmst_freee_deal_status["Japanese"]["id"] = "Id";
	$fieldToolTipsmst_freee_deal_status["Japanese"]["id"] = "";
	$placeHoldersmst_freee_deal_status["Japanese"]["id"] = "";
	$fieldLabelsmst_freee_deal_status["Japanese"]["value"] = "Value";
	$fieldToolTipsmst_freee_deal_status["Japanese"]["value"] = "";
	$placeHoldersmst_freee_deal_status["Japanese"]["value"] = "";
	$fieldLabelsmst_freee_deal_status["Japanese"]["name"] = "Name";
	$fieldToolTipsmst_freee_deal_status["Japanese"]["name"] = "";
	$placeHoldersmst_freee_deal_status["Japanese"]["name"] = "";
	if (count($fieldToolTipsmst_freee_deal_status["Japanese"]))
		$tdatamst_freee_deal_status[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmst_freee_deal_status[""] = array();
	$fieldToolTipsmst_freee_deal_status[""] = array();
	$placeHoldersmst_freee_deal_status[""] = array();
	$pageTitlesmst_freee_deal_status[""] = array();
	$fieldLabelsmst_freee_deal_status[""]["id"] = "Id";
	$fieldToolTipsmst_freee_deal_status[""]["id"] = "";
	$placeHoldersmst_freee_deal_status[""]["id"] = "";
	$fieldLabelsmst_freee_deal_status[""]["value"] = "Value";
	$fieldToolTipsmst_freee_deal_status[""]["value"] = "";
	$placeHoldersmst_freee_deal_status[""]["value"] = "";
	$fieldLabelsmst_freee_deal_status[""]["name"] = "Name";
	$fieldToolTipsmst_freee_deal_status[""]["name"] = "";
	$placeHoldersmst_freee_deal_status[""]["name"] = "";
	if (count($fieldToolTipsmst_freee_deal_status[""]))
		$tdatamst_freee_deal_status[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmst_freee_deal_status["English"] = array();
	$fieldToolTipsmst_freee_deal_status["English"] = array();
	$placeHoldersmst_freee_deal_status["English"] = array();
	$pageTitlesmst_freee_deal_status["English"] = array();
	$fieldLabelsmst_freee_deal_status["English"]["id"] = "Id";
	$fieldToolTipsmst_freee_deal_status["English"]["id"] = "";
	$placeHoldersmst_freee_deal_status["English"]["id"] = "";
	$fieldLabelsmst_freee_deal_status["English"]["value"] = "Value";
	$fieldToolTipsmst_freee_deal_status["English"]["value"] = "";
	$placeHoldersmst_freee_deal_status["English"]["value"] = "";
	$fieldLabelsmst_freee_deal_status["English"]["name"] = "Name";
	$fieldToolTipsmst_freee_deal_status["English"]["name"] = "";
	$placeHoldersmst_freee_deal_status["English"]["name"] = "";
	if (count($fieldToolTipsmst_freee_deal_status["English"]))
		$tdatamst_freee_deal_status[".isUseToolTips"] = true;
}


	$tdatamst_freee_deal_status[".NCSearch"] = true;



$tdatamst_freee_deal_status[".shortTableName"] = "mst_freee_deal_status";
$tdatamst_freee_deal_status[".nSecOptions"] = 0;
$tdatamst_freee_deal_status[".recsPerRowPrint"] = 1;
$tdatamst_freee_deal_status[".mainTableOwnerID"] = "";
$tdatamst_freee_deal_status[".moveNext"] = 1;
$tdatamst_freee_deal_status[".entityType"] = 0;

$tdatamst_freee_deal_status[".strOriginalTableName"] = "mst_freee_deal_status";

	



$tdatamst_freee_deal_status[".showAddInPopup"] = false;

$tdatamst_freee_deal_status[".showEditInPopup"] = false;

$tdatamst_freee_deal_status[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamst_freee_deal_status[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamst_freee_deal_status[".fieldsForRegister"] = array();

$tdatamst_freee_deal_status[".listAjax"] = false;

	$tdatamst_freee_deal_status[".audit"] = false;

	$tdatamst_freee_deal_status[".locking"] = false;

$tdatamst_freee_deal_status[".edit"] = true;
$tdatamst_freee_deal_status[".afterEditAction"] = 1;
$tdatamst_freee_deal_status[".closePopupAfterEdit"] = 1;
$tdatamst_freee_deal_status[".afterEditActionDetTable"] = "";

$tdatamst_freee_deal_status[".add"] = true;
$tdatamst_freee_deal_status[".afterAddAction"] = 1;
$tdatamst_freee_deal_status[".closePopupAfterAdd"] = 1;
$tdatamst_freee_deal_status[".afterAddActionDetTable"] = "";

$tdatamst_freee_deal_status[".list"] = true;



$tdatamst_freee_deal_status[".reorderRecordsByHeader"] = true;



$tdatamst_freee_deal_status[".view"] = true;

$tdatamst_freee_deal_status[".import"] = true;

$tdatamst_freee_deal_status[".exportTo"] = true;

$tdatamst_freee_deal_status[".printFriendly"] = true;

$tdatamst_freee_deal_status[".delete"] = true;

$tdatamst_freee_deal_status[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamst_freee_deal_status[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamst_freee_deal_status[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamst_freee_deal_status[".searchSaving"] = false;
//

$tdatamst_freee_deal_status[".showSearchPanel"] = true;
		$tdatamst_freee_deal_status[".flexibleSearch"] = true;

$tdatamst_freee_deal_status[".isUseAjaxSuggest"] = true;

$tdatamst_freee_deal_status[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatamst_freee_deal_status[".ajaxCodeSnippetAdded"] = false;

$tdatamst_freee_deal_status[".buttonsAdded"] = false;

$tdatamst_freee_deal_status[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamst_freee_deal_status[".isUseTimeForSearch"] = false;





$tdatamst_freee_deal_status[".allSearchFields"] = array();
$tdatamst_freee_deal_status[".filterFields"] = array();
$tdatamst_freee_deal_status[".requiredSearchFields"] = array();

$tdatamst_freee_deal_status[".allSearchFields"][] = "id";
	$tdatamst_freee_deal_status[".allSearchFields"][] = "value";
	$tdatamst_freee_deal_status[".allSearchFields"][] = "name";
	

$tdatamst_freee_deal_status[".googleLikeFields"] = array();
$tdatamst_freee_deal_status[".googleLikeFields"][] = "id";
$tdatamst_freee_deal_status[".googleLikeFields"][] = "value";
$tdatamst_freee_deal_status[".googleLikeFields"][] = "name";


$tdatamst_freee_deal_status[".advSearchFields"] = array();
$tdatamst_freee_deal_status[".advSearchFields"][] = "id";
$tdatamst_freee_deal_status[".advSearchFields"][] = "value";
$tdatamst_freee_deal_status[".advSearchFields"][] = "name";

$tdatamst_freee_deal_status[".tableType"] = "list";

$tdatamst_freee_deal_status[".printerPageOrientation"] = 0;
$tdatamst_freee_deal_status[".nPrinterPageScale"] = 100;

$tdatamst_freee_deal_status[".nPrinterSplitRecords"] = 40;

$tdatamst_freee_deal_status[".nPrinterPDFSplitRecords"] = 40;



$tdatamst_freee_deal_status[".geocodingEnabled"] = false;





$tdatamst_freee_deal_status[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamst_freee_deal_status[".pageSize"] = 20;

$tdatamst_freee_deal_status[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamst_freee_deal_status[".strOrderBy"] = $tstrOrderBy;

$tdatamst_freee_deal_status[".orderindexes"] = array();

$tdatamst_freee_deal_status[".sqlHead"] = "SELECT `id`,  	`value`,  	`name`";
$tdatamst_freee_deal_status[".sqlFrom"] = "FROM `mst_freee_deal_status`";
$tdatamst_freee_deal_status[".sqlWhereExpr"] = "";
$tdatamst_freee_deal_status[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamst_freee_deal_status[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamst_freee_deal_status[".arrGroupsPerPage"] = $arrGPP;

$tdatamst_freee_deal_status[".highlightSearchResults"] = true;

$tableKeysmst_freee_deal_status = array();
$tableKeysmst_freee_deal_status[] = "id";
$tdatamst_freee_deal_status[".Keys"] = $tableKeysmst_freee_deal_status;

$tdatamst_freee_deal_status[".listFields"] = array();
$tdatamst_freee_deal_status[".listFields"][] = "id";
$tdatamst_freee_deal_status[".listFields"][] = "value";
$tdatamst_freee_deal_status[".listFields"][] = "name";

$tdatamst_freee_deal_status[".hideMobileList"] = array();


$tdatamst_freee_deal_status[".viewFields"] = array();
$tdatamst_freee_deal_status[".viewFields"][] = "id";
$tdatamst_freee_deal_status[".viewFields"][] = "value";
$tdatamst_freee_deal_status[".viewFields"][] = "name";

$tdatamst_freee_deal_status[".addFields"] = array();
$tdatamst_freee_deal_status[".addFields"][] = "value";
$tdatamst_freee_deal_status[".addFields"][] = "name";

$tdatamst_freee_deal_status[".masterListFields"] = array();
$tdatamst_freee_deal_status[".masterListFields"][] = "id";
$tdatamst_freee_deal_status[".masterListFields"][] = "value";
$tdatamst_freee_deal_status[".masterListFields"][] = "name";

$tdatamst_freee_deal_status[".inlineAddFields"] = array();
$tdatamst_freee_deal_status[".inlineAddFields"][] = "value";
$tdatamst_freee_deal_status[".inlineAddFields"][] = "name";

$tdatamst_freee_deal_status[".editFields"] = array();
$tdatamst_freee_deal_status[".editFields"][] = "value";
$tdatamst_freee_deal_status[".editFields"][] = "name";

$tdatamst_freee_deal_status[".inlineEditFields"] = array();
$tdatamst_freee_deal_status[".inlineEditFields"][] = "value";
$tdatamst_freee_deal_status[".inlineEditFields"][] = "name";

$tdatamst_freee_deal_status[".updateSelectedFields"] = array();
$tdatamst_freee_deal_status[".updateSelectedFields"][] = "value";
$tdatamst_freee_deal_status[".updateSelectedFields"][] = "name";


$tdatamst_freee_deal_status[".exportFields"] = array();
$tdatamst_freee_deal_status[".exportFields"][] = "id";
$tdatamst_freee_deal_status[".exportFields"][] = "value";
$tdatamst_freee_deal_status[".exportFields"][] = "name";

$tdatamst_freee_deal_status[".importFields"] = array();
$tdatamst_freee_deal_status[".importFields"][] = "id";
$tdatamst_freee_deal_status[".importFields"][] = "value";
$tdatamst_freee_deal_status[".importFields"][] = "name";

$tdatamst_freee_deal_status[".printFields"] = array();
$tdatamst_freee_deal_status[".printFields"][] = "id";
$tdatamst_freee_deal_status[".printFields"][] = "value";
$tdatamst_freee_deal_status[".printFields"][] = "name";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "mst_freee_deal_status";
	$fdata["Label"] = GetFieldLabel("mst_freee_deal_status","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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




	$tdatamst_freee_deal_status["id"] = $fdata;
//	value
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "value";
	$fdata["GoodName"] = "value";
	$fdata["ownerTable"] = "mst_freee_deal_status";
	$fdata["Label"] = GetFieldLabel("mst_freee_deal_status","value");
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

		$fdata["strField"] = "value";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`value`";

	
	
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
			$edata["EditParams"].= " maxlength=10";

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




	$tdatamst_freee_deal_status["value"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "mst_freee_deal_status";
	$fdata["Label"] = GetFieldLabel("mst_freee_deal_status","name");
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
			$edata["EditParams"].= " maxlength=10";

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




	$tdatamst_freee_deal_status["name"] = $fdata;


$tables_data["mst_freee_deal_status"]=&$tdatamst_freee_deal_status;
$field_labels["mst_freee_deal_status"] = &$fieldLabelsmst_freee_deal_status;
$fieldToolTips["mst_freee_deal_status"] = &$fieldToolTipsmst_freee_deal_status;
$placeHolders["mst_freee_deal_status"] = &$placeHoldersmst_freee_deal_status;
$page_titles["mst_freee_deal_status"] = &$pageTitlesmst_freee_deal_status;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mst_freee_deal_status"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mst_freee_deal_status"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mst_freee_deal_status()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  	`value`,  	`name`";
$proto0["m_strFrom"] = "FROM `mst_freee_deal_status`";
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
	"m_strTable" => "mst_freee_deal_status",
	"m_srcTableName" => "mst_freee_deal_status"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "mst_freee_deal_status";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "value",
	"m_strTable" => "mst_freee_deal_status",
	"m_srcTableName" => "mst_freee_deal_status"
));

$proto8["m_sql"] = "`value`";
$proto8["m_srcTableName"] = "mst_freee_deal_status";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "mst_freee_deal_status",
	"m_srcTableName" => "mst_freee_deal_status"
));

$proto10["m_sql"] = "`name`";
$proto10["m_srcTableName"] = "mst_freee_deal_status";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "mst_freee_deal_status";
$proto13["m_srcTableName"] = "mst_freee_deal_status";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "id";
$proto13["m_columns"][] = "value";
$proto13["m_columns"][] = "name";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "`mst_freee_deal_status`";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "mst_freee_deal_status";
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
$proto0["m_srcTableName"]="mst_freee_deal_status";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mst_freee_deal_status = createSqlQuery_mst_freee_deal_status();


	
		;

			

$tdatamst_freee_deal_status[".sqlquery"] = $queryData_mst_freee_deal_status;

$tableEvents["mst_freee_deal_status"] = new eventsBase;
$tdatamst_freee_deal_status[".hasEvents"] = false;

?>