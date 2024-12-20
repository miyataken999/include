<?php
require_once(getabspath("classes/cipherer.php"));




$tdatagold_check = array();
	$tdatagold_check[".truncateText"] = true;
	$tdatagold_check[".NumberOfChars"] = 80;
	$tdatagold_check[".ShortName"] = "gold_check";
	$tdatagold_check[".OwnerID"] = "";
	$tdatagold_check[".OriginalTable"] = "gold_check";

//	field labels
$fieldLabelsgold_check = array();
$fieldToolTipsgold_check = array();
$pageTitlesgold_check = array();
$placeHoldersgold_check = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsgold_check["Japanese"] = array();
	$fieldToolTipsgold_check["Japanese"] = array();
	$placeHoldersgold_check["Japanese"] = array();
	$pageTitlesgold_check["Japanese"] = array();
	$fieldLabelsgold_check["Japanese"]["id"] = "Id";
	$fieldToolTipsgold_check["Japanese"]["id"] = "";
	$placeHoldersgold_check["Japanese"]["id"] = "";
	$fieldLabelsgold_check["Japanese"]["company"] = "会社名";
	$fieldToolTipsgold_check["Japanese"]["company"] = "";
	$placeHoldersgold_check["Japanese"]["company"] = "";
	$fieldLabelsgold_check["Japanese"]["delivery_num"] = "伝票番号";
	$fieldToolTipsgold_check["Japanese"]["delivery_num"] = "";
	$placeHoldersgold_check["Japanese"]["delivery_num"] = "";
	$fieldLabelsgold_check["Japanese"]["create_at"] = "作成日";
	$fieldToolTipsgold_check["Japanese"]["create_at"] = "";
	$placeHoldersgold_check["Japanese"]["create_at"] = "";
	$fieldLabelsgold_check["Japanese"]["create_by"] = "作成者";
	$fieldToolTipsgold_check["Japanese"]["create_by"] = "";
	$placeHoldersgold_check["Japanese"]["create_by"] = "";
	$fieldLabelsgold_check["Japanese"]["update_at"] = "更新日";
	$fieldToolTipsgold_check["Japanese"]["update_at"] = "";
	$placeHoldersgold_check["Japanese"]["update_at"] = "";
	$fieldLabelsgold_check["Japanese"]["update_by"] = "更新者";
	$fieldToolTipsgold_check["Japanese"]["update_by"] = "";
	$placeHoldersgold_check["Japanese"]["update_by"] = "";
	$fieldLabelsgold_check["Japanese"]["slip_type"] = "伝票種別";
	$fieldToolTipsgold_check["Japanese"]["slip_type"] = "";
	$placeHoldersgold_check["Japanese"]["slip_type"] = "";
	$fieldLabelsgold_check["Japanese"]["link"] = "Link";
	$fieldToolTipsgold_check["Japanese"]["link"] = "";
	$placeHoldersgold_check["Japanese"]["link"] = "";
	$fieldLabelsgold_check["Japanese"]["trade_day"] = "約定日";
	$fieldToolTipsgold_check["Japanese"]["trade_day"] = "";
	$placeHoldersgold_check["Japanese"]["trade_day"] = "";
	$fieldLabelsgold_check["Japanese"]["billing_amount"] = "払い出し";
	$fieldToolTipsgold_check["Japanese"]["billing_amount"] = "";
	$placeHoldersgold_check["Japanese"]["billing_amount"] = "";
	$fieldLabelsgold_check["Japanese"]["file_link"] = "file_link";
	$fieldToolTipsgold_check["Japanese"]["file_link"] = "";
	$placeHoldersgold_check["Japanese"]["file_link"] = "";
	$fieldLabelsgold_check["Japanese"]["seiren_price"] = "精錬上がり";
	$fieldToolTipsgold_check["Japanese"]["seiren_price"] = "";
	$placeHoldersgold_check["Japanese"]["seiren_price"] = "";
	$fieldLabelsgold_check["Japanese"]["status_list"] = "商品状態";
	$fieldToolTipsgold_check["Japanese"]["status_list"] = "";
	$placeHoldersgold_check["Japanese"]["status_list"] = "";
	$fieldLabelsgold_check["Japanese"]["kanryou_henbi"] = "完了変更日";
	$fieldToolTipsgold_check["Japanese"]["kanryou_henbi"] = "";
	$placeHoldersgold_check["Japanese"]["kanryou_henbi"] = "";
	$fieldLabelsgold_check["Japanese"]["sumgram"] = "重量";
	$fieldToolTipsgold_check["Japanese"]["sumgram"] = "";
	$placeHoldersgold_check["Japanese"]["sumgram"] = "";
	if (count($fieldToolTipsgold_check["Japanese"]))
		$tdatagold_check[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsgold_check[""] = array();
	$fieldToolTipsgold_check[""] = array();
	$placeHoldersgold_check[""] = array();
	$pageTitlesgold_check[""] = array();
	$fieldLabelsgold_check[""]["id"] = "Id";
	$fieldToolTipsgold_check[""]["id"] = "";
	$placeHoldersgold_check[""]["id"] = "";
	$fieldLabelsgold_check[""]["company"] = "Company";
	$fieldToolTipsgold_check[""]["company"] = "";
	$placeHoldersgold_check[""]["company"] = "";
	$fieldLabelsgold_check[""]["delivery_num"] = "Delivery Num";
	$fieldToolTipsgold_check[""]["delivery_num"] = "";
	$placeHoldersgold_check[""]["delivery_num"] = "";
	$fieldLabelsgold_check[""]["create_at"] = "Create At";
	$fieldToolTipsgold_check[""]["create_at"] = "";
	$placeHoldersgold_check[""]["create_at"] = "";
	$fieldLabelsgold_check[""]["create_by"] = "Create By";
	$fieldToolTipsgold_check[""]["create_by"] = "";
	$placeHoldersgold_check[""]["create_by"] = "";
	$fieldLabelsgold_check[""]["update_at"] = "Update At";
	$fieldToolTipsgold_check[""]["update_at"] = "";
	$placeHoldersgold_check[""]["update_at"] = "";
	$fieldLabelsgold_check[""]["update_by"] = "Update By";
	$fieldToolTipsgold_check[""]["update_by"] = "";
	$placeHoldersgold_check[""]["update_by"] = "";
	$fieldLabelsgold_check[""]["slip_type"] = "Slip Type";
	$fieldToolTipsgold_check[""]["slip_type"] = "";
	$placeHoldersgold_check[""]["slip_type"] = "";
	$fieldLabelsgold_check[""]["link"] = "Link";
	$fieldToolTipsgold_check[""]["link"] = "";
	$placeHoldersgold_check[""]["link"] = "";
	$fieldLabelsgold_check[""]["trade_day"] = "Trade Day";
	$fieldToolTipsgold_check[""]["trade_day"] = "";
	$placeHoldersgold_check[""]["trade_day"] = "";
	$fieldLabelsgold_check[""]["billing_amount"] = "Billing Amount";
	$fieldToolTipsgold_check[""]["billing_amount"] = "";
	$placeHoldersgold_check[""]["billing_amount"] = "";
	$fieldLabelsgold_check[""]["file_link"] = "File Link";
	$fieldToolTipsgold_check[""]["file_link"] = "";
	$placeHoldersgold_check[""]["file_link"] = "";
	$fieldLabelsgold_check[""]["seiren_price"] = "Seiren Price";
	$fieldToolTipsgold_check[""]["seiren_price"] = "";
	$placeHoldersgold_check[""]["seiren_price"] = "";
	$fieldLabelsgold_check[""]["status_list"] = "Status List";
	$fieldToolTipsgold_check[""]["status_list"] = "";
	$placeHoldersgold_check[""]["status_list"] = "";
	$fieldLabelsgold_check[""]["kanryou_henbi"] = "Kanryou Henbi";
	$fieldToolTipsgold_check[""]["kanryou_henbi"] = "";
	$placeHoldersgold_check[""]["kanryou_henbi"] = "";
	$fieldLabelsgold_check[""]["sumgram"] = "Sumgram";
	$fieldToolTipsgold_check[""]["sumgram"] = "";
	$placeHoldersgold_check[""]["sumgram"] = "";
	if (count($fieldToolTipsgold_check[""]))
		$tdatagold_check[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsgold_check["English"] = array();
	$fieldToolTipsgold_check["English"] = array();
	$placeHoldersgold_check["English"] = array();
	$pageTitlesgold_check["English"] = array();
	$fieldLabelsgold_check["English"]["id"] = "Id";
	$fieldToolTipsgold_check["English"]["id"] = "";
	$placeHoldersgold_check["English"]["id"] = "";
	$fieldLabelsgold_check["English"]["company"] = "Company";
	$fieldToolTipsgold_check["English"]["company"] = "";
	$placeHoldersgold_check["English"]["company"] = "";
	$fieldLabelsgold_check["English"]["delivery_num"] = "Delivery Num";
	$fieldToolTipsgold_check["English"]["delivery_num"] = "";
	$placeHoldersgold_check["English"]["delivery_num"] = "";
	$fieldLabelsgold_check["English"]["create_at"] = "Create At";
	$fieldToolTipsgold_check["English"]["create_at"] = "";
	$placeHoldersgold_check["English"]["create_at"] = "";
	$fieldLabelsgold_check["English"]["create_by"] = "Create By";
	$fieldToolTipsgold_check["English"]["create_by"] = "";
	$placeHoldersgold_check["English"]["create_by"] = "";
	$fieldLabelsgold_check["English"]["update_at"] = "Update At";
	$fieldToolTipsgold_check["English"]["update_at"] = "";
	$placeHoldersgold_check["English"]["update_at"] = "";
	$fieldLabelsgold_check["English"]["update_by"] = "Update By";
	$fieldToolTipsgold_check["English"]["update_by"] = "";
	$placeHoldersgold_check["English"]["update_by"] = "";
	$fieldLabelsgold_check["English"]["slip_type"] = "Slip Type";
	$fieldToolTipsgold_check["English"]["slip_type"] = "";
	$placeHoldersgold_check["English"]["slip_type"] = "";
	$fieldLabelsgold_check["English"]["link"] = "Link";
	$fieldToolTipsgold_check["English"]["link"] = "";
	$placeHoldersgold_check["English"]["link"] = "";
	$fieldLabelsgold_check["English"]["trade_day"] = "Trade Day";
	$fieldToolTipsgold_check["English"]["trade_day"] = "";
	$placeHoldersgold_check["English"]["trade_day"] = "";
	$fieldLabelsgold_check["English"]["billing_amount"] = "Billing Amount";
	$fieldToolTipsgold_check["English"]["billing_amount"] = "";
	$placeHoldersgold_check["English"]["billing_amount"] = "";
	$fieldLabelsgold_check["English"]["file_link"] = "File Link";
	$fieldToolTipsgold_check["English"]["file_link"] = "";
	$placeHoldersgold_check["English"]["file_link"] = "";
	$fieldLabelsgold_check["English"]["seiren_price"] = "Seiren Price";
	$fieldToolTipsgold_check["English"]["seiren_price"] = "";
	$placeHoldersgold_check["English"]["seiren_price"] = "";
	$fieldLabelsgold_check["English"]["status_list"] = "Status List";
	$fieldToolTipsgold_check["English"]["status_list"] = "";
	$placeHoldersgold_check["English"]["status_list"] = "";
	$fieldLabelsgold_check["English"]["kanryou_henbi"] = "Kanryou Henbi";
	$fieldToolTipsgold_check["English"]["kanryou_henbi"] = "";
	$placeHoldersgold_check["English"]["kanryou_henbi"] = "";
	$fieldLabelsgold_check["English"]["sumgram"] = "Sumgram";
	$fieldToolTipsgold_check["English"]["sumgram"] = "";
	$placeHoldersgold_check["English"]["sumgram"] = "";
	if (count($fieldToolTipsgold_check["English"]))
		$tdatagold_check[".isUseToolTips"] = true;
}


	$tdatagold_check[".NCSearch"] = true;



$tdatagold_check[".shortTableName"] = "gold_check";
$tdatagold_check[".nSecOptions"] = 0;
$tdatagold_check[".recsPerRowPrint"] = 1;
$tdatagold_check[".mainTableOwnerID"] = "";
$tdatagold_check[".moveNext"] = 1;
$tdatagold_check[".entityType"] = 0;

$tdatagold_check[".strOriginalTableName"] = "gold_check";

	



$tdatagold_check[".showAddInPopup"] = false;

$tdatagold_check[".showEditInPopup"] = false;

$tdatagold_check[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatagold_check[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatagold_check[".fieldsForRegister"] = array();

$tdatagold_check[".listAjax"] = false;

	$tdatagold_check[".audit"] = true;

	$tdatagold_check[".locking"] = false;



$tdatagold_check[".list"] = true;

$tdatagold_check[".inlineEdit"] = true;


$tdatagold_check[".reorderRecordsByHeader"] = true;



$tdatagold_check[".inlineAdd"] = true;

$tdatagold_check[".import"] = true;

$tdatagold_check[".exportTo"] = true;


$tdatagold_check[".delete"] = true;

$tdatagold_check[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatagold_check[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatagold_check[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatagold_check[".searchSaving"] = false;
//

$tdatagold_check[".showSearchPanel"] = true;
		$tdatagold_check[".flexibleSearch"] = true;

$tdatagold_check[".isUseAjaxSuggest"] = true;

$tdatagold_check[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatagold_check[".ajaxCodeSnippetAdded"] = false;

$tdatagold_check[".buttonsAdded"] = false;

$tdatagold_check[".addPageEvents"] = false;

// use timepicker for search panel
$tdatagold_check[".isUseTimeForSearch"] = false;




$tdatagold_check[".detailsLinksOnList"] = "1";

$tdatagold_check[".allSearchFields"] = array();
$tdatagold_check[".filterFields"] = array();
$tdatagold_check[".requiredSearchFields"] = array();

$tdatagold_check[".allSearchFields"][] = "sumgram";
	$tdatagold_check[".allSearchFields"][] = "id";
	$tdatagold_check[".allSearchFields"][] = "slip_type";
	$tdatagold_check[".allSearchFields"][] = "status_list";
	$tdatagold_check[".allSearchFields"][] = "trade_day";
	$tdatagold_check[".allSearchFields"][] = "company";
	$tdatagold_check[".allSearchFields"][] = "delivery_num";
	$tdatagold_check[".allSearchFields"][] = "billing_amount";
	$tdatagold_check[".allSearchFields"][] = "file_link";
	$tdatagold_check[".allSearchFields"][] = "kanryou_henbi";
	$tdatagold_check[".allSearchFields"][] = "create_at";
	$tdatagold_check[".allSearchFields"][] = "create_by";
	$tdatagold_check[".allSearchFields"][] = "update_at";
	$tdatagold_check[".allSearchFields"][] = "update_by";
	

$tdatagold_check[".googleLikeFields"] = array();
$tdatagold_check[".googleLikeFields"][] = "id";
$tdatagold_check[".googleLikeFields"][] = "link";
$tdatagold_check[".googleLikeFields"][] = "company";
$tdatagold_check[".googleLikeFields"][] = "delivery_num";
$tdatagold_check[".googleLikeFields"][] = "create_at";
$tdatagold_check[".googleLikeFields"][] = "create_by";
$tdatagold_check[".googleLikeFields"][] = "update_at";
$tdatagold_check[".googleLikeFields"][] = "update_by";
$tdatagold_check[".googleLikeFields"][] = "slip_type";
$tdatagold_check[".googleLikeFields"][] = "trade_day";
$tdatagold_check[".googleLikeFields"][] = "billing_amount";
$tdatagold_check[".googleLikeFields"][] = "file_link";
$tdatagold_check[".googleLikeFields"][] = "seiren_price";
$tdatagold_check[".googleLikeFields"][] = "status_list";
$tdatagold_check[".googleLikeFields"][] = "sumgram";
$tdatagold_check[".googleLikeFields"][] = "kanryou_henbi";


$tdatagold_check[".advSearchFields"] = array();
$tdatagold_check[".advSearchFields"][] = "sumgram";
$tdatagold_check[".advSearchFields"][] = "id";
$tdatagold_check[".advSearchFields"][] = "slip_type";
$tdatagold_check[".advSearchFields"][] = "status_list";
$tdatagold_check[".advSearchFields"][] = "trade_day";
$tdatagold_check[".advSearchFields"][] = "company";
$tdatagold_check[".advSearchFields"][] = "delivery_num";
$tdatagold_check[".advSearchFields"][] = "billing_amount";
$tdatagold_check[".advSearchFields"][] = "file_link";
$tdatagold_check[".advSearchFields"][] = "kanryou_henbi";
$tdatagold_check[".advSearchFields"][] = "create_at";
$tdatagold_check[".advSearchFields"][] = "create_by";
$tdatagold_check[".advSearchFields"][] = "update_at";
$tdatagold_check[".advSearchFields"][] = "update_by";

$tdatagold_check[".tableType"] = "list";

$tdatagold_check[".printerPageOrientation"] = 0;
$tdatagold_check[".nPrinterPageScale"] = 100;

$tdatagold_check[".nPrinterSplitRecords"] = 40;

$tdatagold_check[".nPrinterPDFSplitRecords"] = 40;



$tdatagold_check[".geocodingEnabled"] = false;





$tdatagold_check[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatagold_check[".pageSize"] = 20;

$tdatagold_check[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `id` DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatagold_check[".strOrderBy"] = $tstrOrderBy;

$tdatagold_check[".orderindexes"] = array();
$tdatagold_check[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "`id`");

$tdatagold_check[".sqlHead"] = "SELECT `id`,  `id` AS `link`,  `company`,  `delivery_num`,  `create_at`,  `create_by`,  `update_at`,  `update_by`,  `slip_type`,  `trade_day`,  `billing_amount`,  `file_link`,  `seiren_price`,  \"\" AS `status_list`,  \"\" AS `sumgram`,  `kanryou_henbi`";
$tdatagold_check[".sqlFrom"] = "FROM `gold_check`";
$tdatagold_check[".sqlWhereExpr"] = "";
$tdatagold_check[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatagold_check[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatagold_check[".arrGroupsPerPage"] = $arrGPP;

$tdatagold_check[".highlightSearchResults"] = true;

$tableKeysgold_check = array();
$tableKeysgold_check[] = "id";
$tdatagold_check[".Keys"] = $tableKeysgold_check;

$tdatagold_check[".listFields"] = array();
$tdatagold_check[".listFields"][] = "link";
$tdatagold_check[".listFields"][] = "id";
$tdatagold_check[".listFields"][] = "slip_type";
$tdatagold_check[".listFields"][] = "status_list";
$tdatagold_check[".listFields"][] = "trade_day";
$tdatagold_check[".listFields"][] = "company";
$tdatagold_check[".listFields"][] = "delivery_num";
$tdatagold_check[".listFields"][] = "sumgram";
$tdatagold_check[".listFields"][] = "billing_amount";
$tdatagold_check[".listFields"][] = "file_link";
$tdatagold_check[".listFields"][] = "kanryou_henbi";
$tdatagold_check[".listFields"][] = "create_at";
$tdatagold_check[".listFields"][] = "create_by";
$tdatagold_check[".listFields"][] = "update_at";
$tdatagold_check[".listFields"][] = "update_by";

$tdatagold_check[".hideMobileList"] = array();


$tdatagold_check[".viewFields"] = array();

$tdatagold_check[".addFields"] = array();

$tdatagold_check[".masterListFields"] = array();
$tdatagold_check[".masterListFields"][] = "sumgram";
$tdatagold_check[".masterListFields"][] = "link";
$tdatagold_check[".masterListFields"][] = "id";
$tdatagold_check[".masterListFields"][] = "slip_type";
$tdatagold_check[".masterListFields"][] = "status_list";
$tdatagold_check[".masterListFields"][] = "trade_day";
$tdatagold_check[".masterListFields"][] = "company";
$tdatagold_check[".masterListFields"][] = "delivery_num";
$tdatagold_check[".masterListFields"][] = "billing_amount";
$tdatagold_check[".masterListFields"][] = "file_link";
$tdatagold_check[".masterListFields"][] = "kanryou_henbi";
$tdatagold_check[".masterListFields"][] = "create_at";
$tdatagold_check[".masterListFields"][] = "create_by";
$tdatagold_check[".masterListFields"][] = "update_at";
$tdatagold_check[".masterListFields"][] = "update_by";

$tdatagold_check[".inlineAddFields"] = array();
$tdatagold_check[".inlineAddFields"][] = "slip_type";
$tdatagold_check[".inlineAddFields"][] = "trade_day";
$tdatagold_check[".inlineAddFields"][] = "company";
$tdatagold_check[".inlineAddFields"][] = "delivery_num";
$tdatagold_check[".inlineAddFields"][] = "billing_amount";
$tdatagold_check[".inlineAddFields"][] = "file_link";
$tdatagold_check[".inlineAddFields"][] = "kanryou_henbi";

$tdatagold_check[".editFields"] = array();

$tdatagold_check[".inlineEditFields"] = array();
$tdatagold_check[".inlineEditFields"][] = "slip_type";
$tdatagold_check[".inlineEditFields"][] = "trade_day";
$tdatagold_check[".inlineEditFields"][] = "company";
$tdatagold_check[".inlineEditFields"][] = "delivery_num";
$tdatagold_check[".inlineEditFields"][] = "billing_amount";
$tdatagold_check[".inlineEditFields"][] = "file_link";
$tdatagold_check[".inlineEditFields"][] = "kanryou_henbi";

$tdatagold_check[".updateSelectedFields"] = array();


$tdatagold_check[".exportFields"] = array();
$tdatagold_check[".exportFields"][] = "sumgram";
$tdatagold_check[".exportFields"][] = "link";
$tdatagold_check[".exportFields"][] = "id";
$tdatagold_check[".exportFields"][] = "slip_type";
$tdatagold_check[".exportFields"][] = "status_list";
$tdatagold_check[".exportFields"][] = "trade_day";
$tdatagold_check[".exportFields"][] = "company";
$tdatagold_check[".exportFields"][] = "delivery_num";
$tdatagold_check[".exportFields"][] = "billing_amount";
$tdatagold_check[".exportFields"][] = "file_link";
$tdatagold_check[".exportFields"][] = "kanryou_henbi";
$tdatagold_check[".exportFields"][] = "create_at";
$tdatagold_check[".exportFields"][] = "create_by";
$tdatagold_check[".exportFields"][] = "update_at";
$tdatagold_check[".exportFields"][] = "update_by";

$tdatagold_check[".importFields"] = array();
$tdatagold_check[".importFields"][] = "id";
$tdatagold_check[".importFields"][] = "company";
$tdatagold_check[".importFields"][] = "delivery_num";
$tdatagold_check[".importFields"][] = "slip_type";
$tdatagold_check[".importFields"][] = "trade_day";
$tdatagold_check[".importFields"][] = "billing_amount";
$tdatagold_check[".importFields"][] = "file_link";
$tdatagold_check[".importFields"][] = "status_list";
$tdatagold_check[".importFields"][] = "kanryou_henbi";

$tdatagold_check[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "gold_check";
	$fdata["Label"] = GetFieldLabel("gold_check","id");
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




	$tdatagold_check["id"] = $fdata;
//	link
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "link";
	$fdata["GoodName"] = "link";
	$fdata["ownerTable"] = "gold_check";
	$fdata["Label"] = GetFieldLabel("gold_check","link");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
	
		$fdata["bExportPage"] = true;

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








	$tdatagold_check["link"] = $fdata;
//	company
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "company";
	$fdata["GoodName"] = "company";
	$fdata["ownerTable"] = "gold_check";
	$fdata["Label"] = GetFieldLabel("gold_check","company");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "company";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`company`";

	
	
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
	$edata["LookupTable"] = "mst_bullion_dealer";
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




	$tdatagold_check["company"] = $fdata;
//	delivery_num
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "delivery_num";
	$fdata["GoodName"] = "delivery_num";
	$fdata["ownerTable"] = "gold_check";
	$fdata["Label"] = GetFieldLabel("gold_check","delivery_num");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "delivery_num";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`delivery_num`";

	
	
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




	$tdatagold_check["delivery_num"] = $fdata;
//	create_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "create_at";
	$fdata["GoodName"] = "create_at";
	$fdata["ownerTable"] = "gold_check";
	$fdata["Label"] = GetFieldLabel("gold_check","create_at");
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




	$tdatagold_check["create_at"] = $fdata;
//	create_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "create_by";
	$fdata["GoodName"] = "create_by";
	$fdata["ownerTable"] = "gold_check";
	$fdata["Label"] = GetFieldLabel("gold_check","create_by");
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




	$tdatagold_check["create_by"] = $fdata;
//	update_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "update_at";
	$fdata["GoodName"] = "update_at";
	$fdata["ownerTable"] = "gold_check";
	$fdata["Label"] = GetFieldLabel("gold_check","update_at");
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




	$tdatagold_check["update_at"] = $fdata;
//	update_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "update_by";
	$fdata["GoodName"] = "update_by";
	$fdata["ownerTable"] = "gold_check";
	$fdata["Label"] = GetFieldLabel("gold_check","update_by");
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




	$tdatagold_check["update_by"] = $fdata;
//	slip_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "slip_type";
	$fdata["GoodName"] = "slip_type";
	$fdata["ownerTable"] = "gold_check";
	$fdata["Label"] = GetFieldLabel("gold_check","slip_type");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

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

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "mst_delivery_type";
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




	$tdatagold_check["slip_type"] = $fdata;
//	trade_day
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "trade_day";
	$fdata["GoodName"] = "trade_day";
	$fdata["ownerTable"] = "gold_check";
	$fdata["Label"] = GetFieldLabel("gold_check","trade_day");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "trade_day";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`trade_day`";

	
	
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




	$tdatagold_check["trade_day"] = $fdata;
//	billing_amount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "billing_amount";
	$fdata["GoodName"] = "billing_amount";
	$fdata["ownerTable"] = "gold_check";
	$fdata["Label"] = GetFieldLabel("gold_check","billing_amount");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "billing_amount";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`billing_amount`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Currency");

	
	
	
	
	
	
	
	
	
	
	
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




	$tdatagold_check["billing_amount"] = $fdata;
//	file_link
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "file_link";
	$fdata["GoodName"] = "file_link";
	$fdata["ownerTable"] = "gold_check";
	$fdata["Label"] = GetFieldLabel("gold_check","file_link");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "file_link";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`file_link`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Hyperlink");

	
	
	
	
				$vdata["hlNewWindow"] = true;
	$vdata["hlType"] = 0;
	$vdata["hlLinkWordNameType"] = "Text";
	$vdata["hlLinkWordText"] = "Link";
	$vdata["hlTitleField"] = "";

	
	
	
	
	
	
	
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




	$tdatagold_check["file_link"] = $fdata;
//	seiren_price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "seiren_price";
	$fdata["GoodName"] = "seiren_price";
	$fdata["ownerTable"] = "gold_check";
	$fdata["Label"] = GetFieldLabel("gold_check","seiren_price");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "seiren_price";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`seiren_price`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Currency");

	
	
	
	
	
	
	
	
	
	
	
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








	$tdatagold_check["seiren_price"] = $fdata;
//	status_list
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "status_list";
	$fdata["GoodName"] = "status_list";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("gold_check","status_list");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "status_list";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"\"";

	
	
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




	$tdatagold_check["status_list"] = $fdata;
//	sumgram
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "sumgram";
	$fdata["GoodName"] = "sumgram";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("gold_check","sumgram");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "sumgram";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"\"";

	
	
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




	$tdatagold_check["sumgram"] = $fdata;
//	kanryou_henbi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "kanryou_henbi";
	$fdata["GoodName"] = "kanryou_henbi";
	$fdata["ownerTable"] = "gold_check";
	$fdata["Label"] = GetFieldLabel("gold_check","kanryou_henbi");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "kanryou_henbi";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`kanryou_henbi`";

	
	
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




	$tdatagold_check["kanryou_henbi"] = $fdata;


$tables_data["gold_check"]=&$tdatagold_check;
$field_labels["gold_check"] = &$fieldLabelsgold_check;
$fieldToolTips["gold_check"] = &$fieldToolTipsgold_check;
$placeHolders["gold_check"] = &$placeHoldersgold_check;
$page_titles["gold_check"] = &$pageTitlesgold_check;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["gold_check"] = array();
//	gold_check_item
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="gold_check_item";
		$detailsParam["dOriginalTable"] = "gold_check_item";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "gold_check_item";
	$detailsParam["dCaptionTable"] = GetTableCaption("gold_check_item");
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
		
	$detailsTablesData["gold_check"][$dIndex] = $detailsParam;

	
		$detailsTablesData["gold_check"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["gold_check"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["gold_check"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["gold_check"][$dIndex]["detailKeys"][]="gold_check_id";

// tables which are master tables for current table (detail)
$masterTablesData["gold_check"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_gold_check()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  `id` AS `link`,  `company`,  `delivery_num`,  `create_at`,  `create_by`,  `update_at`,  `update_by`,  `slip_type`,  `trade_day`,  `billing_amount`,  `file_link`,  `seiren_price`,  \"\" AS `status_list`,  \"\" AS `sumgram`,  `kanryou_henbi`";
$proto0["m_strFrom"] = "FROM `gold_check`";
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
	"m_strTable" => "gold_check",
	"m_srcTableName" => "gold_check"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "gold_check";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "gold_check",
	"m_srcTableName" => "gold_check"
));

$proto8["m_sql"] = "`id`";
$proto8["m_srcTableName"] = "gold_check";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "link";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "company",
	"m_strTable" => "gold_check",
	"m_srcTableName" => "gold_check"
));

$proto10["m_sql"] = "`company`";
$proto10["m_srcTableName"] = "gold_check";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "delivery_num",
	"m_strTable" => "gold_check",
	"m_srcTableName" => "gold_check"
));

$proto12["m_sql"] = "`delivery_num`";
$proto12["m_srcTableName"] = "gold_check";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "create_at",
	"m_strTable" => "gold_check",
	"m_srcTableName" => "gold_check"
));

$proto14["m_sql"] = "`create_at`";
$proto14["m_srcTableName"] = "gold_check";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "create_by",
	"m_strTable" => "gold_check",
	"m_srcTableName" => "gold_check"
));

$proto16["m_sql"] = "`create_by`";
$proto16["m_srcTableName"] = "gold_check";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "update_at",
	"m_strTable" => "gold_check",
	"m_srcTableName" => "gold_check"
));

$proto18["m_sql"] = "`update_at`";
$proto18["m_srcTableName"] = "gold_check";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "update_by",
	"m_strTable" => "gold_check",
	"m_srcTableName" => "gold_check"
));

$proto20["m_sql"] = "`update_by`";
$proto20["m_srcTableName"] = "gold_check";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "slip_type",
	"m_strTable" => "gold_check",
	"m_srcTableName" => "gold_check"
));

$proto22["m_sql"] = "`slip_type`";
$proto22["m_srcTableName"] = "gold_check";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "trade_day",
	"m_strTable" => "gold_check",
	"m_srcTableName" => "gold_check"
));

$proto24["m_sql"] = "`trade_day`";
$proto24["m_srcTableName"] = "gold_check";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "billing_amount",
	"m_strTable" => "gold_check",
	"m_srcTableName" => "gold_check"
));

$proto26["m_sql"] = "`billing_amount`";
$proto26["m_srcTableName"] = "gold_check";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "file_link",
	"m_strTable" => "gold_check",
	"m_srcTableName" => "gold_check"
));

$proto28["m_sql"] = "`file_link`";
$proto28["m_srcTableName"] = "gold_check";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "seiren_price",
	"m_strTable" => "gold_check",
	"m_srcTableName" => "gold_check"
));

$proto30["m_sql"] = "`seiren_price`";
$proto30["m_srcTableName"] = "gold_check";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "\"\""
));

$proto32["m_sql"] = "\"\"";
$proto32["m_srcTableName"] = "gold_check";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "status_list";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "\"\""
));

$proto34["m_sql"] = "\"\"";
$proto34["m_srcTableName"] = "gold_check";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "sumgram";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "kanryou_henbi",
	"m_strTable" => "gold_check",
	"m_srcTableName" => "gold_check"
));

$proto36["m_sql"] = "`kanryou_henbi`";
$proto36["m_srcTableName"] = "gold_check";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto38=array();
$proto38["m_link"] = "SQLL_MAIN";
			$proto39=array();
$proto39["m_strName"] = "gold_check";
$proto39["m_srcTableName"] = "gold_check";
$proto39["m_columns"] = array();
$proto39["m_columns"][] = "id";
$proto39["m_columns"][] = "company";
$proto39["m_columns"][] = "delivery_num";
$proto39["m_columns"][] = "create_at";
$proto39["m_columns"][] = "create_by";
$proto39["m_columns"][] = "update_at";
$proto39["m_columns"][] = "update_by";
$proto39["m_columns"][] = "slip_type";
$proto39["m_columns"][] = "trade_day";
$proto39["m_columns"][] = "billing_amount";
$proto39["m_columns"][] = "file_link";
$proto39["m_columns"][] = "seiren_price";
$proto39["m_columns"][] = "kanryou_henbi";
$obj = new SQLTable($proto39);

$proto38["m_table"] = $obj;
$proto38["m_sql"] = "`gold_check`";
$proto38["m_alias"] = "";
$proto38["m_srcTableName"] = "gold_check";
$proto40=array();
$proto40["m_sql"] = "";
$proto40["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto40["m_column"]=$obj;
$proto40["m_contained"] = array();
$proto40["m_strCase"] = "";
$proto40["m_havingmode"] = false;
$proto40["m_inBrackets"] = false;
$proto40["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto40);

$proto38["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto38);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto42=array();
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "gold_check",
	"m_srcTableName" => "gold_check"
));

$proto42["m_column"]=$obj;
$proto42["m_bAsc"] = 0;
$proto42["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto42);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="gold_check";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_gold_check = createSqlQuery_gold_check();


	
		;

																

$tdatagold_check[".sqlquery"] = $queryData_gold_check;

include_once(getabspath("include/gold_check_events.php"));
$tableEvents["gold_check"] = new eventclass_gold_check;
$tdatagold_check[".hasEvents"] = true;

?>