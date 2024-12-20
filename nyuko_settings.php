<?php
require_once(getabspath("classes/cipherer.php"));




$tdatanyuko = array();
	$tdatanyuko[".truncateText"] = true;
	$tdatanyuko[".NumberOfChars"] = 80;
	$tdatanyuko[".ShortName"] = "nyuko";
	$tdatanyuko[".OwnerID"] = "";
	$tdatanyuko[".OriginalTable"] = "shouhin";

//	field labels
$fieldLabelsnyuko = array();
$fieldToolTipsnyuko = array();
$pageTitlesnyuko = array();
$placeHoldersnyuko = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsnyuko["Japanese"] = array();
	$fieldToolTipsnyuko["Japanese"] = array();
	$placeHoldersnyuko["Japanese"] = array();
	$pageTitlesnyuko["Japanese"] = array();
	$fieldLabelsnyuko["Japanese"]["product_id"] = "SEQ";
	$fieldToolTipsnyuko["Japanese"]["product_id"] = "";
	$placeHoldersnyuko["Japanese"]["product_id"] = "";
	$fieldLabelsnyuko["Japanese"]["title"] = "タイトル";
	$fieldToolTipsnyuko["Japanese"]["title"] = "";
	$placeHoldersnyuko["Japanese"]["title"] = "";
	$fieldLabelsnyuko["Japanese"]["status"] = "商品状態";
	$fieldToolTipsnyuko["Japanese"]["status"] = "";
	$placeHoldersnyuko["Japanese"]["status"] = "";
	$fieldLabelsnyuko["Japanese"]["product_num"] = "ブランドID";
	$fieldToolTipsnyuko["Japanese"]["product_num"] = "";
	$placeHoldersnyuko["Japanese"]["product_num"] = "";
	$fieldLabelsnyuko["Japanese"]["yahoo_sinaban"] = "品番";
	$fieldToolTipsnyuko["Japanese"]["yahoo_sinaban"] = "";
	$placeHoldersnyuko["Japanese"]["yahoo_sinaban"] = "";
	$fieldLabelsnyuko["Japanese"]["box_id"] = "ボックスID";
	$fieldToolTipsnyuko["Japanese"]["box_id"] = "";
	$placeHoldersnyuko["Japanese"]["box_id"] = "";
	$fieldLabelsnyuko["Japanese"]["box_sort"] = "Box Sort";
	$fieldToolTipsnyuko["Japanese"]["box_sort"] = "";
	$placeHoldersnyuko["Japanese"]["box_sort"] = "";
	$fieldLabelsnyuko["Japanese"]["box_name"] = "Box Name";
	$fieldToolTipsnyuko["Japanese"]["box_name"] = "";
	$placeHoldersnyuko["Japanese"]["box_name"] = "";
	$fieldLabelsnyuko["Japanese"]["sales_price"] = "販売額";
	$fieldToolTipsnyuko["Japanese"]["sales_price"] = "";
	$placeHoldersnyuko["Japanese"]["sales_price"] = "";
	if (count($fieldToolTipsnyuko["Japanese"]))
		$tdatanyuko[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsnyuko[""] = array();
	$fieldToolTipsnyuko[""] = array();
	$placeHoldersnyuko[""] = array();
	$pageTitlesnyuko[""] = array();
	$fieldLabelsnyuko[""]["box_sort"] = "Box Sort";
	$fieldToolTipsnyuko[""]["box_sort"] = "";
	$placeHoldersnyuko[""]["box_sort"] = "";
	$fieldLabelsnyuko[""]["box_name"] = "Box Name";
	$fieldToolTipsnyuko[""]["box_name"] = "";
	$placeHoldersnyuko[""]["box_name"] = "";
	$fieldLabelsnyuko[""]["sales_price"] = "Sales Price";
	$fieldToolTipsnyuko[""]["sales_price"] = "";
	$placeHoldersnyuko[""]["sales_price"] = "";
	if (count($fieldToolTipsnyuko[""]))
		$tdatanyuko[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsnyuko["English"] = array();
	$fieldToolTipsnyuko["English"] = array();
	$placeHoldersnyuko["English"] = array();
	$pageTitlesnyuko["English"] = array();
	$fieldLabelsnyuko["English"]["box_sort"] = "Box Sort";
	$fieldToolTipsnyuko["English"]["box_sort"] = "";
	$placeHoldersnyuko["English"]["box_sort"] = "";
	$fieldLabelsnyuko["English"]["box_name"] = "Box Name";
	$fieldToolTipsnyuko["English"]["box_name"] = "";
	$placeHoldersnyuko["English"]["box_name"] = "";
	$fieldLabelsnyuko["English"]["sales_price"] = "Sales Price";
	$fieldToolTipsnyuko["English"]["sales_price"] = "";
	$placeHoldersnyuko["English"]["sales_price"] = "";
	if (count($fieldToolTipsnyuko["English"]))
		$tdatanyuko[".isUseToolTips"] = true;
}


	$tdatanyuko[".NCSearch"] = true;



$tdatanyuko[".shortTableName"] = "nyuko";
$tdatanyuko[".nSecOptions"] = 0;
$tdatanyuko[".recsPerRowPrint"] = 1;
$tdatanyuko[".mainTableOwnerID"] = "";
$tdatanyuko[".moveNext"] = 1;
$tdatanyuko[".entityType"] = 1;

$tdatanyuko[".strOriginalTableName"] = "shouhin";

	



$tdatanyuko[".showAddInPopup"] = false;

$tdatanyuko[".showEditInPopup"] = false;

$tdatanyuko[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatanyuko[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatanyuko[".fieldsForRegister"] = array();

$tdatanyuko[".listAjax"] = false;

	$tdatanyuko[".audit"] = true;

	$tdatanyuko[".locking"] = false;



$tdatanyuko[".list"] = true;



$tdatanyuko[".reorderRecordsByHeader"] = true;
$tdatanyuko[".createSortByDropdown"] = true;
$tdatanyuko[".strSortControlSettingsJSON"] = "";








$tdatanyuko[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatanyuko[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatanyuko[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatanyuko[".searchSaving"] = false;
//

$tdatanyuko[".showSearchPanel"] = true;
		$tdatanyuko[".flexibleSearch"] = true;

$tdatanyuko[".isUseAjaxSuggest"] = true;

$tdatanyuko[".rowHighlite"] = true;



																																																																																																																																																																																																
					
					
					
					
					
																													

$tdatanyuko[".ajaxCodeSnippetAdded"] = false;

$tdatanyuko[".buttonsAdded"] = true;

$tdatanyuko[".addPageEvents"] = true;

// use timepicker for search panel
$tdatanyuko[".isUseTimeForSearch"] = false;



$tdatanyuko[".badgeColor"] = "DC143C";


$tdatanyuko[".allSearchFields"] = array();
$tdatanyuko[".filterFields"] = array();
$tdatanyuko[".requiredSearchFields"] = array();

$tdatanyuko[".allSearchFields"][] = "box_sort";
	$tdatanyuko[".allSearchFields"][] = "box_name";
	$tdatanyuko[".allSearchFields"][] = "sales_price";
	$tdatanyuko[".allSearchFields"][] = "status";
	$tdatanyuko[".allSearchFields"][] = "product_num";
	$tdatanyuko[".allSearchFields"][] = "product_id";
	$tdatanyuko[".allSearchFields"][] = "yahoo_sinaban";
	$tdatanyuko[".allSearchFields"][] = "title";
	$tdatanyuko[".allSearchFields"][] = "box_id";
	

$tdatanyuko[".googleLikeFields"] = array();
$tdatanyuko[".googleLikeFields"][] = "status";
$tdatanyuko[".googleLikeFields"][] = "box_id";
$tdatanyuko[".googleLikeFields"][] = "product_id";
$tdatanyuko[".googleLikeFields"][] = "yahoo_sinaban";
$tdatanyuko[".googleLikeFields"][] = "product_num";
$tdatanyuko[".googleLikeFields"][] = "title";
$tdatanyuko[".googleLikeFields"][] = "box_sort";
$tdatanyuko[".googleLikeFields"][] = "box_name";
$tdatanyuko[".googleLikeFields"][] = "sales_price";

$tdatanyuko[".panelSearchFields"] = array();
$tdatanyuko[".searchPanelOptions"] = array();
$tdatanyuko[".panelSearchFields"][] = "status";
	$tdatanyuko[".panelSearchFields"][] = "product_num";
	$tdatanyuko[".panelSearchFields"][] = "product_id";
	$tdatanyuko[".panelSearchFields"][] = "yahoo_sinaban";
	$tdatanyuko[".panelSearchFields"][] = "title";
	$tdatanyuko[".panelSearchFields"][] = "box_id";
	
$tdatanyuko[".advSearchFields"] = array();
$tdatanyuko[".advSearchFields"][] = "box_sort";
$tdatanyuko[".advSearchFields"][] = "box_name";
$tdatanyuko[".advSearchFields"][] = "sales_price";
$tdatanyuko[".advSearchFields"][] = "status";
$tdatanyuko[".advSearchFields"][] = "product_num";
$tdatanyuko[".advSearchFields"][] = "product_id";
$tdatanyuko[".advSearchFields"][] = "yahoo_sinaban";
$tdatanyuko[".advSearchFields"][] = "title";
$tdatanyuko[".advSearchFields"][] = "box_id";

$tdatanyuko[".tableType"] = "list";

$tdatanyuko[".printerPageOrientation"] = 0;
$tdatanyuko[".nPrinterPageScale"] = 100;

$tdatanyuko[".nPrinterSplitRecords"] = 40;

$tdatanyuko[".nPrinterPDFSplitRecords"] = 40;



$tdatanyuko[".geocodingEnabled"] = false;





$tdatanyuko[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatanyuko[".pageSize"] = 20;

$tdatanyuko[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `shouhin`.`box_id` DESC, `shouhin`.`box_sort`";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatanyuko[".strOrderBy"] = $tstrOrderBy;

$tdatanyuko[".orderindexes"] = array();
$tdatanyuko[".orderindexes"][] = array(2, (0 ? "ASC" : "DESC"), "`shouhin`.`box_id`");
$tdatanyuko[".orderindexes"][] = array(7, (1 ? "ASC" : "DESC"), "`shouhin`.`box_sort`");

$tdatanyuko[".sqlHead"] = "SELECT `shouhin`.`status`,  `shouhin`.`box_id`,  `shouhin`.`product_id`,  `shouhin`.`yahoo_sinaban`,  `shouhin`.`product_num`,  `shouhin`.`title`,  `shouhin`.`box_sort`,  `box`.`box_name`,  `shouhin`.`sales_price`";
$tdatanyuko[".sqlFrom"] = "FROM `shouhin`  INNER JOIN `box` ON `shouhin`.`box_id` = `box`.`box_id`";
$tdatanyuko[".sqlWhereExpr"] = "(`shouhin`.`status` = 106 OR `shouhin`.`status` = 107 OR `shouhin`.`status` = 108 OR `shouhin`.`status` = 3)";
$tdatanyuko[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatanyuko[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatanyuko[".arrGroupsPerPage"] = $arrGPP;

$tdatanyuko[".highlightSearchResults"] = true;

$tableKeysnyuko = array();
$tableKeysnyuko[] = "product_id";
$tdatanyuko[".Keys"] = $tableKeysnyuko;

$tdatanyuko[".listFields"] = array();
$tdatanyuko[".listFields"][] = "box_sort";
$tdatanyuko[".listFields"][] = "status";
$tdatanyuko[".listFields"][] = "sales_price";
$tdatanyuko[".listFields"][] = "box_id";
$tdatanyuko[".listFields"][] = "box_name";
$tdatanyuko[".listFields"][] = "product_id";
$tdatanyuko[".listFields"][] = "title";
$tdatanyuko[".listFields"][] = "yahoo_sinaban";
$tdatanyuko[".listFields"][] = "product_num";

$tdatanyuko[".hideMobileList"] = array();


$tdatanyuko[".viewFields"] = array();

$tdatanyuko[".addFields"] = array();

$tdatanyuko[".masterListFields"] = array();
$tdatanyuko[".masterListFields"][] = "box_sort";
$tdatanyuko[".masterListFields"][] = "box_name";
$tdatanyuko[".masterListFields"][] = "sales_price";
$tdatanyuko[".masterListFields"][] = "status";
$tdatanyuko[".masterListFields"][] = "title";
$tdatanyuko[".masterListFields"][] = "product_id";
$tdatanyuko[".masterListFields"][] = "yahoo_sinaban";
$tdatanyuko[".masterListFields"][] = "product_num";
$tdatanyuko[".masterListFields"][] = "box_id";

$tdatanyuko[".inlineAddFields"] = array();

$tdatanyuko[".editFields"] = array();

$tdatanyuko[".inlineEditFields"] = array();

$tdatanyuko[".updateSelectedFields"] = array();


$tdatanyuko[".exportFields"] = array();

$tdatanyuko[".importFields"] = array();

$tdatanyuko[".printFields"] = array();

//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("nyuko","status");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "status";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`status`";

	
	
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
	$edata["LookupTable"] = "_goods_status2";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "goods_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "goods_status";

	
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




	$tdatanyuko["status"] = $fdata;
//	box_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "box_id";
	$fdata["GoodName"] = "box_id";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("nyuko","box_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "box_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`box_id`";

	
	
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




	$tdatanyuko["box_id"] = $fdata;
//	product_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "product_id";
	$fdata["GoodName"] = "product_id";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("nyuko","product_id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdatanyuko["product_id"] = $fdata;
//	yahoo_sinaban
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "yahoo_sinaban";
	$fdata["GoodName"] = "yahoo_sinaban";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("nyuko","yahoo_sinaban");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "yahoo_sinaban";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`yahoo_sinaban`";

	
	
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
			$edata["EditParams"].= " maxlength=11";

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




	$tdatanyuko["yahoo_sinaban"] = $fdata;
//	product_num
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "product_num";
	$fdata["GoodName"] = "product_num";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("nyuko","product_num");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "product_num";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`product_num`";

	
	
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
	$edata["LookupTable"] = "mst_brand2";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 1;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "name";

	
	$edata["LookupOrderBy"] = "mst_band_title";

	
	
	
	

	
	
	
// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatanyuko["product_num"] = $fdata;
//	title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "title";
	$fdata["GoodName"] = "title";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("nyuko","title");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "title";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`title`";

	
	
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

	
	
	
				$edata["nRows"] = 40;
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




	$tdatanyuko["title"] = $fdata;
//	box_sort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "box_sort";
	$fdata["GoodName"] = "box_sort";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("nyuko","box_sort");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "box_sort";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`box_sort`";

	
	
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




	$tdatanyuko["box_sort"] = $fdata;
//	box_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "box_name";
	$fdata["GoodName"] = "box_name";
	$fdata["ownerTable"] = "box";
	$fdata["Label"] = GetFieldLabel("nyuko","box_name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "box_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`box`.`box_name`";

	
	
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatanyuko["box_name"] = $fdata;
//	sales_price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "sales_price";
	$fdata["GoodName"] = "sales_price";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("nyuko","sales_price");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "sales_price";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`sales_price`";

	
	
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




	$tdatanyuko["sales_price"] = $fdata;


$tables_data["nyuko"]=&$tdatanyuko;
$field_labels["nyuko"] = &$fieldLabelsnyuko;
$fieldToolTips["nyuko"] = &$fieldToolTipsnyuko;
$placeHolders["nyuko"] = &$placeHoldersnyuko;
$page_titles["nyuko"] = &$pageTitlesnyuko;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["nyuko"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["nyuko"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_nyuko()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`shouhin`.`status`,  `shouhin`.`box_id`,  `shouhin`.`product_id`,  `shouhin`.`yahoo_sinaban`,  `shouhin`.`product_num`,  `shouhin`.`title`,  `shouhin`.`box_sort`,  `box`.`box_name`,  `shouhin`.`sales_price`";
$proto0["m_strFrom"] = "FROM `shouhin`  INNER JOIN `box` ON `shouhin`.`box_id` = `box`.`box_id`";
$proto0["m_strWhere"] = "(`shouhin`.`status` = 106 OR `shouhin`.`status` = 107 OR `shouhin`.`status` = 108 OR `shouhin`.`status` = 3)";
$proto0["m_strOrderBy"] = "ORDER BY `shouhin`.`box_id` DESC, `shouhin`.`box_sort`";
$proto0["m_strTail"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "`shouhin`.`status` = 106 OR `shouhin`.`status` = 107 OR `shouhin`.`status` = 108 OR `shouhin`.`status` = 3";
$proto2["m_uniontype"] = "SQLL_OR";
	$obj = new SQLNonParsed(array(
	"m_sql" => "`shouhin`.`status` = 106 OR `shouhin`.`status` = 107 OR `shouhin`.`status` = 108 OR `shouhin`.`status` = 3"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
						$proto4=array();
$proto4["m_sql"] = "`shouhin`.`status` = 106";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "nyuko"
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "= 106";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

			$proto2["m_contained"][]=$obj;
						$proto6=array();
$proto6["m_sql"] = "`shouhin`.`status` = 107";
$proto6["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "nyuko"
));

$proto6["m_column"]=$obj;
$proto6["m_contained"] = array();
$proto6["m_strCase"] = "= 107";
$proto6["m_havingmode"] = false;
$proto6["m_inBrackets"] = false;
$proto6["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto6);

			$proto2["m_contained"][]=$obj;
						$proto8=array();
$proto8["m_sql"] = "`shouhin`.`status` = 108";
$proto8["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "nyuko"
));

$proto8["m_column"]=$obj;
$proto8["m_contained"] = array();
$proto8["m_strCase"] = "= 108";
$proto8["m_havingmode"] = false;
$proto8["m_inBrackets"] = false;
$proto8["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto8);

			$proto2["m_contained"][]=$obj;
						$proto10=array();
$proto10["m_sql"] = "`shouhin`.`status` = 3";
$proto10["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "nyuko"
));

$proto10["m_column"]=$obj;
$proto10["m_contained"] = array();
$proto10["m_strCase"] = "= 3";
$proto10["m_havingmode"] = false;
$proto10["m_inBrackets"] = false;
$proto10["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto10);

			$proto2["m_contained"][]=$obj;
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto12=array();
$proto12["m_sql"] = "";
$proto12["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto12["m_column"]=$obj;
$proto12["m_contained"] = array();
$proto12["m_strCase"] = "";
$proto12["m_havingmode"] = false;
$proto12["m_inBrackets"] = false;
$proto12["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto12);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "nyuko"
));

$proto14["m_sql"] = "`shouhin`.`status`";
$proto14["m_srcTableName"] = "nyuko";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "box_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "nyuko"
));

$proto16["m_sql"] = "`shouhin`.`box_id`";
$proto16["m_srcTableName"] = "nyuko";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "product_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "nyuko"
));

$proto18["m_sql"] = "`shouhin`.`product_id`";
$proto18["m_srcTableName"] = "nyuko";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_sinaban",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "nyuko"
));

$proto20["m_sql"] = "`shouhin`.`yahoo_sinaban`";
$proto20["m_srcTableName"] = "nyuko";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "product_num",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "nyuko"
));

$proto22["m_sql"] = "`shouhin`.`product_num`";
$proto22["m_srcTableName"] = "nyuko";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "title",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "nyuko"
));

$proto24["m_sql"] = "`shouhin`.`title`";
$proto24["m_srcTableName"] = "nyuko";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "box_sort",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "nyuko"
));

$proto26["m_sql"] = "`shouhin`.`box_sort`";
$proto26["m_srcTableName"] = "nyuko";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "box_name",
	"m_strTable" => "box",
	"m_srcTableName" => "nyuko"
));

$proto28["m_sql"] = "`box`.`box_name`";
$proto28["m_srcTableName"] = "nyuko";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "sales_price",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "nyuko"
));

$proto30["m_sql"] = "`shouhin`.`sales_price`";
$proto30["m_srcTableName"] = "nyuko";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto32=array();
$proto32["m_link"] = "SQLL_MAIN";
			$proto33=array();
$proto33["m_strName"] = "shouhin";
$proto33["m_srcTableName"] = "nyuko";
$proto33["m_columns"] = array();
$proto33["m_columns"][] = "product_id";
$proto33["m_columns"][] = "category_id";
$proto33["m_columns"][] = "goods_title";
$proto33["m_columns"][] = "title";
$proto33["m_columns"][] = "sub_category_id1";
$proto33["m_columns"][] = "ecc_id";
$proto33["m_columns"][] = "price";
$proto33["m_columns"][] = "yahoo";
$proto33["m_columns"][] = "remark";
$proto33["m_columns"][] = "sales_price";
$proto33["m_columns"][] = "description";
$proto33["m_columns"][] = "status";
$proto33["m_columns"][] = "product_num";
$proto33["m_columns"][] = "updated_at";
$proto33["m_columns"][] = "yahoo_size";
$proto33["m_columns"][] = "yahoo_title";
$proto33["m_columns"][] = "yahoo_junle";
$proto33["m_columns"][] = "yahoo_sankou_uwadai";
$proto33["m_columns"][] = "yahoo_sozai";
$proto33["m_columns"][] = "yahoo_color";
$proto33["m_columns"][] = "yahoo_kataban";
$proto33["m_columns"][] = "yahoo_condition1";
$proto33["m_columns"][] = "yahoo_condition2";
$proto33["m_columns"][] = "yahoo_fuzokuhin";
$proto33["m_columns"][] = "yahoo_sinaban";
$proto33["m_columns"][] = "yahoo_saisun_sha";
$proto33["m_columns"][] = "yahoo_sex";
$proto33["m_columns"][] = "box_id";
$proto33["m_columns"][] = "nyuukin_price";
$proto33["m_columns"][] = "updated_by";
$proto33["m_columns"][] = "raku_title";
$proto33["m_columns"][] = "raku_hyoujisaki_category2";
$proto33["m_columns"][] = "raku_hyoujisaki_category";
$proto33["m_columns"][] = "raku_hyoujisaki_category3";
$proto33["m_columns"][] = "timesta";
$proto33["m_columns"][] = "saisun_start";
$proto33["m_columns"][] = "saisun_end";
$proto33["m_columns"][] = "label_output_flag";
$proto33["m_columns"][] = "season";
$proto33["m_columns"][] = "kanryou_henbi";
$proto33["m_columns"][] = "box_sort";
$proto33["m_columns"][] = "satei_by";
$proto33["m_columns"][] = "kaitori_by";
$proto33["m_columns"][] = "comment";
$proto33["m_columns"][] = "satei_hi";
$proto33["m_columns"][] = "kaitory_hi";
$proto33["m_columns"][] = "REG_PHOTOGRAPHER";
$proto33["m_columns"][] = "REG_AUTHOR";
$proto33["m_columns"][] = "REG_PACKINGS";
$proto33["m_columns"][] = "REG_KAKOU_DATE";
$proto33["m_columns"][] = "REG_KAKOU";
$proto33["m_columns"][] = "REG_EXHIBITOR";
$proto33["m_columns"][] = "REG_PHOTOGRAPHER_DATE";
$proto33["m_columns"][] = "DT_PACKING_DATE";
$proto33["m_columns"][] = "DT_UP_DATE";
$proto33["m_columns"][] = "AWAZU_DATE";
$proto33["m_columns"][] = "AWAZU_NIN";
$proto33["m_columns"][] = "sabun_date";
$proto33["m_columns"][] = "browseid";
$proto33["m_columns"][] = "browsenode";
$proto33["m_columns"][] = "gold_property";
$proto33["m_columns"][] = "ichiba_title";
$proto33["m_columns"][] = "Gram";
$proto33["m_columns"][] = "Parent_stone";
$proto33["m_columns"][] = "Aside_stone";
$proto33["m_columns"][] = "Appraiser";
$proto33["m_columns"][] = "Remarks";
$proto33["m_columns"][] = "Destination_selling";
$proto33["m_columns"][] = "Finish";
$proto33["m_columns"][] = "Discrimination";
$proto33["m_columns"][] = "accessories";
$proto33["m_columns"][] = "priority";
$proto33["m_columns"][] = "A_storage";
$proto33["m_columns"][] = "price_per_gram";
$proto33["m_columns"][] = "price_per_parent_stone";
$proto33["m_columns"][] = "price_per_aside_stone";
$proto33["m_columns"][] = "price_secret";
$proto33["m_columns"][] = "sales_price_secret";
$proto33["m_columns"][] = "eq";
$proto33["m_columns"][] = "en";
$proto33["m_columns"][] = "line";
$proto33["m_columns"][] = "item_name";
$proto33["m_columns"][] = "handle";
$proto33["m_columns"][] = "yahoo_color_id";
$proto33["m_columns"][] = "raku_hyoujisaki_category4";
$proto33["m_columns"][] = "raku_hyoujisaki_category5";
$proto33["m_columns"][] = "raku_dir_1";
$proto33["m_columns"][] = "raku_dir_2";
$proto33["m_columns"][] = "raku_dir_3";
$proto33["m_columns"][] = "raku_dir_4";
$proto33["m_columns"][] = "raku_dir_5";
$proto33["m_columns"][] = "raku_dir_result";
$proto33["m_columns"][] = "raku_tag_result";
$proto33["m_columns"][] = "serial_number";
$proto33["m_columns"][] = "Exhibition_Date";
$proto33["m_columns"][] = "search_keyword";
$proto33["m_columns"][] = "stamp";
$proto33["m_columns"][] = "motif";
$proto33["m_columns"][] = "Setting";
$proto33["m_columns"][] = "processing";
$proto33["m_columns"][] = "Sleeve_Length";
$proto33["m_columns"][] = "length";
$proto33["m_columns"][] = "Ring_size";
$proto33["m_columns"][] = "price_for_site";
$proto33["m_columns"][] = "yahoo_category_id";
$proto33["m_columns"][] = "Qty";
$proto33["m_columns"][] = "sales_period";
$proto33["m_columns"][] = "starting_price";
$proto33["m_columns"][] = "FLAG_NO_ARRIVAL";
$proto33["m_columns"][] = "amount_of_image";
$proto33["m_columns"][] = "csv";
$proto33["m_columns"][] = "return_output_flag";
$proto33["m_columns"][] = "wasabi_flag";
$proto33["m_columns"][] = "ws_import_date";
$proto33["m_columns"][] = "logo";
$proto33["m_columns"][] = "parts";
$proto33["m_columns"][] = "country_of_origin";
$proto33["m_columns"][] = "zipper";
$proto33["m_columns"][] = "guarantee";
$proto33["m_columns"][] = "errors";
$proto33["m_columns"][] = "designer";
$proto33["m_columns"][] = "hahakai";
$proto33["m_columns"][] = "effect";
$proto33["m_columns"][] = "shape";
$proto33["m_columns"][] = "cutting_style";
$proto33["m_columns"][] = "chain_type";
$proto33["m_columns"][] = "number_of_stones";
$proto33["m_columns"][] = "amount";
$proto33["m_columns"][] = "satei_error";
$proto33["m_columns"][] = "producing_area";
$proto33["m_columns"][] = "shape_supplement";
$proto33["m_columns"][] = "side_gem";
$proto33["m_columns"][] = "product_style";
$proto33["m_columns"][] = "collar_neck_line";
$proto33["m_columns"][] = "breast";
$proto33["m_columns"][] = "silhouette";
$proto33["m_columns"][] = "sleeve";
$proto33["m_columns"][] = "unit";
$proto33["m_columns"][] = "hall_mark";
$proto33["m_columns"][] = "plate";
$proto33["m_columns"][] = "toe";
$proto33["m_columns"][] = "heel";
$proto33["m_columns"][] = "cloth";
$proto33["m_columns"][] = "serial_number_for_storage";
$proto33["m_columns"][] = "official_url";
$proto33["m_columns"][] = "main_details";
$proto33["m_columns"][] = "notation_size";
$proto33["m_columns"][] = "shoe_size_jp";
$proto33["m_columns"][] = "Eoc_chigins2_id";
$proto33["m_columns"][] = "country_of_origin_name";
$proto33["m_columns"][] = "mailingkit_id";
$proto33["m_columns"][] = "DA_COMMENTSANDTOTAL";
$proto33["m_columns"][] = "DA_WEIGHT";
$proto33["m_columns"][] = "DA_PER_CARAT";
$proto33["m_columns"][] = "DA_SHAPE";
$proto33["m_columns"][] = "DA_SELFGRES";
$proto33["m_columns"][] = "DA_ORIGINALGRADEMLIKENED";
$proto33["m_columns"][] = "DA_SUGARCANE";
$proto33["m_columns"][] = "DA_RAPA";
$proto33["m_columns"][] = "DA_INTENSITY";
$proto33["m_columns"][] = "DA_OVERTONE";
$proto33["m_columns"][] = "DA_COLOR";
$proto33["m_columns"][] = "DA_CLARITY";
$proto33["m_columns"][] = "DA_CUT";
$proto33["m_columns"][] = "DA_POLISH";
$proto33["m_columns"][] = "DA_SYMMETRY";
$proto33["m_columns"][] = "DA_FLUO";
$proto33["m_columns"][] = "DA_COLOR_FLUO";
$proto33["m_columns"][] = "DA_WIDE";
$proto33["m_columns"][] = "DA_HIGH";
$proto33["m_columns"][] = "DA_DEPTH";
$proto33["m_columns"][] = "DA_APPRAISER";
$proto33["m_columns"][] = "DA_FRAPA";
$proto33["m_columns"][] = "DA_RATE";
$proto33["m_columns"][] = "DA_UNIT_PRICE_UNPLUG";
$proto33["m_columns"][] = "DA_YOURNAME";
$proto33["m_columns"][] = "DA_RAPAB";
$proto33["m_columns"][] = "DA_GROSSPROFIT";
$proto33["m_columns"][] = "DA_INTEREST_1";
$proto33["m_columns"][] = "DA_no";
$proto33["m_columns"][] = "kinsa_flag";
$proto33["m_columns"][] = "price_for_site_flag";
$proto33["m_columns"][] = "Eoc_takuhai_id";
$proto33["m_columns"][] = "Eoc_unfinished_id";
$proto33["m_columns"][] = "Eoc_chigins_unfinished_id";
$proto33["m_columns"][] = "chohyo_id";
$proto33["m_columns"][] = "location";
$proto33["m_columns"][] = "special_instructions_1";
$proto33["m_columns"][] = "special_instructions_2";
$proto33["m_columns"][] = "special_instructions_3";
$proto33["m_columns"][] = "chohyo_seihin_flag";
$proto33["m_columns"][] = "chohyo_dia_flag";
$proto33["m_columns"][] = "chohyo_type";
$proto33["m_columns"][] = "ichiyen_flag";
$proto33["m_columns"][] = "asuraku_fuka_flag";
$proto33["m_columns"][] = "parallel_import_flag";
$proto33["m_columns"][] = "meisai_number";
$proto33["m_columns"][] = "days_keep_price";
$proto33["m_columns"][] = "initial_included";
$proto33["m_columns"][] = "novelty";
$proto33["m_columns"][] = "tentou_label_output_flag";
$proto33["m_columns"][] = "itaku_flag";
$proto33["m_columns"][] = "including_catch";
$proto33["m_columns"][] = "ichiba_meeting_month";
$proto33["m_columns"][] = "ichiba_meeting_name";
$proto33["m_columns"][] = "ichiba_color";
$proto33["m_columns"][] = "ichiba_clarity";
$proto33["m_columns"][] = "ichiba_melee_gai";
$proto33["m_columns"][] = "ichiba_lot_pieces";
$proto33["m_columns"][] = "ichiba_image";
$proto33["m_columns"][] = "ichiba_img";
$proto33["m_columns"][] = "gold_check_id";
$proto33["m_columns"][] = "ichiba_exhibition_id";
$proto33["m_columns"][] = "ichiba_exhibition_sort";
$proto33["m_columns"][] = "cost";
$proto33["m_columns"][] = "auto_price_cut_prohibited";
$proto33["m_columns"][] = "event_price";
$proto33["m_columns"][] = "identification_cost";
$proto33["m_columns"][] = "other_cost";
$proto33["m_columns"][] = "stock_quantity";
$proto33["m_columns"][] = "Eoc_trader_id_for_buy";
$proto33["m_columns"][] = "Eoc_trader_id_for_sell";
$proto33["m_columns"][] = "multiplication_rate";
$proto33["m_columns"][] = "many_product_group_id";
$proto33["m_columns"][] = "trading_sort_id";
$proto33["m_columns"][] = "many_product_group_saiban";
$proto33["m_columns"][] = "purchase_category";
$proto33["m_columns"][] = "created_at";
$proto33["m_columns"][] = "created_by";
$proto33["m_columns"][] = "manual_input_price_per_gram";
$proto33["m_columns"][] = "satei_start";
$proto33["m_columns"][] = "self_DA_INTENSITY";
$proto33["m_columns"][] = "self_DA_OVERTONE";
$proto33["m_columns"][] = "self_DA_COLOR";
$proto33["m_columns"][] = "self_DA_CLARITY";
$proto33["m_columns"][] = "self_DA_CUT";
$proto33["m_columns"][] = "self_DA_POLISH";
$proto33["m_columns"][] = "self_DA_SYMMETRY";
$proto33["m_columns"][] = "self_DA_FLUO";
$proto33["m_columns"][] = "self_DA_COLOR_FLUO";
$proto33["m_columns"][] = "self_DA_FRAPA";
$proto33["m_columns"][] = "self_DA_RATE";
$proto33["m_columns"][] = "self_multiplication_rate";
$proto33["m_columns"][] = "is_seiyaku";
$proto33["m_columns"][] = "destination_sold_out";
$proto33["m_columns"][] = "mypage_update_prohibited";
$proto33["m_columns"][] = "gold_check_scan_id";
$proto33["m_columns"][] = "buy_campaign_data_id";
$proto33["m_columns"][] = "REG_PHOTOGRAPHER_DATE_start";
$proto33["m_columns"][] = "commission";
$proto33["m_columns"][] = "addtime_gold_check_id";
$proto33["m_columns"][] = "is_recovery";
$proto33["m_columns"][] = "sales_cost";
$proto33["m_columns"][] = "mst_business_partner_id";
$proto33["m_columns"][] = "DA_GROSSPROFIT_2";
$proto33["m_columns"][] = "DA_INTEREST_2";
$proto33["m_columns"][] = "minus_weight";
$proto33["m_columns"][] = "diameter_size";
$proto33["m_columns"][] = "metal_rate_date";
$obj = new SQLTable($proto33);

$proto32["m_table"] = $obj;
$proto32["m_sql"] = "`shouhin`";
$proto32["m_alias"] = "";
$proto32["m_srcTableName"] = "nyuko";
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
												$proto36=array();
$proto36["m_link"] = "SQLL_INNERJOIN";
			$proto37=array();
$proto37["m_strName"] = "box";
$proto37["m_srcTableName"] = "nyuko";
$proto37["m_columns"] = array();
$proto37["m_columns"][] = "box_id";
$proto37["m_columns"][] = "box_pass";
$proto37["m_columns"][] = "box_name";
$proto37["m_columns"][] = "box_name_jp";
$proto37["m_columns"][] = "created_at";
$proto37["m_columns"][] = "created_by";
$proto37["m_columns"][] = "zip";
$proto37["m_columns"][] = "zip_status";
$proto37["m_columns"][] = "zip_name";
$proto37["m_columns"][] = "box_csv_template_id";
$proto37["m_columns"][] = "updated_at";
$proto37["m_columns"][] = "rakuten_cabinet_name";
$proto37["m_columns"][] = "rakuup";
$proto37["m_columns"][] = "yup";
$proto37["m_columns"][] = "raku_image_name";
$proto37["m_columns"][] = "csv";
$proto37["m_columns"][] = "up";
$proto37["m_columns"][] = "box_id_new";
$proto37["m_columns"][] = "satuei_sha";
$proto37["m_columns"][] = "satuei_jikan";
$proto37["m_columns"][] = "kakou_sha";
$proto37["m_columns"][] = "kakou_jikan";
$proto37["m_columns"][] = "konpou_sha";
$proto37["m_columns"][] = "konpou_Jikan";
$proto37["m_columns"][] = "link1";
$proto37["m_columns"][] = "zip_create";
$proto37["m_columns"][] = "updated_by";
$proto37["m_columns"][] = "count";
$proto37["m_columns"][] = "zip_flag";
$proto37["m_columns"][] = "img_count";
$proto37["m_columns"][] = "finished_at";
$proto37["m_columns"][] = "is_pause";
$proto37["m_columns"][] = "pause_finished_at";
$obj = new SQLTable($proto37);

$proto36["m_table"] = $obj;
$proto36["m_sql"] = "INNER JOIN `box` ON `shouhin`.`box_id` = `box`.`box_id`";
$proto36["m_alias"] = "";
$proto36["m_srcTableName"] = "nyuko";
$proto38=array();
$proto38["m_sql"] = "`shouhin`.`box_id` = `box`.`box_id`";
$proto38["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "box_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "nyuko"
));

$proto38["m_column"]=$obj;
$proto38["m_contained"] = array();
$proto38["m_strCase"] = "= `box`.`box_id`";
$proto38["m_havingmode"] = false;
$proto38["m_inBrackets"] = false;
$proto38["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto38);

$proto36["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto36);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto40=array();
						$obj = new SQLField(array(
	"m_strName" => "box_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "nyuko"
));

$proto40["m_column"]=$obj;
$proto40["m_bAsc"] = 0;
$proto40["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto40);

$proto0["m_orderby"][]=$obj;					
												$proto42=array();
						$obj = new SQLField(array(
	"m_strName" => "box_sort",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "nyuko"
));

$proto42["m_column"]=$obj;
$proto42["m_bAsc"] = 1;
$proto42["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto42);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="nyuko";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_nyuko = createSqlQuery_nyuko();


	
		;

									

$tdatanyuko[".sqlquery"] = $queryData_nyuko;

include_once(getabspath("include/nyuko_events.php"));
$tableEvents["nyuko"] = new eventclass_nyuko;
$tdatanyuko[".hasEvents"] = true;

?>