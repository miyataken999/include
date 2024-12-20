<?php
require_once(getabspath("classes/cipherer.php"));




$tdatakaibutu = array();
	$tdatakaibutu[".truncateText"] = true;
	$tdatakaibutu[".NumberOfChars"] = 80;
	$tdatakaibutu[".ShortName"] = "kaibutu";
	$tdatakaibutu[".OwnerID"] = "";
	$tdatakaibutu[".OriginalTable"] = "shouhin";

//	field labels
$fieldLabelskaibutu = array();
$fieldToolTipskaibutu = array();
$pageTitleskaibutu = array();
$placeHolderskaibutu = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelskaibutu["Japanese"] = array();
	$fieldToolTipskaibutu["Japanese"] = array();
	$placeHolderskaibutu["Japanese"] = array();
	$pageTitleskaibutu["Japanese"] = array();
	$fieldLabelskaibutu["Japanese"]["product_id"] = "SEQ";
	$fieldToolTipskaibutu["Japanese"]["product_id"] = "";
	$placeHolderskaibutu["Japanese"]["product_id"] = "";
	$fieldLabelskaibutu["Japanese"]["category_id"] = "大カテゴリー";
	$fieldToolTipskaibutu["Japanese"]["category_id"] = "";
	$placeHolderskaibutu["Japanese"]["category_id"] = "";
	$fieldLabelskaibutu["Japanese"]["goods_title"] = "アイテム名";
	$fieldToolTipskaibutu["Japanese"]["goods_title"] = "";
	$placeHolderskaibutu["Japanese"]["goods_title"] = "";
	$fieldLabelskaibutu["Japanese"]["title"] = "タイトル";
	$fieldToolTipskaibutu["Japanese"]["title"] = "";
	$placeHolderskaibutu["Japanese"]["title"] = "";
	$fieldLabelskaibutu["Japanese"]["sub_category_id1"] = "中カテゴリー";
	$fieldToolTipskaibutu["Japanese"]["sub_category_id1"] = "";
	$placeHolderskaibutu["Japanese"]["sub_category_id1"] = "";
	$fieldLabelskaibutu["Japanese"]["ecc_id"] = "Ecc Id";
	$fieldToolTipskaibutu["Japanese"]["ecc_id"] = "";
	$placeHolderskaibutu["Japanese"]["ecc_id"] = "";
	$fieldLabelskaibutu["Japanese"]["price"] = "買取額";
	$fieldToolTipskaibutu["Japanese"]["price"] = "";
	$placeHolderskaibutu["Japanese"]["price"] = "";
	$fieldLabelskaibutu["Japanese"]["yahoo"] = "Yahoo";
	$fieldToolTipskaibutu["Japanese"]["yahoo"] = "";
	$placeHolderskaibutu["Japanese"]["yahoo"] = "";
	$fieldLabelskaibutu["Japanese"]["remark"] = "宝飾備考";
	$fieldToolTipskaibutu["Japanese"]["remark"] = "";
	$placeHolderskaibutu["Japanese"]["remark"] = "";
	$fieldLabelskaibutu["Japanese"]["sales_price"] = "販売額";
	$fieldToolTipskaibutu["Japanese"]["sales_price"] = "";
	$placeHolderskaibutu["Japanese"]["sales_price"] = "";
	$fieldLabelskaibutu["Japanese"]["description"] = "メモ";
	$fieldToolTipskaibutu["Japanese"]["description"] = "";
	$placeHolderskaibutu["Japanese"]["description"] = "";
	$fieldLabelskaibutu["Japanese"]["status"] = "商品状態";
	$fieldToolTipskaibutu["Japanese"]["status"] = "";
	$placeHolderskaibutu["Japanese"]["status"] = "";
	$fieldLabelskaibutu["Japanese"]["product_num"] = "ブランドID";
	$fieldToolTipskaibutu["Japanese"]["product_num"] = "";
	$placeHolderskaibutu["Japanese"]["product_num"] = "";
	$fieldLabelskaibutu["Japanese"]["yahoo_size"] = "サイズ";
	$fieldToolTipskaibutu["Japanese"]["yahoo_size"] = "";
	$placeHolderskaibutu["Japanese"]["yahoo_size"] = "";
	$fieldLabelskaibutu["Japanese"]["yahoo_title"] = "Yタイトル";
	$fieldToolTipskaibutu["Japanese"]["yahoo_title"] = "";
	$placeHolderskaibutu["Japanese"]["yahoo_title"] = "";
	$fieldLabelskaibutu["Japanese"]["yahoo_sankou_uwadai"] = "参考上代";
	$fieldToolTipskaibutu["Japanese"]["yahoo_sankou_uwadai"] = "";
	$placeHolderskaibutu["Japanese"]["yahoo_sankou_uwadai"] = "";
	$fieldLabelskaibutu["Japanese"]["yahoo_sozai"] = "素材";
	$fieldToolTipskaibutu["Japanese"]["yahoo_sozai"] = "";
	$placeHolderskaibutu["Japanese"]["yahoo_sozai"] = "";
	$fieldLabelskaibutu["Japanese"]["yahoo_color"] = "カラー";
	$fieldToolTipskaibutu["Japanese"]["yahoo_color"] = "";
	$placeHolderskaibutu["Japanese"]["yahoo_color"] = "";
	$fieldLabelskaibutu["Japanese"]["yahoo_kataban"] = "型番";
	$fieldToolTipskaibutu["Japanese"]["yahoo_kataban"] = "";
	$placeHolderskaibutu["Japanese"]["yahoo_kataban"] = "";
	$fieldLabelskaibutu["Japanese"]["yahoo_condition1"] = "コンディションの詳細";
	$fieldToolTipskaibutu["Japanese"]["yahoo_condition1"] = "";
	$placeHolderskaibutu["Japanese"]["yahoo_condition1"] = "";
	$fieldLabelskaibutu["Japanese"]["yahoo_condition2"] = "コンディション";
	$fieldToolTipskaibutu["Japanese"]["yahoo_condition2"] = "";
	$placeHolderskaibutu["Japanese"]["yahoo_condition2"] = "";
	$fieldLabelskaibutu["Japanese"]["yahoo_fuzokuhin"] = "付属品";
	$fieldToolTipskaibutu["Japanese"]["yahoo_fuzokuhin"] = "";
	$placeHolderskaibutu["Japanese"]["yahoo_fuzokuhin"] = "";
	$fieldLabelskaibutu["Japanese"]["yahoo_sinaban"] = "品番";
	$fieldToolTipskaibutu["Japanese"]["yahoo_sinaban"] = "";
	$placeHolderskaibutu["Japanese"]["yahoo_sinaban"] = "";
	$fieldLabelskaibutu["Japanese"]["yahoo_saisun_sha"] = "Yahoo Saisun Sha";
	$fieldToolTipskaibutu["Japanese"]["yahoo_saisun_sha"] = "";
	$placeHolderskaibutu["Japanese"]["yahoo_saisun_sha"] = "";
	$fieldLabelskaibutu["Japanese"]["yahoo_sex"] = "性別";
	$fieldToolTipskaibutu["Japanese"]["yahoo_sex"] = "";
	$placeHolderskaibutu["Japanese"]["yahoo_sex"] = "";
	$fieldLabelskaibutu["Japanese"]["box_id"] = "Box Id";
	$fieldToolTipskaibutu["Japanese"]["box_id"] = "";
	$placeHolderskaibutu["Japanese"]["box_id"] = "";
	$fieldLabelskaibutu["Japanese"]["nyuukin_price"] = "入金額";
	$fieldToolTipskaibutu["Japanese"]["nyuukin_price"] = "";
	$placeHolderskaibutu["Japanese"]["nyuukin_price"] = "";
	$fieldLabelskaibutu["Japanese"]["updated_by"] = "Updated By";
	$fieldToolTipskaibutu["Japanese"]["updated_by"] = "";
	$placeHolderskaibutu["Japanese"]["updated_by"] = "";
	$fieldLabelskaibutu["Japanese"]["raku_title"] = "楽天タイトル";
	$fieldToolTipskaibutu["Japanese"]["raku_title"] = "";
	$placeHolderskaibutu["Japanese"]["raku_title"] = "";
	$fieldLabelskaibutu["Japanese"]["raku_hyoujisaki_category2"] = "楽ジャン（店舗内）2";
	$fieldToolTipskaibutu["Japanese"]["raku_hyoujisaki_category2"] = "";
	$placeHolderskaibutu["Japanese"]["raku_hyoujisaki_category2"] = "";
	$fieldLabelskaibutu["Japanese"]["raku_hyoujisaki_category"] = "楽ジャン（店舗内）1";
	$fieldToolTipskaibutu["Japanese"]["raku_hyoujisaki_category"] = "";
	$placeHolderskaibutu["Japanese"]["raku_hyoujisaki_category"] = "";
	$fieldLabelskaibutu["Japanese"]["raku_hyoujisaki_category3"] = "楽ジャン（店舗内）3";
	$fieldToolTipskaibutu["Japanese"]["raku_hyoujisaki_category3"] = "";
	$placeHolderskaibutu["Japanese"]["raku_hyoujisaki_category3"] = "";
	$fieldLabelskaibutu["Japanese"]["timesta"] = "Timesta";
	$fieldToolTipskaibutu["Japanese"]["timesta"] = "";
	$placeHolderskaibutu["Japanese"]["timesta"] = "";
	$fieldLabelskaibutu["Japanese"]["saisun_start"] = "Saisun Start";
	$fieldToolTipskaibutu["Japanese"]["saisun_start"] = "";
	$placeHolderskaibutu["Japanese"]["saisun_start"] = "";
	$fieldLabelskaibutu["Japanese"]["saisun_end"] = "Saisun End";
	$fieldToolTipskaibutu["Japanese"]["saisun_end"] = "";
	$placeHolderskaibutu["Japanese"]["saisun_end"] = "";
	$fieldLabelskaibutu["Japanese"]["label_output_flag"] = "ラベル出力";
	$fieldToolTipskaibutu["Japanese"]["label_output_flag"] = "";
	$placeHolderskaibutu["Japanese"]["label_output_flag"] = "";
	$fieldLabelskaibutu["Japanese"]["season"] = "季節";
	$fieldToolTipskaibutu["Japanese"]["season"] = "";
	$placeHolderskaibutu["Japanese"]["season"] = "";
	$fieldLabelskaibutu["Japanese"]["kanryou_henbi"] = "Kanryou Henbi";
	$fieldToolTipskaibutu["Japanese"]["kanryou_henbi"] = "";
	$placeHolderskaibutu["Japanese"]["kanryou_henbi"] = "";
	$fieldLabelskaibutu["Japanese"]["box_sort"] = "Box Sort";
	$fieldToolTipskaibutu["Japanese"]["box_sort"] = "";
	$placeHolderskaibutu["Japanese"]["box_sort"] = "";
	$fieldLabelskaibutu["Japanese"]["satei_by"] = "査定人";
	$fieldToolTipskaibutu["Japanese"]["satei_by"] = "";
	$placeHolderskaibutu["Japanese"]["satei_by"] = "";
	$fieldLabelskaibutu["Japanese"]["kaitori_by"] = "Kaitori By";
	$fieldToolTipskaibutu["Japanese"]["kaitori_by"] = "";
	$placeHolderskaibutu["Japanese"]["kaitori_by"] = "";
	$fieldLabelskaibutu["Japanese"]["comment"] = "コメント";
	$fieldToolTipskaibutu["Japanese"]["comment"] = "";
	$placeHolderskaibutu["Japanese"]["comment"] = "";
	$fieldLabelskaibutu["Japanese"]["satei_hi"] = "査定日";
	$fieldToolTipskaibutu["Japanese"]["satei_hi"] = "";
	$placeHolderskaibutu["Japanese"]["satei_hi"] = "";
	$fieldLabelskaibutu["Japanese"]["kaitory_hi"] = "Kaitory Hi";
	$fieldToolTipskaibutu["Japanese"]["kaitory_hi"] = "";
	$placeHolderskaibutu["Japanese"]["kaitory_hi"] = "";
	$fieldLabelskaibutu["Japanese"]["REG_PHOTOGRAPHER"] = "REG PHOTOGRAPHER";
	$fieldToolTipskaibutu["Japanese"]["REG_PHOTOGRAPHER"] = "";
	$placeHolderskaibutu["Japanese"]["REG_PHOTOGRAPHER"] = "";
	$fieldLabelskaibutu["Japanese"]["REG_PACKINGS"] = "REG PACKINGS";
	$fieldToolTipskaibutu["Japanese"]["REG_PACKINGS"] = "";
	$placeHolderskaibutu["Japanese"]["REG_PACKINGS"] = "";
	$fieldLabelskaibutu["Japanese"]["REG_KAKOU_DATE"] = "REG KAKOU DATE";
	$fieldToolTipskaibutu["Japanese"]["REG_KAKOU_DATE"] = "";
	$placeHolderskaibutu["Japanese"]["REG_KAKOU_DATE"] = "";
	$fieldLabelskaibutu["Japanese"]["REG_KAKOU"] = "REG KAKOU";
	$fieldToolTipskaibutu["Japanese"]["REG_KAKOU"] = "";
	$placeHolderskaibutu["Japanese"]["REG_KAKOU"] = "";
	$fieldLabelskaibutu["Japanese"]["REG_EXHIBITOR"] = "REG EXHIBITOR";
	$fieldToolTipskaibutu["Japanese"]["REG_EXHIBITOR"] = "";
	$placeHolderskaibutu["Japanese"]["REG_EXHIBITOR"] = "";
	$fieldLabelskaibutu["Japanese"]["REG_PHOTOGRAPHER_DATE"] = "REG PHOTOGRAPHER DATE";
	$fieldToolTipskaibutu["Japanese"]["REG_PHOTOGRAPHER_DATE"] = "";
	$placeHolderskaibutu["Japanese"]["REG_PHOTOGRAPHER_DATE"] = "";
	$fieldLabelskaibutu["Japanese"]["DT_PACKING_DATE"] = "DT PACKING DATE";
	$fieldToolTipskaibutu["Japanese"]["DT_PACKING_DATE"] = "";
	$placeHolderskaibutu["Japanese"]["DT_PACKING_DATE"] = "";
	$fieldLabelskaibutu["Japanese"]["DT_UP_DATE"] = "DT UP DATE";
	$fieldToolTipskaibutu["Japanese"]["DT_UP_DATE"] = "";
	$placeHolderskaibutu["Japanese"]["DT_UP_DATE"] = "";
	$fieldLabelskaibutu["Japanese"]["AWAZU_DATE"] = "AWAZU DATE";
	$fieldToolTipskaibutu["Japanese"]["AWAZU_DATE"] = "";
	$placeHolderskaibutu["Japanese"]["AWAZU_DATE"] = "";
	$fieldLabelskaibutu["Japanese"]["AWAZU_NIN"] = "AWAZU NIN";
	$fieldToolTipskaibutu["Japanese"]["AWAZU_NIN"] = "";
	$placeHolderskaibutu["Japanese"]["AWAZU_NIN"] = "";
	$fieldLabelskaibutu["Japanese"]["sabun_date"] = "Sabun Date";
	$fieldToolTipskaibutu["Japanese"]["sabun_date"] = "";
	$placeHolderskaibutu["Japanese"]["sabun_date"] = "";
	$fieldLabelskaibutu["Japanese"]["browseid"] = "Browseid";
	$fieldToolTipskaibutu["Japanese"]["browseid"] = "";
	$placeHolderskaibutu["Japanese"]["browseid"] = "";
	$fieldLabelskaibutu["Japanese"]["browsenode"] = "Browsenode";
	$fieldToolTipskaibutu["Japanese"]["browsenode"] = "";
	$placeHolderskaibutu["Japanese"]["browsenode"] = "";
	$fieldLabelskaibutu["Japanese"]["gold_property"] = "金性";
	$fieldToolTipskaibutu["Japanese"]["gold_property"] = "";
	$placeHolderskaibutu["Japanese"]["gold_property"] = "";
	$fieldLabelskaibutu["Japanese"]["ichiba_title"] = "帳票用品名";
	$fieldToolTipskaibutu["Japanese"]["ichiba_title"] = "";
	$placeHolderskaibutu["Japanese"]["ichiba_title"] = "";
	$fieldLabelskaibutu["Japanese"]["Gram"] = "金性グラム";
	$fieldToolTipskaibutu["Japanese"]["Gram"] = "";
	$placeHolderskaibutu["Japanese"]["Gram"] = "";
	$fieldLabelskaibutu["Japanese"]["Parent_stone"] = "親石";
	$fieldToolTipskaibutu["Japanese"]["Parent_stone"] = "";
	$placeHolderskaibutu["Japanese"]["Parent_stone"] = "";
	$fieldLabelskaibutu["Japanese"]["Aside_stone"] = "脇石";
	$fieldToolTipskaibutu["Japanese"]["Aside_stone"] = "";
	$placeHolderskaibutu["Japanese"]["Aside_stone"] = "";
	$fieldLabelskaibutu["Japanese"]["Appraiser"] = "鑑定機関";
	$fieldToolTipskaibutu["Japanese"]["Appraiser"] = "";
	$placeHolderskaibutu["Japanese"]["Appraiser"] = "";
	$fieldLabelskaibutu["Japanese"]["Remarks"] = "宝飾備考";
	$fieldToolTipskaibutu["Japanese"]["Remarks"] = "";
	$placeHolderskaibutu["Japanese"]["Remarks"] = "";
	$fieldLabelskaibutu["Japanese"]["Destination_selling"] = "売り先";
	$fieldToolTipskaibutu["Japanese"]["Destination_selling"] = "";
	$placeHolderskaibutu["Japanese"]["Destination_selling"] = "";
	$fieldLabelskaibutu["Japanese"]["Finish"] = "仕上";
	$fieldToolTipskaibutu["Japanese"]["Finish"] = "";
	$placeHolderskaibutu["Japanese"]["Finish"] = "";
	$fieldLabelskaibutu["Japanese"]["Discrimination"] = "鑑別";
	$fieldToolTipskaibutu["Japanese"]["Discrimination"] = "";
	$placeHolderskaibutu["Japanese"]["Discrimination"] = "";
	$fieldLabelskaibutu["Japanese"]["accessories"] = "付属品";
	$fieldToolTipskaibutu["Japanese"]["accessories"] = "";
	$placeHolderskaibutu["Japanese"]["accessories"] = "";
	$fieldLabelskaibutu["Japanese"]["priority"] = "優先";
	$fieldToolTipskaibutu["Japanese"]["priority"] = "";
	$placeHolderskaibutu["Japanese"]["priority"] = "";
	$fieldLabelskaibutu["Japanese"]["A_storage"] = "A保管";
	$fieldToolTipskaibutu["Japanese"]["A_storage"] = "";
	$placeHolderskaibutu["Japanese"]["A_storage"] = "";
	$fieldLabelskaibutu["Japanese"]["price_per_gram"] = "金性単価";
	$fieldToolTipskaibutu["Japanese"]["price_per_gram"] = "";
	$placeHolderskaibutu["Japanese"]["price_per_gram"] = "";
	$fieldLabelskaibutu["Japanese"]["price_per_parent_stone"] = "親石単価";
	$fieldToolTipskaibutu["Japanese"]["price_per_parent_stone"] = "";
	$placeHolderskaibutu["Japanese"]["price_per_parent_stone"] = "";
	$fieldLabelskaibutu["Japanese"]["price_per_aside_stone"] = "脇石単価";
	$fieldToolTipskaibutu["Japanese"]["price_per_aside_stone"] = "";
	$placeHolderskaibutu["Japanese"]["price_per_aside_stone"] = "";
	$fieldLabelskaibutu["Japanese"]["price_secret"] = "買取額隠語";
	$fieldToolTipskaibutu["Japanese"]["price_secret"] = "";
	$placeHolderskaibutu["Japanese"]["price_secret"] = "";
	$fieldLabelskaibutu["Japanese"]["sales_price_secret"] = "販売額隠語";
	$fieldToolTipskaibutu["Japanese"]["sales_price_secret"] = "";
	$placeHolderskaibutu["Japanese"]["sales_price_secret"] = "";
	$fieldLabelskaibutu["Japanese"]["eq"] = "=";
	$fieldToolTipskaibutu["Japanese"]["eq"] = "";
	$placeHolderskaibutu["Japanese"]["eq"] = "";
	$fieldLabelskaibutu["Japanese"]["en"] = "円";
	$fieldToolTipskaibutu["Japanese"]["en"] = "";
	$placeHolderskaibutu["Japanese"]["en"] = "";
	$fieldLabelskaibutu["Japanese"]["line"] = "ライン";
	$fieldToolTipskaibutu["Japanese"]["line"] = "";
	$placeHolderskaibutu["Japanese"]["line"] = "";
	$fieldLabelskaibutu["Japanese"]["item_name"] = "アイテム名";
	$fieldToolTipskaibutu["Japanese"]["item_name"] = "";
	$placeHolderskaibutu["Japanese"]["item_name"] = "";
	$fieldLabelskaibutu["Japanese"]["handle"] = "柄";
	$fieldToolTipskaibutu["Japanese"]["handle"] = "";
	$placeHolderskaibutu["Japanese"]["handle"] = "";
	$fieldLabelskaibutu["Japanese"]["yahoo_color_id"] = "カラーid";
	$fieldToolTipskaibutu["Japanese"]["yahoo_color_id"] = "";
	$placeHolderskaibutu["Japanese"]["yahoo_color_id"] = "";
	$fieldLabelskaibutu["Japanese"]["raku_hyoujisaki_category4"] = "楽ジャン（店舗内）4";
	$fieldToolTipskaibutu["Japanese"]["raku_hyoujisaki_category4"] = "";
	$placeHolderskaibutu["Japanese"]["raku_hyoujisaki_category4"] = "";
	$fieldLabelskaibutu["Japanese"]["raku_hyoujisaki_category5"] = "楽ジャン（店舗内）5";
	$fieldToolTipskaibutu["Japanese"]["raku_hyoujisaki_category5"] = "";
	$placeHolderskaibutu["Japanese"]["raku_hyoujisaki_category5"] = "";
	$fieldLabelskaibutu["Japanese"]["raku_dir_1"] = "Raku Dir 1";
	$fieldToolTipskaibutu["Japanese"]["raku_dir_1"] = "";
	$placeHolderskaibutu["Japanese"]["raku_dir_1"] = "";
	$fieldLabelskaibutu["Japanese"]["raku_dir_2"] = "Raku Dir 2";
	$fieldToolTipskaibutu["Japanese"]["raku_dir_2"] = "";
	$placeHolderskaibutu["Japanese"]["raku_dir_2"] = "";
	$fieldLabelskaibutu["Japanese"]["raku_dir_3"] = "Raku Dir 3";
	$fieldToolTipskaibutu["Japanese"]["raku_dir_3"] = "";
	$placeHolderskaibutu["Japanese"]["raku_dir_3"] = "";
	$fieldLabelskaibutu["Japanese"]["raku_dir_4"] = "Raku Dir 4";
	$fieldToolTipskaibutu["Japanese"]["raku_dir_4"] = "";
	$placeHolderskaibutu["Japanese"]["raku_dir_4"] = "";
	$fieldLabelskaibutu["Japanese"]["raku_dir_5"] = "Raku Dir 5";
	$fieldToolTipskaibutu["Japanese"]["raku_dir_5"] = "";
	$placeHolderskaibutu["Japanese"]["raku_dir_5"] = "";
	$fieldLabelskaibutu["Japanese"]["raku_dir_result"] = "Raku Dir Result";
	$fieldToolTipskaibutu["Japanese"]["raku_dir_result"] = "";
	$placeHolderskaibutu["Japanese"]["raku_dir_result"] = "";
	$fieldLabelskaibutu["Japanese"]["raku_tag_result"] = "楽天タグID　Result";
	$fieldToolTipskaibutu["Japanese"]["raku_tag_result"] = "";
	$placeHolderskaibutu["Japanese"]["raku_tag_result"] = "";
	$fieldLabelskaibutu["Japanese"]["serial_number"] = "機番";
	$fieldToolTipskaibutu["Japanese"]["serial_number"] = "";
	$placeHolderskaibutu["Japanese"]["serial_number"] = "";
	$fieldLabelskaibutu["Japanese"]["Exhibition_Date"] = "Exhibition Date";
	$fieldToolTipskaibutu["Japanese"]["Exhibition_Date"] = "";
	$placeHolderskaibutu["Japanese"]["Exhibition_Date"] = "";
	$fieldLabelskaibutu["Japanese"]["search_keyword"] = "ストア内検索キーワード";
	$fieldToolTipskaibutu["Japanese"]["search_keyword"] = "";
	$placeHolderskaibutu["Japanese"]["search_keyword"] = "";
	$fieldLabelskaibutu["Japanese"]["stamp"] = "刻印";
	$fieldToolTipskaibutu["Japanese"]["stamp"] = "";
	$placeHolderskaibutu["Japanese"]["stamp"] = "";
	$fieldLabelskaibutu["Japanese"]["motif"] = "モチーフ";
	$fieldToolTipskaibutu["Japanese"]["motif"] = "";
	$placeHolderskaibutu["Japanese"]["motif"] = "";
	$fieldLabelskaibutu["Japanese"]["Setting"] = "セッティング";
	$fieldToolTipskaibutu["Japanese"]["Setting"] = "";
	$placeHolderskaibutu["Japanese"]["Setting"] = "";
	$fieldLabelskaibutu["Japanese"]["processing"] = "処理";
	$fieldToolTipskaibutu["Japanese"]["processing"] = "";
	$placeHolderskaibutu["Japanese"]["processing"] = "";
	$fieldLabelskaibutu["Japanese"]["Sleeve_Length"] = "袖丈";
	$fieldToolTipskaibutu["Japanese"]["Sleeve_Length"] = "";
	$placeHolderskaibutu["Japanese"]["Sleeve_Length"] = "";
	$fieldLabelskaibutu["Japanese"]["length"] = "丈";
	$fieldToolTipskaibutu["Japanese"]["length"] = "";
	$placeHolderskaibutu["Japanese"]["length"] = "";
	$fieldLabelskaibutu["Japanese"]["Ring_size"] = "リングサイズ";
	$fieldToolTipskaibutu["Japanese"]["Ring_size"] = "";
	$placeHolderskaibutu["Japanese"]["Ring_size"] = "";
	$fieldLabelskaibutu["Japanese"]["price_for_site"] = "Price For Site";
	$fieldToolTipskaibutu["Japanese"]["price_for_site"] = "";
	$placeHolderskaibutu["Japanese"]["price_for_site"] = "";
	$fieldLabelskaibutu["Japanese"]["yahoo_category_id"] = "Yahoo Category Id";
	$fieldToolTipskaibutu["Japanese"]["yahoo_category_id"] = "";
	$placeHolderskaibutu["Japanese"]["yahoo_category_id"] = "";
	$fieldLabelskaibutu["Japanese"]["Qty"] = "Qty";
	$fieldToolTipskaibutu["Japanese"]["Qty"] = "";
	$placeHolderskaibutu["Japanese"]["Qty"] = "";
	$fieldLabelskaibutu["Japanese"]["sales_period"] = "Sales Period";
	$fieldToolTipskaibutu["Japanese"]["sales_period"] = "";
	$placeHolderskaibutu["Japanese"]["sales_period"] = "";
	$fieldLabelskaibutu["Japanese"]["starting_price"] = "Starting Price";
	$fieldToolTipskaibutu["Japanese"]["starting_price"] = "";
	$placeHolderskaibutu["Japanese"]["starting_price"] = "";
	$fieldLabelskaibutu["Japanese"]["ecc_seq"] = "顧客番号";
	$fieldToolTipskaibutu["Japanese"]["ecc_seq"] = "";
	$placeHolderskaibutu["Japanese"]["ecc_seq"] = "";
	$fieldLabelskaibutu["Japanese"]["yahoo_junle"] = "ブランドジャンル";
	$fieldToolTipskaibutu["Japanese"]["yahoo_junle"] = "";
	$placeHolderskaibutu["Japanese"]["yahoo_junle"] = "";
	$fieldLabelskaibutu["Japanese"]["return_output_flag"] = "返却明細出力";
	$fieldToolTipskaibutu["Japanese"]["return_output_flag"] = "";
	$placeHolderskaibutu["Japanese"]["return_output_flag"] = "";
	$fieldLabelskaibutu["Japanese"]["shouhin_updated_at"] = "Shouhin.updated At";
	$fieldToolTipskaibutu["Japanese"]["shouhin_updated_at"] = "";
	$placeHolderskaibutu["Japanese"]["shouhin_updated_at"] = "";
	$fieldLabelskaibutu["Japanese"]["logo"] = "Logo";
	$fieldToolTipskaibutu["Japanese"]["logo"] = "";
	$placeHolderskaibutu["Japanese"]["logo"] = "";
	$fieldLabelskaibutu["Japanese"]["parts"] = "Parts";
	$fieldToolTipskaibutu["Japanese"]["parts"] = "";
	$placeHolderskaibutu["Japanese"]["parts"] = "";
	$fieldLabelskaibutu["Japanese"]["country_of_origin"] = "Country Of Origin";
	$fieldToolTipskaibutu["Japanese"]["country_of_origin"] = "";
	$placeHolderskaibutu["Japanese"]["country_of_origin"] = "";
	$fieldLabelskaibutu["Japanese"]["zipper"] = "Zipper";
	$fieldToolTipskaibutu["Japanese"]["zipper"] = "";
	$placeHolderskaibutu["Japanese"]["zipper"] = "";
	$fieldLabelskaibutu["Japanese"]["guarantee"] = "Guarantee";
	$fieldToolTipskaibutu["Japanese"]["guarantee"] = "";
	$placeHolderskaibutu["Japanese"]["guarantee"] = "";
	$fieldLabelskaibutu["Japanese"]["errors"] = "Errors";
	$fieldToolTipskaibutu["Japanese"]["errors"] = "";
	$placeHolderskaibutu["Japanese"]["errors"] = "";
	$fieldLabelskaibutu["Japanese"]["designer"] = "Designer";
	$fieldToolTipskaibutu["Japanese"]["designer"] = "";
	$placeHolderskaibutu["Japanese"]["designer"] = "";
	$fieldLabelskaibutu["Japanese"]["hahakai"] = "Hahakai";
	$fieldToolTipskaibutu["Japanese"]["hahakai"] = "";
	$placeHolderskaibutu["Japanese"]["hahakai"] = "";
	$fieldLabelskaibutu["Japanese"]["effect"] = "Effect";
	$fieldToolTipskaibutu["Japanese"]["effect"] = "";
	$placeHolderskaibutu["Japanese"]["effect"] = "";
	$fieldLabelskaibutu["Japanese"]["shape"] = "Shape";
	$fieldToolTipskaibutu["Japanese"]["shape"] = "";
	$placeHolderskaibutu["Japanese"]["shape"] = "";
	$fieldLabelskaibutu["Japanese"]["cutting_style"] = "Cutting Style";
	$fieldToolTipskaibutu["Japanese"]["cutting_style"] = "";
	$placeHolderskaibutu["Japanese"]["cutting_style"] = "";
	$fieldLabelskaibutu["Japanese"]["chain_type"] = "Chain Type";
	$fieldToolTipskaibutu["Japanese"]["chain_type"] = "";
	$placeHolderskaibutu["Japanese"]["chain_type"] = "";
	$fieldLabelskaibutu["Japanese"]["number_of_stones"] = "Number Of Stones";
	$fieldToolTipskaibutu["Japanese"]["number_of_stones"] = "";
	$placeHolderskaibutu["Japanese"]["number_of_stones"] = "";
	$fieldLabelskaibutu["Japanese"]["amount"] = "Amount";
	$fieldToolTipskaibutu["Japanese"]["amount"] = "";
	$placeHolderskaibutu["Japanese"]["amount"] = "";
	$fieldLabelskaibutu["Japanese"]["satei_error"] = "Satei Error";
	$fieldToolTipskaibutu["Japanese"]["satei_error"] = "";
	$placeHolderskaibutu["Japanese"]["satei_error"] = "";
	$fieldLabelskaibutu["Japanese"]["producing_area"] = "Producing Area";
	$fieldToolTipskaibutu["Japanese"]["producing_area"] = "";
	$placeHolderskaibutu["Japanese"]["producing_area"] = "";
	$fieldLabelskaibutu["Japanese"]["shape_supplement"] = "Shape Supplement";
	$fieldToolTipskaibutu["Japanese"]["shape_supplement"] = "";
	$placeHolderskaibutu["Japanese"]["shape_supplement"] = "";
	$fieldLabelskaibutu["Japanese"]["side_gem"] = "Side Gem";
	$fieldToolTipskaibutu["Japanese"]["side_gem"] = "";
	$placeHolderskaibutu["Japanese"]["side_gem"] = "";
	$fieldLabelskaibutu["Japanese"]["product_style"] = "Product Style";
	$fieldToolTipskaibutu["Japanese"]["product_style"] = "";
	$placeHolderskaibutu["Japanese"]["product_style"] = "";
	$fieldLabelskaibutu["Japanese"]["collar_neck_line"] = "Collar Neck Line";
	$fieldToolTipskaibutu["Japanese"]["collar_neck_line"] = "";
	$placeHolderskaibutu["Japanese"]["collar_neck_line"] = "";
	$fieldLabelskaibutu["Japanese"]["breast"] = "Breast";
	$fieldToolTipskaibutu["Japanese"]["breast"] = "";
	$placeHolderskaibutu["Japanese"]["breast"] = "";
	$fieldLabelskaibutu["Japanese"]["silhouette"] = "Silhouette";
	$fieldToolTipskaibutu["Japanese"]["silhouette"] = "";
	$placeHolderskaibutu["Japanese"]["silhouette"] = "";
	$fieldLabelskaibutu["Japanese"]["sleeve"] = "Sleeve";
	$fieldToolTipskaibutu["Japanese"]["sleeve"] = "";
	$placeHolderskaibutu["Japanese"]["sleeve"] = "";
	$fieldLabelskaibutu["Japanese"]["unit"] = "Unit";
	$fieldToolTipskaibutu["Japanese"]["unit"] = "";
	$placeHolderskaibutu["Japanese"]["unit"] = "";
	$fieldLabelskaibutu["Japanese"]["hall_mark"] = "Hall Mark";
	$fieldToolTipskaibutu["Japanese"]["hall_mark"] = "";
	$placeHolderskaibutu["Japanese"]["hall_mark"] = "";
	$fieldLabelskaibutu["Japanese"]["plate"] = "Plate";
	$fieldToolTipskaibutu["Japanese"]["plate"] = "";
	$placeHolderskaibutu["Japanese"]["plate"] = "";
	$fieldLabelskaibutu["Japanese"]["toe"] = "Toe";
	$fieldToolTipskaibutu["Japanese"]["toe"] = "";
	$placeHolderskaibutu["Japanese"]["toe"] = "";
	$fieldLabelskaibutu["Japanese"]["heel"] = "Heel";
	$fieldToolTipskaibutu["Japanese"]["heel"] = "";
	$placeHolderskaibutu["Japanese"]["heel"] = "";
	$fieldLabelskaibutu["Japanese"]["cloth"] = "Cloth";
	$fieldToolTipskaibutu["Japanese"]["cloth"] = "";
	$placeHolderskaibutu["Japanese"]["cloth"] = "";
	$fieldLabelskaibutu["Japanese"]["official_url"] = "Official Url";
	$fieldToolTipskaibutu["Japanese"]["official_url"] = "";
	$placeHolderskaibutu["Japanese"]["official_url"] = "";
	$fieldLabelskaibutu["Japanese"]["tentou_label_output_flag"] = "ST不変ラベル出力";
	$fieldToolTipskaibutu["Japanese"]["tentou_label_output_flag"] = "";
	$placeHolderskaibutu["Japanese"]["tentou_label_output_flag"] = "";
	if (count($fieldToolTipskaibutu["Japanese"]))
		$tdatakaibutu[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelskaibutu[""] = array();
	$fieldToolTipskaibutu[""] = array();
	$placeHolderskaibutu[""] = array();
	$pageTitleskaibutu[""] = array();
	if (count($fieldToolTipskaibutu[""]))
		$tdatakaibutu[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelskaibutu["English"] = array();
	$fieldToolTipskaibutu["English"] = array();
	$placeHolderskaibutu["English"] = array();
	$pageTitleskaibutu["English"] = array();
	if (count($fieldToolTipskaibutu["English"]))
		$tdatakaibutu[".isUseToolTips"] = true;
}


	$tdatakaibutu[".NCSearch"] = true;



$tdatakaibutu[".shortTableName"] = "kaibutu";
$tdatakaibutu[".nSecOptions"] = 0;
$tdatakaibutu[".recsPerRowPrint"] = 1;
$tdatakaibutu[".mainTableOwnerID"] = "";
$tdatakaibutu[".moveNext"] = 1;
$tdatakaibutu[".entityType"] = 1;

$tdatakaibutu[".strOriginalTableName"] = "shouhin";

	



$tdatakaibutu[".showAddInPopup"] = false;

$tdatakaibutu[".showEditInPopup"] = false;

$tdatakaibutu[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatakaibutu[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatakaibutu[".fieldsForRegister"] = array();

$tdatakaibutu[".listAjax"] = false;

	$tdatakaibutu[".audit"] = true;

	$tdatakaibutu[".locking"] = false;

$tdatakaibutu[".edit"] = true;
$tdatakaibutu[".afterEditAction"] = 1;
$tdatakaibutu[".closePopupAfterEdit"] = 1;
$tdatakaibutu[".afterEditActionDetTable"] = "";

$tdatakaibutu[".add"] = true;
$tdatakaibutu[".afterAddAction"] = 1;
$tdatakaibutu[".closePopupAfterAdd"] = 1;
$tdatakaibutu[".afterAddActionDetTable"] = "";

$tdatakaibutu[".list"] = true;

$tdatakaibutu[".inlineEdit"] = true;

$tdatakaibutu[".updateSelected"] = true;

$tdatakaibutu[".reorderRecordsByHeader"] = true;
$tdatakaibutu[".createSortByDropdown"] = true;
$tdatakaibutu[".strSortControlSettingsJSON"] = "";



$tdatakaibutu[".inlineAdd"] = true;
$tdatakaibutu[".copy"] = true;
$tdatakaibutu[".view"] = true;

$tdatakaibutu[".import"] = true;

$tdatakaibutu[".exportTo"] = true;

$tdatakaibutu[".printFriendly"] = true;

$tdatakaibutu[".delete"] = true;

$tdatakaibutu[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatakaibutu[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatakaibutu[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatakaibutu[".searchSaving"] = false;
//

$tdatakaibutu[".showSearchPanel"] = true;
		$tdatakaibutu[".flexibleSearch"] = true;

$tdatakaibutu[".isUseAjaxSuggest"] = true;

$tdatakaibutu[".rowHighlite"] = true;



																																																																																																																																			
					
					
																																																																																																																																																																																																																																																																																																																																																																																																																																																																									
																					
																																																																																																																																																																																																																																																																																		

$tdatakaibutu[".ajaxCodeSnippetAdded"] = false;

$tdatakaibutu[".buttonsAdded"] = true;

$tdatakaibutu[".addPageEvents"] = true;

// use timepicker for search panel
$tdatakaibutu[".isUseTimeForSearch"] = false;



$tdatakaibutu[".badgeColor"] = "daa520";


$tdatakaibutu[".allSearchFields"] = array();
$tdatakaibutu[".filterFields"] = array();
$tdatakaibutu[".requiredSearchFields"] = array();

$tdatakaibutu[".allSearchFields"][] = "shouhin.updated_at";
	$tdatakaibutu[".allSearchFields"][] = "tentou_label_output_flag";
	$tdatakaibutu[".allSearchFields"][] = "return_output_flag";
	$tdatakaibutu[".allSearchFields"][] = "product_num";
	$tdatakaibutu[".allSearchFields"][] = "category_id";
	$tdatakaibutu[".allSearchFields"][] = "sub_category_id1";
	$tdatakaibutu[".allSearchFields"][] = "yahoo_sex";
	$tdatakaibutu[".allSearchFields"][] = "yahoo_condition2";
	$tdatakaibutu[".allSearchFields"][] = "ecc_seq";
	$tdatakaibutu[".allSearchFields"][] = "status";
	$tdatakaibutu[".allSearchFields"][] = "satei_by";
	$tdatakaibutu[".allSearchFields"][] = "title";
	$tdatakaibutu[".allSearchFields"][] = "product_id";
	$tdatakaibutu[".allSearchFields"][] = "yahoo_sinaban";
	$tdatakaibutu[".allSearchFields"][] = "price";
	$tdatakaibutu[".allSearchFields"][] = "sales_price";
	$tdatakaibutu[".allSearchFields"][] = "description";
	$tdatakaibutu[".allSearchFields"][] = "raku_hyoujisaki_category";
	$tdatakaibutu[".allSearchFields"][] = "raku_hyoujisaki_category2";
	$tdatakaibutu[".allSearchFields"][] = "raku_hyoujisaki_category3";
	$tdatakaibutu[".allSearchFields"][] = "raku_hyoujisaki_category4";
	$tdatakaibutu[".allSearchFields"][] = "raku_hyoujisaki_category5";
	$tdatakaibutu[".allSearchFields"][] = "yahoo_kataban";
	$tdatakaibutu[".allSearchFields"][] = "yahoo_sozai";
	$tdatakaibutu[".allSearchFields"][] = "yahoo_color";
	$tdatakaibutu[".allSearchFields"][] = "yahoo_size";
	$tdatakaibutu[".allSearchFields"][] = "yahoo_condition1";
	$tdatakaibutu[".allSearchFields"][] = "remark";
	$tdatakaibutu[".allSearchFields"][] = "yahoo_fuzokuhin";
	$tdatakaibutu[".allSearchFields"][] = "yahoo_sankou_uwadai";
	$tdatakaibutu[".allSearchFields"][] = "season";
	$tdatakaibutu[".allSearchFields"][] = "yahoo_title";
	$tdatakaibutu[".allSearchFields"][] = "goods_title";
	$tdatakaibutu[".allSearchFields"][] = "raku_title";
	$tdatakaibutu[".allSearchFields"][] = "raku_tag_result";
	$tdatakaibutu[".allSearchFields"][] = "search_keyword";
	$tdatakaibutu[".allSearchFields"][] = "stamp";
	$tdatakaibutu[".allSearchFields"][] = "processing";
	$tdatakaibutu[".allSearchFields"][] = "Sleeve_Length";
	$tdatakaibutu[".allSearchFields"][] = "length";
	$tdatakaibutu[".allSearchFields"][] = "label_output_flag";
	$tdatakaibutu[".allSearchFields"][] = "Ring_size";
	$tdatakaibutu[".allSearchFields"][] = "comment";
	$tdatakaibutu[".allSearchFields"][] = "satei_hi";
	$tdatakaibutu[".allSearchFields"][] = "gold_property";
	$tdatakaibutu[".allSearchFields"][] = "ichiba_title";
	$tdatakaibutu[".allSearchFields"][] = "Gram";
	$tdatakaibutu[".allSearchFields"][] = "Parent_stone";
	$tdatakaibutu[".allSearchFields"][] = "Aside_stone";
	$tdatakaibutu[".allSearchFields"][] = "Appraiser";
	$tdatakaibutu[".allSearchFields"][] = "Remarks";
	$tdatakaibutu[".allSearchFields"][] = "Destination_selling";
	$tdatakaibutu[".allSearchFields"][] = "Finish";
	$tdatakaibutu[".allSearchFields"][] = "Discrimination";
	$tdatakaibutu[".allSearchFields"][] = "accessories";
	$tdatakaibutu[".allSearchFields"][] = "priority";
	$tdatakaibutu[".allSearchFields"][] = "A_storage";
	$tdatakaibutu[".allSearchFields"][] = "price_per_gram";
	$tdatakaibutu[".allSearchFields"][] = "price_per_parent_stone";
	$tdatakaibutu[".allSearchFields"][] = "price_per_aside_stone";
	$tdatakaibutu[".allSearchFields"][] = "price_secret";
	$tdatakaibutu[".allSearchFields"][] = "sales_price_secret";
	$tdatakaibutu[".allSearchFields"][] = "line";
	$tdatakaibutu[".allSearchFields"][] = "item_name";
	$tdatakaibutu[".allSearchFields"][] = "handle";
	$tdatakaibutu[".allSearchFields"][] = "yahoo_color_id";
	$tdatakaibutu[".allSearchFields"][] = "serial_number";
	$tdatakaibutu[".allSearchFields"][] = "motif";
	$tdatakaibutu[".allSearchFields"][] = "Setting";
	

$tdatakaibutu[".googleLikeFields"] = array();
$tdatakaibutu[".googleLikeFields"][] = "product_id";
$tdatakaibutu[".googleLikeFields"][] = "category_id";
$tdatakaibutu[".googleLikeFields"][] = "goods_title";
$tdatakaibutu[".googleLikeFields"][] = "title";
$tdatakaibutu[".googleLikeFields"][] = "sub_category_id1";
$tdatakaibutu[".googleLikeFields"][] = "price";
$tdatakaibutu[".googleLikeFields"][] = "remark";
$tdatakaibutu[".googleLikeFields"][] = "sales_price";
$tdatakaibutu[".googleLikeFields"][] = "description";
$tdatakaibutu[".googleLikeFields"][] = "status";
$tdatakaibutu[".googleLikeFields"][] = "product_num";
$tdatakaibutu[".googleLikeFields"][] = "yahoo_size";
$tdatakaibutu[".googleLikeFields"][] = "yahoo_title";
$tdatakaibutu[".googleLikeFields"][] = "yahoo_sankou_uwadai";
$tdatakaibutu[".googleLikeFields"][] = "yahoo_sozai";
$tdatakaibutu[".googleLikeFields"][] = "yahoo_color";
$tdatakaibutu[".googleLikeFields"][] = "yahoo_kataban";
$tdatakaibutu[".googleLikeFields"][] = "yahoo_condition1";
$tdatakaibutu[".googleLikeFields"][] = "yahoo_condition2";
$tdatakaibutu[".googleLikeFields"][] = "yahoo_fuzokuhin";
$tdatakaibutu[".googleLikeFields"][] = "yahoo_sinaban";
$tdatakaibutu[".googleLikeFields"][] = "yahoo_sex";
$tdatakaibutu[".googleLikeFields"][] = "raku_title";
$tdatakaibutu[".googleLikeFields"][] = "raku_hyoujisaki_category2";
$tdatakaibutu[".googleLikeFields"][] = "raku_hyoujisaki_category";
$tdatakaibutu[".googleLikeFields"][] = "raku_hyoujisaki_category3";
$tdatakaibutu[".googleLikeFields"][] = "label_output_flag";
$tdatakaibutu[".googleLikeFields"][] = "season";
$tdatakaibutu[".googleLikeFields"][] = "satei_by";
$tdatakaibutu[".googleLikeFields"][] = "comment";
$tdatakaibutu[".googleLikeFields"][] = "satei_hi";
$tdatakaibutu[".googleLikeFields"][] = "gold_property";
$tdatakaibutu[".googleLikeFields"][] = "ichiba_title";
$tdatakaibutu[".googleLikeFields"][] = "Gram";
$tdatakaibutu[".googleLikeFields"][] = "Parent_stone";
$tdatakaibutu[".googleLikeFields"][] = "Aside_stone";
$tdatakaibutu[".googleLikeFields"][] = "Appraiser";
$tdatakaibutu[".googleLikeFields"][] = "Remarks";
$tdatakaibutu[".googleLikeFields"][] = "Destination_selling";
$tdatakaibutu[".googleLikeFields"][] = "Finish";
$tdatakaibutu[".googleLikeFields"][] = "Discrimination";
$tdatakaibutu[".googleLikeFields"][] = "accessories";
$tdatakaibutu[".googleLikeFields"][] = "priority";
$tdatakaibutu[".googleLikeFields"][] = "A_storage";
$tdatakaibutu[".googleLikeFields"][] = "price_per_gram";
$tdatakaibutu[".googleLikeFields"][] = "price_per_parent_stone";
$tdatakaibutu[".googleLikeFields"][] = "price_per_aside_stone";
$tdatakaibutu[".googleLikeFields"][] = "price_secret";
$tdatakaibutu[".googleLikeFields"][] = "sales_price_secret";
$tdatakaibutu[".googleLikeFields"][] = "line";
$tdatakaibutu[".googleLikeFields"][] = "item_name";
$tdatakaibutu[".googleLikeFields"][] = "handle";
$tdatakaibutu[".googleLikeFields"][] = "yahoo_color_id";
$tdatakaibutu[".googleLikeFields"][] = "raku_hyoujisaki_category4";
$tdatakaibutu[".googleLikeFields"][] = "raku_hyoujisaki_category5";
$tdatakaibutu[".googleLikeFields"][] = "raku_tag_result";
$tdatakaibutu[".googleLikeFields"][] = "serial_number";
$tdatakaibutu[".googleLikeFields"][] = "search_keyword";
$tdatakaibutu[".googleLikeFields"][] = "stamp";
$tdatakaibutu[".googleLikeFields"][] = "motif";
$tdatakaibutu[".googleLikeFields"][] = "Setting";
$tdatakaibutu[".googleLikeFields"][] = "processing";
$tdatakaibutu[".googleLikeFields"][] = "Sleeve_Length";
$tdatakaibutu[".googleLikeFields"][] = "length";
$tdatakaibutu[".googleLikeFields"][] = "Ring_size";
$tdatakaibutu[".googleLikeFields"][] = "ecc_seq";
$tdatakaibutu[".googleLikeFields"][] = "yahoo_junle";
$tdatakaibutu[".googleLikeFields"][] = "logo";
$tdatakaibutu[".googleLikeFields"][] = "parts";
$tdatakaibutu[".googleLikeFields"][] = "country_of_origin";
$tdatakaibutu[".googleLikeFields"][] = "zipper";
$tdatakaibutu[".googleLikeFields"][] = "guarantee";
$tdatakaibutu[".googleLikeFields"][] = "errors";
$tdatakaibutu[".googleLikeFields"][] = "designer";
$tdatakaibutu[".googleLikeFields"][] = "hahakai";
$tdatakaibutu[".googleLikeFields"][] = "effect";
$tdatakaibutu[".googleLikeFields"][] = "shape";
$tdatakaibutu[".googleLikeFields"][] = "cutting_style";
$tdatakaibutu[".googleLikeFields"][] = "chain_type";
$tdatakaibutu[".googleLikeFields"][] = "number_of_stones";
$tdatakaibutu[".googleLikeFields"][] = "amount";
$tdatakaibutu[".googleLikeFields"][] = "satei_error";
$tdatakaibutu[".googleLikeFields"][] = "producing_area";
$tdatakaibutu[".googleLikeFields"][] = "shape_supplement";
$tdatakaibutu[".googleLikeFields"][] = "side_gem";
$tdatakaibutu[".googleLikeFields"][] = "product_style";
$tdatakaibutu[".googleLikeFields"][] = "collar_neck_line";
$tdatakaibutu[".googleLikeFields"][] = "breast";
$tdatakaibutu[".googleLikeFields"][] = "silhouette";
$tdatakaibutu[".googleLikeFields"][] = "sleeve";
$tdatakaibutu[".googleLikeFields"][] = "unit";
$tdatakaibutu[".googleLikeFields"][] = "hall_mark";
$tdatakaibutu[".googleLikeFields"][] = "plate";
$tdatakaibutu[".googleLikeFields"][] = "toe";
$tdatakaibutu[".googleLikeFields"][] = "heel";
$tdatakaibutu[".googleLikeFields"][] = "cloth";
$tdatakaibutu[".googleLikeFields"][] = "official_url";
$tdatakaibutu[".googleLikeFields"][] = "return_output_flag";
$tdatakaibutu[".googleLikeFields"][] = "shouhin.updated_at";
$tdatakaibutu[".googleLikeFields"][] = "tentou_label_output_flag";

$tdatakaibutu[".panelSearchFields"] = array();
$tdatakaibutu[".searchPanelOptions"] = array();
$tdatakaibutu[".panelSearchFields"][] = "product_num";
	$tdatakaibutu[".panelSearchFields"][] = "category_id";
	$tdatakaibutu[".panelSearchFields"][] = "sub_category_id1";
	$tdatakaibutu[".panelSearchFields"][] = "yahoo_sex";
	$tdatakaibutu[".panelSearchFields"][] = "yahoo_condition2";
	
$tdatakaibutu[".advSearchFields"] = array();
$tdatakaibutu[".advSearchFields"][] = "shouhin.updated_at";
$tdatakaibutu[".advSearchFields"][] = "tentou_label_output_flag";
$tdatakaibutu[".advSearchFields"][] = "return_output_flag";
$tdatakaibutu[".advSearchFields"][] = "product_num";
$tdatakaibutu[".advSearchFields"][] = "category_id";
$tdatakaibutu[".advSearchFields"][] = "sub_category_id1";
$tdatakaibutu[".advSearchFields"][] = "yahoo_sex";
$tdatakaibutu[".advSearchFields"][] = "yahoo_condition2";
$tdatakaibutu[".advSearchFields"][] = "ecc_seq";
$tdatakaibutu[".advSearchFields"][] = "status";
$tdatakaibutu[".advSearchFields"][] = "satei_by";
$tdatakaibutu[".advSearchFields"][] = "title";
$tdatakaibutu[".advSearchFields"][] = "product_id";
$tdatakaibutu[".advSearchFields"][] = "yahoo_sinaban";
$tdatakaibutu[".advSearchFields"][] = "price";
$tdatakaibutu[".advSearchFields"][] = "sales_price";
$tdatakaibutu[".advSearchFields"][] = "description";
$tdatakaibutu[".advSearchFields"][] = "raku_hyoujisaki_category";
$tdatakaibutu[".advSearchFields"][] = "raku_hyoujisaki_category2";
$tdatakaibutu[".advSearchFields"][] = "raku_hyoujisaki_category3";
$tdatakaibutu[".advSearchFields"][] = "raku_hyoujisaki_category4";
$tdatakaibutu[".advSearchFields"][] = "raku_hyoujisaki_category5";
$tdatakaibutu[".advSearchFields"][] = "yahoo_kataban";
$tdatakaibutu[".advSearchFields"][] = "yahoo_sozai";
$tdatakaibutu[".advSearchFields"][] = "yahoo_color";
$tdatakaibutu[".advSearchFields"][] = "yahoo_size";
$tdatakaibutu[".advSearchFields"][] = "yahoo_condition1";
$tdatakaibutu[".advSearchFields"][] = "remark";
$tdatakaibutu[".advSearchFields"][] = "yahoo_fuzokuhin";
$tdatakaibutu[".advSearchFields"][] = "yahoo_sankou_uwadai";
$tdatakaibutu[".advSearchFields"][] = "season";
$tdatakaibutu[".advSearchFields"][] = "yahoo_title";
$tdatakaibutu[".advSearchFields"][] = "goods_title";
$tdatakaibutu[".advSearchFields"][] = "raku_title";
$tdatakaibutu[".advSearchFields"][] = "raku_tag_result";
$tdatakaibutu[".advSearchFields"][] = "search_keyword";
$tdatakaibutu[".advSearchFields"][] = "stamp";
$tdatakaibutu[".advSearchFields"][] = "processing";
$tdatakaibutu[".advSearchFields"][] = "Sleeve_Length";
$tdatakaibutu[".advSearchFields"][] = "length";
$tdatakaibutu[".advSearchFields"][] = "label_output_flag";
$tdatakaibutu[".advSearchFields"][] = "Ring_size";
$tdatakaibutu[".advSearchFields"][] = "comment";
$tdatakaibutu[".advSearchFields"][] = "satei_hi";
$tdatakaibutu[".advSearchFields"][] = "gold_property";
$tdatakaibutu[".advSearchFields"][] = "ichiba_title";
$tdatakaibutu[".advSearchFields"][] = "Gram";
$tdatakaibutu[".advSearchFields"][] = "Parent_stone";
$tdatakaibutu[".advSearchFields"][] = "Aside_stone";
$tdatakaibutu[".advSearchFields"][] = "Appraiser";
$tdatakaibutu[".advSearchFields"][] = "Remarks";
$tdatakaibutu[".advSearchFields"][] = "Destination_selling";
$tdatakaibutu[".advSearchFields"][] = "Finish";
$tdatakaibutu[".advSearchFields"][] = "Discrimination";
$tdatakaibutu[".advSearchFields"][] = "accessories";
$tdatakaibutu[".advSearchFields"][] = "priority";
$tdatakaibutu[".advSearchFields"][] = "A_storage";
$tdatakaibutu[".advSearchFields"][] = "price_per_gram";
$tdatakaibutu[".advSearchFields"][] = "price_per_parent_stone";
$tdatakaibutu[".advSearchFields"][] = "price_per_aside_stone";
$tdatakaibutu[".advSearchFields"][] = "price_secret";
$tdatakaibutu[".advSearchFields"][] = "sales_price_secret";
$tdatakaibutu[".advSearchFields"][] = "line";
$tdatakaibutu[".advSearchFields"][] = "item_name";
$tdatakaibutu[".advSearchFields"][] = "handle";
$tdatakaibutu[".advSearchFields"][] = "yahoo_color_id";
$tdatakaibutu[".advSearchFields"][] = "serial_number";
$tdatakaibutu[".advSearchFields"][] = "motif";
$tdatakaibutu[".advSearchFields"][] = "Setting";

$tdatakaibutu[".tableType"] = "list";

$tdatakaibutu[".printerPageOrientation"] = 0;
$tdatakaibutu[".nPrinterPageScale"] = 100;

$tdatakaibutu[".nPrinterSplitRecords"] = 40;

$tdatakaibutu[".nPrinterPDFSplitRecords"] = 40;



$tdatakaibutu[".geocodingEnabled"] = false;





$tdatakaibutu[".listGridLayout"] = 3;





// view page pdf
$tdatakaibutu[".isViewPagePDF"] = true;
$tdatakaibutu[".nViewPagePDFScale"] = 100;

// print page pdf
$tdatakaibutu[".isPrinterPagePDF"] = true;
$tdatakaibutu[".nPrinterPagePDFScale"] = 100;


$tdatakaibutu[".pageSize"] = 20;

$tdatakaibutu[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `shouhin`.`product_id` DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatakaibutu[".strOrderBy"] = $tstrOrderBy;

$tdatakaibutu[".orderindexes"] = array();
$tdatakaibutu[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "`shouhin`.`product_id`");

$tdatakaibutu[".sqlHead"] = "SELECT `shouhin`.`product_id`,  `shouhin`.`category_id`,  `shouhin`.`goods_title`,  `shouhin`.`title`,  `shouhin`.`sub_category_id1`,  `shouhin`.`ecc_id`,  `shouhin`.`price`,  `shouhin`.`yahoo`,  `shouhin`.`remark`,  `shouhin`.`sales_price`,  `shouhin`.`description`,  `shouhin`.`status`,  `shouhin`.`product_num`,  `shouhin`.`yahoo_size`,  `shouhin`.`yahoo_title`,  `shouhin`.`yahoo_sankou_uwadai`,  `shouhin`.`yahoo_sozai`,  `shouhin`.`yahoo_color`,  `shouhin`.`yahoo_kataban`,  `shouhin`.`yahoo_condition1`,  `shouhin`.`yahoo_condition2`,  `shouhin`.`yahoo_fuzokuhin`,  `shouhin`.`yahoo_sinaban`,  `shouhin`.`yahoo_saisun_sha`,  `shouhin`.`yahoo_sex`,  `shouhin`.`box_id`,  `shouhin`.`nyuukin_price`,  `shouhin`.`updated_by`,  `shouhin`.`raku_title`,  `shouhin`.`raku_hyoujisaki_category2`,  `shouhin`.`raku_hyoujisaki_category`,  `shouhin`.`raku_hyoujisaki_category3`,  `shouhin`.`timesta`,  `shouhin`.`saisun_start`,  `shouhin`.`saisun_end`,  `shouhin`.`label_output_flag`,  `shouhin`.`season`,  `shouhin`.`kanryou_henbi`,  `shouhin`.`box_sort`,  `shouhin`.`satei_by`,  `shouhin`.`kaitori_by`,  `shouhin`.`comment`,  `shouhin`.`satei_hi`,  `shouhin`.`kaitory_hi`,  `shouhin`.`REG_PHOTOGRAPHER`,  `shouhin`.`REG_PACKINGS`,  `shouhin`.`REG_KAKOU_DATE`,  `shouhin`.`REG_KAKOU`,  `shouhin`.`REG_EXHIBITOR`,  `shouhin`.`REG_PHOTOGRAPHER_DATE`,  `shouhin`.`DT_PACKING_DATE`,  `shouhin`.`DT_UP_DATE`,  `shouhin`.`AWAZU_DATE`,  `shouhin`.`AWAZU_NIN`,  `shouhin`.`sabun_date`,  `shouhin`.`browseid`,  `shouhin`.`browsenode`,  `shouhin`.`gold_property`,  `shouhin`.`ichiba_title`,  `shouhin`.`Gram`,  `shouhin`.`Parent_stone`,  `shouhin`.`Aside_stone`,  `shouhin`.`Appraiser`,  `shouhin`.`Remarks`,  `shouhin`.`Destination_selling`,  `shouhin`.`Finish`,  `shouhin`.`Discrimination`,  `shouhin`.`accessories`,  `shouhin`.`priority`,  `shouhin`.`A_storage`,  `shouhin`.`price_per_gram`,  `shouhin`.`price_per_parent_stone`,  `shouhin`.`price_per_aside_stone`,  `shouhin`.`price_secret`,  `shouhin`.`sales_price_secret`,  `shouhin`.`eq`,  `shouhin`.`en`,  `shouhin`.`line`,  `shouhin`.`item_name`,  `shouhin`.`handle`,  `shouhin`.`yahoo_color_id`,  `shouhin`.`raku_hyoujisaki_category4`,  `shouhin`.`raku_hyoujisaki_category5`,  `shouhin`.`raku_dir_1`,  `shouhin`.`raku_dir_2`,  `shouhin`.`raku_dir_3`,  `shouhin`.`raku_dir_4`,  `shouhin`.`raku_dir_5`,  `shouhin`.`raku_dir_result`,  `shouhin`.`raku_tag_result`,  `shouhin`.`serial_number`,  `shouhin`.`Exhibition_Date`,  `shouhin`.`search_keyword`,  `shouhin`.`stamp`,  `shouhin`.`motif`,  `shouhin`.`Setting`,  `shouhin`.`processing`,  `shouhin`.`Sleeve_Length`,  `shouhin`.`length`,  `shouhin`.`Ring_size`,  `shouhin`.`price_for_site`,  `shouhin`.`yahoo_category_id`,  `shouhin`.`Qty`,  `shouhin`.`sales_period`,  `shouhin`.`starting_price`,  `Eoc`.`ecc_seq`,  `shouhin`.`yahoo_junle`,  `shouhin`.`logo`,  `shouhin`.`parts`,  `shouhin`.`country_of_origin`,  `shouhin`.`zipper`,  `shouhin`.`guarantee`,  `shouhin`.`errors`,  `shouhin`.`designer`,  `shouhin`.`hahakai`,  `shouhin`.`effect`,  `shouhin`.`shape`,  `shouhin`.`cutting_style`,  `shouhin`.`chain_type`,  `shouhin`.`number_of_stones`,  `shouhin`.`amount`,  `shouhin`.`satei_error`,  `shouhin`.`producing_area`,  `shouhin`.`shape_supplement`,  `shouhin`.`side_gem`,  `shouhin`.`product_style`,  `shouhin`.`collar_neck_line`,  `shouhin`.`breast`,  `shouhin`.`silhouette`,  `shouhin`.`sleeve`,  `shouhin`.`unit`,  `shouhin`.`hall_mark`,  `shouhin`.`plate`,  `shouhin`.`toe`,  `shouhin`.`heel`,  `shouhin`.`cloth`,  `shouhin`.`official_url`,  `shouhin`.`return_output_flag`,  `shouhin`.`updated_at` AS `shouhin.updated_at`,  `shouhin`.`tentou_label_output_flag`";
$tdatakaibutu[".sqlFrom"] = "FROM `shouhin`  LEFT OUTER JOIN `Eoc` ON `shouhin`.`ecc_id` = `Eoc`.`ecc_id`";
$tdatakaibutu[".sqlWhereExpr"] = "";
$tdatakaibutu[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatakaibutu[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatakaibutu[".arrGroupsPerPage"] = $arrGPP;

$tdatakaibutu[".highlightSearchResults"] = true;

$tableKeyskaibutu = array();
$tableKeyskaibutu[] = "product_id";
$tdatakaibutu[".Keys"] = $tableKeyskaibutu;

$tdatakaibutu[".listFields"] = array();
$tdatakaibutu[".listFields"][] = "shouhin.updated_at";
$tdatakaibutu[".listFields"][] = "return_output_flag";
$tdatakaibutu[".listFields"][] = "label_output_flag";
$tdatakaibutu[".listFields"][] = "tentou_label_output_flag";
$tdatakaibutu[".listFields"][] = "status";
$tdatakaibutu[".listFields"][] = "product_id";
$tdatakaibutu[".listFields"][] = "product_num";
$tdatakaibutu[".listFields"][] = "category_id";
$tdatakaibutu[".listFields"][] = "sub_category_id1";
$tdatakaibutu[".listFields"][] = "yahoo_sex";
$tdatakaibutu[".listFields"][] = "yahoo_condition2";
$tdatakaibutu[".listFields"][] = "line";
$tdatakaibutu[".listFields"][] = "item_name";
$tdatakaibutu[".listFields"][] = "yahoo_sozai";
$tdatakaibutu[".listFields"][] = "motif";
$tdatakaibutu[".listFields"][] = "Setting";
$tdatakaibutu[".listFields"][] = "processing";
$tdatakaibutu[".listFields"][] = "Sleeve_Length";
$tdatakaibutu[".listFields"][] = "length";
$tdatakaibutu[".listFields"][] = "ichiba_title";
$tdatakaibutu[".listFields"][] = "gold_property";
$tdatakaibutu[".listFields"][] = "Gram";
$tdatakaibutu[".listFields"][] = "price_per_gram";
$tdatakaibutu[".listFields"][] = "Parent_stone";
$tdatakaibutu[".listFields"][] = "price_per_parent_stone";
$tdatakaibutu[".listFields"][] = "Aside_stone";
$tdatakaibutu[".listFields"][] = "price_per_aside_stone";
$tdatakaibutu[".listFields"][] = "Appraiser";
$tdatakaibutu[".listFields"][] = "Ring_size";
$tdatakaibutu[".listFields"][] = "Remarks";
$tdatakaibutu[".listFields"][] = "title";
$tdatakaibutu[".listFields"][] = "yahoo_color";
$tdatakaibutu[".listFields"][] = "yahoo_color_id";
$tdatakaibutu[".listFields"][] = "yahoo_kataban";
$tdatakaibutu[".listFields"][] = "handle";
$tdatakaibutu[".listFields"][] = "serial_number";
$tdatakaibutu[".listFields"][] = "stamp";
$tdatakaibutu[".listFields"][] = "price";
$tdatakaibutu[".listFields"][] = "nyuukin_price";
$tdatakaibutu[".listFields"][] = "comment";
$tdatakaibutu[".listFields"][] = "sales_price";
$tdatakaibutu[".listFields"][] = "yahoo_sankou_uwadai";
$tdatakaibutu[".listFields"][] = "description";
$tdatakaibutu[".listFields"][] = "Destination_selling";
$tdatakaibutu[".listFields"][] = "Finish";
$tdatakaibutu[".listFields"][] = "Discrimination";
$tdatakaibutu[".listFields"][] = "accessories";
$tdatakaibutu[".listFields"][] = "priority";
$tdatakaibutu[".listFields"][] = "A_storage";
$tdatakaibutu[".listFields"][] = "satei_by";
$tdatakaibutu[".listFields"][] = "satei_hi";
$tdatakaibutu[".listFields"][] = "price_secret";
$tdatakaibutu[".listFields"][] = "sales_price_secret";

$tdatakaibutu[".hideMobileList"] = array();


$tdatakaibutu[".viewFields"] = array();
$tdatakaibutu[".viewFields"][] = "shouhin.updated_at";
$tdatakaibutu[".viewFields"][] = "tentou_label_output_flag";
$tdatakaibutu[".viewFields"][] = "ecc_seq";
$tdatakaibutu[".viewFields"][] = "return_output_flag";
$tdatakaibutu[".viewFields"][] = "status";
$tdatakaibutu[".viewFields"][] = "satei_by";
$tdatakaibutu[".viewFields"][] = "category_id";
$tdatakaibutu[".viewFields"][] = "title";
$tdatakaibutu[".viewFields"][] = "sub_category_id1";
$tdatakaibutu[".viewFields"][] = "product_id";
$tdatakaibutu[".viewFields"][] = "yahoo_sinaban";
$tdatakaibutu[".viewFields"][] = "price";
$tdatakaibutu[".viewFields"][] = "sales_price";
$tdatakaibutu[".viewFields"][] = "yahoo_sex";
$tdatakaibutu[".viewFields"][] = "product_num";
$tdatakaibutu[".viewFields"][] = "description";
$tdatakaibutu[".viewFields"][] = "raku_hyoujisaki_category";
$tdatakaibutu[".viewFields"][] = "raku_hyoujisaki_category2";
$tdatakaibutu[".viewFields"][] = "raku_hyoujisaki_category3";
$tdatakaibutu[".viewFields"][] = "raku_hyoujisaki_category4";
$tdatakaibutu[".viewFields"][] = "raku_hyoujisaki_category5";
$tdatakaibutu[".viewFields"][] = "yahoo_kataban";
$tdatakaibutu[".viewFields"][] = "yahoo_sozai";
$tdatakaibutu[".viewFields"][] = "yahoo_color";
$tdatakaibutu[".viewFields"][] = "yahoo_size";
$tdatakaibutu[".viewFields"][] = "yahoo_condition1";
$tdatakaibutu[".viewFields"][] = "yahoo_condition2";
$tdatakaibutu[".viewFields"][] = "remark";
$tdatakaibutu[".viewFields"][] = "yahoo_fuzokuhin";
$tdatakaibutu[".viewFields"][] = "yahoo_sankou_uwadai";
$tdatakaibutu[".viewFields"][] = "season";
$tdatakaibutu[".viewFields"][] = "yahoo_title";
$tdatakaibutu[".viewFields"][] = "goods_title";
$tdatakaibutu[".viewFields"][] = "raku_title";
$tdatakaibutu[".viewFields"][] = "raku_tag_result";
$tdatakaibutu[".viewFields"][] = "search_keyword";
$tdatakaibutu[".viewFields"][] = "stamp";
$tdatakaibutu[".viewFields"][] = "processing";
$tdatakaibutu[".viewFields"][] = "Sleeve_Length";
$tdatakaibutu[".viewFields"][] = "length";
$tdatakaibutu[".viewFields"][] = "label_output_flag";
$tdatakaibutu[".viewFields"][] = "Ring_size";
$tdatakaibutu[".viewFields"][] = "comment";
$tdatakaibutu[".viewFields"][] = "satei_hi";
$tdatakaibutu[".viewFields"][] = "gold_property";
$tdatakaibutu[".viewFields"][] = "ichiba_title";
$tdatakaibutu[".viewFields"][] = "Gram";
$tdatakaibutu[".viewFields"][] = "Parent_stone";
$tdatakaibutu[".viewFields"][] = "Aside_stone";
$tdatakaibutu[".viewFields"][] = "Appraiser";
$tdatakaibutu[".viewFields"][] = "Remarks";
$tdatakaibutu[".viewFields"][] = "Destination_selling";
$tdatakaibutu[".viewFields"][] = "Finish";
$tdatakaibutu[".viewFields"][] = "Discrimination";
$tdatakaibutu[".viewFields"][] = "accessories";
$tdatakaibutu[".viewFields"][] = "priority";
$tdatakaibutu[".viewFields"][] = "A_storage";
$tdatakaibutu[".viewFields"][] = "price_per_gram";
$tdatakaibutu[".viewFields"][] = "price_per_parent_stone";
$tdatakaibutu[".viewFields"][] = "price_per_aside_stone";
$tdatakaibutu[".viewFields"][] = "price_secret";
$tdatakaibutu[".viewFields"][] = "sales_price_secret";
$tdatakaibutu[".viewFields"][] = "line";
$tdatakaibutu[".viewFields"][] = "item_name";
$tdatakaibutu[".viewFields"][] = "handle";
$tdatakaibutu[".viewFields"][] = "yahoo_color_id";
$tdatakaibutu[".viewFields"][] = "serial_number";
$tdatakaibutu[".viewFields"][] = "motif";
$tdatakaibutu[".viewFields"][] = "Setting";

$tdatakaibutu[".addFields"] = array();
$tdatakaibutu[".addFields"][] = "tentou_label_output_flag";
$tdatakaibutu[".addFields"][] = "return_output_flag";
$tdatakaibutu[".addFields"][] = "status";
$tdatakaibutu[".addFields"][] = "satei_by";
$tdatakaibutu[".addFields"][] = "category_id";
$tdatakaibutu[".addFields"][] = "title";
$tdatakaibutu[".addFields"][] = "sub_category_id1";
$tdatakaibutu[".addFields"][] = "yahoo_sinaban";
$tdatakaibutu[".addFields"][] = "price";
$tdatakaibutu[".addFields"][] = "sales_price";
$tdatakaibutu[".addFields"][] = "yahoo_sex";
$tdatakaibutu[".addFields"][] = "product_num";
$tdatakaibutu[".addFields"][] = "description";
$tdatakaibutu[".addFields"][] = "raku_hyoujisaki_category";
$tdatakaibutu[".addFields"][] = "raku_hyoujisaki_category2";
$tdatakaibutu[".addFields"][] = "raku_hyoujisaki_category3";
$tdatakaibutu[".addFields"][] = "raku_hyoujisaki_category4";
$tdatakaibutu[".addFields"][] = "raku_hyoujisaki_category5";
$tdatakaibutu[".addFields"][] = "yahoo_kataban";
$tdatakaibutu[".addFields"][] = "yahoo_sozai";
$tdatakaibutu[".addFields"][] = "yahoo_color";
$tdatakaibutu[".addFields"][] = "yahoo_size";
$tdatakaibutu[".addFields"][] = "yahoo_condition1";
$tdatakaibutu[".addFields"][] = "yahoo_condition2";
$tdatakaibutu[".addFields"][] = "remark";
$tdatakaibutu[".addFields"][] = "yahoo_fuzokuhin";
$tdatakaibutu[".addFields"][] = "yahoo_sankou_uwadai";
$tdatakaibutu[".addFields"][] = "season";
$tdatakaibutu[".addFields"][] = "yahoo_title";
$tdatakaibutu[".addFields"][] = "goods_title";
$tdatakaibutu[".addFields"][] = "raku_title";
$tdatakaibutu[".addFields"][] = "raku_tag_result";
$tdatakaibutu[".addFields"][] = "search_keyword";
$tdatakaibutu[".addFields"][] = "stamp";
$tdatakaibutu[".addFields"][] = "processing";
$tdatakaibutu[".addFields"][] = "Sleeve_Length";
$tdatakaibutu[".addFields"][] = "length";
$tdatakaibutu[".addFields"][] = "label_output_flag";
$tdatakaibutu[".addFields"][] = "Ring_size";
$tdatakaibutu[".addFields"][] = "comment";
$tdatakaibutu[".addFields"][] = "satei_hi";
$tdatakaibutu[".addFields"][] = "gold_property";
$tdatakaibutu[".addFields"][] = "ichiba_title";
$tdatakaibutu[".addFields"][] = "Gram";
$tdatakaibutu[".addFields"][] = "Parent_stone";
$tdatakaibutu[".addFields"][] = "Aside_stone";
$tdatakaibutu[".addFields"][] = "Appraiser";
$tdatakaibutu[".addFields"][] = "Remarks";
$tdatakaibutu[".addFields"][] = "Destination_selling";
$tdatakaibutu[".addFields"][] = "Finish";
$tdatakaibutu[".addFields"][] = "Discrimination";
$tdatakaibutu[".addFields"][] = "accessories";
$tdatakaibutu[".addFields"][] = "priority";
$tdatakaibutu[".addFields"][] = "A_storage";
$tdatakaibutu[".addFields"][] = "price_per_gram";
$tdatakaibutu[".addFields"][] = "price_per_parent_stone";
$tdatakaibutu[".addFields"][] = "price_per_aside_stone";
$tdatakaibutu[".addFields"][] = "price_secret";
$tdatakaibutu[".addFields"][] = "sales_price_secret";
$tdatakaibutu[".addFields"][] = "line";
$tdatakaibutu[".addFields"][] = "item_name";
$tdatakaibutu[".addFields"][] = "handle";
$tdatakaibutu[".addFields"][] = "yahoo_color_id";
$tdatakaibutu[".addFields"][] = "serial_number";
$tdatakaibutu[".addFields"][] = "motif";
$tdatakaibutu[".addFields"][] = "Setting";

$tdatakaibutu[".masterListFields"] = array();
$tdatakaibutu[".masterListFields"][] = "ecc_seq";
$tdatakaibutu[".masterListFields"][] = "yahoo_junle";
$tdatakaibutu[".masterListFields"][] = "logo";
$tdatakaibutu[".masterListFields"][] = "parts";
$tdatakaibutu[".masterListFields"][] = "country_of_origin";
$tdatakaibutu[".masterListFields"][] = "zipper";
$tdatakaibutu[".masterListFields"][] = "guarantee";
$tdatakaibutu[".masterListFields"][] = "errors";
$tdatakaibutu[".masterListFields"][] = "designer";
$tdatakaibutu[".masterListFields"][] = "hahakai";
$tdatakaibutu[".masterListFields"][] = "effect";
$tdatakaibutu[".masterListFields"][] = "shape";
$tdatakaibutu[".masterListFields"][] = "cutting_style";
$tdatakaibutu[".masterListFields"][] = "chain_type";
$tdatakaibutu[".masterListFields"][] = "number_of_stones";
$tdatakaibutu[".masterListFields"][] = "amount";
$tdatakaibutu[".masterListFields"][] = "satei_error";
$tdatakaibutu[".masterListFields"][] = "producing_area";
$tdatakaibutu[".masterListFields"][] = "shape_supplement";
$tdatakaibutu[".masterListFields"][] = "side_gem";
$tdatakaibutu[".masterListFields"][] = "product_style";
$tdatakaibutu[".masterListFields"][] = "collar_neck_line";
$tdatakaibutu[".masterListFields"][] = "breast";
$tdatakaibutu[".masterListFields"][] = "silhouette";
$tdatakaibutu[".masterListFields"][] = "sleeve";
$tdatakaibutu[".masterListFields"][] = "unit";
$tdatakaibutu[".masterListFields"][] = "hall_mark";
$tdatakaibutu[".masterListFields"][] = "plate";
$tdatakaibutu[".masterListFields"][] = "toe";
$tdatakaibutu[".masterListFields"][] = "heel";
$tdatakaibutu[".masterListFields"][] = "cloth";
$tdatakaibutu[".masterListFields"][] = "official_url";
$tdatakaibutu[".masterListFields"][] = "return_output_flag";
$tdatakaibutu[".masterListFields"][] = "shouhin.updated_at";
$tdatakaibutu[".masterListFields"][] = "tentou_label_output_flag";
$tdatakaibutu[".masterListFields"][] = "status";
$tdatakaibutu[".masterListFields"][] = "satei_by";
$tdatakaibutu[".masterListFields"][] = "category_id";
$tdatakaibutu[".masterListFields"][] = "title";
$tdatakaibutu[".masterListFields"][] = "sub_category_id1";
$tdatakaibutu[".masterListFields"][] = "product_id";
$tdatakaibutu[".masterListFields"][] = "ecc_id";
$tdatakaibutu[".masterListFields"][] = "yahoo";
$tdatakaibutu[".masterListFields"][] = "yahoo_sinaban";
$tdatakaibutu[".masterListFields"][] = "price";
$tdatakaibutu[".masterListFields"][] = "sales_price";
$tdatakaibutu[".masterListFields"][] = "yahoo_sex";
$tdatakaibutu[".masterListFields"][] = "product_num";
$tdatakaibutu[".masterListFields"][] = "description";
$tdatakaibutu[".masterListFields"][] = "raku_hyoujisaki_category";
$tdatakaibutu[".masterListFields"][] = "raku_hyoujisaki_category2";
$tdatakaibutu[".masterListFields"][] = "raku_hyoujisaki_category3";
$tdatakaibutu[".masterListFields"][] = "raku_hyoujisaki_category4";
$tdatakaibutu[".masterListFields"][] = "raku_hyoujisaki_category5";
$tdatakaibutu[".masterListFields"][] = "yahoo_kataban";
$tdatakaibutu[".masterListFields"][] = "yahoo_sozai";
$tdatakaibutu[".masterListFields"][] = "yahoo_color";
$tdatakaibutu[".masterListFields"][] = "yahoo_size";
$tdatakaibutu[".masterListFields"][] = "yahoo_condition1";
$tdatakaibutu[".masterListFields"][] = "yahoo_condition2";
$tdatakaibutu[".masterListFields"][] = "remark";
$tdatakaibutu[".masterListFields"][] = "yahoo_fuzokuhin";
$tdatakaibutu[".masterListFields"][] = "yahoo_sankou_uwadai";
$tdatakaibutu[".masterListFields"][] = "yahoo_saisun_sha";
$tdatakaibutu[".masterListFields"][] = "season";
$tdatakaibutu[".masterListFields"][] = "yahoo_title";
$tdatakaibutu[".masterListFields"][] = "box_id";
$tdatakaibutu[".masterListFields"][] = "goods_title";
$tdatakaibutu[".masterListFields"][] = "nyuukin_price";
$tdatakaibutu[".masterListFields"][] = "updated_by";
$tdatakaibutu[".masterListFields"][] = "raku_title";
$tdatakaibutu[".masterListFields"][] = "raku_tag_result";
$tdatakaibutu[".masterListFields"][] = "search_keyword";
$tdatakaibutu[".masterListFields"][] = "stamp";
$tdatakaibutu[".masterListFields"][] = "timesta";
$tdatakaibutu[".masterListFields"][] = "processing";
$tdatakaibutu[".masterListFields"][] = "saisun_start";
$tdatakaibutu[".masterListFields"][] = "Sleeve_Length";
$tdatakaibutu[".masterListFields"][] = "saisun_end";
$tdatakaibutu[".masterListFields"][] = "length";
$tdatakaibutu[".masterListFields"][] = "label_output_flag";
$tdatakaibutu[".masterListFields"][] = "Ring_size";
$tdatakaibutu[".masterListFields"][] = "price_for_site";
$tdatakaibutu[".masterListFields"][] = "kanryou_henbi";
$tdatakaibutu[".masterListFields"][] = "yahoo_category_id";
$tdatakaibutu[".masterListFields"][] = "box_sort";
$tdatakaibutu[".masterListFields"][] = "Qty";
$tdatakaibutu[".masterListFields"][] = "sales_period";
$tdatakaibutu[".masterListFields"][] = "kaitori_by";
$tdatakaibutu[".masterListFields"][] = "starting_price";
$tdatakaibutu[".masterListFields"][] = "comment";
$tdatakaibutu[".masterListFields"][] = "satei_hi";
$tdatakaibutu[".masterListFields"][] = "kaitory_hi";
$tdatakaibutu[".masterListFields"][] = "REG_PHOTOGRAPHER";
$tdatakaibutu[".masterListFields"][] = "REG_PACKINGS";
$tdatakaibutu[".masterListFields"][] = "REG_KAKOU_DATE";
$tdatakaibutu[".masterListFields"][] = "REG_KAKOU";
$tdatakaibutu[".masterListFields"][] = "REG_EXHIBITOR";
$tdatakaibutu[".masterListFields"][] = "REG_PHOTOGRAPHER_DATE";
$tdatakaibutu[".masterListFields"][] = "DT_PACKING_DATE";
$tdatakaibutu[".masterListFields"][] = "DT_UP_DATE";
$tdatakaibutu[".masterListFields"][] = "AWAZU_DATE";
$tdatakaibutu[".masterListFields"][] = "AWAZU_NIN";
$tdatakaibutu[".masterListFields"][] = "sabun_date";
$tdatakaibutu[".masterListFields"][] = "browseid";
$tdatakaibutu[".masterListFields"][] = "browsenode";
$tdatakaibutu[".masterListFields"][] = "gold_property";
$tdatakaibutu[".masterListFields"][] = "ichiba_title";
$tdatakaibutu[".masterListFields"][] = "Gram";
$tdatakaibutu[".masterListFields"][] = "Parent_stone";
$tdatakaibutu[".masterListFields"][] = "Aside_stone";
$tdatakaibutu[".masterListFields"][] = "Appraiser";
$tdatakaibutu[".masterListFields"][] = "Remarks";
$tdatakaibutu[".masterListFields"][] = "Destination_selling";
$tdatakaibutu[".masterListFields"][] = "Finish";
$tdatakaibutu[".masterListFields"][] = "Discrimination";
$tdatakaibutu[".masterListFields"][] = "accessories";
$tdatakaibutu[".masterListFields"][] = "priority";
$tdatakaibutu[".masterListFields"][] = "A_storage";
$tdatakaibutu[".masterListFields"][] = "price_per_gram";
$tdatakaibutu[".masterListFields"][] = "price_per_parent_stone";
$tdatakaibutu[".masterListFields"][] = "price_per_aside_stone";
$tdatakaibutu[".masterListFields"][] = "price_secret";
$tdatakaibutu[".masterListFields"][] = "sales_price_secret";
$tdatakaibutu[".masterListFields"][] = "eq";
$tdatakaibutu[".masterListFields"][] = "en";
$tdatakaibutu[".masterListFields"][] = "line";
$tdatakaibutu[".masterListFields"][] = "item_name";
$tdatakaibutu[".masterListFields"][] = "handle";
$tdatakaibutu[".masterListFields"][] = "yahoo_color_id";
$tdatakaibutu[".masterListFields"][] = "raku_dir_1";
$tdatakaibutu[".masterListFields"][] = "raku_dir_2";
$tdatakaibutu[".masterListFields"][] = "raku_dir_3";
$tdatakaibutu[".masterListFields"][] = "raku_dir_4";
$tdatakaibutu[".masterListFields"][] = "raku_dir_5";
$tdatakaibutu[".masterListFields"][] = "raku_dir_result";
$tdatakaibutu[".masterListFields"][] = "serial_number";
$tdatakaibutu[".masterListFields"][] = "Exhibition_Date";
$tdatakaibutu[".masterListFields"][] = "motif";
$tdatakaibutu[".masterListFields"][] = "Setting";

$tdatakaibutu[".inlineAddFields"] = array();
$tdatakaibutu[".inlineAddFields"][] = "return_output_flag";
$tdatakaibutu[".inlineAddFields"][] = "label_output_flag";
$tdatakaibutu[".inlineAddFields"][] = "tentou_label_output_flag";
$tdatakaibutu[".inlineAddFields"][] = "status";
$tdatakaibutu[".inlineAddFields"][] = "product_num";
$tdatakaibutu[".inlineAddFields"][] = "category_id";
$tdatakaibutu[".inlineAddFields"][] = "sub_category_id1";
$tdatakaibutu[".inlineAddFields"][] = "yahoo_sex";
$tdatakaibutu[".inlineAddFields"][] = "yahoo_condition2";
$tdatakaibutu[".inlineAddFields"][] = "line";
$tdatakaibutu[".inlineAddFields"][] = "item_name";
$tdatakaibutu[".inlineAddFields"][] = "yahoo_sozai";
$tdatakaibutu[".inlineAddFields"][] = "motif";
$tdatakaibutu[".inlineAddFields"][] = "Setting";
$tdatakaibutu[".inlineAddFields"][] = "processing";
$tdatakaibutu[".inlineAddFields"][] = "Sleeve_Length";
$tdatakaibutu[".inlineAddFields"][] = "length";
$tdatakaibutu[".inlineAddFields"][] = "ichiba_title";
$tdatakaibutu[".inlineAddFields"][] = "gold_property";
$tdatakaibutu[".inlineAddFields"][] = "Gram";
$tdatakaibutu[".inlineAddFields"][] = "price_per_gram";
$tdatakaibutu[".inlineAddFields"][] = "Parent_stone";
$tdatakaibutu[".inlineAddFields"][] = "price_per_parent_stone";
$tdatakaibutu[".inlineAddFields"][] = "Aside_stone";
$tdatakaibutu[".inlineAddFields"][] = "price_per_aside_stone";
$tdatakaibutu[".inlineAddFields"][] = "Appraiser";
$tdatakaibutu[".inlineAddFields"][] = "Ring_size";
$tdatakaibutu[".inlineAddFields"][] = "Remarks";
$tdatakaibutu[".inlineAddFields"][] = "title";
$tdatakaibutu[".inlineAddFields"][] = "yahoo_color";
$tdatakaibutu[".inlineAddFields"][] = "yahoo_color_id";
$tdatakaibutu[".inlineAddFields"][] = "yahoo_kataban";
$tdatakaibutu[".inlineAddFields"][] = "handle";
$tdatakaibutu[".inlineAddFields"][] = "serial_number";
$tdatakaibutu[".inlineAddFields"][] = "stamp";
$tdatakaibutu[".inlineAddFields"][] = "price";
$tdatakaibutu[".inlineAddFields"][] = "comment";
$tdatakaibutu[".inlineAddFields"][] = "sales_price";
$tdatakaibutu[".inlineAddFields"][] = "yahoo_sankou_uwadai";
$tdatakaibutu[".inlineAddFields"][] = "description";
$tdatakaibutu[".inlineAddFields"][] = "Destination_selling";
$tdatakaibutu[".inlineAddFields"][] = "Finish";
$tdatakaibutu[".inlineAddFields"][] = "Discrimination";
$tdatakaibutu[".inlineAddFields"][] = "accessories";
$tdatakaibutu[".inlineAddFields"][] = "priority";
$tdatakaibutu[".inlineAddFields"][] = "A_storage";
$tdatakaibutu[".inlineAddFields"][] = "satei_by";
$tdatakaibutu[".inlineAddFields"][] = "satei_hi";
$tdatakaibutu[".inlineAddFields"][] = "price_secret";
$tdatakaibutu[".inlineAddFields"][] = "sales_price_secret";

$tdatakaibutu[".editFields"] = array();
$tdatakaibutu[".editFields"][] = "tentou_label_output_flag";
$tdatakaibutu[".editFields"][] = "return_output_flag";
$tdatakaibutu[".editFields"][] = "status";
$tdatakaibutu[".editFields"][] = "satei_by";
$tdatakaibutu[".editFields"][] = "category_id";
$tdatakaibutu[".editFields"][] = "title";
$tdatakaibutu[".editFields"][] = "sub_category_id1";
$tdatakaibutu[".editFields"][] = "yahoo_sinaban";
$tdatakaibutu[".editFields"][] = "price";
$tdatakaibutu[".editFields"][] = "sales_price";
$tdatakaibutu[".editFields"][] = "yahoo_sex";
$tdatakaibutu[".editFields"][] = "product_num";
$tdatakaibutu[".editFields"][] = "description";
$tdatakaibutu[".editFields"][] = "raku_hyoujisaki_category";
$tdatakaibutu[".editFields"][] = "raku_hyoujisaki_category2";
$tdatakaibutu[".editFields"][] = "raku_hyoujisaki_category3";
$tdatakaibutu[".editFields"][] = "raku_hyoujisaki_category4";
$tdatakaibutu[".editFields"][] = "raku_hyoujisaki_category5";
$tdatakaibutu[".editFields"][] = "yahoo_kataban";
$tdatakaibutu[".editFields"][] = "yahoo_sozai";
$tdatakaibutu[".editFields"][] = "yahoo_color";
$tdatakaibutu[".editFields"][] = "yahoo_size";
$tdatakaibutu[".editFields"][] = "yahoo_condition1";
$tdatakaibutu[".editFields"][] = "yahoo_condition2";
$tdatakaibutu[".editFields"][] = "remark";
$tdatakaibutu[".editFields"][] = "yahoo_fuzokuhin";
$tdatakaibutu[".editFields"][] = "yahoo_sankou_uwadai";
$tdatakaibutu[".editFields"][] = "season";
$tdatakaibutu[".editFields"][] = "yahoo_title";
$tdatakaibutu[".editFields"][] = "goods_title";
$tdatakaibutu[".editFields"][] = "raku_title";
$tdatakaibutu[".editFields"][] = "raku_tag_result";
$tdatakaibutu[".editFields"][] = "search_keyword";
$tdatakaibutu[".editFields"][] = "stamp";
$tdatakaibutu[".editFields"][] = "processing";
$tdatakaibutu[".editFields"][] = "Sleeve_Length";
$tdatakaibutu[".editFields"][] = "length";
$tdatakaibutu[".editFields"][] = "comment";
$tdatakaibutu[".editFields"][] = "Ring_size";
$tdatakaibutu[".editFields"][] = "label_output_flag";
$tdatakaibutu[".editFields"][] = "satei_hi";
$tdatakaibutu[".editFields"][] = "gold_property";
$tdatakaibutu[".editFields"][] = "ichiba_title";
$tdatakaibutu[".editFields"][] = "Gram";
$tdatakaibutu[".editFields"][] = "Parent_stone";
$tdatakaibutu[".editFields"][] = "Aside_stone";
$tdatakaibutu[".editFields"][] = "Appraiser";
$tdatakaibutu[".editFields"][] = "accessories";
$tdatakaibutu[".editFields"][] = "priority";
$tdatakaibutu[".editFields"][] = "A_storage";
$tdatakaibutu[".editFields"][] = "price_per_gram";
$tdatakaibutu[".editFields"][] = "price_per_parent_stone";
$tdatakaibutu[".editFields"][] = "price_per_aside_stone";
$tdatakaibutu[".editFields"][] = "price_secret";
$tdatakaibutu[".editFields"][] = "line";
$tdatakaibutu[".editFields"][] = "item_name";
$tdatakaibutu[".editFields"][] = "serial_number";
$tdatakaibutu[".editFields"][] = "motif";
$tdatakaibutu[".editFields"][] = "Setting";
$tdatakaibutu[".editFields"][] = "Remarks";
$tdatakaibutu[".editFields"][] = "Destination_selling";
$tdatakaibutu[".editFields"][] = "Finish";
$tdatakaibutu[".editFields"][] = "Discrimination";
$tdatakaibutu[".editFields"][] = "sales_price_secret";
$tdatakaibutu[".editFields"][] = "handle";
$tdatakaibutu[".editFields"][] = "yahoo_color_id";

$tdatakaibutu[".inlineEditFields"] = array();
$tdatakaibutu[".inlineEditFields"][] = "return_output_flag";
$tdatakaibutu[".inlineEditFields"][] = "tentou_label_output_flag";
$tdatakaibutu[".inlineEditFields"][] = "status";
$tdatakaibutu[".inlineEditFields"][] = "product_num";
$tdatakaibutu[".inlineEditFields"][] = "category_id";
$tdatakaibutu[".inlineEditFields"][] = "sub_category_id1";
$tdatakaibutu[".inlineEditFields"][] = "yahoo_sex";
$tdatakaibutu[".inlineEditFields"][] = "yahoo_condition2";
$tdatakaibutu[".inlineEditFields"][] = "line";
$tdatakaibutu[".inlineEditFields"][] = "item_name";
$tdatakaibutu[".inlineEditFields"][] = "yahoo_sozai";
$tdatakaibutu[".inlineEditFields"][] = "motif";
$tdatakaibutu[".inlineEditFields"][] = "Setting";
$tdatakaibutu[".inlineEditFields"][] = "processing";
$tdatakaibutu[".inlineEditFields"][] = "Sleeve_Length";
$tdatakaibutu[".inlineEditFields"][] = "length";
$tdatakaibutu[".inlineEditFields"][] = "ichiba_title";
$tdatakaibutu[".inlineEditFields"][] = "gold_property";
$tdatakaibutu[".inlineEditFields"][] = "Gram";
$tdatakaibutu[".inlineEditFields"][] = "price_per_gram";
$tdatakaibutu[".inlineEditFields"][] = "Parent_stone";
$tdatakaibutu[".inlineEditFields"][] = "price_per_parent_stone";
$tdatakaibutu[".inlineEditFields"][] = "Aside_stone";
$tdatakaibutu[".inlineEditFields"][] = "price_per_aside_stone";
$tdatakaibutu[".inlineEditFields"][] = "Appraiser";
$tdatakaibutu[".inlineEditFields"][] = "Ring_size";
$tdatakaibutu[".inlineEditFields"][] = "Remarks";
$tdatakaibutu[".inlineEditFields"][] = "title";
$tdatakaibutu[".inlineEditFields"][] = "yahoo_color";
$tdatakaibutu[".inlineEditFields"][] = "yahoo_color_id";
$tdatakaibutu[".inlineEditFields"][] = "yahoo_kataban";
$tdatakaibutu[".inlineEditFields"][] = "handle";
$tdatakaibutu[".inlineEditFields"][] = "serial_number";
$tdatakaibutu[".inlineEditFields"][] = "stamp";
$tdatakaibutu[".inlineEditFields"][] = "price";
$tdatakaibutu[".inlineEditFields"][] = "comment";
$tdatakaibutu[".inlineEditFields"][] = "sales_price";
$tdatakaibutu[".inlineEditFields"][] = "yahoo_sankou_uwadai";
$tdatakaibutu[".inlineEditFields"][] = "description";
$tdatakaibutu[".inlineEditFields"][] = "Destination_selling";
$tdatakaibutu[".inlineEditFields"][] = "Finish";
$tdatakaibutu[".inlineEditFields"][] = "Discrimination";
$tdatakaibutu[".inlineEditFields"][] = "accessories";
$tdatakaibutu[".inlineEditFields"][] = "priority";
$tdatakaibutu[".inlineEditFields"][] = "A_storage";
$tdatakaibutu[".inlineEditFields"][] = "satei_by";
$tdatakaibutu[".inlineEditFields"][] = "satei_hi";
$tdatakaibutu[".inlineEditFields"][] = "price_secret";
$tdatakaibutu[".inlineEditFields"][] = "sales_price_secret";

$tdatakaibutu[".updateSelectedFields"] = array();
$tdatakaibutu[".updateSelectedFields"][] = "status";
$tdatakaibutu[".updateSelectedFields"][] = "satei_by";
$tdatakaibutu[".updateSelectedFields"][] = "category_id";
$tdatakaibutu[".updateSelectedFields"][] = "title";
$tdatakaibutu[".updateSelectedFields"][] = "sub_category_id1";
$tdatakaibutu[".updateSelectedFields"][] = "yahoo_sinaban";
$tdatakaibutu[".updateSelectedFields"][] = "price";
$tdatakaibutu[".updateSelectedFields"][] = "sales_price";
$tdatakaibutu[".updateSelectedFields"][] = "yahoo_sex";
$tdatakaibutu[".updateSelectedFields"][] = "product_num";
$tdatakaibutu[".updateSelectedFields"][] = "description";
$tdatakaibutu[".updateSelectedFields"][] = "raku_hyoujisaki_category";
$tdatakaibutu[".updateSelectedFields"][] = "raku_hyoujisaki_category2";
$tdatakaibutu[".updateSelectedFields"][] = "raku_hyoujisaki_category3";
$tdatakaibutu[".updateSelectedFields"][] = "raku_hyoujisaki_category4";
$tdatakaibutu[".updateSelectedFields"][] = "raku_hyoujisaki_category5";
$tdatakaibutu[".updateSelectedFields"][] = "yahoo_kataban";
$tdatakaibutu[".updateSelectedFields"][] = "yahoo_sozai";
$tdatakaibutu[".updateSelectedFields"][] = "yahoo_color";
$tdatakaibutu[".updateSelectedFields"][] = "yahoo_size";
$tdatakaibutu[".updateSelectedFields"][] = "yahoo_condition1";
$tdatakaibutu[".updateSelectedFields"][] = "yahoo_condition2";
$tdatakaibutu[".updateSelectedFields"][] = "remark";
$tdatakaibutu[".updateSelectedFields"][] = "yahoo_fuzokuhin";
$tdatakaibutu[".updateSelectedFields"][] = "yahoo_sankou_uwadai";
$tdatakaibutu[".updateSelectedFields"][] = "season";
$tdatakaibutu[".updateSelectedFields"][] = "yahoo_title";
$tdatakaibutu[".updateSelectedFields"][] = "goods_title";
$tdatakaibutu[".updateSelectedFields"][] = "raku_title";
$tdatakaibutu[".updateSelectedFields"][] = "raku_tag_result";
$tdatakaibutu[".updateSelectedFields"][] = "search_keyword";
$tdatakaibutu[".updateSelectedFields"][] = "stamp";
$tdatakaibutu[".updateSelectedFields"][] = "processing";
$tdatakaibutu[".updateSelectedFields"][] = "Sleeve_Length";
$tdatakaibutu[".updateSelectedFields"][] = "length";
$tdatakaibutu[".updateSelectedFields"][] = "comment";
$tdatakaibutu[".updateSelectedFields"][] = "Ring_size";
$tdatakaibutu[".updateSelectedFields"][] = "label_output_flag";
$tdatakaibutu[".updateSelectedFields"][] = "satei_hi";
$tdatakaibutu[".updateSelectedFields"][] = "gold_property";
$tdatakaibutu[".updateSelectedFields"][] = "ichiba_title";
$tdatakaibutu[".updateSelectedFields"][] = "Gram";
$tdatakaibutu[".updateSelectedFields"][] = "Parent_stone";
$tdatakaibutu[".updateSelectedFields"][] = "Aside_stone";
$tdatakaibutu[".updateSelectedFields"][] = "Appraiser";
$tdatakaibutu[".updateSelectedFields"][] = "accessories";
$tdatakaibutu[".updateSelectedFields"][] = "priority";
$tdatakaibutu[".updateSelectedFields"][] = "A_storage";
$tdatakaibutu[".updateSelectedFields"][] = "price_per_parent_stone";
$tdatakaibutu[".updateSelectedFields"][] = "price_per_aside_stone";
$tdatakaibutu[".updateSelectedFields"][] = "price_secret";
$tdatakaibutu[".updateSelectedFields"][] = "line";
$tdatakaibutu[".updateSelectedFields"][] = "item_name";
$tdatakaibutu[".updateSelectedFields"][] = "serial_number";
$tdatakaibutu[".updateSelectedFields"][] = "motif";
$tdatakaibutu[".updateSelectedFields"][] = "Setting";
$tdatakaibutu[".updateSelectedFields"][] = "Remarks";
$tdatakaibutu[".updateSelectedFields"][] = "Destination_selling";
$tdatakaibutu[".updateSelectedFields"][] = "Finish";
$tdatakaibutu[".updateSelectedFields"][] = "Discrimination";
$tdatakaibutu[".updateSelectedFields"][] = "sales_price_secret";
$tdatakaibutu[".updateSelectedFields"][] = "handle";
$tdatakaibutu[".updateSelectedFields"][] = "yahoo_color_id";


$tdatakaibutu[".exportFields"] = array();
$tdatakaibutu[".exportFields"][] = "shouhin.updated_at";
$tdatakaibutu[".exportFields"][] = "tentou_label_output_flag";
$tdatakaibutu[".exportFields"][] = "return_output_flag";
$tdatakaibutu[".exportFields"][] = "label_output_flag";
$tdatakaibutu[".exportFields"][] = "status";
$tdatakaibutu[".exportFields"][] = "product_id";
$tdatakaibutu[".exportFields"][] = "yahoo_junle";
$tdatakaibutu[".exportFields"][] = "category_id";
$tdatakaibutu[".exportFields"][] = "sub_category_id1";
$tdatakaibutu[".exportFields"][] = "yahoo_sex";
$tdatakaibutu[".exportFields"][] = "yahoo_condition2";
$tdatakaibutu[".exportFields"][] = "line";
$tdatakaibutu[".exportFields"][] = "item_name";
$tdatakaibutu[".exportFields"][] = "yahoo_sozai";
$tdatakaibutu[".exportFields"][] = "motif";
$tdatakaibutu[".exportFields"][] = "Setting";
$tdatakaibutu[".exportFields"][] = "processing";
$tdatakaibutu[".exportFields"][] = "Sleeve_Length";
$tdatakaibutu[".exportFields"][] = "length";
$tdatakaibutu[".exportFields"][] = "ichiba_title";
$tdatakaibutu[".exportFields"][] = "gold_property";
$tdatakaibutu[".exportFields"][] = "Gram";
$tdatakaibutu[".exportFields"][] = "price_per_gram";
$tdatakaibutu[".exportFields"][] = "Parent_stone";
$tdatakaibutu[".exportFields"][] = "price_per_parent_stone";
$tdatakaibutu[".exportFields"][] = "Aside_stone";
$tdatakaibutu[".exportFields"][] = "price_per_aside_stone";
$tdatakaibutu[".exportFields"][] = "Appraiser";
$tdatakaibutu[".exportFields"][] = "Ring_size";
$tdatakaibutu[".exportFields"][] = "Remarks";
$tdatakaibutu[".exportFields"][] = "title";
$tdatakaibutu[".exportFields"][] = "yahoo_color";
$tdatakaibutu[".exportFields"][] = "yahoo_color_id";
$tdatakaibutu[".exportFields"][] = "handle";
$tdatakaibutu[".exportFields"][] = "yahoo_kataban";
$tdatakaibutu[".exportFields"][] = "serial_number";
$tdatakaibutu[".exportFields"][] = "stamp";
$tdatakaibutu[".exportFields"][] = "eq";
$tdatakaibutu[".exportFields"][] = "price";
$tdatakaibutu[".exportFields"][] = "en";
$tdatakaibutu[".exportFields"][] = "comment";
$tdatakaibutu[".exportFields"][] = "sales_price";
$tdatakaibutu[".exportFields"][] = "yahoo_sankou_uwadai";
$tdatakaibutu[".exportFields"][] = "description";
$tdatakaibutu[".exportFields"][] = "Destination_selling";
$tdatakaibutu[".exportFields"][] = "Finish";
$tdatakaibutu[".exportFields"][] = "Discrimination";
$tdatakaibutu[".exportFields"][] = "accessories";
$tdatakaibutu[".exportFields"][] = "priority";
$tdatakaibutu[".exportFields"][] = "A_storage";
$tdatakaibutu[".exportFields"][] = "satei_by";
$tdatakaibutu[".exportFields"][] = "satei_hi";
$tdatakaibutu[".exportFields"][] = "price_secret";
$tdatakaibutu[".exportFields"][] = "sales_price_secret";
$tdatakaibutu[".exportFields"][] = "product_num";

$tdatakaibutu[".importFields"] = array();
$tdatakaibutu[".importFields"][] = "product_id";
$tdatakaibutu[".importFields"][] = "category_id";
$tdatakaibutu[".importFields"][] = "title";
$tdatakaibutu[".importFields"][] = "sub_category_id1";
$tdatakaibutu[".importFields"][] = "price";
$tdatakaibutu[".importFields"][] = "sales_price";
$tdatakaibutu[".importFields"][] = "description";
$tdatakaibutu[".importFields"][] = "status";
$tdatakaibutu[".importFields"][] = "product_num";
$tdatakaibutu[".importFields"][] = "yahoo_sankou_uwadai";
$tdatakaibutu[".importFields"][] = "yahoo_sozai";
$tdatakaibutu[".importFields"][] = "yahoo_color";
$tdatakaibutu[".importFields"][] = "yahoo_kataban";
$tdatakaibutu[".importFields"][] = "yahoo_condition2";
$tdatakaibutu[".importFields"][] = "yahoo_sex";
$tdatakaibutu[".importFields"][] = "label_output_flag";
$tdatakaibutu[".importFields"][] = "satei_by";
$tdatakaibutu[".importFields"][] = "comment";
$tdatakaibutu[".importFields"][] = "satei_hi";
$tdatakaibutu[".importFields"][] = "gold_property";
$tdatakaibutu[".importFields"][] = "ichiba_title";
$tdatakaibutu[".importFields"][] = "Gram";
$tdatakaibutu[".importFields"][] = "Parent_stone";
$tdatakaibutu[".importFields"][] = "Aside_stone";
$tdatakaibutu[".importFields"][] = "Appraiser";
$tdatakaibutu[".importFields"][] = "Remarks";
$tdatakaibutu[".importFields"][] = "Destination_selling";
$tdatakaibutu[".importFields"][] = "Finish";
$tdatakaibutu[".importFields"][] = "Discrimination";
$tdatakaibutu[".importFields"][] = "accessories";
$tdatakaibutu[".importFields"][] = "priority";
$tdatakaibutu[".importFields"][] = "A_storage";
$tdatakaibutu[".importFields"][] = "price_per_gram";
$tdatakaibutu[".importFields"][] = "price_per_parent_stone";
$tdatakaibutu[".importFields"][] = "price_per_aside_stone";
$tdatakaibutu[".importFields"][] = "price_secret";
$tdatakaibutu[".importFields"][] = "sales_price_secret";
$tdatakaibutu[".importFields"][] = "line";
$tdatakaibutu[".importFields"][] = "item_name";
$tdatakaibutu[".importFields"][] = "handle";
$tdatakaibutu[".importFields"][] = "yahoo_color_id";
$tdatakaibutu[".importFields"][] = "serial_number";
$tdatakaibutu[".importFields"][] = "stamp";
$tdatakaibutu[".importFields"][] = "motif";
$tdatakaibutu[".importFields"][] = "Setting";
$tdatakaibutu[".importFields"][] = "processing";
$tdatakaibutu[".importFields"][] = "Sleeve_Length";
$tdatakaibutu[".importFields"][] = "length";
$tdatakaibutu[".importFields"][] = "Ring_size";
$tdatakaibutu[".importFields"][] = "yahoo_junle";
$tdatakaibutu[".importFields"][] = "return_output_flag";
$tdatakaibutu[".importFields"][] = "shouhin.updated_at";
$tdatakaibutu[".importFields"][] = "tentou_label_output_flag";

$tdatakaibutu[".printFields"] = array();
$tdatakaibutu[".printFields"][] = "shouhin.updated_at";
$tdatakaibutu[".printFields"][] = "tentou_label_output_flag";
$tdatakaibutu[".printFields"][] = "ecc_seq";
$tdatakaibutu[".printFields"][] = "return_output_flag";
$tdatakaibutu[".printFields"][] = "status";
$tdatakaibutu[".printFields"][] = "satei_by";
$tdatakaibutu[".printFields"][] = "category_id";
$tdatakaibutu[".printFields"][] = "title";
$tdatakaibutu[".printFields"][] = "sub_category_id1";
$tdatakaibutu[".printFields"][] = "product_id";
$tdatakaibutu[".printFields"][] = "yahoo_sinaban";
$tdatakaibutu[".printFields"][] = "price";
$tdatakaibutu[".printFields"][] = "sales_price";
$tdatakaibutu[".printFields"][] = "yahoo_sex";
$tdatakaibutu[".printFields"][] = "product_num";
$tdatakaibutu[".printFields"][] = "description";
$tdatakaibutu[".printFields"][] = "raku_hyoujisaki_category";
$tdatakaibutu[".printFields"][] = "raku_hyoujisaki_category2";
$tdatakaibutu[".printFields"][] = "raku_hyoujisaki_category3";
$tdatakaibutu[".printFields"][] = "raku_hyoujisaki_category4";
$tdatakaibutu[".printFields"][] = "raku_hyoujisaki_category5";
$tdatakaibutu[".printFields"][] = "yahoo_kataban";
$tdatakaibutu[".printFields"][] = "yahoo_sozai";
$tdatakaibutu[".printFields"][] = "yahoo_color";
$tdatakaibutu[".printFields"][] = "yahoo_size";
$tdatakaibutu[".printFields"][] = "yahoo_condition1";
$tdatakaibutu[".printFields"][] = "yahoo_condition2";
$tdatakaibutu[".printFields"][] = "remark";
$tdatakaibutu[".printFields"][] = "yahoo_fuzokuhin";
$tdatakaibutu[".printFields"][] = "yahoo_sankou_uwadai";
$tdatakaibutu[".printFields"][] = "season";
$tdatakaibutu[".printFields"][] = "yahoo_title";
$tdatakaibutu[".printFields"][] = "goods_title";
$tdatakaibutu[".printFields"][] = "raku_title";
$tdatakaibutu[".printFields"][] = "raku_tag_result";
$tdatakaibutu[".printFields"][] = "search_keyword";
$tdatakaibutu[".printFields"][] = "stamp";
$tdatakaibutu[".printFields"][] = "processing";
$tdatakaibutu[".printFields"][] = "Sleeve_Length";
$tdatakaibutu[".printFields"][] = "length";
$tdatakaibutu[".printFields"][] = "label_output_flag";
$tdatakaibutu[".printFields"][] = "Ring_size";
$tdatakaibutu[".printFields"][] = "comment";
$tdatakaibutu[".printFields"][] = "satei_hi";
$tdatakaibutu[".printFields"][] = "gold_property";
$tdatakaibutu[".printFields"][] = "ichiba_title";
$tdatakaibutu[".printFields"][] = "Gram";
$tdatakaibutu[".printFields"][] = "Parent_stone";
$tdatakaibutu[".printFields"][] = "Aside_stone";
$tdatakaibutu[".printFields"][] = "Appraiser";
$tdatakaibutu[".printFields"][] = "Remarks";
$tdatakaibutu[".printFields"][] = "Destination_selling";
$tdatakaibutu[".printFields"][] = "Finish";
$tdatakaibutu[".printFields"][] = "Discrimination";
$tdatakaibutu[".printFields"][] = "accessories";
$tdatakaibutu[".printFields"][] = "priority";
$tdatakaibutu[".printFields"][] = "A_storage";
$tdatakaibutu[".printFields"][] = "price_per_gram";
$tdatakaibutu[".printFields"][] = "price_per_parent_stone";
$tdatakaibutu[".printFields"][] = "price_per_aside_stone";
$tdatakaibutu[".printFields"][] = "price_secret";
$tdatakaibutu[".printFields"][] = "sales_price_secret";
$tdatakaibutu[".printFields"][] = "line";
$tdatakaibutu[".printFields"][] = "item_name";
$tdatakaibutu[".printFields"][] = "handle";
$tdatakaibutu[".printFields"][] = "yahoo_color_id";
$tdatakaibutu[".printFields"][] = "serial_number";
$tdatakaibutu[".printFields"][] = "motif";
$tdatakaibutu[".printFields"][] = "Setting";

//	product_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "product_id";
	$fdata["GoodName"] = "product_id";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","product_id");
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




	$tdatakaibutu["product_id"] = $fdata;
//	category_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "category_id";
	$fdata["GoodName"] = "category_id";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","category_id");
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




	$tdatakaibutu["category_id"] = $fdata;
//	goods_title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "goods_title";
	$fdata["GoodName"] = "goods_title";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","goods_title");
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




	$tdatakaibutu["goods_title"] = $fdata;
//	title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "title";
	$fdata["GoodName"] = "title";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","title");
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




	$tdatakaibutu["title"] = $fdata;
//	sub_category_id1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "sub_category_id1";
	$fdata["GoodName"] = "sub_category_id1";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","sub_category_id1");
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




	$tdatakaibutu["sub_category_id1"] = $fdata;
//	ecc_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "ecc_id";
	$fdata["GoodName"] = "ecc_id";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","ecc_id");
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








	$tdatakaibutu["ecc_id"] = $fdata;
//	price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "price";
	$fdata["GoodName"] = "price";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","price");
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




	$tdatakaibutu["price"] = $fdata;
//	yahoo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "yahoo";
	$fdata["GoodName"] = "yahoo";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","yahoo");
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








	$tdatakaibutu["yahoo"] = $fdata;
//	remark
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "remark";
	$fdata["GoodName"] = "remark";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","remark");
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




	$tdatakaibutu["remark"] = $fdata;
//	sales_price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "sales_price";
	$fdata["GoodName"] = "sales_price";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","sales_price");
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




	$tdatakaibutu["sales_price"] = $fdata;
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","description");
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




	$tdatakaibutu["description"] = $fdata;
//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","status");
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




	$tdatakaibutu["status"] = $fdata;
//	product_num
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "product_num";
	$fdata["GoodName"] = "product_num";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","product_num");
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




	$tdatakaibutu["product_num"] = $fdata;
//	yahoo_size
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "yahoo_size";
	$fdata["GoodName"] = "yahoo_size";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","yahoo_size");
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




	$tdatakaibutu["yahoo_size"] = $fdata;
//	yahoo_title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "yahoo_title";
	$fdata["GoodName"] = "yahoo_title";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","yahoo_title");
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




	$tdatakaibutu["yahoo_title"] = $fdata;
//	yahoo_sankou_uwadai
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "yahoo_sankou_uwadai";
	$fdata["GoodName"] = "yahoo_sankou_uwadai";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","yahoo_sankou_uwadai");
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
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatakaibutu["yahoo_sankou_uwadai"] = $fdata;
//	yahoo_sozai
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "yahoo_sozai";
	$fdata["GoodName"] = "yahoo_sozai";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","yahoo_sozai");
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




	$tdatakaibutu["yahoo_sozai"] = $fdata;
//	yahoo_color
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "yahoo_color";
	$fdata["GoodName"] = "yahoo_color";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","yahoo_color");
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




	$tdatakaibutu["yahoo_color"] = $fdata;
//	yahoo_kataban
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "yahoo_kataban";
	$fdata["GoodName"] = "yahoo_kataban";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","yahoo_kataban");
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
			$edata["EditParams"].= " maxlength=129";

		$edata["controlWidth"] = 200;

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




	$tdatakaibutu["yahoo_kataban"] = $fdata;
//	yahoo_condition1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "yahoo_condition1";
	$fdata["GoodName"] = "yahoo_condition1";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","yahoo_condition1");
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




	$tdatakaibutu["yahoo_condition1"] = $fdata;
//	yahoo_condition2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "yahoo_condition2";
	$fdata["GoodName"] = "yahoo_condition2";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","yahoo_condition2");
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




	$tdatakaibutu["yahoo_condition2"] = $fdata;
//	yahoo_fuzokuhin
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "yahoo_fuzokuhin";
	$fdata["GoodName"] = "yahoo_fuzokuhin";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","yahoo_fuzokuhin");
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




	$tdatakaibutu["yahoo_fuzokuhin"] = $fdata;
//	yahoo_sinaban
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "yahoo_sinaban";
	$fdata["GoodName"] = "yahoo_sinaban";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","yahoo_sinaban");
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




	$tdatakaibutu["yahoo_sinaban"] = $fdata;
//	yahoo_saisun_sha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "yahoo_saisun_sha";
	$fdata["GoodName"] = "yahoo_saisun_sha";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","yahoo_saisun_sha");
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








	$tdatakaibutu["yahoo_saisun_sha"] = $fdata;
//	yahoo_sex
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "yahoo_sex";
	$fdata["GoodName"] = "yahoo_sex";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","yahoo_sex");
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




	$tdatakaibutu["yahoo_sex"] = $fdata;
//	box_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "box_id";
	$fdata["GoodName"] = "box_id";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","box_id");
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








	$tdatakaibutu["box_id"] = $fdata;
//	nyuukin_price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "nyuukin_price";
	$fdata["GoodName"] = "nyuukin_price";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","nyuukin_price");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "nyuukin_price";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`nyuukin_price`";

	
	
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








	$tdatakaibutu["nyuukin_price"] = $fdata;
//	updated_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "updated_by";
	$fdata["GoodName"] = "updated_by";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","updated_by");
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








	$tdatakaibutu["updated_by"] = $fdata;
//	raku_title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "raku_title";
	$fdata["GoodName"] = "raku_title";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","raku_title");
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




	$tdatakaibutu["raku_title"] = $fdata;
//	raku_hyoujisaki_category2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "raku_hyoujisaki_category2";
	$fdata["GoodName"] = "raku_hyoujisaki_category2";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","raku_hyoujisaki_category2");
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




	$tdatakaibutu["raku_hyoujisaki_category2"] = $fdata;
//	raku_hyoujisaki_category
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "raku_hyoujisaki_category";
	$fdata["GoodName"] = "raku_hyoujisaki_category";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","raku_hyoujisaki_category");
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




	$tdatakaibutu["raku_hyoujisaki_category"] = $fdata;
//	raku_hyoujisaki_category3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "raku_hyoujisaki_category3";
	$fdata["GoodName"] = "raku_hyoujisaki_category3";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","raku_hyoujisaki_category3");
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




	$tdatakaibutu["raku_hyoujisaki_category3"] = $fdata;
//	timesta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "timesta";
	$fdata["GoodName"] = "timesta";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","timesta");
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








	$tdatakaibutu["timesta"] = $fdata;
//	saisun_start
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "saisun_start";
	$fdata["GoodName"] = "saisun_start";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","saisun_start");
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








	$tdatakaibutu["saisun_start"] = $fdata;
//	saisun_end
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "saisun_end";
	$fdata["GoodName"] = "saisun_end";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","saisun_end");
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








	$tdatakaibutu["saisun_end"] = $fdata;
//	label_output_flag
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "label_output_flag";
	$fdata["GoodName"] = "label_output_flag";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","label_output_flag");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

	
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




	$tdatakaibutu["label_output_flag"] = $fdata;
//	season
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "season";
	$fdata["GoodName"] = "season";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","season");
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




	$tdatakaibutu["season"] = $fdata;
//	kanryou_henbi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "kanryou_henbi";
	$fdata["GoodName"] = "kanryou_henbi";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","kanryou_henbi");
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








	$tdatakaibutu["kanryou_henbi"] = $fdata;
//	box_sort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "box_sort";
	$fdata["GoodName"] = "box_sort";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","box_sort");
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








	$tdatakaibutu["box_sort"] = $fdata;
//	satei_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "satei_by";
	$fdata["GoodName"] = "satei_by";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","satei_by");
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




	$tdatakaibutu["satei_by"] = $fdata;
//	kaitori_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "kaitori_by";
	$fdata["GoodName"] = "kaitori_by";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","kaitori_by");
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








	$tdatakaibutu["kaitori_by"] = $fdata;
//	comment
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "comment";
	$fdata["GoodName"] = "comment";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","comment");
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




	$tdatakaibutu["comment"] = $fdata;
//	satei_hi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "satei_hi";
	$fdata["GoodName"] = "satei_hi";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","satei_hi");
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




	$tdatakaibutu["satei_hi"] = $fdata;
//	kaitory_hi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "kaitory_hi";
	$fdata["GoodName"] = "kaitory_hi";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","kaitory_hi");
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








	$tdatakaibutu["kaitory_hi"] = $fdata;
//	REG_PHOTOGRAPHER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "REG_PHOTOGRAPHER";
	$fdata["GoodName"] = "REG_PHOTOGRAPHER";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","REG_PHOTOGRAPHER");
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








	$tdatakaibutu["REG_PHOTOGRAPHER"] = $fdata;
//	REG_PACKINGS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "REG_PACKINGS";
	$fdata["GoodName"] = "REG_PACKINGS";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","REG_PACKINGS");
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








	$tdatakaibutu["REG_PACKINGS"] = $fdata;
//	REG_KAKOU_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 47;
	$fdata["strName"] = "REG_KAKOU_DATE";
	$fdata["GoodName"] = "REG_KAKOU_DATE";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","REG_KAKOU_DATE");
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








	$tdatakaibutu["REG_KAKOU_DATE"] = $fdata;
//	REG_KAKOU
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 48;
	$fdata["strName"] = "REG_KAKOU";
	$fdata["GoodName"] = "REG_KAKOU";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","REG_KAKOU");
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








	$tdatakaibutu["REG_KAKOU"] = $fdata;
//	REG_EXHIBITOR
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 49;
	$fdata["strName"] = "REG_EXHIBITOR";
	$fdata["GoodName"] = "REG_EXHIBITOR";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","REG_EXHIBITOR");
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








	$tdatakaibutu["REG_EXHIBITOR"] = $fdata;
//	REG_PHOTOGRAPHER_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 50;
	$fdata["strName"] = "REG_PHOTOGRAPHER_DATE";
	$fdata["GoodName"] = "REG_PHOTOGRAPHER_DATE";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","REG_PHOTOGRAPHER_DATE");
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








	$tdatakaibutu["REG_PHOTOGRAPHER_DATE"] = $fdata;
//	DT_PACKING_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 51;
	$fdata["strName"] = "DT_PACKING_DATE";
	$fdata["GoodName"] = "DT_PACKING_DATE";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","DT_PACKING_DATE");
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








	$tdatakaibutu["DT_PACKING_DATE"] = $fdata;
//	DT_UP_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 52;
	$fdata["strName"] = "DT_UP_DATE";
	$fdata["GoodName"] = "DT_UP_DATE";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","DT_UP_DATE");
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








	$tdatakaibutu["DT_UP_DATE"] = $fdata;
//	AWAZU_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 53;
	$fdata["strName"] = "AWAZU_DATE";
	$fdata["GoodName"] = "AWAZU_DATE";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","AWAZU_DATE");
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








	$tdatakaibutu["AWAZU_DATE"] = $fdata;
//	AWAZU_NIN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 54;
	$fdata["strName"] = "AWAZU_NIN";
	$fdata["GoodName"] = "AWAZU_NIN";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","AWAZU_NIN");
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








	$tdatakaibutu["AWAZU_NIN"] = $fdata;
//	sabun_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 55;
	$fdata["strName"] = "sabun_date";
	$fdata["GoodName"] = "sabun_date";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","sabun_date");
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








	$tdatakaibutu["sabun_date"] = $fdata;
//	browseid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 56;
	$fdata["strName"] = "browseid";
	$fdata["GoodName"] = "browseid";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","browseid");
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








	$tdatakaibutu["browseid"] = $fdata;
//	browsenode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 57;
	$fdata["strName"] = "browsenode";
	$fdata["GoodName"] = "browsenode";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","browsenode");
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








	$tdatakaibutu["browsenode"] = $fdata;
//	gold_property
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 58;
	$fdata["strName"] = "gold_property";
	$fdata["GoodName"] = "gold_property";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","gold_property");
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




	$tdatakaibutu["gold_property"] = $fdata;
//	ichiba_title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 59;
	$fdata["strName"] = "ichiba_title";
	$fdata["GoodName"] = "ichiba_title";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","ichiba_title");
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




	$tdatakaibutu["ichiba_title"] = $fdata;
//	Gram
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 60;
	$fdata["strName"] = "Gram";
	$fdata["GoodName"] = "Gram";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","Gram");
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




	$tdatakaibutu["Gram"] = $fdata;
//	Parent_stone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 61;
	$fdata["strName"] = "Parent_stone";
	$fdata["GoodName"] = "Parent_stone";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","Parent_stone");
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




	$tdatakaibutu["Parent_stone"] = $fdata;
//	Aside_stone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 62;
	$fdata["strName"] = "Aside_stone";
	$fdata["GoodName"] = "Aside_stone";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","Aside_stone");
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




	$tdatakaibutu["Aside_stone"] = $fdata;
//	Appraiser
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 63;
	$fdata["strName"] = "Appraiser";
	$fdata["GoodName"] = "Appraiser";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","Appraiser");
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




	$tdatakaibutu["Appraiser"] = $fdata;
//	Remarks
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 64;
	$fdata["strName"] = "Remarks";
	$fdata["GoodName"] = "Remarks";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","Remarks");
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




	$tdatakaibutu["Remarks"] = $fdata;
//	Destination_selling
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 65;
	$fdata["strName"] = "Destination_selling";
	$fdata["GoodName"] = "Destination_selling";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","Destination_selling");
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




	$tdatakaibutu["Destination_selling"] = $fdata;
//	Finish
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 66;
	$fdata["strName"] = "Finish";
	$fdata["GoodName"] = "Finish";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","Finish");
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




	$tdatakaibutu["Finish"] = $fdata;
//	Discrimination
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 67;
	$fdata["strName"] = "Discrimination";
	$fdata["GoodName"] = "Discrimination";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","Discrimination");
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




	$tdatakaibutu["Discrimination"] = $fdata;
//	accessories
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 68;
	$fdata["strName"] = "accessories";
	$fdata["GoodName"] = "accessories";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","accessories");
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




	$tdatakaibutu["accessories"] = $fdata;
//	priority
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 69;
	$fdata["strName"] = "priority";
	$fdata["GoodName"] = "priority";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","priority");
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




	$tdatakaibutu["priority"] = $fdata;
//	A_storage
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 70;
	$fdata["strName"] = "A_storage";
	$fdata["GoodName"] = "A_storage";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","A_storage");
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




	$tdatakaibutu["A_storage"] = $fdata;
//	price_per_gram
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 71;
	$fdata["strName"] = "price_per_gram";
	$fdata["GoodName"] = "price_per_gram";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","price_per_gram");
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




	$tdatakaibutu["price_per_gram"] = $fdata;
//	price_per_parent_stone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 72;
	$fdata["strName"] = "price_per_parent_stone";
	$fdata["GoodName"] = "price_per_parent_stone";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","price_per_parent_stone");
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




	$tdatakaibutu["price_per_parent_stone"] = $fdata;
//	price_per_aside_stone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 73;
	$fdata["strName"] = "price_per_aside_stone";
	$fdata["GoodName"] = "price_per_aside_stone";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","price_per_aside_stone");
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




	$tdatakaibutu["price_per_aside_stone"] = $fdata;
//	price_secret
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 74;
	$fdata["strName"] = "price_secret";
	$fdata["GoodName"] = "price_secret";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","price_secret");
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




	$tdatakaibutu["price_secret"] = $fdata;
//	sales_price_secret
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 75;
	$fdata["strName"] = "sales_price_secret";
	$fdata["GoodName"] = "sales_price_secret";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","sales_price_secret");
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




	$tdatakaibutu["sales_price_secret"] = $fdata;
//	eq
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 76;
	$fdata["strName"] = "eq";
	$fdata["GoodName"] = "eq";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","eq");
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








	$tdatakaibutu["eq"] = $fdata;
//	en
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 77;
	$fdata["strName"] = "en";
	$fdata["GoodName"] = "en";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","en");
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








	$tdatakaibutu["en"] = $fdata;
//	line
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 78;
	$fdata["strName"] = "line";
	$fdata["GoodName"] = "line";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","line");
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




	$tdatakaibutu["line"] = $fdata;
//	item_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 79;
	$fdata["strName"] = "item_name";
	$fdata["GoodName"] = "item_name";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","item_name");
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




	$tdatakaibutu["item_name"] = $fdata;
//	handle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 80;
	$fdata["strName"] = "handle";
	$fdata["GoodName"] = "handle";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","handle");
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




	$tdatakaibutu["handle"] = $fdata;
//	yahoo_color_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 81;
	$fdata["strName"] = "yahoo_color_id";
	$fdata["GoodName"] = "yahoo_color_id";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","yahoo_color_id");
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

		$fdata["strField"] = "yahoo_color_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`yahoo_color_id`";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdatakaibutu["yahoo_color_id"] = $fdata;
//	raku_hyoujisaki_category4
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 82;
	$fdata["strName"] = "raku_hyoujisaki_category4";
	$fdata["GoodName"] = "raku_hyoujisaki_category4";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","raku_hyoujisaki_category4");
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




	$tdatakaibutu["raku_hyoujisaki_category4"] = $fdata;
//	raku_hyoujisaki_category5
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 83;
	$fdata["strName"] = "raku_hyoujisaki_category5";
	$fdata["GoodName"] = "raku_hyoujisaki_category5";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","raku_hyoujisaki_category5");
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




	$tdatakaibutu["raku_hyoujisaki_category5"] = $fdata;
//	raku_dir_1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 84;
	$fdata["strName"] = "raku_dir_1";
	$fdata["GoodName"] = "raku_dir_1";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","raku_dir_1");
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








	$tdatakaibutu["raku_dir_1"] = $fdata;
//	raku_dir_2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 85;
	$fdata["strName"] = "raku_dir_2";
	$fdata["GoodName"] = "raku_dir_2";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","raku_dir_2");
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








	$tdatakaibutu["raku_dir_2"] = $fdata;
//	raku_dir_3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 86;
	$fdata["strName"] = "raku_dir_3";
	$fdata["GoodName"] = "raku_dir_3";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","raku_dir_3");
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








	$tdatakaibutu["raku_dir_3"] = $fdata;
//	raku_dir_4
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 87;
	$fdata["strName"] = "raku_dir_4";
	$fdata["GoodName"] = "raku_dir_4";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","raku_dir_4");
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








	$tdatakaibutu["raku_dir_4"] = $fdata;
//	raku_dir_5
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 88;
	$fdata["strName"] = "raku_dir_5";
	$fdata["GoodName"] = "raku_dir_5";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","raku_dir_5");
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








	$tdatakaibutu["raku_dir_5"] = $fdata;
//	raku_dir_result
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 89;
	$fdata["strName"] = "raku_dir_result";
	$fdata["GoodName"] = "raku_dir_result";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","raku_dir_result");
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








	$tdatakaibutu["raku_dir_result"] = $fdata;
//	raku_tag_result
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 90;
	$fdata["strName"] = "raku_tag_result";
	$fdata["GoodName"] = "raku_tag_result";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","raku_tag_result");
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




	$tdatakaibutu["raku_tag_result"] = $fdata;
//	serial_number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 91;
	$fdata["strName"] = "serial_number";
	$fdata["GoodName"] = "serial_number";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","serial_number");
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




	$tdatakaibutu["serial_number"] = $fdata;
//	Exhibition_Date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 92;
	$fdata["strName"] = "Exhibition_Date";
	$fdata["GoodName"] = "Exhibition_Date";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","Exhibition_Date");
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








	$tdatakaibutu["Exhibition_Date"] = $fdata;
//	search_keyword
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 93;
	$fdata["strName"] = "search_keyword";
	$fdata["GoodName"] = "search_keyword";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","search_keyword");
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




	$tdatakaibutu["search_keyword"] = $fdata;
//	stamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 94;
	$fdata["strName"] = "stamp";
	$fdata["GoodName"] = "stamp";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","stamp");
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




	$tdatakaibutu["stamp"] = $fdata;
//	motif
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 95;
	$fdata["strName"] = "motif";
	$fdata["GoodName"] = "motif";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","motif");
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




	$tdatakaibutu["motif"] = $fdata;
//	Setting
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 96;
	$fdata["strName"] = "Setting";
	$fdata["GoodName"] = "Setting";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","Setting");
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




	$tdatakaibutu["Setting"] = $fdata;
//	processing
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 97;
	$fdata["strName"] = "processing";
	$fdata["GoodName"] = "processing";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","processing");
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




	$tdatakaibutu["processing"] = $fdata;
//	Sleeve_Length
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 98;
	$fdata["strName"] = "Sleeve_Length";
	$fdata["GoodName"] = "Sleeve_Length";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","Sleeve_Length");
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




	$tdatakaibutu["Sleeve_Length"] = $fdata;
//	length
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 99;
	$fdata["strName"] = "length";
	$fdata["GoodName"] = "length";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","length");
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




	$tdatakaibutu["length"] = $fdata;
//	Ring_size
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 100;
	$fdata["strName"] = "Ring_size";
	$fdata["GoodName"] = "Ring_size";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","Ring_size");
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




	$tdatakaibutu["Ring_size"] = $fdata;
//	price_for_site
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 101;
	$fdata["strName"] = "price_for_site";
	$fdata["GoodName"] = "price_for_site";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","price_for_site");
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








	$tdatakaibutu["price_for_site"] = $fdata;
//	yahoo_category_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 102;
	$fdata["strName"] = "yahoo_category_id";
	$fdata["GoodName"] = "yahoo_category_id";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","yahoo_category_id");
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








	$tdatakaibutu["yahoo_category_id"] = $fdata;
//	Qty
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 103;
	$fdata["strName"] = "Qty";
	$fdata["GoodName"] = "Qty";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","Qty");
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








	$tdatakaibutu["Qty"] = $fdata;
//	sales_period
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 104;
	$fdata["strName"] = "sales_period";
	$fdata["GoodName"] = "sales_period";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","sales_period");
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








	$tdatakaibutu["sales_period"] = $fdata;
//	starting_price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 105;
	$fdata["strName"] = "starting_price";
	$fdata["GoodName"] = "starting_price";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","starting_price");
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








	$tdatakaibutu["starting_price"] = $fdata;
//	ecc_seq
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 106;
	$fdata["strName"] = "ecc_seq";
	$fdata["GoodName"] = "ecc_seq";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("kaibutu","ecc_seq");
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




	$tdatakaibutu["ecc_seq"] = $fdata;
//	yahoo_junle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 107;
	$fdata["strName"] = "yahoo_junle";
	$fdata["GoodName"] = "yahoo_junle";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","yahoo_junle");
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








	$tdatakaibutu["yahoo_junle"] = $fdata;
//	logo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 108;
	$fdata["strName"] = "logo";
	$fdata["GoodName"] = "logo";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","logo");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "logo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`logo`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatakaibutu["logo"] = $fdata;
//	parts
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 109;
	$fdata["strName"] = "parts";
	$fdata["GoodName"] = "parts";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","parts");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "parts";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`parts`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatakaibutu["parts"] = $fdata;
//	country_of_origin
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 110;
	$fdata["strName"] = "country_of_origin";
	$fdata["GoodName"] = "country_of_origin";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","country_of_origin");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "country_of_origin";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`country_of_origin`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatakaibutu["country_of_origin"] = $fdata;
//	zipper
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 111;
	$fdata["strName"] = "zipper";
	$fdata["GoodName"] = "zipper";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","zipper");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "zipper";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`zipper`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatakaibutu["zipper"] = $fdata;
//	guarantee
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 112;
	$fdata["strName"] = "guarantee";
	$fdata["GoodName"] = "guarantee";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","guarantee");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "guarantee";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`guarantee`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatakaibutu["guarantee"] = $fdata;
//	errors
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 113;
	$fdata["strName"] = "errors";
	$fdata["GoodName"] = "errors";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","errors");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "errors";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`errors`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatakaibutu["errors"] = $fdata;
//	designer
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 114;
	$fdata["strName"] = "designer";
	$fdata["GoodName"] = "designer";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","designer");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "designer";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`designer`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatakaibutu["designer"] = $fdata;
//	hahakai
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 115;
	$fdata["strName"] = "hahakai";
	$fdata["GoodName"] = "hahakai";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","hahakai");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "hahakai";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`hahakai`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatakaibutu["hahakai"] = $fdata;
//	effect
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 116;
	$fdata["strName"] = "effect";
	$fdata["GoodName"] = "effect";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","effect");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "effect";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`effect`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatakaibutu["effect"] = $fdata;
//	shape
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 117;
	$fdata["strName"] = "shape";
	$fdata["GoodName"] = "shape";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","shape");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "shape";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`shape`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatakaibutu["shape"] = $fdata;
//	cutting_style
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 118;
	$fdata["strName"] = "cutting_style";
	$fdata["GoodName"] = "cutting_style";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","cutting_style");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "cutting_style";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`cutting_style`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatakaibutu["cutting_style"] = $fdata;
//	chain_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 119;
	$fdata["strName"] = "chain_type";
	$fdata["GoodName"] = "chain_type";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","chain_type");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "chain_type";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`chain_type`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatakaibutu["chain_type"] = $fdata;
//	number_of_stones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 120;
	$fdata["strName"] = "number_of_stones";
	$fdata["GoodName"] = "number_of_stones";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","number_of_stones");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "number_of_stones";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`number_of_stones`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatakaibutu["number_of_stones"] = $fdata;
//	amount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 121;
	$fdata["strName"] = "amount";
	$fdata["GoodName"] = "amount";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","amount");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "amount";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`amount`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatakaibutu["amount"] = $fdata;
//	satei_error
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 122;
	$fdata["strName"] = "satei_error";
	$fdata["GoodName"] = "satei_error";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","satei_error");
	$fdata["FieldType"] = 201;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "satei_error";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`satei_error`";

	
	
			
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








	$tdatakaibutu["satei_error"] = $fdata;
//	producing_area
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 123;
	$fdata["strName"] = "producing_area";
	$fdata["GoodName"] = "producing_area";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","producing_area");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "producing_area";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`producing_area`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatakaibutu["producing_area"] = $fdata;
//	shape_supplement
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 124;
	$fdata["strName"] = "shape_supplement";
	$fdata["GoodName"] = "shape_supplement";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","shape_supplement");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "shape_supplement";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`shape_supplement`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatakaibutu["shape_supplement"] = $fdata;
//	side_gem
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 125;
	$fdata["strName"] = "side_gem";
	$fdata["GoodName"] = "side_gem";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","side_gem");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "side_gem";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`side_gem`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatakaibutu["side_gem"] = $fdata;
//	product_style
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 126;
	$fdata["strName"] = "product_style";
	$fdata["GoodName"] = "product_style";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","product_style");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "product_style";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`product_style`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatakaibutu["product_style"] = $fdata;
//	collar_neck_line
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 127;
	$fdata["strName"] = "collar_neck_line";
	$fdata["GoodName"] = "collar_neck_line";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","collar_neck_line");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "collar_neck_line";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`collar_neck_line`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatakaibutu["collar_neck_line"] = $fdata;
//	breast
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 128;
	$fdata["strName"] = "breast";
	$fdata["GoodName"] = "breast";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","breast");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "breast";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`breast`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatakaibutu["breast"] = $fdata;
//	silhouette
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 129;
	$fdata["strName"] = "silhouette";
	$fdata["GoodName"] = "silhouette";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","silhouette");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "silhouette";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`silhouette`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatakaibutu["silhouette"] = $fdata;
//	sleeve
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 130;
	$fdata["strName"] = "sleeve";
	$fdata["GoodName"] = "sleeve";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","sleeve");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "sleeve";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`sleeve`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatakaibutu["sleeve"] = $fdata;
//	unit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 131;
	$fdata["strName"] = "unit";
	$fdata["GoodName"] = "unit";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","unit");
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








	$tdatakaibutu["unit"] = $fdata;
//	hall_mark
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 132;
	$fdata["strName"] = "hall_mark";
	$fdata["GoodName"] = "hall_mark";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","hall_mark");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "hall_mark";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`hall_mark`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatakaibutu["hall_mark"] = $fdata;
//	plate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 133;
	$fdata["strName"] = "plate";
	$fdata["GoodName"] = "plate";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","plate");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "plate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`plate`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatakaibutu["plate"] = $fdata;
//	toe
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 134;
	$fdata["strName"] = "toe";
	$fdata["GoodName"] = "toe";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","toe");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "toe";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`toe`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatakaibutu["toe"] = $fdata;
//	heel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 135;
	$fdata["strName"] = "heel";
	$fdata["GoodName"] = "heel";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","heel");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "heel";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`heel`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatakaibutu["heel"] = $fdata;
//	cloth
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 136;
	$fdata["strName"] = "cloth";
	$fdata["GoodName"] = "cloth";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","cloth");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "cloth";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`cloth`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatakaibutu["cloth"] = $fdata;
//	official_url
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 137;
	$fdata["strName"] = "official_url";
	$fdata["GoodName"] = "official_url";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","official_url");
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








	$tdatakaibutu["official_url"] = $fdata;
//	return_output_flag
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 138;
	$fdata["strName"] = "return_output_flag";
	$fdata["GoodName"] = "return_output_flag";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","return_output_flag");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "return_output_flag";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`return_output_flag`";

	
	
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




	$tdatakaibutu["return_output_flag"] = $fdata;
//	shouhin.updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 139;
	$fdata["strName"] = "shouhin.updated_at";
	$fdata["GoodName"] = "shouhin_updated_at";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","shouhin_updated_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "updated_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`updated_at`";

	
	
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




	$tdatakaibutu["shouhin.updated_at"] = $fdata;
//	tentou_label_output_flag
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 140;
	$fdata["strName"] = "tentou_label_output_flag";
	$fdata["GoodName"] = "tentou_label_output_flag";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("kaibutu","tentou_label_output_flag");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

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




	$tdatakaibutu["tentou_label_output_flag"] = $fdata;


$tables_data["kaibutu"]=&$tdatakaibutu;
$field_labels["kaibutu"] = &$fieldLabelskaibutu;
$fieldToolTips["kaibutu"] = &$fieldToolTipskaibutu;
$placeHolders["kaibutu"] = &$placeHolderskaibutu;
$page_titles["kaibutu"] = &$pageTitleskaibutu;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["kaibutu"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["kaibutu"] = array();


	
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
					$masterTablesData["kaibutu"][0] = $masterParams;
				$masterTablesData["kaibutu"][0]["masterKeys"] = array();
	$masterTablesData["kaibutu"][0]["masterKeys"][]="ecc_id";
				$masterTablesData["kaibutu"][0]["detailKeys"] = array();
	$masterTablesData["kaibutu"][0]["detailKeys"][]="ecc_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_kaibutu()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`shouhin`.`product_id`,  `shouhin`.`category_id`,  `shouhin`.`goods_title`,  `shouhin`.`title`,  `shouhin`.`sub_category_id1`,  `shouhin`.`ecc_id`,  `shouhin`.`price`,  `shouhin`.`yahoo`,  `shouhin`.`remark`,  `shouhin`.`sales_price`,  `shouhin`.`description`,  `shouhin`.`status`,  `shouhin`.`product_num`,  `shouhin`.`yahoo_size`,  `shouhin`.`yahoo_title`,  `shouhin`.`yahoo_sankou_uwadai`,  `shouhin`.`yahoo_sozai`,  `shouhin`.`yahoo_color`,  `shouhin`.`yahoo_kataban`,  `shouhin`.`yahoo_condition1`,  `shouhin`.`yahoo_condition2`,  `shouhin`.`yahoo_fuzokuhin`,  `shouhin`.`yahoo_sinaban`,  `shouhin`.`yahoo_saisun_sha`,  `shouhin`.`yahoo_sex`,  `shouhin`.`box_id`,  `shouhin`.`nyuukin_price`,  `shouhin`.`updated_by`,  `shouhin`.`raku_title`,  `shouhin`.`raku_hyoujisaki_category2`,  `shouhin`.`raku_hyoujisaki_category`,  `shouhin`.`raku_hyoujisaki_category3`,  `shouhin`.`timesta`,  `shouhin`.`saisun_start`,  `shouhin`.`saisun_end`,  `shouhin`.`label_output_flag`,  `shouhin`.`season`,  `shouhin`.`kanryou_henbi`,  `shouhin`.`box_sort`,  `shouhin`.`satei_by`,  `shouhin`.`kaitori_by`,  `shouhin`.`comment`,  `shouhin`.`satei_hi`,  `shouhin`.`kaitory_hi`,  `shouhin`.`REG_PHOTOGRAPHER`,  `shouhin`.`REG_PACKINGS`,  `shouhin`.`REG_KAKOU_DATE`,  `shouhin`.`REG_KAKOU`,  `shouhin`.`REG_EXHIBITOR`,  `shouhin`.`REG_PHOTOGRAPHER_DATE`,  `shouhin`.`DT_PACKING_DATE`,  `shouhin`.`DT_UP_DATE`,  `shouhin`.`AWAZU_DATE`,  `shouhin`.`AWAZU_NIN`,  `shouhin`.`sabun_date`,  `shouhin`.`browseid`,  `shouhin`.`browsenode`,  `shouhin`.`gold_property`,  `shouhin`.`ichiba_title`,  `shouhin`.`Gram`,  `shouhin`.`Parent_stone`,  `shouhin`.`Aside_stone`,  `shouhin`.`Appraiser`,  `shouhin`.`Remarks`,  `shouhin`.`Destination_selling`,  `shouhin`.`Finish`,  `shouhin`.`Discrimination`,  `shouhin`.`accessories`,  `shouhin`.`priority`,  `shouhin`.`A_storage`,  `shouhin`.`price_per_gram`,  `shouhin`.`price_per_parent_stone`,  `shouhin`.`price_per_aside_stone`,  `shouhin`.`price_secret`,  `shouhin`.`sales_price_secret`,  `shouhin`.`eq`,  `shouhin`.`en`,  `shouhin`.`line`,  `shouhin`.`item_name`,  `shouhin`.`handle`,  `shouhin`.`yahoo_color_id`,  `shouhin`.`raku_hyoujisaki_category4`,  `shouhin`.`raku_hyoujisaki_category5`,  `shouhin`.`raku_dir_1`,  `shouhin`.`raku_dir_2`,  `shouhin`.`raku_dir_3`,  `shouhin`.`raku_dir_4`,  `shouhin`.`raku_dir_5`,  `shouhin`.`raku_dir_result`,  `shouhin`.`raku_tag_result`,  `shouhin`.`serial_number`,  `shouhin`.`Exhibition_Date`,  `shouhin`.`search_keyword`,  `shouhin`.`stamp`,  `shouhin`.`motif`,  `shouhin`.`Setting`,  `shouhin`.`processing`,  `shouhin`.`Sleeve_Length`,  `shouhin`.`length`,  `shouhin`.`Ring_size`,  `shouhin`.`price_for_site`,  `shouhin`.`yahoo_category_id`,  `shouhin`.`Qty`,  `shouhin`.`sales_period`,  `shouhin`.`starting_price`,  `Eoc`.`ecc_seq`,  `shouhin`.`yahoo_junle`,  `shouhin`.`logo`,  `shouhin`.`parts`,  `shouhin`.`country_of_origin`,  `shouhin`.`zipper`,  `shouhin`.`guarantee`,  `shouhin`.`errors`,  `shouhin`.`designer`,  `shouhin`.`hahakai`,  `shouhin`.`effect`,  `shouhin`.`shape`,  `shouhin`.`cutting_style`,  `shouhin`.`chain_type`,  `shouhin`.`number_of_stones`,  `shouhin`.`amount`,  `shouhin`.`satei_error`,  `shouhin`.`producing_area`,  `shouhin`.`shape_supplement`,  `shouhin`.`side_gem`,  `shouhin`.`product_style`,  `shouhin`.`collar_neck_line`,  `shouhin`.`breast`,  `shouhin`.`silhouette`,  `shouhin`.`sleeve`,  `shouhin`.`unit`,  `shouhin`.`hall_mark`,  `shouhin`.`plate`,  `shouhin`.`toe`,  `shouhin`.`heel`,  `shouhin`.`cloth`,  `shouhin`.`official_url`,  `shouhin`.`return_output_flag`,  `shouhin`.`updated_at` AS `shouhin.updated_at`,  `shouhin`.`tentou_label_output_flag`";
$proto0["m_strFrom"] = "FROM `shouhin`  LEFT OUTER JOIN `Eoc` ON `shouhin`.`ecc_id` = `Eoc`.`ecc_id`";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY `shouhin`.`product_id` DESC";
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
	"m_strName" => "product_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto6["m_sql"] = "`shouhin`.`product_id`";
$proto6["m_srcTableName"] = "kaibutu";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "category_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto8["m_sql"] = "`shouhin`.`category_id`";
$proto8["m_srcTableName"] = "kaibutu";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "goods_title",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto10["m_sql"] = "`shouhin`.`goods_title`";
$proto10["m_srcTableName"] = "kaibutu";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "title",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto12["m_sql"] = "`shouhin`.`title`";
$proto12["m_srcTableName"] = "kaibutu";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "sub_category_id1",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto14["m_sql"] = "`shouhin`.`sub_category_id1`";
$proto14["m_srcTableName"] = "kaibutu";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "ecc_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto16["m_sql"] = "`shouhin`.`ecc_id`";
$proto16["m_srcTableName"] = "kaibutu";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "price",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto18["m_sql"] = "`shouhin`.`price`";
$proto18["m_srcTableName"] = "kaibutu";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto20["m_sql"] = "`shouhin`.`yahoo`";
$proto20["m_srcTableName"] = "kaibutu";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "remark",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto22["m_sql"] = "`shouhin`.`remark`";
$proto22["m_srcTableName"] = "kaibutu";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "sales_price",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto24["m_sql"] = "`shouhin`.`sales_price`";
$proto24["m_srcTableName"] = "kaibutu";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto26["m_sql"] = "`shouhin`.`description`";
$proto26["m_srcTableName"] = "kaibutu";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto28["m_sql"] = "`shouhin`.`status`";
$proto28["m_srcTableName"] = "kaibutu";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "product_num",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto30["m_sql"] = "`shouhin`.`product_num`";
$proto30["m_srcTableName"] = "kaibutu";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_size",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto32["m_sql"] = "`shouhin`.`yahoo_size`";
$proto32["m_srcTableName"] = "kaibutu";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_title",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto34["m_sql"] = "`shouhin`.`yahoo_title`";
$proto34["m_srcTableName"] = "kaibutu";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_sankou_uwadai",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto36["m_sql"] = "`shouhin`.`yahoo_sankou_uwadai`";
$proto36["m_srcTableName"] = "kaibutu";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_sozai",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto38["m_sql"] = "`shouhin`.`yahoo_sozai`";
$proto38["m_srcTableName"] = "kaibutu";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_color",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto40["m_sql"] = "`shouhin`.`yahoo_color`";
$proto40["m_srcTableName"] = "kaibutu";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_kataban",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto42["m_sql"] = "`shouhin`.`yahoo_kataban`";
$proto42["m_srcTableName"] = "kaibutu";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_condition1",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto44["m_sql"] = "`shouhin`.`yahoo_condition1`";
$proto44["m_srcTableName"] = "kaibutu";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_condition2",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto46["m_sql"] = "`shouhin`.`yahoo_condition2`";
$proto46["m_srcTableName"] = "kaibutu";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_fuzokuhin",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto48["m_sql"] = "`shouhin`.`yahoo_fuzokuhin`";
$proto48["m_srcTableName"] = "kaibutu";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_sinaban",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto50["m_sql"] = "`shouhin`.`yahoo_sinaban`";
$proto50["m_srcTableName"] = "kaibutu";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_saisun_sha",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto52["m_sql"] = "`shouhin`.`yahoo_saisun_sha`";
$proto52["m_srcTableName"] = "kaibutu";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_sex",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto54["m_sql"] = "`shouhin`.`yahoo_sex`";
$proto54["m_srcTableName"] = "kaibutu";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "box_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto56["m_sql"] = "`shouhin`.`box_id`";
$proto56["m_srcTableName"] = "kaibutu";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "nyuukin_price",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto58["m_sql"] = "`shouhin`.`nyuukin_price`";
$proto58["m_srcTableName"] = "kaibutu";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto60["m_sql"] = "`shouhin`.`updated_by`";
$proto60["m_srcTableName"] = "kaibutu";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "raku_title",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto62["m_sql"] = "`shouhin`.`raku_title`";
$proto62["m_srcTableName"] = "kaibutu";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "raku_hyoujisaki_category2",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto64["m_sql"] = "`shouhin`.`raku_hyoujisaki_category2`";
$proto64["m_srcTableName"] = "kaibutu";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "raku_hyoujisaki_category",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto66["m_sql"] = "`shouhin`.`raku_hyoujisaki_category`";
$proto66["m_srcTableName"] = "kaibutu";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "raku_hyoujisaki_category3",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto68["m_sql"] = "`shouhin`.`raku_hyoujisaki_category3`";
$proto68["m_srcTableName"] = "kaibutu";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "timesta",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto70["m_sql"] = "`shouhin`.`timesta`";
$proto70["m_srcTableName"] = "kaibutu";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "saisun_start",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto72["m_sql"] = "`shouhin`.`saisun_start`";
$proto72["m_srcTableName"] = "kaibutu";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "saisun_end",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto74["m_sql"] = "`shouhin`.`saisun_end`";
$proto74["m_srcTableName"] = "kaibutu";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "label_output_flag",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto76["m_sql"] = "`shouhin`.`label_output_flag`";
$proto76["m_srcTableName"] = "kaibutu";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "season",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto78["m_sql"] = "`shouhin`.`season`";
$proto78["m_srcTableName"] = "kaibutu";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "kanryou_henbi",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto80["m_sql"] = "`shouhin`.`kanryou_henbi`";
$proto80["m_srcTableName"] = "kaibutu";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "box_sort",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto82["m_sql"] = "`shouhin`.`box_sort`";
$proto82["m_srcTableName"] = "kaibutu";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "satei_by",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto84["m_sql"] = "`shouhin`.`satei_by`";
$proto84["m_srcTableName"] = "kaibutu";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "kaitori_by",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto86["m_sql"] = "`shouhin`.`kaitori_by`";
$proto86["m_srcTableName"] = "kaibutu";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "comment",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto88["m_sql"] = "`shouhin`.`comment`";
$proto88["m_srcTableName"] = "kaibutu";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "satei_hi",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto90["m_sql"] = "`shouhin`.`satei_hi`";
$proto90["m_srcTableName"] = "kaibutu";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLField(array(
	"m_strName" => "kaitory_hi",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto92["m_sql"] = "`shouhin`.`kaitory_hi`";
$proto92["m_srcTableName"] = "kaibutu";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "";
$obj = new SQLFieldListItem($proto92);

$proto0["m_fieldlist"][]=$obj;
						$proto94=array();
			$obj = new SQLField(array(
	"m_strName" => "REG_PHOTOGRAPHER",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto94["m_sql"] = "`shouhin`.`REG_PHOTOGRAPHER`";
$proto94["m_srcTableName"] = "kaibutu";
$proto94["m_expr"]=$obj;
$proto94["m_alias"] = "";
$obj = new SQLFieldListItem($proto94);

$proto0["m_fieldlist"][]=$obj;
						$proto96=array();
			$obj = new SQLField(array(
	"m_strName" => "REG_PACKINGS",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto96["m_sql"] = "`shouhin`.`REG_PACKINGS`";
$proto96["m_srcTableName"] = "kaibutu";
$proto96["m_expr"]=$obj;
$proto96["m_alias"] = "";
$obj = new SQLFieldListItem($proto96);

$proto0["m_fieldlist"][]=$obj;
						$proto98=array();
			$obj = new SQLField(array(
	"m_strName" => "REG_KAKOU_DATE",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto98["m_sql"] = "`shouhin`.`REG_KAKOU_DATE`";
$proto98["m_srcTableName"] = "kaibutu";
$proto98["m_expr"]=$obj;
$proto98["m_alias"] = "";
$obj = new SQLFieldListItem($proto98);

$proto0["m_fieldlist"][]=$obj;
						$proto100=array();
			$obj = new SQLField(array(
	"m_strName" => "REG_KAKOU",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto100["m_sql"] = "`shouhin`.`REG_KAKOU`";
$proto100["m_srcTableName"] = "kaibutu";
$proto100["m_expr"]=$obj;
$proto100["m_alias"] = "";
$obj = new SQLFieldListItem($proto100);

$proto0["m_fieldlist"][]=$obj;
						$proto102=array();
			$obj = new SQLField(array(
	"m_strName" => "REG_EXHIBITOR",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto102["m_sql"] = "`shouhin`.`REG_EXHIBITOR`";
$proto102["m_srcTableName"] = "kaibutu";
$proto102["m_expr"]=$obj;
$proto102["m_alias"] = "";
$obj = new SQLFieldListItem($proto102);

$proto0["m_fieldlist"][]=$obj;
						$proto104=array();
			$obj = new SQLField(array(
	"m_strName" => "REG_PHOTOGRAPHER_DATE",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto104["m_sql"] = "`shouhin`.`REG_PHOTOGRAPHER_DATE`";
$proto104["m_srcTableName"] = "kaibutu";
$proto104["m_expr"]=$obj;
$proto104["m_alias"] = "";
$obj = new SQLFieldListItem($proto104);

$proto0["m_fieldlist"][]=$obj;
						$proto106=array();
			$obj = new SQLField(array(
	"m_strName" => "DT_PACKING_DATE",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto106["m_sql"] = "`shouhin`.`DT_PACKING_DATE`";
$proto106["m_srcTableName"] = "kaibutu";
$proto106["m_expr"]=$obj;
$proto106["m_alias"] = "";
$obj = new SQLFieldListItem($proto106);

$proto0["m_fieldlist"][]=$obj;
						$proto108=array();
			$obj = new SQLField(array(
	"m_strName" => "DT_UP_DATE",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto108["m_sql"] = "`shouhin`.`DT_UP_DATE`";
$proto108["m_srcTableName"] = "kaibutu";
$proto108["m_expr"]=$obj;
$proto108["m_alias"] = "";
$obj = new SQLFieldListItem($proto108);

$proto0["m_fieldlist"][]=$obj;
						$proto110=array();
			$obj = new SQLField(array(
	"m_strName" => "AWAZU_DATE",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto110["m_sql"] = "`shouhin`.`AWAZU_DATE`";
$proto110["m_srcTableName"] = "kaibutu";
$proto110["m_expr"]=$obj;
$proto110["m_alias"] = "";
$obj = new SQLFieldListItem($proto110);

$proto0["m_fieldlist"][]=$obj;
						$proto112=array();
			$obj = new SQLField(array(
	"m_strName" => "AWAZU_NIN",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto112["m_sql"] = "`shouhin`.`AWAZU_NIN`";
$proto112["m_srcTableName"] = "kaibutu";
$proto112["m_expr"]=$obj;
$proto112["m_alias"] = "";
$obj = new SQLFieldListItem($proto112);

$proto0["m_fieldlist"][]=$obj;
						$proto114=array();
			$obj = new SQLField(array(
	"m_strName" => "sabun_date",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto114["m_sql"] = "`shouhin`.`sabun_date`";
$proto114["m_srcTableName"] = "kaibutu";
$proto114["m_expr"]=$obj;
$proto114["m_alias"] = "";
$obj = new SQLFieldListItem($proto114);

$proto0["m_fieldlist"][]=$obj;
						$proto116=array();
			$obj = new SQLField(array(
	"m_strName" => "browseid",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto116["m_sql"] = "`shouhin`.`browseid`";
$proto116["m_srcTableName"] = "kaibutu";
$proto116["m_expr"]=$obj;
$proto116["m_alias"] = "";
$obj = new SQLFieldListItem($proto116);

$proto0["m_fieldlist"][]=$obj;
						$proto118=array();
			$obj = new SQLField(array(
	"m_strName" => "browsenode",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto118["m_sql"] = "`shouhin`.`browsenode`";
$proto118["m_srcTableName"] = "kaibutu";
$proto118["m_expr"]=$obj;
$proto118["m_alias"] = "";
$obj = new SQLFieldListItem($proto118);

$proto0["m_fieldlist"][]=$obj;
						$proto120=array();
			$obj = new SQLField(array(
	"m_strName" => "gold_property",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto120["m_sql"] = "`shouhin`.`gold_property`";
$proto120["m_srcTableName"] = "kaibutu";
$proto120["m_expr"]=$obj;
$proto120["m_alias"] = "";
$obj = new SQLFieldListItem($proto120);

$proto0["m_fieldlist"][]=$obj;
						$proto122=array();
			$obj = new SQLField(array(
	"m_strName" => "ichiba_title",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto122["m_sql"] = "`shouhin`.`ichiba_title`";
$proto122["m_srcTableName"] = "kaibutu";
$proto122["m_expr"]=$obj;
$proto122["m_alias"] = "";
$obj = new SQLFieldListItem($proto122);

$proto0["m_fieldlist"][]=$obj;
						$proto124=array();
			$obj = new SQLField(array(
	"m_strName" => "Gram",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto124["m_sql"] = "`shouhin`.`Gram`";
$proto124["m_srcTableName"] = "kaibutu";
$proto124["m_expr"]=$obj;
$proto124["m_alias"] = "";
$obj = new SQLFieldListItem($proto124);

$proto0["m_fieldlist"][]=$obj;
						$proto126=array();
			$obj = new SQLField(array(
	"m_strName" => "Parent_stone",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto126["m_sql"] = "`shouhin`.`Parent_stone`";
$proto126["m_srcTableName"] = "kaibutu";
$proto126["m_expr"]=$obj;
$proto126["m_alias"] = "";
$obj = new SQLFieldListItem($proto126);

$proto0["m_fieldlist"][]=$obj;
						$proto128=array();
			$obj = new SQLField(array(
	"m_strName" => "Aside_stone",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto128["m_sql"] = "`shouhin`.`Aside_stone`";
$proto128["m_srcTableName"] = "kaibutu";
$proto128["m_expr"]=$obj;
$proto128["m_alias"] = "";
$obj = new SQLFieldListItem($proto128);

$proto0["m_fieldlist"][]=$obj;
						$proto130=array();
			$obj = new SQLField(array(
	"m_strName" => "Appraiser",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto130["m_sql"] = "`shouhin`.`Appraiser`";
$proto130["m_srcTableName"] = "kaibutu";
$proto130["m_expr"]=$obj;
$proto130["m_alias"] = "";
$obj = new SQLFieldListItem($proto130);

$proto0["m_fieldlist"][]=$obj;
						$proto132=array();
			$obj = new SQLField(array(
	"m_strName" => "Remarks",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto132["m_sql"] = "`shouhin`.`Remarks`";
$proto132["m_srcTableName"] = "kaibutu";
$proto132["m_expr"]=$obj;
$proto132["m_alias"] = "";
$obj = new SQLFieldListItem($proto132);

$proto0["m_fieldlist"][]=$obj;
						$proto134=array();
			$obj = new SQLField(array(
	"m_strName" => "Destination_selling",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto134["m_sql"] = "`shouhin`.`Destination_selling`";
$proto134["m_srcTableName"] = "kaibutu";
$proto134["m_expr"]=$obj;
$proto134["m_alias"] = "";
$obj = new SQLFieldListItem($proto134);

$proto0["m_fieldlist"][]=$obj;
						$proto136=array();
			$obj = new SQLField(array(
	"m_strName" => "Finish",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto136["m_sql"] = "`shouhin`.`Finish`";
$proto136["m_srcTableName"] = "kaibutu";
$proto136["m_expr"]=$obj;
$proto136["m_alias"] = "";
$obj = new SQLFieldListItem($proto136);

$proto0["m_fieldlist"][]=$obj;
						$proto138=array();
			$obj = new SQLField(array(
	"m_strName" => "Discrimination",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto138["m_sql"] = "`shouhin`.`Discrimination`";
$proto138["m_srcTableName"] = "kaibutu";
$proto138["m_expr"]=$obj;
$proto138["m_alias"] = "";
$obj = new SQLFieldListItem($proto138);

$proto0["m_fieldlist"][]=$obj;
						$proto140=array();
			$obj = new SQLField(array(
	"m_strName" => "accessories",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto140["m_sql"] = "`shouhin`.`accessories`";
$proto140["m_srcTableName"] = "kaibutu";
$proto140["m_expr"]=$obj;
$proto140["m_alias"] = "";
$obj = new SQLFieldListItem($proto140);

$proto0["m_fieldlist"][]=$obj;
						$proto142=array();
			$obj = new SQLField(array(
	"m_strName" => "priority",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto142["m_sql"] = "`shouhin`.`priority`";
$proto142["m_srcTableName"] = "kaibutu";
$proto142["m_expr"]=$obj;
$proto142["m_alias"] = "";
$obj = new SQLFieldListItem($proto142);

$proto0["m_fieldlist"][]=$obj;
						$proto144=array();
			$obj = new SQLField(array(
	"m_strName" => "A_storage",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto144["m_sql"] = "`shouhin`.`A_storage`";
$proto144["m_srcTableName"] = "kaibutu";
$proto144["m_expr"]=$obj;
$proto144["m_alias"] = "";
$obj = new SQLFieldListItem($proto144);

$proto0["m_fieldlist"][]=$obj;
						$proto146=array();
			$obj = new SQLField(array(
	"m_strName" => "price_per_gram",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto146["m_sql"] = "`shouhin`.`price_per_gram`";
$proto146["m_srcTableName"] = "kaibutu";
$proto146["m_expr"]=$obj;
$proto146["m_alias"] = "";
$obj = new SQLFieldListItem($proto146);

$proto0["m_fieldlist"][]=$obj;
						$proto148=array();
			$obj = new SQLField(array(
	"m_strName" => "price_per_parent_stone",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto148["m_sql"] = "`shouhin`.`price_per_parent_stone`";
$proto148["m_srcTableName"] = "kaibutu";
$proto148["m_expr"]=$obj;
$proto148["m_alias"] = "";
$obj = new SQLFieldListItem($proto148);

$proto0["m_fieldlist"][]=$obj;
						$proto150=array();
			$obj = new SQLField(array(
	"m_strName" => "price_per_aside_stone",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto150["m_sql"] = "`shouhin`.`price_per_aside_stone`";
$proto150["m_srcTableName"] = "kaibutu";
$proto150["m_expr"]=$obj;
$proto150["m_alias"] = "";
$obj = new SQLFieldListItem($proto150);

$proto0["m_fieldlist"][]=$obj;
						$proto152=array();
			$obj = new SQLField(array(
	"m_strName" => "price_secret",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto152["m_sql"] = "`shouhin`.`price_secret`";
$proto152["m_srcTableName"] = "kaibutu";
$proto152["m_expr"]=$obj;
$proto152["m_alias"] = "";
$obj = new SQLFieldListItem($proto152);

$proto0["m_fieldlist"][]=$obj;
						$proto154=array();
			$obj = new SQLField(array(
	"m_strName" => "sales_price_secret",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto154["m_sql"] = "`shouhin`.`sales_price_secret`";
$proto154["m_srcTableName"] = "kaibutu";
$proto154["m_expr"]=$obj;
$proto154["m_alias"] = "";
$obj = new SQLFieldListItem($proto154);

$proto0["m_fieldlist"][]=$obj;
						$proto156=array();
			$obj = new SQLField(array(
	"m_strName" => "eq",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto156["m_sql"] = "`shouhin`.`eq`";
$proto156["m_srcTableName"] = "kaibutu";
$proto156["m_expr"]=$obj;
$proto156["m_alias"] = "";
$obj = new SQLFieldListItem($proto156);

$proto0["m_fieldlist"][]=$obj;
						$proto158=array();
			$obj = new SQLField(array(
	"m_strName" => "en",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto158["m_sql"] = "`shouhin`.`en`";
$proto158["m_srcTableName"] = "kaibutu";
$proto158["m_expr"]=$obj;
$proto158["m_alias"] = "";
$obj = new SQLFieldListItem($proto158);

$proto0["m_fieldlist"][]=$obj;
						$proto160=array();
			$obj = new SQLField(array(
	"m_strName" => "line",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto160["m_sql"] = "`shouhin`.`line`";
$proto160["m_srcTableName"] = "kaibutu";
$proto160["m_expr"]=$obj;
$proto160["m_alias"] = "";
$obj = new SQLFieldListItem($proto160);

$proto0["m_fieldlist"][]=$obj;
						$proto162=array();
			$obj = new SQLField(array(
	"m_strName" => "item_name",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto162["m_sql"] = "`shouhin`.`item_name`";
$proto162["m_srcTableName"] = "kaibutu";
$proto162["m_expr"]=$obj;
$proto162["m_alias"] = "";
$obj = new SQLFieldListItem($proto162);

$proto0["m_fieldlist"][]=$obj;
						$proto164=array();
			$obj = new SQLField(array(
	"m_strName" => "handle",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto164["m_sql"] = "`shouhin`.`handle`";
$proto164["m_srcTableName"] = "kaibutu";
$proto164["m_expr"]=$obj;
$proto164["m_alias"] = "";
$obj = new SQLFieldListItem($proto164);

$proto0["m_fieldlist"][]=$obj;
						$proto166=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_color_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto166["m_sql"] = "`shouhin`.`yahoo_color_id`";
$proto166["m_srcTableName"] = "kaibutu";
$proto166["m_expr"]=$obj;
$proto166["m_alias"] = "";
$obj = new SQLFieldListItem($proto166);

$proto0["m_fieldlist"][]=$obj;
						$proto168=array();
			$obj = new SQLField(array(
	"m_strName" => "raku_hyoujisaki_category4",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto168["m_sql"] = "`shouhin`.`raku_hyoujisaki_category4`";
$proto168["m_srcTableName"] = "kaibutu";
$proto168["m_expr"]=$obj;
$proto168["m_alias"] = "";
$obj = new SQLFieldListItem($proto168);

$proto0["m_fieldlist"][]=$obj;
						$proto170=array();
			$obj = new SQLField(array(
	"m_strName" => "raku_hyoujisaki_category5",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto170["m_sql"] = "`shouhin`.`raku_hyoujisaki_category5`";
$proto170["m_srcTableName"] = "kaibutu";
$proto170["m_expr"]=$obj;
$proto170["m_alias"] = "";
$obj = new SQLFieldListItem($proto170);

$proto0["m_fieldlist"][]=$obj;
						$proto172=array();
			$obj = new SQLField(array(
	"m_strName" => "raku_dir_1",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto172["m_sql"] = "`shouhin`.`raku_dir_1`";
$proto172["m_srcTableName"] = "kaibutu";
$proto172["m_expr"]=$obj;
$proto172["m_alias"] = "";
$obj = new SQLFieldListItem($proto172);

$proto0["m_fieldlist"][]=$obj;
						$proto174=array();
			$obj = new SQLField(array(
	"m_strName" => "raku_dir_2",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto174["m_sql"] = "`shouhin`.`raku_dir_2`";
$proto174["m_srcTableName"] = "kaibutu";
$proto174["m_expr"]=$obj;
$proto174["m_alias"] = "";
$obj = new SQLFieldListItem($proto174);

$proto0["m_fieldlist"][]=$obj;
						$proto176=array();
			$obj = new SQLField(array(
	"m_strName" => "raku_dir_3",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto176["m_sql"] = "`shouhin`.`raku_dir_3`";
$proto176["m_srcTableName"] = "kaibutu";
$proto176["m_expr"]=$obj;
$proto176["m_alias"] = "";
$obj = new SQLFieldListItem($proto176);

$proto0["m_fieldlist"][]=$obj;
						$proto178=array();
			$obj = new SQLField(array(
	"m_strName" => "raku_dir_4",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto178["m_sql"] = "`shouhin`.`raku_dir_4`";
$proto178["m_srcTableName"] = "kaibutu";
$proto178["m_expr"]=$obj;
$proto178["m_alias"] = "";
$obj = new SQLFieldListItem($proto178);

$proto0["m_fieldlist"][]=$obj;
						$proto180=array();
			$obj = new SQLField(array(
	"m_strName" => "raku_dir_5",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto180["m_sql"] = "`shouhin`.`raku_dir_5`";
$proto180["m_srcTableName"] = "kaibutu";
$proto180["m_expr"]=$obj;
$proto180["m_alias"] = "";
$obj = new SQLFieldListItem($proto180);

$proto0["m_fieldlist"][]=$obj;
						$proto182=array();
			$obj = new SQLField(array(
	"m_strName" => "raku_dir_result",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto182["m_sql"] = "`shouhin`.`raku_dir_result`";
$proto182["m_srcTableName"] = "kaibutu";
$proto182["m_expr"]=$obj;
$proto182["m_alias"] = "";
$obj = new SQLFieldListItem($proto182);

$proto0["m_fieldlist"][]=$obj;
						$proto184=array();
			$obj = new SQLField(array(
	"m_strName" => "raku_tag_result",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto184["m_sql"] = "`shouhin`.`raku_tag_result`";
$proto184["m_srcTableName"] = "kaibutu";
$proto184["m_expr"]=$obj;
$proto184["m_alias"] = "";
$obj = new SQLFieldListItem($proto184);

$proto0["m_fieldlist"][]=$obj;
						$proto186=array();
			$obj = new SQLField(array(
	"m_strName" => "serial_number",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto186["m_sql"] = "`shouhin`.`serial_number`";
$proto186["m_srcTableName"] = "kaibutu";
$proto186["m_expr"]=$obj;
$proto186["m_alias"] = "";
$obj = new SQLFieldListItem($proto186);

$proto0["m_fieldlist"][]=$obj;
						$proto188=array();
			$obj = new SQLField(array(
	"m_strName" => "Exhibition_Date",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto188["m_sql"] = "`shouhin`.`Exhibition_Date`";
$proto188["m_srcTableName"] = "kaibutu";
$proto188["m_expr"]=$obj;
$proto188["m_alias"] = "";
$obj = new SQLFieldListItem($proto188);

$proto0["m_fieldlist"][]=$obj;
						$proto190=array();
			$obj = new SQLField(array(
	"m_strName" => "search_keyword",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto190["m_sql"] = "`shouhin`.`search_keyword`";
$proto190["m_srcTableName"] = "kaibutu";
$proto190["m_expr"]=$obj;
$proto190["m_alias"] = "";
$obj = new SQLFieldListItem($proto190);

$proto0["m_fieldlist"][]=$obj;
						$proto192=array();
			$obj = new SQLField(array(
	"m_strName" => "stamp",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto192["m_sql"] = "`shouhin`.`stamp`";
$proto192["m_srcTableName"] = "kaibutu";
$proto192["m_expr"]=$obj;
$proto192["m_alias"] = "";
$obj = new SQLFieldListItem($proto192);

$proto0["m_fieldlist"][]=$obj;
						$proto194=array();
			$obj = new SQLField(array(
	"m_strName" => "motif",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto194["m_sql"] = "`shouhin`.`motif`";
$proto194["m_srcTableName"] = "kaibutu";
$proto194["m_expr"]=$obj;
$proto194["m_alias"] = "";
$obj = new SQLFieldListItem($proto194);

$proto0["m_fieldlist"][]=$obj;
						$proto196=array();
			$obj = new SQLField(array(
	"m_strName" => "Setting",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto196["m_sql"] = "`shouhin`.`Setting`";
$proto196["m_srcTableName"] = "kaibutu";
$proto196["m_expr"]=$obj;
$proto196["m_alias"] = "";
$obj = new SQLFieldListItem($proto196);

$proto0["m_fieldlist"][]=$obj;
						$proto198=array();
			$obj = new SQLField(array(
	"m_strName" => "processing",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto198["m_sql"] = "`shouhin`.`processing`";
$proto198["m_srcTableName"] = "kaibutu";
$proto198["m_expr"]=$obj;
$proto198["m_alias"] = "";
$obj = new SQLFieldListItem($proto198);

$proto0["m_fieldlist"][]=$obj;
						$proto200=array();
			$obj = new SQLField(array(
	"m_strName" => "Sleeve_Length",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto200["m_sql"] = "`shouhin`.`Sleeve_Length`";
$proto200["m_srcTableName"] = "kaibutu";
$proto200["m_expr"]=$obj;
$proto200["m_alias"] = "";
$obj = new SQLFieldListItem($proto200);

$proto0["m_fieldlist"][]=$obj;
						$proto202=array();
			$obj = new SQLField(array(
	"m_strName" => "length",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto202["m_sql"] = "`shouhin`.`length`";
$proto202["m_srcTableName"] = "kaibutu";
$proto202["m_expr"]=$obj;
$proto202["m_alias"] = "";
$obj = new SQLFieldListItem($proto202);

$proto0["m_fieldlist"][]=$obj;
						$proto204=array();
			$obj = new SQLField(array(
	"m_strName" => "Ring_size",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto204["m_sql"] = "`shouhin`.`Ring_size`";
$proto204["m_srcTableName"] = "kaibutu";
$proto204["m_expr"]=$obj;
$proto204["m_alias"] = "";
$obj = new SQLFieldListItem($proto204);

$proto0["m_fieldlist"][]=$obj;
						$proto206=array();
			$obj = new SQLField(array(
	"m_strName" => "price_for_site",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto206["m_sql"] = "`shouhin`.`price_for_site`";
$proto206["m_srcTableName"] = "kaibutu";
$proto206["m_expr"]=$obj;
$proto206["m_alias"] = "";
$obj = new SQLFieldListItem($proto206);

$proto0["m_fieldlist"][]=$obj;
						$proto208=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_category_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto208["m_sql"] = "`shouhin`.`yahoo_category_id`";
$proto208["m_srcTableName"] = "kaibutu";
$proto208["m_expr"]=$obj;
$proto208["m_alias"] = "";
$obj = new SQLFieldListItem($proto208);

$proto0["m_fieldlist"][]=$obj;
						$proto210=array();
			$obj = new SQLField(array(
	"m_strName" => "Qty",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto210["m_sql"] = "`shouhin`.`Qty`";
$proto210["m_srcTableName"] = "kaibutu";
$proto210["m_expr"]=$obj;
$proto210["m_alias"] = "";
$obj = new SQLFieldListItem($proto210);

$proto0["m_fieldlist"][]=$obj;
						$proto212=array();
			$obj = new SQLField(array(
	"m_strName" => "sales_period",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto212["m_sql"] = "`shouhin`.`sales_period`";
$proto212["m_srcTableName"] = "kaibutu";
$proto212["m_expr"]=$obj;
$proto212["m_alias"] = "";
$obj = new SQLFieldListItem($proto212);

$proto0["m_fieldlist"][]=$obj;
						$proto214=array();
			$obj = new SQLField(array(
	"m_strName" => "starting_price",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto214["m_sql"] = "`shouhin`.`starting_price`";
$proto214["m_srcTableName"] = "kaibutu";
$proto214["m_expr"]=$obj;
$proto214["m_alias"] = "";
$obj = new SQLFieldListItem($proto214);

$proto0["m_fieldlist"][]=$obj;
						$proto216=array();
			$obj = new SQLField(array(
	"m_strName" => "ecc_seq",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "kaibutu"
));

$proto216["m_sql"] = "`Eoc`.`ecc_seq`";
$proto216["m_srcTableName"] = "kaibutu";
$proto216["m_expr"]=$obj;
$proto216["m_alias"] = "";
$obj = new SQLFieldListItem($proto216);

$proto0["m_fieldlist"][]=$obj;
						$proto218=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_junle",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto218["m_sql"] = "`shouhin`.`yahoo_junle`";
$proto218["m_srcTableName"] = "kaibutu";
$proto218["m_expr"]=$obj;
$proto218["m_alias"] = "";
$obj = new SQLFieldListItem($proto218);

$proto0["m_fieldlist"][]=$obj;
						$proto220=array();
			$obj = new SQLField(array(
	"m_strName" => "logo",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto220["m_sql"] = "`shouhin`.`logo`";
$proto220["m_srcTableName"] = "kaibutu";
$proto220["m_expr"]=$obj;
$proto220["m_alias"] = "";
$obj = new SQLFieldListItem($proto220);

$proto0["m_fieldlist"][]=$obj;
						$proto222=array();
			$obj = new SQLField(array(
	"m_strName" => "parts",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto222["m_sql"] = "`shouhin`.`parts`";
$proto222["m_srcTableName"] = "kaibutu";
$proto222["m_expr"]=$obj;
$proto222["m_alias"] = "";
$obj = new SQLFieldListItem($proto222);

$proto0["m_fieldlist"][]=$obj;
						$proto224=array();
			$obj = new SQLField(array(
	"m_strName" => "country_of_origin",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto224["m_sql"] = "`shouhin`.`country_of_origin`";
$proto224["m_srcTableName"] = "kaibutu";
$proto224["m_expr"]=$obj;
$proto224["m_alias"] = "";
$obj = new SQLFieldListItem($proto224);

$proto0["m_fieldlist"][]=$obj;
						$proto226=array();
			$obj = new SQLField(array(
	"m_strName" => "zipper",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto226["m_sql"] = "`shouhin`.`zipper`";
$proto226["m_srcTableName"] = "kaibutu";
$proto226["m_expr"]=$obj;
$proto226["m_alias"] = "";
$obj = new SQLFieldListItem($proto226);

$proto0["m_fieldlist"][]=$obj;
						$proto228=array();
			$obj = new SQLField(array(
	"m_strName" => "guarantee",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto228["m_sql"] = "`shouhin`.`guarantee`";
$proto228["m_srcTableName"] = "kaibutu";
$proto228["m_expr"]=$obj;
$proto228["m_alias"] = "";
$obj = new SQLFieldListItem($proto228);

$proto0["m_fieldlist"][]=$obj;
						$proto230=array();
			$obj = new SQLField(array(
	"m_strName" => "errors",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto230["m_sql"] = "`shouhin`.`errors`";
$proto230["m_srcTableName"] = "kaibutu";
$proto230["m_expr"]=$obj;
$proto230["m_alias"] = "";
$obj = new SQLFieldListItem($proto230);

$proto0["m_fieldlist"][]=$obj;
						$proto232=array();
			$obj = new SQLField(array(
	"m_strName" => "designer",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto232["m_sql"] = "`shouhin`.`designer`";
$proto232["m_srcTableName"] = "kaibutu";
$proto232["m_expr"]=$obj;
$proto232["m_alias"] = "";
$obj = new SQLFieldListItem($proto232);

$proto0["m_fieldlist"][]=$obj;
						$proto234=array();
			$obj = new SQLField(array(
	"m_strName" => "hahakai",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto234["m_sql"] = "`shouhin`.`hahakai`";
$proto234["m_srcTableName"] = "kaibutu";
$proto234["m_expr"]=$obj;
$proto234["m_alias"] = "";
$obj = new SQLFieldListItem($proto234);

$proto0["m_fieldlist"][]=$obj;
						$proto236=array();
			$obj = new SQLField(array(
	"m_strName" => "effect",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto236["m_sql"] = "`shouhin`.`effect`";
$proto236["m_srcTableName"] = "kaibutu";
$proto236["m_expr"]=$obj;
$proto236["m_alias"] = "";
$obj = new SQLFieldListItem($proto236);

$proto0["m_fieldlist"][]=$obj;
						$proto238=array();
			$obj = new SQLField(array(
	"m_strName" => "shape",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto238["m_sql"] = "`shouhin`.`shape`";
$proto238["m_srcTableName"] = "kaibutu";
$proto238["m_expr"]=$obj;
$proto238["m_alias"] = "";
$obj = new SQLFieldListItem($proto238);

$proto0["m_fieldlist"][]=$obj;
						$proto240=array();
			$obj = new SQLField(array(
	"m_strName" => "cutting_style",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto240["m_sql"] = "`shouhin`.`cutting_style`";
$proto240["m_srcTableName"] = "kaibutu";
$proto240["m_expr"]=$obj;
$proto240["m_alias"] = "";
$obj = new SQLFieldListItem($proto240);

$proto0["m_fieldlist"][]=$obj;
						$proto242=array();
			$obj = new SQLField(array(
	"m_strName" => "chain_type",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto242["m_sql"] = "`shouhin`.`chain_type`";
$proto242["m_srcTableName"] = "kaibutu";
$proto242["m_expr"]=$obj;
$proto242["m_alias"] = "";
$obj = new SQLFieldListItem($proto242);

$proto0["m_fieldlist"][]=$obj;
						$proto244=array();
			$obj = new SQLField(array(
	"m_strName" => "number_of_stones",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto244["m_sql"] = "`shouhin`.`number_of_stones`";
$proto244["m_srcTableName"] = "kaibutu";
$proto244["m_expr"]=$obj;
$proto244["m_alias"] = "";
$obj = new SQLFieldListItem($proto244);

$proto0["m_fieldlist"][]=$obj;
						$proto246=array();
			$obj = new SQLField(array(
	"m_strName" => "amount",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto246["m_sql"] = "`shouhin`.`amount`";
$proto246["m_srcTableName"] = "kaibutu";
$proto246["m_expr"]=$obj;
$proto246["m_alias"] = "";
$obj = new SQLFieldListItem($proto246);

$proto0["m_fieldlist"][]=$obj;
						$proto248=array();
			$obj = new SQLField(array(
	"m_strName" => "satei_error",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto248["m_sql"] = "`shouhin`.`satei_error`";
$proto248["m_srcTableName"] = "kaibutu";
$proto248["m_expr"]=$obj;
$proto248["m_alias"] = "";
$obj = new SQLFieldListItem($proto248);

$proto0["m_fieldlist"][]=$obj;
						$proto250=array();
			$obj = new SQLField(array(
	"m_strName" => "producing_area",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto250["m_sql"] = "`shouhin`.`producing_area`";
$proto250["m_srcTableName"] = "kaibutu";
$proto250["m_expr"]=$obj;
$proto250["m_alias"] = "";
$obj = new SQLFieldListItem($proto250);

$proto0["m_fieldlist"][]=$obj;
						$proto252=array();
			$obj = new SQLField(array(
	"m_strName" => "shape_supplement",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto252["m_sql"] = "`shouhin`.`shape_supplement`";
$proto252["m_srcTableName"] = "kaibutu";
$proto252["m_expr"]=$obj;
$proto252["m_alias"] = "";
$obj = new SQLFieldListItem($proto252);

$proto0["m_fieldlist"][]=$obj;
						$proto254=array();
			$obj = new SQLField(array(
	"m_strName" => "side_gem",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto254["m_sql"] = "`shouhin`.`side_gem`";
$proto254["m_srcTableName"] = "kaibutu";
$proto254["m_expr"]=$obj;
$proto254["m_alias"] = "";
$obj = new SQLFieldListItem($proto254);

$proto0["m_fieldlist"][]=$obj;
						$proto256=array();
			$obj = new SQLField(array(
	"m_strName" => "product_style",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto256["m_sql"] = "`shouhin`.`product_style`";
$proto256["m_srcTableName"] = "kaibutu";
$proto256["m_expr"]=$obj;
$proto256["m_alias"] = "";
$obj = new SQLFieldListItem($proto256);

$proto0["m_fieldlist"][]=$obj;
						$proto258=array();
			$obj = new SQLField(array(
	"m_strName" => "collar_neck_line",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto258["m_sql"] = "`shouhin`.`collar_neck_line`";
$proto258["m_srcTableName"] = "kaibutu";
$proto258["m_expr"]=$obj;
$proto258["m_alias"] = "";
$obj = new SQLFieldListItem($proto258);

$proto0["m_fieldlist"][]=$obj;
						$proto260=array();
			$obj = new SQLField(array(
	"m_strName" => "breast",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto260["m_sql"] = "`shouhin`.`breast`";
$proto260["m_srcTableName"] = "kaibutu";
$proto260["m_expr"]=$obj;
$proto260["m_alias"] = "";
$obj = new SQLFieldListItem($proto260);

$proto0["m_fieldlist"][]=$obj;
						$proto262=array();
			$obj = new SQLField(array(
	"m_strName" => "silhouette",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto262["m_sql"] = "`shouhin`.`silhouette`";
$proto262["m_srcTableName"] = "kaibutu";
$proto262["m_expr"]=$obj;
$proto262["m_alias"] = "";
$obj = new SQLFieldListItem($proto262);

$proto0["m_fieldlist"][]=$obj;
						$proto264=array();
			$obj = new SQLField(array(
	"m_strName" => "sleeve",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto264["m_sql"] = "`shouhin`.`sleeve`";
$proto264["m_srcTableName"] = "kaibutu";
$proto264["m_expr"]=$obj;
$proto264["m_alias"] = "";
$obj = new SQLFieldListItem($proto264);

$proto0["m_fieldlist"][]=$obj;
						$proto266=array();
			$obj = new SQLField(array(
	"m_strName" => "unit",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto266["m_sql"] = "`shouhin`.`unit`";
$proto266["m_srcTableName"] = "kaibutu";
$proto266["m_expr"]=$obj;
$proto266["m_alias"] = "";
$obj = new SQLFieldListItem($proto266);

$proto0["m_fieldlist"][]=$obj;
						$proto268=array();
			$obj = new SQLField(array(
	"m_strName" => "hall_mark",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto268["m_sql"] = "`shouhin`.`hall_mark`";
$proto268["m_srcTableName"] = "kaibutu";
$proto268["m_expr"]=$obj;
$proto268["m_alias"] = "";
$obj = new SQLFieldListItem($proto268);

$proto0["m_fieldlist"][]=$obj;
						$proto270=array();
			$obj = new SQLField(array(
	"m_strName" => "plate",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto270["m_sql"] = "`shouhin`.`plate`";
$proto270["m_srcTableName"] = "kaibutu";
$proto270["m_expr"]=$obj;
$proto270["m_alias"] = "";
$obj = new SQLFieldListItem($proto270);

$proto0["m_fieldlist"][]=$obj;
						$proto272=array();
			$obj = new SQLField(array(
	"m_strName" => "toe",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto272["m_sql"] = "`shouhin`.`toe`";
$proto272["m_srcTableName"] = "kaibutu";
$proto272["m_expr"]=$obj;
$proto272["m_alias"] = "";
$obj = new SQLFieldListItem($proto272);

$proto0["m_fieldlist"][]=$obj;
						$proto274=array();
			$obj = new SQLField(array(
	"m_strName" => "heel",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto274["m_sql"] = "`shouhin`.`heel`";
$proto274["m_srcTableName"] = "kaibutu";
$proto274["m_expr"]=$obj;
$proto274["m_alias"] = "";
$obj = new SQLFieldListItem($proto274);

$proto0["m_fieldlist"][]=$obj;
						$proto276=array();
			$obj = new SQLField(array(
	"m_strName" => "cloth",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto276["m_sql"] = "`shouhin`.`cloth`";
$proto276["m_srcTableName"] = "kaibutu";
$proto276["m_expr"]=$obj;
$proto276["m_alias"] = "";
$obj = new SQLFieldListItem($proto276);

$proto0["m_fieldlist"][]=$obj;
						$proto278=array();
			$obj = new SQLField(array(
	"m_strName" => "official_url",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto278["m_sql"] = "`shouhin`.`official_url`";
$proto278["m_srcTableName"] = "kaibutu";
$proto278["m_expr"]=$obj;
$proto278["m_alias"] = "";
$obj = new SQLFieldListItem($proto278);

$proto0["m_fieldlist"][]=$obj;
						$proto280=array();
			$obj = new SQLField(array(
	"m_strName" => "return_output_flag",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto280["m_sql"] = "`shouhin`.`return_output_flag`";
$proto280["m_srcTableName"] = "kaibutu";
$proto280["m_expr"]=$obj;
$proto280["m_alias"] = "";
$obj = new SQLFieldListItem($proto280);

$proto0["m_fieldlist"][]=$obj;
						$proto282=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto282["m_sql"] = "`shouhin`.`updated_at`";
$proto282["m_srcTableName"] = "kaibutu";
$proto282["m_expr"]=$obj;
$proto282["m_alias"] = "shouhin.updated_at";
$obj = new SQLFieldListItem($proto282);

$proto0["m_fieldlist"][]=$obj;
						$proto284=array();
			$obj = new SQLField(array(
	"m_strName" => "tentou_label_output_flag",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto284["m_sql"] = "`shouhin`.`tentou_label_output_flag`";
$proto284["m_srcTableName"] = "kaibutu";
$proto284["m_expr"]=$obj;
$proto284["m_alias"] = "";
$obj = new SQLFieldListItem($proto284);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto286=array();
$proto286["m_link"] = "SQLL_MAIN";
			$proto287=array();
$proto287["m_strName"] = "shouhin";
$proto287["m_srcTableName"] = "kaibutu";
$proto287["m_columns"] = array();
$proto287["m_columns"][] = "product_id";
$proto287["m_columns"][] = "category_id";
$proto287["m_columns"][] = "goods_title";
$proto287["m_columns"][] = "title";
$proto287["m_columns"][] = "sub_category_id1";
$proto287["m_columns"][] = "ecc_id";
$proto287["m_columns"][] = "price";
$proto287["m_columns"][] = "yahoo";
$proto287["m_columns"][] = "remark";
$proto287["m_columns"][] = "sales_price";
$proto287["m_columns"][] = "description";
$proto287["m_columns"][] = "status";
$proto287["m_columns"][] = "product_num";
$proto287["m_columns"][] = "updated_at";
$proto287["m_columns"][] = "yahoo_size";
$proto287["m_columns"][] = "yahoo_title";
$proto287["m_columns"][] = "yahoo_junle";
$proto287["m_columns"][] = "yahoo_sankou_uwadai";
$proto287["m_columns"][] = "yahoo_sozai";
$proto287["m_columns"][] = "yahoo_color";
$proto287["m_columns"][] = "yahoo_kataban";
$proto287["m_columns"][] = "yahoo_condition1";
$proto287["m_columns"][] = "yahoo_condition2";
$proto287["m_columns"][] = "yahoo_fuzokuhin";
$proto287["m_columns"][] = "yahoo_sinaban";
$proto287["m_columns"][] = "yahoo_saisun_sha";
$proto287["m_columns"][] = "yahoo_sex";
$proto287["m_columns"][] = "box_id";
$proto287["m_columns"][] = "nyuukin_price";
$proto287["m_columns"][] = "updated_by";
$proto287["m_columns"][] = "raku_title";
$proto287["m_columns"][] = "raku_hyoujisaki_category2";
$proto287["m_columns"][] = "raku_hyoujisaki_category";
$proto287["m_columns"][] = "raku_hyoujisaki_category3";
$proto287["m_columns"][] = "timesta";
$proto287["m_columns"][] = "saisun_start";
$proto287["m_columns"][] = "saisun_end";
$proto287["m_columns"][] = "label_output_flag";
$proto287["m_columns"][] = "season";
$proto287["m_columns"][] = "kanryou_henbi";
$proto287["m_columns"][] = "box_sort";
$proto287["m_columns"][] = "satei_by";
$proto287["m_columns"][] = "kaitori_by";
$proto287["m_columns"][] = "comment";
$proto287["m_columns"][] = "satei_hi";
$proto287["m_columns"][] = "kaitory_hi";
$proto287["m_columns"][] = "REG_PHOTOGRAPHER";
$proto287["m_columns"][] = "REG_AUTHOR";
$proto287["m_columns"][] = "REG_PACKINGS";
$proto287["m_columns"][] = "REG_KAKOU_DATE";
$proto287["m_columns"][] = "REG_KAKOU";
$proto287["m_columns"][] = "REG_EXHIBITOR";
$proto287["m_columns"][] = "REG_PHOTOGRAPHER_DATE";
$proto287["m_columns"][] = "DT_PACKING_DATE";
$proto287["m_columns"][] = "DT_UP_DATE";
$proto287["m_columns"][] = "AWAZU_DATE";
$proto287["m_columns"][] = "AWAZU_NIN";
$proto287["m_columns"][] = "sabun_date";
$proto287["m_columns"][] = "browseid";
$proto287["m_columns"][] = "browsenode";
$proto287["m_columns"][] = "gold_property";
$proto287["m_columns"][] = "ichiba_title";
$proto287["m_columns"][] = "Gram";
$proto287["m_columns"][] = "Parent_stone";
$proto287["m_columns"][] = "Aside_stone";
$proto287["m_columns"][] = "Appraiser";
$proto287["m_columns"][] = "Remarks";
$proto287["m_columns"][] = "Destination_selling";
$proto287["m_columns"][] = "Finish";
$proto287["m_columns"][] = "Discrimination";
$proto287["m_columns"][] = "accessories";
$proto287["m_columns"][] = "priority";
$proto287["m_columns"][] = "A_storage";
$proto287["m_columns"][] = "price_per_gram";
$proto287["m_columns"][] = "price_per_parent_stone";
$proto287["m_columns"][] = "price_per_aside_stone";
$proto287["m_columns"][] = "price_secret";
$proto287["m_columns"][] = "sales_price_secret";
$proto287["m_columns"][] = "eq";
$proto287["m_columns"][] = "en";
$proto287["m_columns"][] = "line";
$proto287["m_columns"][] = "item_name";
$proto287["m_columns"][] = "handle";
$proto287["m_columns"][] = "yahoo_color_id";
$proto287["m_columns"][] = "raku_hyoujisaki_category4";
$proto287["m_columns"][] = "raku_hyoujisaki_category5";
$proto287["m_columns"][] = "raku_dir_1";
$proto287["m_columns"][] = "raku_dir_2";
$proto287["m_columns"][] = "raku_dir_3";
$proto287["m_columns"][] = "raku_dir_4";
$proto287["m_columns"][] = "raku_dir_5";
$proto287["m_columns"][] = "raku_dir_result";
$proto287["m_columns"][] = "raku_tag_result";
$proto287["m_columns"][] = "serial_number";
$proto287["m_columns"][] = "Exhibition_Date";
$proto287["m_columns"][] = "search_keyword";
$proto287["m_columns"][] = "stamp";
$proto287["m_columns"][] = "motif";
$proto287["m_columns"][] = "Setting";
$proto287["m_columns"][] = "processing";
$proto287["m_columns"][] = "Sleeve_Length";
$proto287["m_columns"][] = "length";
$proto287["m_columns"][] = "Ring_size";
$proto287["m_columns"][] = "price_for_site";
$proto287["m_columns"][] = "yahoo_category_id";
$proto287["m_columns"][] = "Qty";
$proto287["m_columns"][] = "sales_period";
$proto287["m_columns"][] = "starting_price";
$proto287["m_columns"][] = "FLAG_NO_ARRIVAL";
$proto287["m_columns"][] = "amount_of_image";
$proto287["m_columns"][] = "csv";
$proto287["m_columns"][] = "return_output_flag";
$proto287["m_columns"][] = "wasabi_flag";
$proto287["m_columns"][] = "ws_import_date";
$proto287["m_columns"][] = "logo";
$proto287["m_columns"][] = "parts";
$proto287["m_columns"][] = "country_of_origin";
$proto287["m_columns"][] = "zipper";
$proto287["m_columns"][] = "guarantee";
$proto287["m_columns"][] = "errors";
$proto287["m_columns"][] = "designer";
$proto287["m_columns"][] = "hahakai";
$proto287["m_columns"][] = "effect";
$proto287["m_columns"][] = "shape";
$proto287["m_columns"][] = "cutting_style";
$proto287["m_columns"][] = "chain_type";
$proto287["m_columns"][] = "number_of_stones";
$proto287["m_columns"][] = "amount";
$proto287["m_columns"][] = "satei_error";
$proto287["m_columns"][] = "producing_area";
$proto287["m_columns"][] = "shape_supplement";
$proto287["m_columns"][] = "side_gem";
$proto287["m_columns"][] = "product_style";
$proto287["m_columns"][] = "collar_neck_line";
$proto287["m_columns"][] = "breast";
$proto287["m_columns"][] = "silhouette";
$proto287["m_columns"][] = "sleeve";
$proto287["m_columns"][] = "unit";
$proto287["m_columns"][] = "hall_mark";
$proto287["m_columns"][] = "plate";
$proto287["m_columns"][] = "toe";
$proto287["m_columns"][] = "heel";
$proto287["m_columns"][] = "cloth";
$proto287["m_columns"][] = "serial_number_for_storage";
$proto287["m_columns"][] = "official_url";
$proto287["m_columns"][] = "main_details";
$proto287["m_columns"][] = "notation_size";
$proto287["m_columns"][] = "shoe_size_jp";
$proto287["m_columns"][] = "Eoc_chigins2_id";
$proto287["m_columns"][] = "country_of_origin_name";
$proto287["m_columns"][] = "mailingkit_id";
$proto287["m_columns"][] = "DA_COMMENTSANDTOTAL";
$proto287["m_columns"][] = "DA_WEIGHT";
$proto287["m_columns"][] = "DA_PER_CARAT";
$proto287["m_columns"][] = "DA_SHAPE";
$proto287["m_columns"][] = "DA_SELFGRES";
$proto287["m_columns"][] = "DA_ORIGINALGRADEMLIKENED";
$proto287["m_columns"][] = "DA_SUGARCANE";
$proto287["m_columns"][] = "DA_RAPA";
$proto287["m_columns"][] = "DA_INTENSITY";
$proto287["m_columns"][] = "DA_OVERTONE";
$proto287["m_columns"][] = "DA_COLOR";
$proto287["m_columns"][] = "DA_CLARITY";
$proto287["m_columns"][] = "DA_CUT";
$proto287["m_columns"][] = "DA_POLISH";
$proto287["m_columns"][] = "DA_SYMMETRY";
$proto287["m_columns"][] = "DA_FLUO";
$proto287["m_columns"][] = "DA_COLOR_FLUO";
$proto287["m_columns"][] = "DA_WIDE";
$proto287["m_columns"][] = "DA_HIGH";
$proto287["m_columns"][] = "DA_DEPTH";
$proto287["m_columns"][] = "DA_APPRAISER";
$proto287["m_columns"][] = "DA_FRAPA";
$proto287["m_columns"][] = "DA_RATE";
$proto287["m_columns"][] = "DA_UNIT_PRICE_UNPLUG";
$proto287["m_columns"][] = "DA_YOURNAME";
$proto287["m_columns"][] = "DA_RAPAB";
$proto287["m_columns"][] = "DA_GROSSPROFIT";
$proto287["m_columns"][] = "DA_INTEREST_1";
$proto287["m_columns"][] = "DA_no";
$proto287["m_columns"][] = "kinsa_flag";
$proto287["m_columns"][] = "price_for_site_flag";
$proto287["m_columns"][] = "Eoc_takuhai_id";
$proto287["m_columns"][] = "Eoc_unfinished_id";
$proto287["m_columns"][] = "Eoc_chigins_unfinished_id";
$proto287["m_columns"][] = "chohyo_id";
$proto287["m_columns"][] = "location";
$proto287["m_columns"][] = "special_instructions_1";
$proto287["m_columns"][] = "special_instructions_2";
$proto287["m_columns"][] = "special_instructions_3";
$proto287["m_columns"][] = "chohyo_seihin_flag";
$proto287["m_columns"][] = "chohyo_dia_flag";
$proto287["m_columns"][] = "chohyo_type";
$proto287["m_columns"][] = "ichiyen_flag";
$proto287["m_columns"][] = "asuraku_fuka_flag";
$proto287["m_columns"][] = "parallel_import_flag";
$proto287["m_columns"][] = "meisai_number";
$proto287["m_columns"][] = "days_keep_price";
$proto287["m_columns"][] = "initial_included";
$proto287["m_columns"][] = "novelty";
$proto287["m_columns"][] = "tentou_label_output_flag";
$proto287["m_columns"][] = "itaku_flag";
$proto287["m_columns"][] = "including_catch";
$proto287["m_columns"][] = "ichiba_meeting_month";
$proto287["m_columns"][] = "ichiba_meeting_name";
$proto287["m_columns"][] = "ichiba_color";
$proto287["m_columns"][] = "ichiba_clarity";
$proto287["m_columns"][] = "ichiba_melee_gai";
$proto287["m_columns"][] = "ichiba_lot_pieces";
$proto287["m_columns"][] = "ichiba_image";
$proto287["m_columns"][] = "ichiba_img";
$proto287["m_columns"][] = "gold_check_id";
$proto287["m_columns"][] = "ichiba_exhibition_id";
$proto287["m_columns"][] = "ichiba_exhibition_sort";
$proto287["m_columns"][] = "cost";
$proto287["m_columns"][] = "auto_price_cut_prohibited";
$proto287["m_columns"][] = "event_price";
$proto287["m_columns"][] = "identification_cost";
$proto287["m_columns"][] = "other_cost";
$proto287["m_columns"][] = "stock_quantity";
$proto287["m_columns"][] = "Eoc_trader_id_for_buy";
$proto287["m_columns"][] = "Eoc_trader_id_for_sell";
$proto287["m_columns"][] = "multiplication_rate";
$proto287["m_columns"][] = "many_product_group_id";
$proto287["m_columns"][] = "trading_sort_id";
$proto287["m_columns"][] = "many_product_group_saiban";
$proto287["m_columns"][] = "purchase_category";
$proto287["m_columns"][] = "created_at";
$proto287["m_columns"][] = "created_by";
$proto287["m_columns"][] = "manual_input_price_per_gram";
$proto287["m_columns"][] = "satei_start";
$proto287["m_columns"][] = "self_DA_INTENSITY";
$proto287["m_columns"][] = "self_DA_OVERTONE";
$proto287["m_columns"][] = "self_DA_COLOR";
$proto287["m_columns"][] = "self_DA_CLARITY";
$proto287["m_columns"][] = "self_DA_CUT";
$proto287["m_columns"][] = "self_DA_POLISH";
$proto287["m_columns"][] = "self_DA_SYMMETRY";
$proto287["m_columns"][] = "self_DA_FLUO";
$proto287["m_columns"][] = "self_DA_COLOR_FLUO";
$proto287["m_columns"][] = "self_DA_FRAPA";
$proto287["m_columns"][] = "self_DA_RATE";
$proto287["m_columns"][] = "self_multiplication_rate";
$proto287["m_columns"][] = "is_seiyaku";
$proto287["m_columns"][] = "destination_sold_out";
$proto287["m_columns"][] = "mypage_update_prohibited";
$proto287["m_columns"][] = "gold_check_scan_id";
$proto287["m_columns"][] = "buy_campaign_data_id";
$proto287["m_columns"][] = "REG_PHOTOGRAPHER_DATE_start";
$proto287["m_columns"][] = "commission";
$proto287["m_columns"][] = "addtime_gold_check_id";
$proto287["m_columns"][] = "is_recovery";
$proto287["m_columns"][] = "sales_cost";
$proto287["m_columns"][] = "mst_business_partner_id";
$proto287["m_columns"][] = "DA_GROSSPROFIT_2";
$proto287["m_columns"][] = "DA_INTEREST_2";
$proto287["m_columns"][] = "minus_weight";
$proto287["m_columns"][] = "diameter_size";
$proto287["m_columns"][] = "metal_rate_date";
$obj = new SQLTable($proto287);

$proto286["m_table"] = $obj;
$proto286["m_sql"] = "`shouhin`";
$proto286["m_alias"] = "";
$proto286["m_srcTableName"] = "kaibutu";
$proto288=array();
$proto288["m_sql"] = "";
$proto288["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto288["m_column"]=$obj;
$proto288["m_contained"] = array();
$proto288["m_strCase"] = "";
$proto288["m_havingmode"] = false;
$proto288["m_inBrackets"] = false;
$proto288["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto288);

$proto286["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto286);

$proto0["m_fromlist"][]=$obj;
												$proto290=array();
$proto290["m_link"] = "SQLL_LEFTJOIN";
			$proto291=array();
$proto291["m_strName"] = "Eoc";
$proto291["m_srcTableName"] = "kaibutu";
$proto291["m_columns"] = array();
$proto291["m_columns"][] = "ecc_id";
$proto291["m_columns"][] = "ecc_seq";
$proto291["m_columns"][] = "name1";
$proto291["m_columns"][] = "created_t";
$proto291["m_columns"][] = "registerd_id";
$proto291["m_columns"][] = "kaitori_staff_id";
$proto291["m_columns"][] = "name2";
$proto291["m_columns"][] = "wareki";
$proto291["m_columns"][] = "b1";
$proto291["m_columns"][] = "b2";
$proto291["m_columns"][] = "b3";
$proto291["m_columns"][] = "birth_day";
$proto291["m_columns"][] = "age";
$proto291["m_columns"][] = "zip";
$proto291["m_columns"][] = "zip1";
$proto291["m_columns"][] = "zip2";
$proto291["m_columns"][] = "address1";
$proto291["m_columns"][] = "address2";
$proto291["m_columns"][] = "address3";
$proto291["m_columns"][] = "tel";
$proto291["m_columns"][] = "tel2";
$proto291["m_columns"][] = "mail1";
$proto291["m_columns"][] = "mail2";
$proto291["m_columns"][] = "address_code";
$proto291["m_columns"][] = "bank_name";
$proto291["m_columns"][] = "bank_blunch_code";
$proto291["m_columns"][] = "bank_yokin_shubetu";
$proto291["m_columns"][] = "bank_account";
$proto291["m_columns"][] = "bank_acoount_name";
$proto291["m_columns"][] = "haisou_bangou";
$proto291["m_columns"][] = "sise_houhou";
$proto291["m_columns"][] = "hentou_houhou";
$proto291["m_columns"][] = "hentou_houhou_time";
$proto291["m_columns"][] = "mousikomi_id";
$proto291["m_columns"][] = "hituyou_shorui";
$proto291["m_columns"][] = "seiyaku_fuseiritu";
$proto291["m_columns"][] = "mitumori_taku";
$proto291["m_columns"][] = "seacanse";
$proto291["m_columns"][] = "remark";
$proto291["m_columns"][] = "type";
$proto291["m_columns"][] = "sales_flag";
$proto291["m_columns"][] = "src_type";
$proto291["m_columns"][] = "liquidation_shop_code";
$proto291["m_columns"][] = "insurance_amount_print";
$proto291["m_columns"][] = "jis_code";
$proto291["m_columns"][] = "updated_at";
$proto291["m_columns"][] = "_registerd_id";
$proto291["m_columns"][] = "mail_check_type";
$proto291["m_columns"][] = "purchase_type";
$proto291["m_columns"][] = "sex";
$proto291["m_columns"][] = "m_tel";
$proto291["m_columns"][] = "fax";
$proto291["m_columns"][] = "chigin_kaitori";
$proto291["m_columns"][] = "option1";
$proto291["m_columns"][] = "option2";
$proto291["m_columns"][] = "option3";
$proto291["m_columns"][] = "option4";
$proto291["m_columns"][] = "option5";
$proto291["m_columns"][] = "option6";
$proto291["m_columns"][] = "option7";
$proto291["m_columns"][] = "option8";
$proto291["m_columns"][] = "option9";
$proto291["m_columns"][] = "option10";
$proto291["m_columns"][] = "option11";
$proto291["m_columns"][] = "option12";
$proto291["m_columns"][] = "option13";
$proto291["m_columns"][] = "rakuda_csv_flag";
$proto291["m_columns"][] = "EOC_COURIER_CHECK";
$proto291["m_columns"][] = "EOC_SIZE";
$proto291["m_columns"][] = "EOC_NUMBER";
$proto291["m_columns"][] = "EOC_REUSE";
$proto291["m_columns"][] = "EOC__DELIVERY_DATES";
$proto291["m_columns"][] = "EOC_SPECIFIED_TIME";
$proto291["m_columns"][] = "FIRST_NAME2";
$proto291["m_columns"][] = "LAST_NAME2";
$proto291["m_columns"][] = "EOC__DATE_AND_TIME_2";
$proto291["m_columns"][] = "EOC__BOX_NUMBER";
$proto291["m_columns"][] = "FIRST_NAME_KANA";
$proto291["m_columns"][] = "LAST_NAME_KANA";
$proto291["m_columns"][] = "FLAG_SPEED";
$proto291["m_columns"][] = "SEARCH_MEDIA";
$proto291["m_columns"][] = "SEARCH_SITE";
$proto291["m_columns"][] = "UN_REACHABLE";
$proto291["m_columns"][] = "FLG_MAIL_SAGAWA";
$proto291["m_columns"][] = "FLG_MAIL_OTHER";
$proto291["m_columns"][] = "ALLSEIYAKU";
$proto291["m_columns"][] = "ICHIBUSEIYAKU";
$proto291["m_columns"][] = "seiyakukin";
$proto291["m_columns"][] = "kaitorihuka";
$proto291["m_columns"][] = "awazu_date";
$proto291["m_columns"][] = "seiyaku_price";
$proto291["m_columns"][] = "eoc_search_keyword";
$proto291["m_columns"][] = "sonota";
$proto291["m_columns"][] = "size_kosuu";
$proto291["m_columns"][] = "sagawa_shuuka_flag";
$proto291["m_columns"][] = "line_check";
$proto291["m_columns"][] = "sagawa_shuukairai_denwabangou";
$proto291["m_columns"][] = "kaitori_sougak";
$proto291["m_columns"][] = "flag";
$proto291["m_columns"][] = "key_code";
$proto291["m_columns"][] = "dm_check_type";
$proto291["m_columns"][] = "kit_flag";
$proto291["m_columns"][] = "kit_done_flag";
$proto291["m_columns"][] = "bank_details_code";
$proto291["m_columns"][] = "bank_details_blunch_name";
$proto291["m_columns"][] = "bank_details_blunch_code";
$proto291["m_columns"][] = "bank_details_account_number";
$proto291["m_columns"][] = "bank_details_symbol";
$proto291["m_columns"][] = "bank_details_number";
$proto291["m_columns"][] = "bank_details_account_name";
$proto291["m_columns"][] = "bank_details_deposit_type";
$proto291["m_columns"][] = "mypage_id";
$proto291["m_columns"][] = "UN_REACHABLE_brand";
$proto291["m_columns"][] = "sagawa_haisou_hoken";
$proto291["m_columns"][] = "transfer_confirm";
$proto291["m_columns"][] = "outside_bank";
$proto291["m_columns"][] = "new_name";
$proto291["m_columns"][] = "letterpack";
$proto291["m_columns"][] = "satei_saisoku_2_days";
$proto291["m_columns"][] = "satei_saisoku_7_days";
$proto291["m_columns"][] = "accept_flag";
$proto291["m_columns"][] = "delivery_flag";
$proto291["m_columns"][] = "refining_weight";
$proto291["m_columns"][] = "line_chat_url";
$proto291["m_columns"][] = "royal_customer_status";
$proto291["m_columns"][] = "is_business_customer";
$proto291["m_columns"][] = "is_exist_haisouhosyo";
$proto291["m_columns"][] = "meigi_hankaku_kana";
$proto291["m_columns"][] = "building_types";
$proto291["m_columns"][] = "dwelling_types";
$proto291["m_columns"][] = "is_yamato_csv";
$proto291["m_columns"][] = "is_seiren_csv";
$obj = new SQLTable($proto291);

$proto290["m_table"] = $obj;
$proto290["m_sql"] = "LEFT OUTER JOIN `Eoc` ON `shouhin`.`ecc_id` = `Eoc`.`ecc_id`";
$proto290["m_alias"] = "";
$proto290["m_srcTableName"] = "kaibutu";
$proto292=array();
$proto292["m_sql"] = "`shouhin`.`ecc_id` = `Eoc`.`ecc_id`";
$proto292["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "ecc_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto292["m_column"]=$obj;
$proto292["m_contained"] = array();
$proto292["m_strCase"] = "= `Eoc`.`ecc_id`";
$proto292["m_havingmode"] = false;
$proto292["m_inBrackets"] = false;
$proto292["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto292);

$proto290["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto290);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto294=array();
						$obj = new SQLField(array(
	"m_strName" => "product_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "kaibutu"
));

$proto294["m_column"]=$obj;
$proto294["m_bAsc"] = 0;
$proto294["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto294);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="kaibutu";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_kaibutu = createSqlQuery_kaibutu();


	
		;

																																																																																																																																												

$tdatakaibutu[".sqlquery"] = $queryData_kaibutu;

include_once(getabspath("include/kaibutu_events.php"));
$tableEvents["kaibutu"] = new eventclass_kaibutu;
$tdatakaibutu[".hasEvents"] = true;

?>