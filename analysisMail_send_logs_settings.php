<?php
require_once(getabspath("classes/cipherer.php"));




$tdataanalysisMail_send_logs = array();
	$tdataanalysisMail_send_logs[".truncateText"] = true;
	$tdataanalysisMail_send_logs[".NumberOfChars"] = 80;
	$tdataanalysisMail_send_logs[".ShortName"] = "analysisMail_send_logs";
	$tdataanalysisMail_send_logs[".OwnerID"] = "";
	$tdataanalysisMail_send_logs[".OriginalTable"] = "analysisMail_send_logs";

//	field labels
$fieldLabelsanalysisMail_send_logs = array();
$fieldToolTipsanalysisMail_send_logs = array();
$pageTitlesanalysisMail_send_logs = array();
$placeHoldersanalysisMail_send_logs = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsanalysisMail_send_logs["Japanese"] = array();
	$fieldToolTipsanalysisMail_send_logs["Japanese"] = array();
	$placeHoldersanalysisMail_send_logs["Japanese"] = array();
	$pageTitlesanalysisMail_send_logs["Japanese"] = array();
	$fieldLabelsanalysisMail_send_logs["Japanese"]["send_log_id"] = "メールログId";
	$fieldToolTipsanalysisMail_send_logs["Japanese"]["send_log_id"] = "";
	$placeHoldersanalysisMail_send_logs["Japanese"]["send_log_id"] = "";
	$fieldLabelsanalysisMail_send_logs["Japanese"]["send_mail_id"] = "メールId";
	$fieldToolTipsanalysisMail_send_logs["Japanese"]["send_mail_id"] = "";
	$placeHoldersanalysisMail_send_logs["Japanese"]["send_mail_id"] = "";
	$fieldLabelsanalysisMail_send_logs["Japanese"]["send_TO"] = "TO";
	$fieldToolTipsanalysisMail_send_logs["Japanese"]["send_TO"] = "";
	$placeHoldersanalysisMail_send_logs["Japanese"]["send_TO"] = "";
	$fieldLabelsanalysisMail_send_logs["Japanese"]["send_CC"] = "CC";
	$fieldToolTipsanalysisMail_send_logs["Japanese"]["send_CC"] = "";
	$placeHoldersanalysisMail_send_logs["Japanese"]["send_CC"] = "";
	$fieldLabelsanalysisMail_send_logs["Japanese"]["updated_by"] = "更新者";
	$fieldToolTipsanalysisMail_send_logs["Japanese"]["updated_by"] = "";
	$placeHoldersanalysisMail_send_logs["Japanese"]["updated_by"] = "";
	$fieldLabelsanalysisMail_send_logs["Japanese"]["updated_at"] = "更新日";
	$fieldToolTipsanalysisMail_send_logs["Japanese"]["updated_at"] = "";
	$placeHoldersanalysisMail_send_logs["Japanese"]["updated_at"] = "";
	$fieldLabelsanalysisMail_send_logs["Japanese"]["created_by"] = "作成者";
	$fieldToolTipsanalysisMail_send_logs["Japanese"]["created_by"] = "";
	$placeHoldersanalysisMail_send_logs["Japanese"]["created_by"] = "";
	$fieldLabelsanalysisMail_send_logs["Japanese"]["created_at"] = "作成日";
	$fieldToolTipsanalysisMail_send_logs["Japanese"]["created_at"] = "";
	$placeHoldersanalysisMail_send_logs["Japanese"]["created_at"] = "";
	$fieldLabelsanalysisMail_send_logs["Japanese"]["send_at"] = "送信日時";
	$fieldToolTipsanalysisMail_send_logs["Japanese"]["send_at"] = "";
	$placeHoldersanalysisMail_send_logs["Japanese"]["send_at"] = "";
	$fieldLabelsanalysisMail_send_logs["Japanese"]["send_result"] = "送信結果";
	$fieldToolTipsanalysisMail_send_logs["Japanese"]["send_result"] = "";
	$placeHoldersanalysisMail_send_logs["Japanese"]["send_result"] = "";
	$fieldLabelsanalysisMail_send_logs["Japanese"]["ecc_id"] = "顧客SEQ";
	$fieldToolTipsanalysisMail_send_logs["Japanese"]["ecc_id"] = "";
	$placeHoldersanalysisMail_send_logs["Japanese"]["ecc_id"] = "";
	$fieldLabelsanalysisMail_send_logs["Japanese"]["subject"] = "件名";
	$fieldToolTipsanalysisMail_send_logs["Japanese"]["subject"] = "";
	$placeHoldersanalysisMail_send_logs["Japanese"]["subject"] = "";
	if (count($fieldToolTipsanalysisMail_send_logs["Japanese"]))
		$tdataanalysisMail_send_logs[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsanalysisMail_send_logs[""] = array();
	$fieldToolTipsanalysisMail_send_logs[""] = array();
	$placeHoldersanalysisMail_send_logs[""] = array();
	$pageTitlesanalysisMail_send_logs[""] = array();
	$fieldLabelsanalysisMail_send_logs[""]["send_log_id"] = "Send Log Id";
	$fieldToolTipsanalysisMail_send_logs[""]["send_log_id"] = "";
	$placeHoldersanalysisMail_send_logs[""]["send_log_id"] = "";
	$fieldLabelsanalysisMail_send_logs[""]["send_mail_id"] = "Send Mail Id";
	$fieldToolTipsanalysisMail_send_logs[""]["send_mail_id"] = "";
	$placeHoldersanalysisMail_send_logs[""]["send_mail_id"] = "";
	$fieldLabelsanalysisMail_send_logs[""]["send_TO"] = "Send TO";
	$fieldToolTipsanalysisMail_send_logs[""]["send_TO"] = "";
	$placeHoldersanalysisMail_send_logs[""]["send_TO"] = "";
	$fieldLabelsanalysisMail_send_logs[""]["send_CC"] = "Send CC";
	$fieldToolTipsanalysisMail_send_logs[""]["send_CC"] = "";
	$placeHoldersanalysisMail_send_logs[""]["send_CC"] = "";
	$fieldLabelsanalysisMail_send_logs[""]["updated_by"] = "Updated By";
	$fieldToolTipsanalysisMail_send_logs[""]["updated_by"] = "";
	$placeHoldersanalysisMail_send_logs[""]["updated_by"] = "";
	$fieldLabelsanalysisMail_send_logs[""]["updated_at"] = "Updated At";
	$fieldToolTipsanalysisMail_send_logs[""]["updated_at"] = "";
	$placeHoldersanalysisMail_send_logs[""]["updated_at"] = "";
	$fieldLabelsanalysisMail_send_logs[""]["created_by"] = "Created By";
	$fieldToolTipsanalysisMail_send_logs[""]["created_by"] = "";
	$placeHoldersanalysisMail_send_logs[""]["created_by"] = "";
	$fieldLabelsanalysisMail_send_logs[""]["created_at"] = "Created At";
	$fieldToolTipsanalysisMail_send_logs[""]["created_at"] = "";
	$placeHoldersanalysisMail_send_logs[""]["created_at"] = "";
	$fieldLabelsanalysisMail_send_logs[""]["send_at"] = "Send At";
	$fieldToolTipsanalysisMail_send_logs[""]["send_at"] = "";
	$placeHoldersanalysisMail_send_logs[""]["send_at"] = "";
	$fieldLabelsanalysisMail_send_logs[""]["send_result"] = "Send Result";
	$fieldToolTipsanalysisMail_send_logs[""]["send_result"] = "";
	$placeHoldersanalysisMail_send_logs[""]["send_result"] = "";
	$fieldLabelsanalysisMail_send_logs[""]["ecc_id"] = "Ecc Id";
	$fieldToolTipsanalysisMail_send_logs[""]["ecc_id"] = "";
	$placeHoldersanalysisMail_send_logs[""]["ecc_id"] = "";
	$fieldLabelsanalysisMail_send_logs[""]["subject"] = "Subject";
	$fieldToolTipsanalysisMail_send_logs[""]["subject"] = "";
	$placeHoldersanalysisMail_send_logs[""]["subject"] = "";
	if (count($fieldToolTipsanalysisMail_send_logs[""]))
		$tdataanalysisMail_send_logs[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsanalysisMail_send_logs["English"] = array();
	$fieldToolTipsanalysisMail_send_logs["English"] = array();
	$placeHoldersanalysisMail_send_logs["English"] = array();
	$pageTitlesanalysisMail_send_logs["English"] = array();
	$fieldLabelsanalysisMail_send_logs["English"]["send_log_id"] = "Send Log Id";
	$fieldToolTipsanalysisMail_send_logs["English"]["send_log_id"] = "";
	$placeHoldersanalysisMail_send_logs["English"]["send_log_id"] = "";
	$fieldLabelsanalysisMail_send_logs["English"]["send_mail_id"] = "Send Mail Id";
	$fieldToolTipsanalysisMail_send_logs["English"]["send_mail_id"] = "";
	$placeHoldersanalysisMail_send_logs["English"]["send_mail_id"] = "";
	$fieldLabelsanalysisMail_send_logs["English"]["send_TO"] = "Send TO";
	$fieldToolTipsanalysisMail_send_logs["English"]["send_TO"] = "";
	$placeHoldersanalysisMail_send_logs["English"]["send_TO"] = "";
	$fieldLabelsanalysisMail_send_logs["English"]["send_CC"] = "Send CC";
	$fieldToolTipsanalysisMail_send_logs["English"]["send_CC"] = "";
	$placeHoldersanalysisMail_send_logs["English"]["send_CC"] = "";
	$fieldLabelsanalysisMail_send_logs["English"]["updated_by"] = "Updated By";
	$fieldToolTipsanalysisMail_send_logs["English"]["updated_by"] = "";
	$placeHoldersanalysisMail_send_logs["English"]["updated_by"] = "";
	$fieldLabelsanalysisMail_send_logs["English"]["updated_at"] = "Updated At";
	$fieldToolTipsanalysisMail_send_logs["English"]["updated_at"] = "";
	$placeHoldersanalysisMail_send_logs["English"]["updated_at"] = "";
	$fieldLabelsanalysisMail_send_logs["English"]["created_by"] = "Created By";
	$fieldToolTipsanalysisMail_send_logs["English"]["created_by"] = "";
	$placeHoldersanalysisMail_send_logs["English"]["created_by"] = "";
	$fieldLabelsanalysisMail_send_logs["English"]["created_at"] = "Created At";
	$fieldToolTipsanalysisMail_send_logs["English"]["created_at"] = "";
	$placeHoldersanalysisMail_send_logs["English"]["created_at"] = "";
	$fieldLabelsanalysisMail_send_logs["English"]["send_at"] = "Send At";
	$fieldToolTipsanalysisMail_send_logs["English"]["send_at"] = "";
	$placeHoldersanalysisMail_send_logs["English"]["send_at"] = "";
	$fieldLabelsanalysisMail_send_logs["English"]["send_result"] = "Send Result";
	$fieldToolTipsanalysisMail_send_logs["English"]["send_result"] = "";
	$placeHoldersanalysisMail_send_logs["English"]["send_result"] = "";
	$fieldLabelsanalysisMail_send_logs["English"]["ecc_id"] = "Ecc Id";
	$fieldToolTipsanalysisMail_send_logs["English"]["ecc_id"] = "";
	$placeHoldersanalysisMail_send_logs["English"]["ecc_id"] = "";
	$fieldLabelsanalysisMail_send_logs["English"]["subject"] = "Subject";
	$fieldToolTipsanalysisMail_send_logs["English"]["subject"] = "";
	$placeHoldersanalysisMail_send_logs["English"]["subject"] = "";
	if (count($fieldToolTipsanalysisMail_send_logs["English"]))
		$tdataanalysisMail_send_logs[".isUseToolTips"] = true;
}


	$tdataanalysisMail_send_logs[".NCSearch"] = true;



$tdataanalysisMail_send_logs[".shortTableName"] = "analysisMail_send_logs";
$tdataanalysisMail_send_logs[".nSecOptions"] = 0;
$tdataanalysisMail_send_logs[".recsPerRowPrint"] = 1;
$tdataanalysisMail_send_logs[".mainTableOwnerID"] = "";
$tdataanalysisMail_send_logs[".moveNext"] = 1;
$tdataanalysisMail_send_logs[".entityType"] = 0;

$tdataanalysisMail_send_logs[".strOriginalTableName"] = "analysisMail_send_logs";

	



$tdataanalysisMail_send_logs[".showAddInPopup"] = false;

$tdataanalysisMail_send_logs[".showEditInPopup"] = false;

$tdataanalysisMail_send_logs[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataanalysisMail_send_logs[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataanalysisMail_send_logs[".fieldsForRegister"] = array();

$tdataanalysisMail_send_logs[".listAjax"] = false;

	$tdataanalysisMail_send_logs[".audit"] = true;

	$tdataanalysisMail_send_logs[".locking"] = false;



$tdataanalysisMail_send_logs[".list"] = true;



$tdataanalysisMail_send_logs[".reorderRecordsByHeader"] = true;








$tdataanalysisMail_send_logs[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataanalysisMail_send_logs[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataanalysisMail_send_logs[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataanalysisMail_send_logs[".searchSaving"] = false;
//

$tdataanalysisMail_send_logs[".showSearchPanel"] = true;
		$tdataanalysisMail_send_logs[".flexibleSearch"] = true;

$tdataanalysisMail_send_logs[".isUseAjaxSuggest"] = true;

$tdataanalysisMail_send_logs[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																								

$tdataanalysisMail_send_logs[".ajaxCodeSnippetAdded"] = false;

$tdataanalysisMail_send_logs[".buttonsAdded"] = false;

$tdataanalysisMail_send_logs[".addPageEvents"] = false;

// use timepicker for search panel
$tdataanalysisMail_send_logs[".isUseTimeForSearch"] = false;



$tdataanalysisMail_send_logs[".badgeColor"] = "dc143c";

$tdataanalysisMail_send_logs[".detailsLinksOnList"] = "1";

$tdataanalysisMail_send_logs[".allSearchFields"] = array();
$tdataanalysisMail_send_logs[".filterFields"] = array();
$tdataanalysisMail_send_logs[".requiredSearchFields"] = array();

$tdataanalysisMail_send_logs[".allSearchFields"][] = "send_log_id";
	$tdataanalysisMail_send_logs[".allSearchFields"][] = "send_mail_id";
	$tdataanalysisMail_send_logs[".allSearchFields"][] = "subject";
	$tdataanalysisMail_send_logs[".allSearchFields"][] = "send_TO";
	$tdataanalysisMail_send_logs[".allSearchFields"][] = "send_CC";
	$tdataanalysisMail_send_logs[".allSearchFields"][] = "send_at";
	$tdataanalysisMail_send_logs[".allSearchFields"][] = "send_result";
	$tdataanalysisMail_send_logs[".allSearchFields"][] = "ecc_id";
	$tdataanalysisMail_send_logs[".allSearchFields"][] = "updated_by";
	$tdataanalysisMail_send_logs[".allSearchFields"][] = "updated_at";
	$tdataanalysisMail_send_logs[".allSearchFields"][] = "created_by";
	$tdataanalysisMail_send_logs[".allSearchFields"][] = "created_at";
	

$tdataanalysisMail_send_logs[".googleLikeFields"] = array();
$tdataanalysisMail_send_logs[".googleLikeFields"][] = "send_log_id";
$tdataanalysisMail_send_logs[".googleLikeFields"][] = "send_mail_id";
$tdataanalysisMail_send_logs[".googleLikeFields"][] = "send_TO";
$tdataanalysisMail_send_logs[".googleLikeFields"][] = "send_CC";
$tdataanalysisMail_send_logs[".googleLikeFields"][] = "send_at";
$tdataanalysisMail_send_logs[".googleLikeFields"][] = "send_result";
$tdataanalysisMail_send_logs[".googleLikeFields"][] = "ecc_id";
$tdataanalysisMail_send_logs[".googleLikeFields"][] = "updated_by";
$tdataanalysisMail_send_logs[".googleLikeFields"][] = "updated_at";
$tdataanalysisMail_send_logs[".googleLikeFields"][] = "created_by";
$tdataanalysisMail_send_logs[".googleLikeFields"][] = "created_at";
$tdataanalysisMail_send_logs[".googleLikeFields"][] = "subject";


$tdataanalysisMail_send_logs[".advSearchFields"] = array();
$tdataanalysisMail_send_logs[".advSearchFields"][] = "send_log_id";
$tdataanalysisMail_send_logs[".advSearchFields"][] = "send_mail_id";
$tdataanalysisMail_send_logs[".advSearchFields"][] = "subject";
$tdataanalysisMail_send_logs[".advSearchFields"][] = "send_TO";
$tdataanalysisMail_send_logs[".advSearchFields"][] = "send_CC";
$tdataanalysisMail_send_logs[".advSearchFields"][] = "send_at";
$tdataanalysisMail_send_logs[".advSearchFields"][] = "send_result";
$tdataanalysisMail_send_logs[".advSearchFields"][] = "ecc_id";
$tdataanalysisMail_send_logs[".advSearchFields"][] = "updated_by";
$tdataanalysisMail_send_logs[".advSearchFields"][] = "updated_at";
$tdataanalysisMail_send_logs[".advSearchFields"][] = "created_by";
$tdataanalysisMail_send_logs[".advSearchFields"][] = "created_at";

$tdataanalysisMail_send_logs[".tableType"] = "list";

$tdataanalysisMail_send_logs[".printerPageOrientation"] = 0;
$tdataanalysisMail_send_logs[".nPrinterPageScale"] = 100;

$tdataanalysisMail_send_logs[".nPrinterSplitRecords"] = 40;

$tdataanalysisMail_send_logs[".nPrinterPDFSplitRecords"] = 40;



$tdataanalysisMail_send_logs[".geocodingEnabled"] = false;





$tdataanalysisMail_send_logs[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataanalysisMail_send_logs[".pageSize"] = 20;

$tdataanalysisMail_send_logs[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `analysisMail_send_logs`.`send_log_id` DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataanalysisMail_send_logs[".strOrderBy"] = $tstrOrderBy;

$tdataanalysisMail_send_logs[".orderindexes"] = array();
$tdataanalysisMail_send_logs[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "`analysisMail_send_logs`.`send_log_id`");

$tdataanalysisMail_send_logs[".sqlHead"] = "SELECT `analysisMail_send_logs`.`send_log_id`,  `analysisMail_send_logs`.`send_mail_id`,  `analysisMail_send_logs`.`send_TO`,  `analysisMail_send_logs`.`send_CC`,  `analysisMail_send_logs`.`send_at`,  `analysisMail_send_logs`.`send_result`,  `analysisMail_send_logs`.`ecc_id`,  `analysisMail_send_logs`.`updated_by`,  `analysisMail_send_logs`.`updated_at`,  `analysisMail_send_logs`.`created_by`,  `analysisMail_send_logs`.`created_at`,  `analysisMail_send_emails`.`subject`";
$tdataanalysisMail_send_logs[".sqlFrom"] = "FROM `analysisMail_send_logs`  LEFT OUTER JOIN `analysisMail_send_emails` ON `analysisMail_send_logs`.`send_mail_id` = `analysisMail_send_emails`.`send_mail_id`";
$tdataanalysisMail_send_logs[".sqlWhereExpr"] = "";
$tdataanalysisMail_send_logs[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataanalysisMail_send_logs[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataanalysisMail_send_logs[".arrGroupsPerPage"] = $arrGPP;

$tdataanalysisMail_send_logs[".highlightSearchResults"] = true;

$tableKeysanalysisMail_send_logs = array();
$tableKeysanalysisMail_send_logs[] = "send_log_id";
$tdataanalysisMail_send_logs[".Keys"] = $tableKeysanalysisMail_send_logs;

$tdataanalysisMail_send_logs[".listFields"] = array();
$tdataanalysisMail_send_logs[".listFields"][] = "send_log_id";
$tdataanalysisMail_send_logs[".listFields"][] = "send_mail_id";
$tdataanalysisMail_send_logs[".listFields"][] = "subject";
$tdataanalysisMail_send_logs[".listFields"][] = "send_TO";
$tdataanalysisMail_send_logs[".listFields"][] = "send_CC";
$tdataanalysisMail_send_logs[".listFields"][] = "send_at";
$tdataanalysisMail_send_logs[".listFields"][] = "send_result";
$tdataanalysisMail_send_logs[".listFields"][] = "ecc_id";
$tdataanalysisMail_send_logs[".listFields"][] = "updated_by";
$tdataanalysisMail_send_logs[".listFields"][] = "updated_at";
$tdataanalysisMail_send_logs[".listFields"][] = "created_by";
$tdataanalysisMail_send_logs[".listFields"][] = "created_at";

$tdataanalysisMail_send_logs[".hideMobileList"] = array();


$tdataanalysisMail_send_logs[".viewFields"] = array();

$tdataanalysisMail_send_logs[".addFields"] = array();

$tdataanalysisMail_send_logs[".masterListFields"] = array();
$tdataanalysisMail_send_logs[".masterListFields"][] = "send_log_id";
$tdataanalysisMail_send_logs[".masterListFields"][] = "send_mail_id";
$tdataanalysisMail_send_logs[".masterListFields"][] = "subject";
$tdataanalysisMail_send_logs[".masterListFields"][] = "send_TO";
$tdataanalysisMail_send_logs[".masterListFields"][] = "send_CC";
$tdataanalysisMail_send_logs[".masterListFields"][] = "send_at";
$tdataanalysisMail_send_logs[".masterListFields"][] = "send_result";
$tdataanalysisMail_send_logs[".masterListFields"][] = "ecc_id";
$tdataanalysisMail_send_logs[".masterListFields"][] = "updated_by";
$tdataanalysisMail_send_logs[".masterListFields"][] = "updated_at";
$tdataanalysisMail_send_logs[".masterListFields"][] = "created_by";
$tdataanalysisMail_send_logs[".masterListFields"][] = "created_at";

$tdataanalysisMail_send_logs[".inlineAddFields"] = array();

$tdataanalysisMail_send_logs[".editFields"] = array();

$tdataanalysisMail_send_logs[".inlineEditFields"] = array();

$tdataanalysisMail_send_logs[".updateSelectedFields"] = array();


$tdataanalysisMail_send_logs[".exportFields"] = array();

$tdataanalysisMail_send_logs[".importFields"] = array();

$tdataanalysisMail_send_logs[".printFields"] = array();

//	send_log_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "send_log_id";
	$fdata["GoodName"] = "send_log_id";
	$fdata["ownerTable"] = "analysisMail_send_logs";
	$fdata["Label"] = GetFieldLabel("analysisMail_send_logs","send_log_id");
	$fdata["FieldType"] = 20;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "send_log_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`analysisMail_send_logs`.`send_log_id`";

	
	
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




	$tdataanalysisMail_send_logs["send_log_id"] = $fdata;
//	send_mail_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "send_mail_id";
	$fdata["GoodName"] = "send_mail_id";
	$fdata["ownerTable"] = "analysisMail_send_logs";
	$fdata["Label"] = GetFieldLabel("analysisMail_send_logs","send_mail_id");
	$fdata["FieldType"] = 20;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "send_mail_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`analysisMail_send_logs`.`send_mail_id`";

	
	
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




	$tdataanalysisMail_send_logs["send_mail_id"] = $fdata;
//	send_TO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "send_TO";
	$fdata["GoodName"] = "send_TO";
	$fdata["ownerTable"] = "analysisMail_send_logs";
	$fdata["Label"] = GetFieldLabel("analysisMail_send_logs","send_TO");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "send_TO";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`analysisMail_send_logs`.`send_TO`";

	
	
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




	$tdataanalysisMail_send_logs["send_TO"] = $fdata;
//	send_CC
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "send_CC";
	$fdata["GoodName"] = "send_CC";
	$fdata["ownerTable"] = "analysisMail_send_logs";
	$fdata["Label"] = GetFieldLabel("analysisMail_send_logs","send_CC");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "send_CC";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`analysisMail_send_logs`.`send_CC`";

	
	
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




	$tdataanalysisMail_send_logs["send_CC"] = $fdata;
//	send_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "send_at";
	$fdata["GoodName"] = "send_at";
	$fdata["ownerTable"] = "analysisMail_send_logs";
	$fdata["Label"] = GetFieldLabel("analysisMail_send_logs","send_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "send_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`analysisMail_send_logs`.`send_at`";

	
	
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




	$tdataanalysisMail_send_logs["send_at"] = $fdata;
//	send_result
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "send_result";
	$fdata["GoodName"] = "send_result";
	$fdata["ownerTable"] = "analysisMail_send_logs";
	$fdata["Label"] = GetFieldLabel("analysisMail_send_logs","send_result");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "send_result";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`analysisMail_send_logs`.`send_result`";

	
	
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




	$tdataanalysisMail_send_logs["send_result"] = $fdata;
//	ecc_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "ecc_id";
	$fdata["GoodName"] = "ecc_id";
	$fdata["ownerTable"] = "analysisMail_send_logs";
	$fdata["Label"] = GetFieldLabel("analysisMail_send_logs","ecc_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "ecc_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`analysisMail_send_logs`.`ecc_id`";

	
	
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




	$tdataanalysisMail_send_logs["ecc_id"] = $fdata;
//	updated_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "updated_by";
	$fdata["GoodName"] = "updated_by";
	$fdata["ownerTable"] = "analysisMail_send_logs";
	$fdata["Label"] = GetFieldLabel("analysisMail_send_logs","updated_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "updated_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`analysisMail_send_logs`.`updated_by`";

	
	
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




	$tdataanalysisMail_send_logs["updated_by"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "analysisMail_send_logs";
	$fdata["Label"] = GetFieldLabel("analysisMail_send_logs","updated_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "updated_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`analysisMail_send_logs`.`updated_at`";

	
	
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




	$tdataanalysisMail_send_logs["updated_at"] = $fdata;
//	created_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "created_by";
	$fdata["GoodName"] = "created_by";
	$fdata["ownerTable"] = "analysisMail_send_logs";
	$fdata["Label"] = GetFieldLabel("analysisMail_send_logs","created_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "created_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`analysisMail_send_logs`.`created_by`";

	
	
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




	$tdataanalysisMail_send_logs["created_by"] = $fdata;
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "analysisMail_send_logs";
	$fdata["Label"] = GetFieldLabel("analysisMail_send_logs","created_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "created_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`analysisMail_send_logs`.`created_at`";

	
	
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




	$tdataanalysisMail_send_logs["created_at"] = $fdata;
//	subject
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "subject";
	$fdata["GoodName"] = "subject";
	$fdata["ownerTable"] = "analysisMail_send_emails";
	$fdata["Label"] = GetFieldLabel("analysisMail_send_logs","subject");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "subject";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`analysisMail_send_emails`.`subject`";

	
	
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




	$tdataanalysisMail_send_logs["subject"] = $fdata;


$tables_data["analysisMail_send_logs"]=&$tdataanalysisMail_send_logs;
$field_labels["analysisMail_send_logs"] = &$fieldLabelsanalysisMail_send_logs;
$fieldToolTips["analysisMail_send_logs"] = &$fieldToolTipsanalysisMail_send_logs;
$placeHolders["analysisMail_send_logs"] = &$placeHoldersanalysisMail_send_logs;
$page_titles["analysisMail_send_logs"] = &$pageTitlesanalysisMail_send_logs;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["analysisMail_send_logs"] = array();
//	analysisMail_send_logs_bcc
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="analysisMail_send_logs_bcc";
		$detailsParam["dOriginalTable"] = "analysisMail_send_logs_bcc";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "analysisMail_send_logs_bcc";
	$detailsParam["dCaptionTable"] = GetTableCaption("analysisMail_send_logs_bcc");
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
		
	$detailsTablesData["analysisMail_send_logs"][$dIndex] = $detailsParam;

	
		$detailsTablesData["analysisMail_send_logs"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["analysisMail_send_logs"][$dIndex]["masterKeys"][]="send_log_id";

				$detailsTablesData["analysisMail_send_logs"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["analysisMail_send_logs"][$dIndex]["detailKeys"][]="send_log_id";

// tables which are master tables for current table (detail)
$masterTablesData["analysisMail_send_logs"] = array();


	
				$strOriginalDetailsTable="analysisMail_send_emails";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="analysisMail_send_emails";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "analysisMail_send_emails";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispMasterInfo"] = array();
				$masterParams["dispMasterInfo"][PAGE_LIST] = true;
			
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 1;
	$masterParams["proceedLink"]= 1;

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["analysisMail_send_logs"][0] = $masterParams;
				$masterTablesData["analysisMail_send_logs"][0]["masterKeys"] = array();
	$masterTablesData["analysisMail_send_logs"][0]["masterKeys"][]="send_mail_id";
				$masterTablesData["analysisMail_send_logs"][0]["detailKeys"] = array();
	$masterTablesData["analysisMail_send_logs"][0]["detailKeys"][]="send_mail_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_analysisMail_send_logs()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`analysisMail_send_logs`.`send_log_id`,  `analysisMail_send_logs`.`send_mail_id`,  `analysisMail_send_logs`.`send_TO`,  `analysisMail_send_logs`.`send_CC`,  `analysisMail_send_logs`.`send_at`,  `analysisMail_send_logs`.`send_result`,  `analysisMail_send_logs`.`ecc_id`,  `analysisMail_send_logs`.`updated_by`,  `analysisMail_send_logs`.`updated_at`,  `analysisMail_send_logs`.`created_by`,  `analysisMail_send_logs`.`created_at`,  `analysisMail_send_emails`.`subject`";
$proto0["m_strFrom"] = "FROM `analysisMail_send_logs`  LEFT OUTER JOIN `analysisMail_send_emails` ON `analysisMail_send_logs`.`send_mail_id` = `analysisMail_send_emails`.`send_mail_id`";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY `analysisMail_send_logs`.`send_log_id` DESC";
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
	"m_strName" => "send_log_id",
	"m_strTable" => "analysisMail_send_logs",
	"m_srcTableName" => "analysisMail_send_logs"
));

$proto6["m_sql"] = "`analysisMail_send_logs`.`send_log_id`";
$proto6["m_srcTableName"] = "analysisMail_send_logs";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "send_mail_id",
	"m_strTable" => "analysisMail_send_logs",
	"m_srcTableName" => "analysisMail_send_logs"
));

$proto8["m_sql"] = "`analysisMail_send_logs`.`send_mail_id`";
$proto8["m_srcTableName"] = "analysisMail_send_logs";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "send_TO",
	"m_strTable" => "analysisMail_send_logs",
	"m_srcTableName" => "analysisMail_send_logs"
));

$proto10["m_sql"] = "`analysisMail_send_logs`.`send_TO`";
$proto10["m_srcTableName"] = "analysisMail_send_logs";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "send_CC",
	"m_strTable" => "analysisMail_send_logs",
	"m_srcTableName" => "analysisMail_send_logs"
));

$proto12["m_sql"] = "`analysisMail_send_logs`.`send_CC`";
$proto12["m_srcTableName"] = "analysisMail_send_logs";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "send_at",
	"m_strTable" => "analysisMail_send_logs",
	"m_srcTableName" => "analysisMail_send_logs"
));

$proto14["m_sql"] = "`analysisMail_send_logs`.`send_at`";
$proto14["m_srcTableName"] = "analysisMail_send_logs";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "send_result",
	"m_strTable" => "analysisMail_send_logs",
	"m_srcTableName" => "analysisMail_send_logs"
));

$proto16["m_sql"] = "`analysisMail_send_logs`.`send_result`";
$proto16["m_srcTableName"] = "analysisMail_send_logs";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "ecc_id",
	"m_strTable" => "analysisMail_send_logs",
	"m_srcTableName" => "analysisMail_send_logs"
));

$proto18["m_sql"] = "`analysisMail_send_logs`.`ecc_id`";
$proto18["m_srcTableName"] = "analysisMail_send_logs";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by",
	"m_strTable" => "analysisMail_send_logs",
	"m_srcTableName" => "analysisMail_send_logs"
));

$proto20["m_sql"] = "`analysisMail_send_logs`.`updated_by`";
$proto20["m_srcTableName"] = "analysisMail_send_logs";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "analysisMail_send_logs",
	"m_srcTableName" => "analysisMail_send_logs"
));

$proto22["m_sql"] = "`analysisMail_send_logs`.`updated_at`";
$proto22["m_srcTableName"] = "analysisMail_send_logs";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "created_by",
	"m_strTable" => "analysisMail_send_logs",
	"m_srcTableName" => "analysisMail_send_logs"
));

$proto24["m_sql"] = "`analysisMail_send_logs`.`created_by`";
$proto24["m_srcTableName"] = "analysisMail_send_logs";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "analysisMail_send_logs",
	"m_srcTableName" => "analysisMail_send_logs"
));

$proto26["m_sql"] = "`analysisMail_send_logs`.`created_at`";
$proto26["m_srcTableName"] = "analysisMail_send_logs";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "subject",
	"m_strTable" => "analysisMail_send_emails",
	"m_srcTableName" => "analysisMail_send_logs"
));

$proto28["m_sql"] = "`analysisMail_send_emails`.`subject`";
$proto28["m_srcTableName"] = "analysisMail_send_logs";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "analysisMail_send_logs";
$proto31["m_srcTableName"] = "analysisMail_send_logs";
$proto31["m_columns"] = array();
$proto31["m_columns"][] = "send_log_id";
$proto31["m_columns"][] = "send_mail_id";
$proto31["m_columns"][] = "send_TO";
$proto31["m_columns"][] = "send_CC";
$proto31["m_columns"][] = "send_at";
$proto31["m_columns"][] = "send_result";
$proto31["m_columns"][] = "ecc_id";
$proto31["m_columns"][] = "updated_by";
$proto31["m_columns"][] = "updated_at";
$proto31["m_columns"][] = "created_by";
$proto31["m_columns"][] = "created_at";
$proto31["m_columns"][] = "send_by";
$proto31["m_columns"][] = "is_opened";
$proto31["m_columns"][] = "result_msg";
$proto31["m_columns"][] = "is_test";
$proto31["m_columns"][] = "mailgun_webhook_last_status";
$proto31["m_columns"][] = "mailgun_message_id";
$obj = new SQLTable($proto31);

$proto30["m_table"] = $obj;
$proto30["m_sql"] = "`analysisMail_send_logs`";
$proto30["m_alias"] = "";
$proto30["m_srcTableName"] = "analysisMail_send_logs";
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
												$proto34=array();
$proto34["m_link"] = "SQLL_LEFTJOIN";
			$proto35=array();
$proto35["m_strName"] = "analysisMail_send_emails";
$proto35["m_srcTableName"] = "analysisMail_send_logs";
$proto35["m_columns"] = array();
$proto35["m_columns"][] = "send_mail_id";
$proto35["m_columns"][] = "status";
$proto35["m_columns"][] = "send_at";
$proto35["m_columns"][] = "subject";
$proto35["m_columns"][] = "content_detail";
$proto35["m_columns"][] = "shomei";
$proto35["m_columns"][] = "alt_text";
$proto35["m_columns"][] = "send_group_id";
$proto35["m_columns"][] = "is_send_check";
$proto35["m_columns"][] = "updated_by";
$proto35["m_columns"][] = "updated_at";
$proto35["m_columns"][] = "created_by";
$proto35["m_columns"][] = "created_at";
$proto35["m_columns"][] = "auto_templete_name";
$proto35["m_columns"][] = "success_count";
$proto35["m_columns"][] = "error_count";
$proto35["m_columns"][] = "archive_at";
$proto35["m_columns"][] = "archive_by";
$proto35["m_columns"][] = "send_by";
$proto35["m_columns"][] = "open_count";
$obj = new SQLTable($proto35);

$proto34["m_table"] = $obj;
$proto34["m_sql"] = "LEFT OUTER JOIN `analysisMail_send_emails` ON `analysisMail_send_logs`.`send_mail_id` = `analysisMail_send_emails`.`send_mail_id`";
$proto34["m_alias"] = "";
$proto34["m_srcTableName"] = "analysisMail_send_logs";
$proto36=array();
$proto36["m_sql"] = "`analysisMail_send_logs`.`send_mail_id` = `analysisMail_send_emails`.`send_mail_id`";
$proto36["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "send_mail_id",
	"m_strTable" => "analysisMail_send_logs",
	"m_srcTableName" => "analysisMail_send_logs"
));

$proto36["m_column"]=$obj;
$proto36["m_contained"] = array();
$proto36["m_strCase"] = "= `analysisMail_send_emails`.`send_mail_id`";
$proto36["m_havingmode"] = false;
$proto36["m_inBrackets"] = false;
$proto36["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto36);

$proto34["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto34);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto38=array();
						$obj = new SQLField(array(
	"m_strName" => "send_log_id",
	"m_strTable" => "analysisMail_send_logs",
	"m_srcTableName" => "analysisMail_send_logs"
));

$proto38["m_column"]=$obj;
$proto38["m_bAsc"] = 0;
$proto38["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto38);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="analysisMail_send_logs";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_analysisMail_send_logs = createSqlQuery_analysisMail_send_logs();


	
		;

												

$tdataanalysisMail_send_logs[".sqlquery"] = $queryData_analysisMail_send_logs;

$tableEvents["analysisMail_send_logs"] = new eventsBase;
$tdataanalysisMail_send_logs[".hasEvents"] = false;

?>