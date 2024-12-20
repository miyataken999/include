<?php
require_once(getabspath("classes/cipherer.php"));




$tdataichiba_exhibition_shouhin = array();
	$tdataichiba_exhibition_shouhin[".truncateText"] = true;
	$tdataichiba_exhibition_shouhin[".NumberOfChars"] = 80;
	$tdataichiba_exhibition_shouhin[".ShortName"] = "ichiba_exhibition_shouhin";
	$tdataichiba_exhibition_shouhin[".OwnerID"] = "";
	$tdataichiba_exhibition_shouhin[".OriginalTable"] = "shouhin";

//	field labels
$fieldLabelsichiba_exhibition_shouhin = array();
$fieldToolTipsichiba_exhibition_shouhin = array();
$pageTitlesichiba_exhibition_shouhin = array();
$placeHoldersichiba_exhibition_shouhin = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsichiba_exhibition_shouhin["Japanese"] = array();
	$fieldToolTipsichiba_exhibition_shouhin["Japanese"] = array();
	$placeHoldersichiba_exhibition_shouhin["Japanese"] = array();
	$pageTitlesichiba_exhibition_shouhin["Japanese"] = array();
	$fieldLabelsichiba_exhibition_shouhin["Japanese"]["product_id"] = "SEQ";
	$fieldToolTipsichiba_exhibition_shouhin["Japanese"]["product_id"] = "";
	$placeHoldersichiba_exhibition_shouhin["Japanese"]["product_id"] = "";
	$fieldLabelsichiba_exhibition_shouhin["Japanese"]["ichiba_exhibition_id"] = "出品表Id";
	$fieldToolTipsichiba_exhibition_shouhin["Japanese"]["ichiba_exhibition_id"] = "";
	$placeHoldersichiba_exhibition_shouhin["Japanese"]["ichiba_exhibition_id"] = "";
	$fieldLabelsichiba_exhibition_shouhin["Japanese"]["ichiba_exhibition_sort"] = "出品sort";
	$fieldToolTipsichiba_exhibition_shouhin["Japanese"]["ichiba_exhibition_sort"] = "";
	$placeHoldersichiba_exhibition_shouhin["Japanese"]["ichiba_exhibition_sort"] = "";
	$fieldLabelsichiba_exhibition_shouhin["Japanese"]["description"] = "メモ";
	$fieldToolTipsichiba_exhibition_shouhin["Japanese"]["description"] = "";
	$placeHoldersichiba_exhibition_shouhin["Japanese"]["description"] = "";
	$fieldLabelsichiba_exhibition_shouhin["Japanese"]["updated_at"] = "更新日";
	$fieldToolTipsichiba_exhibition_shouhin["Japanese"]["updated_at"] = "";
	$placeHoldersichiba_exhibition_shouhin["Japanese"]["updated_at"] = "";
	$fieldLabelsichiba_exhibition_shouhin["Japanese"]["updated_by"] = "更新者";
	$fieldToolTipsichiba_exhibition_shouhin["Japanese"]["updated_by"] = "";
	$placeHoldersichiba_exhibition_shouhin["Japanese"]["updated_by"] = "";
	$fieldLabelsichiba_exhibition_shouhin["Japanese"]["sheet_title"] = "Sheet Title";
	$fieldToolTipsichiba_exhibition_shouhin["Japanese"]["sheet_title"] = "";
	$placeHoldersichiba_exhibition_shouhin["Japanese"]["sheet_title"] = "";
	$fieldLabelsichiba_exhibition_shouhin["Japanese"]["url_id"] = "Url Id";
	$fieldToolTipsichiba_exhibition_shouhin["Japanese"]["url_id"] = "";
	$placeHoldersichiba_exhibition_shouhin["Japanese"]["url_id"] = "";
	$fieldLabelsichiba_exhibition_shouhin["Japanese"]["sheet_id"] = "Sheet Id";
	$fieldToolTipsichiba_exhibition_shouhin["Japanese"]["sheet_id"] = "";
	$placeHoldersichiba_exhibition_shouhin["Japanese"]["sheet_id"] = "";
	$fieldLabelsichiba_exhibition_shouhin["Japanese"]["sheet_name"] = "Sheet Name";
	$fieldToolTipsichiba_exhibition_shouhin["Japanese"]["sheet_name"] = "";
	$placeHoldersichiba_exhibition_shouhin["Japanese"]["sheet_name"] = "";
	$fieldLabelsichiba_exhibition_shouhin["Japanese"]["sheet_url"] = "Sheet Url";
	$fieldToolTipsichiba_exhibition_shouhin["Japanese"]["sheet_url"] = "";
	$placeHoldersichiba_exhibition_shouhin["Japanese"]["sheet_url"] = "";
	$fieldLabelsichiba_exhibition_shouhin["Japanese"]["comment"] = "コメント";
	$fieldToolTipsichiba_exhibition_shouhin["Japanese"]["comment"] = "";
	$placeHoldersichiba_exhibition_shouhin["Japanese"]["comment"] = "";
	$fieldLabelsichiba_exhibition_shouhin["Japanese"]["Parent_stone"] = "親石";
	$fieldToolTipsichiba_exhibition_shouhin["Japanese"]["Parent_stone"] = "";
	$placeHoldersichiba_exhibition_shouhin["Japanese"]["Parent_stone"] = "";
	if (count($fieldToolTipsichiba_exhibition_shouhin["Japanese"]))
		$tdataichiba_exhibition_shouhin[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsichiba_exhibition_shouhin[""] = array();
	$fieldToolTipsichiba_exhibition_shouhin[""] = array();
	$placeHoldersichiba_exhibition_shouhin[""] = array();
	$pageTitlesichiba_exhibition_shouhin[""] = array();
	$fieldLabelsichiba_exhibition_shouhin[""]["ichiba_exhibition_id"] = "Ichiba Exhibition Id";
	$fieldToolTipsichiba_exhibition_shouhin[""]["ichiba_exhibition_id"] = "";
	$placeHoldersichiba_exhibition_shouhin[""]["ichiba_exhibition_id"] = "";
	$fieldLabelsichiba_exhibition_shouhin[""]["ichiba_exhibition_sort"] = "Ichiba Exhibition Sort";
	$fieldToolTipsichiba_exhibition_shouhin[""]["ichiba_exhibition_sort"] = "";
	$placeHoldersichiba_exhibition_shouhin[""]["ichiba_exhibition_sort"] = "";
	$fieldLabelsichiba_exhibition_shouhin[""]["description"] = "Description";
	$fieldToolTipsichiba_exhibition_shouhin[""]["description"] = "";
	$placeHoldersichiba_exhibition_shouhin[""]["description"] = "";
	$fieldLabelsichiba_exhibition_shouhin[""]["updated_at"] = "Updated At";
	$fieldToolTipsichiba_exhibition_shouhin[""]["updated_at"] = "";
	$placeHoldersichiba_exhibition_shouhin[""]["updated_at"] = "";
	$fieldLabelsichiba_exhibition_shouhin[""]["updated_by"] = "Updated By";
	$fieldToolTipsichiba_exhibition_shouhin[""]["updated_by"] = "";
	$placeHoldersichiba_exhibition_shouhin[""]["updated_by"] = "";
	$fieldLabelsichiba_exhibition_shouhin[""]["sheet_title"] = "Sheet Title";
	$fieldToolTipsichiba_exhibition_shouhin[""]["sheet_title"] = "";
	$placeHoldersichiba_exhibition_shouhin[""]["sheet_title"] = "";
	$fieldLabelsichiba_exhibition_shouhin[""]["url_id"] = "Url Id";
	$fieldToolTipsichiba_exhibition_shouhin[""]["url_id"] = "";
	$placeHoldersichiba_exhibition_shouhin[""]["url_id"] = "";
	$fieldLabelsichiba_exhibition_shouhin[""]["sheet_id"] = "Sheet Id";
	$fieldToolTipsichiba_exhibition_shouhin[""]["sheet_id"] = "";
	$placeHoldersichiba_exhibition_shouhin[""]["sheet_id"] = "";
	$fieldLabelsichiba_exhibition_shouhin[""]["sheet_name"] = "Sheet Name";
	$fieldToolTipsichiba_exhibition_shouhin[""]["sheet_name"] = "";
	$placeHoldersichiba_exhibition_shouhin[""]["sheet_name"] = "";
	$fieldLabelsichiba_exhibition_shouhin[""]["sheet_url"] = "Sheet Url";
	$fieldToolTipsichiba_exhibition_shouhin[""]["sheet_url"] = "";
	$placeHoldersichiba_exhibition_shouhin[""]["sheet_url"] = "";
	$fieldLabelsichiba_exhibition_shouhin[""]["comment"] = "Comment";
	$fieldToolTipsichiba_exhibition_shouhin[""]["comment"] = "";
	$placeHoldersichiba_exhibition_shouhin[""]["comment"] = "";
	$fieldLabelsichiba_exhibition_shouhin[""]["Parent_stone"] = "Parent Stone";
	$fieldToolTipsichiba_exhibition_shouhin[""]["Parent_stone"] = "";
	$placeHoldersichiba_exhibition_shouhin[""]["Parent_stone"] = "";
	if (count($fieldToolTipsichiba_exhibition_shouhin[""]))
		$tdataichiba_exhibition_shouhin[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsichiba_exhibition_shouhin["English"] = array();
	$fieldToolTipsichiba_exhibition_shouhin["English"] = array();
	$placeHoldersichiba_exhibition_shouhin["English"] = array();
	$pageTitlesichiba_exhibition_shouhin["English"] = array();
	$fieldLabelsichiba_exhibition_shouhin["English"]["ichiba_exhibition_id"] = "Ichiba Exhibition Id";
	$fieldToolTipsichiba_exhibition_shouhin["English"]["ichiba_exhibition_id"] = "";
	$placeHoldersichiba_exhibition_shouhin["English"]["ichiba_exhibition_id"] = "";
	$fieldLabelsichiba_exhibition_shouhin["English"]["ichiba_exhibition_sort"] = "Ichiba Exhibition Sort";
	$fieldToolTipsichiba_exhibition_shouhin["English"]["ichiba_exhibition_sort"] = "";
	$placeHoldersichiba_exhibition_shouhin["English"]["ichiba_exhibition_sort"] = "";
	$fieldLabelsichiba_exhibition_shouhin["English"]["description"] = "Description";
	$fieldToolTipsichiba_exhibition_shouhin["English"]["description"] = "";
	$placeHoldersichiba_exhibition_shouhin["English"]["description"] = "";
	$fieldLabelsichiba_exhibition_shouhin["English"]["updated_at"] = "Updated At";
	$fieldToolTipsichiba_exhibition_shouhin["English"]["updated_at"] = "";
	$placeHoldersichiba_exhibition_shouhin["English"]["updated_at"] = "";
	$fieldLabelsichiba_exhibition_shouhin["English"]["updated_by"] = "Updated By";
	$fieldToolTipsichiba_exhibition_shouhin["English"]["updated_by"] = "";
	$placeHoldersichiba_exhibition_shouhin["English"]["updated_by"] = "";
	$fieldLabelsichiba_exhibition_shouhin["English"]["sheet_title"] = "Sheet Title";
	$fieldToolTipsichiba_exhibition_shouhin["English"]["sheet_title"] = "";
	$placeHoldersichiba_exhibition_shouhin["English"]["sheet_title"] = "";
	$fieldLabelsichiba_exhibition_shouhin["English"]["url_id"] = "Url Id";
	$fieldToolTipsichiba_exhibition_shouhin["English"]["url_id"] = "";
	$placeHoldersichiba_exhibition_shouhin["English"]["url_id"] = "";
	$fieldLabelsichiba_exhibition_shouhin["English"]["sheet_id"] = "Sheet Id";
	$fieldToolTipsichiba_exhibition_shouhin["English"]["sheet_id"] = "";
	$placeHoldersichiba_exhibition_shouhin["English"]["sheet_id"] = "";
	$fieldLabelsichiba_exhibition_shouhin["English"]["sheet_name"] = "Sheet Name";
	$fieldToolTipsichiba_exhibition_shouhin["English"]["sheet_name"] = "";
	$placeHoldersichiba_exhibition_shouhin["English"]["sheet_name"] = "";
	$fieldLabelsichiba_exhibition_shouhin["English"]["sheet_url"] = "Sheet Url";
	$fieldToolTipsichiba_exhibition_shouhin["English"]["sheet_url"] = "";
	$placeHoldersichiba_exhibition_shouhin["English"]["sheet_url"] = "";
	$fieldLabelsichiba_exhibition_shouhin["English"]["comment"] = "Comment";
	$fieldToolTipsichiba_exhibition_shouhin["English"]["comment"] = "";
	$placeHoldersichiba_exhibition_shouhin["English"]["comment"] = "";
	$fieldLabelsichiba_exhibition_shouhin["English"]["Parent_stone"] = "Parent Stone";
	$fieldToolTipsichiba_exhibition_shouhin["English"]["Parent_stone"] = "";
	$placeHoldersichiba_exhibition_shouhin["English"]["Parent_stone"] = "";
	if (count($fieldToolTipsichiba_exhibition_shouhin["English"]))
		$tdataichiba_exhibition_shouhin[".isUseToolTips"] = true;
}


	$tdataichiba_exhibition_shouhin[".NCSearch"] = true;



$tdataichiba_exhibition_shouhin[".shortTableName"] = "ichiba_exhibition_shouhin";
$tdataichiba_exhibition_shouhin[".nSecOptions"] = 0;
$tdataichiba_exhibition_shouhin[".recsPerRowPrint"] = 1;
$tdataichiba_exhibition_shouhin[".mainTableOwnerID"] = "";
$tdataichiba_exhibition_shouhin[".moveNext"] = 1;
$tdataichiba_exhibition_shouhin[".entityType"] = 1;

$tdataichiba_exhibition_shouhin[".strOriginalTableName"] = "shouhin";

	



$tdataichiba_exhibition_shouhin[".showAddInPopup"] = false;

$tdataichiba_exhibition_shouhin[".showEditInPopup"] = false;

$tdataichiba_exhibition_shouhin[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataichiba_exhibition_shouhin[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataichiba_exhibition_shouhin[".fieldsForRegister"] = array();

$tdataichiba_exhibition_shouhin[".listAjax"] = false;

	$tdataichiba_exhibition_shouhin[".audit"] = true;

	$tdataichiba_exhibition_shouhin[".locking"] = false;



$tdataichiba_exhibition_shouhin[".list"] = true;

$tdataichiba_exhibition_shouhin[".inlineEdit"] = true;


$tdataichiba_exhibition_shouhin[".reorderRecordsByHeader"] = true;
$tdataichiba_exhibition_shouhin[".createSortByDropdown"] = true;
$tdataichiba_exhibition_shouhin[".strSortControlSettingsJSON"] = "";




$tdataichiba_exhibition_shouhin[".import"] = true;

$tdataichiba_exhibition_shouhin[".exportTo"] = true;



$tdataichiba_exhibition_shouhin[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataichiba_exhibition_shouhin[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataichiba_exhibition_shouhin[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataichiba_exhibition_shouhin[".searchSaving"] = false;
//

$tdataichiba_exhibition_shouhin[".showSearchPanel"] = true;
		$tdataichiba_exhibition_shouhin[".flexibleSearch"] = true;

$tdataichiba_exhibition_shouhin[".isUseAjaxSuggest"] = true;

$tdataichiba_exhibition_shouhin[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																							
					
					
					
					
					
																																																																																																																																																														

$tdataichiba_exhibition_shouhin[".ajaxCodeSnippetAdded"] = false;

$tdataichiba_exhibition_shouhin[".buttonsAdded"] = true;

$tdataichiba_exhibition_shouhin[".addPageEvents"] = true;

// use timepicker for search panel
$tdataichiba_exhibition_shouhin[".isUseTimeForSearch"] = false;



$tdataichiba_exhibition_shouhin[".badgeColor"] = "4682b4";


$tdataichiba_exhibition_shouhin[".allSearchFields"] = array();
$tdataichiba_exhibition_shouhin[".filterFields"] = array();
$tdataichiba_exhibition_shouhin[".requiredSearchFields"] = array();

$tdataichiba_exhibition_shouhin[".allSearchFields"][] = "ichiba_exhibition_id";
	$tdataichiba_exhibition_shouhin[".allSearchFields"][] = "ichiba_exhibition_sort";
	$tdataichiba_exhibition_shouhin[".allSearchFields"][] = "product_id";
	$tdataichiba_exhibition_shouhin[".allSearchFields"][] = "Parent_stone";
	$tdataichiba_exhibition_shouhin[".allSearchFields"][] = "description";
	$tdataichiba_exhibition_shouhin[".allSearchFields"][] = "comment";
	$tdataichiba_exhibition_shouhin[".allSearchFields"][] = "updated_at";
	$tdataichiba_exhibition_shouhin[".allSearchFields"][] = "updated_by";
	$tdataichiba_exhibition_shouhin[".allSearchFields"][] = "sheet_title";
	$tdataichiba_exhibition_shouhin[".allSearchFields"][] = "url_id";
	$tdataichiba_exhibition_shouhin[".allSearchFields"][] = "sheet_id";
	$tdataichiba_exhibition_shouhin[".allSearchFields"][] = "sheet_name";
	$tdataichiba_exhibition_shouhin[".allSearchFields"][] = "sheet_url";
	

$tdataichiba_exhibition_shouhin[".googleLikeFields"] = array();
$tdataichiba_exhibition_shouhin[".googleLikeFields"][] = "product_id";
$tdataichiba_exhibition_shouhin[".googleLikeFields"][] = "ichiba_exhibition_id";
$tdataichiba_exhibition_shouhin[".googleLikeFields"][] = "ichiba_exhibition_sort";
$tdataichiba_exhibition_shouhin[".googleLikeFields"][] = "description";
$tdataichiba_exhibition_shouhin[".googleLikeFields"][] = "updated_at";
$tdataichiba_exhibition_shouhin[".googleLikeFields"][] = "updated_by";
$tdataichiba_exhibition_shouhin[".googleLikeFields"][] = "sheet_title";
$tdataichiba_exhibition_shouhin[".googleLikeFields"][] = "url_id";
$tdataichiba_exhibition_shouhin[".googleLikeFields"][] = "sheet_id";
$tdataichiba_exhibition_shouhin[".googleLikeFields"][] = "sheet_name";
$tdataichiba_exhibition_shouhin[".googleLikeFields"][] = "sheet_url";
$tdataichiba_exhibition_shouhin[".googleLikeFields"][] = "comment";
$tdataichiba_exhibition_shouhin[".googleLikeFields"][] = "Parent_stone";

$tdataichiba_exhibition_shouhin[".panelSearchFields"] = array();
$tdataichiba_exhibition_shouhin[".searchPanelOptions"] = array();
$tdataichiba_exhibition_shouhin[".panelSearchFields"][] = "product_id";
	
$tdataichiba_exhibition_shouhin[".advSearchFields"] = array();
$tdataichiba_exhibition_shouhin[".advSearchFields"][] = "ichiba_exhibition_id";
$tdataichiba_exhibition_shouhin[".advSearchFields"][] = "ichiba_exhibition_sort";
$tdataichiba_exhibition_shouhin[".advSearchFields"][] = "product_id";
$tdataichiba_exhibition_shouhin[".advSearchFields"][] = "Parent_stone";
$tdataichiba_exhibition_shouhin[".advSearchFields"][] = "description";
$tdataichiba_exhibition_shouhin[".advSearchFields"][] = "comment";
$tdataichiba_exhibition_shouhin[".advSearchFields"][] = "updated_at";
$tdataichiba_exhibition_shouhin[".advSearchFields"][] = "updated_by";
$tdataichiba_exhibition_shouhin[".advSearchFields"][] = "sheet_title";
$tdataichiba_exhibition_shouhin[".advSearchFields"][] = "url_id";
$tdataichiba_exhibition_shouhin[".advSearchFields"][] = "sheet_id";
$tdataichiba_exhibition_shouhin[".advSearchFields"][] = "sheet_name";
$tdataichiba_exhibition_shouhin[".advSearchFields"][] = "sheet_url";

$tdataichiba_exhibition_shouhin[".tableType"] = "list";

$tdataichiba_exhibition_shouhin[".printerPageOrientation"] = 0;
$tdataichiba_exhibition_shouhin[".nPrinterPageScale"] = 100;

$tdataichiba_exhibition_shouhin[".nPrinterSplitRecords"] = 40;

$tdataichiba_exhibition_shouhin[".nPrinterPDFSplitRecords"] = 40;



$tdataichiba_exhibition_shouhin[".geocodingEnabled"] = false;





$tdataichiba_exhibition_shouhin[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataichiba_exhibition_shouhin[".pageSize"] = 100;

$tdataichiba_exhibition_shouhin[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `shouhin`.`Parent_stone`";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataichiba_exhibition_shouhin[".strOrderBy"] = $tstrOrderBy;

$tdataichiba_exhibition_shouhin[".orderindexes"] = array();
$tdataichiba_exhibition_shouhin[".orderindexes"][] = array(13, (1 ? "ASC" : "DESC"), "`shouhin`.`Parent_stone`");

$tdataichiba_exhibition_shouhin[".sqlHead"] = "SELECT `shouhin`.`product_id`,  `shouhin`.`ichiba_exhibition_id`,  `shouhin`.`ichiba_exhibition_sort`,  `shouhin`.`description`,  `shouhin`.`updated_at`,  `shouhin`.`updated_by`,  `mst_jigane_sheet`.`sheet_title`,  `mst_jigane_sheet`.`url_id`,  `mst_jigane_sheet`.`sheet_id`,  `mst_jigane_sheet`.`sheet_name`,  `mst_jigane_sheet`.`sheet_url`,  `shouhin`.`comment`,  `shouhin`.`Parent_stone`";
$tdataichiba_exhibition_shouhin[".sqlFrom"] = "FROM `shouhin`  LEFT OUTER JOIN `mst_jigane_sheet` ON `shouhin`.`product_id` = `mst_jigane_sheet`.`product_id`";
$tdataichiba_exhibition_shouhin[".sqlWhereExpr"] = "";
$tdataichiba_exhibition_shouhin[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataichiba_exhibition_shouhin[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataichiba_exhibition_shouhin[".arrGroupsPerPage"] = $arrGPP;

$tdataichiba_exhibition_shouhin[".highlightSearchResults"] = true;

$tableKeysichiba_exhibition_shouhin = array();
$tableKeysichiba_exhibition_shouhin[] = "product_id";
$tdataichiba_exhibition_shouhin[".Keys"] = $tableKeysichiba_exhibition_shouhin;

$tdataichiba_exhibition_shouhin[".listFields"] = array();
$tdataichiba_exhibition_shouhin[".listFields"][] = "ichiba_exhibition_id";
$tdataichiba_exhibition_shouhin[".listFields"][] = "ichiba_exhibition_sort";
$tdataichiba_exhibition_shouhin[".listFields"][] = "product_id";
$tdataichiba_exhibition_shouhin[".listFields"][] = "Parent_stone";
$tdataichiba_exhibition_shouhin[".listFields"][] = "description";
$tdataichiba_exhibition_shouhin[".listFields"][] = "comment";
$tdataichiba_exhibition_shouhin[".listFields"][] = "updated_at";
$tdataichiba_exhibition_shouhin[".listFields"][] = "updated_by";
$tdataichiba_exhibition_shouhin[".listFields"][] = "sheet_title";
$tdataichiba_exhibition_shouhin[".listFields"][] = "url_id";
$tdataichiba_exhibition_shouhin[".listFields"][] = "sheet_id";
$tdataichiba_exhibition_shouhin[".listFields"][] = "sheet_name";
$tdataichiba_exhibition_shouhin[".listFields"][] = "sheet_url";

$tdataichiba_exhibition_shouhin[".hideMobileList"] = array();


$tdataichiba_exhibition_shouhin[".viewFields"] = array();

$tdataichiba_exhibition_shouhin[".addFields"] = array();

$tdataichiba_exhibition_shouhin[".masterListFields"] = array();
$tdataichiba_exhibition_shouhin[".masterListFields"][] = "ichiba_exhibition_id";
$tdataichiba_exhibition_shouhin[".masterListFields"][] = "ichiba_exhibition_sort";
$tdataichiba_exhibition_shouhin[".masterListFields"][] = "product_id";
$tdataichiba_exhibition_shouhin[".masterListFields"][] = "Parent_stone";
$tdataichiba_exhibition_shouhin[".masterListFields"][] = "description";
$tdataichiba_exhibition_shouhin[".masterListFields"][] = "comment";
$tdataichiba_exhibition_shouhin[".masterListFields"][] = "updated_at";
$tdataichiba_exhibition_shouhin[".masterListFields"][] = "updated_by";
$tdataichiba_exhibition_shouhin[".masterListFields"][] = "sheet_title";
$tdataichiba_exhibition_shouhin[".masterListFields"][] = "url_id";
$tdataichiba_exhibition_shouhin[".masterListFields"][] = "sheet_id";
$tdataichiba_exhibition_shouhin[".masterListFields"][] = "sheet_name";
$tdataichiba_exhibition_shouhin[".masterListFields"][] = "sheet_url";

$tdataichiba_exhibition_shouhin[".inlineAddFields"] = array();

$tdataichiba_exhibition_shouhin[".editFields"] = array();

$tdataichiba_exhibition_shouhin[".inlineEditFields"] = array();
$tdataichiba_exhibition_shouhin[".inlineEditFields"][] = "ichiba_exhibition_id";
$tdataichiba_exhibition_shouhin[".inlineEditFields"][] = "ichiba_exhibition_sort";
$tdataichiba_exhibition_shouhin[".inlineEditFields"][] = "Parent_stone";
$tdataichiba_exhibition_shouhin[".inlineEditFields"][] = "description";
$tdataichiba_exhibition_shouhin[".inlineEditFields"][] = "comment";

$tdataichiba_exhibition_shouhin[".updateSelectedFields"] = array();


$tdataichiba_exhibition_shouhin[".exportFields"] = array();
$tdataichiba_exhibition_shouhin[".exportFields"][] = "ichiba_exhibition_id";
$tdataichiba_exhibition_shouhin[".exportFields"][] = "ichiba_exhibition_sort";
$tdataichiba_exhibition_shouhin[".exportFields"][] = "product_id";
$tdataichiba_exhibition_shouhin[".exportFields"][] = "Parent_stone";
$tdataichiba_exhibition_shouhin[".exportFields"][] = "description";
$tdataichiba_exhibition_shouhin[".exportFields"][] = "comment";
$tdataichiba_exhibition_shouhin[".exportFields"][] = "updated_at";
$tdataichiba_exhibition_shouhin[".exportFields"][] = "updated_by";
$tdataichiba_exhibition_shouhin[".exportFields"][] = "sheet_title";
$tdataichiba_exhibition_shouhin[".exportFields"][] = "url_id";
$tdataichiba_exhibition_shouhin[".exportFields"][] = "sheet_id";
$tdataichiba_exhibition_shouhin[".exportFields"][] = "sheet_name";
$tdataichiba_exhibition_shouhin[".exportFields"][] = "sheet_url";

$tdataichiba_exhibition_shouhin[".importFields"] = array();
$tdataichiba_exhibition_shouhin[".importFields"][] = "product_id";
$tdataichiba_exhibition_shouhin[".importFields"][] = "ichiba_exhibition_id";
$tdataichiba_exhibition_shouhin[".importFields"][] = "ichiba_exhibition_sort";
$tdataichiba_exhibition_shouhin[".importFields"][] = "description";
$tdataichiba_exhibition_shouhin[".importFields"][] = "sheet_title";
$tdataichiba_exhibition_shouhin[".importFields"][] = "url_id";
$tdataichiba_exhibition_shouhin[".importFields"][] = "sheet_id";
$tdataichiba_exhibition_shouhin[".importFields"][] = "sheet_name";
$tdataichiba_exhibition_shouhin[".importFields"][] = "sheet_url";
$tdataichiba_exhibition_shouhin[".importFields"][] = "comment";
$tdataichiba_exhibition_shouhin[".importFields"][] = "Parent_stone";

$tdataichiba_exhibition_shouhin[".printFields"] = array();

//	product_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "product_id";
	$fdata["GoodName"] = "product_id";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("ichiba_exhibition_shouhin","product_id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

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




	$tdataichiba_exhibition_shouhin["product_id"] = $fdata;
//	ichiba_exhibition_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ichiba_exhibition_id";
	$fdata["GoodName"] = "ichiba_exhibition_id";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("ichiba_exhibition_shouhin","ichiba_exhibition_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ichiba_exhibition_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`ichiba_exhibition_id`";

	
	
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




	$tdataichiba_exhibition_shouhin["ichiba_exhibition_id"] = $fdata;
//	ichiba_exhibition_sort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ichiba_exhibition_sort";
	$fdata["GoodName"] = "ichiba_exhibition_sort";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("ichiba_exhibition_shouhin","ichiba_exhibition_sort");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ichiba_exhibition_sort";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`ichiba_exhibition_sort`";

	
	
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




	$tdataichiba_exhibition_shouhin["ichiba_exhibition_sort"] = $fdata;
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("ichiba_exhibition_shouhin","description");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "description";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`description`";

	
	
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




	$tdataichiba_exhibition_shouhin["description"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("ichiba_exhibition_shouhin","updated_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "updated_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`updated_at`";

	
	
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
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataichiba_exhibition_shouhin["updated_at"] = $fdata;
//	updated_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "updated_by";
	$fdata["GoodName"] = "updated_by";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("ichiba_exhibition_shouhin","updated_by");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "updated_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`updated_by`";

	
	
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
	$edata["LinkFieldType"] = 3;
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataichiba_exhibition_shouhin["updated_by"] = $fdata;
//	sheet_title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "sheet_title";
	$fdata["GoodName"] = "sheet_title";
	$fdata["ownerTable"] = "mst_jigane_sheet";
	$fdata["Label"] = GetFieldLabel("ichiba_exhibition_shouhin","sheet_title");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "sheet_title";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mst_jigane_sheet`.`sheet_title`";

	
	
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




	$tdataichiba_exhibition_shouhin["sheet_title"] = $fdata;
//	url_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "url_id";
	$fdata["GoodName"] = "url_id";
	$fdata["ownerTable"] = "mst_jigane_sheet";
	$fdata["Label"] = GetFieldLabel("ichiba_exhibition_shouhin","url_id");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "url_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mst_jigane_sheet`.`url_id`";

	
	
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




	$tdataichiba_exhibition_shouhin["url_id"] = $fdata;
//	sheet_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "sheet_id";
	$fdata["GoodName"] = "sheet_id";
	$fdata["ownerTable"] = "mst_jigane_sheet";
	$fdata["Label"] = GetFieldLabel("ichiba_exhibition_shouhin","sheet_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "sheet_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mst_jigane_sheet`.`sheet_id`";

	
	
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




	$tdataichiba_exhibition_shouhin["sheet_id"] = $fdata;
//	sheet_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "sheet_name";
	$fdata["GoodName"] = "sheet_name";
	$fdata["ownerTable"] = "mst_jigane_sheet";
	$fdata["Label"] = GetFieldLabel("ichiba_exhibition_shouhin","sheet_name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "sheet_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mst_jigane_sheet`.`sheet_name`";

	
	
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




	$tdataichiba_exhibition_shouhin["sheet_name"] = $fdata;
//	sheet_url
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "sheet_url";
	$fdata["GoodName"] = "sheet_url";
	$fdata["ownerTable"] = "mst_jigane_sheet";
	$fdata["Label"] = GetFieldLabel("ichiba_exhibition_shouhin","sheet_url");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "sheet_url";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mst_jigane_sheet`.`sheet_url`";

	
	
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




	$tdataichiba_exhibition_shouhin["sheet_url"] = $fdata;
//	comment
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "comment";
	$fdata["GoodName"] = "comment";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("ichiba_exhibition_shouhin","comment");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "comment";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`comment`";

	
	
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




	$tdataichiba_exhibition_shouhin["comment"] = $fdata;
//	Parent_stone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Parent_stone";
	$fdata["GoodName"] = "Parent_stone";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("ichiba_exhibition_shouhin","Parent_stone");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Parent_stone";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`Parent_stone`";

	
	
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
			$edata["EditParams"].= " maxlength=20";

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




	$tdataichiba_exhibition_shouhin["Parent_stone"] = $fdata;


$tables_data["ichiba_exhibition_shouhin"]=&$tdataichiba_exhibition_shouhin;
$field_labels["ichiba_exhibition_shouhin"] = &$fieldLabelsichiba_exhibition_shouhin;
$fieldToolTips["ichiba_exhibition_shouhin"] = &$fieldToolTipsichiba_exhibition_shouhin;
$placeHolders["ichiba_exhibition_shouhin"] = &$placeHoldersichiba_exhibition_shouhin;
$page_titles["ichiba_exhibition_shouhin"] = &$pageTitlesichiba_exhibition_shouhin;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["ichiba_exhibition_shouhin"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["ichiba_exhibition_shouhin"] = array();


	
				$strOriginalDetailsTable="ichiba_exhibition";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="ichiba_exhibition";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "ichiba_exhibition";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispMasterInfo"] = array();
				$masterParams["dispMasterInfo"][PAGE_LIST] = true;
			
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 1;
	$masterParams["proceedLink"]= 1;

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["ichiba_exhibition_shouhin"][0] = $masterParams;
				$masterTablesData["ichiba_exhibition_shouhin"][0]["masterKeys"] = array();
	$masterTablesData["ichiba_exhibition_shouhin"][0]["masterKeys"][]="id";
				$masterTablesData["ichiba_exhibition_shouhin"][0]["detailKeys"] = array();
	$masterTablesData["ichiba_exhibition_shouhin"][0]["detailKeys"][]="ichiba_exhibition_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_ichiba_exhibition_shouhin()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`shouhin`.`product_id`,  `shouhin`.`ichiba_exhibition_id`,  `shouhin`.`ichiba_exhibition_sort`,  `shouhin`.`description`,  `shouhin`.`updated_at`,  `shouhin`.`updated_by`,  `mst_jigane_sheet`.`sheet_title`,  `mst_jigane_sheet`.`url_id`,  `mst_jigane_sheet`.`sheet_id`,  `mst_jigane_sheet`.`sheet_name`,  `mst_jigane_sheet`.`sheet_url`,  `shouhin`.`comment`,  `shouhin`.`Parent_stone`";
$proto0["m_strFrom"] = "FROM `shouhin`  LEFT OUTER JOIN `mst_jigane_sheet` ON `shouhin`.`product_id` = `mst_jigane_sheet`.`product_id`";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY `shouhin`.`Parent_stone`";
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
	"m_strName" => "product_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "ichiba_exhibition_shouhin"
));

$proto6["m_sql"] = "`shouhin`.`product_id`";
$proto6["m_srcTableName"] = "ichiba_exhibition_shouhin";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ichiba_exhibition_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "ichiba_exhibition_shouhin"
));

$proto8["m_sql"] = "`shouhin`.`ichiba_exhibition_id`";
$proto8["m_srcTableName"] = "ichiba_exhibition_shouhin";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "ichiba_exhibition_sort",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "ichiba_exhibition_shouhin"
));

$proto10["m_sql"] = "`shouhin`.`ichiba_exhibition_sort`";
$proto10["m_srcTableName"] = "ichiba_exhibition_shouhin";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "ichiba_exhibition_shouhin"
));

$proto12["m_sql"] = "`shouhin`.`description`";
$proto12["m_srcTableName"] = "ichiba_exhibition_shouhin";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "ichiba_exhibition_shouhin"
));

$proto14["m_sql"] = "`shouhin`.`updated_at`";
$proto14["m_srcTableName"] = "ichiba_exhibition_shouhin";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "ichiba_exhibition_shouhin"
));

$proto16["m_sql"] = "`shouhin`.`updated_by`";
$proto16["m_srcTableName"] = "ichiba_exhibition_shouhin";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "sheet_title",
	"m_strTable" => "mst_jigane_sheet",
	"m_srcTableName" => "ichiba_exhibition_shouhin"
));

$proto18["m_sql"] = "`mst_jigane_sheet`.`sheet_title`";
$proto18["m_srcTableName"] = "ichiba_exhibition_shouhin";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "url_id",
	"m_strTable" => "mst_jigane_sheet",
	"m_srcTableName" => "ichiba_exhibition_shouhin"
));

$proto20["m_sql"] = "`mst_jigane_sheet`.`url_id`";
$proto20["m_srcTableName"] = "ichiba_exhibition_shouhin";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "sheet_id",
	"m_strTable" => "mst_jigane_sheet",
	"m_srcTableName" => "ichiba_exhibition_shouhin"
));

$proto22["m_sql"] = "`mst_jigane_sheet`.`sheet_id`";
$proto22["m_srcTableName"] = "ichiba_exhibition_shouhin";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "sheet_name",
	"m_strTable" => "mst_jigane_sheet",
	"m_srcTableName" => "ichiba_exhibition_shouhin"
));

$proto24["m_sql"] = "`mst_jigane_sheet`.`sheet_name`";
$proto24["m_srcTableName"] = "ichiba_exhibition_shouhin";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "sheet_url",
	"m_strTable" => "mst_jigane_sheet",
	"m_srcTableName" => "ichiba_exhibition_shouhin"
));

$proto26["m_sql"] = "`mst_jigane_sheet`.`sheet_url`";
$proto26["m_srcTableName"] = "ichiba_exhibition_shouhin";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "comment",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "ichiba_exhibition_shouhin"
));

$proto28["m_sql"] = "`shouhin`.`comment`";
$proto28["m_srcTableName"] = "ichiba_exhibition_shouhin";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "Parent_stone",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "ichiba_exhibition_shouhin"
));

$proto30["m_sql"] = "`shouhin`.`Parent_stone`";
$proto30["m_srcTableName"] = "ichiba_exhibition_shouhin";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto32=array();
$proto32["m_link"] = "SQLL_MAIN";
			$proto33=array();
$proto33["m_strName"] = "shouhin";
$proto33["m_srcTableName"] = "ichiba_exhibition_shouhin";
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
$proto32["m_srcTableName"] = "ichiba_exhibition_shouhin";
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
$proto36["m_link"] = "SQLL_LEFTJOIN";
			$proto37=array();
$proto37["m_strName"] = "mst_jigane_sheet";
$proto37["m_srcTableName"] = "ichiba_exhibition_shouhin";
$proto37["m_columns"] = array();
$proto37["m_columns"][] = "product_id";
$proto37["m_columns"][] = "sheet_title";
$proto37["m_columns"][] = "url_id";
$proto37["m_columns"][] = "sheet_id";
$proto37["m_columns"][] = "sheet_name";
$proto37["m_columns"][] = "sheet_url";
$proto37["m_columns"][] = "update_by";
$proto37["m_columns"][] = "update_at";
$proto37["m_columns"][] = "create_by";
$proto37["m_columns"][] = "create_at";
$obj = new SQLTable($proto37);

$proto36["m_table"] = $obj;
$proto36["m_sql"] = "LEFT OUTER JOIN `mst_jigane_sheet` ON `shouhin`.`product_id` = `mst_jigane_sheet`.`product_id`";
$proto36["m_alias"] = "";
$proto36["m_srcTableName"] = "ichiba_exhibition_shouhin";
$proto38=array();
$proto38["m_sql"] = "`shouhin`.`product_id` = `mst_jigane_sheet`.`product_id`";
$proto38["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "product_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "ichiba_exhibition_shouhin"
));

$proto38["m_column"]=$obj;
$proto38["m_contained"] = array();
$proto38["m_strCase"] = "= `mst_jigane_sheet`.`product_id`";
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
	"m_strName" => "Parent_stone",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "ichiba_exhibition_shouhin"
));

$proto40["m_column"]=$obj;
$proto40["m_bAsc"] = 1;
$proto40["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto40);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="ichiba_exhibition_shouhin";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_ichiba_exhibition_shouhin = createSqlQuery_ichiba_exhibition_shouhin();


	
		;

													

$tdataichiba_exhibition_shouhin[".sqlquery"] = $queryData_ichiba_exhibition_shouhin;

include_once(getabspath("include/ichiba_exhibition_shouhin_events.php"));
$tableEvents["ichiba_exhibition_shouhin"] = new eventclass_ichiba_exhibition_shouhin;
$tdataichiba_exhibition_shouhin[".hasEvents"] = true;

?>