<?php
require_once(getabspath("classes/cipherer.php"));




$tdatafreee_PLBS_by_day = array();
	$tdatafreee_PLBS_by_day[".truncateText"] = true;
	$tdatafreee_PLBS_by_day[".NumberOfChars"] = 80;
	$tdatafreee_PLBS_by_day[".ShortName"] = "freee_PLBS_by_day";
	$tdatafreee_PLBS_by_day[".OwnerID"] = "";
	$tdatafreee_PLBS_by_day[".OriginalTable"] = "freee_PLBS_by_day";

//	field labels
$fieldLabelsfreee_PLBS_by_day = array();
$fieldToolTipsfreee_PLBS_by_day = array();
$pageTitlesfreee_PLBS_by_day = array();
$placeHoldersfreee_PLBS_by_day = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsfreee_PLBS_by_day["Japanese"] = array();
	$fieldToolTipsfreee_PLBS_by_day["Japanese"] = array();
	$placeHoldersfreee_PLBS_by_day["Japanese"] = array();
	$pageTitlesfreee_PLBS_by_day["Japanese"] = array();
	$fieldLabelsfreee_PLBS_by_day["Japanese"]["id"] = "Id";
	$fieldToolTipsfreee_PLBS_by_day["Japanese"]["id"] = "";
	$placeHoldersfreee_PLBS_by_day["Japanese"]["id"] = "";
	$fieldLabelsfreee_PLBS_by_day["Japanese"]["date"] = "Date";
	$fieldToolTipsfreee_PLBS_by_day["Japanese"]["date"] = "";
	$placeHoldersfreee_PLBS_by_day["Japanese"]["date"] = "";
	$fieldLabelsfreee_PLBS_by_day["Japanese"]["created_at"] = "Created At";
	$fieldToolTipsfreee_PLBS_by_day["Japanese"]["created_at"] = "";
	$placeHoldersfreee_PLBS_by_day["Japanese"]["created_at"] = "";
	$fieldLabelsfreee_PLBS_by_day["Japanese"]["updated_at"] = "Updated At";
	$fieldToolTipsfreee_PLBS_by_day["Japanese"]["updated_at"] = "";
	$placeHoldersfreee_PLBS_by_day["Japanese"]["updated_at"] = "";
	if (count($fieldToolTipsfreee_PLBS_by_day["Japanese"]))
		$tdatafreee_PLBS_by_day[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsfreee_PLBS_by_day[""] = array();
	$fieldToolTipsfreee_PLBS_by_day[""] = array();
	$placeHoldersfreee_PLBS_by_day[""] = array();
	$pageTitlesfreee_PLBS_by_day[""] = array();
	$fieldLabelsfreee_PLBS_by_day[""]["id"] = "Id";
	$fieldToolTipsfreee_PLBS_by_day[""]["id"] = "";
	$placeHoldersfreee_PLBS_by_day[""]["id"] = "";
	$fieldLabelsfreee_PLBS_by_day[""]["date"] = "Date";
	$fieldToolTipsfreee_PLBS_by_day[""]["date"] = "";
	$placeHoldersfreee_PLBS_by_day[""]["date"] = "";
	$fieldLabelsfreee_PLBS_by_day[""]["created_at"] = "Created At";
	$fieldToolTipsfreee_PLBS_by_day[""]["created_at"] = "";
	$placeHoldersfreee_PLBS_by_day[""]["created_at"] = "";
	$fieldLabelsfreee_PLBS_by_day[""]["updated_at"] = "Updated At";
	$fieldToolTipsfreee_PLBS_by_day[""]["updated_at"] = "";
	$placeHoldersfreee_PLBS_by_day[""]["updated_at"] = "";
	if (count($fieldToolTipsfreee_PLBS_by_day[""]))
		$tdatafreee_PLBS_by_day[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsfreee_PLBS_by_day["English"] = array();
	$fieldToolTipsfreee_PLBS_by_day["English"] = array();
	$placeHoldersfreee_PLBS_by_day["English"] = array();
	$pageTitlesfreee_PLBS_by_day["English"] = array();
	$fieldLabelsfreee_PLBS_by_day["English"]["id"] = "Id";
	$fieldToolTipsfreee_PLBS_by_day["English"]["id"] = "";
	$placeHoldersfreee_PLBS_by_day["English"]["id"] = "";
	$fieldLabelsfreee_PLBS_by_day["English"]["date"] = "Date";
	$fieldToolTipsfreee_PLBS_by_day["English"]["date"] = "";
	$placeHoldersfreee_PLBS_by_day["English"]["date"] = "";
	$fieldLabelsfreee_PLBS_by_day["English"]["created_at"] = "Created At";
	$fieldToolTipsfreee_PLBS_by_day["English"]["created_at"] = "";
	$placeHoldersfreee_PLBS_by_day["English"]["created_at"] = "";
	$fieldLabelsfreee_PLBS_by_day["English"]["updated_at"] = "Updated At";
	$fieldToolTipsfreee_PLBS_by_day["English"]["updated_at"] = "";
	$placeHoldersfreee_PLBS_by_day["English"]["updated_at"] = "";
	if (count($fieldToolTipsfreee_PLBS_by_day["English"]))
		$tdatafreee_PLBS_by_day[".isUseToolTips"] = true;
}


	$tdatafreee_PLBS_by_day[".NCSearch"] = true;



$tdatafreee_PLBS_by_day[".shortTableName"] = "freee_PLBS_by_day";
$tdatafreee_PLBS_by_day[".nSecOptions"] = 0;
$tdatafreee_PLBS_by_day[".recsPerRowPrint"] = 1;
$tdatafreee_PLBS_by_day[".mainTableOwnerID"] = "";
$tdatafreee_PLBS_by_day[".moveNext"] = 1;
$tdatafreee_PLBS_by_day[".entityType"] = 0;

$tdatafreee_PLBS_by_day[".strOriginalTableName"] = "freee_PLBS_by_day";

	



$tdatafreee_PLBS_by_day[".showAddInPopup"] = false;

$tdatafreee_PLBS_by_day[".showEditInPopup"] = false;

$tdatafreee_PLBS_by_day[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatafreee_PLBS_by_day[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatafreee_PLBS_by_day[".fieldsForRegister"] = array();

$tdatafreee_PLBS_by_day[".listAjax"] = false;

	$tdatafreee_PLBS_by_day[".audit"] = false;

	$tdatafreee_PLBS_by_day[".locking"] = false;



$tdatafreee_PLBS_by_day[".list"] = true;



$tdatafreee_PLBS_by_day[".reorderRecordsByHeader"] = true;





$tdatafreee_PLBS_by_day[".exportTo"] = true;



$tdatafreee_PLBS_by_day[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatafreee_PLBS_by_day[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatafreee_PLBS_by_day[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatafreee_PLBS_by_day[".searchSaving"] = false;
//

$tdatafreee_PLBS_by_day[".showSearchPanel"] = true;
		$tdatafreee_PLBS_by_day[".flexibleSearch"] = true;

$tdatafreee_PLBS_by_day[".isUseAjaxSuggest"] = true;

$tdatafreee_PLBS_by_day[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatafreee_PLBS_by_day[".ajaxCodeSnippetAdded"] = false;

$tdatafreee_PLBS_by_day[".buttonsAdded"] = false;

$tdatafreee_PLBS_by_day[".addPageEvents"] = false;

// use timepicker for search panel
$tdatafreee_PLBS_by_day[".isUseTimeForSearch"] = false;




$tdatafreee_PLBS_by_day[".detailsLinksOnList"] = "1";

$tdatafreee_PLBS_by_day[".allSearchFields"] = array();
$tdatafreee_PLBS_by_day[".filterFields"] = array();
$tdatafreee_PLBS_by_day[".requiredSearchFields"] = array();

$tdatafreee_PLBS_by_day[".allSearchFields"][] = "id";
	$tdatafreee_PLBS_by_day[".allSearchFields"][] = "date";
	$tdatafreee_PLBS_by_day[".allSearchFields"][] = "created_at";
	$tdatafreee_PLBS_by_day[".allSearchFields"][] = "updated_at";
	

$tdatafreee_PLBS_by_day[".googleLikeFields"] = array();
$tdatafreee_PLBS_by_day[".googleLikeFields"][] = "id";
$tdatafreee_PLBS_by_day[".googleLikeFields"][] = "date";
$tdatafreee_PLBS_by_day[".googleLikeFields"][] = "created_at";
$tdatafreee_PLBS_by_day[".googleLikeFields"][] = "updated_at";


$tdatafreee_PLBS_by_day[".advSearchFields"] = array();
$tdatafreee_PLBS_by_day[".advSearchFields"][] = "id";
$tdatafreee_PLBS_by_day[".advSearchFields"][] = "date";
$tdatafreee_PLBS_by_day[".advSearchFields"][] = "created_at";
$tdatafreee_PLBS_by_day[".advSearchFields"][] = "updated_at";

$tdatafreee_PLBS_by_day[".tableType"] = "list";

$tdatafreee_PLBS_by_day[".printerPageOrientation"] = 0;
$tdatafreee_PLBS_by_day[".nPrinterPageScale"] = 100;

$tdatafreee_PLBS_by_day[".nPrinterSplitRecords"] = 40;

$tdatafreee_PLBS_by_day[".nPrinterPDFSplitRecords"] = 40;



$tdatafreee_PLBS_by_day[".geocodingEnabled"] = false;





$tdatafreee_PLBS_by_day[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatafreee_PLBS_by_day[".pageSize"] = 100;

$tdatafreee_PLBS_by_day[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `date` DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatafreee_PLBS_by_day[".strOrderBy"] = $tstrOrderBy;

$tdatafreee_PLBS_by_day[".orderindexes"] = array();
$tdatafreee_PLBS_by_day[".orderindexes"][] = array(2, (0 ? "ASC" : "DESC"), "`date`");

$tdatafreee_PLBS_by_day[".sqlHead"] = "SELECT `id`,  `date`,  `created_at`,  `updated_at`";
$tdatafreee_PLBS_by_day[".sqlFrom"] = "FROM `freee_PLBS_by_day`";
$tdatafreee_PLBS_by_day[".sqlWhereExpr"] = "";
$tdatafreee_PLBS_by_day[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatafreee_PLBS_by_day[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatafreee_PLBS_by_day[".arrGroupsPerPage"] = $arrGPP;

$tdatafreee_PLBS_by_day[".highlightSearchResults"] = true;

$tableKeysfreee_PLBS_by_day = array();
$tableKeysfreee_PLBS_by_day[] = "id";
$tdatafreee_PLBS_by_day[".Keys"] = $tableKeysfreee_PLBS_by_day;

$tdatafreee_PLBS_by_day[".listFields"] = array();
$tdatafreee_PLBS_by_day[".listFields"][] = "id";
$tdatafreee_PLBS_by_day[".listFields"][] = "date";
$tdatafreee_PLBS_by_day[".listFields"][] = "created_at";
$tdatafreee_PLBS_by_day[".listFields"][] = "updated_at";

$tdatafreee_PLBS_by_day[".hideMobileList"] = array();


$tdatafreee_PLBS_by_day[".viewFields"] = array();

$tdatafreee_PLBS_by_day[".addFields"] = array();

$tdatafreee_PLBS_by_day[".masterListFields"] = array();
$tdatafreee_PLBS_by_day[".masterListFields"][] = "id";
$tdatafreee_PLBS_by_day[".masterListFields"][] = "date";
$tdatafreee_PLBS_by_day[".masterListFields"][] = "created_at";
$tdatafreee_PLBS_by_day[".masterListFields"][] = "updated_at";

$tdatafreee_PLBS_by_day[".inlineAddFields"] = array();

$tdatafreee_PLBS_by_day[".editFields"] = array();

$tdatafreee_PLBS_by_day[".inlineEditFields"] = array();

$tdatafreee_PLBS_by_day[".updateSelectedFields"] = array();


$tdatafreee_PLBS_by_day[".exportFields"] = array();
$tdatafreee_PLBS_by_day[".exportFields"][] = "id";
$tdatafreee_PLBS_by_day[".exportFields"][] = "date";
$tdatafreee_PLBS_by_day[".exportFields"][] = "created_at";
$tdatafreee_PLBS_by_day[".exportFields"][] = "updated_at";

$tdatafreee_PLBS_by_day[".importFields"] = array();

$tdatafreee_PLBS_by_day[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "freee_PLBS_by_day";
	$fdata["Label"] = GetFieldLabel("freee_PLBS_by_day","id");
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




	$tdatafreee_PLBS_by_day["id"] = $fdata;
//	date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "date";
	$fdata["GoodName"] = "date";
	$fdata["ownerTable"] = "freee_PLBS_by_day";
	$fdata["Label"] = GetFieldLabel("freee_PLBS_by_day","date");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`date`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
	



	
	
	
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




	$tdatafreee_PLBS_by_day["date"] = $fdata;
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "freee_PLBS_by_day";
	$fdata["Label"] = GetFieldLabel("freee_PLBS_by_day","created_at");
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

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
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




	$tdatafreee_PLBS_by_day["created_at"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "freee_PLBS_by_day";
	$fdata["Label"] = GetFieldLabel("freee_PLBS_by_day","updated_at");
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

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
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




	$tdatafreee_PLBS_by_day["updated_at"] = $fdata;


$tables_data["freee_PLBS_by_day"]=&$tdatafreee_PLBS_by_day;
$field_labels["freee_PLBS_by_day"] = &$fieldLabelsfreee_PLBS_by_day;
$fieldToolTips["freee_PLBS_by_day"] = &$fieldToolTipsfreee_PLBS_by_day;
$placeHolders["freee_PLBS_by_day"] = &$placeHoldersfreee_PLBS_by_day;
$page_titles["freee_PLBS_by_day"] = &$pageTitlesfreee_PLBS_by_day;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["freee_PLBS_by_day"] = array();
//	freee_PLBS_by_day_details
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="freee_PLBS_by_day_details";
		$detailsParam["dOriginalTable"] = "freee_PLBS_by_day_details";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "freee_PLBS_by_day_details";
	$detailsParam["dCaptionTable"] = GetTableCaption("freee_PLBS_by_day_details");
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
		
	$detailsTablesData["freee_PLBS_by_day"][$dIndex] = $detailsParam;

	
		$detailsTablesData["freee_PLBS_by_day"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["freee_PLBS_by_day"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["freee_PLBS_by_day"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["freee_PLBS_by_day"][$dIndex]["detailKeys"][]="freee_plbs_id";

// tables which are master tables for current table (detail)
$masterTablesData["freee_PLBS_by_day"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_freee_PLBS_by_day()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  `date`,  `created_at`,  `updated_at`";
$proto0["m_strFrom"] = "FROM `freee_PLBS_by_day`";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY `date` DESC";
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
	"m_strTable" => "freee_PLBS_by_day",
	"m_srcTableName" => "freee_PLBS_by_day"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "freee_PLBS_by_day";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "date",
	"m_strTable" => "freee_PLBS_by_day",
	"m_srcTableName" => "freee_PLBS_by_day"
));

$proto8["m_sql"] = "`date`";
$proto8["m_srcTableName"] = "freee_PLBS_by_day";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "freee_PLBS_by_day",
	"m_srcTableName" => "freee_PLBS_by_day"
));

$proto10["m_sql"] = "`created_at`";
$proto10["m_srcTableName"] = "freee_PLBS_by_day";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "freee_PLBS_by_day",
	"m_srcTableName" => "freee_PLBS_by_day"
));

$proto12["m_sql"] = "`updated_at`";
$proto12["m_srcTableName"] = "freee_PLBS_by_day";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "freee_PLBS_by_day";
$proto15["m_srcTableName"] = "freee_PLBS_by_day";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "id";
$proto15["m_columns"][] = "date";
$proto15["m_columns"][] = "created_at";
$proto15["m_columns"][] = "updated_at";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "`freee_PLBS_by_day`";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "freee_PLBS_by_day";
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
	"m_strName" => "date",
	"m_strTable" => "freee_PLBS_by_day",
	"m_srcTableName" => "freee_PLBS_by_day"
));

$proto18["m_column"]=$obj;
$proto18["m_bAsc"] = 0;
$proto18["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto18);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="freee_PLBS_by_day";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_freee_PLBS_by_day = createSqlQuery_freee_PLBS_by_day();


	
		;

				

$tdatafreee_PLBS_by_day[".sqlquery"] = $queryData_freee_PLBS_by_day;

$tableEvents["freee_PLBS_by_day"] = new eventsBase;
$tdatafreee_PLBS_by_day[".hasEvents"] = false;

?>