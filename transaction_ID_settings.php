<?php
require_once(getabspath("classes/cipherer.php"));




$tdatatransaction_ID = array();
	$tdatatransaction_ID[".truncateText"] = true;
	$tdatatransaction_ID[".NumberOfChars"] = 80;
	$tdatatransaction_ID[".ShortName"] = "transaction_ID";
	$tdatatransaction_ID[".OwnerID"] = "";
	$tdatatransaction_ID[".OriginalTable"] = "shouhin";

//	field labels
$fieldLabelstransaction_ID = array();
$fieldToolTipstransaction_ID = array();
$pageTitlestransaction_ID = array();
$placeHolderstransaction_ID = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelstransaction_ID["Japanese"] = array();
	$fieldToolTipstransaction_ID["Japanese"] = array();
	$placeHolderstransaction_ID["Japanese"] = array();
	$pageTitlestransaction_ID["Japanese"] = array();
	$fieldLabelstransaction_ID["Japanese"]["product_id"] = "SEQ";
	$fieldToolTipstransaction_ID["Japanese"]["product_id"] = "";
	$placeHolderstransaction_ID["Japanese"]["product_id"] = "";
	$fieldLabelstransaction_ID["Japanese"]["ecc_id"] = "顧客SEQ";
	$fieldToolTipstransaction_ID["Japanese"]["ecc_id"] = "";
	$placeHolderstransaction_ID["Japanese"]["ecc_id"] = "";
	$fieldLabelstransaction_ID["Japanese"]["Eoc_takuhai_id"] = "宅配取引Id";
	$fieldToolTipstransaction_ID["Japanese"]["Eoc_takuhai_id"] = "";
	$placeHolderstransaction_ID["Japanese"]["Eoc_takuhai_id"] = "";
	$fieldLabelstransaction_ID["Japanese"]["Eoc_unfinished_id"] = "店頭取引Id";
	$fieldToolTipstransaction_ID["Japanese"]["Eoc_unfinished_id"] = "";
	$placeHolderstransaction_ID["Japanese"]["Eoc_unfinished_id"] = "";
	$fieldLabelstransaction_ID["Japanese"]["Eoc_chigins_unfinished_id"] = "店頭詳細Id";
	$fieldToolTipstransaction_ID["Japanese"]["Eoc_chigins_unfinished_id"] = "";
	$placeHolderstransaction_ID["Japanese"]["Eoc_chigins_unfinished_id"] = "";
	$fieldLabelstransaction_ID["Japanese"]["updated_by"] = "最終更新者";
	$fieldToolTipstransaction_ID["Japanese"]["updated_by"] = "";
	$placeHolderstransaction_ID["Japanese"]["updated_by"] = "";
	$fieldLabelstransaction_ID["Japanese"]["updated_at"] = "最終更新日";
	$fieldToolTipstransaction_ID["Japanese"]["updated_at"] = "";
	$placeHolderstransaction_ID["Japanese"]["updated_at"] = "";
	$fieldLabelstransaction_ID["Japanese"]["many_product_group_id"] = "[大量査定]風袋ID";
	$fieldToolTipstransaction_ID["Japanese"]["many_product_group_id"] = "";
	$placeHolderstransaction_ID["Japanese"]["many_product_group_id"] = "";
	if (count($fieldToolTipstransaction_ID["Japanese"]))
		$tdatatransaction_ID[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelstransaction_ID[""] = array();
	$fieldToolTipstransaction_ID[""] = array();
	$placeHolderstransaction_ID[""] = array();
	$pageTitlestransaction_ID[""] = array();
	$fieldLabelstransaction_ID[""]["Eoc_takuhai_id"] = "Eoc Takuhai Id";
	$fieldToolTipstransaction_ID[""]["Eoc_takuhai_id"] = "";
	$placeHolderstransaction_ID[""]["Eoc_takuhai_id"] = "";
	$fieldLabelstransaction_ID[""]["Eoc_unfinished_id"] = "Eoc Unfinished Id";
	$fieldToolTipstransaction_ID[""]["Eoc_unfinished_id"] = "";
	$placeHolderstransaction_ID[""]["Eoc_unfinished_id"] = "";
	$fieldLabelstransaction_ID[""]["Eoc_chigins_unfinished_id"] = "Eoc Chigins Unfinished Id";
	$fieldToolTipstransaction_ID[""]["Eoc_chigins_unfinished_id"] = "";
	$placeHolderstransaction_ID[""]["Eoc_chigins_unfinished_id"] = "";
	$fieldLabelstransaction_ID[""]["updated_by"] = "Updated By";
	$fieldToolTipstransaction_ID[""]["updated_by"] = "";
	$placeHolderstransaction_ID[""]["updated_by"] = "";
	$fieldLabelstransaction_ID[""]["updated_at"] = "Updated At";
	$fieldToolTipstransaction_ID[""]["updated_at"] = "";
	$placeHolderstransaction_ID[""]["updated_at"] = "";
	$fieldLabelstransaction_ID[""]["many_product_group_id"] = "Many Product Group Id";
	$fieldToolTipstransaction_ID[""]["many_product_group_id"] = "";
	$placeHolderstransaction_ID[""]["many_product_group_id"] = "";
	if (count($fieldToolTipstransaction_ID[""]))
		$tdatatransaction_ID[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstransaction_ID["English"] = array();
	$fieldToolTipstransaction_ID["English"] = array();
	$placeHolderstransaction_ID["English"] = array();
	$pageTitlestransaction_ID["English"] = array();
	$fieldLabelstransaction_ID["English"]["Eoc_takuhai_id"] = "Eoc Takuhai Id";
	$fieldToolTipstransaction_ID["English"]["Eoc_takuhai_id"] = "";
	$placeHolderstransaction_ID["English"]["Eoc_takuhai_id"] = "";
	$fieldLabelstransaction_ID["English"]["Eoc_unfinished_id"] = "Eoc Unfinished Id";
	$fieldToolTipstransaction_ID["English"]["Eoc_unfinished_id"] = "";
	$placeHolderstransaction_ID["English"]["Eoc_unfinished_id"] = "";
	$fieldLabelstransaction_ID["English"]["Eoc_chigins_unfinished_id"] = "Eoc Chigins Unfinished Id";
	$fieldToolTipstransaction_ID["English"]["Eoc_chigins_unfinished_id"] = "";
	$placeHolderstransaction_ID["English"]["Eoc_chigins_unfinished_id"] = "";
	$fieldLabelstransaction_ID["English"]["updated_by"] = "Updated By";
	$fieldToolTipstransaction_ID["English"]["updated_by"] = "";
	$placeHolderstransaction_ID["English"]["updated_by"] = "";
	$fieldLabelstransaction_ID["English"]["updated_at"] = "Updated At";
	$fieldToolTipstransaction_ID["English"]["updated_at"] = "";
	$placeHolderstransaction_ID["English"]["updated_at"] = "";
	$fieldLabelstransaction_ID["English"]["many_product_group_id"] = "Many Product Group Id";
	$fieldToolTipstransaction_ID["English"]["many_product_group_id"] = "";
	$placeHolderstransaction_ID["English"]["many_product_group_id"] = "";
	if (count($fieldToolTipstransaction_ID["English"]))
		$tdatatransaction_ID[".isUseToolTips"] = true;
}


	$tdatatransaction_ID[".NCSearch"] = true;



$tdatatransaction_ID[".shortTableName"] = "transaction_ID";
$tdatatransaction_ID[".nSecOptions"] = 0;
$tdatatransaction_ID[".recsPerRowPrint"] = 1;
$tdatatransaction_ID[".mainTableOwnerID"] = "";
$tdatatransaction_ID[".moveNext"] = 1;
$tdatatransaction_ID[".entityType"] = 1;

$tdatatransaction_ID[".strOriginalTableName"] = "shouhin";

	



$tdatatransaction_ID[".showAddInPopup"] = false;

$tdatatransaction_ID[".showEditInPopup"] = false;

$tdatatransaction_ID[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatatransaction_ID[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatatransaction_ID[".fieldsForRegister"] = array();

$tdatatransaction_ID[".listAjax"] = false;

	$tdatatransaction_ID[".audit"] = true;

	$tdatatransaction_ID[".locking"] = false;



$tdatatransaction_ID[".list"] = true;

$tdatatransaction_ID[".inlineEdit"] = true;


$tdatatransaction_ID[".reorderRecordsByHeader"] = true;
$tdatatransaction_ID[".createSortByDropdown"] = true;
$tdatatransaction_ID[".strSortControlSettingsJSON"] = "";




$tdatatransaction_ID[".import"] = true;

$tdatatransaction_ID[".exportTo"] = true;



$tdatatransaction_ID[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatatransaction_ID[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatatransaction_ID[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatatransaction_ID[".searchSaving"] = false;
//

$tdatatransaction_ID[".showSearchPanel"] = true;
		$tdatatransaction_ID[".flexibleSearch"] = true;

$tdatatransaction_ID[".isUseAjaxSuggest"] = true;

$tdatatransaction_ID[".rowHighlite"] = true;



																																																																																																																			
					
					
																																																																																																													

$tdatatransaction_ID[".ajaxCodeSnippetAdded"] = false;

$tdatatransaction_ID[".buttonsAdded"] = true;

$tdatatransaction_ID[".addPageEvents"] = true;

// use timepicker for search panel
$tdatatransaction_ID[".isUseTimeForSearch"] = false;



$tdatatransaction_ID[".badgeColor"] = "E07878";


$tdatatransaction_ID[".allSearchFields"] = array();
$tdatatransaction_ID[".filterFields"] = array();
$tdatatransaction_ID[".requiredSearchFields"] = array();

$tdatatransaction_ID[".allSearchFields"][] = "product_id";
	$tdatatransaction_ID[".allSearchFields"][] = "ecc_id";
	$tdatatransaction_ID[".allSearchFields"][] = "Eoc_takuhai_id";
	$tdatatransaction_ID[".allSearchFields"][] = "Eoc_unfinished_id";
	$tdatatransaction_ID[".allSearchFields"][] = "Eoc_chigins_unfinished_id";
	$tdatatransaction_ID[".allSearchFields"][] = "many_product_group_id";
	$tdatatransaction_ID[".allSearchFields"][] = "updated_by";
	$tdatatransaction_ID[".allSearchFields"][] = "updated_at";
	

$tdatatransaction_ID[".googleLikeFields"] = array();
$tdatatransaction_ID[".googleLikeFields"][] = "product_id";
$tdatatransaction_ID[".googleLikeFields"][] = "ecc_id";
$tdatatransaction_ID[".googleLikeFields"][] = "updated_by";
$tdatatransaction_ID[".googleLikeFields"][] = "updated_at";
$tdatatransaction_ID[".googleLikeFields"][] = "many_product_group_id";

$tdatatransaction_ID[".panelSearchFields"] = array();
$tdatatransaction_ID[".searchPanelOptions"] = array();
$tdatatransaction_ID[".panelSearchFields"][] = "product_id";
	$tdatatransaction_ID[".panelSearchFields"][] = "ecc_id";
	$tdatatransaction_ID[".panelSearchFields"][] = "Eoc_takuhai_id";
	$tdatatransaction_ID[".panelSearchFields"][] = "Eoc_unfinished_id";
	$tdatatransaction_ID[".panelSearchFields"][] = "updated_at";
	
$tdatatransaction_ID[".advSearchFields"] = array();
$tdatatransaction_ID[".advSearchFields"][] = "product_id";
$tdatatransaction_ID[".advSearchFields"][] = "ecc_id";
$tdatatransaction_ID[".advSearchFields"][] = "Eoc_takuhai_id";
$tdatatransaction_ID[".advSearchFields"][] = "Eoc_unfinished_id";
$tdatatransaction_ID[".advSearchFields"][] = "Eoc_chigins_unfinished_id";
$tdatatransaction_ID[".advSearchFields"][] = "many_product_group_id";
$tdatatransaction_ID[".advSearchFields"][] = "updated_by";
$tdatatransaction_ID[".advSearchFields"][] = "updated_at";

$tdatatransaction_ID[".tableType"] = "list";

$tdatatransaction_ID[".printerPageOrientation"] = 0;
$tdatatransaction_ID[".nPrinterPageScale"] = 100;

$tdatatransaction_ID[".nPrinterSplitRecords"] = 40;

$tdatatransaction_ID[".nPrinterPDFSplitRecords"] = 40;



$tdatatransaction_ID[".geocodingEnabled"] = false;





$tdatatransaction_ID[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatatransaction_ID[".pageSize"] = 20;

$tdatatransaction_ID[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `shouhin`.`product_id` DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatransaction_ID[".strOrderBy"] = $tstrOrderBy;

$tdatatransaction_ID[".orderindexes"] = array();
$tdatatransaction_ID[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "`shouhin`.`product_id`");

$tdatatransaction_ID[".sqlHead"] = "SELECT `shouhin`.`product_id`,  `shouhin`.`Eoc_takuhai_id`,  `shouhin`.`Eoc_unfinished_id`,  `shouhin`.`Eoc_chigins_unfinished_id`,  `Eoc`.`ecc_id`,  `shouhin`.`updated_by`,  `shouhin`.`updated_at`,  `shouhin`.`many_product_group_id`";
$tdatatransaction_ID[".sqlFrom"] = "FROM `shouhin`  LEFT OUTER JOIN `Eoc` ON `shouhin`.`ecc_id` = `Eoc`.`ecc_id`";
$tdatatransaction_ID[".sqlWhereExpr"] = "";
$tdatatransaction_ID[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatransaction_ID[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatransaction_ID[".arrGroupsPerPage"] = $arrGPP;

$tdatatransaction_ID[".highlightSearchResults"] = true;

$tableKeystransaction_ID = array();
$tableKeystransaction_ID[] = "product_id";
$tdatatransaction_ID[".Keys"] = $tableKeystransaction_ID;

$tdatatransaction_ID[".listFields"] = array();
$tdatatransaction_ID[".listFields"][] = "product_id";
$tdatatransaction_ID[".listFields"][] = "ecc_id";
$tdatatransaction_ID[".listFields"][] = "Eoc_takuhai_id";
$tdatatransaction_ID[".listFields"][] = "Eoc_unfinished_id";
$tdatatransaction_ID[".listFields"][] = "Eoc_chigins_unfinished_id";
$tdatatransaction_ID[".listFields"][] = "many_product_group_id";
$tdatatransaction_ID[".listFields"][] = "updated_by";
$tdatatransaction_ID[".listFields"][] = "updated_at";

$tdatatransaction_ID[".hideMobileList"] = array();


$tdatatransaction_ID[".viewFields"] = array();

$tdatatransaction_ID[".addFields"] = array();

$tdatatransaction_ID[".masterListFields"] = array();
$tdatatransaction_ID[".masterListFields"][] = "product_id";
$tdatatransaction_ID[".masterListFields"][] = "ecc_id";
$tdatatransaction_ID[".masterListFields"][] = "Eoc_takuhai_id";
$tdatatransaction_ID[".masterListFields"][] = "Eoc_unfinished_id";
$tdatatransaction_ID[".masterListFields"][] = "Eoc_chigins_unfinished_id";
$tdatatransaction_ID[".masterListFields"][] = "many_product_group_id";
$tdatatransaction_ID[".masterListFields"][] = "updated_by";
$tdatatransaction_ID[".masterListFields"][] = "updated_at";

$tdatatransaction_ID[".inlineAddFields"] = array();

$tdatatransaction_ID[".editFields"] = array();

$tdatatransaction_ID[".inlineEditFields"] = array();
$tdatatransaction_ID[".inlineEditFields"][] = "ecc_id";
$tdatatransaction_ID[".inlineEditFields"][] = "Eoc_takuhai_id";
$tdatatransaction_ID[".inlineEditFields"][] = "Eoc_unfinished_id";
$tdatatransaction_ID[".inlineEditFields"][] = "Eoc_chigins_unfinished_id";
$tdatatransaction_ID[".inlineEditFields"][] = "many_product_group_id";

$tdatatransaction_ID[".updateSelectedFields"] = array();


$tdatatransaction_ID[".exportFields"] = array();
$tdatatransaction_ID[".exportFields"][] = "product_id";
$tdatatransaction_ID[".exportFields"][] = "ecc_id";
$tdatatransaction_ID[".exportFields"][] = "Eoc_takuhai_id";
$tdatatransaction_ID[".exportFields"][] = "Eoc_unfinished_id";
$tdatatransaction_ID[".exportFields"][] = "Eoc_chigins_unfinished_id";
$tdatatransaction_ID[".exportFields"][] = "many_product_group_id";
$tdatatransaction_ID[".exportFields"][] = "updated_by";
$tdatatransaction_ID[".exportFields"][] = "updated_at";

$tdatatransaction_ID[".importFields"] = array();
$tdatatransaction_ID[".importFields"][] = "product_id";
$tdatatransaction_ID[".importFields"][] = "Eoc_takuhai_id";
$tdatatransaction_ID[".importFields"][] = "Eoc_unfinished_id";
$tdatatransaction_ID[".importFields"][] = "Eoc_chigins_unfinished_id";
$tdatatransaction_ID[".importFields"][] = "ecc_id";
$tdatatransaction_ID[".importFields"][] = "many_product_group_id";

$tdatatransaction_ID[".printFields"] = array();

//	product_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "product_id";
	$fdata["GoodName"] = "product_id";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("transaction_ID","product_id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "product_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`product_id`";

	
	
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

	$edata = array("EditFormat" => "Readonly");

	
	



		$edata["IsRequired"] = true;

	
	
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatatransaction_ID["product_id"] = $fdata;
//	Eoc_takuhai_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Eoc_takuhai_id";
	$fdata["GoodName"] = "Eoc_takuhai_id";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("transaction_ID","Eoc_takuhai_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Eoc_takuhai_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`Eoc_takuhai_id`";

	
	
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




	$tdatatransaction_ID["Eoc_takuhai_id"] = $fdata;
//	Eoc_unfinished_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Eoc_unfinished_id";
	$fdata["GoodName"] = "Eoc_unfinished_id";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("transaction_ID","Eoc_unfinished_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Eoc_unfinished_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`Eoc_unfinished_id`";

	
	
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




	$tdatatransaction_ID["Eoc_unfinished_id"] = $fdata;
//	Eoc_chigins_unfinished_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Eoc_chigins_unfinished_id";
	$fdata["GoodName"] = "Eoc_chigins_unfinished_id";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("transaction_ID","Eoc_chigins_unfinished_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Eoc_chigins_unfinished_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`Eoc_chigins_unfinished_id`";

	
	
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




	$tdatatransaction_ID["Eoc_chigins_unfinished_id"] = $fdata;
//	ecc_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "ecc_id";
	$fdata["GoodName"] = "ecc_id";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("transaction_ID","ecc_id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ecc_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc`.`ecc_id`";

	
	
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
			$edata["EditParams"].= " maxlength=20";

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




	$tdatatransaction_ID["ecc_id"] = $fdata;
//	updated_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "updated_by";
	$fdata["GoodName"] = "updated_by";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("transaction_ID","updated_by");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "updated_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`updated_by`";

	
	
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
	$edata["LinkFieldType"] = 3;
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




	$tdatatransaction_ID["updated_by"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("transaction_ID","updated_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "updated_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`updated_at`";

	
	
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




	$tdatatransaction_ID["updated_at"] = $fdata;
//	many_product_group_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "many_product_group_id";
	$fdata["GoodName"] = "many_product_group_id";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("transaction_ID","many_product_group_id");
	$fdata["FieldType"] = 20;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "many_product_group_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`many_product_group_id`";

	
	
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




	$tdatatransaction_ID["many_product_group_id"] = $fdata;


$tables_data["transaction_ID"]=&$tdatatransaction_ID;
$field_labels["transaction_ID"] = &$fieldLabelstransaction_ID;
$fieldToolTips["transaction_ID"] = &$fieldToolTipstransaction_ID;
$placeHolders["transaction_ID"] = &$placeHolderstransaction_ID;
$page_titles["transaction_ID"] = &$pageTitlestransaction_ID;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["transaction_ID"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["transaction_ID"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_transaction_ID()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`shouhin`.`product_id`,  `shouhin`.`Eoc_takuhai_id`,  `shouhin`.`Eoc_unfinished_id`,  `shouhin`.`Eoc_chigins_unfinished_id`,  `Eoc`.`ecc_id`,  `shouhin`.`updated_by`,  `shouhin`.`updated_at`,  `shouhin`.`many_product_group_id`";
$proto0["m_strFrom"] = "FROM `shouhin`  LEFT OUTER JOIN `Eoc` ON `shouhin`.`ecc_id` = `Eoc`.`ecc_id`";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY `shouhin`.`product_id` DESC";
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
	"m_strName" => "product_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "transaction_ID"
));

$proto6["m_sql"] = "`shouhin`.`product_id`";
$proto6["m_srcTableName"] = "transaction_ID";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Eoc_takuhai_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "transaction_ID"
));

$proto8["m_sql"] = "`shouhin`.`Eoc_takuhai_id`";
$proto8["m_srcTableName"] = "transaction_ID";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Eoc_unfinished_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "transaction_ID"
));

$proto10["m_sql"] = "`shouhin`.`Eoc_unfinished_id`";
$proto10["m_srcTableName"] = "transaction_ID";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Eoc_chigins_unfinished_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "transaction_ID"
));

$proto12["m_sql"] = "`shouhin`.`Eoc_chigins_unfinished_id`";
$proto12["m_srcTableName"] = "transaction_ID";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "ecc_id",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "transaction_ID"
));

$proto14["m_sql"] = "`Eoc`.`ecc_id`";
$proto14["m_srcTableName"] = "transaction_ID";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "transaction_ID"
));

$proto16["m_sql"] = "`shouhin`.`updated_by`";
$proto16["m_srcTableName"] = "transaction_ID";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "transaction_ID"
));

$proto18["m_sql"] = "`shouhin`.`updated_at`";
$proto18["m_srcTableName"] = "transaction_ID";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "many_product_group_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "transaction_ID"
));

$proto20["m_sql"] = "`shouhin`.`many_product_group_id`";
$proto20["m_srcTableName"] = "transaction_ID";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "shouhin";
$proto23["m_srcTableName"] = "transaction_ID";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "product_id";
$proto23["m_columns"][] = "category_id";
$proto23["m_columns"][] = "goods_title";
$proto23["m_columns"][] = "title";
$proto23["m_columns"][] = "sub_category_id1";
$proto23["m_columns"][] = "ecc_id";
$proto23["m_columns"][] = "price";
$proto23["m_columns"][] = "yahoo";
$proto23["m_columns"][] = "remark";
$proto23["m_columns"][] = "sales_price";
$proto23["m_columns"][] = "description";
$proto23["m_columns"][] = "status";
$proto23["m_columns"][] = "product_num";
$proto23["m_columns"][] = "updated_at";
$proto23["m_columns"][] = "yahoo_size";
$proto23["m_columns"][] = "yahoo_title";
$proto23["m_columns"][] = "yahoo_junle";
$proto23["m_columns"][] = "yahoo_sankou_uwadai";
$proto23["m_columns"][] = "yahoo_sozai";
$proto23["m_columns"][] = "yahoo_color";
$proto23["m_columns"][] = "yahoo_kataban";
$proto23["m_columns"][] = "yahoo_condition1";
$proto23["m_columns"][] = "yahoo_condition2";
$proto23["m_columns"][] = "yahoo_fuzokuhin";
$proto23["m_columns"][] = "yahoo_sinaban";
$proto23["m_columns"][] = "yahoo_saisun_sha";
$proto23["m_columns"][] = "yahoo_sex";
$proto23["m_columns"][] = "box_id";
$proto23["m_columns"][] = "nyuukin_price";
$proto23["m_columns"][] = "updated_by";
$proto23["m_columns"][] = "raku_title";
$proto23["m_columns"][] = "raku_hyoujisaki_category2";
$proto23["m_columns"][] = "raku_hyoujisaki_category";
$proto23["m_columns"][] = "raku_hyoujisaki_category3";
$proto23["m_columns"][] = "timesta";
$proto23["m_columns"][] = "saisun_start";
$proto23["m_columns"][] = "saisun_end";
$proto23["m_columns"][] = "label_output_flag";
$proto23["m_columns"][] = "season";
$proto23["m_columns"][] = "kanryou_henbi";
$proto23["m_columns"][] = "box_sort";
$proto23["m_columns"][] = "satei_by";
$proto23["m_columns"][] = "kaitori_by";
$proto23["m_columns"][] = "comment";
$proto23["m_columns"][] = "satei_hi";
$proto23["m_columns"][] = "kaitory_hi";
$proto23["m_columns"][] = "REG_PHOTOGRAPHER";
$proto23["m_columns"][] = "REG_AUTHOR";
$proto23["m_columns"][] = "REG_PACKINGS";
$proto23["m_columns"][] = "REG_KAKOU_DATE";
$proto23["m_columns"][] = "REG_KAKOU";
$proto23["m_columns"][] = "REG_EXHIBITOR";
$proto23["m_columns"][] = "REG_PHOTOGRAPHER_DATE";
$proto23["m_columns"][] = "DT_PACKING_DATE";
$proto23["m_columns"][] = "DT_UP_DATE";
$proto23["m_columns"][] = "AWAZU_DATE";
$proto23["m_columns"][] = "AWAZU_NIN";
$proto23["m_columns"][] = "sabun_date";
$proto23["m_columns"][] = "browseid";
$proto23["m_columns"][] = "browsenode";
$proto23["m_columns"][] = "gold_property";
$proto23["m_columns"][] = "ichiba_title";
$proto23["m_columns"][] = "Gram";
$proto23["m_columns"][] = "Parent_stone";
$proto23["m_columns"][] = "Aside_stone";
$proto23["m_columns"][] = "Appraiser";
$proto23["m_columns"][] = "Remarks";
$proto23["m_columns"][] = "Destination_selling";
$proto23["m_columns"][] = "Finish";
$proto23["m_columns"][] = "Discrimination";
$proto23["m_columns"][] = "accessories";
$proto23["m_columns"][] = "priority";
$proto23["m_columns"][] = "A_storage";
$proto23["m_columns"][] = "price_per_gram";
$proto23["m_columns"][] = "price_per_parent_stone";
$proto23["m_columns"][] = "price_per_aside_stone";
$proto23["m_columns"][] = "price_secret";
$proto23["m_columns"][] = "sales_price_secret";
$proto23["m_columns"][] = "eq";
$proto23["m_columns"][] = "en";
$proto23["m_columns"][] = "line";
$proto23["m_columns"][] = "item_name";
$proto23["m_columns"][] = "handle";
$proto23["m_columns"][] = "yahoo_color_id";
$proto23["m_columns"][] = "raku_hyoujisaki_category4";
$proto23["m_columns"][] = "raku_hyoujisaki_category5";
$proto23["m_columns"][] = "raku_dir_1";
$proto23["m_columns"][] = "raku_dir_2";
$proto23["m_columns"][] = "raku_dir_3";
$proto23["m_columns"][] = "raku_dir_4";
$proto23["m_columns"][] = "raku_dir_5";
$proto23["m_columns"][] = "raku_dir_result";
$proto23["m_columns"][] = "raku_tag_result";
$proto23["m_columns"][] = "serial_number";
$proto23["m_columns"][] = "Exhibition_Date";
$proto23["m_columns"][] = "search_keyword";
$proto23["m_columns"][] = "stamp";
$proto23["m_columns"][] = "motif";
$proto23["m_columns"][] = "Setting";
$proto23["m_columns"][] = "processing";
$proto23["m_columns"][] = "Sleeve_Length";
$proto23["m_columns"][] = "length";
$proto23["m_columns"][] = "Ring_size";
$proto23["m_columns"][] = "price_for_site";
$proto23["m_columns"][] = "yahoo_category_id";
$proto23["m_columns"][] = "Qty";
$proto23["m_columns"][] = "sales_period";
$proto23["m_columns"][] = "starting_price";
$proto23["m_columns"][] = "FLAG_NO_ARRIVAL";
$proto23["m_columns"][] = "amount_of_image";
$proto23["m_columns"][] = "csv";
$proto23["m_columns"][] = "return_output_flag";
$proto23["m_columns"][] = "wasabi_flag";
$proto23["m_columns"][] = "ws_import_date";
$proto23["m_columns"][] = "logo";
$proto23["m_columns"][] = "parts";
$proto23["m_columns"][] = "country_of_origin";
$proto23["m_columns"][] = "zipper";
$proto23["m_columns"][] = "guarantee";
$proto23["m_columns"][] = "errors";
$proto23["m_columns"][] = "designer";
$proto23["m_columns"][] = "hahakai";
$proto23["m_columns"][] = "effect";
$proto23["m_columns"][] = "shape";
$proto23["m_columns"][] = "cutting_style";
$proto23["m_columns"][] = "chain_type";
$proto23["m_columns"][] = "number_of_stones";
$proto23["m_columns"][] = "amount";
$proto23["m_columns"][] = "satei_error";
$proto23["m_columns"][] = "producing_area";
$proto23["m_columns"][] = "shape_supplement";
$proto23["m_columns"][] = "side_gem";
$proto23["m_columns"][] = "product_style";
$proto23["m_columns"][] = "collar_neck_line";
$proto23["m_columns"][] = "breast";
$proto23["m_columns"][] = "silhouette";
$proto23["m_columns"][] = "sleeve";
$proto23["m_columns"][] = "unit";
$proto23["m_columns"][] = "hall_mark";
$proto23["m_columns"][] = "plate";
$proto23["m_columns"][] = "toe";
$proto23["m_columns"][] = "heel";
$proto23["m_columns"][] = "cloth";
$proto23["m_columns"][] = "serial_number_for_storage";
$proto23["m_columns"][] = "official_url";
$proto23["m_columns"][] = "main_details";
$proto23["m_columns"][] = "notation_size";
$proto23["m_columns"][] = "shoe_size_jp";
$proto23["m_columns"][] = "Eoc_chigins2_id";
$proto23["m_columns"][] = "country_of_origin_name";
$proto23["m_columns"][] = "mailingkit_id";
$proto23["m_columns"][] = "DA_COMMENTSANDTOTAL";
$proto23["m_columns"][] = "DA_WEIGHT";
$proto23["m_columns"][] = "DA_PER_CARAT";
$proto23["m_columns"][] = "DA_SHAPE";
$proto23["m_columns"][] = "DA_SELFGRES";
$proto23["m_columns"][] = "DA_ORIGINALGRADEMLIKENED";
$proto23["m_columns"][] = "DA_SUGARCANE";
$proto23["m_columns"][] = "DA_RAPA";
$proto23["m_columns"][] = "DA_INTENSITY";
$proto23["m_columns"][] = "DA_OVERTONE";
$proto23["m_columns"][] = "DA_COLOR";
$proto23["m_columns"][] = "DA_CLARITY";
$proto23["m_columns"][] = "DA_CUT";
$proto23["m_columns"][] = "DA_POLISH";
$proto23["m_columns"][] = "DA_SYMMETRY";
$proto23["m_columns"][] = "DA_FLUO";
$proto23["m_columns"][] = "DA_COLOR_FLUO";
$proto23["m_columns"][] = "DA_WIDE";
$proto23["m_columns"][] = "DA_HIGH";
$proto23["m_columns"][] = "DA_DEPTH";
$proto23["m_columns"][] = "DA_APPRAISER";
$proto23["m_columns"][] = "DA_FRAPA";
$proto23["m_columns"][] = "DA_RATE";
$proto23["m_columns"][] = "DA_UNIT_PRICE_UNPLUG";
$proto23["m_columns"][] = "DA_YOURNAME";
$proto23["m_columns"][] = "DA_RAPAB";
$proto23["m_columns"][] = "DA_GROSSPROFIT";
$proto23["m_columns"][] = "DA_INTEREST_1";
$proto23["m_columns"][] = "DA_no";
$proto23["m_columns"][] = "kinsa_flag";
$proto23["m_columns"][] = "price_for_site_flag";
$proto23["m_columns"][] = "Eoc_takuhai_id";
$proto23["m_columns"][] = "Eoc_unfinished_id";
$proto23["m_columns"][] = "Eoc_chigins_unfinished_id";
$proto23["m_columns"][] = "chohyo_id";
$proto23["m_columns"][] = "location";
$proto23["m_columns"][] = "special_instructions_1";
$proto23["m_columns"][] = "special_instructions_2";
$proto23["m_columns"][] = "special_instructions_3";
$proto23["m_columns"][] = "chohyo_seihin_flag";
$proto23["m_columns"][] = "chohyo_dia_flag";
$proto23["m_columns"][] = "chohyo_type";
$proto23["m_columns"][] = "ichiyen_flag";
$proto23["m_columns"][] = "asuraku_fuka_flag";
$proto23["m_columns"][] = "parallel_import_flag";
$proto23["m_columns"][] = "meisai_number";
$proto23["m_columns"][] = "days_keep_price";
$proto23["m_columns"][] = "initial_included";
$proto23["m_columns"][] = "novelty";
$proto23["m_columns"][] = "tentou_label_output_flag";
$proto23["m_columns"][] = "itaku_flag";
$proto23["m_columns"][] = "including_catch";
$proto23["m_columns"][] = "ichiba_meeting_month";
$proto23["m_columns"][] = "ichiba_meeting_name";
$proto23["m_columns"][] = "ichiba_color";
$proto23["m_columns"][] = "ichiba_clarity";
$proto23["m_columns"][] = "ichiba_melee_gai";
$proto23["m_columns"][] = "ichiba_lot_pieces";
$proto23["m_columns"][] = "ichiba_image";
$proto23["m_columns"][] = "ichiba_img";
$proto23["m_columns"][] = "gold_check_id";
$proto23["m_columns"][] = "ichiba_exhibition_id";
$proto23["m_columns"][] = "ichiba_exhibition_sort";
$proto23["m_columns"][] = "cost";
$proto23["m_columns"][] = "auto_price_cut_prohibited";
$proto23["m_columns"][] = "event_price";
$proto23["m_columns"][] = "identification_cost";
$proto23["m_columns"][] = "other_cost";
$proto23["m_columns"][] = "stock_quantity";
$proto23["m_columns"][] = "Eoc_trader_id_for_buy";
$proto23["m_columns"][] = "Eoc_trader_id_for_sell";
$proto23["m_columns"][] = "multiplication_rate";
$proto23["m_columns"][] = "many_product_group_id";
$proto23["m_columns"][] = "trading_sort_id";
$proto23["m_columns"][] = "many_product_group_saiban";
$proto23["m_columns"][] = "purchase_category";
$proto23["m_columns"][] = "created_at";
$proto23["m_columns"][] = "created_by";
$proto23["m_columns"][] = "manual_input_price_per_gram";
$proto23["m_columns"][] = "satei_start";
$proto23["m_columns"][] = "self_DA_INTENSITY";
$proto23["m_columns"][] = "self_DA_OVERTONE";
$proto23["m_columns"][] = "self_DA_COLOR";
$proto23["m_columns"][] = "self_DA_CLARITY";
$proto23["m_columns"][] = "self_DA_CUT";
$proto23["m_columns"][] = "self_DA_POLISH";
$proto23["m_columns"][] = "self_DA_SYMMETRY";
$proto23["m_columns"][] = "self_DA_FLUO";
$proto23["m_columns"][] = "self_DA_COLOR_FLUO";
$proto23["m_columns"][] = "self_DA_FRAPA";
$proto23["m_columns"][] = "self_DA_RATE";
$proto23["m_columns"][] = "self_multiplication_rate";
$proto23["m_columns"][] = "is_seiyaku";
$proto23["m_columns"][] = "destination_sold_out";
$proto23["m_columns"][] = "mypage_update_prohibited";
$proto23["m_columns"][] = "gold_check_scan_id";
$proto23["m_columns"][] = "buy_campaign_data_id";
$proto23["m_columns"][] = "REG_PHOTOGRAPHER_DATE_start";
$proto23["m_columns"][] = "commission";
$proto23["m_columns"][] = "addtime_gold_check_id";
$proto23["m_columns"][] = "is_recovery";
$proto23["m_columns"][] = "sales_cost";
$proto23["m_columns"][] = "mst_business_partner_id";
$proto23["m_columns"][] = "DA_GROSSPROFIT_2";
$proto23["m_columns"][] = "DA_INTEREST_2";
$proto23["m_columns"][] = "minus_weight";
$proto23["m_columns"][] = "diameter_size";
$proto23["m_columns"][] = "metal_rate_date";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "`shouhin`";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "transaction_ID";
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
												$proto26=array();
$proto26["m_link"] = "SQLL_LEFTJOIN";
			$proto27=array();
$proto27["m_strName"] = "Eoc";
$proto27["m_srcTableName"] = "transaction_ID";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "ecc_id";
$proto27["m_columns"][] = "ecc_seq";
$proto27["m_columns"][] = "name1";
$proto27["m_columns"][] = "created_t";
$proto27["m_columns"][] = "registerd_id";
$proto27["m_columns"][] = "kaitori_staff_id";
$proto27["m_columns"][] = "name2";
$proto27["m_columns"][] = "wareki";
$proto27["m_columns"][] = "b1";
$proto27["m_columns"][] = "b2";
$proto27["m_columns"][] = "b3";
$proto27["m_columns"][] = "birth_day";
$proto27["m_columns"][] = "age";
$proto27["m_columns"][] = "zip";
$proto27["m_columns"][] = "zip1";
$proto27["m_columns"][] = "zip2";
$proto27["m_columns"][] = "address1";
$proto27["m_columns"][] = "address2";
$proto27["m_columns"][] = "address3";
$proto27["m_columns"][] = "tel";
$proto27["m_columns"][] = "tel2";
$proto27["m_columns"][] = "mail1";
$proto27["m_columns"][] = "mail2";
$proto27["m_columns"][] = "address_code";
$proto27["m_columns"][] = "bank_name";
$proto27["m_columns"][] = "bank_blunch_code";
$proto27["m_columns"][] = "bank_yokin_shubetu";
$proto27["m_columns"][] = "bank_account";
$proto27["m_columns"][] = "bank_acoount_name";
$proto27["m_columns"][] = "haisou_bangou";
$proto27["m_columns"][] = "sise_houhou";
$proto27["m_columns"][] = "hentou_houhou";
$proto27["m_columns"][] = "hentou_houhou_time";
$proto27["m_columns"][] = "mousikomi_id";
$proto27["m_columns"][] = "hituyou_shorui";
$proto27["m_columns"][] = "seiyaku_fuseiritu";
$proto27["m_columns"][] = "mitumori_taku";
$proto27["m_columns"][] = "seacanse";
$proto27["m_columns"][] = "remark";
$proto27["m_columns"][] = "type";
$proto27["m_columns"][] = "sales_flag";
$proto27["m_columns"][] = "src_type";
$proto27["m_columns"][] = "liquidation_shop_code";
$proto27["m_columns"][] = "insurance_amount_print";
$proto27["m_columns"][] = "jis_code";
$proto27["m_columns"][] = "updated_at";
$proto27["m_columns"][] = "_registerd_id";
$proto27["m_columns"][] = "mail_check_type";
$proto27["m_columns"][] = "purchase_type";
$proto27["m_columns"][] = "sex";
$proto27["m_columns"][] = "m_tel";
$proto27["m_columns"][] = "fax";
$proto27["m_columns"][] = "chigin_kaitori";
$proto27["m_columns"][] = "option1";
$proto27["m_columns"][] = "option2";
$proto27["m_columns"][] = "option3";
$proto27["m_columns"][] = "option4";
$proto27["m_columns"][] = "option5";
$proto27["m_columns"][] = "option6";
$proto27["m_columns"][] = "option7";
$proto27["m_columns"][] = "option8";
$proto27["m_columns"][] = "option9";
$proto27["m_columns"][] = "option10";
$proto27["m_columns"][] = "option11";
$proto27["m_columns"][] = "option12";
$proto27["m_columns"][] = "option13";
$proto27["m_columns"][] = "rakuda_csv_flag";
$proto27["m_columns"][] = "EOC_COURIER_CHECK";
$proto27["m_columns"][] = "EOC_SIZE";
$proto27["m_columns"][] = "EOC_NUMBER";
$proto27["m_columns"][] = "EOC_REUSE";
$proto27["m_columns"][] = "EOC__DELIVERY_DATES";
$proto27["m_columns"][] = "EOC_SPECIFIED_TIME";
$proto27["m_columns"][] = "FIRST_NAME2";
$proto27["m_columns"][] = "LAST_NAME2";
$proto27["m_columns"][] = "EOC__DATE_AND_TIME_2";
$proto27["m_columns"][] = "EOC__BOX_NUMBER";
$proto27["m_columns"][] = "FIRST_NAME_KANA";
$proto27["m_columns"][] = "LAST_NAME_KANA";
$proto27["m_columns"][] = "FLAG_SPEED";
$proto27["m_columns"][] = "SEARCH_MEDIA";
$proto27["m_columns"][] = "SEARCH_SITE";
$proto27["m_columns"][] = "UN_REACHABLE";
$proto27["m_columns"][] = "FLG_MAIL_SAGAWA";
$proto27["m_columns"][] = "FLG_MAIL_OTHER";
$proto27["m_columns"][] = "ALLSEIYAKU";
$proto27["m_columns"][] = "ICHIBUSEIYAKU";
$proto27["m_columns"][] = "seiyakukin";
$proto27["m_columns"][] = "kaitorihuka";
$proto27["m_columns"][] = "awazu_date";
$proto27["m_columns"][] = "seiyaku_price";
$proto27["m_columns"][] = "eoc_search_keyword";
$proto27["m_columns"][] = "sonota";
$proto27["m_columns"][] = "size_kosuu";
$proto27["m_columns"][] = "sagawa_shuuka_flag";
$proto27["m_columns"][] = "line_check";
$proto27["m_columns"][] = "sagawa_shuukairai_denwabangou";
$proto27["m_columns"][] = "kaitori_sougak";
$proto27["m_columns"][] = "flag";
$proto27["m_columns"][] = "key_code";
$proto27["m_columns"][] = "dm_check_type";
$proto27["m_columns"][] = "kit_flag";
$proto27["m_columns"][] = "kit_done_flag";
$proto27["m_columns"][] = "bank_details_code";
$proto27["m_columns"][] = "bank_details_blunch_name";
$proto27["m_columns"][] = "bank_details_blunch_code";
$proto27["m_columns"][] = "bank_details_account_number";
$proto27["m_columns"][] = "bank_details_symbol";
$proto27["m_columns"][] = "bank_details_number";
$proto27["m_columns"][] = "bank_details_account_name";
$proto27["m_columns"][] = "bank_details_deposit_type";
$proto27["m_columns"][] = "mypage_id";
$proto27["m_columns"][] = "UN_REACHABLE_brand";
$proto27["m_columns"][] = "sagawa_haisou_hoken";
$proto27["m_columns"][] = "transfer_confirm";
$proto27["m_columns"][] = "outside_bank";
$proto27["m_columns"][] = "new_name";
$proto27["m_columns"][] = "letterpack";
$proto27["m_columns"][] = "satei_saisoku_2_days";
$proto27["m_columns"][] = "satei_saisoku_7_days";
$proto27["m_columns"][] = "accept_flag";
$proto27["m_columns"][] = "delivery_flag";
$proto27["m_columns"][] = "refining_weight";
$proto27["m_columns"][] = "line_chat_url";
$proto27["m_columns"][] = "royal_customer_status";
$proto27["m_columns"][] = "is_business_customer";
$proto27["m_columns"][] = "is_exist_haisouhosyo";
$proto27["m_columns"][] = "meigi_hankaku_kana";
$proto27["m_columns"][] = "building_types";
$proto27["m_columns"][] = "dwelling_types";
$proto27["m_columns"][] = "is_yamato_csv";
$proto27["m_columns"][] = "is_seiren_csv";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "LEFT OUTER JOIN `Eoc` ON `shouhin`.`ecc_id` = `Eoc`.`ecc_id`";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "transaction_ID";
$proto28=array();
$proto28["m_sql"] = "`shouhin`.`ecc_id` = `Eoc`.`ecc_id`";
$proto28["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "ecc_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "transaction_ID"
));

$proto28["m_column"]=$obj;
$proto28["m_contained"] = array();
$proto28["m_strCase"] = "= `Eoc`.`ecc_id`";
$proto28["m_havingmode"] = false;
$proto28["m_inBrackets"] = false;
$proto28["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto28);

$proto26["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto26);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto30=array();
						$obj = new SQLField(array(
	"m_strName" => "product_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "transaction_ID"
));

$proto30["m_column"]=$obj;
$proto30["m_bAsc"] = 0;
$proto30["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto30);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="transaction_ID";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_transaction_ID = createSqlQuery_transaction_ID();


	
		;

								

$tdatatransaction_ID[".sqlquery"] = $queryData_transaction_ID;

include_once(getabspath("include/transaction_ID_events.php"));
$tableEvents["transaction_ID"] = new eventclass_transaction_ID;
$tdatatransaction_ID[".hasEvents"] = true;

?>