<?php
require_once(getabspath("classes/cipherer.php"));




$tdatadia = array();
	$tdatadia[".truncateText"] = true;
	$tdatadia[".NumberOfChars"] = 80;
	$tdatadia[".ShortName"] = "dia";
	$tdatadia[".OwnerID"] = "";
	$tdatadia[".OriginalTable"] = "shouhin";

//	field labels
$fieldLabelsdia = array();
$fieldToolTipsdia = array();
$pageTitlesdia = array();
$placeHoldersdia = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsdia["Japanese"] = array();
	$fieldToolTipsdia["Japanese"] = array();
	$placeHoldersdia["Japanese"] = array();
	$pageTitlesdia["Japanese"] = array();
	$fieldLabelsdia["Japanese"]["product_id"] = "SEQ";
	$fieldToolTipsdia["Japanese"]["product_id"] = "";
	$placeHoldersdia["Japanese"]["product_id"] = "";
	$fieldLabelsdia["Japanese"]["ecc_id"] = "顧客SEQ";
	$fieldToolTipsdia["Japanese"]["ecc_id"] = "";
	$placeHoldersdia["Japanese"]["ecc_id"] = "";
	$fieldLabelsdia["Japanese"]["price"] = "買取額";
	$fieldToolTipsdia["Japanese"]["price"] = "";
	$placeHoldersdia["Japanese"]["price"] = "";
	$fieldLabelsdia["Japanese"]["description"] = "メモ";
	$fieldToolTipsdia["Japanese"]["description"] = "";
	$placeHoldersdia["Japanese"]["description"] = "";
	$fieldLabelsdia["Japanese"]["status"] = "商品状態";
	$fieldToolTipsdia["Japanese"]["status"] = "";
	$placeHoldersdia["Japanese"]["status"] = "";
	$fieldLabelsdia["Japanese"]["updated_at"] = "最終更新日";
	$fieldToolTipsdia["Japanese"]["updated_at"] = "";
	$placeHoldersdia["Japanese"]["updated_at"] = "";
	$fieldLabelsdia["Japanese"]["yahoo_sinaban"] = "品番";
	$fieldToolTipsdia["Japanese"]["yahoo_sinaban"] = "";
	$placeHoldersdia["Japanese"]["yahoo_sinaban"] = "";
	$fieldLabelsdia["Japanese"]["nyuukin_price"] = "払出他";
	$fieldToolTipsdia["Japanese"]["nyuukin_price"] = "";
	$placeHoldersdia["Japanese"]["nyuukin_price"] = "";
	$fieldLabelsdia["Japanese"]["updated_by"] = "最終更新者";
	$fieldToolTipsdia["Japanese"]["updated_by"] = "";
	$placeHoldersdia["Japanese"]["updated_by"] = "";
	$fieldLabelsdia["Japanese"]["kanryou_henbi"] = "完了変更日";
	$fieldToolTipsdia["Japanese"]["kanryou_henbi"] = "";
	$placeHoldersdia["Japanese"]["kanryou_henbi"] = "";
	$fieldLabelsdia["Japanese"]["satei_by"] = "査定人";
	$fieldToolTipsdia["Japanese"]["satei_by"] = "";
	$placeHoldersdia["Japanese"]["satei_by"] = "";
	$fieldLabelsdia["Japanese"]["satei_hi"] = "査定日";
	$fieldToolTipsdia["Japanese"]["satei_hi"] = "";
	$placeHoldersdia["Japanese"]["satei_hi"] = "";
	$fieldLabelsdia["Japanese"]["DA_WEIGHT"] = "カラット";
	$fieldToolTipsdia["Japanese"]["DA_WEIGHT"] = "";
	$placeHoldersdia["Japanese"]["DA_WEIGHT"] = "";
	$fieldLabelsdia["Japanese"]["DA_PER_CARAT"] = "Per carat";
	$fieldToolTipsdia["Japanese"]["DA_PER_CARAT"] = "";
	$placeHoldersdia["Japanese"]["DA_PER_CARAT"] = "";
	$fieldLabelsdia["Japanese"]["DA_SHAPE"] = "形";
	$fieldToolTipsdia["Japanese"]["DA_SHAPE"] = "";
	$placeHoldersdia["Japanese"]["DA_SHAPE"] = "";
	$fieldLabelsdia["Japanese"]["DA_SELFGRES"] = "自グレ";
	$fieldToolTipsdia["Japanese"]["DA_SELFGRES"] = "";
	$placeHoldersdia["Japanese"]["DA_SELFGRES"] = "";
	$fieldLabelsdia["Japanese"]["DA_ORIGINALGRADEMLIKENED"] = "元グレ";
	$fieldToolTipsdia["Japanese"]["DA_ORIGINALGRADEMLIKENED"] = "";
	$placeHoldersdia["Japanese"]["DA_ORIGINALGRADEMLIKENED"] = "";
	$fieldLabelsdia["Japanese"]["DA_SUGARCANE"] = "鑑書";
	$fieldToolTipsdia["Japanese"]["DA_SUGARCANE"] = "";
	$placeHoldersdia["Japanese"]["DA_SUGARCANE"] = "";
	$fieldLabelsdia["Japanese"]["DA_RAPA"] = "RAPAA";
	$fieldToolTipsdia["Japanese"]["DA_RAPA"] = "";
	$placeHoldersdia["Japanese"]["DA_RAPA"] = "";
	$fieldLabelsdia["Japanese"]["DA_INTENSITY"] = "INSI";
	$fieldToolTipsdia["Japanese"]["DA_INTENSITY"] = "";
	$placeHoldersdia["Japanese"]["DA_INTENSITY"] = "";
	$fieldLabelsdia["Japanese"]["DA_OVERTONE"] = "OVTO";
	$fieldToolTipsdia["Japanese"]["DA_OVERTONE"] = "";
	$placeHoldersdia["Japanese"]["DA_OVERTONE"] = "";
	$fieldLabelsdia["Japanese"]["DA_COLOR"] = "カラー";
	$fieldToolTipsdia["Japanese"]["DA_COLOR"] = "";
	$placeHoldersdia["Japanese"]["DA_COLOR"] = "";
	$fieldLabelsdia["Japanese"]["DA_CLARITY"] = "クラリティ";
	$fieldToolTipsdia["Japanese"]["DA_CLARITY"] = "";
	$placeHoldersdia["Japanese"]["DA_CLARITY"] = "";
	$fieldLabelsdia["Japanese"]["DA_CUT"] = "カット";
	$fieldToolTipsdia["Japanese"]["DA_CUT"] = "";
	$placeHoldersdia["Japanese"]["DA_CUT"] = "";
	$fieldLabelsdia["Japanese"]["DA_POLISH"] = "ポリッシュ";
	$fieldToolTipsdia["Japanese"]["DA_POLISH"] = "";
	$placeHoldersdia["Japanese"]["DA_POLISH"] = "";
	$fieldLabelsdia["Japanese"]["DA_SYMMETRY"] = "シンメトリ";
	$fieldToolTipsdia["Japanese"]["DA_SYMMETRY"] = "";
	$placeHoldersdia["Japanese"]["DA_SYMMETRY"] = "";
	$fieldLabelsdia["Japanese"]["DA_FLUO"] = "蛍光";
	$fieldToolTipsdia["Japanese"]["DA_FLUO"] = "";
	$placeHoldersdia["Japanese"]["DA_FLUO"] = "";
	$fieldLabelsdia["Japanese"]["DA_COLOR_FLUO"] = "COFL";
	$fieldToolTipsdia["Japanese"]["DA_COLOR_FLUO"] = "";
	$placeHoldersdia["Japanese"]["DA_COLOR_FLUO"] = "";
	$fieldLabelsdia["Japanese"]["DA_WIDE"] = "サイズ1";
	$fieldToolTipsdia["Japanese"]["DA_WIDE"] = "";
	$placeHoldersdia["Japanese"]["DA_WIDE"] = "";
	$fieldLabelsdia["Japanese"]["DA_HIGH"] = "サイズ2";
	$fieldToolTipsdia["Japanese"]["DA_HIGH"] = "";
	$placeHoldersdia["Japanese"]["DA_HIGH"] = "";
	$fieldLabelsdia["Japanese"]["DA_DEPTH"] = "サイズ3";
	$fieldToolTipsdia["Japanese"]["DA_DEPTH"] = "";
	$placeHoldersdia["Japanese"]["DA_DEPTH"] = "";
	$fieldLabelsdia["Japanese"]["DA_COMMENTSANDTOTAL"] = "COMME";
	$fieldToolTipsdia["Japanese"]["DA_COMMENTSANDTOTAL"] = "";
	$placeHoldersdia["Japanese"]["DA_COMMENTSANDTOTAL"] = "";
	$fieldLabelsdia["Japanese"]["DA_APPRAISER"] = "LABO";
	$fieldToolTipsdia["Japanese"]["DA_APPRAISER"] = "";
	$placeHoldersdia["Japanese"]["DA_APPRAISER"] = "";
	$fieldLabelsdia["Japanese"]["DA_FRAPA"] = "FRAPA";
	$fieldToolTipsdia["Japanese"]["DA_FRAPA"] = "";
	$placeHoldersdia["Japanese"]["DA_FRAPA"] = "";
	$fieldLabelsdia["Japanese"]["DA_RATE"] = "RATE";
	$fieldToolTipsdia["Japanese"]["DA_RATE"] = "";
	$placeHoldersdia["Japanese"]["DA_RATE"] = "";
	$fieldLabelsdia["Japanese"]["DA_UNIT_PRICE_UNPLUG"] = "ガイ抜";
	$fieldToolTipsdia["Japanese"]["DA_UNIT_PRICE_UNPLUG"] = "";
	$placeHoldersdia["Japanese"]["DA_UNIT_PRICE_UNPLUG"] = "";
	$fieldLabelsdia["Japanese"]["DA_YOURNAME"] = "芳名";
	$fieldToolTipsdia["Japanese"]["DA_YOURNAME"] = "";
	$placeHoldersdia["Japanese"]["DA_YOURNAME"] = "";
	$fieldLabelsdia["Japanese"]["DA_RAPAB"] = "RAPAB";
	$fieldToolTipsdia["Japanese"]["DA_RAPAB"] = "";
	$placeHoldersdia["Japanese"]["DA_RAPAB"] = "";
	$fieldLabelsdia["Japanese"]["DA_GROSSPROFIT"] = "粗利率";
	$fieldToolTipsdia["Japanese"]["DA_GROSSPROFIT"] = "";
	$placeHoldersdia["Japanese"]["DA_GROSSPROFIT"] = "";
	$fieldLabelsdia["Japanese"]["DA_INTEREST_1"] = "利 1";
	$fieldToolTipsdia["Japanese"]["DA_INTEREST_1"] = "";
	$placeHoldersdia["Japanese"]["DA_INTEREST_1"] = "";
	$fieldLabelsdia["Japanese"]["DA_no"] = "No";
	$fieldToolTipsdia["Japanese"]["DA_no"] = "";
	$placeHoldersdia["Japanese"]["DA_no"] = "";
	$fieldLabelsdia["Japanese"]["Remarks"] = "宝飾備考";
	$fieldToolTipsdia["Japanese"]["Remarks"] = "";
	$placeHoldersdia["Japanese"]["Remarks"] = "";
	$fieldLabelsdia["Japanese"]["Gram"] = "カラット";
	$fieldToolTipsdia["Japanese"]["Gram"] = "";
	$placeHoldersdia["Japanese"]["Gram"] = "";
	$fieldLabelsdia["Japanese"]["unit"] = "単位";
	$fieldToolTipsdia["Japanese"]["unit"] = "";
	$placeHoldersdia["Japanese"]["unit"] = "";
	$fieldLabelsdia["Japanese"]["Appraiser"] = "鑑定機関";
	$fieldToolTipsdia["Japanese"]["Appraiser"] = "";
	$placeHoldersdia["Japanese"]["Appraiser"] = "";
	$fieldLabelsdia["Japanese"]["serial_number"] = "機番";
	$fieldToolTipsdia["Japanese"]["serial_number"] = "";
	$placeHoldersdia["Japanese"]["serial_number"] = "";
	$fieldLabelsdia["Japanese"]["ecc_seq"] = "顧客番号";
	$fieldToolTipsdia["Japanese"]["ecc_seq"] = "";
	$placeHoldersdia["Japanese"]["ecc_seq"] = "";
	$fieldLabelsdia["Japanese"]["category_id"] = "大カテゴリー";
	$fieldToolTipsdia["Japanese"]["category_id"] = "";
	$placeHoldersdia["Japanese"]["category_id"] = "";
	$fieldLabelsdia["Japanese"]["sub_category_id1"] = "中カテゴリー";
	$fieldToolTipsdia["Japanese"]["sub_category_id1"] = "";
	$placeHoldersdia["Japanese"]["sub_category_id1"] = "";
	$fieldLabelsdia["Japanese"]["yahoo_sex"] = "性別";
	$fieldToolTipsdia["Japanese"]["yahoo_sex"] = "";
	$placeHoldersdia["Japanese"]["yahoo_sex"] = "";
	$fieldLabelsdia["Japanese"]["product_num"] = "ブランドID";
	$fieldToolTipsdia["Japanese"]["product_num"] = "";
	$placeHoldersdia["Japanese"]["product_num"] = "";
	$fieldLabelsdia["Japanese"]["yahoo_junle"] = "Yahoo Junle";
	$fieldToolTipsdia["Japanese"]["yahoo_junle"] = "";
	$placeHoldersdia["Japanese"]["yahoo_junle"] = "";
	$fieldLabelsdia["Japanese"]["title"] = "タイトル";
	$fieldToolTipsdia["Japanese"]["title"] = "";
	$placeHoldersdia["Japanese"]["title"] = "";
	$fieldLabelsdia["Japanese"]["Parent_stone"] = "カラット";
	$fieldToolTipsdia["Japanese"]["Parent_stone"] = "";
	$placeHoldersdia["Japanese"]["Parent_stone"] = "";
	$fieldLabelsdia["Japanese"]["comment"] = "コメント";
	$fieldToolTipsdia["Japanese"]["comment"] = "";
	$placeHoldersdia["Japanese"]["comment"] = "";
	$fieldLabelsdia["Japanese"]["tentou_label_output_flag"] = "ST不変ラベル出力";
	$fieldToolTipsdia["Japanese"]["tentou_label_output_flag"] = "";
	$placeHoldersdia["Japanese"]["tentou_label_output_flag"] = "";
	$fieldLabelsdia["Japanese"]["other_cost"] = "その他コスト";
	$fieldToolTipsdia["Japanese"]["other_cost"] = "";
	$placeHoldersdia["Japanese"]["other_cost"] = "";
	$fieldLabelsdia["Japanese"]["identification_cost"] = "鑑別コスト";
	$fieldToolTipsdia["Japanese"]["identification_cost"] = "";
	$placeHoldersdia["Japanese"]["identification_cost"] = "";
	$fieldLabelsdia["Japanese"]["sales_cost"] = "販売口銭";
	$fieldToolTipsdia["Japanese"]["sales_cost"] = "";
	$placeHoldersdia["Japanese"]["sales_cost"] = "";
	$fieldLabelsdia["Japanese"]["DA_GROSSPROFIT_2"] = "粗利率２";
	$fieldToolTipsdia["Japanese"]["DA_GROSSPROFIT_2"] = "";
	$placeHoldersdia["Japanese"]["DA_GROSSPROFIT_2"] = "";
	$fieldLabelsdia["Japanese"]["DA_INTEREST_2"] = "利２";
	$fieldToolTipsdia["Japanese"]["DA_INTEREST_2"] = "";
	$placeHoldersdia["Japanese"]["DA_INTEREST_2"] = "";
	$fieldLabelsdia["Japanese"]["mst_business_partner_id"] = "取引先";
	$fieldToolTipsdia["Japanese"]["mst_business_partner_id"] = "";
	$placeHoldersdia["Japanese"]["mst_business_partner_id"] = "";
	if (count($fieldToolTipsdia["Japanese"]))
		$tdatadia[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsdia[""] = array();
	$fieldToolTipsdia[""] = array();
	$placeHoldersdia[""] = array();
	$pageTitlesdia[""] = array();
	$fieldLabelsdia[""]["DA_WEIGHT"] = "DA WEIGHT";
	$fieldToolTipsdia[""]["DA_WEIGHT"] = "";
	$placeHoldersdia[""]["DA_WEIGHT"] = "";
	$fieldLabelsdia[""]["DA_PER_CARAT"] = "DA PER CARAT";
	$fieldToolTipsdia[""]["DA_PER_CARAT"] = "";
	$placeHoldersdia[""]["DA_PER_CARAT"] = "";
	$fieldLabelsdia[""]["DA_SHAPE"] = "DA SHAPE";
	$fieldToolTipsdia[""]["DA_SHAPE"] = "";
	$placeHoldersdia[""]["DA_SHAPE"] = "";
	$fieldLabelsdia[""]["DA_SELFGRES"] = "DA SELFGRES";
	$fieldToolTipsdia[""]["DA_SELFGRES"] = "";
	$placeHoldersdia[""]["DA_SELFGRES"] = "";
	$fieldLabelsdia[""]["DA_ORIGINALGRADEMLIKENED"] = "DA ORIGINALGRADEMLIKENED";
	$fieldToolTipsdia[""]["DA_ORIGINALGRADEMLIKENED"] = "";
	$placeHoldersdia[""]["DA_ORIGINALGRADEMLIKENED"] = "";
	$fieldLabelsdia[""]["DA_SUGARCANE"] = "DA SUGARCANE";
	$fieldToolTipsdia[""]["DA_SUGARCANE"] = "";
	$placeHoldersdia[""]["DA_SUGARCANE"] = "";
	$fieldLabelsdia[""]["DA_RAPA"] = "DA RAPA";
	$fieldToolTipsdia[""]["DA_RAPA"] = "";
	$placeHoldersdia[""]["DA_RAPA"] = "";
	$fieldLabelsdia[""]["DA_INTENSITY"] = "DA INTENSITY";
	$fieldToolTipsdia[""]["DA_INTENSITY"] = "";
	$placeHoldersdia[""]["DA_INTENSITY"] = "";
	$fieldLabelsdia[""]["DA_OVERTONE"] = "DA OVERTONE";
	$fieldToolTipsdia[""]["DA_OVERTONE"] = "";
	$placeHoldersdia[""]["DA_OVERTONE"] = "";
	$fieldLabelsdia[""]["DA_COLOR"] = "DA COLOR";
	$fieldToolTipsdia[""]["DA_COLOR"] = "";
	$placeHoldersdia[""]["DA_COLOR"] = "";
	$fieldLabelsdia[""]["DA_CLARITY"] = "DA CLARITY";
	$fieldToolTipsdia[""]["DA_CLARITY"] = "";
	$placeHoldersdia[""]["DA_CLARITY"] = "";
	$fieldLabelsdia[""]["DA_CUT"] = "DA CUT";
	$fieldToolTipsdia[""]["DA_CUT"] = "";
	$placeHoldersdia[""]["DA_CUT"] = "";
	$fieldLabelsdia[""]["DA_POLISH"] = "DA POLISH";
	$fieldToolTipsdia[""]["DA_POLISH"] = "";
	$placeHoldersdia[""]["DA_POLISH"] = "";
	$fieldLabelsdia[""]["DA_SYMMETRY"] = "DA SYMMETRY";
	$fieldToolTipsdia[""]["DA_SYMMETRY"] = "";
	$placeHoldersdia[""]["DA_SYMMETRY"] = "";
	$fieldLabelsdia[""]["DA_FLUO"] = "DA FLUO";
	$fieldToolTipsdia[""]["DA_FLUO"] = "";
	$placeHoldersdia[""]["DA_FLUO"] = "";
	$fieldLabelsdia[""]["DA_COLOR_FLUO"] = "DA COLOR FLUO";
	$fieldToolTipsdia[""]["DA_COLOR_FLUO"] = "";
	$placeHoldersdia[""]["DA_COLOR_FLUO"] = "";
	$fieldLabelsdia[""]["DA_WIDE"] = "DA WIDE";
	$fieldToolTipsdia[""]["DA_WIDE"] = "";
	$placeHoldersdia[""]["DA_WIDE"] = "";
	$fieldLabelsdia[""]["DA_HIGH"] = "DA HIGH";
	$fieldToolTipsdia[""]["DA_HIGH"] = "";
	$placeHoldersdia[""]["DA_HIGH"] = "";
	$fieldLabelsdia[""]["DA_DEPTH"] = "DA DEPTH";
	$fieldToolTipsdia[""]["DA_DEPTH"] = "";
	$placeHoldersdia[""]["DA_DEPTH"] = "";
	$fieldLabelsdia[""]["DA_COMMENTSANDTOTAL"] = "DA COMMENTSANDTOTAL";
	$fieldToolTipsdia[""]["DA_COMMENTSANDTOTAL"] = "";
	$placeHoldersdia[""]["DA_COMMENTSANDTOTAL"] = "";
	$fieldLabelsdia[""]["DA_APPRAISER"] = "DA APPRAISER";
	$fieldToolTipsdia[""]["DA_APPRAISER"] = "";
	$placeHoldersdia[""]["DA_APPRAISER"] = "";
	$fieldLabelsdia[""]["DA_FRAPA"] = "DA FRAPA";
	$fieldToolTipsdia[""]["DA_FRAPA"] = "";
	$placeHoldersdia[""]["DA_FRAPA"] = "";
	$fieldLabelsdia[""]["DA_RATE"] = "DA RATE";
	$fieldToolTipsdia[""]["DA_RATE"] = "";
	$placeHoldersdia[""]["DA_RATE"] = "";
	$fieldLabelsdia[""]["DA_UNIT_PRICE_UNPLUG"] = "DA UNIT PRICE UNPLUG";
	$fieldToolTipsdia[""]["DA_UNIT_PRICE_UNPLUG"] = "";
	$placeHoldersdia[""]["DA_UNIT_PRICE_UNPLUG"] = "";
	$fieldLabelsdia[""]["DA_YOURNAME"] = "DA YOURNAME";
	$fieldToolTipsdia[""]["DA_YOURNAME"] = "";
	$placeHoldersdia[""]["DA_YOURNAME"] = "";
	$fieldLabelsdia[""]["DA_RAPAB"] = "DA RAPAB";
	$fieldToolTipsdia[""]["DA_RAPAB"] = "";
	$placeHoldersdia[""]["DA_RAPAB"] = "";
	$fieldLabelsdia[""]["DA_GROSSPROFIT"] = "DA GROSSPROFIT";
	$fieldToolTipsdia[""]["DA_GROSSPROFIT"] = "";
	$placeHoldersdia[""]["DA_GROSSPROFIT"] = "";
	$fieldLabelsdia[""]["DA_INTEREST_1"] = "DA INTEREST 1";
	$fieldToolTipsdia[""]["DA_INTEREST_1"] = "";
	$placeHoldersdia[""]["DA_INTEREST_1"] = "";
	$fieldLabelsdia[""]["DA_no"] = "DA No";
	$fieldToolTipsdia[""]["DA_no"] = "";
	$placeHoldersdia[""]["DA_no"] = "";
	$fieldLabelsdia[""]["Remarks"] = "Remarks";
	$fieldToolTipsdia[""]["Remarks"] = "";
	$placeHoldersdia[""]["Remarks"] = "";
	$fieldLabelsdia[""]["Gram"] = "Gram";
	$fieldToolTipsdia[""]["Gram"] = "";
	$placeHoldersdia[""]["Gram"] = "";
	$fieldLabelsdia[""]["unit"] = "Unit";
	$fieldToolTipsdia[""]["unit"] = "";
	$placeHoldersdia[""]["unit"] = "";
	$fieldLabelsdia[""]["Appraiser"] = "Appraiser";
	$fieldToolTipsdia[""]["Appraiser"] = "";
	$placeHoldersdia[""]["Appraiser"] = "";
	$fieldLabelsdia[""]["serial_number"] = "Serial Number";
	$fieldToolTipsdia[""]["serial_number"] = "";
	$placeHoldersdia[""]["serial_number"] = "";
	$fieldLabelsdia[""]["ecc_seq"] = "Ecc Seq";
	$fieldToolTipsdia[""]["ecc_seq"] = "";
	$placeHoldersdia[""]["ecc_seq"] = "";
	$fieldLabelsdia[""]["category_id"] = "Category Id";
	$fieldToolTipsdia[""]["category_id"] = "";
	$placeHoldersdia[""]["category_id"] = "";
	$fieldLabelsdia[""]["sub_category_id1"] = "Sub Category Id1";
	$fieldToolTipsdia[""]["sub_category_id1"] = "";
	$placeHoldersdia[""]["sub_category_id1"] = "";
	$fieldLabelsdia[""]["yahoo_sex"] = "Yahoo Sex";
	$fieldToolTipsdia[""]["yahoo_sex"] = "";
	$placeHoldersdia[""]["yahoo_sex"] = "";
	$fieldLabelsdia[""]["product_num"] = "Product Num";
	$fieldToolTipsdia[""]["product_num"] = "";
	$placeHoldersdia[""]["product_num"] = "";
	$fieldLabelsdia[""]["yahoo_junle"] = "Yahoo Junle";
	$fieldToolTipsdia[""]["yahoo_junle"] = "";
	$placeHoldersdia[""]["yahoo_junle"] = "";
	$fieldLabelsdia[""]["title"] = "Title";
	$fieldToolTipsdia[""]["title"] = "";
	$placeHoldersdia[""]["title"] = "";
	$fieldLabelsdia[""]["Parent_stone"] = "Parent Stone";
	$fieldToolTipsdia[""]["Parent_stone"] = "";
	$placeHoldersdia[""]["Parent_stone"] = "";
	$fieldLabelsdia[""]["comment"] = "Comment";
	$fieldToolTipsdia[""]["comment"] = "";
	$placeHoldersdia[""]["comment"] = "";
	$fieldLabelsdia[""]["tentou_label_output_flag"] = "Tentou Label Output Flag";
	$fieldToolTipsdia[""]["tentou_label_output_flag"] = "";
	$placeHoldersdia[""]["tentou_label_output_flag"] = "";
	$fieldLabelsdia[""]["other_cost"] = "Other Cost";
	$fieldToolTipsdia[""]["other_cost"] = "";
	$placeHoldersdia[""]["other_cost"] = "";
	$fieldLabelsdia[""]["identification_cost"] = "Identification Cost";
	$fieldToolTipsdia[""]["identification_cost"] = "";
	$placeHoldersdia[""]["identification_cost"] = "";
	$fieldLabelsdia[""]["sales_cost"] = "Sales Cost";
	$fieldToolTipsdia[""]["sales_cost"] = "";
	$placeHoldersdia[""]["sales_cost"] = "";
	$fieldLabelsdia[""]["DA_GROSSPROFIT_2"] = "DA GROSSPROFIT 2";
	$fieldToolTipsdia[""]["DA_GROSSPROFIT_2"] = "";
	$placeHoldersdia[""]["DA_GROSSPROFIT_2"] = "";
	$fieldLabelsdia[""]["DA_INTEREST_2"] = "DA INTEREST 2";
	$fieldToolTipsdia[""]["DA_INTEREST_2"] = "";
	$placeHoldersdia[""]["DA_INTEREST_2"] = "";
	$fieldLabelsdia[""]["mst_business_partner_id"] = "Mst Business Partner Id";
	$fieldToolTipsdia[""]["mst_business_partner_id"] = "";
	$placeHoldersdia[""]["mst_business_partner_id"] = "";
	if (count($fieldToolTipsdia[""]))
		$tdatadia[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdia["English"] = array();
	$fieldToolTipsdia["English"] = array();
	$placeHoldersdia["English"] = array();
	$pageTitlesdia["English"] = array();
	$fieldLabelsdia["English"]["DA_WEIGHT"] = "DA WEIGHT";
	$fieldToolTipsdia["English"]["DA_WEIGHT"] = "";
	$placeHoldersdia["English"]["DA_WEIGHT"] = "";
	$fieldLabelsdia["English"]["DA_PER_CARAT"] = "DA PER CARAT";
	$fieldToolTipsdia["English"]["DA_PER_CARAT"] = "";
	$placeHoldersdia["English"]["DA_PER_CARAT"] = "";
	$fieldLabelsdia["English"]["DA_SHAPE"] = "DA SHAPE";
	$fieldToolTipsdia["English"]["DA_SHAPE"] = "";
	$placeHoldersdia["English"]["DA_SHAPE"] = "";
	$fieldLabelsdia["English"]["DA_SELFGRES"] = "DA SELFGRES";
	$fieldToolTipsdia["English"]["DA_SELFGRES"] = "";
	$placeHoldersdia["English"]["DA_SELFGRES"] = "";
	$fieldLabelsdia["English"]["DA_ORIGINALGRADEMLIKENED"] = "DA ORIGINALGRADEMLIKENED";
	$fieldToolTipsdia["English"]["DA_ORIGINALGRADEMLIKENED"] = "";
	$placeHoldersdia["English"]["DA_ORIGINALGRADEMLIKENED"] = "";
	$fieldLabelsdia["English"]["DA_SUGARCANE"] = "DA SUGARCANE";
	$fieldToolTipsdia["English"]["DA_SUGARCANE"] = "";
	$placeHoldersdia["English"]["DA_SUGARCANE"] = "";
	$fieldLabelsdia["English"]["DA_RAPA"] = "DA RAPA";
	$fieldToolTipsdia["English"]["DA_RAPA"] = "";
	$placeHoldersdia["English"]["DA_RAPA"] = "";
	$fieldLabelsdia["English"]["DA_INTENSITY"] = "DA INTENSITY";
	$fieldToolTipsdia["English"]["DA_INTENSITY"] = "";
	$placeHoldersdia["English"]["DA_INTENSITY"] = "";
	$fieldLabelsdia["English"]["DA_OVERTONE"] = "DA OVERTONE";
	$fieldToolTipsdia["English"]["DA_OVERTONE"] = "";
	$placeHoldersdia["English"]["DA_OVERTONE"] = "";
	$fieldLabelsdia["English"]["DA_COLOR"] = "DA COLOR";
	$fieldToolTipsdia["English"]["DA_COLOR"] = "";
	$placeHoldersdia["English"]["DA_COLOR"] = "";
	$fieldLabelsdia["English"]["DA_CLARITY"] = "DA CLARITY";
	$fieldToolTipsdia["English"]["DA_CLARITY"] = "";
	$placeHoldersdia["English"]["DA_CLARITY"] = "";
	$fieldLabelsdia["English"]["DA_CUT"] = "DA CUT";
	$fieldToolTipsdia["English"]["DA_CUT"] = "";
	$placeHoldersdia["English"]["DA_CUT"] = "";
	$fieldLabelsdia["English"]["DA_POLISH"] = "DA POLISH";
	$fieldToolTipsdia["English"]["DA_POLISH"] = "";
	$placeHoldersdia["English"]["DA_POLISH"] = "";
	$fieldLabelsdia["English"]["DA_SYMMETRY"] = "DA SYMMETRY";
	$fieldToolTipsdia["English"]["DA_SYMMETRY"] = "";
	$placeHoldersdia["English"]["DA_SYMMETRY"] = "";
	$fieldLabelsdia["English"]["DA_FLUO"] = "DA FLUO";
	$fieldToolTipsdia["English"]["DA_FLUO"] = "";
	$placeHoldersdia["English"]["DA_FLUO"] = "";
	$fieldLabelsdia["English"]["DA_COLOR_FLUO"] = "DA COLOR FLUO";
	$fieldToolTipsdia["English"]["DA_COLOR_FLUO"] = "";
	$placeHoldersdia["English"]["DA_COLOR_FLUO"] = "";
	$fieldLabelsdia["English"]["DA_WIDE"] = "DA WIDE";
	$fieldToolTipsdia["English"]["DA_WIDE"] = "";
	$placeHoldersdia["English"]["DA_WIDE"] = "";
	$fieldLabelsdia["English"]["DA_HIGH"] = "DA HIGH";
	$fieldToolTipsdia["English"]["DA_HIGH"] = "";
	$placeHoldersdia["English"]["DA_HIGH"] = "";
	$fieldLabelsdia["English"]["DA_DEPTH"] = "DA DEPTH";
	$fieldToolTipsdia["English"]["DA_DEPTH"] = "";
	$placeHoldersdia["English"]["DA_DEPTH"] = "";
	$fieldLabelsdia["English"]["DA_COMMENTSANDTOTAL"] = "DA COMMENTSANDTOTAL";
	$fieldToolTipsdia["English"]["DA_COMMENTSANDTOTAL"] = "";
	$placeHoldersdia["English"]["DA_COMMENTSANDTOTAL"] = "";
	$fieldLabelsdia["English"]["DA_APPRAISER"] = "DA APPRAISER";
	$fieldToolTipsdia["English"]["DA_APPRAISER"] = "";
	$placeHoldersdia["English"]["DA_APPRAISER"] = "";
	$fieldLabelsdia["English"]["DA_FRAPA"] = "DA FRAPA";
	$fieldToolTipsdia["English"]["DA_FRAPA"] = "";
	$placeHoldersdia["English"]["DA_FRAPA"] = "";
	$fieldLabelsdia["English"]["DA_RATE"] = "DA RATE";
	$fieldToolTipsdia["English"]["DA_RATE"] = "";
	$placeHoldersdia["English"]["DA_RATE"] = "";
	$fieldLabelsdia["English"]["DA_UNIT_PRICE_UNPLUG"] = "DA UNIT PRICE UNPLUG";
	$fieldToolTipsdia["English"]["DA_UNIT_PRICE_UNPLUG"] = "";
	$placeHoldersdia["English"]["DA_UNIT_PRICE_UNPLUG"] = "";
	$fieldLabelsdia["English"]["DA_YOURNAME"] = "DA YOURNAME";
	$fieldToolTipsdia["English"]["DA_YOURNAME"] = "";
	$placeHoldersdia["English"]["DA_YOURNAME"] = "";
	$fieldLabelsdia["English"]["DA_RAPAB"] = "DA RAPAB";
	$fieldToolTipsdia["English"]["DA_RAPAB"] = "";
	$placeHoldersdia["English"]["DA_RAPAB"] = "";
	$fieldLabelsdia["English"]["DA_GROSSPROFIT"] = "DA GROSSPROFIT";
	$fieldToolTipsdia["English"]["DA_GROSSPROFIT"] = "";
	$placeHoldersdia["English"]["DA_GROSSPROFIT"] = "";
	$fieldLabelsdia["English"]["DA_INTEREST_1"] = "DA INTEREST 1";
	$fieldToolTipsdia["English"]["DA_INTEREST_1"] = "";
	$placeHoldersdia["English"]["DA_INTEREST_1"] = "";
	$fieldLabelsdia["English"]["DA_no"] = "DA No";
	$fieldToolTipsdia["English"]["DA_no"] = "";
	$placeHoldersdia["English"]["DA_no"] = "";
	$fieldLabelsdia["English"]["Remarks"] = "Remarks";
	$fieldToolTipsdia["English"]["Remarks"] = "";
	$placeHoldersdia["English"]["Remarks"] = "";
	$fieldLabelsdia["English"]["Gram"] = "Gram";
	$fieldToolTipsdia["English"]["Gram"] = "";
	$placeHoldersdia["English"]["Gram"] = "";
	$fieldLabelsdia["English"]["unit"] = "Unit";
	$fieldToolTipsdia["English"]["unit"] = "";
	$placeHoldersdia["English"]["unit"] = "";
	$fieldLabelsdia["English"]["Appraiser"] = "Appraiser";
	$fieldToolTipsdia["English"]["Appraiser"] = "";
	$placeHoldersdia["English"]["Appraiser"] = "";
	$fieldLabelsdia["English"]["serial_number"] = "Serial Number";
	$fieldToolTipsdia["English"]["serial_number"] = "";
	$placeHoldersdia["English"]["serial_number"] = "";
	$fieldLabelsdia["English"]["ecc_seq"] = "Ecc Seq";
	$fieldToolTipsdia["English"]["ecc_seq"] = "";
	$placeHoldersdia["English"]["ecc_seq"] = "";
	$fieldLabelsdia["English"]["category_id"] = "Category Id";
	$fieldToolTipsdia["English"]["category_id"] = "";
	$placeHoldersdia["English"]["category_id"] = "";
	$fieldLabelsdia["English"]["sub_category_id1"] = "Sub Category Id1";
	$fieldToolTipsdia["English"]["sub_category_id1"] = "";
	$placeHoldersdia["English"]["sub_category_id1"] = "";
	$fieldLabelsdia["English"]["yahoo_sex"] = "Yahoo Sex";
	$fieldToolTipsdia["English"]["yahoo_sex"] = "";
	$placeHoldersdia["English"]["yahoo_sex"] = "";
	$fieldLabelsdia["English"]["product_num"] = "Product Num";
	$fieldToolTipsdia["English"]["product_num"] = "";
	$placeHoldersdia["English"]["product_num"] = "";
	$fieldLabelsdia["English"]["yahoo_junle"] = "Yahoo Junle";
	$fieldToolTipsdia["English"]["yahoo_junle"] = "";
	$placeHoldersdia["English"]["yahoo_junle"] = "";
	$fieldLabelsdia["English"]["title"] = "Title";
	$fieldToolTipsdia["English"]["title"] = "";
	$placeHoldersdia["English"]["title"] = "";
	$fieldLabelsdia["English"]["Parent_stone"] = "Parent Stone";
	$fieldToolTipsdia["English"]["Parent_stone"] = "";
	$placeHoldersdia["English"]["Parent_stone"] = "";
	$fieldLabelsdia["English"]["comment"] = "Comment";
	$fieldToolTipsdia["English"]["comment"] = "";
	$placeHoldersdia["English"]["comment"] = "";
	$fieldLabelsdia["English"]["tentou_label_output_flag"] = "Tentou Label Output Flag";
	$fieldToolTipsdia["English"]["tentou_label_output_flag"] = "";
	$placeHoldersdia["English"]["tentou_label_output_flag"] = "";
	$fieldLabelsdia["English"]["other_cost"] = "Other Cost";
	$fieldToolTipsdia["English"]["other_cost"] = "";
	$placeHoldersdia["English"]["other_cost"] = "";
	$fieldLabelsdia["English"]["identification_cost"] = "Identification Cost";
	$fieldToolTipsdia["English"]["identification_cost"] = "";
	$placeHoldersdia["English"]["identification_cost"] = "";
	$fieldLabelsdia["English"]["sales_cost"] = "Sales Cost";
	$fieldToolTipsdia["English"]["sales_cost"] = "";
	$placeHoldersdia["English"]["sales_cost"] = "";
	$fieldLabelsdia["English"]["DA_GROSSPROFIT_2"] = "DA GROSSPROFIT 2";
	$fieldToolTipsdia["English"]["DA_GROSSPROFIT_2"] = "";
	$placeHoldersdia["English"]["DA_GROSSPROFIT_2"] = "";
	$fieldLabelsdia["English"]["DA_INTEREST_2"] = "DA INTEREST 2";
	$fieldToolTipsdia["English"]["DA_INTEREST_2"] = "";
	$placeHoldersdia["English"]["DA_INTEREST_2"] = "";
	$fieldLabelsdia["English"]["mst_business_partner_id"] = "Mst Business Partner Id";
	$fieldToolTipsdia["English"]["mst_business_partner_id"] = "";
	$placeHoldersdia["English"]["mst_business_partner_id"] = "";
	if (count($fieldToolTipsdia["English"]))
		$tdatadia[".isUseToolTips"] = true;
}


	$tdatadia[".NCSearch"] = true;



$tdatadia[".shortTableName"] = "dia";
$tdatadia[".nSecOptions"] = 0;
$tdatadia[".recsPerRowPrint"] = 1;
$tdatadia[".mainTableOwnerID"] = "";
$tdatadia[".moveNext"] = 1;
$tdatadia[".entityType"] = 1;

$tdatadia[".strOriginalTableName"] = "shouhin";

	



$tdatadia[".showAddInPopup"] = false;

$tdatadia[".showEditInPopup"] = false;

$tdatadia[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatadia[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatadia[".fieldsForRegister"] = array();

$tdatadia[".listAjax"] = false;

	$tdatadia[".audit"] = true;

	$tdatadia[".locking"] = false;



$tdatadia[".list"] = true;

$tdatadia[".inlineEdit"] = true;


$tdatadia[".reorderRecordsByHeader"] = true;
$tdatadia[".createSortByDropdown"] = true;
$tdatadia[".strSortControlSettingsJSON"] = "";



$tdatadia[".inlineAdd"] = true;

$tdatadia[".import"] = true;

$tdatadia[".exportTo"] = true;


$tdatadia[".delete"] = true;

$tdatadia[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatadia[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatadia[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatadia[".searchSaving"] = false;
//

$tdatadia[".showSearchPanel"] = true;
		$tdatadia[".flexibleSearch"] = true;

$tdatadia[".isUseAjaxSuggest"] = true;

$tdatadia[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																							
					
																																																	
																																																																																																																																																																																																																																																																					
																																	
																																																																																																																																																																																																																																																																										

$tdatadia[".ajaxCodeSnippetAdded"] = false;

$tdatadia[".buttonsAdded"] = true;

$tdatadia[".addPageEvents"] = true;

// use timepicker for search panel
$tdatadia[".isUseTimeForSearch"] = false;



$tdatadia[".badgeColor"] = "6b8e23";


$tdatadia[".allSearchFields"] = array();
$tdatadia[".filterFields"] = array();
$tdatadia[".requiredSearchFields"] = array();

$tdatadia[".allSearchFields"][] = "mst_business_partner_id";
	$tdatadia[".allSearchFields"][] = "DA_INTEREST_2";
	$tdatadia[".allSearchFields"][] = "DA_GROSSPROFIT_2";
	$tdatadia[".allSearchFields"][] = "identification_cost";
	$tdatadia[".allSearchFields"][] = "sales_cost";
	$tdatadia[".allSearchFields"][] = "tentou_label_output_flag";
	$tdatadia[".allSearchFields"][] = "status";
	$tdatadia[".allSearchFields"][] = "ecc_id";
	$tdatadia[".allSearchFields"][] = "ecc_seq";
	$tdatadia[".allSearchFields"][] = "product_id";
	$tdatadia[".allSearchFields"][] = "satei_by";
	$tdatadia[".allSearchFields"][] = "satei_hi";
	$tdatadia[".allSearchFields"][] = "Parent_stone";
	$tdatadia[".allSearchFields"][] = "description";
	$tdatadia[".allSearchFields"][] = "DA_COLOR";
	$tdatadia[".allSearchFields"][] = "DA_CLARITY";
	$tdatadia[".allSearchFields"][] = "DA_CUT";
	$tdatadia[".allSearchFields"][] = "serial_number";
	$tdatadia[".allSearchFields"][] = "Appraiser";
	$tdatadia[".allSearchFields"][] = "Remarks";
	$tdatadia[".allSearchFields"][] = "comment";
	$tdatadia[".allSearchFields"][] = "DA_SYMMETRY";
	$tdatadia[".allSearchFields"][] = "DA_POLISH";
	$tdatadia[".allSearchFields"][] = "price";
	$tdatadia[".allSearchFields"][] = "DA_PER_CARAT";
	$tdatadia[".allSearchFields"][] = "DA_SHAPE";
	$tdatadia[".allSearchFields"][] = "DA_SELFGRES";
	$tdatadia[".allSearchFields"][] = "DA_ORIGINALGRADEMLIKENED";
	$tdatadia[".allSearchFields"][] = "DA_SUGARCANE";
	$tdatadia[".allSearchFields"][] = "DA_RAPA";
	$tdatadia[".allSearchFields"][] = "DA_DEPTH";
	$tdatadia[".allSearchFields"][] = "DA_HIGH";
	$tdatadia[".allSearchFields"][] = "DA_WIDE";
	$tdatadia[".allSearchFields"][] = "DA_COLOR_FLUO";
	$tdatadia[".allSearchFields"][] = "DA_FLUO";
	$tdatadia[".allSearchFields"][] = "DA_INTENSITY";
	$tdatadia[".allSearchFields"][] = "DA_OVERTONE";
	$tdatadia[".allSearchFields"][] = "DA_FRAPA";
	$tdatadia[".allSearchFields"][] = "DA_RATE";
	$tdatadia[".allSearchFields"][] = "DA_UNIT_PRICE_UNPLUG";
	$tdatadia[".allSearchFields"][] = "DA_RAPAB";
	$tdatadia[".allSearchFields"][] = "DA_GROSSPROFIT";
	$tdatadia[".allSearchFields"][] = "DA_INTEREST_1";
	$tdatadia[".allSearchFields"][] = "yahoo_sinaban";
	$tdatadia[".allSearchFields"][] = "nyuukin_price";
	$tdatadia[".allSearchFields"][] = "kanryou_henbi";
	$tdatadia[".allSearchFields"][] = "updated_by";
	$tdatadia[".allSearchFields"][] = "updated_at";
	

$tdatadia[".googleLikeFields"] = array();
$tdatadia[".googleLikeFields"][] = "product_id";
$tdatadia[".googleLikeFields"][] = "status";
$tdatadia[".googleLikeFields"][] = "yahoo_sinaban";
$tdatadia[".googleLikeFields"][] = "ecc_id";
$tdatadia[".googleLikeFields"][] = "satei_by";
$tdatadia[".googleLikeFields"][] = "satei_hi";
$tdatadia[".googleLikeFields"][] = "price";
$tdatadia[".googleLikeFields"][] = "DA_PER_CARAT";
$tdatadia[".googleLikeFields"][] = "DA_SHAPE";
$tdatadia[".googleLikeFields"][] = "DA_SELFGRES";
$tdatadia[".googleLikeFields"][] = "DA_ORIGINALGRADEMLIKENED";
$tdatadia[".googleLikeFields"][] = "DA_SUGARCANE";
$tdatadia[".googleLikeFields"][] = "DA_RAPA";
$tdatadia[".googleLikeFields"][] = "description";
$tdatadia[".googleLikeFields"][] = "DA_INTENSITY";
$tdatadia[".googleLikeFields"][] = "DA_OVERTONE";
$tdatadia[".googleLikeFields"][] = "DA_COLOR";
$tdatadia[".googleLikeFields"][] = "DA_CLARITY";
$tdatadia[".googleLikeFields"][] = "DA_CUT";
$tdatadia[".googleLikeFields"][] = "DA_POLISH";
$tdatadia[".googleLikeFields"][] = "DA_SYMMETRY";
$tdatadia[".googleLikeFields"][] = "DA_FLUO";
$tdatadia[".googleLikeFields"][] = "DA_COLOR_FLUO";
$tdatadia[".googleLikeFields"][] = "DA_WIDE";
$tdatadia[".googleLikeFields"][] = "DA_HIGH";
$tdatadia[".googleLikeFields"][] = "DA_DEPTH";
$tdatadia[".googleLikeFields"][] = "DA_FRAPA";
$tdatadia[".googleLikeFields"][] = "DA_RATE";
$tdatadia[".googleLikeFields"][] = "DA_UNIT_PRICE_UNPLUG";
$tdatadia[".googleLikeFields"][] = "DA_YOURNAME";
$tdatadia[".googleLikeFields"][] = "nyuukin_price";
$tdatadia[".googleLikeFields"][] = "DA_RAPAB";
$tdatadia[".googleLikeFields"][] = "DA_GROSSPROFIT";
$tdatadia[".googleLikeFields"][] = "DA_INTEREST_1";
$tdatadia[".googleLikeFields"][] = "updated_by";
$tdatadia[".googleLikeFields"][] = "updated_at";
$tdatadia[".googleLikeFields"][] = "kanryou_henbi";
$tdatadia[".googleLikeFields"][] = "Remarks";
$tdatadia[".googleLikeFields"][] = "Appraiser";
$tdatadia[".googleLikeFields"][] = "serial_number";
$tdatadia[".googleLikeFields"][] = "ecc_seq";
$tdatadia[".googleLikeFields"][] = "Parent_stone";
$tdatadia[".googleLikeFields"][] = "comment";
$tdatadia[".googleLikeFields"][] = "tentou_label_output_flag";
$tdatadia[".googleLikeFields"][] = "other_cost";
$tdatadia[".googleLikeFields"][] = "identification_cost";
$tdatadia[".googleLikeFields"][] = "sales_cost";
$tdatadia[".googleLikeFields"][] = "DA_GROSSPROFIT_2";
$tdatadia[".googleLikeFields"][] = "DA_INTEREST_2";
$tdatadia[".googleLikeFields"][] = "mst_business_partner_id";

$tdatadia[".panelSearchFields"] = array();
$tdatadia[".searchPanelOptions"] = array();
$tdatadia[".panelSearchFields"][] = "status";
	$tdatadia[".panelSearchFields"][] = "ecc_id";
	$tdatadia[".panelSearchFields"][] = "product_id";
	$tdatadia[".panelSearchFields"][] = "satei_by";
	$tdatadia[".panelSearchFields"][] = "satei_hi";
	$tdatadia[".panelSearchFields"][] = "Parent_stone";
	$tdatadia[".panelSearchFields"][] = "description";
	$tdatadia[".panelSearchFields"][] = "DA_COLOR";
	$tdatadia[".panelSearchFields"][] = "DA_CLARITY";
	$tdatadia[".panelSearchFields"][] = "DA_CUT";
	$tdatadia[".panelSearchFields"][] = "updated_at";
	
$tdatadia[".advSearchFields"] = array();
$tdatadia[".advSearchFields"][] = "mst_business_partner_id";
$tdatadia[".advSearchFields"][] = "DA_INTEREST_2";
$tdatadia[".advSearchFields"][] = "DA_GROSSPROFIT_2";
$tdatadia[".advSearchFields"][] = "identification_cost";
$tdatadia[".advSearchFields"][] = "sales_cost";
$tdatadia[".advSearchFields"][] = "tentou_label_output_flag";
$tdatadia[".advSearchFields"][] = "status";
$tdatadia[".advSearchFields"][] = "ecc_id";
$tdatadia[".advSearchFields"][] = "ecc_seq";
$tdatadia[".advSearchFields"][] = "product_id";
$tdatadia[".advSearchFields"][] = "satei_by";
$tdatadia[".advSearchFields"][] = "satei_hi";
$tdatadia[".advSearchFields"][] = "Parent_stone";
$tdatadia[".advSearchFields"][] = "description";
$tdatadia[".advSearchFields"][] = "DA_COLOR";
$tdatadia[".advSearchFields"][] = "DA_CLARITY";
$tdatadia[".advSearchFields"][] = "DA_CUT";
$tdatadia[".advSearchFields"][] = "serial_number";
$tdatadia[".advSearchFields"][] = "Appraiser";
$tdatadia[".advSearchFields"][] = "Remarks";
$tdatadia[".advSearchFields"][] = "comment";
$tdatadia[".advSearchFields"][] = "DA_SYMMETRY";
$tdatadia[".advSearchFields"][] = "DA_POLISH";
$tdatadia[".advSearchFields"][] = "price";
$tdatadia[".advSearchFields"][] = "DA_PER_CARAT";
$tdatadia[".advSearchFields"][] = "DA_SHAPE";
$tdatadia[".advSearchFields"][] = "DA_SELFGRES";
$tdatadia[".advSearchFields"][] = "DA_ORIGINALGRADEMLIKENED";
$tdatadia[".advSearchFields"][] = "DA_SUGARCANE";
$tdatadia[".advSearchFields"][] = "DA_RAPA";
$tdatadia[".advSearchFields"][] = "DA_DEPTH";
$tdatadia[".advSearchFields"][] = "DA_HIGH";
$tdatadia[".advSearchFields"][] = "DA_WIDE";
$tdatadia[".advSearchFields"][] = "DA_COLOR_FLUO";
$tdatadia[".advSearchFields"][] = "DA_FLUO";
$tdatadia[".advSearchFields"][] = "DA_INTENSITY";
$tdatadia[".advSearchFields"][] = "DA_OVERTONE";
$tdatadia[".advSearchFields"][] = "DA_FRAPA";
$tdatadia[".advSearchFields"][] = "DA_RATE";
$tdatadia[".advSearchFields"][] = "DA_UNIT_PRICE_UNPLUG";
$tdatadia[".advSearchFields"][] = "DA_RAPAB";
$tdatadia[".advSearchFields"][] = "DA_GROSSPROFIT";
$tdatadia[".advSearchFields"][] = "DA_INTEREST_1";
$tdatadia[".advSearchFields"][] = "yahoo_sinaban";
$tdatadia[".advSearchFields"][] = "nyuukin_price";
$tdatadia[".advSearchFields"][] = "kanryou_henbi";
$tdatadia[".advSearchFields"][] = "updated_by";
$tdatadia[".advSearchFields"][] = "updated_at";

$tdatadia[".tableType"] = "list";

$tdatadia[".printerPageOrientation"] = 0;
$tdatadia[".nPrinterPageScale"] = 100;

$tdatadia[".nPrinterSplitRecords"] = 40;

$tdatadia[".nPrinterPDFSplitRecords"] = 40;



$tdatadia[".geocodingEnabled"] = false;





$tdatadia[".listGridLayout"] = 3;





// view page pdf

// print page pdf

$tdatadia[".totalsFields"] = array();
$tdatadia[".totalsFields"][] = array(
	"fName" => "price",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');
$tdatadia[".totalsFields"][] = array(
	"fName" => "nyuukin_price",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');
$tdatadia[".totalsFields"][] = array(
	"fName" => "DA_INTEREST_1",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');

$tdatadia[".pageSize"] = 20;

$tdatadia[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `shouhin`.`product_id` DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatadia[".strOrderBy"] = $tstrOrderBy;

$tdatadia[".orderindexes"] = array();
$tdatadia[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "`shouhin`.`product_id`");

$tdatadia[".sqlHead"] = "SELECT `shouhin`.`product_id`,  `shouhin`.`status`,  `shouhin`.`yahoo_sinaban`,  `shouhin`.`ecc_id`,  `shouhin`.`satei_by`,  `shouhin`.`satei_hi`,  `shouhin`.`DA_WEIGHT`,  `shouhin`.`price`,  `shouhin`.`DA_PER_CARAT`,  `shouhin`.`DA_SHAPE`,  `shouhin`.`DA_SELFGRES`,  `shouhin`.`DA_ORIGINALGRADEMLIKENED`,  `shouhin`.`DA_SUGARCANE`,  `shouhin`.`DA_RAPA`,  `shouhin`.`description`,  `shouhin`.`DA_INTENSITY`,  `shouhin`.`DA_OVERTONE`,  `shouhin`.`DA_COLOR`,  `shouhin`.`DA_CLARITY`,  `shouhin`.`DA_CUT`,  `shouhin`.`DA_POLISH`,  `shouhin`.`DA_SYMMETRY`,  `shouhin`.`DA_FLUO`,  `shouhin`.`DA_COLOR_FLUO`,  `shouhin`.`DA_WIDE`,  `shouhin`.`DA_HIGH`,  `shouhin`.`DA_DEPTH`,  `shouhin`.`DA_COMMENTSANDTOTAL`,  `shouhin`.`DA_APPRAISER`,  `shouhin`.`DA_FRAPA`,  `shouhin`.`DA_RATE`,  `shouhin`.`DA_UNIT_PRICE_UNPLUG`,  `shouhin`.`DA_YOURNAME`,  `shouhin`.`nyuukin_price`,  `shouhin`.`DA_RAPAB`,  `shouhin`.`DA_GROSSPROFIT`,  `shouhin`.`DA_INTEREST_1`,  `shouhin`.`DA_no`,  `shouhin`.`updated_by`,  `shouhin`.`updated_at`,  `shouhin`.`kanryou_henbi`,  `shouhin`.`Remarks`,  `shouhin`.`Gram`,  `shouhin`.`unit`,  `shouhin`.`Appraiser`,  `shouhin`.`serial_number`,  `Eoc`.`ecc_seq`,  `shouhin`.`category_id`,  `shouhin`.`sub_category_id1`,  `shouhin`.`yahoo_sex`,  `shouhin`.`product_num`,  `shouhin`.`yahoo_junle`,  `shouhin`.`title`,  `shouhin`.`Parent_stone`,  `shouhin`.`comment`,  `shouhin`.`tentou_label_output_flag`,  `shouhin`.`other_cost`,  `shouhin`.`identification_cost`,  `shouhin`.`sales_cost`,  `shouhin`.`DA_GROSSPROFIT_2`,  `shouhin`.`DA_INTEREST_2`,  `shouhin`.`mst_business_partner_id`";
$tdatadia[".sqlFrom"] = "FROM `shouhin`  LEFT OUTER JOIN `Eoc` ON `shouhin`.`ecc_id` = `Eoc`.`ecc_id`";
$tdatadia[".sqlWhereExpr"] = "(`shouhin`.`status` = 122) OR (`shouhin`.`status` = 120) OR (`shouhin`.`status` = 127) OR (`shouhin`.`status` = 128) OR (`shouhin`.`status` = 129) OR (`shouhin`.`status` = 134)";
$tdatadia[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadia[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadia[".arrGroupsPerPage"] = $arrGPP;

$tdatadia[".highlightSearchResults"] = true;

$tableKeysdia = array();
$tableKeysdia[] = "product_id";
$tdatadia[".Keys"] = $tableKeysdia;

$tdatadia[".listFields"] = array();
$tdatadia[".listFields"][] = "tentou_label_output_flag";
$tdatadia[".listFields"][] = "status";
$tdatadia[".listFields"][] = "yahoo_sinaban";
$tdatadia[".listFields"][] = "ecc_id";
$tdatadia[".listFields"][] = "ecc_seq";
$tdatadia[".listFields"][] = "product_id";
$tdatadia[".listFields"][] = "satei_by";
$tdatadia[".listFields"][] = "satei_hi";
$tdatadia[".listFields"][] = "Parent_stone";
$tdatadia[".listFields"][] = "DA_INTENSITY";
$tdatadia[".listFields"][] = "DA_OVERTONE";
$tdatadia[".listFields"][] = "DA_COLOR";
$tdatadia[".listFields"][] = "DA_CLARITY";
$tdatadia[".listFields"][] = "DA_CUT";
$tdatadia[".listFields"][] = "DA_POLISH";
$tdatadia[".listFields"][] = "DA_SYMMETRY";
$tdatadia[".listFields"][] = "DA_FLUO";
$tdatadia[".listFields"][] = "DA_COLOR_FLUO";
$tdatadia[".listFields"][] = "price";
$tdatadia[".listFields"][] = "DA_PER_CARAT";
$tdatadia[".listFields"][] = "DA_RAPA";
$tdatadia[".listFields"][] = "DA_FRAPA";
$tdatadia[".listFields"][] = "DA_RATE";
$tdatadia[".listFields"][] = "DA_UNIT_PRICE_UNPLUG";
$tdatadia[".listFields"][] = "nyuukin_price";
$tdatadia[".listFields"][] = "DA_RAPAB";
$tdatadia[".listFields"][] = "DA_INTEREST_1";
$tdatadia[".listFields"][] = "DA_GROSSPROFIT";
$tdatadia[".listFields"][] = "identification_cost";
$tdatadia[".listFields"][] = "sales_cost";
$tdatadia[".listFields"][] = "DA_INTEREST_2";
$tdatadia[".listFields"][] = "DA_GROSSPROFIT_2";
$tdatadia[".listFields"][] = "DA_WIDE";
$tdatadia[".listFields"][] = "DA_HIGH";
$tdatadia[".listFields"][] = "DA_DEPTH";
$tdatadia[".listFields"][] = "Remarks";
$tdatadia[".listFields"][] = "comment";
$tdatadia[".listFields"][] = "Appraiser";
$tdatadia[".listFields"][] = "serial_number";
$tdatadia[".listFields"][] = "mst_business_partner_id";
$tdatadia[".listFields"][] = "DA_SHAPE";
$tdatadia[".listFields"][] = "DA_SUGARCANE";
$tdatadia[".listFields"][] = "description";
$tdatadia[".listFields"][] = "DA_ORIGINALGRADEMLIKENED";
$tdatadia[".listFields"][] = "DA_SELFGRES";
$tdatadia[".listFields"][] = "updated_by";
$tdatadia[".listFields"][] = "updated_at";
$tdatadia[".listFields"][] = "kanryou_henbi";

$tdatadia[".hideMobileList"] = array();


$tdatadia[".viewFields"] = array();

$tdatadia[".addFields"] = array();

$tdatadia[".masterListFields"] = array();
$tdatadia[".masterListFields"][] = "DA_WEIGHT";
$tdatadia[".masterListFields"][] = "DA_PER_CARAT";
$tdatadia[".masterListFields"][] = "DA_SHAPE";
$tdatadia[".masterListFields"][] = "DA_SELFGRES";
$tdatadia[".masterListFields"][] = "DA_ORIGINALGRADEMLIKENED";
$tdatadia[".masterListFields"][] = "DA_SUGARCANE";
$tdatadia[".masterListFields"][] = "DA_RAPA";
$tdatadia[".masterListFields"][] = "DA_INTENSITY";
$tdatadia[".masterListFields"][] = "DA_OVERTONE";
$tdatadia[".masterListFields"][] = "DA_COLOR";
$tdatadia[".masterListFields"][] = "DA_CLARITY";
$tdatadia[".masterListFields"][] = "DA_CUT";
$tdatadia[".masterListFields"][] = "DA_POLISH";
$tdatadia[".masterListFields"][] = "DA_SYMMETRY";
$tdatadia[".masterListFields"][] = "DA_FLUO";
$tdatadia[".masterListFields"][] = "DA_COLOR_FLUO";
$tdatadia[".masterListFields"][] = "DA_WIDE";
$tdatadia[".masterListFields"][] = "DA_HIGH";
$tdatadia[".masterListFields"][] = "DA_DEPTH";
$tdatadia[".masterListFields"][] = "DA_COMMENTSANDTOTAL";
$tdatadia[".masterListFields"][] = "DA_APPRAISER";
$tdatadia[".masterListFields"][] = "DA_FRAPA";
$tdatadia[".masterListFields"][] = "DA_RATE";
$tdatadia[".masterListFields"][] = "DA_UNIT_PRICE_UNPLUG";
$tdatadia[".masterListFields"][] = "DA_YOURNAME";
$tdatadia[".masterListFields"][] = "DA_RAPAB";
$tdatadia[".masterListFields"][] = "DA_GROSSPROFIT";
$tdatadia[".masterListFields"][] = "DA_INTEREST_1";
$tdatadia[".masterListFields"][] = "DA_no";
$tdatadia[".masterListFields"][] = "Remarks";
$tdatadia[".masterListFields"][] = "Gram";
$tdatadia[".masterListFields"][] = "unit";
$tdatadia[".masterListFields"][] = "Appraiser";
$tdatadia[".masterListFields"][] = "serial_number";
$tdatadia[".masterListFields"][] = "ecc_seq";
$tdatadia[".masterListFields"][] = "category_id";
$tdatadia[".masterListFields"][] = "sub_category_id1";
$tdatadia[".masterListFields"][] = "yahoo_sex";
$tdatadia[".masterListFields"][] = "product_num";
$tdatadia[".masterListFields"][] = "yahoo_junle";
$tdatadia[".masterListFields"][] = "title";
$tdatadia[".masterListFields"][] = "Parent_stone";
$tdatadia[".masterListFields"][] = "comment";
$tdatadia[".masterListFields"][] = "tentou_label_output_flag";
$tdatadia[".masterListFields"][] = "other_cost";
$tdatadia[".masterListFields"][] = "identification_cost";
$tdatadia[".masterListFields"][] = "sales_cost";
$tdatadia[".masterListFields"][] = "DA_GROSSPROFIT_2";
$tdatadia[".masterListFields"][] = "DA_INTEREST_2";
$tdatadia[".masterListFields"][] = "mst_business_partner_id";
$tdatadia[".masterListFields"][] = "status";
$tdatadia[".masterListFields"][] = "satei_by";
$tdatadia[".masterListFields"][] = "product_id";
$tdatadia[".masterListFields"][] = "yahoo_sinaban";
$tdatadia[".masterListFields"][] = "ecc_id";
$tdatadia[".masterListFields"][] = "price";
$tdatadia[".masterListFields"][] = "description";
$tdatadia[".masterListFields"][] = "updated_at";
$tdatadia[".masterListFields"][] = "nyuukin_price";
$tdatadia[".masterListFields"][] = "updated_by";
$tdatadia[".masterListFields"][] = "kanryou_henbi";
$tdatadia[".masterListFields"][] = "satei_hi";

$tdatadia[".inlineAddFields"] = array();
$tdatadia[".inlineAddFields"][] = "tentou_label_output_flag";
$tdatadia[".inlineAddFields"][] = "status";
$tdatadia[".inlineAddFields"][] = "satei_by";
$tdatadia[".inlineAddFields"][] = "DA_INTENSITY";
$tdatadia[".inlineAddFields"][] = "DA_OVERTONE";
$tdatadia[".inlineAddFields"][] = "DA_COLOR";
$tdatadia[".inlineAddFields"][] = "DA_CLARITY";
$tdatadia[".inlineAddFields"][] = "DA_CUT";
$tdatadia[".inlineAddFields"][] = "DA_POLISH";
$tdatadia[".inlineAddFields"][] = "DA_SYMMETRY";
$tdatadia[".inlineAddFields"][] = "DA_FLUO";
$tdatadia[".inlineAddFields"][] = "DA_COLOR_FLUO";
$tdatadia[".inlineAddFields"][] = "price";
$tdatadia[".inlineAddFields"][] = "DA_PER_CARAT";
$tdatadia[".inlineAddFields"][] = "DA_RAPA";
$tdatadia[".inlineAddFields"][] = "DA_FRAPA";
$tdatadia[".inlineAddFields"][] = "DA_RATE";
$tdatadia[".inlineAddFields"][] = "DA_UNIT_PRICE_UNPLUG";
$tdatadia[".inlineAddFields"][] = "nyuukin_price";
$tdatadia[".inlineAddFields"][] = "DA_RAPAB";
$tdatadia[".inlineAddFields"][] = "DA_INTEREST_1";
$tdatadia[".inlineAddFields"][] = "DA_GROSSPROFIT";
$tdatadia[".inlineAddFields"][] = "identification_cost";
$tdatadia[".inlineAddFields"][] = "DA_INTEREST_2";
$tdatadia[".inlineAddFields"][] = "DA_GROSSPROFIT_2";
$tdatadia[".inlineAddFields"][] = "DA_WIDE";
$tdatadia[".inlineAddFields"][] = "DA_HIGH";
$tdatadia[".inlineAddFields"][] = "DA_DEPTH";
$tdatadia[".inlineAddFields"][] = "Remarks";
$tdatadia[".inlineAddFields"][] = "comment";
$tdatadia[".inlineAddFields"][] = "Appraiser";
$tdatadia[".inlineAddFields"][] = "serial_number";
$tdatadia[".inlineAddFields"][] = "mst_business_partner_id";
$tdatadia[".inlineAddFields"][] = "DA_SHAPE";
$tdatadia[".inlineAddFields"][] = "DA_SUGARCANE";
$tdatadia[".inlineAddFields"][] = "description";
$tdatadia[".inlineAddFields"][] = "DA_ORIGINALGRADEMLIKENED";
$tdatadia[".inlineAddFields"][] = "DA_SELFGRES";

$tdatadia[".editFields"] = array();

$tdatadia[".inlineEditFields"] = array();
$tdatadia[".inlineEditFields"][] = "tentou_label_output_flag";
$tdatadia[".inlineEditFields"][] = "status";
$tdatadia[".inlineEditFields"][] = "satei_by";
$tdatadia[".inlineEditFields"][] = "DA_INTENSITY";
$tdatadia[".inlineEditFields"][] = "DA_OVERTONE";
$tdatadia[".inlineEditFields"][] = "DA_COLOR";
$tdatadia[".inlineEditFields"][] = "DA_CLARITY";
$tdatadia[".inlineEditFields"][] = "DA_CUT";
$tdatadia[".inlineEditFields"][] = "DA_POLISH";
$tdatadia[".inlineEditFields"][] = "DA_SYMMETRY";
$tdatadia[".inlineEditFields"][] = "DA_FLUO";
$tdatadia[".inlineEditFields"][] = "DA_COLOR_FLUO";
$tdatadia[".inlineEditFields"][] = "price";
$tdatadia[".inlineEditFields"][] = "DA_PER_CARAT";
$tdatadia[".inlineEditFields"][] = "DA_RAPA";
$tdatadia[".inlineEditFields"][] = "DA_FRAPA";
$tdatadia[".inlineEditFields"][] = "DA_RATE";
$tdatadia[".inlineEditFields"][] = "DA_UNIT_PRICE_UNPLUG";
$tdatadia[".inlineEditFields"][] = "nyuukin_price";
$tdatadia[".inlineEditFields"][] = "DA_RAPAB";
$tdatadia[".inlineEditFields"][] = "DA_INTEREST_1";
$tdatadia[".inlineEditFields"][] = "DA_GROSSPROFIT";
$tdatadia[".inlineEditFields"][] = "identification_cost";
$tdatadia[".inlineEditFields"][] = "DA_INTEREST_2";
$tdatadia[".inlineEditFields"][] = "DA_GROSSPROFIT_2";
$tdatadia[".inlineEditFields"][] = "DA_WIDE";
$tdatadia[".inlineEditFields"][] = "DA_HIGH";
$tdatadia[".inlineEditFields"][] = "DA_DEPTH";
$tdatadia[".inlineEditFields"][] = "Remarks";
$tdatadia[".inlineEditFields"][] = "comment";
$tdatadia[".inlineEditFields"][] = "Appraiser";
$tdatadia[".inlineEditFields"][] = "serial_number";
$tdatadia[".inlineEditFields"][] = "mst_business_partner_id";
$tdatadia[".inlineEditFields"][] = "DA_SHAPE";
$tdatadia[".inlineEditFields"][] = "DA_SUGARCANE";
$tdatadia[".inlineEditFields"][] = "description";
$tdatadia[".inlineEditFields"][] = "DA_ORIGINALGRADEMLIKENED";
$tdatadia[".inlineEditFields"][] = "DA_SELFGRES";

$tdatadia[".updateSelectedFields"] = array();


$tdatadia[".exportFields"] = array();
$tdatadia[".exportFields"][] = "tentou_label_output_flag";
$tdatadia[".exportFields"][] = "status";
$tdatadia[".exportFields"][] = "yahoo_sinaban";
$tdatadia[".exportFields"][] = "ecc_id";
$tdatadia[".exportFields"][] = "ecc_seq";
$tdatadia[".exportFields"][] = "product_id";
$tdatadia[".exportFields"][] = "satei_by";
$tdatadia[".exportFields"][] = "satei_hi";
$tdatadia[".exportFields"][] = "Parent_stone";
$tdatadia[".exportFields"][] = "DA_INTENSITY";
$tdatadia[".exportFields"][] = "DA_OVERTONE";
$tdatadia[".exportFields"][] = "DA_COLOR";
$tdatadia[".exportFields"][] = "DA_CLARITY";
$tdatadia[".exportFields"][] = "DA_CUT";
$tdatadia[".exportFields"][] = "DA_POLISH";
$tdatadia[".exportFields"][] = "DA_SYMMETRY";
$tdatadia[".exportFields"][] = "DA_FLUO";
$tdatadia[".exportFields"][] = "DA_COLOR_FLUO";
$tdatadia[".exportFields"][] = "price";
$tdatadia[".exportFields"][] = "DA_PER_CARAT";
$tdatadia[".exportFields"][] = "DA_RAPA";
$tdatadia[".exportFields"][] = "DA_FRAPA";
$tdatadia[".exportFields"][] = "DA_RATE";
$tdatadia[".exportFields"][] = "DA_UNIT_PRICE_UNPLUG";
$tdatadia[".exportFields"][] = "nyuukin_price";
$tdatadia[".exportFields"][] = "DA_RAPAB";
$tdatadia[".exportFields"][] = "DA_INTEREST_1";
$tdatadia[".exportFields"][] = "DA_GROSSPROFIT";
$tdatadia[".exportFields"][] = "identification_cost";
$tdatadia[".exportFields"][] = "sales_cost";
$tdatadia[".exportFields"][] = "DA_INTEREST_2";
$tdatadia[".exportFields"][] = "DA_GROSSPROFIT_2";
$tdatadia[".exportFields"][] = "DA_WIDE";
$tdatadia[".exportFields"][] = "DA_HIGH";
$tdatadia[".exportFields"][] = "DA_DEPTH";
$tdatadia[".exportFields"][] = "Remarks";
$tdatadia[".exportFields"][] = "comment";
$tdatadia[".exportFields"][] = "Appraiser";
$tdatadia[".exportFields"][] = "serial_number";
$tdatadia[".exportFields"][] = "mst_business_partner_id";
$tdatadia[".exportFields"][] = "DA_SHAPE";
$tdatadia[".exportFields"][] = "DA_SUGARCANE";
$tdatadia[".exportFields"][] = "description";
$tdatadia[".exportFields"][] = "DA_ORIGINALGRADEMLIKENED";
$tdatadia[".exportFields"][] = "DA_SELFGRES";
$tdatadia[".exportFields"][] = "updated_by";
$tdatadia[".exportFields"][] = "updated_at";
$tdatadia[".exportFields"][] = "kanryou_henbi";

$tdatadia[".importFields"] = array();
$tdatadia[".importFields"][] = "product_id";
$tdatadia[".importFields"][] = "status";
$tdatadia[".importFields"][] = "yahoo_sinaban";
$tdatadia[".importFields"][] = "ecc_id";
$tdatadia[".importFields"][] = "satei_by";
$tdatadia[".importFields"][] = "satei_hi";
$tdatadia[".importFields"][] = "price";
$tdatadia[".importFields"][] = "DA_PER_CARAT";
$tdatadia[".importFields"][] = "DA_SHAPE";
$tdatadia[".importFields"][] = "DA_SELFGRES";
$tdatadia[".importFields"][] = "DA_ORIGINALGRADEMLIKENED";
$tdatadia[".importFields"][] = "DA_SUGARCANE";
$tdatadia[".importFields"][] = "DA_RAPA";
$tdatadia[".importFields"][] = "description";
$tdatadia[".importFields"][] = "DA_INTENSITY";
$tdatadia[".importFields"][] = "DA_OVERTONE";
$tdatadia[".importFields"][] = "DA_COLOR";
$tdatadia[".importFields"][] = "DA_CLARITY";
$tdatadia[".importFields"][] = "DA_CUT";
$tdatadia[".importFields"][] = "DA_POLISH";
$tdatadia[".importFields"][] = "DA_SYMMETRY";
$tdatadia[".importFields"][] = "DA_FLUO";
$tdatadia[".importFields"][] = "DA_COLOR_FLUO";
$tdatadia[".importFields"][] = "DA_WIDE";
$tdatadia[".importFields"][] = "DA_HIGH";
$tdatadia[".importFields"][] = "DA_DEPTH";
$tdatadia[".importFields"][] = "DA_FRAPA";
$tdatadia[".importFields"][] = "DA_RATE";
$tdatadia[".importFields"][] = "DA_UNIT_PRICE_UNPLUG";
$tdatadia[".importFields"][] = "nyuukin_price";
$tdatadia[".importFields"][] = "DA_RAPAB";
$tdatadia[".importFields"][] = "DA_GROSSPROFIT";
$tdatadia[".importFields"][] = "DA_INTEREST_1";
$tdatadia[".importFields"][] = "updated_by";
$tdatadia[".importFields"][] = "updated_at";
$tdatadia[".importFields"][] = "kanryou_henbi";
$tdatadia[".importFields"][] = "Remarks";
$tdatadia[".importFields"][] = "Appraiser";
$tdatadia[".importFields"][] = "serial_number";
$tdatadia[".importFields"][] = "ecc_seq";
$tdatadia[".importFields"][] = "Parent_stone";
$tdatadia[".importFields"][] = "comment";
$tdatadia[".importFields"][] = "tentou_label_output_flag";
$tdatadia[".importFields"][] = "identification_cost";
$tdatadia[".importFields"][] = "DA_GROSSPROFIT_2";
$tdatadia[".importFields"][] = "DA_INTEREST_2";
$tdatadia[".importFields"][] = "mst_business_partner_id";

$tdatadia[".printFields"] = array();

//	product_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "product_id";
	$fdata["GoodName"] = "product_id";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("dia","product_id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "product_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`product_id`";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdatadia["product_id"] = $fdata;
//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("dia","status");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "status";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`status`";

	
	
				$fdata["FieldPermissions"] = true;

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

	
	$edata["LookupOrderBy"] = "dia";

	
	
	
	

	
	
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




	$tdatadia["status"] = $fdata;
//	yahoo_sinaban
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "yahoo_sinaban";
	$fdata["GoodName"] = "yahoo_sinaban";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("dia","yahoo_sinaban");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "yahoo_sinaban";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`yahoo_sinaban`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

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
			$edata["EditParams"].= " maxlength=11";

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




	$tdatadia["yahoo_sinaban"] = $fdata;
//	ecc_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "ecc_id";
	$fdata["GoodName"] = "ecc_id";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("dia","ecc_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ecc_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`ecc_id`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

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




	$tdatadia["ecc_id"] = $fdata;
//	satei_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "satei_by";
	$fdata["GoodName"] = "satei_by";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("dia","satei_by");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "satei_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`satei_by`";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdatadia["satei_by"] = $fdata;
//	satei_hi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "satei_hi";
	$fdata["GoodName"] = "satei_hi";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("dia","satei_hi");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "satei_hi";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`satei_hi`";

	
	
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




	$tdatadia["satei_hi"] = $fdata;
//	DA_WEIGHT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "DA_WEIGHT";
	$fdata["GoodName"] = "DA_WEIGHT";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("dia","DA_WEIGHT");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "DA_WEIGHT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`DA_WEIGHT`";

	
	
			
				$fdata["UploadFolder"] = "files";

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
			$edata["EditParams"].= " maxlength=5";

		$edata["controlWidth"] = 70;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatadia["DA_WEIGHT"] = $fdata;
//	price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "price";
	$fdata["GoodName"] = "price";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("dia","price");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "price";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`price`";

	
	
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




	$tdatadia["price"] = $fdata;
//	DA_PER_CARAT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "DA_PER_CARAT";
	$fdata["GoodName"] = "DA_PER_CARAT";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("dia","DA_PER_CARAT");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DA_PER_CARAT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`DA_PER_CARAT`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

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




	$tdatadia["DA_PER_CARAT"] = $fdata;
//	DA_SHAPE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "DA_SHAPE";
	$fdata["GoodName"] = "DA_SHAPE";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("dia","DA_SHAPE");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DA_SHAPE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`DA_SHAPE`";

	
	
				$fdata["FieldPermissions"] = true;

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
	$edata["LookupTable"] = "_DIA_DA_SHAPE";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "name";
	$edata["LinkFieldType"] = 200;
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




	$tdatadia["DA_SHAPE"] = $fdata;
//	DA_SELFGRES
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "DA_SELFGRES";
	$fdata["GoodName"] = "DA_SELFGRES";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("dia","DA_SELFGRES");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DA_SELFGRES";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`DA_SELFGRES`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

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




	$tdatadia["DA_SELFGRES"] = $fdata;
//	DA_ORIGINALGRADEMLIKENED
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "DA_ORIGINALGRADEMLIKENED";
	$fdata["GoodName"] = "DA_ORIGINALGRADEMLIKENED";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("dia","DA_ORIGINALGRADEMLIKENED");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DA_ORIGINALGRADEMLIKENED";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`DA_ORIGINALGRADEMLIKENED`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

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




	$tdatadia["DA_ORIGINALGRADEMLIKENED"] = $fdata;
//	DA_SUGARCANE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "DA_SUGARCANE";
	$fdata["GoodName"] = "DA_SUGARCANE";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("dia","DA_SUGARCANE");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DA_SUGARCANE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`DA_SUGARCANE`";

	
	
				$fdata["FieldPermissions"] = true;

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
	$edata["LookupTable"] = "_DIA_DA_SUGARCANE";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "name";
	$edata["LinkFieldType"] = 200;
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




	$tdatadia["DA_SUGARCANE"] = $fdata;
//	DA_RAPA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "DA_RAPA";
	$fdata["GoodName"] = "DA_RAPA";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("dia","DA_RAPA");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DA_RAPA";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`DA_RAPA`";

	
	
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




	$tdatadia["DA_RAPA"] = $fdata;
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("dia","description");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "description";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`description`";

	
	
				$fdata["FieldPermissions"] = true;

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

	
	
	
				$edata["nRows"] = 40;
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




	$tdatadia["description"] = $fdata;
//	DA_INTENSITY
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "DA_INTENSITY";
	$fdata["GoodName"] = "DA_INTENSITY";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("dia","DA_INTENSITY");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DA_INTENSITY";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`DA_INTENSITY`";

	
	
				$fdata["FieldPermissions"] = true;

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
	$edata["LinkFieldType"] = 3;
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




	$tdatadia["DA_INTENSITY"] = $fdata;
//	DA_OVERTONE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "DA_OVERTONE";
	$fdata["GoodName"] = "DA_OVERTONE";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("dia","DA_OVERTONE");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DA_OVERTONE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`DA_OVERTONE`";

	
	
				$fdata["FieldPermissions"] = true;

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
	$edata["LinkFieldType"] = 3;
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




	$tdatadia["DA_OVERTONE"] = $fdata;
//	DA_COLOR
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "DA_COLOR";
	$fdata["GoodName"] = "DA_COLOR";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("dia","DA_COLOR");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DA_COLOR";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`DA_COLOR`";

	
	
				$fdata["FieldPermissions"] = true;

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
	$edata["LinkFieldType"] = 200;
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




	$tdatadia["DA_COLOR"] = $fdata;
//	DA_CLARITY
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "DA_CLARITY";
	$fdata["GoodName"] = "DA_CLARITY";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("dia","DA_CLARITY");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DA_CLARITY";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`DA_CLARITY`";

	
	
				$fdata["FieldPermissions"] = true;

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
	$edata["LinkFieldType"] = 200;
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




	$tdatadia["DA_CLARITY"] = $fdata;
//	DA_CUT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "DA_CUT";
	$fdata["GoodName"] = "DA_CUT";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("dia","DA_CUT");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DA_CUT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`DA_CUT`";

	
	
				$fdata["FieldPermissions"] = true;

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
	$edata["LinkFieldType"] = 200;
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




	$tdatadia["DA_CUT"] = $fdata;
//	DA_POLISH
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "DA_POLISH";
	$fdata["GoodName"] = "DA_POLISH";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("dia","DA_POLISH");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DA_POLISH";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`DA_POLISH`";

	
	
				$fdata["FieldPermissions"] = true;

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
	$edata["DisplayField"] = "english_name";

	
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




	$tdatadia["DA_POLISH"] = $fdata;
//	DA_SYMMETRY
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "DA_SYMMETRY";
	$fdata["GoodName"] = "DA_SYMMETRY";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("dia","DA_SYMMETRY");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DA_SYMMETRY";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`DA_SYMMETRY`";

	
	
				$fdata["FieldPermissions"] = true;

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
	$edata["DisplayField"] = "english_name";

	
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




	$tdatadia["DA_SYMMETRY"] = $fdata;
//	DA_FLUO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "DA_FLUO";
	$fdata["GoodName"] = "DA_FLUO";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("dia","DA_FLUO");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DA_FLUO";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`DA_FLUO`";

	
	
				$fdata["FieldPermissions"] = true;

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
	$edata["LinkFieldType"] = 200;
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




	$tdatadia["DA_FLUO"] = $fdata;
//	DA_COLOR_FLUO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "DA_COLOR_FLUO";
	$fdata["GoodName"] = "DA_COLOR_FLUO";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("dia","DA_COLOR_FLUO");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DA_COLOR_FLUO";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`DA_COLOR_FLUO`";

	
	
				$fdata["FieldPermissions"] = true;

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
	$edata["LinkFieldType"] = 3;
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




	$tdatadia["DA_COLOR_FLUO"] = $fdata;
//	DA_WIDE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "DA_WIDE";
	$fdata["GoodName"] = "DA_WIDE";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("dia","DA_WIDE");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DA_WIDE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`DA_WIDE`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

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




	$tdatadia["DA_WIDE"] = $fdata;
//	DA_HIGH
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "DA_HIGH";
	$fdata["GoodName"] = "DA_HIGH";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("dia","DA_HIGH");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DA_HIGH";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`DA_HIGH`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

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




	$tdatadia["DA_HIGH"] = $fdata;
//	DA_DEPTH
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "DA_DEPTH";
	$fdata["GoodName"] = "DA_DEPTH";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("dia","DA_DEPTH");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DA_DEPTH";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`DA_DEPTH`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

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




	$tdatadia["DA_DEPTH"] = $fdata;
//	DA_COMMENTSANDTOTAL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "DA_COMMENTSANDTOTAL";
	$fdata["GoodName"] = "DA_COMMENTSANDTOTAL";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("dia","DA_COMMENTSANDTOTAL");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "DA_COMMENTSANDTOTAL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`DA_COMMENTSANDTOTAL`";

	
	
			
				$fdata["UploadFolder"] = "files";

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








	$tdatadia["DA_COMMENTSANDTOTAL"] = $fdata;
//	DA_APPRAISER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "DA_APPRAISER";
	$fdata["GoodName"] = "DA_APPRAISER";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("dia","DA_APPRAISER");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "DA_APPRAISER";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`DA_APPRAISER`";

	
	
			
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
	$edata["LookupTable"] = "_DIA_DA_APPRAISER";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "name";
	$edata["LinkFieldType"] = 200;
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








	$tdatadia["DA_APPRAISER"] = $fdata;
//	DA_FRAPA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "DA_FRAPA";
	$fdata["GoodName"] = "DA_FRAPA";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("dia","DA_FRAPA");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DA_FRAPA";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`DA_FRAPA`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

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




	$tdatadia["DA_FRAPA"] = $fdata;
//	DA_RATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "DA_RATE";
	$fdata["GoodName"] = "DA_RATE";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("dia","DA_RATE");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DA_RATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`DA_RATE`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

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




	$tdatadia["DA_RATE"] = $fdata;
//	DA_UNIT_PRICE_UNPLUG
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "DA_UNIT_PRICE_UNPLUG";
	$fdata["GoodName"] = "DA_UNIT_PRICE_UNPLUG";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("dia","DA_UNIT_PRICE_UNPLUG");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DA_UNIT_PRICE_UNPLUG";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`DA_UNIT_PRICE_UNPLUG`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

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




	$tdatadia["DA_UNIT_PRICE_UNPLUG"] = $fdata;
//	DA_YOURNAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "DA_YOURNAME";
	$fdata["GoodName"] = "DA_YOURNAME";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("dia","DA_YOURNAME");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "DA_YOURNAME";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`DA_YOURNAME`";

	
	
			
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
	$edata["LookupTable"] = "_DIA_DA_CUSTOMER";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
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








	$tdatadia["DA_YOURNAME"] = $fdata;
//	nyuukin_price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "nyuukin_price";
	$fdata["GoodName"] = "nyuukin_price";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("dia","nyuukin_price");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "nyuukin_price";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`nyuukin_price`";

	
	
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




	$tdatadia["nyuukin_price"] = $fdata;
//	DA_RAPAB
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "DA_RAPAB";
	$fdata["GoodName"] = "DA_RAPAB";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("dia","DA_RAPAB");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DA_RAPAB";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`DA_RAPAB`";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 81;

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




	$tdatadia["DA_RAPAB"] = $fdata;
//	DA_GROSSPROFIT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "DA_GROSSPROFIT";
	$fdata["GoodName"] = "DA_GROSSPROFIT";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("dia","DA_GROSSPROFIT");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DA_GROSSPROFIT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`DA_GROSSPROFIT`";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=32";

		$edata["controlWidth"] = 77;

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




	$tdatadia["DA_GROSSPROFIT"] = $fdata;
//	DA_INTEREST_1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "DA_INTEREST_1";
	$fdata["GoodName"] = "DA_INTEREST_1";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("dia","DA_INTEREST_1");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DA_INTEREST_1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`DA_INTEREST_1`";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=32";

		$edata["controlWidth"] = 77;

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




	$tdatadia["DA_INTEREST_1"] = $fdata;
//	DA_no
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "DA_no";
	$fdata["GoodName"] = "DA_no";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("dia","DA_no");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "DA_no";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`DA_no`";

	
	
			
				$fdata["UploadFolder"] = "files";

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








	$tdatadia["DA_no"] = $fdata;
//	updated_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "updated_by";
	$fdata["GoodName"] = "updated_by";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("dia","updated_by");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "updated_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`updated_by`";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdatadia["updated_by"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("dia","updated_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "updated_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`updated_at`";

	
	
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




	$tdatadia["updated_at"] = $fdata;
//	kanryou_henbi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "kanryou_henbi";
	$fdata["GoodName"] = "kanryou_henbi";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("dia","kanryou_henbi");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "kanryou_henbi";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`kanryou_henbi`";

	
	
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




	$tdatadia["kanryou_henbi"] = $fdata;
//	Remarks
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "Remarks";
	$fdata["GoodName"] = "Remarks";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("dia","Remarks");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Remarks";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`Remarks`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

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




	$tdatadia["Remarks"] = $fdata;
//	Gram
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "Gram";
	$fdata["GoodName"] = "Gram";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("dia","Gram");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "Gram";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`Gram`";

	
	
			
				$fdata["UploadFolder"] = "files";

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
			$edata["EditParams"].= " maxlength=20";

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








	$tdatadia["Gram"] = $fdata;
//	unit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "unit";
	$fdata["GoodName"] = "unit";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("dia","unit");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "unit";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`unit`";

	
	
			
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








	$tdatadia["unit"] = $fdata;
//	Appraiser
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "Appraiser";
	$fdata["GoodName"] = "Appraiser";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("dia","Appraiser");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Appraiser";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`Appraiser`";

	
	
				$fdata["FieldPermissions"] = true;

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
	$edata["LookupTable"] = "mst_Appraiser";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "val";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "english_name";

	
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




	$tdatadia["Appraiser"] = $fdata;
//	serial_number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "serial_number";
	$fdata["GoodName"] = "serial_number";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("dia","serial_number");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "serial_number";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`serial_number`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

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




	$tdatadia["serial_number"] = $fdata;
//	ecc_seq
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 47;
	$fdata["strName"] = "ecc_seq";
	$fdata["GoodName"] = "ecc_seq";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("dia","ecc_seq");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ecc_seq";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc`.`ecc_seq`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

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




	$tdatadia["ecc_seq"] = $fdata;
//	category_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 48;
	$fdata["strName"] = "category_id";
	$fdata["GoodName"] = "category_id";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("dia","category_id");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "category_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`category_id`";

	
	
			
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








	$tdatadia["category_id"] = $fdata;
//	sub_category_id1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 49;
	$fdata["strName"] = "sub_category_id1";
	$fdata["GoodName"] = "sub_category_id1";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("dia","sub_category_id1");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "sub_category_id1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`sub_category_id1`";

	
	
			
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








	$tdatadia["sub_category_id1"] = $fdata;
//	yahoo_sex
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 50;
	$fdata["strName"] = "yahoo_sex";
	$fdata["GoodName"] = "yahoo_sex";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("dia","yahoo_sex");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "yahoo_sex";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`yahoo_sex`";

	
	
			
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








	$tdatadia["yahoo_sex"] = $fdata;
//	product_num
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 51;
	$fdata["strName"] = "product_num";
	$fdata["GoodName"] = "product_num";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("dia","product_num");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "product_num";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`product_num`";

	
	
			
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

	
	$edata["LookupOrderBy"] = "mst_band_title";

	
	
	
	

	
	
	
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








	$tdatadia["product_num"] = $fdata;
//	yahoo_junle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 52;
	$fdata["strName"] = "yahoo_junle";
	$fdata["GoodName"] = "yahoo_junle";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("dia","yahoo_junle");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "yahoo_junle";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`yahoo_junle`";

	
	
			
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








	$tdatadia["yahoo_junle"] = $fdata;
//	title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 53;
	$fdata["strName"] = "title";
	$fdata["GoodName"] = "title";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("dia","title");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "title";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`title`";

	
	
			
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

	
	
	
				$edata["nRows"] = 40;
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








	$tdatadia["title"] = $fdata;
//	Parent_stone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 54;
	$fdata["strName"] = "Parent_stone";
	$fdata["GoodName"] = "Parent_stone";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("dia","Parent_stone");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Parent_stone";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`Parent_stone`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

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




	$tdatadia["Parent_stone"] = $fdata;
//	comment
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 55;
	$fdata["strName"] = "comment";
	$fdata["GoodName"] = "comment";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("dia","comment");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "comment";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`comment`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

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
			$edata["EditParams"].= " maxlength=200";

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




	$tdatadia["comment"] = $fdata;
//	tentou_label_output_flag
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 56;
	$fdata["strName"] = "tentou_label_output_flag";
	$fdata["GoodName"] = "tentou_label_output_flag";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("dia","tentou_label_output_flag");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "tentou_label_output_flag";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`tentou_label_output_flag`";

	
	
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




	$tdatadia["tentou_label_output_flag"] = $fdata;
//	other_cost
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 57;
	$fdata["strName"] = "other_cost";
	$fdata["GoodName"] = "other_cost";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("dia","other_cost");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "other_cost";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`other_cost`";

	
	
			
				$fdata["UploadFolder"] = "files";

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








	$tdatadia["other_cost"] = $fdata;
//	identification_cost
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 58;
	$fdata["strName"] = "identification_cost";
	$fdata["GoodName"] = "identification_cost";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("dia","identification_cost");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "identification_cost";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`identification_cost`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

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




	$tdatadia["identification_cost"] = $fdata;
//	sales_cost
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 59;
	$fdata["strName"] = "sales_cost";
	$fdata["GoodName"] = "sales_cost";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("dia","sales_cost");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "sales_cost";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`sales_cost`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

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




	$tdatadia["sales_cost"] = $fdata;
//	DA_GROSSPROFIT_2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 60;
	$fdata["strName"] = "DA_GROSSPROFIT_2";
	$fdata["GoodName"] = "DA_GROSSPROFIT_2";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("dia","DA_GROSSPROFIT_2");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DA_GROSSPROFIT_2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`DA_GROSSPROFIT_2`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

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




	$tdatadia["DA_GROSSPROFIT_2"] = $fdata;
//	DA_INTEREST_2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 61;
	$fdata["strName"] = "DA_INTEREST_2";
	$fdata["GoodName"] = "DA_INTEREST_2";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("dia","DA_INTEREST_2");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DA_INTEREST_2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`DA_INTEREST_2`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

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




	$tdatadia["DA_INTEREST_2"] = $fdata;
//	mst_business_partner_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 62;
	$fdata["strName"] = "mst_business_partner_id";
	$fdata["GoodName"] = "mst_business_partner_id";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("dia","mst_business_partner_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "mst_business_partner_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`mst_business_partner_id`";

	
	
				$fdata["FieldPermissions"] = true;

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
	$edata["LookupTable"] = "mst_business_partner";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "name";

	
	$edata["LookupOrderBy"] = "_DIA_DA_CUSTOMER_sort";

	
	
	
	

	
	
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




	$tdatadia["mst_business_partner_id"] = $fdata;


$tables_data["dia"]=&$tdatadia;
$field_labels["dia"] = &$fieldLabelsdia;
$fieldToolTips["dia"] = &$fieldToolTipsdia;
$placeHolders["dia"] = &$placeHoldersdia;
$page_titles["dia"] = &$pageTitlesdia;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["dia"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["dia"] = array();


	
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
					$masterTablesData["dia"][0] = $masterParams;
				$masterTablesData["dia"][0]["masterKeys"] = array();
	$masterTablesData["dia"][0]["masterKeys"][]="ecc_id";
				$masterTablesData["dia"][0]["detailKeys"] = array();
	$masterTablesData["dia"][0]["detailKeys"][]="ecc_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_dia()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`shouhin`.`product_id`,  `shouhin`.`status`,  `shouhin`.`yahoo_sinaban`,  `shouhin`.`ecc_id`,  `shouhin`.`satei_by`,  `shouhin`.`satei_hi`,  `shouhin`.`DA_WEIGHT`,  `shouhin`.`price`,  `shouhin`.`DA_PER_CARAT`,  `shouhin`.`DA_SHAPE`,  `shouhin`.`DA_SELFGRES`,  `shouhin`.`DA_ORIGINALGRADEMLIKENED`,  `shouhin`.`DA_SUGARCANE`,  `shouhin`.`DA_RAPA`,  `shouhin`.`description`,  `shouhin`.`DA_INTENSITY`,  `shouhin`.`DA_OVERTONE`,  `shouhin`.`DA_COLOR`,  `shouhin`.`DA_CLARITY`,  `shouhin`.`DA_CUT`,  `shouhin`.`DA_POLISH`,  `shouhin`.`DA_SYMMETRY`,  `shouhin`.`DA_FLUO`,  `shouhin`.`DA_COLOR_FLUO`,  `shouhin`.`DA_WIDE`,  `shouhin`.`DA_HIGH`,  `shouhin`.`DA_DEPTH`,  `shouhin`.`DA_COMMENTSANDTOTAL`,  `shouhin`.`DA_APPRAISER`,  `shouhin`.`DA_FRAPA`,  `shouhin`.`DA_RATE`,  `shouhin`.`DA_UNIT_PRICE_UNPLUG`,  `shouhin`.`DA_YOURNAME`,  `shouhin`.`nyuukin_price`,  `shouhin`.`DA_RAPAB`,  `shouhin`.`DA_GROSSPROFIT`,  `shouhin`.`DA_INTEREST_1`,  `shouhin`.`DA_no`,  `shouhin`.`updated_by`,  `shouhin`.`updated_at`,  `shouhin`.`kanryou_henbi`,  `shouhin`.`Remarks`,  `shouhin`.`Gram`,  `shouhin`.`unit`,  `shouhin`.`Appraiser`,  `shouhin`.`serial_number`,  `Eoc`.`ecc_seq`,  `shouhin`.`category_id`,  `shouhin`.`sub_category_id1`,  `shouhin`.`yahoo_sex`,  `shouhin`.`product_num`,  `shouhin`.`yahoo_junle`,  `shouhin`.`title`,  `shouhin`.`Parent_stone`,  `shouhin`.`comment`,  `shouhin`.`tentou_label_output_flag`,  `shouhin`.`other_cost`,  `shouhin`.`identification_cost`,  `shouhin`.`sales_cost`,  `shouhin`.`DA_GROSSPROFIT_2`,  `shouhin`.`DA_INTEREST_2`,  `shouhin`.`mst_business_partner_id`";
$proto0["m_strFrom"] = "FROM `shouhin`  LEFT OUTER JOIN `Eoc` ON `shouhin`.`ecc_id` = `Eoc`.`ecc_id`";
$proto0["m_strWhere"] = "(`shouhin`.`status` = 122) OR (`shouhin`.`status` = 120) OR (`shouhin`.`status` = 127) OR (`shouhin`.`status` = 128) OR (`shouhin`.`status` = 129) OR (`shouhin`.`status` = 134)";
$proto0["m_strOrderBy"] = "ORDER BY `shouhin`.`product_id` DESC";
$proto0["m_strTail"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "(`shouhin`.`status` = 122) OR (`shouhin`.`status` = 120) OR (`shouhin`.`status` = 127) OR (`shouhin`.`status` = 128) OR (`shouhin`.`status` = 129) OR (`shouhin`.`status` = 134)";
$proto2["m_uniontype"] = "SQLL_OR";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(`shouhin`.`status` = 122) OR (`shouhin`.`status` = 120) OR (`shouhin`.`status` = 127) OR (`shouhin`.`status` = 128) OR (`shouhin`.`status` = 129) OR (`shouhin`.`status` = 134)"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
						$proto4=array();
$proto4["m_sql"] = "`shouhin`.`status` = 122";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "dia"
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "= 122";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = true;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

			$proto2["m_contained"][]=$obj;
						$proto6=array();
$proto6["m_sql"] = "`shouhin`.`status` = 120";
$proto6["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "dia"
));

$proto6["m_column"]=$obj;
$proto6["m_contained"] = array();
$proto6["m_strCase"] = "= 120";
$proto6["m_havingmode"] = false;
$proto6["m_inBrackets"] = true;
$proto6["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto6);

			$proto2["m_contained"][]=$obj;
						$proto8=array();
$proto8["m_sql"] = "`shouhin`.`status` = 127";
$proto8["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "dia"
));

$proto8["m_column"]=$obj;
$proto8["m_contained"] = array();
$proto8["m_strCase"] = "= 127";
$proto8["m_havingmode"] = false;
$proto8["m_inBrackets"] = true;
$proto8["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto8);

			$proto2["m_contained"][]=$obj;
						$proto10=array();
$proto10["m_sql"] = "`shouhin`.`status` = 128";
$proto10["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "dia"
));

$proto10["m_column"]=$obj;
$proto10["m_contained"] = array();
$proto10["m_strCase"] = "= 128";
$proto10["m_havingmode"] = false;
$proto10["m_inBrackets"] = true;
$proto10["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto10);

			$proto2["m_contained"][]=$obj;
						$proto12=array();
$proto12["m_sql"] = "`shouhin`.`status` = 129";
$proto12["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "dia"
));

$proto12["m_column"]=$obj;
$proto12["m_contained"] = array();
$proto12["m_strCase"] = "= 129";
$proto12["m_havingmode"] = false;
$proto12["m_inBrackets"] = true;
$proto12["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto12);

			$proto2["m_contained"][]=$obj;
						$proto14=array();
$proto14["m_sql"] = "`shouhin`.`status` = 134";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "dia"
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "= 134";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = true;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

			$proto2["m_contained"][]=$obj;
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto16=array();
$proto16["m_sql"] = "";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = false;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "product_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "dia"
));

$proto18["m_sql"] = "`shouhin`.`product_id`";
$proto18["m_srcTableName"] = "dia";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "dia"
));

$proto20["m_sql"] = "`shouhin`.`status`";
$proto20["m_srcTableName"] = "dia";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_sinaban",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "dia"
));

$proto22["m_sql"] = "`shouhin`.`yahoo_sinaban`";
$proto22["m_srcTableName"] = "dia";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "ecc_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "dia"
));

$proto24["m_sql"] = "`shouhin`.`ecc_id`";
$proto24["m_srcTableName"] = "dia";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "satei_by",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "dia"
));

$proto26["m_sql"] = "`shouhin`.`satei_by`";
$proto26["m_srcTableName"] = "dia";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "satei_hi",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "dia"
));

$proto28["m_sql"] = "`shouhin`.`satei_hi`";
$proto28["m_srcTableName"] = "dia";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "DA_WEIGHT",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "dia"
));

$proto30["m_sql"] = "`shouhin`.`DA_WEIGHT`";
$proto30["m_srcTableName"] = "dia";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "price",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "dia"
));

$proto32["m_sql"] = "`shouhin`.`price`";
$proto32["m_srcTableName"] = "dia";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "DA_PER_CARAT",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "dia"
));

$proto34["m_sql"] = "`shouhin`.`DA_PER_CARAT`";
$proto34["m_srcTableName"] = "dia";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "DA_SHAPE",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "dia"
));

$proto36["m_sql"] = "`shouhin`.`DA_SHAPE`";
$proto36["m_srcTableName"] = "dia";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "DA_SELFGRES",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "dia"
));

$proto38["m_sql"] = "`shouhin`.`DA_SELFGRES`";
$proto38["m_srcTableName"] = "dia";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "DA_ORIGINALGRADEMLIKENED",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "dia"
));

$proto40["m_sql"] = "`shouhin`.`DA_ORIGINALGRADEMLIKENED`";
$proto40["m_srcTableName"] = "dia";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "DA_SUGARCANE",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "dia"
));

$proto42["m_sql"] = "`shouhin`.`DA_SUGARCANE`";
$proto42["m_srcTableName"] = "dia";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "DA_RAPA",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "dia"
));

$proto44["m_sql"] = "`shouhin`.`DA_RAPA`";
$proto44["m_srcTableName"] = "dia";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "dia"
));

$proto46["m_sql"] = "`shouhin`.`description`";
$proto46["m_srcTableName"] = "dia";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "DA_INTENSITY",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "dia"
));

$proto48["m_sql"] = "`shouhin`.`DA_INTENSITY`";
$proto48["m_srcTableName"] = "dia";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "DA_OVERTONE",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "dia"
));

$proto50["m_sql"] = "`shouhin`.`DA_OVERTONE`";
$proto50["m_srcTableName"] = "dia";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "DA_COLOR",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "dia"
));

$proto52["m_sql"] = "`shouhin`.`DA_COLOR`";
$proto52["m_srcTableName"] = "dia";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "DA_CLARITY",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "dia"
));

$proto54["m_sql"] = "`shouhin`.`DA_CLARITY`";
$proto54["m_srcTableName"] = "dia";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "DA_CUT",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "dia"
));

$proto56["m_sql"] = "`shouhin`.`DA_CUT`";
$proto56["m_srcTableName"] = "dia";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "DA_POLISH",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "dia"
));

$proto58["m_sql"] = "`shouhin`.`DA_POLISH`";
$proto58["m_srcTableName"] = "dia";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "DA_SYMMETRY",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "dia"
));

$proto60["m_sql"] = "`shouhin`.`DA_SYMMETRY`";
$proto60["m_srcTableName"] = "dia";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "DA_FLUO",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "dia"
));

$proto62["m_sql"] = "`shouhin`.`DA_FLUO`";
$proto62["m_srcTableName"] = "dia";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "DA_COLOR_FLUO",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "dia"
));

$proto64["m_sql"] = "`shouhin`.`DA_COLOR_FLUO`";
$proto64["m_srcTableName"] = "dia";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "DA_WIDE",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "dia"
));

$proto66["m_sql"] = "`shouhin`.`DA_WIDE`";
$proto66["m_srcTableName"] = "dia";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "DA_HIGH",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "dia"
));

$proto68["m_sql"] = "`shouhin`.`DA_HIGH`";
$proto68["m_srcTableName"] = "dia";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "DA_DEPTH",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "dia"
));

$proto70["m_sql"] = "`shouhin`.`DA_DEPTH`";
$proto70["m_srcTableName"] = "dia";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "DA_COMMENTSANDTOTAL",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "dia"
));

$proto72["m_sql"] = "`shouhin`.`DA_COMMENTSANDTOTAL`";
$proto72["m_srcTableName"] = "dia";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "DA_APPRAISER",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "dia"
));

$proto74["m_sql"] = "`shouhin`.`DA_APPRAISER`";
$proto74["m_srcTableName"] = "dia";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "DA_FRAPA",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "dia"
));

$proto76["m_sql"] = "`shouhin`.`DA_FRAPA`";
$proto76["m_srcTableName"] = "dia";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "DA_RATE",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "dia"
));

$proto78["m_sql"] = "`shouhin`.`DA_RATE`";
$proto78["m_srcTableName"] = "dia";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "DA_UNIT_PRICE_UNPLUG",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "dia"
));

$proto80["m_sql"] = "`shouhin`.`DA_UNIT_PRICE_UNPLUG`";
$proto80["m_srcTableName"] = "dia";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "DA_YOURNAME",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "dia"
));

$proto82["m_sql"] = "`shouhin`.`DA_YOURNAME`";
$proto82["m_srcTableName"] = "dia";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "nyuukin_price",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "dia"
));

$proto84["m_sql"] = "`shouhin`.`nyuukin_price`";
$proto84["m_srcTableName"] = "dia";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "DA_RAPAB",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "dia"
));

$proto86["m_sql"] = "`shouhin`.`DA_RAPAB`";
$proto86["m_srcTableName"] = "dia";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "DA_GROSSPROFIT",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "dia"
));

$proto88["m_sql"] = "`shouhin`.`DA_GROSSPROFIT`";
$proto88["m_srcTableName"] = "dia";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "DA_INTEREST_1",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "dia"
));

$proto90["m_sql"] = "`shouhin`.`DA_INTEREST_1`";
$proto90["m_srcTableName"] = "dia";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLField(array(
	"m_strName" => "DA_no",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "dia"
));

$proto92["m_sql"] = "`shouhin`.`DA_no`";
$proto92["m_srcTableName"] = "dia";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "";
$obj = new SQLFieldListItem($proto92);

$proto0["m_fieldlist"][]=$obj;
						$proto94=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "dia"
));

$proto94["m_sql"] = "`shouhin`.`updated_by`";
$proto94["m_srcTableName"] = "dia";
$proto94["m_expr"]=$obj;
$proto94["m_alias"] = "";
$obj = new SQLFieldListItem($proto94);

$proto0["m_fieldlist"][]=$obj;
						$proto96=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "dia"
));

$proto96["m_sql"] = "`shouhin`.`updated_at`";
$proto96["m_srcTableName"] = "dia";
$proto96["m_expr"]=$obj;
$proto96["m_alias"] = "";
$obj = new SQLFieldListItem($proto96);

$proto0["m_fieldlist"][]=$obj;
						$proto98=array();
			$obj = new SQLField(array(
	"m_strName" => "kanryou_henbi",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "dia"
));

$proto98["m_sql"] = "`shouhin`.`kanryou_henbi`";
$proto98["m_srcTableName"] = "dia";
$proto98["m_expr"]=$obj;
$proto98["m_alias"] = "";
$obj = new SQLFieldListItem($proto98);

$proto0["m_fieldlist"][]=$obj;
						$proto100=array();
			$obj = new SQLField(array(
	"m_strName" => "Remarks",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "dia"
));

$proto100["m_sql"] = "`shouhin`.`Remarks`";
$proto100["m_srcTableName"] = "dia";
$proto100["m_expr"]=$obj;
$proto100["m_alias"] = "";
$obj = new SQLFieldListItem($proto100);

$proto0["m_fieldlist"][]=$obj;
						$proto102=array();
			$obj = new SQLField(array(
	"m_strName" => "Gram",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "dia"
));

$proto102["m_sql"] = "`shouhin`.`Gram`";
$proto102["m_srcTableName"] = "dia";
$proto102["m_expr"]=$obj;
$proto102["m_alias"] = "";
$obj = new SQLFieldListItem($proto102);

$proto0["m_fieldlist"][]=$obj;
						$proto104=array();
			$obj = new SQLField(array(
	"m_strName" => "unit",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "dia"
));

$proto104["m_sql"] = "`shouhin`.`unit`";
$proto104["m_srcTableName"] = "dia";
$proto104["m_expr"]=$obj;
$proto104["m_alias"] = "";
$obj = new SQLFieldListItem($proto104);

$proto0["m_fieldlist"][]=$obj;
						$proto106=array();
			$obj = new SQLField(array(
	"m_strName" => "Appraiser",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "dia"
));

$proto106["m_sql"] = "`shouhin`.`Appraiser`";
$proto106["m_srcTableName"] = "dia";
$proto106["m_expr"]=$obj;
$proto106["m_alias"] = "";
$obj = new SQLFieldListItem($proto106);

$proto0["m_fieldlist"][]=$obj;
						$proto108=array();
			$obj = new SQLField(array(
	"m_strName" => "serial_number",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "dia"
));

$proto108["m_sql"] = "`shouhin`.`serial_number`";
$proto108["m_srcTableName"] = "dia";
$proto108["m_expr"]=$obj;
$proto108["m_alias"] = "";
$obj = new SQLFieldListItem($proto108);

$proto0["m_fieldlist"][]=$obj;
						$proto110=array();
			$obj = new SQLField(array(
	"m_strName" => "ecc_seq",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "dia"
));

$proto110["m_sql"] = "`Eoc`.`ecc_seq`";
$proto110["m_srcTableName"] = "dia";
$proto110["m_expr"]=$obj;
$proto110["m_alias"] = "";
$obj = new SQLFieldListItem($proto110);

$proto0["m_fieldlist"][]=$obj;
						$proto112=array();
			$obj = new SQLField(array(
	"m_strName" => "category_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "dia"
));

$proto112["m_sql"] = "`shouhin`.`category_id`";
$proto112["m_srcTableName"] = "dia";
$proto112["m_expr"]=$obj;
$proto112["m_alias"] = "";
$obj = new SQLFieldListItem($proto112);

$proto0["m_fieldlist"][]=$obj;
						$proto114=array();
			$obj = new SQLField(array(
	"m_strName" => "sub_category_id1",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "dia"
));

$proto114["m_sql"] = "`shouhin`.`sub_category_id1`";
$proto114["m_srcTableName"] = "dia";
$proto114["m_expr"]=$obj;
$proto114["m_alias"] = "";
$obj = new SQLFieldListItem($proto114);

$proto0["m_fieldlist"][]=$obj;
						$proto116=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_sex",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "dia"
));

$proto116["m_sql"] = "`shouhin`.`yahoo_sex`";
$proto116["m_srcTableName"] = "dia";
$proto116["m_expr"]=$obj;
$proto116["m_alias"] = "";
$obj = new SQLFieldListItem($proto116);

$proto0["m_fieldlist"][]=$obj;
						$proto118=array();
			$obj = new SQLField(array(
	"m_strName" => "product_num",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "dia"
));

$proto118["m_sql"] = "`shouhin`.`product_num`";
$proto118["m_srcTableName"] = "dia";
$proto118["m_expr"]=$obj;
$proto118["m_alias"] = "";
$obj = new SQLFieldListItem($proto118);

$proto0["m_fieldlist"][]=$obj;
						$proto120=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_junle",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "dia"
));

$proto120["m_sql"] = "`shouhin`.`yahoo_junle`";
$proto120["m_srcTableName"] = "dia";
$proto120["m_expr"]=$obj;
$proto120["m_alias"] = "";
$obj = new SQLFieldListItem($proto120);

$proto0["m_fieldlist"][]=$obj;
						$proto122=array();
			$obj = new SQLField(array(
	"m_strName" => "title",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "dia"
));

$proto122["m_sql"] = "`shouhin`.`title`";
$proto122["m_srcTableName"] = "dia";
$proto122["m_expr"]=$obj;
$proto122["m_alias"] = "";
$obj = new SQLFieldListItem($proto122);

$proto0["m_fieldlist"][]=$obj;
						$proto124=array();
			$obj = new SQLField(array(
	"m_strName" => "Parent_stone",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "dia"
));

$proto124["m_sql"] = "`shouhin`.`Parent_stone`";
$proto124["m_srcTableName"] = "dia";
$proto124["m_expr"]=$obj;
$proto124["m_alias"] = "";
$obj = new SQLFieldListItem($proto124);

$proto0["m_fieldlist"][]=$obj;
						$proto126=array();
			$obj = new SQLField(array(
	"m_strName" => "comment",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "dia"
));

$proto126["m_sql"] = "`shouhin`.`comment`";
$proto126["m_srcTableName"] = "dia";
$proto126["m_expr"]=$obj;
$proto126["m_alias"] = "";
$obj = new SQLFieldListItem($proto126);

$proto0["m_fieldlist"][]=$obj;
						$proto128=array();
			$obj = new SQLField(array(
	"m_strName" => "tentou_label_output_flag",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "dia"
));

$proto128["m_sql"] = "`shouhin`.`tentou_label_output_flag`";
$proto128["m_srcTableName"] = "dia";
$proto128["m_expr"]=$obj;
$proto128["m_alias"] = "";
$obj = new SQLFieldListItem($proto128);

$proto0["m_fieldlist"][]=$obj;
						$proto130=array();
			$obj = new SQLField(array(
	"m_strName" => "other_cost",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "dia"
));

$proto130["m_sql"] = "`shouhin`.`other_cost`";
$proto130["m_srcTableName"] = "dia";
$proto130["m_expr"]=$obj;
$proto130["m_alias"] = "";
$obj = new SQLFieldListItem($proto130);

$proto0["m_fieldlist"][]=$obj;
						$proto132=array();
			$obj = new SQLField(array(
	"m_strName" => "identification_cost",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "dia"
));

$proto132["m_sql"] = "`shouhin`.`identification_cost`";
$proto132["m_srcTableName"] = "dia";
$proto132["m_expr"]=$obj;
$proto132["m_alias"] = "";
$obj = new SQLFieldListItem($proto132);

$proto0["m_fieldlist"][]=$obj;
						$proto134=array();
			$obj = new SQLField(array(
	"m_strName" => "sales_cost",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "dia"
));

$proto134["m_sql"] = "`shouhin`.`sales_cost`";
$proto134["m_srcTableName"] = "dia";
$proto134["m_expr"]=$obj;
$proto134["m_alias"] = "";
$obj = new SQLFieldListItem($proto134);

$proto0["m_fieldlist"][]=$obj;
						$proto136=array();
			$obj = new SQLField(array(
	"m_strName" => "DA_GROSSPROFIT_2",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "dia"
));

$proto136["m_sql"] = "`shouhin`.`DA_GROSSPROFIT_2`";
$proto136["m_srcTableName"] = "dia";
$proto136["m_expr"]=$obj;
$proto136["m_alias"] = "";
$obj = new SQLFieldListItem($proto136);

$proto0["m_fieldlist"][]=$obj;
						$proto138=array();
			$obj = new SQLField(array(
	"m_strName" => "DA_INTEREST_2",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "dia"
));

$proto138["m_sql"] = "`shouhin`.`DA_INTEREST_2`";
$proto138["m_srcTableName"] = "dia";
$proto138["m_expr"]=$obj;
$proto138["m_alias"] = "";
$obj = new SQLFieldListItem($proto138);

$proto0["m_fieldlist"][]=$obj;
						$proto140=array();
			$obj = new SQLField(array(
	"m_strName" => "mst_business_partner_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "dia"
));

$proto140["m_sql"] = "`shouhin`.`mst_business_partner_id`";
$proto140["m_srcTableName"] = "dia";
$proto140["m_expr"]=$obj;
$proto140["m_alias"] = "";
$obj = new SQLFieldListItem($proto140);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto142=array();
$proto142["m_link"] = "SQLL_MAIN";
			$proto143=array();
$proto143["m_strName"] = "shouhin";
$proto143["m_srcTableName"] = "dia";
$proto143["m_columns"] = array();
$proto143["m_columns"][] = "product_id";
$proto143["m_columns"][] = "category_id";
$proto143["m_columns"][] = "goods_title";
$proto143["m_columns"][] = "title";
$proto143["m_columns"][] = "sub_category_id1";
$proto143["m_columns"][] = "ecc_id";
$proto143["m_columns"][] = "price";
$proto143["m_columns"][] = "yahoo";
$proto143["m_columns"][] = "remark";
$proto143["m_columns"][] = "sales_price";
$proto143["m_columns"][] = "description";
$proto143["m_columns"][] = "status";
$proto143["m_columns"][] = "product_num";
$proto143["m_columns"][] = "updated_at";
$proto143["m_columns"][] = "yahoo_size";
$proto143["m_columns"][] = "yahoo_title";
$proto143["m_columns"][] = "yahoo_junle";
$proto143["m_columns"][] = "yahoo_sankou_uwadai";
$proto143["m_columns"][] = "yahoo_sozai";
$proto143["m_columns"][] = "yahoo_color";
$proto143["m_columns"][] = "yahoo_kataban";
$proto143["m_columns"][] = "yahoo_condition1";
$proto143["m_columns"][] = "yahoo_condition2";
$proto143["m_columns"][] = "yahoo_fuzokuhin";
$proto143["m_columns"][] = "yahoo_sinaban";
$proto143["m_columns"][] = "yahoo_saisun_sha";
$proto143["m_columns"][] = "yahoo_sex";
$proto143["m_columns"][] = "box_id";
$proto143["m_columns"][] = "nyuukin_price";
$proto143["m_columns"][] = "updated_by";
$proto143["m_columns"][] = "raku_title";
$proto143["m_columns"][] = "raku_hyoujisaki_category2";
$proto143["m_columns"][] = "raku_hyoujisaki_category";
$proto143["m_columns"][] = "raku_hyoujisaki_category3";
$proto143["m_columns"][] = "timesta";
$proto143["m_columns"][] = "saisun_start";
$proto143["m_columns"][] = "saisun_end";
$proto143["m_columns"][] = "label_output_flag";
$proto143["m_columns"][] = "season";
$proto143["m_columns"][] = "kanryou_henbi";
$proto143["m_columns"][] = "box_sort";
$proto143["m_columns"][] = "satei_by";
$proto143["m_columns"][] = "kaitori_by";
$proto143["m_columns"][] = "comment";
$proto143["m_columns"][] = "satei_hi";
$proto143["m_columns"][] = "kaitory_hi";
$proto143["m_columns"][] = "REG_PHOTOGRAPHER";
$proto143["m_columns"][] = "REG_AUTHOR";
$proto143["m_columns"][] = "REG_PACKINGS";
$proto143["m_columns"][] = "REG_KAKOU_DATE";
$proto143["m_columns"][] = "REG_KAKOU";
$proto143["m_columns"][] = "REG_EXHIBITOR";
$proto143["m_columns"][] = "REG_PHOTOGRAPHER_DATE";
$proto143["m_columns"][] = "DT_PACKING_DATE";
$proto143["m_columns"][] = "DT_UP_DATE";
$proto143["m_columns"][] = "AWAZU_DATE";
$proto143["m_columns"][] = "AWAZU_NIN";
$proto143["m_columns"][] = "sabun_date";
$proto143["m_columns"][] = "browseid";
$proto143["m_columns"][] = "browsenode";
$proto143["m_columns"][] = "gold_property";
$proto143["m_columns"][] = "ichiba_title";
$proto143["m_columns"][] = "Gram";
$proto143["m_columns"][] = "Parent_stone";
$proto143["m_columns"][] = "Aside_stone";
$proto143["m_columns"][] = "Appraiser";
$proto143["m_columns"][] = "Remarks";
$proto143["m_columns"][] = "Destination_selling";
$proto143["m_columns"][] = "Finish";
$proto143["m_columns"][] = "Discrimination";
$proto143["m_columns"][] = "accessories";
$proto143["m_columns"][] = "priority";
$proto143["m_columns"][] = "A_storage";
$proto143["m_columns"][] = "price_per_gram";
$proto143["m_columns"][] = "price_per_parent_stone";
$proto143["m_columns"][] = "price_per_aside_stone";
$proto143["m_columns"][] = "price_secret";
$proto143["m_columns"][] = "sales_price_secret";
$proto143["m_columns"][] = "eq";
$proto143["m_columns"][] = "en";
$proto143["m_columns"][] = "line";
$proto143["m_columns"][] = "item_name";
$proto143["m_columns"][] = "handle";
$proto143["m_columns"][] = "yahoo_color_id";
$proto143["m_columns"][] = "raku_hyoujisaki_category4";
$proto143["m_columns"][] = "raku_hyoujisaki_category5";
$proto143["m_columns"][] = "raku_dir_1";
$proto143["m_columns"][] = "raku_dir_2";
$proto143["m_columns"][] = "raku_dir_3";
$proto143["m_columns"][] = "raku_dir_4";
$proto143["m_columns"][] = "raku_dir_5";
$proto143["m_columns"][] = "raku_dir_result";
$proto143["m_columns"][] = "raku_tag_result";
$proto143["m_columns"][] = "serial_number";
$proto143["m_columns"][] = "Exhibition_Date";
$proto143["m_columns"][] = "search_keyword";
$proto143["m_columns"][] = "stamp";
$proto143["m_columns"][] = "motif";
$proto143["m_columns"][] = "Setting";
$proto143["m_columns"][] = "processing";
$proto143["m_columns"][] = "Sleeve_Length";
$proto143["m_columns"][] = "length";
$proto143["m_columns"][] = "Ring_size";
$proto143["m_columns"][] = "price_for_site";
$proto143["m_columns"][] = "yahoo_category_id";
$proto143["m_columns"][] = "Qty";
$proto143["m_columns"][] = "sales_period";
$proto143["m_columns"][] = "starting_price";
$proto143["m_columns"][] = "FLAG_NO_ARRIVAL";
$proto143["m_columns"][] = "amount_of_image";
$proto143["m_columns"][] = "csv";
$proto143["m_columns"][] = "return_output_flag";
$proto143["m_columns"][] = "wasabi_flag";
$proto143["m_columns"][] = "ws_import_date";
$proto143["m_columns"][] = "logo";
$proto143["m_columns"][] = "parts";
$proto143["m_columns"][] = "country_of_origin";
$proto143["m_columns"][] = "zipper";
$proto143["m_columns"][] = "guarantee";
$proto143["m_columns"][] = "errors";
$proto143["m_columns"][] = "designer";
$proto143["m_columns"][] = "hahakai";
$proto143["m_columns"][] = "effect";
$proto143["m_columns"][] = "shape";
$proto143["m_columns"][] = "cutting_style";
$proto143["m_columns"][] = "chain_type";
$proto143["m_columns"][] = "number_of_stones";
$proto143["m_columns"][] = "amount";
$proto143["m_columns"][] = "satei_error";
$proto143["m_columns"][] = "producing_area";
$proto143["m_columns"][] = "shape_supplement";
$proto143["m_columns"][] = "side_gem";
$proto143["m_columns"][] = "product_style";
$proto143["m_columns"][] = "collar_neck_line";
$proto143["m_columns"][] = "breast";
$proto143["m_columns"][] = "silhouette";
$proto143["m_columns"][] = "sleeve";
$proto143["m_columns"][] = "unit";
$proto143["m_columns"][] = "hall_mark";
$proto143["m_columns"][] = "plate";
$proto143["m_columns"][] = "toe";
$proto143["m_columns"][] = "heel";
$proto143["m_columns"][] = "cloth";
$proto143["m_columns"][] = "serial_number_for_storage";
$proto143["m_columns"][] = "official_url";
$proto143["m_columns"][] = "main_details";
$proto143["m_columns"][] = "notation_size";
$proto143["m_columns"][] = "shoe_size_jp";
$proto143["m_columns"][] = "Eoc_chigins2_id";
$proto143["m_columns"][] = "country_of_origin_name";
$proto143["m_columns"][] = "mailingkit_id";
$proto143["m_columns"][] = "DA_COMMENTSANDTOTAL";
$proto143["m_columns"][] = "DA_WEIGHT";
$proto143["m_columns"][] = "DA_PER_CARAT";
$proto143["m_columns"][] = "DA_SHAPE";
$proto143["m_columns"][] = "DA_SELFGRES";
$proto143["m_columns"][] = "DA_ORIGINALGRADEMLIKENED";
$proto143["m_columns"][] = "DA_SUGARCANE";
$proto143["m_columns"][] = "DA_RAPA";
$proto143["m_columns"][] = "DA_INTENSITY";
$proto143["m_columns"][] = "DA_OVERTONE";
$proto143["m_columns"][] = "DA_COLOR";
$proto143["m_columns"][] = "DA_CLARITY";
$proto143["m_columns"][] = "DA_CUT";
$proto143["m_columns"][] = "DA_POLISH";
$proto143["m_columns"][] = "DA_SYMMETRY";
$proto143["m_columns"][] = "DA_FLUO";
$proto143["m_columns"][] = "DA_COLOR_FLUO";
$proto143["m_columns"][] = "DA_WIDE";
$proto143["m_columns"][] = "DA_HIGH";
$proto143["m_columns"][] = "DA_DEPTH";
$proto143["m_columns"][] = "DA_APPRAISER";
$proto143["m_columns"][] = "DA_FRAPA";
$proto143["m_columns"][] = "DA_RATE";
$proto143["m_columns"][] = "DA_UNIT_PRICE_UNPLUG";
$proto143["m_columns"][] = "DA_YOURNAME";
$proto143["m_columns"][] = "DA_RAPAB";
$proto143["m_columns"][] = "DA_GROSSPROFIT";
$proto143["m_columns"][] = "DA_INTEREST_1";
$proto143["m_columns"][] = "DA_no";
$proto143["m_columns"][] = "kinsa_flag";
$proto143["m_columns"][] = "price_for_site_flag";
$proto143["m_columns"][] = "Eoc_takuhai_id";
$proto143["m_columns"][] = "Eoc_unfinished_id";
$proto143["m_columns"][] = "Eoc_chigins_unfinished_id";
$proto143["m_columns"][] = "chohyo_id";
$proto143["m_columns"][] = "location";
$proto143["m_columns"][] = "special_instructions_1";
$proto143["m_columns"][] = "special_instructions_2";
$proto143["m_columns"][] = "special_instructions_3";
$proto143["m_columns"][] = "chohyo_seihin_flag";
$proto143["m_columns"][] = "chohyo_dia_flag";
$proto143["m_columns"][] = "chohyo_type";
$proto143["m_columns"][] = "ichiyen_flag";
$proto143["m_columns"][] = "asuraku_fuka_flag";
$proto143["m_columns"][] = "parallel_import_flag";
$proto143["m_columns"][] = "meisai_number";
$proto143["m_columns"][] = "days_keep_price";
$proto143["m_columns"][] = "initial_included";
$proto143["m_columns"][] = "novelty";
$proto143["m_columns"][] = "tentou_label_output_flag";
$proto143["m_columns"][] = "itaku_flag";
$proto143["m_columns"][] = "including_catch";
$proto143["m_columns"][] = "ichiba_meeting_month";
$proto143["m_columns"][] = "ichiba_meeting_name";
$proto143["m_columns"][] = "ichiba_color";
$proto143["m_columns"][] = "ichiba_clarity";
$proto143["m_columns"][] = "ichiba_melee_gai";
$proto143["m_columns"][] = "ichiba_lot_pieces";
$proto143["m_columns"][] = "ichiba_image";
$proto143["m_columns"][] = "ichiba_img";
$proto143["m_columns"][] = "gold_check_id";
$proto143["m_columns"][] = "ichiba_exhibition_id";
$proto143["m_columns"][] = "ichiba_exhibition_sort";
$proto143["m_columns"][] = "cost";
$proto143["m_columns"][] = "auto_price_cut_prohibited";
$proto143["m_columns"][] = "event_price";
$proto143["m_columns"][] = "identification_cost";
$proto143["m_columns"][] = "other_cost";
$proto143["m_columns"][] = "stock_quantity";
$proto143["m_columns"][] = "Eoc_trader_id_for_buy";
$proto143["m_columns"][] = "Eoc_trader_id_for_sell";
$proto143["m_columns"][] = "multiplication_rate";
$proto143["m_columns"][] = "many_product_group_id";
$proto143["m_columns"][] = "trading_sort_id";
$proto143["m_columns"][] = "many_product_group_saiban";
$proto143["m_columns"][] = "purchase_category";
$proto143["m_columns"][] = "created_at";
$proto143["m_columns"][] = "created_by";
$proto143["m_columns"][] = "manual_input_price_per_gram";
$proto143["m_columns"][] = "satei_start";
$proto143["m_columns"][] = "self_DA_INTENSITY";
$proto143["m_columns"][] = "self_DA_OVERTONE";
$proto143["m_columns"][] = "self_DA_COLOR";
$proto143["m_columns"][] = "self_DA_CLARITY";
$proto143["m_columns"][] = "self_DA_CUT";
$proto143["m_columns"][] = "self_DA_POLISH";
$proto143["m_columns"][] = "self_DA_SYMMETRY";
$proto143["m_columns"][] = "self_DA_FLUO";
$proto143["m_columns"][] = "self_DA_COLOR_FLUO";
$proto143["m_columns"][] = "self_DA_FRAPA";
$proto143["m_columns"][] = "self_DA_RATE";
$proto143["m_columns"][] = "self_multiplication_rate";
$proto143["m_columns"][] = "is_seiyaku";
$proto143["m_columns"][] = "destination_sold_out";
$proto143["m_columns"][] = "mypage_update_prohibited";
$proto143["m_columns"][] = "gold_check_scan_id";
$proto143["m_columns"][] = "buy_campaign_data_id";
$proto143["m_columns"][] = "REG_PHOTOGRAPHER_DATE_start";
$proto143["m_columns"][] = "commission";
$proto143["m_columns"][] = "addtime_gold_check_id";
$proto143["m_columns"][] = "is_recovery";
$proto143["m_columns"][] = "sales_cost";
$proto143["m_columns"][] = "mst_business_partner_id";
$proto143["m_columns"][] = "DA_GROSSPROFIT_2";
$proto143["m_columns"][] = "DA_INTEREST_2";
$proto143["m_columns"][] = "minus_weight";
$proto143["m_columns"][] = "diameter_size";
$proto143["m_columns"][] = "metal_rate_date";
$obj = new SQLTable($proto143);

$proto142["m_table"] = $obj;
$proto142["m_sql"] = "`shouhin`";
$proto142["m_alias"] = "";
$proto142["m_srcTableName"] = "dia";
$proto144=array();
$proto144["m_sql"] = "";
$proto144["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto144["m_column"]=$obj;
$proto144["m_contained"] = array();
$proto144["m_strCase"] = "";
$proto144["m_havingmode"] = false;
$proto144["m_inBrackets"] = false;
$proto144["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto144);

$proto142["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto142);

$proto0["m_fromlist"][]=$obj;
												$proto146=array();
$proto146["m_link"] = "SQLL_LEFTJOIN";
			$proto147=array();
$proto147["m_strName"] = "Eoc";
$proto147["m_srcTableName"] = "dia";
$proto147["m_columns"] = array();
$proto147["m_columns"][] = "ecc_id";
$proto147["m_columns"][] = "ecc_seq";
$proto147["m_columns"][] = "name1";
$proto147["m_columns"][] = "created_t";
$proto147["m_columns"][] = "registerd_id";
$proto147["m_columns"][] = "kaitori_staff_id";
$proto147["m_columns"][] = "name2";
$proto147["m_columns"][] = "wareki";
$proto147["m_columns"][] = "b1";
$proto147["m_columns"][] = "b2";
$proto147["m_columns"][] = "b3";
$proto147["m_columns"][] = "birth_day";
$proto147["m_columns"][] = "age";
$proto147["m_columns"][] = "zip";
$proto147["m_columns"][] = "zip1";
$proto147["m_columns"][] = "zip2";
$proto147["m_columns"][] = "address1";
$proto147["m_columns"][] = "address2";
$proto147["m_columns"][] = "address3";
$proto147["m_columns"][] = "tel";
$proto147["m_columns"][] = "tel2";
$proto147["m_columns"][] = "mail1";
$proto147["m_columns"][] = "mail2";
$proto147["m_columns"][] = "address_code";
$proto147["m_columns"][] = "bank_name";
$proto147["m_columns"][] = "bank_blunch_code";
$proto147["m_columns"][] = "bank_yokin_shubetu";
$proto147["m_columns"][] = "bank_account";
$proto147["m_columns"][] = "bank_acoount_name";
$proto147["m_columns"][] = "haisou_bangou";
$proto147["m_columns"][] = "sise_houhou";
$proto147["m_columns"][] = "hentou_houhou";
$proto147["m_columns"][] = "hentou_houhou_time";
$proto147["m_columns"][] = "mousikomi_id";
$proto147["m_columns"][] = "hituyou_shorui";
$proto147["m_columns"][] = "seiyaku_fuseiritu";
$proto147["m_columns"][] = "mitumori_taku";
$proto147["m_columns"][] = "seacanse";
$proto147["m_columns"][] = "remark";
$proto147["m_columns"][] = "type";
$proto147["m_columns"][] = "sales_flag";
$proto147["m_columns"][] = "src_type";
$proto147["m_columns"][] = "liquidation_shop_code";
$proto147["m_columns"][] = "insurance_amount_print";
$proto147["m_columns"][] = "jis_code";
$proto147["m_columns"][] = "updated_at";
$proto147["m_columns"][] = "_registerd_id";
$proto147["m_columns"][] = "mail_check_type";
$proto147["m_columns"][] = "purchase_type";
$proto147["m_columns"][] = "sex";
$proto147["m_columns"][] = "m_tel";
$proto147["m_columns"][] = "fax";
$proto147["m_columns"][] = "chigin_kaitori";
$proto147["m_columns"][] = "option1";
$proto147["m_columns"][] = "option2";
$proto147["m_columns"][] = "option3";
$proto147["m_columns"][] = "option4";
$proto147["m_columns"][] = "option5";
$proto147["m_columns"][] = "option6";
$proto147["m_columns"][] = "option7";
$proto147["m_columns"][] = "option8";
$proto147["m_columns"][] = "option9";
$proto147["m_columns"][] = "option10";
$proto147["m_columns"][] = "option11";
$proto147["m_columns"][] = "option12";
$proto147["m_columns"][] = "option13";
$proto147["m_columns"][] = "rakuda_csv_flag";
$proto147["m_columns"][] = "EOC_COURIER_CHECK";
$proto147["m_columns"][] = "EOC_SIZE";
$proto147["m_columns"][] = "EOC_NUMBER";
$proto147["m_columns"][] = "EOC_REUSE";
$proto147["m_columns"][] = "EOC__DELIVERY_DATES";
$proto147["m_columns"][] = "EOC_SPECIFIED_TIME";
$proto147["m_columns"][] = "FIRST_NAME2";
$proto147["m_columns"][] = "LAST_NAME2";
$proto147["m_columns"][] = "EOC__DATE_AND_TIME_2";
$proto147["m_columns"][] = "EOC__BOX_NUMBER";
$proto147["m_columns"][] = "FIRST_NAME_KANA";
$proto147["m_columns"][] = "LAST_NAME_KANA";
$proto147["m_columns"][] = "FLAG_SPEED";
$proto147["m_columns"][] = "SEARCH_MEDIA";
$proto147["m_columns"][] = "SEARCH_SITE";
$proto147["m_columns"][] = "UN_REACHABLE";
$proto147["m_columns"][] = "FLG_MAIL_SAGAWA";
$proto147["m_columns"][] = "FLG_MAIL_OTHER";
$proto147["m_columns"][] = "ALLSEIYAKU";
$proto147["m_columns"][] = "ICHIBUSEIYAKU";
$proto147["m_columns"][] = "seiyakukin";
$proto147["m_columns"][] = "kaitorihuka";
$proto147["m_columns"][] = "awazu_date";
$proto147["m_columns"][] = "seiyaku_price";
$proto147["m_columns"][] = "eoc_search_keyword";
$proto147["m_columns"][] = "sonota";
$proto147["m_columns"][] = "size_kosuu";
$proto147["m_columns"][] = "sagawa_shuuka_flag";
$proto147["m_columns"][] = "line_check";
$proto147["m_columns"][] = "sagawa_shuukairai_denwabangou";
$proto147["m_columns"][] = "kaitori_sougak";
$proto147["m_columns"][] = "flag";
$proto147["m_columns"][] = "key_code";
$proto147["m_columns"][] = "dm_check_type";
$proto147["m_columns"][] = "kit_flag";
$proto147["m_columns"][] = "kit_done_flag";
$proto147["m_columns"][] = "bank_details_code";
$proto147["m_columns"][] = "bank_details_blunch_name";
$proto147["m_columns"][] = "bank_details_blunch_code";
$proto147["m_columns"][] = "bank_details_account_number";
$proto147["m_columns"][] = "bank_details_symbol";
$proto147["m_columns"][] = "bank_details_number";
$proto147["m_columns"][] = "bank_details_account_name";
$proto147["m_columns"][] = "bank_details_deposit_type";
$proto147["m_columns"][] = "mypage_id";
$proto147["m_columns"][] = "UN_REACHABLE_brand";
$proto147["m_columns"][] = "sagawa_haisou_hoken";
$proto147["m_columns"][] = "transfer_confirm";
$proto147["m_columns"][] = "outside_bank";
$proto147["m_columns"][] = "new_name";
$proto147["m_columns"][] = "letterpack";
$proto147["m_columns"][] = "satei_saisoku_2_days";
$proto147["m_columns"][] = "satei_saisoku_7_days";
$proto147["m_columns"][] = "accept_flag";
$proto147["m_columns"][] = "delivery_flag";
$proto147["m_columns"][] = "refining_weight";
$proto147["m_columns"][] = "line_chat_url";
$proto147["m_columns"][] = "royal_customer_status";
$proto147["m_columns"][] = "is_business_customer";
$proto147["m_columns"][] = "is_exist_haisouhosyo";
$proto147["m_columns"][] = "meigi_hankaku_kana";
$proto147["m_columns"][] = "building_types";
$proto147["m_columns"][] = "dwelling_types";
$proto147["m_columns"][] = "is_yamato_csv";
$proto147["m_columns"][] = "is_seiren_csv";
$obj = new SQLTable($proto147);

$proto146["m_table"] = $obj;
$proto146["m_sql"] = "LEFT OUTER JOIN `Eoc` ON `shouhin`.`ecc_id` = `Eoc`.`ecc_id`";
$proto146["m_alias"] = "";
$proto146["m_srcTableName"] = "dia";
$proto148=array();
$proto148["m_sql"] = "`shouhin`.`ecc_id` = `Eoc`.`ecc_id`";
$proto148["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "ecc_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "dia"
));

$proto148["m_column"]=$obj;
$proto148["m_contained"] = array();
$proto148["m_strCase"] = "= `Eoc`.`ecc_id`";
$proto148["m_havingmode"] = false;
$proto148["m_inBrackets"] = false;
$proto148["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto148);

$proto146["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto146);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto150=array();
						$obj = new SQLField(array(
	"m_strName" => "product_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "dia"
));

$proto150["m_column"]=$obj;
$proto150["m_bAsc"] = 0;
$proto150["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto150);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="dia";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_dia = createSqlQuery_dia();


	
		;

																																																														

$tdatadia[".sqlquery"] = $queryData_dia;

include_once(getabspath("include/dia_events.php"));
$tableEvents["dia"] = new eventclass_dia;
$tdatadia[".hasEvents"] = true;

?>