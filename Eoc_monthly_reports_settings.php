<?php
require_once(getabspath("classes/cipherer.php"));




$tdataEoc_monthly_reports = array();
	$tdataEoc_monthly_reports[".truncateText"] = true;
	$tdataEoc_monthly_reports[".NumberOfChars"] = 80;
	$tdataEoc_monthly_reports[".ShortName"] = "Eoc_monthly_reports";
	$tdataEoc_monthly_reports[".OwnerID"] = "";
	$tdataEoc_monthly_reports[".OriginalTable"] = "Eoc_monthly_reports";

//	field labels
$fieldLabelsEoc_monthly_reports = array();
$fieldToolTipsEoc_monthly_reports = array();
$pageTitlesEoc_monthly_reports = array();
$placeHoldersEoc_monthly_reports = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsEoc_monthly_reports["Japanese"] = array();
	$fieldToolTipsEoc_monthly_reports["Japanese"] = array();
	$placeHoldersEoc_monthly_reports["Japanese"] = array();
	$pageTitlesEoc_monthly_reports["Japanese"] = array();
	$fieldLabelsEoc_monthly_reports["Japanese"]["id"] = "Id";
	$fieldToolTipsEoc_monthly_reports["Japanese"]["id"] = "";
	$placeHoldersEoc_monthly_reports["Japanese"]["id"] = "";
	$fieldLabelsEoc_monthly_reports["Japanese"]["male_count"] = "男性成約顧客数";
	$fieldToolTipsEoc_monthly_reports["Japanese"]["male_count"] = "";
	$placeHoldersEoc_monthly_reports["Japanese"]["male_count"] = "";
	$fieldLabelsEoc_monthly_reports["Japanese"]["female_count"] = "女性成約顧客数";
	$fieldToolTipsEoc_monthly_reports["Japanese"]["female_count"] = "";
	$placeHoldersEoc_monthly_reports["Japanese"]["female_count"] = "";
	$fieldLabelsEoc_monthly_reports["Japanese"]["total_diamond_dept"] = "ダイヤ部門成約顧客数";
	$fieldToolTipsEoc_monthly_reports["Japanese"]["total_diamond_dept"] = "";
	$placeHoldersEoc_monthly_reports["Japanese"]["total_diamond_dept"] = "";
	$fieldLabelsEoc_monthly_reports["Japanese"]["total_common_dept"] = "共通部門成約顧客数";
	$fieldToolTipsEoc_monthly_reports["Japanese"]["total_common_dept"] = "";
	$placeHoldersEoc_monthly_reports["Japanese"]["total_common_dept"] = "";
	$fieldLabelsEoc_monthly_reports["Japanese"]["total_bullion_dept"] = "地金部門成約顧客数";
	$fieldToolTipsEoc_monthly_reports["Japanese"]["total_bullion_dept"] = "";
	$placeHoldersEoc_monthly_reports["Japanese"]["total_bullion_dept"] = "";
	$fieldLabelsEoc_monthly_reports["Japanese"]["total_jewelry_dept"] = "宝飾部門成約顧客数";
	$fieldToolTipsEoc_monthly_reports["Japanese"]["total_jewelry_dept"] = "";
	$placeHoldersEoc_monthly_reports["Japanese"]["total_jewelry_dept"] = "";
	$fieldLabelsEoc_monthly_reports["Japanese"]["total_watch_dept"] = "時計部門成約顧客数";
	$fieldToolTipsEoc_monthly_reports["Japanese"]["total_watch_dept"] = "";
	$placeHoldersEoc_monthly_reports["Japanese"]["total_watch_dept"] = "";
	$fieldLabelsEoc_monthly_reports["Japanese"]["total_fashion_dept"] = "服飾部門成約顧客数";
	$fieldToolTipsEoc_monthly_reports["Japanese"]["total_fashion_dept"] = "";
	$placeHoldersEoc_monthly_reports["Japanese"]["total_fashion_dept"] = "";
	$fieldLabelsEoc_monthly_reports["Japanese"]["age_20s_count"] = "20代成約顧客数";
	$fieldToolTipsEoc_monthly_reports["Japanese"]["age_20s_count"] = "";
	$placeHoldersEoc_monthly_reports["Japanese"]["age_20s_count"] = "";
	$fieldLabelsEoc_monthly_reports["Japanese"]["age_30s_count"] = "30代成約顧客数";
	$fieldToolTipsEoc_monthly_reports["Japanese"]["age_30s_count"] = "";
	$placeHoldersEoc_monthly_reports["Japanese"]["age_30s_count"] = "";
	$fieldLabelsEoc_monthly_reports["Japanese"]["age_40s_count"] = "40代成約顧客数";
	$fieldToolTipsEoc_monthly_reports["Japanese"]["age_40s_count"] = "";
	$placeHoldersEoc_monthly_reports["Japanese"]["age_40s_count"] = "";
	$fieldLabelsEoc_monthly_reports["Japanese"]["age_50s_count"] = "50代成約顧客数";
	$fieldToolTipsEoc_monthly_reports["Japanese"]["age_50s_count"] = "";
	$placeHoldersEoc_monthly_reports["Japanese"]["age_50s_count"] = "";
	$fieldLabelsEoc_monthly_reports["Japanese"]["age_60s_count"] = "60代成約顧客数";
	$fieldToolTipsEoc_monthly_reports["Japanese"]["age_60s_count"] = "";
	$placeHoldersEoc_monthly_reports["Japanese"]["age_60s_count"] = "";
	$fieldLabelsEoc_monthly_reports["Japanese"]["age_70s_count"] = "70代成約顧客数";
	$fieldToolTipsEoc_monthly_reports["Japanese"]["age_70s_count"] = "";
	$placeHoldersEoc_monthly_reports["Japanese"]["age_70s_count"] = "";
	$fieldLabelsEoc_monthly_reports["Japanese"]["age_80s_count"] = "80代成約顧客数";
	$fieldToolTipsEoc_monthly_reports["Japanese"]["age_80s_count"] = "";
	$placeHoldersEoc_monthly_reports["Japanese"]["age_80s_count"] = "";
	$fieldLabelsEoc_monthly_reports["Japanese"]["total_customers"] = "Total Customers";
	$fieldToolTipsEoc_monthly_reports["Japanese"]["total_customers"] = "";
	$placeHoldersEoc_monthly_reports["Japanese"]["total_customers"] = "";
	$fieldLabelsEoc_monthly_reports["Japanese"]["new_customers"] = "新規成約取引数";
	$fieldToolTipsEoc_monthly_reports["Japanese"]["new_customers"] = "";
	$placeHoldersEoc_monthly_reports["Japanese"]["new_customers"] = "";
	$fieldLabelsEoc_monthly_reports["Japanese"]["returning_customers"] = "リピーター成約取引数";
	$fieldToolTipsEoc_monthly_reports["Japanese"]["returning_customers"] = "";
	$placeHoldersEoc_monthly_reports["Japanese"]["returning_customers"] = "";
	$fieldLabelsEoc_monthly_reports["Japanese"]["total_ownership_yes"] = "Total Ownership Yes";
	$fieldToolTipsEoc_monthly_reports["Japanese"]["total_ownership_yes"] = "";
	$placeHoldersEoc_monthly_reports["Japanese"]["total_ownership_yes"] = "";
	$fieldLabelsEoc_monthly_reports["Japanese"]["total_ownership_no"] = "Total Ownership No";
	$fieldToolTipsEoc_monthly_reports["Japanese"]["total_ownership_no"] = "";
	$placeHoldersEoc_monthly_reports["Japanese"]["total_ownership_no"] = "";
	$fieldLabelsEoc_monthly_reports["Japanese"]["created_at"] = "作成日";
	$fieldToolTipsEoc_monthly_reports["Japanese"]["created_at"] = "";
	$placeHoldersEoc_monthly_reports["Japanese"]["created_at"] = "";
	$fieldLabelsEoc_monthly_reports["Japanese"]["updated_at"] = "更新日";
	$fieldToolTipsEoc_monthly_reports["Japanese"]["updated_at"] = "";
	$placeHoldersEoc_monthly_reports["Japanese"]["updated_at"] = "";
	$fieldLabelsEoc_monthly_reports["Japanese"]["year"] = "Year";
	$fieldToolTipsEoc_monthly_reports["Japanese"]["year"] = "";
	$placeHoldersEoc_monthly_reports["Japanese"]["year"] = "";
	$fieldLabelsEoc_monthly_reports["Japanese"]["month"] = "Month";
	$fieldToolTipsEoc_monthly_reports["Japanese"]["month"] = "";
	$placeHoldersEoc_monthly_reports["Japanese"]["month"] = "";
	$fieldLabelsEoc_monthly_reports["Japanese"]["hokkai_dou"] = "北海道顧客数";
	$fieldToolTipsEoc_monthly_reports["Japanese"]["hokkai_dou"] = "";
	$placeHoldersEoc_monthly_reports["Japanese"]["hokkai_dou"] = "";
	$fieldLabelsEoc_monthly_reports["Japanese"]["aomori_ken"] = "青森県";
	$fieldToolTipsEoc_monthly_reports["Japanese"]["aomori_ken"] = "";
	$placeHoldersEoc_monthly_reports["Japanese"]["aomori_ken"] = "";
	$fieldLabelsEoc_monthly_reports["Japanese"]["iwate_ken"] = "岩手県";
	$fieldToolTipsEoc_monthly_reports["Japanese"]["iwate_ken"] = "";
	$placeHoldersEoc_monthly_reports["Japanese"]["iwate_ken"] = "";
	$fieldLabelsEoc_monthly_reports["Japanese"]["miyagi_ken"] = "宮城県";
	$fieldToolTipsEoc_monthly_reports["Japanese"]["miyagi_ken"] = "";
	$placeHoldersEoc_monthly_reports["Japanese"]["miyagi_ken"] = "";
	$fieldLabelsEoc_monthly_reports["Japanese"]["akita_ken"] = "秋田県";
	$fieldToolTipsEoc_monthly_reports["Japanese"]["akita_ken"] = "";
	$placeHoldersEoc_monthly_reports["Japanese"]["akita_ken"] = "";
	$fieldLabelsEoc_monthly_reports["Japanese"]["yamagata_ken"] = "山形県";
	$fieldToolTipsEoc_monthly_reports["Japanese"]["yamagata_ken"] = "";
	$placeHoldersEoc_monthly_reports["Japanese"]["yamagata_ken"] = "";
	$fieldLabelsEoc_monthly_reports["Japanese"]["fukushima_ken"] = "福島県";
	$fieldToolTipsEoc_monthly_reports["Japanese"]["fukushima_ken"] = "";
	$placeHoldersEoc_monthly_reports["Japanese"]["fukushima_ken"] = "";
	$fieldLabelsEoc_monthly_reports["Japanese"]["ibaraki_ken"] = "茨城県";
	$fieldToolTipsEoc_monthly_reports["Japanese"]["ibaraki_ken"] = "";
	$placeHoldersEoc_monthly_reports["Japanese"]["ibaraki_ken"] = "";
	$fieldLabelsEoc_monthly_reports["Japanese"]["tochigi_ken"] = "栃木県";
	$fieldToolTipsEoc_monthly_reports["Japanese"]["tochigi_ken"] = "";
	$placeHoldersEoc_monthly_reports["Japanese"]["tochigi_ken"] = "";
	$fieldLabelsEoc_monthly_reports["Japanese"]["gunma_ken"] = "群馬県";
	$fieldToolTipsEoc_monthly_reports["Japanese"]["gunma_ken"] = "";
	$placeHoldersEoc_monthly_reports["Japanese"]["gunma_ken"] = "";
	$fieldLabelsEoc_monthly_reports["Japanese"]["saitama_ken"] = "埼玉県";
	$fieldToolTipsEoc_monthly_reports["Japanese"]["saitama_ken"] = "";
	$placeHoldersEoc_monthly_reports["Japanese"]["saitama_ken"] = "";
	$fieldLabelsEoc_monthly_reports["Japanese"]["chiba_ken"] = "千葉県";
	$fieldToolTipsEoc_monthly_reports["Japanese"]["chiba_ken"] = "";
	$placeHoldersEoc_monthly_reports["Japanese"]["chiba_ken"] = "";
	$fieldLabelsEoc_monthly_reports["Japanese"]["tokyo_ken"] = "東京都";
	$fieldToolTipsEoc_monthly_reports["Japanese"]["tokyo_ken"] = "";
	$placeHoldersEoc_monthly_reports["Japanese"]["tokyo_ken"] = "";
	$fieldLabelsEoc_monthly_reports["Japanese"]["kanagawa_ken"] = "神奈川県";
	$fieldToolTipsEoc_monthly_reports["Japanese"]["kanagawa_ken"] = "";
	$placeHoldersEoc_monthly_reports["Japanese"]["kanagawa_ken"] = "";
	$fieldLabelsEoc_monthly_reports["Japanese"]["niigata_ken"] = "新潟県";
	$fieldToolTipsEoc_monthly_reports["Japanese"]["niigata_ken"] = "";
	$placeHoldersEoc_monthly_reports["Japanese"]["niigata_ken"] = "";
	$fieldLabelsEoc_monthly_reports["Japanese"]["toyama_ken"] = "富山県";
	$fieldToolTipsEoc_monthly_reports["Japanese"]["toyama_ken"] = "";
	$placeHoldersEoc_monthly_reports["Japanese"]["toyama_ken"] = "";
	$fieldLabelsEoc_monthly_reports["Japanese"]["ishikawa_ken"] = "石川県";
	$fieldToolTipsEoc_monthly_reports["Japanese"]["ishikawa_ken"] = "";
	$placeHoldersEoc_monthly_reports["Japanese"]["ishikawa_ken"] = "";
	$fieldLabelsEoc_monthly_reports["Japanese"]["fukui_ken"] = "福井県";
	$fieldToolTipsEoc_monthly_reports["Japanese"]["fukui_ken"] = "";
	$placeHoldersEoc_monthly_reports["Japanese"]["fukui_ken"] = "";
	$fieldLabelsEoc_monthly_reports["Japanese"]["yamanashi_ken"] = "山梨県";
	$fieldToolTipsEoc_monthly_reports["Japanese"]["yamanashi_ken"] = "";
	$placeHoldersEoc_monthly_reports["Japanese"]["yamanashi_ken"] = "";
	$fieldLabelsEoc_monthly_reports["Japanese"]["nagano_ken"] = "長野県";
	$fieldToolTipsEoc_monthly_reports["Japanese"]["nagano_ken"] = "";
	$placeHoldersEoc_monthly_reports["Japanese"]["nagano_ken"] = "";
	$fieldLabelsEoc_monthly_reports["Japanese"]["gifu_ken"] = "岐阜県";
	$fieldToolTipsEoc_monthly_reports["Japanese"]["gifu_ken"] = "";
	$placeHoldersEoc_monthly_reports["Japanese"]["gifu_ken"] = "";
	$fieldLabelsEoc_monthly_reports["Japanese"]["shizuoka_ken"] = "静岡県";
	$fieldToolTipsEoc_monthly_reports["Japanese"]["shizuoka_ken"] = "";
	$placeHoldersEoc_monthly_reports["Japanese"]["shizuoka_ken"] = "";
	$fieldLabelsEoc_monthly_reports["Japanese"]["aichi_ken"] = "愛知県";
	$fieldToolTipsEoc_monthly_reports["Japanese"]["aichi_ken"] = "";
	$placeHoldersEoc_monthly_reports["Japanese"]["aichi_ken"] = "";
	$fieldLabelsEoc_monthly_reports["Japanese"]["mie_ken"] = "三重県";
	$fieldToolTipsEoc_monthly_reports["Japanese"]["mie_ken"] = "";
	$placeHoldersEoc_monthly_reports["Japanese"]["mie_ken"] = "";
	$fieldLabelsEoc_monthly_reports["Japanese"]["shiga_ken"] = "滋賀県";
	$fieldToolTipsEoc_monthly_reports["Japanese"]["shiga_ken"] = "";
	$placeHoldersEoc_monthly_reports["Japanese"]["shiga_ken"] = "";
	$fieldLabelsEoc_monthly_reports["Japanese"]["kyoto_fu"] = "京都府";
	$fieldToolTipsEoc_monthly_reports["Japanese"]["kyoto_fu"] = "";
	$placeHoldersEoc_monthly_reports["Japanese"]["kyoto_fu"] = "";
	$fieldLabelsEoc_monthly_reports["Japanese"]["osaka_fu"] = "大阪府";
	$fieldToolTipsEoc_monthly_reports["Japanese"]["osaka_fu"] = "";
	$placeHoldersEoc_monthly_reports["Japanese"]["osaka_fu"] = "";
	$fieldLabelsEoc_monthly_reports["Japanese"]["hyogo_ken"] = "兵庫県";
	$fieldToolTipsEoc_monthly_reports["Japanese"]["hyogo_ken"] = "";
	$placeHoldersEoc_monthly_reports["Japanese"]["hyogo_ken"] = "";
	$fieldLabelsEoc_monthly_reports["Japanese"]["nara_ken"] = "奈良県";
	$fieldToolTipsEoc_monthly_reports["Japanese"]["nara_ken"] = "";
	$placeHoldersEoc_monthly_reports["Japanese"]["nara_ken"] = "";
	$fieldLabelsEoc_monthly_reports["Japanese"]["wakayama_ken"] = "和歌山県";
	$fieldToolTipsEoc_monthly_reports["Japanese"]["wakayama_ken"] = "";
	$placeHoldersEoc_monthly_reports["Japanese"]["wakayama_ken"] = "";
	$fieldLabelsEoc_monthly_reports["Japanese"]["tottori_ken"] = "鳥取県";
	$fieldToolTipsEoc_monthly_reports["Japanese"]["tottori_ken"] = "";
	$placeHoldersEoc_monthly_reports["Japanese"]["tottori_ken"] = "";
	$fieldLabelsEoc_monthly_reports["Japanese"]["shimane_ken"] = "島根県";
	$fieldToolTipsEoc_monthly_reports["Japanese"]["shimane_ken"] = "";
	$placeHoldersEoc_monthly_reports["Japanese"]["shimane_ken"] = "";
	$fieldLabelsEoc_monthly_reports["Japanese"]["okayama_ken"] = "岡山県";
	$fieldToolTipsEoc_monthly_reports["Japanese"]["okayama_ken"] = "";
	$placeHoldersEoc_monthly_reports["Japanese"]["okayama_ken"] = "";
	$fieldLabelsEoc_monthly_reports["Japanese"]["hiroshima_ken"] = "広島県";
	$fieldToolTipsEoc_monthly_reports["Japanese"]["hiroshima_ken"] = "";
	$placeHoldersEoc_monthly_reports["Japanese"]["hiroshima_ken"] = "";
	$fieldLabelsEoc_monthly_reports["Japanese"]["yamaguchi_ken"] = "山口県";
	$fieldToolTipsEoc_monthly_reports["Japanese"]["yamaguchi_ken"] = "";
	$placeHoldersEoc_monthly_reports["Japanese"]["yamaguchi_ken"] = "";
	$fieldLabelsEoc_monthly_reports["Japanese"]["tokushima_ken"] = "徳島県";
	$fieldToolTipsEoc_monthly_reports["Japanese"]["tokushima_ken"] = "";
	$placeHoldersEoc_monthly_reports["Japanese"]["tokushima_ken"] = "";
	$fieldLabelsEoc_monthly_reports["Japanese"]["kagawa_ken"] = "香川県";
	$fieldToolTipsEoc_monthly_reports["Japanese"]["kagawa_ken"] = "";
	$placeHoldersEoc_monthly_reports["Japanese"]["kagawa_ken"] = "";
	$fieldLabelsEoc_monthly_reports["Japanese"]["ehime_ken"] = "愛媛県";
	$fieldToolTipsEoc_monthly_reports["Japanese"]["ehime_ken"] = "";
	$placeHoldersEoc_monthly_reports["Japanese"]["ehime_ken"] = "";
	$fieldLabelsEoc_monthly_reports["Japanese"]["kochi_ken"] = "高知県";
	$fieldToolTipsEoc_monthly_reports["Japanese"]["kochi_ken"] = "";
	$placeHoldersEoc_monthly_reports["Japanese"]["kochi_ken"] = "";
	$fieldLabelsEoc_monthly_reports["Japanese"]["fukuoka_ken"] = "福岡県";
	$fieldToolTipsEoc_monthly_reports["Japanese"]["fukuoka_ken"] = "";
	$placeHoldersEoc_monthly_reports["Japanese"]["fukuoka_ken"] = "";
	$fieldLabelsEoc_monthly_reports["Japanese"]["saga_ken"] = "佐賀県";
	$fieldToolTipsEoc_monthly_reports["Japanese"]["saga_ken"] = "";
	$placeHoldersEoc_monthly_reports["Japanese"]["saga_ken"] = "";
	$fieldLabelsEoc_monthly_reports["Japanese"]["nagasaki_ken"] = "長崎県";
	$fieldToolTipsEoc_monthly_reports["Japanese"]["nagasaki_ken"] = "";
	$placeHoldersEoc_monthly_reports["Japanese"]["nagasaki_ken"] = "";
	$fieldLabelsEoc_monthly_reports["Japanese"]["kumamoto_ken"] = "熊本県";
	$fieldToolTipsEoc_monthly_reports["Japanese"]["kumamoto_ken"] = "";
	$placeHoldersEoc_monthly_reports["Japanese"]["kumamoto_ken"] = "";
	$fieldLabelsEoc_monthly_reports["Japanese"]["oita_ken"] = "大分県";
	$fieldToolTipsEoc_monthly_reports["Japanese"]["oita_ken"] = "";
	$placeHoldersEoc_monthly_reports["Japanese"]["oita_ken"] = "";
	$fieldLabelsEoc_monthly_reports["Japanese"]["miyazaki_ken"] = "宮崎県";
	$fieldToolTipsEoc_monthly_reports["Japanese"]["miyazaki_ken"] = "";
	$placeHoldersEoc_monthly_reports["Japanese"]["miyazaki_ken"] = "";
	$fieldLabelsEoc_monthly_reports["Japanese"]["kagoshima_ken"] = "鹿児島県";
	$fieldToolTipsEoc_monthly_reports["Japanese"]["kagoshima_ken"] = "";
	$placeHoldersEoc_monthly_reports["Japanese"]["kagoshima_ken"] = "";
	$fieldLabelsEoc_monthly_reports["Japanese"]["okinawa_ken"] = "沖縄県";
	$fieldToolTipsEoc_monthly_reports["Japanese"]["okinawa_ken"] = "";
	$placeHoldersEoc_monthly_reports["Japanese"]["okinawa_ken"] = "";
	if (count($fieldToolTipsEoc_monthly_reports["Japanese"]))
		$tdataEoc_monthly_reports[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsEoc_monthly_reports[""] = array();
	$fieldToolTipsEoc_monthly_reports[""] = array();
	$placeHoldersEoc_monthly_reports[""] = array();
	$pageTitlesEoc_monthly_reports[""] = array();
	$fieldLabelsEoc_monthly_reports[""]["id"] = "Id";
	$fieldToolTipsEoc_monthly_reports[""]["id"] = "";
	$placeHoldersEoc_monthly_reports[""]["id"] = "";
	$fieldLabelsEoc_monthly_reports[""]["male_count"] = "Male Count";
	$fieldToolTipsEoc_monthly_reports[""]["male_count"] = "";
	$placeHoldersEoc_monthly_reports[""]["male_count"] = "";
	$fieldLabelsEoc_monthly_reports[""]["female_count"] = "Female Count";
	$fieldToolTipsEoc_monthly_reports[""]["female_count"] = "";
	$placeHoldersEoc_monthly_reports[""]["female_count"] = "";
	$fieldLabelsEoc_monthly_reports[""]["total_diamond_dept"] = "Total Diamond Dept";
	$fieldToolTipsEoc_monthly_reports[""]["total_diamond_dept"] = "";
	$placeHoldersEoc_monthly_reports[""]["total_diamond_dept"] = "";
	$fieldLabelsEoc_monthly_reports[""]["total_common_dept"] = "Total Common Dept";
	$fieldToolTipsEoc_monthly_reports[""]["total_common_dept"] = "";
	$placeHoldersEoc_monthly_reports[""]["total_common_dept"] = "";
	$fieldLabelsEoc_monthly_reports[""]["total_bullion_dept"] = "Total Bullion Dept";
	$fieldToolTipsEoc_monthly_reports[""]["total_bullion_dept"] = "";
	$placeHoldersEoc_monthly_reports[""]["total_bullion_dept"] = "";
	$fieldLabelsEoc_monthly_reports[""]["total_jewelry_dept"] = "Total Jewelry Dept";
	$fieldToolTipsEoc_monthly_reports[""]["total_jewelry_dept"] = "";
	$placeHoldersEoc_monthly_reports[""]["total_jewelry_dept"] = "";
	$fieldLabelsEoc_monthly_reports[""]["total_watch_dept"] = "Total Watch Dept";
	$fieldToolTipsEoc_monthly_reports[""]["total_watch_dept"] = "";
	$placeHoldersEoc_monthly_reports[""]["total_watch_dept"] = "";
	$fieldLabelsEoc_monthly_reports[""]["total_fashion_dept"] = "Total Fashion Dept";
	$fieldToolTipsEoc_monthly_reports[""]["total_fashion_dept"] = "";
	$placeHoldersEoc_monthly_reports[""]["total_fashion_dept"] = "";
	$fieldLabelsEoc_monthly_reports[""]["age_20s_count"] = "Age 20s Count";
	$fieldToolTipsEoc_monthly_reports[""]["age_20s_count"] = "";
	$placeHoldersEoc_monthly_reports[""]["age_20s_count"] = "";
	$fieldLabelsEoc_monthly_reports[""]["age_30s_count"] = "Age 30s Count";
	$fieldToolTipsEoc_monthly_reports[""]["age_30s_count"] = "";
	$placeHoldersEoc_monthly_reports[""]["age_30s_count"] = "";
	$fieldLabelsEoc_monthly_reports[""]["age_40s_count"] = "Age 40s Count";
	$fieldToolTipsEoc_monthly_reports[""]["age_40s_count"] = "";
	$placeHoldersEoc_monthly_reports[""]["age_40s_count"] = "";
	$fieldLabelsEoc_monthly_reports[""]["age_50s_count"] = "Age 50s Count";
	$fieldToolTipsEoc_monthly_reports[""]["age_50s_count"] = "";
	$placeHoldersEoc_monthly_reports[""]["age_50s_count"] = "";
	$fieldLabelsEoc_monthly_reports[""]["age_60s_count"] = "Age 60s Count";
	$fieldToolTipsEoc_monthly_reports[""]["age_60s_count"] = "";
	$placeHoldersEoc_monthly_reports[""]["age_60s_count"] = "";
	$fieldLabelsEoc_monthly_reports[""]["age_70s_count"] = "Age 70s Count";
	$fieldToolTipsEoc_monthly_reports[""]["age_70s_count"] = "";
	$placeHoldersEoc_monthly_reports[""]["age_70s_count"] = "";
	$fieldLabelsEoc_monthly_reports[""]["age_80s_count"] = "Age 80s Count";
	$fieldToolTipsEoc_monthly_reports[""]["age_80s_count"] = "";
	$placeHoldersEoc_monthly_reports[""]["age_80s_count"] = "";
	$fieldLabelsEoc_monthly_reports[""]["total_customers"] = "Total Customers";
	$fieldToolTipsEoc_monthly_reports[""]["total_customers"] = "";
	$placeHoldersEoc_monthly_reports[""]["total_customers"] = "";
	$fieldLabelsEoc_monthly_reports[""]["new_customers"] = "New Customers";
	$fieldToolTipsEoc_monthly_reports[""]["new_customers"] = "";
	$placeHoldersEoc_monthly_reports[""]["new_customers"] = "";
	$fieldLabelsEoc_monthly_reports[""]["returning_customers"] = "Returning Customers";
	$fieldToolTipsEoc_monthly_reports[""]["returning_customers"] = "";
	$placeHoldersEoc_monthly_reports[""]["returning_customers"] = "";
	$fieldLabelsEoc_monthly_reports[""]["total_ownership_yes"] = "Total Ownership Yes";
	$fieldToolTipsEoc_monthly_reports[""]["total_ownership_yes"] = "";
	$placeHoldersEoc_monthly_reports[""]["total_ownership_yes"] = "";
	$fieldLabelsEoc_monthly_reports[""]["total_ownership_no"] = "Total Ownership No";
	$fieldToolTipsEoc_monthly_reports[""]["total_ownership_no"] = "";
	$placeHoldersEoc_monthly_reports[""]["total_ownership_no"] = "";
	$fieldLabelsEoc_monthly_reports[""]["created_at"] = "Created At";
	$fieldToolTipsEoc_monthly_reports[""]["created_at"] = "";
	$placeHoldersEoc_monthly_reports[""]["created_at"] = "";
	$fieldLabelsEoc_monthly_reports[""]["updated_at"] = "Updated At";
	$fieldToolTipsEoc_monthly_reports[""]["updated_at"] = "";
	$placeHoldersEoc_monthly_reports[""]["updated_at"] = "";
	$fieldLabelsEoc_monthly_reports[""]["year"] = "Year";
	$fieldToolTipsEoc_monthly_reports[""]["year"] = "";
	$placeHoldersEoc_monthly_reports[""]["year"] = "";
	$fieldLabelsEoc_monthly_reports[""]["month"] = "Month";
	$fieldToolTipsEoc_monthly_reports[""]["month"] = "";
	$placeHoldersEoc_monthly_reports[""]["month"] = "";
	$fieldLabelsEoc_monthly_reports[""]["hokkai_dou"] = "Hokkai-dou";
	$fieldToolTipsEoc_monthly_reports[""]["hokkai_dou"] = "";
	$placeHoldersEoc_monthly_reports[""]["hokkai_dou"] = "";
	$fieldLabelsEoc_monthly_reports[""]["aomori_ken"] = "Aomori-ken";
	$fieldToolTipsEoc_monthly_reports[""]["aomori_ken"] = "";
	$placeHoldersEoc_monthly_reports[""]["aomori_ken"] = "";
	$fieldLabelsEoc_monthly_reports[""]["iwate_ken"] = "Iwate-ken";
	$fieldToolTipsEoc_monthly_reports[""]["iwate_ken"] = "";
	$placeHoldersEoc_monthly_reports[""]["iwate_ken"] = "";
	$fieldLabelsEoc_monthly_reports[""]["miyagi_ken"] = "Miyagi-ken";
	$fieldToolTipsEoc_monthly_reports[""]["miyagi_ken"] = "";
	$placeHoldersEoc_monthly_reports[""]["miyagi_ken"] = "";
	$fieldLabelsEoc_monthly_reports[""]["akita_ken"] = "Akita-ken";
	$fieldToolTipsEoc_monthly_reports[""]["akita_ken"] = "";
	$placeHoldersEoc_monthly_reports[""]["akita_ken"] = "";
	$fieldLabelsEoc_monthly_reports[""]["yamagata_ken"] = "Yamagata-ken";
	$fieldToolTipsEoc_monthly_reports[""]["yamagata_ken"] = "";
	$placeHoldersEoc_monthly_reports[""]["yamagata_ken"] = "";
	$fieldLabelsEoc_monthly_reports[""]["fukushima_ken"] = "Fukushima-ken";
	$fieldToolTipsEoc_monthly_reports[""]["fukushima_ken"] = "";
	$placeHoldersEoc_monthly_reports[""]["fukushima_ken"] = "";
	$fieldLabelsEoc_monthly_reports[""]["ibaraki_ken"] = "Ibaraki-ken";
	$fieldToolTipsEoc_monthly_reports[""]["ibaraki_ken"] = "";
	$placeHoldersEoc_monthly_reports[""]["ibaraki_ken"] = "";
	$fieldLabelsEoc_monthly_reports[""]["tochigi_ken"] = "Tochigi-ken";
	$fieldToolTipsEoc_monthly_reports[""]["tochigi_ken"] = "";
	$placeHoldersEoc_monthly_reports[""]["tochigi_ken"] = "";
	$fieldLabelsEoc_monthly_reports[""]["gunma_ken"] = "Gunma-ken";
	$fieldToolTipsEoc_monthly_reports[""]["gunma_ken"] = "";
	$placeHoldersEoc_monthly_reports[""]["gunma_ken"] = "";
	$fieldLabelsEoc_monthly_reports[""]["saitama_ken"] = "Saitama-ken";
	$fieldToolTipsEoc_monthly_reports[""]["saitama_ken"] = "";
	$placeHoldersEoc_monthly_reports[""]["saitama_ken"] = "";
	$fieldLabelsEoc_monthly_reports[""]["chiba_ken"] = "Chiba-ken";
	$fieldToolTipsEoc_monthly_reports[""]["chiba_ken"] = "";
	$placeHoldersEoc_monthly_reports[""]["chiba_ken"] = "";
	$fieldLabelsEoc_monthly_reports[""]["tokyo_ken"] = "Tokyo-ken";
	$fieldToolTipsEoc_monthly_reports[""]["tokyo_ken"] = "";
	$placeHoldersEoc_monthly_reports[""]["tokyo_ken"] = "";
	$fieldLabelsEoc_monthly_reports[""]["kanagawa_ken"] = "Kanagawa-ken";
	$fieldToolTipsEoc_monthly_reports[""]["kanagawa_ken"] = "";
	$placeHoldersEoc_monthly_reports[""]["kanagawa_ken"] = "";
	$fieldLabelsEoc_monthly_reports[""]["niigata_ken"] = "Niigata-ken";
	$fieldToolTipsEoc_monthly_reports[""]["niigata_ken"] = "";
	$placeHoldersEoc_monthly_reports[""]["niigata_ken"] = "";
	$fieldLabelsEoc_monthly_reports[""]["toyama_ken"] = "Toyama-ken";
	$fieldToolTipsEoc_monthly_reports[""]["toyama_ken"] = "";
	$placeHoldersEoc_monthly_reports[""]["toyama_ken"] = "";
	$fieldLabelsEoc_monthly_reports[""]["ishikawa_ken"] = "Ishikawa-ken";
	$fieldToolTipsEoc_monthly_reports[""]["ishikawa_ken"] = "";
	$placeHoldersEoc_monthly_reports[""]["ishikawa_ken"] = "";
	$fieldLabelsEoc_monthly_reports[""]["fukui_ken"] = "Fukui-ken";
	$fieldToolTipsEoc_monthly_reports[""]["fukui_ken"] = "";
	$placeHoldersEoc_monthly_reports[""]["fukui_ken"] = "";
	$fieldLabelsEoc_monthly_reports[""]["yamanashi_ken"] = "Yamanashi-ken";
	$fieldToolTipsEoc_monthly_reports[""]["yamanashi_ken"] = "";
	$placeHoldersEoc_monthly_reports[""]["yamanashi_ken"] = "";
	$fieldLabelsEoc_monthly_reports[""]["nagano_ken"] = "Nagano-ken";
	$fieldToolTipsEoc_monthly_reports[""]["nagano_ken"] = "";
	$placeHoldersEoc_monthly_reports[""]["nagano_ken"] = "";
	$fieldLabelsEoc_monthly_reports[""]["gifu_ken"] = "Gifu-ken";
	$fieldToolTipsEoc_monthly_reports[""]["gifu_ken"] = "";
	$placeHoldersEoc_monthly_reports[""]["gifu_ken"] = "";
	$fieldLabelsEoc_monthly_reports[""]["shizuoka_ken"] = "Shizuoka-ken";
	$fieldToolTipsEoc_monthly_reports[""]["shizuoka_ken"] = "";
	$placeHoldersEoc_monthly_reports[""]["shizuoka_ken"] = "";
	$fieldLabelsEoc_monthly_reports[""]["aichi_ken"] = "Aichi-ken";
	$fieldToolTipsEoc_monthly_reports[""]["aichi_ken"] = "";
	$placeHoldersEoc_monthly_reports[""]["aichi_ken"] = "";
	$fieldLabelsEoc_monthly_reports[""]["mie_ken"] = "Mie-ken";
	$fieldToolTipsEoc_monthly_reports[""]["mie_ken"] = "";
	$placeHoldersEoc_monthly_reports[""]["mie_ken"] = "";
	$fieldLabelsEoc_monthly_reports[""]["shiga_ken"] = "Shiga-ken";
	$fieldToolTipsEoc_monthly_reports[""]["shiga_ken"] = "";
	$placeHoldersEoc_monthly_reports[""]["shiga_ken"] = "";
	$fieldLabelsEoc_monthly_reports[""]["kyoto_fu"] = "Kyoto-fu";
	$fieldToolTipsEoc_monthly_reports[""]["kyoto_fu"] = "";
	$placeHoldersEoc_monthly_reports[""]["kyoto_fu"] = "";
	$fieldLabelsEoc_monthly_reports[""]["osaka_fu"] = "Osaka-fu";
	$fieldToolTipsEoc_monthly_reports[""]["osaka_fu"] = "";
	$placeHoldersEoc_monthly_reports[""]["osaka_fu"] = "";
	$fieldLabelsEoc_monthly_reports[""]["hyogo_ken"] = "Hyogo-ken";
	$fieldToolTipsEoc_monthly_reports[""]["hyogo_ken"] = "";
	$placeHoldersEoc_monthly_reports[""]["hyogo_ken"] = "";
	$fieldLabelsEoc_monthly_reports[""]["nara_ken"] = "Nara-ken";
	$fieldToolTipsEoc_monthly_reports[""]["nara_ken"] = "";
	$placeHoldersEoc_monthly_reports[""]["nara_ken"] = "";
	$fieldLabelsEoc_monthly_reports[""]["wakayama_ken"] = "Wakayama-ken";
	$fieldToolTipsEoc_monthly_reports[""]["wakayama_ken"] = "";
	$placeHoldersEoc_monthly_reports[""]["wakayama_ken"] = "";
	$fieldLabelsEoc_monthly_reports[""]["tottori_ken"] = "Tottori-ken";
	$fieldToolTipsEoc_monthly_reports[""]["tottori_ken"] = "";
	$placeHoldersEoc_monthly_reports[""]["tottori_ken"] = "";
	$fieldLabelsEoc_monthly_reports[""]["shimane_ken"] = "Shimane-ken";
	$fieldToolTipsEoc_monthly_reports[""]["shimane_ken"] = "";
	$placeHoldersEoc_monthly_reports[""]["shimane_ken"] = "";
	$fieldLabelsEoc_monthly_reports[""]["okayama_ken"] = "Okayama-ken";
	$fieldToolTipsEoc_monthly_reports[""]["okayama_ken"] = "";
	$placeHoldersEoc_monthly_reports[""]["okayama_ken"] = "";
	$fieldLabelsEoc_monthly_reports[""]["hiroshima_ken"] = "Hiroshima-ken";
	$fieldToolTipsEoc_monthly_reports[""]["hiroshima_ken"] = "";
	$placeHoldersEoc_monthly_reports[""]["hiroshima_ken"] = "";
	$fieldLabelsEoc_monthly_reports[""]["yamaguchi_ken"] = "Yamaguchi-ken";
	$fieldToolTipsEoc_monthly_reports[""]["yamaguchi_ken"] = "";
	$placeHoldersEoc_monthly_reports[""]["yamaguchi_ken"] = "";
	$fieldLabelsEoc_monthly_reports[""]["tokushima_ken"] = "Tokushima-ken";
	$fieldToolTipsEoc_monthly_reports[""]["tokushima_ken"] = "";
	$placeHoldersEoc_monthly_reports[""]["tokushima_ken"] = "";
	$fieldLabelsEoc_monthly_reports[""]["kagawa_ken"] = "Kagawa-ken";
	$fieldToolTipsEoc_monthly_reports[""]["kagawa_ken"] = "";
	$placeHoldersEoc_monthly_reports[""]["kagawa_ken"] = "";
	$fieldLabelsEoc_monthly_reports[""]["ehime_ken"] = "Ehime-ken";
	$fieldToolTipsEoc_monthly_reports[""]["ehime_ken"] = "";
	$placeHoldersEoc_monthly_reports[""]["ehime_ken"] = "";
	$fieldLabelsEoc_monthly_reports[""]["kochi_ken"] = "Kochi-ken";
	$fieldToolTipsEoc_monthly_reports[""]["kochi_ken"] = "";
	$placeHoldersEoc_monthly_reports[""]["kochi_ken"] = "";
	$fieldLabelsEoc_monthly_reports[""]["fukuoka_ken"] = "Fukuoka-ken";
	$fieldToolTipsEoc_monthly_reports[""]["fukuoka_ken"] = "";
	$placeHoldersEoc_monthly_reports[""]["fukuoka_ken"] = "";
	$fieldLabelsEoc_monthly_reports[""]["saga_ken"] = "Saga-ken";
	$fieldToolTipsEoc_monthly_reports[""]["saga_ken"] = "";
	$placeHoldersEoc_monthly_reports[""]["saga_ken"] = "";
	$fieldLabelsEoc_monthly_reports[""]["nagasaki_ken"] = "Nagasaki-ken";
	$fieldToolTipsEoc_monthly_reports[""]["nagasaki_ken"] = "";
	$placeHoldersEoc_monthly_reports[""]["nagasaki_ken"] = "";
	$fieldLabelsEoc_monthly_reports[""]["kumamoto_ken"] = "Kumamoto-ken";
	$fieldToolTipsEoc_monthly_reports[""]["kumamoto_ken"] = "";
	$placeHoldersEoc_monthly_reports[""]["kumamoto_ken"] = "";
	$fieldLabelsEoc_monthly_reports[""]["oita_ken"] = "Oita-ken";
	$fieldToolTipsEoc_monthly_reports[""]["oita_ken"] = "";
	$placeHoldersEoc_monthly_reports[""]["oita_ken"] = "";
	$fieldLabelsEoc_monthly_reports[""]["miyazaki_ken"] = "Miyazaki-ken";
	$fieldToolTipsEoc_monthly_reports[""]["miyazaki_ken"] = "";
	$placeHoldersEoc_monthly_reports[""]["miyazaki_ken"] = "";
	$fieldLabelsEoc_monthly_reports[""]["kagoshima_ken"] = "Kagoshima-ken";
	$fieldToolTipsEoc_monthly_reports[""]["kagoshima_ken"] = "";
	$placeHoldersEoc_monthly_reports[""]["kagoshima_ken"] = "";
	$fieldLabelsEoc_monthly_reports[""]["okinawa_ken"] = "Okinawa-ken";
	$fieldToolTipsEoc_monthly_reports[""]["okinawa_ken"] = "";
	$placeHoldersEoc_monthly_reports[""]["okinawa_ken"] = "";
	if (count($fieldToolTipsEoc_monthly_reports[""]))
		$tdataEoc_monthly_reports[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsEoc_monthly_reports["English"] = array();
	$fieldToolTipsEoc_monthly_reports["English"] = array();
	$placeHoldersEoc_monthly_reports["English"] = array();
	$pageTitlesEoc_monthly_reports["English"] = array();
	$fieldLabelsEoc_monthly_reports["English"]["id"] = "Id";
	$fieldToolTipsEoc_monthly_reports["English"]["id"] = "";
	$placeHoldersEoc_monthly_reports["English"]["id"] = "";
	$fieldLabelsEoc_monthly_reports["English"]["male_count"] = "Male Count";
	$fieldToolTipsEoc_monthly_reports["English"]["male_count"] = "";
	$placeHoldersEoc_monthly_reports["English"]["male_count"] = "";
	$fieldLabelsEoc_monthly_reports["English"]["female_count"] = "Female Count";
	$fieldToolTipsEoc_monthly_reports["English"]["female_count"] = "";
	$placeHoldersEoc_monthly_reports["English"]["female_count"] = "";
	$fieldLabelsEoc_monthly_reports["English"]["total_diamond_dept"] = "Total Diamond Dept";
	$fieldToolTipsEoc_monthly_reports["English"]["total_diamond_dept"] = "";
	$placeHoldersEoc_monthly_reports["English"]["total_diamond_dept"] = "";
	$fieldLabelsEoc_monthly_reports["English"]["total_common_dept"] = "Total Common Dept";
	$fieldToolTipsEoc_monthly_reports["English"]["total_common_dept"] = "";
	$placeHoldersEoc_monthly_reports["English"]["total_common_dept"] = "";
	$fieldLabelsEoc_monthly_reports["English"]["total_bullion_dept"] = "Total Bullion Dept";
	$fieldToolTipsEoc_monthly_reports["English"]["total_bullion_dept"] = "";
	$placeHoldersEoc_monthly_reports["English"]["total_bullion_dept"] = "";
	$fieldLabelsEoc_monthly_reports["English"]["total_jewelry_dept"] = "Total Jewelry Dept";
	$fieldToolTipsEoc_monthly_reports["English"]["total_jewelry_dept"] = "";
	$placeHoldersEoc_monthly_reports["English"]["total_jewelry_dept"] = "";
	$fieldLabelsEoc_monthly_reports["English"]["total_watch_dept"] = "Total Watch Dept";
	$fieldToolTipsEoc_monthly_reports["English"]["total_watch_dept"] = "";
	$placeHoldersEoc_monthly_reports["English"]["total_watch_dept"] = "";
	$fieldLabelsEoc_monthly_reports["English"]["total_fashion_dept"] = "Total Fashion Dept";
	$fieldToolTipsEoc_monthly_reports["English"]["total_fashion_dept"] = "";
	$placeHoldersEoc_monthly_reports["English"]["total_fashion_dept"] = "";
	$fieldLabelsEoc_monthly_reports["English"]["age_20s_count"] = "Age 20s Count";
	$fieldToolTipsEoc_monthly_reports["English"]["age_20s_count"] = "";
	$placeHoldersEoc_monthly_reports["English"]["age_20s_count"] = "";
	$fieldLabelsEoc_monthly_reports["English"]["age_30s_count"] = "Age 30s Count";
	$fieldToolTipsEoc_monthly_reports["English"]["age_30s_count"] = "";
	$placeHoldersEoc_monthly_reports["English"]["age_30s_count"] = "";
	$fieldLabelsEoc_monthly_reports["English"]["age_40s_count"] = "Age 40s Count";
	$fieldToolTipsEoc_monthly_reports["English"]["age_40s_count"] = "";
	$placeHoldersEoc_monthly_reports["English"]["age_40s_count"] = "";
	$fieldLabelsEoc_monthly_reports["English"]["age_50s_count"] = "Age 50s Count";
	$fieldToolTipsEoc_monthly_reports["English"]["age_50s_count"] = "";
	$placeHoldersEoc_monthly_reports["English"]["age_50s_count"] = "";
	$fieldLabelsEoc_monthly_reports["English"]["age_60s_count"] = "Age 60s Count";
	$fieldToolTipsEoc_monthly_reports["English"]["age_60s_count"] = "";
	$placeHoldersEoc_monthly_reports["English"]["age_60s_count"] = "";
	$fieldLabelsEoc_monthly_reports["English"]["age_70s_count"] = "Age 70s Count";
	$fieldToolTipsEoc_monthly_reports["English"]["age_70s_count"] = "";
	$placeHoldersEoc_monthly_reports["English"]["age_70s_count"] = "";
	$fieldLabelsEoc_monthly_reports["English"]["age_80s_count"] = "Age 80s Count";
	$fieldToolTipsEoc_monthly_reports["English"]["age_80s_count"] = "";
	$placeHoldersEoc_monthly_reports["English"]["age_80s_count"] = "";
	$fieldLabelsEoc_monthly_reports["English"]["total_customers"] = "Total Customers";
	$fieldToolTipsEoc_monthly_reports["English"]["total_customers"] = "";
	$placeHoldersEoc_monthly_reports["English"]["total_customers"] = "";
	$fieldLabelsEoc_monthly_reports["English"]["new_customers"] = "New Customers";
	$fieldToolTipsEoc_monthly_reports["English"]["new_customers"] = "";
	$placeHoldersEoc_monthly_reports["English"]["new_customers"] = "";
	$fieldLabelsEoc_monthly_reports["English"]["returning_customers"] = "Returning Customers";
	$fieldToolTipsEoc_monthly_reports["English"]["returning_customers"] = "";
	$placeHoldersEoc_monthly_reports["English"]["returning_customers"] = "";
	$fieldLabelsEoc_monthly_reports["English"]["total_ownership_yes"] = "Total Ownership Yes";
	$fieldToolTipsEoc_monthly_reports["English"]["total_ownership_yes"] = "";
	$placeHoldersEoc_monthly_reports["English"]["total_ownership_yes"] = "";
	$fieldLabelsEoc_monthly_reports["English"]["total_ownership_no"] = "Total Ownership No";
	$fieldToolTipsEoc_monthly_reports["English"]["total_ownership_no"] = "";
	$placeHoldersEoc_monthly_reports["English"]["total_ownership_no"] = "";
	$fieldLabelsEoc_monthly_reports["English"]["created_at"] = "Created At";
	$fieldToolTipsEoc_monthly_reports["English"]["created_at"] = "";
	$placeHoldersEoc_monthly_reports["English"]["created_at"] = "";
	$fieldLabelsEoc_monthly_reports["English"]["updated_at"] = "Updated At";
	$fieldToolTipsEoc_monthly_reports["English"]["updated_at"] = "";
	$placeHoldersEoc_monthly_reports["English"]["updated_at"] = "";
	$fieldLabelsEoc_monthly_reports["English"]["year"] = "Year";
	$fieldToolTipsEoc_monthly_reports["English"]["year"] = "";
	$placeHoldersEoc_monthly_reports["English"]["year"] = "";
	$fieldLabelsEoc_monthly_reports["English"]["month"] = "Month";
	$fieldToolTipsEoc_monthly_reports["English"]["month"] = "";
	$placeHoldersEoc_monthly_reports["English"]["month"] = "";
	$fieldLabelsEoc_monthly_reports["English"]["hokkai_dou"] = "Hokkai-dou";
	$fieldToolTipsEoc_monthly_reports["English"]["hokkai_dou"] = "";
	$placeHoldersEoc_monthly_reports["English"]["hokkai_dou"] = "";
	$fieldLabelsEoc_monthly_reports["English"]["aomori_ken"] = "Aomori-ken";
	$fieldToolTipsEoc_monthly_reports["English"]["aomori_ken"] = "";
	$placeHoldersEoc_monthly_reports["English"]["aomori_ken"] = "";
	$fieldLabelsEoc_monthly_reports["English"]["iwate_ken"] = "Iwate-ken";
	$fieldToolTipsEoc_monthly_reports["English"]["iwate_ken"] = "";
	$placeHoldersEoc_monthly_reports["English"]["iwate_ken"] = "";
	$fieldLabelsEoc_monthly_reports["English"]["miyagi_ken"] = "Miyagi-ken";
	$fieldToolTipsEoc_monthly_reports["English"]["miyagi_ken"] = "";
	$placeHoldersEoc_monthly_reports["English"]["miyagi_ken"] = "";
	$fieldLabelsEoc_monthly_reports["English"]["akita_ken"] = "Akita-ken";
	$fieldToolTipsEoc_monthly_reports["English"]["akita_ken"] = "";
	$placeHoldersEoc_monthly_reports["English"]["akita_ken"] = "";
	$fieldLabelsEoc_monthly_reports["English"]["yamagata_ken"] = "Yamagata-ken";
	$fieldToolTipsEoc_monthly_reports["English"]["yamagata_ken"] = "";
	$placeHoldersEoc_monthly_reports["English"]["yamagata_ken"] = "";
	$fieldLabelsEoc_monthly_reports["English"]["fukushima_ken"] = "Fukushima-ken";
	$fieldToolTipsEoc_monthly_reports["English"]["fukushima_ken"] = "";
	$placeHoldersEoc_monthly_reports["English"]["fukushima_ken"] = "";
	$fieldLabelsEoc_monthly_reports["English"]["ibaraki_ken"] = "Ibaraki-ken";
	$fieldToolTipsEoc_monthly_reports["English"]["ibaraki_ken"] = "";
	$placeHoldersEoc_monthly_reports["English"]["ibaraki_ken"] = "";
	$fieldLabelsEoc_monthly_reports["English"]["tochigi_ken"] = "Tochigi-ken";
	$fieldToolTipsEoc_monthly_reports["English"]["tochigi_ken"] = "";
	$placeHoldersEoc_monthly_reports["English"]["tochigi_ken"] = "";
	$fieldLabelsEoc_monthly_reports["English"]["gunma_ken"] = "Gunma-ken";
	$fieldToolTipsEoc_monthly_reports["English"]["gunma_ken"] = "";
	$placeHoldersEoc_monthly_reports["English"]["gunma_ken"] = "";
	$fieldLabelsEoc_monthly_reports["English"]["saitama_ken"] = "Saitama-ken";
	$fieldToolTipsEoc_monthly_reports["English"]["saitama_ken"] = "";
	$placeHoldersEoc_monthly_reports["English"]["saitama_ken"] = "";
	$fieldLabelsEoc_monthly_reports["English"]["chiba_ken"] = "Chiba-ken";
	$fieldToolTipsEoc_monthly_reports["English"]["chiba_ken"] = "";
	$placeHoldersEoc_monthly_reports["English"]["chiba_ken"] = "";
	$fieldLabelsEoc_monthly_reports["English"]["tokyo_ken"] = "Tokyo-ken";
	$fieldToolTipsEoc_monthly_reports["English"]["tokyo_ken"] = "";
	$placeHoldersEoc_monthly_reports["English"]["tokyo_ken"] = "";
	$fieldLabelsEoc_monthly_reports["English"]["kanagawa_ken"] = "Kanagawa-ken";
	$fieldToolTipsEoc_monthly_reports["English"]["kanagawa_ken"] = "";
	$placeHoldersEoc_monthly_reports["English"]["kanagawa_ken"] = "";
	$fieldLabelsEoc_monthly_reports["English"]["niigata_ken"] = "Niigata-ken";
	$fieldToolTipsEoc_monthly_reports["English"]["niigata_ken"] = "";
	$placeHoldersEoc_monthly_reports["English"]["niigata_ken"] = "";
	$fieldLabelsEoc_monthly_reports["English"]["toyama_ken"] = "Toyama-ken";
	$fieldToolTipsEoc_monthly_reports["English"]["toyama_ken"] = "";
	$placeHoldersEoc_monthly_reports["English"]["toyama_ken"] = "";
	$fieldLabelsEoc_monthly_reports["English"]["ishikawa_ken"] = "Ishikawa-ken";
	$fieldToolTipsEoc_monthly_reports["English"]["ishikawa_ken"] = "";
	$placeHoldersEoc_monthly_reports["English"]["ishikawa_ken"] = "";
	$fieldLabelsEoc_monthly_reports["English"]["fukui_ken"] = "Fukui-ken";
	$fieldToolTipsEoc_monthly_reports["English"]["fukui_ken"] = "";
	$placeHoldersEoc_monthly_reports["English"]["fukui_ken"] = "";
	$fieldLabelsEoc_monthly_reports["English"]["yamanashi_ken"] = "Yamanashi-ken";
	$fieldToolTipsEoc_monthly_reports["English"]["yamanashi_ken"] = "";
	$placeHoldersEoc_monthly_reports["English"]["yamanashi_ken"] = "";
	$fieldLabelsEoc_monthly_reports["English"]["nagano_ken"] = "Nagano-ken";
	$fieldToolTipsEoc_monthly_reports["English"]["nagano_ken"] = "";
	$placeHoldersEoc_monthly_reports["English"]["nagano_ken"] = "";
	$fieldLabelsEoc_monthly_reports["English"]["gifu_ken"] = "Gifu-ken";
	$fieldToolTipsEoc_monthly_reports["English"]["gifu_ken"] = "";
	$placeHoldersEoc_monthly_reports["English"]["gifu_ken"] = "";
	$fieldLabelsEoc_monthly_reports["English"]["shizuoka_ken"] = "Shizuoka-ken";
	$fieldToolTipsEoc_monthly_reports["English"]["shizuoka_ken"] = "";
	$placeHoldersEoc_monthly_reports["English"]["shizuoka_ken"] = "";
	$fieldLabelsEoc_monthly_reports["English"]["aichi_ken"] = "Aichi-ken";
	$fieldToolTipsEoc_monthly_reports["English"]["aichi_ken"] = "";
	$placeHoldersEoc_monthly_reports["English"]["aichi_ken"] = "";
	$fieldLabelsEoc_monthly_reports["English"]["mie_ken"] = "Mie-ken";
	$fieldToolTipsEoc_monthly_reports["English"]["mie_ken"] = "";
	$placeHoldersEoc_monthly_reports["English"]["mie_ken"] = "";
	$fieldLabelsEoc_monthly_reports["English"]["shiga_ken"] = "Shiga-ken";
	$fieldToolTipsEoc_monthly_reports["English"]["shiga_ken"] = "";
	$placeHoldersEoc_monthly_reports["English"]["shiga_ken"] = "";
	$fieldLabelsEoc_monthly_reports["English"]["kyoto_fu"] = "Kyoto-fu";
	$fieldToolTipsEoc_monthly_reports["English"]["kyoto_fu"] = "";
	$placeHoldersEoc_monthly_reports["English"]["kyoto_fu"] = "";
	$fieldLabelsEoc_monthly_reports["English"]["osaka_fu"] = "Osaka-fu";
	$fieldToolTipsEoc_monthly_reports["English"]["osaka_fu"] = "";
	$placeHoldersEoc_monthly_reports["English"]["osaka_fu"] = "";
	$fieldLabelsEoc_monthly_reports["English"]["hyogo_ken"] = "Hyogo-ken";
	$fieldToolTipsEoc_monthly_reports["English"]["hyogo_ken"] = "";
	$placeHoldersEoc_monthly_reports["English"]["hyogo_ken"] = "";
	$fieldLabelsEoc_monthly_reports["English"]["nara_ken"] = "Nara-ken";
	$fieldToolTipsEoc_monthly_reports["English"]["nara_ken"] = "";
	$placeHoldersEoc_monthly_reports["English"]["nara_ken"] = "";
	$fieldLabelsEoc_monthly_reports["English"]["wakayama_ken"] = "Wakayama-ken";
	$fieldToolTipsEoc_monthly_reports["English"]["wakayama_ken"] = "";
	$placeHoldersEoc_monthly_reports["English"]["wakayama_ken"] = "";
	$fieldLabelsEoc_monthly_reports["English"]["tottori_ken"] = "Tottori-ken";
	$fieldToolTipsEoc_monthly_reports["English"]["tottori_ken"] = "";
	$placeHoldersEoc_monthly_reports["English"]["tottori_ken"] = "";
	$fieldLabelsEoc_monthly_reports["English"]["shimane_ken"] = "Shimane-ken";
	$fieldToolTipsEoc_monthly_reports["English"]["shimane_ken"] = "";
	$placeHoldersEoc_monthly_reports["English"]["shimane_ken"] = "";
	$fieldLabelsEoc_monthly_reports["English"]["okayama_ken"] = "Okayama-ken";
	$fieldToolTipsEoc_monthly_reports["English"]["okayama_ken"] = "";
	$placeHoldersEoc_monthly_reports["English"]["okayama_ken"] = "";
	$fieldLabelsEoc_monthly_reports["English"]["hiroshima_ken"] = "Hiroshima-ken";
	$fieldToolTipsEoc_monthly_reports["English"]["hiroshima_ken"] = "";
	$placeHoldersEoc_monthly_reports["English"]["hiroshima_ken"] = "";
	$fieldLabelsEoc_monthly_reports["English"]["yamaguchi_ken"] = "Yamaguchi-ken";
	$fieldToolTipsEoc_monthly_reports["English"]["yamaguchi_ken"] = "";
	$placeHoldersEoc_monthly_reports["English"]["yamaguchi_ken"] = "";
	$fieldLabelsEoc_monthly_reports["English"]["tokushima_ken"] = "Tokushima-ken";
	$fieldToolTipsEoc_monthly_reports["English"]["tokushima_ken"] = "";
	$placeHoldersEoc_monthly_reports["English"]["tokushima_ken"] = "";
	$fieldLabelsEoc_monthly_reports["English"]["kagawa_ken"] = "Kagawa-ken";
	$fieldToolTipsEoc_monthly_reports["English"]["kagawa_ken"] = "";
	$placeHoldersEoc_monthly_reports["English"]["kagawa_ken"] = "";
	$fieldLabelsEoc_monthly_reports["English"]["ehime_ken"] = "Ehime-ken";
	$fieldToolTipsEoc_monthly_reports["English"]["ehime_ken"] = "";
	$placeHoldersEoc_monthly_reports["English"]["ehime_ken"] = "";
	$fieldLabelsEoc_monthly_reports["English"]["kochi_ken"] = "Kochi-ken";
	$fieldToolTipsEoc_monthly_reports["English"]["kochi_ken"] = "";
	$placeHoldersEoc_monthly_reports["English"]["kochi_ken"] = "";
	$fieldLabelsEoc_monthly_reports["English"]["fukuoka_ken"] = "Fukuoka-ken";
	$fieldToolTipsEoc_monthly_reports["English"]["fukuoka_ken"] = "";
	$placeHoldersEoc_monthly_reports["English"]["fukuoka_ken"] = "";
	$fieldLabelsEoc_monthly_reports["English"]["saga_ken"] = "Saga-ken";
	$fieldToolTipsEoc_monthly_reports["English"]["saga_ken"] = "";
	$placeHoldersEoc_monthly_reports["English"]["saga_ken"] = "";
	$fieldLabelsEoc_monthly_reports["English"]["nagasaki_ken"] = "Nagasaki-ken";
	$fieldToolTipsEoc_monthly_reports["English"]["nagasaki_ken"] = "";
	$placeHoldersEoc_monthly_reports["English"]["nagasaki_ken"] = "";
	$fieldLabelsEoc_monthly_reports["English"]["kumamoto_ken"] = "Kumamoto-ken";
	$fieldToolTipsEoc_monthly_reports["English"]["kumamoto_ken"] = "";
	$placeHoldersEoc_monthly_reports["English"]["kumamoto_ken"] = "";
	$fieldLabelsEoc_monthly_reports["English"]["oita_ken"] = "Oita-ken";
	$fieldToolTipsEoc_monthly_reports["English"]["oita_ken"] = "";
	$placeHoldersEoc_monthly_reports["English"]["oita_ken"] = "";
	$fieldLabelsEoc_monthly_reports["English"]["miyazaki_ken"] = "Miyazaki-ken";
	$fieldToolTipsEoc_monthly_reports["English"]["miyazaki_ken"] = "";
	$placeHoldersEoc_monthly_reports["English"]["miyazaki_ken"] = "";
	$fieldLabelsEoc_monthly_reports["English"]["kagoshima_ken"] = "Kagoshima-ken";
	$fieldToolTipsEoc_monthly_reports["English"]["kagoshima_ken"] = "";
	$placeHoldersEoc_monthly_reports["English"]["kagoshima_ken"] = "";
	$fieldLabelsEoc_monthly_reports["English"]["okinawa_ken"] = "Okinawa-ken";
	$fieldToolTipsEoc_monthly_reports["English"]["okinawa_ken"] = "";
	$placeHoldersEoc_monthly_reports["English"]["okinawa_ken"] = "";
	if (count($fieldToolTipsEoc_monthly_reports["English"]))
		$tdataEoc_monthly_reports[".isUseToolTips"] = true;
}


	$tdataEoc_monthly_reports[".NCSearch"] = true;



$tdataEoc_monthly_reports[".shortTableName"] = "Eoc_monthly_reports";
$tdataEoc_monthly_reports[".nSecOptions"] = 0;
$tdataEoc_monthly_reports[".recsPerRowPrint"] = 1;
$tdataEoc_monthly_reports[".mainTableOwnerID"] = "";
$tdataEoc_monthly_reports[".moveNext"] = 1;
$tdataEoc_monthly_reports[".entityType"] = 0;

$tdataEoc_monthly_reports[".strOriginalTableName"] = "Eoc_monthly_reports";

	



$tdataEoc_monthly_reports[".showAddInPopup"] = false;

$tdataEoc_monthly_reports[".showEditInPopup"] = false;

$tdataEoc_monthly_reports[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataEoc_monthly_reports[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataEoc_monthly_reports[".fieldsForRegister"] = array();

$tdataEoc_monthly_reports[".listAjax"] = false;

	$tdataEoc_monthly_reports[".audit"] = true;

	$tdataEoc_monthly_reports[".locking"] = false;



$tdataEoc_monthly_reports[".list"] = true;



$tdataEoc_monthly_reports[".reorderRecordsByHeader"] = true;





$tdataEoc_monthly_reports[".exportTo"] = true;



$tdataEoc_monthly_reports[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataEoc_monthly_reports[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataEoc_monthly_reports[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataEoc_monthly_reports[".searchSaving"] = false;
//

$tdataEoc_monthly_reports[".showSearchPanel"] = true;
		$tdataEoc_monthly_reports[".flexibleSearch"] = true;

$tdataEoc_monthly_reports[".isUseAjaxSuggest"] = true;

$tdataEoc_monthly_reports[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdataEoc_monthly_reports[".ajaxCodeSnippetAdded"] = false;

$tdataEoc_monthly_reports[".buttonsAdded"] = false;

$tdataEoc_monthly_reports[".addPageEvents"] = false;

// use timepicker for search panel
$tdataEoc_monthly_reports[".isUseTimeForSearch"] = false;





$tdataEoc_monthly_reports[".allSearchFields"] = array();
$tdataEoc_monthly_reports[".filterFields"] = array();
$tdataEoc_monthly_reports[".requiredSearchFields"] = array();

$tdataEoc_monthly_reports[".allSearchFields"][] = "id";
	$tdataEoc_monthly_reports[".allSearchFields"][] = "year";
	$tdataEoc_monthly_reports[".allSearchFields"][] = "month";
	$tdataEoc_monthly_reports[".allSearchFields"][] = "male_count";
	$tdataEoc_monthly_reports[".allSearchFields"][] = "female_count";
	$tdataEoc_monthly_reports[".allSearchFields"][] = "new_customers";
	$tdataEoc_monthly_reports[".allSearchFields"][] = "returning_customers";
	$tdataEoc_monthly_reports[".allSearchFields"][] = "total_bullion_dept";
	$tdataEoc_monthly_reports[".allSearchFields"][] = "total_jewelry_dept";
	$tdataEoc_monthly_reports[".allSearchFields"][] = "total_diamond_dept";
	$tdataEoc_monthly_reports[".allSearchFields"][] = "total_watch_dept";
	$tdataEoc_monthly_reports[".allSearchFields"][] = "total_fashion_dept";
	$tdataEoc_monthly_reports[".allSearchFields"][] = "total_common_dept";
	$tdataEoc_monthly_reports[".allSearchFields"][] = "age_20s_count";
	$tdataEoc_monthly_reports[".allSearchFields"][] = "age_30s_count";
	$tdataEoc_monthly_reports[".allSearchFields"][] = "age_40s_count";
	$tdataEoc_monthly_reports[".allSearchFields"][] = "age_50s_count";
	$tdataEoc_monthly_reports[".allSearchFields"][] = "age_60s_count";
	$tdataEoc_monthly_reports[".allSearchFields"][] = "age_70s_count";
	$tdataEoc_monthly_reports[".allSearchFields"][] = "age_80s_count";
	$tdataEoc_monthly_reports[".allSearchFields"][] = "hokkai-dou";
	$tdataEoc_monthly_reports[".allSearchFields"][] = "aomori-ken";
	$tdataEoc_monthly_reports[".allSearchFields"][] = "iwate-ken";
	$tdataEoc_monthly_reports[".allSearchFields"][] = "miyagi-ken";
	$tdataEoc_monthly_reports[".allSearchFields"][] = "akita-ken";
	$tdataEoc_monthly_reports[".allSearchFields"][] = "yamagata-ken";
	$tdataEoc_monthly_reports[".allSearchFields"][] = "fukushima-ken";
	$tdataEoc_monthly_reports[".allSearchFields"][] = "ibaraki-ken";
	$tdataEoc_monthly_reports[".allSearchFields"][] = "tochigi-ken";
	$tdataEoc_monthly_reports[".allSearchFields"][] = "gunma-ken";
	$tdataEoc_monthly_reports[".allSearchFields"][] = "saitama-ken";
	$tdataEoc_monthly_reports[".allSearchFields"][] = "chiba-ken";
	$tdataEoc_monthly_reports[".allSearchFields"][] = "tokyo-ken";
	$tdataEoc_monthly_reports[".allSearchFields"][] = "kanagawa-ken";
	$tdataEoc_monthly_reports[".allSearchFields"][] = "niigata-ken";
	$tdataEoc_monthly_reports[".allSearchFields"][] = "toyama-ken";
	$tdataEoc_monthly_reports[".allSearchFields"][] = "ishikawa-ken";
	$tdataEoc_monthly_reports[".allSearchFields"][] = "fukui-ken";
	$tdataEoc_monthly_reports[".allSearchFields"][] = "yamanashi-ken";
	$tdataEoc_monthly_reports[".allSearchFields"][] = "nagano-ken";
	$tdataEoc_monthly_reports[".allSearchFields"][] = "gifu-ken";
	$tdataEoc_monthly_reports[".allSearchFields"][] = "shizuoka-ken";
	$tdataEoc_monthly_reports[".allSearchFields"][] = "aichi-ken";
	$tdataEoc_monthly_reports[".allSearchFields"][] = "mie-ken";
	$tdataEoc_monthly_reports[".allSearchFields"][] = "shiga-ken";
	$tdataEoc_monthly_reports[".allSearchFields"][] = "kyoto-fu";
	$tdataEoc_monthly_reports[".allSearchFields"][] = "osaka-fu";
	$tdataEoc_monthly_reports[".allSearchFields"][] = "hyogo-ken";
	$tdataEoc_monthly_reports[".allSearchFields"][] = "nara-ken";
	$tdataEoc_monthly_reports[".allSearchFields"][] = "wakayama-ken";
	$tdataEoc_monthly_reports[".allSearchFields"][] = "tottori-ken";
	$tdataEoc_monthly_reports[".allSearchFields"][] = "shimane-ken";
	$tdataEoc_monthly_reports[".allSearchFields"][] = "okayama-ken";
	$tdataEoc_monthly_reports[".allSearchFields"][] = "hiroshima-ken";
	$tdataEoc_monthly_reports[".allSearchFields"][] = "yamaguchi-ken";
	$tdataEoc_monthly_reports[".allSearchFields"][] = "tokushima-ken";
	$tdataEoc_monthly_reports[".allSearchFields"][] = "kagawa-ken";
	$tdataEoc_monthly_reports[".allSearchFields"][] = "ehime-ken";
	$tdataEoc_monthly_reports[".allSearchFields"][] = "kochi-ken";
	$tdataEoc_monthly_reports[".allSearchFields"][] = "fukuoka-ken";
	$tdataEoc_monthly_reports[".allSearchFields"][] = "saga-ken";
	$tdataEoc_monthly_reports[".allSearchFields"][] = "nagasaki-ken";
	$tdataEoc_monthly_reports[".allSearchFields"][] = "kumamoto-ken";
	$tdataEoc_monthly_reports[".allSearchFields"][] = "oita-ken";
	$tdataEoc_monthly_reports[".allSearchFields"][] = "miyazaki-ken";
	$tdataEoc_monthly_reports[".allSearchFields"][] = "kagoshima-ken";
	$tdataEoc_monthly_reports[".allSearchFields"][] = "okinawa-ken";
	$tdataEoc_monthly_reports[".allSearchFields"][] = "created_at";
	$tdataEoc_monthly_reports[".allSearchFields"][] = "updated_at";
	

$tdataEoc_monthly_reports[".googleLikeFields"] = array();
$tdataEoc_monthly_reports[".googleLikeFields"][] = "id";
$tdataEoc_monthly_reports[".googleLikeFields"][] = "year";
$tdataEoc_monthly_reports[".googleLikeFields"][] = "month";
$tdataEoc_monthly_reports[".googleLikeFields"][] = "male_count";
$tdataEoc_monthly_reports[".googleLikeFields"][] = "female_count";
$tdataEoc_monthly_reports[".googleLikeFields"][] = "total_diamond_dept";
$tdataEoc_monthly_reports[".googleLikeFields"][] = "total_common_dept";
$tdataEoc_monthly_reports[".googleLikeFields"][] = "total_bullion_dept";
$tdataEoc_monthly_reports[".googleLikeFields"][] = "total_jewelry_dept";
$tdataEoc_monthly_reports[".googleLikeFields"][] = "total_watch_dept";
$tdataEoc_monthly_reports[".googleLikeFields"][] = "total_fashion_dept";
$tdataEoc_monthly_reports[".googleLikeFields"][] = "age_20s_count";
$tdataEoc_monthly_reports[".googleLikeFields"][] = "age_30s_count";
$tdataEoc_monthly_reports[".googleLikeFields"][] = "age_40s_count";
$tdataEoc_monthly_reports[".googleLikeFields"][] = "age_50s_count";
$tdataEoc_monthly_reports[".googleLikeFields"][] = "age_60s_count";
$tdataEoc_monthly_reports[".googleLikeFields"][] = "age_70s_count";
$tdataEoc_monthly_reports[".googleLikeFields"][] = "age_80s_count";
$tdataEoc_monthly_reports[".googleLikeFields"][] = "total_customers";
$tdataEoc_monthly_reports[".googleLikeFields"][] = "new_customers";
$tdataEoc_monthly_reports[".googleLikeFields"][] = "returning_customers";
$tdataEoc_monthly_reports[".googleLikeFields"][] = "total_ownership_yes";
$tdataEoc_monthly_reports[".googleLikeFields"][] = "total_ownership_no";
$tdataEoc_monthly_reports[".googleLikeFields"][] = "created_at";
$tdataEoc_monthly_reports[".googleLikeFields"][] = "updated_at";
$tdataEoc_monthly_reports[".googleLikeFields"][] = "hokkai-dou";
$tdataEoc_monthly_reports[".googleLikeFields"][] = "aomori-ken";
$tdataEoc_monthly_reports[".googleLikeFields"][] = "iwate-ken";
$tdataEoc_monthly_reports[".googleLikeFields"][] = "miyagi-ken";
$tdataEoc_monthly_reports[".googleLikeFields"][] = "akita-ken";
$tdataEoc_monthly_reports[".googleLikeFields"][] = "yamagata-ken";
$tdataEoc_monthly_reports[".googleLikeFields"][] = "fukushima-ken";
$tdataEoc_monthly_reports[".googleLikeFields"][] = "ibaraki-ken";
$tdataEoc_monthly_reports[".googleLikeFields"][] = "tochigi-ken";
$tdataEoc_monthly_reports[".googleLikeFields"][] = "gunma-ken";
$tdataEoc_monthly_reports[".googleLikeFields"][] = "saitama-ken";
$tdataEoc_monthly_reports[".googleLikeFields"][] = "chiba-ken";
$tdataEoc_monthly_reports[".googleLikeFields"][] = "tokyo-ken";
$tdataEoc_monthly_reports[".googleLikeFields"][] = "kanagawa-ken";
$tdataEoc_monthly_reports[".googleLikeFields"][] = "niigata-ken";
$tdataEoc_monthly_reports[".googleLikeFields"][] = "toyama-ken";
$tdataEoc_monthly_reports[".googleLikeFields"][] = "ishikawa-ken";
$tdataEoc_monthly_reports[".googleLikeFields"][] = "fukui-ken";
$tdataEoc_monthly_reports[".googleLikeFields"][] = "yamanashi-ken";
$tdataEoc_monthly_reports[".googleLikeFields"][] = "nagano-ken";
$tdataEoc_monthly_reports[".googleLikeFields"][] = "gifu-ken";
$tdataEoc_monthly_reports[".googleLikeFields"][] = "shizuoka-ken";
$tdataEoc_monthly_reports[".googleLikeFields"][] = "aichi-ken";
$tdataEoc_monthly_reports[".googleLikeFields"][] = "mie-ken";
$tdataEoc_monthly_reports[".googleLikeFields"][] = "shiga-ken";
$tdataEoc_monthly_reports[".googleLikeFields"][] = "kyoto-fu";
$tdataEoc_monthly_reports[".googleLikeFields"][] = "osaka-fu";
$tdataEoc_monthly_reports[".googleLikeFields"][] = "hyogo-ken";
$tdataEoc_monthly_reports[".googleLikeFields"][] = "nara-ken";
$tdataEoc_monthly_reports[".googleLikeFields"][] = "wakayama-ken";
$tdataEoc_monthly_reports[".googleLikeFields"][] = "tottori-ken";
$tdataEoc_monthly_reports[".googleLikeFields"][] = "shimane-ken";
$tdataEoc_monthly_reports[".googleLikeFields"][] = "okayama-ken";
$tdataEoc_monthly_reports[".googleLikeFields"][] = "hiroshima-ken";
$tdataEoc_monthly_reports[".googleLikeFields"][] = "yamaguchi-ken";
$tdataEoc_monthly_reports[".googleLikeFields"][] = "tokushima-ken";
$tdataEoc_monthly_reports[".googleLikeFields"][] = "kagawa-ken";
$tdataEoc_monthly_reports[".googleLikeFields"][] = "ehime-ken";
$tdataEoc_monthly_reports[".googleLikeFields"][] = "kochi-ken";
$tdataEoc_monthly_reports[".googleLikeFields"][] = "fukuoka-ken";
$tdataEoc_monthly_reports[".googleLikeFields"][] = "saga-ken";
$tdataEoc_monthly_reports[".googleLikeFields"][] = "nagasaki-ken";
$tdataEoc_monthly_reports[".googleLikeFields"][] = "kumamoto-ken";
$tdataEoc_monthly_reports[".googleLikeFields"][] = "oita-ken";
$tdataEoc_monthly_reports[".googleLikeFields"][] = "miyazaki-ken";
$tdataEoc_monthly_reports[".googleLikeFields"][] = "kagoshima-ken";
$tdataEoc_monthly_reports[".googleLikeFields"][] = "okinawa-ken";


$tdataEoc_monthly_reports[".advSearchFields"] = array();
$tdataEoc_monthly_reports[".advSearchFields"][] = "id";
$tdataEoc_monthly_reports[".advSearchFields"][] = "year";
$tdataEoc_monthly_reports[".advSearchFields"][] = "month";
$tdataEoc_monthly_reports[".advSearchFields"][] = "male_count";
$tdataEoc_monthly_reports[".advSearchFields"][] = "female_count";
$tdataEoc_monthly_reports[".advSearchFields"][] = "new_customers";
$tdataEoc_monthly_reports[".advSearchFields"][] = "returning_customers";
$tdataEoc_monthly_reports[".advSearchFields"][] = "total_bullion_dept";
$tdataEoc_monthly_reports[".advSearchFields"][] = "total_jewelry_dept";
$tdataEoc_monthly_reports[".advSearchFields"][] = "total_diamond_dept";
$tdataEoc_monthly_reports[".advSearchFields"][] = "total_watch_dept";
$tdataEoc_monthly_reports[".advSearchFields"][] = "total_fashion_dept";
$tdataEoc_monthly_reports[".advSearchFields"][] = "total_common_dept";
$tdataEoc_monthly_reports[".advSearchFields"][] = "age_20s_count";
$tdataEoc_monthly_reports[".advSearchFields"][] = "age_30s_count";
$tdataEoc_monthly_reports[".advSearchFields"][] = "age_40s_count";
$tdataEoc_monthly_reports[".advSearchFields"][] = "age_50s_count";
$tdataEoc_monthly_reports[".advSearchFields"][] = "age_60s_count";
$tdataEoc_monthly_reports[".advSearchFields"][] = "age_70s_count";
$tdataEoc_monthly_reports[".advSearchFields"][] = "age_80s_count";
$tdataEoc_monthly_reports[".advSearchFields"][] = "hokkai-dou";
$tdataEoc_monthly_reports[".advSearchFields"][] = "aomori-ken";
$tdataEoc_monthly_reports[".advSearchFields"][] = "iwate-ken";
$tdataEoc_monthly_reports[".advSearchFields"][] = "miyagi-ken";
$tdataEoc_monthly_reports[".advSearchFields"][] = "akita-ken";
$tdataEoc_monthly_reports[".advSearchFields"][] = "yamagata-ken";
$tdataEoc_monthly_reports[".advSearchFields"][] = "fukushima-ken";
$tdataEoc_monthly_reports[".advSearchFields"][] = "ibaraki-ken";
$tdataEoc_monthly_reports[".advSearchFields"][] = "tochigi-ken";
$tdataEoc_monthly_reports[".advSearchFields"][] = "gunma-ken";
$tdataEoc_monthly_reports[".advSearchFields"][] = "saitama-ken";
$tdataEoc_monthly_reports[".advSearchFields"][] = "chiba-ken";
$tdataEoc_monthly_reports[".advSearchFields"][] = "tokyo-ken";
$tdataEoc_monthly_reports[".advSearchFields"][] = "kanagawa-ken";
$tdataEoc_monthly_reports[".advSearchFields"][] = "niigata-ken";
$tdataEoc_monthly_reports[".advSearchFields"][] = "toyama-ken";
$tdataEoc_monthly_reports[".advSearchFields"][] = "ishikawa-ken";
$tdataEoc_monthly_reports[".advSearchFields"][] = "fukui-ken";
$tdataEoc_monthly_reports[".advSearchFields"][] = "yamanashi-ken";
$tdataEoc_monthly_reports[".advSearchFields"][] = "nagano-ken";
$tdataEoc_monthly_reports[".advSearchFields"][] = "gifu-ken";
$tdataEoc_monthly_reports[".advSearchFields"][] = "shizuoka-ken";
$tdataEoc_monthly_reports[".advSearchFields"][] = "aichi-ken";
$tdataEoc_monthly_reports[".advSearchFields"][] = "mie-ken";
$tdataEoc_monthly_reports[".advSearchFields"][] = "shiga-ken";
$tdataEoc_monthly_reports[".advSearchFields"][] = "kyoto-fu";
$tdataEoc_monthly_reports[".advSearchFields"][] = "osaka-fu";
$tdataEoc_monthly_reports[".advSearchFields"][] = "hyogo-ken";
$tdataEoc_monthly_reports[".advSearchFields"][] = "nara-ken";
$tdataEoc_monthly_reports[".advSearchFields"][] = "wakayama-ken";
$tdataEoc_monthly_reports[".advSearchFields"][] = "tottori-ken";
$tdataEoc_monthly_reports[".advSearchFields"][] = "shimane-ken";
$tdataEoc_monthly_reports[".advSearchFields"][] = "okayama-ken";
$tdataEoc_monthly_reports[".advSearchFields"][] = "hiroshima-ken";
$tdataEoc_monthly_reports[".advSearchFields"][] = "yamaguchi-ken";
$tdataEoc_monthly_reports[".advSearchFields"][] = "tokushima-ken";
$tdataEoc_monthly_reports[".advSearchFields"][] = "kagawa-ken";
$tdataEoc_monthly_reports[".advSearchFields"][] = "ehime-ken";
$tdataEoc_monthly_reports[".advSearchFields"][] = "kochi-ken";
$tdataEoc_monthly_reports[".advSearchFields"][] = "fukuoka-ken";
$tdataEoc_monthly_reports[".advSearchFields"][] = "saga-ken";
$tdataEoc_monthly_reports[".advSearchFields"][] = "nagasaki-ken";
$tdataEoc_monthly_reports[".advSearchFields"][] = "kumamoto-ken";
$tdataEoc_monthly_reports[".advSearchFields"][] = "oita-ken";
$tdataEoc_monthly_reports[".advSearchFields"][] = "miyazaki-ken";
$tdataEoc_monthly_reports[".advSearchFields"][] = "kagoshima-ken";
$tdataEoc_monthly_reports[".advSearchFields"][] = "okinawa-ken";
$tdataEoc_monthly_reports[".advSearchFields"][] = "created_at";
$tdataEoc_monthly_reports[".advSearchFields"][] = "updated_at";

$tdataEoc_monthly_reports[".tableType"] = "list";

$tdataEoc_monthly_reports[".printerPageOrientation"] = 0;
$tdataEoc_monthly_reports[".nPrinterPageScale"] = 100;

$tdataEoc_monthly_reports[".nPrinterSplitRecords"] = 40;

$tdataEoc_monthly_reports[".nPrinterPDFSplitRecords"] = 40;



$tdataEoc_monthly_reports[".geocodingEnabled"] = false;





$tdataEoc_monthly_reports[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataEoc_monthly_reports[".pageSize"] = 20;

$tdataEoc_monthly_reports[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `Eoc_monthly_reports`.`id` DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataEoc_monthly_reports[".strOrderBy"] = $tstrOrderBy;

$tdataEoc_monthly_reports[".orderindexes"] = array();
$tdataEoc_monthly_reports[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "`Eoc_monthly_reports`.`id`");

$tdataEoc_monthly_reports[".sqlHead"] = "SELECT `Eoc_monthly_reports`.`id`,  `Eoc_monthly_reports`.`year`,  `Eoc_monthly_reports`.`month`,  `Eoc_monthly_reports`.`male_count`,  `Eoc_monthly_reports`.`female_count`,  `Eoc_monthly_reports`.`total_diamond_dept`,  `Eoc_monthly_reports`.`total_common_dept`,  `Eoc_monthly_reports`.`total_bullion_dept`,  `Eoc_monthly_reports`.`total_jewelry_dept`,  `Eoc_monthly_reports`.`total_watch_dept`,  `Eoc_monthly_reports`.`total_fashion_dept`,  `Eoc_monthly_reports`.`age_20s_count`,  `Eoc_monthly_reports`.`age_30s_count`,  `Eoc_monthly_reports`.`age_40s_count`,  `Eoc_monthly_reports`.`age_50s_count`,  `Eoc_monthly_reports`.`age_60s_count`,  `Eoc_monthly_reports`.`age_70s_count`,  `Eoc_monthly_reports`.`age_80s_count`,  `Eoc_monthly_reports`.`total_customers`,  `Eoc_monthly_reports`.`new_customers`,  `Eoc_monthly_reports`.`returning_customers`,  `Eoc_monthly_reports`.`total_ownership_yes`,  `Eoc_monthly_reports`.`total_ownership_no`,  `Eoc_monthly_reports`.`created_at`,  `Eoc_monthly_reports`.`updated_at`,  `Eoc_monthly_reports_by_prefectures`.`hokkai-dou`,  `Eoc_monthly_reports_by_prefectures`.`aomori-ken`,  `Eoc_monthly_reports_by_prefectures`.`iwate-ken`,  `Eoc_monthly_reports_by_prefectures`.`miyagi-ken`,  `Eoc_monthly_reports_by_prefectures`.`akita-ken`,  `Eoc_monthly_reports_by_prefectures`.`yamagata-ken`,  `Eoc_monthly_reports_by_prefectures`.`fukushima-ken`,  `Eoc_monthly_reports_by_prefectures`.`ibaraki-ken`,  `Eoc_monthly_reports_by_prefectures`.`tochigi-ken`,  `Eoc_monthly_reports_by_prefectures`.`gunma-ken`,  `Eoc_monthly_reports_by_prefectures`.`saitama-ken`,  `Eoc_monthly_reports_by_prefectures`.`chiba-ken`,  `Eoc_monthly_reports_by_prefectures`.`tokyo-ken`,  `Eoc_monthly_reports_by_prefectures`.`kanagawa-ken`,  `Eoc_monthly_reports_by_prefectures`.`niigata-ken`,  `Eoc_monthly_reports_by_prefectures`.`toyama-ken`,  `Eoc_monthly_reports_by_prefectures`.`ishikawa-ken`,  `Eoc_monthly_reports_by_prefectures`.`fukui-ken`,  `Eoc_monthly_reports_by_prefectures`.`yamanashi-ken`,  `Eoc_monthly_reports_by_prefectures`.`nagano-ken`,  `Eoc_monthly_reports_by_prefectures`.`gifu-ken`,  `Eoc_monthly_reports_by_prefectures`.`shizuoka-ken`,  `Eoc_monthly_reports_by_prefectures`.`aichi-ken`,  `Eoc_monthly_reports_by_prefectures`.`mie-ken`,  `Eoc_monthly_reports_by_prefectures`.`shiga-ken`,  `Eoc_monthly_reports_by_prefectures`.`kyoto-fu`,  `Eoc_monthly_reports_by_prefectures`.`osaka-fu`,  `Eoc_monthly_reports_by_prefectures`.`hyogo-ken`,  `Eoc_monthly_reports_by_prefectures`.`nara-ken`,  `Eoc_monthly_reports_by_prefectures`.`wakayama-ken`,  `Eoc_monthly_reports_by_prefectures`.`tottori-ken`,  `Eoc_monthly_reports_by_prefectures`.`shimane-ken`,  `Eoc_monthly_reports_by_prefectures`.`okayama-ken`,  `Eoc_monthly_reports_by_prefectures`.`hiroshima-ken`,  `Eoc_monthly_reports_by_prefectures`.`yamaguchi-ken`,  `Eoc_monthly_reports_by_prefectures`.`tokushima-ken`,  `Eoc_monthly_reports_by_prefectures`.`kagawa-ken`,  `Eoc_monthly_reports_by_prefectures`.`ehime-ken`,  `Eoc_monthly_reports_by_prefectures`.`kochi-ken`,  `Eoc_monthly_reports_by_prefectures`.`fukuoka-ken`,  `Eoc_monthly_reports_by_prefectures`.`saga-ken`,  `Eoc_monthly_reports_by_prefectures`.`nagasaki-ken`,  `Eoc_monthly_reports_by_prefectures`.`kumamoto-ken`,  `Eoc_monthly_reports_by_prefectures`.`oita-ken`,  `Eoc_monthly_reports_by_prefectures`.`miyazaki-ken`,  `Eoc_monthly_reports_by_prefectures`.`kagoshima-ken`,  `Eoc_monthly_reports_by_prefectures`.`okinawa-ken`";
$tdataEoc_monthly_reports[".sqlFrom"] = "FROM `Eoc_monthly_reports`  LEFT OUTER JOIN `Eoc_monthly_reports_by_prefectures` ON `Eoc_monthly_reports`.`id` = `Eoc_monthly_reports_by_prefectures`.`EocMonthlyReport_id`";
$tdataEoc_monthly_reports[".sqlWhereExpr"] = "";
$tdataEoc_monthly_reports[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataEoc_monthly_reports[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataEoc_monthly_reports[".arrGroupsPerPage"] = $arrGPP;

$tdataEoc_monthly_reports[".highlightSearchResults"] = true;

$tableKeysEoc_monthly_reports = array();
$tableKeysEoc_monthly_reports[] = "id";
$tdataEoc_monthly_reports[".Keys"] = $tableKeysEoc_monthly_reports;

$tdataEoc_monthly_reports[".listFields"] = array();
$tdataEoc_monthly_reports[".listFields"][] = "id";
$tdataEoc_monthly_reports[".listFields"][] = "year";
$tdataEoc_monthly_reports[".listFields"][] = "month";
$tdataEoc_monthly_reports[".listFields"][] = "male_count";
$tdataEoc_monthly_reports[".listFields"][] = "female_count";
$tdataEoc_monthly_reports[".listFields"][] = "new_customers";
$tdataEoc_monthly_reports[".listFields"][] = "returning_customers";
$tdataEoc_monthly_reports[".listFields"][] = "total_bullion_dept";
$tdataEoc_monthly_reports[".listFields"][] = "total_jewelry_dept";
$tdataEoc_monthly_reports[".listFields"][] = "total_diamond_dept";
$tdataEoc_monthly_reports[".listFields"][] = "total_watch_dept";
$tdataEoc_monthly_reports[".listFields"][] = "total_fashion_dept";
$tdataEoc_monthly_reports[".listFields"][] = "total_common_dept";
$tdataEoc_monthly_reports[".listFields"][] = "age_20s_count";
$tdataEoc_monthly_reports[".listFields"][] = "age_30s_count";
$tdataEoc_monthly_reports[".listFields"][] = "age_40s_count";
$tdataEoc_monthly_reports[".listFields"][] = "age_50s_count";
$tdataEoc_monthly_reports[".listFields"][] = "age_60s_count";
$tdataEoc_monthly_reports[".listFields"][] = "age_70s_count";
$tdataEoc_monthly_reports[".listFields"][] = "age_80s_count";
$tdataEoc_monthly_reports[".listFields"][] = "hokkai-dou";
$tdataEoc_monthly_reports[".listFields"][] = "aomori-ken";
$tdataEoc_monthly_reports[".listFields"][] = "iwate-ken";
$tdataEoc_monthly_reports[".listFields"][] = "miyagi-ken";
$tdataEoc_monthly_reports[".listFields"][] = "akita-ken";
$tdataEoc_monthly_reports[".listFields"][] = "yamagata-ken";
$tdataEoc_monthly_reports[".listFields"][] = "fukushima-ken";
$tdataEoc_monthly_reports[".listFields"][] = "ibaraki-ken";
$tdataEoc_monthly_reports[".listFields"][] = "tochigi-ken";
$tdataEoc_monthly_reports[".listFields"][] = "gunma-ken";
$tdataEoc_monthly_reports[".listFields"][] = "saitama-ken";
$tdataEoc_monthly_reports[".listFields"][] = "chiba-ken";
$tdataEoc_monthly_reports[".listFields"][] = "tokyo-ken";
$tdataEoc_monthly_reports[".listFields"][] = "kanagawa-ken";
$tdataEoc_monthly_reports[".listFields"][] = "niigata-ken";
$tdataEoc_monthly_reports[".listFields"][] = "toyama-ken";
$tdataEoc_monthly_reports[".listFields"][] = "ishikawa-ken";
$tdataEoc_monthly_reports[".listFields"][] = "fukui-ken";
$tdataEoc_monthly_reports[".listFields"][] = "yamanashi-ken";
$tdataEoc_monthly_reports[".listFields"][] = "nagano-ken";
$tdataEoc_monthly_reports[".listFields"][] = "gifu-ken";
$tdataEoc_monthly_reports[".listFields"][] = "shizuoka-ken";
$tdataEoc_monthly_reports[".listFields"][] = "aichi-ken";
$tdataEoc_monthly_reports[".listFields"][] = "mie-ken";
$tdataEoc_monthly_reports[".listFields"][] = "shiga-ken";
$tdataEoc_monthly_reports[".listFields"][] = "kyoto-fu";
$tdataEoc_monthly_reports[".listFields"][] = "osaka-fu";
$tdataEoc_monthly_reports[".listFields"][] = "hyogo-ken";
$tdataEoc_monthly_reports[".listFields"][] = "nara-ken";
$tdataEoc_monthly_reports[".listFields"][] = "wakayama-ken";
$tdataEoc_monthly_reports[".listFields"][] = "tottori-ken";
$tdataEoc_monthly_reports[".listFields"][] = "shimane-ken";
$tdataEoc_monthly_reports[".listFields"][] = "okayama-ken";
$tdataEoc_monthly_reports[".listFields"][] = "hiroshima-ken";
$tdataEoc_monthly_reports[".listFields"][] = "yamaguchi-ken";
$tdataEoc_monthly_reports[".listFields"][] = "tokushima-ken";
$tdataEoc_monthly_reports[".listFields"][] = "kagawa-ken";
$tdataEoc_monthly_reports[".listFields"][] = "ehime-ken";
$tdataEoc_monthly_reports[".listFields"][] = "kochi-ken";
$tdataEoc_monthly_reports[".listFields"][] = "fukuoka-ken";
$tdataEoc_monthly_reports[".listFields"][] = "saga-ken";
$tdataEoc_monthly_reports[".listFields"][] = "nagasaki-ken";
$tdataEoc_monthly_reports[".listFields"][] = "kumamoto-ken";
$tdataEoc_monthly_reports[".listFields"][] = "oita-ken";
$tdataEoc_monthly_reports[".listFields"][] = "miyazaki-ken";
$tdataEoc_monthly_reports[".listFields"][] = "kagoshima-ken";
$tdataEoc_monthly_reports[".listFields"][] = "okinawa-ken";
$tdataEoc_monthly_reports[".listFields"][] = "created_at";
$tdataEoc_monthly_reports[".listFields"][] = "updated_at";

$tdataEoc_monthly_reports[".hideMobileList"] = array();


$tdataEoc_monthly_reports[".viewFields"] = array();

$tdataEoc_monthly_reports[".addFields"] = array();

$tdataEoc_monthly_reports[".masterListFields"] = array();
$tdataEoc_monthly_reports[".masterListFields"][] = "id";
$tdataEoc_monthly_reports[".masterListFields"][] = "year";
$tdataEoc_monthly_reports[".masterListFields"][] = "month";
$tdataEoc_monthly_reports[".masterListFields"][] = "male_count";
$tdataEoc_monthly_reports[".masterListFields"][] = "female_count";
$tdataEoc_monthly_reports[".masterListFields"][] = "new_customers";
$tdataEoc_monthly_reports[".masterListFields"][] = "returning_customers";
$tdataEoc_monthly_reports[".masterListFields"][] = "total_bullion_dept";
$tdataEoc_monthly_reports[".masterListFields"][] = "total_jewelry_dept";
$tdataEoc_monthly_reports[".masterListFields"][] = "total_diamond_dept";
$tdataEoc_monthly_reports[".masterListFields"][] = "total_watch_dept";
$tdataEoc_monthly_reports[".masterListFields"][] = "total_fashion_dept";
$tdataEoc_monthly_reports[".masterListFields"][] = "total_common_dept";
$tdataEoc_monthly_reports[".masterListFields"][] = "age_20s_count";
$tdataEoc_monthly_reports[".masterListFields"][] = "age_30s_count";
$tdataEoc_monthly_reports[".masterListFields"][] = "age_40s_count";
$tdataEoc_monthly_reports[".masterListFields"][] = "age_50s_count";
$tdataEoc_monthly_reports[".masterListFields"][] = "age_60s_count";
$tdataEoc_monthly_reports[".masterListFields"][] = "age_70s_count";
$tdataEoc_monthly_reports[".masterListFields"][] = "total_customers";
$tdataEoc_monthly_reports[".masterListFields"][] = "age_80s_count";
$tdataEoc_monthly_reports[".masterListFields"][] = "hokkai-dou";
$tdataEoc_monthly_reports[".masterListFields"][] = "total_ownership_yes";
$tdataEoc_monthly_reports[".masterListFields"][] = "aomori-ken";
$tdataEoc_monthly_reports[".masterListFields"][] = "total_ownership_no";
$tdataEoc_monthly_reports[".masterListFields"][] = "iwate-ken";
$tdataEoc_monthly_reports[".masterListFields"][] = "miyagi-ken";
$tdataEoc_monthly_reports[".masterListFields"][] = "akita-ken";
$tdataEoc_monthly_reports[".masterListFields"][] = "yamagata-ken";
$tdataEoc_monthly_reports[".masterListFields"][] = "fukushima-ken";
$tdataEoc_monthly_reports[".masterListFields"][] = "ibaraki-ken";
$tdataEoc_monthly_reports[".masterListFields"][] = "tochigi-ken";
$tdataEoc_monthly_reports[".masterListFields"][] = "gunma-ken";
$tdataEoc_monthly_reports[".masterListFields"][] = "saitama-ken";
$tdataEoc_monthly_reports[".masterListFields"][] = "chiba-ken";
$tdataEoc_monthly_reports[".masterListFields"][] = "tokyo-ken";
$tdataEoc_monthly_reports[".masterListFields"][] = "kanagawa-ken";
$tdataEoc_monthly_reports[".masterListFields"][] = "niigata-ken";
$tdataEoc_monthly_reports[".masterListFields"][] = "toyama-ken";
$tdataEoc_monthly_reports[".masterListFields"][] = "ishikawa-ken";
$tdataEoc_monthly_reports[".masterListFields"][] = "fukui-ken";
$tdataEoc_monthly_reports[".masterListFields"][] = "yamanashi-ken";
$tdataEoc_monthly_reports[".masterListFields"][] = "nagano-ken";
$tdataEoc_monthly_reports[".masterListFields"][] = "gifu-ken";
$tdataEoc_monthly_reports[".masterListFields"][] = "shizuoka-ken";
$tdataEoc_monthly_reports[".masterListFields"][] = "aichi-ken";
$tdataEoc_monthly_reports[".masterListFields"][] = "mie-ken";
$tdataEoc_monthly_reports[".masterListFields"][] = "shiga-ken";
$tdataEoc_monthly_reports[".masterListFields"][] = "kyoto-fu";
$tdataEoc_monthly_reports[".masterListFields"][] = "osaka-fu";
$tdataEoc_monthly_reports[".masterListFields"][] = "hyogo-ken";
$tdataEoc_monthly_reports[".masterListFields"][] = "nara-ken";
$tdataEoc_monthly_reports[".masterListFields"][] = "wakayama-ken";
$tdataEoc_monthly_reports[".masterListFields"][] = "tottori-ken";
$tdataEoc_monthly_reports[".masterListFields"][] = "shimane-ken";
$tdataEoc_monthly_reports[".masterListFields"][] = "okayama-ken";
$tdataEoc_monthly_reports[".masterListFields"][] = "hiroshima-ken";
$tdataEoc_monthly_reports[".masterListFields"][] = "yamaguchi-ken";
$tdataEoc_monthly_reports[".masterListFields"][] = "tokushima-ken";
$tdataEoc_monthly_reports[".masterListFields"][] = "kagawa-ken";
$tdataEoc_monthly_reports[".masterListFields"][] = "ehime-ken";
$tdataEoc_monthly_reports[".masterListFields"][] = "kochi-ken";
$tdataEoc_monthly_reports[".masterListFields"][] = "fukuoka-ken";
$tdataEoc_monthly_reports[".masterListFields"][] = "saga-ken";
$tdataEoc_monthly_reports[".masterListFields"][] = "nagasaki-ken";
$tdataEoc_monthly_reports[".masterListFields"][] = "kumamoto-ken";
$tdataEoc_monthly_reports[".masterListFields"][] = "oita-ken";
$tdataEoc_monthly_reports[".masterListFields"][] = "miyazaki-ken";
$tdataEoc_monthly_reports[".masterListFields"][] = "kagoshima-ken";
$tdataEoc_monthly_reports[".masterListFields"][] = "okinawa-ken";
$tdataEoc_monthly_reports[".masterListFields"][] = "created_at";
$tdataEoc_monthly_reports[".masterListFields"][] = "updated_at";

$tdataEoc_monthly_reports[".inlineAddFields"] = array();

$tdataEoc_monthly_reports[".editFields"] = array();

$tdataEoc_monthly_reports[".inlineEditFields"] = array();

$tdataEoc_monthly_reports[".updateSelectedFields"] = array();


$tdataEoc_monthly_reports[".exportFields"] = array();
$tdataEoc_monthly_reports[".exportFields"][] = "id";
$tdataEoc_monthly_reports[".exportFields"][] = "year";
$tdataEoc_monthly_reports[".exportFields"][] = "month";
$tdataEoc_monthly_reports[".exportFields"][] = "male_count";
$tdataEoc_monthly_reports[".exportFields"][] = "female_count";
$tdataEoc_monthly_reports[".exportFields"][] = "new_customers";
$tdataEoc_monthly_reports[".exportFields"][] = "returning_customers";
$tdataEoc_monthly_reports[".exportFields"][] = "total_bullion_dept";
$tdataEoc_monthly_reports[".exportFields"][] = "total_jewelry_dept";
$tdataEoc_monthly_reports[".exportFields"][] = "total_diamond_dept";
$tdataEoc_monthly_reports[".exportFields"][] = "total_watch_dept";
$tdataEoc_monthly_reports[".exportFields"][] = "total_fashion_dept";
$tdataEoc_monthly_reports[".exportFields"][] = "total_common_dept";
$tdataEoc_monthly_reports[".exportFields"][] = "age_20s_count";
$tdataEoc_monthly_reports[".exportFields"][] = "age_30s_count";
$tdataEoc_monthly_reports[".exportFields"][] = "age_40s_count";
$tdataEoc_monthly_reports[".exportFields"][] = "age_50s_count";
$tdataEoc_monthly_reports[".exportFields"][] = "age_60s_count";
$tdataEoc_monthly_reports[".exportFields"][] = "age_70s_count";
$tdataEoc_monthly_reports[".exportFields"][] = "age_80s_count";
$tdataEoc_monthly_reports[".exportFields"][] = "hokkai-dou";
$tdataEoc_monthly_reports[".exportFields"][] = "aomori-ken";
$tdataEoc_monthly_reports[".exportFields"][] = "iwate-ken";
$tdataEoc_monthly_reports[".exportFields"][] = "miyagi-ken";
$tdataEoc_monthly_reports[".exportFields"][] = "akita-ken";
$tdataEoc_monthly_reports[".exportFields"][] = "yamagata-ken";
$tdataEoc_monthly_reports[".exportFields"][] = "fukushima-ken";
$tdataEoc_monthly_reports[".exportFields"][] = "ibaraki-ken";
$tdataEoc_monthly_reports[".exportFields"][] = "tochigi-ken";
$tdataEoc_monthly_reports[".exportFields"][] = "gunma-ken";
$tdataEoc_monthly_reports[".exportFields"][] = "saitama-ken";
$tdataEoc_monthly_reports[".exportFields"][] = "chiba-ken";
$tdataEoc_monthly_reports[".exportFields"][] = "tokyo-ken";
$tdataEoc_monthly_reports[".exportFields"][] = "kanagawa-ken";
$tdataEoc_monthly_reports[".exportFields"][] = "niigata-ken";
$tdataEoc_monthly_reports[".exportFields"][] = "toyama-ken";
$tdataEoc_monthly_reports[".exportFields"][] = "ishikawa-ken";
$tdataEoc_monthly_reports[".exportFields"][] = "fukui-ken";
$tdataEoc_monthly_reports[".exportFields"][] = "yamanashi-ken";
$tdataEoc_monthly_reports[".exportFields"][] = "nagano-ken";
$tdataEoc_monthly_reports[".exportFields"][] = "gifu-ken";
$tdataEoc_monthly_reports[".exportFields"][] = "shizuoka-ken";
$tdataEoc_monthly_reports[".exportFields"][] = "aichi-ken";
$tdataEoc_monthly_reports[".exportFields"][] = "mie-ken";
$tdataEoc_monthly_reports[".exportFields"][] = "shiga-ken";
$tdataEoc_monthly_reports[".exportFields"][] = "kyoto-fu";
$tdataEoc_monthly_reports[".exportFields"][] = "osaka-fu";
$tdataEoc_monthly_reports[".exportFields"][] = "hyogo-ken";
$tdataEoc_monthly_reports[".exportFields"][] = "nara-ken";
$tdataEoc_monthly_reports[".exportFields"][] = "wakayama-ken";
$tdataEoc_monthly_reports[".exportFields"][] = "tottori-ken";
$tdataEoc_monthly_reports[".exportFields"][] = "shimane-ken";
$tdataEoc_monthly_reports[".exportFields"][] = "okayama-ken";
$tdataEoc_monthly_reports[".exportFields"][] = "hiroshima-ken";
$tdataEoc_monthly_reports[".exportFields"][] = "yamaguchi-ken";
$tdataEoc_monthly_reports[".exportFields"][] = "tokushima-ken";
$tdataEoc_monthly_reports[".exportFields"][] = "kagawa-ken";
$tdataEoc_monthly_reports[".exportFields"][] = "ehime-ken";
$tdataEoc_monthly_reports[".exportFields"][] = "kochi-ken";
$tdataEoc_monthly_reports[".exportFields"][] = "fukuoka-ken";
$tdataEoc_monthly_reports[".exportFields"][] = "saga-ken";
$tdataEoc_monthly_reports[".exportFields"][] = "nagasaki-ken";
$tdataEoc_monthly_reports[".exportFields"][] = "kumamoto-ken";
$tdataEoc_monthly_reports[".exportFields"][] = "oita-ken";
$tdataEoc_monthly_reports[".exportFields"][] = "miyazaki-ken";
$tdataEoc_monthly_reports[".exportFields"][] = "kagoshima-ken";
$tdataEoc_monthly_reports[".exportFields"][] = "okinawa-ken";
$tdataEoc_monthly_reports[".exportFields"][] = "created_at";
$tdataEoc_monthly_reports[".exportFields"][] = "updated_at";

$tdataEoc_monthly_reports[".importFields"] = array();

$tdataEoc_monthly_reports[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "Eoc_monthly_reports";
	$fdata["Label"] = GetFieldLabel("Eoc_monthly_reports","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_monthly_reports`.`id`";

	
	
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




	$tdataEoc_monthly_reports["id"] = $fdata;
//	year
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "year";
	$fdata["GoodName"] = "year";
	$fdata["ownerTable"] = "Eoc_monthly_reports";
	$fdata["Label"] = GetFieldLabel("Eoc_monthly_reports","year");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "year";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_monthly_reports`.`year`";

	
	
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




	$tdataEoc_monthly_reports["year"] = $fdata;
//	month
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "month";
	$fdata["GoodName"] = "month";
	$fdata["ownerTable"] = "Eoc_monthly_reports";
	$fdata["Label"] = GetFieldLabel("Eoc_monthly_reports","month");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "month";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_monthly_reports`.`month`";

	
	
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




	$tdataEoc_monthly_reports["month"] = $fdata;
//	male_count
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "male_count";
	$fdata["GoodName"] = "male_count";
	$fdata["ownerTable"] = "Eoc_monthly_reports";
	$fdata["Label"] = GetFieldLabel("Eoc_monthly_reports","male_count");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "male_count";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_monthly_reports`.`male_count`";

	
	
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




	$tdataEoc_monthly_reports["male_count"] = $fdata;
//	female_count
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "female_count";
	$fdata["GoodName"] = "female_count";
	$fdata["ownerTable"] = "Eoc_monthly_reports";
	$fdata["Label"] = GetFieldLabel("Eoc_monthly_reports","female_count");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "female_count";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_monthly_reports`.`female_count`";

	
	
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




	$tdataEoc_monthly_reports["female_count"] = $fdata;
//	total_diamond_dept
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "total_diamond_dept";
	$fdata["GoodName"] = "total_diamond_dept";
	$fdata["ownerTable"] = "Eoc_monthly_reports";
	$fdata["Label"] = GetFieldLabel("Eoc_monthly_reports","total_diamond_dept");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "total_diamond_dept";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_monthly_reports`.`total_diamond_dept`";

	
	
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




	$tdataEoc_monthly_reports["total_diamond_dept"] = $fdata;
//	total_common_dept
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "total_common_dept";
	$fdata["GoodName"] = "total_common_dept";
	$fdata["ownerTable"] = "Eoc_monthly_reports";
	$fdata["Label"] = GetFieldLabel("Eoc_monthly_reports","total_common_dept");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "total_common_dept";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_monthly_reports`.`total_common_dept`";

	
	
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




	$tdataEoc_monthly_reports["total_common_dept"] = $fdata;
//	total_bullion_dept
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "total_bullion_dept";
	$fdata["GoodName"] = "total_bullion_dept";
	$fdata["ownerTable"] = "Eoc_monthly_reports";
	$fdata["Label"] = GetFieldLabel("Eoc_monthly_reports","total_bullion_dept");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "total_bullion_dept";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_monthly_reports`.`total_bullion_dept`";

	
	
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




	$tdataEoc_monthly_reports["total_bullion_dept"] = $fdata;
//	total_jewelry_dept
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "total_jewelry_dept";
	$fdata["GoodName"] = "total_jewelry_dept";
	$fdata["ownerTable"] = "Eoc_monthly_reports";
	$fdata["Label"] = GetFieldLabel("Eoc_monthly_reports","total_jewelry_dept");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "total_jewelry_dept";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_monthly_reports`.`total_jewelry_dept`";

	
	
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




	$tdataEoc_monthly_reports["total_jewelry_dept"] = $fdata;
//	total_watch_dept
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "total_watch_dept";
	$fdata["GoodName"] = "total_watch_dept";
	$fdata["ownerTable"] = "Eoc_monthly_reports";
	$fdata["Label"] = GetFieldLabel("Eoc_monthly_reports","total_watch_dept");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "total_watch_dept";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_monthly_reports`.`total_watch_dept`";

	
	
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




	$tdataEoc_monthly_reports["total_watch_dept"] = $fdata;
//	total_fashion_dept
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "total_fashion_dept";
	$fdata["GoodName"] = "total_fashion_dept";
	$fdata["ownerTable"] = "Eoc_monthly_reports";
	$fdata["Label"] = GetFieldLabel("Eoc_monthly_reports","total_fashion_dept");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "total_fashion_dept";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_monthly_reports`.`total_fashion_dept`";

	
	
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




	$tdataEoc_monthly_reports["total_fashion_dept"] = $fdata;
//	age_20s_count
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "age_20s_count";
	$fdata["GoodName"] = "age_20s_count";
	$fdata["ownerTable"] = "Eoc_monthly_reports";
	$fdata["Label"] = GetFieldLabel("Eoc_monthly_reports","age_20s_count");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "age_20s_count";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_monthly_reports`.`age_20s_count`";

	
	
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




	$tdataEoc_monthly_reports["age_20s_count"] = $fdata;
//	age_30s_count
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "age_30s_count";
	$fdata["GoodName"] = "age_30s_count";
	$fdata["ownerTable"] = "Eoc_monthly_reports";
	$fdata["Label"] = GetFieldLabel("Eoc_monthly_reports","age_30s_count");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "age_30s_count";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_monthly_reports`.`age_30s_count`";

	
	
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




	$tdataEoc_monthly_reports["age_30s_count"] = $fdata;
//	age_40s_count
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "age_40s_count";
	$fdata["GoodName"] = "age_40s_count";
	$fdata["ownerTable"] = "Eoc_monthly_reports";
	$fdata["Label"] = GetFieldLabel("Eoc_monthly_reports","age_40s_count");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "age_40s_count";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_monthly_reports`.`age_40s_count`";

	
	
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




	$tdataEoc_monthly_reports["age_40s_count"] = $fdata;
//	age_50s_count
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "age_50s_count";
	$fdata["GoodName"] = "age_50s_count";
	$fdata["ownerTable"] = "Eoc_monthly_reports";
	$fdata["Label"] = GetFieldLabel("Eoc_monthly_reports","age_50s_count");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "age_50s_count";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_monthly_reports`.`age_50s_count`";

	
	
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




	$tdataEoc_monthly_reports["age_50s_count"] = $fdata;
//	age_60s_count
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "age_60s_count";
	$fdata["GoodName"] = "age_60s_count";
	$fdata["ownerTable"] = "Eoc_monthly_reports";
	$fdata["Label"] = GetFieldLabel("Eoc_monthly_reports","age_60s_count");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "age_60s_count";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_monthly_reports`.`age_60s_count`";

	
	
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




	$tdataEoc_monthly_reports["age_60s_count"] = $fdata;
//	age_70s_count
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "age_70s_count";
	$fdata["GoodName"] = "age_70s_count";
	$fdata["ownerTable"] = "Eoc_monthly_reports";
	$fdata["Label"] = GetFieldLabel("Eoc_monthly_reports","age_70s_count");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "age_70s_count";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_monthly_reports`.`age_70s_count`";

	
	
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




	$tdataEoc_monthly_reports["age_70s_count"] = $fdata;
//	age_80s_count
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "age_80s_count";
	$fdata["GoodName"] = "age_80s_count";
	$fdata["ownerTable"] = "Eoc_monthly_reports";
	$fdata["Label"] = GetFieldLabel("Eoc_monthly_reports","age_80s_count");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "age_80s_count";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_monthly_reports`.`age_80s_count`";

	
	
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




	$tdataEoc_monthly_reports["age_80s_count"] = $fdata;
//	total_customers
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "total_customers";
	$fdata["GoodName"] = "total_customers";
	$fdata["ownerTable"] = "Eoc_monthly_reports";
	$fdata["Label"] = GetFieldLabel("Eoc_monthly_reports","total_customers");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "total_customers";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_monthly_reports`.`total_customers`";

	
	
			
				$fdata["UploadFolder"] = "files";

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








	$tdataEoc_monthly_reports["total_customers"] = $fdata;
//	new_customers
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "new_customers";
	$fdata["GoodName"] = "new_customers";
	$fdata["ownerTable"] = "Eoc_monthly_reports";
	$fdata["Label"] = GetFieldLabel("Eoc_monthly_reports","new_customers");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "new_customers";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_monthly_reports`.`new_customers`";

	
	
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




	$tdataEoc_monthly_reports["new_customers"] = $fdata;
//	returning_customers
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "returning_customers";
	$fdata["GoodName"] = "returning_customers";
	$fdata["ownerTable"] = "Eoc_monthly_reports";
	$fdata["Label"] = GetFieldLabel("Eoc_monthly_reports","returning_customers");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "returning_customers";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_monthly_reports`.`returning_customers`";

	
	
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




	$tdataEoc_monthly_reports["returning_customers"] = $fdata;
//	total_ownership_yes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "total_ownership_yes";
	$fdata["GoodName"] = "total_ownership_yes";
	$fdata["ownerTable"] = "Eoc_monthly_reports";
	$fdata["Label"] = GetFieldLabel("Eoc_monthly_reports","total_ownership_yes");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "total_ownership_yes";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_monthly_reports`.`total_ownership_yes`";

	
	
			
				$fdata["UploadFolder"] = "files";

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








	$tdataEoc_monthly_reports["total_ownership_yes"] = $fdata;
//	total_ownership_no
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "total_ownership_no";
	$fdata["GoodName"] = "total_ownership_no";
	$fdata["ownerTable"] = "Eoc_monthly_reports";
	$fdata["Label"] = GetFieldLabel("Eoc_monthly_reports","total_ownership_no");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "total_ownership_no";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_monthly_reports`.`total_ownership_no`";

	
	
			
				$fdata["UploadFolder"] = "files";

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








	$tdataEoc_monthly_reports["total_ownership_no"] = $fdata;
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "Eoc_monthly_reports";
	$fdata["Label"] = GetFieldLabel("Eoc_monthly_reports","created_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "created_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_monthly_reports`.`created_at`";

	
	
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




	$tdataEoc_monthly_reports["created_at"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "Eoc_monthly_reports";
	$fdata["Label"] = GetFieldLabel("Eoc_monthly_reports","updated_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "updated_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_monthly_reports`.`updated_at`";

	
	
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




	$tdataEoc_monthly_reports["updated_at"] = $fdata;
//	hokkai-dou
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "hokkai-dou";
	$fdata["GoodName"] = "hokkai_dou";
	$fdata["ownerTable"] = "Eoc_monthly_reports_by_prefectures";
	$fdata["Label"] = GetFieldLabel("Eoc_monthly_reports","hokkai_dou");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "hokkai-dou";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_monthly_reports_by_prefectures`.`hokkai-dou`";

	
	
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




	$tdataEoc_monthly_reports["hokkai-dou"] = $fdata;
//	aomori-ken
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "aomori-ken";
	$fdata["GoodName"] = "aomori_ken";
	$fdata["ownerTable"] = "Eoc_monthly_reports_by_prefectures";
	$fdata["Label"] = GetFieldLabel("Eoc_monthly_reports","aomori_ken");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "aomori-ken";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_monthly_reports_by_prefectures`.`aomori-ken`";

	
	
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




	$tdataEoc_monthly_reports["aomori-ken"] = $fdata;
//	iwate-ken
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "iwate-ken";
	$fdata["GoodName"] = "iwate_ken";
	$fdata["ownerTable"] = "Eoc_monthly_reports_by_prefectures";
	$fdata["Label"] = GetFieldLabel("Eoc_monthly_reports","iwate_ken");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "iwate-ken";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_monthly_reports_by_prefectures`.`iwate-ken`";

	
	
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




	$tdataEoc_monthly_reports["iwate-ken"] = $fdata;
//	miyagi-ken
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "miyagi-ken";
	$fdata["GoodName"] = "miyagi_ken";
	$fdata["ownerTable"] = "Eoc_monthly_reports_by_prefectures";
	$fdata["Label"] = GetFieldLabel("Eoc_monthly_reports","miyagi_ken");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "miyagi-ken";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_monthly_reports_by_prefectures`.`miyagi-ken`";

	
	
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




	$tdataEoc_monthly_reports["miyagi-ken"] = $fdata;
//	akita-ken
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "akita-ken";
	$fdata["GoodName"] = "akita_ken";
	$fdata["ownerTable"] = "Eoc_monthly_reports_by_prefectures";
	$fdata["Label"] = GetFieldLabel("Eoc_monthly_reports","akita_ken");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "akita-ken";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_monthly_reports_by_prefectures`.`akita-ken`";

	
	
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




	$tdataEoc_monthly_reports["akita-ken"] = $fdata;
//	yamagata-ken
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "yamagata-ken";
	$fdata["GoodName"] = "yamagata_ken";
	$fdata["ownerTable"] = "Eoc_monthly_reports_by_prefectures";
	$fdata["Label"] = GetFieldLabel("Eoc_monthly_reports","yamagata_ken");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "yamagata-ken";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_monthly_reports_by_prefectures`.`yamagata-ken`";

	
	
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




	$tdataEoc_monthly_reports["yamagata-ken"] = $fdata;
//	fukushima-ken
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "fukushima-ken";
	$fdata["GoodName"] = "fukushima_ken";
	$fdata["ownerTable"] = "Eoc_monthly_reports_by_prefectures";
	$fdata["Label"] = GetFieldLabel("Eoc_monthly_reports","fukushima_ken");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "fukushima-ken";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_monthly_reports_by_prefectures`.`fukushima-ken`";

	
	
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




	$tdataEoc_monthly_reports["fukushima-ken"] = $fdata;
//	ibaraki-ken
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "ibaraki-ken";
	$fdata["GoodName"] = "ibaraki_ken";
	$fdata["ownerTable"] = "Eoc_monthly_reports_by_prefectures";
	$fdata["Label"] = GetFieldLabel("Eoc_monthly_reports","ibaraki_ken");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ibaraki-ken";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_monthly_reports_by_prefectures`.`ibaraki-ken`";

	
	
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




	$tdataEoc_monthly_reports["ibaraki-ken"] = $fdata;
//	tochigi-ken
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "tochigi-ken";
	$fdata["GoodName"] = "tochigi_ken";
	$fdata["ownerTable"] = "Eoc_monthly_reports_by_prefectures";
	$fdata["Label"] = GetFieldLabel("Eoc_monthly_reports","tochigi_ken");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "tochigi-ken";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_monthly_reports_by_prefectures`.`tochigi-ken`";

	
	
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




	$tdataEoc_monthly_reports["tochigi-ken"] = $fdata;
//	gunma-ken
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "gunma-ken";
	$fdata["GoodName"] = "gunma_ken";
	$fdata["ownerTable"] = "Eoc_monthly_reports_by_prefectures";
	$fdata["Label"] = GetFieldLabel("Eoc_monthly_reports","gunma_ken");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "gunma-ken";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_monthly_reports_by_prefectures`.`gunma-ken`";

	
	
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




	$tdataEoc_monthly_reports["gunma-ken"] = $fdata;
//	saitama-ken
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "saitama-ken";
	$fdata["GoodName"] = "saitama_ken";
	$fdata["ownerTable"] = "Eoc_monthly_reports_by_prefectures";
	$fdata["Label"] = GetFieldLabel("Eoc_monthly_reports","saitama_ken");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "saitama-ken";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_monthly_reports_by_prefectures`.`saitama-ken`";

	
	
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




	$tdataEoc_monthly_reports["saitama-ken"] = $fdata;
//	chiba-ken
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "chiba-ken";
	$fdata["GoodName"] = "chiba_ken";
	$fdata["ownerTable"] = "Eoc_monthly_reports_by_prefectures";
	$fdata["Label"] = GetFieldLabel("Eoc_monthly_reports","chiba_ken");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "chiba-ken";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_monthly_reports_by_prefectures`.`chiba-ken`";

	
	
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




	$tdataEoc_monthly_reports["chiba-ken"] = $fdata;
//	tokyo-ken
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "tokyo-ken";
	$fdata["GoodName"] = "tokyo_ken";
	$fdata["ownerTable"] = "Eoc_monthly_reports_by_prefectures";
	$fdata["Label"] = GetFieldLabel("Eoc_monthly_reports","tokyo_ken");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "tokyo-ken";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_monthly_reports_by_prefectures`.`tokyo-ken`";

	
	
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




	$tdataEoc_monthly_reports["tokyo-ken"] = $fdata;
//	kanagawa-ken
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "kanagawa-ken";
	$fdata["GoodName"] = "kanagawa_ken";
	$fdata["ownerTable"] = "Eoc_monthly_reports_by_prefectures";
	$fdata["Label"] = GetFieldLabel("Eoc_monthly_reports","kanagawa_ken");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "kanagawa-ken";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_monthly_reports_by_prefectures`.`kanagawa-ken`";

	
	
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




	$tdataEoc_monthly_reports["kanagawa-ken"] = $fdata;
//	niigata-ken
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "niigata-ken";
	$fdata["GoodName"] = "niigata_ken";
	$fdata["ownerTable"] = "Eoc_monthly_reports_by_prefectures";
	$fdata["Label"] = GetFieldLabel("Eoc_monthly_reports","niigata_ken");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "niigata-ken";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_monthly_reports_by_prefectures`.`niigata-ken`";

	
	
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




	$tdataEoc_monthly_reports["niigata-ken"] = $fdata;
//	toyama-ken
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "toyama-ken";
	$fdata["GoodName"] = "toyama_ken";
	$fdata["ownerTable"] = "Eoc_monthly_reports_by_prefectures";
	$fdata["Label"] = GetFieldLabel("Eoc_monthly_reports","toyama_ken");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "toyama-ken";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_monthly_reports_by_prefectures`.`toyama-ken`";

	
	
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




	$tdataEoc_monthly_reports["toyama-ken"] = $fdata;
//	ishikawa-ken
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "ishikawa-ken";
	$fdata["GoodName"] = "ishikawa_ken";
	$fdata["ownerTable"] = "Eoc_monthly_reports_by_prefectures";
	$fdata["Label"] = GetFieldLabel("Eoc_monthly_reports","ishikawa_ken");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ishikawa-ken";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_monthly_reports_by_prefectures`.`ishikawa-ken`";

	
	
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




	$tdataEoc_monthly_reports["ishikawa-ken"] = $fdata;
//	fukui-ken
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "fukui-ken";
	$fdata["GoodName"] = "fukui_ken";
	$fdata["ownerTable"] = "Eoc_monthly_reports_by_prefectures";
	$fdata["Label"] = GetFieldLabel("Eoc_monthly_reports","fukui_ken");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "fukui-ken";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_monthly_reports_by_prefectures`.`fukui-ken`";

	
	
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




	$tdataEoc_monthly_reports["fukui-ken"] = $fdata;
//	yamanashi-ken
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "yamanashi-ken";
	$fdata["GoodName"] = "yamanashi_ken";
	$fdata["ownerTable"] = "Eoc_monthly_reports_by_prefectures";
	$fdata["Label"] = GetFieldLabel("Eoc_monthly_reports","yamanashi_ken");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "yamanashi-ken";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_monthly_reports_by_prefectures`.`yamanashi-ken`";

	
	
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




	$tdataEoc_monthly_reports["yamanashi-ken"] = $fdata;
//	nagano-ken
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "nagano-ken";
	$fdata["GoodName"] = "nagano_ken";
	$fdata["ownerTable"] = "Eoc_monthly_reports_by_prefectures";
	$fdata["Label"] = GetFieldLabel("Eoc_monthly_reports","nagano_ken");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "nagano-ken";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_monthly_reports_by_prefectures`.`nagano-ken`";

	
	
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




	$tdataEoc_monthly_reports["nagano-ken"] = $fdata;
//	gifu-ken
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "gifu-ken";
	$fdata["GoodName"] = "gifu_ken";
	$fdata["ownerTable"] = "Eoc_monthly_reports_by_prefectures";
	$fdata["Label"] = GetFieldLabel("Eoc_monthly_reports","gifu_ken");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "gifu-ken";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_monthly_reports_by_prefectures`.`gifu-ken`";

	
	
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




	$tdataEoc_monthly_reports["gifu-ken"] = $fdata;
//	shizuoka-ken
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 47;
	$fdata["strName"] = "shizuoka-ken";
	$fdata["GoodName"] = "shizuoka_ken";
	$fdata["ownerTable"] = "Eoc_monthly_reports_by_prefectures";
	$fdata["Label"] = GetFieldLabel("Eoc_monthly_reports","shizuoka_ken");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "shizuoka-ken";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_monthly_reports_by_prefectures`.`shizuoka-ken`";

	
	
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




	$tdataEoc_monthly_reports["shizuoka-ken"] = $fdata;
//	aichi-ken
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 48;
	$fdata["strName"] = "aichi-ken";
	$fdata["GoodName"] = "aichi_ken";
	$fdata["ownerTable"] = "Eoc_monthly_reports_by_prefectures";
	$fdata["Label"] = GetFieldLabel("Eoc_monthly_reports","aichi_ken");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "aichi-ken";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_monthly_reports_by_prefectures`.`aichi-ken`";

	
	
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




	$tdataEoc_monthly_reports["aichi-ken"] = $fdata;
//	mie-ken
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 49;
	$fdata["strName"] = "mie-ken";
	$fdata["GoodName"] = "mie_ken";
	$fdata["ownerTable"] = "Eoc_monthly_reports_by_prefectures";
	$fdata["Label"] = GetFieldLabel("Eoc_monthly_reports","mie_ken");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "mie-ken";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_monthly_reports_by_prefectures`.`mie-ken`";

	
	
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




	$tdataEoc_monthly_reports["mie-ken"] = $fdata;
//	shiga-ken
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 50;
	$fdata["strName"] = "shiga-ken";
	$fdata["GoodName"] = "shiga_ken";
	$fdata["ownerTable"] = "Eoc_monthly_reports_by_prefectures";
	$fdata["Label"] = GetFieldLabel("Eoc_monthly_reports","shiga_ken");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "shiga-ken";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_monthly_reports_by_prefectures`.`shiga-ken`";

	
	
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




	$tdataEoc_monthly_reports["shiga-ken"] = $fdata;
//	kyoto-fu
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 51;
	$fdata["strName"] = "kyoto-fu";
	$fdata["GoodName"] = "kyoto_fu";
	$fdata["ownerTable"] = "Eoc_monthly_reports_by_prefectures";
	$fdata["Label"] = GetFieldLabel("Eoc_monthly_reports","kyoto_fu");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "kyoto-fu";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_monthly_reports_by_prefectures`.`kyoto-fu`";

	
	
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




	$tdataEoc_monthly_reports["kyoto-fu"] = $fdata;
//	osaka-fu
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 52;
	$fdata["strName"] = "osaka-fu";
	$fdata["GoodName"] = "osaka_fu";
	$fdata["ownerTable"] = "Eoc_monthly_reports_by_prefectures";
	$fdata["Label"] = GetFieldLabel("Eoc_monthly_reports","osaka_fu");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "osaka-fu";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_monthly_reports_by_prefectures`.`osaka-fu`";

	
	
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




	$tdataEoc_monthly_reports["osaka-fu"] = $fdata;
//	hyogo-ken
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 53;
	$fdata["strName"] = "hyogo-ken";
	$fdata["GoodName"] = "hyogo_ken";
	$fdata["ownerTable"] = "Eoc_monthly_reports_by_prefectures";
	$fdata["Label"] = GetFieldLabel("Eoc_monthly_reports","hyogo_ken");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "hyogo-ken";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_monthly_reports_by_prefectures`.`hyogo-ken`";

	
	
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




	$tdataEoc_monthly_reports["hyogo-ken"] = $fdata;
//	nara-ken
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 54;
	$fdata["strName"] = "nara-ken";
	$fdata["GoodName"] = "nara_ken";
	$fdata["ownerTable"] = "Eoc_monthly_reports_by_prefectures";
	$fdata["Label"] = GetFieldLabel("Eoc_monthly_reports","nara_ken");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "nara-ken";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_monthly_reports_by_prefectures`.`nara-ken`";

	
	
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




	$tdataEoc_monthly_reports["nara-ken"] = $fdata;
//	wakayama-ken
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 55;
	$fdata["strName"] = "wakayama-ken";
	$fdata["GoodName"] = "wakayama_ken";
	$fdata["ownerTable"] = "Eoc_monthly_reports_by_prefectures";
	$fdata["Label"] = GetFieldLabel("Eoc_monthly_reports","wakayama_ken");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "wakayama-ken";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_monthly_reports_by_prefectures`.`wakayama-ken`";

	
	
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




	$tdataEoc_monthly_reports["wakayama-ken"] = $fdata;
//	tottori-ken
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 56;
	$fdata["strName"] = "tottori-ken";
	$fdata["GoodName"] = "tottori_ken";
	$fdata["ownerTable"] = "Eoc_monthly_reports_by_prefectures";
	$fdata["Label"] = GetFieldLabel("Eoc_monthly_reports","tottori_ken");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "tottori-ken";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_monthly_reports_by_prefectures`.`tottori-ken`";

	
	
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




	$tdataEoc_monthly_reports["tottori-ken"] = $fdata;
//	shimane-ken
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 57;
	$fdata["strName"] = "shimane-ken";
	$fdata["GoodName"] = "shimane_ken";
	$fdata["ownerTable"] = "Eoc_monthly_reports_by_prefectures";
	$fdata["Label"] = GetFieldLabel("Eoc_monthly_reports","shimane_ken");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "shimane-ken";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_monthly_reports_by_prefectures`.`shimane-ken`";

	
	
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




	$tdataEoc_monthly_reports["shimane-ken"] = $fdata;
//	okayama-ken
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 58;
	$fdata["strName"] = "okayama-ken";
	$fdata["GoodName"] = "okayama_ken";
	$fdata["ownerTable"] = "Eoc_monthly_reports_by_prefectures";
	$fdata["Label"] = GetFieldLabel("Eoc_monthly_reports","okayama_ken");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "okayama-ken";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_monthly_reports_by_prefectures`.`okayama-ken`";

	
	
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




	$tdataEoc_monthly_reports["okayama-ken"] = $fdata;
//	hiroshima-ken
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 59;
	$fdata["strName"] = "hiroshima-ken";
	$fdata["GoodName"] = "hiroshima_ken";
	$fdata["ownerTable"] = "Eoc_monthly_reports_by_prefectures";
	$fdata["Label"] = GetFieldLabel("Eoc_monthly_reports","hiroshima_ken");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "hiroshima-ken";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_monthly_reports_by_prefectures`.`hiroshima-ken`";

	
	
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




	$tdataEoc_monthly_reports["hiroshima-ken"] = $fdata;
//	yamaguchi-ken
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 60;
	$fdata["strName"] = "yamaguchi-ken";
	$fdata["GoodName"] = "yamaguchi_ken";
	$fdata["ownerTable"] = "Eoc_monthly_reports_by_prefectures";
	$fdata["Label"] = GetFieldLabel("Eoc_monthly_reports","yamaguchi_ken");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "yamaguchi-ken";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_monthly_reports_by_prefectures`.`yamaguchi-ken`";

	
	
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




	$tdataEoc_monthly_reports["yamaguchi-ken"] = $fdata;
//	tokushima-ken
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 61;
	$fdata["strName"] = "tokushima-ken";
	$fdata["GoodName"] = "tokushima_ken";
	$fdata["ownerTable"] = "Eoc_monthly_reports_by_prefectures";
	$fdata["Label"] = GetFieldLabel("Eoc_monthly_reports","tokushima_ken");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "tokushima-ken";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_monthly_reports_by_prefectures`.`tokushima-ken`";

	
	
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




	$tdataEoc_monthly_reports["tokushima-ken"] = $fdata;
//	kagawa-ken
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 62;
	$fdata["strName"] = "kagawa-ken";
	$fdata["GoodName"] = "kagawa_ken";
	$fdata["ownerTable"] = "Eoc_monthly_reports_by_prefectures";
	$fdata["Label"] = GetFieldLabel("Eoc_monthly_reports","kagawa_ken");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "kagawa-ken";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_monthly_reports_by_prefectures`.`kagawa-ken`";

	
	
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




	$tdataEoc_monthly_reports["kagawa-ken"] = $fdata;
//	ehime-ken
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 63;
	$fdata["strName"] = "ehime-ken";
	$fdata["GoodName"] = "ehime_ken";
	$fdata["ownerTable"] = "Eoc_monthly_reports_by_prefectures";
	$fdata["Label"] = GetFieldLabel("Eoc_monthly_reports","ehime_ken");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ehime-ken";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_monthly_reports_by_prefectures`.`ehime-ken`";

	
	
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




	$tdataEoc_monthly_reports["ehime-ken"] = $fdata;
//	kochi-ken
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 64;
	$fdata["strName"] = "kochi-ken";
	$fdata["GoodName"] = "kochi_ken";
	$fdata["ownerTable"] = "Eoc_monthly_reports_by_prefectures";
	$fdata["Label"] = GetFieldLabel("Eoc_monthly_reports","kochi_ken");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "kochi-ken";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_monthly_reports_by_prefectures`.`kochi-ken`";

	
	
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




	$tdataEoc_monthly_reports["kochi-ken"] = $fdata;
//	fukuoka-ken
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 65;
	$fdata["strName"] = "fukuoka-ken";
	$fdata["GoodName"] = "fukuoka_ken";
	$fdata["ownerTable"] = "Eoc_monthly_reports_by_prefectures";
	$fdata["Label"] = GetFieldLabel("Eoc_monthly_reports","fukuoka_ken");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "fukuoka-ken";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_monthly_reports_by_prefectures`.`fukuoka-ken`";

	
	
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




	$tdataEoc_monthly_reports["fukuoka-ken"] = $fdata;
//	saga-ken
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 66;
	$fdata["strName"] = "saga-ken";
	$fdata["GoodName"] = "saga_ken";
	$fdata["ownerTable"] = "Eoc_monthly_reports_by_prefectures";
	$fdata["Label"] = GetFieldLabel("Eoc_monthly_reports","saga_ken");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "saga-ken";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_monthly_reports_by_prefectures`.`saga-ken`";

	
	
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




	$tdataEoc_monthly_reports["saga-ken"] = $fdata;
//	nagasaki-ken
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 67;
	$fdata["strName"] = "nagasaki-ken";
	$fdata["GoodName"] = "nagasaki_ken";
	$fdata["ownerTable"] = "Eoc_monthly_reports_by_prefectures";
	$fdata["Label"] = GetFieldLabel("Eoc_monthly_reports","nagasaki_ken");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "nagasaki-ken";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_monthly_reports_by_prefectures`.`nagasaki-ken`";

	
	
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




	$tdataEoc_monthly_reports["nagasaki-ken"] = $fdata;
//	kumamoto-ken
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 68;
	$fdata["strName"] = "kumamoto-ken";
	$fdata["GoodName"] = "kumamoto_ken";
	$fdata["ownerTable"] = "Eoc_monthly_reports_by_prefectures";
	$fdata["Label"] = GetFieldLabel("Eoc_monthly_reports","kumamoto_ken");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "kumamoto-ken";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_monthly_reports_by_prefectures`.`kumamoto-ken`";

	
	
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




	$tdataEoc_monthly_reports["kumamoto-ken"] = $fdata;
//	oita-ken
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 69;
	$fdata["strName"] = "oita-ken";
	$fdata["GoodName"] = "oita_ken";
	$fdata["ownerTable"] = "Eoc_monthly_reports_by_prefectures";
	$fdata["Label"] = GetFieldLabel("Eoc_monthly_reports","oita_ken");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "oita-ken";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_monthly_reports_by_prefectures`.`oita-ken`";

	
	
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




	$tdataEoc_monthly_reports["oita-ken"] = $fdata;
//	miyazaki-ken
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 70;
	$fdata["strName"] = "miyazaki-ken";
	$fdata["GoodName"] = "miyazaki_ken";
	$fdata["ownerTable"] = "Eoc_monthly_reports_by_prefectures";
	$fdata["Label"] = GetFieldLabel("Eoc_monthly_reports","miyazaki_ken");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "miyazaki-ken";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_monthly_reports_by_prefectures`.`miyazaki-ken`";

	
	
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




	$tdataEoc_monthly_reports["miyazaki-ken"] = $fdata;
//	kagoshima-ken
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 71;
	$fdata["strName"] = "kagoshima-ken";
	$fdata["GoodName"] = "kagoshima_ken";
	$fdata["ownerTable"] = "Eoc_monthly_reports_by_prefectures";
	$fdata["Label"] = GetFieldLabel("Eoc_monthly_reports","kagoshima_ken");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "kagoshima-ken";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_monthly_reports_by_prefectures`.`kagoshima-ken`";

	
	
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




	$tdataEoc_monthly_reports["kagoshima-ken"] = $fdata;
//	okinawa-ken
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 72;
	$fdata["strName"] = "okinawa-ken";
	$fdata["GoodName"] = "okinawa_ken";
	$fdata["ownerTable"] = "Eoc_monthly_reports_by_prefectures";
	$fdata["Label"] = GetFieldLabel("Eoc_monthly_reports","okinawa_ken");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "okinawa-ken";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_monthly_reports_by_prefectures`.`okinawa-ken`";

	
	
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




	$tdataEoc_monthly_reports["okinawa-ken"] = $fdata;


$tables_data["Eoc_monthly_reports"]=&$tdataEoc_monthly_reports;
$field_labels["Eoc_monthly_reports"] = &$fieldLabelsEoc_monthly_reports;
$fieldToolTips["Eoc_monthly_reports"] = &$fieldToolTipsEoc_monthly_reports;
$placeHolders["Eoc_monthly_reports"] = &$placeHoldersEoc_monthly_reports;
$page_titles["Eoc_monthly_reports"] = &$pageTitlesEoc_monthly_reports;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Eoc_monthly_reports"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["Eoc_monthly_reports"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Eoc_monthly_reports()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`Eoc_monthly_reports`.`id`,  `Eoc_monthly_reports`.`year`,  `Eoc_monthly_reports`.`month`,  `Eoc_monthly_reports`.`male_count`,  `Eoc_monthly_reports`.`female_count`,  `Eoc_monthly_reports`.`total_diamond_dept`,  `Eoc_monthly_reports`.`total_common_dept`,  `Eoc_monthly_reports`.`total_bullion_dept`,  `Eoc_monthly_reports`.`total_jewelry_dept`,  `Eoc_monthly_reports`.`total_watch_dept`,  `Eoc_monthly_reports`.`total_fashion_dept`,  `Eoc_monthly_reports`.`age_20s_count`,  `Eoc_monthly_reports`.`age_30s_count`,  `Eoc_monthly_reports`.`age_40s_count`,  `Eoc_monthly_reports`.`age_50s_count`,  `Eoc_monthly_reports`.`age_60s_count`,  `Eoc_monthly_reports`.`age_70s_count`,  `Eoc_monthly_reports`.`age_80s_count`,  `Eoc_monthly_reports`.`total_customers`,  `Eoc_monthly_reports`.`new_customers`,  `Eoc_monthly_reports`.`returning_customers`,  `Eoc_monthly_reports`.`total_ownership_yes`,  `Eoc_monthly_reports`.`total_ownership_no`,  `Eoc_monthly_reports`.`created_at`,  `Eoc_monthly_reports`.`updated_at`,  `Eoc_monthly_reports_by_prefectures`.`hokkai-dou`,  `Eoc_monthly_reports_by_prefectures`.`aomori-ken`,  `Eoc_monthly_reports_by_prefectures`.`iwate-ken`,  `Eoc_monthly_reports_by_prefectures`.`miyagi-ken`,  `Eoc_monthly_reports_by_prefectures`.`akita-ken`,  `Eoc_monthly_reports_by_prefectures`.`yamagata-ken`,  `Eoc_monthly_reports_by_prefectures`.`fukushima-ken`,  `Eoc_monthly_reports_by_prefectures`.`ibaraki-ken`,  `Eoc_monthly_reports_by_prefectures`.`tochigi-ken`,  `Eoc_monthly_reports_by_prefectures`.`gunma-ken`,  `Eoc_monthly_reports_by_prefectures`.`saitama-ken`,  `Eoc_monthly_reports_by_prefectures`.`chiba-ken`,  `Eoc_monthly_reports_by_prefectures`.`tokyo-ken`,  `Eoc_monthly_reports_by_prefectures`.`kanagawa-ken`,  `Eoc_monthly_reports_by_prefectures`.`niigata-ken`,  `Eoc_monthly_reports_by_prefectures`.`toyama-ken`,  `Eoc_monthly_reports_by_prefectures`.`ishikawa-ken`,  `Eoc_monthly_reports_by_prefectures`.`fukui-ken`,  `Eoc_monthly_reports_by_prefectures`.`yamanashi-ken`,  `Eoc_monthly_reports_by_prefectures`.`nagano-ken`,  `Eoc_monthly_reports_by_prefectures`.`gifu-ken`,  `Eoc_monthly_reports_by_prefectures`.`shizuoka-ken`,  `Eoc_monthly_reports_by_prefectures`.`aichi-ken`,  `Eoc_monthly_reports_by_prefectures`.`mie-ken`,  `Eoc_monthly_reports_by_prefectures`.`shiga-ken`,  `Eoc_monthly_reports_by_prefectures`.`kyoto-fu`,  `Eoc_monthly_reports_by_prefectures`.`osaka-fu`,  `Eoc_monthly_reports_by_prefectures`.`hyogo-ken`,  `Eoc_monthly_reports_by_prefectures`.`nara-ken`,  `Eoc_monthly_reports_by_prefectures`.`wakayama-ken`,  `Eoc_monthly_reports_by_prefectures`.`tottori-ken`,  `Eoc_monthly_reports_by_prefectures`.`shimane-ken`,  `Eoc_monthly_reports_by_prefectures`.`okayama-ken`,  `Eoc_monthly_reports_by_prefectures`.`hiroshima-ken`,  `Eoc_monthly_reports_by_prefectures`.`yamaguchi-ken`,  `Eoc_monthly_reports_by_prefectures`.`tokushima-ken`,  `Eoc_monthly_reports_by_prefectures`.`kagawa-ken`,  `Eoc_monthly_reports_by_prefectures`.`ehime-ken`,  `Eoc_monthly_reports_by_prefectures`.`kochi-ken`,  `Eoc_monthly_reports_by_prefectures`.`fukuoka-ken`,  `Eoc_monthly_reports_by_prefectures`.`saga-ken`,  `Eoc_monthly_reports_by_prefectures`.`nagasaki-ken`,  `Eoc_monthly_reports_by_prefectures`.`kumamoto-ken`,  `Eoc_monthly_reports_by_prefectures`.`oita-ken`,  `Eoc_monthly_reports_by_prefectures`.`miyazaki-ken`,  `Eoc_monthly_reports_by_prefectures`.`kagoshima-ken`,  `Eoc_monthly_reports_by_prefectures`.`okinawa-ken`";
$proto0["m_strFrom"] = "FROM `Eoc_monthly_reports`  LEFT OUTER JOIN `Eoc_monthly_reports_by_prefectures` ON `Eoc_monthly_reports`.`id` = `Eoc_monthly_reports_by_prefectures`.`EocMonthlyReport_id`";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY `Eoc_monthly_reports`.`id` DESC";
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
	"m_strTable" => "Eoc_monthly_reports",
	"m_srcTableName" => "Eoc_monthly_reports"
));

$proto6["m_sql"] = "`Eoc_monthly_reports`.`id`";
$proto6["m_srcTableName"] = "Eoc_monthly_reports";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "year",
	"m_strTable" => "Eoc_monthly_reports",
	"m_srcTableName" => "Eoc_monthly_reports"
));

$proto8["m_sql"] = "`Eoc_monthly_reports`.`year`";
$proto8["m_srcTableName"] = "Eoc_monthly_reports";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "month",
	"m_strTable" => "Eoc_monthly_reports",
	"m_srcTableName" => "Eoc_monthly_reports"
));

$proto10["m_sql"] = "`Eoc_monthly_reports`.`month`";
$proto10["m_srcTableName"] = "Eoc_monthly_reports";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "male_count",
	"m_strTable" => "Eoc_monthly_reports",
	"m_srcTableName" => "Eoc_monthly_reports"
));

$proto12["m_sql"] = "`Eoc_monthly_reports`.`male_count`";
$proto12["m_srcTableName"] = "Eoc_monthly_reports";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "female_count",
	"m_strTable" => "Eoc_monthly_reports",
	"m_srcTableName" => "Eoc_monthly_reports"
));

$proto14["m_sql"] = "`Eoc_monthly_reports`.`female_count`";
$proto14["m_srcTableName"] = "Eoc_monthly_reports";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "total_diamond_dept",
	"m_strTable" => "Eoc_monthly_reports",
	"m_srcTableName" => "Eoc_monthly_reports"
));

$proto16["m_sql"] = "`Eoc_monthly_reports`.`total_diamond_dept`";
$proto16["m_srcTableName"] = "Eoc_monthly_reports";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "total_common_dept",
	"m_strTable" => "Eoc_monthly_reports",
	"m_srcTableName" => "Eoc_monthly_reports"
));

$proto18["m_sql"] = "`Eoc_monthly_reports`.`total_common_dept`";
$proto18["m_srcTableName"] = "Eoc_monthly_reports";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "total_bullion_dept",
	"m_strTable" => "Eoc_monthly_reports",
	"m_srcTableName" => "Eoc_monthly_reports"
));

$proto20["m_sql"] = "`Eoc_monthly_reports`.`total_bullion_dept`";
$proto20["m_srcTableName"] = "Eoc_monthly_reports";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "total_jewelry_dept",
	"m_strTable" => "Eoc_monthly_reports",
	"m_srcTableName" => "Eoc_monthly_reports"
));

$proto22["m_sql"] = "`Eoc_monthly_reports`.`total_jewelry_dept`";
$proto22["m_srcTableName"] = "Eoc_monthly_reports";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "total_watch_dept",
	"m_strTable" => "Eoc_monthly_reports",
	"m_srcTableName" => "Eoc_monthly_reports"
));

$proto24["m_sql"] = "`Eoc_monthly_reports`.`total_watch_dept`";
$proto24["m_srcTableName"] = "Eoc_monthly_reports";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "total_fashion_dept",
	"m_strTable" => "Eoc_monthly_reports",
	"m_srcTableName" => "Eoc_monthly_reports"
));

$proto26["m_sql"] = "`Eoc_monthly_reports`.`total_fashion_dept`";
$proto26["m_srcTableName"] = "Eoc_monthly_reports";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "age_20s_count",
	"m_strTable" => "Eoc_monthly_reports",
	"m_srcTableName" => "Eoc_monthly_reports"
));

$proto28["m_sql"] = "`Eoc_monthly_reports`.`age_20s_count`";
$proto28["m_srcTableName"] = "Eoc_monthly_reports";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "age_30s_count",
	"m_strTable" => "Eoc_monthly_reports",
	"m_srcTableName" => "Eoc_monthly_reports"
));

$proto30["m_sql"] = "`Eoc_monthly_reports`.`age_30s_count`";
$proto30["m_srcTableName"] = "Eoc_monthly_reports";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "age_40s_count",
	"m_strTable" => "Eoc_monthly_reports",
	"m_srcTableName" => "Eoc_monthly_reports"
));

$proto32["m_sql"] = "`Eoc_monthly_reports`.`age_40s_count`";
$proto32["m_srcTableName"] = "Eoc_monthly_reports";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "age_50s_count",
	"m_strTable" => "Eoc_monthly_reports",
	"m_srcTableName" => "Eoc_monthly_reports"
));

$proto34["m_sql"] = "`Eoc_monthly_reports`.`age_50s_count`";
$proto34["m_srcTableName"] = "Eoc_monthly_reports";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "age_60s_count",
	"m_strTable" => "Eoc_monthly_reports",
	"m_srcTableName" => "Eoc_monthly_reports"
));

$proto36["m_sql"] = "`Eoc_monthly_reports`.`age_60s_count`";
$proto36["m_srcTableName"] = "Eoc_monthly_reports";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "age_70s_count",
	"m_strTable" => "Eoc_monthly_reports",
	"m_srcTableName" => "Eoc_monthly_reports"
));

$proto38["m_sql"] = "`Eoc_monthly_reports`.`age_70s_count`";
$proto38["m_srcTableName"] = "Eoc_monthly_reports";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "age_80s_count",
	"m_strTable" => "Eoc_monthly_reports",
	"m_srcTableName" => "Eoc_monthly_reports"
));

$proto40["m_sql"] = "`Eoc_monthly_reports`.`age_80s_count`";
$proto40["m_srcTableName"] = "Eoc_monthly_reports";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "total_customers",
	"m_strTable" => "Eoc_monthly_reports",
	"m_srcTableName" => "Eoc_monthly_reports"
));

$proto42["m_sql"] = "`Eoc_monthly_reports`.`total_customers`";
$proto42["m_srcTableName"] = "Eoc_monthly_reports";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "new_customers",
	"m_strTable" => "Eoc_monthly_reports",
	"m_srcTableName" => "Eoc_monthly_reports"
));

$proto44["m_sql"] = "`Eoc_monthly_reports`.`new_customers`";
$proto44["m_srcTableName"] = "Eoc_monthly_reports";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "returning_customers",
	"m_strTable" => "Eoc_monthly_reports",
	"m_srcTableName" => "Eoc_monthly_reports"
));

$proto46["m_sql"] = "`Eoc_monthly_reports`.`returning_customers`";
$proto46["m_srcTableName"] = "Eoc_monthly_reports";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "total_ownership_yes",
	"m_strTable" => "Eoc_monthly_reports",
	"m_srcTableName" => "Eoc_monthly_reports"
));

$proto48["m_sql"] = "`Eoc_monthly_reports`.`total_ownership_yes`";
$proto48["m_srcTableName"] = "Eoc_monthly_reports";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "total_ownership_no",
	"m_strTable" => "Eoc_monthly_reports",
	"m_srcTableName" => "Eoc_monthly_reports"
));

$proto50["m_sql"] = "`Eoc_monthly_reports`.`total_ownership_no`";
$proto50["m_srcTableName"] = "Eoc_monthly_reports";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "Eoc_monthly_reports",
	"m_srcTableName" => "Eoc_monthly_reports"
));

$proto52["m_sql"] = "`Eoc_monthly_reports`.`created_at`";
$proto52["m_srcTableName"] = "Eoc_monthly_reports";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "Eoc_monthly_reports",
	"m_srcTableName" => "Eoc_monthly_reports"
));

$proto54["m_sql"] = "`Eoc_monthly_reports`.`updated_at`";
$proto54["m_srcTableName"] = "Eoc_monthly_reports";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "hokkai-dou",
	"m_strTable" => "Eoc_monthly_reports_by_prefectures",
	"m_srcTableName" => "Eoc_monthly_reports"
));

$proto56["m_sql"] = "`Eoc_monthly_reports_by_prefectures`.`hokkai-dou`";
$proto56["m_srcTableName"] = "Eoc_monthly_reports";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "aomori-ken",
	"m_strTable" => "Eoc_monthly_reports_by_prefectures",
	"m_srcTableName" => "Eoc_monthly_reports"
));

$proto58["m_sql"] = "`Eoc_monthly_reports_by_prefectures`.`aomori-ken`";
$proto58["m_srcTableName"] = "Eoc_monthly_reports";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "iwate-ken",
	"m_strTable" => "Eoc_monthly_reports_by_prefectures",
	"m_srcTableName" => "Eoc_monthly_reports"
));

$proto60["m_sql"] = "`Eoc_monthly_reports_by_prefectures`.`iwate-ken`";
$proto60["m_srcTableName"] = "Eoc_monthly_reports";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "miyagi-ken",
	"m_strTable" => "Eoc_monthly_reports_by_prefectures",
	"m_srcTableName" => "Eoc_monthly_reports"
));

$proto62["m_sql"] = "`Eoc_monthly_reports_by_prefectures`.`miyagi-ken`";
$proto62["m_srcTableName"] = "Eoc_monthly_reports";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "akita-ken",
	"m_strTable" => "Eoc_monthly_reports_by_prefectures",
	"m_srcTableName" => "Eoc_monthly_reports"
));

$proto64["m_sql"] = "`Eoc_monthly_reports_by_prefectures`.`akita-ken`";
$proto64["m_srcTableName"] = "Eoc_monthly_reports";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "yamagata-ken",
	"m_strTable" => "Eoc_monthly_reports_by_prefectures",
	"m_srcTableName" => "Eoc_monthly_reports"
));

$proto66["m_sql"] = "`Eoc_monthly_reports_by_prefectures`.`yamagata-ken`";
$proto66["m_srcTableName"] = "Eoc_monthly_reports";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "fukushima-ken",
	"m_strTable" => "Eoc_monthly_reports_by_prefectures",
	"m_srcTableName" => "Eoc_monthly_reports"
));

$proto68["m_sql"] = "`Eoc_monthly_reports_by_prefectures`.`fukushima-ken`";
$proto68["m_srcTableName"] = "Eoc_monthly_reports";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "ibaraki-ken",
	"m_strTable" => "Eoc_monthly_reports_by_prefectures",
	"m_srcTableName" => "Eoc_monthly_reports"
));

$proto70["m_sql"] = "`Eoc_monthly_reports_by_prefectures`.`ibaraki-ken`";
$proto70["m_srcTableName"] = "Eoc_monthly_reports";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "tochigi-ken",
	"m_strTable" => "Eoc_monthly_reports_by_prefectures",
	"m_srcTableName" => "Eoc_monthly_reports"
));

$proto72["m_sql"] = "`Eoc_monthly_reports_by_prefectures`.`tochigi-ken`";
$proto72["m_srcTableName"] = "Eoc_monthly_reports";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "gunma-ken",
	"m_strTable" => "Eoc_monthly_reports_by_prefectures",
	"m_srcTableName" => "Eoc_monthly_reports"
));

$proto74["m_sql"] = "`Eoc_monthly_reports_by_prefectures`.`gunma-ken`";
$proto74["m_srcTableName"] = "Eoc_monthly_reports";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "saitama-ken",
	"m_strTable" => "Eoc_monthly_reports_by_prefectures",
	"m_srcTableName" => "Eoc_monthly_reports"
));

$proto76["m_sql"] = "`Eoc_monthly_reports_by_prefectures`.`saitama-ken`";
$proto76["m_srcTableName"] = "Eoc_monthly_reports";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "chiba-ken",
	"m_strTable" => "Eoc_monthly_reports_by_prefectures",
	"m_srcTableName" => "Eoc_monthly_reports"
));

$proto78["m_sql"] = "`Eoc_monthly_reports_by_prefectures`.`chiba-ken`";
$proto78["m_srcTableName"] = "Eoc_monthly_reports";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "tokyo-ken",
	"m_strTable" => "Eoc_monthly_reports_by_prefectures",
	"m_srcTableName" => "Eoc_monthly_reports"
));

$proto80["m_sql"] = "`Eoc_monthly_reports_by_prefectures`.`tokyo-ken`";
$proto80["m_srcTableName"] = "Eoc_monthly_reports";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "kanagawa-ken",
	"m_strTable" => "Eoc_monthly_reports_by_prefectures",
	"m_srcTableName" => "Eoc_monthly_reports"
));

$proto82["m_sql"] = "`Eoc_monthly_reports_by_prefectures`.`kanagawa-ken`";
$proto82["m_srcTableName"] = "Eoc_monthly_reports";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "niigata-ken",
	"m_strTable" => "Eoc_monthly_reports_by_prefectures",
	"m_srcTableName" => "Eoc_monthly_reports"
));

$proto84["m_sql"] = "`Eoc_monthly_reports_by_prefectures`.`niigata-ken`";
$proto84["m_srcTableName"] = "Eoc_monthly_reports";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "toyama-ken",
	"m_strTable" => "Eoc_monthly_reports_by_prefectures",
	"m_srcTableName" => "Eoc_monthly_reports"
));

$proto86["m_sql"] = "`Eoc_monthly_reports_by_prefectures`.`toyama-ken`";
$proto86["m_srcTableName"] = "Eoc_monthly_reports";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "ishikawa-ken",
	"m_strTable" => "Eoc_monthly_reports_by_prefectures",
	"m_srcTableName" => "Eoc_monthly_reports"
));

$proto88["m_sql"] = "`Eoc_monthly_reports_by_prefectures`.`ishikawa-ken`";
$proto88["m_srcTableName"] = "Eoc_monthly_reports";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "fukui-ken",
	"m_strTable" => "Eoc_monthly_reports_by_prefectures",
	"m_srcTableName" => "Eoc_monthly_reports"
));

$proto90["m_sql"] = "`Eoc_monthly_reports_by_prefectures`.`fukui-ken`";
$proto90["m_srcTableName"] = "Eoc_monthly_reports";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLField(array(
	"m_strName" => "yamanashi-ken",
	"m_strTable" => "Eoc_monthly_reports_by_prefectures",
	"m_srcTableName" => "Eoc_monthly_reports"
));

$proto92["m_sql"] = "`Eoc_monthly_reports_by_prefectures`.`yamanashi-ken`";
$proto92["m_srcTableName"] = "Eoc_monthly_reports";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "";
$obj = new SQLFieldListItem($proto92);

$proto0["m_fieldlist"][]=$obj;
						$proto94=array();
			$obj = new SQLField(array(
	"m_strName" => "nagano-ken",
	"m_strTable" => "Eoc_monthly_reports_by_prefectures",
	"m_srcTableName" => "Eoc_monthly_reports"
));

$proto94["m_sql"] = "`Eoc_monthly_reports_by_prefectures`.`nagano-ken`";
$proto94["m_srcTableName"] = "Eoc_monthly_reports";
$proto94["m_expr"]=$obj;
$proto94["m_alias"] = "";
$obj = new SQLFieldListItem($proto94);

$proto0["m_fieldlist"][]=$obj;
						$proto96=array();
			$obj = new SQLField(array(
	"m_strName" => "gifu-ken",
	"m_strTable" => "Eoc_monthly_reports_by_prefectures",
	"m_srcTableName" => "Eoc_monthly_reports"
));

$proto96["m_sql"] = "`Eoc_monthly_reports_by_prefectures`.`gifu-ken`";
$proto96["m_srcTableName"] = "Eoc_monthly_reports";
$proto96["m_expr"]=$obj;
$proto96["m_alias"] = "";
$obj = new SQLFieldListItem($proto96);

$proto0["m_fieldlist"][]=$obj;
						$proto98=array();
			$obj = new SQLField(array(
	"m_strName" => "shizuoka-ken",
	"m_strTable" => "Eoc_monthly_reports_by_prefectures",
	"m_srcTableName" => "Eoc_monthly_reports"
));

$proto98["m_sql"] = "`Eoc_monthly_reports_by_prefectures`.`shizuoka-ken`";
$proto98["m_srcTableName"] = "Eoc_monthly_reports";
$proto98["m_expr"]=$obj;
$proto98["m_alias"] = "";
$obj = new SQLFieldListItem($proto98);

$proto0["m_fieldlist"][]=$obj;
						$proto100=array();
			$obj = new SQLField(array(
	"m_strName" => "aichi-ken",
	"m_strTable" => "Eoc_monthly_reports_by_prefectures",
	"m_srcTableName" => "Eoc_monthly_reports"
));

$proto100["m_sql"] = "`Eoc_monthly_reports_by_prefectures`.`aichi-ken`";
$proto100["m_srcTableName"] = "Eoc_monthly_reports";
$proto100["m_expr"]=$obj;
$proto100["m_alias"] = "";
$obj = new SQLFieldListItem($proto100);

$proto0["m_fieldlist"][]=$obj;
						$proto102=array();
			$obj = new SQLField(array(
	"m_strName" => "mie-ken",
	"m_strTable" => "Eoc_monthly_reports_by_prefectures",
	"m_srcTableName" => "Eoc_monthly_reports"
));

$proto102["m_sql"] = "`Eoc_monthly_reports_by_prefectures`.`mie-ken`";
$proto102["m_srcTableName"] = "Eoc_monthly_reports";
$proto102["m_expr"]=$obj;
$proto102["m_alias"] = "";
$obj = new SQLFieldListItem($proto102);

$proto0["m_fieldlist"][]=$obj;
						$proto104=array();
			$obj = new SQLField(array(
	"m_strName" => "shiga-ken",
	"m_strTable" => "Eoc_monthly_reports_by_prefectures",
	"m_srcTableName" => "Eoc_monthly_reports"
));

$proto104["m_sql"] = "`Eoc_monthly_reports_by_prefectures`.`shiga-ken`";
$proto104["m_srcTableName"] = "Eoc_monthly_reports";
$proto104["m_expr"]=$obj;
$proto104["m_alias"] = "";
$obj = new SQLFieldListItem($proto104);

$proto0["m_fieldlist"][]=$obj;
						$proto106=array();
			$obj = new SQLField(array(
	"m_strName" => "kyoto-fu",
	"m_strTable" => "Eoc_monthly_reports_by_prefectures",
	"m_srcTableName" => "Eoc_monthly_reports"
));

$proto106["m_sql"] = "`Eoc_monthly_reports_by_prefectures`.`kyoto-fu`";
$proto106["m_srcTableName"] = "Eoc_monthly_reports";
$proto106["m_expr"]=$obj;
$proto106["m_alias"] = "";
$obj = new SQLFieldListItem($proto106);

$proto0["m_fieldlist"][]=$obj;
						$proto108=array();
			$obj = new SQLField(array(
	"m_strName" => "osaka-fu",
	"m_strTable" => "Eoc_monthly_reports_by_prefectures",
	"m_srcTableName" => "Eoc_monthly_reports"
));

$proto108["m_sql"] = "`Eoc_monthly_reports_by_prefectures`.`osaka-fu`";
$proto108["m_srcTableName"] = "Eoc_monthly_reports";
$proto108["m_expr"]=$obj;
$proto108["m_alias"] = "";
$obj = new SQLFieldListItem($proto108);

$proto0["m_fieldlist"][]=$obj;
						$proto110=array();
			$obj = new SQLField(array(
	"m_strName" => "hyogo-ken",
	"m_strTable" => "Eoc_monthly_reports_by_prefectures",
	"m_srcTableName" => "Eoc_monthly_reports"
));

$proto110["m_sql"] = "`Eoc_monthly_reports_by_prefectures`.`hyogo-ken`";
$proto110["m_srcTableName"] = "Eoc_monthly_reports";
$proto110["m_expr"]=$obj;
$proto110["m_alias"] = "";
$obj = new SQLFieldListItem($proto110);

$proto0["m_fieldlist"][]=$obj;
						$proto112=array();
			$obj = new SQLField(array(
	"m_strName" => "nara-ken",
	"m_strTable" => "Eoc_monthly_reports_by_prefectures",
	"m_srcTableName" => "Eoc_monthly_reports"
));

$proto112["m_sql"] = "`Eoc_monthly_reports_by_prefectures`.`nara-ken`";
$proto112["m_srcTableName"] = "Eoc_monthly_reports";
$proto112["m_expr"]=$obj;
$proto112["m_alias"] = "";
$obj = new SQLFieldListItem($proto112);

$proto0["m_fieldlist"][]=$obj;
						$proto114=array();
			$obj = new SQLField(array(
	"m_strName" => "wakayama-ken",
	"m_strTable" => "Eoc_monthly_reports_by_prefectures",
	"m_srcTableName" => "Eoc_monthly_reports"
));

$proto114["m_sql"] = "`Eoc_monthly_reports_by_prefectures`.`wakayama-ken`";
$proto114["m_srcTableName"] = "Eoc_monthly_reports";
$proto114["m_expr"]=$obj;
$proto114["m_alias"] = "";
$obj = new SQLFieldListItem($proto114);

$proto0["m_fieldlist"][]=$obj;
						$proto116=array();
			$obj = new SQLField(array(
	"m_strName" => "tottori-ken",
	"m_strTable" => "Eoc_monthly_reports_by_prefectures",
	"m_srcTableName" => "Eoc_monthly_reports"
));

$proto116["m_sql"] = "`Eoc_monthly_reports_by_prefectures`.`tottori-ken`";
$proto116["m_srcTableName"] = "Eoc_monthly_reports";
$proto116["m_expr"]=$obj;
$proto116["m_alias"] = "";
$obj = new SQLFieldListItem($proto116);

$proto0["m_fieldlist"][]=$obj;
						$proto118=array();
			$obj = new SQLField(array(
	"m_strName" => "shimane-ken",
	"m_strTable" => "Eoc_monthly_reports_by_prefectures",
	"m_srcTableName" => "Eoc_monthly_reports"
));

$proto118["m_sql"] = "`Eoc_monthly_reports_by_prefectures`.`shimane-ken`";
$proto118["m_srcTableName"] = "Eoc_monthly_reports";
$proto118["m_expr"]=$obj;
$proto118["m_alias"] = "";
$obj = new SQLFieldListItem($proto118);

$proto0["m_fieldlist"][]=$obj;
						$proto120=array();
			$obj = new SQLField(array(
	"m_strName" => "okayama-ken",
	"m_strTable" => "Eoc_monthly_reports_by_prefectures",
	"m_srcTableName" => "Eoc_monthly_reports"
));

$proto120["m_sql"] = "`Eoc_monthly_reports_by_prefectures`.`okayama-ken`";
$proto120["m_srcTableName"] = "Eoc_monthly_reports";
$proto120["m_expr"]=$obj;
$proto120["m_alias"] = "";
$obj = new SQLFieldListItem($proto120);

$proto0["m_fieldlist"][]=$obj;
						$proto122=array();
			$obj = new SQLField(array(
	"m_strName" => "hiroshima-ken",
	"m_strTable" => "Eoc_monthly_reports_by_prefectures",
	"m_srcTableName" => "Eoc_monthly_reports"
));

$proto122["m_sql"] = "`Eoc_monthly_reports_by_prefectures`.`hiroshima-ken`";
$proto122["m_srcTableName"] = "Eoc_monthly_reports";
$proto122["m_expr"]=$obj;
$proto122["m_alias"] = "";
$obj = new SQLFieldListItem($proto122);

$proto0["m_fieldlist"][]=$obj;
						$proto124=array();
			$obj = new SQLField(array(
	"m_strName" => "yamaguchi-ken",
	"m_strTable" => "Eoc_monthly_reports_by_prefectures",
	"m_srcTableName" => "Eoc_monthly_reports"
));

$proto124["m_sql"] = "`Eoc_monthly_reports_by_prefectures`.`yamaguchi-ken`";
$proto124["m_srcTableName"] = "Eoc_monthly_reports";
$proto124["m_expr"]=$obj;
$proto124["m_alias"] = "";
$obj = new SQLFieldListItem($proto124);

$proto0["m_fieldlist"][]=$obj;
						$proto126=array();
			$obj = new SQLField(array(
	"m_strName" => "tokushima-ken",
	"m_strTable" => "Eoc_monthly_reports_by_prefectures",
	"m_srcTableName" => "Eoc_monthly_reports"
));

$proto126["m_sql"] = "`Eoc_monthly_reports_by_prefectures`.`tokushima-ken`";
$proto126["m_srcTableName"] = "Eoc_monthly_reports";
$proto126["m_expr"]=$obj;
$proto126["m_alias"] = "";
$obj = new SQLFieldListItem($proto126);

$proto0["m_fieldlist"][]=$obj;
						$proto128=array();
			$obj = new SQLField(array(
	"m_strName" => "kagawa-ken",
	"m_strTable" => "Eoc_monthly_reports_by_prefectures",
	"m_srcTableName" => "Eoc_monthly_reports"
));

$proto128["m_sql"] = "`Eoc_monthly_reports_by_prefectures`.`kagawa-ken`";
$proto128["m_srcTableName"] = "Eoc_monthly_reports";
$proto128["m_expr"]=$obj;
$proto128["m_alias"] = "";
$obj = new SQLFieldListItem($proto128);

$proto0["m_fieldlist"][]=$obj;
						$proto130=array();
			$obj = new SQLField(array(
	"m_strName" => "ehime-ken",
	"m_strTable" => "Eoc_monthly_reports_by_prefectures",
	"m_srcTableName" => "Eoc_monthly_reports"
));

$proto130["m_sql"] = "`Eoc_monthly_reports_by_prefectures`.`ehime-ken`";
$proto130["m_srcTableName"] = "Eoc_monthly_reports";
$proto130["m_expr"]=$obj;
$proto130["m_alias"] = "";
$obj = new SQLFieldListItem($proto130);

$proto0["m_fieldlist"][]=$obj;
						$proto132=array();
			$obj = new SQLField(array(
	"m_strName" => "kochi-ken",
	"m_strTable" => "Eoc_monthly_reports_by_prefectures",
	"m_srcTableName" => "Eoc_monthly_reports"
));

$proto132["m_sql"] = "`Eoc_monthly_reports_by_prefectures`.`kochi-ken`";
$proto132["m_srcTableName"] = "Eoc_monthly_reports";
$proto132["m_expr"]=$obj;
$proto132["m_alias"] = "";
$obj = new SQLFieldListItem($proto132);

$proto0["m_fieldlist"][]=$obj;
						$proto134=array();
			$obj = new SQLField(array(
	"m_strName" => "fukuoka-ken",
	"m_strTable" => "Eoc_monthly_reports_by_prefectures",
	"m_srcTableName" => "Eoc_monthly_reports"
));

$proto134["m_sql"] = "`Eoc_monthly_reports_by_prefectures`.`fukuoka-ken`";
$proto134["m_srcTableName"] = "Eoc_monthly_reports";
$proto134["m_expr"]=$obj;
$proto134["m_alias"] = "";
$obj = new SQLFieldListItem($proto134);

$proto0["m_fieldlist"][]=$obj;
						$proto136=array();
			$obj = new SQLField(array(
	"m_strName" => "saga-ken",
	"m_strTable" => "Eoc_monthly_reports_by_prefectures",
	"m_srcTableName" => "Eoc_monthly_reports"
));

$proto136["m_sql"] = "`Eoc_monthly_reports_by_prefectures`.`saga-ken`";
$proto136["m_srcTableName"] = "Eoc_monthly_reports";
$proto136["m_expr"]=$obj;
$proto136["m_alias"] = "";
$obj = new SQLFieldListItem($proto136);

$proto0["m_fieldlist"][]=$obj;
						$proto138=array();
			$obj = new SQLField(array(
	"m_strName" => "nagasaki-ken",
	"m_strTable" => "Eoc_monthly_reports_by_prefectures",
	"m_srcTableName" => "Eoc_monthly_reports"
));

$proto138["m_sql"] = "`Eoc_monthly_reports_by_prefectures`.`nagasaki-ken`";
$proto138["m_srcTableName"] = "Eoc_monthly_reports";
$proto138["m_expr"]=$obj;
$proto138["m_alias"] = "";
$obj = new SQLFieldListItem($proto138);

$proto0["m_fieldlist"][]=$obj;
						$proto140=array();
			$obj = new SQLField(array(
	"m_strName" => "kumamoto-ken",
	"m_strTable" => "Eoc_monthly_reports_by_prefectures",
	"m_srcTableName" => "Eoc_monthly_reports"
));

$proto140["m_sql"] = "`Eoc_monthly_reports_by_prefectures`.`kumamoto-ken`";
$proto140["m_srcTableName"] = "Eoc_monthly_reports";
$proto140["m_expr"]=$obj;
$proto140["m_alias"] = "";
$obj = new SQLFieldListItem($proto140);

$proto0["m_fieldlist"][]=$obj;
						$proto142=array();
			$obj = new SQLField(array(
	"m_strName" => "oita-ken",
	"m_strTable" => "Eoc_monthly_reports_by_prefectures",
	"m_srcTableName" => "Eoc_monthly_reports"
));

$proto142["m_sql"] = "`Eoc_monthly_reports_by_prefectures`.`oita-ken`";
$proto142["m_srcTableName"] = "Eoc_monthly_reports";
$proto142["m_expr"]=$obj;
$proto142["m_alias"] = "";
$obj = new SQLFieldListItem($proto142);

$proto0["m_fieldlist"][]=$obj;
						$proto144=array();
			$obj = new SQLField(array(
	"m_strName" => "miyazaki-ken",
	"m_strTable" => "Eoc_monthly_reports_by_prefectures",
	"m_srcTableName" => "Eoc_monthly_reports"
));

$proto144["m_sql"] = "`Eoc_monthly_reports_by_prefectures`.`miyazaki-ken`";
$proto144["m_srcTableName"] = "Eoc_monthly_reports";
$proto144["m_expr"]=$obj;
$proto144["m_alias"] = "";
$obj = new SQLFieldListItem($proto144);

$proto0["m_fieldlist"][]=$obj;
						$proto146=array();
			$obj = new SQLField(array(
	"m_strName" => "kagoshima-ken",
	"m_strTable" => "Eoc_monthly_reports_by_prefectures",
	"m_srcTableName" => "Eoc_monthly_reports"
));

$proto146["m_sql"] = "`Eoc_monthly_reports_by_prefectures`.`kagoshima-ken`";
$proto146["m_srcTableName"] = "Eoc_monthly_reports";
$proto146["m_expr"]=$obj;
$proto146["m_alias"] = "";
$obj = new SQLFieldListItem($proto146);

$proto0["m_fieldlist"][]=$obj;
						$proto148=array();
			$obj = new SQLField(array(
	"m_strName" => "okinawa-ken",
	"m_strTable" => "Eoc_monthly_reports_by_prefectures",
	"m_srcTableName" => "Eoc_monthly_reports"
));

$proto148["m_sql"] = "`Eoc_monthly_reports_by_prefectures`.`okinawa-ken`";
$proto148["m_srcTableName"] = "Eoc_monthly_reports";
$proto148["m_expr"]=$obj;
$proto148["m_alias"] = "";
$obj = new SQLFieldListItem($proto148);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto150=array();
$proto150["m_link"] = "SQLL_MAIN";
			$proto151=array();
$proto151["m_strName"] = "Eoc_monthly_reports";
$proto151["m_srcTableName"] = "Eoc_monthly_reports";
$proto151["m_columns"] = array();
$proto151["m_columns"][] = "id";
$proto151["m_columns"][] = "year";
$proto151["m_columns"][] = "month";
$proto151["m_columns"][] = "male_count";
$proto151["m_columns"][] = "female_count";
$proto151["m_columns"][] = "total_diamond_dept";
$proto151["m_columns"][] = "total_common_dept";
$proto151["m_columns"][] = "total_bullion_dept";
$proto151["m_columns"][] = "total_jewelry_dept";
$proto151["m_columns"][] = "total_watch_dept";
$proto151["m_columns"][] = "total_fashion_dept";
$proto151["m_columns"][] = "age_20s_count";
$proto151["m_columns"][] = "age_30s_count";
$proto151["m_columns"][] = "age_40s_count";
$proto151["m_columns"][] = "age_50s_count";
$proto151["m_columns"][] = "age_60s_count";
$proto151["m_columns"][] = "age_70s_count";
$proto151["m_columns"][] = "age_80s_count";
$proto151["m_columns"][] = "age_90s_count";
$proto151["m_columns"][] = "total_customers";
$proto151["m_columns"][] = "new_customers";
$proto151["m_columns"][] = "returning_customers";
$proto151["m_columns"][] = "total_ownership_yes";
$proto151["m_columns"][] = "total_ownership_no";
$proto151["m_columns"][] = "created_at";
$proto151["m_columns"][] = "updated_at";
$obj = new SQLTable($proto151);

$proto150["m_table"] = $obj;
$proto150["m_sql"] = "`Eoc_monthly_reports`";
$proto150["m_alias"] = "";
$proto150["m_srcTableName"] = "Eoc_monthly_reports";
$proto152=array();
$proto152["m_sql"] = "";
$proto152["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto152["m_column"]=$obj;
$proto152["m_contained"] = array();
$proto152["m_strCase"] = "";
$proto152["m_havingmode"] = false;
$proto152["m_inBrackets"] = false;
$proto152["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto152);

$proto150["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto150);

$proto0["m_fromlist"][]=$obj;
												$proto154=array();
$proto154["m_link"] = "SQLL_LEFTJOIN";
			$proto155=array();
$proto155["m_strName"] = "Eoc_monthly_reports_by_prefectures";
$proto155["m_srcTableName"] = "Eoc_monthly_reports";
$proto155["m_columns"] = array();
$proto155["m_columns"][] = "id";
$proto155["m_columns"][] = "EocMonthlyReport_id";
$proto155["m_columns"][] = "hokkai-dou";
$proto155["m_columns"][] = "aomori-ken";
$proto155["m_columns"][] = "iwate-ken";
$proto155["m_columns"][] = "miyagi-ken";
$proto155["m_columns"][] = "akita-ken";
$proto155["m_columns"][] = "yamagata-ken";
$proto155["m_columns"][] = "fukushima-ken";
$proto155["m_columns"][] = "ibaraki-ken";
$proto155["m_columns"][] = "tochigi-ken";
$proto155["m_columns"][] = "gunma-ken";
$proto155["m_columns"][] = "saitama-ken";
$proto155["m_columns"][] = "chiba-ken";
$proto155["m_columns"][] = "tokyo-ken";
$proto155["m_columns"][] = "kanagawa-ken";
$proto155["m_columns"][] = "niigata-ken";
$proto155["m_columns"][] = "toyama-ken";
$proto155["m_columns"][] = "ishikawa-ken";
$proto155["m_columns"][] = "fukui-ken";
$proto155["m_columns"][] = "yamanashi-ken";
$proto155["m_columns"][] = "nagano-ken";
$proto155["m_columns"][] = "gifu-ken";
$proto155["m_columns"][] = "shizuoka-ken";
$proto155["m_columns"][] = "aichi-ken";
$proto155["m_columns"][] = "mie-ken";
$proto155["m_columns"][] = "shiga-ken";
$proto155["m_columns"][] = "kyoto-fu";
$proto155["m_columns"][] = "osaka-fu";
$proto155["m_columns"][] = "hyogo-ken";
$proto155["m_columns"][] = "nara-ken";
$proto155["m_columns"][] = "wakayama-ken";
$proto155["m_columns"][] = "tottori-ken";
$proto155["m_columns"][] = "shimane-ken";
$proto155["m_columns"][] = "okayama-ken";
$proto155["m_columns"][] = "hiroshima-ken";
$proto155["m_columns"][] = "yamaguchi-ken";
$proto155["m_columns"][] = "tokushima-ken";
$proto155["m_columns"][] = "kagawa-ken";
$proto155["m_columns"][] = "ehime-ken";
$proto155["m_columns"][] = "kochi-ken";
$proto155["m_columns"][] = "fukuoka-ken";
$proto155["m_columns"][] = "saga-ken";
$proto155["m_columns"][] = "nagasaki-ken";
$proto155["m_columns"][] = "kumamoto-ken";
$proto155["m_columns"][] = "oita-ken";
$proto155["m_columns"][] = "miyazaki-ken";
$proto155["m_columns"][] = "kagoshima-ken";
$proto155["m_columns"][] = "okinawa-ken";
$proto155["m_columns"][] = "created_at";
$proto155["m_columns"][] = "updated_at";
$obj = new SQLTable($proto155);

$proto154["m_table"] = $obj;
$proto154["m_sql"] = "LEFT OUTER JOIN `Eoc_monthly_reports_by_prefectures` ON `Eoc_monthly_reports`.`id` = `Eoc_monthly_reports_by_prefectures`.`EocMonthlyReport_id`";
$proto154["m_alias"] = "";
$proto154["m_srcTableName"] = "Eoc_monthly_reports";
$proto156=array();
$proto156["m_sql"] = "`Eoc_monthly_reports`.`id` = `Eoc_monthly_reports_by_prefectures`.`EocMonthlyReport_id`";
$proto156["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "Eoc_monthly_reports",
	"m_srcTableName" => "Eoc_monthly_reports"
));

$proto156["m_column"]=$obj;
$proto156["m_contained"] = array();
$proto156["m_strCase"] = "= `Eoc_monthly_reports_by_prefectures`.`EocMonthlyReport_id`";
$proto156["m_havingmode"] = false;
$proto156["m_inBrackets"] = false;
$proto156["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto156);

$proto154["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto154);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto158=array();
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "Eoc_monthly_reports",
	"m_srcTableName" => "Eoc_monthly_reports"
));

$proto158["m_column"]=$obj;
$proto158["m_bAsc"] = 0;
$proto158["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto158);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Eoc_monthly_reports";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Eoc_monthly_reports = createSqlQuery_Eoc_monthly_reports();


	
		;

																																																																								

$tdataEoc_monthly_reports[".sqlquery"] = $queryData_Eoc_monthly_reports;

$tableEvents["Eoc_monthly_reports"] = new eventsBase;
$tdataEoc_monthly_reports[".hasEvents"] = false;

?>