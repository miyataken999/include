<?php
require_once(getabspath("classes/cipherer.php"));




$tdatafrom_mail_tbl = array();
	$tdatafrom_mail_tbl[".truncateText"] = true;
	$tdatafrom_mail_tbl[".NumberOfChars"] = 80;
	$tdatafrom_mail_tbl[".ShortName"] = "from_mail_tbl";
	$tdatafrom_mail_tbl[".OwnerID"] = "";
	$tdatafrom_mail_tbl[".OriginalTable"] = "from_mail_tbl";

//	field labels
$fieldLabelsfrom_mail_tbl = array();
$fieldToolTipsfrom_mail_tbl = array();
$pageTitlesfrom_mail_tbl = array();
$placeHoldersfrom_mail_tbl = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsfrom_mail_tbl["Japanese"] = array();
	$fieldToolTipsfrom_mail_tbl["Japanese"] = array();
	$placeHoldersfrom_mail_tbl["Japanese"] = array();
	$pageTitlesfrom_mail_tbl["Japanese"] = array();
	$fieldLabelsfrom_mail_tbl["Japanese"]["id"] = "Id";
	$fieldToolTipsfrom_mail_tbl["Japanese"]["id"] = "";
	$placeHoldersfrom_mail_tbl["Japanese"]["id"] = "";
	$fieldLabelsfrom_mail_tbl["Japanese"]["mail_name"] = "Mail Name";
	$fieldToolTipsfrom_mail_tbl["Japanese"]["mail_name"] = "";
	$placeHoldersfrom_mail_tbl["Japanese"]["mail_name"] = "";
	$fieldLabelsfrom_mail_tbl["Japanese"]["mail"] = "Mail";
	$fieldToolTipsfrom_mail_tbl["Japanese"]["mail"] = "";
	$placeHoldersfrom_mail_tbl["Japanese"]["mail"] = "";
	$fieldLabelsfrom_mail_tbl["Japanese"]["host_name"] = "Host Name";
	$fieldToolTipsfrom_mail_tbl["Japanese"]["host_name"] = "";
	$placeHoldersfrom_mail_tbl["Japanese"]["host_name"] = "";
	$fieldLabelsfrom_mail_tbl["Japanese"]["port_no"] = "Port No";
	$fieldToolTipsfrom_mail_tbl["Japanese"]["port_no"] = "";
	$placeHoldersfrom_mail_tbl["Japanese"]["port_no"] = "";
	$fieldLabelsfrom_mail_tbl["Japanese"]["user_name"] = "User Name";
	$fieldToolTipsfrom_mail_tbl["Japanese"]["user_name"] = "";
	$placeHoldersfrom_mail_tbl["Japanese"]["user_name"] = "";
	$fieldLabelsfrom_mail_tbl["Japanese"]["user_passwd"] = "User Passwd";
	$fieldToolTipsfrom_mail_tbl["Japanese"]["user_passwd"] = "";
	$placeHoldersfrom_mail_tbl["Japanese"]["user_passwd"] = "";
	$fieldLabelsfrom_mail_tbl["Japanese"]["server_flag"] = "Server Flag";
	$fieldToolTipsfrom_mail_tbl["Japanese"]["server_flag"] = "";
	$placeHoldersfrom_mail_tbl["Japanese"]["server_flag"] = "";
	if (count($fieldToolTipsfrom_mail_tbl["Japanese"]))
		$tdatafrom_mail_tbl[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsfrom_mail_tbl[""] = array();
	$fieldToolTipsfrom_mail_tbl[""] = array();
	$placeHoldersfrom_mail_tbl[""] = array();
	$pageTitlesfrom_mail_tbl[""] = array();
	$fieldLabelsfrom_mail_tbl[""]["id"] = "Id";
	$fieldToolTipsfrom_mail_tbl[""]["id"] = "";
	$placeHoldersfrom_mail_tbl[""]["id"] = "";
	$fieldLabelsfrom_mail_tbl[""]["mail_name"] = "Mail Name";
	$fieldToolTipsfrom_mail_tbl[""]["mail_name"] = "";
	$placeHoldersfrom_mail_tbl[""]["mail_name"] = "";
	$fieldLabelsfrom_mail_tbl[""]["mail"] = "Mail";
	$fieldToolTipsfrom_mail_tbl[""]["mail"] = "";
	$placeHoldersfrom_mail_tbl[""]["mail"] = "";
	$fieldLabelsfrom_mail_tbl[""]["host_name"] = "Host Name";
	$fieldToolTipsfrom_mail_tbl[""]["host_name"] = "";
	$placeHoldersfrom_mail_tbl[""]["host_name"] = "";
	$fieldLabelsfrom_mail_tbl[""]["port_no"] = "Port No";
	$fieldToolTipsfrom_mail_tbl[""]["port_no"] = "";
	$placeHoldersfrom_mail_tbl[""]["port_no"] = "";
	$fieldLabelsfrom_mail_tbl[""]["user_name"] = "User Name";
	$fieldToolTipsfrom_mail_tbl[""]["user_name"] = "";
	$placeHoldersfrom_mail_tbl[""]["user_name"] = "";
	$fieldLabelsfrom_mail_tbl[""]["user_passwd"] = "User Passwd";
	$fieldToolTipsfrom_mail_tbl[""]["user_passwd"] = "";
	$placeHoldersfrom_mail_tbl[""]["user_passwd"] = "";
	$fieldLabelsfrom_mail_tbl[""]["server_flag"] = "Server Flag";
	$fieldToolTipsfrom_mail_tbl[""]["server_flag"] = "";
	$placeHoldersfrom_mail_tbl[""]["server_flag"] = "";
	if (count($fieldToolTipsfrom_mail_tbl[""]))
		$tdatafrom_mail_tbl[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsfrom_mail_tbl["English"] = array();
	$fieldToolTipsfrom_mail_tbl["English"] = array();
	$placeHoldersfrom_mail_tbl["English"] = array();
	$pageTitlesfrom_mail_tbl["English"] = array();
	$fieldLabelsfrom_mail_tbl["English"]["id"] = "Id";
	$fieldToolTipsfrom_mail_tbl["English"]["id"] = "";
	$placeHoldersfrom_mail_tbl["English"]["id"] = "";
	$fieldLabelsfrom_mail_tbl["English"]["mail_name"] = "Mail Name";
	$fieldToolTipsfrom_mail_tbl["English"]["mail_name"] = "";
	$placeHoldersfrom_mail_tbl["English"]["mail_name"] = "";
	$fieldLabelsfrom_mail_tbl["English"]["mail"] = "Mail";
	$fieldToolTipsfrom_mail_tbl["English"]["mail"] = "";
	$placeHoldersfrom_mail_tbl["English"]["mail"] = "";
	$fieldLabelsfrom_mail_tbl["English"]["host_name"] = "Host Name";
	$fieldToolTipsfrom_mail_tbl["English"]["host_name"] = "";
	$placeHoldersfrom_mail_tbl["English"]["host_name"] = "";
	$fieldLabelsfrom_mail_tbl["English"]["port_no"] = "Port No";
	$fieldToolTipsfrom_mail_tbl["English"]["port_no"] = "";
	$placeHoldersfrom_mail_tbl["English"]["port_no"] = "";
	$fieldLabelsfrom_mail_tbl["English"]["user_name"] = "User Name";
	$fieldToolTipsfrom_mail_tbl["English"]["user_name"] = "";
	$placeHoldersfrom_mail_tbl["English"]["user_name"] = "";
	$fieldLabelsfrom_mail_tbl["English"]["user_passwd"] = "User Passwd";
	$fieldToolTipsfrom_mail_tbl["English"]["user_passwd"] = "";
	$placeHoldersfrom_mail_tbl["English"]["user_passwd"] = "";
	$fieldLabelsfrom_mail_tbl["English"]["server_flag"] = "Server Flag";
	$fieldToolTipsfrom_mail_tbl["English"]["server_flag"] = "";
	$placeHoldersfrom_mail_tbl["English"]["server_flag"] = "";
	if (count($fieldToolTipsfrom_mail_tbl["English"]))
		$tdatafrom_mail_tbl[".isUseToolTips"] = true;
}


	$tdatafrom_mail_tbl[".NCSearch"] = true;



$tdatafrom_mail_tbl[".shortTableName"] = "from_mail_tbl";
$tdatafrom_mail_tbl[".nSecOptions"] = 0;
$tdatafrom_mail_tbl[".recsPerRowPrint"] = 1;
$tdatafrom_mail_tbl[".mainTableOwnerID"] = "";
$tdatafrom_mail_tbl[".moveNext"] = 1;
$tdatafrom_mail_tbl[".entityType"] = 0;

$tdatafrom_mail_tbl[".strOriginalTableName"] = "from_mail_tbl";

	



$tdatafrom_mail_tbl[".showAddInPopup"] = false;

$tdatafrom_mail_tbl[".showEditInPopup"] = false;

$tdatafrom_mail_tbl[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatafrom_mail_tbl[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatafrom_mail_tbl[".fieldsForRegister"] = array();

$tdatafrom_mail_tbl[".listAjax"] = false;

	$tdatafrom_mail_tbl[".audit"] = true;

	$tdatafrom_mail_tbl[".locking"] = false;



$tdatafrom_mail_tbl[".list"] = true;

$tdatafrom_mail_tbl[".inlineEdit"] = true;


$tdatafrom_mail_tbl[".reorderRecordsByHeader"] = true;



$tdatafrom_mail_tbl[".inlineAdd"] = true;

$tdatafrom_mail_tbl[".import"] = true;

$tdatafrom_mail_tbl[".exportTo"] = true;



$tdatafrom_mail_tbl[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatafrom_mail_tbl[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatafrom_mail_tbl[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatafrom_mail_tbl[".searchSaving"] = false;
//

$tdatafrom_mail_tbl[".showSearchPanel"] = true;
		$tdatafrom_mail_tbl[".flexibleSearch"] = true;

$tdatafrom_mail_tbl[".isUseAjaxSuggest"] = true;

$tdatafrom_mail_tbl[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatafrom_mail_tbl[".ajaxCodeSnippetAdded"] = false;

$tdatafrom_mail_tbl[".buttonsAdded"] = false;

$tdatafrom_mail_tbl[".addPageEvents"] = false;

// use timepicker for search panel
$tdatafrom_mail_tbl[".isUseTimeForSearch"] = false;





$tdatafrom_mail_tbl[".allSearchFields"] = array();
$tdatafrom_mail_tbl[".filterFields"] = array();
$tdatafrom_mail_tbl[".requiredSearchFields"] = array();

$tdatafrom_mail_tbl[".allSearchFields"][] = "id";
	$tdatafrom_mail_tbl[".allSearchFields"][] = "mail_name";
	$tdatafrom_mail_tbl[".allSearchFields"][] = "mail";
	$tdatafrom_mail_tbl[".allSearchFields"][] = "host_name";
	$tdatafrom_mail_tbl[".allSearchFields"][] = "port_no";
	$tdatafrom_mail_tbl[".allSearchFields"][] = "user_name";
	$tdatafrom_mail_tbl[".allSearchFields"][] = "user_passwd";
	$tdatafrom_mail_tbl[".allSearchFields"][] = "server_flag";
	

$tdatafrom_mail_tbl[".googleLikeFields"] = array();
$tdatafrom_mail_tbl[".googleLikeFields"][] = "id";
$tdatafrom_mail_tbl[".googleLikeFields"][] = "mail_name";
$tdatafrom_mail_tbl[".googleLikeFields"][] = "mail";
$tdatafrom_mail_tbl[".googleLikeFields"][] = "host_name";
$tdatafrom_mail_tbl[".googleLikeFields"][] = "port_no";
$tdatafrom_mail_tbl[".googleLikeFields"][] = "user_name";
$tdatafrom_mail_tbl[".googleLikeFields"][] = "user_passwd";
$tdatafrom_mail_tbl[".googleLikeFields"][] = "server_flag";


$tdatafrom_mail_tbl[".advSearchFields"] = array();
$tdatafrom_mail_tbl[".advSearchFields"][] = "id";
$tdatafrom_mail_tbl[".advSearchFields"][] = "mail_name";
$tdatafrom_mail_tbl[".advSearchFields"][] = "mail";
$tdatafrom_mail_tbl[".advSearchFields"][] = "host_name";
$tdatafrom_mail_tbl[".advSearchFields"][] = "port_no";
$tdatafrom_mail_tbl[".advSearchFields"][] = "user_name";
$tdatafrom_mail_tbl[".advSearchFields"][] = "user_passwd";
$tdatafrom_mail_tbl[".advSearchFields"][] = "server_flag";

$tdatafrom_mail_tbl[".tableType"] = "list";

$tdatafrom_mail_tbl[".printerPageOrientation"] = 0;
$tdatafrom_mail_tbl[".nPrinterPageScale"] = 100;

$tdatafrom_mail_tbl[".nPrinterSplitRecords"] = 40;

$tdatafrom_mail_tbl[".nPrinterPDFSplitRecords"] = 40;



$tdatafrom_mail_tbl[".geocodingEnabled"] = false;





$tdatafrom_mail_tbl[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatafrom_mail_tbl[".pageSize"] = 20;

$tdatafrom_mail_tbl[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatafrom_mail_tbl[".strOrderBy"] = $tstrOrderBy;

$tdatafrom_mail_tbl[".orderindexes"] = array();

$tdatafrom_mail_tbl[".sqlHead"] = "SELECT `id`,  	`mail_name`,  	`mail`,  	`host_name`,  	`port_no`,  	`user_name`,  	`user_passwd`,  	`server_flag`";
$tdatafrom_mail_tbl[".sqlFrom"] = "FROM `from_mail_tbl`";
$tdatafrom_mail_tbl[".sqlWhereExpr"] = "";
$tdatafrom_mail_tbl[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatafrom_mail_tbl[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatafrom_mail_tbl[".arrGroupsPerPage"] = $arrGPP;

$tdatafrom_mail_tbl[".highlightSearchResults"] = true;

$tableKeysfrom_mail_tbl = array();
$tableKeysfrom_mail_tbl[] = "id";
$tdatafrom_mail_tbl[".Keys"] = $tableKeysfrom_mail_tbl;

$tdatafrom_mail_tbl[".listFields"] = array();
$tdatafrom_mail_tbl[".listFields"][] = "id";
$tdatafrom_mail_tbl[".listFields"][] = "mail_name";
$tdatafrom_mail_tbl[".listFields"][] = "mail";
$tdatafrom_mail_tbl[".listFields"][] = "host_name";
$tdatafrom_mail_tbl[".listFields"][] = "port_no";
$tdatafrom_mail_tbl[".listFields"][] = "user_name";
$tdatafrom_mail_tbl[".listFields"][] = "user_passwd";
$tdatafrom_mail_tbl[".listFields"][] = "server_flag";

$tdatafrom_mail_tbl[".hideMobileList"] = array();


$tdatafrom_mail_tbl[".viewFields"] = array();
$tdatafrom_mail_tbl[".viewFields"][] = "id";
$tdatafrom_mail_tbl[".viewFields"][] = "mail_name";
$tdatafrom_mail_tbl[".viewFields"][] = "mail";
$tdatafrom_mail_tbl[".viewFields"][] = "host_name";
$tdatafrom_mail_tbl[".viewFields"][] = "port_no";
$tdatafrom_mail_tbl[".viewFields"][] = "user_name";
$tdatafrom_mail_tbl[".viewFields"][] = "user_passwd";
$tdatafrom_mail_tbl[".viewFields"][] = "server_flag";

$tdatafrom_mail_tbl[".addFields"] = array();
$tdatafrom_mail_tbl[".addFields"][] = "mail_name";
$tdatafrom_mail_tbl[".addFields"][] = "mail";
$tdatafrom_mail_tbl[".addFields"][] = "host_name";
$tdatafrom_mail_tbl[".addFields"][] = "port_no";
$tdatafrom_mail_tbl[".addFields"][] = "user_name";
$tdatafrom_mail_tbl[".addFields"][] = "user_passwd";
$tdatafrom_mail_tbl[".addFields"][] = "server_flag";

$tdatafrom_mail_tbl[".masterListFields"] = array();
$tdatafrom_mail_tbl[".masterListFields"][] = "id";
$tdatafrom_mail_tbl[".masterListFields"][] = "mail_name";
$tdatafrom_mail_tbl[".masterListFields"][] = "mail";
$tdatafrom_mail_tbl[".masterListFields"][] = "host_name";
$tdatafrom_mail_tbl[".masterListFields"][] = "port_no";
$tdatafrom_mail_tbl[".masterListFields"][] = "user_name";
$tdatafrom_mail_tbl[".masterListFields"][] = "user_passwd";
$tdatafrom_mail_tbl[".masterListFields"][] = "server_flag";

$tdatafrom_mail_tbl[".inlineAddFields"] = array();
$tdatafrom_mail_tbl[".inlineAddFields"][] = "mail_name";
$tdatafrom_mail_tbl[".inlineAddFields"][] = "mail";
$tdatafrom_mail_tbl[".inlineAddFields"][] = "host_name";
$tdatafrom_mail_tbl[".inlineAddFields"][] = "port_no";
$tdatafrom_mail_tbl[".inlineAddFields"][] = "user_name";
$tdatafrom_mail_tbl[".inlineAddFields"][] = "user_passwd";
$tdatafrom_mail_tbl[".inlineAddFields"][] = "server_flag";

$tdatafrom_mail_tbl[".editFields"] = array();
$tdatafrom_mail_tbl[".editFields"][] = "mail_name";
$tdatafrom_mail_tbl[".editFields"][] = "mail";
$tdatafrom_mail_tbl[".editFields"][] = "host_name";
$tdatafrom_mail_tbl[".editFields"][] = "port_no";
$tdatafrom_mail_tbl[".editFields"][] = "user_name";
$tdatafrom_mail_tbl[".editFields"][] = "user_passwd";
$tdatafrom_mail_tbl[".editFields"][] = "server_flag";

$tdatafrom_mail_tbl[".inlineEditFields"] = array();
$tdatafrom_mail_tbl[".inlineEditFields"][] = "mail_name";
$tdatafrom_mail_tbl[".inlineEditFields"][] = "mail";
$tdatafrom_mail_tbl[".inlineEditFields"][] = "host_name";
$tdatafrom_mail_tbl[".inlineEditFields"][] = "port_no";
$tdatafrom_mail_tbl[".inlineEditFields"][] = "user_name";
$tdatafrom_mail_tbl[".inlineEditFields"][] = "user_passwd";
$tdatafrom_mail_tbl[".inlineEditFields"][] = "server_flag";

$tdatafrom_mail_tbl[".updateSelectedFields"] = array();
$tdatafrom_mail_tbl[".updateSelectedFields"][] = "mail_name";
$tdatafrom_mail_tbl[".updateSelectedFields"][] = "mail";
$tdatafrom_mail_tbl[".updateSelectedFields"][] = "host_name";
$tdatafrom_mail_tbl[".updateSelectedFields"][] = "port_no";
$tdatafrom_mail_tbl[".updateSelectedFields"][] = "user_name";
$tdatafrom_mail_tbl[".updateSelectedFields"][] = "user_passwd";
$tdatafrom_mail_tbl[".updateSelectedFields"][] = "server_flag";


$tdatafrom_mail_tbl[".exportFields"] = array();
$tdatafrom_mail_tbl[".exportFields"][] = "id";
$tdatafrom_mail_tbl[".exportFields"][] = "mail_name";
$tdatafrom_mail_tbl[".exportFields"][] = "mail";
$tdatafrom_mail_tbl[".exportFields"][] = "host_name";
$tdatafrom_mail_tbl[".exportFields"][] = "port_no";
$tdatafrom_mail_tbl[".exportFields"][] = "user_name";
$tdatafrom_mail_tbl[".exportFields"][] = "user_passwd";
$tdatafrom_mail_tbl[".exportFields"][] = "server_flag";

$tdatafrom_mail_tbl[".importFields"] = array();
$tdatafrom_mail_tbl[".importFields"][] = "id";
$tdatafrom_mail_tbl[".importFields"][] = "mail_name";
$tdatafrom_mail_tbl[".importFields"][] = "mail";
$tdatafrom_mail_tbl[".importFields"][] = "host_name";
$tdatafrom_mail_tbl[".importFields"][] = "port_no";
$tdatafrom_mail_tbl[".importFields"][] = "user_name";
$tdatafrom_mail_tbl[".importFields"][] = "user_passwd";
$tdatafrom_mail_tbl[".importFields"][] = "server_flag";

$tdatafrom_mail_tbl[".printFields"] = array();
$tdatafrom_mail_tbl[".printFields"][] = "id";
$tdatafrom_mail_tbl[".printFields"][] = "mail_name";
$tdatafrom_mail_tbl[".printFields"][] = "mail";
$tdatafrom_mail_tbl[".printFields"][] = "host_name";
$tdatafrom_mail_tbl[".printFields"][] = "port_no";
$tdatafrom_mail_tbl[".printFields"][] = "user_name";
$tdatafrom_mail_tbl[".printFields"][] = "user_passwd";
$tdatafrom_mail_tbl[".printFields"][] = "server_flag";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "from_mail_tbl";
	$fdata["Label"] = GetFieldLabel("from_mail_tbl","id");
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




	$tdatafrom_mail_tbl["id"] = $fdata;
//	mail_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "mail_name";
	$fdata["GoodName"] = "mail_name";
	$fdata["ownerTable"] = "from_mail_tbl";
	$fdata["Label"] = GetFieldLabel("from_mail_tbl","mail_name");
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

		$fdata["strField"] = "mail_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mail_name`";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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




	$tdatafrom_mail_tbl["mail_name"] = $fdata;
//	mail
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "mail";
	$fdata["GoodName"] = "mail";
	$fdata["ownerTable"] = "from_mail_tbl";
	$fdata["Label"] = GetFieldLabel("from_mail_tbl","mail");
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

		$fdata["strField"] = "mail";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mail`";

	
	
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




	$tdatafrom_mail_tbl["mail"] = $fdata;
//	host_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "host_name";
	$fdata["GoodName"] = "host_name";
	$fdata["ownerTable"] = "from_mail_tbl";
	$fdata["Label"] = GetFieldLabel("from_mail_tbl","host_name");
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

		$fdata["strField"] = "host_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`host_name`";

	
	
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




	$tdatafrom_mail_tbl["host_name"] = $fdata;
//	port_no
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "port_no";
	$fdata["GoodName"] = "port_no";
	$fdata["ownerTable"] = "from_mail_tbl";
	$fdata["Label"] = GetFieldLabel("from_mail_tbl","port_no");
	$fdata["FieldType"] = 3;

	
	
	
			
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

		$fdata["strField"] = "port_no";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`port_no`";

	
	
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




	$tdatafrom_mail_tbl["port_no"] = $fdata;
//	user_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "user_name";
	$fdata["GoodName"] = "user_name";
	$fdata["ownerTable"] = "from_mail_tbl";
	$fdata["Label"] = GetFieldLabel("from_mail_tbl","user_name");
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

		$fdata["strField"] = "user_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`user_name`";

	
	
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




	$tdatafrom_mail_tbl["user_name"] = $fdata;
//	user_passwd
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "user_passwd";
	$fdata["GoodName"] = "user_passwd";
	$fdata["ownerTable"] = "from_mail_tbl";
	$fdata["Label"] = GetFieldLabel("from_mail_tbl","user_passwd");
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

		$fdata["strField"] = "user_passwd";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`user_passwd`";

	
	
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




	$tdatafrom_mail_tbl["user_passwd"] = $fdata;
//	server_flag
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "server_flag";
	$fdata["GoodName"] = "server_flag";
	$fdata["ownerTable"] = "from_mail_tbl";
	$fdata["Label"] = GetFieldLabel("from_mail_tbl","server_flag");
	$fdata["FieldType"] = 3;

	
	
	
			
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

		$fdata["strField"] = "server_flag";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`server_flag`";

	
	
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




	$tdatafrom_mail_tbl["server_flag"] = $fdata;


$tables_data["from_mail_tbl"]=&$tdatafrom_mail_tbl;
$field_labels["from_mail_tbl"] = &$fieldLabelsfrom_mail_tbl;
$fieldToolTips["from_mail_tbl"] = &$fieldToolTipsfrom_mail_tbl;
$placeHolders["from_mail_tbl"] = &$placeHoldersfrom_mail_tbl;
$page_titles["from_mail_tbl"] = &$pageTitlesfrom_mail_tbl;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["from_mail_tbl"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["from_mail_tbl"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_from_mail_tbl()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  	`mail_name`,  	`mail`,  	`host_name`,  	`port_no`,  	`user_name`,  	`user_passwd`,  	`server_flag`";
$proto0["m_strFrom"] = "FROM `from_mail_tbl`";
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
	"m_strTable" => "from_mail_tbl",
	"m_srcTableName" => "from_mail_tbl"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "from_mail_tbl";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "mail_name",
	"m_strTable" => "from_mail_tbl",
	"m_srcTableName" => "from_mail_tbl"
));

$proto8["m_sql"] = "`mail_name`";
$proto8["m_srcTableName"] = "from_mail_tbl";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "mail",
	"m_strTable" => "from_mail_tbl",
	"m_srcTableName" => "from_mail_tbl"
));

$proto10["m_sql"] = "`mail`";
$proto10["m_srcTableName"] = "from_mail_tbl";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "host_name",
	"m_strTable" => "from_mail_tbl",
	"m_srcTableName" => "from_mail_tbl"
));

$proto12["m_sql"] = "`host_name`";
$proto12["m_srcTableName"] = "from_mail_tbl";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "port_no",
	"m_strTable" => "from_mail_tbl",
	"m_srcTableName" => "from_mail_tbl"
));

$proto14["m_sql"] = "`port_no`";
$proto14["m_srcTableName"] = "from_mail_tbl";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "user_name",
	"m_strTable" => "from_mail_tbl",
	"m_srcTableName" => "from_mail_tbl"
));

$proto16["m_sql"] = "`user_name`";
$proto16["m_srcTableName"] = "from_mail_tbl";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "user_passwd",
	"m_strTable" => "from_mail_tbl",
	"m_srcTableName" => "from_mail_tbl"
));

$proto18["m_sql"] = "`user_passwd`";
$proto18["m_srcTableName"] = "from_mail_tbl";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "server_flag",
	"m_strTable" => "from_mail_tbl",
	"m_srcTableName" => "from_mail_tbl"
));

$proto20["m_sql"] = "`server_flag`";
$proto20["m_srcTableName"] = "from_mail_tbl";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "from_mail_tbl";
$proto23["m_srcTableName"] = "from_mail_tbl";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "id";
$proto23["m_columns"][] = "mail_name";
$proto23["m_columns"][] = "mail";
$proto23["m_columns"][] = "host_name";
$proto23["m_columns"][] = "port_no";
$proto23["m_columns"][] = "user_name";
$proto23["m_columns"][] = "user_passwd";
$proto23["m_columns"][] = "server_flag";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "`from_mail_tbl`";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "from_mail_tbl";
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
$proto0["m_srcTableName"]="from_mail_tbl";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_from_mail_tbl = createSqlQuery_from_mail_tbl();


	
		;

								

$tdatafrom_mail_tbl[".sqlquery"] = $queryData_from_mail_tbl;

$tableEvents["from_mail_tbl"] = new eventsBase;
$tdatafrom_mail_tbl[".hasEvents"] = false;

?>