<?php
require_once(getabspath("classes/cipherer.php"));




$tdatafreee_work_records = array();
	$tdatafreee_work_records[".truncateText"] = true;
	$tdatafreee_work_records[".NumberOfChars"] = 80;
	$tdatafreee_work_records[".ShortName"] = "freee_work_records";
	$tdatafreee_work_records[".OwnerID"] = "";
	$tdatafreee_work_records[".OriginalTable"] = "freee_work_records";

//	field labels
$fieldLabelsfreee_work_records = array();
$fieldToolTipsfreee_work_records = array();
$pageTitlesfreee_work_records = array();
$placeHoldersfreee_work_records = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsfreee_work_records["Japanese"] = array();
	$fieldToolTipsfreee_work_records["Japanese"] = array();
	$placeHoldersfreee_work_records["Japanese"] = array();
	$pageTitlesfreee_work_records["Japanese"] = array();
	$fieldLabelsfreee_work_records["Japanese"]["id"] = "Id";
	$fieldToolTipsfreee_work_records["Japanese"]["id"] = "";
	$placeHoldersfreee_work_records["Japanese"]["id"] = "";
	$fieldLabelsfreee_work_records["Japanese"]["employee_id"] = "従業員Id";
	$fieldToolTipsfreee_work_records["Japanese"]["employee_id"] = "";
	$placeHoldersfreee_work_records["Japanese"]["employee_id"] = "";
	$fieldLabelsfreee_work_records["Japanese"]["updated_at"] = "Updated At";
	$fieldToolTipsfreee_work_records["Japanese"]["updated_at"] = "";
	$placeHoldersfreee_work_records["Japanese"]["updated_at"] = "";
	$fieldLabelsfreee_work_records["Japanese"]["created_at"] = "Created At";
	$fieldToolTipsfreee_work_records["Japanese"]["created_at"] = "";
	$placeHoldersfreee_work_records["Japanese"]["created_at"] = "";
	$fieldLabelsfreee_work_records["Japanese"]["clock_in_at"] = "出勤時間";
	$fieldToolTipsfreee_work_records["Japanese"]["clock_in_at"] = "";
	$placeHoldersfreee_work_records["Japanese"]["clock_in_at"] = "";
	$fieldLabelsfreee_work_records["Japanese"]["clock_out_at"] = "退勤時間";
	$fieldToolTipsfreee_work_records["Japanese"]["clock_out_at"] = "";
	$placeHoldersfreee_work_records["Japanese"]["clock_out_at"] = "";
	$fieldLabelsfreee_work_records["Japanese"]["date"] = "対象日付";
	$fieldToolTipsfreee_work_records["Japanese"]["date"] = "";
	$placeHoldersfreee_work_records["Japanese"]["date"] = "";
	$fieldLabelsfreee_work_records["Japanese"]["day_pattern"] = "勤務パターン";
	$fieldToolTipsfreee_work_records["Japanese"]["day_pattern"] = "";
	$placeHoldersfreee_work_records["Japanese"]["day_pattern"] = "";
	$fieldLabelsfreee_work_records["Japanese"]["schedule_pattern"] = "スケジュールパターン";
	$fieldToolTipsfreee_work_records["Japanese"]["schedule_pattern"] = "";
	$placeHoldersfreee_work_records["Japanese"]["schedule_pattern"] = "";
	$fieldLabelsfreee_work_records["Japanese"]["early_leaving_mins"] = "早退分の時間（分単位）";
	$fieldToolTipsfreee_work_records["Japanese"]["early_leaving_mins"] = "";
	$placeHoldersfreee_work_records["Japanese"]["early_leaving_mins"] = "";
	$fieldLabelsfreee_work_records["Japanese"]["is_absence"] = "欠勤かどうか";
	$fieldToolTipsfreee_work_records["Japanese"]["is_absence"] = "";
	$placeHoldersfreee_work_records["Japanese"]["is_absence"] = "";
	$fieldLabelsfreee_work_records["Japanese"]["is_editable"] = "勤怠データが編集可能かどうか";
	$fieldToolTipsfreee_work_records["Japanese"]["is_editable"] = "";
	$placeHoldersfreee_work_records["Japanese"]["is_editable"] = "";
	$fieldLabelsfreee_work_records["Japanese"]["lateness_mins"] = "遅刻分の時間（分単位）";
	$fieldToolTipsfreee_work_records["Japanese"]["lateness_mins"] = "";
	$placeHoldersfreee_work_records["Japanese"]["lateness_mins"] = "";
	$fieldLabelsfreee_work_records["Japanese"]["normal_work_clock_in_at"] = "所定労働開始時刻";
	$fieldToolTipsfreee_work_records["Japanese"]["normal_work_clock_in_at"] = "";
	$placeHoldersfreee_work_records["Japanese"]["normal_work_clock_in_at"] = "";
	$fieldLabelsfreee_work_records["Japanese"]["normal_work_clock_out_at"] = "所定労働終了時刻";
	$fieldToolTipsfreee_work_records["Japanese"]["normal_work_clock_out_at"] = "";
	$placeHoldersfreee_work_records["Japanese"]["normal_work_clock_out_at"] = "";
	$fieldLabelsfreee_work_records["Japanese"]["normal_work_mins"] = "所定労働時間";
	$fieldToolTipsfreee_work_records["Japanese"]["normal_work_mins"] = "";
	$placeHoldersfreee_work_records["Japanese"]["normal_work_mins"] = "";
	$fieldLabelsfreee_work_records["Japanese"]["normal_work_mins_by_paid_holiday"] = "有給によって計上される所定労働時間（分）";
	$fieldToolTipsfreee_work_records["Japanese"]["normal_work_mins_by_paid_holiday"] = "";
	$placeHoldersfreee_work_records["Japanese"]["normal_work_mins_by_paid_holiday"] = "";
	$fieldLabelsfreee_work_records["Japanese"]["note"] = "勤怠メモ";
	$fieldToolTipsfreee_work_records["Japanese"]["note"] = "";
	$placeHoldersfreee_work_records["Japanese"]["note"] = "";
	$fieldLabelsfreee_work_records["Japanese"]["paid_holiday"] = "この日に対する有給取得日数。半休の場合は0.5";
	$fieldToolTipsfreee_work_records["Japanese"]["paid_holiday"] = "";
	$placeHoldersfreee_work_records["Japanese"]["paid_holiday"] = "";
	$fieldLabelsfreee_work_records["Japanese"]["hourly_paid_holiday_mins"] = "時間休を利用した時間（分単位）";
	$fieldToolTipsfreee_work_records["Japanese"]["hourly_paid_holiday_mins"] = "";
	$placeHoldersfreee_work_records["Japanese"]["hourly_paid_holiday_mins"] = "";
	$fieldLabelsfreee_work_records["Japanese"]["use_attendance_deduction"] = "欠勤・遅刻・早退を控除対象時間に算入するかどうか";
	$fieldToolTipsfreee_work_records["Japanese"]["use_attendance_deduction"] = "";
	$placeHoldersfreee_work_records["Japanese"]["use_attendance_deduction"] = "";
	$fieldLabelsfreee_work_records["Japanese"]["use_default_work_pattern"] = "デフォルトの勤務時間設定を使っているかどうか";
	$fieldToolTipsfreee_work_records["Japanese"]["use_default_work_pattern"] = "";
	$placeHoldersfreee_work_records["Japanese"]["use_default_work_pattern"] = "";
	$fieldLabelsfreee_work_records["Japanese"]["total_overtime_work_mins"] = "時間外労働時間（分）";
	$fieldToolTipsfreee_work_records["Japanese"]["total_overtime_work_mins"] = "";
	$placeHoldersfreee_work_records["Japanese"]["total_overtime_work_mins"] = "";
	$fieldLabelsfreee_work_records["Japanese"]["total_holiday_work_mins"] = "休日労働時間（分）";
	$fieldToolTipsfreee_work_records["Japanese"]["total_holiday_work_mins"] = "";
	$placeHoldersfreee_work_records["Japanese"]["total_holiday_work_mins"] = "";
	$fieldLabelsfreee_work_records["Japanese"]["total_latenight_work_mins"] = "深夜労働時間（分）";
	$fieldToolTipsfreee_work_records["Japanese"]["total_latenight_work_mins"] = "";
	$placeHoldersfreee_work_records["Japanese"]["total_latenight_work_mins"] = "";
	if (count($fieldToolTipsfreee_work_records["Japanese"]))
		$tdatafreee_work_records[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsfreee_work_records[""] = array();
	$fieldToolTipsfreee_work_records[""] = array();
	$placeHoldersfreee_work_records[""] = array();
	$pageTitlesfreee_work_records[""] = array();
	$fieldLabelsfreee_work_records[""]["id"] = "Id";
	$fieldToolTipsfreee_work_records[""]["id"] = "";
	$placeHoldersfreee_work_records[""]["id"] = "";
	$fieldLabelsfreee_work_records[""]["employee_id"] = "Employee Id";
	$fieldToolTipsfreee_work_records[""]["employee_id"] = "";
	$placeHoldersfreee_work_records[""]["employee_id"] = "";
	$fieldLabelsfreee_work_records[""]["updated_at"] = "Updated At";
	$fieldToolTipsfreee_work_records[""]["updated_at"] = "";
	$placeHoldersfreee_work_records[""]["updated_at"] = "";
	$fieldLabelsfreee_work_records[""]["created_at"] = "Created At";
	$fieldToolTipsfreee_work_records[""]["created_at"] = "";
	$placeHoldersfreee_work_records[""]["created_at"] = "";
	$fieldLabelsfreee_work_records[""]["clock_in_at"] = "Clock In At";
	$fieldToolTipsfreee_work_records[""]["clock_in_at"] = "";
	$placeHoldersfreee_work_records[""]["clock_in_at"] = "";
	$fieldLabelsfreee_work_records[""]["clock_out_at"] = "Clock Out At";
	$fieldToolTipsfreee_work_records[""]["clock_out_at"] = "";
	$placeHoldersfreee_work_records[""]["clock_out_at"] = "";
	$fieldLabelsfreee_work_records[""]["date"] = "Date";
	$fieldToolTipsfreee_work_records[""]["date"] = "";
	$placeHoldersfreee_work_records[""]["date"] = "";
	$fieldLabelsfreee_work_records[""]["day_pattern"] = "Day Pattern";
	$fieldToolTipsfreee_work_records[""]["day_pattern"] = "";
	$placeHoldersfreee_work_records[""]["day_pattern"] = "";
	$fieldLabelsfreee_work_records[""]["schedule_pattern"] = "Schedule Pattern";
	$fieldToolTipsfreee_work_records[""]["schedule_pattern"] = "";
	$placeHoldersfreee_work_records[""]["schedule_pattern"] = "";
	$fieldLabelsfreee_work_records[""]["early_leaving_mins"] = "Early Leaving Mins";
	$fieldToolTipsfreee_work_records[""]["early_leaving_mins"] = "";
	$placeHoldersfreee_work_records[""]["early_leaving_mins"] = "";
	$fieldLabelsfreee_work_records[""]["is_absence"] = "Is Absence";
	$fieldToolTipsfreee_work_records[""]["is_absence"] = "";
	$placeHoldersfreee_work_records[""]["is_absence"] = "";
	$fieldLabelsfreee_work_records[""]["is_editable"] = "Is Editable";
	$fieldToolTipsfreee_work_records[""]["is_editable"] = "";
	$placeHoldersfreee_work_records[""]["is_editable"] = "";
	$fieldLabelsfreee_work_records[""]["lateness_mins"] = "Lateness Mins";
	$fieldToolTipsfreee_work_records[""]["lateness_mins"] = "";
	$placeHoldersfreee_work_records[""]["lateness_mins"] = "";
	$fieldLabelsfreee_work_records[""]["normal_work_clock_in_at"] = "Normal Work Clock In At";
	$fieldToolTipsfreee_work_records[""]["normal_work_clock_in_at"] = "";
	$placeHoldersfreee_work_records[""]["normal_work_clock_in_at"] = "";
	$fieldLabelsfreee_work_records[""]["normal_work_clock_out_at"] = "Normal Work Clock Out At";
	$fieldToolTipsfreee_work_records[""]["normal_work_clock_out_at"] = "";
	$placeHoldersfreee_work_records[""]["normal_work_clock_out_at"] = "";
	$fieldLabelsfreee_work_records[""]["normal_work_mins"] = "Normal Work Mins";
	$fieldToolTipsfreee_work_records[""]["normal_work_mins"] = "";
	$placeHoldersfreee_work_records[""]["normal_work_mins"] = "";
	$fieldLabelsfreee_work_records[""]["normal_work_mins_by_paid_holiday"] = "Normal Work Mins By Paid Holiday";
	$fieldToolTipsfreee_work_records[""]["normal_work_mins_by_paid_holiday"] = "";
	$placeHoldersfreee_work_records[""]["normal_work_mins_by_paid_holiday"] = "";
	$fieldLabelsfreee_work_records[""]["note"] = "Note";
	$fieldToolTipsfreee_work_records[""]["note"] = "";
	$placeHoldersfreee_work_records[""]["note"] = "";
	$fieldLabelsfreee_work_records[""]["paid_holiday"] = "Paid Holiday";
	$fieldToolTipsfreee_work_records[""]["paid_holiday"] = "";
	$placeHoldersfreee_work_records[""]["paid_holiday"] = "";
	$fieldLabelsfreee_work_records[""]["hourly_paid_holiday_mins"] = "Hourly Paid Holiday Mins";
	$fieldToolTipsfreee_work_records[""]["hourly_paid_holiday_mins"] = "";
	$placeHoldersfreee_work_records[""]["hourly_paid_holiday_mins"] = "";
	$fieldLabelsfreee_work_records[""]["use_attendance_deduction"] = "Use Attendance Deduction";
	$fieldToolTipsfreee_work_records[""]["use_attendance_deduction"] = "";
	$placeHoldersfreee_work_records[""]["use_attendance_deduction"] = "";
	$fieldLabelsfreee_work_records[""]["use_default_work_pattern"] = "Use Default Work Pattern";
	$fieldToolTipsfreee_work_records[""]["use_default_work_pattern"] = "";
	$placeHoldersfreee_work_records[""]["use_default_work_pattern"] = "";
	$fieldLabelsfreee_work_records[""]["total_overtime_work_mins"] = "Total Overtime Work Mins";
	$fieldToolTipsfreee_work_records[""]["total_overtime_work_mins"] = "";
	$placeHoldersfreee_work_records[""]["total_overtime_work_mins"] = "";
	$fieldLabelsfreee_work_records[""]["total_holiday_work_mins"] = "Total Holiday Work Mins";
	$fieldToolTipsfreee_work_records[""]["total_holiday_work_mins"] = "";
	$placeHoldersfreee_work_records[""]["total_holiday_work_mins"] = "";
	$fieldLabelsfreee_work_records[""]["total_latenight_work_mins"] = "Total Latenight Work Mins";
	$fieldToolTipsfreee_work_records[""]["total_latenight_work_mins"] = "";
	$placeHoldersfreee_work_records[""]["total_latenight_work_mins"] = "";
	if (count($fieldToolTipsfreee_work_records[""]))
		$tdatafreee_work_records[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsfreee_work_records["English"] = array();
	$fieldToolTipsfreee_work_records["English"] = array();
	$placeHoldersfreee_work_records["English"] = array();
	$pageTitlesfreee_work_records["English"] = array();
	$fieldLabelsfreee_work_records["English"]["id"] = "Id";
	$fieldToolTipsfreee_work_records["English"]["id"] = "";
	$placeHoldersfreee_work_records["English"]["id"] = "";
	$fieldLabelsfreee_work_records["English"]["employee_id"] = "Employee Id";
	$fieldToolTipsfreee_work_records["English"]["employee_id"] = "";
	$placeHoldersfreee_work_records["English"]["employee_id"] = "";
	$fieldLabelsfreee_work_records["English"]["updated_at"] = "Updated At";
	$fieldToolTipsfreee_work_records["English"]["updated_at"] = "";
	$placeHoldersfreee_work_records["English"]["updated_at"] = "";
	$fieldLabelsfreee_work_records["English"]["created_at"] = "Created At";
	$fieldToolTipsfreee_work_records["English"]["created_at"] = "";
	$placeHoldersfreee_work_records["English"]["created_at"] = "";
	$fieldLabelsfreee_work_records["English"]["clock_in_at"] = "Clock In At";
	$fieldToolTipsfreee_work_records["English"]["clock_in_at"] = "";
	$placeHoldersfreee_work_records["English"]["clock_in_at"] = "";
	$fieldLabelsfreee_work_records["English"]["clock_out_at"] = "Clock Out At";
	$fieldToolTipsfreee_work_records["English"]["clock_out_at"] = "";
	$placeHoldersfreee_work_records["English"]["clock_out_at"] = "";
	$fieldLabelsfreee_work_records["English"]["date"] = "Date";
	$fieldToolTipsfreee_work_records["English"]["date"] = "";
	$placeHoldersfreee_work_records["English"]["date"] = "";
	$fieldLabelsfreee_work_records["English"]["day_pattern"] = "Day Pattern";
	$fieldToolTipsfreee_work_records["English"]["day_pattern"] = "";
	$placeHoldersfreee_work_records["English"]["day_pattern"] = "";
	$fieldLabelsfreee_work_records["English"]["schedule_pattern"] = "Schedule Pattern";
	$fieldToolTipsfreee_work_records["English"]["schedule_pattern"] = "";
	$placeHoldersfreee_work_records["English"]["schedule_pattern"] = "";
	$fieldLabelsfreee_work_records["English"]["early_leaving_mins"] = "Early Leaving Mins";
	$fieldToolTipsfreee_work_records["English"]["early_leaving_mins"] = "";
	$placeHoldersfreee_work_records["English"]["early_leaving_mins"] = "";
	$fieldLabelsfreee_work_records["English"]["is_absence"] = "Is Absence";
	$fieldToolTipsfreee_work_records["English"]["is_absence"] = "";
	$placeHoldersfreee_work_records["English"]["is_absence"] = "";
	$fieldLabelsfreee_work_records["English"]["is_editable"] = "Is Editable";
	$fieldToolTipsfreee_work_records["English"]["is_editable"] = "";
	$placeHoldersfreee_work_records["English"]["is_editable"] = "";
	$fieldLabelsfreee_work_records["English"]["lateness_mins"] = "Lateness Mins";
	$fieldToolTipsfreee_work_records["English"]["lateness_mins"] = "";
	$placeHoldersfreee_work_records["English"]["lateness_mins"] = "";
	$fieldLabelsfreee_work_records["English"]["normal_work_clock_in_at"] = "Normal Work Clock In At";
	$fieldToolTipsfreee_work_records["English"]["normal_work_clock_in_at"] = "";
	$placeHoldersfreee_work_records["English"]["normal_work_clock_in_at"] = "";
	$fieldLabelsfreee_work_records["English"]["normal_work_clock_out_at"] = "Normal Work Clock Out At";
	$fieldToolTipsfreee_work_records["English"]["normal_work_clock_out_at"] = "";
	$placeHoldersfreee_work_records["English"]["normal_work_clock_out_at"] = "";
	$fieldLabelsfreee_work_records["English"]["normal_work_mins"] = "Normal Work Mins";
	$fieldToolTipsfreee_work_records["English"]["normal_work_mins"] = "";
	$placeHoldersfreee_work_records["English"]["normal_work_mins"] = "";
	$fieldLabelsfreee_work_records["English"]["normal_work_mins_by_paid_holiday"] = "Normal Work Mins By Paid Holiday";
	$fieldToolTipsfreee_work_records["English"]["normal_work_mins_by_paid_holiday"] = "";
	$placeHoldersfreee_work_records["English"]["normal_work_mins_by_paid_holiday"] = "";
	$fieldLabelsfreee_work_records["English"]["note"] = "Note";
	$fieldToolTipsfreee_work_records["English"]["note"] = "";
	$placeHoldersfreee_work_records["English"]["note"] = "";
	$fieldLabelsfreee_work_records["English"]["paid_holiday"] = "Paid Holiday";
	$fieldToolTipsfreee_work_records["English"]["paid_holiday"] = "";
	$placeHoldersfreee_work_records["English"]["paid_holiday"] = "";
	$fieldLabelsfreee_work_records["English"]["hourly_paid_holiday_mins"] = "Hourly Paid Holiday Mins";
	$fieldToolTipsfreee_work_records["English"]["hourly_paid_holiday_mins"] = "";
	$placeHoldersfreee_work_records["English"]["hourly_paid_holiday_mins"] = "";
	$fieldLabelsfreee_work_records["English"]["use_attendance_deduction"] = "Use Attendance Deduction";
	$fieldToolTipsfreee_work_records["English"]["use_attendance_deduction"] = "";
	$placeHoldersfreee_work_records["English"]["use_attendance_deduction"] = "";
	$fieldLabelsfreee_work_records["English"]["use_default_work_pattern"] = "Use Default Work Pattern";
	$fieldToolTipsfreee_work_records["English"]["use_default_work_pattern"] = "";
	$placeHoldersfreee_work_records["English"]["use_default_work_pattern"] = "";
	$fieldLabelsfreee_work_records["English"]["total_overtime_work_mins"] = "Total Overtime Work Mins";
	$fieldToolTipsfreee_work_records["English"]["total_overtime_work_mins"] = "";
	$placeHoldersfreee_work_records["English"]["total_overtime_work_mins"] = "";
	$fieldLabelsfreee_work_records["English"]["total_holiday_work_mins"] = "Total Holiday Work Mins";
	$fieldToolTipsfreee_work_records["English"]["total_holiday_work_mins"] = "";
	$placeHoldersfreee_work_records["English"]["total_holiday_work_mins"] = "";
	$fieldLabelsfreee_work_records["English"]["total_latenight_work_mins"] = "Total Latenight Work Mins";
	$fieldToolTipsfreee_work_records["English"]["total_latenight_work_mins"] = "";
	$placeHoldersfreee_work_records["English"]["total_latenight_work_mins"] = "";
	if (count($fieldToolTipsfreee_work_records["English"]))
		$tdatafreee_work_records[".isUseToolTips"] = true;
}


	$tdatafreee_work_records[".NCSearch"] = true;



$tdatafreee_work_records[".shortTableName"] = "freee_work_records";
$tdatafreee_work_records[".nSecOptions"] = 0;
$tdatafreee_work_records[".recsPerRowPrint"] = 1;
$tdatafreee_work_records[".mainTableOwnerID"] = "";
$tdatafreee_work_records[".moveNext"] = 1;
$tdatafreee_work_records[".entityType"] = 0;

$tdatafreee_work_records[".strOriginalTableName"] = "freee_work_records";

	



$tdatafreee_work_records[".showAddInPopup"] = false;

$tdatafreee_work_records[".showEditInPopup"] = false;

$tdatafreee_work_records[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatafreee_work_records[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatafreee_work_records[".fieldsForRegister"] = array();

$tdatafreee_work_records[".listAjax"] = false;

	$tdatafreee_work_records[".audit"] = false;

	$tdatafreee_work_records[".locking"] = false;



$tdatafreee_work_records[".list"] = true;



$tdatafreee_work_records[".reorderRecordsByHeader"] = true;





$tdatafreee_work_records[".exportTo"] = true;



$tdatafreee_work_records[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatafreee_work_records[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatafreee_work_records[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatafreee_work_records[".searchSaving"] = false;
//

$tdatafreee_work_records[".showSearchPanel"] = true;
		$tdatafreee_work_records[".flexibleSearch"] = true;

$tdatafreee_work_records[".isUseAjaxSuggest"] = true;

$tdatafreee_work_records[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatafreee_work_records[".ajaxCodeSnippetAdded"] = false;

$tdatafreee_work_records[".buttonsAdded"] = false;

$tdatafreee_work_records[".addPageEvents"] = false;

// use timepicker for search panel
$tdatafreee_work_records[".isUseTimeForSearch"] = false;





$tdatafreee_work_records[".allSearchFields"] = array();
$tdatafreee_work_records[".filterFields"] = array();
$tdatafreee_work_records[".requiredSearchFields"] = array();

$tdatafreee_work_records[".allSearchFields"][] = "id";
	$tdatafreee_work_records[".allSearchFields"][] = "employee_id";
	$tdatafreee_work_records[".allSearchFields"][] = "clock_in_at";
	$tdatafreee_work_records[".allSearchFields"][] = "clock_out_at";
	$tdatafreee_work_records[".allSearchFields"][] = "date";
	$tdatafreee_work_records[".allSearchFields"][] = "day_pattern";
	$tdatafreee_work_records[".allSearchFields"][] = "schedule_pattern";
	$tdatafreee_work_records[".allSearchFields"][] = "early_leaving_mins";
	$tdatafreee_work_records[".allSearchFields"][] = "is_absence";
	$tdatafreee_work_records[".allSearchFields"][] = "is_editable";
	$tdatafreee_work_records[".allSearchFields"][] = "lateness_mins";
	$tdatafreee_work_records[".allSearchFields"][] = "normal_work_clock_in_at";
	$tdatafreee_work_records[".allSearchFields"][] = "normal_work_clock_out_at";
	$tdatafreee_work_records[".allSearchFields"][] = "normal_work_mins";
	$tdatafreee_work_records[".allSearchFields"][] = "normal_work_mins_by_paid_holiday";
	$tdatafreee_work_records[".allSearchFields"][] = "note";
	$tdatafreee_work_records[".allSearchFields"][] = "paid_holiday";
	$tdatafreee_work_records[".allSearchFields"][] = "hourly_paid_holiday_mins";
	$tdatafreee_work_records[".allSearchFields"][] = "use_attendance_deduction";
	$tdatafreee_work_records[".allSearchFields"][] = "use_default_work_pattern";
	$tdatafreee_work_records[".allSearchFields"][] = "total_overtime_work_mins";
	$tdatafreee_work_records[".allSearchFields"][] = "total_holiday_work_mins";
	$tdatafreee_work_records[".allSearchFields"][] = "total_latenight_work_mins";
	

$tdatafreee_work_records[".googleLikeFields"] = array();
$tdatafreee_work_records[".googleLikeFields"][] = "id";
$tdatafreee_work_records[".googleLikeFields"][] = "employee_id";
$tdatafreee_work_records[".googleLikeFields"][] = "updated_at";
$tdatafreee_work_records[".googleLikeFields"][] = "created_at";
$tdatafreee_work_records[".googleLikeFields"][] = "clock_in_at";
$tdatafreee_work_records[".googleLikeFields"][] = "clock_out_at";
$tdatafreee_work_records[".googleLikeFields"][] = "date";
$tdatafreee_work_records[".googleLikeFields"][] = "day_pattern";
$tdatafreee_work_records[".googleLikeFields"][] = "schedule_pattern";
$tdatafreee_work_records[".googleLikeFields"][] = "early_leaving_mins";
$tdatafreee_work_records[".googleLikeFields"][] = "is_absence";
$tdatafreee_work_records[".googleLikeFields"][] = "is_editable";
$tdatafreee_work_records[".googleLikeFields"][] = "lateness_mins";
$tdatafreee_work_records[".googleLikeFields"][] = "normal_work_clock_in_at";
$tdatafreee_work_records[".googleLikeFields"][] = "normal_work_clock_out_at";
$tdatafreee_work_records[".googleLikeFields"][] = "normal_work_mins";
$tdatafreee_work_records[".googleLikeFields"][] = "normal_work_mins_by_paid_holiday";
$tdatafreee_work_records[".googleLikeFields"][] = "note";
$tdatafreee_work_records[".googleLikeFields"][] = "paid_holiday";
$tdatafreee_work_records[".googleLikeFields"][] = "hourly_paid_holiday_mins";
$tdatafreee_work_records[".googleLikeFields"][] = "use_attendance_deduction";
$tdatafreee_work_records[".googleLikeFields"][] = "use_default_work_pattern";
$tdatafreee_work_records[".googleLikeFields"][] = "total_overtime_work_mins";
$tdatafreee_work_records[".googleLikeFields"][] = "total_holiday_work_mins";
$tdatafreee_work_records[".googleLikeFields"][] = "total_latenight_work_mins";


$tdatafreee_work_records[".advSearchFields"] = array();
$tdatafreee_work_records[".advSearchFields"][] = "id";
$tdatafreee_work_records[".advSearchFields"][] = "employee_id";
$tdatafreee_work_records[".advSearchFields"][] = "clock_in_at";
$tdatafreee_work_records[".advSearchFields"][] = "clock_out_at";
$tdatafreee_work_records[".advSearchFields"][] = "date";
$tdatafreee_work_records[".advSearchFields"][] = "day_pattern";
$tdatafreee_work_records[".advSearchFields"][] = "schedule_pattern";
$tdatafreee_work_records[".advSearchFields"][] = "early_leaving_mins";
$tdatafreee_work_records[".advSearchFields"][] = "is_absence";
$tdatafreee_work_records[".advSearchFields"][] = "is_editable";
$tdatafreee_work_records[".advSearchFields"][] = "lateness_mins";
$tdatafreee_work_records[".advSearchFields"][] = "normal_work_clock_in_at";
$tdatafreee_work_records[".advSearchFields"][] = "normal_work_clock_out_at";
$tdatafreee_work_records[".advSearchFields"][] = "normal_work_mins";
$tdatafreee_work_records[".advSearchFields"][] = "normal_work_mins_by_paid_holiday";
$tdatafreee_work_records[".advSearchFields"][] = "note";
$tdatafreee_work_records[".advSearchFields"][] = "paid_holiday";
$tdatafreee_work_records[".advSearchFields"][] = "hourly_paid_holiday_mins";
$tdatafreee_work_records[".advSearchFields"][] = "use_attendance_deduction";
$tdatafreee_work_records[".advSearchFields"][] = "use_default_work_pattern";
$tdatafreee_work_records[".advSearchFields"][] = "total_overtime_work_mins";
$tdatafreee_work_records[".advSearchFields"][] = "total_holiday_work_mins";
$tdatafreee_work_records[".advSearchFields"][] = "total_latenight_work_mins";

$tdatafreee_work_records[".tableType"] = "list";

$tdatafreee_work_records[".printerPageOrientation"] = 0;
$tdatafreee_work_records[".nPrinterPageScale"] = 100;

$tdatafreee_work_records[".nPrinterSplitRecords"] = 40;

$tdatafreee_work_records[".nPrinterPDFSplitRecords"] = 40;



$tdatafreee_work_records[".geocodingEnabled"] = false;





$tdatafreee_work_records[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatafreee_work_records[".pageSize"] = 100;

$tdatafreee_work_records[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatafreee_work_records[".strOrderBy"] = $tstrOrderBy;

$tdatafreee_work_records[".orderindexes"] = array();

$tdatafreee_work_records[".sqlHead"] = "SELECT `id`,  	`employee_id`,  	`updated_at`,  	`created_at`,  	`clock_in_at`,  	`clock_out_at`,  	`date`,  	`day_pattern`,  	`schedule_pattern`,  	`early_leaving_mins`,  	`is_absence`,  	`is_editable`,  	`lateness_mins`,  	`normal_work_clock_in_at`,  	`normal_work_clock_out_at`,  	`normal_work_mins`,  	`normal_work_mins_by_paid_holiday`,  	`note`,  	`paid_holiday`,  	`hourly_paid_holiday_mins`,  	`use_attendance_deduction`,  	`use_default_work_pattern`,  	`total_overtime_work_mins`,  	`total_holiday_work_mins`,  	`total_latenight_work_mins`";
$tdatafreee_work_records[".sqlFrom"] = "FROM `freee_work_records`";
$tdatafreee_work_records[".sqlWhereExpr"] = "";
$tdatafreee_work_records[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatafreee_work_records[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatafreee_work_records[".arrGroupsPerPage"] = $arrGPP;

$tdatafreee_work_records[".highlightSearchResults"] = true;

$tableKeysfreee_work_records = array();
$tableKeysfreee_work_records[] = "id";
$tdatafreee_work_records[".Keys"] = $tableKeysfreee_work_records;

$tdatafreee_work_records[".listFields"] = array();
$tdatafreee_work_records[".listFields"][] = "id";
$tdatafreee_work_records[".listFields"][] = "employee_id";
$tdatafreee_work_records[".listFields"][] = "clock_in_at";
$tdatafreee_work_records[".listFields"][] = "clock_out_at";
$tdatafreee_work_records[".listFields"][] = "date";
$tdatafreee_work_records[".listFields"][] = "day_pattern";
$tdatafreee_work_records[".listFields"][] = "schedule_pattern";
$tdatafreee_work_records[".listFields"][] = "early_leaving_mins";
$tdatafreee_work_records[".listFields"][] = "is_absence";
$tdatafreee_work_records[".listFields"][] = "is_editable";
$tdatafreee_work_records[".listFields"][] = "lateness_mins";
$tdatafreee_work_records[".listFields"][] = "normal_work_clock_in_at";
$tdatafreee_work_records[".listFields"][] = "normal_work_clock_out_at";
$tdatafreee_work_records[".listFields"][] = "normal_work_mins";
$tdatafreee_work_records[".listFields"][] = "normal_work_mins_by_paid_holiday";
$tdatafreee_work_records[".listFields"][] = "note";
$tdatafreee_work_records[".listFields"][] = "paid_holiday";
$tdatafreee_work_records[".listFields"][] = "hourly_paid_holiday_mins";
$tdatafreee_work_records[".listFields"][] = "use_attendance_deduction";
$tdatafreee_work_records[".listFields"][] = "use_default_work_pattern";
$tdatafreee_work_records[".listFields"][] = "total_overtime_work_mins";
$tdatafreee_work_records[".listFields"][] = "total_holiday_work_mins";
$tdatafreee_work_records[".listFields"][] = "total_latenight_work_mins";

$tdatafreee_work_records[".hideMobileList"] = array();


$tdatafreee_work_records[".viewFields"] = array();

$tdatafreee_work_records[".addFields"] = array();

$tdatafreee_work_records[".masterListFields"] = array();
$tdatafreee_work_records[".masterListFields"][] = "id";
$tdatafreee_work_records[".masterListFields"][] = "employee_id";
$tdatafreee_work_records[".masterListFields"][] = "updated_at";
$tdatafreee_work_records[".masterListFields"][] = "created_at";
$tdatafreee_work_records[".masterListFields"][] = "clock_in_at";
$tdatafreee_work_records[".masterListFields"][] = "clock_out_at";
$tdatafreee_work_records[".masterListFields"][] = "date";
$tdatafreee_work_records[".masterListFields"][] = "day_pattern";
$tdatafreee_work_records[".masterListFields"][] = "schedule_pattern";
$tdatafreee_work_records[".masterListFields"][] = "early_leaving_mins";
$tdatafreee_work_records[".masterListFields"][] = "is_absence";
$tdatafreee_work_records[".masterListFields"][] = "is_editable";
$tdatafreee_work_records[".masterListFields"][] = "lateness_mins";
$tdatafreee_work_records[".masterListFields"][] = "normal_work_clock_in_at";
$tdatafreee_work_records[".masterListFields"][] = "normal_work_clock_out_at";
$tdatafreee_work_records[".masterListFields"][] = "normal_work_mins";
$tdatafreee_work_records[".masterListFields"][] = "normal_work_mins_by_paid_holiday";
$tdatafreee_work_records[".masterListFields"][] = "note";
$tdatafreee_work_records[".masterListFields"][] = "paid_holiday";
$tdatafreee_work_records[".masterListFields"][] = "hourly_paid_holiday_mins";
$tdatafreee_work_records[".masterListFields"][] = "use_attendance_deduction";
$tdatafreee_work_records[".masterListFields"][] = "use_default_work_pattern";
$tdatafreee_work_records[".masterListFields"][] = "total_overtime_work_mins";
$tdatafreee_work_records[".masterListFields"][] = "total_holiday_work_mins";
$tdatafreee_work_records[".masterListFields"][] = "total_latenight_work_mins";

$tdatafreee_work_records[".inlineAddFields"] = array();

$tdatafreee_work_records[".editFields"] = array();

$tdatafreee_work_records[".inlineEditFields"] = array();

$tdatafreee_work_records[".updateSelectedFields"] = array();


$tdatafreee_work_records[".exportFields"] = array();
$tdatafreee_work_records[".exportFields"][] = "id";
$tdatafreee_work_records[".exportFields"][] = "employee_id";
$tdatafreee_work_records[".exportFields"][] = "clock_in_at";
$tdatafreee_work_records[".exportFields"][] = "clock_out_at";
$tdatafreee_work_records[".exportFields"][] = "date";
$tdatafreee_work_records[".exportFields"][] = "day_pattern";
$tdatafreee_work_records[".exportFields"][] = "schedule_pattern";
$tdatafreee_work_records[".exportFields"][] = "early_leaving_mins";
$tdatafreee_work_records[".exportFields"][] = "is_absence";
$tdatafreee_work_records[".exportFields"][] = "is_editable";
$tdatafreee_work_records[".exportFields"][] = "lateness_mins";
$tdatafreee_work_records[".exportFields"][] = "normal_work_clock_in_at";
$tdatafreee_work_records[".exportFields"][] = "normal_work_clock_out_at";
$tdatafreee_work_records[".exportFields"][] = "normal_work_mins";
$tdatafreee_work_records[".exportFields"][] = "normal_work_mins_by_paid_holiday";
$tdatafreee_work_records[".exportFields"][] = "note";
$tdatafreee_work_records[".exportFields"][] = "paid_holiday";
$tdatafreee_work_records[".exportFields"][] = "hourly_paid_holiday_mins";
$tdatafreee_work_records[".exportFields"][] = "use_attendance_deduction";
$tdatafreee_work_records[".exportFields"][] = "use_default_work_pattern";
$tdatafreee_work_records[".exportFields"][] = "total_overtime_work_mins";
$tdatafreee_work_records[".exportFields"][] = "total_holiday_work_mins";
$tdatafreee_work_records[".exportFields"][] = "total_latenight_work_mins";

$tdatafreee_work_records[".importFields"] = array();

$tdatafreee_work_records[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "freee_work_records";
	$fdata["Label"] = GetFieldLabel("freee_work_records","id");
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




	$tdatafreee_work_records["id"] = $fdata;
//	employee_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "employee_id";
	$fdata["GoodName"] = "employee_id";
	$fdata["ownerTable"] = "freee_work_records";
	$fdata["Label"] = GetFieldLabel("freee_work_records","employee_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "employee_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`employee_id`";

	
	
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




	$tdatafreee_work_records["employee_id"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "freee_work_records";
	$fdata["Label"] = GetFieldLabel("freee_work_records","updated_at");
	$fdata["FieldType"] = 135;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "updated_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`updated_at`";

	
	
			
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








	$tdatafreee_work_records["updated_at"] = $fdata;
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "freee_work_records";
	$fdata["Label"] = GetFieldLabel("freee_work_records","created_at");
	$fdata["FieldType"] = 135;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "created_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`created_at`";

	
	
			
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








	$tdatafreee_work_records["created_at"] = $fdata;
//	clock_in_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "clock_in_at";
	$fdata["GoodName"] = "clock_in_at";
	$fdata["ownerTable"] = "freee_work_records";
	$fdata["Label"] = GetFieldLabel("freee_work_records","clock_in_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "clock_in_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`clock_in_at`";

	
	
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




	$tdatafreee_work_records["clock_in_at"] = $fdata;
//	clock_out_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "clock_out_at";
	$fdata["GoodName"] = "clock_out_at";
	$fdata["ownerTable"] = "freee_work_records";
	$fdata["Label"] = GetFieldLabel("freee_work_records","clock_out_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "clock_out_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`clock_out_at`";

	
	
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




	$tdatafreee_work_records["clock_out_at"] = $fdata;
//	date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "date";
	$fdata["GoodName"] = "date";
	$fdata["ownerTable"] = "freee_work_records";
	$fdata["Label"] = GetFieldLabel("freee_work_records","date");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`date`";

	
	
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




	$tdatafreee_work_records["date"] = $fdata;
//	day_pattern
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "day_pattern";
	$fdata["GoodName"] = "day_pattern";
	$fdata["ownerTable"] = "freee_work_records";
	$fdata["Label"] = GetFieldLabel("freee_work_records","day_pattern");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "day_pattern";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`day_pattern`";

	
	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatafreee_work_records["day_pattern"] = $fdata;
//	schedule_pattern
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "schedule_pattern";
	$fdata["GoodName"] = "schedule_pattern";
	$fdata["ownerTable"] = "freee_work_records";
	$fdata["Label"] = GetFieldLabel("freee_work_records","schedule_pattern");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "schedule_pattern";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`schedule_pattern`";

	
	
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




	$tdatafreee_work_records["schedule_pattern"] = $fdata;
//	early_leaving_mins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "early_leaving_mins";
	$fdata["GoodName"] = "early_leaving_mins";
	$fdata["ownerTable"] = "freee_work_records";
	$fdata["Label"] = GetFieldLabel("freee_work_records","early_leaving_mins");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "early_leaving_mins";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`early_leaving_mins`";

	
	
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




	$tdatafreee_work_records["early_leaving_mins"] = $fdata;
//	is_absence
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "is_absence";
	$fdata["GoodName"] = "is_absence";
	$fdata["ownerTable"] = "freee_work_records";
	$fdata["Label"] = GetFieldLabel("freee_work_records","is_absence");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "is_absence";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`is_absence`";

	
	
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




	$tdatafreee_work_records["is_absence"] = $fdata;
//	is_editable
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "is_editable";
	$fdata["GoodName"] = "is_editable";
	$fdata["ownerTable"] = "freee_work_records";
	$fdata["Label"] = GetFieldLabel("freee_work_records","is_editable");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "is_editable";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`is_editable`";

	
	
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




	$tdatafreee_work_records["is_editable"] = $fdata;
//	lateness_mins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "lateness_mins";
	$fdata["GoodName"] = "lateness_mins";
	$fdata["ownerTable"] = "freee_work_records";
	$fdata["Label"] = GetFieldLabel("freee_work_records","lateness_mins");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "lateness_mins";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`lateness_mins`";

	
	
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




	$tdatafreee_work_records["lateness_mins"] = $fdata;
//	normal_work_clock_in_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "normal_work_clock_in_at";
	$fdata["GoodName"] = "normal_work_clock_in_at";
	$fdata["ownerTable"] = "freee_work_records";
	$fdata["Label"] = GetFieldLabel("freee_work_records","normal_work_clock_in_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "normal_work_clock_in_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`normal_work_clock_in_at`";

	
	
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




	$tdatafreee_work_records["normal_work_clock_in_at"] = $fdata;
//	normal_work_clock_out_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "normal_work_clock_out_at";
	$fdata["GoodName"] = "normal_work_clock_out_at";
	$fdata["ownerTable"] = "freee_work_records";
	$fdata["Label"] = GetFieldLabel("freee_work_records","normal_work_clock_out_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "normal_work_clock_out_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`normal_work_clock_out_at`";

	
	
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




	$tdatafreee_work_records["normal_work_clock_out_at"] = $fdata;
//	normal_work_mins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "normal_work_mins";
	$fdata["GoodName"] = "normal_work_mins";
	$fdata["ownerTable"] = "freee_work_records";
	$fdata["Label"] = GetFieldLabel("freee_work_records","normal_work_mins");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "normal_work_mins";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`normal_work_mins`";

	
	
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




	$tdatafreee_work_records["normal_work_mins"] = $fdata;
//	normal_work_mins_by_paid_holiday
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "normal_work_mins_by_paid_holiday";
	$fdata["GoodName"] = "normal_work_mins_by_paid_holiday";
	$fdata["ownerTable"] = "freee_work_records";
	$fdata["Label"] = GetFieldLabel("freee_work_records","normal_work_mins_by_paid_holiday");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "normal_work_mins_by_paid_holiday";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`normal_work_mins_by_paid_holiday`";

	
	
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




	$tdatafreee_work_records["normal_work_mins_by_paid_holiday"] = $fdata;
//	note
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "note";
	$fdata["GoodName"] = "note";
	$fdata["ownerTable"] = "freee_work_records";
	$fdata["Label"] = GetFieldLabel("freee_work_records","note");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "note";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`note`";

	
	
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




	$tdatafreee_work_records["note"] = $fdata;
//	paid_holiday
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "paid_holiday";
	$fdata["GoodName"] = "paid_holiday";
	$fdata["ownerTable"] = "freee_work_records";
	$fdata["Label"] = GetFieldLabel("freee_work_records","paid_holiday");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "paid_holiday";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`paid_holiday`";

	
	
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




	$tdatafreee_work_records["paid_holiday"] = $fdata;
//	hourly_paid_holiday_mins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "hourly_paid_holiday_mins";
	$fdata["GoodName"] = "hourly_paid_holiday_mins";
	$fdata["ownerTable"] = "freee_work_records";
	$fdata["Label"] = GetFieldLabel("freee_work_records","hourly_paid_holiday_mins");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "hourly_paid_holiday_mins";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`hourly_paid_holiday_mins`";

	
	
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




	$tdatafreee_work_records["hourly_paid_holiday_mins"] = $fdata;
//	use_attendance_deduction
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "use_attendance_deduction";
	$fdata["GoodName"] = "use_attendance_deduction";
	$fdata["ownerTable"] = "freee_work_records";
	$fdata["Label"] = GetFieldLabel("freee_work_records","use_attendance_deduction");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "use_attendance_deduction";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`use_attendance_deduction`";

	
	
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




	$tdatafreee_work_records["use_attendance_deduction"] = $fdata;
//	use_default_work_pattern
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "use_default_work_pattern";
	$fdata["GoodName"] = "use_default_work_pattern";
	$fdata["ownerTable"] = "freee_work_records";
	$fdata["Label"] = GetFieldLabel("freee_work_records","use_default_work_pattern");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "use_default_work_pattern";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`use_default_work_pattern`";

	
	
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




	$tdatafreee_work_records["use_default_work_pattern"] = $fdata;
//	total_overtime_work_mins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "total_overtime_work_mins";
	$fdata["GoodName"] = "total_overtime_work_mins";
	$fdata["ownerTable"] = "freee_work_records";
	$fdata["Label"] = GetFieldLabel("freee_work_records","total_overtime_work_mins");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "total_overtime_work_mins";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`total_overtime_work_mins`";

	
	
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




	$tdatafreee_work_records["total_overtime_work_mins"] = $fdata;
//	total_holiday_work_mins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "total_holiday_work_mins";
	$fdata["GoodName"] = "total_holiday_work_mins";
	$fdata["ownerTable"] = "freee_work_records";
	$fdata["Label"] = GetFieldLabel("freee_work_records","total_holiday_work_mins");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "total_holiday_work_mins";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`total_holiday_work_mins`";

	
	
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




	$tdatafreee_work_records["total_holiday_work_mins"] = $fdata;
//	total_latenight_work_mins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "total_latenight_work_mins";
	$fdata["GoodName"] = "total_latenight_work_mins";
	$fdata["ownerTable"] = "freee_work_records";
	$fdata["Label"] = GetFieldLabel("freee_work_records","total_latenight_work_mins");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "total_latenight_work_mins";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`total_latenight_work_mins`";

	
	
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




	$tdatafreee_work_records["total_latenight_work_mins"] = $fdata;


$tables_data["freee_work_records"]=&$tdatafreee_work_records;
$field_labels["freee_work_records"] = &$fieldLabelsfreee_work_records;
$fieldToolTips["freee_work_records"] = &$fieldToolTipsfreee_work_records;
$placeHolders["freee_work_records"] = &$placeHoldersfreee_work_records;
$page_titles["freee_work_records"] = &$pageTitlesfreee_work_records;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["freee_work_records"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["freee_work_records"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_freee_work_records()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  	`employee_id`,  	`updated_at`,  	`created_at`,  	`clock_in_at`,  	`clock_out_at`,  	`date`,  	`day_pattern`,  	`schedule_pattern`,  	`early_leaving_mins`,  	`is_absence`,  	`is_editable`,  	`lateness_mins`,  	`normal_work_clock_in_at`,  	`normal_work_clock_out_at`,  	`normal_work_mins`,  	`normal_work_mins_by_paid_holiday`,  	`note`,  	`paid_holiday`,  	`hourly_paid_holiday_mins`,  	`use_attendance_deduction`,  	`use_default_work_pattern`,  	`total_overtime_work_mins`,  	`total_holiday_work_mins`,  	`total_latenight_work_mins`";
$proto0["m_strFrom"] = "FROM `freee_work_records`";
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
	"m_strTable" => "freee_work_records",
	"m_srcTableName" => "freee_work_records"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "freee_work_records";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "employee_id",
	"m_strTable" => "freee_work_records",
	"m_srcTableName" => "freee_work_records"
));

$proto8["m_sql"] = "`employee_id`";
$proto8["m_srcTableName"] = "freee_work_records";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "freee_work_records",
	"m_srcTableName" => "freee_work_records"
));

$proto10["m_sql"] = "`updated_at`";
$proto10["m_srcTableName"] = "freee_work_records";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "freee_work_records",
	"m_srcTableName" => "freee_work_records"
));

$proto12["m_sql"] = "`created_at`";
$proto12["m_srcTableName"] = "freee_work_records";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "clock_in_at",
	"m_strTable" => "freee_work_records",
	"m_srcTableName" => "freee_work_records"
));

$proto14["m_sql"] = "`clock_in_at`";
$proto14["m_srcTableName"] = "freee_work_records";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "clock_out_at",
	"m_strTable" => "freee_work_records",
	"m_srcTableName" => "freee_work_records"
));

$proto16["m_sql"] = "`clock_out_at`";
$proto16["m_srcTableName"] = "freee_work_records";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "date",
	"m_strTable" => "freee_work_records",
	"m_srcTableName" => "freee_work_records"
));

$proto18["m_sql"] = "`date`";
$proto18["m_srcTableName"] = "freee_work_records";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "day_pattern",
	"m_strTable" => "freee_work_records",
	"m_srcTableName" => "freee_work_records"
));

$proto20["m_sql"] = "`day_pattern`";
$proto20["m_srcTableName"] = "freee_work_records";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "schedule_pattern",
	"m_strTable" => "freee_work_records",
	"m_srcTableName" => "freee_work_records"
));

$proto22["m_sql"] = "`schedule_pattern`";
$proto22["m_srcTableName"] = "freee_work_records";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "early_leaving_mins",
	"m_strTable" => "freee_work_records",
	"m_srcTableName" => "freee_work_records"
));

$proto24["m_sql"] = "`early_leaving_mins`";
$proto24["m_srcTableName"] = "freee_work_records";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "is_absence",
	"m_strTable" => "freee_work_records",
	"m_srcTableName" => "freee_work_records"
));

$proto26["m_sql"] = "`is_absence`";
$proto26["m_srcTableName"] = "freee_work_records";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "is_editable",
	"m_strTable" => "freee_work_records",
	"m_srcTableName" => "freee_work_records"
));

$proto28["m_sql"] = "`is_editable`";
$proto28["m_srcTableName"] = "freee_work_records";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "lateness_mins",
	"m_strTable" => "freee_work_records",
	"m_srcTableName" => "freee_work_records"
));

$proto30["m_sql"] = "`lateness_mins`";
$proto30["m_srcTableName"] = "freee_work_records";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "normal_work_clock_in_at",
	"m_strTable" => "freee_work_records",
	"m_srcTableName" => "freee_work_records"
));

$proto32["m_sql"] = "`normal_work_clock_in_at`";
$proto32["m_srcTableName"] = "freee_work_records";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "normal_work_clock_out_at",
	"m_strTable" => "freee_work_records",
	"m_srcTableName" => "freee_work_records"
));

$proto34["m_sql"] = "`normal_work_clock_out_at`";
$proto34["m_srcTableName"] = "freee_work_records";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "normal_work_mins",
	"m_strTable" => "freee_work_records",
	"m_srcTableName" => "freee_work_records"
));

$proto36["m_sql"] = "`normal_work_mins`";
$proto36["m_srcTableName"] = "freee_work_records";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "normal_work_mins_by_paid_holiday",
	"m_strTable" => "freee_work_records",
	"m_srcTableName" => "freee_work_records"
));

$proto38["m_sql"] = "`normal_work_mins_by_paid_holiday`";
$proto38["m_srcTableName"] = "freee_work_records";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "note",
	"m_strTable" => "freee_work_records",
	"m_srcTableName" => "freee_work_records"
));

$proto40["m_sql"] = "`note`";
$proto40["m_srcTableName"] = "freee_work_records";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "paid_holiday",
	"m_strTable" => "freee_work_records",
	"m_srcTableName" => "freee_work_records"
));

$proto42["m_sql"] = "`paid_holiday`";
$proto42["m_srcTableName"] = "freee_work_records";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "hourly_paid_holiday_mins",
	"m_strTable" => "freee_work_records",
	"m_srcTableName" => "freee_work_records"
));

$proto44["m_sql"] = "`hourly_paid_holiday_mins`";
$proto44["m_srcTableName"] = "freee_work_records";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "use_attendance_deduction",
	"m_strTable" => "freee_work_records",
	"m_srcTableName" => "freee_work_records"
));

$proto46["m_sql"] = "`use_attendance_deduction`";
$proto46["m_srcTableName"] = "freee_work_records";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "use_default_work_pattern",
	"m_strTable" => "freee_work_records",
	"m_srcTableName" => "freee_work_records"
));

$proto48["m_sql"] = "`use_default_work_pattern`";
$proto48["m_srcTableName"] = "freee_work_records";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "total_overtime_work_mins",
	"m_strTable" => "freee_work_records",
	"m_srcTableName" => "freee_work_records"
));

$proto50["m_sql"] = "`total_overtime_work_mins`";
$proto50["m_srcTableName"] = "freee_work_records";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "total_holiday_work_mins",
	"m_strTable" => "freee_work_records",
	"m_srcTableName" => "freee_work_records"
));

$proto52["m_sql"] = "`total_holiday_work_mins`";
$proto52["m_srcTableName"] = "freee_work_records";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "total_latenight_work_mins",
	"m_strTable" => "freee_work_records",
	"m_srcTableName" => "freee_work_records"
));

$proto54["m_sql"] = "`total_latenight_work_mins`";
$proto54["m_srcTableName"] = "freee_work_records";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto56=array();
$proto56["m_link"] = "SQLL_MAIN";
			$proto57=array();
$proto57["m_strName"] = "freee_work_records";
$proto57["m_srcTableName"] = "freee_work_records";
$proto57["m_columns"] = array();
$proto57["m_columns"][] = "id";
$proto57["m_columns"][] = "employee_id";
$proto57["m_columns"][] = "updated_at";
$proto57["m_columns"][] = "created_at";
$proto57["m_columns"][] = "clock_in_at";
$proto57["m_columns"][] = "clock_out_at";
$proto57["m_columns"][] = "date";
$proto57["m_columns"][] = "day_pattern";
$proto57["m_columns"][] = "schedule_pattern";
$proto57["m_columns"][] = "early_leaving_mins";
$proto57["m_columns"][] = "is_absence";
$proto57["m_columns"][] = "is_editable";
$proto57["m_columns"][] = "lateness_mins";
$proto57["m_columns"][] = "normal_work_clock_in_at";
$proto57["m_columns"][] = "normal_work_clock_out_at";
$proto57["m_columns"][] = "normal_work_mins";
$proto57["m_columns"][] = "normal_work_mins_by_paid_holiday";
$proto57["m_columns"][] = "note";
$proto57["m_columns"][] = "paid_holiday";
$proto57["m_columns"][] = "hourly_paid_holiday_mins";
$proto57["m_columns"][] = "use_attendance_deduction";
$proto57["m_columns"][] = "use_default_work_pattern";
$proto57["m_columns"][] = "total_overtime_work_mins";
$proto57["m_columns"][] = "total_holiday_work_mins";
$proto57["m_columns"][] = "total_latenight_work_mins";
$obj = new SQLTable($proto57);

$proto56["m_table"] = $obj;
$proto56["m_sql"] = "`freee_work_records`";
$proto56["m_alias"] = "";
$proto56["m_srcTableName"] = "freee_work_records";
$proto58=array();
$proto58["m_sql"] = "";
$proto58["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto58["m_column"]=$obj;
$proto58["m_contained"] = array();
$proto58["m_strCase"] = "";
$proto58["m_havingmode"] = false;
$proto58["m_inBrackets"] = false;
$proto58["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto58);

$proto56["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto56);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="freee_work_records";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_freee_work_records = createSqlQuery_freee_work_records();


	
		;

																									

$tdatafreee_work_records[".sqlquery"] = $queryData_freee_work_records;

$tableEvents["freee_work_records"] = new eventsBase;
$tdatafreee_work_records[".hasEvents"] = false;

?>