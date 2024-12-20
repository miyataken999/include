<?php
require_once(getabspath("classes/cipherer.php"));




$tdatabox = array();
	$tdatabox[".truncateText"] = true;
	$tdatabox[".NumberOfChars"] = 80;
	$tdatabox[".ShortName"] = "box";
	$tdatabox[".OwnerID"] = "";
	$tdatabox[".OriginalTable"] = "box";

//	field labels
$fieldLabelsbox = array();
$fieldToolTipsbox = array();
$pageTitlesbox = array();
$placeHoldersbox = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsbox["Japanese"] = array();
	$fieldToolTipsbox["Japanese"] = array();
	$placeHoldersbox["Japanese"] = array();
	$pageTitlesbox["Japanese"] = array();
	$fieldLabelsbox["Japanese"]["box_id"] = "ボックスId";
	$fieldToolTipsbox["Japanese"]["box_id"] = "";
	$placeHoldersbox["Japanese"]["box_id"] = "";
	$fieldLabelsbox["Japanese"]["box_name"] = "ボックス名";
	$fieldToolTipsbox["Japanese"]["box_name"] = "";
	$placeHoldersbox["Japanese"]["box_name"] = "";
	$fieldLabelsbox["Japanese"]["created_at"] = "作成日";
	$fieldToolTipsbox["Japanese"]["created_at"] = "";
	$placeHoldersbox["Japanese"]["created_at"] = "";
	$fieldLabelsbox["Japanese"]["created_by"] = "作成者";
	$fieldToolTipsbox["Japanese"]["created_by"] = "";
	$placeHoldersbox["Japanese"]["created_by"] = "";
	$fieldLabelsbox["Japanese"]["zip"] = "Zipファイル";
	$fieldToolTipsbox["Japanese"]["zip"] = "";
	$placeHoldersbox["Japanese"]["zip"] = "";
	$fieldLabelsbox["Japanese"]["zip_status"] = "ZipUP済み";
	$fieldToolTipsbox["Japanese"]["zip_status"] = "";
	$placeHoldersbox["Japanese"]["zip_status"] = "";
	$fieldLabelsbox["Japanese"]["zip_name"] = "Zipファイル名";
	$fieldToolTipsbox["Japanese"]["zip_name"] = "";
	$placeHoldersbox["Japanese"]["zip_name"] = "";
	$fieldLabelsbox["Japanese"]["updated_at"] = "更新日";
	$fieldToolTipsbox["Japanese"]["updated_at"] = "";
	$placeHoldersbox["Japanese"]["updated_at"] = "";
	$fieldLabelsbox["Japanese"]["rakuten_cabinet_name"] = "楽天キャビネット名";
	$fieldToolTipsbox["Japanese"]["rakuten_cabinet_name"] = "";
	$placeHoldersbox["Japanese"]["rakuten_cabinet_name"] = "";
	$fieldLabelsbox["Japanese"]["raku_image_name"] = "楽天イメージパス";
	$fieldToolTipsbox["Japanese"]["raku_image_name"] = "";
	$placeHoldersbox["Japanese"]["raku_image_name"] = "";
	$fieldLabelsbox["Japanese"]["csv"] = "CSV";
	$fieldToolTipsbox["Japanese"]["csv"] = "";
	$placeHoldersbox["Japanese"]["csv"] = "";
	$fieldLabelsbox["Japanese"]["zip_create"] = "作成済みフラグ";
	$fieldToolTipsbox["Japanese"]["zip_create"] = "";
	$placeHoldersbox["Japanese"]["zip_create"] = "";
	$fieldLabelsbox["Japanese"]["updated_by"] = "更新者";
	$fieldToolTipsbox["Japanese"]["updated_by"] = "";
	$placeHoldersbox["Japanese"]["updated_by"] = "";
	$fieldLabelsbox["Japanese"]["count"] = "チェック有り10枚無し5枚";
	$fieldToolTipsbox["Japanese"]["count"] = "";
	$placeHoldersbox["Japanese"]["count"] = "";
	$fieldLabelsbox["Japanese"]["box_name_jp"] = "画像";
	$fieldToolTipsbox["Japanese"]["box_name_jp"] = "";
	$placeHoldersbox["Japanese"]["box_name_jp"] = "";
	$fieldLabelsbox["Japanese"]["link"] = "新規画像確認（出品ZIP）";
	$fieldToolTipsbox["Japanese"]["link"] = "";
	$placeHoldersbox["Japanese"]["link"] = "";
	if (count($fieldToolTipsbox["Japanese"]))
		$tdatabox[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsbox[""] = array();
	$fieldToolTipsbox[""] = array();
	$placeHoldersbox[""] = array();
	$pageTitlesbox[""] = array();
	$fieldLabelsbox[""]["box_id"] = "Box Id";
	$fieldToolTipsbox[""]["box_id"] = "";
	$placeHoldersbox[""]["box_id"] = "";
	$fieldLabelsbox[""]["box_name"] = "Box Name";
	$fieldToolTipsbox[""]["box_name"] = "";
	$placeHoldersbox[""]["box_name"] = "";
	$fieldLabelsbox[""]["created_at"] = "Created At";
	$fieldToolTipsbox[""]["created_at"] = "";
	$placeHoldersbox[""]["created_at"] = "";
	$fieldLabelsbox[""]["created_by"] = "Created By";
	$fieldToolTipsbox[""]["created_by"] = "";
	$placeHoldersbox[""]["created_by"] = "";
	$fieldLabelsbox[""]["zip"] = "Zip";
	$fieldToolTipsbox[""]["zip"] = "";
	$placeHoldersbox[""]["zip"] = "";
	$fieldLabelsbox[""]["zip_status"] = "Zip Status";
	$fieldToolTipsbox[""]["zip_status"] = "";
	$placeHoldersbox[""]["zip_status"] = "";
	$fieldLabelsbox[""]["zip_name"] = "Zip Name";
	$fieldToolTipsbox[""]["zip_name"] = "";
	$placeHoldersbox[""]["zip_name"] = "";
	$fieldLabelsbox[""]["updated_at"] = "Updated At";
	$fieldToolTipsbox[""]["updated_at"] = "";
	$placeHoldersbox[""]["updated_at"] = "";
	$fieldLabelsbox[""]["rakuten_cabinet_name"] = "Rakuten Cabinet Name";
	$fieldToolTipsbox[""]["rakuten_cabinet_name"] = "";
	$placeHoldersbox[""]["rakuten_cabinet_name"] = "";
	$fieldLabelsbox[""]["raku_image_name"] = "Raku Image Name";
	$fieldToolTipsbox[""]["raku_image_name"] = "";
	$placeHoldersbox[""]["raku_image_name"] = "";
	$fieldLabelsbox[""]["csv"] = "Csv";
	$fieldToolTipsbox[""]["csv"] = "";
	$placeHoldersbox[""]["csv"] = "";
	$fieldLabelsbox[""]["zip_create"] = "Zip Create";
	$fieldToolTipsbox[""]["zip_create"] = "";
	$placeHoldersbox[""]["zip_create"] = "";
	$fieldLabelsbox[""]["updated_by"] = "Updated By";
	$fieldToolTipsbox[""]["updated_by"] = "";
	$placeHoldersbox[""]["updated_by"] = "";
	$fieldLabelsbox[""]["count"] = "Count";
	$fieldToolTipsbox[""]["count"] = "";
	$placeHoldersbox[""]["count"] = "";
	$fieldLabelsbox[""]["box_name_jp"] = "Box Name Jp";
	$fieldToolTipsbox[""]["box_name_jp"] = "";
	$placeHoldersbox[""]["box_name_jp"] = "";
	$fieldLabelsbox[""]["link"] = "Link";
	$fieldToolTipsbox[""]["link"] = "";
	$placeHoldersbox[""]["link"] = "";
	if (count($fieldToolTipsbox[""]))
		$tdatabox[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsbox["English"] = array();
	$fieldToolTipsbox["English"] = array();
	$placeHoldersbox["English"] = array();
	$pageTitlesbox["English"] = array();
	$fieldLabelsbox["English"]["box_id"] = "Box Id";
	$fieldToolTipsbox["English"]["box_id"] = "";
	$placeHoldersbox["English"]["box_id"] = "";
	$fieldLabelsbox["English"]["box_name"] = "Box Name";
	$fieldToolTipsbox["English"]["box_name"] = "";
	$placeHoldersbox["English"]["box_name"] = "";
	$fieldLabelsbox["English"]["created_at"] = "Created At";
	$fieldToolTipsbox["English"]["created_at"] = "";
	$placeHoldersbox["English"]["created_at"] = "";
	$fieldLabelsbox["English"]["created_by"] = "Created By";
	$fieldToolTipsbox["English"]["created_by"] = "";
	$placeHoldersbox["English"]["created_by"] = "";
	$fieldLabelsbox["English"]["zip"] = "Zip";
	$fieldToolTipsbox["English"]["zip"] = "";
	$placeHoldersbox["English"]["zip"] = "";
	$fieldLabelsbox["English"]["zip_status"] = "Zip Status";
	$fieldToolTipsbox["English"]["zip_status"] = "";
	$placeHoldersbox["English"]["zip_status"] = "";
	$fieldLabelsbox["English"]["zip_name"] = "Zip Name";
	$fieldToolTipsbox["English"]["zip_name"] = "";
	$placeHoldersbox["English"]["zip_name"] = "";
	$fieldLabelsbox["English"]["updated_at"] = "Updated At";
	$fieldToolTipsbox["English"]["updated_at"] = "";
	$placeHoldersbox["English"]["updated_at"] = "";
	$fieldLabelsbox["English"]["rakuten_cabinet_name"] = "Rakuten Cabinet Name";
	$fieldToolTipsbox["English"]["rakuten_cabinet_name"] = "";
	$placeHoldersbox["English"]["rakuten_cabinet_name"] = "";
	$fieldLabelsbox["English"]["raku_image_name"] = "Raku Image Name";
	$fieldToolTipsbox["English"]["raku_image_name"] = "";
	$placeHoldersbox["English"]["raku_image_name"] = "";
	$fieldLabelsbox["English"]["csv"] = "Csv";
	$fieldToolTipsbox["English"]["csv"] = "";
	$placeHoldersbox["English"]["csv"] = "";
	$fieldLabelsbox["English"]["zip_create"] = "Zip Create";
	$fieldToolTipsbox["English"]["zip_create"] = "";
	$placeHoldersbox["English"]["zip_create"] = "";
	$fieldLabelsbox["English"]["updated_by"] = "Updated By";
	$fieldToolTipsbox["English"]["updated_by"] = "";
	$placeHoldersbox["English"]["updated_by"] = "";
	$fieldLabelsbox["English"]["count"] = "Count";
	$fieldToolTipsbox["English"]["count"] = "";
	$placeHoldersbox["English"]["count"] = "";
	$fieldLabelsbox["English"]["box_name_jp"] = "Box Name Jp";
	$fieldToolTipsbox["English"]["box_name_jp"] = "";
	$placeHoldersbox["English"]["box_name_jp"] = "";
	$fieldLabelsbox["English"]["link"] = "Link";
	$fieldToolTipsbox["English"]["link"] = "";
	$placeHoldersbox["English"]["link"] = "";
	if (count($fieldToolTipsbox["English"]))
		$tdatabox[".isUseToolTips"] = true;
}


	$tdatabox[".NCSearch"] = true;



$tdatabox[".shortTableName"] = "box";
$tdatabox[".nSecOptions"] = 0;
$tdatabox[".recsPerRowPrint"] = 1;
$tdatabox[".mainTableOwnerID"] = "";
$tdatabox[".moveNext"] = 1;
$tdatabox[".entityType"] = 0;

$tdatabox[".strOriginalTableName"] = "box";

	



$tdatabox[".showAddInPopup"] = false;

$tdatabox[".showEditInPopup"] = false;

$tdatabox[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatabox[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatabox[".fieldsForRegister"] = array();

$tdatabox[".listAjax"] = false;

	$tdatabox[".audit"] = true;

	$tdatabox[".locking"] = false;



$tdatabox[".list"] = true;

$tdatabox[".inlineEdit"] = true;


$tdatabox[".reorderRecordsByHeader"] = true;



$tdatabox[".inlineAdd"] = true;

$tdatabox[".import"] = true;

$tdatabox[".exportTo"] = true;


$tdatabox[".delete"] = true;

$tdatabox[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatabox[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatabox[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatabox[".searchSaving"] = false;
//

$tdatabox[".showSearchPanel"] = true;
		$tdatabox[".flexibleSearch"] = true;

$tdatabox[".isUseAjaxSuggest"] = true;

$tdatabox[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatabox[".ajaxCodeSnippetAdded"] = false;

$tdatabox[".buttonsAdded"] = false;

$tdatabox[".addPageEvents"] = false;

// use timepicker for search panel
$tdatabox[".isUseTimeForSearch"] = false;



$tdatabox[".badgeColor"] = "8fbc8b";


$tdatabox[".allSearchFields"] = array();
$tdatabox[".filterFields"] = array();
$tdatabox[".requiredSearchFields"] = array();

$tdatabox[".allSearchFields"][] = "link";
	$tdatabox[".allSearchFields"][] = "box_id";
	$tdatabox[".allSearchFields"][] = "box_name";
	$tdatabox[".allSearchFields"][] = "rakuten_cabinet_name";
	$tdatabox[".allSearchFields"][] = "raku_image_name";
	$tdatabox[".allSearchFields"][] = "count";
	$tdatabox[".allSearchFields"][] = "csv";
	$tdatabox[".allSearchFields"][] = "box_name_jp";
	$tdatabox[".allSearchFields"][] = "zip";
	$tdatabox[".allSearchFields"][] = "created_at";
	$tdatabox[".allSearchFields"][] = "created_by";
	$tdatabox[".allSearchFields"][] = "updated_at";
	$tdatabox[".allSearchFields"][] = "updated_by";
	$tdatabox[".allSearchFields"][] = "zip_create";
	$tdatabox[".allSearchFields"][] = "zip_name";
	$tdatabox[".allSearchFields"][] = "zip_status";
	

$tdatabox[".googleLikeFields"] = array();
$tdatabox[".googleLikeFields"][] = "link";
$tdatabox[".googleLikeFields"][] = "box_id";
$tdatabox[".googleLikeFields"][] = "box_name";
$tdatabox[".googleLikeFields"][] = "zip";
$tdatabox[".googleLikeFields"][] = "zip_status";
$tdatabox[".googleLikeFields"][] = "zip_name";
$tdatabox[".googleLikeFields"][] = "rakuten_cabinet_name";
$tdatabox[".googleLikeFields"][] = "raku_image_name";
$tdatabox[".googleLikeFields"][] = "csv";
$tdatabox[".googleLikeFields"][] = "zip_create";
$tdatabox[".googleLikeFields"][] = "count";
$tdatabox[".googleLikeFields"][] = "created_at";
$tdatabox[".googleLikeFields"][] = "created_by";
$tdatabox[".googleLikeFields"][] = "updated_at";
$tdatabox[".googleLikeFields"][] = "updated_by";
$tdatabox[".googleLikeFields"][] = "box_name_jp";


$tdatabox[".advSearchFields"] = array();
$tdatabox[".advSearchFields"][] = "link";
$tdatabox[".advSearchFields"][] = "box_id";
$tdatabox[".advSearchFields"][] = "box_name";
$tdatabox[".advSearchFields"][] = "rakuten_cabinet_name";
$tdatabox[".advSearchFields"][] = "raku_image_name";
$tdatabox[".advSearchFields"][] = "count";
$tdatabox[".advSearchFields"][] = "csv";
$tdatabox[".advSearchFields"][] = "box_name_jp";
$tdatabox[".advSearchFields"][] = "zip";
$tdatabox[".advSearchFields"][] = "created_at";
$tdatabox[".advSearchFields"][] = "created_by";
$tdatabox[".advSearchFields"][] = "updated_at";
$tdatabox[".advSearchFields"][] = "updated_by";
$tdatabox[".advSearchFields"][] = "zip_create";
$tdatabox[".advSearchFields"][] = "zip_name";
$tdatabox[".advSearchFields"][] = "zip_status";

$tdatabox[".tableType"] = "list";

$tdatabox[".printerPageOrientation"] = 0;
$tdatabox[".nPrinterPageScale"] = 100;

$tdatabox[".nPrinterSplitRecords"] = 40;

$tdatabox[".nPrinterPDFSplitRecords"] = 40;



$tdatabox[".geocodingEnabled"] = false;





$tdatabox[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatabox[".pageSize"] = 20;

$tdatabox[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `box_id` DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatabox[".strOrderBy"] = $tstrOrderBy;

$tdatabox[".orderindexes"] = array();
$tdatabox[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "`box_id`");

$tdatabox[".sqlHead"] = "SELECT `box_id` as 'link',  `box_id`,  `box_name`,  `zip`,  `zip_status`,  `zip_name`,  `rakuten_cabinet_name`,  `raku_image_name`,  `csv`,  `zip_create`,  `count`,  `created_at`,  `created_by`,  `updated_at`,  `updated_by`,  `box_name_jp`";
$tdatabox[".sqlFrom"] = "FROM `box`";
$tdatabox[".sqlWhereExpr"] = "";
$tdatabox[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatabox[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatabox[".arrGroupsPerPage"] = $arrGPP;

$tdatabox[".highlightSearchResults"] = true;

$tableKeysbox = array();
$tableKeysbox[] = "box_id";
$tdatabox[".Keys"] = $tableKeysbox;

$tdatabox[".listFields"] = array();
$tdatabox[".listFields"][] = "link";
$tdatabox[".listFields"][] = "box_id";
$tdatabox[".listFields"][] = "box_name";
$tdatabox[".listFields"][] = "rakuten_cabinet_name";
$tdatabox[".listFields"][] = "raku_image_name";
$tdatabox[".listFields"][] = "count";
$tdatabox[".listFields"][] = "csv";
$tdatabox[".listFields"][] = "box_name_jp";
$tdatabox[".listFields"][] = "zip";
$tdatabox[".listFields"][] = "created_at";
$tdatabox[".listFields"][] = "created_by";
$tdatabox[".listFields"][] = "updated_at";
$tdatabox[".listFields"][] = "updated_by";
$tdatabox[".listFields"][] = "zip_create";
$tdatabox[".listFields"][] = "zip_name";
$tdatabox[".listFields"][] = "zip_status";

$tdatabox[".hideMobileList"] = array();


$tdatabox[".viewFields"] = array();

$tdatabox[".addFields"] = array();

$tdatabox[".masterListFields"] = array();
$tdatabox[".masterListFields"][] = "link";
$tdatabox[".masterListFields"][] = "box_id";
$tdatabox[".masterListFields"][] = "box_name";
$tdatabox[".masterListFields"][] = "rakuten_cabinet_name";
$tdatabox[".masterListFields"][] = "raku_image_name";
$tdatabox[".masterListFields"][] = "count";
$tdatabox[".masterListFields"][] = "csv";
$tdatabox[".masterListFields"][] = "box_name_jp";
$tdatabox[".masterListFields"][] = "zip";
$tdatabox[".masterListFields"][] = "created_at";
$tdatabox[".masterListFields"][] = "created_by";
$tdatabox[".masterListFields"][] = "updated_at";
$tdatabox[".masterListFields"][] = "updated_by";
$tdatabox[".masterListFields"][] = "zip_create";
$tdatabox[".masterListFields"][] = "zip_name";
$tdatabox[".masterListFields"][] = "zip_status";

$tdatabox[".inlineAddFields"] = array();
$tdatabox[".inlineAddFields"][] = "box_name";
$tdatabox[".inlineAddFields"][] = "rakuten_cabinet_name";
$tdatabox[".inlineAddFields"][] = "raku_image_name";
$tdatabox[".inlineAddFields"][] = "count";
$tdatabox[".inlineAddFields"][] = "csv";
$tdatabox[".inlineAddFields"][] = "zip";
$tdatabox[".inlineAddFields"][] = "created_at";
$tdatabox[".inlineAddFields"][] = "created_by";
$tdatabox[".inlineAddFields"][] = "updated_at";
$tdatabox[".inlineAddFields"][] = "updated_by";
$tdatabox[".inlineAddFields"][] = "zip_create";
$tdatabox[".inlineAddFields"][] = "zip_name";
$tdatabox[".inlineAddFields"][] = "zip_status";

$tdatabox[".editFields"] = array();

$tdatabox[".inlineEditFields"] = array();
$tdatabox[".inlineEditFields"][] = "box_name";
$tdatabox[".inlineEditFields"][] = "rakuten_cabinet_name";
$tdatabox[".inlineEditFields"][] = "raku_image_name";
$tdatabox[".inlineEditFields"][] = "count";
$tdatabox[".inlineEditFields"][] = "csv";
$tdatabox[".inlineEditFields"][] = "zip";
$tdatabox[".inlineEditFields"][] = "created_at";
$tdatabox[".inlineEditFields"][] = "created_by";
$tdatabox[".inlineEditFields"][] = "updated_at";
$tdatabox[".inlineEditFields"][] = "updated_by";
$tdatabox[".inlineEditFields"][] = "zip_create";
$tdatabox[".inlineEditFields"][] = "zip_name";
$tdatabox[".inlineEditFields"][] = "zip_status";

$tdatabox[".updateSelectedFields"] = array();


$tdatabox[".exportFields"] = array();
$tdatabox[".exportFields"][] = "link";
$tdatabox[".exportFields"][] = "box_id";
$tdatabox[".exportFields"][] = "box_name";
$tdatabox[".exportFields"][] = "rakuten_cabinet_name";
$tdatabox[".exportFields"][] = "raku_image_name";
$tdatabox[".exportFields"][] = "count";
$tdatabox[".exportFields"][] = "csv";
$tdatabox[".exportFields"][] = "box_name_jp";
$tdatabox[".exportFields"][] = "zip";
$tdatabox[".exportFields"][] = "created_at";
$tdatabox[".exportFields"][] = "created_by";
$tdatabox[".exportFields"][] = "updated_at";
$tdatabox[".exportFields"][] = "updated_by";
$tdatabox[".exportFields"][] = "zip_create";
$tdatabox[".exportFields"][] = "zip_name";
$tdatabox[".exportFields"][] = "zip_status";

$tdatabox[".importFields"] = array();
$tdatabox[".importFields"][] = "link";
$tdatabox[".importFields"][] = "box_id";
$tdatabox[".importFields"][] = "box_name";
$tdatabox[".importFields"][] = "zip";
$tdatabox[".importFields"][] = "zip_status";
$tdatabox[".importFields"][] = "zip_name";
$tdatabox[".importFields"][] = "rakuten_cabinet_name";
$tdatabox[".importFields"][] = "raku_image_name";
$tdatabox[".importFields"][] = "csv";
$tdatabox[".importFields"][] = "zip_create";
$tdatabox[".importFields"][] = "count";
$tdatabox[".importFields"][] = "created_at";
$tdatabox[".importFields"][] = "created_by";
$tdatabox[".importFields"][] = "updated_at";
$tdatabox[".importFields"][] = "updated_by";
$tdatabox[".importFields"][] = "box_name_jp";

$tdatabox[".printFields"] = array();

//	link
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "link";
	$fdata["GoodName"] = "link";
	$fdata["ownerTable"] = "box";
	$fdata["Label"] = GetFieldLabel("box","link");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "box_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`box_id`";

	
	
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




	$tdatabox["link"] = $fdata;
//	box_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "box_id";
	$fdata["GoodName"] = "box_id";
	$fdata["ownerTable"] = "box";
	$fdata["Label"] = GetFieldLabel("box","box_id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "box_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`box_id`";

	
	
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




	$tdatabox["box_id"] = $fdata;
//	box_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "box_name";
	$fdata["GoodName"] = "box_name";
	$fdata["ownerTable"] = "box";
	$fdata["Label"] = GetFieldLabel("box","box_name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "box_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`box_name`";

	
	
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




	$tdatabox["box_name"] = $fdata;
//	zip
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "zip";
	$fdata["GoodName"] = "zip";
	$fdata["ownerTable"] = "box";
	$fdata["Label"] = GetFieldLabel("box","zip");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "zip";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`zip`";

	
	
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




	$tdatabox["zip"] = $fdata;
//	zip_status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "zip_status";
	$fdata["GoodName"] = "zip_status";
	$fdata["ownerTable"] = "box";
	$fdata["Label"] = GetFieldLabel("box","zip_status");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "zip_status";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`zip_status`";

	
	
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




	$tdatabox["zip_status"] = $fdata;
//	zip_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "zip_name";
	$fdata["GoodName"] = "zip_name";
	$fdata["ownerTable"] = "box";
	$fdata["Label"] = GetFieldLabel("box","zip_name");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "zip_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`zip_name`";

	
	
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




	$tdatabox["zip_name"] = $fdata;
//	rakuten_cabinet_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "rakuten_cabinet_name";
	$fdata["GoodName"] = "rakuten_cabinet_name";
	$fdata["ownerTable"] = "box";
	$fdata["Label"] = GetFieldLabel("box","rakuten_cabinet_name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "rakuten_cabinet_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`rakuten_cabinet_name`";

	
	
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
			$edata["EditParams"].= " maxlength=256";

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




	$tdatabox["rakuten_cabinet_name"] = $fdata;
//	raku_image_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "raku_image_name";
	$fdata["GoodName"] = "raku_image_name";
	$fdata["ownerTable"] = "box";
	$fdata["Label"] = GetFieldLabel("box","raku_image_name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "raku_image_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`raku_image_name`";

	
	
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




	$tdatabox["raku_image_name"] = $fdata;
//	csv
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "csv";
	$fdata["GoodName"] = "csv";
	$fdata["ownerTable"] = "box";
	$fdata["Label"] = GetFieldLabel("box","csv");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "csv";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`csv`";

	
	
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




	$tdatabox["csv"] = $fdata;
//	zip_create
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "zip_create";
	$fdata["GoodName"] = "zip_create";
	$fdata["ownerTable"] = "box";
	$fdata["Label"] = GetFieldLabel("box","zip_create");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "zip_create";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`zip_create`";

	
	
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




	$tdatabox["zip_create"] = $fdata;
//	count
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "count";
	$fdata["GoodName"] = "count";
	$fdata["ownerTable"] = "box";
	$fdata["Label"] = GetFieldLabel("box","count");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "count";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`count`";

	
	
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




	$tdatabox["count"] = $fdata;
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "box";
	$fdata["Label"] = GetFieldLabel("box","created_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
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




	$tdatabox["created_at"] = $fdata;
//	created_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "created_by";
	$fdata["GoodName"] = "created_by";
	$fdata["ownerTable"] = "box";
	$fdata["Label"] = GetFieldLabel("box","created_by");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
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




	$tdatabox["created_by"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "box";
	$fdata["Label"] = GetFieldLabel("box","updated_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
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




	$tdatabox["updated_at"] = $fdata;
//	updated_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "updated_by";
	$fdata["GoodName"] = "updated_by";
	$fdata["ownerTable"] = "box";
	$fdata["Label"] = GetFieldLabel("box","updated_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
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
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatabox["updated_by"] = $fdata;
//	box_name_jp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "box_name_jp";
	$fdata["GoodName"] = "box_name_jp";
	$fdata["ownerTable"] = "box";
	$fdata["Label"] = GetFieldLabel("box","box_name_jp");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "box_name_jp";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`box_name_jp`";

	
	
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




	$tdatabox["box_name_jp"] = $fdata;


$tables_data["box"]=&$tdatabox;
$field_labels["box"] = &$fieldLabelsbox;
$fieldToolTips["box"] = &$fieldToolTipsbox;
$placeHolders["box"] = &$placeHoldersbox;
$page_titles["box"] = &$pageTitlesbox;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["box"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["box"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_box()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`box_id` as 'link',  `box_id`,  `box_name`,  `zip`,  `zip_status`,  `zip_name`,  `rakuten_cabinet_name`,  `raku_image_name`,  `csv`,  `zip_create`,  `count`,  `created_at`,  `created_by`,  `updated_at`,  `updated_by`,  `box_name_jp`";
$proto0["m_strFrom"] = "FROM `box`";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY `box_id` DESC";
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
	"m_strName" => "box_id",
	"m_strTable" => "box",
	"m_srcTableName" => "box"
));

$proto6["m_sql"] = "`box_id`";
$proto6["m_srcTableName"] = "box";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "link";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "box_id",
	"m_strTable" => "box",
	"m_srcTableName" => "box"
));

$proto8["m_sql"] = "`box_id`";
$proto8["m_srcTableName"] = "box";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "box_name",
	"m_strTable" => "box",
	"m_srcTableName" => "box"
));

$proto10["m_sql"] = "`box_name`";
$proto10["m_srcTableName"] = "box";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "zip",
	"m_strTable" => "box",
	"m_srcTableName" => "box"
));

$proto12["m_sql"] = "`zip`";
$proto12["m_srcTableName"] = "box";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "zip_status",
	"m_strTable" => "box",
	"m_srcTableName" => "box"
));

$proto14["m_sql"] = "`zip_status`";
$proto14["m_srcTableName"] = "box";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "zip_name",
	"m_strTable" => "box",
	"m_srcTableName" => "box"
));

$proto16["m_sql"] = "`zip_name`";
$proto16["m_srcTableName"] = "box";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "rakuten_cabinet_name",
	"m_strTable" => "box",
	"m_srcTableName" => "box"
));

$proto18["m_sql"] = "`rakuten_cabinet_name`";
$proto18["m_srcTableName"] = "box";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "raku_image_name",
	"m_strTable" => "box",
	"m_srcTableName" => "box"
));

$proto20["m_sql"] = "`raku_image_name`";
$proto20["m_srcTableName"] = "box";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "csv",
	"m_strTable" => "box",
	"m_srcTableName" => "box"
));

$proto22["m_sql"] = "`csv`";
$proto22["m_srcTableName"] = "box";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "zip_create",
	"m_strTable" => "box",
	"m_srcTableName" => "box"
));

$proto24["m_sql"] = "`zip_create`";
$proto24["m_srcTableName"] = "box";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "count",
	"m_strTable" => "box",
	"m_srcTableName" => "box"
));

$proto26["m_sql"] = "`count`";
$proto26["m_srcTableName"] = "box";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "box",
	"m_srcTableName" => "box"
));

$proto28["m_sql"] = "`created_at`";
$proto28["m_srcTableName"] = "box";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "created_by",
	"m_strTable" => "box",
	"m_srcTableName" => "box"
));

$proto30["m_sql"] = "`created_by`";
$proto30["m_srcTableName"] = "box";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "box",
	"m_srcTableName" => "box"
));

$proto32["m_sql"] = "`updated_at`";
$proto32["m_srcTableName"] = "box";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by",
	"m_strTable" => "box",
	"m_srcTableName" => "box"
));

$proto34["m_sql"] = "`updated_by`";
$proto34["m_srcTableName"] = "box";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "box_name_jp",
	"m_strTable" => "box",
	"m_srcTableName" => "box"
));

$proto36["m_sql"] = "`box_name_jp`";
$proto36["m_srcTableName"] = "box";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto38=array();
$proto38["m_link"] = "SQLL_MAIN";
			$proto39=array();
$proto39["m_strName"] = "box";
$proto39["m_srcTableName"] = "box";
$proto39["m_columns"] = array();
$proto39["m_columns"][] = "box_id";
$proto39["m_columns"][] = "box_pass";
$proto39["m_columns"][] = "box_name";
$proto39["m_columns"][] = "box_name_jp";
$proto39["m_columns"][] = "created_at";
$proto39["m_columns"][] = "created_by";
$proto39["m_columns"][] = "zip";
$proto39["m_columns"][] = "zip_status";
$proto39["m_columns"][] = "zip_name";
$proto39["m_columns"][] = "box_csv_template_id";
$proto39["m_columns"][] = "updated_at";
$proto39["m_columns"][] = "rakuten_cabinet_name";
$proto39["m_columns"][] = "rakuup";
$proto39["m_columns"][] = "yup";
$proto39["m_columns"][] = "raku_image_name";
$proto39["m_columns"][] = "csv";
$proto39["m_columns"][] = "up";
$proto39["m_columns"][] = "box_id_new";
$proto39["m_columns"][] = "satuei_sha";
$proto39["m_columns"][] = "satuei_jikan";
$proto39["m_columns"][] = "kakou_sha";
$proto39["m_columns"][] = "kakou_jikan";
$proto39["m_columns"][] = "konpou_sha";
$proto39["m_columns"][] = "konpou_Jikan";
$proto39["m_columns"][] = "link1";
$proto39["m_columns"][] = "zip_create";
$proto39["m_columns"][] = "updated_by";
$proto39["m_columns"][] = "count";
$proto39["m_columns"][] = "zip_flag";
$proto39["m_columns"][] = "img_count";
$proto39["m_columns"][] = "finished_at";
$proto39["m_columns"][] = "is_pause";
$proto39["m_columns"][] = "pause_finished_at";
$obj = new SQLTable($proto39);

$proto38["m_table"] = $obj;
$proto38["m_sql"] = "`box`";
$proto38["m_alias"] = "";
$proto38["m_srcTableName"] = "box";
$proto40=array();
$proto40["m_sql"] = "";
$proto40["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto40["m_column"]=$obj;
$proto40["m_contained"] = array();
$proto40["m_strCase"] = "";
$proto40["m_havingmode"] = false;
$proto40["m_inBrackets"] = false;
$proto40["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto40);

$proto38["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto38);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto42=array();
						$obj = new SQLField(array(
	"m_strName" => "box_id",
	"m_strTable" => "box",
	"m_srcTableName" => "box"
));

$proto42["m_column"]=$obj;
$proto42["m_bAsc"] = 0;
$proto42["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto42);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="box";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_box = createSqlQuery_box();


	
		;

																

$tdatabox[".sqlquery"] = $queryData_box;

$tableEvents["box"] = new eventsBase;
$tdatabox[".hasEvents"] = false;

?>