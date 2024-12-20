<?php
require_once(getabspath("classes/cipherer.php"));




$tdataichiba_exhibition = array();
	$tdataichiba_exhibition[".truncateText"] = true;
	$tdataichiba_exhibition[".NumberOfChars"] = 80;
	$tdataichiba_exhibition[".ShortName"] = "ichiba_exhibition";
	$tdataichiba_exhibition[".OwnerID"] = "";
	$tdataichiba_exhibition[".OriginalTable"] = "ichiba_exhibition";

//	field labels
$fieldLabelsichiba_exhibition = array();
$fieldToolTipsichiba_exhibition = array();
$pageTitlesichiba_exhibition = array();
$placeHoldersichiba_exhibition = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsichiba_exhibition["Japanese"] = array();
	$fieldToolTipsichiba_exhibition["Japanese"] = array();
	$placeHoldersichiba_exhibition["Japanese"] = array();
	$pageTitlesichiba_exhibition["Japanese"] = array();
	$fieldLabelsichiba_exhibition["Japanese"]["id"] = "Id";
	$fieldToolTipsichiba_exhibition["Japanese"]["id"] = "";
	$placeHoldersichiba_exhibition["Japanese"]["id"] = "";
	$fieldLabelsichiba_exhibition["Japanese"]["name"] = "Name";
	$fieldToolTipsichiba_exhibition["Japanese"]["name"] = "";
	$placeHoldersichiba_exhibition["Japanese"]["name"] = "";
	$fieldLabelsichiba_exhibition["Japanese"]["update_by"] = "Update By";
	$fieldToolTipsichiba_exhibition["Japanese"]["update_by"] = "";
	$placeHoldersichiba_exhibition["Japanese"]["update_by"] = "";
	$fieldLabelsichiba_exhibition["Japanese"]["update_at"] = "Update At";
	$fieldToolTipsichiba_exhibition["Japanese"]["update_at"] = "";
	$placeHoldersichiba_exhibition["Japanese"]["update_at"] = "";
	$fieldLabelsichiba_exhibition["Japanese"]["create_by"] = "Create By";
	$fieldToolTipsichiba_exhibition["Japanese"]["create_by"] = "";
	$placeHoldersichiba_exhibition["Japanese"]["create_by"] = "";
	$fieldLabelsichiba_exhibition["Japanese"]["create_at"] = "Create At";
	$fieldToolTipsichiba_exhibition["Japanese"]["create_at"] = "";
	$placeHoldersichiba_exhibition["Japanese"]["create_at"] = "";
	$fieldLabelsichiba_exhibition["Japanese"]["url_id"] = "Url Id";
	$fieldToolTipsichiba_exhibition["Japanese"]["url_id"] = "";
	$placeHoldersichiba_exhibition["Japanese"]["url_id"] = "";
	$fieldLabelsichiba_exhibition["Japanese"]["row_count"] = "Row Count";
	$fieldToolTipsichiba_exhibition["Japanese"]["row_count"] = "";
	$placeHoldersichiba_exhibition["Japanese"]["row_count"] = "";
	$fieldLabelsichiba_exhibition["Japanese"]["meeting_id"] = "Meeting Id";
	$fieldToolTipsichiba_exhibition["Japanese"]["meeting_id"] = "";
	$placeHoldersichiba_exhibition["Japanese"]["meeting_id"] = "";
	$fieldLabelsichiba_exhibition["Japanese"]["item_type"] = "Item Type";
	$fieldToolTipsichiba_exhibition["Japanese"]["item_type"] = "";
	$placeHoldersichiba_exhibition["Japanese"]["item_type"] = "";
	$fieldLabelsichiba_exhibition["Japanese"]["comment"] = "Comment";
	$fieldToolTipsichiba_exhibition["Japanese"]["comment"] = "";
	$placeHoldersichiba_exhibition["Japanese"]["comment"] = "";
	$fieldLabelsichiba_exhibition["Japanese"]["link"] = "Link";
	$fieldToolTipsichiba_exhibition["Japanese"]["link"] = "";
	$placeHoldersichiba_exhibition["Japanese"]["link"] = "";
	if (count($fieldToolTipsichiba_exhibition["Japanese"]))
		$tdataichiba_exhibition[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsichiba_exhibition[""] = array();
	$fieldToolTipsichiba_exhibition[""] = array();
	$placeHoldersichiba_exhibition[""] = array();
	$pageTitlesichiba_exhibition[""] = array();
	$fieldLabelsichiba_exhibition[""]["id"] = "Id";
	$fieldToolTipsichiba_exhibition[""]["id"] = "";
	$placeHoldersichiba_exhibition[""]["id"] = "";
	$fieldLabelsichiba_exhibition[""]["name"] = "Name";
	$fieldToolTipsichiba_exhibition[""]["name"] = "";
	$placeHoldersichiba_exhibition[""]["name"] = "";
	$fieldLabelsichiba_exhibition[""]["update_by"] = "Update By";
	$fieldToolTipsichiba_exhibition[""]["update_by"] = "";
	$placeHoldersichiba_exhibition[""]["update_by"] = "";
	$fieldLabelsichiba_exhibition[""]["update_at"] = "Update At";
	$fieldToolTipsichiba_exhibition[""]["update_at"] = "";
	$placeHoldersichiba_exhibition[""]["update_at"] = "";
	$fieldLabelsichiba_exhibition[""]["create_by"] = "Create By";
	$fieldToolTipsichiba_exhibition[""]["create_by"] = "";
	$placeHoldersichiba_exhibition[""]["create_by"] = "";
	$fieldLabelsichiba_exhibition[""]["create_at"] = "Create At";
	$fieldToolTipsichiba_exhibition[""]["create_at"] = "";
	$placeHoldersichiba_exhibition[""]["create_at"] = "";
	$fieldLabelsichiba_exhibition[""]["url_id"] = "Url Id";
	$fieldToolTipsichiba_exhibition[""]["url_id"] = "";
	$placeHoldersichiba_exhibition[""]["url_id"] = "";
	$fieldLabelsichiba_exhibition[""]["row_count"] = "Row Count";
	$fieldToolTipsichiba_exhibition[""]["row_count"] = "";
	$placeHoldersichiba_exhibition[""]["row_count"] = "";
	$fieldLabelsichiba_exhibition[""]["meeting_id"] = "Meeting Id";
	$fieldToolTipsichiba_exhibition[""]["meeting_id"] = "";
	$placeHoldersichiba_exhibition[""]["meeting_id"] = "";
	$fieldLabelsichiba_exhibition[""]["item_type"] = "Item Type";
	$fieldToolTipsichiba_exhibition[""]["item_type"] = "";
	$placeHoldersichiba_exhibition[""]["item_type"] = "";
	$fieldLabelsichiba_exhibition[""]["comment"] = "Comment";
	$fieldToolTipsichiba_exhibition[""]["comment"] = "";
	$placeHoldersichiba_exhibition[""]["comment"] = "";
	$fieldLabelsichiba_exhibition[""]["link"] = "Link";
	$fieldToolTipsichiba_exhibition[""]["link"] = "";
	$placeHoldersichiba_exhibition[""]["link"] = "";
	if (count($fieldToolTipsichiba_exhibition[""]))
		$tdataichiba_exhibition[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsichiba_exhibition["English"] = array();
	$fieldToolTipsichiba_exhibition["English"] = array();
	$placeHoldersichiba_exhibition["English"] = array();
	$pageTitlesichiba_exhibition["English"] = array();
	$fieldLabelsichiba_exhibition["English"]["id"] = "Id";
	$fieldToolTipsichiba_exhibition["English"]["id"] = "";
	$placeHoldersichiba_exhibition["English"]["id"] = "";
	$fieldLabelsichiba_exhibition["English"]["name"] = "Name";
	$fieldToolTipsichiba_exhibition["English"]["name"] = "";
	$placeHoldersichiba_exhibition["English"]["name"] = "";
	$fieldLabelsichiba_exhibition["English"]["update_by"] = "Update By";
	$fieldToolTipsichiba_exhibition["English"]["update_by"] = "";
	$placeHoldersichiba_exhibition["English"]["update_by"] = "";
	$fieldLabelsichiba_exhibition["English"]["update_at"] = "Update At";
	$fieldToolTipsichiba_exhibition["English"]["update_at"] = "";
	$placeHoldersichiba_exhibition["English"]["update_at"] = "";
	$fieldLabelsichiba_exhibition["English"]["create_by"] = "Create By";
	$fieldToolTipsichiba_exhibition["English"]["create_by"] = "";
	$placeHoldersichiba_exhibition["English"]["create_by"] = "";
	$fieldLabelsichiba_exhibition["English"]["create_at"] = "Create At";
	$fieldToolTipsichiba_exhibition["English"]["create_at"] = "";
	$placeHoldersichiba_exhibition["English"]["create_at"] = "";
	$fieldLabelsichiba_exhibition["English"]["url_id"] = "Url Id";
	$fieldToolTipsichiba_exhibition["English"]["url_id"] = "";
	$placeHoldersichiba_exhibition["English"]["url_id"] = "";
	$fieldLabelsichiba_exhibition["English"]["row_count"] = "Row Count";
	$fieldToolTipsichiba_exhibition["English"]["row_count"] = "";
	$placeHoldersichiba_exhibition["English"]["row_count"] = "";
	$fieldLabelsichiba_exhibition["English"]["meeting_id"] = "Meeting Id";
	$fieldToolTipsichiba_exhibition["English"]["meeting_id"] = "";
	$placeHoldersichiba_exhibition["English"]["meeting_id"] = "";
	$fieldLabelsichiba_exhibition["English"]["item_type"] = "Item Type";
	$fieldToolTipsichiba_exhibition["English"]["item_type"] = "";
	$placeHoldersichiba_exhibition["English"]["item_type"] = "";
	$fieldLabelsichiba_exhibition["English"]["comment"] = "Comment";
	$fieldToolTipsichiba_exhibition["English"]["comment"] = "";
	$placeHoldersichiba_exhibition["English"]["comment"] = "";
	$fieldLabelsichiba_exhibition["English"]["link"] = "Link";
	$fieldToolTipsichiba_exhibition["English"]["link"] = "";
	$placeHoldersichiba_exhibition["English"]["link"] = "";
	if (count($fieldToolTipsichiba_exhibition["English"]))
		$tdataichiba_exhibition[".isUseToolTips"] = true;
}


	$tdataichiba_exhibition[".NCSearch"] = true;



$tdataichiba_exhibition[".shortTableName"] = "ichiba_exhibition";
$tdataichiba_exhibition[".nSecOptions"] = 0;
$tdataichiba_exhibition[".recsPerRowPrint"] = 1;
$tdataichiba_exhibition[".mainTableOwnerID"] = "";
$tdataichiba_exhibition[".moveNext"] = 1;
$tdataichiba_exhibition[".entityType"] = 0;

$tdataichiba_exhibition[".strOriginalTableName"] = "ichiba_exhibition";

	



$tdataichiba_exhibition[".showAddInPopup"] = false;

$tdataichiba_exhibition[".showEditInPopup"] = false;

$tdataichiba_exhibition[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataichiba_exhibition[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataichiba_exhibition[".fieldsForRegister"] = array();

$tdataichiba_exhibition[".listAjax"] = false;

	$tdataichiba_exhibition[".audit"] = true;

	$tdataichiba_exhibition[".locking"] = false;



$tdataichiba_exhibition[".list"] = true;

$tdataichiba_exhibition[".inlineEdit"] = true;


$tdataichiba_exhibition[".reorderRecordsByHeader"] = true;



$tdataichiba_exhibition[".inlineAdd"] = true;

$tdataichiba_exhibition[".import"] = true;

$tdataichiba_exhibition[".exportTo"] = true;


$tdataichiba_exhibition[".delete"] = true;

$tdataichiba_exhibition[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataichiba_exhibition[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataichiba_exhibition[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataichiba_exhibition[".searchSaving"] = false;
//

$tdataichiba_exhibition[".showSearchPanel"] = true;
		$tdataichiba_exhibition[".flexibleSearch"] = true;

$tdataichiba_exhibition[".isUseAjaxSuggest"] = true;

$tdataichiba_exhibition[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdataichiba_exhibition[".ajaxCodeSnippetAdded"] = false;

$tdataichiba_exhibition[".buttonsAdded"] = false;

$tdataichiba_exhibition[".addPageEvents"] = false;

// use timepicker for search panel
$tdataichiba_exhibition[".isUseTimeForSearch"] = false;




$tdataichiba_exhibition[".detailsLinksOnList"] = "1";

$tdataichiba_exhibition[".allSearchFields"] = array();
$tdataichiba_exhibition[".filterFields"] = array();
$tdataichiba_exhibition[".requiredSearchFields"] = array();

$tdataichiba_exhibition[".allSearchFields"][] = "link";
	$tdataichiba_exhibition[".allSearchFields"][] = "id";
	$tdataichiba_exhibition[".allSearchFields"][] = "name";
	$tdataichiba_exhibition[".allSearchFields"][] = "url_id";
	$tdataichiba_exhibition[".allSearchFields"][] = "row_count";
	$tdataichiba_exhibition[".allSearchFields"][] = "meeting_id";
	$tdataichiba_exhibition[".allSearchFields"][] = "item_type";
	$tdataichiba_exhibition[".allSearchFields"][] = "comment";
	$tdataichiba_exhibition[".allSearchFields"][] = "update_by";
	$tdataichiba_exhibition[".allSearchFields"][] = "update_at";
	$tdataichiba_exhibition[".allSearchFields"][] = "create_by";
	$tdataichiba_exhibition[".allSearchFields"][] = "create_at";
	

$tdataichiba_exhibition[".googleLikeFields"] = array();
$tdataichiba_exhibition[".googleLikeFields"][] = "id";
$tdataichiba_exhibition[".googleLikeFields"][] = "link";
$tdataichiba_exhibition[".googleLikeFields"][] = "name";
$tdataichiba_exhibition[".googleLikeFields"][] = "url_id";
$tdataichiba_exhibition[".googleLikeFields"][] = "update_by";
$tdataichiba_exhibition[".googleLikeFields"][] = "update_at";
$tdataichiba_exhibition[".googleLikeFields"][] = "create_by";
$tdataichiba_exhibition[".googleLikeFields"][] = "create_at";
$tdataichiba_exhibition[".googleLikeFields"][] = "row_count";
$tdataichiba_exhibition[".googleLikeFields"][] = "meeting_id";
$tdataichiba_exhibition[".googleLikeFields"][] = "item_type";
$tdataichiba_exhibition[".googleLikeFields"][] = "comment";


$tdataichiba_exhibition[".advSearchFields"] = array();
$tdataichiba_exhibition[".advSearchFields"][] = "link";
$tdataichiba_exhibition[".advSearchFields"][] = "id";
$tdataichiba_exhibition[".advSearchFields"][] = "name";
$tdataichiba_exhibition[".advSearchFields"][] = "url_id";
$tdataichiba_exhibition[".advSearchFields"][] = "row_count";
$tdataichiba_exhibition[".advSearchFields"][] = "meeting_id";
$tdataichiba_exhibition[".advSearchFields"][] = "item_type";
$tdataichiba_exhibition[".advSearchFields"][] = "comment";
$tdataichiba_exhibition[".advSearchFields"][] = "update_by";
$tdataichiba_exhibition[".advSearchFields"][] = "update_at";
$tdataichiba_exhibition[".advSearchFields"][] = "create_by";
$tdataichiba_exhibition[".advSearchFields"][] = "create_at";

$tdataichiba_exhibition[".tableType"] = "list";

$tdataichiba_exhibition[".printerPageOrientation"] = 0;
$tdataichiba_exhibition[".nPrinterPageScale"] = 100;

$tdataichiba_exhibition[".nPrinterSplitRecords"] = 40;

$tdataichiba_exhibition[".nPrinterPDFSplitRecords"] = 40;



$tdataichiba_exhibition[".geocodingEnabled"] = false;





$tdataichiba_exhibition[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataichiba_exhibition[".pageSize"] = 20;

$tdataichiba_exhibition[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `id` DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataichiba_exhibition[".strOrderBy"] = $tstrOrderBy;

$tdataichiba_exhibition[".orderindexes"] = array();
$tdataichiba_exhibition[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "`id`");

$tdataichiba_exhibition[".sqlHead"] = "SELECT `id`,  `id` as `link`,  `name`,  `url_id`,  `update_by`,  `update_at`,  `create_by`,  `create_at`,  `row_count`,  `meeting_id`,  `item_type`,  `comment`";
$tdataichiba_exhibition[".sqlFrom"] = "FROM `ichiba_exhibition`";
$tdataichiba_exhibition[".sqlWhereExpr"] = "";
$tdataichiba_exhibition[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataichiba_exhibition[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataichiba_exhibition[".arrGroupsPerPage"] = $arrGPP;

$tdataichiba_exhibition[".highlightSearchResults"] = true;

$tableKeysichiba_exhibition = array();
$tableKeysichiba_exhibition[] = "id";
$tdataichiba_exhibition[".Keys"] = $tableKeysichiba_exhibition;

$tdataichiba_exhibition[".listFields"] = array();
$tdataichiba_exhibition[".listFields"][] = "link";
$tdataichiba_exhibition[".listFields"][] = "id";
$tdataichiba_exhibition[".listFields"][] = "name";
$tdataichiba_exhibition[".listFields"][] = "url_id";
$tdataichiba_exhibition[".listFields"][] = "row_count";
$tdataichiba_exhibition[".listFields"][] = "meeting_id";
$tdataichiba_exhibition[".listFields"][] = "item_type";
$tdataichiba_exhibition[".listFields"][] = "comment";
$tdataichiba_exhibition[".listFields"][] = "update_by";
$tdataichiba_exhibition[".listFields"][] = "update_at";
$tdataichiba_exhibition[".listFields"][] = "create_by";
$tdataichiba_exhibition[".listFields"][] = "create_at";

$tdataichiba_exhibition[".hideMobileList"] = array();


$tdataichiba_exhibition[".viewFields"] = array();

$tdataichiba_exhibition[".addFields"] = array();

$tdataichiba_exhibition[".masterListFields"] = array();
$tdataichiba_exhibition[".masterListFields"][] = "link";
$tdataichiba_exhibition[".masterListFields"][] = "id";
$tdataichiba_exhibition[".masterListFields"][] = "name";
$tdataichiba_exhibition[".masterListFields"][] = "url_id";
$tdataichiba_exhibition[".masterListFields"][] = "row_count";
$tdataichiba_exhibition[".masterListFields"][] = "meeting_id";
$tdataichiba_exhibition[".masterListFields"][] = "item_type";
$tdataichiba_exhibition[".masterListFields"][] = "comment";
$tdataichiba_exhibition[".masterListFields"][] = "update_by";
$tdataichiba_exhibition[".masterListFields"][] = "update_at";
$tdataichiba_exhibition[".masterListFields"][] = "create_by";
$tdataichiba_exhibition[".masterListFields"][] = "create_at";

$tdataichiba_exhibition[".inlineAddFields"] = array();
$tdataichiba_exhibition[".inlineAddFields"][] = "name";
$tdataichiba_exhibition[".inlineAddFields"][] = "row_count";
$tdataichiba_exhibition[".inlineAddFields"][] = "meeting_id";
$tdataichiba_exhibition[".inlineAddFields"][] = "item_type";
$tdataichiba_exhibition[".inlineAddFields"][] = "comment";

$tdataichiba_exhibition[".editFields"] = array();

$tdataichiba_exhibition[".inlineEditFields"] = array();
$tdataichiba_exhibition[".inlineEditFields"][] = "name";
$tdataichiba_exhibition[".inlineEditFields"][] = "row_count";
$tdataichiba_exhibition[".inlineEditFields"][] = "meeting_id";
$tdataichiba_exhibition[".inlineEditFields"][] = "item_type";
$tdataichiba_exhibition[".inlineEditFields"][] = "comment";

$tdataichiba_exhibition[".updateSelectedFields"] = array();


$tdataichiba_exhibition[".exportFields"] = array();
$tdataichiba_exhibition[".exportFields"][] = "id";
$tdataichiba_exhibition[".exportFields"][] = "name";
$tdataichiba_exhibition[".exportFields"][] = "url_id";
$tdataichiba_exhibition[".exportFields"][] = "row_count";
$tdataichiba_exhibition[".exportFields"][] = "meeting_id";
$tdataichiba_exhibition[".exportFields"][] = "item_type";
$tdataichiba_exhibition[".exportFields"][] = "comment";
$tdataichiba_exhibition[".exportFields"][] = "update_by";
$tdataichiba_exhibition[".exportFields"][] = "update_at";
$tdataichiba_exhibition[".exportFields"][] = "create_by";
$tdataichiba_exhibition[".exportFields"][] = "create_at";

$tdataichiba_exhibition[".importFields"] = array();
$tdataichiba_exhibition[".importFields"][] = "name";
$tdataichiba_exhibition[".importFields"][] = "row_count";
$tdataichiba_exhibition[".importFields"][] = "meeting_id";
$tdataichiba_exhibition[".importFields"][] = "item_type";
$tdataichiba_exhibition[".importFields"][] = "comment";

$tdataichiba_exhibition[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "ichiba_exhibition";
	$fdata["Label"] = GetFieldLabel("ichiba_exhibition","id");
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




	$tdataichiba_exhibition["id"] = $fdata;
//	link
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "link";
	$fdata["GoodName"] = "link";
	$fdata["ownerTable"] = "ichiba_exhibition";
	$fdata["Label"] = GetFieldLabel("ichiba_exhibition","link");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`id`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
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




	$tdataichiba_exhibition["link"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "ichiba_exhibition";
	$fdata["Label"] = GetFieldLabel("ichiba_exhibition","name");
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




	$tdataichiba_exhibition["name"] = $fdata;
//	url_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "url_id";
	$fdata["GoodName"] = "url_id";
	$fdata["ownerTable"] = "ichiba_exhibition";
	$fdata["Label"] = GetFieldLabel("ichiba_exhibition","url_id");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "url_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`url_id`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
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




	$tdataichiba_exhibition["url_id"] = $fdata;
//	update_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "update_by";
	$fdata["GoodName"] = "update_by";
	$fdata["ownerTable"] = "ichiba_exhibition";
	$fdata["Label"] = GetFieldLabel("ichiba_exhibition","update_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "update_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`update_by`";

	
	
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




	$tdataichiba_exhibition["update_by"] = $fdata;
//	update_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "update_at";
	$fdata["GoodName"] = "update_at";
	$fdata["ownerTable"] = "ichiba_exhibition";
	$fdata["Label"] = GetFieldLabel("ichiba_exhibition","update_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "update_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`update_at`";

	
	
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




	$tdataichiba_exhibition["update_at"] = $fdata;
//	create_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "create_by";
	$fdata["GoodName"] = "create_by";
	$fdata["ownerTable"] = "ichiba_exhibition";
	$fdata["Label"] = GetFieldLabel("ichiba_exhibition","create_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "create_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`create_by`";

	
	
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




	$tdataichiba_exhibition["create_by"] = $fdata;
//	create_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "create_at";
	$fdata["GoodName"] = "create_at";
	$fdata["ownerTable"] = "ichiba_exhibition";
	$fdata["Label"] = GetFieldLabel("ichiba_exhibition","create_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "create_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`create_at`";

	
	
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




	$tdataichiba_exhibition["create_at"] = $fdata;
//	row_count
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "row_count";
	$fdata["GoodName"] = "row_count";
	$fdata["ownerTable"] = "ichiba_exhibition";
	$fdata["Label"] = GetFieldLabel("ichiba_exhibition","row_count");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "row_count";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`row_count`";

	
	
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




	$tdataichiba_exhibition["row_count"] = $fdata;
//	meeting_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "meeting_id";
	$fdata["GoodName"] = "meeting_id";
	$fdata["ownerTable"] = "ichiba_exhibition";
	$fdata["Label"] = GetFieldLabel("ichiba_exhibition","meeting_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "meeting_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`meeting_id`";

	
	
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
	$edata["LookupTable"] = "mst_ichiba_meeting";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "concat(meeting_name,default_date,'日')";

		$edata["CustomDisplay"] = "true";

	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
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




	$tdataichiba_exhibition["meeting_id"] = $fdata;
//	item_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "item_type";
	$fdata["GoodName"] = "item_type";
	$fdata["ownerTable"] = "ichiba_exhibition";
	$fdata["Label"] = GetFieldLabel("ichiba_exhibition","item_type");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "item_type";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`item_type`";

	
	
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
	$edata["LookupTable"] = "mst_exhibition_item_type";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "value";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "name";

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
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




	$tdataichiba_exhibition["item_type"] = $fdata;
//	comment
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "comment";
	$fdata["GoodName"] = "comment";
	$fdata["ownerTable"] = "ichiba_exhibition";
	$fdata["Label"] = GetFieldLabel("ichiba_exhibition","comment");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "comment";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`comment`";

	
	
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




	$tdataichiba_exhibition["comment"] = $fdata;


$tables_data["ichiba_exhibition"]=&$tdataichiba_exhibition;
$field_labels["ichiba_exhibition"] = &$fieldLabelsichiba_exhibition;
$fieldToolTips["ichiba_exhibition"] = &$fieldToolTipsichiba_exhibition;
$placeHolders["ichiba_exhibition"] = &$placeHoldersichiba_exhibition;
$page_titles["ichiba_exhibition"] = &$pageTitlesichiba_exhibition;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["ichiba_exhibition"] = array();
//	ichiba_exhibition_shouhin
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="ichiba_exhibition_shouhin";
		$detailsParam["dOriginalTable"] = "shouhin";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "ichiba_exhibition_shouhin";
	$detailsParam["dCaptionTable"] = GetTableCaption("ichiba_exhibition_shouhin");
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
		
	$detailsTablesData["ichiba_exhibition"][$dIndex] = $detailsParam;

	
		$detailsTablesData["ichiba_exhibition"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["ichiba_exhibition"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["ichiba_exhibition"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["ichiba_exhibition"][$dIndex]["detailKeys"][]="ichiba_exhibition_id";

// tables which are master tables for current table (detail)
$masterTablesData["ichiba_exhibition"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_ichiba_exhibition()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  `id` as `link`,  `name`,  `url_id`,  `update_by`,  `update_at`,  `create_by`,  `create_at`,  `row_count`,  `meeting_id`,  `item_type`,  `comment`";
$proto0["m_strFrom"] = "FROM `ichiba_exhibition`";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY `id` DESC";
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
	"m_strTable" => "ichiba_exhibition",
	"m_srcTableName" => "ichiba_exhibition"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "ichiba_exhibition";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "ichiba_exhibition",
	"m_srcTableName" => "ichiba_exhibition"
));

$proto8["m_sql"] = "`id`";
$proto8["m_srcTableName"] = "ichiba_exhibition";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "link";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "ichiba_exhibition",
	"m_srcTableName" => "ichiba_exhibition"
));

$proto10["m_sql"] = "`name`";
$proto10["m_srcTableName"] = "ichiba_exhibition";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "url_id",
	"m_strTable" => "ichiba_exhibition",
	"m_srcTableName" => "ichiba_exhibition"
));

$proto12["m_sql"] = "`url_id`";
$proto12["m_srcTableName"] = "ichiba_exhibition";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "update_by",
	"m_strTable" => "ichiba_exhibition",
	"m_srcTableName" => "ichiba_exhibition"
));

$proto14["m_sql"] = "`update_by`";
$proto14["m_srcTableName"] = "ichiba_exhibition";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "update_at",
	"m_strTable" => "ichiba_exhibition",
	"m_srcTableName" => "ichiba_exhibition"
));

$proto16["m_sql"] = "`update_at`";
$proto16["m_srcTableName"] = "ichiba_exhibition";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "create_by",
	"m_strTable" => "ichiba_exhibition",
	"m_srcTableName" => "ichiba_exhibition"
));

$proto18["m_sql"] = "`create_by`";
$proto18["m_srcTableName"] = "ichiba_exhibition";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "create_at",
	"m_strTable" => "ichiba_exhibition",
	"m_srcTableName" => "ichiba_exhibition"
));

$proto20["m_sql"] = "`create_at`";
$proto20["m_srcTableName"] = "ichiba_exhibition";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "row_count",
	"m_strTable" => "ichiba_exhibition",
	"m_srcTableName" => "ichiba_exhibition"
));

$proto22["m_sql"] = "`row_count`";
$proto22["m_srcTableName"] = "ichiba_exhibition";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "meeting_id",
	"m_strTable" => "ichiba_exhibition",
	"m_srcTableName" => "ichiba_exhibition"
));

$proto24["m_sql"] = "`meeting_id`";
$proto24["m_srcTableName"] = "ichiba_exhibition";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "item_type",
	"m_strTable" => "ichiba_exhibition",
	"m_srcTableName" => "ichiba_exhibition"
));

$proto26["m_sql"] = "`item_type`";
$proto26["m_srcTableName"] = "ichiba_exhibition";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "comment",
	"m_strTable" => "ichiba_exhibition",
	"m_srcTableName" => "ichiba_exhibition"
));

$proto28["m_sql"] = "`comment`";
$proto28["m_srcTableName"] = "ichiba_exhibition";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "ichiba_exhibition";
$proto31["m_srcTableName"] = "ichiba_exhibition";
$proto31["m_columns"] = array();
$proto31["m_columns"][] = "id";
$proto31["m_columns"][] = "name";
$proto31["m_columns"][] = "url_id";
$proto31["m_columns"][] = "sort";
$proto31["m_columns"][] = "update_by";
$proto31["m_columns"][] = "update_at";
$proto31["m_columns"][] = "create_by";
$proto31["m_columns"][] = "create_at";
$proto31["m_columns"][] = "row_count";
$proto31["m_columns"][] = "meeting_id";
$proto31["m_columns"][] = "item_type";
$proto31["m_columns"][] = "comment";
$obj = new SQLTable($proto31);

$proto30["m_table"] = $obj;
$proto30["m_sql"] = "`ichiba_exhibition`";
$proto30["m_alias"] = "";
$proto30["m_srcTableName"] = "ichiba_exhibition";
$proto32=array();
$proto32["m_sql"] = "";
$proto32["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto32["m_column"]=$obj;
$proto32["m_contained"] = array();
$proto32["m_strCase"] = "";
$proto32["m_havingmode"] = false;
$proto32["m_inBrackets"] = false;
$proto32["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto32);

$proto30["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto30);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto34=array();
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "ichiba_exhibition",
	"m_srcTableName" => "ichiba_exhibition"
));

$proto34["m_column"]=$obj;
$proto34["m_bAsc"] = 0;
$proto34["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto34);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="ichiba_exhibition";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_ichiba_exhibition = createSqlQuery_ichiba_exhibition();


	
		;

												

$tdataichiba_exhibition[".sqlquery"] = $queryData_ichiba_exhibition;

include_once(getabspath("include/ichiba_exhibition_events.php"));
$tableEvents["ichiba_exhibition"] = new eventclass_ichiba_exhibition;
$tdataichiba_exhibition[".hasEvents"] = true;

?>