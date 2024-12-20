<?php
require_once(getabspath("classes/cipherer.php"));




$tdatafreee_taxes = array();
	$tdatafreee_taxes[".truncateText"] = true;
	$tdatafreee_taxes[".NumberOfChars"] = 80;
	$tdatafreee_taxes[".ShortName"] = "freee_taxes";
	$tdatafreee_taxes[".OwnerID"] = "";
	$tdatafreee_taxes[".OriginalTable"] = "freee_taxes";

//	field labels
$fieldLabelsfreee_taxes = array();
$fieldToolTipsfreee_taxes = array();
$pageTitlesfreee_taxes = array();
$placeHoldersfreee_taxes = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsfreee_taxes["Japanese"] = array();
	$fieldToolTipsfreee_taxes["Japanese"] = array();
	$placeHoldersfreee_taxes["Japanese"] = array();
	$pageTitlesfreee_taxes["Japanese"] = array();
	$fieldLabelsfreee_taxes["Japanese"]["id"] = "Id";
	$fieldToolTipsfreee_taxes["Japanese"]["id"] = "";
	$placeHoldersfreee_taxes["Japanese"]["id"] = "";
	$fieldLabelsfreee_taxes["Japanese"]["code"] = "Code";
	$fieldToolTipsfreee_taxes["Japanese"]["code"] = "";
	$placeHoldersfreee_taxes["Japanese"]["code"] = "";
	$fieldLabelsfreee_taxes["Japanese"]["name"] = "Name";
	$fieldToolTipsfreee_taxes["Japanese"]["name"] = "";
	$placeHoldersfreee_taxes["Japanese"]["name"] = "";
	$fieldLabelsfreee_taxes["Japanese"]["name_ja"] = "Name Ja";
	$fieldToolTipsfreee_taxes["Japanese"]["name_ja"] = "";
	$placeHoldersfreee_taxes["Japanese"]["name_ja"] = "";
	$fieldLabelsfreee_taxes["Japanese"]["created_at"] = "Created At";
	$fieldToolTipsfreee_taxes["Japanese"]["created_at"] = "";
	$placeHoldersfreee_taxes["Japanese"]["created_at"] = "";
	$fieldLabelsfreee_taxes["Japanese"]["created_by"] = "Created By";
	$fieldToolTipsfreee_taxes["Japanese"]["created_by"] = "";
	$placeHoldersfreee_taxes["Japanese"]["created_by"] = "";
	$fieldLabelsfreee_taxes["Japanese"]["updated_at"] = "Updated At";
	$fieldToolTipsfreee_taxes["Japanese"]["updated_at"] = "";
	$placeHoldersfreee_taxes["Japanese"]["updated_at"] = "";
	$fieldLabelsfreee_taxes["Japanese"]["updated_by"] = "Updated By";
	$fieldToolTipsfreee_taxes["Japanese"]["updated_by"] = "";
	$placeHoldersfreee_taxes["Japanese"]["updated_by"] = "";
	if (count($fieldToolTipsfreee_taxes["Japanese"]))
		$tdatafreee_taxes[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsfreee_taxes[""] = array();
	$fieldToolTipsfreee_taxes[""] = array();
	$placeHoldersfreee_taxes[""] = array();
	$pageTitlesfreee_taxes[""] = array();
	$fieldLabelsfreee_taxes[""]["id"] = "Id";
	$fieldToolTipsfreee_taxes[""]["id"] = "";
	$placeHoldersfreee_taxes[""]["id"] = "";
	$fieldLabelsfreee_taxes[""]["code"] = "Code";
	$fieldToolTipsfreee_taxes[""]["code"] = "";
	$placeHoldersfreee_taxes[""]["code"] = "";
	$fieldLabelsfreee_taxes[""]["name"] = "Name";
	$fieldToolTipsfreee_taxes[""]["name"] = "";
	$placeHoldersfreee_taxes[""]["name"] = "";
	$fieldLabelsfreee_taxes[""]["name_ja"] = "Name Ja";
	$fieldToolTipsfreee_taxes[""]["name_ja"] = "";
	$placeHoldersfreee_taxes[""]["name_ja"] = "";
	$fieldLabelsfreee_taxes[""]["created_at"] = "Created At";
	$fieldToolTipsfreee_taxes[""]["created_at"] = "";
	$placeHoldersfreee_taxes[""]["created_at"] = "";
	$fieldLabelsfreee_taxes[""]["created_by"] = "Created By";
	$fieldToolTipsfreee_taxes[""]["created_by"] = "";
	$placeHoldersfreee_taxes[""]["created_by"] = "";
	$fieldLabelsfreee_taxes[""]["updated_at"] = "Updated At";
	$fieldToolTipsfreee_taxes[""]["updated_at"] = "";
	$placeHoldersfreee_taxes[""]["updated_at"] = "";
	$fieldLabelsfreee_taxes[""]["updated_by"] = "Updated By";
	$fieldToolTipsfreee_taxes[""]["updated_by"] = "";
	$placeHoldersfreee_taxes[""]["updated_by"] = "";
	if (count($fieldToolTipsfreee_taxes[""]))
		$tdatafreee_taxes[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsfreee_taxes["English"] = array();
	$fieldToolTipsfreee_taxes["English"] = array();
	$placeHoldersfreee_taxes["English"] = array();
	$pageTitlesfreee_taxes["English"] = array();
	$fieldLabelsfreee_taxes["English"]["id"] = "Id";
	$fieldToolTipsfreee_taxes["English"]["id"] = "";
	$placeHoldersfreee_taxes["English"]["id"] = "";
	$fieldLabelsfreee_taxes["English"]["code"] = "Code";
	$fieldToolTipsfreee_taxes["English"]["code"] = "";
	$placeHoldersfreee_taxes["English"]["code"] = "";
	$fieldLabelsfreee_taxes["English"]["name"] = "Name";
	$fieldToolTipsfreee_taxes["English"]["name"] = "";
	$placeHoldersfreee_taxes["English"]["name"] = "";
	$fieldLabelsfreee_taxes["English"]["name_ja"] = "Name Ja";
	$fieldToolTipsfreee_taxes["English"]["name_ja"] = "";
	$placeHoldersfreee_taxes["English"]["name_ja"] = "";
	$fieldLabelsfreee_taxes["English"]["created_at"] = "Created At";
	$fieldToolTipsfreee_taxes["English"]["created_at"] = "";
	$placeHoldersfreee_taxes["English"]["created_at"] = "";
	$fieldLabelsfreee_taxes["English"]["created_by"] = "Created By";
	$fieldToolTipsfreee_taxes["English"]["created_by"] = "";
	$placeHoldersfreee_taxes["English"]["created_by"] = "";
	$fieldLabelsfreee_taxes["English"]["updated_at"] = "Updated At";
	$fieldToolTipsfreee_taxes["English"]["updated_at"] = "";
	$placeHoldersfreee_taxes["English"]["updated_at"] = "";
	$fieldLabelsfreee_taxes["English"]["updated_by"] = "Updated By";
	$fieldToolTipsfreee_taxes["English"]["updated_by"] = "";
	$placeHoldersfreee_taxes["English"]["updated_by"] = "";
	if (count($fieldToolTipsfreee_taxes["English"]))
		$tdatafreee_taxes[".isUseToolTips"] = true;
}


	$tdatafreee_taxes[".NCSearch"] = true;



$tdatafreee_taxes[".shortTableName"] = "freee_taxes";
$tdatafreee_taxes[".nSecOptions"] = 0;
$tdatafreee_taxes[".recsPerRowPrint"] = 1;
$tdatafreee_taxes[".mainTableOwnerID"] = "";
$tdatafreee_taxes[".moveNext"] = 1;
$tdatafreee_taxes[".entityType"] = 0;

$tdatafreee_taxes[".strOriginalTableName"] = "freee_taxes";

	



$tdatafreee_taxes[".showAddInPopup"] = false;

$tdatafreee_taxes[".showEditInPopup"] = false;

$tdatafreee_taxes[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatafreee_taxes[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatafreee_taxes[".fieldsForRegister"] = array();

$tdatafreee_taxes[".listAjax"] = false;

	$tdatafreee_taxes[".audit"] = false;

	$tdatafreee_taxes[".locking"] = false;






$tdatafreee_taxes[".reorderRecordsByHeader"] = true;








$tdatafreee_taxes[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatafreee_taxes[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatafreee_taxes[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatafreee_taxes[".searchSaving"] = false;
//

$tdatafreee_taxes[".showSearchPanel"] = true;
		$tdatafreee_taxes[".flexibleSearch"] = true;

$tdatafreee_taxes[".isUseAjaxSuggest"] = true;

$tdatafreee_taxes[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatafreee_taxes[".ajaxCodeSnippetAdded"] = false;

$tdatafreee_taxes[".buttonsAdded"] = false;

$tdatafreee_taxes[".addPageEvents"] = false;

// use timepicker for search panel
$tdatafreee_taxes[".isUseTimeForSearch"] = false;





$tdatafreee_taxes[".allSearchFields"] = array();
$tdatafreee_taxes[".filterFields"] = array();
$tdatafreee_taxes[".requiredSearchFields"] = array();



$tdatafreee_taxes[".googleLikeFields"] = array();
$tdatafreee_taxes[".googleLikeFields"][] = "id";
$tdatafreee_taxes[".googleLikeFields"][] = "code";
$tdatafreee_taxes[".googleLikeFields"][] = "name";
$tdatafreee_taxes[".googleLikeFields"][] = "name_ja";
$tdatafreee_taxes[".googleLikeFields"][] = "created_at";
$tdatafreee_taxes[".googleLikeFields"][] = "created_by";
$tdatafreee_taxes[".googleLikeFields"][] = "updated_at";
$tdatafreee_taxes[".googleLikeFields"][] = "updated_by";



$tdatafreee_taxes[".tableType"] = "list";

$tdatafreee_taxes[".printerPageOrientation"] = 0;
$tdatafreee_taxes[".nPrinterPageScale"] = 100;

$tdatafreee_taxes[".nPrinterSplitRecords"] = 40;

$tdatafreee_taxes[".nPrinterPDFSplitRecords"] = 40;



$tdatafreee_taxes[".geocodingEnabled"] = false;





$tdatafreee_taxes[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatafreee_taxes[".pageSize"] = 100;

$tdatafreee_taxes[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatafreee_taxes[".strOrderBy"] = $tstrOrderBy;

$tdatafreee_taxes[".orderindexes"] = array();

$tdatafreee_taxes[".sqlHead"] = "SELECT `id`,  	`code`,  	`name`,  	`name_ja`,  	`created_at`,  	`created_by`,  	`updated_at`,  	`updated_by`";
$tdatafreee_taxes[".sqlFrom"] = "FROM `freee_taxes`";
$tdatafreee_taxes[".sqlWhereExpr"] = "";
$tdatafreee_taxes[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatafreee_taxes[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatafreee_taxes[".arrGroupsPerPage"] = $arrGPP;

$tdatafreee_taxes[".highlightSearchResults"] = true;

$tableKeysfreee_taxes = array();
$tableKeysfreee_taxes[] = "id";
$tdatafreee_taxes[".Keys"] = $tableKeysfreee_taxes;

$tdatafreee_taxes[".listFields"] = array();
$tdatafreee_taxes[".listFields"][] = "id";
$tdatafreee_taxes[".listFields"][] = "code";
$tdatafreee_taxes[".listFields"][] = "name";
$tdatafreee_taxes[".listFields"][] = "name_ja";
$tdatafreee_taxes[".listFields"][] = "created_at";
$tdatafreee_taxes[".listFields"][] = "created_by";
$tdatafreee_taxes[".listFields"][] = "updated_at";
$tdatafreee_taxes[".listFields"][] = "updated_by";

$tdatafreee_taxes[".hideMobileList"] = array();


$tdatafreee_taxes[".viewFields"] = array();
$tdatafreee_taxes[".viewFields"][] = "id";
$tdatafreee_taxes[".viewFields"][] = "code";
$tdatafreee_taxes[".viewFields"][] = "name";
$tdatafreee_taxes[".viewFields"][] = "name_ja";
$tdatafreee_taxes[".viewFields"][] = "created_at";
$tdatafreee_taxes[".viewFields"][] = "created_by";
$tdatafreee_taxes[".viewFields"][] = "updated_at";
$tdatafreee_taxes[".viewFields"][] = "updated_by";

$tdatafreee_taxes[".addFields"] = array();
$tdatafreee_taxes[".addFields"][] = "code";
$tdatafreee_taxes[".addFields"][] = "name";
$tdatafreee_taxes[".addFields"][] = "name_ja";
$tdatafreee_taxes[".addFields"][] = "created_at";
$tdatafreee_taxes[".addFields"][] = "created_by";
$tdatafreee_taxes[".addFields"][] = "updated_at";
$tdatafreee_taxes[".addFields"][] = "updated_by";

$tdatafreee_taxes[".masterListFields"] = array();
$tdatafreee_taxes[".masterListFields"][] = "id";
$tdatafreee_taxes[".masterListFields"][] = "code";
$tdatafreee_taxes[".masterListFields"][] = "name";
$tdatafreee_taxes[".masterListFields"][] = "name_ja";
$tdatafreee_taxes[".masterListFields"][] = "created_at";
$tdatafreee_taxes[".masterListFields"][] = "created_by";
$tdatafreee_taxes[".masterListFields"][] = "updated_at";
$tdatafreee_taxes[".masterListFields"][] = "updated_by";

$tdatafreee_taxes[".inlineAddFields"] = array();
$tdatafreee_taxes[".inlineAddFields"][] = "code";
$tdatafreee_taxes[".inlineAddFields"][] = "name";
$tdatafreee_taxes[".inlineAddFields"][] = "name_ja";
$tdatafreee_taxes[".inlineAddFields"][] = "created_at";
$tdatafreee_taxes[".inlineAddFields"][] = "created_by";
$tdatafreee_taxes[".inlineAddFields"][] = "updated_at";
$tdatafreee_taxes[".inlineAddFields"][] = "updated_by";

$tdatafreee_taxes[".editFields"] = array();
$tdatafreee_taxes[".editFields"][] = "code";
$tdatafreee_taxes[".editFields"][] = "name";
$tdatafreee_taxes[".editFields"][] = "name_ja";
$tdatafreee_taxes[".editFields"][] = "created_at";
$tdatafreee_taxes[".editFields"][] = "created_by";
$tdatafreee_taxes[".editFields"][] = "updated_at";
$tdatafreee_taxes[".editFields"][] = "updated_by";

$tdatafreee_taxes[".inlineEditFields"] = array();
$tdatafreee_taxes[".inlineEditFields"][] = "code";
$tdatafreee_taxes[".inlineEditFields"][] = "name";
$tdatafreee_taxes[".inlineEditFields"][] = "name_ja";
$tdatafreee_taxes[".inlineEditFields"][] = "created_at";
$tdatafreee_taxes[".inlineEditFields"][] = "created_by";
$tdatafreee_taxes[".inlineEditFields"][] = "updated_at";
$tdatafreee_taxes[".inlineEditFields"][] = "updated_by";

$tdatafreee_taxes[".updateSelectedFields"] = array();
$tdatafreee_taxes[".updateSelectedFields"][] = "code";
$tdatafreee_taxes[".updateSelectedFields"][] = "name";
$tdatafreee_taxes[".updateSelectedFields"][] = "name_ja";
$tdatafreee_taxes[".updateSelectedFields"][] = "created_at";
$tdatafreee_taxes[".updateSelectedFields"][] = "created_by";
$tdatafreee_taxes[".updateSelectedFields"][] = "updated_at";
$tdatafreee_taxes[".updateSelectedFields"][] = "updated_by";


$tdatafreee_taxes[".exportFields"] = array();
$tdatafreee_taxes[".exportFields"][] = "id";
$tdatafreee_taxes[".exportFields"][] = "code";
$tdatafreee_taxes[".exportFields"][] = "name";
$tdatafreee_taxes[".exportFields"][] = "name_ja";
$tdatafreee_taxes[".exportFields"][] = "created_at";
$tdatafreee_taxes[".exportFields"][] = "created_by";
$tdatafreee_taxes[".exportFields"][] = "updated_at";
$tdatafreee_taxes[".exportFields"][] = "updated_by";

$tdatafreee_taxes[".importFields"] = array();
$tdatafreee_taxes[".importFields"][] = "id";
$tdatafreee_taxes[".importFields"][] = "code";
$tdatafreee_taxes[".importFields"][] = "name";
$tdatafreee_taxes[".importFields"][] = "name_ja";
$tdatafreee_taxes[".importFields"][] = "created_at";
$tdatafreee_taxes[".importFields"][] = "created_by";
$tdatafreee_taxes[".importFields"][] = "updated_at";
$tdatafreee_taxes[".importFields"][] = "updated_by";

$tdatafreee_taxes[".printFields"] = array();
$tdatafreee_taxes[".printFields"][] = "id";
$tdatafreee_taxes[".printFields"][] = "code";
$tdatafreee_taxes[".printFields"][] = "name";
$tdatafreee_taxes[".printFields"][] = "name_ja";
$tdatafreee_taxes[".printFields"][] = "created_at";
$tdatafreee_taxes[".printFields"][] = "created_by";
$tdatafreee_taxes[".printFields"][] = "updated_at";
$tdatafreee_taxes[".printFields"][] = "updated_by";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "freee_taxes";
	$fdata["Label"] = GetFieldLabel("freee_taxes","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
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








	$tdatafreee_taxes["id"] = $fdata;
//	code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "code";
	$fdata["GoodName"] = "code";
	$fdata["ownerTable"] = "freee_taxes";
	$fdata["Label"] = GetFieldLabel("freee_taxes","code");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "code";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`code`";

	
	
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








	$tdatafreee_taxes["code"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "freee_taxes";
	$fdata["Label"] = GetFieldLabel("freee_taxes","name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
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
			$edata["EditParams"].= " maxlength=100";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatafreee_taxes["name"] = $fdata;
//	name_ja
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "name_ja";
	$fdata["GoodName"] = "name_ja";
	$fdata["ownerTable"] = "freee_taxes";
	$fdata["Label"] = GetFieldLabel("freee_taxes","name_ja");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "name_ja";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`name_ja`";

	
	
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
			$edata["EditParams"].= " maxlength=100";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatafreee_taxes["name_ja"] = $fdata;
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "freee_taxes";
	$fdata["Label"] = GetFieldLabel("freee_taxes","created_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

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








	$tdatafreee_taxes["created_at"] = $fdata;
//	created_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "created_by";
	$fdata["GoodName"] = "created_by";
	$fdata["ownerTable"] = "freee_taxes";
	$fdata["Label"] = GetFieldLabel("freee_taxes","created_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "created_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`created_by`";

	
	
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








	$tdatafreee_taxes["created_by"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "freee_taxes";
	$fdata["Label"] = GetFieldLabel("freee_taxes","updated_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

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








	$tdatafreee_taxes["updated_at"] = $fdata;
//	updated_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "updated_by";
	$fdata["GoodName"] = "updated_by";
	$fdata["ownerTable"] = "freee_taxes";
	$fdata["Label"] = GetFieldLabel("freee_taxes","updated_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "updated_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`updated_by`";

	
	
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








	$tdatafreee_taxes["updated_by"] = $fdata;


$tables_data["freee_taxes"]=&$tdatafreee_taxes;
$field_labels["freee_taxes"] = &$fieldLabelsfreee_taxes;
$fieldToolTips["freee_taxes"] = &$fieldToolTipsfreee_taxes;
$placeHolders["freee_taxes"] = &$placeHoldersfreee_taxes;
$page_titles["freee_taxes"] = &$pageTitlesfreee_taxes;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["freee_taxes"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["freee_taxes"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_freee_taxes()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  	`code`,  	`name`,  	`name_ja`,  	`created_at`,  	`created_by`,  	`updated_at`,  	`updated_by`";
$proto0["m_strFrom"] = "FROM `freee_taxes`";
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
	"m_strTable" => "freee_taxes",
	"m_srcTableName" => "freee_taxes"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "freee_taxes";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "code",
	"m_strTable" => "freee_taxes",
	"m_srcTableName" => "freee_taxes"
));

$proto8["m_sql"] = "`code`";
$proto8["m_srcTableName"] = "freee_taxes";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "freee_taxes",
	"m_srcTableName" => "freee_taxes"
));

$proto10["m_sql"] = "`name`";
$proto10["m_srcTableName"] = "freee_taxes";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "name_ja",
	"m_strTable" => "freee_taxes",
	"m_srcTableName" => "freee_taxes"
));

$proto12["m_sql"] = "`name_ja`";
$proto12["m_srcTableName"] = "freee_taxes";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "freee_taxes",
	"m_srcTableName" => "freee_taxes"
));

$proto14["m_sql"] = "`created_at`";
$proto14["m_srcTableName"] = "freee_taxes";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "created_by",
	"m_strTable" => "freee_taxes",
	"m_srcTableName" => "freee_taxes"
));

$proto16["m_sql"] = "`created_by`";
$proto16["m_srcTableName"] = "freee_taxes";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "freee_taxes",
	"m_srcTableName" => "freee_taxes"
));

$proto18["m_sql"] = "`updated_at`";
$proto18["m_srcTableName"] = "freee_taxes";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by",
	"m_strTable" => "freee_taxes",
	"m_srcTableName" => "freee_taxes"
));

$proto20["m_sql"] = "`updated_by`";
$proto20["m_srcTableName"] = "freee_taxes";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "freee_taxes";
$proto23["m_srcTableName"] = "freee_taxes";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "id";
$proto23["m_columns"][] = "code";
$proto23["m_columns"][] = "name";
$proto23["m_columns"][] = "name_ja";
$proto23["m_columns"][] = "created_at";
$proto23["m_columns"][] = "created_by";
$proto23["m_columns"][] = "updated_at";
$proto23["m_columns"][] = "updated_by";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "`freee_taxes`";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "freee_taxes";
$proto24=array();
$proto24["m_sql"] = "";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

$proto22["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto22);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="freee_taxes";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_freee_taxes = createSqlQuery_freee_taxes();


	
		;

								

$tdatafreee_taxes[".sqlquery"] = $queryData_freee_taxes;

$tableEvents["freee_taxes"] = new eventsBase;
$tdatafreee_taxes[".hasEvents"] = false;

?>