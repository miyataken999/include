<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamst_analysisMail_fromaddress = array();
	$tdatamst_analysisMail_fromaddress[".truncateText"] = true;
	$tdatamst_analysisMail_fromaddress[".NumberOfChars"] = 80;
	$tdatamst_analysisMail_fromaddress[".ShortName"] = "mst_analysisMail_fromaddress";
	$tdatamst_analysisMail_fromaddress[".OwnerID"] = "";
	$tdatamst_analysisMail_fromaddress[".OriginalTable"] = "mst_analysisMail_fromaddress";

//	field labels
$fieldLabelsmst_analysisMail_fromaddress = array();
$fieldToolTipsmst_analysisMail_fromaddress = array();
$pageTitlesmst_analysisMail_fromaddress = array();
$placeHoldersmst_analysisMail_fromaddress = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmst_analysisMail_fromaddress["Japanese"] = array();
	$fieldToolTipsmst_analysisMail_fromaddress["Japanese"] = array();
	$placeHoldersmst_analysisMail_fromaddress["Japanese"] = array();
	$pageTitlesmst_analysisMail_fromaddress["Japanese"] = array();
	$fieldLabelsmst_analysisMail_fromaddress["Japanese"]["id"] = "Id";
	$fieldToolTipsmst_analysisMail_fromaddress["Japanese"]["id"] = "";
	$placeHoldersmst_analysisMail_fromaddress["Japanese"]["id"] = "";
	$fieldLabelsmst_analysisMail_fromaddress["Japanese"]["name"] = "送信者名";
	$fieldToolTipsmst_analysisMail_fromaddress["Japanese"]["name"] = "";
	$placeHoldersmst_analysisMail_fromaddress["Japanese"]["name"] = "";
	$fieldLabelsmst_analysisMail_fromaddress["Japanese"]["mailaddress"] = "メアド";
	$fieldToolTipsmst_analysisMail_fromaddress["Japanese"]["mailaddress"] = "";
	$placeHoldersmst_analysisMail_fromaddress["Japanese"]["mailaddress"] = "";
	$fieldLabelsmst_analysisMail_fromaddress["Japanese"]["from_password"] = "パスワード";
	$fieldToolTipsmst_analysisMail_fromaddress["Japanese"]["from_password"] = "";
	$placeHoldersmst_analysisMail_fromaddress["Japanese"]["from_password"] = "";
	$fieldLabelsmst_analysisMail_fromaddress["Japanese"]["updated_by"] = "更新者";
	$fieldToolTipsmst_analysisMail_fromaddress["Japanese"]["updated_by"] = "";
	$placeHoldersmst_analysisMail_fromaddress["Japanese"]["updated_by"] = "";
	$fieldLabelsmst_analysisMail_fromaddress["Japanese"]["updated_at"] = "更新日";
	$fieldToolTipsmst_analysisMail_fromaddress["Japanese"]["updated_at"] = "";
	$placeHoldersmst_analysisMail_fromaddress["Japanese"]["updated_at"] = "";
	$fieldLabelsmst_analysisMail_fromaddress["Japanese"]["created_by"] = "作成者";
	$fieldToolTipsmst_analysisMail_fromaddress["Japanese"]["created_by"] = "";
	$placeHoldersmst_analysisMail_fromaddress["Japanese"]["created_by"] = "";
	$fieldLabelsmst_analysisMail_fromaddress["Japanese"]["created_at"] = "作成日";
	$fieldToolTipsmst_analysisMail_fromaddress["Japanese"]["created_at"] = "";
	$placeHoldersmst_analysisMail_fromaddress["Japanese"]["created_at"] = "";
	if (count($fieldToolTipsmst_analysisMail_fromaddress["Japanese"]))
		$tdatamst_analysisMail_fromaddress[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmst_analysisMail_fromaddress[""] = array();
	$fieldToolTipsmst_analysisMail_fromaddress[""] = array();
	$placeHoldersmst_analysisMail_fromaddress[""] = array();
	$pageTitlesmst_analysisMail_fromaddress[""] = array();
	$fieldLabelsmst_analysisMail_fromaddress[""]["id"] = "Id";
	$fieldToolTipsmst_analysisMail_fromaddress[""]["id"] = "";
	$placeHoldersmst_analysisMail_fromaddress[""]["id"] = "";
	$fieldLabelsmst_analysisMail_fromaddress[""]["name"] = "Name";
	$fieldToolTipsmst_analysisMail_fromaddress[""]["name"] = "";
	$placeHoldersmst_analysisMail_fromaddress[""]["name"] = "";
	$fieldLabelsmst_analysisMail_fromaddress[""]["mailaddress"] = "Mailaddress";
	$fieldToolTipsmst_analysisMail_fromaddress[""]["mailaddress"] = "";
	$placeHoldersmst_analysisMail_fromaddress[""]["mailaddress"] = "";
	$fieldLabelsmst_analysisMail_fromaddress[""]["from_password"] = "From Password";
	$fieldToolTipsmst_analysisMail_fromaddress[""]["from_password"] = "";
	$placeHoldersmst_analysisMail_fromaddress[""]["from_password"] = "";
	$fieldLabelsmst_analysisMail_fromaddress[""]["updated_by"] = "Updated By";
	$fieldToolTipsmst_analysisMail_fromaddress[""]["updated_by"] = "";
	$placeHoldersmst_analysisMail_fromaddress[""]["updated_by"] = "";
	$fieldLabelsmst_analysisMail_fromaddress[""]["updated_at"] = "Updated At";
	$fieldToolTipsmst_analysisMail_fromaddress[""]["updated_at"] = "";
	$placeHoldersmst_analysisMail_fromaddress[""]["updated_at"] = "";
	$fieldLabelsmst_analysisMail_fromaddress[""]["created_by"] = "Created By";
	$fieldToolTipsmst_analysisMail_fromaddress[""]["created_by"] = "";
	$placeHoldersmst_analysisMail_fromaddress[""]["created_by"] = "";
	$fieldLabelsmst_analysisMail_fromaddress[""]["created_at"] = "Created At";
	$fieldToolTipsmst_analysisMail_fromaddress[""]["created_at"] = "";
	$placeHoldersmst_analysisMail_fromaddress[""]["created_at"] = "";
	if (count($fieldToolTipsmst_analysisMail_fromaddress[""]))
		$tdatamst_analysisMail_fromaddress[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmst_analysisMail_fromaddress["English"] = array();
	$fieldToolTipsmst_analysisMail_fromaddress["English"] = array();
	$placeHoldersmst_analysisMail_fromaddress["English"] = array();
	$pageTitlesmst_analysisMail_fromaddress["English"] = array();
	$fieldLabelsmst_analysisMail_fromaddress["English"]["id"] = "Id";
	$fieldToolTipsmst_analysisMail_fromaddress["English"]["id"] = "";
	$placeHoldersmst_analysisMail_fromaddress["English"]["id"] = "";
	$fieldLabelsmst_analysisMail_fromaddress["English"]["name"] = "Name";
	$fieldToolTipsmst_analysisMail_fromaddress["English"]["name"] = "";
	$placeHoldersmst_analysisMail_fromaddress["English"]["name"] = "";
	$fieldLabelsmst_analysisMail_fromaddress["English"]["mailaddress"] = "Mailaddress";
	$fieldToolTipsmst_analysisMail_fromaddress["English"]["mailaddress"] = "";
	$placeHoldersmst_analysisMail_fromaddress["English"]["mailaddress"] = "";
	$fieldLabelsmst_analysisMail_fromaddress["English"]["from_password"] = "From Password";
	$fieldToolTipsmst_analysisMail_fromaddress["English"]["from_password"] = "";
	$placeHoldersmst_analysisMail_fromaddress["English"]["from_password"] = "";
	$fieldLabelsmst_analysisMail_fromaddress["English"]["updated_by"] = "Updated By";
	$fieldToolTipsmst_analysisMail_fromaddress["English"]["updated_by"] = "";
	$placeHoldersmst_analysisMail_fromaddress["English"]["updated_by"] = "";
	$fieldLabelsmst_analysisMail_fromaddress["English"]["updated_at"] = "Updated At";
	$fieldToolTipsmst_analysisMail_fromaddress["English"]["updated_at"] = "";
	$placeHoldersmst_analysisMail_fromaddress["English"]["updated_at"] = "";
	$fieldLabelsmst_analysisMail_fromaddress["English"]["created_by"] = "Created By";
	$fieldToolTipsmst_analysisMail_fromaddress["English"]["created_by"] = "";
	$placeHoldersmst_analysisMail_fromaddress["English"]["created_by"] = "";
	$fieldLabelsmst_analysisMail_fromaddress["English"]["created_at"] = "Created At";
	$fieldToolTipsmst_analysisMail_fromaddress["English"]["created_at"] = "";
	$placeHoldersmst_analysisMail_fromaddress["English"]["created_at"] = "";
	if (count($fieldToolTipsmst_analysisMail_fromaddress["English"]))
		$tdatamst_analysisMail_fromaddress[".isUseToolTips"] = true;
}


	$tdatamst_analysisMail_fromaddress[".NCSearch"] = true;



$tdatamst_analysisMail_fromaddress[".shortTableName"] = "mst_analysisMail_fromaddress";
$tdatamst_analysisMail_fromaddress[".nSecOptions"] = 0;
$tdatamst_analysisMail_fromaddress[".recsPerRowPrint"] = 1;
$tdatamst_analysisMail_fromaddress[".mainTableOwnerID"] = "";
$tdatamst_analysisMail_fromaddress[".moveNext"] = 1;
$tdatamst_analysisMail_fromaddress[".entityType"] = 0;

$tdatamst_analysisMail_fromaddress[".strOriginalTableName"] = "mst_analysisMail_fromaddress";

	



$tdatamst_analysisMail_fromaddress[".showAddInPopup"] = false;

$tdatamst_analysisMail_fromaddress[".showEditInPopup"] = false;

$tdatamst_analysisMail_fromaddress[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamst_analysisMail_fromaddress[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamst_analysisMail_fromaddress[".fieldsForRegister"] = array();

$tdatamst_analysisMail_fromaddress[".listAjax"] = false;

	$tdatamst_analysisMail_fromaddress[".audit"] = true;

	$tdatamst_analysisMail_fromaddress[".locking"] = false;



$tdatamst_analysisMail_fromaddress[".list"] = true;

$tdatamst_analysisMail_fromaddress[".inlineEdit"] = true;


$tdatamst_analysisMail_fromaddress[".reorderRecordsByHeader"] = true;



$tdatamst_analysisMail_fromaddress[".inlineAdd"] = true;

$tdatamst_analysisMail_fromaddress[".import"] = true;

$tdatamst_analysisMail_fromaddress[".exportTo"] = true;


$tdatamst_analysisMail_fromaddress[".delete"] = true;

$tdatamst_analysisMail_fromaddress[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamst_analysisMail_fromaddress[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamst_analysisMail_fromaddress[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamst_analysisMail_fromaddress[".searchSaving"] = false;
//

$tdatamst_analysisMail_fromaddress[".showSearchPanel"] = true;
		$tdatamst_analysisMail_fromaddress[".flexibleSearch"] = true;

$tdatamst_analysisMail_fromaddress[".isUseAjaxSuggest"] = true;

$tdatamst_analysisMail_fromaddress[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatamst_analysisMail_fromaddress[".ajaxCodeSnippetAdded"] = false;

$tdatamst_analysisMail_fromaddress[".buttonsAdded"] = false;

$tdatamst_analysisMail_fromaddress[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamst_analysisMail_fromaddress[".isUseTimeForSearch"] = false;





$tdatamst_analysisMail_fromaddress[".allSearchFields"] = array();
$tdatamst_analysisMail_fromaddress[".filterFields"] = array();
$tdatamst_analysisMail_fromaddress[".requiredSearchFields"] = array();

$tdatamst_analysisMail_fromaddress[".allSearchFields"][] = "id";
	$tdatamst_analysisMail_fromaddress[".allSearchFields"][] = "name";
	$tdatamst_analysisMail_fromaddress[".allSearchFields"][] = "mailaddress";
	$tdatamst_analysisMail_fromaddress[".allSearchFields"][] = "from_password";
	$tdatamst_analysisMail_fromaddress[".allSearchFields"][] = "updated_by";
	$tdatamst_analysisMail_fromaddress[".allSearchFields"][] = "updated_at";
	$tdatamst_analysisMail_fromaddress[".allSearchFields"][] = "created_by";
	$tdatamst_analysisMail_fromaddress[".allSearchFields"][] = "created_at";
	

$tdatamst_analysisMail_fromaddress[".googleLikeFields"] = array();
$tdatamst_analysisMail_fromaddress[".googleLikeFields"][] = "id";
$tdatamst_analysisMail_fromaddress[".googleLikeFields"][] = "name";
$tdatamst_analysisMail_fromaddress[".googleLikeFields"][] = "mailaddress";
$tdatamst_analysisMail_fromaddress[".googleLikeFields"][] = "from_password";
$tdatamst_analysisMail_fromaddress[".googleLikeFields"][] = "updated_by";
$tdatamst_analysisMail_fromaddress[".googleLikeFields"][] = "updated_at";
$tdatamst_analysisMail_fromaddress[".googleLikeFields"][] = "created_by";
$tdatamst_analysisMail_fromaddress[".googleLikeFields"][] = "created_at";


$tdatamst_analysisMail_fromaddress[".advSearchFields"] = array();
$tdatamst_analysisMail_fromaddress[".advSearchFields"][] = "id";
$tdatamst_analysisMail_fromaddress[".advSearchFields"][] = "name";
$tdatamst_analysisMail_fromaddress[".advSearchFields"][] = "mailaddress";
$tdatamst_analysisMail_fromaddress[".advSearchFields"][] = "from_password";
$tdatamst_analysisMail_fromaddress[".advSearchFields"][] = "updated_by";
$tdatamst_analysisMail_fromaddress[".advSearchFields"][] = "updated_at";
$tdatamst_analysisMail_fromaddress[".advSearchFields"][] = "created_by";
$tdatamst_analysisMail_fromaddress[".advSearchFields"][] = "created_at";

$tdatamst_analysisMail_fromaddress[".tableType"] = "list";

$tdatamst_analysisMail_fromaddress[".printerPageOrientation"] = 0;
$tdatamst_analysisMail_fromaddress[".nPrinterPageScale"] = 100;

$tdatamst_analysisMail_fromaddress[".nPrinterSplitRecords"] = 40;

$tdatamst_analysisMail_fromaddress[".nPrinterPDFSplitRecords"] = 40;



$tdatamst_analysisMail_fromaddress[".geocodingEnabled"] = false;





$tdatamst_analysisMail_fromaddress[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamst_analysisMail_fromaddress[".pageSize"] = 20;

$tdatamst_analysisMail_fromaddress[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `id` DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamst_analysisMail_fromaddress[".strOrderBy"] = $tstrOrderBy;

$tdatamst_analysisMail_fromaddress[".orderindexes"] = array();
$tdatamst_analysisMail_fromaddress[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "`id`");

$tdatamst_analysisMail_fromaddress[".sqlHead"] = "SELECT `id`,  `name`,  `mailaddress`,  `from_password`,  `updated_by`,  `updated_at`,  `created_by`,  `created_at`";
$tdatamst_analysisMail_fromaddress[".sqlFrom"] = "FROM `mst_analysisMail_fromaddress`";
$tdatamst_analysisMail_fromaddress[".sqlWhereExpr"] = "";
$tdatamst_analysisMail_fromaddress[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamst_analysisMail_fromaddress[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamst_analysisMail_fromaddress[".arrGroupsPerPage"] = $arrGPP;

$tdatamst_analysisMail_fromaddress[".highlightSearchResults"] = true;

$tableKeysmst_analysisMail_fromaddress = array();
$tableKeysmst_analysisMail_fromaddress[] = "id";
$tdatamst_analysisMail_fromaddress[".Keys"] = $tableKeysmst_analysisMail_fromaddress;

$tdatamst_analysisMail_fromaddress[".listFields"] = array();
$tdatamst_analysisMail_fromaddress[".listFields"][] = "id";
$tdatamst_analysisMail_fromaddress[".listFields"][] = "name";
$tdatamst_analysisMail_fromaddress[".listFields"][] = "mailaddress";
$tdatamst_analysisMail_fromaddress[".listFields"][] = "from_password";
$tdatamst_analysisMail_fromaddress[".listFields"][] = "updated_by";
$tdatamst_analysisMail_fromaddress[".listFields"][] = "updated_at";
$tdatamst_analysisMail_fromaddress[".listFields"][] = "created_by";
$tdatamst_analysisMail_fromaddress[".listFields"][] = "created_at";

$tdatamst_analysisMail_fromaddress[".hideMobileList"] = array();


$tdatamst_analysisMail_fromaddress[".viewFields"] = array();

$tdatamst_analysisMail_fromaddress[".addFields"] = array();

$tdatamst_analysisMail_fromaddress[".masterListFields"] = array();
$tdatamst_analysisMail_fromaddress[".masterListFields"][] = "id";
$tdatamst_analysisMail_fromaddress[".masterListFields"][] = "name";
$tdatamst_analysisMail_fromaddress[".masterListFields"][] = "mailaddress";
$tdatamst_analysisMail_fromaddress[".masterListFields"][] = "from_password";
$tdatamst_analysisMail_fromaddress[".masterListFields"][] = "updated_by";
$tdatamst_analysisMail_fromaddress[".masterListFields"][] = "updated_at";
$tdatamst_analysisMail_fromaddress[".masterListFields"][] = "created_by";
$tdatamst_analysisMail_fromaddress[".masterListFields"][] = "created_at";

$tdatamst_analysisMail_fromaddress[".inlineAddFields"] = array();
$tdatamst_analysisMail_fromaddress[".inlineAddFields"][] = "name";
$tdatamst_analysisMail_fromaddress[".inlineAddFields"][] = "mailaddress";
$tdatamst_analysisMail_fromaddress[".inlineAddFields"][] = "from_password";

$tdatamst_analysisMail_fromaddress[".editFields"] = array();

$tdatamst_analysisMail_fromaddress[".inlineEditFields"] = array();
$tdatamst_analysisMail_fromaddress[".inlineEditFields"][] = "name";
$tdatamst_analysisMail_fromaddress[".inlineEditFields"][] = "mailaddress";
$tdatamst_analysisMail_fromaddress[".inlineEditFields"][] = "from_password";

$tdatamst_analysisMail_fromaddress[".updateSelectedFields"] = array();


$tdatamst_analysisMail_fromaddress[".exportFields"] = array();
$tdatamst_analysisMail_fromaddress[".exportFields"][] = "id";
$tdatamst_analysisMail_fromaddress[".exportFields"][] = "name";
$tdatamst_analysisMail_fromaddress[".exportFields"][] = "mailaddress";
$tdatamst_analysisMail_fromaddress[".exportFields"][] = "from_password";
$tdatamst_analysisMail_fromaddress[".exportFields"][] = "updated_by";
$tdatamst_analysisMail_fromaddress[".exportFields"][] = "updated_at";
$tdatamst_analysisMail_fromaddress[".exportFields"][] = "created_by";
$tdatamst_analysisMail_fromaddress[".exportFields"][] = "created_at";

$tdatamst_analysisMail_fromaddress[".importFields"] = array();
$tdatamst_analysisMail_fromaddress[".importFields"][] = "id";
$tdatamst_analysisMail_fromaddress[".importFields"][] = "name";
$tdatamst_analysisMail_fromaddress[".importFields"][] = "mailaddress";
$tdatamst_analysisMail_fromaddress[".importFields"][] = "from_password";

$tdatamst_analysisMail_fromaddress[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "mst_analysisMail_fromaddress";
	$fdata["Label"] = GetFieldLabel("mst_analysisMail_fromaddress","id");
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




	$tdatamst_analysisMail_fromaddress["id"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "mst_analysisMail_fromaddress";
	$fdata["Label"] = GetFieldLabel("mst_analysisMail_fromaddress","name");
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




	$tdatamst_analysisMail_fromaddress["name"] = $fdata;
//	mailaddress
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "mailaddress";
	$fdata["GoodName"] = "mailaddress";
	$fdata["ownerTable"] = "mst_analysisMail_fromaddress";
	$fdata["Label"] = GetFieldLabel("mst_analysisMail_fromaddress","mailaddress");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "mailaddress";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mailaddress`";

	
	
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




	$tdatamst_analysisMail_fromaddress["mailaddress"] = $fdata;
//	from_password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "from_password";
	$fdata["GoodName"] = "from_password";
	$fdata["ownerTable"] = "mst_analysisMail_fromaddress";
	$fdata["Label"] = GetFieldLabel("mst_analysisMail_fromaddress","from_password");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "from_password";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`from_password`";

	
	
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




	$tdatamst_analysisMail_fromaddress["from_password"] = $fdata;
//	updated_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "updated_by";
	$fdata["GoodName"] = "updated_by";
	$fdata["ownerTable"] = "mst_analysisMail_fromaddress";
	$fdata["Label"] = GetFieldLabel("mst_analysisMail_fromaddress","updated_by");
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




	$tdatamst_analysisMail_fromaddress["updated_by"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "mst_analysisMail_fromaddress";
	$fdata["Label"] = GetFieldLabel("mst_analysisMail_fromaddress","updated_at");
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




	$tdatamst_analysisMail_fromaddress["updated_at"] = $fdata;
//	created_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "created_by";
	$fdata["GoodName"] = "created_by";
	$fdata["ownerTable"] = "mst_analysisMail_fromaddress";
	$fdata["Label"] = GetFieldLabel("mst_analysisMail_fromaddress","created_by");
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




	$tdatamst_analysisMail_fromaddress["created_by"] = $fdata;
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "mst_analysisMail_fromaddress";
	$fdata["Label"] = GetFieldLabel("mst_analysisMail_fromaddress","created_at");
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




	$tdatamst_analysisMail_fromaddress["created_at"] = $fdata;


$tables_data["mst_analysisMail_fromaddress"]=&$tdatamst_analysisMail_fromaddress;
$field_labels["mst_analysisMail_fromaddress"] = &$fieldLabelsmst_analysisMail_fromaddress;
$fieldToolTips["mst_analysisMail_fromaddress"] = &$fieldToolTipsmst_analysisMail_fromaddress;
$placeHolders["mst_analysisMail_fromaddress"] = &$placeHoldersmst_analysisMail_fromaddress;
$page_titles["mst_analysisMail_fromaddress"] = &$pageTitlesmst_analysisMail_fromaddress;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mst_analysisMail_fromaddress"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mst_analysisMail_fromaddress"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mst_analysisMail_fromaddress()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  `name`,  `mailaddress`,  `from_password`,  `updated_by`,  `updated_at`,  `created_by`,  `created_at`";
$proto0["m_strFrom"] = "FROM `mst_analysisMail_fromaddress`";
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
	"m_strTable" => "mst_analysisMail_fromaddress",
	"m_srcTableName" => "mst_analysisMail_fromaddress"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "mst_analysisMail_fromaddress";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "mst_analysisMail_fromaddress",
	"m_srcTableName" => "mst_analysisMail_fromaddress"
));

$proto8["m_sql"] = "`name`";
$proto8["m_srcTableName"] = "mst_analysisMail_fromaddress";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "mailaddress",
	"m_strTable" => "mst_analysisMail_fromaddress",
	"m_srcTableName" => "mst_analysisMail_fromaddress"
));

$proto10["m_sql"] = "`mailaddress`";
$proto10["m_srcTableName"] = "mst_analysisMail_fromaddress";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "from_password",
	"m_strTable" => "mst_analysisMail_fromaddress",
	"m_srcTableName" => "mst_analysisMail_fromaddress"
));

$proto12["m_sql"] = "`from_password`";
$proto12["m_srcTableName"] = "mst_analysisMail_fromaddress";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by",
	"m_strTable" => "mst_analysisMail_fromaddress",
	"m_srcTableName" => "mst_analysisMail_fromaddress"
));

$proto14["m_sql"] = "`updated_by`";
$proto14["m_srcTableName"] = "mst_analysisMail_fromaddress";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "mst_analysisMail_fromaddress",
	"m_srcTableName" => "mst_analysisMail_fromaddress"
));

$proto16["m_sql"] = "`updated_at`";
$proto16["m_srcTableName"] = "mst_analysisMail_fromaddress";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "created_by",
	"m_strTable" => "mst_analysisMail_fromaddress",
	"m_srcTableName" => "mst_analysisMail_fromaddress"
));

$proto18["m_sql"] = "`created_by`";
$proto18["m_srcTableName"] = "mst_analysisMail_fromaddress";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "mst_analysisMail_fromaddress",
	"m_srcTableName" => "mst_analysisMail_fromaddress"
));

$proto20["m_sql"] = "`created_at`";
$proto20["m_srcTableName"] = "mst_analysisMail_fromaddress";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "mst_analysisMail_fromaddress";
$proto23["m_srcTableName"] = "mst_analysisMail_fromaddress";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "id";
$proto23["m_columns"][] = "name";
$proto23["m_columns"][] = "mailaddress";
$proto23["m_columns"][] = "from_password";
$proto23["m_columns"][] = "updated_by";
$proto23["m_columns"][] = "updated_at";
$proto23["m_columns"][] = "created_by";
$proto23["m_columns"][] = "created_at";
$proto23["m_columns"][] = "sort";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "`mst_analysisMail_fromaddress`";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "mst_analysisMail_fromaddress";
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
												$proto26=array();
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "mst_analysisMail_fromaddress",
	"m_srcTableName" => "mst_analysisMail_fromaddress"
));

$proto26["m_column"]=$obj;
$proto26["m_bAsc"] = 0;
$proto26["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto26);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="mst_analysisMail_fromaddress";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mst_analysisMail_fromaddress = createSqlQuery_mst_analysisMail_fromaddress();


	
		;

								

$tdatamst_analysisMail_fromaddress[".sqlquery"] = $queryData_mst_analysisMail_fromaddress;

$tableEvents["mst_analysisMail_fromaddress"] = new eventsBase;
$tdatamst_analysisMail_fromaddress[".hasEvents"] = false;

?>