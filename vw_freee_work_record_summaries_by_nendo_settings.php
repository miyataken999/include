<?php
require_once(getabspath("classes/cipherer.php"));




$tdatavw_freee_work_record_summaries_by_nendo = array();
	$tdatavw_freee_work_record_summaries_by_nendo[".truncateText"] = true;
	$tdatavw_freee_work_record_summaries_by_nendo[".NumberOfChars"] = 80;
	$tdatavw_freee_work_record_summaries_by_nendo[".ShortName"] = "vw_freee_work_record_summaries_by_nendo";
	$tdatavw_freee_work_record_summaries_by_nendo[".OwnerID"] = "";
	$tdatavw_freee_work_record_summaries_by_nendo[".OriginalTable"] = "vw_freee_work_record_summaries_by_nendo";

//	field labels
$fieldLabelsvw_freee_work_record_summaries_by_nendo = array();
$fieldToolTipsvw_freee_work_record_summaries_by_nendo = array();
$pageTitlesvw_freee_work_record_summaries_by_nendo = array();
$placeHoldersvw_freee_work_record_summaries_by_nendo = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsvw_freee_work_record_summaries_by_nendo["Japanese"] = array();
	$fieldToolTipsvw_freee_work_record_summaries_by_nendo["Japanese"] = array();
	$placeHoldersvw_freee_work_record_summaries_by_nendo["Japanese"] = array();
	$pageTitlesvw_freee_work_record_summaries_by_nendo["Japanese"] = array();
	$fieldLabelsvw_freee_work_record_summaries_by_nendo["Japanese"]["nendo"] = "集計年度";
	$fieldToolTipsvw_freee_work_record_summaries_by_nendo["Japanese"]["nendo"] = "";
	$placeHoldersvw_freee_work_record_summaries_by_nendo["Japanese"]["nendo"] = "";
	$fieldLabelsvw_freee_work_record_summaries_by_nendo["Japanese"]["employee_id"] = "従業員id（FreeeID）";
	$fieldToolTipsvw_freee_work_record_summaries_by_nendo["Japanese"]["employee_id"] = "";
	$placeHoldersvw_freee_work_record_summaries_by_nendo["Japanese"]["employee_id"] = "";
	$fieldLabelsvw_freee_work_record_summaries_by_nendo["Japanese"]["name"] = "Freee登録名";
	$fieldToolTipsvw_freee_work_record_summaries_by_nendo["Japanese"]["name"] = "";
	$placeHoldersvw_freee_work_record_summaries_by_nendo["Japanese"]["name"] = "";
	$fieldLabelsvw_freee_work_record_summaries_by_nendo["Japanese"]["total_normal_work_mins"] = "所定内労働時間（分）";
	$fieldToolTipsvw_freee_work_record_summaries_by_nendo["Japanese"]["total_normal_work_mins"] = "";
	$placeHoldersvw_freee_work_record_summaries_by_nendo["Japanese"]["total_normal_work_mins"] = "";
	$fieldLabelsvw_freee_work_record_summaries_by_nendo["Japanese"]["total_overtime_except_normal_work_mins"] = "所定外法定外労働時間";
	$fieldToolTipsvw_freee_work_record_summaries_by_nendo["Japanese"]["total_overtime_except_normal_work_mins"] = "";
	$placeHoldersvw_freee_work_record_summaries_by_nendo["Japanese"]["total_overtime_except_normal_work_mins"] = "";
	$fieldLabelsvw_freee_work_record_summaries_by_nendo["Japanese"]["total_holiday_work_mins"] = "法定休日労働時間（分）";
	$fieldToolTipsvw_freee_work_record_summaries_by_nendo["Japanese"]["total_holiday_work_mins"] = "";
	$placeHoldersvw_freee_work_record_summaries_by_nendo["Japanese"]["total_holiday_work_mins"] = "";
	$fieldLabelsvw_freee_work_record_summaries_by_nendo["Japanese"]["total_latenight_work_mins"] = "深夜労働時間（分）";
	$fieldToolTipsvw_freee_work_record_summaries_by_nendo["Japanese"]["total_latenight_work_mins"] = "";
	$placeHoldersvw_freee_work_record_summaries_by_nendo["Japanese"]["total_latenight_work_mins"] = "";
	$fieldLabelsvw_freee_work_record_summaries_by_nendo["Japanese"]["num_absences"] = "欠勤日数";
	$fieldToolTipsvw_freee_work_record_summaries_by_nendo["Japanese"]["num_absences"] = "";
	$placeHoldersvw_freee_work_record_summaries_by_nendo["Japanese"]["num_absences"] = "";
	$fieldLabelsvw_freee_work_record_summaries_by_nendo["Japanese"]["num_paid_holidays"] = "有給取得日数";
	$fieldToolTipsvw_freee_work_record_summaries_by_nendo["Japanese"]["num_paid_holidays"] = "";
	$placeHoldersvw_freee_work_record_summaries_by_nendo["Japanese"]["num_paid_holidays"] = "";
	$fieldLabelsvw_freee_work_record_summaries_by_nendo["Japanese"]["num_paid_holidays_left"] = "有給残日数";
	$fieldToolTipsvw_freee_work_record_summaries_by_nendo["Japanese"]["num_paid_holidays_left"] = "";
	$placeHoldersvw_freee_work_record_summaries_by_nendo["Japanese"]["num_paid_holidays_left"] = "";
	$fieldLabelsvw_freee_work_record_summaries_by_nendo["Japanese"]["total_lateness_and_early_leaving_mins"] = "遅刻早退時間（分）";
	$fieldToolTipsvw_freee_work_record_summaries_by_nendo["Japanese"]["total_lateness_and_early_leaving_mins"] = "";
	$placeHoldersvw_freee_work_record_summaries_by_nendo["Japanese"]["total_lateness_and_early_leaving_mins"] = "";
	$fieldLabelsvw_freee_work_record_summaries_by_nendo["Japanese"]["start_date"] = "集計開始日";
	$fieldToolTipsvw_freee_work_record_summaries_by_nendo["Japanese"]["start_date"] = "";
	$placeHoldersvw_freee_work_record_summaries_by_nendo["Japanese"]["start_date"] = "";
	$fieldLabelsvw_freee_work_record_summaries_by_nendo["Japanese"]["end_date"] = "集計終了日";
	$fieldToolTipsvw_freee_work_record_summaries_by_nendo["Japanese"]["end_date"] = "";
	$placeHoldersvw_freee_work_record_summaries_by_nendo["Japanese"]["end_date"] = "";
	$fieldLabelsvw_freee_work_record_summaries_by_nendo["Japanese"]["work_days"] = "労働日数";
	$fieldToolTipsvw_freee_work_record_summaries_by_nendo["Japanese"]["work_days"] = "";
	$placeHoldersvw_freee_work_record_summaries_by_nendo["Japanese"]["work_days"] = "";
	$fieldLabelsvw_freee_work_record_summaries_by_nendo["Japanese"]["total_work_mins"] = "総勤務時間（分）";
	$fieldToolTipsvw_freee_work_record_summaries_by_nendo["Japanese"]["total_work_mins"] = "";
	$placeHoldersvw_freee_work_record_summaries_by_nendo["Japanese"]["total_work_mins"] = "";
	$fieldLabelsvw_freee_work_record_summaries_by_nendo["Japanese"]["total_excess_statutory_work_mins"] = "給与計算に用いられる法定内残業時間（分）";
	$fieldToolTipsvw_freee_work_record_summaries_by_nendo["Japanese"]["total_excess_statutory_work_mins"] = "";
	$placeHoldersvw_freee_work_record_summaries_by_nendo["Japanese"]["total_excess_statutory_work_mins"] = "";
	$fieldLabelsvw_freee_work_record_summaries_by_nendo["Japanese"]["total_overtime_within_normal_work_mins"] = "所定内法定外労働時間（裁量労働制の場合はみなしベース）";
	$fieldToolTipsvw_freee_work_record_summaries_by_nendo["Japanese"]["total_overtime_within_normal_work_mins"] = "";
	$placeHoldersvw_freee_work_record_summaries_by_nendo["Japanese"]["total_overtime_within_normal_work_mins"] = "";
	$fieldLabelsvw_freee_work_record_summaries_by_nendo["Japanese"]["num_substitute_holidays_used"] = "振替休日の使用日数";
	$fieldToolTipsvw_freee_work_record_summaries_by_nendo["Japanese"]["num_substitute_holidays_used"] = "";
	$placeHoldersvw_freee_work_record_summaries_by_nendo["Japanese"]["num_substitute_holidays_used"] = "";
	$fieldLabelsvw_freee_work_record_summaries_by_nendo["Japanese"]["num_compensatory_holidays_used"] = "代休の使用日数";
	$fieldToolTipsvw_freee_work_record_summaries_by_nendo["Japanese"]["num_compensatory_holidays_used"] = "";
	$placeHoldersvw_freee_work_record_summaries_by_nendo["Japanese"]["num_compensatory_holidays_used"] = "";
	$fieldLabelsvw_freee_work_record_summaries_by_nendo["Japanese"]["num_special_holidays_used"] = "特別休暇の使用日数";
	$fieldToolTipsvw_freee_work_record_summaries_by_nendo["Japanese"]["num_special_holidays_used"] = "";
	$placeHoldersvw_freee_work_record_summaries_by_nendo["Japanese"]["num_special_holidays_used"] = "";
	$fieldLabelsvw_freee_work_record_summaries_by_nendo["Japanese"]["birth_date"] = "生年月日";
	$fieldToolTipsvw_freee_work_record_summaries_by_nendo["Japanese"]["birth_date"] = "";
	$placeHoldersvw_freee_work_record_summaries_by_nendo["Japanese"]["birth_date"] = "";
	$fieldLabelsvw_freee_work_record_summaries_by_nendo["Japanese"]["user_id"] = "User Id（EVAID）";
	$fieldToolTipsvw_freee_work_record_summaries_by_nendo["Japanese"]["user_id"] = "";
	$placeHoldersvw_freee_work_record_summaries_by_nendo["Japanese"]["user_id"] = "";
	$fieldLabelsvw_freee_work_record_summaries_by_nendo["Japanese"]["first_name"] = "名前";
	$fieldToolTipsvw_freee_work_record_summaries_by_nendo["Japanese"]["first_name"] = "";
	$placeHoldersvw_freee_work_record_summaries_by_nendo["Japanese"]["first_name"] = "";
	$fieldLabelsvw_freee_work_record_summaries_by_nendo["Japanese"]["dept_group_id"] = "部署";
	$fieldToolTipsvw_freee_work_record_summaries_by_nendo["Japanese"]["dept_group_id"] = "";
	$placeHoldersvw_freee_work_record_summaries_by_nendo["Japanese"]["dept_group_id"] = "";
	if (count($fieldToolTipsvw_freee_work_record_summaries_by_nendo["Japanese"]))
		$tdatavw_freee_work_record_summaries_by_nendo[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsvw_freee_work_record_summaries_by_nendo[""] = array();
	$fieldToolTipsvw_freee_work_record_summaries_by_nendo[""] = array();
	$placeHoldersvw_freee_work_record_summaries_by_nendo[""] = array();
	$pageTitlesvw_freee_work_record_summaries_by_nendo[""] = array();
	$fieldLabelsvw_freee_work_record_summaries_by_nendo[""]["nendo"] = "Nendo";
	$fieldToolTipsvw_freee_work_record_summaries_by_nendo[""]["nendo"] = "";
	$placeHoldersvw_freee_work_record_summaries_by_nendo[""]["nendo"] = "";
	$fieldLabelsvw_freee_work_record_summaries_by_nendo[""]["employee_id"] = "Employee Id";
	$fieldToolTipsvw_freee_work_record_summaries_by_nendo[""]["employee_id"] = "";
	$placeHoldersvw_freee_work_record_summaries_by_nendo[""]["employee_id"] = "";
	$fieldLabelsvw_freee_work_record_summaries_by_nendo[""]["name"] = "Name";
	$fieldToolTipsvw_freee_work_record_summaries_by_nendo[""]["name"] = "";
	$placeHoldersvw_freee_work_record_summaries_by_nendo[""]["name"] = "";
	$fieldLabelsvw_freee_work_record_summaries_by_nendo[""]["total_normal_work_mins"] = "Total Normal Work Mins";
	$fieldToolTipsvw_freee_work_record_summaries_by_nendo[""]["total_normal_work_mins"] = "";
	$placeHoldersvw_freee_work_record_summaries_by_nendo[""]["total_normal_work_mins"] = "";
	$fieldLabelsvw_freee_work_record_summaries_by_nendo[""]["total_overtime_except_normal_work_mins"] = "Total Overtime Except Normal Work Mins";
	$fieldToolTipsvw_freee_work_record_summaries_by_nendo[""]["total_overtime_except_normal_work_mins"] = "";
	$placeHoldersvw_freee_work_record_summaries_by_nendo[""]["total_overtime_except_normal_work_mins"] = "";
	$fieldLabelsvw_freee_work_record_summaries_by_nendo[""]["total_holiday_work_mins"] = "Total Holiday Work Mins";
	$fieldToolTipsvw_freee_work_record_summaries_by_nendo[""]["total_holiday_work_mins"] = "";
	$placeHoldersvw_freee_work_record_summaries_by_nendo[""]["total_holiday_work_mins"] = "";
	$fieldLabelsvw_freee_work_record_summaries_by_nendo[""]["total_latenight_work_mins"] = "Total Latenight Work Mins";
	$fieldToolTipsvw_freee_work_record_summaries_by_nendo[""]["total_latenight_work_mins"] = "";
	$placeHoldersvw_freee_work_record_summaries_by_nendo[""]["total_latenight_work_mins"] = "";
	$fieldLabelsvw_freee_work_record_summaries_by_nendo[""]["num_absences"] = "Num Absences";
	$fieldToolTipsvw_freee_work_record_summaries_by_nendo[""]["num_absences"] = "";
	$placeHoldersvw_freee_work_record_summaries_by_nendo[""]["num_absences"] = "";
	$fieldLabelsvw_freee_work_record_summaries_by_nendo[""]["num_paid_holidays"] = "Num Paid Holidays";
	$fieldToolTipsvw_freee_work_record_summaries_by_nendo[""]["num_paid_holidays"] = "";
	$placeHoldersvw_freee_work_record_summaries_by_nendo[""]["num_paid_holidays"] = "";
	$fieldLabelsvw_freee_work_record_summaries_by_nendo[""]["num_paid_holidays_left"] = "Num Paid Holidays Left";
	$fieldToolTipsvw_freee_work_record_summaries_by_nendo[""]["num_paid_holidays_left"] = "";
	$placeHoldersvw_freee_work_record_summaries_by_nendo[""]["num_paid_holidays_left"] = "";
	$fieldLabelsvw_freee_work_record_summaries_by_nendo[""]["total_lateness_and_early_leaving_mins"] = "Total Lateness And Early Leaving Mins";
	$fieldToolTipsvw_freee_work_record_summaries_by_nendo[""]["total_lateness_and_early_leaving_mins"] = "";
	$placeHoldersvw_freee_work_record_summaries_by_nendo[""]["total_lateness_and_early_leaving_mins"] = "";
	$fieldLabelsvw_freee_work_record_summaries_by_nendo[""]["start_date"] = "Start Date";
	$fieldToolTipsvw_freee_work_record_summaries_by_nendo[""]["start_date"] = "";
	$placeHoldersvw_freee_work_record_summaries_by_nendo[""]["start_date"] = "";
	$fieldLabelsvw_freee_work_record_summaries_by_nendo[""]["end_date"] = "End Date";
	$fieldToolTipsvw_freee_work_record_summaries_by_nendo[""]["end_date"] = "";
	$placeHoldersvw_freee_work_record_summaries_by_nendo[""]["end_date"] = "";
	$fieldLabelsvw_freee_work_record_summaries_by_nendo[""]["work_days"] = "Work Days";
	$fieldToolTipsvw_freee_work_record_summaries_by_nendo[""]["work_days"] = "";
	$placeHoldersvw_freee_work_record_summaries_by_nendo[""]["work_days"] = "";
	$fieldLabelsvw_freee_work_record_summaries_by_nendo[""]["total_work_mins"] = "Total Work Mins";
	$fieldToolTipsvw_freee_work_record_summaries_by_nendo[""]["total_work_mins"] = "";
	$placeHoldersvw_freee_work_record_summaries_by_nendo[""]["total_work_mins"] = "";
	$fieldLabelsvw_freee_work_record_summaries_by_nendo[""]["total_excess_statutory_work_mins"] = "Total Excess Statutory Work Mins";
	$fieldToolTipsvw_freee_work_record_summaries_by_nendo[""]["total_excess_statutory_work_mins"] = "";
	$placeHoldersvw_freee_work_record_summaries_by_nendo[""]["total_excess_statutory_work_mins"] = "";
	$fieldLabelsvw_freee_work_record_summaries_by_nendo[""]["total_overtime_within_normal_work_mins"] = "Total Overtime Within Normal Work Mins";
	$fieldToolTipsvw_freee_work_record_summaries_by_nendo[""]["total_overtime_within_normal_work_mins"] = "";
	$placeHoldersvw_freee_work_record_summaries_by_nendo[""]["total_overtime_within_normal_work_mins"] = "";
	$fieldLabelsvw_freee_work_record_summaries_by_nendo[""]["num_substitute_holidays_used"] = "Num Substitute Holidays Used";
	$fieldToolTipsvw_freee_work_record_summaries_by_nendo[""]["num_substitute_holidays_used"] = "";
	$placeHoldersvw_freee_work_record_summaries_by_nendo[""]["num_substitute_holidays_used"] = "";
	$fieldLabelsvw_freee_work_record_summaries_by_nendo[""]["num_compensatory_holidays_used"] = "Num Compensatory Holidays Used";
	$fieldToolTipsvw_freee_work_record_summaries_by_nendo[""]["num_compensatory_holidays_used"] = "";
	$placeHoldersvw_freee_work_record_summaries_by_nendo[""]["num_compensatory_holidays_used"] = "";
	$fieldLabelsvw_freee_work_record_summaries_by_nendo[""]["num_special_holidays_used"] = "Num Special Holidays Used";
	$fieldToolTipsvw_freee_work_record_summaries_by_nendo[""]["num_special_holidays_used"] = "";
	$placeHoldersvw_freee_work_record_summaries_by_nendo[""]["num_special_holidays_used"] = "";
	$fieldLabelsvw_freee_work_record_summaries_by_nendo[""]["birth_date"] = "Birth Date";
	$fieldToolTipsvw_freee_work_record_summaries_by_nendo[""]["birth_date"] = "";
	$placeHoldersvw_freee_work_record_summaries_by_nendo[""]["birth_date"] = "";
	$fieldLabelsvw_freee_work_record_summaries_by_nendo[""]["user_id"] = "User Id";
	$fieldToolTipsvw_freee_work_record_summaries_by_nendo[""]["user_id"] = "";
	$placeHoldersvw_freee_work_record_summaries_by_nendo[""]["user_id"] = "";
	$fieldLabelsvw_freee_work_record_summaries_by_nendo[""]["first_name"] = "First Name";
	$fieldToolTipsvw_freee_work_record_summaries_by_nendo[""]["first_name"] = "";
	$placeHoldersvw_freee_work_record_summaries_by_nendo[""]["first_name"] = "";
	$fieldLabelsvw_freee_work_record_summaries_by_nendo[""]["dept_group_id"] = "Dept Group Id";
	$fieldToolTipsvw_freee_work_record_summaries_by_nendo[""]["dept_group_id"] = "";
	$placeHoldersvw_freee_work_record_summaries_by_nendo[""]["dept_group_id"] = "";
	if (count($fieldToolTipsvw_freee_work_record_summaries_by_nendo[""]))
		$tdatavw_freee_work_record_summaries_by_nendo[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsvw_freee_work_record_summaries_by_nendo["English"] = array();
	$fieldToolTipsvw_freee_work_record_summaries_by_nendo["English"] = array();
	$placeHoldersvw_freee_work_record_summaries_by_nendo["English"] = array();
	$pageTitlesvw_freee_work_record_summaries_by_nendo["English"] = array();
	$fieldLabelsvw_freee_work_record_summaries_by_nendo["English"]["nendo"] = "Nendo";
	$fieldToolTipsvw_freee_work_record_summaries_by_nendo["English"]["nendo"] = "";
	$placeHoldersvw_freee_work_record_summaries_by_nendo["English"]["nendo"] = "";
	$fieldLabelsvw_freee_work_record_summaries_by_nendo["English"]["employee_id"] = "Employee Id";
	$fieldToolTipsvw_freee_work_record_summaries_by_nendo["English"]["employee_id"] = "";
	$placeHoldersvw_freee_work_record_summaries_by_nendo["English"]["employee_id"] = "";
	$fieldLabelsvw_freee_work_record_summaries_by_nendo["English"]["name"] = "Name";
	$fieldToolTipsvw_freee_work_record_summaries_by_nendo["English"]["name"] = "";
	$placeHoldersvw_freee_work_record_summaries_by_nendo["English"]["name"] = "";
	$fieldLabelsvw_freee_work_record_summaries_by_nendo["English"]["total_normal_work_mins"] = "Total Normal Work Mins";
	$fieldToolTipsvw_freee_work_record_summaries_by_nendo["English"]["total_normal_work_mins"] = "";
	$placeHoldersvw_freee_work_record_summaries_by_nendo["English"]["total_normal_work_mins"] = "";
	$fieldLabelsvw_freee_work_record_summaries_by_nendo["English"]["total_overtime_except_normal_work_mins"] = "Total Overtime Except Normal Work Mins";
	$fieldToolTipsvw_freee_work_record_summaries_by_nendo["English"]["total_overtime_except_normal_work_mins"] = "";
	$placeHoldersvw_freee_work_record_summaries_by_nendo["English"]["total_overtime_except_normal_work_mins"] = "";
	$fieldLabelsvw_freee_work_record_summaries_by_nendo["English"]["total_holiday_work_mins"] = "Total Holiday Work Mins";
	$fieldToolTipsvw_freee_work_record_summaries_by_nendo["English"]["total_holiday_work_mins"] = "";
	$placeHoldersvw_freee_work_record_summaries_by_nendo["English"]["total_holiday_work_mins"] = "";
	$fieldLabelsvw_freee_work_record_summaries_by_nendo["English"]["total_latenight_work_mins"] = "Total Latenight Work Mins";
	$fieldToolTipsvw_freee_work_record_summaries_by_nendo["English"]["total_latenight_work_mins"] = "";
	$placeHoldersvw_freee_work_record_summaries_by_nendo["English"]["total_latenight_work_mins"] = "";
	$fieldLabelsvw_freee_work_record_summaries_by_nendo["English"]["num_absences"] = "Num Absences";
	$fieldToolTipsvw_freee_work_record_summaries_by_nendo["English"]["num_absences"] = "";
	$placeHoldersvw_freee_work_record_summaries_by_nendo["English"]["num_absences"] = "";
	$fieldLabelsvw_freee_work_record_summaries_by_nendo["English"]["num_paid_holidays"] = "Num Paid Holidays";
	$fieldToolTipsvw_freee_work_record_summaries_by_nendo["English"]["num_paid_holidays"] = "";
	$placeHoldersvw_freee_work_record_summaries_by_nendo["English"]["num_paid_holidays"] = "";
	$fieldLabelsvw_freee_work_record_summaries_by_nendo["English"]["num_paid_holidays_left"] = "Num Paid Holidays Left";
	$fieldToolTipsvw_freee_work_record_summaries_by_nendo["English"]["num_paid_holidays_left"] = "";
	$placeHoldersvw_freee_work_record_summaries_by_nendo["English"]["num_paid_holidays_left"] = "";
	$fieldLabelsvw_freee_work_record_summaries_by_nendo["English"]["total_lateness_and_early_leaving_mins"] = "Total Lateness And Early Leaving Mins";
	$fieldToolTipsvw_freee_work_record_summaries_by_nendo["English"]["total_lateness_and_early_leaving_mins"] = "";
	$placeHoldersvw_freee_work_record_summaries_by_nendo["English"]["total_lateness_and_early_leaving_mins"] = "";
	$fieldLabelsvw_freee_work_record_summaries_by_nendo["English"]["start_date"] = "Start Date";
	$fieldToolTipsvw_freee_work_record_summaries_by_nendo["English"]["start_date"] = "";
	$placeHoldersvw_freee_work_record_summaries_by_nendo["English"]["start_date"] = "";
	$fieldLabelsvw_freee_work_record_summaries_by_nendo["English"]["end_date"] = "End Date";
	$fieldToolTipsvw_freee_work_record_summaries_by_nendo["English"]["end_date"] = "";
	$placeHoldersvw_freee_work_record_summaries_by_nendo["English"]["end_date"] = "";
	$fieldLabelsvw_freee_work_record_summaries_by_nendo["English"]["work_days"] = "Work Days";
	$fieldToolTipsvw_freee_work_record_summaries_by_nendo["English"]["work_days"] = "";
	$placeHoldersvw_freee_work_record_summaries_by_nendo["English"]["work_days"] = "";
	$fieldLabelsvw_freee_work_record_summaries_by_nendo["English"]["total_work_mins"] = "Total Work Mins";
	$fieldToolTipsvw_freee_work_record_summaries_by_nendo["English"]["total_work_mins"] = "";
	$placeHoldersvw_freee_work_record_summaries_by_nendo["English"]["total_work_mins"] = "";
	$fieldLabelsvw_freee_work_record_summaries_by_nendo["English"]["total_excess_statutory_work_mins"] = "Total Excess Statutory Work Mins";
	$fieldToolTipsvw_freee_work_record_summaries_by_nendo["English"]["total_excess_statutory_work_mins"] = "";
	$placeHoldersvw_freee_work_record_summaries_by_nendo["English"]["total_excess_statutory_work_mins"] = "";
	$fieldLabelsvw_freee_work_record_summaries_by_nendo["English"]["total_overtime_within_normal_work_mins"] = "Total Overtime Within Normal Work Mins";
	$fieldToolTipsvw_freee_work_record_summaries_by_nendo["English"]["total_overtime_within_normal_work_mins"] = "";
	$placeHoldersvw_freee_work_record_summaries_by_nendo["English"]["total_overtime_within_normal_work_mins"] = "";
	$fieldLabelsvw_freee_work_record_summaries_by_nendo["English"]["num_substitute_holidays_used"] = "Num Substitute Holidays Used";
	$fieldToolTipsvw_freee_work_record_summaries_by_nendo["English"]["num_substitute_holidays_used"] = "";
	$placeHoldersvw_freee_work_record_summaries_by_nendo["English"]["num_substitute_holidays_used"] = "";
	$fieldLabelsvw_freee_work_record_summaries_by_nendo["English"]["num_compensatory_holidays_used"] = "Num Compensatory Holidays Used";
	$fieldToolTipsvw_freee_work_record_summaries_by_nendo["English"]["num_compensatory_holidays_used"] = "";
	$placeHoldersvw_freee_work_record_summaries_by_nendo["English"]["num_compensatory_holidays_used"] = "";
	$fieldLabelsvw_freee_work_record_summaries_by_nendo["English"]["num_special_holidays_used"] = "Num Special Holidays Used";
	$fieldToolTipsvw_freee_work_record_summaries_by_nendo["English"]["num_special_holidays_used"] = "";
	$placeHoldersvw_freee_work_record_summaries_by_nendo["English"]["num_special_holidays_used"] = "";
	$fieldLabelsvw_freee_work_record_summaries_by_nendo["English"]["birth_date"] = "Birth Date";
	$fieldToolTipsvw_freee_work_record_summaries_by_nendo["English"]["birth_date"] = "";
	$placeHoldersvw_freee_work_record_summaries_by_nendo["English"]["birth_date"] = "";
	$fieldLabelsvw_freee_work_record_summaries_by_nendo["English"]["user_id"] = "User Id";
	$fieldToolTipsvw_freee_work_record_summaries_by_nendo["English"]["user_id"] = "";
	$placeHoldersvw_freee_work_record_summaries_by_nendo["English"]["user_id"] = "";
	$fieldLabelsvw_freee_work_record_summaries_by_nendo["English"]["first_name"] = "First Name";
	$fieldToolTipsvw_freee_work_record_summaries_by_nendo["English"]["first_name"] = "";
	$placeHoldersvw_freee_work_record_summaries_by_nendo["English"]["first_name"] = "";
	$fieldLabelsvw_freee_work_record_summaries_by_nendo["English"]["dept_group_id"] = "Dept Group Id";
	$fieldToolTipsvw_freee_work_record_summaries_by_nendo["English"]["dept_group_id"] = "";
	$placeHoldersvw_freee_work_record_summaries_by_nendo["English"]["dept_group_id"] = "";
	if (count($fieldToolTipsvw_freee_work_record_summaries_by_nendo["English"]))
		$tdatavw_freee_work_record_summaries_by_nendo[".isUseToolTips"] = true;
}


	$tdatavw_freee_work_record_summaries_by_nendo[".NCSearch"] = true;



$tdatavw_freee_work_record_summaries_by_nendo[".shortTableName"] = "vw_freee_work_record_summaries_by_nendo";
$tdatavw_freee_work_record_summaries_by_nendo[".nSecOptions"] = 0;
$tdatavw_freee_work_record_summaries_by_nendo[".recsPerRowPrint"] = 1;
$tdatavw_freee_work_record_summaries_by_nendo[".mainTableOwnerID"] = "";
$tdatavw_freee_work_record_summaries_by_nendo[".moveNext"] = 1;
$tdatavw_freee_work_record_summaries_by_nendo[".entityType"] = 0;

$tdatavw_freee_work_record_summaries_by_nendo[".strOriginalTableName"] = "vw_freee_work_record_summaries_by_nendo";

	



$tdatavw_freee_work_record_summaries_by_nendo[".showAddInPopup"] = false;

$tdatavw_freee_work_record_summaries_by_nendo[".showEditInPopup"] = false;

$tdatavw_freee_work_record_summaries_by_nendo[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatavw_freee_work_record_summaries_by_nendo[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatavw_freee_work_record_summaries_by_nendo[".fieldsForRegister"] = array();

$tdatavw_freee_work_record_summaries_by_nendo[".listAjax"] = false;

	$tdatavw_freee_work_record_summaries_by_nendo[".audit"] = false;

	$tdatavw_freee_work_record_summaries_by_nendo[".locking"] = false;



$tdatavw_freee_work_record_summaries_by_nendo[".list"] = true;



$tdatavw_freee_work_record_summaries_by_nendo[".reorderRecordsByHeader"] = true;





$tdatavw_freee_work_record_summaries_by_nendo[".exportTo"] = true;



$tdatavw_freee_work_record_summaries_by_nendo[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatavw_freee_work_record_summaries_by_nendo[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatavw_freee_work_record_summaries_by_nendo[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatavw_freee_work_record_summaries_by_nendo[".searchSaving"] = false;
//

$tdatavw_freee_work_record_summaries_by_nendo[".showSearchPanel"] = true;
		$tdatavw_freee_work_record_summaries_by_nendo[".flexibleSearch"] = true;

$tdatavw_freee_work_record_summaries_by_nendo[".isUseAjaxSuggest"] = true;

$tdatavw_freee_work_record_summaries_by_nendo[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatavw_freee_work_record_summaries_by_nendo[".ajaxCodeSnippetAdded"] = false;

$tdatavw_freee_work_record_summaries_by_nendo[".buttonsAdded"] = false;

$tdatavw_freee_work_record_summaries_by_nendo[".addPageEvents"] = false;

// use timepicker for search panel
$tdatavw_freee_work_record_summaries_by_nendo[".isUseTimeForSearch"] = false;





$tdatavw_freee_work_record_summaries_by_nendo[".allSearchFields"] = array();
$tdatavw_freee_work_record_summaries_by_nendo[".filterFields"] = array();
$tdatavw_freee_work_record_summaries_by_nendo[".requiredSearchFields"] = array();

$tdatavw_freee_work_record_summaries_by_nendo[".allSearchFields"][] = "nendo";
	$tdatavw_freee_work_record_summaries_by_nendo[".allSearchFields"][] = "dept_group_id";
	$tdatavw_freee_work_record_summaries_by_nendo[".allSearchFields"][] = "first_name";
	$tdatavw_freee_work_record_summaries_by_nendo[".allSearchFields"][] = "total_normal_work_mins";
	$tdatavw_freee_work_record_summaries_by_nendo[".allSearchFields"][] = "total_overtime_except_normal_work_mins";
	$tdatavw_freee_work_record_summaries_by_nendo[".allSearchFields"][] = "total_holiday_work_mins";
	$tdatavw_freee_work_record_summaries_by_nendo[".allSearchFields"][] = "total_latenight_work_mins";
	$tdatavw_freee_work_record_summaries_by_nendo[".allSearchFields"][] = "num_absences";
	$tdatavw_freee_work_record_summaries_by_nendo[".allSearchFields"][] = "num_paid_holidays";
	$tdatavw_freee_work_record_summaries_by_nendo[".allSearchFields"][] = "num_paid_holidays_left";
	$tdatavw_freee_work_record_summaries_by_nendo[".allSearchFields"][] = "total_lateness_and_early_leaving_mins";
	$tdatavw_freee_work_record_summaries_by_nendo[".allSearchFields"][] = "start_date";
	$tdatavw_freee_work_record_summaries_by_nendo[".allSearchFields"][] = "end_date";
	$tdatavw_freee_work_record_summaries_by_nendo[".allSearchFields"][] = "work_days";
	$tdatavw_freee_work_record_summaries_by_nendo[".allSearchFields"][] = "total_work_mins";
	$tdatavw_freee_work_record_summaries_by_nendo[".allSearchFields"][] = "total_excess_statutory_work_mins";
	$tdatavw_freee_work_record_summaries_by_nendo[".allSearchFields"][] = "total_overtime_within_normal_work_mins";
	$tdatavw_freee_work_record_summaries_by_nendo[".allSearchFields"][] = "num_substitute_holidays_used";
	$tdatavw_freee_work_record_summaries_by_nendo[".allSearchFields"][] = "num_compensatory_holidays_used";
	$tdatavw_freee_work_record_summaries_by_nendo[".allSearchFields"][] = "num_special_holidays_used";
	$tdatavw_freee_work_record_summaries_by_nendo[".allSearchFields"][] = "birth_date";
	$tdatavw_freee_work_record_summaries_by_nendo[".allSearchFields"][] = "name";
	$tdatavw_freee_work_record_summaries_by_nendo[".allSearchFields"][] = "employee_id";
	$tdatavw_freee_work_record_summaries_by_nendo[".allSearchFields"][] = "user_id";
	

$tdatavw_freee_work_record_summaries_by_nendo[".googleLikeFields"] = array();
$tdatavw_freee_work_record_summaries_by_nendo[".googleLikeFields"][] = "nendo";
$tdatavw_freee_work_record_summaries_by_nendo[".googleLikeFields"][] = "employee_id";
$tdatavw_freee_work_record_summaries_by_nendo[".googleLikeFields"][] = "name";
$tdatavw_freee_work_record_summaries_by_nendo[".googleLikeFields"][] = "total_normal_work_mins";
$tdatavw_freee_work_record_summaries_by_nendo[".googleLikeFields"][] = "total_overtime_except_normal_work_mins";
$tdatavw_freee_work_record_summaries_by_nendo[".googleLikeFields"][] = "total_holiday_work_mins";
$tdatavw_freee_work_record_summaries_by_nendo[".googleLikeFields"][] = "total_latenight_work_mins";
$tdatavw_freee_work_record_summaries_by_nendo[".googleLikeFields"][] = "num_absences";
$tdatavw_freee_work_record_summaries_by_nendo[".googleLikeFields"][] = "num_paid_holidays";
$tdatavw_freee_work_record_summaries_by_nendo[".googleLikeFields"][] = "num_paid_holidays_left";
$tdatavw_freee_work_record_summaries_by_nendo[".googleLikeFields"][] = "total_lateness_and_early_leaving_mins";
$tdatavw_freee_work_record_summaries_by_nendo[".googleLikeFields"][] = "start_date";
$tdatavw_freee_work_record_summaries_by_nendo[".googleLikeFields"][] = "end_date";
$tdatavw_freee_work_record_summaries_by_nendo[".googleLikeFields"][] = "work_days";
$tdatavw_freee_work_record_summaries_by_nendo[".googleLikeFields"][] = "total_work_mins";
$tdatavw_freee_work_record_summaries_by_nendo[".googleLikeFields"][] = "total_excess_statutory_work_mins";
$tdatavw_freee_work_record_summaries_by_nendo[".googleLikeFields"][] = "total_overtime_within_normal_work_mins";
$tdatavw_freee_work_record_summaries_by_nendo[".googleLikeFields"][] = "num_substitute_holidays_used";
$tdatavw_freee_work_record_summaries_by_nendo[".googleLikeFields"][] = "num_compensatory_holidays_used";
$tdatavw_freee_work_record_summaries_by_nendo[".googleLikeFields"][] = "num_special_holidays_used";
$tdatavw_freee_work_record_summaries_by_nendo[".googleLikeFields"][] = "birth_date";
$tdatavw_freee_work_record_summaries_by_nendo[".googleLikeFields"][] = "user_id";
$tdatavw_freee_work_record_summaries_by_nendo[".googleLikeFields"][] = "first_name";
$tdatavw_freee_work_record_summaries_by_nendo[".googleLikeFields"][] = "dept_group_id";

$tdatavw_freee_work_record_summaries_by_nendo[".panelSearchFields"] = array();
$tdatavw_freee_work_record_summaries_by_nendo[".searchPanelOptions"] = array();
$tdatavw_freee_work_record_summaries_by_nendo[".panelSearchFields"][] = "nendo";
	$tdatavw_freee_work_record_summaries_by_nendo[".panelSearchFields"][] = "dept_group_id";
	$tdatavw_freee_work_record_summaries_by_nendo[".panelSearchFields"][] = "first_name";
	
$tdatavw_freee_work_record_summaries_by_nendo[".advSearchFields"] = array();
$tdatavw_freee_work_record_summaries_by_nendo[".advSearchFields"][] = "nendo";
$tdatavw_freee_work_record_summaries_by_nendo[".advSearchFields"][] = "dept_group_id";
$tdatavw_freee_work_record_summaries_by_nendo[".advSearchFields"][] = "first_name";
$tdatavw_freee_work_record_summaries_by_nendo[".advSearchFields"][] = "total_normal_work_mins";
$tdatavw_freee_work_record_summaries_by_nendo[".advSearchFields"][] = "total_overtime_except_normal_work_mins";
$tdatavw_freee_work_record_summaries_by_nendo[".advSearchFields"][] = "total_holiday_work_mins";
$tdatavw_freee_work_record_summaries_by_nendo[".advSearchFields"][] = "total_latenight_work_mins";
$tdatavw_freee_work_record_summaries_by_nendo[".advSearchFields"][] = "num_absences";
$tdatavw_freee_work_record_summaries_by_nendo[".advSearchFields"][] = "num_paid_holidays";
$tdatavw_freee_work_record_summaries_by_nendo[".advSearchFields"][] = "num_paid_holidays_left";
$tdatavw_freee_work_record_summaries_by_nendo[".advSearchFields"][] = "total_lateness_and_early_leaving_mins";
$tdatavw_freee_work_record_summaries_by_nendo[".advSearchFields"][] = "start_date";
$tdatavw_freee_work_record_summaries_by_nendo[".advSearchFields"][] = "end_date";
$tdatavw_freee_work_record_summaries_by_nendo[".advSearchFields"][] = "work_days";
$tdatavw_freee_work_record_summaries_by_nendo[".advSearchFields"][] = "total_work_mins";
$tdatavw_freee_work_record_summaries_by_nendo[".advSearchFields"][] = "total_excess_statutory_work_mins";
$tdatavw_freee_work_record_summaries_by_nendo[".advSearchFields"][] = "total_overtime_within_normal_work_mins";
$tdatavw_freee_work_record_summaries_by_nendo[".advSearchFields"][] = "num_substitute_holidays_used";
$tdatavw_freee_work_record_summaries_by_nendo[".advSearchFields"][] = "num_compensatory_holidays_used";
$tdatavw_freee_work_record_summaries_by_nendo[".advSearchFields"][] = "num_special_holidays_used";
$tdatavw_freee_work_record_summaries_by_nendo[".advSearchFields"][] = "birth_date";
$tdatavw_freee_work_record_summaries_by_nendo[".advSearchFields"][] = "name";
$tdatavw_freee_work_record_summaries_by_nendo[".advSearchFields"][] = "employee_id";
$tdatavw_freee_work_record_summaries_by_nendo[".advSearchFields"][] = "user_id";

$tdatavw_freee_work_record_summaries_by_nendo[".tableType"] = "list";

$tdatavw_freee_work_record_summaries_by_nendo[".printerPageOrientation"] = 0;
$tdatavw_freee_work_record_summaries_by_nendo[".nPrinterPageScale"] = 100;

$tdatavw_freee_work_record_summaries_by_nendo[".nPrinterSplitRecords"] = 40;

$tdatavw_freee_work_record_summaries_by_nendo[".nPrinterPDFSplitRecords"] = 40;



$tdatavw_freee_work_record_summaries_by_nendo[".geocodingEnabled"] = false;





$tdatavw_freee_work_record_summaries_by_nendo[".listGridLayout"] = 3;





// view page pdf

// print page pdf

$tdatavw_freee_work_record_summaries_by_nendo[".totalsFields"] = array();
$tdatavw_freee_work_record_summaries_by_nendo[".totalsFields"][] = array(
	"fName" => "total_normal_work_mins",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatavw_freee_work_record_summaries_by_nendo[".totalsFields"][] = array(
	"fName" => "total_overtime_except_normal_work_mins",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatavw_freee_work_record_summaries_by_nendo[".totalsFields"][] = array(
	"fName" => "total_holiday_work_mins",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatavw_freee_work_record_summaries_by_nendo[".totalsFields"][] = array(
	"fName" => "total_latenight_work_mins",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatavw_freee_work_record_summaries_by_nendo[".totalsFields"][] = array(
	"fName" => "num_absences",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatavw_freee_work_record_summaries_by_nendo[".totalsFields"][] = array(
	"fName" => "num_paid_holidays",
	"numRows" => 0,
	"totalsType" => "COUNT",
	"viewFormat" => 'Number');
$tdatavw_freee_work_record_summaries_by_nendo[".totalsFields"][] = array(
	"fName" => "num_paid_holidays_left",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatavw_freee_work_record_summaries_by_nendo[".totalsFields"][] = array(
	"fName" => "total_lateness_and_early_leaving_mins",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatavw_freee_work_record_summaries_by_nendo[".totalsFields"][] = array(
	"fName" => "work_days",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatavw_freee_work_record_summaries_by_nendo[".totalsFields"][] = array(
	"fName" => "total_work_mins",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatavw_freee_work_record_summaries_by_nendo[".totalsFields"][] = array(
	"fName" => "total_excess_statutory_work_mins",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatavw_freee_work_record_summaries_by_nendo[".totalsFields"][] = array(
	"fName" => "total_overtime_within_normal_work_mins",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatavw_freee_work_record_summaries_by_nendo[".totalsFields"][] = array(
	"fName" => "num_substitute_holidays_used",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatavw_freee_work_record_summaries_by_nendo[".totalsFields"][] = array(
	"fName" => "num_compensatory_holidays_used",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatavw_freee_work_record_summaries_by_nendo[".totalsFields"][] = array(
	"fName" => "num_special_holidays_used",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');

$tdatavw_freee_work_record_summaries_by_nendo[".pageSize"] = 20;

$tdatavw_freee_work_record_summaries_by_nendo[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `vw_freee_work_record_summaries_by_nendo`.`nendo` DESC, `vw_freee_work_record_summaries_by_nendo`.`employee_id`";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatavw_freee_work_record_summaries_by_nendo[".strOrderBy"] = $tstrOrderBy;

$tdatavw_freee_work_record_summaries_by_nendo[".orderindexes"] = array();
$tdatavw_freee_work_record_summaries_by_nendo[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "`vw_freee_work_record_summaries_by_nendo`.`nendo`");
$tdatavw_freee_work_record_summaries_by_nendo[".orderindexes"][] = array(2, (1 ? "ASC" : "DESC"), "`vw_freee_work_record_summaries_by_nendo`.`employee_id`");

$tdatavw_freee_work_record_summaries_by_nendo[".sqlHead"] = "SELECT `vw_freee_work_record_summaries_by_nendo`.`nendo`,  `vw_freee_work_record_summaries_by_nendo`.`employee_id`,  `vw_freee_work_record_summaries_by_nendo`.`name`,  `vw_freee_work_record_summaries_by_nendo`.`total_normal_work_mins`,  `vw_freee_work_record_summaries_by_nendo`.`total_overtime_except_normal_work_mins`,  `vw_freee_work_record_summaries_by_nendo`.`total_holiday_work_mins`,  `vw_freee_work_record_summaries_by_nendo`.`total_latenight_work_mins`,  `vw_freee_work_record_summaries_by_nendo`.`num_absences`,  `vw_freee_work_record_summaries_by_nendo`.`num_paid_holidays`,  `vw_freee_work_record_summaries_by_nendo`.`num_paid_holidays_left`,  `vw_freee_work_record_summaries_by_nendo`.`total_lateness_and_early_leaving_mins`,  `vw_freee_work_record_summaries_by_nendo`.`start_date`,  `vw_freee_work_record_summaries_by_nendo`.`end_date`,  `vw_freee_work_record_summaries_by_nendo`.`work_days`,  `vw_freee_work_record_summaries_by_nendo`.`total_work_mins`,  `vw_freee_work_record_summaries_by_nendo`.`total_excess_statutory_work_mins`,  `vw_freee_work_record_summaries_by_nendo`.`total_overtime_within_normal_work_mins`,  `vw_freee_work_record_summaries_by_nendo`.`num_substitute_holidays_used`,  `vw_freee_work_record_summaries_by_nendo`.`num_compensatory_holidays_used`,  `vw_freee_work_record_summaries_by_nendo`.`num_special_holidays_used`,  `vw_freee_work_record_summaries_by_nendo`.`birth_date`,  `vw_freee_work_record_summaries_by_nendo`.`user_id`,  `users`.`first_name`,  `users`.`dept_group_id`";
$tdatavw_freee_work_record_summaries_by_nendo[".sqlFrom"] = "FROM `vw_freee_work_record_summaries_by_nendo`  LEFT OUTER JOIN `users` ON `vw_freee_work_record_summaries_by_nendo`.`user_id` = `users`.`user_id`";
$tdatavw_freee_work_record_summaries_by_nendo[".sqlWhereExpr"] = "";
$tdatavw_freee_work_record_summaries_by_nendo[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatavw_freee_work_record_summaries_by_nendo[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatavw_freee_work_record_summaries_by_nendo[".arrGroupsPerPage"] = $arrGPP;

$tdatavw_freee_work_record_summaries_by_nendo[".highlightSearchResults"] = true;

$tableKeysvw_freee_work_record_summaries_by_nendo = array();
$tdatavw_freee_work_record_summaries_by_nendo[".Keys"] = $tableKeysvw_freee_work_record_summaries_by_nendo;

$tdatavw_freee_work_record_summaries_by_nendo[".listFields"] = array();
$tdatavw_freee_work_record_summaries_by_nendo[".listFields"][] = "nendo";
$tdatavw_freee_work_record_summaries_by_nendo[".listFields"][] = "dept_group_id";
$tdatavw_freee_work_record_summaries_by_nendo[".listFields"][] = "first_name";
$tdatavw_freee_work_record_summaries_by_nendo[".listFields"][] = "total_normal_work_mins";
$tdatavw_freee_work_record_summaries_by_nendo[".listFields"][] = "total_overtime_except_normal_work_mins";
$tdatavw_freee_work_record_summaries_by_nendo[".listFields"][] = "total_holiday_work_mins";
$tdatavw_freee_work_record_summaries_by_nendo[".listFields"][] = "total_latenight_work_mins";
$tdatavw_freee_work_record_summaries_by_nendo[".listFields"][] = "num_absences";
$tdatavw_freee_work_record_summaries_by_nendo[".listFields"][] = "num_paid_holidays";
$tdatavw_freee_work_record_summaries_by_nendo[".listFields"][] = "num_paid_holidays_left";
$tdatavw_freee_work_record_summaries_by_nendo[".listFields"][] = "total_lateness_and_early_leaving_mins";
$tdatavw_freee_work_record_summaries_by_nendo[".listFields"][] = "start_date";
$tdatavw_freee_work_record_summaries_by_nendo[".listFields"][] = "end_date";
$tdatavw_freee_work_record_summaries_by_nendo[".listFields"][] = "work_days";
$tdatavw_freee_work_record_summaries_by_nendo[".listFields"][] = "total_work_mins";
$tdatavw_freee_work_record_summaries_by_nendo[".listFields"][] = "total_excess_statutory_work_mins";
$tdatavw_freee_work_record_summaries_by_nendo[".listFields"][] = "total_overtime_within_normal_work_mins";
$tdatavw_freee_work_record_summaries_by_nendo[".listFields"][] = "num_substitute_holidays_used";
$tdatavw_freee_work_record_summaries_by_nendo[".listFields"][] = "num_compensatory_holidays_used";
$tdatavw_freee_work_record_summaries_by_nendo[".listFields"][] = "num_special_holidays_used";
$tdatavw_freee_work_record_summaries_by_nendo[".listFields"][] = "birth_date";
$tdatavw_freee_work_record_summaries_by_nendo[".listFields"][] = "name";
$tdatavw_freee_work_record_summaries_by_nendo[".listFields"][] = "employee_id";
$tdatavw_freee_work_record_summaries_by_nendo[".listFields"][] = "user_id";

$tdatavw_freee_work_record_summaries_by_nendo[".hideMobileList"] = array();


$tdatavw_freee_work_record_summaries_by_nendo[".viewFields"] = array();

$tdatavw_freee_work_record_summaries_by_nendo[".addFields"] = array();

$tdatavw_freee_work_record_summaries_by_nendo[".masterListFields"] = array();
$tdatavw_freee_work_record_summaries_by_nendo[".masterListFields"][] = "nendo";
$tdatavw_freee_work_record_summaries_by_nendo[".masterListFields"][] = "dept_group_id";
$tdatavw_freee_work_record_summaries_by_nendo[".masterListFields"][] = "first_name";
$tdatavw_freee_work_record_summaries_by_nendo[".masterListFields"][] = "total_normal_work_mins";
$tdatavw_freee_work_record_summaries_by_nendo[".masterListFields"][] = "total_overtime_except_normal_work_mins";
$tdatavw_freee_work_record_summaries_by_nendo[".masterListFields"][] = "total_holiday_work_mins";
$tdatavw_freee_work_record_summaries_by_nendo[".masterListFields"][] = "total_latenight_work_mins";
$tdatavw_freee_work_record_summaries_by_nendo[".masterListFields"][] = "num_absences";
$tdatavw_freee_work_record_summaries_by_nendo[".masterListFields"][] = "num_paid_holidays";
$tdatavw_freee_work_record_summaries_by_nendo[".masterListFields"][] = "num_paid_holidays_left";
$tdatavw_freee_work_record_summaries_by_nendo[".masterListFields"][] = "total_lateness_and_early_leaving_mins";
$tdatavw_freee_work_record_summaries_by_nendo[".masterListFields"][] = "start_date";
$tdatavw_freee_work_record_summaries_by_nendo[".masterListFields"][] = "end_date";
$tdatavw_freee_work_record_summaries_by_nendo[".masterListFields"][] = "work_days";
$tdatavw_freee_work_record_summaries_by_nendo[".masterListFields"][] = "total_work_mins";
$tdatavw_freee_work_record_summaries_by_nendo[".masterListFields"][] = "total_excess_statutory_work_mins";
$tdatavw_freee_work_record_summaries_by_nendo[".masterListFields"][] = "total_overtime_within_normal_work_mins";
$tdatavw_freee_work_record_summaries_by_nendo[".masterListFields"][] = "num_substitute_holidays_used";
$tdatavw_freee_work_record_summaries_by_nendo[".masterListFields"][] = "num_compensatory_holidays_used";
$tdatavw_freee_work_record_summaries_by_nendo[".masterListFields"][] = "num_special_holidays_used";
$tdatavw_freee_work_record_summaries_by_nendo[".masterListFields"][] = "birth_date";
$tdatavw_freee_work_record_summaries_by_nendo[".masterListFields"][] = "name";
$tdatavw_freee_work_record_summaries_by_nendo[".masterListFields"][] = "employee_id";
$tdatavw_freee_work_record_summaries_by_nendo[".masterListFields"][] = "user_id";

$tdatavw_freee_work_record_summaries_by_nendo[".inlineAddFields"] = array();

$tdatavw_freee_work_record_summaries_by_nendo[".editFields"] = array();

$tdatavw_freee_work_record_summaries_by_nendo[".inlineEditFields"] = array();

$tdatavw_freee_work_record_summaries_by_nendo[".updateSelectedFields"] = array();


$tdatavw_freee_work_record_summaries_by_nendo[".exportFields"] = array();
$tdatavw_freee_work_record_summaries_by_nendo[".exportFields"][] = "nendo";
$tdatavw_freee_work_record_summaries_by_nendo[".exportFields"][] = "dept_group_id";
$tdatavw_freee_work_record_summaries_by_nendo[".exportFields"][] = "first_name";
$tdatavw_freee_work_record_summaries_by_nendo[".exportFields"][] = "total_normal_work_mins";
$tdatavw_freee_work_record_summaries_by_nendo[".exportFields"][] = "total_overtime_except_normal_work_mins";
$tdatavw_freee_work_record_summaries_by_nendo[".exportFields"][] = "total_holiday_work_mins";
$tdatavw_freee_work_record_summaries_by_nendo[".exportFields"][] = "total_latenight_work_mins";
$tdatavw_freee_work_record_summaries_by_nendo[".exportFields"][] = "num_absences";
$tdatavw_freee_work_record_summaries_by_nendo[".exportFields"][] = "num_paid_holidays";
$tdatavw_freee_work_record_summaries_by_nendo[".exportFields"][] = "num_paid_holidays_left";
$tdatavw_freee_work_record_summaries_by_nendo[".exportFields"][] = "total_lateness_and_early_leaving_mins";
$tdatavw_freee_work_record_summaries_by_nendo[".exportFields"][] = "start_date";
$tdatavw_freee_work_record_summaries_by_nendo[".exportFields"][] = "end_date";
$tdatavw_freee_work_record_summaries_by_nendo[".exportFields"][] = "work_days";
$tdatavw_freee_work_record_summaries_by_nendo[".exportFields"][] = "total_work_mins";
$tdatavw_freee_work_record_summaries_by_nendo[".exportFields"][] = "total_excess_statutory_work_mins";
$tdatavw_freee_work_record_summaries_by_nendo[".exportFields"][] = "total_overtime_within_normal_work_mins";
$tdatavw_freee_work_record_summaries_by_nendo[".exportFields"][] = "num_substitute_holidays_used";
$tdatavw_freee_work_record_summaries_by_nendo[".exportFields"][] = "num_compensatory_holidays_used";
$tdatavw_freee_work_record_summaries_by_nendo[".exportFields"][] = "num_special_holidays_used";
$tdatavw_freee_work_record_summaries_by_nendo[".exportFields"][] = "birth_date";
$tdatavw_freee_work_record_summaries_by_nendo[".exportFields"][] = "name";
$tdatavw_freee_work_record_summaries_by_nendo[".exportFields"][] = "employee_id";
$tdatavw_freee_work_record_summaries_by_nendo[".exportFields"][] = "user_id";

$tdatavw_freee_work_record_summaries_by_nendo[".importFields"] = array();

$tdatavw_freee_work_record_summaries_by_nendo[".printFields"] = array();

//	nendo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "nendo";
	$fdata["GoodName"] = "nendo";
	$fdata["ownerTable"] = "vw_freee_work_record_summaries_by_nendo";
	$fdata["Label"] = GetFieldLabel("vw_freee_work_record_summaries_by_nendo","nendo");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "nendo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`vw_freee_work_record_summaries_by_nendo`.`nendo`";

	
	
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




	$tdatavw_freee_work_record_summaries_by_nendo["nendo"] = $fdata;
//	employee_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "employee_id";
	$fdata["GoodName"] = "employee_id";
	$fdata["ownerTable"] = "vw_freee_work_record_summaries_by_nendo";
	$fdata["Label"] = GetFieldLabel("vw_freee_work_record_summaries_by_nendo","employee_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "employee_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`vw_freee_work_record_summaries_by_nendo`.`employee_id`";

	
	
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




	$tdatavw_freee_work_record_summaries_by_nendo["employee_id"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "vw_freee_work_record_summaries_by_nendo";
	$fdata["Label"] = GetFieldLabel("vw_freee_work_record_summaries_by_nendo","name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`vw_freee_work_record_summaries_by_nendo`.`name`";

	
	
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




	$tdatavw_freee_work_record_summaries_by_nendo["name"] = $fdata;
//	total_normal_work_mins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "total_normal_work_mins";
	$fdata["GoodName"] = "total_normal_work_mins";
	$fdata["ownerTable"] = "vw_freee_work_record_summaries_by_nendo";
	$fdata["Label"] = GetFieldLabel("vw_freee_work_record_summaries_by_nendo","total_normal_work_mins");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "total_normal_work_mins";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`vw_freee_work_record_summaries_by_nendo`.`total_normal_work_mins`";

	
	
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




	$tdatavw_freee_work_record_summaries_by_nendo["total_normal_work_mins"] = $fdata;
//	total_overtime_except_normal_work_mins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "total_overtime_except_normal_work_mins";
	$fdata["GoodName"] = "total_overtime_except_normal_work_mins";
	$fdata["ownerTable"] = "vw_freee_work_record_summaries_by_nendo";
	$fdata["Label"] = GetFieldLabel("vw_freee_work_record_summaries_by_nendo","total_overtime_except_normal_work_mins");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "total_overtime_except_normal_work_mins";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`vw_freee_work_record_summaries_by_nendo`.`total_overtime_except_normal_work_mins`";

	
	
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




	$tdatavw_freee_work_record_summaries_by_nendo["total_overtime_except_normal_work_mins"] = $fdata;
//	total_holiday_work_mins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "total_holiday_work_mins";
	$fdata["GoodName"] = "total_holiday_work_mins";
	$fdata["ownerTable"] = "vw_freee_work_record_summaries_by_nendo";
	$fdata["Label"] = GetFieldLabel("vw_freee_work_record_summaries_by_nendo","total_holiday_work_mins");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "total_holiday_work_mins";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`vw_freee_work_record_summaries_by_nendo`.`total_holiday_work_mins`";

	
	
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




	$tdatavw_freee_work_record_summaries_by_nendo["total_holiday_work_mins"] = $fdata;
//	total_latenight_work_mins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "total_latenight_work_mins";
	$fdata["GoodName"] = "total_latenight_work_mins";
	$fdata["ownerTable"] = "vw_freee_work_record_summaries_by_nendo";
	$fdata["Label"] = GetFieldLabel("vw_freee_work_record_summaries_by_nendo","total_latenight_work_mins");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "total_latenight_work_mins";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`vw_freee_work_record_summaries_by_nendo`.`total_latenight_work_mins`";

	
	
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




	$tdatavw_freee_work_record_summaries_by_nendo["total_latenight_work_mins"] = $fdata;
//	num_absences
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "num_absences";
	$fdata["GoodName"] = "num_absences";
	$fdata["ownerTable"] = "vw_freee_work_record_summaries_by_nendo";
	$fdata["Label"] = GetFieldLabel("vw_freee_work_record_summaries_by_nendo","num_absences");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "num_absences";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`vw_freee_work_record_summaries_by_nendo`.`num_absences`";

	
	
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




	$tdatavw_freee_work_record_summaries_by_nendo["num_absences"] = $fdata;
//	num_paid_holidays
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "num_paid_holidays";
	$fdata["GoodName"] = "num_paid_holidays";
	$fdata["ownerTable"] = "vw_freee_work_record_summaries_by_nendo";
	$fdata["Label"] = GetFieldLabel("vw_freee_work_record_summaries_by_nendo","num_paid_holidays");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "num_paid_holidays";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`vw_freee_work_record_summaries_by_nendo`.`num_paid_holidays`";

	
	
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




	$tdatavw_freee_work_record_summaries_by_nendo["num_paid_holidays"] = $fdata;
//	num_paid_holidays_left
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "num_paid_holidays_left";
	$fdata["GoodName"] = "num_paid_holidays_left";
	$fdata["ownerTable"] = "vw_freee_work_record_summaries_by_nendo";
	$fdata["Label"] = GetFieldLabel("vw_freee_work_record_summaries_by_nendo","num_paid_holidays_left");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "num_paid_holidays_left";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`vw_freee_work_record_summaries_by_nendo`.`num_paid_holidays_left`";

	
	
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




	$tdatavw_freee_work_record_summaries_by_nendo["num_paid_holidays_left"] = $fdata;
//	total_lateness_and_early_leaving_mins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "total_lateness_and_early_leaving_mins";
	$fdata["GoodName"] = "total_lateness_and_early_leaving_mins";
	$fdata["ownerTable"] = "vw_freee_work_record_summaries_by_nendo";
	$fdata["Label"] = GetFieldLabel("vw_freee_work_record_summaries_by_nendo","total_lateness_and_early_leaving_mins");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "total_lateness_and_early_leaving_mins";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`vw_freee_work_record_summaries_by_nendo`.`total_lateness_and_early_leaving_mins`";

	
	
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




	$tdatavw_freee_work_record_summaries_by_nendo["total_lateness_and_early_leaving_mins"] = $fdata;
//	start_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "start_date";
	$fdata["GoodName"] = "start_date";
	$fdata["ownerTable"] = "vw_freee_work_record_summaries_by_nendo";
	$fdata["Label"] = GetFieldLabel("vw_freee_work_record_summaries_by_nendo","start_date");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "start_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`vw_freee_work_record_summaries_by_nendo`.`start_date`";

	
	
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




	$tdatavw_freee_work_record_summaries_by_nendo["start_date"] = $fdata;
//	end_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "end_date";
	$fdata["GoodName"] = "end_date";
	$fdata["ownerTable"] = "vw_freee_work_record_summaries_by_nendo";
	$fdata["Label"] = GetFieldLabel("vw_freee_work_record_summaries_by_nendo","end_date");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "end_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`vw_freee_work_record_summaries_by_nendo`.`end_date`";

	
	
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




	$tdatavw_freee_work_record_summaries_by_nendo["end_date"] = $fdata;
//	work_days
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "work_days";
	$fdata["GoodName"] = "work_days";
	$fdata["ownerTable"] = "vw_freee_work_record_summaries_by_nendo";
	$fdata["Label"] = GetFieldLabel("vw_freee_work_record_summaries_by_nendo","work_days");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "work_days";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`vw_freee_work_record_summaries_by_nendo`.`work_days`";

	
	
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




	$tdatavw_freee_work_record_summaries_by_nendo["work_days"] = $fdata;
//	total_work_mins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "total_work_mins";
	$fdata["GoodName"] = "total_work_mins";
	$fdata["ownerTable"] = "vw_freee_work_record_summaries_by_nendo";
	$fdata["Label"] = GetFieldLabel("vw_freee_work_record_summaries_by_nendo","total_work_mins");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "total_work_mins";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`vw_freee_work_record_summaries_by_nendo`.`total_work_mins`";

	
	
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




	$tdatavw_freee_work_record_summaries_by_nendo["total_work_mins"] = $fdata;
//	total_excess_statutory_work_mins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "total_excess_statutory_work_mins";
	$fdata["GoodName"] = "total_excess_statutory_work_mins";
	$fdata["ownerTable"] = "vw_freee_work_record_summaries_by_nendo";
	$fdata["Label"] = GetFieldLabel("vw_freee_work_record_summaries_by_nendo","total_excess_statutory_work_mins");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "total_excess_statutory_work_mins";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`vw_freee_work_record_summaries_by_nendo`.`total_excess_statutory_work_mins`";

	
	
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




	$tdatavw_freee_work_record_summaries_by_nendo["total_excess_statutory_work_mins"] = $fdata;
//	total_overtime_within_normal_work_mins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "total_overtime_within_normal_work_mins";
	$fdata["GoodName"] = "total_overtime_within_normal_work_mins";
	$fdata["ownerTable"] = "vw_freee_work_record_summaries_by_nendo";
	$fdata["Label"] = GetFieldLabel("vw_freee_work_record_summaries_by_nendo","total_overtime_within_normal_work_mins");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "total_overtime_within_normal_work_mins";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`vw_freee_work_record_summaries_by_nendo`.`total_overtime_within_normal_work_mins`";

	
	
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




	$tdatavw_freee_work_record_summaries_by_nendo["total_overtime_within_normal_work_mins"] = $fdata;
//	num_substitute_holidays_used
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "num_substitute_holidays_used";
	$fdata["GoodName"] = "num_substitute_holidays_used";
	$fdata["ownerTable"] = "vw_freee_work_record_summaries_by_nendo";
	$fdata["Label"] = GetFieldLabel("vw_freee_work_record_summaries_by_nendo","num_substitute_holidays_used");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "num_substitute_holidays_used";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`vw_freee_work_record_summaries_by_nendo`.`num_substitute_holidays_used`";

	
	
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




	$tdatavw_freee_work_record_summaries_by_nendo["num_substitute_holidays_used"] = $fdata;
//	num_compensatory_holidays_used
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "num_compensatory_holidays_used";
	$fdata["GoodName"] = "num_compensatory_holidays_used";
	$fdata["ownerTable"] = "vw_freee_work_record_summaries_by_nendo";
	$fdata["Label"] = GetFieldLabel("vw_freee_work_record_summaries_by_nendo","num_compensatory_holidays_used");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "num_compensatory_holidays_used";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`vw_freee_work_record_summaries_by_nendo`.`num_compensatory_holidays_used`";

	
	
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




	$tdatavw_freee_work_record_summaries_by_nendo["num_compensatory_holidays_used"] = $fdata;
//	num_special_holidays_used
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "num_special_holidays_used";
	$fdata["GoodName"] = "num_special_holidays_used";
	$fdata["ownerTable"] = "vw_freee_work_record_summaries_by_nendo";
	$fdata["Label"] = GetFieldLabel("vw_freee_work_record_summaries_by_nendo","num_special_holidays_used");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "num_special_holidays_used";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`vw_freee_work_record_summaries_by_nendo`.`num_special_holidays_used`";

	
	
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




	$tdatavw_freee_work_record_summaries_by_nendo["num_special_holidays_used"] = $fdata;
//	birth_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "birth_date";
	$fdata["GoodName"] = "birth_date";
	$fdata["ownerTable"] = "vw_freee_work_record_summaries_by_nendo";
	$fdata["Label"] = GetFieldLabel("vw_freee_work_record_summaries_by_nendo","birth_date");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "birth_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`vw_freee_work_record_summaries_by_nendo`.`birth_date`";

	
	
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




	$tdatavw_freee_work_record_summaries_by_nendo["birth_date"] = $fdata;
//	user_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "user_id";
	$fdata["GoodName"] = "user_id";
	$fdata["ownerTable"] = "vw_freee_work_record_summaries_by_nendo";
	$fdata["Label"] = GetFieldLabel("vw_freee_work_record_summaries_by_nendo","user_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "user_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`vw_freee_work_record_summaries_by_nendo`.`user_id`";

	
	
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




	$tdatavw_freee_work_record_summaries_by_nendo["user_id"] = $fdata;
//	first_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "first_name";
	$fdata["GoodName"] = "first_name";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("vw_freee_work_record_summaries_by_nendo","first_name");
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




	$tdatavw_freee_work_record_summaries_by_nendo["first_name"] = $fdata;
//	dept_group_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "dept_group_id";
	$fdata["GoodName"] = "dept_group_id";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("vw_freee_work_record_summaries_by_nendo","dept_group_id");
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




	$tdatavw_freee_work_record_summaries_by_nendo["dept_group_id"] = $fdata;


$tables_data["vw_freee_work_record_summaries_by_nendo"]=&$tdatavw_freee_work_record_summaries_by_nendo;
$field_labels["vw_freee_work_record_summaries_by_nendo"] = &$fieldLabelsvw_freee_work_record_summaries_by_nendo;
$fieldToolTips["vw_freee_work_record_summaries_by_nendo"] = &$fieldToolTipsvw_freee_work_record_summaries_by_nendo;
$placeHolders["vw_freee_work_record_summaries_by_nendo"] = &$placeHoldersvw_freee_work_record_summaries_by_nendo;
$page_titles["vw_freee_work_record_summaries_by_nendo"] = &$pageTitlesvw_freee_work_record_summaries_by_nendo;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["vw_freee_work_record_summaries_by_nendo"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["vw_freee_work_record_summaries_by_nendo"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_vw_freee_work_record_summaries_by_nendo()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`vw_freee_work_record_summaries_by_nendo`.`nendo`,  `vw_freee_work_record_summaries_by_nendo`.`employee_id`,  `vw_freee_work_record_summaries_by_nendo`.`name`,  `vw_freee_work_record_summaries_by_nendo`.`total_normal_work_mins`,  `vw_freee_work_record_summaries_by_nendo`.`total_overtime_except_normal_work_mins`,  `vw_freee_work_record_summaries_by_nendo`.`total_holiday_work_mins`,  `vw_freee_work_record_summaries_by_nendo`.`total_latenight_work_mins`,  `vw_freee_work_record_summaries_by_nendo`.`num_absences`,  `vw_freee_work_record_summaries_by_nendo`.`num_paid_holidays`,  `vw_freee_work_record_summaries_by_nendo`.`num_paid_holidays_left`,  `vw_freee_work_record_summaries_by_nendo`.`total_lateness_and_early_leaving_mins`,  `vw_freee_work_record_summaries_by_nendo`.`start_date`,  `vw_freee_work_record_summaries_by_nendo`.`end_date`,  `vw_freee_work_record_summaries_by_nendo`.`work_days`,  `vw_freee_work_record_summaries_by_nendo`.`total_work_mins`,  `vw_freee_work_record_summaries_by_nendo`.`total_excess_statutory_work_mins`,  `vw_freee_work_record_summaries_by_nendo`.`total_overtime_within_normal_work_mins`,  `vw_freee_work_record_summaries_by_nendo`.`num_substitute_holidays_used`,  `vw_freee_work_record_summaries_by_nendo`.`num_compensatory_holidays_used`,  `vw_freee_work_record_summaries_by_nendo`.`num_special_holidays_used`,  `vw_freee_work_record_summaries_by_nendo`.`birth_date`,  `vw_freee_work_record_summaries_by_nendo`.`user_id`,  `users`.`first_name`,  `users`.`dept_group_id`";
$proto0["m_strFrom"] = "FROM `vw_freee_work_record_summaries_by_nendo`  LEFT OUTER JOIN `users` ON `vw_freee_work_record_summaries_by_nendo`.`user_id` = `users`.`user_id`";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY `vw_freee_work_record_summaries_by_nendo`.`nendo` DESC, `vw_freee_work_record_summaries_by_nendo`.`employee_id`";
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
	"m_strName" => "nendo",
	"m_strTable" => "vw_freee_work_record_summaries_by_nendo",
	"m_srcTableName" => "vw_freee_work_record_summaries_by_nendo"
));

$proto6["m_sql"] = "`vw_freee_work_record_summaries_by_nendo`.`nendo`";
$proto6["m_srcTableName"] = "vw_freee_work_record_summaries_by_nendo";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "employee_id",
	"m_strTable" => "vw_freee_work_record_summaries_by_nendo",
	"m_srcTableName" => "vw_freee_work_record_summaries_by_nendo"
));

$proto8["m_sql"] = "`vw_freee_work_record_summaries_by_nendo`.`employee_id`";
$proto8["m_srcTableName"] = "vw_freee_work_record_summaries_by_nendo";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "vw_freee_work_record_summaries_by_nendo",
	"m_srcTableName" => "vw_freee_work_record_summaries_by_nendo"
));

$proto10["m_sql"] = "`vw_freee_work_record_summaries_by_nendo`.`name`";
$proto10["m_srcTableName"] = "vw_freee_work_record_summaries_by_nendo";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "total_normal_work_mins",
	"m_strTable" => "vw_freee_work_record_summaries_by_nendo",
	"m_srcTableName" => "vw_freee_work_record_summaries_by_nendo"
));

$proto12["m_sql"] = "`vw_freee_work_record_summaries_by_nendo`.`total_normal_work_mins`";
$proto12["m_srcTableName"] = "vw_freee_work_record_summaries_by_nendo";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "total_overtime_except_normal_work_mins",
	"m_strTable" => "vw_freee_work_record_summaries_by_nendo",
	"m_srcTableName" => "vw_freee_work_record_summaries_by_nendo"
));

$proto14["m_sql"] = "`vw_freee_work_record_summaries_by_nendo`.`total_overtime_except_normal_work_mins`";
$proto14["m_srcTableName"] = "vw_freee_work_record_summaries_by_nendo";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "total_holiday_work_mins",
	"m_strTable" => "vw_freee_work_record_summaries_by_nendo",
	"m_srcTableName" => "vw_freee_work_record_summaries_by_nendo"
));

$proto16["m_sql"] = "`vw_freee_work_record_summaries_by_nendo`.`total_holiday_work_mins`";
$proto16["m_srcTableName"] = "vw_freee_work_record_summaries_by_nendo";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "total_latenight_work_mins",
	"m_strTable" => "vw_freee_work_record_summaries_by_nendo",
	"m_srcTableName" => "vw_freee_work_record_summaries_by_nendo"
));

$proto18["m_sql"] = "`vw_freee_work_record_summaries_by_nendo`.`total_latenight_work_mins`";
$proto18["m_srcTableName"] = "vw_freee_work_record_summaries_by_nendo";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "num_absences",
	"m_strTable" => "vw_freee_work_record_summaries_by_nendo",
	"m_srcTableName" => "vw_freee_work_record_summaries_by_nendo"
));

$proto20["m_sql"] = "`vw_freee_work_record_summaries_by_nendo`.`num_absences`";
$proto20["m_srcTableName"] = "vw_freee_work_record_summaries_by_nendo";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "num_paid_holidays",
	"m_strTable" => "vw_freee_work_record_summaries_by_nendo",
	"m_srcTableName" => "vw_freee_work_record_summaries_by_nendo"
));

$proto22["m_sql"] = "`vw_freee_work_record_summaries_by_nendo`.`num_paid_holidays`";
$proto22["m_srcTableName"] = "vw_freee_work_record_summaries_by_nendo";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "num_paid_holidays_left",
	"m_strTable" => "vw_freee_work_record_summaries_by_nendo",
	"m_srcTableName" => "vw_freee_work_record_summaries_by_nendo"
));

$proto24["m_sql"] = "`vw_freee_work_record_summaries_by_nendo`.`num_paid_holidays_left`";
$proto24["m_srcTableName"] = "vw_freee_work_record_summaries_by_nendo";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "total_lateness_and_early_leaving_mins",
	"m_strTable" => "vw_freee_work_record_summaries_by_nendo",
	"m_srcTableName" => "vw_freee_work_record_summaries_by_nendo"
));

$proto26["m_sql"] = "`vw_freee_work_record_summaries_by_nendo`.`total_lateness_and_early_leaving_mins`";
$proto26["m_srcTableName"] = "vw_freee_work_record_summaries_by_nendo";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "start_date",
	"m_strTable" => "vw_freee_work_record_summaries_by_nendo",
	"m_srcTableName" => "vw_freee_work_record_summaries_by_nendo"
));

$proto28["m_sql"] = "`vw_freee_work_record_summaries_by_nendo`.`start_date`";
$proto28["m_srcTableName"] = "vw_freee_work_record_summaries_by_nendo";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "end_date",
	"m_strTable" => "vw_freee_work_record_summaries_by_nendo",
	"m_srcTableName" => "vw_freee_work_record_summaries_by_nendo"
));

$proto30["m_sql"] = "`vw_freee_work_record_summaries_by_nendo`.`end_date`";
$proto30["m_srcTableName"] = "vw_freee_work_record_summaries_by_nendo";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "work_days",
	"m_strTable" => "vw_freee_work_record_summaries_by_nendo",
	"m_srcTableName" => "vw_freee_work_record_summaries_by_nendo"
));

$proto32["m_sql"] = "`vw_freee_work_record_summaries_by_nendo`.`work_days`";
$proto32["m_srcTableName"] = "vw_freee_work_record_summaries_by_nendo";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "total_work_mins",
	"m_strTable" => "vw_freee_work_record_summaries_by_nendo",
	"m_srcTableName" => "vw_freee_work_record_summaries_by_nendo"
));

$proto34["m_sql"] = "`vw_freee_work_record_summaries_by_nendo`.`total_work_mins`";
$proto34["m_srcTableName"] = "vw_freee_work_record_summaries_by_nendo";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "total_excess_statutory_work_mins",
	"m_strTable" => "vw_freee_work_record_summaries_by_nendo",
	"m_srcTableName" => "vw_freee_work_record_summaries_by_nendo"
));

$proto36["m_sql"] = "`vw_freee_work_record_summaries_by_nendo`.`total_excess_statutory_work_mins`";
$proto36["m_srcTableName"] = "vw_freee_work_record_summaries_by_nendo";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "total_overtime_within_normal_work_mins",
	"m_strTable" => "vw_freee_work_record_summaries_by_nendo",
	"m_srcTableName" => "vw_freee_work_record_summaries_by_nendo"
));

$proto38["m_sql"] = "`vw_freee_work_record_summaries_by_nendo`.`total_overtime_within_normal_work_mins`";
$proto38["m_srcTableName"] = "vw_freee_work_record_summaries_by_nendo";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "num_substitute_holidays_used",
	"m_strTable" => "vw_freee_work_record_summaries_by_nendo",
	"m_srcTableName" => "vw_freee_work_record_summaries_by_nendo"
));

$proto40["m_sql"] = "`vw_freee_work_record_summaries_by_nendo`.`num_substitute_holidays_used`";
$proto40["m_srcTableName"] = "vw_freee_work_record_summaries_by_nendo";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "num_compensatory_holidays_used",
	"m_strTable" => "vw_freee_work_record_summaries_by_nendo",
	"m_srcTableName" => "vw_freee_work_record_summaries_by_nendo"
));

$proto42["m_sql"] = "`vw_freee_work_record_summaries_by_nendo`.`num_compensatory_holidays_used`";
$proto42["m_srcTableName"] = "vw_freee_work_record_summaries_by_nendo";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "num_special_holidays_used",
	"m_strTable" => "vw_freee_work_record_summaries_by_nendo",
	"m_srcTableName" => "vw_freee_work_record_summaries_by_nendo"
));

$proto44["m_sql"] = "`vw_freee_work_record_summaries_by_nendo`.`num_special_holidays_used`";
$proto44["m_srcTableName"] = "vw_freee_work_record_summaries_by_nendo";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "birth_date",
	"m_strTable" => "vw_freee_work_record_summaries_by_nendo",
	"m_srcTableName" => "vw_freee_work_record_summaries_by_nendo"
));

$proto46["m_sql"] = "`vw_freee_work_record_summaries_by_nendo`.`birth_date`";
$proto46["m_srcTableName"] = "vw_freee_work_record_summaries_by_nendo";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "user_id",
	"m_strTable" => "vw_freee_work_record_summaries_by_nendo",
	"m_srcTableName" => "vw_freee_work_record_summaries_by_nendo"
));

$proto48["m_sql"] = "`vw_freee_work_record_summaries_by_nendo`.`user_id`";
$proto48["m_srcTableName"] = "vw_freee_work_record_summaries_by_nendo";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "first_name",
	"m_strTable" => "users",
	"m_srcTableName" => "vw_freee_work_record_summaries_by_nendo"
));

$proto50["m_sql"] = "`users`.`first_name`";
$proto50["m_srcTableName"] = "vw_freee_work_record_summaries_by_nendo";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "dept_group_id",
	"m_strTable" => "users",
	"m_srcTableName" => "vw_freee_work_record_summaries_by_nendo"
));

$proto52["m_sql"] = "`users`.`dept_group_id`";
$proto52["m_srcTableName"] = "vw_freee_work_record_summaries_by_nendo";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto54=array();
$proto54["m_link"] = "SQLL_MAIN";
			$proto55=array();
$proto55["m_strName"] = "vw_freee_work_record_summaries_by_nendo";
$proto55["m_srcTableName"] = "vw_freee_work_record_summaries_by_nendo";
$proto55["m_columns"] = array();
$proto55["m_columns"][] = "nendo";
$proto55["m_columns"][] = "employee_id";
$proto55["m_columns"][] = "name";
$proto55["m_columns"][] = "birth_date";
$proto55["m_columns"][] = "user_id";
$proto55["m_columns"][] = "total_normal_work_mins";
$proto55["m_columns"][] = "total_overtime_except_normal_work_mins";
$proto55["m_columns"][] = "total_holiday_work_mins";
$proto55["m_columns"][] = "total_latenight_work_mins";
$proto55["m_columns"][] = "num_absences";
$proto55["m_columns"][] = "num_paid_holidays";
$proto55["m_columns"][] = "num_paid_holidays_left";
$proto55["m_columns"][] = "total_lateness_and_early_leaving_mins";
$proto55["m_columns"][] = "start_date";
$proto55["m_columns"][] = "end_date";
$proto55["m_columns"][] = "work_days";
$proto55["m_columns"][] = "total_work_mins";
$proto55["m_columns"][] = "total_excess_statutory_work_mins";
$proto55["m_columns"][] = "total_overtime_within_normal_work_mins";
$proto55["m_columns"][] = "num_substitute_holidays_used";
$proto55["m_columns"][] = "num_compensatory_holidays_used";
$proto55["m_columns"][] = "num_special_holidays_used";
$obj = new SQLTable($proto55);

$proto54["m_table"] = $obj;
$proto54["m_sql"] = "`vw_freee_work_record_summaries_by_nendo`";
$proto54["m_alias"] = "";
$proto54["m_srcTableName"] = "vw_freee_work_record_summaries_by_nendo";
$proto56=array();
$proto56["m_sql"] = "";
$proto56["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto56["m_column"]=$obj;
$proto56["m_contained"] = array();
$proto56["m_strCase"] = "";
$proto56["m_havingmode"] = false;
$proto56["m_inBrackets"] = false;
$proto56["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto56);

$proto54["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto54);

$proto0["m_fromlist"][]=$obj;
												$proto58=array();
$proto58["m_link"] = "SQLL_LEFTJOIN";
			$proto59=array();
$proto59["m_strName"] = "users";
$proto59["m_srcTableName"] = "vw_freee_work_record_summaries_by_nendo";
$proto59["m_columns"] = array();
$proto59["m_columns"][] = "user_id";
$proto59["m_columns"][] = "user_login";
$proto59["m_columns"][] = "user_password";
$proto59["m_columns"][] = "first_name";
$proto59["m_columns"][] = "last_name";
$proto59["m_columns"][] = "title";
$proto59["m_columns"][] = "group_id";
$proto59["m_columns"][] = "english_name";
$proto59["m_columns"][] = "phone_home";
$proto59["m_columns"][] = "phone_work";
$proto59["m_columns"][] = "phone_day";
$proto59["m_columns"][] = "phone_cell";
$proto59["m_columns"][] = "phone_evening";
$proto59["m_columns"][] = "fax";
$proto59["m_columns"][] = "email";
$proto59["m_columns"][] = "notes";
$proto59["m_columns"][] = "card_number";
$proto59["m_columns"][] = "card_expire_date";
$proto59["m_columns"][] = "country_id";
$proto59["m_columns"][] = "state_id";
$proto59["m_columns"][] = "city";
$proto59["m_columns"][] = "zip";
$proto59["m_columns"][] = "address1";
$proto59["m_columns"][] = "address2";
$proto59["m_columns"][] = "address3";
$proto59["m_columns"][] = "date_add";
$proto59["m_columns"][] = "date_last_login";
$proto59["m_columns"][] = "ip_add";
$proto59["m_columns"][] = "ip_update";
$proto59["m_columns"][] = "language_id";
$proto59["m_columns"][] = "image_url";
$proto59["m_columns"][] = "age_id";
$proto59["m_columns"][] = "gender_id";
$proto59["m_columns"][] = "education_id";
$proto59["m_columns"][] = "income_id";
$proto59["m_columns"][] = "user_SSN";
$proto59["m_columns"][] = "total_purchase";
$proto59["m_columns"][] = "tatal_sales";
$proto59["m_columns"][] = "template";
$proto59["m_columns"][] = "cw_task_id";
$proto59["m_columns"][] = "cw_TO_id";
$proto59["m_columns"][] = "label_print_now";
$proto59["m_columns"][] = "dept_group_id";
$obj = new SQLTable($proto59);

$proto58["m_table"] = $obj;
$proto58["m_sql"] = "LEFT OUTER JOIN `users` ON `vw_freee_work_record_summaries_by_nendo`.`user_id` = `users`.`user_id`";
$proto58["m_alias"] = "";
$proto58["m_srcTableName"] = "vw_freee_work_record_summaries_by_nendo";
$proto60=array();
$proto60["m_sql"] = "`vw_freee_work_record_summaries_by_nendo`.`user_id` = `users`.`user_id`";
$proto60["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "user_id",
	"m_strTable" => "vw_freee_work_record_summaries_by_nendo",
	"m_srcTableName" => "vw_freee_work_record_summaries_by_nendo"
));

$proto60["m_column"]=$obj;
$proto60["m_contained"] = array();
$proto60["m_strCase"] = "= `users`.`user_id`";
$proto60["m_havingmode"] = false;
$proto60["m_inBrackets"] = false;
$proto60["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto60);

$proto58["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto58);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto62=array();
						$obj = new SQLField(array(
	"m_strName" => "nendo",
	"m_strTable" => "vw_freee_work_record_summaries_by_nendo",
	"m_srcTableName" => "vw_freee_work_record_summaries_by_nendo"
));

$proto62["m_column"]=$obj;
$proto62["m_bAsc"] = 0;
$proto62["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto62);

$proto0["m_orderby"][]=$obj;					
												$proto64=array();
						$obj = new SQLField(array(
	"m_strName" => "employee_id",
	"m_strTable" => "vw_freee_work_record_summaries_by_nendo",
	"m_srcTableName" => "vw_freee_work_record_summaries_by_nendo"
));

$proto64["m_column"]=$obj;
$proto64["m_bAsc"] = 1;
$proto64["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto64);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="vw_freee_work_record_summaries_by_nendo";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_vw_freee_work_record_summaries_by_nendo = createSqlQuery_vw_freee_work_record_summaries_by_nendo();


	
		;

																								

$tdatavw_freee_work_record_summaries_by_nendo[".sqlquery"] = $queryData_vw_freee_work_record_summaries_by_nendo;

$tableEvents["vw_freee_work_record_summaries_by_nendo"] = new eventsBase;
$tdatavw_freee_work_record_summaries_by_nendo[".hasEvents"] = false;

?>