<?php
require_once(getabspath("classes/cipherer.php"));




$tdataEoc_guestquestion = array();
	$tdataEoc_guestquestion[".truncateText"] = true;
	$tdataEoc_guestquestion[".NumberOfChars"] = 80;
	$tdataEoc_guestquestion[".ShortName"] = "Eoc_guestquestion";
	$tdataEoc_guestquestion[".OwnerID"] = "";
	$tdataEoc_guestquestion[".OriginalTable"] = "Eoc_guestquestion";

//	field labels
$fieldLabelsEoc_guestquestion = array();
$fieldToolTipsEoc_guestquestion = array();
$pageTitlesEoc_guestquestion = array();
$placeHoldersEoc_guestquestion = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsEoc_guestquestion["Japanese"] = array();
	$fieldToolTipsEoc_guestquestion["Japanese"] = array();
	$placeHoldersEoc_guestquestion["Japanese"] = array();
	$pageTitlesEoc_guestquestion["Japanese"] = array();
	$fieldLabelsEoc_guestquestion["Japanese"]["id"] = "Id";
	$fieldToolTipsEoc_guestquestion["Japanese"]["id"] = "";
	$placeHoldersEoc_guestquestion["Japanese"]["id"] = "";
	$fieldLabelsEoc_guestquestion["Japanese"]["site_reflect"] = "サイト反映";
	$fieldToolTipsEoc_guestquestion["Japanese"]["site_reflect"] = "";
	$placeHoldersEoc_guestquestion["Japanese"]["site_reflect"] = "";
	$fieldLabelsEoc_guestquestion["Japanese"]["timestamp"] = "送信日時";
	$fieldToolTipsEoc_guestquestion["Japanese"]["timestamp"] = "";
	$placeHoldersEoc_guestquestion["Japanese"]["timestamp"] = "";
	$fieldLabelsEoc_guestquestion["Japanese"]["service_name"] = "買取種類";
	$fieldToolTipsEoc_guestquestion["Japanese"]["service_name"] = "";
	$placeHoldersEoc_guestquestion["Japanese"]["service_name"] = "";
	$fieldLabelsEoc_guestquestion["Japanese"]["service_name_text"] = "買取種類テキスト";
	$fieldToolTipsEoc_guestquestion["Japanese"]["service_name_text"] = "";
	$placeHoldersEoc_guestquestion["Japanese"]["service_name_text"] = "";
	$fieldLabelsEoc_guestquestion["Japanese"]["service_story"] = "売却経緯";
	$fieldToolTipsEoc_guestquestion["Japanese"]["service_story"] = "";
	$placeHoldersEoc_guestquestion["Japanese"]["service_story"] = "";
	$fieldLabelsEoc_guestquestion["Japanese"]["service_story_text"] = "売却経緯テキスト";
	$fieldToolTipsEoc_guestquestion["Japanese"]["service_story_text"] = "";
	$placeHoldersEoc_guestquestion["Japanese"]["service_story_text"] = "";
	$fieldLabelsEoc_guestquestion["Japanese"]["service_satisfied"] = "満足度";
	$fieldToolTipsEoc_guestquestion["Japanese"]["service_satisfied"] = "";
	$placeHoldersEoc_guestquestion["Japanese"]["service_satisfied"] = "";
	$fieldLabelsEoc_guestquestion["Japanese"]["sold_this_time"] = "売却結果";
	$fieldToolTipsEoc_guestquestion["Japanese"]["sold_this_time"] = "";
	$placeHoldersEoc_guestquestion["Japanese"]["sold_this_time"] = "";
	$fieldLabelsEoc_guestquestion["Japanese"]["cancel_reason"] = "キャンセル理由";
	$fieldToolTipsEoc_guestquestion["Japanese"]["cancel_reason"] = "";
	$placeHoldersEoc_guestquestion["Japanese"]["cancel_reason"] = "";
	$fieldLabelsEoc_guestquestion["Japanese"]["cancel_reason_text"] = "キャンセル理由テキスト";
	$fieldToolTipsEoc_guestquestion["Japanese"]["cancel_reason_text"] = "";
	$placeHoldersEoc_guestquestion["Japanese"]["cancel_reason_text"] = "";
	$fieldLabelsEoc_guestquestion["Japanese"]["other_reason_text"] = "『なんとなく』『金額以外の理由』";
	$fieldToolTipsEoc_guestquestion["Japanese"]["other_reason_text"] = "";
	$placeHoldersEoc_guestquestion["Japanese"]["other_reason_text"] = "";
	$fieldLabelsEoc_guestquestion["Japanese"]["how_much_cheap"] = "『他店より安かった』";
	$fieldToolTipsEoc_guestquestion["Japanese"]["how_much_cheap"] = "";
	$placeHoldersEoc_guestquestion["Japanese"]["how_much_cheap"] = "";
	$fieldLabelsEoc_guestquestion["Japanese"]["how_much_cheap_text"] = "『他店より安かった』テキスト";
	$fieldToolTipsEoc_guestquestion["Japanese"]["how_much_cheap_text"] = "";
	$placeHoldersEoc_guestquestion["Japanese"]["how_much_cheap_text"] = "";
	$fieldLabelsEoc_guestquestion["Japanese"]["dissatisfied_reason_text"] = "『不満』理由";
	$fieldToolTipsEoc_guestquestion["Japanese"]["dissatisfied_reason_text"] = "";
	$placeHoldersEoc_guestquestion["Japanese"]["dissatisfied_reason_text"] = "";
	$fieldLabelsEoc_guestquestion["Japanese"]["service_speed"] = "スピード";
	$fieldToolTipsEoc_guestquestion["Japanese"]["service_speed"] = "";
	$placeHoldersEoc_guestquestion["Japanese"]["service_speed"] = "";
	$fieldLabelsEoc_guestquestion["Japanese"]["service_speed_text"] = "スピードテキスト";
	$fieldToolTipsEoc_guestquestion["Japanese"]["service_speed_text"] = "";
	$placeHoldersEoc_guestquestion["Japanese"]["service_speed_text"] = "";
	$fieldLabelsEoc_guestquestion["Japanese"]["service_description"] = "説明";
	$fieldToolTipsEoc_guestquestion["Japanese"]["service_description"] = "";
	$placeHoldersEoc_guestquestion["Japanese"]["service_description"] = "";
	$fieldLabelsEoc_guestquestion["Japanese"]["service_description_text"] = "説明テキスト";
	$fieldToolTipsEoc_guestquestion["Japanese"]["service_description_text"] = "";
	$placeHoldersEoc_guestquestion["Japanese"]["service_description_text"] = "";
	$fieldLabelsEoc_guestquestion["Japanese"]["site_level"] = "サイトの質";
	$fieldToolTipsEoc_guestquestion["Japanese"]["site_level"] = "";
	$placeHoldersEoc_guestquestion["Japanese"]["site_level"] = "";
	$fieldLabelsEoc_guestquestion["Japanese"]["site_level_text"] = "サイトの質テキスト";
	$fieldToolTipsEoc_guestquestion["Japanese"]["site_level_text"] = "";
	$placeHoldersEoc_guestquestion["Japanese"]["site_level_text"] = "";
	$fieldLabelsEoc_guestquestion["Japanese"]["choice_reason_text"] = "選んだ理由";
	$fieldToolTipsEoc_guestquestion["Japanese"]["choice_reason_text"] = "";
	$placeHoldersEoc_guestquestion["Japanese"]["choice_reason_text"] = "";
	$fieldLabelsEoc_guestquestion["Japanese"]["search_keyword"] = "検索ワード";
	$fieldToolTipsEoc_guestquestion["Japanese"]["search_keyword"] = "";
	$placeHoldersEoc_guestquestion["Japanese"]["search_keyword"] = "";
	$fieldLabelsEoc_guestquestion["Japanese"]["search_keyword_text"] = "検索ワードテキスト";
	$fieldToolTipsEoc_guestquestion["Japanese"]["search_keyword_text"] = "";
	$placeHoldersEoc_guestquestion["Japanese"]["search_keyword_text"] = "";
	$fieldLabelsEoc_guestquestion["Japanese"]["search_engine"] = "検索エンジン";
	$fieldToolTipsEoc_guestquestion["Japanese"]["search_engine"] = "";
	$placeHoldersEoc_guestquestion["Japanese"]["search_engine"] = "";
	$fieldLabelsEoc_guestquestion["Japanese"]["search_engine_text"] = "検索エンジンテキスト";
	$fieldToolTipsEoc_guestquestion["Japanese"]["search_engine_text"] = "";
	$placeHoldersEoc_guestquestion["Japanese"]["search_engine_text"] = "";
	$fieldLabelsEoc_guestquestion["Japanese"]["search_medium"] = "検索媒体";
	$fieldToolTipsEoc_guestquestion["Japanese"]["search_medium"] = "";
	$placeHoldersEoc_guestquestion["Japanese"]["search_medium"] = "";
	$fieldLabelsEoc_guestquestion["Japanese"]["search_medium_text"] = "検索媒体テキスト";
	$fieldToolTipsEoc_guestquestion["Japanese"]["search_medium_text"] = "";
	$placeHoldersEoc_guestquestion["Japanese"]["search_medium_text"] = "";
	$fieldLabelsEoc_guestquestion["Japanese"]["freely_write_text"] = "その他要望・指摘";
	$fieldToolTipsEoc_guestquestion["Japanese"]["freely_write_text"] = "";
	$placeHoldersEoc_guestquestion["Japanese"]["freely_write_text"] = "";
	$fieldLabelsEoc_guestquestion["Japanese"]["a_word_text"] = "担当者に一言";
	$fieldToolTipsEoc_guestquestion["Japanese"]["a_word_text"] = "";
	$placeHoldersEoc_guestquestion["Japanese"]["a_word_text"] = "";
	$fieldLabelsEoc_guestquestion["Japanese"]["customer_sex"] = "性別";
	$fieldToolTipsEoc_guestquestion["Japanese"]["customer_sex"] = "";
	$placeHoldersEoc_guestquestion["Japanese"]["customer_sex"] = "";
	$fieldLabelsEoc_guestquestion["Japanese"]["customer_age"] = "年代";
	$fieldToolTipsEoc_guestquestion["Japanese"]["customer_age"] = "";
	$placeHoldersEoc_guestquestion["Japanese"]["customer_age"] = "";
	$fieldLabelsEoc_guestquestion["Japanese"]["customer_address"] = "都道府県";
	$fieldToolTipsEoc_guestquestion["Japanese"]["customer_address"] = "";
	$placeHoldersEoc_guestquestion["Japanese"]["customer_address"] = "";
	$fieldLabelsEoc_guestquestion["Japanese"]["mail_or_tel_text"] = "メアドOR電話";
	$fieldToolTipsEoc_guestquestion["Japanese"]["mail_or_tel_text"] = "";
	$placeHoldersEoc_guestquestion["Japanese"]["mail_or_tel_text"] = "";
	$fieldLabelsEoc_guestquestion["Japanese"]["domain"] = "入力サイト";
	$fieldToolTipsEoc_guestquestion["Japanese"]["domain"] = "";
	$placeHoldersEoc_guestquestion["Japanese"]["domain"] = "";
	$fieldLabelsEoc_guestquestion["Japanese"]["device"] = "入力デバイス";
	$fieldToolTipsEoc_guestquestion["Japanese"]["device"] = "";
	$placeHoldersEoc_guestquestion["Japanese"]["device"] = "";
	$fieldLabelsEoc_guestquestion["Japanese"]["voice_sub_id"] = "Voice Sub Id";
	$fieldToolTipsEoc_guestquestion["Japanese"]["voice_sub_id"] = "";
	$placeHoldersEoc_guestquestion["Japanese"]["voice_sub_id"] = "";
	$fieldLabelsEoc_guestquestion["Japanese"]["updated_at"] = "最終更新日";
	$fieldToolTipsEoc_guestquestion["Japanese"]["updated_at"] = "";
	$placeHoldersEoc_guestquestion["Japanese"]["updated_at"] = "";
	$fieldLabelsEoc_guestquestion["Japanese"]["ecc_id"] = "Ecc Id";
	$fieldToolTipsEoc_guestquestion["Japanese"]["ecc_id"] = "";
	$placeHoldersEoc_guestquestion["Japanese"]["ecc_id"] = "";
	$fieldLabelsEoc_guestquestion["Japanese"]["status"] = "ST";
	$fieldToolTipsEoc_guestquestion["Japanese"]["status"] = "";
	$placeHoldersEoc_guestquestion["Japanese"]["status"] = "";
	if (count($fieldToolTipsEoc_guestquestion["Japanese"]))
		$tdataEoc_guestquestion[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsEoc_guestquestion[""] = array();
	$fieldToolTipsEoc_guestquestion[""] = array();
	$placeHoldersEoc_guestquestion[""] = array();
	$pageTitlesEoc_guestquestion[""] = array();
	$fieldLabelsEoc_guestquestion[""]["id"] = "Id";
	$fieldToolTipsEoc_guestquestion[""]["id"] = "";
	$placeHoldersEoc_guestquestion[""]["id"] = "";
	$fieldLabelsEoc_guestquestion[""]["site_reflect"] = "Site-reflect";
	$fieldToolTipsEoc_guestquestion[""]["site_reflect"] = "";
	$placeHoldersEoc_guestquestion[""]["site_reflect"] = "";
	$fieldLabelsEoc_guestquestion[""]["timestamp"] = "Timestamp";
	$fieldToolTipsEoc_guestquestion[""]["timestamp"] = "";
	$placeHoldersEoc_guestquestion[""]["timestamp"] = "";
	$fieldLabelsEoc_guestquestion[""]["service_name"] = "Service-name";
	$fieldToolTipsEoc_guestquestion[""]["service_name"] = "";
	$placeHoldersEoc_guestquestion[""]["service_name"] = "";
	$fieldLabelsEoc_guestquestion[""]["service_name_text"] = "Service-name-text";
	$fieldToolTipsEoc_guestquestion[""]["service_name_text"] = "";
	$placeHoldersEoc_guestquestion[""]["service_name_text"] = "";
	$fieldLabelsEoc_guestquestion[""]["service_story"] = "Service-story";
	$fieldToolTipsEoc_guestquestion[""]["service_story"] = "";
	$placeHoldersEoc_guestquestion[""]["service_story"] = "";
	$fieldLabelsEoc_guestquestion[""]["service_story_text"] = "Service-story-text";
	$fieldToolTipsEoc_guestquestion[""]["service_story_text"] = "";
	$placeHoldersEoc_guestquestion[""]["service_story_text"] = "";
	$fieldLabelsEoc_guestquestion[""]["service_satisfied"] = "Service-satisfied";
	$fieldToolTipsEoc_guestquestion[""]["service_satisfied"] = "";
	$placeHoldersEoc_guestquestion[""]["service_satisfied"] = "";
	$fieldLabelsEoc_guestquestion[""]["sold_this_time"] = "Sold-this-time";
	$fieldToolTipsEoc_guestquestion[""]["sold_this_time"] = "";
	$placeHoldersEoc_guestquestion[""]["sold_this_time"] = "";
	$fieldLabelsEoc_guestquestion[""]["cancel_reason"] = "Cancel-reason";
	$fieldToolTipsEoc_guestquestion[""]["cancel_reason"] = "";
	$placeHoldersEoc_guestquestion[""]["cancel_reason"] = "";
	$fieldLabelsEoc_guestquestion[""]["cancel_reason_text"] = "Cancel-reason-text";
	$fieldToolTipsEoc_guestquestion[""]["cancel_reason_text"] = "";
	$placeHoldersEoc_guestquestion[""]["cancel_reason_text"] = "";
	$fieldLabelsEoc_guestquestion[""]["other_reason_text"] = "Other-reason-text";
	$fieldToolTipsEoc_guestquestion[""]["other_reason_text"] = "";
	$placeHoldersEoc_guestquestion[""]["other_reason_text"] = "";
	$fieldLabelsEoc_guestquestion[""]["how_much_cheap"] = "How-much-cheap";
	$fieldToolTipsEoc_guestquestion[""]["how_much_cheap"] = "";
	$placeHoldersEoc_guestquestion[""]["how_much_cheap"] = "";
	$fieldLabelsEoc_guestquestion[""]["how_much_cheap_text"] = "How-much-cheap-text";
	$fieldToolTipsEoc_guestquestion[""]["how_much_cheap_text"] = "";
	$placeHoldersEoc_guestquestion[""]["how_much_cheap_text"] = "";
	$fieldLabelsEoc_guestquestion[""]["dissatisfied_reason_text"] = "Dissatisfied-reason-text";
	$fieldToolTipsEoc_guestquestion[""]["dissatisfied_reason_text"] = "";
	$placeHoldersEoc_guestquestion[""]["dissatisfied_reason_text"] = "";
	$fieldLabelsEoc_guestquestion[""]["service_speed"] = "Service-speed";
	$fieldToolTipsEoc_guestquestion[""]["service_speed"] = "";
	$placeHoldersEoc_guestquestion[""]["service_speed"] = "";
	$fieldLabelsEoc_guestquestion[""]["service_speed_text"] = "Service-speed-text";
	$fieldToolTipsEoc_guestquestion[""]["service_speed_text"] = "";
	$placeHoldersEoc_guestquestion[""]["service_speed_text"] = "";
	$fieldLabelsEoc_guestquestion[""]["service_description"] = "Service-description";
	$fieldToolTipsEoc_guestquestion[""]["service_description"] = "";
	$placeHoldersEoc_guestquestion[""]["service_description"] = "";
	$fieldLabelsEoc_guestquestion[""]["service_description_text"] = "Service-description-text";
	$fieldToolTipsEoc_guestquestion[""]["service_description_text"] = "";
	$placeHoldersEoc_guestquestion[""]["service_description_text"] = "";
	$fieldLabelsEoc_guestquestion[""]["site_level"] = "Site-level";
	$fieldToolTipsEoc_guestquestion[""]["site_level"] = "";
	$placeHoldersEoc_guestquestion[""]["site_level"] = "";
	$fieldLabelsEoc_guestquestion[""]["site_level_text"] = "Site-level-text";
	$fieldToolTipsEoc_guestquestion[""]["site_level_text"] = "";
	$placeHoldersEoc_guestquestion[""]["site_level_text"] = "";
	$fieldLabelsEoc_guestquestion[""]["choice_reason_text"] = "Choice-reason-text";
	$fieldToolTipsEoc_guestquestion[""]["choice_reason_text"] = "";
	$placeHoldersEoc_guestquestion[""]["choice_reason_text"] = "";
	$fieldLabelsEoc_guestquestion[""]["search_keyword"] = "Search-keyword";
	$fieldToolTipsEoc_guestquestion[""]["search_keyword"] = "";
	$placeHoldersEoc_guestquestion[""]["search_keyword"] = "";
	$fieldLabelsEoc_guestquestion[""]["search_keyword_text"] = "Search-keyword-text";
	$fieldToolTipsEoc_guestquestion[""]["search_keyword_text"] = "";
	$placeHoldersEoc_guestquestion[""]["search_keyword_text"] = "";
	$fieldLabelsEoc_guestquestion[""]["search_engine"] = "Search-engine";
	$fieldToolTipsEoc_guestquestion[""]["search_engine"] = "";
	$placeHoldersEoc_guestquestion[""]["search_engine"] = "";
	$fieldLabelsEoc_guestquestion[""]["search_engine_text"] = "Search-engine-text";
	$fieldToolTipsEoc_guestquestion[""]["search_engine_text"] = "";
	$placeHoldersEoc_guestquestion[""]["search_engine_text"] = "";
	$fieldLabelsEoc_guestquestion[""]["search_medium"] = "Search-medium";
	$fieldToolTipsEoc_guestquestion[""]["search_medium"] = "";
	$placeHoldersEoc_guestquestion[""]["search_medium"] = "";
	$fieldLabelsEoc_guestquestion[""]["search_medium_text"] = "Search-medium-text";
	$fieldToolTipsEoc_guestquestion[""]["search_medium_text"] = "";
	$placeHoldersEoc_guestquestion[""]["search_medium_text"] = "";
	$fieldLabelsEoc_guestquestion[""]["freely_write_text"] = "Freely-write-text";
	$fieldToolTipsEoc_guestquestion[""]["freely_write_text"] = "";
	$placeHoldersEoc_guestquestion[""]["freely_write_text"] = "";
	$fieldLabelsEoc_guestquestion[""]["a_word_text"] = "A-word-text";
	$fieldToolTipsEoc_guestquestion[""]["a_word_text"] = "";
	$placeHoldersEoc_guestquestion[""]["a_word_text"] = "";
	$fieldLabelsEoc_guestquestion[""]["customer_sex"] = "Customer-sex";
	$fieldToolTipsEoc_guestquestion[""]["customer_sex"] = "";
	$placeHoldersEoc_guestquestion[""]["customer_sex"] = "";
	$fieldLabelsEoc_guestquestion[""]["customer_age"] = "Customer-age";
	$fieldToolTipsEoc_guestquestion[""]["customer_age"] = "";
	$placeHoldersEoc_guestquestion[""]["customer_age"] = "";
	$fieldLabelsEoc_guestquestion[""]["customer_address"] = "Customer-address";
	$fieldToolTipsEoc_guestquestion[""]["customer_address"] = "";
	$placeHoldersEoc_guestquestion[""]["customer_address"] = "";
	$fieldLabelsEoc_guestquestion[""]["mail_or_tel_text"] = "Mail-or-tel-text";
	$fieldToolTipsEoc_guestquestion[""]["mail_or_tel_text"] = "";
	$placeHoldersEoc_guestquestion[""]["mail_or_tel_text"] = "";
	$fieldLabelsEoc_guestquestion[""]["domain"] = "Domain";
	$fieldToolTipsEoc_guestquestion[""]["domain"] = "";
	$placeHoldersEoc_guestquestion[""]["domain"] = "";
	$fieldLabelsEoc_guestquestion[""]["device"] = "Device";
	$fieldToolTipsEoc_guestquestion[""]["device"] = "";
	$placeHoldersEoc_guestquestion[""]["device"] = "";
	$fieldLabelsEoc_guestquestion[""]["voice_sub_id"] = "Voice Sub Id";
	$fieldToolTipsEoc_guestquestion[""]["voice_sub_id"] = "";
	$placeHoldersEoc_guestquestion[""]["voice_sub_id"] = "";
	$fieldLabelsEoc_guestquestion[""]["updated_at"] = "Updated At";
	$fieldToolTipsEoc_guestquestion[""]["updated_at"] = "";
	$placeHoldersEoc_guestquestion[""]["updated_at"] = "";
	$fieldLabelsEoc_guestquestion[""]["ecc_id"] = "Ecc Id";
	$fieldToolTipsEoc_guestquestion[""]["ecc_id"] = "";
	$placeHoldersEoc_guestquestion[""]["ecc_id"] = "";
	$fieldLabelsEoc_guestquestion[""]["status"] = "Status";
	$fieldToolTipsEoc_guestquestion[""]["status"] = "";
	$placeHoldersEoc_guestquestion[""]["status"] = "";
	if (count($fieldToolTipsEoc_guestquestion[""]))
		$tdataEoc_guestquestion[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsEoc_guestquestion["English"] = array();
	$fieldToolTipsEoc_guestquestion["English"] = array();
	$placeHoldersEoc_guestquestion["English"] = array();
	$pageTitlesEoc_guestquestion["English"] = array();
	$fieldLabelsEoc_guestquestion["English"]["id"] = "Id";
	$fieldToolTipsEoc_guestquestion["English"]["id"] = "";
	$placeHoldersEoc_guestquestion["English"]["id"] = "";
	$fieldLabelsEoc_guestquestion["English"]["site_reflect"] = "Site-reflect";
	$fieldToolTipsEoc_guestquestion["English"]["site_reflect"] = "";
	$placeHoldersEoc_guestquestion["English"]["site_reflect"] = "";
	$fieldLabelsEoc_guestquestion["English"]["timestamp"] = "Timestamp";
	$fieldToolTipsEoc_guestquestion["English"]["timestamp"] = "";
	$placeHoldersEoc_guestquestion["English"]["timestamp"] = "";
	$fieldLabelsEoc_guestquestion["English"]["service_name"] = "Service-name";
	$fieldToolTipsEoc_guestquestion["English"]["service_name"] = "";
	$placeHoldersEoc_guestquestion["English"]["service_name"] = "";
	$fieldLabelsEoc_guestquestion["English"]["service_name_text"] = "Service-name-text";
	$fieldToolTipsEoc_guestquestion["English"]["service_name_text"] = "";
	$placeHoldersEoc_guestquestion["English"]["service_name_text"] = "";
	$fieldLabelsEoc_guestquestion["English"]["service_story"] = "Service-story";
	$fieldToolTipsEoc_guestquestion["English"]["service_story"] = "";
	$placeHoldersEoc_guestquestion["English"]["service_story"] = "";
	$fieldLabelsEoc_guestquestion["English"]["service_story_text"] = "Service-story-text";
	$fieldToolTipsEoc_guestquestion["English"]["service_story_text"] = "";
	$placeHoldersEoc_guestquestion["English"]["service_story_text"] = "";
	$fieldLabelsEoc_guestquestion["English"]["service_satisfied"] = "Service-satisfied";
	$fieldToolTipsEoc_guestquestion["English"]["service_satisfied"] = "";
	$placeHoldersEoc_guestquestion["English"]["service_satisfied"] = "";
	$fieldLabelsEoc_guestquestion["English"]["sold_this_time"] = "Sold-this-time";
	$fieldToolTipsEoc_guestquestion["English"]["sold_this_time"] = "";
	$placeHoldersEoc_guestquestion["English"]["sold_this_time"] = "";
	$fieldLabelsEoc_guestquestion["English"]["cancel_reason"] = "Cancel-reason";
	$fieldToolTipsEoc_guestquestion["English"]["cancel_reason"] = "";
	$placeHoldersEoc_guestquestion["English"]["cancel_reason"] = "";
	$fieldLabelsEoc_guestquestion["English"]["cancel_reason_text"] = "Cancel-reason-text";
	$fieldToolTipsEoc_guestquestion["English"]["cancel_reason_text"] = "";
	$placeHoldersEoc_guestquestion["English"]["cancel_reason_text"] = "";
	$fieldLabelsEoc_guestquestion["English"]["other_reason_text"] = "Other-reason-text";
	$fieldToolTipsEoc_guestquestion["English"]["other_reason_text"] = "";
	$placeHoldersEoc_guestquestion["English"]["other_reason_text"] = "";
	$fieldLabelsEoc_guestquestion["English"]["how_much_cheap"] = "How-much-cheap";
	$fieldToolTipsEoc_guestquestion["English"]["how_much_cheap"] = "";
	$placeHoldersEoc_guestquestion["English"]["how_much_cheap"] = "";
	$fieldLabelsEoc_guestquestion["English"]["how_much_cheap_text"] = "How-much-cheap-text";
	$fieldToolTipsEoc_guestquestion["English"]["how_much_cheap_text"] = "";
	$placeHoldersEoc_guestquestion["English"]["how_much_cheap_text"] = "";
	$fieldLabelsEoc_guestquestion["English"]["dissatisfied_reason_text"] = "Dissatisfied-reason-text";
	$fieldToolTipsEoc_guestquestion["English"]["dissatisfied_reason_text"] = "";
	$placeHoldersEoc_guestquestion["English"]["dissatisfied_reason_text"] = "";
	$fieldLabelsEoc_guestquestion["English"]["service_speed"] = "Service-speed";
	$fieldToolTipsEoc_guestquestion["English"]["service_speed"] = "";
	$placeHoldersEoc_guestquestion["English"]["service_speed"] = "";
	$fieldLabelsEoc_guestquestion["English"]["service_speed_text"] = "Service-speed-text";
	$fieldToolTipsEoc_guestquestion["English"]["service_speed_text"] = "";
	$placeHoldersEoc_guestquestion["English"]["service_speed_text"] = "";
	$fieldLabelsEoc_guestquestion["English"]["service_description"] = "Service-description";
	$fieldToolTipsEoc_guestquestion["English"]["service_description"] = "";
	$placeHoldersEoc_guestquestion["English"]["service_description"] = "";
	$fieldLabelsEoc_guestquestion["English"]["service_description_text"] = "Service-description-text";
	$fieldToolTipsEoc_guestquestion["English"]["service_description_text"] = "";
	$placeHoldersEoc_guestquestion["English"]["service_description_text"] = "";
	$fieldLabelsEoc_guestquestion["English"]["site_level"] = "Site-level";
	$fieldToolTipsEoc_guestquestion["English"]["site_level"] = "";
	$placeHoldersEoc_guestquestion["English"]["site_level"] = "";
	$fieldLabelsEoc_guestquestion["English"]["site_level_text"] = "Site-level-text";
	$fieldToolTipsEoc_guestquestion["English"]["site_level_text"] = "";
	$placeHoldersEoc_guestquestion["English"]["site_level_text"] = "";
	$fieldLabelsEoc_guestquestion["English"]["choice_reason_text"] = "Choice-reason-text";
	$fieldToolTipsEoc_guestquestion["English"]["choice_reason_text"] = "";
	$placeHoldersEoc_guestquestion["English"]["choice_reason_text"] = "";
	$fieldLabelsEoc_guestquestion["English"]["search_keyword"] = "Search-keyword";
	$fieldToolTipsEoc_guestquestion["English"]["search_keyword"] = "";
	$placeHoldersEoc_guestquestion["English"]["search_keyword"] = "";
	$fieldLabelsEoc_guestquestion["English"]["search_keyword_text"] = "Search-keyword-text";
	$fieldToolTipsEoc_guestquestion["English"]["search_keyword_text"] = "";
	$placeHoldersEoc_guestquestion["English"]["search_keyword_text"] = "";
	$fieldLabelsEoc_guestquestion["English"]["search_engine"] = "Search-engine";
	$fieldToolTipsEoc_guestquestion["English"]["search_engine"] = "";
	$placeHoldersEoc_guestquestion["English"]["search_engine"] = "";
	$fieldLabelsEoc_guestquestion["English"]["search_engine_text"] = "Search-engine-text";
	$fieldToolTipsEoc_guestquestion["English"]["search_engine_text"] = "";
	$placeHoldersEoc_guestquestion["English"]["search_engine_text"] = "";
	$fieldLabelsEoc_guestquestion["English"]["search_medium"] = "Search-medium";
	$fieldToolTipsEoc_guestquestion["English"]["search_medium"] = "";
	$placeHoldersEoc_guestquestion["English"]["search_medium"] = "";
	$fieldLabelsEoc_guestquestion["English"]["search_medium_text"] = "Search-medium-text";
	$fieldToolTipsEoc_guestquestion["English"]["search_medium_text"] = "";
	$placeHoldersEoc_guestquestion["English"]["search_medium_text"] = "";
	$fieldLabelsEoc_guestquestion["English"]["freely_write_text"] = "Freely-write-text";
	$fieldToolTipsEoc_guestquestion["English"]["freely_write_text"] = "";
	$placeHoldersEoc_guestquestion["English"]["freely_write_text"] = "";
	$fieldLabelsEoc_guestquestion["English"]["a_word_text"] = "A-word-text";
	$fieldToolTipsEoc_guestquestion["English"]["a_word_text"] = "";
	$placeHoldersEoc_guestquestion["English"]["a_word_text"] = "";
	$fieldLabelsEoc_guestquestion["English"]["customer_sex"] = "Customer-sex";
	$fieldToolTipsEoc_guestquestion["English"]["customer_sex"] = "";
	$placeHoldersEoc_guestquestion["English"]["customer_sex"] = "";
	$fieldLabelsEoc_guestquestion["English"]["customer_age"] = "Customer-age";
	$fieldToolTipsEoc_guestquestion["English"]["customer_age"] = "";
	$placeHoldersEoc_guestquestion["English"]["customer_age"] = "";
	$fieldLabelsEoc_guestquestion["English"]["customer_address"] = "Customer-address";
	$fieldToolTipsEoc_guestquestion["English"]["customer_address"] = "";
	$placeHoldersEoc_guestquestion["English"]["customer_address"] = "";
	$fieldLabelsEoc_guestquestion["English"]["mail_or_tel_text"] = "Mail-or-tel-text";
	$fieldToolTipsEoc_guestquestion["English"]["mail_or_tel_text"] = "";
	$placeHoldersEoc_guestquestion["English"]["mail_or_tel_text"] = "";
	$fieldLabelsEoc_guestquestion["English"]["domain"] = "Domain";
	$fieldToolTipsEoc_guestquestion["English"]["domain"] = "";
	$placeHoldersEoc_guestquestion["English"]["domain"] = "";
	$fieldLabelsEoc_guestquestion["English"]["device"] = "Device";
	$fieldToolTipsEoc_guestquestion["English"]["device"] = "";
	$placeHoldersEoc_guestquestion["English"]["device"] = "";
	$fieldLabelsEoc_guestquestion["English"]["voice_sub_id"] = "Voice Sub Id";
	$fieldToolTipsEoc_guestquestion["English"]["voice_sub_id"] = "";
	$placeHoldersEoc_guestquestion["English"]["voice_sub_id"] = "";
	$fieldLabelsEoc_guestquestion["English"]["updated_at"] = "Updated At";
	$fieldToolTipsEoc_guestquestion["English"]["updated_at"] = "";
	$placeHoldersEoc_guestquestion["English"]["updated_at"] = "";
	$fieldLabelsEoc_guestquestion["English"]["ecc_id"] = "Ecc Id";
	$fieldToolTipsEoc_guestquestion["English"]["ecc_id"] = "";
	$placeHoldersEoc_guestquestion["English"]["ecc_id"] = "";
	$fieldLabelsEoc_guestquestion["English"]["status"] = "Status";
	$fieldToolTipsEoc_guestquestion["English"]["status"] = "";
	$placeHoldersEoc_guestquestion["English"]["status"] = "";
	if (count($fieldToolTipsEoc_guestquestion["English"]))
		$tdataEoc_guestquestion[".isUseToolTips"] = true;
}


	$tdataEoc_guestquestion[".NCSearch"] = true;



$tdataEoc_guestquestion[".shortTableName"] = "Eoc_guestquestion";
$tdataEoc_guestquestion[".nSecOptions"] = 0;
$tdataEoc_guestquestion[".recsPerRowPrint"] = 1;
$tdataEoc_guestquestion[".mainTableOwnerID"] = "";
$tdataEoc_guestquestion[".moveNext"] = 1;
$tdataEoc_guestquestion[".entityType"] = 0;

$tdataEoc_guestquestion[".strOriginalTableName"] = "Eoc_guestquestion";

	



$tdataEoc_guestquestion[".showAddInPopup"] = false;

$tdataEoc_guestquestion[".showEditInPopup"] = false;

$tdataEoc_guestquestion[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataEoc_guestquestion[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataEoc_guestquestion[".fieldsForRegister"] = array();

$tdataEoc_guestquestion[".listAjax"] = false;

	$tdataEoc_guestquestion[".audit"] = true;

	$tdataEoc_guestquestion[".locking"] = false;



$tdataEoc_guestquestion[".list"] = true;

$tdataEoc_guestquestion[".inlineEdit"] = true;


$tdataEoc_guestquestion[".reorderRecordsByHeader"] = true;



$tdataEoc_guestquestion[".inlineAdd"] = true;
$tdataEoc_guestquestion[".view"] = true;

$tdataEoc_guestquestion[".import"] = true;

$tdataEoc_guestquestion[".exportTo"] = true;

$tdataEoc_guestquestion[".printFriendly"] = true;

$tdataEoc_guestquestion[".delete"] = true;

$tdataEoc_guestquestion[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataEoc_guestquestion[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataEoc_guestquestion[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataEoc_guestquestion[".searchSaving"] = false;
//

$tdataEoc_guestquestion[".showSearchPanel"] = true;
		$tdataEoc_guestquestion[".flexibleSearch"] = true;

$tdataEoc_guestquestion[".isUseAjaxSuggest"] = true;

$tdataEoc_guestquestion[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																								

$tdataEoc_guestquestion[".ajaxCodeSnippetAdded"] = false;

$tdataEoc_guestquestion[".buttonsAdded"] = false;

$tdataEoc_guestquestion[".addPageEvents"] = false;

// use timepicker for search panel
$tdataEoc_guestquestion[".isUseTimeForSearch"] = false;



$tdataEoc_guestquestion[".badgeColor"] = "cfae83";


$tdataEoc_guestquestion[".allSearchFields"] = array();
$tdataEoc_guestquestion[".filterFields"] = array();
$tdataEoc_guestquestion[".requiredSearchFields"] = array();

$tdataEoc_guestquestion[".allSearchFields"][] = "status";
	$tdataEoc_guestquestion[".allSearchFields"][] = "id";
	$tdataEoc_guestquestion[".allSearchFields"][] = "site-reflect";
	$tdataEoc_guestquestion[".allSearchFields"][] = "timestamp";
	$tdataEoc_guestquestion[".allSearchFields"][] = "service-name";
	$tdataEoc_guestquestion[".allSearchFields"][] = "service-name-text";
	$tdataEoc_guestquestion[".allSearchFields"][] = "service-story";
	$tdataEoc_guestquestion[".allSearchFields"][] = "service-story-text";
	$tdataEoc_guestquestion[".allSearchFields"][] = "service-satisfied";
	$tdataEoc_guestquestion[".allSearchFields"][] = "sold-this-time";
	$tdataEoc_guestquestion[".allSearchFields"][] = "cancel-reason";
	$tdataEoc_guestquestion[".allSearchFields"][] = "cancel-reason-text";
	$tdataEoc_guestquestion[".allSearchFields"][] = "other-reason-text";
	$tdataEoc_guestquestion[".allSearchFields"][] = "how-much-cheap";
	$tdataEoc_guestquestion[".allSearchFields"][] = "how-much-cheap-text";
	$tdataEoc_guestquestion[".allSearchFields"][] = "dissatisfied-reason-text";
	$tdataEoc_guestquestion[".allSearchFields"][] = "service-speed";
	$tdataEoc_guestquestion[".allSearchFields"][] = "service-speed-text";
	$tdataEoc_guestquestion[".allSearchFields"][] = "service-description";
	$tdataEoc_guestquestion[".allSearchFields"][] = "service-description-text";
	$tdataEoc_guestquestion[".allSearchFields"][] = "site-level";
	$tdataEoc_guestquestion[".allSearchFields"][] = "site-level-text";
	$tdataEoc_guestquestion[".allSearchFields"][] = "choice-reason-text";
	$tdataEoc_guestquestion[".allSearchFields"][] = "search-keyword";
	$tdataEoc_guestquestion[".allSearchFields"][] = "search-keyword-text";
	$tdataEoc_guestquestion[".allSearchFields"][] = "search-engine";
	$tdataEoc_guestquestion[".allSearchFields"][] = "search-engine-text";
	$tdataEoc_guestquestion[".allSearchFields"][] = "search-medium";
	$tdataEoc_guestquestion[".allSearchFields"][] = "search-medium-text";
	$tdataEoc_guestquestion[".allSearchFields"][] = "freely-write-text";
	$tdataEoc_guestquestion[".allSearchFields"][] = "a-word-text";
	$tdataEoc_guestquestion[".allSearchFields"][] = "customer-sex";
	$tdataEoc_guestquestion[".allSearchFields"][] = "customer-age";
	$tdataEoc_guestquestion[".allSearchFields"][] = "customer-address";
	$tdataEoc_guestquestion[".allSearchFields"][] = "mail-or-tel-text";
	$tdataEoc_guestquestion[".allSearchFields"][] = "domain";
	$tdataEoc_guestquestion[".allSearchFields"][] = "device";
	$tdataEoc_guestquestion[".allSearchFields"][] = "voice_sub_id";
	$tdataEoc_guestquestion[".allSearchFields"][] = "updated_at";
	$tdataEoc_guestquestion[".allSearchFields"][] = "ecc_id";
	

$tdataEoc_guestquestion[".googleLikeFields"] = array();
$tdataEoc_guestquestion[".googleLikeFields"][] = "id";
$tdataEoc_guestquestion[".googleLikeFields"][] = "site-reflect";
$tdataEoc_guestquestion[".googleLikeFields"][] = "timestamp";
$tdataEoc_guestquestion[".googleLikeFields"][] = "service-name";
$tdataEoc_guestquestion[".googleLikeFields"][] = "service-name-text";
$tdataEoc_guestquestion[".googleLikeFields"][] = "service-story";
$tdataEoc_guestquestion[".googleLikeFields"][] = "service-story-text";
$tdataEoc_guestquestion[".googleLikeFields"][] = "service-satisfied";
$tdataEoc_guestquestion[".googleLikeFields"][] = "sold-this-time";
$tdataEoc_guestquestion[".googleLikeFields"][] = "cancel-reason";
$tdataEoc_guestquestion[".googleLikeFields"][] = "cancel-reason-text";
$tdataEoc_guestquestion[".googleLikeFields"][] = "other-reason-text";
$tdataEoc_guestquestion[".googleLikeFields"][] = "how-much-cheap";
$tdataEoc_guestquestion[".googleLikeFields"][] = "how-much-cheap-text";
$tdataEoc_guestquestion[".googleLikeFields"][] = "dissatisfied-reason-text";
$tdataEoc_guestquestion[".googleLikeFields"][] = "service-speed";
$tdataEoc_guestquestion[".googleLikeFields"][] = "service-speed-text";
$tdataEoc_guestquestion[".googleLikeFields"][] = "service-description";
$tdataEoc_guestquestion[".googleLikeFields"][] = "service-description-text";
$tdataEoc_guestquestion[".googleLikeFields"][] = "site-level";
$tdataEoc_guestquestion[".googleLikeFields"][] = "site-level-text";
$tdataEoc_guestquestion[".googleLikeFields"][] = "choice-reason-text";
$tdataEoc_guestquestion[".googleLikeFields"][] = "search-keyword";
$tdataEoc_guestquestion[".googleLikeFields"][] = "search-keyword-text";
$tdataEoc_guestquestion[".googleLikeFields"][] = "search-engine";
$tdataEoc_guestquestion[".googleLikeFields"][] = "search-engine-text";
$tdataEoc_guestquestion[".googleLikeFields"][] = "search-medium";
$tdataEoc_guestquestion[".googleLikeFields"][] = "search-medium-text";
$tdataEoc_guestquestion[".googleLikeFields"][] = "freely-write-text";
$tdataEoc_guestquestion[".googleLikeFields"][] = "a-word-text";
$tdataEoc_guestquestion[".googleLikeFields"][] = "customer-sex";
$tdataEoc_guestquestion[".googleLikeFields"][] = "customer-age";
$tdataEoc_guestquestion[".googleLikeFields"][] = "customer-address";
$tdataEoc_guestquestion[".googleLikeFields"][] = "mail-or-tel-text";
$tdataEoc_guestquestion[".googleLikeFields"][] = "domain";
$tdataEoc_guestquestion[".googleLikeFields"][] = "device";
$tdataEoc_guestquestion[".googleLikeFields"][] = "voice_sub_id";
$tdataEoc_guestquestion[".googleLikeFields"][] = "updated_at";
$tdataEoc_guestquestion[".googleLikeFields"][] = "ecc_id";
$tdataEoc_guestquestion[".googleLikeFields"][] = "status";

$tdataEoc_guestquestion[".panelSearchFields"] = array();
$tdataEoc_guestquestion[".searchPanelOptions"] = array();
$tdataEoc_guestquestion[".panelSearchFields"][] = "status";
	$tdataEoc_guestquestion[".panelSearchFields"][] = "id";
	$tdataEoc_guestquestion[".panelSearchFields"][] = "site-reflect";
	$tdataEoc_guestquestion[".panelSearchFields"][] = "timestamp";
	$tdataEoc_guestquestion[".panelSearchFields"][] = "service-name";
	$tdataEoc_guestquestion[".panelSearchFields"][] = "service-name-text";
	$tdataEoc_guestquestion[".panelSearchFields"][] = "service-story";
	$tdataEoc_guestquestion[".panelSearchFields"][] = "service-story-text";
	$tdataEoc_guestquestion[".panelSearchFields"][] = "service-satisfied";
	$tdataEoc_guestquestion[".panelSearchFields"][] = "sold-this-time";
	$tdataEoc_guestquestion[".panelSearchFields"][] = "cancel-reason";
	$tdataEoc_guestquestion[".panelSearchFields"][] = "cancel-reason-text";
	$tdataEoc_guestquestion[".panelSearchFields"][] = "other-reason-text";
	$tdataEoc_guestquestion[".panelSearchFields"][] = "how-much-cheap";
	$tdataEoc_guestquestion[".panelSearchFields"][] = "how-much-cheap-text";
	$tdataEoc_guestquestion[".panelSearchFields"][] = "dissatisfied-reason-text";
	$tdataEoc_guestquestion[".panelSearchFields"][] = "service-speed";
	$tdataEoc_guestquestion[".panelSearchFields"][] = "service-speed-text";
	$tdataEoc_guestquestion[".panelSearchFields"][] = "service-description";
	$tdataEoc_guestquestion[".panelSearchFields"][] = "service-description-text";
	$tdataEoc_guestquestion[".panelSearchFields"][] = "site-level";
	$tdataEoc_guestquestion[".panelSearchFields"][] = "site-level-text";
	$tdataEoc_guestquestion[".panelSearchFields"][] = "choice-reason-text";
	$tdataEoc_guestquestion[".panelSearchFields"][] = "search-keyword";
	$tdataEoc_guestquestion[".panelSearchFields"][] = "search-keyword-text";
	$tdataEoc_guestquestion[".panelSearchFields"][] = "search-engine";
	$tdataEoc_guestquestion[".panelSearchFields"][] = "search-engine-text";
	$tdataEoc_guestquestion[".panelSearchFields"][] = "search-medium";
	$tdataEoc_guestquestion[".panelSearchFields"][] = "search-medium-text";
	$tdataEoc_guestquestion[".panelSearchFields"][] = "freely-write-text";
	$tdataEoc_guestquestion[".panelSearchFields"][] = "a-word-text";
	$tdataEoc_guestquestion[".panelSearchFields"][] = "customer-sex";
	$tdataEoc_guestquestion[".panelSearchFields"][] = "customer-age";
	$tdataEoc_guestquestion[".panelSearchFields"][] = "customer-address";
	$tdataEoc_guestquestion[".panelSearchFields"][] = "mail-or-tel-text";
	$tdataEoc_guestquestion[".panelSearchFields"][] = "domain";
	$tdataEoc_guestquestion[".panelSearchFields"][] = "device";
	$tdataEoc_guestquestion[".panelSearchFields"][] = "voice_sub_id";
	$tdataEoc_guestquestion[".panelSearchFields"][] = "updated_at";
	$tdataEoc_guestquestion[".panelSearchFields"][] = "ecc_id";
	
$tdataEoc_guestquestion[".advSearchFields"] = array();
$tdataEoc_guestquestion[".advSearchFields"][] = "status";
$tdataEoc_guestquestion[".advSearchFields"][] = "id";
$tdataEoc_guestquestion[".advSearchFields"][] = "site-reflect";
$tdataEoc_guestquestion[".advSearchFields"][] = "timestamp";
$tdataEoc_guestquestion[".advSearchFields"][] = "service-name";
$tdataEoc_guestquestion[".advSearchFields"][] = "service-name-text";
$tdataEoc_guestquestion[".advSearchFields"][] = "service-story";
$tdataEoc_guestquestion[".advSearchFields"][] = "service-story-text";
$tdataEoc_guestquestion[".advSearchFields"][] = "service-satisfied";
$tdataEoc_guestquestion[".advSearchFields"][] = "sold-this-time";
$tdataEoc_guestquestion[".advSearchFields"][] = "cancel-reason";
$tdataEoc_guestquestion[".advSearchFields"][] = "cancel-reason-text";
$tdataEoc_guestquestion[".advSearchFields"][] = "other-reason-text";
$tdataEoc_guestquestion[".advSearchFields"][] = "how-much-cheap";
$tdataEoc_guestquestion[".advSearchFields"][] = "how-much-cheap-text";
$tdataEoc_guestquestion[".advSearchFields"][] = "dissatisfied-reason-text";
$tdataEoc_guestquestion[".advSearchFields"][] = "service-speed";
$tdataEoc_guestquestion[".advSearchFields"][] = "service-speed-text";
$tdataEoc_guestquestion[".advSearchFields"][] = "service-description";
$tdataEoc_guestquestion[".advSearchFields"][] = "service-description-text";
$tdataEoc_guestquestion[".advSearchFields"][] = "site-level";
$tdataEoc_guestquestion[".advSearchFields"][] = "site-level-text";
$tdataEoc_guestquestion[".advSearchFields"][] = "choice-reason-text";
$tdataEoc_guestquestion[".advSearchFields"][] = "search-keyword";
$tdataEoc_guestquestion[".advSearchFields"][] = "search-keyword-text";
$tdataEoc_guestquestion[".advSearchFields"][] = "search-engine";
$tdataEoc_guestquestion[".advSearchFields"][] = "search-engine-text";
$tdataEoc_guestquestion[".advSearchFields"][] = "search-medium";
$tdataEoc_guestquestion[".advSearchFields"][] = "search-medium-text";
$tdataEoc_guestquestion[".advSearchFields"][] = "freely-write-text";
$tdataEoc_guestquestion[".advSearchFields"][] = "a-word-text";
$tdataEoc_guestquestion[".advSearchFields"][] = "customer-sex";
$tdataEoc_guestquestion[".advSearchFields"][] = "customer-age";
$tdataEoc_guestquestion[".advSearchFields"][] = "customer-address";
$tdataEoc_guestquestion[".advSearchFields"][] = "mail-or-tel-text";
$tdataEoc_guestquestion[".advSearchFields"][] = "domain";
$tdataEoc_guestquestion[".advSearchFields"][] = "device";
$tdataEoc_guestquestion[".advSearchFields"][] = "voice_sub_id";
$tdataEoc_guestquestion[".advSearchFields"][] = "updated_at";
$tdataEoc_guestquestion[".advSearchFields"][] = "ecc_id";

$tdataEoc_guestquestion[".tableType"] = "list";

$tdataEoc_guestquestion[".printerPageOrientation"] = 0;
$tdataEoc_guestquestion[".nPrinterPageScale"] = 100;

$tdataEoc_guestquestion[".nPrinterSplitRecords"] = 40;

$tdataEoc_guestquestion[".nPrinterPDFSplitRecords"] = 40;



$tdataEoc_guestquestion[".geocodingEnabled"] = false;





$tdataEoc_guestquestion[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataEoc_guestquestion[".pageSize"] = 50;

$tdataEoc_guestquestion[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY id DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataEoc_guestquestion[".strOrderBy"] = $tstrOrderBy;

$tdataEoc_guestquestion[".orderindexes"] = array();
$tdataEoc_guestquestion[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "`id`");

$tdataEoc_guestquestion[".sqlHead"] = "SELECT id,  `site-reflect`,  `timestamp`,  `service-name`,  `service-name-text`,  `service-story`,  `service-story-text`,  `service-satisfied`,  `sold-this-time`,  `cancel-reason`,  `cancel-reason-text`,  `other-reason-text`,  `how-much-cheap`,  `how-much-cheap-text`,  `dissatisfied-reason-text`,  `service-speed`,  `service-speed-text`,  `service-description`,  `service-description-text`,  `site-level`,  `site-level-text`,  `choice-reason-text`,  `search-keyword`,  `search-keyword-text`,  `search-engine`,  `search-engine-text`,  `search-medium`,  `search-medium-text`,  `freely-write-text`,  `a-word-text`,  `customer-sex`,  `customer-age`,  `customer-address`,  `mail-or-tel-text`,  `domain`,  device,  voice_sub_id,  updated_at,  ecc_id,  status";
$tdataEoc_guestquestion[".sqlFrom"] = "FROM Eoc_guestquestion";
$tdataEoc_guestquestion[".sqlWhereExpr"] = "";
$tdataEoc_guestquestion[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataEoc_guestquestion[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataEoc_guestquestion[".arrGroupsPerPage"] = $arrGPP;

$tdataEoc_guestquestion[".highlightSearchResults"] = true;

$tableKeysEoc_guestquestion = array();
$tableKeysEoc_guestquestion[] = "id";
$tdataEoc_guestquestion[".Keys"] = $tableKeysEoc_guestquestion;

$tdataEoc_guestquestion[".listFields"] = array();
$tdataEoc_guestquestion[".listFields"][] = "status";
$tdataEoc_guestquestion[".listFields"][] = "id";
$tdataEoc_guestquestion[".listFields"][] = "ecc_id";
$tdataEoc_guestquestion[".listFields"][] = "site-reflect";
$tdataEoc_guestquestion[".listFields"][] = "voice_sub_id";
$tdataEoc_guestquestion[".listFields"][] = "service-satisfied";
$tdataEoc_guestquestion[".listFields"][] = "timestamp";
$tdataEoc_guestquestion[".listFields"][] = "freely-write-text";
$tdataEoc_guestquestion[".listFields"][] = "a-word-text";
$tdataEoc_guestquestion[".listFields"][] = "customer-address";
$tdataEoc_guestquestion[".listFields"][] = "customer-sex";
$tdataEoc_guestquestion[".listFields"][] = "customer-age";
$tdataEoc_guestquestion[".listFields"][] = "service-name";
$tdataEoc_guestquestion[".listFields"][] = "service-name-text";
$tdataEoc_guestquestion[".listFields"][] = "service-story";
$tdataEoc_guestquestion[".listFields"][] = "service-story-text";
$tdataEoc_guestquestion[".listFields"][] = "sold-this-time";
$tdataEoc_guestquestion[".listFields"][] = "cancel-reason";
$tdataEoc_guestquestion[".listFields"][] = "cancel-reason-text";
$tdataEoc_guestquestion[".listFields"][] = "other-reason-text";
$tdataEoc_guestquestion[".listFields"][] = "how-much-cheap";
$tdataEoc_guestquestion[".listFields"][] = "how-much-cheap-text";
$tdataEoc_guestquestion[".listFields"][] = "dissatisfied-reason-text";
$tdataEoc_guestquestion[".listFields"][] = "service-speed";
$tdataEoc_guestquestion[".listFields"][] = "service-speed-text";
$tdataEoc_guestquestion[".listFields"][] = "service-description";
$tdataEoc_guestquestion[".listFields"][] = "service-description-text";
$tdataEoc_guestquestion[".listFields"][] = "site-level";
$tdataEoc_guestquestion[".listFields"][] = "site-level-text";
$tdataEoc_guestquestion[".listFields"][] = "choice-reason-text";
$tdataEoc_guestquestion[".listFields"][] = "search-keyword";
$tdataEoc_guestquestion[".listFields"][] = "search-keyword-text";
$tdataEoc_guestquestion[".listFields"][] = "search-engine";
$tdataEoc_guestquestion[".listFields"][] = "search-engine-text";
$tdataEoc_guestquestion[".listFields"][] = "search-medium";
$tdataEoc_guestquestion[".listFields"][] = "search-medium-text";
$tdataEoc_guestquestion[".listFields"][] = "mail-or-tel-text";
$tdataEoc_guestquestion[".listFields"][] = "domain";
$tdataEoc_guestquestion[".listFields"][] = "device";
$tdataEoc_guestquestion[".listFields"][] = "updated_at";

$tdataEoc_guestquestion[".hideMobileList"] = array();


$tdataEoc_guestquestion[".viewFields"] = array();
$tdataEoc_guestquestion[".viewFields"][] = "id";
$tdataEoc_guestquestion[".viewFields"][] = "site-reflect";
$tdataEoc_guestquestion[".viewFields"][] = "timestamp";
$tdataEoc_guestquestion[".viewFields"][] = "service-name";
$tdataEoc_guestquestion[".viewFields"][] = "service-name-text";
$tdataEoc_guestquestion[".viewFields"][] = "service-story";
$tdataEoc_guestquestion[".viewFields"][] = "service-story-text";
$tdataEoc_guestquestion[".viewFields"][] = "service-satisfied";
$tdataEoc_guestquestion[".viewFields"][] = "sold-this-time";
$tdataEoc_guestquestion[".viewFields"][] = "cancel-reason";
$tdataEoc_guestquestion[".viewFields"][] = "cancel-reason-text";
$tdataEoc_guestquestion[".viewFields"][] = "other-reason-text";
$tdataEoc_guestquestion[".viewFields"][] = "how-much-cheap";
$tdataEoc_guestquestion[".viewFields"][] = "how-much-cheap-text";
$tdataEoc_guestquestion[".viewFields"][] = "dissatisfied-reason-text";
$tdataEoc_guestquestion[".viewFields"][] = "service-speed";
$tdataEoc_guestquestion[".viewFields"][] = "service-speed-text";
$tdataEoc_guestquestion[".viewFields"][] = "service-description";
$tdataEoc_guestquestion[".viewFields"][] = "service-description-text";
$tdataEoc_guestquestion[".viewFields"][] = "site-level";
$tdataEoc_guestquestion[".viewFields"][] = "site-level-text";
$tdataEoc_guestquestion[".viewFields"][] = "choice-reason-text";
$tdataEoc_guestquestion[".viewFields"][] = "search-keyword";
$tdataEoc_guestquestion[".viewFields"][] = "search-keyword-text";
$tdataEoc_guestquestion[".viewFields"][] = "search-engine";
$tdataEoc_guestquestion[".viewFields"][] = "search-engine-text";
$tdataEoc_guestquestion[".viewFields"][] = "search-medium";
$tdataEoc_guestquestion[".viewFields"][] = "search-medium-text";
$tdataEoc_guestquestion[".viewFields"][] = "freely-write-text";
$tdataEoc_guestquestion[".viewFields"][] = "a-word-text";
$tdataEoc_guestquestion[".viewFields"][] = "customer-sex";
$tdataEoc_guestquestion[".viewFields"][] = "customer-age";
$tdataEoc_guestquestion[".viewFields"][] = "customer-address";
$tdataEoc_guestquestion[".viewFields"][] = "mail-or-tel-text";
$tdataEoc_guestquestion[".viewFields"][] = "domain";
$tdataEoc_guestquestion[".viewFields"][] = "device";
$tdataEoc_guestquestion[".viewFields"][] = "voice_sub_id";
$tdataEoc_guestquestion[".viewFields"][] = "updated_at";
$tdataEoc_guestquestion[".viewFields"][] = "ecc_id";
$tdataEoc_guestquestion[".viewFields"][] = "status";

$tdataEoc_guestquestion[".addFields"] = array();

$tdataEoc_guestquestion[".masterListFields"] = array();
$tdataEoc_guestquestion[".masterListFields"][] = "id";
$tdataEoc_guestquestion[".masterListFields"][] = "site-reflect";
$tdataEoc_guestquestion[".masterListFields"][] = "timestamp";
$tdataEoc_guestquestion[".masterListFields"][] = "service-name";
$tdataEoc_guestquestion[".masterListFields"][] = "service-name-text";
$tdataEoc_guestquestion[".masterListFields"][] = "service-story";
$tdataEoc_guestquestion[".masterListFields"][] = "service-story-text";
$tdataEoc_guestquestion[".masterListFields"][] = "service-satisfied";
$tdataEoc_guestquestion[".masterListFields"][] = "sold-this-time";
$tdataEoc_guestquestion[".masterListFields"][] = "cancel-reason";
$tdataEoc_guestquestion[".masterListFields"][] = "cancel-reason-text";
$tdataEoc_guestquestion[".masterListFields"][] = "other-reason-text";
$tdataEoc_guestquestion[".masterListFields"][] = "how-much-cheap";
$tdataEoc_guestquestion[".masterListFields"][] = "how-much-cheap-text";
$tdataEoc_guestquestion[".masterListFields"][] = "dissatisfied-reason-text";
$tdataEoc_guestquestion[".masterListFields"][] = "service-speed";
$tdataEoc_guestquestion[".masterListFields"][] = "service-speed-text";
$tdataEoc_guestquestion[".masterListFields"][] = "service-description";
$tdataEoc_guestquestion[".masterListFields"][] = "service-description-text";
$tdataEoc_guestquestion[".masterListFields"][] = "site-level";
$tdataEoc_guestquestion[".masterListFields"][] = "site-level-text";
$tdataEoc_guestquestion[".masterListFields"][] = "choice-reason-text";
$tdataEoc_guestquestion[".masterListFields"][] = "search-keyword";
$tdataEoc_guestquestion[".masterListFields"][] = "search-keyword-text";
$tdataEoc_guestquestion[".masterListFields"][] = "search-engine";
$tdataEoc_guestquestion[".masterListFields"][] = "search-engine-text";
$tdataEoc_guestquestion[".masterListFields"][] = "search-medium";
$tdataEoc_guestquestion[".masterListFields"][] = "search-medium-text";
$tdataEoc_guestquestion[".masterListFields"][] = "freely-write-text";
$tdataEoc_guestquestion[".masterListFields"][] = "a-word-text";
$tdataEoc_guestquestion[".masterListFields"][] = "customer-sex";
$tdataEoc_guestquestion[".masterListFields"][] = "customer-age";
$tdataEoc_guestquestion[".masterListFields"][] = "customer-address";
$tdataEoc_guestquestion[".masterListFields"][] = "mail-or-tel-text";
$tdataEoc_guestquestion[".masterListFields"][] = "domain";
$tdataEoc_guestquestion[".masterListFields"][] = "device";
$tdataEoc_guestquestion[".masterListFields"][] = "voice_sub_id";
$tdataEoc_guestquestion[".masterListFields"][] = "updated_at";
$tdataEoc_guestquestion[".masterListFields"][] = "ecc_id";
$tdataEoc_guestquestion[".masterListFields"][] = "status";

$tdataEoc_guestquestion[".inlineAddFields"] = array();
$tdataEoc_guestquestion[".inlineAddFields"][] = "status";
$tdataEoc_guestquestion[".inlineAddFields"][] = "ecc_id";
$tdataEoc_guestquestion[".inlineAddFields"][] = "site-reflect";
$tdataEoc_guestquestion[".inlineAddFields"][] = "voice_sub_id";
$tdataEoc_guestquestion[".inlineAddFields"][] = "service-satisfied";
$tdataEoc_guestquestion[".inlineAddFields"][] = "timestamp";
$tdataEoc_guestquestion[".inlineAddFields"][] = "freely-write-text";
$tdataEoc_guestquestion[".inlineAddFields"][] = "a-word-text";
$tdataEoc_guestquestion[".inlineAddFields"][] = "customer-address";
$tdataEoc_guestquestion[".inlineAddFields"][] = "customer-sex";
$tdataEoc_guestquestion[".inlineAddFields"][] = "customer-age";
$tdataEoc_guestquestion[".inlineAddFields"][] = "service-name";
$tdataEoc_guestquestion[".inlineAddFields"][] = "service-name-text";
$tdataEoc_guestquestion[".inlineAddFields"][] = "service-story";
$tdataEoc_guestquestion[".inlineAddFields"][] = "service-story-text";
$tdataEoc_guestquestion[".inlineAddFields"][] = "sold-this-time";
$tdataEoc_guestquestion[".inlineAddFields"][] = "cancel-reason";
$tdataEoc_guestquestion[".inlineAddFields"][] = "cancel-reason-text";
$tdataEoc_guestquestion[".inlineAddFields"][] = "other-reason-text";
$tdataEoc_guestquestion[".inlineAddFields"][] = "how-much-cheap";
$tdataEoc_guestquestion[".inlineAddFields"][] = "how-much-cheap-text";
$tdataEoc_guestquestion[".inlineAddFields"][] = "dissatisfied-reason-text";
$tdataEoc_guestquestion[".inlineAddFields"][] = "service-speed";
$tdataEoc_guestquestion[".inlineAddFields"][] = "service-speed-text";
$tdataEoc_guestquestion[".inlineAddFields"][] = "service-description";
$tdataEoc_guestquestion[".inlineAddFields"][] = "service-description-text";
$tdataEoc_guestquestion[".inlineAddFields"][] = "site-level";
$tdataEoc_guestquestion[".inlineAddFields"][] = "site-level-text";
$tdataEoc_guestquestion[".inlineAddFields"][] = "choice-reason-text";
$tdataEoc_guestquestion[".inlineAddFields"][] = "search-keyword";
$tdataEoc_guestquestion[".inlineAddFields"][] = "search-keyword-text";
$tdataEoc_guestquestion[".inlineAddFields"][] = "search-engine";
$tdataEoc_guestquestion[".inlineAddFields"][] = "search-engine-text";
$tdataEoc_guestquestion[".inlineAddFields"][] = "search-medium";
$tdataEoc_guestquestion[".inlineAddFields"][] = "search-medium-text";
$tdataEoc_guestquestion[".inlineAddFields"][] = "mail-or-tel-text";
$tdataEoc_guestquestion[".inlineAddFields"][] = "domain";
$tdataEoc_guestquestion[".inlineAddFields"][] = "device";
$tdataEoc_guestquestion[".inlineAddFields"][] = "updated_at";

$tdataEoc_guestquestion[".editFields"] = array();

$tdataEoc_guestquestion[".inlineEditFields"] = array();
$tdataEoc_guestquestion[".inlineEditFields"][] = "status";
$tdataEoc_guestquestion[".inlineEditFields"][] = "ecc_id";
$tdataEoc_guestquestion[".inlineEditFields"][] = "site-reflect";
$tdataEoc_guestquestion[".inlineEditFields"][] = "voice_sub_id";
$tdataEoc_guestquestion[".inlineEditFields"][] = "service-satisfied";
$tdataEoc_guestquestion[".inlineEditFields"][] = "freely-write-text";
$tdataEoc_guestquestion[".inlineEditFields"][] = "a-word-text";
$tdataEoc_guestquestion[".inlineEditFields"][] = "customer-address";
$tdataEoc_guestquestion[".inlineEditFields"][] = "customer-sex";
$tdataEoc_guestquestion[".inlineEditFields"][] = "customer-age";
$tdataEoc_guestquestion[".inlineEditFields"][] = "service-name";
$tdataEoc_guestquestion[".inlineEditFields"][] = "service-name-text";
$tdataEoc_guestquestion[".inlineEditFields"][] = "service-story";
$tdataEoc_guestquestion[".inlineEditFields"][] = "service-story-text";
$tdataEoc_guestquestion[".inlineEditFields"][] = "sold-this-time";
$tdataEoc_guestquestion[".inlineEditFields"][] = "cancel-reason";
$tdataEoc_guestquestion[".inlineEditFields"][] = "cancel-reason-text";
$tdataEoc_guestquestion[".inlineEditFields"][] = "other-reason-text";
$tdataEoc_guestquestion[".inlineEditFields"][] = "how-much-cheap";
$tdataEoc_guestquestion[".inlineEditFields"][] = "how-much-cheap-text";
$tdataEoc_guestquestion[".inlineEditFields"][] = "dissatisfied-reason-text";
$tdataEoc_guestquestion[".inlineEditFields"][] = "service-speed";
$tdataEoc_guestquestion[".inlineEditFields"][] = "service-speed-text";
$tdataEoc_guestquestion[".inlineEditFields"][] = "service-description";
$tdataEoc_guestquestion[".inlineEditFields"][] = "service-description-text";
$tdataEoc_guestquestion[".inlineEditFields"][] = "site-level";
$tdataEoc_guestquestion[".inlineEditFields"][] = "site-level-text";
$tdataEoc_guestquestion[".inlineEditFields"][] = "choice-reason-text";
$tdataEoc_guestquestion[".inlineEditFields"][] = "search-keyword";
$tdataEoc_guestquestion[".inlineEditFields"][] = "search-keyword-text";
$tdataEoc_guestquestion[".inlineEditFields"][] = "search-engine";
$tdataEoc_guestquestion[".inlineEditFields"][] = "search-engine-text";
$tdataEoc_guestquestion[".inlineEditFields"][] = "search-medium";
$tdataEoc_guestquestion[".inlineEditFields"][] = "search-medium-text";
$tdataEoc_guestquestion[".inlineEditFields"][] = "mail-or-tel-text";
$tdataEoc_guestquestion[".inlineEditFields"][] = "domain";
$tdataEoc_guestquestion[".inlineEditFields"][] = "device";

$tdataEoc_guestquestion[".updateSelectedFields"] = array();


$tdataEoc_guestquestion[".exportFields"] = array();
$tdataEoc_guestquestion[".exportFields"][] = "id";
$tdataEoc_guestquestion[".exportFields"][] = "site-reflect";
$tdataEoc_guestquestion[".exportFields"][] = "timestamp";
$tdataEoc_guestquestion[".exportFields"][] = "service-name";
$tdataEoc_guestquestion[".exportFields"][] = "service-name-text";
$tdataEoc_guestquestion[".exportFields"][] = "service-story";
$tdataEoc_guestquestion[".exportFields"][] = "service-story-text";
$tdataEoc_guestquestion[".exportFields"][] = "service-satisfied";
$tdataEoc_guestquestion[".exportFields"][] = "sold-this-time";
$tdataEoc_guestquestion[".exportFields"][] = "cancel-reason";
$tdataEoc_guestquestion[".exportFields"][] = "cancel-reason-text";
$tdataEoc_guestquestion[".exportFields"][] = "other-reason-text";
$tdataEoc_guestquestion[".exportFields"][] = "how-much-cheap";
$tdataEoc_guestquestion[".exportFields"][] = "how-much-cheap-text";
$tdataEoc_guestquestion[".exportFields"][] = "dissatisfied-reason-text";
$tdataEoc_guestquestion[".exportFields"][] = "service-speed";
$tdataEoc_guestquestion[".exportFields"][] = "service-speed-text";
$tdataEoc_guestquestion[".exportFields"][] = "service-description";
$tdataEoc_guestquestion[".exportFields"][] = "service-description-text";
$tdataEoc_guestquestion[".exportFields"][] = "site-level";
$tdataEoc_guestquestion[".exportFields"][] = "site-level-text";
$tdataEoc_guestquestion[".exportFields"][] = "choice-reason-text";
$tdataEoc_guestquestion[".exportFields"][] = "search-keyword";
$tdataEoc_guestquestion[".exportFields"][] = "search-keyword-text";
$tdataEoc_guestquestion[".exportFields"][] = "search-engine";
$tdataEoc_guestquestion[".exportFields"][] = "search-engine-text";
$tdataEoc_guestquestion[".exportFields"][] = "search-medium";
$tdataEoc_guestquestion[".exportFields"][] = "search-medium-text";
$tdataEoc_guestquestion[".exportFields"][] = "freely-write-text";
$tdataEoc_guestquestion[".exportFields"][] = "a-word-text";
$tdataEoc_guestquestion[".exportFields"][] = "customer-sex";
$tdataEoc_guestquestion[".exportFields"][] = "customer-age";
$tdataEoc_guestquestion[".exportFields"][] = "customer-address";
$tdataEoc_guestquestion[".exportFields"][] = "mail-or-tel-text";
$tdataEoc_guestquestion[".exportFields"][] = "domain";
$tdataEoc_guestquestion[".exportFields"][] = "device";
$tdataEoc_guestquestion[".exportFields"][] = "voice_sub_id";
$tdataEoc_guestquestion[".exportFields"][] = "updated_at";
$tdataEoc_guestquestion[".exportFields"][] = "ecc_id";
$tdataEoc_guestquestion[".exportFields"][] = "status";

$tdataEoc_guestquestion[".importFields"] = array();
$tdataEoc_guestquestion[".importFields"][] = "id";
$tdataEoc_guestquestion[".importFields"][] = "site-reflect";
$tdataEoc_guestquestion[".importFields"][] = "timestamp";
$tdataEoc_guestquestion[".importFields"][] = "service-name";
$tdataEoc_guestquestion[".importFields"][] = "service-name-text";
$tdataEoc_guestquestion[".importFields"][] = "service-story";
$tdataEoc_guestquestion[".importFields"][] = "service-story-text";
$tdataEoc_guestquestion[".importFields"][] = "service-satisfied";
$tdataEoc_guestquestion[".importFields"][] = "sold-this-time";
$tdataEoc_guestquestion[".importFields"][] = "cancel-reason";
$tdataEoc_guestquestion[".importFields"][] = "cancel-reason-text";
$tdataEoc_guestquestion[".importFields"][] = "other-reason-text";
$tdataEoc_guestquestion[".importFields"][] = "how-much-cheap";
$tdataEoc_guestquestion[".importFields"][] = "how-much-cheap-text";
$tdataEoc_guestquestion[".importFields"][] = "dissatisfied-reason-text";
$tdataEoc_guestquestion[".importFields"][] = "service-speed";
$tdataEoc_guestquestion[".importFields"][] = "service-speed-text";
$tdataEoc_guestquestion[".importFields"][] = "service-description";
$tdataEoc_guestquestion[".importFields"][] = "service-description-text";
$tdataEoc_guestquestion[".importFields"][] = "site-level";
$tdataEoc_guestquestion[".importFields"][] = "site-level-text";
$tdataEoc_guestquestion[".importFields"][] = "choice-reason-text";
$tdataEoc_guestquestion[".importFields"][] = "search-keyword";
$tdataEoc_guestquestion[".importFields"][] = "search-keyword-text";
$tdataEoc_guestquestion[".importFields"][] = "search-engine";
$tdataEoc_guestquestion[".importFields"][] = "search-engine-text";
$tdataEoc_guestquestion[".importFields"][] = "search-medium";
$tdataEoc_guestquestion[".importFields"][] = "search-medium-text";
$tdataEoc_guestquestion[".importFields"][] = "freely-write-text";
$tdataEoc_guestquestion[".importFields"][] = "a-word-text";
$tdataEoc_guestquestion[".importFields"][] = "customer-sex";
$tdataEoc_guestquestion[".importFields"][] = "customer-age";
$tdataEoc_guestquestion[".importFields"][] = "customer-address";
$tdataEoc_guestquestion[".importFields"][] = "mail-or-tel-text";
$tdataEoc_guestquestion[".importFields"][] = "domain";
$tdataEoc_guestquestion[".importFields"][] = "device";
$tdataEoc_guestquestion[".importFields"][] = "voice_sub_id";
$tdataEoc_guestquestion[".importFields"][] = "updated_at";
$tdataEoc_guestquestion[".importFields"][] = "ecc_id";
$tdataEoc_guestquestion[".importFields"][] = "status";

$tdataEoc_guestquestion[".printFields"] = array();
$tdataEoc_guestquestion[".printFields"][] = "id";
$tdataEoc_guestquestion[".printFields"][] = "site-reflect";
$tdataEoc_guestquestion[".printFields"][] = "timestamp";
$tdataEoc_guestquestion[".printFields"][] = "service-name";
$tdataEoc_guestquestion[".printFields"][] = "service-name-text";
$tdataEoc_guestquestion[".printFields"][] = "service-story";
$tdataEoc_guestquestion[".printFields"][] = "service-story-text";
$tdataEoc_guestquestion[".printFields"][] = "service-satisfied";
$tdataEoc_guestquestion[".printFields"][] = "sold-this-time";
$tdataEoc_guestquestion[".printFields"][] = "cancel-reason";
$tdataEoc_guestquestion[".printFields"][] = "cancel-reason-text";
$tdataEoc_guestquestion[".printFields"][] = "other-reason-text";
$tdataEoc_guestquestion[".printFields"][] = "how-much-cheap";
$tdataEoc_guestquestion[".printFields"][] = "how-much-cheap-text";
$tdataEoc_guestquestion[".printFields"][] = "dissatisfied-reason-text";
$tdataEoc_guestquestion[".printFields"][] = "service-speed";
$tdataEoc_guestquestion[".printFields"][] = "service-speed-text";
$tdataEoc_guestquestion[".printFields"][] = "service-description";
$tdataEoc_guestquestion[".printFields"][] = "service-description-text";
$tdataEoc_guestquestion[".printFields"][] = "site-level";
$tdataEoc_guestquestion[".printFields"][] = "site-level-text";
$tdataEoc_guestquestion[".printFields"][] = "choice-reason-text";
$tdataEoc_guestquestion[".printFields"][] = "search-keyword";
$tdataEoc_guestquestion[".printFields"][] = "search-keyword-text";
$tdataEoc_guestquestion[".printFields"][] = "search-engine";
$tdataEoc_guestquestion[".printFields"][] = "search-engine-text";
$tdataEoc_guestquestion[".printFields"][] = "search-medium";
$tdataEoc_guestquestion[".printFields"][] = "search-medium-text";
$tdataEoc_guestquestion[".printFields"][] = "freely-write-text";
$tdataEoc_guestquestion[".printFields"][] = "a-word-text";
$tdataEoc_guestquestion[".printFields"][] = "customer-sex";
$tdataEoc_guestquestion[".printFields"][] = "customer-age";
$tdataEoc_guestquestion[".printFields"][] = "customer-address";
$tdataEoc_guestquestion[".printFields"][] = "mail-or-tel-text";
$tdataEoc_guestquestion[".printFields"][] = "domain";
$tdataEoc_guestquestion[".printFields"][] = "device";
$tdataEoc_guestquestion[".printFields"][] = "voice_sub_id";
$tdataEoc_guestquestion[".printFields"][] = "updated_at";
$tdataEoc_guestquestion[".printFields"][] = "ecc_id";
$tdataEoc_guestquestion[".printFields"][] = "status";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "Eoc_guestquestion";
	$fdata["Label"] = GetFieldLabel("Eoc_guestquestion","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
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




	$tdataEoc_guestquestion["id"] = $fdata;
//	site-reflect
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "site-reflect";
	$fdata["GoodName"] = "site_reflect";
	$fdata["ownerTable"] = "Eoc_guestquestion";
	$fdata["Label"] = GetFieldLabel("Eoc_guestquestion","site_reflect");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "site-reflect";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`site-reflect`";

	
	
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




	$tdataEoc_guestquestion["site-reflect"] = $fdata;
//	timestamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "timestamp";
	$fdata["GoodName"] = "timestamp";
	$fdata["ownerTable"] = "Eoc_guestquestion";
	$fdata["Label"] = GetFieldLabel("Eoc_guestquestion","timestamp");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "timestamp";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`timestamp`";

	
	
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




	$tdataEoc_guestquestion["timestamp"] = $fdata;
//	service-name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "service-name";
	$fdata["GoodName"] = "service_name";
	$fdata["ownerTable"] = "Eoc_guestquestion";
	$fdata["Label"] = GetFieldLabel("Eoc_guestquestion","service_name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "service-name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`service-name`";

	
	
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




	$tdataEoc_guestquestion["service-name"] = $fdata;
//	service-name-text
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "service-name-text";
	$fdata["GoodName"] = "service_name_text";
	$fdata["ownerTable"] = "Eoc_guestquestion";
	$fdata["Label"] = GetFieldLabel("Eoc_guestquestion","service_name_text");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "service-name-text";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`service-name-text`";

	
	
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




	$tdataEoc_guestquestion["service-name-text"] = $fdata;
//	service-story
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "service-story";
	$fdata["GoodName"] = "service_story";
	$fdata["ownerTable"] = "Eoc_guestquestion";
	$fdata["Label"] = GetFieldLabel("Eoc_guestquestion","service_story");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "service-story";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`service-story`";

	
	
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




	$tdataEoc_guestquestion["service-story"] = $fdata;
//	service-story-text
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "service-story-text";
	$fdata["GoodName"] = "service_story_text";
	$fdata["ownerTable"] = "Eoc_guestquestion";
	$fdata["Label"] = GetFieldLabel("Eoc_guestquestion","service_story_text");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "service-story-text";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`service-story-text`";

	
	
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




	$tdataEoc_guestquestion["service-story-text"] = $fdata;
//	service-satisfied
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "service-satisfied";
	$fdata["GoodName"] = "service_satisfied";
	$fdata["ownerTable"] = "Eoc_guestquestion";
	$fdata["Label"] = GetFieldLabel("Eoc_guestquestion","service_satisfied");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "service-satisfied";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`service-satisfied`";

	
	
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




	$tdataEoc_guestquestion["service-satisfied"] = $fdata;
//	sold-this-time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "sold-this-time";
	$fdata["GoodName"] = "sold_this_time";
	$fdata["ownerTable"] = "Eoc_guestquestion";
	$fdata["Label"] = GetFieldLabel("Eoc_guestquestion","sold_this_time");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "sold-this-time";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`sold-this-time`";

	
	
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




	$tdataEoc_guestquestion["sold-this-time"] = $fdata;
//	cancel-reason
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "cancel-reason";
	$fdata["GoodName"] = "cancel_reason";
	$fdata["ownerTable"] = "Eoc_guestquestion";
	$fdata["Label"] = GetFieldLabel("Eoc_guestquestion","cancel_reason");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "cancel-reason";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`cancel-reason`";

	
	
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




	$tdataEoc_guestquestion["cancel-reason"] = $fdata;
//	cancel-reason-text
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "cancel-reason-text";
	$fdata["GoodName"] = "cancel_reason_text";
	$fdata["ownerTable"] = "Eoc_guestquestion";
	$fdata["Label"] = GetFieldLabel("Eoc_guestquestion","cancel_reason_text");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "cancel-reason-text";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`cancel-reason-text`";

	
	
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




	$tdataEoc_guestquestion["cancel-reason-text"] = $fdata;
//	other-reason-text
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "other-reason-text";
	$fdata["GoodName"] = "other_reason_text";
	$fdata["ownerTable"] = "Eoc_guestquestion";
	$fdata["Label"] = GetFieldLabel("Eoc_guestquestion","other_reason_text");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "other-reason-text";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`other-reason-text`";

	
	
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




	$tdataEoc_guestquestion["other-reason-text"] = $fdata;
//	how-much-cheap
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "how-much-cheap";
	$fdata["GoodName"] = "how_much_cheap";
	$fdata["ownerTable"] = "Eoc_guestquestion";
	$fdata["Label"] = GetFieldLabel("Eoc_guestquestion","how_much_cheap");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "how-much-cheap";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`how-much-cheap`";

	
	
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




	$tdataEoc_guestquestion["how-much-cheap"] = $fdata;
//	how-much-cheap-text
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "how-much-cheap-text";
	$fdata["GoodName"] = "how_much_cheap_text";
	$fdata["ownerTable"] = "Eoc_guestquestion";
	$fdata["Label"] = GetFieldLabel("Eoc_guestquestion","how_much_cheap_text");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "how-much-cheap-text";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`how-much-cheap-text`";

	
	
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




	$tdataEoc_guestquestion["how-much-cheap-text"] = $fdata;
//	dissatisfied-reason-text
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "dissatisfied-reason-text";
	$fdata["GoodName"] = "dissatisfied_reason_text";
	$fdata["ownerTable"] = "Eoc_guestquestion";
	$fdata["Label"] = GetFieldLabel("Eoc_guestquestion","dissatisfied_reason_text");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "dissatisfied-reason-text";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`dissatisfied-reason-text`";

	
	
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




	$tdataEoc_guestquestion["dissatisfied-reason-text"] = $fdata;
//	service-speed
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "service-speed";
	$fdata["GoodName"] = "service_speed";
	$fdata["ownerTable"] = "Eoc_guestquestion";
	$fdata["Label"] = GetFieldLabel("Eoc_guestquestion","service_speed");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "service-speed";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`service-speed`";

	
	
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




	$tdataEoc_guestquestion["service-speed"] = $fdata;
//	service-speed-text
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "service-speed-text";
	$fdata["GoodName"] = "service_speed_text";
	$fdata["ownerTable"] = "Eoc_guestquestion";
	$fdata["Label"] = GetFieldLabel("Eoc_guestquestion","service_speed_text");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "service-speed-text";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`service-speed-text`";

	
	
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




	$tdataEoc_guestquestion["service-speed-text"] = $fdata;
//	service-description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "service-description";
	$fdata["GoodName"] = "service_description";
	$fdata["ownerTable"] = "Eoc_guestquestion";
	$fdata["Label"] = GetFieldLabel("Eoc_guestquestion","service_description");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "service-description";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`service-description`";

	
	
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




	$tdataEoc_guestquestion["service-description"] = $fdata;
//	service-description-text
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "service-description-text";
	$fdata["GoodName"] = "service_description_text";
	$fdata["ownerTable"] = "Eoc_guestquestion";
	$fdata["Label"] = GetFieldLabel("Eoc_guestquestion","service_description_text");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "service-description-text";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`service-description-text`";

	
	
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




	$tdataEoc_guestquestion["service-description-text"] = $fdata;
//	site-level
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "site-level";
	$fdata["GoodName"] = "site_level";
	$fdata["ownerTable"] = "Eoc_guestquestion";
	$fdata["Label"] = GetFieldLabel("Eoc_guestquestion","site_level");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "site-level";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`site-level`";

	
	
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




	$tdataEoc_guestquestion["site-level"] = $fdata;
//	site-level-text
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "site-level-text";
	$fdata["GoodName"] = "site_level_text";
	$fdata["ownerTable"] = "Eoc_guestquestion";
	$fdata["Label"] = GetFieldLabel("Eoc_guestquestion","site_level_text");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "site-level-text";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`site-level-text`";

	
	
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




	$tdataEoc_guestquestion["site-level-text"] = $fdata;
//	choice-reason-text
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "choice-reason-text";
	$fdata["GoodName"] = "choice_reason_text";
	$fdata["ownerTable"] = "Eoc_guestquestion";
	$fdata["Label"] = GetFieldLabel("Eoc_guestquestion","choice_reason_text");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "choice-reason-text";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`choice-reason-text`";

	
	
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




	$tdataEoc_guestquestion["choice-reason-text"] = $fdata;
//	search-keyword
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "search-keyword";
	$fdata["GoodName"] = "search_keyword";
	$fdata["ownerTable"] = "Eoc_guestquestion";
	$fdata["Label"] = GetFieldLabel("Eoc_guestquestion","search_keyword");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "search-keyword";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`search-keyword`";

	
	
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




	$tdataEoc_guestquestion["search-keyword"] = $fdata;
//	search-keyword-text
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "search-keyword-text";
	$fdata["GoodName"] = "search_keyword_text";
	$fdata["ownerTable"] = "Eoc_guestquestion";
	$fdata["Label"] = GetFieldLabel("Eoc_guestquestion","search_keyword_text");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "search-keyword-text";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`search-keyword-text`";

	
	
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




	$tdataEoc_guestquestion["search-keyword-text"] = $fdata;
//	search-engine
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "search-engine";
	$fdata["GoodName"] = "search_engine";
	$fdata["ownerTable"] = "Eoc_guestquestion";
	$fdata["Label"] = GetFieldLabel("Eoc_guestquestion","search_engine");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "search-engine";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`search-engine`";

	
	
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




	$tdataEoc_guestquestion["search-engine"] = $fdata;
//	search-engine-text
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "search-engine-text";
	$fdata["GoodName"] = "search_engine_text";
	$fdata["ownerTable"] = "Eoc_guestquestion";
	$fdata["Label"] = GetFieldLabel("Eoc_guestquestion","search_engine_text");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "search-engine-text";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`search-engine-text`";

	
	
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




	$tdataEoc_guestquestion["search-engine-text"] = $fdata;
//	search-medium
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "search-medium";
	$fdata["GoodName"] = "search_medium";
	$fdata["ownerTable"] = "Eoc_guestquestion";
	$fdata["Label"] = GetFieldLabel("Eoc_guestquestion","search_medium");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "search-medium";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`search-medium`";

	
	
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




	$tdataEoc_guestquestion["search-medium"] = $fdata;
//	search-medium-text
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "search-medium-text";
	$fdata["GoodName"] = "search_medium_text";
	$fdata["ownerTable"] = "Eoc_guestquestion";
	$fdata["Label"] = GetFieldLabel("Eoc_guestquestion","search_medium_text");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "search-medium-text";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`search-medium-text`";

	
	
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




	$tdataEoc_guestquestion["search-medium-text"] = $fdata;
//	freely-write-text
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "freely-write-text";
	$fdata["GoodName"] = "freely_write_text";
	$fdata["ownerTable"] = "Eoc_guestquestion";
	$fdata["Label"] = GetFieldLabel("Eoc_guestquestion","freely_write_text");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "freely-write-text";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`freely-write-text`";

	
	
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




	$tdataEoc_guestquestion["freely-write-text"] = $fdata;
//	a-word-text
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "a-word-text";
	$fdata["GoodName"] = "a_word_text";
	$fdata["ownerTable"] = "Eoc_guestquestion";
	$fdata["Label"] = GetFieldLabel("Eoc_guestquestion","a_word_text");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "a-word-text";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`a-word-text`";

	
	
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




	$tdataEoc_guestquestion["a-word-text"] = $fdata;
//	customer-sex
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "customer-sex";
	$fdata["GoodName"] = "customer_sex";
	$fdata["ownerTable"] = "Eoc_guestquestion";
	$fdata["Label"] = GetFieldLabel("Eoc_guestquestion","customer_sex");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "customer-sex";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`customer-sex`";

	
	
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




	$tdataEoc_guestquestion["customer-sex"] = $fdata;
//	customer-age
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "customer-age";
	$fdata["GoodName"] = "customer_age";
	$fdata["ownerTable"] = "Eoc_guestquestion";
	$fdata["Label"] = GetFieldLabel("Eoc_guestquestion","customer_age");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "customer-age";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`customer-age`";

	
	
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




	$tdataEoc_guestquestion["customer-age"] = $fdata;
//	customer-address
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "customer-address";
	$fdata["GoodName"] = "customer_address";
	$fdata["ownerTable"] = "Eoc_guestquestion";
	$fdata["Label"] = GetFieldLabel("Eoc_guestquestion","customer_address");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "customer-address";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`customer-address`";

	
	
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




	$tdataEoc_guestquestion["customer-address"] = $fdata;
//	mail-or-tel-text
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "mail-or-tel-text";
	$fdata["GoodName"] = "mail_or_tel_text";
	$fdata["ownerTable"] = "Eoc_guestquestion";
	$fdata["Label"] = GetFieldLabel("Eoc_guestquestion","mail_or_tel_text");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "mail-or-tel-text";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mail-or-tel-text`";

	
	
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




	$tdataEoc_guestquestion["mail-or-tel-text"] = $fdata;
//	domain
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "domain";
	$fdata["GoodName"] = "domain";
	$fdata["ownerTable"] = "Eoc_guestquestion";
	$fdata["Label"] = GetFieldLabel("Eoc_guestquestion","domain");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "domain";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`domain`";

	
	
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




	$tdataEoc_guestquestion["domain"] = $fdata;
//	device
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "device";
	$fdata["GoodName"] = "device";
	$fdata["ownerTable"] = "Eoc_guestquestion";
	$fdata["Label"] = GetFieldLabel("Eoc_guestquestion","device");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "device";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "device";

	
	
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




	$tdataEoc_guestquestion["device"] = $fdata;
//	voice_sub_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "voice_sub_id";
	$fdata["GoodName"] = "voice_sub_id";
	$fdata["ownerTable"] = "Eoc_guestquestion";
	$fdata["Label"] = GetFieldLabel("Eoc_guestquestion","voice_sub_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "voice_sub_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "voice_sub_id";

	
	
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




	$tdataEoc_guestquestion["voice_sub_id"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "Eoc_guestquestion";
	$fdata["Label"] = GetFieldLabel("Eoc_guestquestion","updated_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "updated_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "updated_at";

	
	
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




	$tdataEoc_guestquestion["updated_at"] = $fdata;
//	ecc_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "ecc_id";
	$fdata["GoodName"] = "ecc_id";
	$fdata["ownerTable"] = "Eoc_guestquestion";
	$fdata["Label"] = GetFieldLabel("Eoc_guestquestion","ecc_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ecc_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ecc_id";

	
	
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




	$tdataEoc_guestquestion["ecc_id"] = $fdata;
//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "Eoc_guestquestion";
	$fdata["Label"] = GetFieldLabel("Eoc_guestquestion","status");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "status";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "status";

	
	
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
	$edata["LookupValues"][] = "使用";
	$edata["LookupValues"][] = "使用済控え";
	$edata["LookupValues"][] = "過去使用";
	$edata["LookupValues"][] = "未使用";

	
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




	$tdataEoc_guestquestion["status"] = $fdata;


$tables_data["Eoc_guestquestion"]=&$tdataEoc_guestquestion;
$field_labels["Eoc_guestquestion"] = &$fieldLabelsEoc_guestquestion;
$fieldToolTips["Eoc_guestquestion"] = &$fieldToolTipsEoc_guestquestion;
$placeHolders["Eoc_guestquestion"] = &$placeHoldersEoc_guestquestion;
$page_titles["Eoc_guestquestion"] = &$pageTitlesEoc_guestquestion;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Eoc_guestquestion"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["Eoc_guestquestion"] = array();


	
				$strOriginalDetailsTable="Eoc";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="Eoc";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "Eoc";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "0";
	$masterParams["hideChild"]= "0";
	$masterParams["dispMasterInfo"] = array();
				$masterParams["dispMasterInfo"][PAGE_LIST] = true;
			
	$masterParams["previewOnList"]= 2;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 1;
	$masterParams["previewOnView"]= 1;
	$masterParams["proceedLink"]= 1;

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Eoc_guestquestion"][0] = $masterParams;
				$masterTablesData["Eoc_guestquestion"][0]["masterKeys"] = array();
	$masterTablesData["Eoc_guestquestion"][0]["masterKeys"][]="ecc_id";
				$masterTablesData["Eoc_guestquestion"][0]["detailKeys"] = array();
	$masterTablesData["Eoc_guestquestion"][0]["detailKeys"][]="ecc_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Eoc_guestquestion()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  `site-reflect`,  `timestamp`,  `service-name`,  `service-name-text`,  `service-story`,  `service-story-text`,  `service-satisfied`,  `sold-this-time`,  `cancel-reason`,  `cancel-reason-text`,  `other-reason-text`,  `how-much-cheap`,  `how-much-cheap-text`,  `dissatisfied-reason-text`,  `service-speed`,  `service-speed-text`,  `service-description`,  `service-description-text`,  `site-level`,  `site-level-text`,  `choice-reason-text`,  `search-keyword`,  `search-keyword-text`,  `search-engine`,  `search-engine-text`,  `search-medium`,  `search-medium-text`,  `freely-write-text`,  `a-word-text`,  `customer-sex`,  `customer-age`,  `customer-address`,  `mail-or-tel-text`,  `domain`,  device,  voice_sub_id,  updated_at,  ecc_id,  status";
$proto0["m_strFrom"] = "FROM Eoc_guestquestion";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY id DESC";
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
	"m_strTable" => "Eoc_guestquestion",
	"m_srcTableName" => "Eoc_guestquestion"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "Eoc_guestquestion";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "site-reflect",
	"m_strTable" => "Eoc_guestquestion",
	"m_srcTableName" => "Eoc_guestquestion"
));

$proto8["m_sql"] = "`site-reflect`";
$proto8["m_srcTableName"] = "Eoc_guestquestion";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "timestamp",
	"m_strTable" => "Eoc_guestquestion",
	"m_srcTableName" => "Eoc_guestquestion"
));

$proto10["m_sql"] = "`timestamp`";
$proto10["m_srcTableName"] = "Eoc_guestquestion";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "service-name",
	"m_strTable" => "Eoc_guestquestion",
	"m_srcTableName" => "Eoc_guestquestion"
));

$proto12["m_sql"] = "`service-name`";
$proto12["m_srcTableName"] = "Eoc_guestquestion";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "service-name-text",
	"m_strTable" => "Eoc_guestquestion",
	"m_srcTableName" => "Eoc_guestquestion"
));

$proto14["m_sql"] = "`service-name-text`";
$proto14["m_srcTableName"] = "Eoc_guestquestion";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "service-story",
	"m_strTable" => "Eoc_guestquestion",
	"m_srcTableName" => "Eoc_guestquestion"
));

$proto16["m_sql"] = "`service-story`";
$proto16["m_srcTableName"] = "Eoc_guestquestion";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "service-story-text",
	"m_strTable" => "Eoc_guestquestion",
	"m_srcTableName" => "Eoc_guestquestion"
));

$proto18["m_sql"] = "`service-story-text`";
$proto18["m_srcTableName"] = "Eoc_guestquestion";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "service-satisfied",
	"m_strTable" => "Eoc_guestquestion",
	"m_srcTableName" => "Eoc_guestquestion"
));

$proto20["m_sql"] = "`service-satisfied`";
$proto20["m_srcTableName"] = "Eoc_guestquestion";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "sold-this-time",
	"m_strTable" => "Eoc_guestquestion",
	"m_srcTableName" => "Eoc_guestquestion"
));

$proto22["m_sql"] = "`sold-this-time`";
$proto22["m_srcTableName"] = "Eoc_guestquestion";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "cancel-reason",
	"m_strTable" => "Eoc_guestquestion",
	"m_srcTableName" => "Eoc_guestquestion"
));

$proto24["m_sql"] = "`cancel-reason`";
$proto24["m_srcTableName"] = "Eoc_guestquestion";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "cancel-reason-text",
	"m_strTable" => "Eoc_guestquestion",
	"m_srcTableName" => "Eoc_guestquestion"
));

$proto26["m_sql"] = "`cancel-reason-text`";
$proto26["m_srcTableName"] = "Eoc_guestquestion";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "other-reason-text",
	"m_strTable" => "Eoc_guestquestion",
	"m_srcTableName" => "Eoc_guestquestion"
));

$proto28["m_sql"] = "`other-reason-text`";
$proto28["m_srcTableName"] = "Eoc_guestquestion";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "how-much-cheap",
	"m_strTable" => "Eoc_guestquestion",
	"m_srcTableName" => "Eoc_guestquestion"
));

$proto30["m_sql"] = "`how-much-cheap`";
$proto30["m_srcTableName"] = "Eoc_guestquestion";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "how-much-cheap-text",
	"m_strTable" => "Eoc_guestquestion",
	"m_srcTableName" => "Eoc_guestquestion"
));

$proto32["m_sql"] = "`how-much-cheap-text`";
$proto32["m_srcTableName"] = "Eoc_guestquestion";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "dissatisfied-reason-text",
	"m_strTable" => "Eoc_guestquestion",
	"m_srcTableName" => "Eoc_guestquestion"
));

$proto34["m_sql"] = "`dissatisfied-reason-text`";
$proto34["m_srcTableName"] = "Eoc_guestquestion";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "service-speed",
	"m_strTable" => "Eoc_guestquestion",
	"m_srcTableName" => "Eoc_guestquestion"
));

$proto36["m_sql"] = "`service-speed`";
$proto36["m_srcTableName"] = "Eoc_guestquestion";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "service-speed-text",
	"m_strTable" => "Eoc_guestquestion",
	"m_srcTableName" => "Eoc_guestquestion"
));

$proto38["m_sql"] = "`service-speed-text`";
$proto38["m_srcTableName"] = "Eoc_guestquestion";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "service-description",
	"m_strTable" => "Eoc_guestquestion",
	"m_srcTableName" => "Eoc_guestquestion"
));

$proto40["m_sql"] = "`service-description`";
$proto40["m_srcTableName"] = "Eoc_guestquestion";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "service-description-text",
	"m_strTable" => "Eoc_guestquestion",
	"m_srcTableName" => "Eoc_guestquestion"
));

$proto42["m_sql"] = "`service-description-text`";
$proto42["m_srcTableName"] = "Eoc_guestquestion";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "site-level",
	"m_strTable" => "Eoc_guestquestion",
	"m_srcTableName" => "Eoc_guestquestion"
));

$proto44["m_sql"] = "`site-level`";
$proto44["m_srcTableName"] = "Eoc_guestquestion";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "site-level-text",
	"m_strTable" => "Eoc_guestquestion",
	"m_srcTableName" => "Eoc_guestquestion"
));

$proto46["m_sql"] = "`site-level-text`";
$proto46["m_srcTableName"] = "Eoc_guestquestion";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "choice-reason-text",
	"m_strTable" => "Eoc_guestquestion",
	"m_srcTableName" => "Eoc_guestquestion"
));

$proto48["m_sql"] = "`choice-reason-text`";
$proto48["m_srcTableName"] = "Eoc_guestquestion";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "search-keyword",
	"m_strTable" => "Eoc_guestquestion",
	"m_srcTableName" => "Eoc_guestquestion"
));

$proto50["m_sql"] = "`search-keyword`";
$proto50["m_srcTableName"] = "Eoc_guestquestion";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "search-keyword-text",
	"m_strTable" => "Eoc_guestquestion",
	"m_srcTableName" => "Eoc_guestquestion"
));

$proto52["m_sql"] = "`search-keyword-text`";
$proto52["m_srcTableName"] = "Eoc_guestquestion";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "search-engine",
	"m_strTable" => "Eoc_guestquestion",
	"m_srcTableName" => "Eoc_guestquestion"
));

$proto54["m_sql"] = "`search-engine`";
$proto54["m_srcTableName"] = "Eoc_guestquestion";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "search-engine-text",
	"m_strTable" => "Eoc_guestquestion",
	"m_srcTableName" => "Eoc_guestquestion"
));

$proto56["m_sql"] = "`search-engine-text`";
$proto56["m_srcTableName"] = "Eoc_guestquestion";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "search-medium",
	"m_strTable" => "Eoc_guestquestion",
	"m_srcTableName" => "Eoc_guestquestion"
));

$proto58["m_sql"] = "`search-medium`";
$proto58["m_srcTableName"] = "Eoc_guestquestion";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "search-medium-text",
	"m_strTable" => "Eoc_guestquestion",
	"m_srcTableName" => "Eoc_guestquestion"
));

$proto60["m_sql"] = "`search-medium-text`";
$proto60["m_srcTableName"] = "Eoc_guestquestion";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "freely-write-text",
	"m_strTable" => "Eoc_guestquestion",
	"m_srcTableName" => "Eoc_guestquestion"
));

$proto62["m_sql"] = "`freely-write-text`";
$proto62["m_srcTableName"] = "Eoc_guestquestion";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "a-word-text",
	"m_strTable" => "Eoc_guestquestion",
	"m_srcTableName" => "Eoc_guestquestion"
));

$proto64["m_sql"] = "`a-word-text`";
$proto64["m_srcTableName"] = "Eoc_guestquestion";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "customer-sex",
	"m_strTable" => "Eoc_guestquestion",
	"m_srcTableName" => "Eoc_guestquestion"
));

$proto66["m_sql"] = "`customer-sex`";
$proto66["m_srcTableName"] = "Eoc_guestquestion";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "customer-age",
	"m_strTable" => "Eoc_guestquestion",
	"m_srcTableName" => "Eoc_guestquestion"
));

$proto68["m_sql"] = "`customer-age`";
$proto68["m_srcTableName"] = "Eoc_guestquestion";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "customer-address",
	"m_strTable" => "Eoc_guestquestion",
	"m_srcTableName" => "Eoc_guestquestion"
));

$proto70["m_sql"] = "`customer-address`";
$proto70["m_srcTableName"] = "Eoc_guestquestion";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "mail-or-tel-text",
	"m_strTable" => "Eoc_guestquestion",
	"m_srcTableName" => "Eoc_guestquestion"
));

$proto72["m_sql"] = "`mail-or-tel-text`";
$proto72["m_srcTableName"] = "Eoc_guestquestion";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "domain",
	"m_strTable" => "Eoc_guestquestion",
	"m_srcTableName" => "Eoc_guestquestion"
));

$proto74["m_sql"] = "`domain`";
$proto74["m_srcTableName"] = "Eoc_guestquestion";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "device",
	"m_strTable" => "Eoc_guestquestion",
	"m_srcTableName" => "Eoc_guestquestion"
));

$proto76["m_sql"] = "device";
$proto76["m_srcTableName"] = "Eoc_guestquestion";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "voice_sub_id",
	"m_strTable" => "Eoc_guestquestion",
	"m_srcTableName" => "Eoc_guestquestion"
));

$proto78["m_sql"] = "voice_sub_id";
$proto78["m_srcTableName"] = "Eoc_guestquestion";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "Eoc_guestquestion",
	"m_srcTableName" => "Eoc_guestquestion"
));

$proto80["m_sql"] = "updated_at";
$proto80["m_srcTableName"] = "Eoc_guestquestion";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "ecc_id",
	"m_strTable" => "Eoc_guestquestion",
	"m_srcTableName" => "Eoc_guestquestion"
));

$proto82["m_sql"] = "ecc_id";
$proto82["m_srcTableName"] = "Eoc_guestquestion";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "Eoc_guestquestion",
	"m_srcTableName" => "Eoc_guestquestion"
));

$proto84["m_sql"] = "status";
$proto84["m_srcTableName"] = "Eoc_guestquestion";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto86=array();
$proto86["m_link"] = "SQLL_MAIN";
			$proto87=array();
$proto87["m_strName"] = "Eoc_guestquestion";
$proto87["m_srcTableName"] = "Eoc_guestquestion";
$proto87["m_columns"] = array();
$proto87["m_columns"][] = "id";
$proto87["m_columns"][] = "site-reflect";
$proto87["m_columns"][] = "timestamp";
$proto87["m_columns"][] = "service-name";
$proto87["m_columns"][] = "service-name-text";
$proto87["m_columns"][] = "service-story";
$proto87["m_columns"][] = "service-story-text";
$proto87["m_columns"][] = "service-satisfied";
$proto87["m_columns"][] = "sold-this-time";
$proto87["m_columns"][] = "cancel-reason";
$proto87["m_columns"][] = "cancel-reason-text";
$proto87["m_columns"][] = "other-reason-text";
$proto87["m_columns"][] = "how-much-cheap";
$proto87["m_columns"][] = "how-much-cheap-text";
$proto87["m_columns"][] = "dissatisfied-reason-text";
$proto87["m_columns"][] = "service-speed";
$proto87["m_columns"][] = "service-speed-text";
$proto87["m_columns"][] = "service-description";
$proto87["m_columns"][] = "service-description-text";
$proto87["m_columns"][] = "site-level";
$proto87["m_columns"][] = "site-level-text";
$proto87["m_columns"][] = "choice-reason-text";
$proto87["m_columns"][] = "search-keyword";
$proto87["m_columns"][] = "search-keyword-text";
$proto87["m_columns"][] = "search-engine";
$proto87["m_columns"][] = "search-engine-text";
$proto87["m_columns"][] = "search-medium";
$proto87["m_columns"][] = "search-medium-text";
$proto87["m_columns"][] = "freely-write-text";
$proto87["m_columns"][] = "a-word-text";
$proto87["m_columns"][] = "customer-sex";
$proto87["m_columns"][] = "customer-age";
$proto87["m_columns"][] = "customer-address";
$proto87["m_columns"][] = "mail-or-tel-text";
$proto87["m_columns"][] = "domain";
$proto87["m_columns"][] = "device";
$proto87["m_columns"][] = "voice_sub_id";
$proto87["m_columns"][] = "updated_at";
$proto87["m_columns"][] = "ecc_id";
$proto87["m_columns"][] = "status";
$proto87["m_columns"][] = "comment_agree";
$obj = new SQLTable($proto87);

$proto86["m_table"] = $obj;
$proto86["m_sql"] = "Eoc_guestquestion";
$proto86["m_alias"] = "";
$proto86["m_srcTableName"] = "Eoc_guestquestion";
$proto88=array();
$proto88["m_sql"] = "";
$proto88["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto88["m_column"]=$obj;
$proto88["m_contained"] = array();
$proto88["m_strCase"] = "";
$proto88["m_havingmode"] = false;
$proto88["m_inBrackets"] = false;
$proto88["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto88);

$proto86["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto86);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto90=array();
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "Eoc_guestquestion",
	"m_srcTableName" => "Eoc_guestquestion"
));

$proto90["m_column"]=$obj;
$proto90["m_bAsc"] = 0;
$proto90["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto90);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Eoc_guestquestion";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Eoc_guestquestion = createSqlQuery_Eoc_guestquestion();


	
		;

																																								

$tdataEoc_guestquestion[".sqlquery"] = $queryData_Eoc_guestquestion;

include_once(getabspath("include/Eoc_guestquestion_events.php"));
$tableEvents["Eoc_guestquestion"] = new eventclass_Eoc_guestquestion;
$tdataEoc_guestquestion[".hasEvents"] = true;

?>