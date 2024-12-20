<?php
require_once(getabspath("classes/cipherer.php"));




$tdataevav62122_audit = array();
	$tdataevav62122_audit[".ShortName"] = "evav62122_audit";
	$tdataevav62122_audit[".OwnerID"] = "";
	$tdataevav62122_audit[".OriginalTable"] = "evav62122_audit";

//	field labels
$fieldLabelsevav62122_audit = array();
$fieldToolTipsevav62122_audit = array();
$pageTitlesevav62122_audit = array();
$placeHoldersevav62122_audit = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsevav62122_audit["Japanese"] = array();
	$fieldToolTipsevav62122_audit["Japanese"] = array();
	$placeHoldersevav62122_audit["Japanese"] = array();
	$pageTitlesevav62122_audit["Japanese"] = array();
	$fieldLabelsevav62122_audit["Japanese"]["id"] = "Id";
	$fieldToolTipsevav62122_audit["Japanese"]["id"] = "";
	$placeHoldersevav62122_audit["Japanese"]["id"] = "";
	$fieldLabelsevav62122_audit["Japanese"]["datetime"] = "Datetime";
	$fieldToolTipsevav62122_audit["Japanese"]["datetime"] = "";
	$placeHoldersevav62122_audit["Japanese"]["datetime"] = "";
	$fieldLabelsevav62122_audit["Japanese"]["ip"] = "Ip";
	$fieldToolTipsevav62122_audit["Japanese"]["ip"] = "";
	$placeHoldersevav62122_audit["Japanese"]["ip"] = "";
	$fieldLabelsevav62122_audit["Japanese"]["user"] = "User";
	$fieldToolTipsevav62122_audit["Japanese"]["user"] = "";
	$placeHoldersevav62122_audit["Japanese"]["user"] = "";
	$fieldLabelsevav62122_audit["Japanese"]["table"] = "Table";
	$fieldToolTipsevav62122_audit["Japanese"]["table"] = "";
	$placeHoldersevav62122_audit["Japanese"]["table"] = "";
	$fieldLabelsevav62122_audit["Japanese"]["action"] = "Action";
	$fieldToolTipsevav62122_audit["Japanese"]["action"] = "";
	$placeHoldersevav62122_audit["Japanese"]["action"] = "";
	$fieldLabelsevav62122_audit["Japanese"]["description"] = "Description";
	$fieldToolTipsevav62122_audit["Japanese"]["description"] = "";
	$placeHoldersevav62122_audit["Japanese"]["description"] = "";
	if (count($fieldToolTipsevav62122_audit["Japanese"]))
		$tdataevav62122_audit[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsevav62122_audit[""] = array();
	$fieldToolTipsevav62122_audit[""] = array();
	$placeHoldersevav62122_audit[""] = array();
	$pageTitlesevav62122_audit[""] = array();
	if (count($fieldToolTipsevav62122_audit[""]))
		$tdataevav62122_audit[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsevav62122_audit["English"] = array();
	$fieldToolTipsevav62122_audit["English"] = array();
	$placeHoldersevav62122_audit["English"] = array();
	$pageTitlesevav62122_audit["English"] = array();
	if (count($fieldToolTipsevav62122_audit["English"]))
		$tdataevav62122_audit[".isUseToolTips"] = true;
}


	$tdataevav62122_audit[".NCSearch"] = true;



$tdataevav62122_audit[".shortTableName"] = "evav62122_audit";
$tdataevav62122_audit[".nSecOptions"] = 0;
$tdataevav62122_audit[".recsPerRowPrint"] = 1;
$tdataevav62122_audit[".mainTableOwnerID"] = "";
$tdataevav62122_audit[".moveNext"] = 1;
$tdataevav62122_audit[".entityType"] = 0;

$tdataevav62122_audit[".strOriginalTableName"] = "evav62122_audit";

	



$tdataevav62122_audit[".showAddInPopup"] = false;

$tdataevav62122_audit[".showEditInPopup"] = false;

$tdataevav62122_audit[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataevav62122_audit[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataevav62122_audit[".fieldsForRegister"] = array();

$tdataevav62122_audit[".listAjax"] = false;

	$tdataevav62122_audit[".audit"] = true;

	$tdataevav62122_audit[".locking"] = false;

$tdataevav62122_audit[".edit"] = true;
$tdataevav62122_audit[".afterEditAction"] = 1;
$tdataevav62122_audit[".closePopupAfterEdit"] = 1;
$tdataevav62122_audit[".afterEditActionDetTable"] = "";

$tdataevav62122_audit[".add"] = true;
$tdataevav62122_audit[".afterAddAction"] = 1;
$tdataevav62122_audit[".closePopupAfterAdd"] = 1;
$tdataevav62122_audit[".afterAddActionDetTable"] = "";

$tdataevav62122_audit[".list"] = true;



$tdataevav62122_audit[".reorderRecordsByHeader"] = true;
$tdataevav62122_audit[".createSortByDropdown"] = true;
$tdataevav62122_audit[".strSortControlSettingsJSON"] = "";



$tdataevav62122_audit[".view"] = true;

$tdataevav62122_audit[".import"] = true;

$tdataevav62122_audit[".exportTo"] = true;

$tdataevav62122_audit[".printFriendly"] = true;

$tdataevav62122_audit[".delete"] = true;

$tdataevav62122_audit[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataevav62122_audit[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataevav62122_audit[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataevav62122_audit[".searchSaving"] = false;
//

$tdataevav62122_audit[".showSearchPanel"] = true;
		$tdataevav62122_audit[".flexibleSearch"] = true;

$tdataevav62122_audit[".isUseAjaxSuggest"] = false;

$tdataevav62122_audit[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdataevav62122_audit[".ajaxCodeSnippetAdded"] = false;

$tdataevav62122_audit[".buttonsAdded"] = false;

$tdataevav62122_audit[".addPageEvents"] = false;

// use timepicker for search panel
$tdataevav62122_audit[".isUseTimeForSearch"] = false;





$tdataevav62122_audit[".allSearchFields"] = array();
$tdataevav62122_audit[".filterFields"] = array();
$tdataevav62122_audit[".requiredSearchFields"] = array();

$tdataevav62122_audit[".allSearchFields"][] = "id";
	$tdataevav62122_audit[".allSearchFields"][] = "datetime";
	$tdataevav62122_audit[".allSearchFields"][] = "ip";
	$tdataevav62122_audit[".allSearchFields"][] = "user";
	$tdataevav62122_audit[".allSearchFields"][] = "table";
	$tdataevav62122_audit[".allSearchFields"][] = "action";
	$tdataevav62122_audit[".allSearchFields"][] = "description";
	

$tdataevav62122_audit[".googleLikeFields"] = array();
$tdataevav62122_audit[".googleLikeFields"][] = "id";
$tdataevav62122_audit[".googleLikeFields"][] = "datetime";
$tdataevav62122_audit[".googleLikeFields"][] = "ip";
$tdataevav62122_audit[".googleLikeFields"][] = "user";
$tdataevav62122_audit[".googleLikeFields"][] = "table";
$tdataevav62122_audit[".googleLikeFields"][] = "action";
$tdataevav62122_audit[".googleLikeFields"][] = "description";

$tdataevav62122_audit[".panelSearchFields"] = array();
$tdataevav62122_audit[".searchPanelOptions"] = array();
$tdataevav62122_audit[".panelSearchFields"][] = "id";
	$tdataevav62122_audit[".panelSearchFields"][] = "datetime";
	$tdataevav62122_audit[".panelSearchFields"][] = "ip";
	$tdataevav62122_audit[".panelSearchFields"][] = "user";
	$tdataevav62122_audit[".panelSearchFields"][] = "table";
	$tdataevav62122_audit[".panelSearchFields"][] = "action";
	$tdataevav62122_audit[".panelSearchFields"][] = "description";
	
$tdataevav62122_audit[".advSearchFields"] = array();
$tdataevav62122_audit[".advSearchFields"][] = "id";
$tdataevav62122_audit[".advSearchFields"][] = "datetime";
$tdataevav62122_audit[".advSearchFields"][] = "ip";
$tdataevav62122_audit[".advSearchFields"][] = "user";
$tdataevav62122_audit[".advSearchFields"][] = "table";
$tdataevav62122_audit[".advSearchFields"][] = "action";
$tdataevav62122_audit[".advSearchFields"][] = "description";

$tdataevav62122_audit[".tableType"] = "list";

$tdataevav62122_audit[".printerPageOrientation"] = 0;
$tdataevav62122_audit[".nPrinterPageScale"] = 100;

$tdataevav62122_audit[".nPrinterSplitRecords"] = 40;

$tdataevav62122_audit[".nPrinterPDFSplitRecords"] = 40;



$tdataevav62122_audit[".geocodingEnabled"] = false;





$tdataevav62122_audit[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataevav62122_audit[".pageSize"] = 20;

$tdataevav62122_audit[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY id DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataevav62122_audit[".strOrderBy"] = $tstrOrderBy;

$tdataevav62122_audit[".orderindexes"] = array();
$tdataevav62122_audit[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "`id`");

$tdataevav62122_audit[".sqlHead"] = "SELECT id,  `datetime`,  ip,  `user`,  `table`,  `action`,  description";
$tdataevav62122_audit[".sqlFrom"] = "FROM evav62122_audit";
$tdataevav62122_audit[".sqlWhereExpr"] = "";
$tdataevav62122_audit[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataevav62122_audit[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataevav62122_audit[".arrGroupsPerPage"] = $arrGPP;

$tdataevav62122_audit[".highlightSearchResults"] = true;

$tableKeysevav62122_audit = array();
$tableKeysevav62122_audit[] = "id";
$tdataevav62122_audit[".Keys"] = $tableKeysevav62122_audit;

$tdataevav62122_audit[".listFields"] = array();
$tdataevav62122_audit[".listFields"][] = "id";
$tdataevav62122_audit[".listFields"][] = "datetime";
$tdataevav62122_audit[".listFields"][] = "ip";
$tdataevav62122_audit[".listFields"][] = "user";
$tdataevav62122_audit[".listFields"][] = "table";
$tdataevav62122_audit[".listFields"][] = "action";
$tdataevav62122_audit[".listFields"][] = "description";

$tdataevav62122_audit[".hideMobileList"] = array();


$tdataevav62122_audit[".viewFields"] = array();
$tdataevav62122_audit[".viewFields"][] = "id";
$tdataevav62122_audit[".viewFields"][] = "datetime";
$tdataevav62122_audit[".viewFields"][] = "ip";
$tdataevav62122_audit[".viewFields"][] = "user";
$tdataevav62122_audit[".viewFields"][] = "table";
$tdataevav62122_audit[".viewFields"][] = "action";
$tdataevav62122_audit[".viewFields"][] = "description";

$tdataevav62122_audit[".addFields"] = array();
$tdataevav62122_audit[".addFields"][] = "datetime";
$tdataevav62122_audit[".addFields"][] = "ip";
$tdataevav62122_audit[".addFields"][] = "user";
$tdataevav62122_audit[".addFields"][] = "table";
$tdataevav62122_audit[".addFields"][] = "action";
$tdataevav62122_audit[".addFields"][] = "description";

$tdataevav62122_audit[".masterListFields"] = array();
$tdataevav62122_audit[".masterListFields"][] = "id";
$tdataevav62122_audit[".masterListFields"][] = "datetime";
$tdataevav62122_audit[".masterListFields"][] = "ip";
$tdataevav62122_audit[".masterListFields"][] = "user";
$tdataevav62122_audit[".masterListFields"][] = "table";
$tdataevav62122_audit[".masterListFields"][] = "action";
$tdataevav62122_audit[".masterListFields"][] = "description";

$tdataevav62122_audit[".inlineAddFields"] = array();

$tdataevav62122_audit[".editFields"] = array();
$tdataevav62122_audit[".editFields"][] = "datetime";
$tdataevav62122_audit[".editFields"][] = "ip";
$tdataevav62122_audit[".editFields"][] = "user";
$tdataevav62122_audit[".editFields"][] = "table";
$tdataevav62122_audit[".editFields"][] = "action";
$tdataevav62122_audit[".editFields"][] = "description";

$tdataevav62122_audit[".inlineEditFields"] = array();

$tdataevav62122_audit[".updateSelectedFields"] = array();
$tdataevav62122_audit[".updateSelectedFields"][] = "datetime";
$tdataevav62122_audit[".updateSelectedFields"][] = "ip";
$tdataevav62122_audit[".updateSelectedFields"][] = "user";
$tdataevav62122_audit[".updateSelectedFields"][] = "table";
$tdataevav62122_audit[".updateSelectedFields"][] = "action";
$tdataevav62122_audit[".updateSelectedFields"][] = "description";


$tdataevav62122_audit[".exportFields"] = array();
$tdataevav62122_audit[".exportFields"][] = "id";
$tdataevav62122_audit[".exportFields"][] = "datetime";
$tdataevav62122_audit[".exportFields"][] = "ip";
$tdataevav62122_audit[".exportFields"][] = "user";
$tdataevav62122_audit[".exportFields"][] = "table";
$tdataevav62122_audit[".exportFields"][] = "action";
$tdataevav62122_audit[".exportFields"][] = "description";

$tdataevav62122_audit[".importFields"] = array();
$tdataevav62122_audit[".importFields"][] = "id";
$tdataevav62122_audit[".importFields"][] = "datetime";
$tdataevav62122_audit[".importFields"][] = "ip";
$tdataevav62122_audit[".importFields"][] = "user";
$tdataevav62122_audit[".importFields"][] = "table";
$tdataevav62122_audit[".importFields"][] = "action";
$tdataevav62122_audit[".importFields"][] = "description";

$tdataevav62122_audit[".printFields"] = array();
$tdataevav62122_audit[".printFields"][] = "id";
$tdataevav62122_audit[".printFields"][] = "datetime";
$tdataevav62122_audit[".printFields"][] = "ip";
$tdataevav62122_audit[".printFields"][] = "user";
$tdataevav62122_audit[".printFields"][] = "table";
$tdataevav62122_audit[".printFields"][] = "action";
$tdataevav62122_audit[".printFields"][] = "description";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "evav62122_audit";
	$fdata["Label"] = GetFieldLabel("evav62122_audit","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

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




	$tdataevav62122_audit["id"] = $fdata;
//	datetime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "datetime";
	$fdata["GoodName"] = "datetime";
	$fdata["ownerTable"] = "evav62122_audit";
	$fdata["Label"] = GetFieldLabel("evav62122_audit","datetime");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "datetime";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`datetime`";

	
	
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

	



		$edata["IsRequired"] = true;

	
	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataevav62122_audit["datetime"] = $fdata;
//	ip
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ip";
	$fdata["GoodName"] = "ip";
	$fdata["ownerTable"] = "evav62122_audit";
	$fdata["Label"] = GetFieldLabel("evav62122_audit","ip");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ip";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ip";

	
	
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
			$edata["EditParams"].= " maxlength=40";

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




	$tdataevav62122_audit["ip"] = $fdata;
//	user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "user";
	$fdata["GoodName"] = "user";
	$fdata["ownerTable"] = "evav62122_audit";
	$fdata["Label"] = GetFieldLabel("evav62122_audit","user");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "user";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`user`";

	
	
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
			$edata["EditParams"].= " maxlength=250";

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




	$tdataevav62122_audit["user"] = $fdata;
//	table
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "table";
	$fdata["GoodName"] = "table";
	$fdata["ownerTable"] = "evav62122_audit";
	$fdata["Label"] = GetFieldLabel("evav62122_audit","table");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "table";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`table`";

	
	
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
			$edata["EditParams"].= " maxlength=250";

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




	$tdataevav62122_audit["table"] = $fdata;
//	action
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "action";
	$fdata["GoodName"] = "action";
	$fdata["ownerTable"] = "evav62122_audit";
	$fdata["Label"] = GetFieldLabel("evav62122_audit","action");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "action";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`action`";

	
	
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
			$edata["EditParams"].= " maxlength=250";

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




	$tdataevav62122_audit["action"] = $fdata;
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "evav62122_audit";
	$fdata["Label"] = GetFieldLabel("evav62122_audit","description");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "description";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "description";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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




	$tdataevav62122_audit["description"] = $fdata;


$tables_data["evav62122_audit"]=&$tdataevav62122_audit;
$field_labels["evav62122_audit"] = &$fieldLabelsevav62122_audit;
$fieldToolTips["evav62122_audit"] = &$fieldToolTipsevav62122_audit;
$placeHolders["evav62122_audit"] = &$placeHoldersevav62122_audit;
$page_titles["evav62122_audit"] = &$pageTitlesevav62122_audit;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["evav62122_audit"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["evav62122_audit"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_evav62122_audit()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  `datetime`,  ip,  `user`,  `table`,  `action`,  description";
$proto0["m_strFrom"] = "FROM evav62122_audit";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY id DESC";
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
	"m_strTable" => "evav62122_audit",
	"m_srcTableName" => "evav62122_audit"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "evav62122_audit";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "datetime",
	"m_strTable" => "evav62122_audit",
	"m_srcTableName" => "evav62122_audit"
));

$proto8["m_sql"] = "`datetime`";
$proto8["m_srcTableName"] = "evav62122_audit";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "ip",
	"m_strTable" => "evav62122_audit",
	"m_srcTableName" => "evav62122_audit"
));

$proto10["m_sql"] = "ip";
$proto10["m_srcTableName"] = "evav62122_audit";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "user",
	"m_strTable" => "evav62122_audit",
	"m_srcTableName" => "evav62122_audit"
));

$proto12["m_sql"] = "`user`";
$proto12["m_srcTableName"] = "evav62122_audit";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "table",
	"m_strTable" => "evav62122_audit",
	"m_srcTableName" => "evav62122_audit"
));

$proto14["m_sql"] = "`table`";
$proto14["m_srcTableName"] = "evav62122_audit";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "action",
	"m_strTable" => "evav62122_audit",
	"m_srcTableName" => "evav62122_audit"
));

$proto16["m_sql"] = "`action`";
$proto16["m_srcTableName"] = "evav62122_audit";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "evav62122_audit",
	"m_srcTableName" => "evav62122_audit"
));

$proto18["m_sql"] = "description";
$proto18["m_srcTableName"] = "evav62122_audit";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "evav62122_audit";
$proto21["m_srcTableName"] = "evav62122_audit";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "id";
$proto21["m_columns"][] = "datetime";
$proto21["m_columns"][] = "ip";
$proto21["m_columns"][] = "user";
$proto21["m_columns"][] = "table";
$proto21["m_columns"][] = "action";
$proto21["m_columns"][] = "description";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "evav62122_audit";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "evav62122_audit";
$proto22=array();
$proto22["m_sql"] = "";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto24=array();
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "evav62122_audit",
	"m_srcTableName" => "evav62122_audit"
));

$proto24["m_column"]=$obj;
$proto24["m_bAsc"] = 0;
$proto24["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto24);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="evav62122_audit";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_evav62122_audit = createSqlQuery_evav62122_audit();


	
		;

							

$tdataevav62122_audit[".sqlquery"] = $queryData_evav62122_audit;

$tableEvents["evav62122_audit"] = new eventsBase;
$tdataevav62122_audit[".hasEvents"] = false;

?>