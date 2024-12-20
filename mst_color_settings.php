<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamst_color = array();
	$tdatamst_color[".truncateText"] = true;
	$tdatamst_color[".NumberOfChars"] = 80;
	$tdatamst_color[".ShortName"] = "mst_color";
	$tdatamst_color[".OwnerID"] = "";
	$tdatamst_color[".OriginalTable"] = "mst_color";

//	field labels
$fieldLabelsmst_color = array();
$fieldToolTipsmst_color = array();
$pageTitlesmst_color = array();
$placeHoldersmst_color = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmst_color["Japanese"] = array();
	$fieldToolTipsmst_color["Japanese"] = array();
	$placeHoldersmst_color["Japanese"] = array();
	$pageTitlesmst_color["Japanese"] = array();
	$fieldLabelsmst_color["Japanese"]["id"] = "Id";
	$fieldToolTipsmst_color["Japanese"]["id"] = "";
	$placeHoldersmst_color["Japanese"]["id"] = "";
	$fieldLabelsmst_color["Japanese"]["data"] = "Data";
	$fieldToolTipsmst_color["Japanese"]["data"] = "";
	$placeHoldersmst_color["Japanese"]["data"] = "";
	$fieldLabelsmst_color["Japanese"]["sort"] = "Sort";
	$fieldToolTipsmst_color["Japanese"]["sort"] = "";
	$placeHoldersmst_color["Japanese"]["sort"] = "";
	$fieldLabelsmst_color["Japanese"]["update_at"] = "Update At";
	$fieldToolTipsmst_color["Japanese"]["update_at"] = "";
	$placeHoldersmst_color["Japanese"]["update_at"] = "";
	$fieldLabelsmst_color["Japanese"]["update_by"] = "Update By";
	$fieldToolTipsmst_color["Japanese"]["update_by"] = "";
	$placeHoldersmst_color["Japanese"]["update_by"] = "";
	$fieldLabelsmst_color["Japanese"]["create_at"] = "Create At";
	$fieldToolTipsmst_color["Japanese"]["create_at"] = "";
	$placeHoldersmst_color["Japanese"]["create_at"] = "";
	$fieldLabelsmst_color["Japanese"]["create_by"] = "Create By";
	$fieldToolTipsmst_color["Japanese"]["create_by"] = "";
	$placeHoldersmst_color["Japanese"]["create_by"] = "";
	$fieldLabelsmst_color["Japanese"]["tag_id"] = "Tag Id";
	$fieldToolTipsmst_color["Japanese"]["tag_id"] = "";
	$placeHoldersmst_color["Japanese"]["tag_id"] = "";
	$fieldLabelsmst_color["Japanese"]["english_name"] = "English Name";
	$fieldToolTipsmst_color["Japanese"]["english_name"] = "";
	$placeHoldersmst_color["Japanese"]["english_name"] = "";
	if (count($fieldToolTipsmst_color["Japanese"]))
		$tdatamst_color[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmst_color[""] = array();
	$fieldToolTipsmst_color[""] = array();
	$placeHoldersmst_color[""] = array();
	$pageTitlesmst_color[""] = array();
	$fieldLabelsmst_color[""]["id"] = "Id";
	$fieldToolTipsmst_color[""]["id"] = "";
	$placeHoldersmst_color[""]["id"] = "";
	$fieldLabelsmst_color[""]["data"] = "Data";
	$fieldToolTipsmst_color[""]["data"] = "";
	$placeHoldersmst_color[""]["data"] = "";
	$fieldLabelsmst_color[""]["sort"] = "Sort";
	$fieldToolTipsmst_color[""]["sort"] = "";
	$placeHoldersmst_color[""]["sort"] = "";
	$fieldLabelsmst_color[""]["update_at"] = "Update At";
	$fieldToolTipsmst_color[""]["update_at"] = "";
	$placeHoldersmst_color[""]["update_at"] = "";
	$fieldLabelsmst_color[""]["update_by"] = "Update By";
	$fieldToolTipsmst_color[""]["update_by"] = "";
	$placeHoldersmst_color[""]["update_by"] = "";
	$fieldLabelsmst_color[""]["create_at"] = "Create At";
	$fieldToolTipsmst_color[""]["create_at"] = "";
	$placeHoldersmst_color[""]["create_at"] = "";
	$fieldLabelsmst_color[""]["create_by"] = "Create By";
	$fieldToolTipsmst_color[""]["create_by"] = "";
	$placeHoldersmst_color[""]["create_by"] = "";
	$fieldLabelsmst_color[""]["tag_id"] = "Tag Id";
	$fieldToolTipsmst_color[""]["tag_id"] = "";
	$placeHoldersmst_color[""]["tag_id"] = "";
	$fieldLabelsmst_color[""]["english_name"] = "English Name";
	$fieldToolTipsmst_color[""]["english_name"] = "";
	$placeHoldersmst_color[""]["english_name"] = "";
	if (count($fieldToolTipsmst_color[""]))
		$tdatamst_color[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmst_color["English"] = array();
	$fieldToolTipsmst_color["English"] = array();
	$placeHoldersmst_color["English"] = array();
	$pageTitlesmst_color["English"] = array();
	$fieldLabelsmst_color["English"]["id"] = "Id";
	$fieldToolTipsmst_color["English"]["id"] = "";
	$placeHoldersmst_color["English"]["id"] = "";
	$fieldLabelsmst_color["English"]["data"] = "Data";
	$fieldToolTipsmst_color["English"]["data"] = "";
	$placeHoldersmst_color["English"]["data"] = "";
	$fieldLabelsmst_color["English"]["sort"] = "Sort";
	$fieldToolTipsmst_color["English"]["sort"] = "";
	$placeHoldersmst_color["English"]["sort"] = "";
	$fieldLabelsmst_color["English"]["update_at"] = "Update At";
	$fieldToolTipsmst_color["English"]["update_at"] = "";
	$placeHoldersmst_color["English"]["update_at"] = "";
	$fieldLabelsmst_color["English"]["update_by"] = "Update By";
	$fieldToolTipsmst_color["English"]["update_by"] = "";
	$placeHoldersmst_color["English"]["update_by"] = "";
	$fieldLabelsmst_color["English"]["create_at"] = "Create At";
	$fieldToolTipsmst_color["English"]["create_at"] = "";
	$placeHoldersmst_color["English"]["create_at"] = "";
	$fieldLabelsmst_color["English"]["create_by"] = "Create By";
	$fieldToolTipsmst_color["English"]["create_by"] = "";
	$placeHoldersmst_color["English"]["create_by"] = "";
	$fieldLabelsmst_color["English"]["tag_id"] = "Tag Id";
	$fieldToolTipsmst_color["English"]["tag_id"] = "";
	$placeHoldersmst_color["English"]["tag_id"] = "";
	$fieldLabelsmst_color["English"]["english_name"] = "English Name";
	$fieldToolTipsmst_color["English"]["english_name"] = "";
	$placeHoldersmst_color["English"]["english_name"] = "";
	if (count($fieldToolTipsmst_color["English"]))
		$tdatamst_color[".isUseToolTips"] = true;
}


	$tdatamst_color[".NCSearch"] = true;



$tdatamst_color[".shortTableName"] = "mst_color";
$tdatamst_color[".nSecOptions"] = 0;
$tdatamst_color[".recsPerRowPrint"] = 1;
$tdatamst_color[".mainTableOwnerID"] = "";
$tdatamst_color[".moveNext"] = 1;
$tdatamst_color[".entityType"] = 0;

$tdatamst_color[".strOriginalTableName"] = "mst_color";

	



$tdatamst_color[".showAddInPopup"] = false;

$tdatamst_color[".showEditInPopup"] = false;

$tdatamst_color[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamst_color[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamst_color[".fieldsForRegister"] = array();

$tdatamst_color[".listAjax"] = false;

	$tdatamst_color[".audit"] = true;

	$tdatamst_color[".locking"] = false;






$tdatamst_color[".reorderRecordsByHeader"] = true;








$tdatamst_color[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamst_color[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamst_color[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamst_color[".searchSaving"] = false;
//

$tdatamst_color[".showSearchPanel"] = true;
		$tdatamst_color[".flexibleSearch"] = true;

$tdatamst_color[".isUseAjaxSuggest"] = true;

$tdatamst_color[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatamst_color[".ajaxCodeSnippetAdded"] = false;

$tdatamst_color[".buttonsAdded"] = false;

$tdatamst_color[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamst_color[".isUseTimeForSearch"] = false;





$tdatamst_color[".allSearchFields"] = array();
$tdatamst_color[".filterFields"] = array();
$tdatamst_color[".requiredSearchFields"] = array();



$tdatamst_color[".googleLikeFields"] = array();
$tdatamst_color[".googleLikeFields"][] = "id";
$tdatamst_color[".googleLikeFields"][] = "data";
$tdatamst_color[".googleLikeFields"][] = "sort";
$tdatamst_color[".googleLikeFields"][] = "update_at";
$tdatamst_color[".googleLikeFields"][] = "update_by";
$tdatamst_color[".googleLikeFields"][] = "create_at";
$tdatamst_color[".googleLikeFields"][] = "create_by";
$tdatamst_color[".googleLikeFields"][] = "tag_id";
$tdatamst_color[".googleLikeFields"][] = "english_name";



$tdatamst_color[".tableType"] = "list";

$tdatamst_color[".printerPageOrientation"] = 0;
$tdatamst_color[".nPrinterPageScale"] = 100;

$tdatamst_color[".nPrinterSplitRecords"] = 40;

$tdatamst_color[".nPrinterPDFSplitRecords"] = 40;



$tdatamst_color[".geocodingEnabled"] = false;





$tdatamst_color[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamst_color[".pageSize"] = 20;

$tdatamst_color[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamst_color[".strOrderBy"] = $tstrOrderBy;

$tdatamst_color[".orderindexes"] = array();

$tdatamst_color[".sqlHead"] = "SELECT id,  	`data`,  	sort,  	update_at,  	update_by,  	create_at,  	create_by,  	tag_id,  	english_name";
$tdatamst_color[".sqlFrom"] = "FROM mst_color";
$tdatamst_color[".sqlWhereExpr"] = "";
$tdatamst_color[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamst_color[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamst_color[".arrGroupsPerPage"] = $arrGPP;

$tdatamst_color[".highlightSearchResults"] = true;

$tableKeysmst_color = array();
$tableKeysmst_color[] = "id";
$tdatamst_color[".Keys"] = $tableKeysmst_color;

$tdatamst_color[".listFields"] = array();

$tdatamst_color[".hideMobileList"] = array();


$tdatamst_color[".viewFields"] = array();

$tdatamst_color[".addFields"] = array();

$tdatamst_color[".masterListFields"] = array();
$tdatamst_color[".masterListFields"][] = "id";
$tdatamst_color[".masterListFields"][] = "data";
$tdatamst_color[".masterListFields"][] = "sort";
$tdatamst_color[".masterListFields"][] = "update_at";
$tdatamst_color[".masterListFields"][] = "update_by";
$tdatamst_color[".masterListFields"][] = "create_at";
$tdatamst_color[".masterListFields"][] = "create_by";
$tdatamst_color[".masterListFields"][] = "tag_id";
$tdatamst_color[".masterListFields"][] = "english_name";

$tdatamst_color[".inlineAddFields"] = array();

$tdatamst_color[".editFields"] = array();

$tdatamst_color[".inlineEditFields"] = array();

$tdatamst_color[".updateSelectedFields"] = array();


$tdatamst_color[".exportFields"] = array();

$tdatamst_color[".importFields"] = array();

$tdatamst_color[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "mst_color";
	$fdata["Label"] = GetFieldLabel("mst_color","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
			
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








	$tdatamst_color["id"] = $fdata;
//	data
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "data";
	$fdata["GoodName"] = "data";
	$fdata["ownerTable"] = "mst_color";
	$fdata["Label"] = GetFieldLabel("mst_color","data");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "data";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`data`";

	
	
			
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
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatamst_color["data"] = $fdata;
//	sort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sort";
	$fdata["GoodName"] = "sort";
	$fdata["ownerTable"] = "mst_color";
	$fdata["Label"] = GetFieldLabel("mst_color","sort");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "sort";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sort";

	
	
			
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








	$tdatamst_color["sort"] = $fdata;
//	update_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "update_at";
	$fdata["GoodName"] = "update_at";
	$fdata["ownerTable"] = "mst_color";
	$fdata["Label"] = GetFieldLabel("mst_color","update_at");
	$fdata["FieldType"] = 135;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "update_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "update_at";

	
	
			
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








	$tdatamst_color["update_at"] = $fdata;
//	update_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "update_by";
	$fdata["GoodName"] = "update_by";
	$fdata["ownerTable"] = "mst_color";
	$fdata["Label"] = GetFieldLabel("mst_color","update_by");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "update_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "update_by";

	
	
			
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








	$tdatamst_color["update_by"] = $fdata;
//	create_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "create_at";
	$fdata["GoodName"] = "create_at";
	$fdata["ownerTable"] = "mst_color";
	$fdata["Label"] = GetFieldLabel("mst_color","create_at");
	$fdata["FieldType"] = 135;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "create_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "create_at";

	
	
			
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








	$tdatamst_color["create_at"] = $fdata;
//	create_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "create_by";
	$fdata["GoodName"] = "create_by";
	$fdata["ownerTable"] = "mst_color";
	$fdata["Label"] = GetFieldLabel("mst_color","create_by");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "create_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "create_by";

	
	
			
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








	$tdatamst_color["create_by"] = $fdata;
//	tag_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "tag_id";
	$fdata["GoodName"] = "tag_id";
	$fdata["ownerTable"] = "mst_color";
	$fdata["Label"] = GetFieldLabel("mst_color","tag_id");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "tag_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tag_id";

	
	
			
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
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatamst_color["tag_id"] = $fdata;
//	english_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "english_name";
	$fdata["GoodName"] = "english_name";
	$fdata["ownerTable"] = "mst_color";
	$fdata["Label"] = GetFieldLabel("mst_color","english_name");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "english_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "english_name";

	
	
			
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
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatamst_color["english_name"] = $fdata;


$tables_data["mst_color"]=&$tdatamst_color;
$field_labels["mst_color"] = &$fieldLabelsmst_color;
$fieldToolTips["mst_color"] = &$fieldToolTipsmst_color;
$placeHolders["mst_color"] = &$placeHoldersmst_color;
$page_titles["mst_color"] = &$pageTitlesmst_color;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mst_color"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mst_color"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mst_color()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	`data`,  	sort,  	update_at,  	update_by,  	create_at,  	create_by,  	tag_id,  	english_name";
$proto0["m_strFrom"] = "FROM mst_color";
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
	"m_strTable" => "mst_color",
	"m_srcTableName" => "mst_color"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "mst_color";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "data",
	"m_strTable" => "mst_color",
	"m_srcTableName" => "mst_color"
));

$proto8["m_sql"] = "`data`";
$proto8["m_srcTableName"] = "mst_color";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "sort",
	"m_strTable" => "mst_color",
	"m_srcTableName" => "mst_color"
));

$proto10["m_sql"] = "sort";
$proto10["m_srcTableName"] = "mst_color";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "update_at",
	"m_strTable" => "mst_color",
	"m_srcTableName" => "mst_color"
));

$proto12["m_sql"] = "update_at";
$proto12["m_srcTableName"] = "mst_color";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "update_by",
	"m_strTable" => "mst_color",
	"m_srcTableName" => "mst_color"
));

$proto14["m_sql"] = "update_by";
$proto14["m_srcTableName"] = "mst_color";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "create_at",
	"m_strTable" => "mst_color",
	"m_srcTableName" => "mst_color"
));

$proto16["m_sql"] = "create_at";
$proto16["m_srcTableName"] = "mst_color";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "create_by",
	"m_strTable" => "mst_color",
	"m_srcTableName" => "mst_color"
));

$proto18["m_sql"] = "create_by";
$proto18["m_srcTableName"] = "mst_color";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "tag_id",
	"m_strTable" => "mst_color",
	"m_srcTableName" => "mst_color"
));

$proto20["m_sql"] = "tag_id";
$proto20["m_srcTableName"] = "mst_color";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "english_name",
	"m_strTable" => "mst_color",
	"m_srcTableName" => "mst_color"
));

$proto22["m_sql"] = "english_name";
$proto22["m_srcTableName"] = "mst_color";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "mst_color";
$proto25["m_srcTableName"] = "mst_color";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "id";
$proto25["m_columns"][] = "data";
$proto25["m_columns"][] = "sort";
$proto25["m_columns"][] = "update_at";
$proto25["m_columns"][] = "update_by";
$proto25["m_columns"][] = "create_at";
$proto25["m_columns"][] = "create_by";
$proto25["m_columns"][] = "tag_id";
$proto25["m_columns"][] = "english_name";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "mst_color";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "mst_color";
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
$proto0["m_srcTableName"]="mst_color";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mst_color = createSqlQuery_mst_color();


	
		;

									

$tdatamst_color[".sqlquery"] = $queryData_mst_color;

$tableEvents["mst_color"] = new eventsBase;
$tdatamst_color[".hasEvents"] = false;

?>