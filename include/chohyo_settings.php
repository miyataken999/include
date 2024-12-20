<?php
require_once(getabspath("classes/cipherer.php"));




$tdatachohyo = array();
	$tdatachohyo[".truncateText"] = true;
	$tdatachohyo[".NumberOfChars"] = 80;
	$tdatachohyo[".ShortName"] = "chohyo";
	$tdatachohyo[".OwnerID"] = "";
	$tdatachohyo[".OriginalTable"] = "chohyo";

//	field labels
$fieldLabelschohyo = array();
$fieldToolTipschohyo = array();
$pageTitleschohyo = array();
$placeHolderschohyo = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelschohyo["Japanese"] = array();
	$fieldToolTipschohyo["Japanese"] = array();
	$placeHolderschohyo["Japanese"] = array();
	$pageTitleschohyo["Japanese"] = array();
	$fieldLabelschohyo["Japanese"]["id"] = "帳票Id";
	$fieldToolTipschohyo["Japanese"]["id"] = "";
	$placeHolderschohyo["Japanese"]["id"] = "";
	$fieldLabelschohyo["Japanese"]["date"] = "日付";
	$fieldToolTipschohyo["Japanese"]["date"] = "";
	$placeHolderschohyo["Japanese"]["date"] = "";
	$fieldLabelschohyo["Japanese"]["discrimination"] = "送付先";
	$fieldToolTipschohyo["Japanese"]["discrimination"] = "";
	$placeHolderschohyo["Japanese"]["discrimination"] = "";
	$fieldLabelschohyo["Japanese"]["create_by"] = "登録者";
	$fieldToolTipschohyo["Japanese"]["create_by"] = "";
	$placeHolderschohyo["Japanese"]["create_by"] = "";
	$fieldLabelschohyo["Japanese"]["create_at"] = "登録日";
	$fieldToolTipschohyo["Japanese"]["create_at"] = "";
	$placeHolderschohyo["Japanese"]["create_at"] = "";
	$fieldLabelschohyo["Japanese"]["update_by"] = "更新者";
	$fieldToolTipschohyo["Japanese"]["update_by"] = "";
	$placeHolderschohyo["Japanese"]["update_by"] = "";
	$fieldLabelschohyo["Japanese"]["update_at"] = "更新日";
	$fieldToolTipschohyo["Japanese"]["update_at"] = "";
	$placeHolderschohyo["Japanese"]["update_at"] = "";
	$fieldLabelschohyo["Japanese"]["type"] = "帳票タイプ";
	$fieldToolTipschohyo["Japanese"]["type"] = "";
	$placeHolderschohyo["Japanese"]["type"] = "";
	$fieldLabelschohyo["Japanese"]["finish_flag"] = "仕上げ有無";
	$fieldToolTipschohyo["Japanese"]["finish_flag"] = "";
	$placeHolderschohyo["Japanese"]["finish_flag"] = "";
	if (count($fieldToolTipschohyo["Japanese"]))
		$tdatachohyo[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelschohyo[""] = array();
	$fieldToolTipschohyo[""] = array();
	$placeHolderschohyo[""] = array();
	$pageTitleschohyo[""] = array();
	$fieldLabelschohyo[""]["id"] = "Id";
	$fieldToolTipschohyo[""]["id"] = "";
	$placeHolderschohyo[""]["id"] = "";
	$fieldLabelschohyo[""]["date"] = "Date";
	$fieldToolTipschohyo[""]["date"] = "";
	$placeHolderschohyo[""]["date"] = "";
	$fieldLabelschohyo[""]["discrimination"] = "Discrimination";
	$fieldToolTipschohyo[""]["discrimination"] = "";
	$placeHolderschohyo[""]["discrimination"] = "";
	$fieldLabelschohyo[""]["create_by"] = "Create By";
	$fieldToolTipschohyo[""]["create_by"] = "";
	$placeHolderschohyo[""]["create_by"] = "";
	$fieldLabelschohyo[""]["create_at"] = "Create At";
	$fieldToolTipschohyo[""]["create_at"] = "";
	$placeHolderschohyo[""]["create_at"] = "";
	$fieldLabelschohyo[""]["update_by"] = "Update By";
	$fieldToolTipschohyo[""]["update_by"] = "";
	$placeHolderschohyo[""]["update_by"] = "";
	$fieldLabelschohyo[""]["update_at"] = "Update At";
	$fieldToolTipschohyo[""]["update_at"] = "";
	$placeHolderschohyo[""]["update_at"] = "";
	$fieldLabelschohyo[""]["type"] = "Type";
	$fieldToolTipschohyo[""]["type"] = "";
	$placeHolderschohyo[""]["type"] = "";
	$fieldLabelschohyo[""]["finish_flag"] = "Finish Flag";
	$fieldToolTipschohyo[""]["finish_flag"] = "";
	$placeHolderschohyo[""]["finish_flag"] = "";
	if (count($fieldToolTipschohyo[""]))
		$tdatachohyo[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelschohyo["English"] = array();
	$fieldToolTipschohyo["English"] = array();
	$placeHolderschohyo["English"] = array();
	$pageTitleschohyo["English"] = array();
	$fieldLabelschohyo["English"]["id"] = "Id";
	$fieldToolTipschohyo["English"]["id"] = "";
	$placeHolderschohyo["English"]["id"] = "";
	$fieldLabelschohyo["English"]["date"] = "Date";
	$fieldToolTipschohyo["English"]["date"] = "";
	$placeHolderschohyo["English"]["date"] = "";
	$fieldLabelschohyo["English"]["discrimination"] = "Discrimination";
	$fieldToolTipschohyo["English"]["discrimination"] = "";
	$placeHolderschohyo["English"]["discrimination"] = "";
	$fieldLabelschohyo["English"]["create_by"] = "Create By";
	$fieldToolTipschohyo["English"]["create_by"] = "";
	$placeHolderschohyo["English"]["create_by"] = "";
	$fieldLabelschohyo["English"]["create_at"] = "Create At";
	$fieldToolTipschohyo["English"]["create_at"] = "";
	$placeHolderschohyo["English"]["create_at"] = "";
	$fieldLabelschohyo["English"]["update_by"] = "Update By";
	$fieldToolTipschohyo["English"]["update_by"] = "";
	$placeHolderschohyo["English"]["update_by"] = "";
	$fieldLabelschohyo["English"]["update_at"] = "Update At";
	$fieldToolTipschohyo["English"]["update_at"] = "";
	$placeHolderschohyo["English"]["update_at"] = "";
	$fieldLabelschohyo["English"]["type"] = "Type";
	$fieldToolTipschohyo["English"]["type"] = "";
	$placeHolderschohyo["English"]["type"] = "";
	$fieldLabelschohyo["English"]["finish_flag"] = "Finish Flag";
	$fieldToolTipschohyo["English"]["finish_flag"] = "";
	$placeHolderschohyo["English"]["finish_flag"] = "";
	if (count($fieldToolTipschohyo["English"]))
		$tdatachohyo[".isUseToolTips"] = true;
}


	$tdatachohyo[".NCSearch"] = true;



$tdatachohyo[".shortTableName"] = "chohyo";
$tdatachohyo[".nSecOptions"] = 0;
$tdatachohyo[".recsPerRowPrint"] = 1;
$tdatachohyo[".mainTableOwnerID"] = "";
$tdatachohyo[".moveNext"] = 1;
$tdatachohyo[".entityType"] = 0;

$tdatachohyo[".strOriginalTableName"] = "chohyo";

	



$tdatachohyo[".showAddInPopup"] = false;

$tdatachohyo[".showEditInPopup"] = false;

$tdatachohyo[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatachohyo[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatachohyo[".fieldsForRegister"] = array();

$tdatachohyo[".listAjax"] = false;

	$tdatachohyo[".audit"] = true;

	$tdatachohyo[".locking"] = false;



$tdatachohyo[".list"] = true;

$tdatachohyo[".inlineEdit"] = true;


$tdatachohyo[".reorderRecordsByHeader"] = true;



$tdatachohyo[".inlineAdd"] = true;

$tdatachohyo[".import"] = true;

$tdatachohyo[".exportTo"] = true;


$tdatachohyo[".delete"] = true;

$tdatachohyo[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatachohyo[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatachohyo[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatachohyo[".searchSaving"] = false;
//

$tdatachohyo[".showSearchPanel"] = true;
		$tdatachohyo[".flexibleSearch"] = true;

$tdatachohyo[".isUseAjaxSuggest"] = true;

$tdatachohyo[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatachohyo[".ajaxCodeSnippetAdded"] = false;

$tdatachohyo[".buttonsAdded"] = false;

$tdatachohyo[".addPageEvents"] = false;

// use timepicker for search panel
$tdatachohyo[".isUseTimeForSearch"] = false;




$tdatachohyo[".detailsLinksOnList"] = "1";

$tdatachohyo[".allSearchFields"] = array();
$tdatachohyo[".filterFields"] = array();
$tdatachohyo[".requiredSearchFields"] = array();

$tdatachohyo[".allSearchFields"][] = "id";
	$tdatachohyo[".allSearchFields"][] = "date";
	$tdatachohyo[".allSearchFields"][] = "finish_flag";
	$tdatachohyo[".allSearchFields"][] = "discrimination";
	$tdatachohyo[".allSearchFields"][] = "type";
	$tdatachohyo[".allSearchFields"][] = "create_by";
	$tdatachohyo[".allSearchFields"][] = "create_at";
	$tdatachohyo[".allSearchFields"][] = "update_by";
	$tdatachohyo[".allSearchFields"][] = "update_at";
	

$tdatachohyo[".googleLikeFields"] = array();
$tdatachohyo[".googleLikeFields"][] = "id";
$tdatachohyo[".googleLikeFields"][] = "date";
$tdatachohyo[".googleLikeFields"][] = "discrimination";
$tdatachohyo[".googleLikeFields"][] = "type";
$tdatachohyo[".googleLikeFields"][] = "create_by";
$tdatachohyo[".googleLikeFields"][] = "create_at";
$tdatachohyo[".googleLikeFields"][] = "update_by";
$tdatachohyo[".googleLikeFields"][] = "update_at";
$tdatachohyo[".googleLikeFields"][] = "finish_flag";


$tdatachohyo[".advSearchFields"] = array();
$tdatachohyo[".advSearchFields"][] = "id";
$tdatachohyo[".advSearchFields"][] = "date";
$tdatachohyo[".advSearchFields"][] = "finish_flag";
$tdatachohyo[".advSearchFields"][] = "discrimination";
$tdatachohyo[".advSearchFields"][] = "type";
$tdatachohyo[".advSearchFields"][] = "create_by";
$tdatachohyo[".advSearchFields"][] = "create_at";
$tdatachohyo[".advSearchFields"][] = "update_by";
$tdatachohyo[".advSearchFields"][] = "update_at";

$tdatachohyo[".tableType"] = "list";

$tdatachohyo[".printerPageOrientation"] = 0;
$tdatachohyo[".nPrinterPageScale"] = 100;

$tdatachohyo[".nPrinterSplitRecords"] = 40;

$tdatachohyo[".nPrinterPDFSplitRecords"] = 40;



$tdatachohyo[".geocodingEnabled"] = false;





$tdatachohyo[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatachohyo[".pageSize"] = 50;

$tdatachohyo[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `id` DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatachohyo[".strOrderBy"] = $tstrOrderBy;

$tdatachohyo[".orderindexes"] = array();
$tdatachohyo[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "`id`");

$tdatachohyo[".sqlHead"] = "SELECT `id`,  `date`,  `discrimination`,  `type`,  `create_by`,  `create_at`,  `update_by`,  `update_at`,  `finish_flag`";
$tdatachohyo[".sqlFrom"] = "FROM `chohyo`";
$tdatachohyo[".sqlWhereExpr"] = "";
$tdatachohyo[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatachohyo[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatachohyo[".arrGroupsPerPage"] = $arrGPP;

$tdatachohyo[".highlightSearchResults"] = true;

$tableKeyschohyo = array();
$tableKeyschohyo[] = "id";
$tdatachohyo[".Keys"] = $tableKeyschohyo;

$tdatachohyo[".listFields"] = array();
$tdatachohyo[".listFields"][] = "id";
$tdatachohyo[".listFields"][] = "date";
$tdatachohyo[".listFields"][] = "finish_flag";
$tdatachohyo[".listFields"][] = "discrimination";
$tdatachohyo[".listFields"][] = "type";
$tdatachohyo[".listFields"][] = "create_by";
$tdatachohyo[".listFields"][] = "create_at";
$tdatachohyo[".listFields"][] = "update_by";
$tdatachohyo[".listFields"][] = "update_at";

$tdatachohyo[".hideMobileList"] = array();


$tdatachohyo[".viewFields"] = array();

$tdatachohyo[".addFields"] = array();

$tdatachohyo[".masterListFields"] = array();
$tdatachohyo[".masterListFields"][] = "id";
$tdatachohyo[".masterListFields"][] = "date";
$tdatachohyo[".masterListFields"][] = "finish_flag";
$tdatachohyo[".masterListFields"][] = "discrimination";
$tdatachohyo[".masterListFields"][] = "type";
$tdatachohyo[".masterListFields"][] = "create_by";
$tdatachohyo[".masterListFields"][] = "create_at";
$tdatachohyo[".masterListFields"][] = "update_by";
$tdatachohyo[".masterListFields"][] = "update_at";

$tdatachohyo[".inlineAddFields"] = array();
$tdatachohyo[".inlineAddFields"][] = "date";
$tdatachohyo[".inlineAddFields"][] = "finish_flag";
$tdatachohyo[".inlineAddFields"][] = "discrimination";
$tdatachohyo[".inlineAddFields"][] = "type";

$tdatachohyo[".editFields"] = array();

$tdatachohyo[".inlineEditFields"] = array();
$tdatachohyo[".inlineEditFields"][] = "date";
$tdatachohyo[".inlineEditFields"][] = "finish_flag";
$tdatachohyo[".inlineEditFields"][] = "discrimination";
$tdatachohyo[".inlineEditFields"][] = "type";

$tdatachohyo[".updateSelectedFields"] = array();


$tdatachohyo[".exportFields"] = array();
$tdatachohyo[".exportFields"][] = "id";
$tdatachohyo[".exportFields"][] = "date";
$tdatachohyo[".exportFields"][] = "discrimination";
$tdatachohyo[".exportFields"][] = "type";
$tdatachohyo[".exportFields"][] = "create_by";
$tdatachohyo[".exportFields"][] = "create_at";
$tdatachohyo[".exportFields"][] = "update_by";
$tdatachohyo[".exportFields"][] = "update_at";

$tdatachohyo[".importFields"] = array();
$tdatachohyo[".importFields"][] = "id";
$tdatachohyo[".importFields"][] = "date";
$tdatachohyo[".importFields"][] = "discrimination";
$tdatachohyo[".importFields"][] = "type";
$tdatachohyo[".importFields"][] = "finish_flag";

$tdatachohyo[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "chohyo";
	$fdata["Label"] = GetFieldLabel("chohyo","id");
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




	$tdatachohyo["id"] = $fdata;
//	date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "date";
	$fdata["GoodName"] = "date";
	$fdata["ownerTable"] = "chohyo";
	$fdata["Label"] = GetFieldLabel("chohyo","date");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`date`";

	
	
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




	$tdatachohyo["date"] = $fdata;
//	discrimination
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "discrimination";
	$fdata["GoodName"] = "discrimination";
	$fdata["ownerTable"] = "chohyo";
	$fdata["Label"] = GetFieldLabel("chohyo","discrimination");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "discrimination";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`discrimination`";

	
	
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
	$edata["LookupTable"] = "mst_Discrimination";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "destination";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "destination";

	
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




	$tdatachohyo["discrimination"] = $fdata;
//	type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "type";
	$fdata["GoodName"] = "type";
	$fdata["ownerTable"] = "chohyo";
	$fdata["Label"] = GetFieldLabel("chohyo","type");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "type";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`type`";

	
	
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
	$edata["LookupTable"] = "mst_chohyo_type";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
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




	$tdatachohyo["type"] = $fdata;
//	create_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "create_by";
	$fdata["GoodName"] = "create_by";
	$fdata["ownerTable"] = "chohyo";
	$fdata["Label"] = GetFieldLabel("chohyo","create_by");
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




	$tdatachohyo["create_by"] = $fdata;
//	create_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "create_at";
	$fdata["GoodName"] = "create_at";
	$fdata["ownerTable"] = "chohyo";
	$fdata["Label"] = GetFieldLabel("chohyo","create_at");
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




	$tdatachohyo["create_at"] = $fdata;
//	update_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "update_by";
	$fdata["GoodName"] = "update_by";
	$fdata["ownerTable"] = "chohyo";
	$fdata["Label"] = GetFieldLabel("chohyo","update_by");
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




	$tdatachohyo["update_by"] = $fdata;
//	update_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "update_at";
	$fdata["GoodName"] = "update_at";
	$fdata["ownerTable"] = "chohyo";
	$fdata["Label"] = GetFieldLabel("chohyo","update_at");
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




	$tdatachohyo["update_at"] = $fdata;
//	finish_flag
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "finish_flag";
	$fdata["GoodName"] = "finish_flag";
	$fdata["ownerTable"] = "chohyo";
	$fdata["Label"] = GetFieldLabel("chohyo","finish_flag");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "finish_flag";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`finish_flag`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
	



	
	
	
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




	$tdatachohyo["finish_flag"] = $fdata;


$tables_data["chohyo"]=&$tdatachohyo;
$field_labels["chohyo"] = &$fieldLabelschohyo;
$fieldToolTips["chohyo"] = &$fieldToolTipschohyo;
$placeHolders["chohyo"] = &$placeHolderschohyo;
$page_titles["chohyo"] = &$pageTitleschohyo;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["chohyo"] = array();
//	chohyo_by_seihin_result
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="chohyo_by_seihin_result";
		$detailsParam["dOriginalTable"] = "shouhin";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "chohyo_by_seihin_result";
	$detailsParam["dCaptionTable"] = GetTableCaption("chohyo_by_seihin_result");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

/*			$detailsParam["dispChildCount"] = "1";
*/
	$detailsParam["dispChildCount"] = "1";

		$detailsParam["hideChild"] = true;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 0;
		$detailsParam["previewOnView"] = 1;
		
	$detailsTablesData["chohyo"][$dIndex] = $detailsParam;

	
		$detailsTablesData["chohyo"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["chohyo"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["chohyo"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["chohyo"][$dIndex]["detailKeys"][]="chohyo_id";
//	chohyo_by_dia_result
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="chohyo_by_dia_result";
		$detailsParam["dOriginalTable"] = "shouhin";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "chohyo_by_dia_result";
	$detailsParam["dCaptionTable"] = GetTableCaption("chohyo_by_dia_result");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

/*			$detailsParam["dispChildCount"] = "1";
*/
	$detailsParam["dispChildCount"] = "1";

		$detailsParam["hideChild"] = true;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 0;
		$detailsParam["previewOnView"] = 1;
		
	$detailsTablesData["chohyo"][$dIndex] = $detailsParam;

	
		$detailsTablesData["chohyo"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["chohyo"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["chohyo"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["chohyo"][$dIndex]["detailKeys"][]="chohyo_id";

// tables which are master tables for current table (detail)
$masterTablesData["chohyo"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_chohyo()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  `date`,  `discrimination`,  `type`,  `create_by`,  `create_at`,  `update_by`,  `update_at`,  `finish_flag`";
$proto0["m_strFrom"] = "FROM `chohyo`";
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
	"m_strTable" => "chohyo",
	"m_srcTableName" => "chohyo"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "chohyo";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "date",
	"m_strTable" => "chohyo",
	"m_srcTableName" => "chohyo"
));

$proto8["m_sql"] = "`date`";
$proto8["m_srcTableName"] = "chohyo";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "discrimination",
	"m_strTable" => "chohyo",
	"m_srcTableName" => "chohyo"
));

$proto10["m_sql"] = "`discrimination`";
$proto10["m_srcTableName"] = "chohyo";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "type",
	"m_strTable" => "chohyo",
	"m_srcTableName" => "chohyo"
));

$proto12["m_sql"] = "`type`";
$proto12["m_srcTableName"] = "chohyo";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "create_by",
	"m_strTable" => "chohyo",
	"m_srcTableName" => "chohyo"
));

$proto14["m_sql"] = "`create_by`";
$proto14["m_srcTableName"] = "chohyo";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "create_at",
	"m_strTable" => "chohyo",
	"m_srcTableName" => "chohyo"
));

$proto16["m_sql"] = "`create_at`";
$proto16["m_srcTableName"] = "chohyo";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "update_by",
	"m_strTable" => "chohyo",
	"m_srcTableName" => "chohyo"
));

$proto18["m_sql"] = "`update_by`";
$proto18["m_srcTableName"] = "chohyo";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "update_at",
	"m_strTable" => "chohyo",
	"m_srcTableName" => "chohyo"
));

$proto20["m_sql"] = "`update_at`";
$proto20["m_srcTableName"] = "chohyo";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "finish_flag",
	"m_strTable" => "chohyo",
	"m_srcTableName" => "chohyo"
));

$proto22["m_sql"] = "`finish_flag`";
$proto22["m_srcTableName"] = "chohyo";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "chohyo";
$proto25["m_srcTableName"] = "chohyo";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "id";
$proto25["m_columns"][] = "slip_number";
$proto25["m_columns"][] = "date";
$proto25["m_columns"][] = "discrimination";
$proto25["m_columns"][] = "type";
$proto25["m_columns"][] = "create_by";
$proto25["m_columns"][] = "create_at";
$proto25["m_columns"][] = "update_by";
$proto25["m_columns"][] = "update_at";
$proto25["m_columns"][] = "finish_flag";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "`chohyo`";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "chohyo";
$proto26=array();
$proto26["m_sql"] = "";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "";
$proto26["m_havingmode"] = false;
$proto26["m_inBrackets"] = false;
$proto26["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto26);

$proto24["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto24);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto28=array();
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "chohyo",
	"m_srcTableName" => "chohyo"
));

$proto28["m_column"]=$obj;
$proto28["m_bAsc"] = 0;
$proto28["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto28);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="chohyo";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_chohyo = createSqlQuery_chohyo();


	
		;

									

$tdatachohyo[".sqlquery"] = $queryData_chohyo;

include_once(getabspath("include/chohyo_events.php"));
$tableEvents["chohyo"] = new eventclass_chohyo;
$tdatachohyo[".hasEvents"] = true;

?>