<?php
require_once(getabspath("classes/cipherer.php"));




$tdataEoc_royal_customers = array();
	$tdataEoc_royal_customers[".truncateText"] = true;
	$tdataEoc_royal_customers[".NumberOfChars"] = 80;
	$tdataEoc_royal_customers[".ShortName"] = "Eoc_royal_customers";
	$tdataEoc_royal_customers[".OwnerID"] = "";
	$tdataEoc_royal_customers[".OriginalTable"] = "Eoc";

//	field labels
$fieldLabelsEoc_royal_customers = array();
$fieldToolTipsEoc_royal_customers = array();
$pageTitlesEoc_royal_customers = array();
$placeHoldersEoc_royal_customers = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsEoc_royal_customers["Japanese"] = array();
	$fieldToolTipsEoc_royal_customers["Japanese"] = array();
	$placeHoldersEoc_royal_customers["Japanese"] = array();
	$pageTitlesEoc_royal_customers["Japanese"] = array();
	$fieldLabelsEoc_royal_customers["Japanese"]["ecc_id"] = "顧客ＳＥＱ";
	$fieldToolTipsEoc_royal_customers["Japanese"]["ecc_id"] = "";
	$placeHoldersEoc_royal_customers["Japanese"]["ecc_id"] = "";
	$fieldLabelsEoc_royal_customers["Japanese"]["name1"] = "名前";
	$fieldToolTipsEoc_royal_customers["Japanese"]["name1"] = "";
	$placeHoldersEoc_royal_customers["Japanese"]["name1"] = "";
	$fieldLabelsEoc_royal_customers["Japanese"]["name2"] = "フリガナ";
	$fieldToolTipsEoc_royal_customers["Japanese"]["name2"] = "";
	$placeHoldersEoc_royal_customers["Japanese"]["name2"] = "";
	$fieldLabelsEoc_royal_customers["Japanese"]["age"] = "年齢";
	$fieldToolTipsEoc_royal_customers["Japanese"]["age"] = "";
	$placeHoldersEoc_royal_customers["Japanese"]["age"] = "";
	$fieldLabelsEoc_royal_customers["Japanese"]["address1"] = "都道府県";
	$fieldToolTipsEoc_royal_customers["Japanese"]["address1"] = "";
	$placeHoldersEoc_royal_customers["Japanese"]["address1"] = "";
	$fieldLabelsEoc_royal_customers["Japanese"]["address2"] = "市町村区郡";
	$fieldToolTipsEoc_royal_customers["Japanese"]["address2"] = "";
	$placeHoldersEoc_royal_customers["Japanese"]["address2"] = "";
	$fieldLabelsEoc_royal_customers["Japanese"]["address3"] = "以下住所";
	$fieldToolTipsEoc_royal_customers["Japanese"]["address3"] = "";
	$placeHoldersEoc_royal_customers["Japanese"]["address3"] = "";
	$fieldLabelsEoc_royal_customers["Japanese"]["tel"] = "電話";
	$fieldToolTipsEoc_royal_customers["Japanese"]["tel"] = "";
	$placeHoldersEoc_royal_customers["Japanese"]["tel"] = "";
	$fieldLabelsEoc_royal_customers["Japanese"]["tel2"] = "携帯";
	$fieldToolTipsEoc_royal_customers["Japanese"]["tel2"] = "";
	$placeHoldersEoc_royal_customers["Japanese"]["tel2"] = "";
	$fieldLabelsEoc_royal_customers["Japanese"]["mail1"] = "メアド";
	$fieldToolTipsEoc_royal_customers["Japanese"]["mail1"] = "";
	$placeHoldersEoc_royal_customers["Japanese"]["mail1"] = "";
	$fieldLabelsEoc_royal_customers["Japanese"]["mail2"] = "メアド２";
	$fieldToolTipsEoc_royal_customers["Japanese"]["mail2"] = "";
	$placeHoldersEoc_royal_customers["Japanese"]["mail2"] = "";
	$fieldLabelsEoc_royal_customers["Japanese"]["updated_at"] = "更新日";
	$fieldToolTipsEoc_royal_customers["Japanese"]["updated_at"] = "";
	$placeHoldersEoc_royal_customers["Japanese"]["updated_at"] = "";
	$fieldLabelsEoc_royal_customers["Japanese"]["royal_customer_status"] = "ステータス";
	$fieldToolTipsEoc_royal_customers["Japanese"]["royal_customer_status"] = "";
	$placeHoldersEoc_royal_customers["Japanese"]["royal_customer_status"] = "";
	$fieldLabelsEoc_royal_customers["Japanese"]["gender"] = "性別";
	$fieldToolTipsEoc_royal_customers["Japanese"]["gender"] = "";
	$placeHoldersEoc_royal_customers["Japanese"]["gender"] = "";
	$fieldLabelsEoc_royal_customers["Japanese"]["todou"] = "居住地域";
	$fieldToolTipsEoc_royal_customers["Japanese"]["todou"] = "";
	$placeHoldersEoc_royal_customers["Japanese"]["todou"] = "";
	$fieldLabelsEoc_royal_customers["Japanese"]["family"] = "家族構成";
	$fieldToolTipsEoc_royal_customers["Japanese"]["family"] = "";
	$placeHoldersEoc_royal_customers["Japanese"]["family"] = "";
	$fieldLabelsEoc_royal_customers["Japanese"]["income"] = "年収";
	$fieldToolTipsEoc_royal_customers["Japanese"]["income"] = "";
	$placeHoldersEoc_royal_customers["Japanese"]["income"] = "";
	$fieldLabelsEoc_royal_customers["Japanese"]["cumulative_earnings"] = "累積利益";
	$fieldToolTipsEoc_royal_customers["Japanese"]["cumulative_earnings"] = "";
	$placeHoldersEoc_royal_customers["Japanese"]["cumulative_earnings"] = "";
	$fieldLabelsEoc_royal_customers["Japanese"]["number_of_times"] = "リピート回数";
	$fieldToolTipsEoc_royal_customers["Japanese"]["number_of_times"] = "";
	$placeHoldersEoc_royal_customers["Japanese"]["number_of_times"] = "";
	$fieldLabelsEoc_royal_customers["Japanese"]["close_rate"] = " 成約率";
	$fieldToolTipsEoc_royal_customers["Japanese"]["close_rate"] = "";
	$placeHoldersEoc_royal_customers["Japanese"]["close_rate"] = "";
	$fieldLabelsEoc_royal_customers["Japanese"]["LTV_prediction"] = "LTV予測";
	$fieldToolTipsEoc_royal_customers["Japanese"]["LTV_prediction"] = "";
	$placeHoldersEoc_royal_customers["Japanese"]["LTV_prediction"] = "";
	$fieldLabelsEoc_royal_customers["Japanese"]["usage_period"] = "利用期間";
	$fieldToolTipsEoc_royal_customers["Japanese"]["usage_period"] = "";
	$placeHoldersEoc_royal_customers["Japanese"]["usage_period"] = "";
	$fieldLabelsEoc_royal_customers["Japanese"]["last_closing_date"] = "直近成約日";
	$fieldToolTipsEoc_royal_customers["Japanese"]["last_closing_date"] = "";
	$placeHoldersEoc_royal_customers["Japanese"]["last_closing_date"] = "";
	$fieldLabelsEoc_royal_customers["Japanese"]["type_trend"] = "Type Trend";
	$fieldToolTipsEoc_royal_customers["Japanese"]["type_trend"] = "";
	$placeHoldersEoc_royal_customers["Japanese"]["type_trend"] = "";
	$fieldLabelsEoc_royal_customers["Japanese"]["handling_number_of_brands"] = "ブランド数";
	$fieldToolTipsEoc_royal_customers["Japanese"]["handling_number_of_brands"] = "";
	$placeHoldersEoc_royal_customers["Japanese"]["handling_number_of_brands"] = "";
	$fieldLabelsEoc_royal_customers["Japanese"]["trend_destination_of_selling"] = "Trend Destination Of Selling";
	$fieldToolTipsEoc_royal_customers["Japanese"]["trend_destination_of_selling"] = "";
	$placeHoldersEoc_royal_customers["Japanese"]["trend_destination_of_selling"] = "";
	$fieldLabelsEoc_royal_customers["Japanese"]["questionnaire_quality"] = "Questionnaire Quality";
	$fieldToolTipsEoc_royal_customers["Japanese"]["questionnaire_quality"] = "";
	$placeHoldersEoc_royal_customers["Japanese"]["questionnaire_quality"] = "";
	$fieldLabelsEoc_royal_customers["Japanese"]["updated_by"] = "Updated By";
	$fieldToolTipsEoc_royal_customers["Japanese"]["updated_by"] = "";
	$placeHoldersEoc_royal_customers["Japanese"]["updated_by"] = "";
	$fieldLabelsEoc_royal_customers["Japanese"]["created_at"] = "Created At";
	$fieldToolTipsEoc_royal_customers["Japanese"]["created_at"] = "";
	$placeHoldersEoc_royal_customers["Japanese"]["created_at"] = "";
	$fieldLabelsEoc_royal_customers["Japanese"]["created_by"] = "Created By";
	$fieldToolTipsEoc_royal_customers["Japanese"]["created_by"] = "";
	$placeHoldersEoc_royal_customers["Japanese"]["created_by"] = "";
	$fieldLabelsEoc_royal_customers["Japanese"]["selling_count_ec"] = "[売先個数]EC";
	$fieldToolTipsEoc_royal_customers["Japanese"]["selling_count_ec"] = "";
	$placeHoldersEoc_royal_customers["Japanese"]["selling_count_ec"] = "";
	$fieldLabelsEoc_royal_customers["Japanese"]["selling_count_ichiba"] = "[売先個数]市場";
	$fieldToolTipsEoc_royal_customers["Japanese"]["selling_count_ichiba"] = "";
	$placeHoldersEoc_royal_customers["Japanese"]["selling_count_ichiba"] = "";
	$fieldLabelsEoc_royal_customers["Japanese"]["type_count_K"] = "[種別個数]K";
	$fieldToolTipsEoc_royal_customers["Japanese"]["type_count_K"] = "";
	$placeHoldersEoc_royal_customers["Japanese"]["type_count_K"] = "";
	$fieldLabelsEoc_royal_customers["Japanese"]["type_count_D"] = "[種別個数]D";
	$fieldToolTipsEoc_royal_customers["Japanese"]["type_count_D"] = "";
	$placeHoldersEoc_royal_customers["Japanese"]["type_count_D"] = "";
	$fieldLabelsEoc_royal_customers["Japanese"]["type_count_J"] = "[種別個数]J";
	$fieldToolTipsEoc_royal_customers["Japanese"]["type_count_J"] = "";
	$placeHoldersEoc_royal_customers["Japanese"]["type_count_J"] = "";
	$fieldLabelsEoc_royal_customers["Japanese"]["type_count_W"] = "[種別個数]W";
	$fieldToolTipsEoc_royal_customers["Japanese"]["type_count_W"] = "";
	$placeHoldersEoc_royal_customers["Japanese"]["type_count_W"] = "";
	$fieldLabelsEoc_royal_customers["Japanese"]["type_count_B"] = "[種別個数]B";
	$fieldToolTipsEoc_royal_customers["Japanese"]["type_count_B"] = "";
	$placeHoldersEoc_royal_customers["Japanese"]["type_count_B"] = "";
	$fieldLabelsEoc_royal_customers["Japanese"]["type_count_H"] = "[種別個数]H";
	$fieldToolTipsEoc_royal_customers["Japanese"]["type_count_H"] = "";
	$placeHoldersEoc_royal_customers["Japanese"]["type_count_H"] = "";
	$fieldLabelsEoc_royal_customers["Japanese"]["type_count_other"] = "[種別個数]他";
	$fieldToolTipsEoc_royal_customers["Japanese"]["type_count_other"] = "";
	$placeHoldersEoc_royal_customers["Japanese"]["type_count_other"] = "";
	$fieldLabelsEoc_royal_customers["Japanese"]["selling_price_ec"] = "Selling Price Ec";
	$fieldToolTipsEoc_royal_customers["Japanese"]["selling_price_ec"] = "";
	$placeHoldersEoc_royal_customers["Japanese"]["selling_price_ec"] = "";
	$fieldLabelsEoc_royal_customers["Japanese"]["selling_arari_ec"] = "Selling Arari Ec";
	$fieldToolTipsEoc_royal_customers["Japanese"]["selling_arari_ec"] = "";
	$placeHoldersEoc_royal_customers["Japanese"]["selling_arari_ec"] = "";
	$fieldLabelsEoc_royal_customers["Japanese"]["selling_price_ichiba"] = "Selling Price Ichiba";
	$fieldToolTipsEoc_royal_customers["Japanese"]["selling_price_ichiba"] = "";
	$placeHoldersEoc_royal_customers["Japanese"]["selling_price_ichiba"] = "";
	$fieldLabelsEoc_royal_customers["Japanese"]["selling_arari_ichiba"] = "Selling Arari Ichiba";
	$fieldToolTipsEoc_royal_customers["Japanese"]["selling_arari_ichiba"] = "";
	$placeHoldersEoc_royal_customers["Japanese"]["selling_arari_ichiba"] = "";
	$fieldLabelsEoc_royal_customers["Japanese"]["type_price_K"] = "Type Price K";
	$fieldToolTipsEoc_royal_customers["Japanese"]["type_price_K"] = "";
	$placeHoldersEoc_royal_customers["Japanese"]["type_price_K"] = "";
	$fieldLabelsEoc_royal_customers["Japanese"]["type_arari_K"] = "Type Arari K";
	$fieldToolTipsEoc_royal_customers["Japanese"]["type_arari_K"] = "";
	$placeHoldersEoc_royal_customers["Japanese"]["type_arari_K"] = "";
	$fieldLabelsEoc_royal_customers["Japanese"]["type_price_D"] = "Type Price D";
	$fieldToolTipsEoc_royal_customers["Japanese"]["type_price_D"] = "";
	$placeHoldersEoc_royal_customers["Japanese"]["type_price_D"] = "";
	$fieldLabelsEoc_royal_customers["Japanese"]["type_arari_D"] = "Type Arari D";
	$fieldToolTipsEoc_royal_customers["Japanese"]["type_arari_D"] = "";
	$placeHoldersEoc_royal_customers["Japanese"]["type_arari_D"] = "";
	$fieldLabelsEoc_royal_customers["Japanese"]["type_price_J"] = "Type Price J";
	$fieldToolTipsEoc_royal_customers["Japanese"]["type_price_J"] = "";
	$placeHoldersEoc_royal_customers["Japanese"]["type_price_J"] = "";
	$fieldLabelsEoc_royal_customers["Japanese"]["type_arari_J"] = "Type Arari J";
	$fieldToolTipsEoc_royal_customers["Japanese"]["type_arari_J"] = "";
	$placeHoldersEoc_royal_customers["Japanese"]["type_arari_J"] = "";
	$fieldLabelsEoc_royal_customers["Japanese"]["type_price_W"] = "Type Price W";
	$fieldToolTipsEoc_royal_customers["Japanese"]["type_price_W"] = "";
	$placeHoldersEoc_royal_customers["Japanese"]["type_price_W"] = "";
	$fieldLabelsEoc_royal_customers["Japanese"]["type_arari_W"] = "Type Arari W";
	$fieldToolTipsEoc_royal_customers["Japanese"]["type_arari_W"] = "";
	$placeHoldersEoc_royal_customers["Japanese"]["type_arari_W"] = "";
	$fieldLabelsEoc_royal_customers["Japanese"]["type_price_B"] = "Type Price B";
	$fieldToolTipsEoc_royal_customers["Japanese"]["type_price_B"] = "";
	$placeHoldersEoc_royal_customers["Japanese"]["type_price_B"] = "";
	$fieldLabelsEoc_royal_customers["Japanese"]["type_arari_B"] = "Type Arari B";
	$fieldToolTipsEoc_royal_customers["Japanese"]["type_arari_B"] = "";
	$placeHoldersEoc_royal_customers["Japanese"]["type_arari_B"] = "";
	$fieldLabelsEoc_royal_customers["Japanese"]["type_price_H"] = "Type Price H";
	$fieldToolTipsEoc_royal_customers["Japanese"]["type_price_H"] = "";
	$placeHoldersEoc_royal_customers["Japanese"]["type_price_H"] = "";
	$fieldLabelsEoc_royal_customers["Japanese"]["type_arari_H"] = "Type Arari H";
	$fieldToolTipsEoc_royal_customers["Japanese"]["type_arari_H"] = "";
	$placeHoldersEoc_royal_customers["Japanese"]["type_arari_H"] = "";
	$fieldLabelsEoc_royal_customers["Japanese"]["type_price_other"] = "Type Price Other";
	$fieldToolTipsEoc_royal_customers["Japanese"]["type_price_other"] = "";
	$placeHoldersEoc_royal_customers["Japanese"]["type_price_other"] = "";
	$fieldLabelsEoc_royal_customers["Japanese"]["type_arari_other"] = "Type Arari Other";
	$fieldToolTipsEoc_royal_customers["Japanese"]["type_arari_other"] = "";
	$placeHoldersEoc_royal_customers["Japanese"]["type_arari_other"] = "";
	$fieldLabelsEoc_royal_customers["Japanese"]["questquestion_count_very_satisfied"] = "Questquestion Count Very Satisfied";
	$fieldToolTipsEoc_royal_customers["Japanese"]["questquestion_count_very_satisfied"] = "";
	$placeHoldersEoc_royal_customers["Japanese"]["questquestion_count_very_satisfied"] = "";
	$fieldLabelsEoc_royal_customers["Japanese"]["questquestion_count_somewhat_satisfied"] = "Questquestion Count Somewhat Satisfied";
	$fieldToolTipsEoc_royal_customers["Japanese"]["questquestion_count_somewhat_satisfied"] = "";
	$placeHoldersEoc_royal_customers["Japanese"]["questquestion_count_somewhat_satisfied"] = "";
	$fieldLabelsEoc_royal_customers["Japanese"]["questquestion_count_usually"] = "Questquestion Count Usually";
	$fieldToolTipsEoc_royal_customers["Japanese"]["questquestion_count_usually"] = "";
	$placeHoldersEoc_royal_customers["Japanese"]["questquestion_count_usually"] = "";
	$fieldLabelsEoc_royal_customers["Japanese"]["questquestion_count_somewhat_dissatisfied"] = "Questquestion Count Somewhat Dissatisfied";
	$fieldToolTipsEoc_royal_customers["Japanese"]["questquestion_count_somewhat_dissatisfied"] = "";
	$placeHoldersEoc_royal_customers["Japanese"]["questquestion_count_somewhat_dissatisfied"] = "";
	$fieldLabelsEoc_royal_customers["Japanese"]["questquestion_count_complain"] = "Questquestion Count Complain";
	$fieldToolTipsEoc_royal_customers["Japanese"]["questquestion_count_complain"] = "";
	$placeHoldersEoc_royal_customers["Japanese"]["questquestion_count_complain"] = "";
	$fieldLabelsEoc_royal_customers["Japanese"]["rate_selling_count_EC"] = "[売先割合]EC";
	$fieldToolTipsEoc_royal_customers["Japanese"]["rate_selling_count_EC"] = "";
	$placeHoldersEoc_royal_customers["Japanese"]["rate_selling_count_EC"] = "";
	$fieldLabelsEoc_royal_customers["Japanese"]["rate_selling_count_ichiba"] = "[売先割合]市場";
	$fieldToolTipsEoc_royal_customers["Japanese"]["rate_selling_count_ichiba"] = "";
	$placeHoldersEoc_royal_customers["Japanese"]["rate_selling_count_ichiba"] = "";
	$fieldLabelsEoc_royal_customers["Japanese"]["rate_type_count_K"] = "[種別割合]K";
	$fieldToolTipsEoc_royal_customers["Japanese"]["rate_type_count_K"] = "";
	$placeHoldersEoc_royal_customers["Japanese"]["rate_type_count_K"] = "";
	$fieldLabelsEoc_royal_customers["Japanese"]["rate_type_count_D"] = "[種別割合]D";
	$fieldToolTipsEoc_royal_customers["Japanese"]["rate_type_count_D"] = "";
	$placeHoldersEoc_royal_customers["Japanese"]["rate_type_count_D"] = "";
	$fieldLabelsEoc_royal_customers["Japanese"]["rate_type_count_J"] = "[種別割合]J";
	$fieldToolTipsEoc_royal_customers["Japanese"]["rate_type_count_J"] = "";
	$placeHoldersEoc_royal_customers["Japanese"]["rate_type_count_J"] = "";
	$fieldLabelsEoc_royal_customers["Japanese"]["rate_type_count_W"] = "[種別割合]W";
	$fieldToolTipsEoc_royal_customers["Japanese"]["rate_type_count_W"] = "";
	$placeHoldersEoc_royal_customers["Japanese"]["rate_type_count_W"] = "";
	$fieldLabelsEoc_royal_customers["Japanese"]["rate_type_count_B"] = "[種別割合]B";
	$fieldToolTipsEoc_royal_customers["Japanese"]["rate_type_count_B"] = "";
	$placeHoldersEoc_royal_customers["Japanese"]["rate_type_count_B"] = "";
	$fieldLabelsEoc_royal_customers["Japanese"]["rate_type_count_H"] = "[種別割合]H";
	$fieldToolTipsEoc_royal_customers["Japanese"]["rate_type_count_H"] = "";
	$placeHoldersEoc_royal_customers["Japanese"]["rate_type_count_H"] = "";
	$fieldLabelsEoc_royal_customers["Japanese"]["rate_type_count_other"] = "[種別割合]他";
	$fieldToolTipsEoc_royal_customers["Japanese"]["rate_type_count_other"] = "";
	$placeHoldersEoc_royal_customers["Japanese"]["rate_type_count_other"] = "";
	$fieldLabelsEoc_royal_customers["Japanese"]["royal_customer_type"] = "ロイヤルタイプ";
	$fieldToolTipsEoc_royal_customers["Japanese"]["royal_customer_type"] = "";
	$placeHoldersEoc_royal_customers["Japanese"]["royal_customer_type"] = "";
	$fieldLabelsEoc_royal_customers["Japanese"]["link"] = "Link";
	$fieldToolTipsEoc_royal_customers["Japanese"]["link"] = "";
	$placeHoldersEoc_royal_customers["Japanese"]["link"] = "";
	$fieldLabelsEoc_royal_customers["Japanese"]["mail_check_type"] = "メルマガ可否";
	$fieldToolTipsEoc_royal_customers["Japanese"]["mail_check_type"] = "";
	$placeHoldersEoc_royal_customers["Japanese"]["mail_check_type"] = "";
	if (count($fieldToolTipsEoc_royal_customers["Japanese"]))
		$tdataEoc_royal_customers[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsEoc_royal_customers[""] = array();
	$fieldToolTipsEoc_royal_customers[""] = array();
	$placeHoldersEoc_royal_customers[""] = array();
	$pageTitlesEoc_royal_customers[""] = array();
	$fieldLabelsEoc_royal_customers[""]["royal_customer_status"] = "Royal Customer Status";
	$fieldToolTipsEoc_royal_customers[""]["royal_customer_status"] = "";
	$placeHoldersEoc_royal_customers[""]["royal_customer_status"] = "";
	$fieldLabelsEoc_royal_customers[""]["gender"] = "Gender";
	$fieldToolTipsEoc_royal_customers[""]["gender"] = "";
	$placeHoldersEoc_royal_customers[""]["gender"] = "";
	$fieldLabelsEoc_royal_customers[""]["todou"] = "Todou";
	$fieldToolTipsEoc_royal_customers[""]["todou"] = "";
	$placeHoldersEoc_royal_customers[""]["todou"] = "";
	$fieldLabelsEoc_royal_customers[""]["family"] = "Family";
	$fieldToolTipsEoc_royal_customers[""]["family"] = "";
	$placeHoldersEoc_royal_customers[""]["family"] = "";
	$fieldLabelsEoc_royal_customers[""]["income"] = "Income";
	$fieldToolTipsEoc_royal_customers[""]["income"] = "";
	$placeHoldersEoc_royal_customers[""]["income"] = "";
	$fieldLabelsEoc_royal_customers[""]["cumulative_earnings"] = "Cumulative Earnings";
	$fieldToolTipsEoc_royal_customers[""]["cumulative_earnings"] = "";
	$placeHoldersEoc_royal_customers[""]["cumulative_earnings"] = "";
	$fieldLabelsEoc_royal_customers[""]["number_of_times"] = "Number Of Times";
	$fieldToolTipsEoc_royal_customers[""]["number_of_times"] = "";
	$placeHoldersEoc_royal_customers[""]["number_of_times"] = "";
	$fieldLabelsEoc_royal_customers[""]["close_rate"] = "Close Rate";
	$fieldToolTipsEoc_royal_customers[""]["close_rate"] = "";
	$placeHoldersEoc_royal_customers[""]["close_rate"] = "";
	$fieldLabelsEoc_royal_customers[""]["LTV_prediction"] = "LTV Prediction";
	$fieldToolTipsEoc_royal_customers[""]["LTV_prediction"] = "";
	$placeHoldersEoc_royal_customers[""]["LTV_prediction"] = "";
	$fieldLabelsEoc_royal_customers[""]["usage_period"] = "Usage Period";
	$fieldToolTipsEoc_royal_customers[""]["usage_period"] = "";
	$placeHoldersEoc_royal_customers[""]["usage_period"] = "";
	$fieldLabelsEoc_royal_customers[""]["last_closing_date"] = "Last Closing Date";
	$fieldToolTipsEoc_royal_customers[""]["last_closing_date"] = "";
	$placeHoldersEoc_royal_customers[""]["last_closing_date"] = "";
	$fieldLabelsEoc_royal_customers[""]["type_trend"] = "Type Trend";
	$fieldToolTipsEoc_royal_customers[""]["type_trend"] = "";
	$placeHoldersEoc_royal_customers[""]["type_trend"] = "";
	$fieldLabelsEoc_royal_customers[""]["handling_number_of_brands"] = "Handling Number Of Brands";
	$fieldToolTipsEoc_royal_customers[""]["handling_number_of_brands"] = "";
	$placeHoldersEoc_royal_customers[""]["handling_number_of_brands"] = "";
	$fieldLabelsEoc_royal_customers[""]["trend_destination_of_selling"] = "Trend Destination Of Selling";
	$fieldToolTipsEoc_royal_customers[""]["trend_destination_of_selling"] = "";
	$placeHoldersEoc_royal_customers[""]["trend_destination_of_selling"] = "";
	$fieldLabelsEoc_royal_customers[""]["questionnaire_quality"] = "Questionnaire Quality";
	$fieldToolTipsEoc_royal_customers[""]["questionnaire_quality"] = "";
	$placeHoldersEoc_royal_customers[""]["questionnaire_quality"] = "";
	$fieldLabelsEoc_royal_customers[""]["updated_by"] = "Updated By";
	$fieldToolTipsEoc_royal_customers[""]["updated_by"] = "";
	$placeHoldersEoc_royal_customers[""]["updated_by"] = "";
	$fieldLabelsEoc_royal_customers[""]["created_at"] = "Created At";
	$fieldToolTipsEoc_royal_customers[""]["created_at"] = "";
	$placeHoldersEoc_royal_customers[""]["created_at"] = "";
	$fieldLabelsEoc_royal_customers[""]["created_by"] = "Created By";
	$fieldToolTipsEoc_royal_customers[""]["created_by"] = "";
	$placeHoldersEoc_royal_customers[""]["created_by"] = "";
	$fieldLabelsEoc_royal_customers[""]["selling_count_ec"] = "Selling Count Ec";
	$fieldToolTipsEoc_royal_customers[""]["selling_count_ec"] = "";
	$placeHoldersEoc_royal_customers[""]["selling_count_ec"] = "";
	$fieldLabelsEoc_royal_customers[""]["selling_count_ichiba"] = "Selling Count Ichiba";
	$fieldToolTipsEoc_royal_customers[""]["selling_count_ichiba"] = "";
	$placeHoldersEoc_royal_customers[""]["selling_count_ichiba"] = "";
	$fieldLabelsEoc_royal_customers[""]["type_count_K"] = "Type Count K";
	$fieldToolTipsEoc_royal_customers[""]["type_count_K"] = "";
	$placeHoldersEoc_royal_customers[""]["type_count_K"] = "";
	$fieldLabelsEoc_royal_customers[""]["type_count_D"] = "Type Count D";
	$fieldToolTipsEoc_royal_customers[""]["type_count_D"] = "";
	$placeHoldersEoc_royal_customers[""]["type_count_D"] = "";
	$fieldLabelsEoc_royal_customers[""]["type_count_J"] = "Type Count J";
	$fieldToolTipsEoc_royal_customers[""]["type_count_J"] = "";
	$placeHoldersEoc_royal_customers[""]["type_count_J"] = "";
	$fieldLabelsEoc_royal_customers[""]["type_count_W"] = "Type Count W";
	$fieldToolTipsEoc_royal_customers[""]["type_count_W"] = "";
	$placeHoldersEoc_royal_customers[""]["type_count_W"] = "";
	$fieldLabelsEoc_royal_customers[""]["type_count_B"] = "Type Count B";
	$fieldToolTipsEoc_royal_customers[""]["type_count_B"] = "";
	$placeHoldersEoc_royal_customers[""]["type_count_B"] = "";
	$fieldLabelsEoc_royal_customers[""]["type_count_H"] = "Type Count H";
	$fieldToolTipsEoc_royal_customers[""]["type_count_H"] = "";
	$placeHoldersEoc_royal_customers[""]["type_count_H"] = "";
	$fieldLabelsEoc_royal_customers[""]["type_count_other"] = "Type Count Other";
	$fieldToolTipsEoc_royal_customers[""]["type_count_other"] = "";
	$placeHoldersEoc_royal_customers[""]["type_count_other"] = "";
	$fieldLabelsEoc_royal_customers[""]["selling_price_ec"] = "Selling Price Ec";
	$fieldToolTipsEoc_royal_customers[""]["selling_price_ec"] = "";
	$placeHoldersEoc_royal_customers[""]["selling_price_ec"] = "";
	$fieldLabelsEoc_royal_customers[""]["selling_arari_ec"] = "Selling Arari Ec";
	$fieldToolTipsEoc_royal_customers[""]["selling_arari_ec"] = "";
	$placeHoldersEoc_royal_customers[""]["selling_arari_ec"] = "";
	$fieldLabelsEoc_royal_customers[""]["selling_price_ichiba"] = "Selling Price Ichiba";
	$fieldToolTipsEoc_royal_customers[""]["selling_price_ichiba"] = "";
	$placeHoldersEoc_royal_customers[""]["selling_price_ichiba"] = "";
	$fieldLabelsEoc_royal_customers[""]["selling_arari_ichiba"] = "Selling Arari Ichiba";
	$fieldToolTipsEoc_royal_customers[""]["selling_arari_ichiba"] = "";
	$placeHoldersEoc_royal_customers[""]["selling_arari_ichiba"] = "";
	$fieldLabelsEoc_royal_customers[""]["type_price_K"] = "Type Price K";
	$fieldToolTipsEoc_royal_customers[""]["type_price_K"] = "";
	$placeHoldersEoc_royal_customers[""]["type_price_K"] = "";
	$fieldLabelsEoc_royal_customers[""]["type_arari_K"] = "Type Arari K";
	$fieldToolTipsEoc_royal_customers[""]["type_arari_K"] = "";
	$placeHoldersEoc_royal_customers[""]["type_arari_K"] = "";
	$fieldLabelsEoc_royal_customers[""]["type_price_D"] = "Type Price D";
	$fieldToolTipsEoc_royal_customers[""]["type_price_D"] = "";
	$placeHoldersEoc_royal_customers[""]["type_price_D"] = "";
	$fieldLabelsEoc_royal_customers[""]["type_arari_D"] = "Type Arari D";
	$fieldToolTipsEoc_royal_customers[""]["type_arari_D"] = "";
	$placeHoldersEoc_royal_customers[""]["type_arari_D"] = "";
	$fieldLabelsEoc_royal_customers[""]["type_price_J"] = "Type Price J";
	$fieldToolTipsEoc_royal_customers[""]["type_price_J"] = "";
	$placeHoldersEoc_royal_customers[""]["type_price_J"] = "";
	$fieldLabelsEoc_royal_customers[""]["type_arari_J"] = "Type Arari J";
	$fieldToolTipsEoc_royal_customers[""]["type_arari_J"] = "";
	$placeHoldersEoc_royal_customers[""]["type_arari_J"] = "";
	$fieldLabelsEoc_royal_customers[""]["type_price_W"] = "Type Price W";
	$fieldToolTipsEoc_royal_customers[""]["type_price_W"] = "";
	$placeHoldersEoc_royal_customers[""]["type_price_W"] = "";
	$fieldLabelsEoc_royal_customers[""]["type_arari_W"] = "Type Arari W";
	$fieldToolTipsEoc_royal_customers[""]["type_arari_W"] = "";
	$placeHoldersEoc_royal_customers[""]["type_arari_W"] = "";
	$fieldLabelsEoc_royal_customers[""]["type_price_B"] = "Type Price B";
	$fieldToolTipsEoc_royal_customers[""]["type_price_B"] = "";
	$placeHoldersEoc_royal_customers[""]["type_price_B"] = "";
	$fieldLabelsEoc_royal_customers[""]["type_arari_B"] = "Type Arari B";
	$fieldToolTipsEoc_royal_customers[""]["type_arari_B"] = "";
	$placeHoldersEoc_royal_customers[""]["type_arari_B"] = "";
	$fieldLabelsEoc_royal_customers[""]["type_price_H"] = "Type Price H";
	$fieldToolTipsEoc_royal_customers[""]["type_price_H"] = "";
	$placeHoldersEoc_royal_customers[""]["type_price_H"] = "";
	$fieldLabelsEoc_royal_customers[""]["type_arari_H"] = "Type Arari H";
	$fieldToolTipsEoc_royal_customers[""]["type_arari_H"] = "";
	$placeHoldersEoc_royal_customers[""]["type_arari_H"] = "";
	$fieldLabelsEoc_royal_customers[""]["type_price_other"] = "Type Price Other";
	$fieldToolTipsEoc_royal_customers[""]["type_price_other"] = "";
	$placeHoldersEoc_royal_customers[""]["type_price_other"] = "";
	$fieldLabelsEoc_royal_customers[""]["type_arari_other"] = "Type Arari Other";
	$fieldToolTipsEoc_royal_customers[""]["type_arari_other"] = "";
	$placeHoldersEoc_royal_customers[""]["type_arari_other"] = "";
	$fieldLabelsEoc_royal_customers[""]["questquestion_count_very_satisfied"] = "Questquestion Count Very Satisfied";
	$fieldToolTipsEoc_royal_customers[""]["questquestion_count_very_satisfied"] = "";
	$placeHoldersEoc_royal_customers[""]["questquestion_count_very_satisfied"] = "";
	$fieldLabelsEoc_royal_customers[""]["questquestion_count_somewhat_satisfied"] = "Questquestion Count Somewhat Satisfied";
	$fieldToolTipsEoc_royal_customers[""]["questquestion_count_somewhat_satisfied"] = "";
	$placeHoldersEoc_royal_customers[""]["questquestion_count_somewhat_satisfied"] = "";
	$fieldLabelsEoc_royal_customers[""]["questquestion_count_usually"] = "Questquestion Count Usually";
	$fieldToolTipsEoc_royal_customers[""]["questquestion_count_usually"] = "";
	$placeHoldersEoc_royal_customers[""]["questquestion_count_usually"] = "";
	$fieldLabelsEoc_royal_customers[""]["questquestion_count_somewhat_dissatisfied"] = "Questquestion Count Somewhat Dissatisfied";
	$fieldToolTipsEoc_royal_customers[""]["questquestion_count_somewhat_dissatisfied"] = "";
	$placeHoldersEoc_royal_customers[""]["questquestion_count_somewhat_dissatisfied"] = "";
	$fieldLabelsEoc_royal_customers[""]["questquestion_count_complain"] = "Questquestion Count Complain";
	$fieldToolTipsEoc_royal_customers[""]["questquestion_count_complain"] = "";
	$placeHoldersEoc_royal_customers[""]["questquestion_count_complain"] = "";
	$fieldLabelsEoc_royal_customers[""]["rate_selling_count_EC"] = "Rate Selling Count EC";
	$fieldToolTipsEoc_royal_customers[""]["rate_selling_count_EC"] = "";
	$placeHoldersEoc_royal_customers[""]["rate_selling_count_EC"] = "";
	$fieldLabelsEoc_royal_customers[""]["rate_selling_count_ichiba"] = "Rate Selling Count Ichiba";
	$fieldToolTipsEoc_royal_customers[""]["rate_selling_count_ichiba"] = "";
	$placeHoldersEoc_royal_customers[""]["rate_selling_count_ichiba"] = "";
	$fieldLabelsEoc_royal_customers[""]["rate_type_count_K"] = "Rate Type Count K";
	$fieldToolTipsEoc_royal_customers[""]["rate_type_count_K"] = "";
	$placeHoldersEoc_royal_customers[""]["rate_type_count_K"] = "";
	$fieldLabelsEoc_royal_customers[""]["rate_type_count_D"] = "Rate Type Count D";
	$fieldToolTipsEoc_royal_customers[""]["rate_type_count_D"] = "";
	$placeHoldersEoc_royal_customers[""]["rate_type_count_D"] = "";
	$fieldLabelsEoc_royal_customers[""]["rate_type_count_J"] = "Rate Type Count J";
	$fieldToolTipsEoc_royal_customers[""]["rate_type_count_J"] = "";
	$placeHoldersEoc_royal_customers[""]["rate_type_count_J"] = "";
	$fieldLabelsEoc_royal_customers[""]["rate_type_count_W"] = "Rate Type Count W";
	$fieldToolTipsEoc_royal_customers[""]["rate_type_count_W"] = "";
	$placeHoldersEoc_royal_customers[""]["rate_type_count_W"] = "";
	$fieldLabelsEoc_royal_customers[""]["rate_type_count_B"] = "Rate Type Count B";
	$fieldToolTipsEoc_royal_customers[""]["rate_type_count_B"] = "";
	$placeHoldersEoc_royal_customers[""]["rate_type_count_B"] = "";
	$fieldLabelsEoc_royal_customers[""]["rate_type_count_H"] = "Rate Type Count H";
	$fieldToolTipsEoc_royal_customers[""]["rate_type_count_H"] = "";
	$placeHoldersEoc_royal_customers[""]["rate_type_count_H"] = "";
	$fieldLabelsEoc_royal_customers[""]["rate_type_count_other"] = "Rate Type Count Other";
	$fieldToolTipsEoc_royal_customers[""]["rate_type_count_other"] = "";
	$placeHoldersEoc_royal_customers[""]["rate_type_count_other"] = "";
	$fieldLabelsEoc_royal_customers[""]["royal_customer_type"] = "Royal Customer Type";
	$fieldToolTipsEoc_royal_customers[""]["royal_customer_type"] = "";
	$placeHoldersEoc_royal_customers[""]["royal_customer_type"] = "";
	$fieldLabelsEoc_royal_customers[""]["link"] = "Link";
	$fieldToolTipsEoc_royal_customers[""]["link"] = "";
	$placeHoldersEoc_royal_customers[""]["link"] = "";
	$fieldLabelsEoc_royal_customers[""]["mail_check_type"] = "Mail Check Type";
	$fieldToolTipsEoc_royal_customers[""]["mail_check_type"] = "";
	$placeHoldersEoc_royal_customers[""]["mail_check_type"] = "";
	if (count($fieldToolTipsEoc_royal_customers[""]))
		$tdataEoc_royal_customers[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsEoc_royal_customers["English"] = array();
	$fieldToolTipsEoc_royal_customers["English"] = array();
	$placeHoldersEoc_royal_customers["English"] = array();
	$pageTitlesEoc_royal_customers["English"] = array();
	$fieldLabelsEoc_royal_customers["English"]["royal_customer_status"] = "Royal Customer Status";
	$fieldToolTipsEoc_royal_customers["English"]["royal_customer_status"] = "";
	$placeHoldersEoc_royal_customers["English"]["royal_customer_status"] = "";
	$fieldLabelsEoc_royal_customers["English"]["gender"] = "Gender";
	$fieldToolTipsEoc_royal_customers["English"]["gender"] = "";
	$placeHoldersEoc_royal_customers["English"]["gender"] = "";
	$fieldLabelsEoc_royal_customers["English"]["todou"] = "Todou";
	$fieldToolTipsEoc_royal_customers["English"]["todou"] = "";
	$placeHoldersEoc_royal_customers["English"]["todou"] = "";
	$fieldLabelsEoc_royal_customers["English"]["family"] = "Family";
	$fieldToolTipsEoc_royal_customers["English"]["family"] = "";
	$placeHoldersEoc_royal_customers["English"]["family"] = "";
	$fieldLabelsEoc_royal_customers["English"]["income"] = "Income";
	$fieldToolTipsEoc_royal_customers["English"]["income"] = "";
	$placeHoldersEoc_royal_customers["English"]["income"] = "";
	$fieldLabelsEoc_royal_customers["English"]["cumulative_earnings"] = "Cumulative Earnings";
	$fieldToolTipsEoc_royal_customers["English"]["cumulative_earnings"] = "";
	$placeHoldersEoc_royal_customers["English"]["cumulative_earnings"] = "";
	$fieldLabelsEoc_royal_customers["English"]["number_of_times"] = "Number Of Times";
	$fieldToolTipsEoc_royal_customers["English"]["number_of_times"] = "";
	$placeHoldersEoc_royal_customers["English"]["number_of_times"] = "";
	$fieldLabelsEoc_royal_customers["English"]["close_rate"] = "Close Rate";
	$fieldToolTipsEoc_royal_customers["English"]["close_rate"] = "";
	$placeHoldersEoc_royal_customers["English"]["close_rate"] = "";
	$fieldLabelsEoc_royal_customers["English"]["LTV_prediction"] = "LTV Prediction";
	$fieldToolTipsEoc_royal_customers["English"]["LTV_prediction"] = "";
	$placeHoldersEoc_royal_customers["English"]["LTV_prediction"] = "";
	$fieldLabelsEoc_royal_customers["English"]["usage_period"] = "Usage Period";
	$fieldToolTipsEoc_royal_customers["English"]["usage_period"] = "";
	$placeHoldersEoc_royal_customers["English"]["usage_period"] = "";
	$fieldLabelsEoc_royal_customers["English"]["last_closing_date"] = "Last Closing Date";
	$fieldToolTipsEoc_royal_customers["English"]["last_closing_date"] = "";
	$placeHoldersEoc_royal_customers["English"]["last_closing_date"] = "";
	$fieldLabelsEoc_royal_customers["English"]["type_trend"] = "Type Trend";
	$fieldToolTipsEoc_royal_customers["English"]["type_trend"] = "";
	$placeHoldersEoc_royal_customers["English"]["type_trend"] = "";
	$fieldLabelsEoc_royal_customers["English"]["handling_number_of_brands"] = "Handling Number Of Brands";
	$fieldToolTipsEoc_royal_customers["English"]["handling_number_of_brands"] = "";
	$placeHoldersEoc_royal_customers["English"]["handling_number_of_brands"] = "";
	$fieldLabelsEoc_royal_customers["English"]["trend_destination_of_selling"] = "Trend Destination Of Selling";
	$fieldToolTipsEoc_royal_customers["English"]["trend_destination_of_selling"] = "";
	$placeHoldersEoc_royal_customers["English"]["trend_destination_of_selling"] = "";
	$fieldLabelsEoc_royal_customers["English"]["questionnaire_quality"] = "Questionnaire Quality";
	$fieldToolTipsEoc_royal_customers["English"]["questionnaire_quality"] = "";
	$placeHoldersEoc_royal_customers["English"]["questionnaire_quality"] = "";
	$fieldLabelsEoc_royal_customers["English"]["updated_by"] = "Updated By";
	$fieldToolTipsEoc_royal_customers["English"]["updated_by"] = "";
	$placeHoldersEoc_royal_customers["English"]["updated_by"] = "";
	$fieldLabelsEoc_royal_customers["English"]["created_at"] = "Created At";
	$fieldToolTipsEoc_royal_customers["English"]["created_at"] = "";
	$placeHoldersEoc_royal_customers["English"]["created_at"] = "";
	$fieldLabelsEoc_royal_customers["English"]["created_by"] = "Created By";
	$fieldToolTipsEoc_royal_customers["English"]["created_by"] = "";
	$placeHoldersEoc_royal_customers["English"]["created_by"] = "";
	$fieldLabelsEoc_royal_customers["English"]["selling_count_ec"] = "Selling Count Ec";
	$fieldToolTipsEoc_royal_customers["English"]["selling_count_ec"] = "";
	$placeHoldersEoc_royal_customers["English"]["selling_count_ec"] = "";
	$fieldLabelsEoc_royal_customers["English"]["selling_count_ichiba"] = "Selling Count Ichiba";
	$fieldToolTipsEoc_royal_customers["English"]["selling_count_ichiba"] = "";
	$placeHoldersEoc_royal_customers["English"]["selling_count_ichiba"] = "";
	$fieldLabelsEoc_royal_customers["English"]["type_count_K"] = "Type Count K";
	$fieldToolTipsEoc_royal_customers["English"]["type_count_K"] = "";
	$placeHoldersEoc_royal_customers["English"]["type_count_K"] = "";
	$fieldLabelsEoc_royal_customers["English"]["type_count_D"] = "Type Count D";
	$fieldToolTipsEoc_royal_customers["English"]["type_count_D"] = "";
	$placeHoldersEoc_royal_customers["English"]["type_count_D"] = "";
	$fieldLabelsEoc_royal_customers["English"]["type_count_J"] = "Type Count J";
	$fieldToolTipsEoc_royal_customers["English"]["type_count_J"] = "";
	$placeHoldersEoc_royal_customers["English"]["type_count_J"] = "";
	$fieldLabelsEoc_royal_customers["English"]["type_count_W"] = "Type Count W";
	$fieldToolTipsEoc_royal_customers["English"]["type_count_W"] = "";
	$placeHoldersEoc_royal_customers["English"]["type_count_W"] = "";
	$fieldLabelsEoc_royal_customers["English"]["type_count_B"] = "Type Count B";
	$fieldToolTipsEoc_royal_customers["English"]["type_count_B"] = "";
	$placeHoldersEoc_royal_customers["English"]["type_count_B"] = "";
	$fieldLabelsEoc_royal_customers["English"]["type_count_H"] = "Type Count H";
	$fieldToolTipsEoc_royal_customers["English"]["type_count_H"] = "";
	$placeHoldersEoc_royal_customers["English"]["type_count_H"] = "";
	$fieldLabelsEoc_royal_customers["English"]["type_count_other"] = "Type Count Other";
	$fieldToolTipsEoc_royal_customers["English"]["type_count_other"] = "";
	$placeHoldersEoc_royal_customers["English"]["type_count_other"] = "";
	$fieldLabelsEoc_royal_customers["English"]["selling_price_ec"] = "Selling Price Ec";
	$fieldToolTipsEoc_royal_customers["English"]["selling_price_ec"] = "";
	$placeHoldersEoc_royal_customers["English"]["selling_price_ec"] = "";
	$fieldLabelsEoc_royal_customers["English"]["selling_arari_ec"] = "Selling Arari Ec";
	$fieldToolTipsEoc_royal_customers["English"]["selling_arari_ec"] = "";
	$placeHoldersEoc_royal_customers["English"]["selling_arari_ec"] = "";
	$fieldLabelsEoc_royal_customers["English"]["selling_price_ichiba"] = "Selling Price Ichiba";
	$fieldToolTipsEoc_royal_customers["English"]["selling_price_ichiba"] = "";
	$placeHoldersEoc_royal_customers["English"]["selling_price_ichiba"] = "";
	$fieldLabelsEoc_royal_customers["English"]["selling_arari_ichiba"] = "Selling Arari Ichiba";
	$fieldToolTipsEoc_royal_customers["English"]["selling_arari_ichiba"] = "";
	$placeHoldersEoc_royal_customers["English"]["selling_arari_ichiba"] = "";
	$fieldLabelsEoc_royal_customers["English"]["type_price_K"] = "Type Price K";
	$fieldToolTipsEoc_royal_customers["English"]["type_price_K"] = "";
	$placeHoldersEoc_royal_customers["English"]["type_price_K"] = "";
	$fieldLabelsEoc_royal_customers["English"]["type_arari_K"] = "Type Arari K";
	$fieldToolTipsEoc_royal_customers["English"]["type_arari_K"] = "";
	$placeHoldersEoc_royal_customers["English"]["type_arari_K"] = "";
	$fieldLabelsEoc_royal_customers["English"]["type_price_D"] = "Type Price D";
	$fieldToolTipsEoc_royal_customers["English"]["type_price_D"] = "";
	$placeHoldersEoc_royal_customers["English"]["type_price_D"] = "";
	$fieldLabelsEoc_royal_customers["English"]["type_arari_D"] = "Type Arari D";
	$fieldToolTipsEoc_royal_customers["English"]["type_arari_D"] = "";
	$placeHoldersEoc_royal_customers["English"]["type_arari_D"] = "";
	$fieldLabelsEoc_royal_customers["English"]["type_price_J"] = "Type Price J";
	$fieldToolTipsEoc_royal_customers["English"]["type_price_J"] = "";
	$placeHoldersEoc_royal_customers["English"]["type_price_J"] = "";
	$fieldLabelsEoc_royal_customers["English"]["type_arari_J"] = "Type Arari J";
	$fieldToolTipsEoc_royal_customers["English"]["type_arari_J"] = "";
	$placeHoldersEoc_royal_customers["English"]["type_arari_J"] = "";
	$fieldLabelsEoc_royal_customers["English"]["type_price_W"] = "Type Price W";
	$fieldToolTipsEoc_royal_customers["English"]["type_price_W"] = "";
	$placeHoldersEoc_royal_customers["English"]["type_price_W"] = "";
	$fieldLabelsEoc_royal_customers["English"]["type_arari_W"] = "Type Arari W";
	$fieldToolTipsEoc_royal_customers["English"]["type_arari_W"] = "";
	$placeHoldersEoc_royal_customers["English"]["type_arari_W"] = "";
	$fieldLabelsEoc_royal_customers["English"]["type_price_B"] = "Type Price B";
	$fieldToolTipsEoc_royal_customers["English"]["type_price_B"] = "";
	$placeHoldersEoc_royal_customers["English"]["type_price_B"] = "";
	$fieldLabelsEoc_royal_customers["English"]["type_arari_B"] = "Type Arari B";
	$fieldToolTipsEoc_royal_customers["English"]["type_arari_B"] = "";
	$placeHoldersEoc_royal_customers["English"]["type_arari_B"] = "";
	$fieldLabelsEoc_royal_customers["English"]["type_price_H"] = "Type Price H";
	$fieldToolTipsEoc_royal_customers["English"]["type_price_H"] = "";
	$placeHoldersEoc_royal_customers["English"]["type_price_H"] = "";
	$fieldLabelsEoc_royal_customers["English"]["type_arari_H"] = "Type Arari H";
	$fieldToolTipsEoc_royal_customers["English"]["type_arari_H"] = "";
	$placeHoldersEoc_royal_customers["English"]["type_arari_H"] = "";
	$fieldLabelsEoc_royal_customers["English"]["type_price_other"] = "Type Price Other";
	$fieldToolTipsEoc_royal_customers["English"]["type_price_other"] = "";
	$placeHoldersEoc_royal_customers["English"]["type_price_other"] = "";
	$fieldLabelsEoc_royal_customers["English"]["type_arari_other"] = "Type Arari Other";
	$fieldToolTipsEoc_royal_customers["English"]["type_arari_other"] = "";
	$placeHoldersEoc_royal_customers["English"]["type_arari_other"] = "";
	$fieldLabelsEoc_royal_customers["English"]["questquestion_count_very_satisfied"] = "Questquestion Count Very Satisfied";
	$fieldToolTipsEoc_royal_customers["English"]["questquestion_count_very_satisfied"] = "";
	$placeHoldersEoc_royal_customers["English"]["questquestion_count_very_satisfied"] = "";
	$fieldLabelsEoc_royal_customers["English"]["questquestion_count_somewhat_satisfied"] = "Questquestion Count Somewhat Satisfied";
	$fieldToolTipsEoc_royal_customers["English"]["questquestion_count_somewhat_satisfied"] = "";
	$placeHoldersEoc_royal_customers["English"]["questquestion_count_somewhat_satisfied"] = "";
	$fieldLabelsEoc_royal_customers["English"]["questquestion_count_usually"] = "Questquestion Count Usually";
	$fieldToolTipsEoc_royal_customers["English"]["questquestion_count_usually"] = "";
	$placeHoldersEoc_royal_customers["English"]["questquestion_count_usually"] = "";
	$fieldLabelsEoc_royal_customers["English"]["questquestion_count_somewhat_dissatisfied"] = "Questquestion Count Somewhat Dissatisfied";
	$fieldToolTipsEoc_royal_customers["English"]["questquestion_count_somewhat_dissatisfied"] = "";
	$placeHoldersEoc_royal_customers["English"]["questquestion_count_somewhat_dissatisfied"] = "";
	$fieldLabelsEoc_royal_customers["English"]["questquestion_count_complain"] = "Questquestion Count Complain";
	$fieldToolTipsEoc_royal_customers["English"]["questquestion_count_complain"] = "";
	$placeHoldersEoc_royal_customers["English"]["questquestion_count_complain"] = "";
	$fieldLabelsEoc_royal_customers["English"]["rate_selling_count_EC"] = "Rate Selling Count EC";
	$fieldToolTipsEoc_royal_customers["English"]["rate_selling_count_EC"] = "";
	$placeHoldersEoc_royal_customers["English"]["rate_selling_count_EC"] = "";
	$fieldLabelsEoc_royal_customers["English"]["rate_selling_count_ichiba"] = "Rate Selling Count Ichiba";
	$fieldToolTipsEoc_royal_customers["English"]["rate_selling_count_ichiba"] = "";
	$placeHoldersEoc_royal_customers["English"]["rate_selling_count_ichiba"] = "";
	$fieldLabelsEoc_royal_customers["English"]["rate_type_count_K"] = "Rate Type Count K";
	$fieldToolTipsEoc_royal_customers["English"]["rate_type_count_K"] = "";
	$placeHoldersEoc_royal_customers["English"]["rate_type_count_K"] = "";
	$fieldLabelsEoc_royal_customers["English"]["rate_type_count_D"] = "Rate Type Count D";
	$fieldToolTipsEoc_royal_customers["English"]["rate_type_count_D"] = "";
	$placeHoldersEoc_royal_customers["English"]["rate_type_count_D"] = "";
	$fieldLabelsEoc_royal_customers["English"]["rate_type_count_J"] = "Rate Type Count J";
	$fieldToolTipsEoc_royal_customers["English"]["rate_type_count_J"] = "";
	$placeHoldersEoc_royal_customers["English"]["rate_type_count_J"] = "";
	$fieldLabelsEoc_royal_customers["English"]["rate_type_count_W"] = "Rate Type Count W";
	$fieldToolTipsEoc_royal_customers["English"]["rate_type_count_W"] = "";
	$placeHoldersEoc_royal_customers["English"]["rate_type_count_W"] = "";
	$fieldLabelsEoc_royal_customers["English"]["rate_type_count_B"] = "Rate Type Count B";
	$fieldToolTipsEoc_royal_customers["English"]["rate_type_count_B"] = "";
	$placeHoldersEoc_royal_customers["English"]["rate_type_count_B"] = "";
	$fieldLabelsEoc_royal_customers["English"]["rate_type_count_H"] = "Rate Type Count H";
	$fieldToolTipsEoc_royal_customers["English"]["rate_type_count_H"] = "";
	$placeHoldersEoc_royal_customers["English"]["rate_type_count_H"] = "";
	$fieldLabelsEoc_royal_customers["English"]["rate_type_count_other"] = "Rate Type Count Other";
	$fieldToolTipsEoc_royal_customers["English"]["rate_type_count_other"] = "";
	$placeHoldersEoc_royal_customers["English"]["rate_type_count_other"] = "";
	$fieldLabelsEoc_royal_customers["English"]["royal_customer_type"] = "Royal Customer Type";
	$fieldToolTipsEoc_royal_customers["English"]["royal_customer_type"] = "";
	$placeHoldersEoc_royal_customers["English"]["royal_customer_type"] = "";
	$fieldLabelsEoc_royal_customers["English"]["link"] = "Link";
	$fieldToolTipsEoc_royal_customers["English"]["link"] = "";
	$placeHoldersEoc_royal_customers["English"]["link"] = "";
	$fieldLabelsEoc_royal_customers["English"]["mail_check_type"] = "Mail Check Type";
	$fieldToolTipsEoc_royal_customers["English"]["mail_check_type"] = "";
	$placeHoldersEoc_royal_customers["English"]["mail_check_type"] = "";
	if (count($fieldToolTipsEoc_royal_customers["English"]))
		$tdataEoc_royal_customers[".isUseToolTips"] = true;
}


	$tdataEoc_royal_customers[".NCSearch"] = true;



$tdataEoc_royal_customers[".shortTableName"] = "Eoc_royal_customers";
$tdataEoc_royal_customers[".nSecOptions"] = 0;
$tdataEoc_royal_customers[".recsPerRowPrint"] = 1;
$tdataEoc_royal_customers[".mainTableOwnerID"] = "";
$tdataEoc_royal_customers[".moveNext"] = 1;
$tdataEoc_royal_customers[".entityType"] = 1;

$tdataEoc_royal_customers[".strOriginalTableName"] = "Eoc";

	



$tdataEoc_royal_customers[".showAddInPopup"] = false;

$tdataEoc_royal_customers[".showEditInPopup"] = false;

$tdataEoc_royal_customers[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataEoc_royal_customers[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataEoc_royal_customers[".fieldsForRegister"] = array();

$tdataEoc_royal_customers[".listAjax"] = false;

	$tdataEoc_royal_customers[".audit"] = true;

	$tdataEoc_royal_customers[".locking"] = false;



$tdataEoc_royal_customers[".list"] = true;

$tdataEoc_royal_customers[".inlineEdit"] = true;


$tdataEoc_royal_customers[".reorderRecordsByHeader"] = true;
$tdataEoc_royal_customers[".createSortByDropdown"] = true;
$tdataEoc_royal_customers[".strSortControlSettingsJSON"] = "";

$tdataEoc_royal_customers[".strClickActionJSON"] = "{\"fields\":{\"ALLSEIYAKU\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"EOC_COURIER_CHECK\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"EOC_NUMBER\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"EOC_REUSE\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"EOC_SIZE\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"EOC_SPECIFIED_TIME\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"EOC__BOX_NUMBER\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"EOC__DATE_AND_TIME_2\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"EOC__DELIVERY_DATES\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"FIRST_NAME2\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"FIRST_NAME_KANA\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"FLAG_SPEED\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"FLG_MAIL_OTHER\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"FLG_MAIL_SAGAWA\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"ICHIBUSEIYAKU\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"LAST_NAME2\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"LAST_NAME_KANA\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"SEARCH_MEDIA\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"SEARCH_SITE\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"UN_REACHABLE\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"_registerd_id\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"address1\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"address2\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"address3\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"address_code\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"age\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"awazu_date\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"b1\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"b2\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"b3\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"bank_account\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"bank_acoount_name\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"bank_blunch_code\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"bank_name\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"bank_yokin_shubetu\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"birth_day\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"chigin_kaitori\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"created_t\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"ecc_id\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"ecc_seq\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"eoc_search_keyword\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"fax\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"haisou_bangou\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"hentou_houhou\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"hentou_houhou_time\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"hituyou_shorui\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"insurance_amount_print\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"jis_code\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"kaitori_staff_id\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"kaitorihuka\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"liquidation_shop_code\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"m_tel\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"mail1\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"mail2\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"mail_check_type\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"mitumori_taku\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"mousikomi_id\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"name1\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"name2\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"option1\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"option10\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"option11\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"option12\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"option13\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"option2\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"option3\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"option4\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"option5\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"option6\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"option7\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"option8\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"option9\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"purchase_type\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"rakuda_csv_flag\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"registerd_id\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"remark\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"sagawa_shuuka_flag\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"sales_flag\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"seacanse\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"seiyaku_fuseiritu\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"seiyaku_price\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"seiyakukin\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"sex\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"sise_houhou\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"size_kosuu\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"sonota\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"src_type\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"tel\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"tel2\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"type\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"updated_at\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"wareki\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"zip\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"zip1\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"zip2\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}}},\"row\":{\"action\":\"noaction\",\"codeData\":{},\"gridData\":{\"action\":\"inlineedit\",\"table\":\"Eoc_chigins\"},\"openData\":{\"how\":\"goto\",\"page\":\"view\",\"table\":\"Eoc_chigins\",\"url\":\"\"}}}";



$tdataEoc_royal_customers[".import"] = true;

$tdataEoc_royal_customers[".exportTo"] = true;



$tdataEoc_royal_customers[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataEoc_royal_customers[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataEoc_royal_customers[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataEoc_royal_customers[".searchSaving"] = false;
//

$tdataEoc_royal_customers[".showSearchPanel"] = true;
		$tdataEoc_royal_customers[".flexibleSearch"] = true;

$tdataEoc_royal_customers[".isUseAjaxSuggest"] = true;

$tdataEoc_royal_customers[".rowHighlite"] = true;



																																																																																																																																																																																																																											
					
					
					
					
			

$tdataEoc_royal_customers[".ajaxCodeSnippetAdded"] = false;

$tdataEoc_royal_customers[".buttonsAdded"] = true;

$tdataEoc_royal_customers[".addPageEvents"] = true;

// use timepicker for search panel
$tdataEoc_royal_customers[".isUseTimeForSearch"] = false;



$tdataEoc_royal_customers[".badgeColor"] = "00C2C5";

$tdataEoc_royal_customers[".detailsLinksOnList"] = "1";

$tdataEoc_royal_customers[".allSearchFields"] = array();
$tdataEoc_royal_customers[".filterFields"] = array();
$tdataEoc_royal_customers[".requiredSearchFields"] = array();

$tdataEoc_royal_customers[".allSearchFields"][] = "link";
	$tdataEoc_royal_customers[".allSearchFields"][] = "royal_customer_type";
	$tdataEoc_royal_customers[".allSearchFields"][] = "royal_customer_status";
	$tdataEoc_royal_customers[".allSearchFields"][] = "ecc_id";
	$tdataEoc_royal_customers[".allSearchFields"][] = "name1";
	$tdataEoc_royal_customers[".allSearchFields"][] = "name2";
	$tdataEoc_royal_customers[".allSearchFields"][] = "gender";
	$tdataEoc_royal_customers[".allSearchFields"][] = "age";
	$tdataEoc_royal_customers[".allSearchFields"][] = "todou";
	$tdataEoc_royal_customers[".allSearchFields"][] = "cumulative_earnings";
	$tdataEoc_royal_customers[".allSearchFields"][] = "number_of_times";
	$tdataEoc_royal_customers[".allSearchFields"][] = "close_rate";
	$tdataEoc_royal_customers[".allSearchFields"][] = "usage_period";
	$tdataEoc_royal_customers[".allSearchFields"][] = "last_closing_date";
	$tdataEoc_royal_customers[".allSearchFields"][] = "handling_number_of_brands";
	$tdataEoc_royal_customers[".allSearchFields"][] = "rate_selling_count_EC";
	$tdataEoc_royal_customers[".allSearchFields"][] = "rate_selling_count_ichiba";
	$tdataEoc_royal_customers[".allSearchFields"][] = "rate_type_count_K";
	$tdataEoc_royal_customers[".allSearchFields"][] = "rate_type_count_D";
	$tdataEoc_royal_customers[".allSearchFields"][] = "rate_type_count_J";
	$tdataEoc_royal_customers[".allSearchFields"][] = "rate_type_count_W";
	$tdataEoc_royal_customers[".allSearchFields"][] = "rate_type_count_B";
	$tdataEoc_royal_customers[".allSearchFields"][] = "rate_type_count_H";
	$tdataEoc_royal_customers[".allSearchFields"][] = "rate_type_count_other";
	$tdataEoc_royal_customers[".allSearchFields"][] = "mail_check_type";
	$tdataEoc_royal_customers[".allSearchFields"][] = "mail1";
	$tdataEoc_royal_customers[".allSearchFields"][] = "mail2";
	$tdataEoc_royal_customers[".allSearchFields"][] = "tel";
	$tdataEoc_royal_customers[".allSearchFields"][] = "tel2";
	$tdataEoc_royal_customers[".allSearchFields"][] = "address1";
	$tdataEoc_royal_customers[".allSearchFields"][] = "address2";
	$tdataEoc_royal_customers[".allSearchFields"][] = "address3";
	

$tdataEoc_royal_customers[".googleLikeFields"] = array();
$tdataEoc_royal_customers[".googleLikeFields"][] = "link";
$tdataEoc_royal_customers[".googleLikeFields"][] = "mail1";
$tdataEoc_royal_customers[".googleLikeFields"][] = "mail2";
$tdataEoc_royal_customers[".googleLikeFields"][] = "royal_customer_status";
$tdataEoc_royal_customers[".googleLikeFields"][] = "gender";
$tdataEoc_royal_customers[".googleLikeFields"][] = "todou";
$tdataEoc_royal_customers[".googleLikeFields"][] = "family";
$tdataEoc_royal_customers[".googleLikeFields"][] = "income";
$tdataEoc_royal_customers[".googleLikeFields"][] = "cumulative_earnings";
$tdataEoc_royal_customers[".googleLikeFields"][] = "number_of_times";
$tdataEoc_royal_customers[".googleLikeFields"][] = "close_rate";
$tdataEoc_royal_customers[".googleLikeFields"][] = "LTV_prediction";
$tdataEoc_royal_customers[".googleLikeFields"][] = "usage_period";
$tdataEoc_royal_customers[".googleLikeFields"][] = "last_closing_date";
$tdataEoc_royal_customers[".googleLikeFields"][] = "type_trend";
$tdataEoc_royal_customers[".googleLikeFields"][] = "handling_number_of_brands";
$tdataEoc_royal_customers[".googleLikeFields"][] = "trend_destination_of_selling";
$tdataEoc_royal_customers[".googleLikeFields"][] = "questionnaire_quality";
$tdataEoc_royal_customers[".googleLikeFields"][] = "updated_by";
$tdataEoc_royal_customers[".googleLikeFields"][] = "created_at";
$tdataEoc_royal_customers[".googleLikeFields"][] = "created_by";
$tdataEoc_royal_customers[".googleLikeFields"][] = "selling_count_ec";
$tdataEoc_royal_customers[".googleLikeFields"][] = "selling_count_ichiba";
$tdataEoc_royal_customers[".googleLikeFields"][] = "type_count_K";
$tdataEoc_royal_customers[".googleLikeFields"][] = "type_count_D";
$tdataEoc_royal_customers[".googleLikeFields"][] = "type_count_J";
$tdataEoc_royal_customers[".googleLikeFields"][] = "type_count_W";
$tdataEoc_royal_customers[".googleLikeFields"][] = "type_count_B";
$tdataEoc_royal_customers[".googleLikeFields"][] = "type_count_H";
$tdataEoc_royal_customers[".googleLikeFields"][] = "type_count_other";
$tdataEoc_royal_customers[".googleLikeFields"][] = "selling_price_ec";
$tdataEoc_royal_customers[".googleLikeFields"][] = "selling_arari_ec";
$tdataEoc_royal_customers[".googleLikeFields"][] = "selling_price_ichiba";
$tdataEoc_royal_customers[".googleLikeFields"][] = "selling_arari_ichiba";
$tdataEoc_royal_customers[".googleLikeFields"][] = "type_price_K";
$tdataEoc_royal_customers[".googleLikeFields"][] = "type_arari_K";
$tdataEoc_royal_customers[".googleLikeFields"][] = "type_price_D";
$tdataEoc_royal_customers[".googleLikeFields"][] = "type_arari_D";
$tdataEoc_royal_customers[".googleLikeFields"][] = "type_price_J";
$tdataEoc_royal_customers[".googleLikeFields"][] = "type_arari_J";
$tdataEoc_royal_customers[".googleLikeFields"][] = "type_price_W";
$tdataEoc_royal_customers[".googleLikeFields"][] = "type_arari_W";
$tdataEoc_royal_customers[".googleLikeFields"][] = "type_price_B";
$tdataEoc_royal_customers[".googleLikeFields"][] = "type_arari_B";
$tdataEoc_royal_customers[".googleLikeFields"][] = "type_price_H";
$tdataEoc_royal_customers[".googleLikeFields"][] = "type_arari_H";
$tdataEoc_royal_customers[".googleLikeFields"][] = "type_price_other";
$tdataEoc_royal_customers[".googleLikeFields"][] = "type_arari_other";
$tdataEoc_royal_customers[".googleLikeFields"][] = "questquestion_count_very_satisfied";
$tdataEoc_royal_customers[".googleLikeFields"][] = "questquestion_count_somewhat_satisfied";
$tdataEoc_royal_customers[".googleLikeFields"][] = "questquestion_count_usually";
$tdataEoc_royal_customers[".googleLikeFields"][] = "questquestion_count_somewhat_dissatisfied";
$tdataEoc_royal_customers[".googleLikeFields"][] = "questquestion_count_complain";
$tdataEoc_royal_customers[".googleLikeFields"][] = "rate_selling_count_EC";
$tdataEoc_royal_customers[".googleLikeFields"][] = "rate_selling_count_ichiba";
$tdataEoc_royal_customers[".googleLikeFields"][] = "rate_type_count_K";
$tdataEoc_royal_customers[".googleLikeFields"][] = "rate_type_count_D";
$tdataEoc_royal_customers[".googleLikeFields"][] = "rate_type_count_J";
$tdataEoc_royal_customers[".googleLikeFields"][] = "rate_type_count_W";
$tdataEoc_royal_customers[".googleLikeFields"][] = "rate_type_count_B";
$tdataEoc_royal_customers[".googleLikeFields"][] = "rate_type_count_H";
$tdataEoc_royal_customers[".googleLikeFields"][] = "rate_type_count_other";
$tdataEoc_royal_customers[".googleLikeFields"][] = "royal_customer_type";
$tdataEoc_royal_customers[".googleLikeFields"][] = "ecc_id";
$tdataEoc_royal_customers[".googleLikeFields"][] = "mail_check_type";

$tdataEoc_royal_customers[".panelSearchFields"] = array();
$tdataEoc_royal_customers[".searchPanelOptions"] = array();
$tdataEoc_royal_customers[".panelSearchFields"][] = "ecc_id";
	$tdataEoc_royal_customers[".panelSearchFields"][] = "name1";
	$tdataEoc_royal_customers[".panelSearchFields"][] = "name2";
	$tdataEoc_royal_customers[".panelSearchFields"][] = "updated_at";
	$tdataEoc_royal_customers[".panelSearchFields"][] = "mail1";
	$tdataEoc_royal_customers[".panelSearchFields"][] = "mail2";
	$tdataEoc_royal_customers[".panelSearchFields"][] = "tel";
	$tdataEoc_royal_customers[".panelSearchFields"][] = "tel2";
	$tdataEoc_royal_customers[".panelSearchFields"][] = "address1";
	$tdataEoc_royal_customers[".panelSearchFields"][] = "address2";
	$tdataEoc_royal_customers[".panelSearchFields"][] = "address3";
	
$tdataEoc_royal_customers[".advSearchFields"] = array();
$tdataEoc_royal_customers[".advSearchFields"][] = "link";
$tdataEoc_royal_customers[".advSearchFields"][] = "royal_customer_type";
$tdataEoc_royal_customers[".advSearchFields"][] = "royal_customer_status";
$tdataEoc_royal_customers[".advSearchFields"][] = "ecc_id";
$tdataEoc_royal_customers[".advSearchFields"][] = "name1";
$tdataEoc_royal_customers[".advSearchFields"][] = "name2";
$tdataEoc_royal_customers[".advSearchFields"][] = "gender";
$tdataEoc_royal_customers[".advSearchFields"][] = "age";
$tdataEoc_royal_customers[".advSearchFields"][] = "todou";
$tdataEoc_royal_customers[".advSearchFields"][] = "cumulative_earnings";
$tdataEoc_royal_customers[".advSearchFields"][] = "number_of_times";
$tdataEoc_royal_customers[".advSearchFields"][] = "close_rate";
$tdataEoc_royal_customers[".advSearchFields"][] = "usage_period";
$tdataEoc_royal_customers[".advSearchFields"][] = "last_closing_date";
$tdataEoc_royal_customers[".advSearchFields"][] = "handling_number_of_brands";
$tdataEoc_royal_customers[".advSearchFields"][] = "rate_selling_count_EC";
$tdataEoc_royal_customers[".advSearchFields"][] = "rate_selling_count_ichiba";
$tdataEoc_royal_customers[".advSearchFields"][] = "rate_type_count_K";
$tdataEoc_royal_customers[".advSearchFields"][] = "rate_type_count_D";
$tdataEoc_royal_customers[".advSearchFields"][] = "rate_type_count_J";
$tdataEoc_royal_customers[".advSearchFields"][] = "rate_type_count_W";
$tdataEoc_royal_customers[".advSearchFields"][] = "rate_type_count_B";
$tdataEoc_royal_customers[".advSearchFields"][] = "rate_type_count_H";
$tdataEoc_royal_customers[".advSearchFields"][] = "rate_type_count_other";
$tdataEoc_royal_customers[".advSearchFields"][] = "mail_check_type";
$tdataEoc_royal_customers[".advSearchFields"][] = "mail1";
$tdataEoc_royal_customers[".advSearchFields"][] = "mail2";
$tdataEoc_royal_customers[".advSearchFields"][] = "tel";
$tdataEoc_royal_customers[".advSearchFields"][] = "tel2";
$tdataEoc_royal_customers[".advSearchFields"][] = "address1";
$tdataEoc_royal_customers[".advSearchFields"][] = "address2";
$tdataEoc_royal_customers[".advSearchFields"][] = "address3";

$tdataEoc_royal_customers[".tableType"] = "list";

$tdataEoc_royal_customers[".printerPageOrientation"] = 0;
$tdataEoc_royal_customers[".nPrinterPageScale"] = 100;

$tdataEoc_royal_customers[".nPrinterSplitRecords"] = 40;

$tdataEoc_royal_customers[".nPrinterPDFSplitRecords"] = 40;



$tdataEoc_royal_customers[".geocodingEnabled"] = false;





$tdataEoc_royal_customers[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataEoc_royal_customers[".pageSize"] = 20;

$tdataEoc_royal_customers[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataEoc_royal_customers[".strOrderBy"] = $tstrOrderBy;

$tdataEoc_royal_customers[".orderindexes"] = array();

$tdataEoc_royal_customers[".sqlHead"] = "SELECT `royal_customer`.`ecc_id` AS `link`,  `Eoc`.`name1`,  `Eoc`.`name2`,  `Eoc`.`address1`,  `Eoc`.`address2`,  `Eoc`.`address3`,  `Eoc`.`tel`,  `Eoc`.`tel2`,  `Eoc`.`mail1`,  `Eoc`.`mail2`,  `Eoc`.`royal_customer_status`,  `royal_customer`.`gender`,  `royal_customer`.`age`,  `royal_customer`.`todou`,  `royal_customer`.`family`,  `royal_customer`.`income`,  `royal_customer`.`cumulative_earnings`,  `royal_customer`.`number_of_times`,  `royal_customer`.`close_rate`,  `royal_customer`.`LTV_prediction`,  `royal_customer`.`usage_period`,  `royal_customer`.`last_closing_date`,  `royal_customer`.`type_trend`,  `royal_customer`.`handling_number_of_brands`,  `royal_customer`.`trend_destination_of_selling`,  `royal_customer`.`questionnaire_quality`,  `royal_customer`.`updated_at`,  `royal_customer`.`updated_by`,  `royal_customer`.`created_at`,  `royal_customer`.`created_by`,  `royal_customer`.`selling_count_ec`,  `royal_customer`.`selling_count_ichiba`,  `royal_customer`.`type_count_K`,  `royal_customer`.`type_count_D`,  `royal_customer`.`type_count_J`,  `royal_customer`.`type_count_W`,  `royal_customer`.`type_count_B`,  `royal_customer`.`type_count_H`,  `royal_customer`.`type_count_other`,  `royal_customer`.`selling_price_ec`,  `royal_customer`.`selling_arari_ec`,  `royal_customer`.`selling_price_ichiba`,  `royal_customer`.`selling_arari_ichiba`,  `royal_customer`.`type_price_K`,  `royal_customer`.`type_arari_K`,  `royal_customer`.`type_price_D`,  `royal_customer`.`type_arari_D`,  `royal_customer`.`type_price_J`,  `royal_customer`.`type_arari_J`,  `royal_customer`.`type_price_W`,  `royal_customer`.`type_arari_W`,  `royal_customer`.`type_price_B`,  `royal_customer`.`type_arari_B`,  `royal_customer`.`type_price_H`,  `royal_customer`.`type_arari_H`,  `royal_customer`.`type_price_other`,  `royal_customer`.`type_arari_other`,  `royal_customer`.`questquestion_count_very_satisfied`,  `royal_customer`.`questquestion_count_somewhat_satisfied`,  `royal_customer`.`questquestion_count_usually`,  `royal_customer`.`questquestion_count_somewhat_dissatisfied`,  `royal_customer`.`questquestion_count_complain`,  `royal_customer`.`rate_selling_count_EC`,  `royal_customer`.`rate_selling_count_ichiba`,  `royal_customer`.`rate_type_count_K`,  `royal_customer`.`rate_type_count_D`,  `royal_customer`.`rate_type_count_J`,  `royal_customer`.`rate_type_count_W`,  `royal_customer`.`rate_type_count_B`,  `royal_customer`.`rate_type_count_H`,  `royal_customer`.`rate_type_count_other`,  `royal_customer`.`royal_customer_type`,  `Eoc`.`ecc_id`,  `Eoc`.`mail_check_type`";
$tdataEoc_royal_customers[".sqlFrom"] = "FROM `Eoc`  LEFT OUTER JOIN `royal_customer` ON `Eoc`.`ecc_id` = `royal_customer`.`ecc_id`";
$tdataEoc_royal_customers[".sqlWhereExpr"] = "(`royal_customer`.`ecc_id` IS NOT NULL)";
$tdataEoc_royal_customers[".sqlTail"] = "";

//fill array of tabs for edit page
$arrEditTabs = array();
	$tabFields = array();
	
$arrEditTabs[] = array('tabId'=>'New_section1',
					   'tabName'=>"フラグ 集荷関連 登録日 ",
					   'nType'=>'1',
					   'nOrder'=>1,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>1);
	$tabFields = array();
	
$arrEditTabs[] = array('tabId'=>'2',
					   'tabName'=>"メール DM 返答方法 宅配チェック",
					   'nType'=>'1',
					   'nOrder'=>41,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>1);
	$tabFields = array();
	
$arrEditTabs[] = array('tabId'=>'3',
					   'tabName'=>"金融機関情報",
					   'nType'=>'1',
					   'nOrder'=>63,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>1);
$tdataEoc_royal_customers[".arrEditTabs"] = $arrEditTabs;



//fill array of tabs for view page
$arrViewTabs = array();
	$tabFields = array();
	
$arrViewTabs[] = array('tabId'=>'__1',
					   'tabName'=>"顧客",
					   'nType'=>'1',
					   'nOrder'=>24,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>1);
	$tabFields = array();
	
$arrViewTabs[] = array('tabId'=>'__2',
					   'tabName'=>"備考",
					   'nType'=>'1',
					   'nOrder'=>70,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>1);
	$tabFields = array();
	
$arrViewTabs[] = array('tabId'=>'___1',
					   'tabName'=>"顧客２",
					   'nType'=>'1',
					   'nOrder'=>75,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>1);
$tdataEoc_royal_customers[".arrViewTabs"] = $arrViewTabs;







//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataEoc_royal_customers[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataEoc_royal_customers[".arrGroupsPerPage"] = $arrGPP;

$tdataEoc_royal_customers[".highlightSearchResults"] = true;

$tableKeysEoc_royal_customers = array();
$tableKeysEoc_royal_customers[] = "ecc_id";
$tdataEoc_royal_customers[".Keys"] = $tableKeysEoc_royal_customers;

$tdataEoc_royal_customers[".listFields"] = array();
$tdataEoc_royal_customers[".listFields"][] = "link";
$tdataEoc_royal_customers[".listFields"][] = "royal_customer_type";
$tdataEoc_royal_customers[".listFields"][] = "royal_customer_status";
$tdataEoc_royal_customers[".listFields"][] = "ecc_id";
$tdataEoc_royal_customers[".listFields"][] = "name1";
$tdataEoc_royal_customers[".listFields"][] = "name2";
$tdataEoc_royal_customers[".listFields"][] = "gender";
$tdataEoc_royal_customers[".listFields"][] = "age";
$tdataEoc_royal_customers[".listFields"][] = "todou";
$tdataEoc_royal_customers[".listFields"][] = "cumulative_earnings";
$tdataEoc_royal_customers[".listFields"][] = "number_of_times";
$tdataEoc_royal_customers[".listFields"][] = "close_rate";
$tdataEoc_royal_customers[".listFields"][] = "usage_period";
$tdataEoc_royal_customers[".listFields"][] = "last_closing_date";
$tdataEoc_royal_customers[".listFields"][] = "handling_number_of_brands";
$tdataEoc_royal_customers[".listFields"][] = "rate_selling_count_EC";
$tdataEoc_royal_customers[".listFields"][] = "rate_selling_count_ichiba";
$tdataEoc_royal_customers[".listFields"][] = "rate_type_count_K";
$tdataEoc_royal_customers[".listFields"][] = "rate_type_count_D";
$tdataEoc_royal_customers[".listFields"][] = "rate_type_count_J";
$tdataEoc_royal_customers[".listFields"][] = "rate_type_count_W";
$tdataEoc_royal_customers[".listFields"][] = "rate_type_count_B";
$tdataEoc_royal_customers[".listFields"][] = "rate_type_count_H";
$tdataEoc_royal_customers[".listFields"][] = "rate_type_count_other";
$tdataEoc_royal_customers[".listFields"][] = "mail_check_type";
$tdataEoc_royal_customers[".listFields"][] = "mail1";
$tdataEoc_royal_customers[".listFields"][] = "mail2";
$tdataEoc_royal_customers[".listFields"][] = "tel";
$tdataEoc_royal_customers[".listFields"][] = "tel2";
$tdataEoc_royal_customers[".listFields"][] = "address1";
$tdataEoc_royal_customers[".listFields"][] = "address2";
$tdataEoc_royal_customers[".listFields"][] = "address3";

$tdataEoc_royal_customers[".hideMobileList"] = array();


$tdataEoc_royal_customers[".viewFields"] = array();

$tdataEoc_royal_customers[".addFields"] = array();

$tdataEoc_royal_customers[".masterListFields"] = array();
$tdataEoc_royal_customers[".masterListFields"][] = "type_trend";
$tdataEoc_royal_customers[".masterListFields"][] = "trend_destination_of_selling";
$tdataEoc_royal_customers[".masterListFields"][] = "questionnaire_quality";
$tdataEoc_royal_customers[".masterListFields"][] = "updated_by";
$tdataEoc_royal_customers[".masterListFields"][] = "created_at";
$tdataEoc_royal_customers[".masterListFields"][] = "created_by";
$tdataEoc_royal_customers[".masterListFields"][] = "selling_count_ec";
$tdataEoc_royal_customers[".masterListFields"][] = "selling_count_ichiba";
$tdataEoc_royal_customers[".masterListFields"][] = "type_count_K";
$tdataEoc_royal_customers[".masterListFields"][] = "type_count_D";
$tdataEoc_royal_customers[".masterListFields"][] = "type_count_J";
$tdataEoc_royal_customers[".masterListFields"][] = "type_count_W";
$tdataEoc_royal_customers[".masterListFields"][] = "type_count_B";
$tdataEoc_royal_customers[".masterListFields"][] = "type_count_H";
$tdataEoc_royal_customers[".masterListFields"][] = "type_count_other";
$tdataEoc_royal_customers[".masterListFields"][] = "selling_price_ec";
$tdataEoc_royal_customers[".masterListFields"][] = "selling_arari_ec";
$tdataEoc_royal_customers[".masterListFields"][] = "selling_price_ichiba";
$tdataEoc_royal_customers[".masterListFields"][] = "selling_arari_ichiba";
$tdataEoc_royal_customers[".masterListFields"][] = "type_price_K";
$tdataEoc_royal_customers[".masterListFields"][] = "type_arari_K";
$tdataEoc_royal_customers[".masterListFields"][] = "type_price_D";
$tdataEoc_royal_customers[".masterListFields"][] = "type_arari_D";
$tdataEoc_royal_customers[".masterListFields"][] = "type_price_J";
$tdataEoc_royal_customers[".masterListFields"][] = "type_arari_J";
$tdataEoc_royal_customers[".masterListFields"][] = "type_price_W";
$tdataEoc_royal_customers[".masterListFields"][] = "type_arari_W";
$tdataEoc_royal_customers[".masterListFields"][] = "type_price_B";
$tdataEoc_royal_customers[".masterListFields"][] = "type_arari_B";
$tdataEoc_royal_customers[".masterListFields"][] = "type_price_H";
$tdataEoc_royal_customers[".masterListFields"][] = "type_arari_H";
$tdataEoc_royal_customers[".masterListFields"][] = "type_price_other";
$tdataEoc_royal_customers[".masterListFields"][] = "type_arari_other";
$tdataEoc_royal_customers[".masterListFields"][] = "questquestion_count_very_satisfied";
$tdataEoc_royal_customers[".masterListFields"][] = "questquestion_count_somewhat_satisfied";
$tdataEoc_royal_customers[".masterListFields"][] = "questquestion_count_usually";
$tdataEoc_royal_customers[".masterListFields"][] = "questquestion_count_somewhat_dissatisfied";
$tdataEoc_royal_customers[".masterListFields"][] = "questquestion_count_complain";
$tdataEoc_royal_customers[".masterListFields"][] = "link";
$tdataEoc_royal_customers[".masterListFields"][] = "royal_customer_type";
$tdataEoc_royal_customers[".masterListFields"][] = "royal_customer_status";
$tdataEoc_royal_customers[".masterListFields"][] = "ecc_id";
$tdataEoc_royal_customers[".masterListFields"][] = "name1";
$tdataEoc_royal_customers[".masterListFields"][] = "name2";
$tdataEoc_royal_customers[".masterListFields"][] = "gender";
$tdataEoc_royal_customers[".masterListFields"][] = "age";
$tdataEoc_royal_customers[".masterListFields"][] = "todou";
$tdataEoc_royal_customers[".masterListFields"][] = "cumulative_earnings";
$tdataEoc_royal_customers[".masterListFields"][] = "number_of_times";
$tdataEoc_royal_customers[".masterListFields"][] = "close_rate";
$tdataEoc_royal_customers[".masterListFields"][] = "usage_period";
$tdataEoc_royal_customers[".masterListFields"][] = "last_closing_date";
$tdataEoc_royal_customers[".masterListFields"][] = "handling_number_of_brands";
$tdataEoc_royal_customers[".masterListFields"][] = "rate_selling_count_EC";
$tdataEoc_royal_customers[".masterListFields"][] = "rate_selling_count_ichiba";
$tdataEoc_royal_customers[".masterListFields"][] = "rate_type_count_K";
$tdataEoc_royal_customers[".masterListFields"][] = "rate_type_count_D";
$tdataEoc_royal_customers[".masterListFields"][] = "updated_at";
$tdataEoc_royal_customers[".masterListFields"][] = "rate_type_count_J";
$tdataEoc_royal_customers[".masterListFields"][] = "rate_type_count_W";
$tdataEoc_royal_customers[".masterListFields"][] = "rate_type_count_B";
$tdataEoc_royal_customers[".masterListFields"][] = "rate_type_count_H";
$tdataEoc_royal_customers[".masterListFields"][] = "rate_type_count_other";
$tdataEoc_royal_customers[".masterListFields"][] = "mail_check_type";
$tdataEoc_royal_customers[".masterListFields"][] = "mail1";
$tdataEoc_royal_customers[".masterListFields"][] = "mail2";
$tdataEoc_royal_customers[".masterListFields"][] = "tel";
$tdataEoc_royal_customers[".masterListFields"][] = "tel2";
$tdataEoc_royal_customers[".masterListFields"][] = "address1";
$tdataEoc_royal_customers[".masterListFields"][] = "address2";
$tdataEoc_royal_customers[".masterListFields"][] = "address3";

$tdataEoc_royal_customers[".inlineAddFields"] = array();

$tdataEoc_royal_customers[".editFields"] = array();

$tdataEoc_royal_customers[".inlineEditFields"] = array();
$tdataEoc_royal_customers[".inlineEditFields"][] = "royal_customer_status";

$tdataEoc_royal_customers[".updateSelectedFields"] = array();


$tdataEoc_royal_customers[".exportFields"] = array();
$tdataEoc_royal_customers[".exportFields"][] = "link";
$tdataEoc_royal_customers[".exportFields"][] = "royal_customer_type";
$tdataEoc_royal_customers[".exportFields"][] = "royal_customer_status";
$tdataEoc_royal_customers[".exportFields"][] = "ecc_id";
$tdataEoc_royal_customers[".exportFields"][] = "name1";
$tdataEoc_royal_customers[".exportFields"][] = "name2";
$tdataEoc_royal_customers[".exportFields"][] = "gender";
$tdataEoc_royal_customers[".exportFields"][] = "age";
$tdataEoc_royal_customers[".exportFields"][] = "todou";
$tdataEoc_royal_customers[".exportFields"][] = "cumulative_earnings";
$tdataEoc_royal_customers[".exportFields"][] = "number_of_times";
$tdataEoc_royal_customers[".exportFields"][] = "close_rate";
$tdataEoc_royal_customers[".exportFields"][] = "usage_period";
$tdataEoc_royal_customers[".exportFields"][] = "last_closing_date";
$tdataEoc_royal_customers[".exportFields"][] = "handling_number_of_brands";
$tdataEoc_royal_customers[".exportFields"][] = "rate_selling_count_EC";
$tdataEoc_royal_customers[".exportFields"][] = "rate_selling_count_ichiba";
$tdataEoc_royal_customers[".exportFields"][] = "rate_type_count_K";
$tdataEoc_royal_customers[".exportFields"][] = "rate_type_count_D";
$tdataEoc_royal_customers[".exportFields"][] = "rate_type_count_J";
$tdataEoc_royal_customers[".exportFields"][] = "rate_type_count_W";
$tdataEoc_royal_customers[".exportFields"][] = "rate_type_count_B";
$tdataEoc_royal_customers[".exportFields"][] = "rate_type_count_H";
$tdataEoc_royal_customers[".exportFields"][] = "rate_type_count_other";
$tdataEoc_royal_customers[".exportFields"][] = "mail_check_type";
$tdataEoc_royal_customers[".exportFields"][] = "mail1";
$tdataEoc_royal_customers[".exportFields"][] = "mail2";
$tdataEoc_royal_customers[".exportFields"][] = "tel";
$tdataEoc_royal_customers[".exportFields"][] = "tel2";
$tdataEoc_royal_customers[".exportFields"][] = "address1";
$tdataEoc_royal_customers[".exportFields"][] = "address2";
$tdataEoc_royal_customers[".exportFields"][] = "address3";

$tdataEoc_royal_customers[".importFields"] = array();
$tdataEoc_royal_customers[".importFields"][] = "link";
$tdataEoc_royal_customers[".importFields"][] = "name1";
$tdataEoc_royal_customers[".importFields"][] = "name2";
$tdataEoc_royal_customers[".importFields"][] = "address1";
$tdataEoc_royal_customers[".importFields"][] = "address2";
$tdataEoc_royal_customers[".importFields"][] = "address3";
$tdataEoc_royal_customers[".importFields"][] = "tel";
$tdataEoc_royal_customers[".importFields"][] = "tel2";
$tdataEoc_royal_customers[".importFields"][] = "mail1";
$tdataEoc_royal_customers[".importFields"][] = "mail2";
$tdataEoc_royal_customers[".importFields"][] = "royal_customer_status";
$tdataEoc_royal_customers[".importFields"][] = "gender";
$tdataEoc_royal_customers[".importFields"][] = "age";
$tdataEoc_royal_customers[".importFields"][] = "todou";
$tdataEoc_royal_customers[".importFields"][] = "cumulative_earnings";
$tdataEoc_royal_customers[".importFields"][] = "number_of_times";
$tdataEoc_royal_customers[".importFields"][] = "close_rate";
$tdataEoc_royal_customers[".importFields"][] = "usage_period";
$tdataEoc_royal_customers[".importFields"][] = "last_closing_date";
$tdataEoc_royal_customers[".importFields"][] = "handling_number_of_brands";
$tdataEoc_royal_customers[".importFields"][] = "rate_selling_count_EC";
$tdataEoc_royal_customers[".importFields"][] = "rate_selling_count_ichiba";
$tdataEoc_royal_customers[".importFields"][] = "rate_type_count_K";
$tdataEoc_royal_customers[".importFields"][] = "rate_type_count_D";
$tdataEoc_royal_customers[".importFields"][] = "rate_type_count_J";
$tdataEoc_royal_customers[".importFields"][] = "rate_type_count_W";
$tdataEoc_royal_customers[".importFields"][] = "rate_type_count_B";
$tdataEoc_royal_customers[".importFields"][] = "rate_type_count_H";
$tdataEoc_royal_customers[".importFields"][] = "rate_type_count_other";
$tdataEoc_royal_customers[".importFields"][] = "royal_customer_type";
$tdataEoc_royal_customers[".importFields"][] = "ecc_id";
$tdataEoc_royal_customers[".importFields"][] = "mail_check_type";

$tdataEoc_royal_customers[".printFields"] = array();

//	link
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "link";
	$fdata["GoodName"] = "link";
	$fdata["ownerTable"] = "royal_customer";
	$fdata["Label"] = GetFieldLabel("Eoc_royal_customers","link");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ecc_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`royal_customer`.`ecc_id`";

	
	
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




	$tdataEoc_royal_customers["link"] = $fdata;
//	name1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name1";
	$fdata["GoodName"] = "name1";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc_royal_customers","name1");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "name1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc`.`name1`";

	
	
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




	$tdataEoc_royal_customers["name1"] = $fdata;
//	name2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "name2";
	$fdata["GoodName"] = "name2";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc_royal_customers","name2");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "name2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc`.`name2`";

	
	
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




	$tdataEoc_royal_customers["name2"] = $fdata;
//	address1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "address1";
	$fdata["GoodName"] = "address1";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc_royal_customers","address1");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "address1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc`.`address1`";

	
	
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
	$edata["LookupTable"] = "_pref";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "data";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "data";

	
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




	$tdataEoc_royal_customers["address1"] = $fdata;
//	address2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "address2";
	$fdata["GoodName"] = "address2";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc_royal_customers","address2");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "address2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc`.`address2`";

	
	
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




	$tdataEoc_royal_customers["address2"] = $fdata;
//	address3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "address3";
	$fdata["GoodName"] = "address3";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc_royal_customers","address3");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "address3";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc`.`address3`";

	
	
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




	$tdataEoc_royal_customers["address3"] = $fdata;
//	tel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "tel";
	$fdata["GoodName"] = "tel";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc_royal_customers","tel");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "tel";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc`.`tel`";

	
	
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




	$tdataEoc_royal_customers["tel"] = $fdata;
//	tel2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "tel2";
	$fdata["GoodName"] = "tel2";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc_royal_customers","tel2");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "tel2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc`.`tel2`";

	
	
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




	$tdataEoc_royal_customers["tel2"] = $fdata;
//	mail1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "mail1";
	$fdata["GoodName"] = "mail1";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc_royal_customers","mail1");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "mail1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc`.`mail1`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Email Hyperlink");

	
	
	
	
	
	
	
	
	
	
	
	
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




	$tdataEoc_royal_customers["mail1"] = $fdata;
//	mail2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "mail2";
	$fdata["GoodName"] = "mail2";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc_royal_customers","mail2");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "mail2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc`.`mail2`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Email Hyperlink");

	
	
	
	
	
	
	
	
	
	
	
	
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




	$tdataEoc_royal_customers["mail2"] = $fdata;
//	royal_customer_status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "royal_customer_status";
	$fdata["GoodName"] = "royal_customer_status";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc_royal_customers","royal_customer_status");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "royal_customer_status";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc`.`royal_customer_status`";

	
	
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
	$edata["LookupTable"] = "mst_royal_customer_status";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "name";

	
	$edata["LookupOrderBy"] = "sort";

	
	
	
	

	
	
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




	$tdataEoc_royal_customers["royal_customer_status"] = $fdata;
//	gender
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "gender";
	$fdata["GoodName"] = "gender";
	$fdata["ownerTable"] = "royal_customer";
	$fdata["Label"] = GetFieldLabel("Eoc_royal_customers","gender");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "gender";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`royal_customer`.`gender`";

	
	
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




	$tdataEoc_royal_customers["gender"] = $fdata;
//	age
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "age";
	$fdata["GoodName"] = "age";
	$fdata["ownerTable"] = "royal_customer";
	$fdata["Label"] = GetFieldLabel("Eoc_royal_customers","age");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "age";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`royal_customer`.`age`";

	
	
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
			$edata["EditParams"].= " maxlength=3";

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




	$tdataEoc_royal_customers["age"] = $fdata;
//	todou
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "todou";
	$fdata["GoodName"] = "todou";
	$fdata["ownerTable"] = "royal_customer";
	$fdata["Label"] = GetFieldLabel("Eoc_royal_customers","todou");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "todou";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`royal_customer`.`todou`";

	
	
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




	$tdataEoc_royal_customers["todou"] = $fdata;
//	family
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "family";
	$fdata["GoodName"] = "family";
	$fdata["ownerTable"] = "royal_customer";
	$fdata["Label"] = GetFieldLabel("Eoc_royal_customers","family");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "family";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`royal_customer`.`family`";

	
	
			
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








	$tdataEoc_royal_customers["family"] = $fdata;
//	income
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "income";
	$fdata["GoodName"] = "income";
	$fdata["ownerTable"] = "royal_customer";
	$fdata["Label"] = GetFieldLabel("Eoc_royal_customers","income");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "income";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`royal_customer`.`income`";

	
	
			
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








	$tdataEoc_royal_customers["income"] = $fdata;
//	cumulative_earnings
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "cumulative_earnings";
	$fdata["GoodName"] = "cumulative_earnings";
	$fdata["ownerTable"] = "royal_customer";
	$fdata["Label"] = GetFieldLabel("Eoc_royal_customers","cumulative_earnings");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "cumulative_earnings";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`royal_customer`.`cumulative_earnings`";

	
	
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




	$tdataEoc_royal_customers["cumulative_earnings"] = $fdata;
//	number_of_times
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "number_of_times";
	$fdata["GoodName"] = "number_of_times";
	$fdata["ownerTable"] = "royal_customer";
	$fdata["Label"] = GetFieldLabel("Eoc_royal_customers","number_of_times");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "number_of_times";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`royal_customer`.`number_of_times`";

	
	
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




	$tdataEoc_royal_customers["number_of_times"] = $fdata;
//	close_rate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "close_rate";
	$fdata["GoodName"] = "close_rate";
	$fdata["ownerTable"] = "royal_customer";
	$fdata["Label"] = GetFieldLabel("Eoc_royal_customers","close_rate");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "close_rate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`royal_customer`.`close_rate`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Percent");

	
	
	
	
	
	
	
	
	
	
	
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




	$tdataEoc_royal_customers["close_rate"] = $fdata;
//	LTV_prediction
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "LTV_prediction";
	$fdata["GoodName"] = "LTV_prediction";
	$fdata["ownerTable"] = "royal_customer";
	$fdata["Label"] = GetFieldLabel("Eoc_royal_customers","LTV_prediction");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "LTV_prediction";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`royal_customer`.`LTV_prediction`";

	
	
			
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








	$tdataEoc_royal_customers["LTV_prediction"] = $fdata;
//	usage_period
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "usage_period";
	$fdata["GoodName"] = "usage_period";
	$fdata["ownerTable"] = "royal_customer";
	$fdata["Label"] = GetFieldLabel("Eoc_royal_customers","usage_period");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "usage_period";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`royal_customer`.`usage_period`";

	
	
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




	$tdataEoc_royal_customers["usage_period"] = $fdata;
//	last_closing_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "last_closing_date";
	$fdata["GoodName"] = "last_closing_date";
	$fdata["ownerTable"] = "royal_customer";
	$fdata["Label"] = GetFieldLabel("Eoc_royal_customers","last_closing_date");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "last_closing_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`royal_customer`.`last_closing_date`";

	
	
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




	$tdataEoc_royal_customers["last_closing_date"] = $fdata;
//	type_trend
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "type_trend";
	$fdata["GoodName"] = "type_trend";
	$fdata["ownerTable"] = "royal_customer";
	$fdata["Label"] = GetFieldLabel("Eoc_royal_customers","type_trend");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "type_trend";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`royal_customer`.`type_trend`";

	
	
			
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








	$tdataEoc_royal_customers["type_trend"] = $fdata;
//	handling_number_of_brands
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "handling_number_of_brands";
	$fdata["GoodName"] = "handling_number_of_brands";
	$fdata["ownerTable"] = "royal_customer";
	$fdata["Label"] = GetFieldLabel("Eoc_royal_customers","handling_number_of_brands");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "handling_number_of_brands";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`royal_customer`.`handling_number_of_brands`";

	
	
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




	$tdataEoc_royal_customers["handling_number_of_brands"] = $fdata;
//	trend_destination_of_selling
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "trend_destination_of_selling";
	$fdata["GoodName"] = "trend_destination_of_selling";
	$fdata["ownerTable"] = "royal_customer";
	$fdata["Label"] = GetFieldLabel("Eoc_royal_customers","trend_destination_of_selling");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "trend_destination_of_selling";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`royal_customer`.`trend_destination_of_selling`";

	
	
			
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








	$tdataEoc_royal_customers["trend_destination_of_selling"] = $fdata;
//	questionnaire_quality
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "questionnaire_quality";
	$fdata["GoodName"] = "questionnaire_quality";
	$fdata["ownerTable"] = "royal_customer";
	$fdata["Label"] = GetFieldLabel("Eoc_royal_customers","questionnaire_quality");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "questionnaire_quality";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`royal_customer`.`questionnaire_quality`";

	
	
			
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








	$tdataEoc_royal_customers["questionnaire_quality"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "royal_customer";
	$fdata["Label"] = GetFieldLabel("Eoc_royal_customers","updated_at");
	$fdata["FieldType"] = 135;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "updated_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`royal_customer`.`updated_at`";

	
	
			
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

	



		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
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








	$tdataEoc_royal_customers["updated_at"] = $fdata;
//	updated_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "updated_by";
	$fdata["GoodName"] = "updated_by";
	$fdata["ownerTable"] = "royal_customer";
	$fdata["Label"] = GetFieldLabel("Eoc_royal_customers","updated_by");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "updated_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`royal_customer`.`updated_by`";

	
	
			
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








	$tdataEoc_royal_customers["updated_by"] = $fdata;
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "royal_customer";
	$fdata["Label"] = GetFieldLabel("Eoc_royal_customers","created_at");
	$fdata["FieldType"] = 135;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "created_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`royal_customer`.`created_at`";

	
	
			
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








	$tdataEoc_royal_customers["created_at"] = $fdata;
//	created_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "created_by";
	$fdata["GoodName"] = "created_by";
	$fdata["ownerTable"] = "royal_customer";
	$fdata["Label"] = GetFieldLabel("Eoc_royal_customers","created_by");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "created_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`royal_customer`.`created_by`";

	
	
			
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








	$tdataEoc_royal_customers["created_by"] = $fdata;
//	selling_count_ec
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "selling_count_ec";
	$fdata["GoodName"] = "selling_count_ec";
	$fdata["ownerTable"] = "royal_customer";
	$fdata["Label"] = GetFieldLabel("Eoc_royal_customers","selling_count_ec");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "selling_count_ec";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`royal_customer`.`selling_count_ec`";

	
	
			
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








	$tdataEoc_royal_customers["selling_count_ec"] = $fdata;
//	selling_count_ichiba
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "selling_count_ichiba";
	$fdata["GoodName"] = "selling_count_ichiba";
	$fdata["ownerTable"] = "royal_customer";
	$fdata["Label"] = GetFieldLabel("Eoc_royal_customers","selling_count_ichiba");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "selling_count_ichiba";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`royal_customer`.`selling_count_ichiba`";

	
	
			
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








	$tdataEoc_royal_customers["selling_count_ichiba"] = $fdata;
//	type_count_K
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "type_count_K";
	$fdata["GoodName"] = "type_count_K";
	$fdata["ownerTable"] = "royal_customer";
	$fdata["Label"] = GetFieldLabel("Eoc_royal_customers","type_count_K");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "type_count_K";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`royal_customer`.`type_count_K`";

	
	
			
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








	$tdataEoc_royal_customers["type_count_K"] = $fdata;
//	type_count_D
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "type_count_D";
	$fdata["GoodName"] = "type_count_D";
	$fdata["ownerTable"] = "royal_customer";
	$fdata["Label"] = GetFieldLabel("Eoc_royal_customers","type_count_D");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "type_count_D";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`royal_customer`.`type_count_D`";

	
	
			
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








	$tdataEoc_royal_customers["type_count_D"] = $fdata;
//	type_count_J
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "type_count_J";
	$fdata["GoodName"] = "type_count_J";
	$fdata["ownerTable"] = "royal_customer";
	$fdata["Label"] = GetFieldLabel("Eoc_royal_customers","type_count_J");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "type_count_J";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`royal_customer`.`type_count_J`";

	
	
			
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








	$tdataEoc_royal_customers["type_count_J"] = $fdata;
//	type_count_W
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "type_count_W";
	$fdata["GoodName"] = "type_count_W";
	$fdata["ownerTable"] = "royal_customer";
	$fdata["Label"] = GetFieldLabel("Eoc_royal_customers","type_count_W");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "type_count_W";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`royal_customer`.`type_count_W`";

	
	
			
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








	$tdataEoc_royal_customers["type_count_W"] = $fdata;
//	type_count_B
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "type_count_B";
	$fdata["GoodName"] = "type_count_B";
	$fdata["ownerTable"] = "royal_customer";
	$fdata["Label"] = GetFieldLabel("Eoc_royal_customers","type_count_B");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "type_count_B";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`royal_customer`.`type_count_B`";

	
	
			
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








	$tdataEoc_royal_customers["type_count_B"] = $fdata;
//	type_count_H
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "type_count_H";
	$fdata["GoodName"] = "type_count_H";
	$fdata["ownerTable"] = "royal_customer";
	$fdata["Label"] = GetFieldLabel("Eoc_royal_customers","type_count_H");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "type_count_H";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`royal_customer`.`type_count_H`";

	
	
			
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








	$tdataEoc_royal_customers["type_count_H"] = $fdata;
//	type_count_other
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "type_count_other";
	$fdata["GoodName"] = "type_count_other";
	$fdata["ownerTable"] = "royal_customer";
	$fdata["Label"] = GetFieldLabel("Eoc_royal_customers","type_count_other");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "type_count_other";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`royal_customer`.`type_count_other`";

	
	
			
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








	$tdataEoc_royal_customers["type_count_other"] = $fdata;
//	selling_price_ec
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "selling_price_ec";
	$fdata["GoodName"] = "selling_price_ec";
	$fdata["ownerTable"] = "royal_customer";
	$fdata["Label"] = GetFieldLabel("Eoc_royal_customers","selling_price_ec");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "selling_price_ec";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`royal_customer`.`selling_price_ec`";

	
	
			
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








	$tdataEoc_royal_customers["selling_price_ec"] = $fdata;
//	selling_arari_ec
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "selling_arari_ec";
	$fdata["GoodName"] = "selling_arari_ec";
	$fdata["ownerTable"] = "royal_customer";
	$fdata["Label"] = GetFieldLabel("Eoc_royal_customers","selling_arari_ec");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "selling_arari_ec";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`royal_customer`.`selling_arari_ec`";

	
	
			
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








	$tdataEoc_royal_customers["selling_arari_ec"] = $fdata;
//	selling_price_ichiba
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "selling_price_ichiba";
	$fdata["GoodName"] = "selling_price_ichiba";
	$fdata["ownerTable"] = "royal_customer";
	$fdata["Label"] = GetFieldLabel("Eoc_royal_customers","selling_price_ichiba");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "selling_price_ichiba";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`royal_customer`.`selling_price_ichiba`";

	
	
			
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








	$tdataEoc_royal_customers["selling_price_ichiba"] = $fdata;
//	selling_arari_ichiba
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "selling_arari_ichiba";
	$fdata["GoodName"] = "selling_arari_ichiba";
	$fdata["ownerTable"] = "royal_customer";
	$fdata["Label"] = GetFieldLabel("Eoc_royal_customers","selling_arari_ichiba");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "selling_arari_ichiba";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`royal_customer`.`selling_arari_ichiba`";

	
	
			
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








	$tdataEoc_royal_customers["selling_arari_ichiba"] = $fdata;
//	type_price_K
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "type_price_K";
	$fdata["GoodName"] = "type_price_K";
	$fdata["ownerTable"] = "royal_customer";
	$fdata["Label"] = GetFieldLabel("Eoc_royal_customers","type_price_K");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "type_price_K";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`royal_customer`.`type_price_K`";

	
	
			
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








	$tdataEoc_royal_customers["type_price_K"] = $fdata;
//	type_arari_K
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "type_arari_K";
	$fdata["GoodName"] = "type_arari_K";
	$fdata["ownerTable"] = "royal_customer";
	$fdata["Label"] = GetFieldLabel("Eoc_royal_customers","type_arari_K");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "type_arari_K";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`royal_customer`.`type_arari_K`";

	
	
			
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








	$tdataEoc_royal_customers["type_arari_K"] = $fdata;
//	type_price_D
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "type_price_D";
	$fdata["GoodName"] = "type_price_D";
	$fdata["ownerTable"] = "royal_customer";
	$fdata["Label"] = GetFieldLabel("Eoc_royal_customers","type_price_D");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "type_price_D";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`royal_customer`.`type_price_D`";

	
	
			
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








	$tdataEoc_royal_customers["type_price_D"] = $fdata;
//	type_arari_D
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 47;
	$fdata["strName"] = "type_arari_D";
	$fdata["GoodName"] = "type_arari_D";
	$fdata["ownerTable"] = "royal_customer";
	$fdata["Label"] = GetFieldLabel("Eoc_royal_customers","type_arari_D");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "type_arari_D";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`royal_customer`.`type_arari_D`";

	
	
			
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








	$tdataEoc_royal_customers["type_arari_D"] = $fdata;
//	type_price_J
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 48;
	$fdata["strName"] = "type_price_J";
	$fdata["GoodName"] = "type_price_J";
	$fdata["ownerTable"] = "royal_customer";
	$fdata["Label"] = GetFieldLabel("Eoc_royal_customers","type_price_J");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "type_price_J";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`royal_customer`.`type_price_J`";

	
	
			
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








	$tdataEoc_royal_customers["type_price_J"] = $fdata;
//	type_arari_J
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 49;
	$fdata["strName"] = "type_arari_J";
	$fdata["GoodName"] = "type_arari_J";
	$fdata["ownerTable"] = "royal_customer";
	$fdata["Label"] = GetFieldLabel("Eoc_royal_customers","type_arari_J");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "type_arari_J";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`royal_customer`.`type_arari_J`";

	
	
			
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








	$tdataEoc_royal_customers["type_arari_J"] = $fdata;
//	type_price_W
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 50;
	$fdata["strName"] = "type_price_W";
	$fdata["GoodName"] = "type_price_W";
	$fdata["ownerTable"] = "royal_customer";
	$fdata["Label"] = GetFieldLabel("Eoc_royal_customers","type_price_W");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "type_price_W";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`royal_customer`.`type_price_W`";

	
	
			
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








	$tdataEoc_royal_customers["type_price_W"] = $fdata;
//	type_arari_W
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 51;
	$fdata["strName"] = "type_arari_W";
	$fdata["GoodName"] = "type_arari_W";
	$fdata["ownerTable"] = "royal_customer";
	$fdata["Label"] = GetFieldLabel("Eoc_royal_customers","type_arari_W");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "type_arari_W";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`royal_customer`.`type_arari_W`";

	
	
			
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








	$tdataEoc_royal_customers["type_arari_W"] = $fdata;
//	type_price_B
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 52;
	$fdata["strName"] = "type_price_B";
	$fdata["GoodName"] = "type_price_B";
	$fdata["ownerTable"] = "royal_customer";
	$fdata["Label"] = GetFieldLabel("Eoc_royal_customers","type_price_B");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "type_price_B";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`royal_customer`.`type_price_B`";

	
	
			
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








	$tdataEoc_royal_customers["type_price_B"] = $fdata;
//	type_arari_B
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 53;
	$fdata["strName"] = "type_arari_B";
	$fdata["GoodName"] = "type_arari_B";
	$fdata["ownerTable"] = "royal_customer";
	$fdata["Label"] = GetFieldLabel("Eoc_royal_customers","type_arari_B");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "type_arari_B";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`royal_customer`.`type_arari_B`";

	
	
			
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








	$tdataEoc_royal_customers["type_arari_B"] = $fdata;
//	type_price_H
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 54;
	$fdata["strName"] = "type_price_H";
	$fdata["GoodName"] = "type_price_H";
	$fdata["ownerTable"] = "royal_customer";
	$fdata["Label"] = GetFieldLabel("Eoc_royal_customers","type_price_H");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "type_price_H";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`royal_customer`.`type_price_H`";

	
	
			
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








	$tdataEoc_royal_customers["type_price_H"] = $fdata;
//	type_arari_H
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 55;
	$fdata["strName"] = "type_arari_H";
	$fdata["GoodName"] = "type_arari_H";
	$fdata["ownerTable"] = "royal_customer";
	$fdata["Label"] = GetFieldLabel("Eoc_royal_customers","type_arari_H");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "type_arari_H";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`royal_customer`.`type_arari_H`";

	
	
			
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








	$tdataEoc_royal_customers["type_arari_H"] = $fdata;
//	type_price_other
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 56;
	$fdata["strName"] = "type_price_other";
	$fdata["GoodName"] = "type_price_other";
	$fdata["ownerTable"] = "royal_customer";
	$fdata["Label"] = GetFieldLabel("Eoc_royal_customers","type_price_other");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "type_price_other";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`royal_customer`.`type_price_other`";

	
	
			
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








	$tdataEoc_royal_customers["type_price_other"] = $fdata;
//	type_arari_other
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 57;
	$fdata["strName"] = "type_arari_other";
	$fdata["GoodName"] = "type_arari_other";
	$fdata["ownerTable"] = "royal_customer";
	$fdata["Label"] = GetFieldLabel("Eoc_royal_customers","type_arari_other");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "type_arari_other";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`royal_customer`.`type_arari_other`";

	
	
			
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








	$tdataEoc_royal_customers["type_arari_other"] = $fdata;
//	questquestion_count_very_satisfied
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 58;
	$fdata["strName"] = "questquestion_count_very_satisfied";
	$fdata["GoodName"] = "questquestion_count_very_satisfied";
	$fdata["ownerTable"] = "royal_customer";
	$fdata["Label"] = GetFieldLabel("Eoc_royal_customers","questquestion_count_very_satisfied");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "questquestion_count_very_satisfied";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`royal_customer`.`questquestion_count_very_satisfied`";

	
	
			
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








	$tdataEoc_royal_customers["questquestion_count_very_satisfied"] = $fdata;
//	questquestion_count_somewhat_satisfied
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 59;
	$fdata["strName"] = "questquestion_count_somewhat_satisfied";
	$fdata["GoodName"] = "questquestion_count_somewhat_satisfied";
	$fdata["ownerTable"] = "royal_customer";
	$fdata["Label"] = GetFieldLabel("Eoc_royal_customers","questquestion_count_somewhat_satisfied");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "questquestion_count_somewhat_satisfied";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`royal_customer`.`questquestion_count_somewhat_satisfied`";

	
	
			
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








	$tdataEoc_royal_customers["questquestion_count_somewhat_satisfied"] = $fdata;
//	questquestion_count_usually
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 60;
	$fdata["strName"] = "questquestion_count_usually";
	$fdata["GoodName"] = "questquestion_count_usually";
	$fdata["ownerTable"] = "royal_customer";
	$fdata["Label"] = GetFieldLabel("Eoc_royal_customers","questquestion_count_usually");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "questquestion_count_usually";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`royal_customer`.`questquestion_count_usually`";

	
	
			
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








	$tdataEoc_royal_customers["questquestion_count_usually"] = $fdata;
//	questquestion_count_somewhat_dissatisfied
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 61;
	$fdata["strName"] = "questquestion_count_somewhat_dissatisfied";
	$fdata["GoodName"] = "questquestion_count_somewhat_dissatisfied";
	$fdata["ownerTable"] = "royal_customer";
	$fdata["Label"] = GetFieldLabel("Eoc_royal_customers","questquestion_count_somewhat_dissatisfied");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "questquestion_count_somewhat_dissatisfied";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`royal_customer`.`questquestion_count_somewhat_dissatisfied`";

	
	
			
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








	$tdataEoc_royal_customers["questquestion_count_somewhat_dissatisfied"] = $fdata;
//	questquestion_count_complain
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 62;
	$fdata["strName"] = "questquestion_count_complain";
	$fdata["GoodName"] = "questquestion_count_complain";
	$fdata["ownerTable"] = "royal_customer";
	$fdata["Label"] = GetFieldLabel("Eoc_royal_customers","questquestion_count_complain");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "questquestion_count_complain";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`royal_customer`.`questquestion_count_complain`";

	
	
			
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








	$tdataEoc_royal_customers["questquestion_count_complain"] = $fdata;
//	rate_selling_count_EC
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 63;
	$fdata["strName"] = "rate_selling_count_EC";
	$fdata["GoodName"] = "rate_selling_count_EC";
	$fdata["ownerTable"] = "royal_customer";
	$fdata["Label"] = GetFieldLabel("Eoc_royal_customers","rate_selling_count_EC");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "rate_selling_count_EC";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`royal_customer`.`rate_selling_count_EC`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Percent");

	
	
	
	
	
	
	
	
	
	
	
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




	$tdataEoc_royal_customers["rate_selling_count_EC"] = $fdata;
//	rate_selling_count_ichiba
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 64;
	$fdata["strName"] = "rate_selling_count_ichiba";
	$fdata["GoodName"] = "rate_selling_count_ichiba";
	$fdata["ownerTable"] = "royal_customer";
	$fdata["Label"] = GetFieldLabel("Eoc_royal_customers","rate_selling_count_ichiba");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "rate_selling_count_ichiba";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`royal_customer`.`rate_selling_count_ichiba`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Percent");

	
	
	
	
	
	
	
	
	
	
	
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




	$tdataEoc_royal_customers["rate_selling_count_ichiba"] = $fdata;
//	rate_type_count_K
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 65;
	$fdata["strName"] = "rate_type_count_K";
	$fdata["GoodName"] = "rate_type_count_K";
	$fdata["ownerTable"] = "royal_customer";
	$fdata["Label"] = GetFieldLabel("Eoc_royal_customers","rate_type_count_K");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "rate_type_count_K";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`royal_customer`.`rate_type_count_K`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Percent");

	
	
	
	
	
	
	
	
	
	
	
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




	$tdataEoc_royal_customers["rate_type_count_K"] = $fdata;
//	rate_type_count_D
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 66;
	$fdata["strName"] = "rate_type_count_D";
	$fdata["GoodName"] = "rate_type_count_D";
	$fdata["ownerTable"] = "royal_customer";
	$fdata["Label"] = GetFieldLabel("Eoc_royal_customers","rate_type_count_D");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "rate_type_count_D";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`royal_customer`.`rate_type_count_D`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Percent");

	
	
	
	
	
	
	
	
	
	
	
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




	$tdataEoc_royal_customers["rate_type_count_D"] = $fdata;
//	rate_type_count_J
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 67;
	$fdata["strName"] = "rate_type_count_J";
	$fdata["GoodName"] = "rate_type_count_J";
	$fdata["ownerTable"] = "royal_customer";
	$fdata["Label"] = GetFieldLabel("Eoc_royal_customers","rate_type_count_J");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "rate_type_count_J";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`royal_customer`.`rate_type_count_J`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Percent");

	
	
	
	
	
	
	
	
	
	
	
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




	$tdataEoc_royal_customers["rate_type_count_J"] = $fdata;
//	rate_type_count_W
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 68;
	$fdata["strName"] = "rate_type_count_W";
	$fdata["GoodName"] = "rate_type_count_W";
	$fdata["ownerTable"] = "royal_customer";
	$fdata["Label"] = GetFieldLabel("Eoc_royal_customers","rate_type_count_W");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "rate_type_count_W";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`royal_customer`.`rate_type_count_W`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Percent");

	
	
	
	
	
	
	
	
	
	
	
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




	$tdataEoc_royal_customers["rate_type_count_W"] = $fdata;
//	rate_type_count_B
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 69;
	$fdata["strName"] = "rate_type_count_B";
	$fdata["GoodName"] = "rate_type_count_B";
	$fdata["ownerTable"] = "royal_customer";
	$fdata["Label"] = GetFieldLabel("Eoc_royal_customers","rate_type_count_B");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "rate_type_count_B";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`royal_customer`.`rate_type_count_B`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Percent");

	
	
	
	
	
	
	
	
	
	
	
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




	$tdataEoc_royal_customers["rate_type_count_B"] = $fdata;
//	rate_type_count_H
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 70;
	$fdata["strName"] = "rate_type_count_H";
	$fdata["GoodName"] = "rate_type_count_H";
	$fdata["ownerTable"] = "royal_customer";
	$fdata["Label"] = GetFieldLabel("Eoc_royal_customers","rate_type_count_H");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "rate_type_count_H";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`royal_customer`.`rate_type_count_H`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Percent");

	
	
	
	
	
	
	
	
	
	
	
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




	$tdataEoc_royal_customers["rate_type_count_H"] = $fdata;
//	rate_type_count_other
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 71;
	$fdata["strName"] = "rate_type_count_other";
	$fdata["GoodName"] = "rate_type_count_other";
	$fdata["ownerTable"] = "royal_customer";
	$fdata["Label"] = GetFieldLabel("Eoc_royal_customers","rate_type_count_other");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "rate_type_count_other";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`royal_customer`.`rate_type_count_other`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Percent");

	
	
	
	
	
	
	
	
	
	
	
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




	$tdataEoc_royal_customers["rate_type_count_other"] = $fdata;
//	royal_customer_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 72;
	$fdata["strName"] = "royal_customer_type";
	$fdata["GoodName"] = "royal_customer_type";
	$fdata["ownerTable"] = "royal_customer";
	$fdata["Label"] = GetFieldLabel("Eoc_royal_customers","royal_customer_type");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "royal_customer_type";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`royal_customer`.`royal_customer_type`";

	
	
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
	$edata["LookupTable"] = "royal_customer_type";
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




	$tdataEoc_royal_customers["royal_customer_type"] = $fdata;
//	ecc_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 73;
	$fdata["strName"] = "ecc_id";
	$fdata["GoodName"] = "ecc_id";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc_royal_customers","ecc_id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ecc_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc`.`ecc_id`";

	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataEoc_royal_customers["ecc_id"] = $fdata;
//	mail_check_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 74;
	$fdata["strName"] = "mail_check_type";
	$fdata["GoodName"] = "mail_check_type";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc_royal_customers","mail_check_type");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "mail_check_type";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc`.`mail_check_type`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "_mail_check_type";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

	
		
	$edata["LinkField"] = "mail_check_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "mail_check_name";

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataEoc_royal_customers["mail_check_type"] = $fdata;


$tables_data["Eoc_royal_customers"]=&$tdataEoc_royal_customers;
$field_labels["Eoc_royal_customers"] = &$fieldLabelsEoc_royal_customers;
$fieldToolTips["Eoc_royal_customers"] = &$fieldToolTipsEoc_royal_customers;
$placeHolders["Eoc_royal_customers"] = &$placeHoldersEoc_royal_customers;
$page_titles["Eoc_royal_customers"] = &$pageTitlesEoc_royal_customers;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Eoc_royal_customers"] = array();
//	analysisMail_tags
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="analysisMail_tags";
		$detailsParam["dOriginalTable"] = "analysisMail_tags";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "analysisMail_tags";
	$detailsParam["dCaptionTable"] = GetTableCaption("analysisMail_tags");
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
		
	$detailsTablesData["Eoc_royal_customers"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Eoc_royal_customers"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Eoc_royal_customers"][$dIndex]["masterKeys"][]="ecc_id";

				$detailsTablesData["Eoc_royal_customers"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Eoc_royal_customers"][$dIndex]["detailKeys"][]="ecc_id";

// tables which are master tables for current table (detail)
$masterTablesData["Eoc_royal_customers"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Eoc_royal_customers()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`royal_customer`.`ecc_id` AS `link`,  `Eoc`.`name1`,  `Eoc`.`name2`,  `Eoc`.`address1`,  `Eoc`.`address2`,  `Eoc`.`address3`,  `Eoc`.`tel`,  `Eoc`.`tel2`,  `Eoc`.`mail1`,  `Eoc`.`mail2`,  `Eoc`.`royal_customer_status`,  `royal_customer`.`gender`,  `royal_customer`.`age`,  `royal_customer`.`todou`,  `royal_customer`.`family`,  `royal_customer`.`income`,  `royal_customer`.`cumulative_earnings`,  `royal_customer`.`number_of_times`,  `royal_customer`.`close_rate`,  `royal_customer`.`LTV_prediction`,  `royal_customer`.`usage_period`,  `royal_customer`.`last_closing_date`,  `royal_customer`.`type_trend`,  `royal_customer`.`handling_number_of_brands`,  `royal_customer`.`trend_destination_of_selling`,  `royal_customer`.`questionnaire_quality`,  `royal_customer`.`updated_at`,  `royal_customer`.`updated_by`,  `royal_customer`.`created_at`,  `royal_customer`.`created_by`,  `royal_customer`.`selling_count_ec`,  `royal_customer`.`selling_count_ichiba`,  `royal_customer`.`type_count_K`,  `royal_customer`.`type_count_D`,  `royal_customer`.`type_count_J`,  `royal_customer`.`type_count_W`,  `royal_customer`.`type_count_B`,  `royal_customer`.`type_count_H`,  `royal_customer`.`type_count_other`,  `royal_customer`.`selling_price_ec`,  `royal_customer`.`selling_arari_ec`,  `royal_customer`.`selling_price_ichiba`,  `royal_customer`.`selling_arari_ichiba`,  `royal_customer`.`type_price_K`,  `royal_customer`.`type_arari_K`,  `royal_customer`.`type_price_D`,  `royal_customer`.`type_arari_D`,  `royal_customer`.`type_price_J`,  `royal_customer`.`type_arari_J`,  `royal_customer`.`type_price_W`,  `royal_customer`.`type_arari_W`,  `royal_customer`.`type_price_B`,  `royal_customer`.`type_arari_B`,  `royal_customer`.`type_price_H`,  `royal_customer`.`type_arari_H`,  `royal_customer`.`type_price_other`,  `royal_customer`.`type_arari_other`,  `royal_customer`.`questquestion_count_very_satisfied`,  `royal_customer`.`questquestion_count_somewhat_satisfied`,  `royal_customer`.`questquestion_count_usually`,  `royal_customer`.`questquestion_count_somewhat_dissatisfied`,  `royal_customer`.`questquestion_count_complain`,  `royal_customer`.`rate_selling_count_EC`,  `royal_customer`.`rate_selling_count_ichiba`,  `royal_customer`.`rate_type_count_K`,  `royal_customer`.`rate_type_count_D`,  `royal_customer`.`rate_type_count_J`,  `royal_customer`.`rate_type_count_W`,  `royal_customer`.`rate_type_count_B`,  `royal_customer`.`rate_type_count_H`,  `royal_customer`.`rate_type_count_other`,  `royal_customer`.`royal_customer_type`,  `Eoc`.`ecc_id`,  `Eoc`.`mail_check_type`";
$proto0["m_strFrom"] = "FROM `Eoc`  LEFT OUTER JOIN `royal_customer` ON `Eoc`.`ecc_id` = `royal_customer`.`ecc_id`";
$proto0["m_strWhere"] = "(`royal_customer`.`ecc_id` IS NOT NULL)";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "`royal_customer`.`ecc_id` IS NOT NULL";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "ecc_id",
	"m_strTable" => "royal_customer",
	"m_srcTableName" => "Eoc_royal_customers"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "IS NOT NULL";
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
	"m_strName" => "ecc_id",
	"m_strTable" => "royal_customer",
	"m_srcTableName" => "Eoc_royal_customers"
));

$proto6["m_sql"] = "`royal_customer`.`ecc_id`";
$proto6["m_srcTableName"] = "Eoc_royal_customers";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "link";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name1",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc_royal_customers"
));

$proto8["m_sql"] = "`Eoc`.`name1`";
$proto8["m_srcTableName"] = "Eoc_royal_customers";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "name2",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc_royal_customers"
));

$proto10["m_sql"] = "`Eoc`.`name2`";
$proto10["m_srcTableName"] = "Eoc_royal_customers";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "address1",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc_royal_customers"
));

$proto12["m_sql"] = "`Eoc`.`address1`";
$proto12["m_srcTableName"] = "Eoc_royal_customers";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "address2",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc_royal_customers"
));

$proto14["m_sql"] = "`Eoc`.`address2`";
$proto14["m_srcTableName"] = "Eoc_royal_customers";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "address3",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc_royal_customers"
));

$proto16["m_sql"] = "`Eoc`.`address3`";
$proto16["m_srcTableName"] = "Eoc_royal_customers";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "tel",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc_royal_customers"
));

$proto18["m_sql"] = "`Eoc`.`tel`";
$proto18["m_srcTableName"] = "Eoc_royal_customers";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "tel2",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc_royal_customers"
));

$proto20["m_sql"] = "`Eoc`.`tel2`";
$proto20["m_srcTableName"] = "Eoc_royal_customers";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "mail1",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc_royal_customers"
));

$proto22["m_sql"] = "`Eoc`.`mail1`";
$proto22["m_srcTableName"] = "Eoc_royal_customers";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "mail2",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc_royal_customers"
));

$proto24["m_sql"] = "`Eoc`.`mail2`";
$proto24["m_srcTableName"] = "Eoc_royal_customers";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "royal_customer_status",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc_royal_customers"
));

$proto26["m_sql"] = "`Eoc`.`royal_customer_status`";
$proto26["m_srcTableName"] = "Eoc_royal_customers";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "gender",
	"m_strTable" => "royal_customer",
	"m_srcTableName" => "Eoc_royal_customers"
));

$proto28["m_sql"] = "`royal_customer`.`gender`";
$proto28["m_srcTableName"] = "Eoc_royal_customers";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "age",
	"m_strTable" => "royal_customer",
	"m_srcTableName" => "Eoc_royal_customers"
));

$proto30["m_sql"] = "`royal_customer`.`age`";
$proto30["m_srcTableName"] = "Eoc_royal_customers";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "todou",
	"m_strTable" => "royal_customer",
	"m_srcTableName" => "Eoc_royal_customers"
));

$proto32["m_sql"] = "`royal_customer`.`todou`";
$proto32["m_srcTableName"] = "Eoc_royal_customers";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "family",
	"m_strTable" => "royal_customer",
	"m_srcTableName" => "Eoc_royal_customers"
));

$proto34["m_sql"] = "`royal_customer`.`family`";
$proto34["m_srcTableName"] = "Eoc_royal_customers";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "income",
	"m_strTable" => "royal_customer",
	"m_srcTableName" => "Eoc_royal_customers"
));

$proto36["m_sql"] = "`royal_customer`.`income`";
$proto36["m_srcTableName"] = "Eoc_royal_customers";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "cumulative_earnings",
	"m_strTable" => "royal_customer",
	"m_srcTableName" => "Eoc_royal_customers"
));

$proto38["m_sql"] = "`royal_customer`.`cumulative_earnings`";
$proto38["m_srcTableName"] = "Eoc_royal_customers";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "number_of_times",
	"m_strTable" => "royal_customer",
	"m_srcTableName" => "Eoc_royal_customers"
));

$proto40["m_sql"] = "`royal_customer`.`number_of_times`";
$proto40["m_srcTableName"] = "Eoc_royal_customers";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "close_rate",
	"m_strTable" => "royal_customer",
	"m_srcTableName" => "Eoc_royal_customers"
));

$proto42["m_sql"] = "`royal_customer`.`close_rate`";
$proto42["m_srcTableName"] = "Eoc_royal_customers";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "LTV_prediction",
	"m_strTable" => "royal_customer",
	"m_srcTableName" => "Eoc_royal_customers"
));

$proto44["m_sql"] = "`royal_customer`.`LTV_prediction`";
$proto44["m_srcTableName"] = "Eoc_royal_customers";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "usage_period",
	"m_strTable" => "royal_customer",
	"m_srcTableName" => "Eoc_royal_customers"
));

$proto46["m_sql"] = "`royal_customer`.`usage_period`";
$proto46["m_srcTableName"] = "Eoc_royal_customers";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "last_closing_date",
	"m_strTable" => "royal_customer",
	"m_srcTableName" => "Eoc_royal_customers"
));

$proto48["m_sql"] = "`royal_customer`.`last_closing_date`";
$proto48["m_srcTableName"] = "Eoc_royal_customers";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "type_trend",
	"m_strTable" => "royal_customer",
	"m_srcTableName" => "Eoc_royal_customers"
));

$proto50["m_sql"] = "`royal_customer`.`type_trend`";
$proto50["m_srcTableName"] = "Eoc_royal_customers";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "handling_number_of_brands",
	"m_strTable" => "royal_customer",
	"m_srcTableName" => "Eoc_royal_customers"
));

$proto52["m_sql"] = "`royal_customer`.`handling_number_of_brands`";
$proto52["m_srcTableName"] = "Eoc_royal_customers";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "trend_destination_of_selling",
	"m_strTable" => "royal_customer",
	"m_srcTableName" => "Eoc_royal_customers"
));

$proto54["m_sql"] = "`royal_customer`.`trend_destination_of_selling`";
$proto54["m_srcTableName"] = "Eoc_royal_customers";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "questionnaire_quality",
	"m_strTable" => "royal_customer",
	"m_srcTableName" => "Eoc_royal_customers"
));

$proto56["m_sql"] = "`royal_customer`.`questionnaire_quality`";
$proto56["m_srcTableName"] = "Eoc_royal_customers";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "royal_customer",
	"m_srcTableName" => "Eoc_royal_customers"
));

$proto58["m_sql"] = "`royal_customer`.`updated_at`";
$proto58["m_srcTableName"] = "Eoc_royal_customers";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by",
	"m_strTable" => "royal_customer",
	"m_srcTableName" => "Eoc_royal_customers"
));

$proto60["m_sql"] = "`royal_customer`.`updated_by`";
$proto60["m_srcTableName"] = "Eoc_royal_customers";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "royal_customer",
	"m_srcTableName" => "Eoc_royal_customers"
));

$proto62["m_sql"] = "`royal_customer`.`created_at`";
$proto62["m_srcTableName"] = "Eoc_royal_customers";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "created_by",
	"m_strTable" => "royal_customer",
	"m_srcTableName" => "Eoc_royal_customers"
));

$proto64["m_sql"] = "`royal_customer`.`created_by`";
$proto64["m_srcTableName"] = "Eoc_royal_customers";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "selling_count_ec",
	"m_strTable" => "royal_customer",
	"m_srcTableName" => "Eoc_royal_customers"
));

$proto66["m_sql"] = "`royal_customer`.`selling_count_ec`";
$proto66["m_srcTableName"] = "Eoc_royal_customers";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "selling_count_ichiba",
	"m_strTable" => "royal_customer",
	"m_srcTableName" => "Eoc_royal_customers"
));

$proto68["m_sql"] = "`royal_customer`.`selling_count_ichiba`";
$proto68["m_srcTableName"] = "Eoc_royal_customers";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "type_count_K",
	"m_strTable" => "royal_customer",
	"m_srcTableName" => "Eoc_royal_customers"
));

$proto70["m_sql"] = "`royal_customer`.`type_count_K`";
$proto70["m_srcTableName"] = "Eoc_royal_customers";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "type_count_D",
	"m_strTable" => "royal_customer",
	"m_srcTableName" => "Eoc_royal_customers"
));

$proto72["m_sql"] = "`royal_customer`.`type_count_D`";
$proto72["m_srcTableName"] = "Eoc_royal_customers";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "type_count_J",
	"m_strTable" => "royal_customer",
	"m_srcTableName" => "Eoc_royal_customers"
));

$proto74["m_sql"] = "`royal_customer`.`type_count_J`";
$proto74["m_srcTableName"] = "Eoc_royal_customers";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "type_count_W",
	"m_strTable" => "royal_customer",
	"m_srcTableName" => "Eoc_royal_customers"
));

$proto76["m_sql"] = "`royal_customer`.`type_count_W`";
$proto76["m_srcTableName"] = "Eoc_royal_customers";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "type_count_B",
	"m_strTable" => "royal_customer",
	"m_srcTableName" => "Eoc_royal_customers"
));

$proto78["m_sql"] = "`royal_customer`.`type_count_B`";
$proto78["m_srcTableName"] = "Eoc_royal_customers";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "type_count_H",
	"m_strTable" => "royal_customer",
	"m_srcTableName" => "Eoc_royal_customers"
));

$proto80["m_sql"] = "`royal_customer`.`type_count_H`";
$proto80["m_srcTableName"] = "Eoc_royal_customers";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "type_count_other",
	"m_strTable" => "royal_customer",
	"m_srcTableName" => "Eoc_royal_customers"
));

$proto82["m_sql"] = "`royal_customer`.`type_count_other`";
$proto82["m_srcTableName"] = "Eoc_royal_customers";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "selling_price_ec",
	"m_strTable" => "royal_customer",
	"m_srcTableName" => "Eoc_royal_customers"
));

$proto84["m_sql"] = "`royal_customer`.`selling_price_ec`";
$proto84["m_srcTableName"] = "Eoc_royal_customers";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "selling_arari_ec",
	"m_strTable" => "royal_customer",
	"m_srcTableName" => "Eoc_royal_customers"
));

$proto86["m_sql"] = "`royal_customer`.`selling_arari_ec`";
$proto86["m_srcTableName"] = "Eoc_royal_customers";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "selling_price_ichiba",
	"m_strTable" => "royal_customer",
	"m_srcTableName" => "Eoc_royal_customers"
));

$proto88["m_sql"] = "`royal_customer`.`selling_price_ichiba`";
$proto88["m_srcTableName"] = "Eoc_royal_customers";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "selling_arari_ichiba",
	"m_strTable" => "royal_customer",
	"m_srcTableName" => "Eoc_royal_customers"
));

$proto90["m_sql"] = "`royal_customer`.`selling_arari_ichiba`";
$proto90["m_srcTableName"] = "Eoc_royal_customers";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLField(array(
	"m_strName" => "type_price_K",
	"m_strTable" => "royal_customer",
	"m_srcTableName" => "Eoc_royal_customers"
));

$proto92["m_sql"] = "`royal_customer`.`type_price_K`";
$proto92["m_srcTableName"] = "Eoc_royal_customers";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "";
$obj = new SQLFieldListItem($proto92);

$proto0["m_fieldlist"][]=$obj;
						$proto94=array();
			$obj = new SQLField(array(
	"m_strName" => "type_arari_K",
	"m_strTable" => "royal_customer",
	"m_srcTableName" => "Eoc_royal_customers"
));

$proto94["m_sql"] = "`royal_customer`.`type_arari_K`";
$proto94["m_srcTableName"] = "Eoc_royal_customers";
$proto94["m_expr"]=$obj;
$proto94["m_alias"] = "";
$obj = new SQLFieldListItem($proto94);

$proto0["m_fieldlist"][]=$obj;
						$proto96=array();
			$obj = new SQLField(array(
	"m_strName" => "type_price_D",
	"m_strTable" => "royal_customer",
	"m_srcTableName" => "Eoc_royal_customers"
));

$proto96["m_sql"] = "`royal_customer`.`type_price_D`";
$proto96["m_srcTableName"] = "Eoc_royal_customers";
$proto96["m_expr"]=$obj;
$proto96["m_alias"] = "";
$obj = new SQLFieldListItem($proto96);

$proto0["m_fieldlist"][]=$obj;
						$proto98=array();
			$obj = new SQLField(array(
	"m_strName" => "type_arari_D",
	"m_strTable" => "royal_customer",
	"m_srcTableName" => "Eoc_royal_customers"
));

$proto98["m_sql"] = "`royal_customer`.`type_arari_D`";
$proto98["m_srcTableName"] = "Eoc_royal_customers";
$proto98["m_expr"]=$obj;
$proto98["m_alias"] = "";
$obj = new SQLFieldListItem($proto98);

$proto0["m_fieldlist"][]=$obj;
						$proto100=array();
			$obj = new SQLField(array(
	"m_strName" => "type_price_J",
	"m_strTable" => "royal_customer",
	"m_srcTableName" => "Eoc_royal_customers"
));

$proto100["m_sql"] = "`royal_customer`.`type_price_J`";
$proto100["m_srcTableName"] = "Eoc_royal_customers";
$proto100["m_expr"]=$obj;
$proto100["m_alias"] = "";
$obj = new SQLFieldListItem($proto100);

$proto0["m_fieldlist"][]=$obj;
						$proto102=array();
			$obj = new SQLField(array(
	"m_strName" => "type_arari_J",
	"m_strTable" => "royal_customer",
	"m_srcTableName" => "Eoc_royal_customers"
));

$proto102["m_sql"] = "`royal_customer`.`type_arari_J`";
$proto102["m_srcTableName"] = "Eoc_royal_customers";
$proto102["m_expr"]=$obj;
$proto102["m_alias"] = "";
$obj = new SQLFieldListItem($proto102);

$proto0["m_fieldlist"][]=$obj;
						$proto104=array();
			$obj = new SQLField(array(
	"m_strName" => "type_price_W",
	"m_strTable" => "royal_customer",
	"m_srcTableName" => "Eoc_royal_customers"
));

$proto104["m_sql"] = "`royal_customer`.`type_price_W`";
$proto104["m_srcTableName"] = "Eoc_royal_customers";
$proto104["m_expr"]=$obj;
$proto104["m_alias"] = "";
$obj = new SQLFieldListItem($proto104);

$proto0["m_fieldlist"][]=$obj;
						$proto106=array();
			$obj = new SQLField(array(
	"m_strName" => "type_arari_W",
	"m_strTable" => "royal_customer",
	"m_srcTableName" => "Eoc_royal_customers"
));

$proto106["m_sql"] = "`royal_customer`.`type_arari_W`";
$proto106["m_srcTableName"] = "Eoc_royal_customers";
$proto106["m_expr"]=$obj;
$proto106["m_alias"] = "";
$obj = new SQLFieldListItem($proto106);

$proto0["m_fieldlist"][]=$obj;
						$proto108=array();
			$obj = new SQLField(array(
	"m_strName" => "type_price_B",
	"m_strTable" => "royal_customer",
	"m_srcTableName" => "Eoc_royal_customers"
));

$proto108["m_sql"] = "`royal_customer`.`type_price_B`";
$proto108["m_srcTableName"] = "Eoc_royal_customers";
$proto108["m_expr"]=$obj;
$proto108["m_alias"] = "";
$obj = new SQLFieldListItem($proto108);

$proto0["m_fieldlist"][]=$obj;
						$proto110=array();
			$obj = new SQLField(array(
	"m_strName" => "type_arari_B",
	"m_strTable" => "royal_customer",
	"m_srcTableName" => "Eoc_royal_customers"
));

$proto110["m_sql"] = "`royal_customer`.`type_arari_B`";
$proto110["m_srcTableName"] = "Eoc_royal_customers";
$proto110["m_expr"]=$obj;
$proto110["m_alias"] = "";
$obj = new SQLFieldListItem($proto110);

$proto0["m_fieldlist"][]=$obj;
						$proto112=array();
			$obj = new SQLField(array(
	"m_strName" => "type_price_H",
	"m_strTable" => "royal_customer",
	"m_srcTableName" => "Eoc_royal_customers"
));

$proto112["m_sql"] = "`royal_customer`.`type_price_H`";
$proto112["m_srcTableName"] = "Eoc_royal_customers";
$proto112["m_expr"]=$obj;
$proto112["m_alias"] = "";
$obj = new SQLFieldListItem($proto112);

$proto0["m_fieldlist"][]=$obj;
						$proto114=array();
			$obj = new SQLField(array(
	"m_strName" => "type_arari_H",
	"m_strTable" => "royal_customer",
	"m_srcTableName" => "Eoc_royal_customers"
));

$proto114["m_sql"] = "`royal_customer`.`type_arari_H`";
$proto114["m_srcTableName"] = "Eoc_royal_customers";
$proto114["m_expr"]=$obj;
$proto114["m_alias"] = "";
$obj = new SQLFieldListItem($proto114);

$proto0["m_fieldlist"][]=$obj;
						$proto116=array();
			$obj = new SQLField(array(
	"m_strName" => "type_price_other",
	"m_strTable" => "royal_customer",
	"m_srcTableName" => "Eoc_royal_customers"
));

$proto116["m_sql"] = "`royal_customer`.`type_price_other`";
$proto116["m_srcTableName"] = "Eoc_royal_customers";
$proto116["m_expr"]=$obj;
$proto116["m_alias"] = "";
$obj = new SQLFieldListItem($proto116);

$proto0["m_fieldlist"][]=$obj;
						$proto118=array();
			$obj = new SQLField(array(
	"m_strName" => "type_arari_other",
	"m_strTable" => "royal_customer",
	"m_srcTableName" => "Eoc_royal_customers"
));

$proto118["m_sql"] = "`royal_customer`.`type_arari_other`";
$proto118["m_srcTableName"] = "Eoc_royal_customers";
$proto118["m_expr"]=$obj;
$proto118["m_alias"] = "";
$obj = new SQLFieldListItem($proto118);

$proto0["m_fieldlist"][]=$obj;
						$proto120=array();
			$obj = new SQLField(array(
	"m_strName" => "questquestion_count_very_satisfied",
	"m_strTable" => "royal_customer",
	"m_srcTableName" => "Eoc_royal_customers"
));

$proto120["m_sql"] = "`royal_customer`.`questquestion_count_very_satisfied`";
$proto120["m_srcTableName"] = "Eoc_royal_customers";
$proto120["m_expr"]=$obj;
$proto120["m_alias"] = "";
$obj = new SQLFieldListItem($proto120);

$proto0["m_fieldlist"][]=$obj;
						$proto122=array();
			$obj = new SQLField(array(
	"m_strName" => "questquestion_count_somewhat_satisfied",
	"m_strTable" => "royal_customer",
	"m_srcTableName" => "Eoc_royal_customers"
));

$proto122["m_sql"] = "`royal_customer`.`questquestion_count_somewhat_satisfied`";
$proto122["m_srcTableName"] = "Eoc_royal_customers";
$proto122["m_expr"]=$obj;
$proto122["m_alias"] = "";
$obj = new SQLFieldListItem($proto122);

$proto0["m_fieldlist"][]=$obj;
						$proto124=array();
			$obj = new SQLField(array(
	"m_strName" => "questquestion_count_usually",
	"m_strTable" => "royal_customer",
	"m_srcTableName" => "Eoc_royal_customers"
));

$proto124["m_sql"] = "`royal_customer`.`questquestion_count_usually`";
$proto124["m_srcTableName"] = "Eoc_royal_customers";
$proto124["m_expr"]=$obj;
$proto124["m_alias"] = "";
$obj = new SQLFieldListItem($proto124);

$proto0["m_fieldlist"][]=$obj;
						$proto126=array();
			$obj = new SQLField(array(
	"m_strName" => "questquestion_count_somewhat_dissatisfied",
	"m_strTable" => "royal_customer",
	"m_srcTableName" => "Eoc_royal_customers"
));

$proto126["m_sql"] = "`royal_customer`.`questquestion_count_somewhat_dissatisfied`";
$proto126["m_srcTableName"] = "Eoc_royal_customers";
$proto126["m_expr"]=$obj;
$proto126["m_alias"] = "";
$obj = new SQLFieldListItem($proto126);

$proto0["m_fieldlist"][]=$obj;
						$proto128=array();
			$obj = new SQLField(array(
	"m_strName" => "questquestion_count_complain",
	"m_strTable" => "royal_customer",
	"m_srcTableName" => "Eoc_royal_customers"
));

$proto128["m_sql"] = "`royal_customer`.`questquestion_count_complain`";
$proto128["m_srcTableName"] = "Eoc_royal_customers";
$proto128["m_expr"]=$obj;
$proto128["m_alias"] = "";
$obj = new SQLFieldListItem($proto128);

$proto0["m_fieldlist"][]=$obj;
						$proto130=array();
			$obj = new SQLField(array(
	"m_strName" => "rate_selling_count_EC",
	"m_strTable" => "royal_customer",
	"m_srcTableName" => "Eoc_royal_customers"
));

$proto130["m_sql"] = "`royal_customer`.`rate_selling_count_EC`";
$proto130["m_srcTableName"] = "Eoc_royal_customers";
$proto130["m_expr"]=$obj;
$proto130["m_alias"] = "";
$obj = new SQLFieldListItem($proto130);

$proto0["m_fieldlist"][]=$obj;
						$proto132=array();
			$obj = new SQLField(array(
	"m_strName" => "rate_selling_count_ichiba",
	"m_strTable" => "royal_customer",
	"m_srcTableName" => "Eoc_royal_customers"
));

$proto132["m_sql"] = "`royal_customer`.`rate_selling_count_ichiba`";
$proto132["m_srcTableName"] = "Eoc_royal_customers";
$proto132["m_expr"]=$obj;
$proto132["m_alias"] = "";
$obj = new SQLFieldListItem($proto132);

$proto0["m_fieldlist"][]=$obj;
						$proto134=array();
			$obj = new SQLField(array(
	"m_strName" => "rate_type_count_K",
	"m_strTable" => "royal_customer",
	"m_srcTableName" => "Eoc_royal_customers"
));

$proto134["m_sql"] = "`royal_customer`.`rate_type_count_K`";
$proto134["m_srcTableName"] = "Eoc_royal_customers";
$proto134["m_expr"]=$obj;
$proto134["m_alias"] = "";
$obj = new SQLFieldListItem($proto134);

$proto0["m_fieldlist"][]=$obj;
						$proto136=array();
			$obj = new SQLField(array(
	"m_strName" => "rate_type_count_D",
	"m_strTable" => "royal_customer",
	"m_srcTableName" => "Eoc_royal_customers"
));

$proto136["m_sql"] = "`royal_customer`.`rate_type_count_D`";
$proto136["m_srcTableName"] = "Eoc_royal_customers";
$proto136["m_expr"]=$obj;
$proto136["m_alias"] = "";
$obj = new SQLFieldListItem($proto136);

$proto0["m_fieldlist"][]=$obj;
						$proto138=array();
			$obj = new SQLField(array(
	"m_strName" => "rate_type_count_J",
	"m_strTable" => "royal_customer",
	"m_srcTableName" => "Eoc_royal_customers"
));

$proto138["m_sql"] = "`royal_customer`.`rate_type_count_J`";
$proto138["m_srcTableName"] = "Eoc_royal_customers";
$proto138["m_expr"]=$obj;
$proto138["m_alias"] = "";
$obj = new SQLFieldListItem($proto138);

$proto0["m_fieldlist"][]=$obj;
						$proto140=array();
			$obj = new SQLField(array(
	"m_strName" => "rate_type_count_W",
	"m_strTable" => "royal_customer",
	"m_srcTableName" => "Eoc_royal_customers"
));

$proto140["m_sql"] = "`royal_customer`.`rate_type_count_W`";
$proto140["m_srcTableName"] = "Eoc_royal_customers";
$proto140["m_expr"]=$obj;
$proto140["m_alias"] = "";
$obj = new SQLFieldListItem($proto140);

$proto0["m_fieldlist"][]=$obj;
						$proto142=array();
			$obj = new SQLField(array(
	"m_strName" => "rate_type_count_B",
	"m_strTable" => "royal_customer",
	"m_srcTableName" => "Eoc_royal_customers"
));

$proto142["m_sql"] = "`royal_customer`.`rate_type_count_B`";
$proto142["m_srcTableName"] = "Eoc_royal_customers";
$proto142["m_expr"]=$obj;
$proto142["m_alias"] = "";
$obj = new SQLFieldListItem($proto142);

$proto0["m_fieldlist"][]=$obj;
						$proto144=array();
			$obj = new SQLField(array(
	"m_strName" => "rate_type_count_H",
	"m_strTable" => "royal_customer",
	"m_srcTableName" => "Eoc_royal_customers"
));

$proto144["m_sql"] = "`royal_customer`.`rate_type_count_H`";
$proto144["m_srcTableName"] = "Eoc_royal_customers";
$proto144["m_expr"]=$obj;
$proto144["m_alias"] = "";
$obj = new SQLFieldListItem($proto144);

$proto0["m_fieldlist"][]=$obj;
						$proto146=array();
			$obj = new SQLField(array(
	"m_strName" => "rate_type_count_other",
	"m_strTable" => "royal_customer",
	"m_srcTableName" => "Eoc_royal_customers"
));

$proto146["m_sql"] = "`royal_customer`.`rate_type_count_other`";
$proto146["m_srcTableName"] = "Eoc_royal_customers";
$proto146["m_expr"]=$obj;
$proto146["m_alias"] = "";
$obj = new SQLFieldListItem($proto146);

$proto0["m_fieldlist"][]=$obj;
						$proto148=array();
			$obj = new SQLField(array(
	"m_strName" => "royal_customer_type",
	"m_strTable" => "royal_customer",
	"m_srcTableName" => "Eoc_royal_customers"
));

$proto148["m_sql"] = "`royal_customer`.`royal_customer_type`";
$proto148["m_srcTableName"] = "Eoc_royal_customers";
$proto148["m_expr"]=$obj;
$proto148["m_alias"] = "";
$obj = new SQLFieldListItem($proto148);

$proto0["m_fieldlist"][]=$obj;
						$proto150=array();
			$obj = new SQLField(array(
	"m_strName" => "ecc_id",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc_royal_customers"
));

$proto150["m_sql"] = "`Eoc`.`ecc_id`";
$proto150["m_srcTableName"] = "Eoc_royal_customers";
$proto150["m_expr"]=$obj;
$proto150["m_alias"] = "";
$obj = new SQLFieldListItem($proto150);

$proto0["m_fieldlist"][]=$obj;
						$proto152=array();
			$obj = new SQLField(array(
	"m_strName" => "mail_check_type",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc_royal_customers"
));

$proto152["m_sql"] = "`Eoc`.`mail_check_type`";
$proto152["m_srcTableName"] = "Eoc_royal_customers";
$proto152["m_expr"]=$obj;
$proto152["m_alias"] = "";
$obj = new SQLFieldListItem($proto152);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto154=array();
$proto154["m_link"] = "SQLL_MAIN";
			$proto155=array();
$proto155["m_strName"] = "Eoc";
$proto155["m_srcTableName"] = "Eoc_royal_customers";
$proto155["m_columns"] = array();
$proto155["m_columns"][] = "ecc_id";
$proto155["m_columns"][] = "ecc_seq";
$proto155["m_columns"][] = "name1";
$proto155["m_columns"][] = "created_t";
$proto155["m_columns"][] = "registerd_id";
$proto155["m_columns"][] = "kaitori_staff_id";
$proto155["m_columns"][] = "name2";
$proto155["m_columns"][] = "wareki";
$proto155["m_columns"][] = "b1";
$proto155["m_columns"][] = "b2";
$proto155["m_columns"][] = "b3";
$proto155["m_columns"][] = "birth_day";
$proto155["m_columns"][] = "age";
$proto155["m_columns"][] = "zip";
$proto155["m_columns"][] = "zip1";
$proto155["m_columns"][] = "zip2";
$proto155["m_columns"][] = "address1";
$proto155["m_columns"][] = "address2";
$proto155["m_columns"][] = "address3";
$proto155["m_columns"][] = "tel";
$proto155["m_columns"][] = "tel2";
$proto155["m_columns"][] = "mail1";
$proto155["m_columns"][] = "mail2";
$proto155["m_columns"][] = "address_code";
$proto155["m_columns"][] = "bank_name";
$proto155["m_columns"][] = "bank_blunch_code";
$proto155["m_columns"][] = "bank_yokin_shubetu";
$proto155["m_columns"][] = "bank_account";
$proto155["m_columns"][] = "bank_acoount_name";
$proto155["m_columns"][] = "haisou_bangou";
$proto155["m_columns"][] = "sise_houhou";
$proto155["m_columns"][] = "hentou_houhou";
$proto155["m_columns"][] = "hentou_houhou_time";
$proto155["m_columns"][] = "mousikomi_id";
$proto155["m_columns"][] = "hituyou_shorui";
$proto155["m_columns"][] = "seiyaku_fuseiritu";
$proto155["m_columns"][] = "mitumori_taku";
$proto155["m_columns"][] = "seacanse";
$proto155["m_columns"][] = "remark";
$proto155["m_columns"][] = "type";
$proto155["m_columns"][] = "sales_flag";
$proto155["m_columns"][] = "src_type";
$proto155["m_columns"][] = "liquidation_shop_code";
$proto155["m_columns"][] = "insurance_amount_print";
$proto155["m_columns"][] = "jis_code";
$proto155["m_columns"][] = "updated_at";
$proto155["m_columns"][] = "_registerd_id";
$proto155["m_columns"][] = "mail_check_type";
$proto155["m_columns"][] = "purchase_type";
$proto155["m_columns"][] = "sex";
$proto155["m_columns"][] = "m_tel";
$proto155["m_columns"][] = "fax";
$proto155["m_columns"][] = "chigin_kaitori";
$proto155["m_columns"][] = "option1";
$proto155["m_columns"][] = "option2";
$proto155["m_columns"][] = "option3";
$proto155["m_columns"][] = "option4";
$proto155["m_columns"][] = "option5";
$proto155["m_columns"][] = "option6";
$proto155["m_columns"][] = "option7";
$proto155["m_columns"][] = "option8";
$proto155["m_columns"][] = "option9";
$proto155["m_columns"][] = "option10";
$proto155["m_columns"][] = "option11";
$proto155["m_columns"][] = "option12";
$proto155["m_columns"][] = "option13";
$proto155["m_columns"][] = "rakuda_csv_flag";
$proto155["m_columns"][] = "EOC_COURIER_CHECK";
$proto155["m_columns"][] = "EOC_SIZE";
$proto155["m_columns"][] = "EOC_NUMBER";
$proto155["m_columns"][] = "EOC_REUSE";
$proto155["m_columns"][] = "EOC__DELIVERY_DATES";
$proto155["m_columns"][] = "EOC_SPECIFIED_TIME";
$proto155["m_columns"][] = "FIRST_NAME2";
$proto155["m_columns"][] = "LAST_NAME2";
$proto155["m_columns"][] = "EOC__DATE_AND_TIME_2";
$proto155["m_columns"][] = "EOC__BOX_NUMBER";
$proto155["m_columns"][] = "FIRST_NAME_KANA";
$proto155["m_columns"][] = "LAST_NAME_KANA";
$proto155["m_columns"][] = "FLAG_SPEED";
$proto155["m_columns"][] = "SEARCH_MEDIA";
$proto155["m_columns"][] = "SEARCH_SITE";
$proto155["m_columns"][] = "UN_REACHABLE";
$proto155["m_columns"][] = "FLG_MAIL_SAGAWA";
$proto155["m_columns"][] = "FLG_MAIL_OTHER";
$proto155["m_columns"][] = "ALLSEIYAKU";
$proto155["m_columns"][] = "ICHIBUSEIYAKU";
$proto155["m_columns"][] = "seiyakukin";
$proto155["m_columns"][] = "kaitorihuka";
$proto155["m_columns"][] = "awazu_date";
$proto155["m_columns"][] = "seiyaku_price";
$proto155["m_columns"][] = "eoc_search_keyword";
$proto155["m_columns"][] = "sonota";
$proto155["m_columns"][] = "size_kosuu";
$proto155["m_columns"][] = "sagawa_shuuka_flag";
$proto155["m_columns"][] = "line_check";
$proto155["m_columns"][] = "sagawa_shuukairai_denwabangou";
$proto155["m_columns"][] = "kaitori_sougak";
$proto155["m_columns"][] = "flag";
$proto155["m_columns"][] = "key_code";
$proto155["m_columns"][] = "dm_check_type";
$proto155["m_columns"][] = "kit_flag";
$proto155["m_columns"][] = "kit_done_flag";
$proto155["m_columns"][] = "bank_details_code";
$proto155["m_columns"][] = "bank_details_blunch_name";
$proto155["m_columns"][] = "bank_details_blunch_code";
$proto155["m_columns"][] = "bank_details_account_number";
$proto155["m_columns"][] = "bank_details_symbol";
$proto155["m_columns"][] = "bank_details_number";
$proto155["m_columns"][] = "bank_details_account_name";
$proto155["m_columns"][] = "bank_details_deposit_type";
$proto155["m_columns"][] = "mypage_id";
$proto155["m_columns"][] = "UN_REACHABLE_brand";
$proto155["m_columns"][] = "sagawa_haisou_hoken";
$proto155["m_columns"][] = "transfer_confirm";
$proto155["m_columns"][] = "outside_bank";
$proto155["m_columns"][] = "new_name";
$proto155["m_columns"][] = "letterpack";
$proto155["m_columns"][] = "satei_saisoku_2_days";
$proto155["m_columns"][] = "satei_saisoku_7_days";
$proto155["m_columns"][] = "accept_flag";
$proto155["m_columns"][] = "delivery_flag";
$proto155["m_columns"][] = "refining_weight";
$proto155["m_columns"][] = "line_chat_url";
$proto155["m_columns"][] = "royal_customer_status";
$proto155["m_columns"][] = "is_business_customer";
$proto155["m_columns"][] = "is_exist_haisouhosyo";
$proto155["m_columns"][] = "meigi_hankaku_kana";
$proto155["m_columns"][] = "building_types";
$proto155["m_columns"][] = "dwelling_types";
$proto155["m_columns"][] = "is_yamato_csv";
$proto155["m_columns"][] = "is_seiren_csv";
$obj = new SQLTable($proto155);

$proto154["m_table"] = $obj;
$proto154["m_sql"] = "`Eoc`";
$proto154["m_alias"] = "";
$proto154["m_srcTableName"] = "Eoc_royal_customers";
$proto156=array();
$proto156["m_sql"] = "";
$proto156["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto156["m_column"]=$obj;
$proto156["m_contained"] = array();
$proto156["m_strCase"] = "";
$proto156["m_havingmode"] = false;
$proto156["m_inBrackets"] = false;
$proto156["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto156);

$proto154["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto154);

$proto0["m_fromlist"][]=$obj;
												$proto158=array();
$proto158["m_link"] = "SQLL_LEFTJOIN";
			$proto159=array();
$proto159["m_strName"] = "royal_customer";
$proto159["m_srcTableName"] = "Eoc_royal_customers";
$proto159["m_columns"] = array();
$proto159["m_columns"][] = "ecc_id";
$proto159["m_columns"][] = "gender";
$proto159["m_columns"][] = "age";
$proto159["m_columns"][] = "todou";
$proto159["m_columns"][] = "family";
$proto159["m_columns"][] = "income";
$proto159["m_columns"][] = "cumulative_earnings";
$proto159["m_columns"][] = "number_of_times";
$proto159["m_columns"][] = "close_rate";
$proto159["m_columns"][] = "LTV_prediction";
$proto159["m_columns"][] = "usage_period";
$proto159["m_columns"][] = "last_closing_date";
$proto159["m_columns"][] = "type_trend";
$proto159["m_columns"][] = "handling_number_of_brands";
$proto159["m_columns"][] = "trend_destination_of_selling";
$proto159["m_columns"][] = "questionnaire_quality";
$proto159["m_columns"][] = "updated_at";
$proto159["m_columns"][] = "updated_by";
$proto159["m_columns"][] = "created_at";
$proto159["m_columns"][] = "created_by";
$proto159["m_columns"][] = "selling_count_ec";
$proto159["m_columns"][] = "selling_count_ichiba";
$proto159["m_columns"][] = "type_count_K";
$proto159["m_columns"][] = "type_count_D";
$proto159["m_columns"][] = "type_count_J";
$proto159["m_columns"][] = "type_count_W";
$proto159["m_columns"][] = "type_count_B";
$proto159["m_columns"][] = "type_count_H";
$proto159["m_columns"][] = "type_count_other";
$proto159["m_columns"][] = "selling_price_ec";
$proto159["m_columns"][] = "selling_arari_ec";
$proto159["m_columns"][] = "selling_price_ichiba";
$proto159["m_columns"][] = "selling_arari_ichiba";
$proto159["m_columns"][] = "type_price_K";
$proto159["m_columns"][] = "type_arari_K";
$proto159["m_columns"][] = "type_price_D";
$proto159["m_columns"][] = "type_arari_D";
$proto159["m_columns"][] = "type_price_J";
$proto159["m_columns"][] = "type_arari_J";
$proto159["m_columns"][] = "type_price_W";
$proto159["m_columns"][] = "type_arari_W";
$proto159["m_columns"][] = "type_price_B";
$proto159["m_columns"][] = "type_arari_B";
$proto159["m_columns"][] = "type_price_H";
$proto159["m_columns"][] = "type_arari_H";
$proto159["m_columns"][] = "type_price_other";
$proto159["m_columns"][] = "type_arari_other";
$proto159["m_columns"][] = "questquestion_count_very_satisfied";
$proto159["m_columns"][] = "questquestion_count_somewhat_satisfied";
$proto159["m_columns"][] = "questquestion_count_usually";
$proto159["m_columns"][] = "questquestion_count_somewhat_dissatisfied";
$proto159["m_columns"][] = "questquestion_count_complain";
$proto159["m_columns"][] = "rate_selling_count_EC";
$proto159["m_columns"][] = "rate_selling_count_ichiba";
$proto159["m_columns"][] = "rate_type_count_K";
$proto159["m_columns"][] = "rate_type_count_D";
$proto159["m_columns"][] = "rate_type_count_J";
$proto159["m_columns"][] = "rate_type_count_W";
$proto159["m_columns"][] = "rate_type_count_B";
$proto159["m_columns"][] = "rate_type_count_H";
$proto159["m_columns"][] = "rate_type_count_other";
$proto159["m_columns"][] = "royal_customer_type";
$obj = new SQLTable($proto159);

$proto158["m_table"] = $obj;
$proto158["m_sql"] = "LEFT OUTER JOIN `royal_customer` ON `Eoc`.`ecc_id` = `royal_customer`.`ecc_id`";
$proto158["m_alias"] = "";
$proto158["m_srcTableName"] = "Eoc_royal_customers";
$proto160=array();
$proto160["m_sql"] = "`Eoc`.`ecc_id` = `royal_customer`.`ecc_id`";
$proto160["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "ecc_id",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc_royal_customers"
));

$proto160["m_column"]=$obj;
$proto160["m_contained"] = array();
$proto160["m_strCase"] = "= `royal_customer`.`ecc_id`";
$proto160["m_havingmode"] = false;
$proto160["m_inBrackets"] = false;
$proto160["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto160);

$proto158["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto158);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Eoc_royal_customers";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Eoc_royal_customers = createSqlQuery_Eoc_royal_customers();


	
		;

																																																																										

$tdataEoc_royal_customers[".sqlquery"] = $queryData_Eoc_royal_customers;

include_once(getabspath("include/Eoc_royal_customers_events.php"));
$tableEvents["Eoc_royal_customers"] = new eventclass_Eoc_royal_customers;
$tdataEoc_royal_customers[".hasEvents"] = true;

?>