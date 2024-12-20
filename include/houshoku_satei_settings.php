<?php
require_once(getabspath("classes/cipherer.php"));




$tdatahoushoku_satei = array();
	$tdatahoushoku_satei[".truncateText"] = true;
	$tdatahoushoku_satei[".NumberOfChars"] = 80;
	$tdatahoushoku_satei[".ShortName"] = "houshoku_satei";
	$tdatahoushoku_satei[".OwnerID"] = "";
	$tdatahoushoku_satei[".OriginalTable"] = "shouhin";

//	field labels
$fieldLabelshoushoku_satei = array();
$fieldToolTipshoushoku_satei = array();
$pageTitleshoushoku_satei = array();
$placeHoldershoushoku_satei = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelshoushoku_satei["Japanese"] = array();
	$fieldToolTipshoushoku_satei["Japanese"] = array();
	$placeHoldershoushoku_satei["Japanese"] = array();
	$pageTitleshoushoku_satei["Japanese"] = array();
	$fieldLabelshoushoku_satei["Japanese"]["product_id"] = "SEQ";
	$fieldToolTipshoushoku_satei["Japanese"]["product_id"] = "";
	$placeHoldershoushoku_satei["Japanese"]["product_id"] = "";
	$fieldLabelshoushoku_satei["Japanese"]["category_id"] = "大カテゴリー";
	$fieldToolTipshoushoku_satei["Japanese"]["category_id"] = "";
	$placeHoldershoushoku_satei["Japanese"]["category_id"] = "";
	$fieldLabelshoushoku_satei["Japanese"]["goods_title"] = "アイテム名";
	$fieldToolTipshoushoku_satei["Japanese"]["goods_title"] = "";
	$placeHoldershoushoku_satei["Japanese"]["goods_title"] = "";
	$fieldLabelshoushoku_satei["Japanese"]["title"] = "タイトル";
	$fieldToolTipshoushoku_satei["Japanese"]["title"] = "";
	$placeHoldershoushoku_satei["Japanese"]["title"] = "";
	$fieldLabelshoushoku_satei["Japanese"]["sub_category_id1"] = "中カテゴリー";
	$fieldToolTipshoushoku_satei["Japanese"]["sub_category_id1"] = "";
	$placeHoldershoushoku_satei["Japanese"]["sub_category_id1"] = "";
	$fieldLabelshoushoku_satei["Japanese"]["ecc_id"] = "Ecc Id";
	$fieldToolTipshoushoku_satei["Japanese"]["ecc_id"] = "";
	$placeHoldershoushoku_satei["Japanese"]["ecc_id"] = "";
	$fieldLabelshoushoku_satei["Japanese"]["price"] = "買取額";
	$fieldToolTipshoushoku_satei["Japanese"]["price"] = "";
	$placeHoldershoushoku_satei["Japanese"]["price"] = "";
	$fieldLabelshoushoku_satei["Japanese"]["yahoo"] = "Yahooo";
	$fieldToolTipshoushoku_satei["Japanese"]["yahoo"] = "";
	$placeHoldershoushoku_satei["Japanese"]["yahoo"] = "";
	$fieldLabelshoushoku_satei["Japanese"]["remark"] = "宝飾備考";
	$fieldToolTipshoushoku_satei["Japanese"]["remark"] = "";
	$placeHoldershoushoku_satei["Japanese"]["remark"] = "";
	$fieldLabelshoushoku_satei["Japanese"]["sales_price"] = "販売額";
	$fieldToolTipshoushoku_satei["Japanese"]["sales_price"] = "";
	$placeHoldershoushoku_satei["Japanese"]["sales_price"] = "";
	$fieldLabelshoushoku_satei["Japanese"]["description"] = "メモ";
	$fieldToolTipshoushoku_satei["Japanese"]["description"] = "";
	$placeHoldershoushoku_satei["Japanese"]["description"] = "";
	$fieldLabelshoushoku_satei["Japanese"]["status"] = "商品状態";
	$fieldToolTipshoushoku_satei["Japanese"]["status"] = "";
	$placeHoldershoushoku_satei["Japanese"]["status"] = "";
	$fieldLabelshoushoku_satei["Japanese"]["product_num"] = "ブランドID";
	$fieldToolTipshoushoku_satei["Japanese"]["product_num"] = "";
	$placeHoldershoushoku_satei["Japanese"]["product_num"] = "";
	$fieldLabelshoushoku_satei["Japanese"]["yahoo_size"] = "サイズ";
	$fieldToolTipshoushoku_satei["Japanese"]["yahoo_size"] = "";
	$placeHoldershoushoku_satei["Japanese"]["yahoo_size"] = "";
	$fieldLabelshoushoku_satei["Japanese"]["yahoo_title"] = "Yタイトル";
	$fieldToolTipshoushoku_satei["Japanese"]["yahoo_title"] = "";
	$placeHoldershoushoku_satei["Japanese"]["yahoo_title"] = "";
	$fieldLabelshoushoku_satei["Japanese"]["yahoo_sankou_uwadai"] = "参考上代";
	$fieldToolTipshoushoku_satei["Japanese"]["yahoo_sankou_uwadai"] = "";
	$placeHoldershoushoku_satei["Japanese"]["yahoo_sankou_uwadai"] = "";
	$fieldLabelshoushoku_satei["Japanese"]["yahoo_sozai"] = "素材";
	$fieldToolTipshoushoku_satei["Japanese"]["yahoo_sozai"] = "";
	$placeHoldershoushoku_satei["Japanese"]["yahoo_sozai"] = "";
	$fieldLabelshoushoku_satei["Japanese"]["yahoo_kataban"] = "型番";
	$fieldToolTipshoushoku_satei["Japanese"]["yahoo_kataban"] = "";
	$placeHoldershoushoku_satei["Japanese"]["yahoo_kataban"] = "";
	$fieldLabelshoushoku_satei["Japanese"]["yahoo_condition1"] = "コンディションの詳細";
	$fieldToolTipshoushoku_satei["Japanese"]["yahoo_condition1"] = "";
	$placeHoldershoushoku_satei["Japanese"]["yahoo_condition1"] = "";
	$fieldLabelshoushoku_satei["Japanese"]["yahoo_condition2"] = "コンディション";
	$fieldToolTipshoushoku_satei["Japanese"]["yahoo_condition2"] = "";
	$placeHoldershoushoku_satei["Japanese"]["yahoo_condition2"] = "";
	$fieldLabelshoushoku_satei["Japanese"]["yahoo_fuzokuhin"] = "付属品";
	$fieldToolTipshoushoku_satei["Japanese"]["yahoo_fuzokuhin"] = "";
	$placeHoldershoushoku_satei["Japanese"]["yahoo_fuzokuhin"] = "";
	$fieldLabelshoushoku_satei["Japanese"]["yahoo_sinaban"] = "品番";
	$fieldToolTipshoushoku_satei["Japanese"]["yahoo_sinaban"] = "";
	$placeHoldershoushoku_satei["Japanese"]["yahoo_sinaban"] = "";
	$fieldLabelshoushoku_satei["Japanese"]["yahoo_saisun_sha"] = "Yahoo Saisun Sha";
	$fieldToolTipshoushoku_satei["Japanese"]["yahoo_saisun_sha"] = "";
	$placeHoldershoushoku_satei["Japanese"]["yahoo_saisun_sha"] = "";
	$fieldLabelshoushoku_satei["Japanese"]["yahoo_sex"] = "性別";
	$fieldToolTipshoushoku_satei["Japanese"]["yahoo_sex"] = "";
	$placeHoldershoushoku_satei["Japanese"]["yahoo_sex"] = "";
	$fieldLabelshoushoku_satei["Japanese"]["box_id"] = "Box Id";
	$fieldToolTipshoushoku_satei["Japanese"]["box_id"] = "";
	$placeHoldershoushoku_satei["Japanese"]["box_id"] = "";
	$fieldLabelshoushoku_satei["Japanese"]["nyuukin_price"] = "Nyuukin Price";
	$fieldToolTipshoushoku_satei["Japanese"]["nyuukin_price"] = "";
	$placeHoldershoushoku_satei["Japanese"]["nyuukin_price"] = "";
	$fieldLabelshoushoku_satei["Japanese"]["updated_by"] = "Updated By";
	$fieldToolTipshoushoku_satei["Japanese"]["updated_by"] = "";
	$placeHoldershoushoku_satei["Japanese"]["updated_by"] = "";
	$fieldLabelshoushoku_satei["Japanese"]["raku_title"] = "楽天タイトル";
	$fieldToolTipshoushoku_satei["Japanese"]["raku_title"] = "";
	$placeHoldershoushoku_satei["Japanese"]["raku_title"] = "";
	$fieldLabelshoushoku_satei["Japanese"]["timesta"] = "Timesta";
	$fieldToolTipshoushoku_satei["Japanese"]["timesta"] = "";
	$placeHoldershoushoku_satei["Japanese"]["timesta"] = "";
	$fieldLabelshoushoku_satei["Japanese"]["saisun_start"] = "Saisun Start";
	$fieldToolTipshoushoku_satei["Japanese"]["saisun_start"] = "";
	$placeHoldershoushoku_satei["Japanese"]["saisun_start"] = "";
	$fieldLabelshoushoku_satei["Japanese"]["saisun_end"] = "Saisun End";
	$fieldToolTipshoushoku_satei["Japanese"]["saisun_end"] = "";
	$placeHoldershoushoku_satei["Japanese"]["saisun_end"] = "";
	$fieldLabelshoushoku_satei["Japanese"]["label_output_flag"] = "ラベル出力";
	$fieldToolTipshoushoku_satei["Japanese"]["label_output_flag"] = "";
	$placeHoldershoushoku_satei["Japanese"]["label_output_flag"] = "";
	$fieldLabelshoushoku_satei["Japanese"]["season"] = "季節";
	$fieldToolTipshoushoku_satei["Japanese"]["season"] = "";
	$placeHoldershoushoku_satei["Japanese"]["season"] = "";
	$fieldLabelshoushoku_satei["Japanese"]["kanryou_henbi"] = "Kanryou Henbi";
	$fieldToolTipshoushoku_satei["Japanese"]["kanryou_henbi"] = "";
	$placeHoldershoushoku_satei["Japanese"]["kanryou_henbi"] = "";
	$fieldLabelshoushoku_satei["Japanese"]["box_sort"] = "Box Sort";
	$fieldToolTipshoushoku_satei["Japanese"]["box_sort"] = "";
	$placeHoldershoushoku_satei["Japanese"]["box_sort"] = "";
	$fieldLabelshoushoku_satei["Japanese"]["satei_by"] = "査定人";
	$fieldToolTipshoushoku_satei["Japanese"]["satei_by"] = "";
	$placeHoldershoushoku_satei["Japanese"]["satei_by"] = "";
	$fieldLabelshoushoku_satei["Japanese"]["kaitori_by"] = "Kaitori By";
	$fieldToolTipshoushoku_satei["Japanese"]["kaitori_by"] = "";
	$placeHoldershoushoku_satei["Japanese"]["kaitori_by"] = "";
	$fieldLabelshoushoku_satei["Japanese"]["comment"] = "コメント";
	$fieldToolTipshoushoku_satei["Japanese"]["comment"] = "";
	$placeHoldershoushoku_satei["Japanese"]["comment"] = "";
	$fieldLabelshoushoku_satei["Japanese"]["satei_hi"] = "査定日";
	$fieldToolTipshoushoku_satei["Japanese"]["satei_hi"] = "";
	$placeHoldershoushoku_satei["Japanese"]["satei_hi"] = "";
	$fieldLabelshoushoku_satei["Japanese"]["kaitory_hi"] = "Kaitory Hi";
	$fieldToolTipshoushoku_satei["Japanese"]["kaitory_hi"] = "";
	$placeHoldershoushoku_satei["Japanese"]["kaitory_hi"] = "";
	$fieldLabelshoushoku_satei["Japanese"]["REG_PHOTOGRAPHER"] = "REG PHOTOGRAPHER";
	$fieldToolTipshoushoku_satei["Japanese"]["REG_PHOTOGRAPHER"] = "";
	$placeHoldershoushoku_satei["Japanese"]["REG_PHOTOGRAPHER"] = "";
	$fieldLabelshoushoku_satei["Japanese"]["REG_PACKINGS"] = "REG PACKINGS";
	$fieldToolTipshoushoku_satei["Japanese"]["REG_PACKINGS"] = "";
	$placeHoldershoushoku_satei["Japanese"]["REG_PACKINGS"] = "";
	$fieldLabelshoushoku_satei["Japanese"]["REG_KAKOU_DATE"] = "REG KAKOU DATE";
	$fieldToolTipshoushoku_satei["Japanese"]["REG_KAKOU_DATE"] = "";
	$placeHoldershoushoku_satei["Japanese"]["REG_KAKOU_DATE"] = "";
	$fieldLabelshoushoku_satei["Japanese"]["REG_KAKOU"] = "REG KAKOU";
	$fieldToolTipshoushoku_satei["Japanese"]["REG_KAKOU"] = "";
	$placeHoldershoushoku_satei["Japanese"]["REG_KAKOU"] = "";
	$fieldLabelshoushoku_satei["Japanese"]["REG_EXHIBITOR"] = "REG EXHIBITOR";
	$fieldToolTipshoushoku_satei["Japanese"]["REG_EXHIBITOR"] = "";
	$placeHoldershoushoku_satei["Japanese"]["REG_EXHIBITOR"] = "";
	$fieldLabelshoushoku_satei["Japanese"]["REG_PHOTOGRAPHER_DATE"] = "REG PHOTOGRAPHER DATE";
	$fieldToolTipshoushoku_satei["Japanese"]["REG_PHOTOGRAPHER_DATE"] = "";
	$placeHoldershoushoku_satei["Japanese"]["REG_PHOTOGRAPHER_DATE"] = "";
	$fieldLabelshoushoku_satei["Japanese"]["DT_PACKING_DATE"] = "DT PACKING DATE";
	$fieldToolTipshoushoku_satei["Japanese"]["DT_PACKING_DATE"] = "";
	$placeHoldershoushoku_satei["Japanese"]["DT_PACKING_DATE"] = "";
	$fieldLabelshoushoku_satei["Japanese"]["DT_UP_DATE"] = "DT UP DATE";
	$fieldToolTipshoushoku_satei["Japanese"]["DT_UP_DATE"] = "";
	$placeHoldershoushoku_satei["Japanese"]["DT_UP_DATE"] = "";
	$fieldLabelshoushoku_satei["Japanese"]["AWAZU_DATE"] = "AWAZU DATE";
	$fieldToolTipshoushoku_satei["Japanese"]["AWAZU_DATE"] = "";
	$placeHoldershoushoku_satei["Japanese"]["AWAZU_DATE"] = "";
	$fieldLabelshoushoku_satei["Japanese"]["AWAZU_NIN"] = "AWAZU NIN";
	$fieldToolTipshoushoku_satei["Japanese"]["AWAZU_NIN"] = "";
	$placeHoldershoushoku_satei["Japanese"]["AWAZU_NIN"] = "";
	$fieldLabelshoushoku_satei["Japanese"]["sabun_date"] = "Sabun Date";
	$fieldToolTipshoushoku_satei["Japanese"]["sabun_date"] = "";
	$placeHoldershoushoku_satei["Japanese"]["sabun_date"] = "";
	$fieldLabelshoushoku_satei["Japanese"]["browseid"] = "Browseid";
	$fieldToolTipshoushoku_satei["Japanese"]["browseid"] = "";
	$placeHoldershoushoku_satei["Japanese"]["browseid"] = "";
	$fieldLabelshoushoku_satei["Japanese"]["browsenode"] = "Browsenode";
	$fieldToolTipshoushoku_satei["Japanese"]["browsenode"] = "";
	$placeHoldershoushoku_satei["Japanese"]["browsenode"] = "";
	$fieldLabelshoushoku_satei["Japanese"]["gold_property"] = "金性";
	$fieldToolTipshoushoku_satei["Japanese"]["gold_property"] = "";
	$placeHoldershoushoku_satei["Japanese"]["gold_property"] = "";
	$fieldLabelshoushoku_satei["Japanese"]["ichiba_title"] = "帳票用品名";
	$fieldToolTipshoushoku_satei["Japanese"]["ichiba_title"] = "";
	$placeHoldershoushoku_satei["Japanese"]["ichiba_title"] = "";
	$fieldLabelshoushoku_satei["Japanese"]["Gram"] = "金性グラム";
	$fieldToolTipshoushoku_satei["Japanese"]["Gram"] = "";
	$placeHoldershoushoku_satei["Japanese"]["Gram"] = "";
	$fieldLabelshoushoku_satei["Japanese"]["Parent_stone"] = "親石";
	$fieldToolTipshoushoku_satei["Japanese"]["Parent_stone"] = "";
	$placeHoldershoushoku_satei["Japanese"]["Parent_stone"] = "";
	$fieldLabelshoushoku_satei["Japanese"]["Aside_stone"] = "脇石";
	$fieldToolTipshoushoku_satei["Japanese"]["Aside_stone"] = "";
	$placeHoldershoushoku_satei["Japanese"]["Aside_stone"] = "";
	$fieldLabelshoushoku_satei["Japanese"]["Appraiser"] = "鑑定機関";
	$fieldToolTipshoushoku_satei["Japanese"]["Appraiser"] = "";
	$placeHoldershoushoku_satei["Japanese"]["Appraiser"] = "";
	$fieldLabelshoushoku_satei["Japanese"]["Remarks"] = "宝飾備考";
	$fieldToolTipshoushoku_satei["Japanese"]["Remarks"] = "";
	$placeHoldershoushoku_satei["Japanese"]["Remarks"] = "";
	$fieldLabelshoushoku_satei["Japanese"]["Destination_selling"] = "売り先";
	$fieldToolTipshoushoku_satei["Japanese"]["Destination_selling"] = "";
	$placeHoldershoushoku_satei["Japanese"]["Destination_selling"] = "";
	$fieldLabelshoushoku_satei["Japanese"]["Finish"] = "仕上";
	$fieldToolTipshoushoku_satei["Japanese"]["Finish"] = "";
	$placeHoldershoushoku_satei["Japanese"]["Finish"] = "";
	$fieldLabelshoushoku_satei["Japanese"]["Discrimination"] = "鑑別";
	$fieldToolTipshoushoku_satei["Japanese"]["Discrimination"] = "";
	$placeHoldershoushoku_satei["Japanese"]["Discrimination"] = "";
	$fieldLabelshoushoku_satei["Japanese"]["accessories"] = "付属品";
	$fieldToolTipshoushoku_satei["Japanese"]["accessories"] = "";
	$placeHoldershoushoku_satei["Japanese"]["accessories"] = "";
	$fieldLabelshoushoku_satei["Japanese"]["priority"] = "優先";
	$fieldToolTipshoushoku_satei["Japanese"]["priority"] = "";
	$placeHoldershoushoku_satei["Japanese"]["priority"] = "";
	$fieldLabelshoushoku_satei["Japanese"]["A_storage"] = "A保管";
	$fieldToolTipshoushoku_satei["Japanese"]["A_storage"] = "";
	$placeHoldershoushoku_satei["Japanese"]["A_storage"] = "";
	$fieldLabelshoushoku_satei["Japanese"]["price_per_gram"] = "金性単価";
	$fieldToolTipshoushoku_satei["Japanese"]["price_per_gram"] = "";
	$placeHoldershoushoku_satei["Japanese"]["price_per_gram"] = "";
	$fieldLabelshoushoku_satei["Japanese"]["price_per_parent_stone"] = "親石単価";
	$fieldToolTipshoushoku_satei["Japanese"]["price_per_parent_stone"] = "";
	$placeHoldershoushoku_satei["Japanese"]["price_per_parent_stone"] = "";
	$fieldLabelshoushoku_satei["Japanese"]["price_per_aside_stone"] = "脇石単価";
	$fieldToolTipshoushoku_satei["Japanese"]["price_per_aside_stone"] = "";
	$placeHoldershoushoku_satei["Japanese"]["price_per_aside_stone"] = "";
	$fieldLabelshoushoku_satei["Japanese"]["price_secret"] = "買取額隠語";
	$fieldToolTipshoushoku_satei["Japanese"]["price_secret"] = "";
	$placeHoldershoushoku_satei["Japanese"]["price_secret"] = "";
	$fieldLabelshoushoku_satei["Japanese"]["sales_price_secret"] = "販売額隠語";
	$fieldToolTipshoushoku_satei["Japanese"]["sales_price_secret"] = "";
	$placeHoldershoushoku_satei["Japanese"]["sales_price_secret"] = "";
	$fieldLabelshoushoku_satei["Japanese"]["eq"] = "=";
	$fieldToolTipshoushoku_satei["Japanese"]["eq"] = "";
	$placeHoldershoushoku_satei["Japanese"]["eq"] = "";
	$fieldLabelshoushoku_satei["Japanese"]["en"] = "円";
	$fieldToolTipshoushoku_satei["Japanese"]["en"] = "";
	$placeHoldershoushoku_satei["Japanese"]["en"] = "";
	$fieldLabelshoushoku_satei["Japanese"]["line"] = "ライン";
	$fieldToolTipshoushoku_satei["Japanese"]["line"] = "";
	$placeHoldershoushoku_satei["Japanese"]["line"] = "";
	$fieldLabelshoushoku_satei["Japanese"]["item_name"] = "アイテム名";
	$fieldToolTipshoushoku_satei["Japanese"]["item_name"] = "";
	$placeHoldershoushoku_satei["Japanese"]["item_name"] = "";
	$fieldLabelshoushoku_satei["Japanese"]["yahoo_color_id"] = "WS用カラー";
	$fieldToolTipshoushoku_satei["Japanese"]["yahoo_color_id"] = "";
	$placeHoldershoushoku_satei["Japanese"]["yahoo_color_id"] = "";
	$fieldLabelshoushoku_satei["Japanese"]["serial_number"] = "機番";
	$fieldToolTipshoushoku_satei["Japanese"]["serial_number"] = "";
	$placeHoldershoushoku_satei["Japanese"]["serial_number"] = "";
	$fieldLabelshoushoku_satei["Japanese"]["Exhibition_Date"] = "Exhibition Date";
	$fieldToolTipshoushoku_satei["Japanese"]["Exhibition_Date"] = "";
	$placeHoldershoushoku_satei["Japanese"]["Exhibition_Date"] = "";
	$fieldLabelshoushoku_satei["Japanese"]["search_keyword"] = "ストア内検索キーワード";
	$fieldToolTipshoushoku_satei["Japanese"]["search_keyword"] = "";
	$placeHoldershoushoku_satei["Japanese"]["search_keyword"] = "";
	$fieldLabelshoushoku_satei["Japanese"]["stamp"] = "刻印";
	$fieldToolTipshoushoku_satei["Japanese"]["stamp"] = "";
	$placeHoldershoushoku_satei["Japanese"]["stamp"] = "";
	$fieldLabelshoushoku_satei["Japanese"]["motif"] = "モチーフ";
	$fieldToolTipshoushoku_satei["Japanese"]["motif"] = "";
	$placeHoldershoushoku_satei["Japanese"]["motif"] = "";
	$fieldLabelshoushoku_satei["Japanese"]["Setting"] = "セッティング";
	$fieldToolTipshoushoku_satei["Japanese"]["Setting"] = "";
	$placeHoldershoushoku_satei["Japanese"]["Setting"] = "";
	$fieldLabelshoushoku_satei["Japanese"]["processing"] = "処理";
	$fieldToolTipshoushoku_satei["Japanese"]["processing"] = "";
	$placeHoldershoushoku_satei["Japanese"]["processing"] = "";
	$fieldLabelshoushoku_satei["Japanese"]["Ring_size"] = "リングサイズ";
	$fieldToolTipshoushoku_satei["Japanese"]["Ring_size"] = "";
	$placeHoldershoushoku_satei["Japanese"]["Ring_size"] = "";
	$fieldLabelshoushoku_satei["Japanese"]["price_for_site"] = "Price For Site";
	$fieldToolTipshoushoku_satei["Japanese"]["price_for_site"] = "";
	$placeHoldershoushoku_satei["Japanese"]["price_for_site"] = "";
	$fieldLabelshoushoku_satei["Japanese"]["yahoo_category_id"] = "Yahoo Category Id";
	$fieldToolTipshoushoku_satei["Japanese"]["yahoo_category_id"] = "";
	$placeHoldershoushoku_satei["Japanese"]["yahoo_category_id"] = "";
	$fieldLabelshoushoku_satei["Japanese"]["Qty"] = "Qty";
	$fieldToolTipshoushoku_satei["Japanese"]["Qty"] = "";
	$placeHoldershoushoku_satei["Japanese"]["Qty"] = "";
	$fieldLabelshoushoku_satei["Japanese"]["sales_period"] = "Sales Period";
	$fieldToolTipshoushoku_satei["Japanese"]["sales_period"] = "";
	$placeHoldershoushoku_satei["Japanese"]["sales_period"] = "";
	$fieldLabelshoushoku_satei["Japanese"]["starting_price"] = "Starting Price";
	$fieldToolTipshoushoku_satei["Japanese"]["starting_price"] = "";
	$placeHoldershoushoku_satei["Japanese"]["starting_price"] = "";
	$fieldLabelshoushoku_satei["Japanese"]["ecc_seq"] = "顧客番号";
	$fieldToolTipshoushoku_satei["Japanese"]["ecc_seq"] = "";
	$placeHoldershoushoku_satei["Japanese"]["ecc_seq"] = "";
	$fieldLabelshoushoku_satei["Japanese"]["yahoo_junle"] = "ブランドジャンル";
	$fieldToolTipshoushoku_satei["Japanese"]["yahoo_junle"] = "";
	$placeHoldershoushoku_satei["Japanese"]["yahoo_junle"] = "";
	$fieldLabelshoushoku_satei["Japanese"]["logo"] = "ロゴ";
	$fieldToolTipshoushoku_satei["Japanese"]["logo"] = "";
	$placeHoldershoushoku_satei["Japanese"]["logo"] = "";
	$fieldLabelshoushoku_satei["Japanese"]["parts"] = "金具（パーツ）";
	$fieldToolTipshoushoku_satei["Japanese"]["parts"] = "";
	$placeHoldershoushoku_satei["Japanese"]["parts"] = "";
	$fieldLabelshoushoku_satei["Japanese"]["guarantee"] = "ギャランティ";
	$fieldToolTipshoushoku_satei["Japanese"]["guarantee"] = "";
	$placeHoldershoushoku_satei["Japanese"]["guarantee"] = "";
	$fieldLabelshoushoku_satei["Japanese"]["errors"] = "真贋チェックエラー";
	$fieldToolTipshoushoku_satei["Japanese"]["errors"] = "";
	$placeHoldershoushoku_satei["Japanese"]["errors"] = "";
	$fieldLabelshoushoku_satei["Japanese"]["designer"] = "デザイナー";
	$fieldToolTipshoushoku_satei["Japanese"]["designer"] = "";
	$placeHoldershoushoku_satei["Japanese"]["designer"] = "";
	$fieldLabelshoushoku_satei["Japanese"]["hahakai"] = "母貝";
	$fieldToolTipshoushoku_satei["Japanese"]["hahakai"] = "";
	$placeHoldershoushoku_satei["Japanese"]["hahakai"] = "";
	$fieldLabelshoushoku_satei["Japanese"]["effect"] = "効果";
	$fieldToolTipshoushoku_satei["Japanese"]["effect"] = "";
	$placeHoldershoushoku_satei["Japanese"]["effect"] = "";
	$fieldLabelshoushoku_satei["Japanese"]["shape"] = "シェイプ";
	$fieldToolTipshoushoku_satei["Japanese"]["shape"] = "";
	$placeHoldershoushoku_satei["Japanese"]["shape"] = "";
	$fieldLabelshoushoku_satei["Japanese"]["cutting_style"] = "カッティングスタイル";
	$fieldToolTipshoushoku_satei["Japanese"]["cutting_style"] = "";
	$placeHoldershoushoku_satei["Japanese"]["cutting_style"] = "";
	$fieldLabelshoushoku_satei["Japanese"]["chain_type"] = "チェーン種類";
	$fieldToolTipshoushoku_satei["Japanese"]["chain_type"] = "";
	$placeHoldershoushoku_satei["Japanese"]["chain_type"] = "";
	$fieldLabelshoushoku_satei["Japanese"]["number_of_stones"] = "石の個数";
	$fieldToolTipshoushoku_satei["Japanese"]["number_of_stones"] = "";
	$placeHoldershoushoku_satei["Japanese"]["number_of_stones"] = "";
	$fieldLabelshoushoku_satei["Japanese"]["satei_error"] = "査定抜けエラー";
	$fieldToolTipshoushoku_satei["Japanese"]["satei_error"] = "";
	$placeHoldershoushoku_satei["Japanese"]["satei_error"] = "";
	$fieldLabelshoushoku_satei["Japanese"]["producing_area"] = "産地";
	$fieldToolTipshoushoku_satei["Japanese"]["producing_area"] = "";
	$placeHoldershoushoku_satei["Japanese"]["producing_area"] = "";
	$fieldLabelshoushoku_satei["Japanese"]["shape_supplement"] = "形状補足";
	$fieldToolTipshoushoku_satei["Japanese"]["shape_supplement"] = "";
	$placeHoldershoushoku_satei["Japanese"]["shape_supplement"] = "";
	$fieldLabelshoushoku_satei["Japanese"]["side_gem"] = "脇石";
	$fieldToolTipshoushoku_satei["Japanese"]["side_gem"] = "";
	$placeHoldershoushoku_satei["Japanese"]["side_gem"] = "";
	$fieldLabelshoushoku_satei["Japanese"]["product_style"] = "形状名";
	$fieldToolTipshoushoku_satei["Japanese"]["product_style"] = "";
	$placeHoldershoushoku_satei["Japanese"]["product_style"] = "";
	$fieldLabelshoushoku_satei["Japanese"]["unit"] = "単位";
	$fieldToolTipshoushoku_satei["Japanese"]["unit"] = "";
	$placeHoldershoushoku_satei["Japanese"]["unit"] = "";
	$fieldLabelshoushoku_satei["Japanese"]["hall_mark"] = "ホールマーク";
	$fieldToolTipshoushoku_satei["Japanese"]["hall_mark"] = "";
	$placeHoldershoushoku_satei["Japanese"]["hall_mark"] = "";
	$fieldLabelshoushoku_satei["Japanese"]["plate"] = "プレート";
	$fieldToolTipshoushoku_satei["Japanese"]["plate"] = "";
	$placeHoldershoushoku_satei["Japanese"]["plate"] = "";
	$fieldLabelshoushoku_satei["Japanese"]["official_url"] = "オフィシャルURL";
	$fieldToolTipshoushoku_satei["Japanese"]["official_url"] = "";
	$placeHoldershoushoku_satei["Japanese"]["official_url"] = "";
	if (count($fieldToolTipshoushoku_satei["Japanese"]))
		$tdatahoushoku_satei[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelshoushoku_satei[""] = array();
	$fieldToolTipshoushoku_satei[""] = array();
	$placeHoldershoushoku_satei[""] = array();
	$pageTitleshoushoku_satei[""] = array();
	$fieldLabelshoushoku_satei[""]["logo"] = "Logo";
	$fieldToolTipshoushoku_satei[""]["logo"] = "";
	$placeHoldershoushoku_satei[""]["logo"] = "";
	$fieldLabelshoushoku_satei[""]["parts"] = "Parts";
	$fieldToolTipshoushoku_satei[""]["parts"] = "";
	$placeHoldershoushoku_satei[""]["parts"] = "";
	$fieldLabelshoushoku_satei[""]["guarantee"] = "Guarantee";
	$fieldToolTipshoushoku_satei[""]["guarantee"] = "";
	$placeHoldershoushoku_satei[""]["guarantee"] = "";
	$fieldLabelshoushoku_satei[""]["errors"] = "Errors";
	$fieldToolTipshoushoku_satei[""]["errors"] = "";
	$placeHoldershoushoku_satei[""]["errors"] = "";
	$fieldLabelshoushoku_satei[""]["designer"] = "Designer";
	$fieldToolTipshoushoku_satei[""]["designer"] = "";
	$placeHoldershoushoku_satei[""]["designer"] = "";
	$fieldLabelshoushoku_satei[""]["hahakai"] = "Hahakai";
	$fieldToolTipshoushoku_satei[""]["hahakai"] = "";
	$placeHoldershoushoku_satei[""]["hahakai"] = "";
	$fieldLabelshoushoku_satei[""]["effect"] = "Effect";
	$fieldToolTipshoushoku_satei[""]["effect"] = "";
	$placeHoldershoushoku_satei[""]["effect"] = "";
	$fieldLabelshoushoku_satei[""]["shape"] = "Shape";
	$fieldToolTipshoushoku_satei[""]["shape"] = "";
	$placeHoldershoushoku_satei[""]["shape"] = "";
	$fieldLabelshoushoku_satei[""]["cutting_style"] = "Cutting Style";
	$fieldToolTipshoushoku_satei[""]["cutting_style"] = "";
	$placeHoldershoushoku_satei[""]["cutting_style"] = "";
	$fieldLabelshoushoku_satei[""]["chain_type"] = "Chain Type";
	$fieldToolTipshoushoku_satei[""]["chain_type"] = "";
	$placeHoldershoushoku_satei[""]["chain_type"] = "";
	$fieldLabelshoushoku_satei[""]["number_of_stones"] = "Number Of Stones";
	$fieldToolTipshoushoku_satei[""]["number_of_stones"] = "";
	$placeHoldershoushoku_satei[""]["number_of_stones"] = "";
	$fieldLabelshoushoku_satei[""]["satei_error"] = "Satei Error";
	$fieldToolTipshoushoku_satei[""]["satei_error"] = "";
	$placeHoldershoushoku_satei[""]["satei_error"] = "";
	$fieldLabelshoushoku_satei[""]["producing_area"] = "Producing Area";
	$fieldToolTipshoushoku_satei[""]["producing_area"] = "";
	$placeHoldershoushoku_satei[""]["producing_area"] = "";
	$fieldLabelshoushoku_satei[""]["shape_supplement"] = "Shape Supplement";
	$fieldToolTipshoushoku_satei[""]["shape_supplement"] = "";
	$placeHoldershoushoku_satei[""]["shape_supplement"] = "";
	$fieldLabelshoushoku_satei[""]["side_gem"] = "Side Gem";
	$fieldToolTipshoushoku_satei[""]["side_gem"] = "";
	$placeHoldershoushoku_satei[""]["side_gem"] = "";
	$fieldLabelshoushoku_satei[""]["product_style"] = "Product Style";
	$fieldToolTipshoushoku_satei[""]["product_style"] = "";
	$placeHoldershoushoku_satei[""]["product_style"] = "";
	$fieldLabelshoushoku_satei[""]["unit"] = "Unit";
	$fieldToolTipshoushoku_satei[""]["unit"] = "";
	$placeHoldershoushoku_satei[""]["unit"] = "";
	$fieldLabelshoushoku_satei[""]["hall_mark"] = "Hall Mark";
	$fieldToolTipshoushoku_satei[""]["hall_mark"] = "";
	$placeHoldershoushoku_satei[""]["hall_mark"] = "";
	$fieldLabelshoushoku_satei[""]["plate"] = "Plate";
	$fieldToolTipshoushoku_satei[""]["plate"] = "";
	$placeHoldershoushoku_satei[""]["plate"] = "";
	$fieldLabelshoushoku_satei[""]["official_url"] = "Official Url";
	$fieldToolTipshoushoku_satei[""]["official_url"] = "";
	$placeHoldershoushoku_satei[""]["official_url"] = "";
	if (count($fieldToolTipshoushoku_satei[""]))
		$tdatahoushoku_satei[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelshoushoku_satei["English"] = array();
	$fieldToolTipshoushoku_satei["English"] = array();
	$placeHoldershoushoku_satei["English"] = array();
	$pageTitleshoushoku_satei["English"] = array();
	if (count($fieldToolTipshoushoku_satei["English"]))
		$tdatahoushoku_satei[".isUseToolTips"] = true;
}


	$tdatahoushoku_satei[".NCSearch"] = true;



$tdatahoushoku_satei[".shortTableName"] = "houshoku_satei";
$tdatahoushoku_satei[".nSecOptions"] = 0;
$tdatahoushoku_satei[".recsPerRowPrint"] = 1;
$tdatahoushoku_satei[".mainTableOwnerID"] = "";
$tdatahoushoku_satei[".moveNext"] = 1;
$tdatahoushoku_satei[".entityType"] = 1;

$tdatahoushoku_satei[".strOriginalTableName"] = "shouhin";

	



$tdatahoushoku_satei[".showAddInPopup"] = false;

$tdatahoushoku_satei[".showEditInPopup"] = false;

$tdatahoushoku_satei[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatahoushoku_satei[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatahoushoku_satei[".fieldsForRegister"] = array();

$tdatahoushoku_satei[".listAjax"] = false;

	$tdatahoushoku_satei[".audit"] = true;

	$tdatahoushoku_satei[".locking"] = false;



$tdatahoushoku_satei[".list"] = true;

$tdatahoushoku_satei[".inlineEdit"] = true;


$tdatahoushoku_satei[".reorderRecordsByHeader"] = true;
$tdatahoushoku_satei[".createSortByDropdown"] = true;
$tdatahoushoku_satei[".strSortControlSettingsJSON"] = "";



$tdatahoushoku_satei[".inlineAdd"] = true;

$tdatahoushoku_satei[".import"] = true;

$tdatahoushoku_satei[".exportTo"] = true;


$tdatahoushoku_satei[".delete"] = true;

$tdatahoushoku_satei[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatahoushoku_satei[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatahoushoku_satei[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatahoushoku_satei[".searchSaving"] = false;
//

$tdatahoushoku_satei[".showSearchPanel"] = true;
		$tdatahoushoku_satei[".flexibleSearch"] = true;

$tdatahoushoku_satei[".isUseAjaxSuggest"] = true;

$tdatahoushoku_satei[".rowHighlite"] = true;



																																																																																															
					
					
					
					
					
																					

$tdatahoushoku_satei[".ajaxCodeSnippetAdded"] = false;

$tdatahoushoku_satei[".buttonsAdded"] = true;

$tdatahoushoku_satei[".addPageEvents"] = true;

// use timepicker for search panel
$tdatahoushoku_satei[".isUseTimeForSearch"] = false;



$tdatahoushoku_satei[".badgeColor"] = "daa520";


$tdatahoushoku_satei[".allSearchFields"] = array();
$tdatahoushoku_satei[".filterFields"] = array();
$tdatahoushoku_satei[".requiredSearchFields"] = array();

$tdatahoushoku_satei[".allSearchFields"][] = "product_num";
	$tdatahoushoku_satei[".allSearchFields"][] = "category_id";
	$tdatahoushoku_satei[".allSearchFields"][] = "sub_category_id1";
	$tdatahoushoku_satei[".allSearchFields"][] = "yahoo_sex";
	$tdatahoushoku_satei[".allSearchFields"][] = "yahoo_condition2";
	$tdatahoushoku_satei[".allSearchFields"][] = "ecc_seq";
	$tdatahoushoku_satei[".allSearchFields"][] = "status";
	$tdatahoushoku_satei[".allSearchFields"][] = "satei_by";
	$tdatahoushoku_satei[".allSearchFields"][] = "title";
	$tdatahoushoku_satei[".allSearchFields"][] = "product_id";
	$tdatahoushoku_satei[".allSearchFields"][] = "yahoo_sinaban";
	$tdatahoushoku_satei[".allSearchFields"][] = "price";
	$tdatahoushoku_satei[".allSearchFields"][] = "sales_price";
	$tdatahoushoku_satei[".allSearchFields"][] = "description";
	$tdatahoushoku_satei[".allSearchFields"][] = "yahoo_kataban";
	$tdatahoushoku_satei[".allSearchFields"][] = "yahoo_sozai";
	$tdatahoushoku_satei[".allSearchFields"][] = "yahoo_size";
	$tdatahoushoku_satei[".allSearchFields"][] = "yahoo_condition1";
	$tdatahoushoku_satei[".allSearchFields"][] = "remark";
	$tdatahoushoku_satei[".allSearchFields"][] = "yahoo_fuzokuhin";
	$tdatahoushoku_satei[".allSearchFields"][] = "yahoo_sankou_uwadai";
	$tdatahoushoku_satei[".allSearchFields"][] = "season";
	$tdatahoushoku_satei[".allSearchFields"][] = "yahoo_title";
	$tdatahoushoku_satei[".allSearchFields"][] = "goods_title";
	$tdatahoushoku_satei[".allSearchFields"][] = "raku_title";
	$tdatahoushoku_satei[".allSearchFields"][] = "search_keyword";
	$tdatahoushoku_satei[".allSearchFields"][] = "stamp";
	$tdatahoushoku_satei[".allSearchFields"][] = "processing";
	$tdatahoushoku_satei[".allSearchFields"][] = "label_output_flag";
	$tdatahoushoku_satei[".allSearchFields"][] = "Ring_size";
	$tdatahoushoku_satei[".allSearchFields"][] = "comment";
	$tdatahoushoku_satei[".allSearchFields"][] = "satei_hi";
	$tdatahoushoku_satei[".allSearchFields"][] = "gold_property";
	$tdatahoushoku_satei[".allSearchFields"][] = "ichiba_title";
	$tdatahoushoku_satei[".allSearchFields"][] = "Gram";
	$tdatahoushoku_satei[".allSearchFields"][] = "Parent_stone";
	$tdatahoushoku_satei[".allSearchFields"][] = "Aside_stone";
	$tdatahoushoku_satei[".allSearchFields"][] = "Appraiser";
	$tdatahoushoku_satei[".allSearchFields"][] = "Remarks";
	$tdatahoushoku_satei[".allSearchFields"][] = "Destination_selling";
	$tdatahoushoku_satei[".allSearchFields"][] = "Finish";
	$tdatahoushoku_satei[".allSearchFields"][] = "Discrimination";
	$tdatahoushoku_satei[".allSearchFields"][] = "accessories";
	$tdatahoushoku_satei[".allSearchFields"][] = "priority";
	$tdatahoushoku_satei[".allSearchFields"][] = "A_storage";
	$tdatahoushoku_satei[".allSearchFields"][] = "price_per_gram";
	$tdatahoushoku_satei[".allSearchFields"][] = "price_per_parent_stone";
	$tdatahoushoku_satei[".allSearchFields"][] = "price_per_aside_stone";
	$tdatahoushoku_satei[".allSearchFields"][] = "price_secret";
	$tdatahoushoku_satei[".allSearchFields"][] = "sales_price_secret";
	$tdatahoushoku_satei[".allSearchFields"][] = "line";
	$tdatahoushoku_satei[".allSearchFields"][] = "item_name";
	$tdatahoushoku_satei[".allSearchFields"][] = "serial_number";
	$tdatahoushoku_satei[".allSearchFields"][] = "motif";
	$tdatahoushoku_satei[".allSearchFields"][] = "Setting";
	$tdatahoushoku_satei[".allSearchFields"][] = "logo";
	$tdatahoushoku_satei[".allSearchFields"][] = "parts";
	$tdatahoushoku_satei[".allSearchFields"][] = "guarantee";
	$tdatahoushoku_satei[".allSearchFields"][] = "designer";
	$tdatahoushoku_satei[".allSearchFields"][] = "errors";
	$tdatahoushoku_satei[".allSearchFields"][] = "cutting_style";
	$tdatahoushoku_satei[".allSearchFields"][] = "chain_type";
	$tdatahoushoku_satei[".allSearchFields"][] = "shape";
	$tdatahoushoku_satei[".allSearchFields"][] = "effect";
	$tdatahoushoku_satei[".allSearchFields"][] = "hahakai";
	$tdatahoushoku_satei[".allSearchFields"][] = "number_of_stones";
	$tdatahoushoku_satei[".allSearchFields"][] = "product_style";
	$tdatahoushoku_satei[".allSearchFields"][] = "producing_area";
	$tdatahoushoku_satei[".allSearchFields"][] = "satei_error";
	$tdatahoushoku_satei[".allSearchFields"][] = "shape_supplement";
	$tdatahoushoku_satei[".allSearchFields"][] = "side_gem";
	$tdatahoushoku_satei[".allSearchFields"][] = "unit";
	$tdatahoushoku_satei[".allSearchFields"][] = "plate";
	$tdatahoushoku_satei[".allSearchFields"][] = "hall_mark";
	

$tdatahoushoku_satei[".googleLikeFields"] = array();
$tdatahoushoku_satei[".googleLikeFields"][] = "product_id";
$tdatahoushoku_satei[".googleLikeFields"][] = "category_id";
$tdatahoushoku_satei[".googleLikeFields"][] = "goods_title";
$tdatahoushoku_satei[".googleLikeFields"][] = "title";
$tdatahoushoku_satei[".googleLikeFields"][] = "sub_category_id1";
$tdatahoushoku_satei[".googleLikeFields"][] = "price";
$tdatahoushoku_satei[".googleLikeFields"][] = "remark";
$tdatahoushoku_satei[".googleLikeFields"][] = "sales_price";
$tdatahoushoku_satei[".googleLikeFields"][] = "description";
$tdatahoushoku_satei[".googleLikeFields"][] = "status";
$tdatahoushoku_satei[".googleLikeFields"][] = "product_num";
$tdatahoushoku_satei[".googleLikeFields"][] = "yahoo_size";
$tdatahoushoku_satei[".googleLikeFields"][] = "yahoo_title";
$tdatahoushoku_satei[".googleLikeFields"][] = "yahoo_sankou_uwadai";
$tdatahoushoku_satei[".googleLikeFields"][] = "yahoo_sozai";
$tdatahoushoku_satei[".googleLikeFields"][] = "yahoo_kataban";
$tdatahoushoku_satei[".googleLikeFields"][] = "yahoo_condition1";
$tdatahoushoku_satei[".googleLikeFields"][] = "yahoo_condition2";
$tdatahoushoku_satei[".googleLikeFields"][] = "yahoo_fuzokuhin";
$tdatahoushoku_satei[".googleLikeFields"][] = "yahoo_sinaban";
$tdatahoushoku_satei[".googleLikeFields"][] = "yahoo_sex";
$tdatahoushoku_satei[".googleLikeFields"][] = "raku_title";
$tdatahoushoku_satei[".googleLikeFields"][] = "label_output_flag";
$tdatahoushoku_satei[".googleLikeFields"][] = "season";
$tdatahoushoku_satei[".googleLikeFields"][] = "satei_by";
$tdatahoushoku_satei[".googleLikeFields"][] = "comment";
$tdatahoushoku_satei[".googleLikeFields"][] = "satei_hi";
$tdatahoushoku_satei[".googleLikeFields"][] = "gold_property";
$tdatahoushoku_satei[".googleLikeFields"][] = "ichiba_title";
$tdatahoushoku_satei[".googleLikeFields"][] = "Gram";
$tdatahoushoku_satei[".googleLikeFields"][] = "Parent_stone";
$tdatahoushoku_satei[".googleLikeFields"][] = "Aside_stone";
$tdatahoushoku_satei[".googleLikeFields"][] = "Appraiser";
$tdatahoushoku_satei[".googleLikeFields"][] = "Remarks";
$tdatahoushoku_satei[".googleLikeFields"][] = "Destination_selling";
$tdatahoushoku_satei[".googleLikeFields"][] = "Finish";
$tdatahoushoku_satei[".googleLikeFields"][] = "Discrimination";
$tdatahoushoku_satei[".googleLikeFields"][] = "accessories";
$tdatahoushoku_satei[".googleLikeFields"][] = "priority";
$tdatahoushoku_satei[".googleLikeFields"][] = "A_storage";
$tdatahoushoku_satei[".googleLikeFields"][] = "price_per_gram";
$tdatahoushoku_satei[".googleLikeFields"][] = "price_per_parent_stone";
$tdatahoushoku_satei[".googleLikeFields"][] = "price_per_aside_stone";
$tdatahoushoku_satei[".googleLikeFields"][] = "price_secret";
$tdatahoushoku_satei[".googleLikeFields"][] = "sales_price_secret";
$tdatahoushoku_satei[".googleLikeFields"][] = "line";
$tdatahoushoku_satei[".googleLikeFields"][] = "item_name";
$tdatahoushoku_satei[".googleLikeFields"][] = "yahoo_color_id";
$tdatahoushoku_satei[".googleLikeFields"][] = "serial_number";
$tdatahoushoku_satei[".googleLikeFields"][] = "search_keyword";
$tdatahoushoku_satei[".googleLikeFields"][] = "stamp";
$tdatahoushoku_satei[".googleLikeFields"][] = "motif";
$tdatahoushoku_satei[".googleLikeFields"][] = "Setting";
$tdatahoushoku_satei[".googleLikeFields"][] = "processing";
$tdatahoushoku_satei[".googleLikeFields"][] = "Ring_size";
$tdatahoushoku_satei[".googleLikeFields"][] = "ecc_seq";
$tdatahoushoku_satei[".googleLikeFields"][] = "yahoo_junle";
$tdatahoushoku_satei[".googleLikeFields"][] = "logo";
$tdatahoushoku_satei[".googleLikeFields"][] = "parts";
$tdatahoushoku_satei[".googleLikeFields"][] = "guarantee";
$tdatahoushoku_satei[".googleLikeFields"][] = "errors";
$tdatahoushoku_satei[".googleLikeFields"][] = "designer";
$tdatahoushoku_satei[".googleLikeFields"][] = "hahakai";
$tdatahoushoku_satei[".googleLikeFields"][] = "effect";
$tdatahoushoku_satei[".googleLikeFields"][] = "shape";
$tdatahoushoku_satei[".googleLikeFields"][] = "cutting_style";
$tdatahoushoku_satei[".googleLikeFields"][] = "chain_type";
$tdatahoushoku_satei[".googleLikeFields"][] = "number_of_stones";
$tdatahoushoku_satei[".googleLikeFields"][] = "satei_error";
$tdatahoushoku_satei[".googleLikeFields"][] = "producing_area";
$tdatahoushoku_satei[".googleLikeFields"][] = "shape_supplement";
$tdatahoushoku_satei[".googleLikeFields"][] = "side_gem";
$tdatahoushoku_satei[".googleLikeFields"][] = "product_style";
$tdatahoushoku_satei[".googleLikeFields"][] = "unit";
$tdatahoushoku_satei[".googleLikeFields"][] = "hall_mark";
$tdatahoushoku_satei[".googleLikeFields"][] = "plate";
$tdatahoushoku_satei[".googleLikeFields"][] = "official_url";

$tdatahoushoku_satei[".panelSearchFields"] = array();
$tdatahoushoku_satei[".searchPanelOptions"] = array();
$tdatahoushoku_satei[".panelSearchFields"][] = "product_num";
	$tdatahoushoku_satei[".panelSearchFields"][] = "category_id";
	$tdatahoushoku_satei[".panelSearchFields"][] = "sub_category_id1";
	$tdatahoushoku_satei[".panelSearchFields"][] = "yahoo_sex";
	$tdatahoushoku_satei[".panelSearchFields"][] = "yahoo_condition2";
	
$tdatahoushoku_satei[".advSearchFields"] = array();
$tdatahoushoku_satei[".advSearchFields"][] = "product_num";
$tdatahoushoku_satei[".advSearchFields"][] = "category_id";
$tdatahoushoku_satei[".advSearchFields"][] = "sub_category_id1";
$tdatahoushoku_satei[".advSearchFields"][] = "yahoo_sex";
$tdatahoushoku_satei[".advSearchFields"][] = "yahoo_condition2";
$tdatahoushoku_satei[".advSearchFields"][] = "ecc_seq";
$tdatahoushoku_satei[".advSearchFields"][] = "status";
$tdatahoushoku_satei[".advSearchFields"][] = "satei_by";
$tdatahoushoku_satei[".advSearchFields"][] = "title";
$tdatahoushoku_satei[".advSearchFields"][] = "product_id";
$tdatahoushoku_satei[".advSearchFields"][] = "yahoo_sinaban";
$tdatahoushoku_satei[".advSearchFields"][] = "price";
$tdatahoushoku_satei[".advSearchFields"][] = "sales_price";
$tdatahoushoku_satei[".advSearchFields"][] = "description";
$tdatahoushoku_satei[".advSearchFields"][] = "yahoo_kataban";
$tdatahoushoku_satei[".advSearchFields"][] = "yahoo_sozai";
$tdatahoushoku_satei[".advSearchFields"][] = "yahoo_size";
$tdatahoushoku_satei[".advSearchFields"][] = "yahoo_condition1";
$tdatahoushoku_satei[".advSearchFields"][] = "remark";
$tdatahoushoku_satei[".advSearchFields"][] = "yahoo_fuzokuhin";
$tdatahoushoku_satei[".advSearchFields"][] = "yahoo_sankou_uwadai";
$tdatahoushoku_satei[".advSearchFields"][] = "season";
$tdatahoushoku_satei[".advSearchFields"][] = "yahoo_title";
$tdatahoushoku_satei[".advSearchFields"][] = "goods_title";
$tdatahoushoku_satei[".advSearchFields"][] = "raku_title";
$tdatahoushoku_satei[".advSearchFields"][] = "search_keyword";
$tdatahoushoku_satei[".advSearchFields"][] = "stamp";
$tdatahoushoku_satei[".advSearchFields"][] = "processing";
$tdatahoushoku_satei[".advSearchFields"][] = "label_output_flag";
$tdatahoushoku_satei[".advSearchFields"][] = "Ring_size";
$tdatahoushoku_satei[".advSearchFields"][] = "comment";
$tdatahoushoku_satei[".advSearchFields"][] = "satei_hi";
$tdatahoushoku_satei[".advSearchFields"][] = "gold_property";
$tdatahoushoku_satei[".advSearchFields"][] = "ichiba_title";
$tdatahoushoku_satei[".advSearchFields"][] = "Gram";
$tdatahoushoku_satei[".advSearchFields"][] = "Parent_stone";
$tdatahoushoku_satei[".advSearchFields"][] = "Aside_stone";
$tdatahoushoku_satei[".advSearchFields"][] = "Appraiser";
$tdatahoushoku_satei[".advSearchFields"][] = "Remarks";
$tdatahoushoku_satei[".advSearchFields"][] = "Destination_selling";
$tdatahoushoku_satei[".advSearchFields"][] = "Finish";
$tdatahoushoku_satei[".advSearchFields"][] = "Discrimination";
$tdatahoushoku_satei[".advSearchFields"][] = "accessories";
$tdatahoushoku_satei[".advSearchFields"][] = "priority";
$tdatahoushoku_satei[".advSearchFields"][] = "A_storage";
$tdatahoushoku_satei[".advSearchFields"][] = "price_per_gram";
$tdatahoushoku_satei[".advSearchFields"][] = "price_per_parent_stone";
$tdatahoushoku_satei[".advSearchFields"][] = "price_per_aside_stone";
$tdatahoushoku_satei[".advSearchFields"][] = "price_secret";
$tdatahoushoku_satei[".advSearchFields"][] = "sales_price_secret";
$tdatahoushoku_satei[".advSearchFields"][] = "line";
$tdatahoushoku_satei[".advSearchFields"][] = "item_name";
$tdatahoushoku_satei[".advSearchFields"][] = "serial_number";
$tdatahoushoku_satei[".advSearchFields"][] = "motif";
$tdatahoushoku_satei[".advSearchFields"][] = "Setting";
$tdatahoushoku_satei[".advSearchFields"][] = "logo";
$tdatahoushoku_satei[".advSearchFields"][] = "parts";
$tdatahoushoku_satei[".advSearchFields"][] = "guarantee";
$tdatahoushoku_satei[".advSearchFields"][] = "designer";
$tdatahoushoku_satei[".advSearchFields"][] = "errors";
$tdatahoushoku_satei[".advSearchFields"][] = "cutting_style";
$tdatahoushoku_satei[".advSearchFields"][] = "chain_type";
$tdatahoushoku_satei[".advSearchFields"][] = "shape";
$tdatahoushoku_satei[".advSearchFields"][] = "effect";
$tdatahoushoku_satei[".advSearchFields"][] = "hahakai";
$tdatahoushoku_satei[".advSearchFields"][] = "number_of_stones";
$tdatahoushoku_satei[".advSearchFields"][] = "product_style";
$tdatahoushoku_satei[".advSearchFields"][] = "producing_area";
$tdatahoushoku_satei[".advSearchFields"][] = "satei_error";
$tdatahoushoku_satei[".advSearchFields"][] = "shape_supplement";
$tdatahoushoku_satei[".advSearchFields"][] = "side_gem";
$tdatahoushoku_satei[".advSearchFields"][] = "unit";
$tdatahoushoku_satei[".advSearchFields"][] = "plate";
$tdatahoushoku_satei[".advSearchFields"][] = "hall_mark";

$tdatahoushoku_satei[".tableType"] = "list";

$tdatahoushoku_satei[".printerPageOrientation"] = 0;
$tdatahoushoku_satei[".nPrinterPageScale"] = 100;

$tdatahoushoku_satei[".nPrinterSplitRecords"] = 40;

$tdatahoushoku_satei[".nPrinterPDFSplitRecords"] = 40;



$tdatahoushoku_satei[".geocodingEnabled"] = false;





$tdatahoushoku_satei[".listGridLayout"] = 3;





// view page pdf

// print page pdf

$tdatahoushoku_satei[".totalsFields"] = array();
$tdatahoushoku_satei[".totalsFields"][] = array(
	"fName" => "price",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');

$tdatahoushoku_satei[".pageSize"] = 20;

$tdatahoushoku_satei[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `shouhin`.`product_id` DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatahoushoku_satei[".strOrderBy"] = $tstrOrderBy;

$tdatahoushoku_satei[".orderindexes"] = array();
$tdatahoushoku_satei[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "`shouhin`.`product_id`");

$tdatahoushoku_satei[".sqlHead"] = "SELECT `shouhin`.`product_id`,  `shouhin`.`category_id`,  `shouhin`.`goods_title`,  `shouhin`.`title`,  `shouhin`.`sub_category_id1`,  `shouhin`.`ecc_id`,  `shouhin`.`price`,  `shouhin`.`yahoo`,  `shouhin`.`remark`,  `shouhin`.`sales_price`,  `shouhin`.`description`,  `shouhin`.`status`,  `shouhin`.`product_num`,  `shouhin`.`yahoo_size`,  `shouhin`.`yahoo_title`,  `shouhin`.`yahoo_sankou_uwadai`,  `shouhin`.`yahoo_sozai`,  `shouhin`.`yahoo_kataban`,  `shouhin`.`yahoo_condition1`,  `shouhin`.`yahoo_condition2`,  `shouhin`.`yahoo_fuzokuhin`,  `shouhin`.`yahoo_sinaban`,  `shouhin`.`yahoo_saisun_sha`,  `shouhin`.`yahoo_sex`,  `shouhin`.`box_id`,  `shouhin`.`nyuukin_price`,  `shouhin`.`updated_by`,  `shouhin`.`raku_title`,  `shouhin`.`timesta`,  `shouhin`.`saisun_start`,  `shouhin`.`saisun_end`,  `shouhin`.`label_output_flag`,  `shouhin`.`season`,  `shouhin`.`kanryou_henbi`,  `shouhin`.`box_sort`,  `shouhin`.`satei_by`,  `shouhin`.`kaitori_by`,  `shouhin`.`comment`,  `shouhin`.`satei_hi`,  `shouhin`.`kaitory_hi`,  `shouhin`.`REG_PHOTOGRAPHER`,  `shouhin`.`REG_PACKINGS`,  `shouhin`.`REG_KAKOU_DATE`,  `shouhin`.`REG_KAKOU`,  `shouhin`.`REG_EXHIBITOR`,  `shouhin`.`REG_PHOTOGRAPHER_DATE`,  `shouhin`.`DT_PACKING_DATE`,  `shouhin`.`DT_UP_DATE`,  `shouhin`.`AWAZU_DATE`,  `shouhin`.`AWAZU_NIN`,  `shouhin`.`sabun_date`,  `shouhin`.`browseid`,  `shouhin`.`browsenode`,  `shouhin`.`gold_property`,  `shouhin`.`ichiba_title`,  `shouhin`.`Gram`,  `shouhin`.`Parent_stone`,  `shouhin`.`Aside_stone`,  `shouhin`.`Appraiser`,  `shouhin`.`Remarks`,  `shouhin`.`Destination_selling`,  `shouhin`.`Finish`,  `shouhin`.`Discrimination`,  `shouhin`.`accessories`,  `shouhin`.`priority`,  `shouhin`.`A_storage`,  `shouhin`.`price_per_gram`,  `shouhin`.`price_per_parent_stone`,  `shouhin`.`price_per_aside_stone`,  `shouhin`.`price_secret`,  `shouhin`.`sales_price_secret`,  `shouhin`.`eq`,  `shouhin`.`en`,  `shouhin`.`line`,  `shouhin`.`item_name`,  `shouhin`.`yahoo_color_id`,  `shouhin`.`serial_number`,  `shouhin`.`Exhibition_Date`,  `shouhin`.`search_keyword`,  `shouhin`.`stamp`,  `shouhin`.`motif`,  `shouhin`.`Setting`,  `shouhin`.`processing`,  `shouhin`.`Ring_size`,  `shouhin`.`price_for_site`,  `shouhin`.`yahoo_category_id`,  `shouhin`.`Qty`,  `shouhin`.`sales_period`,  `shouhin`.`starting_price`,  `Eoc`.`ecc_seq`,  `shouhin`.`yahoo_junle`,  `shouhin`.`logo`,  `shouhin`.`parts`,  `shouhin`.`guarantee`,  `shouhin`.`errors`,  `shouhin`.`designer`,  `shouhin`.`hahakai`,  `shouhin`.`effect`,  `shouhin`.`shape`,  `shouhin`.`cutting_style`,  `shouhin`.`chain_type`,  `shouhin`.`number_of_stones`,  `shouhin`.`satei_error`,  `shouhin`.`producing_area`,  `shouhin`.`shape_supplement`,  `shouhin`.`side_gem`,  `shouhin`.`product_style`,  `shouhin`.`unit`,  `shouhin`.`hall_mark`,  `shouhin`.`plate`,  `shouhin`.`official_url`";
$tdatahoushoku_satei[".sqlFrom"] = "FROM `shouhin`  LEFT OUTER JOIN `Eoc` ON `shouhin`.`ecc_id` = `Eoc`.`ecc_id`";
$tdatahoushoku_satei[".sqlWhereExpr"] = "(`shouhin`.`status` =32)";
$tdatahoushoku_satei[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatahoushoku_satei[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatahoushoku_satei[".arrGroupsPerPage"] = $arrGPP;

$tdatahoushoku_satei[".highlightSearchResults"] = true;

$tableKeyshoushoku_satei = array();
$tableKeyshoushoku_satei[] = "product_id";
$tdatahoushoku_satei[".Keys"] = $tableKeyshoushoku_satei;

$tdatahoushoku_satei[".listFields"] = array();
$tdatahoushoku_satei[".listFields"][] = "label_output_flag";
$tdatahoushoku_satei[".listFields"][] = "status";
$tdatahoushoku_satei[".listFields"][] = "product_id";
$tdatahoushoku_satei[".listFields"][] = "product_num";
$tdatahoushoku_satei[".listFields"][] = "category_id";
$tdatahoushoku_satei[".listFields"][] = "sub_category_id1";
$tdatahoushoku_satei[".listFields"][] = "yahoo_sex";
$tdatahoushoku_satei[".listFields"][] = "yahoo_condition2";
$tdatahoushoku_satei[".listFields"][] = "logo";
$tdatahoushoku_satei[".listFields"][] = "parts";
$tdatahoushoku_satei[".listFields"][] = "guarantee";
$tdatahoushoku_satei[".listFields"][] = "serial_number";
$tdatahoushoku_satei[".listFields"][] = "designer";
$tdatahoushoku_satei[".listFields"][] = "line";
$tdatahoushoku_satei[".listFields"][] = "item_name";
$tdatahoushoku_satei[".listFields"][] = "number_of_stones";
$tdatahoushoku_satei[".listFields"][] = "shape_supplement";
$tdatahoushoku_satei[".listFields"][] = "side_gem";
$tdatahoushoku_satei[".listFields"][] = "product_style";
$tdatahoushoku_satei[".listFields"][] = "yahoo_sozai";
$tdatahoushoku_satei[".listFields"][] = "ichiba_title";
$tdatahoushoku_satei[".listFields"][] = "hall_mark";
$tdatahoushoku_satei[".listFields"][] = "plate";
$tdatahoushoku_satei[".listFields"][] = "gold_property";
$tdatahoushoku_satei[".listFields"][] = "Gram";
$tdatahoushoku_satei[".listFields"][] = "unit";
$tdatahoushoku_satei[".listFields"][] = "Parent_stone";
$tdatahoushoku_satei[".listFields"][] = "Aside_stone";
$tdatahoushoku_satei[".listFields"][] = "Ring_size";
$tdatahoushoku_satei[".listFields"][] = "price_per_gram";
$tdatahoushoku_satei[".listFields"][] = "price_per_parent_stone";
$tdatahoushoku_satei[".listFields"][] = "price_per_aside_stone";
$tdatahoushoku_satei[".listFields"][] = "motif";
$tdatahoushoku_satei[".listFields"][] = "producing_area";
$tdatahoushoku_satei[".listFields"][] = "hahakai";
$tdatahoushoku_satei[".listFields"][] = "effect";
$tdatahoushoku_satei[".listFields"][] = "shape";
$tdatahoushoku_satei[".listFields"][] = "cutting_style";
$tdatahoushoku_satei[".listFields"][] = "Setting";
$tdatahoushoku_satei[".listFields"][] = "processing";
$tdatahoushoku_satei[".listFields"][] = "chain_type";
$tdatahoushoku_satei[".listFields"][] = "Appraiser";
$tdatahoushoku_satei[".listFields"][] = "Remarks";
$tdatahoushoku_satei[".listFields"][] = "yahoo_kataban";
$tdatahoushoku_satei[".listFields"][] = "stamp";
$tdatahoushoku_satei[".listFields"][] = "price";
$tdatahoushoku_satei[".listFields"][] = "comment";
$tdatahoushoku_satei[".listFields"][] = "sales_price";
$tdatahoushoku_satei[".listFields"][] = "yahoo_sankou_uwadai";
$tdatahoushoku_satei[".listFields"][] = "description";
$tdatahoushoku_satei[".listFields"][] = "Destination_selling";
$tdatahoushoku_satei[".listFields"][] = "Finish";
$tdatahoushoku_satei[".listFields"][] = "Discrimination";
$tdatahoushoku_satei[".listFields"][] = "accessories";
$tdatahoushoku_satei[".listFields"][] = "priority";
$tdatahoushoku_satei[".listFields"][] = "A_storage";
$tdatahoushoku_satei[".listFields"][] = "satei_by";
$tdatahoushoku_satei[".listFields"][] = "satei_hi";
$tdatahoushoku_satei[".listFields"][] = "price_secret";
$tdatahoushoku_satei[".listFields"][] = "sales_price_secret";
$tdatahoushoku_satei[".listFields"][] = "errors";
$tdatahoushoku_satei[".listFields"][] = "satei_error";

$tdatahoushoku_satei[".hideMobileList"] = array();


$tdatahoushoku_satei[".viewFields"] = array();

$tdatahoushoku_satei[".addFields"] = array();

$tdatahoushoku_satei[".masterListFields"] = array();
$tdatahoushoku_satei[".masterListFields"][] = "ecc_seq";
$tdatahoushoku_satei[".masterListFields"][] = "yahoo_junle";
$tdatahoushoku_satei[".masterListFields"][] = "logo";
$tdatahoushoku_satei[".masterListFields"][] = "parts";
$tdatahoushoku_satei[".masterListFields"][] = "guarantee";
$tdatahoushoku_satei[".masterListFields"][] = "errors";
$tdatahoushoku_satei[".masterListFields"][] = "designer";
$tdatahoushoku_satei[".masterListFields"][] = "hahakai";
$tdatahoushoku_satei[".masterListFields"][] = "effect";
$tdatahoushoku_satei[".masterListFields"][] = "shape";
$tdatahoushoku_satei[".masterListFields"][] = "cutting_style";
$tdatahoushoku_satei[".masterListFields"][] = "chain_type";
$tdatahoushoku_satei[".masterListFields"][] = "number_of_stones";
$tdatahoushoku_satei[".masterListFields"][] = "satei_error";
$tdatahoushoku_satei[".masterListFields"][] = "producing_area";
$tdatahoushoku_satei[".masterListFields"][] = "shape_supplement";
$tdatahoushoku_satei[".masterListFields"][] = "side_gem";
$tdatahoushoku_satei[".masterListFields"][] = "product_style";
$tdatahoushoku_satei[".masterListFields"][] = "unit";
$tdatahoushoku_satei[".masterListFields"][] = "hall_mark";
$tdatahoushoku_satei[".masterListFields"][] = "plate";
$tdatahoushoku_satei[".masterListFields"][] = "official_url";
$tdatahoushoku_satei[".masterListFields"][] = "status";
$tdatahoushoku_satei[".masterListFields"][] = "satei_by";
$tdatahoushoku_satei[".masterListFields"][] = "category_id";
$tdatahoushoku_satei[".masterListFields"][] = "title";
$tdatahoushoku_satei[".masterListFields"][] = "sub_category_id1";
$tdatahoushoku_satei[".masterListFields"][] = "product_id";
$tdatahoushoku_satei[".masterListFields"][] = "ecc_id";
$tdatahoushoku_satei[".masterListFields"][] = "yahoo";
$tdatahoushoku_satei[".masterListFields"][] = "yahoo_sinaban";
$tdatahoushoku_satei[".masterListFields"][] = "price";
$tdatahoushoku_satei[".masterListFields"][] = "sales_price";
$tdatahoushoku_satei[".masterListFields"][] = "yahoo_sex";
$tdatahoushoku_satei[".masterListFields"][] = "product_num";
$tdatahoushoku_satei[".masterListFields"][] = "description";
$tdatahoushoku_satei[".masterListFields"][] = "yahoo_kataban";
$tdatahoushoku_satei[".masterListFields"][] = "yahoo_sozai";
$tdatahoushoku_satei[".masterListFields"][] = "yahoo_size";
$tdatahoushoku_satei[".masterListFields"][] = "yahoo_condition1";
$tdatahoushoku_satei[".masterListFields"][] = "yahoo_condition2";
$tdatahoushoku_satei[".masterListFields"][] = "remark";
$tdatahoushoku_satei[".masterListFields"][] = "yahoo_fuzokuhin";
$tdatahoushoku_satei[".masterListFields"][] = "yahoo_sankou_uwadai";
$tdatahoushoku_satei[".masterListFields"][] = "yahoo_saisun_sha";
$tdatahoushoku_satei[".masterListFields"][] = "season";
$tdatahoushoku_satei[".masterListFields"][] = "yahoo_title";
$tdatahoushoku_satei[".masterListFields"][] = "box_id";
$tdatahoushoku_satei[".masterListFields"][] = "goods_title";
$tdatahoushoku_satei[".masterListFields"][] = "nyuukin_price";
$tdatahoushoku_satei[".masterListFields"][] = "updated_by";
$tdatahoushoku_satei[".masterListFields"][] = "raku_title";
$tdatahoushoku_satei[".masterListFields"][] = "search_keyword";
$tdatahoushoku_satei[".masterListFields"][] = "stamp";
$tdatahoushoku_satei[".masterListFields"][] = "timesta";
$tdatahoushoku_satei[".masterListFields"][] = "processing";
$tdatahoushoku_satei[".masterListFields"][] = "saisun_start";
$tdatahoushoku_satei[".masterListFields"][] = "saisun_end";
$tdatahoushoku_satei[".masterListFields"][] = "label_output_flag";
$tdatahoushoku_satei[".masterListFields"][] = "Ring_size";
$tdatahoushoku_satei[".masterListFields"][] = "price_for_site";
$tdatahoushoku_satei[".masterListFields"][] = "kanryou_henbi";
$tdatahoushoku_satei[".masterListFields"][] = "yahoo_category_id";
$tdatahoushoku_satei[".masterListFields"][] = "box_sort";
$tdatahoushoku_satei[".masterListFields"][] = "Qty";
$tdatahoushoku_satei[".masterListFields"][] = "sales_period";
$tdatahoushoku_satei[".masterListFields"][] = "kaitori_by";
$tdatahoushoku_satei[".masterListFields"][] = "starting_price";
$tdatahoushoku_satei[".masterListFields"][] = "comment";
$tdatahoushoku_satei[".masterListFields"][] = "satei_hi";
$tdatahoushoku_satei[".masterListFields"][] = "kaitory_hi";
$tdatahoushoku_satei[".masterListFields"][] = "REG_PHOTOGRAPHER";
$tdatahoushoku_satei[".masterListFields"][] = "REG_PACKINGS";
$tdatahoushoku_satei[".masterListFields"][] = "REG_KAKOU_DATE";
$tdatahoushoku_satei[".masterListFields"][] = "REG_KAKOU";
$tdatahoushoku_satei[".masterListFields"][] = "REG_EXHIBITOR";
$tdatahoushoku_satei[".masterListFields"][] = "REG_PHOTOGRAPHER_DATE";
$tdatahoushoku_satei[".masterListFields"][] = "DT_PACKING_DATE";
$tdatahoushoku_satei[".masterListFields"][] = "DT_UP_DATE";
$tdatahoushoku_satei[".masterListFields"][] = "AWAZU_DATE";
$tdatahoushoku_satei[".masterListFields"][] = "AWAZU_NIN";
$tdatahoushoku_satei[".masterListFields"][] = "sabun_date";
$tdatahoushoku_satei[".masterListFields"][] = "browseid";
$tdatahoushoku_satei[".masterListFields"][] = "browsenode";
$tdatahoushoku_satei[".masterListFields"][] = "gold_property";
$tdatahoushoku_satei[".masterListFields"][] = "ichiba_title";
$tdatahoushoku_satei[".masterListFields"][] = "Gram";
$tdatahoushoku_satei[".masterListFields"][] = "Parent_stone";
$tdatahoushoku_satei[".masterListFields"][] = "Aside_stone";
$tdatahoushoku_satei[".masterListFields"][] = "Appraiser";
$tdatahoushoku_satei[".masterListFields"][] = "Remarks";
$tdatahoushoku_satei[".masterListFields"][] = "Destination_selling";
$tdatahoushoku_satei[".masterListFields"][] = "Finish";
$tdatahoushoku_satei[".masterListFields"][] = "Discrimination";
$tdatahoushoku_satei[".masterListFields"][] = "accessories";
$tdatahoushoku_satei[".masterListFields"][] = "priority";
$tdatahoushoku_satei[".masterListFields"][] = "A_storage";
$tdatahoushoku_satei[".masterListFields"][] = "price_per_gram";
$tdatahoushoku_satei[".masterListFields"][] = "price_per_parent_stone";
$tdatahoushoku_satei[".masterListFields"][] = "price_per_aside_stone";
$tdatahoushoku_satei[".masterListFields"][] = "price_secret";
$tdatahoushoku_satei[".masterListFields"][] = "sales_price_secret";
$tdatahoushoku_satei[".masterListFields"][] = "eq";
$tdatahoushoku_satei[".masterListFields"][] = "en";
$tdatahoushoku_satei[".masterListFields"][] = "line";
$tdatahoushoku_satei[".masterListFields"][] = "item_name";
$tdatahoushoku_satei[".masterListFields"][] = "yahoo_color_id";
$tdatahoushoku_satei[".masterListFields"][] = "serial_number";
$tdatahoushoku_satei[".masterListFields"][] = "Exhibition_Date";
$tdatahoushoku_satei[".masterListFields"][] = "motif";
$tdatahoushoku_satei[".masterListFields"][] = "Setting";

$tdatahoushoku_satei[".inlineAddFields"] = array();
$tdatahoushoku_satei[".inlineAddFields"][] = "label_output_flag";
$tdatahoushoku_satei[".inlineAddFields"][] = "status";
$tdatahoushoku_satei[".inlineAddFields"][] = "product_num";
$tdatahoushoku_satei[".inlineAddFields"][] = "category_id";
$tdatahoushoku_satei[".inlineAddFields"][] = "sub_category_id1";
$tdatahoushoku_satei[".inlineAddFields"][] = "yahoo_sex";
$tdatahoushoku_satei[".inlineAddFields"][] = "yahoo_condition2";
$tdatahoushoku_satei[".inlineAddFields"][] = "logo";
$tdatahoushoku_satei[".inlineAddFields"][] = "parts";
$tdatahoushoku_satei[".inlineAddFields"][] = "guarantee";
$tdatahoushoku_satei[".inlineAddFields"][] = "serial_number";
$tdatahoushoku_satei[".inlineAddFields"][] = "designer";
$tdatahoushoku_satei[".inlineAddFields"][] = "line";
$tdatahoushoku_satei[".inlineAddFields"][] = "item_name";
$tdatahoushoku_satei[".inlineAddFields"][] = "number_of_stones";
$tdatahoushoku_satei[".inlineAddFields"][] = "shape_supplement";
$tdatahoushoku_satei[".inlineAddFields"][] = "side_gem";
$tdatahoushoku_satei[".inlineAddFields"][] = "product_style";
$tdatahoushoku_satei[".inlineAddFields"][] = "yahoo_sozai";
$tdatahoushoku_satei[".inlineAddFields"][] = "ichiba_title";
$tdatahoushoku_satei[".inlineAddFields"][] = "hall_mark";
$tdatahoushoku_satei[".inlineAddFields"][] = "plate";
$tdatahoushoku_satei[".inlineAddFields"][] = "gold_property";
$tdatahoushoku_satei[".inlineAddFields"][] = "Gram";
$tdatahoushoku_satei[".inlineAddFields"][] = "unit";
$tdatahoushoku_satei[".inlineAddFields"][] = "Parent_stone";
$tdatahoushoku_satei[".inlineAddFields"][] = "Aside_stone";
$tdatahoushoku_satei[".inlineAddFields"][] = "Ring_size";
$tdatahoushoku_satei[".inlineAddFields"][] = "price_per_gram";
$tdatahoushoku_satei[".inlineAddFields"][] = "price_per_parent_stone";
$tdatahoushoku_satei[".inlineAddFields"][] = "price_per_aside_stone";
$tdatahoushoku_satei[".inlineAddFields"][] = "motif";
$tdatahoushoku_satei[".inlineAddFields"][] = "producing_area";
$tdatahoushoku_satei[".inlineAddFields"][] = "hahakai";
$tdatahoushoku_satei[".inlineAddFields"][] = "effect";
$tdatahoushoku_satei[".inlineAddFields"][] = "shape";
$tdatahoushoku_satei[".inlineAddFields"][] = "cutting_style";
$tdatahoushoku_satei[".inlineAddFields"][] = "Setting";
$tdatahoushoku_satei[".inlineAddFields"][] = "processing";
$tdatahoushoku_satei[".inlineAddFields"][] = "chain_type";
$tdatahoushoku_satei[".inlineAddFields"][] = "Appraiser";
$tdatahoushoku_satei[".inlineAddFields"][] = "Remarks";
$tdatahoushoku_satei[".inlineAddFields"][] = "yahoo_kataban";
$tdatahoushoku_satei[".inlineAddFields"][] = "stamp";
$tdatahoushoku_satei[".inlineAddFields"][] = "price";
$tdatahoushoku_satei[".inlineAddFields"][] = "comment";
$tdatahoushoku_satei[".inlineAddFields"][] = "sales_price";
$tdatahoushoku_satei[".inlineAddFields"][] = "yahoo_sankou_uwadai";
$tdatahoushoku_satei[".inlineAddFields"][] = "description";
$tdatahoushoku_satei[".inlineAddFields"][] = "Destination_selling";
$tdatahoushoku_satei[".inlineAddFields"][] = "Finish";
$tdatahoushoku_satei[".inlineAddFields"][] = "Discrimination";
$tdatahoushoku_satei[".inlineAddFields"][] = "accessories";
$tdatahoushoku_satei[".inlineAddFields"][] = "priority";
$tdatahoushoku_satei[".inlineAddFields"][] = "A_storage";
$tdatahoushoku_satei[".inlineAddFields"][] = "price_secret";
$tdatahoushoku_satei[".inlineAddFields"][] = "sales_price_secret";
$tdatahoushoku_satei[".inlineAddFields"][] = "errors";

$tdatahoushoku_satei[".editFields"] = array();

$tdatahoushoku_satei[".inlineEditFields"] = array();
$tdatahoushoku_satei[".inlineEditFields"][] = "label_output_flag";
$tdatahoushoku_satei[".inlineEditFields"][] = "status";
$tdatahoushoku_satei[".inlineEditFields"][] = "product_num";
$tdatahoushoku_satei[".inlineEditFields"][] = "category_id";
$tdatahoushoku_satei[".inlineEditFields"][] = "sub_category_id1";
$tdatahoushoku_satei[".inlineEditFields"][] = "yahoo_sex";
$tdatahoushoku_satei[".inlineEditFields"][] = "yahoo_condition2";
$tdatahoushoku_satei[".inlineEditFields"][] = "logo";
$tdatahoushoku_satei[".inlineEditFields"][] = "parts";
$tdatahoushoku_satei[".inlineEditFields"][] = "guarantee";
$tdatahoushoku_satei[".inlineEditFields"][] = "serial_number";
$tdatahoushoku_satei[".inlineEditFields"][] = "designer";
$tdatahoushoku_satei[".inlineEditFields"][] = "line";
$tdatahoushoku_satei[".inlineEditFields"][] = "item_name";
$tdatahoushoku_satei[".inlineEditFields"][] = "number_of_stones";
$tdatahoushoku_satei[".inlineEditFields"][] = "shape_supplement";
$tdatahoushoku_satei[".inlineEditFields"][] = "side_gem";
$tdatahoushoku_satei[".inlineEditFields"][] = "product_style";
$tdatahoushoku_satei[".inlineEditFields"][] = "yahoo_sozai";
$tdatahoushoku_satei[".inlineEditFields"][] = "ichiba_title";
$tdatahoushoku_satei[".inlineEditFields"][] = "hall_mark";
$tdatahoushoku_satei[".inlineEditFields"][] = "plate";
$tdatahoushoku_satei[".inlineEditFields"][] = "gold_property";
$tdatahoushoku_satei[".inlineEditFields"][] = "Gram";
$tdatahoushoku_satei[".inlineEditFields"][] = "unit";
$tdatahoushoku_satei[".inlineEditFields"][] = "Parent_stone";
$tdatahoushoku_satei[".inlineEditFields"][] = "Aside_stone";
$tdatahoushoku_satei[".inlineEditFields"][] = "Ring_size";
$tdatahoushoku_satei[".inlineEditFields"][] = "price_per_gram";
$tdatahoushoku_satei[".inlineEditFields"][] = "price_per_parent_stone";
$tdatahoushoku_satei[".inlineEditFields"][] = "price_per_aside_stone";
$tdatahoushoku_satei[".inlineEditFields"][] = "motif";
$tdatahoushoku_satei[".inlineEditFields"][] = "producing_area";
$tdatahoushoku_satei[".inlineEditFields"][] = "hahakai";
$tdatahoushoku_satei[".inlineEditFields"][] = "effect";
$tdatahoushoku_satei[".inlineEditFields"][] = "shape";
$tdatahoushoku_satei[".inlineEditFields"][] = "cutting_style";
$tdatahoushoku_satei[".inlineEditFields"][] = "Setting";
$tdatahoushoku_satei[".inlineEditFields"][] = "processing";
$tdatahoushoku_satei[".inlineEditFields"][] = "chain_type";
$tdatahoushoku_satei[".inlineEditFields"][] = "Appraiser";
$tdatahoushoku_satei[".inlineEditFields"][] = "Remarks";
$tdatahoushoku_satei[".inlineEditFields"][] = "yahoo_kataban";
$tdatahoushoku_satei[".inlineEditFields"][] = "stamp";
$tdatahoushoku_satei[".inlineEditFields"][] = "price";
$tdatahoushoku_satei[".inlineEditFields"][] = "comment";
$tdatahoushoku_satei[".inlineEditFields"][] = "sales_price";
$tdatahoushoku_satei[".inlineEditFields"][] = "yahoo_sankou_uwadai";
$tdatahoushoku_satei[".inlineEditFields"][] = "description";
$tdatahoushoku_satei[".inlineEditFields"][] = "Destination_selling";
$tdatahoushoku_satei[".inlineEditFields"][] = "Finish";
$tdatahoushoku_satei[".inlineEditFields"][] = "Discrimination";
$tdatahoushoku_satei[".inlineEditFields"][] = "accessories";
$tdatahoushoku_satei[".inlineEditFields"][] = "priority";
$tdatahoushoku_satei[".inlineEditFields"][] = "A_storage";
$tdatahoushoku_satei[".inlineEditFields"][] = "price_secret";
$tdatahoushoku_satei[".inlineEditFields"][] = "sales_price_secret";
$tdatahoushoku_satei[".inlineEditFields"][] = "errors";

$tdatahoushoku_satei[".updateSelectedFields"] = array();


$tdatahoushoku_satei[".exportFields"] = array();
$tdatahoushoku_satei[".exportFields"][] = "label_output_flag";
$tdatahoushoku_satei[".exportFields"][] = "status";
$tdatahoushoku_satei[".exportFields"][] = "product_id";
$tdatahoushoku_satei[".exportFields"][] = "yahoo_junle";
$tdatahoushoku_satei[".exportFields"][] = "category_id";
$tdatahoushoku_satei[".exportFields"][] = "sub_category_id1";
$tdatahoushoku_satei[".exportFields"][] = "yahoo_sex";
$tdatahoushoku_satei[".exportFields"][] = "yahoo_condition2";
$tdatahoushoku_satei[".exportFields"][] = "logo";
$tdatahoushoku_satei[".exportFields"][] = "parts";
$tdatahoushoku_satei[".exportFields"][] = "serial_number";
$tdatahoushoku_satei[".exportFields"][] = "guarantee";
$tdatahoushoku_satei[".exportFields"][] = "designer";
$tdatahoushoku_satei[".exportFields"][] = "line";
$tdatahoushoku_satei[".exportFields"][] = "item_name";
$tdatahoushoku_satei[".exportFields"][] = "number_of_stones";
$tdatahoushoku_satei[".exportFields"][] = "shape_supplement";
$tdatahoushoku_satei[".exportFields"][] = "side_gem";
$tdatahoushoku_satei[".exportFields"][] = "product_style";
$tdatahoushoku_satei[".exportFields"][] = "yahoo_sozai";
$tdatahoushoku_satei[".exportFields"][] = "ichiba_title";
$tdatahoushoku_satei[".exportFields"][] = "hall_mark";
$tdatahoushoku_satei[".exportFields"][] = "plate";
$tdatahoushoku_satei[".exportFields"][] = "gold_property";
$tdatahoushoku_satei[".exportFields"][] = "Gram";
$tdatahoushoku_satei[".exportFields"][] = "unit";
$tdatahoushoku_satei[".exportFields"][] = "Parent_stone";
$tdatahoushoku_satei[".exportFields"][] = "Aside_stone";
$tdatahoushoku_satei[".exportFields"][] = "Ring_size";
$tdatahoushoku_satei[".exportFields"][] = "price_per_gram";
$tdatahoushoku_satei[".exportFields"][] = "price_per_parent_stone";
$tdatahoushoku_satei[".exportFields"][] = "price_per_aside_stone";
$tdatahoushoku_satei[".exportFields"][] = "motif";
$tdatahoushoku_satei[".exportFields"][] = "producing_area";
$tdatahoushoku_satei[".exportFields"][] = "hahakai";
$tdatahoushoku_satei[".exportFields"][] = "effect";
$tdatahoushoku_satei[".exportFields"][] = "shape";
$tdatahoushoku_satei[".exportFields"][] = "cutting_style";
$tdatahoushoku_satei[".exportFields"][] = "Setting";
$tdatahoushoku_satei[".exportFields"][] = "processing";
$tdatahoushoku_satei[".exportFields"][] = "chain_type";
$tdatahoushoku_satei[".exportFields"][] = "Appraiser";
$tdatahoushoku_satei[".exportFields"][] = "Remarks";
$tdatahoushoku_satei[".exportFields"][] = "yahoo_kataban";
$tdatahoushoku_satei[".exportFields"][] = "stamp";
$tdatahoushoku_satei[".exportFields"][] = "eq";
$tdatahoushoku_satei[".exportFields"][] = "price";
$tdatahoushoku_satei[".exportFields"][] = "en";
$tdatahoushoku_satei[".exportFields"][] = "comment";
$tdatahoushoku_satei[".exportFields"][] = "sales_price";
$tdatahoushoku_satei[".exportFields"][] = "yahoo_sankou_uwadai";
$tdatahoushoku_satei[".exportFields"][] = "description";
$tdatahoushoku_satei[".exportFields"][] = "Destination_selling";
$tdatahoushoku_satei[".exportFields"][] = "Finish";
$tdatahoushoku_satei[".exportFields"][] = "Discrimination";
$tdatahoushoku_satei[".exportFields"][] = "accessories";
$tdatahoushoku_satei[".exportFields"][] = "priority";
$tdatahoushoku_satei[".exportFields"][] = "A_storage";
$tdatahoushoku_satei[".exportFields"][] = "satei_by";
$tdatahoushoku_satei[".exportFields"][] = "satei_hi";
$tdatahoushoku_satei[".exportFields"][] = "price_secret";
$tdatahoushoku_satei[".exportFields"][] = "sales_price_secret";
$tdatahoushoku_satei[".exportFields"][] = "product_num";
$tdatahoushoku_satei[".exportFields"][] = "errors";
$tdatahoushoku_satei[".exportFields"][] = "satei_error";

$tdatahoushoku_satei[".importFields"] = array();
$tdatahoushoku_satei[".importFields"][] = "product_id";
$tdatahoushoku_satei[".importFields"][] = "category_id";
$tdatahoushoku_satei[".importFields"][] = "sub_category_id1";
$tdatahoushoku_satei[".importFields"][] = "price";
$tdatahoushoku_satei[".importFields"][] = "sales_price";
$tdatahoushoku_satei[".importFields"][] = "description";
$tdatahoushoku_satei[".importFields"][] = "status";
$tdatahoushoku_satei[".importFields"][] = "product_num";
$tdatahoushoku_satei[".importFields"][] = "yahoo_sankou_uwadai";
$tdatahoushoku_satei[".importFields"][] = "yahoo_sozai";
$tdatahoushoku_satei[".importFields"][] = "yahoo_kataban";
$tdatahoushoku_satei[".importFields"][] = "yahoo_condition2";
$tdatahoushoku_satei[".importFields"][] = "yahoo_sex";
$tdatahoushoku_satei[".importFields"][] = "label_output_flag";
$tdatahoushoku_satei[".importFields"][] = "satei_by";
$tdatahoushoku_satei[".importFields"][] = "comment";
$tdatahoushoku_satei[".importFields"][] = "satei_hi";
$tdatahoushoku_satei[".importFields"][] = "gold_property";
$tdatahoushoku_satei[".importFields"][] = "ichiba_title";
$tdatahoushoku_satei[".importFields"][] = "Gram";
$tdatahoushoku_satei[".importFields"][] = "Parent_stone";
$tdatahoushoku_satei[".importFields"][] = "Aside_stone";
$tdatahoushoku_satei[".importFields"][] = "Appraiser";
$tdatahoushoku_satei[".importFields"][] = "Remarks";
$tdatahoushoku_satei[".importFields"][] = "Destination_selling";
$tdatahoushoku_satei[".importFields"][] = "Finish";
$tdatahoushoku_satei[".importFields"][] = "Discrimination";
$tdatahoushoku_satei[".importFields"][] = "accessories";
$tdatahoushoku_satei[".importFields"][] = "priority";
$tdatahoushoku_satei[".importFields"][] = "A_storage";
$tdatahoushoku_satei[".importFields"][] = "price_per_gram";
$tdatahoushoku_satei[".importFields"][] = "price_per_parent_stone";
$tdatahoushoku_satei[".importFields"][] = "price_per_aside_stone";
$tdatahoushoku_satei[".importFields"][] = "price_secret";
$tdatahoushoku_satei[".importFields"][] = "sales_price_secret";
$tdatahoushoku_satei[".importFields"][] = "line";
$tdatahoushoku_satei[".importFields"][] = "item_name";
$tdatahoushoku_satei[".importFields"][] = "serial_number";
$tdatahoushoku_satei[".importFields"][] = "stamp";
$tdatahoushoku_satei[".importFields"][] = "motif";
$tdatahoushoku_satei[".importFields"][] = "Setting";
$tdatahoushoku_satei[".importFields"][] = "processing";
$tdatahoushoku_satei[".importFields"][] = "Ring_size";
$tdatahoushoku_satei[".importFields"][] = "yahoo_junle";
$tdatahoushoku_satei[".importFields"][] = "logo";
$tdatahoushoku_satei[".importFields"][] = "parts";
$tdatahoushoku_satei[".importFields"][] = "guarantee";
$tdatahoushoku_satei[".importFields"][] = "errors";
$tdatahoushoku_satei[".importFields"][] = "designer";
$tdatahoushoku_satei[".importFields"][] = "hahakai";
$tdatahoushoku_satei[".importFields"][] = "effect";
$tdatahoushoku_satei[".importFields"][] = "shape";
$tdatahoushoku_satei[".importFields"][] = "cutting_style";
$tdatahoushoku_satei[".importFields"][] = "chain_type";
$tdatahoushoku_satei[".importFields"][] = "number_of_stones";
$tdatahoushoku_satei[".importFields"][] = "satei_error";
$tdatahoushoku_satei[".importFields"][] = "producing_area";
$tdatahoushoku_satei[".importFields"][] = "shape_supplement";
$tdatahoushoku_satei[".importFields"][] = "side_gem";
$tdatahoushoku_satei[".importFields"][] = "product_style";
$tdatahoushoku_satei[".importFields"][] = "unit";
$tdatahoushoku_satei[".importFields"][] = "hall_mark";
$tdatahoushoku_satei[".importFields"][] = "plate";

$tdatahoushoku_satei[".printFields"] = array();

//	product_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "product_id";
	$fdata["GoodName"] = "product_id";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("houshoku_satei","product_id");
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




	$tdatahoushoku_satei["product_id"] = $fdata;
//	category_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "category_id";
	$fdata["GoodName"] = "category_id";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("houshoku_satei","category_id");
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




	$tdatahoushoku_satei["category_id"] = $fdata;
//	goods_title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "goods_title";
	$fdata["GoodName"] = "goods_title";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("houshoku_satei","goods_title");
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




	$tdatahoushoku_satei["goods_title"] = $fdata;
//	title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "title";
	$fdata["GoodName"] = "title";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("houshoku_satei","title");
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




	$tdatahoushoku_satei["title"] = $fdata;
//	sub_category_id1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "sub_category_id1";
	$fdata["GoodName"] = "sub_category_id1";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("houshoku_satei","sub_category_id1");
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




	$tdatahoushoku_satei["sub_category_id1"] = $fdata;
//	ecc_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "ecc_id";
	$fdata["GoodName"] = "ecc_id";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("houshoku_satei","ecc_id");
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








	$tdatahoushoku_satei["ecc_id"] = $fdata;
//	price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "price";
	$fdata["GoodName"] = "price";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("houshoku_satei","price");
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




	$tdatahoushoku_satei["price"] = $fdata;
//	yahoo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "yahoo";
	$fdata["GoodName"] = "yahoo";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("houshoku_satei","yahoo");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "yahoo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`yahoo`";

	
	
			
				$fdata["UploadFolder"] = "files";

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








	$tdatahoushoku_satei["yahoo"] = $fdata;
//	remark
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "remark";
	$fdata["GoodName"] = "remark";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("houshoku_satei","remark");
	$fdata["FieldType"] = 201;

	
	
	
			
	
	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdatahoushoku_satei["remark"] = $fdata;
//	sales_price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "sales_price";
	$fdata["GoodName"] = "sales_price";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("houshoku_satei","sales_price");
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




	$tdatahoushoku_satei["sales_price"] = $fdata;
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("houshoku_satei","description");
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




	$tdatahoushoku_satei["description"] = $fdata;
//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("houshoku_satei","status");
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




	$tdatahoushoku_satei["status"] = $fdata;
//	product_num
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "product_num";
	$fdata["GoodName"] = "product_num";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("houshoku_satei","product_num");
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

	
	
	
	
				//dependent dropdowns
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "designer";

	
	
	
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




	$tdatahoushoku_satei["product_num"] = $fdata;
//	yahoo_size
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "yahoo_size";
	$fdata["GoodName"] = "yahoo_size";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("houshoku_satei","yahoo_size");
	$fdata["FieldType"] = 201;

	
	
	
			
	
	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "yahoo_size";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`yahoo_size`";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdatahoushoku_satei["yahoo_size"] = $fdata;
//	yahoo_title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "yahoo_title";
	$fdata["GoodName"] = "yahoo_title";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("houshoku_satei","yahoo_title");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "yahoo_title";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`yahoo_title`";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdatahoushoku_satei["yahoo_title"] = $fdata;
//	yahoo_sankou_uwadai
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "yahoo_sankou_uwadai";
	$fdata["GoodName"] = "yahoo_sankou_uwadai";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("houshoku_satei","yahoo_sankou_uwadai");
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




	$tdatahoushoku_satei["yahoo_sankou_uwadai"] = $fdata;
//	yahoo_sozai
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "yahoo_sozai";
	$fdata["GoodName"] = "yahoo_sozai";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("houshoku_satei","yahoo_sozai");
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




	$tdatahoushoku_satei["yahoo_sozai"] = $fdata;
//	yahoo_kataban
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "yahoo_kataban";
	$fdata["GoodName"] = "yahoo_kataban";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("houshoku_satei","yahoo_kataban");
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




	$tdatahoushoku_satei["yahoo_kataban"] = $fdata;
//	yahoo_condition1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "yahoo_condition1";
	$fdata["GoodName"] = "yahoo_condition1";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("houshoku_satei","yahoo_condition1");
	$fdata["FieldType"] = 201;

	
	
	
			
	
	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
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

	
	



		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
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




	$tdatahoushoku_satei["yahoo_condition1"] = $fdata;
//	yahoo_condition2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "yahoo_condition2";
	$fdata["GoodName"] = "yahoo_condition2";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("houshoku_satei","yahoo_condition2");
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
				$edata["LookupType"] = 1;
	$edata["LookupTable"] = "_mst_condition";
	$edata["LookupConnId"] = "internet_at_urlounge_co_jp";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "condition_name";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "condition_name";

	
	$edata["LookupOrderBy"] = "";

	
	
	
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




	$tdatahoushoku_satei["yahoo_condition2"] = $fdata;
//	yahoo_fuzokuhin
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "yahoo_fuzokuhin";
	$fdata["GoodName"] = "yahoo_fuzokuhin";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("houshoku_satei","yahoo_fuzokuhin");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "yahoo_fuzokuhin";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`yahoo_fuzokuhin`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

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




	$tdatahoushoku_satei["yahoo_fuzokuhin"] = $fdata;
//	yahoo_sinaban
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "yahoo_sinaban";
	$fdata["GoodName"] = "yahoo_sinaban";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("houshoku_satei","yahoo_sinaban");
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




	$tdatahoushoku_satei["yahoo_sinaban"] = $fdata;
//	yahoo_saisun_sha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "yahoo_saisun_sha";
	$fdata["GoodName"] = "yahoo_saisun_sha";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("houshoku_satei","yahoo_saisun_sha");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "yahoo_saisun_sha";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`yahoo_saisun_sha`";

	
	
			
				$fdata["UploadFolder"] = "files";

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








	$tdatahoushoku_satei["yahoo_saisun_sha"] = $fdata;
//	yahoo_sex
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "yahoo_sex";
	$fdata["GoodName"] = "yahoo_sex";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("houshoku_satei","yahoo_sex");
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




	$tdatahoushoku_satei["yahoo_sex"] = $fdata;
//	box_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "box_id";
	$fdata["GoodName"] = "box_id";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("houshoku_satei","box_id");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "box_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`box_id`";

	
	
			
				$fdata["UploadFolder"] = "files";

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








	$tdatahoushoku_satei["box_id"] = $fdata;
//	nyuukin_price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "nyuukin_price";
	$fdata["GoodName"] = "nyuukin_price";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("houshoku_satei","nyuukin_price");
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








	$tdatahoushoku_satei["nyuukin_price"] = $fdata;
//	updated_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "updated_by";
	$fdata["GoodName"] = "updated_by";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("houshoku_satei","updated_by");
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








	$tdatahoushoku_satei["updated_by"] = $fdata;
//	raku_title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "raku_title";
	$fdata["GoodName"] = "raku_title";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("houshoku_satei","raku_title");
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




	$tdatahoushoku_satei["raku_title"] = $fdata;
//	timesta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "timesta";
	$fdata["GoodName"] = "timesta";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("houshoku_satei","timesta");
	$fdata["FieldType"] = 135;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "timesta";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`timesta`";

	
	
			
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








	$tdatahoushoku_satei["timesta"] = $fdata;
//	saisun_start
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "saisun_start";
	$fdata["GoodName"] = "saisun_start";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("houshoku_satei","saisun_start");
	$fdata["FieldType"] = 135;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "saisun_start";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`saisun_start`";

	
	
			
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








	$tdatahoushoku_satei["saisun_start"] = $fdata;
//	saisun_end
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "saisun_end";
	$fdata["GoodName"] = "saisun_end";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("houshoku_satei","saisun_end");
	$fdata["FieldType"] = 135;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "saisun_end";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`saisun_end`";

	
	
			
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








	$tdatahoushoku_satei["saisun_end"] = $fdata;
//	label_output_flag
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "label_output_flag";
	$fdata["GoodName"] = "label_output_flag";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("houshoku_satei","label_output_flag");
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




	$tdatahoushoku_satei["label_output_flag"] = $fdata;
//	season
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "season";
	$fdata["GoodName"] = "season";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("houshoku_satei","season");
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




	$tdatahoushoku_satei["season"] = $fdata;
//	kanryou_henbi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "kanryou_henbi";
	$fdata["GoodName"] = "kanryou_henbi";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("houshoku_satei","kanryou_henbi");
	$fdata["FieldType"] = 135;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "kanryou_henbi";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`kanryou_henbi`";

	
	
			
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








	$tdatahoushoku_satei["kanryou_henbi"] = $fdata;
//	box_sort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "box_sort";
	$fdata["GoodName"] = "box_sort";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("houshoku_satei","box_sort");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "box_sort";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`box_sort`";

	
	
			
				$fdata["UploadFolder"] = "files";

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








	$tdatahoushoku_satei["box_sort"] = $fdata;
//	satei_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "satei_by";
	$fdata["GoodName"] = "satei_by";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("houshoku_satei","satei_by");
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




	$tdatahoushoku_satei["satei_by"] = $fdata;
//	kaitori_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "kaitori_by";
	$fdata["GoodName"] = "kaitori_by";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("houshoku_satei","kaitori_by");
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








	$tdatahoushoku_satei["kaitori_by"] = $fdata;
//	comment
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "comment";
	$fdata["GoodName"] = "comment";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("houshoku_satei","comment");
	$fdata["FieldType"] = 200;

	
	
	
			
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




	$tdatahoushoku_satei["comment"] = $fdata;
//	satei_hi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "satei_hi";
	$fdata["GoodName"] = "satei_hi";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("houshoku_satei","satei_hi");
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




	$tdatahoushoku_satei["satei_hi"] = $fdata;
//	kaitory_hi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "kaitory_hi";
	$fdata["GoodName"] = "kaitory_hi";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("houshoku_satei","kaitory_hi");
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








	$tdatahoushoku_satei["kaitory_hi"] = $fdata;
//	REG_PHOTOGRAPHER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "REG_PHOTOGRAPHER";
	$fdata["GoodName"] = "REG_PHOTOGRAPHER";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("houshoku_satei","REG_PHOTOGRAPHER");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "REG_PHOTOGRAPHER";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`REG_PHOTOGRAPHER`";

	
	
			
				$fdata["UploadFolder"] = "files";

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








	$tdatahoushoku_satei["REG_PHOTOGRAPHER"] = $fdata;
//	REG_PACKINGS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "REG_PACKINGS";
	$fdata["GoodName"] = "REG_PACKINGS";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("houshoku_satei","REG_PACKINGS");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "REG_PACKINGS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`REG_PACKINGS`";

	
	
			
				$fdata["UploadFolder"] = "files";

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








	$tdatahoushoku_satei["REG_PACKINGS"] = $fdata;
//	REG_KAKOU_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "REG_KAKOU_DATE";
	$fdata["GoodName"] = "REG_KAKOU_DATE";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("houshoku_satei","REG_KAKOU_DATE");
	$fdata["FieldType"] = 135;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "REG_KAKOU_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`REG_KAKOU_DATE`";

	
	
			
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








	$tdatahoushoku_satei["REG_KAKOU_DATE"] = $fdata;
//	REG_KAKOU
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "REG_KAKOU";
	$fdata["GoodName"] = "REG_KAKOU";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("houshoku_satei","REG_KAKOU");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "REG_KAKOU";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`REG_KAKOU`";

	
	
			
				$fdata["UploadFolder"] = "files";

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








	$tdatahoushoku_satei["REG_KAKOU"] = $fdata;
//	REG_EXHIBITOR
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "REG_EXHIBITOR";
	$fdata["GoodName"] = "REG_EXHIBITOR";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("houshoku_satei","REG_EXHIBITOR");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "REG_EXHIBITOR";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`REG_EXHIBITOR`";

	
	
			
				$fdata["UploadFolder"] = "files";

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








	$tdatahoushoku_satei["REG_EXHIBITOR"] = $fdata;
//	REG_PHOTOGRAPHER_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "REG_PHOTOGRAPHER_DATE";
	$fdata["GoodName"] = "REG_PHOTOGRAPHER_DATE";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("houshoku_satei","REG_PHOTOGRAPHER_DATE");
	$fdata["FieldType"] = 135;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "REG_PHOTOGRAPHER_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`REG_PHOTOGRAPHER_DATE`";

	
	
			
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








	$tdatahoushoku_satei["REG_PHOTOGRAPHER_DATE"] = $fdata;
//	DT_PACKING_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 47;
	$fdata["strName"] = "DT_PACKING_DATE";
	$fdata["GoodName"] = "DT_PACKING_DATE";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("houshoku_satei","DT_PACKING_DATE");
	$fdata["FieldType"] = 135;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "DT_PACKING_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`DT_PACKING_DATE`";

	
	
			
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








	$tdatahoushoku_satei["DT_PACKING_DATE"] = $fdata;
//	DT_UP_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 48;
	$fdata["strName"] = "DT_UP_DATE";
	$fdata["GoodName"] = "DT_UP_DATE";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("houshoku_satei","DT_UP_DATE");
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








	$tdatahoushoku_satei["DT_UP_DATE"] = $fdata;
//	AWAZU_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 49;
	$fdata["strName"] = "AWAZU_DATE";
	$fdata["GoodName"] = "AWAZU_DATE";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("houshoku_satei","AWAZU_DATE");
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








	$tdatahoushoku_satei["AWAZU_DATE"] = $fdata;
//	AWAZU_NIN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 50;
	$fdata["strName"] = "AWAZU_NIN";
	$fdata["GoodName"] = "AWAZU_NIN";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("houshoku_satei","AWAZU_NIN");
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








	$tdatahoushoku_satei["AWAZU_NIN"] = $fdata;
//	sabun_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 51;
	$fdata["strName"] = "sabun_date";
	$fdata["GoodName"] = "sabun_date";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("houshoku_satei","sabun_date");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "sabun_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`sabun_date`";

	
	
			
				$fdata["UploadFolder"] = "files";

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








	$tdatahoushoku_satei["sabun_date"] = $fdata;
//	browseid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 52;
	$fdata["strName"] = "browseid";
	$fdata["GoodName"] = "browseid";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("houshoku_satei","browseid");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "browseid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`browseid`";

	
	
			
				$fdata["UploadFolder"] = "files";

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








	$tdatahoushoku_satei["browseid"] = $fdata;
//	browsenode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 53;
	$fdata["strName"] = "browsenode";
	$fdata["GoodName"] = "browsenode";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("houshoku_satei","browsenode");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "browsenode";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`browsenode`";

	
	
			
				$fdata["UploadFolder"] = "files";

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








	$tdatahoushoku_satei["browsenode"] = $fdata;
//	gold_property
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 54;
	$fdata["strName"] = "gold_property";
	$fdata["GoodName"] = "gold_property";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("houshoku_satei","gold_property");
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




	$tdatahoushoku_satei["gold_property"] = $fdata;
//	ichiba_title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 55;
	$fdata["strName"] = "ichiba_title";
	$fdata["GoodName"] = "ichiba_title";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("houshoku_satei","ichiba_title");
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




	$tdatahoushoku_satei["ichiba_title"] = $fdata;
//	Gram
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 56;
	$fdata["strName"] = "Gram";
	$fdata["GoodName"] = "Gram";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("houshoku_satei","Gram");
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




	$tdatahoushoku_satei["Gram"] = $fdata;
//	Parent_stone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 57;
	$fdata["strName"] = "Parent_stone";
	$fdata["GoodName"] = "Parent_stone";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("houshoku_satei","Parent_stone");
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




	$tdatahoushoku_satei["Parent_stone"] = $fdata;
//	Aside_stone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 58;
	$fdata["strName"] = "Aside_stone";
	$fdata["GoodName"] = "Aside_stone";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("houshoku_satei","Aside_stone");
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




	$tdatahoushoku_satei["Aside_stone"] = $fdata;
//	Appraiser
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 59;
	$fdata["strName"] = "Appraiser";
	$fdata["GoodName"] = "Appraiser";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("houshoku_satei","Appraiser");
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




	$tdatahoushoku_satei["Appraiser"] = $fdata;
//	Remarks
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 60;
	$fdata["strName"] = "Remarks";
	$fdata["GoodName"] = "Remarks";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("houshoku_satei","Remarks");
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




	$tdatahoushoku_satei["Remarks"] = $fdata;
//	Destination_selling
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 61;
	$fdata["strName"] = "Destination_selling";
	$fdata["GoodName"] = "Destination_selling";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("houshoku_satei","Destination_selling");
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




	$tdatahoushoku_satei["Destination_selling"] = $fdata;
//	Finish
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 62;
	$fdata["strName"] = "Finish";
	$fdata["GoodName"] = "Finish";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("houshoku_satei","Finish");
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




	$tdatahoushoku_satei["Finish"] = $fdata;
//	Discrimination
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 63;
	$fdata["strName"] = "Discrimination";
	$fdata["GoodName"] = "Discrimination";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("houshoku_satei","Discrimination");
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




	$tdatahoushoku_satei["Discrimination"] = $fdata;
//	accessories
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 64;
	$fdata["strName"] = "accessories";
	$fdata["GoodName"] = "accessories";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("houshoku_satei","accessories");
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




	$tdatahoushoku_satei["accessories"] = $fdata;
//	priority
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 65;
	$fdata["strName"] = "priority";
	$fdata["GoodName"] = "priority";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("houshoku_satei","priority");
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




	$tdatahoushoku_satei["priority"] = $fdata;
//	A_storage
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 66;
	$fdata["strName"] = "A_storage";
	$fdata["GoodName"] = "A_storage";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("houshoku_satei","A_storage");
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




	$tdatahoushoku_satei["A_storage"] = $fdata;
//	price_per_gram
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 67;
	$fdata["strName"] = "price_per_gram";
	$fdata["GoodName"] = "price_per_gram";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("houshoku_satei","price_per_gram");
	$fdata["FieldType"] = 3;

	
	
	
			
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




	$tdatahoushoku_satei["price_per_gram"] = $fdata;
//	price_per_parent_stone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 68;
	$fdata["strName"] = "price_per_parent_stone";
	$fdata["GoodName"] = "price_per_parent_stone";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("houshoku_satei","price_per_parent_stone");
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




	$tdatahoushoku_satei["price_per_parent_stone"] = $fdata;
//	price_per_aside_stone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 69;
	$fdata["strName"] = "price_per_aside_stone";
	$fdata["GoodName"] = "price_per_aside_stone";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("houshoku_satei","price_per_aside_stone");
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




	$tdatahoushoku_satei["price_per_aside_stone"] = $fdata;
//	price_secret
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 70;
	$fdata["strName"] = "price_secret";
	$fdata["GoodName"] = "price_secret";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("houshoku_satei","price_secret");
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




	$tdatahoushoku_satei["price_secret"] = $fdata;
//	sales_price_secret
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 71;
	$fdata["strName"] = "sales_price_secret";
	$fdata["GoodName"] = "sales_price_secret";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("houshoku_satei","sales_price_secret");
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




	$tdatahoushoku_satei["sales_price_secret"] = $fdata;
//	eq
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 72;
	$fdata["strName"] = "eq";
	$fdata["GoodName"] = "eq";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("houshoku_satei","eq");
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








	$tdatahoushoku_satei["eq"] = $fdata;
//	en
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 73;
	$fdata["strName"] = "en";
	$fdata["GoodName"] = "en";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("houshoku_satei","en");
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








	$tdatahoushoku_satei["en"] = $fdata;
//	line
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 74;
	$fdata["strName"] = "line";
	$fdata["GoodName"] = "line";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("houshoku_satei","line");
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




	$tdatahoushoku_satei["line"] = $fdata;
//	item_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 75;
	$fdata["strName"] = "item_name";
	$fdata["GoodName"] = "item_name";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("houshoku_satei","item_name");
	$fdata["FieldType"] = 200;

	
	
	
			
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
	$edata["LookupTable"] = "mst_item_name1111";
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahoushoku_satei["item_name"] = $fdata;
//	yahoo_color_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 76;
	$fdata["strName"] = "yahoo_color_id";
	$fdata["GoodName"] = "yahoo_color_id";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("houshoku_satei","yahoo_color_id");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "yahoo_color_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`yahoo_color_id`";

	
	
			
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
	$edata["LookupTable"] = "mst_color";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "data";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "data";

	
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








	$tdatahoushoku_satei["yahoo_color_id"] = $fdata;
//	serial_number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 77;
	$fdata["strName"] = "serial_number";
	$fdata["GoodName"] = "serial_number";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("houshoku_satei","serial_number");
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




	$tdatahoushoku_satei["serial_number"] = $fdata;
//	Exhibition_Date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 78;
	$fdata["strName"] = "Exhibition_Date";
	$fdata["GoodName"] = "Exhibition_Date";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("houshoku_satei","Exhibition_Date");
	$fdata["FieldType"] = 135;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "Exhibition_Date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`Exhibition_Date`";

	
	
			
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








	$tdatahoushoku_satei["Exhibition_Date"] = $fdata;
//	search_keyword
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 79;
	$fdata["strName"] = "search_keyword";
	$fdata["GoodName"] = "search_keyword";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("houshoku_satei","search_keyword");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "search_keyword";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`search_keyword`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

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
			$edata["EditParams"].= " maxlength=40";

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




	$tdatahoushoku_satei["search_keyword"] = $fdata;
//	stamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 80;
	$fdata["strName"] = "stamp";
	$fdata["GoodName"] = "stamp";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("houshoku_satei","stamp");
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




	$tdatahoushoku_satei["stamp"] = $fdata;
//	motif
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 81;
	$fdata["strName"] = "motif";
	$fdata["GoodName"] = "motif";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("houshoku_satei","motif");
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




	$tdatahoushoku_satei["motif"] = $fdata;
//	Setting
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 82;
	$fdata["strName"] = "Setting";
	$fdata["GoodName"] = "Setting";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("houshoku_satei","Setting");
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




	$tdatahoushoku_satei["Setting"] = $fdata;
//	processing
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 83;
	$fdata["strName"] = "processing";
	$fdata["GoodName"] = "processing";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("houshoku_satei","processing");
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




	$tdatahoushoku_satei["processing"] = $fdata;
//	Ring_size
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 84;
	$fdata["strName"] = "Ring_size";
	$fdata["GoodName"] = "Ring_size";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("houshoku_satei","Ring_size");
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




	$tdatahoushoku_satei["Ring_size"] = $fdata;
//	price_for_site
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 85;
	$fdata["strName"] = "price_for_site";
	$fdata["GoodName"] = "price_for_site";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("houshoku_satei","price_for_site");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "price_for_site";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`price_for_site`";

	
	
			
				$fdata["UploadFolder"] = "files";

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








	$tdatahoushoku_satei["price_for_site"] = $fdata;
//	yahoo_category_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 86;
	$fdata["strName"] = "yahoo_category_id";
	$fdata["GoodName"] = "yahoo_category_id";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("houshoku_satei","yahoo_category_id");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "yahoo_category_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`yahoo_category_id`";

	
	
			
				$fdata["UploadFolder"] = "files";

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








	$tdatahoushoku_satei["yahoo_category_id"] = $fdata;
//	Qty
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 87;
	$fdata["strName"] = "Qty";
	$fdata["GoodName"] = "Qty";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("houshoku_satei","Qty");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "Qty";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`Qty`";

	
	
			
				$fdata["UploadFolder"] = "files";

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








	$tdatahoushoku_satei["Qty"] = $fdata;
//	sales_period
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 88;
	$fdata["strName"] = "sales_period";
	$fdata["GoodName"] = "sales_period";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("houshoku_satei","sales_period");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "sales_period";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`sales_period`";

	
	
			
				$fdata["UploadFolder"] = "files";

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








	$tdatahoushoku_satei["sales_period"] = $fdata;
//	starting_price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 89;
	$fdata["strName"] = "starting_price";
	$fdata["GoodName"] = "starting_price";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("houshoku_satei","starting_price");
	$fdata["FieldType"] = 5;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "starting_price";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`starting_price`";

	
	
			
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








	$tdatahoushoku_satei["starting_price"] = $fdata;
//	ecc_seq
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 90;
	$fdata["strName"] = "ecc_seq";
	$fdata["GoodName"] = "ecc_seq";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("houshoku_satei","ecc_seq");
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




	$tdatahoushoku_satei["ecc_seq"] = $fdata;
//	yahoo_junle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 91;
	$fdata["strName"] = "yahoo_junle";
	$fdata["GoodName"] = "yahoo_junle";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("houshoku_satei","yahoo_junle");
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








	$tdatahoushoku_satei["yahoo_junle"] = $fdata;
//	logo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 92;
	$fdata["strName"] = "logo";
	$fdata["GoodName"] = "logo";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("houshoku_satei","logo");
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




	$tdatahoushoku_satei["logo"] = $fdata;
//	parts
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 93;
	$fdata["strName"] = "parts";
	$fdata["GoodName"] = "parts";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("houshoku_satei","parts");
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




	$tdatahoushoku_satei["parts"] = $fdata;
//	guarantee
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 94;
	$fdata["strName"] = "guarantee";
	$fdata["GoodName"] = "guarantee";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("houshoku_satei","guarantee");
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




	$tdatahoushoku_satei["guarantee"] = $fdata;
//	errors
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 95;
	$fdata["strName"] = "errors";
	$fdata["GoodName"] = "errors";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("houshoku_satei","errors");
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




	$tdatahoushoku_satei["errors"] = $fdata;
//	designer
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 96;
	$fdata["strName"] = "designer";
	$fdata["GoodName"] = "designer";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("houshoku_satei","designer");
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

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "product_num", "lookup" => "yahoo_junle" );

	
	

	
	
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




	$tdatahoushoku_satei["designer"] = $fdata;
//	hahakai
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 97;
	$fdata["strName"] = "hahakai";
	$fdata["GoodName"] = "hahakai";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("houshoku_satei","hahakai");
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




	$tdatahoushoku_satei["hahakai"] = $fdata;
//	effect
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 98;
	$fdata["strName"] = "effect";
	$fdata["GoodName"] = "effect";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("houshoku_satei","effect");
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




	$tdatahoushoku_satei["effect"] = $fdata;
//	shape
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 99;
	$fdata["strName"] = "shape";
	$fdata["GoodName"] = "shape";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("houshoku_satei","shape");
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




	$tdatahoushoku_satei["shape"] = $fdata;
//	cutting_style
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 100;
	$fdata["strName"] = "cutting_style";
	$fdata["GoodName"] = "cutting_style";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("houshoku_satei","cutting_style");
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




	$tdatahoushoku_satei["cutting_style"] = $fdata;
//	chain_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 101;
	$fdata["strName"] = "chain_type";
	$fdata["GoodName"] = "chain_type";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("houshoku_satei","chain_type");
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




	$tdatahoushoku_satei["chain_type"] = $fdata;
//	number_of_stones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 102;
	$fdata["strName"] = "number_of_stones";
	$fdata["GoodName"] = "number_of_stones";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("houshoku_satei","number_of_stones");
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




	$tdatahoushoku_satei["number_of_stones"] = $fdata;
//	satei_error
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 103;
	$fdata["strName"] = "satei_error";
	$fdata["GoodName"] = "satei_error";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("houshoku_satei","satei_error");
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




	$tdatahoushoku_satei["satei_error"] = $fdata;
//	producing_area
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 104;
	$fdata["strName"] = "producing_area";
	$fdata["GoodName"] = "producing_area";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("houshoku_satei","producing_area");
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




	$tdatahoushoku_satei["producing_area"] = $fdata;
//	shape_supplement
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 105;
	$fdata["strName"] = "shape_supplement";
	$fdata["GoodName"] = "shape_supplement";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("houshoku_satei","shape_supplement");
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




	$tdatahoushoku_satei["shape_supplement"] = $fdata;
//	side_gem
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 106;
	$fdata["strName"] = "side_gem";
	$fdata["GoodName"] = "side_gem";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("houshoku_satei","side_gem");
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




	$tdatahoushoku_satei["side_gem"] = $fdata;
//	product_style
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 107;
	$fdata["strName"] = "product_style";
	$fdata["GoodName"] = "product_style";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("houshoku_satei","product_style");
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




	$tdatahoushoku_satei["product_style"] = $fdata;
//	unit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 108;
	$fdata["strName"] = "unit";
	$fdata["GoodName"] = "unit";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("houshoku_satei","unit");
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




	$tdatahoushoku_satei["unit"] = $fdata;
//	hall_mark
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 109;
	$fdata["strName"] = "hall_mark";
	$fdata["GoodName"] = "hall_mark";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("houshoku_satei","hall_mark");
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
	$edata["LookupTable"] = "mst_hall_mark1111";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "name";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "name";

	
	$edata["LookupOrderBy"] = "sort";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "country_of_origin", "lookup" => "id" );

	
	

	
	
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




	$tdatahoushoku_satei["hall_mark"] = $fdata;
//	plate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 110;
	$fdata["strName"] = "plate";
	$fdata["GoodName"] = "plate";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("houshoku_satei","plate");
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




	$tdatahoushoku_satei["plate"] = $fdata;
//	official_url
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 111;
	$fdata["strName"] = "official_url";
	$fdata["GoodName"] = "official_url";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("houshoku_satei","official_url");
	$fdata["FieldType"] = 201;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "official_url";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`official_url`";

	
	
			
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








	$tdatahoushoku_satei["official_url"] = $fdata;


$tables_data["houshoku_satei"]=&$tdatahoushoku_satei;
$field_labels["houshoku_satei"] = &$fieldLabelshoushoku_satei;
$fieldToolTips["houshoku_satei"] = &$fieldToolTipshoushoku_satei;
$placeHolders["houshoku_satei"] = &$placeHoldershoushoku_satei;
$page_titles["houshoku_satei"] = &$pageTitleshoushoku_satei;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["houshoku_satei"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["houshoku_satei"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_houshoku_satei()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`shouhin`.`product_id`,  `shouhin`.`category_id`,  `shouhin`.`goods_title`,  `shouhin`.`title`,  `shouhin`.`sub_category_id1`,  `shouhin`.`ecc_id`,  `shouhin`.`price`,  `shouhin`.`yahoo`,  `shouhin`.`remark`,  `shouhin`.`sales_price`,  `shouhin`.`description`,  `shouhin`.`status`,  `shouhin`.`product_num`,  `shouhin`.`yahoo_size`,  `shouhin`.`yahoo_title`,  `shouhin`.`yahoo_sankou_uwadai`,  `shouhin`.`yahoo_sozai`,  `shouhin`.`yahoo_kataban`,  `shouhin`.`yahoo_condition1`,  `shouhin`.`yahoo_condition2`,  `shouhin`.`yahoo_fuzokuhin`,  `shouhin`.`yahoo_sinaban`,  `shouhin`.`yahoo_saisun_sha`,  `shouhin`.`yahoo_sex`,  `shouhin`.`box_id`,  `shouhin`.`nyuukin_price`,  `shouhin`.`updated_by`,  `shouhin`.`raku_title`,  `shouhin`.`timesta`,  `shouhin`.`saisun_start`,  `shouhin`.`saisun_end`,  `shouhin`.`label_output_flag`,  `shouhin`.`season`,  `shouhin`.`kanryou_henbi`,  `shouhin`.`box_sort`,  `shouhin`.`satei_by`,  `shouhin`.`kaitori_by`,  `shouhin`.`comment`,  `shouhin`.`satei_hi`,  `shouhin`.`kaitory_hi`,  `shouhin`.`REG_PHOTOGRAPHER`,  `shouhin`.`REG_PACKINGS`,  `shouhin`.`REG_KAKOU_DATE`,  `shouhin`.`REG_KAKOU`,  `shouhin`.`REG_EXHIBITOR`,  `shouhin`.`REG_PHOTOGRAPHER_DATE`,  `shouhin`.`DT_PACKING_DATE`,  `shouhin`.`DT_UP_DATE`,  `shouhin`.`AWAZU_DATE`,  `shouhin`.`AWAZU_NIN`,  `shouhin`.`sabun_date`,  `shouhin`.`browseid`,  `shouhin`.`browsenode`,  `shouhin`.`gold_property`,  `shouhin`.`ichiba_title`,  `shouhin`.`Gram`,  `shouhin`.`Parent_stone`,  `shouhin`.`Aside_stone`,  `shouhin`.`Appraiser`,  `shouhin`.`Remarks`,  `shouhin`.`Destination_selling`,  `shouhin`.`Finish`,  `shouhin`.`Discrimination`,  `shouhin`.`accessories`,  `shouhin`.`priority`,  `shouhin`.`A_storage`,  `shouhin`.`price_per_gram`,  `shouhin`.`price_per_parent_stone`,  `shouhin`.`price_per_aside_stone`,  `shouhin`.`price_secret`,  `shouhin`.`sales_price_secret`,  `shouhin`.`eq`,  `shouhin`.`en`,  `shouhin`.`line`,  `shouhin`.`item_name`,  `shouhin`.`yahoo_color_id`,  `shouhin`.`serial_number`,  `shouhin`.`Exhibition_Date`,  `shouhin`.`search_keyword`,  `shouhin`.`stamp`,  `shouhin`.`motif`,  `shouhin`.`Setting`,  `shouhin`.`processing`,  `shouhin`.`Ring_size`,  `shouhin`.`price_for_site`,  `shouhin`.`yahoo_category_id`,  `shouhin`.`Qty`,  `shouhin`.`sales_period`,  `shouhin`.`starting_price`,  `Eoc`.`ecc_seq`,  `shouhin`.`yahoo_junle`,  `shouhin`.`logo`,  `shouhin`.`parts`,  `shouhin`.`guarantee`,  `shouhin`.`errors`,  `shouhin`.`designer`,  `shouhin`.`hahakai`,  `shouhin`.`effect`,  `shouhin`.`shape`,  `shouhin`.`cutting_style`,  `shouhin`.`chain_type`,  `shouhin`.`number_of_stones`,  `shouhin`.`satei_error`,  `shouhin`.`producing_area`,  `shouhin`.`shape_supplement`,  `shouhin`.`side_gem`,  `shouhin`.`product_style`,  `shouhin`.`unit`,  `shouhin`.`hall_mark`,  `shouhin`.`plate`,  `shouhin`.`official_url`";
$proto0["m_strFrom"] = "FROM `shouhin`  LEFT OUTER JOIN `Eoc` ON `shouhin`.`ecc_id` = `Eoc`.`ecc_id`";
$proto0["m_strWhere"] = "(`shouhin`.`status` =32)";
$proto0["m_strOrderBy"] = "ORDER BY `shouhin`.`product_id` DESC";
$proto0["m_strTail"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "`shouhin`.`status` =32";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "houshoku_satei"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "=32";
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
	"m_strName" => "product_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "houshoku_satei"
));

$proto6["m_sql"] = "`shouhin`.`product_id`";
$proto6["m_srcTableName"] = "houshoku_satei";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "category_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "houshoku_satei"
));

$proto8["m_sql"] = "`shouhin`.`category_id`";
$proto8["m_srcTableName"] = "houshoku_satei";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "goods_title",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "houshoku_satei"
));

$proto10["m_sql"] = "`shouhin`.`goods_title`";
$proto10["m_srcTableName"] = "houshoku_satei";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "title",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "houshoku_satei"
));

$proto12["m_sql"] = "`shouhin`.`title`";
$proto12["m_srcTableName"] = "houshoku_satei";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "sub_category_id1",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "houshoku_satei"
));

$proto14["m_sql"] = "`shouhin`.`sub_category_id1`";
$proto14["m_srcTableName"] = "houshoku_satei";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "ecc_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "houshoku_satei"
));

$proto16["m_sql"] = "`shouhin`.`ecc_id`";
$proto16["m_srcTableName"] = "houshoku_satei";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "price",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "houshoku_satei"
));

$proto18["m_sql"] = "`shouhin`.`price`";
$proto18["m_srcTableName"] = "houshoku_satei";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "houshoku_satei"
));

$proto20["m_sql"] = "`shouhin`.`yahoo`";
$proto20["m_srcTableName"] = "houshoku_satei";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "remark",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "houshoku_satei"
));

$proto22["m_sql"] = "`shouhin`.`remark`";
$proto22["m_srcTableName"] = "houshoku_satei";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "sales_price",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "houshoku_satei"
));

$proto24["m_sql"] = "`shouhin`.`sales_price`";
$proto24["m_srcTableName"] = "houshoku_satei";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "houshoku_satei"
));

$proto26["m_sql"] = "`shouhin`.`description`";
$proto26["m_srcTableName"] = "houshoku_satei";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "houshoku_satei"
));

$proto28["m_sql"] = "`shouhin`.`status`";
$proto28["m_srcTableName"] = "houshoku_satei";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "product_num",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "houshoku_satei"
));

$proto30["m_sql"] = "`shouhin`.`product_num`";
$proto30["m_srcTableName"] = "houshoku_satei";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_size",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "houshoku_satei"
));

$proto32["m_sql"] = "`shouhin`.`yahoo_size`";
$proto32["m_srcTableName"] = "houshoku_satei";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_title",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "houshoku_satei"
));

$proto34["m_sql"] = "`shouhin`.`yahoo_title`";
$proto34["m_srcTableName"] = "houshoku_satei";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_sankou_uwadai",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "houshoku_satei"
));

$proto36["m_sql"] = "`shouhin`.`yahoo_sankou_uwadai`";
$proto36["m_srcTableName"] = "houshoku_satei";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_sozai",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "houshoku_satei"
));

$proto38["m_sql"] = "`shouhin`.`yahoo_sozai`";
$proto38["m_srcTableName"] = "houshoku_satei";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_kataban",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "houshoku_satei"
));

$proto40["m_sql"] = "`shouhin`.`yahoo_kataban`";
$proto40["m_srcTableName"] = "houshoku_satei";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_condition1",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "houshoku_satei"
));

$proto42["m_sql"] = "`shouhin`.`yahoo_condition1`";
$proto42["m_srcTableName"] = "houshoku_satei";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_condition2",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "houshoku_satei"
));

$proto44["m_sql"] = "`shouhin`.`yahoo_condition2`";
$proto44["m_srcTableName"] = "houshoku_satei";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_fuzokuhin",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "houshoku_satei"
));

$proto46["m_sql"] = "`shouhin`.`yahoo_fuzokuhin`";
$proto46["m_srcTableName"] = "houshoku_satei";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_sinaban",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "houshoku_satei"
));

$proto48["m_sql"] = "`shouhin`.`yahoo_sinaban`";
$proto48["m_srcTableName"] = "houshoku_satei";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_saisun_sha",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "houshoku_satei"
));

$proto50["m_sql"] = "`shouhin`.`yahoo_saisun_sha`";
$proto50["m_srcTableName"] = "houshoku_satei";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_sex",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "houshoku_satei"
));

$proto52["m_sql"] = "`shouhin`.`yahoo_sex`";
$proto52["m_srcTableName"] = "houshoku_satei";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "box_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "houshoku_satei"
));

$proto54["m_sql"] = "`shouhin`.`box_id`";
$proto54["m_srcTableName"] = "houshoku_satei";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "nyuukin_price",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "houshoku_satei"
));

$proto56["m_sql"] = "`shouhin`.`nyuukin_price`";
$proto56["m_srcTableName"] = "houshoku_satei";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "houshoku_satei"
));

$proto58["m_sql"] = "`shouhin`.`updated_by`";
$proto58["m_srcTableName"] = "houshoku_satei";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "raku_title",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "houshoku_satei"
));

$proto60["m_sql"] = "`shouhin`.`raku_title`";
$proto60["m_srcTableName"] = "houshoku_satei";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "timesta",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "houshoku_satei"
));

$proto62["m_sql"] = "`shouhin`.`timesta`";
$proto62["m_srcTableName"] = "houshoku_satei";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "saisun_start",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "houshoku_satei"
));

$proto64["m_sql"] = "`shouhin`.`saisun_start`";
$proto64["m_srcTableName"] = "houshoku_satei";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "saisun_end",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "houshoku_satei"
));

$proto66["m_sql"] = "`shouhin`.`saisun_end`";
$proto66["m_srcTableName"] = "houshoku_satei";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "label_output_flag",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "houshoku_satei"
));

$proto68["m_sql"] = "`shouhin`.`label_output_flag`";
$proto68["m_srcTableName"] = "houshoku_satei";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "season",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "houshoku_satei"
));

$proto70["m_sql"] = "`shouhin`.`season`";
$proto70["m_srcTableName"] = "houshoku_satei";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "kanryou_henbi",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "houshoku_satei"
));

$proto72["m_sql"] = "`shouhin`.`kanryou_henbi`";
$proto72["m_srcTableName"] = "houshoku_satei";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "box_sort",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "houshoku_satei"
));

$proto74["m_sql"] = "`shouhin`.`box_sort`";
$proto74["m_srcTableName"] = "houshoku_satei";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "satei_by",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "houshoku_satei"
));

$proto76["m_sql"] = "`shouhin`.`satei_by`";
$proto76["m_srcTableName"] = "houshoku_satei";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "kaitori_by",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "houshoku_satei"
));

$proto78["m_sql"] = "`shouhin`.`kaitori_by`";
$proto78["m_srcTableName"] = "houshoku_satei";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "comment",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "houshoku_satei"
));

$proto80["m_sql"] = "`shouhin`.`comment`";
$proto80["m_srcTableName"] = "houshoku_satei";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "satei_hi",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "houshoku_satei"
));

$proto82["m_sql"] = "`shouhin`.`satei_hi`";
$proto82["m_srcTableName"] = "houshoku_satei";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "kaitory_hi",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "houshoku_satei"
));

$proto84["m_sql"] = "`shouhin`.`kaitory_hi`";
$proto84["m_srcTableName"] = "houshoku_satei";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "REG_PHOTOGRAPHER",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "houshoku_satei"
));

$proto86["m_sql"] = "`shouhin`.`REG_PHOTOGRAPHER`";
$proto86["m_srcTableName"] = "houshoku_satei";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "REG_PACKINGS",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "houshoku_satei"
));

$proto88["m_sql"] = "`shouhin`.`REG_PACKINGS`";
$proto88["m_srcTableName"] = "houshoku_satei";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "REG_KAKOU_DATE",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "houshoku_satei"
));

$proto90["m_sql"] = "`shouhin`.`REG_KAKOU_DATE`";
$proto90["m_srcTableName"] = "houshoku_satei";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLField(array(
	"m_strName" => "REG_KAKOU",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "houshoku_satei"
));

$proto92["m_sql"] = "`shouhin`.`REG_KAKOU`";
$proto92["m_srcTableName"] = "houshoku_satei";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "";
$obj = new SQLFieldListItem($proto92);

$proto0["m_fieldlist"][]=$obj;
						$proto94=array();
			$obj = new SQLField(array(
	"m_strName" => "REG_EXHIBITOR",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "houshoku_satei"
));

$proto94["m_sql"] = "`shouhin`.`REG_EXHIBITOR`";
$proto94["m_srcTableName"] = "houshoku_satei";
$proto94["m_expr"]=$obj;
$proto94["m_alias"] = "";
$obj = new SQLFieldListItem($proto94);

$proto0["m_fieldlist"][]=$obj;
						$proto96=array();
			$obj = new SQLField(array(
	"m_strName" => "REG_PHOTOGRAPHER_DATE",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "houshoku_satei"
));

$proto96["m_sql"] = "`shouhin`.`REG_PHOTOGRAPHER_DATE`";
$proto96["m_srcTableName"] = "houshoku_satei";
$proto96["m_expr"]=$obj;
$proto96["m_alias"] = "";
$obj = new SQLFieldListItem($proto96);

$proto0["m_fieldlist"][]=$obj;
						$proto98=array();
			$obj = new SQLField(array(
	"m_strName" => "DT_PACKING_DATE",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "houshoku_satei"
));

$proto98["m_sql"] = "`shouhin`.`DT_PACKING_DATE`";
$proto98["m_srcTableName"] = "houshoku_satei";
$proto98["m_expr"]=$obj;
$proto98["m_alias"] = "";
$obj = new SQLFieldListItem($proto98);

$proto0["m_fieldlist"][]=$obj;
						$proto100=array();
			$obj = new SQLField(array(
	"m_strName" => "DT_UP_DATE",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "houshoku_satei"
));

$proto100["m_sql"] = "`shouhin`.`DT_UP_DATE`";
$proto100["m_srcTableName"] = "houshoku_satei";
$proto100["m_expr"]=$obj;
$proto100["m_alias"] = "";
$obj = new SQLFieldListItem($proto100);

$proto0["m_fieldlist"][]=$obj;
						$proto102=array();
			$obj = new SQLField(array(
	"m_strName" => "AWAZU_DATE",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "houshoku_satei"
));

$proto102["m_sql"] = "`shouhin`.`AWAZU_DATE`";
$proto102["m_srcTableName"] = "houshoku_satei";
$proto102["m_expr"]=$obj;
$proto102["m_alias"] = "";
$obj = new SQLFieldListItem($proto102);

$proto0["m_fieldlist"][]=$obj;
						$proto104=array();
			$obj = new SQLField(array(
	"m_strName" => "AWAZU_NIN",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "houshoku_satei"
));

$proto104["m_sql"] = "`shouhin`.`AWAZU_NIN`";
$proto104["m_srcTableName"] = "houshoku_satei";
$proto104["m_expr"]=$obj;
$proto104["m_alias"] = "";
$obj = new SQLFieldListItem($proto104);

$proto0["m_fieldlist"][]=$obj;
						$proto106=array();
			$obj = new SQLField(array(
	"m_strName" => "sabun_date",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "houshoku_satei"
));

$proto106["m_sql"] = "`shouhin`.`sabun_date`";
$proto106["m_srcTableName"] = "houshoku_satei";
$proto106["m_expr"]=$obj;
$proto106["m_alias"] = "";
$obj = new SQLFieldListItem($proto106);

$proto0["m_fieldlist"][]=$obj;
						$proto108=array();
			$obj = new SQLField(array(
	"m_strName" => "browseid",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "houshoku_satei"
));

$proto108["m_sql"] = "`shouhin`.`browseid`";
$proto108["m_srcTableName"] = "houshoku_satei";
$proto108["m_expr"]=$obj;
$proto108["m_alias"] = "";
$obj = new SQLFieldListItem($proto108);

$proto0["m_fieldlist"][]=$obj;
						$proto110=array();
			$obj = new SQLField(array(
	"m_strName" => "browsenode",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "houshoku_satei"
));

$proto110["m_sql"] = "`shouhin`.`browsenode`";
$proto110["m_srcTableName"] = "houshoku_satei";
$proto110["m_expr"]=$obj;
$proto110["m_alias"] = "";
$obj = new SQLFieldListItem($proto110);

$proto0["m_fieldlist"][]=$obj;
						$proto112=array();
			$obj = new SQLField(array(
	"m_strName" => "gold_property",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "houshoku_satei"
));

$proto112["m_sql"] = "`shouhin`.`gold_property`";
$proto112["m_srcTableName"] = "houshoku_satei";
$proto112["m_expr"]=$obj;
$proto112["m_alias"] = "";
$obj = new SQLFieldListItem($proto112);

$proto0["m_fieldlist"][]=$obj;
						$proto114=array();
			$obj = new SQLField(array(
	"m_strName" => "ichiba_title",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "houshoku_satei"
));

$proto114["m_sql"] = "`shouhin`.`ichiba_title`";
$proto114["m_srcTableName"] = "houshoku_satei";
$proto114["m_expr"]=$obj;
$proto114["m_alias"] = "";
$obj = new SQLFieldListItem($proto114);

$proto0["m_fieldlist"][]=$obj;
						$proto116=array();
			$obj = new SQLField(array(
	"m_strName" => "Gram",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "houshoku_satei"
));

$proto116["m_sql"] = "`shouhin`.`Gram`";
$proto116["m_srcTableName"] = "houshoku_satei";
$proto116["m_expr"]=$obj;
$proto116["m_alias"] = "";
$obj = new SQLFieldListItem($proto116);

$proto0["m_fieldlist"][]=$obj;
						$proto118=array();
			$obj = new SQLField(array(
	"m_strName" => "Parent_stone",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "houshoku_satei"
));

$proto118["m_sql"] = "`shouhin`.`Parent_stone`";
$proto118["m_srcTableName"] = "houshoku_satei";
$proto118["m_expr"]=$obj;
$proto118["m_alias"] = "";
$obj = new SQLFieldListItem($proto118);

$proto0["m_fieldlist"][]=$obj;
						$proto120=array();
			$obj = new SQLField(array(
	"m_strName" => "Aside_stone",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "houshoku_satei"
));

$proto120["m_sql"] = "`shouhin`.`Aside_stone`";
$proto120["m_srcTableName"] = "houshoku_satei";
$proto120["m_expr"]=$obj;
$proto120["m_alias"] = "";
$obj = new SQLFieldListItem($proto120);

$proto0["m_fieldlist"][]=$obj;
						$proto122=array();
			$obj = new SQLField(array(
	"m_strName" => "Appraiser",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "houshoku_satei"
));

$proto122["m_sql"] = "`shouhin`.`Appraiser`";
$proto122["m_srcTableName"] = "houshoku_satei";
$proto122["m_expr"]=$obj;
$proto122["m_alias"] = "";
$obj = new SQLFieldListItem($proto122);

$proto0["m_fieldlist"][]=$obj;
						$proto124=array();
			$obj = new SQLField(array(
	"m_strName" => "Remarks",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "houshoku_satei"
));

$proto124["m_sql"] = "`shouhin`.`Remarks`";
$proto124["m_srcTableName"] = "houshoku_satei";
$proto124["m_expr"]=$obj;
$proto124["m_alias"] = "";
$obj = new SQLFieldListItem($proto124);

$proto0["m_fieldlist"][]=$obj;
						$proto126=array();
			$obj = new SQLField(array(
	"m_strName" => "Destination_selling",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "houshoku_satei"
));

$proto126["m_sql"] = "`shouhin`.`Destination_selling`";
$proto126["m_srcTableName"] = "houshoku_satei";
$proto126["m_expr"]=$obj;
$proto126["m_alias"] = "";
$obj = new SQLFieldListItem($proto126);

$proto0["m_fieldlist"][]=$obj;
						$proto128=array();
			$obj = new SQLField(array(
	"m_strName" => "Finish",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "houshoku_satei"
));

$proto128["m_sql"] = "`shouhin`.`Finish`";
$proto128["m_srcTableName"] = "houshoku_satei";
$proto128["m_expr"]=$obj;
$proto128["m_alias"] = "";
$obj = new SQLFieldListItem($proto128);

$proto0["m_fieldlist"][]=$obj;
						$proto130=array();
			$obj = new SQLField(array(
	"m_strName" => "Discrimination",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "houshoku_satei"
));

$proto130["m_sql"] = "`shouhin`.`Discrimination`";
$proto130["m_srcTableName"] = "houshoku_satei";
$proto130["m_expr"]=$obj;
$proto130["m_alias"] = "";
$obj = new SQLFieldListItem($proto130);

$proto0["m_fieldlist"][]=$obj;
						$proto132=array();
			$obj = new SQLField(array(
	"m_strName" => "accessories",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "houshoku_satei"
));

$proto132["m_sql"] = "`shouhin`.`accessories`";
$proto132["m_srcTableName"] = "houshoku_satei";
$proto132["m_expr"]=$obj;
$proto132["m_alias"] = "";
$obj = new SQLFieldListItem($proto132);

$proto0["m_fieldlist"][]=$obj;
						$proto134=array();
			$obj = new SQLField(array(
	"m_strName" => "priority",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "houshoku_satei"
));

$proto134["m_sql"] = "`shouhin`.`priority`";
$proto134["m_srcTableName"] = "houshoku_satei";
$proto134["m_expr"]=$obj;
$proto134["m_alias"] = "";
$obj = new SQLFieldListItem($proto134);

$proto0["m_fieldlist"][]=$obj;
						$proto136=array();
			$obj = new SQLField(array(
	"m_strName" => "A_storage",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "houshoku_satei"
));

$proto136["m_sql"] = "`shouhin`.`A_storage`";
$proto136["m_srcTableName"] = "houshoku_satei";
$proto136["m_expr"]=$obj;
$proto136["m_alias"] = "";
$obj = new SQLFieldListItem($proto136);

$proto0["m_fieldlist"][]=$obj;
						$proto138=array();
			$obj = new SQLField(array(
	"m_strName" => "price_per_gram",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "houshoku_satei"
));

$proto138["m_sql"] = "`shouhin`.`price_per_gram`";
$proto138["m_srcTableName"] = "houshoku_satei";
$proto138["m_expr"]=$obj;
$proto138["m_alias"] = "";
$obj = new SQLFieldListItem($proto138);

$proto0["m_fieldlist"][]=$obj;
						$proto140=array();
			$obj = new SQLField(array(
	"m_strName" => "price_per_parent_stone",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "houshoku_satei"
));

$proto140["m_sql"] = "`shouhin`.`price_per_parent_stone`";
$proto140["m_srcTableName"] = "houshoku_satei";
$proto140["m_expr"]=$obj;
$proto140["m_alias"] = "";
$obj = new SQLFieldListItem($proto140);

$proto0["m_fieldlist"][]=$obj;
						$proto142=array();
			$obj = new SQLField(array(
	"m_strName" => "price_per_aside_stone",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "houshoku_satei"
));

$proto142["m_sql"] = "`shouhin`.`price_per_aside_stone`";
$proto142["m_srcTableName"] = "houshoku_satei";
$proto142["m_expr"]=$obj;
$proto142["m_alias"] = "";
$obj = new SQLFieldListItem($proto142);

$proto0["m_fieldlist"][]=$obj;
						$proto144=array();
			$obj = new SQLField(array(
	"m_strName" => "price_secret",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "houshoku_satei"
));

$proto144["m_sql"] = "`shouhin`.`price_secret`";
$proto144["m_srcTableName"] = "houshoku_satei";
$proto144["m_expr"]=$obj;
$proto144["m_alias"] = "";
$obj = new SQLFieldListItem($proto144);

$proto0["m_fieldlist"][]=$obj;
						$proto146=array();
			$obj = new SQLField(array(
	"m_strName" => "sales_price_secret",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "houshoku_satei"
));

$proto146["m_sql"] = "`shouhin`.`sales_price_secret`";
$proto146["m_srcTableName"] = "houshoku_satei";
$proto146["m_expr"]=$obj;
$proto146["m_alias"] = "";
$obj = new SQLFieldListItem($proto146);

$proto0["m_fieldlist"][]=$obj;
						$proto148=array();
			$obj = new SQLField(array(
	"m_strName" => "eq",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "houshoku_satei"
));

$proto148["m_sql"] = "`shouhin`.`eq`";
$proto148["m_srcTableName"] = "houshoku_satei";
$proto148["m_expr"]=$obj;
$proto148["m_alias"] = "";
$obj = new SQLFieldListItem($proto148);

$proto0["m_fieldlist"][]=$obj;
						$proto150=array();
			$obj = new SQLField(array(
	"m_strName" => "en",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "houshoku_satei"
));

$proto150["m_sql"] = "`shouhin`.`en`";
$proto150["m_srcTableName"] = "houshoku_satei";
$proto150["m_expr"]=$obj;
$proto150["m_alias"] = "";
$obj = new SQLFieldListItem($proto150);

$proto0["m_fieldlist"][]=$obj;
						$proto152=array();
			$obj = new SQLField(array(
	"m_strName" => "line",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "houshoku_satei"
));

$proto152["m_sql"] = "`shouhin`.`line`";
$proto152["m_srcTableName"] = "houshoku_satei";
$proto152["m_expr"]=$obj;
$proto152["m_alias"] = "";
$obj = new SQLFieldListItem($proto152);

$proto0["m_fieldlist"][]=$obj;
						$proto154=array();
			$obj = new SQLField(array(
	"m_strName" => "item_name",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "houshoku_satei"
));

$proto154["m_sql"] = "`shouhin`.`item_name`";
$proto154["m_srcTableName"] = "houshoku_satei";
$proto154["m_expr"]=$obj;
$proto154["m_alias"] = "";
$obj = new SQLFieldListItem($proto154);

$proto0["m_fieldlist"][]=$obj;
						$proto156=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_color_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "houshoku_satei"
));

$proto156["m_sql"] = "`shouhin`.`yahoo_color_id`";
$proto156["m_srcTableName"] = "houshoku_satei";
$proto156["m_expr"]=$obj;
$proto156["m_alias"] = "";
$obj = new SQLFieldListItem($proto156);

$proto0["m_fieldlist"][]=$obj;
						$proto158=array();
			$obj = new SQLField(array(
	"m_strName" => "serial_number",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "houshoku_satei"
));

$proto158["m_sql"] = "`shouhin`.`serial_number`";
$proto158["m_srcTableName"] = "houshoku_satei";
$proto158["m_expr"]=$obj;
$proto158["m_alias"] = "";
$obj = new SQLFieldListItem($proto158);

$proto0["m_fieldlist"][]=$obj;
						$proto160=array();
			$obj = new SQLField(array(
	"m_strName" => "Exhibition_Date",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "houshoku_satei"
));

$proto160["m_sql"] = "`shouhin`.`Exhibition_Date`";
$proto160["m_srcTableName"] = "houshoku_satei";
$proto160["m_expr"]=$obj;
$proto160["m_alias"] = "";
$obj = new SQLFieldListItem($proto160);

$proto0["m_fieldlist"][]=$obj;
						$proto162=array();
			$obj = new SQLField(array(
	"m_strName" => "search_keyword",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "houshoku_satei"
));

$proto162["m_sql"] = "`shouhin`.`search_keyword`";
$proto162["m_srcTableName"] = "houshoku_satei";
$proto162["m_expr"]=$obj;
$proto162["m_alias"] = "";
$obj = new SQLFieldListItem($proto162);

$proto0["m_fieldlist"][]=$obj;
						$proto164=array();
			$obj = new SQLField(array(
	"m_strName" => "stamp",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "houshoku_satei"
));

$proto164["m_sql"] = "`shouhin`.`stamp`";
$proto164["m_srcTableName"] = "houshoku_satei";
$proto164["m_expr"]=$obj;
$proto164["m_alias"] = "";
$obj = new SQLFieldListItem($proto164);

$proto0["m_fieldlist"][]=$obj;
						$proto166=array();
			$obj = new SQLField(array(
	"m_strName" => "motif",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "houshoku_satei"
));

$proto166["m_sql"] = "`shouhin`.`motif`";
$proto166["m_srcTableName"] = "houshoku_satei";
$proto166["m_expr"]=$obj;
$proto166["m_alias"] = "";
$obj = new SQLFieldListItem($proto166);

$proto0["m_fieldlist"][]=$obj;
						$proto168=array();
			$obj = new SQLField(array(
	"m_strName" => "Setting",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "houshoku_satei"
));

$proto168["m_sql"] = "`shouhin`.`Setting`";
$proto168["m_srcTableName"] = "houshoku_satei";
$proto168["m_expr"]=$obj;
$proto168["m_alias"] = "";
$obj = new SQLFieldListItem($proto168);

$proto0["m_fieldlist"][]=$obj;
						$proto170=array();
			$obj = new SQLField(array(
	"m_strName" => "processing",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "houshoku_satei"
));

$proto170["m_sql"] = "`shouhin`.`processing`";
$proto170["m_srcTableName"] = "houshoku_satei";
$proto170["m_expr"]=$obj;
$proto170["m_alias"] = "";
$obj = new SQLFieldListItem($proto170);

$proto0["m_fieldlist"][]=$obj;
						$proto172=array();
			$obj = new SQLField(array(
	"m_strName" => "Ring_size",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "houshoku_satei"
));

$proto172["m_sql"] = "`shouhin`.`Ring_size`";
$proto172["m_srcTableName"] = "houshoku_satei";
$proto172["m_expr"]=$obj;
$proto172["m_alias"] = "";
$obj = new SQLFieldListItem($proto172);

$proto0["m_fieldlist"][]=$obj;
						$proto174=array();
			$obj = new SQLField(array(
	"m_strName" => "price_for_site",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "houshoku_satei"
));

$proto174["m_sql"] = "`shouhin`.`price_for_site`";
$proto174["m_srcTableName"] = "houshoku_satei";
$proto174["m_expr"]=$obj;
$proto174["m_alias"] = "";
$obj = new SQLFieldListItem($proto174);

$proto0["m_fieldlist"][]=$obj;
						$proto176=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_category_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "houshoku_satei"
));

$proto176["m_sql"] = "`shouhin`.`yahoo_category_id`";
$proto176["m_srcTableName"] = "houshoku_satei";
$proto176["m_expr"]=$obj;
$proto176["m_alias"] = "";
$obj = new SQLFieldListItem($proto176);

$proto0["m_fieldlist"][]=$obj;
						$proto178=array();
			$obj = new SQLField(array(
	"m_strName" => "Qty",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "houshoku_satei"
));

$proto178["m_sql"] = "`shouhin`.`Qty`";
$proto178["m_srcTableName"] = "houshoku_satei";
$proto178["m_expr"]=$obj;
$proto178["m_alias"] = "";
$obj = new SQLFieldListItem($proto178);

$proto0["m_fieldlist"][]=$obj;
						$proto180=array();
			$obj = new SQLField(array(
	"m_strName" => "sales_period",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "houshoku_satei"
));

$proto180["m_sql"] = "`shouhin`.`sales_period`";
$proto180["m_srcTableName"] = "houshoku_satei";
$proto180["m_expr"]=$obj;
$proto180["m_alias"] = "";
$obj = new SQLFieldListItem($proto180);

$proto0["m_fieldlist"][]=$obj;
						$proto182=array();
			$obj = new SQLField(array(
	"m_strName" => "starting_price",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "houshoku_satei"
));

$proto182["m_sql"] = "`shouhin`.`starting_price`";
$proto182["m_srcTableName"] = "houshoku_satei";
$proto182["m_expr"]=$obj;
$proto182["m_alias"] = "";
$obj = new SQLFieldListItem($proto182);

$proto0["m_fieldlist"][]=$obj;
						$proto184=array();
			$obj = new SQLField(array(
	"m_strName" => "ecc_seq",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "houshoku_satei"
));

$proto184["m_sql"] = "`Eoc`.`ecc_seq`";
$proto184["m_srcTableName"] = "houshoku_satei";
$proto184["m_expr"]=$obj;
$proto184["m_alias"] = "";
$obj = new SQLFieldListItem($proto184);

$proto0["m_fieldlist"][]=$obj;
						$proto186=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_junle",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "houshoku_satei"
));

$proto186["m_sql"] = "`shouhin`.`yahoo_junle`";
$proto186["m_srcTableName"] = "houshoku_satei";
$proto186["m_expr"]=$obj;
$proto186["m_alias"] = "";
$obj = new SQLFieldListItem($proto186);

$proto0["m_fieldlist"][]=$obj;
						$proto188=array();
			$obj = new SQLField(array(
	"m_strName" => "logo",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "houshoku_satei"
));

$proto188["m_sql"] = "`shouhin`.`logo`";
$proto188["m_srcTableName"] = "houshoku_satei";
$proto188["m_expr"]=$obj;
$proto188["m_alias"] = "";
$obj = new SQLFieldListItem($proto188);

$proto0["m_fieldlist"][]=$obj;
						$proto190=array();
			$obj = new SQLField(array(
	"m_strName" => "parts",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "houshoku_satei"
));

$proto190["m_sql"] = "`shouhin`.`parts`";
$proto190["m_srcTableName"] = "houshoku_satei";
$proto190["m_expr"]=$obj;
$proto190["m_alias"] = "";
$obj = new SQLFieldListItem($proto190);

$proto0["m_fieldlist"][]=$obj;
						$proto192=array();
			$obj = new SQLField(array(
	"m_strName" => "guarantee",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "houshoku_satei"
));

$proto192["m_sql"] = "`shouhin`.`guarantee`";
$proto192["m_srcTableName"] = "houshoku_satei";
$proto192["m_expr"]=$obj;
$proto192["m_alias"] = "";
$obj = new SQLFieldListItem($proto192);

$proto0["m_fieldlist"][]=$obj;
						$proto194=array();
			$obj = new SQLField(array(
	"m_strName" => "errors",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "houshoku_satei"
));

$proto194["m_sql"] = "`shouhin`.`errors`";
$proto194["m_srcTableName"] = "houshoku_satei";
$proto194["m_expr"]=$obj;
$proto194["m_alias"] = "";
$obj = new SQLFieldListItem($proto194);

$proto0["m_fieldlist"][]=$obj;
						$proto196=array();
			$obj = new SQLField(array(
	"m_strName" => "designer",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "houshoku_satei"
));

$proto196["m_sql"] = "`shouhin`.`designer`";
$proto196["m_srcTableName"] = "houshoku_satei";
$proto196["m_expr"]=$obj;
$proto196["m_alias"] = "";
$obj = new SQLFieldListItem($proto196);

$proto0["m_fieldlist"][]=$obj;
						$proto198=array();
			$obj = new SQLField(array(
	"m_strName" => "hahakai",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "houshoku_satei"
));

$proto198["m_sql"] = "`shouhin`.`hahakai`";
$proto198["m_srcTableName"] = "houshoku_satei";
$proto198["m_expr"]=$obj;
$proto198["m_alias"] = "";
$obj = new SQLFieldListItem($proto198);

$proto0["m_fieldlist"][]=$obj;
						$proto200=array();
			$obj = new SQLField(array(
	"m_strName" => "effect",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "houshoku_satei"
));

$proto200["m_sql"] = "`shouhin`.`effect`";
$proto200["m_srcTableName"] = "houshoku_satei";
$proto200["m_expr"]=$obj;
$proto200["m_alias"] = "";
$obj = new SQLFieldListItem($proto200);

$proto0["m_fieldlist"][]=$obj;
						$proto202=array();
			$obj = new SQLField(array(
	"m_strName" => "shape",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "houshoku_satei"
));

$proto202["m_sql"] = "`shouhin`.`shape`";
$proto202["m_srcTableName"] = "houshoku_satei";
$proto202["m_expr"]=$obj;
$proto202["m_alias"] = "";
$obj = new SQLFieldListItem($proto202);

$proto0["m_fieldlist"][]=$obj;
						$proto204=array();
			$obj = new SQLField(array(
	"m_strName" => "cutting_style",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "houshoku_satei"
));

$proto204["m_sql"] = "`shouhin`.`cutting_style`";
$proto204["m_srcTableName"] = "houshoku_satei";
$proto204["m_expr"]=$obj;
$proto204["m_alias"] = "";
$obj = new SQLFieldListItem($proto204);

$proto0["m_fieldlist"][]=$obj;
						$proto206=array();
			$obj = new SQLField(array(
	"m_strName" => "chain_type",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "houshoku_satei"
));

$proto206["m_sql"] = "`shouhin`.`chain_type`";
$proto206["m_srcTableName"] = "houshoku_satei";
$proto206["m_expr"]=$obj;
$proto206["m_alias"] = "";
$obj = new SQLFieldListItem($proto206);

$proto0["m_fieldlist"][]=$obj;
						$proto208=array();
			$obj = new SQLField(array(
	"m_strName" => "number_of_stones",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "houshoku_satei"
));

$proto208["m_sql"] = "`shouhin`.`number_of_stones`";
$proto208["m_srcTableName"] = "houshoku_satei";
$proto208["m_expr"]=$obj;
$proto208["m_alias"] = "";
$obj = new SQLFieldListItem($proto208);

$proto0["m_fieldlist"][]=$obj;
						$proto210=array();
			$obj = new SQLField(array(
	"m_strName" => "satei_error",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "houshoku_satei"
));

$proto210["m_sql"] = "`shouhin`.`satei_error`";
$proto210["m_srcTableName"] = "houshoku_satei";
$proto210["m_expr"]=$obj;
$proto210["m_alias"] = "";
$obj = new SQLFieldListItem($proto210);

$proto0["m_fieldlist"][]=$obj;
						$proto212=array();
			$obj = new SQLField(array(
	"m_strName" => "producing_area",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "houshoku_satei"
));

$proto212["m_sql"] = "`shouhin`.`producing_area`";
$proto212["m_srcTableName"] = "houshoku_satei";
$proto212["m_expr"]=$obj;
$proto212["m_alias"] = "";
$obj = new SQLFieldListItem($proto212);

$proto0["m_fieldlist"][]=$obj;
						$proto214=array();
			$obj = new SQLField(array(
	"m_strName" => "shape_supplement",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "houshoku_satei"
));

$proto214["m_sql"] = "`shouhin`.`shape_supplement`";
$proto214["m_srcTableName"] = "houshoku_satei";
$proto214["m_expr"]=$obj;
$proto214["m_alias"] = "";
$obj = new SQLFieldListItem($proto214);

$proto0["m_fieldlist"][]=$obj;
						$proto216=array();
			$obj = new SQLField(array(
	"m_strName" => "side_gem",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "houshoku_satei"
));

$proto216["m_sql"] = "`shouhin`.`side_gem`";
$proto216["m_srcTableName"] = "houshoku_satei";
$proto216["m_expr"]=$obj;
$proto216["m_alias"] = "";
$obj = new SQLFieldListItem($proto216);

$proto0["m_fieldlist"][]=$obj;
						$proto218=array();
			$obj = new SQLField(array(
	"m_strName" => "product_style",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "houshoku_satei"
));

$proto218["m_sql"] = "`shouhin`.`product_style`";
$proto218["m_srcTableName"] = "houshoku_satei";
$proto218["m_expr"]=$obj;
$proto218["m_alias"] = "";
$obj = new SQLFieldListItem($proto218);

$proto0["m_fieldlist"][]=$obj;
						$proto220=array();
			$obj = new SQLField(array(
	"m_strName" => "unit",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "houshoku_satei"
));

$proto220["m_sql"] = "`shouhin`.`unit`";
$proto220["m_srcTableName"] = "houshoku_satei";
$proto220["m_expr"]=$obj;
$proto220["m_alias"] = "";
$obj = new SQLFieldListItem($proto220);

$proto0["m_fieldlist"][]=$obj;
						$proto222=array();
			$obj = new SQLField(array(
	"m_strName" => "hall_mark",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "houshoku_satei"
));

$proto222["m_sql"] = "`shouhin`.`hall_mark`";
$proto222["m_srcTableName"] = "houshoku_satei";
$proto222["m_expr"]=$obj;
$proto222["m_alias"] = "";
$obj = new SQLFieldListItem($proto222);

$proto0["m_fieldlist"][]=$obj;
						$proto224=array();
			$obj = new SQLField(array(
	"m_strName" => "plate",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "houshoku_satei"
));

$proto224["m_sql"] = "`shouhin`.`plate`";
$proto224["m_srcTableName"] = "houshoku_satei";
$proto224["m_expr"]=$obj;
$proto224["m_alias"] = "";
$obj = new SQLFieldListItem($proto224);

$proto0["m_fieldlist"][]=$obj;
						$proto226=array();
			$obj = new SQLField(array(
	"m_strName" => "official_url",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "houshoku_satei"
));

$proto226["m_sql"] = "`shouhin`.`official_url`";
$proto226["m_srcTableName"] = "houshoku_satei";
$proto226["m_expr"]=$obj;
$proto226["m_alias"] = "";
$obj = new SQLFieldListItem($proto226);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto228=array();
$proto228["m_link"] = "SQLL_MAIN";
			$proto229=array();
$proto229["m_strName"] = "shouhin";
$proto229["m_srcTableName"] = "houshoku_satei";
$proto229["m_columns"] = array();
$proto229["m_columns"][] = "product_id";
$proto229["m_columns"][] = "category_id";
$proto229["m_columns"][] = "goods_title";
$proto229["m_columns"][] = "title";
$proto229["m_columns"][] = "sub_category_id1";
$proto229["m_columns"][] = "ecc_id";
$proto229["m_columns"][] = "price";
$proto229["m_columns"][] = "yahoo";
$proto229["m_columns"][] = "remark";
$proto229["m_columns"][] = "sales_price";
$proto229["m_columns"][] = "description";
$proto229["m_columns"][] = "status";
$proto229["m_columns"][] = "product_num";
$proto229["m_columns"][] = "updated_at";
$proto229["m_columns"][] = "yahoo_size";
$proto229["m_columns"][] = "yahoo_title";
$proto229["m_columns"][] = "yahoo_junle";
$proto229["m_columns"][] = "yahoo_sankou_uwadai";
$proto229["m_columns"][] = "yahoo_sozai";
$proto229["m_columns"][] = "yahoo_color";
$proto229["m_columns"][] = "yahoo_kataban";
$proto229["m_columns"][] = "yahoo_condition1";
$proto229["m_columns"][] = "yahoo_condition2";
$proto229["m_columns"][] = "yahoo_fuzokuhin";
$proto229["m_columns"][] = "yahoo_sinaban";
$proto229["m_columns"][] = "yahoo_saisun_sha";
$proto229["m_columns"][] = "yahoo_sex";
$proto229["m_columns"][] = "box_id";
$proto229["m_columns"][] = "nyuukin_price";
$proto229["m_columns"][] = "updated_by";
$proto229["m_columns"][] = "raku_title";
$proto229["m_columns"][] = "raku_hyoujisaki_category2";
$proto229["m_columns"][] = "raku_hyoujisaki_category";
$proto229["m_columns"][] = "raku_hyoujisaki_category3";
$proto229["m_columns"][] = "timesta";
$proto229["m_columns"][] = "saisun_start";
$proto229["m_columns"][] = "saisun_end";
$proto229["m_columns"][] = "label_output_flag";
$proto229["m_columns"][] = "season";
$proto229["m_columns"][] = "kanryou_henbi";
$proto229["m_columns"][] = "box_sort";
$proto229["m_columns"][] = "satei_by";
$proto229["m_columns"][] = "kaitori_by";
$proto229["m_columns"][] = "comment";
$proto229["m_columns"][] = "satei_hi";
$proto229["m_columns"][] = "kaitory_hi";
$proto229["m_columns"][] = "REG_PHOTOGRAPHER";
$proto229["m_columns"][] = "REG_AUTHOR";
$proto229["m_columns"][] = "REG_PACKINGS";
$proto229["m_columns"][] = "REG_KAKOU_DATE";
$proto229["m_columns"][] = "REG_KAKOU";
$proto229["m_columns"][] = "REG_EXHIBITOR";
$proto229["m_columns"][] = "REG_PHOTOGRAPHER_DATE";
$proto229["m_columns"][] = "DT_PACKING_DATE";
$proto229["m_columns"][] = "DT_UP_DATE";
$proto229["m_columns"][] = "AWAZU_DATE";
$proto229["m_columns"][] = "AWAZU_NIN";
$proto229["m_columns"][] = "sabun_date";
$proto229["m_columns"][] = "browseid";
$proto229["m_columns"][] = "browsenode";
$proto229["m_columns"][] = "gold_property";
$proto229["m_columns"][] = "ichiba_title";
$proto229["m_columns"][] = "Gram";
$proto229["m_columns"][] = "Parent_stone";
$proto229["m_columns"][] = "Aside_stone";
$proto229["m_columns"][] = "Appraiser";
$proto229["m_columns"][] = "Remarks";
$proto229["m_columns"][] = "Destination_selling";
$proto229["m_columns"][] = "Finish";
$proto229["m_columns"][] = "Discrimination";
$proto229["m_columns"][] = "accessories";
$proto229["m_columns"][] = "priority";
$proto229["m_columns"][] = "A_storage";
$proto229["m_columns"][] = "price_per_gram";
$proto229["m_columns"][] = "price_per_parent_stone";
$proto229["m_columns"][] = "price_per_aside_stone";
$proto229["m_columns"][] = "price_secret";
$proto229["m_columns"][] = "sales_price_secret";
$proto229["m_columns"][] = "eq";
$proto229["m_columns"][] = "en";
$proto229["m_columns"][] = "line";
$proto229["m_columns"][] = "item_name";
$proto229["m_columns"][] = "handle";
$proto229["m_columns"][] = "yahoo_color_id";
$proto229["m_columns"][] = "raku_hyoujisaki_category4";
$proto229["m_columns"][] = "raku_hyoujisaki_category5";
$proto229["m_columns"][] = "raku_dir_1";
$proto229["m_columns"][] = "raku_dir_2";
$proto229["m_columns"][] = "raku_dir_3";
$proto229["m_columns"][] = "raku_dir_4";
$proto229["m_columns"][] = "raku_dir_5";
$proto229["m_columns"][] = "raku_dir_result";
$proto229["m_columns"][] = "raku_tag_result";
$proto229["m_columns"][] = "serial_number";
$proto229["m_columns"][] = "Exhibition_Date";
$proto229["m_columns"][] = "search_keyword";
$proto229["m_columns"][] = "stamp";
$proto229["m_columns"][] = "motif";
$proto229["m_columns"][] = "Setting";
$proto229["m_columns"][] = "processing";
$proto229["m_columns"][] = "Sleeve_Length";
$proto229["m_columns"][] = "length";
$proto229["m_columns"][] = "Ring_size";
$proto229["m_columns"][] = "price_for_site";
$proto229["m_columns"][] = "yahoo_category_id";
$proto229["m_columns"][] = "Qty";
$proto229["m_columns"][] = "sales_period";
$proto229["m_columns"][] = "starting_price";
$proto229["m_columns"][] = "FLAG_NO_ARRIVAL";
$proto229["m_columns"][] = "amount_of_image";
$proto229["m_columns"][] = "csv";
$proto229["m_columns"][] = "return_output_flag";
$proto229["m_columns"][] = "wasabi_flag";
$proto229["m_columns"][] = "ws_import_date";
$proto229["m_columns"][] = "logo";
$proto229["m_columns"][] = "parts";
$proto229["m_columns"][] = "country_of_origin";
$proto229["m_columns"][] = "zipper";
$proto229["m_columns"][] = "guarantee";
$proto229["m_columns"][] = "errors";
$proto229["m_columns"][] = "designer";
$proto229["m_columns"][] = "hahakai";
$proto229["m_columns"][] = "effect";
$proto229["m_columns"][] = "shape";
$proto229["m_columns"][] = "cutting_style";
$proto229["m_columns"][] = "chain_type";
$proto229["m_columns"][] = "number_of_stones";
$proto229["m_columns"][] = "amount";
$proto229["m_columns"][] = "satei_error";
$proto229["m_columns"][] = "producing_area";
$proto229["m_columns"][] = "shape_supplement";
$proto229["m_columns"][] = "side_gem";
$proto229["m_columns"][] = "product_style";
$proto229["m_columns"][] = "collar_neck_line";
$proto229["m_columns"][] = "breast";
$proto229["m_columns"][] = "silhouette";
$proto229["m_columns"][] = "sleeve";
$proto229["m_columns"][] = "unit";
$proto229["m_columns"][] = "hall_mark";
$proto229["m_columns"][] = "plate";
$proto229["m_columns"][] = "toe";
$proto229["m_columns"][] = "heel";
$proto229["m_columns"][] = "cloth";
$proto229["m_columns"][] = "serial_number_for_storage";
$proto229["m_columns"][] = "official_url";
$proto229["m_columns"][] = "main_details";
$proto229["m_columns"][] = "notation_size";
$proto229["m_columns"][] = "shoe_size_jp";
$proto229["m_columns"][] = "Eoc_chigins2_id";
$proto229["m_columns"][] = "country_of_origin_name";
$proto229["m_columns"][] = "mailingkit_id";
$proto229["m_columns"][] = "DA_COMMENTSANDTOTAL";
$proto229["m_columns"][] = "DA_WEIGHT";
$proto229["m_columns"][] = "DA_PER_CARAT";
$proto229["m_columns"][] = "DA_SHAPE";
$proto229["m_columns"][] = "DA_SELFGRES";
$proto229["m_columns"][] = "DA_ORIGINALGRADEMLIKENED";
$proto229["m_columns"][] = "DA_SUGARCANE";
$proto229["m_columns"][] = "DA_RAPA";
$proto229["m_columns"][] = "DA_INTENSITY";
$proto229["m_columns"][] = "DA_OVERTONE";
$proto229["m_columns"][] = "DA_COLOR";
$proto229["m_columns"][] = "DA_CLARITY";
$proto229["m_columns"][] = "DA_CUT";
$proto229["m_columns"][] = "DA_POLISH";
$proto229["m_columns"][] = "DA_SYMMETRY";
$proto229["m_columns"][] = "DA_FLUO";
$proto229["m_columns"][] = "DA_COLOR_FLUO";
$proto229["m_columns"][] = "DA_WIDE";
$proto229["m_columns"][] = "DA_HIGH";
$proto229["m_columns"][] = "DA_DEPTH";
$proto229["m_columns"][] = "DA_APPRAISER";
$proto229["m_columns"][] = "DA_FRAPA";
$proto229["m_columns"][] = "DA_RATE";
$proto229["m_columns"][] = "DA_UNIT_PRICE_UNPLUG";
$proto229["m_columns"][] = "DA_YOURNAME";
$proto229["m_columns"][] = "DA_RAPAB";
$proto229["m_columns"][] = "DA_GROSSPROFIT";
$proto229["m_columns"][] = "DA_INTEREST_1";
$proto229["m_columns"][] = "DA_no";
$proto229["m_columns"][] = "kinsa_flag";
$proto229["m_columns"][] = "price_for_site_flag";
$proto229["m_columns"][] = "Eoc_takuhai_id";
$proto229["m_columns"][] = "Eoc_unfinished_id";
$proto229["m_columns"][] = "Eoc_chigins_unfinished_id";
$obj = new SQLTable($proto229);

$proto228["m_table"] = $obj;
$proto228["m_sql"] = "`shouhin`";
$proto228["m_alias"] = "";
$proto228["m_srcTableName"] = "houshoku_satei";
$proto230=array();
$proto230["m_sql"] = "";
$proto230["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto230["m_column"]=$obj;
$proto230["m_contained"] = array();
$proto230["m_strCase"] = "";
$proto230["m_havingmode"] = false;
$proto230["m_inBrackets"] = false;
$proto230["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto230);

$proto228["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto228);

$proto0["m_fromlist"][]=$obj;
												$proto232=array();
$proto232["m_link"] = "SQLL_LEFTJOIN";
			$proto233=array();
$proto233["m_strName"] = "Eoc";
$proto233["m_srcTableName"] = "houshoku_satei";
$proto233["m_columns"] = array();
$proto233["m_columns"][] = "ecc_id";
$proto233["m_columns"][] = "ecc_seq";
$proto233["m_columns"][] = "name1";
$proto233["m_columns"][] = "created_t";
$proto233["m_columns"][] = "registerd_id";
$proto233["m_columns"][] = "kaitori_staff_id";
$proto233["m_columns"][] = "name2";
$proto233["m_columns"][] = "wareki";
$proto233["m_columns"][] = "b1";
$proto233["m_columns"][] = "b2";
$proto233["m_columns"][] = "b3";
$proto233["m_columns"][] = "birth_day";
$proto233["m_columns"][] = "age";
$proto233["m_columns"][] = "zip";
$proto233["m_columns"][] = "zip1";
$proto233["m_columns"][] = "zip2";
$proto233["m_columns"][] = "address1";
$proto233["m_columns"][] = "address2";
$proto233["m_columns"][] = "address3";
$proto233["m_columns"][] = "tel";
$proto233["m_columns"][] = "tel2";
$proto233["m_columns"][] = "mail1";
$proto233["m_columns"][] = "mail2";
$proto233["m_columns"][] = "address_code";
$proto233["m_columns"][] = "bank_name";
$proto233["m_columns"][] = "bank_blunch_code";
$proto233["m_columns"][] = "bank_yokin_shubetu";
$proto233["m_columns"][] = "bank_account";
$proto233["m_columns"][] = "bank_acoount_name";
$proto233["m_columns"][] = "haisou_bangou";
$proto233["m_columns"][] = "sise_houhou";
$proto233["m_columns"][] = "hentou_houhou";
$proto233["m_columns"][] = "hentou_houhou_time";
$proto233["m_columns"][] = "mousikomi_id";
$proto233["m_columns"][] = "hituyou_shorui";
$proto233["m_columns"][] = "seiyaku_fuseiritu";
$proto233["m_columns"][] = "mitumori_taku";
$proto233["m_columns"][] = "seacanse";
$proto233["m_columns"][] = "remark";
$proto233["m_columns"][] = "type";
$proto233["m_columns"][] = "sales_flag";
$proto233["m_columns"][] = "src_type";
$proto233["m_columns"][] = "liquidation_shop_code";
$proto233["m_columns"][] = "insurance_amount_print";
$proto233["m_columns"][] = "jis_code";
$proto233["m_columns"][] = "updated_at";
$proto233["m_columns"][] = "_registerd_id";
$proto233["m_columns"][] = "mail_check_type";
$proto233["m_columns"][] = "purchase_type";
$proto233["m_columns"][] = "sex";
$proto233["m_columns"][] = "m_tel";
$proto233["m_columns"][] = "fax";
$proto233["m_columns"][] = "chigin_kaitori";
$proto233["m_columns"][] = "option1";
$proto233["m_columns"][] = "option2";
$proto233["m_columns"][] = "option3";
$proto233["m_columns"][] = "option4";
$proto233["m_columns"][] = "option5";
$proto233["m_columns"][] = "option6";
$proto233["m_columns"][] = "option7";
$proto233["m_columns"][] = "option8";
$proto233["m_columns"][] = "option9";
$proto233["m_columns"][] = "option10";
$proto233["m_columns"][] = "option11";
$proto233["m_columns"][] = "option12";
$proto233["m_columns"][] = "option13";
$proto233["m_columns"][] = "rakuda_csv_flag";
$proto233["m_columns"][] = "EOC_COURIER_CHECK";
$proto233["m_columns"][] = "EOC_SIZE";
$proto233["m_columns"][] = "EOC_NUMBER";
$proto233["m_columns"][] = "EOC_REUSE";
$proto233["m_columns"][] = "EOC__DELIVERY_DATES";
$proto233["m_columns"][] = "EOC_SPECIFIED_TIME";
$proto233["m_columns"][] = "FIRST_NAME2";
$proto233["m_columns"][] = "LAST_NAME2";
$proto233["m_columns"][] = "EOC__DATE_AND_TIME_2";
$proto233["m_columns"][] = "EOC__BOX_NUMBER";
$proto233["m_columns"][] = "FIRST_NAME_KANA";
$proto233["m_columns"][] = "LAST_NAME_KANA";
$proto233["m_columns"][] = "FLAG_SPEED";
$proto233["m_columns"][] = "SEARCH_MEDIA";
$proto233["m_columns"][] = "SEARCH_SITE";
$proto233["m_columns"][] = "UN_REACHABLE";
$proto233["m_columns"][] = "FLG_MAIL_SAGAWA";
$proto233["m_columns"][] = "FLG_MAIL_OTHER";
$proto233["m_columns"][] = "ALLSEIYAKU";
$proto233["m_columns"][] = "ICHIBUSEIYAKU";
$proto233["m_columns"][] = "seiyakukin";
$proto233["m_columns"][] = "kaitorihuka";
$proto233["m_columns"][] = "awazu_date";
$proto233["m_columns"][] = "seiyaku_price";
$proto233["m_columns"][] = "eoc_search_keyword";
$proto233["m_columns"][] = "sonota";
$proto233["m_columns"][] = "size_kosuu";
$proto233["m_columns"][] = "sagawa_shuuka_flag";
$proto233["m_columns"][] = "line_check";
$proto233["m_columns"][] = "sagawa_shuukairai_denwabangou";
$proto233["m_columns"][] = "kaitori_sougak";
$proto233["m_columns"][] = "flag";
$proto233["m_columns"][] = "key_code";
$proto233["m_columns"][] = "dm_check_type";
$proto233["m_columns"][] = "kit_flag";
$proto233["m_columns"][] = "kit_done_flag";
$proto233["m_columns"][] = "bank_details_code";
$proto233["m_columns"][] = "bank_details_blunch_name";
$proto233["m_columns"][] = "bank_details_blunch_code";
$proto233["m_columns"][] = "bank_details_account_number";
$proto233["m_columns"][] = "bank_details_symbol";
$proto233["m_columns"][] = "bank_details_number";
$proto233["m_columns"][] = "bank_details_account_name";
$proto233["m_columns"][] = "bank_details_deposit_type";
$proto233["m_columns"][] = "mypage_id";
$proto233["m_columns"][] = "UN_REACHABLE_brand";
$proto233["m_columns"][] = "sagawa_haisou_hoken";
$proto233["m_columns"][] = "transfer_confirm";
$obj = new SQLTable($proto233);

$proto232["m_table"] = $obj;
$proto232["m_sql"] = "LEFT OUTER JOIN `Eoc` ON `shouhin`.`ecc_id` = `Eoc`.`ecc_id`";
$proto232["m_alias"] = "";
$proto232["m_srcTableName"] = "houshoku_satei";
$proto234=array();
$proto234["m_sql"] = "`shouhin`.`ecc_id` = `Eoc`.`ecc_id`";
$proto234["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "ecc_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "houshoku_satei"
));

$proto234["m_column"]=$obj;
$proto234["m_contained"] = array();
$proto234["m_strCase"] = "= `Eoc`.`ecc_id`";
$proto234["m_havingmode"] = false;
$proto234["m_inBrackets"] = false;
$proto234["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto234);

$proto232["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto232);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto236=array();
						$obj = new SQLField(array(
	"m_strName" => "product_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "houshoku_satei"
));

$proto236["m_column"]=$obj;
$proto236["m_bAsc"] = 0;
$proto236["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto236);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="houshoku_satei";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_houshoku_satei = createSqlQuery_houshoku_satei();


	
		;

																																																																																																															

$tdatahoushoku_satei[".sqlquery"] = $queryData_houshoku_satei;

include_once(getabspath("include/houshoku_satei_events.php"));
$tableEvents["houshoku_satei"] = new eventclass_houshoku_satei;
$tdatahoushoku_satei[".hasEvents"] = true;

?>