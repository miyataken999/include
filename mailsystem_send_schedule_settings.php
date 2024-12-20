<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamailsystem_send_schedule = array();
	$tdatamailsystem_send_schedule[".truncateText"] = true;
	$tdatamailsystem_send_schedule[".NumberOfChars"] = 80;
	$tdatamailsystem_send_schedule[".ShortName"] = "mailsystem_send_schedule";
	$tdatamailsystem_send_schedule[".OwnerID"] = "";
	$tdatamailsystem_send_schedule[".OriginalTable"] = "mailsystem_send_schedule";

//	field labels
$fieldLabelsmailsystem_send_schedule = array();
$fieldToolTipsmailsystem_send_schedule = array();
$pageTitlesmailsystem_send_schedule = array();
$placeHoldersmailsystem_send_schedule = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmailsystem_send_schedule["Japanese"] = array();
	$fieldToolTipsmailsystem_send_schedule["Japanese"] = array();
	$placeHoldersmailsystem_send_schedule["Japanese"] = array();
	$pageTitlesmailsystem_send_schedule["Japanese"] = array();
	$fieldLabelsmailsystem_send_schedule["Japanese"]["id"] = "Id";
	$fieldToolTipsmailsystem_send_schedule["Japanese"]["id"] = "";
	$placeHoldersmailsystem_send_schedule["Japanese"]["id"] = "";
	$fieldLabelsmailsystem_send_schedule["Japanese"]["ecc_id"] = "顧客SEQ";
	$fieldToolTipsmailsystem_send_schedule["Japanese"]["ecc_id"] = "";
	$placeHoldersmailsystem_send_schedule["Japanese"]["ecc_id"] = "";
	$fieldLabelsmailsystem_send_schedule["Japanese"]["from_addr"] = "Fromアドレス";
	$fieldToolTipsmailsystem_send_schedule["Japanese"]["from_addr"] = "";
	$placeHoldersmailsystem_send_schedule["Japanese"]["from_addr"] = "";
	$fieldLabelsmailsystem_send_schedule["Japanese"]["to_addr"] = "Toアドレス";
	$fieldToolTipsmailsystem_send_schedule["Japanese"]["to_addr"] = "";
	$placeHoldersmailsystem_send_schedule["Japanese"]["to_addr"] = "";
	$fieldLabelsmailsystem_send_schedule["Japanese"]["subject_pc"] = "サブジェクト";
	$fieldToolTipsmailsystem_send_schedule["Japanese"]["subject_pc"] = "";
	$placeHoldersmailsystem_send_schedule["Japanese"]["subject_pc"] = "";
	$fieldLabelsmailsystem_send_schedule["Japanese"]["str_pc"] = "PC";
	$fieldToolTipsmailsystem_send_schedule["Japanese"]["str_pc"] = "";
	$placeHoldersmailsystem_send_schedule["Japanese"]["str_pc"] = "";
	$fieldLabelsmailsystem_send_schedule["Japanese"]["send_date"] = "送信日";
	$fieldToolTipsmailsystem_send_schedule["Japanese"]["send_date"] = "";
	$placeHoldersmailsystem_send_schedule["Japanese"]["send_date"] = "";
	$fieldLabelsmailsystem_send_schedule["Japanese"]["regist_date"] = "登録日";
	$fieldToolTipsmailsystem_send_schedule["Japanese"]["regist_date"] = "";
	$placeHoldersmailsystem_send_schedule["Japanese"]["regist_date"] = "";
	$fieldLabelsmailsystem_send_schedule["Japanese"]["send_kind"] = "送信種類";
	$fieldToolTipsmailsystem_send_schedule["Japanese"]["send_kind"] = "";
	$placeHoldersmailsystem_send_schedule["Japanese"]["send_kind"] = "";
	$fieldLabelsmailsystem_send_schedule["Japanese"]["sateinin"] = "査定人";
	$fieldToolTipsmailsystem_send_schedule["Japanese"]["sateinin"] = "";
	$placeHoldersmailsystem_send_schedule["Japanese"]["sateinin"] = "";
	$fieldLabelsmailsystem_send_schedule["Japanese"]["money"] = "金額";
	$fieldToolTipsmailsystem_send_schedule["Japanese"]["money"] = "";
	$placeHoldersmailsystem_send_schedule["Japanese"]["money"] = "";
	$fieldLabelsmailsystem_send_schedule["Japanese"]["regist_customer"] = "顧客データ登録";
	$fieldToolTipsmailsystem_send_schedule["Japanese"]["regist_customer"] = "";
	$placeHoldersmailsystem_send_schedule["Japanese"]["regist_customer"] = "";
	$fieldLabelsmailsystem_send_schedule["Japanese"]["Eoc_takuhai_id"] = "宅配id";
	$fieldToolTipsmailsystem_send_schedule["Japanese"]["Eoc_takuhai_id"] = "";
	$placeHoldersmailsystem_send_schedule["Japanese"]["Eoc_takuhai_id"] = "";
	if (count($fieldToolTipsmailsystem_send_schedule["Japanese"]))
		$tdatamailsystem_send_schedule[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmailsystem_send_schedule[""] = array();
	$fieldToolTipsmailsystem_send_schedule[""] = array();
	$placeHoldersmailsystem_send_schedule[""] = array();
	$pageTitlesmailsystem_send_schedule[""] = array();
	if (count($fieldToolTipsmailsystem_send_schedule[""]))
		$tdatamailsystem_send_schedule[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmailsystem_send_schedule["English"] = array();
	$fieldToolTipsmailsystem_send_schedule["English"] = array();
	$placeHoldersmailsystem_send_schedule["English"] = array();
	$pageTitlesmailsystem_send_schedule["English"] = array();
	if (count($fieldToolTipsmailsystem_send_schedule["English"]))
		$tdatamailsystem_send_schedule[".isUseToolTips"] = true;
}


	$tdatamailsystem_send_schedule[".NCSearch"] = true;



$tdatamailsystem_send_schedule[".shortTableName"] = "mailsystem_send_schedule";
$tdatamailsystem_send_schedule[".nSecOptions"] = 0;
$tdatamailsystem_send_schedule[".recsPerRowPrint"] = 1;
$tdatamailsystem_send_schedule[".mainTableOwnerID"] = "";
$tdatamailsystem_send_schedule[".moveNext"] = 1;
$tdatamailsystem_send_schedule[".entityType"] = 0;

$tdatamailsystem_send_schedule[".strOriginalTableName"] = "mailsystem_send_schedule";

	



$tdatamailsystem_send_schedule[".showAddInPopup"] = false;

$tdatamailsystem_send_schedule[".showEditInPopup"] = false;

$tdatamailsystem_send_schedule[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamailsystem_send_schedule[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamailsystem_send_schedule[".fieldsForRegister"] = array();

$tdatamailsystem_send_schedule[".listAjax"] = false;

	$tdatamailsystem_send_schedule[".audit"] = true;

	$tdatamailsystem_send_schedule[".locking"] = false;



$tdatamailsystem_send_schedule[".list"] = true;



$tdatamailsystem_send_schedule[".reorderRecordsByHeader"] = true;
$tdatamailsystem_send_schedule[".createSortByDropdown"] = true;
$tdatamailsystem_send_schedule[".strSortControlSettingsJSON"] = "";




$tdatamailsystem_send_schedule[".import"] = true;

$tdatamailsystem_send_schedule[".exportTo"] = true;

$tdatamailsystem_send_schedule[".printFriendly"] = true;


$tdatamailsystem_send_schedule[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamailsystem_send_schedule[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamailsystem_send_schedule[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamailsystem_send_schedule[".searchSaving"] = false;
//

$tdatamailsystem_send_schedule[".showSearchPanel"] = true;
		$tdatamailsystem_send_schedule[".flexibleSearch"] = true;

$tdatamailsystem_send_schedule[".isUseAjaxSuggest"] = true;

$tdatamailsystem_send_schedule[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																								

$tdatamailsystem_send_schedule[".ajaxCodeSnippetAdded"] = false;

$tdatamailsystem_send_schedule[".buttonsAdded"] = false;

$tdatamailsystem_send_schedule[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamailsystem_send_schedule[".isUseTimeForSearch"] = false;



$tdatamailsystem_send_schedule[".badgeColor"] = "d2af80";


$tdatamailsystem_send_schedule[".allSearchFields"] = array();
$tdatamailsystem_send_schedule[".filterFields"] = array();
$tdatamailsystem_send_schedule[".requiredSearchFields"] = array();

$tdatamailsystem_send_schedule[".allSearchFields"][] = "Eoc_takuhai_id";
	$tdatamailsystem_send_schedule[".allSearchFields"][] = "to_addr";
	$tdatamailsystem_send_schedule[".allSearchFields"][] = "regist_customer";
	$tdatamailsystem_send_schedule[".allSearchFields"][] = "id";
	$tdatamailsystem_send_schedule[".allSearchFields"][] = "ecc_id";
	$tdatamailsystem_send_schedule[".allSearchFields"][] = "from_addr";
	$tdatamailsystem_send_schedule[".allSearchFields"][] = "subject_pc";
	$tdatamailsystem_send_schedule[".allSearchFields"][] = "str_pc";
	$tdatamailsystem_send_schedule[".allSearchFields"][] = "send_date";
	$tdatamailsystem_send_schedule[".allSearchFields"][] = "regist_date";
	$tdatamailsystem_send_schedule[".allSearchFields"][] = "send_kind";
	$tdatamailsystem_send_schedule[".allSearchFields"][] = "sateinin";
	$tdatamailsystem_send_schedule[".allSearchFields"][] = "money";
	

$tdatamailsystem_send_schedule[".googleLikeFields"] = array();
$tdatamailsystem_send_schedule[".googleLikeFields"][] = "id";
$tdatamailsystem_send_schedule[".googleLikeFields"][] = "ecc_id";
$tdatamailsystem_send_schedule[".googleLikeFields"][] = "from_addr";
$tdatamailsystem_send_schedule[".googleLikeFields"][] = "to_addr";
$tdatamailsystem_send_schedule[".googleLikeFields"][] = "subject_pc";
$tdatamailsystem_send_schedule[".googleLikeFields"][] = "str_pc";
$tdatamailsystem_send_schedule[".googleLikeFields"][] = "send_date";
$tdatamailsystem_send_schedule[".googleLikeFields"][] = "regist_date";
$tdatamailsystem_send_schedule[".googleLikeFields"][] = "send_kind";
$tdatamailsystem_send_schedule[".googleLikeFields"][] = "sateinin";
$tdatamailsystem_send_schedule[".googleLikeFields"][] = "money";
$tdatamailsystem_send_schedule[".googleLikeFields"][] = "regist_customer";
$tdatamailsystem_send_schedule[".googleLikeFields"][] = "Eoc_takuhai_id";


$tdatamailsystem_send_schedule[".advSearchFields"] = array();
$tdatamailsystem_send_schedule[".advSearchFields"][] = "Eoc_takuhai_id";
$tdatamailsystem_send_schedule[".advSearchFields"][] = "to_addr";
$tdatamailsystem_send_schedule[".advSearchFields"][] = "regist_customer";
$tdatamailsystem_send_schedule[".advSearchFields"][] = "id";
$tdatamailsystem_send_schedule[".advSearchFields"][] = "ecc_id";
$tdatamailsystem_send_schedule[".advSearchFields"][] = "from_addr";
$tdatamailsystem_send_schedule[".advSearchFields"][] = "subject_pc";
$tdatamailsystem_send_schedule[".advSearchFields"][] = "str_pc";
$tdatamailsystem_send_schedule[".advSearchFields"][] = "send_date";
$tdatamailsystem_send_schedule[".advSearchFields"][] = "regist_date";
$tdatamailsystem_send_schedule[".advSearchFields"][] = "send_kind";
$tdatamailsystem_send_schedule[".advSearchFields"][] = "sateinin";
$tdatamailsystem_send_schedule[".advSearchFields"][] = "money";

$tdatamailsystem_send_schedule[".tableType"] = "list";

$tdatamailsystem_send_schedule[".printerPageOrientation"] = 0;
$tdatamailsystem_send_schedule[".nPrinterPageScale"] = 100;

$tdatamailsystem_send_schedule[".nPrinterSplitRecords"] = 40;

$tdatamailsystem_send_schedule[".nPrinterPDFSplitRecords"] = 40;



$tdatamailsystem_send_schedule[".geocodingEnabled"] = false;





$tdatamailsystem_send_schedule[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamailsystem_send_schedule[".pageSize"] = 20;

$tdatamailsystem_send_schedule[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `regist_date` DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamailsystem_send_schedule[".strOrderBy"] = $tstrOrderBy;

$tdatamailsystem_send_schedule[".orderindexes"] = array();
$tdatamailsystem_send_schedule[".orderindexes"][] = array(8, (0 ? "ASC" : "DESC"), "`regist_date`");

$tdatamailsystem_send_schedule[".sqlHead"] = "SELECT `id`,  `ecc_id`,  `from_addr`,  `to_addr`,  `subject_pc`,  `str_pc`,  `send_date`,  `regist_date`,  `send_kind`,  `sateinin`,  `money`,  `regist_customer`,  `Eoc_takuhai_id`";
$tdatamailsystem_send_schedule[".sqlFrom"] = "FROM `mailsystem_send_schedule`";
$tdatamailsystem_send_schedule[".sqlWhereExpr"] = "";
$tdatamailsystem_send_schedule[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamailsystem_send_schedule[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamailsystem_send_schedule[".arrGroupsPerPage"] = $arrGPP;

$tdatamailsystem_send_schedule[".highlightSearchResults"] = true;

$tableKeysmailsystem_send_schedule = array();
$tableKeysmailsystem_send_schedule[] = "id";
$tdatamailsystem_send_schedule[".Keys"] = $tableKeysmailsystem_send_schedule;

$tdatamailsystem_send_schedule[".listFields"] = array();
$tdatamailsystem_send_schedule[".listFields"][] = "to_addr";
$tdatamailsystem_send_schedule[".listFields"][] = "regist_customer";
$tdatamailsystem_send_schedule[".listFields"][] = "id";
$tdatamailsystem_send_schedule[".listFields"][] = "ecc_id";
$tdatamailsystem_send_schedule[".listFields"][] = "Eoc_takuhai_id";
$tdatamailsystem_send_schedule[".listFields"][] = "from_addr";
$tdatamailsystem_send_schedule[".listFields"][] = "subject_pc";
$tdatamailsystem_send_schedule[".listFields"][] = "str_pc";
$tdatamailsystem_send_schedule[".listFields"][] = "send_date";
$tdatamailsystem_send_schedule[".listFields"][] = "regist_date";
$tdatamailsystem_send_schedule[".listFields"][] = "send_kind";
$tdatamailsystem_send_schedule[".listFields"][] = "sateinin";
$tdatamailsystem_send_schedule[".listFields"][] = "money";

$tdatamailsystem_send_schedule[".hideMobileList"] = array();


$tdatamailsystem_send_schedule[".viewFields"] = array();

$tdatamailsystem_send_schedule[".addFields"] = array();

$tdatamailsystem_send_schedule[".masterListFields"] = array();
$tdatamailsystem_send_schedule[".masterListFields"][] = "Eoc_takuhai_id";
$tdatamailsystem_send_schedule[".masterListFields"][] = "to_addr";
$tdatamailsystem_send_schedule[".masterListFields"][] = "regist_customer";
$tdatamailsystem_send_schedule[".masterListFields"][] = "id";
$tdatamailsystem_send_schedule[".masterListFields"][] = "ecc_id";
$tdatamailsystem_send_schedule[".masterListFields"][] = "from_addr";
$tdatamailsystem_send_schedule[".masterListFields"][] = "subject_pc";
$tdatamailsystem_send_schedule[".masterListFields"][] = "str_pc";
$tdatamailsystem_send_schedule[".masterListFields"][] = "send_date";
$tdatamailsystem_send_schedule[".masterListFields"][] = "regist_date";
$tdatamailsystem_send_schedule[".masterListFields"][] = "send_kind";
$tdatamailsystem_send_schedule[".masterListFields"][] = "sateinin";
$tdatamailsystem_send_schedule[".masterListFields"][] = "money";

$tdatamailsystem_send_schedule[".inlineAddFields"] = array();

$tdatamailsystem_send_schedule[".editFields"] = array();

$tdatamailsystem_send_schedule[".inlineEditFields"] = array();

$tdatamailsystem_send_schedule[".updateSelectedFields"] = array();


$tdatamailsystem_send_schedule[".exportFields"] = array();
$tdatamailsystem_send_schedule[".exportFields"][] = "Eoc_takuhai_id";
$tdatamailsystem_send_schedule[".exportFields"][] = "to_addr";
$tdatamailsystem_send_schedule[".exportFields"][] = "regist_customer";
$tdatamailsystem_send_schedule[".exportFields"][] = "id";
$tdatamailsystem_send_schedule[".exportFields"][] = "ecc_id";
$tdatamailsystem_send_schedule[".exportFields"][] = "from_addr";
$tdatamailsystem_send_schedule[".exportFields"][] = "subject_pc";
$tdatamailsystem_send_schedule[".exportFields"][] = "str_pc";
$tdatamailsystem_send_schedule[".exportFields"][] = "send_date";
$tdatamailsystem_send_schedule[".exportFields"][] = "regist_date";
$tdatamailsystem_send_schedule[".exportFields"][] = "send_kind";
$tdatamailsystem_send_schedule[".exportFields"][] = "sateinin";
$tdatamailsystem_send_schedule[".exportFields"][] = "money";

$tdatamailsystem_send_schedule[".importFields"] = array();
$tdatamailsystem_send_schedule[".importFields"][] = "id";
$tdatamailsystem_send_schedule[".importFields"][] = "ecc_id";
$tdatamailsystem_send_schedule[".importFields"][] = "from_addr";
$tdatamailsystem_send_schedule[".importFields"][] = "to_addr";
$tdatamailsystem_send_schedule[".importFields"][] = "subject_pc";
$tdatamailsystem_send_schedule[".importFields"][] = "str_pc";
$tdatamailsystem_send_schedule[".importFields"][] = "send_date";
$tdatamailsystem_send_schedule[".importFields"][] = "regist_date";
$tdatamailsystem_send_schedule[".importFields"][] = "send_kind";
$tdatamailsystem_send_schedule[".importFields"][] = "sateinin";
$tdatamailsystem_send_schedule[".importFields"][] = "money";
$tdatamailsystem_send_schedule[".importFields"][] = "regist_customer";
$tdatamailsystem_send_schedule[".importFields"][] = "Eoc_takuhai_id";

$tdatamailsystem_send_schedule[".printFields"] = array();
$tdatamailsystem_send_schedule[".printFields"][] = "Eoc_takuhai_id";
$tdatamailsystem_send_schedule[".printFields"][] = "to_addr";
$tdatamailsystem_send_schedule[".printFields"][] = "regist_customer";
$tdatamailsystem_send_schedule[".printFields"][] = "id";
$tdatamailsystem_send_schedule[".printFields"][] = "ecc_id";
$tdatamailsystem_send_schedule[".printFields"][] = "from_addr";
$tdatamailsystem_send_schedule[".printFields"][] = "subject_pc";
$tdatamailsystem_send_schedule[".printFields"][] = "str_pc";
$tdatamailsystem_send_schedule[".printFields"][] = "send_date";
$tdatamailsystem_send_schedule[".printFields"][] = "regist_date";
$tdatamailsystem_send_schedule[".printFields"][] = "send_kind";
$tdatamailsystem_send_schedule[".printFields"][] = "sateinin";
$tdatamailsystem_send_schedule[".printFields"][] = "money";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "mailsystem_send_schedule";
	$fdata["Label"] = GetFieldLabel("mailsystem_send_schedule","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdatamailsystem_send_schedule["id"] = $fdata;
//	ecc_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ecc_id";
	$fdata["GoodName"] = "ecc_id";
	$fdata["ownerTable"] = "mailsystem_send_schedule";
	$fdata["Label"] = GetFieldLabel("mailsystem_send_schedule","ecc_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ecc_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`ecc_id`";

	
	
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




	$tdatamailsystem_send_schedule["ecc_id"] = $fdata;
//	from_addr
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "from_addr";
	$fdata["GoodName"] = "from_addr";
	$fdata["ownerTable"] = "mailsystem_send_schedule";
	$fdata["Label"] = GetFieldLabel("mailsystem_send_schedule","from_addr");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "from_addr";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`from_addr`";

	
	
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




	$tdatamailsystem_send_schedule["from_addr"] = $fdata;
//	to_addr
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "to_addr";
	$fdata["GoodName"] = "to_addr";
	$fdata["ownerTable"] = "mailsystem_send_schedule";
	$fdata["Label"] = GetFieldLabel("mailsystem_send_schedule","to_addr");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "to_addr";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`to_addr`";

	
	
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




	$tdatamailsystem_send_schedule["to_addr"] = $fdata;
//	subject_pc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "subject_pc";
	$fdata["GoodName"] = "subject_pc";
	$fdata["ownerTable"] = "mailsystem_send_schedule";
	$fdata["Label"] = GetFieldLabel("mailsystem_send_schedule","subject_pc");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "subject_pc";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`subject_pc`";

	
	
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




	$tdatamailsystem_send_schedule["subject_pc"] = $fdata;
//	str_pc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "str_pc";
	$fdata["GoodName"] = "str_pc";
	$fdata["ownerTable"] = "mailsystem_send_schedule";
	$fdata["Label"] = GetFieldLabel("mailsystem_send_schedule","str_pc");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "str_pc";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`str_pc`";

	
	
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




	$tdatamailsystem_send_schedule["str_pc"] = $fdata;
//	send_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "send_date";
	$fdata["GoodName"] = "send_date";
	$fdata["ownerTable"] = "mailsystem_send_schedule";
	$fdata["Label"] = GetFieldLabel("mailsystem_send_schedule","send_date");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "send_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`send_date`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Long Date");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

		$edata["ShowTime"] = true;

	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 11;
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




	$tdatamailsystem_send_schedule["send_date"] = $fdata;
//	regist_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "regist_date";
	$fdata["GoodName"] = "regist_date";
	$fdata["ownerTable"] = "mailsystem_send_schedule";
	$fdata["Label"] = GetFieldLabel("mailsystem_send_schedule","regist_date");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "regist_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`regist_date`";

	
	
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

	
	
		$edata["DateEditType"] = 11;
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




	$tdatamailsystem_send_schedule["regist_date"] = $fdata;
//	send_kind
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "send_kind";
	$fdata["GoodName"] = "send_kind";
	$fdata["ownerTable"] = "mailsystem_send_schedule";
	$fdata["Label"] = GetFieldLabel("mailsystem_send_schedule","send_kind");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "send_kind";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`send_kind`";

	
	
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
			$edata["EditParams"].= " maxlength=10";

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




	$tdatamailsystem_send_schedule["send_kind"] = $fdata;
//	sateinin
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "sateinin";
	$fdata["GoodName"] = "sateinin";
	$fdata["ownerTable"] = "mailsystem_send_schedule";
	$fdata["Label"] = GetFieldLabel("mailsystem_send_schedule","sateinin");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "sateinin";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`sateinin`";

	
	
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
			$edata["EditParams"].= " maxlength=10";

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




	$tdatamailsystem_send_schedule["sateinin"] = $fdata;
//	money
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "money";
	$fdata["GoodName"] = "money";
	$fdata["ownerTable"] = "mailsystem_send_schedule";
	$fdata["Label"] = GetFieldLabel("mailsystem_send_schedule","money");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "money";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`money`";

	
	
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
			$edata["EditParams"].= " maxlength=10";

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




	$tdatamailsystem_send_schedule["money"] = $fdata;
//	regist_customer
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "regist_customer";
	$fdata["GoodName"] = "regist_customer";
	$fdata["ownerTable"] = "mailsystem_send_schedule";
	$fdata["Label"] = GetFieldLabel("mailsystem_send_schedule","regist_customer");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "regist_customer";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`regist_customer`";

	
	
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




	$tdatamailsystem_send_schedule["regist_customer"] = $fdata;
//	Eoc_takuhai_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Eoc_takuhai_id";
	$fdata["GoodName"] = "Eoc_takuhai_id";
	$fdata["ownerTable"] = "mailsystem_send_schedule";
	$fdata["Label"] = GetFieldLabel("mailsystem_send_schedule","Eoc_takuhai_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Eoc_takuhai_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_takuhai_id`";

	
	
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




	$tdatamailsystem_send_schedule["Eoc_takuhai_id"] = $fdata;


$tables_data["mailsystem_send_schedule"]=&$tdatamailsystem_send_schedule;
$field_labels["mailsystem_send_schedule"] = &$fieldLabelsmailsystem_send_schedule;
$fieldToolTips["mailsystem_send_schedule"] = &$fieldToolTipsmailsystem_send_schedule;
$placeHolders["mailsystem_send_schedule"] = &$placeHoldersmailsystem_send_schedule;
$page_titles["mailsystem_send_schedule"] = &$pageTitlesmailsystem_send_schedule;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mailsystem_send_schedule"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mailsystem_send_schedule"] = array();


	
				$strOriginalDetailsTable="Eoc";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="Eoc";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "Eoc";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "0";
	$masterParams["hideChild"]= "0";
	$masterParams["dispMasterInfo"] = array();
				$masterParams["dispMasterInfo"][PAGE_LIST] = true;
			
	$masterParams["previewOnList"]= 2;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 1;
	$masterParams["proceedLink"]= 1;

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["mailsystem_send_schedule"][0] = $masterParams;
				$masterTablesData["mailsystem_send_schedule"][0]["masterKeys"] = array();
	$masterTablesData["mailsystem_send_schedule"][0]["masterKeys"][]="ecc_id";
				$masterTablesData["mailsystem_send_schedule"][0]["detailKeys"] = array();
	$masterTablesData["mailsystem_send_schedule"][0]["detailKeys"][]="ecc_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mailsystem_send_schedule()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  `ecc_id`,  `from_addr`,  `to_addr`,  `subject_pc`,  `str_pc`,  `send_date`,  `regist_date`,  `send_kind`,  `sateinin`,  `money`,  `regist_customer`,  `Eoc_takuhai_id`";
$proto0["m_strFrom"] = "FROM `mailsystem_send_schedule`";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY `regist_date` DESC";
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
	"m_strTable" => "mailsystem_send_schedule",
	"m_srcTableName" => "mailsystem_send_schedule"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "mailsystem_send_schedule";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ecc_id",
	"m_strTable" => "mailsystem_send_schedule",
	"m_srcTableName" => "mailsystem_send_schedule"
));

$proto8["m_sql"] = "`ecc_id`";
$proto8["m_srcTableName"] = "mailsystem_send_schedule";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "from_addr",
	"m_strTable" => "mailsystem_send_schedule",
	"m_srcTableName" => "mailsystem_send_schedule"
));

$proto10["m_sql"] = "`from_addr`";
$proto10["m_srcTableName"] = "mailsystem_send_schedule";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "to_addr",
	"m_strTable" => "mailsystem_send_schedule",
	"m_srcTableName" => "mailsystem_send_schedule"
));

$proto12["m_sql"] = "`to_addr`";
$proto12["m_srcTableName"] = "mailsystem_send_schedule";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "subject_pc",
	"m_strTable" => "mailsystem_send_schedule",
	"m_srcTableName" => "mailsystem_send_schedule"
));

$proto14["m_sql"] = "`subject_pc`";
$proto14["m_srcTableName"] = "mailsystem_send_schedule";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "str_pc",
	"m_strTable" => "mailsystem_send_schedule",
	"m_srcTableName" => "mailsystem_send_schedule"
));

$proto16["m_sql"] = "`str_pc`";
$proto16["m_srcTableName"] = "mailsystem_send_schedule";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "send_date",
	"m_strTable" => "mailsystem_send_schedule",
	"m_srcTableName" => "mailsystem_send_schedule"
));

$proto18["m_sql"] = "`send_date`";
$proto18["m_srcTableName"] = "mailsystem_send_schedule";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "regist_date",
	"m_strTable" => "mailsystem_send_schedule",
	"m_srcTableName" => "mailsystem_send_schedule"
));

$proto20["m_sql"] = "`regist_date`";
$proto20["m_srcTableName"] = "mailsystem_send_schedule";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "send_kind",
	"m_strTable" => "mailsystem_send_schedule",
	"m_srcTableName" => "mailsystem_send_schedule"
));

$proto22["m_sql"] = "`send_kind`";
$proto22["m_srcTableName"] = "mailsystem_send_schedule";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "sateinin",
	"m_strTable" => "mailsystem_send_schedule",
	"m_srcTableName" => "mailsystem_send_schedule"
));

$proto24["m_sql"] = "`sateinin`";
$proto24["m_srcTableName"] = "mailsystem_send_schedule";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "money",
	"m_strTable" => "mailsystem_send_schedule",
	"m_srcTableName" => "mailsystem_send_schedule"
));

$proto26["m_sql"] = "`money`";
$proto26["m_srcTableName"] = "mailsystem_send_schedule";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "regist_customer",
	"m_strTable" => "mailsystem_send_schedule",
	"m_srcTableName" => "mailsystem_send_schedule"
));

$proto28["m_sql"] = "`regist_customer`";
$proto28["m_srcTableName"] = "mailsystem_send_schedule";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "Eoc_takuhai_id",
	"m_strTable" => "mailsystem_send_schedule",
	"m_srcTableName" => "mailsystem_send_schedule"
));

$proto30["m_sql"] = "`Eoc_takuhai_id`";
$proto30["m_srcTableName"] = "mailsystem_send_schedule";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto32=array();
$proto32["m_link"] = "SQLL_MAIN";
			$proto33=array();
$proto33["m_strName"] = "mailsystem_send_schedule";
$proto33["m_srcTableName"] = "mailsystem_send_schedule";
$proto33["m_columns"] = array();
$proto33["m_columns"][] = "id";
$proto33["m_columns"][] = "tpl";
$proto33["m_columns"][] = "ecc_id";
$proto33["m_columns"][] = "from_addr";
$proto33["m_columns"][] = "to_addr";
$proto33["m_columns"][] = "subject_pc";
$proto33["m_columns"][] = "str_header";
$proto33["m_columns"][] = "str_pc";
$proto33["m_columns"][] = "str2_pc";
$proto33["m_columns"][] = "str3_pc";
$proto33["m_columns"][] = "send_date";
$proto33["m_columns"][] = "regist_date";
$proto33["m_columns"][] = "send_flag";
$proto33["m_columns"][] = "send_kind";
$proto33["m_columns"][] = "sateinin";
$proto33["m_columns"][] = "money";
$proto33["m_columns"][] = "regist_customer";
$proto33["m_columns"][] = "updated_at";
$proto33["m_columns"][] = "created_at";
$proto33["m_columns"][] = "Eoc_takuhai_id";
$obj = new SQLTable($proto33);

$proto32["m_table"] = $obj;
$proto32["m_sql"] = "`mailsystem_send_schedule`";
$proto32["m_alias"] = "";
$proto32["m_srcTableName"] = "mailsystem_send_schedule";
$proto34=array();
$proto34["m_sql"] = "";
$proto34["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto34["m_column"]=$obj;
$proto34["m_contained"] = array();
$proto34["m_strCase"] = "";
$proto34["m_havingmode"] = false;
$proto34["m_inBrackets"] = false;
$proto34["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto34);

$proto32["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto32);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto36=array();
						$obj = new SQLField(array(
	"m_strName" => "regist_date",
	"m_strTable" => "mailsystem_send_schedule",
	"m_srcTableName" => "mailsystem_send_schedule"
));

$proto36["m_column"]=$obj;
$proto36["m_bAsc"] = 0;
$proto36["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto36);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="mailsystem_send_schedule";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mailsystem_send_schedule = createSqlQuery_mailsystem_send_schedule();


	
		;

													

$tdatamailsystem_send_schedule[".sqlquery"] = $queryData_mailsystem_send_schedule;

$tableEvents["mailsystem_send_schedule"] = new eventsBase;
$tdatamailsystem_send_schedule[".hasEvents"] = false;

?>