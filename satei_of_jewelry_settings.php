<?php
require_once(getabspath("classes/cipherer.php"));




$tdatasatei_of_jewelry = array();
	$tdatasatei_of_jewelry[".truncateText"] = true;
	$tdatasatei_of_jewelry[".NumberOfChars"] = 80;
	$tdatasatei_of_jewelry[".ShortName"] = "satei_of_jewelry";
	$tdatasatei_of_jewelry[".OwnerID"] = "";
	$tdatasatei_of_jewelry[".OriginalTable"] = "shouhin";

//	field labels
$fieldLabelssatei_of_jewelry = array();
$fieldToolTipssatei_of_jewelry = array();
$pageTitlessatei_of_jewelry = array();
$placeHolderssatei_of_jewelry = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelssatei_of_jewelry["Japanese"] = array();
	$fieldToolTipssatei_of_jewelry["Japanese"] = array();
	$placeHolderssatei_of_jewelry["Japanese"] = array();
	$pageTitlessatei_of_jewelry["Japanese"] = array();
	$fieldLabelssatei_of_jewelry["Japanese"]["product_id"] = "SEQ";
	$fieldToolTipssatei_of_jewelry["Japanese"]["product_id"] = "";
	$placeHolderssatei_of_jewelry["Japanese"]["product_id"] = "";
	$fieldLabelssatei_of_jewelry["Japanese"]["category_id"] = "大カテゴリー";
	$fieldToolTipssatei_of_jewelry["Japanese"]["category_id"] = "";
	$placeHolderssatei_of_jewelry["Japanese"]["category_id"] = "";
	$fieldLabelssatei_of_jewelry["Japanese"]["goods_title"] = "アイテム名";
	$fieldToolTipssatei_of_jewelry["Japanese"]["goods_title"] = "";
	$placeHolderssatei_of_jewelry["Japanese"]["goods_title"] = "";
	$fieldLabelssatei_of_jewelry["Japanese"]["title"] = "タイトル";
	$fieldToolTipssatei_of_jewelry["Japanese"]["title"] = "";
	$placeHolderssatei_of_jewelry["Japanese"]["title"] = "";
	$fieldLabelssatei_of_jewelry["Japanese"]["sub_category_id1"] = "中カテゴリー";
	$fieldToolTipssatei_of_jewelry["Japanese"]["sub_category_id1"] = "";
	$placeHolderssatei_of_jewelry["Japanese"]["sub_category_id1"] = "";
	$fieldLabelssatei_of_jewelry["Japanese"]["ecc_id"] = "Ecc Id";
	$fieldToolTipssatei_of_jewelry["Japanese"]["ecc_id"] = "";
	$placeHolderssatei_of_jewelry["Japanese"]["ecc_id"] = "";
	$fieldLabelssatei_of_jewelry["Japanese"]["price"] = "買取額";
	$fieldToolTipssatei_of_jewelry["Japanese"]["price"] = "";
	$placeHolderssatei_of_jewelry["Japanese"]["price"] = "";
	$fieldLabelssatei_of_jewelry["Japanese"]["sales_price"] = "販売額";
	$fieldToolTipssatei_of_jewelry["Japanese"]["sales_price"] = "";
	$placeHolderssatei_of_jewelry["Japanese"]["sales_price"] = "";
	$fieldLabelssatei_of_jewelry["Japanese"]["description"] = "メモ";
	$fieldToolTipssatei_of_jewelry["Japanese"]["description"] = "";
	$placeHolderssatei_of_jewelry["Japanese"]["description"] = "";
	$fieldLabelssatei_of_jewelry["Japanese"]["status"] = "商品状態";
	$fieldToolTipssatei_of_jewelry["Japanese"]["status"] = "";
	$placeHolderssatei_of_jewelry["Japanese"]["status"] = "";
	$fieldLabelssatei_of_jewelry["Japanese"]["product_num"] = "ブランドID";
	$fieldToolTipssatei_of_jewelry["Japanese"]["product_num"] = "";
	$placeHolderssatei_of_jewelry["Japanese"]["product_num"] = "";
	$fieldLabelssatei_of_jewelry["Japanese"]["yahoo_sankou_uwadai"] = "参考上代";
	$fieldToolTipssatei_of_jewelry["Japanese"]["yahoo_sankou_uwadai"] = "";
	$placeHolderssatei_of_jewelry["Japanese"]["yahoo_sankou_uwadai"] = "";
	$fieldLabelssatei_of_jewelry["Japanese"]["yahoo_sozai"] = "素材";
	$fieldToolTipssatei_of_jewelry["Japanese"]["yahoo_sozai"] = "";
	$placeHolderssatei_of_jewelry["Japanese"]["yahoo_sozai"] = "";
	$fieldLabelssatei_of_jewelry["Japanese"]["yahoo_kataban"] = "型番";
	$fieldToolTipssatei_of_jewelry["Japanese"]["yahoo_kataban"] = "";
	$placeHolderssatei_of_jewelry["Japanese"]["yahoo_kataban"] = "";
	$fieldLabelssatei_of_jewelry["Japanese"]["yahoo_condition2"] = "コンディション";
	$fieldToolTipssatei_of_jewelry["Japanese"]["yahoo_condition2"] = "";
	$placeHolderssatei_of_jewelry["Japanese"]["yahoo_condition2"] = "";
	$fieldLabelssatei_of_jewelry["Japanese"]["yahoo_sinaban"] = "品番";
	$fieldToolTipssatei_of_jewelry["Japanese"]["yahoo_sinaban"] = "";
	$placeHolderssatei_of_jewelry["Japanese"]["yahoo_sinaban"] = "";
	$fieldLabelssatei_of_jewelry["Japanese"]["yahoo_sex"] = "性別";
	$fieldToolTipssatei_of_jewelry["Japanese"]["yahoo_sex"] = "";
	$placeHolderssatei_of_jewelry["Japanese"]["yahoo_sex"] = "";
	$fieldLabelssatei_of_jewelry["Japanese"]["nyuukin_price"] = "Nyuukin Price";
	$fieldToolTipssatei_of_jewelry["Japanese"]["nyuukin_price"] = "";
	$placeHolderssatei_of_jewelry["Japanese"]["nyuukin_price"] = "";
	$fieldLabelssatei_of_jewelry["Japanese"]["raku_title"] = "楽天タイトル";
	$fieldToolTipssatei_of_jewelry["Japanese"]["raku_title"] = "";
	$placeHolderssatei_of_jewelry["Japanese"]["raku_title"] = "";
	$fieldLabelssatei_of_jewelry["Japanese"]["label_output_flag"] = "ラベル出力";
	$fieldToolTipssatei_of_jewelry["Japanese"]["label_output_flag"] = "";
	$placeHolderssatei_of_jewelry["Japanese"]["label_output_flag"] = "";
	$fieldLabelssatei_of_jewelry["Japanese"]["season"] = "季節";
	$fieldToolTipssatei_of_jewelry["Japanese"]["season"] = "";
	$placeHolderssatei_of_jewelry["Japanese"]["season"] = "";
	$fieldLabelssatei_of_jewelry["Japanese"]["satei_by"] = "査定人";
	$fieldToolTipssatei_of_jewelry["Japanese"]["satei_by"] = "";
	$placeHolderssatei_of_jewelry["Japanese"]["satei_by"] = "";
	$fieldLabelssatei_of_jewelry["Japanese"]["kaitori_by"] = "Kaitori By";
	$fieldToolTipssatei_of_jewelry["Japanese"]["kaitori_by"] = "";
	$placeHolderssatei_of_jewelry["Japanese"]["kaitori_by"] = "";
	$fieldLabelssatei_of_jewelry["Japanese"]["comment"] = "コメント";
	$fieldToolTipssatei_of_jewelry["Japanese"]["comment"] = "";
	$placeHolderssatei_of_jewelry["Japanese"]["comment"] = "";
	$fieldLabelssatei_of_jewelry["Japanese"]["satei_hi"] = "査定日";
	$fieldToolTipssatei_of_jewelry["Japanese"]["satei_hi"] = "";
	$placeHolderssatei_of_jewelry["Japanese"]["satei_hi"] = "";
	$fieldLabelssatei_of_jewelry["Japanese"]["kaitory_hi"] = "Kaitory Hi";
	$fieldToolTipssatei_of_jewelry["Japanese"]["kaitory_hi"] = "";
	$placeHolderssatei_of_jewelry["Japanese"]["kaitory_hi"] = "";
	$fieldLabelssatei_of_jewelry["Japanese"]["DT_UP_DATE"] = "DT UP DATE";
	$fieldToolTipssatei_of_jewelry["Japanese"]["DT_UP_DATE"] = "";
	$placeHolderssatei_of_jewelry["Japanese"]["DT_UP_DATE"] = "";
	$fieldLabelssatei_of_jewelry["Japanese"]["AWAZU_DATE"] = "AWAZU DATE";
	$fieldToolTipssatei_of_jewelry["Japanese"]["AWAZU_DATE"] = "";
	$placeHolderssatei_of_jewelry["Japanese"]["AWAZU_DATE"] = "";
	$fieldLabelssatei_of_jewelry["Japanese"]["AWAZU_NIN"] = "AWAZU NIN";
	$fieldToolTipssatei_of_jewelry["Japanese"]["AWAZU_NIN"] = "";
	$placeHolderssatei_of_jewelry["Japanese"]["AWAZU_NIN"] = "";
	$fieldLabelssatei_of_jewelry["Japanese"]["gold_property"] = "金性";
	$fieldToolTipssatei_of_jewelry["Japanese"]["gold_property"] = "";
	$placeHolderssatei_of_jewelry["Japanese"]["gold_property"] = "";
	$fieldLabelssatei_of_jewelry["Japanese"]["ichiba_title"] = "帳票用品名";
	$fieldToolTipssatei_of_jewelry["Japanese"]["ichiba_title"] = "";
	$placeHolderssatei_of_jewelry["Japanese"]["ichiba_title"] = "";
	$fieldLabelssatei_of_jewelry["Japanese"]["Gram"] = "金性グラム";
	$fieldToolTipssatei_of_jewelry["Japanese"]["Gram"] = "";
	$placeHolderssatei_of_jewelry["Japanese"]["Gram"] = "";
	$fieldLabelssatei_of_jewelry["Japanese"]["Parent_stone"] = "親石";
	$fieldToolTipssatei_of_jewelry["Japanese"]["Parent_stone"] = "";
	$placeHolderssatei_of_jewelry["Japanese"]["Parent_stone"] = "";
	$fieldLabelssatei_of_jewelry["Japanese"]["Aside_stone"] = "脇石";
	$fieldToolTipssatei_of_jewelry["Japanese"]["Aside_stone"] = "";
	$placeHolderssatei_of_jewelry["Japanese"]["Aside_stone"] = "";
	$fieldLabelssatei_of_jewelry["Japanese"]["Appraiser"] = "鑑定機関";
	$fieldToolTipssatei_of_jewelry["Japanese"]["Appraiser"] = "";
	$placeHolderssatei_of_jewelry["Japanese"]["Appraiser"] = "";
	$fieldLabelssatei_of_jewelry["Japanese"]["Remarks"] = "宝飾備考";
	$fieldToolTipssatei_of_jewelry["Japanese"]["Remarks"] = "";
	$placeHolderssatei_of_jewelry["Japanese"]["Remarks"] = "";
	$fieldLabelssatei_of_jewelry["Japanese"]["Destination_selling"] = "売り先";
	$fieldToolTipssatei_of_jewelry["Japanese"]["Destination_selling"] = "";
	$placeHolderssatei_of_jewelry["Japanese"]["Destination_selling"] = "";
	$fieldLabelssatei_of_jewelry["Japanese"]["Finish"] = "仕上";
	$fieldToolTipssatei_of_jewelry["Japanese"]["Finish"] = "";
	$placeHolderssatei_of_jewelry["Japanese"]["Finish"] = "";
	$fieldLabelssatei_of_jewelry["Japanese"]["Discrimination"] = "鑑別";
	$fieldToolTipssatei_of_jewelry["Japanese"]["Discrimination"] = "";
	$placeHolderssatei_of_jewelry["Japanese"]["Discrimination"] = "";
	$fieldLabelssatei_of_jewelry["Japanese"]["accessories"] = "付属品";
	$fieldToolTipssatei_of_jewelry["Japanese"]["accessories"] = "";
	$placeHolderssatei_of_jewelry["Japanese"]["accessories"] = "";
	$fieldLabelssatei_of_jewelry["Japanese"]["priority"] = "優先";
	$fieldToolTipssatei_of_jewelry["Japanese"]["priority"] = "";
	$placeHolderssatei_of_jewelry["Japanese"]["priority"] = "";
	$fieldLabelssatei_of_jewelry["Japanese"]["A_storage"] = "A保管";
	$fieldToolTipssatei_of_jewelry["Japanese"]["A_storage"] = "";
	$placeHolderssatei_of_jewelry["Japanese"]["A_storage"] = "";
	$fieldLabelssatei_of_jewelry["Japanese"]["price_per_gram"] = "金性単価";
	$fieldToolTipssatei_of_jewelry["Japanese"]["price_per_gram"] = "";
	$placeHolderssatei_of_jewelry["Japanese"]["price_per_gram"] = "";
	$fieldLabelssatei_of_jewelry["Japanese"]["price_per_parent_stone"] = "親石単価";
	$fieldToolTipssatei_of_jewelry["Japanese"]["price_per_parent_stone"] = "";
	$placeHolderssatei_of_jewelry["Japanese"]["price_per_parent_stone"] = "";
	$fieldLabelssatei_of_jewelry["Japanese"]["price_per_aside_stone"] = "脇石単価";
	$fieldToolTipssatei_of_jewelry["Japanese"]["price_per_aside_stone"] = "";
	$placeHolderssatei_of_jewelry["Japanese"]["price_per_aside_stone"] = "";
	$fieldLabelssatei_of_jewelry["Japanese"]["price_secret"] = "買取額隠語";
	$fieldToolTipssatei_of_jewelry["Japanese"]["price_secret"] = "";
	$placeHolderssatei_of_jewelry["Japanese"]["price_secret"] = "";
	$fieldLabelssatei_of_jewelry["Japanese"]["sales_price_secret"] = "販売額隠語";
	$fieldToolTipssatei_of_jewelry["Japanese"]["sales_price_secret"] = "";
	$placeHolderssatei_of_jewelry["Japanese"]["sales_price_secret"] = "";
	$fieldLabelssatei_of_jewelry["Japanese"]["eq"] = "=";
	$fieldToolTipssatei_of_jewelry["Japanese"]["eq"] = "";
	$placeHolderssatei_of_jewelry["Japanese"]["eq"] = "";
	$fieldLabelssatei_of_jewelry["Japanese"]["en"] = "円";
	$fieldToolTipssatei_of_jewelry["Japanese"]["en"] = "";
	$placeHolderssatei_of_jewelry["Japanese"]["en"] = "";
	$fieldLabelssatei_of_jewelry["Japanese"]["line"] = "ライン";
	$fieldToolTipssatei_of_jewelry["Japanese"]["line"] = "";
	$placeHolderssatei_of_jewelry["Japanese"]["line"] = "";
	$fieldLabelssatei_of_jewelry["Japanese"]["item_name"] = "アイテム名";
	$fieldToolTipssatei_of_jewelry["Japanese"]["item_name"] = "";
	$placeHolderssatei_of_jewelry["Japanese"]["item_name"] = "";
	$fieldLabelssatei_of_jewelry["Japanese"]["serial_number"] = "機番";
	$fieldToolTipssatei_of_jewelry["Japanese"]["serial_number"] = "";
	$placeHolderssatei_of_jewelry["Japanese"]["serial_number"] = "";
	$fieldLabelssatei_of_jewelry["Japanese"]["stamp"] = "刻印";
	$fieldToolTipssatei_of_jewelry["Japanese"]["stamp"] = "";
	$placeHolderssatei_of_jewelry["Japanese"]["stamp"] = "";
	$fieldLabelssatei_of_jewelry["Japanese"]["motif"] = "モチーフ";
	$fieldToolTipssatei_of_jewelry["Japanese"]["motif"] = "";
	$placeHolderssatei_of_jewelry["Japanese"]["motif"] = "";
	$fieldLabelssatei_of_jewelry["Japanese"]["Setting"] = "セッティング";
	$fieldToolTipssatei_of_jewelry["Japanese"]["Setting"] = "";
	$placeHolderssatei_of_jewelry["Japanese"]["Setting"] = "";
	$fieldLabelssatei_of_jewelry["Japanese"]["processing"] = "処理";
	$fieldToolTipssatei_of_jewelry["Japanese"]["processing"] = "";
	$placeHolderssatei_of_jewelry["Japanese"]["processing"] = "";
	$fieldLabelssatei_of_jewelry["Japanese"]["Ring_size"] = "リングサイズ";
	$fieldToolTipssatei_of_jewelry["Japanese"]["Ring_size"] = "";
	$placeHolderssatei_of_jewelry["Japanese"]["Ring_size"] = "";
	$fieldLabelssatei_of_jewelry["Japanese"]["ecc_seq"] = "顧客番号";
	$fieldToolTipssatei_of_jewelry["Japanese"]["ecc_seq"] = "";
	$placeHolderssatei_of_jewelry["Japanese"]["ecc_seq"] = "";
	$fieldLabelssatei_of_jewelry["Japanese"]["yahoo_junle"] = "ブランドジャンル";
	$fieldToolTipssatei_of_jewelry["Japanese"]["yahoo_junle"] = "";
	$placeHolderssatei_of_jewelry["Japanese"]["yahoo_junle"] = "";
	$fieldLabelssatei_of_jewelry["Japanese"]["logo"] = "ロゴ";
	$fieldToolTipssatei_of_jewelry["Japanese"]["logo"] = "";
	$placeHolderssatei_of_jewelry["Japanese"]["logo"] = "";
	$fieldLabelssatei_of_jewelry["Japanese"]["parts"] = "金具（パーツ）";
	$fieldToolTipssatei_of_jewelry["Japanese"]["parts"] = "";
	$placeHolderssatei_of_jewelry["Japanese"]["parts"] = "";
	$fieldLabelssatei_of_jewelry["Japanese"]["guarantee"] = "ギャランティ";
	$fieldToolTipssatei_of_jewelry["Japanese"]["guarantee"] = "";
	$placeHolderssatei_of_jewelry["Japanese"]["guarantee"] = "";
	$fieldLabelssatei_of_jewelry["Japanese"]["errors"] = "真贋チェックエラー";
	$fieldToolTipssatei_of_jewelry["Japanese"]["errors"] = "";
	$placeHolderssatei_of_jewelry["Japanese"]["errors"] = "";
	$fieldLabelssatei_of_jewelry["Japanese"]["designer"] = "デザイナー";
	$fieldToolTipssatei_of_jewelry["Japanese"]["designer"] = "";
	$placeHolderssatei_of_jewelry["Japanese"]["designer"] = "";
	$fieldLabelssatei_of_jewelry["Japanese"]["hahakai"] = "母貝";
	$fieldToolTipssatei_of_jewelry["Japanese"]["hahakai"] = "";
	$placeHolderssatei_of_jewelry["Japanese"]["hahakai"] = "";
	$fieldLabelssatei_of_jewelry["Japanese"]["effect"] = "効果";
	$fieldToolTipssatei_of_jewelry["Japanese"]["effect"] = "";
	$placeHolderssatei_of_jewelry["Japanese"]["effect"] = "";
	$fieldLabelssatei_of_jewelry["Japanese"]["shape"] = "シェイプ";
	$fieldToolTipssatei_of_jewelry["Japanese"]["shape"] = "";
	$placeHolderssatei_of_jewelry["Japanese"]["shape"] = "";
	$fieldLabelssatei_of_jewelry["Japanese"]["cutting_style"] = "カッティングスタイル";
	$fieldToolTipssatei_of_jewelry["Japanese"]["cutting_style"] = "";
	$placeHolderssatei_of_jewelry["Japanese"]["cutting_style"] = "";
	$fieldLabelssatei_of_jewelry["Japanese"]["chain_type"] = "チェーン種類";
	$fieldToolTipssatei_of_jewelry["Japanese"]["chain_type"] = "";
	$placeHolderssatei_of_jewelry["Japanese"]["chain_type"] = "";
	$fieldLabelssatei_of_jewelry["Japanese"]["number_of_stones"] = "石の個数";
	$fieldToolTipssatei_of_jewelry["Japanese"]["number_of_stones"] = "";
	$placeHolderssatei_of_jewelry["Japanese"]["number_of_stones"] = "";
	$fieldLabelssatei_of_jewelry["Japanese"]["satei_error"] = "査定抜けエラー";
	$fieldToolTipssatei_of_jewelry["Japanese"]["satei_error"] = "";
	$placeHolderssatei_of_jewelry["Japanese"]["satei_error"] = "";
	$fieldLabelssatei_of_jewelry["Japanese"]["producing_area"] = "産地";
	$fieldToolTipssatei_of_jewelry["Japanese"]["producing_area"] = "";
	$placeHolderssatei_of_jewelry["Japanese"]["producing_area"] = "";
	$fieldLabelssatei_of_jewelry["Japanese"]["shape_supplement"] = "形状補足";
	$fieldToolTipssatei_of_jewelry["Japanese"]["shape_supplement"] = "";
	$placeHolderssatei_of_jewelry["Japanese"]["shape_supplement"] = "";
	$fieldLabelssatei_of_jewelry["Japanese"]["side_gem"] = "脇石";
	$fieldToolTipssatei_of_jewelry["Japanese"]["side_gem"] = "";
	$placeHolderssatei_of_jewelry["Japanese"]["side_gem"] = "";
	$fieldLabelssatei_of_jewelry["Japanese"]["product_style"] = "形状名";
	$fieldToolTipssatei_of_jewelry["Japanese"]["product_style"] = "";
	$placeHolderssatei_of_jewelry["Japanese"]["product_style"] = "";
	$fieldLabelssatei_of_jewelry["Japanese"]["unit"] = "単位";
	$fieldToolTipssatei_of_jewelry["Japanese"]["unit"] = "";
	$placeHolderssatei_of_jewelry["Japanese"]["unit"] = "";
	$fieldLabelssatei_of_jewelry["Japanese"]["hall_mark"] = "ホールマーク";
	$fieldToolTipssatei_of_jewelry["Japanese"]["hall_mark"] = "";
	$placeHolderssatei_of_jewelry["Japanese"]["hall_mark"] = "";
	$fieldLabelssatei_of_jewelry["Japanese"]["plate"] = "プレート";
	$fieldToolTipssatei_of_jewelry["Japanese"]["plate"] = "";
	$placeHolderssatei_of_jewelry["Japanese"]["plate"] = "";
	$fieldLabelssatei_of_jewelry["Japanese"]["updated_by"] = "Updated By";
	$fieldToolTipssatei_of_jewelry["Japanese"]["updated_by"] = "";
	$placeHolderssatei_of_jewelry["Japanese"]["updated_by"] = "";
	$fieldLabelssatei_of_jewelry["Japanese"]["country_of_origin"] = "原産国";
	$fieldToolTipssatei_of_jewelry["Japanese"]["country_of_origin"] = "";
	$placeHolderssatei_of_jewelry["Japanese"]["country_of_origin"] = "";
	$fieldLabelssatei_of_jewelry["Japanese"]["parallel_import_flag"] = "並行輸入品";
	$fieldToolTipssatei_of_jewelry["Japanese"]["parallel_import_flag"] = "";
	$placeHolderssatei_of_jewelry["Japanese"]["parallel_import_flag"] = "";
	$fieldLabelssatei_of_jewelry["Japanese"]["meisai_number"] = "明細No.";
	$fieldToolTipssatei_of_jewelry["Japanese"]["meisai_number"] = "";
	$placeHolderssatei_of_jewelry["Japanese"]["meisai_number"] = "";
	$fieldLabelssatei_of_jewelry["Japanese"]["tentou_label_output_flag"] = "ST不変ラベル出力";
	$fieldToolTipssatei_of_jewelry["Japanese"]["tentou_label_output_flag"] = "";
	$placeHolderssatei_of_jewelry["Japanese"]["tentou_label_output_flag"] = "";
	$fieldLabelssatei_of_jewelry["Japanese"]["itaku_flag"] = "委託チェック";
	$fieldToolTipssatei_of_jewelry["Japanese"]["itaku_flag"] = "";
	$placeHolderssatei_of_jewelry["Japanese"]["itaku_flag"] = "";
	$fieldLabelssatei_of_jewelry["Japanese"]["novelty"] = "ノベルティ";
	$fieldToolTipssatei_of_jewelry["Japanese"]["novelty"] = "";
	$placeHolderssatei_of_jewelry["Japanese"]["novelty"] = "";
	$fieldLabelssatei_of_jewelry["Japanese"]["initial_included"] = "イニシャル入り";
	$fieldToolTipssatei_of_jewelry["Japanese"]["initial_included"] = "";
	$placeHolderssatei_of_jewelry["Japanese"]["initial_included"] = "";
	$fieldLabelssatei_of_jewelry["Japanese"]["auto_price_cut_prohibited"] = "自動値下げ禁止フラグ";
	$fieldToolTipssatei_of_jewelry["Japanese"]["auto_price_cut_prohibited"] = "";
	$placeHolderssatei_of_jewelry["Japanese"]["auto_price_cut_prohibited"] = "";
	$fieldLabelssatei_of_jewelry["Japanese"]["Eoc_trader_id_for_buy"] = "Eoc Trader Id For Buy";
	$fieldToolTipssatei_of_jewelry["Japanese"]["Eoc_trader_id_for_buy"] = "";
	$placeHolderssatei_of_jewelry["Japanese"]["Eoc_trader_id_for_buy"] = "";
	$fieldLabelssatei_of_jewelry["Japanese"]["other_cost"] = "その他コスト";
	$fieldToolTipssatei_of_jewelry["Japanese"]["other_cost"] = "";
	$placeHolderssatei_of_jewelry["Japanese"]["other_cost"] = "";
	$fieldLabelssatei_of_jewelry["Japanese"]["yahoo_condition1"] = "コンディションの詳細";
	$fieldToolTipssatei_of_jewelry["Japanese"]["yahoo_condition1"] = "";
	$placeHolderssatei_of_jewelry["Japanese"]["yahoo_condition1"] = "";
	$fieldLabelssatei_of_jewelry["Japanese"]["remark"] = "商品説明";
	$fieldToolTipssatei_of_jewelry["Japanese"]["remark"] = "";
	$placeHolderssatei_of_jewelry["Japanese"]["remark"] = "";
	$fieldLabelssatei_of_jewelry["Japanese"]["DA_SELFGRES"] = "自グレ";
	$fieldToolTipssatei_of_jewelry["Japanese"]["DA_SELFGRES"] = "";
	$placeHolderssatei_of_jewelry["Japanese"]["DA_SELFGRES"] = "";
	$fieldLabelssatei_of_jewelry["Japanese"]["DA_INTENSITY"] = "INSI";
	$fieldToolTipssatei_of_jewelry["Japanese"]["DA_INTENSITY"] = "";
	$placeHolderssatei_of_jewelry["Japanese"]["DA_INTENSITY"] = "";
	$fieldLabelssatei_of_jewelry["Japanese"]["DA_OVERTONE"] = "OVTO";
	$fieldToolTipssatei_of_jewelry["Japanese"]["DA_OVERTONE"] = "";
	$placeHolderssatei_of_jewelry["Japanese"]["DA_OVERTONE"] = "";
	$fieldLabelssatei_of_jewelry["Japanese"]["DA_COLOR"] = "カラー";
	$fieldToolTipssatei_of_jewelry["Japanese"]["DA_COLOR"] = "";
	$placeHolderssatei_of_jewelry["Japanese"]["DA_COLOR"] = "";
	$fieldLabelssatei_of_jewelry["Japanese"]["DA_CLARITY"] = "クラリティ";
	$fieldToolTipssatei_of_jewelry["Japanese"]["DA_CLARITY"] = "";
	$placeHolderssatei_of_jewelry["Japanese"]["DA_CLARITY"] = "";
	$fieldLabelssatei_of_jewelry["Japanese"]["DA_CUT"] = "カット";
	$fieldToolTipssatei_of_jewelry["Japanese"]["DA_CUT"] = "";
	$placeHolderssatei_of_jewelry["Japanese"]["DA_CUT"] = "";
	$fieldLabelssatei_of_jewelry["Japanese"]["DA_POLISH"] = "ポリッシュ";
	$fieldToolTipssatei_of_jewelry["Japanese"]["DA_POLISH"] = "";
	$placeHolderssatei_of_jewelry["Japanese"]["DA_POLISH"] = "";
	$fieldLabelssatei_of_jewelry["Japanese"]["DA_SYMMETRY"] = "シンメトリ";
	$fieldToolTipssatei_of_jewelry["Japanese"]["DA_SYMMETRY"] = "";
	$placeHolderssatei_of_jewelry["Japanese"]["DA_SYMMETRY"] = "";
	$fieldLabelssatei_of_jewelry["Japanese"]["DA_FLUO"] = "蛍光";
	$fieldToolTipssatei_of_jewelry["Japanese"]["DA_FLUO"] = "";
	$placeHolderssatei_of_jewelry["Japanese"]["DA_FLUO"] = "";
	$fieldLabelssatei_of_jewelry["Japanese"]["DA_COLOR_FLUO"] = "COFL";
	$fieldToolTipssatei_of_jewelry["Japanese"]["DA_COLOR_FLUO"] = "";
	$placeHolderssatei_of_jewelry["Japanese"]["DA_COLOR_FLUO"] = "";
	$fieldLabelssatei_of_jewelry["Japanese"]["DA_WIDE"] = "サイズ1";
	$fieldToolTipssatei_of_jewelry["Japanese"]["DA_WIDE"] = "";
	$placeHolderssatei_of_jewelry["Japanese"]["DA_WIDE"] = "";
	$fieldLabelssatei_of_jewelry["Japanese"]["DA_HIGH"] = "サイズ2";
	$fieldToolTipssatei_of_jewelry["Japanese"]["DA_HIGH"] = "";
	$placeHolderssatei_of_jewelry["Japanese"]["DA_HIGH"] = "";
	$fieldLabelssatei_of_jewelry["Japanese"]["DA_DEPTH"] = "サイズ3";
	$fieldToolTipssatei_of_jewelry["Japanese"]["DA_DEPTH"] = "";
	$placeHolderssatei_of_jewelry["Japanese"]["DA_DEPTH"] = "";
	$fieldLabelssatei_of_jewelry["Japanese"]["DA_FRAPA"] = "FRAPA";
	$fieldToolTipssatei_of_jewelry["Japanese"]["DA_FRAPA"] = "";
	$placeHolderssatei_of_jewelry["Japanese"]["DA_FRAPA"] = "";
	$fieldLabelssatei_of_jewelry["Japanese"]["DA_RATE"] = "RATE";
	$fieldToolTipssatei_of_jewelry["Japanese"]["DA_RATE"] = "";
	$placeHolderssatei_of_jewelry["Japanese"]["DA_RATE"] = "";
	$fieldLabelssatei_of_jewelry["Japanese"]["multiplication_rate"] = "掛け率";
	$fieldToolTipssatei_of_jewelry["Japanese"]["multiplication_rate"] = "";
	$placeHolderssatei_of_jewelry["Japanese"]["multiplication_rate"] = "";
	if (count($fieldToolTipssatei_of_jewelry["Japanese"]))
		$tdatasatei_of_jewelry[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelssatei_of_jewelry[""] = array();
	$fieldToolTipssatei_of_jewelry[""] = array();
	$placeHolderssatei_of_jewelry[""] = array();
	$pageTitlessatei_of_jewelry[""] = array();
	$fieldLabelssatei_of_jewelry[""]["logo"] = "Logo";
	$fieldToolTipssatei_of_jewelry[""]["logo"] = "";
	$placeHolderssatei_of_jewelry[""]["logo"] = "";
	$fieldLabelssatei_of_jewelry[""]["parts"] = "Parts";
	$fieldToolTipssatei_of_jewelry[""]["parts"] = "";
	$placeHolderssatei_of_jewelry[""]["parts"] = "";
	$fieldLabelssatei_of_jewelry[""]["guarantee"] = "Guarantee";
	$fieldToolTipssatei_of_jewelry[""]["guarantee"] = "";
	$placeHolderssatei_of_jewelry[""]["guarantee"] = "";
	$fieldLabelssatei_of_jewelry[""]["errors"] = "Errors";
	$fieldToolTipssatei_of_jewelry[""]["errors"] = "";
	$placeHolderssatei_of_jewelry[""]["errors"] = "";
	$fieldLabelssatei_of_jewelry[""]["designer"] = "Designer";
	$fieldToolTipssatei_of_jewelry[""]["designer"] = "";
	$placeHolderssatei_of_jewelry[""]["designer"] = "";
	$fieldLabelssatei_of_jewelry[""]["hahakai"] = "Hahakai";
	$fieldToolTipssatei_of_jewelry[""]["hahakai"] = "";
	$placeHolderssatei_of_jewelry[""]["hahakai"] = "";
	$fieldLabelssatei_of_jewelry[""]["effect"] = "Effect";
	$fieldToolTipssatei_of_jewelry[""]["effect"] = "";
	$placeHolderssatei_of_jewelry[""]["effect"] = "";
	$fieldLabelssatei_of_jewelry[""]["shape"] = "Shape";
	$fieldToolTipssatei_of_jewelry[""]["shape"] = "";
	$placeHolderssatei_of_jewelry[""]["shape"] = "";
	$fieldLabelssatei_of_jewelry[""]["cutting_style"] = "Cutting Style";
	$fieldToolTipssatei_of_jewelry[""]["cutting_style"] = "";
	$placeHolderssatei_of_jewelry[""]["cutting_style"] = "";
	$fieldLabelssatei_of_jewelry[""]["chain_type"] = "Chain Type";
	$fieldToolTipssatei_of_jewelry[""]["chain_type"] = "";
	$placeHolderssatei_of_jewelry[""]["chain_type"] = "";
	$fieldLabelssatei_of_jewelry[""]["number_of_stones"] = "Number Of Stones";
	$fieldToolTipssatei_of_jewelry[""]["number_of_stones"] = "";
	$placeHolderssatei_of_jewelry[""]["number_of_stones"] = "";
	$fieldLabelssatei_of_jewelry[""]["satei_error"] = "Satei Error";
	$fieldToolTipssatei_of_jewelry[""]["satei_error"] = "";
	$placeHolderssatei_of_jewelry[""]["satei_error"] = "";
	$fieldLabelssatei_of_jewelry[""]["producing_area"] = "Producing Area";
	$fieldToolTipssatei_of_jewelry[""]["producing_area"] = "";
	$placeHolderssatei_of_jewelry[""]["producing_area"] = "";
	$fieldLabelssatei_of_jewelry[""]["shape_supplement"] = "Shape Supplement";
	$fieldToolTipssatei_of_jewelry[""]["shape_supplement"] = "";
	$placeHolderssatei_of_jewelry[""]["shape_supplement"] = "";
	$fieldLabelssatei_of_jewelry[""]["side_gem"] = "Side Gem";
	$fieldToolTipssatei_of_jewelry[""]["side_gem"] = "";
	$placeHolderssatei_of_jewelry[""]["side_gem"] = "";
	$fieldLabelssatei_of_jewelry[""]["product_style"] = "Product Style";
	$fieldToolTipssatei_of_jewelry[""]["product_style"] = "";
	$placeHolderssatei_of_jewelry[""]["product_style"] = "";
	$fieldLabelssatei_of_jewelry[""]["unit"] = "Unit";
	$fieldToolTipssatei_of_jewelry[""]["unit"] = "";
	$placeHolderssatei_of_jewelry[""]["unit"] = "";
	$fieldLabelssatei_of_jewelry[""]["hall_mark"] = "Hall Mark";
	$fieldToolTipssatei_of_jewelry[""]["hall_mark"] = "";
	$placeHolderssatei_of_jewelry[""]["hall_mark"] = "";
	$fieldLabelssatei_of_jewelry[""]["plate"] = "Plate";
	$fieldToolTipssatei_of_jewelry[""]["plate"] = "";
	$placeHolderssatei_of_jewelry[""]["plate"] = "";
	$fieldLabelssatei_of_jewelry[""]["updated_by"] = "Updated By";
	$fieldToolTipssatei_of_jewelry[""]["updated_by"] = "";
	$placeHolderssatei_of_jewelry[""]["updated_by"] = "";
	$fieldLabelssatei_of_jewelry[""]["country_of_origin"] = "Country Of Origin";
	$fieldToolTipssatei_of_jewelry[""]["country_of_origin"] = "";
	$placeHolderssatei_of_jewelry[""]["country_of_origin"] = "";
	$fieldLabelssatei_of_jewelry[""]["parallel_import_flag"] = "Parallel Import Flag";
	$fieldToolTipssatei_of_jewelry[""]["parallel_import_flag"] = "";
	$placeHolderssatei_of_jewelry[""]["parallel_import_flag"] = "";
	$fieldLabelssatei_of_jewelry[""]["meisai_number"] = "Meisai Number";
	$fieldToolTipssatei_of_jewelry[""]["meisai_number"] = "";
	$placeHolderssatei_of_jewelry[""]["meisai_number"] = "";
	$fieldLabelssatei_of_jewelry[""]["tentou_label_output_flag"] = "Tentou Label Output Flag";
	$fieldToolTipssatei_of_jewelry[""]["tentou_label_output_flag"] = "";
	$placeHolderssatei_of_jewelry[""]["tentou_label_output_flag"] = "";
	$fieldLabelssatei_of_jewelry[""]["itaku_flag"] = "Itaku Flag";
	$fieldToolTipssatei_of_jewelry[""]["itaku_flag"] = "";
	$placeHolderssatei_of_jewelry[""]["itaku_flag"] = "";
	$fieldLabelssatei_of_jewelry[""]["novelty"] = "Novelty";
	$fieldToolTipssatei_of_jewelry[""]["novelty"] = "";
	$placeHolderssatei_of_jewelry[""]["novelty"] = "";
	$fieldLabelssatei_of_jewelry[""]["initial_included"] = "Initial Included";
	$fieldToolTipssatei_of_jewelry[""]["initial_included"] = "";
	$placeHolderssatei_of_jewelry[""]["initial_included"] = "";
	$fieldLabelssatei_of_jewelry[""]["auto_price_cut_prohibited"] = "Auto Price Cut Prohibited";
	$fieldToolTipssatei_of_jewelry[""]["auto_price_cut_prohibited"] = "";
	$placeHolderssatei_of_jewelry[""]["auto_price_cut_prohibited"] = "";
	$fieldLabelssatei_of_jewelry[""]["Eoc_trader_id_for_buy"] = "Eoc Trader Id For Buy";
	$fieldToolTipssatei_of_jewelry[""]["Eoc_trader_id_for_buy"] = "";
	$placeHolderssatei_of_jewelry[""]["Eoc_trader_id_for_buy"] = "";
	$fieldLabelssatei_of_jewelry[""]["other_cost"] = "Other Cost";
	$fieldToolTipssatei_of_jewelry[""]["other_cost"] = "";
	$placeHolderssatei_of_jewelry[""]["other_cost"] = "";
	$fieldLabelssatei_of_jewelry[""]["yahoo_condition1"] = "Yahoo Condition1";
	$fieldToolTipssatei_of_jewelry[""]["yahoo_condition1"] = "";
	$placeHolderssatei_of_jewelry[""]["yahoo_condition1"] = "";
	$fieldLabelssatei_of_jewelry[""]["remark"] = "Remark";
	$fieldToolTipssatei_of_jewelry[""]["remark"] = "";
	$placeHolderssatei_of_jewelry[""]["remark"] = "";
	$fieldLabelssatei_of_jewelry[""]["DA_SELFGRES"] = "DA SELFGRES";
	$fieldToolTipssatei_of_jewelry[""]["DA_SELFGRES"] = "";
	$placeHolderssatei_of_jewelry[""]["DA_SELFGRES"] = "";
	$fieldLabelssatei_of_jewelry[""]["DA_INTENSITY"] = "DA INTENSITY";
	$fieldToolTipssatei_of_jewelry[""]["DA_INTENSITY"] = "";
	$placeHolderssatei_of_jewelry[""]["DA_INTENSITY"] = "";
	$fieldLabelssatei_of_jewelry[""]["DA_OVERTONE"] = "DA OVERTONE";
	$fieldToolTipssatei_of_jewelry[""]["DA_OVERTONE"] = "";
	$placeHolderssatei_of_jewelry[""]["DA_OVERTONE"] = "";
	$fieldLabelssatei_of_jewelry[""]["DA_COLOR"] = "DA COLOR";
	$fieldToolTipssatei_of_jewelry[""]["DA_COLOR"] = "";
	$placeHolderssatei_of_jewelry[""]["DA_COLOR"] = "";
	$fieldLabelssatei_of_jewelry[""]["DA_CLARITY"] = "DA CLARITY";
	$fieldToolTipssatei_of_jewelry[""]["DA_CLARITY"] = "";
	$placeHolderssatei_of_jewelry[""]["DA_CLARITY"] = "";
	$fieldLabelssatei_of_jewelry[""]["DA_CUT"] = "DA CUT";
	$fieldToolTipssatei_of_jewelry[""]["DA_CUT"] = "";
	$placeHolderssatei_of_jewelry[""]["DA_CUT"] = "";
	$fieldLabelssatei_of_jewelry[""]["DA_POLISH"] = "DA POLISH";
	$fieldToolTipssatei_of_jewelry[""]["DA_POLISH"] = "";
	$placeHolderssatei_of_jewelry[""]["DA_POLISH"] = "";
	$fieldLabelssatei_of_jewelry[""]["DA_SYMMETRY"] = "DA SYMMETRY";
	$fieldToolTipssatei_of_jewelry[""]["DA_SYMMETRY"] = "";
	$placeHolderssatei_of_jewelry[""]["DA_SYMMETRY"] = "";
	$fieldLabelssatei_of_jewelry[""]["DA_FLUO"] = "DA FLUO";
	$fieldToolTipssatei_of_jewelry[""]["DA_FLUO"] = "";
	$placeHolderssatei_of_jewelry[""]["DA_FLUO"] = "";
	$fieldLabelssatei_of_jewelry[""]["DA_COLOR_FLUO"] = "DA COLOR FLUO";
	$fieldToolTipssatei_of_jewelry[""]["DA_COLOR_FLUO"] = "";
	$placeHolderssatei_of_jewelry[""]["DA_COLOR_FLUO"] = "";
	$fieldLabelssatei_of_jewelry[""]["DA_WIDE"] = "DA WIDE";
	$fieldToolTipssatei_of_jewelry[""]["DA_WIDE"] = "";
	$placeHolderssatei_of_jewelry[""]["DA_WIDE"] = "";
	$fieldLabelssatei_of_jewelry[""]["DA_HIGH"] = "DA HIGH";
	$fieldToolTipssatei_of_jewelry[""]["DA_HIGH"] = "";
	$placeHolderssatei_of_jewelry[""]["DA_HIGH"] = "";
	$fieldLabelssatei_of_jewelry[""]["DA_DEPTH"] = "DA DEPTH";
	$fieldToolTipssatei_of_jewelry[""]["DA_DEPTH"] = "";
	$placeHolderssatei_of_jewelry[""]["DA_DEPTH"] = "";
	$fieldLabelssatei_of_jewelry[""]["DA_FRAPA"] = "DA FRAPA";
	$fieldToolTipssatei_of_jewelry[""]["DA_FRAPA"] = "";
	$placeHolderssatei_of_jewelry[""]["DA_FRAPA"] = "";
	$fieldLabelssatei_of_jewelry[""]["DA_RATE"] = "DA RATE";
	$fieldToolTipssatei_of_jewelry[""]["DA_RATE"] = "";
	$placeHolderssatei_of_jewelry[""]["DA_RATE"] = "";
	$fieldLabelssatei_of_jewelry[""]["multiplication_rate"] = "Multiplication Rate";
	$fieldToolTipssatei_of_jewelry[""]["multiplication_rate"] = "";
	$placeHolderssatei_of_jewelry[""]["multiplication_rate"] = "";
	if (count($fieldToolTipssatei_of_jewelry[""]))
		$tdatasatei_of_jewelry[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelssatei_of_jewelry["English"] = array();
	$fieldToolTipssatei_of_jewelry["English"] = array();
	$placeHolderssatei_of_jewelry["English"] = array();
	$pageTitlessatei_of_jewelry["English"] = array();
	$fieldLabelssatei_of_jewelry["English"]["updated_by"] = "Updated By";
	$fieldToolTipssatei_of_jewelry["English"]["updated_by"] = "";
	$placeHolderssatei_of_jewelry["English"]["updated_by"] = "";
	$fieldLabelssatei_of_jewelry["English"]["country_of_origin"] = "Country Of Origin";
	$fieldToolTipssatei_of_jewelry["English"]["country_of_origin"] = "";
	$placeHolderssatei_of_jewelry["English"]["country_of_origin"] = "";
	$fieldLabelssatei_of_jewelry["English"]["parallel_import_flag"] = "Parallel Import Flag";
	$fieldToolTipssatei_of_jewelry["English"]["parallel_import_flag"] = "";
	$placeHolderssatei_of_jewelry["English"]["parallel_import_flag"] = "";
	$fieldLabelssatei_of_jewelry["English"]["meisai_number"] = "Meisai Number";
	$fieldToolTipssatei_of_jewelry["English"]["meisai_number"] = "";
	$placeHolderssatei_of_jewelry["English"]["meisai_number"] = "";
	$fieldLabelssatei_of_jewelry["English"]["tentou_label_output_flag"] = "Tentou Label Output Flag";
	$fieldToolTipssatei_of_jewelry["English"]["tentou_label_output_flag"] = "";
	$placeHolderssatei_of_jewelry["English"]["tentou_label_output_flag"] = "";
	$fieldLabelssatei_of_jewelry["English"]["itaku_flag"] = "Itaku Flag";
	$fieldToolTipssatei_of_jewelry["English"]["itaku_flag"] = "";
	$placeHolderssatei_of_jewelry["English"]["itaku_flag"] = "";
	$fieldLabelssatei_of_jewelry["English"]["novelty"] = "Novelty";
	$fieldToolTipssatei_of_jewelry["English"]["novelty"] = "";
	$placeHolderssatei_of_jewelry["English"]["novelty"] = "";
	$fieldLabelssatei_of_jewelry["English"]["initial_included"] = "Initial Included";
	$fieldToolTipssatei_of_jewelry["English"]["initial_included"] = "";
	$placeHolderssatei_of_jewelry["English"]["initial_included"] = "";
	$fieldLabelssatei_of_jewelry["English"]["auto_price_cut_prohibited"] = "Auto Price Cut Prohibited";
	$fieldToolTipssatei_of_jewelry["English"]["auto_price_cut_prohibited"] = "";
	$placeHolderssatei_of_jewelry["English"]["auto_price_cut_prohibited"] = "";
	$fieldLabelssatei_of_jewelry["English"]["Eoc_trader_id_for_buy"] = "Eoc Trader Id For Buy";
	$fieldToolTipssatei_of_jewelry["English"]["Eoc_trader_id_for_buy"] = "";
	$placeHolderssatei_of_jewelry["English"]["Eoc_trader_id_for_buy"] = "";
	$fieldLabelssatei_of_jewelry["English"]["other_cost"] = "Other Cost";
	$fieldToolTipssatei_of_jewelry["English"]["other_cost"] = "";
	$placeHolderssatei_of_jewelry["English"]["other_cost"] = "";
	$fieldLabelssatei_of_jewelry["English"]["yahoo_condition1"] = "Yahoo Condition1";
	$fieldToolTipssatei_of_jewelry["English"]["yahoo_condition1"] = "";
	$placeHolderssatei_of_jewelry["English"]["yahoo_condition1"] = "";
	$fieldLabelssatei_of_jewelry["English"]["remark"] = "Remark";
	$fieldToolTipssatei_of_jewelry["English"]["remark"] = "";
	$placeHolderssatei_of_jewelry["English"]["remark"] = "";
	$fieldLabelssatei_of_jewelry["English"]["DA_SELFGRES"] = "DA SELFGRES";
	$fieldToolTipssatei_of_jewelry["English"]["DA_SELFGRES"] = "";
	$placeHolderssatei_of_jewelry["English"]["DA_SELFGRES"] = "";
	$fieldLabelssatei_of_jewelry["English"]["DA_INTENSITY"] = "DA INTENSITY";
	$fieldToolTipssatei_of_jewelry["English"]["DA_INTENSITY"] = "";
	$placeHolderssatei_of_jewelry["English"]["DA_INTENSITY"] = "";
	$fieldLabelssatei_of_jewelry["English"]["DA_OVERTONE"] = "DA OVERTONE";
	$fieldToolTipssatei_of_jewelry["English"]["DA_OVERTONE"] = "";
	$placeHolderssatei_of_jewelry["English"]["DA_OVERTONE"] = "";
	$fieldLabelssatei_of_jewelry["English"]["DA_COLOR"] = "DA COLOR";
	$fieldToolTipssatei_of_jewelry["English"]["DA_COLOR"] = "";
	$placeHolderssatei_of_jewelry["English"]["DA_COLOR"] = "";
	$fieldLabelssatei_of_jewelry["English"]["DA_CLARITY"] = "DA CLARITY";
	$fieldToolTipssatei_of_jewelry["English"]["DA_CLARITY"] = "";
	$placeHolderssatei_of_jewelry["English"]["DA_CLARITY"] = "";
	$fieldLabelssatei_of_jewelry["English"]["DA_CUT"] = "DA CUT";
	$fieldToolTipssatei_of_jewelry["English"]["DA_CUT"] = "";
	$placeHolderssatei_of_jewelry["English"]["DA_CUT"] = "";
	$fieldLabelssatei_of_jewelry["English"]["DA_POLISH"] = "DA POLISH";
	$fieldToolTipssatei_of_jewelry["English"]["DA_POLISH"] = "";
	$placeHolderssatei_of_jewelry["English"]["DA_POLISH"] = "";
	$fieldLabelssatei_of_jewelry["English"]["DA_SYMMETRY"] = "DA SYMMETRY";
	$fieldToolTipssatei_of_jewelry["English"]["DA_SYMMETRY"] = "";
	$placeHolderssatei_of_jewelry["English"]["DA_SYMMETRY"] = "";
	$fieldLabelssatei_of_jewelry["English"]["DA_FLUO"] = "DA FLUO";
	$fieldToolTipssatei_of_jewelry["English"]["DA_FLUO"] = "";
	$placeHolderssatei_of_jewelry["English"]["DA_FLUO"] = "";
	$fieldLabelssatei_of_jewelry["English"]["DA_COLOR_FLUO"] = "DA COLOR FLUO";
	$fieldToolTipssatei_of_jewelry["English"]["DA_COLOR_FLUO"] = "";
	$placeHolderssatei_of_jewelry["English"]["DA_COLOR_FLUO"] = "";
	$fieldLabelssatei_of_jewelry["English"]["DA_WIDE"] = "DA WIDE";
	$fieldToolTipssatei_of_jewelry["English"]["DA_WIDE"] = "";
	$placeHolderssatei_of_jewelry["English"]["DA_WIDE"] = "";
	$fieldLabelssatei_of_jewelry["English"]["DA_HIGH"] = "DA HIGH";
	$fieldToolTipssatei_of_jewelry["English"]["DA_HIGH"] = "";
	$placeHolderssatei_of_jewelry["English"]["DA_HIGH"] = "";
	$fieldLabelssatei_of_jewelry["English"]["DA_DEPTH"] = "DA DEPTH";
	$fieldToolTipssatei_of_jewelry["English"]["DA_DEPTH"] = "";
	$placeHolderssatei_of_jewelry["English"]["DA_DEPTH"] = "";
	$fieldLabelssatei_of_jewelry["English"]["DA_FRAPA"] = "DA FRAPA";
	$fieldToolTipssatei_of_jewelry["English"]["DA_FRAPA"] = "";
	$placeHolderssatei_of_jewelry["English"]["DA_FRAPA"] = "";
	$fieldLabelssatei_of_jewelry["English"]["DA_RATE"] = "DA RATE";
	$fieldToolTipssatei_of_jewelry["English"]["DA_RATE"] = "";
	$placeHolderssatei_of_jewelry["English"]["DA_RATE"] = "";
	$fieldLabelssatei_of_jewelry["English"]["multiplication_rate"] = "Multiplication Rate";
	$fieldToolTipssatei_of_jewelry["English"]["multiplication_rate"] = "";
	$placeHolderssatei_of_jewelry["English"]["multiplication_rate"] = "";
	if (count($fieldToolTipssatei_of_jewelry["English"]))
		$tdatasatei_of_jewelry[".isUseToolTips"] = true;
}


	$tdatasatei_of_jewelry[".NCSearch"] = true;



$tdatasatei_of_jewelry[".shortTableName"] = "satei_of_jewelry";
$tdatasatei_of_jewelry[".nSecOptions"] = 0;
$tdatasatei_of_jewelry[".recsPerRowPrint"] = 1;
$tdatasatei_of_jewelry[".mainTableOwnerID"] = "";
$tdatasatei_of_jewelry[".moveNext"] = 1;
$tdatasatei_of_jewelry[".entityType"] = 1;

$tdatasatei_of_jewelry[".strOriginalTableName"] = "shouhin";

	



$tdatasatei_of_jewelry[".showAddInPopup"] = false;

$tdatasatei_of_jewelry[".showEditInPopup"] = false;

$tdatasatei_of_jewelry[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatasatei_of_jewelry[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatasatei_of_jewelry[".fieldsForRegister"] = array();

$tdatasatei_of_jewelry[".listAjax"] = false;

	$tdatasatei_of_jewelry[".audit"] = true;

	$tdatasatei_of_jewelry[".locking"] = false;



$tdatasatei_of_jewelry[".list"] = true;

$tdatasatei_of_jewelry[".inlineEdit"] = true;


$tdatasatei_of_jewelry[".reorderRecordsByHeader"] = true;
$tdatasatei_of_jewelry[".createSortByDropdown"] = true;
$tdatasatei_of_jewelry[".strSortControlSettingsJSON"] = "";



$tdatasatei_of_jewelry[".inlineAdd"] = true;

$tdatasatei_of_jewelry[".import"] = true;

$tdatasatei_of_jewelry[".exportTo"] = true;


$tdatasatei_of_jewelry[".delete"] = true;

$tdatasatei_of_jewelry[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatasatei_of_jewelry[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatasatei_of_jewelry[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatasatei_of_jewelry[".searchSaving"] = false;
//

$tdatasatei_of_jewelry[".showSearchPanel"] = true;
		$tdatasatei_of_jewelry[".flexibleSearch"] = true;

$tdatasatei_of_jewelry[".isUseAjaxSuggest"] = true;

$tdatasatei_of_jewelry[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																									
					
					
					
					
					
																																																																																																																																																																																																																																																																																																																																																																			
																																								
																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																					

$tdatasatei_of_jewelry[".ajaxCodeSnippetAdded"] = false;

$tdatasatei_of_jewelry[".buttonsAdded"] = true;

$tdatasatei_of_jewelry[".addPageEvents"] = true;

// use timepicker for search panel
$tdatasatei_of_jewelry[".isUseTimeForSearch"] = false;



$tdatasatei_of_jewelry[".badgeColor"] = "daa520";


$tdatasatei_of_jewelry[".allSearchFields"] = array();
$tdatasatei_of_jewelry[".filterFields"] = array();
$tdatasatei_of_jewelry[".requiredSearchFields"] = array();

$tdatasatei_of_jewelry[".allSearchFields"][] = "auto_price_cut_prohibited";
	$tdatasatei_of_jewelry[".allSearchFields"][] = "other_cost";
	$tdatasatei_of_jewelry[".allSearchFields"][] = "yahoo_condition1";
	$tdatasatei_of_jewelry[".allSearchFields"][] = "remark";
	$tdatasatei_of_jewelry[".allSearchFields"][] = "DA_SELFGRES";
	$tdatasatei_of_jewelry[".allSearchFields"][] = "DA_INTENSITY";
	$tdatasatei_of_jewelry[".allSearchFields"][] = "DA_OVERTONE";
	$tdatasatei_of_jewelry[".allSearchFields"][] = "DA_COLOR";
	$tdatasatei_of_jewelry[".allSearchFields"][] = "DA_CLARITY";
	$tdatasatei_of_jewelry[".allSearchFields"][] = "DA_CUT";
	$tdatasatei_of_jewelry[".allSearchFields"][] = "DA_POLISH";
	$tdatasatei_of_jewelry[".allSearchFields"][] = "DA_SYMMETRY";
	$tdatasatei_of_jewelry[".allSearchFields"][] = "DA_FLUO";
	$tdatasatei_of_jewelry[".allSearchFields"][] = "DA_COLOR_FLUO";
	$tdatasatei_of_jewelry[".allSearchFields"][] = "DA_WIDE";
	$tdatasatei_of_jewelry[".allSearchFields"][] = "DA_HIGH";
	$tdatasatei_of_jewelry[".allSearchFields"][] = "DA_DEPTH";
	$tdatasatei_of_jewelry[".allSearchFields"][] = "DA_FRAPA";
	$tdatasatei_of_jewelry[".allSearchFields"][] = "DA_RATE";
	$tdatasatei_of_jewelry[".allSearchFields"][] = "multiplication_rate";
	$tdatasatei_of_jewelry[".allSearchFields"][] = "tentou_label_output_flag";
	$tdatasatei_of_jewelry[".allSearchFields"][] = "itaku_flag";
	$tdatasatei_of_jewelry[".allSearchFields"][] = "country_of_origin";
	$tdatasatei_of_jewelry[".allSearchFields"][] = "meisai_number";
	$tdatasatei_of_jewelry[".allSearchFields"][] = "product_num";
	$tdatasatei_of_jewelry[".allSearchFields"][] = "category_id";
	$tdatasatei_of_jewelry[".allSearchFields"][] = "sub_category_id1";
	$tdatasatei_of_jewelry[".allSearchFields"][] = "yahoo_sex";
	$tdatasatei_of_jewelry[".allSearchFields"][] = "yahoo_condition2";
	$tdatasatei_of_jewelry[".allSearchFields"][] = "ecc_seq";
	$tdatasatei_of_jewelry[".allSearchFields"][] = "status";
	$tdatasatei_of_jewelry[".allSearchFields"][] = "satei_by";
	$tdatasatei_of_jewelry[".allSearchFields"][] = "title";
	$tdatasatei_of_jewelry[".allSearchFields"][] = "product_id";
	$tdatasatei_of_jewelry[".allSearchFields"][] = "yahoo_sinaban";
	$tdatasatei_of_jewelry[".allSearchFields"][] = "price";
	$tdatasatei_of_jewelry[".allSearchFields"][] = "sales_price";
	$tdatasatei_of_jewelry[".allSearchFields"][] = "description";
	$tdatasatei_of_jewelry[".allSearchFields"][] = "yahoo_kataban";
	$tdatasatei_of_jewelry[".allSearchFields"][] = "yahoo_sozai";
	$tdatasatei_of_jewelry[".allSearchFields"][] = "yahoo_sankou_uwadai";
	$tdatasatei_of_jewelry[".allSearchFields"][] = "season";
	$tdatasatei_of_jewelry[".allSearchFields"][] = "goods_title";
	$tdatasatei_of_jewelry[".allSearchFields"][] = "raku_title";
	$tdatasatei_of_jewelry[".allSearchFields"][] = "stamp";
	$tdatasatei_of_jewelry[".allSearchFields"][] = "processing";
	$tdatasatei_of_jewelry[".allSearchFields"][] = "label_output_flag";
	$tdatasatei_of_jewelry[".allSearchFields"][] = "Ring_size";
	$tdatasatei_of_jewelry[".allSearchFields"][] = "satei_hi";
	$tdatasatei_of_jewelry[".allSearchFields"][] = "gold_property";
	$tdatasatei_of_jewelry[".allSearchFields"][] = "ichiba_title";
	$tdatasatei_of_jewelry[".allSearchFields"][] = "Gram";
	$tdatasatei_of_jewelry[".allSearchFields"][] = "Parent_stone";
	$tdatasatei_of_jewelry[".allSearchFields"][] = "Aside_stone";
	$tdatasatei_of_jewelry[".allSearchFields"][] = "Appraiser";
	$tdatasatei_of_jewelry[".allSearchFields"][] = "Remarks";
	$tdatasatei_of_jewelry[".allSearchFields"][] = "Destination_selling";
	$tdatasatei_of_jewelry[".allSearchFields"][] = "Finish";
	$tdatasatei_of_jewelry[".allSearchFields"][] = "Discrimination";
	$tdatasatei_of_jewelry[".allSearchFields"][] = "comment";
	$tdatasatei_of_jewelry[".allSearchFields"][] = "accessories";
	$tdatasatei_of_jewelry[".allSearchFields"][] = "priority";
	$tdatasatei_of_jewelry[".allSearchFields"][] = "A_storage";
	$tdatasatei_of_jewelry[".allSearchFields"][] = "price_per_gram";
	$tdatasatei_of_jewelry[".allSearchFields"][] = "price_per_parent_stone";
	$tdatasatei_of_jewelry[".allSearchFields"][] = "price_per_aside_stone";
	$tdatasatei_of_jewelry[".allSearchFields"][] = "price_secret";
	$tdatasatei_of_jewelry[".allSearchFields"][] = "sales_price_secret";
	$tdatasatei_of_jewelry[".allSearchFields"][] = "line";
	$tdatasatei_of_jewelry[".allSearchFields"][] = "item_name";
	$tdatasatei_of_jewelry[".allSearchFields"][] = "serial_number";
	$tdatasatei_of_jewelry[".allSearchFields"][] = "motif";
	$tdatasatei_of_jewelry[".allSearchFields"][] = "Setting";
	$tdatasatei_of_jewelry[".allSearchFields"][] = "logo";
	$tdatasatei_of_jewelry[".allSearchFields"][] = "parts";
	$tdatasatei_of_jewelry[".allSearchFields"][] = "guarantee";
	$tdatasatei_of_jewelry[".allSearchFields"][] = "designer";
	$tdatasatei_of_jewelry[".allSearchFields"][] = "errors";
	$tdatasatei_of_jewelry[".allSearchFields"][] = "cutting_style";
	$tdatasatei_of_jewelry[".allSearchFields"][] = "chain_type";
	$tdatasatei_of_jewelry[".allSearchFields"][] = "shape";
	$tdatasatei_of_jewelry[".allSearchFields"][] = "effect";
	$tdatasatei_of_jewelry[".allSearchFields"][] = "hahakai";
	$tdatasatei_of_jewelry[".allSearchFields"][] = "number_of_stones";
	$tdatasatei_of_jewelry[".allSearchFields"][] = "product_style";
	$tdatasatei_of_jewelry[".allSearchFields"][] = "producing_area";
	$tdatasatei_of_jewelry[".allSearchFields"][] = "satei_error";
	$tdatasatei_of_jewelry[".allSearchFields"][] = "shape_supplement";
	$tdatasatei_of_jewelry[".allSearchFields"][] = "side_gem";
	$tdatasatei_of_jewelry[".allSearchFields"][] = "unit";
	$tdatasatei_of_jewelry[".allSearchFields"][] = "plate";
	$tdatasatei_of_jewelry[".allSearchFields"][] = "hall_mark";
	

$tdatasatei_of_jewelry[".googleLikeFields"] = array();
$tdatasatei_of_jewelry[".googleLikeFields"][] = "product_id";
$tdatasatei_of_jewelry[".googleLikeFields"][] = "category_id";
$tdatasatei_of_jewelry[".googleLikeFields"][] = "goods_title";
$tdatasatei_of_jewelry[".googleLikeFields"][] = "title";
$tdatasatei_of_jewelry[".googleLikeFields"][] = "sub_category_id1";
$tdatasatei_of_jewelry[".googleLikeFields"][] = "price";
$tdatasatei_of_jewelry[".googleLikeFields"][] = "sales_price";
$tdatasatei_of_jewelry[".googleLikeFields"][] = "description";
$tdatasatei_of_jewelry[".googleLikeFields"][] = "status";
$tdatasatei_of_jewelry[".googleLikeFields"][] = "product_num";
$tdatasatei_of_jewelry[".googleLikeFields"][] = "yahoo_sankou_uwadai";
$tdatasatei_of_jewelry[".googleLikeFields"][] = "yahoo_sozai";
$tdatasatei_of_jewelry[".googleLikeFields"][] = "yahoo_kataban";
$tdatasatei_of_jewelry[".googleLikeFields"][] = "yahoo_condition2";
$tdatasatei_of_jewelry[".googleLikeFields"][] = "yahoo_sinaban";
$tdatasatei_of_jewelry[".googleLikeFields"][] = "yahoo_sex";
$tdatasatei_of_jewelry[".googleLikeFields"][] = "raku_title";
$tdatasatei_of_jewelry[".googleLikeFields"][] = "label_output_flag";
$tdatasatei_of_jewelry[".googleLikeFields"][] = "season";
$tdatasatei_of_jewelry[".googleLikeFields"][] = "satei_by";
$tdatasatei_of_jewelry[".googleLikeFields"][] = "comment";
$tdatasatei_of_jewelry[".googleLikeFields"][] = "satei_hi";
$tdatasatei_of_jewelry[".googleLikeFields"][] = "gold_property";
$tdatasatei_of_jewelry[".googleLikeFields"][] = "ichiba_title";
$tdatasatei_of_jewelry[".googleLikeFields"][] = "Gram";
$tdatasatei_of_jewelry[".googleLikeFields"][] = "Parent_stone";
$tdatasatei_of_jewelry[".googleLikeFields"][] = "Aside_stone";
$tdatasatei_of_jewelry[".googleLikeFields"][] = "Appraiser";
$tdatasatei_of_jewelry[".googleLikeFields"][] = "Remarks";
$tdatasatei_of_jewelry[".googleLikeFields"][] = "Destination_selling";
$tdatasatei_of_jewelry[".googleLikeFields"][] = "Finish";
$tdatasatei_of_jewelry[".googleLikeFields"][] = "Discrimination";
$tdatasatei_of_jewelry[".googleLikeFields"][] = "accessories";
$tdatasatei_of_jewelry[".googleLikeFields"][] = "priority";
$tdatasatei_of_jewelry[".googleLikeFields"][] = "A_storage";
$tdatasatei_of_jewelry[".googleLikeFields"][] = "price_per_gram";
$tdatasatei_of_jewelry[".googleLikeFields"][] = "price_per_parent_stone";
$tdatasatei_of_jewelry[".googleLikeFields"][] = "price_per_aside_stone";
$tdatasatei_of_jewelry[".googleLikeFields"][] = "price_secret";
$tdatasatei_of_jewelry[".googleLikeFields"][] = "sales_price_secret";
$tdatasatei_of_jewelry[".googleLikeFields"][] = "line";
$tdatasatei_of_jewelry[".googleLikeFields"][] = "item_name";
$tdatasatei_of_jewelry[".googleLikeFields"][] = "serial_number";
$tdatasatei_of_jewelry[".googleLikeFields"][] = "stamp";
$tdatasatei_of_jewelry[".googleLikeFields"][] = "motif";
$tdatasatei_of_jewelry[".googleLikeFields"][] = "Setting";
$tdatasatei_of_jewelry[".googleLikeFields"][] = "processing";
$tdatasatei_of_jewelry[".googleLikeFields"][] = "Ring_size";
$tdatasatei_of_jewelry[".googleLikeFields"][] = "ecc_seq";
$tdatasatei_of_jewelry[".googleLikeFields"][] = "logo";
$tdatasatei_of_jewelry[".googleLikeFields"][] = "parts";
$tdatasatei_of_jewelry[".googleLikeFields"][] = "guarantee";
$tdatasatei_of_jewelry[".googleLikeFields"][] = "errors";
$tdatasatei_of_jewelry[".googleLikeFields"][] = "designer";
$tdatasatei_of_jewelry[".googleLikeFields"][] = "hahakai";
$tdatasatei_of_jewelry[".googleLikeFields"][] = "effect";
$tdatasatei_of_jewelry[".googleLikeFields"][] = "shape";
$tdatasatei_of_jewelry[".googleLikeFields"][] = "cutting_style";
$tdatasatei_of_jewelry[".googleLikeFields"][] = "chain_type";
$tdatasatei_of_jewelry[".googleLikeFields"][] = "number_of_stones";
$tdatasatei_of_jewelry[".googleLikeFields"][] = "satei_error";
$tdatasatei_of_jewelry[".googleLikeFields"][] = "producing_area";
$tdatasatei_of_jewelry[".googleLikeFields"][] = "shape_supplement";
$tdatasatei_of_jewelry[".googleLikeFields"][] = "side_gem";
$tdatasatei_of_jewelry[".googleLikeFields"][] = "product_style";
$tdatasatei_of_jewelry[".googleLikeFields"][] = "unit";
$tdatasatei_of_jewelry[".googleLikeFields"][] = "hall_mark";
$tdatasatei_of_jewelry[".googleLikeFields"][] = "plate";
$tdatasatei_of_jewelry[".googleLikeFields"][] = "country_of_origin";
$tdatasatei_of_jewelry[".googleLikeFields"][] = "meisai_number";
$tdatasatei_of_jewelry[".googleLikeFields"][] = "tentou_label_output_flag";
$tdatasatei_of_jewelry[".googleLikeFields"][] = "itaku_flag";
$tdatasatei_of_jewelry[".googleLikeFields"][] = "auto_price_cut_prohibited";
$tdatasatei_of_jewelry[".googleLikeFields"][] = "Eoc_trader_id_for_buy";
$tdatasatei_of_jewelry[".googleLikeFields"][] = "other_cost";
$tdatasatei_of_jewelry[".googleLikeFields"][] = "yahoo_condition1";
$tdatasatei_of_jewelry[".googleLikeFields"][] = "remark";
$tdatasatei_of_jewelry[".googleLikeFields"][] = "DA_SELFGRES";
$tdatasatei_of_jewelry[".googleLikeFields"][] = "DA_INTENSITY";
$tdatasatei_of_jewelry[".googleLikeFields"][] = "DA_OVERTONE";
$tdatasatei_of_jewelry[".googleLikeFields"][] = "DA_COLOR";
$tdatasatei_of_jewelry[".googleLikeFields"][] = "DA_CLARITY";
$tdatasatei_of_jewelry[".googleLikeFields"][] = "DA_CUT";
$tdatasatei_of_jewelry[".googleLikeFields"][] = "DA_POLISH";
$tdatasatei_of_jewelry[".googleLikeFields"][] = "DA_SYMMETRY";
$tdatasatei_of_jewelry[".googleLikeFields"][] = "DA_FLUO";
$tdatasatei_of_jewelry[".googleLikeFields"][] = "DA_COLOR_FLUO";
$tdatasatei_of_jewelry[".googleLikeFields"][] = "DA_WIDE";
$tdatasatei_of_jewelry[".googleLikeFields"][] = "DA_HIGH";
$tdatasatei_of_jewelry[".googleLikeFields"][] = "DA_DEPTH";
$tdatasatei_of_jewelry[".googleLikeFields"][] = "DA_FRAPA";
$tdatasatei_of_jewelry[".googleLikeFields"][] = "DA_RATE";
$tdatasatei_of_jewelry[".googleLikeFields"][] = "multiplication_rate";

$tdatasatei_of_jewelry[".panelSearchFields"] = array();
$tdatasatei_of_jewelry[".searchPanelOptions"] = array();
$tdatasatei_of_jewelry[".panelSearchFields"][] = "product_num";
	$tdatasatei_of_jewelry[".panelSearchFields"][] = "category_id";
	$tdatasatei_of_jewelry[".panelSearchFields"][] = "sub_category_id1";
	$tdatasatei_of_jewelry[".panelSearchFields"][] = "yahoo_sex";
	$tdatasatei_of_jewelry[".panelSearchFields"][] = "yahoo_condition2";
	$tdatasatei_of_jewelry[".panelSearchFields"][] = "status";
	
$tdatasatei_of_jewelry[".advSearchFields"] = array();
$tdatasatei_of_jewelry[".advSearchFields"][] = "auto_price_cut_prohibited";
$tdatasatei_of_jewelry[".advSearchFields"][] = "other_cost";
$tdatasatei_of_jewelry[".advSearchFields"][] = "yahoo_condition1";
$tdatasatei_of_jewelry[".advSearchFields"][] = "remark";
$tdatasatei_of_jewelry[".advSearchFields"][] = "DA_SELFGRES";
$tdatasatei_of_jewelry[".advSearchFields"][] = "DA_INTENSITY";
$tdatasatei_of_jewelry[".advSearchFields"][] = "DA_OVERTONE";
$tdatasatei_of_jewelry[".advSearchFields"][] = "DA_COLOR";
$tdatasatei_of_jewelry[".advSearchFields"][] = "DA_CLARITY";
$tdatasatei_of_jewelry[".advSearchFields"][] = "DA_CUT";
$tdatasatei_of_jewelry[".advSearchFields"][] = "DA_POLISH";
$tdatasatei_of_jewelry[".advSearchFields"][] = "DA_SYMMETRY";
$tdatasatei_of_jewelry[".advSearchFields"][] = "DA_FLUO";
$tdatasatei_of_jewelry[".advSearchFields"][] = "DA_COLOR_FLUO";
$tdatasatei_of_jewelry[".advSearchFields"][] = "DA_WIDE";
$tdatasatei_of_jewelry[".advSearchFields"][] = "DA_HIGH";
$tdatasatei_of_jewelry[".advSearchFields"][] = "DA_DEPTH";
$tdatasatei_of_jewelry[".advSearchFields"][] = "DA_FRAPA";
$tdatasatei_of_jewelry[".advSearchFields"][] = "DA_RATE";
$tdatasatei_of_jewelry[".advSearchFields"][] = "multiplication_rate";
$tdatasatei_of_jewelry[".advSearchFields"][] = "tentou_label_output_flag";
$tdatasatei_of_jewelry[".advSearchFields"][] = "itaku_flag";
$tdatasatei_of_jewelry[".advSearchFields"][] = "country_of_origin";
$tdatasatei_of_jewelry[".advSearchFields"][] = "meisai_number";
$tdatasatei_of_jewelry[".advSearchFields"][] = "product_num";
$tdatasatei_of_jewelry[".advSearchFields"][] = "category_id";
$tdatasatei_of_jewelry[".advSearchFields"][] = "sub_category_id1";
$tdatasatei_of_jewelry[".advSearchFields"][] = "yahoo_sex";
$tdatasatei_of_jewelry[".advSearchFields"][] = "yahoo_condition2";
$tdatasatei_of_jewelry[".advSearchFields"][] = "ecc_seq";
$tdatasatei_of_jewelry[".advSearchFields"][] = "status";
$tdatasatei_of_jewelry[".advSearchFields"][] = "satei_by";
$tdatasatei_of_jewelry[".advSearchFields"][] = "title";
$tdatasatei_of_jewelry[".advSearchFields"][] = "product_id";
$tdatasatei_of_jewelry[".advSearchFields"][] = "yahoo_sinaban";
$tdatasatei_of_jewelry[".advSearchFields"][] = "price";
$tdatasatei_of_jewelry[".advSearchFields"][] = "sales_price";
$tdatasatei_of_jewelry[".advSearchFields"][] = "description";
$tdatasatei_of_jewelry[".advSearchFields"][] = "yahoo_kataban";
$tdatasatei_of_jewelry[".advSearchFields"][] = "yahoo_sozai";
$tdatasatei_of_jewelry[".advSearchFields"][] = "yahoo_sankou_uwadai";
$tdatasatei_of_jewelry[".advSearchFields"][] = "season";
$tdatasatei_of_jewelry[".advSearchFields"][] = "goods_title";
$tdatasatei_of_jewelry[".advSearchFields"][] = "raku_title";
$tdatasatei_of_jewelry[".advSearchFields"][] = "stamp";
$tdatasatei_of_jewelry[".advSearchFields"][] = "processing";
$tdatasatei_of_jewelry[".advSearchFields"][] = "label_output_flag";
$tdatasatei_of_jewelry[".advSearchFields"][] = "Ring_size";
$tdatasatei_of_jewelry[".advSearchFields"][] = "satei_hi";
$tdatasatei_of_jewelry[".advSearchFields"][] = "gold_property";
$tdatasatei_of_jewelry[".advSearchFields"][] = "ichiba_title";
$tdatasatei_of_jewelry[".advSearchFields"][] = "Gram";
$tdatasatei_of_jewelry[".advSearchFields"][] = "Parent_stone";
$tdatasatei_of_jewelry[".advSearchFields"][] = "Aside_stone";
$tdatasatei_of_jewelry[".advSearchFields"][] = "Appraiser";
$tdatasatei_of_jewelry[".advSearchFields"][] = "Remarks";
$tdatasatei_of_jewelry[".advSearchFields"][] = "Destination_selling";
$tdatasatei_of_jewelry[".advSearchFields"][] = "Finish";
$tdatasatei_of_jewelry[".advSearchFields"][] = "Discrimination";
$tdatasatei_of_jewelry[".advSearchFields"][] = "comment";
$tdatasatei_of_jewelry[".advSearchFields"][] = "accessories";
$tdatasatei_of_jewelry[".advSearchFields"][] = "priority";
$tdatasatei_of_jewelry[".advSearchFields"][] = "A_storage";
$tdatasatei_of_jewelry[".advSearchFields"][] = "price_per_gram";
$tdatasatei_of_jewelry[".advSearchFields"][] = "price_per_parent_stone";
$tdatasatei_of_jewelry[".advSearchFields"][] = "price_per_aside_stone";
$tdatasatei_of_jewelry[".advSearchFields"][] = "price_secret";
$tdatasatei_of_jewelry[".advSearchFields"][] = "sales_price_secret";
$tdatasatei_of_jewelry[".advSearchFields"][] = "line";
$tdatasatei_of_jewelry[".advSearchFields"][] = "item_name";
$tdatasatei_of_jewelry[".advSearchFields"][] = "serial_number";
$tdatasatei_of_jewelry[".advSearchFields"][] = "motif";
$tdatasatei_of_jewelry[".advSearchFields"][] = "Setting";
$tdatasatei_of_jewelry[".advSearchFields"][] = "logo";
$tdatasatei_of_jewelry[".advSearchFields"][] = "parts";
$tdatasatei_of_jewelry[".advSearchFields"][] = "guarantee";
$tdatasatei_of_jewelry[".advSearchFields"][] = "designer";
$tdatasatei_of_jewelry[".advSearchFields"][] = "errors";
$tdatasatei_of_jewelry[".advSearchFields"][] = "cutting_style";
$tdatasatei_of_jewelry[".advSearchFields"][] = "chain_type";
$tdatasatei_of_jewelry[".advSearchFields"][] = "shape";
$tdatasatei_of_jewelry[".advSearchFields"][] = "effect";
$tdatasatei_of_jewelry[".advSearchFields"][] = "hahakai";
$tdatasatei_of_jewelry[".advSearchFields"][] = "number_of_stones";
$tdatasatei_of_jewelry[".advSearchFields"][] = "product_style";
$tdatasatei_of_jewelry[".advSearchFields"][] = "producing_area";
$tdatasatei_of_jewelry[".advSearchFields"][] = "satei_error";
$tdatasatei_of_jewelry[".advSearchFields"][] = "shape_supplement";
$tdatasatei_of_jewelry[".advSearchFields"][] = "side_gem";
$tdatasatei_of_jewelry[".advSearchFields"][] = "unit";
$tdatasatei_of_jewelry[".advSearchFields"][] = "plate";
$tdatasatei_of_jewelry[".advSearchFields"][] = "hall_mark";

$tdatasatei_of_jewelry[".tableType"] = "list";

$tdatasatei_of_jewelry[".printerPageOrientation"] = 0;
$tdatasatei_of_jewelry[".nPrinterPageScale"] = 100;

$tdatasatei_of_jewelry[".nPrinterSplitRecords"] = 40;

$tdatasatei_of_jewelry[".nPrinterPDFSplitRecords"] = 40;



$tdatasatei_of_jewelry[".geocodingEnabled"] = false;





$tdatasatei_of_jewelry[".listGridLayout"] = 3;





// view page pdf

// print page pdf

$tdatasatei_of_jewelry[".totalsFields"] = array();
$tdatasatei_of_jewelry[".totalsFields"][] = array(
	"fName" => "price",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');

$tdatasatei_of_jewelry[".pageSize"] = 20;

$tdatasatei_of_jewelry[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `shouhin`.`product_id` DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatasatei_of_jewelry[".strOrderBy"] = $tstrOrderBy;

$tdatasatei_of_jewelry[".orderindexes"] = array();
$tdatasatei_of_jewelry[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "`shouhin`.`product_id`");

$tdatasatei_of_jewelry[".sqlHead"] = "SELECT `shouhin`.`product_id`,  `shouhin`.`category_id`,  `shouhin`.`goods_title`,  `shouhin`.`title`,  `shouhin`.`sub_category_id1`,  `shouhin`.`ecc_id`,  `shouhin`.`price`,  `shouhin`.`sales_price`,  `shouhin`.`description`,  `shouhin`.`status`,  `shouhin`.`product_num`,  `shouhin`.`yahoo_sankou_uwadai`,  `shouhin`.`yahoo_sozai`,  `shouhin`.`yahoo_kataban`,  `shouhin`.`yahoo_condition2`,  `shouhin`.`yahoo_sinaban`,  `shouhin`.`yahoo_sex`,  `shouhin`.`nyuukin_price`,  `shouhin`.`raku_title`,  `shouhin`.`label_output_flag`,  `shouhin`.`season`,  `shouhin`.`satei_by`,  `shouhin`.`kaitori_by`,  `shouhin`.`comment`,  `shouhin`.`satei_hi`,  `shouhin`.`kaitory_hi`,  `shouhin`.`DT_UP_DATE`,  `shouhin`.`AWAZU_DATE`,  `shouhin`.`AWAZU_NIN`,  `shouhin`.`gold_property`,  `shouhin`.`ichiba_title`,  `shouhin`.`Gram`,  `shouhin`.`Parent_stone`,  `shouhin`.`Aside_stone`,  `shouhin`.`Appraiser`,  `shouhin`.`Remarks`,  `shouhin`.`Destination_selling`,  `shouhin`.`Finish`,  `shouhin`.`Discrimination`,  `shouhin`.`accessories`,  `shouhin`.`priority`,  `shouhin`.`A_storage`,  `shouhin`.`price_per_gram`,  `shouhin`.`price_per_parent_stone`,  `shouhin`.`price_per_aside_stone`,  `shouhin`.`price_secret`,  `shouhin`.`sales_price_secret`,  `shouhin`.`eq`,  `shouhin`.`en`,  `shouhin`.`line`,  `shouhin`.`item_name`,  `shouhin`.`serial_number`,  `shouhin`.`stamp`,  `shouhin`.`motif`,  `shouhin`.`Setting`,  `shouhin`.`processing`,  `shouhin`.`Ring_size`,  `Eoc`.`ecc_seq`,  `shouhin`.`yahoo_junle`,  `shouhin`.`logo`,  `shouhin`.`parts`,  `shouhin`.`guarantee`,  `shouhin`.`errors`,  `shouhin`.`designer`,  `shouhin`.`hahakai`,  `shouhin`.`effect`,  `shouhin`.`shape`,  `shouhin`.`cutting_style`,  `shouhin`.`chain_type`,  `shouhin`.`number_of_stones`,  `shouhin`.`satei_error`,  `shouhin`.`producing_area`,  `shouhin`.`shape_supplement`,  `shouhin`.`side_gem`,  `shouhin`.`product_style`,  `shouhin`.`unit`,  `shouhin`.`hall_mark`,  `shouhin`.`plate`,  `shouhin`.`updated_by`,  `shouhin`.`country_of_origin`,  `shouhin`.`parallel_import_flag`,  `shouhin`.`meisai_number`,  `shouhin`.`tentou_label_output_flag`,  `shouhin`.`itaku_flag`,  `shouhin`.`novelty`,  `shouhin`.`initial_included`,  `shouhin`.`auto_price_cut_prohibited`,  `shouhin`.`Eoc_trader_id_for_buy`,  `shouhin`.`other_cost`,  `shouhin`.`yahoo_condition1`,  `shouhin`.`remark`,  `shouhin`.`DA_SELFGRES`,  `shouhin`.`DA_INTENSITY`,  `shouhin`.`DA_OVERTONE`,  `shouhin`.`DA_COLOR`,  `shouhin`.`DA_CLARITY`,  `shouhin`.`DA_CUT`,  `shouhin`.`DA_POLISH`,  `shouhin`.`DA_SYMMETRY`,  `shouhin`.`DA_FLUO`,  `shouhin`.`DA_COLOR_FLUO`,  `shouhin`.`DA_WIDE`,  `shouhin`.`DA_HIGH`,  `shouhin`.`DA_DEPTH`,  `shouhin`.`DA_FRAPA`,  `shouhin`.`DA_RATE`,  `shouhin`.`multiplication_rate`";
$tdatasatei_of_jewelry[".sqlFrom"] = "FROM `shouhin`  LEFT OUTER JOIN `Eoc` ON `shouhin`.`ecc_id` = `Eoc`.`ecc_id`";
$tdatasatei_of_jewelry[".sqlWhereExpr"] = "(`shouhin`.`category_id` =  10 OR `shouhin`.`category_id` =  12 OR `shouhin`.`category_id` =  17 OR `shouhin`.`category_id` =  18 OR `shouhin`.`category_id` =  19 OR `shouhin`.`category_id` =  50 OR `shouhin`.`category_id` =  20 OR `shouhin`.`category_id` =  51 OR `shouhin`.`category_id` =  21 OR `shouhin`.`category_id` =  22 OR `shouhin`.`category_id` =  23 OR `shouhin`.`category_id` =  69 OR `shouhin`.`category_id` =  68 OR `shouhin`.`category_id` =  67 OR `shouhin`.`category_id` =  66 OR `shouhin`.`category_id` =  65) AND (`shouhin`.`status` =32 OR `shouhin`.`status` =34)";
$tdatasatei_of_jewelry[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasatei_of_jewelry[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasatei_of_jewelry[".arrGroupsPerPage"] = $arrGPP;

$tdatasatei_of_jewelry[".highlightSearchResults"] = true;

$tableKeyssatei_of_jewelry = array();
$tableKeyssatei_of_jewelry[] = "product_id";
$tdatasatei_of_jewelry[".Keys"] = $tableKeyssatei_of_jewelry;

$tdatasatei_of_jewelry[".listFields"] = array();
$tdatasatei_of_jewelry[".listFields"][] = "label_output_flag";
$tdatasatei_of_jewelry[".listFields"][] = "tentou_label_output_flag";
$tdatasatei_of_jewelry[".listFields"][] = "meisai_number";
$tdatasatei_of_jewelry[".listFields"][] = "status";
$tdatasatei_of_jewelry[".listFields"][] = "product_id";
$tdatasatei_of_jewelry[".listFields"][] = "product_num";
$tdatasatei_of_jewelry[".listFields"][] = "category_id";
$tdatasatei_of_jewelry[".listFields"][] = "sub_category_id1";
$tdatasatei_of_jewelry[".listFields"][] = "Destination_selling";
$tdatasatei_of_jewelry[".listFields"][] = "Finish";
$tdatasatei_of_jewelry[".listFields"][] = "Discrimination";
$tdatasatei_of_jewelry[".listFields"][] = "accessories";
$tdatasatei_of_jewelry[".listFields"][] = "comment";
$tdatasatei_of_jewelry[".listFields"][] = "serial_number";
$tdatasatei_of_jewelry[".listFields"][] = "yahoo_kataban";
$tdatasatei_of_jewelry[".listFields"][] = "country_of_origin";
$tdatasatei_of_jewelry[".listFields"][] = "hall_mark";
$tdatasatei_of_jewelry[".listFields"][] = "designer";
$tdatasatei_of_jewelry[".listFields"][] = "line";
$tdatasatei_of_jewelry[".listFields"][] = "item_name";
$tdatasatei_of_jewelry[".listFields"][] = "number_of_stones";
$tdatasatei_of_jewelry[".listFields"][] = "shape_supplement";
$tdatasatei_of_jewelry[".listFields"][] = "side_gem";
$tdatasatei_of_jewelry[".listFields"][] = "product_style";
$tdatasatei_of_jewelry[".listFields"][] = "gold_property";
$tdatasatei_of_jewelry[".listFields"][] = "Gram";
$tdatasatei_of_jewelry[".listFields"][] = "unit";
$tdatasatei_of_jewelry[".listFields"][] = "Parent_stone";
$tdatasatei_of_jewelry[".listFields"][] = "Aside_stone";
$tdatasatei_of_jewelry[".listFields"][] = "DA_SELFGRES";
$tdatasatei_of_jewelry[".listFields"][] = "DA_INTENSITY";
$tdatasatei_of_jewelry[".listFields"][] = "DA_OVERTONE";
$tdatasatei_of_jewelry[".listFields"][] = "DA_COLOR";
$tdatasatei_of_jewelry[".listFields"][] = "DA_CLARITY";
$tdatasatei_of_jewelry[".listFields"][] = "DA_CUT";
$tdatasatei_of_jewelry[".listFields"][] = "DA_POLISH";
$tdatasatei_of_jewelry[".listFields"][] = "DA_SYMMETRY";
$tdatasatei_of_jewelry[".listFields"][] = "DA_FLUO";
$tdatasatei_of_jewelry[".listFields"][] = "DA_COLOR_FLUO";
$tdatasatei_of_jewelry[".listFields"][] = "DA_WIDE";
$tdatasatei_of_jewelry[".listFields"][] = "DA_HIGH";
$tdatasatei_of_jewelry[".listFields"][] = "DA_DEPTH";
$tdatasatei_of_jewelry[".listFields"][] = "DA_FRAPA";
$tdatasatei_of_jewelry[".listFields"][] = "DA_RATE";
$tdatasatei_of_jewelry[".listFields"][] = "multiplication_rate";
$tdatasatei_of_jewelry[".listFields"][] = "Ring_size";
$tdatasatei_of_jewelry[".listFields"][] = "Appraiser";
$tdatasatei_of_jewelry[".listFields"][] = "price_per_gram";
$tdatasatei_of_jewelry[".listFields"][] = "price_per_parent_stone";
$tdatasatei_of_jewelry[".listFields"][] = "price_per_aside_stone";
$tdatasatei_of_jewelry[".listFields"][] = "yahoo_sex";
$tdatasatei_of_jewelry[".listFields"][] = "yahoo_condition2";
$tdatasatei_of_jewelry[".listFields"][] = "logo";
$tdatasatei_of_jewelry[".listFields"][] = "parts";
$tdatasatei_of_jewelry[".listFields"][] = "guarantee";
$tdatasatei_of_jewelry[".listFields"][] = "plate";
$tdatasatei_of_jewelry[".listFields"][] = "parallel_import_flag";
$tdatasatei_of_jewelry[".listFields"][] = "yahoo_sozai";
$tdatasatei_of_jewelry[".listFields"][] = "ichiba_title";
$tdatasatei_of_jewelry[".listFields"][] = "motif";
$tdatasatei_of_jewelry[".listFields"][] = "producing_area";
$tdatasatei_of_jewelry[".listFields"][] = "hahakai";
$tdatasatei_of_jewelry[".listFields"][] = "effect";
$tdatasatei_of_jewelry[".listFields"][] = "shape";
$tdatasatei_of_jewelry[".listFields"][] = "cutting_style";
$tdatasatei_of_jewelry[".listFields"][] = "Setting";
$tdatasatei_of_jewelry[".listFields"][] = "processing";
$tdatasatei_of_jewelry[".listFields"][] = "chain_type";
$tdatasatei_of_jewelry[".listFields"][] = "Remarks";
$tdatasatei_of_jewelry[".listFields"][] = "stamp";
$tdatasatei_of_jewelry[".listFields"][] = "price";
$tdatasatei_of_jewelry[".listFields"][] = "other_cost";
$tdatasatei_of_jewelry[".listFields"][] = "sales_price";
$tdatasatei_of_jewelry[".listFields"][] = "yahoo_sankou_uwadai";
$tdatasatei_of_jewelry[".listFields"][] = "description";
$tdatasatei_of_jewelry[".listFields"][] = "yahoo_condition1";
$tdatasatei_of_jewelry[".listFields"][] = "remark";
$tdatasatei_of_jewelry[".listFields"][] = "priority";
$tdatasatei_of_jewelry[".listFields"][] = "A_storage";
$tdatasatei_of_jewelry[".listFields"][] = "itaku_flag";
$tdatasatei_of_jewelry[".listFields"][] = "auto_price_cut_prohibited";
$tdatasatei_of_jewelry[".listFields"][] = "satei_by";
$tdatasatei_of_jewelry[".listFields"][] = "satei_hi";
$tdatasatei_of_jewelry[".listFields"][] = "price_secret";
$tdatasatei_of_jewelry[".listFields"][] = "sales_price_secret";
$tdatasatei_of_jewelry[".listFields"][] = "errors";
$tdatasatei_of_jewelry[".listFields"][] = "satei_error";

$tdatasatei_of_jewelry[".hideMobileList"] = array();


$tdatasatei_of_jewelry[".viewFields"] = array();

$tdatasatei_of_jewelry[".addFields"] = array();

$tdatasatei_of_jewelry[".masterListFields"] = array();
$tdatasatei_of_jewelry[".masterListFields"][] = "ecc_seq";
$tdatasatei_of_jewelry[".masterListFields"][] = "yahoo_junle";
$tdatasatei_of_jewelry[".masterListFields"][] = "logo";
$tdatasatei_of_jewelry[".masterListFields"][] = "parts";
$tdatasatei_of_jewelry[".masterListFields"][] = "guarantee";
$tdatasatei_of_jewelry[".masterListFields"][] = "errors";
$tdatasatei_of_jewelry[".masterListFields"][] = "designer";
$tdatasatei_of_jewelry[".masterListFields"][] = "hahakai";
$tdatasatei_of_jewelry[".masterListFields"][] = "effect";
$tdatasatei_of_jewelry[".masterListFields"][] = "shape";
$tdatasatei_of_jewelry[".masterListFields"][] = "cutting_style";
$tdatasatei_of_jewelry[".masterListFields"][] = "chain_type";
$tdatasatei_of_jewelry[".masterListFields"][] = "number_of_stones";
$tdatasatei_of_jewelry[".masterListFields"][] = "satei_error";
$tdatasatei_of_jewelry[".masterListFields"][] = "producing_area";
$tdatasatei_of_jewelry[".masterListFields"][] = "shape_supplement";
$tdatasatei_of_jewelry[".masterListFields"][] = "side_gem";
$tdatasatei_of_jewelry[".masterListFields"][] = "product_style";
$tdatasatei_of_jewelry[".masterListFields"][] = "unit";
$tdatasatei_of_jewelry[".masterListFields"][] = "hall_mark";
$tdatasatei_of_jewelry[".masterListFields"][] = "plate";
$tdatasatei_of_jewelry[".masterListFields"][] = "updated_by";
$tdatasatei_of_jewelry[".masterListFields"][] = "country_of_origin";
$tdatasatei_of_jewelry[".masterListFields"][] = "parallel_import_flag";
$tdatasatei_of_jewelry[".masterListFields"][] = "meisai_number";
$tdatasatei_of_jewelry[".masterListFields"][] = "tentou_label_output_flag";
$tdatasatei_of_jewelry[".masterListFields"][] = "itaku_flag";
$tdatasatei_of_jewelry[".masterListFields"][] = "novelty";
$tdatasatei_of_jewelry[".masterListFields"][] = "initial_included";
$tdatasatei_of_jewelry[".masterListFields"][] = "auto_price_cut_prohibited";
$tdatasatei_of_jewelry[".masterListFields"][] = "Eoc_trader_id_for_buy";
$tdatasatei_of_jewelry[".masterListFields"][] = "other_cost";
$tdatasatei_of_jewelry[".masterListFields"][] = "yahoo_condition1";
$tdatasatei_of_jewelry[".masterListFields"][] = "remark";
$tdatasatei_of_jewelry[".masterListFields"][] = "DA_SELFGRES";
$tdatasatei_of_jewelry[".masterListFields"][] = "DA_INTENSITY";
$tdatasatei_of_jewelry[".masterListFields"][] = "DA_OVERTONE";
$tdatasatei_of_jewelry[".masterListFields"][] = "DA_COLOR";
$tdatasatei_of_jewelry[".masterListFields"][] = "DA_CLARITY";
$tdatasatei_of_jewelry[".masterListFields"][] = "DA_CUT";
$tdatasatei_of_jewelry[".masterListFields"][] = "DA_POLISH";
$tdatasatei_of_jewelry[".masterListFields"][] = "DA_SYMMETRY";
$tdatasatei_of_jewelry[".masterListFields"][] = "DA_FLUO";
$tdatasatei_of_jewelry[".masterListFields"][] = "DA_COLOR_FLUO";
$tdatasatei_of_jewelry[".masterListFields"][] = "DA_WIDE";
$tdatasatei_of_jewelry[".masterListFields"][] = "DA_HIGH";
$tdatasatei_of_jewelry[".masterListFields"][] = "DA_DEPTH";
$tdatasatei_of_jewelry[".masterListFields"][] = "DA_FRAPA";
$tdatasatei_of_jewelry[".masterListFields"][] = "DA_RATE";
$tdatasatei_of_jewelry[".masterListFields"][] = "multiplication_rate";
$tdatasatei_of_jewelry[".masterListFields"][] = "status";
$tdatasatei_of_jewelry[".masterListFields"][] = "satei_by";
$tdatasatei_of_jewelry[".masterListFields"][] = "category_id";
$tdatasatei_of_jewelry[".masterListFields"][] = "title";
$tdatasatei_of_jewelry[".masterListFields"][] = "sub_category_id1";
$tdatasatei_of_jewelry[".masterListFields"][] = "product_id";
$tdatasatei_of_jewelry[".masterListFields"][] = "ecc_id";
$tdatasatei_of_jewelry[".masterListFields"][] = "yahoo_sinaban";
$tdatasatei_of_jewelry[".masterListFields"][] = "price";
$tdatasatei_of_jewelry[".masterListFields"][] = "sales_price";
$tdatasatei_of_jewelry[".masterListFields"][] = "yahoo_sex";
$tdatasatei_of_jewelry[".masterListFields"][] = "product_num";
$tdatasatei_of_jewelry[".masterListFields"][] = "description";
$tdatasatei_of_jewelry[".masterListFields"][] = "yahoo_kataban";
$tdatasatei_of_jewelry[".masterListFields"][] = "yahoo_sozai";
$tdatasatei_of_jewelry[".masterListFields"][] = "yahoo_condition2";
$tdatasatei_of_jewelry[".masterListFields"][] = "yahoo_sankou_uwadai";
$tdatasatei_of_jewelry[".masterListFields"][] = "season";
$tdatasatei_of_jewelry[".masterListFields"][] = "goods_title";
$tdatasatei_of_jewelry[".masterListFields"][] = "nyuukin_price";
$tdatasatei_of_jewelry[".masterListFields"][] = "raku_title";
$tdatasatei_of_jewelry[".masterListFields"][] = "stamp";
$tdatasatei_of_jewelry[".masterListFields"][] = "processing";
$tdatasatei_of_jewelry[".masterListFields"][] = "label_output_flag";
$tdatasatei_of_jewelry[".masterListFields"][] = "Ring_size";
$tdatasatei_of_jewelry[".masterListFields"][] = "kaitori_by";
$tdatasatei_of_jewelry[".masterListFields"][] = "comment";
$tdatasatei_of_jewelry[".masterListFields"][] = "satei_hi";
$tdatasatei_of_jewelry[".masterListFields"][] = "kaitory_hi";
$tdatasatei_of_jewelry[".masterListFields"][] = "DT_UP_DATE";
$tdatasatei_of_jewelry[".masterListFields"][] = "AWAZU_DATE";
$tdatasatei_of_jewelry[".masterListFields"][] = "AWAZU_NIN";
$tdatasatei_of_jewelry[".masterListFields"][] = "gold_property";
$tdatasatei_of_jewelry[".masterListFields"][] = "ichiba_title";
$tdatasatei_of_jewelry[".masterListFields"][] = "Gram";
$tdatasatei_of_jewelry[".masterListFields"][] = "Parent_stone";
$tdatasatei_of_jewelry[".masterListFields"][] = "Aside_stone";
$tdatasatei_of_jewelry[".masterListFields"][] = "Appraiser";
$tdatasatei_of_jewelry[".masterListFields"][] = "Remarks";
$tdatasatei_of_jewelry[".masterListFields"][] = "Destination_selling";
$tdatasatei_of_jewelry[".masterListFields"][] = "Finish";
$tdatasatei_of_jewelry[".masterListFields"][] = "Discrimination";
$tdatasatei_of_jewelry[".masterListFields"][] = "accessories";
$tdatasatei_of_jewelry[".masterListFields"][] = "priority";
$tdatasatei_of_jewelry[".masterListFields"][] = "A_storage";
$tdatasatei_of_jewelry[".masterListFields"][] = "price_per_gram";
$tdatasatei_of_jewelry[".masterListFields"][] = "price_per_parent_stone";
$tdatasatei_of_jewelry[".masterListFields"][] = "price_per_aside_stone";
$tdatasatei_of_jewelry[".masterListFields"][] = "price_secret";
$tdatasatei_of_jewelry[".masterListFields"][] = "sales_price_secret";
$tdatasatei_of_jewelry[".masterListFields"][] = "eq";
$tdatasatei_of_jewelry[".masterListFields"][] = "en";
$tdatasatei_of_jewelry[".masterListFields"][] = "line";
$tdatasatei_of_jewelry[".masterListFields"][] = "item_name";
$tdatasatei_of_jewelry[".masterListFields"][] = "serial_number";
$tdatasatei_of_jewelry[".masterListFields"][] = "motif";
$tdatasatei_of_jewelry[".masterListFields"][] = "Setting";

$tdatasatei_of_jewelry[".inlineAddFields"] = array();
$tdatasatei_of_jewelry[".inlineAddFields"][] = "label_output_flag";
$tdatasatei_of_jewelry[".inlineAddFields"][] = "tentou_label_output_flag";
$tdatasatei_of_jewelry[".inlineAddFields"][] = "meisai_number";
$tdatasatei_of_jewelry[".inlineAddFields"][] = "status";
$tdatasatei_of_jewelry[".inlineAddFields"][] = "product_num";
$tdatasatei_of_jewelry[".inlineAddFields"][] = "category_id";
$tdatasatei_of_jewelry[".inlineAddFields"][] = "sub_category_id1";
$tdatasatei_of_jewelry[".inlineAddFields"][] = "Destination_selling";
$tdatasatei_of_jewelry[".inlineAddFields"][] = "Finish";
$tdatasatei_of_jewelry[".inlineAddFields"][] = "Discrimination";
$tdatasatei_of_jewelry[".inlineAddFields"][] = "accessories";
$tdatasatei_of_jewelry[".inlineAddFields"][] = "comment";
$tdatasatei_of_jewelry[".inlineAddFields"][] = "serial_number";
$tdatasatei_of_jewelry[".inlineAddFields"][] = "yahoo_kataban";
$tdatasatei_of_jewelry[".inlineAddFields"][] = "country_of_origin";
$tdatasatei_of_jewelry[".inlineAddFields"][] = "hall_mark";
$tdatasatei_of_jewelry[".inlineAddFields"][] = "designer";
$tdatasatei_of_jewelry[".inlineAddFields"][] = "line";
$tdatasatei_of_jewelry[".inlineAddFields"][] = "item_name";
$tdatasatei_of_jewelry[".inlineAddFields"][] = "number_of_stones";
$tdatasatei_of_jewelry[".inlineAddFields"][] = "shape_supplement";
$tdatasatei_of_jewelry[".inlineAddFields"][] = "side_gem";
$tdatasatei_of_jewelry[".inlineAddFields"][] = "product_style";
$tdatasatei_of_jewelry[".inlineAddFields"][] = "gold_property";
$tdatasatei_of_jewelry[".inlineAddFields"][] = "Gram";
$tdatasatei_of_jewelry[".inlineAddFields"][] = "unit";
$tdatasatei_of_jewelry[".inlineAddFields"][] = "Parent_stone";
$tdatasatei_of_jewelry[".inlineAddFields"][] = "Aside_stone";
$tdatasatei_of_jewelry[".inlineAddFields"][] = "DA_SELFGRES";
$tdatasatei_of_jewelry[".inlineAddFields"][] = "DA_INTENSITY";
$tdatasatei_of_jewelry[".inlineAddFields"][] = "DA_OVERTONE";
$tdatasatei_of_jewelry[".inlineAddFields"][] = "DA_COLOR";
$tdatasatei_of_jewelry[".inlineAddFields"][] = "DA_CLARITY";
$tdatasatei_of_jewelry[".inlineAddFields"][] = "DA_CUT";
$tdatasatei_of_jewelry[".inlineAddFields"][] = "DA_POLISH";
$tdatasatei_of_jewelry[".inlineAddFields"][] = "DA_SYMMETRY";
$tdatasatei_of_jewelry[".inlineAddFields"][] = "DA_FLUO";
$tdatasatei_of_jewelry[".inlineAddFields"][] = "DA_COLOR_FLUO";
$tdatasatei_of_jewelry[".inlineAddFields"][] = "DA_WIDE";
$tdatasatei_of_jewelry[".inlineAddFields"][] = "DA_HIGH";
$tdatasatei_of_jewelry[".inlineAddFields"][] = "DA_DEPTH";
$tdatasatei_of_jewelry[".inlineAddFields"][] = "DA_FRAPA";
$tdatasatei_of_jewelry[".inlineAddFields"][] = "DA_RATE";
$tdatasatei_of_jewelry[".inlineAddFields"][] = "multiplication_rate";
$tdatasatei_of_jewelry[".inlineAddFields"][] = "Ring_size";
$tdatasatei_of_jewelry[".inlineAddFields"][] = "Appraiser";
$tdatasatei_of_jewelry[".inlineAddFields"][] = "price_per_gram";
$tdatasatei_of_jewelry[".inlineAddFields"][] = "price_per_parent_stone";
$tdatasatei_of_jewelry[".inlineAddFields"][] = "price_per_aside_stone";
$tdatasatei_of_jewelry[".inlineAddFields"][] = "yahoo_sex";
$tdatasatei_of_jewelry[".inlineAddFields"][] = "yahoo_condition2";
$tdatasatei_of_jewelry[".inlineAddFields"][] = "logo";
$tdatasatei_of_jewelry[".inlineAddFields"][] = "parts";
$tdatasatei_of_jewelry[".inlineAddFields"][] = "guarantee";
$tdatasatei_of_jewelry[".inlineAddFields"][] = "plate";
$tdatasatei_of_jewelry[".inlineAddFields"][] = "parallel_import_flag";
$tdatasatei_of_jewelry[".inlineAddFields"][] = "yahoo_sozai";
$tdatasatei_of_jewelry[".inlineAddFields"][] = "ichiba_title";
$tdatasatei_of_jewelry[".inlineAddFields"][] = "motif";
$tdatasatei_of_jewelry[".inlineAddFields"][] = "producing_area";
$tdatasatei_of_jewelry[".inlineAddFields"][] = "hahakai";
$tdatasatei_of_jewelry[".inlineAddFields"][] = "effect";
$tdatasatei_of_jewelry[".inlineAddFields"][] = "shape";
$tdatasatei_of_jewelry[".inlineAddFields"][] = "cutting_style";
$tdatasatei_of_jewelry[".inlineAddFields"][] = "Setting";
$tdatasatei_of_jewelry[".inlineAddFields"][] = "processing";
$tdatasatei_of_jewelry[".inlineAddFields"][] = "chain_type";
$tdatasatei_of_jewelry[".inlineAddFields"][] = "Remarks";
$tdatasatei_of_jewelry[".inlineAddFields"][] = "stamp";
$tdatasatei_of_jewelry[".inlineAddFields"][] = "price";
$tdatasatei_of_jewelry[".inlineAddFields"][] = "other_cost";
$tdatasatei_of_jewelry[".inlineAddFields"][] = "sales_price";
$tdatasatei_of_jewelry[".inlineAddFields"][] = "yahoo_sankou_uwadai";
$tdatasatei_of_jewelry[".inlineAddFields"][] = "description";
$tdatasatei_of_jewelry[".inlineAddFields"][] = "yahoo_condition1";
$tdatasatei_of_jewelry[".inlineAddFields"][] = "remark";
$tdatasatei_of_jewelry[".inlineAddFields"][] = "priority";
$tdatasatei_of_jewelry[".inlineAddFields"][] = "A_storage";
$tdatasatei_of_jewelry[".inlineAddFields"][] = "itaku_flag";
$tdatasatei_of_jewelry[".inlineAddFields"][] = "auto_price_cut_prohibited";
$tdatasatei_of_jewelry[".inlineAddFields"][] = "price_secret";
$tdatasatei_of_jewelry[".inlineAddFields"][] = "sales_price_secret";
$tdatasatei_of_jewelry[".inlineAddFields"][] = "errors";

$tdatasatei_of_jewelry[".editFields"] = array();

$tdatasatei_of_jewelry[".inlineEditFields"] = array();
$tdatasatei_of_jewelry[".inlineEditFields"][] = "label_output_flag";
$tdatasatei_of_jewelry[".inlineEditFields"][] = "tentou_label_output_flag";
$tdatasatei_of_jewelry[".inlineEditFields"][] = "meisai_number";
$tdatasatei_of_jewelry[".inlineEditFields"][] = "status";
$tdatasatei_of_jewelry[".inlineEditFields"][] = "product_num";
$tdatasatei_of_jewelry[".inlineEditFields"][] = "category_id";
$tdatasatei_of_jewelry[".inlineEditFields"][] = "sub_category_id1";
$tdatasatei_of_jewelry[".inlineEditFields"][] = "Destination_selling";
$tdatasatei_of_jewelry[".inlineEditFields"][] = "Finish";
$tdatasatei_of_jewelry[".inlineEditFields"][] = "Discrimination";
$tdatasatei_of_jewelry[".inlineEditFields"][] = "accessories";
$tdatasatei_of_jewelry[".inlineEditFields"][] = "comment";
$tdatasatei_of_jewelry[".inlineEditFields"][] = "serial_number";
$tdatasatei_of_jewelry[".inlineEditFields"][] = "yahoo_kataban";
$tdatasatei_of_jewelry[".inlineEditFields"][] = "country_of_origin";
$tdatasatei_of_jewelry[".inlineEditFields"][] = "hall_mark";
$tdatasatei_of_jewelry[".inlineEditFields"][] = "designer";
$tdatasatei_of_jewelry[".inlineEditFields"][] = "line";
$tdatasatei_of_jewelry[".inlineEditFields"][] = "item_name";
$tdatasatei_of_jewelry[".inlineEditFields"][] = "number_of_stones";
$tdatasatei_of_jewelry[".inlineEditFields"][] = "shape_supplement";
$tdatasatei_of_jewelry[".inlineEditFields"][] = "side_gem";
$tdatasatei_of_jewelry[".inlineEditFields"][] = "product_style";
$tdatasatei_of_jewelry[".inlineEditFields"][] = "gold_property";
$tdatasatei_of_jewelry[".inlineEditFields"][] = "Gram";
$tdatasatei_of_jewelry[".inlineEditFields"][] = "unit";
$tdatasatei_of_jewelry[".inlineEditFields"][] = "Parent_stone";
$tdatasatei_of_jewelry[".inlineEditFields"][] = "Aside_stone";
$tdatasatei_of_jewelry[".inlineEditFields"][] = "DA_SELFGRES";
$tdatasatei_of_jewelry[".inlineEditFields"][] = "DA_INTENSITY";
$tdatasatei_of_jewelry[".inlineEditFields"][] = "DA_OVERTONE";
$tdatasatei_of_jewelry[".inlineEditFields"][] = "DA_COLOR";
$tdatasatei_of_jewelry[".inlineEditFields"][] = "DA_CLARITY";
$tdatasatei_of_jewelry[".inlineEditFields"][] = "DA_CUT";
$tdatasatei_of_jewelry[".inlineEditFields"][] = "DA_POLISH";
$tdatasatei_of_jewelry[".inlineEditFields"][] = "DA_SYMMETRY";
$tdatasatei_of_jewelry[".inlineEditFields"][] = "DA_FLUO";
$tdatasatei_of_jewelry[".inlineEditFields"][] = "DA_COLOR_FLUO";
$tdatasatei_of_jewelry[".inlineEditFields"][] = "DA_WIDE";
$tdatasatei_of_jewelry[".inlineEditFields"][] = "DA_HIGH";
$tdatasatei_of_jewelry[".inlineEditFields"][] = "DA_DEPTH";
$tdatasatei_of_jewelry[".inlineEditFields"][] = "DA_FRAPA";
$tdatasatei_of_jewelry[".inlineEditFields"][] = "DA_RATE";
$tdatasatei_of_jewelry[".inlineEditFields"][] = "multiplication_rate";
$tdatasatei_of_jewelry[".inlineEditFields"][] = "Ring_size";
$tdatasatei_of_jewelry[".inlineEditFields"][] = "Appraiser";
$tdatasatei_of_jewelry[".inlineEditFields"][] = "price_per_gram";
$tdatasatei_of_jewelry[".inlineEditFields"][] = "price_per_parent_stone";
$tdatasatei_of_jewelry[".inlineEditFields"][] = "price_per_aside_stone";
$tdatasatei_of_jewelry[".inlineEditFields"][] = "yahoo_sex";
$tdatasatei_of_jewelry[".inlineEditFields"][] = "yahoo_condition2";
$tdatasatei_of_jewelry[".inlineEditFields"][] = "logo";
$tdatasatei_of_jewelry[".inlineEditFields"][] = "parts";
$tdatasatei_of_jewelry[".inlineEditFields"][] = "guarantee";
$tdatasatei_of_jewelry[".inlineEditFields"][] = "plate";
$tdatasatei_of_jewelry[".inlineEditFields"][] = "parallel_import_flag";
$tdatasatei_of_jewelry[".inlineEditFields"][] = "yahoo_sozai";
$tdatasatei_of_jewelry[".inlineEditFields"][] = "ichiba_title";
$tdatasatei_of_jewelry[".inlineEditFields"][] = "motif";
$tdatasatei_of_jewelry[".inlineEditFields"][] = "producing_area";
$tdatasatei_of_jewelry[".inlineEditFields"][] = "hahakai";
$tdatasatei_of_jewelry[".inlineEditFields"][] = "effect";
$tdatasatei_of_jewelry[".inlineEditFields"][] = "shape";
$tdatasatei_of_jewelry[".inlineEditFields"][] = "cutting_style";
$tdatasatei_of_jewelry[".inlineEditFields"][] = "Setting";
$tdatasatei_of_jewelry[".inlineEditFields"][] = "processing";
$tdatasatei_of_jewelry[".inlineEditFields"][] = "chain_type";
$tdatasatei_of_jewelry[".inlineEditFields"][] = "Remarks";
$tdatasatei_of_jewelry[".inlineEditFields"][] = "stamp";
$tdatasatei_of_jewelry[".inlineEditFields"][] = "price";
$tdatasatei_of_jewelry[".inlineEditFields"][] = "other_cost";
$tdatasatei_of_jewelry[".inlineEditFields"][] = "sales_price";
$tdatasatei_of_jewelry[".inlineEditFields"][] = "yahoo_sankou_uwadai";
$tdatasatei_of_jewelry[".inlineEditFields"][] = "description";
$tdatasatei_of_jewelry[".inlineEditFields"][] = "yahoo_condition1";
$tdatasatei_of_jewelry[".inlineEditFields"][] = "remark";
$tdatasatei_of_jewelry[".inlineEditFields"][] = "priority";
$tdatasatei_of_jewelry[".inlineEditFields"][] = "A_storage";
$tdatasatei_of_jewelry[".inlineEditFields"][] = "itaku_flag";
$tdatasatei_of_jewelry[".inlineEditFields"][] = "auto_price_cut_prohibited";
$tdatasatei_of_jewelry[".inlineEditFields"][] = "price_secret";
$tdatasatei_of_jewelry[".inlineEditFields"][] = "sales_price_secret";
$tdatasatei_of_jewelry[".inlineEditFields"][] = "errors";

$tdatasatei_of_jewelry[".updateSelectedFields"] = array();


$tdatasatei_of_jewelry[".exportFields"] = array();
$tdatasatei_of_jewelry[".exportFields"][] = "other_cost";
$tdatasatei_of_jewelry[".exportFields"][] = "yahoo_condition1";
$tdatasatei_of_jewelry[".exportFields"][] = "remark";
$tdatasatei_of_jewelry[".exportFields"][] = "DA_SELFGRES";
$tdatasatei_of_jewelry[".exportFields"][] = "DA_INTENSITY";
$tdatasatei_of_jewelry[".exportFields"][] = "DA_OVERTONE";
$tdatasatei_of_jewelry[".exportFields"][] = "DA_COLOR";
$tdatasatei_of_jewelry[".exportFields"][] = "DA_CLARITY";
$tdatasatei_of_jewelry[".exportFields"][] = "DA_CUT";
$tdatasatei_of_jewelry[".exportFields"][] = "DA_POLISH";
$tdatasatei_of_jewelry[".exportFields"][] = "DA_SYMMETRY";
$tdatasatei_of_jewelry[".exportFields"][] = "DA_FLUO";
$tdatasatei_of_jewelry[".exportFields"][] = "DA_COLOR_FLUO";
$tdatasatei_of_jewelry[".exportFields"][] = "DA_WIDE";
$tdatasatei_of_jewelry[".exportFields"][] = "DA_HIGH";
$tdatasatei_of_jewelry[".exportFields"][] = "DA_DEPTH";
$tdatasatei_of_jewelry[".exportFields"][] = "DA_FRAPA";
$tdatasatei_of_jewelry[".exportFields"][] = "DA_RATE";
$tdatasatei_of_jewelry[".exportFields"][] = "multiplication_rate";
$tdatasatei_of_jewelry[".exportFields"][] = "auto_price_cut_prohibited";
$tdatasatei_of_jewelry[".exportFields"][] = "itaku_flag";
$tdatasatei_of_jewelry[".exportFields"][] = "country_of_origin";
$tdatasatei_of_jewelry[".exportFields"][] = "meisai_number";
$tdatasatei_of_jewelry[".exportFields"][] = "tentou_label_output_flag";
$tdatasatei_of_jewelry[".exportFields"][] = "label_output_flag";
$tdatasatei_of_jewelry[".exportFields"][] = "status";
$tdatasatei_of_jewelry[".exportFields"][] = "product_id";
$tdatasatei_of_jewelry[".exportFields"][] = "yahoo_junle";
$tdatasatei_of_jewelry[".exportFields"][] = "category_id";
$tdatasatei_of_jewelry[".exportFields"][] = "sub_category_id1";
$tdatasatei_of_jewelry[".exportFields"][] = "yahoo_sex";
$tdatasatei_of_jewelry[".exportFields"][] = "yahoo_condition2";
$tdatasatei_of_jewelry[".exportFields"][] = "logo";
$tdatasatei_of_jewelry[".exportFields"][] = "parts";
$tdatasatei_of_jewelry[".exportFields"][] = "serial_number";
$tdatasatei_of_jewelry[".exportFields"][] = "guarantee";
$tdatasatei_of_jewelry[".exportFields"][] = "designer";
$tdatasatei_of_jewelry[".exportFields"][] = "line";
$tdatasatei_of_jewelry[".exportFields"][] = "item_name";
$tdatasatei_of_jewelry[".exportFields"][] = "number_of_stones";
$tdatasatei_of_jewelry[".exportFields"][] = "shape_supplement";
$tdatasatei_of_jewelry[".exportFields"][] = "side_gem";
$tdatasatei_of_jewelry[".exportFields"][] = "product_style";
$tdatasatei_of_jewelry[".exportFields"][] = "yahoo_sozai";
$tdatasatei_of_jewelry[".exportFields"][] = "ichiba_title";
$tdatasatei_of_jewelry[".exportFields"][] = "hall_mark";
$tdatasatei_of_jewelry[".exportFields"][] = "plate";
$tdatasatei_of_jewelry[".exportFields"][] = "gold_property";
$tdatasatei_of_jewelry[".exportFields"][] = "Gram";
$tdatasatei_of_jewelry[".exportFields"][] = "unit";
$tdatasatei_of_jewelry[".exportFields"][] = "Parent_stone";
$tdatasatei_of_jewelry[".exportFields"][] = "Aside_stone";
$tdatasatei_of_jewelry[".exportFields"][] = "Ring_size";
$tdatasatei_of_jewelry[".exportFields"][] = "price_per_gram";
$tdatasatei_of_jewelry[".exportFields"][] = "price_per_parent_stone";
$tdatasatei_of_jewelry[".exportFields"][] = "price_per_aside_stone";
$tdatasatei_of_jewelry[".exportFields"][] = "motif";
$tdatasatei_of_jewelry[".exportFields"][] = "producing_area";
$tdatasatei_of_jewelry[".exportFields"][] = "hahakai";
$tdatasatei_of_jewelry[".exportFields"][] = "effect";
$tdatasatei_of_jewelry[".exportFields"][] = "shape";
$tdatasatei_of_jewelry[".exportFields"][] = "cutting_style";
$tdatasatei_of_jewelry[".exportFields"][] = "Setting";
$tdatasatei_of_jewelry[".exportFields"][] = "processing";
$tdatasatei_of_jewelry[".exportFields"][] = "chain_type";
$tdatasatei_of_jewelry[".exportFields"][] = "Appraiser";
$tdatasatei_of_jewelry[".exportFields"][] = "Remarks";
$tdatasatei_of_jewelry[".exportFields"][] = "yahoo_kataban";
$tdatasatei_of_jewelry[".exportFields"][] = "stamp";
$tdatasatei_of_jewelry[".exportFields"][] = "eq";
$tdatasatei_of_jewelry[".exportFields"][] = "price";
$tdatasatei_of_jewelry[".exportFields"][] = "en";
$tdatasatei_of_jewelry[".exportFields"][] = "comment";
$tdatasatei_of_jewelry[".exportFields"][] = "sales_price";
$tdatasatei_of_jewelry[".exportFields"][] = "yahoo_sankou_uwadai";
$tdatasatei_of_jewelry[".exportFields"][] = "description";
$tdatasatei_of_jewelry[".exportFields"][] = "Destination_selling";
$tdatasatei_of_jewelry[".exportFields"][] = "Finish";
$tdatasatei_of_jewelry[".exportFields"][] = "Discrimination";
$tdatasatei_of_jewelry[".exportFields"][] = "accessories";
$tdatasatei_of_jewelry[".exportFields"][] = "priority";
$tdatasatei_of_jewelry[".exportFields"][] = "A_storage";
$tdatasatei_of_jewelry[".exportFields"][] = "satei_by";
$tdatasatei_of_jewelry[".exportFields"][] = "satei_hi";
$tdatasatei_of_jewelry[".exportFields"][] = "price_secret";
$tdatasatei_of_jewelry[".exportFields"][] = "sales_price_secret";
$tdatasatei_of_jewelry[".exportFields"][] = "product_num";
$tdatasatei_of_jewelry[".exportFields"][] = "errors";
$tdatasatei_of_jewelry[".exportFields"][] = "satei_error";

$tdatasatei_of_jewelry[".importFields"] = array();
$tdatasatei_of_jewelry[".importFields"][] = "product_id";
$tdatasatei_of_jewelry[".importFields"][] = "category_id";
$tdatasatei_of_jewelry[".importFields"][] = "sub_category_id1";
$tdatasatei_of_jewelry[".importFields"][] = "price";
$tdatasatei_of_jewelry[".importFields"][] = "sales_price";
$tdatasatei_of_jewelry[".importFields"][] = "description";
$tdatasatei_of_jewelry[".importFields"][] = "status";
$tdatasatei_of_jewelry[".importFields"][] = "product_num";
$tdatasatei_of_jewelry[".importFields"][] = "yahoo_sankou_uwadai";
$tdatasatei_of_jewelry[".importFields"][] = "yahoo_sozai";
$tdatasatei_of_jewelry[".importFields"][] = "yahoo_kataban";
$tdatasatei_of_jewelry[".importFields"][] = "yahoo_condition2";
$tdatasatei_of_jewelry[".importFields"][] = "yahoo_sex";
$tdatasatei_of_jewelry[".importFields"][] = "label_output_flag";
$tdatasatei_of_jewelry[".importFields"][] = "satei_by";
$tdatasatei_of_jewelry[".importFields"][] = "comment";
$tdatasatei_of_jewelry[".importFields"][] = "satei_hi";
$tdatasatei_of_jewelry[".importFields"][] = "gold_property";
$tdatasatei_of_jewelry[".importFields"][] = "ichiba_title";
$tdatasatei_of_jewelry[".importFields"][] = "Gram";
$tdatasatei_of_jewelry[".importFields"][] = "Parent_stone";
$tdatasatei_of_jewelry[".importFields"][] = "Aside_stone";
$tdatasatei_of_jewelry[".importFields"][] = "Appraiser";
$tdatasatei_of_jewelry[".importFields"][] = "Remarks";
$tdatasatei_of_jewelry[".importFields"][] = "Destination_selling";
$tdatasatei_of_jewelry[".importFields"][] = "Finish";
$tdatasatei_of_jewelry[".importFields"][] = "Discrimination";
$tdatasatei_of_jewelry[".importFields"][] = "accessories";
$tdatasatei_of_jewelry[".importFields"][] = "priority";
$tdatasatei_of_jewelry[".importFields"][] = "A_storage";
$tdatasatei_of_jewelry[".importFields"][] = "price_per_gram";
$tdatasatei_of_jewelry[".importFields"][] = "price_per_parent_stone";
$tdatasatei_of_jewelry[".importFields"][] = "price_per_aside_stone";
$tdatasatei_of_jewelry[".importFields"][] = "price_secret";
$tdatasatei_of_jewelry[".importFields"][] = "sales_price_secret";
$tdatasatei_of_jewelry[".importFields"][] = "line";
$tdatasatei_of_jewelry[".importFields"][] = "item_name";
$tdatasatei_of_jewelry[".importFields"][] = "serial_number";
$tdatasatei_of_jewelry[".importFields"][] = "stamp";
$tdatasatei_of_jewelry[".importFields"][] = "motif";
$tdatasatei_of_jewelry[".importFields"][] = "Setting";
$tdatasatei_of_jewelry[".importFields"][] = "processing";
$tdatasatei_of_jewelry[".importFields"][] = "Ring_size";
$tdatasatei_of_jewelry[".importFields"][] = "yahoo_junle";
$tdatasatei_of_jewelry[".importFields"][] = "logo";
$tdatasatei_of_jewelry[".importFields"][] = "parts";
$tdatasatei_of_jewelry[".importFields"][] = "guarantee";
$tdatasatei_of_jewelry[".importFields"][] = "errors";
$tdatasatei_of_jewelry[".importFields"][] = "designer";
$tdatasatei_of_jewelry[".importFields"][] = "hahakai";
$tdatasatei_of_jewelry[".importFields"][] = "effect";
$tdatasatei_of_jewelry[".importFields"][] = "shape";
$tdatasatei_of_jewelry[".importFields"][] = "cutting_style";
$tdatasatei_of_jewelry[".importFields"][] = "chain_type";
$tdatasatei_of_jewelry[".importFields"][] = "number_of_stones";
$tdatasatei_of_jewelry[".importFields"][] = "satei_error";
$tdatasatei_of_jewelry[".importFields"][] = "producing_area";
$tdatasatei_of_jewelry[".importFields"][] = "shape_supplement";
$tdatasatei_of_jewelry[".importFields"][] = "side_gem";
$tdatasatei_of_jewelry[".importFields"][] = "product_style";
$tdatasatei_of_jewelry[".importFields"][] = "unit";
$tdatasatei_of_jewelry[".importFields"][] = "hall_mark";
$tdatasatei_of_jewelry[".importFields"][] = "plate";
$tdatasatei_of_jewelry[".importFields"][] = "country_of_origin";
$tdatasatei_of_jewelry[".importFields"][] = "meisai_number";
$tdatasatei_of_jewelry[".importFields"][] = "tentou_label_output_flag";
$tdatasatei_of_jewelry[".importFields"][] = "itaku_flag";
$tdatasatei_of_jewelry[".importFields"][] = "auto_price_cut_prohibited";
$tdatasatei_of_jewelry[".importFields"][] = "other_cost";
$tdatasatei_of_jewelry[".importFields"][] = "yahoo_condition1";
$tdatasatei_of_jewelry[".importFields"][] = "remark";
$tdatasatei_of_jewelry[".importFields"][] = "DA_SELFGRES";
$tdatasatei_of_jewelry[".importFields"][] = "DA_INTENSITY";
$tdatasatei_of_jewelry[".importFields"][] = "DA_OVERTONE";
$tdatasatei_of_jewelry[".importFields"][] = "DA_COLOR";
$tdatasatei_of_jewelry[".importFields"][] = "DA_CLARITY";
$tdatasatei_of_jewelry[".importFields"][] = "DA_CUT";
$tdatasatei_of_jewelry[".importFields"][] = "DA_POLISH";
$tdatasatei_of_jewelry[".importFields"][] = "DA_SYMMETRY";
$tdatasatei_of_jewelry[".importFields"][] = "DA_FLUO";
$tdatasatei_of_jewelry[".importFields"][] = "DA_COLOR_FLUO";
$tdatasatei_of_jewelry[".importFields"][] = "DA_WIDE";
$tdatasatei_of_jewelry[".importFields"][] = "DA_HIGH";
$tdatasatei_of_jewelry[".importFields"][] = "DA_DEPTH";
$tdatasatei_of_jewelry[".importFields"][] = "DA_FRAPA";
$tdatasatei_of_jewelry[".importFields"][] = "DA_RATE";
$tdatasatei_of_jewelry[".importFields"][] = "multiplication_rate";

$tdatasatei_of_jewelry[".printFields"] = array();

//	product_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "product_id";
	$fdata["GoodName"] = "product_id";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_jewelry","product_id");
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




	$tdatasatei_of_jewelry["product_id"] = $fdata;
//	category_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "category_id";
	$fdata["GoodName"] = "category_id";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_jewelry","category_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "category_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`category_id`";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdatasatei_of_jewelry["category_id"] = $fdata;
//	goods_title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "goods_title";
	$fdata["GoodName"] = "goods_title";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_jewelry","goods_title");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "goods_title";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`goods_title`";

	
	
				$fdata["FieldPermissions"] = true;

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

	
	



		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 50;
			$edata["nCols"] = 200;

	
	
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




	$tdatasatei_of_jewelry["goods_title"] = $fdata;
//	title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "title";
	$fdata["GoodName"] = "title";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_jewelry","title");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "title";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`title`";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdatasatei_of_jewelry["title"] = $fdata;
//	sub_category_id1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "sub_category_id1";
	$fdata["GoodName"] = "sub_category_id1";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_jewelry","sub_category_id1");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "sub_category_id1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`sub_category_id1`";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdatasatei_of_jewelry["sub_category_id1"] = $fdata;
//	ecc_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "ecc_id";
	$fdata["GoodName"] = "ecc_id";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_jewelry","ecc_id");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "ecc_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`ecc_id`";

	
	
			
				$fdata["UploadFolder"] = "files";

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








	$tdatasatei_of_jewelry["ecc_id"] = $fdata;
//	price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "price";
	$fdata["GoodName"] = "price";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_jewelry","price");
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

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
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




	$tdatasatei_of_jewelry["price"] = $fdata;
//	sales_price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "sales_price";
	$fdata["GoodName"] = "sales_price";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_jewelry","sales_price");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "sales_price";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`sales_price`";

	
	
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




	$tdatasatei_of_jewelry["sales_price"] = $fdata;
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_jewelry","description");
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
			$edata["nCols"] = 250;

	
	
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




	$tdatasatei_of_jewelry["description"] = $fdata;
//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_jewelry","status");
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




	$tdatasatei_of_jewelry["status"] = $fdata;
//	product_num
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "product_num";
	$fdata["GoodName"] = "product_num";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_jewelry","product_num");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "product_num";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`product_num`";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdatasatei_of_jewelry["product_num"] = $fdata;
//	yahoo_sankou_uwadai
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "yahoo_sankou_uwadai";
	$fdata["GoodName"] = "yahoo_sankou_uwadai";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_jewelry","yahoo_sankou_uwadai");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "yahoo_sankou_uwadai";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`yahoo_sankou_uwadai`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

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




	$tdatasatei_of_jewelry["yahoo_sankou_uwadai"] = $fdata;
//	yahoo_sozai
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "yahoo_sozai";
	$fdata["GoodName"] = "yahoo_sozai";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_jewelry","yahoo_sozai");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "yahoo_sozai";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`yahoo_sozai`";

	
	
				$fdata["FieldPermissions"] = true;

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
				$edata["LookupType"] = 1;
	$edata["LookupTable"] = "mst_Material";
	$edata["LookupConnId"] = "internet_at_urlounge_co_jp";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 1;

	
		
	$edata["LinkField"] = "name";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "name";

	
	$edata["LookupOrderBy"] = "sort";

	
	
	
		$edata["SimpleAdd"] = true;


	
	
	
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




	$tdatasatei_of_jewelry["yahoo_sozai"] = $fdata;
//	yahoo_kataban
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "yahoo_kataban";
	$fdata["GoodName"] = "yahoo_kataban";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_jewelry","yahoo_kataban");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "yahoo_kataban";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`yahoo_kataban`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

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
			$edata["EditParams"].= " maxlength=236";

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




	$tdatasatei_of_jewelry["yahoo_kataban"] = $fdata;
//	yahoo_condition2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "yahoo_condition2";
	$fdata["GoodName"] = "yahoo_condition2";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_jewelry","yahoo_condition2");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "yahoo_condition2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`yahoo_condition2`";

	
	
				$fdata["FieldPermissions"] = true;

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
	$edata["LookupTable"] = "_mst_condition";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "condition_name";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "condition_name";

	
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




	$tdatasatei_of_jewelry["yahoo_condition2"] = $fdata;
//	yahoo_sinaban
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "yahoo_sinaban";
	$fdata["GoodName"] = "yahoo_sinaban";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_jewelry","yahoo_sinaban");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdatasatei_of_jewelry["yahoo_sinaban"] = $fdata;
//	yahoo_sex
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "yahoo_sex";
	$fdata["GoodName"] = "yahoo_sex";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_jewelry","yahoo_sex");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "yahoo_sex";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`yahoo_sex`";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdatasatei_of_jewelry["yahoo_sex"] = $fdata;
//	nyuukin_price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "nyuukin_price";
	$fdata["GoodName"] = "nyuukin_price";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_jewelry","nyuukin_price");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "nyuukin_price";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`nyuukin_price`";

	
	
			
				$fdata["UploadFolder"] = "files";

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








	$tdatasatei_of_jewelry["nyuukin_price"] = $fdata;
//	raku_title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "raku_title";
	$fdata["GoodName"] = "raku_title";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_jewelry","raku_title");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "raku_title";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`raku_title`";

	
	
				$fdata["FieldPermissions"] = true;

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

	
	



		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 50;
			$edata["nCols"] = 200;

	
	
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




	$tdatasatei_of_jewelry["raku_title"] = $fdata;
//	label_output_flag
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "label_output_flag";
	$fdata["GoodName"] = "label_output_flag";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_jewelry","label_output_flag");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "label_output_flag";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`label_output_flag`";

	
	
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




	$tdatasatei_of_jewelry["label_output_flag"] = $fdata;
//	season
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "season";
	$fdata["GoodName"] = "season";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_jewelry","season");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "season";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`season`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

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




	$tdatasatei_of_jewelry["season"] = $fdata;
//	satei_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "satei_by";
	$fdata["GoodName"] = "satei_by";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_jewelry","satei_by");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdatasatei_of_jewelry["satei_by"] = $fdata;
//	kaitori_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "kaitori_by";
	$fdata["GoodName"] = "kaitori_by";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_jewelry","kaitori_by");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "kaitori_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`kaitori_by`";

	
	
			
				$fdata["UploadFolder"] = "files";

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
			$edata["EditParams"].= " maxlength=2";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatasatei_of_jewelry["kaitori_by"] = $fdata;
//	comment
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "comment";
	$fdata["GoodName"] = "comment";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_jewelry","comment");
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

	$edata = array("EditFormat" => "Text area");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 40;
			$edata["nCols"] = 250;

	
	
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




	$tdatasatei_of_jewelry["comment"] = $fdata;
//	satei_hi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "satei_hi";
	$fdata["GoodName"] = "satei_hi";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_jewelry","satei_hi");
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

	
	
		$edata["DateEditType"] = 2;
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




	$tdatasatei_of_jewelry["satei_hi"] = $fdata;
//	kaitory_hi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "kaitory_hi";
	$fdata["GoodName"] = "kaitory_hi";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_jewelry","kaitory_hi");
	$fdata["FieldType"] = 135;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "kaitory_hi";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`kaitory_hi`";

	
	
			
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








	$tdatasatei_of_jewelry["kaitory_hi"] = $fdata;
//	DT_UP_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "DT_UP_DATE";
	$fdata["GoodName"] = "DT_UP_DATE";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_jewelry","DT_UP_DATE");
	$fdata["FieldType"] = 135;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "DT_UP_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`DT_UP_DATE`";

	
	
			
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








	$tdatasatei_of_jewelry["DT_UP_DATE"] = $fdata;
//	AWAZU_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "AWAZU_DATE";
	$fdata["GoodName"] = "AWAZU_DATE";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_jewelry","AWAZU_DATE");
	$fdata["FieldType"] = 135;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "AWAZU_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`AWAZU_DATE`";

	
	
			
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








	$tdatasatei_of_jewelry["AWAZU_DATE"] = $fdata;
//	AWAZU_NIN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "AWAZU_NIN";
	$fdata["GoodName"] = "AWAZU_NIN";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_jewelry","AWAZU_NIN");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "AWAZU_NIN";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`AWAZU_NIN`";

	
	
			
				$fdata["UploadFolder"] = "files";

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








	$tdatasatei_of_jewelry["AWAZU_NIN"] = $fdata;
//	gold_property
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "gold_property";
	$fdata["GoodName"] = "gold_property";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_jewelry","gold_property");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "gold_property";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`gold_property`";

	
	
				$fdata["FieldPermissions"] = true;

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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatasatei_of_jewelry["gold_property"] = $fdata;
//	ichiba_title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "ichiba_title";
	$fdata["GoodName"] = "ichiba_title";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_jewelry","ichiba_title");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ichiba_title";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`ichiba_title`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

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




	$tdatasatei_of_jewelry["ichiba_title"] = $fdata;
//	Gram
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "Gram";
	$fdata["GoodName"] = "Gram";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_jewelry","Gram");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Gram";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`Gram`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

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




	$tdatasatei_of_jewelry["Gram"] = $fdata;
//	Parent_stone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "Parent_stone";
	$fdata["GoodName"] = "Parent_stone";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_jewelry","Parent_stone");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
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




	$tdatasatei_of_jewelry["Parent_stone"] = $fdata;
//	Aside_stone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "Aside_stone";
	$fdata["GoodName"] = "Aside_stone";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_jewelry","Aside_stone");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Aside_stone";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`Aside_stone`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

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




	$tdatasatei_of_jewelry["Aside_stone"] = $fdata;
//	Appraiser
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "Appraiser";
	$fdata["GoodName"] = "Appraiser";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_jewelry","Appraiser");
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
	$edata["LinkFieldType"] = 200;
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




	$tdatasatei_of_jewelry["Appraiser"] = $fdata;
//	Remarks
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "Remarks";
	$fdata["GoodName"] = "Remarks";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_jewelry","Remarks");
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




	$tdatasatei_of_jewelry["Remarks"] = $fdata;
//	Destination_selling
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "Destination_selling";
	$fdata["GoodName"] = "Destination_selling";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_jewelry","Destination_selling");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Destination_selling";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`Destination_selling`";

	
	
				$fdata["FieldPermissions"] = true;

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
	$edata["LookupTable"] = "mst_Destination_selling";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "val";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "val";

	
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




	$tdatasatei_of_jewelry["Destination_selling"] = $fdata;
//	Finish
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "Finish";
	$fdata["GoodName"] = "Finish";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_jewelry","Finish");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Finish";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`Finish`";

	
	
				$fdata["FieldPermissions"] = true;

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
	$edata["LookupTable"] = "mst_Finish";
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatasatei_of_jewelry["Finish"] = $fdata;
//	Discrimination
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "Discrimination";
	$fdata["GoodName"] = "Discrimination";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_jewelry","Discrimination");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Discrimination";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`Discrimination`";

	
	
				$fdata["FieldPermissions"] = true;

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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatasatei_of_jewelry["Discrimination"] = $fdata;
//	accessories
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "accessories";
	$fdata["GoodName"] = "accessories";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_jewelry","accessories");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "accessories";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`accessories`";

	
	
				$fdata["FieldPermissions"] = true;

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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatasatei_of_jewelry["accessories"] = $fdata;
//	priority
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "priority";
	$fdata["GoodName"] = "priority";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_jewelry","priority");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "priority";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`priority`";

	
	
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




	$tdatasatei_of_jewelry["priority"] = $fdata;
//	A_storage
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "A_storage";
	$fdata["GoodName"] = "A_storage";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_jewelry","A_storage");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "A_storage";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`A_storage`";

	
	
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




	$tdatasatei_of_jewelry["A_storage"] = $fdata;
//	price_per_gram
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "price_per_gram";
	$fdata["GoodName"] = "price_per_gram";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_jewelry","price_per_gram");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "price_per_gram";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`price_per_gram`";

	
	
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




	$tdatasatei_of_jewelry["price_per_gram"] = $fdata;
//	price_per_parent_stone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "price_per_parent_stone";
	$fdata["GoodName"] = "price_per_parent_stone";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_jewelry","price_per_parent_stone");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "price_per_parent_stone";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`price_per_parent_stone`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

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




	$tdatasatei_of_jewelry["price_per_parent_stone"] = $fdata;
//	price_per_aside_stone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "price_per_aside_stone";
	$fdata["GoodName"] = "price_per_aside_stone";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_jewelry","price_per_aside_stone");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "price_per_aside_stone";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`price_per_aside_stone`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

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




	$tdatasatei_of_jewelry["price_per_aside_stone"] = $fdata;
//	price_secret
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "price_secret";
	$fdata["GoodName"] = "price_secret";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_jewelry","price_secret");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "price_secret";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`price_secret`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

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




	$tdatasatei_of_jewelry["price_secret"] = $fdata;
//	sales_price_secret
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 47;
	$fdata["strName"] = "sales_price_secret";
	$fdata["GoodName"] = "sales_price_secret";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_jewelry","sales_price_secret");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "sales_price_secret";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`sales_price_secret`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

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




	$tdatasatei_of_jewelry["sales_price_secret"] = $fdata;
//	eq
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 48;
	$fdata["strName"] = "eq";
	$fdata["GoodName"] = "eq";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_jewelry","eq");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "eq";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`eq`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

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
			$edata["EditParams"].= " maxlength=2";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatasatei_of_jewelry["eq"] = $fdata;
//	en
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 49;
	$fdata["strName"] = "en";
	$fdata["GoodName"] = "en";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_jewelry","en");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "en";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`en`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

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
			$edata["EditParams"].= " maxlength=2";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatasatei_of_jewelry["en"] = $fdata;
//	line
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 50;
	$fdata["strName"] = "line";
	$fdata["GoodName"] = "line";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_jewelry","line");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "line";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`line`";

	
	
				$fdata["FieldPermissions"] = true;

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
	$edata["LinkFieldType"] = 200;
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatasatei_of_jewelry["line"] = $fdata;
//	item_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 51;
	$fdata["strName"] = "item_name";
	$fdata["GoodName"] = "item_name";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_jewelry","item_name");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "item_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`item_name`";

	
	
				$fdata["FieldPermissions"] = true;

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
	$edata["LinkFieldType"] = 200;
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




	$tdatasatei_of_jewelry["item_name"] = $fdata;
//	serial_number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 52;
	$fdata["strName"] = "serial_number";
	$fdata["GoodName"] = "serial_number";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_jewelry","serial_number");
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




	$tdatasatei_of_jewelry["serial_number"] = $fdata;
//	stamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 53;
	$fdata["strName"] = "stamp";
	$fdata["GoodName"] = "stamp";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_jewelry","stamp");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "stamp";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`stamp`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

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




	$tdatasatei_of_jewelry["stamp"] = $fdata;
//	motif
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 54;
	$fdata["strName"] = "motif";
	$fdata["GoodName"] = "motif";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_jewelry","motif");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "motif";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`motif`";

	
	
				$fdata["FieldPermissions"] = true;

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
	$edata["LookupTable"] = "mst_motif";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "name";
	$edata["LinkFieldType"] = 200;
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




	$tdatasatei_of_jewelry["motif"] = $fdata;
//	Setting
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 55;
	$fdata["strName"] = "Setting";
	$fdata["GoodName"] = "Setting";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_jewelry","Setting");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Setting";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`Setting`";

	
	
				$fdata["FieldPermissions"] = true;

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
	$edata["LookupTable"] = "mst_Setting";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "name";
	$edata["LinkFieldType"] = 200;
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




	$tdatasatei_of_jewelry["Setting"] = $fdata;
//	processing
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 56;
	$fdata["strName"] = "processing";
	$fdata["GoodName"] = "processing";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_jewelry","processing");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "processing";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`processing`";

	
	
				$fdata["FieldPermissions"] = true;

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
	$edata["LookupTable"] = "mst_processing";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "name";
	$edata["LinkFieldType"] = 200;
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




	$tdatasatei_of_jewelry["processing"] = $fdata;
//	Ring_size
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 57;
	$fdata["strName"] = "Ring_size";
	$fdata["GoodName"] = "Ring_size";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_jewelry","Ring_size");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Ring_size";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`Ring_size`";

	
	
				$fdata["FieldPermissions"] = true;

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
				$edata["LookupType"] = 1;
	$edata["LookupTable"] = "mst_Ring_size";
	$edata["LookupConnId"] = "internet_at_urlounge_co_jp";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "name";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "name";

	
	$edata["LookupOrderBy"] = "sort";

	
	
	
		$edata["SimpleAdd"] = true;


	
	
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




	$tdatasatei_of_jewelry["Ring_size"] = $fdata;
//	ecc_seq
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 58;
	$fdata["strName"] = "ecc_seq";
	$fdata["GoodName"] = "ecc_seq";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("satei_of_jewelry","ecc_seq");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdatasatei_of_jewelry["ecc_seq"] = $fdata;
//	yahoo_junle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 59;
	$fdata["strName"] = "yahoo_junle";
	$fdata["GoodName"] = "yahoo_junle";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_jewelry","yahoo_junle");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "yahoo_junle";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`yahoo_junle`";

	
	
				$fdata["FieldPermissions"] = true;

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

	
		
	$edata["LinkField"] = "name";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "name";

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
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








	$tdatasatei_of_jewelry["yahoo_junle"] = $fdata;
//	logo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 60;
	$fdata["strName"] = "logo";
	$fdata["GoodName"] = "logo";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_jewelry","logo");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "logo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`logo`";

	
	
				$fdata["FieldPermissions"] = true;

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
		$edata["LCType"] = 4;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "無";
	$edata["LookupValues"][] = "有";

	
	
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




	$tdatasatei_of_jewelry["logo"] = $fdata;
//	parts
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 61;
	$fdata["strName"] = "parts";
	$fdata["GoodName"] = "parts";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_jewelry","parts");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "parts";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`parts`";

	
	
				$fdata["FieldPermissions"] = true;

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
		$edata["LCType"] = 4;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "無";
	$edata["LookupValues"][] = "有";

	
	
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




	$tdatasatei_of_jewelry["parts"] = $fdata;
//	guarantee
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 62;
	$fdata["strName"] = "guarantee";
	$fdata["GoodName"] = "guarantee";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_jewelry","guarantee");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "guarantee";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`guarantee`";

	
	
				$fdata["FieldPermissions"] = true;

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
		$edata["LCType"] = 4;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "無";
	$edata["LookupValues"][] = "有";

	
	
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




	$tdatasatei_of_jewelry["guarantee"] = $fdata;
//	errors
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 63;
	$fdata["strName"] = "errors";
	$fdata["GoodName"] = "errors";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_jewelry","errors");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "errors";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`errors`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

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




	$tdatasatei_of_jewelry["errors"] = $fdata;
//	designer
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 64;
	$fdata["strName"] = "designer";
	$fdata["GoodName"] = "designer";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_jewelry","designer");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "designer";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`designer`";

	
	
				$fdata["FieldPermissions"] = true;

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
	$edata["LookupTable"] = "mst_designer";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
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




	$tdatasatei_of_jewelry["designer"] = $fdata;
//	hahakai
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 65;
	$fdata["strName"] = "hahakai";
	$fdata["GoodName"] = "hahakai";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_jewelry","hahakai");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "hahakai";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`hahakai`";

	
	
				$fdata["FieldPermissions"] = true;

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
	$edata["LookupTable"] = "mst_hahakai";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
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




	$tdatasatei_of_jewelry["hahakai"] = $fdata;
//	effect
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 66;
	$fdata["strName"] = "effect";
	$fdata["GoodName"] = "effect";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_jewelry","effect");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "effect";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`effect`";

	
	
				$fdata["FieldPermissions"] = true;

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
	$edata["LookupTable"] = "mst_effect";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
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




	$tdatasatei_of_jewelry["effect"] = $fdata;
//	shape
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 67;
	$fdata["strName"] = "shape";
	$fdata["GoodName"] = "shape";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_jewelry","shape");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "shape";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`shape`";

	
	
				$fdata["FieldPermissions"] = true;

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
	$edata["LookupTable"] = "mst_shape";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
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




	$tdatasatei_of_jewelry["shape"] = $fdata;
//	cutting_style
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 68;
	$fdata["strName"] = "cutting_style";
	$fdata["GoodName"] = "cutting_style";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_jewelry","cutting_style");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "cutting_style";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`cutting_style`";

	
	
				$fdata["FieldPermissions"] = true;

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
	$edata["LookupTable"] = "mst_cutting_style";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
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




	$tdatasatei_of_jewelry["cutting_style"] = $fdata;
//	chain_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 69;
	$fdata["strName"] = "chain_type";
	$fdata["GoodName"] = "chain_type";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_jewelry","chain_type");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "chain_type";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`chain_type`";

	
	
				$fdata["FieldPermissions"] = true;

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
	$edata["LookupTable"] = "mst_chain_type";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
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




	$tdatasatei_of_jewelry["chain_type"] = $fdata;
//	number_of_stones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 70;
	$fdata["strName"] = "number_of_stones";
	$fdata["GoodName"] = "number_of_stones";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_jewelry","number_of_stones");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "number_of_stones";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`number_of_stones`";

	
	
				$fdata["FieldPermissions"] = true;

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
	$edata["LookupTable"] = "mst_number_of_stones";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
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




	$tdatasatei_of_jewelry["number_of_stones"] = $fdata;
//	satei_error
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 71;
	$fdata["strName"] = "satei_error";
	$fdata["GoodName"] = "satei_error";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_jewelry","satei_error");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "satei_error";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`satei_error`";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdatasatei_of_jewelry["satei_error"] = $fdata;
//	producing_area
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 72;
	$fdata["strName"] = "producing_area";
	$fdata["GoodName"] = "producing_area";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_jewelry","producing_area");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "producing_area";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`producing_area`";

	
	
				$fdata["FieldPermissions"] = true;

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
	$edata["LookupTable"] = "mst_producing_area";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "english_name";

	
	$edata["LookupOrderBy"] = "id";

		$edata["LookupDesc"] = true;

	
	
	

	
	
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




	$tdatasatei_of_jewelry["producing_area"] = $fdata;
//	shape_supplement
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 73;
	$fdata["strName"] = "shape_supplement";
	$fdata["GoodName"] = "shape_supplement";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_jewelry","shape_supplement");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "shape_supplement";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`shape_supplement`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

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




	$tdatasatei_of_jewelry["shape_supplement"] = $fdata;
//	side_gem
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 74;
	$fdata["strName"] = "side_gem";
	$fdata["GoodName"] = "side_gem";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_jewelry","side_gem");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "side_gem";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`side_gem`";

	
	
				$fdata["FieldPermissions"] = true;

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
	$edata["LookupTable"] = "mst_side_gem";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
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




	$tdatasatei_of_jewelry["side_gem"] = $fdata;
//	product_style
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 75;
	$fdata["strName"] = "product_style";
	$fdata["GoodName"] = "product_style";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_jewelry","product_style");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "product_style";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`product_style`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

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
			$edata["EditParams"].= " maxlength=150";

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




	$tdatasatei_of_jewelry["product_style"] = $fdata;
//	unit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 76;
	$fdata["strName"] = "unit";
	$fdata["GoodName"] = "unit";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_jewelry","unit");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "unit";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`unit`";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdatasatei_of_jewelry["unit"] = $fdata;
//	hall_mark
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 77;
	$fdata["strName"] = "hall_mark";
	$fdata["GoodName"] = "hall_mark";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_jewelry","hall_mark");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "hall_mark";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`hall_mark`";

	
	
				$fdata["FieldPermissions"] = true;

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
	$edata["LookupTable"] = "mst_hall_mark";
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




	$tdatasatei_of_jewelry["hall_mark"] = $fdata;
//	plate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 78;
	$fdata["strName"] = "plate";
	$fdata["GoodName"] = "plate";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_jewelry","plate");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "plate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`plate`";

	
	
				$fdata["FieldPermissions"] = true;

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
		$edata["LCType"] = 4;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "無";
	$edata["LookupValues"][] = "有";

	
	
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




	$tdatasatei_of_jewelry["plate"] = $fdata;
//	updated_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 79;
	$fdata["strName"] = "updated_by";
	$fdata["GoodName"] = "updated_by";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_jewelry","updated_by");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "updated_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`updated_by`";

	
	
			
				$fdata["UploadFolder"] = "files";

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








	$tdatasatei_of_jewelry["updated_by"] = $fdata;
//	country_of_origin
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 80;
	$fdata["strName"] = "country_of_origin";
	$fdata["GoodName"] = "country_of_origin";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_jewelry","country_of_origin");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "country_of_origin";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`country_of_origin`";

	
	
				$fdata["FieldPermissions"] = true;

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
	$edata["LookupTable"] = "mst_country_of_origin";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
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




	$tdatasatei_of_jewelry["country_of_origin"] = $fdata;
//	parallel_import_flag
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 81;
	$fdata["strName"] = "parallel_import_flag";
	$fdata["GoodName"] = "parallel_import_flag";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_jewelry","parallel_import_flag");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
	
	
	
		$fdata["strField"] = "parallel_import_flag";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`parallel_import_flag`";

	
	
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








	$tdatasatei_of_jewelry["parallel_import_flag"] = $fdata;
//	meisai_number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 82;
	$fdata["strName"] = "meisai_number";
	$fdata["GoodName"] = "meisai_number";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_jewelry","meisai_number");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "meisai_number";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`meisai_number`";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdatasatei_of_jewelry["meisai_number"] = $fdata;
//	tentou_label_output_flag
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 83;
	$fdata["strName"] = "tentou_label_output_flag";
	$fdata["GoodName"] = "tentou_label_output_flag";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_jewelry","tentou_label_output_flag");
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




	$tdatasatei_of_jewelry["tentou_label_output_flag"] = $fdata;
//	itaku_flag
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 84;
	$fdata["strName"] = "itaku_flag";
	$fdata["GoodName"] = "itaku_flag";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_jewelry","itaku_flag");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "itaku_flag";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`itaku_flag`";

	
	
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




	$tdatasatei_of_jewelry["itaku_flag"] = $fdata;
//	novelty
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 85;
	$fdata["strName"] = "novelty";
	$fdata["GoodName"] = "novelty";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_jewelry","novelty");
	$fdata["FieldType"] = 16;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "novelty";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`novelty`";

	
	
			
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








	$tdatasatei_of_jewelry["novelty"] = $fdata;
//	initial_included
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 86;
	$fdata["strName"] = "initial_included";
	$fdata["GoodName"] = "initial_included";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_jewelry","initial_included");
	$fdata["FieldType"] = 16;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "initial_included";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`initial_included`";

	
	
			
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








	$tdatasatei_of_jewelry["initial_included"] = $fdata;
//	auto_price_cut_prohibited
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 87;
	$fdata["strName"] = "auto_price_cut_prohibited";
	$fdata["GoodName"] = "auto_price_cut_prohibited";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_jewelry","auto_price_cut_prohibited");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "auto_price_cut_prohibited";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`auto_price_cut_prohibited`";

	
	
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




	$tdatasatei_of_jewelry["auto_price_cut_prohibited"] = $fdata;
//	Eoc_trader_id_for_buy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 88;
	$fdata["strName"] = "Eoc_trader_id_for_buy";
	$fdata["GoodName"] = "Eoc_trader_id_for_buy";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_jewelry","Eoc_trader_id_for_buy");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "Eoc_trader_id_for_buy";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`Eoc_trader_id_for_buy`";

	
	
			
				$fdata["UploadFolder"] = "files";

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








	$tdatasatei_of_jewelry["Eoc_trader_id_for_buy"] = $fdata;
//	other_cost
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 89;
	$fdata["strName"] = "other_cost";
	$fdata["GoodName"] = "other_cost";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_jewelry","other_cost");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "other_cost";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`other_cost`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

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




	$tdatasatei_of_jewelry["other_cost"] = $fdata;
//	yahoo_condition1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 90;
	$fdata["strName"] = "yahoo_condition1";
	$fdata["GoodName"] = "yahoo_condition1";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_jewelry","yahoo_condition1");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "yahoo_condition1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`yahoo_condition1`";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdatasatei_of_jewelry["yahoo_condition1"] = $fdata;
//	remark
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 91;
	$fdata["strName"] = "remark";
	$fdata["GoodName"] = "remark";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_jewelry","remark");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "remark";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`remark`";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdatasatei_of_jewelry["remark"] = $fdata;
//	DA_SELFGRES
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 92;
	$fdata["strName"] = "DA_SELFGRES";
	$fdata["GoodName"] = "DA_SELFGRES";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_jewelry","DA_SELFGRES");
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




	$tdatasatei_of_jewelry["DA_SELFGRES"] = $fdata;
//	DA_INTENSITY
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 93;
	$fdata["strName"] = "DA_INTENSITY";
	$fdata["GoodName"] = "DA_INTENSITY";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_jewelry","DA_INTENSITY");
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




	$tdatasatei_of_jewelry["DA_INTENSITY"] = $fdata;
//	DA_OVERTONE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 94;
	$fdata["strName"] = "DA_OVERTONE";
	$fdata["GoodName"] = "DA_OVERTONE";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_jewelry","DA_OVERTONE");
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




	$tdatasatei_of_jewelry["DA_OVERTONE"] = $fdata;
//	DA_COLOR
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 95;
	$fdata["strName"] = "DA_COLOR";
	$fdata["GoodName"] = "DA_COLOR";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_jewelry","DA_COLOR");
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




	$tdatasatei_of_jewelry["DA_COLOR"] = $fdata;
//	DA_CLARITY
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 96;
	$fdata["strName"] = "DA_CLARITY";
	$fdata["GoodName"] = "DA_CLARITY";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_jewelry","DA_CLARITY");
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




	$tdatasatei_of_jewelry["DA_CLARITY"] = $fdata;
//	DA_CUT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 97;
	$fdata["strName"] = "DA_CUT";
	$fdata["GoodName"] = "DA_CUT";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_jewelry","DA_CUT");
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




	$tdatasatei_of_jewelry["DA_CUT"] = $fdata;
//	DA_POLISH
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 98;
	$fdata["strName"] = "DA_POLISH";
	$fdata["GoodName"] = "DA_POLISH";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_jewelry","DA_POLISH");
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




	$tdatasatei_of_jewelry["DA_POLISH"] = $fdata;
//	DA_SYMMETRY
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 99;
	$fdata["strName"] = "DA_SYMMETRY";
	$fdata["GoodName"] = "DA_SYMMETRY";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_jewelry","DA_SYMMETRY");
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




	$tdatasatei_of_jewelry["DA_SYMMETRY"] = $fdata;
//	DA_FLUO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 100;
	$fdata["strName"] = "DA_FLUO";
	$fdata["GoodName"] = "DA_FLUO";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_jewelry","DA_FLUO");
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




	$tdatasatei_of_jewelry["DA_FLUO"] = $fdata;
//	DA_COLOR_FLUO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 101;
	$fdata["strName"] = "DA_COLOR_FLUO";
	$fdata["GoodName"] = "DA_COLOR_FLUO";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_jewelry","DA_COLOR_FLUO");
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




	$tdatasatei_of_jewelry["DA_COLOR_FLUO"] = $fdata;
//	DA_WIDE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 102;
	$fdata["strName"] = "DA_WIDE";
	$fdata["GoodName"] = "DA_WIDE";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_jewelry","DA_WIDE");
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




	$tdatasatei_of_jewelry["DA_WIDE"] = $fdata;
//	DA_HIGH
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 103;
	$fdata["strName"] = "DA_HIGH";
	$fdata["GoodName"] = "DA_HIGH";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_jewelry","DA_HIGH");
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




	$tdatasatei_of_jewelry["DA_HIGH"] = $fdata;
//	DA_DEPTH
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 104;
	$fdata["strName"] = "DA_DEPTH";
	$fdata["GoodName"] = "DA_DEPTH";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_jewelry","DA_DEPTH");
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




	$tdatasatei_of_jewelry["DA_DEPTH"] = $fdata;
//	DA_FRAPA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 105;
	$fdata["strName"] = "DA_FRAPA";
	$fdata["GoodName"] = "DA_FRAPA";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_jewelry","DA_FRAPA");
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




	$tdatasatei_of_jewelry["DA_FRAPA"] = $fdata;
//	DA_RATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 106;
	$fdata["strName"] = "DA_RATE";
	$fdata["GoodName"] = "DA_RATE";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_jewelry","DA_RATE");
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




	$tdatasatei_of_jewelry["DA_RATE"] = $fdata;
//	multiplication_rate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 107;
	$fdata["strName"] = "multiplication_rate";
	$fdata["GoodName"] = "multiplication_rate";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_jewelry","multiplication_rate");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "multiplication_rate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`multiplication_rate`";

	
	
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




	$tdatasatei_of_jewelry["multiplication_rate"] = $fdata;


$tables_data["satei_of_jewelry"]=&$tdatasatei_of_jewelry;
$field_labels["satei_of_jewelry"] = &$fieldLabelssatei_of_jewelry;
$fieldToolTips["satei_of_jewelry"] = &$fieldToolTipssatei_of_jewelry;
$placeHolders["satei_of_jewelry"] = &$placeHolderssatei_of_jewelry;
$page_titles["satei_of_jewelry"] = &$pageTitlessatei_of_jewelry;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["satei_of_jewelry"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["satei_of_jewelry"] = array();


	
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
					$masterTablesData["satei_of_jewelry"][0] = $masterParams;
				$masterTablesData["satei_of_jewelry"][0]["masterKeys"] = array();
	$masterTablesData["satei_of_jewelry"][0]["masterKeys"][]="ecc_id";
				$masterTablesData["satei_of_jewelry"][0]["detailKeys"] = array();
	$masterTablesData["satei_of_jewelry"][0]["detailKeys"][]="ecc_id";
		
	
				$strOriginalDetailsTable="Eoc_trader";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="Eoc_trader";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "Eoc_trader";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispMasterInfo"] = array();
				$masterParams["dispMasterInfo"][PAGE_LIST] = true;
			
	$masterParams["previewOnList"]= 2;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterParams["proceedLink"]= 1;

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["satei_of_jewelry"][1] = $masterParams;
				$masterTablesData["satei_of_jewelry"][1]["masterKeys"] = array();
	$masterTablesData["satei_of_jewelry"][1]["masterKeys"][]="id";
				$masterTablesData["satei_of_jewelry"][1]["detailKeys"] = array();
	$masterTablesData["satei_of_jewelry"][1]["detailKeys"][]="Eoc_trader_id_for_buy";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_satei_of_jewelry()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`shouhin`.`product_id`,  `shouhin`.`category_id`,  `shouhin`.`goods_title`,  `shouhin`.`title`,  `shouhin`.`sub_category_id1`,  `shouhin`.`ecc_id`,  `shouhin`.`price`,  `shouhin`.`sales_price`,  `shouhin`.`description`,  `shouhin`.`status`,  `shouhin`.`product_num`,  `shouhin`.`yahoo_sankou_uwadai`,  `shouhin`.`yahoo_sozai`,  `shouhin`.`yahoo_kataban`,  `shouhin`.`yahoo_condition2`,  `shouhin`.`yahoo_sinaban`,  `shouhin`.`yahoo_sex`,  `shouhin`.`nyuukin_price`,  `shouhin`.`raku_title`,  `shouhin`.`label_output_flag`,  `shouhin`.`season`,  `shouhin`.`satei_by`,  `shouhin`.`kaitori_by`,  `shouhin`.`comment`,  `shouhin`.`satei_hi`,  `shouhin`.`kaitory_hi`,  `shouhin`.`DT_UP_DATE`,  `shouhin`.`AWAZU_DATE`,  `shouhin`.`AWAZU_NIN`,  `shouhin`.`gold_property`,  `shouhin`.`ichiba_title`,  `shouhin`.`Gram`,  `shouhin`.`Parent_stone`,  `shouhin`.`Aside_stone`,  `shouhin`.`Appraiser`,  `shouhin`.`Remarks`,  `shouhin`.`Destination_selling`,  `shouhin`.`Finish`,  `shouhin`.`Discrimination`,  `shouhin`.`accessories`,  `shouhin`.`priority`,  `shouhin`.`A_storage`,  `shouhin`.`price_per_gram`,  `shouhin`.`price_per_parent_stone`,  `shouhin`.`price_per_aside_stone`,  `shouhin`.`price_secret`,  `shouhin`.`sales_price_secret`,  `shouhin`.`eq`,  `shouhin`.`en`,  `shouhin`.`line`,  `shouhin`.`item_name`,  `shouhin`.`serial_number`,  `shouhin`.`stamp`,  `shouhin`.`motif`,  `shouhin`.`Setting`,  `shouhin`.`processing`,  `shouhin`.`Ring_size`,  `Eoc`.`ecc_seq`,  `shouhin`.`yahoo_junle`,  `shouhin`.`logo`,  `shouhin`.`parts`,  `shouhin`.`guarantee`,  `shouhin`.`errors`,  `shouhin`.`designer`,  `shouhin`.`hahakai`,  `shouhin`.`effect`,  `shouhin`.`shape`,  `shouhin`.`cutting_style`,  `shouhin`.`chain_type`,  `shouhin`.`number_of_stones`,  `shouhin`.`satei_error`,  `shouhin`.`producing_area`,  `shouhin`.`shape_supplement`,  `shouhin`.`side_gem`,  `shouhin`.`product_style`,  `shouhin`.`unit`,  `shouhin`.`hall_mark`,  `shouhin`.`plate`,  `shouhin`.`updated_by`,  `shouhin`.`country_of_origin`,  `shouhin`.`parallel_import_flag`,  `shouhin`.`meisai_number`,  `shouhin`.`tentou_label_output_flag`,  `shouhin`.`itaku_flag`,  `shouhin`.`novelty`,  `shouhin`.`initial_included`,  `shouhin`.`auto_price_cut_prohibited`,  `shouhin`.`Eoc_trader_id_for_buy`,  `shouhin`.`other_cost`,  `shouhin`.`yahoo_condition1`,  `shouhin`.`remark`,  `shouhin`.`DA_SELFGRES`,  `shouhin`.`DA_INTENSITY`,  `shouhin`.`DA_OVERTONE`,  `shouhin`.`DA_COLOR`,  `shouhin`.`DA_CLARITY`,  `shouhin`.`DA_CUT`,  `shouhin`.`DA_POLISH`,  `shouhin`.`DA_SYMMETRY`,  `shouhin`.`DA_FLUO`,  `shouhin`.`DA_COLOR_FLUO`,  `shouhin`.`DA_WIDE`,  `shouhin`.`DA_HIGH`,  `shouhin`.`DA_DEPTH`,  `shouhin`.`DA_FRAPA`,  `shouhin`.`DA_RATE`,  `shouhin`.`multiplication_rate`";
$proto0["m_strFrom"] = "FROM `shouhin`  LEFT OUTER JOIN `Eoc` ON `shouhin`.`ecc_id` = `Eoc`.`ecc_id`";
$proto0["m_strWhere"] = "(`shouhin`.`category_id` =  10 OR `shouhin`.`category_id` =  12 OR `shouhin`.`category_id` =  17 OR `shouhin`.`category_id` =  18 OR `shouhin`.`category_id` =  19 OR `shouhin`.`category_id` =  50 OR `shouhin`.`category_id` =  20 OR `shouhin`.`category_id` =  51 OR `shouhin`.`category_id` =  21 OR `shouhin`.`category_id` =  22 OR `shouhin`.`category_id` =  23 OR `shouhin`.`category_id` =  69 OR `shouhin`.`category_id` =  68 OR `shouhin`.`category_id` =  67 OR `shouhin`.`category_id` =  66 OR `shouhin`.`category_id` =  65) AND (`shouhin`.`status` =32 OR `shouhin`.`status` =34)";
$proto0["m_strOrderBy"] = "ORDER BY `shouhin`.`product_id` DESC";
$proto0["m_strTail"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "(`shouhin`.`category_id` =  10 OR `shouhin`.`category_id` =  12 OR `shouhin`.`category_id` =  17 OR `shouhin`.`category_id` =  18 OR `shouhin`.`category_id` =  19 OR `shouhin`.`category_id` =  50 OR `shouhin`.`category_id` =  20 OR `shouhin`.`category_id` =  51 OR `shouhin`.`category_id` =  21 OR `shouhin`.`category_id` =  22 OR `shouhin`.`category_id` =  23 OR `shouhin`.`category_id` =  69 OR `shouhin`.`category_id` =  68 OR `shouhin`.`category_id` =  67 OR `shouhin`.`category_id` =  66 OR `shouhin`.`category_id` =  65) AND (`shouhin`.`status` =32 OR `shouhin`.`status` =34)";
$proto2["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(`shouhin`.`category_id` =  10 OR `shouhin`.`category_id` =  12 OR `shouhin`.`category_id` =  17 OR `shouhin`.`category_id` =  18 OR `shouhin`.`category_id` =  19 OR `shouhin`.`category_id` =  50 OR `shouhin`.`category_id` =  20 OR `shouhin`.`category_id` =  51 OR `shouhin`.`category_id` =  21 OR `shouhin`.`category_id` =  22 OR `shouhin`.`category_id` =  23 OR `shouhin`.`category_id` =  69 OR `shouhin`.`category_id` =  68 OR `shouhin`.`category_id` =  67 OR `shouhin`.`category_id` =  66 OR `shouhin`.`category_id` =  65) AND (`shouhin`.`status` =32 OR `shouhin`.`status` =34)"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
						$proto4=array();
$proto4["m_sql"] = "`shouhin`.`category_id` =  10 OR `shouhin`.`category_id` =  12 OR `shouhin`.`category_id` =  17 OR `shouhin`.`category_id` =  18 OR `shouhin`.`category_id` =  19 OR `shouhin`.`category_id` =  50 OR `shouhin`.`category_id` =  20 OR `shouhin`.`category_id` =  51 OR `shouhin`.`category_id` =  21 OR `shouhin`.`category_id` =  22 OR `shouhin`.`category_id` =  23 OR `shouhin`.`category_id` =  69 OR `shouhin`.`category_id` =  68 OR `shouhin`.`category_id` =  67 OR `shouhin`.`category_id` =  66 OR `shouhin`.`category_id` =  65";
$proto4["m_uniontype"] = "SQLL_OR";
	$obj = new SQLNonParsed(array(
	"m_sql" => "`shouhin`.`category_id` =  10 OR `shouhin`.`category_id` =  12 OR `shouhin`.`category_id` =  17 OR `shouhin`.`category_id` =  18 OR `shouhin`.`category_id` =  19 OR `shouhin`.`category_id` =  50 OR `shouhin`.`category_id` =  20 OR `shouhin`.`category_id` =  51 OR `shouhin`.`category_id` =  21 OR `shouhin`.`category_id` =  22 OR `shouhin`.`category_id` =  23 OR `shouhin`.`category_id` =  69 OR `shouhin`.`category_id` =  68 OR `shouhin`.`category_id` =  67 OR `shouhin`.`category_id` =  66 OR `shouhin`.`category_id` =  65"
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
						$proto6=array();
$proto6["m_sql"] = "`shouhin`.`category_id` =  10";
$proto6["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "category_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_jewelry"
));

$proto6["m_column"]=$obj;
$proto6["m_contained"] = array();
$proto6["m_strCase"] = "=  10";
$proto6["m_havingmode"] = false;
$proto6["m_inBrackets"] = false;
$proto6["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto6);

			$proto4["m_contained"][]=$obj;
						$proto8=array();
$proto8["m_sql"] = "`shouhin`.`category_id` =  12";
$proto8["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "category_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_jewelry"
));

$proto8["m_column"]=$obj;
$proto8["m_contained"] = array();
$proto8["m_strCase"] = "=  12";
$proto8["m_havingmode"] = false;
$proto8["m_inBrackets"] = false;
$proto8["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto8);

			$proto4["m_contained"][]=$obj;
						$proto10=array();
$proto10["m_sql"] = "`shouhin`.`category_id` =  17";
$proto10["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "category_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_jewelry"
));

$proto10["m_column"]=$obj;
$proto10["m_contained"] = array();
$proto10["m_strCase"] = "=  17";
$proto10["m_havingmode"] = false;
$proto10["m_inBrackets"] = false;
$proto10["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto10);

			$proto4["m_contained"][]=$obj;
						$proto12=array();
$proto12["m_sql"] = "`shouhin`.`category_id` =  18";
$proto12["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "category_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_jewelry"
));

$proto12["m_column"]=$obj;
$proto12["m_contained"] = array();
$proto12["m_strCase"] = "=  18";
$proto12["m_havingmode"] = false;
$proto12["m_inBrackets"] = false;
$proto12["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto12);

			$proto4["m_contained"][]=$obj;
						$proto14=array();
$proto14["m_sql"] = "`shouhin`.`category_id` =  19";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "category_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_jewelry"
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "=  19";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = false;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

			$proto4["m_contained"][]=$obj;
						$proto16=array();
$proto16["m_sql"] = "`shouhin`.`category_id` =  50";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "category_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_jewelry"
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "=  50";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = false;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

			$proto4["m_contained"][]=$obj;
						$proto18=array();
$proto18["m_sql"] = "`shouhin`.`category_id` =  20";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "category_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_jewelry"
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "=  20";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

			$proto4["m_contained"][]=$obj;
						$proto20=array();
$proto20["m_sql"] = "`shouhin`.`category_id` =  51";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "category_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_jewelry"
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "=  51";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

			$proto4["m_contained"][]=$obj;
						$proto22=array();
$proto22["m_sql"] = "`shouhin`.`category_id` =  21";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "category_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_jewelry"
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "=  21";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

			$proto4["m_contained"][]=$obj;
						$proto24=array();
$proto24["m_sql"] = "`shouhin`.`category_id` =  22";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "category_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_jewelry"
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "=  22";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

			$proto4["m_contained"][]=$obj;
						$proto26=array();
$proto26["m_sql"] = "`shouhin`.`category_id` =  23";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "category_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_jewelry"
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "=  23";
$proto26["m_havingmode"] = false;
$proto26["m_inBrackets"] = false;
$proto26["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto26);

			$proto4["m_contained"][]=$obj;
						$proto28=array();
$proto28["m_sql"] = "`shouhin`.`category_id` =  69";
$proto28["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "category_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_jewelry"
));

$proto28["m_column"]=$obj;
$proto28["m_contained"] = array();
$proto28["m_strCase"] = "=  69";
$proto28["m_havingmode"] = false;
$proto28["m_inBrackets"] = false;
$proto28["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto28);

			$proto4["m_contained"][]=$obj;
						$proto30=array();
$proto30["m_sql"] = "`shouhin`.`category_id` =  68";
$proto30["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "category_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_jewelry"
));

$proto30["m_column"]=$obj;
$proto30["m_contained"] = array();
$proto30["m_strCase"] = "=  68";
$proto30["m_havingmode"] = false;
$proto30["m_inBrackets"] = false;
$proto30["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto30);

			$proto4["m_contained"][]=$obj;
						$proto32=array();
$proto32["m_sql"] = "`shouhin`.`category_id` =  67";
$proto32["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "category_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_jewelry"
));

$proto32["m_column"]=$obj;
$proto32["m_contained"] = array();
$proto32["m_strCase"] = "=  67";
$proto32["m_havingmode"] = false;
$proto32["m_inBrackets"] = false;
$proto32["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto32);

			$proto4["m_contained"][]=$obj;
						$proto34=array();
$proto34["m_sql"] = "`shouhin`.`category_id` =  66";
$proto34["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "category_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_jewelry"
));

$proto34["m_column"]=$obj;
$proto34["m_contained"] = array();
$proto34["m_strCase"] = "=  66";
$proto34["m_havingmode"] = false;
$proto34["m_inBrackets"] = false;
$proto34["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto34);

			$proto4["m_contained"][]=$obj;
						$proto36=array();
$proto36["m_sql"] = "`shouhin`.`category_id` =  65";
$proto36["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "category_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_jewelry"
));

$proto36["m_column"]=$obj;
$proto36["m_contained"] = array();
$proto36["m_strCase"] = "=  65";
$proto36["m_havingmode"] = false;
$proto36["m_inBrackets"] = false;
$proto36["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto36);

			$proto4["m_contained"][]=$obj;
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = true;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

			$proto2["m_contained"][]=$obj;
						$proto38=array();
$proto38["m_sql"] = "`shouhin`.`status` =32 OR `shouhin`.`status` =34";
$proto38["m_uniontype"] = "SQLL_OR";
	$obj = new SQLNonParsed(array(
	"m_sql" => "`shouhin`.`status` =32 OR `shouhin`.`status` =34"
));

$proto38["m_column"]=$obj;
$proto38["m_contained"] = array();
						$proto40=array();
$proto40["m_sql"] = "`shouhin`.`status` =32";
$proto40["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_jewelry"
));

$proto40["m_column"]=$obj;
$proto40["m_contained"] = array();
$proto40["m_strCase"] = "=32";
$proto40["m_havingmode"] = false;
$proto40["m_inBrackets"] = false;
$proto40["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto40);

			$proto38["m_contained"][]=$obj;
						$proto42=array();
$proto42["m_sql"] = "`shouhin`.`status` =34";
$proto42["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_jewelry"
));

$proto42["m_column"]=$obj;
$proto42["m_contained"] = array();
$proto42["m_strCase"] = "=34";
$proto42["m_havingmode"] = false;
$proto42["m_inBrackets"] = false;
$proto42["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto42);

			$proto38["m_contained"][]=$obj;
$proto38["m_strCase"] = "";
$proto38["m_havingmode"] = false;
$proto38["m_inBrackets"] = true;
$proto38["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto38);

			$proto2["m_contained"][]=$obj;
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto44=array();
$proto44["m_sql"] = "";
$proto44["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto44["m_column"]=$obj;
$proto44["m_contained"] = array();
$proto44["m_strCase"] = "";
$proto44["m_havingmode"] = false;
$proto44["m_inBrackets"] = false;
$proto44["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto44);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "product_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_jewelry"
));

$proto46["m_sql"] = "`shouhin`.`product_id`";
$proto46["m_srcTableName"] = "satei_of_jewelry";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "category_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_jewelry"
));

$proto48["m_sql"] = "`shouhin`.`category_id`";
$proto48["m_srcTableName"] = "satei_of_jewelry";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "goods_title",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_jewelry"
));

$proto50["m_sql"] = "`shouhin`.`goods_title`";
$proto50["m_srcTableName"] = "satei_of_jewelry";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "title",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_jewelry"
));

$proto52["m_sql"] = "`shouhin`.`title`";
$proto52["m_srcTableName"] = "satei_of_jewelry";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "sub_category_id1",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_jewelry"
));

$proto54["m_sql"] = "`shouhin`.`sub_category_id1`";
$proto54["m_srcTableName"] = "satei_of_jewelry";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "ecc_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_jewelry"
));

$proto56["m_sql"] = "`shouhin`.`ecc_id`";
$proto56["m_srcTableName"] = "satei_of_jewelry";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "price",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_jewelry"
));

$proto58["m_sql"] = "`shouhin`.`price`";
$proto58["m_srcTableName"] = "satei_of_jewelry";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "sales_price",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_jewelry"
));

$proto60["m_sql"] = "`shouhin`.`sales_price`";
$proto60["m_srcTableName"] = "satei_of_jewelry";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_jewelry"
));

$proto62["m_sql"] = "`shouhin`.`description`";
$proto62["m_srcTableName"] = "satei_of_jewelry";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_jewelry"
));

$proto64["m_sql"] = "`shouhin`.`status`";
$proto64["m_srcTableName"] = "satei_of_jewelry";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "product_num",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_jewelry"
));

$proto66["m_sql"] = "`shouhin`.`product_num`";
$proto66["m_srcTableName"] = "satei_of_jewelry";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_sankou_uwadai",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_jewelry"
));

$proto68["m_sql"] = "`shouhin`.`yahoo_sankou_uwadai`";
$proto68["m_srcTableName"] = "satei_of_jewelry";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_sozai",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_jewelry"
));

$proto70["m_sql"] = "`shouhin`.`yahoo_sozai`";
$proto70["m_srcTableName"] = "satei_of_jewelry";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_kataban",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_jewelry"
));

$proto72["m_sql"] = "`shouhin`.`yahoo_kataban`";
$proto72["m_srcTableName"] = "satei_of_jewelry";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_condition2",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_jewelry"
));

$proto74["m_sql"] = "`shouhin`.`yahoo_condition2`";
$proto74["m_srcTableName"] = "satei_of_jewelry";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_sinaban",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_jewelry"
));

$proto76["m_sql"] = "`shouhin`.`yahoo_sinaban`";
$proto76["m_srcTableName"] = "satei_of_jewelry";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_sex",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_jewelry"
));

$proto78["m_sql"] = "`shouhin`.`yahoo_sex`";
$proto78["m_srcTableName"] = "satei_of_jewelry";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "nyuukin_price",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_jewelry"
));

$proto80["m_sql"] = "`shouhin`.`nyuukin_price`";
$proto80["m_srcTableName"] = "satei_of_jewelry";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "raku_title",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_jewelry"
));

$proto82["m_sql"] = "`shouhin`.`raku_title`";
$proto82["m_srcTableName"] = "satei_of_jewelry";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "label_output_flag",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_jewelry"
));

$proto84["m_sql"] = "`shouhin`.`label_output_flag`";
$proto84["m_srcTableName"] = "satei_of_jewelry";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "season",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_jewelry"
));

$proto86["m_sql"] = "`shouhin`.`season`";
$proto86["m_srcTableName"] = "satei_of_jewelry";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "satei_by",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_jewelry"
));

$proto88["m_sql"] = "`shouhin`.`satei_by`";
$proto88["m_srcTableName"] = "satei_of_jewelry";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "kaitori_by",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_jewelry"
));

$proto90["m_sql"] = "`shouhin`.`kaitori_by`";
$proto90["m_srcTableName"] = "satei_of_jewelry";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLField(array(
	"m_strName" => "comment",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_jewelry"
));

$proto92["m_sql"] = "`shouhin`.`comment`";
$proto92["m_srcTableName"] = "satei_of_jewelry";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "";
$obj = new SQLFieldListItem($proto92);

$proto0["m_fieldlist"][]=$obj;
						$proto94=array();
			$obj = new SQLField(array(
	"m_strName" => "satei_hi",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_jewelry"
));

$proto94["m_sql"] = "`shouhin`.`satei_hi`";
$proto94["m_srcTableName"] = "satei_of_jewelry";
$proto94["m_expr"]=$obj;
$proto94["m_alias"] = "";
$obj = new SQLFieldListItem($proto94);

$proto0["m_fieldlist"][]=$obj;
						$proto96=array();
			$obj = new SQLField(array(
	"m_strName" => "kaitory_hi",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_jewelry"
));

$proto96["m_sql"] = "`shouhin`.`kaitory_hi`";
$proto96["m_srcTableName"] = "satei_of_jewelry";
$proto96["m_expr"]=$obj;
$proto96["m_alias"] = "";
$obj = new SQLFieldListItem($proto96);

$proto0["m_fieldlist"][]=$obj;
						$proto98=array();
			$obj = new SQLField(array(
	"m_strName" => "DT_UP_DATE",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_jewelry"
));

$proto98["m_sql"] = "`shouhin`.`DT_UP_DATE`";
$proto98["m_srcTableName"] = "satei_of_jewelry";
$proto98["m_expr"]=$obj;
$proto98["m_alias"] = "";
$obj = new SQLFieldListItem($proto98);

$proto0["m_fieldlist"][]=$obj;
						$proto100=array();
			$obj = new SQLField(array(
	"m_strName" => "AWAZU_DATE",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_jewelry"
));

$proto100["m_sql"] = "`shouhin`.`AWAZU_DATE`";
$proto100["m_srcTableName"] = "satei_of_jewelry";
$proto100["m_expr"]=$obj;
$proto100["m_alias"] = "";
$obj = new SQLFieldListItem($proto100);

$proto0["m_fieldlist"][]=$obj;
						$proto102=array();
			$obj = new SQLField(array(
	"m_strName" => "AWAZU_NIN",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_jewelry"
));

$proto102["m_sql"] = "`shouhin`.`AWAZU_NIN`";
$proto102["m_srcTableName"] = "satei_of_jewelry";
$proto102["m_expr"]=$obj;
$proto102["m_alias"] = "";
$obj = new SQLFieldListItem($proto102);

$proto0["m_fieldlist"][]=$obj;
						$proto104=array();
			$obj = new SQLField(array(
	"m_strName" => "gold_property",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_jewelry"
));

$proto104["m_sql"] = "`shouhin`.`gold_property`";
$proto104["m_srcTableName"] = "satei_of_jewelry";
$proto104["m_expr"]=$obj;
$proto104["m_alias"] = "";
$obj = new SQLFieldListItem($proto104);

$proto0["m_fieldlist"][]=$obj;
						$proto106=array();
			$obj = new SQLField(array(
	"m_strName" => "ichiba_title",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_jewelry"
));

$proto106["m_sql"] = "`shouhin`.`ichiba_title`";
$proto106["m_srcTableName"] = "satei_of_jewelry";
$proto106["m_expr"]=$obj;
$proto106["m_alias"] = "";
$obj = new SQLFieldListItem($proto106);

$proto0["m_fieldlist"][]=$obj;
						$proto108=array();
			$obj = new SQLField(array(
	"m_strName" => "Gram",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_jewelry"
));

$proto108["m_sql"] = "`shouhin`.`Gram`";
$proto108["m_srcTableName"] = "satei_of_jewelry";
$proto108["m_expr"]=$obj;
$proto108["m_alias"] = "";
$obj = new SQLFieldListItem($proto108);

$proto0["m_fieldlist"][]=$obj;
						$proto110=array();
			$obj = new SQLField(array(
	"m_strName" => "Parent_stone",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_jewelry"
));

$proto110["m_sql"] = "`shouhin`.`Parent_stone`";
$proto110["m_srcTableName"] = "satei_of_jewelry";
$proto110["m_expr"]=$obj;
$proto110["m_alias"] = "";
$obj = new SQLFieldListItem($proto110);

$proto0["m_fieldlist"][]=$obj;
						$proto112=array();
			$obj = new SQLField(array(
	"m_strName" => "Aside_stone",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_jewelry"
));

$proto112["m_sql"] = "`shouhin`.`Aside_stone`";
$proto112["m_srcTableName"] = "satei_of_jewelry";
$proto112["m_expr"]=$obj;
$proto112["m_alias"] = "";
$obj = new SQLFieldListItem($proto112);

$proto0["m_fieldlist"][]=$obj;
						$proto114=array();
			$obj = new SQLField(array(
	"m_strName" => "Appraiser",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_jewelry"
));

$proto114["m_sql"] = "`shouhin`.`Appraiser`";
$proto114["m_srcTableName"] = "satei_of_jewelry";
$proto114["m_expr"]=$obj;
$proto114["m_alias"] = "";
$obj = new SQLFieldListItem($proto114);

$proto0["m_fieldlist"][]=$obj;
						$proto116=array();
			$obj = new SQLField(array(
	"m_strName" => "Remarks",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_jewelry"
));

$proto116["m_sql"] = "`shouhin`.`Remarks`";
$proto116["m_srcTableName"] = "satei_of_jewelry";
$proto116["m_expr"]=$obj;
$proto116["m_alias"] = "";
$obj = new SQLFieldListItem($proto116);

$proto0["m_fieldlist"][]=$obj;
						$proto118=array();
			$obj = new SQLField(array(
	"m_strName" => "Destination_selling",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_jewelry"
));

$proto118["m_sql"] = "`shouhin`.`Destination_selling`";
$proto118["m_srcTableName"] = "satei_of_jewelry";
$proto118["m_expr"]=$obj;
$proto118["m_alias"] = "";
$obj = new SQLFieldListItem($proto118);

$proto0["m_fieldlist"][]=$obj;
						$proto120=array();
			$obj = new SQLField(array(
	"m_strName" => "Finish",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_jewelry"
));

$proto120["m_sql"] = "`shouhin`.`Finish`";
$proto120["m_srcTableName"] = "satei_of_jewelry";
$proto120["m_expr"]=$obj;
$proto120["m_alias"] = "";
$obj = new SQLFieldListItem($proto120);

$proto0["m_fieldlist"][]=$obj;
						$proto122=array();
			$obj = new SQLField(array(
	"m_strName" => "Discrimination",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_jewelry"
));

$proto122["m_sql"] = "`shouhin`.`Discrimination`";
$proto122["m_srcTableName"] = "satei_of_jewelry";
$proto122["m_expr"]=$obj;
$proto122["m_alias"] = "";
$obj = new SQLFieldListItem($proto122);

$proto0["m_fieldlist"][]=$obj;
						$proto124=array();
			$obj = new SQLField(array(
	"m_strName" => "accessories",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_jewelry"
));

$proto124["m_sql"] = "`shouhin`.`accessories`";
$proto124["m_srcTableName"] = "satei_of_jewelry";
$proto124["m_expr"]=$obj;
$proto124["m_alias"] = "";
$obj = new SQLFieldListItem($proto124);

$proto0["m_fieldlist"][]=$obj;
						$proto126=array();
			$obj = new SQLField(array(
	"m_strName" => "priority",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_jewelry"
));

$proto126["m_sql"] = "`shouhin`.`priority`";
$proto126["m_srcTableName"] = "satei_of_jewelry";
$proto126["m_expr"]=$obj;
$proto126["m_alias"] = "";
$obj = new SQLFieldListItem($proto126);

$proto0["m_fieldlist"][]=$obj;
						$proto128=array();
			$obj = new SQLField(array(
	"m_strName" => "A_storage",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_jewelry"
));

$proto128["m_sql"] = "`shouhin`.`A_storage`";
$proto128["m_srcTableName"] = "satei_of_jewelry";
$proto128["m_expr"]=$obj;
$proto128["m_alias"] = "";
$obj = new SQLFieldListItem($proto128);

$proto0["m_fieldlist"][]=$obj;
						$proto130=array();
			$obj = new SQLField(array(
	"m_strName" => "price_per_gram",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_jewelry"
));

$proto130["m_sql"] = "`shouhin`.`price_per_gram`";
$proto130["m_srcTableName"] = "satei_of_jewelry";
$proto130["m_expr"]=$obj;
$proto130["m_alias"] = "";
$obj = new SQLFieldListItem($proto130);

$proto0["m_fieldlist"][]=$obj;
						$proto132=array();
			$obj = new SQLField(array(
	"m_strName" => "price_per_parent_stone",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_jewelry"
));

$proto132["m_sql"] = "`shouhin`.`price_per_parent_stone`";
$proto132["m_srcTableName"] = "satei_of_jewelry";
$proto132["m_expr"]=$obj;
$proto132["m_alias"] = "";
$obj = new SQLFieldListItem($proto132);

$proto0["m_fieldlist"][]=$obj;
						$proto134=array();
			$obj = new SQLField(array(
	"m_strName" => "price_per_aside_stone",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_jewelry"
));

$proto134["m_sql"] = "`shouhin`.`price_per_aside_stone`";
$proto134["m_srcTableName"] = "satei_of_jewelry";
$proto134["m_expr"]=$obj;
$proto134["m_alias"] = "";
$obj = new SQLFieldListItem($proto134);

$proto0["m_fieldlist"][]=$obj;
						$proto136=array();
			$obj = new SQLField(array(
	"m_strName" => "price_secret",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_jewelry"
));

$proto136["m_sql"] = "`shouhin`.`price_secret`";
$proto136["m_srcTableName"] = "satei_of_jewelry";
$proto136["m_expr"]=$obj;
$proto136["m_alias"] = "";
$obj = new SQLFieldListItem($proto136);

$proto0["m_fieldlist"][]=$obj;
						$proto138=array();
			$obj = new SQLField(array(
	"m_strName" => "sales_price_secret",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_jewelry"
));

$proto138["m_sql"] = "`shouhin`.`sales_price_secret`";
$proto138["m_srcTableName"] = "satei_of_jewelry";
$proto138["m_expr"]=$obj;
$proto138["m_alias"] = "";
$obj = new SQLFieldListItem($proto138);

$proto0["m_fieldlist"][]=$obj;
						$proto140=array();
			$obj = new SQLField(array(
	"m_strName" => "eq",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_jewelry"
));

$proto140["m_sql"] = "`shouhin`.`eq`";
$proto140["m_srcTableName"] = "satei_of_jewelry";
$proto140["m_expr"]=$obj;
$proto140["m_alias"] = "";
$obj = new SQLFieldListItem($proto140);

$proto0["m_fieldlist"][]=$obj;
						$proto142=array();
			$obj = new SQLField(array(
	"m_strName" => "en",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_jewelry"
));

$proto142["m_sql"] = "`shouhin`.`en`";
$proto142["m_srcTableName"] = "satei_of_jewelry";
$proto142["m_expr"]=$obj;
$proto142["m_alias"] = "";
$obj = new SQLFieldListItem($proto142);

$proto0["m_fieldlist"][]=$obj;
						$proto144=array();
			$obj = new SQLField(array(
	"m_strName" => "line",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_jewelry"
));

$proto144["m_sql"] = "`shouhin`.`line`";
$proto144["m_srcTableName"] = "satei_of_jewelry";
$proto144["m_expr"]=$obj;
$proto144["m_alias"] = "";
$obj = new SQLFieldListItem($proto144);

$proto0["m_fieldlist"][]=$obj;
						$proto146=array();
			$obj = new SQLField(array(
	"m_strName" => "item_name",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_jewelry"
));

$proto146["m_sql"] = "`shouhin`.`item_name`";
$proto146["m_srcTableName"] = "satei_of_jewelry";
$proto146["m_expr"]=$obj;
$proto146["m_alias"] = "";
$obj = new SQLFieldListItem($proto146);

$proto0["m_fieldlist"][]=$obj;
						$proto148=array();
			$obj = new SQLField(array(
	"m_strName" => "serial_number",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_jewelry"
));

$proto148["m_sql"] = "`shouhin`.`serial_number`";
$proto148["m_srcTableName"] = "satei_of_jewelry";
$proto148["m_expr"]=$obj;
$proto148["m_alias"] = "";
$obj = new SQLFieldListItem($proto148);

$proto0["m_fieldlist"][]=$obj;
						$proto150=array();
			$obj = new SQLField(array(
	"m_strName" => "stamp",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_jewelry"
));

$proto150["m_sql"] = "`shouhin`.`stamp`";
$proto150["m_srcTableName"] = "satei_of_jewelry";
$proto150["m_expr"]=$obj;
$proto150["m_alias"] = "";
$obj = new SQLFieldListItem($proto150);

$proto0["m_fieldlist"][]=$obj;
						$proto152=array();
			$obj = new SQLField(array(
	"m_strName" => "motif",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_jewelry"
));

$proto152["m_sql"] = "`shouhin`.`motif`";
$proto152["m_srcTableName"] = "satei_of_jewelry";
$proto152["m_expr"]=$obj;
$proto152["m_alias"] = "";
$obj = new SQLFieldListItem($proto152);

$proto0["m_fieldlist"][]=$obj;
						$proto154=array();
			$obj = new SQLField(array(
	"m_strName" => "Setting",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_jewelry"
));

$proto154["m_sql"] = "`shouhin`.`Setting`";
$proto154["m_srcTableName"] = "satei_of_jewelry";
$proto154["m_expr"]=$obj;
$proto154["m_alias"] = "";
$obj = new SQLFieldListItem($proto154);

$proto0["m_fieldlist"][]=$obj;
						$proto156=array();
			$obj = new SQLField(array(
	"m_strName" => "processing",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_jewelry"
));

$proto156["m_sql"] = "`shouhin`.`processing`";
$proto156["m_srcTableName"] = "satei_of_jewelry";
$proto156["m_expr"]=$obj;
$proto156["m_alias"] = "";
$obj = new SQLFieldListItem($proto156);

$proto0["m_fieldlist"][]=$obj;
						$proto158=array();
			$obj = new SQLField(array(
	"m_strName" => "Ring_size",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_jewelry"
));

$proto158["m_sql"] = "`shouhin`.`Ring_size`";
$proto158["m_srcTableName"] = "satei_of_jewelry";
$proto158["m_expr"]=$obj;
$proto158["m_alias"] = "";
$obj = new SQLFieldListItem($proto158);

$proto0["m_fieldlist"][]=$obj;
						$proto160=array();
			$obj = new SQLField(array(
	"m_strName" => "ecc_seq",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "satei_of_jewelry"
));

$proto160["m_sql"] = "`Eoc`.`ecc_seq`";
$proto160["m_srcTableName"] = "satei_of_jewelry";
$proto160["m_expr"]=$obj;
$proto160["m_alias"] = "";
$obj = new SQLFieldListItem($proto160);

$proto0["m_fieldlist"][]=$obj;
						$proto162=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_junle",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_jewelry"
));

$proto162["m_sql"] = "`shouhin`.`yahoo_junle`";
$proto162["m_srcTableName"] = "satei_of_jewelry";
$proto162["m_expr"]=$obj;
$proto162["m_alias"] = "";
$obj = new SQLFieldListItem($proto162);

$proto0["m_fieldlist"][]=$obj;
						$proto164=array();
			$obj = new SQLField(array(
	"m_strName" => "logo",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_jewelry"
));

$proto164["m_sql"] = "`shouhin`.`logo`";
$proto164["m_srcTableName"] = "satei_of_jewelry";
$proto164["m_expr"]=$obj;
$proto164["m_alias"] = "";
$obj = new SQLFieldListItem($proto164);

$proto0["m_fieldlist"][]=$obj;
						$proto166=array();
			$obj = new SQLField(array(
	"m_strName" => "parts",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_jewelry"
));

$proto166["m_sql"] = "`shouhin`.`parts`";
$proto166["m_srcTableName"] = "satei_of_jewelry";
$proto166["m_expr"]=$obj;
$proto166["m_alias"] = "";
$obj = new SQLFieldListItem($proto166);

$proto0["m_fieldlist"][]=$obj;
						$proto168=array();
			$obj = new SQLField(array(
	"m_strName" => "guarantee",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_jewelry"
));

$proto168["m_sql"] = "`shouhin`.`guarantee`";
$proto168["m_srcTableName"] = "satei_of_jewelry";
$proto168["m_expr"]=$obj;
$proto168["m_alias"] = "";
$obj = new SQLFieldListItem($proto168);

$proto0["m_fieldlist"][]=$obj;
						$proto170=array();
			$obj = new SQLField(array(
	"m_strName" => "errors",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_jewelry"
));

$proto170["m_sql"] = "`shouhin`.`errors`";
$proto170["m_srcTableName"] = "satei_of_jewelry";
$proto170["m_expr"]=$obj;
$proto170["m_alias"] = "";
$obj = new SQLFieldListItem($proto170);

$proto0["m_fieldlist"][]=$obj;
						$proto172=array();
			$obj = new SQLField(array(
	"m_strName" => "designer",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_jewelry"
));

$proto172["m_sql"] = "`shouhin`.`designer`";
$proto172["m_srcTableName"] = "satei_of_jewelry";
$proto172["m_expr"]=$obj;
$proto172["m_alias"] = "";
$obj = new SQLFieldListItem($proto172);

$proto0["m_fieldlist"][]=$obj;
						$proto174=array();
			$obj = new SQLField(array(
	"m_strName" => "hahakai",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_jewelry"
));

$proto174["m_sql"] = "`shouhin`.`hahakai`";
$proto174["m_srcTableName"] = "satei_of_jewelry";
$proto174["m_expr"]=$obj;
$proto174["m_alias"] = "";
$obj = new SQLFieldListItem($proto174);

$proto0["m_fieldlist"][]=$obj;
						$proto176=array();
			$obj = new SQLField(array(
	"m_strName" => "effect",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_jewelry"
));

$proto176["m_sql"] = "`shouhin`.`effect`";
$proto176["m_srcTableName"] = "satei_of_jewelry";
$proto176["m_expr"]=$obj;
$proto176["m_alias"] = "";
$obj = new SQLFieldListItem($proto176);

$proto0["m_fieldlist"][]=$obj;
						$proto178=array();
			$obj = new SQLField(array(
	"m_strName" => "shape",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_jewelry"
));

$proto178["m_sql"] = "`shouhin`.`shape`";
$proto178["m_srcTableName"] = "satei_of_jewelry";
$proto178["m_expr"]=$obj;
$proto178["m_alias"] = "";
$obj = new SQLFieldListItem($proto178);

$proto0["m_fieldlist"][]=$obj;
						$proto180=array();
			$obj = new SQLField(array(
	"m_strName" => "cutting_style",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_jewelry"
));

$proto180["m_sql"] = "`shouhin`.`cutting_style`";
$proto180["m_srcTableName"] = "satei_of_jewelry";
$proto180["m_expr"]=$obj;
$proto180["m_alias"] = "";
$obj = new SQLFieldListItem($proto180);

$proto0["m_fieldlist"][]=$obj;
						$proto182=array();
			$obj = new SQLField(array(
	"m_strName" => "chain_type",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_jewelry"
));

$proto182["m_sql"] = "`shouhin`.`chain_type`";
$proto182["m_srcTableName"] = "satei_of_jewelry";
$proto182["m_expr"]=$obj;
$proto182["m_alias"] = "";
$obj = new SQLFieldListItem($proto182);

$proto0["m_fieldlist"][]=$obj;
						$proto184=array();
			$obj = new SQLField(array(
	"m_strName" => "number_of_stones",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_jewelry"
));

$proto184["m_sql"] = "`shouhin`.`number_of_stones`";
$proto184["m_srcTableName"] = "satei_of_jewelry";
$proto184["m_expr"]=$obj;
$proto184["m_alias"] = "";
$obj = new SQLFieldListItem($proto184);

$proto0["m_fieldlist"][]=$obj;
						$proto186=array();
			$obj = new SQLField(array(
	"m_strName" => "satei_error",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_jewelry"
));

$proto186["m_sql"] = "`shouhin`.`satei_error`";
$proto186["m_srcTableName"] = "satei_of_jewelry";
$proto186["m_expr"]=$obj;
$proto186["m_alias"] = "";
$obj = new SQLFieldListItem($proto186);

$proto0["m_fieldlist"][]=$obj;
						$proto188=array();
			$obj = new SQLField(array(
	"m_strName" => "producing_area",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_jewelry"
));

$proto188["m_sql"] = "`shouhin`.`producing_area`";
$proto188["m_srcTableName"] = "satei_of_jewelry";
$proto188["m_expr"]=$obj;
$proto188["m_alias"] = "";
$obj = new SQLFieldListItem($proto188);

$proto0["m_fieldlist"][]=$obj;
						$proto190=array();
			$obj = new SQLField(array(
	"m_strName" => "shape_supplement",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_jewelry"
));

$proto190["m_sql"] = "`shouhin`.`shape_supplement`";
$proto190["m_srcTableName"] = "satei_of_jewelry";
$proto190["m_expr"]=$obj;
$proto190["m_alias"] = "";
$obj = new SQLFieldListItem($proto190);

$proto0["m_fieldlist"][]=$obj;
						$proto192=array();
			$obj = new SQLField(array(
	"m_strName" => "side_gem",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_jewelry"
));

$proto192["m_sql"] = "`shouhin`.`side_gem`";
$proto192["m_srcTableName"] = "satei_of_jewelry";
$proto192["m_expr"]=$obj;
$proto192["m_alias"] = "";
$obj = new SQLFieldListItem($proto192);

$proto0["m_fieldlist"][]=$obj;
						$proto194=array();
			$obj = new SQLField(array(
	"m_strName" => "product_style",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_jewelry"
));

$proto194["m_sql"] = "`shouhin`.`product_style`";
$proto194["m_srcTableName"] = "satei_of_jewelry";
$proto194["m_expr"]=$obj;
$proto194["m_alias"] = "";
$obj = new SQLFieldListItem($proto194);

$proto0["m_fieldlist"][]=$obj;
						$proto196=array();
			$obj = new SQLField(array(
	"m_strName" => "unit",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_jewelry"
));

$proto196["m_sql"] = "`shouhin`.`unit`";
$proto196["m_srcTableName"] = "satei_of_jewelry";
$proto196["m_expr"]=$obj;
$proto196["m_alias"] = "";
$obj = new SQLFieldListItem($proto196);

$proto0["m_fieldlist"][]=$obj;
						$proto198=array();
			$obj = new SQLField(array(
	"m_strName" => "hall_mark",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_jewelry"
));

$proto198["m_sql"] = "`shouhin`.`hall_mark`";
$proto198["m_srcTableName"] = "satei_of_jewelry";
$proto198["m_expr"]=$obj;
$proto198["m_alias"] = "";
$obj = new SQLFieldListItem($proto198);

$proto0["m_fieldlist"][]=$obj;
						$proto200=array();
			$obj = new SQLField(array(
	"m_strName" => "plate",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_jewelry"
));

$proto200["m_sql"] = "`shouhin`.`plate`";
$proto200["m_srcTableName"] = "satei_of_jewelry";
$proto200["m_expr"]=$obj;
$proto200["m_alias"] = "";
$obj = new SQLFieldListItem($proto200);

$proto0["m_fieldlist"][]=$obj;
						$proto202=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_jewelry"
));

$proto202["m_sql"] = "`shouhin`.`updated_by`";
$proto202["m_srcTableName"] = "satei_of_jewelry";
$proto202["m_expr"]=$obj;
$proto202["m_alias"] = "";
$obj = new SQLFieldListItem($proto202);

$proto0["m_fieldlist"][]=$obj;
						$proto204=array();
			$obj = new SQLField(array(
	"m_strName" => "country_of_origin",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_jewelry"
));

$proto204["m_sql"] = "`shouhin`.`country_of_origin`";
$proto204["m_srcTableName"] = "satei_of_jewelry";
$proto204["m_expr"]=$obj;
$proto204["m_alias"] = "";
$obj = new SQLFieldListItem($proto204);

$proto0["m_fieldlist"][]=$obj;
						$proto206=array();
			$obj = new SQLField(array(
	"m_strName" => "parallel_import_flag",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_jewelry"
));

$proto206["m_sql"] = "`shouhin`.`parallel_import_flag`";
$proto206["m_srcTableName"] = "satei_of_jewelry";
$proto206["m_expr"]=$obj;
$proto206["m_alias"] = "";
$obj = new SQLFieldListItem($proto206);

$proto0["m_fieldlist"][]=$obj;
						$proto208=array();
			$obj = new SQLField(array(
	"m_strName" => "meisai_number",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_jewelry"
));

$proto208["m_sql"] = "`shouhin`.`meisai_number`";
$proto208["m_srcTableName"] = "satei_of_jewelry";
$proto208["m_expr"]=$obj;
$proto208["m_alias"] = "";
$obj = new SQLFieldListItem($proto208);

$proto0["m_fieldlist"][]=$obj;
						$proto210=array();
			$obj = new SQLField(array(
	"m_strName" => "tentou_label_output_flag",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_jewelry"
));

$proto210["m_sql"] = "`shouhin`.`tentou_label_output_flag`";
$proto210["m_srcTableName"] = "satei_of_jewelry";
$proto210["m_expr"]=$obj;
$proto210["m_alias"] = "";
$obj = new SQLFieldListItem($proto210);

$proto0["m_fieldlist"][]=$obj;
						$proto212=array();
			$obj = new SQLField(array(
	"m_strName" => "itaku_flag",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_jewelry"
));

$proto212["m_sql"] = "`shouhin`.`itaku_flag`";
$proto212["m_srcTableName"] = "satei_of_jewelry";
$proto212["m_expr"]=$obj;
$proto212["m_alias"] = "";
$obj = new SQLFieldListItem($proto212);

$proto0["m_fieldlist"][]=$obj;
						$proto214=array();
			$obj = new SQLField(array(
	"m_strName" => "novelty",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_jewelry"
));

$proto214["m_sql"] = "`shouhin`.`novelty`";
$proto214["m_srcTableName"] = "satei_of_jewelry";
$proto214["m_expr"]=$obj;
$proto214["m_alias"] = "";
$obj = new SQLFieldListItem($proto214);

$proto0["m_fieldlist"][]=$obj;
						$proto216=array();
			$obj = new SQLField(array(
	"m_strName" => "initial_included",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_jewelry"
));

$proto216["m_sql"] = "`shouhin`.`initial_included`";
$proto216["m_srcTableName"] = "satei_of_jewelry";
$proto216["m_expr"]=$obj;
$proto216["m_alias"] = "";
$obj = new SQLFieldListItem($proto216);

$proto0["m_fieldlist"][]=$obj;
						$proto218=array();
			$obj = new SQLField(array(
	"m_strName" => "auto_price_cut_prohibited",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_jewelry"
));

$proto218["m_sql"] = "`shouhin`.`auto_price_cut_prohibited`";
$proto218["m_srcTableName"] = "satei_of_jewelry";
$proto218["m_expr"]=$obj;
$proto218["m_alias"] = "";
$obj = new SQLFieldListItem($proto218);

$proto0["m_fieldlist"][]=$obj;
						$proto220=array();
			$obj = new SQLField(array(
	"m_strName" => "Eoc_trader_id_for_buy",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_jewelry"
));

$proto220["m_sql"] = "`shouhin`.`Eoc_trader_id_for_buy`";
$proto220["m_srcTableName"] = "satei_of_jewelry";
$proto220["m_expr"]=$obj;
$proto220["m_alias"] = "";
$obj = new SQLFieldListItem($proto220);

$proto0["m_fieldlist"][]=$obj;
						$proto222=array();
			$obj = new SQLField(array(
	"m_strName" => "other_cost",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_jewelry"
));

$proto222["m_sql"] = "`shouhin`.`other_cost`";
$proto222["m_srcTableName"] = "satei_of_jewelry";
$proto222["m_expr"]=$obj;
$proto222["m_alias"] = "";
$obj = new SQLFieldListItem($proto222);

$proto0["m_fieldlist"][]=$obj;
						$proto224=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_condition1",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_jewelry"
));

$proto224["m_sql"] = "`shouhin`.`yahoo_condition1`";
$proto224["m_srcTableName"] = "satei_of_jewelry";
$proto224["m_expr"]=$obj;
$proto224["m_alias"] = "";
$obj = new SQLFieldListItem($proto224);

$proto0["m_fieldlist"][]=$obj;
						$proto226=array();
			$obj = new SQLField(array(
	"m_strName" => "remark",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_jewelry"
));

$proto226["m_sql"] = "`shouhin`.`remark`";
$proto226["m_srcTableName"] = "satei_of_jewelry";
$proto226["m_expr"]=$obj;
$proto226["m_alias"] = "";
$obj = new SQLFieldListItem($proto226);

$proto0["m_fieldlist"][]=$obj;
						$proto228=array();
			$obj = new SQLField(array(
	"m_strName" => "DA_SELFGRES",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_jewelry"
));

$proto228["m_sql"] = "`shouhin`.`DA_SELFGRES`";
$proto228["m_srcTableName"] = "satei_of_jewelry";
$proto228["m_expr"]=$obj;
$proto228["m_alias"] = "";
$obj = new SQLFieldListItem($proto228);

$proto0["m_fieldlist"][]=$obj;
						$proto230=array();
			$obj = new SQLField(array(
	"m_strName" => "DA_INTENSITY",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_jewelry"
));

$proto230["m_sql"] = "`shouhin`.`DA_INTENSITY`";
$proto230["m_srcTableName"] = "satei_of_jewelry";
$proto230["m_expr"]=$obj;
$proto230["m_alias"] = "";
$obj = new SQLFieldListItem($proto230);

$proto0["m_fieldlist"][]=$obj;
						$proto232=array();
			$obj = new SQLField(array(
	"m_strName" => "DA_OVERTONE",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_jewelry"
));

$proto232["m_sql"] = "`shouhin`.`DA_OVERTONE`";
$proto232["m_srcTableName"] = "satei_of_jewelry";
$proto232["m_expr"]=$obj;
$proto232["m_alias"] = "";
$obj = new SQLFieldListItem($proto232);

$proto0["m_fieldlist"][]=$obj;
						$proto234=array();
			$obj = new SQLField(array(
	"m_strName" => "DA_COLOR",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_jewelry"
));

$proto234["m_sql"] = "`shouhin`.`DA_COLOR`";
$proto234["m_srcTableName"] = "satei_of_jewelry";
$proto234["m_expr"]=$obj;
$proto234["m_alias"] = "";
$obj = new SQLFieldListItem($proto234);

$proto0["m_fieldlist"][]=$obj;
						$proto236=array();
			$obj = new SQLField(array(
	"m_strName" => "DA_CLARITY",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_jewelry"
));

$proto236["m_sql"] = "`shouhin`.`DA_CLARITY`";
$proto236["m_srcTableName"] = "satei_of_jewelry";
$proto236["m_expr"]=$obj;
$proto236["m_alias"] = "";
$obj = new SQLFieldListItem($proto236);

$proto0["m_fieldlist"][]=$obj;
						$proto238=array();
			$obj = new SQLField(array(
	"m_strName" => "DA_CUT",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_jewelry"
));

$proto238["m_sql"] = "`shouhin`.`DA_CUT`";
$proto238["m_srcTableName"] = "satei_of_jewelry";
$proto238["m_expr"]=$obj;
$proto238["m_alias"] = "";
$obj = new SQLFieldListItem($proto238);

$proto0["m_fieldlist"][]=$obj;
						$proto240=array();
			$obj = new SQLField(array(
	"m_strName" => "DA_POLISH",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_jewelry"
));

$proto240["m_sql"] = "`shouhin`.`DA_POLISH`";
$proto240["m_srcTableName"] = "satei_of_jewelry";
$proto240["m_expr"]=$obj;
$proto240["m_alias"] = "";
$obj = new SQLFieldListItem($proto240);

$proto0["m_fieldlist"][]=$obj;
						$proto242=array();
			$obj = new SQLField(array(
	"m_strName" => "DA_SYMMETRY",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_jewelry"
));

$proto242["m_sql"] = "`shouhin`.`DA_SYMMETRY`";
$proto242["m_srcTableName"] = "satei_of_jewelry";
$proto242["m_expr"]=$obj;
$proto242["m_alias"] = "";
$obj = new SQLFieldListItem($proto242);

$proto0["m_fieldlist"][]=$obj;
						$proto244=array();
			$obj = new SQLField(array(
	"m_strName" => "DA_FLUO",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_jewelry"
));

$proto244["m_sql"] = "`shouhin`.`DA_FLUO`";
$proto244["m_srcTableName"] = "satei_of_jewelry";
$proto244["m_expr"]=$obj;
$proto244["m_alias"] = "";
$obj = new SQLFieldListItem($proto244);

$proto0["m_fieldlist"][]=$obj;
						$proto246=array();
			$obj = new SQLField(array(
	"m_strName" => "DA_COLOR_FLUO",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_jewelry"
));

$proto246["m_sql"] = "`shouhin`.`DA_COLOR_FLUO`";
$proto246["m_srcTableName"] = "satei_of_jewelry";
$proto246["m_expr"]=$obj;
$proto246["m_alias"] = "";
$obj = new SQLFieldListItem($proto246);

$proto0["m_fieldlist"][]=$obj;
						$proto248=array();
			$obj = new SQLField(array(
	"m_strName" => "DA_WIDE",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_jewelry"
));

$proto248["m_sql"] = "`shouhin`.`DA_WIDE`";
$proto248["m_srcTableName"] = "satei_of_jewelry";
$proto248["m_expr"]=$obj;
$proto248["m_alias"] = "";
$obj = new SQLFieldListItem($proto248);

$proto0["m_fieldlist"][]=$obj;
						$proto250=array();
			$obj = new SQLField(array(
	"m_strName" => "DA_HIGH",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_jewelry"
));

$proto250["m_sql"] = "`shouhin`.`DA_HIGH`";
$proto250["m_srcTableName"] = "satei_of_jewelry";
$proto250["m_expr"]=$obj;
$proto250["m_alias"] = "";
$obj = new SQLFieldListItem($proto250);

$proto0["m_fieldlist"][]=$obj;
						$proto252=array();
			$obj = new SQLField(array(
	"m_strName" => "DA_DEPTH",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_jewelry"
));

$proto252["m_sql"] = "`shouhin`.`DA_DEPTH`";
$proto252["m_srcTableName"] = "satei_of_jewelry";
$proto252["m_expr"]=$obj;
$proto252["m_alias"] = "";
$obj = new SQLFieldListItem($proto252);

$proto0["m_fieldlist"][]=$obj;
						$proto254=array();
			$obj = new SQLField(array(
	"m_strName" => "DA_FRAPA",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_jewelry"
));

$proto254["m_sql"] = "`shouhin`.`DA_FRAPA`";
$proto254["m_srcTableName"] = "satei_of_jewelry";
$proto254["m_expr"]=$obj;
$proto254["m_alias"] = "";
$obj = new SQLFieldListItem($proto254);

$proto0["m_fieldlist"][]=$obj;
						$proto256=array();
			$obj = new SQLField(array(
	"m_strName" => "DA_RATE",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_jewelry"
));

$proto256["m_sql"] = "`shouhin`.`DA_RATE`";
$proto256["m_srcTableName"] = "satei_of_jewelry";
$proto256["m_expr"]=$obj;
$proto256["m_alias"] = "";
$obj = new SQLFieldListItem($proto256);

$proto0["m_fieldlist"][]=$obj;
						$proto258=array();
			$obj = new SQLField(array(
	"m_strName" => "multiplication_rate",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_jewelry"
));

$proto258["m_sql"] = "`shouhin`.`multiplication_rate`";
$proto258["m_srcTableName"] = "satei_of_jewelry";
$proto258["m_expr"]=$obj;
$proto258["m_alias"] = "";
$obj = new SQLFieldListItem($proto258);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto260=array();
$proto260["m_link"] = "SQLL_MAIN";
			$proto261=array();
$proto261["m_strName"] = "shouhin";
$proto261["m_srcTableName"] = "satei_of_jewelry";
$proto261["m_columns"] = array();
$proto261["m_columns"][] = "product_id";
$proto261["m_columns"][] = "category_id";
$proto261["m_columns"][] = "goods_title";
$proto261["m_columns"][] = "title";
$proto261["m_columns"][] = "sub_category_id1";
$proto261["m_columns"][] = "ecc_id";
$proto261["m_columns"][] = "price";
$proto261["m_columns"][] = "yahoo";
$proto261["m_columns"][] = "remark";
$proto261["m_columns"][] = "sales_price";
$proto261["m_columns"][] = "description";
$proto261["m_columns"][] = "status";
$proto261["m_columns"][] = "product_num";
$proto261["m_columns"][] = "updated_at";
$proto261["m_columns"][] = "yahoo_size";
$proto261["m_columns"][] = "yahoo_title";
$proto261["m_columns"][] = "yahoo_junle";
$proto261["m_columns"][] = "yahoo_sankou_uwadai";
$proto261["m_columns"][] = "yahoo_sozai";
$proto261["m_columns"][] = "yahoo_color";
$proto261["m_columns"][] = "yahoo_kataban";
$proto261["m_columns"][] = "yahoo_condition1";
$proto261["m_columns"][] = "yahoo_condition2";
$proto261["m_columns"][] = "yahoo_fuzokuhin";
$proto261["m_columns"][] = "yahoo_sinaban";
$proto261["m_columns"][] = "yahoo_saisun_sha";
$proto261["m_columns"][] = "yahoo_sex";
$proto261["m_columns"][] = "box_id";
$proto261["m_columns"][] = "nyuukin_price";
$proto261["m_columns"][] = "updated_by";
$proto261["m_columns"][] = "raku_title";
$proto261["m_columns"][] = "raku_hyoujisaki_category2";
$proto261["m_columns"][] = "raku_hyoujisaki_category";
$proto261["m_columns"][] = "raku_hyoujisaki_category3";
$proto261["m_columns"][] = "timesta";
$proto261["m_columns"][] = "saisun_start";
$proto261["m_columns"][] = "saisun_end";
$proto261["m_columns"][] = "label_output_flag";
$proto261["m_columns"][] = "season";
$proto261["m_columns"][] = "kanryou_henbi";
$proto261["m_columns"][] = "box_sort";
$proto261["m_columns"][] = "satei_by";
$proto261["m_columns"][] = "kaitori_by";
$proto261["m_columns"][] = "comment";
$proto261["m_columns"][] = "satei_hi";
$proto261["m_columns"][] = "kaitory_hi";
$proto261["m_columns"][] = "REG_PHOTOGRAPHER";
$proto261["m_columns"][] = "REG_AUTHOR";
$proto261["m_columns"][] = "REG_PACKINGS";
$proto261["m_columns"][] = "REG_KAKOU_DATE";
$proto261["m_columns"][] = "REG_KAKOU";
$proto261["m_columns"][] = "REG_EXHIBITOR";
$proto261["m_columns"][] = "REG_PHOTOGRAPHER_DATE";
$proto261["m_columns"][] = "DT_PACKING_DATE";
$proto261["m_columns"][] = "DT_UP_DATE";
$proto261["m_columns"][] = "AWAZU_DATE";
$proto261["m_columns"][] = "AWAZU_NIN";
$proto261["m_columns"][] = "sabun_date";
$proto261["m_columns"][] = "browseid";
$proto261["m_columns"][] = "browsenode";
$proto261["m_columns"][] = "gold_property";
$proto261["m_columns"][] = "ichiba_title";
$proto261["m_columns"][] = "Gram";
$proto261["m_columns"][] = "Parent_stone";
$proto261["m_columns"][] = "Aside_stone";
$proto261["m_columns"][] = "Appraiser";
$proto261["m_columns"][] = "Remarks";
$proto261["m_columns"][] = "Destination_selling";
$proto261["m_columns"][] = "Finish";
$proto261["m_columns"][] = "Discrimination";
$proto261["m_columns"][] = "accessories";
$proto261["m_columns"][] = "priority";
$proto261["m_columns"][] = "A_storage";
$proto261["m_columns"][] = "price_per_gram";
$proto261["m_columns"][] = "price_per_parent_stone";
$proto261["m_columns"][] = "price_per_aside_stone";
$proto261["m_columns"][] = "price_secret";
$proto261["m_columns"][] = "sales_price_secret";
$proto261["m_columns"][] = "eq";
$proto261["m_columns"][] = "en";
$proto261["m_columns"][] = "line";
$proto261["m_columns"][] = "item_name";
$proto261["m_columns"][] = "handle";
$proto261["m_columns"][] = "yahoo_color_id";
$proto261["m_columns"][] = "raku_hyoujisaki_category4";
$proto261["m_columns"][] = "raku_hyoujisaki_category5";
$proto261["m_columns"][] = "raku_dir_1";
$proto261["m_columns"][] = "raku_dir_2";
$proto261["m_columns"][] = "raku_dir_3";
$proto261["m_columns"][] = "raku_dir_4";
$proto261["m_columns"][] = "raku_dir_5";
$proto261["m_columns"][] = "raku_dir_result";
$proto261["m_columns"][] = "raku_tag_result";
$proto261["m_columns"][] = "serial_number";
$proto261["m_columns"][] = "Exhibition_Date";
$proto261["m_columns"][] = "search_keyword";
$proto261["m_columns"][] = "stamp";
$proto261["m_columns"][] = "motif";
$proto261["m_columns"][] = "Setting";
$proto261["m_columns"][] = "processing";
$proto261["m_columns"][] = "Sleeve_Length";
$proto261["m_columns"][] = "length";
$proto261["m_columns"][] = "Ring_size";
$proto261["m_columns"][] = "price_for_site";
$proto261["m_columns"][] = "yahoo_category_id";
$proto261["m_columns"][] = "Qty";
$proto261["m_columns"][] = "sales_period";
$proto261["m_columns"][] = "starting_price";
$proto261["m_columns"][] = "FLAG_NO_ARRIVAL";
$proto261["m_columns"][] = "amount_of_image";
$proto261["m_columns"][] = "csv";
$proto261["m_columns"][] = "return_output_flag";
$proto261["m_columns"][] = "wasabi_flag";
$proto261["m_columns"][] = "ws_import_date";
$proto261["m_columns"][] = "logo";
$proto261["m_columns"][] = "parts";
$proto261["m_columns"][] = "country_of_origin";
$proto261["m_columns"][] = "zipper";
$proto261["m_columns"][] = "guarantee";
$proto261["m_columns"][] = "errors";
$proto261["m_columns"][] = "designer";
$proto261["m_columns"][] = "hahakai";
$proto261["m_columns"][] = "effect";
$proto261["m_columns"][] = "shape";
$proto261["m_columns"][] = "cutting_style";
$proto261["m_columns"][] = "chain_type";
$proto261["m_columns"][] = "number_of_stones";
$proto261["m_columns"][] = "amount";
$proto261["m_columns"][] = "satei_error";
$proto261["m_columns"][] = "producing_area";
$proto261["m_columns"][] = "shape_supplement";
$proto261["m_columns"][] = "side_gem";
$proto261["m_columns"][] = "product_style";
$proto261["m_columns"][] = "collar_neck_line";
$proto261["m_columns"][] = "breast";
$proto261["m_columns"][] = "silhouette";
$proto261["m_columns"][] = "sleeve";
$proto261["m_columns"][] = "unit";
$proto261["m_columns"][] = "hall_mark";
$proto261["m_columns"][] = "plate";
$proto261["m_columns"][] = "toe";
$proto261["m_columns"][] = "heel";
$proto261["m_columns"][] = "cloth";
$proto261["m_columns"][] = "serial_number_for_storage";
$proto261["m_columns"][] = "official_url";
$proto261["m_columns"][] = "main_details";
$proto261["m_columns"][] = "notation_size";
$proto261["m_columns"][] = "shoe_size_jp";
$proto261["m_columns"][] = "Eoc_chigins2_id";
$proto261["m_columns"][] = "country_of_origin_name";
$proto261["m_columns"][] = "mailingkit_id";
$proto261["m_columns"][] = "DA_COMMENTSANDTOTAL";
$proto261["m_columns"][] = "DA_WEIGHT";
$proto261["m_columns"][] = "DA_PER_CARAT";
$proto261["m_columns"][] = "DA_SHAPE";
$proto261["m_columns"][] = "DA_SELFGRES";
$proto261["m_columns"][] = "DA_ORIGINALGRADEMLIKENED";
$proto261["m_columns"][] = "DA_SUGARCANE";
$proto261["m_columns"][] = "DA_RAPA";
$proto261["m_columns"][] = "DA_INTENSITY";
$proto261["m_columns"][] = "DA_OVERTONE";
$proto261["m_columns"][] = "DA_COLOR";
$proto261["m_columns"][] = "DA_CLARITY";
$proto261["m_columns"][] = "DA_CUT";
$proto261["m_columns"][] = "DA_POLISH";
$proto261["m_columns"][] = "DA_SYMMETRY";
$proto261["m_columns"][] = "DA_FLUO";
$proto261["m_columns"][] = "DA_COLOR_FLUO";
$proto261["m_columns"][] = "DA_WIDE";
$proto261["m_columns"][] = "DA_HIGH";
$proto261["m_columns"][] = "DA_DEPTH";
$proto261["m_columns"][] = "DA_APPRAISER";
$proto261["m_columns"][] = "DA_FRAPA";
$proto261["m_columns"][] = "DA_RATE";
$proto261["m_columns"][] = "DA_UNIT_PRICE_UNPLUG";
$proto261["m_columns"][] = "DA_YOURNAME";
$proto261["m_columns"][] = "DA_RAPAB";
$proto261["m_columns"][] = "DA_GROSSPROFIT";
$proto261["m_columns"][] = "DA_INTEREST_1";
$proto261["m_columns"][] = "DA_no";
$proto261["m_columns"][] = "kinsa_flag";
$proto261["m_columns"][] = "price_for_site_flag";
$proto261["m_columns"][] = "Eoc_takuhai_id";
$proto261["m_columns"][] = "Eoc_unfinished_id";
$proto261["m_columns"][] = "Eoc_chigins_unfinished_id";
$proto261["m_columns"][] = "chohyo_id";
$proto261["m_columns"][] = "location";
$proto261["m_columns"][] = "special_instructions_1";
$proto261["m_columns"][] = "special_instructions_2";
$proto261["m_columns"][] = "special_instructions_3";
$proto261["m_columns"][] = "chohyo_seihin_flag";
$proto261["m_columns"][] = "chohyo_dia_flag";
$proto261["m_columns"][] = "chohyo_type";
$proto261["m_columns"][] = "ichiyen_flag";
$proto261["m_columns"][] = "asuraku_fuka_flag";
$proto261["m_columns"][] = "parallel_import_flag";
$proto261["m_columns"][] = "meisai_number";
$proto261["m_columns"][] = "days_keep_price";
$proto261["m_columns"][] = "initial_included";
$proto261["m_columns"][] = "novelty";
$proto261["m_columns"][] = "tentou_label_output_flag";
$proto261["m_columns"][] = "itaku_flag";
$proto261["m_columns"][] = "including_catch";
$proto261["m_columns"][] = "ichiba_meeting_month";
$proto261["m_columns"][] = "ichiba_meeting_name";
$proto261["m_columns"][] = "ichiba_color";
$proto261["m_columns"][] = "ichiba_clarity";
$proto261["m_columns"][] = "ichiba_melee_gai";
$proto261["m_columns"][] = "ichiba_lot_pieces";
$proto261["m_columns"][] = "ichiba_image";
$proto261["m_columns"][] = "ichiba_img";
$proto261["m_columns"][] = "gold_check_id";
$proto261["m_columns"][] = "ichiba_exhibition_id";
$proto261["m_columns"][] = "ichiba_exhibition_sort";
$proto261["m_columns"][] = "cost";
$proto261["m_columns"][] = "auto_price_cut_prohibited";
$proto261["m_columns"][] = "event_price";
$proto261["m_columns"][] = "identification_cost";
$proto261["m_columns"][] = "other_cost";
$proto261["m_columns"][] = "stock_quantity";
$proto261["m_columns"][] = "Eoc_trader_id_for_buy";
$proto261["m_columns"][] = "Eoc_trader_id_for_sell";
$proto261["m_columns"][] = "multiplication_rate";
$proto261["m_columns"][] = "many_product_group_id";
$proto261["m_columns"][] = "trading_sort_id";
$proto261["m_columns"][] = "many_product_group_saiban";
$proto261["m_columns"][] = "purchase_category";
$proto261["m_columns"][] = "created_at";
$proto261["m_columns"][] = "created_by";
$proto261["m_columns"][] = "manual_input_price_per_gram";
$proto261["m_columns"][] = "satei_start";
$proto261["m_columns"][] = "self_DA_INTENSITY";
$proto261["m_columns"][] = "self_DA_OVERTONE";
$proto261["m_columns"][] = "self_DA_COLOR";
$proto261["m_columns"][] = "self_DA_CLARITY";
$proto261["m_columns"][] = "self_DA_CUT";
$proto261["m_columns"][] = "self_DA_POLISH";
$proto261["m_columns"][] = "self_DA_SYMMETRY";
$proto261["m_columns"][] = "self_DA_FLUO";
$proto261["m_columns"][] = "self_DA_COLOR_FLUO";
$proto261["m_columns"][] = "self_DA_FRAPA";
$proto261["m_columns"][] = "self_DA_RATE";
$proto261["m_columns"][] = "self_multiplication_rate";
$proto261["m_columns"][] = "is_seiyaku";
$proto261["m_columns"][] = "destination_sold_out";
$proto261["m_columns"][] = "mypage_update_prohibited";
$proto261["m_columns"][] = "gold_check_scan_id";
$proto261["m_columns"][] = "buy_campaign_data_id";
$proto261["m_columns"][] = "REG_PHOTOGRAPHER_DATE_start";
$proto261["m_columns"][] = "commission";
$proto261["m_columns"][] = "addtime_gold_check_id";
$proto261["m_columns"][] = "is_recovery";
$proto261["m_columns"][] = "sales_cost";
$proto261["m_columns"][] = "mst_business_partner_id";
$proto261["m_columns"][] = "DA_GROSSPROFIT_2";
$proto261["m_columns"][] = "DA_INTEREST_2";
$proto261["m_columns"][] = "minus_weight";
$proto261["m_columns"][] = "diameter_size";
$proto261["m_columns"][] = "metal_rate_date";
$obj = new SQLTable($proto261);

$proto260["m_table"] = $obj;
$proto260["m_sql"] = "`shouhin`";
$proto260["m_alias"] = "";
$proto260["m_srcTableName"] = "satei_of_jewelry";
$proto262=array();
$proto262["m_sql"] = "";
$proto262["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto262["m_column"]=$obj;
$proto262["m_contained"] = array();
$proto262["m_strCase"] = "";
$proto262["m_havingmode"] = false;
$proto262["m_inBrackets"] = false;
$proto262["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto262);

$proto260["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto260);

$proto0["m_fromlist"][]=$obj;
												$proto264=array();
$proto264["m_link"] = "SQLL_LEFTJOIN";
			$proto265=array();
$proto265["m_strName"] = "Eoc";
$proto265["m_srcTableName"] = "satei_of_jewelry";
$proto265["m_columns"] = array();
$proto265["m_columns"][] = "ecc_id";
$proto265["m_columns"][] = "ecc_seq";
$proto265["m_columns"][] = "name1";
$proto265["m_columns"][] = "created_t";
$proto265["m_columns"][] = "registerd_id";
$proto265["m_columns"][] = "kaitori_staff_id";
$proto265["m_columns"][] = "name2";
$proto265["m_columns"][] = "wareki";
$proto265["m_columns"][] = "b1";
$proto265["m_columns"][] = "b2";
$proto265["m_columns"][] = "b3";
$proto265["m_columns"][] = "birth_day";
$proto265["m_columns"][] = "age";
$proto265["m_columns"][] = "zip";
$proto265["m_columns"][] = "zip1";
$proto265["m_columns"][] = "zip2";
$proto265["m_columns"][] = "address1";
$proto265["m_columns"][] = "address2";
$proto265["m_columns"][] = "address3";
$proto265["m_columns"][] = "tel";
$proto265["m_columns"][] = "tel2";
$proto265["m_columns"][] = "mail1";
$proto265["m_columns"][] = "mail2";
$proto265["m_columns"][] = "address_code";
$proto265["m_columns"][] = "bank_name";
$proto265["m_columns"][] = "bank_blunch_code";
$proto265["m_columns"][] = "bank_yokin_shubetu";
$proto265["m_columns"][] = "bank_account";
$proto265["m_columns"][] = "bank_acoount_name";
$proto265["m_columns"][] = "haisou_bangou";
$proto265["m_columns"][] = "sise_houhou";
$proto265["m_columns"][] = "hentou_houhou";
$proto265["m_columns"][] = "hentou_houhou_time";
$proto265["m_columns"][] = "mousikomi_id";
$proto265["m_columns"][] = "hituyou_shorui";
$proto265["m_columns"][] = "seiyaku_fuseiritu";
$proto265["m_columns"][] = "mitumori_taku";
$proto265["m_columns"][] = "seacanse";
$proto265["m_columns"][] = "remark";
$proto265["m_columns"][] = "type";
$proto265["m_columns"][] = "sales_flag";
$proto265["m_columns"][] = "src_type";
$proto265["m_columns"][] = "liquidation_shop_code";
$proto265["m_columns"][] = "insurance_amount_print";
$proto265["m_columns"][] = "jis_code";
$proto265["m_columns"][] = "updated_at";
$proto265["m_columns"][] = "_registerd_id";
$proto265["m_columns"][] = "mail_check_type";
$proto265["m_columns"][] = "purchase_type";
$proto265["m_columns"][] = "sex";
$proto265["m_columns"][] = "m_tel";
$proto265["m_columns"][] = "fax";
$proto265["m_columns"][] = "chigin_kaitori";
$proto265["m_columns"][] = "option1";
$proto265["m_columns"][] = "option2";
$proto265["m_columns"][] = "option3";
$proto265["m_columns"][] = "option4";
$proto265["m_columns"][] = "option5";
$proto265["m_columns"][] = "option6";
$proto265["m_columns"][] = "option7";
$proto265["m_columns"][] = "option8";
$proto265["m_columns"][] = "option9";
$proto265["m_columns"][] = "option10";
$proto265["m_columns"][] = "option11";
$proto265["m_columns"][] = "option12";
$proto265["m_columns"][] = "option13";
$proto265["m_columns"][] = "rakuda_csv_flag";
$proto265["m_columns"][] = "EOC_COURIER_CHECK";
$proto265["m_columns"][] = "EOC_SIZE";
$proto265["m_columns"][] = "EOC_NUMBER";
$proto265["m_columns"][] = "EOC_REUSE";
$proto265["m_columns"][] = "EOC__DELIVERY_DATES";
$proto265["m_columns"][] = "EOC_SPECIFIED_TIME";
$proto265["m_columns"][] = "FIRST_NAME2";
$proto265["m_columns"][] = "LAST_NAME2";
$proto265["m_columns"][] = "EOC__DATE_AND_TIME_2";
$proto265["m_columns"][] = "EOC__BOX_NUMBER";
$proto265["m_columns"][] = "FIRST_NAME_KANA";
$proto265["m_columns"][] = "LAST_NAME_KANA";
$proto265["m_columns"][] = "FLAG_SPEED";
$proto265["m_columns"][] = "SEARCH_MEDIA";
$proto265["m_columns"][] = "SEARCH_SITE";
$proto265["m_columns"][] = "UN_REACHABLE";
$proto265["m_columns"][] = "FLG_MAIL_SAGAWA";
$proto265["m_columns"][] = "FLG_MAIL_OTHER";
$proto265["m_columns"][] = "ALLSEIYAKU";
$proto265["m_columns"][] = "ICHIBUSEIYAKU";
$proto265["m_columns"][] = "seiyakukin";
$proto265["m_columns"][] = "kaitorihuka";
$proto265["m_columns"][] = "awazu_date";
$proto265["m_columns"][] = "seiyaku_price";
$proto265["m_columns"][] = "eoc_search_keyword";
$proto265["m_columns"][] = "sonota";
$proto265["m_columns"][] = "size_kosuu";
$proto265["m_columns"][] = "sagawa_shuuka_flag";
$proto265["m_columns"][] = "line_check";
$proto265["m_columns"][] = "sagawa_shuukairai_denwabangou";
$proto265["m_columns"][] = "kaitori_sougak";
$proto265["m_columns"][] = "flag";
$proto265["m_columns"][] = "key_code";
$proto265["m_columns"][] = "dm_check_type";
$proto265["m_columns"][] = "kit_flag";
$proto265["m_columns"][] = "kit_done_flag";
$proto265["m_columns"][] = "bank_details_code";
$proto265["m_columns"][] = "bank_details_blunch_name";
$proto265["m_columns"][] = "bank_details_blunch_code";
$proto265["m_columns"][] = "bank_details_account_number";
$proto265["m_columns"][] = "bank_details_symbol";
$proto265["m_columns"][] = "bank_details_number";
$proto265["m_columns"][] = "bank_details_account_name";
$proto265["m_columns"][] = "bank_details_deposit_type";
$proto265["m_columns"][] = "mypage_id";
$proto265["m_columns"][] = "UN_REACHABLE_brand";
$proto265["m_columns"][] = "sagawa_haisou_hoken";
$proto265["m_columns"][] = "transfer_confirm";
$proto265["m_columns"][] = "outside_bank";
$proto265["m_columns"][] = "new_name";
$proto265["m_columns"][] = "letterpack";
$proto265["m_columns"][] = "satei_saisoku_2_days";
$proto265["m_columns"][] = "satei_saisoku_7_days";
$proto265["m_columns"][] = "accept_flag";
$proto265["m_columns"][] = "delivery_flag";
$proto265["m_columns"][] = "refining_weight";
$proto265["m_columns"][] = "line_chat_url";
$proto265["m_columns"][] = "royal_customer_status";
$proto265["m_columns"][] = "is_business_customer";
$proto265["m_columns"][] = "is_exist_haisouhosyo";
$proto265["m_columns"][] = "meigi_hankaku_kana";
$proto265["m_columns"][] = "building_types";
$proto265["m_columns"][] = "dwelling_types";
$proto265["m_columns"][] = "is_yamato_csv";
$proto265["m_columns"][] = "is_seiren_csv";
$obj = new SQLTable($proto265);

$proto264["m_table"] = $obj;
$proto264["m_sql"] = "LEFT OUTER JOIN `Eoc` ON `shouhin`.`ecc_id` = `Eoc`.`ecc_id`";
$proto264["m_alias"] = "";
$proto264["m_srcTableName"] = "satei_of_jewelry";
$proto266=array();
$proto266["m_sql"] = "`shouhin`.`ecc_id` = `Eoc`.`ecc_id`";
$proto266["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "ecc_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_jewelry"
));

$proto266["m_column"]=$obj;
$proto266["m_contained"] = array();
$proto266["m_strCase"] = "= `Eoc`.`ecc_id`";
$proto266["m_havingmode"] = false;
$proto266["m_inBrackets"] = false;
$proto266["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto266);

$proto264["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto264);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto268=array();
						$obj = new SQLField(array(
	"m_strName" => "product_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_jewelry"
));

$proto268["m_column"]=$obj;
$proto268["m_bAsc"] = 0;
$proto268["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto268);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="satei_of_jewelry";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_satei_of_jewelry = createSqlQuery_satei_of_jewelry();


	
		;

																																																																																																											

$tdatasatei_of_jewelry[".sqlquery"] = $queryData_satei_of_jewelry;

include_once(getabspath("include/satei_of_jewelry_events.php"));
$tableEvents["satei_of_jewelry"] = new eventclass_satei_of_jewelry;
$tdatasatei_of_jewelry[".hasEvents"] = true;

?>