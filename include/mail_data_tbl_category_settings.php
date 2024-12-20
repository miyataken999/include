<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamail_data_tbl_category = array();
	$tdatamail_data_tbl_category[".truncateText"] = true;
	$tdatamail_data_tbl_category[".NumberOfChars"] = 80;
	$tdatamail_data_tbl_category[".ShortName"] = "mail_data_tbl_category";
	$tdatamail_data_tbl_category[".OwnerID"] = "";
	$tdatamail_data_tbl_category[".OriginalTable"] = "mail_data_tbl_category";

//	field labels
$fieldLabelsmail_data_tbl_category = array();
$fieldToolTipsmail_data_tbl_category = array();
$pageTitlesmail_data_tbl_category = array();
$placeHoldersmail_data_tbl_category = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmail_data_tbl_category["Japanese"] = array();
	$fieldToolTipsmail_data_tbl_category["Japanese"] = array();
	$placeHoldersmail_data_tbl_category["Japanese"] = array();
	$pageTitlesmail_data_tbl_category["Japanese"] = array();
	$fieldLabelsmail_data_tbl_category["Japanese"]["id"] = "Id";
	$fieldToolTipsmail_data_tbl_category["Japanese"]["id"] = "";
	$placeHoldersmail_data_tbl_category["Japanese"]["id"] = "";
	$fieldLabelsmail_data_tbl_category["Japanese"]["name"] = "Name";
	$fieldToolTipsmail_data_tbl_category["Japanese"]["name"] = "";
	$placeHoldersmail_data_tbl_category["Japanese"]["name"] = "";
	$fieldLabelsmail_data_tbl_category["Japanese"]["sort"] = "Sort";
	$fieldToolTipsmail_data_tbl_category["Japanese"]["sort"] = "";
	$placeHoldersmail_data_tbl_category["Japanese"]["sort"] = "";
	if (count($fieldToolTipsmail_data_tbl_category["Japanese"]))
		$tdatamail_data_tbl_category[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmail_data_tbl_category[""] = array();
	$fieldToolTipsmail_data_tbl_category[""] = array();
	$placeHoldersmail_data_tbl_category[""] = array();
	$pageTitlesmail_data_tbl_category[""] = array();
	$fieldLabelsmail_data_tbl_category[""]["id"] = "Id";
	$fieldToolTipsmail_data_tbl_category[""]["id"] = "";
	$placeHoldersmail_data_tbl_category[""]["id"] = "";
	$fieldLabelsmail_data_tbl_category[""]["name"] = "Name";
	$fieldToolTipsmail_data_tbl_category[""]["name"] = "";
	$placeHoldersmail_data_tbl_category[""]["name"] = "";
	$fieldLabelsmail_data_tbl_category[""]["sort"] = "Sort";
	$fieldToolTipsmail_data_tbl_category[""]["sort"] = "";
	$placeHoldersmail_data_tbl_category[""]["sort"] = "";
	if (count($fieldToolTipsmail_data_tbl_category[""]))
		$tdatamail_data_tbl_category[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmail_data_tbl_category["English"] = array();
	$fieldToolTipsmail_data_tbl_category["English"] = array();
	$placeHoldersmail_data_tbl_category["English"] = array();
	$pageTitlesmail_data_tbl_category["English"] = array();
	$fieldLabelsmail_data_tbl_category["English"]["id"] = "Id";
	$fieldToolTipsmail_data_tbl_category["English"]["id"] = "";
	$placeHoldersmail_data_tbl_category["English"]["id"] = "";
	$fieldLabelsmail_data_tbl_category["English"]["name"] = "Name";
	$fieldToolTipsmail_data_tbl_category["English"]["name"] = "";
	$placeHoldersmail_data_tbl_category["English"]["name"] = "";
	$fieldLabelsmail_data_tbl_category["English"]["sort"] = "Sort";
	$fieldToolTipsmail_data_tbl_category["English"]["sort"] = "";
	$placeHoldersmail_data_tbl_category["English"]["sort"] = "";
	if (count($fieldToolTipsmail_data_tbl_category["English"]))
		$tdatamail_data_tbl_category[".isUseToolTips"] = true;
}


	$tdatamail_data_tbl_category[".NCSearch"] = true;



$tdatamail_data_tbl_category[".shortTableName"] = "mail_data_tbl_category";
$tdatamail_data_tbl_category[".nSecOptions"] = 0;
$tdatamail_data_tbl_category[".recsPerRowPrint"] = 1;
$tdatamail_data_tbl_category[".mainTableOwnerID"] = "";
$tdatamail_data_tbl_category[".moveNext"] = 1;
$tdatamail_data_tbl_category[".entityType"] = 0;

$tdatamail_data_tbl_category[".strOriginalTableName"] = "mail_data_tbl_category";

	



$tdatamail_data_tbl_category[".showAddInPopup"] = false;

$tdatamail_data_tbl_category[".showEditInPopup"] = false;

$tdatamail_data_tbl_category[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamail_data_tbl_category[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamail_data_tbl_category[".fieldsForRegister"] = array();

$tdatamail_data_tbl_category[".listAjax"] = false;

	$tdatamail_data_tbl_category[".audit"] = true;

	$tdatamail_data_tbl_category[".locking"] = false;



$tdatamail_data_tbl_category[".list"] = true;

$tdatamail_data_tbl_category[".inlineEdit"] = true;


$tdatamail_data_tbl_category[".reorderRecordsByHeader"] = true;



$tdatamail_data_tbl_category[".inlineAdd"] = true;

$tdatamail_data_tbl_category[".import"] = true;

$tdatamail_data_tbl_category[".exportTo"] = true;


$tdatamail_data_tbl_category[".delete"] = true;

$tdatamail_data_tbl_category[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamail_data_tbl_category[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamail_data_tbl_category[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamail_data_tbl_category[".searchSaving"] = false;
//

$tdatamail_data_tbl_category[".showSearchPanel"] = true;
		$tdatamail_data_tbl_category[".flexibleSearch"] = true;

$tdatamail_data_tbl_category[".isUseAjaxSuggest"] = true;

$tdatamail_data_tbl_category[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatamail_data_tbl_category[".ajaxCodeSnippetAdded"] = false;

$tdatamail_data_tbl_category[".buttonsAdded"] = false;

$tdatamail_data_tbl_category[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamail_data_tbl_category[".isUseTimeForSearch"] = false;




$tdatamail_data_tbl_category[".detailsLinksOnList"] = "1";

$tdatamail_data_tbl_category[".allSearchFields"] = array();
$tdatamail_data_tbl_category[".filterFields"] = array();
$tdatamail_data_tbl_category[".requiredSearchFields"] = array();

$tdatamail_data_tbl_category[".allSearchFields"][] = "id";
	$tdatamail_data_tbl_category[".allSearchFields"][] = "name";
	$tdatamail_data_tbl_category[".allSearchFields"][] = "sort";
	

$tdatamail_data_tbl_category[".googleLikeFields"] = array();
$tdatamail_data_tbl_category[".googleLikeFields"][] = "id";
$tdatamail_data_tbl_category[".googleLikeFields"][] = "name";
$tdatamail_data_tbl_category[".googleLikeFields"][] = "sort";


$tdatamail_data_tbl_category[".advSearchFields"] = array();
$tdatamail_data_tbl_category[".advSearchFields"][] = "id";
$tdatamail_data_tbl_category[".advSearchFields"][] = "name";
$tdatamail_data_tbl_category[".advSearchFields"][] = "sort";

$tdatamail_data_tbl_category[".tableType"] = "list";

$tdatamail_data_tbl_category[".printerPageOrientation"] = 0;
$tdatamail_data_tbl_category[".nPrinterPageScale"] = 100;

$tdatamail_data_tbl_category[".nPrinterSplitRecords"] = 40;

$tdatamail_data_tbl_category[".nPrinterPDFSplitRecords"] = 40;



$tdatamail_data_tbl_category[".geocodingEnabled"] = false;





$tdatamail_data_tbl_category[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamail_data_tbl_category[".pageSize"] = 20;

$tdatamail_data_tbl_category[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `sort`";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamail_data_tbl_category[".strOrderBy"] = $tstrOrderBy;

$tdatamail_data_tbl_category[".orderindexes"] = array();
$tdatamail_data_tbl_category[".orderindexes"][] = array(3, (1 ? "ASC" : "DESC"), "`sort`");

$tdatamail_data_tbl_category[".sqlHead"] = "SELECT `id`,  `name`,  `sort`";
$tdatamail_data_tbl_category[".sqlFrom"] = "FROM `mail_data_tbl_category`";
$tdatamail_data_tbl_category[".sqlWhereExpr"] = "";
$tdatamail_data_tbl_category[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamail_data_tbl_category[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamail_data_tbl_category[".arrGroupsPerPage"] = $arrGPP;

$tdatamail_data_tbl_category[".highlightSearchResults"] = true;

$tableKeysmail_data_tbl_category = array();
$tableKeysmail_data_tbl_category[] = "id";
$tdatamail_data_tbl_category[".Keys"] = $tableKeysmail_data_tbl_category;

$tdatamail_data_tbl_category[".listFields"] = array();
$tdatamail_data_tbl_category[".listFields"][] = "id";
$tdatamail_data_tbl_category[".listFields"][] = "name";
$tdatamail_data_tbl_category[".listFields"][] = "sort";

$tdatamail_data_tbl_category[".hideMobileList"] = array();


$tdatamail_data_tbl_category[".viewFields"] = array();

$tdatamail_data_tbl_category[".addFields"] = array();

$tdatamail_data_tbl_category[".masterListFields"] = array();
$tdatamail_data_tbl_category[".masterListFields"][] = "id";
$tdatamail_data_tbl_category[".masterListFields"][] = "name";
$tdatamail_data_tbl_category[".masterListFields"][] = "sort";

$tdatamail_data_tbl_category[".inlineAddFields"] = array();
$tdatamail_data_tbl_category[".inlineAddFields"][] = "name";
$tdatamail_data_tbl_category[".inlineAddFields"][] = "sort";

$tdatamail_data_tbl_category[".editFields"] = array();

$tdatamail_data_tbl_category[".inlineEditFields"] = array();
$tdatamail_data_tbl_category[".inlineEditFields"][] = "name";
$tdatamail_data_tbl_category[".inlineEditFields"][] = "sort";

$tdatamail_data_tbl_category[".updateSelectedFields"] = array();


$tdatamail_data_tbl_category[".exportFields"] = array();
$tdatamail_data_tbl_category[".exportFields"][] = "id";
$tdatamail_data_tbl_category[".exportFields"][] = "name";
$tdatamail_data_tbl_category[".exportFields"][] = "sort";

$tdatamail_data_tbl_category[".importFields"] = array();
$tdatamail_data_tbl_category[".importFields"][] = "id";
$tdatamail_data_tbl_category[".importFields"][] = "name";
$tdatamail_data_tbl_category[".importFields"][] = "sort";

$tdatamail_data_tbl_category[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "mail_data_tbl_category";
	$fdata["Label"] = GetFieldLabel("mail_data_tbl_category","id");
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




	$tdatamail_data_tbl_category["id"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "mail_data_tbl_category";
	$fdata["Label"] = GetFieldLabel("mail_data_tbl_category","name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
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

	
	



		$edata["IsRequired"] = true;

	
	
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




	$tdatamail_data_tbl_category["name"] = $fdata;
//	sort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sort";
	$fdata["GoodName"] = "sort";
	$fdata["ownerTable"] = "mail_data_tbl_category";
	$fdata["Label"] = GetFieldLabel("mail_data_tbl_category","sort");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "sort";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`sort`";

	
	
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




	$tdatamail_data_tbl_category["sort"] = $fdata;


$tables_data["mail_data_tbl_category"]=&$tdatamail_data_tbl_category;
$field_labels["mail_data_tbl_category"] = &$fieldLabelsmail_data_tbl_category;
$fieldToolTips["mail_data_tbl_category"] = &$fieldToolTipsmail_data_tbl_category;
$placeHolders["mail_data_tbl_category"] = &$placeHoldersmail_data_tbl_category;
$page_titles["mail_data_tbl_category"] = &$pageTitlesmail_data_tbl_category;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mail_data_tbl_category"] = array();
//	mail_data_tbl_sub_category
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="mail_data_tbl_sub_category";
		$detailsParam["dOriginalTable"] = "mail_data_tbl_sub_category";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "mail_data_tbl_sub_category";
	$detailsParam["dCaptionTable"] = GetTableCaption("mail_data_tbl_sub_category");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

/*			$detailsParam["dispChildCount"] = "1";
*/
	$detailsParam["dispChildCount"] = "1";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 0;
		$detailsParam["previewOnView"] = 1;
		
	$detailsTablesData["mail_data_tbl_category"][$dIndex] = $detailsParam;

	
		$detailsTablesData["mail_data_tbl_category"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["mail_data_tbl_category"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["mail_data_tbl_category"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["mail_data_tbl_category"][$dIndex]["detailKeys"][]="category_id";

// tables which are master tables for current table (detail)
$masterTablesData["mail_data_tbl_category"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mail_data_tbl_category()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  `name`,  `sort`";
$proto0["m_strFrom"] = "FROM `mail_data_tbl_category`";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY `sort`";
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
	"m_strTable" => "mail_data_tbl_category",
	"m_srcTableName" => "mail_data_tbl_category"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "mail_data_tbl_category";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "mail_data_tbl_category",
	"m_srcTableName" => "mail_data_tbl_category"
));

$proto8["m_sql"] = "`name`";
$proto8["m_srcTableName"] = "mail_data_tbl_category";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "sort",
	"m_strTable" => "mail_data_tbl_category",
	"m_srcTableName" => "mail_data_tbl_category"
));

$proto10["m_sql"] = "`sort`";
$proto10["m_srcTableName"] = "mail_data_tbl_category";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "mail_data_tbl_category";
$proto13["m_srcTableName"] = "mail_data_tbl_category";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "id";
$proto13["m_columns"][] = "name";
$proto13["m_columns"][] = "sort";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "`mail_data_tbl_category`";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "mail_data_tbl_category";
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
												$proto16=array();
						$obj = new SQLField(array(
	"m_strName" => "sort",
	"m_strTable" => "mail_data_tbl_category",
	"m_srcTableName" => "mail_data_tbl_category"
));

$proto16["m_column"]=$obj;
$proto16["m_bAsc"] = 1;
$proto16["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto16);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="mail_data_tbl_category";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mail_data_tbl_category = createSqlQuery_mail_data_tbl_category();


	
		;

			

$tdatamail_data_tbl_category[".sqlquery"] = $queryData_mail_data_tbl_category;

$tableEvents["mail_data_tbl_category"] = new eventsBase;
$tdatamail_data_tbl_category[".hasEvents"] = false;

?>