<?php
require_once(getabspath("classes/cipherer.php"));




$tdatakin_satei = array();
	$tdatakin_satei[".truncateText"] = true;
	$tdatakin_satei[".NumberOfChars"] = 80;
	$tdatakin_satei[".ShortName"] = "kin_satei";
	$tdatakin_satei[".OwnerID"] = "";
	$tdatakin_satei[".OriginalTable"] = "shouhin";

//	field labels
$fieldLabelskin_satei = array();
$fieldToolTipskin_satei = array();
$pageTitleskin_satei = array();
$placeHolderskin_satei = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelskin_satei["Japanese"] = array();
	$fieldToolTipskin_satei["Japanese"] = array();
	$placeHolderskin_satei["Japanese"] = array();
	$pageTitleskin_satei["Japanese"] = array();
	$fieldLabelskin_satei["Japanese"]["product_id"] = "SEQ";
	$fieldToolTipskin_satei["Japanese"]["product_id"] = "";
	$placeHolderskin_satei["Japanese"]["product_id"] = "";
	$fieldLabelskin_satei["Japanese"]["status"] = "商品状態";
	$fieldToolTipskin_satei["Japanese"]["status"] = "";
	$placeHolderskin_satei["Japanese"]["status"] = "";
	$fieldLabelskin_satei["Japanese"]["category_id"] = "大カテゴリー";
	$fieldToolTipskin_satei["Japanese"]["category_id"] = "";
	$placeHolderskin_satei["Japanese"]["category_id"] = "";
	$fieldLabelskin_satei["Japanese"]["sub_category_id1"] = "中カテゴリー";
	$fieldToolTipskin_satei["Japanese"]["sub_category_id1"] = "";
	$placeHolderskin_satei["Japanese"]["sub_category_id1"] = "";
	$fieldLabelskin_satei["Japanese"]["yahoo_sex"] = "性別";
	$fieldToolTipskin_satei["Japanese"]["yahoo_sex"] = "";
	$placeHolderskin_satei["Japanese"]["yahoo_sex"] = "";
	$fieldLabelskin_satei["Japanese"]["gold_property"] = "金性";
	$fieldToolTipskin_satei["Japanese"]["gold_property"] = "";
	$placeHolderskin_satei["Japanese"]["gold_property"] = "";
	$fieldLabelskin_satei["Japanese"]["comment"] = "コメント";
	$fieldToolTipskin_satei["Japanese"]["comment"] = "";
	$placeHolderskin_satei["Japanese"]["comment"] = "";
	$fieldLabelskin_satei["Japanese"]["Gram"] = "金性グラム";
	$fieldToolTipskin_satei["Japanese"]["Gram"] = "";
	$placeHolderskin_satei["Japanese"]["Gram"] = "";
	$fieldLabelskin_satei["Japanese"]["unit"] = "単位";
	$fieldToolTipskin_satei["Japanese"]["unit"] = "";
	$placeHolderskin_satei["Japanese"]["unit"] = "";
	$fieldLabelskin_satei["Japanese"]["Parent_stone"] = "親石";
	$fieldToolTipskin_satei["Japanese"]["Parent_stone"] = "";
	$placeHolderskin_satei["Japanese"]["Parent_stone"] = "";
	$fieldLabelskin_satei["Japanese"]["price_per_gram"] = "金性単価";
	$fieldToolTipskin_satei["Japanese"]["price_per_gram"] = "";
	$placeHolderskin_satei["Japanese"]["price_per_gram"] = "";
	$fieldLabelskin_satei["Japanese"]["price_per_parent_stone"] = "親石単価";
	$fieldToolTipskin_satei["Japanese"]["price_per_parent_stone"] = "";
	$placeHolderskin_satei["Japanese"]["price_per_parent_stone"] = "";
	$fieldLabelskin_satei["Japanese"]["price"] = "買取額";
	$fieldToolTipskin_satei["Japanese"]["price"] = "";
	$placeHolderskin_satei["Japanese"]["price"] = "";
	$fieldLabelskin_satei["Japanese"]["sales_price"] = "販売額";
	$fieldToolTipskin_satei["Japanese"]["sales_price"] = "";
	$placeHolderskin_satei["Japanese"]["sales_price"] = "";
	$fieldLabelskin_satei["Japanese"]["yahoo_sankou_uwadai"] = "参考上代";
	$fieldToolTipskin_satei["Japanese"]["yahoo_sankou_uwadai"] = "";
	$placeHolderskin_satei["Japanese"]["yahoo_sankou_uwadai"] = "";
	$fieldLabelskin_satei["Japanese"]["satei_by"] = "査定人";
	$fieldToolTipskin_satei["Japanese"]["satei_by"] = "";
	$placeHolderskin_satei["Japanese"]["satei_by"] = "";
	$fieldLabelskin_satei["Japanese"]["satei_hi"] = "査定日";
	$fieldToolTipskin_satei["Japanese"]["satei_hi"] = "";
	$placeHolderskin_satei["Japanese"]["satei_hi"] = "";
	$fieldLabelskin_satei["Japanese"]["updated_by"] = "更新者";
	$fieldToolTipskin_satei["Japanese"]["updated_by"] = "";
	$placeHolderskin_satei["Japanese"]["updated_by"] = "";
	$fieldLabelskin_satei["Japanese"]["updated_at"] = "更新日";
	$fieldToolTipskin_satei["Japanese"]["updated_at"] = "";
	$placeHolderskin_satei["Japanese"]["updated_at"] = "";
	$fieldLabelskin_satei["Japanese"]["DA_SELFGRES"] = "自グレ";
	$fieldToolTipskin_satei["Japanese"]["DA_SELFGRES"] = "";
	$placeHolderskin_satei["Japanese"]["DA_SELFGRES"] = "";
	$fieldLabelskin_satei["Japanese"]["kinsa_flag"] = "Kinsa Flag";
	$fieldToolTipskin_satei["Japanese"]["kinsa_flag"] = "";
	$placeHolderskin_satei["Japanese"]["kinsa_flag"] = "";
	$fieldLabelskin_satei["Japanese"]["yahoo_junle"] = "Yahoo Junle";
	$fieldToolTipskin_satei["Japanese"]["yahoo_junle"] = "";
	$placeHolderskin_satei["Japanese"]["yahoo_junle"] = "";
	$fieldLabelskin_satei["Japanese"]["REG_AUTHOR"] = "成約人";
	$fieldToolTipskin_satei["Japanese"]["REG_AUTHOR"] = "";
	$placeHolderskin_satei["Japanese"]["REG_AUTHOR"] = "";
	$fieldLabelskin_satei["Japanese"]["DT_UP_DATE"] = "成約日";
	$fieldToolTipskin_satei["Japanese"]["DT_UP_DATE"] = "";
	$placeHolderskin_satei["Japanese"]["DT_UP_DATE"] = "";
	$fieldLabelskin_satei["Japanese"]["AWAZU_NIN"] = "返却人";
	$fieldToolTipskin_satei["Japanese"]["AWAZU_NIN"] = "";
	$placeHolderskin_satei["Japanese"]["AWAZU_NIN"] = "";
	$fieldLabelskin_satei["Japanese"]["AWAZU_DATE"] = "返却日";
	$fieldToolTipskin_satei["Japanese"]["AWAZU_DATE"] = "";
	$placeHolderskin_satei["Japanese"]["AWAZU_DATE"] = "";
	$fieldLabelskin_satei["Japanese"]["ecc_id"] = "顧客SEQ";
	$fieldToolTipskin_satei["Japanese"]["ecc_id"] = "";
	$placeHolderskin_satei["Japanese"]["ecc_id"] = "";
	$fieldLabelskin_satei["Japanese"]["_"] = "";
	$fieldToolTipskin_satei["Japanese"]["_"] = "";
	$placeHolderskin_satei["Japanese"]["_"] = "";
	$fieldLabelskin_satei["Japanese"]["_"] = "";
	$fieldToolTipskin_satei["Japanese"]["_"] = "";
	$placeHolderskin_satei["Japanese"]["_"] = "";
	$fieldLabelskin_satei["Japanese"]["_"] = "";
	$fieldToolTipskin_satei["Japanese"]["_"] = "";
	$placeHolderskin_satei["Japanese"]["_"] = "";
	$fieldLabelskin_satei["Japanese"]["nyuukin_price"] = "入金額";
	$fieldToolTipskin_satei["Japanese"]["nyuukin_price"] = "";
	$placeHolderskin_satei["Japanese"]["nyuukin_price"] = "";
	$fieldLabelskin_satei["Japanese"]["kanryou_henbi"] = "完了変更日";
	$fieldToolTipskin_satei["Japanese"]["kanryou_henbi"] = "";
	$placeHolderskin_satei["Japanese"]["kanryou_henbi"] = "";
	$fieldLabelskin_satei["Japanese"]["Aside_stone"] = "脇石";
	$fieldToolTipskin_satei["Japanese"]["Aside_stone"] = "";
	$placeHolderskin_satei["Japanese"]["Aside_stone"] = "";
	$fieldLabelskin_satei["Japanese"]["price_per_aside_stone"] = "脇石単価";
	$fieldToolTipskin_satei["Japanese"]["price_per_aside_stone"] = "";
	$placeHolderskin_satei["Japanese"]["price_per_aside_stone"] = "";
	$fieldLabelskin_satei["Japanese"]["Eoc_takuhai_id"] = "宅配取引Id";
	$fieldToolTipskin_satei["Japanese"]["Eoc_takuhai_id"] = "";
	$placeHolderskin_satei["Japanese"]["Eoc_takuhai_id"] = "";
	$fieldLabelskin_satei["Japanese"]["Eoc_unfinished_id"] = "店頭取引Id";
	$fieldToolTipskin_satei["Japanese"]["Eoc_unfinished_id"] = "";
	$placeHolderskin_satei["Japanese"]["Eoc_unfinished_id"] = "";
	$fieldLabelskin_satei["Japanese"]["line"] = "ライン";
	$fieldToolTipskin_satei["Japanese"]["line"] = "";
	$placeHolderskin_satei["Japanese"]["line"] = "";
	$fieldLabelskin_satei["Japanese"]["item_name"] = "アイテム名";
	$fieldToolTipskin_satei["Japanese"]["item_name"] = "";
	$placeHolderskin_satei["Japanese"]["item_name"] = "";
	$fieldLabelskin_satei["Japanese"]["serial_number"] = "機番";
	$fieldToolTipskin_satei["Japanese"]["serial_number"] = "";
	$placeHolderskin_satei["Japanese"]["serial_number"] = "";
	$fieldLabelskin_satei["Japanese"]["product_num"] = "ブランドID";
	$fieldToolTipskin_satei["Japanese"]["product_num"] = "";
	$placeHolderskin_satei["Japanese"]["product_num"] = "";
	$fieldLabelskin_satei["Japanese"]["meisai_number"] = "明細No.";
	$fieldToolTipskin_satei["Japanese"]["meisai_number"] = "";
	$placeHolderskin_satei["Japanese"]["meisai_number"] = "";
	$fieldLabelskin_satei["Japanese"]["tentou_label_output_flag"] = "ST不変ラベル出力";
	$fieldToolTipskin_satei["Japanese"]["tentou_label_output_flag"] = "";
	$placeHolderskin_satei["Japanese"]["tentou_label_output_flag"] = "";
	$fieldLabelskin_satei["Japanese"]["accessories"] = "付属品";
	$fieldToolTipskin_satei["Japanese"]["accessories"] = "";
	$placeHolderskin_satei["Japanese"]["accessories"] = "";
	$fieldLabelskin_satei["Japanese"]["Discrimination"] = "鑑別";
	$fieldToolTipskin_satei["Japanese"]["Discrimination"] = "";
	$placeHolderskin_satei["Japanese"]["Discrimination"] = "";
	$fieldLabelskin_satei["Japanese"]["Eoc_trader_id_for_buy"] = "Eoc Trader Id For Buy";
	$fieldToolTipskin_satei["Japanese"]["Eoc_trader_id_for_buy"] = "";
	$placeHolderskin_satei["Japanese"]["Eoc_trader_id_for_buy"] = "";
	$fieldLabelskin_satei["Japanese"]["other_cost"] = "その他コスト";
	$fieldToolTipskin_satei["Japanese"]["other_cost"] = "";
	$placeHolderskin_satei["Japanese"]["other_cost"] = "";
	$fieldLabelskin_satei["Japanese"]["DA_INTENSITY"] = "INSI";
	$fieldToolTipskin_satei["Japanese"]["DA_INTENSITY"] = "";
	$placeHolderskin_satei["Japanese"]["DA_INTENSITY"] = "";
	$fieldLabelskin_satei["Japanese"]["DA_OVERTONE"] = "OVTO";
	$fieldToolTipskin_satei["Japanese"]["DA_OVERTONE"] = "";
	$placeHolderskin_satei["Japanese"]["DA_OVERTONE"] = "";
	$fieldLabelskin_satei["Japanese"]["DA_COLOR"] = "カラー";
	$fieldToolTipskin_satei["Japanese"]["DA_COLOR"] = "";
	$placeHolderskin_satei["Japanese"]["DA_COLOR"] = "";
	$fieldLabelskin_satei["Japanese"]["DA_CLARITY"] = "クラリティ";
	$fieldToolTipskin_satei["Japanese"]["DA_CLARITY"] = "";
	$placeHolderskin_satei["Japanese"]["DA_CLARITY"] = "";
	$fieldLabelskin_satei["Japanese"]["DA_CUT"] = "カット";
	$fieldToolTipskin_satei["Japanese"]["DA_CUT"] = "";
	$placeHolderskin_satei["Japanese"]["DA_CUT"] = "";
	$fieldLabelskin_satei["Japanese"]["DA_POLISH"] = "ポリッシュ";
	$fieldToolTipskin_satei["Japanese"]["DA_POLISH"] = "";
	$placeHolderskin_satei["Japanese"]["DA_POLISH"] = "";
	$fieldLabelskin_satei["Japanese"]["DA_SYMMETRY"] = "シンメトリ";
	$fieldToolTipskin_satei["Japanese"]["DA_SYMMETRY"] = "";
	$placeHolderskin_satei["Japanese"]["DA_SYMMETRY"] = "";
	$fieldLabelskin_satei["Japanese"]["DA_FLUO"] = "蛍光";
	$fieldToolTipskin_satei["Japanese"]["DA_FLUO"] = "";
	$placeHolderskin_satei["Japanese"]["DA_FLUO"] = "";
	$fieldLabelskin_satei["Japanese"]["DA_COLOR_FLUO"] = "COFL";
	$fieldToolTipskin_satei["Japanese"]["DA_COLOR_FLUO"] = "";
	$placeHolderskin_satei["Japanese"]["DA_COLOR_FLUO"] = "";
	$fieldLabelskin_satei["Japanese"]["DA_WIDE"] = "サイズ1";
	$fieldToolTipskin_satei["Japanese"]["DA_WIDE"] = "";
	$placeHolderskin_satei["Japanese"]["DA_WIDE"] = "";
	$fieldLabelskin_satei["Japanese"]["DA_HIGH"] = "サイズ2";
	$fieldToolTipskin_satei["Japanese"]["DA_HIGH"] = "";
	$placeHolderskin_satei["Japanese"]["DA_HIGH"] = "";
	$fieldLabelskin_satei["Japanese"]["DA_DEPTH"] = "サイズ3";
	$fieldToolTipskin_satei["Japanese"]["DA_DEPTH"] = "";
	$placeHolderskin_satei["Japanese"]["DA_DEPTH"] = "";
	$fieldLabelskin_satei["Japanese"]["DA_FRAPA"] = "FRAPA";
	$fieldToolTipskin_satei["Japanese"]["DA_FRAPA"] = "";
	$placeHolderskin_satei["Japanese"]["DA_FRAPA"] = "";
	$fieldLabelskin_satei["Japanese"]["DA_RATE"] = "RATE";
	$fieldToolTipskin_satei["Japanese"]["DA_RATE"] = "";
	$placeHolderskin_satei["Japanese"]["DA_RATE"] = "";
	$fieldLabelskin_satei["Japanese"]["multiplication_rate"] = "掛け率";
	$fieldToolTipskin_satei["Japanese"]["multiplication_rate"] = "";
	$placeHolderskin_satei["Japanese"]["multiplication_rate"] = "";
	$fieldLabelskin_satei["Japanese"]["Remarks"] = "宝飾備考";
	$fieldToolTipskin_satei["Japanese"]["Remarks"] = "";
	$placeHolderskin_satei["Japanese"]["Remarks"] = "";
	if (count($fieldToolTipskin_satei["Japanese"]))
		$tdatakin_satei[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelskin_satei[""] = array();
	$fieldToolTipskin_satei[""] = array();
	$placeHolderskin_satei[""] = array();
	$pageTitleskin_satei[""] = array();
	$fieldLabelskin_satei[""]["status"] = "Status";
	$fieldToolTipskin_satei[""]["status"] = "";
	$placeHolderskin_satei[""]["status"] = "";
	$fieldLabelskin_satei[""]["category_id"] = "Category Id";
	$fieldToolTipskin_satei[""]["category_id"] = "";
	$placeHolderskin_satei[""]["category_id"] = "";
	$fieldLabelskin_satei[""]["sub_category_id1"] = "Sub Category Id1";
	$fieldToolTipskin_satei[""]["sub_category_id1"] = "";
	$placeHolderskin_satei[""]["sub_category_id1"] = "";
	$fieldLabelskin_satei[""]["yahoo_sex"] = "Yahoo Sex";
	$fieldToolTipskin_satei[""]["yahoo_sex"] = "";
	$placeHolderskin_satei[""]["yahoo_sex"] = "";
	$fieldLabelskin_satei[""]["gold_property"] = "Gold Property";
	$fieldToolTipskin_satei[""]["gold_property"] = "";
	$placeHolderskin_satei[""]["gold_property"] = "";
	$fieldLabelskin_satei[""]["comment"] = "Comment";
	$fieldToolTipskin_satei[""]["comment"] = "";
	$placeHolderskin_satei[""]["comment"] = "";
	$fieldLabelskin_satei[""]["Gram"] = "Gram";
	$fieldToolTipskin_satei[""]["Gram"] = "";
	$placeHolderskin_satei[""]["Gram"] = "";
	$fieldLabelskin_satei[""]["unit"] = "Unit";
	$fieldToolTipskin_satei[""]["unit"] = "";
	$placeHolderskin_satei[""]["unit"] = "";
	$fieldLabelskin_satei[""]["Parent_stone"] = "Parent Stone";
	$fieldToolTipskin_satei[""]["Parent_stone"] = "";
	$placeHolderskin_satei[""]["Parent_stone"] = "";
	$fieldLabelskin_satei[""]["price_per_gram"] = "Price Per Gram";
	$fieldToolTipskin_satei[""]["price_per_gram"] = "";
	$placeHolderskin_satei[""]["price_per_gram"] = "";
	$fieldLabelskin_satei[""]["price_per_parent_stone"] = "Price Per Parent Stone";
	$fieldToolTipskin_satei[""]["price_per_parent_stone"] = "";
	$placeHolderskin_satei[""]["price_per_parent_stone"] = "";
	$fieldLabelskin_satei[""]["price"] = "Price";
	$fieldToolTipskin_satei[""]["price"] = "";
	$placeHolderskin_satei[""]["price"] = "";
	$fieldLabelskin_satei[""]["sales_price"] = "Sales Price";
	$fieldToolTipskin_satei[""]["sales_price"] = "";
	$placeHolderskin_satei[""]["sales_price"] = "";
	$fieldLabelskin_satei[""]["yahoo_sankou_uwadai"] = "Yahoo Sankou Uwadai";
	$fieldToolTipskin_satei[""]["yahoo_sankou_uwadai"] = "";
	$placeHolderskin_satei[""]["yahoo_sankou_uwadai"] = "";
	$fieldLabelskin_satei[""]["satei_by"] = "Satei By";
	$fieldToolTipskin_satei[""]["satei_by"] = "";
	$placeHolderskin_satei[""]["satei_by"] = "";
	$fieldLabelskin_satei[""]["satei_hi"] = "Satei Hi";
	$fieldToolTipskin_satei[""]["satei_hi"] = "";
	$placeHolderskin_satei[""]["satei_hi"] = "";
	$fieldLabelskin_satei[""]["updated_by"] = "Updated By";
	$fieldToolTipskin_satei[""]["updated_by"] = "";
	$placeHolderskin_satei[""]["updated_by"] = "";
	$fieldLabelskin_satei[""]["updated_at"] = "Updated At";
	$fieldToolTipskin_satei[""]["updated_at"] = "";
	$placeHolderskin_satei[""]["updated_at"] = "";
	$fieldLabelskin_satei[""]["DA_SELFGRES"] = "DA SELFGRES";
	$fieldToolTipskin_satei[""]["DA_SELFGRES"] = "";
	$placeHolderskin_satei[""]["DA_SELFGRES"] = "";
	$fieldLabelskin_satei[""]["kinsa_flag"] = "Kinsa Flag";
	$fieldToolTipskin_satei[""]["kinsa_flag"] = "";
	$placeHolderskin_satei[""]["kinsa_flag"] = "";
	$fieldLabelskin_satei[""]["yahoo_junle"] = "Yahoo Junle";
	$fieldToolTipskin_satei[""]["yahoo_junle"] = "";
	$placeHolderskin_satei[""]["yahoo_junle"] = "";
	$fieldLabelskin_satei[""]["REG_AUTHOR"] = "REG AUTHOR";
	$fieldToolTipskin_satei[""]["REG_AUTHOR"] = "";
	$placeHolderskin_satei[""]["REG_AUTHOR"] = "";
	$fieldLabelskin_satei[""]["DT_UP_DATE"] = "DT UP DATE";
	$fieldToolTipskin_satei[""]["DT_UP_DATE"] = "";
	$placeHolderskin_satei[""]["DT_UP_DATE"] = "";
	$fieldLabelskin_satei[""]["AWAZU_NIN"] = "AWAZU NIN";
	$fieldToolTipskin_satei[""]["AWAZU_NIN"] = "";
	$placeHolderskin_satei[""]["AWAZU_NIN"] = "";
	$fieldLabelskin_satei[""]["AWAZU_DATE"] = "AWAZU DATE";
	$fieldToolTipskin_satei[""]["AWAZU_DATE"] = "";
	$placeHolderskin_satei[""]["AWAZU_DATE"] = "";
	$fieldLabelskin_satei[""]["ecc_id"] = "Ecc Id";
	$fieldToolTipskin_satei[""]["ecc_id"] = "";
	$placeHolderskin_satei[""]["ecc_id"] = "";
	$fieldLabelskin_satei[""]["_"] = "×";
	$fieldToolTipskin_satei[""]["_"] = "";
	$placeHolderskin_satei[""]["_"] = "";
	$fieldLabelskin_satei[""]["_"] = "=";
	$fieldToolTipskin_satei[""]["_"] = "";
	$placeHolderskin_satei[""]["_"] = "";
	$fieldLabelskin_satei[""]["_"] = "円";
	$fieldToolTipskin_satei[""]["_"] = "";
	$placeHolderskin_satei[""]["_"] = "";
	$fieldLabelskin_satei[""]["nyuukin_price"] = "Nyuukin Price";
	$fieldToolTipskin_satei[""]["nyuukin_price"] = "";
	$placeHolderskin_satei[""]["nyuukin_price"] = "";
	$fieldLabelskin_satei[""]["kanryou_henbi"] = "Kanryou Henbi";
	$fieldToolTipskin_satei[""]["kanryou_henbi"] = "";
	$placeHolderskin_satei[""]["kanryou_henbi"] = "";
	$fieldLabelskin_satei[""]["Aside_stone"] = "Aside Stone";
	$fieldToolTipskin_satei[""]["Aside_stone"] = "";
	$placeHolderskin_satei[""]["Aside_stone"] = "";
	$fieldLabelskin_satei[""]["price_per_aside_stone"] = "Price Per Aside Stone";
	$fieldToolTipskin_satei[""]["price_per_aside_stone"] = "";
	$placeHolderskin_satei[""]["price_per_aside_stone"] = "";
	$fieldLabelskin_satei[""]["Eoc_takuhai_id"] = "Eoc Takuhai Id";
	$fieldToolTipskin_satei[""]["Eoc_takuhai_id"] = "";
	$placeHolderskin_satei[""]["Eoc_takuhai_id"] = "";
	$fieldLabelskin_satei[""]["Eoc_unfinished_id"] = "Eoc Unfinished Id";
	$fieldToolTipskin_satei[""]["Eoc_unfinished_id"] = "";
	$placeHolderskin_satei[""]["Eoc_unfinished_id"] = "";
	$fieldLabelskin_satei[""]["line"] = "Line";
	$fieldToolTipskin_satei[""]["line"] = "";
	$placeHolderskin_satei[""]["line"] = "";
	$fieldLabelskin_satei[""]["item_name"] = "Item Name";
	$fieldToolTipskin_satei[""]["item_name"] = "";
	$placeHolderskin_satei[""]["item_name"] = "";
	$fieldLabelskin_satei[""]["serial_number"] = "Serial Number";
	$fieldToolTipskin_satei[""]["serial_number"] = "";
	$placeHolderskin_satei[""]["serial_number"] = "";
	$fieldLabelskin_satei[""]["product_num"] = "Product Num";
	$fieldToolTipskin_satei[""]["product_num"] = "";
	$placeHolderskin_satei[""]["product_num"] = "";
	$fieldLabelskin_satei[""]["meisai_number"] = "Meisai Number";
	$fieldToolTipskin_satei[""]["meisai_number"] = "";
	$placeHolderskin_satei[""]["meisai_number"] = "";
	$fieldLabelskin_satei[""]["tentou_label_output_flag"] = "Tentou Label Output Flag";
	$fieldToolTipskin_satei[""]["tentou_label_output_flag"] = "";
	$placeHolderskin_satei[""]["tentou_label_output_flag"] = "";
	$fieldLabelskin_satei[""]["accessories"] = "Accessories";
	$fieldToolTipskin_satei[""]["accessories"] = "";
	$placeHolderskin_satei[""]["accessories"] = "";
	$fieldLabelskin_satei[""]["Discrimination"] = "Discrimination";
	$fieldToolTipskin_satei[""]["Discrimination"] = "";
	$placeHolderskin_satei[""]["Discrimination"] = "";
	$fieldLabelskin_satei[""]["Eoc_trader_id_for_buy"] = "Eoc Trader Id For Buy";
	$fieldToolTipskin_satei[""]["Eoc_trader_id_for_buy"] = "";
	$placeHolderskin_satei[""]["Eoc_trader_id_for_buy"] = "";
	$fieldLabelskin_satei[""]["other_cost"] = "Other Cost";
	$fieldToolTipskin_satei[""]["other_cost"] = "";
	$placeHolderskin_satei[""]["other_cost"] = "";
	$fieldLabelskin_satei[""]["DA_INTENSITY"] = "DA INTENSITY";
	$fieldToolTipskin_satei[""]["DA_INTENSITY"] = "";
	$placeHolderskin_satei[""]["DA_INTENSITY"] = "";
	$fieldLabelskin_satei[""]["DA_OVERTONE"] = "DA OVERTONE";
	$fieldToolTipskin_satei[""]["DA_OVERTONE"] = "";
	$placeHolderskin_satei[""]["DA_OVERTONE"] = "";
	$fieldLabelskin_satei[""]["DA_COLOR"] = "DA COLOR";
	$fieldToolTipskin_satei[""]["DA_COLOR"] = "";
	$placeHolderskin_satei[""]["DA_COLOR"] = "";
	$fieldLabelskin_satei[""]["DA_CLARITY"] = "DA CLARITY";
	$fieldToolTipskin_satei[""]["DA_CLARITY"] = "";
	$placeHolderskin_satei[""]["DA_CLARITY"] = "";
	$fieldLabelskin_satei[""]["DA_CUT"] = "DA CUT";
	$fieldToolTipskin_satei[""]["DA_CUT"] = "";
	$placeHolderskin_satei[""]["DA_CUT"] = "";
	$fieldLabelskin_satei[""]["DA_POLISH"] = "DA POLISH";
	$fieldToolTipskin_satei[""]["DA_POLISH"] = "";
	$placeHolderskin_satei[""]["DA_POLISH"] = "";
	$fieldLabelskin_satei[""]["DA_SYMMETRY"] = "DA SYMMETRY";
	$fieldToolTipskin_satei[""]["DA_SYMMETRY"] = "";
	$placeHolderskin_satei[""]["DA_SYMMETRY"] = "";
	$fieldLabelskin_satei[""]["DA_FLUO"] = "DA FLUO";
	$fieldToolTipskin_satei[""]["DA_FLUO"] = "";
	$placeHolderskin_satei[""]["DA_FLUO"] = "";
	$fieldLabelskin_satei[""]["DA_COLOR_FLUO"] = "DA COLOR FLUO";
	$fieldToolTipskin_satei[""]["DA_COLOR_FLUO"] = "";
	$placeHolderskin_satei[""]["DA_COLOR_FLUO"] = "";
	$fieldLabelskin_satei[""]["DA_WIDE"] = "DA WIDE";
	$fieldToolTipskin_satei[""]["DA_WIDE"] = "";
	$placeHolderskin_satei[""]["DA_WIDE"] = "";
	$fieldLabelskin_satei[""]["DA_HIGH"] = "DA HIGH";
	$fieldToolTipskin_satei[""]["DA_HIGH"] = "";
	$placeHolderskin_satei[""]["DA_HIGH"] = "";
	$fieldLabelskin_satei[""]["DA_DEPTH"] = "DA DEPTH";
	$fieldToolTipskin_satei[""]["DA_DEPTH"] = "";
	$placeHolderskin_satei[""]["DA_DEPTH"] = "";
	$fieldLabelskin_satei[""]["DA_FRAPA"] = "DA FRAPA";
	$fieldToolTipskin_satei[""]["DA_FRAPA"] = "";
	$placeHolderskin_satei[""]["DA_FRAPA"] = "";
	$fieldLabelskin_satei[""]["DA_RATE"] = "DA RATE";
	$fieldToolTipskin_satei[""]["DA_RATE"] = "";
	$placeHolderskin_satei[""]["DA_RATE"] = "";
	$fieldLabelskin_satei[""]["multiplication_rate"] = "Multiplication Rate";
	$fieldToolTipskin_satei[""]["multiplication_rate"] = "";
	$placeHolderskin_satei[""]["multiplication_rate"] = "";
	$fieldLabelskin_satei[""]["Remarks"] = "Remarks";
	$fieldToolTipskin_satei[""]["Remarks"] = "";
	$placeHolderskin_satei[""]["Remarks"] = "";
	if (count($fieldToolTipskin_satei[""]))
		$tdatakin_satei[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelskin_satei["English"] = array();
	$fieldToolTipskin_satei["English"] = array();
	$placeHolderskin_satei["English"] = array();
	$pageTitleskin_satei["English"] = array();
	$fieldLabelskin_satei["English"]["status"] = "Status";
	$fieldToolTipskin_satei["English"]["status"] = "";
	$placeHolderskin_satei["English"]["status"] = "";
	$fieldLabelskin_satei["English"]["category_id"] = "Category Id";
	$fieldToolTipskin_satei["English"]["category_id"] = "";
	$placeHolderskin_satei["English"]["category_id"] = "";
	$fieldLabelskin_satei["English"]["sub_category_id1"] = "Sub Category Id1";
	$fieldToolTipskin_satei["English"]["sub_category_id1"] = "";
	$placeHolderskin_satei["English"]["sub_category_id1"] = "";
	$fieldLabelskin_satei["English"]["yahoo_sex"] = "Yahoo Sex";
	$fieldToolTipskin_satei["English"]["yahoo_sex"] = "";
	$placeHolderskin_satei["English"]["yahoo_sex"] = "";
	$fieldLabelskin_satei["English"]["gold_property"] = "Gold Property";
	$fieldToolTipskin_satei["English"]["gold_property"] = "";
	$placeHolderskin_satei["English"]["gold_property"] = "";
	$fieldLabelskin_satei["English"]["comment"] = "Comment";
	$fieldToolTipskin_satei["English"]["comment"] = "";
	$placeHolderskin_satei["English"]["comment"] = "";
	$fieldLabelskin_satei["English"]["Gram"] = "Gram";
	$fieldToolTipskin_satei["English"]["Gram"] = "";
	$placeHolderskin_satei["English"]["Gram"] = "";
	$fieldLabelskin_satei["English"]["unit"] = "Unit";
	$fieldToolTipskin_satei["English"]["unit"] = "";
	$placeHolderskin_satei["English"]["unit"] = "";
	$fieldLabelskin_satei["English"]["Parent_stone"] = "Parent Stone";
	$fieldToolTipskin_satei["English"]["Parent_stone"] = "";
	$placeHolderskin_satei["English"]["Parent_stone"] = "";
	$fieldLabelskin_satei["English"]["price_per_gram"] = "Price Per Gram";
	$fieldToolTipskin_satei["English"]["price_per_gram"] = "";
	$placeHolderskin_satei["English"]["price_per_gram"] = "";
	$fieldLabelskin_satei["English"]["price_per_parent_stone"] = "Price Per Parent Stone";
	$fieldToolTipskin_satei["English"]["price_per_parent_stone"] = "";
	$placeHolderskin_satei["English"]["price_per_parent_stone"] = "";
	$fieldLabelskin_satei["English"]["price"] = "Price";
	$fieldToolTipskin_satei["English"]["price"] = "";
	$placeHolderskin_satei["English"]["price"] = "";
	$fieldLabelskin_satei["English"]["sales_price"] = "Sales Price";
	$fieldToolTipskin_satei["English"]["sales_price"] = "";
	$placeHolderskin_satei["English"]["sales_price"] = "";
	$fieldLabelskin_satei["English"]["yahoo_sankou_uwadai"] = "Yahoo Sankou Uwadai";
	$fieldToolTipskin_satei["English"]["yahoo_sankou_uwadai"] = "";
	$placeHolderskin_satei["English"]["yahoo_sankou_uwadai"] = "";
	$fieldLabelskin_satei["English"]["satei_by"] = "Satei By";
	$fieldToolTipskin_satei["English"]["satei_by"] = "";
	$placeHolderskin_satei["English"]["satei_by"] = "";
	$fieldLabelskin_satei["English"]["satei_hi"] = "Satei Hi";
	$fieldToolTipskin_satei["English"]["satei_hi"] = "";
	$placeHolderskin_satei["English"]["satei_hi"] = "";
	$fieldLabelskin_satei["English"]["updated_by"] = "Updated By";
	$fieldToolTipskin_satei["English"]["updated_by"] = "";
	$placeHolderskin_satei["English"]["updated_by"] = "";
	$fieldLabelskin_satei["English"]["updated_at"] = "Updated At";
	$fieldToolTipskin_satei["English"]["updated_at"] = "";
	$placeHolderskin_satei["English"]["updated_at"] = "";
	$fieldLabelskin_satei["English"]["DA_SELFGRES"] = "DA SELFGRES";
	$fieldToolTipskin_satei["English"]["DA_SELFGRES"] = "";
	$placeHolderskin_satei["English"]["DA_SELFGRES"] = "";
	$fieldLabelskin_satei["English"]["kinsa_flag"] = "Kinsa Flag";
	$fieldToolTipskin_satei["English"]["kinsa_flag"] = "";
	$placeHolderskin_satei["English"]["kinsa_flag"] = "";
	$fieldLabelskin_satei["English"]["yahoo_junle"] = "Yahoo Junle";
	$fieldToolTipskin_satei["English"]["yahoo_junle"] = "";
	$placeHolderskin_satei["English"]["yahoo_junle"] = "";
	$fieldLabelskin_satei["English"]["REG_AUTHOR"] = "REG AUTHOR";
	$fieldToolTipskin_satei["English"]["REG_AUTHOR"] = "";
	$placeHolderskin_satei["English"]["REG_AUTHOR"] = "";
	$fieldLabelskin_satei["English"]["DT_UP_DATE"] = "DT UP DATE";
	$fieldToolTipskin_satei["English"]["DT_UP_DATE"] = "";
	$placeHolderskin_satei["English"]["DT_UP_DATE"] = "";
	$fieldLabelskin_satei["English"]["AWAZU_NIN"] = "AWAZU NIN";
	$fieldToolTipskin_satei["English"]["AWAZU_NIN"] = "";
	$placeHolderskin_satei["English"]["AWAZU_NIN"] = "";
	$fieldLabelskin_satei["English"]["AWAZU_DATE"] = "AWAZU DATE";
	$fieldToolTipskin_satei["English"]["AWAZU_DATE"] = "";
	$placeHolderskin_satei["English"]["AWAZU_DATE"] = "";
	$fieldLabelskin_satei["English"]["ecc_id"] = "Ecc Id";
	$fieldToolTipskin_satei["English"]["ecc_id"] = "";
	$placeHolderskin_satei["English"]["ecc_id"] = "";
	$fieldLabelskin_satei["English"]["_"] = "×";
	$fieldToolTipskin_satei["English"]["_"] = "";
	$placeHolderskin_satei["English"]["_"] = "";
	$fieldLabelskin_satei["English"]["_"] = "=";
	$fieldToolTipskin_satei["English"]["_"] = "";
	$placeHolderskin_satei["English"]["_"] = "";
	$fieldLabelskin_satei["English"]["_"] = "円";
	$fieldToolTipskin_satei["English"]["_"] = "";
	$placeHolderskin_satei["English"]["_"] = "";
	$fieldLabelskin_satei["English"]["nyuukin_price"] = "Nyuukin Price";
	$fieldToolTipskin_satei["English"]["nyuukin_price"] = "";
	$placeHolderskin_satei["English"]["nyuukin_price"] = "";
	$fieldLabelskin_satei["English"]["kanryou_henbi"] = "Kanryou Henbi";
	$fieldToolTipskin_satei["English"]["kanryou_henbi"] = "";
	$placeHolderskin_satei["English"]["kanryou_henbi"] = "";
	$fieldLabelskin_satei["English"]["Aside_stone"] = "Aside Stone";
	$fieldToolTipskin_satei["English"]["Aside_stone"] = "";
	$placeHolderskin_satei["English"]["Aside_stone"] = "";
	$fieldLabelskin_satei["English"]["price_per_aside_stone"] = "Price Per Aside Stone";
	$fieldToolTipskin_satei["English"]["price_per_aside_stone"] = "";
	$placeHolderskin_satei["English"]["price_per_aside_stone"] = "";
	$fieldLabelskin_satei["English"]["Eoc_takuhai_id"] = "Eoc Takuhai Id";
	$fieldToolTipskin_satei["English"]["Eoc_takuhai_id"] = "";
	$placeHolderskin_satei["English"]["Eoc_takuhai_id"] = "";
	$fieldLabelskin_satei["English"]["Eoc_unfinished_id"] = "Eoc Unfinished Id";
	$fieldToolTipskin_satei["English"]["Eoc_unfinished_id"] = "";
	$placeHolderskin_satei["English"]["Eoc_unfinished_id"] = "";
	$fieldLabelskin_satei["English"]["line"] = "Line";
	$fieldToolTipskin_satei["English"]["line"] = "";
	$placeHolderskin_satei["English"]["line"] = "";
	$fieldLabelskin_satei["English"]["item_name"] = "Item Name";
	$fieldToolTipskin_satei["English"]["item_name"] = "";
	$placeHolderskin_satei["English"]["item_name"] = "";
	$fieldLabelskin_satei["English"]["serial_number"] = "Serial Number";
	$fieldToolTipskin_satei["English"]["serial_number"] = "";
	$placeHolderskin_satei["English"]["serial_number"] = "";
	$fieldLabelskin_satei["English"]["product_num"] = "Product Num";
	$fieldToolTipskin_satei["English"]["product_num"] = "";
	$placeHolderskin_satei["English"]["product_num"] = "";
	$fieldLabelskin_satei["English"]["meisai_number"] = "Meisai Number";
	$fieldToolTipskin_satei["English"]["meisai_number"] = "";
	$placeHolderskin_satei["English"]["meisai_number"] = "";
	$fieldLabelskin_satei["English"]["tentou_label_output_flag"] = "Tentou Label Output Flag";
	$fieldToolTipskin_satei["English"]["tentou_label_output_flag"] = "";
	$placeHolderskin_satei["English"]["tentou_label_output_flag"] = "";
	$fieldLabelskin_satei["English"]["accessories"] = "Accessories";
	$fieldToolTipskin_satei["English"]["accessories"] = "";
	$placeHolderskin_satei["English"]["accessories"] = "";
	$fieldLabelskin_satei["English"]["Discrimination"] = "Discrimination";
	$fieldToolTipskin_satei["English"]["Discrimination"] = "";
	$placeHolderskin_satei["English"]["Discrimination"] = "";
	$fieldLabelskin_satei["English"]["Eoc_trader_id_for_buy"] = "Eoc Trader Id For Buy";
	$fieldToolTipskin_satei["English"]["Eoc_trader_id_for_buy"] = "";
	$placeHolderskin_satei["English"]["Eoc_trader_id_for_buy"] = "";
	$fieldLabelskin_satei["English"]["other_cost"] = "Other Cost";
	$fieldToolTipskin_satei["English"]["other_cost"] = "";
	$placeHolderskin_satei["English"]["other_cost"] = "";
	$fieldLabelskin_satei["English"]["DA_INTENSITY"] = "DA INTENSITY";
	$fieldToolTipskin_satei["English"]["DA_INTENSITY"] = "";
	$placeHolderskin_satei["English"]["DA_INTENSITY"] = "";
	$fieldLabelskin_satei["English"]["DA_OVERTONE"] = "DA OVERTONE";
	$fieldToolTipskin_satei["English"]["DA_OVERTONE"] = "";
	$placeHolderskin_satei["English"]["DA_OVERTONE"] = "";
	$fieldLabelskin_satei["English"]["DA_COLOR"] = "DA COLOR";
	$fieldToolTipskin_satei["English"]["DA_COLOR"] = "";
	$placeHolderskin_satei["English"]["DA_COLOR"] = "";
	$fieldLabelskin_satei["English"]["DA_CLARITY"] = "DA CLARITY";
	$fieldToolTipskin_satei["English"]["DA_CLARITY"] = "";
	$placeHolderskin_satei["English"]["DA_CLARITY"] = "";
	$fieldLabelskin_satei["English"]["DA_CUT"] = "DA CUT";
	$fieldToolTipskin_satei["English"]["DA_CUT"] = "";
	$placeHolderskin_satei["English"]["DA_CUT"] = "";
	$fieldLabelskin_satei["English"]["DA_POLISH"] = "DA POLISH";
	$fieldToolTipskin_satei["English"]["DA_POLISH"] = "";
	$placeHolderskin_satei["English"]["DA_POLISH"] = "";
	$fieldLabelskin_satei["English"]["DA_SYMMETRY"] = "DA SYMMETRY";
	$fieldToolTipskin_satei["English"]["DA_SYMMETRY"] = "";
	$placeHolderskin_satei["English"]["DA_SYMMETRY"] = "";
	$fieldLabelskin_satei["English"]["DA_FLUO"] = "DA FLUO";
	$fieldToolTipskin_satei["English"]["DA_FLUO"] = "";
	$placeHolderskin_satei["English"]["DA_FLUO"] = "";
	$fieldLabelskin_satei["English"]["DA_COLOR_FLUO"] = "DA COLOR FLUO";
	$fieldToolTipskin_satei["English"]["DA_COLOR_FLUO"] = "";
	$placeHolderskin_satei["English"]["DA_COLOR_FLUO"] = "";
	$fieldLabelskin_satei["English"]["DA_WIDE"] = "DA WIDE";
	$fieldToolTipskin_satei["English"]["DA_WIDE"] = "";
	$placeHolderskin_satei["English"]["DA_WIDE"] = "";
	$fieldLabelskin_satei["English"]["DA_HIGH"] = "DA HIGH";
	$fieldToolTipskin_satei["English"]["DA_HIGH"] = "";
	$placeHolderskin_satei["English"]["DA_HIGH"] = "";
	$fieldLabelskin_satei["English"]["DA_DEPTH"] = "DA DEPTH";
	$fieldToolTipskin_satei["English"]["DA_DEPTH"] = "";
	$placeHolderskin_satei["English"]["DA_DEPTH"] = "";
	$fieldLabelskin_satei["English"]["DA_FRAPA"] = "DA FRAPA";
	$fieldToolTipskin_satei["English"]["DA_FRAPA"] = "";
	$placeHolderskin_satei["English"]["DA_FRAPA"] = "";
	$fieldLabelskin_satei["English"]["DA_RATE"] = "DA RATE";
	$fieldToolTipskin_satei["English"]["DA_RATE"] = "";
	$placeHolderskin_satei["English"]["DA_RATE"] = "";
	$fieldLabelskin_satei["English"]["multiplication_rate"] = "Multiplication Rate";
	$fieldToolTipskin_satei["English"]["multiplication_rate"] = "";
	$placeHolderskin_satei["English"]["multiplication_rate"] = "";
	$fieldLabelskin_satei["English"]["Remarks"] = "Remarks";
	$fieldToolTipskin_satei["English"]["Remarks"] = "";
	$placeHolderskin_satei["English"]["Remarks"] = "";
	if (count($fieldToolTipskin_satei["English"]))
		$tdatakin_satei[".isUseToolTips"] = true;
}


	$tdatakin_satei[".NCSearch"] = true;



$tdatakin_satei[".shortTableName"] = "kin_satei";
$tdatakin_satei[".nSecOptions"] = 0;
$tdatakin_satei[".recsPerRowPrint"] = 1;
$tdatakin_satei[".mainTableOwnerID"] = "";
$tdatakin_satei[".moveNext"] = 1;
$tdatakin_satei[".entityType"] = 1;

$tdatakin_satei[".strOriginalTableName"] = "shouhin";

	



$tdatakin_satei[".showAddInPopup"] = false;

$tdatakin_satei[".showEditInPopup"] = false;

$tdatakin_satei[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatakin_satei[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatakin_satei[".fieldsForRegister"] = array();

$tdatakin_satei[".listAjax"] = false;

	$tdatakin_satei[".audit"] = true;

	$tdatakin_satei[".locking"] = false;



$tdatakin_satei[".list"] = true;

$tdatakin_satei[".inlineEdit"] = true;


$tdatakin_satei[".reorderRecordsByHeader"] = true;
$tdatakin_satei[".createSortByDropdown"] = true;
$tdatakin_satei[".strSortControlSettingsJSON"] = "";



$tdatakin_satei[".inlineAdd"] = true;

$tdatakin_satei[".import"] = true;

$tdatakin_satei[".exportTo"] = true;


$tdatakin_satei[".delete"] = true;

$tdatakin_satei[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatakin_satei[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatakin_satei[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatakin_satei[".searchSaving"] = false;
//

$tdatakin_satei[".showSearchPanel"] = true;
		$tdatakin_satei[".flexibleSearch"] = true;

$tdatakin_satei[".isUseAjaxSuggest"] = true;

$tdatakin_satei[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																				
					
												
					
																										
					
																																																																																																																																																																																																																
																																																																																																																																																																																																		
																																																																											
																																	
																																																																																																																																																																																																																																																																																																																																																																																																																																																																																							

$tdatakin_satei[".ajaxCodeSnippetAdded"] = false;

$tdatakin_satei[".buttonsAdded"] = true;

$tdatakin_satei[".addPageEvents"] = true;

// use timepicker for search panel
$tdatakin_satei[".isUseTimeForSearch"] = false;



$tdatakin_satei[".badgeColor"] = "778899";


$tdatakin_satei[".allSearchFields"] = array();
$tdatakin_satei[".filterFields"] = array();
$tdatakin_satei[".requiredSearchFields"] = array();

$tdatakin_satei[".allSearchFields"][] = "DA_HIGH";
	$tdatakin_satei[".allSearchFields"][] = "DA_FLUO";
	$tdatakin_satei[".allSearchFields"][] = "DA_SYMMETRY";
	$tdatakin_satei[".allSearchFields"][] = "DA_POLISH";
	$tdatakin_satei[".allSearchFields"][] = "DA_CUT";
	$tdatakin_satei[".allSearchFields"][] = "DA_CLARITY";
	$tdatakin_satei[".allSearchFields"][] = "DA_COLOR";
	$tdatakin_satei[".allSearchFields"][] = "DA_OVERTONE";
	$tdatakin_satei[".allSearchFields"][] = "DA_INTENSITY";
	$tdatakin_satei[".allSearchFields"][] = "other_cost";
	$tdatakin_satei[".allSearchFields"][] = "tentou_label_output_flag";
	$tdatakin_satei[".allSearchFields"][] = "DA_SELFGRES";
	$tdatakin_satei[".allSearchFields"][] = "DA_COLOR_FLUO";
	$tdatakin_satei[".allSearchFields"][] = "DA_WIDE";
	$tdatakin_satei[".allSearchFields"][] = "DA_DEPTH";
	$tdatakin_satei[".allSearchFields"][] = "DA_FRAPA";
	$tdatakin_satei[".allSearchFields"][] = "DA_RATE";
	$tdatakin_satei[".allSearchFields"][] = "multiplication_rate";
	$tdatakin_satei[".allSearchFields"][] = "meisai_number";
	$tdatakin_satei[".allSearchFields"][] = "ecc_id";
	$tdatakin_satei[".allSearchFields"][] = "status";
	$tdatakin_satei[".allSearchFields"][] = "product_id";
	$tdatakin_satei[".allSearchFields"][] = "category_id";
	$tdatakin_satei[".allSearchFields"][] = "sub_category_id1";
	$tdatakin_satei[".allSearchFields"][] = "yahoo_sex";
	$tdatakin_satei[".allSearchFields"][] = "product_num";
	$tdatakin_satei[".allSearchFields"][] = "item_name";
	$tdatakin_satei[".allSearchFields"][] = "serial_number";
	$tdatakin_satei[".allSearchFields"][] = "gold_property";
	$tdatakin_satei[".allSearchFields"][] = "comment";
	$tdatakin_satei[".allSearchFields"][] = "Remarks";
	$tdatakin_satei[".allSearchFields"][] = "Gram";
	$tdatakin_satei[".allSearchFields"][] = "unit";
	$tdatakin_satei[".allSearchFields"][] = "Parent_stone";
	$tdatakin_satei[".allSearchFields"][] = "Aside_stone";
	$tdatakin_satei[".allSearchFields"][] = "price_per_gram";
	$tdatakin_satei[".allSearchFields"][] = "price_per_parent_stone";
	$tdatakin_satei[".allSearchFields"][] = "price_per_aside_stone";
	$tdatakin_satei[".allSearchFields"][] = "price";
	$tdatakin_satei[".allSearchFields"][] = "sales_price";
	$tdatakin_satei[".allSearchFields"][] = "yahoo_sankou_uwadai";
	$tdatakin_satei[".allSearchFields"][] = "satei_by";
	$tdatakin_satei[".allSearchFields"][] = "satei_hi";
	$tdatakin_satei[".allSearchFields"][] = "updated_by";
	$tdatakin_satei[".allSearchFields"][] = "updated_at";
	

$tdatakin_satei[".googleLikeFields"] = array();
$tdatakin_satei[".googleLikeFields"][] = "status";
$tdatakin_satei[".googleLikeFields"][] = "product_id";
$tdatakin_satei[".googleLikeFields"][] = "category_id";
$tdatakin_satei[".googleLikeFields"][] = "sub_category_id1";
$tdatakin_satei[".googleLikeFields"][] = "yahoo_sex";
$tdatakin_satei[".googleLikeFields"][] = "gold_property";
$tdatakin_satei[".googleLikeFields"][] = "comment";
$tdatakin_satei[".googleLikeFields"][] = "Gram";
$tdatakin_satei[".googleLikeFields"][] = "unit";
$tdatakin_satei[".googleLikeFields"][] = "Parent_stone";
$tdatakin_satei[".googleLikeFields"][] = "price_per_gram";
$tdatakin_satei[".googleLikeFields"][] = "price_per_parent_stone";
$tdatakin_satei[".googleLikeFields"][] = "price";
$tdatakin_satei[".googleLikeFields"][] = "sales_price";
$tdatakin_satei[".googleLikeFields"][] = "yahoo_sankou_uwadai";
$tdatakin_satei[".googleLikeFields"][] = "satei_by";
$tdatakin_satei[".googleLikeFields"][] = "satei_hi";
$tdatakin_satei[".googleLikeFields"][] = "updated_by";
$tdatakin_satei[".googleLikeFields"][] = "updated_at";
$tdatakin_satei[".googleLikeFields"][] = "DA_SELFGRES";
$tdatakin_satei[".googleLikeFields"][] = "ecc_id";
$tdatakin_satei[".googleLikeFields"][] = "Aside_stone";
$tdatakin_satei[".googleLikeFields"][] = "price_per_aside_stone";
$tdatakin_satei[".googleLikeFields"][] = "item_name";
$tdatakin_satei[".googleLikeFields"][] = "serial_number";
$tdatakin_satei[".googleLikeFields"][] = "product_num";
$tdatakin_satei[".googleLikeFields"][] = "meisai_number";
$tdatakin_satei[".googleLikeFields"][] = "tentou_label_output_flag";
$tdatakin_satei[".googleLikeFields"][] = "other_cost";
$tdatakin_satei[".googleLikeFields"][] = "DA_INTENSITY";
$tdatakin_satei[".googleLikeFields"][] = "DA_OVERTONE";
$tdatakin_satei[".googleLikeFields"][] = "DA_COLOR";
$tdatakin_satei[".googleLikeFields"][] = "DA_CLARITY";
$tdatakin_satei[".googleLikeFields"][] = "DA_CUT";
$tdatakin_satei[".googleLikeFields"][] = "DA_POLISH";
$tdatakin_satei[".googleLikeFields"][] = "DA_SYMMETRY";
$tdatakin_satei[".googleLikeFields"][] = "DA_FLUO";
$tdatakin_satei[".googleLikeFields"][] = "DA_COLOR_FLUO";
$tdatakin_satei[".googleLikeFields"][] = "DA_WIDE";
$tdatakin_satei[".googleLikeFields"][] = "DA_HIGH";
$tdatakin_satei[".googleLikeFields"][] = "DA_DEPTH";
$tdatakin_satei[".googleLikeFields"][] = "DA_FRAPA";
$tdatakin_satei[".googleLikeFields"][] = "DA_RATE";
$tdatakin_satei[".googleLikeFields"][] = "multiplication_rate";
$tdatakin_satei[".googleLikeFields"][] = "Remarks";

$tdatakin_satei[".panelSearchFields"] = array();
$tdatakin_satei[".searchPanelOptions"] = array();
$tdatakin_satei[".panelSearchFields"][] = "product_id";
	$tdatakin_satei[".panelSearchFields"][] = "Remarks";
	
$tdatakin_satei[".advSearchFields"] = array();
$tdatakin_satei[".advSearchFields"][] = "DA_HIGH";
$tdatakin_satei[".advSearchFields"][] = "DA_FLUO";
$tdatakin_satei[".advSearchFields"][] = "DA_SYMMETRY";
$tdatakin_satei[".advSearchFields"][] = "DA_POLISH";
$tdatakin_satei[".advSearchFields"][] = "DA_CUT";
$tdatakin_satei[".advSearchFields"][] = "DA_CLARITY";
$tdatakin_satei[".advSearchFields"][] = "DA_COLOR";
$tdatakin_satei[".advSearchFields"][] = "DA_OVERTONE";
$tdatakin_satei[".advSearchFields"][] = "DA_INTENSITY";
$tdatakin_satei[".advSearchFields"][] = "other_cost";
$tdatakin_satei[".advSearchFields"][] = "tentou_label_output_flag";
$tdatakin_satei[".advSearchFields"][] = "DA_SELFGRES";
$tdatakin_satei[".advSearchFields"][] = "DA_COLOR_FLUO";
$tdatakin_satei[".advSearchFields"][] = "DA_WIDE";
$tdatakin_satei[".advSearchFields"][] = "DA_DEPTH";
$tdatakin_satei[".advSearchFields"][] = "DA_FRAPA";
$tdatakin_satei[".advSearchFields"][] = "DA_RATE";
$tdatakin_satei[".advSearchFields"][] = "multiplication_rate";
$tdatakin_satei[".advSearchFields"][] = "meisai_number";
$tdatakin_satei[".advSearchFields"][] = "ecc_id";
$tdatakin_satei[".advSearchFields"][] = "status";
$tdatakin_satei[".advSearchFields"][] = "product_id";
$tdatakin_satei[".advSearchFields"][] = "category_id";
$tdatakin_satei[".advSearchFields"][] = "sub_category_id1";
$tdatakin_satei[".advSearchFields"][] = "yahoo_sex";
$tdatakin_satei[".advSearchFields"][] = "product_num";
$tdatakin_satei[".advSearchFields"][] = "item_name";
$tdatakin_satei[".advSearchFields"][] = "serial_number";
$tdatakin_satei[".advSearchFields"][] = "gold_property";
$tdatakin_satei[".advSearchFields"][] = "comment";
$tdatakin_satei[".advSearchFields"][] = "Remarks";
$tdatakin_satei[".advSearchFields"][] = "Gram";
$tdatakin_satei[".advSearchFields"][] = "unit";
$tdatakin_satei[".advSearchFields"][] = "Parent_stone";
$tdatakin_satei[".advSearchFields"][] = "Aside_stone";
$tdatakin_satei[".advSearchFields"][] = "price_per_gram";
$tdatakin_satei[".advSearchFields"][] = "price_per_parent_stone";
$tdatakin_satei[".advSearchFields"][] = "price_per_aside_stone";
$tdatakin_satei[".advSearchFields"][] = "price";
$tdatakin_satei[".advSearchFields"][] = "sales_price";
$tdatakin_satei[".advSearchFields"][] = "yahoo_sankou_uwadai";
$tdatakin_satei[".advSearchFields"][] = "satei_by";
$tdatakin_satei[".advSearchFields"][] = "satei_hi";
$tdatakin_satei[".advSearchFields"][] = "updated_by";
$tdatakin_satei[".advSearchFields"][] = "updated_at";

$tdatakin_satei[".tableType"] = "list";

$tdatakin_satei[".printerPageOrientation"] = 0;
$tdatakin_satei[".nPrinterPageScale"] = 100;

$tdatakin_satei[".nPrinterSplitRecords"] = 40;

$tdatakin_satei[".nPrinterPDFSplitRecords"] = 40;



$tdatakin_satei[".geocodingEnabled"] = false;





$tdatakin_satei[".listGridLayout"] = 3;





// view page pdf

// print page pdf

$tdatakin_satei[".totalsFields"] = array();
$tdatakin_satei[".totalsFields"][] = array(
	"fName" => "price",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');

$tdatakin_satei[".pageSize"] = 20;

$tdatakin_satei[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `product_id` DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatakin_satei[".strOrderBy"] = $tstrOrderBy;

$tdatakin_satei[".orderindexes"] = array();
$tdatakin_satei[".orderindexes"][] = array(2, (0 ? "ASC" : "DESC"), "`product_id`");

$tdatakin_satei[".sqlHead"] = "SELECT `status`,  `product_id`,  `category_id`,  `sub_category_id1`,  `yahoo_sex`,  `gold_property`,  `comment`,  `Gram`,  `unit`,  `Parent_stone`,  `price_per_gram`,  `price_per_parent_stone`,  `price`,  `sales_price`,  `yahoo_sankou_uwadai`,  `satei_by`,  `satei_hi`,  `updated_by`,  `updated_at`,  `DA_SELFGRES`,  `kinsa_flag`,  `yahoo_junle`,  `REG_AUTHOR`,  `DT_UP_DATE`,  `AWAZU_NIN`,  `AWAZU_DATE`,  `ecc_id`,  CONCAT('×') AS `×`,  CONCAT('=') AS `=`,  CONCAT('円') AS `円`,  `nyuukin_price`,  `kanryou_henbi`,  `Aside_stone`,  `price_per_aside_stone`,  `Eoc_takuhai_id`,  `Eoc_unfinished_id`,  `line`,  `item_name`,  `serial_number`,  `product_num`,  `meisai_number`,  `tentou_label_output_flag`,  `accessories`,  `Discrimination`,  `Eoc_trader_id_for_buy`,  `other_cost`,  `DA_INTENSITY`,  `DA_OVERTONE`,  `DA_COLOR`,  `DA_CLARITY`,  `DA_CUT`,  `DA_POLISH`,  `DA_SYMMETRY`,  `DA_FLUO`,  `DA_COLOR_FLUO`,  `DA_WIDE`,  `DA_HIGH`,  `DA_DEPTH`,  `DA_FRAPA`,  `DA_RATE`,  `multiplication_rate`,  `Remarks`";
$tdatakin_satei[".sqlFrom"] = "FROM `shouhin`";
$tdatakin_satei[".sqlWhereExpr"] = "(`status` = 126)";
$tdatakin_satei[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatakin_satei[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatakin_satei[".arrGroupsPerPage"] = $arrGPP;

$tdatakin_satei[".highlightSearchResults"] = true;

$tableKeyskin_satei = array();
$tableKeyskin_satei[] = "product_id";
$tdatakin_satei[".Keys"] = $tableKeyskin_satei;

$tdatakin_satei[".listFields"] = array();
$tdatakin_satei[".listFields"][] = "tentou_label_output_flag";
$tdatakin_satei[".listFields"][] = "ecc_id";
$tdatakin_satei[".listFields"][] = "meisai_number";
$tdatakin_satei[".listFields"][] = "status";
$tdatakin_satei[".listFields"][] = "product_id";
$tdatakin_satei[".listFields"][] = "product_num";
$tdatakin_satei[".listFields"][] = "category_id";
$tdatakin_satei[".listFields"][] = "sub_category_id1";
$tdatakin_satei[".listFields"][] = "gold_property";
$tdatakin_satei[".listFields"][] = "DA_SELFGRES";
$tdatakin_satei[".listFields"][] = "DA_INTENSITY";
$tdatakin_satei[".listFields"][] = "DA_OVERTONE";
$tdatakin_satei[".listFields"][] = "DA_COLOR";
$tdatakin_satei[".listFields"][] = "DA_CLARITY";
$tdatakin_satei[".listFields"][] = "DA_CUT";
$tdatakin_satei[".listFields"][] = "DA_POLISH";
$tdatakin_satei[".listFields"][] = "DA_SYMMETRY";
$tdatakin_satei[".listFields"][] = "DA_FLUO";
$tdatakin_satei[".listFields"][] = "DA_COLOR_FLUO";
$tdatakin_satei[".listFields"][] = "DA_HIGH";
$tdatakin_satei[".listFields"][] = "DA_DEPTH";
$tdatakin_satei[".listFields"][] = "DA_WIDE";
$tdatakin_satei[".listFields"][] = "serial_number";
$tdatakin_satei[".listFields"][] = "item_name";
$tdatakin_satei[".listFields"][] = "comment";
$tdatakin_satei[".listFields"][] = "Remarks";
$tdatakin_satei[".listFields"][] = "Gram";
$tdatakin_satei[".listFields"][] = "unit";
$tdatakin_satei[".listFields"][] = "Parent_stone";
$tdatakin_satei[".listFields"][] = "Aside_stone";
$tdatakin_satei[".listFields"][] = "DA_FRAPA";
$tdatakin_satei[".listFields"][] = "DA_RATE";
$tdatakin_satei[".listFields"][] = "multiplication_rate";
$tdatakin_satei[".listFields"][] = "price_per_gram";
$tdatakin_satei[".listFields"][] = "price_per_parent_stone";
$tdatakin_satei[".listFields"][] = "price_per_aside_stone";
$tdatakin_satei[".listFields"][] = "yahoo_sex";
$tdatakin_satei[".listFields"][] = "price";
$tdatakin_satei[".listFields"][] = "other_cost";
$tdatakin_satei[".listFields"][] = "sales_price";
$tdatakin_satei[".listFields"][] = "yahoo_sankou_uwadai";
$tdatakin_satei[".listFields"][] = "satei_by";
$tdatakin_satei[".listFields"][] = "satei_hi";
$tdatakin_satei[".listFields"][] = "updated_by";
$tdatakin_satei[".listFields"][] = "updated_at";

$tdatakin_satei[".hideMobileList"] = array();


$tdatakin_satei[".viewFields"] = array();

$tdatakin_satei[".addFields"] = array();

$tdatakin_satei[".masterListFields"] = array();
$tdatakin_satei[".masterListFields"][] = "status";
$tdatakin_satei[".masterListFields"][] = "category_id";
$tdatakin_satei[".masterListFields"][] = "sub_category_id1";
$tdatakin_satei[".masterListFields"][] = "yahoo_sex";
$tdatakin_satei[".masterListFields"][] = "gold_property";
$tdatakin_satei[".masterListFields"][] = "comment";
$tdatakin_satei[".masterListFields"][] = "Gram";
$tdatakin_satei[".masterListFields"][] = "unit";
$tdatakin_satei[".masterListFields"][] = "Parent_stone";
$tdatakin_satei[".masterListFields"][] = "price_per_gram";
$tdatakin_satei[".masterListFields"][] = "price_per_parent_stone";
$tdatakin_satei[".masterListFields"][] = "price";
$tdatakin_satei[".masterListFields"][] = "sales_price";
$tdatakin_satei[".masterListFields"][] = "yahoo_sankou_uwadai";
$tdatakin_satei[".masterListFields"][] = "satei_by";
$tdatakin_satei[".masterListFields"][] = "satei_hi";
$tdatakin_satei[".masterListFields"][] = "updated_by";
$tdatakin_satei[".masterListFields"][] = "updated_at";
$tdatakin_satei[".masterListFields"][] = "DA_SELFGRES";
$tdatakin_satei[".masterListFields"][] = "kinsa_flag";
$tdatakin_satei[".masterListFields"][] = "yahoo_junle";
$tdatakin_satei[".masterListFields"][] = "REG_AUTHOR";
$tdatakin_satei[".masterListFields"][] = "DT_UP_DATE";
$tdatakin_satei[".masterListFields"][] = "AWAZU_NIN";
$tdatakin_satei[".masterListFields"][] = "AWAZU_DATE";
$tdatakin_satei[".masterListFields"][] = "ecc_id";
$tdatakin_satei[".masterListFields"][] = "×";
$tdatakin_satei[".masterListFields"][] = "=";
$tdatakin_satei[".masterListFields"][] = "円";
$tdatakin_satei[".masterListFields"][] = "nyuukin_price";
$tdatakin_satei[".masterListFields"][] = "kanryou_henbi";
$tdatakin_satei[".masterListFields"][] = "Aside_stone";
$tdatakin_satei[".masterListFields"][] = "price_per_aside_stone";
$tdatakin_satei[".masterListFields"][] = "Eoc_takuhai_id";
$tdatakin_satei[".masterListFields"][] = "Eoc_unfinished_id";
$tdatakin_satei[".masterListFields"][] = "line";
$tdatakin_satei[".masterListFields"][] = "item_name";
$tdatakin_satei[".masterListFields"][] = "serial_number";
$tdatakin_satei[".masterListFields"][] = "product_num";
$tdatakin_satei[".masterListFields"][] = "meisai_number";
$tdatakin_satei[".masterListFields"][] = "tentou_label_output_flag";
$tdatakin_satei[".masterListFields"][] = "accessories";
$tdatakin_satei[".masterListFields"][] = "Discrimination";
$tdatakin_satei[".masterListFields"][] = "Eoc_trader_id_for_buy";
$tdatakin_satei[".masterListFields"][] = "other_cost";
$tdatakin_satei[".masterListFields"][] = "DA_INTENSITY";
$tdatakin_satei[".masterListFields"][] = "DA_OVERTONE";
$tdatakin_satei[".masterListFields"][] = "DA_COLOR";
$tdatakin_satei[".masterListFields"][] = "DA_CLARITY";
$tdatakin_satei[".masterListFields"][] = "DA_CUT";
$tdatakin_satei[".masterListFields"][] = "DA_POLISH";
$tdatakin_satei[".masterListFields"][] = "DA_SYMMETRY";
$tdatakin_satei[".masterListFields"][] = "DA_FLUO";
$tdatakin_satei[".masterListFields"][] = "DA_COLOR_FLUO";
$tdatakin_satei[".masterListFields"][] = "DA_WIDE";
$tdatakin_satei[".masterListFields"][] = "DA_HIGH";
$tdatakin_satei[".masterListFields"][] = "DA_DEPTH";
$tdatakin_satei[".masterListFields"][] = "DA_FRAPA";
$tdatakin_satei[".masterListFields"][] = "DA_RATE";
$tdatakin_satei[".masterListFields"][] = "multiplication_rate";
$tdatakin_satei[".masterListFields"][] = "Remarks";
$tdatakin_satei[".masterListFields"][] = "product_id";

$tdatakin_satei[".inlineAddFields"] = array();
$tdatakin_satei[".inlineAddFields"][] = "tentou_label_output_flag";
$tdatakin_satei[".inlineAddFields"][] = "meisai_number";
$tdatakin_satei[".inlineAddFields"][] = "status";
$tdatakin_satei[".inlineAddFields"][] = "product_num";
$tdatakin_satei[".inlineAddFields"][] = "category_id";
$tdatakin_satei[".inlineAddFields"][] = "sub_category_id1";
$tdatakin_satei[".inlineAddFields"][] = "gold_property";
$tdatakin_satei[".inlineAddFields"][] = "DA_SELFGRES";
$tdatakin_satei[".inlineAddFields"][] = "DA_INTENSITY";
$tdatakin_satei[".inlineAddFields"][] = "DA_OVERTONE";
$tdatakin_satei[".inlineAddFields"][] = "DA_COLOR";
$tdatakin_satei[".inlineAddFields"][] = "DA_CLARITY";
$tdatakin_satei[".inlineAddFields"][] = "DA_CUT";
$tdatakin_satei[".inlineAddFields"][] = "DA_POLISH";
$tdatakin_satei[".inlineAddFields"][] = "DA_SYMMETRY";
$tdatakin_satei[".inlineAddFields"][] = "DA_FLUO";
$tdatakin_satei[".inlineAddFields"][] = "DA_COLOR_FLUO";
$tdatakin_satei[".inlineAddFields"][] = "DA_HIGH";
$tdatakin_satei[".inlineAddFields"][] = "DA_DEPTH";
$tdatakin_satei[".inlineAddFields"][] = "DA_WIDE";
$tdatakin_satei[".inlineAddFields"][] = "serial_number";
$tdatakin_satei[".inlineAddFields"][] = "item_name";
$tdatakin_satei[".inlineAddFields"][] = "comment";
$tdatakin_satei[".inlineAddFields"][] = "Remarks";
$tdatakin_satei[".inlineAddFields"][] = "Gram";
$tdatakin_satei[".inlineAddFields"][] = "unit";
$tdatakin_satei[".inlineAddFields"][] = "Parent_stone";
$tdatakin_satei[".inlineAddFields"][] = "Aside_stone";
$tdatakin_satei[".inlineAddFields"][] = "DA_FRAPA";
$tdatakin_satei[".inlineAddFields"][] = "DA_RATE";
$tdatakin_satei[".inlineAddFields"][] = "multiplication_rate";
$tdatakin_satei[".inlineAddFields"][] = "price_per_gram";
$tdatakin_satei[".inlineAddFields"][] = "price_per_parent_stone";
$tdatakin_satei[".inlineAddFields"][] = "price_per_aside_stone";
$tdatakin_satei[".inlineAddFields"][] = "yahoo_sex";
$tdatakin_satei[".inlineAddFields"][] = "price";
$tdatakin_satei[".inlineAddFields"][] = "other_cost";
$tdatakin_satei[".inlineAddFields"][] = "sales_price";
$tdatakin_satei[".inlineAddFields"][] = "yahoo_sankou_uwadai";
$tdatakin_satei[".inlineAddFields"][] = "satei_by";

$tdatakin_satei[".editFields"] = array();

$tdatakin_satei[".inlineEditFields"] = array();
$tdatakin_satei[".inlineEditFields"][] = "tentou_label_output_flag";
$tdatakin_satei[".inlineEditFields"][] = "meisai_number";
$tdatakin_satei[".inlineEditFields"][] = "status";
$tdatakin_satei[".inlineEditFields"][] = "product_num";
$tdatakin_satei[".inlineEditFields"][] = "category_id";
$tdatakin_satei[".inlineEditFields"][] = "sub_category_id1";
$tdatakin_satei[".inlineEditFields"][] = "gold_property";
$tdatakin_satei[".inlineEditFields"][] = "DA_SELFGRES";
$tdatakin_satei[".inlineEditFields"][] = "DA_INTENSITY";
$tdatakin_satei[".inlineEditFields"][] = "DA_OVERTONE";
$tdatakin_satei[".inlineEditFields"][] = "DA_COLOR";
$tdatakin_satei[".inlineEditFields"][] = "DA_CLARITY";
$tdatakin_satei[".inlineEditFields"][] = "DA_CUT";
$tdatakin_satei[".inlineEditFields"][] = "DA_POLISH";
$tdatakin_satei[".inlineEditFields"][] = "DA_SYMMETRY";
$tdatakin_satei[".inlineEditFields"][] = "DA_FLUO";
$tdatakin_satei[".inlineEditFields"][] = "DA_COLOR_FLUO";
$tdatakin_satei[".inlineEditFields"][] = "DA_HIGH";
$tdatakin_satei[".inlineEditFields"][] = "DA_DEPTH";
$tdatakin_satei[".inlineEditFields"][] = "DA_WIDE";
$tdatakin_satei[".inlineEditFields"][] = "serial_number";
$tdatakin_satei[".inlineEditFields"][] = "item_name";
$tdatakin_satei[".inlineEditFields"][] = "comment";
$tdatakin_satei[".inlineEditFields"][] = "Remarks";
$tdatakin_satei[".inlineEditFields"][] = "Gram";
$tdatakin_satei[".inlineEditFields"][] = "unit";
$tdatakin_satei[".inlineEditFields"][] = "Parent_stone";
$tdatakin_satei[".inlineEditFields"][] = "Aside_stone";
$tdatakin_satei[".inlineEditFields"][] = "DA_FRAPA";
$tdatakin_satei[".inlineEditFields"][] = "DA_RATE";
$tdatakin_satei[".inlineEditFields"][] = "multiplication_rate";
$tdatakin_satei[".inlineEditFields"][] = "price_per_gram";
$tdatakin_satei[".inlineEditFields"][] = "price_per_parent_stone";
$tdatakin_satei[".inlineEditFields"][] = "price_per_aside_stone";
$tdatakin_satei[".inlineEditFields"][] = "yahoo_sex";
$tdatakin_satei[".inlineEditFields"][] = "price";
$tdatakin_satei[".inlineEditFields"][] = "other_cost";
$tdatakin_satei[".inlineEditFields"][] = "sales_price";
$tdatakin_satei[".inlineEditFields"][] = "yahoo_sankou_uwadai";
$tdatakin_satei[".inlineEditFields"][] = "satei_by";

$tdatakin_satei[".updateSelectedFields"] = array();


$tdatakin_satei[".exportFields"] = array();
$tdatakin_satei[".exportFields"][] = "DA_RATE";
$tdatakin_satei[".exportFields"][] = "DA_FRAPA";
$tdatakin_satei[".exportFields"][] = "DA_DEPTH";
$tdatakin_satei[".exportFields"][] = "DA_HIGH";
$tdatakin_satei[".exportFields"][] = "DA_WIDE";
$tdatakin_satei[".exportFields"][] = "DA_COLOR_FLUO";
$tdatakin_satei[".exportFields"][] = "DA_FLUO";
$tdatakin_satei[".exportFields"][] = "DA_SYMMETRY";
$tdatakin_satei[".exportFields"][] = "DA_POLISH";
$tdatakin_satei[".exportFields"][] = "DA_CUT";
$tdatakin_satei[".exportFields"][] = "DA_CLARITY";
$tdatakin_satei[".exportFields"][] = "DA_COLOR";
$tdatakin_satei[".exportFields"][] = "DA_OVERTONE";
$tdatakin_satei[".exportFields"][] = "DA_INTENSITY";
$tdatakin_satei[".exportFields"][] = "other_cost";
$tdatakin_satei[".exportFields"][] = "multiplication_rate";
$tdatakin_satei[".exportFields"][] = "DA_SELFGRES";
$tdatakin_satei[".exportFields"][] = "tentou_label_output_flag";
$tdatakin_satei[".exportFields"][] = "meisai_number";
$tdatakin_satei[".exportFields"][] = "status";
$tdatakin_satei[".exportFields"][] = "satei_hi";
$tdatakin_satei[".exportFields"][] = "satei_by";
$tdatakin_satei[".exportFields"][] = "updated_at";
$tdatakin_satei[".exportFields"][] = "updated_by";
$tdatakin_satei[".exportFields"][] = "product_id";
$tdatakin_satei[".exportFields"][] = "gold_property";
$tdatakin_satei[".exportFields"][] = "comment";
$tdatakin_satei[".exportFields"][] = "Remarks";
$tdatakin_satei[".exportFields"][] = "Gram";
$tdatakin_satei[".exportFields"][] = "unit";
$tdatakin_satei[".exportFields"][] = "Parent_stone";
$tdatakin_satei[".exportFields"][] = "Aside_stone";
$tdatakin_satei[".exportFields"][] = "×";
$tdatakin_satei[".exportFields"][] = "price_per_gram";
$tdatakin_satei[".exportFields"][] = "price_per_parent_stone";
$tdatakin_satei[".exportFields"][] = "price_per_aside_stone";
$tdatakin_satei[".exportFields"][] = "=";
$tdatakin_satei[".exportFields"][] = "price";
$tdatakin_satei[".exportFields"][] = "円";

$tdatakin_satei[".importFields"] = array();
$tdatakin_satei[".importFields"][] = "status";
$tdatakin_satei[".importFields"][] = "product_id";
$tdatakin_satei[".importFields"][] = "category_id";
$tdatakin_satei[".importFields"][] = "sub_category_id1";
$tdatakin_satei[".importFields"][] = "yahoo_sex";
$tdatakin_satei[".importFields"][] = "gold_property";
$tdatakin_satei[".importFields"][] = "comment";
$tdatakin_satei[".importFields"][] = "Gram";
$tdatakin_satei[".importFields"][] = "unit";
$tdatakin_satei[".importFields"][] = "Parent_stone";
$tdatakin_satei[".importFields"][] = "price_per_gram";
$tdatakin_satei[".importFields"][] = "price_per_parent_stone";
$tdatakin_satei[".importFields"][] = "price";
$tdatakin_satei[".importFields"][] = "sales_price";
$tdatakin_satei[".importFields"][] = "yahoo_sankou_uwadai";
$tdatakin_satei[".importFields"][] = "satei_by";
$tdatakin_satei[".importFields"][] = "satei_hi";
$tdatakin_satei[".importFields"][] = "updated_by";
$tdatakin_satei[".importFields"][] = "updated_at";
$tdatakin_satei[".importFields"][] = "DA_SELFGRES";
$tdatakin_satei[".importFields"][] = "ecc_id";
$tdatakin_satei[".importFields"][] = "Aside_stone";
$tdatakin_satei[".importFields"][] = "price_per_aside_stone";
$tdatakin_satei[".importFields"][] = "item_name";
$tdatakin_satei[".importFields"][] = "serial_number";
$tdatakin_satei[".importFields"][] = "product_num";
$tdatakin_satei[".importFields"][] = "meisai_number";
$tdatakin_satei[".importFields"][] = "tentou_label_output_flag";
$tdatakin_satei[".importFields"][] = "other_cost";
$tdatakin_satei[".importFields"][] = "DA_INTENSITY";
$tdatakin_satei[".importFields"][] = "DA_OVERTONE";
$tdatakin_satei[".importFields"][] = "DA_COLOR";
$tdatakin_satei[".importFields"][] = "DA_CLARITY";
$tdatakin_satei[".importFields"][] = "DA_CUT";
$tdatakin_satei[".importFields"][] = "DA_POLISH";
$tdatakin_satei[".importFields"][] = "DA_SYMMETRY";
$tdatakin_satei[".importFields"][] = "DA_FLUO";
$tdatakin_satei[".importFields"][] = "DA_COLOR_FLUO";
$tdatakin_satei[".importFields"][] = "DA_WIDE";
$tdatakin_satei[".importFields"][] = "DA_HIGH";
$tdatakin_satei[".importFields"][] = "DA_DEPTH";
$tdatakin_satei[".importFields"][] = "DA_FRAPA";
$tdatakin_satei[".importFields"][] = "DA_RATE";
$tdatakin_satei[".importFields"][] = "multiplication_rate";
$tdatakin_satei[".importFields"][] = "Remarks";

$tdatakin_satei[".printFields"] = array();

//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kin_satei","status");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "status";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`status`";

	
	
				$fdata["FieldPermissions"] = true;

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
	$edata["LookupTable"] = "_goods_status2";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "goods_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "goods_status";

	
	$edata["LookupOrderBy"] = "kinsa";

	
	
	
	

	
	
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




	$tdatakin_satei["status"] = $fdata;
//	product_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "product_id";
	$fdata["GoodName"] = "product_id";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kin_satei","product_id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "product_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`product_id`";

	
	
				$fdata["FieldPermissions"] = true;

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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatakin_satei["product_id"] = $fdata;
//	category_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "category_id";
	$fdata["GoodName"] = "category_id";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kin_satei","category_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "category_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`category_id`";

	
	
				$fdata["FieldPermissions"] = true;

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
	$edata["LookupTable"] = "store_categories";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "category_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "category_name";

	
	$edata["LookupOrderBy"] = "sort";

	
	
	
	
				//dependent dropdowns
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "sub_category_id1";

	
	
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




	$tdatakin_satei["category_id"] = $fdata;
//	sub_category_id1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "sub_category_id1";
	$fdata["GoodName"] = "sub_category_id1";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kin_satei","sub_category_id1");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "sub_category_id1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`sub_category_id1`";

	
	
				$fdata["FieldPermissions"] = true;

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
	$edata["LookupTable"] = "store_sub_categories";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "name";

	
	$edata["LookupOrderBy"] = "sort";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "category_id", "lookup" => "category_id" );

	
	

	
	
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




	$tdatakin_satei["sub_category_id1"] = $fdata;
//	yahoo_sex
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "yahoo_sex";
	$fdata["GoodName"] = "yahoo_sex";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kin_satei","yahoo_sex");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "yahoo_sex";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`yahoo_sex`";

	
	
				$fdata["FieldPermissions"] = true;

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
	$edata["LookupTable"] = "_sex";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "sex_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "sex_name";

	
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




	$tdatakin_satei["yahoo_sex"] = $fdata;
//	gold_property
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "gold_property";
	$fdata["GoodName"] = "gold_property";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kin_satei","gold_property");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "gold_property";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`gold_property`";

	
	
				$fdata["FieldPermissions"] = true;

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
	$edata["LookupTable"] = "mst_gold_property";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "val";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "val";

	
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatakin_satei["gold_property"] = $fdata;
//	comment
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "comment";
	$fdata["GoodName"] = "comment";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kin_satei","comment");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "comment";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`comment`";

	
	
				$fdata["FieldPermissions"] = true;

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
			$edata["nCols"] = 100;

	
	
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




	$tdatakin_satei["comment"] = $fdata;
//	Gram
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Gram";
	$fdata["GoodName"] = "Gram";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kin_satei","Gram");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Gram";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Gram`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

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
			$edata["EditParams"].= " maxlength=20";

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




	$tdatakin_satei["Gram"] = $fdata;
//	unit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "unit";
	$fdata["GoodName"] = "unit";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kin_satei","unit");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "unit";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`unit`";

	
	
				$fdata["FieldPermissions"] = true;

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
	$edata["LookupTable"] = "mst_unit";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "name";
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




	$tdatakin_satei["unit"] = $fdata;
//	Parent_stone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Parent_stone";
	$fdata["GoodName"] = "Parent_stone";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kin_satei","Parent_stone");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Parent_stone";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Parent_stone`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

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
			$edata["EditParams"].= " maxlength=20";

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




	$tdatakin_satei["Parent_stone"] = $fdata;
//	price_per_gram
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "price_per_gram";
	$fdata["GoodName"] = "price_per_gram";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kin_satei","price_per_gram");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "price_per_gram";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`price_per_gram`";

	
	
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




	$tdatakin_satei["price_per_gram"] = $fdata;
//	price_per_parent_stone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "price_per_parent_stone";
	$fdata["GoodName"] = "price_per_parent_stone";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kin_satei","price_per_parent_stone");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "price_per_parent_stone";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`price_per_parent_stone`";

	
	
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




	$tdatakin_satei["price_per_parent_stone"] = $fdata;
//	price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "price";
	$fdata["GoodName"] = "price";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kin_satei","price");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "price";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`price`";

	
	
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




	$tdatakin_satei["price"] = $fdata;
//	sales_price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "sales_price";
	$fdata["GoodName"] = "sales_price";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kin_satei","sales_price");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "sales_price";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`sales_price`";

	
	
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




	$tdatakin_satei["sales_price"] = $fdata;
//	yahoo_sankou_uwadai
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "yahoo_sankou_uwadai";
	$fdata["GoodName"] = "yahoo_sankou_uwadai";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kin_satei","yahoo_sankou_uwadai");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "yahoo_sankou_uwadai";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`yahoo_sankou_uwadai`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

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
			$edata["EditParams"].= " maxlength=128";

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




	$tdatakin_satei["yahoo_sankou_uwadai"] = $fdata;
//	satei_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "satei_by";
	$fdata["GoodName"] = "satei_by";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kin_satei","satei_by");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "satei_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`satei_by`";

	
	
				$fdata["FieldPermissions"] = true;

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
	$edata["LookupTable"] = "users";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "user_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "first_name";

	
	$edata["LookupOrderBy"] = "income_id";

	
	
	
	

	
	
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




	$tdatakin_satei["satei_by"] = $fdata;
//	satei_hi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "satei_hi";
	$fdata["GoodName"] = "satei_hi";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kin_satei","satei_hi");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "satei_hi";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`satei_hi`";

	
	
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

	
	
		$edata["DateEditType"] = 11;
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




	$tdatakin_satei["satei_hi"] = $fdata;
//	updated_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "updated_by";
	$fdata["GoodName"] = "updated_by";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kin_satei","updated_by");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "updated_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`updated_by`";

	
	
				$fdata["FieldPermissions"] = true;

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
	$edata["LookupTable"] = "users";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "user_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "first_name";

	
	$edata["LookupOrderBy"] = "income_id";

	
	
	
	

	
	
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




	$tdatakin_satei["updated_by"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kin_satei","updated_at");
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

	
	
		$edata["DateEditType"] = 11;
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




	$tdatakin_satei["updated_at"] = $fdata;
//	DA_SELFGRES
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "DA_SELFGRES";
	$fdata["GoodName"] = "DA_SELFGRES";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kin_satei","DA_SELFGRES");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DA_SELFGRES";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`DA_SELFGRES`";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdatakin_satei["DA_SELFGRES"] = $fdata;
//	kinsa_flag
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "kinsa_flag";
	$fdata["GoodName"] = "kinsa_flag";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kin_satei","kinsa_flag");
	$fdata["FieldType"] = 16;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "kinsa_flag";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`kinsa_flag`";

	
	
			
				$fdata["UploadFolder"] = "files";

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








	$tdatakin_satei["kinsa_flag"] = $fdata;
//	yahoo_junle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "yahoo_junle";
	$fdata["GoodName"] = "yahoo_junle";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kin_satei","yahoo_junle");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "yahoo_junle";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`yahoo_junle`";

	
	
			
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
	$edata["LookupTable"] = "mst_brand2";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "name";
	$edata["LinkFieldType"] = 200;
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








	$tdatakin_satei["yahoo_junle"] = $fdata;
//	REG_AUTHOR
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "REG_AUTHOR";
	$fdata["GoodName"] = "REG_AUTHOR";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kin_satei","REG_AUTHOR");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "REG_AUTHOR";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`REG_AUTHOR`";

	
	
			
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
	$edata["LookupTable"] = "users";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "user_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "first_name";

	
	$edata["LookupOrderBy"] = "income_id";

	
	
	
	

	
	
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








	$tdatakin_satei["REG_AUTHOR"] = $fdata;
//	DT_UP_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "DT_UP_DATE";
	$fdata["GoodName"] = "DT_UP_DATE";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kin_satei","DT_UP_DATE");
	$fdata["FieldType"] = 135;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "DT_UP_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`DT_UP_DATE`";

	
	
			
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

	
	
		$edata["DateEditType"] = 11;
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








	$tdatakin_satei["DT_UP_DATE"] = $fdata;
//	AWAZU_NIN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "AWAZU_NIN";
	$fdata["GoodName"] = "AWAZU_NIN";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kin_satei","AWAZU_NIN");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "AWAZU_NIN";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`AWAZU_NIN`";

	
	
			
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
	$edata["LookupTable"] = "users";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "user_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "first_name";

	
	$edata["LookupOrderBy"] = "income_id";

	
	
	
	

	
	
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








	$tdatakin_satei["AWAZU_NIN"] = $fdata;
//	AWAZU_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "AWAZU_DATE";
	$fdata["GoodName"] = "AWAZU_DATE";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kin_satei","AWAZU_DATE");
	$fdata["FieldType"] = 135;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "AWAZU_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`AWAZU_DATE`";

	
	
			
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








	$tdatakin_satei["AWAZU_DATE"] = $fdata;
//	ecc_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "ecc_id";
	$fdata["GoodName"] = "ecc_id";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kin_satei","ecc_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "ecc_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`ecc_id`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

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
			$edata["EditParams"].= " maxlength=20";

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




	$tdatakin_satei["ecc_id"] = $fdata;
//	×
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "×";
	$fdata["GoodName"] = "_";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("kin_satei","_");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "×";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CONCAT('×')";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

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








	$tdatakin_satei["×"] = $fdata;
//	=
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "=";
	$fdata["GoodName"] = "_";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("kin_satei","_");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "=";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CONCAT('=')";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

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








	$tdatakin_satei["="] = $fdata;
//	円
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "円";
	$fdata["GoodName"] = "_";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("kin_satei","_");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "円";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CONCAT('円')";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

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








	$tdatakin_satei["円"] = $fdata;
//	nyuukin_price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "nyuukin_price";
	$fdata["GoodName"] = "nyuukin_price";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kin_satei","nyuukin_price");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "nyuukin_price";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`nyuukin_price`";

	
	
			
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








	$tdatakin_satei["nyuukin_price"] = $fdata;
//	kanryou_henbi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "kanryou_henbi";
	$fdata["GoodName"] = "kanryou_henbi";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kin_satei","kanryou_henbi");
	$fdata["FieldType"] = 135;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "kanryou_henbi";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`kanryou_henbi`";

	
	
			
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

	
	
		$edata["DateEditType"] = 11;
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








	$tdatakin_satei["kanryou_henbi"] = $fdata;
//	Aside_stone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "Aside_stone";
	$fdata["GoodName"] = "Aside_stone";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kin_satei","Aside_stone");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Aside_stone";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Aside_stone`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

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
			$edata["EditParams"].= " maxlength=20";

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




	$tdatakin_satei["Aside_stone"] = $fdata;
//	price_per_aside_stone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "price_per_aside_stone";
	$fdata["GoodName"] = "price_per_aside_stone";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kin_satei","price_per_aside_stone");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "price_per_aside_stone";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`price_per_aside_stone`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

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




	$tdatakin_satei["price_per_aside_stone"] = $fdata;
//	Eoc_takuhai_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "Eoc_takuhai_id";
	$fdata["GoodName"] = "Eoc_takuhai_id";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kin_satei","Eoc_takuhai_id");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "Eoc_takuhai_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_takuhai_id`";

	
	
			
				$fdata["UploadFolder"] = "files";

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








	$tdatakin_satei["Eoc_takuhai_id"] = $fdata;
//	Eoc_unfinished_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "Eoc_unfinished_id";
	$fdata["GoodName"] = "Eoc_unfinished_id";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kin_satei","Eoc_unfinished_id");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "Eoc_unfinished_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_unfinished_id`";

	
	
			
				$fdata["UploadFolder"] = "files";

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








	$tdatakin_satei["Eoc_unfinished_id"] = $fdata;
//	line
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "line";
	$fdata["GoodName"] = "line";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kin_satei","line");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "line";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`line`";

	
	
			
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
	$edata["LookupTable"] = "mst_item";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 1;

	
		
	$edata["LinkField"] = "name";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "name";

	
	$edata["LookupOrderBy"] = "sort";

		$edata["LookupDesc"] = true;

	
	
	

	
	
	
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








	$tdatakin_satei["line"] = $fdata;
//	item_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "item_name";
	$fdata["GoodName"] = "item_name";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kin_satei","item_name");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "item_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`item_name`";

	
	
				$fdata["FieldPermissions"] = true;

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
	$edata["LookupTable"] = "mst_item_name";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 1;

	
		
	$edata["LinkField"] = "name";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "name";

	
	$edata["LookupOrderBy"] = "sort";

	
	
	
	

	
	
	
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




	$tdatakin_satei["item_name"] = $fdata;
//	serial_number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "serial_number";
	$fdata["GoodName"] = "serial_number";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kin_satei","serial_number");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "serial_number";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`serial_number`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

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
			$edata["EditParams"].= " maxlength=150";

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




	$tdatakin_satei["serial_number"] = $fdata;
//	product_num
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "product_num";
	$fdata["GoodName"] = "product_num";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kin_satei","product_num");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "product_num";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`product_num`";

	
	
				$fdata["FieldPermissions"] = true;

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
	$edata["LookupTable"] = "mst_brand2";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 1;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "name";

	
	$edata["LookupOrderBy"] = "name";

	
	
	
	

	
	
	
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




	$tdatakin_satei["product_num"] = $fdata;
//	meisai_number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "meisai_number";
	$fdata["GoodName"] = "meisai_number";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kin_satei","meisai_number");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "meisai_number";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`meisai_number`";

	
	
				$fdata["FieldPermissions"] = true;

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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatakin_satei["meisai_number"] = $fdata;
//	tentou_label_output_flag
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "tentou_label_output_flag";
	$fdata["GoodName"] = "tentou_label_output_flag";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kin_satei","tentou_label_output_flag");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "tentou_label_output_flag";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`tentou_label_output_flag`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
	



	
	
	
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




	$tdatakin_satei["tentou_label_output_flag"] = $fdata;
//	accessories
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "accessories";
	$fdata["GoodName"] = "accessories";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kin_satei","accessories");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "accessories";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`accessories`";

	
	
			
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
	$edata["LookupTable"] = "mst_accessories";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "val";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "val";

	
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








	$tdatakin_satei["accessories"] = $fdata;
//	Discrimination
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "Discrimination";
	$fdata["GoodName"] = "Discrimination";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kin_satei","Discrimination");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "Discrimination";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Discrimination`";

	
	
			
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
	$edata["LookupTable"] = "mst_Discrimination";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "val";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "val";

	
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








	$tdatakin_satei["Discrimination"] = $fdata;
//	Eoc_trader_id_for_buy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "Eoc_trader_id_for_buy";
	$fdata["GoodName"] = "Eoc_trader_id_for_buy";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kin_satei","Eoc_trader_id_for_buy");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "Eoc_trader_id_for_buy";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_trader_id_for_buy`";

	
	
			
				$fdata["UploadFolder"] = "files";

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








	$tdatakin_satei["Eoc_trader_id_for_buy"] = $fdata;
//	other_cost
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "other_cost";
	$fdata["GoodName"] = "other_cost";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kin_satei","other_cost");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "other_cost";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`other_cost`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

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




	$tdatakin_satei["other_cost"] = $fdata;
//	DA_INTENSITY
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 47;
	$fdata["strName"] = "DA_INTENSITY";
	$fdata["GoodName"] = "DA_INTENSITY";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kin_satei","DA_INTENSITY");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DA_INTENSITY";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`DA_INTENSITY`";

	
	
				$fdata["FieldPermissions"] = true;

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
	$edata["LookupTable"] = "mst_Intensity";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "ID0";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Name";

	
	$edata["LookupOrderBy"] = "Sort";

	
	
	
	

	
	
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




	$tdatakin_satei["DA_INTENSITY"] = $fdata;
//	DA_OVERTONE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 48;
	$fdata["strName"] = "DA_OVERTONE";
	$fdata["GoodName"] = "DA_OVERTONE";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kin_satei","DA_OVERTONE");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DA_OVERTONE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`DA_OVERTONE`";

	
	
				$fdata["FieldPermissions"] = true;

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
	$edata["LookupTable"] = "mst_overtone";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "Id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Name";

	
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




	$tdatakin_satei["DA_OVERTONE"] = $fdata;
//	DA_COLOR
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 49;
	$fdata["strName"] = "DA_COLOR";
	$fdata["GoodName"] = "DA_COLOR";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kin_satei","DA_COLOR");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DA_COLOR";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`DA_COLOR`";

	
	
				$fdata["FieldPermissions"] = true;

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
	$edata["LookupTable"] = "_DIA_DA_COLOR";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "name";
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




	$tdatakin_satei["DA_COLOR"] = $fdata;
//	DA_CLARITY
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 50;
	$fdata["strName"] = "DA_CLARITY";
	$fdata["GoodName"] = "DA_CLARITY";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kin_satei","DA_CLARITY");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DA_CLARITY";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`DA_CLARITY`";

	
	
				$fdata["FieldPermissions"] = true;

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
	$edata["LookupTable"] = "_DIA_DA_CLARITY";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "name";
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




	$tdatakin_satei["DA_CLARITY"] = $fdata;
//	DA_CUT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 51;
	$fdata["strName"] = "DA_CUT";
	$fdata["GoodName"] = "DA_CUT";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kin_satei","DA_CUT");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DA_CUT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`DA_CUT`";

	
	
				$fdata["FieldPermissions"] = true;

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
	$edata["LookupTable"] = "_DIA_DA_CUT";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "name";
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




	$tdatakin_satei["DA_CUT"] = $fdata;
//	DA_POLISH
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 52;
	$fdata["strName"] = "DA_POLISH";
	$fdata["GoodName"] = "DA_POLISH";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kin_satei","DA_POLISH");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DA_POLISH";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`DA_POLISH`";

	
	
				$fdata["FieldPermissions"] = true;

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
	$edata["LookupTable"] = "mst_DA_POLISH";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "name";
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




	$tdatakin_satei["DA_POLISH"] = $fdata;
//	DA_SYMMETRY
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 53;
	$fdata["strName"] = "DA_SYMMETRY";
	$fdata["GoodName"] = "DA_SYMMETRY";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kin_satei","DA_SYMMETRY");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DA_SYMMETRY";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`DA_SYMMETRY`";

	
	
				$fdata["FieldPermissions"] = true;

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
	$edata["LookupTable"] = "mst_DA_SYMMETRY";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "name";
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




	$tdatakin_satei["DA_SYMMETRY"] = $fdata;
//	DA_FLUO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 54;
	$fdata["strName"] = "DA_FLUO";
	$fdata["GoodName"] = "DA_FLUO";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kin_satei","DA_FLUO");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DA_FLUO";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`DA_FLUO`";

	
	
				$fdata["FieldPermissions"] = true;

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
	$edata["LookupTable"] = "_DIA_DA_FLUO";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "name";
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




	$tdatakin_satei["DA_FLUO"] = $fdata;
//	DA_COLOR_FLUO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 55;
	$fdata["strName"] = "DA_COLOR_FLUO";
	$fdata["GoodName"] = "DA_COLOR_FLUO";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kin_satei","DA_COLOR_FLUO");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DA_COLOR_FLUO";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`DA_COLOR_FLUO`";

	
	
				$fdata["FieldPermissions"] = true;

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
	$edata["LookupTable"] = "mst_color_fluo";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "Id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Name";

	
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




	$tdatakin_satei["DA_COLOR_FLUO"] = $fdata;
//	DA_WIDE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 56;
	$fdata["strName"] = "DA_WIDE";
	$fdata["GoodName"] = "DA_WIDE";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kin_satei","DA_WIDE");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DA_WIDE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`DA_WIDE`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

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




	$tdatakin_satei["DA_WIDE"] = $fdata;
//	DA_HIGH
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 57;
	$fdata["strName"] = "DA_HIGH";
	$fdata["GoodName"] = "DA_HIGH";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kin_satei","DA_HIGH");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DA_HIGH";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`DA_HIGH`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

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




	$tdatakin_satei["DA_HIGH"] = $fdata;
//	DA_DEPTH
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 58;
	$fdata["strName"] = "DA_DEPTH";
	$fdata["GoodName"] = "DA_DEPTH";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kin_satei","DA_DEPTH");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DA_DEPTH";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`DA_DEPTH`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

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




	$tdatakin_satei["DA_DEPTH"] = $fdata;
//	DA_FRAPA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 59;
	$fdata["strName"] = "DA_FRAPA";
	$fdata["GoodName"] = "DA_FRAPA";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kin_satei","DA_FRAPA");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DA_FRAPA";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`DA_FRAPA`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

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




	$tdatakin_satei["DA_FRAPA"] = $fdata;
//	DA_RATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 60;
	$fdata["strName"] = "DA_RATE";
	$fdata["GoodName"] = "DA_RATE";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kin_satei","DA_RATE");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DA_RATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`DA_RATE`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

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




	$tdatakin_satei["DA_RATE"] = $fdata;
//	multiplication_rate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 61;
	$fdata["strName"] = "multiplication_rate";
	$fdata["GoodName"] = "multiplication_rate";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kin_satei","multiplication_rate");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "multiplication_rate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`multiplication_rate`";

	
	
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




	$tdatakin_satei["multiplication_rate"] = $fdata;
//	Remarks
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 62;
	$fdata["strName"] = "Remarks";
	$fdata["GoodName"] = "Remarks";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kin_satei","Remarks");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Remarks";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Remarks`";

	
	
				$fdata["FieldPermissions"] = true;

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
			$edata["nCols"] = 150;

	
	
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




	$tdatakin_satei["Remarks"] = $fdata;


$tables_data["kin_satei"]=&$tdatakin_satei;
$field_labels["kin_satei"] = &$fieldLabelskin_satei;
$fieldToolTips["kin_satei"] = &$fieldToolTipskin_satei;
$placeHolders["kin_satei"] = &$placeHolderskin_satei;
$page_titles["kin_satei"] = &$pageTitleskin_satei;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["kin_satei"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["kin_satei"] = array();


	
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
					$masterTablesData["kin_satei"][0] = $masterParams;
				$masterTablesData["kin_satei"][0]["masterKeys"] = array();
	$masterTablesData["kin_satei"][0]["masterKeys"][]="ecc_id";
				$masterTablesData["kin_satei"][0]["detailKeys"] = array();
	$masterTablesData["kin_satei"][0]["detailKeys"][]="ecc_id";
		
	
				$strOriginalDetailsTable="Eoc_trader";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="Eoc_trader";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "Eoc_trader";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "0";
	$masterParams["hideChild"]= "0";
	$masterParams["dispMasterInfo"] = array();
				$masterParams["dispMasterInfo"][PAGE_LIST] = true;
			
	$masterParams["previewOnList"]= 2;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterParams["proceedLink"]= 1;

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["kin_satei"][1] = $masterParams;
				$masterTablesData["kin_satei"][1]["masterKeys"] = array();
	$masterTablesData["kin_satei"][1]["masterKeys"][]="id";
				$masterTablesData["kin_satei"][1]["detailKeys"] = array();
	$masterTablesData["kin_satei"][1]["detailKeys"][]="Eoc_trader_id_for_buy";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_kin_satei()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`status`,  `product_id`,  `category_id`,  `sub_category_id1`,  `yahoo_sex`,  `gold_property`,  `comment`,  `Gram`,  `unit`,  `Parent_stone`,  `price_per_gram`,  `price_per_parent_stone`,  `price`,  `sales_price`,  `yahoo_sankou_uwadai`,  `satei_by`,  `satei_hi`,  `updated_by`,  `updated_at`,  `DA_SELFGRES`,  `kinsa_flag`,  `yahoo_junle`,  `REG_AUTHOR`,  `DT_UP_DATE`,  `AWAZU_NIN`,  `AWAZU_DATE`,  `ecc_id`,  CONCAT('×') AS `×`,  CONCAT('=') AS `=`,  CONCAT('円') AS `円`,  `nyuukin_price`,  `kanryou_henbi`,  `Aside_stone`,  `price_per_aside_stone`,  `Eoc_takuhai_id`,  `Eoc_unfinished_id`,  `line`,  `item_name`,  `serial_number`,  `product_num`,  `meisai_number`,  `tentou_label_output_flag`,  `accessories`,  `Discrimination`,  `Eoc_trader_id_for_buy`,  `other_cost`,  `DA_INTENSITY`,  `DA_OVERTONE`,  `DA_COLOR`,  `DA_CLARITY`,  `DA_CUT`,  `DA_POLISH`,  `DA_SYMMETRY`,  `DA_FLUO`,  `DA_COLOR_FLUO`,  `DA_WIDE`,  `DA_HIGH`,  `DA_DEPTH`,  `DA_FRAPA`,  `DA_RATE`,  `multiplication_rate`,  `Remarks`";
$proto0["m_strFrom"] = "FROM `shouhin`";
$proto0["m_strWhere"] = "(`status` = 126)";
$proto0["m_strOrderBy"] = "ORDER BY `product_id` DESC";
$proto0["m_strTail"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "`status` = 126";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kin_satei"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "= 126";
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
	"m_strName" => "status",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kin_satei"
));

$proto6["m_sql"] = "`status`";
$proto6["m_srcTableName"] = "kin_satei";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "product_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kin_satei"
));

$proto8["m_sql"] = "`product_id`";
$proto8["m_srcTableName"] = "kin_satei";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "category_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kin_satei"
));

$proto10["m_sql"] = "`category_id`";
$proto10["m_srcTableName"] = "kin_satei";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "sub_category_id1",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kin_satei"
));

$proto12["m_sql"] = "`sub_category_id1`";
$proto12["m_srcTableName"] = "kin_satei";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_sex",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kin_satei"
));

$proto14["m_sql"] = "`yahoo_sex`";
$proto14["m_srcTableName"] = "kin_satei";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "gold_property",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kin_satei"
));

$proto16["m_sql"] = "`gold_property`";
$proto16["m_srcTableName"] = "kin_satei";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "comment",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kin_satei"
));

$proto18["m_sql"] = "`comment`";
$proto18["m_srcTableName"] = "kin_satei";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Gram",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kin_satei"
));

$proto20["m_sql"] = "`Gram`";
$proto20["m_srcTableName"] = "kin_satei";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "unit",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kin_satei"
));

$proto22["m_sql"] = "`unit`";
$proto22["m_srcTableName"] = "kin_satei";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Parent_stone",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kin_satei"
));

$proto24["m_sql"] = "`Parent_stone`";
$proto24["m_srcTableName"] = "kin_satei";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "price_per_gram",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kin_satei"
));

$proto26["m_sql"] = "`price_per_gram`";
$proto26["m_srcTableName"] = "kin_satei";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "price_per_parent_stone",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kin_satei"
));

$proto28["m_sql"] = "`price_per_parent_stone`";
$proto28["m_srcTableName"] = "kin_satei";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "price",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kin_satei"
));

$proto30["m_sql"] = "`price`";
$proto30["m_srcTableName"] = "kin_satei";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "sales_price",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kin_satei"
));

$proto32["m_sql"] = "`sales_price`";
$proto32["m_srcTableName"] = "kin_satei";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_sankou_uwadai",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kin_satei"
));

$proto34["m_sql"] = "`yahoo_sankou_uwadai`";
$proto34["m_srcTableName"] = "kin_satei";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "satei_by",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kin_satei"
));

$proto36["m_sql"] = "`satei_by`";
$proto36["m_srcTableName"] = "kin_satei";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "satei_hi",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kin_satei"
));

$proto38["m_sql"] = "`satei_hi`";
$proto38["m_srcTableName"] = "kin_satei";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kin_satei"
));

$proto40["m_sql"] = "`updated_by`";
$proto40["m_srcTableName"] = "kin_satei";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kin_satei"
));

$proto42["m_sql"] = "`updated_at`";
$proto42["m_srcTableName"] = "kin_satei";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "DA_SELFGRES",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kin_satei"
));

$proto44["m_sql"] = "`DA_SELFGRES`";
$proto44["m_srcTableName"] = "kin_satei";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "kinsa_flag",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kin_satei"
));

$proto46["m_sql"] = "`kinsa_flag`";
$proto46["m_srcTableName"] = "kin_satei";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_junle",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kin_satei"
));

$proto48["m_sql"] = "`yahoo_junle`";
$proto48["m_srcTableName"] = "kin_satei";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "REG_AUTHOR",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kin_satei"
));

$proto50["m_sql"] = "`REG_AUTHOR`";
$proto50["m_srcTableName"] = "kin_satei";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "DT_UP_DATE",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kin_satei"
));

$proto52["m_sql"] = "`DT_UP_DATE`";
$proto52["m_srcTableName"] = "kin_satei";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "AWAZU_NIN",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kin_satei"
));

$proto54["m_sql"] = "`AWAZU_NIN`";
$proto54["m_srcTableName"] = "kin_satei";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "AWAZU_DATE",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kin_satei"
));

$proto56["m_sql"] = "`AWAZU_DATE`";
$proto56["m_srcTableName"] = "kin_satei";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "ecc_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kin_satei"
));

$proto58["m_sql"] = "`ecc_id`";
$proto58["m_srcTableName"] = "kin_satei";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$proto61=array();
$proto61["m_functiontype"] = "SQLF_CUSTOM";
$proto61["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "'×'"
));

$proto61["m_arguments"][]=$obj;
$proto61["m_strFunctionName"] = "CONCAT";
$obj = new SQLFunctionCall($proto61);

$proto60["m_sql"] = "CONCAT('×')";
$proto60["m_srcTableName"] = "kin_satei";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "×";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto63=array();
			$proto64=array();
$proto64["m_functiontype"] = "SQLF_CUSTOM";
$proto64["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "'='"
));

$proto64["m_arguments"][]=$obj;
$proto64["m_strFunctionName"] = "CONCAT";
$obj = new SQLFunctionCall($proto64);

$proto63["m_sql"] = "CONCAT('=')";
$proto63["m_srcTableName"] = "kin_satei";
$proto63["m_expr"]=$obj;
$proto63["m_alias"] = "=";
$obj = new SQLFieldListItem($proto63);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$proto67=array();
$proto67["m_functiontype"] = "SQLF_CUSTOM";
$proto67["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "'円'"
));

$proto67["m_arguments"][]=$obj;
$proto67["m_strFunctionName"] = "CONCAT";
$obj = new SQLFunctionCall($proto67);

$proto66["m_sql"] = "CONCAT('円')";
$proto66["m_srcTableName"] = "kin_satei";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "円";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto69=array();
			$obj = new SQLField(array(
	"m_strName" => "nyuukin_price",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kin_satei"
));

$proto69["m_sql"] = "`nyuukin_price`";
$proto69["m_srcTableName"] = "kin_satei";
$proto69["m_expr"]=$obj;
$proto69["m_alias"] = "";
$obj = new SQLFieldListItem($proto69);

$proto0["m_fieldlist"][]=$obj;
						$proto71=array();
			$obj = new SQLField(array(
	"m_strName" => "kanryou_henbi",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kin_satei"
));

$proto71["m_sql"] = "`kanryou_henbi`";
$proto71["m_srcTableName"] = "kin_satei";
$proto71["m_expr"]=$obj;
$proto71["m_alias"] = "";
$obj = new SQLFieldListItem($proto71);

$proto0["m_fieldlist"][]=$obj;
						$proto73=array();
			$obj = new SQLField(array(
	"m_strName" => "Aside_stone",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kin_satei"
));

$proto73["m_sql"] = "`Aside_stone`";
$proto73["m_srcTableName"] = "kin_satei";
$proto73["m_expr"]=$obj;
$proto73["m_alias"] = "";
$obj = new SQLFieldListItem($proto73);

$proto0["m_fieldlist"][]=$obj;
						$proto75=array();
			$obj = new SQLField(array(
	"m_strName" => "price_per_aside_stone",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kin_satei"
));

$proto75["m_sql"] = "`price_per_aside_stone`";
$proto75["m_srcTableName"] = "kin_satei";
$proto75["m_expr"]=$obj;
$proto75["m_alias"] = "";
$obj = new SQLFieldListItem($proto75);

$proto0["m_fieldlist"][]=$obj;
						$proto77=array();
			$obj = new SQLField(array(
	"m_strName" => "Eoc_takuhai_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kin_satei"
));

$proto77["m_sql"] = "`Eoc_takuhai_id`";
$proto77["m_srcTableName"] = "kin_satei";
$proto77["m_expr"]=$obj;
$proto77["m_alias"] = "";
$obj = new SQLFieldListItem($proto77);

$proto0["m_fieldlist"][]=$obj;
						$proto79=array();
			$obj = new SQLField(array(
	"m_strName" => "Eoc_unfinished_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kin_satei"
));

$proto79["m_sql"] = "`Eoc_unfinished_id`";
$proto79["m_srcTableName"] = "kin_satei";
$proto79["m_expr"]=$obj;
$proto79["m_alias"] = "";
$obj = new SQLFieldListItem($proto79);

$proto0["m_fieldlist"][]=$obj;
						$proto81=array();
			$obj = new SQLField(array(
	"m_strName" => "line",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kin_satei"
));

$proto81["m_sql"] = "`line`";
$proto81["m_srcTableName"] = "kin_satei";
$proto81["m_expr"]=$obj;
$proto81["m_alias"] = "";
$obj = new SQLFieldListItem($proto81);

$proto0["m_fieldlist"][]=$obj;
						$proto83=array();
			$obj = new SQLField(array(
	"m_strName" => "item_name",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kin_satei"
));

$proto83["m_sql"] = "`item_name`";
$proto83["m_srcTableName"] = "kin_satei";
$proto83["m_expr"]=$obj;
$proto83["m_alias"] = "";
$obj = new SQLFieldListItem($proto83);

$proto0["m_fieldlist"][]=$obj;
						$proto85=array();
			$obj = new SQLField(array(
	"m_strName" => "serial_number",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kin_satei"
));

$proto85["m_sql"] = "`serial_number`";
$proto85["m_srcTableName"] = "kin_satei";
$proto85["m_expr"]=$obj;
$proto85["m_alias"] = "";
$obj = new SQLFieldListItem($proto85);

$proto0["m_fieldlist"][]=$obj;
						$proto87=array();
			$obj = new SQLField(array(
	"m_strName" => "product_num",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kin_satei"
));

$proto87["m_sql"] = "`product_num`";
$proto87["m_srcTableName"] = "kin_satei";
$proto87["m_expr"]=$obj;
$proto87["m_alias"] = "";
$obj = new SQLFieldListItem($proto87);

$proto0["m_fieldlist"][]=$obj;
						$proto89=array();
			$obj = new SQLField(array(
	"m_strName" => "meisai_number",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kin_satei"
));

$proto89["m_sql"] = "`meisai_number`";
$proto89["m_srcTableName"] = "kin_satei";
$proto89["m_expr"]=$obj;
$proto89["m_alias"] = "";
$obj = new SQLFieldListItem($proto89);

$proto0["m_fieldlist"][]=$obj;
						$proto91=array();
			$obj = new SQLField(array(
	"m_strName" => "tentou_label_output_flag",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kin_satei"
));

$proto91["m_sql"] = "`tentou_label_output_flag`";
$proto91["m_srcTableName"] = "kin_satei";
$proto91["m_expr"]=$obj;
$proto91["m_alias"] = "";
$obj = new SQLFieldListItem($proto91);

$proto0["m_fieldlist"][]=$obj;
						$proto93=array();
			$obj = new SQLField(array(
	"m_strName" => "accessories",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kin_satei"
));

$proto93["m_sql"] = "`accessories`";
$proto93["m_srcTableName"] = "kin_satei";
$proto93["m_expr"]=$obj;
$proto93["m_alias"] = "";
$obj = new SQLFieldListItem($proto93);

$proto0["m_fieldlist"][]=$obj;
						$proto95=array();
			$obj = new SQLField(array(
	"m_strName" => "Discrimination",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kin_satei"
));

$proto95["m_sql"] = "`Discrimination`";
$proto95["m_srcTableName"] = "kin_satei";
$proto95["m_expr"]=$obj;
$proto95["m_alias"] = "";
$obj = new SQLFieldListItem($proto95);

$proto0["m_fieldlist"][]=$obj;
						$proto97=array();
			$obj = new SQLField(array(
	"m_strName" => "Eoc_trader_id_for_buy",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kin_satei"
));

$proto97["m_sql"] = "`Eoc_trader_id_for_buy`";
$proto97["m_srcTableName"] = "kin_satei";
$proto97["m_expr"]=$obj;
$proto97["m_alias"] = "";
$obj = new SQLFieldListItem($proto97);

$proto0["m_fieldlist"][]=$obj;
						$proto99=array();
			$obj = new SQLField(array(
	"m_strName" => "other_cost",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kin_satei"
));

$proto99["m_sql"] = "`other_cost`";
$proto99["m_srcTableName"] = "kin_satei";
$proto99["m_expr"]=$obj;
$proto99["m_alias"] = "";
$obj = new SQLFieldListItem($proto99);

$proto0["m_fieldlist"][]=$obj;
						$proto101=array();
			$obj = new SQLField(array(
	"m_strName" => "DA_INTENSITY",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kin_satei"
));

$proto101["m_sql"] = "`DA_INTENSITY`";
$proto101["m_srcTableName"] = "kin_satei";
$proto101["m_expr"]=$obj;
$proto101["m_alias"] = "";
$obj = new SQLFieldListItem($proto101);

$proto0["m_fieldlist"][]=$obj;
						$proto103=array();
			$obj = new SQLField(array(
	"m_strName" => "DA_OVERTONE",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kin_satei"
));

$proto103["m_sql"] = "`DA_OVERTONE`";
$proto103["m_srcTableName"] = "kin_satei";
$proto103["m_expr"]=$obj;
$proto103["m_alias"] = "";
$obj = new SQLFieldListItem($proto103);

$proto0["m_fieldlist"][]=$obj;
						$proto105=array();
			$obj = new SQLField(array(
	"m_strName" => "DA_COLOR",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kin_satei"
));

$proto105["m_sql"] = "`DA_COLOR`";
$proto105["m_srcTableName"] = "kin_satei";
$proto105["m_expr"]=$obj;
$proto105["m_alias"] = "";
$obj = new SQLFieldListItem($proto105);

$proto0["m_fieldlist"][]=$obj;
						$proto107=array();
			$obj = new SQLField(array(
	"m_strName" => "DA_CLARITY",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kin_satei"
));

$proto107["m_sql"] = "`DA_CLARITY`";
$proto107["m_srcTableName"] = "kin_satei";
$proto107["m_expr"]=$obj;
$proto107["m_alias"] = "";
$obj = new SQLFieldListItem($proto107);

$proto0["m_fieldlist"][]=$obj;
						$proto109=array();
			$obj = new SQLField(array(
	"m_strName" => "DA_CUT",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kin_satei"
));

$proto109["m_sql"] = "`DA_CUT`";
$proto109["m_srcTableName"] = "kin_satei";
$proto109["m_expr"]=$obj;
$proto109["m_alias"] = "";
$obj = new SQLFieldListItem($proto109);

$proto0["m_fieldlist"][]=$obj;
						$proto111=array();
			$obj = new SQLField(array(
	"m_strName" => "DA_POLISH",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kin_satei"
));

$proto111["m_sql"] = "`DA_POLISH`";
$proto111["m_srcTableName"] = "kin_satei";
$proto111["m_expr"]=$obj;
$proto111["m_alias"] = "";
$obj = new SQLFieldListItem($proto111);

$proto0["m_fieldlist"][]=$obj;
						$proto113=array();
			$obj = new SQLField(array(
	"m_strName" => "DA_SYMMETRY",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kin_satei"
));

$proto113["m_sql"] = "`DA_SYMMETRY`";
$proto113["m_srcTableName"] = "kin_satei";
$proto113["m_expr"]=$obj;
$proto113["m_alias"] = "";
$obj = new SQLFieldListItem($proto113);

$proto0["m_fieldlist"][]=$obj;
						$proto115=array();
			$obj = new SQLField(array(
	"m_strName" => "DA_FLUO",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kin_satei"
));

$proto115["m_sql"] = "`DA_FLUO`";
$proto115["m_srcTableName"] = "kin_satei";
$proto115["m_expr"]=$obj;
$proto115["m_alias"] = "";
$obj = new SQLFieldListItem($proto115);

$proto0["m_fieldlist"][]=$obj;
						$proto117=array();
			$obj = new SQLField(array(
	"m_strName" => "DA_COLOR_FLUO",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kin_satei"
));

$proto117["m_sql"] = "`DA_COLOR_FLUO`";
$proto117["m_srcTableName"] = "kin_satei";
$proto117["m_expr"]=$obj;
$proto117["m_alias"] = "";
$obj = new SQLFieldListItem($proto117);

$proto0["m_fieldlist"][]=$obj;
						$proto119=array();
			$obj = new SQLField(array(
	"m_strName" => "DA_WIDE",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kin_satei"
));

$proto119["m_sql"] = "`DA_WIDE`";
$proto119["m_srcTableName"] = "kin_satei";
$proto119["m_expr"]=$obj;
$proto119["m_alias"] = "";
$obj = new SQLFieldListItem($proto119);

$proto0["m_fieldlist"][]=$obj;
						$proto121=array();
			$obj = new SQLField(array(
	"m_strName" => "DA_HIGH",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kin_satei"
));

$proto121["m_sql"] = "`DA_HIGH`";
$proto121["m_srcTableName"] = "kin_satei";
$proto121["m_expr"]=$obj;
$proto121["m_alias"] = "";
$obj = new SQLFieldListItem($proto121);

$proto0["m_fieldlist"][]=$obj;
						$proto123=array();
			$obj = new SQLField(array(
	"m_strName" => "DA_DEPTH",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kin_satei"
));

$proto123["m_sql"] = "`DA_DEPTH`";
$proto123["m_srcTableName"] = "kin_satei";
$proto123["m_expr"]=$obj;
$proto123["m_alias"] = "";
$obj = new SQLFieldListItem($proto123);

$proto0["m_fieldlist"][]=$obj;
						$proto125=array();
			$obj = new SQLField(array(
	"m_strName" => "DA_FRAPA",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kin_satei"
));

$proto125["m_sql"] = "`DA_FRAPA`";
$proto125["m_srcTableName"] = "kin_satei";
$proto125["m_expr"]=$obj;
$proto125["m_alias"] = "";
$obj = new SQLFieldListItem($proto125);

$proto0["m_fieldlist"][]=$obj;
						$proto127=array();
			$obj = new SQLField(array(
	"m_strName" => "DA_RATE",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kin_satei"
));

$proto127["m_sql"] = "`DA_RATE`";
$proto127["m_srcTableName"] = "kin_satei";
$proto127["m_expr"]=$obj;
$proto127["m_alias"] = "";
$obj = new SQLFieldListItem($proto127);

$proto0["m_fieldlist"][]=$obj;
						$proto129=array();
			$obj = new SQLField(array(
	"m_strName" => "multiplication_rate",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kin_satei"
));

$proto129["m_sql"] = "`multiplication_rate`";
$proto129["m_srcTableName"] = "kin_satei";
$proto129["m_expr"]=$obj;
$proto129["m_alias"] = "";
$obj = new SQLFieldListItem($proto129);

$proto0["m_fieldlist"][]=$obj;
						$proto131=array();
			$obj = new SQLField(array(
	"m_strName" => "Remarks",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kin_satei"
));

$proto131["m_sql"] = "`Remarks`";
$proto131["m_srcTableName"] = "kin_satei";
$proto131["m_expr"]=$obj;
$proto131["m_alias"] = "";
$obj = new SQLFieldListItem($proto131);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto133=array();
$proto133["m_link"] = "SQLL_MAIN";
			$proto134=array();
$proto134["m_strName"] = "shouhin";
$proto134["m_srcTableName"] = "kin_satei";
$proto134["m_columns"] = array();
$proto134["m_columns"][] = "product_id";
$proto134["m_columns"][] = "category_id";
$proto134["m_columns"][] = "goods_title";
$proto134["m_columns"][] = "title";
$proto134["m_columns"][] = "sub_category_id1";
$proto134["m_columns"][] = "ecc_id";
$proto134["m_columns"][] = "price";
$proto134["m_columns"][] = "yahoo";
$proto134["m_columns"][] = "remark";
$proto134["m_columns"][] = "sales_price";
$proto134["m_columns"][] = "description";
$proto134["m_columns"][] = "status";
$proto134["m_columns"][] = "product_num";
$proto134["m_columns"][] = "updated_at";
$proto134["m_columns"][] = "yahoo_size";
$proto134["m_columns"][] = "yahoo_title";
$proto134["m_columns"][] = "yahoo_junle";
$proto134["m_columns"][] = "yahoo_sankou_uwadai";
$proto134["m_columns"][] = "yahoo_sozai";
$proto134["m_columns"][] = "yahoo_color";
$proto134["m_columns"][] = "yahoo_kataban";
$proto134["m_columns"][] = "yahoo_condition1";
$proto134["m_columns"][] = "yahoo_condition2";
$proto134["m_columns"][] = "yahoo_fuzokuhin";
$proto134["m_columns"][] = "yahoo_sinaban";
$proto134["m_columns"][] = "yahoo_saisun_sha";
$proto134["m_columns"][] = "yahoo_sex";
$proto134["m_columns"][] = "box_id";
$proto134["m_columns"][] = "nyuukin_price";
$proto134["m_columns"][] = "updated_by";
$proto134["m_columns"][] = "raku_title";
$proto134["m_columns"][] = "raku_hyoujisaki_category2";
$proto134["m_columns"][] = "raku_hyoujisaki_category";
$proto134["m_columns"][] = "raku_hyoujisaki_category3";
$proto134["m_columns"][] = "timesta";
$proto134["m_columns"][] = "saisun_start";
$proto134["m_columns"][] = "saisun_end";
$proto134["m_columns"][] = "label_output_flag";
$proto134["m_columns"][] = "season";
$proto134["m_columns"][] = "kanryou_henbi";
$proto134["m_columns"][] = "box_sort";
$proto134["m_columns"][] = "satei_by";
$proto134["m_columns"][] = "kaitori_by";
$proto134["m_columns"][] = "comment";
$proto134["m_columns"][] = "satei_hi";
$proto134["m_columns"][] = "kaitory_hi";
$proto134["m_columns"][] = "REG_PHOTOGRAPHER";
$proto134["m_columns"][] = "REG_AUTHOR";
$proto134["m_columns"][] = "REG_PACKINGS";
$proto134["m_columns"][] = "REG_KAKOU_DATE";
$proto134["m_columns"][] = "REG_KAKOU";
$proto134["m_columns"][] = "REG_EXHIBITOR";
$proto134["m_columns"][] = "REG_PHOTOGRAPHER_DATE";
$proto134["m_columns"][] = "DT_PACKING_DATE";
$proto134["m_columns"][] = "DT_UP_DATE";
$proto134["m_columns"][] = "AWAZU_DATE";
$proto134["m_columns"][] = "AWAZU_NIN";
$proto134["m_columns"][] = "sabun_date";
$proto134["m_columns"][] = "browseid";
$proto134["m_columns"][] = "browsenode";
$proto134["m_columns"][] = "gold_property";
$proto134["m_columns"][] = "ichiba_title";
$proto134["m_columns"][] = "Gram";
$proto134["m_columns"][] = "Parent_stone";
$proto134["m_columns"][] = "Aside_stone";
$proto134["m_columns"][] = "Appraiser";
$proto134["m_columns"][] = "Remarks";
$proto134["m_columns"][] = "Destination_selling";
$proto134["m_columns"][] = "Finish";
$proto134["m_columns"][] = "Discrimination";
$proto134["m_columns"][] = "accessories";
$proto134["m_columns"][] = "priority";
$proto134["m_columns"][] = "A_storage";
$proto134["m_columns"][] = "price_per_gram";
$proto134["m_columns"][] = "price_per_parent_stone";
$proto134["m_columns"][] = "price_per_aside_stone";
$proto134["m_columns"][] = "price_secret";
$proto134["m_columns"][] = "sales_price_secret";
$proto134["m_columns"][] = "eq";
$proto134["m_columns"][] = "en";
$proto134["m_columns"][] = "line";
$proto134["m_columns"][] = "item_name";
$proto134["m_columns"][] = "handle";
$proto134["m_columns"][] = "yahoo_color_id";
$proto134["m_columns"][] = "raku_hyoujisaki_category4";
$proto134["m_columns"][] = "raku_hyoujisaki_category5";
$proto134["m_columns"][] = "raku_dir_1";
$proto134["m_columns"][] = "raku_dir_2";
$proto134["m_columns"][] = "raku_dir_3";
$proto134["m_columns"][] = "raku_dir_4";
$proto134["m_columns"][] = "raku_dir_5";
$proto134["m_columns"][] = "raku_dir_result";
$proto134["m_columns"][] = "raku_tag_result";
$proto134["m_columns"][] = "serial_number";
$proto134["m_columns"][] = "Exhibition_Date";
$proto134["m_columns"][] = "search_keyword";
$proto134["m_columns"][] = "stamp";
$proto134["m_columns"][] = "motif";
$proto134["m_columns"][] = "Setting";
$proto134["m_columns"][] = "processing";
$proto134["m_columns"][] = "Sleeve_Length";
$proto134["m_columns"][] = "length";
$proto134["m_columns"][] = "Ring_size";
$proto134["m_columns"][] = "price_for_site";
$proto134["m_columns"][] = "yahoo_category_id";
$proto134["m_columns"][] = "Qty";
$proto134["m_columns"][] = "sales_period";
$proto134["m_columns"][] = "starting_price";
$proto134["m_columns"][] = "FLAG_NO_ARRIVAL";
$proto134["m_columns"][] = "amount_of_image";
$proto134["m_columns"][] = "csv";
$proto134["m_columns"][] = "return_output_flag";
$proto134["m_columns"][] = "wasabi_flag";
$proto134["m_columns"][] = "ws_import_date";
$proto134["m_columns"][] = "logo";
$proto134["m_columns"][] = "parts";
$proto134["m_columns"][] = "country_of_origin";
$proto134["m_columns"][] = "zipper";
$proto134["m_columns"][] = "guarantee";
$proto134["m_columns"][] = "errors";
$proto134["m_columns"][] = "designer";
$proto134["m_columns"][] = "hahakai";
$proto134["m_columns"][] = "effect";
$proto134["m_columns"][] = "shape";
$proto134["m_columns"][] = "cutting_style";
$proto134["m_columns"][] = "chain_type";
$proto134["m_columns"][] = "number_of_stones";
$proto134["m_columns"][] = "amount";
$proto134["m_columns"][] = "satei_error";
$proto134["m_columns"][] = "producing_area";
$proto134["m_columns"][] = "shape_supplement";
$proto134["m_columns"][] = "side_gem";
$proto134["m_columns"][] = "product_style";
$proto134["m_columns"][] = "collar_neck_line";
$proto134["m_columns"][] = "breast";
$proto134["m_columns"][] = "silhouette";
$proto134["m_columns"][] = "sleeve";
$proto134["m_columns"][] = "unit";
$proto134["m_columns"][] = "hall_mark";
$proto134["m_columns"][] = "plate";
$proto134["m_columns"][] = "toe";
$proto134["m_columns"][] = "heel";
$proto134["m_columns"][] = "cloth";
$proto134["m_columns"][] = "serial_number_for_storage";
$proto134["m_columns"][] = "official_url";
$proto134["m_columns"][] = "main_details";
$proto134["m_columns"][] = "notation_size";
$proto134["m_columns"][] = "shoe_size_jp";
$proto134["m_columns"][] = "Eoc_chigins2_id";
$proto134["m_columns"][] = "country_of_origin_name";
$proto134["m_columns"][] = "mailingkit_id";
$proto134["m_columns"][] = "DA_COMMENTSANDTOTAL";
$proto134["m_columns"][] = "DA_WEIGHT";
$proto134["m_columns"][] = "DA_PER_CARAT";
$proto134["m_columns"][] = "DA_SHAPE";
$proto134["m_columns"][] = "DA_SELFGRES";
$proto134["m_columns"][] = "DA_ORIGINALGRADEMLIKENED";
$proto134["m_columns"][] = "DA_SUGARCANE";
$proto134["m_columns"][] = "DA_RAPA";
$proto134["m_columns"][] = "DA_INTENSITY";
$proto134["m_columns"][] = "DA_OVERTONE";
$proto134["m_columns"][] = "DA_COLOR";
$proto134["m_columns"][] = "DA_CLARITY";
$proto134["m_columns"][] = "DA_CUT";
$proto134["m_columns"][] = "DA_POLISH";
$proto134["m_columns"][] = "DA_SYMMETRY";
$proto134["m_columns"][] = "DA_FLUO";
$proto134["m_columns"][] = "DA_COLOR_FLUO";
$proto134["m_columns"][] = "DA_WIDE";
$proto134["m_columns"][] = "DA_HIGH";
$proto134["m_columns"][] = "DA_DEPTH";
$proto134["m_columns"][] = "DA_APPRAISER";
$proto134["m_columns"][] = "DA_FRAPA";
$proto134["m_columns"][] = "DA_RATE";
$proto134["m_columns"][] = "DA_UNIT_PRICE_UNPLUG";
$proto134["m_columns"][] = "DA_YOURNAME";
$proto134["m_columns"][] = "DA_RAPAB";
$proto134["m_columns"][] = "DA_GROSSPROFIT";
$proto134["m_columns"][] = "DA_INTEREST_1";
$proto134["m_columns"][] = "DA_no";
$proto134["m_columns"][] = "kinsa_flag";
$proto134["m_columns"][] = "price_for_site_flag";
$proto134["m_columns"][] = "Eoc_takuhai_id";
$proto134["m_columns"][] = "Eoc_unfinished_id";
$proto134["m_columns"][] = "Eoc_chigins_unfinished_id";
$proto134["m_columns"][] = "chohyo_id";
$proto134["m_columns"][] = "location";
$proto134["m_columns"][] = "special_instructions_1";
$proto134["m_columns"][] = "special_instructions_2";
$proto134["m_columns"][] = "special_instructions_3";
$proto134["m_columns"][] = "chohyo_seihin_flag";
$proto134["m_columns"][] = "chohyo_dia_flag";
$proto134["m_columns"][] = "chohyo_type";
$proto134["m_columns"][] = "ichiyen_flag";
$proto134["m_columns"][] = "asuraku_fuka_flag";
$proto134["m_columns"][] = "parallel_import_flag";
$proto134["m_columns"][] = "meisai_number";
$proto134["m_columns"][] = "days_keep_price";
$proto134["m_columns"][] = "initial_included";
$proto134["m_columns"][] = "novelty";
$proto134["m_columns"][] = "tentou_label_output_flag";
$proto134["m_columns"][] = "itaku_flag";
$proto134["m_columns"][] = "including_catch";
$proto134["m_columns"][] = "ichiba_meeting_month";
$proto134["m_columns"][] = "ichiba_meeting_name";
$proto134["m_columns"][] = "ichiba_color";
$proto134["m_columns"][] = "ichiba_clarity";
$proto134["m_columns"][] = "ichiba_melee_gai";
$proto134["m_columns"][] = "ichiba_lot_pieces";
$proto134["m_columns"][] = "ichiba_image";
$proto134["m_columns"][] = "ichiba_img";
$proto134["m_columns"][] = "gold_check_id";
$proto134["m_columns"][] = "ichiba_exhibition_id";
$proto134["m_columns"][] = "ichiba_exhibition_sort";
$proto134["m_columns"][] = "cost";
$proto134["m_columns"][] = "auto_price_cut_prohibited";
$proto134["m_columns"][] = "event_price";
$proto134["m_columns"][] = "identification_cost";
$proto134["m_columns"][] = "other_cost";
$proto134["m_columns"][] = "stock_quantity";
$proto134["m_columns"][] = "Eoc_trader_id_for_buy";
$proto134["m_columns"][] = "Eoc_trader_id_for_sell";
$proto134["m_columns"][] = "multiplication_rate";
$proto134["m_columns"][] = "many_product_group_id";
$proto134["m_columns"][] = "trading_sort_id";
$proto134["m_columns"][] = "many_product_group_saiban";
$proto134["m_columns"][] = "purchase_category";
$proto134["m_columns"][] = "created_at";
$proto134["m_columns"][] = "created_by";
$proto134["m_columns"][] = "manual_input_price_per_gram";
$proto134["m_columns"][] = "satei_start";
$proto134["m_columns"][] = "self_DA_INTENSITY";
$proto134["m_columns"][] = "self_DA_OVERTONE";
$proto134["m_columns"][] = "self_DA_COLOR";
$proto134["m_columns"][] = "self_DA_CLARITY";
$proto134["m_columns"][] = "self_DA_CUT";
$proto134["m_columns"][] = "self_DA_POLISH";
$proto134["m_columns"][] = "self_DA_SYMMETRY";
$proto134["m_columns"][] = "self_DA_FLUO";
$proto134["m_columns"][] = "self_DA_COLOR_FLUO";
$proto134["m_columns"][] = "self_DA_FRAPA";
$proto134["m_columns"][] = "self_DA_RATE";
$proto134["m_columns"][] = "self_multiplication_rate";
$proto134["m_columns"][] = "is_seiyaku";
$proto134["m_columns"][] = "destination_sold_out";
$proto134["m_columns"][] = "mypage_update_prohibited";
$proto134["m_columns"][] = "gold_check_scan_id";
$proto134["m_columns"][] = "buy_campaign_data_id";
$proto134["m_columns"][] = "REG_PHOTOGRAPHER_DATE_start";
$proto134["m_columns"][] = "commission";
$proto134["m_columns"][] = "addtime_gold_check_id";
$proto134["m_columns"][] = "is_recovery";
$proto134["m_columns"][] = "sales_cost";
$proto134["m_columns"][] = "mst_business_partner_id";
$proto134["m_columns"][] = "DA_GROSSPROFIT_2";
$proto134["m_columns"][] = "DA_INTEREST_2";
$proto134["m_columns"][] = "minus_weight";
$proto134["m_columns"][] = "diameter_size";
$proto134["m_columns"][] = "metal_rate_date";
$obj = new SQLTable($proto134);

$proto133["m_table"] = $obj;
$proto133["m_sql"] = "`shouhin`";
$proto133["m_alias"] = "";
$proto133["m_srcTableName"] = "kin_satei";
$proto135=array();
$proto135["m_sql"] = "";
$proto135["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto135["m_column"]=$obj;
$proto135["m_contained"] = array();
$proto135["m_strCase"] = "";
$proto135["m_havingmode"] = false;
$proto135["m_inBrackets"] = false;
$proto135["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto135);

$proto133["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto133);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto137=array();
						$obj = new SQLField(array(
	"m_strName" => "product_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kin_satei"
));

$proto137["m_column"]=$obj;
$proto137["m_bAsc"] = 0;
$proto137["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto137);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="kin_satei";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_kin_satei = createSqlQuery_kin_satei();


	
		;

																																																														

$tdatakin_satei[".sqlquery"] = $queryData_kin_satei;

include_once(getabspath("include/kin_satei_events.php"));
$tableEvents["kin_satei"] = new eventclass_kin_satei;
$tdatakin_satei[".hasEvents"] = true;

?>