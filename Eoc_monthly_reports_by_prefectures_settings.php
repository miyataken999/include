<?php
require_once(getabspath("classes/cipherer.php"));




$tdataEoc_monthly_reports_by_prefectures = array();
	$tdataEoc_monthly_reports_by_prefectures[".truncateText"] = true;
	$tdataEoc_monthly_reports_by_prefectures[".NumberOfChars"] = 80;
	$tdataEoc_monthly_reports_by_prefectures[".ShortName"] = "Eoc_monthly_reports_by_prefectures";
	$tdataEoc_monthly_reports_by_prefectures[".OwnerID"] = "";
	$tdataEoc_monthly_reports_by_prefectures[".OriginalTable"] = "Eoc_monthly_reports_by_prefectures";

//	field labels
$fieldLabelsEoc_monthly_reports_by_prefectures = array();
$fieldToolTipsEoc_monthly_reports_by_prefectures = array();
$pageTitlesEoc_monthly_reports_by_prefectures = array();
$placeHoldersEoc_monthly_reports_by_prefectures = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsEoc_monthly_reports_by_prefectures["Japanese"] = array();
	$fieldToolTipsEoc_monthly_reports_by_prefectures["Japanese"] = array();
	$placeHoldersEoc_monthly_reports_by_prefectures["Japanese"] = array();
	$pageTitlesEoc_monthly_reports_by_prefectures["Japanese"] = array();
	$fieldLabelsEoc_monthly_reports_by_prefectures["Japanese"]["id"] = "Id";
	$fieldToolTipsEoc_monthly_reports_by_prefectures["Japanese"]["id"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures["Japanese"]["id"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures["Japanese"]["EocMonthlyReport_id"] = "EocMonthlyReport Id";
	$fieldToolTipsEoc_monthly_reports_by_prefectures["Japanese"]["EocMonthlyReport_id"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures["Japanese"]["EocMonthlyReport_id"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures["Japanese"]["hokkai_dou"] = "Hokkai-dou";
	$fieldToolTipsEoc_monthly_reports_by_prefectures["Japanese"]["hokkai_dou"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures["Japanese"]["hokkai_dou"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures["Japanese"]["aomori_ken"] = "Aomori-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures["Japanese"]["aomori_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures["Japanese"]["aomori_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures["Japanese"]["iwate_ken"] = "Iwate-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures["Japanese"]["iwate_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures["Japanese"]["iwate_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures["Japanese"]["miyagi_ken"] = "Miyagi-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures["Japanese"]["miyagi_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures["Japanese"]["miyagi_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures["Japanese"]["akita_ken"] = "Akita-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures["Japanese"]["akita_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures["Japanese"]["akita_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures["Japanese"]["yamagata_ken"] = "Yamagata-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures["Japanese"]["yamagata_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures["Japanese"]["yamagata_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures["Japanese"]["fukushima_ken"] = "Fukushima-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures["Japanese"]["fukushima_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures["Japanese"]["fukushima_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures["Japanese"]["ibaraki_ken"] = "Ibaraki-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures["Japanese"]["ibaraki_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures["Japanese"]["ibaraki_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures["Japanese"]["tochigi_ken"] = "Tochigi-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures["Japanese"]["tochigi_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures["Japanese"]["tochigi_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures["Japanese"]["gunma_ken"] = "Gunma-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures["Japanese"]["gunma_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures["Japanese"]["gunma_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures["Japanese"]["saitama_ken"] = "Saitama-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures["Japanese"]["saitama_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures["Japanese"]["saitama_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures["Japanese"]["chiba_ken"] = "Chiba-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures["Japanese"]["chiba_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures["Japanese"]["chiba_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures["Japanese"]["tokyo_ken"] = "Tokyo-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures["Japanese"]["tokyo_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures["Japanese"]["tokyo_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures["Japanese"]["kanagawa_ken"] = "Kanagawa-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures["Japanese"]["kanagawa_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures["Japanese"]["kanagawa_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures["Japanese"]["niigata_ken"] = "Niigata-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures["Japanese"]["niigata_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures["Japanese"]["niigata_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures["Japanese"]["toyama_ken"] = "Toyama-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures["Japanese"]["toyama_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures["Japanese"]["toyama_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures["Japanese"]["ishikawa_ken"] = "Ishikawa-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures["Japanese"]["ishikawa_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures["Japanese"]["ishikawa_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures["Japanese"]["fukui_ken"] = "Fukui-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures["Japanese"]["fukui_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures["Japanese"]["fukui_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures["Japanese"]["yamanashi_ken"] = "Yamanashi-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures["Japanese"]["yamanashi_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures["Japanese"]["yamanashi_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures["Japanese"]["nagano_ken"] = "Nagano-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures["Japanese"]["nagano_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures["Japanese"]["nagano_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures["Japanese"]["gifu_ken"] = "Gifu-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures["Japanese"]["gifu_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures["Japanese"]["gifu_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures["Japanese"]["shizuoka_ken"] = "Shizuoka-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures["Japanese"]["shizuoka_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures["Japanese"]["shizuoka_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures["Japanese"]["aichi_ken"] = "Aichi-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures["Japanese"]["aichi_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures["Japanese"]["aichi_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures["Japanese"]["mie_ken"] = "Mie-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures["Japanese"]["mie_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures["Japanese"]["mie_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures["Japanese"]["shiga_ken"] = "Shiga-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures["Japanese"]["shiga_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures["Japanese"]["shiga_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures["Japanese"]["kyoto_fu"] = "Kyoto-fu";
	$fieldToolTipsEoc_monthly_reports_by_prefectures["Japanese"]["kyoto_fu"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures["Japanese"]["kyoto_fu"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures["Japanese"]["osaka_fu"] = "Osaka-fu";
	$fieldToolTipsEoc_monthly_reports_by_prefectures["Japanese"]["osaka_fu"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures["Japanese"]["osaka_fu"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures["Japanese"]["hyogo_ken"] = "Hyogo-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures["Japanese"]["hyogo_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures["Japanese"]["hyogo_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures["Japanese"]["nara_ken"] = "Nara-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures["Japanese"]["nara_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures["Japanese"]["nara_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures["Japanese"]["wakayama_ken"] = "Wakayama-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures["Japanese"]["wakayama_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures["Japanese"]["wakayama_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures["Japanese"]["tottori_ken"] = "Tottori-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures["Japanese"]["tottori_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures["Japanese"]["tottori_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures["Japanese"]["shimane_ken"] = "Shimane-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures["Japanese"]["shimane_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures["Japanese"]["shimane_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures["Japanese"]["okayama_ken"] = "Okayama-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures["Japanese"]["okayama_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures["Japanese"]["okayama_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures["Japanese"]["hiroshima_ken"] = "Hiroshima-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures["Japanese"]["hiroshima_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures["Japanese"]["hiroshima_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures["Japanese"]["yamaguchi_ken"] = "Yamaguchi-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures["Japanese"]["yamaguchi_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures["Japanese"]["yamaguchi_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures["Japanese"]["tokushima_ken"] = "Tokushima-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures["Japanese"]["tokushima_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures["Japanese"]["tokushima_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures["Japanese"]["kagawa_ken"] = "Kagawa-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures["Japanese"]["kagawa_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures["Japanese"]["kagawa_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures["Japanese"]["ehime_ken"] = "Ehime-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures["Japanese"]["ehime_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures["Japanese"]["ehime_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures["Japanese"]["kochi_ken"] = "Kochi-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures["Japanese"]["kochi_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures["Japanese"]["kochi_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures["Japanese"]["fukuoka_ken"] = "Fukuoka-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures["Japanese"]["fukuoka_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures["Japanese"]["fukuoka_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures["Japanese"]["saga_ken"] = "Saga-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures["Japanese"]["saga_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures["Japanese"]["saga_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures["Japanese"]["nagasaki_ken"] = "Nagasaki-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures["Japanese"]["nagasaki_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures["Japanese"]["nagasaki_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures["Japanese"]["kumamoto_ken"] = "Kumamoto-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures["Japanese"]["kumamoto_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures["Japanese"]["kumamoto_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures["Japanese"]["oita_ken"] = "Oita-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures["Japanese"]["oita_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures["Japanese"]["oita_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures["Japanese"]["miyazaki_ken"] = "Miyazaki-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures["Japanese"]["miyazaki_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures["Japanese"]["miyazaki_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures["Japanese"]["kagoshima_ken"] = "Kagoshima-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures["Japanese"]["kagoshima_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures["Japanese"]["kagoshima_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures["Japanese"]["okinawa_ken"] = "Okinawa-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures["Japanese"]["okinawa_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures["Japanese"]["okinawa_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures["Japanese"]["created_at"] = "Created At";
	$fieldToolTipsEoc_monthly_reports_by_prefectures["Japanese"]["created_at"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures["Japanese"]["created_at"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures["Japanese"]["updated_at"] = "Updated At";
	$fieldToolTipsEoc_monthly_reports_by_prefectures["Japanese"]["updated_at"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures["Japanese"]["updated_at"] = "";
	if (count($fieldToolTipsEoc_monthly_reports_by_prefectures["Japanese"]))
		$tdataEoc_monthly_reports_by_prefectures[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsEoc_monthly_reports_by_prefectures[""] = array();
	$fieldToolTipsEoc_monthly_reports_by_prefectures[""] = array();
	$placeHoldersEoc_monthly_reports_by_prefectures[""] = array();
	$pageTitlesEoc_monthly_reports_by_prefectures[""] = array();
	$fieldLabelsEoc_monthly_reports_by_prefectures[""]["id"] = "Id";
	$fieldToolTipsEoc_monthly_reports_by_prefectures[""]["id"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures[""]["id"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures[""]["EocMonthlyReport_id"] = "EocMonthlyReport Id";
	$fieldToolTipsEoc_monthly_reports_by_prefectures[""]["EocMonthlyReport_id"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures[""]["EocMonthlyReport_id"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures[""]["hokkai_dou"] = "Hokkai-dou";
	$fieldToolTipsEoc_monthly_reports_by_prefectures[""]["hokkai_dou"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures[""]["hokkai_dou"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures[""]["aomori_ken"] = "Aomori-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures[""]["aomori_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures[""]["aomori_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures[""]["iwate_ken"] = "Iwate-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures[""]["iwate_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures[""]["iwate_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures[""]["miyagi_ken"] = "Miyagi-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures[""]["miyagi_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures[""]["miyagi_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures[""]["akita_ken"] = "Akita-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures[""]["akita_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures[""]["akita_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures[""]["yamagata_ken"] = "Yamagata-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures[""]["yamagata_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures[""]["yamagata_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures[""]["fukushima_ken"] = "Fukushima-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures[""]["fukushima_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures[""]["fukushima_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures[""]["ibaraki_ken"] = "Ibaraki-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures[""]["ibaraki_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures[""]["ibaraki_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures[""]["tochigi_ken"] = "Tochigi-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures[""]["tochigi_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures[""]["tochigi_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures[""]["gunma_ken"] = "Gunma-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures[""]["gunma_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures[""]["gunma_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures[""]["saitama_ken"] = "Saitama-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures[""]["saitama_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures[""]["saitama_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures[""]["chiba_ken"] = "Chiba-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures[""]["chiba_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures[""]["chiba_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures[""]["tokyo_ken"] = "Tokyo-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures[""]["tokyo_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures[""]["tokyo_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures[""]["kanagawa_ken"] = "Kanagawa-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures[""]["kanagawa_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures[""]["kanagawa_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures[""]["niigata_ken"] = "Niigata-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures[""]["niigata_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures[""]["niigata_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures[""]["toyama_ken"] = "Toyama-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures[""]["toyama_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures[""]["toyama_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures[""]["ishikawa_ken"] = "Ishikawa-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures[""]["ishikawa_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures[""]["ishikawa_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures[""]["fukui_ken"] = "Fukui-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures[""]["fukui_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures[""]["fukui_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures[""]["yamanashi_ken"] = "Yamanashi-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures[""]["yamanashi_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures[""]["yamanashi_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures[""]["nagano_ken"] = "Nagano-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures[""]["nagano_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures[""]["nagano_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures[""]["gifu_ken"] = "Gifu-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures[""]["gifu_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures[""]["gifu_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures[""]["shizuoka_ken"] = "Shizuoka-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures[""]["shizuoka_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures[""]["shizuoka_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures[""]["aichi_ken"] = "Aichi-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures[""]["aichi_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures[""]["aichi_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures[""]["mie_ken"] = "Mie-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures[""]["mie_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures[""]["mie_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures[""]["shiga_ken"] = "Shiga-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures[""]["shiga_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures[""]["shiga_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures[""]["kyoto_fu"] = "Kyoto-fu";
	$fieldToolTipsEoc_monthly_reports_by_prefectures[""]["kyoto_fu"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures[""]["kyoto_fu"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures[""]["osaka_fu"] = "Osaka-fu";
	$fieldToolTipsEoc_monthly_reports_by_prefectures[""]["osaka_fu"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures[""]["osaka_fu"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures[""]["hyogo_ken"] = "Hyogo-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures[""]["hyogo_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures[""]["hyogo_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures[""]["nara_ken"] = "Nara-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures[""]["nara_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures[""]["nara_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures[""]["wakayama_ken"] = "Wakayama-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures[""]["wakayama_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures[""]["wakayama_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures[""]["tottori_ken"] = "Tottori-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures[""]["tottori_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures[""]["tottori_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures[""]["shimane_ken"] = "Shimane-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures[""]["shimane_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures[""]["shimane_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures[""]["okayama_ken"] = "Okayama-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures[""]["okayama_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures[""]["okayama_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures[""]["hiroshima_ken"] = "Hiroshima-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures[""]["hiroshima_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures[""]["hiroshima_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures[""]["yamaguchi_ken"] = "Yamaguchi-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures[""]["yamaguchi_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures[""]["yamaguchi_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures[""]["tokushima_ken"] = "Tokushima-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures[""]["tokushima_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures[""]["tokushima_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures[""]["kagawa_ken"] = "Kagawa-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures[""]["kagawa_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures[""]["kagawa_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures[""]["ehime_ken"] = "Ehime-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures[""]["ehime_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures[""]["ehime_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures[""]["kochi_ken"] = "Kochi-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures[""]["kochi_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures[""]["kochi_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures[""]["fukuoka_ken"] = "Fukuoka-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures[""]["fukuoka_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures[""]["fukuoka_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures[""]["saga_ken"] = "Saga-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures[""]["saga_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures[""]["saga_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures[""]["nagasaki_ken"] = "Nagasaki-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures[""]["nagasaki_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures[""]["nagasaki_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures[""]["kumamoto_ken"] = "Kumamoto-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures[""]["kumamoto_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures[""]["kumamoto_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures[""]["oita_ken"] = "Oita-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures[""]["oita_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures[""]["oita_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures[""]["miyazaki_ken"] = "Miyazaki-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures[""]["miyazaki_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures[""]["miyazaki_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures[""]["kagoshima_ken"] = "Kagoshima-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures[""]["kagoshima_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures[""]["kagoshima_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures[""]["okinawa_ken"] = "Okinawa-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures[""]["okinawa_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures[""]["okinawa_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures[""]["created_at"] = "Created At";
	$fieldToolTipsEoc_monthly_reports_by_prefectures[""]["created_at"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures[""]["created_at"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures[""]["updated_at"] = "Updated At";
	$fieldToolTipsEoc_monthly_reports_by_prefectures[""]["updated_at"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures[""]["updated_at"] = "";
	if (count($fieldToolTipsEoc_monthly_reports_by_prefectures[""]))
		$tdataEoc_monthly_reports_by_prefectures[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsEoc_monthly_reports_by_prefectures["English"] = array();
	$fieldToolTipsEoc_monthly_reports_by_prefectures["English"] = array();
	$placeHoldersEoc_monthly_reports_by_prefectures["English"] = array();
	$pageTitlesEoc_monthly_reports_by_prefectures["English"] = array();
	$fieldLabelsEoc_monthly_reports_by_prefectures["English"]["id"] = "Id";
	$fieldToolTipsEoc_monthly_reports_by_prefectures["English"]["id"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures["English"]["id"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures["English"]["EocMonthlyReport_id"] = "EocMonthlyReport Id";
	$fieldToolTipsEoc_monthly_reports_by_prefectures["English"]["EocMonthlyReport_id"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures["English"]["EocMonthlyReport_id"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures["English"]["hokkai_dou"] = "Hokkai-dou";
	$fieldToolTipsEoc_monthly_reports_by_prefectures["English"]["hokkai_dou"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures["English"]["hokkai_dou"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures["English"]["aomori_ken"] = "Aomori-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures["English"]["aomori_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures["English"]["aomori_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures["English"]["iwate_ken"] = "Iwate-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures["English"]["iwate_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures["English"]["iwate_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures["English"]["miyagi_ken"] = "Miyagi-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures["English"]["miyagi_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures["English"]["miyagi_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures["English"]["akita_ken"] = "Akita-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures["English"]["akita_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures["English"]["akita_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures["English"]["yamagata_ken"] = "Yamagata-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures["English"]["yamagata_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures["English"]["yamagata_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures["English"]["fukushima_ken"] = "Fukushima-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures["English"]["fukushima_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures["English"]["fukushima_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures["English"]["ibaraki_ken"] = "Ibaraki-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures["English"]["ibaraki_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures["English"]["ibaraki_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures["English"]["tochigi_ken"] = "Tochigi-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures["English"]["tochigi_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures["English"]["tochigi_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures["English"]["gunma_ken"] = "Gunma-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures["English"]["gunma_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures["English"]["gunma_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures["English"]["saitama_ken"] = "Saitama-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures["English"]["saitama_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures["English"]["saitama_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures["English"]["chiba_ken"] = "Chiba-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures["English"]["chiba_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures["English"]["chiba_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures["English"]["tokyo_ken"] = "Tokyo-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures["English"]["tokyo_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures["English"]["tokyo_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures["English"]["kanagawa_ken"] = "Kanagawa-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures["English"]["kanagawa_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures["English"]["kanagawa_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures["English"]["niigata_ken"] = "Niigata-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures["English"]["niigata_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures["English"]["niigata_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures["English"]["toyama_ken"] = "Toyama-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures["English"]["toyama_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures["English"]["toyama_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures["English"]["ishikawa_ken"] = "Ishikawa-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures["English"]["ishikawa_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures["English"]["ishikawa_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures["English"]["fukui_ken"] = "Fukui-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures["English"]["fukui_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures["English"]["fukui_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures["English"]["yamanashi_ken"] = "Yamanashi-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures["English"]["yamanashi_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures["English"]["yamanashi_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures["English"]["nagano_ken"] = "Nagano-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures["English"]["nagano_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures["English"]["nagano_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures["English"]["gifu_ken"] = "Gifu-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures["English"]["gifu_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures["English"]["gifu_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures["English"]["shizuoka_ken"] = "Shizuoka-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures["English"]["shizuoka_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures["English"]["shizuoka_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures["English"]["aichi_ken"] = "Aichi-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures["English"]["aichi_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures["English"]["aichi_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures["English"]["mie_ken"] = "Mie-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures["English"]["mie_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures["English"]["mie_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures["English"]["shiga_ken"] = "Shiga-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures["English"]["shiga_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures["English"]["shiga_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures["English"]["kyoto_fu"] = "Kyoto-fu";
	$fieldToolTipsEoc_monthly_reports_by_prefectures["English"]["kyoto_fu"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures["English"]["kyoto_fu"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures["English"]["osaka_fu"] = "Osaka-fu";
	$fieldToolTipsEoc_monthly_reports_by_prefectures["English"]["osaka_fu"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures["English"]["osaka_fu"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures["English"]["hyogo_ken"] = "Hyogo-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures["English"]["hyogo_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures["English"]["hyogo_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures["English"]["nara_ken"] = "Nara-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures["English"]["nara_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures["English"]["nara_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures["English"]["wakayama_ken"] = "Wakayama-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures["English"]["wakayama_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures["English"]["wakayama_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures["English"]["tottori_ken"] = "Tottori-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures["English"]["tottori_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures["English"]["tottori_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures["English"]["shimane_ken"] = "Shimane-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures["English"]["shimane_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures["English"]["shimane_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures["English"]["okayama_ken"] = "Okayama-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures["English"]["okayama_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures["English"]["okayama_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures["English"]["hiroshima_ken"] = "Hiroshima-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures["English"]["hiroshima_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures["English"]["hiroshima_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures["English"]["yamaguchi_ken"] = "Yamaguchi-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures["English"]["yamaguchi_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures["English"]["yamaguchi_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures["English"]["tokushima_ken"] = "Tokushima-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures["English"]["tokushima_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures["English"]["tokushima_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures["English"]["kagawa_ken"] = "Kagawa-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures["English"]["kagawa_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures["English"]["kagawa_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures["English"]["ehime_ken"] = "Ehime-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures["English"]["ehime_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures["English"]["ehime_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures["English"]["kochi_ken"] = "Kochi-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures["English"]["kochi_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures["English"]["kochi_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures["English"]["fukuoka_ken"] = "Fukuoka-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures["English"]["fukuoka_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures["English"]["fukuoka_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures["English"]["saga_ken"] = "Saga-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures["English"]["saga_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures["English"]["saga_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures["English"]["nagasaki_ken"] = "Nagasaki-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures["English"]["nagasaki_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures["English"]["nagasaki_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures["English"]["kumamoto_ken"] = "Kumamoto-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures["English"]["kumamoto_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures["English"]["kumamoto_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures["English"]["oita_ken"] = "Oita-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures["English"]["oita_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures["English"]["oita_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures["English"]["miyazaki_ken"] = "Miyazaki-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures["English"]["miyazaki_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures["English"]["miyazaki_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures["English"]["kagoshima_ken"] = "Kagoshima-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures["English"]["kagoshima_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures["English"]["kagoshima_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures["English"]["okinawa_ken"] = "Okinawa-ken";
	$fieldToolTipsEoc_monthly_reports_by_prefectures["English"]["okinawa_ken"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures["English"]["okinawa_ken"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures["English"]["created_at"] = "Created At";
	$fieldToolTipsEoc_monthly_reports_by_prefectures["English"]["created_at"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures["English"]["created_at"] = "";
	$fieldLabelsEoc_monthly_reports_by_prefectures["English"]["updated_at"] = "Updated At";
	$fieldToolTipsEoc_monthly_reports_by_prefectures["English"]["updated_at"] = "";
	$placeHoldersEoc_monthly_reports_by_prefectures["English"]["updated_at"] = "";
	if (count($fieldToolTipsEoc_monthly_reports_by_prefectures["English"]))
		$tdataEoc_monthly_reports_by_prefectures[".isUseToolTips"] = true;
}


	$tdataEoc_monthly_reports_by_prefectures[".NCSearch"] = true;



$tdataEoc_monthly_reports_by_prefectures[".shortTableName"] = "Eoc_monthly_reports_by_prefectures";
$tdataEoc_monthly_reports_by_prefectures[".nSecOptions"] = 0;
$tdataEoc_monthly_reports_by_prefectures[".recsPerRowPrint"] = 1;
$tdataEoc_monthly_reports_by_prefectures[".mainTableOwnerID"] = "";
$tdataEoc_monthly_reports_by_prefectures[".moveNext"] = 1;
$tdataEoc_monthly_reports_by_prefectures[".entityType"] = 0;

$tdataEoc_monthly_reports_by_prefectures[".strOriginalTableName"] = "Eoc_monthly_reports_by_prefectures";

	



$tdataEoc_monthly_reports_by_prefectures[".showAddInPopup"] = false;

$tdataEoc_monthly_reports_by_prefectures[".showEditInPopup"] = false;

$tdataEoc_monthly_reports_by_prefectures[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataEoc_monthly_reports_by_prefectures[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataEoc_monthly_reports_by_prefectures[".fieldsForRegister"] = array();

$tdataEoc_monthly_reports_by_prefectures[".listAjax"] = false;

	$tdataEoc_monthly_reports_by_prefectures[".audit"] = false;

	$tdataEoc_monthly_reports_by_prefectures[".locking"] = false;

$tdataEoc_monthly_reports_by_prefectures[".edit"] = true;
$tdataEoc_monthly_reports_by_prefectures[".afterEditAction"] = 1;
$tdataEoc_monthly_reports_by_prefectures[".closePopupAfterEdit"] = 1;
$tdataEoc_monthly_reports_by_prefectures[".afterEditActionDetTable"] = "";

$tdataEoc_monthly_reports_by_prefectures[".add"] = true;
$tdataEoc_monthly_reports_by_prefectures[".afterAddAction"] = 1;
$tdataEoc_monthly_reports_by_prefectures[".closePopupAfterAdd"] = 1;
$tdataEoc_monthly_reports_by_prefectures[".afterAddActionDetTable"] = "";

$tdataEoc_monthly_reports_by_prefectures[".list"] = true;



$tdataEoc_monthly_reports_by_prefectures[".reorderRecordsByHeader"] = true;



$tdataEoc_monthly_reports_by_prefectures[".view"] = true;

$tdataEoc_monthly_reports_by_prefectures[".import"] = true;

$tdataEoc_monthly_reports_by_prefectures[".exportTo"] = true;

$tdataEoc_monthly_reports_by_prefectures[".printFriendly"] = true;

$tdataEoc_monthly_reports_by_prefectures[".delete"] = true;

$tdataEoc_monthly_reports_by_prefectures[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataEoc_monthly_reports_by_prefectures[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataEoc_monthly_reports_by_prefectures[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataEoc_monthly_reports_by_prefectures[".searchSaving"] = false;
//

$tdataEoc_monthly_reports_by_prefectures[".showSearchPanel"] = true;
		$tdataEoc_monthly_reports_by_prefectures[".flexibleSearch"] = true;

$tdataEoc_monthly_reports_by_prefectures[".isUseAjaxSuggest"] = true;

$tdataEoc_monthly_reports_by_prefectures[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdataEoc_monthly_reports_by_prefectures[".ajaxCodeSnippetAdded"] = false;

$tdataEoc_monthly_reports_by_prefectures[".buttonsAdded"] = false;

$tdataEoc_monthly_reports_by_prefectures[".addPageEvents"] = false;

// use timepicker for search panel
$tdataEoc_monthly_reports_by_prefectures[".isUseTimeForSearch"] = false;





$tdataEoc_monthly_reports_by_prefectures[".allSearchFields"] = array();
$tdataEoc_monthly_reports_by_prefectures[".filterFields"] = array();
$tdataEoc_monthly_reports_by_prefectures[".requiredSearchFields"] = array();

$tdataEoc_monthly_reports_by_prefectures[".allSearchFields"][] = "id";
	$tdataEoc_monthly_reports_by_prefectures[".allSearchFields"][] = "EocMonthlyReport_id";
	$tdataEoc_monthly_reports_by_prefectures[".allSearchFields"][] = "hokkai-dou";
	$tdataEoc_monthly_reports_by_prefectures[".allSearchFields"][] = "aomori-ken";
	$tdataEoc_monthly_reports_by_prefectures[".allSearchFields"][] = "iwate-ken";
	$tdataEoc_monthly_reports_by_prefectures[".allSearchFields"][] = "miyagi-ken";
	$tdataEoc_monthly_reports_by_prefectures[".allSearchFields"][] = "akita-ken";
	$tdataEoc_monthly_reports_by_prefectures[".allSearchFields"][] = "yamagata-ken";
	$tdataEoc_monthly_reports_by_prefectures[".allSearchFields"][] = "fukushima-ken";
	$tdataEoc_monthly_reports_by_prefectures[".allSearchFields"][] = "ibaraki-ken";
	$tdataEoc_monthly_reports_by_prefectures[".allSearchFields"][] = "tochigi-ken";
	$tdataEoc_monthly_reports_by_prefectures[".allSearchFields"][] = "gunma-ken";
	$tdataEoc_monthly_reports_by_prefectures[".allSearchFields"][] = "saitama-ken";
	$tdataEoc_monthly_reports_by_prefectures[".allSearchFields"][] = "chiba-ken";
	$tdataEoc_monthly_reports_by_prefectures[".allSearchFields"][] = "tokyo-ken";
	$tdataEoc_monthly_reports_by_prefectures[".allSearchFields"][] = "kanagawa-ken";
	$tdataEoc_monthly_reports_by_prefectures[".allSearchFields"][] = "niigata-ken";
	$tdataEoc_monthly_reports_by_prefectures[".allSearchFields"][] = "toyama-ken";
	$tdataEoc_monthly_reports_by_prefectures[".allSearchFields"][] = "ishikawa-ken";
	$tdataEoc_monthly_reports_by_prefectures[".allSearchFields"][] = "fukui-ken";
	$tdataEoc_monthly_reports_by_prefectures[".allSearchFields"][] = "yamanashi-ken";
	$tdataEoc_monthly_reports_by_prefectures[".allSearchFields"][] = "nagano-ken";
	$tdataEoc_monthly_reports_by_prefectures[".allSearchFields"][] = "gifu-ken";
	$tdataEoc_monthly_reports_by_prefectures[".allSearchFields"][] = "shizuoka-ken";
	$tdataEoc_monthly_reports_by_prefectures[".allSearchFields"][] = "aichi-ken";
	$tdataEoc_monthly_reports_by_prefectures[".allSearchFields"][] = "mie-ken";
	$tdataEoc_monthly_reports_by_prefectures[".allSearchFields"][] = "shiga-ken";
	$tdataEoc_monthly_reports_by_prefectures[".allSearchFields"][] = "kyoto-fu";
	$tdataEoc_monthly_reports_by_prefectures[".allSearchFields"][] = "osaka-fu";
	$tdataEoc_monthly_reports_by_prefectures[".allSearchFields"][] = "hyogo-ken";
	$tdataEoc_monthly_reports_by_prefectures[".allSearchFields"][] = "nara-ken";
	$tdataEoc_monthly_reports_by_prefectures[".allSearchFields"][] = "wakayama-ken";
	$tdataEoc_monthly_reports_by_prefectures[".allSearchFields"][] = "tottori-ken";
	$tdataEoc_monthly_reports_by_prefectures[".allSearchFields"][] = "shimane-ken";
	$tdataEoc_monthly_reports_by_prefectures[".allSearchFields"][] = "okayama-ken";
	$tdataEoc_monthly_reports_by_prefectures[".allSearchFields"][] = "hiroshima-ken";
	$tdataEoc_monthly_reports_by_prefectures[".allSearchFields"][] = "yamaguchi-ken";
	$tdataEoc_monthly_reports_by_prefectures[".allSearchFields"][] = "tokushima-ken";
	$tdataEoc_monthly_reports_by_prefectures[".allSearchFields"][] = "kagawa-ken";
	$tdataEoc_monthly_reports_by_prefectures[".allSearchFields"][] = "ehime-ken";
	$tdataEoc_monthly_reports_by_prefectures[".allSearchFields"][] = "kochi-ken";
	$tdataEoc_monthly_reports_by_prefectures[".allSearchFields"][] = "fukuoka-ken";
	$tdataEoc_monthly_reports_by_prefectures[".allSearchFields"][] = "saga-ken";
	$tdataEoc_monthly_reports_by_prefectures[".allSearchFields"][] = "nagasaki-ken";
	$tdataEoc_monthly_reports_by_prefectures[".allSearchFields"][] = "kumamoto-ken";
	$tdataEoc_monthly_reports_by_prefectures[".allSearchFields"][] = "oita-ken";
	$tdataEoc_monthly_reports_by_prefectures[".allSearchFields"][] = "miyazaki-ken";
	$tdataEoc_monthly_reports_by_prefectures[".allSearchFields"][] = "kagoshima-ken";
	$tdataEoc_monthly_reports_by_prefectures[".allSearchFields"][] = "okinawa-ken";
	$tdataEoc_monthly_reports_by_prefectures[".allSearchFields"][] = "created_at";
	$tdataEoc_monthly_reports_by_prefectures[".allSearchFields"][] = "updated_at";
	

$tdataEoc_monthly_reports_by_prefectures[".googleLikeFields"] = array();
$tdataEoc_monthly_reports_by_prefectures[".googleLikeFields"][] = "id";
$tdataEoc_monthly_reports_by_prefectures[".googleLikeFields"][] = "EocMonthlyReport_id";
$tdataEoc_monthly_reports_by_prefectures[".googleLikeFields"][] = "hokkai-dou";
$tdataEoc_monthly_reports_by_prefectures[".googleLikeFields"][] = "aomori-ken";
$tdataEoc_monthly_reports_by_prefectures[".googleLikeFields"][] = "iwate-ken";
$tdataEoc_monthly_reports_by_prefectures[".googleLikeFields"][] = "miyagi-ken";
$tdataEoc_monthly_reports_by_prefectures[".googleLikeFields"][] = "akita-ken";
$tdataEoc_monthly_reports_by_prefectures[".googleLikeFields"][] = "yamagata-ken";
$tdataEoc_monthly_reports_by_prefectures[".googleLikeFields"][] = "fukushima-ken";
$tdataEoc_monthly_reports_by_prefectures[".googleLikeFields"][] = "ibaraki-ken";
$tdataEoc_monthly_reports_by_prefectures[".googleLikeFields"][] = "tochigi-ken";
$tdataEoc_monthly_reports_by_prefectures[".googleLikeFields"][] = "gunma-ken";
$tdataEoc_monthly_reports_by_prefectures[".googleLikeFields"][] = "saitama-ken";
$tdataEoc_monthly_reports_by_prefectures[".googleLikeFields"][] = "chiba-ken";
$tdataEoc_monthly_reports_by_prefectures[".googleLikeFields"][] = "tokyo-ken";
$tdataEoc_monthly_reports_by_prefectures[".googleLikeFields"][] = "kanagawa-ken";
$tdataEoc_monthly_reports_by_prefectures[".googleLikeFields"][] = "niigata-ken";
$tdataEoc_monthly_reports_by_prefectures[".googleLikeFields"][] = "toyama-ken";
$tdataEoc_monthly_reports_by_prefectures[".googleLikeFields"][] = "ishikawa-ken";
$tdataEoc_monthly_reports_by_prefectures[".googleLikeFields"][] = "fukui-ken";
$tdataEoc_monthly_reports_by_prefectures[".googleLikeFields"][] = "yamanashi-ken";
$tdataEoc_monthly_reports_by_prefectures[".googleLikeFields"][] = "nagano-ken";
$tdataEoc_monthly_reports_by_prefectures[".googleLikeFields"][] = "gifu-ken";
$tdataEoc_monthly_reports_by_prefectures[".googleLikeFields"][] = "shizuoka-ken";
$tdataEoc_monthly_reports_by_prefectures[".googleLikeFields"][] = "aichi-ken";
$tdataEoc_monthly_reports_by_prefectures[".googleLikeFields"][] = "mie-ken";
$tdataEoc_monthly_reports_by_prefectures[".googleLikeFields"][] = "shiga-ken";
$tdataEoc_monthly_reports_by_prefectures[".googleLikeFields"][] = "kyoto-fu";
$tdataEoc_monthly_reports_by_prefectures[".googleLikeFields"][] = "osaka-fu";
$tdataEoc_monthly_reports_by_prefectures[".googleLikeFields"][] = "hyogo-ken";
$tdataEoc_monthly_reports_by_prefectures[".googleLikeFields"][] = "nara-ken";
$tdataEoc_monthly_reports_by_prefectures[".googleLikeFields"][] = "wakayama-ken";
$tdataEoc_monthly_reports_by_prefectures[".googleLikeFields"][] = "tottori-ken";
$tdataEoc_monthly_reports_by_prefectures[".googleLikeFields"][] = "shimane-ken";
$tdataEoc_monthly_reports_by_prefectures[".googleLikeFields"][] = "okayama-ken";
$tdataEoc_monthly_reports_by_prefectures[".googleLikeFields"][] = "hiroshima-ken";
$tdataEoc_monthly_reports_by_prefectures[".googleLikeFields"][] = "yamaguchi-ken";
$tdataEoc_monthly_reports_by_prefectures[".googleLikeFields"][] = "tokushima-ken";
$tdataEoc_monthly_reports_by_prefectures[".googleLikeFields"][] = "kagawa-ken";
$tdataEoc_monthly_reports_by_prefectures[".googleLikeFields"][] = "ehime-ken";
$tdataEoc_monthly_reports_by_prefectures[".googleLikeFields"][] = "kochi-ken";
$tdataEoc_monthly_reports_by_prefectures[".googleLikeFields"][] = "fukuoka-ken";
$tdataEoc_monthly_reports_by_prefectures[".googleLikeFields"][] = "saga-ken";
$tdataEoc_monthly_reports_by_prefectures[".googleLikeFields"][] = "nagasaki-ken";
$tdataEoc_monthly_reports_by_prefectures[".googleLikeFields"][] = "kumamoto-ken";
$tdataEoc_monthly_reports_by_prefectures[".googleLikeFields"][] = "oita-ken";
$tdataEoc_monthly_reports_by_prefectures[".googleLikeFields"][] = "miyazaki-ken";
$tdataEoc_monthly_reports_by_prefectures[".googleLikeFields"][] = "kagoshima-ken";
$tdataEoc_monthly_reports_by_prefectures[".googleLikeFields"][] = "okinawa-ken";
$tdataEoc_monthly_reports_by_prefectures[".googleLikeFields"][] = "created_at";
$tdataEoc_monthly_reports_by_prefectures[".googleLikeFields"][] = "updated_at";


$tdataEoc_monthly_reports_by_prefectures[".advSearchFields"] = array();
$tdataEoc_monthly_reports_by_prefectures[".advSearchFields"][] = "id";
$tdataEoc_monthly_reports_by_prefectures[".advSearchFields"][] = "EocMonthlyReport_id";
$tdataEoc_monthly_reports_by_prefectures[".advSearchFields"][] = "hokkai-dou";
$tdataEoc_monthly_reports_by_prefectures[".advSearchFields"][] = "aomori-ken";
$tdataEoc_monthly_reports_by_prefectures[".advSearchFields"][] = "iwate-ken";
$tdataEoc_monthly_reports_by_prefectures[".advSearchFields"][] = "miyagi-ken";
$tdataEoc_monthly_reports_by_prefectures[".advSearchFields"][] = "akita-ken";
$tdataEoc_monthly_reports_by_prefectures[".advSearchFields"][] = "yamagata-ken";
$tdataEoc_monthly_reports_by_prefectures[".advSearchFields"][] = "fukushima-ken";
$tdataEoc_monthly_reports_by_prefectures[".advSearchFields"][] = "ibaraki-ken";
$tdataEoc_monthly_reports_by_prefectures[".advSearchFields"][] = "tochigi-ken";
$tdataEoc_monthly_reports_by_prefectures[".advSearchFields"][] = "gunma-ken";
$tdataEoc_monthly_reports_by_prefectures[".advSearchFields"][] = "saitama-ken";
$tdataEoc_monthly_reports_by_prefectures[".advSearchFields"][] = "chiba-ken";
$tdataEoc_monthly_reports_by_prefectures[".advSearchFields"][] = "tokyo-ken";
$tdataEoc_monthly_reports_by_prefectures[".advSearchFields"][] = "kanagawa-ken";
$tdataEoc_monthly_reports_by_prefectures[".advSearchFields"][] = "niigata-ken";
$tdataEoc_monthly_reports_by_prefectures[".advSearchFields"][] = "toyama-ken";
$tdataEoc_monthly_reports_by_prefectures[".advSearchFields"][] = "ishikawa-ken";
$tdataEoc_monthly_reports_by_prefectures[".advSearchFields"][] = "fukui-ken";
$tdataEoc_monthly_reports_by_prefectures[".advSearchFields"][] = "yamanashi-ken";
$tdataEoc_monthly_reports_by_prefectures[".advSearchFields"][] = "nagano-ken";
$tdataEoc_monthly_reports_by_prefectures[".advSearchFields"][] = "gifu-ken";
$tdataEoc_monthly_reports_by_prefectures[".advSearchFields"][] = "shizuoka-ken";
$tdataEoc_monthly_reports_by_prefectures[".advSearchFields"][] = "aichi-ken";
$tdataEoc_monthly_reports_by_prefectures[".advSearchFields"][] = "mie-ken";
$tdataEoc_monthly_reports_by_prefectures[".advSearchFields"][] = "shiga-ken";
$tdataEoc_monthly_reports_by_prefectures[".advSearchFields"][] = "kyoto-fu";
$tdataEoc_monthly_reports_by_prefectures[".advSearchFields"][] = "osaka-fu";
$tdataEoc_monthly_reports_by_prefectures[".advSearchFields"][] = "hyogo-ken";
$tdataEoc_monthly_reports_by_prefectures[".advSearchFields"][] = "nara-ken";
$tdataEoc_monthly_reports_by_prefectures[".advSearchFields"][] = "wakayama-ken";
$tdataEoc_monthly_reports_by_prefectures[".advSearchFields"][] = "tottori-ken";
$tdataEoc_monthly_reports_by_prefectures[".advSearchFields"][] = "shimane-ken";
$tdataEoc_monthly_reports_by_prefectures[".advSearchFields"][] = "okayama-ken";
$tdataEoc_monthly_reports_by_prefectures[".advSearchFields"][] = "hiroshima-ken";
$tdataEoc_monthly_reports_by_prefectures[".advSearchFields"][] = "yamaguchi-ken";
$tdataEoc_monthly_reports_by_prefectures[".advSearchFields"][] = "tokushima-ken";
$tdataEoc_monthly_reports_by_prefectures[".advSearchFields"][] = "kagawa-ken";
$tdataEoc_monthly_reports_by_prefectures[".advSearchFields"][] = "ehime-ken";
$tdataEoc_monthly_reports_by_prefectures[".advSearchFields"][] = "kochi-ken";
$tdataEoc_monthly_reports_by_prefectures[".advSearchFields"][] = "fukuoka-ken";
$tdataEoc_monthly_reports_by_prefectures[".advSearchFields"][] = "saga-ken";
$tdataEoc_monthly_reports_by_prefectures[".advSearchFields"][] = "nagasaki-ken";
$tdataEoc_monthly_reports_by_prefectures[".advSearchFields"][] = "kumamoto-ken";
$tdataEoc_monthly_reports_by_prefectures[".advSearchFields"][] = "oita-ken";
$tdataEoc_monthly_reports_by_prefectures[".advSearchFields"][] = "miyazaki-ken";
$tdataEoc_monthly_reports_by_prefectures[".advSearchFields"][] = "kagoshima-ken";
$tdataEoc_monthly_reports_by_prefectures[".advSearchFields"][] = "okinawa-ken";
$tdataEoc_monthly_reports_by_prefectures[".advSearchFields"][] = "created_at";
$tdataEoc_monthly_reports_by_prefectures[".advSearchFields"][] = "updated_at";

$tdataEoc_monthly_reports_by_prefectures[".tableType"] = "list";

$tdataEoc_monthly_reports_by_prefectures[".printerPageOrientation"] = 0;
$tdataEoc_monthly_reports_by_prefectures[".nPrinterPageScale"] = 100;

$tdataEoc_monthly_reports_by_prefectures[".nPrinterSplitRecords"] = 40;

$tdataEoc_monthly_reports_by_prefectures[".nPrinterPDFSplitRecords"] = 40;



$tdataEoc_monthly_reports_by_prefectures[".geocodingEnabled"] = false;





$tdataEoc_monthly_reports_by_prefectures[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataEoc_monthly_reports_by_prefectures[".pageSize"] = 20;

$tdataEoc_monthly_reports_by_prefectures[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataEoc_monthly_reports_by_prefectures[".strOrderBy"] = $tstrOrderBy;

$tdataEoc_monthly_reports_by_prefectures[".orderindexes"] = array();

$tdataEoc_monthly_reports_by_prefectures[".sqlHead"] = "SELECT `id`,  	`EocMonthlyReport_id`,  	`hokkai-dou`,  	`aomori-ken`,  	`iwate-ken`,  	`miyagi-ken`,  	`akita-ken`,  	`yamagata-ken`,  	`fukushima-ken`,  	`ibaraki-ken`,  	`tochigi-ken`,  	`gunma-ken`,  	`saitama-ken`,  	`chiba-ken`,  	`tokyo-ken`,  	`kanagawa-ken`,  	`niigata-ken`,  	`toyama-ken`,  	`ishikawa-ken`,  	`fukui-ken`,  	`yamanashi-ken`,  	`nagano-ken`,  	`gifu-ken`,  	`shizuoka-ken`,  	`aichi-ken`,  	`mie-ken`,  	`shiga-ken`,  	`kyoto-fu`,  	`osaka-fu`,  	`hyogo-ken`,  	`nara-ken`,  	`wakayama-ken`,  	`tottori-ken`,  	`shimane-ken`,  	`okayama-ken`,  	`hiroshima-ken`,  	`yamaguchi-ken`,  	`tokushima-ken`,  	`kagawa-ken`,  	`ehime-ken`,  	`kochi-ken`,  	`fukuoka-ken`,  	`saga-ken`,  	`nagasaki-ken`,  	`kumamoto-ken`,  	`oita-ken`,  	`miyazaki-ken`,  	`kagoshima-ken`,  	`okinawa-ken`,  	`created_at`,  	`updated_at`";
$tdataEoc_monthly_reports_by_prefectures[".sqlFrom"] = "FROM `Eoc_monthly_reports_by_prefectures`";
$tdataEoc_monthly_reports_by_prefectures[".sqlWhereExpr"] = "";
$tdataEoc_monthly_reports_by_prefectures[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataEoc_monthly_reports_by_prefectures[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataEoc_monthly_reports_by_prefectures[".arrGroupsPerPage"] = $arrGPP;

$tdataEoc_monthly_reports_by_prefectures[".highlightSearchResults"] = true;

$tableKeysEoc_monthly_reports_by_prefectures = array();
$tableKeysEoc_monthly_reports_by_prefectures[] = "id";
$tdataEoc_monthly_reports_by_prefectures[".Keys"] = $tableKeysEoc_monthly_reports_by_prefectures;

$tdataEoc_monthly_reports_by_prefectures[".listFields"] = array();
$tdataEoc_monthly_reports_by_prefectures[".listFields"][] = "id";
$tdataEoc_monthly_reports_by_prefectures[".listFields"][] = "EocMonthlyReport_id";
$tdataEoc_monthly_reports_by_prefectures[".listFields"][] = "hokkai-dou";
$tdataEoc_monthly_reports_by_prefectures[".listFields"][] = "aomori-ken";
$tdataEoc_monthly_reports_by_prefectures[".listFields"][] = "iwate-ken";
$tdataEoc_monthly_reports_by_prefectures[".listFields"][] = "miyagi-ken";
$tdataEoc_monthly_reports_by_prefectures[".listFields"][] = "akita-ken";
$tdataEoc_monthly_reports_by_prefectures[".listFields"][] = "yamagata-ken";
$tdataEoc_monthly_reports_by_prefectures[".listFields"][] = "fukushima-ken";
$tdataEoc_monthly_reports_by_prefectures[".listFields"][] = "ibaraki-ken";
$tdataEoc_monthly_reports_by_prefectures[".listFields"][] = "tochigi-ken";
$tdataEoc_monthly_reports_by_prefectures[".listFields"][] = "gunma-ken";
$tdataEoc_monthly_reports_by_prefectures[".listFields"][] = "saitama-ken";
$tdataEoc_monthly_reports_by_prefectures[".listFields"][] = "chiba-ken";
$tdataEoc_monthly_reports_by_prefectures[".listFields"][] = "tokyo-ken";
$tdataEoc_monthly_reports_by_prefectures[".listFields"][] = "kanagawa-ken";
$tdataEoc_monthly_reports_by_prefectures[".listFields"][] = "niigata-ken";
$tdataEoc_monthly_reports_by_prefectures[".listFields"][] = "toyama-ken";
$tdataEoc_monthly_reports_by_prefectures[".listFields"][] = "ishikawa-ken";
$tdataEoc_monthly_reports_by_prefectures[".listFields"][] = "fukui-ken";
$tdataEoc_monthly_reports_by_prefectures[".listFields"][] = "yamanashi-ken";
$tdataEoc_monthly_reports_by_prefectures[".listFields"][] = "nagano-ken";
$tdataEoc_monthly_reports_by_prefectures[".listFields"][] = "gifu-ken";
$tdataEoc_monthly_reports_by_prefectures[".listFields"][] = "shizuoka-ken";
$tdataEoc_monthly_reports_by_prefectures[".listFields"][] = "aichi-ken";
$tdataEoc_monthly_reports_by_prefectures[".listFields"][] = "mie-ken";
$tdataEoc_monthly_reports_by_prefectures[".listFields"][] = "shiga-ken";
$tdataEoc_monthly_reports_by_prefectures[".listFields"][] = "kyoto-fu";
$tdataEoc_monthly_reports_by_prefectures[".listFields"][] = "osaka-fu";
$tdataEoc_monthly_reports_by_prefectures[".listFields"][] = "hyogo-ken";
$tdataEoc_monthly_reports_by_prefectures[".listFields"][] = "nara-ken";
$tdataEoc_monthly_reports_by_prefectures[".listFields"][] = "wakayama-ken";
$tdataEoc_monthly_reports_by_prefectures[".listFields"][] = "tottori-ken";
$tdataEoc_monthly_reports_by_prefectures[".listFields"][] = "shimane-ken";
$tdataEoc_monthly_reports_by_prefectures[".listFields"][] = "okayama-ken";
$tdataEoc_monthly_reports_by_prefectures[".listFields"][] = "hiroshima-ken";
$tdataEoc_monthly_reports_by_prefectures[".listFields"][] = "yamaguchi-ken";
$tdataEoc_monthly_reports_by_prefectures[".listFields"][] = "tokushima-ken";
$tdataEoc_monthly_reports_by_prefectures[".listFields"][] = "kagawa-ken";
$tdataEoc_monthly_reports_by_prefectures[".listFields"][] = "ehime-ken";
$tdataEoc_monthly_reports_by_prefectures[".listFields"][] = "kochi-ken";
$tdataEoc_monthly_reports_by_prefectures[".listFields"][] = "fukuoka-ken";
$tdataEoc_monthly_reports_by_prefectures[".listFields"][] = "saga-ken";
$tdataEoc_monthly_reports_by_prefectures[".listFields"][] = "nagasaki-ken";
$tdataEoc_monthly_reports_by_prefectures[".listFields"][] = "kumamoto-ken";
$tdataEoc_monthly_reports_by_prefectures[".listFields"][] = "oita-ken";
$tdataEoc_monthly_reports_by_prefectures[".listFields"][] = "miyazaki-ken";
$tdataEoc_monthly_reports_by_prefectures[".listFields"][] = "kagoshima-ken";
$tdataEoc_monthly_reports_by_prefectures[".listFields"][] = "okinawa-ken";
$tdataEoc_monthly_reports_by_prefectures[".listFields"][] = "created_at";
$tdataEoc_monthly_reports_by_prefectures[".listFields"][] = "updated_at";

$tdataEoc_monthly_reports_by_prefectures[".hideMobileList"] = array();


$tdataEoc_monthly_reports_by_prefectures[".viewFields"] = array();
$tdataEoc_monthly_reports_by_prefectures[".viewFields"][] = "id";
$tdataEoc_monthly_reports_by_prefectures[".viewFields"][] = "EocMonthlyReport_id";
$tdataEoc_monthly_reports_by_prefectures[".viewFields"][] = "hokkai-dou";
$tdataEoc_monthly_reports_by_prefectures[".viewFields"][] = "aomori-ken";
$tdataEoc_monthly_reports_by_prefectures[".viewFields"][] = "iwate-ken";
$tdataEoc_monthly_reports_by_prefectures[".viewFields"][] = "miyagi-ken";
$tdataEoc_monthly_reports_by_prefectures[".viewFields"][] = "akita-ken";
$tdataEoc_monthly_reports_by_prefectures[".viewFields"][] = "yamagata-ken";
$tdataEoc_monthly_reports_by_prefectures[".viewFields"][] = "fukushima-ken";
$tdataEoc_monthly_reports_by_prefectures[".viewFields"][] = "ibaraki-ken";
$tdataEoc_monthly_reports_by_prefectures[".viewFields"][] = "tochigi-ken";
$tdataEoc_monthly_reports_by_prefectures[".viewFields"][] = "gunma-ken";
$tdataEoc_monthly_reports_by_prefectures[".viewFields"][] = "saitama-ken";
$tdataEoc_monthly_reports_by_prefectures[".viewFields"][] = "chiba-ken";
$tdataEoc_monthly_reports_by_prefectures[".viewFields"][] = "tokyo-ken";
$tdataEoc_monthly_reports_by_prefectures[".viewFields"][] = "kanagawa-ken";
$tdataEoc_monthly_reports_by_prefectures[".viewFields"][] = "niigata-ken";
$tdataEoc_monthly_reports_by_prefectures[".viewFields"][] = "toyama-ken";
$tdataEoc_monthly_reports_by_prefectures[".viewFields"][] = "ishikawa-ken";
$tdataEoc_monthly_reports_by_prefectures[".viewFields"][] = "fukui-ken";
$tdataEoc_monthly_reports_by_prefectures[".viewFields"][] = "yamanashi-ken";
$tdataEoc_monthly_reports_by_prefectures[".viewFields"][] = "nagano-ken";
$tdataEoc_monthly_reports_by_prefectures[".viewFields"][] = "gifu-ken";
$tdataEoc_monthly_reports_by_prefectures[".viewFields"][] = "shizuoka-ken";
$tdataEoc_monthly_reports_by_prefectures[".viewFields"][] = "aichi-ken";
$tdataEoc_monthly_reports_by_prefectures[".viewFields"][] = "mie-ken";
$tdataEoc_monthly_reports_by_prefectures[".viewFields"][] = "shiga-ken";
$tdataEoc_monthly_reports_by_prefectures[".viewFields"][] = "kyoto-fu";
$tdataEoc_monthly_reports_by_prefectures[".viewFields"][] = "osaka-fu";
$tdataEoc_monthly_reports_by_prefectures[".viewFields"][] = "hyogo-ken";
$tdataEoc_monthly_reports_by_prefectures[".viewFields"][] = "nara-ken";
$tdataEoc_monthly_reports_by_prefectures[".viewFields"][] = "wakayama-ken";
$tdataEoc_monthly_reports_by_prefectures[".viewFields"][] = "tottori-ken";
$tdataEoc_monthly_reports_by_prefectures[".viewFields"][] = "shimane-ken";
$tdataEoc_monthly_reports_by_prefectures[".viewFields"][] = "okayama-ken";
$tdataEoc_monthly_reports_by_prefectures[".viewFields"][] = "hiroshima-ken";
$tdataEoc_monthly_reports_by_prefectures[".viewFields"][] = "yamaguchi-ken";
$tdataEoc_monthly_reports_by_prefectures[".viewFields"][] = "tokushima-ken";
$tdataEoc_monthly_reports_by_prefectures[".viewFields"][] = "kagawa-ken";
$tdataEoc_monthly_reports_by_prefectures[".viewFields"][] = "ehime-ken";
$tdataEoc_monthly_reports_by_prefectures[".viewFields"][] = "kochi-ken";
$tdataEoc_monthly_reports_by_prefectures[".viewFields"][] = "fukuoka-ken";
$tdataEoc_monthly_reports_by_prefectures[".viewFields"][] = "saga-ken";
$tdataEoc_monthly_reports_by_prefectures[".viewFields"][] = "nagasaki-ken";
$tdataEoc_monthly_reports_by_prefectures[".viewFields"][] = "kumamoto-ken";
$tdataEoc_monthly_reports_by_prefectures[".viewFields"][] = "oita-ken";
$tdataEoc_monthly_reports_by_prefectures[".viewFields"][] = "miyazaki-ken";
$tdataEoc_monthly_reports_by_prefectures[".viewFields"][] = "kagoshima-ken";
$tdataEoc_monthly_reports_by_prefectures[".viewFields"][] = "okinawa-ken";
$tdataEoc_monthly_reports_by_prefectures[".viewFields"][] = "created_at";
$tdataEoc_monthly_reports_by_prefectures[".viewFields"][] = "updated_at";

$tdataEoc_monthly_reports_by_prefectures[".addFields"] = array();
$tdataEoc_monthly_reports_by_prefectures[".addFields"][] = "EocMonthlyReport_id";
$tdataEoc_monthly_reports_by_prefectures[".addFields"][] = "hokkai-dou";
$tdataEoc_monthly_reports_by_prefectures[".addFields"][] = "aomori-ken";
$tdataEoc_monthly_reports_by_prefectures[".addFields"][] = "iwate-ken";
$tdataEoc_monthly_reports_by_prefectures[".addFields"][] = "miyagi-ken";
$tdataEoc_monthly_reports_by_prefectures[".addFields"][] = "akita-ken";
$tdataEoc_monthly_reports_by_prefectures[".addFields"][] = "yamagata-ken";
$tdataEoc_monthly_reports_by_prefectures[".addFields"][] = "fukushima-ken";
$tdataEoc_monthly_reports_by_prefectures[".addFields"][] = "ibaraki-ken";
$tdataEoc_monthly_reports_by_prefectures[".addFields"][] = "tochigi-ken";
$tdataEoc_monthly_reports_by_prefectures[".addFields"][] = "gunma-ken";
$tdataEoc_monthly_reports_by_prefectures[".addFields"][] = "saitama-ken";
$tdataEoc_monthly_reports_by_prefectures[".addFields"][] = "chiba-ken";
$tdataEoc_monthly_reports_by_prefectures[".addFields"][] = "tokyo-ken";
$tdataEoc_monthly_reports_by_prefectures[".addFields"][] = "kanagawa-ken";
$tdataEoc_monthly_reports_by_prefectures[".addFields"][] = "niigata-ken";
$tdataEoc_monthly_reports_by_prefectures[".addFields"][] = "toyama-ken";
$tdataEoc_monthly_reports_by_prefectures[".addFields"][] = "ishikawa-ken";
$tdataEoc_monthly_reports_by_prefectures[".addFields"][] = "fukui-ken";
$tdataEoc_monthly_reports_by_prefectures[".addFields"][] = "yamanashi-ken";
$tdataEoc_monthly_reports_by_prefectures[".addFields"][] = "nagano-ken";
$tdataEoc_monthly_reports_by_prefectures[".addFields"][] = "gifu-ken";
$tdataEoc_monthly_reports_by_prefectures[".addFields"][] = "shizuoka-ken";
$tdataEoc_monthly_reports_by_prefectures[".addFields"][] = "aichi-ken";
$tdataEoc_monthly_reports_by_prefectures[".addFields"][] = "mie-ken";
$tdataEoc_monthly_reports_by_prefectures[".addFields"][] = "shiga-ken";
$tdataEoc_monthly_reports_by_prefectures[".addFields"][] = "kyoto-fu";
$tdataEoc_monthly_reports_by_prefectures[".addFields"][] = "osaka-fu";
$tdataEoc_monthly_reports_by_prefectures[".addFields"][] = "hyogo-ken";
$tdataEoc_monthly_reports_by_prefectures[".addFields"][] = "nara-ken";
$tdataEoc_monthly_reports_by_prefectures[".addFields"][] = "wakayama-ken";
$tdataEoc_monthly_reports_by_prefectures[".addFields"][] = "tottori-ken";
$tdataEoc_monthly_reports_by_prefectures[".addFields"][] = "shimane-ken";
$tdataEoc_monthly_reports_by_prefectures[".addFields"][] = "okayama-ken";
$tdataEoc_monthly_reports_by_prefectures[".addFields"][] = "hiroshima-ken";
$tdataEoc_monthly_reports_by_prefectures[".addFields"][] = "yamaguchi-ken";
$tdataEoc_monthly_reports_by_prefectures[".addFields"][] = "tokushima-ken";
$tdataEoc_monthly_reports_by_prefectures[".addFields"][] = "kagawa-ken";
$tdataEoc_monthly_reports_by_prefectures[".addFields"][] = "ehime-ken";
$tdataEoc_monthly_reports_by_prefectures[".addFields"][] = "kochi-ken";
$tdataEoc_monthly_reports_by_prefectures[".addFields"][] = "fukuoka-ken";
$tdataEoc_monthly_reports_by_prefectures[".addFields"][] = "saga-ken";
$tdataEoc_monthly_reports_by_prefectures[".addFields"][] = "nagasaki-ken";
$tdataEoc_monthly_reports_by_prefectures[".addFields"][] = "kumamoto-ken";
$tdataEoc_monthly_reports_by_prefectures[".addFields"][] = "oita-ken";
$tdataEoc_monthly_reports_by_prefectures[".addFields"][] = "miyazaki-ken";
$tdataEoc_monthly_reports_by_prefectures[".addFields"][] = "kagoshima-ken";
$tdataEoc_monthly_reports_by_prefectures[".addFields"][] = "okinawa-ken";
$tdataEoc_monthly_reports_by_prefectures[".addFields"][] = "created_at";
$tdataEoc_monthly_reports_by_prefectures[".addFields"][] = "updated_at";

$tdataEoc_monthly_reports_by_prefectures[".masterListFields"] = array();
$tdataEoc_monthly_reports_by_prefectures[".masterListFields"][] = "id";
$tdataEoc_monthly_reports_by_prefectures[".masterListFields"][] = "EocMonthlyReport_id";
$tdataEoc_monthly_reports_by_prefectures[".masterListFields"][] = "hokkai-dou";
$tdataEoc_monthly_reports_by_prefectures[".masterListFields"][] = "aomori-ken";
$tdataEoc_monthly_reports_by_prefectures[".masterListFields"][] = "iwate-ken";
$tdataEoc_monthly_reports_by_prefectures[".masterListFields"][] = "miyagi-ken";
$tdataEoc_monthly_reports_by_prefectures[".masterListFields"][] = "akita-ken";
$tdataEoc_monthly_reports_by_prefectures[".masterListFields"][] = "yamagata-ken";
$tdataEoc_monthly_reports_by_prefectures[".masterListFields"][] = "fukushima-ken";
$tdataEoc_monthly_reports_by_prefectures[".masterListFields"][] = "ibaraki-ken";
$tdataEoc_monthly_reports_by_prefectures[".masterListFields"][] = "tochigi-ken";
$tdataEoc_monthly_reports_by_prefectures[".masterListFields"][] = "gunma-ken";
$tdataEoc_monthly_reports_by_prefectures[".masterListFields"][] = "saitama-ken";
$tdataEoc_monthly_reports_by_prefectures[".masterListFields"][] = "chiba-ken";
$tdataEoc_monthly_reports_by_prefectures[".masterListFields"][] = "tokyo-ken";
$tdataEoc_monthly_reports_by_prefectures[".masterListFields"][] = "kanagawa-ken";
$tdataEoc_monthly_reports_by_prefectures[".masterListFields"][] = "niigata-ken";
$tdataEoc_monthly_reports_by_prefectures[".masterListFields"][] = "toyama-ken";
$tdataEoc_monthly_reports_by_prefectures[".masterListFields"][] = "ishikawa-ken";
$tdataEoc_monthly_reports_by_prefectures[".masterListFields"][] = "fukui-ken";
$tdataEoc_monthly_reports_by_prefectures[".masterListFields"][] = "yamanashi-ken";
$tdataEoc_monthly_reports_by_prefectures[".masterListFields"][] = "nagano-ken";
$tdataEoc_monthly_reports_by_prefectures[".masterListFields"][] = "gifu-ken";
$tdataEoc_monthly_reports_by_prefectures[".masterListFields"][] = "shizuoka-ken";
$tdataEoc_monthly_reports_by_prefectures[".masterListFields"][] = "aichi-ken";
$tdataEoc_monthly_reports_by_prefectures[".masterListFields"][] = "mie-ken";
$tdataEoc_monthly_reports_by_prefectures[".masterListFields"][] = "shiga-ken";
$tdataEoc_monthly_reports_by_prefectures[".masterListFields"][] = "kyoto-fu";
$tdataEoc_monthly_reports_by_prefectures[".masterListFields"][] = "osaka-fu";
$tdataEoc_monthly_reports_by_prefectures[".masterListFields"][] = "hyogo-ken";
$tdataEoc_monthly_reports_by_prefectures[".masterListFields"][] = "nara-ken";
$tdataEoc_monthly_reports_by_prefectures[".masterListFields"][] = "wakayama-ken";
$tdataEoc_monthly_reports_by_prefectures[".masterListFields"][] = "tottori-ken";
$tdataEoc_monthly_reports_by_prefectures[".masterListFields"][] = "shimane-ken";
$tdataEoc_monthly_reports_by_prefectures[".masterListFields"][] = "okayama-ken";
$tdataEoc_monthly_reports_by_prefectures[".masterListFields"][] = "hiroshima-ken";
$tdataEoc_monthly_reports_by_prefectures[".masterListFields"][] = "yamaguchi-ken";
$tdataEoc_monthly_reports_by_prefectures[".masterListFields"][] = "tokushima-ken";
$tdataEoc_monthly_reports_by_prefectures[".masterListFields"][] = "kagawa-ken";
$tdataEoc_monthly_reports_by_prefectures[".masterListFields"][] = "ehime-ken";
$tdataEoc_monthly_reports_by_prefectures[".masterListFields"][] = "kochi-ken";
$tdataEoc_monthly_reports_by_prefectures[".masterListFields"][] = "fukuoka-ken";
$tdataEoc_monthly_reports_by_prefectures[".masterListFields"][] = "saga-ken";
$tdataEoc_monthly_reports_by_prefectures[".masterListFields"][] = "nagasaki-ken";
$tdataEoc_monthly_reports_by_prefectures[".masterListFields"][] = "kumamoto-ken";
$tdataEoc_monthly_reports_by_prefectures[".masterListFields"][] = "oita-ken";
$tdataEoc_monthly_reports_by_prefectures[".masterListFields"][] = "miyazaki-ken";
$tdataEoc_monthly_reports_by_prefectures[".masterListFields"][] = "kagoshima-ken";
$tdataEoc_monthly_reports_by_prefectures[".masterListFields"][] = "okinawa-ken";
$tdataEoc_monthly_reports_by_prefectures[".masterListFields"][] = "created_at";
$tdataEoc_monthly_reports_by_prefectures[".masterListFields"][] = "updated_at";

$tdataEoc_monthly_reports_by_prefectures[".inlineAddFields"] = array();
$tdataEoc_monthly_reports_by_prefectures[".inlineAddFields"][] = "EocMonthlyReport_id";
$tdataEoc_monthly_reports_by_prefectures[".inlineAddFields"][] = "hokkai-dou";
$tdataEoc_monthly_reports_by_prefectures[".inlineAddFields"][] = "aomori-ken";
$tdataEoc_monthly_reports_by_prefectures[".inlineAddFields"][] = "iwate-ken";
$tdataEoc_monthly_reports_by_prefectures[".inlineAddFields"][] = "miyagi-ken";
$tdataEoc_monthly_reports_by_prefectures[".inlineAddFields"][] = "akita-ken";
$tdataEoc_monthly_reports_by_prefectures[".inlineAddFields"][] = "yamagata-ken";
$tdataEoc_monthly_reports_by_prefectures[".inlineAddFields"][] = "fukushima-ken";
$tdataEoc_monthly_reports_by_prefectures[".inlineAddFields"][] = "ibaraki-ken";
$tdataEoc_monthly_reports_by_prefectures[".inlineAddFields"][] = "tochigi-ken";
$tdataEoc_monthly_reports_by_prefectures[".inlineAddFields"][] = "gunma-ken";
$tdataEoc_monthly_reports_by_prefectures[".inlineAddFields"][] = "saitama-ken";
$tdataEoc_monthly_reports_by_prefectures[".inlineAddFields"][] = "chiba-ken";
$tdataEoc_monthly_reports_by_prefectures[".inlineAddFields"][] = "tokyo-ken";
$tdataEoc_monthly_reports_by_prefectures[".inlineAddFields"][] = "kanagawa-ken";
$tdataEoc_monthly_reports_by_prefectures[".inlineAddFields"][] = "niigata-ken";
$tdataEoc_monthly_reports_by_prefectures[".inlineAddFields"][] = "toyama-ken";
$tdataEoc_monthly_reports_by_prefectures[".inlineAddFields"][] = "ishikawa-ken";
$tdataEoc_monthly_reports_by_prefectures[".inlineAddFields"][] = "fukui-ken";
$tdataEoc_monthly_reports_by_prefectures[".inlineAddFields"][] = "yamanashi-ken";
$tdataEoc_monthly_reports_by_prefectures[".inlineAddFields"][] = "nagano-ken";
$tdataEoc_monthly_reports_by_prefectures[".inlineAddFields"][] = "gifu-ken";
$tdataEoc_monthly_reports_by_prefectures[".inlineAddFields"][] = "shizuoka-ken";
$tdataEoc_monthly_reports_by_prefectures[".inlineAddFields"][] = "aichi-ken";
$tdataEoc_monthly_reports_by_prefectures[".inlineAddFields"][] = "mie-ken";
$tdataEoc_monthly_reports_by_prefectures[".inlineAddFields"][] = "shiga-ken";
$tdataEoc_monthly_reports_by_prefectures[".inlineAddFields"][] = "kyoto-fu";
$tdataEoc_monthly_reports_by_prefectures[".inlineAddFields"][] = "osaka-fu";
$tdataEoc_monthly_reports_by_prefectures[".inlineAddFields"][] = "hyogo-ken";
$tdataEoc_monthly_reports_by_prefectures[".inlineAddFields"][] = "nara-ken";
$tdataEoc_monthly_reports_by_prefectures[".inlineAddFields"][] = "wakayama-ken";
$tdataEoc_monthly_reports_by_prefectures[".inlineAddFields"][] = "tottori-ken";
$tdataEoc_monthly_reports_by_prefectures[".inlineAddFields"][] = "shimane-ken";
$tdataEoc_monthly_reports_by_prefectures[".inlineAddFields"][] = "okayama-ken";
$tdataEoc_monthly_reports_by_prefectures[".inlineAddFields"][] = "hiroshima-ken";
$tdataEoc_monthly_reports_by_prefectures[".inlineAddFields"][] = "yamaguchi-ken";
$tdataEoc_monthly_reports_by_prefectures[".inlineAddFields"][] = "tokushima-ken";
$tdataEoc_monthly_reports_by_prefectures[".inlineAddFields"][] = "kagawa-ken";
$tdataEoc_monthly_reports_by_prefectures[".inlineAddFields"][] = "ehime-ken";
$tdataEoc_monthly_reports_by_prefectures[".inlineAddFields"][] = "kochi-ken";
$tdataEoc_monthly_reports_by_prefectures[".inlineAddFields"][] = "fukuoka-ken";
$tdataEoc_monthly_reports_by_prefectures[".inlineAddFields"][] = "saga-ken";
$tdataEoc_monthly_reports_by_prefectures[".inlineAddFields"][] = "nagasaki-ken";
$tdataEoc_monthly_reports_by_prefectures[".inlineAddFields"][] = "kumamoto-ken";
$tdataEoc_monthly_reports_by_prefectures[".inlineAddFields"][] = "oita-ken";
$tdataEoc_monthly_reports_by_prefectures[".inlineAddFields"][] = "miyazaki-ken";
$tdataEoc_monthly_reports_by_prefectures[".inlineAddFields"][] = "kagoshima-ken";
$tdataEoc_monthly_reports_by_prefectures[".inlineAddFields"][] = "okinawa-ken";
$tdataEoc_monthly_reports_by_prefectures[".inlineAddFields"][] = "created_at";
$tdataEoc_monthly_reports_by_prefectures[".inlineAddFields"][] = "updated_at";

$tdataEoc_monthly_reports_by_prefectures[".editFields"] = array();
$tdataEoc_monthly_reports_by_prefectures[".editFields"][] = "EocMonthlyReport_id";
$tdataEoc_monthly_reports_by_prefectures[".editFields"][] = "hokkai-dou";
$tdataEoc_monthly_reports_by_prefectures[".editFields"][] = "aomori-ken";
$tdataEoc_monthly_reports_by_prefectures[".editFields"][] = "iwate-ken";
$tdataEoc_monthly_reports_by_prefectures[".editFields"][] = "miyagi-ken";
$tdataEoc_monthly_reports_by_prefectures[".editFields"][] = "akita-ken";
$tdataEoc_monthly_reports_by_prefectures[".editFields"][] = "yamagata-ken";
$tdataEoc_monthly_reports_by_prefectures[".editFields"][] = "fukushima-ken";
$tdataEoc_monthly_reports_by_prefectures[".editFields"][] = "ibaraki-ken";
$tdataEoc_monthly_reports_by_prefectures[".editFields"][] = "tochigi-ken";
$tdataEoc_monthly_reports_by_prefectures[".editFields"][] = "gunma-ken";
$tdataEoc_monthly_reports_by_prefectures[".editFields"][] = "saitama-ken";
$tdataEoc_monthly_reports_by_prefectures[".editFields"][] = "chiba-ken";
$tdataEoc_monthly_reports_by_prefectures[".editFields"][] = "tokyo-ken";
$tdataEoc_monthly_reports_by_prefectures[".editFields"][] = "kanagawa-ken";
$tdataEoc_monthly_reports_by_prefectures[".editFields"][] = "niigata-ken";
$tdataEoc_monthly_reports_by_prefectures[".editFields"][] = "toyama-ken";
$tdataEoc_monthly_reports_by_prefectures[".editFields"][] = "ishikawa-ken";
$tdataEoc_monthly_reports_by_prefectures[".editFields"][] = "fukui-ken";
$tdataEoc_monthly_reports_by_prefectures[".editFields"][] = "yamanashi-ken";
$tdataEoc_monthly_reports_by_prefectures[".editFields"][] = "nagano-ken";
$tdataEoc_monthly_reports_by_prefectures[".editFields"][] = "gifu-ken";
$tdataEoc_monthly_reports_by_prefectures[".editFields"][] = "shizuoka-ken";
$tdataEoc_monthly_reports_by_prefectures[".editFields"][] = "aichi-ken";
$tdataEoc_monthly_reports_by_prefectures[".editFields"][] = "mie-ken";
$tdataEoc_monthly_reports_by_prefectures[".editFields"][] = "shiga-ken";
$tdataEoc_monthly_reports_by_prefectures[".editFields"][] = "kyoto-fu";
$tdataEoc_monthly_reports_by_prefectures[".editFields"][] = "osaka-fu";
$tdataEoc_monthly_reports_by_prefectures[".editFields"][] = "hyogo-ken";
$tdataEoc_monthly_reports_by_prefectures[".editFields"][] = "nara-ken";
$tdataEoc_monthly_reports_by_prefectures[".editFields"][] = "wakayama-ken";
$tdataEoc_monthly_reports_by_prefectures[".editFields"][] = "tottori-ken";
$tdataEoc_monthly_reports_by_prefectures[".editFields"][] = "shimane-ken";
$tdataEoc_monthly_reports_by_prefectures[".editFields"][] = "okayama-ken";
$tdataEoc_monthly_reports_by_prefectures[".editFields"][] = "hiroshima-ken";
$tdataEoc_monthly_reports_by_prefectures[".editFields"][] = "yamaguchi-ken";
$tdataEoc_monthly_reports_by_prefectures[".editFields"][] = "tokushima-ken";
$tdataEoc_monthly_reports_by_prefectures[".editFields"][] = "kagawa-ken";
$tdataEoc_monthly_reports_by_prefectures[".editFields"][] = "ehime-ken";
$tdataEoc_monthly_reports_by_prefectures[".editFields"][] = "kochi-ken";
$tdataEoc_monthly_reports_by_prefectures[".editFields"][] = "fukuoka-ken";
$tdataEoc_monthly_reports_by_prefectures[".editFields"][] = "saga-ken";
$tdataEoc_monthly_reports_by_prefectures[".editFields"][] = "nagasaki-ken";
$tdataEoc_monthly_reports_by_prefectures[".editFields"][] = "kumamoto-ken";
$tdataEoc_monthly_reports_by_prefectures[".editFields"][] = "oita-ken";
$tdataEoc_monthly_reports_by_prefectures[".editFields"][] = "miyazaki-ken";
$tdataEoc_monthly_reports_by_prefectures[".editFields"][] = "kagoshima-ken";
$tdataEoc_monthly_reports_by_prefectures[".editFields"][] = "okinawa-ken";
$tdataEoc_monthly_reports_by_prefectures[".editFields"][] = "created_at";
$tdataEoc_monthly_reports_by_prefectures[".editFields"][] = "updated_at";

$tdataEoc_monthly_reports_by_prefectures[".inlineEditFields"] = array();
$tdataEoc_monthly_reports_by_prefectures[".inlineEditFields"][] = "EocMonthlyReport_id";
$tdataEoc_monthly_reports_by_prefectures[".inlineEditFields"][] = "hokkai-dou";
$tdataEoc_monthly_reports_by_prefectures[".inlineEditFields"][] = "aomori-ken";
$tdataEoc_monthly_reports_by_prefectures[".inlineEditFields"][] = "iwate-ken";
$tdataEoc_monthly_reports_by_prefectures[".inlineEditFields"][] = "miyagi-ken";
$tdataEoc_monthly_reports_by_prefectures[".inlineEditFields"][] = "akita-ken";
$tdataEoc_monthly_reports_by_prefectures[".inlineEditFields"][] = "yamagata-ken";
$tdataEoc_monthly_reports_by_prefectures[".inlineEditFields"][] = "fukushima-ken";
$tdataEoc_monthly_reports_by_prefectures[".inlineEditFields"][] = "ibaraki-ken";
$tdataEoc_monthly_reports_by_prefectures[".inlineEditFields"][] = "tochigi-ken";
$tdataEoc_monthly_reports_by_prefectures[".inlineEditFields"][] = "gunma-ken";
$tdataEoc_monthly_reports_by_prefectures[".inlineEditFields"][] = "saitama-ken";
$tdataEoc_monthly_reports_by_prefectures[".inlineEditFields"][] = "chiba-ken";
$tdataEoc_monthly_reports_by_prefectures[".inlineEditFields"][] = "tokyo-ken";
$tdataEoc_monthly_reports_by_prefectures[".inlineEditFields"][] = "kanagawa-ken";
$tdataEoc_monthly_reports_by_prefectures[".inlineEditFields"][] = "niigata-ken";
$tdataEoc_monthly_reports_by_prefectures[".inlineEditFields"][] = "toyama-ken";
$tdataEoc_monthly_reports_by_prefectures[".inlineEditFields"][] = "ishikawa-ken";
$tdataEoc_monthly_reports_by_prefectures[".inlineEditFields"][] = "fukui-ken";
$tdataEoc_monthly_reports_by_prefectures[".inlineEditFields"][] = "yamanashi-ken";
$tdataEoc_monthly_reports_by_prefectures[".inlineEditFields"][] = "nagano-ken";
$tdataEoc_monthly_reports_by_prefectures[".inlineEditFields"][] = "gifu-ken";
$tdataEoc_monthly_reports_by_prefectures[".inlineEditFields"][] = "shizuoka-ken";
$tdataEoc_monthly_reports_by_prefectures[".inlineEditFields"][] = "aichi-ken";
$tdataEoc_monthly_reports_by_prefectures[".inlineEditFields"][] = "mie-ken";
$tdataEoc_monthly_reports_by_prefectures[".inlineEditFields"][] = "shiga-ken";
$tdataEoc_monthly_reports_by_prefectures[".inlineEditFields"][] = "kyoto-fu";
$tdataEoc_monthly_reports_by_prefectures[".inlineEditFields"][] = "osaka-fu";
$tdataEoc_monthly_reports_by_prefectures[".inlineEditFields"][] = "hyogo-ken";
$tdataEoc_monthly_reports_by_prefectures[".inlineEditFields"][] = "nara-ken";
$tdataEoc_monthly_reports_by_prefectures[".inlineEditFields"][] = "wakayama-ken";
$tdataEoc_monthly_reports_by_prefectures[".inlineEditFields"][] = "tottori-ken";
$tdataEoc_monthly_reports_by_prefectures[".inlineEditFields"][] = "shimane-ken";
$tdataEoc_monthly_reports_by_prefectures[".inlineEditFields"][] = "okayama-ken";
$tdataEoc_monthly_reports_by_prefectures[".inlineEditFields"][] = "hiroshima-ken";
$tdataEoc_monthly_reports_by_prefectures[".inlineEditFields"][] = "yamaguchi-ken";
$tdataEoc_monthly_reports_by_prefectures[".inlineEditFields"][] = "tokushima-ken";
$tdataEoc_monthly_reports_by_prefectures[".inlineEditFields"][] = "kagawa-ken";
$tdataEoc_monthly_reports_by_prefectures[".inlineEditFields"][] = "ehime-ken";
$tdataEoc_monthly_reports_by_prefectures[".inlineEditFields"][] = "kochi-ken";
$tdataEoc_monthly_reports_by_prefectures[".inlineEditFields"][] = "fukuoka-ken";
$tdataEoc_monthly_reports_by_prefectures[".inlineEditFields"][] = "saga-ken";
$tdataEoc_monthly_reports_by_prefectures[".inlineEditFields"][] = "nagasaki-ken";
$tdataEoc_monthly_reports_by_prefectures[".inlineEditFields"][] = "kumamoto-ken";
$tdataEoc_monthly_reports_by_prefectures[".inlineEditFields"][] = "oita-ken";
$tdataEoc_monthly_reports_by_prefectures[".inlineEditFields"][] = "miyazaki-ken";
$tdataEoc_monthly_reports_by_prefectures[".inlineEditFields"][] = "kagoshima-ken";
$tdataEoc_monthly_reports_by_prefectures[".inlineEditFields"][] = "okinawa-ken";
$tdataEoc_monthly_reports_by_prefectures[".inlineEditFields"][] = "created_at";
$tdataEoc_monthly_reports_by_prefectures[".inlineEditFields"][] = "updated_at";

$tdataEoc_monthly_reports_by_prefectures[".updateSelectedFields"] = array();
$tdataEoc_monthly_reports_by_prefectures[".updateSelectedFields"][] = "EocMonthlyReport_id";
$tdataEoc_monthly_reports_by_prefectures[".updateSelectedFields"][] = "hokkai-dou";
$tdataEoc_monthly_reports_by_prefectures[".updateSelectedFields"][] = "aomori-ken";
$tdataEoc_monthly_reports_by_prefectures[".updateSelectedFields"][] = "iwate-ken";
$tdataEoc_monthly_reports_by_prefectures[".updateSelectedFields"][] = "miyagi-ken";
$tdataEoc_monthly_reports_by_prefectures[".updateSelectedFields"][] = "akita-ken";
$tdataEoc_monthly_reports_by_prefectures[".updateSelectedFields"][] = "yamagata-ken";
$tdataEoc_monthly_reports_by_prefectures[".updateSelectedFields"][] = "fukushima-ken";
$tdataEoc_monthly_reports_by_prefectures[".updateSelectedFields"][] = "ibaraki-ken";
$tdataEoc_monthly_reports_by_prefectures[".updateSelectedFields"][] = "tochigi-ken";
$tdataEoc_monthly_reports_by_prefectures[".updateSelectedFields"][] = "gunma-ken";
$tdataEoc_monthly_reports_by_prefectures[".updateSelectedFields"][] = "saitama-ken";
$tdataEoc_monthly_reports_by_prefectures[".updateSelectedFields"][] = "chiba-ken";
$tdataEoc_monthly_reports_by_prefectures[".updateSelectedFields"][] = "tokyo-ken";
$tdataEoc_monthly_reports_by_prefectures[".updateSelectedFields"][] = "kanagawa-ken";
$tdataEoc_monthly_reports_by_prefectures[".updateSelectedFields"][] = "niigata-ken";
$tdataEoc_monthly_reports_by_prefectures[".updateSelectedFields"][] = "toyama-ken";
$tdataEoc_monthly_reports_by_prefectures[".updateSelectedFields"][] = "ishikawa-ken";
$tdataEoc_monthly_reports_by_prefectures[".updateSelectedFields"][] = "fukui-ken";
$tdataEoc_monthly_reports_by_prefectures[".updateSelectedFields"][] = "yamanashi-ken";
$tdataEoc_monthly_reports_by_prefectures[".updateSelectedFields"][] = "nagano-ken";
$tdataEoc_monthly_reports_by_prefectures[".updateSelectedFields"][] = "gifu-ken";
$tdataEoc_monthly_reports_by_prefectures[".updateSelectedFields"][] = "shizuoka-ken";
$tdataEoc_monthly_reports_by_prefectures[".updateSelectedFields"][] = "aichi-ken";
$tdataEoc_monthly_reports_by_prefectures[".updateSelectedFields"][] = "mie-ken";
$tdataEoc_monthly_reports_by_prefectures[".updateSelectedFields"][] = "shiga-ken";
$tdataEoc_monthly_reports_by_prefectures[".updateSelectedFields"][] = "kyoto-fu";
$tdataEoc_monthly_reports_by_prefectures[".updateSelectedFields"][] = "osaka-fu";
$tdataEoc_monthly_reports_by_prefectures[".updateSelectedFields"][] = "hyogo-ken";
$tdataEoc_monthly_reports_by_prefectures[".updateSelectedFields"][] = "nara-ken";
$tdataEoc_monthly_reports_by_prefectures[".updateSelectedFields"][] = "wakayama-ken";
$tdataEoc_monthly_reports_by_prefectures[".updateSelectedFields"][] = "tottori-ken";
$tdataEoc_monthly_reports_by_prefectures[".updateSelectedFields"][] = "shimane-ken";
$tdataEoc_monthly_reports_by_prefectures[".updateSelectedFields"][] = "okayama-ken";
$tdataEoc_monthly_reports_by_prefectures[".updateSelectedFields"][] = "hiroshima-ken";
$tdataEoc_monthly_reports_by_prefectures[".updateSelectedFields"][] = "yamaguchi-ken";
$tdataEoc_monthly_reports_by_prefectures[".updateSelectedFields"][] = "tokushima-ken";
$tdataEoc_monthly_reports_by_prefectures[".updateSelectedFields"][] = "kagawa-ken";
$tdataEoc_monthly_reports_by_prefectures[".updateSelectedFields"][] = "ehime-ken";
$tdataEoc_monthly_reports_by_prefectures[".updateSelectedFields"][] = "kochi-ken";
$tdataEoc_monthly_reports_by_prefectures[".updateSelectedFields"][] = "fukuoka-ken";
$tdataEoc_monthly_reports_by_prefectures[".updateSelectedFields"][] = "saga-ken";
$tdataEoc_monthly_reports_by_prefectures[".updateSelectedFields"][] = "nagasaki-ken";
$tdataEoc_monthly_reports_by_prefectures[".updateSelectedFields"][] = "kumamoto-ken";
$tdataEoc_monthly_reports_by_prefectures[".updateSelectedFields"][] = "oita-ken";
$tdataEoc_monthly_reports_by_prefectures[".updateSelectedFields"][] = "miyazaki-ken";
$tdataEoc_monthly_reports_by_prefectures[".updateSelectedFields"][] = "kagoshima-ken";
$tdataEoc_monthly_reports_by_prefectures[".updateSelectedFields"][] = "okinawa-ken";
$tdataEoc_monthly_reports_by_prefectures[".updateSelectedFields"][] = "created_at";
$tdataEoc_monthly_reports_by_prefectures[".updateSelectedFields"][] = "updated_at";


$tdataEoc_monthly_reports_by_prefectures[".exportFields"] = array();
$tdataEoc_monthly_reports_by_prefectures[".exportFields"][] = "id";
$tdataEoc_monthly_reports_by_prefectures[".exportFields"][] = "EocMonthlyReport_id";
$tdataEoc_monthly_reports_by_prefectures[".exportFields"][] = "hokkai-dou";
$tdataEoc_monthly_reports_by_prefectures[".exportFields"][] = "aomori-ken";
$tdataEoc_monthly_reports_by_prefectures[".exportFields"][] = "iwate-ken";
$tdataEoc_monthly_reports_by_prefectures[".exportFields"][] = "miyagi-ken";
$tdataEoc_monthly_reports_by_prefectures[".exportFields"][] = "akita-ken";
$tdataEoc_monthly_reports_by_prefectures[".exportFields"][] = "yamagata-ken";
$tdataEoc_monthly_reports_by_prefectures[".exportFields"][] = "fukushima-ken";
$tdataEoc_monthly_reports_by_prefectures[".exportFields"][] = "ibaraki-ken";
$tdataEoc_monthly_reports_by_prefectures[".exportFields"][] = "tochigi-ken";
$tdataEoc_monthly_reports_by_prefectures[".exportFields"][] = "gunma-ken";
$tdataEoc_monthly_reports_by_prefectures[".exportFields"][] = "saitama-ken";
$tdataEoc_monthly_reports_by_prefectures[".exportFields"][] = "chiba-ken";
$tdataEoc_monthly_reports_by_prefectures[".exportFields"][] = "tokyo-ken";
$tdataEoc_monthly_reports_by_prefectures[".exportFields"][] = "kanagawa-ken";
$tdataEoc_monthly_reports_by_prefectures[".exportFields"][] = "niigata-ken";
$tdataEoc_monthly_reports_by_prefectures[".exportFields"][] = "toyama-ken";
$tdataEoc_monthly_reports_by_prefectures[".exportFields"][] = "ishikawa-ken";
$tdataEoc_monthly_reports_by_prefectures[".exportFields"][] = "fukui-ken";
$tdataEoc_monthly_reports_by_prefectures[".exportFields"][] = "yamanashi-ken";
$tdataEoc_monthly_reports_by_prefectures[".exportFields"][] = "nagano-ken";
$tdataEoc_monthly_reports_by_prefectures[".exportFields"][] = "gifu-ken";
$tdataEoc_monthly_reports_by_prefectures[".exportFields"][] = "shizuoka-ken";
$tdataEoc_monthly_reports_by_prefectures[".exportFields"][] = "aichi-ken";
$tdataEoc_monthly_reports_by_prefectures[".exportFields"][] = "mie-ken";
$tdataEoc_monthly_reports_by_prefectures[".exportFields"][] = "shiga-ken";
$tdataEoc_monthly_reports_by_prefectures[".exportFields"][] = "kyoto-fu";
$tdataEoc_monthly_reports_by_prefectures[".exportFields"][] = "osaka-fu";
$tdataEoc_monthly_reports_by_prefectures[".exportFields"][] = "hyogo-ken";
$tdataEoc_monthly_reports_by_prefectures[".exportFields"][] = "nara-ken";
$tdataEoc_monthly_reports_by_prefectures[".exportFields"][] = "wakayama-ken";
$tdataEoc_monthly_reports_by_prefectures[".exportFields"][] = "tottori-ken";
$tdataEoc_monthly_reports_by_prefectures[".exportFields"][] = "shimane-ken";
$tdataEoc_monthly_reports_by_prefectures[".exportFields"][] = "okayama-ken";
$tdataEoc_monthly_reports_by_prefectures[".exportFields"][] = "hiroshima-ken";
$tdataEoc_monthly_reports_by_prefectures[".exportFields"][] = "yamaguchi-ken";
$tdataEoc_monthly_reports_by_prefectures[".exportFields"][] = "tokushima-ken";
$tdataEoc_monthly_reports_by_prefectures[".exportFields"][] = "kagawa-ken";
$tdataEoc_monthly_reports_by_prefectures[".exportFields"][] = "ehime-ken";
$tdataEoc_monthly_reports_by_prefectures[".exportFields"][] = "kochi-ken";
$tdataEoc_monthly_reports_by_prefectures[".exportFields"][] = "fukuoka-ken";
$tdataEoc_monthly_reports_by_prefectures[".exportFields"][] = "saga-ken";
$tdataEoc_monthly_reports_by_prefectures[".exportFields"][] = "nagasaki-ken";
$tdataEoc_monthly_reports_by_prefectures[".exportFields"][] = "kumamoto-ken";
$tdataEoc_monthly_reports_by_prefectures[".exportFields"][] = "oita-ken";
$tdataEoc_monthly_reports_by_prefectures[".exportFields"][] = "miyazaki-ken";
$tdataEoc_monthly_reports_by_prefectures[".exportFields"][] = "kagoshima-ken";
$tdataEoc_monthly_reports_by_prefectures[".exportFields"][] = "okinawa-ken";
$tdataEoc_monthly_reports_by_prefectures[".exportFields"][] = "created_at";
$tdataEoc_monthly_reports_by_prefectures[".exportFields"][] = "updated_at";

$tdataEoc_monthly_reports_by_prefectures[".importFields"] = array();
$tdataEoc_monthly_reports_by_prefectures[".importFields"][] = "id";
$tdataEoc_monthly_reports_by_prefectures[".importFields"][] = "EocMonthlyReport_id";
$tdataEoc_monthly_reports_by_prefectures[".importFields"][] = "hokkai-dou";
$tdataEoc_monthly_reports_by_prefectures[".importFields"][] = "aomori-ken";
$tdataEoc_monthly_reports_by_prefectures[".importFields"][] = "iwate-ken";
$tdataEoc_monthly_reports_by_prefectures[".importFields"][] = "miyagi-ken";
$tdataEoc_monthly_reports_by_prefectures[".importFields"][] = "akita-ken";
$tdataEoc_monthly_reports_by_prefectures[".importFields"][] = "yamagata-ken";
$tdataEoc_monthly_reports_by_prefectures[".importFields"][] = "fukushima-ken";
$tdataEoc_monthly_reports_by_prefectures[".importFields"][] = "ibaraki-ken";
$tdataEoc_monthly_reports_by_prefectures[".importFields"][] = "tochigi-ken";
$tdataEoc_monthly_reports_by_prefectures[".importFields"][] = "gunma-ken";
$tdataEoc_monthly_reports_by_prefectures[".importFields"][] = "saitama-ken";
$tdataEoc_monthly_reports_by_prefectures[".importFields"][] = "chiba-ken";
$tdataEoc_monthly_reports_by_prefectures[".importFields"][] = "tokyo-ken";
$tdataEoc_monthly_reports_by_prefectures[".importFields"][] = "kanagawa-ken";
$tdataEoc_monthly_reports_by_prefectures[".importFields"][] = "niigata-ken";
$tdataEoc_monthly_reports_by_prefectures[".importFields"][] = "toyama-ken";
$tdataEoc_monthly_reports_by_prefectures[".importFields"][] = "ishikawa-ken";
$tdataEoc_monthly_reports_by_prefectures[".importFields"][] = "fukui-ken";
$tdataEoc_monthly_reports_by_prefectures[".importFields"][] = "yamanashi-ken";
$tdataEoc_monthly_reports_by_prefectures[".importFields"][] = "nagano-ken";
$tdataEoc_monthly_reports_by_prefectures[".importFields"][] = "gifu-ken";
$tdataEoc_monthly_reports_by_prefectures[".importFields"][] = "shizuoka-ken";
$tdataEoc_monthly_reports_by_prefectures[".importFields"][] = "aichi-ken";
$tdataEoc_monthly_reports_by_prefectures[".importFields"][] = "mie-ken";
$tdataEoc_monthly_reports_by_prefectures[".importFields"][] = "shiga-ken";
$tdataEoc_monthly_reports_by_prefectures[".importFields"][] = "kyoto-fu";
$tdataEoc_monthly_reports_by_prefectures[".importFields"][] = "osaka-fu";
$tdataEoc_monthly_reports_by_prefectures[".importFields"][] = "hyogo-ken";
$tdataEoc_monthly_reports_by_prefectures[".importFields"][] = "nara-ken";
$tdataEoc_monthly_reports_by_prefectures[".importFields"][] = "wakayama-ken";
$tdataEoc_monthly_reports_by_prefectures[".importFields"][] = "tottori-ken";
$tdataEoc_monthly_reports_by_prefectures[".importFields"][] = "shimane-ken";
$tdataEoc_monthly_reports_by_prefectures[".importFields"][] = "okayama-ken";
$tdataEoc_monthly_reports_by_prefectures[".importFields"][] = "hiroshima-ken";
$tdataEoc_monthly_reports_by_prefectures[".importFields"][] = "yamaguchi-ken";
$tdataEoc_monthly_reports_by_prefectures[".importFields"][] = "tokushima-ken";
$tdataEoc_monthly_reports_by_prefectures[".importFields"][] = "kagawa-ken";
$tdataEoc_monthly_reports_by_prefectures[".importFields"][] = "ehime-ken";
$tdataEoc_monthly_reports_by_prefectures[".importFields"][] = "kochi-ken";
$tdataEoc_monthly_reports_by_prefectures[".importFields"][] = "fukuoka-ken";
$tdataEoc_monthly_reports_by_prefectures[".importFields"][] = "saga-ken";
$tdataEoc_monthly_reports_by_prefectures[".importFields"][] = "nagasaki-ken";
$tdataEoc_monthly_reports_by_prefectures[".importFields"][] = "kumamoto-ken";
$tdataEoc_monthly_reports_by_prefectures[".importFields"][] = "oita-ken";
$tdataEoc_monthly_reports_by_prefectures[".importFields"][] = "miyazaki-ken";
$tdataEoc_monthly_reports_by_prefectures[".importFields"][] = "kagoshima-ken";
$tdataEoc_monthly_reports_by_prefectures[".importFields"][] = "okinawa-ken";
$tdataEoc_monthly_reports_by_prefectures[".importFields"][] = "created_at";
$tdataEoc_monthly_reports_by_prefectures[".importFields"][] = "updated_at";

$tdataEoc_monthly_reports_by_prefectures[".printFields"] = array();
$tdataEoc_monthly_reports_by_prefectures[".printFields"][] = "id";
$tdataEoc_monthly_reports_by_prefectures[".printFields"][] = "EocMonthlyReport_id";
$tdataEoc_monthly_reports_by_prefectures[".printFields"][] = "hokkai-dou";
$tdataEoc_monthly_reports_by_prefectures[".printFields"][] = "aomori-ken";
$tdataEoc_monthly_reports_by_prefectures[".printFields"][] = "iwate-ken";
$tdataEoc_monthly_reports_by_prefectures[".printFields"][] = "miyagi-ken";
$tdataEoc_monthly_reports_by_prefectures[".printFields"][] = "akita-ken";
$tdataEoc_monthly_reports_by_prefectures[".printFields"][] = "yamagata-ken";
$tdataEoc_monthly_reports_by_prefectures[".printFields"][] = "fukushima-ken";
$tdataEoc_monthly_reports_by_prefectures[".printFields"][] = "ibaraki-ken";
$tdataEoc_monthly_reports_by_prefectures[".printFields"][] = "tochigi-ken";
$tdataEoc_monthly_reports_by_prefectures[".printFields"][] = "gunma-ken";
$tdataEoc_monthly_reports_by_prefectures[".printFields"][] = "saitama-ken";
$tdataEoc_monthly_reports_by_prefectures[".printFields"][] = "chiba-ken";
$tdataEoc_monthly_reports_by_prefectures[".printFields"][] = "tokyo-ken";
$tdataEoc_monthly_reports_by_prefectures[".printFields"][] = "kanagawa-ken";
$tdataEoc_monthly_reports_by_prefectures[".printFields"][] = "niigata-ken";
$tdataEoc_monthly_reports_by_prefectures[".printFields"][] = "toyama-ken";
$tdataEoc_monthly_reports_by_prefectures[".printFields"][] = "ishikawa-ken";
$tdataEoc_monthly_reports_by_prefectures[".printFields"][] = "fukui-ken";
$tdataEoc_monthly_reports_by_prefectures[".printFields"][] = "yamanashi-ken";
$tdataEoc_monthly_reports_by_prefectures[".printFields"][] = "nagano-ken";
$tdataEoc_monthly_reports_by_prefectures[".printFields"][] = "gifu-ken";
$tdataEoc_monthly_reports_by_prefectures[".printFields"][] = "shizuoka-ken";
$tdataEoc_monthly_reports_by_prefectures[".printFields"][] = "aichi-ken";
$tdataEoc_monthly_reports_by_prefectures[".printFields"][] = "mie-ken";
$tdataEoc_monthly_reports_by_prefectures[".printFields"][] = "shiga-ken";
$tdataEoc_monthly_reports_by_prefectures[".printFields"][] = "kyoto-fu";
$tdataEoc_monthly_reports_by_prefectures[".printFields"][] = "osaka-fu";
$tdataEoc_monthly_reports_by_prefectures[".printFields"][] = "hyogo-ken";
$tdataEoc_monthly_reports_by_prefectures[".printFields"][] = "nara-ken";
$tdataEoc_monthly_reports_by_prefectures[".printFields"][] = "wakayama-ken";
$tdataEoc_monthly_reports_by_prefectures[".printFields"][] = "tottori-ken";
$tdataEoc_monthly_reports_by_prefectures[".printFields"][] = "shimane-ken";
$tdataEoc_monthly_reports_by_prefectures[".printFields"][] = "okayama-ken";
$tdataEoc_monthly_reports_by_prefectures[".printFields"][] = "hiroshima-ken";
$tdataEoc_monthly_reports_by_prefectures[".printFields"][] = "yamaguchi-ken";
$tdataEoc_monthly_reports_by_prefectures[".printFields"][] = "tokushima-ken";
$tdataEoc_monthly_reports_by_prefectures[".printFields"][] = "kagawa-ken";
$tdataEoc_monthly_reports_by_prefectures[".printFields"][] = "ehime-ken";
$tdataEoc_monthly_reports_by_prefectures[".printFields"][] = "kochi-ken";
$tdataEoc_monthly_reports_by_prefectures[".printFields"][] = "fukuoka-ken";
$tdataEoc_monthly_reports_by_prefectures[".printFields"][] = "saga-ken";
$tdataEoc_monthly_reports_by_prefectures[".printFields"][] = "nagasaki-ken";
$tdataEoc_monthly_reports_by_prefectures[".printFields"][] = "kumamoto-ken";
$tdataEoc_monthly_reports_by_prefectures[".printFields"][] = "oita-ken";
$tdataEoc_monthly_reports_by_prefectures[".printFields"][] = "miyazaki-ken";
$tdataEoc_monthly_reports_by_prefectures[".printFields"][] = "kagoshima-ken";
$tdataEoc_monthly_reports_by_prefectures[".printFields"][] = "okinawa-ken";
$tdataEoc_monthly_reports_by_prefectures[".printFields"][] = "created_at";
$tdataEoc_monthly_reports_by_prefectures[".printFields"][] = "updated_at";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "Eoc_monthly_reports_by_prefectures";
	$fdata["Label"] = GetFieldLabel("Eoc_monthly_reports_by_prefectures","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

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




	$tdataEoc_monthly_reports_by_prefectures["id"] = $fdata;
//	EocMonthlyReport_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "EocMonthlyReport_id";
	$fdata["GoodName"] = "EocMonthlyReport_id";
	$fdata["ownerTable"] = "Eoc_monthly_reports_by_prefectures";
	$fdata["Label"] = GetFieldLabel("Eoc_monthly_reports_by_prefectures","EocMonthlyReport_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "EocMonthlyReport_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`EocMonthlyReport_id`";

	
	
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




	$tdataEoc_monthly_reports_by_prefectures["EocMonthlyReport_id"] = $fdata;
//	hokkai-dou
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "hokkai-dou";
	$fdata["GoodName"] = "hokkai_dou";
	$fdata["ownerTable"] = "Eoc_monthly_reports_by_prefectures";
	$fdata["Label"] = GetFieldLabel("Eoc_monthly_reports_by_prefectures","hokkai_dou");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "hokkai-dou";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`hokkai-dou`";

	
	
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




	$tdataEoc_monthly_reports_by_prefectures["hokkai-dou"] = $fdata;
//	aomori-ken
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "aomori-ken";
	$fdata["GoodName"] = "aomori_ken";
	$fdata["ownerTable"] = "Eoc_monthly_reports_by_prefectures";
	$fdata["Label"] = GetFieldLabel("Eoc_monthly_reports_by_prefectures","aomori_ken");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "aomori-ken";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`aomori-ken`";

	
	
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




	$tdataEoc_monthly_reports_by_prefectures["aomori-ken"] = $fdata;
//	iwate-ken
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "iwate-ken";
	$fdata["GoodName"] = "iwate_ken";
	$fdata["ownerTable"] = "Eoc_monthly_reports_by_prefectures";
	$fdata["Label"] = GetFieldLabel("Eoc_monthly_reports_by_prefectures","iwate_ken");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "iwate-ken";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`iwate-ken`";

	
	
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




	$tdataEoc_monthly_reports_by_prefectures["iwate-ken"] = $fdata;
//	miyagi-ken
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "miyagi-ken";
	$fdata["GoodName"] = "miyagi_ken";
	$fdata["ownerTable"] = "Eoc_monthly_reports_by_prefectures";
	$fdata["Label"] = GetFieldLabel("Eoc_monthly_reports_by_prefectures","miyagi_ken");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "miyagi-ken";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`miyagi-ken`";

	
	
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




	$tdataEoc_monthly_reports_by_prefectures["miyagi-ken"] = $fdata;
//	akita-ken
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "akita-ken";
	$fdata["GoodName"] = "akita_ken";
	$fdata["ownerTable"] = "Eoc_monthly_reports_by_prefectures";
	$fdata["Label"] = GetFieldLabel("Eoc_monthly_reports_by_prefectures","akita_ken");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "akita-ken";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`akita-ken`";

	
	
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




	$tdataEoc_monthly_reports_by_prefectures["akita-ken"] = $fdata;
//	yamagata-ken
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "yamagata-ken";
	$fdata["GoodName"] = "yamagata_ken";
	$fdata["ownerTable"] = "Eoc_monthly_reports_by_prefectures";
	$fdata["Label"] = GetFieldLabel("Eoc_monthly_reports_by_prefectures","yamagata_ken");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "yamagata-ken";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`yamagata-ken`";

	
	
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




	$tdataEoc_monthly_reports_by_prefectures["yamagata-ken"] = $fdata;
//	fukushima-ken
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "fukushima-ken";
	$fdata["GoodName"] = "fukushima_ken";
	$fdata["ownerTable"] = "Eoc_monthly_reports_by_prefectures";
	$fdata["Label"] = GetFieldLabel("Eoc_monthly_reports_by_prefectures","fukushima_ken");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "fukushima-ken";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`fukushima-ken`";

	
	
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




	$tdataEoc_monthly_reports_by_prefectures["fukushima-ken"] = $fdata;
//	ibaraki-ken
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "ibaraki-ken";
	$fdata["GoodName"] = "ibaraki_ken";
	$fdata["ownerTable"] = "Eoc_monthly_reports_by_prefectures";
	$fdata["Label"] = GetFieldLabel("Eoc_monthly_reports_by_prefectures","ibaraki_ken");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ibaraki-ken";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`ibaraki-ken`";

	
	
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




	$tdataEoc_monthly_reports_by_prefectures["ibaraki-ken"] = $fdata;
//	tochigi-ken
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "tochigi-ken";
	$fdata["GoodName"] = "tochigi_ken";
	$fdata["ownerTable"] = "Eoc_monthly_reports_by_prefectures";
	$fdata["Label"] = GetFieldLabel("Eoc_monthly_reports_by_prefectures","tochigi_ken");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "tochigi-ken";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`tochigi-ken`";

	
	
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




	$tdataEoc_monthly_reports_by_prefectures["tochigi-ken"] = $fdata;
//	gunma-ken
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "gunma-ken";
	$fdata["GoodName"] = "gunma_ken";
	$fdata["ownerTable"] = "Eoc_monthly_reports_by_prefectures";
	$fdata["Label"] = GetFieldLabel("Eoc_monthly_reports_by_prefectures","gunma_ken");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "gunma-ken";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`gunma-ken`";

	
	
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




	$tdataEoc_monthly_reports_by_prefectures["gunma-ken"] = $fdata;
//	saitama-ken
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "saitama-ken";
	$fdata["GoodName"] = "saitama_ken";
	$fdata["ownerTable"] = "Eoc_monthly_reports_by_prefectures";
	$fdata["Label"] = GetFieldLabel("Eoc_monthly_reports_by_prefectures","saitama_ken");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "saitama-ken";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`saitama-ken`";

	
	
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




	$tdataEoc_monthly_reports_by_prefectures["saitama-ken"] = $fdata;
//	chiba-ken
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "chiba-ken";
	$fdata["GoodName"] = "chiba_ken";
	$fdata["ownerTable"] = "Eoc_monthly_reports_by_prefectures";
	$fdata["Label"] = GetFieldLabel("Eoc_monthly_reports_by_prefectures","chiba_ken");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "chiba-ken";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`chiba-ken`";

	
	
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




	$tdataEoc_monthly_reports_by_prefectures["chiba-ken"] = $fdata;
//	tokyo-ken
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "tokyo-ken";
	$fdata["GoodName"] = "tokyo_ken";
	$fdata["ownerTable"] = "Eoc_monthly_reports_by_prefectures";
	$fdata["Label"] = GetFieldLabel("Eoc_monthly_reports_by_prefectures","tokyo_ken");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "tokyo-ken";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`tokyo-ken`";

	
	
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




	$tdataEoc_monthly_reports_by_prefectures["tokyo-ken"] = $fdata;
//	kanagawa-ken
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "kanagawa-ken";
	$fdata["GoodName"] = "kanagawa_ken";
	$fdata["ownerTable"] = "Eoc_monthly_reports_by_prefectures";
	$fdata["Label"] = GetFieldLabel("Eoc_monthly_reports_by_prefectures","kanagawa_ken");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "kanagawa-ken";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`kanagawa-ken`";

	
	
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




	$tdataEoc_monthly_reports_by_prefectures["kanagawa-ken"] = $fdata;
//	niigata-ken
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "niigata-ken";
	$fdata["GoodName"] = "niigata_ken";
	$fdata["ownerTable"] = "Eoc_monthly_reports_by_prefectures";
	$fdata["Label"] = GetFieldLabel("Eoc_monthly_reports_by_prefectures","niigata_ken");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "niigata-ken";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`niigata-ken`";

	
	
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




	$tdataEoc_monthly_reports_by_prefectures["niigata-ken"] = $fdata;
//	toyama-ken
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "toyama-ken";
	$fdata["GoodName"] = "toyama_ken";
	$fdata["ownerTable"] = "Eoc_monthly_reports_by_prefectures";
	$fdata["Label"] = GetFieldLabel("Eoc_monthly_reports_by_prefectures","toyama_ken");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "toyama-ken";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`toyama-ken`";

	
	
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




	$tdataEoc_monthly_reports_by_prefectures["toyama-ken"] = $fdata;
//	ishikawa-ken
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "ishikawa-ken";
	$fdata["GoodName"] = "ishikawa_ken";
	$fdata["ownerTable"] = "Eoc_monthly_reports_by_prefectures";
	$fdata["Label"] = GetFieldLabel("Eoc_monthly_reports_by_prefectures","ishikawa_ken");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ishikawa-ken";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`ishikawa-ken`";

	
	
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




	$tdataEoc_monthly_reports_by_prefectures["ishikawa-ken"] = $fdata;
//	fukui-ken
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "fukui-ken";
	$fdata["GoodName"] = "fukui_ken";
	$fdata["ownerTable"] = "Eoc_monthly_reports_by_prefectures";
	$fdata["Label"] = GetFieldLabel("Eoc_monthly_reports_by_prefectures","fukui_ken");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "fukui-ken";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`fukui-ken`";

	
	
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




	$tdataEoc_monthly_reports_by_prefectures["fukui-ken"] = $fdata;
//	yamanashi-ken
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "yamanashi-ken";
	$fdata["GoodName"] = "yamanashi_ken";
	$fdata["ownerTable"] = "Eoc_monthly_reports_by_prefectures";
	$fdata["Label"] = GetFieldLabel("Eoc_monthly_reports_by_prefectures","yamanashi_ken");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "yamanashi-ken";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`yamanashi-ken`";

	
	
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




	$tdataEoc_monthly_reports_by_prefectures["yamanashi-ken"] = $fdata;
//	nagano-ken
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "nagano-ken";
	$fdata["GoodName"] = "nagano_ken";
	$fdata["ownerTable"] = "Eoc_monthly_reports_by_prefectures";
	$fdata["Label"] = GetFieldLabel("Eoc_monthly_reports_by_prefectures","nagano_ken");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "nagano-ken";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`nagano-ken`";

	
	
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




	$tdataEoc_monthly_reports_by_prefectures["nagano-ken"] = $fdata;
//	gifu-ken
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "gifu-ken";
	$fdata["GoodName"] = "gifu_ken";
	$fdata["ownerTable"] = "Eoc_monthly_reports_by_prefectures";
	$fdata["Label"] = GetFieldLabel("Eoc_monthly_reports_by_prefectures","gifu_ken");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "gifu-ken";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`gifu-ken`";

	
	
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




	$tdataEoc_monthly_reports_by_prefectures["gifu-ken"] = $fdata;
//	shizuoka-ken
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "shizuoka-ken";
	$fdata["GoodName"] = "shizuoka_ken";
	$fdata["ownerTable"] = "Eoc_monthly_reports_by_prefectures";
	$fdata["Label"] = GetFieldLabel("Eoc_monthly_reports_by_prefectures","shizuoka_ken");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "shizuoka-ken";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shizuoka-ken`";

	
	
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




	$tdataEoc_monthly_reports_by_prefectures["shizuoka-ken"] = $fdata;
//	aichi-ken
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "aichi-ken";
	$fdata["GoodName"] = "aichi_ken";
	$fdata["ownerTable"] = "Eoc_monthly_reports_by_prefectures";
	$fdata["Label"] = GetFieldLabel("Eoc_monthly_reports_by_prefectures","aichi_ken");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "aichi-ken";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`aichi-ken`";

	
	
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




	$tdataEoc_monthly_reports_by_prefectures["aichi-ken"] = $fdata;
//	mie-ken
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "mie-ken";
	$fdata["GoodName"] = "mie_ken";
	$fdata["ownerTable"] = "Eoc_monthly_reports_by_prefectures";
	$fdata["Label"] = GetFieldLabel("Eoc_monthly_reports_by_prefectures","mie_ken");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "mie-ken";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mie-ken`";

	
	
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




	$tdataEoc_monthly_reports_by_prefectures["mie-ken"] = $fdata;
//	shiga-ken
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "shiga-ken";
	$fdata["GoodName"] = "shiga_ken";
	$fdata["ownerTable"] = "Eoc_monthly_reports_by_prefectures";
	$fdata["Label"] = GetFieldLabel("Eoc_monthly_reports_by_prefectures","shiga_ken");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "shiga-ken";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shiga-ken`";

	
	
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




	$tdataEoc_monthly_reports_by_prefectures["shiga-ken"] = $fdata;
//	kyoto-fu
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "kyoto-fu";
	$fdata["GoodName"] = "kyoto_fu";
	$fdata["ownerTable"] = "Eoc_monthly_reports_by_prefectures";
	$fdata["Label"] = GetFieldLabel("Eoc_monthly_reports_by_prefectures","kyoto_fu");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "kyoto-fu";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`kyoto-fu`";

	
	
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




	$tdataEoc_monthly_reports_by_prefectures["kyoto-fu"] = $fdata;
//	osaka-fu
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "osaka-fu";
	$fdata["GoodName"] = "osaka_fu";
	$fdata["ownerTable"] = "Eoc_monthly_reports_by_prefectures";
	$fdata["Label"] = GetFieldLabel("Eoc_monthly_reports_by_prefectures","osaka_fu");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "osaka-fu";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`osaka-fu`";

	
	
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




	$tdataEoc_monthly_reports_by_prefectures["osaka-fu"] = $fdata;
//	hyogo-ken
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "hyogo-ken";
	$fdata["GoodName"] = "hyogo_ken";
	$fdata["ownerTable"] = "Eoc_monthly_reports_by_prefectures";
	$fdata["Label"] = GetFieldLabel("Eoc_monthly_reports_by_prefectures","hyogo_ken");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "hyogo-ken";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`hyogo-ken`";

	
	
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




	$tdataEoc_monthly_reports_by_prefectures["hyogo-ken"] = $fdata;
//	nara-ken
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "nara-ken";
	$fdata["GoodName"] = "nara_ken";
	$fdata["ownerTable"] = "Eoc_monthly_reports_by_prefectures";
	$fdata["Label"] = GetFieldLabel("Eoc_monthly_reports_by_prefectures","nara_ken");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "nara-ken";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`nara-ken`";

	
	
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




	$tdataEoc_monthly_reports_by_prefectures["nara-ken"] = $fdata;
//	wakayama-ken
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "wakayama-ken";
	$fdata["GoodName"] = "wakayama_ken";
	$fdata["ownerTable"] = "Eoc_monthly_reports_by_prefectures";
	$fdata["Label"] = GetFieldLabel("Eoc_monthly_reports_by_prefectures","wakayama_ken");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "wakayama-ken";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`wakayama-ken`";

	
	
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




	$tdataEoc_monthly_reports_by_prefectures["wakayama-ken"] = $fdata;
//	tottori-ken
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "tottori-ken";
	$fdata["GoodName"] = "tottori_ken";
	$fdata["ownerTable"] = "Eoc_monthly_reports_by_prefectures";
	$fdata["Label"] = GetFieldLabel("Eoc_monthly_reports_by_prefectures","tottori_ken");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "tottori-ken";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`tottori-ken`";

	
	
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




	$tdataEoc_monthly_reports_by_prefectures["tottori-ken"] = $fdata;
//	shimane-ken
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "shimane-ken";
	$fdata["GoodName"] = "shimane_ken";
	$fdata["ownerTable"] = "Eoc_monthly_reports_by_prefectures";
	$fdata["Label"] = GetFieldLabel("Eoc_monthly_reports_by_prefectures","shimane_ken");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "shimane-ken";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shimane-ken`";

	
	
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




	$tdataEoc_monthly_reports_by_prefectures["shimane-ken"] = $fdata;
//	okayama-ken
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "okayama-ken";
	$fdata["GoodName"] = "okayama_ken";
	$fdata["ownerTable"] = "Eoc_monthly_reports_by_prefectures";
	$fdata["Label"] = GetFieldLabel("Eoc_monthly_reports_by_prefectures","okayama_ken");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "okayama-ken";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`okayama-ken`";

	
	
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




	$tdataEoc_monthly_reports_by_prefectures["okayama-ken"] = $fdata;
//	hiroshima-ken
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "hiroshima-ken";
	$fdata["GoodName"] = "hiroshima_ken";
	$fdata["ownerTable"] = "Eoc_monthly_reports_by_prefectures";
	$fdata["Label"] = GetFieldLabel("Eoc_monthly_reports_by_prefectures","hiroshima_ken");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "hiroshima-ken";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`hiroshima-ken`";

	
	
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




	$tdataEoc_monthly_reports_by_prefectures["hiroshima-ken"] = $fdata;
//	yamaguchi-ken
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "yamaguchi-ken";
	$fdata["GoodName"] = "yamaguchi_ken";
	$fdata["ownerTable"] = "Eoc_monthly_reports_by_prefectures";
	$fdata["Label"] = GetFieldLabel("Eoc_monthly_reports_by_prefectures","yamaguchi_ken");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "yamaguchi-ken";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`yamaguchi-ken`";

	
	
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




	$tdataEoc_monthly_reports_by_prefectures["yamaguchi-ken"] = $fdata;
//	tokushima-ken
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "tokushima-ken";
	$fdata["GoodName"] = "tokushima_ken";
	$fdata["ownerTable"] = "Eoc_monthly_reports_by_prefectures";
	$fdata["Label"] = GetFieldLabel("Eoc_monthly_reports_by_prefectures","tokushima_ken");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "tokushima-ken";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`tokushima-ken`";

	
	
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




	$tdataEoc_monthly_reports_by_prefectures["tokushima-ken"] = $fdata;
//	kagawa-ken
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "kagawa-ken";
	$fdata["GoodName"] = "kagawa_ken";
	$fdata["ownerTable"] = "Eoc_monthly_reports_by_prefectures";
	$fdata["Label"] = GetFieldLabel("Eoc_monthly_reports_by_prefectures","kagawa_ken");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "kagawa-ken";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`kagawa-ken`";

	
	
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




	$tdataEoc_monthly_reports_by_prefectures["kagawa-ken"] = $fdata;
//	ehime-ken
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "ehime-ken";
	$fdata["GoodName"] = "ehime_ken";
	$fdata["ownerTable"] = "Eoc_monthly_reports_by_prefectures";
	$fdata["Label"] = GetFieldLabel("Eoc_monthly_reports_by_prefectures","ehime_ken");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ehime-ken";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`ehime-ken`";

	
	
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




	$tdataEoc_monthly_reports_by_prefectures["ehime-ken"] = $fdata;
//	kochi-ken
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "kochi-ken";
	$fdata["GoodName"] = "kochi_ken";
	$fdata["ownerTable"] = "Eoc_monthly_reports_by_prefectures";
	$fdata["Label"] = GetFieldLabel("Eoc_monthly_reports_by_prefectures","kochi_ken");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "kochi-ken";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`kochi-ken`";

	
	
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




	$tdataEoc_monthly_reports_by_prefectures["kochi-ken"] = $fdata;
//	fukuoka-ken
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "fukuoka-ken";
	$fdata["GoodName"] = "fukuoka_ken";
	$fdata["ownerTable"] = "Eoc_monthly_reports_by_prefectures";
	$fdata["Label"] = GetFieldLabel("Eoc_monthly_reports_by_prefectures","fukuoka_ken");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "fukuoka-ken";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`fukuoka-ken`";

	
	
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




	$tdataEoc_monthly_reports_by_prefectures["fukuoka-ken"] = $fdata;
//	saga-ken
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "saga-ken";
	$fdata["GoodName"] = "saga_ken";
	$fdata["ownerTable"] = "Eoc_monthly_reports_by_prefectures";
	$fdata["Label"] = GetFieldLabel("Eoc_monthly_reports_by_prefectures","saga_ken");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "saga-ken";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`saga-ken`";

	
	
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




	$tdataEoc_monthly_reports_by_prefectures["saga-ken"] = $fdata;
//	nagasaki-ken
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "nagasaki-ken";
	$fdata["GoodName"] = "nagasaki_ken";
	$fdata["ownerTable"] = "Eoc_monthly_reports_by_prefectures";
	$fdata["Label"] = GetFieldLabel("Eoc_monthly_reports_by_prefectures","nagasaki_ken");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "nagasaki-ken";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`nagasaki-ken`";

	
	
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




	$tdataEoc_monthly_reports_by_prefectures["nagasaki-ken"] = $fdata;
//	kumamoto-ken
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "kumamoto-ken";
	$fdata["GoodName"] = "kumamoto_ken";
	$fdata["ownerTable"] = "Eoc_monthly_reports_by_prefectures";
	$fdata["Label"] = GetFieldLabel("Eoc_monthly_reports_by_prefectures","kumamoto_ken");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "kumamoto-ken";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`kumamoto-ken`";

	
	
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




	$tdataEoc_monthly_reports_by_prefectures["kumamoto-ken"] = $fdata;
//	oita-ken
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "oita-ken";
	$fdata["GoodName"] = "oita_ken";
	$fdata["ownerTable"] = "Eoc_monthly_reports_by_prefectures";
	$fdata["Label"] = GetFieldLabel("Eoc_monthly_reports_by_prefectures","oita_ken");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "oita-ken";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`oita-ken`";

	
	
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




	$tdataEoc_monthly_reports_by_prefectures["oita-ken"] = $fdata;
//	miyazaki-ken
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 47;
	$fdata["strName"] = "miyazaki-ken";
	$fdata["GoodName"] = "miyazaki_ken";
	$fdata["ownerTable"] = "Eoc_monthly_reports_by_prefectures";
	$fdata["Label"] = GetFieldLabel("Eoc_monthly_reports_by_prefectures","miyazaki_ken");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "miyazaki-ken";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`miyazaki-ken`";

	
	
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




	$tdataEoc_monthly_reports_by_prefectures["miyazaki-ken"] = $fdata;
//	kagoshima-ken
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 48;
	$fdata["strName"] = "kagoshima-ken";
	$fdata["GoodName"] = "kagoshima_ken";
	$fdata["ownerTable"] = "Eoc_monthly_reports_by_prefectures";
	$fdata["Label"] = GetFieldLabel("Eoc_monthly_reports_by_prefectures","kagoshima_ken");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "kagoshima-ken";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`kagoshima-ken`";

	
	
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




	$tdataEoc_monthly_reports_by_prefectures["kagoshima-ken"] = $fdata;
//	okinawa-ken
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 49;
	$fdata["strName"] = "okinawa-ken";
	$fdata["GoodName"] = "okinawa_ken";
	$fdata["ownerTable"] = "Eoc_monthly_reports_by_prefectures";
	$fdata["Label"] = GetFieldLabel("Eoc_monthly_reports_by_prefectures","okinawa_ken");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "okinawa-ken";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`okinawa-ken`";

	
	
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




	$tdataEoc_monthly_reports_by_prefectures["okinawa-ken"] = $fdata;
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 50;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "Eoc_monthly_reports_by_prefectures";
	$fdata["Label"] = GetFieldLabel("Eoc_monthly_reports_by_prefectures","created_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

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




	$tdataEoc_monthly_reports_by_prefectures["created_at"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 51;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "Eoc_monthly_reports_by_prefectures";
	$fdata["Label"] = GetFieldLabel("Eoc_monthly_reports_by_prefectures","updated_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

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




	$tdataEoc_monthly_reports_by_prefectures["updated_at"] = $fdata;


$tables_data["Eoc_monthly_reports_by_prefectures"]=&$tdataEoc_monthly_reports_by_prefectures;
$field_labels["Eoc_monthly_reports_by_prefectures"] = &$fieldLabelsEoc_monthly_reports_by_prefectures;
$fieldToolTips["Eoc_monthly_reports_by_prefectures"] = &$fieldToolTipsEoc_monthly_reports_by_prefectures;
$placeHolders["Eoc_monthly_reports_by_prefectures"] = &$placeHoldersEoc_monthly_reports_by_prefectures;
$page_titles["Eoc_monthly_reports_by_prefectures"] = &$pageTitlesEoc_monthly_reports_by_prefectures;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Eoc_monthly_reports_by_prefectures"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["Eoc_monthly_reports_by_prefectures"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Eoc_monthly_reports_by_prefectures()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  	`EocMonthlyReport_id`,  	`hokkai-dou`,  	`aomori-ken`,  	`iwate-ken`,  	`miyagi-ken`,  	`akita-ken`,  	`yamagata-ken`,  	`fukushima-ken`,  	`ibaraki-ken`,  	`tochigi-ken`,  	`gunma-ken`,  	`saitama-ken`,  	`chiba-ken`,  	`tokyo-ken`,  	`kanagawa-ken`,  	`niigata-ken`,  	`toyama-ken`,  	`ishikawa-ken`,  	`fukui-ken`,  	`yamanashi-ken`,  	`nagano-ken`,  	`gifu-ken`,  	`shizuoka-ken`,  	`aichi-ken`,  	`mie-ken`,  	`shiga-ken`,  	`kyoto-fu`,  	`osaka-fu`,  	`hyogo-ken`,  	`nara-ken`,  	`wakayama-ken`,  	`tottori-ken`,  	`shimane-ken`,  	`okayama-ken`,  	`hiroshima-ken`,  	`yamaguchi-ken`,  	`tokushima-ken`,  	`kagawa-ken`,  	`ehime-ken`,  	`kochi-ken`,  	`fukuoka-ken`,  	`saga-ken`,  	`nagasaki-ken`,  	`kumamoto-ken`,  	`oita-ken`,  	`miyazaki-ken`,  	`kagoshima-ken`,  	`okinawa-ken`,  	`created_at`,  	`updated_at`";
$proto0["m_strFrom"] = "FROM `Eoc_monthly_reports_by_prefectures`";
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
	"m_strTable" => "Eoc_monthly_reports_by_prefectures",
	"m_srcTableName" => "Eoc_monthly_reports_by_prefectures"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "Eoc_monthly_reports_by_prefectures";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "EocMonthlyReport_id",
	"m_strTable" => "Eoc_monthly_reports_by_prefectures",
	"m_srcTableName" => "Eoc_monthly_reports_by_prefectures"
));

$proto8["m_sql"] = "`EocMonthlyReport_id`";
$proto8["m_srcTableName"] = "Eoc_monthly_reports_by_prefectures";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "hokkai-dou",
	"m_strTable" => "Eoc_monthly_reports_by_prefectures",
	"m_srcTableName" => "Eoc_monthly_reports_by_prefectures"
));

$proto10["m_sql"] = "`hokkai-dou`";
$proto10["m_srcTableName"] = "Eoc_monthly_reports_by_prefectures";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "aomori-ken",
	"m_strTable" => "Eoc_monthly_reports_by_prefectures",
	"m_srcTableName" => "Eoc_monthly_reports_by_prefectures"
));

$proto12["m_sql"] = "`aomori-ken`";
$proto12["m_srcTableName"] = "Eoc_monthly_reports_by_prefectures";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "iwate-ken",
	"m_strTable" => "Eoc_monthly_reports_by_prefectures",
	"m_srcTableName" => "Eoc_monthly_reports_by_prefectures"
));

$proto14["m_sql"] = "`iwate-ken`";
$proto14["m_srcTableName"] = "Eoc_monthly_reports_by_prefectures";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "miyagi-ken",
	"m_strTable" => "Eoc_monthly_reports_by_prefectures",
	"m_srcTableName" => "Eoc_monthly_reports_by_prefectures"
));

$proto16["m_sql"] = "`miyagi-ken`";
$proto16["m_srcTableName"] = "Eoc_monthly_reports_by_prefectures";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "akita-ken",
	"m_strTable" => "Eoc_monthly_reports_by_prefectures",
	"m_srcTableName" => "Eoc_monthly_reports_by_prefectures"
));

$proto18["m_sql"] = "`akita-ken`";
$proto18["m_srcTableName"] = "Eoc_monthly_reports_by_prefectures";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "yamagata-ken",
	"m_strTable" => "Eoc_monthly_reports_by_prefectures",
	"m_srcTableName" => "Eoc_monthly_reports_by_prefectures"
));

$proto20["m_sql"] = "`yamagata-ken`";
$proto20["m_srcTableName"] = "Eoc_monthly_reports_by_prefectures";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "fukushima-ken",
	"m_strTable" => "Eoc_monthly_reports_by_prefectures",
	"m_srcTableName" => "Eoc_monthly_reports_by_prefectures"
));

$proto22["m_sql"] = "`fukushima-ken`";
$proto22["m_srcTableName"] = "Eoc_monthly_reports_by_prefectures";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "ibaraki-ken",
	"m_strTable" => "Eoc_monthly_reports_by_prefectures",
	"m_srcTableName" => "Eoc_monthly_reports_by_prefectures"
));

$proto24["m_sql"] = "`ibaraki-ken`";
$proto24["m_srcTableName"] = "Eoc_monthly_reports_by_prefectures";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "tochigi-ken",
	"m_strTable" => "Eoc_monthly_reports_by_prefectures",
	"m_srcTableName" => "Eoc_monthly_reports_by_prefectures"
));

$proto26["m_sql"] = "`tochigi-ken`";
$proto26["m_srcTableName"] = "Eoc_monthly_reports_by_prefectures";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "gunma-ken",
	"m_strTable" => "Eoc_monthly_reports_by_prefectures",
	"m_srcTableName" => "Eoc_monthly_reports_by_prefectures"
));

$proto28["m_sql"] = "`gunma-ken`";
$proto28["m_srcTableName"] = "Eoc_monthly_reports_by_prefectures";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "saitama-ken",
	"m_strTable" => "Eoc_monthly_reports_by_prefectures",
	"m_srcTableName" => "Eoc_monthly_reports_by_prefectures"
));

$proto30["m_sql"] = "`saitama-ken`";
$proto30["m_srcTableName"] = "Eoc_monthly_reports_by_prefectures";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "chiba-ken",
	"m_strTable" => "Eoc_monthly_reports_by_prefectures",
	"m_srcTableName" => "Eoc_monthly_reports_by_prefectures"
));

$proto32["m_sql"] = "`chiba-ken`";
$proto32["m_srcTableName"] = "Eoc_monthly_reports_by_prefectures";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "tokyo-ken",
	"m_strTable" => "Eoc_monthly_reports_by_prefectures",
	"m_srcTableName" => "Eoc_monthly_reports_by_prefectures"
));

$proto34["m_sql"] = "`tokyo-ken`";
$proto34["m_srcTableName"] = "Eoc_monthly_reports_by_prefectures";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "kanagawa-ken",
	"m_strTable" => "Eoc_monthly_reports_by_prefectures",
	"m_srcTableName" => "Eoc_monthly_reports_by_prefectures"
));

$proto36["m_sql"] = "`kanagawa-ken`";
$proto36["m_srcTableName"] = "Eoc_monthly_reports_by_prefectures";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "niigata-ken",
	"m_strTable" => "Eoc_monthly_reports_by_prefectures",
	"m_srcTableName" => "Eoc_monthly_reports_by_prefectures"
));

$proto38["m_sql"] = "`niigata-ken`";
$proto38["m_srcTableName"] = "Eoc_monthly_reports_by_prefectures";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "toyama-ken",
	"m_strTable" => "Eoc_monthly_reports_by_prefectures",
	"m_srcTableName" => "Eoc_monthly_reports_by_prefectures"
));

$proto40["m_sql"] = "`toyama-ken`";
$proto40["m_srcTableName"] = "Eoc_monthly_reports_by_prefectures";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "ishikawa-ken",
	"m_strTable" => "Eoc_monthly_reports_by_prefectures",
	"m_srcTableName" => "Eoc_monthly_reports_by_prefectures"
));

$proto42["m_sql"] = "`ishikawa-ken`";
$proto42["m_srcTableName"] = "Eoc_monthly_reports_by_prefectures";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "fukui-ken",
	"m_strTable" => "Eoc_monthly_reports_by_prefectures",
	"m_srcTableName" => "Eoc_monthly_reports_by_prefectures"
));

$proto44["m_sql"] = "`fukui-ken`";
$proto44["m_srcTableName"] = "Eoc_monthly_reports_by_prefectures";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "yamanashi-ken",
	"m_strTable" => "Eoc_monthly_reports_by_prefectures",
	"m_srcTableName" => "Eoc_monthly_reports_by_prefectures"
));

$proto46["m_sql"] = "`yamanashi-ken`";
$proto46["m_srcTableName"] = "Eoc_monthly_reports_by_prefectures";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "nagano-ken",
	"m_strTable" => "Eoc_monthly_reports_by_prefectures",
	"m_srcTableName" => "Eoc_monthly_reports_by_prefectures"
));

$proto48["m_sql"] = "`nagano-ken`";
$proto48["m_srcTableName"] = "Eoc_monthly_reports_by_prefectures";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "gifu-ken",
	"m_strTable" => "Eoc_monthly_reports_by_prefectures",
	"m_srcTableName" => "Eoc_monthly_reports_by_prefectures"
));

$proto50["m_sql"] = "`gifu-ken`";
$proto50["m_srcTableName"] = "Eoc_monthly_reports_by_prefectures";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "shizuoka-ken",
	"m_strTable" => "Eoc_monthly_reports_by_prefectures",
	"m_srcTableName" => "Eoc_monthly_reports_by_prefectures"
));

$proto52["m_sql"] = "`shizuoka-ken`";
$proto52["m_srcTableName"] = "Eoc_monthly_reports_by_prefectures";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "aichi-ken",
	"m_strTable" => "Eoc_monthly_reports_by_prefectures",
	"m_srcTableName" => "Eoc_monthly_reports_by_prefectures"
));

$proto54["m_sql"] = "`aichi-ken`";
$proto54["m_srcTableName"] = "Eoc_monthly_reports_by_prefectures";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "mie-ken",
	"m_strTable" => "Eoc_monthly_reports_by_prefectures",
	"m_srcTableName" => "Eoc_monthly_reports_by_prefectures"
));

$proto56["m_sql"] = "`mie-ken`";
$proto56["m_srcTableName"] = "Eoc_monthly_reports_by_prefectures";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "shiga-ken",
	"m_strTable" => "Eoc_monthly_reports_by_prefectures",
	"m_srcTableName" => "Eoc_monthly_reports_by_prefectures"
));

$proto58["m_sql"] = "`shiga-ken`";
$proto58["m_srcTableName"] = "Eoc_monthly_reports_by_prefectures";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "kyoto-fu",
	"m_strTable" => "Eoc_monthly_reports_by_prefectures",
	"m_srcTableName" => "Eoc_monthly_reports_by_prefectures"
));

$proto60["m_sql"] = "`kyoto-fu`";
$proto60["m_srcTableName"] = "Eoc_monthly_reports_by_prefectures";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "osaka-fu",
	"m_strTable" => "Eoc_monthly_reports_by_prefectures",
	"m_srcTableName" => "Eoc_monthly_reports_by_prefectures"
));

$proto62["m_sql"] = "`osaka-fu`";
$proto62["m_srcTableName"] = "Eoc_monthly_reports_by_prefectures";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "hyogo-ken",
	"m_strTable" => "Eoc_monthly_reports_by_prefectures",
	"m_srcTableName" => "Eoc_monthly_reports_by_prefectures"
));

$proto64["m_sql"] = "`hyogo-ken`";
$proto64["m_srcTableName"] = "Eoc_monthly_reports_by_prefectures";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "nara-ken",
	"m_strTable" => "Eoc_monthly_reports_by_prefectures",
	"m_srcTableName" => "Eoc_monthly_reports_by_prefectures"
));

$proto66["m_sql"] = "`nara-ken`";
$proto66["m_srcTableName"] = "Eoc_monthly_reports_by_prefectures";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "wakayama-ken",
	"m_strTable" => "Eoc_monthly_reports_by_prefectures",
	"m_srcTableName" => "Eoc_monthly_reports_by_prefectures"
));

$proto68["m_sql"] = "`wakayama-ken`";
$proto68["m_srcTableName"] = "Eoc_monthly_reports_by_prefectures";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "tottori-ken",
	"m_strTable" => "Eoc_monthly_reports_by_prefectures",
	"m_srcTableName" => "Eoc_monthly_reports_by_prefectures"
));

$proto70["m_sql"] = "`tottori-ken`";
$proto70["m_srcTableName"] = "Eoc_monthly_reports_by_prefectures";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "shimane-ken",
	"m_strTable" => "Eoc_monthly_reports_by_prefectures",
	"m_srcTableName" => "Eoc_monthly_reports_by_prefectures"
));

$proto72["m_sql"] = "`shimane-ken`";
$proto72["m_srcTableName"] = "Eoc_monthly_reports_by_prefectures";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "okayama-ken",
	"m_strTable" => "Eoc_monthly_reports_by_prefectures",
	"m_srcTableName" => "Eoc_monthly_reports_by_prefectures"
));

$proto74["m_sql"] = "`okayama-ken`";
$proto74["m_srcTableName"] = "Eoc_monthly_reports_by_prefectures";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "hiroshima-ken",
	"m_strTable" => "Eoc_monthly_reports_by_prefectures",
	"m_srcTableName" => "Eoc_monthly_reports_by_prefectures"
));

$proto76["m_sql"] = "`hiroshima-ken`";
$proto76["m_srcTableName"] = "Eoc_monthly_reports_by_prefectures";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "yamaguchi-ken",
	"m_strTable" => "Eoc_monthly_reports_by_prefectures",
	"m_srcTableName" => "Eoc_monthly_reports_by_prefectures"
));

$proto78["m_sql"] = "`yamaguchi-ken`";
$proto78["m_srcTableName"] = "Eoc_monthly_reports_by_prefectures";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "tokushima-ken",
	"m_strTable" => "Eoc_monthly_reports_by_prefectures",
	"m_srcTableName" => "Eoc_monthly_reports_by_prefectures"
));

$proto80["m_sql"] = "`tokushima-ken`";
$proto80["m_srcTableName"] = "Eoc_monthly_reports_by_prefectures";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "kagawa-ken",
	"m_strTable" => "Eoc_monthly_reports_by_prefectures",
	"m_srcTableName" => "Eoc_monthly_reports_by_prefectures"
));

$proto82["m_sql"] = "`kagawa-ken`";
$proto82["m_srcTableName"] = "Eoc_monthly_reports_by_prefectures";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "ehime-ken",
	"m_strTable" => "Eoc_monthly_reports_by_prefectures",
	"m_srcTableName" => "Eoc_monthly_reports_by_prefectures"
));

$proto84["m_sql"] = "`ehime-ken`";
$proto84["m_srcTableName"] = "Eoc_monthly_reports_by_prefectures";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "kochi-ken",
	"m_strTable" => "Eoc_monthly_reports_by_prefectures",
	"m_srcTableName" => "Eoc_monthly_reports_by_prefectures"
));

$proto86["m_sql"] = "`kochi-ken`";
$proto86["m_srcTableName"] = "Eoc_monthly_reports_by_prefectures";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "fukuoka-ken",
	"m_strTable" => "Eoc_monthly_reports_by_prefectures",
	"m_srcTableName" => "Eoc_monthly_reports_by_prefectures"
));

$proto88["m_sql"] = "`fukuoka-ken`";
$proto88["m_srcTableName"] = "Eoc_monthly_reports_by_prefectures";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "saga-ken",
	"m_strTable" => "Eoc_monthly_reports_by_prefectures",
	"m_srcTableName" => "Eoc_monthly_reports_by_prefectures"
));

$proto90["m_sql"] = "`saga-ken`";
$proto90["m_srcTableName"] = "Eoc_monthly_reports_by_prefectures";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLField(array(
	"m_strName" => "nagasaki-ken",
	"m_strTable" => "Eoc_monthly_reports_by_prefectures",
	"m_srcTableName" => "Eoc_monthly_reports_by_prefectures"
));

$proto92["m_sql"] = "`nagasaki-ken`";
$proto92["m_srcTableName"] = "Eoc_monthly_reports_by_prefectures";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "";
$obj = new SQLFieldListItem($proto92);

$proto0["m_fieldlist"][]=$obj;
						$proto94=array();
			$obj = new SQLField(array(
	"m_strName" => "kumamoto-ken",
	"m_strTable" => "Eoc_monthly_reports_by_prefectures",
	"m_srcTableName" => "Eoc_monthly_reports_by_prefectures"
));

$proto94["m_sql"] = "`kumamoto-ken`";
$proto94["m_srcTableName"] = "Eoc_monthly_reports_by_prefectures";
$proto94["m_expr"]=$obj;
$proto94["m_alias"] = "";
$obj = new SQLFieldListItem($proto94);

$proto0["m_fieldlist"][]=$obj;
						$proto96=array();
			$obj = new SQLField(array(
	"m_strName" => "oita-ken",
	"m_strTable" => "Eoc_monthly_reports_by_prefectures",
	"m_srcTableName" => "Eoc_monthly_reports_by_prefectures"
));

$proto96["m_sql"] = "`oita-ken`";
$proto96["m_srcTableName"] = "Eoc_monthly_reports_by_prefectures";
$proto96["m_expr"]=$obj;
$proto96["m_alias"] = "";
$obj = new SQLFieldListItem($proto96);

$proto0["m_fieldlist"][]=$obj;
						$proto98=array();
			$obj = new SQLField(array(
	"m_strName" => "miyazaki-ken",
	"m_strTable" => "Eoc_monthly_reports_by_prefectures",
	"m_srcTableName" => "Eoc_monthly_reports_by_prefectures"
));

$proto98["m_sql"] = "`miyazaki-ken`";
$proto98["m_srcTableName"] = "Eoc_monthly_reports_by_prefectures";
$proto98["m_expr"]=$obj;
$proto98["m_alias"] = "";
$obj = new SQLFieldListItem($proto98);

$proto0["m_fieldlist"][]=$obj;
						$proto100=array();
			$obj = new SQLField(array(
	"m_strName" => "kagoshima-ken",
	"m_strTable" => "Eoc_monthly_reports_by_prefectures",
	"m_srcTableName" => "Eoc_monthly_reports_by_prefectures"
));

$proto100["m_sql"] = "`kagoshima-ken`";
$proto100["m_srcTableName"] = "Eoc_monthly_reports_by_prefectures";
$proto100["m_expr"]=$obj;
$proto100["m_alias"] = "";
$obj = new SQLFieldListItem($proto100);

$proto0["m_fieldlist"][]=$obj;
						$proto102=array();
			$obj = new SQLField(array(
	"m_strName" => "okinawa-ken",
	"m_strTable" => "Eoc_monthly_reports_by_prefectures",
	"m_srcTableName" => "Eoc_monthly_reports_by_prefectures"
));

$proto102["m_sql"] = "`okinawa-ken`";
$proto102["m_srcTableName"] = "Eoc_monthly_reports_by_prefectures";
$proto102["m_expr"]=$obj;
$proto102["m_alias"] = "";
$obj = new SQLFieldListItem($proto102);

$proto0["m_fieldlist"][]=$obj;
						$proto104=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "Eoc_monthly_reports_by_prefectures",
	"m_srcTableName" => "Eoc_monthly_reports_by_prefectures"
));

$proto104["m_sql"] = "`created_at`";
$proto104["m_srcTableName"] = "Eoc_monthly_reports_by_prefectures";
$proto104["m_expr"]=$obj;
$proto104["m_alias"] = "";
$obj = new SQLFieldListItem($proto104);

$proto0["m_fieldlist"][]=$obj;
						$proto106=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "Eoc_monthly_reports_by_prefectures",
	"m_srcTableName" => "Eoc_monthly_reports_by_prefectures"
));

$proto106["m_sql"] = "`updated_at`";
$proto106["m_srcTableName"] = "Eoc_monthly_reports_by_prefectures";
$proto106["m_expr"]=$obj;
$proto106["m_alias"] = "";
$obj = new SQLFieldListItem($proto106);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto108=array();
$proto108["m_link"] = "SQLL_MAIN";
			$proto109=array();
$proto109["m_strName"] = "Eoc_monthly_reports_by_prefectures";
$proto109["m_srcTableName"] = "Eoc_monthly_reports_by_prefectures";
$proto109["m_columns"] = array();
$proto109["m_columns"][] = "id";
$proto109["m_columns"][] = "EocMonthlyReport_id";
$proto109["m_columns"][] = "hokkai-dou";
$proto109["m_columns"][] = "aomori-ken";
$proto109["m_columns"][] = "iwate-ken";
$proto109["m_columns"][] = "miyagi-ken";
$proto109["m_columns"][] = "akita-ken";
$proto109["m_columns"][] = "yamagata-ken";
$proto109["m_columns"][] = "fukushima-ken";
$proto109["m_columns"][] = "ibaraki-ken";
$proto109["m_columns"][] = "tochigi-ken";
$proto109["m_columns"][] = "gunma-ken";
$proto109["m_columns"][] = "saitama-ken";
$proto109["m_columns"][] = "chiba-ken";
$proto109["m_columns"][] = "tokyo-ken";
$proto109["m_columns"][] = "kanagawa-ken";
$proto109["m_columns"][] = "niigata-ken";
$proto109["m_columns"][] = "toyama-ken";
$proto109["m_columns"][] = "ishikawa-ken";
$proto109["m_columns"][] = "fukui-ken";
$proto109["m_columns"][] = "yamanashi-ken";
$proto109["m_columns"][] = "nagano-ken";
$proto109["m_columns"][] = "gifu-ken";
$proto109["m_columns"][] = "shizuoka-ken";
$proto109["m_columns"][] = "aichi-ken";
$proto109["m_columns"][] = "mie-ken";
$proto109["m_columns"][] = "shiga-ken";
$proto109["m_columns"][] = "kyoto-fu";
$proto109["m_columns"][] = "osaka-fu";
$proto109["m_columns"][] = "hyogo-ken";
$proto109["m_columns"][] = "nara-ken";
$proto109["m_columns"][] = "wakayama-ken";
$proto109["m_columns"][] = "tottori-ken";
$proto109["m_columns"][] = "shimane-ken";
$proto109["m_columns"][] = "okayama-ken";
$proto109["m_columns"][] = "hiroshima-ken";
$proto109["m_columns"][] = "yamaguchi-ken";
$proto109["m_columns"][] = "tokushima-ken";
$proto109["m_columns"][] = "kagawa-ken";
$proto109["m_columns"][] = "ehime-ken";
$proto109["m_columns"][] = "kochi-ken";
$proto109["m_columns"][] = "fukuoka-ken";
$proto109["m_columns"][] = "saga-ken";
$proto109["m_columns"][] = "nagasaki-ken";
$proto109["m_columns"][] = "kumamoto-ken";
$proto109["m_columns"][] = "oita-ken";
$proto109["m_columns"][] = "miyazaki-ken";
$proto109["m_columns"][] = "kagoshima-ken";
$proto109["m_columns"][] = "okinawa-ken";
$proto109["m_columns"][] = "created_at";
$proto109["m_columns"][] = "updated_at";
$obj = new SQLTable($proto109);

$proto108["m_table"] = $obj;
$proto108["m_sql"] = "`Eoc_monthly_reports_by_prefectures`";
$proto108["m_alias"] = "";
$proto108["m_srcTableName"] = "Eoc_monthly_reports_by_prefectures";
$proto110=array();
$proto110["m_sql"] = "";
$proto110["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto110["m_column"]=$obj;
$proto110["m_contained"] = array();
$proto110["m_strCase"] = "";
$proto110["m_havingmode"] = false;
$proto110["m_inBrackets"] = false;
$proto110["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto110);

$proto108["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto108);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Eoc_monthly_reports_by_prefectures";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Eoc_monthly_reports_by_prefectures = createSqlQuery_Eoc_monthly_reports_by_prefectures();


	
		;

																																																			

$tdataEoc_monthly_reports_by_prefectures[".sqlquery"] = $queryData_Eoc_monthly_reports_by_prefectures;

$tableEvents["Eoc_monthly_reports_by_prefectures"] = new eventsBase;
$tdataEoc_monthly_reports_by_prefectures[".hasEvents"] = false;

?>