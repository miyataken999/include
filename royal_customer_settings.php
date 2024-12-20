<?php
require_once(getabspath("classes/cipherer.php"));




$tdataroyal_customer = array();
	$tdataroyal_customer[".truncateText"] = true;
	$tdataroyal_customer[".NumberOfChars"] = 80;
	$tdataroyal_customer[".ShortName"] = "royal_customer";
	$tdataroyal_customer[".OwnerID"] = "";
	$tdataroyal_customer[".OriginalTable"] = "royal_customer";

//	field labels
$fieldLabelsroyal_customer = array();
$fieldToolTipsroyal_customer = array();
$pageTitlesroyal_customer = array();
$placeHoldersroyal_customer = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsroyal_customer["Japanese"] = array();
	$fieldToolTipsroyal_customer["Japanese"] = array();
	$placeHoldersroyal_customer["Japanese"] = array();
	$pageTitlesroyal_customer["Japanese"] = array();
	$fieldLabelsroyal_customer["Japanese"]["ecc_id"] = "顧客SEQ";
	$fieldToolTipsroyal_customer["Japanese"]["ecc_id"] = "";
	$placeHoldersroyal_customer["Japanese"]["ecc_id"] = "";
	$fieldLabelsroyal_customer["Japanese"]["gender"] = "性別";
	$fieldToolTipsroyal_customer["Japanese"]["gender"] = "";
	$placeHoldersroyal_customer["Japanese"]["gender"] = "";
	$fieldLabelsroyal_customer["Japanese"]["age"] = "年齢";
	$fieldToolTipsroyal_customer["Japanese"]["age"] = "";
	$placeHoldersroyal_customer["Japanese"]["age"] = "";
	$fieldLabelsroyal_customer["Japanese"]["todou"] = "居住地域";
	$fieldToolTipsroyal_customer["Japanese"]["todou"] = "";
	$placeHoldersroyal_customer["Japanese"]["todou"] = "";
	$fieldLabelsroyal_customer["Japanese"]["family"] = "家族構成";
	$fieldToolTipsroyal_customer["Japanese"]["family"] = "";
	$placeHoldersroyal_customer["Japanese"]["family"] = "";
	$fieldLabelsroyal_customer["Japanese"]["income"] = "年収";
	$fieldToolTipsroyal_customer["Japanese"]["income"] = "";
	$placeHoldersroyal_customer["Japanese"]["income"] = "";
	$fieldLabelsroyal_customer["Japanese"]["cumulative_earnings"] = "累積利益";
	$fieldToolTipsroyal_customer["Japanese"]["cumulative_earnings"] = "";
	$placeHoldersroyal_customer["Japanese"]["cumulative_earnings"] = "";
	$fieldLabelsroyal_customer["Japanese"]["number_of_times"] = "リピート回数";
	$fieldToolTipsroyal_customer["Japanese"]["number_of_times"] = "";
	$placeHoldersroyal_customer["Japanese"]["number_of_times"] = "";
	$fieldLabelsroyal_customer["Japanese"]["close_rate"] = "成約率";
	$fieldToolTipsroyal_customer["Japanese"]["close_rate"] = "";
	$placeHoldersroyal_customer["Japanese"]["close_rate"] = "";
	$fieldLabelsroyal_customer["Japanese"]["LTV_prediction"] = "LTV予測";
	$fieldToolTipsroyal_customer["Japanese"]["LTV_prediction"] = "";
	$placeHoldersroyal_customer["Japanese"]["LTV_prediction"] = "";
	$fieldLabelsroyal_customer["Japanese"]["usage_period"] = "利用期間";
	$fieldToolTipsroyal_customer["Japanese"]["usage_period"] = "";
	$placeHoldersroyal_customer["Japanese"]["usage_period"] = "";
	$fieldLabelsroyal_customer["Japanese"]["last_closing_date"] = "直近成約日";
	$fieldToolTipsroyal_customer["Japanese"]["last_closing_date"] = "";
	$placeHoldersroyal_customer["Japanese"]["last_closing_date"] = "";
	$fieldLabelsroyal_customer["Japanese"]["type_trend"] = "Type Trend";
	$fieldToolTipsroyal_customer["Japanese"]["type_trend"] = "";
	$placeHoldersroyal_customer["Japanese"]["type_trend"] = "";
	$fieldLabelsroyal_customer["Japanese"]["handling_number_of_brands"] = "ブランド数";
	$fieldToolTipsroyal_customer["Japanese"]["handling_number_of_brands"] = "";
	$placeHoldersroyal_customer["Japanese"]["handling_number_of_brands"] = "";
	$fieldLabelsroyal_customer["Japanese"]["trend_destination_of_selling"] = "Trend Destination Of Selling";
	$fieldToolTipsroyal_customer["Japanese"]["trend_destination_of_selling"] = "";
	$placeHoldersroyal_customer["Japanese"]["trend_destination_of_selling"] = "";
	$fieldLabelsroyal_customer["Japanese"]["questionnaire_quality"] = "Questionnaire Quality";
	$fieldToolTipsroyal_customer["Japanese"]["questionnaire_quality"] = "";
	$placeHoldersroyal_customer["Japanese"]["questionnaire_quality"] = "";
	$fieldLabelsroyal_customer["Japanese"]["updated_at"] = "更新日";
	$fieldToolTipsroyal_customer["Japanese"]["updated_at"] = "";
	$placeHoldersroyal_customer["Japanese"]["updated_at"] = "";
	$fieldLabelsroyal_customer["Japanese"]["updated_by"] = "更新車";
	$fieldToolTipsroyal_customer["Japanese"]["updated_by"] = "";
	$placeHoldersroyal_customer["Japanese"]["updated_by"] = "";
	$fieldLabelsroyal_customer["Japanese"]["created_at"] = "作成日";
	$fieldToolTipsroyal_customer["Japanese"]["created_at"] = "";
	$placeHoldersroyal_customer["Japanese"]["created_at"] = "";
	$fieldLabelsroyal_customer["Japanese"]["created_by"] = "作成者";
	$fieldToolTipsroyal_customer["Japanese"]["created_by"] = "";
	$placeHoldersroyal_customer["Japanese"]["created_by"] = "";
	$fieldLabelsroyal_customer["Japanese"]["selling_count_ec"] = "Selling Count Ec";
	$fieldToolTipsroyal_customer["Japanese"]["selling_count_ec"] = "";
	$placeHoldersroyal_customer["Japanese"]["selling_count_ec"] = "";
	$fieldLabelsroyal_customer["Japanese"]["selling_count_ichiba"] = "Selling Count Ichiba";
	$fieldToolTipsroyal_customer["Japanese"]["selling_count_ichiba"] = "";
	$placeHoldersroyal_customer["Japanese"]["selling_count_ichiba"] = "";
	$fieldLabelsroyal_customer["Japanese"]["type_count_K"] = "Type Count K";
	$fieldToolTipsroyal_customer["Japanese"]["type_count_K"] = "";
	$placeHoldersroyal_customer["Japanese"]["type_count_K"] = "";
	$fieldLabelsroyal_customer["Japanese"]["type_count_D"] = "Type Count D";
	$fieldToolTipsroyal_customer["Japanese"]["type_count_D"] = "";
	$placeHoldersroyal_customer["Japanese"]["type_count_D"] = "";
	$fieldLabelsroyal_customer["Japanese"]["type_count_J"] = "Type Count J";
	$fieldToolTipsroyal_customer["Japanese"]["type_count_J"] = "";
	$placeHoldersroyal_customer["Japanese"]["type_count_J"] = "";
	$fieldLabelsroyal_customer["Japanese"]["type_count_W"] = "Type Count W";
	$fieldToolTipsroyal_customer["Japanese"]["type_count_W"] = "";
	$placeHoldersroyal_customer["Japanese"]["type_count_W"] = "";
	$fieldLabelsroyal_customer["Japanese"]["type_count_B"] = "Type Count B";
	$fieldToolTipsroyal_customer["Japanese"]["type_count_B"] = "";
	$placeHoldersroyal_customer["Japanese"]["type_count_B"] = "";
	$fieldLabelsroyal_customer["Japanese"]["type_count_H"] = "Type Count H";
	$fieldToolTipsroyal_customer["Japanese"]["type_count_H"] = "";
	$placeHoldersroyal_customer["Japanese"]["type_count_H"] = "";
	$fieldLabelsroyal_customer["Japanese"]["type_count_other"] = "Type Count Other";
	$fieldToolTipsroyal_customer["Japanese"]["type_count_other"] = "";
	$placeHoldersroyal_customer["Japanese"]["type_count_other"] = "";
	$fieldLabelsroyal_customer["Japanese"]["selling_price_ec"] = "Selling Price Ec";
	$fieldToolTipsroyal_customer["Japanese"]["selling_price_ec"] = "";
	$placeHoldersroyal_customer["Japanese"]["selling_price_ec"] = "";
	$fieldLabelsroyal_customer["Japanese"]["selling_arari_ec"] = "Selling Arari Ec";
	$fieldToolTipsroyal_customer["Japanese"]["selling_arari_ec"] = "";
	$placeHoldersroyal_customer["Japanese"]["selling_arari_ec"] = "";
	$fieldLabelsroyal_customer["Japanese"]["selling_price_ichiba"] = "Selling Price Ichiba";
	$fieldToolTipsroyal_customer["Japanese"]["selling_price_ichiba"] = "";
	$placeHoldersroyal_customer["Japanese"]["selling_price_ichiba"] = "";
	$fieldLabelsroyal_customer["Japanese"]["selling_arari_ichiba"] = "Selling Arari Ichiba";
	$fieldToolTipsroyal_customer["Japanese"]["selling_arari_ichiba"] = "";
	$placeHoldersroyal_customer["Japanese"]["selling_arari_ichiba"] = "";
	$fieldLabelsroyal_customer["Japanese"]["type_price_K"] = "Type Price K";
	$fieldToolTipsroyal_customer["Japanese"]["type_price_K"] = "";
	$placeHoldersroyal_customer["Japanese"]["type_price_K"] = "";
	$fieldLabelsroyal_customer["Japanese"]["type_arari_K"] = "Type Arari K";
	$fieldToolTipsroyal_customer["Japanese"]["type_arari_K"] = "";
	$placeHoldersroyal_customer["Japanese"]["type_arari_K"] = "";
	$fieldLabelsroyal_customer["Japanese"]["type_price_D"] = "Type Price D";
	$fieldToolTipsroyal_customer["Japanese"]["type_price_D"] = "";
	$placeHoldersroyal_customer["Japanese"]["type_price_D"] = "";
	$fieldLabelsroyal_customer["Japanese"]["type_arari_D"] = "Type Arari D";
	$fieldToolTipsroyal_customer["Japanese"]["type_arari_D"] = "";
	$placeHoldersroyal_customer["Japanese"]["type_arari_D"] = "";
	$fieldLabelsroyal_customer["Japanese"]["type_price_J"] = "Type Price J";
	$fieldToolTipsroyal_customer["Japanese"]["type_price_J"] = "";
	$placeHoldersroyal_customer["Japanese"]["type_price_J"] = "";
	$fieldLabelsroyal_customer["Japanese"]["type_arari_J"] = "Type Arari J";
	$fieldToolTipsroyal_customer["Japanese"]["type_arari_J"] = "";
	$placeHoldersroyal_customer["Japanese"]["type_arari_J"] = "";
	$fieldLabelsroyal_customer["Japanese"]["type_price_W"] = "Type Price W";
	$fieldToolTipsroyal_customer["Japanese"]["type_price_W"] = "";
	$placeHoldersroyal_customer["Japanese"]["type_price_W"] = "";
	$fieldLabelsroyal_customer["Japanese"]["type_arari_W"] = "Type Arari W";
	$fieldToolTipsroyal_customer["Japanese"]["type_arari_W"] = "";
	$placeHoldersroyal_customer["Japanese"]["type_arari_W"] = "";
	$fieldLabelsroyal_customer["Japanese"]["type_price_B"] = "Type Price B";
	$fieldToolTipsroyal_customer["Japanese"]["type_price_B"] = "";
	$placeHoldersroyal_customer["Japanese"]["type_price_B"] = "";
	$fieldLabelsroyal_customer["Japanese"]["type_arari_B"] = "Type Arari B";
	$fieldToolTipsroyal_customer["Japanese"]["type_arari_B"] = "";
	$placeHoldersroyal_customer["Japanese"]["type_arari_B"] = "";
	$fieldLabelsroyal_customer["Japanese"]["type_price_H"] = "Type Price H";
	$fieldToolTipsroyal_customer["Japanese"]["type_price_H"] = "";
	$placeHoldersroyal_customer["Japanese"]["type_price_H"] = "";
	$fieldLabelsroyal_customer["Japanese"]["type_arari_H"] = "Type Arari H";
	$fieldToolTipsroyal_customer["Japanese"]["type_arari_H"] = "";
	$placeHoldersroyal_customer["Japanese"]["type_arari_H"] = "";
	$fieldLabelsroyal_customer["Japanese"]["type_price_other"] = "Type Price Other";
	$fieldToolTipsroyal_customer["Japanese"]["type_price_other"] = "";
	$placeHoldersroyal_customer["Japanese"]["type_price_other"] = "";
	$fieldLabelsroyal_customer["Japanese"]["type_arari_other"] = "Type Arari Other";
	$fieldToolTipsroyal_customer["Japanese"]["type_arari_other"] = "";
	$placeHoldersroyal_customer["Japanese"]["type_arari_other"] = "";
	$fieldLabelsroyal_customer["Japanese"]["questquestion_count_very_satisfied"] = "Questquestion Count Very Satisfied";
	$fieldToolTipsroyal_customer["Japanese"]["questquestion_count_very_satisfied"] = "";
	$placeHoldersroyal_customer["Japanese"]["questquestion_count_very_satisfied"] = "";
	$fieldLabelsroyal_customer["Japanese"]["questquestion_count_somewhat_satisfied"] = "Questquestion Count Somewhat Satisfied";
	$fieldToolTipsroyal_customer["Japanese"]["questquestion_count_somewhat_satisfied"] = "";
	$placeHoldersroyal_customer["Japanese"]["questquestion_count_somewhat_satisfied"] = "";
	$fieldLabelsroyal_customer["Japanese"]["questquestion_count_usually"] = "Questquestion Count Usually";
	$fieldToolTipsroyal_customer["Japanese"]["questquestion_count_usually"] = "";
	$placeHoldersroyal_customer["Japanese"]["questquestion_count_usually"] = "";
	$fieldLabelsroyal_customer["Japanese"]["questquestion_count_somewhat_dissatisfied"] = "Questquestion Count Somewhat Dissatisfied";
	$fieldToolTipsroyal_customer["Japanese"]["questquestion_count_somewhat_dissatisfied"] = "";
	$placeHoldersroyal_customer["Japanese"]["questquestion_count_somewhat_dissatisfied"] = "";
	$fieldLabelsroyal_customer["Japanese"]["questquestion_count_complain"] = "Questquestion Count Complain";
	$fieldToolTipsroyal_customer["Japanese"]["questquestion_count_complain"] = "";
	$placeHoldersroyal_customer["Japanese"]["questquestion_count_complain"] = "";
	$fieldLabelsroyal_customer["Japanese"]["link"] = "Link";
	$fieldToolTipsroyal_customer["Japanese"]["link"] = "";
	$placeHoldersroyal_customer["Japanese"]["link"] = "";
	$fieldLabelsroyal_customer["Japanese"]["name1"] = "Name1";
	$fieldToolTipsroyal_customer["Japanese"]["name1"] = "";
	$placeHoldersroyal_customer["Japanese"]["name1"] = "";
	$fieldLabelsroyal_customer["Japanese"]["name2"] = "Name2";
	$fieldToolTipsroyal_customer["Japanese"]["name2"] = "";
	$placeHoldersroyal_customer["Japanese"]["name2"] = "";
	$fieldLabelsroyal_customer["Japanese"]["address1"] = "Address1";
	$fieldToolTipsroyal_customer["Japanese"]["address1"] = "";
	$placeHoldersroyal_customer["Japanese"]["address1"] = "";
	$fieldLabelsroyal_customer["Japanese"]["address2"] = "Address2";
	$fieldToolTipsroyal_customer["Japanese"]["address2"] = "";
	$placeHoldersroyal_customer["Japanese"]["address2"] = "";
	$fieldLabelsroyal_customer["Japanese"]["address3"] = "Address3";
	$fieldToolTipsroyal_customer["Japanese"]["address3"] = "";
	$placeHoldersroyal_customer["Japanese"]["address3"] = "";
	$fieldLabelsroyal_customer["Japanese"]["tel"] = "Tel";
	$fieldToolTipsroyal_customer["Japanese"]["tel"] = "";
	$placeHoldersroyal_customer["Japanese"]["tel"] = "";
	$fieldLabelsroyal_customer["Japanese"]["tel2"] = "Tel2";
	$fieldToolTipsroyal_customer["Japanese"]["tel2"] = "";
	$placeHoldersroyal_customer["Japanese"]["tel2"] = "";
	$fieldLabelsroyal_customer["Japanese"]["mail1"] = "Mail1";
	$fieldToolTipsroyal_customer["Japanese"]["mail1"] = "";
	$placeHoldersroyal_customer["Japanese"]["mail1"] = "";
	$fieldLabelsroyal_customer["Japanese"]["mail2"] = "Mail2";
	$fieldToolTipsroyal_customer["Japanese"]["mail2"] = "";
	$placeHoldersroyal_customer["Japanese"]["mail2"] = "";
	$fieldLabelsroyal_customer["Japanese"]["rate_selling_count_EC"] = "[売先割合]EC";
	$fieldToolTipsroyal_customer["Japanese"]["rate_selling_count_EC"] = "";
	$placeHoldersroyal_customer["Japanese"]["rate_selling_count_EC"] = "";
	$fieldLabelsroyal_customer["Japanese"]["rate_selling_count_ichiba"] = "[売先割合]市場";
	$fieldToolTipsroyal_customer["Japanese"]["rate_selling_count_ichiba"] = "";
	$placeHoldersroyal_customer["Japanese"]["rate_selling_count_ichiba"] = "";
	$fieldLabelsroyal_customer["Japanese"]["rate_type_count_K"] = "[種別割合]K";
	$fieldToolTipsroyal_customer["Japanese"]["rate_type_count_K"] = "";
	$placeHoldersroyal_customer["Japanese"]["rate_type_count_K"] = "";
	$fieldLabelsroyal_customer["Japanese"]["rate_type_count_D"] = "[種別割合]D";
	$fieldToolTipsroyal_customer["Japanese"]["rate_type_count_D"] = "";
	$placeHoldersroyal_customer["Japanese"]["rate_type_count_D"] = "";
	$fieldLabelsroyal_customer["Japanese"]["rate_type_count_J"] = "[種別割合]J";
	$fieldToolTipsroyal_customer["Japanese"]["rate_type_count_J"] = "";
	$placeHoldersroyal_customer["Japanese"]["rate_type_count_J"] = "";
	$fieldLabelsroyal_customer["Japanese"]["rate_type_count_W"] = "[種別割合]W";
	$fieldToolTipsroyal_customer["Japanese"]["rate_type_count_W"] = "";
	$placeHoldersroyal_customer["Japanese"]["rate_type_count_W"] = "";
	$fieldLabelsroyal_customer["Japanese"]["rate_type_count_B"] = "[種別割合]B";
	$fieldToolTipsroyal_customer["Japanese"]["rate_type_count_B"] = "";
	$placeHoldersroyal_customer["Japanese"]["rate_type_count_B"] = "";
	$fieldLabelsroyal_customer["Japanese"]["rate_type_count_H"] = "[種別割合]H";
	$fieldToolTipsroyal_customer["Japanese"]["rate_type_count_H"] = "";
	$placeHoldersroyal_customer["Japanese"]["rate_type_count_H"] = "";
	$fieldLabelsroyal_customer["Japanese"]["rate_type_count_other"] = "[種別割合]他";
	$fieldToolTipsroyal_customer["Japanese"]["rate_type_count_other"] = "";
	$placeHoldersroyal_customer["Japanese"]["rate_type_count_other"] = "";
	$fieldLabelsroyal_customer["Japanese"]["royal_customer_type"] = "ロイヤルタイプ";
	$fieldToolTipsroyal_customer["Japanese"]["royal_customer_type"] = "";
	$placeHoldersroyal_customer["Japanese"]["royal_customer_type"] = "";
	$fieldLabelsroyal_customer["Japanese"]["royal_customer_status"] = "ステータス";
	$fieldToolTipsroyal_customer["Japanese"]["royal_customer_status"] = "";
	$placeHoldersroyal_customer["Japanese"]["royal_customer_status"] = "";
	if (count($fieldToolTipsroyal_customer["Japanese"]))
		$tdataroyal_customer[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsroyal_customer[""] = array();
	$fieldToolTipsroyal_customer[""] = array();
	$placeHoldersroyal_customer[""] = array();
	$pageTitlesroyal_customer[""] = array();
	$fieldLabelsroyal_customer[""]["ecc_id"] = "Ecc Id";
	$fieldToolTipsroyal_customer[""]["ecc_id"] = "";
	$placeHoldersroyal_customer[""]["ecc_id"] = "";
	$fieldLabelsroyal_customer[""]["gender"] = "Gender";
	$fieldToolTipsroyal_customer[""]["gender"] = "";
	$placeHoldersroyal_customer[""]["gender"] = "";
	$fieldLabelsroyal_customer[""]["age"] = "Age";
	$fieldToolTipsroyal_customer[""]["age"] = "";
	$placeHoldersroyal_customer[""]["age"] = "";
	$fieldLabelsroyal_customer[""]["todou"] = "Todou";
	$fieldToolTipsroyal_customer[""]["todou"] = "";
	$placeHoldersroyal_customer[""]["todou"] = "";
	$fieldLabelsroyal_customer[""]["family"] = "Family";
	$fieldToolTipsroyal_customer[""]["family"] = "";
	$placeHoldersroyal_customer[""]["family"] = "";
	$fieldLabelsroyal_customer[""]["income"] = "Income";
	$fieldToolTipsroyal_customer[""]["income"] = "";
	$placeHoldersroyal_customer[""]["income"] = "";
	$fieldLabelsroyal_customer[""]["cumulative_earnings"] = "Cumulative Earnings";
	$fieldToolTipsroyal_customer[""]["cumulative_earnings"] = "";
	$placeHoldersroyal_customer[""]["cumulative_earnings"] = "";
	$fieldLabelsroyal_customer[""]["number_of_times"] = "Number Of Times";
	$fieldToolTipsroyal_customer[""]["number_of_times"] = "";
	$placeHoldersroyal_customer[""]["number_of_times"] = "";
	$fieldLabelsroyal_customer[""]["close_rate"] = "Close Rate";
	$fieldToolTipsroyal_customer[""]["close_rate"] = "";
	$placeHoldersroyal_customer[""]["close_rate"] = "";
	$fieldLabelsroyal_customer[""]["LTV_prediction"] = "LTV Prediction";
	$fieldToolTipsroyal_customer[""]["LTV_prediction"] = "";
	$placeHoldersroyal_customer[""]["LTV_prediction"] = "";
	$fieldLabelsroyal_customer[""]["usage_period"] = "Usage Period";
	$fieldToolTipsroyal_customer[""]["usage_period"] = "";
	$placeHoldersroyal_customer[""]["usage_period"] = "";
	$fieldLabelsroyal_customer[""]["last_closing_date"] = "Last Closing Date";
	$fieldToolTipsroyal_customer[""]["last_closing_date"] = "";
	$placeHoldersroyal_customer[""]["last_closing_date"] = "";
	$fieldLabelsroyal_customer[""]["type_trend"] = "Type Trend";
	$fieldToolTipsroyal_customer[""]["type_trend"] = "";
	$placeHoldersroyal_customer[""]["type_trend"] = "";
	$fieldLabelsroyal_customer[""]["handling_number_of_brands"] = "Handling Number Of Brands";
	$fieldToolTipsroyal_customer[""]["handling_number_of_brands"] = "";
	$placeHoldersroyal_customer[""]["handling_number_of_brands"] = "";
	$fieldLabelsroyal_customer[""]["trend_destination_of_selling"] = "Trend Destination Of Selling";
	$fieldToolTipsroyal_customer[""]["trend_destination_of_selling"] = "";
	$placeHoldersroyal_customer[""]["trend_destination_of_selling"] = "";
	$fieldLabelsroyal_customer[""]["questionnaire_quality"] = "Questionnaire Quality";
	$fieldToolTipsroyal_customer[""]["questionnaire_quality"] = "";
	$placeHoldersroyal_customer[""]["questionnaire_quality"] = "";
	$fieldLabelsroyal_customer[""]["updated_at"] = "Updated At";
	$fieldToolTipsroyal_customer[""]["updated_at"] = "";
	$placeHoldersroyal_customer[""]["updated_at"] = "";
	$fieldLabelsroyal_customer[""]["updated_by"] = "Updated By";
	$fieldToolTipsroyal_customer[""]["updated_by"] = "";
	$placeHoldersroyal_customer[""]["updated_by"] = "";
	$fieldLabelsroyal_customer[""]["created_at"] = "Created At";
	$fieldToolTipsroyal_customer[""]["created_at"] = "";
	$placeHoldersroyal_customer[""]["created_at"] = "";
	$fieldLabelsroyal_customer[""]["created_by"] = "Created By";
	$fieldToolTipsroyal_customer[""]["created_by"] = "";
	$placeHoldersroyal_customer[""]["created_by"] = "";
	$fieldLabelsroyal_customer[""]["selling_count_ec"] = "Selling Count Ec";
	$fieldToolTipsroyal_customer[""]["selling_count_ec"] = "";
	$placeHoldersroyal_customer[""]["selling_count_ec"] = "";
	$fieldLabelsroyal_customer[""]["selling_count_ichiba"] = "Selling Count Ichiba";
	$fieldToolTipsroyal_customer[""]["selling_count_ichiba"] = "";
	$placeHoldersroyal_customer[""]["selling_count_ichiba"] = "";
	$fieldLabelsroyal_customer[""]["type_count_K"] = "Type Count K";
	$fieldToolTipsroyal_customer[""]["type_count_K"] = "";
	$placeHoldersroyal_customer[""]["type_count_K"] = "";
	$fieldLabelsroyal_customer[""]["type_count_D"] = "Type Count D";
	$fieldToolTipsroyal_customer[""]["type_count_D"] = "";
	$placeHoldersroyal_customer[""]["type_count_D"] = "";
	$fieldLabelsroyal_customer[""]["type_count_J"] = "Type Count J";
	$fieldToolTipsroyal_customer[""]["type_count_J"] = "";
	$placeHoldersroyal_customer[""]["type_count_J"] = "";
	$fieldLabelsroyal_customer[""]["type_count_W"] = "Type Count W";
	$fieldToolTipsroyal_customer[""]["type_count_W"] = "";
	$placeHoldersroyal_customer[""]["type_count_W"] = "";
	$fieldLabelsroyal_customer[""]["type_count_B"] = "Type Count B";
	$fieldToolTipsroyal_customer[""]["type_count_B"] = "";
	$placeHoldersroyal_customer[""]["type_count_B"] = "";
	$fieldLabelsroyal_customer[""]["type_count_H"] = "Type Count H";
	$fieldToolTipsroyal_customer[""]["type_count_H"] = "";
	$placeHoldersroyal_customer[""]["type_count_H"] = "";
	$fieldLabelsroyal_customer[""]["type_count_other"] = "Type Count Other";
	$fieldToolTipsroyal_customer[""]["type_count_other"] = "";
	$placeHoldersroyal_customer[""]["type_count_other"] = "";
	$fieldLabelsroyal_customer[""]["selling_price_ec"] = "Selling Price Ec";
	$fieldToolTipsroyal_customer[""]["selling_price_ec"] = "";
	$placeHoldersroyal_customer[""]["selling_price_ec"] = "";
	$fieldLabelsroyal_customer[""]["selling_arari_ec"] = "Selling Arari Ec";
	$fieldToolTipsroyal_customer[""]["selling_arari_ec"] = "";
	$placeHoldersroyal_customer[""]["selling_arari_ec"] = "";
	$fieldLabelsroyal_customer[""]["selling_price_ichiba"] = "Selling Price Ichiba";
	$fieldToolTipsroyal_customer[""]["selling_price_ichiba"] = "";
	$placeHoldersroyal_customer[""]["selling_price_ichiba"] = "";
	$fieldLabelsroyal_customer[""]["selling_arari_ichiba"] = "Selling Arari Ichiba";
	$fieldToolTipsroyal_customer[""]["selling_arari_ichiba"] = "";
	$placeHoldersroyal_customer[""]["selling_arari_ichiba"] = "";
	$fieldLabelsroyal_customer[""]["type_price_K"] = "Type Price K";
	$fieldToolTipsroyal_customer[""]["type_price_K"] = "";
	$placeHoldersroyal_customer[""]["type_price_K"] = "";
	$fieldLabelsroyal_customer[""]["type_arari_K"] = "Type Arari K";
	$fieldToolTipsroyal_customer[""]["type_arari_K"] = "";
	$placeHoldersroyal_customer[""]["type_arari_K"] = "";
	$fieldLabelsroyal_customer[""]["type_price_D"] = "Type Price D";
	$fieldToolTipsroyal_customer[""]["type_price_D"] = "";
	$placeHoldersroyal_customer[""]["type_price_D"] = "";
	$fieldLabelsroyal_customer[""]["type_arari_D"] = "Type Arari D";
	$fieldToolTipsroyal_customer[""]["type_arari_D"] = "";
	$placeHoldersroyal_customer[""]["type_arari_D"] = "";
	$fieldLabelsroyal_customer[""]["type_price_J"] = "Type Price J";
	$fieldToolTipsroyal_customer[""]["type_price_J"] = "";
	$placeHoldersroyal_customer[""]["type_price_J"] = "";
	$fieldLabelsroyal_customer[""]["type_arari_J"] = "Type Arari J";
	$fieldToolTipsroyal_customer[""]["type_arari_J"] = "";
	$placeHoldersroyal_customer[""]["type_arari_J"] = "";
	$fieldLabelsroyal_customer[""]["type_price_W"] = "Type Price W";
	$fieldToolTipsroyal_customer[""]["type_price_W"] = "";
	$placeHoldersroyal_customer[""]["type_price_W"] = "";
	$fieldLabelsroyal_customer[""]["type_arari_W"] = "Type Arari W";
	$fieldToolTipsroyal_customer[""]["type_arari_W"] = "";
	$placeHoldersroyal_customer[""]["type_arari_W"] = "";
	$fieldLabelsroyal_customer[""]["type_price_B"] = "Type Price B";
	$fieldToolTipsroyal_customer[""]["type_price_B"] = "";
	$placeHoldersroyal_customer[""]["type_price_B"] = "";
	$fieldLabelsroyal_customer[""]["type_arari_B"] = "Type Arari B";
	$fieldToolTipsroyal_customer[""]["type_arari_B"] = "";
	$placeHoldersroyal_customer[""]["type_arari_B"] = "";
	$fieldLabelsroyal_customer[""]["type_price_H"] = "Type Price H";
	$fieldToolTipsroyal_customer[""]["type_price_H"] = "";
	$placeHoldersroyal_customer[""]["type_price_H"] = "";
	$fieldLabelsroyal_customer[""]["type_arari_H"] = "Type Arari H";
	$fieldToolTipsroyal_customer[""]["type_arari_H"] = "";
	$placeHoldersroyal_customer[""]["type_arari_H"] = "";
	$fieldLabelsroyal_customer[""]["type_price_other"] = "Type Price Other";
	$fieldToolTipsroyal_customer[""]["type_price_other"] = "";
	$placeHoldersroyal_customer[""]["type_price_other"] = "";
	$fieldLabelsroyal_customer[""]["type_arari_other"] = "Type Arari Other";
	$fieldToolTipsroyal_customer[""]["type_arari_other"] = "";
	$placeHoldersroyal_customer[""]["type_arari_other"] = "";
	$fieldLabelsroyal_customer[""]["questquestion_count_very_satisfied"] = "Questquestion Count Very Satisfied";
	$fieldToolTipsroyal_customer[""]["questquestion_count_very_satisfied"] = "";
	$placeHoldersroyal_customer[""]["questquestion_count_very_satisfied"] = "";
	$fieldLabelsroyal_customer[""]["questquestion_count_somewhat_satisfied"] = "Questquestion Count Somewhat Satisfied";
	$fieldToolTipsroyal_customer[""]["questquestion_count_somewhat_satisfied"] = "";
	$placeHoldersroyal_customer[""]["questquestion_count_somewhat_satisfied"] = "";
	$fieldLabelsroyal_customer[""]["questquestion_count_usually"] = "Questquestion Count Usually";
	$fieldToolTipsroyal_customer[""]["questquestion_count_usually"] = "";
	$placeHoldersroyal_customer[""]["questquestion_count_usually"] = "";
	$fieldLabelsroyal_customer[""]["questquestion_count_somewhat_dissatisfied"] = "Questquestion Count Somewhat Dissatisfied";
	$fieldToolTipsroyal_customer[""]["questquestion_count_somewhat_dissatisfied"] = "";
	$placeHoldersroyal_customer[""]["questquestion_count_somewhat_dissatisfied"] = "";
	$fieldLabelsroyal_customer[""]["questquestion_count_complain"] = "Questquestion Count Complain";
	$fieldToolTipsroyal_customer[""]["questquestion_count_complain"] = "";
	$placeHoldersroyal_customer[""]["questquestion_count_complain"] = "";
	$fieldLabelsroyal_customer[""]["link"] = "Link";
	$fieldToolTipsroyal_customer[""]["link"] = "";
	$placeHoldersroyal_customer[""]["link"] = "";
	$fieldLabelsroyal_customer[""]["name1"] = "Name1";
	$fieldToolTipsroyal_customer[""]["name1"] = "";
	$placeHoldersroyal_customer[""]["name1"] = "";
	$fieldLabelsroyal_customer[""]["name2"] = "Name2";
	$fieldToolTipsroyal_customer[""]["name2"] = "";
	$placeHoldersroyal_customer[""]["name2"] = "";
	$fieldLabelsroyal_customer[""]["address1"] = "Address1";
	$fieldToolTipsroyal_customer[""]["address1"] = "";
	$placeHoldersroyal_customer[""]["address1"] = "";
	$fieldLabelsroyal_customer[""]["address2"] = "Address2";
	$fieldToolTipsroyal_customer[""]["address2"] = "";
	$placeHoldersroyal_customer[""]["address2"] = "";
	$fieldLabelsroyal_customer[""]["address3"] = "Address3";
	$fieldToolTipsroyal_customer[""]["address3"] = "";
	$placeHoldersroyal_customer[""]["address3"] = "";
	$fieldLabelsroyal_customer[""]["tel"] = "Tel";
	$fieldToolTipsroyal_customer[""]["tel"] = "";
	$placeHoldersroyal_customer[""]["tel"] = "";
	$fieldLabelsroyal_customer[""]["tel2"] = "Tel2";
	$fieldToolTipsroyal_customer[""]["tel2"] = "";
	$placeHoldersroyal_customer[""]["tel2"] = "";
	$fieldLabelsroyal_customer[""]["mail1"] = "Mail1";
	$fieldToolTipsroyal_customer[""]["mail1"] = "";
	$placeHoldersroyal_customer[""]["mail1"] = "";
	$fieldLabelsroyal_customer[""]["mail2"] = "Mail2";
	$fieldToolTipsroyal_customer[""]["mail2"] = "";
	$placeHoldersroyal_customer[""]["mail2"] = "";
	$fieldLabelsroyal_customer[""]["rate_selling_count_EC"] = "Rate Selling Count EC";
	$fieldToolTipsroyal_customer[""]["rate_selling_count_EC"] = "";
	$placeHoldersroyal_customer[""]["rate_selling_count_EC"] = "";
	$fieldLabelsroyal_customer[""]["rate_selling_count_ichiba"] = "Rate Selling Count Ichiba";
	$fieldToolTipsroyal_customer[""]["rate_selling_count_ichiba"] = "";
	$placeHoldersroyal_customer[""]["rate_selling_count_ichiba"] = "";
	$fieldLabelsroyal_customer[""]["rate_type_count_K"] = "Rate Type Count K";
	$fieldToolTipsroyal_customer[""]["rate_type_count_K"] = "";
	$placeHoldersroyal_customer[""]["rate_type_count_K"] = "";
	$fieldLabelsroyal_customer[""]["rate_type_count_D"] = "Rate Type Count D";
	$fieldToolTipsroyal_customer[""]["rate_type_count_D"] = "";
	$placeHoldersroyal_customer[""]["rate_type_count_D"] = "";
	$fieldLabelsroyal_customer[""]["rate_type_count_J"] = "Rate Type Count J";
	$fieldToolTipsroyal_customer[""]["rate_type_count_J"] = "";
	$placeHoldersroyal_customer[""]["rate_type_count_J"] = "";
	$fieldLabelsroyal_customer[""]["rate_type_count_W"] = "Rate Type Count W";
	$fieldToolTipsroyal_customer[""]["rate_type_count_W"] = "";
	$placeHoldersroyal_customer[""]["rate_type_count_W"] = "";
	$fieldLabelsroyal_customer[""]["rate_type_count_B"] = "Rate Type Count B";
	$fieldToolTipsroyal_customer[""]["rate_type_count_B"] = "";
	$placeHoldersroyal_customer[""]["rate_type_count_B"] = "";
	$fieldLabelsroyal_customer[""]["rate_type_count_H"] = "Rate Type Count H";
	$fieldToolTipsroyal_customer[""]["rate_type_count_H"] = "";
	$placeHoldersroyal_customer[""]["rate_type_count_H"] = "";
	$fieldLabelsroyal_customer[""]["rate_type_count_other"] = "Rate Type Count Other";
	$fieldToolTipsroyal_customer[""]["rate_type_count_other"] = "";
	$placeHoldersroyal_customer[""]["rate_type_count_other"] = "";
	$fieldLabelsroyal_customer[""]["royal_customer_type"] = "Royal Customer Type";
	$fieldToolTipsroyal_customer[""]["royal_customer_type"] = "";
	$placeHoldersroyal_customer[""]["royal_customer_type"] = "";
	$fieldLabelsroyal_customer[""]["royal_customer_status"] = "Royal Customer Status";
	$fieldToolTipsroyal_customer[""]["royal_customer_status"] = "";
	$placeHoldersroyal_customer[""]["royal_customer_status"] = "";
	if (count($fieldToolTipsroyal_customer[""]))
		$tdataroyal_customer[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsroyal_customer["English"] = array();
	$fieldToolTipsroyal_customer["English"] = array();
	$placeHoldersroyal_customer["English"] = array();
	$pageTitlesroyal_customer["English"] = array();
	$fieldLabelsroyal_customer["English"]["ecc_id"] = "Ecc Id";
	$fieldToolTipsroyal_customer["English"]["ecc_id"] = "";
	$placeHoldersroyal_customer["English"]["ecc_id"] = "";
	$fieldLabelsroyal_customer["English"]["gender"] = "Gender";
	$fieldToolTipsroyal_customer["English"]["gender"] = "";
	$placeHoldersroyal_customer["English"]["gender"] = "";
	$fieldLabelsroyal_customer["English"]["age"] = "Age";
	$fieldToolTipsroyal_customer["English"]["age"] = "";
	$placeHoldersroyal_customer["English"]["age"] = "";
	$fieldLabelsroyal_customer["English"]["todou"] = "Todou";
	$fieldToolTipsroyal_customer["English"]["todou"] = "";
	$placeHoldersroyal_customer["English"]["todou"] = "";
	$fieldLabelsroyal_customer["English"]["family"] = "Family";
	$fieldToolTipsroyal_customer["English"]["family"] = "";
	$placeHoldersroyal_customer["English"]["family"] = "";
	$fieldLabelsroyal_customer["English"]["income"] = "Income";
	$fieldToolTipsroyal_customer["English"]["income"] = "";
	$placeHoldersroyal_customer["English"]["income"] = "";
	$fieldLabelsroyal_customer["English"]["cumulative_earnings"] = "Cumulative Earnings";
	$fieldToolTipsroyal_customer["English"]["cumulative_earnings"] = "";
	$placeHoldersroyal_customer["English"]["cumulative_earnings"] = "";
	$fieldLabelsroyal_customer["English"]["number_of_times"] = "Number Of Times";
	$fieldToolTipsroyal_customer["English"]["number_of_times"] = "";
	$placeHoldersroyal_customer["English"]["number_of_times"] = "";
	$fieldLabelsroyal_customer["English"]["close_rate"] = "Close Rate";
	$fieldToolTipsroyal_customer["English"]["close_rate"] = "";
	$placeHoldersroyal_customer["English"]["close_rate"] = "";
	$fieldLabelsroyal_customer["English"]["LTV_prediction"] = "LTV Prediction";
	$fieldToolTipsroyal_customer["English"]["LTV_prediction"] = "";
	$placeHoldersroyal_customer["English"]["LTV_prediction"] = "";
	$fieldLabelsroyal_customer["English"]["usage_period"] = "Usage Period";
	$fieldToolTipsroyal_customer["English"]["usage_period"] = "";
	$placeHoldersroyal_customer["English"]["usage_period"] = "";
	$fieldLabelsroyal_customer["English"]["last_closing_date"] = "Last Closing Date";
	$fieldToolTipsroyal_customer["English"]["last_closing_date"] = "";
	$placeHoldersroyal_customer["English"]["last_closing_date"] = "";
	$fieldLabelsroyal_customer["English"]["type_trend"] = "Type Trend";
	$fieldToolTipsroyal_customer["English"]["type_trend"] = "";
	$placeHoldersroyal_customer["English"]["type_trend"] = "";
	$fieldLabelsroyal_customer["English"]["handling_number_of_brands"] = "Handling Number Of Brands";
	$fieldToolTipsroyal_customer["English"]["handling_number_of_brands"] = "";
	$placeHoldersroyal_customer["English"]["handling_number_of_brands"] = "";
	$fieldLabelsroyal_customer["English"]["trend_destination_of_selling"] = "Trend Destination Of Selling";
	$fieldToolTipsroyal_customer["English"]["trend_destination_of_selling"] = "";
	$placeHoldersroyal_customer["English"]["trend_destination_of_selling"] = "";
	$fieldLabelsroyal_customer["English"]["questionnaire_quality"] = "Questionnaire Quality";
	$fieldToolTipsroyal_customer["English"]["questionnaire_quality"] = "";
	$placeHoldersroyal_customer["English"]["questionnaire_quality"] = "";
	$fieldLabelsroyal_customer["English"]["updated_at"] = "Updated At";
	$fieldToolTipsroyal_customer["English"]["updated_at"] = "";
	$placeHoldersroyal_customer["English"]["updated_at"] = "";
	$fieldLabelsroyal_customer["English"]["updated_by"] = "Updated By";
	$fieldToolTipsroyal_customer["English"]["updated_by"] = "";
	$placeHoldersroyal_customer["English"]["updated_by"] = "";
	$fieldLabelsroyal_customer["English"]["created_at"] = "Created At";
	$fieldToolTipsroyal_customer["English"]["created_at"] = "";
	$placeHoldersroyal_customer["English"]["created_at"] = "";
	$fieldLabelsroyal_customer["English"]["created_by"] = "Created By";
	$fieldToolTipsroyal_customer["English"]["created_by"] = "";
	$placeHoldersroyal_customer["English"]["created_by"] = "";
	$fieldLabelsroyal_customer["English"]["selling_count_ec"] = "Selling Count Ec";
	$fieldToolTipsroyal_customer["English"]["selling_count_ec"] = "";
	$placeHoldersroyal_customer["English"]["selling_count_ec"] = "";
	$fieldLabelsroyal_customer["English"]["selling_count_ichiba"] = "Selling Count Ichiba";
	$fieldToolTipsroyal_customer["English"]["selling_count_ichiba"] = "";
	$placeHoldersroyal_customer["English"]["selling_count_ichiba"] = "";
	$fieldLabelsroyal_customer["English"]["type_count_K"] = "Type Count K";
	$fieldToolTipsroyal_customer["English"]["type_count_K"] = "";
	$placeHoldersroyal_customer["English"]["type_count_K"] = "";
	$fieldLabelsroyal_customer["English"]["type_count_D"] = "Type Count D";
	$fieldToolTipsroyal_customer["English"]["type_count_D"] = "";
	$placeHoldersroyal_customer["English"]["type_count_D"] = "";
	$fieldLabelsroyal_customer["English"]["type_count_J"] = "Type Count J";
	$fieldToolTipsroyal_customer["English"]["type_count_J"] = "";
	$placeHoldersroyal_customer["English"]["type_count_J"] = "";
	$fieldLabelsroyal_customer["English"]["type_count_W"] = "Type Count W";
	$fieldToolTipsroyal_customer["English"]["type_count_W"] = "";
	$placeHoldersroyal_customer["English"]["type_count_W"] = "";
	$fieldLabelsroyal_customer["English"]["type_count_B"] = "Type Count B";
	$fieldToolTipsroyal_customer["English"]["type_count_B"] = "";
	$placeHoldersroyal_customer["English"]["type_count_B"] = "";
	$fieldLabelsroyal_customer["English"]["type_count_H"] = "Type Count H";
	$fieldToolTipsroyal_customer["English"]["type_count_H"] = "";
	$placeHoldersroyal_customer["English"]["type_count_H"] = "";
	$fieldLabelsroyal_customer["English"]["type_count_other"] = "Type Count Other";
	$fieldToolTipsroyal_customer["English"]["type_count_other"] = "";
	$placeHoldersroyal_customer["English"]["type_count_other"] = "";
	$fieldLabelsroyal_customer["English"]["selling_price_ec"] = "Selling Price Ec";
	$fieldToolTipsroyal_customer["English"]["selling_price_ec"] = "";
	$placeHoldersroyal_customer["English"]["selling_price_ec"] = "";
	$fieldLabelsroyal_customer["English"]["selling_arari_ec"] = "Selling Arari Ec";
	$fieldToolTipsroyal_customer["English"]["selling_arari_ec"] = "";
	$placeHoldersroyal_customer["English"]["selling_arari_ec"] = "";
	$fieldLabelsroyal_customer["English"]["selling_price_ichiba"] = "Selling Price Ichiba";
	$fieldToolTipsroyal_customer["English"]["selling_price_ichiba"] = "";
	$placeHoldersroyal_customer["English"]["selling_price_ichiba"] = "";
	$fieldLabelsroyal_customer["English"]["selling_arari_ichiba"] = "Selling Arari Ichiba";
	$fieldToolTipsroyal_customer["English"]["selling_arari_ichiba"] = "";
	$placeHoldersroyal_customer["English"]["selling_arari_ichiba"] = "";
	$fieldLabelsroyal_customer["English"]["type_price_K"] = "Type Price K";
	$fieldToolTipsroyal_customer["English"]["type_price_K"] = "";
	$placeHoldersroyal_customer["English"]["type_price_K"] = "";
	$fieldLabelsroyal_customer["English"]["type_arari_K"] = "Type Arari K";
	$fieldToolTipsroyal_customer["English"]["type_arari_K"] = "";
	$placeHoldersroyal_customer["English"]["type_arari_K"] = "";
	$fieldLabelsroyal_customer["English"]["type_price_D"] = "Type Price D";
	$fieldToolTipsroyal_customer["English"]["type_price_D"] = "";
	$placeHoldersroyal_customer["English"]["type_price_D"] = "";
	$fieldLabelsroyal_customer["English"]["type_arari_D"] = "Type Arari D";
	$fieldToolTipsroyal_customer["English"]["type_arari_D"] = "";
	$placeHoldersroyal_customer["English"]["type_arari_D"] = "";
	$fieldLabelsroyal_customer["English"]["type_price_J"] = "Type Price J";
	$fieldToolTipsroyal_customer["English"]["type_price_J"] = "";
	$placeHoldersroyal_customer["English"]["type_price_J"] = "";
	$fieldLabelsroyal_customer["English"]["type_arari_J"] = "Type Arari J";
	$fieldToolTipsroyal_customer["English"]["type_arari_J"] = "";
	$placeHoldersroyal_customer["English"]["type_arari_J"] = "";
	$fieldLabelsroyal_customer["English"]["type_price_W"] = "Type Price W";
	$fieldToolTipsroyal_customer["English"]["type_price_W"] = "";
	$placeHoldersroyal_customer["English"]["type_price_W"] = "";
	$fieldLabelsroyal_customer["English"]["type_arari_W"] = "Type Arari W";
	$fieldToolTipsroyal_customer["English"]["type_arari_W"] = "";
	$placeHoldersroyal_customer["English"]["type_arari_W"] = "";
	$fieldLabelsroyal_customer["English"]["type_price_B"] = "Type Price B";
	$fieldToolTipsroyal_customer["English"]["type_price_B"] = "";
	$placeHoldersroyal_customer["English"]["type_price_B"] = "";
	$fieldLabelsroyal_customer["English"]["type_arari_B"] = "Type Arari B";
	$fieldToolTipsroyal_customer["English"]["type_arari_B"] = "";
	$placeHoldersroyal_customer["English"]["type_arari_B"] = "";
	$fieldLabelsroyal_customer["English"]["type_price_H"] = "Type Price H";
	$fieldToolTipsroyal_customer["English"]["type_price_H"] = "";
	$placeHoldersroyal_customer["English"]["type_price_H"] = "";
	$fieldLabelsroyal_customer["English"]["type_arari_H"] = "Type Arari H";
	$fieldToolTipsroyal_customer["English"]["type_arari_H"] = "";
	$placeHoldersroyal_customer["English"]["type_arari_H"] = "";
	$fieldLabelsroyal_customer["English"]["type_price_other"] = "Type Price Other";
	$fieldToolTipsroyal_customer["English"]["type_price_other"] = "";
	$placeHoldersroyal_customer["English"]["type_price_other"] = "";
	$fieldLabelsroyal_customer["English"]["type_arari_other"] = "Type Arari Other";
	$fieldToolTipsroyal_customer["English"]["type_arari_other"] = "";
	$placeHoldersroyal_customer["English"]["type_arari_other"] = "";
	$fieldLabelsroyal_customer["English"]["questquestion_count_very_satisfied"] = "Questquestion Count Very Satisfied";
	$fieldToolTipsroyal_customer["English"]["questquestion_count_very_satisfied"] = "";
	$placeHoldersroyal_customer["English"]["questquestion_count_very_satisfied"] = "";
	$fieldLabelsroyal_customer["English"]["questquestion_count_somewhat_satisfied"] = "Questquestion Count Somewhat Satisfied";
	$fieldToolTipsroyal_customer["English"]["questquestion_count_somewhat_satisfied"] = "";
	$placeHoldersroyal_customer["English"]["questquestion_count_somewhat_satisfied"] = "";
	$fieldLabelsroyal_customer["English"]["questquestion_count_usually"] = "Questquestion Count Usually";
	$fieldToolTipsroyal_customer["English"]["questquestion_count_usually"] = "";
	$placeHoldersroyal_customer["English"]["questquestion_count_usually"] = "";
	$fieldLabelsroyal_customer["English"]["questquestion_count_somewhat_dissatisfied"] = "Questquestion Count Somewhat Dissatisfied";
	$fieldToolTipsroyal_customer["English"]["questquestion_count_somewhat_dissatisfied"] = "";
	$placeHoldersroyal_customer["English"]["questquestion_count_somewhat_dissatisfied"] = "";
	$fieldLabelsroyal_customer["English"]["questquestion_count_complain"] = "Questquestion Count Complain";
	$fieldToolTipsroyal_customer["English"]["questquestion_count_complain"] = "";
	$placeHoldersroyal_customer["English"]["questquestion_count_complain"] = "";
	$fieldLabelsroyal_customer["English"]["link"] = "Link";
	$fieldToolTipsroyal_customer["English"]["link"] = "";
	$placeHoldersroyal_customer["English"]["link"] = "";
	$fieldLabelsroyal_customer["English"]["name1"] = "Name1";
	$fieldToolTipsroyal_customer["English"]["name1"] = "";
	$placeHoldersroyal_customer["English"]["name1"] = "";
	$fieldLabelsroyal_customer["English"]["name2"] = "Name2";
	$fieldToolTipsroyal_customer["English"]["name2"] = "";
	$placeHoldersroyal_customer["English"]["name2"] = "";
	$fieldLabelsroyal_customer["English"]["address1"] = "Address1";
	$fieldToolTipsroyal_customer["English"]["address1"] = "";
	$placeHoldersroyal_customer["English"]["address1"] = "";
	$fieldLabelsroyal_customer["English"]["address2"] = "Address2";
	$fieldToolTipsroyal_customer["English"]["address2"] = "";
	$placeHoldersroyal_customer["English"]["address2"] = "";
	$fieldLabelsroyal_customer["English"]["address3"] = "Address3";
	$fieldToolTipsroyal_customer["English"]["address3"] = "";
	$placeHoldersroyal_customer["English"]["address3"] = "";
	$fieldLabelsroyal_customer["English"]["tel"] = "Tel";
	$fieldToolTipsroyal_customer["English"]["tel"] = "";
	$placeHoldersroyal_customer["English"]["tel"] = "";
	$fieldLabelsroyal_customer["English"]["tel2"] = "Tel2";
	$fieldToolTipsroyal_customer["English"]["tel2"] = "";
	$placeHoldersroyal_customer["English"]["tel2"] = "";
	$fieldLabelsroyal_customer["English"]["mail1"] = "Mail1";
	$fieldToolTipsroyal_customer["English"]["mail1"] = "";
	$placeHoldersroyal_customer["English"]["mail1"] = "";
	$fieldLabelsroyal_customer["English"]["mail2"] = "Mail2";
	$fieldToolTipsroyal_customer["English"]["mail2"] = "";
	$placeHoldersroyal_customer["English"]["mail2"] = "";
	$fieldLabelsroyal_customer["English"]["rate_selling_count_EC"] = "Rate Selling Count EC";
	$fieldToolTipsroyal_customer["English"]["rate_selling_count_EC"] = "";
	$placeHoldersroyal_customer["English"]["rate_selling_count_EC"] = "";
	$fieldLabelsroyal_customer["English"]["rate_selling_count_ichiba"] = "Rate Selling Count Ichiba";
	$fieldToolTipsroyal_customer["English"]["rate_selling_count_ichiba"] = "";
	$placeHoldersroyal_customer["English"]["rate_selling_count_ichiba"] = "";
	$fieldLabelsroyal_customer["English"]["rate_type_count_K"] = "Rate Type Count K";
	$fieldToolTipsroyal_customer["English"]["rate_type_count_K"] = "";
	$placeHoldersroyal_customer["English"]["rate_type_count_K"] = "";
	$fieldLabelsroyal_customer["English"]["rate_type_count_D"] = "Rate Type Count D";
	$fieldToolTipsroyal_customer["English"]["rate_type_count_D"] = "";
	$placeHoldersroyal_customer["English"]["rate_type_count_D"] = "";
	$fieldLabelsroyal_customer["English"]["rate_type_count_J"] = "Rate Type Count J";
	$fieldToolTipsroyal_customer["English"]["rate_type_count_J"] = "";
	$placeHoldersroyal_customer["English"]["rate_type_count_J"] = "";
	$fieldLabelsroyal_customer["English"]["rate_type_count_W"] = "Rate Type Count W";
	$fieldToolTipsroyal_customer["English"]["rate_type_count_W"] = "";
	$placeHoldersroyal_customer["English"]["rate_type_count_W"] = "";
	$fieldLabelsroyal_customer["English"]["rate_type_count_B"] = "Rate Type Count B";
	$fieldToolTipsroyal_customer["English"]["rate_type_count_B"] = "";
	$placeHoldersroyal_customer["English"]["rate_type_count_B"] = "";
	$fieldLabelsroyal_customer["English"]["rate_type_count_H"] = "Rate Type Count H";
	$fieldToolTipsroyal_customer["English"]["rate_type_count_H"] = "";
	$placeHoldersroyal_customer["English"]["rate_type_count_H"] = "";
	$fieldLabelsroyal_customer["English"]["rate_type_count_other"] = "Rate Type Count Other";
	$fieldToolTipsroyal_customer["English"]["rate_type_count_other"] = "";
	$placeHoldersroyal_customer["English"]["rate_type_count_other"] = "";
	$fieldLabelsroyal_customer["English"]["royal_customer_type"] = "Royal Customer Type";
	$fieldToolTipsroyal_customer["English"]["royal_customer_type"] = "";
	$placeHoldersroyal_customer["English"]["royal_customer_type"] = "";
	$fieldLabelsroyal_customer["English"]["royal_customer_status"] = "Royal Customer Status";
	$fieldToolTipsroyal_customer["English"]["royal_customer_status"] = "";
	$placeHoldersroyal_customer["English"]["royal_customer_status"] = "";
	if (count($fieldToolTipsroyal_customer["English"]))
		$tdataroyal_customer[".isUseToolTips"] = true;
}


	$tdataroyal_customer[".NCSearch"] = true;



$tdataroyal_customer[".shortTableName"] = "royal_customer";
$tdataroyal_customer[".nSecOptions"] = 0;
$tdataroyal_customer[".recsPerRowPrint"] = 1;
$tdataroyal_customer[".mainTableOwnerID"] = "";
$tdataroyal_customer[".moveNext"] = 1;
$tdataroyal_customer[".entityType"] = 0;

$tdataroyal_customer[".strOriginalTableName"] = "royal_customer";

	



$tdataroyal_customer[".showAddInPopup"] = false;

$tdataroyal_customer[".showEditInPopup"] = false;

$tdataroyal_customer[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataroyal_customer[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataroyal_customer[".fieldsForRegister"] = array();

$tdataroyal_customer[".listAjax"] = false;

	$tdataroyal_customer[".audit"] = true;

	$tdataroyal_customer[".locking"] = false;



$tdataroyal_customer[".list"] = true;



$tdataroyal_customer[".reorderRecordsByHeader"] = true;




$tdataroyal_customer[".import"] = true;

$tdataroyal_customer[".exportTo"] = true;



$tdataroyal_customer[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataroyal_customer[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataroyal_customer[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataroyal_customer[".searchSaving"] = false;
//

$tdataroyal_customer[".showSearchPanel"] = true;
		$tdataroyal_customer[".flexibleSearch"] = true;

$tdataroyal_customer[".isUseAjaxSuggest"] = true;

$tdataroyal_customer[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdataroyal_customer[".ajaxCodeSnippetAdded"] = false;

$tdataroyal_customer[".buttonsAdded"] = false;

$tdataroyal_customer[".addPageEvents"] = false;

// use timepicker for search panel
$tdataroyal_customer[".isUseTimeForSearch"] = false;





$tdataroyal_customer[".allSearchFields"] = array();
$tdataroyal_customer[".filterFields"] = array();
$tdataroyal_customer[".requiredSearchFields"] = array();

$tdataroyal_customer[".allSearchFields"][] = "royal_customer_status";
	$tdataroyal_customer[".allSearchFields"][] = "link";
	$tdataroyal_customer[".allSearchFields"][] = "royal_customer_type";
	$tdataroyal_customer[".allSearchFields"][] = "ecc_id";
	$tdataroyal_customer[".allSearchFields"][] = "name1";
	$tdataroyal_customer[".allSearchFields"][] = "name2";
	$tdataroyal_customer[".allSearchFields"][] = "gender";
	$tdataroyal_customer[".allSearchFields"][] = "age";
	$tdataroyal_customer[".allSearchFields"][] = "todou";
	$tdataroyal_customer[".allSearchFields"][] = "family";
	$tdataroyal_customer[".allSearchFields"][] = "income";
	$tdataroyal_customer[".allSearchFields"][] = "cumulative_earnings";
	$tdataroyal_customer[".allSearchFields"][] = "number_of_times";
	$tdataroyal_customer[".allSearchFields"][] = "close_rate";
	$tdataroyal_customer[".allSearchFields"][] = "LTV_prediction";
	$tdataroyal_customer[".allSearchFields"][] = "usage_period";
	$tdataroyal_customer[".allSearchFields"][] = "last_closing_date";
	$tdataroyal_customer[".allSearchFields"][] = "handling_number_of_brands";
	$tdataroyal_customer[".allSearchFields"][] = "rate_selling_count_EC";
	$tdataroyal_customer[".allSearchFields"][] = "rate_selling_count_ichiba";
	$tdataroyal_customer[".allSearchFields"][] = "rate_type_count_K";
	$tdataroyal_customer[".allSearchFields"][] = "rate_type_count_D";
	$tdataroyal_customer[".allSearchFields"][] = "rate_type_count_J";
	$tdataroyal_customer[".allSearchFields"][] = "rate_type_count_W";
	$tdataroyal_customer[".allSearchFields"][] = "rate_type_count_B";
	$tdataroyal_customer[".allSearchFields"][] = "rate_type_count_H";
	$tdataroyal_customer[".allSearchFields"][] = "rate_type_count_other";
	$tdataroyal_customer[".allSearchFields"][] = "mail1";
	$tdataroyal_customer[".allSearchFields"][] = "mail2";
	$tdataroyal_customer[".allSearchFields"][] = "tel";
	$tdataroyal_customer[".allSearchFields"][] = "tel2";
	$tdataroyal_customer[".allSearchFields"][] = "address1";
	$tdataroyal_customer[".allSearchFields"][] = "address2";
	$tdataroyal_customer[".allSearchFields"][] = "address3";
	

$tdataroyal_customer[".googleLikeFields"] = array();
$tdataroyal_customer[".googleLikeFields"][] = "link";
$tdataroyal_customer[".googleLikeFields"][] = "ecc_id";
$tdataroyal_customer[".googleLikeFields"][] = "gender";
$tdataroyal_customer[".googleLikeFields"][] = "age";
$tdataroyal_customer[".googleLikeFields"][] = "todou";
$tdataroyal_customer[".googleLikeFields"][] = "family";
$tdataroyal_customer[".googleLikeFields"][] = "income";
$tdataroyal_customer[".googleLikeFields"][] = "cumulative_earnings";
$tdataroyal_customer[".googleLikeFields"][] = "number_of_times";
$tdataroyal_customer[".googleLikeFields"][] = "close_rate";
$tdataroyal_customer[".googleLikeFields"][] = "LTV_prediction";
$tdataroyal_customer[".googleLikeFields"][] = "usage_period";
$tdataroyal_customer[".googleLikeFields"][] = "last_closing_date";
$tdataroyal_customer[".googleLikeFields"][] = "type_trend";
$tdataroyal_customer[".googleLikeFields"][] = "handling_number_of_brands";
$tdataroyal_customer[".googleLikeFields"][] = "trend_destination_of_selling";
$tdataroyal_customer[".googleLikeFields"][] = "questionnaire_quality";
$tdataroyal_customer[".googleLikeFields"][] = "updated_at";
$tdataroyal_customer[".googleLikeFields"][] = "updated_by";
$tdataroyal_customer[".googleLikeFields"][] = "created_at";
$tdataroyal_customer[".googleLikeFields"][] = "created_by";
$tdataroyal_customer[".googleLikeFields"][] = "selling_count_ec";
$tdataroyal_customer[".googleLikeFields"][] = "selling_count_ichiba";
$tdataroyal_customer[".googleLikeFields"][] = "type_count_K";
$tdataroyal_customer[".googleLikeFields"][] = "type_count_D";
$tdataroyal_customer[".googleLikeFields"][] = "type_count_J";
$tdataroyal_customer[".googleLikeFields"][] = "type_count_W";
$tdataroyal_customer[".googleLikeFields"][] = "type_count_B";
$tdataroyal_customer[".googleLikeFields"][] = "type_count_H";
$tdataroyal_customer[".googleLikeFields"][] = "type_count_other";
$tdataroyal_customer[".googleLikeFields"][] = "selling_price_ec";
$tdataroyal_customer[".googleLikeFields"][] = "selling_arari_ec";
$tdataroyal_customer[".googleLikeFields"][] = "selling_price_ichiba";
$tdataroyal_customer[".googleLikeFields"][] = "selling_arari_ichiba";
$tdataroyal_customer[".googleLikeFields"][] = "type_price_K";
$tdataroyal_customer[".googleLikeFields"][] = "type_arari_K";
$tdataroyal_customer[".googleLikeFields"][] = "type_price_D";
$tdataroyal_customer[".googleLikeFields"][] = "type_arari_D";
$tdataroyal_customer[".googleLikeFields"][] = "type_price_J";
$tdataroyal_customer[".googleLikeFields"][] = "type_arari_J";
$tdataroyal_customer[".googleLikeFields"][] = "type_price_W";
$tdataroyal_customer[".googleLikeFields"][] = "type_arari_W";
$tdataroyal_customer[".googleLikeFields"][] = "type_price_B";
$tdataroyal_customer[".googleLikeFields"][] = "type_arari_B";
$tdataroyal_customer[".googleLikeFields"][] = "type_price_H";
$tdataroyal_customer[".googleLikeFields"][] = "type_arari_H";
$tdataroyal_customer[".googleLikeFields"][] = "type_price_other";
$tdataroyal_customer[".googleLikeFields"][] = "type_arari_other";
$tdataroyal_customer[".googleLikeFields"][] = "questquestion_count_very_satisfied";
$tdataroyal_customer[".googleLikeFields"][] = "questquestion_count_somewhat_satisfied";
$tdataroyal_customer[".googleLikeFields"][] = "questquestion_count_usually";
$tdataroyal_customer[".googleLikeFields"][] = "questquestion_count_somewhat_dissatisfied";
$tdataroyal_customer[".googleLikeFields"][] = "questquestion_count_complain";
$tdataroyal_customer[".googleLikeFields"][] = "name1";
$tdataroyal_customer[".googleLikeFields"][] = "name2";
$tdataroyal_customer[".googleLikeFields"][] = "address1";
$tdataroyal_customer[".googleLikeFields"][] = "address2";
$tdataroyal_customer[".googleLikeFields"][] = "address3";
$tdataroyal_customer[".googleLikeFields"][] = "tel";
$tdataroyal_customer[".googleLikeFields"][] = "tel2";
$tdataroyal_customer[".googleLikeFields"][] = "mail1";
$tdataroyal_customer[".googleLikeFields"][] = "mail2";
$tdataroyal_customer[".googleLikeFields"][] = "rate_selling_count_EC";
$tdataroyal_customer[".googleLikeFields"][] = "rate_selling_count_ichiba";
$tdataroyal_customer[".googleLikeFields"][] = "rate_type_count_K";
$tdataroyal_customer[".googleLikeFields"][] = "rate_type_count_D";
$tdataroyal_customer[".googleLikeFields"][] = "rate_type_count_J";
$tdataroyal_customer[".googleLikeFields"][] = "rate_type_count_W";
$tdataroyal_customer[".googleLikeFields"][] = "rate_type_count_B";
$tdataroyal_customer[".googleLikeFields"][] = "rate_type_count_H";
$tdataroyal_customer[".googleLikeFields"][] = "rate_type_count_other";
$tdataroyal_customer[".googleLikeFields"][] = "royal_customer_type";
$tdataroyal_customer[".googleLikeFields"][] = "royal_customer_status";


$tdataroyal_customer[".advSearchFields"] = array();
$tdataroyal_customer[".advSearchFields"][] = "royal_customer_status";
$tdataroyal_customer[".advSearchFields"][] = "link";
$tdataroyal_customer[".advSearchFields"][] = "royal_customer_type";
$tdataroyal_customer[".advSearchFields"][] = "ecc_id";
$tdataroyal_customer[".advSearchFields"][] = "name1";
$tdataroyal_customer[".advSearchFields"][] = "name2";
$tdataroyal_customer[".advSearchFields"][] = "gender";
$tdataroyal_customer[".advSearchFields"][] = "age";
$tdataroyal_customer[".advSearchFields"][] = "todou";
$tdataroyal_customer[".advSearchFields"][] = "family";
$tdataroyal_customer[".advSearchFields"][] = "income";
$tdataroyal_customer[".advSearchFields"][] = "cumulative_earnings";
$tdataroyal_customer[".advSearchFields"][] = "number_of_times";
$tdataroyal_customer[".advSearchFields"][] = "close_rate";
$tdataroyal_customer[".advSearchFields"][] = "LTV_prediction";
$tdataroyal_customer[".advSearchFields"][] = "usage_period";
$tdataroyal_customer[".advSearchFields"][] = "last_closing_date";
$tdataroyal_customer[".advSearchFields"][] = "handling_number_of_brands";
$tdataroyal_customer[".advSearchFields"][] = "rate_selling_count_EC";
$tdataroyal_customer[".advSearchFields"][] = "rate_selling_count_ichiba";
$tdataroyal_customer[".advSearchFields"][] = "rate_type_count_K";
$tdataroyal_customer[".advSearchFields"][] = "rate_type_count_D";
$tdataroyal_customer[".advSearchFields"][] = "rate_type_count_J";
$tdataroyal_customer[".advSearchFields"][] = "rate_type_count_W";
$tdataroyal_customer[".advSearchFields"][] = "rate_type_count_B";
$tdataroyal_customer[".advSearchFields"][] = "rate_type_count_H";
$tdataroyal_customer[".advSearchFields"][] = "rate_type_count_other";
$tdataroyal_customer[".advSearchFields"][] = "mail1";
$tdataroyal_customer[".advSearchFields"][] = "mail2";
$tdataroyal_customer[".advSearchFields"][] = "tel";
$tdataroyal_customer[".advSearchFields"][] = "tel2";
$tdataroyal_customer[".advSearchFields"][] = "address1";
$tdataroyal_customer[".advSearchFields"][] = "address2";
$tdataroyal_customer[".advSearchFields"][] = "address3";

$tdataroyal_customer[".tableType"] = "list";

$tdataroyal_customer[".printerPageOrientation"] = 0;
$tdataroyal_customer[".nPrinterPageScale"] = 100;

$tdataroyal_customer[".nPrinterSplitRecords"] = 40;

$tdataroyal_customer[".nPrinterPDFSplitRecords"] = 40;



$tdataroyal_customer[".geocodingEnabled"] = false;





$tdataroyal_customer[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataroyal_customer[".pageSize"] = 20;

$tdataroyal_customer[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataroyal_customer[".strOrderBy"] = $tstrOrderBy;

$tdataroyal_customer[".orderindexes"] = array();

$tdataroyal_customer[".sqlHead"] = "SELECT `royal_customer`.`ecc_id` AS `link`,  `royal_customer`.`ecc_id`,  `royal_customer`.`gender`,  `royal_customer`.`age`,  `royal_customer`.`todou`,  `royal_customer`.`family`,  `royal_customer`.`income`,  `royal_customer`.`cumulative_earnings`,  `royal_customer`.`number_of_times`,  `royal_customer`.`close_rate`,  `royal_customer`.`LTV_prediction`,  `royal_customer`.`usage_period`,  `royal_customer`.`last_closing_date`,  `royal_customer`.`type_trend`,  `royal_customer`.`handling_number_of_brands`,  `royal_customer`.`trend_destination_of_selling`,  `royal_customer`.`questionnaire_quality`,  `royal_customer`.`updated_at`,  `royal_customer`.`updated_by`,  `royal_customer`.`created_at`,  `royal_customer`.`created_by`,  `royal_customer`.`selling_count_ec`,  `royal_customer`.`selling_count_ichiba`,  `royal_customer`.`type_count_K`,  `royal_customer`.`type_count_D`,  `royal_customer`.`type_count_J`,  `royal_customer`.`type_count_W`,  `royal_customer`.`type_count_B`,  `royal_customer`.`type_count_H`,  `royal_customer`.`type_count_other`,  `royal_customer`.`selling_price_ec`,  `royal_customer`.`selling_arari_ec`,  `royal_customer`.`selling_price_ichiba`,  `royal_customer`.`selling_arari_ichiba`,  `royal_customer`.`type_price_K`,  `royal_customer`.`type_arari_K`,  `royal_customer`.`type_price_D`,  `royal_customer`.`type_arari_D`,  `royal_customer`.`type_price_J`,  `royal_customer`.`type_arari_J`,  `royal_customer`.`type_price_W`,  `royal_customer`.`type_arari_W`,  `royal_customer`.`type_price_B`,  `royal_customer`.`type_arari_B`,  `royal_customer`.`type_price_H`,  `royal_customer`.`type_arari_H`,  `royal_customer`.`type_price_other`,  `royal_customer`.`type_arari_other`,  `royal_customer`.`questquestion_count_very_satisfied`,  `royal_customer`.`questquestion_count_somewhat_satisfied`,  `royal_customer`.`questquestion_count_usually`,  `royal_customer`.`questquestion_count_somewhat_dissatisfied`,  `royal_customer`.`questquestion_count_complain`,  `Eoc`.`name1`,  `Eoc`.`name2`,  `Eoc`.`address1`,  `Eoc`.`address2`,  `Eoc`.`address3`,  `Eoc`.`tel`,  `Eoc`.`tel2`,  `Eoc`.`mail1`,  `Eoc`.`mail2`,  `royal_customer`.`rate_selling_count_EC`,  `royal_customer`.`rate_selling_count_ichiba`,  `royal_customer`.`rate_type_count_K`,  `royal_customer`.`rate_type_count_D`,  `royal_customer`.`rate_type_count_J`,  `royal_customer`.`rate_type_count_W`,  `royal_customer`.`rate_type_count_B`,  `royal_customer`.`rate_type_count_H`,  `royal_customer`.`rate_type_count_other`,  `royal_customer`.`royal_customer_type`,  `Eoc`.`royal_customer_status`";
$tdataroyal_customer[".sqlFrom"] = "FROM `royal_customer`  LEFT OUTER JOIN `Eoc` ON `royal_customer`.`ecc_id` = `Eoc`.`ecc_id`";
$tdataroyal_customer[".sqlWhereExpr"] = "";
$tdataroyal_customer[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataroyal_customer[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataroyal_customer[".arrGroupsPerPage"] = $arrGPP;

$tdataroyal_customer[".highlightSearchResults"] = true;

$tableKeysroyal_customer = array();
$tableKeysroyal_customer[] = "ecc_id";
$tdataroyal_customer[".Keys"] = $tableKeysroyal_customer;

$tdataroyal_customer[".listFields"] = array();
$tdataroyal_customer[".listFields"][] = "royal_customer_status";
$tdataroyal_customer[".listFields"][] = "link";
$tdataroyal_customer[".listFields"][] = "royal_customer_type";
$tdataroyal_customer[".listFields"][] = "ecc_id";
$tdataroyal_customer[".listFields"][] = "name1";
$tdataroyal_customer[".listFields"][] = "name2";
$tdataroyal_customer[".listFields"][] = "gender";
$tdataroyal_customer[".listFields"][] = "age";
$tdataroyal_customer[".listFields"][] = "todou";
$tdataroyal_customer[".listFields"][] = "family";
$tdataroyal_customer[".listFields"][] = "income";
$tdataroyal_customer[".listFields"][] = "cumulative_earnings";
$tdataroyal_customer[".listFields"][] = "number_of_times";
$tdataroyal_customer[".listFields"][] = "close_rate";
$tdataroyal_customer[".listFields"][] = "LTV_prediction";
$tdataroyal_customer[".listFields"][] = "usage_period";
$tdataroyal_customer[".listFields"][] = "last_closing_date";
$tdataroyal_customer[".listFields"][] = "handling_number_of_brands";
$tdataroyal_customer[".listFields"][] = "rate_selling_count_EC";
$tdataroyal_customer[".listFields"][] = "rate_selling_count_ichiba";
$tdataroyal_customer[".listFields"][] = "rate_type_count_K";
$tdataroyal_customer[".listFields"][] = "rate_type_count_D";
$tdataroyal_customer[".listFields"][] = "rate_type_count_J";
$tdataroyal_customer[".listFields"][] = "rate_type_count_W";
$tdataroyal_customer[".listFields"][] = "rate_type_count_B";
$tdataroyal_customer[".listFields"][] = "rate_type_count_H";
$tdataroyal_customer[".listFields"][] = "rate_type_count_other";
$tdataroyal_customer[".listFields"][] = "mail1";
$tdataroyal_customer[".listFields"][] = "mail2";
$tdataroyal_customer[".listFields"][] = "tel";
$tdataroyal_customer[".listFields"][] = "tel2";
$tdataroyal_customer[".listFields"][] = "address1";
$tdataroyal_customer[".listFields"][] = "address2";
$tdataroyal_customer[".listFields"][] = "address3";

$tdataroyal_customer[".hideMobileList"] = array();


$tdataroyal_customer[".viewFields"] = array();

$tdataroyal_customer[".addFields"] = array();

$tdataroyal_customer[".masterListFields"] = array();
$tdataroyal_customer[".masterListFields"][] = "selling_count_ec";
$tdataroyal_customer[".masterListFields"][] = "selling_count_ichiba";
$tdataroyal_customer[".masterListFields"][] = "type_count_K";
$tdataroyal_customer[".masterListFields"][] = "type_count_D";
$tdataroyal_customer[".masterListFields"][] = "type_count_J";
$tdataroyal_customer[".masterListFields"][] = "type_count_W";
$tdataroyal_customer[".masterListFields"][] = "type_count_B";
$tdataroyal_customer[".masterListFields"][] = "type_count_H";
$tdataroyal_customer[".masterListFields"][] = "type_count_other";
$tdataroyal_customer[".masterListFields"][] = "selling_price_ec";
$tdataroyal_customer[".masterListFields"][] = "selling_arari_ec";
$tdataroyal_customer[".masterListFields"][] = "selling_price_ichiba";
$tdataroyal_customer[".masterListFields"][] = "selling_arari_ichiba";
$tdataroyal_customer[".masterListFields"][] = "type_price_K";
$tdataroyal_customer[".masterListFields"][] = "type_arari_K";
$tdataroyal_customer[".masterListFields"][] = "type_price_D";
$tdataroyal_customer[".masterListFields"][] = "type_arari_D";
$tdataroyal_customer[".masterListFields"][] = "type_price_J";
$tdataroyal_customer[".masterListFields"][] = "type_arari_J";
$tdataroyal_customer[".masterListFields"][] = "type_price_W";
$tdataroyal_customer[".masterListFields"][] = "type_arari_W";
$tdataroyal_customer[".masterListFields"][] = "type_price_B";
$tdataroyal_customer[".masterListFields"][] = "type_arari_B";
$tdataroyal_customer[".masterListFields"][] = "type_price_H";
$tdataroyal_customer[".masterListFields"][] = "type_arari_H";
$tdataroyal_customer[".masterListFields"][] = "type_price_other";
$tdataroyal_customer[".masterListFields"][] = "type_arari_other";
$tdataroyal_customer[".masterListFields"][] = "questquestion_count_very_satisfied";
$tdataroyal_customer[".masterListFields"][] = "questquestion_count_somewhat_satisfied";
$tdataroyal_customer[".masterListFields"][] = "questquestion_count_usually";
$tdataroyal_customer[".masterListFields"][] = "questquestion_count_somewhat_dissatisfied";
$tdataroyal_customer[".masterListFields"][] = "questquestion_count_complain";
$tdataroyal_customer[".masterListFields"][] = "royal_customer_status";
$tdataroyal_customer[".masterListFields"][] = "link";
$tdataroyal_customer[".masterListFields"][] = "royal_customer_type";
$tdataroyal_customer[".masterListFields"][] = "ecc_id";
$tdataroyal_customer[".masterListFields"][] = "name1";
$tdataroyal_customer[".masterListFields"][] = "name2";
$tdataroyal_customer[".masterListFields"][] = "gender";
$tdataroyal_customer[".masterListFields"][] = "age";
$tdataroyal_customer[".masterListFields"][] = "todou";
$tdataroyal_customer[".masterListFields"][] = "family";
$tdataroyal_customer[".masterListFields"][] = "income";
$tdataroyal_customer[".masterListFields"][] = "cumulative_earnings";
$tdataroyal_customer[".masterListFields"][] = "number_of_times";
$tdataroyal_customer[".masterListFields"][] = "close_rate";
$tdataroyal_customer[".masterListFields"][] = "type_trend";
$tdataroyal_customer[".masterListFields"][] = "LTV_prediction";
$tdataroyal_customer[".masterListFields"][] = "usage_period";
$tdataroyal_customer[".masterListFields"][] = "trend_destination_of_selling";
$tdataroyal_customer[".masterListFields"][] = "last_closing_date";
$tdataroyal_customer[".masterListFields"][] = "questionnaire_quality";
$tdataroyal_customer[".masterListFields"][] = "handling_number_of_brands";
$tdataroyal_customer[".masterListFields"][] = "rate_selling_count_EC";
$tdataroyal_customer[".masterListFields"][] = "rate_selling_count_ichiba";
$tdataroyal_customer[".masterListFields"][] = "rate_type_count_K";
$tdataroyal_customer[".masterListFields"][] = "rate_type_count_D";
$tdataroyal_customer[".masterListFields"][] = "rate_type_count_J";
$tdataroyal_customer[".masterListFields"][] = "rate_type_count_W";
$tdataroyal_customer[".masterListFields"][] = "rate_type_count_B";
$tdataroyal_customer[".masterListFields"][] = "rate_type_count_H";
$tdataroyal_customer[".masterListFields"][] = "rate_type_count_other";
$tdataroyal_customer[".masterListFields"][] = "mail1";
$tdataroyal_customer[".masterListFields"][] = "mail2";
$tdataroyal_customer[".masterListFields"][] = "tel";
$tdataroyal_customer[".masterListFields"][] = "tel2";
$tdataroyal_customer[".masterListFields"][] = "address1";
$tdataroyal_customer[".masterListFields"][] = "address2";
$tdataroyal_customer[".masterListFields"][] = "updated_at";
$tdataroyal_customer[".masterListFields"][] = "address3";
$tdataroyal_customer[".masterListFields"][] = "updated_by";
$tdataroyal_customer[".masterListFields"][] = "created_at";
$tdataroyal_customer[".masterListFields"][] = "created_by";

$tdataroyal_customer[".inlineAddFields"] = array();

$tdataroyal_customer[".editFields"] = array();

$tdataroyal_customer[".inlineEditFields"] = array();

$tdataroyal_customer[".updateSelectedFields"] = array();


$tdataroyal_customer[".exportFields"] = array();
$tdataroyal_customer[".exportFields"][] = "royal_customer_status";
$tdataroyal_customer[".exportFields"][] = "link";
$tdataroyal_customer[".exportFields"][] = "royal_customer_type";
$tdataroyal_customer[".exportFields"][] = "ecc_id";
$tdataroyal_customer[".exportFields"][] = "name1";
$tdataroyal_customer[".exportFields"][] = "name2";
$tdataroyal_customer[".exportFields"][] = "gender";
$tdataroyal_customer[".exportFields"][] = "age";
$tdataroyal_customer[".exportFields"][] = "todou";
$tdataroyal_customer[".exportFields"][] = "family";
$tdataroyal_customer[".exportFields"][] = "income";
$tdataroyal_customer[".exportFields"][] = "cumulative_earnings";
$tdataroyal_customer[".exportFields"][] = "number_of_times";
$tdataroyal_customer[".exportFields"][] = "close_rate";
$tdataroyal_customer[".exportFields"][] = "LTV_prediction";
$tdataroyal_customer[".exportFields"][] = "usage_period";
$tdataroyal_customer[".exportFields"][] = "last_closing_date";
$tdataroyal_customer[".exportFields"][] = "handling_number_of_brands";
$tdataroyal_customer[".exportFields"][] = "rate_selling_count_EC";
$tdataroyal_customer[".exportFields"][] = "rate_selling_count_ichiba";
$tdataroyal_customer[".exportFields"][] = "rate_type_count_K";
$tdataroyal_customer[".exportFields"][] = "rate_type_count_D";
$tdataroyal_customer[".exportFields"][] = "rate_type_count_J";
$tdataroyal_customer[".exportFields"][] = "rate_type_count_W";
$tdataroyal_customer[".exportFields"][] = "rate_type_count_B";
$tdataroyal_customer[".exportFields"][] = "rate_type_count_H";
$tdataroyal_customer[".exportFields"][] = "rate_type_count_other";
$tdataroyal_customer[".exportFields"][] = "mail1";
$tdataroyal_customer[".exportFields"][] = "mail2";
$tdataroyal_customer[".exportFields"][] = "tel";
$tdataroyal_customer[".exportFields"][] = "tel2";
$tdataroyal_customer[".exportFields"][] = "address1";
$tdataroyal_customer[".exportFields"][] = "address2";
$tdataroyal_customer[".exportFields"][] = "address3";

$tdataroyal_customer[".importFields"] = array();
$tdataroyal_customer[".importFields"][] = "ecc_id";
$tdataroyal_customer[".importFields"][] = "family";
$tdataroyal_customer[".importFields"][] = "income";
$tdataroyal_customer[".importFields"][] = "royal_customer_status";

$tdataroyal_customer[".printFields"] = array();

//	link
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "link";
	$fdata["GoodName"] = "link";
	$fdata["ownerTable"] = "royal_customer";
	$fdata["Label"] = GetFieldLabel("royal_customer","link");
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




	$tdataroyal_customer["link"] = $fdata;
//	ecc_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ecc_id";
	$fdata["GoodName"] = "ecc_id";
	$fdata["ownerTable"] = "royal_customer";
	$fdata["Label"] = GetFieldLabel("royal_customer","ecc_id");
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




	$tdataroyal_customer["ecc_id"] = $fdata;
//	gender
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "gender";
	$fdata["GoodName"] = "gender";
	$fdata["ownerTable"] = "royal_customer";
	$fdata["Label"] = GetFieldLabel("royal_customer","gender");
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




	$tdataroyal_customer["gender"] = $fdata;
//	age
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "age";
	$fdata["GoodName"] = "age";
	$fdata["ownerTable"] = "royal_customer";
	$fdata["Label"] = GetFieldLabel("royal_customer","age");
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




	$tdataroyal_customer["age"] = $fdata;
//	todou
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "todou";
	$fdata["GoodName"] = "todou";
	$fdata["ownerTable"] = "royal_customer";
	$fdata["Label"] = GetFieldLabel("royal_customer","todou");
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




	$tdataroyal_customer["todou"] = $fdata;
//	family
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "family";
	$fdata["GoodName"] = "family";
	$fdata["ownerTable"] = "royal_customer";
	$fdata["Label"] = GetFieldLabel("royal_customer","family");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "family";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`royal_customer`.`family`";

	
	
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




	$tdataroyal_customer["family"] = $fdata;
//	income
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "income";
	$fdata["GoodName"] = "income";
	$fdata["ownerTable"] = "royal_customer";
	$fdata["Label"] = GetFieldLabel("royal_customer","income");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "income";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`royal_customer`.`income`";

	
	
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




	$tdataroyal_customer["income"] = $fdata;
//	cumulative_earnings
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "cumulative_earnings";
	$fdata["GoodName"] = "cumulative_earnings";
	$fdata["ownerTable"] = "royal_customer";
	$fdata["Label"] = GetFieldLabel("royal_customer","cumulative_earnings");
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




	$tdataroyal_customer["cumulative_earnings"] = $fdata;
//	number_of_times
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "number_of_times";
	$fdata["GoodName"] = "number_of_times";
	$fdata["ownerTable"] = "royal_customer";
	$fdata["Label"] = GetFieldLabel("royal_customer","number_of_times");
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




	$tdataroyal_customer["number_of_times"] = $fdata;
//	close_rate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "close_rate";
	$fdata["GoodName"] = "close_rate";
	$fdata["ownerTable"] = "royal_customer";
	$fdata["Label"] = GetFieldLabel("royal_customer","close_rate");
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




	$tdataroyal_customer["close_rate"] = $fdata;
//	LTV_prediction
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "LTV_prediction";
	$fdata["GoodName"] = "LTV_prediction";
	$fdata["ownerTable"] = "royal_customer";
	$fdata["Label"] = GetFieldLabel("royal_customer","LTV_prediction");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "LTV_prediction";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`royal_customer`.`LTV_prediction`";

	
	
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




	$tdataroyal_customer["LTV_prediction"] = $fdata;
//	usage_period
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "usage_period";
	$fdata["GoodName"] = "usage_period";
	$fdata["ownerTable"] = "royal_customer";
	$fdata["Label"] = GetFieldLabel("royal_customer","usage_period");
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataroyal_customer["usage_period"] = $fdata;
//	last_closing_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "last_closing_date";
	$fdata["GoodName"] = "last_closing_date";
	$fdata["ownerTable"] = "royal_customer";
	$fdata["Label"] = GetFieldLabel("royal_customer","last_closing_date");
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




	$tdataroyal_customer["last_closing_date"] = $fdata;
//	type_trend
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "type_trend";
	$fdata["GoodName"] = "type_trend";
	$fdata["ownerTable"] = "royal_customer";
	$fdata["Label"] = GetFieldLabel("royal_customer","type_trend");
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








	$tdataroyal_customer["type_trend"] = $fdata;
//	handling_number_of_brands
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "handling_number_of_brands";
	$fdata["GoodName"] = "handling_number_of_brands";
	$fdata["ownerTable"] = "royal_customer";
	$fdata["Label"] = GetFieldLabel("royal_customer","handling_number_of_brands");
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




	$tdataroyal_customer["handling_number_of_brands"] = $fdata;
//	trend_destination_of_selling
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "trend_destination_of_selling";
	$fdata["GoodName"] = "trend_destination_of_selling";
	$fdata["ownerTable"] = "royal_customer";
	$fdata["Label"] = GetFieldLabel("royal_customer","trend_destination_of_selling");
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








	$tdataroyal_customer["trend_destination_of_selling"] = $fdata;
//	questionnaire_quality
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "questionnaire_quality";
	$fdata["GoodName"] = "questionnaire_quality";
	$fdata["ownerTable"] = "royal_customer";
	$fdata["Label"] = GetFieldLabel("royal_customer","questionnaire_quality");
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








	$tdataroyal_customer["questionnaire_quality"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "royal_customer";
	$fdata["Label"] = GetFieldLabel("royal_customer","updated_at");
	$fdata["FieldType"] = 135;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "updated_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`royal_customer`.`updated_at`";

	
	
			
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








	$tdataroyal_customer["updated_at"] = $fdata;
//	updated_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "updated_by";
	$fdata["GoodName"] = "updated_by";
	$fdata["ownerTable"] = "royal_customer";
	$fdata["Label"] = GetFieldLabel("royal_customer","updated_by");
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








	$tdataroyal_customer["updated_by"] = $fdata;
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "royal_customer";
	$fdata["Label"] = GetFieldLabel("royal_customer","created_at");
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








	$tdataroyal_customer["created_at"] = $fdata;
//	created_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "created_by";
	$fdata["GoodName"] = "created_by";
	$fdata["ownerTable"] = "royal_customer";
	$fdata["Label"] = GetFieldLabel("royal_customer","created_by");
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








	$tdataroyal_customer["created_by"] = $fdata;
//	selling_count_ec
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "selling_count_ec";
	$fdata["GoodName"] = "selling_count_ec";
	$fdata["ownerTable"] = "royal_customer";
	$fdata["Label"] = GetFieldLabel("royal_customer","selling_count_ec");
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








	$tdataroyal_customer["selling_count_ec"] = $fdata;
//	selling_count_ichiba
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "selling_count_ichiba";
	$fdata["GoodName"] = "selling_count_ichiba";
	$fdata["ownerTable"] = "royal_customer";
	$fdata["Label"] = GetFieldLabel("royal_customer","selling_count_ichiba");
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








	$tdataroyal_customer["selling_count_ichiba"] = $fdata;
//	type_count_K
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "type_count_K";
	$fdata["GoodName"] = "type_count_K";
	$fdata["ownerTable"] = "royal_customer";
	$fdata["Label"] = GetFieldLabel("royal_customer","type_count_K");
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








	$tdataroyal_customer["type_count_K"] = $fdata;
//	type_count_D
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "type_count_D";
	$fdata["GoodName"] = "type_count_D";
	$fdata["ownerTable"] = "royal_customer";
	$fdata["Label"] = GetFieldLabel("royal_customer","type_count_D");
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








	$tdataroyal_customer["type_count_D"] = $fdata;
//	type_count_J
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "type_count_J";
	$fdata["GoodName"] = "type_count_J";
	$fdata["ownerTable"] = "royal_customer";
	$fdata["Label"] = GetFieldLabel("royal_customer","type_count_J");
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








	$tdataroyal_customer["type_count_J"] = $fdata;
//	type_count_W
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "type_count_W";
	$fdata["GoodName"] = "type_count_W";
	$fdata["ownerTable"] = "royal_customer";
	$fdata["Label"] = GetFieldLabel("royal_customer","type_count_W");
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








	$tdataroyal_customer["type_count_W"] = $fdata;
//	type_count_B
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "type_count_B";
	$fdata["GoodName"] = "type_count_B";
	$fdata["ownerTable"] = "royal_customer";
	$fdata["Label"] = GetFieldLabel("royal_customer","type_count_B");
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








	$tdataroyal_customer["type_count_B"] = $fdata;
//	type_count_H
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "type_count_H";
	$fdata["GoodName"] = "type_count_H";
	$fdata["ownerTable"] = "royal_customer";
	$fdata["Label"] = GetFieldLabel("royal_customer","type_count_H");
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








	$tdataroyal_customer["type_count_H"] = $fdata;
//	type_count_other
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "type_count_other";
	$fdata["GoodName"] = "type_count_other";
	$fdata["ownerTable"] = "royal_customer";
	$fdata["Label"] = GetFieldLabel("royal_customer","type_count_other");
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








	$tdataroyal_customer["type_count_other"] = $fdata;
//	selling_price_ec
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "selling_price_ec";
	$fdata["GoodName"] = "selling_price_ec";
	$fdata["ownerTable"] = "royal_customer";
	$fdata["Label"] = GetFieldLabel("royal_customer","selling_price_ec");
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








	$tdataroyal_customer["selling_price_ec"] = $fdata;
//	selling_arari_ec
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "selling_arari_ec";
	$fdata["GoodName"] = "selling_arari_ec";
	$fdata["ownerTable"] = "royal_customer";
	$fdata["Label"] = GetFieldLabel("royal_customer","selling_arari_ec");
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








	$tdataroyal_customer["selling_arari_ec"] = $fdata;
//	selling_price_ichiba
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "selling_price_ichiba";
	$fdata["GoodName"] = "selling_price_ichiba";
	$fdata["ownerTable"] = "royal_customer";
	$fdata["Label"] = GetFieldLabel("royal_customer","selling_price_ichiba");
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








	$tdataroyal_customer["selling_price_ichiba"] = $fdata;
//	selling_arari_ichiba
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "selling_arari_ichiba";
	$fdata["GoodName"] = "selling_arari_ichiba";
	$fdata["ownerTable"] = "royal_customer";
	$fdata["Label"] = GetFieldLabel("royal_customer","selling_arari_ichiba");
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








	$tdataroyal_customer["selling_arari_ichiba"] = $fdata;
//	type_price_K
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "type_price_K";
	$fdata["GoodName"] = "type_price_K";
	$fdata["ownerTable"] = "royal_customer";
	$fdata["Label"] = GetFieldLabel("royal_customer","type_price_K");
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








	$tdataroyal_customer["type_price_K"] = $fdata;
//	type_arari_K
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "type_arari_K";
	$fdata["GoodName"] = "type_arari_K";
	$fdata["ownerTable"] = "royal_customer";
	$fdata["Label"] = GetFieldLabel("royal_customer","type_arari_K");
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








	$tdataroyal_customer["type_arari_K"] = $fdata;
//	type_price_D
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "type_price_D";
	$fdata["GoodName"] = "type_price_D";
	$fdata["ownerTable"] = "royal_customer";
	$fdata["Label"] = GetFieldLabel("royal_customer","type_price_D");
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








	$tdataroyal_customer["type_price_D"] = $fdata;
//	type_arari_D
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "type_arari_D";
	$fdata["GoodName"] = "type_arari_D";
	$fdata["ownerTable"] = "royal_customer";
	$fdata["Label"] = GetFieldLabel("royal_customer","type_arari_D");
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








	$tdataroyal_customer["type_arari_D"] = $fdata;
//	type_price_J
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "type_price_J";
	$fdata["GoodName"] = "type_price_J";
	$fdata["ownerTable"] = "royal_customer";
	$fdata["Label"] = GetFieldLabel("royal_customer","type_price_J");
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








	$tdataroyal_customer["type_price_J"] = $fdata;
//	type_arari_J
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "type_arari_J";
	$fdata["GoodName"] = "type_arari_J";
	$fdata["ownerTable"] = "royal_customer";
	$fdata["Label"] = GetFieldLabel("royal_customer","type_arari_J");
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








	$tdataroyal_customer["type_arari_J"] = $fdata;
//	type_price_W
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "type_price_W";
	$fdata["GoodName"] = "type_price_W";
	$fdata["ownerTable"] = "royal_customer";
	$fdata["Label"] = GetFieldLabel("royal_customer","type_price_W");
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








	$tdataroyal_customer["type_price_W"] = $fdata;
//	type_arari_W
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "type_arari_W";
	$fdata["GoodName"] = "type_arari_W";
	$fdata["ownerTable"] = "royal_customer";
	$fdata["Label"] = GetFieldLabel("royal_customer","type_arari_W");
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








	$tdataroyal_customer["type_arari_W"] = $fdata;
//	type_price_B
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "type_price_B";
	$fdata["GoodName"] = "type_price_B";
	$fdata["ownerTable"] = "royal_customer";
	$fdata["Label"] = GetFieldLabel("royal_customer","type_price_B");
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








	$tdataroyal_customer["type_price_B"] = $fdata;
//	type_arari_B
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "type_arari_B";
	$fdata["GoodName"] = "type_arari_B";
	$fdata["ownerTable"] = "royal_customer";
	$fdata["Label"] = GetFieldLabel("royal_customer","type_arari_B");
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








	$tdataroyal_customer["type_arari_B"] = $fdata;
//	type_price_H
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "type_price_H";
	$fdata["GoodName"] = "type_price_H";
	$fdata["ownerTable"] = "royal_customer";
	$fdata["Label"] = GetFieldLabel("royal_customer","type_price_H");
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








	$tdataroyal_customer["type_price_H"] = $fdata;
//	type_arari_H
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "type_arari_H";
	$fdata["GoodName"] = "type_arari_H";
	$fdata["ownerTable"] = "royal_customer";
	$fdata["Label"] = GetFieldLabel("royal_customer","type_arari_H");
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








	$tdataroyal_customer["type_arari_H"] = $fdata;
//	type_price_other
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 47;
	$fdata["strName"] = "type_price_other";
	$fdata["GoodName"] = "type_price_other";
	$fdata["ownerTable"] = "royal_customer";
	$fdata["Label"] = GetFieldLabel("royal_customer","type_price_other");
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








	$tdataroyal_customer["type_price_other"] = $fdata;
//	type_arari_other
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 48;
	$fdata["strName"] = "type_arari_other";
	$fdata["GoodName"] = "type_arari_other";
	$fdata["ownerTable"] = "royal_customer";
	$fdata["Label"] = GetFieldLabel("royal_customer","type_arari_other");
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








	$tdataroyal_customer["type_arari_other"] = $fdata;
//	questquestion_count_very_satisfied
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 49;
	$fdata["strName"] = "questquestion_count_very_satisfied";
	$fdata["GoodName"] = "questquestion_count_very_satisfied";
	$fdata["ownerTable"] = "royal_customer";
	$fdata["Label"] = GetFieldLabel("royal_customer","questquestion_count_very_satisfied");
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








	$tdataroyal_customer["questquestion_count_very_satisfied"] = $fdata;
//	questquestion_count_somewhat_satisfied
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 50;
	$fdata["strName"] = "questquestion_count_somewhat_satisfied";
	$fdata["GoodName"] = "questquestion_count_somewhat_satisfied";
	$fdata["ownerTable"] = "royal_customer";
	$fdata["Label"] = GetFieldLabel("royal_customer","questquestion_count_somewhat_satisfied");
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








	$tdataroyal_customer["questquestion_count_somewhat_satisfied"] = $fdata;
//	questquestion_count_usually
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 51;
	$fdata["strName"] = "questquestion_count_usually";
	$fdata["GoodName"] = "questquestion_count_usually";
	$fdata["ownerTable"] = "royal_customer";
	$fdata["Label"] = GetFieldLabel("royal_customer","questquestion_count_usually");
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








	$tdataroyal_customer["questquestion_count_usually"] = $fdata;
//	questquestion_count_somewhat_dissatisfied
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 52;
	$fdata["strName"] = "questquestion_count_somewhat_dissatisfied";
	$fdata["GoodName"] = "questquestion_count_somewhat_dissatisfied";
	$fdata["ownerTable"] = "royal_customer";
	$fdata["Label"] = GetFieldLabel("royal_customer","questquestion_count_somewhat_dissatisfied");
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








	$tdataroyal_customer["questquestion_count_somewhat_dissatisfied"] = $fdata;
//	questquestion_count_complain
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 53;
	$fdata["strName"] = "questquestion_count_complain";
	$fdata["GoodName"] = "questquestion_count_complain";
	$fdata["ownerTable"] = "royal_customer";
	$fdata["Label"] = GetFieldLabel("royal_customer","questquestion_count_complain");
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








	$tdataroyal_customer["questquestion_count_complain"] = $fdata;
//	name1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 54;
	$fdata["strName"] = "name1";
	$fdata["GoodName"] = "name1";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("royal_customer","name1");
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




	$tdataroyal_customer["name1"] = $fdata;
//	name2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 55;
	$fdata["strName"] = "name2";
	$fdata["GoodName"] = "name2";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("royal_customer","name2");
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




	$tdataroyal_customer["name2"] = $fdata;
//	address1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 56;
	$fdata["strName"] = "address1";
	$fdata["GoodName"] = "address1";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("royal_customer","address1");
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




	$tdataroyal_customer["address1"] = $fdata;
//	address2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 57;
	$fdata["strName"] = "address2";
	$fdata["GoodName"] = "address2";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("royal_customer","address2");
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




	$tdataroyal_customer["address2"] = $fdata;
//	address3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 58;
	$fdata["strName"] = "address3";
	$fdata["GoodName"] = "address3";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("royal_customer","address3");
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




	$tdataroyal_customer["address3"] = $fdata;
//	tel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 59;
	$fdata["strName"] = "tel";
	$fdata["GoodName"] = "tel";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("royal_customer","tel");
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




	$tdataroyal_customer["tel"] = $fdata;
//	tel2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 60;
	$fdata["strName"] = "tel2";
	$fdata["GoodName"] = "tel2";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("royal_customer","tel2");
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




	$tdataroyal_customer["tel2"] = $fdata;
//	mail1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 61;
	$fdata["strName"] = "mail1";
	$fdata["GoodName"] = "mail1";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("royal_customer","mail1");
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




	$tdataroyal_customer["mail1"] = $fdata;
//	mail2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 62;
	$fdata["strName"] = "mail2";
	$fdata["GoodName"] = "mail2";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("royal_customer","mail2");
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




	$tdataroyal_customer["mail2"] = $fdata;
//	rate_selling_count_EC
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 63;
	$fdata["strName"] = "rate_selling_count_EC";
	$fdata["GoodName"] = "rate_selling_count_EC";
	$fdata["ownerTable"] = "royal_customer";
	$fdata["Label"] = GetFieldLabel("royal_customer","rate_selling_count_EC");
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




	$tdataroyal_customer["rate_selling_count_EC"] = $fdata;
//	rate_selling_count_ichiba
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 64;
	$fdata["strName"] = "rate_selling_count_ichiba";
	$fdata["GoodName"] = "rate_selling_count_ichiba";
	$fdata["ownerTable"] = "royal_customer";
	$fdata["Label"] = GetFieldLabel("royal_customer","rate_selling_count_ichiba");
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




	$tdataroyal_customer["rate_selling_count_ichiba"] = $fdata;
//	rate_type_count_K
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 65;
	$fdata["strName"] = "rate_type_count_K";
	$fdata["GoodName"] = "rate_type_count_K";
	$fdata["ownerTable"] = "royal_customer";
	$fdata["Label"] = GetFieldLabel("royal_customer","rate_type_count_K");
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




	$tdataroyal_customer["rate_type_count_K"] = $fdata;
//	rate_type_count_D
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 66;
	$fdata["strName"] = "rate_type_count_D";
	$fdata["GoodName"] = "rate_type_count_D";
	$fdata["ownerTable"] = "royal_customer";
	$fdata["Label"] = GetFieldLabel("royal_customer","rate_type_count_D");
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




	$tdataroyal_customer["rate_type_count_D"] = $fdata;
//	rate_type_count_J
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 67;
	$fdata["strName"] = "rate_type_count_J";
	$fdata["GoodName"] = "rate_type_count_J";
	$fdata["ownerTable"] = "royal_customer";
	$fdata["Label"] = GetFieldLabel("royal_customer","rate_type_count_J");
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




	$tdataroyal_customer["rate_type_count_J"] = $fdata;
//	rate_type_count_W
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 68;
	$fdata["strName"] = "rate_type_count_W";
	$fdata["GoodName"] = "rate_type_count_W";
	$fdata["ownerTable"] = "royal_customer";
	$fdata["Label"] = GetFieldLabel("royal_customer","rate_type_count_W");
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




	$tdataroyal_customer["rate_type_count_W"] = $fdata;
//	rate_type_count_B
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 69;
	$fdata["strName"] = "rate_type_count_B";
	$fdata["GoodName"] = "rate_type_count_B";
	$fdata["ownerTable"] = "royal_customer";
	$fdata["Label"] = GetFieldLabel("royal_customer","rate_type_count_B");
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




	$tdataroyal_customer["rate_type_count_B"] = $fdata;
//	rate_type_count_H
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 70;
	$fdata["strName"] = "rate_type_count_H";
	$fdata["GoodName"] = "rate_type_count_H";
	$fdata["ownerTable"] = "royal_customer";
	$fdata["Label"] = GetFieldLabel("royal_customer","rate_type_count_H");
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




	$tdataroyal_customer["rate_type_count_H"] = $fdata;
//	rate_type_count_other
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 71;
	$fdata["strName"] = "rate_type_count_other";
	$fdata["GoodName"] = "rate_type_count_other";
	$fdata["ownerTable"] = "royal_customer";
	$fdata["Label"] = GetFieldLabel("royal_customer","rate_type_count_other");
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




	$tdataroyal_customer["rate_type_count_other"] = $fdata;
//	royal_customer_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 72;
	$fdata["strName"] = "royal_customer_type";
	$fdata["GoodName"] = "royal_customer_type";
	$fdata["ownerTable"] = "royal_customer";
	$fdata["Label"] = GetFieldLabel("royal_customer","royal_customer_type");
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




	$tdataroyal_customer["royal_customer_type"] = $fdata;
//	royal_customer_status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 73;
	$fdata["strName"] = "royal_customer_status";
	$fdata["GoodName"] = "royal_customer_status";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("royal_customer","royal_customer_status");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdataroyal_customer["royal_customer_status"] = $fdata;


$tables_data["royal_customer"]=&$tdataroyal_customer;
$field_labels["royal_customer"] = &$fieldLabelsroyal_customer;
$fieldToolTips["royal_customer"] = &$fieldToolTipsroyal_customer;
$placeHolders["royal_customer"] = &$placeHoldersroyal_customer;
$page_titles["royal_customer"] = &$pageTitlesroyal_customer;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["royal_customer"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["royal_customer"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_royal_customer()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`royal_customer`.`ecc_id` AS `link`,  `royal_customer`.`ecc_id`,  `royal_customer`.`gender`,  `royal_customer`.`age`,  `royal_customer`.`todou`,  `royal_customer`.`family`,  `royal_customer`.`income`,  `royal_customer`.`cumulative_earnings`,  `royal_customer`.`number_of_times`,  `royal_customer`.`close_rate`,  `royal_customer`.`LTV_prediction`,  `royal_customer`.`usage_period`,  `royal_customer`.`last_closing_date`,  `royal_customer`.`type_trend`,  `royal_customer`.`handling_number_of_brands`,  `royal_customer`.`trend_destination_of_selling`,  `royal_customer`.`questionnaire_quality`,  `royal_customer`.`updated_at`,  `royal_customer`.`updated_by`,  `royal_customer`.`created_at`,  `royal_customer`.`created_by`,  `royal_customer`.`selling_count_ec`,  `royal_customer`.`selling_count_ichiba`,  `royal_customer`.`type_count_K`,  `royal_customer`.`type_count_D`,  `royal_customer`.`type_count_J`,  `royal_customer`.`type_count_W`,  `royal_customer`.`type_count_B`,  `royal_customer`.`type_count_H`,  `royal_customer`.`type_count_other`,  `royal_customer`.`selling_price_ec`,  `royal_customer`.`selling_arari_ec`,  `royal_customer`.`selling_price_ichiba`,  `royal_customer`.`selling_arari_ichiba`,  `royal_customer`.`type_price_K`,  `royal_customer`.`type_arari_K`,  `royal_customer`.`type_price_D`,  `royal_customer`.`type_arari_D`,  `royal_customer`.`type_price_J`,  `royal_customer`.`type_arari_J`,  `royal_customer`.`type_price_W`,  `royal_customer`.`type_arari_W`,  `royal_customer`.`type_price_B`,  `royal_customer`.`type_arari_B`,  `royal_customer`.`type_price_H`,  `royal_customer`.`type_arari_H`,  `royal_customer`.`type_price_other`,  `royal_customer`.`type_arari_other`,  `royal_customer`.`questquestion_count_very_satisfied`,  `royal_customer`.`questquestion_count_somewhat_satisfied`,  `royal_customer`.`questquestion_count_usually`,  `royal_customer`.`questquestion_count_somewhat_dissatisfied`,  `royal_customer`.`questquestion_count_complain`,  `Eoc`.`name1`,  `Eoc`.`name2`,  `Eoc`.`address1`,  `Eoc`.`address2`,  `Eoc`.`address3`,  `Eoc`.`tel`,  `Eoc`.`tel2`,  `Eoc`.`mail1`,  `Eoc`.`mail2`,  `royal_customer`.`rate_selling_count_EC`,  `royal_customer`.`rate_selling_count_ichiba`,  `royal_customer`.`rate_type_count_K`,  `royal_customer`.`rate_type_count_D`,  `royal_customer`.`rate_type_count_J`,  `royal_customer`.`rate_type_count_W`,  `royal_customer`.`rate_type_count_B`,  `royal_customer`.`rate_type_count_H`,  `royal_customer`.`rate_type_count_other`,  `royal_customer`.`royal_customer_type`,  `Eoc`.`royal_customer_status`";
$proto0["m_strFrom"] = "FROM `royal_customer`  LEFT OUTER JOIN `Eoc` ON `royal_customer`.`ecc_id` = `Eoc`.`ecc_id`";
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
	"m_strName" => "ecc_id",
	"m_strTable" => "royal_customer",
	"m_srcTableName" => "royal_customer"
));

$proto6["m_sql"] = "`royal_customer`.`ecc_id`";
$proto6["m_srcTableName"] = "royal_customer";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "link";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ecc_id",
	"m_strTable" => "royal_customer",
	"m_srcTableName" => "royal_customer"
));

$proto8["m_sql"] = "`royal_customer`.`ecc_id`";
$proto8["m_srcTableName"] = "royal_customer";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "gender",
	"m_strTable" => "royal_customer",
	"m_srcTableName" => "royal_customer"
));

$proto10["m_sql"] = "`royal_customer`.`gender`";
$proto10["m_srcTableName"] = "royal_customer";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "age",
	"m_strTable" => "royal_customer",
	"m_srcTableName" => "royal_customer"
));

$proto12["m_sql"] = "`royal_customer`.`age`";
$proto12["m_srcTableName"] = "royal_customer";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "todou",
	"m_strTable" => "royal_customer",
	"m_srcTableName" => "royal_customer"
));

$proto14["m_sql"] = "`royal_customer`.`todou`";
$proto14["m_srcTableName"] = "royal_customer";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "family",
	"m_strTable" => "royal_customer",
	"m_srcTableName" => "royal_customer"
));

$proto16["m_sql"] = "`royal_customer`.`family`";
$proto16["m_srcTableName"] = "royal_customer";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "income",
	"m_strTable" => "royal_customer",
	"m_srcTableName" => "royal_customer"
));

$proto18["m_sql"] = "`royal_customer`.`income`";
$proto18["m_srcTableName"] = "royal_customer";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "cumulative_earnings",
	"m_strTable" => "royal_customer",
	"m_srcTableName" => "royal_customer"
));

$proto20["m_sql"] = "`royal_customer`.`cumulative_earnings`";
$proto20["m_srcTableName"] = "royal_customer";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "number_of_times",
	"m_strTable" => "royal_customer",
	"m_srcTableName" => "royal_customer"
));

$proto22["m_sql"] = "`royal_customer`.`number_of_times`";
$proto22["m_srcTableName"] = "royal_customer";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "close_rate",
	"m_strTable" => "royal_customer",
	"m_srcTableName" => "royal_customer"
));

$proto24["m_sql"] = "`royal_customer`.`close_rate`";
$proto24["m_srcTableName"] = "royal_customer";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "LTV_prediction",
	"m_strTable" => "royal_customer",
	"m_srcTableName" => "royal_customer"
));

$proto26["m_sql"] = "`royal_customer`.`LTV_prediction`";
$proto26["m_srcTableName"] = "royal_customer";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "usage_period",
	"m_strTable" => "royal_customer",
	"m_srcTableName" => "royal_customer"
));

$proto28["m_sql"] = "`royal_customer`.`usage_period`";
$proto28["m_srcTableName"] = "royal_customer";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "last_closing_date",
	"m_strTable" => "royal_customer",
	"m_srcTableName" => "royal_customer"
));

$proto30["m_sql"] = "`royal_customer`.`last_closing_date`";
$proto30["m_srcTableName"] = "royal_customer";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "type_trend",
	"m_strTable" => "royal_customer",
	"m_srcTableName" => "royal_customer"
));

$proto32["m_sql"] = "`royal_customer`.`type_trend`";
$proto32["m_srcTableName"] = "royal_customer";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "handling_number_of_brands",
	"m_strTable" => "royal_customer",
	"m_srcTableName" => "royal_customer"
));

$proto34["m_sql"] = "`royal_customer`.`handling_number_of_brands`";
$proto34["m_srcTableName"] = "royal_customer";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "trend_destination_of_selling",
	"m_strTable" => "royal_customer",
	"m_srcTableName" => "royal_customer"
));

$proto36["m_sql"] = "`royal_customer`.`trend_destination_of_selling`";
$proto36["m_srcTableName"] = "royal_customer";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "questionnaire_quality",
	"m_strTable" => "royal_customer",
	"m_srcTableName" => "royal_customer"
));

$proto38["m_sql"] = "`royal_customer`.`questionnaire_quality`";
$proto38["m_srcTableName"] = "royal_customer";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "royal_customer",
	"m_srcTableName" => "royal_customer"
));

$proto40["m_sql"] = "`royal_customer`.`updated_at`";
$proto40["m_srcTableName"] = "royal_customer";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by",
	"m_strTable" => "royal_customer",
	"m_srcTableName" => "royal_customer"
));

$proto42["m_sql"] = "`royal_customer`.`updated_by`";
$proto42["m_srcTableName"] = "royal_customer";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "royal_customer",
	"m_srcTableName" => "royal_customer"
));

$proto44["m_sql"] = "`royal_customer`.`created_at`";
$proto44["m_srcTableName"] = "royal_customer";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "created_by",
	"m_strTable" => "royal_customer",
	"m_srcTableName" => "royal_customer"
));

$proto46["m_sql"] = "`royal_customer`.`created_by`";
$proto46["m_srcTableName"] = "royal_customer";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "selling_count_ec",
	"m_strTable" => "royal_customer",
	"m_srcTableName" => "royal_customer"
));

$proto48["m_sql"] = "`royal_customer`.`selling_count_ec`";
$proto48["m_srcTableName"] = "royal_customer";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "selling_count_ichiba",
	"m_strTable" => "royal_customer",
	"m_srcTableName" => "royal_customer"
));

$proto50["m_sql"] = "`royal_customer`.`selling_count_ichiba`";
$proto50["m_srcTableName"] = "royal_customer";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "type_count_K",
	"m_strTable" => "royal_customer",
	"m_srcTableName" => "royal_customer"
));

$proto52["m_sql"] = "`royal_customer`.`type_count_K`";
$proto52["m_srcTableName"] = "royal_customer";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "type_count_D",
	"m_strTable" => "royal_customer",
	"m_srcTableName" => "royal_customer"
));

$proto54["m_sql"] = "`royal_customer`.`type_count_D`";
$proto54["m_srcTableName"] = "royal_customer";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "type_count_J",
	"m_strTable" => "royal_customer",
	"m_srcTableName" => "royal_customer"
));

$proto56["m_sql"] = "`royal_customer`.`type_count_J`";
$proto56["m_srcTableName"] = "royal_customer";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "type_count_W",
	"m_strTable" => "royal_customer",
	"m_srcTableName" => "royal_customer"
));

$proto58["m_sql"] = "`royal_customer`.`type_count_W`";
$proto58["m_srcTableName"] = "royal_customer";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "type_count_B",
	"m_strTable" => "royal_customer",
	"m_srcTableName" => "royal_customer"
));

$proto60["m_sql"] = "`royal_customer`.`type_count_B`";
$proto60["m_srcTableName"] = "royal_customer";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "type_count_H",
	"m_strTable" => "royal_customer",
	"m_srcTableName" => "royal_customer"
));

$proto62["m_sql"] = "`royal_customer`.`type_count_H`";
$proto62["m_srcTableName"] = "royal_customer";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "type_count_other",
	"m_strTable" => "royal_customer",
	"m_srcTableName" => "royal_customer"
));

$proto64["m_sql"] = "`royal_customer`.`type_count_other`";
$proto64["m_srcTableName"] = "royal_customer";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "selling_price_ec",
	"m_strTable" => "royal_customer",
	"m_srcTableName" => "royal_customer"
));

$proto66["m_sql"] = "`royal_customer`.`selling_price_ec`";
$proto66["m_srcTableName"] = "royal_customer";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "selling_arari_ec",
	"m_strTable" => "royal_customer",
	"m_srcTableName" => "royal_customer"
));

$proto68["m_sql"] = "`royal_customer`.`selling_arari_ec`";
$proto68["m_srcTableName"] = "royal_customer";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "selling_price_ichiba",
	"m_strTable" => "royal_customer",
	"m_srcTableName" => "royal_customer"
));

$proto70["m_sql"] = "`royal_customer`.`selling_price_ichiba`";
$proto70["m_srcTableName"] = "royal_customer";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "selling_arari_ichiba",
	"m_strTable" => "royal_customer",
	"m_srcTableName" => "royal_customer"
));

$proto72["m_sql"] = "`royal_customer`.`selling_arari_ichiba`";
$proto72["m_srcTableName"] = "royal_customer";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "type_price_K",
	"m_strTable" => "royal_customer",
	"m_srcTableName" => "royal_customer"
));

$proto74["m_sql"] = "`royal_customer`.`type_price_K`";
$proto74["m_srcTableName"] = "royal_customer";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "type_arari_K",
	"m_strTable" => "royal_customer",
	"m_srcTableName" => "royal_customer"
));

$proto76["m_sql"] = "`royal_customer`.`type_arari_K`";
$proto76["m_srcTableName"] = "royal_customer";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "type_price_D",
	"m_strTable" => "royal_customer",
	"m_srcTableName" => "royal_customer"
));

$proto78["m_sql"] = "`royal_customer`.`type_price_D`";
$proto78["m_srcTableName"] = "royal_customer";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "type_arari_D",
	"m_strTable" => "royal_customer",
	"m_srcTableName" => "royal_customer"
));

$proto80["m_sql"] = "`royal_customer`.`type_arari_D`";
$proto80["m_srcTableName"] = "royal_customer";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "type_price_J",
	"m_strTable" => "royal_customer",
	"m_srcTableName" => "royal_customer"
));

$proto82["m_sql"] = "`royal_customer`.`type_price_J`";
$proto82["m_srcTableName"] = "royal_customer";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "type_arari_J",
	"m_strTable" => "royal_customer",
	"m_srcTableName" => "royal_customer"
));

$proto84["m_sql"] = "`royal_customer`.`type_arari_J`";
$proto84["m_srcTableName"] = "royal_customer";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "type_price_W",
	"m_strTable" => "royal_customer",
	"m_srcTableName" => "royal_customer"
));

$proto86["m_sql"] = "`royal_customer`.`type_price_W`";
$proto86["m_srcTableName"] = "royal_customer";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "type_arari_W",
	"m_strTable" => "royal_customer",
	"m_srcTableName" => "royal_customer"
));

$proto88["m_sql"] = "`royal_customer`.`type_arari_W`";
$proto88["m_srcTableName"] = "royal_customer";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "type_price_B",
	"m_strTable" => "royal_customer",
	"m_srcTableName" => "royal_customer"
));

$proto90["m_sql"] = "`royal_customer`.`type_price_B`";
$proto90["m_srcTableName"] = "royal_customer";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLField(array(
	"m_strName" => "type_arari_B",
	"m_strTable" => "royal_customer",
	"m_srcTableName" => "royal_customer"
));

$proto92["m_sql"] = "`royal_customer`.`type_arari_B`";
$proto92["m_srcTableName"] = "royal_customer";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "";
$obj = new SQLFieldListItem($proto92);

$proto0["m_fieldlist"][]=$obj;
						$proto94=array();
			$obj = new SQLField(array(
	"m_strName" => "type_price_H",
	"m_strTable" => "royal_customer",
	"m_srcTableName" => "royal_customer"
));

$proto94["m_sql"] = "`royal_customer`.`type_price_H`";
$proto94["m_srcTableName"] = "royal_customer";
$proto94["m_expr"]=$obj;
$proto94["m_alias"] = "";
$obj = new SQLFieldListItem($proto94);

$proto0["m_fieldlist"][]=$obj;
						$proto96=array();
			$obj = new SQLField(array(
	"m_strName" => "type_arari_H",
	"m_strTable" => "royal_customer",
	"m_srcTableName" => "royal_customer"
));

$proto96["m_sql"] = "`royal_customer`.`type_arari_H`";
$proto96["m_srcTableName"] = "royal_customer";
$proto96["m_expr"]=$obj;
$proto96["m_alias"] = "";
$obj = new SQLFieldListItem($proto96);

$proto0["m_fieldlist"][]=$obj;
						$proto98=array();
			$obj = new SQLField(array(
	"m_strName" => "type_price_other",
	"m_strTable" => "royal_customer",
	"m_srcTableName" => "royal_customer"
));

$proto98["m_sql"] = "`royal_customer`.`type_price_other`";
$proto98["m_srcTableName"] = "royal_customer";
$proto98["m_expr"]=$obj;
$proto98["m_alias"] = "";
$obj = new SQLFieldListItem($proto98);

$proto0["m_fieldlist"][]=$obj;
						$proto100=array();
			$obj = new SQLField(array(
	"m_strName" => "type_arari_other",
	"m_strTable" => "royal_customer",
	"m_srcTableName" => "royal_customer"
));

$proto100["m_sql"] = "`royal_customer`.`type_arari_other`";
$proto100["m_srcTableName"] = "royal_customer";
$proto100["m_expr"]=$obj;
$proto100["m_alias"] = "";
$obj = new SQLFieldListItem($proto100);

$proto0["m_fieldlist"][]=$obj;
						$proto102=array();
			$obj = new SQLField(array(
	"m_strName" => "questquestion_count_very_satisfied",
	"m_strTable" => "royal_customer",
	"m_srcTableName" => "royal_customer"
));

$proto102["m_sql"] = "`royal_customer`.`questquestion_count_very_satisfied`";
$proto102["m_srcTableName"] = "royal_customer";
$proto102["m_expr"]=$obj;
$proto102["m_alias"] = "";
$obj = new SQLFieldListItem($proto102);

$proto0["m_fieldlist"][]=$obj;
						$proto104=array();
			$obj = new SQLField(array(
	"m_strName" => "questquestion_count_somewhat_satisfied",
	"m_strTable" => "royal_customer",
	"m_srcTableName" => "royal_customer"
));

$proto104["m_sql"] = "`royal_customer`.`questquestion_count_somewhat_satisfied`";
$proto104["m_srcTableName"] = "royal_customer";
$proto104["m_expr"]=$obj;
$proto104["m_alias"] = "";
$obj = new SQLFieldListItem($proto104);

$proto0["m_fieldlist"][]=$obj;
						$proto106=array();
			$obj = new SQLField(array(
	"m_strName" => "questquestion_count_usually",
	"m_strTable" => "royal_customer",
	"m_srcTableName" => "royal_customer"
));

$proto106["m_sql"] = "`royal_customer`.`questquestion_count_usually`";
$proto106["m_srcTableName"] = "royal_customer";
$proto106["m_expr"]=$obj;
$proto106["m_alias"] = "";
$obj = new SQLFieldListItem($proto106);

$proto0["m_fieldlist"][]=$obj;
						$proto108=array();
			$obj = new SQLField(array(
	"m_strName" => "questquestion_count_somewhat_dissatisfied",
	"m_strTable" => "royal_customer",
	"m_srcTableName" => "royal_customer"
));

$proto108["m_sql"] = "`royal_customer`.`questquestion_count_somewhat_dissatisfied`";
$proto108["m_srcTableName"] = "royal_customer";
$proto108["m_expr"]=$obj;
$proto108["m_alias"] = "";
$obj = new SQLFieldListItem($proto108);

$proto0["m_fieldlist"][]=$obj;
						$proto110=array();
			$obj = new SQLField(array(
	"m_strName" => "questquestion_count_complain",
	"m_strTable" => "royal_customer",
	"m_srcTableName" => "royal_customer"
));

$proto110["m_sql"] = "`royal_customer`.`questquestion_count_complain`";
$proto110["m_srcTableName"] = "royal_customer";
$proto110["m_expr"]=$obj;
$proto110["m_alias"] = "";
$obj = new SQLFieldListItem($proto110);

$proto0["m_fieldlist"][]=$obj;
						$proto112=array();
			$obj = new SQLField(array(
	"m_strName" => "name1",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "royal_customer"
));

$proto112["m_sql"] = "`Eoc`.`name1`";
$proto112["m_srcTableName"] = "royal_customer";
$proto112["m_expr"]=$obj;
$proto112["m_alias"] = "";
$obj = new SQLFieldListItem($proto112);

$proto0["m_fieldlist"][]=$obj;
						$proto114=array();
			$obj = new SQLField(array(
	"m_strName" => "name2",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "royal_customer"
));

$proto114["m_sql"] = "`Eoc`.`name2`";
$proto114["m_srcTableName"] = "royal_customer";
$proto114["m_expr"]=$obj;
$proto114["m_alias"] = "";
$obj = new SQLFieldListItem($proto114);

$proto0["m_fieldlist"][]=$obj;
						$proto116=array();
			$obj = new SQLField(array(
	"m_strName" => "address1",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "royal_customer"
));

$proto116["m_sql"] = "`Eoc`.`address1`";
$proto116["m_srcTableName"] = "royal_customer";
$proto116["m_expr"]=$obj;
$proto116["m_alias"] = "";
$obj = new SQLFieldListItem($proto116);

$proto0["m_fieldlist"][]=$obj;
						$proto118=array();
			$obj = new SQLField(array(
	"m_strName" => "address2",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "royal_customer"
));

$proto118["m_sql"] = "`Eoc`.`address2`";
$proto118["m_srcTableName"] = "royal_customer";
$proto118["m_expr"]=$obj;
$proto118["m_alias"] = "";
$obj = new SQLFieldListItem($proto118);

$proto0["m_fieldlist"][]=$obj;
						$proto120=array();
			$obj = new SQLField(array(
	"m_strName" => "address3",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "royal_customer"
));

$proto120["m_sql"] = "`Eoc`.`address3`";
$proto120["m_srcTableName"] = "royal_customer";
$proto120["m_expr"]=$obj;
$proto120["m_alias"] = "";
$obj = new SQLFieldListItem($proto120);

$proto0["m_fieldlist"][]=$obj;
						$proto122=array();
			$obj = new SQLField(array(
	"m_strName" => "tel",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "royal_customer"
));

$proto122["m_sql"] = "`Eoc`.`tel`";
$proto122["m_srcTableName"] = "royal_customer";
$proto122["m_expr"]=$obj;
$proto122["m_alias"] = "";
$obj = new SQLFieldListItem($proto122);

$proto0["m_fieldlist"][]=$obj;
						$proto124=array();
			$obj = new SQLField(array(
	"m_strName" => "tel2",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "royal_customer"
));

$proto124["m_sql"] = "`Eoc`.`tel2`";
$proto124["m_srcTableName"] = "royal_customer";
$proto124["m_expr"]=$obj;
$proto124["m_alias"] = "";
$obj = new SQLFieldListItem($proto124);

$proto0["m_fieldlist"][]=$obj;
						$proto126=array();
			$obj = new SQLField(array(
	"m_strName" => "mail1",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "royal_customer"
));

$proto126["m_sql"] = "`Eoc`.`mail1`";
$proto126["m_srcTableName"] = "royal_customer";
$proto126["m_expr"]=$obj;
$proto126["m_alias"] = "";
$obj = new SQLFieldListItem($proto126);

$proto0["m_fieldlist"][]=$obj;
						$proto128=array();
			$obj = new SQLField(array(
	"m_strName" => "mail2",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "royal_customer"
));

$proto128["m_sql"] = "`Eoc`.`mail2`";
$proto128["m_srcTableName"] = "royal_customer";
$proto128["m_expr"]=$obj;
$proto128["m_alias"] = "";
$obj = new SQLFieldListItem($proto128);

$proto0["m_fieldlist"][]=$obj;
						$proto130=array();
			$obj = new SQLField(array(
	"m_strName" => "rate_selling_count_EC",
	"m_strTable" => "royal_customer",
	"m_srcTableName" => "royal_customer"
));

$proto130["m_sql"] = "`royal_customer`.`rate_selling_count_EC`";
$proto130["m_srcTableName"] = "royal_customer";
$proto130["m_expr"]=$obj;
$proto130["m_alias"] = "";
$obj = new SQLFieldListItem($proto130);

$proto0["m_fieldlist"][]=$obj;
						$proto132=array();
			$obj = new SQLField(array(
	"m_strName" => "rate_selling_count_ichiba",
	"m_strTable" => "royal_customer",
	"m_srcTableName" => "royal_customer"
));

$proto132["m_sql"] = "`royal_customer`.`rate_selling_count_ichiba`";
$proto132["m_srcTableName"] = "royal_customer";
$proto132["m_expr"]=$obj;
$proto132["m_alias"] = "";
$obj = new SQLFieldListItem($proto132);

$proto0["m_fieldlist"][]=$obj;
						$proto134=array();
			$obj = new SQLField(array(
	"m_strName" => "rate_type_count_K",
	"m_strTable" => "royal_customer",
	"m_srcTableName" => "royal_customer"
));

$proto134["m_sql"] = "`royal_customer`.`rate_type_count_K`";
$proto134["m_srcTableName"] = "royal_customer";
$proto134["m_expr"]=$obj;
$proto134["m_alias"] = "";
$obj = new SQLFieldListItem($proto134);

$proto0["m_fieldlist"][]=$obj;
						$proto136=array();
			$obj = new SQLField(array(
	"m_strName" => "rate_type_count_D",
	"m_strTable" => "royal_customer",
	"m_srcTableName" => "royal_customer"
));

$proto136["m_sql"] = "`royal_customer`.`rate_type_count_D`";
$proto136["m_srcTableName"] = "royal_customer";
$proto136["m_expr"]=$obj;
$proto136["m_alias"] = "";
$obj = new SQLFieldListItem($proto136);

$proto0["m_fieldlist"][]=$obj;
						$proto138=array();
			$obj = new SQLField(array(
	"m_strName" => "rate_type_count_J",
	"m_strTable" => "royal_customer",
	"m_srcTableName" => "royal_customer"
));

$proto138["m_sql"] = "`royal_customer`.`rate_type_count_J`";
$proto138["m_srcTableName"] = "royal_customer";
$proto138["m_expr"]=$obj;
$proto138["m_alias"] = "";
$obj = new SQLFieldListItem($proto138);

$proto0["m_fieldlist"][]=$obj;
						$proto140=array();
			$obj = new SQLField(array(
	"m_strName" => "rate_type_count_W",
	"m_strTable" => "royal_customer",
	"m_srcTableName" => "royal_customer"
));

$proto140["m_sql"] = "`royal_customer`.`rate_type_count_W`";
$proto140["m_srcTableName"] = "royal_customer";
$proto140["m_expr"]=$obj;
$proto140["m_alias"] = "";
$obj = new SQLFieldListItem($proto140);

$proto0["m_fieldlist"][]=$obj;
						$proto142=array();
			$obj = new SQLField(array(
	"m_strName" => "rate_type_count_B",
	"m_strTable" => "royal_customer",
	"m_srcTableName" => "royal_customer"
));

$proto142["m_sql"] = "`royal_customer`.`rate_type_count_B`";
$proto142["m_srcTableName"] = "royal_customer";
$proto142["m_expr"]=$obj;
$proto142["m_alias"] = "";
$obj = new SQLFieldListItem($proto142);

$proto0["m_fieldlist"][]=$obj;
						$proto144=array();
			$obj = new SQLField(array(
	"m_strName" => "rate_type_count_H",
	"m_strTable" => "royal_customer",
	"m_srcTableName" => "royal_customer"
));

$proto144["m_sql"] = "`royal_customer`.`rate_type_count_H`";
$proto144["m_srcTableName"] = "royal_customer";
$proto144["m_expr"]=$obj;
$proto144["m_alias"] = "";
$obj = new SQLFieldListItem($proto144);

$proto0["m_fieldlist"][]=$obj;
						$proto146=array();
			$obj = new SQLField(array(
	"m_strName" => "rate_type_count_other",
	"m_strTable" => "royal_customer",
	"m_srcTableName" => "royal_customer"
));

$proto146["m_sql"] = "`royal_customer`.`rate_type_count_other`";
$proto146["m_srcTableName"] = "royal_customer";
$proto146["m_expr"]=$obj;
$proto146["m_alias"] = "";
$obj = new SQLFieldListItem($proto146);

$proto0["m_fieldlist"][]=$obj;
						$proto148=array();
			$obj = new SQLField(array(
	"m_strName" => "royal_customer_type",
	"m_strTable" => "royal_customer",
	"m_srcTableName" => "royal_customer"
));

$proto148["m_sql"] = "`royal_customer`.`royal_customer_type`";
$proto148["m_srcTableName"] = "royal_customer";
$proto148["m_expr"]=$obj;
$proto148["m_alias"] = "";
$obj = new SQLFieldListItem($proto148);

$proto0["m_fieldlist"][]=$obj;
						$proto150=array();
			$obj = new SQLField(array(
	"m_strName" => "royal_customer_status",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "royal_customer"
));

$proto150["m_sql"] = "`Eoc`.`royal_customer_status`";
$proto150["m_srcTableName"] = "royal_customer";
$proto150["m_expr"]=$obj;
$proto150["m_alias"] = "";
$obj = new SQLFieldListItem($proto150);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto152=array();
$proto152["m_link"] = "SQLL_MAIN";
			$proto153=array();
$proto153["m_strName"] = "royal_customer";
$proto153["m_srcTableName"] = "royal_customer";
$proto153["m_columns"] = array();
$proto153["m_columns"][] = "ecc_id";
$proto153["m_columns"][] = "gender";
$proto153["m_columns"][] = "age";
$proto153["m_columns"][] = "todou";
$proto153["m_columns"][] = "family";
$proto153["m_columns"][] = "income";
$proto153["m_columns"][] = "cumulative_earnings";
$proto153["m_columns"][] = "number_of_times";
$proto153["m_columns"][] = "close_rate";
$proto153["m_columns"][] = "LTV_prediction";
$proto153["m_columns"][] = "usage_period";
$proto153["m_columns"][] = "last_closing_date";
$proto153["m_columns"][] = "type_trend";
$proto153["m_columns"][] = "handling_number_of_brands";
$proto153["m_columns"][] = "trend_destination_of_selling";
$proto153["m_columns"][] = "questionnaire_quality";
$proto153["m_columns"][] = "updated_at";
$proto153["m_columns"][] = "updated_by";
$proto153["m_columns"][] = "created_at";
$proto153["m_columns"][] = "created_by";
$proto153["m_columns"][] = "selling_count_ec";
$proto153["m_columns"][] = "selling_count_ichiba";
$proto153["m_columns"][] = "type_count_K";
$proto153["m_columns"][] = "type_count_D";
$proto153["m_columns"][] = "type_count_J";
$proto153["m_columns"][] = "type_count_W";
$proto153["m_columns"][] = "type_count_B";
$proto153["m_columns"][] = "type_count_H";
$proto153["m_columns"][] = "type_count_other";
$proto153["m_columns"][] = "selling_price_ec";
$proto153["m_columns"][] = "selling_arari_ec";
$proto153["m_columns"][] = "selling_price_ichiba";
$proto153["m_columns"][] = "selling_arari_ichiba";
$proto153["m_columns"][] = "type_price_K";
$proto153["m_columns"][] = "type_arari_K";
$proto153["m_columns"][] = "type_price_D";
$proto153["m_columns"][] = "type_arari_D";
$proto153["m_columns"][] = "type_price_J";
$proto153["m_columns"][] = "type_arari_J";
$proto153["m_columns"][] = "type_price_W";
$proto153["m_columns"][] = "type_arari_W";
$proto153["m_columns"][] = "type_price_B";
$proto153["m_columns"][] = "type_arari_B";
$proto153["m_columns"][] = "type_price_H";
$proto153["m_columns"][] = "type_arari_H";
$proto153["m_columns"][] = "type_price_other";
$proto153["m_columns"][] = "type_arari_other";
$proto153["m_columns"][] = "questquestion_count_very_satisfied";
$proto153["m_columns"][] = "questquestion_count_somewhat_satisfied";
$proto153["m_columns"][] = "questquestion_count_usually";
$proto153["m_columns"][] = "questquestion_count_somewhat_dissatisfied";
$proto153["m_columns"][] = "questquestion_count_complain";
$proto153["m_columns"][] = "rate_selling_count_EC";
$proto153["m_columns"][] = "rate_selling_count_ichiba";
$proto153["m_columns"][] = "rate_type_count_K";
$proto153["m_columns"][] = "rate_type_count_D";
$proto153["m_columns"][] = "rate_type_count_J";
$proto153["m_columns"][] = "rate_type_count_W";
$proto153["m_columns"][] = "rate_type_count_B";
$proto153["m_columns"][] = "rate_type_count_H";
$proto153["m_columns"][] = "rate_type_count_other";
$proto153["m_columns"][] = "royal_customer_type";
$obj = new SQLTable($proto153);

$proto152["m_table"] = $obj;
$proto152["m_sql"] = "`royal_customer`";
$proto152["m_alias"] = "";
$proto152["m_srcTableName"] = "royal_customer";
$proto154=array();
$proto154["m_sql"] = "";
$proto154["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto154["m_column"]=$obj;
$proto154["m_contained"] = array();
$proto154["m_strCase"] = "";
$proto154["m_havingmode"] = false;
$proto154["m_inBrackets"] = false;
$proto154["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto154);

$proto152["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto152);

$proto0["m_fromlist"][]=$obj;
												$proto156=array();
$proto156["m_link"] = "SQLL_LEFTJOIN";
			$proto157=array();
$proto157["m_strName"] = "Eoc";
$proto157["m_srcTableName"] = "royal_customer";
$proto157["m_columns"] = array();
$proto157["m_columns"][] = "ecc_id";
$proto157["m_columns"][] = "ecc_seq";
$proto157["m_columns"][] = "name1";
$proto157["m_columns"][] = "created_t";
$proto157["m_columns"][] = "registerd_id";
$proto157["m_columns"][] = "kaitori_staff_id";
$proto157["m_columns"][] = "name2";
$proto157["m_columns"][] = "wareki";
$proto157["m_columns"][] = "b1";
$proto157["m_columns"][] = "b2";
$proto157["m_columns"][] = "b3";
$proto157["m_columns"][] = "birth_day";
$proto157["m_columns"][] = "age";
$proto157["m_columns"][] = "zip";
$proto157["m_columns"][] = "zip1";
$proto157["m_columns"][] = "zip2";
$proto157["m_columns"][] = "address1";
$proto157["m_columns"][] = "address2";
$proto157["m_columns"][] = "address3";
$proto157["m_columns"][] = "tel";
$proto157["m_columns"][] = "tel2";
$proto157["m_columns"][] = "mail1";
$proto157["m_columns"][] = "mail2";
$proto157["m_columns"][] = "address_code";
$proto157["m_columns"][] = "bank_name";
$proto157["m_columns"][] = "bank_blunch_code";
$proto157["m_columns"][] = "bank_yokin_shubetu";
$proto157["m_columns"][] = "bank_account";
$proto157["m_columns"][] = "bank_acoount_name";
$proto157["m_columns"][] = "haisou_bangou";
$proto157["m_columns"][] = "sise_houhou";
$proto157["m_columns"][] = "hentou_houhou";
$proto157["m_columns"][] = "hentou_houhou_time";
$proto157["m_columns"][] = "mousikomi_id";
$proto157["m_columns"][] = "hituyou_shorui";
$proto157["m_columns"][] = "seiyaku_fuseiritu";
$proto157["m_columns"][] = "mitumori_taku";
$proto157["m_columns"][] = "seacanse";
$proto157["m_columns"][] = "remark";
$proto157["m_columns"][] = "type";
$proto157["m_columns"][] = "sales_flag";
$proto157["m_columns"][] = "src_type";
$proto157["m_columns"][] = "liquidation_shop_code";
$proto157["m_columns"][] = "insurance_amount_print";
$proto157["m_columns"][] = "jis_code";
$proto157["m_columns"][] = "updated_at";
$proto157["m_columns"][] = "_registerd_id";
$proto157["m_columns"][] = "mail_check_type";
$proto157["m_columns"][] = "purchase_type";
$proto157["m_columns"][] = "sex";
$proto157["m_columns"][] = "m_tel";
$proto157["m_columns"][] = "fax";
$proto157["m_columns"][] = "chigin_kaitori";
$proto157["m_columns"][] = "option1";
$proto157["m_columns"][] = "option2";
$proto157["m_columns"][] = "option3";
$proto157["m_columns"][] = "option4";
$proto157["m_columns"][] = "option5";
$proto157["m_columns"][] = "option6";
$proto157["m_columns"][] = "option7";
$proto157["m_columns"][] = "option8";
$proto157["m_columns"][] = "option9";
$proto157["m_columns"][] = "option10";
$proto157["m_columns"][] = "option11";
$proto157["m_columns"][] = "option12";
$proto157["m_columns"][] = "option13";
$proto157["m_columns"][] = "rakuda_csv_flag";
$proto157["m_columns"][] = "EOC_COURIER_CHECK";
$proto157["m_columns"][] = "EOC_SIZE";
$proto157["m_columns"][] = "EOC_NUMBER";
$proto157["m_columns"][] = "EOC_REUSE";
$proto157["m_columns"][] = "EOC__DELIVERY_DATES";
$proto157["m_columns"][] = "EOC_SPECIFIED_TIME";
$proto157["m_columns"][] = "FIRST_NAME2";
$proto157["m_columns"][] = "LAST_NAME2";
$proto157["m_columns"][] = "EOC__DATE_AND_TIME_2";
$proto157["m_columns"][] = "EOC__BOX_NUMBER";
$proto157["m_columns"][] = "FIRST_NAME_KANA";
$proto157["m_columns"][] = "LAST_NAME_KANA";
$proto157["m_columns"][] = "FLAG_SPEED";
$proto157["m_columns"][] = "SEARCH_MEDIA";
$proto157["m_columns"][] = "SEARCH_SITE";
$proto157["m_columns"][] = "UN_REACHABLE";
$proto157["m_columns"][] = "FLG_MAIL_SAGAWA";
$proto157["m_columns"][] = "FLG_MAIL_OTHER";
$proto157["m_columns"][] = "ALLSEIYAKU";
$proto157["m_columns"][] = "ICHIBUSEIYAKU";
$proto157["m_columns"][] = "seiyakukin";
$proto157["m_columns"][] = "kaitorihuka";
$proto157["m_columns"][] = "awazu_date";
$proto157["m_columns"][] = "seiyaku_price";
$proto157["m_columns"][] = "eoc_search_keyword";
$proto157["m_columns"][] = "sonota";
$proto157["m_columns"][] = "size_kosuu";
$proto157["m_columns"][] = "sagawa_shuuka_flag";
$proto157["m_columns"][] = "line_check";
$proto157["m_columns"][] = "sagawa_shuukairai_denwabangou";
$proto157["m_columns"][] = "kaitori_sougak";
$proto157["m_columns"][] = "flag";
$proto157["m_columns"][] = "key_code";
$proto157["m_columns"][] = "dm_check_type";
$proto157["m_columns"][] = "kit_flag";
$proto157["m_columns"][] = "kit_done_flag";
$proto157["m_columns"][] = "bank_details_code";
$proto157["m_columns"][] = "bank_details_blunch_name";
$proto157["m_columns"][] = "bank_details_blunch_code";
$proto157["m_columns"][] = "bank_details_account_number";
$proto157["m_columns"][] = "bank_details_symbol";
$proto157["m_columns"][] = "bank_details_number";
$proto157["m_columns"][] = "bank_details_account_name";
$proto157["m_columns"][] = "bank_details_deposit_type";
$proto157["m_columns"][] = "mypage_id";
$proto157["m_columns"][] = "UN_REACHABLE_brand";
$proto157["m_columns"][] = "sagawa_haisou_hoken";
$proto157["m_columns"][] = "transfer_confirm";
$proto157["m_columns"][] = "outside_bank";
$proto157["m_columns"][] = "new_name";
$proto157["m_columns"][] = "letterpack";
$proto157["m_columns"][] = "satei_saisoku_2_days";
$proto157["m_columns"][] = "satei_saisoku_7_days";
$proto157["m_columns"][] = "accept_flag";
$proto157["m_columns"][] = "delivery_flag";
$proto157["m_columns"][] = "refining_weight";
$proto157["m_columns"][] = "line_chat_url";
$proto157["m_columns"][] = "royal_customer_status";
$proto157["m_columns"][] = "is_business_customer";
$proto157["m_columns"][] = "is_exist_haisouhosyo";
$proto157["m_columns"][] = "meigi_hankaku_kana";
$proto157["m_columns"][] = "building_types";
$proto157["m_columns"][] = "dwelling_types";
$proto157["m_columns"][] = "is_yamato_csv";
$proto157["m_columns"][] = "is_seiren_csv";
$obj = new SQLTable($proto157);

$proto156["m_table"] = $obj;
$proto156["m_sql"] = "LEFT OUTER JOIN `Eoc` ON `royal_customer`.`ecc_id` = `Eoc`.`ecc_id`";
$proto156["m_alias"] = "";
$proto156["m_srcTableName"] = "royal_customer";
$proto158=array();
$proto158["m_sql"] = "`royal_customer`.`ecc_id` = `Eoc`.`ecc_id`";
$proto158["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "ecc_id",
	"m_strTable" => "royal_customer",
	"m_srcTableName" => "royal_customer"
));

$proto158["m_column"]=$obj;
$proto158["m_contained"] = array();
$proto158["m_strCase"] = "= `Eoc`.`ecc_id`";
$proto158["m_havingmode"] = false;
$proto158["m_inBrackets"] = false;
$proto158["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto158);

$proto156["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto156);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="royal_customer";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_royal_customer = createSqlQuery_royal_customer();


	
		;

																																																																									

$tdataroyal_customer[".sqlquery"] = $queryData_royal_customer;

$tableEvents["royal_customer"] = new eventsBase;
$tdataroyal_customer[".hasEvents"] = false;

?>