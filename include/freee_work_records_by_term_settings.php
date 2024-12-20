<?php
require_once(getabspath("classes/cipherer.php"));




$tdatafreee_work_records_by_term = array();
	$tdatafreee_work_records_by_term[".truncateText"] = true;
	$tdatafreee_work_records_by_term[".NumberOfChars"] = 80;
	$tdatafreee_work_records_by_term[".ShortName"] = "freee_work_records_by_term";
	$tdatafreee_work_records_by_term[".OwnerID"] = "";
	$tdatafreee_work_records_by_term[".OriginalTable"] = "freee_work_records_by_term";

//	field labels
$fieldLabelsfreee_work_records_by_term = array();
$fieldToolTipsfreee_work_records_by_term = array();
$pageTitlesfreee_work_records_by_term = array();
$placeHoldersfreee_work_records_by_term = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsfreee_work_records_by_term["Japanese"] = array();
	$fieldToolTipsfreee_work_records_by_term["Japanese"] = array();
	$placeHoldersfreee_work_records_by_term["Japanese"] = array();
	$pageTitlesfreee_work_records_by_term["Japanese"] = array();
	$fieldLabelsfreee_work_records_by_term["Japanese"]["id"] = "Id";
	$fieldToolTipsfreee_work_records_by_term["Japanese"]["id"] = "";
	$placeHoldersfreee_work_records_by_term["Japanese"]["id"] = "";
	$fieldLabelsfreee_work_records_by_term["Japanese"]["term_type"] = "期間区分";
	$fieldToolTipsfreee_work_records_by_term["Japanese"]["term_type"] = "";
	$placeHoldersfreee_work_records_by_term["Japanese"]["term_type"] = "";
	$fieldLabelsfreee_work_records_by_term["Japanese"]["start_date"] = "集計開始日";
	$fieldToolTipsfreee_work_records_by_term["Japanese"]["start_date"] = "";
	$placeHoldersfreee_work_records_by_term["Japanese"]["start_date"] = "";
	$fieldLabelsfreee_work_records_by_term["Japanese"]["end_date"] = "集計終了日";
	$fieldToolTipsfreee_work_records_by_term["Japanese"]["end_date"] = "";
	$placeHoldersfreee_work_records_by_term["Japanese"]["end_date"] = "";
	$fieldLabelsfreee_work_records_by_term["Japanese"]["normal_work_mins"] = "所定内労働時間（分）";
	$fieldToolTipsfreee_work_records_by_term["Japanese"]["normal_work_mins"] = "";
	$placeHoldersfreee_work_records_by_term["Japanese"]["normal_work_mins"] = "";
	$fieldLabelsfreee_work_records_by_term["Japanese"]["overtime_work_mins"] = "時間外労働時間（分）";
	$fieldToolTipsfreee_work_records_by_term["Japanese"]["overtime_work_mins"] = "";
	$placeHoldersfreee_work_records_by_term["Japanese"]["overtime_work_mins"] = "";
	$fieldLabelsfreee_work_records_by_term["Japanese"]["holiday_work_mins"] = "休日労働時間（分）";
	$fieldToolTipsfreee_work_records_by_term["Japanese"]["holiday_work_mins"] = "";
	$placeHoldersfreee_work_records_by_term["Japanese"]["holiday_work_mins"] = "";
	$fieldLabelsfreee_work_records_by_term["Japanese"]["latenight_work_mins"] = "深夜労働時間（分）";
	$fieldToolTipsfreee_work_records_by_term["Japanese"]["latenight_work_mins"] = "";
	$placeHoldersfreee_work_records_by_term["Japanese"]["latenight_work_mins"] = "";
	$fieldLabelsfreee_work_records_by_term["Japanese"]["num_absences"] = "欠勤数";
	$fieldToolTipsfreee_work_records_by_term["Japanese"]["num_absences"] = "";
	$placeHoldersfreee_work_records_by_term["Japanese"]["num_absences"] = "";
	$fieldLabelsfreee_work_records_by_term["Japanese"]["num_paid_holidays"] = "有給取得数";
	$fieldToolTipsfreee_work_records_by_term["Japanese"]["num_paid_holidays"] = "";
	$placeHoldersfreee_work_records_by_term["Japanese"]["num_paid_holidays"] = "";
	$fieldLabelsfreee_work_records_by_term["Japanese"]["num_paid_holidays_left"] = "有給残日数";
	$fieldToolTipsfreee_work_records_by_term["Japanese"]["num_paid_holidays_left"] = "";
	$placeHoldersfreee_work_records_by_term["Japanese"]["num_paid_holidays_left"] = "";
	$fieldLabelsfreee_work_records_by_term["Japanese"]["lateness_mins"] = "遅刻時間（分）";
	$fieldToolTipsfreee_work_records_by_term["Japanese"]["lateness_mins"] = "";
	$placeHoldersfreee_work_records_by_term["Japanese"]["lateness_mins"] = "";
	$fieldLabelsfreee_work_records_by_term["Japanese"]["early_leaving_mins"] = "早退時間（分）";
	$fieldToolTipsfreee_work_records_by_term["Japanese"]["early_leaving_mins"] = "";
	$placeHoldersfreee_work_records_by_term["Japanese"]["early_leaving_mins"] = "";
	$fieldLabelsfreee_work_records_by_term["Japanese"]["employee_id"] = "従業員id";
	$fieldToolTipsfreee_work_records_by_term["Japanese"]["employee_id"] = "";
	$placeHoldersfreee_work_records_by_term["Japanese"]["employee_id"] = "";
	$fieldLabelsfreee_work_records_by_term["Japanese"]["user_id"] = "User Id（EVA）";
	$fieldToolTipsfreee_work_records_by_term["Japanese"]["user_id"] = "";
	$placeHoldersfreee_work_records_by_term["Japanese"]["user_id"] = "";
	$fieldLabelsfreee_work_records_by_term["Japanese"]["total_work_mins"] = "総労働時間（分）";
	$fieldToolTipsfreee_work_records_by_term["Japanese"]["total_work_mins"] = "";
	$placeHoldersfreee_work_records_by_term["Japanese"]["total_work_mins"] = "";
	$fieldLabelsfreee_work_records_by_term["Japanese"]["first_name"] = "名前（EVA）";
	$fieldToolTipsfreee_work_records_by_term["Japanese"]["first_name"] = "";
	$placeHoldersfreee_work_records_by_term["Japanese"]["first_name"] = "";
	$fieldLabelsfreee_work_records_by_term["Japanese"]["dept_group_id"] = "部署";
	$fieldToolTipsfreee_work_records_by_term["Japanese"]["dept_group_id"] = "";
	$placeHoldersfreee_work_records_by_term["Japanese"]["dept_group_id"] = "";
	$fieldLabelsfreee_work_records_by_term["Japanese"]["total_sub_over_mins"] = "（総合-時間外）労働時間（分）";
	$fieldToolTipsfreee_work_records_by_term["Japanese"]["total_sub_over_mins"] = "";
	$placeHoldersfreee_work_records_by_term["Japanese"]["total_sub_over_mins"] = "";
	$fieldLabelsfreee_work_records_by_term["Japanese"]["retire_date"] = "is retired";
	$fieldToolTipsfreee_work_records_by_term["Japanese"]["retire_date"] = "";
	$placeHoldersfreee_work_records_by_term["Japanese"]["retire_date"] = "";
	$fieldLabelsfreee_work_records_by_term["Japanese"]["note"] = "Note";
	$fieldToolTipsfreee_work_records_by_term["Japanese"]["note"] = "";
	$placeHoldersfreee_work_records_by_term["Japanese"]["note"] = "";
	if (count($fieldToolTipsfreee_work_records_by_term["Japanese"]))
		$tdatafreee_work_records_by_term[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsfreee_work_records_by_term[""] = array();
	$fieldToolTipsfreee_work_records_by_term[""] = array();
	$placeHoldersfreee_work_records_by_term[""] = array();
	$pageTitlesfreee_work_records_by_term[""] = array();
	$fieldLabelsfreee_work_records_by_term[""]["id"] = "Id";
	$fieldToolTipsfreee_work_records_by_term[""]["id"] = "";
	$placeHoldersfreee_work_records_by_term[""]["id"] = "";
	$fieldLabelsfreee_work_records_by_term[""]["term_type"] = "Term Type";
	$fieldToolTipsfreee_work_records_by_term[""]["term_type"] = "";
	$placeHoldersfreee_work_records_by_term[""]["term_type"] = "";
	$fieldLabelsfreee_work_records_by_term[""]["start_date"] = "Start Date";
	$fieldToolTipsfreee_work_records_by_term[""]["start_date"] = "";
	$placeHoldersfreee_work_records_by_term[""]["start_date"] = "";
	$fieldLabelsfreee_work_records_by_term[""]["end_date"] = "End Date";
	$fieldToolTipsfreee_work_records_by_term[""]["end_date"] = "";
	$placeHoldersfreee_work_records_by_term[""]["end_date"] = "";
	$fieldLabelsfreee_work_records_by_term[""]["normal_work_mins"] = "Normal Work Mins";
	$fieldToolTipsfreee_work_records_by_term[""]["normal_work_mins"] = "";
	$placeHoldersfreee_work_records_by_term[""]["normal_work_mins"] = "";
	$fieldLabelsfreee_work_records_by_term[""]["overtime_work_mins"] = "Overtime Work Mins";
	$fieldToolTipsfreee_work_records_by_term[""]["overtime_work_mins"] = "";
	$placeHoldersfreee_work_records_by_term[""]["overtime_work_mins"] = "";
	$fieldLabelsfreee_work_records_by_term[""]["holiday_work_mins"] = "Holiday Work Mins";
	$fieldToolTipsfreee_work_records_by_term[""]["holiday_work_mins"] = "";
	$placeHoldersfreee_work_records_by_term[""]["holiday_work_mins"] = "";
	$fieldLabelsfreee_work_records_by_term[""]["latenight_work_mins"] = "Latenight Work Mins";
	$fieldToolTipsfreee_work_records_by_term[""]["latenight_work_mins"] = "";
	$placeHoldersfreee_work_records_by_term[""]["latenight_work_mins"] = "";
	$fieldLabelsfreee_work_records_by_term[""]["num_absences"] = "Num Absences";
	$fieldToolTipsfreee_work_records_by_term[""]["num_absences"] = "";
	$placeHoldersfreee_work_records_by_term[""]["num_absences"] = "";
	$fieldLabelsfreee_work_records_by_term[""]["num_paid_holidays"] = "Num Paid Holidays";
	$fieldToolTipsfreee_work_records_by_term[""]["num_paid_holidays"] = "";
	$placeHoldersfreee_work_records_by_term[""]["num_paid_holidays"] = "";
	$fieldLabelsfreee_work_records_by_term[""]["num_paid_holidays_left"] = "Num Paid Holidays Left";
	$fieldToolTipsfreee_work_records_by_term[""]["num_paid_holidays_left"] = "";
	$placeHoldersfreee_work_records_by_term[""]["num_paid_holidays_left"] = "";
	$fieldLabelsfreee_work_records_by_term[""]["lateness_mins"] = "Lateness Mins";
	$fieldToolTipsfreee_work_records_by_term[""]["lateness_mins"] = "";
	$placeHoldersfreee_work_records_by_term[""]["lateness_mins"] = "";
	$fieldLabelsfreee_work_records_by_term[""]["early_leaving_mins"] = "Early Leaving Mins";
	$fieldToolTipsfreee_work_records_by_term[""]["early_leaving_mins"] = "";
	$placeHoldersfreee_work_records_by_term[""]["early_leaving_mins"] = "";
	$fieldLabelsfreee_work_records_by_term[""]["employee_id"] = "Employee Id";
	$fieldToolTipsfreee_work_records_by_term[""]["employee_id"] = "";
	$placeHoldersfreee_work_records_by_term[""]["employee_id"] = "";
	$fieldLabelsfreee_work_records_by_term[""]["user_id"] = "User Id";
	$fieldToolTipsfreee_work_records_by_term[""]["user_id"] = "";
	$placeHoldersfreee_work_records_by_term[""]["user_id"] = "";
	$fieldLabelsfreee_work_records_by_term[""]["total_work_mins"] = "Total Work Mins";
	$fieldToolTipsfreee_work_records_by_term[""]["total_work_mins"] = "";
	$placeHoldersfreee_work_records_by_term[""]["total_work_mins"] = "";
	$fieldLabelsfreee_work_records_by_term[""]["first_name"] = "First Name";
	$fieldToolTipsfreee_work_records_by_term[""]["first_name"] = "";
	$placeHoldersfreee_work_records_by_term[""]["first_name"] = "";
	$fieldLabelsfreee_work_records_by_term[""]["dept_group_id"] = "Dept Group Id";
	$fieldToolTipsfreee_work_records_by_term[""]["dept_group_id"] = "";
	$placeHoldersfreee_work_records_by_term[""]["dept_group_id"] = "";
	$fieldLabelsfreee_work_records_by_term[""]["total_sub_over_mins"] = "Total Sub Over Mins";
	$fieldToolTipsfreee_work_records_by_term[""]["total_sub_over_mins"] = "";
	$placeHoldersfreee_work_records_by_term[""]["total_sub_over_mins"] = "";
	$fieldLabelsfreee_work_records_by_term[""]["retire_date"] = "Retire Date";
	$fieldToolTipsfreee_work_records_by_term[""]["retire_date"] = "";
	$placeHoldersfreee_work_records_by_term[""]["retire_date"] = "";
	$fieldLabelsfreee_work_records_by_term[""]["note"] = "Note";
	$fieldToolTipsfreee_work_records_by_term[""]["note"] = "";
	$placeHoldersfreee_work_records_by_term[""]["note"] = "";
	if (count($fieldToolTipsfreee_work_records_by_term[""]))
		$tdatafreee_work_records_by_term[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsfreee_work_records_by_term["English"] = array();
	$fieldToolTipsfreee_work_records_by_term["English"] = array();
	$placeHoldersfreee_work_records_by_term["English"] = array();
	$pageTitlesfreee_work_records_by_term["English"] = array();
	$fieldLabelsfreee_work_records_by_term["English"]["id"] = "Id";
	$fieldToolTipsfreee_work_records_by_term["English"]["id"] = "";
	$placeHoldersfreee_work_records_by_term["English"]["id"] = "";
	$fieldLabelsfreee_work_records_by_term["English"]["term_type"] = "Term Type";
	$fieldToolTipsfreee_work_records_by_term["English"]["term_type"] = "";
	$placeHoldersfreee_work_records_by_term["English"]["term_type"] = "";
	$fieldLabelsfreee_work_records_by_term["English"]["start_date"] = "Start Date";
	$fieldToolTipsfreee_work_records_by_term["English"]["start_date"] = "";
	$placeHoldersfreee_work_records_by_term["English"]["start_date"] = "";
	$fieldLabelsfreee_work_records_by_term["English"]["end_date"] = "End Date";
	$fieldToolTipsfreee_work_records_by_term["English"]["end_date"] = "";
	$placeHoldersfreee_work_records_by_term["English"]["end_date"] = "";
	$fieldLabelsfreee_work_records_by_term["English"]["normal_work_mins"] = "Normal Work Mins";
	$fieldToolTipsfreee_work_records_by_term["English"]["normal_work_mins"] = "";
	$placeHoldersfreee_work_records_by_term["English"]["normal_work_mins"] = "";
	$fieldLabelsfreee_work_records_by_term["English"]["overtime_work_mins"] = "Overtime Work Mins";
	$fieldToolTipsfreee_work_records_by_term["English"]["overtime_work_mins"] = "";
	$placeHoldersfreee_work_records_by_term["English"]["overtime_work_mins"] = "";
	$fieldLabelsfreee_work_records_by_term["English"]["holiday_work_mins"] = "Holiday Work Mins";
	$fieldToolTipsfreee_work_records_by_term["English"]["holiday_work_mins"] = "";
	$placeHoldersfreee_work_records_by_term["English"]["holiday_work_mins"] = "";
	$fieldLabelsfreee_work_records_by_term["English"]["latenight_work_mins"] = "Latenight Work Mins";
	$fieldToolTipsfreee_work_records_by_term["English"]["latenight_work_mins"] = "";
	$placeHoldersfreee_work_records_by_term["English"]["latenight_work_mins"] = "";
	$fieldLabelsfreee_work_records_by_term["English"]["num_absences"] = "Num Absences";
	$fieldToolTipsfreee_work_records_by_term["English"]["num_absences"] = "";
	$placeHoldersfreee_work_records_by_term["English"]["num_absences"] = "";
	$fieldLabelsfreee_work_records_by_term["English"]["num_paid_holidays"] = "Num Paid Holidays";
	$fieldToolTipsfreee_work_records_by_term["English"]["num_paid_holidays"] = "";
	$placeHoldersfreee_work_records_by_term["English"]["num_paid_holidays"] = "";
	$fieldLabelsfreee_work_records_by_term["English"]["num_paid_holidays_left"] = "Num Paid Holidays Left";
	$fieldToolTipsfreee_work_records_by_term["English"]["num_paid_holidays_left"] = "";
	$placeHoldersfreee_work_records_by_term["English"]["num_paid_holidays_left"] = "";
	$fieldLabelsfreee_work_records_by_term["English"]["lateness_mins"] = "Lateness Mins";
	$fieldToolTipsfreee_work_records_by_term["English"]["lateness_mins"] = "";
	$placeHoldersfreee_work_records_by_term["English"]["lateness_mins"] = "";
	$fieldLabelsfreee_work_records_by_term["English"]["early_leaving_mins"] = "Early Leaving Mins";
	$fieldToolTipsfreee_work_records_by_term["English"]["early_leaving_mins"] = "";
	$placeHoldersfreee_work_records_by_term["English"]["early_leaving_mins"] = "";
	$fieldLabelsfreee_work_records_by_term["English"]["employee_id"] = "Employee Id";
	$fieldToolTipsfreee_work_records_by_term["English"]["employee_id"] = "";
	$placeHoldersfreee_work_records_by_term["English"]["employee_id"] = "";
	$fieldLabelsfreee_work_records_by_term["English"]["user_id"] = "User Id";
	$fieldToolTipsfreee_work_records_by_term["English"]["user_id"] = "";
	$placeHoldersfreee_work_records_by_term["English"]["user_id"] = "";
	$fieldLabelsfreee_work_records_by_term["English"]["total_work_mins"] = "Total Work Mins";
	$fieldToolTipsfreee_work_records_by_term["English"]["total_work_mins"] = "";
	$placeHoldersfreee_work_records_by_term["English"]["total_work_mins"] = "";
	$fieldLabelsfreee_work_records_by_term["English"]["first_name"] = "First Name";
	$fieldToolTipsfreee_work_records_by_term["English"]["first_name"] = "";
	$placeHoldersfreee_work_records_by_term["English"]["first_name"] = "";
	$fieldLabelsfreee_work_records_by_term["English"]["dept_group_id"] = "Dept Group Id";
	$fieldToolTipsfreee_work_records_by_term["English"]["dept_group_id"] = "";
	$placeHoldersfreee_work_records_by_term["English"]["dept_group_id"] = "";
	$fieldLabelsfreee_work_records_by_term["English"]["total_sub_over_mins"] = "Total Sub Over Mins";
	$fieldToolTipsfreee_work_records_by_term["English"]["total_sub_over_mins"] = "";
	$placeHoldersfreee_work_records_by_term["English"]["total_sub_over_mins"] = "";
	$fieldLabelsfreee_work_records_by_term["English"]["retire_date"] = "Retire Date";
	$fieldToolTipsfreee_work_records_by_term["English"]["retire_date"] = "";
	$placeHoldersfreee_work_records_by_term["English"]["retire_date"] = "";
	$fieldLabelsfreee_work_records_by_term["English"]["note"] = "Note";
	$fieldToolTipsfreee_work_records_by_term["English"]["note"] = "";
	$placeHoldersfreee_work_records_by_term["English"]["note"] = "";
	if (count($fieldToolTipsfreee_work_records_by_term["English"]))
		$tdatafreee_work_records_by_term[".isUseToolTips"] = true;
}


	$tdatafreee_work_records_by_term[".NCSearch"] = true;



$tdatafreee_work_records_by_term[".shortTableName"] = "freee_work_records_by_term";
$tdatafreee_work_records_by_term[".nSecOptions"] = 0;
$tdatafreee_work_records_by_term[".recsPerRowPrint"] = 1;
$tdatafreee_work_records_by_term[".mainTableOwnerID"] = "";
$tdatafreee_work_records_by_term[".moveNext"] = 1;
$tdatafreee_work_records_by_term[".entityType"] = 0;

$tdatafreee_work_records_by_term[".strOriginalTableName"] = "freee_work_records_by_term";

	



$tdatafreee_work_records_by_term[".showAddInPopup"] = false;

$tdatafreee_work_records_by_term[".showEditInPopup"] = false;

$tdatafreee_work_records_by_term[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatafreee_work_records_by_term[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatafreee_work_records_by_term[".fieldsForRegister"] = array();

$tdatafreee_work_records_by_term[".listAjax"] = false;

	$tdatafreee_work_records_by_term[".audit"] = false;

	$tdatafreee_work_records_by_term[".locking"] = false;



$tdatafreee_work_records_by_term[".list"] = true;



$tdatafreee_work_records_by_term[".reorderRecordsByHeader"] = true;





$tdatafreee_work_records_by_term[".exportTo"] = true;



$tdatafreee_work_records_by_term[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatafreee_work_records_by_term[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatafreee_work_records_by_term[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatafreee_work_records_by_term[".searchSaving"] = false;
//

$tdatafreee_work_records_by_term[".showSearchPanel"] = true;
		$tdatafreee_work_records_by_term[".flexibleSearch"] = true;

$tdatafreee_work_records_by_term[".isUseAjaxSuggest"] = true;

$tdatafreee_work_records_by_term[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatafreee_work_records_by_term[".ajaxCodeSnippetAdded"] = false;

$tdatafreee_work_records_by_term[".buttonsAdded"] = false;

$tdatafreee_work_records_by_term[".addPageEvents"] = false;

// use timepicker for search panel
$tdatafreee_work_records_by_term[".isUseTimeForSearch"] = false;





$tdatafreee_work_records_by_term[".allSearchFields"] = array();
$tdatafreee_work_records_by_term[".filterFields"] = array();
$tdatafreee_work_records_by_term[".requiredSearchFields"] = array();

$tdatafreee_work_records_by_term[".allSearchFields"][] = "id";
	$tdatafreee_work_records_by_term[".allSearchFields"][] = "term_type";
	$tdatafreee_work_records_by_term[".allSearchFields"][] = "start_date";
	$tdatafreee_work_records_by_term[".allSearchFields"][] = "end_date";
	$tdatafreee_work_records_by_term[".allSearchFields"][] = "first_name";
	$tdatafreee_work_records_by_term[".allSearchFields"][] = "dept_group_id";
	$tdatafreee_work_records_by_term[".allSearchFields"][] = "total_work_mins";
	$tdatafreee_work_records_by_term[".allSearchFields"][] = "total_sub_over_mins";
	$tdatafreee_work_records_by_term[".allSearchFields"][] = "normal_work_mins";
	$tdatafreee_work_records_by_term[".allSearchFields"][] = "overtime_work_mins";
	$tdatafreee_work_records_by_term[".allSearchFields"][] = "holiday_work_mins";
	$tdatafreee_work_records_by_term[".allSearchFields"][] = "latenight_work_mins";
	$tdatafreee_work_records_by_term[".allSearchFields"][] = "num_absences";
	$tdatafreee_work_records_by_term[".allSearchFields"][] = "num_paid_holidays";
	$tdatafreee_work_records_by_term[".allSearchFields"][] = "num_paid_holidays_left";
	$tdatafreee_work_records_by_term[".allSearchFields"][] = "lateness_mins";
	$tdatafreee_work_records_by_term[".allSearchFields"][] = "early_leaving_mins";
	$tdatafreee_work_records_by_term[".allSearchFields"][] = "employee_id";
	$tdatafreee_work_records_by_term[".allSearchFields"][] = "user_id";
	$tdatafreee_work_records_by_term[".allSearchFields"][] = "retire_date";
	$tdatafreee_work_records_by_term[".allSearchFields"][] = "note";
	

$tdatafreee_work_records_by_term[".googleLikeFields"] = array();
$tdatafreee_work_records_by_term[".googleLikeFields"][] = "id";
$tdatafreee_work_records_by_term[".googleLikeFields"][] = "term_type";
$tdatafreee_work_records_by_term[".googleLikeFields"][] = "start_date";
$tdatafreee_work_records_by_term[".googleLikeFields"][] = "end_date";
$tdatafreee_work_records_by_term[".googleLikeFields"][] = "normal_work_mins";
$tdatafreee_work_records_by_term[".googleLikeFields"][] = "overtime_work_mins";
$tdatafreee_work_records_by_term[".googleLikeFields"][] = "holiday_work_mins";
$tdatafreee_work_records_by_term[".googleLikeFields"][] = "latenight_work_mins";
$tdatafreee_work_records_by_term[".googleLikeFields"][] = "num_absences";
$tdatafreee_work_records_by_term[".googleLikeFields"][] = "num_paid_holidays";
$tdatafreee_work_records_by_term[".googleLikeFields"][] = "num_paid_holidays_left";
$tdatafreee_work_records_by_term[".googleLikeFields"][] = "lateness_mins";
$tdatafreee_work_records_by_term[".googleLikeFields"][] = "early_leaving_mins";
$tdatafreee_work_records_by_term[".googleLikeFields"][] = "employee_id";
$tdatafreee_work_records_by_term[".googleLikeFields"][] = "user_id";
$tdatafreee_work_records_by_term[".googleLikeFields"][] = "total_work_mins";
$tdatafreee_work_records_by_term[".googleLikeFields"][] = "first_name";
$tdatafreee_work_records_by_term[".googleLikeFields"][] = "dept_group_id";
$tdatafreee_work_records_by_term[".googleLikeFields"][] = "total_sub_over_mins";
$tdatafreee_work_records_by_term[".googleLikeFields"][] = "retire_date";
$tdatafreee_work_records_by_term[".googleLikeFields"][] = "note";

$tdatafreee_work_records_by_term[".panelSearchFields"] = array();
$tdatafreee_work_records_by_term[".searchPanelOptions"] = array();
$tdatafreee_work_records_by_term[".panelSearchFields"][] = "id";
	$tdatafreee_work_records_by_term[".panelSearchFields"][] = "term_type";
	$tdatafreee_work_records_by_term[".panelSearchFields"][] = "start_date";
	$tdatafreee_work_records_by_term[".panelSearchFields"][] = "end_date";
	$tdatafreee_work_records_by_term[".panelSearchFields"][] = "first_name";
	$tdatafreee_work_records_by_term[".panelSearchFields"][] = "dept_group_id";
	$tdatafreee_work_records_by_term[".panelSearchFields"][] = "total_work_mins";
	$tdatafreee_work_records_by_term[".panelSearchFields"][] = "total_sub_over_mins";
	$tdatafreee_work_records_by_term[".panelSearchFields"][] = "normal_work_mins";
	$tdatafreee_work_records_by_term[".panelSearchFields"][] = "overtime_work_mins";
	$tdatafreee_work_records_by_term[".panelSearchFields"][] = "holiday_work_mins";
	$tdatafreee_work_records_by_term[".panelSearchFields"][] = "latenight_work_mins";
	$tdatafreee_work_records_by_term[".panelSearchFields"][] = "num_absences";
	$tdatafreee_work_records_by_term[".panelSearchFields"][] = "num_paid_holidays";
	$tdatafreee_work_records_by_term[".panelSearchFields"][] = "num_paid_holidays_left";
	$tdatafreee_work_records_by_term[".panelSearchFields"][] = "lateness_mins";
	$tdatafreee_work_records_by_term[".panelSearchFields"][] = "early_leaving_mins";
	$tdatafreee_work_records_by_term[".panelSearchFields"][] = "employee_id";
	$tdatafreee_work_records_by_term[".panelSearchFields"][] = "user_id";
	$tdatafreee_work_records_by_term[".panelSearchFields"][] = "retire_date";
	
$tdatafreee_work_records_by_term[".advSearchFields"] = array();
$tdatafreee_work_records_by_term[".advSearchFields"][] = "id";
$tdatafreee_work_records_by_term[".advSearchFields"][] = "term_type";
$tdatafreee_work_records_by_term[".advSearchFields"][] = "start_date";
$tdatafreee_work_records_by_term[".advSearchFields"][] = "end_date";
$tdatafreee_work_records_by_term[".advSearchFields"][] = "first_name";
$tdatafreee_work_records_by_term[".advSearchFields"][] = "dept_group_id";
$tdatafreee_work_records_by_term[".advSearchFields"][] = "total_work_mins";
$tdatafreee_work_records_by_term[".advSearchFields"][] = "total_sub_over_mins";
$tdatafreee_work_records_by_term[".advSearchFields"][] = "normal_work_mins";
$tdatafreee_work_records_by_term[".advSearchFields"][] = "overtime_work_mins";
$tdatafreee_work_records_by_term[".advSearchFields"][] = "holiday_work_mins";
$tdatafreee_work_records_by_term[".advSearchFields"][] = "latenight_work_mins";
$tdatafreee_work_records_by_term[".advSearchFields"][] = "num_absences";
$tdatafreee_work_records_by_term[".advSearchFields"][] = "num_paid_holidays";
$tdatafreee_work_records_by_term[".advSearchFields"][] = "num_paid_holidays_left";
$tdatafreee_work_records_by_term[".advSearchFields"][] = "lateness_mins";
$tdatafreee_work_records_by_term[".advSearchFields"][] = "early_leaving_mins";
$tdatafreee_work_records_by_term[".advSearchFields"][] = "employee_id";
$tdatafreee_work_records_by_term[".advSearchFields"][] = "user_id";
$tdatafreee_work_records_by_term[".advSearchFields"][] = "retire_date";
$tdatafreee_work_records_by_term[".advSearchFields"][] = "note";

$tdatafreee_work_records_by_term[".tableType"] = "list";

$tdatafreee_work_records_by_term[".printerPageOrientation"] = 0;
$tdatafreee_work_records_by_term[".nPrinterPageScale"] = 100;

$tdatafreee_work_records_by_term[".nPrinterSplitRecords"] = 40;

$tdatafreee_work_records_by_term[".nPrinterPDFSplitRecords"] = 40;



$tdatafreee_work_records_by_term[".geocodingEnabled"] = false;





$tdatafreee_work_records_by_term[".listGridLayout"] = 3;





// view page pdf

// print page pdf

$tdatafreee_work_records_by_term[".totalsFields"] = array();
$tdatafreee_work_records_by_term[".totalsFields"][] = array(
	"fName" => "total_work_mins",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');
$tdatafreee_work_records_by_term[".totalsFields"][] = array(
	"fName" => "normal_work_mins",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');
$tdatafreee_work_records_by_term[".totalsFields"][] = array(
	"fName" => "overtime_work_mins",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');
$tdatafreee_work_records_by_term[".totalsFields"][] = array(
	"fName" => "holiday_work_mins",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');
$tdatafreee_work_records_by_term[".totalsFields"][] = array(
	"fName" => "latenight_work_mins",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');
$tdatafreee_work_records_by_term[".totalsFields"][] = array(
	"fName" => "num_absences",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => '');
$tdatafreee_work_records_by_term[".totalsFields"][] = array(
	"fName" => "num_paid_holidays",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatafreee_work_records_by_term[".totalsFields"][] = array(
	"fName" => "num_paid_holidays_left",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => '');
$tdatafreee_work_records_by_term[".totalsFields"][] = array(
	"fName" => "lateness_mins",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');
$tdatafreee_work_records_by_term[".totalsFields"][] = array(
	"fName" => "early_leaving_mins",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');

$tdatafreee_work_records_by_term[".pageSize"] = 100;

$tdatafreee_work_records_by_term[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `freee_work_records_by_term`.`start_date` DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatafreee_work_records_by_term[".strOrderBy"] = $tstrOrderBy;

$tdatafreee_work_records_by_term[".orderindexes"] = array();
$tdatafreee_work_records_by_term[".orderindexes"][] = array(3, (0 ? "ASC" : "DESC"), "`freee_work_records_by_term`.`start_date`");

$tdatafreee_work_records_by_term[".sqlHead"] = "SELECT `freee_work_records_by_term`.`id`,  `freee_work_records_by_term`.`term_type`,  `freee_work_records_by_term`.`start_date`,  `freee_work_records_by_term`.`end_date`,  `freee_work_records_by_term`.`normal_work_mins`,  `freee_work_records_by_term`.`overtime_work_mins`,  `freee_work_records_by_term`.`holiday_work_mins`,  `freee_work_records_by_term`.`latenight_work_mins`,  `freee_work_records_by_term`.`num_absences`,  `freee_work_records_by_term`.`num_paid_holidays`,  `freee_work_records_by_term`.`num_paid_holidays_left`,  `freee_work_records_by_term`.`lateness_mins`,  `freee_work_records_by_term`.`early_leaving_mins`,  `freee_work_records_by_term`.`employee_id`,  `freee_work_records_by_term`.`user_id`,  `freee_work_records_by_term`.`total_work_mins`,  `users`.`first_name`,  `users`.`dept_group_id`,  `freee_work_records_by_term`.`total_work_mins` - `freee_work_records_by_term`.`overtime_work_mins` AS `total_sub_over_mins`,  `freee_employees_details`.`retire_date`,  `freee_work_records_by_term`.`note`";
$tdatafreee_work_records_by_term[".sqlFrom"] = "FROM `freee_work_records_by_term`  LEFT OUTER JOIN `users` ON `freee_work_records_by_term`.`user_id` = `users`.`user_id`  LEFT OUTER JOIN `freee_employees_details` ON `freee_work_records_by_term`.`employee_id` = `freee_employees_details`.`employee_id`";
$tdatafreee_work_records_by_term[".sqlWhereExpr"] = "";
$tdatafreee_work_records_by_term[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatafreee_work_records_by_term[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatafreee_work_records_by_term[".arrGroupsPerPage"] = $arrGPP;

$tdatafreee_work_records_by_term[".highlightSearchResults"] = true;

$tableKeysfreee_work_records_by_term = array();
$tableKeysfreee_work_records_by_term[] = "id";
$tdatafreee_work_records_by_term[".Keys"] = $tableKeysfreee_work_records_by_term;

$tdatafreee_work_records_by_term[".listFields"] = array();
$tdatafreee_work_records_by_term[".listFields"][] = "id";
$tdatafreee_work_records_by_term[".listFields"][] = "term_type";
$tdatafreee_work_records_by_term[".listFields"][] = "start_date";
$tdatafreee_work_records_by_term[".listFields"][] = "end_date";
$tdatafreee_work_records_by_term[".listFields"][] = "first_name";
$tdatafreee_work_records_by_term[".listFields"][] = "dept_group_id";
$tdatafreee_work_records_by_term[".listFields"][] = "total_work_mins";
$tdatafreee_work_records_by_term[".listFields"][] = "total_sub_over_mins";
$tdatafreee_work_records_by_term[".listFields"][] = "normal_work_mins";
$tdatafreee_work_records_by_term[".listFields"][] = "overtime_work_mins";
$tdatafreee_work_records_by_term[".listFields"][] = "holiday_work_mins";
$tdatafreee_work_records_by_term[".listFields"][] = "latenight_work_mins";
$tdatafreee_work_records_by_term[".listFields"][] = "num_absences";
$tdatafreee_work_records_by_term[".listFields"][] = "num_paid_holidays";
$tdatafreee_work_records_by_term[".listFields"][] = "num_paid_holidays_left";
$tdatafreee_work_records_by_term[".listFields"][] = "lateness_mins";
$tdatafreee_work_records_by_term[".listFields"][] = "early_leaving_mins";
$tdatafreee_work_records_by_term[".listFields"][] = "employee_id";
$tdatafreee_work_records_by_term[".listFields"][] = "user_id";
$tdatafreee_work_records_by_term[".listFields"][] = "retire_date";
$tdatafreee_work_records_by_term[".listFields"][] = "note";

$tdatafreee_work_records_by_term[".hideMobileList"] = array();


$tdatafreee_work_records_by_term[".viewFields"] = array();

$tdatafreee_work_records_by_term[".addFields"] = array();

$tdatafreee_work_records_by_term[".masterListFields"] = array();
$tdatafreee_work_records_by_term[".masterListFields"][] = "id";
$tdatafreee_work_records_by_term[".masterListFields"][] = "term_type";
$tdatafreee_work_records_by_term[".masterListFields"][] = "start_date";
$tdatafreee_work_records_by_term[".masterListFields"][] = "end_date";
$tdatafreee_work_records_by_term[".masterListFields"][] = "first_name";
$tdatafreee_work_records_by_term[".masterListFields"][] = "dept_group_id";
$tdatafreee_work_records_by_term[".masterListFields"][] = "total_work_mins";
$tdatafreee_work_records_by_term[".masterListFields"][] = "total_sub_over_mins";
$tdatafreee_work_records_by_term[".masterListFields"][] = "normal_work_mins";
$tdatafreee_work_records_by_term[".masterListFields"][] = "overtime_work_mins";
$tdatafreee_work_records_by_term[".masterListFields"][] = "holiday_work_mins";
$tdatafreee_work_records_by_term[".masterListFields"][] = "latenight_work_mins";
$tdatafreee_work_records_by_term[".masterListFields"][] = "num_absences";
$tdatafreee_work_records_by_term[".masterListFields"][] = "num_paid_holidays";
$tdatafreee_work_records_by_term[".masterListFields"][] = "num_paid_holidays_left";
$tdatafreee_work_records_by_term[".masterListFields"][] = "lateness_mins";
$tdatafreee_work_records_by_term[".masterListFields"][] = "early_leaving_mins";
$tdatafreee_work_records_by_term[".masterListFields"][] = "employee_id";
$tdatafreee_work_records_by_term[".masterListFields"][] = "user_id";
$tdatafreee_work_records_by_term[".masterListFields"][] = "retire_date";
$tdatafreee_work_records_by_term[".masterListFields"][] = "note";

$tdatafreee_work_records_by_term[".inlineAddFields"] = array();

$tdatafreee_work_records_by_term[".editFields"] = array();

$tdatafreee_work_records_by_term[".inlineEditFields"] = array();

$tdatafreee_work_records_by_term[".updateSelectedFields"] = array();


$tdatafreee_work_records_by_term[".exportFields"] = array();
$tdatafreee_work_records_by_term[".exportFields"][] = "id";
$tdatafreee_work_records_by_term[".exportFields"][] = "term_type";
$tdatafreee_work_records_by_term[".exportFields"][] = "start_date";
$tdatafreee_work_records_by_term[".exportFields"][] = "end_date";
$tdatafreee_work_records_by_term[".exportFields"][] = "first_name";
$tdatafreee_work_records_by_term[".exportFields"][] = "dept_group_id";
$tdatafreee_work_records_by_term[".exportFields"][] = "total_work_mins";
$tdatafreee_work_records_by_term[".exportFields"][] = "total_sub_over_mins";
$tdatafreee_work_records_by_term[".exportFields"][] = "normal_work_mins";
$tdatafreee_work_records_by_term[".exportFields"][] = "overtime_work_mins";
$tdatafreee_work_records_by_term[".exportFields"][] = "holiday_work_mins";
$tdatafreee_work_records_by_term[".exportFields"][] = "latenight_work_mins";
$tdatafreee_work_records_by_term[".exportFields"][] = "num_absences";
$tdatafreee_work_records_by_term[".exportFields"][] = "num_paid_holidays";
$tdatafreee_work_records_by_term[".exportFields"][] = "num_paid_holidays_left";
$tdatafreee_work_records_by_term[".exportFields"][] = "lateness_mins";
$tdatafreee_work_records_by_term[".exportFields"][] = "early_leaving_mins";
$tdatafreee_work_records_by_term[".exportFields"][] = "employee_id";
$tdatafreee_work_records_by_term[".exportFields"][] = "user_id";
$tdatafreee_work_records_by_term[".exportFields"][] = "retire_date";
$tdatafreee_work_records_by_term[".exportFields"][] = "note";

$tdatafreee_work_records_by_term[".importFields"] = array();

$tdatafreee_work_records_by_term[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "freee_work_records_by_term";
	$fdata["Label"] = GetFieldLabel("freee_work_records_by_term","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`freee_work_records_by_term`.`id`";

	
	
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




	$tdatafreee_work_records_by_term["id"] = $fdata;
//	term_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "term_type";
	$fdata["GoodName"] = "term_type";
	$fdata["ownerTable"] = "freee_work_records_by_term";
	$fdata["Label"] = GetFieldLabel("freee_work_records_by_term","term_type");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "term_type";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`freee_work_records_by_term`.`term_type`";

	
	
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
	$edata["LookupValues"][] = "day";
	$edata["LookupValues"][] = "week";
	$edata["LookupValues"][] = "month";
	$edata["LookupValues"][] = "quarter";
	$edata["LookupValues"][] = "year";

	
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




	$tdatafreee_work_records_by_term["term_type"] = $fdata;
//	start_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "start_date";
	$fdata["GoodName"] = "start_date";
	$fdata["ownerTable"] = "freee_work_records_by_term";
	$fdata["Label"] = GetFieldLabel("freee_work_records_by_term","start_date");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "start_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`freee_work_records_by_term`.`start_date`";

	
	
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
		$fdata["defaultSearchOption"] = "Between";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdatafreee_work_records_by_term["start_date"] = $fdata;
//	end_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "end_date";
	$fdata["GoodName"] = "end_date";
	$fdata["ownerTable"] = "freee_work_records_by_term";
	$fdata["Label"] = GetFieldLabel("freee_work_records_by_term","end_date");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "end_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`freee_work_records_by_term`.`end_date`";

	
	
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




	$tdatafreee_work_records_by_term["end_date"] = $fdata;
//	normal_work_mins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "normal_work_mins";
	$fdata["GoodName"] = "normal_work_mins";
	$fdata["ownerTable"] = "freee_work_records_by_term";
	$fdata["Label"] = GetFieldLabel("freee_work_records_by_term","normal_work_mins");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "normal_work_mins";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`freee_work_records_by_term`.`normal_work_mins`";

	
	
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




	$tdatafreee_work_records_by_term["normal_work_mins"] = $fdata;
//	overtime_work_mins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "overtime_work_mins";
	$fdata["GoodName"] = "overtime_work_mins";
	$fdata["ownerTable"] = "freee_work_records_by_term";
	$fdata["Label"] = GetFieldLabel("freee_work_records_by_term","overtime_work_mins");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "overtime_work_mins";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`freee_work_records_by_term`.`overtime_work_mins`";

	
	
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




	$tdatafreee_work_records_by_term["overtime_work_mins"] = $fdata;
//	holiday_work_mins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "holiday_work_mins";
	$fdata["GoodName"] = "holiday_work_mins";
	$fdata["ownerTable"] = "freee_work_records_by_term";
	$fdata["Label"] = GetFieldLabel("freee_work_records_by_term","holiday_work_mins");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "holiday_work_mins";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`freee_work_records_by_term`.`holiday_work_mins`";

	
	
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




	$tdatafreee_work_records_by_term["holiday_work_mins"] = $fdata;
//	latenight_work_mins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "latenight_work_mins";
	$fdata["GoodName"] = "latenight_work_mins";
	$fdata["ownerTable"] = "freee_work_records_by_term";
	$fdata["Label"] = GetFieldLabel("freee_work_records_by_term","latenight_work_mins");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "latenight_work_mins";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`freee_work_records_by_term`.`latenight_work_mins`";

	
	
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




	$tdatafreee_work_records_by_term["latenight_work_mins"] = $fdata;
//	num_absences
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "num_absences";
	$fdata["GoodName"] = "num_absences";
	$fdata["ownerTable"] = "freee_work_records_by_term";
	$fdata["Label"] = GetFieldLabel("freee_work_records_by_term","num_absences");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "num_absences";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`freee_work_records_by_term`.`num_absences`";

	
	
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




	$tdatafreee_work_records_by_term["num_absences"] = $fdata;
//	num_paid_holidays
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "num_paid_holidays";
	$fdata["GoodName"] = "num_paid_holidays";
	$fdata["ownerTable"] = "freee_work_records_by_term";
	$fdata["Label"] = GetFieldLabel("freee_work_records_by_term","num_paid_holidays");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "num_paid_holidays";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`freee_work_records_by_term`.`num_paid_holidays`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
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




	$tdatafreee_work_records_by_term["num_paid_holidays"] = $fdata;
//	num_paid_holidays_left
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "num_paid_holidays_left";
	$fdata["GoodName"] = "num_paid_holidays_left";
	$fdata["ownerTable"] = "freee_work_records_by_term";
	$fdata["Label"] = GetFieldLabel("freee_work_records_by_term","num_paid_holidays_left");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "num_paid_holidays_left";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`freee_work_records_by_term`.`num_paid_holidays_left`";

	
	
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




	$tdatafreee_work_records_by_term["num_paid_holidays_left"] = $fdata;
//	lateness_mins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "lateness_mins";
	$fdata["GoodName"] = "lateness_mins";
	$fdata["ownerTable"] = "freee_work_records_by_term";
	$fdata["Label"] = GetFieldLabel("freee_work_records_by_term","lateness_mins");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "lateness_mins";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`freee_work_records_by_term`.`lateness_mins`";

	
	
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




	$tdatafreee_work_records_by_term["lateness_mins"] = $fdata;
//	early_leaving_mins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "early_leaving_mins";
	$fdata["GoodName"] = "early_leaving_mins";
	$fdata["ownerTable"] = "freee_work_records_by_term";
	$fdata["Label"] = GetFieldLabel("freee_work_records_by_term","early_leaving_mins");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "early_leaving_mins";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`freee_work_records_by_term`.`early_leaving_mins`";

	
	
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




	$tdatafreee_work_records_by_term["early_leaving_mins"] = $fdata;
//	employee_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "employee_id";
	$fdata["GoodName"] = "employee_id";
	$fdata["ownerTable"] = "freee_work_records_by_term";
	$fdata["Label"] = GetFieldLabel("freee_work_records_by_term","employee_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "employee_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`freee_work_records_by_term`.`employee_id`";

	
	
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




	$tdatafreee_work_records_by_term["employee_id"] = $fdata;
//	user_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "user_id";
	$fdata["GoodName"] = "user_id";
	$fdata["ownerTable"] = "freee_work_records_by_term";
	$fdata["Label"] = GetFieldLabel("freee_work_records_by_term","user_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "user_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`freee_work_records_by_term`.`user_id`";

	
	
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




	$tdatafreee_work_records_by_term["user_id"] = $fdata;
//	total_work_mins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "total_work_mins";
	$fdata["GoodName"] = "total_work_mins";
	$fdata["ownerTable"] = "freee_work_records_by_term";
	$fdata["Label"] = GetFieldLabel("freee_work_records_by_term","total_work_mins");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "total_work_mins";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`freee_work_records_by_term`.`total_work_mins`";

	
	
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




	$tdatafreee_work_records_by_term["total_work_mins"] = $fdata;
//	first_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "first_name";
	$fdata["GoodName"] = "first_name";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("freee_work_records_by_term","first_name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "first_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`users`.`first_name`";

	
	
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




	$tdatafreee_work_records_by_term["first_name"] = $fdata;
//	dept_group_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "dept_group_id";
	$fdata["GoodName"] = "dept_group_id";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("freee_work_records_by_term","dept_group_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "dept_group_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`users`.`dept_group_id`";

	
	
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
	$edata["LookupTable"] = "mst_dept_group";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "name";

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
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




	$tdatafreee_work_records_by_term["dept_group_id"] = $fdata;
//	total_sub_over_mins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "total_sub_over_mins";
	$fdata["GoodName"] = "total_sub_over_mins";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("freee_work_records_by_term","total_sub_over_mins");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "total_sub_over_mins";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`freee_work_records_by_term`.`total_work_mins` - `freee_work_records_by_term`.`overtime_work_mins`";

	
	
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




	$tdatafreee_work_records_by_term["total_sub_over_mins"] = $fdata;
//	retire_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "retire_date";
	$fdata["GoodName"] = "retire_date";
	$fdata["ownerTable"] = "freee_employees_details";
	$fdata["Label"] = GetFieldLabel("freee_work_records_by_term","retire_date");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "retire_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`freee_employees_details`.`retire_date`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
	



		$edata["IsRequired"] = true;

	
	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdatafreee_work_records_by_term["retire_date"] = $fdata;
//	note
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "note";
	$fdata["GoodName"] = "note";
	$fdata["ownerTable"] = "freee_work_records_by_term";
	$fdata["Label"] = GetFieldLabel("freee_work_records_by_term","note");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "note";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`freee_work_records_by_term`.`note`";

	
	
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
			$edata["EditParams"].= " maxlength=10000";

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




	$tdatafreee_work_records_by_term["note"] = $fdata;


$tables_data["freee_work_records_by_term"]=&$tdatafreee_work_records_by_term;
$field_labels["freee_work_records_by_term"] = &$fieldLabelsfreee_work_records_by_term;
$fieldToolTips["freee_work_records_by_term"] = &$fieldToolTipsfreee_work_records_by_term;
$placeHolders["freee_work_records_by_term"] = &$placeHoldersfreee_work_records_by_term;
$page_titles["freee_work_records_by_term"] = &$pageTitlesfreee_work_records_by_term;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["freee_work_records_by_term"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["freee_work_records_by_term"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_freee_work_records_by_term()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`freee_work_records_by_term`.`id`,  `freee_work_records_by_term`.`term_type`,  `freee_work_records_by_term`.`start_date`,  `freee_work_records_by_term`.`end_date`,  `freee_work_records_by_term`.`normal_work_mins`,  `freee_work_records_by_term`.`overtime_work_mins`,  `freee_work_records_by_term`.`holiday_work_mins`,  `freee_work_records_by_term`.`latenight_work_mins`,  `freee_work_records_by_term`.`num_absences`,  `freee_work_records_by_term`.`num_paid_holidays`,  `freee_work_records_by_term`.`num_paid_holidays_left`,  `freee_work_records_by_term`.`lateness_mins`,  `freee_work_records_by_term`.`early_leaving_mins`,  `freee_work_records_by_term`.`employee_id`,  `freee_work_records_by_term`.`user_id`,  `freee_work_records_by_term`.`total_work_mins`,  `users`.`first_name`,  `users`.`dept_group_id`,  `freee_work_records_by_term`.`total_work_mins` - `freee_work_records_by_term`.`overtime_work_mins` AS `total_sub_over_mins`,  `freee_employees_details`.`retire_date`,  `freee_work_records_by_term`.`note`";
$proto0["m_strFrom"] = "FROM `freee_work_records_by_term`  LEFT OUTER JOIN `users` ON `freee_work_records_by_term`.`user_id` = `users`.`user_id`  LEFT OUTER JOIN `freee_employees_details` ON `freee_work_records_by_term`.`employee_id` = `freee_employees_details`.`employee_id`";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY `freee_work_records_by_term`.`start_date` DESC";
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
	"m_strTable" => "freee_work_records_by_term",
	"m_srcTableName" => "freee_work_records_by_term"
));

$proto6["m_sql"] = "`freee_work_records_by_term`.`id`";
$proto6["m_srcTableName"] = "freee_work_records_by_term";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "term_type",
	"m_strTable" => "freee_work_records_by_term",
	"m_srcTableName" => "freee_work_records_by_term"
));

$proto8["m_sql"] = "`freee_work_records_by_term`.`term_type`";
$proto8["m_srcTableName"] = "freee_work_records_by_term";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "start_date",
	"m_strTable" => "freee_work_records_by_term",
	"m_srcTableName" => "freee_work_records_by_term"
));

$proto10["m_sql"] = "`freee_work_records_by_term`.`start_date`";
$proto10["m_srcTableName"] = "freee_work_records_by_term";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "end_date",
	"m_strTable" => "freee_work_records_by_term",
	"m_srcTableName" => "freee_work_records_by_term"
));

$proto12["m_sql"] = "`freee_work_records_by_term`.`end_date`";
$proto12["m_srcTableName"] = "freee_work_records_by_term";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "normal_work_mins",
	"m_strTable" => "freee_work_records_by_term",
	"m_srcTableName" => "freee_work_records_by_term"
));

$proto14["m_sql"] = "`freee_work_records_by_term`.`normal_work_mins`";
$proto14["m_srcTableName"] = "freee_work_records_by_term";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "overtime_work_mins",
	"m_strTable" => "freee_work_records_by_term",
	"m_srcTableName" => "freee_work_records_by_term"
));

$proto16["m_sql"] = "`freee_work_records_by_term`.`overtime_work_mins`";
$proto16["m_srcTableName"] = "freee_work_records_by_term";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "holiday_work_mins",
	"m_strTable" => "freee_work_records_by_term",
	"m_srcTableName" => "freee_work_records_by_term"
));

$proto18["m_sql"] = "`freee_work_records_by_term`.`holiday_work_mins`";
$proto18["m_srcTableName"] = "freee_work_records_by_term";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "latenight_work_mins",
	"m_strTable" => "freee_work_records_by_term",
	"m_srcTableName" => "freee_work_records_by_term"
));

$proto20["m_sql"] = "`freee_work_records_by_term`.`latenight_work_mins`";
$proto20["m_srcTableName"] = "freee_work_records_by_term";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "num_absences",
	"m_strTable" => "freee_work_records_by_term",
	"m_srcTableName" => "freee_work_records_by_term"
));

$proto22["m_sql"] = "`freee_work_records_by_term`.`num_absences`";
$proto22["m_srcTableName"] = "freee_work_records_by_term";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "num_paid_holidays",
	"m_strTable" => "freee_work_records_by_term",
	"m_srcTableName" => "freee_work_records_by_term"
));

$proto24["m_sql"] = "`freee_work_records_by_term`.`num_paid_holidays`";
$proto24["m_srcTableName"] = "freee_work_records_by_term";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "num_paid_holidays_left",
	"m_strTable" => "freee_work_records_by_term",
	"m_srcTableName" => "freee_work_records_by_term"
));

$proto26["m_sql"] = "`freee_work_records_by_term`.`num_paid_holidays_left`";
$proto26["m_srcTableName"] = "freee_work_records_by_term";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "lateness_mins",
	"m_strTable" => "freee_work_records_by_term",
	"m_srcTableName" => "freee_work_records_by_term"
));

$proto28["m_sql"] = "`freee_work_records_by_term`.`lateness_mins`";
$proto28["m_srcTableName"] = "freee_work_records_by_term";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "early_leaving_mins",
	"m_strTable" => "freee_work_records_by_term",
	"m_srcTableName" => "freee_work_records_by_term"
));

$proto30["m_sql"] = "`freee_work_records_by_term`.`early_leaving_mins`";
$proto30["m_srcTableName"] = "freee_work_records_by_term";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "employee_id",
	"m_strTable" => "freee_work_records_by_term",
	"m_srcTableName" => "freee_work_records_by_term"
));

$proto32["m_sql"] = "`freee_work_records_by_term`.`employee_id`";
$proto32["m_srcTableName"] = "freee_work_records_by_term";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "user_id",
	"m_strTable" => "freee_work_records_by_term",
	"m_srcTableName" => "freee_work_records_by_term"
));

$proto34["m_sql"] = "`freee_work_records_by_term`.`user_id`";
$proto34["m_srcTableName"] = "freee_work_records_by_term";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "total_work_mins",
	"m_strTable" => "freee_work_records_by_term",
	"m_srcTableName" => "freee_work_records_by_term"
));

$proto36["m_sql"] = "`freee_work_records_by_term`.`total_work_mins`";
$proto36["m_srcTableName"] = "freee_work_records_by_term";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "first_name",
	"m_strTable" => "users",
	"m_srcTableName" => "freee_work_records_by_term"
));

$proto38["m_sql"] = "`users`.`first_name`";
$proto38["m_srcTableName"] = "freee_work_records_by_term";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "dept_group_id",
	"m_strTable" => "users",
	"m_srcTableName" => "freee_work_records_by_term"
));

$proto40["m_sql"] = "`users`.`dept_group_id`";
$proto40["m_srcTableName"] = "freee_work_records_by_term";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "`freee_work_records_by_term`.`total_work_mins` - `freee_work_records_by_term`.`overtime_work_mins`"
));

$proto42["m_sql"] = "`freee_work_records_by_term`.`total_work_mins` - `freee_work_records_by_term`.`overtime_work_mins`";
$proto42["m_srcTableName"] = "freee_work_records_by_term";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "total_sub_over_mins";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "retire_date",
	"m_strTable" => "freee_employees_details",
	"m_srcTableName" => "freee_work_records_by_term"
));

$proto44["m_sql"] = "`freee_employees_details`.`retire_date`";
$proto44["m_srcTableName"] = "freee_work_records_by_term";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "note",
	"m_strTable" => "freee_work_records_by_term",
	"m_srcTableName" => "freee_work_records_by_term"
));

$proto46["m_sql"] = "`freee_work_records_by_term`.`note`";
$proto46["m_srcTableName"] = "freee_work_records_by_term";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto48=array();
$proto48["m_link"] = "SQLL_MAIN";
			$proto49=array();
$proto49["m_strName"] = "freee_work_records_by_term";
$proto49["m_srcTableName"] = "freee_work_records_by_term";
$proto49["m_columns"] = array();
$proto49["m_columns"][] = "id";
$proto49["m_columns"][] = "term_type";
$proto49["m_columns"][] = "start_date";
$proto49["m_columns"][] = "end_date";
$proto49["m_columns"][] = "normal_work_mins";
$proto49["m_columns"][] = "overtime_work_mins";
$proto49["m_columns"][] = "holiday_work_mins";
$proto49["m_columns"][] = "latenight_work_mins";
$proto49["m_columns"][] = "num_absences";
$proto49["m_columns"][] = "num_paid_holidays";
$proto49["m_columns"][] = "num_paid_holidays_left";
$proto49["m_columns"][] = "lateness_mins";
$proto49["m_columns"][] = "early_leaving_mins";
$proto49["m_columns"][] = "created_at";
$proto49["m_columns"][] = "updated_at";
$proto49["m_columns"][] = "employee_id";
$proto49["m_columns"][] = "user_id";
$proto49["m_columns"][] = "total_work_mins";
$proto49["m_columns"][] = "break_time";
$proto49["m_columns"][] = "note";
$obj = new SQLTable($proto49);

$proto48["m_table"] = $obj;
$proto48["m_sql"] = "`freee_work_records_by_term`";
$proto48["m_alias"] = "";
$proto48["m_srcTableName"] = "freee_work_records_by_term";
$proto50=array();
$proto50["m_sql"] = "";
$proto50["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto50["m_column"]=$obj;
$proto50["m_contained"] = array();
$proto50["m_strCase"] = "";
$proto50["m_havingmode"] = false;
$proto50["m_inBrackets"] = false;
$proto50["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto50);

$proto48["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto48);

$proto0["m_fromlist"][]=$obj;
												$proto52=array();
$proto52["m_link"] = "SQLL_LEFTJOIN";
			$proto53=array();
$proto53["m_strName"] = "users";
$proto53["m_srcTableName"] = "freee_work_records_by_term";
$proto53["m_columns"] = array();
$proto53["m_columns"][] = "user_id";
$proto53["m_columns"][] = "user_login";
$proto53["m_columns"][] = "user_password";
$proto53["m_columns"][] = "first_name";
$proto53["m_columns"][] = "last_name";
$proto53["m_columns"][] = "title";
$proto53["m_columns"][] = "group_id";
$proto53["m_columns"][] = "english_name";
$proto53["m_columns"][] = "phone_home";
$proto53["m_columns"][] = "phone_work";
$proto53["m_columns"][] = "phone_day";
$proto53["m_columns"][] = "phone_cell";
$proto53["m_columns"][] = "phone_evening";
$proto53["m_columns"][] = "fax";
$proto53["m_columns"][] = "email";
$proto53["m_columns"][] = "notes";
$proto53["m_columns"][] = "card_number";
$proto53["m_columns"][] = "card_expire_date";
$proto53["m_columns"][] = "country_id";
$proto53["m_columns"][] = "state_id";
$proto53["m_columns"][] = "city";
$proto53["m_columns"][] = "zip";
$proto53["m_columns"][] = "address1";
$proto53["m_columns"][] = "address2";
$proto53["m_columns"][] = "address3";
$proto53["m_columns"][] = "date_add";
$proto53["m_columns"][] = "date_last_login";
$proto53["m_columns"][] = "ip_add";
$proto53["m_columns"][] = "ip_update";
$proto53["m_columns"][] = "language_id";
$proto53["m_columns"][] = "image_url";
$proto53["m_columns"][] = "age_id";
$proto53["m_columns"][] = "gender_id";
$proto53["m_columns"][] = "education_id";
$proto53["m_columns"][] = "income_id";
$proto53["m_columns"][] = "user_SSN";
$proto53["m_columns"][] = "total_purchase";
$proto53["m_columns"][] = "tatal_sales";
$proto53["m_columns"][] = "template";
$proto53["m_columns"][] = "cw_task_id";
$proto53["m_columns"][] = "cw_TO_id";
$proto53["m_columns"][] = "label_print_now";
$proto53["m_columns"][] = "dept_group_id";
$obj = new SQLTable($proto53);

$proto52["m_table"] = $obj;
$proto52["m_sql"] = "LEFT OUTER JOIN `users` ON `freee_work_records_by_term`.`user_id` = `users`.`user_id`";
$proto52["m_alias"] = "";
$proto52["m_srcTableName"] = "freee_work_records_by_term";
$proto54=array();
$proto54["m_sql"] = "`freee_work_records_by_term`.`user_id` = `users`.`user_id`";
$proto54["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "user_id",
	"m_strTable" => "freee_work_records_by_term",
	"m_srcTableName" => "freee_work_records_by_term"
));

$proto54["m_column"]=$obj;
$proto54["m_contained"] = array();
$proto54["m_strCase"] = "= `users`.`user_id`";
$proto54["m_havingmode"] = false;
$proto54["m_inBrackets"] = false;
$proto54["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto54);

$proto52["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto52);

$proto0["m_fromlist"][]=$obj;
												$proto56=array();
$proto56["m_link"] = "SQLL_LEFTJOIN";
			$proto57=array();
$proto57["m_strName"] = "freee_employees_details";
$proto57["m_srcTableName"] = "freee_work_records_by_term";
$proto57["m_columns"] = array();
$proto57["m_columns"][] = "employee_id";
$proto57["m_columns"][] = "name";
$proto57["m_columns"][] = "created_at";
$proto57["m_columns"][] = "updated_at";
$proto57["m_columns"][] = "birth_date";
$proto57["m_columns"][] = "user_id";
$proto57["m_columns"][] = "retire_date";
$obj = new SQLTable($proto57);

$proto56["m_table"] = $obj;
$proto56["m_sql"] = "LEFT OUTER JOIN `freee_employees_details` ON `freee_work_records_by_term`.`employee_id` = `freee_employees_details`.`employee_id`";
$proto56["m_alias"] = "";
$proto56["m_srcTableName"] = "freee_work_records_by_term";
$proto58=array();
$proto58["m_sql"] = "`freee_work_records_by_term`.`employee_id` = `freee_employees_details`.`employee_id`";
$proto58["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "employee_id",
	"m_strTable" => "freee_work_records_by_term",
	"m_srcTableName" => "freee_work_records_by_term"
));

$proto58["m_column"]=$obj;
$proto58["m_contained"] = array();
$proto58["m_strCase"] = "= `freee_employees_details`.`employee_id`";
$proto58["m_havingmode"] = false;
$proto58["m_inBrackets"] = false;
$proto58["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto58);

$proto56["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto56);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto60=array();
						$obj = new SQLField(array(
	"m_strName" => "start_date",
	"m_strTable" => "freee_work_records_by_term",
	"m_srcTableName" => "freee_work_records_by_term"
));

$proto60["m_column"]=$obj;
$proto60["m_bAsc"] = 0;
$proto60["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto60);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="freee_work_records_by_term";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_freee_work_records_by_term = createSqlQuery_freee_work_records_by_term();


	
		;

																					

$tdatafreee_work_records_by_term[".sqlquery"] = $queryData_freee_work_records_by_term;

$tableEvents["freee_work_records_by_term"] = new eventsBase;
$tdatafreee_work_records_by_term[".hasEvents"] = false;

?>