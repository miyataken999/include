<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamail_data_tbl = array();
	$tdatamail_data_tbl[".truncateText"] = true;
	$tdatamail_data_tbl[".NumberOfChars"] = 80;
	$tdatamail_data_tbl[".ShortName"] = "mail_data_tbl";
	$tdatamail_data_tbl[".OwnerID"] = "";
	$tdatamail_data_tbl[".OriginalTable"] = "mail_data_tbl";

//	field labels
$fieldLabelsmail_data_tbl = array();
$fieldToolTipsmail_data_tbl = array();
$pageTitlesmail_data_tbl = array();
$placeHoldersmail_data_tbl = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmail_data_tbl["Japanese"] = array();
	$fieldToolTipsmail_data_tbl["Japanese"] = array();
	$placeHoldersmail_data_tbl["Japanese"] = array();
	$pageTitlesmail_data_tbl["Japanese"] = array();
	$fieldLabelsmail_data_tbl["Japanese"]["id"] = "Id";
	$fieldToolTipsmail_data_tbl["Japanese"]["id"] = "";
	$placeHoldersmail_data_tbl["Japanese"]["id"] = "";
	$fieldLabelsmail_data_tbl["Japanese"]["title"] = "タイトル";
	$fieldToolTipsmail_data_tbl["Japanese"]["title"] = "";
	$placeHoldersmail_data_tbl["Japanese"]["title"] = "";
	$fieldLabelsmail_data_tbl["Japanese"]["from_addr"] = "Fromアドレス";
	$fieldToolTipsmail_data_tbl["Japanese"]["from_addr"] = "";
	$placeHoldersmail_data_tbl["Japanese"]["from_addr"] = "";
	$fieldLabelsmail_data_tbl["Japanese"]["subject_pc"] = "件名";
	$fieldToolTipsmail_data_tbl["Japanese"]["subject_pc"] = "";
	$placeHoldersmail_data_tbl["Japanese"]["subject_pc"] = "";
	$fieldLabelsmail_data_tbl["Japanese"]["str_header"] = "ヘッダー";
	$fieldToolTipsmail_data_tbl["Japanese"]["str_header"] = "";
	$placeHoldersmail_data_tbl["Japanese"]["str_header"] = "";
	$fieldLabelsmail_data_tbl["Japanese"]["str_pc"] = "本文１";
	$fieldToolTipsmail_data_tbl["Japanese"]["str_pc"] = "";
	$placeHoldersmail_data_tbl["Japanese"]["str_pc"] = "";
	$fieldLabelsmail_data_tbl["Japanese"]["str2_pc"] = "本文２";
	$fieldToolTipsmail_data_tbl["Japanese"]["str2_pc"] = "";
	$placeHoldersmail_data_tbl["Japanese"]["str2_pc"] = "";
	$fieldLabelsmail_data_tbl["Japanese"]["str3_pc"] = "署名";
	$fieldToolTipsmail_data_tbl["Japanese"]["str3_pc"] = "";
	$placeHoldersmail_data_tbl["Japanese"]["str3_pc"] = "";
	$fieldLabelsmail_data_tbl["Japanese"]["junban"] = "順番";
	$fieldToolTipsmail_data_tbl["Japanese"]["junban"] = "";
	$placeHoldersmail_data_tbl["Japanese"]["junban"] = "";
	$fieldLabelsmail_data_tbl["Japanese"]["category_id"] = "大カテ";
	$fieldToolTipsmail_data_tbl["Japanese"]["category_id"] = "";
	$placeHoldersmail_data_tbl["Japanese"]["category_id"] = "";
	$fieldLabelsmail_data_tbl["Japanese"]["sub_category_id"] = "中カテ";
	$fieldToolTipsmail_data_tbl["Japanese"]["sub_category_id"] = "";
	$placeHoldersmail_data_tbl["Japanese"]["sub_category_id"] = "";
	if (count($fieldToolTipsmail_data_tbl["Japanese"]))
		$tdatamail_data_tbl[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmail_data_tbl[""] = array();
	$fieldToolTipsmail_data_tbl[""] = array();
	$placeHoldersmail_data_tbl[""] = array();
	$pageTitlesmail_data_tbl[""] = array();
	$fieldLabelsmail_data_tbl[""]["id"] = "Id";
	$fieldToolTipsmail_data_tbl[""]["id"] = "";
	$placeHoldersmail_data_tbl[""]["id"] = "";
	$fieldLabelsmail_data_tbl[""]["title"] = "Title";
	$fieldToolTipsmail_data_tbl[""]["title"] = "";
	$placeHoldersmail_data_tbl[""]["title"] = "";
	$fieldLabelsmail_data_tbl[""]["from_addr"] = "From Addr";
	$fieldToolTipsmail_data_tbl[""]["from_addr"] = "";
	$placeHoldersmail_data_tbl[""]["from_addr"] = "";
	$fieldLabelsmail_data_tbl[""]["subject_pc"] = "Subject Pc";
	$fieldToolTipsmail_data_tbl[""]["subject_pc"] = "";
	$placeHoldersmail_data_tbl[""]["subject_pc"] = "";
	$fieldLabelsmail_data_tbl[""]["str_header"] = "Str Header";
	$fieldToolTipsmail_data_tbl[""]["str_header"] = "";
	$placeHoldersmail_data_tbl[""]["str_header"] = "";
	$fieldLabelsmail_data_tbl[""]["str_pc"] = "Str Pc";
	$fieldToolTipsmail_data_tbl[""]["str_pc"] = "";
	$placeHoldersmail_data_tbl[""]["str_pc"] = "";
	$fieldLabelsmail_data_tbl[""]["str2_pc"] = "Str2 Pc";
	$fieldToolTipsmail_data_tbl[""]["str2_pc"] = "";
	$placeHoldersmail_data_tbl[""]["str2_pc"] = "";
	$fieldLabelsmail_data_tbl[""]["str3_pc"] = "Str3 Pc";
	$fieldToolTipsmail_data_tbl[""]["str3_pc"] = "";
	$placeHoldersmail_data_tbl[""]["str3_pc"] = "";
	$fieldLabelsmail_data_tbl[""]["junban"] = "Junban";
	$fieldToolTipsmail_data_tbl[""]["junban"] = "";
	$placeHoldersmail_data_tbl[""]["junban"] = "";
	$fieldLabelsmail_data_tbl[""]["category_id"] = "Category Id";
	$fieldToolTipsmail_data_tbl[""]["category_id"] = "";
	$placeHoldersmail_data_tbl[""]["category_id"] = "";
	$fieldLabelsmail_data_tbl[""]["sub_category_id"] = "Sub Category Id";
	$fieldToolTipsmail_data_tbl[""]["sub_category_id"] = "";
	$placeHoldersmail_data_tbl[""]["sub_category_id"] = "";
	if (count($fieldToolTipsmail_data_tbl[""]))
		$tdatamail_data_tbl[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmail_data_tbl["English"] = array();
	$fieldToolTipsmail_data_tbl["English"] = array();
	$placeHoldersmail_data_tbl["English"] = array();
	$pageTitlesmail_data_tbl["English"] = array();
	$fieldLabelsmail_data_tbl["English"]["id"] = "Id";
	$fieldToolTipsmail_data_tbl["English"]["id"] = "";
	$placeHoldersmail_data_tbl["English"]["id"] = "";
	$fieldLabelsmail_data_tbl["English"]["title"] = "Title";
	$fieldToolTipsmail_data_tbl["English"]["title"] = "";
	$placeHoldersmail_data_tbl["English"]["title"] = "";
	$fieldLabelsmail_data_tbl["English"]["from_addr"] = "From Addr";
	$fieldToolTipsmail_data_tbl["English"]["from_addr"] = "";
	$placeHoldersmail_data_tbl["English"]["from_addr"] = "";
	$fieldLabelsmail_data_tbl["English"]["subject_pc"] = "Subject Pc";
	$fieldToolTipsmail_data_tbl["English"]["subject_pc"] = "";
	$placeHoldersmail_data_tbl["English"]["subject_pc"] = "";
	$fieldLabelsmail_data_tbl["English"]["str_header"] = "Str Header";
	$fieldToolTipsmail_data_tbl["English"]["str_header"] = "";
	$placeHoldersmail_data_tbl["English"]["str_header"] = "";
	$fieldLabelsmail_data_tbl["English"]["str_pc"] = "Str Pc";
	$fieldToolTipsmail_data_tbl["English"]["str_pc"] = "";
	$placeHoldersmail_data_tbl["English"]["str_pc"] = "";
	$fieldLabelsmail_data_tbl["English"]["str2_pc"] = "Str2 Pc";
	$fieldToolTipsmail_data_tbl["English"]["str2_pc"] = "";
	$placeHoldersmail_data_tbl["English"]["str2_pc"] = "";
	$fieldLabelsmail_data_tbl["English"]["str3_pc"] = "Str3 Pc";
	$fieldToolTipsmail_data_tbl["English"]["str3_pc"] = "";
	$placeHoldersmail_data_tbl["English"]["str3_pc"] = "";
	$fieldLabelsmail_data_tbl["English"]["junban"] = "Junban";
	$fieldToolTipsmail_data_tbl["English"]["junban"] = "";
	$placeHoldersmail_data_tbl["English"]["junban"] = "";
	$fieldLabelsmail_data_tbl["English"]["category_id"] = "Category Id";
	$fieldToolTipsmail_data_tbl["English"]["category_id"] = "";
	$placeHoldersmail_data_tbl["English"]["category_id"] = "";
	$fieldLabelsmail_data_tbl["English"]["sub_category_id"] = "Sub Category Id";
	$fieldToolTipsmail_data_tbl["English"]["sub_category_id"] = "";
	$placeHoldersmail_data_tbl["English"]["sub_category_id"] = "";
	if (count($fieldToolTipsmail_data_tbl["English"]))
		$tdatamail_data_tbl[".isUseToolTips"] = true;
}


	$tdatamail_data_tbl[".NCSearch"] = true;



$tdatamail_data_tbl[".shortTableName"] = "mail_data_tbl";
$tdatamail_data_tbl[".nSecOptions"] = 0;
$tdatamail_data_tbl[".recsPerRowPrint"] = 1;
$tdatamail_data_tbl[".mainTableOwnerID"] = "";
$tdatamail_data_tbl[".moveNext"] = 1;
$tdatamail_data_tbl[".entityType"] = 0;

$tdatamail_data_tbl[".strOriginalTableName"] = "mail_data_tbl";

	



$tdatamail_data_tbl[".showAddInPopup"] = false;

$tdatamail_data_tbl[".showEditInPopup"] = false;

$tdatamail_data_tbl[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamail_data_tbl[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamail_data_tbl[".fieldsForRegister"] = array();

$tdatamail_data_tbl[".listAjax"] = false;

	$tdatamail_data_tbl[".audit"] = true;

	$tdatamail_data_tbl[".locking"] = false;



$tdatamail_data_tbl[".list"] = true;

$tdatamail_data_tbl[".inlineEdit"] = true;


$tdatamail_data_tbl[".reorderRecordsByHeader"] = true;



$tdatamail_data_tbl[".inlineAdd"] = true;

$tdatamail_data_tbl[".import"] = true;

$tdatamail_data_tbl[".exportTo"] = true;


$tdatamail_data_tbl[".delete"] = true;

$tdatamail_data_tbl[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamail_data_tbl[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamail_data_tbl[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamail_data_tbl[".searchSaving"] = false;
//

$tdatamail_data_tbl[".showSearchPanel"] = true;
		$tdatamail_data_tbl[".flexibleSearch"] = true;

$tdatamail_data_tbl[".isUseAjaxSuggest"] = true;

$tdatamail_data_tbl[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatamail_data_tbl[".ajaxCodeSnippetAdded"] = false;

$tdatamail_data_tbl[".buttonsAdded"] = false;

$tdatamail_data_tbl[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamail_data_tbl[".isUseTimeForSearch"] = false;





$tdatamail_data_tbl[".allSearchFields"] = array();
$tdatamail_data_tbl[".filterFields"] = array();
$tdatamail_data_tbl[".requiredSearchFields"] = array();

$tdatamail_data_tbl[".allSearchFields"][] = "id";
	$tdatamail_data_tbl[".allSearchFields"][] = "category_id";
	$tdatamail_data_tbl[".allSearchFields"][] = "sub_category_id";
	$tdatamail_data_tbl[".allSearchFields"][] = "title";
	$tdatamail_data_tbl[".allSearchFields"][] = "from_addr";
	$tdatamail_data_tbl[".allSearchFields"][] = "subject_pc";
	$tdatamail_data_tbl[".allSearchFields"][] = "str_header";
	$tdatamail_data_tbl[".allSearchFields"][] = "str_pc";
	$tdatamail_data_tbl[".allSearchFields"][] = "str2_pc";
	$tdatamail_data_tbl[".allSearchFields"][] = "str3_pc";
	$tdatamail_data_tbl[".allSearchFields"][] = "junban";
	

$tdatamail_data_tbl[".googleLikeFields"] = array();
$tdatamail_data_tbl[".googleLikeFields"][] = "id";
$tdatamail_data_tbl[".googleLikeFields"][] = "title";
$tdatamail_data_tbl[".googleLikeFields"][] = "from_addr";
$tdatamail_data_tbl[".googleLikeFields"][] = "subject_pc";
$tdatamail_data_tbl[".googleLikeFields"][] = "str_header";
$tdatamail_data_tbl[".googleLikeFields"][] = "str_pc";
$tdatamail_data_tbl[".googleLikeFields"][] = "str2_pc";
$tdatamail_data_tbl[".googleLikeFields"][] = "str3_pc";
$tdatamail_data_tbl[".googleLikeFields"][] = "junban";
$tdatamail_data_tbl[".googleLikeFields"][] = "category_id";
$tdatamail_data_tbl[".googleLikeFields"][] = "sub_category_id";


$tdatamail_data_tbl[".advSearchFields"] = array();
$tdatamail_data_tbl[".advSearchFields"][] = "id";
$tdatamail_data_tbl[".advSearchFields"][] = "category_id";
$tdatamail_data_tbl[".advSearchFields"][] = "sub_category_id";
$tdatamail_data_tbl[".advSearchFields"][] = "title";
$tdatamail_data_tbl[".advSearchFields"][] = "from_addr";
$tdatamail_data_tbl[".advSearchFields"][] = "subject_pc";
$tdatamail_data_tbl[".advSearchFields"][] = "str_header";
$tdatamail_data_tbl[".advSearchFields"][] = "str_pc";
$tdatamail_data_tbl[".advSearchFields"][] = "str2_pc";
$tdatamail_data_tbl[".advSearchFields"][] = "str3_pc";
$tdatamail_data_tbl[".advSearchFields"][] = "junban";

$tdatamail_data_tbl[".tableType"] = "list";

$tdatamail_data_tbl[".printerPageOrientation"] = 0;
$tdatamail_data_tbl[".nPrinterPageScale"] = 100;

$tdatamail_data_tbl[".nPrinterSplitRecords"] = 40;

$tdatamail_data_tbl[".nPrinterPDFSplitRecords"] = 40;



$tdatamail_data_tbl[".geocodingEnabled"] = false;





$tdatamail_data_tbl[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamail_data_tbl[".pageSize"] = 20;

$tdatamail_data_tbl[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamail_data_tbl[".strOrderBy"] = $tstrOrderBy;

$tdatamail_data_tbl[".orderindexes"] = array();

$tdatamail_data_tbl[".sqlHead"] = "SELECT `id`,  `title`,  `from_addr`,  `subject_pc`,  `str_header`,  `str_pc`,  `str2_pc`,  `str3_pc`,  `junban`,  `category_id`,  `sub_category_id`";
$tdatamail_data_tbl[".sqlFrom"] = "FROM `mail_data_tbl`";
$tdatamail_data_tbl[".sqlWhereExpr"] = "";
$tdatamail_data_tbl[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamail_data_tbl[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamail_data_tbl[".arrGroupsPerPage"] = $arrGPP;

$tdatamail_data_tbl[".highlightSearchResults"] = true;

$tableKeysmail_data_tbl = array();
$tableKeysmail_data_tbl[] = "id";
$tdatamail_data_tbl[".Keys"] = $tableKeysmail_data_tbl;

$tdatamail_data_tbl[".listFields"] = array();
$tdatamail_data_tbl[".listFields"][] = "id";
$tdatamail_data_tbl[".listFields"][] = "category_id";
$tdatamail_data_tbl[".listFields"][] = "sub_category_id";
$tdatamail_data_tbl[".listFields"][] = "title";
$tdatamail_data_tbl[".listFields"][] = "from_addr";
$tdatamail_data_tbl[".listFields"][] = "subject_pc";
$tdatamail_data_tbl[".listFields"][] = "str_header";
$tdatamail_data_tbl[".listFields"][] = "str_pc";
$tdatamail_data_tbl[".listFields"][] = "str2_pc";
$tdatamail_data_tbl[".listFields"][] = "str3_pc";
$tdatamail_data_tbl[".listFields"][] = "junban";

$tdatamail_data_tbl[".hideMobileList"] = array();


$tdatamail_data_tbl[".viewFields"] = array();

$tdatamail_data_tbl[".addFields"] = array();

$tdatamail_data_tbl[".masterListFields"] = array();
$tdatamail_data_tbl[".masterListFields"][] = "id";
$tdatamail_data_tbl[".masterListFields"][] = "category_id";
$tdatamail_data_tbl[".masterListFields"][] = "sub_category_id";
$tdatamail_data_tbl[".masterListFields"][] = "title";
$tdatamail_data_tbl[".masterListFields"][] = "from_addr";
$tdatamail_data_tbl[".masterListFields"][] = "subject_pc";
$tdatamail_data_tbl[".masterListFields"][] = "str_header";
$tdatamail_data_tbl[".masterListFields"][] = "str_pc";
$tdatamail_data_tbl[".masterListFields"][] = "str2_pc";
$tdatamail_data_tbl[".masterListFields"][] = "str3_pc";
$tdatamail_data_tbl[".masterListFields"][] = "junban";

$tdatamail_data_tbl[".inlineAddFields"] = array();
$tdatamail_data_tbl[".inlineAddFields"][] = "category_id";
$tdatamail_data_tbl[".inlineAddFields"][] = "sub_category_id";
$tdatamail_data_tbl[".inlineAddFields"][] = "title";
$tdatamail_data_tbl[".inlineAddFields"][] = "from_addr";
$tdatamail_data_tbl[".inlineAddFields"][] = "subject_pc";
$tdatamail_data_tbl[".inlineAddFields"][] = "str_header";
$tdatamail_data_tbl[".inlineAddFields"][] = "str_pc";
$tdatamail_data_tbl[".inlineAddFields"][] = "str2_pc";
$tdatamail_data_tbl[".inlineAddFields"][] = "str3_pc";
$tdatamail_data_tbl[".inlineAddFields"][] = "junban";

$tdatamail_data_tbl[".editFields"] = array();

$tdatamail_data_tbl[".inlineEditFields"] = array();
$tdatamail_data_tbl[".inlineEditFields"][] = "category_id";
$tdatamail_data_tbl[".inlineEditFields"][] = "sub_category_id";
$tdatamail_data_tbl[".inlineEditFields"][] = "title";
$tdatamail_data_tbl[".inlineEditFields"][] = "from_addr";
$tdatamail_data_tbl[".inlineEditFields"][] = "subject_pc";
$tdatamail_data_tbl[".inlineEditFields"][] = "str_header";
$tdatamail_data_tbl[".inlineEditFields"][] = "str_pc";
$tdatamail_data_tbl[".inlineEditFields"][] = "str2_pc";
$tdatamail_data_tbl[".inlineEditFields"][] = "str3_pc";
$tdatamail_data_tbl[".inlineEditFields"][] = "junban";

$tdatamail_data_tbl[".updateSelectedFields"] = array();


$tdatamail_data_tbl[".exportFields"] = array();
$tdatamail_data_tbl[".exportFields"][] = "id";
$tdatamail_data_tbl[".exportFields"][] = "category_id";
$tdatamail_data_tbl[".exportFields"][] = "sub_category_id";
$tdatamail_data_tbl[".exportFields"][] = "title";
$tdatamail_data_tbl[".exportFields"][] = "from_addr";
$tdatamail_data_tbl[".exportFields"][] = "subject_pc";
$tdatamail_data_tbl[".exportFields"][] = "str_header";
$tdatamail_data_tbl[".exportFields"][] = "str_pc";
$tdatamail_data_tbl[".exportFields"][] = "str2_pc";
$tdatamail_data_tbl[".exportFields"][] = "str3_pc";
$tdatamail_data_tbl[".exportFields"][] = "junban";

$tdatamail_data_tbl[".importFields"] = array();
$tdatamail_data_tbl[".importFields"][] = "id";
$tdatamail_data_tbl[".importFields"][] = "title";
$tdatamail_data_tbl[".importFields"][] = "from_addr";
$tdatamail_data_tbl[".importFields"][] = "subject_pc";
$tdatamail_data_tbl[".importFields"][] = "str_header";
$tdatamail_data_tbl[".importFields"][] = "str_pc";
$tdatamail_data_tbl[".importFields"][] = "str2_pc";
$tdatamail_data_tbl[".importFields"][] = "str3_pc";
$tdatamail_data_tbl[".importFields"][] = "junban";
$tdatamail_data_tbl[".importFields"][] = "category_id";
$tdatamail_data_tbl[".importFields"][] = "sub_category_id";

$tdatamail_data_tbl[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "mail_data_tbl";
	$fdata["Label"] = GetFieldLabel("mail_data_tbl","id");
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




	$tdatamail_data_tbl["id"] = $fdata;
//	title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "title";
	$fdata["GoodName"] = "title";
	$fdata["ownerTable"] = "mail_data_tbl";
	$fdata["Label"] = GetFieldLabel("mail_data_tbl","title");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "title";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`title`";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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




	$tdatamail_data_tbl["title"] = $fdata;
//	from_addr
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "from_addr";
	$fdata["GoodName"] = "from_addr";
	$fdata["ownerTable"] = "mail_data_tbl";
	$fdata["Label"] = GetFieldLabel("mail_data_tbl","from_addr");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "from_addr";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`from_addr`";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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




	$tdatamail_data_tbl["from_addr"] = $fdata;
//	subject_pc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "subject_pc";
	$fdata["GoodName"] = "subject_pc";
	$fdata["ownerTable"] = "mail_data_tbl";
	$fdata["Label"] = GetFieldLabel("mail_data_tbl","subject_pc");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "subject_pc";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`subject_pc`";

	
	
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
			$edata["EditParams"].= " maxlength=200";

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




	$tdatamail_data_tbl["subject_pc"] = $fdata;
//	str_header
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "str_header";
	$fdata["GoodName"] = "str_header";
	$fdata["ownerTable"] = "mail_data_tbl";
	$fdata["Label"] = GetFieldLabel("mail_data_tbl","str_header");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "str_header";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`str_header`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
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




	$tdatamail_data_tbl["str_header"] = $fdata;
//	str_pc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "str_pc";
	$fdata["GoodName"] = "str_pc";
	$fdata["ownerTable"] = "mail_data_tbl";
	$fdata["Label"] = GetFieldLabel("mail_data_tbl","str_pc");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "str_pc";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`str_pc`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
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




	$tdatamail_data_tbl["str_pc"] = $fdata;
//	str2_pc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "str2_pc";
	$fdata["GoodName"] = "str2_pc";
	$fdata["ownerTable"] = "mail_data_tbl";
	$fdata["Label"] = GetFieldLabel("mail_data_tbl","str2_pc");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "str2_pc";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`str2_pc`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
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




	$tdatamail_data_tbl["str2_pc"] = $fdata;
//	str3_pc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "str3_pc";
	$fdata["GoodName"] = "str3_pc";
	$fdata["ownerTable"] = "mail_data_tbl";
	$fdata["Label"] = GetFieldLabel("mail_data_tbl","str3_pc");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "str3_pc";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`str3_pc`";

	
	
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
	$edata["LookupTable"] = "shomei_tbl";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "title";

	
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




	$tdatamail_data_tbl["str3_pc"] = $fdata;
//	junban
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "junban";
	$fdata["GoodName"] = "junban";
	$fdata["ownerTable"] = "mail_data_tbl";
	$fdata["Label"] = GetFieldLabel("mail_data_tbl","junban");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "junban";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`junban`";

	
	
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




	$tdatamail_data_tbl["junban"] = $fdata;
//	category_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "category_id";
	$fdata["GoodName"] = "category_id";
	$fdata["ownerTable"] = "mail_data_tbl";
	$fdata["Label"] = GetFieldLabel("mail_data_tbl","category_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "category_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`category_id`";

	
	
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
	$edata["LookupTable"] = "mail_data_tbl_category";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "name";

	
	$edata["LookupOrderBy"] = "sort";

	
	
	
	
				//dependent dropdowns
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "sub_category_id";

	
	
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




	$tdatamail_data_tbl["category_id"] = $fdata;
//	sub_category_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "sub_category_id";
	$fdata["GoodName"] = "sub_category_id";
	$fdata["ownerTable"] = "mail_data_tbl";
	$fdata["Label"] = GetFieldLabel("mail_data_tbl","sub_category_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "sub_category_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`sub_category_id`";

	
	
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
	$edata["LookupTable"] = "mail_data_tbl_sub_category";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "name";

	
	$edata["LookupOrderBy"] = "sort";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "category_id", "lookup" => "category_id" );

	
	

	
	
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




	$tdatamail_data_tbl["sub_category_id"] = $fdata;


$tables_data["mail_data_tbl"]=&$tdatamail_data_tbl;
$field_labels["mail_data_tbl"] = &$fieldLabelsmail_data_tbl;
$fieldToolTips["mail_data_tbl"] = &$fieldToolTipsmail_data_tbl;
$placeHolders["mail_data_tbl"] = &$placeHoldersmail_data_tbl;
$page_titles["mail_data_tbl"] = &$pageTitlesmail_data_tbl;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mail_data_tbl"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mail_data_tbl"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mail_data_tbl()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  `title`,  `from_addr`,  `subject_pc`,  `str_header`,  `str_pc`,  `str2_pc`,  `str3_pc`,  `junban`,  `category_id`,  `sub_category_id`";
$proto0["m_strFrom"] = "FROM `mail_data_tbl`";
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
	"m_strTable" => "mail_data_tbl",
	"m_srcTableName" => "mail_data_tbl"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "mail_data_tbl";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "title",
	"m_strTable" => "mail_data_tbl",
	"m_srcTableName" => "mail_data_tbl"
));

$proto8["m_sql"] = "`title`";
$proto8["m_srcTableName"] = "mail_data_tbl";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "from_addr",
	"m_strTable" => "mail_data_tbl",
	"m_srcTableName" => "mail_data_tbl"
));

$proto10["m_sql"] = "`from_addr`";
$proto10["m_srcTableName"] = "mail_data_tbl";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "subject_pc",
	"m_strTable" => "mail_data_tbl",
	"m_srcTableName" => "mail_data_tbl"
));

$proto12["m_sql"] = "`subject_pc`";
$proto12["m_srcTableName"] = "mail_data_tbl";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "str_header",
	"m_strTable" => "mail_data_tbl",
	"m_srcTableName" => "mail_data_tbl"
));

$proto14["m_sql"] = "`str_header`";
$proto14["m_srcTableName"] = "mail_data_tbl";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "str_pc",
	"m_strTable" => "mail_data_tbl",
	"m_srcTableName" => "mail_data_tbl"
));

$proto16["m_sql"] = "`str_pc`";
$proto16["m_srcTableName"] = "mail_data_tbl";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "str2_pc",
	"m_strTable" => "mail_data_tbl",
	"m_srcTableName" => "mail_data_tbl"
));

$proto18["m_sql"] = "`str2_pc`";
$proto18["m_srcTableName"] = "mail_data_tbl";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "str3_pc",
	"m_strTable" => "mail_data_tbl",
	"m_srcTableName" => "mail_data_tbl"
));

$proto20["m_sql"] = "`str3_pc`";
$proto20["m_srcTableName"] = "mail_data_tbl";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "junban",
	"m_strTable" => "mail_data_tbl",
	"m_srcTableName" => "mail_data_tbl"
));

$proto22["m_sql"] = "`junban`";
$proto22["m_srcTableName"] = "mail_data_tbl";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "category_id",
	"m_strTable" => "mail_data_tbl",
	"m_srcTableName" => "mail_data_tbl"
));

$proto24["m_sql"] = "`category_id`";
$proto24["m_srcTableName"] = "mail_data_tbl";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "sub_category_id",
	"m_strTable" => "mail_data_tbl",
	"m_srcTableName" => "mail_data_tbl"
));

$proto26["m_sql"] = "`sub_category_id`";
$proto26["m_srcTableName"] = "mail_data_tbl";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto28=array();
$proto28["m_link"] = "SQLL_MAIN";
			$proto29=array();
$proto29["m_strName"] = "mail_data_tbl";
$proto29["m_srcTableName"] = "mail_data_tbl";
$proto29["m_columns"] = array();
$proto29["m_columns"][] = "id";
$proto29["m_columns"][] = "title";
$proto29["m_columns"][] = "from_addr";
$proto29["m_columns"][] = "cc_addr";
$proto29["m_columns"][] = "bcc_addr";
$proto29["m_columns"][] = "subject_pc";
$proto29["m_columns"][] = "str_header";
$proto29["m_columns"][] = "user_pc_flag";
$proto29["m_columns"][] = "str_pc";
$proto29["m_columns"][] = "item_pc_flag";
$proto29["m_columns"][] = "tesuuryou_pc_flag";
$proto29["m_columns"][] = "send_pc_flag";
$proto29["m_columns"][] = "kessai_pc_flag";
$proto29["m_columns"][] = "no_pc_flag";
$proto29["m_columns"][] = "form_pc_flag";
$proto29["m_columns"][] = "page_pc_flag";
$proto29["m_columns"][] = "str2_pc";
$proto29["m_columns"][] = "str3_pc";
$proto29["m_columns"][] = "subject_mob";
$proto29["m_columns"][] = "user_mob_flag";
$proto29["m_columns"][] = "str_mob";
$proto29["m_columns"][] = "mylink_mob_flag";
$proto29["m_columns"][] = "str2_mob";
$proto29["m_columns"][] = "str3_mob";
$proto29["m_columns"][] = "junban";
$proto29["m_columns"][] = "category_id";
$proto29["m_columns"][] = "sub_category_id";
$obj = new SQLTable($proto29);

$proto28["m_table"] = $obj;
$proto28["m_sql"] = "`mail_data_tbl`";
$proto28["m_alias"] = "";
$proto28["m_srcTableName"] = "mail_data_tbl";
$proto30=array();
$proto30["m_sql"] = "";
$proto30["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto30["m_column"]=$obj;
$proto30["m_contained"] = array();
$proto30["m_strCase"] = "";
$proto30["m_havingmode"] = false;
$proto30["m_inBrackets"] = false;
$proto30["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto30);

$proto28["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto28);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="mail_data_tbl";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mail_data_tbl = createSqlQuery_mail_data_tbl();


	
		;

											

$tdatamail_data_tbl[".sqlquery"] = $queryData_mail_data_tbl;

include_once(getabspath("include/mail_data_tbl_events.php"));
$tableEvents["mail_data_tbl"] = new eventclass_mail_data_tbl;
$tdatamail_data_tbl[".hasEvents"] = true;

?>