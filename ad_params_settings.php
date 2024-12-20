<?php
require_once(getabspath("classes/cipherer.php"));




$tdataad_params = array();
	$tdataad_params[".truncateText"] = true;
	$tdataad_params[".NumberOfChars"] = 80;
	$tdataad_params[".ShortName"] = "ad_params";
	$tdataad_params[".OwnerID"] = "";
	$tdataad_params[".OriginalTable"] = "ad_params";

//	field labels
$fieldLabelsad_params = array();
$fieldToolTipsad_params = array();
$pageTitlesad_params = array();
$placeHoldersad_params = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsad_params["Japanese"] = array();
	$fieldToolTipsad_params["Japanese"] = array();
	$placeHoldersad_params["Japanese"] = array();
	$pageTitlesad_params["Japanese"] = array();
	$fieldLabelsad_params["Japanese"]["id"] = "Id";
	$fieldToolTipsad_params["Japanese"]["id"] = "";
	$placeHoldersad_params["Japanese"]["id"] = "";
	$fieldLabelsad_params["Japanese"]["Eoc_takuhai_id"] = "宅配取引Id";
	$fieldToolTipsad_params["Japanese"]["Eoc_takuhai_id"] = "";
	$placeHoldersad_params["Japanese"]["Eoc_takuhai_id"] = "";
	$fieldLabelsad_params["Japanese"]["ad_param"] = "広告パラメータ";
	$fieldToolTipsad_params["Japanese"]["ad_param"] = "";
	$placeHoldersad_params["Japanese"]["ad_param"] = "";
	$fieldLabelsad_params["Japanese"]["ad_time"] = "広告日時";
	$fieldToolTipsad_params["Japanese"]["ad_time"] = "";
	$placeHoldersad_params["Japanese"]["ad_time"] = "";
	$fieldLabelsad_params["Japanese"]["created_at"] = "集計作成日";
	$fieldToolTipsad_params["Japanese"]["created_at"] = "";
	$placeHoldersad_params["Japanese"]["created_at"] = "";
	$fieldLabelsad_params["Japanese"]["updated_at"] = "集計更新日";
	$fieldToolTipsad_params["Japanese"]["updated_at"] = "";
	$placeHoldersad_params["Japanese"]["updated_at"] = "";
	$fieldLabelsad_params["Japanese"]["satei_price"] = "査定総額";
	$fieldToolTipsad_params["Japanese"]["satei_price"] = "";
	$placeHoldersad_params["Japanese"]["satei_price"] = "";
	$fieldLabelsad_params["Japanese"]["nyuukin_price"] = "入金総額";
	$fieldToolTipsad_params["Japanese"]["nyuukin_price"] = "";
	$placeHoldersad_params["Japanese"]["nyuukin_price"] = "";
	$fieldLabelsad_params["Japanese"]["seiyaku_price"] = "成約総額";
	$fieldToolTipsad_params["Japanese"]["seiyaku_price"] = "";
	$placeHoldersad_params["Japanese"]["seiyaku_price"] = "";
	$fieldLabelsad_params["Japanese"]["cost_price"] = "コスト総額";
	$fieldToolTipsad_params["Japanese"]["cost_price"] = "";
	$placeHoldersad_params["Japanese"]["cost_price"] = "";
	$fieldLabelsad_params["Japanese"]["cv_time"] = "申込日時";
	$fieldToolTipsad_params["Japanese"]["cv_time"] = "";
	$placeHoldersad_params["Japanese"]["cv_time"] = "";
	$fieldLabelsad_params["Japanese"]["last_seiyaku_at"] = "最終成約日";
	$fieldToolTipsad_params["Japanese"]["last_seiyaku_at"] = "";
	$placeHoldersad_params["Japanese"]["last_seiyaku_at"] = "";
	if (count($fieldToolTipsad_params["Japanese"]))
		$tdataad_params[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsad_params[""] = array();
	$fieldToolTipsad_params[""] = array();
	$placeHoldersad_params[""] = array();
	$pageTitlesad_params[""] = array();
	$fieldLabelsad_params[""]["id"] = "Id";
	$fieldToolTipsad_params[""]["id"] = "";
	$placeHoldersad_params[""]["id"] = "";
	$fieldLabelsad_params[""]["Eoc_takuhai_id"] = "Eoc Takuhai Id";
	$fieldToolTipsad_params[""]["Eoc_takuhai_id"] = "";
	$placeHoldersad_params[""]["Eoc_takuhai_id"] = "";
	$fieldLabelsad_params[""]["ad_param"] = "Ad Param";
	$fieldToolTipsad_params[""]["ad_param"] = "";
	$placeHoldersad_params[""]["ad_param"] = "";
	$fieldLabelsad_params[""]["ad_time"] = "Ad Time";
	$fieldToolTipsad_params[""]["ad_time"] = "";
	$placeHoldersad_params[""]["ad_time"] = "";
	$fieldLabelsad_params[""]["created_at"] = "Created At";
	$fieldToolTipsad_params[""]["created_at"] = "";
	$placeHoldersad_params[""]["created_at"] = "";
	$fieldLabelsad_params[""]["updated_at"] = "Updated At";
	$fieldToolTipsad_params[""]["updated_at"] = "";
	$placeHoldersad_params[""]["updated_at"] = "";
	$fieldLabelsad_params[""]["satei_price"] = "Satei Price";
	$fieldToolTipsad_params[""]["satei_price"] = "";
	$placeHoldersad_params[""]["satei_price"] = "";
	$fieldLabelsad_params[""]["nyuukin_price"] = "Nyuukin Price";
	$fieldToolTipsad_params[""]["nyuukin_price"] = "";
	$placeHoldersad_params[""]["nyuukin_price"] = "";
	$fieldLabelsad_params[""]["seiyaku_price"] = "Seiyaku Price";
	$fieldToolTipsad_params[""]["seiyaku_price"] = "";
	$placeHoldersad_params[""]["seiyaku_price"] = "";
	$fieldLabelsad_params[""]["cost_price"] = "Cost Price";
	$fieldToolTipsad_params[""]["cost_price"] = "";
	$placeHoldersad_params[""]["cost_price"] = "";
	$fieldLabelsad_params[""]["cv_time"] = "Cv Time";
	$fieldToolTipsad_params[""]["cv_time"] = "";
	$placeHoldersad_params[""]["cv_time"] = "";
	$fieldLabelsad_params[""]["last_seiyaku_at"] = "Last Seiyaku At";
	$fieldToolTipsad_params[""]["last_seiyaku_at"] = "";
	$placeHoldersad_params[""]["last_seiyaku_at"] = "";
	if (count($fieldToolTipsad_params[""]))
		$tdataad_params[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsad_params["English"] = array();
	$fieldToolTipsad_params["English"] = array();
	$placeHoldersad_params["English"] = array();
	$pageTitlesad_params["English"] = array();
	$fieldLabelsad_params["English"]["id"] = "Id";
	$fieldToolTipsad_params["English"]["id"] = "";
	$placeHoldersad_params["English"]["id"] = "";
	$fieldLabelsad_params["English"]["Eoc_takuhai_id"] = "Eoc Takuhai Id";
	$fieldToolTipsad_params["English"]["Eoc_takuhai_id"] = "";
	$placeHoldersad_params["English"]["Eoc_takuhai_id"] = "";
	$fieldLabelsad_params["English"]["ad_param"] = "Ad Param";
	$fieldToolTipsad_params["English"]["ad_param"] = "";
	$placeHoldersad_params["English"]["ad_param"] = "";
	$fieldLabelsad_params["English"]["ad_time"] = "Ad Time";
	$fieldToolTipsad_params["English"]["ad_time"] = "";
	$placeHoldersad_params["English"]["ad_time"] = "";
	$fieldLabelsad_params["English"]["created_at"] = "Created At";
	$fieldToolTipsad_params["English"]["created_at"] = "";
	$placeHoldersad_params["English"]["created_at"] = "";
	$fieldLabelsad_params["English"]["updated_at"] = "Updated At";
	$fieldToolTipsad_params["English"]["updated_at"] = "";
	$placeHoldersad_params["English"]["updated_at"] = "";
	$fieldLabelsad_params["English"]["satei_price"] = "Satei Price";
	$fieldToolTipsad_params["English"]["satei_price"] = "";
	$placeHoldersad_params["English"]["satei_price"] = "";
	$fieldLabelsad_params["English"]["nyuukin_price"] = "Nyuukin Price";
	$fieldToolTipsad_params["English"]["nyuukin_price"] = "";
	$placeHoldersad_params["English"]["nyuukin_price"] = "";
	$fieldLabelsad_params["English"]["seiyaku_price"] = "Seiyaku Price";
	$fieldToolTipsad_params["English"]["seiyaku_price"] = "";
	$placeHoldersad_params["English"]["seiyaku_price"] = "";
	$fieldLabelsad_params["English"]["cost_price"] = "Cost Price";
	$fieldToolTipsad_params["English"]["cost_price"] = "";
	$placeHoldersad_params["English"]["cost_price"] = "";
	$fieldLabelsad_params["English"]["cv_time"] = "Cv Time";
	$fieldToolTipsad_params["English"]["cv_time"] = "";
	$placeHoldersad_params["English"]["cv_time"] = "";
	$fieldLabelsad_params["English"]["last_seiyaku_at"] = "Last Seiyaku At";
	$fieldToolTipsad_params["English"]["last_seiyaku_at"] = "";
	$placeHoldersad_params["English"]["last_seiyaku_at"] = "";
	if (count($fieldToolTipsad_params["English"]))
		$tdataad_params[".isUseToolTips"] = true;
}


	$tdataad_params[".NCSearch"] = true;



$tdataad_params[".shortTableName"] = "ad_params";
$tdataad_params[".nSecOptions"] = 0;
$tdataad_params[".recsPerRowPrint"] = 1;
$tdataad_params[".mainTableOwnerID"] = "";
$tdataad_params[".moveNext"] = 1;
$tdataad_params[".entityType"] = 0;

$tdataad_params[".strOriginalTableName"] = "ad_params";

	



$tdataad_params[".showAddInPopup"] = false;

$tdataad_params[".showEditInPopup"] = false;

$tdataad_params[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataad_params[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataad_params[".fieldsForRegister"] = array();

$tdataad_params[".listAjax"] = false;

	$tdataad_params[".audit"] = false;

	$tdataad_params[".locking"] = false;



$tdataad_params[".list"] = true;



$tdataad_params[".reorderRecordsByHeader"] = true;





$tdataad_params[".exportTo"] = true;



$tdataad_params[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataad_params[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataad_params[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataad_params[".searchSaving"] = false;
//

$tdataad_params[".showSearchPanel"] = true;
		$tdataad_params[".flexibleSearch"] = true;

$tdataad_params[".isUseAjaxSuggest"] = true;

$tdataad_params[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdataad_params[".ajaxCodeSnippetAdded"] = false;

$tdataad_params[".buttonsAdded"] = false;

$tdataad_params[".addPageEvents"] = false;

// use timepicker for search panel
$tdataad_params[".isUseTimeForSearch"] = false;





$tdataad_params[".allSearchFields"] = array();
$tdataad_params[".filterFields"] = array();
$tdataad_params[".requiredSearchFields"] = array();

$tdataad_params[".allSearchFields"][] = "id";
	$tdataad_params[".allSearchFields"][] = "Eoc_takuhai_id";
	$tdataad_params[".allSearchFields"][] = "ad_param";
	$tdataad_params[".allSearchFields"][] = "ad_time";
	$tdataad_params[".allSearchFields"][] = "cv_time";
	$tdataad_params[".allSearchFields"][] = "last_seiyaku_at";
	$tdataad_params[".allSearchFields"][] = "satei_price";
	$tdataad_params[".allSearchFields"][] = "nyuukin_price";
	$tdataad_params[".allSearchFields"][] = "seiyaku_price";
	$tdataad_params[".allSearchFields"][] = "cost_price";
	$tdataad_params[".allSearchFields"][] = "created_at";
	$tdataad_params[".allSearchFields"][] = "updated_at";
	

$tdataad_params[".googleLikeFields"] = array();
$tdataad_params[".googleLikeFields"][] = "id";
$tdataad_params[".googleLikeFields"][] = "Eoc_takuhai_id";
$tdataad_params[".googleLikeFields"][] = "ad_param";
$tdataad_params[".googleLikeFields"][] = "ad_time";
$tdataad_params[".googleLikeFields"][] = "created_at";
$tdataad_params[".googleLikeFields"][] = "updated_at";
$tdataad_params[".googleLikeFields"][] = "satei_price";
$tdataad_params[".googleLikeFields"][] = "nyuukin_price";
$tdataad_params[".googleLikeFields"][] = "seiyaku_price";
$tdataad_params[".googleLikeFields"][] = "cost_price";
$tdataad_params[".googleLikeFields"][] = "cv_time";
$tdataad_params[".googleLikeFields"][] = "last_seiyaku_at";


$tdataad_params[".advSearchFields"] = array();
$tdataad_params[".advSearchFields"][] = "id";
$tdataad_params[".advSearchFields"][] = "Eoc_takuhai_id";
$tdataad_params[".advSearchFields"][] = "ad_param";
$tdataad_params[".advSearchFields"][] = "ad_time";
$tdataad_params[".advSearchFields"][] = "cv_time";
$tdataad_params[".advSearchFields"][] = "last_seiyaku_at";
$tdataad_params[".advSearchFields"][] = "satei_price";
$tdataad_params[".advSearchFields"][] = "nyuukin_price";
$tdataad_params[".advSearchFields"][] = "seiyaku_price";
$tdataad_params[".advSearchFields"][] = "cost_price";
$tdataad_params[".advSearchFields"][] = "created_at";
$tdataad_params[".advSearchFields"][] = "updated_at";

$tdataad_params[".tableType"] = "list";

$tdataad_params[".printerPageOrientation"] = 0;
$tdataad_params[".nPrinterPageScale"] = 100;

$tdataad_params[".nPrinterSplitRecords"] = 40;

$tdataad_params[".nPrinterPDFSplitRecords"] = 40;



$tdataad_params[".geocodingEnabled"] = false;





$tdataad_params[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataad_params[".pageSize"] = 20;

$tdataad_params[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `id` DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataad_params[".strOrderBy"] = $tstrOrderBy;

$tdataad_params[".orderindexes"] = array();
$tdataad_params[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "`id`");

$tdataad_params[".sqlHead"] = "SELECT `id`,  `Eoc_takuhai_id`,  `ad_param`,  `ad_time`,  `created_at`,  `updated_at`,  `satei_price`,  `nyuukin_price`,  `seiyaku_price`,  `cost_price`,  `cv_time`,  `last_seiyaku_at`";
$tdataad_params[".sqlFrom"] = "FROM `ad_params`";
$tdataad_params[".sqlWhereExpr"] = "";
$tdataad_params[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataad_params[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataad_params[".arrGroupsPerPage"] = $arrGPP;

$tdataad_params[".highlightSearchResults"] = true;

$tableKeysad_params = array();
$tableKeysad_params[] = "id";
$tdataad_params[".Keys"] = $tableKeysad_params;

$tdataad_params[".listFields"] = array();
$tdataad_params[".listFields"][] = "id";
$tdataad_params[".listFields"][] = "Eoc_takuhai_id";
$tdataad_params[".listFields"][] = "ad_param";
$tdataad_params[".listFields"][] = "ad_time";
$tdataad_params[".listFields"][] = "cv_time";
$tdataad_params[".listFields"][] = "last_seiyaku_at";
$tdataad_params[".listFields"][] = "satei_price";
$tdataad_params[".listFields"][] = "nyuukin_price";
$tdataad_params[".listFields"][] = "seiyaku_price";
$tdataad_params[".listFields"][] = "cost_price";
$tdataad_params[".listFields"][] = "created_at";
$tdataad_params[".listFields"][] = "updated_at";

$tdataad_params[".hideMobileList"] = array();


$tdataad_params[".viewFields"] = array();

$tdataad_params[".addFields"] = array();

$tdataad_params[".masterListFields"] = array();
$tdataad_params[".masterListFields"][] = "id";
$tdataad_params[".masterListFields"][] = "Eoc_takuhai_id";
$tdataad_params[".masterListFields"][] = "ad_param";
$tdataad_params[".masterListFields"][] = "ad_time";
$tdataad_params[".masterListFields"][] = "cv_time";
$tdataad_params[".masterListFields"][] = "last_seiyaku_at";
$tdataad_params[".masterListFields"][] = "satei_price";
$tdataad_params[".masterListFields"][] = "nyuukin_price";
$tdataad_params[".masterListFields"][] = "seiyaku_price";
$tdataad_params[".masterListFields"][] = "cost_price";
$tdataad_params[".masterListFields"][] = "created_at";
$tdataad_params[".masterListFields"][] = "updated_at";

$tdataad_params[".inlineAddFields"] = array();

$tdataad_params[".editFields"] = array();

$tdataad_params[".inlineEditFields"] = array();

$tdataad_params[".updateSelectedFields"] = array();


$tdataad_params[".exportFields"] = array();
$tdataad_params[".exportFields"][] = "id";
$tdataad_params[".exportFields"][] = "Eoc_takuhai_id";
$tdataad_params[".exportFields"][] = "ad_param";
$tdataad_params[".exportFields"][] = "ad_time";
$tdataad_params[".exportFields"][] = "cv_time";
$tdataad_params[".exportFields"][] = "last_seiyaku_at";
$tdataad_params[".exportFields"][] = "satei_price";
$tdataad_params[".exportFields"][] = "nyuukin_price";
$tdataad_params[".exportFields"][] = "seiyaku_price";
$tdataad_params[".exportFields"][] = "cost_price";
$tdataad_params[".exportFields"][] = "created_at";
$tdataad_params[".exportFields"][] = "updated_at";

$tdataad_params[".importFields"] = array();

$tdataad_params[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "ad_params";
	$fdata["Label"] = GetFieldLabel("ad_params","id");
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




	$tdataad_params["id"] = $fdata;
//	Eoc_takuhai_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Eoc_takuhai_id";
	$fdata["GoodName"] = "Eoc_takuhai_id";
	$fdata["ownerTable"] = "ad_params";
	$fdata["Label"] = GetFieldLabel("ad_params","Eoc_takuhai_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Eoc_takuhai_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_takuhai_id`";

	
	
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




	$tdataad_params["Eoc_takuhai_id"] = $fdata;
//	ad_param
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ad_param";
	$fdata["GoodName"] = "ad_param";
	$fdata["ownerTable"] = "ad_params";
	$fdata["Label"] = GetFieldLabel("ad_params","ad_param");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ad_param";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`ad_param`";

	
	
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




	$tdataad_params["ad_param"] = $fdata;
//	ad_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "ad_time";
	$fdata["GoodName"] = "ad_time";
	$fdata["ownerTable"] = "ad_params";
	$fdata["Label"] = GetFieldLabel("ad_params","ad_time");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ad_time";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`ad_time`";

	
	
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




	$tdataad_params["ad_time"] = $fdata;
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "ad_params";
	$fdata["Label"] = GetFieldLabel("ad_params","created_at");
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




	$tdataad_params["created_at"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "ad_params";
	$fdata["Label"] = GetFieldLabel("ad_params","updated_at");
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




	$tdataad_params["updated_at"] = $fdata;
//	satei_price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "satei_price";
	$fdata["GoodName"] = "satei_price";
	$fdata["ownerTable"] = "ad_params";
	$fdata["Label"] = GetFieldLabel("ad_params","satei_price");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "satei_price";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`satei_price`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Currency");

	
	
	
	
	
	
	
	
	
	
	
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




	$tdataad_params["satei_price"] = $fdata;
//	nyuukin_price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "nyuukin_price";
	$fdata["GoodName"] = "nyuukin_price";
	$fdata["ownerTable"] = "ad_params";
	$fdata["Label"] = GetFieldLabel("ad_params","nyuukin_price");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "nyuukin_price";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`nyuukin_price`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Currency");

	
	
	
	
	
	
	
	
	
	
	
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




	$tdataad_params["nyuukin_price"] = $fdata;
//	seiyaku_price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "seiyaku_price";
	$fdata["GoodName"] = "seiyaku_price";
	$fdata["ownerTable"] = "ad_params";
	$fdata["Label"] = GetFieldLabel("ad_params","seiyaku_price");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "seiyaku_price";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`seiyaku_price`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Currency");

	
	
	
	
	
	
	
	
	
	
	
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




	$tdataad_params["seiyaku_price"] = $fdata;
//	cost_price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "cost_price";
	$fdata["GoodName"] = "cost_price";
	$fdata["ownerTable"] = "ad_params";
	$fdata["Label"] = GetFieldLabel("ad_params","cost_price");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "cost_price";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`cost_price`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Currency");

	
	
	
	
	
	
	
	
	
	
	
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




	$tdataad_params["cost_price"] = $fdata;
//	cv_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "cv_time";
	$fdata["GoodName"] = "cv_time";
	$fdata["ownerTable"] = "ad_params";
	$fdata["Label"] = GetFieldLabel("ad_params","cv_time");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "cv_time";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`cv_time`";

	
	
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




	$tdataad_params["cv_time"] = $fdata;
//	last_seiyaku_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "last_seiyaku_at";
	$fdata["GoodName"] = "last_seiyaku_at";
	$fdata["ownerTable"] = "ad_params";
	$fdata["Label"] = GetFieldLabel("ad_params","last_seiyaku_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "last_seiyaku_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`last_seiyaku_at`";

	
	
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




	$tdataad_params["last_seiyaku_at"] = $fdata;


$tables_data["ad_params"]=&$tdataad_params;
$field_labels["ad_params"] = &$fieldLabelsad_params;
$fieldToolTips["ad_params"] = &$fieldToolTipsad_params;
$placeHolders["ad_params"] = &$placeHoldersad_params;
$page_titles["ad_params"] = &$pageTitlesad_params;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["ad_params"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["ad_params"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_ad_params()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  `Eoc_takuhai_id`,  `ad_param`,  `ad_time`,  `created_at`,  `updated_at`,  `satei_price`,  `nyuukin_price`,  `seiyaku_price`,  `cost_price`,  `cv_time`,  `last_seiyaku_at`";
$proto0["m_strFrom"] = "FROM `ad_params`";
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
	"m_strTable" => "ad_params",
	"m_srcTableName" => "ad_params"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "ad_params";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Eoc_takuhai_id",
	"m_strTable" => "ad_params",
	"m_srcTableName" => "ad_params"
));

$proto8["m_sql"] = "`Eoc_takuhai_id`";
$proto8["m_srcTableName"] = "ad_params";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "ad_param",
	"m_strTable" => "ad_params",
	"m_srcTableName" => "ad_params"
));

$proto10["m_sql"] = "`ad_param`";
$proto10["m_srcTableName"] = "ad_params";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "ad_time",
	"m_strTable" => "ad_params",
	"m_srcTableName" => "ad_params"
));

$proto12["m_sql"] = "`ad_time`";
$proto12["m_srcTableName"] = "ad_params";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "ad_params",
	"m_srcTableName" => "ad_params"
));

$proto14["m_sql"] = "`created_at`";
$proto14["m_srcTableName"] = "ad_params";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "ad_params",
	"m_srcTableName" => "ad_params"
));

$proto16["m_sql"] = "`updated_at`";
$proto16["m_srcTableName"] = "ad_params";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "satei_price",
	"m_strTable" => "ad_params",
	"m_srcTableName" => "ad_params"
));

$proto18["m_sql"] = "`satei_price`";
$proto18["m_srcTableName"] = "ad_params";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "nyuukin_price",
	"m_strTable" => "ad_params",
	"m_srcTableName" => "ad_params"
));

$proto20["m_sql"] = "`nyuukin_price`";
$proto20["m_srcTableName"] = "ad_params";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "seiyaku_price",
	"m_strTable" => "ad_params",
	"m_srcTableName" => "ad_params"
));

$proto22["m_sql"] = "`seiyaku_price`";
$proto22["m_srcTableName"] = "ad_params";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "cost_price",
	"m_strTable" => "ad_params",
	"m_srcTableName" => "ad_params"
));

$proto24["m_sql"] = "`cost_price`";
$proto24["m_srcTableName"] = "ad_params";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "cv_time",
	"m_strTable" => "ad_params",
	"m_srcTableName" => "ad_params"
));

$proto26["m_sql"] = "`cv_time`";
$proto26["m_srcTableName"] = "ad_params";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "last_seiyaku_at",
	"m_strTable" => "ad_params",
	"m_srcTableName" => "ad_params"
));

$proto28["m_sql"] = "`last_seiyaku_at`";
$proto28["m_srcTableName"] = "ad_params";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "ad_params";
$proto31["m_srcTableName"] = "ad_params";
$proto31["m_columns"] = array();
$proto31["m_columns"][] = "id";
$proto31["m_columns"][] = "Eoc_takuhai_id";
$proto31["m_columns"][] = "ad_param";
$proto31["m_columns"][] = "ad_time";
$proto31["m_columns"][] = "created_at";
$proto31["m_columns"][] = "updated_at";
$proto31["m_columns"][] = "satei_price";
$proto31["m_columns"][] = "nyuukin_price";
$proto31["m_columns"][] = "seiyaku_price";
$proto31["m_columns"][] = "cost_price";
$proto31["m_columns"][] = "cv_time";
$proto31["m_columns"][] = "last_seiyaku_at";
$obj = new SQLTable($proto31);

$proto30["m_table"] = $obj;
$proto30["m_sql"] = "`ad_params`";
$proto30["m_alias"] = "";
$proto30["m_srcTableName"] = "ad_params";
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
												$proto34=array();
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "ad_params",
	"m_srcTableName" => "ad_params"
));

$proto34["m_column"]=$obj;
$proto34["m_bAsc"] = 0;
$proto34["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto34);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="ad_params";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_ad_params = createSqlQuery_ad_params();


	
		;

												

$tdataad_params[".sqlquery"] = $queryData_ad_params;

$tableEvents["ad_params"] = new eventsBase;
$tdataad_params[".hasEvents"] = false;

?>