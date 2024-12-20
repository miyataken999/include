<?php
require_once(getabspath("classes/cipherer.php"));




$tdataevav_test = array();
	$tdataevav_test[".ShortName"] = "evav_test";
	$tdataevav_test[".OwnerID"] = "";
	$tdataevav_test[".OriginalTable"] = "evav_test";

//	field labels
$fieldLabelsevav_test = array();
$fieldToolTipsevav_test = array();
$pageTitlesevav_test = array();
$placeHoldersevav_test = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsevav_test["Japanese"] = array();
	$fieldToolTipsevav_test["Japanese"] = array();
	$placeHoldersevav_test["Japanese"] = array();
	$pageTitlesevav_test["Japanese"] = array();
	$fieldLabelsevav_test["Japanese"]["id"] = "Id";
	$fieldToolTipsevav_test["Japanese"]["id"] = "";
	$placeHoldersevav_test["Japanese"]["id"] = "";
	$fieldLabelsevav_test["Japanese"]["datetime"] = "Datetime";
	$fieldToolTipsevav_test["Japanese"]["datetime"] = "";
	$placeHoldersevav_test["Japanese"]["datetime"] = "";
	$fieldLabelsevav_test["Japanese"]["ip"] = "Ip";
	$fieldToolTipsevav_test["Japanese"]["ip"] = "";
	$placeHoldersevav_test["Japanese"]["ip"] = "";
	$fieldLabelsevav_test["Japanese"]["user"] = "User";
	$fieldToolTipsevav_test["Japanese"]["user"] = "";
	$placeHoldersevav_test["Japanese"]["user"] = "";
	$fieldLabelsevav_test["Japanese"]["table"] = "Table";
	$fieldToolTipsevav_test["Japanese"]["table"] = "";
	$placeHoldersevav_test["Japanese"]["table"] = "";
	$fieldLabelsevav_test["Japanese"]["action"] = "Action";
	$fieldToolTipsevav_test["Japanese"]["action"] = "";
	$placeHoldersevav_test["Japanese"]["action"] = "";
	$fieldLabelsevav_test["Japanese"]["description"] = "Description";
	$fieldToolTipsevav_test["Japanese"]["description"] = "";
	$placeHoldersevav_test["Japanese"]["description"] = "";
	if (count($fieldToolTipsevav_test["Japanese"]))
		$tdataevav_test[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsevav_test[""] = array();
	$fieldToolTipsevav_test[""] = array();
	$placeHoldersevav_test[""] = array();
	$pageTitlesevav_test[""] = array();
	$fieldLabelsevav_test[""]["id"] = "Id";
	$fieldToolTipsevav_test[""]["id"] = "";
	$placeHoldersevav_test[""]["id"] = "";
	$fieldLabelsevav_test[""]["datetime"] = "Datetime";
	$fieldToolTipsevav_test[""]["datetime"] = "";
	$placeHoldersevav_test[""]["datetime"] = "";
	$fieldLabelsevav_test[""]["ip"] = "Ip";
	$fieldToolTipsevav_test[""]["ip"] = "";
	$placeHoldersevav_test[""]["ip"] = "";
	$fieldLabelsevav_test[""]["user"] = "User";
	$fieldToolTipsevav_test[""]["user"] = "";
	$placeHoldersevav_test[""]["user"] = "";
	$fieldLabelsevav_test[""]["table"] = "Table";
	$fieldToolTipsevav_test[""]["table"] = "";
	$placeHoldersevav_test[""]["table"] = "";
	$fieldLabelsevav_test[""]["action"] = "Action";
	$fieldToolTipsevav_test[""]["action"] = "";
	$placeHoldersevav_test[""]["action"] = "";
	$fieldLabelsevav_test[""]["description"] = "Description";
	$fieldToolTipsevav_test[""]["description"] = "";
	$placeHoldersevav_test[""]["description"] = "";
	if (count($fieldToolTipsevav_test[""]))
		$tdataevav_test[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsevav_test["English"] = array();
	$fieldToolTipsevav_test["English"] = array();
	$placeHoldersevav_test["English"] = array();
	$pageTitlesevav_test["English"] = array();
	$fieldLabelsevav_test["English"]["id"] = "Id";
	$fieldToolTipsevav_test["English"]["id"] = "";
	$placeHoldersevav_test["English"]["id"] = "";
	$fieldLabelsevav_test["English"]["datetime"] = "Datetime";
	$fieldToolTipsevav_test["English"]["datetime"] = "";
	$placeHoldersevav_test["English"]["datetime"] = "";
	$fieldLabelsevav_test["English"]["ip"] = "Ip";
	$fieldToolTipsevav_test["English"]["ip"] = "";
	$placeHoldersevav_test["English"]["ip"] = "";
	$fieldLabelsevav_test["English"]["user"] = "User";
	$fieldToolTipsevav_test["English"]["user"] = "";
	$placeHoldersevav_test["English"]["user"] = "";
	$fieldLabelsevav_test["English"]["table"] = "Table";
	$fieldToolTipsevav_test["English"]["table"] = "";
	$placeHoldersevav_test["English"]["table"] = "";
	$fieldLabelsevav_test["English"]["action"] = "Action";
	$fieldToolTipsevav_test["English"]["action"] = "";
	$placeHoldersevav_test["English"]["action"] = "";
	$fieldLabelsevav_test["English"]["description"] = "Description";
	$fieldToolTipsevav_test["English"]["description"] = "";
	$placeHoldersevav_test["English"]["description"] = "";
	if (count($fieldToolTipsevav_test["English"]))
		$tdataevav_test[".isUseToolTips"] = true;
}


	$tdataevav_test[".NCSearch"] = true;



$tdataevav_test[".shortTableName"] = "evav_test";
$tdataevav_test[".nSecOptions"] = 0;
$tdataevav_test[".recsPerRowPrint"] = 1;
$tdataevav_test[".mainTableOwnerID"] = "";
$tdataevav_test[".moveNext"] = 1;
$tdataevav_test[".entityType"] = 0;

$tdataevav_test[".strOriginalTableName"] = "evav_test";

	



$tdataevav_test[".showAddInPopup"] = false;

$tdataevav_test[".showEditInPopup"] = false;

$tdataevav_test[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataevav_test[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataevav_test[".fieldsForRegister"] = array();

$tdataevav_test[".listAjax"] = false;

	$tdataevav_test[".audit"] = false;

	$tdataevav_test[".locking"] = false;

$tdataevav_test[".edit"] = true;
$tdataevav_test[".afterEditAction"] = 1;
$tdataevav_test[".closePopupAfterEdit"] = 1;
$tdataevav_test[".afterEditActionDetTable"] = "";

$tdataevav_test[".add"] = true;
$tdataevav_test[".afterAddAction"] = 1;
$tdataevav_test[".closePopupAfterAdd"] = 1;
$tdataevav_test[".afterAddActionDetTable"] = "";

$tdataevav_test[".list"] = true;



$tdataevav_test[".reorderRecordsByHeader"] = true;



$tdataevav_test[".view"] = true;

$tdataevav_test[".import"] = true;

$tdataevav_test[".exportTo"] = true;

$tdataevav_test[".printFriendly"] = true;

$tdataevav_test[".delete"] = true;

$tdataevav_test[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataevav_test[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataevav_test[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataevav_test[".searchSaving"] = false;
//

$tdataevav_test[".showSearchPanel"] = true;
		$tdataevav_test[".flexibleSearch"] = true;

$tdataevav_test[".isUseAjaxSuggest"] = true;

$tdataevav_test[".rowHighlite"] = true;



																																																																																																																																																																																																																													

$tdataevav_test[".ajaxCodeSnippetAdded"] = false;

$tdataevav_test[".buttonsAdded"] = false;

$tdataevav_test[".addPageEvents"] = false;

// use timepicker for search panel
$tdataevav_test[".isUseTimeForSearch"] = false;





$tdataevav_test[".allSearchFields"] = array();
$tdataevav_test[".filterFields"] = array();
$tdataevav_test[".requiredSearchFields"] = array();

$tdataevav_test[".allSearchFields"][] = "id";
	$tdataevav_test[".allSearchFields"][] = "datetime";
	$tdataevav_test[".allSearchFields"][] = "ip";
	$tdataevav_test[".allSearchFields"][] = "user";
	$tdataevav_test[".allSearchFields"][] = "table";
	$tdataevav_test[".allSearchFields"][] = "action";
	$tdataevav_test[".allSearchFields"][] = "description";
	

$tdataevav_test[".googleLikeFields"] = array();
$tdataevav_test[".googleLikeFields"][] = "id";
$tdataevav_test[".googleLikeFields"][] = "datetime";
$tdataevav_test[".googleLikeFields"][] = "ip";
$tdataevav_test[".googleLikeFields"][] = "user";
$tdataevav_test[".googleLikeFields"][] = "table";
$tdataevav_test[".googleLikeFields"][] = "action";
$tdataevav_test[".googleLikeFields"][] = "description";


$tdataevav_test[".advSearchFields"] = array();
$tdataevav_test[".advSearchFields"][] = "id";
$tdataevav_test[".advSearchFields"][] = "datetime";
$tdataevav_test[".advSearchFields"][] = "ip";
$tdataevav_test[".advSearchFields"][] = "user";
$tdataevav_test[".advSearchFields"][] = "table";
$tdataevav_test[".advSearchFields"][] = "action";
$tdataevav_test[".advSearchFields"][] = "description";

$tdataevav_test[".tableType"] = "list";

$tdataevav_test[".printerPageOrientation"] = 0;
$tdataevav_test[".nPrinterPageScale"] = 100;

$tdataevav_test[".nPrinterSplitRecords"] = 40;

$tdataevav_test[".nPrinterPDFSplitRecords"] = 40;



$tdataevav_test[".geocodingEnabled"] = false;





$tdataevav_test[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataevav_test[".pageSize"] = 20;

$tdataevav_test[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataevav_test[".strOrderBy"] = $tstrOrderBy;

$tdataevav_test[".orderindexes"] = array();

$tdataevav_test[".sqlHead"] = "SELECT id,  	`datetime`,  	ip,  	`user`,  	`table`,  	`action`,  	description";
$tdataevav_test[".sqlFrom"] = "FROM evav_test";
$tdataevav_test[".sqlWhereExpr"] = "";
$tdataevav_test[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataevav_test[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataevav_test[".arrGroupsPerPage"] = $arrGPP;

$tdataevav_test[".highlightSearchResults"] = true;

$tableKeysevav_test = array();
$tableKeysevav_test[] = "id";
$tdataevav_test[".Keys"] = $tableKeysevav_test;

$tdataevav_test[".listFields"] = array();
$tdataevav_test[".listFields"][] = "id";
$tdataevav_test[".listFields"][] = "datetime";
$tdataevav_test[".listFields"][] = "ip";
$tdataevav_test[".listFields"][] = "user";
$tdataevav_test[".listFields"][] = "table";
$tdataevav_test[".listFields"][] = "action";
$tdataevav_test[".listFields"][] = "description";

$tdataevav_test[".hideMobileList"] = array();


$tdataevav_test[".viewFields"] = array();
$tdataevav_test[".viewFields"][] = "id";
$tdataevav_test[".viewFields"][] = "datetime";
$tdataevav_test[".viewFields"][] = "ip";
$tdataevav_test[".viewFields"][] = "user";
$tdataevav_test[".viewFields"][] = "table";
$tdataevav_test[".viewFields"][] = "action";
$tdataevav_test[".viewFields"][] = "description";

$tdataevav_test[".addFields"] = array();
$tdataevav_test[".addFields"][] = "datetime";
$tdataevav_test[".addFields"][] = "ip";
$tdataevav_test[".addFields"][] = "user";
$tdataevav_test[".addFields"][] = "table";
$tdataevav_test[".addFields"][] = "action";
$tdataevav_test[".addFields"][] = "description";

$tdataevav_test[".masterListFields"] = array();
$tdataevav_test[".masterListFields"][] = "id";
$tdataevav_test[".masterListFields"][] = "datetime";
$tdataevav_test[".masterListFields"][] = "ip";
$tdataevav_test[".masterListFields"][] = "user";
$tdataevav_test[".masterListFields"][] = "table";
$tdataevav_test[".masterListFields"][] = "action";
$tdataevav_test[".masterListFields"][] = "description";

$tdataevav_test[".inlineAddFields"] = array();
$tdataevav_test[".inlineAddFields"][] = "datetime";
$tdataevav_test[".inlineAddFields"][] = "ip";
$tdataevav_test[".inlineAddFields"][] = "user";
$tdataevav_test[".inlineAddFields"][] = "table";
$tdataevav_test[".inlineAddFields"][] = "action";
$tdataevav_test[".inlineAddFields"][] = "description";

$tdataevav_test[".editFields"] = array();
$tdataevav_test[".editFields"][] = "datetime";
$tdataevav_test[".editFields"][] = "ip";
$tdataevav_test[".editFields"][] = "user";
$tdataevav_test[".editFields"][] = "table";
$tdataevav_test[".editFields"][] = "action";
$tdataevav_test[".editFields"][] = "description";

$tdataevav_test[".inlineEditFields"] = array();
$tdataevav_test[".inlineEditFields"][] = "datetime";
$tdataevav_test[".inlineEditFields"][] = "ip";
$tdataevav_test[".inlineEditFields"][] = "user";
$tdataevav_test[".inlineEditFields"][] = "table";
$tdataevav_test[".inlineEditFields"][] = "action";
$tdataevav_test[".inlineEditFields"][] = "description";

$tdataevav_test[".updateSelectedFields"] = array();
$tdataevav_test[".updateSelectedFields"][] = "datetime";
$tdataevav_test[".updateSelectedFields"][] = "ip";
$tdataevav_test[".updateSelectedFields"][] = "user";
$tdataevav_test[".updateSelectedFields"][] = "table";
$tdataevav_test[".updateSelectedFields"][] = "action";
$tdataevav_test[".updateSelectedFields"][] = "description";


$tdataevav_test[".exportFields"] = array();
$tdataevav_test[".exportFields"][] = "id";
$tdataevav_test[".exportFields"][] = "datetime";
$tdataevav_test[".exportFields"][] = "ip";
$tdataevav_test[".exportFields"][] = "user";
$tdataevav_test[".exportFields"][] = "table";
$tdataevav_test[".exportFields"][] = "action";
$tdataevav_test[".exportFields"][] = "description";

$tdataevav_test[".importFields"] = array();
$tdataevav_test[".importFields"][] = "id";
$tdataevav_test[".importFields"][] = "datetime";
$tdataevav_test[".importFields"][] = "ip";
$tdataevav_test[".importFields"][] = "user";
$tdataevav_test[".importFields"][] = "table";
$tdataevav_test[".importFields"][] = "action";
$tdataevav_test[".importFields"][] = "description";

$tdataevav_test[".printFields"] = array();
$tdataevav_test[".printFields"][] = "id";
$tdataevav_test[".printFields"][] = "datetime";
$tdataevav_test[".printFields"][] = "ip";
$tdataevav_test[".printFields"][] = "user";
$tdataevav_test[".printFields"][] = "table";
$tdataevav_test[".printFields"][] = "action";
$tdataevav_test[".printFields"][] = "description";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "evav_test";
	$fdata["Label"] = GetFieldLabel("evav_test","id");
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




	$tdataevav_test["id"] = $fdata;
//	datetime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "datetime";
	$fdata["GoodName"] = "datetime";
	$fdata["ownerTable"] = "evav_test";
	$fdata["Label"] = GetFieldLabel("evav_test","datetime");
	$fdata["FieldType"] = 135;

	
	
	
			
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

		$fdata["strField"] = "datetime";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`datetime`";

	
	
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




	$tdataevav_test["datetime"] = $fdata;
//	ip
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ip";
	$fdata["GoodName"] = "ip";
	$fdata["ownerTable"] = "evav_test";
	$fdata["Label"] = GetFieldLabel("evav_test","ip");
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




	$tdataevav_test["ip"] = $fdata;
//	user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "user";
	$fdata["GoodName"] = "user";
	$fdata["ownerTable"] = "evav_test";
	$fdata["Label"] = GetFieldLabel("evav_test","user");
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




	$tdataevav_test["user"] = $fdata;
//	table
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "table";
	$fdata["GoodName"] = "table";
	$fdata["ownerTable"] = "evav_test";
	$fdata["Label"] = GetFieldLabel("evav_test","table");
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




	$tdataevav_test["table"] = $fdata;
//	action
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "action";
	$fdata["GoodName"] = "action";
	$fdata["ownerTable"] = "evav_test";
	$fdata["Label"] = GetFieldLabel("evav_test","action");
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




	$tdataevav_test["action"] = $fdata;
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "evav_test";
	$fdata["Label"] = GetFieldLabel("evav_test","description");
	$fdata["FieldType"] = 201;

	
	
	
			
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




	$tdataevav_test["description"] = $fdata;


$tables_data["evav_test"]=&$tdataevav_test;
$field_labels["evav_test"] = &$fieldLabelsevav_test;
$fieldToolTips["evav_test"] = &$fieldToolTipsevav_test;
$placeHolders["evav_test"] = &$placeHoldersevav_test;
$page_titles["evav_test"] = &$pageTitlesevav_test;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["evav_test"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["evav_test"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_evav_test()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	`datetime`,  	ip,  	`user`,  	`table`,  	`action`,  	description";
$proto0["m_strFrom"] = "FROM evav_test";
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
	"m_strTable" => "evav_test",
	"m_srcTableName" => "evav_test"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "evav_test";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "datetime",
	"m_strTable" => "evav_test",
	"m_srcTableName" => "evav_test"
));

$proto8["m_sql"] = "`datetime`";
$proto8["m_srcTableName"] = "evav_test";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "ip",
	"m_strTable" => "evav_test",
	"m_srcTableName" => "evav_test"
));

$proto10["m_sql"] = "ip";
$proto10["m_srcTableName"] = "evav_test";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "user",
	"m_strTable" => "evav_test",
	"m_srcTableName" => "evav_test"
));

$proto12["m_sql"] = "`user`";
$proto12["m_srcTableName"] = "evav_test";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "table",
	"m_strTable" => "evav_test",
	"m_srcTableName" => "evav_test"
));

$proto14["m_sql"] = "`table`";
$proto14["m_srcTableName"] = "evav_test";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "action",
	"m_strTable" => "evav_test",
	"m_srcTableName" => "evav_test"
));

$proto16["m_sql"] = "`action`";
$proto16["m_srcTableName"] = "evav_test";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "evav_test",
	"m_srcTableName" => "evav_test"
));

$proto18["m_sql"] = "description";
$proto18["m_srcTableName"] = "evav_test";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "evav_test";
$proto21["m_srcTableName"] = "evav_test";
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
$proto20["m_sql"] = "evav_test";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "evav_test";
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
$proto0["m_srcTableName"]="evav_test";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_evav_test = createSqlQuery_evav_test();


	
		;

							

$tdataevav_test[".sqlquery"] = $queryData_evav_test;

$tableEvents["evav_test"] = new eventsBase;
$tdataevav_test[".hasEvents"] = false;

?>