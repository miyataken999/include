<?php
require_once(getabspath("classes/cipherer.php"));




$tdatalounge_report__buy_takuhai = array();
	$tdatalounge_report__buy_takuhai[".truncateText"] = true;
	$tdatalounge_report__buy_takuhai[".NumberOfChars"] = 80;
	$tdatalounge_report__buy_takuhai[".ShortName"] = "lounge_report__buy_takuhai";
	$tdatalounge_report__buy_takuhai[".OwnerID"] = "";
	$tdatalounge_report__buy_takuhai[".OriginalTable"] = "lounge_report__buy_takuhai";

//	field labels
$fieldLabelslounge_report__buy_takuhai = array();
$fieldToolTipslounge_report__buy_takuhai = array();
$pageTitleslounge_report__buy_takuhai = array();
$placeHolderslounge_report__buy_takuhai = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelslounge_report__buy_takuhai["Japanese"] = array();
	$fieldToolTipslounge_report__buy_takuhai["Japanese"] = array();
	$placeHolderslounge_report__buy_takuhai["Japanese"] = array();
	$pageTitleslounge_report__buy_takuhai["Japanese"] = array();
	$fieldLabelslounge_report__buy_takuhai["Japanese"]["date"] = "Date";
	$fieldToolTipslounge_report__buy_takuhai["Japanese"]["date"] = "";
	$placeHolderslounge_report__buy_takuhai["Japanese"]["date"] = "";
	$fieldLabelslounge_report__buy_takuhai["Japanese"]["updated_at"] = "更新日";
	$fieldToolTipslounge_report__buy_takuhai["Japanese"]["updated_at"] = "";
	$placeHolderslounge_report__buy_takuhai["Japanese"]["updated_at"] = "";
	$fieldLabelslounge_report__buy_takuhai["Japanese"]["kin_awazu_count"] = "金　合わず";
	$fieldToolTipslounge_report__buy_takuhai["Japanese"]["kin_awazu_count"] = "";
	$placeHolderslounge_report__buy_takuhai["Japanese"]["kin_awazu_count"] = "";
	$fieldLabelslounge_report__buy_takuhai["Japanese"]["kin_seiyaku_count"] = "金　成約";
	$fieldToolTipslounge_report__buy_takuhai["Japanese"]["kin_seiyaku_count"] = "";
	$placeHolderslounge_report__buy_takuhai["Japanese"]["kin_seiyaku_count"] = "";
	$fieldLabelslounge_report__buy_takuhai["Japanese"]["kin_price"] = "金　買取総額";
	$fieldToolTipslounge_report__buy_takuhai["Japanese"]["kin_price"] = "";
	$placeHolderslounge_report__buy_takuhai["Japanese"]["kin_price"] = "";
	$fieldLabelslounge_report__buy_takuhai["Japanese"]["dia_awazu_count"] = "ダイヤ　合わず";
	$fieldToolTipslounge_report__buy_takuhai["Japanese"]["dia_awazu_count"] = "";
	$placeHolderslounge_report__buy_takuhai["Japanese"]["dia_awazu_count"] = "";
	$fieldLabelslounge_report__buy_takuhai["Japanese"]["dia_seiyaku_count"] = "ダイヤ　成約";
	$fieldToolTipslounge_report__buy_takuhai["Japanese"]["dia_seiyaku_count"] = "";
	$placeHolderslounge_report__buy_takuhai["Japanese"]["dia_seiyaku_count"] = "";
	$fieldLabelslounge_report__buy_takuhai["Japanese"]["dia_price"] = "ダイヤ　買取総額";
	$fieldToolTipslounge_report__buy_takuhai["Japanese"]["dia_price"] = "";
	$placeHolderslounge_report__buy_takuhai["Japanese"]["dia_price"] = "";
	$fieldLabelslounge_report__buy_takuhai["Japanese"]["jewel_awazu_count"] = "宝石　合わず";
	$fieldToolTipslounge_report__buy_takuhai["Japanese"]["jewel_awazu_count"] = "";
	$placeHolderslounge_report__buy_takuhai["Japanese"]["jewel_awazu_count"] = "";
	$fieldLabelslounge_report__buy_takuhai["Japanese"]["jewel_seiyaku_count"] = "宝石　成約";
	$fieldToolTipslounge_report__buy_takuhai["Japanese"]["jewel_seiyaku_count"] = "";
	$placeHolderslounge_report__buy_takuhai["Japanese"]["jewel_seiyaku_count"] = "";
	$fieldLabelslounge_report__buy_takuhai["Japanese"]["jewel_price"] = "宝石　買取総額";
	$fieldToolTipslounge_report__buy_takuhai["Japanese"]["jewel_price"] = "";
	$placeHolderslounge_report__buy_takuhai["Japanese"]["jewel_price"] = "";
	$fieldLabelslounge_report__buy_takuhai["Japanese"]["watch_awazu_count"] = "時計　合わず";
	$fieldToolTipslounge_report__buy_takuhai["Japanese"]["watch_awazu_count"] = "";
	$placeHolderslounge_report__buy_takuhai["Japanese"]["watch_awazu_count"] = "";
	$fieldLabelslounge_report__buy_takuhai["Japanese"]["watch_seiyaku_count"] = "時計　成約";
	$fieldToolTipslounge_report__buy_takuhai["Japanese"]["watch_seiyaku_count"] = "";
	$placeHolderslounge_report__buy_takuhai["Japanese"]["watch_seiyaku_count"] = "";
	$fieldLabelslounge_report__buy_takuhai["Japanese"]["watch_price"] = "時計　買取総額";
	$fieldToolTipslounge_report__buy_takuhai["Japanese"]["watch_price"] = "";
	$placeHolderslounge_report__buy_takuhai["Japanese"]["watch_price"] = "";
	$fieldLabelslounge_report__buy_takuhai["Japanese"]["brand_awazu_count"] = "服飾　合わず";
	$fieldToolTipslounge_report__buy_takuhai["Japanese"]["brand_awazu_count"] = "";
	$placeHolderslounge_report__buy_takuhai["Japanese"]["brand_awazu_count"] = "";
	$fieldLabelslounge_report__buy_takuhai["Japanese"]["brand_seiyaku_count"] = "服飾　成約";
	$fieldToolTipslounge_report__buy_takuhai["Japanese"]["brand_seiyaku_count"] = "";
	$placeHolderslounge_report__buy_takuhai["Japanese"]["brand_seiyaku_count"] = "";
	$fieldLabelslounge_report__buy_takuhai["Japanese"]["brand_price"] = "服飾　買取総額";
	$fieldToolTipslounge_report__buy_takuhai["Japanese"]["brand_price"] = "";
	$placeHolderslounge_report__buy_takuhai["Japanese"]["brand_price"] = "";
	$fieldLabelslounge_report__buy_takuhai["Japanese"]["hansoku_price"] = "販促費";
	$fieldToolTipslounge_report__buy_takuhai["Japanese"]["hansoku_price"] = "";
	$placeHolderslounge_report__buy_takuhai["Japanese"]["hansoku_price"] = "";
	$fieldLabelslounge_report__buy_takuhai["Japanese"]["total_price"] = "宅買取総額";
	$fieldToolTipslounge_report__buy_takuhai["Japanese"]["total_price"] = "";
	$placeHolderslounge_report__buy_takuhai["Japanese"]["total_price"] = "";
	$fieldLabelslounge_report__buy_takuhai["Japanese"]["kin_received_count"] = "金　純新到着人数";
	$fieldToolTipslounge_report__buy_takuhai["Japanese"]["kin_received_count"] = "";
	$placeHolderslounge_report__buy_takuhai["Japanese"]["kin_received_count"] = "";
	$fieldLabelslounge_report__buy_takuhai["Japanese"]["dia_received_count"] = "ダイヤ　純新到着人数";
	$fieldToolTipslounge_report__buy_takuhai["Japanese"]["dia_received_count"] = "";
	$placeHolderslounge_report__buy_takuhai["Japanese"]["dia_received_count"] = "";
	$fieldLabelslounge_report__buy_takuhai["Japanese"]["brand_received_count"] = "服飾　純新到着人数";
	$fieldToolTipslounge_report__buy_takuhai["Japanese"]["brand_received_count"] = "";
	$placeHolderslounge_report__buy_takuhai["Japanese"]["brand_received_count"] = "";
	$fieldLabelslounge_report__buy_takuhai["Japanese"]["kin_received_box_count"] = "金　純新到着箱数";
	$fieldToolTipslounge_report__buy_takuhai["Japanese"]["kin_received_box_count"] = "";
	$placeHolderslounge_report__buy_takuhai["Japanese"]["kin_received_box_count"] = "";
	$fieldLabelslounge_report__buy_takuhai["Japanese"]["dia_received_box_count"] = "ダイヤ　純新到着箱数";
	$fieldToolTipslounge_report__buy_takuhai["Japanese"]["dia_received_box_count"] = "";
	$placeHolderslounge_report__buy_takuhai["Japanese"]["dia_received_box_count"] = "";
	$fieldLabelslounge_report__buy_takuhai["Japanese"]["brand_received_box_count"] = "服飾　純新到着箱数";
	$fieldToolTipslounge_report__buy_takuhai["Japanese"]["brand_received_box_count"] = "";
	$placeHolderslounge_report__buy_takuhai["Japanese"]["brand_received_box_count"] = "";
	$fieldLabelslounge_report__buy_takuhai["Japanese"]["kin_received_count_sairai"] = "金　再来到着人数";
	$fieldToolTipslounge_report__buy_takuhai["Japanese"]["kin_received_count_sairai"] = "";
	$placeHolderslounge_report__buy_takuhai["Japanese"]["kin_received_count_sairai"] = "";
	$fieldLabelslounge_report__buy_takuhai["Japanese"]["dia_received_count_sairai"] = "ダイヤ　再来到着人数";
	$fieldToolTipslounge_report__buy_takuhai["Japanese"]["dia_received_count_sairai"] = "";
	$placeHolderslounge_report__buy_takuhai["Japanese"]["dia_received_count_sairai"] = "";
	$fieldLabelslounge_report__buy_takuhai["Japanese"]["brand_received_count_sairai"] = "服飾　再来到着人数";
	$fieldToolTipslounge_report__buy_takuhai["Japanese"]["brand_received_count_sairai"] = "";
	$placeHolderslounge_report__buy_takuhai["Japanese"]["brand_received_count_sairai"] = "";
	$fieldLabelslounge_report__buy_takuhai["Japanese"]["kin_received_box_count_sairai"] = "金　再来到着箱数";
	$fieldToolTipslounge_report__buy_takuhai["Japanese"]["kin_received_box_count_sairai"] = "";
	$placeHolderslounge_report__buy_takuhai["Japanese"]["kin_received_box_count_sairai"] = "";
	$fieldLabelslounge_report__buy_takuhai["Japanese"]["dia_received_box_count_sairai"] = "ダイヤ　再来到着箱数";
	$fieldToolTipslounge_report__buy_takuhai["Japanese"]["dia_received_box_count_sairai"] = "";
	$placeHolderslounge_report__buy_takuhai["Japanese"]["dia_received_box_count_sairai"] = "";
	$fieldLabelslounge_report__buy_takuhai["Japanese"]["brand_received_box_count_sairai"] = "服飾　再来到着箱数";
	$fieldToolTipslounge_report__buy_takuhai["Japanese"]["brand_received_box_count_sairai"] = "";
	$placeHolderslounge_report__buy_takuhai["Japanese"]["brand_received_box_count_sairai"] = "";
	$fieldLabelslounge_report__buy_takuhai["Japanese"]["total_received_count"] = "到着人数";
	$fieldToolTipslounge_report__buy_takuhai["Japanese"]["total_received_count"] = "";
	$placeHolderslounge_report__buy_takuhai["Japanese"]["total_received_count"] = "";
	$fieldLabelslounge_report__buy_takuhai["Japanese"]["total_received_box_count"] = "到着箱数";
	$fieldToolTipslounge_report__buy_takuhai["Japanese"]["total_received_box_count"] = "";
	$placeHolderslounge_report__buy_takuhai["Japanese"]["total_received_box_count"] = "";
	$fieldLabelslounge_report__buy_takuhai["Japanese"]["jewel_received_count"] = "宝石　純新到着人数";
	$fieldToolTipslounge_report__buy_takuhai["Japanese"]["jewel_received_count"] = "";
	$placeHolderslounge_report__buy_takuhai["Japanese"]["jewel_received_count"] = "";
	$fieldLabelslounge_report__buy_takuhai["Japanese"]["jewel_received_box_count"] = "宝石　純新到着箱数";
	$fieldToolTipslounge_report__buy_takuhai["Japanese"]["jewel_received_box_count"] = "";
	$placeHolderslounge_report__buy_takuhai["Japanese"]["jewel_received_box_count"] = "";
	$fieldLabelslounge_report__buy_takuhai["Japanese"]["jewel_received_count_sairai"] = "宝石　再来到着人数";
	$fieldToolTipslounge_report__buy_takuhai["Japanese"]["jewel_received_count_sairai"] = "";
	$placeHolderslounge_report__buy_takuhai["Japanese"]["jewel_received_count_sairai"] = "";
	$fieldLabelslounge_report__buy_takuhai["Japanese"]["jewel_received_box_count_sairai"] = "宝石　再来到着箱数";
	$fieldToolTipslounge_report__buy_takuhai["Japanese"]["jewel_received_box_count_sairai"] = "";
	$placeHolderslounge_report__buy_takuhai["Japanese"]["jewel_received_box_count_sairai"] = "";
	$fieldLabelslounge_report__buy_takuhai["Japanese"]["watch_received_count"] = "時計　純新到着人数";
	$fieldToolTipslounge_report__buy_takuhai["Japanese"]["watch_received_count"] = "";
	$placeHolderslounge_report__buy_takuhai["Japanese"]["watch_received_count"] = "";
	$fieldLabelslounge_report__buy_takuhai["Japanese"]["watch_received_box_count"] = "時計　純新到着箱数";
	$fieldToolTipslounge_report__buy_takuhai["Japanese"]["watch_received_box_count"] = "";
	$placeHolderslounge_report__buy_takuhai["Japanese"]["watch_received_box_count"] = "";
	$fieldLabelslounge_report__buy_takuhai["Japanese"]["watch_received_count_sairai"] = "時計　再来到着人数";
	$fieldToolTipslounge_report__buy_takuhai["Japanese"]["watch_received_count_sairai"] = "";
	$placeHolderslounge_report__buy_takuhai["Japanese"]["watch_received_count_sairai"] = "";
	$fieldLabelslounge_report__buy_takuhai["Japanese"]["watch_received_box_count_sairai"] = "時計　再来到着箱数";
	$fieldToolTipslounge_report__buy_takuhai["Japanese"]["watch_received_box_count_sairai"] = "";
	$placeHolderslounge_report__buy_takuhai["Japanese"]["watch_received_box_count_sairai"] = "";
	if (count($fieldToolTipslounge_report__buy_takuhai["Japanese"]))
		$tdatalounge_report__buy_takuhai[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelslounge_report__buy_takuhai[""] = array();
	$fieldToolTipslounge_report__buy_takuhai[""] = array();
	$placeHolderslounge_report__buy_takuhai[""] = array();
	$pageTitleslounge_report__buy_takuhai[""] = array();
	$fieldLabelslounge_report__buy_takuhai[""]["date"] = "Date";
	$fieldToolTipslounge_report__buy_takuhai[""]["date"] = "";
	$placeHolderslounge_report__buy_takuhai[""]["date"] = "";
	$fieldLabelslounge_report__buy_takuhai[""]["updated_at"] = "Updated At";
	$fieldToolTipslounge_report__buy_takuhai[""]["updated_at"] = "";
	$placeHolderslounge_report__buy_takuhai[""]["updated_at"] = "";
	$fieldLabelslounge_report__buy_takuhai[""]["kin_awazu_count"] = "Kin Awazu Count";
	$fieldToolTipslounge_report__buy_takuhai[""]["kin_awazu_count"] = "";
	$placeHolderslounge_report__buy_takuhai[""]["kin_awazu_count"] = "";
	$fieldLabelslounge_report__buy_takuhai[""]["kin_seiyaku_count"] = "Kin Seiyaku Count";
	$fieldToolTipslounge_report__buy_takuhai[""]["kin_seiyaku_count"] = "";
	$placeHolderslounge_report__buy_takuhai[""]["kin_seiyaku_count"] = "";
	$fieldLabelslounge_report__buy_takuhai[""]["kin_price"] = "Kin Price";
	$fieldToolTipslounge_report__buy_takuhai[""]["kin_price"] = "";
	$placeHolderslounge_report__buy_takuhai[""]["kin_price"] = "";
	$fieldLabelslounge_report__buy_takuhai[""]["dia_awazu_count"] = "Dia Awazu Count";
	$fieldToolTipslounge_report__buy_takuhai[""]["dia_awazu_count"] = "";
	$placeHolderslounge_report__buy_takuhai[""]["dia_awazu_count"] = "";
	$fieldLabelslounge_report__buy_takuhai[""]["dia_seiyaku_count"] = "Dia Seiyaku Count";
	$fieldToolTipslounge_report__buy_takuhai[""]["dia_seiyaku_count"] = "";
	$placeHolderslounge_report__buy_takuhai[""]["dia_seiyaku_count"] = "";
	$fieldLabelslounge_report__buy_takuhai[""]["dia_price"] = "Dia Price";
	$fieldToolTipslounge_report__buy_takuhai[""]["dia_price"] = "";
	$placeHolderslounge_report__buy_takuhai[""]["dia_price"] = "";
	$fieldLabelslounge_report__buy_takuhai[""]["jewel_awazu_count"] = "Jewel Awazu Count";
	$fieldToolTipslounge_report__buy_takuhai[""]["jewel_awazu_count"] = "";
	$placeHolderslounge_report__buy_takuhai[""]["jewel_awazu_count"] = "";
	$fieldLabelslounge_report__buy_takuhai[""]["jewel_seiyaku_count"] = "Jewel Seiyaku Count";
	$fieldToolTipslounge_report__buy_takuhai[""]["jewel_seiyaku_count"] = "";
	$placeHolderslounge_report__buy_takuhai[""]["jewel_seiyaku_count"] = "";
	$fieldLabelslounge_report__buy_takuhai[""]["jewel_price"] = "Jewel Price";
	$fieldToolTipslounge_report__buy_takuhai[""]["jewel_price"] = "";
	$placeHolderslounge_report__buy_takuhai[""]["jewel_price"] = "";
	$fieldLabelslounge_report__buy_takuhai[""]["watch_awazu_count"] = "Watch Awazu Count";
	$fieldToolTipslounge_report__buy_takuhai[""]["watch_awazu_count"] = "";
	$placeHolderslounge_report__buy_takuhai[""]["watch_awazu_count"] = "";
	$fieldLabelslounge_report__buy_takuhai[""]["watch_seiyaku_count"] = "Watch Seiyaku Count";
	$fieldToolTipslounge_report__buy_takuhai[""]["watch_seiyaku_count"] = "";
	$placeHolderslounge_report__buy_takuhai[""]["watch_seiyaku_count"] = "";
	$fieldLabelslounge_report__buy_takuhai[""]["watch_price"] = "Watch Price";
	$fieldToolTipslounge_report__buy_takuhai[""]["watch_price"] = "";
	$placeHolderslounge_report__buy_takuhai[""]["watch_price"] = "";
	$fieldLabelslounge_report__buy_takuhai[""]["brand_awazu_count"] = "Brand Awazu Count";
	$fieldToolTipslounge_report__buy_takuhai[""]["brand_awazu_count"] = "";
	$placeHolderslounge_report__buy_takuhai[""]["brand_awazu_count"] = "";
	$fieldLabelslounge_report__buy_takuhai[""]["brand_seiyaku_count"] = "Brand Seiyaku Count";
	$fieldToolTipslounge_report__buy_takuhai[""]["brand_seiyaku_count"] = "";
	$placeHolderslounge_report__buy_takuhai[""]["brand_seiyaku_count"] = "";
	$fieldLabelslounge_report__buy_takuhai[""]["brand_price"] = "Brand Price";
	$fieldToolTipslounge_report__buy_takuhai[""]["brand_price"] = "";
	$placeHolderslounge_report__buy_takuhai[""]["brand_price"] = "";
	$fieldLabelslounge_report__buy_takuhai[""]["hansoku_price"] = "Hansoku Price";
	$fieldToolTipslounge_report__buy_takuhai[""]["hansoku_price"] = "";
	$placeHolderslounge_report__buy_takuhai[""]["hansoku_price"] = "";
	$fieldLabelslounge_report__buy_takuhai[""]["total_price"] = "Total Price";
	$fieldToolTipslounge_report__buy_takuhai[""]["total_price"] = "";
	$placeHolderslounge_report__buy_takuhai[""]["total_price"] = "";
	$fieldLabelslounge_report__buy_takuhai[""]["kin_received_count"] = "Kin Received Count";
	$fieldToolTipslounge_report__buy_takuhai[""]["kin_received_count"] = "";
	$placeHolderslounge_report__buy_takuhai[""]["kin_received_count"] = "";
	$fieldLabelslounge_report__buy_takuhai[""]["dia_received_count"] = "Dia Received Count";
	$fieldToolTipslounge_report__buy_takuhai[""]["dia_received_count"] = "";
	$placeHolderslounge_report__buy_takuhai[""]["dia_received_count"] = "";
	$fieldLabelslounge_report__buy_takuhai[""]["brand_received_count"] = "Brand Received Count";
	$fieldToolTipslounge_report__buy_takuhai[""]["brand_received_count"] = "";
	$placeHolderslounge_report__buy_takuhai[""]["brand_received_count"] = "";
	$fieldLabelslounge_report__buy_takuhai[""]["kin_received_box_count"] = "Kin Received Box Count";
	$fieldToolTipslounge_report__buy_takuhai[""]["kin_received_box_count"] = "";
	$placeHolderslounge_report__buy_takuhai[""]["kin_received_box_count"] = "";
	$fieldLabelslounge_report__buy_takuhai[""]["dia_received_box_count"] = "Dia Received Box Count";
	$fieldToolTipslounge_report__buy_takuhai[""]["dia_received_box_count"] = "";
	$placeHolderslounge_report__buy_takuhai[""]["dia_received_box_count"] = "";
	$fieldLabelslounge_report__buy_takuhai[""]["brand_received_box_count"] = "Brand Received Box Count";
	$fieldToolTipslounge_report__buy_takuhai[""]["brand_received_box_count"] = "";
	$placeHolderslounge_report__buy_takuhai[""]["brand_received_box_count"] = "";
	$fieldLabelslounge_report__buy_takuhai[""]["kin_received_count_sairai"] = "Kin Received Count Sairai";
	$fieldToolTipslounge_report__buy_takuhai[""]["kin_received_count_sairai"] = "";
	$placeHolderslounge_report__buy_takuhai[""]["kin_received_count_sairai"] = "";
	$fieldLabelslounge_report__buy_takuhai[""]["dia_received_count_sairai"] = "Dia Received Count Sairai";
	$fieldToolTipslounge_report__buy_takuhai[""]["dia_received_count_sairai"] = "";
	$placeHolderslounge_report__buy_takuhai[""]["dia_received_count_sairai"] = "";
	$fieldLabelslounge_report__buy_takuhai[""]["brand_received_count_sairai"] = "Brand Received Count Sairai";
	$fieldToolTipslounge_report__buy_takuhai[""]["brand_received_count_sairai"] = "";
	$placeHolderslounge_report__buy_takuhai[""]["brand_received_count_sairai"] = "";
	$fieldLabelslounge_report__buy_takuhai[""]["kin_received_box_count_sairai"] = "Kin Received Box Count Sairai";
	$fieldToolTipslounge_report__buy_takuhai[""]["kin_received_box_count_sairai"] = "";
	$placeHolderslounge_report__buy_takuhai[""]["kin_received_box_count_sairai"] = "";
	$fieldLabelslounge_report__buy_takuhai[""]["dia_received_box_count_sairai"] = "Dia Received Box Count Sairai";
	$fieldToolTipslounge_report__buy_takuhai[""]["dia_received_box_count_sairai"] = "";
	$placeHolderslounge_report__buy_takuhai[""]["dia_received_box_count_sairai"] = "";
	$fieldLabelslounge_report__buy_takuhai[""]["brand_received_box_count_sairai"] = "Brand Received Box Count Sairai";
	$fieldToolTipslounge_report__buy_takuhai[""]["brand_received_box_count_sairai"] = "";
	$placeHolderslounge_report__buy_takuhai[""]["brand_received_box_count_sairai"] = "";
	$fieldLabelslounge_report__buy_takuhai[""]["total_received_count"] = "Total Received Count";
	$fieldToolTipslounge_report__buy_takuhai[""]["total_received_count"] = "";
	$placeHolderslounge_report__buy_takuhai[""]["total_received_count"] = "";
	$fieldLabelslounge_report__buy_takuhai[""]["total_received_box_count"] = "Total Received Box Count";
	$fieldToolTipslounge_report__buy_takuhai[""]["total_received_box_count"] = "";
	$placeHolderslounge_report__buy_takuhai[""]["total_received_box_count"] = "";
	$fieldLabelslounge_report__buy_takuhai[""]["jewel_received_count"] = "Jewel Received Count";
	$fieldToolTipslounge_report__buy_takuhai[""]["jewel_received_count"] = "";
	$placeHolderslounge_report__buy_takuhai[""]["jewel_received_count"] = "";
	$fieldLabelslounge_report__buy_takuhai[""]["jewel_received_box_count"] = "Jewel Received Box Count";
	$fieldToolTipslounge_report__buy_takuhai[""]["jewel_received_box_count"] = "";
	$placeHolderslounge_report__buy_takuhai[""]["jewel_received_box_count"] = "";
	$fieldLabelslounge_report__buy_takuhai[""]["jewel_received_count_sairai"] = "Jewel Received Count Sairai";
	$fieldToolTipslounge_report__buy_takuhai[""]["jewel_received_count_sairai"] = "";
	$placeHolderslounge_report__buy_takuhai[""]["jewel_received_count_sairai"] = "";
	$fieldLabelslounge_report__buy_takuhai[""]["jewel_received_box_count_sairai"] = "Jewel Received Box Count Sairai";
	$fieldToolTipslounge_report__buy_takuhai[""]["jewel_received_box_count_sairai"] = "";
	$placeHolderslounge_report__buy_takuhai[""]["jewel_received_box_count_sairai"] = "";
	$fieldLabelslounge_report__buy_takuhai[""]["watch_received_count"] = "Watch Received Count";
	$fieldToolTipslounge_report__buy_takuhai[""]["watch_received_count"] = "";
	$placeHolderslounge_report__buy_takuhai[""]["watch_received_count"] = "";
	$fieldLabelslounge_report__buy_takuhai[""]["watch_received_box_count"] = "Watch Received Box Count";
	$fieldToolTipslounge_report__buy_takuhai[""]["watch_received_box_count"] = "";
	$placeHolderslounge_report__buy_takuhai[""]["watch_received_box_count"] = "";
	$fieldLabelslounge_report__buy_takuhai[""]["watch_received_count_sairai"] = "Watch Received Count Sairai";
	$fieldToolTipslounge_report__buy_takuhai[""]["watch_received_count_sairai"] = "";
	$placeHolderslounge_report__buy_takuhai[""]["watch_received_count_sairai"] = "";
	$fieldLabelslounge_report__buy_takuhai[""]["watch_received_box_count_sairai"] = "Watch Received Box Count Sairai";
	$fieldToolTipslounge_report__buy_takuhai[""]["watch_received_box_count_sairai"] = "";
	$placeHolderslounge_report__buy_takuhai[""]["watch_received_box_count_sairai"] = "";
	if (count($fieldToolTipslounge_report__buy_takuhai[""]))
		$tdatalounge_report__buy_takuhai[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelslounge_report__buy_takuhai["English"] = array();
	$fieldToolTipslounge_report__buy_takuhai["English"] = array();
	$placeHolderslounge_report__buy_takuhai["English"] = array();
	$pageTitleslounge_report__buy_takuhai["English"] = array();
	$fieldLabelslounge_report__buy_takuhai["English"]["date"] = "Date";
	$fieldToolTipslounge_report__buy_takuhai["English"]["date"] = "";
	$placeHolderslounge_report__buy_takuhai["English"]["date"] = "";
	$fieldLabelslounge_report__buy_takuhai["English"]["updated_at"] = "Updated At";
	$fieldToolTipslounge_report__buy_takuhai["English"]["updated_at"] = "";
	$placeHolderslounge_report__buy_takuhai["English"]["updated_at"] = "";
	$fieldLabelslounge_report__buy_takuhai["English"]["kin_awazu_count"] = "Kin Awazu Count";
	$fieldToolTipslounge_report__buy_takuhai["English"]["kin_awazu_count"] = "";
	$placeHolderslounge_report__buy_takuhai["English"]["kin_awazu_count"] = "";
	$fieldLabelslounge_report__buy_takuhai["English"]["kin_seiyaku_count"] = "Kin Seiyaku Count";
	$fieldToolTipslounge_report__buy_takuhai["English"]["kin_seiyaku_count"] = "";
	$placeHolderslounge_report__buy_takuhai["English"]["kin_seiyaku_count"] = "";
	$fieldLabelslounge_report__buy_takuhai["English"]["kin_price"] = "Kin Price";
	$fieldToolTipslounge_report__buy_takuhai["English"]["kin_price"] = "";
	$placeHolderslounge_report__buy_takuhai["English"]["kin_price"] = "";
	$fieldLabelslounge_report__buy_takuhai["English"]["dia_awazu_count"] = "Dia Awazu Count";
	$fieldToolTipslounge_report__buy_takuhai["English"]["dia_awazu_count"] = "";
	$placeHolderslounge_report__buy_takuhai["English"]["dia_awazu_count"] = "";
	$fieldLabelslounge_report__buy_takuhai["English"]["dia_seiyaku_count"] = "Dia Seiyaku Count";
	$fieldToolTipslounge_report__buy_takuhai["English"]["dia_seiyaku_count"] = "";
	$placeHolderslounge_report__buy_takuhai["English"]["dia_seiyaku_count"] = "";
	$fieldLabelslounge_report__buy_takuhai["English"]["dia_price"] = "Dia Price";
	$fieldToolTipslounge_report__buy_takuhai["English"]["dia_price"] = "";
	$placeHolderslounge_report__buy_takuhai["English"]["dia_price"] = "";
	$fieldLabelslounge_report__buy_takuhai["English"]["jewel_awazu_count"] = "Jewel Awazu Count";
	$fieldToolTipslounge_report__buy_takuhai["English"]["jewel_awazu_count"] = "";
	$placeHolderslounge_report__buy_takuhai["English"]["jewel_awazu_count"] = "";
	$fieldLabelslounge_report__buy_takuhai["English"]["jewel_seiyaku_count"] = "Jewel Seiyaku Count";
	$fieldToolTipslounge_report__buy_takuhai["English"]["jewel_seiyaku_count"] = "";
	$placeHolderslounge_report__buy_takuhai["English"]["jewel_seiyaku_count"] = "";
	$fieldLabelslounge_report__buy_takuhai["English"]["jewel_price"] = "Jewel Price";
	$fieldToolTipslounge_report__buy_takuhai["English"]["jewel_price"] = "";
	$placeHolderslounge_report__buy_takuhai["English"]["jewel_price"] = "";
	$fieldLabelslounge_report__buy_takuhai["English"]["watch_awazu_count"] = "Watch Awazu Count";
	$fieldToolTipslounge_report__buy_takuhai["English"]["watch_awazu_count"] = "";
	$placeHolderslounge_report__buy_takuhai["English"]["watch_awazu_count"] = "";
	$fieldLabelslounge_report__buy_takuhai["English"]["watch_seiyaku_count"] = "Watch Seiyaku Count";
	$fieldToolTipslounge_report__buy_takuhai["English"]["watch_seiyaku_count"] = "";
	$placeHolderslounge_report__buy_takuhai["English"]["watch_seiyaku_count"] = "";
	$fieldLabelslounge_report__buy_takuhai["English"]["watch_price"] = "Watch Price";
	$fieldToolTipslounge_report__buy_takuhai["English"]["watch_price"] = "";
	$placeHolderslounge_report__buy_takuhai["English"]["watch_price"] = "";
	$fieldLabelslounge_report__buy_takuhai["English"]["brand_awazu_count"] = "Brand Awazu Count";
	$fieldToolTipslounge_report__buy_takuhai["English"]["brand_awazu_count"] = "";
	$placeHolderslounge_report__buy_takuhai["English"]["brand_awazu_count"] = "";
	$fieldLabelslounge_report__buy_takuhai["English"]["brand_seiyaku_count"] = "Brand Seiyaku Count";
	$fieldToolTipslounge_report__buy_takuhai["English"]["brand_seiyaku_count"] = "";
	$placeHolderslounge_report__buy_takuhai["English"]["brand_seiyaku_count"] = "";
	$fieldLabelslounge_report__buy_takuhai["English"]["brand_price"] = "Brand Price";
	$fieldToolTipslounge_report__buy_takuhai["English"]["brand_price"] = "";
	$placeHolderslounge_report__buy_takuhai["English"]["brand_price"] = "";
	$fieldLabelslounge_report__buy_takuhai["English"]["hansoku_price"] = "Hansoku Price";
	$fieldToolTipslounge_report__buy_takuhai["English"]["hansoku_price"] = "";
	$placeHolderslounge_report__buy_takuhai["English"]["hansoku_price"] = "";
	$fieldLabelslounge_report__buy_takuhai["English"]["total_price"] = "Total Price";
	$fieldToolTipslounge_report__buy_takuhai["English"]["total_price"] = "";
	$placeHolderslounge_report__buy_takuhai["English"]["total_price"] = "";
	$fieldLabelslounge_report__buy_takuhai["English"]["kin_received_count"] = "Kin Received Count";
	$fieldToolTipslounge_report__buy_takuhai["English"]["kin_received_count"] = "";
	$placeHolderslounge_report__buy_takuhai["English"]["kin_received_count"] = "";
	$fieldLabelslounge_report__buy_takuhai["English"]["dia_received_count"] = "Dia Received Count";
	$fieldToolTipslounge_report__buy_takuhai["English"]["dia_received_count"] = "";
	$placeHolderslounge_report__buy_takuhai["English"]["dia_received_count"] = "";
	$fieldLabelslounge_report__buy_takuhai["English"]["brand_received_count"] = "Brand Received Count";
	$fieldToolTipslounge_report__buy_takuhai["English"]["brand_received_count"] = "";
	$placeHolderslounge_report__buy_takuhai["English"]["brand_received_count"] = "";
	$fieldLabelslounge_report__buy_takuhai["English"]["kin_received_box_count"] = "Kin Received Box Count";
	$fieldToolTipslounge_report__buy_takuhai["English"]["kin_received_box_count"] = "";
	$placeHolderslounge_report__buy_takuhai["English"]["kin_received_box_count"] = "";
	$fieldLabelslounge_report__buy_takuhai["English"]["dia_received_box_count"] = "Dia Received Box Count";
	$fieldToolTipslounge_report__buy_takuhai["English"]["dia_received_box_count"] = "";
	$placeHolderslounge_report__buy_takuhai["English"]["dia_received_box_count"] = "";
	$fieldLabelslounge_report__buy_takuhai["English"]["brand_received_box_count"] = "Brand Received Box Count";
	$fieldToolTipslounge_report__buy_takuhai["English"]["brand_received_box_count"] = "";
	$placeHolderslounge_report__buy_takuhai["English"]["brand_received_box_count"] = "";
	$fieldLabelslounge_report__buy_takuhai["English"]["kin_received_count_sairai"] = "Kin Received Count Sairai";
	$fieldToolTipslounge_report__buy_takuhai["English"]["kin_received_count_sairai"] = "";
	$placeHolderslounge_report__buy_takuhai["English"]["kin_received_count_sairai"] = "";
	$fieldLabelslounge_report__buy_takuhai["English"]["dia_received_count_sairai"] = "Dia Received Count Sairai";
	$fieldToolTipslounge_report__buy_takuhai["English"]["dia_received_count_sairai"] = "";
	$placeHolderslounge_report__buy_takuhai["English"]["dia_received_count_sairai"] = "";
	$fieldLabelslounge_report__buy_takuhai["English"]["brand_received_count_sairai"] = "Brand Received Count Sairai";
	$fieldToolTipslounge_report__buy_takuhai["English"]["brand_received_count_sairai"] = "";
	$placeHolderslounge_report__buy_takuhai["English"]["brand_received_count_sairai"] = "";
	$fieldLabelslounge_report__buy_takuhai["English"]["kin_received_box_count_sairai"] = "Kin Received Box Count Sairai";
	$fieldToolTipslounge_report__buy_takuhai["English"]["kin_received_box_count_sairai"] = "";
	$placeHolderslounge_report__buy_takuhai["English"]["kin_received_box_count_sairai"] = "";
	$fieldLabelslounge_report__buy_takuhai["English"]["dia_received_box_count_sairai"] = "Dia Received Box Count Sairai";
	$fieldToolTipslounge_report__buy_takuhai["English"]["dia_received_box_count_sairai"] = "";
	$placeHolderslounge_report__buy_takuhai["English"]["dia_received_box_count_sairai"] = "";
	$fieldLabelslounge_report__buy_takuhai["English"]["brand_received_box_count_sairai"] = "Brand Received Box Count Sairai";
	$fieldToolTipslounge_report__buy_takuhai["English"]["brand_received_box_count_sairai"] = "";
	$placeHolderslounge_report__buy_takuhai["English"]["brand_received_box_count_sairai"] = "";
	$fieldLabelslounge_report__buy_takuhai["English"]["total_received_count"] = "Total Received Count";
	$fieldToolTipslounge_report__buy_takuhai["English"]["total_received_count"] = "";
	$placeHolderslounge_report__buy_takuhai["English"]["total_received_count"] = "";
	$fieldLabelslounge_report__buy_takuhai["English"]["total_received_box_count"] = "Total Received Box Count";
	$fieldToolTipslounge_report__buy_takuhai["English"]["total_received_box_count"] = "";
	$placeHolderslounge_report__buy_takuhai["English"]["total_received_box_count"] = "";
	$fieldLabelslounge_report__buy_takuhai["English"]["jewel_received_count"] = "Jewel Received Count";
	$fieldToolTipslounge_report__buy_takuhai["English"]["jewel_received_count"] = "";
	$placeHolderslounge_report__buy_takuhai["English"]["jewel_received_count"] = "";
	$fieldLabelslounge_report__buy_takuhai["English"]["jewel_received_box_count"] = "Jewel Received Box Count";
	$fieldToolTipslounge_report__buy_takuhai["English"]["jewel_received_box_count"] = "";
	$placeHolderslounge_report__buy_takuhai["English"]["jewel_received_box_count"] = "";
	$fieldLabelslounge_report__buy_takuhai["English"]["jewel_received_count_sairai"] = "Jewel Received Count Sairai";
	$fieldToolTipslounge_report__buy_takuhai["English"]["jewel_received_count_sairai"] = "";
	$placeHolderslounge_report__buy_takuhai["English"]["jewel_received_count_sairai"] = "";
	$fieldLabelslounge_report__buy_takuhai["English"]["jewel_received_box_count_sairai"] = "Jewel Received Box Count Sairai";
	$fieldToolTipslounge_report__buy_takuhai["English"]["jewel_received_box_count_sairai"] = "";
	$placeHolderslounge_report__buy_takuhai["English"]["jewel_received_box_count_sairai"] = "";
	$fieldLabelslounge_report__buy_takuhai["English"]["watch_received_count"] = "Watch Received Count";
	$fieldToolTipslounge_report__buy_takuhai["English"]["watch_received_count"] = "";
	$placeHolderslounge_report__buy_takuhai["English"]["watch_received_count"] = "";
	$fieldLabelslounge_report__buy_takuhai["English"]["watch_received_box_count"] = "Watch Received Box Count";
	$fieldToolTipslounge_report__buy_takuhai["English"]["watch_received_box_count"] = "";
	$placeHolderslounge_report__buy_takuhai["English"]["watch_received_box_count"] = "";
	$fieldLabelslounge_report__buy_takuhai["English"]["watch_received_count_sairai"] = "Watch Received Count Sairai";
	$fieldToolTipslounge_report__buy_takuhai["English"]["watch_received_count_sairai"] = "";
	$placeHolderslounge_report__buy_takuhai["English"]["watch_received_count_sairai"] = "";
	$fieldLabelslounge_report__buy_takuhai["English"]["watch_received_box_count_sairai"] = "Watch Received Box Count Sairai";
	$fieldToolTipslounge_report__buy_takuhai["English"]["watch_received_box_count_sairai"] = "";
	$placeHolderslounge_report__buy_takuhai["English"]["watch_received_box_count_sairai"] = "";
	if (count($fieldToolTipslounge_report__buy_takuhai["English"]))
		$tdatalounge_report__buy_takuhai[".isUseToolTips"] = true;
}


	$tdatalounge_report__buy_takuhai[".NCSearch"] = true;



$tdatalounge_report__buy_takuhai[".shortTableName"] = "lounge_report__buy_takuhai";
$tdatalounge_report__buy_takuhai[".nSecOptions"] = 0;
$tdatalounge_report__buy_takuhai[".recsPerRowPrint"] = 1;
$tdatalounge_report__buy_takuhai[".mainTableOwnerID"] = "";
$tdatalounge_report__buy_takuhai[".moveNext"] = 1;
$tdatalounge_report__buy_takuhai[".entityType"] = 0;

$tdatalounge_report__buy_takuhai[".strOriginalTableName"] = "lounge_report__buy_takuhai";

	



$tdatalounge_report__buy_takuhai[".showAddInPopup"] = false;

$tdatalounge_report__buy_takuhai[".showEditInPopup"] = false;

$tdatalounge_report__buy_takuhai[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatalounge_report__buy_takuhai[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatalounge_report__buy_takuhai[".fieldsForRegister"] = array();

$tdatalounge_report__buy_takuhai[".listAjax"] = false;

	$tdatalounge_report__buy_takuhai[".audit"] = false;

	$tdatalounge_report__buy_takuhai[".locking"] = false;



$tdatalounge_report__buy_takuhai[".list"] = true;



$tdatalounge_report__buy_takuhai[".reorderRecordsByHeader"] = true;





$tdatalounge_report__buy_takuhai[".exportTo"] = true;



$tdatalounge_report__buy_takuhai[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatalounge_report__buy_takuhai[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatalounge_report__buy_takuhai[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatalounge_report__buy_takuhai[".searchSaving"] = false;
//

$tdatalounge_report__buy_takuhai[".showSearchPanel"] = true;
		$tdatalounge_report__buy_takuhai[".flexibleSearch"] = true;

$tdatalounge_report__buy_takuhai[".isUseAjaxSuggest"] = true;

$tdatalounge_report__buy_takuhai[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatalounge_report__buy_takuhai[".ajaxCodeSnippetAdded"] = false;

$tdatalounge_report__buy_takuhai[".buttonsAdded"] = false;

$tdatalounge_report__buy_takuhai[".addPageEvents"] = false;

// use timepicker for search panel
$tdatalounge_report__buy_takuhai[".isUseTimeForSearch"] = false;





$tdatalounge_report__buy_takuhai[".allSearchFields"] = array();
$tdatalounge_report__buy_takuhai[".filterFields"] = array();
$tdatalounge_report__buy_takuhai[".requiredSearchFields"] = array();

$tdatalounge_report__buy_takuhai[".allSearchFields"][] = "date";
	$tdatalounge_report__buy_takuhai[".allSearchFields"][] = "total_price";
	$tdatalounge_report__buy_takuhai[".allSearchFields"][] = "total_received_count";
	$tdatalounge_report__buy_takuhai[".allSearchFields"][] = "total_received_box_count";
	$tdatalounge_report__buy_takuhai[".allSearchFields"][] = "updated_at";
	$tdatalounge_report__buy_takuhai[".allSearchFields"][] = "kin_seiyaku_count";
	$tdatalounge_report__buy_takuhai[".allSearchFields"][] = "kin_awazu_count";
	$tdatalounge_report__buy_takuhai[".allSearchFields"][] = "kin_received_count";
	$tdatalounge_report__buy_takuhai[".allSearchFields"][] = "kin_received_box_count";
	$tdatalounge_report__buy_takuhai[".allSearchFields"][] = "kin_received_count_sairai";
	$tdatalounge_report__buy_takuhai[".allSearchFields"][] = "kin_received_box_count_sairai";
	$tdatalounge_report__buy_takuhai[".allSearchFields"][] = "kin_price";
	$tdatalounge_report__buy_takuhai[".allSearchFields"][] = "dia_seiyaku_count";
	$tdatalounge_report__buy_takuhai[".allSearchFields"][] = "dia_awazu_count";
	$tdatalounge_report__buy_takuhai[".allSearchFields"][] = "dia_received_count";
	$tdatalounge_report__buy_takuhai[".allSearchFields"][] = "dia_received_box_count";
	$tdatalounge_report__buy_takuhai[".allSearchFields"][] = "dia_received_count_sairai";
	$tdatalounge_report__buy_takuhai[".allSearchFields"][] = "dia_received_box_count_sairai";
	$tdatalounge_report__buy_takuhai[".allSearchFields"][] = "dia_price";
	$tdatalounge_report__buy_takuhai[".allSearchFields"][] = "jewel_seiyaku_count";
	$tdatalounge_report__buy_takuhai[".allSearchFields"][] = "jewel_awazu_count";
	$tdatalounge_report__buy_takuhai[".allSearchFields"][] = "jewel_received_count";
	$tdatalounge_report__buy_takuhai[".allSearchFields"][] = "jewel_received_box_count";
	$tdatalounge_report__buy_takuhai[".allSearchFields"][] = "jewel_received_count_sairai";
	$tdatalounge_report__buy_takuhai[".allSearchFields"][] = "jewel_received_box_count_sairai";
	$tdatalounge_report__buy_takuhai[".allSearchFields"][] = "jewel_price";
	$tdatalounge_report__buy_takuhai[".allSearchFields"][] = "watch_seiyaku_count";
	$tdatalounge_report__buy_takuhai[".allSearchFields"][] = "watch_awazu_count";
	$tdatalounge_report__buy_takuhai[".allSearchFields"][] = "watch_received_count";
	$tdatalounge_report__buy_takuhai[".allSearchFields"][] = "watch_received_box_count";
	$tdatalounge_report__buy_takuhai[".allSearchFields"][] = "watch_received_count_sairai";
	$tdatalounge_report__buy_takuhai[".allSearchFields"][] = "watch_received_box_count_sairai";
	$tdatalounge_report__buy_takuhai[".allSearchFields"][] = "watch_price";
	$tdatalounge_report__buy_takuhai[".allSearchFields"][] = "brand_seiyaku_count";
	$tdatalounge_report__buy_takuhai[".allSearchFields"][] = "brand_awazu_count";
	$tdatalounge_report__buy_takuhai[".allSearchFields"][] = "brand_received_count";
	$tdatalounge_report__buy_takuhai[".allSearchFields"][] = "brand_received_box_count";
	$tdatalounge_report__buy_takuhai[".allSearchFields"][] = "brand_received_count_sairai";
	$tdatalounge_report__buy_takuhai[".allSearchFields"][] = "brand_received_box_count_sairai";
	$tdatalounge_report__buy_takuhai[".allSearchFields"][] = "brand_price";
	$tdatalounge_report__buy_takuhai[".allSearchFields"][] = "hansoku_price";
	

$tdatalounge_report__buy_takuhai[".googleLikeFields"] = array();
$tdatalounge_report__buy_takuhai[".googleLikeFields"][] = "date";
$tdatalounge_report__buy_takuhai[".googleLikeFields"][] = "total_price";
$tdatalounge_report__buy_takuhai[".googleLikeFields"][] = "total_received_count";
$tdatalounge_report__buy_takuhai[".googleLikeFields"][] = "total_received_box_count";
$tdatalounge_report__buy_takuhai[".googleLikeFields"][] = "updated_at";
$tdatalounge_report__buy_takuhai[".googleLikeFields"][] = "kin_seiyaku_count";
$tdatalounge_report__buy_takuhai[".googleLikeFields"][] = "kin_awazu_count";
$tdatalounge_report__buy_takuhai[".googleLikeFields"][] = "kin_received_count";
$tdatalounge_report__buy_takuhai[".googleLikeFields"][] = "kin_received_box_count";
$tdatalounge_report__buy_takuhai[".googleLikeFields"][] = "kin_received_count_sairai";
$tdatalounge_report__buy_takuhai[".googleLikeFields"][] = "kin_received_box_count_sairai";
$tdatalounge_report__buy_takuhai[".googleLikeFields"][] = "kin_price";
$tdatalounge_report__buy_takuhai[".googleLikeFields"][] = "dia_seiyaku_count";
$tdatalounge_report__buy_takuhai[".googleLikeFields"][] = "dia_awazu_count";
$tdatalounge_report__buy_takuhai[".googleLikeFields"][] = "dia_received_count";
$tdatalounge_report__buy_takuhai[".googleLikeFields"][] = "dia_received_box_count";
$tdatalounge_report__buy_takuhai[".googleLikeFields"][] = "dia_received_count_sairai";
$tdatalounge_report__buy_takuhai[".googleLikeFields"][] = "dia_received_box_count_sairai";
$tdatalounge_report__buy_takuhai[".googleLikeFields"][] = "dia_price";
$tdatalounge_report__buy_takuhai[".googleLikeFields"][] = "jewel_seiyaku_count";
$tdatalounge_report__buy_takuhai[".googleLikeFields"][] = "jewel_awazu_count";
$tdatalounge_report__buy_takuhai[".googleLikeFields"][] = "jewel_received_count";
$tdatalounge_report__buy_takuhai[".googleLikeFields"][] = "jewel_received_box_count";
$tdatalounge_report__buy_takuhai[".googleLikeFields"][] = "jewel_received_count_sairai";
$tdatalounge_report__buy_takuhai[".googleLikeFields"][] = "jewel_received_box_count_sairai";
$tdatalounge_report__buy_takuhai[".googleLikeFields"][] = "jewel_price";
$tdatalounge_report__buy_takuhai[".googleLikeFields"][] = "watch_seiyaku_count";
$tdatalounge_report__buy_takuhai[".googleLikeFields"][] = "watch_awazu_count";
$tdatalounge_report__buy_takuhai[".googleLikeFields"][] = "watch_received_count";
$tdatalounge_report__buy_takuhai[".googleLikeFields"][] = "watch_received_box_count";
$tdatalounge_report__buy_takuhai[".googleLikeFields"][] = "watch_received_count_sairai";
$tdatalounge_report__buy_takuhai[".googleLikeFields"][] = "watch_received_box_count_sairai";
$tdatalounge_report__buy_takuhai[".googleLikeFields"][] = "watch_price";
$tdatalounge_report__buy_takuhai[".googleLikeFields"][] = "brand_seiyaku_count";
$tdatalounge_report__buy_takuhai[".googleLikeFields"][] = "brand_awazu_count";
$tdatalounge_report__buy_takuhai[".googleLikeFields"][] = "brand_received_count";
$tdatalounge_report__buy_takuhai[".googleLikeFields"][] = "brand_received_box_count";
$tdatalounge_report__buy_takuhai[".googleLikeFields"][] = "brand_received_count_sairai";
$tdatalounge_report__buy_takuhai[".googleLikeFields"][] = "brand_received_box_count_sairai";
$tdatalounge_report__buy_takuhai[".googleLikeFields"][] = "brand_price";
$tdatalounge_report__buy_takuhai[".googleLikeFields"][] = "hansoku_price";


$tdatalounge_report__buy_takuhai[".advSearchFields"] = array();
$tdatalounge_report__buy_takuhai[".advSearchFields"][] = "date";
$tdatalounge_report__buy_takuhai[".advSearchFields"][] = "total_price";
$tdatalounge_report__buy_takuhai[".advSearchFields"][] = "total_received_count";
$tdatalounge_report__buy_takuhai[".advSearchFields"][] = "total_received_box_count";
$tdatalounge_report__buy_takuhai[".advSearchFields"][] = "updated_at";
$tdatalounge_report__buy_takuhai[".advSearchFields"][] = "kin_seiyaku_count";
$tdatalounge_report__buy_takuhai[".advSearchFields"][] = "kin_awazu_count";
$tdatalounge_report__buy_takuhai[".advSearchFields"][] = "kin_received_count";
$tdatalounge_report__buy_takuhai[".advSearchFields"][] = "kin_received_box_count";
$tdatalounge_report__buy_takuhai[".advSearchFields"][] = "kin_received_count_sairai";
$tdatalounge_report__buy_takuhai[".advSearchFields"][] = "kin_received_box_count_sairai";
$tdatalounge_report__buy_takuhai[".advSearchFields"][] = "kin_price";
$tdatalounge_report__buy_takuhai[".advSearchFields"][] = "dia_seiyaku_count";
$tdatalounge_report__buy_takuhai[".advSearchFields"][] = "dia_awazu_count";
$tdatalounge_report__buy_takuhai[".advSearchFields"][] = "dia_received_count";
$tdatalounge_report__buy_takuhai[".advSearchFields"][] = "dia_received_box_count";
$tdatalounge_report__buy_takuhai[".advSearchFields"][] = "dia_received_count_sairai";
$tdatalounge_report__buy_takuhai[".advSearchFields"][] = "dia_received_box_count_sairai";
$tdatalounge_report__buy_takuhai[".advSearchFields"][] = "dia_price";
$tdatalounge_report__buy_takuhai[".advSearchFields"][] = "jewel_seiyaku_count";
$tdatalounge_report__buy_takuhai[".advSearchFields"][] = "jewel_awazu_count";
$tdatalounge_report__buy_takuhai[".advSearchFields"][] = "jewel_received_count";
$tdatalounge_report__buy_takuhai[".advSearchFields"][] = "jewel_received_box_count";
$tdatalounge_report__buy_takuhai[".advSearchFields"][] = "jewel_received_count_sairai";
$tdatalounge_report__buy_takuhai[".advSearchFields"][] = "jewel_received_box_count_sairai";
$tdatalounge_report__buy_takuhai[".advSearchFields"][] = "jewel_price";
$tdatalounge_report__buy_takuhai[".advSearchFields"][] = "watch_seiyaku_count";
$tdatalounge_report__buy_takuhai[".advSearchFields"][] = "watch_awazu_count";
$tdatalounge_report__buy_takuhai[".advSearchFields"][] = "watch_received_count";
$tdatalounge_report__buy_takuhai[".advSearchFields"][] = "watch_received_box_count";
$tdatalounge_report__buy_takuhai[".advSearchFields"][] = "watch_received_count_sairai";
$tdatalounge_report__buy_takuhai[".advSearchFields"][] = "watch_received_box_count_sairai";
$tdatalounge_report__buy_takuhai[".advSearchFields"][] = "watch_price";
$tdatalounge_report__buy_takuhai[".advSearchFields"][] = "brand_seiyaku_count";
$tdatalounge_report__buy_takuhai[".advSearchFields"][] = "brand_awazu_count";
$tdatalounge_report__buy_takuhai[".advSearchFields"][] = "brand_received_count";
$tdatalounge_report__buy_takuhai[".advSearchFields"][] = "brand_received_box_count";
$tdatalounge_report__buy_takuhai[".advSearchFields"][] = "brand_received_count_sairai";
$tdatalounge_report__buy_takuhai[".advSearchFields"][] = "brand_received_box_count_sairai";
$tdatalounge_report__buy_takuhai[".advSearchFields"][] = "brand_price";
$tdatalounge_report__buy_takuhai[".advSearchFields"][] = "hansoku_price";

$tdatalounge_report__buy_takuhai[".tableType"] = "list";

$tdatalounge_report__buy_takuhai[".printerPageOrientation"] = 0;
$tdatalounge_report__buy_takuhai[".nPrinterPageScale"] = 100;

$tdatalounge_report__buy_takuhai[".nPrinterSplitRecords"] = 40;

$tdatalounge_report__buy_takuhai[".nPrinterPDFSplitRecords"] = 40;



$tdatalounge_report__buy_takuhai[".geocodingEnabled"] = false;





$tdatalounge_report__buy_takuhai[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatalounge_report__buy_takuhai[".pageSize"] = 20;

$tdatalounge_report__buy_takuhai[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `date` DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatalounge_report__buy_takuhai[".strOrderBy"] = $tstrOrderBy;

$tdatalounge_report__buy_takuhai[".orderindexes"] = array();
$tdatalounge_report__buy_takuhai[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "`date`");

$tdatalounge_report__buy_takuhai[".sqlHead"] = "SELECT `date`,  `total_price`,  `total_received_count`,  `total_received_box_count`,  `updated_at`,  `kin_seiyaku_count`,  `kin_awazu_count`,  `kin_received_count`,  `kin_received_box_count`,  `kin_received_count_sairai`,  `kin_received_box_count_sairai`,  `kin_price`,  `dia_seiyaku_count`,  `dia_awazu_count`,  `dia_received_count`,  `dia_received_box_count`,  `dia_received_count_sairai`,  `dia_received_box_count_sairai`,  `dia_price`,  `jewel_seiyaku_count`,  `jewel_awazu_count`,  `jewel_received_count`,  `jewel_received_box_count`,  `jewel_received_count_sairai`,  `jewel_received_box_count_sairai`,  `jewel_price`,  `watch_seiyaku_count`,  `watch_awazu_count`,  `watch_received_count`,  `watch_received_box_count`,  `watch_received_count_sairai`,  `watch_received_box_count_sairai`,  `watch_price`,  `brand_seiyaku_count`,  `brand_awazu_count`,  `brand_received_count`,  `brand_received_box_count`,  `brand_received_count_sairai`,  `brand_received_box_count_sairai`,  `brand_price`,  `hansoku_price`";
$tdatalounge_report__buy_takuhai[".sqlFrom"] = "FROM `lounge_report__buy_takuhai`";
$tdatalounge_report__buy_takuhai[".sqlWhereExpr"] = "";
$tdatalounge_report__buy_takuhai[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatalounge_report__buy_takuhai[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatalounge_report__buy_takuhai[".arrGroupsPerPage"] = $arrGPP;

$tdatalounge_report__buy_takuhai[".highlightSearchResults"] = true;

$tableKeyslounge_report__buy_takuhai = array();
$tableKeyslounge_report__buy_takuhai[] = "date";
$tdatalounge_report__buy_takuhai[".Keys"] = $tableKeyslounge_report__buy_takuhai;

$tdatalounge_report__buy_takuhai[".listFields"] = array();
$tdatalounge_report__buy_takuhai[".listFields"][] = "date";
$tdatalounge_report__buy_takuhai[".listFields"][] = "updated_at";
$tdatalounge_report__buy_takuhai[".listFields"][] = "kin_awazu_count";
$tdatalounge_report__buy_takuhai[".listFields"][] = "kin_seiyaku_count";
$tdatalounge_report__buy_takuhai[".listFields"][] = "kin_price";
$tdatalounge_report__buy_takuhai[".listFields"][] = "dia_awazu_count";
$tdatalounge_report__buy_takuhai[".listFields"][] = "dia_seiyaku_count";
$tdatalounge_report__buy_takuhai[".listFields"][] = "dia_price";
$tdatalounge_report__buy_takuhai[".listFields"][] = "jewel_awazu_count";
$tdatalounge_report__buy_takuhai[".listFields"][] = "jewel_seiyaku_count";
$tdatalounge_report__buy_takuhai[".listFields"][] = "jewel_price";
$tdatalounge_report__buy_takuhai[".listFields"][] = "watch_awazu_count";
$tdatalounge_report__buy_takuhai[".listFields"][] = "watch_seiyaku_count";
$tdatalounge_report__buy_takuhai[".listFields"][] = "watch_price";
$tdatalounge_report__buy_takuhai[".listFields"][] = "brand_awazu_count";
$tdatalounge_report__buy_takuhai[".listFields"][] = "brand_seiyaku_count";
$tdatalounge_report__buy_takuhai[".listFields"][] = "brand_price";
$tdatalounge_report__buy_takuhai[".listFields"][] = "hansoku_price";
$tdatalounge_report__buy_takuhai[".listFields"][] = "total_price";
$tdatalounge_report__buy_takuhai[".listFields"][] = "kin_received_count";
$tdatalounge_report__buy_takuhai[".listFields"][] = "dia_received_count";
$tdatalounge_report__buy_takuhai[".listFields"][] = "brand_received_count";
$tdatalounge_report__buy_takuhai[".listFields"][] = "kin_received_box_count";
$tdatalounge_report__buy_takuhai[".listFields"][] = "dia_received_box_count";
$tdatalounge_report__buy_takuhai[".listFields"][] = "brand_received_box_count";
$tdatalounge_report__buy_takuhai[".listFields"][] = "kin_received_count_sairai";
$tdatalounge_report__buy_takuhai[".listFields"][] = "dia_received_count_sairai";
$tdatalounge_report__buy_takuhai[".listFields"][] = "brand_received_count_sairai";
$tdatalounge_report__buy_takuhai[".listFields"][] = "kin_received_box_count_sairai";
$tdatalounge_report__buy_takuhai[".listFields"][] = "dia_received_box_count_sairai";
$tdatalounge_report__buy_takuhai[".listFields"][] = "brand_received_box_count_sairai";
$tdatalounge_report__buy_takuhai[".listFields"][] = "total_received_count";
$tdatalounge_report__buy_takuhai[".listFields"][] = "total_received_box_count";
$tdatalounge_report__buy_takuhai[".listFields"][] = "jewel_received_count";
$tdatalounge_report__buy_takuhai[".listFields"][] = "jewel_received_box_count";
$tdatalounge_report__buy_takuhai[".listFields"][] = "jewel_received_count_sairai";
$tdatalounge_report__buy_takuhai[".listFields"][] = "jewel_received_box_count_sairai";
$tdatalounge_report__buy_takuhai[".listFields"][] = "watch_received_count";
$tdatalounge_report__buy_takuhai[".listFields"][] = "watch_received_box_count";
$tdatalounge_report__buy_takuhai[".listFields"][] = "watch_received_count_sairai";
$tdatalounge_report__buy_takuhai[".listFields"][] = "watch_received_box_count_sairai";

$tdatalounge_report__buy_takuhai[".hideMobileList"] = array();


$tdatalounge_report__buy_takuhai[".viewFields"] = array();

$tdatalounge_report__buy_takuhai[".addFields"] = array();

$tdatalounge_report__buy_takuhai[".masterListFields"] = array();
$tdatalounge_report__buy_takuhai[".masterListFields"][] = "date";
$tdatalounge_report__buy_takuhai[".masterListFields"][] = "total_price";
$tdatalounge_report__buy_takuhai[".masterListFields"][] = "total_received_count";
$tdatalounge_report__buy_takuhai[".masterListFields"][] = "total_received_box_count";
$tdatalounge_report__buy_takuhai[".masterListFields"][] = "updated_at";
$tdatalounge_report__buy_takuhai[".masterListFields"][] = "kin_seiyaku_count";
$tdatalounge_report__buy_takuhai[".masterListFields"][] = "kin_awazu_count";
$tdatalounge_report__buy_takuhai[".masterListFields"][] = "kin_received_count";
$tdatalounge_report__buy_takuhai[".masterListFields"][] = "kin_received_box_count";
$tdatalounge_report__buy_takuhai[".masterListFields"][] = "kin_received_count_sairai";
$tdatalounge_report__buy_takuhai[".masterListFields"][] = "kin_received_box_count_sairai";
$tdatalounge_report__buy_takuhai[".masterListFields"][] = "kin_price";
$tdatalounge_report__buy_takuhai[".masterListFields"][] = "dia_seiyaku_count";
$tdatalounge_report__buy_takuhai[".masterListFields"][] = "dia_awazu_count";
$tdatalounge_report__buy_takuhai[".masterListFields"][] = "dia_received_count";
$tdatalounge_report__buy_takuhai[".masterListFields"][] = "dia_received_box_count";
$tdatalounge_report__buy_takuhai[".masterListFields"][] = "dia_received_count_sairai";
$tdatalounge_report__buy_takuhai[".masterListFields"][] = "dia_received_box_count_sairai";
$tdatalounge_report__buy_takuhai[".masterListFields"][] = "dia_price";
$tdatalounge_report__buy_takuhai[".masterListFields"][] = "jewel_seiyaku_count";
$tdatalounge_report__buy_takuhai[".masterListFields"][] = "jewel_awazu_count";
$tdatalounge_report__buy_takuhai[".masterListFields"][] = "jewel_received_count";
$tdatalounge_report__buy_takuhai[".masterListFields"][] = "jewel_received_box_count";
$tdatalounge_report__buy_takuhai[".masterListFields"][] = "jewel_received_count_sairai";
$tdatalounge_report__buy_takuhai[".masterListFields"][] = "jewel_received_box_count_sairai";
$tdatalounge_report__buy_takuhai[".masterListFields"][] = "jewel_price";
$tdatalounge_report__buy_takuhai[".masterListFields"][] = "watch_seiyaku_count";
$tdatalounge_report__buy_takuhai[".masterListFields"][] = "watch_awazu_count";
$tdatalounge_report__buy_takuhai[".masterListFields"][] = "watch_received_count";
$tdatalounge_report__buy_takuhai[".masterListFields"][] = "watch_received_box_count";
$tdatalounge_report__buy_takuhai[".masterListFields"][] = "watch_received_count_sairai";
$tdatalounge_report__buy_takuhai[".masterListFields"][] = "watch_received_box_count_sairai";
$tdatalounge_report__buy_takuhai[".masterListFields"][] = "watch_price";
$tdatalounge_report__buy_takuhai[".masterListFields"][] = "brand_seiyaku_count";
$tdatalounge_report__buy_takuhai[".masterListFields"][] = "brand_awazu_count";
$tdatalounge_report__buy_takuhai[".masterListFields"][] = "brand_received_count";
$tdatalounge_report__buy_takuhai[".masterListFields"][] = "brand_received_box_count";
$tdatalounge_report__buy_takuhai[".masterListFields"][] = "brand_received_count_sairai";
$tdatalounge_report__buy_takuhai[".masterListFields"][] = "brand_received_box_count_sairai";
$tdatalounge_report__buy_takuhai[".masterListFields"][] = "brand_price";
$tdatalounge_report__buy_takuhai[".masterListFields"][] = "hansoku_price";

$tdatalounge_report__buy_takuhai[".inlineAddFields"] = array();

$tdatalounge_report__buy_takuhai[".editFields"] = array();

$tdatalounge_report__buy_takuhai[".inlineEditFields"] = array();

$tdatalounge_report__buy_takuhai[".updateSelectedFields"] = array();


$tdatalounge_report__buy_takuhai[".exportFields"] = array();
$tdatalounge_report__buy_takuhai[".exportFields"][] = "date";
$tdatalounge_report__buy_takuhai[".exportFields"][] = "total_price";
$tdatalounge_report__buy_takuhai[".exportFields"][] = "total_received_count";
$tdatalounge_report__buy_takuhai[".exportFields"][] = "total_received_box_count";
$tdatalounge_report__buy_takuhai[".exportFields"][] = "updated_at";
$tdatalounge_report__buy_takuhai[".exportFields"][] = "kin_seiyaku_count";
$tdatalounge_report__buy_takuhai[".exportFields"][] = "kin_awazu_count";
$tdatalounge_report__buy_takuhai[".exportFields"][] = "kin_received_count";
$tdatalounge_report__buy_takuhai[".exportFields"][] = "kin_received_box_count";
$tdatalounge_report__buy_takuhai[".exportFields"][] = "kin_received_count_sairai";
$tdatalounge_report__buy_takuhai[".exportFields"][] = "kin_received_box_count_sairai";
$tdatalounge_report__buy_takuhai[".exportFields"][] = "kin_price";
$tdatalounge_report__buy_takuhai[".exportFields"][] = "dia_seiyaku_count";
$tdatalounge_report__buy_takuhai[".exportFields"][] = "dia_awazu_count";
$tdatalounge_report__buy_takuhai[".exportFields"][] = "dia_received_count";
$tdatalounge_report__buy_takuhai[".exportFields"][] = "dia_received_box_count";
$tdatalounge_report__buy_takuhai[".exportFields"][] = "dia_received_count_sairai";
$tdatalounge_report__buy_takuhai[".exportFields"][] = "dia_received_box_count_sairai";
$tdatalounge_report__buy_takuhai[".exportFields"][] = "dia_price";
$tdatalounge_report__buy_takuhai[".exportFields"][] = "jewel_seiyaku_count";
$tdatalounge_report__buy_takuhai[".exportFields"][] = "jewel_awazu_count";
$tdatalounge_report__buy_takuhai[".exportFields"][] = "jewel_received_count";
$tdatalounge_report__buy_takuhai[".exportFields"][] = "jewel_received_box_count";
$tdatalounge_report__buy_takuhai[".exportFields"][] = "jewel_received_count_sairai";
$tdatalounge_report__buy_takuhai[".exportFields"][] = "jewel_received_box_count_sairai";
$tdatalounge_report__buy_takuhai[".exportFields"][] = "jewel_price";
$tdatalounge_report__buy_takuhai[".exportFields"][] = "watch_seiyaku_count";
$tdatalounge_report__buy_takuhai[".exportFields"][] = "watch_awazu_count";
$tdatalounge_report__buy_takuhai[".exportFields"][] = "watch_received_count";
$tdatalounge_report__buy_takuhai[".exportFields"][] = "watch_received_box_count";
$tdatalounge_report__buy_takuhai[".exportFields"][] = "watch_received_count_sairai";
$tdatalounge_report__buy_takuhai[".exportFields"][] = "watch_received_box_count_sairai";
$tdatalounge_report__buy_takuhai[".exportFields"][] = "watch_price";
$tdatalounge_report__buy_takuhai[".exportFields"][] = "brand_seiyaku_count";
$tdatalounge_report__buy_takuhai[".exportFields"][] = "brand_awazu_count";
$tdatalounge_report__buy_takuhai[".exportFields"][] = "brand_received_count";
$tdatalounge_report__buy_takuhai[".exportFields"][] = "brand_received_box_count";
$tdatalounge_report__buy_takuhai[".exportFields"][] = "brand_received_count_sairai";
$tdatalounge_report__buy_takuhai[".exportFields"][] = "brand_received_box_count_sairai";
$tdatalounge_report__buy_takuhai[".exportFields"][] = "brand_price";
$tdatalounge_report__buy_takuhai[".exportFields"][] = "hansoku_price";

$tdatalounge_report__buy_takuhai[".importFields"] = array();

$tdatalounge_report__buy_takuhai[".printFields"] = array();

//	date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "date";
	$fdata["GoodName"] = "date";
	$fdata["ownerTable"] = "lounge_report__buy_takuhai";
	$fdata["Label"] = GetFieldLabel("lounge_report__buy_takuhai","date");
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




	$tdatalounge_report__buy_takuhai["date"] = $fdata;
//	total_price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "total_price";
	$fdata["GoodName"] = "total_price";
	$fdata["ownerTable"] = "lounge_report__buy_takuhai";
	$fdata["Label"] = GetFieldLabel("lounge_report__buy_takuhai","total_price");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "total_price";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`total_price`";

	
	
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




	$tdatalounge_report__buy_takuhai["total_price"] = $fdata;
//	total_received_count
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "total_received_count";
	$fdata["GoodName"] = "total_received_count";
	$fdata["ownerTable"] = "lounge_report__buy_takuhai";
	$fdata["Label"] = GetFieldLabel("lounge_report__buy_takuhai","total_received_count");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "total_received_count";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`total_received_count`";

	
	
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




	$tdatalounge_report__buy_takuhai["total_received_count"] = $fdata;
//	total_received_box_count
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "total_received_box_count";
	$fdata["GoodName"] = "total_received_box_count";
	$fdata["ownerTable"] = "lounge_report__buy_takuhai";
	$fdata["Label"] = GetFieldLabel("lounge_report__buy_takuhai","total_received_box_count");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "total_received_box_count";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`total_received_box_count`";

	
	
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




	$tdatalounge_report__buy_takuhai["total_received_box_count"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "lounge_report__buy_takuhai";
	$fdata["Label"] = GetFieldLabel("lounge_report__buy_takuhai","updated_at");
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




	$tdatalounge_report__buy_takuhai["updated_at"] = $fdata;
//	kin_seiyaku_count
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "kin_seiyaku_count";
	$fdata["GoodName"] = "kin_seiyaku_count";
	$fdata["ownerTable"] = "lounge_report__buy_takuhai";
	$fdata["Label"] = GetFieldLabel("lounge_report__buy_takuhai","kin_seiyaku_count");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "kin_seiyaku_count";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`kin_seiyaku_count`";

	
	
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




	$tdatalounge_report__buy_takuhai["kin_seiyaku_count"] = $fdata;
//	kin_awazu_count
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "kin_awazu_count";
	$fdata["GoodName"] = "kin_awazu_count";
	$fdata["ownerTable"] = "lounge_report__buy_takuhai";
	$fdata["Label"] = GetFieldLabel("lounge_report__buy_takuhai","kin_awazu_count");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "kin_awazu_count";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`kin_awazu_count`";

	
	
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




	$tdatalounge_report__buy_takuhai["kin_awazu_count"] = $fdata;
//	kin_received_count
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "kin_received_count";
	$fdata["GoodName"] = "kin_received_count";
	$fdata["ownerTable"] = "lounge_report__buy_takuhai";
	$fdata["Label"] = GetFieldLabel("lounge_report__buy_takuhai","kin_received_count");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "kin_received_count";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`kin_received_count`";

	
	
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




	$tdatalounge_report__buy_takuhai["kin_received_count"] = $fdata;
//	kin_received_box_count
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "kin_received_box_count";
	$fdata["GoodName"] = "kin_received_box_count";
	$fdata["ownerTable"] = "lounge_report__buy_takuhai";
	$fdata["Label"] = GetFieldLabel("lounge_report__buy_takuhai","kin_received_box_count");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "kin_received_box_count";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`kin_received_box_count`";

	
	
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




	$tdatalounge_report__buy_takuhai["kin_received_box_count"] = $fdata;
//	kin_received_count_sairai
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "kin_received_count_sairai";
	$fdata["GoodName"] = "kin_received_count_sairai";
	$fdata["ownerTable"] = "lounge_report__buy_takuhai";
	$fdata["Label"] = GetFieldLabel("lounge_report__buy_takuhai","kin_received_count_sairai");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "kin_received_count_sairai";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`kin_received_count_sairai`";

	
	
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




	$tdatalounge_report__buy_takuhai["kin_received_count_sairai"] = $fdata;
//	kin_received_box_count_sairai
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "kin_received_box_count_sairai";
	$fdata["GoodName"] = "kin_received_box_count_sairai";
	$fdata["ownerTable"] = "lounge_report__buy_takuhai";
	$fdata["Label"] = GetFieldLabel("lounge_report__buy_takuhai","kin_received_box_count_sairai");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "kin_received_box_count_sairai";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`kin_received_box_count_sairai`";

	
	
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




	$tdatalounge_report__buy_takuhai["kin_received_box_count_sairai"] = $fdata;
//	kin_price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "kin_price";
	$fdata["GoodName"] = "kin_price";
	$fdata["ownerTable"] = "lounge_report__buy_takuhai";
	$fdata["Label"] = GetFieldLabel("lounge_report__buy_takuhai","kin_price");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "kin_price";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`kin_price`";

	
	
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




	$tdatalounge_report__buy_takuhai["kin_price"] = $fdata;
//	dia_seiyaku_count
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "dia_seiyaku_count";
	$fdata["GoodName"] = "dia_seiyaku_count";
	$fdata["ownerTable"] = "lounge_report__buy_takuhai";
	$fdata["Label"] = GetFieldLabel("lounge_report__buy_takuhai","dia_seiyaku_count");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "dia_seiyaku_count";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`dia_seiyaku_count`";

	
	
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




	$tdatalounge_report__buy_takuhai["dia_seiyaku_count"] = $fdata;
//	dia_awazu_count
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "dia_awazu_count";
	$fdata["GoodName"] = "dia_awazu_count";
	$fdata["ownerTable"] = "lounge_report__buy_takuhai";
	$fdata["Label"] = GetFieldLabel("lounge_report__buy_takuhai","dia_awazu_count");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "dia_awazu_count";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`dia_awazu_count`";

	
	
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




	$tdatalounge_report__buy_takuhai["dia_awazu_count"] = $fdata;
//	dia_received_count
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "dia_received_count";
	$fdata["GoodName"] = "dia_received_count";
	$fdata["ownerTable"] = "lounge_report__buy_takuhai";
	$fdata["Label"] = GetFieldLabel("lounge_report__buy_takuhai","dia_received_count");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "dia_received_count";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`dia_received_count`";

	
	
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




	$tdatalounge_report__buy_takuhai["dia_received_count"] = $fdata;
//	dia_received_box_count
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "dia_received_box_count";
	$fdata["GoodName"] = "dia_received_box_count";
	$fdata["ownerTable"] = "lounge_report__buy_takuhai";
	$fdata["Label"] = GetFieldLabel("lounge_report__buy_takuhai","dia_received_box_count");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "dia_received_box_count";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`dia_received_box_count`";

	
	
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




	$tdatalounge_report__buy_takuhai["dia_received_box_count"] = $fdata;
//	dia_received_count_sairai
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "dia_received_count_sairai";
	$fdata["GoodName"] = "dia_received_count_sairai";
	$fdata["ownerTable"] = "lounge_report__buy_takuhai";
	$fdata["Label"] = GetFieldLabel("lounge_report__buy_takuhai","dia_received_count_sairai");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "dia_received_count_sairai";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`dia_received_count_sairai`";

	
	
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




	$tdatalounge_report__buy_takuhai["dia_received_count_sairai"] = $fdata;
//	dia_received_box_count_sairai
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "dia_received_box_count_sairai";
	$fdata["GoodName"] = "dia_received_box_count_sairai";
	$fdata["ownerTable"] = "lounge_report__buy_takuhai";
	$fdata["Label"] = GetFieldLabel("lounge_report__buy_takuhai","dia_received_box_count_sairai");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "dia_received_box_count_sairai";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`dia_received_box_count_sairai`";

	
	
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




	$tdatalounge_report__buy_takuhai["dia_received_box_count_sairai"] = $fdata;
//	dia_price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "dia_price";
	$fdata["GoodName"] = "dia_price";
	$fdata["ownerTable"] = "lounge_report__buy_takuhai";
	$fdata["Label"] = GetFieldLabel("lounge_report__buy_takuhai","dia_price");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "dia_price";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`dia_price`";

	
	
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




	$tdatalounge_report__buy_takuhai["dia_price"] = $fdata;
//	jewel_seiyaku_count
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "jewel_seiyaku_count";
	$fdata["GoodName"] = "jewel_seiyaku_count";
	$fdata["ownerTable"] = "lounge_report__buy_takuhai";
	$fdata["Label"] = GetFieldLabel("lounge_report__buy_takuhai","jewel_seiyaku_count");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "jewel_seiyaku_count";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`jewel_seiyaku_count`";

	
	
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




	$tdatalounge_report__buy_takuhai["jewel_seiyaku_count"] = $fdata;
//	jewel_awazu_count
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "jewel_awazu_count";
	$fdata["GoodName"] = "jewel_awazu_count";
	$fdata["ownerTable"] = "lounge_report__buy_takuhai";
	$fdata["Label"] = GetFieldLabel("lounge_report__buy_takuhai","jewel_awazu_count");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "jewel_awazu_count";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`jewel_awazu_count`";

	
	
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




	$tdatalounge_report__buy_takuhai["jewel_awazu_count"] = $fdata;
//	jewel_received_count
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "jewel_received_count";
	$fdata["GoodName"] = "jewel_received_count";
	$fdata["ownerTable"] = "lounge_report__buy_takuhai";
	$fdata["Label"] = GetFieldLabel("lounge_report__buy_takuhai","jewel_received_count");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "jewel_received_count";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`jewel_received_count`";

	
	
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




	$tdatalounge_report__buy_takuhai["jewel_received_count"] = $fdata;
//	jewel_received_box_count
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "jewel_received_box_count";
	$fdata["GoodName"] = "jewel_received_box_count";
	$fdata["ownerTable"] = "lounge_report__buy_takuhai";
	$fdata["Label"] = GetFieldLabel("lounge_report__buy_takuhai","jewel_received_box_count");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "jewel_received_box_count";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`jewel_received_box_count`";

	
	
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




	$tdatalounge_report__buy_takuhai["jewel_received_box_count"] = $fdata;
//	jewel_received_count_sairai
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "jewel_received_count_sairai";
	$fdata["GoodName"] = "jewel_received_count_sairai";
	$fdata["ownerTable"] = "lounge_report__buy_takuhai";
	$fdata["Label"] = GetFieldLabel("lounge_report__buy_takuhai","jewel_received_count_sairai");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "jewel_received_count_sairai";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`jewel_received_count_sairai`";

	
	
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




	$tdatalounge_report__buy_takuhai["jewel_received_count_sairai"] = $fdata;
//	jewel_received_box_count_sairai
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "jewel_received_box_count_sairai";
	$fdata["GoodName"] = "jewel_received_box_count_sairai";
	$fdata["ownerTable"] = "lounge_report__buy_takuhai";
	$fdata["Label"] = GetFieldLabel("lounge_report__buy_takuhai","jewel_received_box_count_sairai");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "jewel_received_box_count_sairai";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`jewel_received_box_count_sairai`";

	
	
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




	$tdatalounge_report__buy_takuhai["jewel_received_box_count_sairai"] = $fdata;
//	jewel_price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "jewel_price";
	$fdata["GoodName"] = "jewel_price";
	$fdata["ownerTable"] = "lounge_report__buy_takuhai";
	$fdata["Label"] = GetFieldLabel("lounge_report__buy_takuhai","jewel_price");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "jewel_price";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`jewel_price`";

	
	
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




	$tdatalounge_report__buy_takuhai["jewel_price"] = $fdata;
//	watch_seiyaku_count
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "watch_seiyaku_count";
	$fdata["GoodName"] = "watch_seiyaku_count";
	$fdata["ownerTable"] = "lounge_report__buy_takuhai";
	$fdata["Label"] = GetFieldLabel("lounge_report__buy_takuhai","watch_seiyaku_count");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "watch_seiyaku_count";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`watch_seiyaku_count`";

	
	
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




	$tdatalounge_report__buy_takuhai["watch_seiyaku_count"] = $fdata;
//	watch_awazu_count
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "watch_awazu_count";
	$fdata["GoodName"] = "watch_awazu_count";
	$fdata["ownerTable"] = "lounge_report__buy_takuhai";
	$fdata["Label"] = GetFieldLabel("lounge_report__buy_takuhai","watch_awazu_count");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "watch_awazu_count";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`watch_awazu_count`";

	
	
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




	$tdatalounge_report__buy_takuhai["watch_awazu_count"] = $fdata;
//	watch_received_count
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "watch_received_count";
	$fdata["GoodName"] = "watch_received_count";
	$fdata["ownerTable"] = "lounge_report__buy_takuhai";
	$fdata["Label"] = GetFieldLabel("lounge_report__buy_takuhai","watch_received_count");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "watch_received_count";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`watch_received_count`";

	
	
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




	$tdatalounge_report__buy_takuhai["watch_received_count"] = $fdata;
//	watch_received_box_count
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "watch_received_box_count";
	$fdata["GoodName"] = "watch_received_box_count";
	$fdata["ownerTable"] = "lounge_report__buy_takuhai";
	$fdata["Label"] = GetFieldLabel("lounge_report__buy_takuhai","watch_received_box_count");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "watch_received_box_count";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`watch_received_box_count`";

	
	
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




	$tdatalounge_report__buy_takuhai["watch_received_box_count"] = $fdata;
//	watch_received_count_sairai
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "watch_received_count_sairai";
	$fdata["GoodName"] = "watch_received_count_sairai";
	$fdata["ownerTable"] = "lounge_report__buy_takuhai";
	$fdata["Label"] = GetFieldLabel("lounge_report__buy_takuhai","watch_received_count_sairai");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "watch_received_count_sairai";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`watch_received_count_sairai`";

	
	
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




	$tdatalounge_report__buy_takuhai["watch_received_count_sairai"] = $fdata;
//	watch_received_box_count_sairai
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "watch_received_box_count_sairai";
	$fdata["GoodName"] = "watch_received_box_count_sairai";
	$fdata["ownerTable"] = "lounge_report__buy_takuhai";
	$fdata["Label"] = GetFieldLabel("lounge_report__buy_takuhai","watch_received_box_count_sairai");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "watch_received_box_count_sairai";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`watch_received_box_count_sairai`";

	
	
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




	$tdatalounge_report__buy_takuhai["watch_received_box_count_sairai"] = $fdata;
//	watch_price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "watch_price";
	$fdata["GoodName"] = "watch_price";
	$fdata["ownerTable"] = "lounge_report__buy_takuhai";
	$fdata["Label"] = GetFieldLabel("lounge_report__buy_takuhai","watch_price");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "watch_price";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`watch_price`";

	
	
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




	$tdatalounge_report__buy_takuhai["watch_price"] = $fdata;
//	brand_seiyaku_count
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "brand_seiyaku_count";
	$fdata["GoodName"] = "brand_seiyaku_count";
	$fdata["ownerTable"] = "lounge_report__buy_takuhai";
	$fdata["Label"] = GetFieldLabel("lounge_report__buy_takuhai","brand_seiyaku_count");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "brand_seiyaku_count";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`brand_seiyaku_count`";

	
	
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




	$tdatalounge_report__buy_takuhai["brand_seiyaku_count"] = $fdata;
//	brand_awazu_count
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "brand_awazu_count";
	$fdata["GoodName"] = "brand_awazu_count";
	$fdata["ownerTable"] = "lounge_report__buy_takuhai";
	$fdata["Label"] = GetFieldLabel("lounge_report__buy_takuhai","brand_awazu_count");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "brand_awazu_count";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`brand_awazu_count`";

	
	
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




	$tdatalounge_report__buy_takuhai["brand_awazu_count"] = $fdata;
//	brand_received_count
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "brand_received_count";
	$fdata["GoodName"] = "brand_received_count";
	$fdata["ownerTable"] = "lounge_report__buy_takuhai";
	$fdata["Label"] = GetFieldLabel("lounge_report__buy_takuhai","brand_received_count");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "brand_received_count";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`brand_received_count`";

	
	
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




	$tdatalounge_report__buy_takuhai["brand_received_count"] = $fdata;
//	brand_received_box_count
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "brand_received_box_count";
	$fdata["GoodName"] = "brand_received_box_count";
	$fdata["ownerTable"] = "lounge_report__buy_takuhai";
	$fdata["Label"] = GetFieldLabel("lounge_report__buy_takuhai","brand_received_box_count");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "brand_received_box_count";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`brand_received_box_count`";

	
	
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




	$tdatalounge_report__buy_takuhai["brand_received_box_count"] = $fdata;
//	brand_received_count_sairai
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "brand_received_count_sairai";
	$fdata["GoodName"] = "brand_received_count_sairai";
	$fdata["ownerTable"] = "lounge_report__buy_takuhai";
	$fdata["Label"] = GetFieldLabel("lounge_report__buy_takuhai","brand_received_count_sairai");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "brand_received_count_sairai";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`brand_received_count_sairai`";

	
	
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




	$tdatalounge_report__buy_takuhai["brand_received_count_sairai"] = $fdata;
//	brand_received_box_count_sairai
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "brand_received_box_count_sairai";
	$fdata["GoodName"] = "brand_received_box_count_sairai";
	$fdata["ownerTable"] = "lounge_report__buy_takuhai";
	$fdata["Label"] = GetFieldLabel("lounge_report__buy_takuhai","brand_received_box_count_sairai");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "brand_received_box_count_sairai";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`brand_received_box_count_sairai`";

	
	
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




	$tdatalounge_report__buy_takuhai["brand_received_box_count_sairai"] = $fdata;
//	brand_price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "brand_price";
	$fdata["GoodName"] = "brand_price";
	$fdata["ownerTable"] = "lounge_report__buy_takuhai";
	$fdata["Label"] = GetFieldLabel("lounge_report__buy_takuhai","brand_price");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "brand_price";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`brand_price`";

	
	
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




	$tdatalounge_report__buy_takuhai["brand_price"] = $fdata;
//	hansoku_price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "hansoku_price";
	$fdata["GoodName"] = "hansoku_price";
	$fdata["ownerTable"] = "lounge_report__buy_takuhai";
	$fdata["Label"] = GetFieldLabel("lounge_report__buy_takuhai","hansoku_price");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "hansoku_price";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`hansoku_price`";

	
	
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




	$tdatalounge_report__buy_takuhai["hansoku_price"] = $fdata;


$tables_data["lounge_report__buy_takuhai"]=&$tdatalounge_report__buy_takuhai;
$field_labels["lounge_report__buy_takuhai"] = &$fieldLabelslounge_report__buy_takuhai;
$fieldToolTips["lounge_report__buy_takuhai"] = &$fieldToolTipslounge_report__buy_takuhai;
$placeHolders["lounge_report__buy_takuhai"] = &$placeHolderslounge_report__buy_takuhai;
$page_titles["lounge_report__buy_takuhai"] = &$pageTitleslounge_report__buy_takuhai;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["lounge_report__buy_takuhai"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["lounge_report__buy_takuhai"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_lounge_report__buy_takuhai()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`date`,  `total_price`,  `total_received_count`,  `total_received_box_count`,  `updated_at`,  `kin_seiyaku_count`,  `kin_awazu_count`,  `kin_received_count`,  `kin_received_box_count`,  `kin_received_count_sairai`,  `kin_received_box_count_sairai`,  `kin_price`,  `dia_seiyaku_count`,  `dia_awazu_count`,  `dia_received_count`,  `dia_received_box_count`,  `dia_received_count_sairai`,  `dia_received_box_count_sairai`,  `dia_price`,  `jewel_seiyaku_count`,  `jewel_awazu_count`,  `jewel_received_count`,  `jewel_received_box_count`,  `jewel_received_count_sairai`,  `jewel_received_box_count_sairai`,  `jewel_price`,  `watch_seiyaku_count`,  `watch_awazu_count`,  `watch_received_count`,  `watch_received_box_count`,  `watch_received_count_sairai`,  `watch_received_box_count_sairai`,  `watch_price`,  `brand_seiyaku_count`,  `brand_awazu_count`,  `brand_received_count`,  `brand_received_box_count`,  `brand_received_count_sairai`,  `brand_received_box_count_sairai`,  `brand_price`,  `hansoku_price`";
$proto0["m_strFrom"] = "FROM `lounge_report__buy_takuhai`";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY `date` DESC";
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
	"m_strName" => "date",
	"m_strTable" => "lounge_report__buy_takuhai",
	"m_srcTableName" => "lounge_report__buy_takuhai"
));

$proto6["m_sql"] = "`date`";
$proto6["m_srcTableName"] = "lounge_report__buy_takuhai";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "total_price",
	"m_strTable" => "lounge_report__buy_takuhai",
	"m_srcTableName" => "lounge_report__buy_takuhai"
));

$proto8["m_sql"] = "`total_price`";
$proto8["m_srcTableName"] = "lounge_report__buy_takuhai";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "total_received_count",
	"m_strTable" => "lounge_report__buy_takuhai",
	"m_srcTableName" => "lounge_report__buy_takuhai"
));

$proto10["m_sql"] = "`total_received_count`";
$proto10["m_srcTableName"] = "lounge_report__buy_takuhai";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "total_received_box_count",
	"m_strTable" => "lounge_report__buy_takuhai",
	"m_srcTableName" => "lounge_report__buy_takuhai"
));

$proto12["m_sql"] = "`total_received_box_count`";
$proto12["m_srcTableName"] = "lounge_report__buy_takuhai";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "lounge_report__buy_takuhai",
	"m_srcTableName" => "lounge_report__buy_takuhai"
));

$proto14["m_sql"] = "`updated_at`";
$proto14["m_srcTableName"] = "lounge_report__buy_takuhai";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "kin_seiyaku_count",
	"m_strTable" => "lounge_report__buy_takuhai",
	"m_srcTableName" => "lounge_report__buy_takuhai"
));

$proto16["m_sql"] = "`kin_seiyaku_count`";
$proto16["m_srcTableName"] = "lounge_report__buy_takuhai";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "kin_awazu_count",
	"m_strTable" => "lounge_report__buy_takuhai",
	"m_srcTableName" => "lounge_report__buy_takuhai"
));

$proto18["m_sql"] = "`kin_awazu_count`";
$proto18["m_srcTableName"] = "lounge_report__buy_takuhai";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "kin_received_count",
	"m_strTable" => "lounge_report__buy_takuhai",
	"m_srcTableName" => "lounge_report__buy_takuhai"
));

$proto20["m_sql"] = "`kin_received_count`";
$proto20["m_srcTableName"] = "lounge_report__buy_takuhai";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "kin_received_box_count",
	"m_strTable" => "lounge_report__buy_takuhai",
	"m_srcTableName" => "lounge_report__buy_takuhai"
));

$proto22["m_sql"] = "`kin_received_box_count`";
$proto22["m_srcTableName"] = "lounge_report__buy_takuhai";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "kin_received_count_sairai",
	"m_strTable" => "lounge_report__buy_takuhai",
	"m_srcTableName" => "lounge_report__buy_takuhai"
));

$proto24["m_sql"] = "`kin_received_count_sairai`";
$proto24["m_srcTableName"] = "lounge_report__buy_takuhai";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "kin_received_box_count_sairai",
	"m_strTable" => "lounge_report__buy_takuhai",
	"m_srcTableName" => "lounge_report__buy_takuhai"
));

$proto26["m_sql"] = "`kin_received_box_count_sairai`";
$proto26["m_srcTableName"] = "lounge_report__buy_takuhai";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "kin_price",
	"m_strTable" => "lounge_report__buy_takuhai",
	"m_srcTableName" => "lounge_report__buy_takuhai"
));

$proto28["m_sql"] = "`kin_price`";
$proto28["m_srcTableName"] = "lounge_report__buy_takuhai";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "dia_seiyaku_count",
	"m_strTable" => "lounge_report__buy_takuhai",
	"m_srcTableName" => "lounge_report__buy_takuhai"
));

$proto30["m_sql"] = "`dia_seiyaku_count`";
$proto30["m_srcTableName"] = "lounge_report__buy_takuhai";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "dia_awazu_count",
	"m_strTable" => "lounge_report__buy_takuhai",
	"m_srcTableName" => "lounge_report__buy_takuhai"
));

$proto32["m_sql"] = "`dia_awazu_count`";
$proto32["m_srcTableName"] = "lounge_report__buy_takuhai";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "dia_received_count",
	"m_strTable" => "lounge_report__buy_takuhai",
	"m_srcTableName" => "lounge_report__buy_takuhai"
));

$proto34["m_sql"] = "`dia_received_count`";
$proto34["m_srcTableName"] = "lounge_report__buy_takuhai";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "dia_received_box_count",
	"m_strTable" => "lounge_report__buy_takuhai",
	"m_srcTableName" => "lounge_report__buy_takuhai"
));

$proto36["m_sql"] = "`dia_received_box_count`";
$proto36["m_srcTableName"] = "lounge_report__buy_takuhai";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "dia_received_count_sairai",
	"m_strTable" => "lounge_report__buy_takuhai",
	"m_srcTableName" => "lounge_report__buy_takuhai"
));

$proto38["m_sql"] = "`dia_received_count_sairai`";
$proto38["m_srcTableName"] = "lounge_report__buy_takuhai";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "dia_received_box_count_sairai",
	"m_strTable" => "lounge_report__buy_takuhai",
	"m_srcTableName" => "lounge_report__buy_takuhai"
));

$proto40["m_sql"] = "`dia_received_box_count_sairai`";
$proto40["m_srcTableName"] = "lounge_report__buy_takuhai";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "dia_price",
	"m_strTable" => "lounge_report__buy_takuhai",
	"m_srcTableName" => "lounge_report__buy_takuhai"
));

$proto42["m_sql"] = "`dia_price`";
$proto42["m_srcTableName"] = "lounge_report__buy_takuhai";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "jewel_seiyaku_count",
	"m_strTable" => "lounge_report__buy_takuhai",
	"m_srcTableName" => "lounge_report__buy_takuhai"
));

$proto44["m_sql"] = "`jewel_seiyaku_count`";
$proto44["m_srcTableName"] = "lounge_report__buy_takuhai";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "jewel_awazu_count",
	"m_strTable" => "lounge_report__buy_takuhai",
	"m_srcTableName" => "lounge_report__buy_takuhai"
));

$proto46["m_sql"] = "`jewel_awazu_count`";
$proto46["m_srcTableName"] = "lounge_report__buy_takuhai";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "jewel_received_count",
	"m_strTable" => "lounge_report__buy_takuhai",
	"m_srcTableName" => "lounge_report__buy_takuhai"
));

$proto48["m_sql"] = "`jewel_received_count`";
$proto48["m_srcTableName"] = "lounge_report__buy_takuhai";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "jewel_received_box_count",
	"m_strTable" => "lounge_report__buy_takuhai",
	"m_srcTableName" => "lounge_report__buy_takuhai"
));

$proto50["m_sql"] = "`jewel_received_box_count`";
$proto50["m_srcTableName"] = "lounge_report__buy_takuhai";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "jewel_received_count_sairai",
	"m_strTable" => "lounge_report__buy_takuhai",
	"m_srcTableName" => "lounge_report__buy_takuhai"
));

$proto52["m_sql"] = "`jewel_received_count_sairai`";
$proto52["m_srcTableName"] = "lounge_report__buy_takuhai";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "jewel_received_box_count_sairai",
	"m_strTable" => "lounge_report__buy_takuhai",
	"m_srcTableName" => "lounge_report__buy_takuhai"
));

$proto54["m_sql"] = "`jewel_received_box_count_sairai`";
$proto54["m_srcTableName"] = "lounge_report__buy_takuhai";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "jewel_price",
	"m_strTable" => "lounge_report__buy_takuhai",
	"m_srcTableName" => "lounge_report__buy_takuhai"
));

$proto56["m_sql"] = "`jewel_price`";
$proto56["m_srcTableName"] = "lounge_report__buy_takuhai";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "watch_seiyaku_count",
	"m_strTable" => "lounge_report__buy_takuhai",
	"m_srcTableName" => "lounge_report__buy_takuhai"
));

$proto58["m_sql"] = "`watch_seiyaku_count`";
$proto58["m_srcTableName"] = "lounge_report__buy_takuhai";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "watch_awazu_count",
	"m_strTable" => "lounge_report__buy_takuhai",
	"m_srcTableName" => "lounge_report__buy_takuhai"
));

$proto60["m_sql"] = "`watch_awazu_count`";
$proto60["m_srcTableName"] = "lounge_report__buy_takuhai";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "watch_received_count",
	"m_strTable" => "lounge_report__buy_takuhai",
	"m_srcTableName" => "lounge_report__buy_takuhai"
));

$proto62["m_sql"] = "`watch_received_count`";
$proto62["m_srcTableName"] = "lounge_report__buy_takuhai";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "watch_received_box_count",
	"m_strTable" => "lounge_report__buy_takuhai",
	"m_srcTableName" => "lounge_report__buy_takuhai"
));

$proto64["m_sql"] = "`watch_received_box_count`";
$proto64["m_srcTableName"] = "lounge_report__buy_takuhai";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "watch_received_count_sairai",
	"m_strTable" => "lounge_report__buy_takuhai",
	"m_srcTableName" => "lounge_report__buy_takuhai"
));

$proto66["m_sql"] = "`watch_received_count_sairai`";
$proto66["m_srcTableName"] = "lounge_report__buy_takuhai";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "watch_received_box_count_sairai",
	"m_strTable" => "lounge_report__buy_takuhai",
	"m_srcTableName" => "lounge_report__buy_takuhai"
));

$proto68["m_sql"] = "`watch_received_box_count_sairai`";
$proto68["m_srcTableName"] = "lounge_report__buy_takuhai";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "watch_price",
	"m_strTable" => "lounge_report__buy_takuhai",
	"m_srcTableName" => "lounge_report__buy_takuhai"
));

$proto70["m_sql"] = "`watch_price`";
$proto70["m_srcTableName"] = "lounge_report__buy_takuhai";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "brand_seiyaku_count",
	"m_strTable" => "lounge_report__buy_takuhai",
	"m_srcTableName" => "lounge_report__buy_takuhai"
));

$proto72["m_sql"] = "`brand_seiyaku_count`";
$proto72["m_srcTableName"] = "lounge_report__buy_takuhai";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "brand_awazu_count",
	"m_strTable" => "lounge_report__buy_takuhai",
	"m_srcTableName" => "lounge_report__buy_takuhai"
));

$proto74["m_sql"] = "`brand_awazu_count`";
$proto74["m_srcTableName"] = "lounge_report__buy_takuhai";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "brand_received_count",
	"m_strTable" => "lounge_report__buy_takuhai",
	"m_srcTableName" => "lounge_report__buy_takuhai"
));

$proto76["m_sql"] = "`brand_received_count`";
$proto76["m_srcTableName"] = "lounge_report__buy_takuhai";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "brand_received_box_count",
	"m_strTable" => "lounge_report__buy_takuhai",
	"m_srcTableName" => "lounge_report__buy_takuhai"
));

$proto78["m_sql"] = "`brand_received_box_count`";
$proto78["m_srcTableName"] = "lounge_report__buy_takuhai";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "brand_received_count_sairai",
	"m_strTable" => "lounge_report__buy_takuhai",
	"m_srcTableName" => "lounge_report__buy_takuhai"
));

$proto80["m_sql"] = "`brand_received_count_sairai`";
$proto80["m_srcTableName"] = "lounge_report__buy_takuhai";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "brand_received_box_count_sairai",
	"m_strTable" => "lounge_report__buy_takuhai",
	"m_srcTableName" => "lounge_report__buy_takuhai"
));

$proto82["m_sql"] = "`brand_received_box_count_sairai`";
$proto82["m_srcTableName"] = "lounge_report__buy_takuhai";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "brand_price",
	"m_strTable" => "lounge_report__buy_takuhai",
	"m_srcTableName" => "lounge_report__buy_takuhai"
));

$proto84["m_sql"] = "`brand_price`";
$proto84["m_srcTableName"] = "lounge_report__buy_takuhai";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "hansoku_price",
	"m_strTable" => "lounge_report__buy_takuhai",
	"m_srcTableName" => "lounge_report__buy_takuhai"
));

$proto86["m_sql"] = "`hansoku_price`";
$proto86["m_srcTableName"] = "lounge_report__buy_takuhai";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto88=array();
$proto88["m_link"] = "SQLL_MAIN";
			$proto89=array();
$proto89["m_strName"] = "lounge_report__buy_takuhai";
$proto89["m_srcTableName"] = "lounge_report__buy_takuhai";
$proto89["m_columns"] = array();
$proto89["m_columns"][] = "date";
$proto89["m_columns"][] = "updated_at";
$proto89["m_columns"][] = "kin_awazu_count";
$proto89["m_columns"][] = "kin_seiyaku_count";
$proto89["m_columns"][] = "kin_price";
$proto89["m_columns"][] = "dia_awazu_count";
$proto89["m_columns"][] = "dia_seiyaku_count";
$proto89["m_columns"][] = "dia_price";
$proto89["m_columns"][] = "jewel_awazu_count";
$proto89["m_columns"][] = "jewel_seiyaku_count";
$proto89["m_columns"][] = "jewel_price";
$proto89["m_columns"][] = "watch_awazu_count";
$proto89["m_columns"][] = "watch_seiyaku_count";
$proto89["m_columns"][] = "watch_price";
$proto89["m_columns"][] = "brand_awazu_count";
$proto89["m_columns"][] = "brand_seiyaku_count";
$proto89["m_columns"][] = "brand_price";
$proto89["m_columns"][] = "hansoku_price";
$proto89["m_columns"][] = "total_price";
$proto89["m_columns"][] = "kin_received_count";
$proto89["m_columns"][] = "dia_received_count";
$proto89["m_columns"][] = "brand_received_count";
$proto89["m_columns"][] = "kin_received_box_count";
$proto89["m_columns"][] = "dia_received_box_count";
$proto89["m_columns"][] = "brand_received_box_count";
$proto89["m_columns"][] = "kin_received_count_sairai";
$proto89["m_columns"][] = "dia_received_count_sairai";
$proto89["m_columns"][] = "brand_received_count_sairai";
$proto89["m_columns"][] = "kin_received_box_count_sairai";
$proto89["m_columns"][] = "dia_received_box_count_sairai";
$proto89["m_columns"][] = "brand_received_box_count_sairai";
$proto89["m_columns"][] = "total_received_count";
$proto89["m_columns"][] = "total_received_box_count";
$proto89["m_columns"][] = "jewel_received_count";
$proto89["m_columns"][] = "jewel_received_box_count";
$proto89["m_columns"][] = "jewel_received_count_sairai";
$proto89["m_columns"][] = "jewel_received_box_count_sairai";
$proto89["m_columns"][] = "watch_received_count";
$proto89["m_columns"][] = "watch_received_box_count";
$proto89["m_columns"][] = "watch_received_count_sairai";
$proto89["m_columns"][] = "watch_received_box_count_sairai";
$proto89["m_columns"][] = "jewel_awazu_count_BJ";
$proto89["m_columns"][] = "jewel_seiyaku_count_BJ";
$proto89["m_columns"][] = "jewel_price_BJ";
$proto89["m_columns"][] = "jewel_received_count_BJ";
$proto89["m_columns"][] = "jewel_received_box_count_BJ";
$proto89["m_columns"][] = "jewel_received_count_sairai_BJ";
$proto89["m_columns"][] = "jewel_received_box_count_sairai_BJ";
$proto89["m_columns"][] = "total_received_count_sairai";
$proto89["m_columns"][] = "total_received_box_count_sairai";
$obj = new SQLTable($proto89);

$proto88["m_table"] = $obj;
$proto88["m_sql"] = "`lounge_report__buy_takuhai`";
$proto88["m_alias"] = "";
$proto88["m_srcTableName"] = "lounge_report__buy_takuhai";
$proto90=array();
$proto90["m_sql"] = "";
$proto90["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto90["m_column"]=$obj;
$proto90["m_contained"] = array();
$proto90["m_strCase"] = "";
$proto90["m_havingmode"] = false;
$proto90["m_inBrackets"] = false;
$proto90["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto90);

$proto88["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto88);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto92=array();
						$obj = new SQLField(array(
	"m_strName" => "date",
	"m_strTable" => "lounge_report__buy_takuhai",
	"m_srcTableName" => "lounge_report__buy_takuhai"
));

$proto92["m_column"]=$obj;
$proto92["m_bAsc"] = 0;
$proto92["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto92);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="lounge_report__buy_takuhai";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_lounge_report__buy_takuhai = createSqlQuery_lounge_report__buy_takuhai();


	
		;

																																									

$tdatalounge_report__buy_takuhai[".sqlquery"] = $queryData_lounge_report__buy_takuhai;

$tableEvents["lounge_report__buy_takuhai"] = new eventsBase;
$tdatalounge_report__buy_takuhai[".hasEvents"] = false;

?>