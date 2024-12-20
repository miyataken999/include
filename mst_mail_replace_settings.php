<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamst_mail_replace = array();
	$tdatamst_mail_replace[".truncateText"] = true;
	$tdatamst_mail_replace[".NumberOfChars"] = 80;
	$tdatamst_mail_replace[".ShortName"] = "mst_mail_replace";
	$tdatamst_mail_replace[".OwnerID"] = "";
	$tdatamst_mail_replace[".OriginalTable"] = "mst_mail_replace";

//	field labels
$fieldLabelsmst_mail_replace = array();
$fieldToolTipsmst_mail_replace = array();
$pageTitlesmst_mail_replace = array();
$placeHoldersmst_mail_replace = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmst_mail_replace["Japanese"] = array();
	$fieldToolTipsmst_mail_replace["Japanese"] = array();
	$placeHoldersmst_mail_replace["Japanese"] = array();
	$pageTitlesmst_mail_replace["Japanese"] = array();
	$fieldLabelsmst_mail_replace["Japanese"]["id"] = "Id";
	$fieldToolTipsmst_mail_replace["Japanese"]["id"] = "";
	$placeHoldersmst_mail_replace["Japanese"]["id"] = "";
	$fieldLabelsmst_mail_replace["Japanese"]["before_txt"] = "置換対象";
	$fieldToolTipsmst_mail_replace["Japanese"]["before_txt"] = "";
	$placeHoldersmst_mail_replace["Japanese"]["before_txt"] = "";
	$fieldLabelsmst_mail_replace["Japanese"]["replace_data_table"] = "置換データテーブル";
	$fieldToolTipsmst_mail_replace["Japanese"]["replace_data_table"] = "";
	$placeHoldersmst_mail_replace["Japanese"]["replace_data_table"] = "";
	$fieldLabelsmst_mail_replace["Japanese"]["replace_data"] = "置換データ";
	$fieldToolTipsmst_mail_replace["Japanese"]["replace_data"] = "";
	$placeHoldersmst_mail_replace["Japanese"]["replace_data"] = "";
	$fieldLabelsmst_mail_replace["Japanese"]["create_by"] = "登録者";
	$fieldToolTipsmst_mail_replace["Japanese"]["create_by"] = "";
	$placeHoldersmst_mail_replace["Japanese"]["create_by"] = "";
	$fieldLabelsmst_mail_replace["Japanese"]["create_at"] = "登録日";
	$fieldToolTipsmst_mail_replace["Japanese"]["create_at"] = "";
	$placeHoldersmst_mail_replace["Japanese"]["create_at"] = "";
	$fieldLabelsmst_mail_replace["Japanese"]["update_by"] = "更新者";
	$fieldToolTipsmst_mail_replace["Japanese"]["update_by"] = "";
	$placeHoldersmst_mail_replace["Japanese"]["update_by"] = "";
	$fieldLabelsmst_mail_replace["Japanese"]["update_at"] = "更新日";
	$fieldToolTipsmst_mail_replace["Japanese"]["update_at"] = "";
	$placeHoldersmst_mail_replace["Japanese"]["update_at"] = "";
	if (count($fieldToolTipsmst_mail_replace["Japanese"]))
		$tdatamst_mail_replace[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmst_mail_replace[""] = array();
	$fieldToolTipsmst_mail_replace[""] = array();
	$placeHoldersmst_mail_replace[""] = array();
	$pageTitlesmst_mail_replace[""] = array();
	$fieldLabelsmst_mail_replace[""]["id"] = "Id";
	$fieldToolTipsmst_mail_replace[""]["id"] = "";
	$placeHoldersmst_mail_replace[""]["id"] = "";
	$fieldLabelsmst_mail_replace[""]["before_txt"] = "Before Txt";
	$fieldToolTipsmst_mail_replace[""]["before_txt"] = "";
	$placeHoldersmst_mail_replace[""]["before_txt"] = "";
	$fieldLabelsmst_mail_replace[""]["replace_data_table"] = "Replace Data Table";
	$fieldToolTipsmst_mail_replace[""]["replace_data_table"] = "";
	$placeHoldersmst_mail_replace[""]["replace_data_table"] = "";
	$fieldLabelsmst_mail_replace[""]["replace_data"] = "Replace Data";
	$fieldToolTipsmst_mail_replace[""]["replace_data"] = "";
	$placeHoldersmst_mail_replace[""]["replace_data"] = "";
	$fieldLabelsmst_mail_replace[""]["create_by"] = "Create By";
	$fieldToolTipsmst_mail_replace[""]["create_by"] = "";
	$placeHoldersmst_mail_replace[""]["create_by"] = "";
	$fieldLabelsmst_mail_replace[""]["create_at"] = "Create At";
	$fieldToolTipsmst_mail_replace[""]["create_at"] = "";
	$placeHoldersmst_mail_replace[""]["create_at"] = "";
	$fieldLabelsmst_mail_replace[""]["update_by"] = "Update By";
	$fieldToolTipsmst_mail_replace[""]["update_by"] = "";
	$placeHoldersmst_mail_replace[""]["update_by"] = "";
	$fieldLabelsmst_mail_replace[""]["update_at"] = "Update At";
	$fieldToolTipsmst_mail_replace[""]["update_at"] = "";
	$placeHoldersmst_mail_replace[""]["update_at"] = "";
	if (count($fieldToolTipsmst_mail_replace[""]))
		$tdatamst_mail_replace[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmst_mail_replace["English"] = array();
	$fieldToolTipsmst_mail_replace["English"] = array();
	$placeHoldersmst_mail_replace["English"] = array();
	$pageTitlesmst_mail_replace["English"] = array();
	$fieldLabelsmst_mail_replace["English"]["id"] = "Id";
	$fieldToolTipsmst_mail_replace["English"]["id"] = "";
	$placeHoldersmst_mail_replace["English"]["id"] = "";
	$fieldLabelsmst_mail_replace["English"]["before_txt"] = "Before Txt";
	$fieldToolTipsmst_mail_replace["English"]["before_txt"] = "";
	$placeHoldersmst_mail_replace["English"]["before_txt"] = "";
	$fieldLabelsmst_mail_replace["English"]["replace_data_table"] = "Replace Data Table";
	$fieldToolTipsmst_mail_replace["English"]["replace_data_table"] = "";
	$placeHoldersmst_mail_replace["English"]["replace_data_table"] = "";
	$fieldLabelsmst_mail_replace["English"]["replace_data"] = "Replace Data";
	$fieldToolTipsmst_mail_replace["English"]["replace_data"] = "";
	$placeHoldersmst_mail_replace["English"]["replace_data"] = "";
	$fieldLabelsmst_mail_replace["English"]["create_by"] = "Create By";
	$fieldToolTipsmst_mail_replace["English"]["create_by"] = "";
	$placeHoldersmst_mail_replace["English"]["create_by"] = "";
	$fieldLabelsmst_mail_replace["English"]["create_at"] = "Create At";
	$fieldToolTipsmst_mail_replace["English"]["create_at"] = "";
	$placeHoldersmst_mail_replace["English"]["create_at"] = "";
	$fieldLabelsmst_mail_replace["English"]["update_by"] = "Update By";
	$fieldToolTipsmst_mail_replace["English"]["update_by"] = "";
	$placeHoldersmst_mail_replace["English"]["update_by"] = "";
	$fieldLabelsmst_mail_replace["English"]["update_at"] = "Update At";
	$fieldToolTipsmst_mail_replace["English"]["update_at"] = "";
	$placeHoldersmst_mail_replace["English"]["update_at"] = "";
	if (count($fieldToolTipsmst_mail_replace["English"]))
		$tdatamst_mail_replace[".isUseToolTips"] = true;
}


	$tdatamst_mail_replace[".NCSearch"] = true;



$tdatamst_mail_replace[".shortTableName"] = "mst_mail_replace";
$tdatamst_mail_replace[".nSecOptions"] = 0;
$tdatamst_mail_replace[".recsPerRowPrint"] = 1;
$tdatamst_mail_replace[".mainTableOwnerID"] = "";
$tdatamst_mail_replace[".moveNext"] = 1;
$tdatamst_mail_replace[".entityType"] = 0;

$tdatamst_mail_replace[".strOriginalTableName"] = "mst_mail_replace";

	



$tdatamst_mail_replace[".showAddInPopup"] = false;

$tdatamst_mail_replace[".showEditInPopup"] = false;

$tdatamst_mail_replace[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamst_mail_replace[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamst_mail_replace[".fieldsForRegister"] = array();

$tdatamst_mail_replace[".listAjax"] = false;

	$tdatamst_mail_replace[".audit"] = true;

	$tdatamst_mail_replace[".locking"] = false;



$tdatamst_mail_replace[".list"] = true;

$tdatamst_mail_replace[".inlineEdit"] = true;


$tdatamst_mail_replace[".reorderRecordsByHeader"] = true;



$tdatamst_mail_replace[".inlineAdd"] = true;

$tdatamst_mail_replace[".import"] = true;

$tdatamst_mail_replace[".exportTo"] = true;


$tdatamst_mail_replace[".delete"] = true;

$tdatamst_mail_replace[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamst_mail_replace[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamst_mail_replace[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamst_mail_replace[".searchSaving"] = false;
//

$tdatamst_mail_replace[".showSearchPanel"] = true;
		$tdatamst_mail_replace[".flexibleSearch"] = true;

$tdatamst_mail_replace[".isUseAjaxSuggest"] = true;

$tdatamst_mail_replace[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatamst_mail_replace[".ajaxCodeSnippetAdded"] = false;

$tdatamst_mail_replace[".buttonsAdded"] = false;

$tdatamst_mail_replace[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamst_mail_replace[".isUseTimeForSearch"] = false;





$tdatamst_mail_replace[".allSearchFields"] = array();
$tdatamst_mail_replace[".filterFields"] = array();
$tdatamst_mail_replace[".requiredSearchFields"] = array();

$tdatamst_mail_replace[".allSearchFields"][] = "id";
	$tdatamst_mail_replace[".allSearchFields"][] = "before_txt";
	$tdatamst_mail_replace[".allSearchFields"][] = "replace_data_table";
	$tdatamst_mail_replace[".allSearchFields"][] = "replace_data";
	$tdatamst_mail_replace[".allSearchFields"][] = "create_by";
	$tdatamst_mail_replace[".allSearchFields"][] = "create_at";
	$tdatamst_mail_replace[".allSearchFields"][] = "update_by";
	$tdatamst_mail_replace[".allSearchFields"][] = "update_at";
	

$tdatamst_mail_replace[".googleLikeFields"] = array();
$tdatamst_mail_replace[".googleLikeFields"][] = "id";
$tdatamst_mail_replace[".googleLikeFields"][] = "before_txt";
$tdatamst_mail_replace[".googleLikeFields"][] = "replace_data_table";
$tdatamst_mail_replace[".googleLikeFields"][] = "replace_data";
$tdatamst_mail_replace[".googleLikeFields"][] = "create_by";
$tdatamst_mail_replace[".googleLikeFields"][] = "create_at";
$tdatamst_mail_replace[".googleLikeFields"][] = "update_by";
$tdatamst_mail_replace[".googleLikeFields"][] = "update_at";


$tdatamst_mail_replace[".advSearchFields"] = array();
$tdatamst_mail_replace[".advSearchFields"][] = "id";
$tdatamst_mail_replace[".advSearchFields"][] = "before_txt";
$tdatamst_mail_replace[".advSearchFields"][] = "replace_data_table";
$tdatamst_mail_replace[".advSearchFields"][] = "replace_data";
$tdatamst_mail_replace[".advSearchFields"][] = "create_by";
$tdatamst_mail_replace[".advSearchFields"][] = "create_at";
$tdatamst_mail_replace[".advSearchFields"][] = "update_by";
$tdatamst_mail_replace[".advSearchFields"][] = "update_at";

$tdatamst_mail_replace[".tableType"] = "list";

$tdatamst_mail_replace[".printerPageOrientation"] = 0;
$tdatamst_mail_replace[".nPrinterPageScale"] = 100;

$tdatamst_mail_replace[".nPrinterSplitRecords"] = 40;

$tdatamst_mail_replace[".nPrinterPDFSplitRecords"] = 40;



$tdatamst_mail_replace[".geocodingEnabled"] = false;





$tdatamst_mail_replace[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamst_mail_replace[".pageSize"] = 20;

$tdatamst_mail_replace[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamst_mail_replace[".strOrderBy"] = $tstrOrderBy;

$tdatamst_mail_replace[".orderindexes"] = array();

$tdatamst_mail_replace[".sqlHead"] = "SELECT `id`,  	`before_txt`,  	`replace_data_table`,  	`replace_data`,  	`create_by`,  	`create_at`,  	`update_by`,  	`update_at`";
$tdatamst_mail_replace[".sqlFrom"] = "FROM `mst_mail_replace`";
$tdatamst_mail_replace[".sqlWhereExpr"] = "";
$tdatamst_mail_replace[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamst_mail_replace[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamst_mail_replace[".arrGroupsPerPage"] = $arrGPP;

$tdatamst_mail_replace[".highlightSearchResults"] = true;

$tableKeysmst_mail_replace = array();
$tableKeysmst_mail_replace[] = "id";
$tdatamst_mail_replace[".Keys"] = $tableKeysmst_mail_replace;

$tdatamst_mail_replace[".listFields"] = array();
$tdatamst_mail_replace[".listFields"][] = "id";
$tdatamst_mail_replace[".listFields"][] = "before_txt";
$tdatamst_mail_replace[".listFields"][] = "replace_data_table";
$tdatamst_mail_replace[".listFields"][] = "replace_data";
$tdatamst_mail_replace[".listFields"][] = "create_by";
$tdatamst_mail_replace[".listFields"][] = "create_at";
$tdatamst_mail_replace[".listFields"][] = "update_by";
$tdatamst_mail_replace[".listFields"][] = "update_at";

$tdatamst_mail_replace[".hideMobileList"] = array();


$tdatamst_mail_replace[".viewFields"] = array();

$tdatamst_mail_replace[".addFields"] = array();

$tdatamst_mail_replace[".masterListFields"] = array();
$tdatamst_mail_replace[".masterListFields"][] = "id";
$tdatamst_mail_replace[".masterListFields"][] = "before_txt";
$tdatamst_mail_replace[".masterListFields"][] = "replace_data_table";
$tdatamst_mail_replace[".masterListFields"][] = "replace_data";
$tdatamst_mail_replace[".masterListFields"][] = "create_by";
$tdatamst_mail_replace[".masterListFields"][] = "create_at";
$tdatamst_mail_replace[".masterListFields"][] = "update_by";
$tdatamst_mail_replace[".masterListFields"][] = "update_at";

$tdatamst_mail_replace[".inlineAddFields"] = array();
$tdatamst_mail_replace[".inlineAddFields"][] = "before_txt";
$tdatamst_mail_replace[".inlineAddFields"][] = "replace_data_table";
$tdatamst_mail_replace[".inlineAddFields"][] = "replace_data";

$tdatamst_mail_replace[".editFields"] = array();

$tdatamst_mail_replace[".inlineEditFields"] = array();
$tdatamst_mail_replace[".inlineEditFields"][] = "before_txt";
$tdatamst_mail_replace[".inlineEditFields"][] = "replace_data_table";
$tdatamst_mail_replace[".inlineEditFields"][] = "replace_data";

$tdatamst_mail_replace[".updateSelectedFields"] = array();


$tdatamst_mail_replace[".exportFields"] = array();
$tdatamst_mail_replace[".exportFields"][] = "id";
$tdatamst_mail_replace[".exportFields"][] = "before_txt";
$tdatamst_mail_replace[".exportFields"][] = "replace_data_table";
$tdatamst_mail_replace[".exportFields"][] = "replace_data";
$tdatamst_mail_replace[".exportFields"][] = "create_by";
$tdatamst_mail_replace[".exportFields"][] = "create_at";
$tdatamst_mail_replace[".exportFields"][] = "update_by";
$tdatamst_mail_replace[".exportFields"][] = "update_at";

$tdatamst_mail_replace[".importFields"] = array();
$tdatamst_mail_replace[".importFields"][] = "id";
$tdatamst_mail_replace[".importFields"][] = "before_txt";
$tdatamst_mail_replace[".importFields"][] = "replace_data_table";
$tdatamst_mail_replace[".importFields"][] = "replace_data";

$tdatamst_mail_replace[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "mst_mail_replace";
	$fdata["Label"] = GetFieldLabel("mst_mail_replace","id");
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




	$tdatamst_mail_replace["id"] = $fdata;
//	before_txt
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "before_txt";
	$fdata["GoodName"] = "before_txt";
	$fdata["ownerTable"] = "mst_mail_replace";
	$fdata["Label"] = GetFieldLabel("mst_mail_replace","before_txt");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "before_txt";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`before_txt`";

	
	
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
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
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




	$tdatamst_mail_replace["before_txt"] = $fdata;
//	replace_data_table
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "replace_data_table";
	$fdata["GoodName"] = "replace_data_table";
	$fdata["ownerTable"] = "mst_mail_replace";
	$fdata["Label"] = GetFieldLabel("mst_mail_replace","replace_data_table");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "replace_data_table";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`replace_data_table`";

	
	
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
		$edata["LookupType"] = 0;
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Eoc";
	$edata["LookupValues"][] = "Eoc_takuhai";
	$edata["LookupValues"][] = "shouhin";
	$edata["LookupValues"][] = "users";

	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatamst_mail_replace["replace_data_table"] = $fdata;
//	replace_data
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "replace_data";
	$fdata["GoodName"] = "replace_data";
	$fdata["ownerTable"] = "mst_mail_replace";
	$fdata["Label"] = GetFieldLabel("mst_mail_replace","replace_data");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "replace_data";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`replace_data`";

	
	
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
	$edata["LookupTable"] = "vw_information_schema_for_mail";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "COLUMN_NAME";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "COLUMN_NAME";

	
	$edata["LookupOrderBy"] = "";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "replace_data_table", "lookup" => "TABLE_NAME" );

	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatamst_mail_replace["replace_data"] = $fdata;
//	create_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "create_by";
	$fdata["GoodName"] = "create_by";
	$fdata["ownerTable"] = "mst_mail_replace";
	$fdata["Label"] = GetFieldLabel("mst_mail_replace","create_by");
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




	$tdatamst_mail_replace["create_by"] = $fdata;
//	create_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "create_at";
	$fdata["GoodName"] = "create_at";
	$fdata["ownerTable"] = "mst_mail_replace";
	$fdata["Label"] = GetFieldLabel("mst_mail_replace","create_at");
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




	$tdatamst_mail_replace["create_at"] = $fdata;
//	update_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "update_by";
	$fdata["GoodName"] = "update_by";
	$fdata["ownerTable"] = "mst_mail_replace";
	$fdata["Label"] = GetFieldLabel("mst_mail_replace","update_by");
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




	$tdatamst_mail_replace["update_by"] = $fdata;
//	update_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "update_at";
	$fdata["GoodName"] = "update_at";
	$fdata["ownerTable"] = "mst_mail_replace";
	$fdata["Label"] = GetFieldLabel("mst_mail_replace","update_at");
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




	$tdatamst_mail_replace["update_at"] = $fdata;


$tables_data["mst_mail_replace"]=&$tdatamst_mail_replace;
$field_labels["mst_mail_replace"] = &$fieldLabelsmst_mail_replace;
$fieldToolTips["mst_mail_replace"] = &$fieldToolTipsmst_mail_replace;
$placeHolders["mst_mail_replace"] = &$placeHoldersmst_mail_replace;
$page_titles["mst_mail_replace"] = &$pageTitlesmst_mail_replace;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mst_mail_replace"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mst_mail_replace"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mst_mail_replace()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  	`before_txt`,  	`replace_data_table`,  	`replace_data`,  	`create_by`,  	`create_at`,  	`update_by`,  	`update_at`";
$proto0["m_strFrom"] = "FROM `mst_mail_replace`";
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
	"m_strTable" => "mst_mail_replace",
	"m_srcTableName" => "mst_mail_replace"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "mst_mail_replace";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "before_txt",
	"m_strTable" => "mst_mail_replace",
	"m_srcTableName" => "mst_mail_replace"
));

$proto8["m_sql"] = "`before_txt`";
$proto8["m_srcTableName"] = "mst_mail_replace";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "replace_data_table",
	"m_strTable" => "mst_mail_replace",
	"m_srcTableName" => "mst_mail_replace"
));

$proto10["m_sql"] = "`replace_data_table`";
$proto10["m_srcTableName"] = "mst_mail_replace";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "replace_data",
	"m_strTable" => "mst_mail_replace",
	"m_srcTableName" => "mst_mail_replace"
));

$proto12["m_sql"] = "`replace_data`";
$proto12["m_srcTableName"] = "mst_mail_replace";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "create_by",
	"m_strTable" => "mst_mail_replace",
	"m_srcTableName" => "mst_mail_replace"
));

$proto14["m_sql"] = "`create_by`";
$proto14["m_srcTableName"] = "mst_mail_replace";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "create_at",
	"m_strTable" => "mst_mail_replace",
	"m_srcTableName" => "mst_mail_replace"
));

$proto16["m_sql"] = "`create_at`";
$proto16["m_srcTableName"] = "mst_mail_replace";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "update_by",
	"m_strTable" => "mst_mail_replace",
	"m_srcTableName" => "mst_mail_replace"
));

$proto18["m_sql"] = "`update_by`";
$proto18["m_srcTableName"] = "mst_mail_replace";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "update_at",
	"m_strTable" => "mst_mail_replace",
	"m_srcTableName" => "mst_mail_replace"
));

$proto20["m_sql"] = "`update_at`";
$proto20["m_srcTableName"] = "mst_mail_replace";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "mst_mail_replace";
$proto23["m_srcTableName"] = "mst_mail_replace";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "id";
$proto23["m_columns"][] = "before_txt";
$proto23["m_columns"][] = "replace_data_table";
$proto23["m_columns"][] = "replace_data";
$proto23["m_columns"][] = "create_by";
$proto23["m_columns"][] = "create_at";
$proto23["m_columns"][] = "update_by";
$proto23["m_columns"][] = "update_at";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "`mst_mail_replace`";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "mst_mail_replace";
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
$proto0["m_srcTableName"]="mst_mail_replace";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mst_mail_replace = createSqlQuery_mst_mail_replace();


	
		;

								

$tdatamst_mail_replace[".sqlquery"] = $queryData_mst_mail_replace;

include_once(getabspath("include/mst_mail_replace_events.php"));
$tableEvents["mst_mail_replace"] = new eventclass_mst_mail_replace;
$tdatamst_mail_replace[".hasEvents"] = true;

?>