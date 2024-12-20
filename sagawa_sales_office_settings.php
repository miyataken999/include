<?php
require_once(getabspath("classes/cipherer.php"));




$tdatasagawa_sales_office = array();
	$tdatasagawa_sales_office[".truncateText"] = true;
	$tdatasagawa_sales_office[".NumberOfChars"] = 80;
	$tdatasagawa_sales_office[".ShortName"] = "sagawa_sales_office";
	$tdatasagawa_sales_office[".OwnerID"] = "";
	$tdatasagawa_sales_office[".OriginalTable"] = "sagawa_sales_office";

//	field labels
$fieldLabelssagawa_sales_office = array();
$fieldToolTipssagawa_sales_office = array();
$pageTitlessagawa_sales_office = array();
$placeHolderssagawa_sales_office = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelssagawa_sales_office["Japanese"] = array();
	$fieldToolTipssagawa_sales_office["Japanese"] = array();
	$placeHolderssagawa_sales_office["Japanese"] = array();
	$pageTitlessagawa_sales_office["Japanese"] = array();
	$fieldLabelssagawa_sales_office["Japanese"]["id"] = "Id";
	$fieldToolTipssagawa_sales_office["Japanese"]["id"] = "";
	$placeHolderssagawa_sales_office["Japanese"]["id"] = "";
	$fieldLabelssagawa_sales_office["Japanese"]["city"] = "都道府県";
	$fieldToolTipssagawa_sales_office["Japanese"]["city"] = "";
	$placeHolderssagawa_sales_office["Japanese"]["city"] = "";
	$fieldLabelssagawa_sales_office["Japanese"]["town"] = "市区町村";
	$fieldToolTipssagawa_sales_office["Japanese"]["town"] = "";
	$placeHolderssagawa_sales_office["Japanese"]["town"] = "";
	$fieldLabelssagawa_sales_office["Japanese"]["shop"] = "担当営業所";
	$fieldToolTipssagawa_sales_office["Japanese"]["shop"] = "";
	$placeHolderssagawa_sales_office["Japanese"]["shop"] = "";
	$fieldLabelssagawa_sales_office["Japanese"]["shop_number"] = "営業所番号";
	$fieldToolTipssagawa_sales_office["Japanese"]["shop_number"] = "";
	$placeHolderssagawa_sales_office["Japanese"]["shop_number"] = "";
	$fieldLabelssagawa_sales_office["Japanese"]["address"] = "住所";
	$fieldToolTipssagawa_sales_office["Japanese"]["address"] = "";
	$placeHolderssagawa_sales_office["Japanese"]["address"] = "";
	$fieldLabelssagawa_sales_office["Japanese"]["tel"] = "集荷専用電話番号";
	$fieldToolTipssagawa_sales_office["Japanese"]["tel"] = "";
	$placeHolderssagawa_sales_office["Japanese"]["tel"] = "";
	$fieldLabelssagawa_sales_office["Japanese"]["tel_contacts"] = "お問い合わせ電話番号";
	$fieldToolTipssagawa_sales_office["Japanese"]["tel_contacts"] = "";
	$placeHolderssagawa_sales_office["Japanese"]["tel_contacts"] = "";
	$fieldLabelssagawa_sales_office["Japanese"]["name2"] = "Name2";
	$fieldToolTipssagawa_sales_office["Japanese"]["name2"] = "";
	$placeHolderssagawa_sales_office["Japanese"]["name2"] = "";
	$fieldLabelssagawa_sales_office["Japanese"]["create_at"] = "登録日";
	$fieldToolTipssagawa_sales_office["Japanese"]["create_at"] = "";
	$placeHolderssagawa_sales_office["Japanese"]["create_at"] = "";
	$fieldLabelssagawa_sales_office["Japanese"]["update_at"] = "更新日";
	$fieldToolTipssagawa_sales_office["Japanese"]["update_at"] = "";
	$placeHolderssagawa_sales_office["Japanese"]["update_at"] = "";
	$fieldLabelssagawa_sales_office["Japanese"]["created_by"] = "登録者";
	$fieldToolTipssagawa_sales_office["Japanese"]["created_by"] = "";
	$placeHolderssagawa_sales_office["Japanese"]["created_by"] = "";
	$fieldLabelssagawa_sales_office["Japanese"]["updated_by"] = "更新者";
	$fieldToolTipssagawa_sales_office["Japanese"]["updated_by"] = "";
	$placeHolderssagawa_sales_office["Japanese"]["updated_by"] = "";
	if (count($fieldToolTipssagawa_sales_office["Japanese"]))
		$tdatasagawa_sales_office[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelssagawa_sales_office[""] = array();
	$fieldToolTipssagawa_sales_office[""] = array();
	$placeHolderssagawa_sales_office[""] = array();
	$pageTitlessagawa_sales_office[""] = array();
	if (count($fieldToolTipssagawa_sales_office[""]))
		$tdatasagawa_sales_office[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelssagawa_sales_office["English"] = array();
	$fieldToolTipssagawa_sales_office["English"] = array();
	$placeHolderssagawa_sales_office["English"] = array();
	$pageTitlessagawa_sales_office["English"] = array();
	if (count($fieldToolTipssagawa_sales_office["English"]))
		$tdatasagawa_sales_office[".isUseToolTips"] = true;
}


	$tdatasagawa_sales_office[".NCSearch"] = true;



$tdatasagawa_sales_office[".shortTableName"] = "sagawa_sales_office";
$tdatasagawa_sales_office[".nSecOptions"] = 0;
$tdatasagawa_sales_office[".recsPerRowPrint"] = 1;
$tdatasagawa_sales_office[".mainTableOwnerID"] = "";
$tdatasagawa_sales_office[".moveNext"] = 1;
$tdatasagawa_sales_office[".entityType"] = 0;

$tdatasagawa_sales_office[".strOriginalTableName"] = "sagawa_sales_office";

	



$tdatasagawa_sales_office[".showAddInPopup"] = false;

$tdatasagawa_sales_office[".showEditInPopup"] = false;

$tdatasagawa_sales_office[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatasagawa_sales_office[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatasagawa_sales_office[".fieldsForRegister"] = array();

$tdatasagawa_sales_office[".listAjax"] = false;

	$tdatasagawa_sales_office[".audit"] = false;

	$tdatasagawa_sales_office[".locking"] = false;

$tdatasagawa_sales_office[".edit"] = true;
$tdatasagawa_sales_office[".afterEditAction"] = 1;
$tdatasagawa_sales_office[".closePopupAfterEdit"] = 1;
$tdatasagawa_sales_office[".afterEditActionDetTable"] = "";

$tdatasagawa_sales_office[".add"] = true;
$tdatasagawa_sales_office[".afterAddAction"] = 1;
$tdatasagawa_sales_office[".closePopupAfterAdd"] = 1;
$tdatasagawa_sales_office[".afterAddActionDetTable"] = "";

$tdatasagawa_sales_office[".list"] = true;

$tdatasagawa_sales_office[".inlineEdit"] = true;

$tdatasagawa_sales_office[".updateSelected"] = true;

$tdatasagawa_sales_office[".reorderRecordsByHeader"] = true;

$tdatasagawa_sales_office[".strClickActionJSON"] = "{\"fields\":{\"address\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"city\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"id\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"name2\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"shop\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"shop_number\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"tel\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"tel_contacts\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"town\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}}},\"row\":{\"action\":\"grid\",\"codeData\":{},\"gridData\":{\"action\":\"checkbox\",\"table\":null},\"openData\":{\"how\":\"goto\",\"page\":\"view\",\"table\":null,\"url\":\"\"}}}";


$tdatasagawa_sales_office[".inlineAdd"] = true;
$tdatasagawa_sales_office[".copy"] = true;
$tdatasagawa_sales_office[".view"] = true;

$tdatasagawa_sales_office[".import"] = true;

$tdatasagawa_sales_office[".exportTo"] = true;

$tdatasagawa_sales_office[".printFriendly"] = true;

$tdatasagawa_sales_office[".delete"] = true;

$tdatasagawa_sales_office[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatasagawa_sales_office[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatasagawa_sales_office[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatasagawa_sales_office[".searchSaving"] = false;
//

$tdatasagawa_sales_office[".showSearchPanel"] = true;
		$tdatasagawa_sales_office[".flexibleSearch"] = true;

$tdatasagawa_sales_office[".isUseAjaxSuggest"] = true;

$tdatasagawa_sales_office[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatasagawa_sales_office[".ajaxCodeSnippetAdded"] = false;

$tdatasagawa_sales_office[".buttonsAdded"] = false;

$tdatasagawa_sales_office[".addPageEvents"] = false;

// use timepicker for search panel
$tdatasagawa_sales_office[".isUseTimeForSearch"] = false;





$tdatasagawa_sales_office[".allSearchFields"] = array();
$tdatasagawa_sales_office[".filterFields"] = array();
$tdatasagawa_sales_office[".requiredSearchFields"] = array();

$tdatasagawa_sales_office[".allSearchFields"][] = "id";
	$tdatasagawa_sales_office[".allSearchFields"][] = "city";
	$tdatasagawa_sales_office[".allSearchFields"][] = "town";
	$tdatasagawa_sales_office[".allSearchFields"][] = "shop_number";
	$tdatasagawa_sales_office[".allSearchFields"][] = "shop";
	$tdatasagawa_sales_office[".allSearchFields"][] = "address";
	$tdatasagawa_sales_office[".allSearchFields"][] = "tel";
	$tdatasagawa_sales_office[".allSearchFields"][] = "tel_contacts";
	$tdatasagawa_sales_office[".allSearchFields"][] = "created_by";
	$tdatasagawa_sales_office[".allSearchFields"][] = "update_at";
	$tdatasagawa_sales_office[".allSearchFields"][] = "updated_by";
	$tdatasagawa_sales_office[".allSearchFields"][] = "create_at";
	

$tdatasagawa_sales_office[".googleLikeFields"] = array();
$tdatasagawa_sales_office[".googleLikeFields"][] = "id";
$tdatasagawa_sales_office[".googleLikeFields"][] = "town";
$tdatasagawa_sales_office[".googleLikeFields"][] = "address";
$tdatasagawa_sales_office[".googleLikeFields"][] = "shop";
$tdatasagawa_sales_office[".googleLikeFields"][] = "shop_number";
$tdatasagawa_sales_office[".googleLikeFields"][] = "tel";
$tdatasagawa_sales_office[".googleLikeFields"][] = "tel_contacts";
$tdatasagawa_sales_office[".googleLikeFields"][] = "city";
$tdatasagawa_sales_office[".googleLikeFields"][] = "create_at";
$tdatasagawa_sales_office[".googleLikeFields"][] = "update_at";
$tdatasagawa_sales_office[".googleLikeFields"][] = "created_by";
$tdatasagawa_sales_office[".googleLikeFields"][] = "updated_by";

$tdatasagawa_sales_office[".panelSearchFields"] = array();
$tdatasagawa_sales_office[".searchPanelOptions"] = array();
$tdatasagawa_sales_office[".panelSearchFields"][] = "city";
	$tdatasagawa_sales_office[".panelSearchFields"][] = "town";
	$tdatasagawa_sales_office[".panelSearchFields"][] = "shop_number";
	$tdatasagawa_sales_office[".panelSearchFields"][] = "shop";
	$tdatasagawa_sales_office[".panelSearchFields"][] = "address";
	$tdatasagawa_sales_office[".panelSearchFields"][] = "tel";
	$tdatasagawa_sales_office[".panelSearchFields"][] = "tel_contacts";
	
$tdatasagawa_sales_office[".advSearchFields"] = array();
$tdatasagawa_sales_office[".advSearchFields"][] = "id";
$tdatasagawa_sales_office[".advSearchFields"][] = "city";
$tdatasagawa_sales_office[".advSearchFields"][] = "town";
$tdatasagawa_sales_office[".advSearchFields"][] = "shop_number";
$tdatasagawa_sales_office[".advSearchFields"][] = "shop";
$tdatasagawa_sales_office[".advSearchFields"][] = "address";
$tdatasagawa_sales_office[".advSearchFields"][] = "tel";
$tdatasagawa_sales_office[".advSearchFields"][] = "tel_contacts";
$tdatasagawa_sales_office[".advSearchFields"][] = "created_by";
$tdatasagawa_sales_office[".advSearchFields"][] = "update_at";
$tdatasagawa_sales_office[".advSearchFields"][] = "updated_by";
$tdatasagawa_sales_office[".advSearchFields"][] = "create_at";

$tdatasagawa_sales_office[".tableType"] = "list";

$tdatasagawa_sales_office[".printerPageOrientation"] = 0;
$tdatasagawa_sales_office[".nPrinterPageScale"] = 100;

$tdatasagawa_sales_office[".nPrinterSplitRecords"] = 40;

$tdatasagawa_sales_office[".nPrinterPDFSplitRecords"] = 40;



$tdatasagawa_sales_office[".geocodingEnabled"] = false;





$tdatasagawa_sales_office[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatasagawa_sales_office[".pageSize"] = 50;

$tdatasagawa_sales_office[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `id` DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatasagawa_sales_office[".strOrderBy"] = $tstrOrderBy;

$tdatasagawa_sales_office[".orderindexes"] = array();
$tdatasagawa_sales_office[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "`id`");

$tdatasagawa_sales_office[".sqlHead"] = "SELECT `id`,  `name2`,  `town`,  `address`,  `shop`,  `shop_number`,  `tel`,  `tel_contacts`,  `city`,  `create_at`,  `update_at`,  `created_by`,  `updated_by`";
$tdatasagawa_sales_office[".sqlFrom"] = "FROM `sagawa_sales_office`";
$tdatasagawa_sales_office[".sqlWhereExpr"] = "(`tel` != \"\")";
$tdatasagawa_sales_office[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasagawa_sales_office[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasagawa_sales_office[".arrGroupsPerPage"] = $arrGPP;

$tdatasagawa_sales_office[".highlightSearchResults"] = true;

$tableKeyssagawa_sales_office = array();
$tableKeyssagawa_sales_office[] = "id";
$tdatasagawa_sales_office[".Keys"] = $tableKeyssagawa_sales_office;

$tdatasagawa_sales_office[".listFields"] = array();
$tdatasagawa_sales_office[".listFields"][] = "id";
$tdatasagawa_sales_office[".listFields"][] = "city";
$tdatasagawa_sales_office[".listFields"][] = "town";
$tdatasagawa_sales_office[".listFields"][] = "shop_number";
$tdatasagawa_sales_office[".listFields"][] = "shop";
$tdatasagawa_sales_office[".listFields"][] = "address";
$tdatasagawa_sales_office[".listFields"][] = "tel";
$tdatasagawa_sales_office[".listFields"][] = "tel_contacts";
$tdatasagawa_sales_office[".listFields"][] = "created_by";
$tdatasagawa_sales_office[".listFields"][] = "create_at";
$tdatasagawa_sales_office[".listFields"][] = "updated_by";
$tdatasagawa_sales_office[".listFields"][] = "update_at";

$tdatasagawa_sales_office[".hideMobileList"] = array();


$tdatasagawa_sales_office[".viewFields"] = array();
$tdatasagawa_sales_office[".viewFields"][] = "id";
$tdatasagawa_sales_office[".viewFields"][] = "city";
$tdatasagawa_sales_office[".viewFields"][] = "town";
$tdatasagawa_sales_office[".viewFields"][] = "shop_number";
$tdatasagawa_sales_office[".viewFields"][] = "shop";
$tdatasagawa_sales_office[".viewFields"][] = "address";
$tdatasagawa_sales_office[".viewFields"][] = "tel";
$tdatasagawa_sales_office[".viewFields"][] = "tel_contacts";
$tdatasagawa_sales_office[".viewFields"][] = "created_by";
$tdatasagawa_sales_office[".viewFields"][] = "update_at";
$tdatasagawa_sales_office[".viewFields"][] = "updated_by";
$tdatasagawa_sales_office[".viewFields"][] = "create_at";

$tdatasagawa_sales_office[".addFields"] = array();
$tdatasagawa_sales_office[".addFields"][] = "city";
$tdatasagawa_sales_office[".addFields"][] = "town";
$tdatasagawa_sales_office[".addFields"][] = "shop_number";
$tdatasagawa_sales_office[".addFields"][] = "shop";
$tdatasagawa_sales_office[".addFields"][] = "address";
$tdatasagawa_sales_office[".addFields"][] = "tel";
$tdatasagawa_sales_office[".addFields"][] = "tel_contacts";
$tdatasagawa_sales_office[".addFields"][] = "created_by";
$tdatasagawa_sales_office[".addFields"][] = "update_at";
$tdatasagawa_sales_office[".addFields"][] = "updated_by";
$tdatasagawa_sales_office[".addFields"][] = "create_at";

$tdatasagawa_sales_office[".masterListFields"] = array();
$tdatasagawa_sales_office[".masterListFields"][] = "name2";
$tdatasagawa_sales_office[".masterListFields"][] = "id";
$tdatasagawa_sales_office[".masterListFields"][] = "city";
$tdatasagawa_sales_office[".masterListFields"][] = "town";
$tdatasagawa_sales_office[".masterListFields"][] = "shop_number";
$tdatasagawa_sales_office[".masterListFields"][] = "shop";
$tdatasagawa_sales_office[".masterListFields"][] = "address";
$tdatasagawa_sales_office[".masterListFields"][] = "tel";
$tdatasagawa_sales_office[".masterListFields"][] = "tel_contacts";
$tdatasagawa_sales_office[".masterListFields"][] = "created_by";
$tdatasagawa_sales_office[".masterListFields"][] = "update_at";
$tdatasagawa_sales_office[".masterListFields"][] = "updated_by";
$tdatasagawa_sales_office[".masterListFields"][] = "create_at";

$tdatasagawa_sales_office[".inlineAddFields"] = array();
$tdatasagawa_sales_office[".inlineAddFields"][] = "city";
$tdatasagawa_sales_office[".inlineAddFields"][] = "town";
$tdatasagawa_sales_office[".inlineAddFields"][] = "shop_number";
$tdatasagawa_sales_office[".inlineAddFields"][] = "shop";
$tdatasagawa_sales_office[".inlineAddFields"][] = "address";
$tdatasagawa_sales_office[".inlineAddFields"][] = "tel";
$tdatasagawa_sales_office[".inlineAddFields"][] = "tel_contacts";
$tdatasagawa_sales_office[".inlineAddFields"][] = "created_by";
$tdatasagawa_sales_office[".inlineAddFields"][] = "create_at";
$tdatasagawa_sales_office[".inlineAddFields"][] = "updated_by";
$tdatasagawa_sales_office[".inlineAddFields"][] = "update_at";

$tdatasagawa_sales_office[".editFields"] = array();
$tdatasagawa_sales_office[".editFields"][] = "city";
$tdatasagawa_sales_office[".editFields"][] = "town";
$tdatasagawa_sales_office[".editFields"][] = "shop_number";
$tdatasagawa_sales_office[".editFields"][] = "shop";
$tdatasagawa_sales_office[".editFields"][] = "address";
$tdatasagawa_sales_office[".editFields"][] = "tel";
$tdatasagawa_sales_office[".editFields"][] = "tel_contacts";
$tdatasagawa_sales_office[".editFields"][] = "created_by";
$tdatasagawa_sales_office[".editFields"][] = "update_at";
$tdatasagawa_sales_office[".editFields"][] = "updated_by";
$tdatasagawa_sales_office[".editFields"][] = "create_at";

$tdatasagawa_sales_office[".inlineEditFields"] = array();
$tdatasagawa_sales_office[".inlineEditFields"][] = "city";
$tdatasagawa_sales_office[".inlineEditFields"][] = "town";
$tdatasagawa_sales_office[".inlineEditFields"][] = "shop_number";
$tdatasagawa_sales_office[".inlineEditFields"][] = "shop";
$tdatasagawa_sales_office[".inlineEditFields"][] = "address";
$tdatasagawa_sales_office[".inlineEditFields"][] = "tel";
$tdatasagawa_sales_office[".inlineEditFields"][] = "tel_contacts";
$tdatasagawa_sales_office[".inlineEditFields"][] = "created_by";
$tdatasagawa_sales_office[".inlineEditFields"][] = "create_at";
$tdatasagawa_sales_office[".inlineEditFields"][] = "updated_by";
$tdatasagawa_sales_office[".inlineEditFields"][] = "update_at";

$tdatasagawa_sales_office[".updateSelectedFields"] = array();
$tdatasagawa_sales_office[".updateSelectedFields"][] = "city";
$tdatasagawa_sales_office[".updateSelectedFields"][] = "town";
$tdatasagawa_sales_office[".updateSelectedFields"][] = "shop_number";
$tdatasagawa_sales_office[".updateSelectedFields"][] = "shop";
$tdatasagawa_sales_office[".updateSelectedFields"][] = "address";
$tdatasagawa_sales_office[".updateSelectedFields"][] = "tel";
$tdatasagawa_sales_office[".updateSelectedFields"][] = "tel_contacts";


$tdatasagawa_sales_office[".exportFields"] = array();
$tdatasagawa_sales_office[".exportFields"][] = "id";
$tdatasagawa_sales_office[".exportFields"][] = "city";
$tdatasagawa_sales_office[".exportFields"][] = "town";
$tdatasagawa_sales_office[".exportFields"][] = "shop_number";
$tdatasagawa_sales_office[".exportFields"][] = "shop";
$tdatasagawa_sales_office[".exportFields"][] = "address";
$tdatasagawa_sales_office[".exportFields"][] = "tel";
$tdatasagawa_sales_office[".exportFields"][] = "tel_contacts";
$tdatasagawa_sales_office[".exportFields"][] = "created_by";
$tdatasagawa_sales_office[".exportFields"][] = "update_at";
$tdatasagawa_sales_office[".exportFields"][] = "updated_by";
$tdatasagawa_sales_office[".exportFields"][] = "create_at";

$tdatasagawa_sales_office[".importFields"] = array();
$tdatasagawa_sales_office[".importFields"][] = "id";
$tdatasagawa_sales_office[".importFields"][] = "town";
$tdatasagawa_sales_office[".importFields"][] = "address";
$tdatasagawa_sales_office[".importFields"][] = "shop";
$tdatasagawa_sales_office[".importFields"][] = "shop_number";
$tdatasagawa_sales_office[".importFields"][] = "tel";
$tdatasagawa_sales_office[".importFields"][] = "tel_contacts";
$tdatasagawa_sales_office[".importFields"][] = "city";
$tdatasagawa_sales_office[".importFields"][] = "create_at";
$tdatasagawa_sales_office[".importFields"][] = "update_at";
$tdatasagawa_sales_office[".importFields"][] = "created_by";
$tdatasagawa_sales_office[".importFields"][] = "updated_by";

$tdatasagawa_sales_office[".printFields"] = array();
$tdatasagawa_sales_office[".printFields"][] = "id";
$tdatasagawa_sales_office[".printFields"][] = "city";
$tdatasagawa_sales_office[".printFields"][] = "town";
$tdatasagawa_sales_office[".printFields"][] = "shop_number";
$tdatasagawa_sales_office[".printFields"][] = "shop";
$tdatasagawa_sales_office[".printFields"][] = "address";
$tdatasagawa_sales_office[".printFields"][] = "tel";
$tdatasagawa_sales_office[".printFields"][] = "tel_contacts";
$tdatasagawa_sales_office[".printFields"][] = "created_by";
$tdatasagawa_sales_office[".printFields"][] = "update_at";
$tdatasagawa_sales_office[".printFields"][] = "updated_by";
$tdatasagawa_sales_office[".printFields"][] = "create_at";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "sagawa_sales_office";
	$fdata["Label"] = GetFieldLabel("sagawa_sales_office","id");
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




	$tdatasagawa_sales_office["id"] = $fdata;
//	name2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name2";
	$fdata["GoodName"] = "name2";
	$fdata["ownerTable"] = "sagawa_sales_office";
	$fdata["Label"] = GetFieldLabel("sagawa_sales_office","name2");
	$fdata["FieldType"] = 201;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "name2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`name2`";

	
	
			
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








	$tdatasagawa_sales_office["name2"] = $fdata;
//	town
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "town";
	$fdata["GoodName"] = "town";
	$fdata["ownerTable"] = "sagawa_sales_office";
	$fdata["Label"] = GetFieldLabel("sagawa_sales_office","town");
	$fdata["FieldType"] = 201;

	
	
	
			
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

		$fdata["strField"] = "town";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`town`";

	
	
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




	$tdatasagawa_sales_office["town"] = $fdata;
//	address
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "address";
	$fdata["GoodName"] = "address";
	$fdata["ownerTable"] = "sagawa_sales_office";
	$fdata["Label"] = GetFieldLabel("sagawa_sales_office","address");
	$fdata["FieldType"] = 201;

	
	
	
			
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

		$fdata["strField"] = "address";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`address`";

	
	
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




	$tdatasagawa_sales_office["address"] = $fdata;
//	shop
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "shop";
	$fdata["GoodName"] = "shop";
	$fdata["ownerTable"] = "sagawa_sales_office";
	$fdata["Label"] = GetFieldLabel("sagawa_sales_office","shop");
	$fdata["FieldType"] = 201;

	
	
	
			
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

		$fdata["strField"] = "shop";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shop`";

	
	
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




	$tdatasagawa_sales_office["shop"] = $fdata;
//	shop_number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "shop_number";
	$fdata["GoodName"] = "shop_number";
	$fdata["ownerTable"] = "sagawa_sales_office";
	$fdata["Label"] = GetFieldLabel("sagawa_sales_office","shop_number");
	$fdata["FieldType"] = 201;

	
	
	
			
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

		$fdata["strField"] = "shop_number";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shop_number`";

	
	
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




	$tdatasagawa_sales_office["shop_number"] = $fdata;
//	tel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "tel";
	$fdata["GoodName"] = "tel";
	$fdata["ownerTable"] = "sagawa_sales_office";
	$fdata["Label"] = GetFieldLabel("sagawa_sales_office","tel");
	$fdata["FieldType"] = 201;

	
	
	
			
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

		$fdata["strField"] = "tel";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`tel`";

	
	
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




	$tdatasagawa_sales_office["tel"] = $fdata;
//	tel_contacts
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "tel_contacts";
	$fdata["GoodName"] = "tel_contacts";
	$fdata["ownerTable"] = "sagawa_sales_office";
	$fdata["Label"] = GetFieldLabel("sagawa_sales_office","tel_contacts");
	$fdata["FieldType"] = 201;

	
	
	
			
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

		$fdata["strField"] = "tel_contacts";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`tel_contacts`";

	
	
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
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatasagawa_sales_office["tel_contacts"] = $fdata;
//	city
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "city";
	$fdata["GoodName"] = "city";
	$fdata["ownerTable"] = "sagawa_sales_office";
	$fdata["Label"] = GetFieldLabel("sagawa_sales_office","city");
	$fdata["FieldType"] = 201;

	
	
	
			
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

		$fdata["strField"] = "city";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`city`";

	
	
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




	$tdatasagawa_sales_office["city"] = $fdata;
//	create_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "create_at";
	$fdata["GoodName"] = "create_at";
	$fdata["ownerTable"] = "sagawa_sales_office";
	$fdata["Label"] = GetFieldLabel("sagawa_sales_office","create_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

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




	$tdatasagawa_sales_office["create_at"] = $fdata;
//	update_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "update_at";
	$fdata["GoodName"] = "update_at";
	$fdata["ownerTable"] = "sagawa_sales_office";
	$fdata["Label"] = GetFieldLabel("sagawa_sales_office","update_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

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

	
	
		$edata["DateEditType"] = 11;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
		$edata["autoUpdatable"] = true;

	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdatasagawa_sales_office["update_at"] = $fdata;
//	created_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "created_by";
	$fdata["GoodName"] = "created_by";
	$fdata["ownerTable"] = "sagawa_sales_office";
	$fdata["Label"] = GetFieldLabel("sagawa_sales_office","created_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

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




	$tdatasagawa_sales_office["created_by"] = $fdata;
//	updated_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "updated_by";
	$fdata["GoodName"] = "updated_by";
	$fdata["ownerTable"] = "sagawa_sales_office";
	$fdata["Label"] = GetFieldLabel("sagawa_sales_office","updated_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

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
	
		$edata["autoUpdatable"] = true;

	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatasagawa_sales_office["updated_by"] = $fdata;


$tables_data["sagawa_sales_office"]=&$tdatasagawa_sales_office;
$field_labels["sagawa_sales_office"] = &$fieldLabelssagawa_sales_office;
$fieldToolTips["sagawa_sales_office"] = &$fieldToolTipssagawa_sales_office;
$placeHolders["sagawa_sales_office"] = &$placeHolderssagawa_sales_office;
$page_titles["sagawa_sales_office"] = &$pageTitlessagawa_sales_office;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["sagawa_sales_office"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["sagawa_sales_office"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_sagawa_sales_office()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  `name2`,  `town`,  `address`,  `shop`,  `shop_number`,  `tel`,  `tel_contacts`,  `city`,  `create_at`,  `update_at`,  `created_by`,  `updated_by`";
$proto0["m_strFrom"] = "FROM `sagawa_sales_office`";
$proto0["m_strWhere"] = "(`tel` != \"\")";
$proto0["m_strOrderBy"] = "ORDER BY `id` DESC";
$proto0["m_strTail"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "`tel` != \"\"";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "tel",
	"m_strTable" => "sagawa_sales_office",
	"m_srcTableName" => "sagawa_sales_office"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "!= \"\"";
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
	"m_strTable" => "sagawa_sales_office",
	"m_srcTableName" => "sagawa_sales_office"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "sagawa_sales_office";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name2",
	"m_strTable" => "sagawa_sales_office",
	"m_srcTableName" => "sagawa_sales_office"
));

$proto8["m_sql"] = "`name2`";
$proto8["m_srcTableName"] = "sagawa_sales_office";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "town",
	"m_strTable" => "sagawa_sales_office",
	"m_srcTableName" => "sagawa_sales_office"
));

$proto10["m_sql"] = "`town`";
$proto10["m_srcTableName"] = "sagawa_sales_office";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "address",
	"m_strTable" => "sagawa_sales_office",
	"m_srcTableName" => "sagawa_sales_office"
));

$proto12["m_sql"] = "`address`";
$proto12["m_srcTableName"] = "sagawa_sales_office";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "shop",
	"m_strTable" => "sagawa_sales_office",
	"m_srcTableName" => "sagawa_sales_office"
));

$proto14["m_sql"] = "`shop`";
$proto14["m_srcTableName"] = "sagawa_sales_office";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "shop_number",
	"m_strTable" => "sagawa_sales_office",
	"m_srcTableName" => "sagawa_sales_office"
));

$proto16["m_sql"] = "`shop_number`";
$proto16["m_srcTableName"] = "sagawa_sales_office";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "tel",
	"m_strTable" => "sagawa_sales_office",
	"m_srcTableName" => "sagawa_sales_office"
));

$proto18["m_sql"] = "`tel`";
$proto18["m_srcTableName"] = "sagawa_sales_office";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "tel_contacts",
	"m_strTable" => "sagawa_sales_office",
	"m_srcTableName" => "sagawa_sales_office"
));

$proto20["m_sql"] = "`tel_contacts`";
$proto20["m_srcTableName"] = "sagawa_sales_office";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "city",
	"m_strTable" => "sagawa_sales_office",
	"m_srcTableName" => "sagawa_sales_office"
));

$proto22["m_sql"] = "`city`";
$proto22["m_srcTableName"] = "sagawa_sales_office";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "create_at",
	"m_strTable" => "sagawa_sales_office",
	"m_srcTableName" => "sagawa_sales_office"
));

$proto24["m_sql"] = "`create_at`";
$proto24["m_srcTableName"] = "sagawa_sales_office";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "update_at",
	"m_strTable" => "sagawa_sales_office",
	"m_srcTableName" => "sagawa_sales_office"
));

$proto26["m_sql"] = "`update_at`";
$proto26["m_srcTableName"] = "sagawa_sales_office";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "created_by",
	"m_strTable" => "sagawa_sales_office",
	"m_srcTableName" => "sagawa_sales_office"
));

$proto28["m_sql"] = "`created_by`";
$proto28["m_srcTableName"] = "sagawa_sales_office";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by",
	"m_strTable" => "sagawa_sales_office",
	"m_srcTableName" => "sagawa_sales_office"
));

$proto30["m_sql"] = "`updated_by`";
$proto30["m_srcTableName"] = "sagawa_sales_office";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto32=array();
$proto32["m_link"] = "SQLL_MAIN";
			$proto33=array();
$proto33["m_strName"] = "sagawa_sales_office";
$proto33["m_srcTableName"] = "sagawa_sales_office";
$proto33["m_columns"] = array();
$proto33["m_columns"][] = "id";
$proto33["m_columns"][] = "name2";
$proto33["m_columns"][] = "town";
$proto33["m_columns"][] = "address";
$proto33["m_columns"][] = "shop";
$proto33["m_columns"][] = "shop_number";
$proto33["m_columns"][] = "tel";
$proto33["m_columns"][] = "tel_contacts";
$proto33["m_columns"][] = "city";
$proto33["m_columns"][] = "update_at";
$proto33["m_columns"][] = "create_at";
$proto33["m_columns"][] = "created_by";
$proto33["m_columns"][] = "updated_by";
$obj = new SQLTable($proto33);

$proto32["m_table"] = $obj;
$proto32["m_sql"] = "`sagawa_sales_office`";
$proto32["m_alias"] = "";
$proto32["m_srcTableName"] = "sagawa_sales_office";
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
	"m_strName" => "id",
	"m_strTable" => "sagawa_sales_office",
	"m_srcTableName" => "sagawa_sales_office"
));

$proto36["m_column"]=$obj;
$proto36["m_bAsc"] = 0;
$proto36["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto36);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="sagawa_sales_office";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_sagawa_sales_office = createSqlQuery_sagawa_sales_office();


	
		;

													

$tdatasagawa_sales_office[".sqlquery"] = $queryData_sagawa_sales_office;

$tableEvents["sagawa_sales_office"] = new eventsBase;
$tdatasagawa_sales_office[".hasEvents"] = false;

?>