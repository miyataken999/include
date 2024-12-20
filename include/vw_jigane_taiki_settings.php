<?php
require_once(getabspath("classes/cipherer.php"));




$tdatavw_jigane_taiki = array();
	$tdatavw_jigane_taiki[".truncateText"] = true;
	$tdatavw_jigane_taiki[".NumberOfChars"] = 80;
	$tdatavw_jigane_taiki[".ShortName"] = "vw_jigane_taiki";
	$tdatavw_jigane_taiki[".OwnerID"] = "";
	$tdatavw_jigane_taiki[".OriginalTable"] = "vw_jigane_taiki";

//	field labels
$fieldLabelsvw_jigane_taiki = array();
$fieldToolTipsvw_jigane_taiki = array();
$pageTitlesvw_jigane_taiki = array();
$placeHoldersvw_jigane_taiki = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsvw_jigane_taiki["Japanese"] = array();
	$fieldToolTipsvw_jigane_taiki["Japanese"] = array();
	$placeHoldersvw_jigane_taiki["Japanese"] = array();
	$pageTitlesvw_jigane_taiki["Japanese"] = array();
	$fieldLabelsvw_jigane_taiki["Japanese"]["product_id"] = "SEQ";
	$fieldToolTipsvw_jigane_taiki["Japanese"]["product_id"] = "";
	$placeHoldersvw_jigane_taiki["Japanese"]["product_id"] = "";
	$fieldLabelsvw_jigane_taiki["Japanese"]["gold_check_id"] = "地金チェックid";
	$fieldToolTipsvw_jigane_taiki["Japanese"]["gold_check_id"] = "";
	$placeHoldersvw_jigane_taiki["Japanese"]["gold_check_id"] = "";
	$fieldLabelsvw_jigane_taiki["Japanese"]["slip_type"] = "伝票種別";
	$fieldToolTipsvw_jigane_taiki["Japanese"]["slip_type"] = "";
	$placeHoldersvw_jigane_taiki["Japanese"]["slip_type"] = "";
	$fieldLabelsvw_jigane_taiki["Japanese"]["Gram"] = "重量";
	$fieldToolTipsvw_jigane_taiki["Japanese"]["Gram"] = "";
	$placeHoldersvw_jigane_taiki["Japanese"]["Gram"] = "";
	$fieldLabelsvw_jigane_taiki["Japanese"]["gold_property"] = "払出金性";
	$fieldToolTipsvw_jigane_taiki["Japanese"]["gold_property"] = "";
	$placeHoldersvw_jigane_taiki["Japanese"]["gold_property"] = "";
	$fieldLabelsvw_jigane_taiki["Japanese"]["name"] = "金性";
	$fieldToolTipsvw_jigane_taiki["Japanese"]["name"] = "";
	$placeHoldersvw_jigane_taiki["Japanese"]["name"] = "";
	$fieldLabelsvw_jigane_taiki["Japanese"]["id"] = "id";
	$fieldToolTipsvw_jigane_taiki["Japanese"]["id"] = "";
	$placeHoldersvw_jigane_taiki["Japanese"]["id"] = "";
	$fieldLabelsvw_jigane_taiki["Japanese"]["status"] = "ステータス";
	$fieldToolTipsvw_jigane_taiki["Japanese"]["status"] = "";
	$placeHoldersvw_jigane_taiki["Japanese"]["status"] = "";
	$fieldLabelsvw_jigane_taiki["Japanese"]["updated_at"] = "更新日";
	$fieldToolTipsvw_jigane_taiki["Japanese"]["updated_at"] = "";
	$placeHoldersvw_jigane_taiki["Japanese"]["updated_at"] = "";
	$fieldLabelsvw_jigane_taiki["Japanese"]["updated_by"] = "更新者";
	$fieldToolTipsvw_jigane_taiki["Japanese"]["updated_by"] = "";
	$placeHoldersvw_jigane_taiki["Japanese"]["updated_by"] = "";
	if (count($fieldToolTipsvw_jigane_taiki["Japanese"]))
		$tdatavw_jigane_taiki[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsvw_jigane_taiki[""] = array();
	$fieldToolTipsvw_jigane_taiki[""] = array();
	$placeHoldersvw_jigane_taiki[""] = array();
	$pageTitlesvw_jigane_taiki[""] = array();
	$fieldLabelsvw_jigane_taiki[""]["product_id"] = "Product Id";
	$fieldToolTipsvw_jigane_taiki[""]["product_id"] = "";
	$placeHoldersvw_jigane_taiki[""]["product_id"] = "";
	$fieldLabelsvw_jigane_taiki[""]["gold_check_id"] = "Gold Check Id";
	$fieldToolTipsvw_jigane_taiki[""]["gold_check_id"] = "";
	$placeHoldersvw_jigane_taiki[""]["gold_check_id"] = "";
	$fieldLabelsvw_jigane_taiki[""]["slip_type"] = "Slip Type";
	$fieldToolTipsvw_jigane_taiki[""]["slip_type"] = "";
	$placeHoldersvw_jigane_taiki[""]["slip_type"] = "";
	$fieldLabelsvw_jigane_taiki[""]["Gram"] = "Gram";
	$fieldToolTipsvw_jigane_taiki[""]["Gram"] = "";
	$placeHoldersvw_jigane_taiki[""]["Gram"] = "";
	$fieldLabelsvw_jigane_taiki[""]["gold_property"] = "Gold Property";
	$fieldToolTipsvw_jigane_taiki[""]["gold_property"] = "";
	$placeHoldersvw_jigane_taiki[""]["gold_property"] = "";
	$fieldLabelsvw_jigane_taiki[""]["name"] = "Name";
	$fieldToolTipsvw_jigane_taiki[""]["name"] = "";
	$placeHoldersvw_jigane_taiki[""]["name"] = "";
	$fieldLabelsvw_jigane_taiki[""]["id"] = "Id";
	$fieldToolTipsvw_jigane_taiki[""]["id"] = "";
	$placeHoldersvw_jigane_taiki[""]["id"] = "";
	$fieldLabelsvw_jigane_taiki[""]["status"] = "Status";
	$fieldToolTipsvw_jigane_taiki[""]["status"] = "";
	$placeHoldersvw_jigane_taiki[""]["status"] = "";
	$fieldLabelsvw_jigane_taiki[""]["updated_at"] = "Updated At";
	$fieldToolTipsvw_jigane_taiki[""]["updated_at"] = "";
	$placeHoldersvw_jigane_taiki[""]["updated_at"] = "";
	$fieldLabelsvw_jigane_taiki[""]["updated_by"] = "Updated By";
	$fieldToolTipsvw_jigane_taiki[""]["updated_by"] = "";
	$placeHoldersvw_jigane_taiki[""]["updated_by"] = "";
	if (count($fieldToolTipsvw_jigane_taiki[""]))
		$tdatavw_jigane_taiki[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsvw_jigane_taiki["English"] = array();
	$fieldToolTipsvw_jigane_taiki["English"] = array();
	$placeHoldersvw_jigane_taiki["English"] = array();
	$pageTitlesvw_jigane_taiki["English"] = array();
	$fieldLabelsvw_jigane_taiki["English"]["product_id"] = "Product Id";
	$fieldToolTipsvw_jigane_taiki["English"]["product_id"] = "";
	$placeHoldersvw_jigane_taiki["English"]["product_id"] = "";
	$fieldLabelsvw_jigane_taiki["English"]["gold_check_id"] = "Gold Check Id";
	$fieldToolTipsvw_jigane_taiki["English"]["gold_check_id"] = "";
	$placeHoldersvw_jigane_taiki["English"]["gold_check_id"] = "";
	$fieldLabelsvw_jigane_taiki["English"]["slip_type"] = "Slip Type";
	$fieldToolTipsvw_jigane_taiki["English"]["slip_type"] = "";
	$placeHoldersvw_jigane_taiki["English"]["slip_type"] = "";
	$fieldLabelsvw_jigane_taiki["English"]["Gram"] = "Gram";
	$fieldToolTipsvw_jigane_taiki["English"]["Gram"] = "";
	$placeHoldersvw_jigane_taiki["English"]["Gram"] = "";
	$fieldLabelsvw_jigane_taiki["English"]["gold_property"] = "Gold Property";
	$fieldToolTipsvw_jigane_taiki["English"]["gold_property"] = "";
	$placeHoldersvw_jigane_taiki["English"]["gold_property"] = "";
	$fieldLabelsvw_jigane_taiki["English"]["name"] = "Name";
	$fieldToolTipsvw_jigane_taiki["English"]["name"] = "";
	$placeHoldersvw_jigane_taiki["English"]["name"] = "";
	$fieldLabelsvw_jigane_taiki["English"]["id"] = "Id";
	$fieldToolTipsvw_jigane_taiki["English"]["id"] = "";
	$placeHoldersvw_jigane_taiki["English"]["id"] = "";
	$fieldLabelsvw_jigane_taiki["English"]["status"] = "Status";
	$fieldToolTipsvw_jigane_taiki["English"]["status"] = "";
	$placeHoldersvw_jigane_taiki["English"]["status"] = "";
	$fieldLabelsvw_jigane_taiki["English"]["updated_at"] = "Updated At";
	$fieldToolTipsvw_jigane_taiki["English"]["updated_at"] = "";
	$placeHoldersvw_jigane_taiki["English"]["updated_at"] = "";
	$fieldLabelsvw_jigane_taiki["English"]["updated_by"] = "Updated By";
	$fieldToolTipsvw_jigane_taiki["English"]["updated_by"] = "";
	$placeHoldersvw_jigane_taiki["English"]["updated_by"] = "";
	if (count($fieldToolTipsvw_jigane_taiki["English"]))
		$tdatavw_jigane_taiki[".isUseToolTips"] = true;
}


	$tdatavw_jigane_taiki[".NCSearch"] = true;



$tdatavw_jigane_taiki[".shortTableName"] = "vw_jigane_taiki";
$tdatavw_jigane_taiki[".nSecOptions"] = 0;
$tdatavw_jigane_taiki[".recsPerRowPrint"] = 1;
$tdatavw_jigane_taiki[".mainTableOwnerID"] = "";
$tdatavw_jigane_taiki[".moveNext"] = 1;
$tdatavw_jigane_taiki[".entityType"] = 0;

$tdatavw_jigane_taiki[".strOriginalTableName"] = "vw_jigane_taiki";

	



$tdatavw_jigane_taiki[".showAddInPopup"] = false;

$tdatavw_jigane_taiki[".showEditInPopup"] = false;

$tdatavw_jigane_taiki[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatavw_jigane_taiki[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatavw_jigane_taiki[".fieldsForRegister"] = array();

$tdatavw_jigane_taiki[".listAjax"] = false;

	$tdatavw_jigane_taiki[".audit"] = true;

	$tdatavw_jigane_taiki[".locking"] = false;



$tdatavw_jigane_taiki[".list"] = true;



$tdatavw_jigane_taiki[".reorderRecordsByHeader"] = true;








$tdatavw_jigane_taiki[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatavw_jigane_taiki[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatavw_jigane_taiki[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatavw_jigane_taiki[".searchSaving"] = false;
//

$tdatavw_jigane_taiki[".showSearchPanel"] = true;
		$tdatavw_jigane_taiki[".flexibleSearch"] = true;

$tdatavw_jigane_taiki[".isUseAjaxSuggest"] = true;

$tdatavw_jigane_taiki[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatavw_jigane_taiki[".ajaxCodeSnippetAdded"] = false;

$tdatavw_jigane_taiki[".buttonsAdded"] = false;

$tdatavw_jigane_taiki[".addPageEvents"] = false;

// use timepicker for search panel
$tdatavw_jigane_taiki[".isUseTimeForSearch"] = false;





$tdatavw_jigane_taiki[".allSearchFields"] = array();
$tdatavw_jigane_taiki[".filterFields"] = array();
$tdatavw_jigane_taiki[".requiredSearchFields"] = array();

$tdatavw_jigane_taiki[".allSearchFields"][] = "id";
	$tdatavw_jigane_taiki[".allSearchFields"][] = "product_id";
	$tdatavw_jigane_taiki[".allSearchFields"][] = "gold_check_id";
	$tdatavw_jigane_taiki[".allSearchFields"][] = "slip_type";
	$tdatavw_jigane_taiki[".allSearchFields"][] = "status";
	$tdatavw_jigane_taiki[".allSearchFields"][] = "Gram";
	$tdatavw_jigane_taiki[".allSearchFields"][] = "gold_property";
	$tdatavw_jigane_taiki[".allSearchFields"][] = "name";
	$tdatavw_jigane_taiki[".allSearchFields"][] = "updated_at";
	$tdatavw_jigane_taiki[".allSearchFields"][] = "updated_by";
	

$tdatavw_jigane_taiki[".googleLikeFields"] = array();
$tdatavw_jigane_taiki[".googleLikeFields"][] = "product_id";
$tdatavw_jigane_taiki[".googleLikeFields"][] = "gold_check_id";
$tdatavw_jigane_taiki[".googleLikeFields"][] = "slip_type";
$tdatavw_jigane_taiki[".googleLikeFields"][] = "Gram";
$tdatavw_jigane_taiki[".googleLikeFields"][] = "gold_property";
$tdatavw_jigane_taiki[".googleLikeFields"][] = "name";
$tdatavw_jigane_taiki[".googleLikeFields"][] = "id";
$tdatavw_jigane_taiki[".googleLikeFields"][] = "status";
$tdatavw_jigane_taiki[".googleLikeFields"][] = "updated_at";
$tdatavw_jigane_taiki[".googleLikeFields"][] = "updated_by";


$tdatavw_jigane_taiki[".advSearchFields"] = array();
$tdatavw_jigane_taiki[".advSearchFields"][] = "id";
$tdatavw_jigane_taiki[".advSearchFields"][] = "product_id";
$tdatavw_jigane_taiki[".advSearchFields"][] = "gold_check_id";
$tdatavw_jigane_taiki[".advSearchFields"][] = "slip_type";
$tdatavw_jigane_taiki[".advSearchFields"][] = "status";
$tdatavw_jigane_taiki[".advSearchFields"][] = "Gram";
$tdatavw_jigane_taiki[".advSearchFields"][] = "gold_property";
$tdatavw_jigane_taiki[".advSearchFields"][] = "name";
$tdatavw_jigane_taiki[".advSearchFields"][] = "updated_at";
$tdatavw_jigane_taiki[".advSearchFields"][] = "updated_by";

$tdatavw_jigane_taiki[".tableType"] = "list";

$tdatavw_jigane_taiki[".printerPageOrientation"] = 0;
$tdatavw_jigane_taiki[".nPrinterPageScale"] = 100;

$tdatavw_jigane_taiki[".nPrinterSplitRecords"] = 40;

$tdatavw_jigane_taiki[".nPrinterPDFSplitRecords"] = 40;



$tdatavw_jigane_taiki[".geocodingEnabled"] = false;





$tdatavw_jigane_taiki[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatavw_jigane_taiki[".pageSize"] = 20;

$tdatavw_jigane_taiki[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `product_id` DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatavw_jigane_taiki[".strOrderBy"] = $tstrOrderBy;

$tdatavw_jigane_taiki[".orderindexes"] = array();
$tdatavw_jigane_taiki[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "`product_id`");

$tdatavw_jigane_taiki[".sqlHead"] = "SELECT `product_id`,  `gold_check_id`,  `slip_type`,  `Gram`,  `gold_property`,  `name`,  `id`,  `status`,  `updated_at`,  `updated_by`";
$tdatavw_jigane_taiki[".sqlFrom"] = "FROM `vw_jigane_taiki`";
$tdatavw_jigane_taiki[".sqlWhereExpr"] = "";
$tdatavw_jigane_taiki[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatavw_jigane_taiki[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatavw_jigane_taiki[".arrGroupsPerPage"] = $arrGPP;

$tdatavw_jigane_taiki[".highlightSearchResults"] = true;

$tableKeysvw_jigane_taiki = array();
$tdatavw_jigane_taiki[".Keys"] = $tableKeysvw_jigane_taiki;

$tdatavw_jigane_taiki[".listFields"] = array();
$tdatavw_jigane_taiki[".listFields"][] = "product_id";
$tdatavw_jigane_taiki[".listFields"][] = "gold_check_id";
$tdatavw_jigane_taiki[".listFields"][] = "slip_type";
$tdatavw_jigane_taiki[".listFields"][] = "Gram";
$tdatavw_jigane_taiki[".listFields"][] = "gold_property";
$tdatavw_jigane_taiki[".listFields"][] = "name";
$tdatavw_jigane_taiki[".listFields"][] = "id";
$tdatavw_jigane_taiki[".listFields"][] = "status";
$tdatavw_jigane_taiki[".listFields"][] = "updated_at";
$tdatavw_jigane_taiki[".listFields"][] = "updated_by";

$tdatavw_jigane_taiki[".hideMobileList"] = array();


$tdatavw_jigane_taiki[".viewFields"] = array();

$tdatavw_jigane_taiki[".addFields"] = array();

$tdatavw_jigane_taiki[".masterListFields"] = array();
$tdatavw_jigane_taiki[".masterListFields"][] = "product_id";
$tdatavw_jigane_taiki[".masterListFields"][] = "gold_check_id";
$tdatavw_jigane_taiki[".masterListFields"][] = "slip_type";
$tdatavw_jigane_taiki[".masterListFields"][] = "Gram";
$tdatavw_jigane_taiki[".masterListFields"][] = "gold_property";
$tdatavw_jigane_taiki[".masterListFields"][] = "name";
$tdatavw_jigane_taiki[".masterListFields"][] = "id";
$tdatavw_jigane_taiki[".masterListFields"][] = "status";
$tdatavw_jigane_taiki[".masterListFields"][] = "updated_at";
$tdatavw_jigane_taiki[".masterListFields"][] = "updated_by";

$tdatavw_jigane_taiki[".inlineAddFields"] = array();

$tdatavw_jigane_taiki[".editFields"] = array();

$tdatavw_jigane_taiki[".inlineEditFields"] = array();

$tdatavw_jigane_taiki[".updateSelectedFields"] = array();


$tdatavw_jigane_taiki[".exportFields"] = array();

$tdatavw_jigane_taiki[".importFields"] = array();

$tdatavw_jigane_taiki[".printFields"] = array();

//	product_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "product_id";
	$fdata["GoodName"] = "product_id";
	$fdata["ownerTable"] = "vw_jigane_taiki";
	$fdata["Label"] = GetFieldLabel("vw_jigane_taiki","product_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "product_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`product_id`";

	
	
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




	$tdatavw_jigane_taiki["product_id"] = $fdata;
//	gold_check_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "gold_check_id";
	$fdata["GoodName"] = "gold_check_id";
	$fdata["ownerTable"] = "vw_jigane_taiki";
	$fdata["Label"] = GetFieldLabel("vw_jigane_taiki","gold_check_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "gold_check_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`gold_check_id`";

	
	
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




	$tdatavw_jigane_taiki["gold_check_id"] = $fdata;
//	slip_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "slip_type";
	$fdata["GoodName"] = "slip_type";
	$fdata["ownerTable"] = "vw_jigane_taiki";
	$fdata["Label"] = GetFieldLabel("vw_jigane_taiki","slip_type");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "slip_type";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`slip_type`";

	
	
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




	$tdatavw_jigane_taiki["slip_type"] = $fdata;
//	Gram
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Gram";
	$fdata["GoodName"] = "Gram";
	$fdata["ownerTable"] = "vw_jigane_taiki";
	$fdata["Label"] = GetFieldLabel("vw_jigane_taiki","Gram");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "Gram";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Gram`";

	
	
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
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatavw_jigane_taiki["Gram"] = $fdata;
//	gold_property
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "gold_property";
	$fdata["GoodName"] = "gold_property";
	$fdata["ownerTable"] = "vw_jigane_taiki";
	$fdata["Label"] = GetFieldLabel("vw_jigane_taiki","gold_property");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "gold_property";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`gold_property`";

	
	
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
			$edata["EditParams"].= " maxlength=150";

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




	$tdatavw_jigane_taiki["gold_property"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "vw_jigane_taiki";
	$fdata["Label"] = GetFieldLabel("vw_jigane_taiki","name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdatavw_jigane_taiki["name"] = $fdata;
//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "vw_jigane_taiki";
	$fdata["Label"] = GetFieldLabel("vw_jigane_taiki","id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdatavw_jigane_taiki["id"] = $fdata;
//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "vw_jigane_taiki";
	$fdata["Label"] = GetFieldLabel("vw_jigane_taiki","status");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "status";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`status`";

	
	
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




	$tdatavw_jigane_taiki["status"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "vw_jigane_taiki";
	$fdata["Label"] = GetFieldLabel("vw_jigane_taiki","updated_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdatavw_jigane_taiki["updated_at"] = $fdata;
//	updated_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "updated_by";
	$fdata["GoodName"] = "updated_by";
	$fdata["ownerTable"] = "vw_jigane_taiki";
	$fdata["Label"] = GetFieldLabel("vw_jigane_taiki","updated_by");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdatavw_jigane_taiki["updated_by"] = $fdata;


$tables_data["vw_jigane_taiki"]=&$tdatavw_jigane_taiki;
$field_labels["vw_jigane_taiki"] = &$fieldLabelsvw_jigane_taiki;
$fieldToolTips["vw_jigane_taiki"] = &$fieldToolTipsvw_jigane_taiki;
$placeHolders["vw_jigane_taiki"] = &$placeHoldersvw_jigane_taiki;
$page_titles["vw_jigane_taiki"] = &$pageTitlesvw_jigane_taiki;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["vw_jigane_taiki"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["vw_jigane_taiki"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_vw_jigane_taiki()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`product_id`,  `gold_check_id`,  `slip_type`,  `Gram`,  `gold_property`,  `name`,  `id`,  `status`,  `updated_at`,  `updated_by`";
$proto0["m_strFrom"] = "FROM `vw_jigane_taiki`";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY `product_id` DESC";
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
	"m_strTable" => "vw_jigane_taiki",
	"m_srcTableName" => "vw_jigane_taiki"
));

$proto6["m_sql"] = "`product_id`";
$proto6["m_srcTableName"] = "vw_jigane_taiki";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "gold_check_id",
	"m_strTable" => "vw_jigane_taiki",
	"m_srcTableName" => "vw_jigane_taiki"
));

$proto8["m_sql"] = "`gold_check_id`";
$proto8["m_srcTableName"] = "vw_jigane_taiki";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "slip_type",
	"m_strTable" => "vw_jigane_taiki",
	"m_srcTableName" => "vw_jigane_taiki"
));

$proto10["m_sql"] = "`slip_type`";
$proto10["m_srcTableName"] = "vw_jigane_taiki";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Gram",
	"m_strTable" => "vw_jigane_taiki",
	"m_srcTableName" => "vw_jigane_taiki"
));

$proto12["m_sql"] = "`Gram`";
$proto12["m_srcTableName"] = "vw_jigane_taiki";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "gold_property",
	"m_strTable" => "vw_jigane_taiki",
	"m_srcTableName" => "vw_jigane_taiki"
));

$proto14["m_sql"] = "`gold_property`";
$proto14["m_srcTableName"] = "vw_jigane_taiki";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "vw_jigane_taiki",
	"m_srcTableName" => "vw_jigane_taiki"
));

$proto16["m_sql"] = "`name`";
$proto16["m_srcTableName"] = "vw_jigane_taiki";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "vw_jigane_taiki",
	"m_srcTableName" => "vw_jigane_taiki"
));

$proto18["m_sql"] = "`id`";
$proto18["m_srcTableName"] = "vw_jigane_taiki";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "vw_jigane_taiki",
	"m_srcTableName" => "vw_jigane_taiki"
));

$proto20["m_sql"] = "`status`";
$proto20["m_srcTableName"] = "vw_jigane_taiki";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "vw_jigane_taiki",
	"m_srcTableName" => "vw_jigane_taiki"
));

$proto22["m_sql"] = "`updated_at`";
$proto22["m_srcTableName"] = "vw_jigane_taiki";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by",
	"m_strTable" => "vw_jigane_taiki",
	"m_srcTableName" => "vw_jigane_taiki"
));

$proto24["m_sql"] = "`updated_by`";
$proto24["m_srcTableName"] = "vw_jigane_taiki";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "vw_jigane_taiki";
$proto27["m_srcTableName"] = "vw_jigane_taiki";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "product_id";
$proto27["m_columns"][] = "ecc_id";
$proto27["m_columns"][] = "satei_by";
$proto27["m_columns"][] = "satei_hi";
$proto27["m_columns"][] = "REG_AUTHOR";
$proto27["m_columns"][] = "DT_UP_DATE";
$proto27["m_columns"][] = "price_per_gram";
$proto27["m_columns"][] = "gold_check_id";
$proto27["m_columns"][] = "slip_type";
$proto27["m_columns"][] = "Gram";
$proto27["m_columns"][] = "price";
$proto27["m_columns"][] = "nyuukin_price";
$proto27["m_columns"][] = "gold_property";
$proto27["m_columns"][] = "name";
$proto27["m_columns"][] = "id";
$proto27["m_columns"][] = "status";
$proto27["m_columns"][] = "updated_at";
$proto27["m_columns"][] = "updated_by";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "`vw_jigane_taiki`";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "vw_jigane_taiki";
$proto28=array();
$proto28["m_sql"] = "";
$proto28["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto28["m_column"]=$obj;
$proto28["m_contained"] = array();
$proto28["m_strCase"] = "";
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
	"m_strTable" => "vw_jigane_taiki",
	"m_srcTableName" => "vw_jigane_taiki"
));

$proto30["m_column"]=$obj;
$proto30["m_bAsc"] = 0;
$proto30["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto30);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="vw_jigane_taiki";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_vw_jigane_taiki = createSqlQuery_vw_jigane_taiki();


	
		;

										

$tdatavw_jigane_taiki[".sqlquery"] = $queryData_vw_jigane_taiki;

$tableEvents["vw_jigane_taiki"] = new eventsBase;
$tdatavw_jigane_taiki[".hasEvents"] = false;

?>