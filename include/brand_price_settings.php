<?php
require_once(getabspath("classes/cipherer.php"));




$tdatabrand_price = array();
	$tdatabrand_price[".truncateText"] = true;
	$tdatabrand_price[".NumberOfChars"] = 80;
	$tdatabrand_price[".ShortName"] = "brand_price";
	$tdatabrand_price[".OwnerID"] = "";
	$tdatabrand_price[".OriginalTable"] = "brand_price";

//	field labels
$fieldLabelsbrand_price = array();
$fieldToolTipsbrand_price = array();
$pageTitlesbrand_price = array();
$placeHoldersbrand_price = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsbrand_price["Japanese"] = array();
	$fieldToolTipsbrand_price["Japanese"] = array();
	$placeHoldersbrand_price["Japanese"] = array();
	$pageTitlesbrand_price["Japanese"] = array();
	$fieldLabelsbrand_price["Japanese"]["id"] = "Id";
	$fieldToolTipsbrand_price["Japanese"]["id"] = "";
	$placeHoldersbrand_price["Japanese"]["id"] = "";
	$fieldLabelsbrand_price["Japanese"]["category"] = "カテゴリー";
	$fieldToolTipsbrand_price["Japanese"]["category"] = "";
	$placeHoldersbrand_price["Japanese"]["category"] = "";
	$fieldLabelsbrand_price["Japanese"]["line_category"] = "ラインカテゴリー";
	$fieldToolTipsbrand_price["Japanese"]["line_category"] = "";
	$placeHoldersbrand_price["Japanese"]["line_category"] = "";
	$fieldLabelsbrand_price["Japanese"]["line"] = "ライン";
	$fieldToolTipsbrand_price["Japanese"]["line"] = "";
	$placeHoldersbrand_price["Japanese"]["line"] = "";
	$fieldLabelsbrand_price["Japanese"]["item_name"] = "アイテム名";
	$fieldToolTipsbrand_price["Japanese"]["item_name"] = "";
	$placeHoldersbrand_price["Japanese"]["item_name"] = "";
	$fieldLabelsbrand_price["Japanese"]["kataban"] = "型番";
	$fieldToolTipsbrand_price["Japanese"]["kataban"] = "";
	$placeHoldersbrand_price["Japanese"]["kataban"] = "";
	$fieldLabelsbrand_price["Japanese"]["list_price"] = "定価";
	$fieldToolTipsbrand_price["Japanese"]["list_price"] = "";
	$placeHoldersbrand_price["Japanese"]["list_price"] = "";
	$fieldLabelsbrand_price["Japanese"]["width"] = "幅";
	$fieldToolTipsbrand_price["Japanese"]["width"] = "";
	$placeHoldersbrand_price["Japanese"]["width"] = "";
	$fieldLabelsbrand_price["Japanese"]["height"] = "高さ";
	$fieldToolTipsbrand_price["Japanese"]["height"] = "";
	$placeHoldersbrand_price["Japanese"]["height"] = "";
	$fieldLabelsbrand_price["Japanese"]["depth"] = "奥行";
	$fieldToolTipsbrand_price["Japanese"]["depth"] = "";
	$placeHoldersbrand_price["Japanese"]["depth"] = "";
	$fieldLabelsbrand_price["Japanese"]["color"] = "カラー";
	$fieldToolTipsbrand_price["Japanese"]["color"] = "";
	$placeHoldersbrand_price["Japanese"]["color"] = "";
	$fieldLabelsbrand_price["Japanese"]["brand_id"] = "ブランドID";
	$fieldToolTipsbrand_price["Japanese"]["brand_id"] = "";
	$placeHoldersbrand_price["Japanese"]["brand_id"] = "";
	if (count($fieldToolTipsbrand_price["Japanese"]))
		$tdatabrand_price[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsbrand_price[""] = array();
	$fieldToolTipsbrand_price[""] = array();
	$placeHoldersbrand_price[""] = array();
	$pageTitlesbrand_price[""] = array();
	$fieldLabelsbrand_price[""]["id"] = "Id";
	$fieldToolTipsbrand_price[""]["id"] = "";
	$placeHoldersbrand_price[""]["id"] = "";
	$fieldLabelsbrand_price[""]["category"] = "Category";
	$fieldToolTipsbrand_price[""]["category"] = "";
	$placeHoldersbrand_price[""]["category"] = "";
	$fieldLabelsbrand_price[""]["line_category"] = "Line Category";
	$fieldToolTipsbrand_price[""]["line_category"] = "";
	$placeHoldersbrand_price[""]["line_category"] = "";
	$fieldLabelsbrand_price[""]["line"] = "Line";
	$fieldToolTipsbrand_price[""]["line"] = "";
	$placeHoldersbrand_price[""]["line"] = "";
	$fieldLabelsbrand_price[""]["item_name"] = "Item Name";
	$fieldToolTipsbrand_price[""]["item_name"] = "";
	$placeHoldersbrand_price[""]["item_name"] = "";
	$fieldLabelsbrand_price[""]["kataban"] = "Kataban";
	$fieldToolTipsbrand_price[""]["kataban"] = "";
	$placeHoldersbrand_price[""]["kataban"] = "";
	$fieldLabelsbrand_price[""]["list_price"] = "List Price";
	$fieldToolTipsbrand_price[""]["list_price"] = "";
	$placeHoldersbrand_price[""]["list_price"] = "";
	$fieldLabelsbrand_price[""]["width"] = "Width";
	$fieldToolTipsbrand_price[""]["width"] = "";
	$placeHoldersbrand_price[""]["width"] = "";
	$fieldLabelsbrand_price[""]["height"] = "Height";
	$fieldToolTipsbrand_price[""]["height"] = "";
	$placeHoldersbrand_price[""]["height"] = "";
	$fieldLabelsbrand_price[""]["depth"] = "Depth";
	$fieldToolTipsbrand_price[""]["depth"] = "";
	$placeHoldersbrand_price[""]["depth"] = "";
	$fieldLabelsbrand_price[""]["color"] = "Color";
	$fieldToolTipsbrand_price[""]["color"] = "";
	$placeHoldersbrand_price[""]["color"] = "";
	$fieldLabelsbrand_price[""]["brand_id"] = "Brand Id";
	$fieldToolTipsbrand_price[""]["brand_id"] = "";
	$placeHoldersbrand_price[""]["brand_id"] = "";
	if (count($fieldToolTipsbrand_price[""]))
		$tdatabrand_price[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsbrand_price["English"] = array();
	$fieldToolTipsbrand_price["English"] = array();
	$placeHoldersbrand_price["English"] = array();
	$pageTitlesbrand_price["English"] = array();
	$fieldLabelsbrand_price["English"]["id"] = "Id";
	$fieldToolTipsbrand_price["English"]["id"] = "";
	$placeHoldersbrand_price["English"]["id"] = "";
	$fieldLabelsbrand_price["English"]["category"] = "Category";
	$fieldToolTipsbrand_price["English"]["category"] = "";
	$placeHoldersbrand_price["English"]["category"] = "";
	$fieldLabelsbrand_price["English"]["line_category"] = "Line Category";
	$fieldToolTipsbrand_price["English"]["line_category"] = "";
	$placeHoldersbrand_price["English"]["line_category"] = "";
	$fieldLabelsbrand_price["English"]["line"] = "Line";
	$fieldToolTipsbrand_price["English"]["line"] = "";
	$placeHoldersbrand_price["English"]["line"] = "";
	$fieldLabelsbrand_price["English"]["item_name"] = "Item Name";
	$fieldToolTipsbrand_price["English"]["item_name"] = "";
	$placeHoldersbrand_price["English"]["item_name"] = "";
	$fieldLabelsbrand_price["English"]["kataban"] = "Kataban";
	$fieldToolTipsbrand_price["English"]["kataban"] = "";
	$placeHoldersbrand_price["English"]["kataban"] = "";
	$fieldLabelsbrand_price["English"]["list_price"] = "List Price";
	$fieldToolTipsbrand_price["English"]["list_price"] = "";
	$placeHoldersbrand_price["English"]["list_price"] = "";
	$fieldLabelsbrand_price["English"]["width"] = "Width";
	$fieldToolTipsbrand_price["English"]["width"] = "";
	$placeHoldersbrand_price["English"]["width"] = "";
	$fieldLabelsbrand_price["English"]["height"] = "Height";
	$fieldToolTipsbrand_price["English"]["height"] = "";
	$placeHoldersbrand_price["English"]["height"] = "";
	$fieldLabelsbrand_price["English"]["depth"] = "Depth";
	$fieldToolTipsbrand_price["English"]["depth"] = "";
	$placeHoldersbrand_price["English"]["depth"] = "";
	$fieldLabelsbrand_price["English"]["color"] = "Color";
	$fieldToolTipsbrand_price["English"]["color"] = "";
	$placeHoldersbrand_price["English"]["color"] = "";
	$fieldLabelsbrand_price["English"]["brand_id"] = "Brand Id";
	$fieldToolTipsbrand_price["English"]["brand_id"] = "";
	$placeHoldersbrand_price["English"]["brand_id"] = "";
	if (count($fieldToolTipsbrand_price["English"]))
		$tdatabrand_price[".isUseToolTips"] = true;
}


	$tdatabrand_price[".NCSearch"] = true;



$tdatabrand_price[".shortTableName"] = "brand_price";
$tdatabrand_price[".nSecOptions"] = 0;
$tdatabrand_price[".recsPerRowPrint"] = 1;
$tdatabrand_price[".mainTableOwnerID"] = "";
$tdatabrand_price[".moveNext"] = 1;
$tdatabrand_price[".entityType"] = 0;

$tdatabrand_price[".strOriginalTableName"] = "brand_price";

	



$tdatabrand_price[".showAddInPopup"] = false;

$tdatabrand_price[".showEditInPopup"] = false;

$tdatabrand_price[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatabrand_price[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatabrand_price[".fieldsForRegister"] = array();

$tdatabrand_price[".listAjax"] = false;

	$tdatabrand_price[".audit"] = true;

	$tdatabrand_price[".locking"] = false;

$tdatabrand_price[".edit"] = true;
$tdatabrand_price[".afterEditAction"] = 1;
$tdatabrand_price[".closePopupAfterEdit"] = 1;
$tdatabrand_price[".afterEditActionDetTable"] = "";

$tdatabrand_price[".add"] = true;
$tdatabrand_price[".afterAddAction"] = 1;
$tdatabrand_price[".closePopupAfterAdd"] = 1;
$tdatabrand_price[".afterAddActionDetTable"] = "";

$tdatabrand_price[".list"] = true;

$tdatabrand_price[".inlineEdit"] = true;


$tdatabrand_price[".reorderRecordsByHeader"] = true;



$tdatabrand_price[".inlineAdd"] = true;
$tdatabrand_price[".view"] = true;

$tdatabrand_price[".import"] = true;

$tdatabrand_price[".exportTo"] = true;

$tdatabrand_price[".printFriendly"] = true;

$tdatabrand_price[".delete"] = true;

$tdatabrand_price[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatabrand_price[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatabrand_price[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatabrand_price[".searchSaving"] = false;
//

$tdatabrand_price[".showSearchPanel"] = true;
		$tdatabrand_price[".flexibleSearch"] = true;

$tdatabrand_price[".isUseAjaxSuggest"] = true;

$tdatabrand_price[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatabrand_price[".ajaxCodeSnippetAdded"] = false;

$tdatabrand_price[".buttonsAdded"] = false;

$tdatabrand_price[".addPageEvents"] = false;

// use timepicker for search panel
$tdatabrand_price[".isUseTimeForSearch"] = false;





$tdatabrand_price[".allSearchFields"] = array();
$tdatabrand_price[".filterFields"] = array();
$tdatabrand_price[".requiredSearchFields"] = array();

$tdatabrand_price[".allSearchFields"][] = "id";
	$tdatabrand_price[".allSearchFields"][] = "category";
	$tdatabrand_price[".allSearchFields"][] = "line_category";
	$tdatabrand_price[".allSearchFields"][] = "line";
	$tdatabrand_price[".allSearchFields"][] = "item_name";
	$tdatabrand_price[".allSearchFields"][] = "kataban";
	$tdatabrand_price[".allSearchFields"][] = "list_price";
	$tdatabrand_price[".allSearchFields"][] = "width";
	$tdatabrand_price[".allSearchFields"][] = "height";
	$tdatabrand_price[".allSearchFields"][] = "depth";
	$tdatabrand_price[".allSearchFields"][] = "color";
	$tdatabrand_price[".allSearchFields"][] = "brand_id";
	

$tdatabrand_price[".googleLikeFields"] = array();
$tdatabrand_price[".googleLikeFields"][] = "id";
$tdatabrand_price[".googleLikeFields"][] = "category";
$tdatabrand_price[".googleLikeFields"][] = "line_category";
$tdatabrand_price[".googleLikeFields"][] = "line";
$tdatabrand_price[".googleLikeFields"][] = "item_name";
$tdatabrand_price[".googleLikeFields"][] = "kataban";
$tdatabrand_price[".googleLikeFields"][] = "list_price";
$tdatabrand_price[".googleLikeFields"][] = "width";
$tdatabrand_price[".googleLikeFields"][] = "height";
$tdatabrand_price[".googleLikeFields"][] = "depth";
$tdatabrand_price[".googleLikeFields"][] = "color";
$tdatabrand_price[".googleLikeFields"][] = "brand_id";


$tdatabrand_price[".advSearchFields"] = array();
$tdatabrand_price[".advSearchFields"][] = "id";
$tdatabrand_price[".advSearchFields"][] = "category";
$tdatabrand_price[".advSearchFields"][] = "line_category";
$tdatabrand_price[".advSearchFields"][] = "line";
$tdatabrand_price[".advSearchFields"][] = "item_name";
$tdatabrand_price[".advSearchFields"][] = "kataban";
$tdatabrand_price[".advSearchFields"][] = "list_price";
$tdatabrand_price[".advSearchFields"][] = "width";
$tdatabrand_price[".advSearchFields"][] = "height";
$tdatabrand_price[".advSearchFields"][] = "depth";
$tdatabrand_price[".advSearchFields"][] = "color";
$tdatabrand_price[".advSearchFields"][] = "brand_id";

$tdatabrand_price[".tableType"] = "list";

$tdatabrand_price[".printerPageOrientation"] = 0;
$tdatabrand_price[".nPrinterPageScale"] = 100;

$tdatabrand_price[".nPrinterSplitRecords"] = 40;

$tdatabrand_price[".nPrinterPDFSplitRecords"] = 40;



$tdatabrand_price[".geocodingEnabled"] = false;





$tdatabrand_price[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatabrand_price[".pageSize"] = 20;

$tdatabrand_price[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatabrand_price[".strOrderBy"] = $tstrOrderBy;

$tdatabrand_price[".orderindexes"] = array();

$tdatabrand_price[".sqlHead"] = "SELECT id,  	category,  	line_category,  	line,  	item_name,  	kataban,  	list_price,  	width,  	height,  	`depth`,  	color,  	brand_id";
$tdatabrand_price[".sqlFrom"] = "FROM brand_price";
$tdatabrand_price[".sqlWhereExpr"] = "";
$tdatabrand_price[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatabrand_price[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatabrand_price[".arrGroupsPerPage"] = $arrGPP;

$tdatabrand_price[".highlightSearchResults"] = true;

$tableKeysbrand_price = array();
$tableKeysbrand_price[] = "id";
$tdatabrand_price[".Keys"] = $tableKeysbrand_price;

$tdatabrand_price[".listFields"] = array();
$tdatabrand_price[".listFields"][] = "id";
$tdatabrand_price[".listFields"][] = "category";
$tdatabrand_price[".listFields"][] = "line_category";
$tdatabrand_price[".listFields"][] = "line";
$tdatabrand_price[".listFields"][] = "item_name";
$tdatabrand_price[".listFields"][] = "kataban";
$tdatabrand_price[".listFields"][] = "list_price";
$tdatabrand_price[".listFields"][] = "width";
$tdatabrand_price[".listFields"][] = "height";
$tdatabrand_price[".listFields"][] = "depth";
$tdatabrand_price[".listFields"][] = "color";
$tdatabrand_price[".listFields"][] = "brand_id";

$tdatabrand_price[".hideMobileList"] = array();


$tdatabrand_price[".viewFields"] = array();
$tdatabrand_price[".viewFields"][] = "id";
$tdatabrand_price[".viewFields"][] = "category";
$tdatabrand_price[".viewFields"][] = "line_category";
$tdatabrand_price[".viewFields"][] = "line";
$tdatabrand_price[".viewFields"][] = "item_name";
$tdatabrand_price[".viewFields"][] = "kataban";
$tdatabrand_price[".viewFields"][] = "list_price";
$tdatabrand_price[".viewFields"][] = "width";
$tdatabrand_price[".viewFields"][] = "height";
$tdatabrand_price[".viewFields"][] = "depth";
$tdatabrand_price[".viewFields"][] = "color";
$tdatabrand_price[".viewFields"][] = "brand_id";

$tdatabrand_price[".addFields"] = array();
$tdatabrand_price[".addFields"][] = "category";
$tdatabrand_price[".addFields"][] = "line_category";
$tdatabrand_price[".addFields"][] = "line";
$tdatabrand_price[".addFields"][] = "item_name";
$tdatabrand_price[".addFields"][] = "kataban";
$tdatabrand_price[".addFields"][] = "list_price";
$tdatabrand_price[".addFields"][] = "width";
$tdatabrand_price[".addFields"][] = "height";
$tdatabrand_price[".addFields"][] = "depth";
$tdatabrand_price[".addFields"][] = "color";
$tdatabrand_price[".addFields"][] = "brand_id";

$tdatabrand_price[".masterListFields"] = array();
$tdatabrand_price[".masterListFields"][] = "id";
$tdatabrand_price[".masterListFields"][] = "category";
$tdatabrand_price[".masterListFields"][] = "line_category";
$tdatabrand_price[".masterListFields"][] = "line";
$tdatabrand_price[".masterListFields"][] = "item_name";
$tdatabrand_price[".masterListFields"][] = "kataban";
$tdatabrand_price[".masterListFields"][] = "list_price";
$tdatabrand_price[".masterListFields"][] = "width";
$tdatabrand_price[".masterListFields"][] = "height";
$tdatabrand_price[".masterListFields"][] = "depth";
$tdatabrand_price[".masterListFields"][] = "color";
$tdatabrand_price[".masterListFields"][] = "brand_id";

$tdatabrand_price[".inlineAddFields"] = array();
$tdatabrand_price[".inlineAddFields"][] = "category";
$tdatabrand_price[".inlineAddFields"][] = "line_category";
$tdatabrand_price[".inlineAddFields"][] = "line";
$tdatabrand_price[".inlineAddFields"][] = "item_name";
$tdatabrand_price[".inlineAddFields"][] = "kataban";
$tdatabrand_price[".inlineAddFields"][] = "list_price";
$tdatabrand_price[".inlineAddFields"][] = "width";
$tdatabrand_price[".inlineAddFields"][] = "height";
$tdatabrand_price[".inlineAddFields"][] = "depth";
$tdatabrand_price[".inlineAddFields"][] = "color";
$tdatabrand_price[".inlineAddFields"][] = "brand_id";

$tdatabrand_price[".editFields"] = array();
$tdatabrand_price[".editFields"][] = "category";
$tdatabrand_price[".editFields"][] = "line_category";
$tdatabrand_price[".editFields"][] = "line";
$tdatabrand_price[".editFields"][] = "item_name";
$tdatabrand_price[".editFields"][] = "kataban";
$tdatabrand_price[".editFields"][] = "list_price";
$tdatabrand_price[".editFields"][] = "width";
$tdatabrand_price[".editFields"][] = "height";
$tdatabrand_price[".editFields"][] = "depth";
$tdatabrand_price[".editFields"][] = "color";
$tdatabrand_price[".editFields"][] = "brand_id";

$tdatabrand_price[".inlineEditFields"] = array();
$tdatabrand_price[".inlineEditFields"][] = "category";
$tdatabrand_price[".inlineEditFields"][] = "line_category";
$tdatabrand_price[".inlineEditFields"][] = "line";
$tdatabrand_price[".inlineEditFields"][] = "item_name";
$tdatabrand_price[".inlineEditFields"][] = "kataban";
$tdatabrand_price[".inlineEditFields"][] = "list_price";
$tdatabrand_price[".inlineEditFields"][] = "width";
$tdatabrand_price[".inlineEditFields"][] = "height";
$tdatabrand_price[".inlineEditFields"][] = "depth";
$tdatabrand_price[".inlineEditFields"][] = "color";
$tdatabrand_price[".inlineEditFields"][] = "brand_id";

$tdatabrand_price[".updateSelectedFields"] = array();
$tdatabrand_price[".updateSelectedFields"][] = "category";
$tdatabrand_price[".updateSelectedFields"][] = "line_category";
$tdatabrand_price[".updateSelectedFields"][] = "line";
$tdatabrand_price[".updateSelectedFields"][] = "item_name";
$tdatabrand_price[".updateSelectedFields"][] = "kataban";
$tdatabrand_price[".updateSelectedFields"][] = "list_price";
$tdatabrand_price[".updateSelectedFields"][] = "width";
$tdatabrand_price[".updateSelectedFields"][] = "height";
$tdatabrand_price[".updateSelectedFields"][] = "depth";
$tdatabrand_price[".updateSelectedFields"][] = "color";
$tdatabrand_price[".updateSelectedFields"][] = "brand_id";


$tdatabrand_price[".exportFields"] = array();
$tdatabrand_price[".exportFields"][] = "id";
$tdatabrand_price[".exportFields"][] = "category";
$tdatabrand_price[".exportFields"][] = "line_category";
$tdatabrand_price[".exportFields"][] = "line";
$tdatabrand_price[".exportFields"][] = "item_name";
$tdatabrand_price[".exportFields"][] = "kataban";
$tdatabrand_price[".exportFields"][] = "list_price";
$tdatabrand_price[".exportFields"][] = "width";
$tdatabrand_price[".exportFields"][] = "height";
$tdatabrand_price[".exportFields"][] = "depth";
$tdatabrand_price[".exportFields"][] = "color";
$tdatabrand_price[".exportFields"][] = "brand_id";

$tdatabrand_price[".importFields"] = array();
$tdatabrand_price[".importFields"][] = "id";
$tdatabrand_price[".importFields"][] = "category";
$tdatabrand_price[".importFields"][] = "line_category";
$tdatabrand_price[".importFields"][] = "line";
$tdatabrand_price[".importFields"][] = "item_name";
$tdatabrand_price[".importFields"][] = "kataban";
$tdatabrand_price[".importFields"][] = "list_price";
$tdatabrand_price[".importFields"][] = "width";
$tdatabrand_price[".importFields"][] = "height";
$tdatabrand_price[".importFields"][] = "depth";
$tdatabrand_price[".importFields"][] = "color";
$tdatabrand_price[".importFields"][] = "brand_id";

$tdatabrand_price[".printFields"] = array();
$tdatabrand_price[".printFields"][] = "id";
$tdatabrand_price[".printFields"][] = "category";
$tdatabrand_price[".printFields"][] = "line_category";
$tdatabrand_price[".printFields"][] = "line";
$tdatabrand_price[".printFields"][] = "item_name";
$tdatabrand_price[".printFields"][] = "kataban";
$tdatabrand_price[".printFields"][] = "list_price";
$tdatabrand_price[".printFields"][] = "width";
$tdatabrand_price[".printFields"][] = "height";
$tdatabrand_price[".printFields"][] = "depth";
$tdatabrand_price[".printFields"][] = "color";
$tdatabrand_price[".printFields"][] = "brand_id";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "brand_price";
	$fdata["Label"] = GetFieldLabel("brand_price","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
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




	$tdatabrand_price["id"] = $fdata;
//	category
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "category";
	$fdata["GoodName"] = "category";
	$fdata["ownerTable"] = "brand_price";
	$fdata["Label"] = GetFieldLabel("brand_price","category");
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

		$fdata["strField"] = "category";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "category";

	
	
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




	$tdatabrand_price["category"] = $fdata;
//	line_category
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "line_category";
	$fdata["GoodName"] = "line_category";
	$fdata["ownerTable"] = "brand_price";
	$fdata["Label"] = GetFieldLabel("brand_price","line_category");
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

		$fdata["strField"] = "line_category";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "line_category";

	
	
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




	$tdatabrand_price["line_category"] = $fdata;
//	line
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "line";
	$fdata["GoodName"] = "line";
	$fdata["ownerTable"] = "brand_price";
	$fdata["Label"] = GetFieldLabel("brand_price","line");
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

		$fdata["strField"] = "line";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "line";

	
	
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




	$tdatabrand_price["line"] = $fdata;
//	item_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "item_name";
	$fdata["GoodName"] = "item_name";
	$fdata["ownerTable"] = "brand_price";
	$fdata["Label"] = GetFieldLabel("brand_price","item_name");
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

		$fdata["strField"] = "item_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "item_name";

	
	
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




	$tdatabrand_price["item_name"] = $fdata;
//	kataban
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "kataban";
	$fdata["GoodName"] = "kataban";
	$fdata["ownerTable"] = "brand_price";
	$fdata["Label"] = GetFieldLabel("brand_price","kataban");
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

		$fdata["strField"] = "kataban";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "kataban";

	
	
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




	$tdatabrand_price["kataban"] = $fdata;
//	list_price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "list_price";
	$fdata["GoodName"] = "list_price";
	$fdata["ownerTable"] = "brand_price";
	$fdata["Label"] = GetFieldLabel("brand_price","list_price");
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

		$fdata["strField"] = "list_price";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "list_price";

	
	
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




	$tdatabrand_price["list_price"] = $fdata;
//	width
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "width";
	$fdata["GoodName"] = "width";
	$fdata["ownerTable"] = "brand_price";
	$fdata["Label"] = GetFieldLabel("brand_price","width");
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

		$fdata["strField"] = "width";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "width";

	
	
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




	$tdatabrand_price["width"] = $fdata;
//	height
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "height";
	$fdata["GoodName"] = "height";
	$fdata["ownerTable"] = "brand_price";
	$fdata["Label"] = GetFieldLabel("brand_price","height");
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

		$fdata["strField"] = "height";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "height";

	
	
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




	$tdatabrand_price["height"] = $fdata;
//	depth
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "depth";
	$fdata["GoodName"] = "depth";
	$fdata["ownerTable"] = "brand_price";
	$fdata["Label"] = GetFieldLabel("brand_price","depth");
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

		$fdata["strField"] = "depth";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`depth`";

	
	
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




	$tdatabrand_price["depth"] = $fdata;
//	color
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "color";
	$fdata["GoodName"] = "color";
	$fdata["ownerTable"] = "brand_price";
	$fdata["Label"] = GetFieldLabel("brand_price","color");
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

		$fdata["strField"] = "color";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "color";

	
	
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




	$tdatabrand_price["color"] = $fdata;
//	brand_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "brand_id";
	$fdata["GoodName"] = "brand_id";
	$fdata["ownerTable"] = "brand_price";
	$fdata["Label"] = GetFieldLabel("brand_price","brand_id");
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

		$fdata["strField"] = "brand_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "brand_id";

	
	
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




	$tdatabrand_price["brand_id"] = $fdata;


$tables_data["brand_price"]=&$tdatabrand_price;
$field_labels["brand_price"] = &$fieldLabelsbrand_price;
$fieldToolTips["brand_price"] = &$fieldToolTipsbrand_price;
$placeHolders["brand_price"] = &$placeHoldersbrand_price;
$page_titles["brand_price"] = &$pageTitlesbrand_price;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["brand_price"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["brand_price"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_brand_price()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	category,  	line_category,  	line,  	item_name,  	kataban,  	list_price,  	width,  	height,  	`depth`,  	color,  	brand_id";
$proto0["m_strFrom"] = "FROM brand_price";
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
	"m_strTable" => "brand_price",
	"m_srcTableName" => "brand_price"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "brand_price";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "category",
	"m_strTable" => "brand_price",
	"m_srcTableName" => "brand_price"
));

$proto8["m_sql"] = "category";
$proto8["m_srcTableName"] = "brand_price";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "line_category",
	"m_strTable" => "brand_price",
	"m_srcTableName" => "brand_price"
));

$proto10["m_sql"] = "line_category";
$proto10["m_srcTableName"] = "brand_price";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "line",
	"m_strTable" => "brand_price",
	"m_srcTableName" => "brand_price"
));

$proto12["m_sql"] = "line";
$proto12["m_srcTableName"] = "brand_price";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "item_name",
	"m_strTable" => "brand_price",
	"m_srcTableName" => "brand_price"
));

$proto14["m_sql"] = "item_name";
$proto14["m_srcTableName"] = "brand_price";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "kataban",
	"m_strTable" => "brand_price",
	"m_srcTableName" => "brand_price"
));

$proto16["m_sql"] = "kataban";
$proto16["m_srcTableName"] = "brand_price";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "list_price",
	"m_strTable" => "brand_price",
	"m_srcTableName" => "brand_price"
));

$proto18["m_sql"] = "list_price";
$proto18["m_srcTableName"] = "brand_price";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "width",
	"m_strTable" => "brand_price",
	"m_srcTableName" => "brand_price"
));

$proto20["m_sql"] = "width";
$proto20["m_srcTableName"] = "brand_price";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "height",
	"m_strTable" => "brand_price",
	"m_srcTableName" => "brand_price"
));

$proto22["m_sql"] = "height";
$proto22["m_srcTableName"] = "brand_price";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "depth",
	"m_strTable" => "brand_price",
	"m_srcTableName" => "brand_price"
));

$proto24["m_sql"] = "`depth`";
$proto24["m_srcTableName"] = "brand_price";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "color",
	"m_strTable" => "brand_price",
	"m_srcTableName" => "brand_price"
));

$proto26["m_sql"] = "color";
$proto26["m_srcTableName"] = "brand_price";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "brand_id",
	"m_strTable" => "brand_price",
	"m_srcTableName" => "brand_price"
));

$proto28["m_sql"] = "brand_id";
$proto28["m_srcTableName"] = "brand_price";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "brand_price";
$proto31["m_srcTableName"] = "brand_price";
$proto31["m_columns"] = array();
$proto31["m_columns"][] = "id";
$proto31["m_columns"][] = "category";
$proto31["m_columns"][] = "line_category";
$proto31["m_columns"][] = "line";
$proto31["m_columns"][] = "item_name";
$proto31["m_columns"][] = "kataban";
$proto31["m_columns"][] = "list_price";
$proto31["m_columns"][] = "width";
$proto31["m_columns"][] = "height";
$proto31["m_columns"][] = "depth";
$proto31["m_columns"][] = "color";
$proto31["m_columns"][] = "brand_id";
$obj = new SQLTable($proto31);

$proto30["m_table"] = $obj;
$proto30["m_sql"] = "brand_price";
$proto30["m_alias"] = "";
$proto30["m_srcTableName"] = "brand_price";
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
$proto0["m_srcTableName"]="brand_price";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_brand_price = createSqlQuery_brand_price();


	
		;

												

$tdatabrand_price[".sqlquery"] = $queryData_brand_price;

$tableEvents["brand_price"] = new eventsBase;
$tdatabrand_price[".hasEvents"] = false;

?>