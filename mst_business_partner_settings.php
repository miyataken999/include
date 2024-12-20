<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamst_business_partner = array();
	$tdatamst_business_partner[".truncateText"] = true;
	$tdatamst_business_partner[".NumberOfChars"] = 80;
	$tdatamst_business_partner[".ShortName"] = "mst_business_partner";
	$tdatamst_business_partner[".OwnerID"] = "";
	$tdatamst_business_partner[".OriginalTable"] = "mst_business_partner";

//	field labels
$fieldLabelsmst_business_partner = array();
$fieldToolTipsmst_business_partner = array();
$pageTitlesmst_business_partner = array();
$placeHoldersmst_business_partner = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmst_business_partner["Japanese"] = array();
	$fieldToolTipsmst_business_partner["Japanese"] = array();
	$placeHoldersmst_business_partner["Japanese"] = array();
	$pageTitlesmst_business_partner["Japanese"] = array();
	$fieldLabelsmst_business_partner["Japanese"]["id"] = "Id";
	$fieldToolTipsmst_business_partner["Japanese"]["id"] = "";
	$placeHoldersmst_business_partner["Japanese"]["id"] = "";
	$fieldLabelsmst_business_partner["Japanese"]["name"] = "Name";
	$fieldToolTipsmst_business_partner["Japanese"]["name"] = "";
	$placeHoldersmst_business_partner["Japanese"]["name"] = "";
	$fieldLabelsmst_business_partner["Japanese"]["create_at"] = "作成日";
	$fieldToolTipsmst_business_partner["Japanese"]["create_at"] = "";
	$placeHoldersmst_business_partner["Japanese"]["create_at"] = "";
	$fieldLabelsmst_business_partner["Japanese"]["create_by"] = "作成者";
	$fieldToolTipsmst_business_partner["Japanese"]["create_by"] = "";
	$placeHoldersmst_business_partner["Japanese"]["create_by"] = "";
	$fieldLabelsmst_business_partner["Japanese"]["update_at"] = "更新日";
	$fieldToolTipsmst_business_partner["Japanese"]["update_at"] = "";
	$placeHoldersmst_business_partner["Japanese"]["update_at"] = "";
	$fieldLabelsmst_business_partner["Japanese"]["update_by"] = "更新者";
	$fieldToolTipsmst_business_partner["Japanese"]["update_by"] = "";
	$placeHoldersmst_business_partner["Japanese"]["update_by"] = "";
	$fieldLabelsmst_business_partner["Japanese"]["sort"] = "Sort";
	$fieldToolTipsmst_business_partner["Japanese"]["sort"] = "";
	$placeHoldersmst_business_partner["Japanese"]["sort"] = "";
	$fieldLabelsmst_business_partner["Japanese"]["ws_name"] = "WSname";
	$fieldToolTipsmst_business_partner["Japanese"]["ws_name"] = "";
	$placeHoldersmst_business_partner["Japanese"]["ws_name"] = "";
	$fieldLabelsmst_business_partner["Japanese"]["cost_rate"] = "コスト料率";
	$fieldToolTipsmst_business_partner["Japanese"]["cost_rate"] = "";
	$placeHoldersmst_business_partner["Japanese"]["cost_rate"] = "";
	$fieldLabelsmst_business_partner["Japanese"]["_DIA_DA_CUSTOMER_id"] = "旧芳名マスタid";
	$fieldToolTipsmst_business_partner["Japanese"]["_DIA_DA_CUSTOMER_id"] = "";
	$placeHoldersmst_business_partner["Japanese"]["_DIA_DA_CUSTOMER_id"] = "";
	$fieldLabelsmst_business_partner["Japanese"]["_DIA_DA_CUSTOMER_sort"] = "旧芳名マスタsort";
	$fieldToolTipsmst_business_partner["Japanese"]["_DIA_DA_CUSTOMER_sort"] = "";
	$placeHoldersmst_business_partner["Japanese"]["_DIA_DA_CUSTOMER_sort"] = "";
	if (count($fieldToolTipsmst_business_partner["Japanese"]))
		$tdatamst_business_partner[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmst_business_partner[""] = array();
	$fieldToolTipsmst_business_partner[""] = array();
	$placeHoldersmst_business_partner[""] = array();
	$pageTitlesmst_business_partner[""] = array();
	$fieldLabelsmst_business_partner[""]["id"] = "Id";
	$fieldToolTipsmst_business_partner[""]["id"] = "";
	$placeHoldersmst_business_partner[""]["id"] = "";
	$fieldLabelsmst_business_partner[""]["name"] = "Name";
	$fieldToolTipsmst_business_partner[""]["name"] = "";
	$placeHoldersmst_business_partner[""]["name"] = "";
	$fieldLabelsmst_business_partner[""]["create_at"] = "Create At";
	$fieldToolTipsmst_business_partner[""]["create_at"] = "";
	$placeHoldersmst_business_partner[""]["create_at"] = "";
	$fieldLabelsmst_business_partner[""]["create_by"] = "Create By";
	$fieldToolTipsmst_business_partner[""]["create_by"] = "";
	$placeHoldersmst_business_partner[""]["create_by"] = "";
	$fieldLabelsmst_business_partner[""]["update_at"] = "Update At";
	$fieldToolTipsmst_business_partner[""]["update_at"] = "";
	$placeHoldersmst_business_partner[""]["update_at"] = "";
	$fieldLabelsmst_business_partner[""]["update_by"] = "Update By";
	$fieldToolTipsmst_business_partner[""]["update_by"] = "";
	$placeHoldersmst_business_partner[""]["update_by"] = "";
	$fieldLabelsmst_business_partner[""]["sort"] = "Sort";
	$fieldToolTipsmst_business_partner[""]["sort"] = "";
	$placeHoldersmst_business_partner[""]["sort"] = "";
	$fieldLabelsmst_business_partner[""]["ws_name"] = "Ws Name";
	$fieldToolTipsmst_business_partner[""]["ws_name"] = "";
	$placeHoldersmst_business_partner[""]["ws_name"] = "";
	$fieldLabelsmst_business_partner[""]["cost_rate"] = "Cost Rate";
	$fieldToolTipsmst_business_partner[""]["cost_rate"] = "";
	$placeHoldersmst_business_partner[""]["cost_rate"] = "";
	$fieldLabelsmst_business_partner[""]["_DIA_DA_CUSTOMER_id"] = "DIA DA CUSTOMER Id";
	$fieldToolTipsmst_business_partner[""]["_DIA_DA_CUSTOMER_id"] = "";
	$placeHoldersmst_business_partner[""]["_DIA_DA_CUSTOMER_id"] = "";
	$fieldLabelsmst_business_partner[""]["_DIA_DA_CUSTOMER_sort"] = "DIA DA CUSTOMER Sort";
	$fieldToolTipsmst_business_partner[""]["_DIA_DA_CUSTOMER_sort"] = "";
	$placeHoldersmst_business_partner[""]["_DIA_DA_CUSTOMER_sort"] = "";
	if (count($fieldToolTipsmst_business_partner[""]))
		$tdatamst_business_partner[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmst_business_partner["English"] = array();
	$fieldToolTipsmst_business_partner["English"] = array();
	$placeHoldersmst_business_partner["English"] = array();
	$pageTitlesmst_business_partner["English"] = array();
	$fieldLabelsmst_business_partner["English"]["id"] = "Id";
	$fieldToolTipsmst_business_partner["English"]["id"] = "";
	$placeHoldersmst_business_partner["English"]["id"] = "";
	$fieldLabelsmst_business_partner["English"]["name"] = "Name";
	$fieldToolTipsmst_business_partner["English"]["name"] = "";
	$placeHoldersmst_business_partner["English"]["name"] = "";
	$fieldLabelsmst_business_partner["English"]["create_at"] = "Create At";
	$fieldToolTipsmst_business_partner["English"]["create_at"] = "";
	$placeHoldersmst_business_partner["English"]["create_at"] = "";
	$fieldLabelsmst_business_partner["English"]["create_by"] = "Create By";
	$fieldToolTipsmst_business_partner["English"]["create_by"] = "";
	$placeHoldersmst_business_partner["English"]["create_by"] = "";
	$fieldLabelsmst_business_partner["English"]["update_at"] = "Update At";
	$fieldToolTipsmst_business_partner["English"]["update_at"] = "";
	$placeHoldersmst_business_partner["English"]["update_at"] = "";
	$fieldLabelsmst_business_partner["English"]["update_by"] = "Update By";
	$fieldToolTipsmst_business_partner["English"]["update_by"] = "";
	$placeHoldersmst_business_partner["English"]["update_by"] = "";
	$fieldLabelsmst_business_partner["English"]["sort"] = "Sort";
	$fieldToolTipsmst_business_partner["English"]["sort"] = "";
	$placeHoldersmst_business_partner["English"]["sort"] = "";
	$fieldLabelsmst_business_partner["English"]["ws_name"] = "Ws Name";
	$fieldToolTipsmst_business_partner["English"]["ws_name"] = "";
	$placeHoldersmst_business_partner["English"]["ws_name"] = "";
	$fieldLabelsmst_business_partner["English"]["cost_rate"] = "Cost Rate";
	$fieldToolTipsmst_business_partner["English"]["cost_rate"] = "";
	$placeHoldersmst_business_partner["English"]["cost_rate"] = "";
	$fieldLabelsmst_business_partner["English"]["_DIA_DA_CUSTOMER_id"] = "DIA DA CUSTOMER Id";
	$fieldToolTipsmst_business_partner["English"]["_DIA_DA_CUSTOMER_id"] = "";
	$placeHoldersmst_business_partner["English"]["_DIA_DA_CUSTOMER_id"] = "";
	$fieldLabelsmst_business_partner["English"]["_DIA_DA_CUSTOMER_sort"] = "DIA DA CUSTOMER Sort";
	$fieldToolTipsmst_business_partner["English"]["_DIA_DA_CUSTOMER_sort"] = "";
	$placeHoldersmst_business_partner["English"]["_DIA_DA_CUSTOMER_sort"] = "";
	if (count($fieldToolTipsmst_business_partner["English"]))
		$tdatamst_business_partner[".isUseToolTips"] = true;
}


	$tdatamst_business_partner[".NCSearch"] = true;



$tdatamst_business_partner[".shortTableName"] = "mst_business_partner";
$tdatamst_business_partner[".nSecOptions"] = 0;
$tdatamst_business_partner[".recsPerRowPrint"] = 1;
$tdatamst_business_partner[".mainTableOwnerID"] = "";
$tdatamst_business_partner[".moveNext"] = 1;
$tdatamst_business_partner[".entityType"] = 0;

$tdatamst_business_partner[".strOriginalTableName"] = "mst_business_partner";

	



$tdatamst_business_partner[".showAddInPopup"] = false;

$tdatamst_business_partner[".showEditInPopup"] = false;

$tdatamst_business_partner[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamst_business_partner[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamst_business_partner[".fieldsForRegister"] = array();

$tdatamst_business_partner[".listAjax"] = false;

	$tdatamst_business_partner[".audit"] = true;

	$tdatamst_business_partner[".locking"] = false;



$tdatamst_business_partner[".list"] = true;

$tdatamst_business_partner[".inlineEdit"] = true;


$tdatamst_business_partner[".reorderRecordsByHeader"] = true;



$tdatamst_business_partner[".inlineAdd"] = true;

$tdatamst_business_partner[".import"] = true;

$tdatamst_business_partner[".exportTo"] = true;


$tdatamst_business_partner[".delete"] = true;

$tdatamst_business_partner[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamst_business_partner[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamst_business_partner[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamst_business_partner[".searchSaving"] = false;
//

$tdatamst_business_partner[".showSearchPanel"] = true;
		$tdatamst_business_partner[".flexibleSearch"] = true;

$tdatamst_business_partner[".isUseAjaxSuggest"] = true;

$tdatamst_business_partner[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatamst_business_partner[".ajaxCodeSnippetAdded"] = false;

$tdatamst_business_partner[".buttonsAdded"] = false;

$tdatamst_business_partner[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamst_business_partner[".isUseTimeForSearch"] = false;




$tdatamst_business_partner[".detailsLinksOnList"] = "1";

$tdatamst_business_partner[".allSearchFields"] = array();
$tdatamst_business_partner[".filterFields"] = array();
$tdatamst_business_partner[".requiredSearchFields"] = array();

$tdatamst_business_partner[".allSearchFields"][] = "_DIA_DA_CUSTOMER_sort";
	$tdatamst_business_partner[".allSearchFields"][] = "id";
	$tdatamst_business_partner[".allSearchFields"][] = "name";
	$tdatamst_business_partner[".allSearchFields"][] = "ws_name";
	$tdatamst_business_partner[".allSearchFields"][] = "sort";
	$tdatamst_business_partner[".allSearchFields"][] = "cost_rate";
	$tdatamst_business_partner[".allSearchFields"][] = "create_at";
	$tdatamst_business_partner[".allSearchFields"][] = "create_by";
	$tdatamst_business_partner[".allSearchFields"][] = "update_at";
	$tdatamst_business_partner[".allSearchFields"][] = "update_by";
	

$tdatamst_business_partner[".googleLikeFields"] = array();
$tdatamst_business_partner[".googleLikeFields"][] = "id";
$tdatamst_business_partner[".googleLikeFields"][] = "name";
$tdatamst_business_partner[".googleLikeFields"][] = "create_at";
$tdatamst_business_partner[".googleLikeFields"][] = "create_by";
$tdatamst_business_partner[".googleLikeFields"][] = "update_at";
$tdatamst_business_partner[".googleLikeFields"][] = "update_by";
$tdatamst_business_partner[".googleLikeFields"][] = "sort";
$tdatamst_business_partner[".googleLikeFields"][] = "ws_name";
$tdatamst_business_partner[".googleLikeFields"][] = "cost_rate";
$tdatamst_business_partner[".googleLikeFields"][] = "_DIA_DA_CUSTOMER_id";
$tdatamst_business_partner[".googleLikeFields"][] = "_DIA_DA_CUSTOMER_sort";


$tdatamst_business_partner[".advSearchFields"] = array();
$tdatamst_business_partner[".advSearchFields"][] = "_DIA_DA_CUSTOMER_sort";
$tdatamst_business_partner[".advSearchFields"][] = "id";
$tdatamst_business_partner[".advSearchFields"][] = "name";
$tdatamst_business_partner[".advSearchFields"][] = "ws_name";
$tdatamst_business_partner[".advSearchFields"][] = "sort";
$tdatamst_business_partner[".advSearchFields"][] = "cost_rate";
$tdatamst_business_partner[".advSearchFields"][] = "create_at";
$tdatamst_business_partner[".advSearchFields"][] = "create_by";
$tdatamst_business_partner[".advSearchFields"][] = "update_at";
$tdatamst_business_partner[".advSearchFields"][] = "update_by";

$tdatamst_business_partner[".tableType"] = "list";

$tdatamst_business_partner[".printerPageOrientation"] = 0;
$tdatamst_business_partner[".nPrinterPageScale"] = 100;

$tdatamst_business_partner[".nPrinterSplitRecords"] = 40;

$tdatamst_business_partner[".nPrinterPDFSplitRecords"] = 40;



$tdatamst_business_partner[".geocodingEnabled"] = false;





$tdatamst_business_partner[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamst_business_partner[".pageSize"] = 100;

$tdatamst_business_partner[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `sort`, `id`";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamst_business_partner[".strOrderBy"] = $tstrOrderBy;

$tdatamst_business_partner[".orderindexes"] = array();
$tdatamst_business_partner[".orderindexes"][] = array(7, (1 ? "ASC" : "DESC"), "`sort`");
$tdatamst_business_partner[".orderindexes"][] = array(1, (1 ? "ASC" : "DESC"), "`id`");

$tdatamst_business_partner[".sqlHead"] = "SELECT `id`,  `name`,  `create_at`,  `create_by`,  `update_at`,  `update_by`,  `sort`,  `ws_name`,  `cost_rate`,  `_DIA_DA_CUSTOMER_id`,  `_DIA_DA_CUSTOMER_sort`";
$tdatamst_business_partner[".sqlFrom"] = "FROM `mst_business_partner`";
$tdatamst_business_partner[".sqlWhereExpr"] = "";
$tdatamst_business_partner[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamst_business_partner[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamst_business_partner[".arrGroupsPerPage"] = $arrGPP;

$tdatamst_business_partner[".highlightSearchResults"] = true;

$tableKeysmst_business_partner = array();
$tableKeysmst_business_partner[] = "id";
$tdatamst_business_partner[".Keys"] = $tableKeysmst_business_partner;

$tdatamst_business_partner[".listFields"] = array();
$tdatamst_business_partner[".listFields"][] = "id";
$tdatamst_business_partner[".listFields"][] = "name";
$tdatamst_business_partner[".listFields"][] = "ws_name";
$tdatamst_business_partner[".listFields"][] = "sort";
$tdatamst_business_partner[".listFields"][] = "cost_rate";
$tdatamst_business_partner[".listFields"][] = "create_at";
$tdatamst_business_partner[".listFields"][] = "create_by";
$tdatamst_business_partner[".listFields"][] = "update_at";
$tdatamst_business_partner[".listFields"][] = "update_by";
$tdatamst_business_partner[".listFields"][] = "_DIA_DA_CUSTOMER_sort";

$tdatamst_business_partner[".hideMobileList"] = array();


$tdatamst_business_partner[".viewFields"] = array();

$tdatamst_business_partner[".addFields"] = array();

$tdatamst_business_partner[".masterListFields"] = array();
$tdatamst_business_partner[".masterListFields"][] = "_DIA_DA_CUSTOMER_sort";
$tdatamst_business_partner[".masterListFields"][] = "id";
$tdatamst_business_partner[".masterListFields"][] = "name";
$tdatamst_business_partner[".masterListFields"][] = "ws_name";
$tdatamst_business_partner[".masterListFields"][] = "sort";
$tdatamst_business_partner[".masterListFields"][] = "cost_rate";
$tdatamst_business_partner[".masterListFields"][] = "create_at";
$tdatamst_business_partner[".masterListFields"][] = "create_by";
$tdatamst_business_partner[".masterListFields"][] = "update_at";
$tdatamst_business_partner[".masterListFields"][] = "update_by";

$tdatamst_business_partner[".inlineAddFields"] = array();
$tdatamst_business_partner[".inlineAddFields"][] = "name";
$tdatamst_business_partner[".inlineAddFields"][] = "ws_name";
$tdatamst_business_partner[".inlineAddFields"][] = "sort";
$tdatamst_business_partner[".inlineAddFields"][] = "cost_rate";
$tdatamst_business_partner[".inlineAddFields"][] = "_DIA_DA_CUSTOMER_sort";

$tdatamst_business_partner[".editFields"] = array();

$tdatamst_business_partner[".inlineEditFields"] = array();
$tdatamst_business_partner[".inlineEditFields"][] = "name";
$tdatamst_business_partner[".inlineEditFields"][] = "ws_name";
$tdatamst_business_partner[".inlineEditFields"][] = "sort";
$tdatamst_business_partner[".inlineEditFields"][] = "cost_rate";
$tdatamst_business_partner[".inlineEditFields"][] = "_DIA_DA_CUSTOMER_sort";

$tdatamst_business_partner[".updateSelectedFields"] = array();


$tdatamst_business_partner[".exportFields"] = array();
$tdatamst_business_partner[".exportFields"][] = "_DIA_DA_CUSTOMER_sort";
$tdatamst_business_partner[".exportFields"][] = "id";
$tdatamst_business_partner[".exportFields"][] = "name";
$tdatamst_business_partner[".exportFields"][] = "ws_name";
$tdatamst_business_partner[".exportFields"][] = "sort";
$tdatamst_business_partner[".exportFields"][] = "cost_rate";
$tdatamst_business_partner[".exportFields"][] = "create_at";
$tdatamst_business_partner[".exportFields"][] = "create_by";
$tdatamst_business_partner[".exportFields"][] = "update_at";
$tdatamst_business_partner[".exportFields"][] = "update_by";

$tdatamst_business_partner[".importFields"] = array();
$tdatamst_business_partner[".importFields"][] = "id";
$tdatamst_business_partner[".importFields"][] = "name";
$tdatamst_business_partner[".importFields"][] = "create_at";
$tdatamst_business_partner[".importFields"][] = "create_by";
$tdatamst_business_partner[".importFields"][] = "update_at";
$tdatamst_business_partner[".importFields"][] = "update_by";
$tdatamst_business_partner[".importFields"][] = "sort";
$tdatamst_business_partner[".importFields"][] = "ws_name";
$tdatamst_business_partner[".importFields"][] = "cost_rate";
$tdatamst_business_partner[".importFields"][] = "_DIA_DA_CUSTOMER_sort";

$tdatamst_business_partner[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "mst_business_partner";
	$fdata["Label"] = GetFieldLabel("mst_business_partner","id");
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




	$tdatamst_business_partner["id"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "mst_business_partner";
	$fdata["Label"] = GetFieldLabel("mst_business_partner","name");
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




	$tdatamst_business_partner["name"] = $fdata;
//	create_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "create_at";
	$fdata["GoodName"] = "create_at";
	$fdata["ownerTable"] = "mst_business_partner";
	$fdata["Label"] = GetFieldLabel("mst_business_partner","create_at");
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




	$tdatamst_business_partner["create_at"] = $fdata;
//	create_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "create_by";
	$fdata["GoodName"] = "create_by";
	$fdata["ownerTable"] = "mst_business_partner";
	$fdata["Label"] = GetFieldLabel("mst_business_partner","create_by");
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




	$tdatamst_business_partner["create_by"] = $fdata;
//	update_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "update_at";
	$fdata["GoodName"] = "update_at";
	$fdata["ownerTable"] = "mst_business_partner";
	$fdata["Label"] = GetFieldLabel("mst_business_partner","update_at");
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




	$tdatamst_business_partner["update_at"] = $fdata;
//	update_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "update_by";
	$fdata["GoodName"] = "update_by";
	$fdata["ownerTable"] = "mst_business_partner";
	$fdata["Label"] = GetFieldLabel("mst_business_partner","update_by");
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




	$tdatamst_business_partner["update_by"] = $fdata;
//	sort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "sort";
	$fdata["GoodName"] = "sort";
	$fdata["ownerTable"] = "mst_business_partner";
	$fdata["Label"] = GetFieldLabel("mst_business_partner","sort");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

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




	$tdatamst_business_partner["sort"] = $fdata;
//	ws_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "ws_name";
	$fdata["GoodName"] = "ws_name";
	$fdata["ownerTable"] = "mst_business_partner";
	$fdata["Label"] = GetFieldLabel("mst_business_partner","ws_name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ws_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`ws_name`";

	
	
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




	$tdatamst_business_partner["ws_name"] = $fdata;
//	cost_rate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "cost_rate";
	$fdata["GoodName"] = "cost_rate";
	$fdata["ownerTable"] = "mst_business_partner";
	$fdata["Label"] = GetFieldLabel("mst_business_partner","cost_rate");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "cost_rate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`cost_rate`";

	
	
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




	$tdatamst_business_partner["cost_rate"] = $fdata;
//	_DIA_DA_CUSTOMER_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "_DIA_DA_CUSTOMER_id";
	$fdata["GoodName"] = "_DIA_DA_CUSTOMER_id";
	$fdata["ownerTable"] = "mst_business_partner";
	$fdata["Label"] = GetFieldLabel("mst_business_partner","_DIA_DA_CUSTOMER_id");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "_DIA_DA_CUSTOMER_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`_DIA_DA_CUSTOMER_id`";

	
	
			
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








	$tdatamst_business_partner["_DIA_DA_CUSTOMER_id"] = $fdata;
//	_DIA_DA_CUSTOMER_sort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "_DIA_DA_CUSTOMER_sort";
	$fdata["GoodName"] = "_DIA_DA_CUSTOMER_sort";
	$fdata["ownerTable"] = "mst_business_partner";
	$fdata["Label"] = GetFieldLabel("mst_business_partner","_DIA_DA_CUSTOMER_sort");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "_DIA_DA_CUSTOMER_sort";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`_DIA_DA_CUSTOMER_sort`";

	
	
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




	$tdatamst_business_partner["_DIA_DA_CUSTOMER_sort"] = $fdata;


$tables_data["mst_business_partner"]=&$tdatamst_business_partner;
$field_labels["mst_business_partner"] = &$fieldLabelsmst_business_partner;
$fieldToolTips["mst_business_partner"] = &$fieldToolTipsmst_business_partner;
$placeHolders["mst_business_partner"] = &$placeHoldersmst_business_partner;
$page_titles["mst_business_partner"] = &$pageTitlesmst_business_partner;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mst_business_partner"] = array();
//	mst_bullion_dealer
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="mst_bullion_dealer";
		$detailsParam["dOriginalTable"] = "mst_bullion_dealer";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "mst_bullion_dealer";
	$detailsParam["dCaptionTable"] = GetTableCaption("mst_bullion_dealer");
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
		
	$detailsTablesData["mst_business_partner"][$dIndex] = $detailsParam;

	
		$detailsTablesData["mst_business_partner"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["mst_business_partner"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["mst_business_partner"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["mst_business_partner"][$dIndex]["detailKeys"][]="mst_business_partner_id";
//	mst_ichiba_meeting
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="mst_ichiba_meeting";
		$detailsParam["dOriginalTable"] = "mst_ichiba_meeting";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "mst_ichiba_meeting";
	$detailsParam["dCaptionTable"] = GetTableCaption("mst_ichiba_meeting");
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
		
	$detailsTablesData["mst_business_partner"][$dIndex] = $detailsParam;

	
		$detailsTablesData["mst_business_partner"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["mst_business_partner"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["mst_business_partner"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["mst_business_partner"][$dIndex]["detailKeys"][]="mst_business_partner_id";

// tables which are master tables for current table (detail)
$masterTablesData["mst_business_partner"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mst_business_partner()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  `name`,  `create_at`,  `create_by`,  `update_at`,  `update_by`,  `sort`,  `ws_name`,  `cost_rate`,  `_DIA_DA_CUSTOMER_id`,  `_DIA_DA_CUSTOMER_sort`";
$proto0["m_strFrom"] = "FROM `mst_business_partner`";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY `sort`, `id`";
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
	"m_strTable" => "mst_business_partner",
	"m_srcTableName" => "mst_business_partner"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "mst_business_partner";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "mst_business_partner",
	"m_srcTableName" => "mst_business_partner"
));

$proto8["m_sql"] = "`name`";
$proto8["m_srcTableName"] = "mst_business_partner";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "create_at",
	"m_strTable" => "mst_business_partner",
	"m_srcTableName" => "mst_business_partner"
));

$proto10["m_sql"] = "`create_at`";
$proto10["m_srcTableName"] = "mst_business_partner";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "create_by",
	"m_strTable" => "mst_business_partner",
	"m_srcTableName" => "mst_business_partner"
));

$proto12["m_sql"] = "`create_by`";
$proto12["m_srcTableName"] = "mst_business_partner";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "update_at",
	"m_strTable" => "mst_business_partner",
	"m_srcTableName" => "mst_business_partner"
));

$proto14["m_sql"] = "`update_at`";
$proto14["m_srcTableName"] = "mst_business_partner";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "update_by",
	"m_strTable" => "mst_business_partner",
	"m_srcTableName" => "mst_business_partner"
));

$proto16["m_sql"] = "`update_by`";
$proto16["m_srcTableName"] = "mst_business_partner";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "sort",
	"m_strTable" => "mst_business_partner",
	"m_srcTableName" => "mst_business_partner"
));

$proto18["m_sql"] = "`sort`";
$proto18["m_srcTableName"] = "mst_business_partner";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "ws_name",
	"m_strTable" => "mst_business_partner",
	"m_srcTableName" => "mst_business_partner"
));

$proto20["m_sql"] = "`ws_name`";
$proto20["m_srcTableName"] = "mst_business_partner";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "cost_rate",
	"m_strTable" => "mst_business_partner",
	"m_srcTableName" => "mst_business_partner"
));

$proto22["m_sql"] = "`cost_rate`";
$proto22["m_srcTableName"] = "mst_business_partner";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "_DIA_DA_CUSTOMER_id",
	"m_strTable" => "mst_business_partner",
	"m_srcTableName" => "mst_business_partner"
));

$proto24["m_sql"] = "`_DIA_DA_CUSTOMER_id`";
$proto24["m_srcTableName"] = "mst_business_partner";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "_DIA_DA_CUSTOMER_sort",
	"m_strTable" => "mst_business_partner",
	"m_srcTableName" => "mst_business_partner"
));

$proto26["m_sql"] = "`_DIA_DA_CUSTOMER_sort`";
$proto26["m_srcTableName"] = "mst_business_partner";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto28=array();
$proto28["m_link"] = "SQLL_MAIN";
			$proto29=array();
$proto29["m_strName"] = "mst_business_partner";
$proto29["m_srcTableName"] = "mst_business_partner";
$proto29["m_columns"] = array();
$proto29["m_columns"][] = "id";
$proto29["m_columns"][] = "name";
$proto29["m_columns"][] = "create_at";
$proto29["m_columns"][] = "create_by";
$proto29["m_columns"][] = "update_at";
$proto29["m_columns"][] = "update_by";
$proto29["m_columns"][] = "sort";
$proto29["m_columns"][] = "ws_name";
$proto29["m_columns"][] = "location_type";
$proto29["m_columns"][] = "cost_rate";
$proto29["m_columns"][] = "_DIA_DA_CUSTOMER_id";
$proto29["m_columns"][] = "_DIA_DA_CUSTOMER_sort";
$obj = new SQLTable($proto29);

$proto28["m_table"] = $obj;
$proto28["m_sql"] = "`mst_business_partner`";
$proto28["m_alias"] = "";
$proto28["m_srcTableName"] = "mst_business_partner";
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
												$proto32=array();
						$obj = new SQLField(array(
	"m_strName" => "sort",
	"m_strTable" => "mst_business_partner",
	"m_srcTableName" => "mst_business_partner"
));

$proto32["m_column"]=$obj;
$proto32["m_bAsc"] = 1;
$proto32["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto32);

$proto0["m_orderby"][]=$obj;					
												$proto34=array();
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "mst_business_partner",
	"m_srcTableName" => "mst_business_partner"
));

$proto34["m_column"]=$obj;
$proto34["m_bAsc"] = 1;
$proto34["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto34);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="mst_business_partner";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mst_business_partner = createSqlQuery_mst_business_partner();


	
		;

											

$tdatamst_business_partner[".sqlquery"] = $queryData_mst_business_partner;

include_once(getabspath("include/mst_business_partner_events.php"));
$tableEvents["mst_business_partner"] = new eventclass_mst_business_partner;
$tdatamst_business_partner[".hasEvents"] = true;

?>