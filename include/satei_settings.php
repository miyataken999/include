<?php
require_once(getabspath("classes/cipherer.php"));




$tdatasatei = array();
	$tdatasatei[".truncateText"] = true;
	$tdatasatei[".NumberOfChars"] = 80;
	$tdatasatei[".ShortName"] = "satei";
	$tdatasatei[".OwnerID"] = "";
	$tdatasatei[".OriginalTable"] = "shouhin";

//	field labels
$fieldLabelssatei = array();
$fieldToolTipssatei = array();
$pageTitlessatei = array();
$placeHolderssatei = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelssatei["Japanese"] = array();
	$fieldToolTipssatei["Japanese"] = array();
	$placeHolderssatei["Japanese"] = array();
	$pageTitlessatei["Japanese"] = array();
	$fieldLabelssatei["Japanese"]["product_id"] = "SEQ";
	$fieldToolTipssatei["Japanese"]["product_id"] = "";
	$placeHolderssatei["Japanese"]["product_id"] = "";
	$fieldLabelssatei["Japanese"]["category_id"] = "大カテゴリー";
	$fieldToolTipssatei["Japanese"]["category_id"] = "";
	$placeHolderssatei["Japanese"]["category_id"] = "";
	$fieldLabelssatei["Japanese"]["goods_title"] = "アイテム名";
	$fieldToolTipssatei["Japanese"]["goods_title"] = "";
	$placeHolderssatei["Japanese"]["goods_title"] = "";
	$fieldLabelssatei["Japanese"]["title"] = "タイトル";
	$fieldToolTipssatei["Japanese"]["title"] = "";
	$placeHolderssatei["Japanese"]["title"] = "";
	$fieldLabelssatei["Japanese"]["sub_category_id1"] = "中カテゴリー";
	$fieldToolTipssatei["Japanese"]["sub_category_id1"] = "";
	$placeHolderssatei["Japanese"]["sub_category_id1"] = "";
	$fieldLabelssatei["Japanese"]["ecc_id"] = "Ecc Id";
	$fieldToolTipssatei["Japanese"]["ecc_id"] = "";
	$placeHolderssatei["Japanese"]["ecc_id"] = "";
	$fieldLabelssatei["Japanese"]["price"] = "買取額";
	$fieldToolTipssatei["Japanese"]["price"] = "";
	$placeHolderssatei["Japanese"]["price"] = "";
	$fieldLabelssatei["Japanese"]["yahoo"] = "Yahoo";
	$fieldToolTipssatei["Japanese"]["yahoo"] = "";
	$placeHolderssatei["Japanese"]["yahoo"] = "";
	$fieldLabelssatei["Japanese"]["remark"] = "宝飾備考";
	$fieldToolTipssatei["Japanese"]["remark"] = "";
	$placeHolderssatei["Japanese"]["remark"] = "";
	$fieldLabelssatei["Japanese"]["sales_price"] = "販売額";
	$fieldToolTipssatei["Japanese"]["sales_price"] = "";
	$placeHolderssatei["Japanese"]["sales_price"] = "";
	$fieldLabelssatei["Japanese"]["description"] = "メモ";
	$fieldToolTipssatei["Japanese"]["description"] = "";
	$placeHolderssatei["Japanese"]["description"] = "";
	$fieldLabelssatei["Japanese"]["status"] = "商品状態";
	$fieldToolTipssatei["Japanese"]["status"] = "";
	$placeHolderssatei["Japanese"]["status"] = "";
	$fieldLabelssatei["Japanese"]["product_num"] = "ブランドID";
	$fieldToolTipssatei["Japanese"]["product_num"] = "";
	$placeHolderssatei["Japanese"]["product_num"] = "";
	$fieldLabelssatei["Japanese"]["yahoo_size"] = "サイズ";
	$fieldToolTipssatei["Japanese"]["yahoo_size"] = "";
	$placeHolderssatei["Japanese"]["yahoo_size"] = "";
	$fieldLabelssatei["Japanese"]["yahoo_title"] = "Yタイトル";
	$fieldToolTipssatei["Japanese"]["yahoo_title"] = "";
	$placeHolderssatei["Japanese"]["yahoo_title"] = "";
	$fieldLabelssatei["Japanese"]["yahoo_sankou_uwadai"] = "参考上代";
	$fieldToolTipssatei["Japanese"]["yahoo_sankou_uwadai"] = "";
	$placeHolderssatei["Japanese"]["yahoo_sankou_uwadai"] = "";
	$fieldLabelssatei["Japanese"]["yahoo_sozai"] = "素材";
	$fieldToolTipssatei["Japanese"]["yahoo_sozai"] = "";
	$placeHolderssatei["Japanese"]["yahoo_sozai"] = "";
	$fieldLabelssatei["Japanese"]["yahoo_color"] = "カラー";
	$fieldToolTipssatei["Japanese"]["yahoo_color"] = "";
	$placeHolderssatei["Japanese"]["yahoo_color"] = "";
	$fieldLabelssatei["Japanese"]["yahoo_kataban"] = "型番";
	$fieldToolTipssatei["Japanese"]["yahoo_kataban"] = "";
	$placeHolderssatei["Japanese"]["yahoo_kataban"] = "";
	$fieldLabelssatei["Japanese"]["yahoo_condition1"] = "コンディションの詳細";
	$fieldToolTipssatei["Japanese"]["yahoo_condition1"] = "";
	$placeHolderssatei["Japanese"]["yahoo_condition1"] = "";
	$fieldLabelssatei["Japanese"]["yahoo_condition2"] = "コンディション";
	$fieldToolTipssatei["Japanese"]["yahoo_condition2"] = "";
	$placeHolderssatei["Japanese"]["yahoo_condition2"] = "";
	$fieldLabelssatei["Japanese"]["yahoo_fuzokuhin"] = "付属品";
	$fieldToolTipssatei["Japanese"]["yahoo_fuzokuhin"] = "";
	$placeHolderssatei["Japanese"]["yahoo_fuzokuhin"] = "";
	$fieldLabelssatei["Japanese"]["yahoo_sinaban"] = "品番";
	$fieldToolTipssatei["Japanese"]["yahoo_sinaban"] = "";
	$placeHolderssatei["Japanese"]["yahoo_sinaban"] = "";
	$fieldLabelssatei["Japanese"]["yahoo_saisun_sha"] = "Yahoo Saisun Sha";
	$fieldToolTipssatei["Japanese"]["yahoo_saisun_sha"] = "";
	$placeHolderssatei["Japanese"]["yahoo_saisun_sha"] = "";
	$fieldLabelssatei["Japanese"]["yahoo_sex"] = "性別";
	$fieldToolTipssatei["Japanese"]["yahoo_sex"] = "";
	$placeHolderssatei["Japanese"]["yahoo_sex"] = "";
	$fieldLabelssatei["Japanese"]["box_id"] = "Box Id";
	$fieldToolTipssatei["Japanese"]["box_id"] = "";
	$placeHolderssatei["Japanese"]["box_id"] = "";
	$fieldLabelssatei["Japanese"]["nyuukin_price"] = "Nyuukin Price";
	$fieldToolTipssatei["Japanese"]["nyuukin_price"] = "";
	$placeHolderssatei["Japanese"]["nyuukin_price"] = "";
	$fieldLabelssatei["Japanese"]["updated_by"] = "Updated By";
	$fieldToolTipssatei["Japanese"]["updated_by"] = "";
	$placeHolderssatei["Japanese"]["updated_by"] = "";
	$fieldLabelssatei["Japanese"]["raku_title"] = "楽天タイトル";
	$fieldToolTipssatei["Japanese"]["raku_title"] = "";
	$placeHolderssatei["Japanese"]["raku_title"] = "";
	$fieldLabelssatei["Japanese"]["raku_hyoujisaki_category2"] = "楽ジャン（店舗内）2";
	$fieldToolTipssatei["Japanese"]["raku_hyoujisaki_category2"] = "";
	$placeHolderssatei["Japanese"]["raku_hyoujisaki_category2"] = "";
	$fieldLabelssatei["Japanese"]["raku_hyoujisaki_category"] = "楽ジャン（店舗内）1";
	$fieldToolTipssatei["Japanese"]["raku_hyoujisaki_category"] = "";
	$placeHolderssatei["Japanese"]["raku_hyoujisaki_category"] = "";
	$fieldLabelssatei["Japanese"]["raku_hyoujisaki_category3"] = "楽ジャン（店舗内）3";
	$fieldToolTipssatei["Japanese"]["raku_hyoujisaki_category3"] = "";
	$placeHolderssatei["Japanese"]["raku_hyoujisaki_category3"] = "";
	$fieldLabelssatei["Japanese"]["timesta"] = "Timesta";
	$fieldToolTipssatei["Japanese"]["timesta"] = "";
	$placeHolderssatei["Japanese"]["timesta"] = "";
	$fieldLabelssatei["Japanese"]["saisun_start"] = "Saisun Start";
	$fieldToolTipssatei["Japanese"]["saisun_start"] = "";
	$placeHolderssatei["Japanese"]["saisun_start"] = "";
	$fieldLabelssatei["Japanese"]["saisun_end"] = "Saisun End";
	$fieldToolTipssatei["Japanese"]["saisun_end"] = "";
	$placeHolderssatei["Japanese"]["saisun_end"] = "";
	$fieldLabelssatei["Japanese"]["label_output_flag"] = "ラベル出力";
	$fieldToolTipssatei["Japanese"]["label_output_flag"] = "";
	$placeHolderssatei["Japanese"]["label_output_flag"] = "";
	$fieldLabelssatei["Japanese"]["season"] = "季節";
	$fieldToolTipssatei["Japanese"]["season"] = "";
	$placeHolderssatei["Japanese"]["season"] = "";
	$fieldLabelssatei["Japanese"]["kanryou_henbi"] = "Kanryou Henbi";
	$fieldToolTipssatei["Japanese"]["kanryou_henbi"] = "";
	$placeHolderssatei["Japanese"]["kanryou_henbi"] = "";
	$fieldLabelssatei["Japanese"]["box_sort"] = "Box Sort";
	$fieldToolTipssatei["Japanese"]["box_sort"] = "";
	$placeHolderssatei["Japanese"]["box_sort"] = "";
	$fieldLabelssatei["Japanese"]["satei_by"] = "査定人";
	$fieldToolTipssatei["Japanese"]["satei_by"] = "";
	$placeHolderssatei["Japanese"]["satei_by"] = "";
	$fieldLabelssatei["Japanese"]["kaitori_by"] = "Kaitori By";
	$fieldToolTipssatei["Japanese"]["kaitori_by"] = "";
	$placeHolderssatei["Japanese"]["kaitori_by"] = "";
	$fieldLabelssatei["Japanese"]["comment"] = "コメント";
	$fieldToolTipssatei["Japanese"]["comment"] = "";
	$placeHolderssatei["Japanese"]["comment"] = "";
	$fieldLabelssatei["Japanese"]["satei_hi"] = "査定日";
	$fieldToolTipssatei["Japanese"]["satei_hi"] = "";
	$placeHolderssatei["Japanese"]["satei_hi"] = "";
	$fieldLabelssatei["Japanese"]["kaitory_hi"] = "Kaitory Hi";
	$fieldToolTipssatei["Japanese"]["kaitory_hi"] = "";
	$placeHolderssatei["Japanese"]["kaitory_hi"] = "";
	$fieldLabelssatei["Japanese"]["REG_PHOTOGRAPHER"] = "REG PHOTOGRAPHER";
	$fieldToolTipssatei["Japanese"]["REG_PHOTOGRAPHER"] = "";
	$placeHolderssatei["Japanese"]["REG_PHOTOGRAPHER"] = "";
	$fieldLabelssatei["Japanese"]["REG_PACKINGS"] = "REG PACKINGS";
	$fieldToolTipssatei["Japanese"]["REG_PACKINGS"] = "";
	$placeHolderssatei["Japanese"]["REG_PACKINGS"] = "";
	$fieldLabelssatei["Japanese"]["REG_KAKOU_DATE"] = "REG KAKOU DATE";
	$fieldToolTipssatei["Japanese"]["REG_KAKOU_DATE"] = "";
	$placeHolderssatei["Japanese"]["REG_KAKOU_DATE"] = "";
	$fieldLabelssatei["Japanese"]["REG_KAKOU"] = "REG KAKOU";
	$fieldToolTipssatei["Japanese"]["REG_KAKOU"] = "";
	$placeHolderssatei["Japanese"]["REG_KAKOU"] = "";
	$fieldLabelssatei["Japanese"]["REG_EXHIBITOR"] = "REG EXHIBITOR";
	$fieldToolTipssatei["Japanese"]["REG_EXHIBITOR"] = "";
	$placeHolderssatei["Japanese"]["REG_EXHIBITOR"] = "";
	$fieldLabelssatei["Japanese"]["REG_PHOTOGRAPHER_DATE"] = "REG PHOTOGRAPHER DATE";
	$fieldToolTipssatei["Japanese"]["REG_PHOTOGRAPHER_DATE"] = "";
	$placeHolderssatei["Japanese"]["REG_PHOTOGRAPHER_DATE"] = "";
	$fieldLabelssatei["Japanese"]["DT_PACKING_DATE"] = "DT PACKING DATE";
	$fieldToolTipssatei["Japanese"]["DT_PACKING_DATE"] = "";
	$placeHolderssatei["Japanese"]["DT_PACKING_DATE"] = "";
	$fieldLabelssatei["Japanese"]["DT_UP_DATE"] = "DT UP DATE";
	$fieldToolTipssatei["Japanese"]["DT_UP_DATE"] = "";
	$placeHolderssatei["Japanese"]["DT_UP_DATE"] = "";
	$fieldLabelssatei["Japanese"]["AWAZU_DATE"] = "AWAZU DATE";
	$fieldToolTipssatei["Japanese"]["AWAZU_DATE"] = "";
	$placeHolderssatei["Japanese"]["AWAZU_DATE"] = "";
	$fieldLabelssatei["Japanese"]["AWAZU_NIN"] = "AWAZU NIN";
	$fieldToolTipssatei["Japanese"]["AWAZU_NIN"] = "";
	$placeHolderssatei["Japanese"]["AWAZU_NIN"] = "";
	$fieldLabelssatei["Japanese"]["sabun_date"] = "Sabun Date";
	$fieldToolTipssatei["Japanese"]["sabun_date"] = "";
	$placeHolderssatei["Japanese"]["sabun_date"] = "";
	$fieldLabelssatei["Japanese"]["browseid"] = "Browseid";
	$fieldToolTipssatei["Japanese"]["browseid"] = "";
	$placeHolderssatei["Japanese"]["browseid"] = "";
	$fieldLabelssatei["Japanese"]["browsenode"] = "Browsenode";
	$fieldToolTipssatei["Japanese"]["browsenode"] = "";
	$placeHolderssatei["Japanese"]["browsenode"] = "";
	$fieldLabelssatei["Japanese"]["gold_property"] = "金性";
	$fieldToolTipssatei["Japanese"]["gold_property"] = "";
	$placeHolderssatei["Japanese"]["gold_property"] = "";
	$fieldLabelssatei["Japanese"]["ichiba_title"] = "帳票用品名";
	$fieldToolTipssatei["Japanese"]["ichiba_title"] = "";
	$placeHolderssatei["Japanese"]["ichiba_title"] = "";
	$fieldLabelssatei["Japanese"]["Gram"] = "金性グラム";
	$fieldToolTipssatei["Japanese"]["Gram"] = "";
	$placeHolderssatei["Japanese"]["Gram"] = "";
	$fieldLabelssatei["Japanese"]["Parent_stone"] = "親石";
	$fieldToolTipssatei["Japanese"]["Parent_stone"] = "";
	$placeHolderssatei["Japanese"]["Parent_stone"] = "";
	$fieldLabelssatei["Japanese"]["Aside_stone"] = "脇石";
	$fieldToolTipssatei["Japanese"]["Aside_stone"] = "";
	$placeHolderssatei["Japanese"]["Aside_stone"] = "";
	$fieldLabelssatei["Japanese"]["Appraiser"] = "鑑定機関";
	$fieldToolTipssatei["Japanese"]["Appraiser"] = "";
	$placeHolderssatei["Japanese"]["Appraiser"] = "";
	$fieldLabelssatei["Japanese"]["Remarks"] = "宝飾備考";
	$fieldToolTipssatei["Japanese"]["Remarks"] = "";
	$placeHolderssatei["Japanese"]["Remarks"] = "";
	$fieldLabelssatei["Japanese"]["Destination_selling"] = "売り先";
	$fieldToolTipssatei["Japanese"]["Destination_selling"] = "";
	$placeHolderssatei["Japanese"]["Destination_selling"] = "";
	$fieldLabelssatei["Japanese"]["Finish"] = "仕上";
	$fieldToolTipssatei["Japanese"]["Finish"] = "";
	$placeHolderssatei["Japanese"]["Finish"] = "";
	$fieldLabelssatei["Japanese"]["Discrimination"] = "鑑別";
	$fieldToolTipssatei["Japanese"]["Discrimination"] = "";
	$placeHolderssatei["Japanese"]["Discrimination"] = "";
	$fieldLabelssatei["Japanese"]["accessories"] = "付属品";
	$fieldToolTipssatei["Japanese"]["accessories"] = "";
	$placeHolderssatei["Japanese"]["accessories"] = "";
	$fieldLabelssatei["Japanese"]["priority"] = "優先";
	$fieldToolTipssatei["Japanese"]["priority"] = "";
	$placeHolderssatei["Japanese"]["priority"] = "";
	$fieldLabelssatei["Japanese"]["A_storage"] = "A保管";
	$fieldToolTipssatei["Japanese"]["A_storage"] = "";
	$placeHolderssatei["Japanese"]["A_storage"] = "";
	$fieldLabelssatei["Japanese"]["price_per_gram"] = "金性単価";
	$fieldToolTipssatei["Japanese"]["price_per_gram"] = "";
	$placeHolderssatei["Japanese"]["price_per_gram"] = "";
	$fieldLabelssatei["Japanese"]["price_per_parent_stone"] = "親石単価";
	$fieldToolTipssatei["Japanese"]["price_per_parent_stone"] = "";
	$placeHolderssatei["Japanese"]["price_per_parent_stone"] = "";
	$fieldLabelssatei["Japanese"]["price_per_aside_stone"] = "脇石単価";
	$fieldToolTipssatei["Japanese"]["price_per_aside_stone"] = "";
	$placeHolderssatei["Japanese"]["price_per_aside_stone"] = "";
	$fieldLabelssatei["Japanese"]["price_secret"] = "買取額隠語";
	$fieldToolTipssatei["Japanese"]["price_secret"] = "";
	$placeHolderssatei["Japanese"]["price_secret"] = "";
	$fieldLabelssatei["Japanese"]["sales_price_secret"] = "販売額隠語";
	$fieldToolTipssatei["Japanese"]["sales_price_secret"] = "";
	$placeHolderssatei["Japanese"]["sales_price_secret"] = "";
	$fieldLabelssatei["Japanese"]["eq"] = "=";
	$fieldToolTipssatei["Japanese"]["eq"] = "";
	$placeHolderssatei["Japanese"]["eq"] = "";
	$fieldLabelssatei["Japanese"]["en"] = "円";
	$fieldToolTipssatei["Japanese"]["en"] = "";
	$placeHolderssatei["Japanese"]["en"] = "";
	$fieldLabelssatei["Japanese"]["line"] = "ライン";
	$fieldToolTipssatei["Japanese"]["line"] = "";
	$placeHolderssatei["Japanese"]["line"] = "";
	$fieldLabelssatei["Japanese"]["item_name"] = "アイテム名";
	$fieldToolTipssatei["Japanese"]["item_name"] = "";
	$placeHolderssatei["Japanese"]["item_name"] = "";
	$fieldLabelssatei["Japanese"]["handle"] = "柄";
	$fieldToolTipssatei["Japanese"]["handle"] = "";
	$placeHolderssatei["Japanese"]["handle"] = "";
	$fieldLabelssatei["Japanese"]["yahoo_color_id"] = "WS用カラー";
	$fieldToolTipssatei["Japanese"]["yahoo_color_id"] = "";
	$placeHolderssatei["Japanese"]["yahoo_color_id"] = "";
	$fieldLabelssatei["Japanese"]["raku_hyoujisaki_category4"] = "楽ジャン（店舗内）4";
	$fieldToolTipssatei["Japanese"]["raku_hyoujisaki_category4"] = "";
	$placeHolderssatei["Japanese"]["raku_hyoujisaki_category4"] = "";
	$fieldLabelssatei["Japanese"]["raku_hyoujisaki_category5"] = "楽ジャン（店舗内）5";
	$fieldToolTipssatei["Japanese"]["raku_hyoujisaki_category5"] = "";
	$placeHolderssatei["Japanese"]["raku_hyoujisaki_category5"] = "";
	$fieldLabelssatei["Japanese"]["raku_dir_1"] = "Raku Dir 1";
	$fieldToolTipssatei["Japanese"]["raku_dir_1"] = "";
	$placeHolderssatei["Japanese"]["raku_dir_1"] = "";
	$fieldLabelssatei["Japanese"]["raku_dir_2"] = "Raku Dir 2";
	$fieldToolTipssatei["Japanese"]["raku_dir_2"] = "";
	$placeHolderssatei["Japanese"]["raku_dir_2"] = "";
	$fieldLabelssatei["Japanese"]["raku_dir_3"] = "Raku Dir 3";
	$fieldToolTipssatei["Japanese"]["raku_dir_3"] = "";
	$placeHolderssatei["Japanese"]["raku_dir_3"] = "";
	$fieldLabelssatei["Japanese"]["raku_dir_4"] = "Raku Dir 4";
	$fieldToolTipssatei["Japanese"]["raku_dir_4"] = "";
	$placeHolderssatei["Japanese"]["raku_dir_4"] = "";
	$fieldLabelssatei["Japanese"]["raku_dir_5"] = "Raku Dir 5";
	$fieldToolTipssatei["Japanese"]["raku_dir_5"] = "";
	$placeHolderssatei["Japanese"]["raku_dir_5"] = "";
	$fieldLabelssatei["Japanese"]["raku_dir_result"] = "Raku Dir Result";
	$fieldToolTipssatei["Japanese"]["raku_dir_result"] = "";
	$placeHolderssatei["Japanese"]["raku_dir_result"] = "";
	$fieldLabelssatei["Japanese"]["raku_tag_result"] = "楽天タグID　Result";
	$fieldToolTipssatei["Japanese"]["raku_tag_result"] = "";
	$placeHolderssatei["Japanese"]["raku_tag_result"] = "";
	$fieldLabelssatei["Japanese"]["serial_number"] = "機番";
	$fieldToolTipssatei["Japanese"]["serial_number"] = "";
	$placeHolderssatei["Japanese"]["serial_number"] = "";
	$fieldLabelssatei["Japanese"]["Exhibition_Date"] = "Exhibition Date";
	$fieldToolTipssatei["Japanese"]["Exhibition_Date"] = "";
	$placeHolderssatei["Japanese"]["Exhibition_Date"] = "";
	$fieldLabelssatei["Japanese"]["search_keyword"] = "ストア内検索キーワード";
	$fieldToolTipssatei["Japanese"]["search_keyword"] = "";
	$placeHolderssatei["Japanese"]["search_keyword"] = "";
	$fieldLabelssatei["Japanese"]["stamp"] = "刻印";
	$fieldToolTipssatei["Japanese"]["stamp"] = "";
	$placeHolderssatei["Japanese"]["stamp"] = "";
	$fieldLabelssatei["Japanese"]["motif"] = "モチーフ";
	$fieldToolTipssatei["Japanese"]["motif"] = "";
	$placeHolderssatei["Japanese"]["motif"] = "";
	$fieldLabelssatei["Japanese"]["Setting"] = "セッティング";
	$fieldToolTipssatei["Japanese"]["Setting"] = "";
	$placeHolderssatei["Japanese"]["Setting"] = "";
	$fieldLabelssatei["Japanese"]["processing"] = "処理";
	$fieldToolTipssatei["Japanese"]["processing"] = "";
	$placeHolderssatei["Japanese"]["processing"] = "";
	$fieldLabelssatei["Japanese"]["Sleeve_Length"] = "袖丈";
	$fieldToolTipssatei["Japanese"]["Sleeve_Length"] = "";
	$placeHolderssatei["Japanese"]["Sleeve_Length"] = "";
	$fieldLabelssatei["Japanese"]["length"] = "着丈";
	$fieldToolTipssatei["Japanese"]["length"] = "";
	$placeHolderssatei["Japanese"]["length"] = "";
	$fieldLabelssatei["Japanese"]["Ring_size"] = "リングサイズ";
	$fieldToolTipssatei["Japanese"]["Ring_size"] = "";
	$placeHolderssatei["Japanese"]["Ring_size"] = "";
	$fieldLabelssatei["Japanese"]["price_for_site"] = "Price For Site";
	$fieldToolTipssatei["Japanese"]["price_for_site"] = "";
	$placeHolderssatei["Japanese"]["price_for_site"] = "";
	$fieldLabelssatei["Japanese"]["yahoo_category_id"] = "Yahoo Category Id";
	$fieldToolTipssatei["Japanese"]["yahoo_category_id"] = "";
	$placeHolderssatei["Japanese"]["yahoo_category_id"] = "";
	$fieldLabelssatei["Japanese"]["Qty"] = "Qty";
	$fieldToolTipssatei["Japanese"]["Qty"] = "";
	$placeHolderssatei["Japanese"]["Qty"] = "";
	$fieldLabelssatei["Japanese"]["sales_period"] = "Sales Period";
	$fieldToolTipssatei["Japanese"]["sales_period"] = "";
	$placeHolderssatei["Japanese"]["sales_period"] = "";
	$fieldLabelssatei["Japanese"]["starting_price"] = "Starting Price";
	$fieldToolTipssatei["Japanese"]["starting_price"] = "";
	$placeHolderssatei["Japanese"]["starting_price"] = "";
	$fieldLabelssatei["Japanese"]["ecc_seq"] = "顧客番号";
	$fieldToolTipssatei["Japanese"]["ecc_seq"] = "";
	$placeHolderssatei["Japanese"]["ecc_seq"] = "";
	$fieldLabelssatei["Japanese"]["yahoo_junle"] = "ブランドジャンル";
	$fieldToolTipssatei["Japanese"]["yahoo_junle"] = "";
	$placeHolderssatei["Japanese"]["yahoo_junle"] = "";
	$fieldLabelssatei["Japanese"]["logo"] = "ロゴ";
	$fieldToolTipssatei["Japanese"]["logo"] = "";
	$placeHolderssatei["Japanese"]["logo"] = "";
	$fieldLabelssatei["Japanese"]["parts"] = "金具（パーツ）";
	$fieldToolTipssatei["Japanese"]["parts"] = "";
	$placeHolderssatei["Japanese"]["parts"] = "";
	$fieldLabelssatei["Japanese"]["country_of_origin"] = "原産国";
	$fieldToolTipssatei["Japanese"]["country_of_origin"] = "";
	$placeHolderssatei["Japanese"]["country_of_origin"] = "";
	$fieldLabelssatei["Japanese"]["zipper"] = "金具（ファスナー）";
	$fieldToolTipssatei["Japanese"]["zipper"] = "";
	$placeHolderssatei["Japanese"]["zipper"] = "";
	$fieldLabelssatei["Japanese"]["guarantee"] = "ギャランティ";
	$fieldToolTipssatei["Japanese"]["guarantee"] = "";
	$placeHolderssatei["Japanese"]["guarantee"] = "";
	$fieldLabelssatei["Japanese"]["errors"] = "真贋チェックエラー";
	$fieldToolTipssatei["Japanese"]["errors"] = "";
	$placeHolderssatei["Japanese"]["errors"] = "";
	$fieldLabelssatei["Japanese"]["designer"] = "デザイナー";
	$fieldToolTipssatei["Japanese"]["designer"] = "";
	$placeHolderssatei["Japanese"]["designer"] = "";
	$fieldLabelssatei["Japanese"]["hahakai"] = "母貝";
	$fieldToolTipssatei["Japanese"]["hahakai"] = "";
	$placeHolderssatei["Japanese"]["hahakai"] = "";
	$fieldLabelssatei["Japanese"]["effect"] = "効果";
	$fieldToolTipssatei["Japanese"]["effect"] = "";
	$placeHolderssatei["Japanese"]["effect"] = "";
	$fieldLabelssatei["Japanese"]["shape"] = "シェイプ";
	$fieldToolTipssatei["Japanese"]["shape"] = "";
	$placeHolderssatei["Japanese"]["shape"] = "";
	$fieldLabelssatei["Japanese"]["cutting_style"] = "カッティングスタイル";
	$fieldToolTipssatei["Japanese"]["cutting_style"] = "";
	$placeHolderssatei["Japanese"]["cutting_style"] = "";
	$fieldLabelssatei["Japanese"]["chain_type"] = "チェーン種類";
	$fieldToolTipssatei["Japanese"]["chain_type"] = "";
	$placeHolderssatei["Japanese"]["chain_type"] = "";
	$fieldLabelssatei["Japanese"]["number_of_stones"] = "石の個数";
	$fieldToolTipssatei["Japanese"]["number_of_stones"] = "";
	$placeHolderssatei["Japanese"]["number_of_stones"] = "";
	$fieldLabelssatei["Japanese"]["amount"] = "内容量";
	$fieldToolTipssatei["Japanese"]["amount"] = "";
	$placeHolderssatei["Japanese"]["amount"] = "";
	$fieldLabelssatei["Japanese"]["satei_error"] = "査定抜けエラー";
	$fieldToolTipssatei["Japanese"]["satei_error"] = "";
	$placeHolderssatei["Japanese"]["satei_error"] = "";
	$fieldLabelssatei["Japanese"]["producing_area"] = "産地";
	$fieldToolTipssatei["Japanese"]["producing_area"] = "";
	$placeHolderssatei["Japanese"]["producing_area"] = "";
	$fieldLabelssatei["Japanese"]["shape_supplement"] = "形状補足";
	$fieldToolTipssatei["Japanese"]["shape_supplement"] = "";
	$placeHolderssatei["Japanese"]["shape_supplement"] = "";
	$fieldLabelssatei["Japanese"]["side_gem"] = "脇石";
	$fieldToolTipssatei["Japanese"]["side_gem"] = "";
	$placeHolderssatei["Japanese"]["side_gem"] = "";
	$fieldLabelssatei["Japanese"]["product_style"] = "形状名";
	$fieldToolTipssatei["Japanese"]["product_style"] = "";
	$placeHolderssatei["Japanese"]["product_style"] = "";
	$fieldLabelssatei["Japanese"]["collar_neck_line"] = "襟・ネックライン";
	$fieldToolTipssatei["Japanese"]["collar_neck_line"] = "";
	$placeHolderssatei["Japanese"]["collar_neck_line"] = "";
	$fieldLabelssatei["Japanese"]["breast"] = "ブレスト";
	$fieldToolTipssatei["Japanese"]["breast"] = "";
	$placeHolderssatei["Japanese"]["breast"] = "";
	$fieldLabelssatei["Japanese"]["silhouette"] = "シルエット";
	$fieldToolTipssatei["Japanese"]["silhouette"] = "";
	$placeHolderssatei["Japanese"]["silhouette"] = "";
	$fieldLabelssatei["Japanese"]["sleeve"] = "スリーブ";
	$fieldToolTipssatei["Japanese"]["sleeve"] = "";
	$placeHolderssatei["Japanese"]["sleeve"] = "";
	$fieldLabelssatei["Japanese"]["unit"] = "単位";
	$fieldToolTipssatei["Japanese"]["unit"] = "";
	$placeHolderssatei["Japanese"]["unit"] = "";
	$fieldLabelssatei["Japanese"]["hall_mark"] = "ホールマーク";
	$fieldToolTipssatei["Japanese"]["hall_mark"] = "";
	$placeHolderssatei["Japanese"]["hall_mark"] = "";
	$fieldLabelssatei["Japanese"]["plate"] = "プレート";
	$fieldToolTipssatei["Japanese"]["plate"] = "";
	$placeHolderssatei["Japanese"]["plate"] = "";
	$fieldLabelssatei["Japanese"]["toe"] = "トウ";
	$fieldToolTipssatei["Japanese"]["toe"] = "";
	$placeHolderssatei["Japanese"]["toe"] = "";
	$fieldLabelssatei["Japanese"]["heel"] = "ソール/ヒール";
	$fieldToolTipssatei["Japanese"]["heel"] = "";
	$placeHolderssatei["Japanese"]["heel"] = "";
	$fieldLabelssatei["Japanese"]["cloth"] = "生地";
	$fieldToolTipssatei["Japanese"]["cloth"] = "";
	$placeHolderssatei["Japanese"]["cloth"] = "";
	$fieldLabelssatei["Japanese"]["official_url"] = "オフィシャルURL";
	$fieldToolTipssatei["Japanese"]["official_url"] = "";
	$placeHolderssatei["Japanese"]["official_url"] = "";
	$fieldLabelssatei["Japanese"]["Eoc_takuhai_id"] = "宅配取引Id";
	$fieldToolTipssatei["Japanese"]["Eoc_takuhai_id"] = "";
	$placeHolderssatei["Japanese"]["Eoc_takuhai_id"] = "";
	$fieldLabelssatei["Japanese"]["Eoc_unfinished_id"] = "店頭取引Id";
	$fieldToolTipssatei["Japanese"]["Eoc_unfinished_id"] = "";
	$placeHolderssatei["Japanese"]["Eoc_unfinished_id"] = "";
	if (count($fieldToolTipssatei["Japanese"]))
		$tdatasatei[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelssatei[""] = array();
	$fieldToolTipssatei[""] = array();
	$placeHolderssatei[""] = array();
	$pageTitlessatei[""] = array();
	$fieldLabelssatei[""]["logo"] = "Logo";
	$fieldToolTipssatei[""]["logo"] = "";
	$placeHolderssatei[""]["logo"] = "";
	$fieldLabelssatei[""]["parts"] = "Parts";
	$fieldToolTipssatei[""]["parts"] = "";
	$placeHolderssatei[""]["parts"] = "";
	$fieldLabelssatei[""]["country_of_origin"] = "Country Of Origin";
	$fieldToolTipssatei[""]["country_of_origin"] = "";
	$placeHolderssatei[""]["country_of_origin"] = "";
	$fieldLabelssatei[""]["zipper"] = "Zipper";
	$fieldToolTipssatei[""]["zipper"] = "";
	$placeHolderssatei[""]["zipper"] = "";
	$fieldLabelssatei[""]["guarantee"] = "Guarantee";
	$fieldToolTipssatei[""]["guarantee"] = "";
	$placeHolderssatei[""]["guarantee"] = "";
	$fieldLabelssatei[""]["errors"] = "Errors";
	$fieldToolTipssatei[""]["errors"] = "";
	$placeHolderssatei[""]["errors"] = "";
	$fieldLabelssatei[""]["designer"] = "Designer";
	$fieldToolTipssatei[""]["designer"] = "";
	$placeHolderssatei[""]["designer"] = "";
	$fieldLabelssatei[""]["hahakai"] = "Hahakai";
	$fieldToolTipssatei[""]["hahakai"] = "";
	$placeHolderssatei[""]["hahakai"] = "";
	$fieldLabelssatei[""]["effect"] = "Effect";
	$fieldToolTipssatei[""]["effect"] = "";
	$placeHolderssatei[""]["effect"] = "";
	$fieldLabelssatei[""]["shape"] = "Shape";
	$fieldToolTipssatei[""]["shape"] = "";
	$placeHolderssatei[""]["shape"] = "";
	$fieldLabelssatei[""]["cutting_style"] = "Cutting Style";
	$fieldToolTipssatei[""]["cutting_style"] = "";
	$placeHolderssatei[""]["cutting_style"] = "";
	$fieldLabelssatei[""]["chain_type"] = "Chain Type";
	$fieldToolTipssatei[""]["chain_type"] = "";
	$placeHolderssatei[""]["chain_type"] = "";
	$fieldLabelssatei[""]["number_of_stones"] = "Number Of Stones";
	$fieldToolTipssatei[""]["number_of_stones"] = "";
	$placeHolderssatei[""]["number_of_stones"] = "";
	$fieldLabelssatei[""]["amount"] = "Amount";
	$fieldToolTipssatei[""]["amount"] = "";
	$placeHolderssatei[""]["amount"] = "";
	$fieldLabelssatei[""]["satei_error"] = "Satei Error";
	$fieldToolTipssatei[""]["satei_error"] = "";
	$placeHolderssatei[""]["satei_error"] = "";
	$fieldLabelssatei[""]["producing_area"] = "Producing Area";
	$fieldToolTipssatei[""]["producing_area"] = "";
	$placeHolderssatei[""]["producing_area"] = "";
	$fieldLabelssatei[""]["shape_supplement"] = "Shape Supplement";
	$fieldToolTipssatei[""]["shape_supplement"] = "";
	$placeHolderssatei[""]["shape_supplement"] = "";
	$fieldLabelssatei[""]["side_gem"] = "Side Gem";
	$fieldToolTipssatei[""]["side_gem"] = "";
	$placeHolderssatei[""]["side_gem"] = "";
	$fieldLabelssatei[""]["product_style"] = "Product Style";
	$fieldToolTipssatei[""]["product_style"] = "";
	$placeHolderssatei[""]["product_style"] = "";
	$fieldLabelssatei[""]["collar_neck_line"] = "Collar Neck Line";
	$fieldToolTipssatei[""]["collar_neck_line"] = "";
	$placeHolderssatei[""]["collar_neck_line"] = "";
	$fieldLabelssatei[""]["breast"] = "Breast";
	$fieldToolTipssatei[""]["breast"] = "";
	$placeHolderssatei[""]["breast"] = "";
	$fieldLabelssatei[""]["silhouette"] = "Silhouette";
	$fieldToolTipssatei[""]["silhouette"] = "";
	$placeHolderssatei[""]["silhouette"] = "";
	$fieldLabelssatei[""]["sleeve"] = "Sleeve";
	$fieldToolTipssatei[""]["sleeve"] = "";
	$placeHolderssatei[""]["sleeve"] = "";
	$fieldLabelssatei[""]["unit"] = "Unit";
	$fieldToolTipssatei[""]["unit"] = "";
	$placeHolderssatei[""]["unit"] = "";
	$fieldLabelssatei[""]["hall_mark"] = "Hall Mark";
	$fieldToolTipssatei[""]["hall_mark"] = "";
	$placeHolderssatei[""]["hall_mark"] = "";
	$fieldLabelssatei[""]["plate"] = "Plate";
	$fieldToolTipssatei[""]["plate"] = "";
	$placeHolderssatei[""]["plate"] = "";
	$fieldLabelssatei[""]["toe"] = "Toe";
	$fieldToolTipssatei[""]["toe"] = "";
	$placeHolderssatei[""]["toe"] = "";
	$fieldLabelssatei[""]["heel"] = "Heel";
	$fieldToolTipssatei[""]["heel"] = "";
	$placeHolderssatei[""]["heel"] = "";
	$fieldLabelssatei[""]["cloth"] = "Cloth";
	$fieldToolTipssatei[""]["cloth"] = "";
	$placeHolderssatei[""]["cloth"] = "";
	$fieldLabelssatei[""]["official_url"] = "Official Url";
	$fieldToolTipssatei[""]["official_url"] = "";
	$placeHolderssatei[""]["official_url"] = "";
	$fieldLabelssatei[""]["Eoc_takuhai_id"] = "Eoc Takuhai Id";
	$fieldToolTipssatei[""]["Eoc_takuhai_id"] = "";
	$placeHolderssatei[""]["Eoc_takuhai_id"] = "";
	$fieldLabelssatei[""]["Eoc_unfinished_id"] = "Eoc Unfinished Id";
	$fieldToolTipssatei[""]["Eoc_unfinished_id"] = "";
	$placeHolderssatei[""]["Eoc_unfinished_id"] = "";
	if (count($fieldToolTipssatei[""]))
		$tdatasatei[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelssatei["English"] = array();
	$fieldToolTipssatei["English"] = array();
	$placeHolderssatei["English"] = array();
	$pageTitlessatei["English"] = array();
	$fieldLabelssatei["English"]["Eoc_takuhai_id"] = "Eoc Takuhai Id";
	$fieldToolTipssatei["English"]["Eoc_takuhai_id"] = "";
	$placeHolderssatei["English"]["Eoc_takuhai_id"] = "";
	$fieldLabelssatei["English"]["Eoc_unfinished_id"] = "Eoc Unfinished Id";
	$fieldToolTipssatei["English"]["Eoc_unfinished_id"] = "";
	$placeHolderssatei["English"]["Eoc_unfinished_id"] = "";
	if (count($fieldToolTipssatei["English"]))
		$tdatasatei[".isUseToolTips"] = true;
}


	$tdatasatei[".NCSearch"] = true;



$tdatasatei[".shortTableName"] = "satei";
$tdatasatei[".nSecOptions"] = 0;
$tdatasatei[".recsPerRowPrint"] = 1;
$tdatasatei[".mainTableOwnerID"] = "";
$tdatasatei[".moveNext"] = 1;
$tdatasatei[".entityType"] = 1;

$tdatasatei[".strOriginalTableName"] = "shouhin";

	



$tdatasatei[".showAddInPopup"] = false;

$tdatasatei[".showEditInPopup"] = false;

$tdatasatei[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatasatei[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatasatei[".fieldsForRegister"] = array();

$tdatasatei[".listAjax"] = false;

	$tdatasatei[".audit"] = true;

	$tdatasatei[".locking"] = false;

$tdatasatei[".edit"] = true;
$tdatasatei[".afterEditAction"] = 1;
$tdatasatei[".closePopupAfterEdit"] = 1;
$tdatasatei[".afterEditActionDetTable"] = "";

$tdatasatei[".add"] = true;
$tdatasatei[".afterAddAction"] = 1;
$tdatasatei[".closePopupAfterAdd"] = 1;
$tdatasatei[".afterAddActionDetTable"] = "";

$tdatasatei[".list"] = true;

$tdatasatei[".inlineEdit"] = true;

$tdatasatei[".updateSelected"] = true;

$tdatasatei[".reorderRecordsByHeader"] = true;
$tdatasatei[".createSortByDropdown"] = true;
$tdatasatei[".strSortControlSettingsJSON"] = "";



$tdatasatei[".inlineAdd"] = true;
$tdatasatei[".copy"] = true;
$tdatasatei[".view"] = true;

$tdatasatei[".import"] = true;

$tdatasatei[".exportTo"] = true;

$tdatasatei[".printFriendly"] = true;

$tdatasatei[".delete"] = true;

$tdatasatei[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatasatei[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatasatei[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatasatei[".searchSaving"] = false;
//

$tdatasatei[".showSearchPanel"] = true;
		$tdatasatei[".flexibleSearch"] = true;

$tdatasatei[".isUseAjaxSuggest"] = true;

$tdatasatei[".rowHighlite"] = true;



																																																																																			
									
					
					
																																																																																																																													
																																																																																																																																																																																																																									
																																																																																																																																																																																																																																																																																																																																																																																																																																																																		

$tdatasatei[".ajaxCodeSnippetAdded"] = false;

$tdatasatei[".buttonsAdded"] = true;

$tdatasatei[".addPageEvents"] = true;

// use timepicker for search panel
$tdatasatei[".isUseTimeForSearch"] = false;



$tdatasatei[".badgeColor"] = "daa520";


$tdatasatei[".allSearchFields"] = array();
$tdatasatei[".filterFields"] = array();
$tdatasatei[".requiredSearchFields"] = array();

$tdatasatei[".allSearchFields"][] = "product_num";
	$tdatasatei[".allSearchFields"][] = "category_id";
	$tdatasatei[".allSearchFields"][] = "sub_category_id1";
	$tdatasatei[".allSearchFields"][] = "yahoo_sex";
	$tdatasatei[".allSearchFields"][] = "yahoo_condition2";
	$tdatasatei[".allSearchFields"][] = "ecc_seq";
	$tdatasatei[".allSearchFields"][] = "status";
	$tdatasatei[".allSearchFields"][] = "satei_by";
	$tdatasatei[".allSearchFields"][] = "title";
	$tdatasatei[".allSearchFields"][] = "product_id";
	$tdatasatei[".allSearchFields"][] = "yahoo_sinaban";
	$tdatasatei[".allSearchFields"][] = "price";
	$tdatasatei[".allSearchFields"][] = "sales_price";
	$tdatasatei[".allSearchFields"][] = "description";
	$tdatasatei[".allSearchFields"][] = "raku_hyoujisaki_category";
	$tdatasatei[".allSearchFields"][] = "raku_hyoujisaki_category2";
	$tdatasatei[".allSearchFields"][] = "raku_hyoujisaki_category3";
	$tdatasatei[".allSearchFields"][] = "raku_hyoujisaki_category4";
	$tdatasatei[".allSearchFields"][] = "raku_hyoujisaki_category5";
	$tdatasatei[".allSearchFields"][] = "yahoo_kataban";
	$tdatasatei[".allSearchFields"][] = "yahoo_sozai";
	$tdatasatei[".allSearchFields"][] = "yahoo_color";
	$tdatasatei[".allSearchFields"][] = "yahoo_size";
	$tdatasatei[".allSearchFields"][] = "yahoo_condition1";
	$tdatasatei[".allSearchFields"][] = "remark";
	$tdatasatei[".allSearchFields"][] = "yahoo_fuzokuhin";
	$tdatasatei[".allSearchFields"][] = "yahoo_sankou_uwadai";
	$tdatasatei[".allSearchFields"][] = "season";
	$tdatasatei[".allSearchFields"][] = "yahoo_title";
	$tdatasatei[".allSearchFields"][] = "goods_title";
	$tdatasatei[".allSearchFields"][] = "raku_title";
	$tdatasatei[".allSearchFields"][] = "raku_tag_result";
	$tdatasatei[".allSearchFields"][] = "search_keyword";
	$tdatasatei[".allSearchFields"][] = "stamp";
	$tdatasatei[".allSearchFields"][] = "processing";
	$tdatasatei[".allSearchFields"][] = "Sleeve_Length";
	$tdatasatei[".allSearchFields"][] = "length";
	$tdatasatei[".allSearchFields"][] = "label_output_flag";
	$tdatasatei[".allSearchFields"][] = "Ring_size";
	$tdatasatei[".allSearchFields"][] = "comment";
	$tdatasatei[".allSearchFields"][] = "satei_hi";
	$tdatasatei[".allSearchFields"][] = "gold_property";
	$tdatasatei[".allSearchFields"][] = "ichiba_title";
	$tdatasatei[".allSearchFields"][] = "Gram";
	$tdatasatei[".allSearchFields"][] = "Parent_stone";
	$tdatasatei[".allSearchFields"][] = "Aside_stone";
	$tdatasatei[".allSearchFields"][] = "Appraiser";
	$tdatasatei[".allSearchFields"][] = "Remarks";
	$tdatasatei[".allSearchFields"][] = "Destination_selling";
	$tdatasatei[".allSearchFields"][] = "Finish";
	$tdatasatei[".allSearchFields"][] = "Discrimination";
	$tdatasatei[".allSearchFields"][] = "accessories";
	$tdatasatei[".allSearchFields"][] = "priority";
	$tdatasatei[".allSearchFields"][] = "A_storage";
	$tdatasatei[".allSearchFields"][] = "price_per_gram";
	$tdatasatei[".allSearchFields"][] = "price_per_parent_stone";
	$tdatasatei[".allSearchFields"][] = "price_per_aside_stone";
	$tdatasatei[".allSearchFields"][] = "price_secret";
	$tdatasatei[".allSearchFields"][] = "sales_price_secret";
	$tdatasatei[".allSearchFields"][] = "line";
	$tdatasatei[".allSearchFields"][] = "item_name";
	$tdatasatei[".allSearchFields"][] = "handle";
	$tdatasatei[".allSearchFields"][] = "serial_number";
	$tdatasatei[".allSearchFields"][] = "motif";
	$tdatasatei[".allSearchFields"][] = "Setting";
	$tdatasatei[".allSearchFields"][] = "logo";
	$tdatasatei[".allSearchFields"][] = "parts";
	$tdatasatei[".allSearchFields"][] = "country_of_origin";
	$tdatasatei[".allSearchFields"][] = "zipper";
	$tdatasatei[".allSearchFields"][] = "guarantee";
	$tdatasatei[".allSearchFields"][] = "designer";
	$tdatasatei[".allSearchFields"][] = "errors";
	$tdatasatei[".allSearchFields"][] = "cutting_style";
	$tdatasatei[".allSearchFields"][] = "chain_type";
	$tdatasatei[".allSearchFields"][] = "shape";
	$tdatasatei[".allSearchFields"][] = "effect";
	$tdatasatei[".allSearchFields"][] = "hahakai";
	$tdatasatei[".allSearchFields"][] = "number_of_stones";
	$tdatasatei[".allSearchFields"][] = "collar_neck_line";
	$tdatasatei[".allSearchFields"][] = "product_style";
	$tdatasatei[".allSearchFields"][] = "sleeve";
	$tdatasatei[".allSearchFields"][] = "producing_area";
	$tdatasatei[".allSearchFields"][] = "amount";
	$tdatasatei[".allSearchFields"][] = "satei_error";
	$tdatasatei[".allSearchFields"][] = "silhouette";
	$tdatasatei[".allSearchFields"][] = "shape_supplement";
	$tdatasatei[".allSearchFields"][] = "side_gem";
	$tdatasatei[".allSearchFields"][] = "breast";
	$tdatasatei[".allSearchFields"][] = "unit";
	$tdatasatei[".allSearchFields"][] = "plate";
	$tdatasatei[".allSearchFields"][] = "hall_mark";
	$tdatasatei[".allSearchFields"][] = "toe";
	$tdatasatei[".allSearchFields"][] = "cloth";
	$tdatasatei[".allSearchFields"][] = "heel";
	

$tdatasatei[".googleLikeFields"] = array();
$tdatasatei[".googleLikeFields"][] = "product_id";
$tdatasatei[".googleLikeFields"][] = "category_id";
$tdatasatei[".googleLikeFields"][] = "goods_title";
$tdatasatei[".googleLikeFields"][] = "title";
$tdatasatei[".googleLikeFields"][] = "sub_category_id1";
$tdatasatei[".googleLikeFields"][] = "price";
$tdatasatei[".googleLikeFields"][] = "remark";
$tdatasatei[".googleLikeFields"][] = "sales_price";
$tdatasatei[".googleLikeFields"][] = "description";
$tdatasatei[".googleLikeFields"][] = "status";
$tdatasatei[".googleLikeFields"][] = "product_num";
$tdatasatei[".googleLikeFields"][] = "yahoo_size";
$tdatasatei[".googleLikeFields"][] = "yahoo_title";
$tdatasatei[".googleLikeFields"][] = "yahoo_sankou_uwadai";
$tdatasatei[".googleLikeFields"][] = "yahoo_sozai";
$tdatasatei[".googleLikeFields"][] = "yahoo_color";
$tdatasatei[".googleLikeFields"][] = "yahoo_kataban";
$tdatasatei[".googleLikeFields"][] = "yahoo_condition1";
$tdatasatei[".googleLikeFields"][] = "yahoo_condition2";
$tdatasatei[".googleLikeFields"][] = "yahoo_fuzokuhin";
$tdatasatei[".googleLikeFields"][] = "yahoo_sinaban";
$tdatasatei[".googleLikeFields"][] = "yahoo_sex";
$tdatasatei[".googleLikeFields"][] = "raku_title";
$tdatasatei[".googleLikeFields"][] = "raku_hyoujisaki_category2";
$tdatasatei[".googleLikeFields"][] = "raku_hyoujisaki_category";
$tdatasatei[".googleLikeFields"][] = "raku_hyoujisaki_category3";
$tdatasatei[".googleLikeFields"][] = "label_output_flag";
$tdatasatei[".googleLikeFields"][] = "season";
$tdatasatei[".googleLikeFields"][] = "satei_by";
$tdatasatei[".googleLikeFields"][] = "comment";
$tdatasatei[".googleLikeFields"][] = "satei_hi";
$tdatasatei[".googleLikeFields"][] = "gold_property";
$tdatasatei[".googleLikeFields"][] = "ichiba_title";
$tdatasatei[".googleLikeFields"][] = "Gram";
$tdatasatei[".googleLikeFields"][] = "Parent_stone";
$tdatasatei[".googleLikeFields"][] = "Aside_stone";
$tdatasatei[".googleLikeFields"][] = "Appraiser";
$tdatasatei[".googleLikeFields"][] = "Remarks";
$tdatasatei[".googleLikeFields"][] = "Destination_selling";
$tdatasatei[".googleLikeFields"][] = "Finish";
$tdatasatei[".googleLikeFields"][] = "Discrimination";
$tdatasatei[".googleLikeFields"][] = "accessories";
$tdatasatei[".googleLikeFields"][] = "priority";
$tdatasatei[".googleLikeFields"][] = "A_storage";
$tdatasatei[".googleLikeFields"][] = "price_per_gram";
$tdatasatei[".googleLikeFields"][] = "price_per_parent_stone";
$tdatasatei[".googleLikeFields"][] = "price_per_aside_stone";
$tdatasatei[".googleLikeFields"][] = "price_secret";
$tdatasatei[".googleLikeFields"][] = "sales_price_secret";
$tdatasatei[".googleLikeFields"][] = "line";
$tdatasatei[".googleLikeFields"][] = "item_name";
$tdatasatei[".googleLikeFields"][] = "handle";
$tdatasatei[".googleLikeFields"][] = "raku_hyoujisaki_category4";
$tdatasatei[".googleLikeFields"][] = "raku_hyoujisaki_category5";
$tdatasatei[".googleLikeFields"][] = "raku_tag_result";
$tdatasatei[".googleLikeFields"][] = "serial_number";
$tdatasatei[".googleLikeFields"][] = "search_keyword";
$tdatasatei[".googleLikeFields"][] = "stamp";
$tdatasatei[".googleLikeFields"][] = "motif";
$tdatasatei[".googleLikeFields"][] = "Setting";
$tdatasatei[".googleLikeFields"][] = "processing";
$tdatasatei[".googleLikeFields"][] = "Sleeve_Length";
$tdatasatei[".googleLikeFields"][] = "length";
$tdatasatei[".googleLikeFields"][] = "Ring_size";
$tdatasatei[".googleLikeFields"][] = "ecc_seq";
$tdatasatei[".googleLikeFields"][] = "logo";
$tdatasatei[".googleLikeFields"][] = "parts";
$tdatasatei[".googleLikeFields"][] = "country_of_origin";
$tdatasatei[".googleLikeFields"][] = "zipper";
$tdatasatei[".googleLikeFields"][] = "guarantee";
$tdatasatei[".googleLikeFields"][] = "errors";
$tdatasatei[".googleLikeFields"][] = "designer";
$tdatasatei[".googleLikeFields"][] = "hahakai";
$tdatasatei[".googleLikeFields"][] = "effect";
$tdatasatei[".googleLikeFields"][] = "shape";
$tdatasatei[".googleLikeFields"][] = "cutting_style";
$tdatasatei[".googleLikeFields"][] = "chain_type";
$tdatasatei[".googleLikeFields"][] = "number_of_stones";
$tdatasatei[".googleLikeFields"][] = "amount";
$tdatasatei[".googleLikeFields"][] = "satei_error";
$tdatasatei[".googleLikeFields"][] = "producing_area";
$tdatasatei[".googleLikeFields"][] = "shape_supplement";
$tdatasatei[".googleLikeFields"][] = "side_gem";
$tdatasatei[".googleLikeFields"][] = "product_style";
$tdatasatei[".googleLikeFields"][] = "collar_neck_line";
$tdatasatei[".googleLikeFields"][] = "breast";
$tdatasatei[".googleLikeFields"][] = "silhouette";
$tdatasatei[".googleLikeFields"][] = "sleeve";
$tdatasatei[".googleLikeFields"][] = "unit";
$tdatasatei[".googleLikeFields"][] = "hall_mark";
$tdatasatei[".googleLikeFields"][] = "plate";
$tdatasatei[".googleLikeFields"][] = "toe";
$tdatasatei[".googleLikeFields"][] = "heel";
$tdatasatei[".googleLikeFields"][] = "cloth";

$tdatasatei[".panelSearchFields"] = array();
$tdatasatei[".searchPanelOptions"] = array();
$tdatasatei[".panelSearchFields"][] = "product_num";
	$tdatasatei[".panelSearchFields"][] = "category_id";
	$tdatasatei[".panelSearchFields"][] = "sub_category_id1";
	$tdatasatei[".panelSearchFields"][] = "yahoo_sex";
	$tdatasatei[".panelSearchFields"][] = "yahoo_condition2";
	$tdatasatei[".panelSearchFields"][] = "status";
	
$tdatasatei[".advSearchFields"] = array();
$tdatasatei[".advSearchFields"][] = "product_num";
$tdatasatei[".advSearchFields"][] = "category_id";
$tdatasatei[".advSearchFields"][] = "sub_category_id1";
$tdatasatei[".advSearchFields"][] = "yahoo_sex";
$tdatasatei[".advSearchFields"][] = "yahoo_condition2";
$tdatasatei[".advSearchFields"][] = "ecc_seq";
$tdatasatei[".advSearchFields"][] = "status";
$tdatasatei[".advSearchFields"][] = "satei_by";
$tdatasatei[".advSearchFields"][] = "title";
$tdatasatei[".advSearchFields"][] = "product_id";
$tdatasatei[".advSearchFields"][] = "yahoo_sinaban";
$tdatasatei[".advSearchFields"][] = "price";
$tdatasatei[".advSearchFields"][] = "sales_price";
$tdatasatei[".advSearchFields"][] = "description";
$tdatasatei[".advSearchFields"][] = "raku_hyoujisaki_category";
$tdatasatei[".advSearchFields"][] = "raku_hyoujisaki_category2";
$tdatasatei[".advSearchFields"][] = "raku_hyoujisaki_category3";
$tdatasatei[".advSearchFields"][] = "raku_hyoujisaki_category4";
$tdatasatei[".advSearchFields"][] = "raku_hyoujisaki_category5";
$tdatasatei[".advSearchFields"][] = "yahoo_kataban";
$tdatasatei[".advSearchFields"][] = "yahoo_sozai";
$tdatasatei[".advSearchFields"][] = "yahoo_color";
$tdatasatei[".advSearchFields"][] = "yahoo_size";
$tdatasatei[".advSearchFields"][] = "yahoo_condition1";
$tdatasatei[".advSearchFields"][] = "remark";
$tdatasatei[".advSearchFields"][] = "yahoo_fuzokuhin";
$tdatasatei[".advSearchFields"][] = "yahoo_sankou_uwadai";
$tdatasatei[".advSearchFields"][] = "season";
$tdatasatei[".advSearchFields"][] = "yahoo_title";
$tdatasatei[".advSearchFields"][] = "goods_title";
$tdatasatei[".advSearchFields"][] = "raku_title";
$tdatasatei[".advSearchFields"][] = "raku_tag_result";
$tdatasatei[".advSearchFields"][] = "search_keyword";
$tdatasatei[".advSearchFields"][] = "stamp";
$tdatasatei[".advSearchFields"][] = "processing";
$tdatasatei[".advSearchFields"][] = "Sleeve_Length";
$tdatasatei[".advSearchFields"][] = "length";
$tdatasatei[".advSearchFields"][] = "label_output_flag";
$tdatasatei[".advSearchFields"][] = "Ring_size";
$tdatasatei[".advSearchFields"][] = "comment";
$tdatasatei[".advSearchFields"][] = "satei_hi";
$tdatasatei[".advSearchFields"][] = "gold_property";
$tdatasatei[".advSearchFields"][] = "ichiba_title";
$tdatasatei[".advSearchFields"][] = "Gram";
$tdatasatei[".advSearchFields"][] = "Parent_stone";
$tdatasatei[".advSearchFields"][] = "Aside_stone";
$tdatasatei[".advSearchFields"][] = "Appraiser";
$tdatasatei[".advSearchFields"][] = "Remarks";
$tdatasatei[".advSearchFields"][] = "Destination_selling";
$tdatasatei[".advSearchFields"][] = "Finish";
$tdatasatei[".advSearchFields"][] = "Discrimination";
$tdatasatei[".advSearchFields"][] = "accessories";
$tdatasatei[".advSearchFields"][] = "priority";
$tdatasatei[".advSearchFields"][] = "A_storage";
$tdatasatei[".advSearchFields"][] = "price_per_gram";
$tdatasatei[".advSearchFields"][] = "price_per_parent_stone";
$tdatasatei[".advSearchFields"][] = "price_per_aside_stone";
$tdatasatei[".advSearchFields"][] = "price_secret";
$tdatasatei[".advSearchFields"][] = "sales_price_secret";
$tdatasatei[".advSearchFields"][] = "line";
$tdatasatei[".advSearchFields"][] = "item_name";
$tdatasatei[".advSearchFields"][] = "handle";
$tdatasatei[".advSearchFields"][] = "serial_number";
$tdatasatei[".advSearchFields"][] = "motif";
$tdatasatei[".advSearchFields"][] = "Setting";
$tdatasatei[".advSearchFields"][] = "logo";
$tdatasatei[".advSearchFields"][] = "parts";
$tdatasatei[".advSearchFields"][] = "country_of_origin";
$tdatasatei[".advSearchFields"][] = "zipper";
$tdatasatei[".advSearchFields"][] = "guarantee";
$tdatasatei[".advSearchFields"][] = "designer";
$tdatasatei[".advSearchFields"][] = "errors";
$tdatasatei[".advSearchFields"][] = "cutting_style";
$tdatasatei[".advSearchFields"][] = "chain_type";
$tdatasatei[".advSearchFields"][] = "shape";
$tdatasatei[".advSearchFields"][] = "effect";
$tdatasatei[".advSearchFields"][] = "hahakai";
$tdatasatei[".advSearchFields"][] = "number_of_stones";
$tdatasatei[".advSearchFields"][] = "collar_neck_line";
$tdatasatei[".advSearchFields"][] = "product_style";
$tdatasatei[".advSearchFields"][] = "sleeve";
$tdatasatei[".advSearchFields"][] = "producing_area";
$tdatasatei[".advSearchFields"][] = "amount";
$tdatasatei[".advSearchFields"][] = "satei_error";
$tdatasatei[".advSearchFields"][] = "silhouette";
$tdatasatei[".advSearchFields"][] = "shape_supplement";
$tdatasatei[".advSearchFields"][] = "side_gem";
$tdatasatei[".advSearchFields"][] = "breast";
$tdatasatei[".advSearchFields"][] = "unit";
$tdatasatei[".advSearchFields"][] = "plate";
$tdatasatei[".advSearchFields"][] = "hall_mark";
$tdatasatei[".advSearchFields"][] = "toe";
$tdatasatei[".advSearchFields"][] = "cloth";
$tdatasatei[".advSearchFields"][] = "heel";

$tdatasatei[".tableType"] = "list";

$tdatasatei[".printerPageOrientation"] = 0;
$tdatasatei[".nPrinterPageScale"] = 100;

$tdatasatei[".nPrinterSplitRecords"] = 40;

$tdatasatei[".nPrinterPDFSplitRecords"] = 40;



$tdatasatei[".geocodingEnabled"] = false;





$tdatasatei[".listGridLayout"] = 3;





// view page pdf
$tdatasatei[".isViewPagePDF"] = true;
$tdatasatei[".nViewPagePDFScale"] = 100;

// print page pdf
$tdatasatei[".isPrinterPagePDF"] = true;
$tdatasatei[".nPrinterPagePDFScale"] = 100;

$tdatasatei[".totalsFields"] = array();
$tdatasatei[".totalsFields"][] = array(
	"fName" => "price",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');

$tdatasatei[".pageSize"] = 20;

$tdatasatei[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `shouhin`.`product_id` DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatasatei[".strOrderBy"] = $tstrOrderBy;

$tdatasatei[".orderindexes"] = array();
$tdatasatei[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "`shouhin`.`product_id`");

$tdatasatei[".sqlHead"] = "SELECT `shouhin`.`product_id`,  `shouhin`.`category_id`,  `shouhin`.`goods_title`,  `shouhin`.`title`,  `shouhin`.`sub_category_id1`,  `shouhin`.`ecc_id`,  `shouhin`.`price`,  `shouhin`.`yahoo`,  `shouhin`.`remark`,  `shouhin`.`sales_price`,  `shouhin`.`description`,  `shouhin`.`status`,  `shouhin`.`product_num`,  `shouhin`.`yahoo_size`,  `shouhin`.`yahoo_title`,  `shouhin`.`yahoo_sankou_uwadai`,  `shouhin`.`yahoo_sozai`,  `shouhin`.`yahoo_color`,  `shouhin`.`yahoo_kataban`,  `shouhin`.`yahoo_condition1`,  `shouhin`.`yahoo_condition2`,  `shouhin`.`yahoo_fuzokuhin`,  `shouhin`.`yahoo_sinaban`,  `shouhin`.`yahoo_saisun_sha`,  `shouhin`.`yahoo_sex`,  `shouhin`.`box_id`,  `shouhin`.`nyuukin_price`,  `shouhin`.`updated_by`,  `shouhin`.`raku_title`,  `shouhin`.`raku_hyoujisaki_category2`,  `shouhin`.`raku_hyoujisaki_category`,  `shouhin`.`raku_hyoujisaki_category3`,  `shouhin`.`timesta`,  `shouhin`.`saisun_start`,  `shouhin`.`saisun_end`,  `shouhin`.`label_output_flag`,  `shouhin`.`season`,  `shouhin`.`kanryou_henbi`,  `shouhin`.`box_sort`,  `shouhin`.`satei_by`,  `shouhin`.`kaitori_by`,  `shouhin`.`comment`,  `shouhin`.`satei_hi`,  `shouhin`.`kaitory_hi`,  `shouhin`.`REG_PHOTOGRAPHER`,  `shouhin`.`REG_PACKINGS`,  `shouhin`.`REG_KAKOU_DATE`,  `shouhin`.`REG_KAKOU`,  `shouhin`.`REG_EXHIBITOR`,  `shouhin`.`REG_PHOTOGRAPHER_DATE`,  `shouhin`.`DT_PACKING_DATE`,  `shouhin`.`DT_UP_DATE`,  `shouhin`.`AWAZU_DATE`,  `shouhin`.`AWAZU_NIN`,  `shouhin`.`sabun_date`,  `shouhin`.`browseid`,  `shouhin`.`browsenode`,  `shouhin`.`gold_property`,  `shouhin`.`ichiba_title`,  `shouhin`.`Gram`,  `shouhin`.`Parent_stone`,  `shouhin`.`Aside_stone`,  `shouhin`.`Appraiser`,  `shouhin`.`Remarks`,  `shouhin`.`Destination_selling`,  `shouhin`.`Finish`,  `shouhin`.`Discrimination`,  `shouhin`.`accessories`,  `shouhin`.`priority`,  `shouhin`.`A_storage`,  `shouhin`.`price_per_gram`,  `shouhin`.`price_per_parent_stone`,  `shouhin`.`price_per_aside_stone`,  `shouhin`.`price_secret`,  `shouhin`.`sales_price_secret`,  `shouhin`.`eq`,  `shouhin`.`en`,  `shouhin`.`line`,  `shouhin`.`item_name`,  `shouhin`.`handle`,  `shouhin`.`yahoo_color_id`,  `shouhin`.`raku_hyoujisaki_category4`,  `shouhin`.`raku_hyoujisaki_category5`,  `shouhin`.`raku_dir_1`,  `shouhin`.`raku_dir_2`,  `shouhin`.`raku_dir_3`,  `shouhin`.`raku_dir_4`,  `shouhin`.`raku_dir_5`,  `shouhin`.`raku_dir_result`,  `shouhin`.`raku_tag_result`,  `shouhin`.`serial_number`,  `shouhin`.`Exhibition_Date`,  `shouhin`.`search_keyword`,  `shouhin`.`stamp`,  `shouhin`.`motif`,  `shouhin`.`Setting`,  `shouhin`.`processing`,  `shouhin`.`Sleeve_Length`,  `shouhin`.`length`,  `shouhin`.`Ring_size`,  `shouhin`.`price_for_site`,  `shouhin`.`yahoo_category_id`,  `shouhin`.`Qty`,  `shouhin`.`sales_period`,  `shouhin`.`starting_price`,  `Eoc`.`ecc_seq`,  `shouhin`.`yahoo_junle`,  `shouhin`.`logo`,  `shouhin`.`parts`,  `shouhin`.`country_of_origin`,  `shouhin`.`zipper`,  `shouhin`.`guarantee`,  `shouhin`.`errors`,  `shouhin`.`designer`,  `shouhin`.`hahakai`,  `shouhin`.`effect`,  `shouhin`.`shape`,  `shouhin`.`cutting_style`,  `shouhin`.`chain_type`,  `shouhin`.`number_of_stones`,  `shouhin`.`amount`,  `shouhin`.`satei_error`,  `shouhin`.`producing_area`,  `shouhin`.`shape_supplement`,  `shouhin`.`side_gem`,  `shouhin`.`product_style`,  `shouhin`.`collar_neck_line`,  `shouhin`.`breast`,  `shouhin`.`silhouette`,  `shouhin`.`sleeve`,  `shouhin`.`unit`,  `shouhin`.`hall_mark`,  `shouhin`.`plate`,  `shouhin`.`toe`,  `shouhin`.`heel`,  `shouhin`.`cloth`,  `shouhin`.`official_url`,  `shouhin`.`Eoc_takuhai_id`,  `shouhin`.`Eoc_unfinished_id`";
$tdatasatei[".sqlFrom"] = "FROM `shouhin`  LEFT OUTER JOIN `Eoc` ON `shouhin`.`ecc_id` = `Eoc`.`ecc_id`";
$tdatasatei[".sqlWhereExpr"] = "(`shouhin`.`status` =32 OR `shouhin`.`status` =34)";
$tdatasatei[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasatei[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasatei[".arrGroupsPerPage"] = $arrGPP;

$tdatasatei[".highlightSearchResults"] = true;

$tableKeyssatei = array();
$tableKeyssatei[] = "product_id";
$tdatasatei[".Keys"] = $tableKeyssatei;

$tdatasatei[".listFields"] = array();
$tdatasatei[".listFields"][] = "label_output_flag";
$tdatasatei[".listFields"][] = "status";
$tdatasatei[".listFields"][] = "product_id";
$tdatasatei[".listFields"][] = "product_num";
$tdatasatei[".listFields"][] = "category_id";
$tdatasatei[".listFields"][] = "sub_category_id1";
$tdatasatei[".listFields"][] = "gold_property";
$tdatasatei[".listFields"][] = "Gram";
$tdatasatei[".listFields"][] = "unit";
$tdatasatei[".listFields"][] = "Parent_stone";
$tdatasatei[".listFields"][] = "Aside_stone";
$tdatasatei[".listFields"][] = "Ring_size";
$tdatasatei[".listFields"][] = "price_per_gram";
$tdatasatei[".listFields"][] = "price_per_parent_stone";
$tdatasatei[".listFields"][] = "price_per_aside_stone";
$tdatasatei[".listFields"][] = "yahoo_sex";
$tdatasatei[".listFields"][] = "yahoo_condition2";
$tdatasatei[".listFields"][] = "logo";
$tdatasatei[".listFields"][] = "parts";
$tdatasatei[".listFields"][] = "guarantee";
$tdatasatei[".listFields"][] = "comment";
$tdatasatei[".listFields"][] = "serial_number";
$tdatasatei[".listFields"][] = "yahoo_kataban";
$tdatasatei[".listFields"][] = "country_of_origin";
$tdatasatei[".listFields"][] = "hall_mark";
$tdatasatei[".listFields"][] = "zipper";
$tdatasatei[".listFields"][] = "designer";
$tdatasatei[".listFields"][] = "line";
$tdatasatei[".listFields"][] = "item_name";
$tdatasatei[".listFields"][] = "number_of_stones";
$tdatasatei[".listFields"][] = "shape_supplement";
$tdatasatei[".listFields"][] = "side_gem";
$tdatasatei[".listFields"][] = "product_style";
$tdatasatei[".listFields"][] = "yahoo_sozai";
$tdatasatei[".listFields"][] = "toe";
$tdatasatei[".listFields"][] = "heel";
$tdatasatei[".listFields"][] = "cloth";
$tdatasatei[".listFields"][] = "Sleeve_Length";
$tdatasatei[".listFields"][] = "collar_neck_line";
$tdatasatei[".listFields"][] = "breast";
$tdatasatei[".listFields"][] = "handle";
$tdatasatei[".listFields"][] = "silhouette";
$tdatasatei[".listFields"][] = "sleeve";
$tdatasatei[".listFields"][] = "length";
$tdatasatei[".listFields"][] = "amount";
$tdatasatei[".listFields"][] = "ichiba_title";
$tdatasatei[".listFields"][] = "plate";
$tdatasatei[".listFields"][] = "motif";
$tdatasatei[".listFields"][] = "producing_area";
$tdatasatei[".listFields"][] = "hahakai";
$tdatasatei[".listFields"][] = "effect";
$tdatasatei[".listFields"][] = "shape";
$tdatasatei[".listFields"][] = "cutting_style";
$tdatasatei[".listFields"][] = "Setting";
$tdatasatei[".listFields"][] = "processing";
$tdatasatei[".listFields"][] = "chain_type";
$tdatasatei[".listFields"][] = "Appraiser";
$tdatasatei[".listFields"][] = "Remarks";
$tdatasatei[".listFields"][] = "yahoo_color";
$tdatasatei[".listFields"][] = "stamp";
$tdatasatei[".listFields"][] = "price";
$tdatasatei[".listFields"][] = "sales_price";
$tdatasatei[".listFields"][] = "yahoo_sankou_uwadai";
$tdatasatei[".listFields"][] = "description";
$tdatasatei[".listFields"][] = "Destination_selling";
$tdatasatei[".listFields"][] = "Finish";
$tdatasatei[".listFields"][] = "Discrimination";
$tdatasatei[".listFields"][] = "accessories";
$tdatasatei[".listFields"][] = "priority";
$tdatasatei[".listFields"][] = "A_storage";
$tdatasatei[".listFields"][] = "satei_by";
$tdatasatei[".listFields"][] = "satei_hi";
$tdatasatei[".listFields"][] = "price_secret";
$tdatasatei[".listFields"][] = "sales_price_secret";
$tdatasatei[".listFields"][] = "errors";
$tdatasatei[".listFields"][] = "satei_error";

$tdatasatei[".hideMobileList"] = array();


$tdatasatei[".viewFields"] = array();
$tdatasatei[".viewFields"][] = "designer";
$tdatasatei[".viewFields"][] = "hahakai";
$tdatasatei[".viewFields"][] = "effect";
$tdatasatei[".viewFields"][] = "shape";
$tdatasatei[".viewFields"][] = "cutting_style";
$tdatasatei[".viewFields"][] = "chain_type";
$tdatasatei[".viewFields"][] = "number_of_stones";
$tdatasatei[".viewFields"][] = "amount";
$tdatasatei[".viewFields"][] = "satei_error";
$tdatasatei[".viewFields"][] = "producing_area";
$tdatasatei[".viewFields"][] = "shape_supplement";
$tdatasatei[".viewFields"][] = "side_gem";
$tdatasatei[".viewFields"][] = "product_style";
$tdatasatei[".viewFields"][] = "collar_neck_line";
$tdatasatei[".viewFields"][] = "breast";
$tdatasatei[".viewFields"][] = "silhouette";
$tdatasatei[".viewFields"][] = "sleeve";
$tdatasatei[".viewFields"][] = "unit";
$tdatasatei[".viewFields"][] = "hall_mark";
$tdatasatei[".viewFields"][] = "plate";
$tdatasatei[".viewFields"][] = "toe";
$tdatasatei[".viewFields"][] = "heel";
$tdatasatei[".viewFields"][] = "cloth";
$tdatasatei[".viewFields"][] = "guarantee";
$tdatasatei[".viewFields"][] = "zipper";
$tdatasatei[".viewFields"][] = "country_of_origin";
$tdatasatei[".viewFields"][] = "parts";
$tdatasatei[".viewFields"][] = "logo";
$tdatasatei[".viewFields"][] = "ecc_seq";
$tdatasatei[".viewFields"][] = "status";
$tdatasatei[".viewFields"][] = "satei_by";
$tdatasatei[".viewFields"][] = "category_id";
$tdatasatei[".viewFields"][] = "sub_category_id1";
$tdatasatei[".viewFields"][] = "product_id";
$tdatasatei[".viewFields"][] = "yahoo_sinaban";
$tdatasatei[".viewFields"][] = "price";
$tdatasatei[".viewFields"][] = "sales_price";
$tdatasatei[".viewFields"][] = "yahoo_sex";
$tdatasatei[".viewFields"][] = "product_num";
$tdatasatei[".viewFields"][] = "description";
$tdatasatei[".viewFields"][] = "raku_hyoujisaki_category";
$tdatasatei[".viewFields"][] = "raku_hyoujisaki_category2";
$tdatasatei[".viewFields"][] = "raku_hyoujisaki_category3";
$tdatasatei[".viewFields"][] = "raku_hyoujisaki_category4";
$tdatasatei[".viewFields"][] = "raku_hyoujisaki_category5";
$tdatasatei[".viewFields"][] = "yahoo_kataban";
$tdatasatei[".viewFields"][] = "yahoo_sozai";
$tdatasatei[".viewFields"][] = "yahoo_color";
$tdatasatei[".viewFields"][] = "yahoo_size";
$tdatasatei[".viewFields"][] = "yahoo_condition1";
$tdatasatei[".viewFields"][] = "yahoo_condition2";
$tdatasatei[".viewFields"][] = "remark";
$tdatasatei[".viewFields"][] = "yahoo_fuzokuhin";
$tdatasatei[".viewFields"][] = "yahoo_sankou_uwadai";
$tdatasatei[".viewFields"][] = "season";
$tdatasatei[".viewFields"][] = "yahoo_title";
$tdatasatei[".viewFields"][] = "goods_title";
$tdatasatei[".viewFields"][] = "raku_title";
$tdatasatei[".viewFields"][] = "raku_tag_result";
$tdatasatei[".viewFields"][] = "search_keyword";
$tdatasatei[".viewFields"][] = "stamp";
$tdatasatei[".viewFields"][] = "processing";
$tdatasatei[".viewFields"][] = "Sleeve_Length";
$tdatasatei[".viewFields"][] = "length";
$tdatasatei[".viewFields"][] = "label_output_flag";
$tdatasatei[".viewFields"][] = "Ring_size";
$tdatasatei[".viewFields"][] = "comment";
$tdatasatei[".viewFields"][] = "satei_hi";
$tdatasatei[".viewFields"][] = "gold_property";
$tdatasatei[".viewFields"][] = "ichiba_title";
$tdatasatei[".viewFields"][] = "Gram";
$tdatasatei[".viewFields"][] = "Parent_stone";
$tdatasatei[".viewFields"][] = "Aside_stone";
$tdatasatei[".viewFields"][] = "Appraiser";
$tdatasatei[".viewFields"][] = "Remarks";
$tdatasatei[".viewFields"][] = "Destination_selling";
$tdatasatei[".viewFields"][] = "Finish";
$tdatasatei[".viewFields"][] = "Discrimination";
$tdatasatei[".viewFields"][] = "accessories";
$tdatasatei[".viewFields"][] = "priority";
$tdatasatei[".viewFields"][] = "A_storage";
$tdatasatei[".viewFields"][] = "price_per_gram";
$tdatasatei[".viewFields"][] = "price_per_parent_stone";
$tdatasatei[".viewFields"][] = "price_per_aside_stone";
$tdatasatei[".viewFields"][] = "price_secret";
$tdatasatei[".viewFields"][] = "sales_price_secret";
$tdatasatei[".viewFields"][] = "line";
$tdatasatei[".viewFields"][] = "item_name";
$tdatasatei[".viewFields"][] = "handle";
$tdatasatei[".viewFields"][] = "serial_number";
$tdatasatei[".viewFields"][] = "motif";
$tdatasatei[".viewFields"][] = "Setting";

$tdatasatei[".addFields"] = array();
$tdatasatei[".addFields"][] = "hall_mark";
$tdatasatei[".addFields"][] = "plate";
$tdatasatei[".addFields"][] = "toe";
$tdatasatei[".addFields"][] = "heel";
$tdatasatei[".addFields"][] = "cloth";
$tdatasatei[".addFields"][] = "shape_supplement";
$tdatasatei[".addFields"][] = "product_style";
$tdatasatei[".addFields"][] = "cutting_style";
$tdatasatei[".addFields"][] = "side_gem";
$tdatasatei[".addFields"][] = "number_of_stones";
$tdatasatei[".addFields"][] = "satei_error";
$tdatasatei[".addFields"][] = "chain_type";
$tdatasatei[".addFields"][] = "producing_area";
$tdatasatei[".addFields"][] = "sleeve";
$tdatasatei[".addFields"][] = "silhouette";
$tdatasatei[".addFields"][] = "unit";
$tdatasatei[".addFields"][] = "breast";
$tdatasatei[".addFields"][] = "collar_neck_line";
$tdatasatei[".addFields"][] = "amount";
$tdatasatei[".addFields"][] = "designer";
$tdatasatei[".addFields"][] = "hahakai";
$tdatasatei[".addFields"][] = "effect";
$tdatasatei[".addFields"][] = "shape";
$tdatasatei[".addFields"][] = "country_of_origin";
$tdatasatei[".addFields"][] = "parts";
$tdatasatei[".addFields"][] = "logo";
$tdatasatei[".addFields"][] = "guarantee";
$tdatasatei[".addFields"][] = "zipper";
$tdatasatei[".addFields"][] = "status";
$tdatasatei[".addFields"][] = "satei_by";
$tdatasatei[".addFields"][] = "category_id";
$tdatasatei[".addFields"][] = "sub_category_id1";
$tdatasatei[".addFields"][] = "yahoo_sinaban";
$tdatasatei[".addFields"][] = "price";
$tdatasatei[".addFields"][] = "sales_price";
$tdatasatei[".addFields"][] = "yahoo_sex";
$tdatasatei[".addFields"][] = "product_num";
$tdatasatei[".addFields"][] = "description";
$tdatasatei[".addFields"][] = "raku_hyoujisaki_category";
$tdatasatei[".addFields"][] = "raku_hyoujisaki_category2";
$tdatasatei[".addFields"][] = "raku_hyoujisaki_category3";
$tdatasatei[".addFields"][] = "raku_hyoujisaki_category4";
$tdatasatei[".addFields"][] = "raku_hyoujisaki_category5";
$tdatasatei[".addFields"][] = "yahoo_kataban";
$tdatasatei[".addFields"][] = "yahoo_sozai";
$tdatasatei[".addFields"][] = "yahoo_color";
$tdatasatei[".addFields"][] = "yahoo_size";
$tdatasatei[".addFields"][] = "yahoo_condition1";
$tdatasatei[".addFields"][] = "yahoo_condition2";
$tdatasatei[".addFields"][] = "remark";
$tdatasatei[".addFields"][] = "yahoo_fuzokuhin";
$tdatasatei[".addFields"][] = "yahoo_sankou_uwadai";
$tdatasatei[".addFields"][] = "season";
$tdatasatei[".addFields"][] = "yahoo_title";
$tdatasatei[".addFields"][] = "goods_title";
$tdatasatei[".addFields"][] = "raku_title";
$tdatasatei[".addFields"][] = "raku_tag_result";
$tdatasatei[".addFields"][] = "search_keyword";
$tdatasatei[".addFields"][] = "stamp";
$tdatasatei[".addFields"][] = "processing";
$tdatasatei[".addFields"][] = "Sleeve_Length";
$tdatasatei[".addFields"][] = "length";
$tdatasatei[".addFields"][] = "label_output_flag";
$tdatasatei[".addFields"][] = "Ring_size";
$tdatasatei[".addFields"][] = "comment";
$tdatasatei[".addFields"][] = "satei_hi";
$tdatasatei[".addFields"][] = "gold_property";
$tdatasatei[".addFields"][] = "ichiba_title";
$tdatasatei[".addFields"][] = "Gram";
$tdatasatei[".addFields"][] = "Parent_stone";
$tdatasatei[".addFields"][] = "Aside_stone";
$tdatasatei[".addFields"][] = "Appraiser";
$tdatasatei[".addFields"][] = "Remarks";
$tdatasatei[".addFields"][] = "Destination_selling";
$tdatasatei[".addFields"][] = "Finish";
$tdatasatei[".addFields"][] = "Discrimination";
$tdatasatei[".addFields"][] = "accessories";
$tdatasatei[".addFields"][] = "priority";
$tdatasatei[".addFields"][] = "A_storage";
$tdatasatei[".addFields"][] = "price_per_gram";
$tdatasatei[".addFields"][] = "price_per_parent_stone";
$tdatasatei[".addFields"][] = "price_per_aside_stone";
$tdatasatei[".addFields"][] = "price_secret";
$tdatasatei[".addFields"][] = "sales_price_secret";
$tdatasatei[".addFields"][] = "line";
$tdatasatei[".addFields"][] = "item_name";
$tdatasatei[".addFields"][] = "handle";
$tdatasatei[".addFields"][] = "serial_number";
$tdatasatei[".addFields"][] = "motif";
$tdatasatei[".addFields"][] = "Setting";

$tdatasatei[".masterListFields"] = array();
$tdatasatei[".masterListFields"][] = "ecc_seq";
$tdatasatei[".masterListFields"][] = "yahoo_junle";
$tdatasatei[".masterListFields"][] = "logo";
$tdatasatei[".masterListFields"][] = "parts";
$tdatasatei[".masterListFields"][] = "country_of_origin";
$tdatasatei[".masterListFields"][] = "zipper";
$tdatasatei[".masterListFields"][] = "guarantee";
$tdatasatei[".masterListFields"][] = "errors";
$tdatasatei[".masterListFields"][] = "designer";
$tdatasatei[".masterListFields"][] = "hahakai";
$tdatasatei[".masterListFields"][] = "effect";
$tdatasatei[".masterListFields"][] = "shape";
$tdatasatei[".masterListFields"][] = "cutting_style";
$tdatasatei[".masterListFields"][] = "chain_type";
$tdatasatei[".masterListFields"][] = "number_of_stones";
$tdatasatei[".masterListFields"][] = "amount";
$tdatasatei[".masterListFields"][] = "satei_error";
$tdatasatei[".masterListFields"][] = "producing_area";
$tdatasatei[".masterListFields"][] = "shape_supplement";
$tdatasatei[".masterListFields"][] = "side_gem";
$tdatasatei[".masterListFields"][] = "product_style";
$tdatasatei[".masterListFields"][] = "collar_neck_line";
$tdatasatei[".masterListFields"][] = "breast";
$tdatasatei[".masterListFields"][] = "silhouette";
$tdatasatei[".masterListFields"][] = "sleeve";
$tdatasatei[".masterListFields"][] = "unit";
$tdatasatei[".masterListFields"][] = "hall_mark";
$tdatasatei[".masterListFields"][] = "plate";
$tdatasatei[".masterListFields"][] = "toe";
$tdatasatei[".masterListFields"][] = "heel";
$tdatasatei[".masterListFields"][] = "cloth";
$tdatasatei[".masterListFields"][] = "official_url";
$tdatasatei[".masterListFields"][] = "Eoc_takuhai_id";
$tdatasatei[".masterListFields"][] = "Eoc_unfinished_id";
$tdatasatei[".masterListFields"][] = "status";
$tdatasatei[".masterListFields"][] = "satei_by";
$tdatasatei[".masterListFields"][] = "category_id";
$tdatasatei[".masterListFields"][] = "title";
$tdatasatei[".masterListFields"][] = "sub_category_id1";
$tdatasatei[".masterListFields"][] = "product_id";
$tdatasatei[".masterListFields"][] = "ecc_id";
$tdatasatei[".masterListFields"][] = "yahoo";
$tdatasatei[".masterListFields"][] = "yahoo_sinaban";
$tdatasatei[".masterListFields"][] = "price";
$tdatasatei[".masterListFields"][] = "sales_price";
$tdatasatei[".masterListFields"][] = "yahoo_sex";
$tdatasatei[".masterListFields"][] = "product_num";
$tdatasatei[".masterListFields"][] = "description";
$tdatasatei[".masterListFields"][] = "raku_hyoujisaki_category";
$tdatasatei[".masterListFields"][] = "raku_hyoujisaki_category2";
$tdatasatei[".masterListFields"][] = "raku_hyoujisaki_category3";
$tdatasatei[".masterListFields"][] = "raku_hyoujisaki_category4";
$tdatasatei[".masterListFields"][] = "raku_hyoujisaki_category5";
$tdatasatei[".masterListFields"][] = "yahoo_kataban";
$tdatasatei[".masterListFields"][] = "yahoo_sozai";
$tdatasatei[".masterListFields"][] = "yahoo_color";
$tdatasatei[".masterListFields"][] = "yahoo_size";
$tdatasatei[".masterListFields"][] = "yahoo_condition1";
$tdatasatei[".masterListFields"][] = "yahoo_condition2";
$tdatasatei[".masterListFields"][] = "remark";
$tdatasatei[".masterListFields"][] = "yahoo_fuzokuhin";
$tdatasatei[".masterListFields"][] = "yahoo_sankou_uwadai";
$tdatasatei[".masterListFields"][] = "yahoo_saisun_sha";
$tdatasatei[".masterListFields"][] = "season";
$tdatasatei[".masterListFields"][] = "yahoo_title";
$tdatasatei[".masterListFields"][] = "box_id";
$tdatasatei[".masterListFields"][] = "goods_title";
$tdatasatei[".masterListFields"][] = "nyuukin_price";
$tdatasatei[".masterListFields"][] = "updated_by";
$tdatasatei[".masterListFields"][] = "raku_title";
$tdatasatei[".masterListFields"][] = "raku_tag_result";
$tdatasatei[".masterListFields"][] = "search_keyword";
$tdatasatei[".masterListFields"][] = "stamp";
$tdatasatei[".masterListFields"][] = "timesta";
$tdatasatei[".masterListFields"][] = "processing";
$tdatasatei[".masterListFields"][] = "saisun_start";
$tdatasatei[".masterListFields"][] = "Sleeve_Length";
$tdatasatei[".masterListFields"][] = "saisun_end";
$tdatasatei[".masterListFields"][] = "length";
$tdatasatei[".masterListFields"][] = "label_output_flag";
$tdatasatei[".masterListFields"][] = "Ring_size";
$tdatasatei[".masterListFields"][] = "price_for_site";
$tdatasatei[".masterListFields"][] = "kanryou_henbi";
$tdatasatei[".masterListFields"][] = "yahoo_category_id";
$tdatasatei[".masterListFields"][] = "box_sort";
$tdatasatei[".masterListFields"][] = "Qty";
$tdatasatei[".masterListFields"][] = "sales_period";
$tdatasatei[".masterListFields"][] = "kaitori_by";
$tdatasatei[".masterListFields"][] = "starting_price";
$tdatasatei[".masterListFields"][] = "comment";
$tdatasatei[".masterListFields"][] = "satei_hi";
$tdatasatei[".masterListFields"][] = "kaitory_hi";
$tdatasatei[".masterListFields"][] = "REG_PHOTOGRAPHER";
$tdatasatei[".masterListFields"][] = "REG_PACKINGS";
$tdatasatei[".masterListFields"][] = "REG_KAKOU_DATE";
$tdatasatei[".masterListFields"][] = "REG_KAKOU";
$tdatasatei[".masterListFields"][] = "REG_EXHIBITOR";
$tdatasatei[".masterListFields"][] = "REG_PHOTOGRAPHER_DATE";
$tdatasatei[".masterListFields"][] = "DT_PACKING_DATE";
$tdatasatei[".masterListFields"][] = "DT_UP_DATE";
$tdatasatei[".masterListFields"][] = "AWAZU_DATE";
$tdatasatei[".masterListFields"][] = "AWAZU_NIN";
$tdatasatei[".masterListFields"][] = "sabun_date";
$tdatasatei[".masterListFields"][] = "browseid";
$tdatasatei[".masterListFields"][] = "browsenode";
$tdatasatei[".masterListFields"][] = "gold_property";
$tdatasatei[".masterListFields"][] = "ichiba_title";
$tdatasatei[".masterListFields"][] = "Gram";
$tdatasatei[".masterListFields"][] = "Parent_stone";
$tdatasatei[".masterListFields"][] = "Aside_stone";
$tdatasatei[".masterListFields"][] = "Appraiser";
$tdatasatei[".masterListFields"][] = "Remarks";
$tdatasatei[".masterListFields"][] = "Destination_selling";
$tdatasatei[".masterListFields"][] = "Finish";
$tdatasatei[".masterListFields"][] = "Discrimination";
$tdatasatei[".masterListFields"][] = "accessories";
$tdatasatei[".masterListFields"][] = "priority";
$tdatasatei[".masterListFields"][] = "A_storage";
$tdatasatei[".masterListFields"][] = "price_per_gram";
$tdatasatei[".masterListFields"][] = "price_per_parent_stone";
$tdatasatei[".masterListFields"][] = "price_per_aside_stone";
$tdatasatei[".masterListFields"][] = "price_secret";
$tdatasatei[".masterListFields"][] = "sales_price_secret";
$tdatasatei[".masterListFields"][] = "eq";
$tdatasatei[".masterListFields"][] = "en";
$tdatasatei[".masterListFields"][] = "line";
$tdatasatei[".masterListFields"][] = "item_name";
$tdatasatei[".masterListFields"][] = "handle";
$tdatasatei[".masterListFields"][] = "yahoo_color_id";
$tdatasatei[".masterListFields"][] = "raku_dir_1";
$tdatasatei[".masterListFields"][] = "raku_dir_2";
$tdatasatei[".masterListFields"][] = "raku_dir_3";
$tdatasatei[".masterListFields"][] = "raku_dir_4";
$tdatasatei[".masterListFields"][] = "raku_dir_5";
$tdatasatei[".masterListFields"][] = "raku_dir_result";
$tdatasatei[".masterListFields"][] = "serial_number";
$tdatasatei[".masterListFields"][] = "Exhibition_Date";
$tdatasatei[".masterListFields"][] = "motif";
$tdatasatei[".masterListFields"][] = "Setting";

$tdatasatei[".inlineAddFields"] = array();
$tdatasatei[".inlineAddFields"][] = "label_output_flag";
$tdatasatei[".inlineAddFields"][] = "status";
$tdatasatei[".inlineAddFields"][] = "product_num";
$tdatasatei[".inlineAddFields"][] = "category_id";
$tdatasatei[".inlineAddFields"][] = "sub_category_id1";
$tdatasatei[".inlineAddFields"][] = "gold_property";
$tdatasatei[".inlineAddFields"][] = "Gram";
$tdatasatei[".inlineAddFields"][] = "unit";
$tdatasatei[".inlineAddFields"][] = "Parent_stone";
$tdatasatei[".inlineAddFields"][] = "Aside_stone";
$tdatasatei[".inlineAddFields"][] = "Ring_size";
$tdatasatei[".inlineAddFields"][] = "price_per_gram";
$tdatasatei[".inlineAddFields"][] = "price_per_parent_stone";
$tdatasatei[".inlineAddFields"][] = "price_per_aside_stone";
$tdatasatei[".inlineAddFields"][] = "yahoo_sex";
$tdatasatei[".inlineAddFields"][] = "yahoo_condition2";
$tdatasatei[".inlineAddFields"][] = "logo";
$tdatasatei[".inlineAddFields"][] = "parts";
$tdatasatei[".inlineAddFields"][] = "guarantee";
$tdatasatei[".inlineAddFields"][] = "comment";
$tdatasatei[".inlineAddFields"][] = "serial_number";
$tdatasatei[".inlineAddFields"][] = "yahoo_kataban";
$tdatasatei[".inlineAddFields"][] = "country_of_origin";
$tdatasatei[".inlineAddFields"][] = "hall_mark";
$tdatasatei[".inlineAddFields"][] = "zipper";
$tdatasatei[".inlineAddFields"][] = "designer";
$tdatasatei[".inlineAddFields"][] = "line";
$tdatasatei[".inlineAddFields"][] = "item_name";
$tdatasatei[".inlineAddFields"][] = "number_of_stones";
$tdatasatei[".inlineAddFields"][] = "shape_supplement";
$tdatasatei[".inlineAddFields"][] = "side_gem";
$tdatasatei[".inlineAddFields"][] = "product_style";
$tdatasatei[".inlineAddFields"][] = "yahoo_sozai";
$tdatasatei[".inlineAddFields"][] = "toe";
$tdatasatei[".inlineAddFields"][] = "heel";
$tdatasatei[".inlineAddFields"][] = "cloth";
$tdatasatei[".inlineAddFields"][] = "Sleeve_Length";
$tdatasatei[".inlineAddFields"][] = "collar_neck_line";
$tdatasatei[".inlineAddFields"][] = "breast";
$tdatasatei[".inlineAddFields"][] = "handle";
$tdatasatei[".inlineAddFields"][] = "silhouette";
$tdatasatei[".inlineAddFields"][] = "sleeve";
$tdatasatei[".inlineAddFields"][] = "length";
$tdatasatei[".inlineAddFields"][] = "amount";
$tdatasatei[".inlineAddFields"][] = "ichiba_title";
$tdatasatei[".inlineAddFields"][] = "plate";
$tdatasatei[".inlineAddFields"][] = "motif";
$tdatasatei[".inlineAddFields"][] = "producing_area";
$tdatasatei[".inlineAddFields"][] = "hahakai";
$tdatasatei[".inlineAddFields"][] = "effect";
$tdatasatei[".inlineAddFields"][] = "shape";
$tdatasatei[".inlineAddFields"][] = "cutting_style";
$tdatasatei[".inlineAddFields"][] = "Setting";
$tdatasatei[".inlineAddFields"][] = "processing";
$tdatasatei[".inlineAddFields"][] = "chain_type";
$tdatasatei[".inlineAddFields"][] = "Appraiser";
$tdatasatei[".inlineAddFields"][] = "Remarks";
$tdatasatei[".inlineAddFields"][] = "yahoo_color";
$tdatasatei[".inlineAddFields"][] = "stamp";
$tdatasatei[".inlineAddFields"][] = "price";
$tdatasatei[".inlineAddFields"][] = "sales_price";
$tdatasatei[".inlineAddFields"][] = "yahoo_sankou_uwadai";
$tdatasatei[".inlineAddFields"][] = "description";
$tdatasatei[".inlineAddFields"][] = "Destination_selling";
$tdatasatei[".inlineAddFields"][] = "Finish";
$tdatasatei[".inlineAddFields"][] = "Discrimination";
$tdatasatei[".inlineAddFields"][] = "accessories";
$tdatasatei[".inlineAddFields"][] = "priority";
$tdatasatei[".inlineAddFields"][] = "A_storage";
$tdatasatei[".inlineAddFields"][] = "satei_by";
$tdatasatei[".inlineAddFields"][] = "satei_hi";
$tdatasatei[".inlineAddFields"][] = "price_secret";
$tdatasatei[".inlineAddFields"][] = "sales_price_secret";
$tdatasatei[".inlineAddFields"][] = "errors";
$tdatasatei[".inlineAddFields"][] = "satei_error";

$tdatasatei[".editFields"] = array();
$tdatasatei[".editFields"][] = "cloth";
$tdatasatei[".editFields"][] = "hall_mark";
$tdatasatei[".editFields"][] = "heel";
$tdatasatei[".editFields"][] = "toe";
$tdatasatei[".editFields"][] = "plate";
$tdatasatei[".editFields"][] = "shape_supplement";
$tdatasatei[".editFields"][] = "product_style";
$tdatasatei[".editFields"][] = "cutting_style";
$tdatasatei[".editFields"][] = "side_gem";
$tdatasatei[".editFields"][] = "number_of_stones";
$tdatasatei[".editFields"][] = "satei_error";
$tdatasatei[".editFields"][] = "chain_type";
$tdatasatei[".editFields"][] = "producing_area";
$tdatasatei[".editFields"][] = "sleeve";
$tdatasatei[".editFields"][] = "silhouette";
$tdatasatei[".editFields"][] = "unit";
$tdatasatei[".editFields"][] = "breast";
$tdatasatei[".editFields"][] = "collar_neck_line";
$tdatasatei[".editFields"][] = "amount";
$tdatasatei[".editFields"][] = "designer";
$tdatasatei[".editFields"][] = "hahakai";
$tdatasatei[".editFields"][] = "effect";
$tdatasatei[".editFields"][] = "shape";
$tdatasatei[".editFields"][] = "country_of_origin";
$tdatasatei[".editFields"][] = "parts";
$tdatasatei[".editFields"][] = "logo";
$tdatasatei[".editFields"][] = "guarantee";
$tdatasatei[".editFields"][] = "zipper";
$tdatasatei[".editFields"][] = "status";
$tdatasatei[".editFields"][] = "satei_by";
$tdatasatei[".editFields"][] = "category_id";
$tdatasatei[".editFields"][] = "sub_category_id1";
$tdatasatei[".editFields"][] = "yahoo_sinaban";
$tdatasatei[".editFields"][] = "price";
$tdatasatei[".editFields"][] = "sales_price";
$tdatasatei[".editFields"][] = "yahoo_sex";
$tdatasatei[".editFields"][] = "product_num";
$tdatasatei[".editFields"][] = "description";
$tdatasatei[".editFields"][] = "raku_hyoujisaki_category";
$tdatasatei[".editFields"][] = "raku_hyoujisaki_category2";
$tdatasatei[".editFields"][] = "raku_hyoujisaki_category3";
$tdatasatei[".editFields"][] = "raku_hyoujisaki_category4";
$tdatasatei[".editFields"][] = "raku_hyoujisaki_category5";
$tdatasatei[".editFields"][] = "yahoo_kataban";
$tdatasatei[".editFields"][] = "yahoo_sozai";
$tdatasatei[".editFields"][] = "yahoo_color";
$tdatasatei[".editFields"][] = "yahoo_size";
$tdatasatei[".editFields"][] = "yahoo_condition1";
$tdatasatei[".editFields"][] = "yahoo_condition2";
$tdatasatei[".editFields"][] = "remark";
$tdatasatei[".editFields"][] = "yahoo_fuzokuhin";
$tdatasatei[".editFields"][] = "yahoo_sankou_uwadai";
$tdatasatei[".editFields"][] = "season";
$tdatasatei[".editFields"][] = "yahoo_title";
$tdatasatei[".editFields"][] = "goods_title";
$tdatasatei[".editFields"][] = "raku_title";
$tdatasatei[".editFields"][] = "raku_tag_result";
$tdatasatei[".editFields"][] = "search_keyword";
$tdatasatei[".editFields"][] = "stamp";
$tdatasatei[".editFields"][] = "processing";
$tdatasatei[".editFields"][] = "Sleeve_Length";
$tdatasatei[".editFields"][] = "length";
$tdatasatei[".editFields"][] = "comment";
$tdatasatei[".editFields"][] = "Ring_size";
$tdatasatei[".editFields"][] = "label_output_flag";
$tdatasatei[".editFields"][] = "satei_hi";
$tdatasatei[".editFields"][] = "gold_property";
$tdatasatei[".editFields"][] = "ichiba_title";
$tdatasatei[".editFields"][] = "Gram";
$tdatasatei[".editFields"][] = "Parent_stone";
$tdatasatei[".editFields"][] = "Aside_stone";
$tdatasatei[".editFields"][] = "Appraiser";
$tdatasatei[".editFields"][] = "accessories";
$tdatasatei[".editFields"][] = "priority";
$tdatasatei[".editFields"][] = "A_storage";
$tdatasatei[".editFields"][] = "price_per_gram";
$tdatasatei[".editFields"][] = "price_per_parent_stone";
$tdatasatei[".editFields"][] = "price_per_aside_stone";
$tdatasatei[".editFields"][] = "price_secret";
$tdatasatei[".editFields"][] = "line";
$tdatasatei[".editFields"][] = "item_name";
$tdatasatei[".editFields"][] = "serial_number";
$tdatasatei[".editFields"][] = "motif";
$tdatasatei[".editFields"][] = "Setting";
$tdatasatei[".editFields"][] = "Remarks";
$tdatasatei[".editFields"][] = "Destination_selling";
$tdatasatei[".editFields"][] = "Finish";
$tdatasatei[".editFields"][] = "Discrimination";
$tdatasatei[".editFields"][] = "sales_price_secret";
$tdatasatei[".editFields"][] = "handle";

$tdatasatei[".inlineEditFields"] = array();
$tdatasatei[".inlineEditFields"][] = "label_output_flag";
$tdatasatei[".inlineEditFields"][] = "status";
$tdatasatei[".inlineEditFields"][] = "product_num";
$tdatasatei[".inlineEditFields"][] = "category_id";
$tdatasatei[".inlineEditFields"][] = "sub_category_id1";
$tdatasatei[".inlineEditFields"][] = "gold_property";
$tdatasatei[".inlineEditFields"][] = "Gram";
$tdatasatei[".inlineEditFields"][] = "unit";
$tdatasatei[".inlineEditFields"][] = "Parent_stone";
$tdatasatei[".inlineEditFields"][] = "Aside_stone";
$tdatasatei[".inlineEditFields"][] = "Ring_size";
$tdatasatei[".inlineEditFields"][] = "price_per_gram";
$tdatasatei[".inlineEditFields"][] = "price_per_parent_stone";
$tdatasatei[".inlineEditFields"][] = "price_per_aside_stone";
$tdatasatei[".inlineEditFields"][] = "yahoo_sex";
$tdatasatei[".inlineEditFields"][] = "yahoo_condition2";
$tdatasatei[".inlineEditFields"][] = "logo";
$tdatasatei[".inlineEditFields"][] = "parts";
$tdatasatei[".inlineEditFields"][] = "guarantee";
$tdatasatei[".inlineEditFields"][] = "comment";
$tdatasatei[".inlineEditFields"][] = "serial_number";
$tdatasatei[".inlineEditFields"][] = "yahoo_kataban";
$tdatasatei[".inlineEditFields"][] = "country_of_origin";
$tdatasatei[".inlineEditFields"][] = "hall_mark";
$tdatasatei[".inlineEditFields"][] = "zipper";
$tdatasatei[".inlineEditFields"][] = "designer";
$tdatasatei[".inlineEditFields"][] = "line";
$tdatasatei[".inlineEditFields"][] = "item_name";
$tdatasatei[".inlineEditFields"][] = "number_of_stones";
$tdatasatei[".inlineEditFields"][] = "shape_supplement";
$tdatasatei[".inlineEditFields"][] = "side_gem";
$tdatasatei[".inlineEditFields"][] = "product_style";
$tdatasatei[".inlineEditFields"][] = "yahoo_sozai";
$tdatasatei[".inlineEditFields"][] = "toe";
$tdatasatei[".inlineEditFields"][] = "heel";
$tdatasatei[".inlineEditFields"][] = "cloth";
$tdatasatei[".inlineEditFields"][] = "Sleeve_Length";
$tdatasatei[".inlineEditFields"][] = "collar_neck_line";
$tdatasatei[".inlineEditFields"][] = "breast";
$tdatasatei[".inlineEditFields"][] = "handle";
$tdatasatei[".inlineEditFields"][] = "silhouette";
$tdatasatei[".inlineEditFields"][] = "sleeve";
$tdatasatei[".inlineEditFields"][] = "length";
$tdatasatei[".inlineEditFields"][] = "amount";
$tdatasatei[".inlineEditFields"][] = "ichiba_title";
$tdatasatei[".inlineEditFields"][] = "plate";
$tdatasatei[".inlineEditFields"][] = "motif";
$tdatasatei[".inlineEditFields"][] = "producing_area";
$tdatasatei[".inlineEditFields"][] = "hahakai";
$tdatasatei[".inlineEditFields"][] = "effect";
$tdatasatei[".inlineEditFields"][] = "shape";
$tdatasatei[".inlineEditFields"][] = "cutting_style";
$tdatasatei[".inlineEditFields"][] = "Setting";
$tdatasatei[".inlineEditFields"][] = "processing";
$tdatasatei[".inlineEditFields"][] = "chain_type";
$tdatasatei[".inlineEditFields"][] = "Appraiser";
$tdatasatei[".inlineEditFields"][] = "Remarks";
$tdatasatei[".inlineEditFields"][] = "yahoo_color";
$tdatasatei[".inlineEditFields"][] = "stamp";
$tdatasatei[".inlineEditFields"][] = "price";
$tdatasatei[".inlineEditFields"][] = "sales_price";
$tdatasatei[".inlineEditFields"][] = "yahoo_sankou_uwadai";
$tdatasatei[".inlineEditFields"][] = "description";
$tdatasatei[".inlineEditFields"][] = "Destination_selling";
$tdatasatei[".inlineEditFields"][] = "Finish";
$tdatasatei[".inlineEditFields"][] = "Discrimination";
$tdatasatei[".inlineEditFields"][] = "accessories";
$tdatasatei[".inlineEditFields"][] = "priority";
$tdatasatei[".inlineEditFields"][] = "A_storage";
$tdatasatei[".inlineEditFields"][] = "satei_by";
$tdatasatei[".inlineEditFields"][] = "satei_hi";
$tdatasatei[".inlineEditFields"][] = "price_secret";
$tdatasatei[".inlineEditFields"][] = "sales_price_secret";
$tdatasatei[".inlineEditFields"][] = "errors";
$tdatasatei[".inlineEditFields"][] = "satei_error";

$tdatasatei[".updateSelectedFields"] = array();
$tdatasatei[".updateSelectedFields"][] = "status";
$tdatasatei[".updateSelectedFields"][] = "satei_by";
$tdatasatei[".updateSelectedFields"][] = "category_id";
$tdatasatei[".updateSelectedFields"][] = "sub_category_id1";
$tdatasatei[".updateSelectedFields"][] = "yahoo_sinaban";
$tdatasatei[".updateSelectedFields"][] = "price";
$tdatasatei[".updateSelectedFields"][] = "sales_price";
$tdatasatei[".updateSelectedFields"][] = "yahoo_sex";
$tdatasatei[".updateSelectedFields"][] = "product_num";
$tdatasatei[".updateSelectedFields"][] = "description";
$tdatasatei[".updateSelectedFields"][] = "raku_hyoujisaki_category";
$tdatasatei[".updateSelectedFields"][] = "raku_hyoujisaki_category2";
$tdatasatei[".updateSelectedFields"][] = "raku_hyoujisaki_category3";
$tdatasatei[".updateSelectedFields"][] = "raku_hyoujisaki_category4";
$tdatasatei[".updateSelectedFields"][] = "raku_hyoujisaki_category5";
$tdatasatei[".updateSelectedFields"][] = "yahoo_kataban";
$tdatasatei[".updateSelectedFields"][] = "yahoo_sozai";
$tdatasatei[".updateSelectedFields"][] = "yahoo_color";
$tdatasatei[".updateSelectedFields"][] = "yahoo_size";
$tdatasatei[".updateSelectedFields"][] = "yahoo_condition1";
$tdatasatei[".updateSelectedFields"][] = "yahoo_condition2";
$tdatasatei[".updateSelectedFields"][] = "remark";
$tdatasatei[".updateSelectedFields"][] = "yahoo_fuzokuhin";
$tdatasatei[".updateSelectedFields"][] = "yahoo_sankou_uwadai";
$tdatasatei[".updateSelectedFields"][] = "season";
$tdatasatei[".updateSelectedFields"][] = "yahoo_title";
$tdatasatei[".updateSelectedFields"][] = "goods_title";
$tdatasatei[".updateSelectedFields"][] = "raku_title";
$tdatasatei[".updateSelectedFields"][] = "raku_tag_result";
$tdatasatei[".updateSelectedFields"][] = "search_keyword";
$tdatasatei[".updateSelectedFields"][] = "stamp";
$tdatasatei[".updateSelectedFields"][] = "processing";
$tdatasatei[".updateSelectedFields"][] = "Sleeve_Length";
$tdatasatei[".updateSelectedFields"][] = "length";
$tdatasatei[".updateSelectedFields"][] = "comment";
$tdatasatei[".updateSelectedFields"][] = "Ring_size";
$tdatasatei[".updateSelectedFields"][] = "label_output_flag";
$tdatasatei[".updateSelectedFields"][] = "satei_hi";
$tdatasatei[".updateSelectedFields"][] = "gold_property";
$tdatasatei[".updateSelectedFields"][] = "ichiba_title";
$tdatasatei[".updateSelectedFields"][] = "Gram";
$tdatasatei[".updateSelectedFields"][] = "Parent_stone";
$tdatasatei[".updateSelectedFields"][] = "Aside_stone";
$tdatasatei[".updateSelectedFields"][] = "Appraiser";
$tdatasatei[".updateSelectedFields"][] = "accessories";
$tdatasatei[".updateSelectedFields"][] = "priority";
$tdatasatei[".updateSelectedFields"][] = "A_storage";
$tdatasatei[".updateSelectedFields"][] = "price_per_parent_stone";
$tdatasatei[".updateSelectedFields"][] = "price_per_aside_stone";
$tdatasatei[".updateSelectedFields"][] = "price_secret";
$tdatasatei[".updateSelectedFields"][] = "line";
$tdatasatei[".updateSelectedFields"][] = "item_name";
$tdatasatei[".updateSelectedFields"][] = "serial_number";
$tdatasatei[".updateSelectedFields"][] = "motif";
$tdatasatei[".updateSelectedFields"][] = "Setting";
$tdatasatei[".updateSelectedFields"][] = "Remarks";
$tdatasatei[".updateSelectedFields"][] = "Destination_selling";
$tdatasatei[".updateSelectedFields"][] = "Finish";
$tdatasatei[".updateSelectedFields"][] = "Discrimination";
$tdatasatei[".updateSelectedFields"][] = "sales_price_secret";
$tdatasatei[".updateSelectedFields"][] = "handle";


$tdatasatei[".exportFields"] = array();
$tdatasatei[".exportFields"][] = "label_output_flag";
$tdatasatei[".exportFields"][] = "status";
$tdatasatei[".exportFields"][] = "product_id";
$tdatasatei[".exportFields"][] = "yahoo_junle";
$tdatasatei[".exportFields"][] = "category_id";
$tdatasatei[".exportFields"][] = "sub_category_id1";
$tdatasatei[".exportFields"][] = "yahoo_sex";
$tdatasatei[".exportFields"][] = "yahoo_condition2";
$tdatasatei[".exportFields"][] = "logo";
$tdatasatei[".exportFields"][] = "parts";
$tdatasatei[".exportFields"][] = "country_of_origin";
$tdatasatei[".exportFields"][] = "serial_number";
$tdatasatei[".exportFields"][] = "zipper";
$tdatasatei[".exportFields"][] = "guarantee";
$tdatasatei[".exportFields"][] = "designer";
$tdatasatei[".exportFields"][] = "line";
$tdatasatei[".exportFields"][] = "item_name";
$tdatasatei[".exportFields"][] = "number_of_stones";
$tdatasatei[".exportFields"][] = "shape_supplement";
$tdatasatei[".exportFields"][] = "side_gem";
$tdatasatei[".exportFields"][] = "product_style";
$tdatasatei[".exportFields"][] = "yahoo_sozai";
$tdatasatei[".exportFields"][] = "toe";
$tdatasatei[".exportFields"][] = "heel";
$tdatasatei[".exportFields"][] = "cloth";
$tdatasatei[".exportFields"][] = "Sleeve_Length";
$tdatasatei[".exportFields"][] = "collar_neck_line";
$tdatasatei[".exportFields"][] = "breast";
$tdatasatei[".exportFields"][] = "handle";
$tdatasatei[".exportFields"][] = "silhouette";
$tdatasatei[".exportFields"][] = "sleeve";
$tdatasatei[".exportFields"][] = "length";
$tdatasatei[".exportFields"][] = "amount";
$tdatasatei[".exportFields"][] = "ichiba_title";
$tdatasatei[".exportFields"][] = "hall_mark";
$tdatasatei[".exportFields"][] = "plate";
$tdatasatei[".exportFields"][] = "gold_property";
$tdatasatei[".exportFields"][] = "Gram";
$tdatasatei[".exportFields"][] = "unit";
$tdatasatei[".exportFields"][] = "Parent_stone";
$tdatasatei[".exportFields"][] = "Aside_stone";
$tdatasatei[".exportFields"][] = "Ring_size";
$tdatasatei[".exportFields"][] = "price_per_gram";
$tdatasatei[".exportFields"][] = "price_per_parent_stone";
$tdatasatei[".exportFields"][] = "price_per_aside_stone";
$tdatasatei[".exportFields"][] = "motif";
$tdatasatei[".exportFields"][] = "producing_area";
$tdatasatei[".exportFields"][] = "hahakai";
$tdatasatei[".exportFields"][] = "effect";
$tdatasatei[".exportFields"][] = "shape";
$tdatasatei[".exportFields"][] = "cutting_style";
$tdatasatei[".exportFields"][] = "Setting";
$tdatasatei[".exportFields"][] = "processing";
$tdatasatei[".exportFields"][] = "chain_type";
$tdatasatei[".exportFields"][] = "Appraiser";
$tdatasatei[".exportFields"][] = "Remarks";
$tdatasatei[".exportFields"][] = "yahoo_color";
$tdatasatei[".exportFields"][] = "yahoo_kataban";
$tdatasatei[".exportFields"][] = "stamp";
$tdatasatei[".exportFields"][] = "eq";
$tdatasatei[".exportFields"][] = "price";
$tdatasatei[".exportFields"][] = "en";
$tdatasatei[".exportFields"][] = "comment";
$tdatasatei[".exportFields"][] = "sales_price";
$tdatasatei[".exportFields"][] = "yahoo_sankou_uwadai";
$tdatasatei[".exportFields"][] = "description";
$tdatasatei[".exportFields"][] = "Destination_selling";
$tdatasatei[".exportFields"][] = "Finish";
$tdatasatei[".exportFields"][] = "Discrimination";
$tdatasatei[".exportFields"][] = "accessories";
$tdatasatei[".exportFields"][] = "priority";
$tdatasatei[".exportFields"][] = "A_storage";
$tdatasatei[".exportFields"][] = "satei_by";
$tdatasatei[".exportFields"][] = "satei_hi";
$tdatasatei[".exportFields"][] = "price_secret";
$tdatasatei[".exportFields"][] = "sales_price_secret";
$tdatasatei[".exportFields"][] = "product_num";
$tdatasatei[".exportFields"][] = "errors";
$tdatasatei[".exportFields"][] = "satei_error";

$tdatasatei[".importFields"] = array();
$tdatasatei[".importFields"][] = "product_id";
$tdatasatei[".importFields"][] = "category_id";
$tdatasatei[".importFields"][] = "sub_category_id1";
$tdatasatei[".importFields"][] = "price";
$tdatasatei[".importFields"][] = "sales_price";
$tdatasatei[".importFields"][] = "description";
$tdatasatei[".importFields"][] = "status";
$tdatasatei[".importFields"][] = "product_num";
$tdatasatei[".importFields"][] = "yahoo_sankou_uwadai";
$tdatasatei[".importFields"][] = "yahoo_sozai";
$tdatasatei[".importFields"][] = "yahoo_color";
$tdatasatei[".importFields"][] = "yahoo_kataban";
$tdatasatei[".importFields"][] = "yahoo_condition2";
$tdatasatei[".importFields"][] = "yahoo_sex";
$tdatasatei[".importFields"][] = "label_output_flag";
$tdatasatei[".importFields"][] = "satei_by";
$tdatasatei[".importFields"][] = "comment";
$tdatasatei[".importFields"][] = "satei_hi";
$tdatasatei[".importFields"][] = "gold_property";
$tdatasatei[".importFields"][] = "ichiba_title";
$tdatasatei[".importFields"][] = "Gram";
$tdatasatei[".importFields"][] = "Parent_stone";
$tdatasatei[".importFields"][] = "Aside_stone";
$tdatasatei[".importFields"][] = "Appraiser";
$tdatasatei[".importFields"][] = "Remarks";
$tdatasatei[".importFields"][] = "Destination_selling";
$tdatasatei[".importFields"][] = "Finish";
$tdatasatei[".importFields"][] = "Discrimination";
$tdatasatei[".importFields"][] = "accessories";
$tdatasatei[".importFields"][] = "priority";
$tdatasatei[".importFields"][] = "A_storage";
$tdatasatei[".importFields"][] = "price_per_gram";
$tdatasatei[".importFields"][] = "price_per_parent_stone";
$tdatasatei[".importFields"][] = "price_per_aside_stone";
$tdatasatei[".importFields"][] = "price_secret";
$tdatasatei[".importFields"][] = "sales_price_secret";
$tdatasatei[".importFields"][] = "line";
$tdatasatei[".importFields"][] = "item_name";
$tdatasatei[".importFields"][] = "handle";
$tdatasatei[".importFields"][] = "serial_number";
$tdatasatei[".importFields"][] = "stamp";
$tdatasatei[".importFields"][] = "motif";
$tdatasatei[".importFields"][] = "Setting";
$tdatasatei[".importFields"][] = "processing";
$tdatasatei[".importFields"][] = "Sleeve_Length";
$tdatasatei[".importFields"][] = "length";
$tdatasatei[".importFields"][] = "Ring_size";
$tdatasatei[".importFields"][] = "yahoo_junle";
$tdatasatei[".importFields"][] = "logo";
$tdatasatei[".importFields"][] = "parts";
$tdatasatei[".importFields"][] = "country_of_origin";
$tdatasatei[".importFields"][] = "zipper";
$tdatasatei[".importFields"][] = "guarantee";
$tdatasatei[".importFields"][] = "errors";
$tdatasatei[".importFields"][] = "designer";
$tdatasatei[".importFields"][] = "hahakai";
$tdatasatei[".importFields"][] = "effect";
$tdatasatei[".importFields"][] = "shape";
$tdatasatei[".importFields"][] = "cutting_style";
$tdatasatei[".importFields"][] = "chain_type";
$tdatasatei[".importFields"][] = "number_of_stones";
$tdatasatei[".importFields"][] = "amount";
$tdatasatei[".importFields"][] = "satei_error";
$tdatasatei[".importFields"][] = "producing_area";
$tdatasatei[".importFields"][] = "shape_supplement";
$tdatasatei[".importFields"][] = "side_gem";
$tdatasatei[".importFields"][] = "product_style";
$tdatasatei[".importFields"][] = "collar_neck_line";
$tdatasatei[".importFields"][] = "breast";
$tdatasatei[".importFields"][] = "silhouette";
$tdatasatei[".importFields"][] = "sleeve";
$tdatasatei[".importFields"][] = "unit";
$tdatasatei[".importFields"][] = "hall_mark";
$tdatasatei[".importFields"][] = "plate";
$tdatasatei[".importFields"][] = "toe";
$tdatasatei[".importFields"][] = "heel";
$tdatasatei[".importFields"][] = "cloth";

$tdatasatei[".printFields"] = array();
$tdatasatei[".printFields"][] = "toe";
$tdatasatei[".printFields"][] = "satei_error";
$tdatasatei[".printFields"][] = "amount";
$tdatasatei[".printFields"][] = "number_of_stones";
$tdatasatei[".printFields"][] = "collar_neck_line";
$tdatasatei[".printFields"][] = "chain_type";
$tdatasatei[".printFields"][] = "breast";
$tdatasatei[".printFields"][] = "silhouette";
$tdatasatei[".printFields"][] = "cutting_style";
$tdatasatei[".printFields"][] = "sleeve";
$tdatasatei[".printFields"][] = "shape";
$tdatasatei[".printFields"][] = "side_gem";
$tdatasatei[".printFields"][] = "effect";
$tdatasatei[".printFields"][] = "hahakai";
$tdatasatei[".printFields"][] = "cloth";
$tdatasatei[".printFields"][] = "heel";
$tdatasatei[".printFields"][] = "designer";
$tdatasatei[".printFields"][] = "plate";
$tdatasatei[".printFields"][] = "hall_mark";
$tdatasatei[".printFields"][] = "unit";
$tdatasatei[".printFields"][] = "product_style";
$tdatasatei[".printFields"][] = "shape_supplement";
$tdatasatei[".printFields"][] = "producing_area";
$tdatasatei[".printFields"][] = "guarantee";
$tdatasatei[".printFields"][] = "zipper";
$tdatasatei[".printFields"][] = "country_of_origin";
$tdatasatei[".printFields"][] = "parts";
$tdatasatei[".printFields"][] = "logo";
$tdatasatei[".printFields"][] = "ecc_seq";
$tdatasatei[".printFields"][] = "status";
$tdatasatei[".printFields"][] = "satei_by";
$tdatasatei[".printFields"][] = "category_id";
$tdatasatei[".printFields"][] = "sub_category_id1";
$tdatasatei[".printFields"][] = "product_id";
$tdatasatei[".printFields"][] = "yahoo_sinaban";
$tdatasatei[".printFields"][] = "price";
$tdatasatei[".printFields"][] = "sales_price";
$tdatasatei[".printFields"][] = "yahoo_sex";
$tdatasatei[".printFields"][] = "product_num";
$tdatasatei[".printFields"][] = "description";
$tdatasatei[".printFields"][] = "raku_hyoujisaki_category";
$tdatasatei[".printFields"][] = "raku_hyoujisaki_category2";
$tdatasatei[".printFields"][] = "raku_hyoujisaki_category3";
$tdatasatei[".printFields"][] = "raku_hyoujisaki_category4";
$tdatasatei[".printFields"][] = "raku_hyoujisaki_category5";
$tdatasatei[".printFields"][] = "yahoo_kataban";
$tdatasatei[".printFields"][] = "yahoo_sozai";
$tdatasatei[".printFields"][] = "yahoo_color";
$tdatasatei[".printFields"][] = "yahoo_size";
$tdatasatei[".printFields"][] = "yahoo_condition1";
$tdatasatei[".printFields"][] = "yahoo_condition2";
$tdatasatei[".printFields"][] = "remark";
$tdatasatei[".printFields"][] = "yahoo_fuzokuhin";
$tdatasatei[".printFields"][] = "yahoo_sankou_uwadai";
$tdatasatei[".printFields"][] = "season";
$tdatasatei[".printFields"][] = "yahoo_title";
$tdatasatei[".printFields"][] = "goods_title";
$tdatasatei[".printFields"][] = "raku_title";
$tdatasatei[".printFields"][] = "raku_tag_result";
$tdatasatei[".printFields"][] = "search_keyword";
$tdatasatei[".printFields"][] = "stamp";
$tdatasatei[".printFields"][] = "processing";
$tdatasatei[".printFields"][] = "Sleeve_Length";
$tdatasatei[".printFields"][] = "length";
$tdatasatei[".printFields"][] = "label_output_flag";
$tdatasatei[".printFields"][] = "Ring_size";
$tdatasatei[".printFields"][] = "comment";
$tdatasatei[".printFields"][] = "satei_hi";
$tdatasatei[".printFields"][] = "gold_property";
$tdatasatei[".printFields"][] = "ichiba_title";
$tdatasatei[".printFields"][] = "Gram";
$tdatasatei[".printFields"][] = "Parent_stone";
$tdatasatei[".printFields"][] = "Aside_stone";
$tdatasatei[".printFields"][] = "Appraiser";
$tdatasatei[".printFields"][] = "Remarks";
$tdatasatei[".printFields"][] = "Destination_selling";
$tdatasatei[".printFields"][] = "Finish";
$tdatasatei[".printFields"][] = "Discrimination";
$tdatasatei[".printFields"][] = "accessories";
$tdatasatei[".printFields"][] = "priority";
$tdatasatei[".printFields"][] = "A_storage";
$tdatasatei[".printFields"][] = "price_per_gram";
$tdatasatei[".printFields"][] = "price_per_parent_stone";
$tdatasatei[".printFields"][] = "price_per_aside_stone";
$tdatasatei[".printFields"][] = "price_secret";
$tdatasatei[".printFields"][] = "sales_price_secret";
$tdatasatei[".printFields"][] = "line";
$tdatasatei[".printFields"][] = "item_name";
$tdatasatei[".printFields"][] = "handle";
$tdatasatei[".printFields"][] = "serial_number";
$tdatasatei[".printFields"][] = "motif";
$tdatasatei[".printFields"][] = "Setting";

//	product_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "product_id";
	$fdata["GoodName"] = "product_id";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","product_id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

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




	$tdatasatei["product_id"] = $fdata;
//	category_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "category_id";
	$fdata["GoodName"] = "category_id";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","category_id");
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
				//dependent dropdowns
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "zipper";

	
	
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




	$tdatasatei["category_id"] = $fdata;
//	goods_title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "goods_title";
	$fdata["GoodName"] = "goods_title";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","goods_title");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

	
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




	$tdatasatei["goods_title"] = $fdata;
//	title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "title";
	$fdata["GoodName"] = "title";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","title");
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




	$tdatasatei["title"] = $fdata;
//	sub_category_id1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "sub_category_id1";
	$fdata["GoodName"] = "sub_category_id1";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","sub_category_id1");
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




	$tdatasatei["sub_category_id1"] = $fdata;
//	ecc_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "ecc_id";
	$fdata["GoodName"] = "ecc_id";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","ecc_id");
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








	$tdatasatei["ecc_id"] = $fdata;
//	price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "price";
	$fdata["GoodName"] = "price";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","price");
	$fdata["FieldType"] = 5;

	
	
	
			
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




	$tdatasatei["price"] = $fdata;
//	yahoo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "yahoo";
	$fdata["GoodName"] = "yahoo";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","yahoo");
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








	$tdatasatei["yahoo"] = $fdata;
//	remark
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "remark";
	$fdata["GoodName"] = "remark";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","remark");
	$fdata["FieldType"] = 201;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

	
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




	$tdatasatei["remark"] = $fdata;
//	sales_price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "sales_price";
	$fdata["GoodName"] = "sales_price";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","sales_price");
	$fdata["FieldType"] = 5;

	
	
	
			
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




	$tdatasatei["sales_price"] = $fdata;
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","description");
	$fdata["FieldType"] = 201;

	
	
	
			
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




	$tdatasatei["description"] = $fdata;
//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","status");
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




	$tdatasatei["status"] = $fdata;
//	product_num
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "product_num";
	$fdata["GoodName"] = "product_num";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","product_num");
	$fdata["FieldType"] = 200;

	
	
	
			
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
	$edata["DependentLookups"][] = "zipper";
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




	$tdatasatei["product_num"] = $fdata;
//	yahoo_size
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "yahoo_size";
	$fdata["GoodName"] = "yahoo_size";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","yahoo_size");
	$fdata["FieldType"] = 201;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

	
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




	$tdatasatei["yahoo_size"] = $fdata;
//	yahoo_title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "yahoo_title";
	$fdata["GoodName"] = "yahoo_title";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","yahoo_title");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

	
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




	$tdatasatei["yahoo_title"] = $fdata;
//	yahoo_sankou_uwadai
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "yahoo_sankou_uwadai";
	$fdata["GoodName"] = "yahoo_sankou_uwadai";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","yahoo_sankou_uwadai");
	$fdata["FieldType"] = 200;

	
	
	
			
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




	$tdatasatei["yahoo_sankou_uwadai"] = $fdata;
//	yahoo_sozai
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "yahoo_sozai";
	$fdata["GoodName"] = "yahoo_sozai";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","yahoo_sozai");
	$fdata["FieldType"] = 201;

	
	
	
			
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




	$tdatasatei["yahoo_sozai"] = $fdata;
//	yahoo_color
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "yahoo_color";
	$fdata["GoodName"] = "yahoo_color";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","yahoo_color");
	$fdata["FieldType"] = 201;

	
	
	
			
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

		$fdata["strField"] = "yahoo_color";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`yahoo_color`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatasatei["yahoo_color"] = $fdata;
//	yahoo_kataban
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "yahoo_kataban";
	$fdata["GoodName"] = "yahoo_kataban";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","yahoo_kataban");
	$fdata["FieldType"] = 200;

	
	
	
			
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




	$tdatasatei["yahoo_kataban"] = $fdata;
//	yahoo_condition1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "yahoo_condition1";
	$fdata["GoodName"] = "yahoo_condition1";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","yahoo_condition1");
	$fdata["FieldType"] = 201;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

	
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




	$tdatasatei["yahoo_condition1"] = $fdata;
//	yahoo_condition2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "yahoo_condition2";
	$fdata["GoodName"] = "yahoo_condition2";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","yahoo_condition2");
	$fdata["FieldType"] = 201;

	
	
	
			
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




	$tdatasatei["yahoo_condition2"] = $fdata;
//	yahoo_fuzokuhin
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "yahoo_fuzokuhin";
	$fdata["GoodName"] = "yahoo_fuzokuhin";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","yahoo_fuzokuhin");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

	
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




	$tdatasatei["yahoo_fuzokuhin"] = $fdata;
//	yahoo_sinaban
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "yahoo_sinaban";
	$fdata["GoodName"] = "yahoo_sinaban";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","yahoo_sinaban");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

	
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




	$tdatasatei["yahoo_sinaban"] = $fdata;
//	yahoo_saisun_sha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "yahoo_saisun_sha";
	$fdata["GoodName"] = "yahoo_saisun_sha";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","yahoo_saisun_sha");
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








	$tdatasatei["yahoo_saisun_sha"] = $fdata;
//	yahoo_sex
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "yahoo_sex";
	$fdata["GoodName"] = "yahoo_sex";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","yahoo_sex");
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




	$tdatasatei["yahoo_sex"] = $fdata;
//	box_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "box_id";
	$fdata["GoodName"] = "box_id";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","box_id");
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








	$tdatasatei["box_id"] = $fdata;
//	nyuukin_price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "nyuukin_price";
	$fdata["GoodName"] = "nyuukin_price";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","nyuukin_price");
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








	$tdatasatei["nyuukin_price"] = $fdata;
//	updated_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "updated_by";
	$fdata["GoodName"] = "updated_by";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","updated_by");
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








	$tdatasatei["updated_by"] = $fdata;
//	raku_title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "raku_title";
	$fdata["GoodName"] = "raku_title";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","raku_title");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

	
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




	$tdatasatei["raku_title"] = $fdata;
//	raku_hyoujisaki_category2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "raku_hyoujisaki_category2";
	$fdata["GoodName"] = "raku_hyoujisaki_category2";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","raku_hyoujisaki_category2");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

	
		$fdata["strField"] = "raku_hyoujisaki_category2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`raku_hyoujisaki_category2`";

	
	
				$fdata["FieldPermissions"] = true;

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

	
	
	
				$edata["nRows"] = 50;
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




	$tdatasatei["raku_hyoujisaki_category2"] = $fdata;
//	raku_hyoujisaki_category
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "raku_hyoujisaki_category";
	$fdata["GoodName"] = "raku_hyoujisaki_category";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","raku_hyoujisaki_category");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

	
		$fdata["strField"] = "raku_hyoujisaki_category";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`raku_hyoujisaki_category`";

	
	
				$fdata["FieldPermissions"] = true;

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

	
	
	
				$edata["nRows"] = 50;
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




	$tdatasatei["raku_hyoujisaki_category"] = $fdata;
//	raku_hyoujisaki_category3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "raku_hyoujisaki_category3";
	$fdata["GoodName"] = "raku_hyoujisaki_category3";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","raku_hyoujisaki_category3");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

	
		$fdata["strField"] = "raku_hyoujisaki_category3";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`raku_hyoujisaki_category3`";

	
	
				$fdata["FieldPermissions"] = true;

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

	
	
	
				$edata["nRows"] = 50;
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




	$tdatasatei["raku_hyoujisaki_category3"] = $fdata;
//	timesta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "timesta";
	$fdata["GoodName"] = "timesta";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","timesta");
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








	$tdatasatei["timesta"] = $fdata;
//	saisun_start
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "saisun_start";
	$fdata["GoodName"] = "saisun_start";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","saisun_start");
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








	$tdatasatei["saisun_start"] = $fdata;
//	saisun_end
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "saisun_end";
	$fdata["GoodName"] = "saisun_end";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","saisun_end");
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








	$tdatasatei["saisun_end"] = $fdata;
//	label_output_flag
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "label_output_flag";
	$fdata["GoodName"] = "label_output_flag";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","label_output_flag");
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




	$tdatasatei["label_output_flag"] = $fdata;
//	season
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "season";
	$fdata["GoodName"] = "season";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","season");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

	
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




	$tdatasatei["season"] = $fdata;
//	kanryou_henbi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "kanryou_henbi";
	$fdata["GoodName"] = "kanryou_henbi";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","kanryou_henbi");
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








	$tdatasatei["kanryou_henbi"] = $fdata;
//	box_sort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "box_sort";
	$fdata["GoodName"] = "box_sort";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","box_sort");
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








	$tdatasatei["box_sort"] = $fdata;
//	satei_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "satei_by";
	$fdata["GoodName"] = "satei_by";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","satei_by");
	$fdata["FieldType"] = 200;

	
	
	
			
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




	$tdatasatei["satei_by"] = $fdata;
//	kaitori_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "kaitori_by";
	$fdata["GoodName"] = "kaitori_by";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","kaitori_by");
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








	$tdatasatei["kaitori_by"] = $fdata;
//	comment
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "comment";
	$fdata["GoodName"] = "comment";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","comment");
	$fdata["FieldType"] = 201;

	
	
	
			
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




	$tdatasatei["comment"] = $fdata;
//	satei_hi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "satei_hi";
	$fdata["GoodName"] = "satei_hi";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","satei_hi");
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




	$tdatasatei["satei_hi"] = $fdata;
//	kaitory_hi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "kaitory_hi";
	$fdata["GoodName"] = "kaitory_hi";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","kaitory_hi");
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








	$tdatasatei["kaitory_hi"] = $fdata;
//	REG_PHOTOGRAPHER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "REG_PHOTOGRAPHER";
	$fdata["GoodName"] = "REG_PHOTOGRAPHER";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","REG_PHOTOGRAPHER");
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








	$tdatasatei["REG_PHOTOGRAPHER"] = $fdata;
//	REG_PACKINGS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "REG_PACKINGS";
	$fdata["GoodName"] = "REG_PACKINGS";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","REG_PACKINGS");
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








	$tdatasatei["REG_PACKINGS"] = $fdata;
//	REG_KAKOU_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 47;
	$fdata["strName"] = "REG_KAKOU_DATE";
	$fdata["GoodName"] = "REG_KAKOU_DATE";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","REG_KAKOU_DATE");
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








	$tdatasatei["REG_KAKOU_DATE"] = $fdata;
//	REG_KAKOU
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 48;
	$fdata["strName"] = "REG_KAKOU";
	$fdata["GoodName"] = "REG_KAKOU";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","REG_KAKOU");
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








	$tdatasatei["REG_KAKOU"] = $fdata;
//	REG_EXHIBITOR
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 49;
	$fdata["strName"] = "REG_EXHIBITOR";
	$fdata["GoodName"] = "REG_EXHIBITOR";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","REG_EXHIBITOR");
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








	$tdatasatei["REG_EXHIBITOR"] = $fdata;
//	REG_PHOTOGRAPHER_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 50;
	$fdata["strName"] = "REG_PHOTOGRAPHER_DATE";
	$fdata["GoodName"] = "REG_PHOTOGRAPHER_DATE";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","REG_PHOTOGRAPHER_DATE");
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








	$tdatasatei["REG_PHOTOGRAPHER_DATE"] = $fdata;
//	DT_PACKING_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 51;
	$fdata["strName"] = "DT_PACKING_DATE";
	$fdata["GoodName"] = "DT_PACKING_DATE";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","DT_PACKING_DATE");
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








	$tdatasatei["DT_PACKING_DATE"] = $fdata;
//	DT_UP_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 52;
	$fdata["strName"] = "DT_UP_DATE";
	$fdata["GoodName"] = "DT_UP_DATE";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","DT_UP_DATE");
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








	$tdatasatei["DT_UP_DATE"] = $fdata;
//	AWAZU_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 53;
	$fdata["strName"] = "AWAZU_DATE";
	$fdata["GoodName"] = "AWAZU_DATE";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","AWAZU_DATE");
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








	$tdatasatei["AWAZU_DATE"] = $fdata;
//	AWAZU_NIN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 54;
	$fdata["strName"] = "AWAZU_NIN";
	$fdata["GoodName"] = "AWAZU_NIN";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","AWAZU_NIN");
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








	$tdatasatei["AWAZU_NIN"] = $fdata;
//	sabun_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 55;
	$fdata["strName"] = "sabun_date";
	$fdata["GoodName"] = "sabun_date";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","sabun_date");
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








	$tdatasatei["sabun_date"] = $fdata;
//	browseid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 56;
	$fdata["strName"] = "browseid";
	$fdata["GoodName"] = "browseid";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","browseid");
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








	$tdatasatei["browseid"] = $fdata;
//	browsenode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 57;
	$fdata["strName"] = "browsenode";
	$fdata["GoodName"] = "browsenode";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","browsenode");
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








	$tdatasatei["browsenode"] = $fdata;
//	gold_property
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 58;
	$fdata["strName"] = "gold_property";
	$fdata["GoodName"] = "gold_property";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","gold_property");
	$fdata["FieldType"] = 200;

	
	
	
			
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




	$tdatasatei["gold_property"] = $fdata;
//	ichiba_title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 59;
	$fdata["strName"] = "ichiba_title";
	$fdata["GoodName"] = "ichiba_title";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","ichiba_title");
	$fdata["FieldType"] = 200;

	
	
	
			
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




	$tdatasatei["ichiba_title"] = $fdata;
//	Gram
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 60;
	$fdata["strName"] = "Gram";
	$fdata["GoodName"] = "Gram";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","Gram");
	$fdata["FieldType"] = 200;

	
	
	
			
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




	$tdatasatei["Gram"] = $fdata;
//	Parent_stone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 61;
	$fdata["strName"] = "Parent_stone";
	$fdata["GoodName"] = "Parent_stone";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","Parent_stone");
	$fdata["FieldType"] = 200;

	
	
	
			
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




	$tdatasatei["Parent_stone"] = $fdata;
//	Aside_stone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 62;
	$fdata["strName"] = "Aside_stone";
	$fdata["GoodName"] = "Aside_stone";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","Aside_stone");
	$fdata["FieldType"] = 200;

	
	
	
			
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




	$tdatasatei["Aside_stone"] = $fdata;
//	Appraiser
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 63;
	$fdata["strName"] = "Appraiser";
	$fdata["GoodName"] = "Appraiser";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","Appraiser");
	$fdata["FieldType"] = 200;

	
	
	
			
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




	$tdatasatei["Appraiser"] = $fdata;
//	Remarks
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 64;
	$fdata["strName"] = "Remarks";
	$fdata["GoodName"] = "Remarks";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","Remarks");
	$fdata["FieldType"] = 200;

	
	
	
			
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




	$tdatasatei["Remarks"] = $fdata;
//	Destination_selling
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 65;
	$fdata["strName"] = "Destination_selling";
	$fdata["GoodName"] = "Destination_selling";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","Destination_selling");
	$fdata["FieldType"] = 200;

	
	
	
			
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




	$tdatasatei["Destination_selling"] = $fdata;
//	Finish
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 66;
	$fdata["strName"] = "Finish";
	$fdata["GoodName"] = "Finish";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","Finish");
	$fdata["FieldType"] = 200;

	
	
	
			
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




	$tdatasatei["Finish"] = $fdata;
//	Discrimination
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 67;
	$fdata["strName"] = "Discrimination";
	$fdata["GoodName"] = "Discrimination";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","Discrimination");
	$fdata["FieldType"] = 200;

	
	
	
			
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




	$tdatasatei["Discrimination"] = $fdata;
//	accessories
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 68;
	$fdata["strName"] = "accessories";
	$fdata["GoodName"] = "accessories";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","accessories");
	$fdata["FieldType"] = 200;

	
	
	
			
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




	$tdatasatei["accessories"] = $fdata;
//	priority
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 69;
	$fdata["strName"] = "priority";
	$fdata["GoodName"] = "priority";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","priority");
	$fdata["FieldType"] = 200;

	
	
	
			
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




	$tdatasatei["priority"] = $fdata;
//	A_storage
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 70;
	$fdata["strName"] = "A_storage";
	$fdata["GoodName"] = "A_storage";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","A_storage");
	$fdata["FieldType"] = 200;

	
	
	
			
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




	$tdatasatei["A_storage"] = $fdata;
//	price_per_gram
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 71;
	$fdata["strName"] = "price_per_gram";
	$fdata["GoodName"] = "price_per_gram";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","price_per_gram");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

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




	$tdatasatei["price_per_gram"] = $fdata;
//	price_per_parent_stone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 72;
	$fdata["strName"] = "price_per_parent_stone";
	$fdata["GoodName"] = "price_per_parent_stone";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","price_per_parent_stone");
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




	$tdatasatei["price_per_parent_stone"] = $fdata;
//	price_per_aside_stone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 73;
	$fdata["strName"] = "price_per_aside_stone";
	$fdata["GoodName"] = "price_per_aside_stone";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","price_per_aside_stone");
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




	$tdatasatei["price_per_aside_stone"] = $fdata;
//	price_secret
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 74;
	$fdata["strName"] = "price_secret";
	$fdata["GoodName"] = "price_secret";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","price_secret");
	$fdata["FieldType"] = 200;

	
	
	
			
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




	$tdatasatei["price_secret"] = $fdata;
//	sales_price_secret
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 75;
	$fdata["strName"] = "sales_price_secret";
	$fdata["GoodName"] = "sales_price_secret";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","sales_price_secret");
	$fdata["FieldType"] = 200;

	
	
	
			
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




	$tdatasatei["sales_price_secret"] = $fdata;
//	eq
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 76;
	$fdata["strName"] = "eq";
	$fdata["GoodName"] = "eq";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","eq");
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








	$tdatasatei["eq"] = $fdata;
//	en
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 77;
	$fdata["strName"] = "en";
	$fdata["GoodName"] = "en";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","en");
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








	$tdatasatei["en"] = $fdata;
//	line
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 78;
	$fdata["strName"] = "line";
	$fdata["GoodName"] = "line";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","line");
	$fdata["FieldType"] = 200;

	
	
	
			
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




	$tdatasatei["line"] = $fdata;
//	item_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 79;
	$fdata["strName"] = "item_name";
	$fdata["GoodName"] = "item_name";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","item_name");
	$fdata["FieldType"] = 201;

	
	
	
			
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




	$tdatasatei["item_name"] = $fdata;
//	handle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 80;
	$fdata["strName"] = "handle";
	$fdata["GoodName"] = "handle";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","handle");
	$fdata["FieldType"] = 200;

	
	
	
			
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

		$fdata["strField"] = "handle";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`handle`";

	
	
				$fdata["FieldPermissions"] = true;

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
	$edata["LookupTable"] = "mst_handle";
	$edata["LookupConnId"] = "internet_at_urlounge_co_jp";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "data";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "data";

	
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




	$tdatasatei["handle"] = $fdata;
//	yahoo_color_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 81;
	$fdata["strName"] = "yahoo_color_id";
	$fdata["GoodName"] = "yahoo_color_id";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","yahoo_color_id");
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








	$tdatasatei["yahoo_color_id"] = $fdata;
//	raku_hyoujisaki_category4
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 82;
	$fdata["strName"] = "raku_hyoujisaki_category4";
	$fdata["GoodName"] = "raku_hyoujisaki_category4";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","raku_hyoujisaki_category4");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

	
		$fdata["strField"] = "raku_hyoujisaki_category4";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`raku_hyoujisaki_category4`";

	
	
				$fdata["FieldPermissions"] = true;

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

	
	
	
				$edata["nRows"] = 50;
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




	$tdatasatei["raku_hyoujisaki_category4"] = $fdata;
//	raku_hyoujisaki_category5
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 83;
	$fdata["strName"] = "raku_hyoujisaki_category5";
	$fdata["GoodName"] = "raku_hyoujisaki_category5";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","raku_hyoujisaki_category5");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

	
		$fdata["strField"] = "raku_hyoujisaki_category5";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`raku_hyoujisaki_category5`";

	
	
				$fdata["FieldPermissions"] = true;

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

	
	
	
				$edata["nRows"] = 50;
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




	$tdatasatei["raku_hyoujisaki_category5"] = $fdata;
//	raku_dir_1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 84;
	$fdata["strName"] = "raku_dir_1";
	$fdata["GoodName"] = "raku_dir_1";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","raku_dir_1");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "raku_dir_1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`raku_dir_1`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatasatei["raku_dir_1"] = $fdata;
//	raku_dir_2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 85;
	$fdata["strName"] = "raku_dir_2";
	$fdata["GoodName"] = "raku_dir_2";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","raku_dir_2");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "raku_dir_2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`raku_dir_2`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatasatei["raku_dir_2"] = $fdata;
//	raku_dir_3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 86;
	$fdata["strName"] = "raku_dir_3";
	$fdata["GoodName"] = "raku_dir_3";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","raku_dir_3");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "raku_dir_3";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`raku_dir_3`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatasatei["raku_dir_3"] = $fdata;
//	raku_dir_4
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 87;
	$fdata["strName"] = "raku_dir_4";
	$fdata["GoodName"] = "raku_dir_4";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","raku_dir_4");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "raku_dir_4";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`raku_dir_4`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatasatei["raku_dir_4"] = $fdata;
//	raku_dir_5
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 88;
	$fdata["strName"] = "raku_dir_5";
	$fdata["GoodName"] = "raku_dir_5";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","raku_dir_5");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "raku_dir_5";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`raku_dir_5`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatasatei["raku_dir_5"] = $fdata;
//	raku_dir_result
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 89;
	$fdata["strName"] = "raku_dir_result";
	$fdata["GoodName"] = "raku_dir_result";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","raku_dir_result");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "raku_dir_result";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`raku_dir_result`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatasatei["raku_dir_result"] = $fdata;
//	raku_tag_result
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 90;
	$fdata["strName"] = "raku_tag_result";
	$fdata["GoodName"] = "raku_tag_result";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","raku_tag_result");
	$fdata["FieldType"] = 201;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

	
		$fdata["strField"] = "raku_tag_result";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`raku_tag_result`";

	
	
				$fdata["FieldPermissions"] = true;

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

	
	
	
				$edata["nRows"] = 50;
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




	$tdatasatei["raku_tag_result"] = $fdata;
//	serial_number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 91;
	$fdata["strName"] = "serial_number";
	$fdata["GoodName"] = "serial_number";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","serial_number");
	$fdata["FieldType"] = 200;

	
	
	
			
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




	$tdatasatei["serial_number"] = $fdata;
//	Exhibition_Date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 92;
	$fdata["strName"] = "Exhibition_Date";
	$fdata["GoodName"] = "Exhibition_Date";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","Exhibition_Date");
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








	$tdatasatei["Exhibition_Date"] = $fdata;
//	search_keyword
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 93;
	$fdata["strName"] = "search_keyword";
	$fdata["GoodName"] = "search_keyword";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","search_keyword");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

	
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




	$tdatasatei["search_keyword"] = $fdata;
//	stamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 94;
	$fdata["strName"] = "stamp";
	$fdata["GoodName"] = "stamp";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","stamp");
	$fdata["FieldType"] = 200;

	
	
	
			
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




	$tdatasatei["stamp"] = $fdata;
//	motif
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 95;
	$fdata["strName"] = "motif";
	$fdata["GoodName"] = "motif";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","motif");
	$fdata["FieldType"] = 200;

	
	
	
			
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




	$tdatasatei["motif"] = $fdata;
//	Setting
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 96;
	$fdata["strName"] = "Setting";
	$fdata["GoodName"] = "Setting";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","Setting");
	$fdata["FieldType"] = 200;

	
	
	
			
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




	$tdatasatei["Setting"] = $fdata;
//	processing
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 97;
	$fdata["strName"] = "processing";
	$fdata["GoodName"] = "processing";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","processing");
	$fdata["FieldType"] = 200;

	
	
	
			
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




	$tdatasatei["processing"] = $fdata;
//	Sleeve_Length
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 98;
	$fdata["strName"] = "Sleeve_Length";
	$fdata["GoodName"] = "Sleeve_Length";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","Sleeve_Length");
	$fdata["FieldType"] = 200;

	
	
	
			
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

		$fdata["strField"] = "Sleeve_Length";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`Sleeve_Length`";

	
	
				$fdata["FieldPermissions"] = true;

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
	$edata["LookupTable"] = "mst_Sleeve_Length";
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




	$tdatasatei["Sleeve_Length"] = $fdata;
//	length
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 99;
	$fdata["strName"] = "length";
	$fdata["GoodName"] = "length";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","length");
	$fdata["FieldType"] = 200;

	
	
	
			
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

		$fdata["strField"] = "length";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`length`";

	
	
				$fdata["FieldPermissions"] = true;

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
	$edata["LookupTable"] = "mst_length";
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




	$tdatasatei["length"] = $fdata;
//	Ring_size
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 100;
	$fdata["strName"] = "Ring_size";
	$fdata["GoodName"] = "Ring_size";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","Ring_size");
	$fdata["FieldType"] = 200;

	
	
	
			
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




	$tdatasatei["Ring_size"] = $fdata;
//	price_for_site
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 101;
	$fdata["strName"] = "price_for_site";
	$fdata["GoodName"] = "price_for_site";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","price_for_site");
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








	$tdatasatei["price_for_site"] = $fdata;
//	yahoo_category_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 102;
	$fdata["strName"] = "yahoo_category_id";
	$fdata["GoodName"] = "yahoo_category_id";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","yahoo_category_id");
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








	$tdatasatei["yahoo_category_id"] = $fdata;
//	Qty
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 103;
	$fdata["strName"] = "Qty";
	$fdata["GoodName"] = "Qty";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","Qty");
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








	$tdatasatei["Qty"] = $fdata;
//	sales_period
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 104;
	$fdata["strName"] = "sales_period";
	$fdata["GoodName"] = "sales_period";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","sales_period");
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








	$tdatasatei["sales_period"] = $fdata;
//	starting_price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 105;
	$fdata["strName"] = "starting_price";
	$fdata["GoodName"] = "starting_price";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","starting_price");
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








	$tdatasatei["starting_price"] = $fdata;
//	ecc_seq
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 106;
	$fdata["strName"] = "ecc_seq";
	$fdata["GoodName"] = "ecc_seq";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("satei","ecc_seq");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

	
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




	$tdatasatei["ecc_seq"] = $fdata;
//	yahoo_junle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 107;
	$fdata["strName"] = "yahoo_junle";
	$fdata["GoodName"] = "yahoo_junle";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","yahoo_junle");
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








	$tdatasatei["yahoo_junle"] = $fdata;
//	logo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 108;
	$fdata["strName"] = "logo";
	$fdata["GoodName"] = "logo";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","logo");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

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




	$tdatasatei["logo"] = $fdata;
//	parts
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 109;
	$fdata["strName"] = "parts";
	$fdata["GoodName"] = "parts";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","parts");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

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




	$tdatasatei["parts"] = $fdata;
//	country_of_origin
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 110;
	$fdata["strName"] = "country_of_origin";
	$fdata["GoodName"] = "country_of_origin";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","country_of_origin");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

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




	$tdatasatei["country_of_origin"] = $fdata;
//	zipper
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 111;
	$fdata["strName"] = "zipper";
	$fdata["GoodName"] = "zipper";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","zipper");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "zipper";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`zipper`";

	
	
				$fdata["FieldPermissions"] = true;

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
	$edata["LookupTable"] = "mst_zipper";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "english_name";

	
	$edata["LookupOrderBy"] = "id";

		$edata["LookupDesc"] = true;

		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "product_num", "lookup" => "yahoo_junle" );
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatasatei["zipper"] = $fdata;
//	guarantee
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 112;
	$fdata["strName"] = "guarantee";
	$fdata["GoodName"] = "guarantee";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","guarantee");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

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




	$tdatasatei["guarantee"] = $fdata;
//	errors
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 113;
	$fdata["strName"] = "errors";
	$fdata["GoodName"] = "errors";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","errors");
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




	$tdatasatei["errors"] = $fdata;
//	designer
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 114;
	$fdata["strName"] = "designer";
	$fdata["GoodName"] = "designer";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","designer");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

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




	$tdatasatei["designer"] = $fdata;
//	hahakai
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 115;
	$fdata["strName"] = "hahakai";
	$fdata["GoodName"] = "hahakai";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","hahakai");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

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




	$tdatasatei["hahakai"] = $fdata;
//	effect
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 116;
	$fdata["strName"] = "effect";
	$fdata["GoodName"] = "effect";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","effect");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

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




	$tdatasatei["effect"] = $fdata;
//	shape
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 117;
	$fdata["strName"] = "shape";
	$fdata["GoodName"] = "shape";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","shape");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

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




	$tdatasatei["shape"] = $fdata;
//	cutting_style
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 118;
	$fdata["strName"] = "cutting_style";
	$fdata["GoodName"] = "cutting_style";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","cutting_style");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

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




	$tdatasatei["cutting_style"] = $fdata;
//	chain_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 119;
	$fdata["strName"] = "chain_type";
	$fdata["GoodName"] = "chain_type";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","chain_type");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

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




	$tdatasatei["chain_type"] = $fdata;
//	number_of_stones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 120;
	$fdata["strName"] = "number_of_stones";
	$fdata["GoodName"] = "number_of_stones";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","number_of_stones");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

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




	$tdatasatei["number_of_stones"] = $fdata;
//	amount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 121;
	$fdata["strName"] = "amount";
	$fdata["GoodName"] = "amount";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","amount");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "amount";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`amount`";

	
	
				$fdata["FieldPermissions"] = true;

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
	$edata["LookupTable"] = "mst_amount";
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




	$tdatasatei["amount"] = $fdata;
//	satei_error
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 122;
	$fdata["strName"] = "satei_error";
	$fdata["GoodName"] = "satei_error";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","satei_error");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

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




	$tdatasatei["satei_error"] = $fdata;
//	producing_area
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 123;
	$fdata["strName"] = "producing_area";
	$fdata["GoodName"] = "producing_area";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","producing_area");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

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




	$tdatasatei["producing_area"] = $fdata;
//	shape_supplement
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 124;
	$fdata["strName"] = "shape_supplement";
	$fdata["GoodName"] = "shape_supplement";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","shape_supplement");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

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




	$tdatasatei["shape_supplement"] = $fdata;
//	side_gem
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 125;
	$fdata["strName"] = "side_gem";
	$fdata["GoodName"] = "side_gem";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","side_gem");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

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




	$tdatasatei["side_gem"] = $fdata;
//	product_style
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 126;
	$fdata["strName"] = "product_style";
	$fdata["GoodName"] = "product_style";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","product_style");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

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




	$tdatasatei["product_style"] = $fdata;
//	collar_neck_line
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 127;
	$fdata["strName"] = "collar_neck_line";
	$fdata["GoodName"] = "collar_neck_line";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","collar_neck_line");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "collar_neck_line";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`collar_neck_line`";

	
	
				$fdata["FieldPermissions"] = true;

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
	$edata["LookupTable"] = "mst_collar_neck_line";
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




	$tdatasatei["collar_neck_line"] = $fdata;
//	breast
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 128;
	$fdata["strName"] = "breast";
	$fdata["GoodName"] = "breast";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","breast");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "breast";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`breast`";

	
	
				$fdata["FieldPermissions"] = true;

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
	$edata["LookupTable"] = "mst_breast";
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




	$tdatasatei["breast"] = $fdata;
//	silhouette
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 129;
	$fdata["strName"] = "silhouette";
	$fdata["GoodName"] = "silhouette";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","silhouette");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "silhouette";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`silhouette`";

	
	
				$fdata["FieldPermissions"] = true;

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
	$edata["LookupTable"] = "mst_silhouette";
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




	$tdatasatei["silhouette"] = $fdata;
//	sleeve
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 130;
	$fdata["strName"] = "sleeve";
	$fdata["GoodName"] = "sleeve";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","sleeve");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "sleeve";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`sleeve`";

	
	
				$fdata["FieldPermissions"] = true;

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
	$edata["LookupTable"] = "mst_sleeve";
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




	$tdatasatei["sleeve"] = $fdata;
//	unit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 131;
	$fdata["strName"] = "unit";
	$fdata["GoodName"] = "unit";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","unit");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

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




	$tdatasatei["unit"] = $fdata;
//	hall_mark
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 132;
	$fdata["strName"] = "hall_mark";
	$fdata["GoodName"] = "hall_mark";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","hall_mark");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

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




	$tdatasatei["hall_mark"] = $fdata;
//	plate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 133;
	$fdata["strName"] = "plate";
	$fdata["GoodName"] = "plate";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","plate");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

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




	$tdatasatei["plate"] = $fdata;
//	toe
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 134;
	$fdata["strName"] = "toe";
	$fdata["GoodName"] = "toe";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","toe");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "toe";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`toe`";

	
	
				$fdata["FieldPermissions"] = true;

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
	$edata["LookupTable"] = "mst_toe";
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




	$tdatasatei["toe"] = $fdata;
//	heel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 135;
	$fdata["strName"] = "heel";
	$fdata["GoodName"] = "heel";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","heel");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "heel";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`heel`";

	
	
				$fdata["FieldPermissions"] = true;

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
	$edata["LookupTable"] = "mst_heel";
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




	$tdatasatei["heel"] = $fdata;
//	cloth
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 136;
	$fdata["strName"] = "cloth";
	$fdata["GoodName"] = "cloth";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","cloth");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "cloth";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`cloth`";

	
	
				$fdata["FieldPermissions"] = true;

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
	$edata["LookupTable"] = "mst_cloth";
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




	$tdatasatei["cloth"] = $fdata;
//	official_url
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 137;
	$fdata["strName"] = "official_url";
	$fdata["GoodName"] = "official_url";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","official_url");
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








	$tdatasatei["official_url"] = $fdata;
//	Eoc_takuhai_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 138;
	$fdata["strName"] = "Eoc_takuhai_id";
	$fdata["GoodName"] = "Eoc_takuhai_id";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","Eoc_takuhai_id");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "Eoc_takuhai_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`Eoc_takuhai_id`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatasatei["Eoc_takuhai_id"] = $fdata;
//	Eoc_unfinished_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 139;
	$fdata["strName"] = "Eoc_unfinished_id";
	$fdata["GoodName"] = "Eoc_unfinished_id";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei","Eoc_unfinished_id");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "Eoc_unfinished_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`Eoc_unfinished_id`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatasatei["Eoc_unfinished_id"] = $fdata;


$tables_data["satei"]=&$tdatasatei;
$field_labels["satei"] = &$fieldLabelssatei;
$fieldToolTips["satei"] = &$fieldToolTipssatei;
$placeHolders["satei"] = &$placeHolderssatei;
$page_titles["satei"] = &$pageTitlessatei;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["satei"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["satei"] = array();


	
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
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 1;
	$masterParams["proceedLink"]= 1;

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["satei"][0] = $masterParams;
				$masterTablesData["satei"][0]["masterKeys"] = array();
	$masterTablesData["satei"][0]["masterKeys"][]="ecc_id";
				$masterTablesData["satei"][0]["detailKeys"] = array();
	$masterTablesData["satei"][0]["detailKeys"][]="ecc_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_satei()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`shouhin`.`product_id`,  `shouhin`.`category_id`,  `shouhin`.`goods_title`,  `shouhin`.`title`,  `shouhin`.`sub_category_id1`,  `shouhin`.`ecc_id`,  `shouhin`.`price`,  `shouhin`.`yahoo`,  `shouhin`.`remark`,  `shouhin`.`sales_price`,  `shouhin`.`description`,  `shouhin`.`status`,  `shouhin`.`product_num`,  `shouhin`.`yahoo_size`,  `shouhin`.`yahoo_title`,  `shouhin`.`yahoo_sankou_uwadai`,  `shouhin`.`yahoo_sozai`,  `shouhin`.`yahoo_color`,  `shouhin`.`yahoo_kataban`,  `shouhin`.`yahoo_condition1`,  `shouhin`.`yahoo_condition2`,  `shouhin`.`yahoo_fuzokuhin`,  `shouhin`.`yahoo_sinaban`,  `shouhin`.`yahoo_saisun_sha`,  `shouhin`.`yahoo_sex`,  `shouhin`.`box_id`,  `shouhin`.`nyuukin_price`,  `shouhin`.`updated_by`,  `shouhin`.`raku_title`,  `shouhin`.`raku_hyoujisaki_category2`,  `shouhin`.`raku_hyoujisaki_category`,  `shouhin`.`raku_hyoujisaki_category3`,  `shouhin`.`timesta`,  `shouhin`.`saisun_start`,  `shouhin`.`saisun_end`,  `shouhin`.`label_output_flag`,  `shouhin`.`season`,  `shouhin`.`kanryou_henbi`,  `shouhin`.`box_sort`,  `shouhin`.`satei_by`,  `shouhin`.`kaitori_by`,  `shouhin`.`comment`,  `shouhin`.`satei_hi`,  `shouhin`.`kaitory_hi`,  `shouhin`.`REG_PHOTOGRAPHER`,  `shouhin`.`REG_PACKINGS`,  `shouhin`.`REG_KAKOU_DATE`,  `shouhin`.`REG_KAKOU`,  `shouhin`.`REG_EXHIBITOR`,  `shouhin`.`REG_PHOTOGRAPHER_DATE`,  `shouhin`.`DT_PACKING_DATE`,  `shouhin`.`DT_UP_DATE`,  `shouhin`.`AWAZU_DATE`,  `shouhin`.`AWAZU_NIN`,  `shouhin`.`sabun_date`,  `shouhin`.`browseid`,  `shouhin`.`browsenode`,  `shouhin`.`gold_property`,  `shouhin`.`ichiba_title`,  `shouhin`.`Gram`,  `shouhin`.`Parent_stone`,  `shouhin`.`Aside_stone`,  `shouhin`.`Appraiser`,  `shouhin`.`Remarks`,  `shouhin`.`Destination_selling`,  `shouhin`.`Finish`,  `shouhin`.`Discrimination`,  `shouhin`.`accessories`,  `shouhin`.`priority`,  `shouhin`.`A_storage`,  `shouhin`.`price_per_gram`,  `shouhin`.`price_per_parent_stone`,  `shouhin`.`price_per_aside_stone`,  `shouhin`.`price_secret`,  `shouhin`.`sales_price_secret`,  `shouhin`.`eq`,  `shouhin`.`en`,  `shouhin`.`line`,  `shouhin`.`item_name`,  `shouhin`.`handle`,  `shouhin`.`yahoo_color_id`,  `shouhin`.`raku_hyoujisaki_category4`,  `shouhin`.`raku_hyoujisaki_category5`,  `shouhin`.`raku_dir_1`,  `shouhin`.`raku_dir_2`,  `shouhin`.`raku_dir_3`,  `shouhin`.`raku_dir_4`,  `shouhin`.`raku_dir_5`,  `shouhin`.`raku_dir_result`,  `shouhin`.`raku_tag_result`,  `shouhin`.`serial_number`,  `shouhin`.`Exhibition_Date`,  `shouhin`.`search_keyword`,  `shouhin`.`stamp`,  `shouhin`.`motif`,  `shouhin`.`Setting`,  `shouhin`.`processing`,  `shouhin`.`Sleeve_Length`,  `shouhin`.`length`,  `shouhin`.`Ring_size`,  `shouhin`.`price_for_site`,  `shouhin`.`yahoo_category_id`,  `shouhin`.`Qty`,  `shouhin`.`sales_period`,  `shouhin`.`starting_price`,  `Eoc`.`ecc_seq`,  `shouhin`.`yahoo_junle`,  `shouhin`.`logo`,  `shouhin`.`parts`,  `shouhin`.`country_of_origin`,  `shouhin`.`zipper`,  `shouhin`.`guarantee`,  `shouhin`.`errors`,  `shouhin`.`designer`,  `shouhin`.`hahakai`,  `shouhin`.`effect`,  `shouhin`.`shape`,  `shouhin`.`cutting_style`,  `shouhin`.`chain_type`,  `shouhin`.`number_of_stones`,  `shouhin`.`amount`,  `shouhin`.`satei_error`,  `shouhin`.`producing_area`,  `shouhin`.`shape_supplement`,  `shouhin`.`side_gem`,  `shouhin`.`product_style`,  `shouhin`.`collar_neck_line`,  `shouhin`.`breast`,  `shouhin`.`silhouette`,  `shouhin`.`sleeve`,  `shouhin`.`unit`,  `shouhin`.`hall_mark`,  `shouhin`.`plate`,  `shouhin`.`toe`,  `shouhin`.`heel`,  `shouhin`.`cloth`,  `shouhin`.`official_url`,  `shouhin`.`Eoc_takuhai_id`,  `shouhin`.`Eoc_unfinished_id`";
$proto0["m_strFrom"] = "FROM `shouhin`  LEFT OUTER JOIN `Eoc` ON `shouhin`.`ecc_id` = `Eoc`.`ecc_id`";
$proto0["m_strWhere"] = "(`shouhin`.`status` =32 OR `shouhin`.`status` =34)";
$proto0["m_strOrderBy"] = "ORDER BY `shouhin`.`product_id` DESC";
$proto0["m_strTail"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "`shouhin`.`status` =32 OR `shouhin`.`status` =34";
$proto2["m_uniontype"] = "SQLL_OR";
	$obj = new SQLNonParsed(array(
	"m_sql" => "`shouhin`.`status` =32 OR `shouhin`.`status` =34"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
						$proto4=array();
$proto4["m_sql"] = "`shouhin`.`status` =32";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "=32";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

			$proto2["m_contained"][]=$obj;
						$proto6=array();
$proto6["m_sql"] = "`shouhin`.`status` =34";
$proto6["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto6["m_column"]=$obj;
$proto6["m_contained"] = array();
$proto6["m_strCase"] = "=34";
$proto6["m_havingmode"] = false;
$proto6["m_inBrackets"] = false;
$proto6["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto6);

			$proto2["m_contained"][]=$obj;
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto8=array();
$proto8["m_sql"] = "";
$proto8["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto8["m_column"]=$obj;
$proto8["m_contained"] = array();
$proto8["m_strCase"] = "";
$proto8["m_havingmode"] = false;
$proto8["m_inBrackets"] = false;
$proto8["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto8);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "product_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto10["m_sql"] = "`shouhin`.`product_id`";
$proto10["m_srcTableName"] = "satei";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "category_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto12["m_sql"] = "`shouhin`.`category_id`";
$proto12["m_srcTableName"] = "satei";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "goods_title",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto14["m_sql"] = "`shouhin`.`goods_title`";
$proto14["m_srcTableName"] = "satei";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "title",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto16["m_sql"] = "`shouhin`.`title`";
$proto16["m_srcTableName"] = "satei";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "sub_category_id1",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto18["m_sql"] = "`shouhin`.`sub_category_id1`";
$proto18["m_srcTableName"] = "satei";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "ecc_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto20["m_sql"] = "`shouhin`.`ecc_id`";
$proto20["m_srcTableName"] = "satei";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "price",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto22["m_sql"] = "`shouhin`.`price`";
$proto22["m_srcTableName"] = "satei";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto24["m_sql"] = "`shouhin`.`yahoo`";
$proto24["m_srcTableName"] = "satei";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "remark",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto26["m_sql"] = "`shouhin`.`remark`";
$proto26["m_srcTableName"] = "satei";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "sales_price",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto28["m_sql"] = "`shouhin`.`sales_price`";
$proto28["m_srcTableName"] = "satei";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto30["m_sql"] = "`shouhin`.`description`";
$proto30["m_srcTableName"] = "satei";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto32["m_sql"] = "`shouhin`.`status`";
$proto32["m_srcTableName"] = "satei";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "product_num",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto34["m_sql"] = "`shouhin`.`product_num`";
$proto34["m_srcTableName"] = "satei";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_size",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto36["m_sql"] = "`shouhin`.`yahoo_size`";
$proto36["m_srcTableName"] = "satei";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_title",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto38["m_sql"] = "`shouhin`.`yahoo_title`";
$proto38["m_srcTableName"] = "satei";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_sankou_uwadai",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto40["m_sql"] = "`shouhin`.`yahoo_sankou_uwadai`";
$proto40["m_srcTableName"] = "satei";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_sozai",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto42["m_sql"] = "`shouhin`.`yahoo_sozai`";
$proto42["m_srcTableName"] = "satei";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_color",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto44["m_sql"] = "`shouhin`.`yahoo_color`";
$proto44["m_srcTableName"] = "satei";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_kataban",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto46["m_sql"] = "`shouhin`.`yahoo_kataban`";
$proto46["m_srcTableName"] = "satei";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_condition1",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto48["m_sql"] = "`shouhin`.`yahoo_condition1`";
$proto48["m_srcTableName"] = "satei";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_condition2",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto50["m_sql"] = "`shouhin`.`yahoo_condition2`";
$proto50["m_srcTableName"] = "satei";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_fuzokuhin",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto52["m_sql"] = "`shouhin`.`yahoo_fuzokuhin`";
$proto52["m_srcTableName"] = "satei";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_sinaban",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto54["m_sql"] = "`shouhin`.`yahoo_sinaban`";
$proto54["m_srcTableName"] = "satei";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_saisun_sha",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto56["m_sql"] = "`shouhin`.`yahoo_saisun_sha`";
$proto56["m_srcTableName"] = "satei";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_sex",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto58["m_sql"] = "`shouhin`.`yahoo_sex`";
$proto58["m_srcTableName"] = "satei";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "box_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto60["m_sql"] = "`shouhin`.`box_id`";
$proto60["m_srcTableName"] = "satei";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "nyuukin_price",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto62["m_sql"] = "`shouhin`.`nyuukin_price`";
$proto62["m_srcTableName"] = "satei";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto64["m_sql"] = "`shouhin`.`updated_by`";
$proto64["m_srcTableName"] = "satei";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "raku_title",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto66["m_sql"] = "`shouhin`.`raku_title`";
$proto66["m_srcTableName"] = "satei";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "raku_hyoujisaki_category2",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto68["m_sql"] = "`shouhin`.`raku_hyoujisaki_category2`";
$proto68["m_srcTableName"] = "satei";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "raku_hyoujisaki_category",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto70["m_sql"] = "`shouhin`.`raku_hyoujisaki_category`";
$proto70["m_srcTableName"] = "satei";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "raku_hyoujisaki_category3",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto72["m_sql"] = "`shouhin`.`raku_hyoujisaki_category3`";
$proto72["m_srcTableName"] = "satei";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "timesta",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto74["m_sql"] = "`shouhin`.`timesta`";
$proto74["m_srcTableName"] = "satei";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "saisun_start",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto76["m_sql"] = "`shouhin`.`saisun_start`";
$proto76["m_srcTableName"] = "satei";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "saisun_end",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto78["m_sql"] = "`shouhin`.`saisun_end`";
$proto78["m_srcTableName"] = "satei";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "label_output_flag",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto80["m_sql"] = "`shouhin`.`label_output_flag`";
$proto80["m_srcTableName"] = "satei";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "season",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto82["m_sql"] = "`shouhin`.`season`";
$proto82["m_srcTableName"] = "satei";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "kanryou_henbi",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto84["m_sql"] = "`shouhin`.`kanryou_henbi`";
$proto84["m_srcTableName"] = "satei";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "box_sort",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto86["m_sql"] = "`shouhin`.`box_sort`";
$proto86["m_srcTableName"] = "satei";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "satei_by",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto88["m_sql"] = "`shouhin`.`satei_by`";
$proto88["m_srcTableName"] = "satei";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "kaitori_by",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto90["m_sql"] = "`shouhin`.`kaitori_by`";
$proto90["m_srcTableName"] = "satei";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLField(array(
	"m_strName" => "comment",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto92["m_sql"] = "`shouhin`.`comment`";
$proto92["m_srcTableName"] = "satei";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "";
$obj = new SQLFieldListItem($proto92);

$proto0["m_fieldlist"][]=$obj;
						$proto94=array();
			$obj = new SQLField(array(
	"m_strName" => "satei_hi",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto94["m_sql"] = "`shouhin`.`satei_hi`";
$proto94["m_srcTableName"] = "satei";
$proto94["m_expr"]=$obj;
$proto94["m_alias"] = "";
$obj = new SQLFieldListItem($proto94);

$proto0["m_fieldlist"][]=$obj;
						$proto96=array();
			$obj = new SQLField(array(
	"m_strName" => "kaitory_hi",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto96["m_sql"] = "`shouhin`.`kaitory_hi`";
$proto96["m_srcTableName"] = "satei";
$proto96["m_expr"]=$obj;
$proto96["m_alias"] = "";
$obj = new SQLFieldListItem($proto96);

$proto0["m_fieldlist"][]=$obj;
						$proto98=array();
			$obj = new SQLField(array(
	"m_strName" => "REG_PHOTOGRAPHER",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto98["m_sql"] = "`shouhin`.`REG_PHOTOGRAPHER`";
$proto98["m_srcTableName"] = "satei";
$proto98["m_expr"]=$obj;
$proto98["m_alias"] = "";
$obj = new SQLFieldListItem($proto98);

$proto0["m_fieldlist"][]=$obj;
						$proto100=array();
			$obj = new SQLField(array(
	"m_strName" => "REG_PACKINGS",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto100["m_sql"] = "`shouhin`.`REG_PACKINGS`";
$proto100["m_srcTableName"] = "satei";
$proto100["m_expr"]=$obj;
$proto100["m_alias"] = "";
$obj = new SQLFieldListItem($proto100);

$proto0["m_fieldlist"][]=$obj;
						$proto102=array();
			$obj = new SQLField(array(
	"m_strName" => "REG_KAKOU_DATE",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto102["m_sql"] = "`shouhin`.`REG_KAKOU_DATE`";
$proto102["m_srcTableName"] = "satei";
$proto102["m_expr"]=$obj;
$proto102["m_alias"] = "";
$obj = new SQLFieldListItem($proto102);

$proto0["m_fieldlist"][]=$obj;
						$proto104=array();
			$obj = new SQLField(array(
	"m_strName" => "REG_KAKOU",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto104["m_sql"] = "`shouhin`.`REG_KAKOU`";
$proto104["m_srcTableName"] = "satei";
$proto104["m_expr"]=$obj;
$proto104["m_alias"] = "";
$obj = new SQLFieldListItem($proto104);

$proto0["m_fieldlist"][]=$obj;
						$proto106=array();
			$obj = new SQLField(array(
	"m_strName" => "REG_EXHIBITOR",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto106["m_sql"] = "`shouhin`.`REG_EXHIBITOR`";
$proto106["m_srcTableName"] = "satei";
$proto106["m_expr"]=$obj;
$proto106["m_alias"] = "";
$obj = new SQLFieldListItem($proto106);

$proto0["m_fieldlist"][]=$obj;
						$proto108=array();
			$obj = new SQLField(array(
	"m_strName" => "REG_PHOTOGRAPHER_DATE",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto108["m_sql"] = "`shouhin`.`REG_PHOTOGRAPHER_DATE`";
$proto108["m_srcTableName"] = "satei";
$proto108["m_expr"]=$obj;
$proto108["m_alias"] = "";
$obj = new SQLFieldListItem($proto108);

$proto0["m_fieldlist"][]=$obj;
						$proto110=array();
			$obj = new SQLField(array(
	"m_strName" => "DT_PACKING_DATE",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto110["m_sql"] = "`shouhin`.`DT_PACKING_DATE`";
$proto110["m_srcTableName"] = "satei";
$proto110["m_expr"]=$obj;
$proto110["m_alias"] = "";
$obj = new SQLFieldListItem($proto110);

$proto0["m_fieldlist"][]=$obj;
						$proto112=array();
			$obj = new SQLField(array(
	"m_strName" => "DT_UP_DATE",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto112["m_sql"] = "`shouhin`.`DT_UP_DATE`";
$proto112["m_srcTableName"] = "satei";
$proto112["m_expr"]=$obj;
$proto112["m_alias"] = "";
$obj = new SQLFieldListItem($proto112);

$proto0["m_fieldlist"][]=$obj;
						$proto114=array();
			$obj = new SQLField(array(
	"m_strName" => "AWAZU_DATE",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto114["m_sql"] = "`shouhin`.`AWAZU_DATE`";
$proto114["m_srcTableName"] = "satei";
$proto114["m_expr"]=$obj;
$proto114["m_alias"] = "";
$obj = new SQLFieldListItem($proto114);

$proto0["m_fieldlist"][]=$obj;
						$proto116=array();
			$obj = new SQLField(array(
	"m_strName" => "AWAZU_NIN",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto116["m_sql"] = "`shouhin`.`AWAZU_NIN`";
$proto116["m_srcTableName"] = "satei";
$proto116["m_expr"]=$obj;
$proto116["m_alias"] = "";
$obj = new SQLFieldListItem($proto116);

$proto0["m_fieldlist"][]=$obj;
						$proto118=array();
			$obj = new SQLField(array(
	"m_strName" => "sabun_date",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto118["m_sql"] = "`shouhin`.`sabun_date`";
$proto118["m_srcTableName"] = "satei";
$proto118["m_expr"]=$obj;
$proto118["m_alias"] = "";
$obj = new SQLFieldListItem($proto118);

$proto0["m_fieldlist"][]=$obj;
						$proto120=array();
			$obj = new SQLField(array(
	"m_strName" => "browseid",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto120["m_sql"] = "`shouhin`.`browseid`";
$proto120["m_srcTableName"] = "satei";
$proto120["m_expr"]=$obj;
$proto120["m_alias"] = "";
$obj = new SQLFieldListItem($proto120);

$proto0["m_fieldlist"][]=$obj;
						$proto122=array();
			$obj = new SQLField(array(
	"m_strName" => "browsenode",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto122["m_sql"] = "`shouhin`.`browsenode`";
$proto122["m_srcTableName"] = "satei";
$proto122["m_expr"]=$obj;
$proto122["m_alias"] = "";
$obj = new SQLFieldListItem($proto122);

$proto0["m_fieldlist"][]=$obj;
						$proto124=array();
			$obj = new SQLField(array(
	"m_strName" => "gold_property",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto124["m_sql"] = "`shouhin`.`gold_property`";
$proto124["m_srcTableName"] = "satei";
$proto124["m_expr"]=$obj;
$proto124["m_alias"] = "";
$obj = new SQLFieldListItem($proto124);

$proto0["m_fieldlist"][]=$obj;
						$proto126=array();
			$obj = new SQLField(array(
	"m_strName" => "ichiba_title",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto126["m_sql"] = "`shouhin`.`ichiba_title`";
$proto126["m_srcTableName"] = "satei";
$proto126["m_expr"]=$obj;
$proto126["m_alias"] = "";
$obj = new SQLFieldListItem($proto126);

$proto0["m_fieldlist"][]=$obj;
						$proto128=array();
			$obj = new SQLField(array(
	"m_strName" => "Gram",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto128["m_sql"] = "`shouhin`.`Gram`";
$proto128["m_srcTableName"] = "satei";
$proto128["m_expr"]=$obj;
$proto128["m_alias"] = "";
$obj = new SQLFieldListItem($proto128);

$proto0["m_fieldlist"][]=$obj;
						$proto130=array();
			$obj = new SQLField(array(
	"m_strName" => "Parent_stone",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto130["m_sql"] = "`shouhin`.`Parent_stone`";
$proto130["m_srcTableName"] = "satei";
$proto130["m_expr"]=$obj;
$proto130["m_alias"] = "";
$obj = new SQLFieldListItem($proto130);

$proto0["m_fieldlist"][]=$obj;
						$proto132=array();
			$obj = new SQLField(array(
	"m_strName" => "Aside_stone",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto132["m_sql"] = "`shouhin`.`Aside_stone`";
$proto132["m_srcTableName"] = "satei";
$proto132["m_expr"]=$obj;
$proto132["m_alias"] = "";
$obj = new SQLFieldListItem($proto132);

$proto0["m_fieldlist"][]=$obj;
						$proto134=array();
			$obj = new SQLField(array(
	"m_strName" => "Appraiser",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto134["m_sql"] = "`shouhin`.`Appraiser`";
$proto134["m_srcTableName"] = "satei";
$proto134["m_expr"]=$obj;
$proto134["m_alias"] = "";
$obj = new SQLFieldListItem($proto134);

$proto0["m_fieldlist"][]=$obj;
						$proto136=array();
			$obj = new SQLField(array(
	"m_strName" => "Remarks",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto136["m_sql"] = "`shouhin`.`Remarks`";
$proto136["m_srcTableName"] = "satei";
$proto136["m_expr"]=$obj;
$proto136["m_alias"] = "";
$obj = new SQLFieldListItem($proto136);

$proto0["m_fieldlist"][]=$obj;
						$proto138=array();
			$obj = new SQLField(array(
	"m_strName" => "Destination_selling",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto138["m_sql"] = "`shouhin`.`Destination_selling`";
$proto138["m_srcTableName"] = "satei";
$proto138["m_expr"]=$obj;
$proto138["m_alias"] = "";
$obj = new SQLFieldListItem($proto138);

$proto0["m_fieldlist"][]=$obj;
						$proto140=array();
			$obj = new SQLField(array(
	"m_strName" => "Finish",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto140["m_sql"] = "`shouhin`.`Finish`";
$proto140["m_srcTableName"] = "satei";
$proto140["m_expr"]=$obj;
$proto140["m_alias"] = "";
$obj = new SQLFieldListItem($proto140);

$proto0["m_fieldlist"][]=$obj;
						$proto142=array();
			$obj = new SQLField(array(
	"m_strName" => "Discrimination",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto142["m_sql"] = "`shouhin`.`Discrimination`";
$proto142["m_srcTableName"] = "satei";
$proto142["m_expr"]=$obj;
$proto142["m_alias"] = "";
$obj = new SQLFieldListItem($proto142);

$proto0["m_fieldlist"][]=$obj;
						$proto144=array();
			$obj = new SQLField(array(
	"m_strName" => "accessories",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto144["m_sql"] = "`shouhin`.`accessories`";
$proto144["m_srcTableName"] = "satei";
$proto144["m_expr"]=$obj;
$proto144["m_alias"] = "";
$obj = new SQLFieldListItem($proto144);

$proto0["m_fieldlist"][]=$obj;
						$proto146=array();
			$obj = new SQLField(array(
	"m_strName" => "priority",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto146["m_sql"] = "`shouhin`.`priority`";
$proto146["m_srcTableName"] = "satei";
$proto146["m_expr"]=$obj;
$proto146["m_alias"] = "";
$obj = new SQLFieldListItem($proto146);

$proto0["m_fieldlist"][]=$obj;
						$proto148=array();
			$obj = new SQLField(array(
	"m_strName" => "A_storage",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto148["m_sql"] = "`shouhin`.`A_storage`";
$proto148["m_srcTableName"] = "satei";
$proto148["m_expr"]=$obj;
$proto148["m_alias"] = "";
$obj = new SQLFieldListItem($proto148);

$proto0["m_fieldlist"][]=$obj;
						$proto150=array();
			$obj = new SQLField(array(
	"m_strName" => "price_per_gram",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto150["m_sql"] = "`shouhin`.`price_per_gram`";
$proto150["m_srcTableName"] = "satei";
$proto150["m_expr"]=$obj;
$proto150["m_alias"] = "";
$obj = new SQLFieldListItem($proto150);

$proto0["m_fieldlist"][]=$obj;
						$proto152=array();
			$obj = new SQLField(array(
	"m_strName" => "price_per_parent_stone",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto152["m_sql"] = "`shouhin`.`price_per_parent_stone`";
$proto152["m_srcTableName"] = "satei";
$proto152["m_expr"]=$obj;
$proto152["m_alias"] = "";
$obj = new SQLFieldListItem($proto152);

$proto0["m_fieldlist"][]=$obj;
						$proto154=array();
			$obj = new SQLField(array(
	"m_strName" => "price_per_aside_stone",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto154["m_sql"] = "`shouhin`.`price_per_aside_stone`";
$proto154["m_srcTableName"] = "satei";
$proto154["m_expr"]=$obj;
$proto154["m_alias"] = "";
$obj = new SQLFieldListItem($proto154);

$proto0["m_fieldlist"][]=$obj;
						$proto156=array();
			$obj = new SQLField(array(
	"m_strName" => "price_secret",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto156["m_sql"] = "`shouhin`.`price_secret`";
$proto156["m_srcTableName"] = "satei";
$proto156["m_expr"]=$obj;
$proto156["m_alias"] = "";
$obj = new SQLFieldListItem($proto156);

$proto0["m_fieldlist"][]=$obj;
						$proto158=array();
			$obj = new SQLField(array(
	"m_strName" => "sales_price_secret",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto158["m_sql"] = "`shouhin`.`sales_price_secret`";
$proto158["m_srcTableName"] = "satei";
$proto158["m_expr"]=$obj;
$proto158["m_alias"] = "";
$obj = new SQLFieldListItem($proto158);

$proto0["m_fieldlist"][]=$obj;
						$proto160=array();
			$obj = new SQLField(array(
	"m_strName" => "eq",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto160["m_sql"] = "`shouhin`.`eq`";
$proto160["m_srcTableName"] = "satei";
$proto160["m_expr"]=$obj;
$proto160["m_alias"] = "";
$obj = new SQLFieldListItem($proto160);

$proto0["m_fieldlist"][]=$obj;
						$proto162=array();
			$obj = new SQLField(array(
	"m_strName" => "en",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto162["m_sql"] = "`shouhin`.`en`";
$proto162["m_srcTableName"] = "satei";
$proto162["m_expr"]=$obj;
$proto162["m_alias"] = "";
$obj = new SQLFieldListItem($proto162);

$proto0["m_fieldlist"][]=$obj;
						$proto164=array();
			$obj = new SQLField(array(
	"m_strName" => "line",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto164["m_sql"] = "`shouhin`.`line`";
$proto164["m_srcTableName"] = "satei";
$proto164["m_expr"]=$obj;
$proto164["m_alias"] = "";
$obj = new SQLFieldListItem($proto164);

$proto0["m_fieldlist"][]=$obj;
						$proto166=array();
			$obj = new SQLField(array(
	"m_strName" => "item_name",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto166["m_sql"] = "`shouhin`.`item_name`";
$proto166["m_srcTableName"] = "satei";
$proto166["m_expr"]=$obj;
$proto166["m_alias"] = "";
$obj = new SQLFieldListItem($proto166);

$proto0["m_fieldlist"][]=$obj;
						$proto168=array();
			$obj = new SQLField(array(
	"m_strName" => "handle",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto168["m_sql"] = "`shouhin`.`handle`";
$proto168["m_srcTableName"] = "satei";
$proto168["m_expr"]=$obj;
$proto168["m_alias"] = "";
$obj = new SQLFieldListItem($proto168);

$proto0["m_fieldlist"][]=$obj;
						$proto170=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_color_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto170["m_sql"] = "`shouhin`.`yahoo_color_id`";
$proto170["m_srcTableName"] = "satei";
$proto170["m_expr"]=$obj;
$proto170["m_alias"] = "";
$obj = new SQLFieldListItem($proto170);

$proto0["m_fieldlist"][]=$obj;
						$proto172=array();
			$obj = new SQLField(array(
	"m_strName" => "raku_hyoujisaki_category4",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto172["m_sql"] = "`shouhin`.`raku_hyoujisaki_category4`";
$proto172["m_srcTableName"] = "satei";
$proto172["m_expr"]=$obj;
$proto172["m_alias"] = "";
$obj = new SQLFieldListItem($proto172);

$proto0["m_fieldlist"][]=$obj;
						$proto174=array();
			$obj = new SQLField(array(
	"m_strName" => "raku_hyoujisaki_category5",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto174["m_sql"] = "`shouhin`.`raku_hyoujisaki_category5`";
$proto174["m_srcTableName"] = "satei";
$proto174["m_expr"]=$obj;
$proto174["m_alias"] = "";
$obj = new SQLFieldListItem($proto174);

$proto0["m_fieldlist"][]=$obj;
						$proto176=array();
			$obj = new SQLField(array(
	"m_strName" => "raku_dir_1",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto176["m_sql"] = "`shouhin`.`raku_dir_1`";
$proto176["m_srcTableName"] = "satei";
$proto176["m_expr"]=$obj;
$proto176["m_alias"] = "";
$obj = new SQLFieldListItem($proto176);

$proto0["m_fieldlist"][]=$obj;
						$proto178=array();
			$obj = new SQLField(array(
	"m_strName" => "raku_dir_2",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto178["m_sql"] = "`shouhin`.`raku_dir_2`";
$proto178["m_srcTableName"] = "satei";
$proto178["m_expr"]=$obj;
$proto178["m_alias"] = "";
$obj = new SQLFieldListItem($proto178);

$proto0["m_fieldlist"][]=$obj;
						$proto180=array();
			$obj = new SQLField(array(
	"m_strName" => "raku_dir_3",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto180["m_sql"] = "`shouhin`.`raku_dir_3`";
$proto180["m_srcTableName"] = "satei";
$proto180["m_expr"]=$obj;
$proto180["m_alias"] = "";
$obj = new SQLFieldListItem($proto180);

$proto0["m_fieldlist"][]=$obj;
						$proto182=array();
			$obj = new SQLField(array(
	"m_strName" => "raku_dir_4",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto182["m_sql"] = "`shouhin`.`raku_dir_4`";
$proto182["m_srcTableName"] = "satei";
$proto182["m_expr"]=$obj;
$proto182["m_alias"] = "";
$obj = new SQLFieldListItem($proto182);

$proto0["m_fieldlist"][]=$obj;
						$proto184=array();
			$obj = new SQLField(array(
	"m_strName" => "raku_dir_5",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto184["m_sql"] = "`shouhin`.`raku_dir_5`";
$proto184["m_srcTableName"] = "satei";
$proto184["m_expr"]=$obj;
$proto184["m_alias"] = "";
$obj = new SQLFieldListItem($proto184);

$proto0["m_fieldlist"][]=$obj;
						$proto186=array();
			$obj = new SQLField(array(
	"m_strName" => "raku_dir_result",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto186["m_sql"] = "`shouhin`.`raku_dir_result`";
$proto186["m_srcTableName"] = "satei";
$proto186["m_expr"]=$obj;
$proto186["m_alias"] = "";
$obj = new SQLFieldListItem($proto186);

$proto0["m_fieldlist"][]=$obj;
						$proto188=array();
			$obj = new SQLField(array(
	"m_strName" => "raku_tag_result",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto188["m_sql"] = "`shouhin`.`raku_tag_result`";
$proto188["m_srcTableName"] = "satei";
$proto188["m_expr"]=$obj;
$proto188["m_alias"] = "";
$obj = new SQLFieldListItem($proto188);

$proto0["m_fieldlist"][]=$obj;
						$proto190=array();
			$obj = new SQLField(array(
	"m_strName" => "serial_number",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto190["m_sql"] = "`shouhin`.`serial_number`";
$proto190["m_srcTableName"] = "satei";
$proto190["m_expr"]=$obj;
$proto190["m_alias"] = "";
$obj = new SQLFieldListItem($proto190);

$proto0["m_fieldlist"][]=$obj;
						$proto192=array();
			$obj = new SQLField(array(
	"m_strName" => "Exhibition_Date",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto192["m_sql"] = "`shouhin`.`Exhibition_Date`";
$proto192["m_srcTableName"] = "satei";
$proto192["m_expr"]=$obj;
$proto192["m_alias"] = "";
$obj = new SQLFieldListItem($proto192);

$proto0["m_fieldlist"][]=$obj;
						$proto194=array();
			$obj = new SQLField(array(
	"m_strName" => "search_keyword",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto194["m_sql"] = "`shouhin`.`search_keyword`";
$proto194["m_srcTableName"] = "satei";
$proto194["m_expr"]=$obj;
$proto194["m_alias"] = "";
$obj = new SQLFieldListItem($proto194);

$proto0["m_fieldlist"][]=$obj;
						$proto196=array();
			$obj = new SQLField(array(
	"m_strName" => "stamp",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto196["m_sql"] = "`shouhin`.`stamp`";
$proto196["m_srcTableName"] = "satei";
$proto196["m_expr"]=$obj;
$proto196["m_alias"] = "";
$obj = new SQLFieldListItem($proto196);

$proto0["m_fieldlist"][]=$obj;
						$proto198=array();
			$obj = new SQLField(array(
	"m_strName" => "motif",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto198["m_sql"] = "`shouhin`.`motif`";
$proto198["m_srcTableName"] = "satei";
$proto198["m_expr"]=$obj;
$proto198["m_alias"] = "";
$obj = new SQLFieldListItem($proto198);

$proto0["m_fieldlist"][]=$obj;
						$proto200=array();
			$obj = new SQLField(array(
	"m_strName" => "Setting",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto200["m_sql"] = "`shouhin`.`Setting`";
$proto200["m_srcTableName"] = "satei";
$proto200["m_expr"]=$obj;
$proto200["m_alias"] = "";
$obj = new SQLFieldListItem($proto200);

$proto0["m_fieldlist"][]=$obj;
						$proto202=array();
			$obj = new SQLField(array(
	"m_strName" => "processing",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto202["m_sql"] = "`shouhin`.`processing`";
$proto202["m_srcTableName"] = "satei";
$proto202["m_expr"]=$obj;
$proto202["m_alias"] = "";
$obj = new SQLFieldListItem($proto202);

$proto0["m_fieldlist"][]=$obj;
						$proto204=array();
			$obj = new SQLField(array(
	"m_strName" => "Sleeve_Length",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto204["m_sql"] = "`shouhin`.`Sleeve_Length`";
$proto204["m_srcTableName"] = "satei";
$proto204["m_expr"]=$obj;
$proto204["m_alias"] = "";
$obj = new SQLFieldListItem($proto204);

$proto0["m_fieldlist"][]=$obj;
						$proto206=array();
			$obj = new SQLField(array(
	"m_strName" => "length",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto206["m_sql"] = "`shouhin`.`length`";
$proto206["m_srcTableName"] = "satei";
$proto206["m_expr"]=$obj;
$proto206["m_alias"] = "";
$obj = new SQLFieldListItem($proto206);

$proto0["m_fieldlist"][]=$obj;
						$proto208=array();
			$obj = new SQLField(array(
	"m_strName" => "Ring_size",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto208["m_sql"] = "`shouhin`.`Ring_size`";
$proto208["m_srcTableName"] = "satei";
$proto208["m_expr"]=$obj;
$proto208["m_alias"] = "";
$obj = new SQLFieldListItem($proto208);

$proto0["m_fieldlist"][]=$obj;
						$proto210=array();
			$obj = new SQLField(array(
	"m_strName" => "price_for_site",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto210["m_sql"] = "`shouhin`.`price_for_site`";
$proto210["m_srcTableName"] = "satei";
$proto210["m_expr"]=$obj;
$proto210["m_alias"] = "";
$obj = new SQLFieldListItem($proto210);

$proto0["m_fieldlist"][]=$obj;
						$proto212=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_category_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto212["m_sql"] = "`shouhin`.`yahoo_category_id`";
$proto212["m_srcTableName"] = "satei";
$proto212["m_expr"]=$obj;
$proto212["m_alias"] = "";
$obj = new SQLFieldListItem($proto212);

$proto0["m_fieldlist"][]=$obj;
						$proto214=array();
			$obj = new SQLField(array(
	"m_strName" => "Qty",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto214["m_sql"] = "`shouhin`.`Qty`";
$proto214["m_srcTableName"] = "satei";
$proto214["m_expr"]=$obj;
$proto214["m_alias"] = "";
$obj = new SQLFieldListItem($proto214);

$proto0["m_fieldlist"][]=$obj;
						$proto216=array();
			$obj = new SQLField(array(
	"m_strName" => "sales_period",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto216["m_sql"] = "`shouhin`.`sales_period`";
$proto216["m_srcTableName"] = "satei";
$proto216["m_expr"]=$obj;
$proto216["m_alias"] = "";
$obj = new SQLFieldListItem($proto216);

$proto0["m_fieldlist"][]=$obj;
						$proto218=array();
			$obj = new SQLField(array(
	"m_strName" => "starting_price",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto218["m_sql"] = "`shouhin`.`starting_price`";
$proto218["m_srcTableName"] = "satei";
$proto218["m_expr"]=$obj;
$proto218["m_alias"] = "";
$obj = new SQLFieldListItem($proto218);

$proto0["m_fieldlist"][]=$obj;
						$proto220=array();
			$obj = new SQLField(array(
	"m_strName" => "ecc_seq",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "satei"
));

$proto220["m_sql"] = "`Eoc`.`ecc_seq`";
$proto220["m_srcTableName"] = "satei";
$proto220["m_expr"]=$obj;
$proto220["m_alias"] = "";
$obj = new SQLFieldListItem($proto220);

$proto0["m_fieldlist"][]=$obj;
						$proto222=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_junle",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto222["m_sql"] = "`shouhin`.`yahoo_junle`";
$proto222["m_srcTableName"] = "satei";
$proto222["m_expr"]=$obj;
$proto222["m_alias"] = "";
$obj = new SQLFieldListItem($proto222);

$proto0["m_fieldlist"][]=$obj;
						$proto224=array();
			$obj = new SQLField(array(
	"m_strName" => "logo",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto224["m_sql"] = "`shouhin`.`logo`";
$proto224["m_srcTableName"] = "satei";
$proto224["m_expr"]=$obj;
$proto224["m_alias"] = "";
$obj = new SQLFieldListItem($proto224);

$proto0["m_fieldlist"][]=$obj;
						$proto226=array();
			$obj = new SQLField(array(
	"m_strName" => "parts",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto226["m_sql"] = "`shouhin`.`parts`";
$proto226["m_srcTableName"] = "satei";
$proto226["m_expr"]=$obj;
$proto226["m_alias"] = "";
$obj = new SQLFieldListItem($proto226);

$proto0["m_fieldlist"][]=$obj;
						$proto228=array();
			$obj = new SQLField(array(
	"m_strName" => "country_of_origin",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto228["m_sql"] = "`shouhin`.`country_of_origin`";
$proto228["m_srcTableName"] = "satei";
$proto228["m_expr"]=$obj;
$proto228["m_alias"] = "";
$obj = new SQLFieldListItem($proto228);

$proto0["m_fieldlist"][]=$obj;
						$proto230=array();
			$obj = new SQLField(array(
	"m_strName" => "zipper",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto230["m_sql"] = "`shouhin`.`zipper`";
$proto230["m_srcTableName"] = "satei";
$proto230["m_expr"]=$obj;
$proto230["m_alias"] = "";
$obj = new SQLFieldListItem($proto230);

$proto0["m_fieldlist"][]=$obj;
						$proto232=array();
			$obj = new SQLField(array(
	"m_strName" => "guarantee",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto232["m_sql"] = "`shouhin`.`guarantee`";
$proto232["m_srcTableName"] = "satei";
$proto232["m_expr"]=$obj;
$proto232["m_alias"] = "";
$obj = new SQLFieldListItem($proto232);

$proto0["m_fieldlist"][]=$obj;
						$proto234=array();
			$obj = new SQLField(array(
	"m_strName" => "errors",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto234["m_sql"] = "`shouhin`.`errors`";
$proto234["m_srcTableName"] = "satei";
$proto234["m_expr"]=$obj;
$proto234["m_alias"] = "";
$obj = new SQLFieldListItem($proto234);

$proto0["m_fieldlist"][]=$obj;
						$proto236=array();
			$obj = new SQLField(array(
	"m_strName" => "designer",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto236["m_sql"] = "`shouhin`.`designer`";
$proto236["m_srcTableName"] = "satei";
$proto236["m_expr"]=$obj;
$proto236["m_alias"] = "";
$obj = new SQLFieldListItem($proto236);

$proto0["m_fieldlist"][]=$obj;
						$proto238=array();
			$obj = new SQLField(array(
	"m_strName" => "hahakai",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto238["m_sql"] = "`shouhin`.`hahakai`";
$proto238["m_srcTableName"] = "satei";
$proto238["m_expr"]=$obj;
$proto238["m_alias"] = "";
$obj = new SQLFieldListItem($proto238);

$proto0["m_fieldlist"][]=$obj;
						$proto240=array();
			$obj = new SQLField(array(
	"m_strName" => "effect",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto240["m_sql"] = "`shouhin`.`effect`";
$proto240["m_srcTableName"] = "satei";
$proto240["m_expr"]=$obj;
$proto240["m_alias"] = "";
$obj = new SQLFieldListItem($proto240);

$proto0["m_fieldlist"][]=$obj;
						$proto242=array();
			$obj = new SQLField(array(
	"m_strName" => "shape",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto242["m_sql"] = "`shouhin`.`shape`";
$proto242["m_srcTableName"] = "satei";
$proto242["m_expr"]=$obj;
$proto242["m_alias"] = "";
$obj = new SQLFieldListItem($proto242);

$proto0["m_fieldlist"][]=$obj;
						$proto244=array();
			$obj = new SQLField(array(
	"m_strName" => "cutting_style",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto244["m_sql"] = "`shouhin`.`cutting_style`";
$proto244["m_srcTableName"] = "satei";
$proto244["m_expr"]=$obj;
$proto244["m_alias"] = "";
$obj = new SQLFieldListItem($proto244);

$proto0["m_fieldlist"][]=$obj;
						$proto246=array();
			$obj = new SQLField(array(
	"m_strName" => "chain_type",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto246["m_sql"] = "`shouhin`.`chain_type`";
$proto246["m_srcTableName"] = "satei";
$proto246["m_expr"]=$obj;
$proto246["m_alias"] = "";
$obj = new SQLFieldListItem($proto246);

$proto0["m_fieldlist"][]=$obj;
						$proto248=array();
			$obj = new SQLField(array(
	"m_strName" => "number_of_stones",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto248["m_sql"] = "`shouhin`.`number_of_stones`";
$proto248["m_srcTableName"] = "satei";
$proto248["m_expr"]=$obj;
$proto248["m_alias"] = "";
$obj = new SQLFieldListItem($proto248);

$proto0["m_fieldlist"][]=$obj;
						$proto250=array();
			$obj = new SQLField(array(
	"m_strName" => "amount",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto250["m_sql"] = "`shouhin`.`amount`";
$proto250["m_srcTableName"] = "satei";
$proto250["m_expr"]=$obj;
$proto250["m_alias"] = "";
$obj = new SQLFieldListItem($proto250);

$proto0["m_fieldlist"][]=$obj;
						$proto252=array();
			$obj = new SQLField(array(
	"m_strName" => "satei_error",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto252["m_sql"] = "`shouhin`.`satei_error`";
$proto252["m_srcTableName"] = "satei";
$proto252["m_expr"]=$obj;
$proto252["m_alias"] = "";
$obj = new SQLFieldListItem($proto252);

$proto0["m_fieldlist"][]=$obj;
						$proto254=array();
			$obj = new SQLField(array(
	"m_strName" => "producing_area",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto254["m_sql"] = "`shouhin`.`producing_area`";
$proto254["m_srcTableName"] = "satei";
$proto254["m_expr"]=$obj;
$proto254["m_alias"] = "";
$obj = new SQLFieldListItem($proto254);

$proto0["m_fieldlist"][]=$obj;
						$proto256=array();
			$obj = new SQLField(array(
	"m_strName" => "shape_supplement",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto256["m_sql"] = "`shouhin`.`shape_supplement`";
$proto256["m_srcTableName"] = "satei";
$proto256["m_expr"]=$obj;
$proto256["m_alias"] = "";
$obj = new SQLFieldListItem($proto256);

$proto0["m_fieldlist"][]=$obj;
						$proto258=array();
			$obj = new SQLField(array(
	"m_strName" => "side_gem",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto258["m_sql"] = "`shouhin`.`side_gem`";
$proto258["m_srcTableName"] = "satei";
$proto258["m_expr"]=$obj;
$proto258["m_alias"] = "";
$obj = new SQLFieldListItem($proto258);

$proto0["m_fieldlist"][]=$obj;
						$proto260=array();
			$obj = new SQLField(array(
	"m_strName" => "product_style",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto260["m_sql"] = "`shouhin`.`product_style`";
$proto260["m_srcTableName"] = "satei";
$proto260["m_expr"]=$obj;
$proto260["m_alias"] = "";
$obj = new SQLFieldListItem($proto260);

$proto0["m_fieldlist"][]=$obj;
						$proto262=array();
			$obj = new SQLField(array(
	"m_strName" => "collar_neck_line",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto262["m_sql"] = "`shouhin`.`collar_neck_line`";
$proto262["m_srcTableName"] = "satei";
$proto262["m_expr"]=$obj;
$proto262["m_alias"] = "";
$obj = new SQLFieldListItem($proto262);

$proto0["m_fieldlist"][]=$obj;
						$proto264=array();
			$obj = new SQLField(array(
	"m_strName" => "breast",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto264["m_sql"] = "`shouhin`.`breast`";
$proto264["m_srcTableName"] = "satei";
$proto264["m_expr"]=$obj;
$proto264["m_alias"] = "";
$obj = new SQLFieldListItem($proto264);

$proto0["m_fieldlist"][]=$obj;
						$proto266=array();
			$obj = new SQLField(array(
	"m_strName" => "silhouette",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto266["m_sql"] = "`shouhin`.`silhouette`";
$proto266["m_srcTableName"] = "satei";
$proto266["m_expr"]=$obj;
$proto266["m_alias"] = "";
$obj = new SQLFieldListItem($proto266);

$proto0["m_fieldlist"][]=$obj;
						$proto268=array();
			$obj = new SQLField(array(
	"m_strName" => "sleeve",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto268["m_sql"] = "`shouhin`.`sleeve`";
$proto268["m_srcTableName"] = "satei";
$proto268["m_expr"]=$obj;
$proto268["m_alias"] = "";
$obj = new SQLFieldListItem($proto268);

$proto0["m_fieldlist"][]=$obj;
						$proto270=array();
			$obj = new SQLField(array(
	"m_strName" => "unit",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto270["m_sql"] = "`shouhin`.`unit`";
$proto270["m_srcTableName"] = "satei";
$proto270["m_expr"]=$obj;
$proto270["m_alias"] = "";
$obj = new SQLFieldListItem($proto270);

$proto0["m_fieldlist"][]=$obj;
						$proto272=array();
			$obj = new SQLField(array(
	"m_strName" => "hall_mark",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto272["m_sql"] = "`shouhin`.`hall_mark`";
$proto272["m_srcTableName"] = "satei";
$proto272["m_expr"]=$obj;
$proto272["m_alias"] = "";
$obj = new SQLFieldListItem($proto272);

$proto0["m_fieldlist"][]=$obj;
						$proto274=array();
			$obj = new SQLField(array(
	"m_strName" => "plate",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto274["m_sql"] = "`shouhin`.`plate`";
$proto274["m_srcTableName"] = "satei";
$proto274["m_expr"]=$obj;
$proto274["m_alias"] = "";
$obj = new SQLFieldListItem($proto274);

$proto0["m_fieldlist"][]=$obj;
						$proto276=array();
			$obj = new SQLField(array(
	"m_strName" => "toe",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto276["m_sql"] = "`shouhin`.`toe`";
$proto276["m_srcTableName"] = "satei";
$proto276["m_expr"]=$obj;
$proto276["m_alias"] = "";
$obj = new SQLFieldListItem($proto276);

$proto0["m_fieldlist"][]=$obj;
						$proto278=array();
			$obj = new SQLField(array(
	"m_strName" => "heel",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto278["m_sql"] = "`shouhin`.`heel`";
$proto278["m_srcTableName"] = "satei";
$proto278["m_expr"]=$obj;
$proto278["m_alias"] = "";
$obj = new SQLFieldListItem($proto278);

$proto0["m_fieldlist"][]=$obj;
						$proto280=array();
			$obj = new SQLField(array(
	"m_strName" => "cloth",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto280["m_sql"] = "`shouhin`.`cloth`";
$proto280["m_srcTableName"] = "satei";
$proto280["m_expr"]=$obj;
$proto280["m_alias"] = "";
$obj = new SQLFieldListItem($proto280);

$proto0["m_fieldlist"][]=$obj;
						$proto282=array();
			$obj = new SQLField(array(
	"m_strName" => "official_url",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto282["m_sql"] = "`shouhin`.`official_url`";
$proto282["m_srcTableName"] = "satei";
$proto282["m_expr"]=$obj;
$proto282["m_alias"] = "";
$obj = new SQLFieldListItem($proto282);

$proto0["m_fieldlist"][]=$obj;
						$proto284=array();
			$obj = new SQLField(array(
	"m_strName" => "Eoc_takuhai_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto284["m_sql"] = "`shouhin`.`Eoc_takuhai_id`";
$proto284["m_srcTableName"] = "satei";
$proto284["m_expr"]=$obj;
$proto284["m_alias"] = "";
$obj = new SQLFieldListItem($proto284);

$proto0["m_fieldlist"][]=$obj;
						$proto286=array();
			$obj = new SQLField(array(
	"m_strName" => "Eoc_unfinished_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto286["m_sql"] = "`shouhin`.`Eoc_unfinished_id`";
$proto286["m_srcTableName"] = "satei";
$proto286["m_expr"]=$obj;
$proto286["m_alias"] = "";
$obj = new SQLFieldListItem($proto286);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto288=array();
$proto288["m_link"] = "SQLL_MAIN";
			$proto289=array();
$proto289["m_strName"] = "shouhin";
$proto289["m_srcTableName"] = "satei";
$proto289["m_columns"] = array();
$proto289["m_columns"][] = "product_id";
$proto289["m_columns"][] = "category_id";
$proto289["m_columns"][] = "goods_title";
$proto289["m_columns"][] = "title";
$proto289["m_columns"][] = "sub_category_id1";
$proto289["m_columns"][] = "ecc_id";
$proto289["m_columns"][] = "price";
$proto289["m_columns"][] = "yahoo";
$proto289["m_columns"][] = "remark";
$proto289["m_columns"][] = "sales_price";
$proto289["m_columns"][] = "description";
$proto289["m_columns"][] = "status";
$proto289["m_columns"][] = "product_num";
$proto289["m_columns"][] = "updated_at";
$proto289["m_columns"][] = "yahoo_size";
$proto289["m_columns"][] = "yahoo_title";
$proto289["m_columns"][] = "yahoo_junle";
$proto289["m_columns"][] = "yahoo_sankou_uwadai";
$proto289["m_columns"][] = "yahoo_sozai";
$proto289["m_columns"][] = "yahoo_color";
$proto289["m_columns"][] = "yahoo_kataban";
$proto289["m_columns"][] = "yahoo_condition1";
$proto289["m_columns"][] = "yahoo_condition2";
$proto289["m_columns"][] = "yahoo_fuzokuhin";
$proto289["m_columns"][] = "yahoo_sinaban";
$proto289["m_columns"][] = "yahoo_saisun_sha";
$proto289["m_columns"][] = "yahoo_sex";
$proto289["m_columns"][] = "box_id";
$proto289["m_columns"][] = "nyuukin_price";
$proto289["m_columns"][] = "updated_by";
$proto289["m_columns"][] = "raku_title";
$proto289["m_columns"][] = "raku_hyoujisaki_category2";
$proto289["m_columns"][] = "raku_hyoujisaki_category";
$proto289["m_columns"][] = "raku_hyoujisaki_category3";
$proto289["m_columns"][] = "timesta";
$proto289["m_columns"][] = "saisun_start";
$proto289["m_columns"][] = "saisun_end";
$proto289["m_columns"][] = "label_output_flag";
$proto289["m_columns"][] = "season";
$proto289["m_columns"][] = "kanryou_henbi";
$proto289["m_columns"][] = "box_sort";
$proto289["m_columns"][] = "satei_by";
$proto289["m_columns"][] = "kaitori_by";
$proto289["m_columns"][] = "comment";
$proto289["m_columns"][] = "satei_hi";
$proto289["m_columns"][] = "kaitory_hi";
$proto289["m_columns"][] = "REG_PHOTOGRAPHER";
$proto289["m_columns"][] = "REG_AUTHOR";
$proto289["m_columns"][] = "REG_PACKINGS";
$proto289["m_columns"][] = "REG_KAKOU_DATE";
$proto289["m_columns"][] = "REG_KAKOU";
$proto289["m_columns"][] = "REG_EXHIBITOR";
$proto289["m_columns"][] = "REG_PHOTOGRAPHER_DATE";
$proto289["m_columns"][] = "DT_PACKING_DATE";
$proto289["m_columns"][] = "DT_UP_DATE";
$proto289["m_columns"][] = "AWAZU_DATE";
$proto289["m_columns"][] = "AWAZU_NIN";
$proto289["m_columns"][] = "sabun_date";
$proto289["m_columns"][] = "browseid";
$proto289["m_columns"][] = "browsenode";
$proto289["m_columns"][] = "gold_property";
$proto289["m_columns"][] = "ichiba_title";
$proto289["m_columns"][] = "Gram";
$proto289["m_columns"][] = "Parent_stone";
$proto289["m_columns"][] = "Aside_stone";
$proto289["m_columns"][] = "Appraiser";
$proto289["m_columns"][] = "Remarks";
$proto289["m_columns"][] = "Destination_selling";
$proto289["m_columns"][] = "Finish";
$proto289["m_columns"][] = "Discrimination";
$proto289["m_columns"][] = "accessories";
$proto289["m_columns"][] = "priority";
$proto289["m_columns"][] = "A_storage";
$proto289["m_columns"][] = "price_per_gram";
$proto289["m_columns"][] = "price_per_parent_stone";
$proto289["m_columns"][] = "price_per_aside_stone";
$proto289["m_columns"][] = "price_secret";
$proto289["m_columns"][] = "sales_price_secret";
$proto289["m_columns"][] = "eq";
$proto289["m_columns"][] = "en";
$proto289["m_columns"][] = "line";
$proto289["m_columns"][] = "item_name";
$proto289["m_columns"][] = "handle";
$proto289["m_columns"][] = "yahoo_color_id";
$proto289["m_columns"][] = "raku_hyoujisaki_category4";
$proto289["m_columns"][] = "raku_hyoujisaki_category5";
$proto289["m_columns"][] = "raku_dir_1";
$proto289["m_columns"][] = "raku_dir_2";
$proto289["m_columns"][] = "raku_dir_3";
$proto289["m_columns"][] = "raku_dir_4";
$proto289["m_columns"][] = "raku_dir_5";
$proto289["m_columns"][] = "raku_dir_result";
$proto289["m_columns"][] = "raku_tag_result";
$proto289["m_columns"][] = "serial_number";
$proto289["m_columns"][] = "Exhibition_Date";
$proto289["m_columns"][] = "search_keyword";
$proto289["m_columns"][] = "stamp";
$proto289["m_columns"][] = "motif";
$proto289["m_columns"][] = "Setting";
$proto289["m_columns"][] = "processing";
$proto289["m_columns"][] = "Sleeve_Length";
$proto289["m_columns"][] = "length";
$proto289["m_columns"][] = "Ring_size";
$proto289["m_columns"][] = "price_for_site";
$proto289["m_columns"][] = "yahoo_category_id";
$proto289["m_columns"][] = "Qty";
$proto289["m_columns"][] = "sales_period";
$proto289["m_columns"][] = "starting_price";
$proto289["m_columns"][] = "FLAG_NO_ARRIVAL";
$proto289["m_columns"][] = "amount_of_image";
$proto289["m_columns"][] = "csv";
$proto289["m_columns"][] = "return_output_flag";
$proto289["m_columns"][] = "wasabi_flag";
$proto289["m_columns"][] = "ws_import_date";
$proto289["m_columns"][] = "logo";
$proto289["m_columns"][] = "parts";
$proto289["m_columns"][] = "country_of_origin";
$proto289["m_columns"][] = "zipper";
$proto289["m_columns"][] = "guarantee";
$proto289["m_columns"][] = "errors";
$proto289["m_columns"][] = "designer";
$proto289["m_columns"][] = "hahakai";
$proto289["m_columns"][] = "effect";
$proto289["m_columns"][] = "shape";
$proto289["m_columns"][] = "cutting_style";
$proto289["m_columns"][] = "chain_type";
$proto289["m_columns"][] = "number_of_stones";
$proto289["m_columns"][] = "amount";
$proto289["m_columns"][] = "satei_error";
$proto289["m_columns"][] = "producing_area";
$proto289["m_columns"][] = "shape_supplement";
$proto289["m_columns"][] = "side_gem";
$proto289["m_columns"][] = "product_style";
$proto289["m_columns"][] = "collar_neck_line";
$proto289["m_columns"][] = "breast";
$proto289["m_columns"][] = "silhouette";
$proto289["m_columns"][] = "sleeve";
$proto289["m_columns"][] = "unit";
$proto289["m_columns"][] = "hall_mark";
$proto289["m_columns"][] = "plate";
$proto289["m_columns"][] = "toe";
$proto289["m_columns"][] = "heel";
$proto289["m_columns"][] = "cloth";
$proto289["m_columns"][] = "serial_number_for_storage";
$proto289["m_columns"][] = "official_url";
$proto289["m_columns"][] = "main_details";
$proto289["m_columns"][] = "notation_size";
$proto289["m_columns"][] = "shoe_size_jp";
$proto289["m_columns"][] = "Eoc_chigins2_id";
$proto289["m_columns"][] = "country_of_origin_name";
$proto289["m_columns"][] = "mailingkit_id";
$proto289["m_columns"][] = "DA_COMMENTSANDTOTAL";
$proto289["m_columns"][] = "DA_WEIGHT";
$proto289["m_columns"][] = "DA_PER_CARAT";
$proto289["m_columns"][] = "DA_SHAPE";
$proto289["m_columns"][] = "DA_SELFGRES";
$proto289["m_columns"][] = "DA_ORIGINALGRADEMLIKENED";
$proto289["m_columns"][] = "DA_SUGARCANE";
$proto289["m_columns"][] = "DA_RAPA";
$proto289["m_columns"][] = "DA_INTENSITY";
$proto289["m_columns"][] = "DA_OVERTONE";
$proto289["m_columns"][] = "DA_COLOR";
$proto289["m_columns"][] = "DA_CLARITY";
$proto289["m_columns"][] = "DA_CUT";
$proto289["m_columns"][] = "DA_POLISH";
$proto289["m_columns"][] = "DA_SYMMETRY";
$proto289["m_columns"][] = "DA_FLUO";
$proto289["m_columns"][] = "DA_COLOR_FLUO";
$proto289["m_columns"][] = "DA_WIDE";
$proto289["m_columns"][] = "DA_HIGH";
$proto289["m_columns"][] = "DA_DEPTH";
$proto289["m_columns"][] = "DA_APPRAISER";
$proto289["m_columns"][] = "DA_FRAPA";
$proto289["m_columns"][] = "DA_RATE";
$proto289["m_columns"][] = "DA_UNIT_PRICE_UNPLUG";
$proto289["m_columns"][] = "DA_YOURNAME";
$proto289["m_columns"][] = "DA_RAPAB";
$proto289["m_columns"][] = "DA_GROSSPROFIT";
$proto289["m_columns"][] = "DA_INTEREST_1";
$proto289["m_columns"][] = "DA_no";
$proto289["m_columns"][] = "kinsa_flag";
$proto289["m_columns"][] = "price_for_site_flag";
$proto289["m_columns"][] = "Eoc_takuhai_id";
$proto289["m_columns"][] = "Eoc_unfinished_id";
$proto289["m_columns"][] = "Eoc_chigins_unfinished_id";
$proto289["m_columns"][] = "chohyo_id";
$proto289["m_columns"][] = "location";
$proto289["m_columns"][] = "special_instructions_1";
$proto289["m_columns"][] = "special_instructions_2";
$proto289["m_columns"][] = "special_instructions_3";
$proto289["m_columns"][] = "chohyo_seihin_flag";
$proto289["m_columns"][] = "chohyo_dia_flag";
$proto289["m_columns"][] = "chohyo_type";
$proto289["m_columns"][] = "ichiyen_flag";
$proto289["m_columns"][] = "asuraku_fuka_flag";
$proto289["m_columns"][] = "parallel_import_flag";
$proto289["m_columns"][] = "meisai_number";
$proto289["m_columns"][] = "days_keep_price";
$proto289["m_columns"][] = "initial_included";
$proto289["m_columns"][] = "novelty";
$proto289["m_columns"][] = "tentou_label_output_flag";
$proto289["m_columns"][] = "itaku_flag";
$proto289["m_columns"][] = "including_catch";
$proto289["m_columns"][] = "ichiba_meeting_month";
$proto289["m_columns"][] = "ichiba_meeting_name";
$proto289["m_columns"][] = "ichiba_color";
$proto289["m_columns"][] = "ichiba_clarity";
$proto289["m_columns"][] = "ichiba_melee_gai";
$proto289["m_columns"][] = "ichiba_lot_pieces";
$proto289["m_columns"][] = "ichiba_image";
$proto289["m_columns"][] = "ichiba_img";
$proto289["m_columns"][] = "gold_check_id";
$proto289["m_columns"][] = "ichiba_exhibition_id";
$proto289["m_columns"][] = "ichiba_exhibition_sort";
$proto289["m_columns"][] = "cost";
$proto289["m_columns"][] = "auto_price_cut_prohibited";
$proto289["m_columns"][] = "event_price";
$proto289["m_columns"][] = "identification_cost";
$proto289["m_columns"][] = "other_cost";
$proto289["m_columns"][] = "stock_quantity";
$proto289["m_columns"][] = "Eoc_trader_id_for_buy";
$proto289["m_columns"][] = "Eoc_trader_id_for_sell";
$proto289["m_columns"][] = "multiplication_rate";
$proto289["m_columns"][] = "many_product_group_id";
$proto289["m_columns"][] = "trading_sort_id";
$proto289["m_columns"][] = "many_product_group_saiban";
$proto289["m_columns"][] = "purchase_category";
$proto289["m_columns"][] = "created_at";
$proto289["m_columns"][] = "created_by";
$proto289["m_columns"][] = "manual_input_price_per_gram";
$proto289["m_columns"][] = "satei_start";
$proto289["m_columns"][] = "self_DA_INTENSITY";
$proto289["m_columns"][] = "self_DA_OVERTONE";
$proto289["m_columns"][] = "self_DA_COLOR";
$proto289["m_columns"][] = "self_DA_CLARITY";
$proto289["m_columns"][] = "self_DA_CUT";
$proto289["m_columns"][] = "self_DA_POLISH";
$proto289["m_columns"][] = "self_DA_SYMMETRY";
$proto289["m_columns"][] = "self_DA_FLUO";
$proto289["m_columns"][] = "self_DA_COLOR_FLUO";
$proto289["m_columns"][] = "self_DA_FRAPA";
$proto289["m_columns"][] = "self_DA_RATE";
$proto289["m_columns"][] = "self_multiplication_rate";
$proto289["m_columns"][] = "is_seiyaku";
$proto289["m_columns"][] = "destination_sold_out";
$proto289["m_columns"][] = "mypage_update_prohibited";
$proto289["m_columns"][] = "gold_check_scan_id";
$proto289["m_columns"][] = "buy_campaign_data_id";
$proto289["m_columns"][] = "REG_PHOTOGRAPHER_DATE_start";
$proto289["m_columns"][] = "commission";
$proto289["m_columns"][] = "addtime_gold_check_id";
$proto289["m_columns"][] = "is_recovery";
$proto289["m_columns"][] = "sales_cost";
$proto289["m_columns"][] = "mst_business_partner_id";
$proto289["m_columns"][] = "DA_GROSSPROFIT_2";
$proto289["m_columns"][] = "DA_INTEREST_2";
$proto289["m_columns"][] = "minus_weight";
$proto289["m_columns"][] = "diameter_size";
$proto289["m_columns"][] = "metal_rate_date";
$obj = new SQLTable($proto289);

$proto288["m_table"] = $obj;
$proto288["m_sql"] = "`shouhin`";
$proto288["m_alias"] = "";
$proto288["m_srcTableName"] = "satei";
$proto290=array();
$proto290["m_sql"] = "";
$proto290["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto290["m_column"]=$obj;
$proto290["m_contained"] = array();
$proto290["m_strCase"] = "";
$proto290["m_havingmode"] = false;
$proto290["m_inBrackets"] = false;
$proto290["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto290);

$proto288["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto288);

$proto0["m_fromlist"][]=$obj;
												$proto292=array();
$proto292["m_link"] = "SQLL_LEFTJOIN";
			$proto293=array();
$proto293["m_strName"] = "Eoc";
$proto293["m_srcTableName"] = "satei";
$proto293["m_columns"] = array();
$proto293["m_columns"][] = "ecc_id";
$proto293["m_columns"][] = "ecc_seq";
$proto293["m_columns"][] = "name1";
$proto293["m_columns"][] = "created_t";
$proto293["m_columns"][] = "registerd_id";
$proto293["m_columns"][] = "kaitori_staff_id";
$proto293["m_columns"][] = "name2";
$proto293["m_columns"][] = "wareki";
$proto293["m_columns"][] = "b1";
$proto293["m_columns"][] = "b2";
$proto293["m_columns"][] = "b3";
$proto293["m_columns"][] = "birth_day";
$proto293["m_columns"][] = "age";
$proto293["m_columns"][] = "zip";
$proto293["m_columns"][] = "zip1";
$proto293["m_columns"][] = "zip2";
$proto293["m_columns"][] = "address1";
$proto293["m_columns"][] = "address2";
$proto293["m_columns"][] = "address3";
$proto293["m_columns"][] = "tel";
$proto293["m_columns"][] = "tel2";
$proto293["m_columns"][] = "mail1";
$proto293["m_columns"][] = "mail2";
$proto293["m_columns"][] = "address_code";
$proto293["m_columns"][] = "bank_name";
$proto293["m_columns"][] = "bank_blunch_code";
$proto293["m_columns"][] = "bank_yokin_shubetu";
$proto293["m_columns"][] = "bank_account";
$proto293["m_columns"][] = "bank_acoount_name";
$proto293["m_columns"][] = "haisou_bangou";
$proto293["m_columns"][] = "sise_houhou";
$proto293["m_columns"][] = "hentou_houhou";
$proto293["m_columns"][] = "hentou_houhou_time";
$proto293["m_columns"][] = "mousikomi_id";
$proto293["m_columns"][] = "hituyou_shorui";
$proto293["m_columns"][] = "seiyaku_fuseiritu";
$proto293["m_columns"][] = "mitumori_taku";
$proto293["m_columns"][] = "seacanse";
$proto293["m_columns"][] = "remark";
$proto293["m_columns"][] = "type";
$proto293["m_columns"][] = "sales_flag";
$proto293["m_columns"][] = "src_type";
$proto293["m_columns"][] = "liquidation_shop_code";
$proto293["m_columns"][] = "insurance_amount_print";
$proto293["m_columns"][] = "jis_code";
$proto293["m_columns"][] = "updated_at";
$proto293["m_columns"][] = "_registerd_id";
$proto293["m_columns"][] = "mail_check_type";
$proto293["m_columns"][] = "purchase_type";
$proto293["m_columns"][] = "sex";
$proto293["m_columns"][] = "m_tel";
$proto293["m_columns"][] = "fax";
$proto293["m_columns"][] = "chigin_kaitori";
$proto293["m_columns"][] = "option1";
$proto293["m_columns"][] = "option2";
$proto293["m_columns"][] = "option3";
$proto293["m_columns"][] = "option4";
$proto293["m_columns"][] = "option5";
$proto293["m_columns"][] = "option6";
$proto293["m_columns"][] = "option7";
$proto293["m_columns"][] = "option8";
$proto293["m_columns"][] = "option9";
$proto293["m_columns"][] = "option10";
$proto293["m_columns"][] = "option11";
$proto293["m_columns"][] = "option12";
$proto293["m_columns"][] = "option13";
$proto293["m_columns"][] = "rakuda_csv_flag";
$proto293["m_columns"][] = "EOC_COURIER_CHECK";
$proto293["m_columns"][] = "EOC_SIZE";
$proto293["m_columns"][] = "EOC_NUMBER";
$proto293["m_columns"][] = "EOC_REUSE";
$proto293["m_columns"][] = "EOC__DELIVERY_DATES";
$proto293["m_columns"][] = "EOC_SPECIFIED_TIME";
$proto293["m_columns"][] = "FIRST_NAME2";
$proto293["m_columns"][] = "LAST_NAME2";
$proto293["m_columns"][] = "EOC__DATE_AND_TIME_2";
$proto293["m_columns"][] = "EOC__BOX_NUMBER";
$proto293["m_columns"][] = "FIRST_NAME_KANA";
$proto293["m_columns"][] = "LAST_NAME_KANA";
$proto293["m_columns"][] = "FLAG_SPEED";
$proto293["m_columns"][] = "SEARCH_MEDIA";
$proto293["m_columns"][] = "SEARCH_SITE";
$proto293["m_columns"][] = "UN_REACHABLE";
$proto293["m_columns"][] = "FLG_MAIL_SAGAWA";
$proto293["m_columns"][] = "FLG_MAIL_OTHER";
$proto293["m_columns"][] = "ALLSEIYAKU";
$proto293["m_columns"][] = "ICHIBUSEIYAKU";
$proto293["m_columns"][] = "seiyakukin";
$proto293["m_columns"][] = "kaitorihuka";
$proto293["m_columns"][] = "awazu_date";
$proto293["m_columns"][] = "seiyaku_price";
$proto293["m_columns"][] = "eoc_search_keyword";
$proto293["m_columns"][] = "sonota";
$proto293["m_columns"][] = "size_kosuu";
$proto293["m_columns"][] = "sagawa_shuuka_flag";
$proto293["m_columns"][] = "line_check";
$proto293["m_columns"][] = "sagawa_shuukairai_denwabangou";
$proto293["m_columns"][] = "kaitori_sougak";
$proto293["m_columns"][] = "flag";
$proto293["m_columns"][] = "key_code";
$proto293["m_columns"][] = "dm_check_type";
$proto293["m_columns"][] = "kit_flag";
$proto293["m_columns"][] = "kit_done_flag";
$proto293["m_columns"][] = "bank_details_code";
$proto293["m_columns"][] = "bank_details_blunch_name";
$proto293["m_columns"][] = "bank_details_blunch_code";
$proto293["m_columns"][] = "bank_details_account_number";
$proto293["m_columns"][] = "bank_details_symbol";
$proto293["m_columns"][] = "bank_details_number";
$proto293["m_columns"][] = "bank_details_account_name";
$proto293["m_columns"][] = "bank_details_deposit_type";
$proto293["m_columns"][] = "mypage_id";
$proto293["m_columns"][] = "UN_REACHABLE_brand";
$proto293["m_columns"][] = "sagawa_haisou_hoken";
$proto293["m_columns"][] = "transfer_confirm";
$proto293["m_columns"][] = "outside_bank";
$proto293["m_columns"][] = "new_name";
$proto293["m_columns"][] = "letterpack";
$proto293["m_columns"][] = "satei_saisoku_2_days";
$proto293["m_columns"][] = "satei_saisoku_7_days";
$proto293["m_columns"][] = "accept_flag";
$proto293["m_columns"][] = "delivery_flag";
$proto293["m_columns"][] = "refining_weight";
$proto293["m_columns"][] = "line_chat_url";
$proto293["m_columns"][] = "royal_customer_status";
$proto293["m_columns"][] = "is_business_customer";
$proto293["m_columns"][] = "is_exist_haisouhosyo";
$proto293["m_columns"][] = "meigi_hankaku_kana";
$proto293["m_columns"][] = "building_types";
$proto293["m_columns"][] = "dwelling_types";
$proto293["m_columns"][] = "is_yamato_csv";
$proto293["m_columns"][] = "is_seiren_csv";
$obj = new SQLTable($proto293);

$proto292["m_table"] = $obj;
$proto292["m_sql"] = "LEFT OUTER JOIN `Eoc` ON `shouhin`.`ecc_id` = `Eoc`.`ecc_id`";
$proto292["m_alias"] = "";
$proto292["m_srcTableName"] = "satei";
$proto294=array();
$proto294["m_sql"] = "`shouhin`.`ecc_id` = `Eoc`.`ecc_id`";
$proto294["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "ecc_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto294["m_column"]=$obj;
$proto294["m_contained"] = array();
$proto294["m_strCase"] = "= `Eoc`.`ecc_id`";
$proto294["m_havingmode"] = false;
$proto294["m_inBrackets"] = false;
$proto294["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto294);

$proto292["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto292);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto296=array();
						$obj = new SQLField(array(
	"m_strName" => "product_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei"
));

$proto296["m_column"]=$obj;
$proto296["m_bAsc"] = 0;
$proto296["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto296);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="satei";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_satei = createSqlQuery_satei();


	
		;

																																																																																																																																											

$tdatasatei[".sqlquery"] = $queryData_satei;

include_once(getabspath("include/satei_events.php"));
$tableEvents["satei"] = new eventclass_satei;
$tdatasatei[".hasEvents"] = true;

?>