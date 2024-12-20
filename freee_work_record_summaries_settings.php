<?php
require_once(getabspath("classes/cipherer.php"));




$tdatafreee_work_record_summaries = array();
	$tdatafreee_work_record_summaries[".truncateText"] = true;
	$tdatafreee_work_record_summaries[".NumberOfChars"] = 80;
	$tdatafreee_work_record_summaries[".ShortName"] = "freee_work_record_summaries";
	$tdatafreee_work_record_summaries[".OwnerID"] = "";
	$tdatafreee_work_record_summaries[".OriginalTable"] = "freee_work_record_summaries";

//	field labels
$fieldLabelsfreee_work_record_summaries = array();
$fieldToolTipsfreee_work_record_summaries = array();
$pageTitlesfreee_work_record_summaries = array();
$placeHoldersfreee_work_record_summaries = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsfreee_work_record_summaries["Japanese"] = array();
	$fieldToolTipsfreee_work_record_summaries["Japanese"] = array();
	$placeHoldersfreee_work_record_summaries["Japanese"] = array();
	$pageTitlesfreee_work_record_summaries["Japanese"] = array();
	$fieldLabelsfreee_work_record_summaries["Japanese"]["work_record_summary_id"] = "サマリーId";
	$fieldToolTipsfreee_work_record_summaries["Japanese"]["work_record_summary_id"] = "";
	$placeHoldersfreee_work_record_summaries["Japanese"]["work_record_summary_id"] = "";
	$fieldLabelsfreee_work_record_summaries["Japanese"]["total_normal_work_mins"] = "所定内労働時間（分）";
	$fieldToolTipsfreee_work_record_summaries["Japanese"]["total_normal_work_mins"] = "";
	$placeHoldersfreee_work_record_summaries["Japanese"]["total_normal_work_mins"] = "";
	$fieldLabelsfreee_work_record_summaries["Japanese"]["total_overtime_except_normal_work_mins"] = "所定外法定外労働時間";
	$fieldToolTipsfreee_work_record_summaries["Japanese"]["total_overtime_except_normal_work_mins"] = "";
	$placeHoldersfreee_work_record_summaries["Japanese"]["total_overtime_except_normal_work_mins"] = "";
	$fieldLabelsfreee_work_record_summaries["Japanese"]["total_holiday_work_mins"] = "法定休日労働時間（分）";
	$fieldToolTipsfreee_work_record_summaries["Japanese"]["total_holiday_work_mins"] = "";
	$placeHoldersfreee_work_record_summaries["Japanese"]["total_holiday_work_mins"] = "";
	$fieldLabelsfreee_work_record_summaries["Japanese"]["total_latenight_work_mins"] = "深夜労働時間（分）";
	$fieldToolTipsfreee_work_record_summaries["Japanese"]["total_latenight_work_mins"] = "";
	$placeHoldersfreee_work_record_summaries["Japanese"]["total_latenight_work_mins"] = "";
	$fieldLabelsfreee_work_record_summaries["Japanese"]["num_absences"] = "欠勤日数";
	$fieldToolTipsfreee_work_record_summaries["Japanese"]["num_absences"] = "";
	$placeHoldersfreee_work_record_summaries["Japanese"]["num_absences"] = "";
	$fieldLabelsfreee_work_record_summaries["Japanese"]["num_paid_holidays"] = "有給取得日数";
	$fieldToolTipsfreee_work_record_summaries["Japanese"]["num_paid_holidays"] = "";
	$placeHoldersfreee_work_record_summaries["Japanese"]["num_paid_holidays"] = "";
	$fieldLabelsfreee_work_record_summaries["Japanese"]["num_paid_holidays_left"] = "有給残日数";
	$fieldToolTipsfreee_work_record_summaries["Japanese"]["num_paid_holidays_left"] = "";
	$placeHoldersfreee_work_record_summaries["Japanese"]["num_paid_holidays_left"] = "";
	$fieldLabelsfreee_work_record_summaries["Japanese"]["total_lateness_and_early_leaving_mins"] = "遅刻早退時間（分）";
	$fieldToolTipsfreee_work_record_summaries["Japanese"]["total_lateness_and_early_leaving_mins"] = "";
	$placeHoldersfreee_work_record_summaries["Japanese"]["total_lateness_and_early_leaving_mins"] = "";
	$fieldLabelsfreee_work_record_summaries["Japanese"]["start_date"] = "集計開始日";
	$fieldToolTipsfreee_work_record_summaries["Japanese"]["start_date"] = "";
	$placeHoldersfreee_work_record_summaries["Japanese"]["start_date"] = "";
	$fieldLabelsfreee_work_record_summaries["Japanese"]["end_date"] = "集計終了日";
	$fieldToolTipsfreee_work_record_summaries["Japanese"]["end_date"] = "";
	$placeHoldersfreee_work_record_summaries["Japanese"]["end_date"] = "";
	$fieldLabelsfreee_work_record_summaries["Japanese"]["work_days"] = "労働日数";
	$fieldToolTipsfreee_work_record_summaries["Japanese"]["work_days"] = "";
	$placeHoldersfreee_work_record_summaries["Japanese"]["work_days"] = "";
	$fieldLabelsfreee_work_record_summaries["Japanese"]["total_work_mins"] = "総勤務時間（分）";
	$fieldToolTipsfreee_work_record_summaries["Japanese"]["total_work_mins"] = "";
	$placeHoldersfreee_work_record_summaries["Japanese"]["total_work_mins"] = "";
	$fieldLabelsfreee_work_record_summaries["Japanese"]["total_excess_statutory_work_mins"] = "給与計算に用いられる法定内残業時間（分）";
	$fieldToolTipsfreee_work_record_summaries["Japanese"]["total_excess_statutory_work_mins"] = "";
	$placeHoldersfreee_work_record_summaries["Japanese"]["total_excess_statutory_work_mins"] = "";
	$fieldLabelsfreee_work_record_summaries["Japanese"]["total_overtime_within_normal_work_mins"] = "所定内法定外労働時間（裁量労働制の場合はみなしベース）";
	$fieldToolTipsfreee_work_record_summaries["Japanese"]["total_overtime_within_normal_work_mins"] = "";
	$placeHoldersfreee_work_record_summaries["Japanese"]["total_overtime_within_normal_work_mins"] = "";
	$fieldLabelsfreee_work_record_summaries["Japanese"]["num_substitute_holidays_used"] = "振替休日の使用日数";
	$fieldToolTipsfreee_work_record_summaries["Japanese"]["num_substitute_holidays_used"] = "";
	$placeHoldersfreee_work_record_summaries["Japanese"]["num_substitute_holidays_used"] = "";
	$fieldLabelsfreee_work_record_summaries["Japanese"]["num_compensatory_holidays_used"] = "代休の使用日数";
	$fieldToolTipsfreee_work_record_summaries["Japanese"]["num_compensatory_holidays_used"] = "";
	$placeHoldersfreee_work_record_summaries["Japanese"]["num_compensatory_holidays_used"] = "";
	$fieldLabelsfreee_work_record_summaries["Japanese"]["num_special_holidays_used"] = "特別休暇の使用日数";
	$fieldToolTipsfreee_work_record_summaries["Japanese"]["num_special_holidays_used"] = "";
	$placeHoldersfreee_work_record_summaries["Japanese"]["num_special_holidays_used"] = "";
	$fieldLabelsfreee_work_record_summaries["Japanese"]["created_at"] = "Created At";
	$fieldToolTipsfreee_work_record_summaries["Japanese"]["created_at"] = "";
	$placeHoldersfreee_work_record_summaries["Japanese"]["created_at"] = "";
	$fieldLabelsfreee_work_record_summaries["Japanese"]["updated_at"] = "Updated At";
	$fieldToolTipsfreee_work_record_summaries["Japanese"]["updated_at"] = "";
	$placeHoldersfreee_work_record_summaries["Japanese"]["updated_at"] = "";
	$fieldLabelsfreee_work_record_summaries["Japanese"]["year_month"] = "集計年月";
	$fieldToolTipsfreee_work_record_summaries["Japanese"]["year_month"] = "";
	$placeHoldersfreee_work_record_summaries["Japanese"]["year_month"] = "";
	$fieldLabelsfreee_work_record_summaries["Japanese"]["employee_id"] = "従業員id";
	$fieldToolTipsfreee_work_record_summaries["Japanese"]["employee_id"] = "";
	$placeHoldersfreee_work_record_summaries["Japanese"]["employee_id"] = "";
	if (count($fieldToolTipsfreee_work_record_summaries["Japanese"]))
		$tdatafreee_work_record_summaries[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsfreee_work_record_summaries[""] = array();
	$fieldToolTipsfreee_work_record_summaries[""] = array();
	$placeHoldersfreee_work_record_summaries[""] = array();
	$pageTitlesfreee_work_record_summaries[""] = array();
	$fieldLabelsfreee_work_record_summaries[""]["work_record_summary_id"] = "Work Record Summary Id";
	$fieldToolTipsfreee_work_record_summaries[""]["work_record_summary_id"] = "";
	$placeHoldersfreee_work_record_summaries[""]["work_record_summary_id"] = "";
	$fieldLabelsfreee_work_record_summaries[""]["total_normal_work_mins"] = "Total Normal Work Mins";
	$fieldToolTipsfreee_work_record_summaries[""]["total_normal_work_mins"] = "";
	$placeHoldersfreee_work_record_summaries[""]["total_normal_work_mins"] = "";
	$fieldLabelsfreee_work_record_summaries[""]["total_overtime_except_normal_work_mins"] = "Total Overtime Except Normal Work Mins";
	$fieldToolTipsfreee_work_record_summaries[""]["total_overtime_except_normal_work_mins"] = "";
	$placeHoldersfreee_work_record_summaries[""]["total_overtime_except_normal_work_mins"] = "";
	$fieldLabelsfreee_work_record_summaries[""]["total_holiday_work_mins"] = "Total Holiday Work Mins";
	$fieldToolTipsfreee_work_record_summaries[""]["total_holiday_work_mins"] = "";
	$placeHoldersfreee_work_record_summaries[""]["total_holiday_work_mins"] = "";
	$fieldLabelsfreee_work_record_summaries[""]["total_latenight_work_mins"] = "Total Latenight Work Mins";
	$fieldToolTipsfreee_work_record_summaries[""]["total_latenight_work_mins"] = "";
	$placeHoldersfreee_work_record_summaries[""]["total_latenight_work_mins"] = "";
	$fieldLabelsfreee_work_record_summaries[""]["num_absences"] = "Num Absences";
	$fieldToolTipsfreee_work_record_summaries[""]["num_absences"] = "";
	$placeHoldersfreee_work_record_summaries[""]["num_absences"] = "";
	$fieldLabelsfreee_work_record_summaries[""]["num_paid_holidays"] = "Num Paid Holidays";
	$fieldToolTipsfreee_work_record_summaries[""]["num_paid_holidays"] = "";
	$placeHoldersfreee_work_record_summaries[""]["num_paid_holidays"] = "";
	$fieldLabelsfreee_work_record_summaries[""]["num_paid_holidays_left"] = "Num Paid Holidays Left";
	$fieldToolTipsfreee_work_record_summaries[""]["num_paid_holidays_left"] = "";
	$placeHoldersfreee_work_record_summaries[""]["num_paid_holidays_left"] = "";
	$fieldLabelsfreee_work_record_summaries[""]["total_lateness_and_early_leaving_mins"] = "Total Lateness And Early Leaving Mins";
	$fieldToolTipsfreee_work_record_summaries[""]["total_lateness_and_early_leaving_mins"] = "";
	$placeHoldersfreee_work_record_summaries[""]["total_lateness_and_early_leaving_mins"] = "";
	$fieldLabelsfreee_work_record_summaries[""]["start_date"] = "Start Date";
	$fieldToolTipsfreee_work_record_summaries[""]["start_date"] = "";
	$placeHoldersfreee_work_record_summaries[""]["start_date"] = "";
	$fieldLabelsfreee_work_record_summaries[""]["end_date"] = "End Date";
	$fieldToolTipsfreee_work_record_summaries[""]["end_date"] = "";
	$placeHoldersfreee_work_record_summaries[""]["end_date"] = "";
	$fieldLabelsfreee_work_record_summaries[""]["work_days"] = "Work Days";
	$fieldToolTipsfreee_work_record_summaries[""]["work_days"] = "";
	$placeHoldersfreee_work_record_summaries[""]["work_days"] = "";
	$fieldLabelsfreee_work_record_summaries[""]["total_work_mins"] = "Total Work Mins";
	$fieldToolTipsfreee_work_record_summaries[""]["total_work_mins"] = "";
	$placeHoldersfreee_work_record_summaries[""]["total_work_mins"] = "";
	$fieldLabelsfreee_work_record_summaries[""]["total_excess_statutory_work_mins"] = "Total Excess Statutory Work Mins";
	$fieldToolTipsfreee_work_record_summaries[""]["total_excess_statutory_work_mins"] = "";
	$placeHoldersfreee_work_record_summaries[""]["total_excess_statutory_work_mins"] = "";
	$fieldLabelsfreee_work_record_summaries[""]["total_overtime_within_normal_work_mins"] = "Total Overtime Within Normal Work Mins";
	$fieldToolTipsfreee_work_record_summaries[""]["total_overtime_within_normal_work_mins"] = "";
	$placeHoldersfreee_work_record_summaries[""]["total_overtime_within_normal_work_mins"] = "";
	$fieldLabelsfreee_work_record_summaries[""]["num_substitute_holidays_used"] = "Num Substitute Holidays Used";
	$fieldToolTipsfreee_work_record_summaries[""]["num_substitute_holidays_used"] = "";
	$placeHoldersfreee_work_record_summaries[""]["num_substitute_holidays_used"] = "";
	$fieldLabelsfreee_work_record_summaries[""]["num_compensatory_holidays_used"] = "Num Compensatory Holidays Used";
	$fieldToolTipsfreee_work_record_summaries[""]["num_compensatory_holidays_used"] = "";
	$placeHoldersfreee_work_record_summaries[""]["num_compensatory_holidays_used"] = "";
	$fieldLabelsfreee_work_record_summaries[""]["num_special_holidays_used"] = "Num Special Holidays Used";
	$fieldToolTipsfreee_work_record_summaries[""]["num_special_holidays_used"] = "";
	$placeHoldersfreee_work_record_summaries[""]["num_special_holidays_used"] = "";
	$fieldLabelsfreee_work_record_summaries[""]["created_at"] = "Created At";
	$fieldToolTipsfreee_work_record_summaries[""]["created_at"] = "";
	$placeHoldersfreee_work_record_summaries[""]["created_at"] = "";
	$fieldLabelsfreee_work_record_summaries[""]["updated_at"] = "Updated At";
	$fieldToolTipsfreee_work_record_summaries[""]["updated_at"] = "";
	$placeHoldersfreee_work_record_summaries[""]["updated_at"] = "";
	$fieldLabelsfreee_work_record_summaries[""]["year_month"] = "Year Month";
	$fieldToolTipsfreee_work_record_summaries[""]["year_month"] = "";
	$placeHoldersfreee_work_record_summaries[""]["year_month"] = "";
	$fieldLabelsfreee_work_record_summaries[""]["employee_id"] = "Employee Id";
	$fieldToolTipsfreee_work_record_summaries[""]["employee_id"] = "";
	$placeHoldersfreee_work_record_summaries[""]["employee_id"] = "";
	if (count($fieldToolTipsfreee_work_record_summaries[""]))
		$tdatafreee_work_record_summaries[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsfreee_work_record_summaries["English"] = array();
	$fieldToolTipsfreee_work_record_summaries["English"] = array();
	$placeHoldersfreee_work_record_summaries["English"] = array();
	$pageTitlesfreee_work_record_summaries["English"] = array();
	$fieldLabelsfreee_work_record_summaries["English"]["work_record_summary_id"] = "Work Record Summary Id";
	$fieldToolTipsfreee_work_record_summaries["English"]["work_record_summary_id"] = "";
	$placeHoldersfreee_work_record_summaries["English"]["work_record_summary_id"] = "";
	$fieldLabelsfreee_work_record_summaries["English"]["total_normal_work_mins"] = "Total Normal Work Mins";
	$fieldToolTipsfreee_work_record_summaries["English"]["total_normal_work_mins"] = "";
	$placeHoldersfreee_work_record_summaries["English"]["total_normal_work_mins"] = "";
	$fieldLabelsfreee_work_record_summaries["English"]["total_overtime_except_normal_work_mins"] = "Total Overtime Except Normal Work Mins";
	$fieldToolTipsfreee_work_record_summaries["English"]["total_overtime_except_normal_work_mins"] = "";
	$placeHoldersfreee_work_record_summaries["English"]["total_overtime_except_normal_work_mins"] = "";
	$fieldLabelsfreee_work_record_summaries["English"]["total_holiday_work_mins"] = "Total Holiday Work Mins";
	$fieldToolTipsfreee_work_record_summaries["English"]["total_holiday_work_mins"] = "";
	$placeHoldersfreee_work_record_summaries["English"]["total_holiday_work_mins"] = "";
	$fieldLabelsfreee_work_record_summaries["English"]["total_latenight_work_mins"] = "Total Latenight Work Mins";
	$fieldToolTipsfreee_work_record_summaries["English"]["total_latenight_work_mins"] = "";
	$placeHoldersfreee_work_record_summaries["English"]["total_latenight_work_mins"] = "";
	$fieldLabelsfreee_work_record_summaries["English"]["num_absences"] = "Num Absences";
	$fieldToolTipsfreee_work_record_summaries["English"]["num_absences"] = "";
	$placeHoldersfreee_work_record_summaries["English"]["num_absences"] = "";
	$fieldLabelsfreee_work_record_summaries["English"]["num_paid_holidays"] = "Num Paid Holidays";
	$fieldToolTipsfreee_work_record_summaries["English"]["num_paid_holidays"] = "";
	$placeHoldersfreee_work_record_summaries["English"]["num_paid_holidays"] = "";
	$fieldLabelsfreee_work_record_summaries["English"]["num_paid_holidays_left"] = "Num Paid Holidays Left";
	$fieldToolTipsfreee_work_record_summaries["English"]["num_paid_holidays_left"] = "";
	$placeHoldersfreee_work_record_summaries["English"]["num_paid_holidays_left"] = "";
	$fieldLabelsfreee_work_record_summaries["English"]["total_lateness_and_early_leaving_mins"] = "Total Lateness And Early Leaving Mins";
	$fieldToolTipsfreee_work_record_summaries["English"]["total_lateness_and_early_leaving_mins"] = "";
	$placeHoldersfreee_work_record_summaries["English"]["total_lateness_and_early_leaving_mins"] = "";
	$fieldLabelsfreee_work_record_summaries["English"]["start_date"] = "Start Date";
	$fieldToolTipsfreee_work_record_summaries["English"]["start_date"] = "";
	$placeHoldersfreee_work_record_summaries["English"]["start_date"] = "";
	$fieldLabelsfreee_work_record_summaries["English"]["end_date"] = "End Date";
	$fieldToolTipsfreee_work_record_summaries["English"]["end_date"] = "";
	$placeHoldersfreee_work_record_summaries["English"]["end_date"] = "";
	$fieldLabelsfreee_work_record_summaries["English"]["work_days"] = "Work Days";
	$fieldToolTipsfreee_work_record_summaries["English"]["work_days"] = "";
	$placeHoldersfreee_work_record_summaries["English"]["work_days"] = "";
	$fieldLabelsfreee_work_record_summaries["English"]["total_work_mins"] = "Total Work Mins";
	$fieldToolTipsfreee_work_record_summaries["English"]["total_work_mins"] = "";
	$placeHoldersfreee_work_record_summaries["English"]["total_work_mins"] = "";
	$fieldLabelsfreee_work_record_summaries["English"]["total_excess_statutory_work_mins"] = "Total Excess Statutory Work Mins";
	$fieldToolTipsfreee_work_record_summaries["English"]["total_excess_statutory_work_mins"] = "";
	$placeHoldersfreee_work_record_summaries["English"]["total_excess_statutory_work_mins"] = "";
	$fieldLabelsfreee_work_record_summaries["English"]["total_overtime_within_normal_work_mins"] = "Total Overtime Within Normal Work Mins";
	$fieldToolTipsfreee_work_record_summaries["English"]["total_overtime_within_normal_work_mins"] = "";
	$placeHoldersfreee_work_record_summaries["English"]["total_overtime_within_normal_work_mins"] = "";
	$fieldLabelsfreee_work_record_summaries["English"]["num_substitute_holidays_used"] = "Num Substitute Holidays Used";
	$fieldToolTipsfreee_work_record_summaries["English"]["num_substitute_holidays_used"] = "";
	$placeHoldersfreee_work_record_summaries["English"]["num_substitute_holidays_used"] = "";
	$fieldLabelsfreee_work_record_summaries["English"]["num_compensatory_holidays_used"] = "Num Compensatory Holidays Used";
	$fieldToolTipsfreee_work_record_summaries["English"]["num_compensatory_holidays_used"] = "";
	$placeHoldersfreee_work_record_summaries["English"]["num_compensatory_holidays_used"] = "";
	$fieldLabelsfreee_work_record_summaries["English"]["num_special_holidays_used"] = "Num Special Holidays Used";
	$fieldToolTipsfreee_work_record_summaries["English"]["num_special_holidays_used"] = "";
	$placeHoldersfreee_work_record_summaries["English"]["num_special_holidays_used"] = "";
	$fieldLabelsfreee_work_record_summaries["English"]["created_at"] = "Created At";
	$fieldToolTipsfreee_work_record_summaries["English"]["created_at"] = "";
	$placeHoldersfreee_work_record_summaries["English"]["created_at"] = "";
	$fieldLabelsfreee_work_record_summaries["English"]["updated_at"] = "Updated At";
	$fieldToolTipsfreee_work_record_summaries["English"]["updated_at"] = "";
	$placeHoldersfreee_work_record_summaries["English"]["updated_at"] = "";
	$fieldLabelsfreee_work_record_summaries["English"]["year_month"] = "Year Month";
	$fieldToolTipsfreee_work_record_summaries["English"]["year_month"] = "";
	$placeHoldersfreee_work_record_summaries["English"]["year_month"] = "";
	$fieldLabelsfreee_work_record_summaries["English"]["employee_id"] = "Employee Id";
	$fieldToolTipsfreee_work_record_summaries["English"]["employee_id"] = "";
	$placeHoldersfreee_work_record_summaries["English"]["employee_id"] = "";
	if (count($fieldToolTipsfreee_work_record_summaries["English"]))
		$tdatafreee_work_record_summaries[".isUseToolTips"] = true;
}


	$tdatafreee_work_record_summaries[".NCSearch"] = true;



$tdatafreee_work_record_summaries[".shortTableName"] = "freee_work_record_summaries";
$tdatafreee_work_record_summaries[".nSecOptions"] = 0;
$tdatafreee_work_record_summaries[".recsPerRowPrint"] = 1;
$tdatafreee_work_record_summaries[".mainTableOwnerID"] = "";
$tdatafreee_work_record_summaries[".moveNext"] = 1;
$tdatafreee_work_record_summaries[".entityType"] = 0;

$tdatafreee_work_record_summaries[".strOriginalTableName"] = "freee_work_record_summaries";

	



$tdatafreee_work_record_summaries[".showAddInPopup"] = false;

$tdatafreee_work_record_summaries[".showEditInPopup"] = false;

$tdatafreee_work_record_summaries[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatafreee_work_record_summaries[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatafreee_work_record_summaries[".fieldsForRegister"] = array();

$tdatafreee_work_record_summaries[".listAjax"] = false;

	$tdatafreee_work_record_summaries[".audit"] = false;

	$tdatafreee_work_record_summaries[".locking"] = false;



$tdatafreee_work_record_summaries[".list"] = true;



$tdatafreee_work_record_summaries[".reorderRecordsByHeader"] = true;





$tdatafreee_work_record_summaries[".exportTo"] = true;



$tdatafreee_work_record_summaries[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatafreee_work_record_summaries[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatafreee_work_record_summaries[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatafreee_work_record_summaries[".searchSaving"] = false;
//

$tdatafreee_work_record_summaries[".showSearchPanel"] = true;
		$tdatafreee_work_record_summaries[".flexibleSearch"] = true;

$tdatafreee_work_record_summaries[".isUseAjaxSuggest"] = true;

$tdatafreee_work_record_summaries[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatafreee_work_record_summaries[".ajaxCodeSnippetAdded"] = false;

$tdatafreee_work_record_summaries[".buttonsAdded"] = false;

$tdatafreee_work_record_summaries[".addPageEvents"] = false;

// use timepicker for search panel
$tdatafreee_work_record_summaries[".isUseTimeForSearch"] = false;




$tdatafreee_work_record_summaries[".detailsLinksOnList"] = "1";

$tdatafreee_work_record_summaries[".allSearchFields"] = array();
$tdatafreee_work_record_summaries[".filterFields"] = array();
$tdatafreee_work_record_summaries[".requiredSearchFields"] = array();

$tdatafreee_work_record_summaries[".allSearchFields"][] = "work_record_summary_id";
	$tdatafreee_work_record_summaries[".allSearchFields"][] = "total_normal_work_mins";
	$tdatafreee_work_record_summaries[".allSearchFields"][] = "total_overtime_except_normal_work_mins";
	$tdatafreee_work_record_summaries[".allSearchFields"][] = "total_holiday_work_mins";
	$tdatafreee_work_record_summaries[".allSearchFields"][] = "total_latenight_work_mins";
	$tdatafreee_work_record_summaries[".allSearchFields"][] = "num_absences";
	$tdatafreee_work_record_summaries[".allSearchFields"][] = "num_paid_holidays";
	$tdatafreee_work_record_summaries[".allSearchFields"][] = "num_paid_holidays_left";
	$tdatafreee_work_record_summaries[".allSearchFields"][] = "total_lateness_and_early_leaving_mins";
	$tdatafreee_work_record_summaries[".allSearchFields"][] = "start_date";
	$tdatafreee_work_record_summaries[".allSearchFields"][] = "end_date";
	$tdatafreee_work_record_summaries[".allSearchFields"][] = "work_days";
	$tdatafreee_work_record_summaries[".allSearchFields"][] = "total_work_mins";
	$tdatafreee_work_record_summaries[".allSearchFields"][] = "total_excess_statutory_work_mins";
	$tdatafreee_work_record_summaries[".allSearchFields"][] = "total_overtime_within_normal_work_mins";
	$tdatafreee_work_record_summaries[".allSearchFields"][] = "num_substitute_holidays_used";
	$tdatafreee_work_record_summaries[".allSearchFields"][] = "num_compensatory_holidays_used";
	$tdatafreee_work_record_summaries[".allSearchFields"][] = "num_special_holidays_used";
	$tdatafreee_work_record_summaries[".allSearchFields"][] = "created_at";
	$tdatafreee_work_record_summaries[".allSearchFields"][] = "updated_at";
	$tdatafreee_work_record_summaries[".allSearchFields"][] = "year_month";
	$tdatafreee_work_record_summaries[".allSearchFields"][] = "employee_id";
	

$tdatafreee_work_record_summaries[".googleLikeFields"] = array();
$tdatafreee_work_record_summaries[".googleLikeFields"][] = "work_record_summary_id";
$tdatafreee_work_record_summaries[".googleLikeFields"][] = "total_normal_work_mins";
$tdatafreee_work_record_summaries[".googleLikeFields"][] = "total_overtime_except_normal_work_mins";
$tdatafreee_work_record_summaries[".googleLikeFields"][] = "total_holiday_work_mins";
$tdatafreee_work_record_summaries[".googleLikeFields"][] = "total_latenight_work_mins";
$tdatafreee_work_record_summaries[".googleLikeFields"][] = "num_absences";
$tdatafreee_work_record_summaries[".googleLikeFields"][] = "num_paid_holidays";
$tdatafreee_work_record_summaries[".googleLikeFields"][] = "num_paid_holidays_left";
$tdatafreee_work_record_summaries[".googleLikeFields"][] = "total_lateness_and_early_leaving_mins";
$tdatafreee_work_record_summaries[".googleLikeFields"][] = "start_date";
$tdatafreee_work_record_summaries[".googleLikeFields"][] = "end_date";
$tdatafreee_work_record_summaries[".googleLikeFields"][] = "work_days";
$tdatafreee_work_record_summaries[".googleLikeFields"][] = "total_work_mins";
$tdatafreee_work_record_summaries[".googleLikeFields"][] = "total_excess_statutory_work_mins";
$tdatafreee_work_record_summaries[".googleLikeFields"][] = "total_overtime_within_normal_work_mins";
$tdatafreee_work_record_summaries[".googleLikeFields"][] = "num_substitute_holidays_used";
$tdatafreee_work_record_summaries[".googleLikeFields"][] = "num_compensatory_holidays_used";
$tdatafreee_work_record_summaries[".googleLikeFields"][] = "num_special_holidays_used";
$tdatafreee_work_record_summaries[".googleLikeFields"][] = "created_at";
$tdatafreee_work_record_summaries[".googleLikeFields"][] = "updated_at";
$tdatafreee_work_record_summaries[".googleLikeFields"][] = "year_month";
$tdatafreee_work_record_summaries[".googleLikeFields"][] = "employee_id";


$tdatafreee_work_record_summaries[".advSearchFields"] = array();
$tdatafreee_work_record_summaries[".advSearchFields"][] = "work_record_summary_id";
$tdatafreee_work_record_summaries[".advSearchFields"][] = "total_normal_work_mins";
$tdatafreee_work_record_summaries[".advSearchFields"][] = "total_overtime_except_normal_work_mins";
$tdatafreee_work_record_summaries[".advSearchFields"][] = "total_holiday_work_mins";
$tdatafreee_work_record_summaries[".advSearchFields"][] = "total_latenight_work_mins";
$tdatafreee_work_record_summaries[".advSearchFields"][] = "num_absences";
$tdatafreee_work_record_summaries[".advSearchFields"][] = "num_paid_holidays";
$tdatafreee_work_record_summaries[".advSearchFields"][] = "num_paid_holidays_left";
$tdatafreee_work_record_summaries[".advSearchFields"][] = "total_lateness_and_early_leaving_mins";
$tdatafreee_work_record_summaries[".advSearchFields"][] = "start_date";
$tdatafreee_work_record_summaries[".advSearchFields"][] = "end_date";
$tdatafreee_work_record_summaries[".advSearchFields"][] = "work_days";
$tdatafreee_work_record_summaries[".advSearchFields"][] = "total_work_mins";
$tdatafreee_work_record_summaries[".advSearchFields"][] = "total_excess_statutory_work_mins";
$tdatafreee_work_record_summaries[".advSearchFields"][] = "total_overtime_within_normal_work_mins";
$tdatafreee_work_record_summaries[".advSearchFields"][] = "num_substitute_holidays_used";
$tdatafreee_work_record_summaries[".advSearchFields"][] = "num_compensatory_holidays_used";
$tdatafreee_work_record_summaries[".advSearchFields"][] = "num_special_holidays_used";
$tdatafreee_work_record_summaries[".advSearchFields"][] = "created_at";
$tdatafreee_work_record_summaries[".advSearchFields"][] = "updated_at";
$tdatafreee_work_record_summaries[".advSearchFields"][] = "year_month";
$tdatafreee_work_record_summaries[".advSearchFields"][] = "employee_id";

$tdatafreee_work_record_summaries[".tableType"] = "list";

$tdatafreee_work_record_summaries[".printerPageOrientation"] = 0;
$tdatafreee_work_record_summaries[".nPrinterPageScale"] = 100;

$tdatafreee_work_record_summaries[".nPrinterSplitRecords"] = 40;

$tdatafreee_work_record_summaries[".nPrinterPDFSplitRecords"] = 40;



$tdatafreee_work_record_summaries[".geocodingEnabled"] = false;





$tdatafreee_work_record_summaries[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatafreee_work_record_summaries[".pageSize"] = 100;

$tdatafreee_work_record_summaries[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatafreee_work_record_summaries[".strOrderBy"] = $tstrOrderBy;

$tdatafreee_work_record_summaries[".orderindexes"] = array();

$tdatafreee_work_record_summaries[".sqlHead"] = "SELECT `work_record_summary_id`,  	`total_normal_work_mins`,  	`total_overtime_except_normal_work_mins`,  	`total_holiday_work_mins`,  	`total_latenight_work_mins`,  	`num_absences`,  	`num_paid_holidays`,  	`num_paid_holidays_left`,  	`total_lateness_and_early_leaving_mins`,  	`start_date`,  	`end_date`,  	`work_days`,  	`total_work_mins`,  	`total_excess_statutory_work_mins`,  	`total_overtime_within_normal_work_mins`,  	`num_substitute_holidays_used`,  	`num_compensatory_holidays_used`,  	`num_special_holidays_used`,  	`created_at`,  	`updated_at`,  	`year_month`,  	`employee_id`";
$tdatafreee_work_record_summaries[".sqlFrom"] = "FROM `freee_work_record_summaries`";
$tdatafreee_work_record_summaries[".sqlWhereExpr"] = "";
$tdatafreee_work_record_summaries[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatafreee_work_record_summaries[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatafreee_work_record_summaries[".arrGroupsPerPage"] = $arrGPP;

$tdatafreee_work_record_summaries[".highlightSearchResults"] = true;

$tableKeysfreee_work_record_summaries = array();
$tableKeysfreee_work_record_summaries[] = "work_record_summary_id";
$tdatafreee_work_record_summaries[".Keys"] = $tableKeysfreee_work_record_summaries;

$tdatafreee_work_record_summaries[".listFields"] = array();
$tdatafreee_work_record_summaries[".listFields"][] = "work_record_summary_id";
$tdatafreee_work_record_summaries[".listFields"][] = "total_normal_work_mins";
$tdatafreee_work_record_summaries[".listFields"][] = "total_overtime_except_normal_work_mins";
$tdatafreee_work_record_summaries[".listFields"][] = "total_holiday_work_mins";
$tdatafreee_work_record_summaries[".listFields"][] = "total_latenight_work_mins";
$tdatafreee_work_record_summaries[".listFields"][] = "num_absences";
$tdatafreee_work_record_summaries[".listFields"][] = "num_paid_holidays";
$tdatafreee_work_record_summaries[".listFields"][] = "num_paid_holidays_left";
$tdatafreee_work_record_summaries[".listFields"][] = "total_lateness_and_early_leaving_mins";
$tdatafreee_work_record_summaries[".listFields"][] = "start_date";
$tdatafreee_work_record_summaries[".listFields"][] = "end_date";
$tdatafreee_work_record_summaries[".listFields"][] = "work_days";
$tdatafreee_work_record_summaries[".listFields"][] = "total_work_mins";
$tdatafreee_work_record_summaries[".listFields"][] = "total_excess_statutory_work_mins";
$tdatafreee_work_record_summaries[".listFields"][] = "total_overtime_within_normal_work_mins";
$tdatafreee_work_record_summaries[".listFields"][] = "num_substitute_holidays_used";
$tdatafreee_work_record_summaries[".listFields"][] = "num_compensatory_holidays_used";
$tdatafreee_work_record_summaries[".listFields"][] = "num_special_holidays_used";
$tdatafreee_work_record_summaries[".listFields"][] = "created_at";
$tdatafreee_work_record_summaries[".listFields"][] = "updated_at";
$tdatafreee_work_record_summaries[".listFields"][] = "year_month";
$tdatafreee_work_record_summaries[".listFields"][] = "employee_id";

$tdatafreee_work_record_summaries[".hideMobileList"] = array();


$tdatafreee_work_record_summaries[".viewFields"] = array();

$tdatafreee_work_record_summaries[".addFields"] = array();

$tdatafreee_work_record_summaries[".masterListFields"] = array();
$tdatafreee_work_record_summaries[".masterListFields"][] = "work_record_summary_id";
$tdatafreee_work_record_summaries[".masterListFields"][] = "total_normal_work_mins";
$tdatafreee_work_record_summaries[".masterListFields"][] = "total_overtime_except_normal_work_mins";
$tdatafreee_work_record_summaries[".masterListFields"][] = "total_holiday_work_mins";
$tdatafreee_work_record_summaries[".masterListFields"][] = "total_latenight_work_mins";
$tdatafreee_work_record_summaries[".masterListFields"][] = "num_absences";
$tdatafreee_work_record_summaries[".masterListFields"][] = "num_paid_holidays";
$tdatafreee_work_record_summaries[".masterListFields"][] = "num_paid_holidays_left";
$tdatafreee_work_record_summaries[".masterListFields"][] = "total_lateness_and_early_leaving_mins";
$tdatafreee_work_record_summaries[".masterListFields"][] = "start_date";
$tdatafreee_work_record_summaries[".masterListFields"][] = "end_date";
$tdatafreee_work_record_summaries[".masterListFields"][] = "work_days";
$tdatafreee_work_record_summaries[".masterListFields"][] = "total_work_mins";
$tdatafreee_work_record_summaries[".masterListFields"][] = "total_excess_statutory_work_mins";
$tdatafreee_work_record_summaries[".masterListFields"][] = "total_overtime_within_normal_work_mins";
$tdatafreee_work_record_summaries[".masterListFields"][] = "num_substitute_holidays_used";
$tdatafreee_work_record_summaries[".masterListFields"][] = "num_compensatory_holidays_used";
$tdatafreee_work_record_summaries[".masterListFields"][] = "num_special_holidays_used";
$tdatafreee_work_record_summaries[".masterListFields"][] = "created_at";
$tdatafreee_work_record_summaries[".masterListFields"][] = "updated_at";
$tdatafreee_work_record_summaries[".masterListFields"][] = "year_month";
$tdatafreee_work_record_summaries[".masterListFields"][] = "employee_id";

$tdatafreee_work_record_summaries[".inlineAddFields"] = array();

$tdatafreee_work_record_summaries[".editFields"] = array();

$tdatafreee_work_record_summaries[".inlineEditFields"] = array();

$tdatafreee_work_record_summaries[".updateSelectedFields"] = array();


$tdatafreee_work_record_summaries[".exportFields"] = array();
$tdatafreee_work_record_summaries[".exportFields"][] = "work_record_summary_id";
$tdatafreee_work_record_summaries[".exportFields"][] = "total_normal_work_mins";
$tdatafreee_work_record_summaries[".exportFields"][] = "total_overtime_except_normal_work_mins";
$tdatafreee_work_record_summaries[".exportFields"][] = "total_holiday_work_mins";
$tdatafreee_work_record_summaries[".exportFields"][] = "total_latenight_work_mins";
$tdatafreee_work_record_summaries[".exportFields"][] = "num_absences";
$tdatafreee_work_record_summaries[".exportFields"][] = "num_paid_holidays";
$tdatafreee_work_record_summaries[".exportFields"][] = "num_paid_holidays_left";
$tdatafreee_work_record_summaries[".exportFields"][] = "total_lateness_and_early_leaving_mins";
$tdatafreee_work_record_summaries[".exportFields"][] = "start_date";
$tdatafreee_work_record_summaries[".exportFields"][] = "end_date";
$tdatafreee_work_record_summaries[".exportFields"][] = "work_days";
$tdatafreee_work_record_summaries[".exportFields"][] = "total_work_mins";
$tdatafreee_work_record_summaries[".exportFields"][] = "total_excess_statutory_work_mins";
$tdatafreee_work_record_summaries[".exportFields"][] = "total_overtime_within_normal_work_mins";
$tdatafreee_work_record_summaries[".exportFields"][] = "num_substitute_holidays_used";
$tdatafreee_work_record_summaries[".exportFields"][] = "num_compensatory_holidays_used";
$tdatafreee_work_record_summaries[".exportFields"][] = "num_special_holidays_used";
$tdatafreee_work_record_summaries[".exportFields"][] = "created_at";
$tdatafreee_work_record_summaries[".exportFields"][] = "updated_at";
$tdatafreee_work_record_summaries[".exportFields"][] = "year_month";
$tdatafreee_work_record_summaries[".exportFields"][] = "employee_id";

$tdatafreee_work_record_summaries[".importFields"] = array();

$tdatafreee_work_record_summaries[".printFields"] = array();

//	work_record_summary_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "work_record_summary_id";
	$fdata["GoodName"] = "work_record_summary_id";
	$fdata["ownerTable"] = "freee_work_record_summaries";
	$fdata["Label"] = GetFieldLabel("freee_work_record_summaries","work_record_summary_id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "work_record_summary_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`work_record_summary_id`";

	
	
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




	$tdatafreee_work_record_summaries["work_record_summary_id"] = $fdata;
//	total_normal_work_mins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "total_normal_work_mins";
	$fdata["GoodName"] = "total_normal_work_mins";
	$fdata["ownerTable"] = "freee_work_record_summaries";
	$fdata["Label"] = GetFieldLabel("freee_work_record_summaries","total_normal_work_mins");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "total_normal_work_mins";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`total_normal_work_mins`";

	
	
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




	$tdatafreee_work_record_summaries["total_normal_work_mins"] = $fdata;
//	total_overtime_except_normal_work_mins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "total_overtime_except_normal_work_mins";
	$fdata["GoodName"] = "total_overtime_except_normal_work_mins";
	$fdata["ownerTable"] = "freee_work_record_summaries";
	$fdata["Label"] = GetFieldLabel("freee_work_record_summaries","total_overtime_except_normal_work_mins");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "total_overtime_except_normal_work_mins";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`total_overtime_except_normal_work_mins`";

	
	
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




	$tdatafreee_work_record_summaries["total_overtime_except_normal_work_mins"] = $fdata;
//	total_holiday_work_mins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "total_holiday_work_mins";
	$fdata["GoodName"] = "total_holiday_work_mins";
	$fdata["ownerTable"] = "freee_work_record_summaries";
	$fdata["Label"] = GetFieldLabel("freee_work_record_summaries","total_holiday_work_mins");
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




	$tdatafreee_work_record_summaries["total_holiday_work_mins"] = $fdata;
//	total_latenight_work_mins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "total_latenight_work_mins";
	$fdata["GoodName"] = "total_latenight_work_mins";
	$fdata["ownerTable"] = "freee_work_record_summaries";
	$fdata["Label"] = GetFieldLabel("freee_work_record_summaries","total_latenight_work_mins");
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




	$tdatafreee_work_record_summaries["total_latenight_work_mins"] = $fdata;
//	num_absences
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "num_absences";
	$fdata["GoodName"] = "num_absences";
	$fdata["ownerTable"] = "freee_work_record_summaries";
	$fdata["Label"] = GetFieldLabel("freee_work_record_summaries","num_absences");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "num_absences";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`num_absences`";

	
	
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




	$tdatafreee_work_record_summaries["num_absences"] = $fdata;
//	num_paid_holidays
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "num_paid_holidays";
	$fdata["GoodName"] = "num_paid_holidays";
	$fdata["ownerTable"] = "freee_work_record_summaries";
	$fdata["Label"] = GetFieldLabel("freee_work_record_summaries","num_paid_holidays");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "num_paid_holidays";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`num_paid_holidays`";

	
	
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




	$tdatafreee_work_record_summaries["num_paid_holidays"] = $fdata;
//	num_paid_holidays_left
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "num_paid_holidays_left";
	$fdata["GoodName"] = "num_paid_holidays_left";
	$fdata["ownerTable"] = "freee_work_record_summaries";
	$fdata["Label"] = GetFieldLabel("freee_work_record_summaries","num_paid_holidays_left");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "num_paid_holidays_left";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`num_paid_holidays_left`";

	
	
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




	$tdatafreee_work_record_summaries["num_paid_holidays_left"] = $fdata;
//	total_lateness_and_early_leaving_mins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "total_lateness_and_early_leaving_mins";
	$fdata["GoodName"] = "total_lateness_and_early_leaving_mins";
	$fdata["ownerTable"] = "freee_work_record_summaries";
	$fdata["Label"] = GetFieldLabel("freee_work_record_summaries","total_lateness_and_early_leaving_mins");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "total_lateness_and_early_leaving_mins";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`total_lateness_and_early_leaving_mins`";

	
	
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




	$tdatafreee_work_record_summaries["total_lateness_and_early_leaving_mins"] = $fdata;
//	start_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "start_date";
	$fdata["GoodName"] = "start_date";
	$fdata["ownerTable"] = "freee_work_record_summaries";
	$fdata["Label"] = GetFieldLabel("freee_work_record_summaries","start_date");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "start_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`start_date`";

	
	
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




	$tdatafreee_work_record_summaries["start_date"] = $fdata;
//	end_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "end_date";
	$fdata["GoodName"] = "end_date";
	$fdata["ownerTable"] = "freee_work_record_summaries";
	$fdata["Label"] = GetFieldLabel("freee_work_record_summaries","end_date");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "end_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`end_date`";

	
	
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




	$tdatafreee_work_record_summaries["end_date"] = $fdata;
//	work_days
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "work_days";
	$fdata["GoodName"] = "work_days";
	$fdata["ownerTable"] = "freee_work_record_summaries";
	$fdata["Label"] = GetFieldLabel("freee_work_record_summaries","work_days");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "work_days";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`work_days`";

	
	
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




	$tdatafreee_work_record_summaries["work_days"] = $fdata;
//	total_work_mins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "total_work_mins";
	$fdata["GoodName"] = "total_work_mins";
	$fdata["ownerTable"] = "freee_work_record_summaries";
	$fdata["Label"] = GetFieldLabel("freee_work_record_summaries","total_work_mins");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "total_work_mins";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`total_work_mins`";

	
	
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




	$tdatafreee_work_record_summaries["total_work_mins"] = $fdata;
//	total_excess_statutory_work_mins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "total_excess_statutory_work_mins";
	$fdata["GoodName"] = "total_excess_statutory_work_mins";
	$fdata["ownerTable"] = "freee_work_record_summaries";
	$fdata["Label"] = GetFieldLabel("freee_work_record_summaries","total_excess_statutory_work_mins");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "total_excess_statutory_work_mins";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`total_excess_statutory_work_mins`";

	
	
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




	$tdatafreee_work_record_summaries["total_excess_statutory_work_mins"] = $fdata;
//	total_overtime_within_normal_work_mins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "total_overtime_within_normal_work_mins";
	$fdata["GoodName"] = "total_overtime_within_normal_work_mins";
	$fdata["ownerTable"] = "freee_work_record_summaries";
	$fdata["Label"] = GetFieldLabel("freee_work_record_summaries","total_overtime_within_normal_work_mins");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "total_overtime_within_normal_work_mins";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`total_overtime_within_normal_work_mins`";

	
	
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




	$tdatafreee_work_record_summaries["total_overtime_within_normal_work_mins"] = $fdata;
//	num_substitute_holidays_used
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "num_substitute_holidays_used";
	$fdata["GoodName"] = "num_substitute_holidays_used";
	$fdata["ownerTable"] = "freee_work_record_summaries";
	$fdata["Label"] = GetFieldLabel("freee_work_record_summaries","num_substitute_holidays_used");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "num_substitute_holidays_used";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`num_substitute_holidays_used`";

	
	
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




	$tdatafreee_work_record_summaries["num_substitute_holidays_used"] = $fdata;
//	num_compensatory_holidays_used
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "num_compensatory_holidays_used";
	$fdata["GoodName"] = "num_compensatory_holidays_used";
	$fdata["ownerTable"] = "freee_work_record_summaries";
	$fdata["Label"] = GetFieldLabel("freee_work_record_summaries","num_compensatory_holidays_used");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "num_compensatory_holidays_used";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`num_compensatory_holidays_used`";

	
	
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




	$tdatafreee_work_record_summaries["num_compensatory_holidays_used"] = $fdata;
//	num_special_holidays_used
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "num_special_holidays_used";
	$fdata["GoodName"] = "num_special_holidays_used";
	$fdata["ownerTable"] = "freee_work_record_summaries";
	$fdata["Label"] = GetFieldLabel("freee_work_record_summaries","num_special_holidays_used");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "num_special_holidays_used";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`num_special_holidays_used`";

	
	
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




	$tdatafreee_work_record_summaries["num_special_holidays_used"] = $fdata;
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "freee_work_record_summaries";
	$fdata["Label"] = GetFieldLabel("freee_work_record_summaries","created_at");
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




	$tdatafreee_work_record_summaries["created_at"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "freee_work_record_summaries";
	$fdata["Label"] = GetFieldLabel("freee_work_record_summaries","updated_at");
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




	$tdatafreee_work_record_summaries["updated_at"] = $fdata;
//	year_month
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "year_month";
	$fdata["GoodName"] = "year_month";
	$fdata["ownerTable"] = "freee_work_record_summaries";
	$fdata["Label"] = GetFieldLabel("freee_work_record_summaries","year_month");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "year_month";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`year_month`";

	
	
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
			$edata["EditParams"].= " maxlength=10";

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




	$tdatafreee_work_record_summaries["year_month"] = $fdata;
//	employee_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "employee_id";
	$fdata["GoodName"] = "employee_id";
	$fdata["ownerTable"] = "freee_work_record_summaries";
	$fdata["Label"] = GetFieldLabel("freee_work_record_summaries","employee_id");
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




	$tdatafreee_work_record_summaries["employee_id"] = $fdata;


$tables_data["freee_work_record_summaries"]=&$tdatafreee_work_record_summaries;
$field_labels["freee_work_record_summaries"] = &$fieldLabelsfreee_work_record_summaries;
$fieldToolTips["freee_work_record_summaries"] = &$fieldToolTipsfreee_work_record_summaries;
$placeHolders["freee_work_record_summaries"] = &$placeHoldersfreee_work_record_summaries;
$page_titles["freee_work_record_summaries"] = &$pageTitlesfreee_work_record_summaries;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["freee_work_record_summaries"] = array();
//	freee_employees_details
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="freee_employees_details";
		$detailsParam["dOriginalTable"] = "freee_employees_details";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "freee_employees_details";
	$detailsParam["dCaptionTable"] = GetTableCaption("freee_employees_details");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

/*			$detailsParam["dispChildCount"] = "1";
*/
	$detailsParam["dispChildCount"] = "1";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 0;
		$detailsParam["previewOnView"] = 1;
		
	$detailsTablesData["freee_work_record_summaries"][$dIndex] = $detailsParam;

	
		$detailsTablesData["freee_work_record_summaries"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["freee_work_record_summaries"][$dIndex]["masterKeys"][]="employee_id";

				$detailsTablesData["freee_work_record_summaries"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["freee_work_record_summaries"][$dIndex]["detailKeys"][]="employee_id";

// tables which are master tables for current table (detail)
$masterTablesData["freee_work_record_summaries"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_freee_work_record_summaries()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`work_record_summary_id`,  	`total_normal_work_mins`,  	`total_overtime_except_normal_work_mins`,  	`total_holiday_work_mins`,  	`total_latenight_work_mins`,  	`num_absences`,  	`num_paid_holidays`,  	`num_paid_holidays_left`,  	`total_lateness_and_early_leaving_mins`,  	`start_date`,  	`end_date`,  	`work_days`,  	`total_work_mins`,  	`total_excess_statutory_work_mins`,  	`total_overtime_within_normal_work_mins`,  	`num_substitute_holidays_used`,  	`num_compensatory_holidays_used`,  	`num_special_holidays_used`,  	`created_at`,  	`updated_at`,  	`year_month`,  	`employee_id`";
$proto0["m_strFrom"] = "FROM `freee_work_record_summaries`";
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
	"m_strName" => "work_record_summary_id",
	"m_strTable" => "freee_work_record_summaries",
	"m_srcTableName" => "freee_work_record_summaries"
));

$proto6["m_sql"] = "`work_record_summary_id`";
$proto6["m_srcTableName"] = "freee_work_record_summaries";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "total_normal_work_mins",
	"m_strTable" => "freee_work_record_summaries",
	"m_srcTableName" => "freee_work_record_summaries"
));

$proto8["m_sql"] = "`total_normal_work_mins`";
$proto8["m_srcTableName"] = "freee_work_record_summaries";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "total_overtime_except_normal_work_mins",
	"m_strTable" => "freee_work_record_summaries",
	"m_srcTableName" => "freee_work_record_summaries"
));

$proto10["m_sql"] = "`total_overtime_except_normal_work_mins`";
$proto10["m_srcTableName"] = "freee_work_record_summaries";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "total_holiday_work_mins",
	"m_strTable" => "freee_work_record_summaries",
	"m_srcTableName" => "freee_work_record_summaries"
));

$proto12["m_sql"] = "`total_holiday_work_mins`";
$proto12["m_srcTableName"] = "freee_work_record_summaries";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "total_latenight_work_mins",
	"m_strTable" => "freee_work_record_summaries",
	"m_srcTableName" => "freee_work_record_summaries"
));

$proto14["m_sql"] = "`total_latenight_work_mins`";
$proto14["m_srcTableName"] = "freee_work_record_summaries";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "num_absences",
	"m_strTable" => "freee_work_record_summaries",
	"m_srcTableName" => "freee_work_record_summaries"
));

$proto16["m_sql"] = "`num_absences`";
$proto16["m_srcTableName"] = "freee_work_record_summaries";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "num_paid_holidays",
	"m_strTable" => "freee_work_record_summaries",
	"m_srcTableName" => "freee_work_record_summaries"
));

$proto18["m_sql"] = "`num_paid_holidays`";
$proto18["m_srcTableName"] = "freee_work_record_summaries";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "num_paid_holidays_left",
	"m_strTable" => "freee_work_record_summaries",
	"m_srcTableName" => "freee_work_record_summaries"
));

$proto20["m_sql"] = "`num_paid_holidays_left`";
$proto20["m_srcTableName"] = "freee_work_record_summaries";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "total_lateness_and_early_leaving_mins",
	"m_strTable" => "freee_work_record_summaries",
	"m_srcTableName" => "freee_work_record_summaries"
));

$proto22["m_sql"] = "`total_lateness_and_early_leaving_mins`";
$proto22["m_srcTableName"] = "freee_work_record_summaries";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "start_date",
	"m_strTable" => "freee_work_record_summaries",
	"m_srcTableName" => "freee_work_record_summaries"
));

$proto24["m_sql"] = "`start_date`";
$proto24["m_srcTableName"] = "freee_work_record_summaries";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "end_date",
	"m_strTable" => "freee_work_record_summaries",
	"m_srcTableName" => "freee_work_record_summaries"
));

$proto26["m_sql"] = "`end_date`";
$proto26["m_srcTableName"] = "freee_work_record_summaries";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "work_days",
	"m_strTable" => "freee_work_record_summaries",
	"m_srcTableName" => "freee_work_record_summaries"
));

$proto28["m_sql"] = "`work_days`";
$proto28["m_srcTableName"] = "freee_work_record_summaries";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "total_work_mins",
	"m_strTable" => "freee_work_record_summaries",
	"m_srcTableName" => "freee_work_record_summaries"
));

$proto30["m_sql"] = "`total_work_mins`";
$proto30["m_srcTableName"] = "freee_work_record_summaries";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "total_excess_statutory_work_mins",
	"m_strTable" => "freee_work_record_summaries",
	"m_srcTableName" => "freee_work_record_summaries"
));

$proto32["m_sql"] = "`total_excess_statutory_work_mins`";
$proto32["m_srcTableName"] = "freee_work_record_summaries";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "total_overtime_within_normal_work_mins",
	"m_strTable" => "freee_work_record_summaries",
	"m_srcTableName" => "freee_work_record_summaries"
));

$proto34["m_sql"] = "`total_overtime_within_normal_work_mins`";
$proto34["m_srcTableName"] = "freee_work_record_summaries";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "num_substitute_holidays_used",
	"m_strTable" => "freee_work_record_summaries",
	"m_srcTableName" => "freee_work_record_summaries"
));

$proto36["m_sql"] = "`num_substitute_holidays_used`";
$proto36["m_srcTableName"] = "freee_work_record_summaries";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "num_compensatory_holidays_used",
	"m_strTable" => "freee_work_record_summaries",
	"m_srcTableName" => "freee_work_record_summaries"
));

$proto38["m_sql"] = "`num_compensatory_holidays_used`";
$proto38["m_srcTableName"] = "freee_work_record_summaries";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "num_special_holidays_used",
	"m_strTable" => "freee_work_record_summaries",
	"m_srcTableName" => "freee_work_record_summaries"
));

$proto40["m_sql"] = "`num_special_holidays_used`";
$proto40["m_srcTableName"] = "freee_work_record_summaries";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "freee_work_record_summaries",
	"m_srcTableName" => "freee_work_record_summaries"
));

$proto42["m_sql"] = "`created_at`";
$proto42["m_srcTableName"] = "freee_work_record_summaries";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "freee_work_record_summaries",
	"m_srcTableName" => "freee_work_record_summaries"
));

$proto44["m_sql"] = "`updated_at`";
$proto44["m_srcTableName"] = "freee_work_record_summaries";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "year_month",
	"m_strTable" => "freee_work_record_summaries",
	"m_srcTableName" => "freee_work_record_summaries"
));

$proto46["m_sql"] = "`year_month`";
$proto46["m_srcTableName"] = "freee_work_record_summaries";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "employee_id",
	"m_strTable" => "freee_work_record_summaries",
	"m_srcTableName" => "freee_work_record_summaries"
));

$proto48["m_sql"] = "`employee_id`";
$proto48["m_srcTableName"] = "freee_work_record_summaries";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto50=array();
$proto50["m_link"] = "SQLL_MAIN";
			$proto51=array();
$proto51["m_strName"] = "freee_work_record_summaries";
$proto51["m_srcTableName"] = "freee_work_record_summaries";
$proto51["m_columns"] = array();
$proto51["m_columns"][] = "work_record_summary_id";
$proto51["m_columns"][] = "total_normal_work_mins";
$proto51["m_columns"][] = "total_overtime_except_normal_work_mins";
$proto51["m_columns"][] = "total_holiday_work_mins";
$proto51["m_columns"][] = "total_latenight_work_mins";
$proto51["m_columns"][] = "num_absences";
$proto51["m_columns"][] = "num_paid_holidays";
$proto51["m_columns"][] = "num_paid_holidays_left";
$proto51["m_columns"][] = "total_lateness_and_early_leaving_mins";
$proto51["m_columns"][] = "start_date";
$proto51["m_columns"][] = "end_date";
$proto51["m_columns"][] = "work_days";
$proto51["m_columns"][] = "total_work_mins";
$proto51["m_columns"][] = "total_excess_statutory_work_mins";
$proto51["m_columns"][] = "total_overtime_within_normal_work_mins";
$proto51["m_columns"][] = "num_substitute_holidays_used";
$proto51["m_columns"][] = "num_compensatory_holidays_used";
$proto51["m_columns"][] = "num_special_holidays_used";
$proto51["m_columns"][] = "created_at";
$proto51["m_columns"][] = "updated_at";
$proto51["m_columns"][] = "year_month";
$proto51["m_columns"][] = "employee_id";
$obj = new SQLTable($proto51);

$proto50["m_table"] = $obj;
$proto50["m_sql"] = "`freee_work_record_summaries`";
$proto50["m_alias"] = "";
$proto50["m_srcTableName"] = "freee_work_record_summaries";
$proto52=array();
$proto52["m_sql"] = "";
$proto52["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto52["m_column"]=$obj;
$proto52["m_contained"] = array();
$proto52["m_strCase"] = "";
$proto52["m_havingmode"] = false;
$proto52["m_inBrackets"] = false;
$proto52["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto52);

$proto50["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto50);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="freee_work_record_summaries";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_freee_work_record_summaries = createSqlQuery_freee_work_record_summaries();


	
		;

																						

$tdatafreee_work_record_summaries[".sqlquery"] = $queryData_freee_work_record_summaries;

$tableEvents["freee_work_record_summaries"] = new eventsBase;
$tdatafreee_work_record_summaries[".hasEvents"] = false;

?>