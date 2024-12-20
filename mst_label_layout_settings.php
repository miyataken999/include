<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamst_label_layout = array();
	$tdatamst_label_layout[".truncateText"] = true;
	$tdatamst_label_layout[".NumberOfChars"] = 80;
	$tdatamst_label_layout[".ShortName"] = "mst_label_layout";
	$tdatamst_label_layout[".OwnerID"] = "";
	$tdatamst_label_layout[".OriginalTable"] = "mst_label_layout";

//	field labels
$fieldLabelsmst_label_layout = array();
$fieldToolTipsmst_label_layout = array();
$pageTitlesmst_label_layout = array();
$placeHoldersmst_label_layout = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmst_label_layout["Japanese"] = array();
	$fieldToolTipsmst_label_layout["Japanese"] = array();
	$placeHoldersmst_label_layout["Japanese"] = array();
	$pageTitlesmst_label_layout["Japanese"] = array();
	$fieldLabelsmst_label_layout["Japanese"]["id"] = "Id";
	$fieldToolTipsmst_label_layout["Japanese"]["id"] = "";
	$placeHoldersmst_label_layout["Japanese"]["id"] = "";
	$fieldLabelsmst_label_layout["Japanese"]["file"] = "File";
	$fieldToolTipsmst_label_layout["Japanese"]["file"] = "";
	$placeHoldersmst_label_layout["Japanese"]["file"] = "";
	$fieldLabelsmst_label_layout["Japanese"]["sort"] = "Sort";
	$fieldToolTipsmst_label_layout["Japanese"]["sort"] = "";
	$placeHoldersmst_label_layout["Japanese"]["sort"] = "";
	$fieldLabelsmst_label_layout["Japanese"]["update_by"] = "Update By";
	$fieldToolTipsmst_label_layout["Japanese"]["update_by"] = "";
	$placeHoldersmst_label_layout["Japanese"]["update_by"] = "";
	$fieldLabelsmst_label_layout["Japanese"]["update_at"] = "Update At";
	$fieldToolTipsmst_label_layout["Japanese"]["update_at"] = "";
	$placeHoldersmst_label_layout["Japanese"]["update_at"] = "";
	$fieldLabelsmst_label_layout["Japanese"]["create_by"] = "Create By";
	$fieldToolTipsmst_label_layout["Japanese"]["create_by"] = "";
	$placeHoldersmst_label_layout["Japanese"]["create_by"] = "";
	$fieldLabelsmst_label_layout["Japanese"]["create_at"] = "Create At";
	$fieldToolTipsmst_label_layout["Japanese"]["create_at"] = "";
	$placeHoldersmst_label_layout["Japanese"]["create_at"] = "";
	$fieldLabelsmst_label_layout["Japanese"]["memo"] = "Memo";
	$fieldToolTipsmst_label_layout["Japanese"]["memo"] = "";
	$placeHoldersmst_label_layout["Japanese"]["memo"] = "";
	$fieldLabelsmst_label_layout["Japanese"]["name"] = "Name";
	$fieldToolTipsmst_label_layout["Japanese"]["name"] = "";
	$placeHoldersmst_label_layout["Japanese"]["name"] = "";
	$fieldLabelsmst_label_layout["Japanese"]["shouhin_for_labels_list"] = "リスト表示";
	$fieldToolTipsmst_label_layout["Japanese"]["shouhin_for_labels_list"] = "";
	$placeHoldersmst_label_layout["Japanese"]["shouhin_for_labels_list"] = "";
	if (count($fieldToolTipsmst_label_layout["Japanese"]))
		$tdatamst_label_layout[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmst_label_layout[""] = array();
	$fieldToolTipsmst_label_layout[""] = array();
	$placeHoldersmst_label_layout[""] = array();
	$pageTitlesmst_label_layout[""] = array();
	$fieldLabelsmst_label_layout[""]["id"] = "Id";
	$fieldToolTipsmst_label_layout[""]["id"] = "";
	$placeHoldersmst_label_layout[""]["id"] = "";
	$fieldLabelsmst_label_layout[""]["file"] = "File";
	$fieldToolTipsmst_label_layout[""]["file"] = "";
	$placeHoldersmst_label_layout[""]["file"] = "";
	$fieldLabelsmst_label_layout[""]["sort"] = "Sort";
	$fieldToolTipsmst_label_layout[""]["sort"] = "";
	$placeHoldersmst_label_layout[""]["sort"] = "";
	$fieldLabelsmst_label_layout[""]["update_by"] = "Update By";
	$fieldToolTipsmst_label_layout[""]["update_by"] = "";
	$placeHoldersmst_label_layout[""]["update_by"] = "";
	$fieldLabelsmst_label_layout[""]["update_at"] = "Update At";
	$fieldToolTipsmst_label_layout[""]["update_at"] = "";
	$placeHoldersmst_label_layout[""]["update_at"] = "";
	$fieldLabelsmst_label_layout[""]["create_by"] = "Create By";
	$fieldToolTipsmst_label_layout[""]["create_by"] = "";
	$placeHoldersmst_label_layout[""]["create_by"] = "";
	$fieldLabelsmst_label_layout[""]["create_at"] = "Create At";
	$fieldToolTipsmst_label_layout[""]["create_at"] = "";
	$placeHoldersmst_label_layout[""]["create_at"] = "";
	$fieldLabelsmst_label_layout[""]["memo"] = "Memo";
	$fieldToolTipsmst_label_layout[""]["memo"] = "";
	$placeHoldersmst_label_layout[""]["memo"] = "";
	$fieldLabelsmst_label_layout[""]["name"] = "Name";
	$fieldToolTipsmst_label_layout[""]["name"] = "";
	$placeHoldersmst_label_layout[""]["name"] = "";
	$fieldLabelsmst_label_layout[""]["shouhin_for_labels_list"] = "Shouhin For Labels List";
	$fieldToolTipsmst_label_layout[""]["shouhin_for_labels_list"] = "";
	$placeHoldersmst_label_layout[""]["shouhin_for_labels_list"] = "";
	if (count($fieldToolTipsmst_label_layout[""]))
		$tdatamst_label_layout[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmst_label_layout["English"] = array();
	$fieldToolTipsmst_label_layout["English"] = array();
	$placeHoldersmst_label_layout["English"] = array();
	$pageTitlesmst_label_layout["English"] = array();
	$fieldLabelsmst_label_layout["English"]["id"] = "Id";
	$fieldToolTipsmst_label_layout["English"]["id"] = "";
	$placeHoldersmst_label_layout["English"]["id"] = "";
	$fieldLabelsmst_label_layout["English"]["file"] = "File";
	$fieldToolTipsmst_label_layout["English"]["file"] = "";
	$placeHoldersmst_label_layout["English"]["file"] = "";
	$fieldLabelsmst_label_layout["English"]["sort"] = "Sort";
	$fieldToolTipsmst_label_layout["English"]["sort"] = "";
	$placeHoldersmst_label_layout["English"]["sort"] = "";
	$fieldLabelsmst_label_layout["English"]["update_by"] = "Update By";
	$fieldToolTipsmst_label_layout["English"]["update_by"] = "";
	$placeHoldersmst_label_layout["English"]["update_by"] = "";
	$fieldLabelsmst_label_layout["English"]["update_at"] = "Update At";
	$fieldToolTipsmst_label_layout["English"]["update_at"] = "";
	$placeHoldersmst_label_layout["English"]["update_at"] = "";
	$fieldLabelsmst_label_layout["English"]["create_by"] = "Create By";
	$fieldToolTipsmst_label_layout["English"]["create_by"] = "";
	$placeHoldersmst_label_layout["English"]["create_by"] = "";
	$fieldLabelsmst_label_layout["English"]["create_at"] = "Create At";
	$fieldToolTipsmst_label_layout["English"]["create_at"] = "";
	$placeHoldersmst_label_layout["English"]["create_at"] = "";
	$fieldLabelsmst_label_layout["English"]["memo"] = "Memo";
	$fieldToolTipsmst_label_layout["English"]["memo"] = "";
	$placeHoldersmst_label_layout["English"]["memo"] = "";
	$fieldLabelsmst_label_layout["English"]["name"] = "Name";
	$fieldToolTipsmst_label_layout["English"]["name"] = "";
	$placeHoldersmst_label_layout["English"]["name"] = "";
	$fieldLabelsmst_label_layout["English"]["shouhin_for_labels_list"] = "Shouhin For Labels List";
	$fieldToolTipsmst_label_layout["English"]["shouhin_for_labels_list"] = "";
	$placeHoldersmst_label_layout["English"]["shouhin_for_labels_list"] = "";
	if (count($fieldToolTipsmst_label_layout["English"]))
		$tdatamst_label_layout[".isUseToolTips"] = true;
}


	$tdatamst_label_layout[".NCSearch"] = true;



$tdatamst_label_layout[".shortTableName"] = "mst_label_layout";
$tdatamst_label_layout[".nSecOptions"] = 0;
$tdatamst_label_layout[".recsPerRowPrint"] = 1;
$tdatamst_label_layout[".mainTableOwnerID"] = "";
$tdatamst_label_layout[".moveNext"] = 1;
$tdatamst_label_layout[".entityType"] = 0;

$tdatamst_label_layout[".strOriginalTableName"] = "mst_label_layout";

	



$tdatamst_label_layout[".showAddInPopup"] = false;

$tdatamst_label_layout[".showEditInPopup"] = false;

$tdatamst_label_layout[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamst_label_layout[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamst_label_layout[".fieldsForRegister"] = array();

$tdatamst_label_layout[".listAjax"] = false;

	$tdatamst_label_layout[".audit"] = false;

	$tdatamst_label_layout[".locking"] = false;

$tdatamst_label_layout[".edit"] = true;
$tdatamst_label_layout[".afterEditAction"] = 1;
$tdatamst_label_layout[".closePopupAfterEdit"] = 1;
$tdatamst_label_layout[".afterEditActionDetTable"] = "";

$tdatamst_label_layout[".add"] = true;
$tdatamst_label_layout[".afterAddAction"] = 1;
$tdatamst_label_layout[".closePopupAfterAdd"] = 1;
$tdatamst_label_layout[".afterAddActionDetTable"] = "";

$tdatamst_label_layout[".list"] = true;



$tdatamst_label_layout[".reorderRecordsByHeader"] = true;



$tdatamst_label_layout[".view"] = true;

$tdatamst_label_layout[".import"] = true;

$tdatamst_label_layout[".exportTo"] = true;

$tdatamst_label_layout[".printFriendly"] = true;

$tdatamst_label_layout[".delete"] = true;

$tdatamst_label_layout[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamst_label_layout[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamst_label_layout[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamst_label_layout[".searchSaving"] = false;
//

$tdatamst_label_layout[".showSearchPanel"] = true;
		$tdatamst_label_layout[".flexibleSearch"] = true;

$tdatamst_label_layout[".isUseAjaxSuggest"] = true;

$tdatamst_label_layout[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatamst_label_layout[".ajaxCodeSnippetAdded"] = false;

$tdatamst_label_layout[".buttonsAdded"] = false;

$tdatamst_label_layout[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamst_label_layout[".isUseTimeForSearch"] = false;





$tdatamst_label_layout[".allSearchFields"] = array();
$tdatamst_label_layout[".filterFields"] = array();
$tdatamst_label_layout[".requiredSearchFields"] = array();

$tdatamst_label_layout[".allSearchFields"][] = "id";
	$tdatamst_label_layout[".allSearchFields"][] = "sort";
	$tdatamst_label_layout[".allSearchFields"][] = "name";
	$tdatamst_label_layout[".allSearchFields"][] = "shouhin_for_labels_list";
	$tdatamst_label_layout[".allSearchFields"][] = "file";
	$tdatamst_label_layout[".allSearchFields"][] = "memo";
	$tdatamst_label_layout[".allSearchFields"][] = "update_by";
	$tdatamst_label_layout[".allSearchFields"][] = "update_at";
	$tdatamst_label_layout[".allSearchFields"][] = "create_by";
	$tdatamst_label_layout[".allSearchFields"][] = "create_at";
	

$tdatamst_label_layout[".googleLikeFields"] = array();
$tdatamst_label_layout[".googleLikeFields"][] = "id";
$tdatamst_label_layout[".googleLikeFields"][] = "file";
$tdatamst_label_layout[".googleLikeFields"][] = "sort";
$tdatamst_label_layout[".googleLikeFields"][] = "update_by";
$tdatamst_label_layout[".googleLikeFields"][] = "update_at";
$tdatamst_label_layout[".googleLikeFields"][] = "create_by";
$tdatamst_label_layout[".googleLikeFields"][] = "create_at";
$tdatamst_label_layout[".googleLikeFields"][] = "memo";
$tdatamst_label_layout[".googleLikeFields"][] = "name";
$tdatamst_label_layout[".googleLikeFields"][] = "shouhin_for_labels_list";


$tdatamst_label_layout[".advSearchFields"] = array();
$tdatamst_label_layout[".advSearchFields"][] = "id";
$tdatamst_label_layout[".advSearchFields"][] = "sort";
$tdatamst_label_layout[".advSearchFields"][] = "name";
$tdatamst_label_layout[".advSearchFields"][] = "shouhin_for_labels_list";
$tdatamst_label_layout[".advSearchFields"][] = "file";
$tdatamst_label_layout[".advSearchFields"][] = "memo";
$tdatamst_label_layout[".advSearchFields"][] = "update_by";
$tdatamst_label_layout[".advSearchFields"][] = "update_at";
$tdatamst_label_layout[".advSearchFields"][] = "create_by";
$tdatamst_label_layout[".advSearchFields"][] = "create_at";

$tdatamst_label_layout[".tableType"] = "list";

$tdatamst_label_layout[".printerPageOrientation"] = 0;
$tdatamst_label_layout[".nPrinterPageScale"] = 100;

$tdatamst_label_layout[".nPrinterSplitRecords"] = 40;

$tdatamst_label_layout[".nPrinterPDFSplitRecords"] = 40;



$tdatamst_label_layout[".geocodingEnabled"] = false;





$tdatamst_label_layout[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamst_label_layout[".pageSize"] = 20;

$tdatamst_label_layout[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamst_label_layout[".strOrderBy"] = $tstrOrderBy;

$tdatamst_label_layout[".orderindexes"] = array();

$tdatamst_label_layout[".sqlHead"] = "SELECT `id`,  	`file`,  	`sort`,  	`update_by`,  	`update_at`,  	`create_by`,  	`create_at`,  	`memo`,  	`name`,  	`shouhin_for_labels_list`";
$tdatamst_label_layout[".sqlFrom"] = "FROM `mst_label_layout`";
$tdatamst_label_layout[".sqlWhereExpr"] = "";
$tdatamst_label_layout[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamst_label_layout[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamst_label_layout[".arrGroupsPerPage"] = $arrGPP;

$tdatamst_label_layout[".highlightSearchResults"] = true;

$tableKeysmst_label_layout = array();
$tableKeysmst_label_layout[] = "id";
$tdatamst_label_layout[".Keys"] = $tableKeysmst_label_layout;

$tdatamst_label_layout[".listFields"] = array();
$tdatamst_label_layout[".listFields"][] = "id";
$tdatamst_label_layout[".listFields"][] = "sort";
$tdatamst_label_layout[".listFields"][] = "name";
$tdatamst_label_layout[".listFields"][] = "shouhin_for_labels_list";
$tdatamst_label_layout[".listFields"][] = "file";
$tdatamst_label_layout[".listFields"][] = "memo";
$tdatamst_label_layout[".listFields"][] = "update_by";
$tdatamst_label_layout[".listFields"][] = "update_at";
$tdatamst_label_layout[".listFields"][] = "create_by";
$tdatamst_label_layout[".listFields"][] = "create_at";

$tdatamst_label_layout[".hideMobileList"] = array();


$tdatamst_label_layout[".viewFields"] = array();
$tdatamst_label_layout[".viewFields"][] = "id";
$tdatamst_label_layout[".viewFields"][] = "sort";
$tdatamst_label_layout[".viewFields"][] = "name";
$tdatamst_label_layout[".viewFields"][] = "shouhin_for_labels_list";
$tdatamst_label_layout[".viewFields"][] = "file";
$tdatamst_label_layout[".viewFields"][] = "memo";
$tdatamst_label_layout[".viewFields"][] = "update_by";
$tdatamst_label_layout[".viewFields"][] = "update_at";
$tdatamst_label_layout[".viewFields"][] = "create_by";
$tdatamst_label_layout[".viewFields"][] = "create_at";

$tdatamst_label_layout[".addFields"] = array();
$tdatamst_label_layout[".addFields"][] = "sort";
$tdatamst_label_layout[".addFields"][] = "name";
$tdatamst_label_layout[".addFields"][] = "shouhin_for_labels_list";
$tdatamst_label_layout[".addFields"][] = "file";
$tdatamst_label_layout[".addFields"][] = "memo";
$tdatamst_label_layout[".addFields"][] = "update_by";
$tdatamst_label_layout[".addFields"][] = "update_at";
$tdatamst_label_layout[".addFields"][] = "create_by";
$tdatamst_label_layout[".addFields"][] = "create_at";

$tdatamst_label_layout[".masterListFields"] = array();
$tdatamst_label_layout[".masterListFields"][] = "id";
$tdatamst_label_layout[".masterListFields"][] = "sort";
$tdatamst_label_layout[".masterListFields"][] = "name";
$tdatamst_label_layout[".masterListFields"][] = "shouhin_for_labels_list";
$tdatamst_label_layout[".masterListFields"][] = "file";
$tdatamst_label_layout[".masterListFields"][] = "memo";
$tdatamst_label_layout[".masterListFields"][] = "update_by";
$tdatamst_label_layout[".masterListFields"][] = "update_at";
$tdatamst_label_layout[".masterListFields"][] = "create_by";
$tdatamst_label_layout[".masterListFields"][] = "create_at";

$tdatamst_label_layout[".inlineAddFields"] = array();

$tdatamst_label_layout[".editFields"] = array();
$tdatamst_label_layout[".editFields"][] = "sort";
$tdatamst_label_layout[".editFields"][] = "name";
$tdatamst_label_layout[".editFields"][] = "shouhin_for_labels_list";
$tdatamst_label_layout[".editFields"][] = "file";
$tdatamst_label_layout[".editFields"][] = "memo";
$tdatamst_label_layout[".editFields"][] = "update_by";
$tdatamst_label_layout[".editFields"][] = "update_at";
$tdatamst_label_layout[".editFields"][] = "create_by";
$tdatamst_label_layout[".editFields"][] = "create_at";

$tdatamst_label_layout[".inlineEditFields"] = array();

$tdatamst_label_layout[".updateSelectedFields"] = array();
$tdatamst_label_layout[".updateSelectedFields"][] = "sort";
$tdatamst_label_layout[".updateSelectedFields"][] = "name";
$tdatamst_label_layout[".updateSelectedFields"][] = "shouhin_for_labels_list";
$tdatamst_label_layout[".updateSelectedFields"][] = "file";
$tdatamst_label_layout[".updateSelectedFields"][] = "memo";
$tdatamst_label_layout[".updateSelectedFields"][] = "update_by";
$tdatamst_label_layout[".updateSelectedFields"][] = "update_at";
$tdatamst_label_layout[".updateSelectedFields"][] = "create_by";
$tdatamst_label_layout[".updateSelectedFields"][] = "create_at";


$tdatamst_label_layout[".exportFields"] = array();
$tdatamst_label_layout[".exportFields"][] = "id";
$tdatamst_label_layout[".exportFields"][] = "sort";
$tdatamst_label_layout[".exportFields"][] = "name";
$tdatamst_label_layout[".exportFields"][] = "shouhin_for_labels_list";
$tdatamst_label_layout[".exportFields"][] = "file";
$tdatamst_label_layout[".exportFields"][] = "memo";
$tdatamst_label_layout[".exportFields"][] = "update_by";
$tdatamst_label_layout[".exportFields"][] = "update_at";
$tdatamst_label_layout[".exportFields"][] = "create_by";
$tdatamst_label_layout[".exportFields"][] = "create_at";

$tdatamst_label_layout[".importFields"] = array();
$tdatamst_label_layout[".importFields"][] = "id";
$tdatamst_label_layout[".importFields"][] = "file";
$tdatamst_label_layout[".importFields"][] = "sort";
$tdatamst_label_layout[".importFields"][] = "update_by";
$tdatamst_label_layout[".importFields"][] = "update_at";
$tdatamst_label_layout[".importFields"][] = "create_by";
$tdatamst_label_layout[".importFields"][] = "create_at";
$tdatamst_label_layout[".importFields"][] = "memo";
$tdatamst_label_layout[".importFields"][] = "name";
$tdatamst_label_layout[".importFields"][] = "shouhin_for_labels_list";

$tdatamst_label_layout[".printFields"] = array();
$tdatamst_label_layout[".printFields"][] = "id";
$tdatamst_label_layout[".printFields"][] = "sort";
$tdatamst_label_layout[".printFields"][] = "name";
$tdatamst_label_layout[".printFields"][] = "shouhin_for_labels_list";
$tdatamst_label_layout[".printFields"][] = "file";
$tdatamst_label_layout[".printFields"][] = "memo";
$tdatamst_label_layout[".printFields"][] = "update_by";
$tdatamst_label_layout[".printFields"][] = "update_at";
$tdatamst_label_layout[".printFields"][] = "create_by";
$tdatamst_label_layout[".printFields"][] = "create_at";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "mst_label_layout";
	$fdata["Label"] = GetFieldLabel("mst_label_layout","id");
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




	$tdatamst_label_layout["id"] = $fdata;
//	file
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "file";
	$fdata["GoodName"] = "file";
	$fdata["ownerTable"] = "mst_label_layout";
	$fdata["Label"] = GetFieldLabel("mst_label_layout","file");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "file";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`file`";

	
	
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




	$tdatamst_label_layout["file"] = $fdata;
//	sort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sort";
	$fdata["GoodName"] = "sort";
	$fdata["ownerTable"] = "mst_label_layout";
	$fdata["Label"] = GetFieldLabel("mst_label_layout","sort");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

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




	$tdatamst_label_layout["sort"] = $fdata;
//	update_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "update_by";
	$fdata["GoodName"] = "update_by";
	$fdata["ownerTable"] = "mst_label_layout";
	$fdata["Label"] = GetFieldLabel("mst_label_layout","update_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

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




	$tdatamst_label_layout["update_by"] = $fdata;
//	update_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "update_at";
	$fdata["GoodName"] = "update_at";
	$fdata["ownerTable"] = "mst_label_layout";
	$fdata["Label"] = GetFieldLabel("mst_label_layout","update_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


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

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
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




	$tdatamst_label_layout["update_at"] = $fdata;
//	create_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "create_by";
	$fdata["GoodName"] = "create_by";
	$fdata["ownerTable"] = "mst_label_layout";
	$fdata["Label"] = GetFieldLabel("mst_label_layout","create_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

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




	$tdatamst_label_layout["create_by"] = $fdata;
//	create_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "create_at";
	$fdata["GoodName"] = "create_at";
	$fdata["ownerTable"] = "mst_label_layout";
	$fdata["Label"] = GetFieldLabel("mst_label_layout","create_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


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

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
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




	$tdatamst_label_layout["create_at"] = $fdata;
//	memo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "memo";
	$fdata["GoodName"] = "memo";
	$fdata["ownerTable"] = "mst_label_layout";
	$fdata["Label"] = GetFieldLabel("mst_label_layout","memo");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

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




	$tdatamst_label_layout["memo"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "mst_label_layout";
	$fdata["Label"] = GetFieldLabel("mst_label_layout","name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

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




	$tdatamst_label_layout["name"] = $fdata;
//	shouhin_for_labels_list
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "shouhin_for_labels_list";
	$fdata["GoodName"] = "shouhin_for_labels_list";
	$fdata["ownerTable"] = "mst_label_layout";
	$fdata["Label"] = GetFieldLabel("mst_label_layout","shouhin_for_labels_list");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "shouhin_for_labels_list";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin_for_labels_list`";

	
	
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




	$tdatamst_label_layout["shouhin_for_labels_list"] = $fdata;


$tables_data["mst_label_layout"]=&$tdatamst_label_layout;
$field_labels["mst_label_layout"] = &$fieldLabelsmst_label_layout;
$fieldToolTips["mst_label_layout"] = &$fieldToolTipsmst_label_layout;
$placeHolders["mst_label_layout"] = &$placeHoldersmst_label_layout;
$page_titles["mst_label_layout"] = &$pageTitlesmst_label_layout;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mst_label_layout"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mst_label_layout"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mst_label_layout()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  	`file`,  	`sort`,  	`update_by`,  	`update_at`,  	`create_by`,  	`create_at`,  	`memo`,  	`name`,  	`shouhin_for_labels_list`";
$proto0["m_strFrom"] = "FROM `mst_label_layout`";
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
	"m_strTable" => "mst_label_layout",
	"m_srcTableName" => "mst_label_layout"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "mst_label_layout";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "file",
	"m_strTable" => "mst_label_layout",
	"m_srcTableName" => "mst_label_layout"
));

$proto8["m_sql"] = "`file`";
$proto8["m_srcTableName"] = "mst_label_layout";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "sort",
	"m_strTable" => "mst_label_layout",
	"m_srcTableName" => "mst_label_layout"
));

$proto10["m_sql"] = "`sort`";
$proto10["m_srcTableName"] = "mst_label_layout";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "update_by",
	"m_strTable" => "mst_label_layout",
	"m_srcTableName" => "mst_label_layout"
));

$proto12["m_sql"] = "`update_by`";
$proto12["m_srcTableName"] = "mst_label_layout";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "update_at",
	"m_strTable" => "mst_label_layout",
	"m_srcTableName" => "mst_label_layout"
));

$proto14["m_sql"] = "`update_at`";
$proto14["m_srcTableName"] = "mst_label_layout";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "create_by",
	"m_strTable" => "mst_label_layout",
	"m_srcTableName" => "mst_label_layout"
));

$proto16["m_sql"] = "`create_by`";
$proto16["m_srcTableName"] = "mst_label_layout";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "create_at",
	"m_strTable" => "mst_label_layout",
	"m_srcTableName" => "mst_label_layout"
));

$proto18["m_sql"] = "`create_at`";
$proto18["m_srcTableName"] = "mst_label_layout";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "memo",
	"m_strTable" => "mst_label_layout",
	"m_srcTableName" => "mst_label_layout"
));

$proto20["m_sql"] = "`memo`";
$proto20["m_srcTableName"] = "mst_label_layout";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "mst_label_layout",
	"m_srcTableName" => "mst_label_layout"
));

$proto22["m_sql"] = "`name`";
$proto22["m_srcTableName"] = "mst_label_layout";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "shouhin_for_labels_list",
	"m_strTable" => "mst_label_layout",
	"m_srcTableName" => "mst_label_layout"
));

$proto24["m_sql"] = "`shouhin_for_labels_list`";
$proto24["m_srcTableName"] = "mst_label_layout";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "mst_label_layout";
$proto27["m_srcTableName"] = "mst_label_layout";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "id";
$proto27["m_columns"][] = "file";
$proto27["m_columns"][] = "sort";
$proto27["m_columns"][] = "update_by";
$proto27["m_columns"][] = "update_at";
$proto27["m_columns"][] = "create_by";
$proto27["m_columns"][] = "create_at";
$proto27["m_columns"][] = "memo";
$proto27["m_columns"][] = "name";
$proto27["m_columns"][] = "shouhin_for_labels_list";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "`mst_label_layout`";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "mst_label_layout";
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
$proto0["m_srcTableName"]="mst_label_layout";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mst_label_layout = createSqlQuery_mst_label_layout();


	
		;

										

$tdatamst_label_layout[".sqlquery"] = $queryData_mst_label_layout;

$tableEvents["mst_label_layout"] = new eventsBase;
$tdatamst_label_layout[".hasEvents"] = false;

?>