<?php
require_once(getabspath("classes/cipherer.php"));




$tdatasales_report = array();
	$tdatasales_report[".truncateText"] = true;
	$tdatasales_report[".NumberOfChars"] = 80;
	$tdatasales_report[".ShortName"] = "sales_report";
	$tdatasales_report[".OwnerID"] = "";
	$tdatasales_report[".OriginalTable"] = "sales_report";

//	field labels
$fieldLabelssales_report = array();
$fieldToolTipssales_report = array();
$pageTitlessales_report = array();
$placeHolderssales_report = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelssales_report["Japanese"] = array();
	$fieldToolTipssales_report["Japanese"] = array();
	$placeHolderssales_report["Japanese"] = array();
	$pageTitlessales_report["Japanese"] = array();
	$fieldLabelssales_report["Japanese"]["id"] = "Id";
	$fieldToolTipssales_report["Japanese"]["id"] = "";
	$placeHolderssales_report["Japanese"]["id"] = "";
	$fieldLabelssales_report["Japanese"]["product_id"] = "商品SEQ";
	$fieldToolTipssales_report["Japanese"]["product_id"] = "";
	$placeHolderssales_report["Japanese"]["product_id"] = "";
	$fieldLabelssales_report["Japanese"]["sales_date"] = "販売日";
	$fieldToolTipssales_report["Japanese"]["sales_date"] = "";
	$placeHolderssales_report["Japanese"]["sales_date"] = "";
	$fieldLabelssales_report["Japanese"]["created_at"] = "作成日";
	$fieldToolTipssales_report["Japanese"]["created_at"] = "";
	$placeHolderssales_report["Japanese"]["created_at"] = "";
	$fieldLabelssales_report["Japanese"]["updated_at"] = "更新日";
	$fieldToolTipssales_report["Japanese"]["updated_at"] = "";
	$placeHolderssales_report["Japanese"]["updated_at"] = "";
	$fieldLabelssales_report["Japanese"]["memo"] = "メモ";
	$fieldToolTipssales_report["Japanese"]["memo"] = "";
	$placeHolderssales_report["Japanese"]["memo"] = "";
	$fieldLabelssales_report["Japanese"]["repo_type"] = "レポートタイプ";
	$fieldToolTipssales_report["Japanese"]["repo_type"] = "";
	$placeHolderssales_report["Japanese"]["repo_type"] = "";
	$fieldLabelssales_report["Japanese"]["contract_date"] = "約定日";
	$fieldToolTipssales_report["Japanese"]["contract_date"] = "";
	$placeHolderssales_report["Japanese"]["contract_date"] = "";
	$fieldLabelssales_report["Japanese"]["exhibition_date"] = "出品日";
	$fieldToolTipssales_report["Japanese"]["exhibition_date"] = "";
	$placeHolderssales_report["Japanese"]["exhibition_date"] = "";
	$fieldLabelssales_report["Japanese"]["mst_business_partner_id"] = "取引先ID";
	$fieldToolTipssales_report["Japanese"]["mst_business_partner_id"] = "";
	$placeHolderssales_report["Japanese"]["mst_business_partner_id"] = "";
	if (count($fieldToolTipssales_report["Japanese"]))
		$tdatasales_report[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelssales_report[""] = array();
	$fieldToolTipssales_report[""] = array();
	$placeHolderssales_report[""] = array();
	$pageTitlessales_report[""] = array();
	$fieldLabelssales_report[""]["id"] = "Id";
	$fieldToolTipssales_report[""]["id"] = "";
	$placeHolderssales_report[""]["id"] = "";
	$fieldLabelssales_report[""]["product_id"] = "Product Id";
	$fieldToolTipssales_report[""]["product_id"] = "";
	$placeHolderssales_report[""]["product_id"] = "";
	$fieldLabelssales_report[""]["sales_date"] = "Sales Date";
	$fieldToolTipssales_report[""]["sales_date"] = "";
	$placeHolderssales_report[""]["sales_date"] = "";
	$fieldLabelssales_report[""]["created_at"] = "Created At";
	$fieldToolTipssales_report[""]["created_at"] = "";
	$placeHolderssales_report[""]["created_at"] = "";
	$fieldLabelssales_report[""]["updated_at"] = "Updated At";
	$fieldToolTipssales_report[""]["updated_at"] = "";
	$placeHolderssales_report[""]["updated_at"] = "";
	$fieldLabelssales_report[""]["memo"] = "Memo";
	$fieldToolTipssales_report[""]["memo"] = "";
	$placeHolderssales_report[""]["memo"] = "";
	$fieldLabelssales_report[""]["repo_type"] = "Repo Type";
	$fieldToolTipssales_report[""]["repo_type"] = "";
	$placeHolderssales_report[""]["repo_type"] = "";
	$fieldLabelssales_report[""]["contract_date"] = "Contract Date";
	$fieldToolTipssales_report[""]["contract_date"] = "";
	$placeHolderssales_report[""]["contract_date"] = "";
	$fieldLabelssales_report[""]["exhibition_date"] = "Exhibition Date";
	$fieldToolTipssales_report[""]["exhibition_date"] = "";
	$placeHolderssales_report[""]["exhibition_date"] = "";
	$fieldLabelssales_report[""]["mst_business_partner_id"] = "Mst Business Partner Id";
	$fieldToolTipssales_report[""]["mst_business_partner_id"] = "";
	$placeHolderssales_report[""]["mst_business_partner_id"] = "";
	if (count($fieldToolTipssales_report[""]))
		$tdatasales_report[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelssales_report["English"] = array();
	$fieldToolTipssales_report["English"] = array();
	$placeHolderssales_report["English"] = array();
	$pageTitlessales_report["English"] = array();
	$fieldLabelssales_report["English"]["id"] = "Id";
	$fieldToolTipssales_report["English"]["id"] = "";
	$placeHolderssales_report["English"]["id"] = "";
	$fieldLabelssales_report["English"]["product_id"] = "Product Id";
	$fieldToolTipssales_report["English"]["product_id"] = "";
	$placeHolderssales_report["English"]["product_id"] = "";
	$fieldLabelssales_report["English"]["sales_date"] = "Sales Date";
	$fieldToolTipssales_report["English"]["sales_date"] = "";
	$placeHolderssales_report["English"]["sales_date"] = "";
	$fieldLabelssales_report["English"]["created_at"] = "Created At";
	$fieldToolTipssales_report["English"]["created_at"] = "";
	$placeHolderssales_report["English"]["created_at"] = "";
	$fieldLabelssales_report["English"]["updated_at"] = "Updated At";
	$fieldToolTipssales_report["English"]["updated_at"] = "";
	$placeHolderssales_report["English"]["updated_at"] = "";
	$fieldLabelssales_report["English"]["memo"] = "Memo";
	$fieldToolTipssales_report["English"]["memo"] = "";
	$placeHolderssales_report["English"]["memo"] = "";
	$fieldLabelssales_report["English"]["repo_type"] = "Repo Type";
	$fieldToolTipssales_report["English"]["repo_type"] = "";
	$placeHolderssales_report["English"]["repo_type"] = "";
	$fieldLabelssales_report["English"]["contract_date"] = "Contract Date";
	$fieldToolTipssales_report["English"]["contract_date"] = "";
	$placeHolderssales_report["English"]["contract_date"] = "";
	$fieldLabelssales_report["English"]["exhibition_date"] = "Exhibition Date";
	$fieldToolTipssales_report["English"]["exhibition_date"] = "";
	$placeHolderssales_report["English"]["exhibition_date"] = "";
	$fieldLabelssales_report["English"]["mst_business_partner_id"] = "Mst Business Partner Id";
	$fieldToolTipssales_report["English"]["mst_business_partner_id"] = "";
	$placeHolderssales_report["English"]["mst_business_partner_id"] = "";
	if (count($fieldToolTipssales_report["English"]))
		$tdatasales_report[".isUseToolTips"] = true;
}


	$tdatasales_report[".NCSearch"] = true;



$tdatasales_report[".shortTableName"] = "sales_report";
$tdatasales_report[".nSecOptions"] = 0;
$tdatasales_report[".recsPerRowPrint"] = 1;
$tdatasales_report[".mainTableOwnerID"] = "";
$tdatasales_report[".moveNext"] = 1;
$tdatasales_report[".entityType"] = 0;

$tdatasales_report[".strOriginalTableName"] = "sales_report";

	



$tdatasales_report[".showAddInPopup"] = false;

$tdatasales_report[".showEditInPopup"] = false;

$tdatasales_report[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatasales_report[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatasales_report[".fieldsForRegister"] = array();

$tdatasales_report[".listAjax"] = false;

	$tdatasales_report[".audit"] = false;

	$tdatasales_report[".locking"] = false;



$tdatasales_report[".list"] = true;

$tdatasales_report[".inlineEdit"] = true;


$tdatasales_report[".reorderRecordsByHeader"] = true;



$tdatasales_report[".inlineAdd"] = true;

$tdatasales_report[".import"] = true;

$tdatasales_report[".exportTo"] = true;


$tdatasales_report[".delete"] = true;

$tdatasales_report[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatasales_report[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatasales_report[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatasales_report[".searchSaving"] = false;
//

$tdatasales_report[".showSearchPanel"] = true;
		$tdatasales_report[".flexibleSearch"] = true;

$tdatasales_report[".isUseAjaxSuggest"] = true;

$tdatasales_report[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatasales_report[".ajaxCodeSnippetAdded"] = false;

$tdatasales_report[".buttonsAdded"] = false;

$tdatasales_report[".addPageEvents"] = false;

// use timepicker for search panel
$tdatasales_report[".isUseTimeForSearch"] = false;





$tdatasales_report[".allSearchFields"] = array();
$tdatasales_report[".filterFields"] = array();
$tdatasales_report[".requiredSearchFields"] = array();

$tdatasales_report[".allSearchFields"][] = "id";
	$tdatasales_report[".allSearchFields"][] = "product_id";
	$tdatasales_report[".allSearchFields"][] = "sales_date";
	$tdatasales_report[".allSearchFields"][] = "contract_date";
	$tdatasales_report[".allSearchFields"][] = "exhibition_date";
	$tdatasales_report[".allSearchFields"][] = "created_at";
	$tdatasales_report[".allSearchFields"][] = "updated_at";
	$tdatasales_report[".allSearchFields"][] = "memo";
	$tdatasales_report[".allSearchFields"][] = "repo_type";
	$tdatasales_report[".allSearchFields"][] = "mst_business_partner_id";
	

$tdatasales_report[".googleLikeFields"] = array();
$tdatasales_report[".googleLikeFields"][] = "id";
$tdatasales_report[".googleLikeFields"][] = "product_id";
$tdatasales_report[".googleLikeFields"][] = "sales_date";
$tdatasales_report[".googleLikeFields"][] = "contract_date";
$tdatasales_report[".googleLikeFields"][] = "exhibition_date";
$tdatasales_report[".googleLikeFields"][] = "created_at";
$tdatasales_report[".googleLikeFields"][] = "updated_at";
$tdatasales_report[".googleLikeFields"][] = "memo";
$tdatasales_report[".googleLikeFields"][] = "repo_type";
$tdatasales_report[".googleLikeFields"][] = "mst_business_partner_id";


$tdatasales_report[".advSearchFields"] = array();
$tdatasales_report[".advSearchFields"][] = "id";
$tdatasales_report[".advSearchFields"][] = "product_id";
$tdatasales_report[".advSearchFields"][] = "sales_date";
$tdatasales_report[".advSearchFields"][] = "contract_date";
$tdatasales_report[".advSearchFields"][] = "exhibition_date";
$tdatasales_report[".advSearchFields"][] = "created_at";
$tdatasales_report[".advSearchFields"][] = "updated_at";
$tdatasales_report[".advSearchFields"][] = "memo";
$tdatasales_report[".advSearchFields"][] = "repo_type";
$tdatasales_report[".advSearchFields"][] = "mst_business_partner_id";

$tdatasales_report[".tableType"] = "list";

$tdatasales_report[".printerPageOrientation"] = 0;
$tdatasales_report[".nPrinterPageScale"] = 100;

$tdatasales_report[".nPrinterSplitRecords"] = 40;

$tdatasales_report[".nPrinterPDFSplitRecords"] = 40;



$tdatasales_report[".geocodingEnabled"] = false;





$tdatasales_report[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatasales_report[".pageSize"] = 20;

$tdatasales_report[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `sales_date` DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatasales_report[".strOrderBy"] = $tstrOrderBy;

$tdatasales_report[".orderindexes"] = array();
$tdatasales_report[".orderindexes"][] = array(3, (0 ? "ASC" : "DESC"), "`sales_date`");

$tdatasales_report[".sqlHead"] = "SELECT `id`,  `product_id`,  `sales_date`,  `contract_date`,  `exhibition_date`,  `created_at`,  `updated_at`,  `memo`,  `repo_type`,  `mst_business_partner_id`";
$tdatasales_report[".sqlFrom"] = "FROM `sales_report`";
$tdatasales_report[".sqlWhereExpr"] = "";
$tdatasales_report[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasales_report[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasales_report[".arrGroupsPerPage"] = $arrGPP;

$tdatasales_report[".highlightSearchResults"] = true;

$tableKeyssales_report = array();
$tableKeyssales_report[] = "id";
$tdatasales_report[".Keys"] = $tableKeyssales_report;

$tdatasales_report[".listFields"] = array();
$tdatasales_report[".listFields"][] = "id";
$tdatasales_report[".listFields"][] = "product_id";
$tdatasales_report[".listFields"][] = "sales_date";
$tdatasales_report[".listFields"][] = "contract_date";
$tdatasales_report[".listFields"][] = "exhibition_date";
$tdatasales_report[".listFields"][] = "created_at";
$tdatasales_report[".listFields"][] = "updated_at";
$tdatasales_report[".listFields"][] = "memo";
$tdatasales_report[".listFields"][] = "repo_type";
$tdatasales_report[".listFields"][] = "mst_business_partner_id";

$tdatasales_report[".hideMobileList"] = array();


$tdatasales_report[".viewFields"] = array();

$tdatasales_report[".addFields"] = array();

$tdatasales_report[".masterListFields"] = array();
$tdatasales_report[".masterListFields"][] = "id";
$tdatasales_report[".masterListFields"][] = "product_id";
$tdatasales_report[".masterListFields"][] = "sales_date";
$tdatasales_report[".masterListFields"][] = "contract_date";
$tdatasales_report[".masterListFields"][] = "exhibition_date";
$tdatasales_report[".masterListFields"][] = "created_at";
$tdatasales_report[".masterListFields"][] = "updated_at";
$tdatasales_report[".masterListFields"][] = "memo";
$tdatasales_report[".masterListFields"][] = "repo_type";
$tdatasales_report[".masterListFields"][] = "mst_business_partner_id";

$tdatasales_report[".inlineAddFields"] = array();
$tdatasales_report[".inlineAddFields"][] = "product_id";
$tdatasales_report[".inlineAddFields"][] = "sales_date";
$tdatasales_report[".inlineAddFields"][] = "contract_date";
$tdatasales_report[".inlineAddFields"][] = "exhibition_date";
$tdatasales_report[".inlineAddFields"][] = "memo";
$tdatasales_report[".inlineAddFields"][] = "repo_type";
$tdatasales_report[".inlineAddFields"][] = "mst_business_partner_id";

$tdatasales_report[".editFields"] = array();

$tdatasales_report[".inlineEditFields"] = array();
$tdatasales_report[".inlineEditFields"][] = "product_id";
$tdatasales_report[".inlineEditFields"][] = "sales_date";
$tdatasales_report[".inlineEditFields"][] = "contract_date";
$tdatasales_report[".inlineEditFields"][] = "exhibition_date";
$tdatasales_report[".inlineEditFields"][] = "memo";
$tdatasales_report[".inlineEditFields"][] = "repo_type";
$tdatasales_report[".inlineEditFields"][] = "mst_business_partner_id";

$tdatasales_report[".updateSelectedFields"] = array();


$tdatasales_report[".exportFields"] = array();
$tdatasales_report[".exportFields"][] = "id";
$tdatasales_report[".exportFields"][] = "product_id";
$tdatasales_report[".exportFields"][] = "sales_date";
$tdatasales_report[".exportFields"][] = "contract_date";
$tdatasales_report[".exportFields"][] = "exhibition_date";
$tdatasales_report[".exportFields"][] = "created_at";
$tdatasales_report[".exportFields"][] = "updated_at";
$tdatasales_report[".exportFields"][] = "memo";
$tdatasales_report[".exportFields"][] = "repo_type";
$tdatasales_report[".exportFields"][] = "mst_business_partner_id";

$tdatasales_report[".importFields"] = array();
$tdatasales_report[".importFields"][] = "id";
$tdatasales_report[".importFields"][] = "product_id";
$tdatasales_report[".importFields"][] = "sales_date";
$tdatasales_report[".importFields"][] = "contract_date";
$tdatasales_report[".importFields"][] = "exhibition_date";
$tdatasales_report[".importFields"][] = "memo";
$tdatasales_report[".importFields"][] = "repo_type";
$tdatasales_report[".importFields"][] = "mst_business_partner_id";

$tdatasales_report[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "sales_report";
	$fdata["Label"] = GetFieldLabel("sales_report","id");
	$fdata["FieldType"] = 20;

	
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




	$tdatasales_report["id"] = $fdata;
//	product_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "product_id";
	$fdata["GoodName"] = "product_id";
	$fdata["ownerTable"] = "sales_report";
	$fdata["Label"] = GetFieldLabel("sales_report","product_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

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




	$tdatasales_report["product_id"] = $fdata;
//	sales_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sales_date";
	$fdata["GoodName"] = "sales_date";
	$fdata["ownerTable"] = "sales_report";
	$fdata["Label"] = GetFieldLabel("sales_report","sales_date");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "sales_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`sales_date`";

	
	
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




	$tdatasales_report["sales_date"] = $fdata;
//	contract_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "contract_date";
	$fdata["GoodName"] = "contract_date";
	$fdata["ownerTable"] = "sales_report";
	$fdata["Label"] = GetFieldLabel("sales_report","contract_date");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "contract_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`contract_date`";

	
	
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




	$tdatasales_report["contract_date"] = $fdata;
//	exhibition_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "exhibition_date";
	$fdata["GoodName"] = "exhibition_date";
	$fdata["ownerTable"] = "sales_report";
	$fdata["Label"] = GetFieldLabel("sales_report","exhibition_date");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "exhibition_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`exhibition_date`";

	
	
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




	$tdatasales_report["exhibition_date"] = $fdata;
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "sales_report";
	$fdata["Label"] = GetFieldLabel("sales_report","created_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "created_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`created_at`";

	
	
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




	$tdatasales_report["created_at"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "sales_report";
	$fdata["Label"] = GetFieldLabel("sales_report","updated_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

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




	$tdatasales_report["updated_at"] = $fdata;
//	memo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "memo";
	$fdata["GoodName"] = "memo";
	$fdata["ownerTable"] = "sales_report";
	$fdata["Label"] = GetFieldLabel("sales_report","memo");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "memo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`memo`";

	
	
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




	$tdatasales_report["memo"] = $fdata;
//	repo_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "repo_type";
	$fdata["GoodName"] = "repo_type";
	$fdata["ownerTable"] = "sales_report";
	$fdata["Label"] = GetFieldLabel("sales_report","repo_type");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "repo_type";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`repo_type`";

	
	
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




	$tdatasales_report["repo_type"] = $fdata;
//	mst_business_partner_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "mst_business_partner_id";
	$fdata["GoodName"] = "mst_business_partner_id";
	$fdata["ownerTable"] = "sales_report";
	$fdata["Label"] = GetFieldLabel("sales_report","mst_business_partner_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "mst_business_partner_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mst_business_partner_id`";

	
	
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
	$edata["LookupTable"] = "mst_business_partner";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "name";

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
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




	$tdatasales_report["mst_business_partner_id"] = $fdata;


$tables_data["sales_report"]=&$tdatasales_report;
$field_labels["sales_report"] = &$fieldLabelssales_report;
$fieldToolTips["sales_report"] = &$fieldToolTipssales_report;
$placeHolders["sales_report"] = &$placeHolderssales_report;
$page_titles["sales_report"] = &$pageTitlessales_report;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["sales_report"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["sales_report"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_sales_report()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  `product_id`,  `sales_date`,  `contract_date`,  `exhibition_date`,  `created_at`,  `updated_at`,  `memo`,  `repo_type`,  `mst_business_partner_id`";
$proto0["m_strFrom"] = "FROM `sales_report`";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY `sales_date` DESC";
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
	"m_strTable" => "sales_report",
	"m_srcTableName" => "sales_report"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "sales_report";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "product_id",
	"m_strTable" => "sales_report",
	"m_srcTableName" => "sales_report"
));

$proto8["m_sql"] = "`product_id`";
$proto8["m_srcTableName"] = "sales_report";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "sales_date",
	"m_strTable" => "sales_report",
	"m_srcTableName" => "sales_report"
));

$proto10["m_sql"] = "`sales_date`";
$proto10["m_srcTableName"] = "sales_report";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "contract_date",
	"m_strTable" => "sales_report",
	"m_srcTableName" => "sales_report"
));

$proto12["m_sql"] = "`contract_date`";
$proto12["m_srcTableName"] = "sales_report";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "exhibition_date",
	"m_strTable" => "sales_report",
	"m_srcTableName" => "sales_report"
));

$proto14["m_sql"] = "`exhibition_date`";
$proto14["m_srcTableName"] = "sales_report";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "sales_report",
	"m_srcTableName" => "sales_report"
));

$proto16["m_sql"] = "`created_at`";
$proto16["m_srcTableName"] = "sales_report";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "sales_report",
	"m_srcTableName" => "sales_report"
));

$proto18["m_sql"] = "`updated_at`";
$proto18["m_srcTableName"] = "sales_report";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "memo",
	"m_strTable" => "sales_report",
	"m_srcTableName" => "sales_report"
));

$proto20["m_sql"] = "`memo`";
$proto20["m_srcTableName"] = "sales_report";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "repo_type",
	"m_strTable" => "sales_report",
	"m_srcTableName" => "sales_report"
));

$proto22["m_sql"] = "`repo_type`";
$proto22["m_srcTableName"] = "sales_report";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "mst_business_partner_id",
	"m_strTable" => "sales_report",
	"m_srcTableName" => "sales_report"
));

$proto24["m_sql"] = "`mst_business_partner_id`";
$proto24["m_srcTableName"] = "sales_report";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "sales_report";
$proto27["m_srcTableName"] = "sales_report";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "id";
$proto27["m_columns"][] = "product_id";
$proto27["m_columns"][] = "sales_date";
$proto27["m_columns"][] = "contract_date";
$proto27["m_columns"][] = "exhibition_date";
$proto27["m_columns"][] = "created_at";
$proto27["m_columns"][] = "updated_at";
$proto27["m_columns"][] = "memo";
$proto27["m_columns"][] = "repo_type";
$proto27["m_columns"][] = "mst_business_partner_id";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "`sales_report`";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "sales_report";
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
	"m_strName" => "sales_date",
	"m_strTable" => "sales_report",
	"m_srcTableName" => "sales_report"
));

$proto30["m_column"]=$obj;
$proto30["m_bAsc"] = 0;
$proto30["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto30);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="sales_report";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_sales_report = createSqlQuery_sales_report();


	
		;

										

$tdatasales_report[".sqlquery"] = $queryData_sales_report;

$tableEvents["sales_report"] = new eventsBase;
$tdatasales_report[".hasEvents"] = false;

?>