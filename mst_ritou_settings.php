<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamst_ritou = array();
	$tdatamst_ritou[".truncateText"] = true;
	$tdatamst_ritou[".NumberOfChars"] = 80;
	$tdatamst_ritou[".ShortName"] = "mst_ritou";
	$tdatamst_ritou[".OwnerID"] = "";
	$tdatamst_ritou[".OriginalTable"] = "mst_ritou";

//	field labels
$fieldLabelsmst_ritou = array();
$fieldToolTipsmst_ritou = array();
$pageTitlesmst_ritou = array();
$placeHoldersmst_ritou = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmst_ritou["Japanese"] = array();
	$fieldToolTipsmst_ritou["Japanese"] = array();
	$placeHoldersmst_ritou["Japanese"] = array();
	$pageTitlesmst_ritou["Japanese"] = array();
	$fieldLabelsmst_ritou["Japanese"]["id"] = "Id";
	$fieldToolTipsmst_ritou["Japanese"]["id"] = "";
	$placeHoldersmst_ritou["Japanese"]["id"] = "";
	$fieldLabelsmst_ritou["Japanese"]["todou"] = "都道府県";
	$fieldToolTipsmst_ritou["Japanese"]["todou"] = "";
	$placeHoldersmst_ritou["Japanese"]["todou"] = "";
	$fieldLabelsmst_ritou["Japanese"]["sikugun"] = "市区郡";
	$fieldToolTipsmst_ritou["Japanese"]["sikugun"] = "";
	$placeHoldersmst_ritou["Japanese"]["sikugun"] = "";
	$fieldLabelsmst_ritou["Japanese"]["ika"] = "以下住所";
	$fieldToolTipsmst_ritou["Japanese"]["ika"] = "";
	$placeHoldersmst_ritou["Japanese"]["ika"] = "";
	$fieldLabelsmst_ritou["Japanese"]["create_at"] = "登録日";
	$fieldToolTipsmst_ritou["Japanese"]["create_at"] = "";
	$placeHoldersmst_ritou["Japanese"]["create_at"] = "";
	$fieldLabelsmst_ritou["Japanese"]["create_by"] = "登録者";
	$fieldToolTipsmst_ritou["Japanese"]["create_by"] = "";
	$placeHoldersmst_ritou["Japanese"]["create_by"] = "";
	$fieldLabelsmst_ritou["Japanese"]["update_at"] = "更新日";
	$fieldToolTipsmst_ritou["Japanese"]["update_at"] = "";
	$placeHoldersmst_ritou["Japanese"]["update_at"] = "";
	$fieldLabelsmst_ritou["Japanese"]["update_by"] = "更新者";
	$fieldToolTipsmst_ritou["Japanese"]["update_by"] = "";
	$placeHoldersmst_ritou["Japanese"]["update_by"] = "";
	if (count($fieldToolTipsmst_ritou["Japanese"]))
		$tdatamst_ritou[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmst_ritou[""] = array();
	$fieldToolTipsmst_ritou[""] = array();
	$placeHoldersmst_ritou[""] = array();
	$pageTitlesmst_ritou[""] = array();
	$fieldLabelsmst_ritou[""]["id"] = "Id";
	$fieldToolTipsmst_ritou[""]["id"] = "";
	$placeHoldersmst_ritou[""]["id"] = "";
	$fieldLabelsmst_ritou[""]["todou"] = "Todou";
	$fieldToolTipsmst_ritou[""]["todou"] = "";
	$placeHoldersmst_ritou[""]["todou"] = "";
	$fieldLabelsmst_ritou[""]["sikugun"] = "Sikugun";
	$fieldToolTipsmst_ritou[""]["sikugun"] = "";
	$placeHoldersmst_ritou[""]["sikugun"] = "";
	$fieldLabelsmst_ritou[""]["ika"] = "Ika";
	$fieldToolTipsmst_ritou[""]["ika"] = "";
	$placeHoldersmst_ritou[""]["ika"] = "";
	$fieldLabelsmst_ritou[""]["create_at"] = "Create At";
	$fieldToolTipsmst_ritou[""]["create_at"] = "";
	$placeHoldersmst_ritou[""]["create_at"] = "";
	$fieldLabelsmst_ritou[""]["create_by"] = "Create By";
	$fieldToolTipsmst_ritou[""]["create_by"] = "";
	$placeHoldersmst_ritou[""]["create_by"] = "";
	$fieldLabelsmst_ritou[""]["update_at"] = "Update At";
	$fieldToolTipsmst_ritou[""]["update_at"] = "";
	$placeHoldersmst_ritou[""]["update_at"] = "";
	$fieldLabelsmst_ritou[""]["update_by"] = "Update By";
	$fieldToolTipsmst_ritou[""]["update_by"] = "";
	$placeHoldersmst_ritou[""]["update_by"] = "";
	if (count($fieldToolTipsmst_ritou[""]))
		$tdatamst_ritou[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmst_ritou["English"] = array();
	$fieldToolTipsmst_ritou["English"] = array();
	$placeHoldersmst_ritou["English"] = array();
	$pageTitlesmst_ritou["English"] = array();
	$fieldLabelsmst_ritou["English"]["id"] = "Id";
	$fieldToolTipsmst_ritou["English"]["id"] = "";
	$placeHoldersmst_ritou["English"]["id"] = "";
	$fieldLabelsmst_ritou["English"]["todou"] = "Todou";
	$fieldToolTipsmst_ritou["English"]["todou"] = "";
	$placeHoldersmst_ritou["English"]["todou"] = "";
	$fieldLabelsmst_ritou["English"]["sikugun"] = "Sikugun";
	$fieldToolTipsmst_ritou["English"]["sikugun"] = "";
	$placeHoldersmst_ritou["English"]["sikugun"] = "";
	$fieldLabelsmst_ritou["English"]["ika"] = "Ika";
	$fieldToolTipsmst_ritou["English"]["ika"] = "";
	$placeHoldersmst_ritou["English"]["ika"] = "";
	$fieldLabelsmst_ritou["English"]["create_at"] = "Create At";
	$fieldToolTipsmst_ritou["English"]["create_at"] = "";
	$placeHoldersmst_ritou["English"]["create_at"] = "";
	$fieldLabelsmst_ritou["English"]["create_by"] = "Create By";
	$fieldToolTipsmst_ritou["English"]["create_by"] = "";
	$placeHoldersmst_ritou["English"]["create_by"] = "";
	$fieldLabelsmst_ritou["English"]["update_at"] = "Update At";
	$fieldToolTipsmst_ritou["English"]["update_at"] = "";
	$placeHoldersmst_ritou["English"]["update_at"] = "";
	$fieldLabelsmst_ritou["English"]["update_by"] = "Update By";
	$fieldToolTipsmst_ritou["English"]["update_by"] = "";
	$placeHoldersmst_ritou["English"]["update_by"] = "";
	if (count($fieldToolTipsmst_ritou["English"]))
		$tdatamst_ritou[".isUseToolTips"] = true;
}


	$tdatamst_ritou[".NCSearch"] = true;



$tdatamst_ritou[".shortTableName"] = "mst_ritou";
$tdatamst_ritou[".nSecOptions"] = 0;
$tdatamst_ritou[".recsPerRowPrint"] = 1;
$tdatamst_ritou[".mainTableOwnerID"] = "";
$tdatamst_ritou[".moveNext"] = 1;
$tdatamst_ritou[".entityType"] = 0;

$tdatamst_ritou[".strOriginalTableName"] = "mst_ritou";

	



$tdatamst_ritou[".showAddInPopup"] = false;

$tdatamst_ritou[".showEditInPopup"] = false;

$tdatamst_ritou[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamst_ritou[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamst_ritou[".fieldsForRegister"] = array();

$tdatamst_ritou[".listAjax"] = false;

	$tdatamst_ritou[".audit"] = true;

	$tdatamst_ritou[".locking"] = false;



$tdatamst_ritou[".list"] = true;

$tdatamst_ritou[".inlineEdit"] = true;


$tdatamst_ritou[".reorderRecordsByHeader"] = true;



$tdatamst_ritou[".inlineAdd"] = true;

$tdatamst_ritou[".import"] = true;

$tdatamst_ritou[".exportTo"] = true;


$tdatamst_ritou[".delete"] = true;

$tdatamst_ritou[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamst_ritou[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamst_ritou[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamst_ritou[".searchSaving"] = false;
//

$tdatamst_ritou[".showSearchPanel"] = true;
		$tdatamst_ritou[".flexibleSearch"] = true;

$tdatamst_ritou[".isUseAjaxSuggest"] = true;

$tdatamst_ritou[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatamst_ritou[".ajaxCodeSnippetAdded"] = false;

$tdatamst_ritou[".buttonsAdded"] = false;

$tdatamst_ritou[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamst_ritou[".isUseTimeForSearch"] = false;





$tdatamst_ritou[".allSearchFields"] = array();
$tdatamst_ritou[".filterFields"] = array();
$tdatamst_ritou[".requiredSearchFields"] = array();

$tdatamst_ritou[".allSearchFields"][] = "id";
	$tdatamst_ritou[".allSearchFields"][] = "todou";
	$tdatamst_ritou[".allSearchFields"][] = "sikugun";
	$tdatamst_ritou[".allSearchFields"][] = "ika";
	$tdatamst_ritou[".allSearchFields"][] = "create_at";
	$tdatamst_ritou[".allSearchFields"][] = "create_by";
	$tdatamst_ritou[".allSearchFields"][] = "update_at";
	$tdatamst_ritou[".allSearchFields"][] = "update_by";
	

$tdatamst_ritou[".googleLikeFields"] = array();
$tdatamst_ritou[".googleLikeFields"][] = "id";
$tdatamst_ritou[".googleLikeFields"][] = "todou";
$tdatamst_ritou[".googleLikeFields"][] = "sikugun";
$tdatamst_ritou[".googleLikeFields"][] = "ika";
$tdatamst_ritou[".googleLikeFields"][] = "create_at";
$tdatamst_ritou[".googleLikeFields"][] = "create_by";
$tdatamst_ritou[".googleLikeFields"][] = "update_at";
$tdatamst_ritou[".googleLikeFields"][] = "update_by";


$tdatamst_ritou[".advSearchFields"] = array();
$tdatamst_ritou[".advSearchFields"][] = "id";
$tdatamst_ritou[".advSearchFields"][] = "todou";
$tdatamst_ritou[".advSearchFields"][] = "sikugun";
$tdatamst_ritou[".advSearchFields"][] = "ika";
$tdatamst_ritou[".advSearchFields"][] = "create_at";
$tdatamst_ritou[".advSearchFields"][] = "create_by";
$tdatamst_ritou[".advSearchFields"][] = "update_at";
$tdatamst_ritou[".advSearchFields"][] = "update_by";

$tdatamst_ritou[".tableType"] = "list";

$tdatamst_ritou[".printerPageOrientation"] = 0;
$tdatamst_ritou[".nPrinterPageScale"] = 100;

$tdatamst_ritou[".nPrinterSplitRecords"] = 40;

$tdatamst_ritou[".nPrinterPDFSplitRecords"] = 40;



$tdatamst_ritou[".geocodingEnabled"] = false;





$tdatamst_ritou[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamst_ritou[".pageSize"] = 500;

$tdatamst_ritou[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `todou`";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamst_ritou[".strOrderBy"] = $tstrOrderBy;

$tdatamst_ritou[".orderindexes"] = array();
$tdatamst_ritou[".orderindexes"][] = array(2, (1 ? "ASC" : "DESC"), "`todou`");

$tdatamst_ritou[".sqlHead"] = "SELECT `id`,  `todou`,  `sikugun`,  `ika`,  `create_at`,  `create_by`,  `update_at`,  `update_by`";
$tdatamst_ritou[".sqlFrom"] = "FROM `mst_ritou`";
$tdatamst_ritou[".sqlWhereExpr"] = "";
$tdatamst_ritou[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamst_ritou[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamst_ritou[".arrGroupsPerPage"] = $arrGPP;

$tdatamst_ritou[".highlightSearchResults"] = true;

$tableKeysmst_ritou = array();
$tableKeysmst_ritou[] = "id";
$tdatamst_ritou[".Keys"] = $tableKeysmst_ritou;

$tdatamst_ritou[".listFields"] = array();
$tdatamst_ritou[".listFields"][] = "id";
$tdatamst_ritou[".listFields"][] = "todou";
$tdatamst_ritou[".listFields"][] = "sikugun";
$tdatamst_ritou[".listFields"][] = "ika";
$tdatamst_ritou[".listFields"][] = "create_at";
$tdatamst_ritou[".listFields"][] = "create_by";
$tdatamst_ritou[".listFields"][] = "update_at";
$tdatamst_ritou[".listFields"][] = "update_by";

$tdatamst_ritou[".hideMobileList"] = array();


$tdatamst_ritou[".viewFields"] = array();

$tdatamst_ritou[".addFields"] = array();

$tdatamst_ritou[".masterListFields"] = array();
$tdatamst_ritou[".masterListFields"][] = "id";
$tdatamst_ritou[".masterListFields"][] = "todou";
$tdatamst_ritou[".masterListFields"][] = "sikugun";
$tdatamst_ritou[".masterListFields"][] = "ika";
$tdatamst_ritou[".masterListFields"][] = "create_at";
$tdatamst_ritou[".masterListFields"][] = "create_by";
$tdatamst_ritou[".masterListFields"][] = "update_at";
$tdatamst_ritou[".masterListFields"][] = "update_by";

$tdatamst_ritou[".inlineAddFields"] = array();
$tdatamst_ritou[".inlineAddFields"][] = "todou";
$tdatamst_ritou[".inlineAddFields"][] = "sikugun";
$tdatamst_ritou[".inlineAddFields"][] = "ika";

$tdatamst_ritou[".editFields"] = array();

$tdatamst_ritou[".inlineEditFields"] = array();
$tdatamst_ritou[".inlineEditFields"][] = "todou";
$tdatamst_ritou[".inlineEditFields"][] = "sikugun";
$tdatamst_ritou[".inlineEditFields"][] = "ika";

$tdatamst_ritou[".updateSelectedFields"] = array();


$tdatamst_ritou[".exportFields"] = array();
$tdatamst_ritou[".exportFields"][] = "id";
$tdatamst_ritou[".exportFields"][] = "todou";
$tdatamst_ritou[".exportFields"][] = "sikugun";
$tdatamst_ritou[".exportFields"][] = "ika";

$tdatamst_ritou[".importFields"] = array();
$tdatamst_ritou[".importFields"][] = "id";
$tdatamst_ritou[".importFields"][] = "todou";
$tdatamst_ritou[".importFields"][] = "sikugun";
$tdatamst_ritou[".importFields"][] = "ika";

$tdatamst_ritou[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "mst_ritou";
	$fdata["Label"] = GetFieldLabel("mst_ritou","id");
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




	$tdatamst_ritou["id"] = $fdata;
//	todou
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "todou";
	$fdata["GoodName"] = "todou";
	$fdata["ownerTable"] = "mst_ritou";
	$fdata["Label"] = GetFieldLabel("mst_ritou","todou");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "todou";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`todou`";

	
	
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




	$tdatamst_ritou["todou"] = $fdata;
//	sikugun
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sikugun";
	$fdata["GoodName"] = "sikugun";
	$fdata["ownerTable"] = "mst_ritou";
	$fdata["Label"] = GetFieldLabel("mst_ritou","sikugun");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "sikugun";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`sikugun`";

	
	
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




	$tdatamst_ritou["sikugun"] = $fdata;
//	ika
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "ika";
	$fdata["GoodName"] = "ika";
	$fdata["ownerTable"] = "mst_ritou";
	$fdata["Label"] = GetFieldLabel("mst_ritou","ika");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ika";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`ika`";

	
	
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




	$tdatamst_ritou["ika"] = $fdata;
//	create_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "create_at";
	$fdata["GoodName"] = "create_at";
	$fdata["ownerTable"] = "mst_ritou";
	$fdata["Label"] = GetFieldLabel("mst_ritou","create_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdatamst_ritou["create_at"] = $fdata;
//	create_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "create_by";
	$fdata["GoodName"] = "create_by";
	$fdata["ownerTable"] = "mst_ritou";
	$fdata["Label"] = GetFieldLabel("mst_ritou","create_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdatamst_ritou["create_by"] = $fdata;
//	update_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "update_at";
	$fdata["GoodName"] = "update_at";
	$fdata["ownerTable"] = "mst_ritou";
	$fdata["Label"] = GetFieldLabel("mst_ritou","update_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdatamst_ritou["update_at"] = $fdata;
//	update_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "update_by";
	$fdata["GoodName"] = "update_by";
	$fdata["ownerTable"] = "mst_ritou";
	$fdata["Label"] = GetFieldLabel("mst_ritou","update_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdatamst_ritou["update_by"] = $fdata;


$tables_data["mst_ritou"]=&$tdatamst_ritou;
$field_labels["mst_ritou"] = &$fieldLabelsmst_ritou;
$fieldToolTips["mst_ritou"] = &$fieldToolTipsmst_ritou;
$placeHolders["mst_ritou"] = &$placeHoldersmst_ritou;
$page_titles["mst_ritou"] = &$pageTitlesmst_ritou;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mst_ritou"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mst_ritou"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mst_ritou()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  `todou`,  `sikugun`,  `ika`,  `create_at`,  `create_by`,  `update_at`,  `update_by`";
$proto0["m_strFrom"] = "FROM `mst_ritou`";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY `todou`";
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
	"m_strTable" => "mst_ritou",
	"m_srcTableName" => "mst_ritou"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "mst_ritou";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "todou",
	"m_strTable" => "mst_ritou",
	"m_srcTableName" => "mst_ritou"
));

$proto8["m_sql"] = "`todou`";
$proto8["m_srcTableName"] = "mst_ritou";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "sikugun",
	"m_strTable" => "mst_ritou",
	"m_srcTableName" => "mst_ritou"
));

$proto10["m_sql"] = "`sikugun`";
$proto10["m_srcTableName"] = "mst_ritou";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "ika",
	"m_strTable" => "mst_ritou",
	"m_srcTableName" => "mst_ritou"
));

$proto12["m_sql"] = "`ika`";
$proto12["m_srcTableName"] = "mst_ritou";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "create_at",
	"m_strTable" => "mst_ritou",
	"m_srcTableName" => "mst_ritou"
));

$proto14["m_sql"] = "`create_at`";
$proto14["m_srcTableName"] = "mst_ritou";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "create_by",
	"m_strTable" => "mst_ritou",
	"m_srcTableName" => "mst_ritou"
));

$proto16["m_sql"] = "`create_by`";
$proto16["m_srcTableName"] = "mst_ritou";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "update_at",
	"m_strTable" => "mst_ritou",
	"m_srcTableName" => "mst_ritou"
));

$proto18["m_sql"] = "`update_at`";
$proto18["m_srcTableName"] = "mst_ritou";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "update_by",
	"m_strTable" => "mst_ritou",
	"m_srcTableName" => "mst_ritou"
));

$proto20["m_sql"] = "`update_by`";
$proto20["m_srcTableName"] = "mst_ritou";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "mst_ritou";
$proto23["m_srcTableName"] = "mst_ritou";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "id";
$proto23["m_columns"][] = "todou";
$proto23["m_columns"][] = "sikugun";
$proto23["m_columns"][] = "ika";
$proto23["m_columns"][] = "create_at";
$proto23["m_columns"][] = "create_by";
$proto23["m_columns"][] = "update_at";
$proto23["m_columns"][] = "update_by";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "`mst_ritou`";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "mst_ritou";
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
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto26=array();
						$obj = new SQLField(array(
	"m_strName" => "todou",
	"m_strTable" => "mst_ritou",
	"m_srcTableName" => "mst_ritou"
));

$proto26["m_column"]=$obj;
$proto26["m_bAsc"] = 1;
$proto26["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto26);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="mst_ritou";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mst_ritou = createSqlQuery_mst_ritou();


	
		;

								

$tdatamst_ritou[".sqlquery"] = $queryData_mst_ritou;

include_once(getabspath("include/mst_ritou_events.php"));
$tableEvents["mst_ritou"] = new eventclass_mst_ritou;
$tdatamst_ritou[".hasEvents"] = true;

?>