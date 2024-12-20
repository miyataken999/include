<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamst_color_code = array();
	$tdatamst_color_code[".truncateText"] = true;
	$tdatamst_color_code[".NumberOfChars"] = 80;
	$tdatamst_color_code[".ShortName"] = "mst_color_code";
	$tdatamst_color_code[".OwnerID"] = "";
	$tdatamst_color_code[".OriginalTable"] = "mst_color_code";

//	field labels
$fieldLabelsmst_color_code = array();
$fieldToolTipsmst_color_code = array();
$pageTitlesmst_color_code = array();
$placeHoldersmst_color_code = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmst_color_code["Japanese"] = array();
	$fieldToolTipsmst_color_code["Japanese"] = array();
	$placeHoldersmst_color_code["Japanese"] = array();
	$pageTitlesmst_color_code["Japanese"] = array();
	$fieldLabelsmst_color_code["Japanese"]["id"] = "Id";
	$fieldToolTipsmst_color_code["Japanese"]["id"] = "";
	$placeHoldersmst_color_code["Japanese"]["id"] = "";
	$fieldLabelsmst_color_code["Japanese"]["name"] = "名称";
	$fieldToolTipsmst_color_code["Japanese"]["name"] = "";
	$placeHoldersmst_color_code["Japanese"]["name"] = "";
	$fieldLabelsmst_color_code["Japanese"]["code"] = "背景色";
	$fieldToolTipsmst_color_code["Japanese"]["code"] = "";
	$placeHoldersmst_color_code["Japanese"]["code"] = "";
	$fieldLabelsmst_color_code["Japanese"]["sort"] = "Sort";
	$fieldToolTipsmst_color_code["Japanese"]["sort"] = "";
	$placeHoldersmst_color_code["Japanese"]["sort"] = "";
	$fieldLabelsmst_color_code["Japanese"]["create_by"] = "登録者";
	$fieldToolTipsmst_color_code["Japanese"]["create_by"] = "";
	$placeHoldersmst_color_code["Japanese"]["create_by"] = "";
	$fieldLabelsmst_color_code["Japanese"]["create_at"] = "登録日";
	$fieldToolTipsmst_color_code["Japanese"]["create_at"] = "";
	$placeHoldersmst_color_code["Japanese"]["create_at"] = "";
	$fieldLabelsmst_color_code["Japanese"]["update_by"] = "更新者";
	$fieldToolTipsmst_color_code["Japanese"]["update_by"] = "";
	$placeHoldersmst_color_code["Japanese"]["update_by"] = "";
	$fieldLabelsmst_color_code["Japanese"]["update_at"] = "更新日";
	$fieldToolTipsmst_color_code["Japanese"]["update_at"] = "";
	$placeHoldersmst_color_code["Japanese"]["update_at"] = "";
	$fieldLabelsmst_color_code["Japanese"]["font_color"] = "文字色";
	$fieldToolTipsmst_color_code["Japanese"]["font_color"] = "";
	$placeHoldersmst_color_code["Japanese"]["font_color"] = "";
	$fieldLabelsmst_color_code["Japanese"]["res"] = "表示結果";
	$fieldToolTipsmst_color_code["Japanese"]["res"] = "";
	$placeHoldersmst_color_code["Japanese"]["res"] = "";
	if (count($fieldToolTipsmst_color_code["Japanese"]))
		$tdatamst_color_code[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmst_color_code[""] = array();
	$fieldToolTipsmst_color_code[""] = array();
	$placeHoldersmst_color_code[""] = array();
	$pageTitlesmst_color_code[""] = array();
	$fieldLabelsmst_color_code[""]["id"] = "Id";
	$fieldToolTipsmst_color_code[""]["id"] = "";
	$placeHoldersmst_color_code[""]["id"] = "";
	$fieldLabelsmst_color_code[""]["name"] = "Name";
	$fieldToolTipsmst_color_code[""]["name"] = "";
	$placeHoldersmst_color_code[""]["name"] = "";
	$fieldLabelsmst_color_code[""]["code"] = "Code";
	$fieldToolTipsmst_color_code[""]["code"] = "";
	$placeHoldersmst_color_code[""]["code"] = "";
	$fieldLabelsmst_color_code[""]["sort"] = "Sort";
	$fieldToolTipsmst_color_code[""]["sort"] = "";
	$placeHoldersmst_color_code[""]["sort"] = "";
	$fieldLabelsmst_color_code[""]["create_by"] = "Create By";
	$fieldToolTipsmst_color_code[""]["create_by"] = "";
	$placeHoldersmst_color_code[""]["create_by"] = "";
	$fieldLabelsmst_color_code[""]["create_at"] = "Create At";
	$fieldToolTipsmst_color_code[""]["create_at"] = "";
	$placeHoldersmst_color_code[""]["create_at"] = "";
	$fieldLabelsmst_color_code[""]["update_by"] = "Update By";
	$fieldToolTipsmst_color_code[""]["update_by"] = "";
	$placeHoldersmst_color_code[""]["update_by"] = "";
	$fieldLabelsmst_color_code[""]["update_at"] = "Update At";
	$fieldToolTipsmst_color_code[""]["update_at"] = "";
	$placeHoldersmst_color_code[""]["update_at"] = "";
	$fieldLabelsmst_color_code[""]["font_color"] = "Font Color";
	$fieldToolTipsmst_color_code[""]["font_color"] = "";
	$placeHoldersmst_color_code[""]["font_color"] = "";
	$fieldLabelsmst_color_code[""]["res"] = "Res";
	$fieldToolTipsmst_color_code[""]["res"] = "";
	$placeHoldersmst_color_code[""]["res"] = "";
	if (count($fieldToolTipsmst_color_code[""]))
		$tdatamst_color_code[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmst_color_code["English"] = array();
	$fieldToolTipsmst_color_code["English"] = array();
	$placeHoldersmst_color_code["English"] = array();
	$pageTitlesmst_color_code["English"] = array();
	$fieldLabelsmst_color_code["English"]["id"] = "Id";
	$fieldToolTipsmst_color_code["English"]["id"] = "";
	$placeHoldersmst_color_code["English"]["id"] = "";
	$fieldLabelsmst_color_code["English"]["name"] = "Name";
	$fieldToolTipsmst_color_code["English"]["name"] = "";
	$placeHoldersmst_color_code["English"]["name"] = "";
	$fieldLabelsmst_color_code["English"]["code"] = "Code";
	$fieldToolTipsmst_color_code["English"]["code"] = "";
	$placeHoldersmst_color_code["English"]["code"] = "";
	$fieldLabelsmst_color_code["English"]["sort"] = "Sort";
	$fieldToolTipsmst_color_code["English"]["sort"] = "";
	$placeHoldersmst_color_code["English"]["sort"] = "";
	$fieldLabelsmst_color_code["English"]["create_by"] = "Create By";
	$fieldToolTipsmst_color_code["English"]["create_by"] = "";
	$placeHoldersmst_color_code["English"]["create_by"] = "";
	$fieldLabelsmst_color_code["English"]["create_at"] = "Create At";
	$fieldToolTipsmst_color_code["English"]["create_at"] = "";
	$placeHoldersmst_color_code["English"]["create_at"] = "";
	$fieldLabelsmst_color_code["English"]["update_by"] = "Update By";
	$fieldToolTipsmst_color_code["English"]["update_by"] = "";
	$placeHoldersmst_color_code["English"]["update_by"] = "";
	$fieldLabelsmst_color_code["English"]["update_at"] = "Update At";
	$fieldToolTipsmst_color_code["English"]["update_at"] = "";
	$placeHoldersmst_color_code["English"]["update_at"] = "";
	$fieldLabelsmst_color_code["English"]["font_color"] = "Font Color";
	$fieldToolTipsmst_color_code["English"]["font_color"] = "";
	$placeHoldersmst_color_code["English"]["font_color"] = "";
	$fieldLabelsmst_color_code["English"]["res"] = "Res";
	$fieldToolTipsmst_color_code["English"]["res"] = "";
	$placeHoldersmst_color_code["English"]["res"] = "";
	if (count($fieldToolTipsmst_color_code["English"]))
		$tdatamst_color_code[".isUseToolTips"] = true;
}


	$tdatamst_color_code[".NCSearch"] = true;



$tdatamst_color_code[".shortTableName"] = "mst_color_code";
$tdatamst_color_code[".nSecOptions"] = 0;
$tdatamst_color_code[".recsPerRowPrint"] = 1;
$tdatamst_color_code[".mainTableOwnerID"] = "";
$tdatamst_color_code[".moveNext"] = 1;
$tdatamst_color_code[".entityType"] = 0;

$tdatamst_color_code[".strOriginalTableName"] = "mst_color_code";

	



$tdatamst_color_code[".showAddInPopup"] = false;

$tdatamst_color_code[".showEditInPopup"] = false;

$tdatamst_color_code[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamst_color_code[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamst_color_code[".fieldsForRegister"] = array();

$tdatamst_color_code[".listAjax"] = false;

	$tdatamst_color_code[".audit"] = true;

	$tdatamst_color_code[".locking"] = false;



$tdatamst_color_code[".list"] = true;

$tdatamst_color_code[".inlineEdit"] = true;


$tdatamst_color_code[".reorderRecordsByHeader"] = true;



$tdatamst_color_code[".inlineAdd"] = true;

$tdatamst_color_code[".import"] = true;

$tdatamst_color_code[".exportTo"] = true;


$tdatamst_color_code[".delete"] = true;

$tdatamst_color_code[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamst_color_code[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamst_color_code[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamst_color_code[".searchSaving"] = false;
//

$tdatamst_color_code[".showSearchPanel"] = true;
		$tdatamst_color_code[".flexibleSearch"] = true;

$tdatamst_color_code[".isUseAjaxSuggest"] = true;

$tdatamst_color_code[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatamst_color_code[".ajaxCodeSnippetAdded"] = false;

$tdatamst_color_code[".buttonsAdded"] = false;

$tdatamst_color_code[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamst_color_code[".isUseTimeForSearch"] = false;





$tdatamst_color_code[".allSearchFields"] = array();
$tdatamst_color_code[".filterFields"] = array();
$tdatamst_color_code[".requiredSearchFields"] = array();

$tdatamst_color_code[".allSearchFields"][] = "id";
	$tdatamst_color_code[".allSearchFields"][] = "name";
	$tdatamst_color_code[".allSearchFields"][] = "code";
	$tdatamst_color_code[".allSearchFields"][] = "sort";
	$tdatamst_color_code[".allSearchFields"][] = "create_by";
	$tdatamst_color_code[".allSearchFields"][] = "create_at";
	$tdatamst_color_code[".allSearchFields"][] = "update_by";
	$tdatamst_color_code[".allSearchFields"][] = "update_at";
	$tdatamst_color_code[".allSearchFields"][] = "font_color";
	$tdatamst_color_code[".allSearchFields"][] = "res";
	

$tdatamst_color_code[".googleLikeFields"] = array();
$tdatamst_color_code[".googleLikeFields"][] = "id";
$tdatamst_color_code[".googleLikeFields"][] = "name";
$tdatamst_color_code[".googleLikeFields"][] = "code";
$tdatamst_color_code[".googleLikeFields"][] = "sort";
$tdatamst_color_code[".googleLikeFields"][] = "create_by";
$tdatamst_color_code[".googleLikeFields"][] = "create_at";
$tdatamst_color_code[".googleLikeFields"][] = "update_by";
$tdatamst_color_code[".googleLikeFields"][] = "update_at";
$tdatamst_color_code[".googleLikeFields"][] = "font_color";
$tdatamst_color_code[".googleLikeFields"][] = "res";


$tdatamst_color_code[".advSearchFields"] = array();
$tdatamst_color_code[".advSearchFields"][] = "id";
$tdatamst_color_code[".advSearchFields"][] = "name";
$tdatamst_color_code[".advSearchFields"][] = "code";
$tdatamst_color_code[".advSearchFields"][] = "sort";
$tdatamst_color_code[".advSearchFields"][] = "create_by";
$tdatamst_color_code[".advSearchFields"][] = "create_at";
$tdatamst_color_code[".advSearchFields"][] = "update_by";
$tdatamst_color_code[".advSearchFields"][] = "update_at";
$tdatamst_color_code[".advSearchFields"][] = "font_color";
$tdatamst_color_code[".advSearchFields"][] = "res";

$tdatamst_color_code[".tableType"] = "list";

$tdatamst_color_code[".printerPageOrientation"] = 0;
$tdatamst_color_code[".nPrinterPageScale"] = 100;

$tdatamst_color_code[".nPrinterSplitRecords"] = 40;

$tdatamst_color_code[".nPrinterPDFSplitRecords"] = 40;



$tdatamst_color_code[".geocodingEnabled"] = false;





$tdatamst_color_code[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamst_color_code[".pageSize"] = 20;

$tdatamst_color_code[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `sort`";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamst_color_code[".strOrderBy"] = $tstrOrderBy;

$tdatamst_color_code[".orderindexes"] = array();
$tdatamst_color_code[".orderindexes"][] = array(4, (1 ? "ASC" : "DESC"), "`sort`");

$tdatamst_color_code[".sqlHead"] = "SELECT `id`,  `name`,  `code`,  `sort`,  `create_by`,  `create_at`,  `update_by`,  `update_at`,  `font_color`,  concat('') as `res`";
$tdatamst_color_code[".sqlFrom"] = "FROM `mst_color_code`";
$tdatamst_color_code[".sqlWhereExpr"] = "";
$tdatamst_color_code[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamst_color_code[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamst_color_code[".arrGroupsPerPage"] = $arrGPP;

$tdatamst_color_code[".highlightSearchResults"] = true;

$tableKeysmst_color_code = array();
$tableKeysmst_color_code[] = "id";
$tdatamst_color_code[".Keys"] = $tableKeysmst_color_code;

$tdatamst_color_code[".listFields"] = array();
$tdatamst_color_code[".listFields"][] = "id";
$tdatamst_color_code[".listFields"][] = "res";
$tdatamst_color_code[".listFields"][] = "name";
$tdatamst_color_code[".listFields"][] = "code";
$tdatamst_color_code[".listFields"][] = "font_color";
$tdatamst_color_code[".listFields"][] = "sort";
$tdatamst_color_code[".listFields"][] = "create_by";
$tdatamst_color_code[".listFields"][] = "create_at";
$tdatamst_color_code[".listFields"][] = "update_by";
$tdatamst_color_code[".listFields"][] = "update_at";

$tdatamst_color_code[".hideMobileList"] = array();


$tdatamst_color_code[".viewFields"] = array();

$tdatamst_color_code[".addFields"] = array();

$tdatamst_color_code[".masterListFields"] = array();
$tdatamst_color_code[".masterListFields"][] = "id";
$tdatamst_color_code[".masterListFields"][] = "name";
$tdatamst_color_code[".masterListFields"][] = "code";
$tdatamst_color_code[".masterListFields"][] = "sort";
$tdatamst_color_code[".masterListFields"][] = "create_by";
$tdatamst_color_code[".masterListFields"][] = "create_at";
$tdatamst_color_code[".masterListFields"][] = "update_by";
$tdatamst_color_code[".masterListFields"][] = "update_at";
$tdatamst_color_code[".masterListFields"][] = "font_color";
$tdatamst_color_code[".masterListFields"][] = "res";

$tdatamst_color_code[".inlineAddFields"] = array();
$tdatamst_color_code[".inlineAddFields"][] = "name";
$tdatamst_color_code[".inlineAddFields"][] = "code";
$tdatamst_color_code[".inlineAddFields"][] = "font_color";
$tdatamst_color_code[".inlineAddFields"][] = "sort";

$tdatamst_color_code[".editFields"] = array();

$tdatamst_color_code[".inlineEditFields"] = array();
$tdatamst_color_code[".inlineEditFields"][] = "name";
$tdatamst_color_code[".inlineEditFields"][] = "code";
$tdatamst_color_code[".inlineEditFields"][] = "font_color";
$tdatamst_color_code[".inlineEditFields"][] = "sort";

$tdatamst_color_code[".updateSelectedFields"] = array();


$tdatamst_color_code[".exportFields"] = array();
$tdatamst_color_code[".exportFields"][] = "id";
$tdatamst_color_code[".exportFields"][] = "name";
$tdatamst_color_code[".exportFields"][] = "code";
$tdatamst_color_code[".exportFields"][] = "sort";
$tdatamst_color_code[".exportFields"][] = "create_by";
$tdatamst_color_code[".exportFields"][] = "create_at";
$tdatamst_color_code[".exportFields"][] = "update_by";
$tdatamst_color_code[".exportFields"][] = "update_at";
$tdatamst_color_code[".exportFields"][] = "font_color";

$tdatamst_color_code[".importFields"] = array();
$tdatamst_color_code[".importFields"][] = "id";
$tdatamst_color_code[".importFields"][] = "name";
$tdatamst_color_code[".importFields"][] = "code";
$tdatamst_color_code[".importFields"][] = "sort";
$tdatamst_color_code[".importFields"][] = "font_color";

$tdatamst_color_code[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "mst_color_code";
	$fdata["Label"] = GetFieldLabel("mst_color_code","id");
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




	$tdatamst_color_code["id"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "mst_color_code";
	$fdata["Label"] = GetFieldLabel("mst_color_code","name");
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




	$tdatamst_color_code["name"] = $fdata;
//	code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "code";
	$fdata["GoodName"] = "code";
	$fdata["ownerTable"] = "mst_color_code";
	$fdata["Label"] = GetFieldLabel("mst_color_code","code");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "code";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`code`";

	
	
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




	$tdatamst_color_code["code"] = $fdata;
//	sort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "sort";
	$fdata["GoodName"] = "sort";
	$fdata["ownerTable"] = "mst_color_code";
	$fdata["Label"] = GetFieldLabel("mst_color_code","sort");
	$fdata["FieldType"] = 200;

	
	
	
			
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




	$tdatamst_color_code["sort"] = $fdata;
//	create_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "create_by";
	$fdata["GoodName"] = "create_by";
	$fdata["ownerTable"] = "mst_color_code";
	$fdata["Label"] = GetFieldLabel("mst_color_code","create_by");
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




	$tdatamst_color_code["create_by"] = $fdata;
//	create_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "create_at";
	$fdata["GoodName"] = "create_at";
	$fdata["ownerTable"] = "mst_color_code";
	$fdata["Label"] = GetFieldLabel("mst_color_code","create_at");
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




	$tdatamst_color_code["create_at"] = $fdata;
//	update_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "update_by";
	$fdata["GoodName"] = "update_by";
	$fdata["ownerTable"] = "mst_color_code";
	$fdata["Label"] = GetFieldLabel("mst_color_code","update_by");
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




	$tdatamst_color_code["update_by"] = $fdata;
//	update_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "update_at";
	$fdata["GoodName"] = "update_at";
	$fdata["ownerTable"] = "mst_color_code";
	$fdata["Label"] = GetFieldLabel("mst_color_code","update_at");
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




	$tdatamst_color_code["update_at"] = $fdata;
//	font_color
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "font_color";
	$fdata["GoodName"] = "font_color";
	$fdata["ownerTable"] = "mst_color_code";
	$fdata["Label"] = GetFieldLabel("mst_color_code","font_color");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "font_color";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`font_color`";

	
	
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




	$tdatamst_color_code["font_color"] = $fdata;
//	res
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "res";
	$fdata["GoodName"] = "res";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("mst_color_code","res");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "res";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "concat('')";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
	



	
	
	
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




	$tdatamst_color_code["res"] = $fdata;


$tables_data["mst_color_code"]=&$tdatamst_color_code;
$field_labels["mst_color_code"] = &$fieldLabelsmst_color_code;
$fieldToolTips["mst_color_code"] = &$fieldToolTipsmst_color_code;
$placeHolders["mst_color_code"] = &$placeHoldersmst_color_code;
$page_titles["mst_color_code"] = &$pageTitlesmst_color_code;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mst_color_code"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mst_color_code"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mst_color_code()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  `name`,  `code`,  `sort`,  `create_by`,  `create_at`,  `update_by`,  `update_at`,  `font_color`,  concat('') as `res`";
$proto0["m_strFrom"] = "FROM `mst_color_code`";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY `sort`";
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
	"m_strTable" => "mst_color_code",
	"m_srcTableName" => "mst_color_code"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "mst_color_code";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "mst_color_code",
	"m_srcTableName" => "mst_color_code"
));

$proto8["m_sql"] = "`name`";
$proto8["m_srcTableName"] = "mst_color_code";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "code",
	"m_strTable" => "mst_color_code",
	"m_srcTableName" => "mst_color_code"
));

$proto10["m_sql"] = "`code`";
$proto10["m_srcTableName"] = "mst_color_code";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "sort",
	"m_strTable" => "mst_color_code",
	"m_srcTableName" => "mst_color_code"
));

$proto12["m_sql"] = "`sort`";
$proto12["m_srcTableName"] = "mst_color_code";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "create_by",
	"m_strTable" => "mst_color_code",
	"m_srcTableName" => "mst_color_code"
));

$proto14["m_sql"] = "`create_by`";
$proto14["m_srcTableName"] = "mst_color_code";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "create_at",
	"m_strTable" => "mst_color_code",
	"m_srcTableName" => "mst_color_code"
));

$proto16["m_sql"] = "`create_at`";
$proto16["m_srcTableName"] = "mst_color_code";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "update_by",
	"m_strTable" => "mst_color_code",
	"m_srcTableName" => "mst_color_code"
));

$proto18["m_sql"] = "`update_by`";
$proto18["m_srcTableName"] = "mst_color_code";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "update_at",
	"m_strTable" => "mst_color_code",
	"m_srcTableName" => "mst_color_code"
));

$proto20["m_sql"] = "`update_at`";
$proto20["m_srcTableName"] = "mst_color_code";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "font_color",
	"m_strTable" => "mst_color_code",
	"m_srcTableName" => "mst_color_code"
));

$proto22["m_sql"] = "`font_color`";
$proto22["m_srcTableName"] = "mst_color_code";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$proto25=array();
$proto25["m_functiontype"] = "SQLF_CUSTOM";
$proto25["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "''"
));

$proto25["m_arguments"][]=$obj;
$proto25["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto25);

$proto24["m_sql"] = "concat('')";
$proto24["m_srcTableName"] = "mst_color_code";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "res";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto27=array();
$proto27["m_link"] = "SQLL_MAIN";
			$proto28=array();
$proto28["m_strName"] = "mst_color_code";
$proto28["m_srcTableName"] = "mst_color_code";
$proto28["m_columns"] = array();
$proto28["m_columns"][] = "id";
$proto28["m_columns"][] = "name";
$proto28["m_columns"][] = "code";
$proto28["m_columns"][] = "font_color";
$proto28["m_columns"][] = "sort";
$proto28["m_columns"][] = "create_by";
$proto28["m_columns"][] = "create_at";
$proto28["m_columns"][] = "update_by";
$proto28["m_columns"][] = "update_at";
$obj = new SQLTable($proto28);

$proto27["m_table"] = $obj;
$proto27["m_sql"] = "`mst_color_code`";
$proto27["m_alias"] = "";
$proto27["m_srcTableName"] = "mst_color_code";
$proto29=array();
$proto29["m_sql"] = "";
$proto29["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto29["m_column"]=$obj;
$proto29["m_contained"] = array();
$proto29["m_strCase"] = "";
$proto29["m_havingmode"] = false;
$proto29["m_inBrackets"] = false;
$proto29["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto29);

$proto27["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto27);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto31=array();
						$obj = new SQLField(array(
	"m_strName" => "sort",
	"m_strTable" => "mst_color_code",
	"m_srcTableName" => "mst_color_code"
));

$proto31["m_column"]=$obj;
$proto31["m_bAsc"] = 1;
$proto31["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto31);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="mst_color_code";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mst_color_code = createSqlQuery_mst_color_code();


	
		;

										

$tdatamst_color_code[".sqlquery"] = $queryData_mst_color_code;

include_once(getabspath("include/mst_color_code_events.php"));
$tableEvents["mst_color_code"] = new eventclass_mst_color_code;
$tdatamst_color_code[".hasEvents"] = true;

?>