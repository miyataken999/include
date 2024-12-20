<?php
require_once(getabspath("classes/cipherer.php"));




$tdatafreee_memotags = array();
	$tdatafreee_memotags[".truncateText"] = true;
	$tdatafreee_memotags[".NumberOfChars"] = 80;
	$tdatafreee_memotags[".ShortName"] = "freee_memotags";
	$tdatafreee_memotags[".OwnerID"] = "";
	$tdatafreee_memotags[".OriginalTable"] = "freee_memotags";

//	field labels
$fieldLabelsfreee_memotags = array();
$fieldToolTipsfreee_memotags = array();
$pageTitlesfreee_memotags = array();
$placeHoldersfreee_memotags = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsfreee_memotags["Japanese"] = array();
	$fieldToolTipsfreee_memotags["Japanese"] = array();
	$placeHoldersfreee_memotags["Japanese"] = array();
	$pageTitlesfreee_memotags["Japanese"] = array();
	$fieldLabelsfreee_memotags["Japanese"]["id"] = "Id";
	$fieldToolTipsfreee_memotags["Japanese"]["id"] = "";
	$placeHoldersfreee_memotags["Japanese"]["id"] = "";
	$fieldLabelsfreee_memotags["Japanese"]["company_id"] = "Company Id";
	$fieldToolTipsfreee_memotags["Japanese"]["company_id"] = "";
	$placeHoldersfreee_memotags["Japanese"]["company_id"] = "";
	$fieldLabelsfreee_memotags["Japanese"]["name"] = "メモタグ";
	$fieldToolTipsfreee_memotags["Japanese"]["name"] = "";
	$placeHoldersfreee_memotags["Japanese"]["name"] = "";
	$fieldLabelsfreee_memotags["Japanese"]["update_date"] = "Freee側更新日";
	$fieldToolTipsfreee_memotags["Japanese"]["update_date"] = "";
	$placeHoldersfreee_memotags["Japanese"]["update_date"] = "";
	$fieldLabelsfreee_memotags["Japanese"]["shortcut1"] = "Shortcut1";
	$fieldToolTipsfreee_memotags["Japanese"]["shortcut1"] = "";
	$placeHoldersfreee_memotags["Japanese"]["shortcut1"] = "";
	$fieldLabelsfreee_memotags["Japanese"]["shortcut2"] = "Shortcut2";
	$fieldToolTipsfreee_memotags["Japanese"]["shortcut2"] = "";
	$placeHoldersfreee_memotags["Japanese"]["shortcut2"] = "";
	$fieldLabelsfreee_memotags["Japanese"]["created_at"] = "作成日";
	$fieldToolTipsfreee_memotags["Japanese"]["created_at"] = "";
	$placeHoldersfreee_memotags["Japanese"]["created_at"] = "";
	$fieldLabelsfreee_memotags["Japanese"]["created_by"] = "作成者";
	$fieldToolTipsfreee_memotags["Japanese"]["created_by"] = "";
	$placeHoldersfreee_memotags["Japanese"]["created_by"] = "";
	$fieldLabelsfreee_memotags["Japanese"]["updated_at"] = "更新日";
	$fieldToolTipsfreee_memotags["Japanese"]["updated_at"] = "";
	$placeHoldersfreee_memotags["Japanese"]["updated_at"] = "";
	$fieldLabelsfreee_memotags["Japanese"]["updated_by"] = "更新者";
	$fieldToolTipsfreee_memotags["Japanese"]["updated_by"] = "";
	$placeHoldersfreee_memotags["Japanese"]["updated_by"] = "";
	$fieldLabelsfreee_memotags["Japanese"]["dept_group_id"] = "部署Id";
	$fieldToolTipsfreee_memotags["Japanese"]["dept_group_id"] = "";
	$placeHoldersfreee_memotags["Japanese"]["dept_group_id"] = "";
	if (count($fieldToolTipsfreee_memotags["Japanese"]))
		$tdatafreee_memotags[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsfreee_memotags[""] = array();
	$fieldToolTipsfreee_memotags[""] = array();
	$placeHoldersfreee_memotags[""] = array();
	$pageTitlesfreee_memotags[""] = array();
	$fieldLabelsfreee_memotags[""]["id"] = "Id";
	$fieldToolTipsfreee_memotags[""]["id"] = "";
	$placeHoldersfreee_memotags[""]["id"] = "";
	$fieldLabelsfreee_memotags[""]["company_id"] = "Company Id";
	$fieldToolTipsfreee_memotags[""]["company_id"] = "";
	$placeHoldersfreee_memotags[""]["company_id"] = "";
	$fieldLabelsfreee_memotags[""]["name"] = "Name";
	$fieldToolTipsfreee_memotags[""]["name"] = "";
	$placeHoldersfreee_memotags[""]["name"] = "";
	$fieldLabelsfreee_memotags[""]["update_date"] = "Update Date";
	$fieldToolTipsfreee_memotags[""]["update_date"] = "";
	$placeHoldersfreee_memotags[""]["update_date"] = "";
	$fieldLabelsfreee_memotags[""]["shortcut1"] = "Shortcut1";
	$fieldToolTipsfreee_memotags[""]["shortcut1"] = "";
	$placeHoldersfreee_memotags[""]["shortcut1"] = "";
	$fieldLabelsfreee_memotags[""]["shortcut2"] = "Shortcut2";
	$fieldToolTipsfreee_memotags[""]["shortcut2"] = "";
	$placeHoldersfreee_memotags[""]["shortcut2"] = "";
	$fieldLabelsfreee_memotags[""]["created_at"] = "Created At";
	$fieldToolTipsfreee_memotags[""]["created_at"] = "";
	$placeHoldersfreee_memotags[""]["created_at"] = "";
	$fieldLabelsfreee_memotags[""]["created_by"] = "Created By";
	$fieldToolTipsfreee_memotags[""]["created_by"] = "";
	$placeHoldersfreee_memotags[""]["created_by"] = "";
	$fieldLabelsfreee_memotags[""]["updated_at"] = "Updated At";
	$fieldToolTipsfreee_memotags[""]["updated_at"] = "";
	$placeHoldersfreee_memotags[""]["updated_at"] = "";
	$fieldLabelsfreee_memotags[""]["updated_by"] = "Updated By";
	$fieldToolTipsfreee_memotags[""]["updated_by"] = "";
	$placeHoldersfreee_memotags[""]["updated_by"] = "";
	$fieldLabelsfreee_memotags[""]["dept_group_id"] = "Dept Group Id";
	$fieldToolTipsfreee_memotags[""]["dept_group_id"] = "";
	$placeHoldersfreee_memotags[""]["dept_group_id"] = "";
	if (count($fieldToolTipsfreee_memotags[""]))
		$tdatafreee_memotags[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsfreee_memotags["English"] = array();
	$fieldToolTipsfreee_memotags["English"] = array();
	$placeHoldersfreee_memotags["English"] = array();
	$pageTitlesfreee_memotags["English"] = array();
	$fieldLabelsfreee_memotags["English"]["id"] = "Id";
	$fieldToolTipsfreee_memotags["English"]["id"] = "";
	$placeHoldersfreee_memotags["English"]["id"] = "";
	$fieldLabelsfreee_memotags["English"]["company_id"] = "Company Id";
	$fieldToolTipsfreee_memotags["English"]["company_id"] = "";
	$placeHoldersfreee_memotags["English"]["company_id"] = "";
	$fieldLabelsfreee_memotags["English"]["name"] = "Name";
	$fieldToolTipsfreee_memotags["English"]["name"] = "";
	$placeHoldersfreee_memotags["English"]["name"] = "";
	$fieldLabelsfreee_memotags["English"]["update_date"] = "Update Date";
	$fieldToolTipsfreee_memotags["English"]["update_date"] = "";
	$placeHoldersfreee_memotags["English"]["update_date"] = "";
	$fieldLabelsfreee_memotags["English"]["shortcut1"] = "Shortcut1";
	$fieldToolTipsfreee_memotags["English"]["shortcut1"] = "";
	$placeHoldersfreee_memotags["English"]["shortcut1"] = "";
	$fieldLabelsfreee_memotags["English"]["shortcut2"] = "Shortcut2";
	$fieldToolTipsfreee_memotags["English"]["shortcut2"] = "";
	$placeHoldersfreee_memotags["English"]["shortcut2"] = "";
	$fieldLabelsfreee_memotags["English"]["created_at"] = "Created At";
	$fieldToolTipsfreee_memotags["English"]["created_at"] = "";
	$placeHoldersfreee_memotags["English"]["created_at"] = "";
	$fieldLabelsfreee_memotags["English"]["created_by"] = "Created By";
	$fieldToolTipsfreee_memotags["English"]["created_by"] = "";
	$placeHoldersfreee_memotags["English"]["created_by"] = "";
	$fieldLabelsfreee_memotags["English"]["updated_at"] = "Updated At";
	$fieldToolTipsfreee_memotags["English"]["updated_at"] = "";
	$placeHoldersfreee_memotags["English"]["updated_at"] = "";
	$fieldLabelsfreee_memotags["English"]["updated_by"] = "Updated By";
	$fieldToolTipsfreee_memotags["English"]["updated_by"] = "";
	$placeHoldersfreee_memotags["English"]["updated_by"] = "";
	$fieldLabelsfreee_memotags["English"]["dept_group_id"] = "Dept Group Id";
	$fieldToolTipsfreee_memotags["English"]["dept_group_id"] = "";
	$placeHoldersfreee_memotags["English"]["dept_group_id"] = "";
	if (count($fieldToolTipsfreee_memotags["English"]))
		$tdatafreee_memotags[".isUseToolTips"] = true;
}


	$tdatafreee_memotags[".NCSearch"] = true;



$tdatafreee_memotags[".shortTableName"] = "freee_memotags";
$tdatafreee_memotags[".nSecOptions"] = 0;
$tdatafreee_memotags[".recsPerRowPrint"] = 1;
$tdatafreee_memotags[".mainTableOwnerID"] = "";
$tdatafreee_memotags[".moveNext"] = 1;
$tdatafreee_memotags[".entityType"] = 0;

$tdatafreee_memotags[".strOriginalTableName"] = "freee_memotags";

	



$tdatafreee_memotags[".showAddInPopup"] = false;

$tdatafreee_memotags[".showEditInPopup"] = false;

$tdatafreee_memotags[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatafreee_memotags[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatafreee_memotags[".fieldsForRegister"] = array();

$tdatafreee_memotags[".listAjax"] = false;

	$tdatafreee_memotags[".audit"] = false;

	$tdatafreee_memotags[".locking"] = false;



$tdatafreee_memotags[".list"] = true;



$tdatafreee_memotags[".reorderRecordsByHeader"] = true;





$tdatafreee_memotags[".exportTo"] = true;



$tdatafreee_memotags[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatafreee_memotags[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatafreee_memotags[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatafreee_memotags[".searchSaving"] = false;
//

$tdatafreee_memotags[".showSearchPanel"] = true;
		$tdatafreee_memotags[".flexibleSearch"] = true;

$tdatafreee_memotags[".isUseAjaxSuggest"] = true;

$tdatafreee_memotags[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatafreee_memotags[".ajaxCodeSnippetAdded"] = false;

$tdatafreee_memotags[".buttonsAdded"] = false;

$tdatafreee_memotags[".addPageEvents"] = false;

// use timepicker for search panel
$tdatafreee_memotags[".isUseTimeForSearch"] = false;




$tdatafreee_memotags[".detailsLinksOnList"] = "1";

$tdatafreee_memotags[".allSearchFields"] = array();
$tdatafreee_memotags[".filterFields"] = array();
$tdatafreee_memotags[".requiredSearchFields"] = array();

$tdatafreee_memotags[".allSearchFields"][] = "id";
	$tdatafreee_memotags[".allSearchFields"][] = "name";
	$tdatafreee_memotags[".allSearchFields"][] = "update_date";
	$tdatafreee_memotags[".allSearchFields"][] = "created_at";
	$tdatafreee_memotags[".allSearchFields"][] = "created_by";
	$tdatafreee_memotags[".allSearchFields"][] = "updated_at";
	$tdatafreee_memotags[".allSearchFields"][] = "updated_by";
	$tdatafreee_memotags[".allSearchFields"][] = "dept_group_id";
	

$tdatafreee_memotags[".googleLikeFields"] = array();
$tdatafreee_memotags[".googleLikeFields"][] = "id";
$tdatafreee_memotags[".googleLikeFields"][] = "company_id";
$tdatafreee_memotags[".googleLikeFields"][] = "name";
$tdatafreee_memotags[".googleLikeFields"][] = "update_date";
$tdatafreee_memotags[".googleLikeFields"][] = "shortcut1";
$tdatafreee_memotags[".googleLikeFields"][] = "shortcut2";
$tdatafreee_memotags[".googleLikeFields"][] = "created_at";
$tdatafreee_memotags[".googleLikeFields"][] = "created_by";
$tdatafreee_memotags[".googleLikeFields"][] = "updated_at";
$tdatafreee_memotags[".googleLikeFields"][] = "updated_by";
$tdatafreee_memotags[".googleLikeFields"][] = "dept_group_id";


$tdatafreee_memotags[".advSearchFields"] = array();
$tdatafreee_memotags[".advSearchFields"][] = "id";
$tdatafreee_memotags[".advSearchFields"][] = "name";
$tdatafreee_memotags[".advSearchFields"][] = "update_date";
$tdatafreee_memotags[".advSearchFields"][] = "created_at";
$tdatafreee_memotags[".advSearchFields"][] = "created_by";
$tdatafreee_memotags[".advSearchFields"][] = "updated_at";
$tdatafreee_memotags[".advSearchFields"][] = "updated_by";
$tdatafreee_memotags[".advSearchFields"][] = "dept_group_id";

$tdatafreee_memotags[".tableType"] = "list";

$tdatafreee_memotags[".printerPageOrientation"] = 0;
$tdatafreee_memotags[".nPrinterPageScale"] = 100;

$tdatafreee_memotags[".nPrinterSplitRecords"] = 40;

$tdatafreee_memotags[".nPrinterPDFSplitRecords"] = 40;



$tdatafreee_memotags[".geocodingEnabled"] = false;





$tdatafreee_memotags[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatafreee_memotags[".pageSize"] = 100;

$tdatafreee_memotags[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatafreee_memotags[".strOrderBy"] = $tstrOrderBy;

$tdatafreee_memotags[".orderindexes"] = array();

$tdatafreee_memotags[".sqlHead"] = "SELECT `id`,  	`company_id`,  	`name`,  	`update_date`,  	`shortcut1`,  	`shortcut2`,  	`created_at`,  	`created_by`,  	`updated_at`,  	`updated_by`,  	`dept_group_id`";
$tdatafreee_memotags[".sqlFrom"] = "FROM `freee_memotags`";
$tdatafreee_memotags[".sqlWhereExpr"] = "";
$tdatafreee_memotags[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatafreee_memotags[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatafreee_memotags[".arrGroupsPerPage"] = $arrGPP;

$tdatafreee_memotags[".highlightSearchResults"] = true;

$tableKeysfreee_memotags = array();
$tableKeysfreee_memotags[] = "id";
$tdatafreee_memotags[".Keys"] = $tableKeysfreee_memotags;

$tdatafreee_memotags[".listFields"] = array();
$tdatafreee_memotags[".listFields"][] = "id";
$tdatafreee_memotags[".listFields"][] = "name";
$tdatafreee_memotags[".listFields"][] = "update_date";
$tdatafreee_memotags[".listFields"][] = "created_at";
$tdatafreee_memotags[".listFields"][] = "created_by";
$tdatafreee_memotags[".listFields"][] = "updated_at";
$tdatafreee_memotags[".listFields"][] = "updated_by";
$tdatafreee_memotags[".listFields"][] = "dept_group_id";

$tdatafreee_memotags[".hideMobileList"] = array();


$tdatafreee_memotags[".viewFields"] = array();

$tdatafreee_memotags[".addFields"] = array();

$tdatafreee_memotags[".masterListFields"] = array();
$tdatafreee_memotags[".masterListFields"][] = "id";
$tdatafreee_memotags[".masterListFields"][] = "name";
$tdatafreee_memotags[".masterListFields"][] = "update_date";
$tdatafreee_memotags[".masterListFields"][] = "created_at";
$tdatafreee_memotags[".masterListFields"][] = "created_by";
$tdatafreee_memotags[".masterListFields"][] = "updated_at";
$tdatafreee_memotags[".masterListFields"][] = "updated_by";
$tdatafreee_memotags[".masterListFields"][] = "dept_group_id";

$tdatafreee_memotags[".inlineAddFields"] = array();

$tdatafreee_memotags[".editFields"] = array();

$tdatafreee_memotags[".inlineEditFields"] = array();

$tdatafreee_memotags[".updateSelectedFields"] = array();


$tdatafreee_memotags[".exportFields"] = array();
$tdatafreee_memotags[".exportFields"][] = "id";
$tdatafreee_memotags[".exportFields"][] = "name";
$tdatafreee_memotags[".exportFields"][] = "update_date";
$tdatafreee_memotags[".exportFields"][] = "created_at";
$tdatafreee_memotags[".exportFields"][] = "created_by";
$tdatafreee_memotags[".exportFields"][] = "updated_at";
$tdatafreee_memotags[".exportFields"][] = "updated_by";
$tdatafreee_memotags[".exportFields"][] = "dept_group_id";

$tdatafreee_memotags[".importFields"] = array();

$tdatafreee_memotags[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "freee_memotags";
	$fdata["Label"] = GetFieldLabel("freee_memotags","id");
	$fdata["FieldType"] = 20;

	
	
	
			
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatafreee_memotags["id"] = $fdata;
//	company_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "company_id";
	$fdata["GoodName"] = "company_id";
	$fdata["ownerTable"] = "freee_memotags";
	$fdata["Label"] = GetFieldLabel("freee_memotags","company_id");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "company_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`company_id`";

	
	
			
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








	$tdatafreee_memotags["company_id"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "freee_memotags";
	$fdata["Label"] = GetFieldLabel("freee_memotags","name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=30";

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




	$tdatafreee_memotags["name"] = $fdata;
//	update_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "update_date";
	$fdata["GoodName"] = "update_date";
	$fdata["ownerTable"] = "freee_memotags";
	$fdata["Label"] = GetFieldLabel("freee_memotags","update_date");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "update_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`update_date`";

	
	
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




	$tdatafreee_memotags["update_date"] = $fdata;
//	shortcut1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "shortcut1";
	$fdata["GoodName"] = "shortcut1";
	$fdata["ownerTable"] = "freee_memotags";
	$fdata["Label"] = GetFieldLabel("freee_memotags","shortcut1");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "shortcut1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shortcut1`";

	
	
			
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








	$tdatafreee_memotags["shortcut1"] = $fdata;
//	shortcut2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "shortcut2";
	$fdata["GoodName"] = "shortcut2";
	$fdata["ownerTable"] = "freee_memotags";
	$fdata["Label"] = GetFieldLabel("freee_memotags","shortcut2");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "shortcut2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shortcut2`";

	
	
			
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








	$tdatafreee_memotags["shortcut2"] = $fdata;
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "freee_memotags";
	$fdata["Label"] = GetFieldLabel("freee_memotags","created_at");
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

	$vdata = array("ViewFormat" => "Datetime");

	
	
	
	
	
	
	
	
	
	
	
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




	$tdatafreee_memotags["created_at"] = $fdata;
//	created_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "created_by";
	$fdata["GoodName"] = "created_by";
	$fdata["ownerTable"] = "freee_memotags";
	$fdata["Label"] = GetFieldLabel("freee_memotags","created_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "users";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "user_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "first_name";

	
	$edata["LookupOrderBy"] = "income_id";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatafreee_memotags["created_by"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "freee_memotags";
	$fdata["Label"] = GetFieldLabel("freee_memotags","updated_at");
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

	$vdata = array("ViewFormat" => "Datetime");

	
	
	
	
	
	
	
	
	
	
	
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




	$tdatafreee_memotags["updated_at"] = $fdata;
//	updated_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "updated_by";
	$fdata["GoodName"] = "updated_by";
	$fdata["ownerTable"] = "freee_memotags";
	$fdata["Label"] = GetFieldLabel("freee_memotags","updated_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "users";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "user_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "first_name";

	
	$edata["LookupOrderBy"] = "income_id";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatafreee_memotags["updated_by"] = $fdata;
//	dept_group_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "dept_group_id";
	$fdata["GoodName"] = "dept_group_id";
	$fdata["ownerTable"] = "freee_memotags";
	$fdata["Label"] = GetFieldLabel("freee_memotags","dept_group_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "dept_group_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`dept_group_id`";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "mst_dept_group";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "name";

	
	$edata["LookupOrderBy"] = "sort";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatafreee_memotags["dept_group_id"] = $fdata;


$tables_data["freee_memotags"]=&$tdatafreee_memotags;
$field_labels["freee_memotags"] = &$fieldLabelsfreee_memotags;
$fieldToolTips["freee_memotags"] = &$fieldToolTipsfreee_memotags;
$placeHolders["freee_memotags"] = &$placeHoldersfreee_memotags;
$page_titles["freee_memotags"] = &$pageTitlesfreee_memotags;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["freee_memotags"] = array();
//	freee_deal_detail__memotag
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="freee_deal_detail__memotag";
		$detailsParam["dOriginalTable"] = "freee_deal_detail__memotag";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "freee_deal_detail__memotag";
	$detailsParam["dCaptionTable"] = GetTableCaption("freee_deal_detail__memotag");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

/*			$detailsParam["dispChildCount"] = "1";
*/
	$detailsParam["dispChildCount"] = "1";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 0;
		$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["freee_memotags"][$dIndex] = $detailsParam;

	
		$detailsTablesData["freee_memotags"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["freee_memotags"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["freee_memotags"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["freee_memotags"][$dIndex]["detailKeys"][]="memotag_id";

// tables which are master tables for current table (detail)
$masterTablesData["freee_memotags"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_freee_memotags()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  	`company_id`,  	`name`,  	`update_date`,  	`shortcut1`,  	`shortcut2`,  	`created_at`,  	`created_by`,  	`updated_at`,  	`updated_by`,  	`dept_group_id`";
$proto0["m_strFrom"] = "FROM `freee_memotags`";
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
	"m_strTable" => "freee_memotags",
	"m_srcTableName" => "freee_memotags"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "freee_memotags";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "company_id",
	"m_strTable" => "freee_memotags",
	"m_srcTableName" => "freee_memotags"
));

$proto8["m_sql"] = "`company_id`";
$proto8["m_srcTableName"] = "freee_memotags";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "freee_memotags",
	"m_srcTableName" => "freee_memotags"
));

$proto10["m_sql"] = "`name`";
$proto10["m_srcTableName"] = "freee_memotags";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "update_date",
	"m_strTable" => "freee_memotags",
	"m_srcTableName" => "freee_memotags"
));

$proto12["m_sql"] = "`update_date`";
$proto12["m_srcTableName"] = "freee_memotags";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "shortcut1",
	"m_strTable" => "freee_memotags",
	"m_srcTableName" => "freee_memotags"
));

$proto14["m_sql"] = "`shortcut1`";
$proto14["m_srcTableName"] = "freee_memotags";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "shortcut2",
	"m_strTable" => "freee_memotags",
	"m_srcTableName" => "freee_memotags"
));

$proto16["m_sql"] = "`shortcut2`";
$proto16["m_srcTableName"] = "freee_memotags";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "freee_memotags",
	"m_srcTableName" => "freee_memotags"
));

$proto18["m_sql"] = "`created_at`";
$proto18["m_srcTableName"] = "freee_memotags";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "created_by",
	"m_strTable" => "freee_memotags",
	"m_srcTableName" => "freee_memotags"
));

$proto20["m_sql"] = "`created_by`";
$proto20["m_srcTableName"] = "freee_memotags";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "freee_memotags",
	"m_srcTableName" => "freee_memotags"
));

$proto22["m_sql"] = "`updated_at`";
$proto22["m_srcTableName"] = "freee_memotags";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by",
	"m_strTable" => "freee_memotags",
	"m_srcTableName" => "freee_memotags"
));

$proto24["m_sql"] = "`updated_by`";
$proto24["m_srcTableName"] = "freee_memotags";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "dept_group_id",
	"m_strTable" => "freee_memotags",
	"m_srcTableName" => "freee_memotags"
));

$proto26["m_sql"] = "`dept_group_id`";
$proto26["m_srcTableName"] = "freee_memotags";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto28=array();
$proto28["m_link"] = "SQLL_MAIN";
			$proto29=array();
$proto29["m_strName"] = "freee_memotags";
$proto29["m_srcTableName"] = "freee_memotags";
$proto29["m_columns"] = array();
$proto29["m_columns"][] = "id";
$proto29["m_columns"][] = "company_id";
$proto29["m_columns"][] = "name";
$proto29["m_columns"][] = "update_date";
$proto29["m_columns"][] = "shortcut1";
$proto29["m_columns"][] = "shortcut2";
$proto29["m_columns"][] = "created_at";
$proto29["m_columns"][] = "created_by";
$proto29["m_columns"][] = "updated_at";
$proto29["m_columns"][] = "updated_by";
$proto29["m_columns"][] = "dept_group_id";
$obj = new SQLTable($proto29);

$proto28["m_table"] = $obj;
$proto28["m_sql"] = "`freee_memotags`";
$proto28["m_alias"] = "";
$proto28["m_srcTableName"] = "freee_memotags";
$proto30=array();
$proto30["m_sql"] = "";
$proto30["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto30["m_column"]=$obj;
$proto30["m_contained"] = array();
$proto30["m_strCase"] = "";
$proto30["m_havingmode"] = false;
$proto30["m_inBrackets"] = false;
$proto30["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto30);

$proto28["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto28);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="freee_memotags";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_freee_memotags = createSqlQuery_freee_memotags();


	
		;

											

$tdatafreee_memotags[".sqlquery"] = $queryData_freee_memotags;

$tableEvents["freee_memotags"] = new eventsBase;
$tdatafreee_memotags[".hasEvents"] = false;

?>