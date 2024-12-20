<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamst_Finish = array();
	$tdatamst_Finish[".truncateText"] = true;
	$tdatamst_Finish[".NumberOfChars"] = 80;
	$tdatamst_Finish[".ShortName"] = "mst_Finish";
	$tdatamst_Finish[".OwnerID"] = "";
	$tdatamst_Finish[".OriginalTable"] = "mst_Finish";

//	field labels
$fieldLabelsmst_Finish = array();
$fieldToolTipsmst_Finish = array();
$pageTitlesmst_Finish = array();
$placeHoldersmst_Finish = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmst_Finish["Japanese"] = array();
	$fieldToolTipsmst_Finish["Japanese"] = array();
	$placeHoldersmst_Finish["Japanese"] = array();
	$pageTitlesmst_Finish["Japanese"] = array();
	$fieldLabelsmst_Finish["Japanese"]["id"] = "Id";
	$fieldToolTipsmst_Finish["Japanese"]["id"] = "";
	$placeHoldersmst_Finish["Japanese"]["id"] = "";
	$fieldLabelsmst_Finish["Japanese"]["val"] = "Val";
	$fieldToolTipsmst_Finish["Japanese"]["val"] = "";
	$placeHoldersmst_Finish["Japanese"]["val"] = "";
	$fieldLabelsmst_Finish["Japanese"]["sort"] = "Sort";
	$fieldToolTipsmst_Finish["Japanese"]["sort"] = "";
	$placeHoldersmst_Finish["Japanese"]["sort"] = "";
	$fieldLabelsmst_Finish["Japanese"]["update_at"] = "更新日";
	$fieldToolTipsmst_Finish["Japanese"]["update_at"] = "";
	$placeHoldersmst_Finish["Japanese"]["update_at"] = "";
	$fieldLabelsmst_Finish["Japanese"]["update_by"] = "更新者";
	$fieldToolTipsmst_Finish["Japanese"]["update_by"] = "";
	$placeHoldersmst_Finish["Japanese"]["update_by"] = "";
	$fieldLabelsmst_Finish["Japanese"]["create_at"] = "登録日";
	$fieldToolTipsmst_Finish["Japanese"]["create_at"] = "";
	$placeHoldersmst_Finish["Japanese"]["create_at"] = "";
	$fieldLabelsmst_Finish["Japanese"]["create_by"] = "登録者";
	$fieldToolTipsmst_Finish["Japanese"]["create_by"] = "";
	$placeHoldersmst_Finish["Japanese"]["create_by"] = "";
	$fieldLabelsmst_Finish["Japanese"]["chohyo_flag"] = "帳票チェック";
	$fieldToolTipsmst_Finish["Japanese"]["chohyo_flag"] = "";
	$placeHoldersmst_Finish["Japanese"]["chohyo_flag"] = "";
	$fieldLabelsmst_Finish["Japanese"]["cost"] = "仕上げコスト";
	$fieldToolTipsmst_Finish["Japanese"]["cost"] = "";
	$placeHoldersmst_Finish["Japanese"]["cost"] = "";
	if (count($fieldToolTipsmst_Finish["Japanese"]))
		$tdatamst_Finish[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmst_Finish[""] = array();
	$fieldToolTipsmst_Finish[""] = array();
	$placeHoldersmst_Finish[""] = array();
	$pageTitlesmst_Finish[""] = array();
	$fieldLabelsmst_Finish[""]["id"] = "Id";
	$fieldToolTipsmst_Finish[""]["id"] = "";
	$placeHoldersmst_Finish[""]["id"] = "";
	$fieldLabelsmst_Finish[""]["val"] = "Val";
	$fieldToolTipsmst_Finish[""]["val"] = "";
	$placeHoldersmst_Finish[""]["val"] = "";
	$fieldLabelsmst_Finish[""]["sort"] = "Sort";
	$fieldToolTipsmst_Finish[""]["sort"] = "";
	$placeHoldersmst_Finish[""]["sort"] = "";
	$fieldLabelsmst_Finish[""]["update_at"] = "Update At";
	$fieldToolTipsmst_Finish[""]["update_at"] = "";
	$placeHoldersmst_Finish[""]["update_at"] = "";
	$fieldLabelsmst_Finish[""]["update_by"] = "Update By";
	$fieldToolTipsmst_Finish[""]["update_by"] = "";
	$placeHoldersmst_Finish[""]["update_by"] = "";
	$fieldLabelsmst_Finish[""]["create_at"] = "Create At";
	$fieldToolTipsmst_Finish[""]["create_at"] = "";
	$placeHoldersmst_Finish[""]["create_at"] = "";
	$fieldLabelsmst_Finish[""]["create_by"] = "Create By";
	$fieldToolTipsmst_Finish[""]["create_by"] = "";
	$placeHoldersmst_Finish[""]["create_by"] = "";
	$fieldLabelsmst_Finish[""]["chohyo_flag"] = "Chohyo Flag";
	$fieldToolTipsmst_Finish[""]["chohyo_flag"] = "";
	$placeHoldersmst_Finish[""]["chohyo_flag"] = "";
	$fieldLabelsmst_Finish[""]["cost"] = "Cost";
	$fieldToolTipsmst_Finish[""]["cost"] = "";
	$placeHoldersmst_Finish[""]["cost"] = "";
	if (count($fieldToolTipsmst_Finish[""]))
		$tdatamst_Finish[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmst_Finish["English"] = array();
	$fieldToolTipsmst_Finish["English"] = array();
	$placeHoldersmst_Finish["English"] = array();
	$pageTitlesmst_Finish["English"] = array();
	$fieldLabelsmst_Finish["English"]["id"] = "Id";
	$fieldToolTipsmst_Finish["English"]["id"] = "";
	$placeHoldersmst_Finish["English"]["id"] = "";
	$fieldLabelsmst_Finish["English"]["val"] = "Val";
	$fieldToolTipsmst_Finish["English"]["val"] = "";
	$placeHoldersmst_Finish["English"]["val"] = "";
	$fieldLabelsmst_Finish["English"]["sort"] = "Sort";
	$fieldToolTipsmst_Finish["English"]["sort"] = "";
	$placeHoldersmst_Finish["English"]["sort"] = "";
	$fieldLabelsmst_Finish["English"]["update_at"] = "Update At";
	$fieldToolTipsmst_Finish["English"]["update_at"] = "";
	$placeHoldersmst_Finish["English"]["update_at"] = "";
	$fieldLabelsmst_Finish["English"]["update_by"] = "Update By";
	$fieldToolTipsmst_Finish["English"]["update_by"] = "";
	$placeHoldersmst_Finish["English"]["update_by"] = "";
	$fieldLabelsmst_Finish["English"]["create_at"] = "Create At";
	$fieldToolTipsmst_Finish["English"]["create_at"] = "";
	$placeHoldersmst_Finish["English"]["create_at"] = "";
	$fieldLabelsmst_Finish["English"]["create_by"] = "Create By";
	$fieldToolTipsmst_Finish["English"]["create_by"] = "";
	$placeHoldersmst_Finish["English"]["create_by"] = "";
	$fieldLabelsmst_Finish["English"]["chohyo_flag"] = "Chohyo Flag";
	$fieldToolTipsmst_Finish["English"]["chohyo_flag"] = "";
	$placeHoldersmst_Finish["English"]["chohyo_flag"] = "";
	$fieldLabelsmst_Finish["English"]["cost"] = "Cost";
	$fieldToolTipsmst_Finish["English"]["cost"] = "";
	$placeHoldersmst_Finish["English"]["cost"] = "";
	if (count($fieldToolTipsmst_Finish["English"]))
		$tdatamst_Finish[".isUseToolTips"] = true;
}


	$tdatamst_Finish[".NCSearch"] = true;



$tdatamst_Finish[".shortTableName"] = "mst_Finish";
$tdatamst_Finish[".nSecOptions"] = 0;
$tdatamst_Finish[".recsPerRowPrint"] = 1;
$tdatamst_Finish[".mainTableOwnerID"] = "";
$tdatamst_Finish[".moveNext"] = 1;
$tdatamst_Finish[".entityType"] = 0;

$tdatamst_Finish[".strOriginalTableName"] = "mst_Finish";

	



$tdatamst_Finish[".showAddInPopup"] = false;

$tdatamst_Finish[".showEditInPopup"] = false;

$tdatamst_Finish[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamst_Finish[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamst_Finish[".fieldsForRegister"] = array();

$tdatamst_Finish[".listAjax"] = false;

	$tdatamst_Finish[".audit"] = true;

	$tdatamst_Finish[".locking"] = false;



$tdatamst_Finish[".list"] = true;

$tdatamst_Finish[".inlineEdit"] = true;


$tdatamst_Finish[".reorderRecordsByHeader"] = true;



$tdatamst_Finish[".inlineAdd"] = true;

$tdatamst_Finish[".import"] = true;

$tdatamst_Finish[".exportTo"] = true;


$tdatamst_Finish[".delete"] = true;

$tdatamst_Finish[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamst_Finish[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamst_Finish[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamst_Finish[".searchSaving"] = false;
//

$tdatamst_Finish[".showSearchPanel"] = true;
		$tdatamst_Finish[".flexibleSearch"] = true;

$tdatamst_Finish[".isUseAjaxSuggest"] = true;

$tdatamst_Finish[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatamst_Finish[".ajaxCodeSnippetAdded"] = false;

$tdatamst_Finish[".buttonsAdded"] = false;

$tdatamst_Finish[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamst_Finish[".isUseTimeForSearch"] = false;





$tdatamst_Finish[".allSearchFields"] = array();
$tdatamst_Finish[".filterFields"] = array();
$tdatamst_Finish[".requiredSearchFields"] = array();

$tdatamst_Finish[".allSearchFields"][] = "val";
	$tdatamst_Finish[".allSearchFields"][] = "sort";
	$tdatamst_Finish[".allSearchFields"][] = "chohyo_flag";
	$tdatamst_Finish[".allSearchFields"][] = "cost";
	

$tdatamst_Finish[".googleLikeFields"] = array();
$tdatamst_Finish[".googleLikeFields"][] = "id";
$tdatamst_Finish[".googleLikeFields"][] = "val";
$tdatamst_Finish[".googleLikeFields"][] = "sort";
$tdatamst_Finish[".googleLikeFields"][] = "update_at";
$tdatamst_Finish[".googleLikeFields"][] = "update_by";
$tdatamst_Finish[".googleLikeFields"][] = "create_at";
$tdatamst_Finish[".googleLikeFields"][] = "create_by";
$tdatamst_Finish[".googleLikeFields"][] = "chohyo_flag";
$tdatamst_Finish[".googleLikeFields"][] = "cost";


$tdatamst_Finish[".advSearchFields"] = array();
$tdatamst_Finish[".advSearchFields"][] = "val";
$tdatamst_Finish[".advSearchFields"][] = "sort";
$tdatamst_Finish[".advSearchFields"][] = "chohyo_flag";
$tdatamst_Finish[".advSearchFields"][] = "cost";

$tdatamst_Finish[".tableType"] = "list";

$tdatamst_Finish[".printerPageOrientation"] = 0;
$tdatamst_Finish[".nPrinterPageScale"] = 100;

$tdatamst_Finish[".nPrinterSplitRecords"] = 40;

$tdatamst_Finish[".nPrinterPDFSplitRecords"] = 40;



$tdatamst_Finish[".geocodingEnabled"] = false;





$tdatamst_Finish[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamst_Finish[".pageSize"] = 20;

$tdatamst_Finish[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamst_Finish[".strOrderBy"] = $tstrOrderBy;

$tdatamst_Finish[".orderindexes"] = array();

$tdatamst_Finish[".sqlHead"] = "SELECT `id`,  `val`,  `sort`,  `update_at`,  `update_by`,  `create_at`,  `create_by`,  `chohyo_flag`,  `cost`";
$tdatamst_Finish[".sqlFrom"] = "FROM `mst_Finish`";
$tdatamst_Finish[".sqlWhereExpr"] = "";
$tdatamst_Finish[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamst_Finish[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamst_Finish[".arrGroupsPerPage"] = $arrGPP;

$tdatamst_Finish[".highlightSearchResults"] = true;

$tableKeysmst_Finish = array();
$tableKeysmst_Finish[] = "id";
$tdatamst_Finish[".Keys"] = $tableKeysmst_Finish;

$tdatamst_Finish[".listFields"] = array();
$tdatamst_Finish[".listFields"][] = "id";
$tdatamst_Finish[".listFields"][] = "val";
$tdatamst_Finish[".listFields"][] = "sort";
$tdatamst_Finish[".listFields"][] = "cost";
$tdatamst_Finish[".listFields"][] = "update_at";
$tdatamst_Finish[".listFields"][] = "update_by";
$tdatamst_Finish[".listFields"][] = "create_at";
$tdatamst_Finish[".listFields"][] = "create_by";
$tdatamst_Finish[".listFields"][] = "chohyo_flag";

$tdatamst_Finish[".hideMobileList"] = array();


$tdatamst_Finish[".viewFields"] = array();

$tdatamst_Finish[".addFields"] = array();

$tdatamst_Finish[".masterListFields"] = array();
$tdatamst_Finish[".masterListFields"][] = "id";
$tdatamst_Finish[".masterListFields"][] = "val";
$tdatamst_Finish[".masterListFields"][] = "sort";
$tdatamst_Finish[".masterListFields"][] = "update_at";
$tdatamst_Finish[".masterListFields"][] = "update_by";
$tdatamst_Finish[".masterListFields"][] = "create_at";
$tdatamst_Finish[".masterListFields"][] = "create_by";
$tdatamst_Finish[".masterListFields"][] = "chohyo_flag";
$tdatamst_Finish[".masterListFields"][] = "cost";

$tdatamst_Finish[".inlineAddFields"] = array();
$tdatamst_Finish[".inlineAddFields"][] = "val";
$tdatamst_Finish[".inlineAddFields"][] = "sort";
$tdatamst_Finish[".inlineAddFields"][] = "cost";
$tdatamst_Finish[".inlineAddFields"][] = "chohyo_flag";

$tdatamst_Finish[".editFields"] = array();

$tdatamst_Finish[".inlineEditFields"] = array();
$tdatamst_Finish[".inlineEditFields"][] = "val";
$tdatamst_Finish[".inlineEditFields"][] = "sort";
$tdatamst_Finish[".inlineEditFields"][] = "cost";
$tdatamst_Finish[".inlineEditFields"][] = "chohyo_flag";

$tdatamst_Finish[".updateSelectedFields"] = array();


$tdatamst_Finish[".exportFields"] = array();
$tdatamst_Finish[".exportFields"][] = "id";
$tdatamst_Finish[".exportFields"][] = "val";
$tdatamst_Finish[".exportFields"][] = "sort";
$tdatamst_Finish[".exportFields"][] = "update_at";
$tdatamst_Finish[".exportFields"][] = "update_by";
$tdatamst_Finish[".exportFields"][] = "create_at";
$tdatamst_Finish[".exportFields"][] = "create_by";
$tdatamst_Finish[".exportFields"][] = "chohyo_flag";
$tdatamst_Finish[".exportFields"][] = "cost";

$tdatamst_Finish[".importFields"] = array();
$tdatamst_Finish[".importFields"][] = "id";
$tdatamst_Finish[".importFields"][] = "val";
$tdatamst_Finish[".importFields"][] = "sort";
$tdatamst_Finish[".importFields"][] = "chohyo_flag";
$tdatamst_Finish[".importFields"][] = "cost";

$tdatamst_Finish[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "mst_Finish";
	$fdata["Label"] = GetFieldLabel("mst_Finish","id");
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








	$tdatamst_Finish["id"] = $fdata;
//	val
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "val";
	$fdata["GoodName"] = "val";
	$fdata["ownerTable"] = "mst_Finish";
	$fdata["Label"] = GetFieldLabel("mst_Finish","val");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "val";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`val`";

	
	
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
			$edata["EditParams"].= " maxlength=32";

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




	$tdatamst_Finish["val"] = $fdata;
//	sort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sort";
	$fdata["GoodName"] = "sort";
	$fdata["ownerTable"] = "mst_Finish";
	$fdata["Label"] = GetFieldLabel("mst_Finish","sort");
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




	$tdatamst_Finish["sort"] = $fdata;
//	update_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "update_at";
	$fdata["GoodName"] = "update_at";
	$fdata["ownerTable"] = "mst_Finish";
	$fdata["Label"] = GetFieldLabel("mst_Finish","update_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
	
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








	$tdatamst_Finish["update_at"] = $fdata;
//	update_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "update_by";
	$fdata["GoodName"] = "update_by";
	$fdata["ownerTable"] = "mst_Finish";
	$fdata["Label"] = GetFieldLabel("mst_Finish","update_by");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
	
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








	$tdatamst_Finish["update_by"] = $fdata;
//	create_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "create_at";
	$fdata["GoodName"] = "create_at";
	$fdata["ownerTable"] = "mst_Finish";
	$fdata["Label"] = GetFieldLabel("mst_Finish","create_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
	
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








	$tdatamst_Finish["create_at"] = $fdata;
//	create_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "create_by";
	$fdata["GoodName"] = "create_by";
	$fdata["ownerTable"] = "mst_Finish";
	$fdata["Label"] = GetFieldLabel("mst_Finish","create_by");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
	
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








	$tdatamst_Finish["create_by"] = $fdata;
//	chohyo_flag
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "chohyo_flag";
	$fdata["GoodName"] = "chohyo_flag";
	$fdata["ownerTable"] = "mst_Finish";
	$fdata["Label"] = GetFieldLabel("mst_Finish","chohyo_flag");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "chohyo_flag";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`chohyo_flag`";

	
	
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




	$tdatamst_Finish["chohyo_flag"] = $fdata;
//	cost
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "cost";
	$fdata["GoodName"] = "cost";
	$fdata["ownerTable"] = "mst_Finish";
	$fdata["Label"] = GetFieldLabel("mst_Finish","cost");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "cost";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`cost`";

	
	
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




	$tdatamst_Finish["cost"] = $fdata;


$tables_data["mst_Finish"]=&$tdatamst_Finish;
$field_labels["mst_Finish"] = &$fieldLabelsmst_Finish;
$fieldToolTips["mst_Finish"] = &$fieldToolTipsmst_Finish;
$placeHolders["mst_Finish"] = &$placeHoldersmst_Finish;
$page_titles["mst_Finish"] = &$pageTitlesmst_Finish;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mst_Finish"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mst_Finish"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mst_Finish()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  `val`,  `sort`,  `update_at`,  `update_by`,  `create_at`,  `create_by`,  `chohyo_flag`,  `cost`";
$proto0["m_strFrom"] = "FROM `mst_Finish`";
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
	"m_strTable" => "mst_Finish",
	"m_srcTableName" => "mst_Finish"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "mst_Finish";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "val",
	"m_strTable" => "mst_Finish",
	"m_srcTableName" => "mst_Finish"
));

$proto8["m_sql"] = "`val`";
$proto8["m_srcTableName"] = "mst_Finish";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "sort",
	"m_strTable" => "mst_Finish",
	"m_srcTableName" => "mst_Finish"
));

$proto10["m_sql"] = "`sort`";
$proto10["m_srcTableName"] = "mst_Finish";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "update_at",
	"m_strTable" => "mst_Finish",
	"m_srcTableName" => "mst_Finish"
));

$proto12["m_sql"] = "`update_at`";
$proto12["m_srcTableName"] = "mst_Finish";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "update_by",
	"m_strTable" => "mst_Finish",
	"m_srcTableName" => "mst_Finish"
));

$proto14["m_sql"] = "`update_by`";
$proto14["m_srcTableName"] = "mst_Finish";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "create_at",
	"m_strTable" => "mst_Finish",
	"m_srcTableName" => "mst_Finish"
));

$proto16["m_sql"] = "`create_at`";
$proto16["m_srcTableName"] = "mst_Finish";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "create_by",
	"m_strTable" => "mst_Finish",
	"m_srcTableName" => "mst_Finish"
));

$proto18["m_sql"] = "`create_by`";
$proto18["m_srcTableName"] = "mst_Finish";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "chohyo_flag",
	"m_strTable" => "mst_Finish",
	"m_srcTableName" => "mst_Finish"
));

$proto20["m_sql"] = "`chohyo_flag`";
$proto20["m_srcTableName"] = "mst_Finish";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "cost",
	"m_strTable" => "mst_Finish",
	"m_srcTableName" => "mst_Finish"
));

$proto22["m_sql"] = "`cost`";
$proto22["m_srcTableName"] = "mst_Finish";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "mst_Finish";
$proto25["m_srcTableName"] = "mst_Finish";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "id";
$proto25["m_columns"][] = "val";
$proto25["m_columns"][] = "sort";
$proto25["m_columns"][] = "chohyo_flag";
$proto25["m_columns"][] = "update_at";
$proto25["m_columns"][] = "update_by";
$proto25["m_columns"][] = "create_at";
$proto25["m_columns"][] = "create_by";
$proto25["m_columns"][] = "cost";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "`mst_Finish`";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "mst_Finish";
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
$proto0["m_srcTableName"]="mst_Finish";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mst_Finish = createSqlQuery_mst_Finish();


	
		;

									

$tdatamst_Finish[".sqlquery"] = $queryData_mst_Finish;

$tableEvents["mst_Finish"] = new eventsBase;
$tdatamst_Finish[".hasEvents"] = false;

?>