<?php
require_once(getabspath("classes/cipherer.php"));




$tdatasaisun = array();
	$tdatasaisun[".ShortName"] = "saisun";
	$tdatasaisun[".OwnerID"] = "";
	$tdatasaisun[".OriginalTable"] = "shouhin";

//	field labels
$fieldLabelssaisun = array();
$fieldToolTipssaisun = array();
$pageTitlessaisun = array();
$placeHolderssaisun = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelssaisun["Japanese"] = array();
	$fieldToolTipssaisun["Japanese"] = array();
	$placeHolderssaisun["Japanese"] = array();
	$pageTitlessaisun["Japanese"] = array();
	$fieldLabelssaisun["Japanese"]["product_id"] = "SEQ";
	$fieldToolTipssaisun["Japanese"]["product_id"] = "";
	$placeHolderssaisun["Japanese"]["product_id"] = "";
	$fieldLabelssaisun["Japanese"]["category_id"] = "大カテゴリー";
	$fieldToolTipssaisun["Japanese"]["category_id"] = "";
	$placeHolderssaisun["Japanese"]["category_id"] = "";
	$fieldLabelssaisun["Japanese"]["goods_title"] = "Yアイテム名";
	$fieldToolTipssaisun["Japanese"]["goods_title"] = "";
	$placeHolderssaisun["Japanese"]["goods_title"] = "";
	$fieldLabelssaisun["Japanese"]["title"] = "タイトル";
	$fieldToolTipssaisun["Japanese"]["title"] = "";
	$placeHolderssaisun["Japanese"]["title"] = "";
	$fieldLabelssaisun["Japanese"]["sub_category_id1"] = "中カテゴリー";
	$fieldToolTipssaisun["Japanese"]["sub_category_id1"] = "";
	$placeHolderssaisun["Japanese"]["sub_category_id1"] = "";
	$fieldLabelssaisun["Japanese"]["ecc_id"] = "Ecc Id";
	$fieldToolTipssaisun["Japanese"]["ecc_id"] = "";
	$placeHolderssaisun["Japanese"]["ecc_id"] = "";
	$fieldLabelssaisun["Japanese"]["price"] = "買取額";
	$fieldToolTipssaisun["Japanese"]["price"] = "";
	$placeHolderssaisun["Japanese"]["price"] = "";
	$fieldLabelssaisun["Japanese"]["yahoo"] = "Yahoo";
	$fieldToolTipssaisun["Japanese"]["yahoo"] = "";
	$placeHolderssaisun["Japanese"]["yahoo"] = "";
	$fieldLabelssaisun["Japanese"]["remark"] = "詳細説明";
	$fieldToolTipssaisun["Japanese"]["remark"] = "";
	$placeHolderssaisun["Japanese"]["remark"] = "";
	$fieldLabelssaisun["Japanese"]["sales_price"] = "販売額";
	$fieldToolTipssaisun["Japanese"]["sales_price"] = "";
	$placeHolderssaisun["Japanese"]["sales_price"] = "";
	$fieldLabelssaisun["Japanese"]["description"] = "メモ";
	$fieldToolTipssaisun["Japanese"]["description"] = "";
	$placeHolderssaisun["Japanese"]["description"] = "";
	$fieldLabelssaisun["Japanese"]["status"] = "商品状態";
	$fieldToolTipssaisun["Japanese"]["status"] = "";
	$placeHolderssaisun["Japanese"]["status"] = "";
	$fieldLabelssaisun["Japanese"]["product_num"] = "ブランドID";
	$fieldToolTipssaisun["Japanese"]["product_num"] = "";
	$placeHolderssaisun["Japanese"]["product_num"] = "";
	$fieldLabelssaisun["Japanese"]["updated_at"] = "更新日";
	$fieldToolTipssaisun["Japanese"]["updated_at"] = "";
	$placeHolderssaisun["Japanese"]["updated_at"] = "";
	$fieldLabelssaisun["Japanese"]["yahoo_size"] = "サイズ結果欄";
	$fieldToolTipssaisun["Japanese"]["yahoo_size"] = "";
	$placeHolderssaisun["Japanese"]["yahoo_size"] = "";
	$fieldLabelssaisun["Japanese"]["yahoo_title"] = "Yタイトル";
	$fieldToolTipssaisun["Japanese"]["yahoo_title"] = "";
	$placeHolderssaisun["Japanese"]["yahoo_title"] = "";
	$fieldLabelssaisun["Japanese"]["yahoo_sankou_uwadai"] = "参考上代";
	$fieldToolTipssaisun["Japanese"]["yahoo_sankou_uwadai"] = "";
	$placeHolderssaisun["Japanese"]["yahoo_sankou_uwadai"] = "";
	$fieldLabelssaisun["Japanese"]["yahoo_sozai"] = "素材";
	$fieldToolTipssaisun["Japanese"]["yahoo_sozai"] = "";
	$placeHolderssaisun["Japanese"]["yahoo_sozai"] = "";
	$fieldLabelssaisun["Japanese"]["yahoo_color"] = "カラー";
	$fieldToolTipssaisun["Japanese"]["yahoo_color"] = "";
	$placeHolderssaisun["Japanese"]["yahoo_color"] = "";
	$fieldLabelssaisun["Japanese"]["yahoo_kataban"] = "型番";
	$fieldToolTipssaisun["Japanese"]["yahoo_kataban"] = "";
	$placeHolderssaisun["Japanese"]["yahoo_kataban"] = "";
	$fieldLabelssaisun["Japanese"]["yahoo_condition1"] = "コンディションの詳細";
	$fieldToolTipssaisun["Japanese"]["yahoo_condition1"] = "";
	$placeHolderssaisun["Japanese"]["yahoo_condition1"] = "";
	$fieldLabelssaisun["Japanese"]["yahoo_condition2"] = "コンディションランク";
	$fieldToolTipssaisun["Japanese"]["yahoo_condition2"] = "";
	$placeHolderssaisun["Japanese"]["yahoo_condition2"] = "";
	$fieldLabelssaisun["Japanese"]["yahoo_fuzokuhin"] = "付属品";
	$fieldToolTipssaisun["Japanese"]["yahoo_fuzokuhin"] = "";
	$placeHolderssaisun["Japanese"]["yahoo_fuzokuhin"] = "";
	$fieldLabelssaisun["Japanese"]["yahoo_sinaban"] = "品番";
	$fieldToolTipssaisun["Japanese"]["yahoo_sinaban"] = "";
	$placeHolderssaisun["Japanese"]["yahoo_sinaban"] = "";
	$fieldLabelssaisun["Japanese"]["yahoo_saisun_sha"] = "Y採寸者";
	$fieldToolTipssaisun["Japanese"]["yahoo_saisun_sha"] = "";
	$placeHolderssaisun["Japanese"]["yahoo_saisun_sha"] = "";
	$fieldLabelssaisun["Japanese"]["box_id"] = "Box Id";
	$fieldToolTipssaisun["Japanese"]["box_id"] = "";
	$placeHolderssaisun["Japanese"]["box_id"] = "";
	$fieldLabelssaisun["Japanese"]["nyuukin_price"] = "Nyuukin Price";
	$fieldToolTipssaisun["Japanese"]["nyuukin_price"] = "";
	$placeHolderssaisun["Japanese"]["nyuukin_price"] = "";
	$fieldLabelssaisun["Japanese"]["updated_by"] = "Updated By";
	$fieldToolTipssaisun["Japanese"]["updated_by"] = "";
	$placeHolderssaisun["Japanese"]["updated_by"] = "";
	$fieldLabelssaisun["Japanese"]["raku_title"] = "楽天タイトル";
	$fieldToolTipssaisun["Japanese"]["raku_title"] = "";
	$placeHolderssaisun["Japanese"]["raku_title"] = "";
	$fieldLabelssaisun["Japanese"]["raku_hyoujisaki_category2"] = "楽ジャン（店舗内）2";
	$fieldToolTipssaisun["Japanese"]["raku_hyoujisaki_category2"] = "";
	$placeHolderssaisun["Japanese"]["raku_hyoujisaki_category2"] = "";
	$fieldLabelssaisun["Japanese"]["raku_hyoujisaki_category"] = "楽ジャン（店舗内）1";
	$fieldToolTipssaisun["Japanese"]["raku_hyoujisaki_category"] = "";
	$placeHolderssaisun["Japanese"]["raku_hyoujisaki_category"] = "";
	$fieldLabelssaisun["Japanese"]["raku_hyoujisaki_category3"] = "楽ジャン（店舗内）3";
	$fieldToolTipssaisun["Japanese"]["raku_hyoujisaki_category3"] = "";
	$placeHolderssaisun["Japanese"]["raku_hyoujisaki_category3"] = "";
	$fieldLabelssaisun["Japanese"]["timesta"] = "Timesta";
	$fieldToolTipssaisun["Japanese"]["timesta"] = "";
	$placeHolderssaisun["Japanese"]["timesta"] = "";
	$fieldLabelssaisun["Japanese"]["saisun_end"] = "Saisun End";
	$fieldToolTipssaisun["Japanese"]["saisun_end"] = "";
	$placeHolderssaisun["Japanese"]["saisun_end"] = "";
	$fieldLabelssaisun["Japanese"]["label_output_flag"] = "ラベル出力";
	$fieldToolTipssaisun["Japanese"]["label_output_flag"] = "";
	$placeHolderssaisun["Japanese"]["label_output_flag"] = "";
	$fieldLabelssaisun["Japanese"]["season"] = "季節";
	$fieldToolTipssaisun["Japanese"]["season"] = "";
	$placeHolderssaisun["Japanese"]["season"] = "";
	$fieldLabelssaisun["Japanese"]["kanryou_henbi"] = "Kanryou Henbi";
	$fieldToolTipssaisun["Japanese"]["kanryou_henbi"] = "";
	$placeHolderssaisun["Japanese"]["kanryou_henbi"] = "";
	$fieldLabelssaisun["Japanese"]["box_sort"] = "Box Sort";
	$fieldToolTipssaisun["Japanese"]["box_sort"] = "";
	$placeHolderssaisun["Japanese"]["box_sort"] = "";
	$fieldLabelssaisun["Japanese"]["satei_by"] = "査定人";
	$fieldToolTipssaisun["Japanese"]["satei_by"] = "";
	$placeHolderssaisun["Japanese"]["satei_by"] = "";
	$fieldLabelssaisun["Japanese"]["kaitori_by"] = "登録人";
	$fieldToolTipssaisun["Japanese"]["kaitori_by"] = "";
	$placeHolderssaisun["Japanese"]["kaitori_by"] = "";
	$fieldLabelssaisun["Japanese"]["comment"] = "コメント";
	$fieldToolTipssaisun["Japanese"]["comment"] = "";
	$placeHolderssaisun["Japanese"]["comment"] = "";
	$fieldLabelssaisun["Japanese"]["satei_hi"] = "査定日";
	$fieldToolTipssaisun["Japanese"]["satei_hi"] = "";
	$placeHolderssaisun["Japanese"]["satei_hi"] = "";
	$fieldLabelssaisun["Japanese"]["kaitory_hi"] = "買取日";
	$fieldToolTipssaisun["Japanese"]["kaitory_hi"] = "";
	$placeHolderssaisun["Japanese"]["kaitory_hi"] = "";
	$fieldLabelssaisun["Japanese"]["REG_PHOTOGRAPHER"] = "REG PHOTOGRAPHER";
	$fieldToolTipssaisun["Japanese"]["REG_PHOTOGRAPHER"] = "";
	$placeHolderssaisun["Japanese"]["REG_PHOTOGRAPHER"] = "";
	$fieldLabelssaisun["Japanese"]["REG_AUTHOR"] = "REG AUTHOR";
	$fieldToolTipssaisun["Japanese"]["REG_AUTHOR"] = "";
	$placeHolderssaisun["Japanese"]["REG_AUTHOR"] = "";
	$fieldLabelssaisun["Japanese"]["REG_PACKINGS"] = "REG PACKINGS";
	$fieldToolTipssaisun["Japanese"]["REG_PACKINGS"] = "";
	$placeHolderssaisun["Japanese"]["REG_PACKINGS"] = "";
	$fieldLabelssaisun["Japanese"]["REG_KAKOU_DATE"] = "REG KAKOU DATE";
	$fieldToolTipssaisun["Japanese"]["REG_KAKOU_DATE"] = "";
	$placeHolderssaisun["Japanese"]["REG_KAKOU_DATE"] = "";
	$fieldLabelssaisun["Japanese"]["REG_KAKOU"] = "REG KAKOU";
	$fieldToolTipssaisun["Japanese"]["REG_KAKOU"] = "";
	$placeHolderssaisun["Japanese"]["REG_KAKOU"] = "";
	$fieldLabelssaisun["Japanese"]["REG_EXHIBITOR"] = "REG EXHIBITOR";
	$fieldToolTipssaisun["Japanese"]["REG_EXHIBITOR"] = "";
	$placeHolderssaisun["Japanese"]["REG_EXHIBITOR"] = "";
	$fieldLabelssaisun["Japanese"]["REG_PHOTOGRAPHER_DATE"] = "REG PHOTOGRAPHER DATE";
	$fieldToolTipssaisun["Japanese"]["REG_PHOTOGRAPHER_DATE"] = "";
	$placeHolderssaisun["Japanese"]["REG_PHOTOGRAPHER_DATE"] = "";
	$fieldLabelssaisun["Japanese"]["DT_PACKING_DATE"] = "DT PACKING DATE";
	$fieldToolTipssaisun["Japanese"]["DT_PACKING_DATE"] = "";
	$placeHolderssaisun["Japanese"]["DT_PACKING_DATE"] = "";
	$fieldLabelssaisun["Japanese"]["DT_UP_DATE"] = "DT UP DATE";
	$fieldToolTipssaisun["Japanese"]["DT_UP_DATE"] = "";
	$placeHolderssaisun["Japanese"]["DT_UP_DATE"] = "";
	$fieldLabelssaisun["Japanese"]["AWAZU_DATE"] = "AWAZU DATE";
	$fieldToolTipssaisun["Japanese"]["AWAZU_DATE"] = "";
	$placeHolderssaisun["Japanese"]["AWAZU_DATE"] = "";
	$fieldLabelssaisun["Japanese"]["AWAZU_NIN"] = "AWAZU NIN";
	$fieldToolTipssaisun["Japanese"]["AWAZU_NIN"] = "";
	$placeHolderssaisun["Japanese"]["AWAZU_NIN"] = "";
	$fieldLabelssaisun["Japanese"]["sabun_date"] = "Sabun Date";
	$fieldToolTipssaisun["Japanese"]["sabun_date"] = "";
	$placeHolderssaisun["Japanese"]["sabun_date"] = "";
	$fieldLabelssaisun["Japanese"]["browseid"] = "Browseid";
	$fieldToolTipssaisun["Japanese"]["browseid"] = "";
	$placeHolderssaisun["Japanese"]["browseid"] = "";
	$fieldLabelssaisun["Japanese"]["browsenode"] = "Browsenode";
	$fieldToolTipssaisun["Japanese"]["browsenode"] = "";
	$placeHolderssaisun["Japanese"]["browsenode"] = "";
	$fieldLabelssaisun["Japanese"]["gold_property"] = "Gold Property";
	$fieldToolTipssaisun["Japanese"]["gold_property"] = "";
	$placeHolderssaisun["Japanese"]["gold_property"] = "";
	$fieldLabelssaisun["Japanese"]["ichiba_title"] = "Ichiba Title";
	$fieldToolTipssaisun["Japanese"]["ichiba_title"] = "";
	$placeHolderssaisun["Japanese"]["ichiba_title"] = "";
	$fieldLabelssaisun["Japanese"]["Gram"] = "Gram";
	$fieldToolTipssaisun["Japanese"]["Gram"] = "";
	$placeHolderssaisun["Japanese"]["Gram"] = "";
	$fieldLabelssaisun["Japanese"]["Parent_stone"] = "Parent Stone";
	$fieldToolTipssaisun["Japanese"]["Parent_stone"] = "";
	$placeHolderssaisun["Japanese"]["Parent_stone"] = "";
	$fieldLabelssaisun["Japanese"]["Aside_stone"] = "Aside Stone";
	$fieldToolTipssaisun["Japanese"]["Aside_stone"] = "";
	$placeHolderssaisun["Japanese"]["Aside_stone"] = "";
	$fieldLabelssaisun["Japanese"]["Appraiser"] = "Appraiser";
	$fieldToolTipssaisun["Japanese"]["Appraiser"] = "";
	$placeHolderssaisun["Japanese"]["Appraiser"] = "";
	$fieldLabelssaisun["Japanese"]["Remarks"] = "Remarks";
	$fieldToolTipssaisun["Japanese"]["Remarks"] = "";
	$placeHolderssaisun["Japanese"]["Remarks"] = "";
	$fieldLabelssaisun["Japanese"]["Destination_selling"] = "Destination Selling";
	$fieldToolTipssaisun["Japanese"]["Destination_selling"] = "";
	$placeHolderssaisun["Japanese"]["Destination_selling"] = "";
	$fieldLabelssaisun["Japanese"]["Finish"] = "Finish";
	$fieldToolTipssaisun["Japanese"]["Finish"] = "";
	$placeHolderssaisun["Japanese"]["Finish"] = "";
	$fieldLabelssaisun["Japanese"]["Discrimination"] = "Discrimination";
	$fieldToolTipssaisun["Japanese"]["Discrimination"] = "";
	$placeHolderssaisun["Japanese"]["Discrimination"] = "";
	$fieldLabelssaisun["Japanese"]["accessories"] = "Accessories";
	$fieldToolTipssaisun["Japanese"]["accessories"] = "";
	$placeHolderssaisun["Japanese"]["accessories"] = "";
	$fieldLabelssaisun["Japanese"]["priority"] = "Priority";
	$fieldToolTipssaisun["Japanese"]["priority"] = "";
	$placeHolderssaisun["Japanese"]["priority"] = "";
	$fieldLabelssaisun["Japanese"]["A_storage"] = "A保管";
	$fieldToolTipssaisun["Japanese"]["A_storage"] = "";
	$placeHolderssaisun["Japanese"]["A_storage"] = "";
	$fieldLabelssaisun["Japanese"]["price_per_gram"] = "Price Per Gram";
	$fieldToolTipssaisun["Japanese"]["price_per_gram"] = "";
	$placeHolderssaisun["Japanese"]["price_per_gram"] = "";
	$fieldLabelssaisun["Japanese"]["price_per_parent_stone"] = "Price Per Parent Stone";
	$fieldToolTipssaisun["Japanese"]["price_per_parent_stone"] = "";
	$placeHolderssaisun["Japanese"]["price_per_parent_stone"] = "";
	$fieldLabelssaisun["Japanese"]["price_per_aside_stone"] = "Price Per Aside Stone";
	$fieldToolTipssaisun["Japanese"]["price_per_aside_stone"] = "";
	$placeHolderssaisun["Japanese"]["price_per_aside_stone"] = "";
	$fieldLabelssaisun["Japanese"]["price_secret"] = "Price Secret";
	$fieldToolTipssaisun["Japanese"]["price_secret"] = "";
	$placeHolderssaisun["Japanese"]["price_secret"] = "";
	$fieldLabelssaisun["Japanese"]["sales_price_secret"] = "Sales Price Secret";
	$fieldToolTipssaisun["Japanese"]["sales_price_secret"] = "";
	$placeHolderssaisun["Japanese"]["sales_price_secret"] = "";
	$fieldLabelssaisun["Japanese"]["eq"] = "Eq";
	$fieldToolTipssaisun["Japanese"]["eq"] = "";
	$placeHolderssaisun["Japanese"]["eq"] = "";
	$fieldLabelssaisun["Japanese"]["en"] = "En";
	$fieldToolTipssaisun["Japanese"]["en"] = "";
	$placeHolderssaisun["Japanese"]["en"] = "";
	$fieldLabelssaisun["Japanese"]["line"] = "Line";
	$fieldToolTipssaisun["Japanese"]["line"] = "";
	$placeHolderssaisun["Japanese"]["line"] = "";
	$fieldLabelssaisun["Japanese"]["item_name"] = "Item Name";
	$fieldToolTipssaisun["Japanese"]["item_name"] = "";
	$placeHolderssaisun["Japanese"]["item_name"] = "";
	$fieldLabelssaisun["Japanese"]["handle"] = "Handle";
	$fieldToolTipssaisun["Japanese"]["handle"] = "";
	$placeHolderssaisun["Japanese"]["handle"] = "";
	$fieldLabelssaisun["Japanese"]["yahoo_color_id"] = "WS用カラー";
	$fieldToolTipssaisun["Japanese"]["yahoo_color_id"] = "";
	$placeHolderssaisun["Japanese"]["yahoo_color_id"] = "";
	$fieldLabelssaisun["Japanese"]["raku_hyoujisaki_category4"] = "楽ジャン（店舗内）4";
	$fieldToolTipssaisun["Japanese"]["raku_hyoujisaki_category4"] = "";
	$placeHolderssaisun["Japanese"]["raku_hyoujisaki_category4"] = "";
	$fieldLabelssaisun["Japanese"]["raku_hyoujisaki_category5"] = "楽ジャン（店舗内）5";
	$fieldToolTipssaisun["Japanese"]["raku_hyoujisaki_category5"] = "";
	$placeHolderssaisun["Japanese"]["raku_hyoujisaki_category5"] = "";
	$fieldLabelssaisun["Japanese"]["raku_dir_1"] = "Raku Dir 1";
	$fieldToolTipssaisun["Japanese"]["raku_dir_1"] = "";
	$placeHolderssaisun["Japanese"]["raku_dir_1"] = "";
	$fieldLabelssaisun["Japanese"]["raku_dir_2"] = "Raku Dir 2";
	$fieldToolTipssaisun["Japanese"]["raku_dir_2"] = "";
	$placeHolderssaisun["Japanese"]["raku_dir_2"] = "";
	$fieldLabelssaisun["Japanese"]["raku_dir_3"] = "Raku Dir 3";
	$fieldToolTipssaisun["Japanese"]["raku_dir_3"] = "";
	$placeHolderssaisun["Japanese"]["raku_dir_3"] = "";
	$fieldLabelssaisun["Japanese"]["raku_dir_4"] = "Raku Dir 4";
	$fieldToolTipssaisun["Japanese"]["raku_dir_4"] = "";
	$placeHolderssaisun["Japanese"]["raku_dir_4"] = "";
	$fieldLabelssaisun["Japanese"]["raku_dir_5"] = "Raku Dir 5";
	$fieldToolTipssaisun["Japanese"]["raku_dir_5"] = "";
	$placeHolderssaisun["Japanese"]["raku_dir_5"] = "";
	$fieldLabelssaisun["Japanese"]["raku_dir_result"] = "Raku Dir Result";
	$fieldToolTipssaisun["Japanese"]["raku_dir_result"] = "";
	$placeHolderssaisun["Japanese"]["raku_dir_result"] = "";
	$fieldLabelssaisun["Japanese"]["raku_tag_result"] = "楽天タグID　Result";
	$fieldToolTipssaisun["Japanese"]["raku_tag_result"] = "";
	$placeHolderssaisun["Japanese"]["raku_tag_result"] = "";
	$fieldLabelssaisun["Japanese"]["Exhibition_Date"] = "Exhibition Date";
	$fieldToolTipssaisun["Japanese"]["Exhibition_Date"] = "";
	$placeHolderssaisun["Japanese"]["Exhibition_Date"] = "";
	$fieldLabelssaisun["Japanese"]["search_keyword"] = "ストア内検索キーワード";
	$fieldToolTipssaisun["Japanese"]["search_keyword"] = "";
	$placeHolderssaisun["Japanese"]["search_keyword"] = "";
	$fieldLabelssaisun["Japanese"]["stamp"] = "刻印";
	$fieldToolTipssaisun["Japanese"]["stamp"] = "";
	$placeHolderssaisun["Japanese"]["stamp"] = "";
	$fieldLabelssaisun["Japanese"]["motif"] = "Motif";
	$fieldToolTipssaisun["Japanese"]["motif"] = "";
	$placeHolderssaisun["Japanese"]["motif"] = "";
	$fieldLabelssaisun["Japanese"]["Setting"] = "セッティング";
	$fieldToolTipssaisun["Japanese"]["Setting"] = "";
	$placeHolderssaisun["Japanese"]["Setting"] = "";
	$fieldLabelssaisun["Japanese"]["processing"] = "処理";
	$fieldToolTipssaisun["Japanese"]["processing"] = "";
	$placeHolderssaisun["Japanese"]["processing"] = "";
	$fieldLabelssaisun["Japanese"]["Sleeve_Length"] = "Sleeve Length";
	$fieldToolTipssaisun["Japanese"]["Sleeve_Length"] = "";
	$placeHolderssaisun["Japanese"]["Sleeve_Length"] = "";
	$fieldLabelssaisun["Japanese"]["length"] = "Length";
	$fieldToolTipssaisun["Japanese"]["length"] = "";
	$placeHolderssaisun["Japanese"]["length"] = "";
	$fieldLabelssaisun["Japanese"]["Ring_size"] = "Ring Size";
	$fieldToolTipssaisun["Japanese"]["Ring_size"] = "";
	$placeHolderssaisun["Japanese"]["Ring_size"] = "";
	$fieldLabelssaisun["Japanese"]["price_for_site"] = "Price For Site";
	$fieldToolTipssaisun["Japanese"]["price_for_site"] = "";
	$placeHolderssaisun["Japanese"]["price_for_site"] = "";
	$fieldLabelssaisun["Japanese"]["yahoo_category_id"] = "Yahoo Category Id";
	$fieldToolTipssaisun["Japanese"]["yahoo_category_id"] = "";
	$placeHolderssaisun["Japanese"]["yahoo_category_id"] = "";
	$fieldLabelssaisun["Japanese"]["Qty"] = "Qty";
	$fieldToolTipssaisun["Japanese"]["Qty"] = "";
	$placeHolderssaisun["Japanese"]["Qty"] = "";
	$fieldLabelssaisun["Japanese"]["sales_period"] = "Sales Period";
	$fieldToolTipssaisun["Japanese"]["sales_period"] = "";
	$placeHolderssaisun["Japanese"]["sales_period"] = "";
	$fieldLabelssaisun["Japanese"]["starting_price"] = "Starting Price";
	$fieldToolTipssaisun["Japanese"]["starting_price"] = "";
	$placeHolderssaisun["Japanese"]["starting_price"] = "";
	$fieldLabelssaisun["Japanese"]["ecc_seq"] = "顧客番号";
	$fieldToolTipssaisun["Japanese"]["ecc_seq"] = "";
	$placeHolderssaisun["Japanese"]["ecc_seq"] = "";
	$fieldLabelssaisun["Japanese"]["yahoo_sex"] = "性別";
	$fieldToolTipssaisun["Japanese"]["yahoo_sex"] = "";
	$placeHolderssaisun["Japanese"]["yahoo_sex"] = "";
	$fieldLabelssaisun["Japanese"]["saisun_start"] = "採開";
	$fieldToolTipssaisun["Japanese"]["saisun_start"] = "";
	$placeHolderssaisun["Japanese"]["saisun_start"] = "";
	$fieldLabelssaisun["Japanese"]["yahoo_junle"] = "ブランドジャンル";
	$fieldToolTipssaisun["Japanese"]["yahoo_junle"] = "";
	$placeHolderssaisun["Japanese"]["yahoo_junle"] = "";
	$fieldLabelssaisun["Japanese"]["ecc_id1"] = "顧客SEQ";
	$fieldToolTipssaisun["Japanese"]["ecc_id1"] = "";
	$placeHolderssaisun["Japanese"]["ecc_id1"] = "";
	$fieldLabelssaisun["Japanese"]["serial_number"] = "機番";
	$fieldToolTipssaisun["Japanese"]["serial_number"] = "";
	$placeHolderssaisun["Japanese"]["serial_number"] = "";
	$fieldLabelssaisun["Japanese"]["logo"] = "ロゴ";
	$fieldToolTipssaisun["Japanese"]["logo"] = "";
	$placeHolderssaisun["Japanese"]["logo"] = "";
	$fieldLabelssaisun["Japanese"]["parts"] = "金具（パーツ）";
	$fieldToolTipssaisun["Japanese"]["parts"] = "";
	$placeHolderssaisun["Japanese"]["parts"] = "";
	$fieldLabelssaisun["Japanese"]["country_of_origin"] = "原産国";
	$fieldToolTipssaisun["Japanese"]["country_of_origin"] = "";
	$placeHolderssaisun["Japanese"]["country_of_origin"] = "";
	$fieldLabelssaisun["Japanese"]["zipper"] = "金具（ファスナー）";
	$fieldToolTipssaisun["Japanese"]["zipper"] = "";
	$placeHolderssaisun["Japanese"]["zipper"] = "";
	$fieldLabelssaisun["Japanese"]["guarantee"] = "ギャランティ";
	$fieldToolTipssaisun["Japanese"]["guarantee"] = "";
	$placeHolderssaisun["Japanese"]["guarantee"] = "";
	$fieldLabelssaisun["Japanese"]["errors"] = "真贋チェックエラー";
	$fieldToolTipssaisun["Japanese"]["errors"] = "";
	$placeHolderssaisun["Japanese"]["errors"] = "";
	$fieldLabelssaisun["Japanese"]["designer"] = "デザイナー";
	$fieldToolTipssaisun["Japanese"]["designer"] = "";
	$placeHolderssaisun["Japanese"]["designer"] = "";
	$fieldLabelssaisun["Japanese"]["amount"] = "内容量";
	$fieldToolTipssaisun["Japanese"]["amount"] = "";
	$placeHolderssaisun["Japanese"]["amount"] = "";
	$fieldLabelssaisun["Japanese"]["producing_area"] = "産地";
	$fieldToolTipssaisun["Japanese"]["producing_area"] = "";
	$placeHolderssaisun["Japanese"]["producing_area"] = "";
	$fieldLabelssaisun["Japanese"]["hahakai"] = "母貝";
	$fieldToolTipssaisun["Japanese"]["hahakai"] = "";
	$placeHolderssaisun["Japanese"]["hahakai"] = "";
	$fieldLabelssaisun["Japanese"]["shape"] = "シェイプ";
	$fieldToolTipssaisun["Japanese"]["shape"] = "";
	$placeHolderssaisun["Japanese"]["shape"] = "";
	$fieldLabelssaisun["Japanese"]["cutting_style"] = "カッティングスタイル";
	$fieldToolTipssaisun["Japanese"]["cutting_style"] = "";
	$placeHolderssaisun["Japanese"]["cutting_style"] = "";
	$fieldLabelssaisun["Japanese"]["chain_type"] = "チェーン種類";
	$fieldToolTipssaisun["Japanese"]["chain_type"] = "";
	$placeHolderssaisun["Japanese"]["chain_type"] = "";
	$fieldLabelssaisun["Japanese"]["satei_error"] = "査定抜けエラー";
	$fieldToolTipssaisun["Japanese"]["satei_error"] = "";
	$placeHolderssaisun["Japanese"]["satei_error"] = "";
	$fieldLabelssaisun["Japanese"]["link"] = "リンク";
	$fieldToolTipssaisun["Japanese"]["link"] = "";
	$placeHolderssaisun["Japanese"]["link"] = "";
	$fieldLabelssaisun["Japanese"]["serial_number_for_storage"] = "機番（保管用）";
	$fieldToolTipssaisun["Japanese"]["serial_number_for_storage"] = "";
	$placeHolderssaisun["Japanese"]["serial_number_for_storage"] = "";
	$fieldLabelssaisun["Japanese"]["official_url"] = "オフィシャルURL";
	$fieldToolTipssaisun["Japanese"]["official_url"] = "";
	$placeHolderssaisun["Japanese"]["official_url"] = "";
	$fieldLabelssaisun["Japanese"]["chigin_id"] = "地金SEQ";
	$fieldToolTipssaisun["Japanese"]["chigin_id"] = "";
	$placeHolderssaisun["Japanese"]["chigin_id"] = "";
	$fieldLabelssaisun["Japanese"]["name1"] = "名前";
	$fieldToolTipssaisun["Japanese"]["name1"] = "";
	$placeHolderssaisun["Japanese"]["name1"] = "";
	$fieldLabelssaisun["Japanese"]["name2"] = "フリガナ";
	$fieldToolTipssaisun["Japanese"]["name2"] = "";
	$placeHolderssaisun["Japanese"]["name2"] = "";
	$fieldLabelssaisun["Japanese"]["other_cost"] = "その他コスト";
	$fieldToolTipssaisun["Japanese"]["other_cost"] = "";
	$placeHolderssaisun["Japanese"]["other_cost"] = "";
	$fieldLabelssaisun["Japanese"]["identification_cost"] = "鑑別コスト";
	$fieldToolTipssaisun["Japanese"]["identification_cost"] = "";
	$placeHolderssaisun["Japanese"]["identification_cost"] = "";
	$fieldLabelssaisun["Japanese"]["cost"] = "仕上げコスト";
	$fieldToolTipssaisun["Japanese"]["cost"] = "";
	$placeHolderssaisun["Japanese"]["cost"] = "";
	if (count($fieldToolTipssaisun["Japanese"]))
		$tdatasaisun[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelssaisun[""] = array();
	$fieldToolTipssaisun[""] = array();
	$placeHolderssaisun[""] = array();
	$pageTitlessaisun[""] = array();
	$fieldLabelssaisun[""]["serial_number"] = "Serial Number";
	$fieldToolTipssaisun[""]["serial_number"] = "";
	$placeHolderssaisun[""]["serial_number"] = "";
	$fieldLabelssaisun[""]["logo"] = "Logo";
	$fieldToolTipssaisun[""]["logo"] = "";
	$placeHolderssaisun[""]["logo"] = "";
	$fieldLabelssaisun[""]["parts"] = "Parts";
	$fieldToolTipssaisun[""]["parts"] = "";
	$placeHolderssaisun[""]["parts"] = "";
	$fieldLabelssaisun[""]["country_of_origin"] = "Country Of Origin";
	$fieldToolTipssaisun[""]["country_of_origin"] = "";
	$placeHolderssaisun[""]["country_of_origin"] = "";
	$fieldLabelssaisun[""]["zipper"] = "Zipper";
	$fieldToolTipssaisun[""]["zipper"] = "";
	$placeHolderssaisun[""]["zipper"] = "";
	$fieldLabelssaisun[""]["guarantee"] = "Guarantee";
	$fieldToolTipssaisun[""]["guarantee"] = "";
	$placeHolderssaisun[""]["guarantee"] = "";
	$fieldLabelssaisun[""]["errors"] = "Errors";
	$fieldToolTipssaisun[""]["errors"] = "";
	$placeHolderssaisun[""]["errors"] = "";
	$fieldLabelssaisun[""]["designer"] = "Designer";
	$fieldToolTipssaisun[""]["designer"] = "";
	$placeHolderssaisun[""]["designer"] = "";
	$fieldLabelssaisun[""]["amount"] = "Amount";
	$fieldToolTipssaisun[""]["amount"] = "";
	$placeHolderssaisun[""]["amount"] = "";
	$fieldLabelssaisun[""]["producing_area"] = "Producing Area";
	$fieldToolTipssaisun[""]["producing_area"] = "";
	$placeHolderssaisun[""]["producing_area"] = "";
	$fieldLabelssaisun[""]["hahakai"] = "Hahakai";
	$fieldToolTipssaisun[""]["hahakai"] = "";
	$placeHolderssaisun[""]["hahakai"] = "";
	$fieldLabelssaisun[""]["shape"] = "Shape";
	$fieldToolTipssaisun[""]["shape"] = "";
	$placeHolderssaisun[""]["shape"] = "";
	$fieldLabelssaisun[""]["cutting_style"] = "Cutting Style";
	$fieldToolTipssaisun[""]["cutting_style"] = "";
	$placeHolderssaisun[""]["cutting_style"] = "";
	$fieldLabelssaisun[""]["chain_type"] = "Chain Type";
	$fieldToolTipssaisun[""]["chain_type"] = "";
	$placeHolderssaisun[""]["chain_type"] = "";
	$fieldLabelssaisun[""]["satei_error"] = "Satei Error";
	$fieldToolTipssaisun[""]["satei_error"] = "";
	$placeHolderssaisun[""]["satei_error"] = "";
	$fieldLabelssaisun[""]["link"] = "Link";
	$fieldToolTipssaisun[""]["link"] = "";
	$placeHolderssaisun[""]["link"] = "";
	$fieldLabelssaisun[""]["serial_number_for_storage"] = "Serial Number For Storage";
	$fieldToolTipssaisun[""]["serial_number_for_storage"] = "";
	$placeHolderssaisun[""]["serial_number_for_storage"] = "";
	$fieldLabelssaisun[""]["official_url"] = "Official Url";
	$fieldToolTipssaisun[""]["official_url"] = "";
	$placeHolderssaisun[""]["official_url"] = "";
	$fieldLabelssaisun[""]["chigin_id"] = "Chigin Id";
	$fieldToolTipssaisun[""]["chigin_id"] = "";
	$placeHolderssaisun[""]["chigin_id"] = "";
	$fieldLabelssaisun[""]["name1"] = "Name1";
	$fieldToolTipssaisun[""]["name1"] = "";
	$placeHolderssaisun[""]["name1"] = "";
	$fieldLabelssaisun[""]["name2"] = "Name2";
	$fieldToolTipssaisun[""]["name2"] = "";
	$placeHolderssaisun[""]["name2"] = "";
	$fieldLabelssaisun[""]["other_cost"] = "Other Cost";
	$fieldToolTipssaisun[""]["other_cost"] = "";
	$placeHolderssaisun[""]["other_cost"] = "";
	$fieldLabelssaisun[""]["identification_cost"] = "Identification Cost";
	$fieldToolTipssaisun[""]["identification_cost"] = "";
	$placeHolderssaisun[""]["identification_cost"] = "";
	$fieldLabelssaisun[""]["cost"] = "Cost";
	$fieldToolTipssaisun[""]["cost"] = "";
	$placeHolderssaisun[""]["cost"] = "";
	if (count($fieldToolTipssaisun[""]))
		$tdatasaisun[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelssaisun["English"] = array();
	$fieldToolTipssaisun["English"] = array();
	$placeHolderssaisun["English"] = array();
	$pageTitlessaisun["English"] = array();
	$fieldLabelssaisun["English"]["logo"] = "Logo";
	$fieldToolTipssaisun["English"]["logo"] = "";
	$placeHolderssaisun["English"]["logo"] = "";
	$fieldLabelssaisun["English"]["parts"] = "Parts";
	$fieldToolTipssaisun["English"]["parts"] = "";
	$placeHolderssaisun["English"]["parts"] = "";
	$fieldLabelssaisun["English"]["country_of_origin"] = "Country Of Origin";
	$fieldToolTipssaisun["English"]["country_of_origin"] = "";
	$placeHolderssaisun["English"]["country_of_origin"] = "";
	$fieldLabelssaisun["English"]["zipper"] = "Zipper";
	$fieldToolTipssaisun["English"]["zipper"] = "";
	$placeHolderssaisun["English"]["zipper"] = "";
	$fieldLabelssaisun["English"]["guarantee"] = "Guarantee";
	$fieldToolTipssaisun["English"]["guarantee"] = "";
	$placeHolderssaisun["English"]["guarantee"] = "";
	$fieldLabelssaisun["English"]["errors"] = "Errors";
	$fieldToolTipssaisun["English"]["errors"] = "";
	$placeHolderssaisun["English"]["errors"] = "";
	$fieldLabelssaisun["English"]["designer"] = "Designer";
	$fieldToolTipssaisun["English"]["designer"] = "";
	$placeHolderssaisun["English"]["designer"] = "";
	$fieldLabelssaisun["English"]["amount"] = "Amount";
	$fieldToolTipssaisun["English"]["amount"] = "";
	$placeHolderssaisun["English"]["amount"] = "";
	$fieldLabelssaisun["English"]["producing_area"] = "Producing Area";
	$fieldToolTipssaisun["English"]["producing_area"] = "";
	$placeHolderssaisun["English"]["producing_area"] = "";
	$fieldLabelssaisun["English"]["hahakai"] = "Hahakai";
	$fieldToolTipssaisun["English"]["hahakai"] = "";
	$placeHolderssaisun["English"]["hahakai"] = "";
	$fieldLabelssaisun["English"]["shape"] = "Shape";
	$fieldToolTipssaisun["English"]["shape"] = "";
	$placeHolderssaisun["English"]["shape"] = "";
	$fieldLabelssaisun["English"]["cutting_style"] = "Cutting Style";
	$fieldToolTipssaisun["English"]["cutting_style"] = "";
	$placeHolderssaisun["English"]["cutting_style"] = "";
	$fieldLabelssaisun["English"]["chain_type"] = "Chain Type";
	$fieldToolTipssaisun["English"]["chain_type"] = "";
	$placeHolderssaisun["English"]["chain_type"] = "";
	$fieldLabelssaisun["English"]["satei_error"] = "Satei Error";
	$fieldToolTipssaisun["English"]["satei_error"] = "";
	$placeHolderssaisun["English"]["satei_error"] = "";
	$fieldLabelssaisun["English"]["link"] = "Link";
	$fieldToolTipssaisun["English"]["link"] = "";
	$placeHolderssaisun["English"]["link"] = "";
	$fieldLabelssaisun["English"]["serial_number_for_storage"] = "Serial Number For Storage";
	$fieldToolTipssaisun["English"]["serial_number_for_storage"] = "";
	$placeHolderssaisun["English"]["serial_number_for_storage"] = "";
	$fieldLabelssaisun["English"]["official_url"] = "Official Url";
	$fieldToolTipssaisun["English"]["official_url"] = "";
	$placeHolderssaisun["English"]["official_url"] = "";
	$fieldLabelssaisun["English"]["chigin_id"] = "Chigin Id";
	$fieldToolTipssaisun["English"]["chigin_id"] = "";
	$placeHolderssaisun["English"]["chigin_id"] = "";
	$fieldLabelssaisun["English"]["name1"] = "Name1";
	$fieldToolTipssaisun["English"]["name1"] = "";
	$placeHolderssaisun["English"]["name1"] = "";
	$fieldLabelssaisun["English"]["name2"] = "Name2";
	$fieldToolTipssaisun["English"]["name2"] = "";
	$placeHolderssaisun["English"]["name2"] = "";
	$fieldLabelssaisun["English"]["other_cost"] = "Other Cost";
	$fieldToolTipssaisun["English"]["other_cost"] = "";
	$placeHolderssaisun["English"]["other_cost"] = "";
	$fieldLabelssaisun["English"]["identification_cost"] = "Identification Cost";
	$fieldToolTipssaisun["English"]["identification_cost"] = "";
	$placeHolderssaisun["English"]["identification_cost"] = "";
	$fieldLabelssaisun["English"]["cost"] = "Cost";
	$fieldToolTipssaisun["English"]["cost"] = "";
	$placeHolderssaisun["English"]["cost"] = "";
	if (count($fieldToolTipssaisun["English"]))
		$tdatasaisun[".isUseToolTips"] = true;
}


	$tdatasaisun[".NCSearch"] = true;



$tdatasaisun[".shortTableName"] = "saisun";
$tdatasaisun[".nSecOptions"] = 0;
$tdatasaisun[".recsPerRowPrint"] = 1;
$tdatasaisun[".mainTableOwnerID"] = "";
$tdatasaisun[".moveNext"] = 1;
$tdatasaisun[".entityType"] = 1;

$tdatasaisun[".strOriginalTableName"] = "shouhin";

	



$tdatasaisun[".showAddInPopup"] = false;

$tdatasaisun[".showEditInPopup"] = false;

$tdatasaisun[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatasaisun[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatasaisun[".fieldsForRegister"] = array();

$tdatasaisun[".listAjax"] = false;

	$tdatasaisun[".audit"] = true;

	$tdatasaisun[".locking"] = false;

$tdatasaisun[".edit"] = true;
$tdatasaisun[".afterEditAction"] = 1;
$tdatasaisun[".closePopupAfterEdit"] = 1;
$tdatasaisun[".afterEditActionDetTable"] = "";

$tdatasaisun[".add"] = true;
$tdatasaisun[".afterAddAction"] = 1;
$tdatasaisun[".closePopupAfterAdd"] = 1;
$tdatasaisun[".afterAddActionDetTable"] = "";

$tdatasaisun[".list"] = true;

$tdatasaisun[".inlineEdit"] = true;

$tdatasaisun[".updateSelected"] = true;

$tdatasaisun[".reorderRecordsByHeader"] = true;
$tdatasaisun[".createSortByDropdown"] = true;
$tdatasaisun[".strSortControlSettingsJSON"] = "";



$tdatasaisun[".inlineAdd"] = true;
$tdatasaisun[".copy"] = true;
$tdatasaisun[".view"] = true;

$tdatasaisun[".import"] = true;

$tdatasaisun[".exportTo"] = true;

$tdatasaisun[".printFriendly"] = true;

$tdatasaisun[".delete"] = true;

$tdatasaisun[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatasaisun[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatasaisun[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatasaisun[".searchSaving"] = false;
//

$tdatasaisun[".showSearchPanel"] = true;
		$tdatasaisun[".flexibleSearch"] = true;

$tdatasaisun[".isUseAjaxSuggest"] = true;

$tdatasaisun[".rowHighlite"] = true;



																																						
					
												
					
																																																																																																																																																																																		

$tdatasaisun[".ajaxCodeSnippetAdded"] = false;

$tdatasaisun[".buttonsAdded"] = true;

$tdatasaisun[".addPageEvents"] = true;

// use timepicker for search panel
$tdatasaisun[".isUseTimeForSearch"] = false;



$tdatasaisun[".badgeColor"] = "DAA520";


$tdatasaisun[".allSearchFields"] = array();
$tdatasaisun[".filterFields"] = array();
$tdatasaisun[".requiredSearchFields"] = array();

$tdatasaisun[".allSearchFields"][] = "identification_cost";
	$tdatasaisun[".allSearchFields"][] = "other_cost";
	$tdatasaisun[".allSearchFields"][] = "cost";
	$tdatasaisun[".allSearchFields"][] = "chigin_id";
	$tdatasaisun[".allSearchFields"][] = "official_url";
	$tdatasaisun[".allSearchFields"][] = "serial_number_for_storage";
	$tdatasaisun[".allSearchFields"][] = "name2";
	$tdatasaisun[".allSearchFields"][] = "name1";
	$tdatasaisun[".allSearchFields"][] = "designer";
	$tdatasaisun[".allSearchFields"][] = "satei_error";
	$tdatasaisun[".allSearchFields"][] = "amount";
	$tdatasaisun[".allSearchFields"][] = "producing_area";
	$tdatasaisun[".allSearchFields"][] = "hahakai";
	$tdatasaisun[".allSearchFields"][] = "shape";
	$tdatasaisun[".allSearchFields"][] = "cutting_style";
	$tdatasaisun[".allSearchFields"][] = "chain_type";
	$tdatasaisun[".allSearchFields"][] = "ecc_id1";
	$tdatasaisun[".allSearchFields"][] = "ecc_seq";
	$tdatasaisun[".allSearchFields"][] = "product_id";
	$tdatasaisun[".allSearchFields"][] = "category_id";
	$tdatasaisun[".allSearchFields"][] = "yahoo_sex";
	$tdatasaisun[".allSearchFields"][] = "title";
	$tdatasaisun[".allSearchFields"][] = "status";
	$tdatasaisun[".allSearchFields"][] = "label_output_flag";
	$tdatasaisun[".allSearchFields"][] = "satei_by";
	$tdatasaisun[".allSearchFields"][] = "sub_category_id1";
	$tdatasaisun[".allSearchFields"][] = "yahoo_sinaban";
	$tdatasaisun[".allSearchFields"][] = "price";
	$tdatasaisun[".allSearchFields"][] = "sales_price";
	$tdatasaisun[".allSearchFields"][] = "product_num";
	$tdatasaisun[".allSearchFields"][] = "description";
	$tdatasaisun[".allSearchFields"][] = "raku_hyoujisaki_category";
	$tdatasaisun[".allSearchFields"][] = "raku_hyoujisaki_category2";
	$tdatasaisun[".allSearchFields"][] = "raku_hyoujisaki_category3";
	$tdatasaisun[".allSearchFields"][] = "raku_hyoujisaki_category4";
	$tdatasaisun[".allSearchFields"][] = "raku_hyoujisaki_category5";
	$tdatasaisun[".allSearchFields"][] = "raku_tag_result";
	$tdatasaisun[".allSearchFields"][] = "stamp";
	$tdatasaisun[".allSearchFields"][] = "yahoo_kataban";
	$tdatasaisun[".allSearchFields"][] = "yahoo_sozai";
	$tdatasaisun[".allSearchFields"][] = "yahoo_color";
	$tdatasaisun[".allSearchFields"][] = "yahoo_size";
	$tdatasaisun[".allSearchFields"][] = "yahoo_condition1";
	$tdatasaisun[".allSearchFields"][] = "yahoo_saisun_sha";
	$tdatasaisun[".allSearchFields"][] = "yahoo_condition2";
	$tdatasaisun[".allSearchFields"][] = "remark";
	$tdatasaisun[".allSearchFields"][] = "yahoo_fuzokuhin";
	$tdatasaisun[".allSearchFields"][] = "yahoo_sankou_uwadai";
	$tdatasaisun[".allSearchFields"][] = "season";
	$tdatasaisun[".allSearchFields"][] = "yahoo_title";
	$tdatasaisun[".allSearchFields"][] = "goods_title";
	$tdatasaisun[".allSearchFields"][] = "raku_title";
	$tdatasaisun[".allSearchFields"][] = "search_keyword";
	$tdatasaisun[".allSearchFields"][] = "kaitori_by";
	$tdatasaisun[".allSearchFields"][] = "kaitory_hi";
	$tdatasaisun[".allSearchFields"][] = "errors";
	$tdatasaisun[".allSearchFields"][] = "A_storage";
	

$tdatasaisun[".googleLikeFields"] = array();
$tdatasaisun[".googleLikeFields"][] = "link";
$tdatasaisun[".googleLikeFields"][] = "product_id";
$tdatasaisun[".googleLikeFields"][] = "chigin_id";
$tdatasaisun[".googleLikeFields"][] = "category_id";
$tdatasaisun[".googleLikeFields"][] = "goods_title";
$tdatasaisun[".googleLikeFields"][] = "sub_category_id1";
$tdatasaisun[".googleLikeFields"][] = "price";
$tdatasaisun[".googleLikeFields"][] = "remark";
$tdatasaisun[".googleLikeFields"][] = "sales_price";
$tdatasaisun[".googleLikeFields"][] = "description";
$tdatasaisun[".googleLikeFields"][] = "status";
$tdatasaisun[".googleLikeFields"][] = "product_num";
$tdatasaisun[".googleLikeFields"][] = "yahoo_size";
$tdatasaisun[".googleLikeFields"][] = "yahoo_title";
$tdatasaisun[".googleLikeFields"][] = "yahoo_sankou_uwadai";
$tdatasaisun[".googleLikeFields"][] = "yahoo_sozai";
$tdatasaisun[".googleLikeFields"][] = "yahoo_color";
$tdatasaisun[".googleLikeFields"][] = "yahoo_kataban";
$tdatasaisun[".googleLikeFields"][] = "yahoo_condition1";
$tdatasaisun[".googleLikeFields"][] = "yahoo_condition2";
$tdatasaisun[".googleLikeFields"][] = "yahoo_fuzokuhin";
$tdatasaisun[".googleLikeFields"][] = "yahoo_sinaban";
$tdatasaisun[".googleLikeFields"][] = "yahoo_saisun_sha";
$tdatasaisun[".googleLikeFields"][] = "raku_title";
$tdatasaisun[".googleLikeFields"][] = "raku_hyoujisaki_category2";
$tdatasaisun[".googleLikeFields"][] = "raku_hyoujisaki_category";
$tdatasaisun[".googleLikeFields"][] = "raku_hyoujisaki_category3";
$tdatasaisun[".googleLikeFields"][] = "season";
$tdatasaisun[".googleLikeFields"][] = "satei_by";
$tdatasaisun[".googleLikeFields"][] = "kaitori_by";
$tdatasaisun[".googleLikeFields"][] = "kaitory_hi";
$tdatasaisun[".googleLikeFields"][] = "raku_hyoujisaki_category4";
$tdatasaisun[".googleLikeFields"][] = "raku_hyoujisaki_category5";
$tdatasaisun[".googleLikeFields"][] = "raku_tag_result";
$tdatasaisun[".googleLikeFields"][] = "search_keyword";
$tdatasaisun[".googleLikeFields"][] = "stamp";
$tdatasaisun[".googleLikeFields"][] = "ecc_seq";
$tdatasaisun[".googleLikeFields"][] = "yahoo_sex";
$tdatasaisun[".googleLikeFields"][] = "ecc_id1";
$tdatasaisun[".googleLikeFields"][] = "name1";
$tdatasaisun[".googleLikeFields"][] = "name2";
$tdatasaisun[".googleLikeFields"][] = "errors";
$tdatasaisun[".googleLikeFields"][] = "designer";
$tdatasaisun[".googleLikeFields"][] = "amount";
$tdatasaisun[".googleLikeFields"][] = "producing_area";
$tdatasaisun[".googleLikeFields"][] = "hahakai";
$tdatasaisun[".googleLikeFields"][] = "shape";
$tdatasaisun[".googleLikeFields"][] = "cutting_style";
$tdatasaisun[".googleLikeFields"][] = "chain_type";
$tdatasaisun[".googleLikeFields"][] = "satei_error";
$tdatasaisun[".googleLikeFields"][] = "serial_number_for_storage";
$tdatasaisun[".googleLikeFields"][] = "official_url";
$tdatasaisun[".googleLikeFields"][] = "other_cost";
$tdatasaisun[".googleLikeFields"][] = "identification_cost";
$tdatasaisun[".googleLikeFields"][] = "cost";

$tdatasaisun[".panelSearchFields"] = array();
$tdatasaisun[".searchPanelOptions"] = array();
$tdatasaisun[".panelSearchFields"][] = "ecc_id1";
	$tdatasaisun[".panelSearchFields"][] = "ecc_seq";
	$tdatasaisun[".panelSearchFields"][] = "product_id";
	$tdatasaisun[".panelSearchFields"][] = "category_id";
	$tdatasaisun[".panelSearchFields"][] = "yahoo_sex";
	$tdatasaisun[".panelSearchFields"][] = "title";
	$tdatasaisun[".panelSearchFields"][] = "status";
	$tdatasaisun[".panelSearchFields"][] = "label_output_flag";
	$tdatasaisun[".panelSearchFields"][] = "satei_by";
	
$tdatasaisun[".advSearchFields"] = array();
$tdatasaisun[".advSearchFields"][] = "identification_cost";
$tdatasaisun[".advSearchFields"][] = "other_cost";
$tdatasaisun[".advSearchFields"][] = "cost";
$tdatasaisun[".advSearchFields"][] = "chigin_id";
$tdatasaisun[".advSearchFields"][] = "official_url";
$tdatasaisun[".advSearchFields"][] = "serial_number_for_storage";
$tdatasaisun[".advSearchFields"][] = "name2";
$tdatasaisun[".advSearchFields"][] = "name1";
$tdatasaisun[".advSearchFields"][] = "designer";
$tdatasaisun[".advSearchFields"][] = "satei_error";
$tdatasaisun[".advSearchFields"][] = "amount";
$tdatasaisun[".advSearchFields"][] = "producing_area";
$tdatasaisun[".advSearchFields"][] = "hahakai";
$tdatasaisun[".advSearchFields"][] = "shape";
$tdatasaisun[".advSearchFields"][] = "cutting_style";
$tdatasaisun[".advSearchFields"][] = "chain_type";
$tdatasaisun[".advSearchFields"][] = "ecc_id1";
$tdatasaisun[".advSearchFields"][] = "ecc_seq";
$tdatasaisun[".advSearchFields"][] = "product_id";
$tdatasaisun[".advSearchFields"][] = "category_id";
$tdatasaisun[".advSearchFields"][] = "yahoo_sex";
$tdatasaisun[".advSearchFields"][] = "title";
$tdatasaisun[".advSearchFields"][] = "status";
$tdatasaisun[".advSearchFields"][] = "label_output_flag";
$tdatasaisun[".advSearchFields"][] = "satei_by";
$tdatasaisun[".advSearchFields"][] = "sub_category_id1";
$tdatasaisun[".advSearchFields"][] = "yahoo_sinaban";
$tdatasaisun[".advSearchFields"][] = "price";
$tdatasaisun[".advSearchFields"][] = "sales_price";
$tdatasaisun[".advSearchFields"][] = "product_num";
$tdatasaisun[".advSearchFields"][] = "description";
$tdatasaisun[".advSearchFields"][] = "raku_hyoujisaki_category";
$tdatasaisun[".advSearchFields"][] = "raku_hyoujisaki_category2";
$tdatasaisun[".advSearchFields"][] = "raku_hyoujisaki_category3";
$tdatasaisun[".advSearchFields"][] = "raku_hyoujisaki_category4";
$tdatasaisun[".advSearchFields"][] = "raku_hyoujisaki_category5";
$tdatasaisun[".advSearchFields"][] = "raku_tag_result";
$tdatasaisun[".advSearchFields"][] = "stamp";
$tdatasaisun[".advSearchFields"][] = "yahoo_kataban";
$tdatasaisun[".advSearchFields"][] = "yahoo_sozai";
$tdatasaisun[".advSearchFields"][] = "yahoo_color";
$tdatasaisun[".advSearchFields"][] = "yahoo_size";
$tdatasaisun[".advSearchFields"][] = "yahoo_condition1";
$tdatasaisun[".advSearchFields"][] = "yahoo_saisun_sha";
$tdatasaisun[".advSearchFields"][] = "yahoo_condition2";
$tdatasaisun[".advSearchFields"][] = "remark";
$tdatasaisun[".advSearchFields"][] = "yahoo_fuzokuhin";
$tdatasaisun[".advSearchFields"][] = "yahoo_sankou_uwadai";
$tdatasaisun[".advSearchFields"][] = "season";
$tdatasaisun[".advSearchFields"][] = "yahoo_title";
$tdatasaisun[".advSearchFields"][] = "goods_title";
$tdatasaisun[".advSearchFields"][] = "raku_title";
$tdatasaisun[".advSearchFields"][] = "search_keyword";
$tdatasaisun[".advSearchFields"][] = "kaitori_by";
$tdatasaisun[".advSearchFields"][] = "kaitory_hi";
$tdatasaisun[".advSearchFields"][] = "errors";
$tdatasaisun[".advSearchFields"][] = "A_storage";

$tdatasaisun[".tableType"] = "list";

$tdatasaisun[".printerPageOrientation"] = 0;
$tdatasaisun[".nPrinterPageScale"] = 100;

$tdatasaisun[".nPrinterSplitRecords"] = 40;

$tdatasaisun[".nPrinterPDFSplitRecords"] = 40;



$tdatasaisun[".geocodingEnabled"] = false;





$tdatasaisun[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatasaisun[".pageSize"] = 20;

$tdatasaisun[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `shouhin`.`product_id` DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatasaisun[".strOrderBy"] = $tstrOrderBy;

$tdatasaisun[".orderindexes"] = array();
$tdatasaisun[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "`shouhin`.`product_id`");

$tdatasaisun[".sqlHead"] = " SELECT `shouhin`.`product_id` AS `link`,  `shouhin`.`product_id`,  `shouhin`.`product_id` AS `chigin_id`,  `shouhin`.`category_id`,  `shouhin`.`goods_title`,  `shouhin`.`title`,  `shouhin`.`sub_category_id1`,  `shouhin`.`ecc_id`,  `shouhin`.`price`,  `shouhin`.`yahoo`,  `shouhin`.`remark`,  `shouhin`.`sales_price`,  `shouhin`.`description`,  `shouhin`.`status`,  `shouhin`.`product_num`,  `shouhin`.`updated_at`,  `shouhin`.`yahoo_size`,  `shouhin`.`yahoo_title`,  `shouhin`.`yahoo_sankou_uwadai`,  `shouhin`.`yahoo_sozai`,  `shouhin`.`yahoo_color`,  `shouhin`.`yahoo_kataban`,  `shouhin`.`yahoo_condition1`,  `shouhin`.`yahoo_condition2`,  `shouhin`.`yahoo_fuzokuhin`,  `shouhin`.`yahoo_sinaban`,  `shouhin`.`yahoo_saisun_sha`,  `shouhin`.`box_id`,  `shouhin`.`nyuukin_price`,  `shouhin`.`updated_by`,  `shouhin`.`raku_title`,  `shouhin`.`raku_hyoujisaki_category2`,  `shouhin`.`raku_hyoujisaki_category`,  `shouhin`.`raku_hyoujisaki_category3`,  `shouhin`.`timesta`,  `shouhin`.`saisun_end`,  `shouhin`.`label_output_flag`,  `shouhin`.`season`,  `shouhin`.`kanryou_henbi`,  `shouhin`.`box_sort`,  `shouhin`.`satei_by`,  `shouhin`.`kaitori_by`,  `shouhin`.`comment`,  `shouhin`.`satei_hi`,  `shouhin`.`kaitory_hi`,  `shouhin`.`REG_PHOTOGRAPHER`,  `shouhin`.`REG_AUTHOR`,  `shouhin`.`REG_PACKINGS`,  `shouhin`.`REG_KAKOU_DATE`,  `shouhin`.`REG_KAKOU`,  `shouhin`.`REG_EXHIBITOR`,  `shouhin`.`REG_PHOTOGRAPHER_DATE`,  `shouhin`.`DT_PACKING_DATE`,  `shouhin`.`DT_UP_DATE`,  `shouhin`.`AWAZU_DATE`,  `shouhin`.`AWAZU_NIN`,  `shouhin`.`sabun_date`,  `shouhin`.`browseid`,  `shouhin`.`browsenode`,  `shouhin`.`gold_property`,  `shouhin`.`ichiba_title`,  `shouhin`.`Gram`,  `shouhin`.`Parent_stone`,  `shouhin`.`Aside_stone`,  `shouhin`.`Appraiser`,  `shouhin`.`Remarks`,  `shouhin`.`Destination_selling`,  `shouhin`.`Finish`,  `shouhin`.`Discrimination`,  `shouhin`.`accessories`,  `shouhin`.`priority`,  `shouhin`.`A_storage`,  `shouhin`.`price_per_gram`,  `shouhin`.`price_per_parent_stone`,  `shouhin`.`price_per_aside_stone`,  `shouhin`.`price_secret`,  `shouhin`.`sales_price_secret`,  `shouhin`.`eq`,  `shouhin`.`en`,  `shouhin`.`line`,  `shouhin`.`item_name`,  `shouhin`.`handle`,  `shouhin`.`yahoo_color_id`,  `shouhin`.`raku_hyoujisaki_category4`,  `shouhin`.`raku_hyoujisaki_category5`,  `shouhin`.`raku_dir_1`,  `shouhin`.`raku_dir_2`,  `shouhin`.`raku_dir_3`,  `shouhin`.`raku_dir_4`,  `shouhin`.`raku_dir_5`,  `shouhin`.`raku_dir_result`,  `shouhin`.`raku_tag_result`,  `shouhin`.`Exhibition_Date`,  `shouhin`.`search_keyword`,  `shouhin`.`stamp`,  `shouhin`.`motif`,  `shouhin`.`Setting`,  `shouhin`.`processing`,  `shouhin`.`Sleeve_Length`,  `shouhin`.`length`,  `shouhin`.`Ring_size`,  `shouhin`.`price_for_site`,  `shouhin`.`yahoo_category_id`,  `shouhin`.`Qty`,  `shouhin`.`sales_period`,  `shouhin`.`starting_price`,  `Eoc`.`ecc_seq`,  `shouhin`.`yahoo_sex`,  `shouhin`.`saisun_start`,  `shouhin`.`yahoo_junle`,  `Eoc`.`ecc_id` AS `ecc_id1`,  `Eoc`.`name1` AS `name1`,  `Eoc`.`name2` AS `name2`,  `shouhin`.`serial_number`,  `shouhin`.`logo`,  `shouhin`.`parts`,  `shouhin`.`country_of_origin`,  `shouhin`.`zipper`,  `shouhin`.`guarantee`,  `shouhin`.`errors`,  `shouhin`.`designer`,  `shouhin`.`amount`,  `shouhin`.`producing_area`,  `shouhin`.`hahakai`,  `shouhin`.`shape`,  `shouhin`.`cutting_style`,  `shouhin`.`chain_type`,  `shouhin`.`satei_error`,  `shouhin`.`serial_number_for_storage`,  `shouhin`.`official_url`,  `shouhin`.`other_cost`,  `shouhin`.`identification_cost`,  `shouhin`.`cost`";
$tdatasaisun[".sqlFrom"] = "FROM `shouhin`  LEFT OUTER JOIN `Eoc` ON `shouhin`.`ecc_id` = `Eoc`.`ecc_id`";
$tdatasaisun[".sqlWhereExpr"] = "`shouhin`.`status` = 29 OR `shouhin`.`status` = 7 OR `shouhin`.`status` = 137 OR `shouhin`.`status` = 110 OR `shouhin`.`status` = 33 OR `shouhin`.`status` = 143 OR `shouhin`.`status` = 136";
$tdatasaisun[".sqlTail"] = "";

//fill array of tabs for edit page
$arrEditTabs = array();
	$tabFields = array();
	
	
		$tabFields[] = "errors";
	
		$tabFields[] = "satei_error";
	
		$tabFields[] = "status";
	
		$tabFields[] = "satei_by";
	
		$tabFields[] = "category_id";
	
		$tabFields[] = "sub_category_id1";
	
		$tabFields[] = "product_id";
	
		$tabFields[] = "yahoo_sinaban";
	
		$tabFields[] = "price";
	
		$tabFields[] = "sales_price";
	
		$tabFields[] = "saisun_start";
	
		$tabFields[] = "yahoo_sex";
	
		$tabFields[] = "product_num";
	
		$tabFields[] = "description";
	
		$tabFields[] = "A_storage";
	
		$tabFields[] = "logo";
	
		$tabFields[] = "parts";
	
		$tabFields[] = "zipper";
	
		$tabFields[] = "guarantee";
	
		$tabFields[] = "raku_hyoujisaki_category";
	
		$tabFields[] = "raku_hyoujisaki_category2";
	
		$tabFields[] = "raku_hyoujisaki_category3";
	
		$tabFields[] = "raku_hyoujisaki_category4";
	
		$tabFields[] = "raku_hyoujisaki_category5";
	
		$tabFields[] = "raku_tag_result";
	
		$tabFields[] = "designer";
	
		$tabFields[] = "amount";
	
		$tabFields[] = "producing_area";
	
		$tabFields[] = "hahakai";
	
		$tabFields[] = "shape";
	
		$tabFields[] = "cutting_style";
	
		$tabFields[] = "Setting";
	
		$tabFields[] = "processing";
	
		$tabFields[] = "chain_type";
$arrEditTabs[] = array('tabId'=>'section11',
					   'tabName'=>"",
					   'nType'=>'1',
					   'nOrder'=>4,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>1);
	$tabFields = array();
	
	
		$tabFields[] = "country_of_origin";
	
		$tabFields[] = "stamp";
	
		$tabFields[] = "serial_number";
	
		$tabFields[] = "serial_number_for_storage";
	
		$tabFields[] = "yahoo_kataban";
	
		$tabFields[] = "yahoo_sozai";
	
		$tabFields[] = "yahoo_color";
	
		$tabFields[] = "yahoo_color_id";
	
		$tabFields[] = "yahoo_size";
	
		$tabFields[] = "yahoo_condition1";
	
		$tabFields[] = "yahoo_condition2";
	
		$tabFields[] = "remark";
	
		$tabFields[] = "yahoo_fuzokuhin";
	
		$tabFields[] = "official_url";
	
		$tabFields[] = "yahoo_sankou_uwadai";
	
		$tabFields[] = "season";
	
		$tabFields[] = "yahoo_title";
	
		$tabFields[] = "raku_title";
	
		$tabFields[] = "goods_title";
	
		$tabFields[] = "search_keyword";
$arrEditTabs[] = array('tabId'=>'section21',
					   'tabName'=>"",
					   'nType'=>'1',
					   'nOrder'=>39,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>1);
$tdatasaisun[".arrEditTabs"] = $arrEditTabs;










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasaisun[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasaisun[".arrGroupsPerPage"] = $arrGPP;

$tdatasaisun[".highlightSearchResults"] = true;

$tableKeyssaisun = array();
$tableKeyssaisun[] = "product_id";
$tdatasaisun[".Keys"] = $tableKeyssaisun;

$tdatasaisun[".listFields"] = array();
$tdatasaisun[".listFields"][] = "link";
$tdatasaisun[".listFields"][] = "label_output_flag";
$tdatasaisun[".listFields"][] = "A_storage";
$tdatasaisun[".listFields"][] = "ecc_id1";
$tdatasaisun[".listFields"][] = "ecc_seq";
$tdatasaisun[".listFields"][] = "product_id";
$tdatasaisun[".listFields"][] = "chigin_id";
$tdatasaisun[".listFields"][] = "yahoo_sinaban";
$tdatasaisun[".listFields"][] = "product_num";
$tdatasaisun[".listFields"][] = "status";
$tdatasaisun[".listFields"][] = "comment";
$tdatasaisun[".listFields"][] = "title";
$tdatasaisun[".listFields"][] = "category_id";
$tdatasaisun[".listFields"][] = "sub_category_id1";
$tdatasaisun[".listFields"][] = "description";
$tdatasaisun[".listFields"][] = "yahoo_condition2";
$tdatasaisun[".listFields"][] = "yahoo_saisun_sha";
$tdatasaisun[".listFields"][] = "price";
$tdatasaisun[".listFields"][] = "cost";
$tdatasaisun[".listFields"][] = "identification_cost";
$tdatasaisun[".listFields"][] = "other_cost";
$tdatasaisun[".listFields"][] = "sales_price";
$tdatasaisun[".listFields"][] = "satei_by";
$tdatasaisun[".listFields"][] = "satei_hi";
$tdatasaisun[".listFields"][] = "kaitori_by";
$tdatasaisun[".listFields"][] = "updated_at";

$tdatasaisun[".hideMobileList"] = array();


$tdatasaisun[".viewFields"] = array();
$tdatasaisun[".viewFields"][] = "chigin_id";
$tdatasaisun[".viewFields"][] = "identification_cost";
$tdatasaisun[".viewFields"][] = "other_cost";
$tdatasaisun[".viewFields"][] = "cutting_style";
$tdatasaisun[".viewFields"][] = "official_url";
$tdatasaisun[".viewFields"][] = "serial_number_for_storage";
$tdatasaisun[".viewFields"][] = "satei_error";
$tdatasaisun[".viewFields"][] = "chain_type";
$tdatasaisun[".viewFields"][] = "shape";
$tdatasaisun[".viewFields"][] = "hahakai";
$tdatasaisun[".viewFields"][] = "producing_area";
$tdatasaisun[".viewFields"][] = "amount";
$tdatasaisun[".viewFields"][] = "designer";
$tdatasaisun[".viewFields"][] = "guarantee";
$tdatasaisun[".viewFields"][] = "zipper";
$tdatasaisun[".viewFields"][] = "ecc_seq";
$tdatasaisun[".viewFields"][] = "country_of_origin";
$tdatasaisun[".viewFields"][] = "parts";
$tdatasaisun[".viewFields"][] = "logo";
$tdatasaisun[".viewFields"][] = "serial_number";
$tdatasaisun[".viewFields"][] = "ecc_id1";
$tdatasaisun[".viewFields"][] = "cost";
$tdatasaisun[".viewFields"][] = "status";
$tdatasaisun[".viewFields"][] = "satei_by";
$tdatasaisun[".viewFields"][] = "category_id";
$tdatasaisun[".viewFields"][] = "sub_category_id1";
$tdatasaisun[".viewFields"][] = "product_id";
$tdatasaisun[".viewFields"][] = "yahoo_sinaban";
$tdatasaisun[".viewFields"][] = "price";
$tdatasaisun[".viewFields"][] = "sales_price";
$tdatasaisun[".viewFields"][] = "product_num";
$tdatasaisun[".viewFields"][] = "description";
$tdatasaisun[".viewFields"][] = "raku_hyoujisaki_category";
$tdatasaisun[".viewFields"][] = "raku_hyoujisaki_category2";
$tdatasaisun[".viewFields"][] = "raku_hyoujisaki_category3";
$tdatasaisun[".viewFields"][] = "raku_hyoujisaki_category4";
$tdatasaisun[".viewFields"][] = "raku_hyoujisaki_category5";
$tdatasaisun[".viewFields"][] = "raku_tag_result";
$tdatasaisun[".viewFields"][] = "stamp";
$tdatasaisun[".viewFields"][] = "yahoo_kataban";
$tdatasaisun[".viewFields"][] = "yahoo_sozai";
$tdatasaisun[".viewFields"][] = "yahoo_color";
$tdatasaisun[".viewFields"][] = "yahoo_size";
$tdatasaisun[".viewFields"][] = "yahoo_condition1";
$tdatasaisun[".viewFields"][] = "yahoo_condition2";
$tdatasaisun[".viewFields"][] = "yahoo_saisun_sha";
$tdatasaisun[".viewFields"][] = "remark";
$tdatasaisun[".viewFields"][] = "yahoo_fuzokuhin";
$tdatasaisun[".viewFields"][] = "yahoo_sankou_uwadai";
$tdatasaisun[".viewFields"][] = "season";
$tdatasaisun[".viewFields"][] = "yahoo_title";
$tdatasaisun[".viewFields"][] = "goods_title";
$tdatasaisun[".viewFields"][] = "raku_title";
$tdatasaisun[".viewFields"][] = "search_keyword";
$tdatasaisun[".viewFields"][] = "kaitori_by";
$tdatasaisun[".viewFields"][] = "kaitory_hi";

$tdatasaisun[".addFields"] = array();
$tdatasaisun[".addFields"][] = "cost";
$tdatasaisun[".addFields"][] = "identification_cost";
$tdatasaisun[".addFields"][] = "other_cost";
$tdatasaisun[".addFields"][] = "serial_number_for_storage";
$tdatasaisun[".addFields"][] = "official_url";
$tdatasaisun[".addFields"][] = "satei_error";
$tdatasaisun[".addFields"][] = "producing_area";
$tdatasaisun[".addFields"][] = "designer";
$tdatasaisun[".addFields"][] = "amount";
$tdatasaisun[".addFields"][] = "hahakai";
$tdatasaisun[".addFields"][] = "shape";
$tdatasaisun[".addFields"][] = "cutting_style";
$tdatasaisun[".addFields"][] = "chain_type";
$tdatasaisun[".addFields"][] = "status";
$tdatasaisun[".addFields"][] = "satei_by";
$tdatasaisun[".addFields"][] = "category_id";
$tdatasaisun[".addFields"][] = "sub_category_id1";
$tdatasaisun[".addFields"][] = "product_id";
$tdatasaisun[".addFields"][] = "yahoo_sinaban";
$tdatasaisun[".addFields"][] = "price";
$tdatasaisun[".addFields"][] = "sales_price";
$tdatasaisun[".addFields"][] = "product_num";
$tdatasaisun[".addFields"][] = "description";
$tdatasaisun[".addFields"][] = "raku_hyoujisaki_category";
$tdatasaisun[".addFields"][] = "raku_hyoujisaki_category2";
$tdatasaisun[".addFields"][] = "raku_hyoujisaki_category3";
$tdatasaisun[".addFields"][] = "raku_hyoujisaki_category4";
$tdatasaisun[".addFields"][] = "raku_hyoujisaki_category5";
$tdatasaisun[".addFields"][] = "raku_tag_result";
$tdatasaisun[".addFields"][] = "stamp";
$tdatasaisun[".addFields"][] = "yahoo_kataban";
$tdatasaisun[".addFields"][] = "yahoo_sozai";
$tdatasaisun[".addFields"][] = "yahoo_color";
$tdatasaisun[".addFields"][] = "yahoo_size";
$tdatasaisun[".addFields"][] = "yahoo_condition1";
$tdatasaisun[".addFields"][] = "yahoo_saisun_sha";
$tdatasaisun[".addFields"][] = "yahoo_condition2";
$tdatasaisun[".addFields"][] = "remark";
$tdatasaisun[".addFields"][] = "yahoo_fuzokuhin";
$tdatasaisun[".addFields"][] = "yahoo_sankou_uwadai";
$tdatasaisun[".addFields"][] = "season";
$tdatasaisun[".addFields"][] = "yahoo_title";
$tdatasaisun[".addFields"][] = "goods_title";
$tdatasaisun[".addFields"][] = "raku_title";
$tdatasaisun[".addFields"][] = "search_keyword";
$tdatasaisun[".addFields"][] = "label_output_flag";
$tdatasaisun[".addFields"][] = "kaitori_by";
$tdatasaisun[".addFields"][] = "kaitory_hi";

$tdatasaisun[".masterListFields"] = array();
$tdatasaisun[".masterListFields"][] = "link";
$tdatasaisun[".masterListFields"][] = "chigin_id";
$tdatasaisun[".masterListFields"][] = "ecc_seq";
$tdatasaisun[".masterListFields"][] = "yahoo_sex";
$tdatasaisun[".masterListFields"][] = "saisun_start";
$tdatasaisun[".masterListFields"][] = "yahoo_junle";
$tdatasaisun[".masterListFields"][] = "ecc_id1";
$tdatasaisun[".masterListFields"][] = "name1";
$tdatasaisun[".masterListFields"][] = "name2";
$tdatasaisun[".masterListFields"][] = "serial_number";
$tdatasaisun[".masterListFields"][] = "logo";
$tdatasaisun[".masterListFields"][] = "parts";
$tdatasaisun[".masterListFields"][] = "country_of_origin";
$tdatasaisun[".masterListFields"][] = "zipper";
$tdatasaisun[".masterListFields"][] = "guarantee";
$tdatasaisun[".masterListFields"][] = "errors";
$tdatasaisun[".masterListFields"][] = "designer";
$tdatasaisun[".masterListFields"][] = "amount";
$tdatasaisun[".masterListFields"][] = "producing_area";
$tdatasaisun[".masterListFields"][] = "hahakai";
$tdatasaisun[".masterListFields"][] = "shape";
$tdatasaisun[".masterListFields"][] = "cutting_style";
$tdatasaisun[".masterListFields"][] = "chain_type";
$tdatasaisun[".masterListFields"][] = "satei_error";
$tdatasaisun[".masterListFields"][] = "serial_number_for_storage";
$tdatasaisun[".masterListFields"][] = "official_url";
$tdatasaisun[".masterListFields"][] = "other_cost";
$tdatasaisun[".masterListFields"][] = "identification_cost";
$tdatasaisun[".masterListFields"][] = "cost";
$tdatasaisun[".masterListFields"][] = "status";
$tdatasaisun[".masterListFields"][] = "satei_by";
$tdatasaisun[".masterListFields"][] = "category_id";
$tdatasaisun[".masterListFields"][] = "title";
$tdatasaisun[".masterListFields"][] = "sub_category_id1";
$tdatasaisun[".masterListFields"][] = "product_id";
$tdatasaisun[".masterListFields"][] = "ecc_id";
$tdatasaisun[".masterListFields"][] = "yahoo";
$tdatasaisun[".masterListFields"][] = "yahoo_sinaban";
$tdatasaisun[".masterListFields"][] = "price";
$tdatasaisun[".masterListFields"][] = "sales_price";
$tdatasaisun[".masterListFields"][] = "product_num";
$tdatasaisun[".masterListFields"][] = "description";
$tdatasaisun[".masterListFields"][] = "updated_at";
$tdatasaisun[".masterListFields"][] = "raku_hyoujisaki_category";
$tdatasaisun[".masterListFields"][] = "raku_hyoujisaki_category2";
$tdatasaisun[".masterListFields"][] = "raku_hyoujisaki_category3";
$tdatasaisun[".masterListFields"][] = "raku_hyoujisaki_category4";
$tdatasaisun[".masterListFields"][] = "raku_hyoujisaki_category5";
$tdatasaisun[".masterListFields"][] = "raku_tag_result";
$tdatasaisun[".masterListFields"][] = "stamp";
$tdatasaisun[".masterListFields"][] = "yahoo_kataban";
$tdatasaisun[".masterListFields"][] = "yahoo_sozai";
$tdatasaisun[".masterListFields"][] = "yahoo_color";
$tdatasaisun[".masterListFields"][] = "yahoo_size";
$tdatasaisun[".masterListFields"][] = "yahoo_condition1";
$tdatasaisun[".masterListFields"][] = "yahoo_condition2";
$tdatasaisun[".masterListFields"][] = "yahoo_saisun_sha";
$tdatasaisun[".masterListFields"][] = "remark";
$tdatasaisun[".masterListFields"][] = "yahoo_fuzokuhin";
$tdatasaisun[".masterListFields"][] = "box_id";
$tdatasaisun[".masterListFields"][] = "yahoo_sankou_uwadai";
$tdatasaisun[".masterListFields"][] = "nyuukin_price";
$tdatasaisun[".masterListFields"][] = "updated_by";
$tdatasaisun[".masterListFields"][] = "season";
$tdatasaisun[".masterListFields"][] = "yahoo_title";
$tdatasaisun[".masterListFields"][] = "goods_title";
$tdatasaisun[".masterListFields"][] = "raku_title";
$tdatasaisun[".masterListFields"][] = "search_keyword";
$tdatasaisun[".masterListFields"][] = "timesta";
$tdatasaisun[".masterListFields"][] = "processing";
$tdatasaisun[".masterListFields"][] = "Sleeve_Length";
$tdatasaisun[".masterListFields"][] = "saisun_end";
$tdatasaisun[".masterListFields"][] = "length";
$tdatasaisun[".masterListFields"][] = "label_output_flag";
$tdatasaisun[".masterListFields"][] = "Ring_size";
$tdatasaisun[".masterListFields"][] = "price_for_site";
$tdatasaisun[".masterListFields"][] = "kanryou_henbi";
$tdatasaisun[".masterListFields"][] = "yahoo_category_id";
$tdatasaisun[".masterListFields"][] = "box_sort";
$tdatasaisun[".masterListFields"][] = "Qty";
$tdatasaisun[".masterListFields"][] = "sales_period";
$tdatasaisun[".masterListFields"][] = "kaitori_by";
$tdatasaisun[".masterListFields"][] = "starting_price";
$tdatasaisun[".masterListFields"][] = "comment";
$tdatasaisun[".masterListFields"][] = "satei_hi";
$tdatasaisun[".masterListFields"][] = "kaitory_hi";
$tdatasaisun[".masterListFields"][] = "REG_PHOTOGRAPHER";
$tdatasaisun[".masterListFields"][] = "REG_AUTHOR";
$tdatasaisun[".masterListFields"][] = "REG_PACKINGS";
$tdatasaisun[".masterListFields"][] = "REG_KAKOU_DATE";
$tdatasaisun[".masterListFields"][] = "REG_KAKOU";
$tdatasaisun[".masterListFields"][] = "REG_EXHIBITOR";
$tdatasaisun[".masterListFields"][] = "REG_PHOTOGRAPHER_DATE";
$tdatasaisun[".masterListFields"][] = "DT_PACKING_DATE";
$tdatasaisun[".masterListFields"][] = "DT_UP_DATE";
$tdatasaisun[".masterListFields"][] = "AWAZU_DATE";
$tdatasaisun[".masterListFields"][] = "AWAZU_NIN";
$tdatasaisun[".masterListFields"][] = "sabun_date";
$tdatasaisun[".masterListFields"][] = "browseid";
$tdatasaisun[".masterListFields"][] = "browsenode";
$tdatasaisun[".masterListFields"][] = "gold_property";
$tdatasaisun[".masterListFields"][] = "ichiba_title";
$tdatasaisun[".masterListFields"][] = "Gram";
$tdatasaisun[".masterListFields"][] = "Parent_stone";
$tdatasaisun[".masterListFields"][] = "Aside_stone";
$tdatasaisun[".masterListFields"][] = "Appraiser";
$tdatasaisun[".masterListFields"][] = "Remarks";
$tdatasaisun[".masterListFields"][] = "Destination_selling";
$tdatasaisun[".masterListFields"][] = "Finish";
$tdatasaisun[".masterListFields"][] = "Discrimination";
$tdatasaisun[".masterListFields"][] = "accessories";
$tdatasaisun[".masterListFields"][] = "priority";
$tdatasaisun[".masterListFields"][] = "A_storage";
$tdatasaisun[".masterListFields"][] = "price_per_gram";
$tdatasaisun[".masterListFields"][] = "price_per_parent_stone";
$tdatasaisun[".masterListFields"][] = "price_per_aside_stone";
$tdatasaisun[".masterListFields"][] = "price_secret";
$tdatasaisun[".masterListFields"][] = "sales_price_secret";
$tdatasaisun[".masterListFields"][] = "eq";
$tdatasaisun[".masterListFields"][] = "en";
$tdatasaisun[".masterListFields"][] = "line";
$tdatasaisun[".masterListFields"][] = "item_name";
$tdatasaisun[".masterListFields"][] = "handle";
$tdatasaisun[".masterListFields"][] = "yahoo_color_id";
$tdatasaisun[".masterListFields"][] = "raku_dir_1";
$tdatasaisun[".masterListFields"][] = "raku_dir_2";
$tdatasaisun[".masterListFields"][] = "raku_dir_3";
$tdatasaisun[".masterListFields"][] = "raku_dir_4";
$tdatasaisun[".masterListFields"][] = "raku_dir_5";
$tdatasaisun[".masterListFields"][] = "raku_dir_result";
$tdatasaisun[".masterListFields"][] = "Exhibition_Date";
$tdatasaisun[".masterListFields"][] = "motif";
$tdatasaisun[".masterListFields"][] = "Setting";

$tdatasaisun[".inlineAddFields"] = array();
$tdatasaisun[".inlineAddFields"][] = "label_output_flag";
$tdatasaisun[".inlineAddFields"][] = "product_id";
$tdatasaisun[".inlineAddFields"][] = "yahoo_sinaban";
$tdatasaisun[".inlineAddFields"][] = "status";
$tdatasaisun[".inlineAddFields"][] = "category_id";
$tdatasaisun[".inlineAddFields"][] = "sub_category_id1";
$tdatasaisun[".inlineAddFields"][] = "description";
$tdatasaisun[".inlineAddFields"][] = "yahoo_condition2";
$tdatasaisun[".inlineAddFields"][] = "yahoo_saisun_sha";
$tdatasaisun[".inlineAddFields"][] = "price";
$tdatasaisun[".inlineAddFields"][] = "cost";
$tdatasaisun[".inlineAddFields"][] = "identification_cost";
$tdatasaisun[".inlineAddFields"][] = "other_cost";
$tdatasaisun[".inlineAddFields"][] = "sales_price";
$tdatasaisun[".inlineAddFields"][] = "kaitori_by";

$tdatasaisun[".editFields"] = array();
$tdatasaisun[".editFields"][] = "cost";
$tdatasaisun[".editFields"][] = "identification_cost";
$tdatasaisun[".editFields"][] = "other_cost";
$tdatasaisun[".editFields"][] = "errors";
$tdatasaisun[".editFields"][] = "satei_error";
$tdatasaisun[".editFields"][] = "status";
$tdatasaisun[".editFields"][] = "satei_by";
$tdatasaisun[".editFields"][] = "category_id";
$tdatasaisun[".editFields"][] = "sub_category_id1";
$tdatasaisun[".editFields"][] = "product_id";
$tdatasaisun[".editFields"][] = "yahoo_sinaban";
$tdatasaisun[".editFields"][] = "price";
$tdatasaisun[".editFields"][] = "sales_price";
$tdatasaisun[".editFields"][] = "saisun_start";
$tdatasaisun[".editFields"][] = "yahoo_sex";
$tdatasaisun[".editFields"][] = "product_num";
$tdatasaisun[".editFields"][] = "description";
$tdatasaisun[".editFields"][] = "A_storage";
$tdatasaisun[".editFields"][] = "logo";
$tdatasaisun[".editFields"][] = "parts";
$tdatasaisun[".editFields"][] = "zipper";
$tdatasaisun[".editFields"][] = "guarantee";
$tdatasaisun[".editFields"][] = "raku_hyoujisaki_category";
$tdatasaisun[".editFields"][] = "raku_hyoujisaki_category2";
$tdatasaisun[".editFields"][] = "raku_hyoujisaki_category3";
$tdatasaisun[".editFields"][] = "raku_hyoujisaki_category4";
$tdatasaisun[".editFields"][] = "raku_hyoujisaki_category5";
$tdatasaisun[".editFields"][] = "raku_tag_result";
$tdatasaisun[".editFields"][] = "designer";
$tdatasaisun[".editFields"][] = "amount";
$tdatasaisun[".editFields"][] = "producing_area";
$tdatasaisun[".editFields"][] = "hahakai";
$tdatasaisun[".editFields"][] = "shape";
$tdatasaisun[".editFields"][] = "cutting_style";
$tdatasaisun[".editFields"][] = "Setting";
$tdatasaisun[".editFields"][] = "processing";
$tdatasaisun[".editFields"][] = "chain_type";
$tdatasaisun[".editFields"][] = "country_of_origin";
$tdatasaisun[".editFields"][] = "stamp";
$tdatasaisun[".editFields"][] = "serial_number";
$tdatasaisun[".editFields"][] = "serial_number_for_storage";
$tdatasaisun[".editFields"][] = "yahoo_kataban";
$tdatasaisun[".editFields"][] = "yahoo_sozai";
$tdatasaisun[".editFields"][] = "yahoo_color";
$tdatasaisun[".editFields"][] = "yahoo_color_id";
$tdatasaisun[".editFields"][] = "yahoo_size";
$tdatasaisun[".editFields"][] = "yahoo_condition1";
$tdatasaisun[".editFields"][] = "yahoo_condition2";
$tdatasaisun[".editFields"][] = "remark";
$tdatasaisun[".editFields"][] = "yahoo_fuzokuhin";
$tdatasaisun[".editFields"][] = "official_url";
$tdatasaisun[".editFields"][] = "yahoo_sankou_uwadai";
$tdatasaisun[".editFields"][] = "season";
$tdatasaisun[".editFields"][] = "yahoo_title";
$tdatasaisun[".editFields"][] = "raku_title";
$tdatasaisun[".editFields"][] = "goods_title";
$tdatasaisun[".editFields"][] = "search_keyword";

$tdatasaisun[".inlineEditFields"] = array();
$tdatasaisun[".inlineEditFields"][] = "label_output_flag";
$tdatasaisun[".inlineEditFields"][] = "A_storage";
$tdatasaisun[".inlineEditFields"][] = "product_id";
$tdatasaisun[".inlineEditFields"][] = "yahoo_sinaban";
$tdatasaisun[".inlineEditFields"][] = "status";
$tdatasaisun[".inlineEditFields"][] = "comment";
$tdatasaisun[".inlineEditFields"][] = "category_id";
$tdatasaisun[".inlineEditFields"][] = "sub_category_id1";
$tdatasaisun[".inlineEditFields"][] = "description";
$tdatasaisun[".inlineEditFields"][] = "yahoo_condition2";
$tdatasaisun[".inlineEditFields"][] = "yahoo_saisun_sha";
$tdatasaisun[".inlineEditFields"][] = "price";
$tdatasaisun[".inlineEditFields"][] = "cost";
$tdatasaisun[".inlineEditFields"][] = "identification_cost";
$tdatasaisun[".inlineEditFields"][] = "other_cost";
$tdatasaisun[".inlineEditFields"][] = "sales_price";
$tdatasaisun[".inlineEditFields"][] = "kaitori_by";

$tdatasaisun[".updateSelectedFields"] = array();
$tdatasaisun[".updateSelectedFields"][] = "status";
$tdatasaisun[".updateSelectedFields"][] = "satei_by";
$tdatasaisun[".updateSelectedFields"][] = "category_id";
$tdatasaisun[".updateSelectedFields"][] = "sub_category_id1";
$tdatasaisun[".updateSelectedFields"][] = "product_id";
$tdatasaisun[".updateSelectedFields"][] = "yahoo_sinaban";
$tdatasaisun[".updateSelectedFields"][] = "price";
$tdatasaisun[".updateSelectedFields"][] = "sales_price";
$tdatasaisun[".updateSelectedFields"][] = "product_num";
$tdatasaisun[".updateSelectedFields"][] = "description";
$tdatasaisun[".updateSelectedFields"][] = "raku_hyoujisaki_category";
$tdatasaisun[".updateSelectedFields"][] = "raku_hyoujisaki_category2";
$tdatasaisun[".updateSelectedFields"][] = "raku_hyoujisaki_category3";
$tdatasaisun[".updateSelectedFields"][] = "raku_hyoujisaki_category4";
$tdatasaisun[".updateSelectedFields"][] = "raku_hyoujisaki_category5";
$tdatasaisun[".updateSelectedFields"][] = "raku_tag_result";
$tdatasaisun[".updateSelectedFields"][] = "stamp";
$tdatasaisun[".updateSelectedFields"][] = "yahoo_kataban";
$tdatasaisun[".updateSelectedFields"][] = "yahoo_sozai";
$tdatasaisun[".updateSelectedFields"][] = "yahoo_color";
$tdatasaisun[".updateSelectedFields"][] = "yahoo_size";
$tdatasaisun[".updateSelectedFields"][] = "yahoo_condition1";
$tdatasaisun[".updateSelectedFields"][] = "yahoo_condition2";
$tdatasaisun[".updateSelectedFields"][] = "remark";
$tdatasaisun[".updateSelectedFields"][] = "yahoo_fuzokuhin";
$tdatasaisun[".updateSelectedFields"][] = "yahoo_sankou_uwadai";
$tdatasaisun[".updateSelectedFields"][] = "season";
$tdatasaisun[".updateSelectedFields"][] = "yahoo_title";
$tdatasaisun[".updateSelectedFields"][] = "raku_title";
$tdatasaisun[".updateSelectedFields"][] = "goods_title";
$tdatasaisun[".updateSelectedFields"][] = "search_keyword";


$tdatasaisun[".exportFields"] = array();
$tdatasaisun[".exportFields"][] = "chigin_id";
$tdatasaisun[".exportFields"][] = "serial_number_for_storage";
$tdatasaisun[".exportFields"][] = "official_url";
$tdatasaisun[".exportFields"][] = "satei_error";
$tdatasaisun[".exportFields"][] = "chain_type";
$tdatasaisun[".exportFields"][] = "cutting_style";
$tdatasaisun[".exportFields"][] = "shape";
$tdatasaisun[".exportFields"][] = "hahakai";
$tdatasaisun[".exportFields"][] = "producing_area";
$tdatasaisun[".exportFields"][] = "designer";
$tdatasaisun[".exportFields"][] = "amount";
$tdatasaisun[".exportFields"][] = "guarantee";
$tdatasaisun[".exportFields"][] = "serial_number";
$tdatasaisun[".exportFields"][] = "ecc_id1";
$tdatasaisun[".exportFields"][] = "logo";
$tdatasaisun[".exportFields"][] = "parts";
$tdatasaisun[".exportFields"][] = "country_of_origin";
$tdatasaisun[".exportFields"][] = "zipper";
$tdatasaisun[".exportFields"][] = "ecc_seq";
$tdatasaisun[".exportFields"][] = "status";
$tdatasaisun[".exportFields"][] = "satei_by";
$tdatasaisun[".exportFields"][] = "category_id";
$tdatasaisun[".exportFields"][] = "sub_category_id1";
$tdatasaisun[".exportFields"][] = "product_id";
$tdatasaisun[".exportFields"][] = "yahoo_sinaban";
$tdatasaisun[".exportFields"][] = "price";
$tdatasaisun[".exportFields"][] = "cost";
$tdatasaisun[".exportFields"][] = "identification_cost";
$tdatasaisun[".exportFields"][] = "other_cost";
$tdatasaisun[".exportFields"][] = "sales_price";
$tdatasaisun[".exportFields"][] = "product_num";
$tdatasaisun[".exportFields"][] = "description";
$tdatasaisun[".exportFields"][] = "raku_hyoujisaki_category";
$tdatasaisun[".exportFields"][] = "raku_hyoujisaki_category2";
$tdatasaisun[".exportFields"][] = "raku_hyoujisaki_category3";
$tdatasaisun[".exportFields"][] = "raku_hyoujisaki_category4";
$tdatasaisun[".exportFields"][] = "raku_hyoujisaki_category5";
$tdatasaisun[".exportFields"][] = "raku_tag_result";
$tdatasaisun[".exportFields"][] = "stamp";
$tdatasaisun[".exportFields"][] = "yahoo_kataban";
$tdatasaisun[".exportFields"][] = "yahoo_sozai";
$tdatasaisun[".exportFields"][] = "yahoo_color";
$tdatasaisun[".exportFields"][] = "yahoo_size";
$tdatasaisun[".exportFields"][] = "yahoo_condition1";
$tdatasaisun[".exportFields"][] = "yahoo_saisun_sha";
$tdatasaisun[".exportFields"][] = "yahoo_condition2";
$tdatasaisun[".exportFields"][] = "remark";
$tdatasaisun[".exportFields"][] = "yahoo_fuzokuhin";
$tdatasaisun[".exportFields"][] = "yahoo_sankou_uwadai";
$tdatasaisun[".exportFields"][] = "season";
$tdatasaisun[".exportFields"][] = "yahoo_title";
$tdatasaisun[".exportFields"][] = "goods_title";
$tdatasaisun[".exportFields"][] = "raku_title";
$tdatasaisun[".exportFields"][] = "search_keyword";
$tdatasaisun[".exportFields"][] = "kaitori_by";
$tdatasaisun[".exportFields"][] = "kaitory_hi";
$tdatasaisun[".exportFields"][] = "A_storage";

$tdatasaisun[".importFields"] = array();
$tdatasaisun[".importFields"][] = "product_id";
$tdatasaisun[".importFields"][] = "chigin_id";
$tdatasaisun[".importFields"][] = "category_id";
$tdatasaisun[".importFields"][] = "goods_title";
$tdatasaisun[".importFields"][] = "sub_category_id1";
$tdatasaisun[".importFields"][] = "price";
$tdatasaisun[".importFields"][] = "remark";
$tdatasaisun[".importFields"][] = "sales_price";
$tdatasaisun[".importFields"][] = "description";
$tdatasaisun[".importFields"][] = "status";
$tdatasaisun[".importFields"][] = "product_num";
$tdatasaisun[".importFields"][] = "yahoo_size";
$tdatasaisun[".importFields"][] = "yahoo_title";
$tdatasaisun[".importFields"][] = "yahoo_sankou_uwadai";
$tdatasaisun[".importFields"][] = "yahoo_sozai";
$tdatasaisun[".importFields"][] = "yahoo_color";
$tdatasaisun[".importFields"][] = "yahoo_kataban";
$tdatasaisun[".importFields"][] = "yahoo_condition1";
$tdatasaisun[".importFields"][] = "yahoo_condition2";
$tdatasaisun[".importFields"][] = "yahoo_fuzokuhin";
$tdatasaisun[".importFields"][] = "yahoo_sinaban";
$tdatasaisun[".importFields"][] = "yahoo_saisun_sha";
$tdatasaisun[".importFields"][] = "raku_title";
$tdatasaisun[".importFields"][] = "raku_hyoujisaki_category2";
$tdatasaisun[".importFields"][] = "raku_hyoujisaki_category";
$tdatasaisun[".importFields"][] = "raku_hyoujisaki_category3";
$tdatasaisun[".importFields"][] = "season";
$tdatasaisun[".importFields"][] = "satei_by";
$tdatasaisun[".importFields"][] = "kaitori_by";
$tdatasaisun[".importFields"][] = "kaitory_hi";
$tdatasaisun[".importFields"][] = "A_storage";
$tdatasaisun[".importFields"][] = "raku_hyoujisaki_category4";
$tdatasaisun[".importFields"][] = "raku_hyoujisaki_category5";
$tdatasaisun[".importFields"][] = "raku_tag_result";
$tdatasaisun[".importFields"][] = "search_keyword";
$tdatasaisun[".importFields"][] = "stamp";
$tdatasaisun[".importFields"][] = "ecc_seq";
$tdatasaisun[".importFields"][] = "serial_number";
$tdatasaisun[".importFields"][] = "logo";
$tdatasaisun[".importFields"][] = "parts";
$tdatasaisun[".importFields"][] = "country_of_origin";
$tdatasaisun[".importFields"][] = "zipper";
$tdatasaisun[".importFields"][] = "guarantee";
$tdatasaisun[".importFields"][] = "designer";
$tdatasaisun[".importFields"][] = "amount";
$tdatasaisun[".importFields"][] = "producing_area";
$tdatasaisun[".importFields"][] = "hahakai";
$tdatasaisun[".importFields"][] = "shape";
$tdatasaisun[".importFields"][] = "cutting_style";
$tdatasaisun[".importFields"][] = "chain_type";
$tdatasaisun[".importFields"][] = "satei_error";
$tdatasaisun[".importFields"][] = "serial_number_for_storage";
$tdatasaisun[".importFields"][] = "official_url";
$tdatasaisun[".importFields"][] = "other_cost";
$tdatasaisun[".importFields"][] = "identification_cost";
$tdatasaisun[".importFields"][] = "cost";

$tdatasaisun[".printFields"] = array();
$tdatasaisun[".printFields"][] = "chigin_id";
$tdatasaisun[".printFields"][] = "designer";
$tdatasaisun[".printFields"][] = "amount";
$tdatasaisun[".printFields"][] = "producing_area";
$tdatasaisun[".printFields"][] = "hahakai";
$tdatasaisun[".printFields"][] = "shape";
$tdatasaisun[".printFields"][] = "cutting_style";
$tdatasaisun[".printFields"][] = "chain_type";
$tdatasaisun[".printFields"][] = "satei_error";
$tdatasaisun[".printFields"][] = "serial_number_for_storage";
$tdatasaisun[".printFields"][] = "official_url";
$tdatasaisun[".printFields"][] = "other_cost";
$tdatasaisun[".printFields"][] = "identification_cost";
$tdatasaisun[".printFields"][] = "cost";
$tdatasaisun[".printFields"][] = "guarantee";
$tdatasaisun[".printFields"][] = "serial_number";
$tdatasaisun[".printFields"][] = "ecc_id1";
$tdatasaisun[".printFields"][] = "logo";
$tdatasaisun[".printFields"][] = "parts";
$tdatasaisun[".printFields"][] = "country_of_origin";
$tdatasaisun[".printFields"][] = "zipper";
$tdatasaisun[".printFields"][] = "ecc_seq";
$tdatasaisun[".printFields"][] = "status";
$tdatasaisun[".printFields"][] = "satei_by";
$tdatasaisun[".printFields"][] = "category_id";
$tdatasaisun[".printFields"][] = "sub_category_id1";
$tdatasaisun[".printFields"][] = "product_id";
$tdatasaisun[".printFields"][] = "yahoo_sinaban";
$tdatasaisun[".printFields"][] = "price";
$tdatasaisun[".printFields"][] = "sales_price";
$tdatasaisun[".printFields"][] = "product_num";
$tdatasaisun[".printFields"][] = "description";
$tdatasaisun[".printFields"][] = "raku_hyoujisaki_category";
$tdatasaisun[".printFields"][] = "raku_hyoujisaki_category2";
$tdatasaisun[".printFields"][] = "raku_hyoujisaki_category3";
$tdatasaisun[".printFields"][] = "raku_hyoujisaki_category4";
$tdatasaisun[".printFields"][] = "raku_hyoujisaki_category5";
$tdatasaisun[".printFields"][] = "raku_tag_result";
$tdatasaisun[".printFields"][] = "stamp";
$tdatasaisun[".printFields"][] = "yahoo_kataban";
$tdatasaisun[".printFields"][] = "yahoo_sozai";
$tdatasaisun[".printFields"][] = "yahoo_color";
$tdatasaisun[".printFields"][] = "yahoo_size";
$tdatasaisun[".printFields"][] = "yahoo_condition1";
$tdatasaisun[".printFields"][] = "yahoo_saisun_sha";
$tdatasaisun[".printFields"][] = "yahoo_condition2";
$tdatasaisun[".printFields"][] = "remark";
$tdatasaisun[".printFields"][] = "yahoo_fuzokuhin";
$tdatasaisun[".printFields"][] = "yahoo_sankou_uwadai";
$tdatasaisun[".printFields"][] = "season";
$tdatasaisun[".printFields"][] = "yahoo_title";
$tdatasaisun[".printFields"][] = "goods_title";
$tdatasaisun[".printFields"][] = "raku_title";
$tdatasaisun[".printFields"][] = "search_keyword";
$tdatasaisun[".printFields"][] = "kaitori_by";
$tdatasaisun[".printFields"][] = "kaitory_hi";

//	link
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "link";
	$fdata["GoodName"] = "link";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","link");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "product_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`product_id`";

	
	
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








	$tdatasaisun["link"] = $fdata;
//	product_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "product_id";
	$fdata["GoodName"] = "product_id";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","product_id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
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




	$tdatasaisun["product_id"] = $fdata;
//	chigin_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "chigin_id";
	$fdata["GoodName"] = "chigin_id";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","chigin_id");
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




	$tdatasaisun["chigin_id"] = $fdata;
//	category_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "category_id";
	$fdata["GoodName"] = "category_id";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","category_id");
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
	$edata["DependentLookups"][] = "country_of_origin";
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




	$tdatasaisun["category_id"] = $fdata;
//	goods_title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "goods_title";
	$fdata["GoodName"] = "goods_title";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","goods_title");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

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




	$tdatasaisun["goods_title"] = $fdata;
//	title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "title";
	$fdata["GoodName"] = "title";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","title");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdatasaisun["title"] = $fdata;
//	sub_category_id1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "sub_category_id1";
	$fdata["GoodName"] = "sub_category_id1";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","sub_category_id1");
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




	$tdatasaisun["sub_category_id1"] = $fdata;
//	ecc_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "ecc_id";
	$fdata["GoodName"] = "ecc_id";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","ecc_id");
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








	$tdatasaisun["ecc_id"] = $fdata;
//	price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "price";
	$fdata["GoodName"] = "price";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","price");
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




	$tdatasaisun["price"] = $fdata;
//	yahoo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "yahoo";
	$fdata["GoodName"] = "yahoo";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","yahoo");
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








	$tdatasaisun["yahoo"] = $fdata;
//	remark
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "remark";
	$fdata["GoodName"] = "remark";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","remark");
	$fdata["FieldType"] = 201;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

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




	$tdatasaisun["remark"] = $fdata;
//	sales_price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "sales_price";
	$fdata["GoodName"] = "sales_price";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","sales_price");
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




	$tdatasaisun["sales_price"] = $fdata;
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","description");
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




	$tdatasaisun["description"] = $fdata;
//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","status");
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




	$tdatasaisun["status"] = $fdata;
//	product_num
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "product_num";
	$fdata["GoodName"] = "product_num";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","product_num");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
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

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
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

	
	
	
	
				//dependent dropdowns
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "country_of_origin";
				//dependent dropdowns
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "zipper";

	
	
	
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




	$tdatasaisun["product_num"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","updated_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
	
	
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








	$tdatasaisun["updated_at"] = $fdata;
//	yahoo_size
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "yahoo_size";
	$fdata["GoodName"] = "yahoo_size";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","yahoo_size");
	$fdata["FieldType"] = 201;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

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




	$tdatasaisun["yahoo_size"] = $fdata;
//	yahoo_title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "yahoo_title";
	$fdata["GoodName"] = "yahoo_title";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","yahoo_title");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

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

	
	
		$edata["controlWidth"] = 50;

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




	$tdatasaisun["yahoo_title"] = $fdata;
//	yahoo_sankou_uwadai
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "yahoo_sankou_uwadai";
	$fdata["GoodName"] = "yahoo_sankou_uwadai";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","yahoo_sankou_uwadai");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
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




	$tdatasaisun["yahoo_sankou_uwadai"] = $fdata;
//	yahoo_sozai
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "yahoo_sozai";
	$fdata["GoodName"] = "yahoo_sozai";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","yahoo_sozai");
	$fdata["FieldType"] = 201;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
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




	$tdatasaisun["yahoo_sozai"] = $fdata;
//	yahoo_color
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "yahoo_color";
	$fdata["GoodName"] = "yahoo_color";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","yahoo_color");
	$fdata["FieldType"] = 201;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
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




	$tdatasaisun["yahoo_color"] = $fdata;
//	yahoo_kataban
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "yahoo_kataban";
	$fdata["GoodName"] = "yahoo_kataban";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","yahoo_kataban");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
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




	$tdatasaisun["yahoo_kataban"] = $fdata;
//	yahoo_condition1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "yahoo_condition1";
	$fdata["GoodName"] = "yahoo_condition1";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","yahoo_condition1");
	$fdata["FieldType"] = 201;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

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




	$tdatasaisun["yahoo_condition1"] = $fdata;
//	yahoo_condition2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "yahoo_condition2";
	$fdata["GoodName"] = "yahoo_condition2";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","yahoo_condition2");
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




	$tdatasaisun["yahoo_condition2"] = $fdata;
//	yahoo_fuzokuhin
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "yahoo_fuzokuhin";
	$fdata["GoodName"] = "yahoo_fuzokuhin";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","yahoo_fuzokuhin");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

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




	$tdatasaisun["yahoo_fuzokuhin"] = $fdata;
//	yahoo_sinaban
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "yahoo_sinaban";
	$fdata["GoodName"] = "yahoo_sinaban";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","yahoo_sinaban");
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




	$tdatasaisun["yahoo_sinaban"] = $fdata;
//	yahoo_saisun_sha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "yahoo_saisun_sha";
	$fdata["GoodName"] = "yahoo_saisun_sha";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","yahoo_saisun_sha");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "yahoo_saisun_sha";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`yahoo_saisun_sha`";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdatasaisun["yahoo_saisun_sha"] = $fdata;
//	box_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "box_id";
	$fdata["GoodName"] = "box_id";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","box_id");
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








	$tdatasaisun["box_id"] = $fdata;
//	nyuukin_price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "nyuukin_price";
	$fdata["GoodName"] = "nyuukin_price";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","nyuukin_price");
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








	$tdatasaisun["nyuukin_price"] = $fdata;
//	updated_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "updated_by";
	$fdata["GoodName"] = "updated_by";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","updated_by");
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








	$tdatasaisun["updated_by"] = $fdata;
//	raku_title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "raku_title";
	$fdata["GoodName"] = "raku_title";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","raku_title");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

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




	$tdatasaisun["raku_title"] = $fdata;
//	raku_hyoujisaki_category2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "raku_hyoujisaki_category2";
	$fdata["GoodName"] = "raku_hyoujisaki_category2";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","raku_hyoujisaki_category2");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

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




	$tdatasaisun["raku_hyoujisaki_category2"] = $fdata;
//	raku_hyoujisaki_category
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "raku_hyoujisaki_category";
	$fdata["GoodName"] = "raku_hyoujisaki_category";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","raku_hyoujisaki_category");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

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




	$tdatasaisun["raku_hyoujisaki_category"] = $fdata;
//	raku_hyoujisaki_category3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "raku_hyoujisaki_category3";
	$fdata["GoodName"] = "raku_hyoujisaki_category3";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","raku_hyoujisaki_category3");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

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




	$tdatasaisun["raku_hyoujisaki_category3"] = $fdata;
//	timesta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "timesta";
	$fdata["GoodName"] = "timesta";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","timesta");
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








	$tdatasaisun["timesta"] = $fdata;
//	saisun_end
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "saisun_end";
	$fdata["GoodName"] = "saisun_end";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","saisun_end");
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








	$tdatasaisun["saisun_end"] = $fdata;
//	label_output_flag
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "label_output_flag";
	$fdata["GoodName"] = "label_output_flag";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","label_output_flag");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdatasaisun["label_output_flag"] = $fdata;
//	season
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "season";
	$fdata["GoodName"] = "season";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","season");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

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




	$tdatasaisun["season"] = $fdata;
//	kanryou_henbi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "kanryou_henbi";
	$fdata["GoodName"] = "kanryou_henbi";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","kanryou_henbi");
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








	$tdatasaisun["kanryou_henbi"] = $fdata;
//	box_sort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "box_sort";
	$fdata["GoodName"] = "box_sort";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","box_sort");
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








	$tdatasaisun["box_sort"] = $fdata;
//	satei_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "satei_by";
	$fdata["GoodName"] = "satei_by";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","satei_by");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
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




	$tdatasaisun["satei_by"] = $fdata;
//	kaitori_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "kaitori_by";
	$fdata["GoodName"] = "kaitori_by";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","kaitori_by");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "kaitori_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`kaitori_by`";

	
	
				$fdata["FieldPermissions"] = true;

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
	$edata["LinkFieldType"] = 0;
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




	$tdatasaisun["kaitori_by"] = $fdata;
//	comment
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "comment";
	$fdata["GoodName"] = "comment";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","comment");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
	
	
	
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








	$tdatasaisun["comment"] = $fdata;
//	satei_hi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "satei_hi";
	$fdata["GoodName"] = "satei_hi";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","satei_hi");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
	
	
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








	$tdatasaisun["satei_hi"] = $fdata;
//	kaitory_hi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "kaitory_hi";
	$fdata["GoodName"] = "kaitory_hi";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","kaitory_hi");
	$fdata["FieldType"] = 135;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "kaitory_hi";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`kaitory_hi`";

	
	
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




	$tdatasaisun["kaitory_hi"] = $fdata;
//	REG_PHOTOGRAPHER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "REG_PHOTOGRAPHER";
	$fdata["GoodName"] = "REG_PHOTOGRAPHER";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","REG_PHOTOGRAPHER");
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








	$tdatasaisun["REG_PHOTOGRAPHER"] = $fdata;
//	REG_AUTHOR
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 47;
	$fdata["strName"] = "REG_AUTHOR";
	$fdata["GoodName"] = "REG_AUTHOR";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","REG_AUTHOR");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "REG_AUTHOR";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`REG_AUTHOR`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatasaisun["REG_AUTHOR"] = $fdata;
//	REG_PACKINGS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 48;
	$fdata["strName"] = "REG_PACKINGS";
	$fdata["GoodName"] = "REG_PACKINGS";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","REG_PACKINGS");
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








	$tdatasaisun["REG_PACKINGS"] = $fdata;
//	REG_KAKOU_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 49;
	$fdata["strName"] = "REG_KAKOU_DATE";
	$fdata["GoodName"] = "REG_KAKOU_DATE";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","REG_KAKOU_DATE");
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








	$tdatasaisun["REG_KAKOU_DATE"] = $fdata;
//	REG_KAKOU
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 50;
	$fdata["strName"] = "REG_KAKOU";
	$fdata["GoodName"] = "REG_KAKOU";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","REG_KAKOU");
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








	$tdatasaisun["REG_KAKOU"] = $fdata;
//	REG_EXHIBITOR
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 51;
	$fdata["strName"] = "REG_EXHIBITOR";
	$fdata["GoodName"] = "REG_EXHIBITOR";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","REG_EXHIBITOR");
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








	$tdatasaisun["REG_EXHIBITOR"] = $fdata;
//	REG_PHOTOGRAPHER_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 52;
	$fdata["strName"] = "REG_PHOTOGRAPHER_DATE";
	$fdata["GoodName"] = "REG_PHOTOGRAPHER_DATE";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","REG_PHOTOGRAPHER_DATE");
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








	$tdatasaisun["REG_PHOTOGRAPHER_DATE"] = $fdata;
//	DT_PACKING_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 53;
	$fdata["strName"] = "DT_PACKING_DATE";
	$fdata["GoodName"] = "DT_PACKING_DATE";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","DT_PACKING_DATE");
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








	$tdatasaisun["DT_PACKING_DATE"] = $fdata;
//	DT_UP_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 54;
	$fdata["strName"] = "DT_UP_DATE";
	$fdata["GoodName"] = "DT_UP_DATE";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","DT_UP_DATE");
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








	$tdatasaisun["DT_UP_DATE"] = $fdata;
//	AWAZU_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 55;
	$fdata["strName"] = "AWAZU_DATE";
	$fdata["GoodName"] = "AWAZU_DATE";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","AWAZU_DATE");
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








	$tdatasaisun["AWAZU_DATE"] = $fdata;
//	AWAZU_NIN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 56;
	$fdata["strName"] = "AWAZU_NIN";
	$fdata["GoodName"] = "AWAZU_NIN";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","AWAZU_NIN");
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








	$tdatasaisun["AWAZU_NIN"] = $fdata;
//	sabun_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 57;
	$fdata["strName"] = "sabun_date";
	$fdata["GoodName"] = "sabun_date";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","sabun_date");
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








	$tdatasaisun["sabun_date"] = $fdata;
//	browseid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 58;
	$fdata["strName"] = "browseid";
	$fdata["GoodName"] = "browseid";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","browseid");
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








	$tdatasaisun["browseid"] = $fdata;
//	browsenode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 59;
	$fdata["strName"] = "browsenode";
	$fdata["GoodName"] = "browsenode";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","browsenode");
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








	$tdatasaisun["browsenode"] = $fdata;
//	gold_property
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 60;
	$fdata["strName"] = "gold_property";
	$fdata["GoodName"] = "gold_property";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","gold_property");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "gold_property";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`gold_property`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatasaisun["gold_property"] = $fdata;
//	ichiba_title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 61;
	$fdata["strName"] = "ichiba_title";
	$fdata["GoodName"] = "ichiba_title";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","ichiba_title");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "ichiba_title";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`ichiba_title`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatasaisun["ichiba_title"] = $fdata;
//	Gram
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 62;
	$fdata["strName"] = "Gram";
	$fdata["GoodName"] = "Gram";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","Gram");
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








	$tdatasaisun["Gram"] = $fdata;
//	Parent_stone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 63;
	$fdata["strName"] = "Parent_stone";
	$fdata["GoodName"] = "Parent_stone";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","Parent_stone");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "Parent_stone";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`Parent_stone`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatasaisun["Parent_stone"] = $fdata;
//	Aside_stone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 64;
	$fdata["strName"] = "Aside_stone";
	$fdata["GoodName"] = "Aside_stone";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","Aside_stone");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "Aside_stone";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`Aside_stone`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatasaisun["Aside_stone"] = $fdata;
//	Appraiser
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 65;
	$fdata["strName"] = "Appraiser";
	$fdata["GoodName"] = "Appraiser";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","Appraiser");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "Appraiser";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`Appraiser`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatasaisun["Appraiser"] = $fdata;
//	Remarks
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 66;
	$fdata["strName"] = "Remarks";
	$fdata["GoodName"] = "Remarks";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","Remarks");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "Remarks";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`Remarks`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatasaisun["Remarks"] = $fdata;
//	Destination_selling
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 67;
	$fdata["strName"] = "Destination_selling";
	$fdata["GoodName"] = "Destination_selling";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","Destination_selling");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "Destination_selling";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`Destination_selling`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatasaisun["Destination_selling"] = $fdata;
//	Finish
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 68;
	$fdata["strName"] = "Finish";
	$fdata["GoodName"] = "Finish";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","Finish");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "Finish";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`Finish`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatasaisun["Finish"] = $fdata;
//	Discrimination
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 69;
	$fdata["strName"] = "Discrimination";
	$fdata["GoodName"] = "Discrimination";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","Discrimination");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "Discrimination";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`Discrimination`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatasaisun["Discrimination"] = $fdata;
//	accessories
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 70;
	$fdata["strName"] = "accessories";
	$fdata["GoodName"] = "accessories";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","accessories");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "accessories";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`accessories`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatasaisun["accessories"] = $fdata;
//	priority
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 71;
	$fdata["strName"] = "priority";
	$fdata["GoodName"] = "priority";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","priority");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "priority";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`priority`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=4";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatasaisun["priority"] = $fdata;
//	A_storage
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 72;
	$fdata["strName"] = "A_storage";
	$fdata["GoodName"] = "A_storage";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","A_storage");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

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




	$tdatasaisun["A_storage"] = $fdata;
//	price_per_gram
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 73;
	$fdata["strName"] = "price_per_gram";
	$fdata["GoodName"] = "price_per_gram";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","price_per_gram");
	$fdata["FieldType"] = 14;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "price_per_gram";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`price_per_gram`";

	
	
			
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








	$tdatasaisun["price_per_gram"] = $fdata;
//	price_per_parent_stone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 74;
	$fdata["strName"] = "price_per_parent_stone";
	$fdata["GoodName"] = "price_per_parent_stone";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","price_per_parent_stone");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "price_per_parent_stone";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`price_per_parent_stone`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatasaisun["price_per_parent_stone"] = $fdata;
//	price_per_aside_stone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 75;
	$fdata["strName"] = "price_per_aside_stone";
	$fdata["GoodName"] = "price_per_aside_stone";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","price_per_aside_stone");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "price_per_aside_stone";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`price_per_aside_stone`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatasaisun["price_per_aside_stone"] = $fdata;
//	price_secret
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 76;
	$fdata["strName"] = "price_secret";
	$fdata["GoodName"] = "price_secret";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","price_secret");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "price_secret";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`price_secret`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatasaisun["price_secret"] = $fdata;
//	sales_price_secret
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 77;
	$fdata["strName"] = "sales_price_secret";
	$fdata["GoodName"] = "sales_price_secret";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","sales_price_secret");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "sales_price_secret";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`sales_price_secret`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatasaisun["sales_price_secret"] = $fdata;
//	eq
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 78;
	$fdata["strName"] = "eq";
	$fdata["GoodName"] = "eq";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","eq");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "eq";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`eq`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatasaisun["eq"] = $fdata;
//	en
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 79;
	$fdata["strName"] = "en";
	$fdata["GoodName"] = "en";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","en");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "en";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`en`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatasaisun["en"] = $fdata;
//	line
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 80;
	$fdata["strName"] = "line";
	$fdata["GoodName"] = "line";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","line");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "line";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`line`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatasaisun["line"] = $fdata;
//	item_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 81;
	$fdata["strName"] = "item_name";
	$fdata["GoodName"] = "item_name";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","item_name");
	$fdata["FieldType"] = 201;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "item_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`item_name`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatasaisun["item_name"] = $fdata;
//	handle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 82;
	$fdata["strName"] = "handle";
	$fdata["GoodName"] = "handle";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","handle");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "handle";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`handle`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatasaisun["handle"] = $fdata;
//	yahoo_color_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 83;
	$fdata["strName"] = "yahoo_color_id";
	$fdata["GoodName"] = "yahoo_color_id";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","yahoo_color_id");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
		$fdata["bEditPage"] = true;

	
	

	
	
	
	
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
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "concat(english_name,' ',data)";

		$edata["CustomDisplay"] = "true";

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








	$tdatasaisun["yahoo_color_id"] = $fdata;
//	raku_hyoujisaki_category4
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 84;
	$fdata["strName"] = "raku_hyoujisaki_category4";
	$fdata["GoodName"] = "raku_hyoujisaki_category4";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","raku_hyoujisaki_category4");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

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




	$tdatasaisun["raku_hyoujisaki_category4"] = $fdata;
//	raku_hyoujisaki_category5
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 85;
	$fdata["strName"] = "raku_hyoujisaki_category5";
	$fdata["GoodName"] = "raku_hyoujisaki_category5";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","raku_hyoujisaki_category5");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

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




	$tdatasaisun["raku_hyoujisaki_category5"] = $fdata;
//	raku_dir_1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 86;
	$fdata["strName"] = "raku_dir_1";
	$fdata["GoodName"] = "raku_dir_1";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","raku_dir_1");
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








	$tdatasaisun["raku_dir_1"] = $fdata;
//	raku_dir_2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 87;
	$fdata["strName"] = "raku_dir_2";
	$fdata["GoodName"] = "raku_dir_2";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","raku_dir_2");
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








	$tdatasaisun["raku_dir_2"] = $fdata;
//	raku_dir_3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 88;
	$fdata["strName"] = "raku_dir_3";
	$fdata["GoodName"] = "raku_dir_3";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","raku_dir_3");
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








	$tdatasaisun["raku_dir_3"] = $fdata;
//	raku_dir_4
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 89;
	$fdata["strName"] = "raku_dir_4";
	$fdata["GoodName"] = "raku_dir_4";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","raku_dir_4");
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








	$tdatasaisun["raku_dir_4"] = $fdata;
//	raku_dir_5
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 90;
	$fdata["strName"] = "raku_dir_5";
	$fdata["GoodName"] = "raku_dir_5";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","raku_dir_5");
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








	$tdatasaisun["raku_dir_5"] = $fdata;
//	raku_dir_result
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 91;
	$fdata["strName"] = "raku_dir_result";
	$fdata["GoodName"] = "raku_dir_result";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","raku_dir_result");
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








	$tdatasaisun["raku_dir_result"] = $fdata;
//	raku_tag_result
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 92;
	$fdata["strName"] = "raku_tag_result";
	$fdata["GoodName"] = "raku_tag_result";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","raku_tag_result");
	$fdata["FieldType"] = 201;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

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




	$tdatasaisun["raku_tag_result"] = $fdata;
//	Exhibition_Date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 93;
	$fdata["strName"] = "Exhibition_Date";
	$fdata["GoodName"] = "Exhibition_Date";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","Exhibition_Date");
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








	$tdatasaisun["Exhibition_Date"] = $fdata;
//	search_keyword
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 94;
	$fdata["strName"] = "search_keyword";
	$fdata["GoodName"] = "search_keyword";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","search_keyword");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

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




	$tdatasaisun["search_keyword"] = $fdata;
//	stamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 95;
	$fdata["strName"] = "stamp";
	$fdata["GoodName"] = "stamp";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","stamp");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
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




	$tdatasaisun["stamp"] = $fdata;
//	motif
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 96;
	$fdata["strName"] = "motif";
	$fdata["GoodName"] = "motif";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","motif");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "motif";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`motif`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatasaisun["motif"] = $fdata;
//	Setting
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 97;
	$fdata["strName"] = "Setting";
	$fdata["GoodName"] = "Setting";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","Setting");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
		$fdata["bEditPage"] = true;

	
	

	
	
	
	
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








	$tdatasaisun["Setting"] = $fdata;
//	processing
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 98;
	$fdata["strName"] = "processing";
	$fdata["GoodName"] = "processing";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","processing");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
		$fdata["bEditPage"] = true;

	
	

	
	
	
	
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








	$tdatasaisun["processing"] = $fdata;
//	Sleeve_Length
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 99;
	$fdata["strName"] = "Sleeve_Length";
	$fdata["GoodName"] = "Sleeve_Length";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","Sleeve_Length");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "Sleeve_Length";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`Sleeve_Length`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatasaisun["Sleeve_Length"] = $fdata;
//	length
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 100;
	$fdata["strName"] = "length";
	$fdata["GoodName"] = "length";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","length");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "length";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`length`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatasaisun["length"] = $fdata;
//	Ring_size
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 101;
	$fdata["strName"] = "Ring_size";
	$fdata["GoodName"] = "Ring_size";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","Ring_size");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "Ring_size";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`Ring_size`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatasaisun["Ring_size"] = $fdata;
//	price_for_site
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 102;
	$fdata["strName"] = "price_for_site";
	$fdata["GoodName"] = "price_for_site";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","price_for_site");
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








	$tdatasaisun["price_for_site"] = $fdata;
//	yahoo_category_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 103;
	$fdata["strName"] = "yahoo_category_id";
	$fdata["GoodName"] = "yahoo_category_id";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","yahoo_category_id");
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








	$tdatasaisun["yahoo_category_id"] = $fdata;
//	Qty
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 104;
	$fdata["strName"] = "Qty";
	$fdata["GoodName"] = "Qty";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","Qty");
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








	$tdatasaisun["Qty"] = $fdata;
//	sales_period
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 105;
	$fdata["strName"] = "sales_period";
	$fdata["GoodName"] = "sales_period";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","sales_period");
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








	$tdatasaisun["sales_period"] = $fdata;
//	starting_price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 106;
	$fdata["strName"] = "starting_price";
	$fdata["GoodName"] = "starting_price";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","starting_price");
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








	$tdatasaisun["starting_price"] = $fdata;
//	ecc_seq
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 107;
	$fdata["strName"] = "ecc_seq";
	$fdata["GoodName"] = "ecc_seq";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("saisun","ecc_seq");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

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




	$tdatasaisun["ecc_seq"] = $fdata;
//	yahoo_sex
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 108;
	$fdata["strName"] = "yahoo_sex";
	$fdata["GoodName"] = "yahoo_sex";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","yahoo_sex");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
		$fdata["bEditPage"] = true;

	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdatasaisun["yahoo_sex"] = $fdata;
//	saisun_start
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 109;
	$fdata["strName"] = "saisun_start";
	$fdata["GoodName"] = "saisun_start";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","saisun_start");
	$fdata["FieldType"] = 135;

	
	
	
			
	
	
	
		$fdata["bEditPage"] = true;

	
	

	
	
	
	
		$fdata["strField"] = "saisun_start";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`saisun_start`";

	
	
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








	$tdatasaisun["saisun_start"] = $fdata;
//	yahoo_junle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 110;
	$fdata["strName"] = "yahoo_junle";
	$fdata["GoodName"] = "yahoo_junle";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","yahoo_junle");
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








	$tdatasaisun["yahoo_junle"] = $fdata;
//	ecc_id1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 111;
	$fdata["strName"] = "ecc_id1";
	$fdata["GoodName"] = "ecc_id1";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("saisun","ecc_id1");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ecc_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc`.`ecc_id`";

	
	
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




	$tdatasaisun["ecc_id1"] = $fdata;
//	name1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 112;
	$fdata["strName"] = "name1";
	$fdata["GoodName"] = "name1";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("saisun","name1");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdatasaisun["name1"] = $fdata;
//	name2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 113;
	$fdata["strName"] = "name2";
	$fdata["GoodName"] = "name2";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("saisun","name2");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdatasaisun["name2"] = $fdata;
//	serial_number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 114;
	$fdata["strName"] = "serial_number";
	$fdata["GoodName"] = "serial_number";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","serial_number");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
		$fdata["bEditPage"] = true;

	
	

		$fdata["bViewPage"] = true;

	
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

	$edata = array("EditFormat" => "Text area");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 50;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 50;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatasaisun["serial_number"] = $fdata;
//	logo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 115;
	$fdata["strName"] = "logo";
	$fdata["GoodName"] = "logo";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","logo");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
		$fdata["bEditPage"] = true;

	
	

		$fdata["bViewPage"] = true;

	
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

		$edata["HorizontalLookup"] = true;

	
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








	$tdatasaisun["logo"] = $fdata;
//	parts
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 116;
	$fdata["strName"] = "parts";
	$fdata["GoodName"] = "parts";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","parts");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
		$fdata["bEditPage"] = true;

	
	

		$fdata["bViewPage"] = true;

	
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

		$edata["HorizontalLookup"] = true;

	
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








	$tdatasaisun["parts"] = $fdata;
//	country_of_origin
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 117;
	$fdata["strName"] = "country_of_origin";
	$fdata["GoodName"] = "country_of_origin";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","country_of_origin");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
		$fdata["bEditPage"] = true;

	
	

		$fdata["bViewPage"] = true;

	
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
	$edata["DisplayField"] = "name";

	
	$edata["LookupOrderBy"] = "sort";

	
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








	$tdatasaisun["country_of_origin"] = $fdata;
//	zipper
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 118;
	$fdata["strName"] = "zipper";
	$fdata["GoodName"] = "zipper";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","zipper");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
		$fdata["bEditPage"] = true;

	
	

		$fdata["bViewPage"] = true;

	
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

		$edata["HorizontalLookup"] = true;

		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "name";

	
	$edata["LookupOrderBy"] = "sort";

	
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








	$tdatasaisun["zipper"] = $fdata;
//	guarantee
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 119;
	$fdata["strName"] = "guarantee";
	$fdata["GoodName"] = "guarantee";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","guarantee");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
		$fdata["bEditPage"] = true;

	
	

		$fdata["bViewPage"] = true;

	
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

		$edata["HorizontalLookup"] = true;

	
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








	$tdatasaisun["guarantee"] = $fdata;
//	errors
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 120;
	$fdata["strName"] = "errors";
	$fdata["GoodName"] = "errors";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","errors");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
		$fdata["bEditPage"] = true;

	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
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

	$edata = array("EditFormat" => "Text area");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 30;
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




	$tdatasaisun["errors"] = $fdata;
//	designer
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 121;
	$fdata["strName"] = "designer";
	$fdata["GoodName"] = "designer";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","designer");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
	

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




	$tdatasaisun["designer"] = $fdata;
//	amount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 122;
	$fdata["strName"] = "amount";
	$fdata["GoodName"] = "amount";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","amount");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
	

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




	$tdatasaisun["amount"] = $fdata;
//	producing_area
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 123;
	$fdata["strName"] = "producing_area";
	$fdata["GoodName"] = "producing_area";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","producing_area");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
	

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
	$edata["DisplayField"] = "name";

	
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




	$tdatasaisun["producing_area"] = $fdata;
//	hahakai
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 124;
	$fdata["strName"] = "hahakai";
	$fdata["GoodName"] = "hahakai";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","hahakai");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
	

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
	$edata["DisplayField"] = "name";

	
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




	$tdatasaisun["hahakai"] = $fdata;
//	shape
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 125;
	$fdata["strName"] = "shape";
	$fdata["GoodName"] = "shape";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","shape");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
	

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




	$tdatasaisun["shape"] = $fdata;
//	cutting_style
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 126;
	$fdata["strName"] = "cutting_style";
	$fdata["GoodName"] = "cutting_style";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","cutting_style");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
	

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




	$tdatasaisun["cutting_style"] = $fdata;
//	chain_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 127;
	$fdata["strName"] = "chain_type";
	$fdata["GoodName"] = "chain_type";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","chain_type");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
	

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




	$tdatasaisun["chain_type"] = $fdata;
//	satei_error
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 128;
	$fdata["strName"] = "satei_error";
	$fdata["GoodName"] = "satei_error";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","satei_error");
	$fdata["FieldType"] = 201;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
	

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




	$tdatasaisun["satei_error"] = $fdata;
//	serial_number_for_storage
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 129;
	$fdata["strName"] = "serial_number_for_storage";
	$fdata["GoodName"] = "serial_number_for_storage";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","serial_number_for_storage");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "serial_number_for_storage";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`serial_number_for_storage`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatasaisun["serial_number_for_storage"] = $fdata;
//	official_url
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 130;
	$fdata["strName"] = "official_url";
	$fdata["GoodName"] = "official_url";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","official_url");
	$fdata["FieldType"] = 201;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "official_url";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`official_url`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatasaisun["official_url"] = $fdata;
//	other_cost
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 131;
	$fdata["strName"] = "other_cost";
	$fdata["GoodName"] = "other_cost";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","other_cost");
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




	$tdatasaisun["other_cost"] = $fdata;
//	identification_cost
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 132;
	$fdata["strName"] = "identification_cost";
	$fdata["GoodName"] = "identification_cost";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","identification_cost");
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




	$tdatasaisun["identification_cost"] = $fdata;
//	cost
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 133;
	$fdata["strName"] = "cost";
	$fdata["GoodName"] = "cost";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisun","cost");
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

		$fdata["strField"] = "cost";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`cost`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatasaisun["cost"] = $fdata;


$tables_data["saisun"]=&$tdatasaisun;
$field_labels["saisun"] = &$fieldLabelssaisun;
$fieldToolTips["saisun"] = &$fieldToolTipssaisun;
$placeHolders["saisun"] = &$placeHolderssaisun;
$page_titles["saisun"] = &$pageTitlessaisun;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["saisun"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["saisun"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_saisun()
{
$proto0=array();
$proto0["m_strHead"] = " SELECT";
$proto0["m_strFieldList"] = "`shouhin`.`product_id` AS `link`,  `shouhin`.`product_id`,  `shouhin`.`product_id` AS `chigin_id`,  `shouhin`.`category_id`,  `shouhin`.`goods_title`,  `shouhin`.`title`,  `shouhin`.`sub_category_id1`,  `shouhin`.`ecc_id`,  `shouhin`.`price`,  `shouhin`.`yahoo`,  `shouhin`.`remark`,  `shouhin`.`sales_price`,  `shouhin`.`description`,  `shouhin`.`status`,  `shouhin`.`product_num`,  `shouhin`.`updated_at`,  `shouhin`.`yahoo_size`,  `shouhin`.`yahoo_title`,  `shouhin`.`yahoo_sankou_uwadai`,  `shouhin`.`yahoo_sozai`,  `shouhin`.`yahoo_color`,  `shouhin`.`yahoo_kataban`,  `shouhin`.`yahoo_condition1`,  `shouhin`.`yahoo_condition2`,  `shouhin`.`yahoo_fuzokuhin`,  `shouhin`.`yahoo_sinaban`,  `shouhin`.`yahoo_saisun_sha`,  `shouhin`.`box_id`,  `shouhin`.`nyuukin_price`,  `shouhin`.`updated_by`,  `shouhin`.`raku_title`,  `shouhin`.`raku_hyoujisaki_category2`,  `shouhin`.`raku_hyoujisaki_category`,  `shouhin`.`raku_hyoujisaki_category3`,  `shouhin`.`timesta`,  `shouhin`.`saisun_end`,  `shouhin`.`label_output_flag`,  `shouhin`.`season`,  `shouhin`.`kanryou_henbi`,  `shouhin`.`box_sort`,  `shouhin`.`satei_by`,  `shouhin`.`kaitori_by`,  `shouhin`.`comment`,  `shouhin`.`satei_hi`,  `shouhin`.`kaitory_hi`,  `shouhin`.`REG_PHOTOGRAPHER`,  `shouhin`.`REG_AUTHOR`,  `shouhin`.`REG_PACKINGS`,  `shouhin`.`REG_KAKOU_DATE`,  `shouhin`.`REG_KAKOU`,  `shouhin`.`REG_EXHIBITOR`,  `shouhin`.`REG_PHOTOGRAPHER_DATE`,  `shouhin`.`DT_PACKING_DATE`,  `shouhin`.`DT_UP_DATE`,  `shouhin`.`AWAZU_DATE`,  `shouhin`.`AWAZU_NIN`,  `shouhin`.`sabun_date`,  `shouhin`.`browseid`,  `shouhin`.`browsenode`,  `shouhin`.`gold_property`,  `shouhin`.`ichiba_title`,  `shouhin`.`Gram`,  `shouhin`.`Parent_stone`,  `shouhin`.`Aside_stone`,  `shouhin`.`Appraiser`,  `shouhin`.`Remarks`,  `shouhin`.`Destination_selling`,  `shouhin`.`Finish`,  `shouhin`.`Discrimination`,  `shouhin`.`accessories`,  `shouhin`.`priority`,  `shouhin`.`A_storage`,  `shouhin`.`price_per_gram`,  `shouhin`.`price_per_parent_stone`,  `shouhin`.`price_per_aside_stone`,  `shouhin`.`price_secret`,  `shouhin`.`sales_price_secret`,  `shouhin`.`eq`,  `shouhin`.`en`,  `shouhin`.`line`,  `shouhin`.`item_name`,  `shouhin`.`handle`,  `shouhin`.`yahoo_color_id`,  `shouhin`.`raku_hyoujisaki_category4`,  `shouhin`.`raku_hyoujisaki_category5`,  `shouhin`.`raku_dir_1`,  `shouhin`.`raku_dir_2`,  `shouhin`.`raku_dir_3`,  `shouhin`.`raku_dir_4`,  `shouhin`.`raku_dir_5`,  `shouhin`.`raku_dir_result`,  `shouhin`.`raku_tag_result`,  `shouhin`.`Exhibition_Date`,  `shouhin`.`search_keyword`,  `shouhin`.`stamp`,  `shouhin`.`motif`,  `shouhin`.`Setting`,  `shouhin`.`processing`,  `shouhin`.`Sleeve_Length`,  `shouhin`.`length`,  `shouhin`.`Ring_size`,  `shouhin`.`price_for_site`,  `shouhin`.`yahoo_category_id`,  `shouhin`.`Qty`,  `shouhin`.`sales_period`,  `shouhin`.`starting_price`,  `Eoc`.`ecc_seq`,  `shouhin`.`yahoo_sex`,  `shouhin`.`saisun_start`,  `shouhin`.`yahoo_junle`,  `Eoc`.`ecc_id` AS `ecc_id1`,  `Eoc`.`name1` AS `name1`,  `Eoc`.`name2` AS `name2`,  `shouhin`.`serial_number`,  `shouhin`.`logo`,  `shouhin`.`parts`,  `shouhin`.`country_of_origin`,  `shouhin`.`zipper`,  `shouhin`.`guarantee`,  `shouhin`.`errors`,  `shouhin`.`designer`,  `shouhin`.`amount`,  `shouhin`.`producing_area`,  `shouhin`.`hahakai`,  `shouhin`.`shape`,  `shouhin`.`cutting_style`,  `shouhin`.`chain_type`,  `shouhin`.`satei_error`,  `shouhin`.`serial_number_for_storage`,  `shouhin`.`official_url`,  `shouhin`.`other_cost`,  `shouhin`.`identification_cost`,  `shouhin`.`cost`";
$proto0["m_strFrom"] = "FROM `shouhin`  LEFT OUTER JOIN `Eoc` ON `shouhin`.`ecc_id` = `Eoc`.`ecc_id`";
$proto0["m_strWhere"] = "`shouhin`.`status` = 29 OR `shouhin`.`status` = 7 OR `shouhin`.`status` = 137 OR `shouhin`.`status` = 110 OR `shouhin`.`status` = 33 OR `shouhin`.`status` = 143 OR `shouhin`.`status` = 136";
$proto0["m_strOrderBy"] = "ORDER BY `shouhin`.`product_id` DESC";
$proto0["m_strTail"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "`shouhin`.`status` = 29 OR `shouhin`.`status` = 7 OR `shouhin`.`status` = 137 OR `shouhin`.`status` = 110 OR `shouhin`.`status` = 33 OR `shouhin`.`status` = 143 OR `shouhin`.`status` = 136";
$proto2["m_uniontype"] = "SQLL_OR";
	$obj = new SQLNonParsed(array(
	"m_sql" => "`shouhin`.`status` = 29 OR `shouhin`.`status` = 7 OR `shouhin`.`status` = 137 OR `shouhin`.`status` = 110 OR `shouhin`.`status` = 33 OR `shouhin`.`status` = 143 OR `shouhin`.`status` = 136"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
						$proto4=array();
$proto4["m_sql"] = "`shouhin`.`status` = 29";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "= 29";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

			$proto2["m_contained"][]=$obj;
						$proto6=array();
$proto6["m_sql"] = "`shouhin`.`status` = 7";
$proto6["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto6["m_column"]=$obj;
$proto6["m_contained"] = array();
$proto6["m_strCase"] = "= 7";
$proto6["m_havingmode"] = false;
$proto6["m_inBrackets"] = false;
$proto6["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto6);

			$proto2["m_contained"][]=$obj;
						$proto8=array();
$proto8["m_sql"] = "`shouhin`.`status` = 137";
$proto8["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto8["m_column"]=$obj;
$proto8["m_contained"] = array();
$proto8["m_strCase"] = "= 137";
$proto8["m_havingmode"] = false;
$proto8["m_inBrackets"] = false;
$proto8["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto8);

			$proto2["m_contained"][]=$obj;
						$proto10=array();
$proto10["m_sql"] = "`shouhin`.`status` = 110";
$proto10["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto10["m_column"]=$obj;
$proto10["m_contained"] = array();
$proto10["m_strCase"] = "= 110";
$proto10["m_havingmode"] = false;
$proto10["m_inBrackets"] = false;
$proto10["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto10);

			$proto2["m_contained"][]=$obj;
						$proto12=array();
$proto12["m_sql"] = "`shouhin`.`status` = 33";
$proto12["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto12["m_column"]=$obj;
$proto12["m_contained"] = array();
$proto12["m_strCase"] = "= 33";
$proto12["m_havingmode"] = false;
$proto12["m_inBrackets"] = false;
$proto12["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto12);

			$proto2["m_contained"][]=$obj;
						$proto14=array();
$proto14["m_sql"] = "`shouhin`.`status` = 143";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "= 143";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = false;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

			$proto2["m_contained"][]=$obj;
						$proto16=array();
$proto16["m_sql"] = "`shouhin`.`status` = 136";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "= 136";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = false;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

			$proto2["m_contained"][]=$obj;
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "product_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto20["m_sql"] = "`shouhin`.`product_id`";
$proto20["m_srcTableName"] = "saisun";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "link";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "product_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto22["m_sql"] = "`shouhin`.`product_id`";
$proto22["m_srcTableName"] = "saisun";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "product_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto24["m_sql"] = "`shouhin`.`product_id`";
$proto24["m_srcTableName"] = "saisun";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "chigin_id";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "category_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto26["m_sql"] = "`shouhin`.`category_id`";
$proto26["m_srcTableName"] = "saisun";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "goods_title",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto28["m_sql"] = "`shouhin`.`goods_title`";
$proto28["m_srcTableName"] = "saisun";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "title",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto30["m_sql"] = "`shouhin`.`title`";
$proto30["m_srcTableName"] = "saisun";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "sub_category_id1",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto32["m_sql"] = "`shouhin`.`sub_category_id1`";
$proto32["m_srcTableName"] = "saisun";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "ecc_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto34["m_sql"] = "`shouhin`.`ecc_id`";
$proto34["m_srcTableName"] = "saisun";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "price",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto36["m_sql"] = "`shouhin`.`price`";
$proto36["m_srcTableName"] = "saisun";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto38["m_sql"] = "`shouhin`.`yahoo`";
$proto38["m_srcTableName"] = "saisun";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "remark",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto40["m_sql"] = "`shouhin`.`remark`";
$proto40["m_srcTableName"] = "saisun";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "sales_price",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto42["m_sql"] = "`shouhin`.`sales_price`";
$proto42["m_srcTableName"] = "saisun";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto44["m_sql"] = "`shouhin`.`description`";
$proto44["m_srcTableName"] = "saisun";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto46["m_sql"] = "`shouhin`.`status`";
$proto46["m_srcTableName"] = "saisun";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "product_num",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto48["m_sql"] = "`shouhin`.`product_num`";
$proto48["m_srcTableName"] = "saisun";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto50["m_sql"] = "`shouhin`.`updated_at`";
$proto50["m_srcTableName"] = "saisun";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_size",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto52["m_sql"] = "`shouhin`.`yahoo_size`";
$proto52["m_srcTableName"] = "saisun";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_title",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto54["m_sql"] = "`shouhin`.`yahoo_title`";
$proto54["m_srcTableName"] = "saisun";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_sankou_uwadai",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto56["m_sql"] = "`shouhin`.`yahoo_sankou_uwadai`";
$proto56["m_srcTableName"] = "saisun";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_sozai",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto58["m_sql"] = "`shouhin`.`yahoo_sozai`";
$proto58["m_srcTableName"] = "saisun";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_color",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto60["m_sql"] = "`shouhin`.`yahoo_color`";
$proto60["m_srcTableName"] = "saisun";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_kataban",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto62["m_sql"] = "`shouhin`.`yahoo_kataban`";
$proto62["m_srcTableName"] = "saisun";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_condition1",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto64["m_sql"] = "`shouhin`.`yahoo_condition1`";
$proto64["m_srcTableName"] = "saisun";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_condition2",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto66["m_sql"] = "`shouhin`.`yahoo_condition2`";
$proto66["m_srcTableName"] = "saisun";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_fuzokuhin",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto68["m_sql"] = "`shouhin`.`yahoo_fuzokuhin`";
$proto68["m_srcTableName"] = "saisun";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_sinaban",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto70["m_sql"] = "`shouhin`.`yahoo_sinaban`";
$proto70["m_srcTableName"] = "saisun";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_saisun_sha",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto72["m_sql"] = "`shouhin`.`yahoo_saisun_sha`";
$proto72["m_srcTableName"] = "saisun";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "box_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto74["m_sql"] = "`shouhin`.`box_id`";
$proto74["m_srcTableName"] = "saisun";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "nyuukin_price",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto76["m_sql"] = "`shouhin`.`nyuukin_price`";
$proto76["m_srcTableName"] = "saisun";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto78["m_sql"] = "`shouhin`.`updated_by`";
$proto78["m_srcTableName"] = "saisun";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "raku_title",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto80["m_sql"] = "`shouhin`.`raku_title`";
$proto80["m_srcTableName"] = "saisun";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "raku_hyoujisaki_category2",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto82["m_sql"] = "`shouhin`.`raku_hyoujisaki_category2`";
$proto82["m_srcTableName"] = "saisun";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "raku_hyoujisaki_category",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto84["m_sql"] = "`shouhin`.`raku_hyoujisaki_category`";
$proto84["m_srcTableName"] = "saisun";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "raku_hyoujisaki_category3",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto86["m_sql"] = "`shouhin`.`raku_hyoujisaki_category3`";
$proto86["m_srcTableName"] = "saisun";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "timesta",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto88["m_sql"] = "`shouhin`.`timesta`";
$proto88["m_srcTableName"] = "saisun";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "saisun_end",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto90["m_sql"] = "`shouhin`.`saisun_end`";
$proto90["m_srcTableName"] = "saisun";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLField(array(
	"m_strName" => "label_output_flag",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto92["m_sql"] = "`shouhin`.`label_output_flag`";
$proto92["m_srcTableName"] = "saisun";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "";
$obj = new SQLFieldListItem($proto92);

$proto0["m_fieldlist"][]=$obj;
						$proto94=array();
			$obj = new SQLField(array(
	"m_strName" => "season",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto94["m_sql"] = "`shouhin`.`season`";
$proto94["m_srcTableName"] = "saisun";
$proto94["m_expr"]=$obj;
$proto94["m_alias"] = "";
$obj = new SQLFieldListItem($proto94);

$proto0["m_fieldlist"][]=$obj;
						$proto96=array();
			$obj = new SQLField(array(
	"m_strName" => "kanryou_henbi",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto96["m_sql"] = "`shouhin`.`kanryou_henbi`";
$proto96["m_srcTableName"] = "saisun";
$proto96["m_expr"]=$obj;
$proto96["m_alias"] = "";
$obj = new SQLFieldListItem($proto96);

$proto0["m_fieldlist"][]=$obj;
						$proto98=array();
			$obj = new SQLField(array(
	"m_strName" => "box_sort",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto98["m_sql"] = "`shouhin`.`box_sort`";
$proto98["m_srcTableName"] = "saisun";
$proto98["m_expr"]=$obj;
$proto98["m_alias"] = "";
$obj = new SQLFieldListItem($proto98);

$proto0["m_fieldlist"][]=$obj;
						$proto100=array();
			$obj = new SQLField(array(
	"m_strName" => "satei_by",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto100["m_sql"] = "`shouhin`.`satei_by`";
$proto100["m_srcTableName"] = "saisun";
$proto100["m_expr"]=$obj;
$proto100["m_alias"] = "";
$obj = new SQLFieldListItem($proto100);

$proto0["m_fieldlist"][]=$obj;
						$proto102=array();
			$obj = new SQLField(array(
	"m_strName" => "kaitori_by",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto102["m_sql"] = "`shouhin`.`kaitori_by`";
$proto102["m_srcTableName"] = "saisun";
$proto102["m_expr"]=$obj;
$proto102["m_alias"] = "";
$obj = new SQLFieldListItem($proto102);

$proto0["m_fieldlist"][]=$obj;
						$proto104=array();
			$obj = new SQLField(array(
	"m_strName" => "comment",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto104["m_sql"] = "`shouhin`.`comment`";
$proto104["m_srcTableName"] = "saisun";
$proto104["m_expr"]=$obj;
$proto104["m_alias"] = "";
$obj = new SQLFieldListItem($proto104);

$proto0["m_fieldlist"][]=$obj;
						$proto106=array();
			$obj = new SQLField(array(
	"m_strName" => "satei_hi",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto106["m_sql"] = "`shouhin`.`satei_hi`";
$proto106["m_srcTableName"] = "saisun";
$proto106["m_expr"]=$obj;
$proto106["m_alias"] = "";
$obj = new SQLFieldListItem($proto106);

$proto0["m_fieldlist"][]=$obj;
						$proto108=array();
			$obj = new SQLField(array(
	"m_strName" => "kaitory_hi",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto108["m_sql"] = "`shouhin`.`kaitory_hi`";
$proto108["m_srcTableName"] = "saisun";
$proto108["m_expr"]=$obj;
$proto108["m_alias"] = "";
$obj = new SQLFieldListItem($proto108);

$proto0["m_fieldlist"][]=$obj;
						$proto110=array();
			$obj = new SQLField(array(
	"m_strName" => "REG_PHOTOGRAPHER",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto110["m_sql"] = "`shouhin`.`REG_PHOTOGRAPHER`";
$proto110["m_srcTableName"] = "saisun";
$proto110["m_expr"]=$obj;
$proto110["m_alias"] = "";
$obj = new SQLFieldListItem($proto110);

$proto0["m_fieldlist"][]=$obj;
						$proto112=array();
			$obj = new SQLField(array(
	"m_strName" => "REG_AUTHOR",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto112["m_sql"] = "`shouhin`.`REG_AUTHOR`";
$proto112["m_srcTableName"] = "saisun";
$proto112["m_expr"]=$obj;
$proto112["m_alias"] = "";
$obj = new SQLFieldListItem($proto112);

$proto0["m_fieldlist"][]=$obj;
						$proto114=array();
			$obj = new SQLField(array(
	"m_strName" => "REG_PACKINGS",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto114["m_sql"] = "`shouhin`.`REG_PACKINGS`";
$proto114["m_srcTableName"] = "saisun";
$proto114["m_expr"]=$obj;
$proto114["m_alias"] = "";
$obj = new SQLFieldListItem($proto114);

$proto0["m_fieldlist"][]=$obj;
						$proto116=array();
			$obj = new SQLField(array(
	"m_strName" => "REG_KAKOU_DATE",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto116["m_sql"] = "`shouhin`.`REG_KAKOU_DATE`";
$proto116["m_srcTableName"] = "saisun";
$proto116["m_expr"]=$obj;
$proto116["m_alias"] = "";
$obj = new SQLFieldListItem($proto116);

$proto0["m_fieldlist"][]=$obj;
						$proto118=array();
			$obj = new SQLField(array(
	"m_strName" => "REG_KAKOU",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto118["m_sql"] = "`shouhin`.`REG_KAKOU`";
$proto118["m_srcTableName"] = "saisun";
$proto118["m_expr"]=$obj;
$proto118["m_alias"] = "";
$obj = new SQLFieldListItem($proto118);

$proto0["m_fieldlist"][]=$obj;
						$proto120=array();
			$obj = new SQLField(array(
	"m_strName" => "REG_EXHIBITOR",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto120["m_sql"] = "`shouhin`.`REG_EXHIBITOR`";
$proto120["m_srcTableName"] = "saisun";
$proto120["m_expr"]=$obj;
$proto120["m_alias"] = "";
$obj = new SQLFieldListItem($proto120);

$proto0["m_fieldlist"][]=$obj;
						$proto122=array();
			$obj = new SQLField(array(
	"m_strName" => "REG_PHOTOGRAPHER_DATE",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto122["m_sql"] = "`shouhin`.`REG_PHOTOGRAPHER_DATE`";
$proto122["m_srcTableName"] = "saisun";
$proto122["m_expr"]=$obj;
$proto122["m_alias"] = "";
$obj = new SQLFieldListItem($proto122);

$proto0["m_fieldlist"][]=$obj;
						$proto124=array();
			$obj = new SQLField(array(
	"m_strName" => "DT_PACKING_DATE",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto124["m_sql"] = "`shouhin`.`DT_PACKING_DATE`";
$proto124["m_srcTableName"] = "saisun";
$proto124["m_expr"]=$obj;
$proto124["m_alias"] = "";
$obj = new SQLFieldListItem($proto124);

$proto0["m_fieldlist"][]=$obj;
						$proto126=array();
			$obj = new SQLField(array(
	"m_strName" => "DT_UP_DATE",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto126["m_sql"] = "`shouhin`.`DT_UP_DATE`";
$proto126["m_srcTableName"] = "saisun";
$proto126["m_expr"]=$obj;
$proto126["m_alias"] = "";
$obj = new SQLFieldListItem($proto126);

$proto0["m_fieldlist"][]=$obj;
						$proto128=array();
			$obj = new SQLField(array(
	"m_strName" => "AWAZU_DATE",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto128["m_sql"] = "`shouhin`.`AWAZU_DATE`";
$proto128["m_srcTableName"] = "saisun";
$proto128["m_expr"]=$obj;
$proto128["m_alias"] = "";
$obj = new SQLFieldListItem($proto128);

$proto0["m_fieldlist"][]=$obj;
						$proto130=array();
			$obj = new SQLField(array(
	"m_strName" => "AWAZU_NIN",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto130["m_sql"] = "`shouhin`.`AWAZU_NIN`";
$proto130["m_srcTableName"] = "saisun";
$proto130["m_expr"]=$obj;
$proto130["m_alias"] = "";
$obj = new SQLFieldListItem($proto130);

$proto0["m_fieldlist"][]=$obj;
						$proto132=array();
			$obj = new SQLField(array(
	"m_strName" => "sabun_date",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto132["m_sql"] = "`shouhin`.`sabun_date`";
$proto132["m_srcTableName"] = "saisun";
$proto132["m_expr"]=$obj;
$proto132["m_alias"] = "";
$obj = new SQLFieldListItem($proto132);

$proto0["m_fieldlist"][]=$obj;
						$proto134=array();
			$obj = new SQLField(array(
	"m_strName" => "browseid",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto134["m_sql"] = "`shouhin`.`browseid`";
$proto134["m_srcTableName"] = "saisun";
$proto134["m_expr"]=$obj;
$proto134["m_alias"] = "";
$obj = new SQLFieldListItem($proto134);

$proto0["m_fieldlist"][]=$obj;
						$proto136=array();
			$obj = new SQLField(array(
	"m_strName" => "browsenode",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto136["m_sql"] = "`shouhin`.`browsenode`";
$proto136["m_srcTableName"] = "saisun";
$proto136["m_expr"]=$obj;
$proto136["m_alias"] = "";
$obj = new SQLFieldListItem($proto136);

$proto0["m_fieldlist"][]=$obj;
						$proto138=array();
			$obj = new SQLField(array(
	"m_strName" => "gold_property",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto138["m_sql"] = "`shouhin`.`gold_property`";
$proto138["m_srcTableName"] = "saisun";
$proto138["m_expr"]=$obj;
$proto138["m_alias"] = "";
$obj = new SQLFieldListItem($proto138);

$proto0["m_fieldlist"][]=$obj;
						$proto140=array();
			$obj = new SQLField(array(
	"m_strName" => "ichiba_title",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto140["m_sql"] = "`shouhin`.`ichiba_title`";
$proto140["m_srcTableName"] = "saisun";
$proto140["m_expr"]=$obj;
$proto140["m_alias"] = "";
$obj = new SQLFieldListItem($proto140);

$proto0["m_fieldlist"][]=$obj;
						$proto142=array();
			$obj = new SQLField(array(
	"m_strName" => "Gram",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto142["m_sql"] = "`shouhin`.`Gram`";
$proto142["m_srcTableName"] = "saisun";
$proto142["m_expr"]=$obj;
$proto142["m_alias"] = "";
$obj = new SQLFieldListItem($proto142);

$proto0["m_fieldlist"][]=$obj;
						$proto144=array();
			$obj = new SQLField(array(
	"m_strName" => "Parent_stone",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto144["m_sql"] = "`shouhin`.`Parent_stone`";
$proto144["m_srcTableName"] = "saisun";
$proto144["m_expr"]=$obj;
$proto144["m_alias"] = "";
$obj = new SQLFieldListItem($proto144);

$proto0["m_fieldlist"][]=$obj;
						$proto146=array();
			$obj = new SQLField(array(
	"m_strName" => "Aside_stone",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto146["m_sql"] = "`shouhin`.`Aside_stone`";
$proto146["m_srcTableName"] = "saisun";
$proto146["m_expr"]=$obj;
$proto146["m_alias"] = "";
$obj = new SQLFieldListItem($proto146);

$proto0["m_fieldlist"][]=$obj;
						$proto148=array();
			$obj = new SQLField(array(
	"m_strName" => "Appraiser",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto148["m_sql"] = "`shouhin`.`Appraiser`";
$proto148["m_srcTableName"] = "saisun";
$proto148["m_expr"]=$obj;
$proto148["m_alias"] = "";
$obj = new SQLFieldListItem($proto148);

$proto0["m_fieldlist"][]=$obj;
						$proto150=array();
			$obj = new SQLField(array(
	"m_strName" => "Remarks",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto150["m_sql"] = "`shouhin`.`Remarks`";
$proto150["m_srcTableName"] = "saisun";
$proto150["m_expr"]=$obj;
$proto150["m_alias"] = "";
$obj = new SQLFieldListItem($proto150);

$proto0["m_fieldlist"][]=$obj;
						$proto152=array();
			$obj = new SQLField(array(
	"m_strName" => "Destination_selling",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto152["m_sql"] = "`shouhin`.`Destination_selling`";
$proto152["m_srcTableName"] = "saisun";
$proto152["m_expr"]=$obj;
$proto152["m_alias"] = "";
$obj = new SQLFieldListItem($proto152);

$proto0["m_fieldlist"][]=$obj;
						$proto154=array();
			$obj = new SQLField(array(
	"m_strName" => "Finish",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto154["m_sql"] = "`shouhin`.`Finish`";
$proto154["m_srcTableName"] = "saisun";
$proto154["m_expr"]=$obj;
$proto154["m_alias"] = "";
$obj = new SQLFieldListItem($proto154);

$proto0["m_fieldlist"][]=$obj;
						$proto156=array();
			$obj = new SQLField(array(
	"m_strName" => "Discrimination",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto156["m_sql"] = "`shouhin`.`Discrimination`";
$proto156["m_srcTableName"] = "saisun";
$proto156["m_expr"]=$obj;
$proto156["m_alias"] = "";
$obj = new SQLFieldListItem($proto156);

$proto0["m_fieldlist"][]=$obj;
						$proto158=array();
			$obj = new SQLField(array(
	"m_strName" => "accessories",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto158["m_sql"] = "`shouhin`.`accessories`";
$proto158["m_srcTableName"] = "saisun";
$proto158["m_expr"]=$obj;
$proto158["m_alias"] = "";
$obj = new SQLFieldListItem($proto158);

$proto0["m_fieldlist"][]=$obj;
						$proto160=array();
			$obj = new SQLField(array(
	"m_strName" => "priority",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto160["m_sql"] = "`shouhin`.`priority`";
$proto160["m_srcTableName"] = "saisun";
$proto160["m_expr"]=$obj;
$proto160["m_alias"] = "";
$obj = new SQLFieldListItem($proto160);

$proto0["m_fieldlist"][]=$obj;
						$proto162=array();
			$obj = new SQLField(array(
	"m_strName" => "A_storage",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto162["m_sql"] = "`shouhin`.`A_storage`";
$proto162["m_srcTableName"] = "saisun";
$proto162["m_expr"]=$obj;
$proto162["m_alias"] = "";
$obj = new SQLFieldListItem($proto162);

$proto0["m_fieldlist"][]=$obj;
						$proto164=array();
			$obj = new SQLField(array(
	"m_strName" => "price_per_gram",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto164["m_sql"] = "`shouhin`.`price_per_gram`";
$proto164["m_srcTableName"] = "saisun";
$proto164["m_expr"]=$obj;
$proto164["m_alias"] = "";
$obj = new SQLFieldListItem($proto164);

$proto0["m_fieldlist"][]=$obj;
						$proto166=array();
			$obj = new SQLField(array(
	"m_strName" => "price_per_parent_stone",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto166["m_sql"] = "`shouhin`.`price_per_parent_stone`";
$proto166["m_srcTableName"] = "saisun";
$proto166["m_expr"]=$obj;
$proto166["m_alias"] = "";
$obj = new SQLFieldListItem($proto166);

$proto0["m_fieldlist"][]=$obj;
						$proto168=array();
			$obj = new SQLField(array(
	"m_strName" => "price_per_aside_stone",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto168["m_sql"] = "`shouhin`.`price_per_aside_stone`";
$proto168["m_srcTableName"] = "saisun";
$proto168["m_expr"]=$obj;
$proto168["m_alias"] = "";
$obj = new SQLFieldListItem($proto168);

$proto0["m_fieldlist"][]=$obj;
						$proto170=array();
			$obj = new SQLField(array(
	"m_strName" => "price_secret",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto170["m_sql"] = "`shouhin`.`price_secret`";
$proto170["m_srcTableName"] = "saisun";
$proto170["m_expr"]=$obj;
$proto170["m_alias"] = "";
$obj = new SQLFieldListItem($proto170);

$proto0["m_fieldlist"][]=$obj;
						$proto172=array();
			$obj = new SQLField(array(
	"m_strName" => "sales_price_secret",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto172["m_sql"] = "`shouhin`.`sales_price_secret`";
$proto172["m_srcTableName"] = "saisun";
$proto172["m_expr"]=$obj;
$proto172["m_alias"] = "";
$obj = new SQLFieldListItem($proto172);

$proto0["m_fieldlist"][]=$obj;
						$proto174=array();
			$obj = new SQLField(array(
	"m_strName" => "eq",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto174["m_sql"] = "`shouhin`.`eq`";
$proto174["m_srcTableName"] = "saisun";
$proto174["m_expr"]=$obj;
$proto174["m_alias"] = "";
$obj = new SQLFieldListItem($proto174);

$proto0["m_fieldlist"][]=$obj;
						$proto176=array();
			$obj = new SQLField(array(
	"m_strName" => "en",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto176["m_sql"] = "`shouhin`.`en`";
$proto176["m_srcTableName"] = "saisun";
$proto176["m_expr"]=$obj;
$proto176["m_alias"] = "";
$obj = new SQLFieldListItem($proto176);

$proto0["m_fieldlist"][]=$obj;
						$proto178=array();
			$obj = new SQLField(array(
	"m_strName" => "line",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto178["m_sql"] = "`shouhin`.`line`";
$proto178["m_srcTableName"] = "saisun";
$proto178["m_expr"]=$obj;
$proto178["m_alias"] = "";
$obj = new SQLFieldListItem($proto178);

$proto0["m_fieldlist"][]=$obj;
						$proto180=array();
			$obj = new SQLField(array(
	"m_strName" => "item_name",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto180["m_sql"] = "`shouhin`.`item_name`";
$proto180["m_srcTableName"] = "saisun";
$proto180["m_expr"]=$obj;
$proto180["m_alias"] = "";
$obj = new SQLFieldListItem($proto180);

$proto0["m_fieldlist"][]=$obj;
						$proto182=array();
			$obj = new SQLField(array(
	"m_strName" => "handle",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto182["m_sql"] = "`shouhin`.`handle`";
$proto182["m_srcTableName"] = "saisun";
$proto182["m_expr"]=$obj;
$proto182["m_alias"] = "";
$obj = new SQLFieldListItem($proto182);

$proto0["m_fieldlist"][]=$obj;
						$proto184=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_color_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto184["m_sql"] = "`shouhin`.`yahoo_color_id`";
$proto184["m_srcTableName"] = "saisun";
$proto184["m_expr"]=$obj;
$proto184["m_alias"] = "";
$obj = new SQLFieldListItem($proto184);

$proto0["m_fieldlist"][]=$obj;
						$proto186=array();
			$obj = new SQLField(array(
	"m_strName" => "raku_hyoujisaki_category4",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto186["m_sql"] = "`shouhin`.`raku_hyoujisaki_category4`";
$proto186["m_srcTableName"] = "saisun";
$proto186["m_expr"]=$obj;
$proto186["m_alias"] = "";
$obj = new SQLFieldListItem($proto186);

$proto0["m_fieldlist"][]=$obj;
						$proto188=array();
			$obj = new SQLField(array(
	"m_strName" => "raku_hyoujisaki_category5",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto188["m_sql"] = "`shouhin`.`raku_hyoujisaki_category5`";
$proto188["m_srcTableName"] = "saisun";
$proto188["m_expr"]=$obj;
$proto188["m_alias"] = "";
$obj = new SQLFieldListItem($proto188);

$proto0["m_fieldlist"][]=$obj;
						$proto190=array();
			$obj = new SQLField(array(
	"m_strName" => "raku_dir_1",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto190["m_sql"] = "`shouhin`.`raku_dir_1`";
$proto190["m_srcTableName"] = "saisun";
$proto190["m_expr"]=$obj;
$proto190["m_alias"] = "";
$obj = new SQLFieldListItem($proto190);

$proto0["m_fieldlist"][]=$obj;
						$proto192=array();
			$obj = new SQLField(array(
	"m_strName" => "raku_dir_2",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto192["m_sql"] = "`shouhin`.`raku_dir_2`";
$proto192["m_srcTableName"] = "saisun";
$proto192["m_expr"]=$obj;
$proto192["m_alias"] = "";
$obj = new SQLFieldListItem($proto192);

$proto0["m_fieldlist"][]=$obj;
						$proto194=array();
			$obj = new SQLField(array(
	"m_strName" => "raku_dir_3",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto194["m_sql"] = "`shouhin`.`raku_dir_3`";
$proto194["m_srcTableName"] = "saisun";
$proto194["m_expr"]=$obj;
$proto194["m_alias"] = "";
$obj = new SQLFieldListItem($proto194);

$proto0["m_fieldlist"][]=$obj;
						$proto196=array();
			$obj = new SQLField(array(
	"m_strName" => "raku_dir_4",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto196["m_sql"] = "`shouhin`.`raku_dir_4`";
$proto196["m_srcTableName"] = "saisun";
$proto196["m_expr"]=$obj;
$proto196["m_alias"] = "";
$obj = new SQLFieldListItem($proto196);

$proto0["m_fieldlist"][]=$obj;
						$proto198=array();
			$obj = new SQLField(array(
	"m_strName" => "raku_dir_5",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto198["m_sql"] = "`shouhin`.`raku_dir_5`";
$proto198["m_srcTableName"] = "saisun";
$proto198["m_expr"]=$obj;
$proto198["m_alias"] = "";
$obj = new SQLFieldListItem($proto198);

$proto0["m_fieldlist"][]=$obj;
						$proto200=array();
			$obj = new SQLField(array(
	"m_strName" => "raku_dir_result",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto200["m_sql"] = "`shouhin`.`raku_dir_result`";
$proto200["m_srcTableName"] = "saisun";
$proto200["m_expr"]=$obj;
$proto200["m_alias"] = "";
$obj = new SQLFieldListItem($proto200);

$proto0["m_fieldlist"][]=$obj;
						$proto202=array();
			$obj = new SQLField(array(
	"m_strName" => "raku_tag_result",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto202["m_sql"] = "`shouhin`.`raku_tag_result`";
$proto202["m_srcTableName"] = "saisun";
$proto202["m_expr"]=$obj;
$proto202["m_alias"] = "";
$obj = new SQLFieldListItem($proto202);

$proto0["m_fieldlist"][]=$obj;
						$proto204=array();
			$obj = new SQLField(array(
	"m_strName" => "Exhibition_Date",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto204["m_sql"] = "`shouhin`.`Exhibition_Date`";
$proto204["m_srcTableName"] = "saisun";
$proto204["m_expr"]=$obj;
$proto204["m_alias"] = "";
$obj = new SQLFieldListItem($proto204);

$proto0["m_fieldlist"][]=$obj;
						$proto206=array();
			$obj = new SQLField(array(
	"m_strName" => "search_keyword",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto206["m_sql"] = "`shouhin`.`search_keyword`";
$proto206["m_srcTableName"] = "saisun";
$proto206["m_expr"]=$obj;
$proto206["m_alias"] = "";
$obj = new SQLFieldListItem($proto206);

$proto0["m_fieldlist"][]=$obj;
						$proto208=array();
			$obj = new SQLField(array(
	"m_strName" => "stamp",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto208["m_sql"] = "`shouhin`.`stamp`";
$proto208["m_srcTableName"] = "saisun";
$proto208["m_expr"]=$obj;
$proto208["m_alias"] = "";
$obj = new SQLFieldListItem($proto208);

$proto0["m_fieldlist"][]=$obj;
						$proto210=array();
			$obj = new SQLField(array(
	"m_strName" => "motif",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto210["m_sql"] = "`shouhin`.`motif`";
$proto210["m_srcTableName"] = "saisun";
$proto210["m_expr"]=$obj;
$proto210["m_alias"] = "";
$obj = new SQLFieldListItem($proto210);

$proto0["m_fieldlist"][]=$obj;
						$proto212=array();
			$obj = new SQLField(array(
	"m_strName" => "Setting",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto212["m_sql"] = "`shouhin`.`Setting`";
$proto212["m_srcTableName"] = "saisun";
$proto212["m_expr"]=$obj;
$proto212["m_alias"] = "";
$obj = new SQLFieldListItem($proto212);

$proto0["m_fieldlist"][]=$obj;
						$proto214=array();
			$obj = new SQLField(array(
	"m_strName" => "processing",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto214["m_sql"] = "`shouhin`.`processing`";
$proto214["m_srcTableName"] = "saisun";
$proto214["m_expr"]=$obj;
$proto214["m_alias"] = "";
$obj = new SQLFieldListItem($proto214);

$proto0["m_fieldlist"][]=$obj;
						$proto216=array();
			$obj = new SQLField(array(
	"m_strName" => "Sleeve_Length",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto216["m_sql"] = "`shouhin`.`Sleeve_Length`";
$proto216["m_srcTableName"] = "saisun";
$proto216["m_expr"]=$obj;
$proto216["m_alias"] = "";
$obj = new SQLFieldListItem($proto216);

$proto0["m_fieldlist"][]=$obj;
						$proto218=array();
			$obj = new SQLField(array(
	"m_strName" => "length",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto218["m_sql"] = "`shouhin`.`length`";
$proto218["m_srcTableName"] = "saisun";
$proto218["m_expr"]=$obj;
$proto218["m_alias"] = "";
$obj = new SQLFieldListItem($proto218);

$proto0["m_fieldlist"][]=$obj;
						$proto220=array();
			$obj = new SQLField(array(
	"m_strName" => "Ring_size",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto220["m_sql"] = "`shouhin`.`Ring_size`";
$proto220["m_srcTableName"] = "saisun";
$proto220["m_expr"]=$obj;
$proto220["m_alias"] = "";
$obj = new SQLFieldListItem($proto220);

$proto0["m_fieldlist"][]=$obj;
						$proto222=array();
			$obj = new SQLField(array(
	"m_strName" => "price_for_site",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto222["m_sql"] = "`shouhin`.`price_for_site`";
$proto222["m_srcTableName"] = "saisun";
$proto222["m_expr"]=$obj;
$proto222["m_alias"] = "";
$obj = new SQLFieldListItem($proto222);

$proto0["m_fieldlist"][]=$obj;
						$proto224=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_category_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto224["m_sql"] = "`shouhin`.`yahoo_category_id`";
$proto224["m_srcTableName"] = "saisun";
$proto224["m_expr"]=$obj;
$proto224["m_alias"] = "";
$obj = new SQLFieldListItem($proto224);

$proto0["m_fieldlist"][]=$obj;
						$proto226=array();
			$obj = new SQLField(array(
	"m_strName" => "Qty",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto226["m_sql"] = "`shouhin`.`Qty`";
$proto226["m_srcTableName"] = "saisun";
$proto226["m_expr"]=$obj;
$proto226["m_alias"] = "";
$obj = new SQLFieldListItem($proto226);

$proto0["m_fieldlist"][]=$obj;
						$proto228=array();
			$obj = new SQLField(array(
	"m_strName" => "sales_period",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto228["m_sql"] = "`shouhin`.`sales_period`";
$proto228["m_srcTableName"] = "saisun";
$proto228["m_expr"]=$obj;
$proto228["m_alias"] = "";
$obj = new SQLFieldListItem($proto228);

$proto0["m_fieldlist"][]=$obj;
						$proto230=array();
			$obj = new SQLField(array(
	"m_strName" => "starting_price",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto230["m_sql"] = "`shouhin`.`starting_price`";
$proto230["m_srcTableName"] = "saisun";
$proto230["m_expr"]=$obj;
$proto230["m_alias"] = "";
$obj = new SQLFieldListItem($proto230);

$proto0["m_fieldlist"][]=$obj;
						$proto232=array();
			$obj = new SQLField(array(
	"m_strName" => "ecc_seq",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "saisun"
));

$proto232["m_sql"] = "`Eoc`.`ecc_seq`";
$proto232["m_srcTableName"] = "saisun";
$proto232["m_expr"]=$obj;
$proto232["m_alias"] = "";
$obj = new SQLFieldListItem($proto232);

$proto0["m_fieldlist"][]=$obj;
						$proto234=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_sex",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto234["m_sql"] = "`shouhin`.`yahoo_sex`";
$proto234["m_srcTableName"] = "saisun";
$proto234["m_expr"]=$obj;
$proto234["m_alias"] = "";
$obj = new SQLFieldListItem($proto234);

$proto0["m_fieldlist"][]=$obj;
						$proto236=array();
			$obj = new SQLField(array(
	"m_strName" => "saisun_start",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto236["m_sql"] = "`shouhin`.`saisun_start`";
$proto236["m_srcTableName"] = "saisun";
$proto236["m_expr"]=$obj;
$proto236["m_alias"] = "";
$obj = new SQLFieldListItem($proto236);

$proto0["m_fieldlist"][]=$obj;
						$proto238=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_junle",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto238["m_sql"] = "`shouhin`.`yahoo_junle`";
$proto238["m_srcTableName"] = "saisun";
$proto238["m_expr"]=$obj;
$proto238["m_alias"] = "";
$obj = new SQLFieldListItem($proto238);

$proto0["m_fieldlist"][]=$obj;
						$proto240=array();
			$obj = new SQLField(array(
	"m_strName" => "ecc_id",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "saisun"
));

$proto240["m_sql"] = "`Eoc`.`ecc_id`";
$proto240["m_srcTableName"] = "saisun";
$proto240["m_expr"]=$obj;
$proto240["m_alias"] = "ecc_id1";
$obj = new SQLFieldListItem($proto240);

$proto0["m_fieldlist"][]=$obj;
						$proto242=array();
			$obj = new SQLField(array(
	"m_strName" => "name1",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "saisun"
));

$proto242["m_sql"] = "`Eoc`.`name1`";
$proto242["m_srcTableName"] = "saisun";
$proto242["m_expr"]=$obj;
$proto242["m_alias"] = "name1";
$obj = new SQLFieldListItem($proto242);

$proto0["m_fieldlist"][]=$obj;
						$proto244=array();
			$obj = new SQLField(array(
	"m_strName" => "name2",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "saisun"
));

$proto244["m_sql"] = "`Eoc`.`name2`";
$proto244["m_srcTableName"] = "saisun";
$proto244["m_expr"]=$obj;
$proto244["m_alias"] = "name2";
$obj = new SQLFieldListItem($proto244);

$proto0["m_fieldlist"][]=$obj;
						$proto246=array();
			$obj = new SQLField(array(
	"m_strName" => "serial_number",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto246["m_sql"] = "`shouhin`.`serial_number`";
$proto246["m_srcTableName"] = "saisun";
$proto246["m_expr"]=$obj;
$proto246["m_alias"] = "";
$obj = new SQLFieldListItem($proto246);

$proto0["m_fieldlist"][]=$obj;
						$proto248=array();
			$obj = new SQLField(array(
	"m_strName" => "logo",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto248["m_sql"] = "`shouhin`.`logo`";
$proto248["m_srcTableName"] = "saisun";
$proto248["m_expr"]=$obj;
$proto248["m_alias"] = "";
$obj = new SQLFieldListItem($proto248);

$proto0["m_fieldlist"][]=$obj;
						$proto250=array();
			$obj = new SQLField(array(
	"m_strName" => "parts",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto250["m_sql"] = "`shouhin`.`parts`";
$proto250["m_srcTableName"] = "saisun";
$proto250["m_expr"]=$obj;
$proto250["m_alias"] = "";
$obj = new SQLFieldListItem($proto250);

$proto0["m_fieldlist"][]=$obj;
						$proto252=array();
			$obj = new SQLField(array(
	"m_strName" => "country_of_origin",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto252["m_sql"] = "`shouhin`.`country_of_origin`";
$proto252["m_srcTableName"] = "saisun";
$proto252["m_expr"]=$obj;
$proto252["m_alias"] = "";
$obj = new SQLFieldListItem($proto252);

$proto0["m_fieldlist"][]=$obj;
						$proto254=array();
			$obj = new SQLField(array(
	"m_strName" => "zipper",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto254["m_sql"] = "`shouhin`.`zipper`";
$proto254["m_srcTableName"] = "saisun";
$proto254["m_expr"]=$obj;
$proto254["m_alias"] = "";
$obj = new SQLFieldListItem($proto254);

$proto0["m_fieldlist"][]=$obj;
						$proto256=array();
			$obj = new SQLField(array(
	"m_strName" => "guarantee",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto256["m_sql"] = "`shouhin`.`guarantee`";
$proto256["m_srcTableName"] = "saisun";
$proto256["m_expr"]=$obj;
$proto256["m_alias"] = "";
$obj = new SQLFieldListItem($proto256);

$proto0["m_fieldlist"][]=$obj;
						$proto258=array();
			$obj = new SQLField(array(
	"m_strName" => "errors",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto258["m_sql"] = "`shouhin`.`errors`";
$proto258["m_srcTableName"] = "saisun";
$proto258["m_expr"]=$obj;
$proto258["m_alias"] = "";
$obj = new SQLFieldListItem($proto258);

$proto0["m_fieldlist"][]=$obj;
						$proto260=array();
			$obj = new SQLField(array(
	"m_strName" => "designer",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto260["m_sql"] = "`shouhin`.`designer`";
$proto260["m_srcTableName"] = "saisun";
$proto260["m_expr"]=$obj;
$proto260["m_alias"] = "";
$obj = new SQLFieldListItem($proto260);

$proto0["m_fieldlist"][]=$obj;
						$proto262=array();
			$obj = new SQLField(array(
	"m_strName" => "amount",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto262["m_sql"] = "`shouhin`.`amount`";
$proto262["m_srcTableName"] = "saisun";
$proto262["m_expr"]=$obj;
$proto262["m_alias"] = "";
$obj = new SQLFieldListItem($proto262);

$proto0["m_fieldlist"][]=$obj;
						$proto264=array();
			$obj = new SQLField(array(
	"m_strName" => "producing_area",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto264["m_sql"] = "`shouhin`.`producing_area`";
$proto264["m_srcTableName"] = "saisun";
$proto264["m_expr"]=$obj;
$proto264["m_alias"] = "";
$obj = new SQLFieldListItem($proto264);

$proto0["m_fieldlist"][]=$obj;
						$proto266=array();
			$obj = new SQLField(array(
	"m_strName" => "hahakai",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto266["m_sql"] = "`shouhin`.`hahakai`";
$proto266["m_srcTableName"] = "saisun";
$proto266["m_expr"]=$obj;
$proto266["m_alias"] = "";
$obj = new SQLFieldListItem($proto266);

$proto0["m_fieldlist"][]=$obj;
						$proto268=array();
			$obj = new SQLField(array(
	"m_strName" => "shape",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto268["m_sql"] = "`shouhin`.`shape`";
$proto268["m_srcTableName"] = "saisun";
$proto268["m_expr"]=$obj;
$proto268["m_alias"] = "";
$obj = new SQLFieldListItem($proto268);

$proto0["m_fieldlist"][]=$obj;
						$proto270=array();
			$obj = new SQLField(array(
	"m_strName" => "cutting_style",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto270["m_sql"] = "`shouhin`.`cutting_style`";
$proto270["m_srcTableName"] = "saisun";
$proto270["m_expr"]=$obj;
$proto270["m_alias"] = "";
$obj = new SQLFieldListItem($proto270);

$proto0["m_fieldlist"][]=$obj;
						$proto272=array();
			$obj = new SQLField(array(
	"m_strName" => "chain_type",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto272["m_sql"] = "`shouhin`.`chain_type`";
$proto272["m_srcTableName"] = "saisun";
$proto272["m_expr"]=$obj;
$proto272["m_alias"] = "";
$obj = new SQLFieldListItem($proto272);

$proto0["m_fieldlist"][]=$obj;
						$proto274=array();
			$obj = new SQLField(array(
	"m_strName" => "satei_error",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto274["m_sql"] = "`shouhin`.`satei_error`";
$proto274["m_srcTableName"] = "saisun";
$proto274["m_expr"]=$obj;
$proto274["m_alias"] = "";
$obj = new SQLFieldListItem($proto274);

$proto0["m_fieldlist"][]=$obj;
						$proto276=array();
			$obj = new SQLField(array(
	"m_strName" => "serial_number_for_storage",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto276["m_sql"] = "`shouhin`.`serial_number_for_storage`";
$proto276["m_srcTableName"] = "saisun";
$proto276["m_expr"]=$obj;
$proto276["m_alias"] = "";
$obj = new SQLFieldListItem($proto276);

$proto0["m_fieldlist"][]=$obj;
						$proto278=array();
			$obj = new SQLField(array(
	"m_strName" => "official_url",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto278["m_sql"] = "`shouhin`.`official_url`";
$proto278["m_srcTableName"] = "saisun";
$proto278["m_expr"]=$obj;
$proto278["m_alias"] = "";
$obj = new SQLFieldListItem($proto278);

$proto0["m_fieldlist"][]=$obj;
						$proto280=array();
			$obj = new SQLField(array(
	"m_strName" => "other_cost",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto280["m_sql"] = "`shouhin`.`other_cost`";
$proto280["m_srcTableName"] = "saisun";
$proto280["m_expr"]=$obj;
$proto280["m_alias"] = "";
$obj = new SQLFieldListItem($proto280);

$proto0["m_fieldlist"][]=$obj;
						$proto282=array();
			$obj = new SQLField(array(
	"m_strName" => "identification_cost",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto282["m_sql"] = "`shouhin`.`identification_cost`";
$proto282["m_srcTableName"] = "saisun";
$proto282["m_expr"]=$obj;
$proto282["m_alias"] = "";
$obj = new SQLFieldListItem($proto282);

$proto0["m_fieldlist"][]=$obj;
						$proto284=array();
			$obj = new SQLField(array(
	"m_strName" => "cost",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
));

$proto284["m_sql"] = "`shouhin`.`cost`";
$proto284["m_srcTableName"] = "saisun";
$proto284["m_expr"]=$obj;
$proto284["m_alias"] = "";
$obj = new SQLFieldListItem($proto284);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto286=array();
$proto286["m_link"] = "SQLL_MAIN";
			$proto287=array();
$proto287["m_strName"] = "shouhin";
$proto287["m_srcTableName"] = "saisun";
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
$proto286["m_srcTableName"] = "saisun";
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
$proto291["m_srcTableName"] = "saisun";
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
$proto290["m_srcTableName"] = "saisun";
$proto292=array();
$proto292["m_sql"] = "`shouhin`.`ecc_id` = `Eoc`.`ecc_id`";
$proto292["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "ecc_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisun"
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
	"m_srcTableName" => "saisun"
));

$proto294["m_column"]=$obj;
$proto294["m_bAsc"] = 0;
$proto294["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto294);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="saisun";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_saisun = createSqlQuery_saisun();


	
		;

																																																																																																																																					

$tdatasaisun[".sqlquery"] = $queryData_saisun;

include_once(getabspath("include/saisun_events.php"));
$tableEvents["saisun"] = new eventclass_saisun;
$tdatasaisun[".hasEvents"] = true;

?>