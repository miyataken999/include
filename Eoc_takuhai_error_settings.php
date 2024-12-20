<?php
require_once(getabspath("classes/cipherer.php"));




$tdataEoc_takuhai_error = array();
	$tdataEoc_takuhai_error[".truncateText"] = true;
	$tdataEoc_takuhai_error[".NumberOfChars"] = 80;
	$tdataEoc_takuhai_error[".ShortName"] = "Eoc_takuhai_error";
	$tdataEoc_takuhai_error[".OwnerID"] = "";
	$tdataEoc_takuhai_error[".OriginalTable"] = "Eoc_takuhai_error";

//	field labels
$fieldLabelsEoc_takuhai_error = array();
$fieldToolTipsEoc_takuhai_error = array();
$pageTitlesEoc_takuhai_error = array();
$placeHoldersEoc_takuhai_error = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsEoc_takuhai_error["Japanese"] = array();
	$fieldToolTipsEoc_takuhai_error["Japanese"] = array();
	$placeHoldersEoc_takuhai_error["Japanese"] = array();
	$pageTitlesEoc_takuhai_error["Japanese"] = array();
	$fieldLabelsEoc_takuhai_error["Japanese"]["id"] = "Id";
	$fieldToolTipsEoc_takuhai_error["Japanese"]["id"] = "";
	$placeHoldersEoc_takuhai_error["Japanese"]["id"] = "";
	$fieldLabelsEoc_takuhai_error["Japanese"]["name"] = "エラー名";
	$fieldToolTipsEoc_takuhai_error["Japanese"]["name"] = "";
	$placeHoldersEoc_takuhai_error["Japanese"]["name"] = "";
	$fieldLabelsEoc_takuhai_error["Japanese"]["msg"] = "メッセージ";
	$fieldToolTipsEoc_takuhai_error["Japanese"]["msg"] = "";
	$placeHoldersEoc_takuhai_error["Japanese"]["msg"] = "";
	$fieldLabelsEoc_takuhai_error["Japanese"]["memo"] = "メモ";
	$fieldToolTipsEoc_takuhai_error["Japanese"]["memo"] = "";
	$placeHoldersEoc_takuhai_error["Japanese"]["memo"] = "";
	$fieldLabelsEoc_takuhai_error["Japanese"]["sort"] = "Sort";
	$fieldToolTipsEoc_takuhai_error["Japanese"]["sort"] = "";
	$placeHoldersEoc_takuhai_error["Japanese"]["sort"] = "";
	$fieldLabelsEoc_takuhai_error["Japanese"]["field"] = "Field";
	$fieldToolTipsEoc_takuhai_error["Japanese"]["field"] = "";
	$placeHoldersEoc_takuhai_error["Japanese"]["field"] = "";
	if (count($fieldToolTipsEoc_takuhai_error["Japanese"]))
		$tdataEoc_takuhai_error[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsEoc_takuhai_error[""] = array();
	$fieldToolTipsEoc_takuhai_error[""] = array();
	$placeHoldersEoc_takuhai_error[""] = array();
	$pageTitlesEoc_takuhai_error[""] = array();
	$fieldLabelsEoc_takuhai_error[""]["id"] = "Id";
	$fieldToolTipsEoc_takuhai_error[""]["id"] = "";
	$placeHoldersEoc_takuhai_error[""]["id"] = "";
	$fieldLabelsEoc_takuhai_error[""]["name"] = "Name";
	$fieldToolTipsEoc_takuhai_error[""]["name"] = "";
	$placeHoldersEoc_takuhai_error[""]["name"] = "";
	$fieldLabelsEoc_takuhai_error[""]["msg"] = "Msg";
	$fieldToolTipsEoc_takuhai_error[""]["msg"] = "";
	$placeHoldersEoc_takuhai_error[""]["msg"] = "";
	$fieldLabelsEoc_takuhai_error[""]["memo"] = "Memo";
	$fieldToolTipsEoc_takuhai_error[""]["memo"] = "";
	$placeHoldersEoc_takuhai_error[""]["memo"] = "";
	$fieldLabelsEoc_takuhai_error[""]["sort"] = "Sort";
	$fieldToolTipsEoc_takuhai_error[""]["sort"] = "";
	$placeHoldersEoc_takuhai_error[""]["sort"] = "";
	$fieldLabelsEoc_takuhai_error[""]["field"] = "Field";
	$fieldToolTipsEoc_takuhai_error[""]["field"] = "";
	$placeHoldersEoc_takuhai_error[""]["field"] = "";
	if (count($fieldToolTipsEoc_takuhai_error[""]))
		$tdataEoc_takuhai_error[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsEoc_takuhai_error["English"] = array();
	$fieldToolTipsEoc_takuhai_error["English"] = array();
	$placeHoldersEoc_takuhai_error["English"] = array();
	$pageTitlesEoc_takuhai_error["English"] = array();
	$fieldLabelsEoc_takuhai_error["English"]["id"] = "Id";
	$fieldToolTipsEoc_takuhai_error["English"]["id"] = "";
	$placeHoldersEoc_takuhai_error["English"]["id"] = "";
	$fieldLabelsEoc_takuhai_error["English"]["name"] = "Name";
	$fieldToolTipsEoc_takuhai_error["English"]["name"] = "";
	$placeHoldersEoc_takuhai_error["English"]["name"] = "";
	$fieldLabelsEoc_takuhai_error["English"]["msg"] = "Msg";
	$fieldToolTipsEoc_takuhai_error["English"]["msg"] = "";
	$placeHoldersEoc_takuhai_error["English"]["msg"] = "";
	$fieldLabelsEoc_takuhai_error["English"]["memo"] = "Memo";
	$fieldToolTipsEoc_takuhai_error["English"]["memo"] = "";
	$placeHoldersEoc_takuhai_error["English"]["memo"] = "";
	$fieldLabelsEoc_takuhai_error["English"]["sort"] = "Sort";
	$fieldToolTipsEoc_takuhai_error["English"]["sort"] = "";
	$placeHoldersEoc_takuhai_error["English"]["sort"] = "";
	$fieldLabelsEoc_takuhai_error["English"]["field"] = "Field";
	$fieldToolTipsEoc_takuhai_error["English"]["field"] = "";
	$placeHoldersEoc_takuhai_error["English"]["field"] = "";
	if (count($fieldToolTipsEoc_takuhai_error["English"]))
		$tdataEoc_takuhai_error[".isUseToolTips"] = true;
}


	$tdataEoc_takuhai_error[".NCSearch"] = true;



$tdataEoc_takuhai_error[".shortTableName"] = "Eoc_takuhai_error";
$tdataEoc_takuhai_error[".nSecOptions"] = 0;
$tdataEoc_takuhai_error[".recsPerRowPrint"] = 1;
$tdataEoc_takuhai_error[".mainTableOwnerID"] = "";
$tdataEoc_takuhai_error[".moveNext"] = 1;
$tdataEoc_takuhai_error[".entityType"] = 0;

$tdataEoc_takuhai_error[".strOriginalTableName"] = "Eoc_takuhai_error";

	



$tdataEoc_takuhai_error[".showAddInPopup"] = false;

$tdataEoc_takuhai_error[".showEditInPopup"] = false;

$tdataEoc_takuhai_error[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataEoc_takuhai_error[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataEoc_takuhai_error[".fieldsForRegister"] = array();

$tdataEoc_takuhai_error[".listAjax"] = false;

	$tdataEoc_takuhai_error[".audit"] = false;

	$tdataEoc_takuhai_error[".locking"] = false;



$tdataEoc_takuhai_error[".list"] = true;

$tdataEoc_takuhai_error[".inlineEdit"] = true;


$tdataEoc_takuhai_error[".reorderRecordsByHeader"] = true;



$tdataEoc_takuhai_error[".inlineAdd"] = true;
$tdataEoc_takuhai_error[".view"] = true;




$tdataEoc_takuhai_error[".delete"] = true;

$tdataEoc_takuhai_error[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataEoc_takuhai_error[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataEoc_takuhai_error[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataEoc_takuhai_error[".searchSaving"] = false;
//

$tdataEoc_takuhai_error[".showSearchPanel"] = true;
		$tdataEoc_takuhai_error[".flexibleSearch"] = true;

$tdataEoc_takuhai_error[".isUseAjaxSuggest"] = true;

$tdataEoc_takuhai_error[".rowHighlite"] = true;



																																																																																																																																													

$tdataEoc_takuhai_error[".ajaxCodeSnippetAdded"] = false;

$tdataEoc_takuhai_error[".buttonsAdded"] = false;

$tdataEoc_takuhai_error[".addPageEvents"] = false;

// use timepicker for search panel
$tdataEoc_takuhai_error[".isUseTimeForSearch"] = false;





$tdataEoc_takuhai_error[".allSearchFields"] = array();
$tdataEoc_takuhai_error[".filterFields"] = array();
$tdataEoc_takuhai_error[".requiredSearchFields"] = array();

$tdataEoc_takuhai_error[".allSearchFields"][] = "id";
	$tdataEoc_takuhai_error[".allSearchFields"][] = "name";
	$tdataEoc_takuhai_error[".allSearchFields"][] = "msg";
	$tdataEoc_takuhai_error[".allSearchFields"][] = "memo";
	$tdataEoc_takuhai_error[".allSearchFields"][] = "sort";
	$tdataEoc_takuhai_error[".allSearchFields"][] = "field";
	

$tdataEoc_takuhai_error[".googleLikeFields"] = array();
$tdataEoc_takuhai_error[".googleLikeFields"][] = "id";
$tdataEoc_takuhai_error[".googleLikeFields"][] = "name";
$tdataEoc_takuhai_error[".googleLikeFields"][] = "msg";
$tdataEoc_takuhai_error[".googleLikeFields"][] = "memo";
$tdataEoc_takuhai_error[".googleLikeFields"][] = "sort";
$tdataEoc_takuhai_error[".googleLikeFields"][] = "field";


$tdataEoc_takuhai_error[".advSearchFields"] = array();
$tdataEoc_takuhai_error[".advSearchFields"][] = "id";
$tdataEoc_takuhai_error[".advSearchFields"][] = "name";
$tdataEoc_takuhai_error[".advSearchFields"][] = "msg";
$tdataEoc_takuhai_error[".advSearchFields"][] = "memo";
$tdataEoc_takuhai_error[".advSearchFields"][] = "sort";
$tdataEoc_takuhai_error[".advSearchFields"][] = "field";

$tdataEoc_takuhai_error[".tableType"] = "list";

$tdataEoc_takuhai_error[".printerPageOrientation"] = 0;
$tdataEoc_takuhai_error[".nPrinterPageScale"] = 100;

$tdataEoc_takuhai_error[".nPrinterSplitRecords"] = 40;

$tdataEoc_takuhai_error[".nPrinterPDFSplitRecords"] = 40;



$tdataEoc_takuhai_error[".geocodingEnabled"] = false;





$tdataEoc_takuhai_error[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataEoc_takuhai_error[".pageSize"] = 20;

$tdataEoc_takuhai_error[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataEoc_takuhai_error[".strOrderBy"] = $tstrOrderBy;

$tdataEoc_takuhai_error[".orderindexes"] = array();

$tdataEoc_takuhai_error[".sqlHead"] = "SELECT `id`,  	`name`,  	`msg`,  	`memo`,  	`sort`,  	`field`";
$tdataEoc_takuhai_error[".sqlFrom"] = "FROM `Eoc_takuhai_error`";
$tdataEoc_takuhai_error[".sqlWhereExpr"] = "";
$tdataEoc_takuhai_error[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataEoc_takuhai_error[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataEoc_takuhai_error[".arrGroupsPerPage"] = $arrGPP;

$tdataEoc_takuhai_error[".highlightSearchResults"] = true;

$tableKeysEoc_takuhai_error = array();
$tableKeysEoc_takuhai_error[] = "id";
$tdataEoc_takuhai_error[".Keys"] = $tableKeysEoc_takuhai_error;

$tdataEoc_takuhai_error[".listFields"] = array();
$tdataEoc_takuhai_error[".listFields"][] = "id";
$tdataEoc_takuhai_error[".listFields"][] = "name";
$tdataEoc_takuhai_error[".listFields"][] = "msg";
$tdataEoc_takuhai_error[".listFields"][] = "memo";
$tdataEoc_takuhai_error[".listFields"][] = "field";
$tdataEoc_takuhai_error[".listFields"][] = "sort";

$tdataEoc_takuhai_error[".hideMobileList"] = array();


$tdataEoc_takuhai_error[".viewFields"] = array();
$tdataEoc_takuhai_error[".viewFields"][] = "id";
$tdataEoc_takuhai_error[".viewFields"][] = "name";
$tdataEoc_takuhai_error[".viewFields"][] = "msg";
$tdataEoc_takuhai_error[".viewFields"][] = "memo";
$tdataEoc_takuhai_error[".viewFields"][] = "sort";
$tdataEoc_takuhai_error[".viewFields"][] = "field";

$tdataEoc_takuhai_error[".addFields"] = array();

$tdataEoc_takuhai_error[".masterListFields"] = array();
$tdataEoc_takuhai_error[".masterListFields"][] = "id";
$tdataEoc_takuhai_error[".masterListFields"][] = "name";
$tdataEoc_takuhai_error[".masterListFields"][] = "msg";
$tdataEoc_takuhai_error[".masterListFields"][] = "memo";
$tdataEoc_takuhai_error[".masterListFields"][] = "sort";
$tdataEoc_takuhai_error[".masterListFields"][] = "field";

$tdataEoc_takuhai_error[".inlineAddFields"] = array();
$tdataEoc_takuhai_error[".inlineAddFields"][] = "name";
$tdataEoc_takuhai_error[".inlineAddFields"][] = "msg";
$tdataEoc_takuhai_error[".inlineAddFields"][] = "memo";
$tdataEoc_takuhai_error[".inlineAddFields"][] = "field";
$tdataEoc_takuhai_error[".inlineAddFields"][] = "sort";

$tdataEoc_takuhai_error[".editFields"] = array();

$tdataEoc_takuhai_error[".inlineEditFields"] = array();
$tdataEoc_takuhai_error[".inlineEditFields"][] = "name";
$tdataEoc_takuhai_error[".inlineEditFields"][] = "msg";
$tdataEoc_takuhai_error[".inlineEditFields"][] = "memo";
$tdataEoc_takuhai_error[".inlineEditFields"][] = "field";
$tdataEoc_takuhai_error[".inlineEditFields"][] = "sort";

$tdataEoc_takuhai_error[".updateSelectedFields"] = array();


$tdataEoc_takuhai_error[".exportFields"] = array();

$tdataEoc_takuhai_error[".importFields"] = array();

$tdataEoc_takuhai_error[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "Eoc_takuhai_error";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai_error","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdataEoc_takuhai_error["id"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "Eoc_takuhai_error";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai_error","name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdataEoc_takuhai_error["name"] = $fdata;
//	msg
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "msg";
	$fdata["GoodName"] = "msg";
	$fdata["ownerTable"] = "Eoc_takuhai_error";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai_error","msg");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "msg";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`msg`";

	
	
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




	$tdataEoc_takuhai_error["msg"] = $fdata;
//	memo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "memo";
	$fdata["GoodName"] = "memo";
	$fdata["ownerTable"] = "Eoc_takuhai_error";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai_error","memo");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "memo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`memo`";

	
	
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




	$tdataEoc_takuhai_error["memo"] = $fdata;
//	sort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "sort";
	$fdata["GoodName"] = "sort";
	$fdata["ownerTable"] = "Eoc_takuhai_error";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai_error","sort");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdataEoc_takuhai_error["sort"] = $fdata;
//	field
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "field";
	$fdata["GoodName"] = "field";
	$fdata["ownerTable"] = "Eoc_takuhai_error";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai_error","field");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "field";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`field`";

	
	
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




	$tdataEoc_takuhai_error["field"] = $fdata;


$tables_data["Eoc_takuhai_error"]=&$tdataEoc_takuhai_error;
$field_labels["Eoc_takuhai_error"] = &$fieldLabelsEoc_takuhai_error;
$fieldToolTips["Eoc_takuhai_error"] = &$fieldToolTipsEoc_takuhai_error;
$placeHolders["Eoc_takuhai_error"] = &$placeHoldersEoc_takuhai_error;
$page_titles["Eoc_takuhai_error"] = &$pageTitlesEoc_takuhai_error;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Eoc_takuhai_error"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["Eoc_takuhai_error"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Eoc_takuhai_error()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  	`name`,  	`msg`,  	`memo`,  	`sort`,  	`field`";
$proto0["m_strFrom"] = "FROM `Eoc_takuhai_error`";
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
	"m_strTable" => "Eoc_takuhai_error",
	"m_srcTableName" => "Eoc_takuhai_error"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "Eoc_takuhai_error";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "Eoc_takuhai_error",
	"m_srcTableName" => "Eoc_takuhai_error"
));

$proto8["m_sql"] = "`name`";
$proto8["m_srcTableName"] = "Eoc_takuhai_error";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "msg",
	"m_strTable" => "Eoc_takuhai_error",
	"m_srcTableName" => "Eoc_takuhai_error"
));

$proto10["m_sql"] = "`msg`";
$proto10["m_srcTableName"] = "Eoc_takuhai_error";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "memo",
	"m_strTable" => "Eoc_takuhai_error",
	"m_srcTableName" => "Eoc_takuhai_error"
));

$proto12["m_sql"] = "`memo`";
$proto12["m_srcTableName"] = "Eoc_takuhai_error";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "sort",
	"m_strTable" => "Eoc_takuhai_error",
	"m_srcTableName" => "Eoc_takuhai_error"
));

$proto14["m_sql"] = "`sort`";
$proto14["m_srcTableName"] = "Eoc_takuhai_error";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "field",
	"m_strTable" => "Eoc_takuhai_error",
	"m_srcTableName" => "Eoc_takuhai_error"
));

$proto16["m_sql"] = "`field`";
$proto16["m_srcTableName"] = "Eoc_takuhai_error";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "Eoc_takuhai_error";
$proto19["m_srcTableName"] = "Eoc_takuhai_error";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "id";
$proto19["m_columns"][] = "name";
$proto19["m_columns"][] = "msg";
$proto19["m_columns"][] = "memo";
$proto19["m_columns"][] = "sort";
$proto19["m_columns"][] = "field";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "`Eoc_takuhai_error`";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "Eoc_takuhai_error";
$proto20=array();
$proto20["m_sql"] = "";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Eoc_takuhai_error";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Eoc_takuhai_error = createSqlQuery_Eoc_takuhai_error();


	
		;

						

$tdataEoc_takuhai_error[".sqlquery"] = $queryData_Eoc_takuhai_error;

$tableEvents["Eoc_takuhai_error"] = new eventsBase;
$tdataEoc_takuhai_error[".hasEvents"] = false;

?>