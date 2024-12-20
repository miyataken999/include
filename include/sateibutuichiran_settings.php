<?php
require_once(getabspath("classes/cipherer.php"));




$tdatasateibutuichiran = array();
	$tdatasateibutuichiran[".truncateText"] = true;
	$tdatasateibutuichiran[".NumberOfChars"] = 80;
	$tdatasateibutuichiran[".ShortName"] = "sateibutuichiran";
	$tdatasateibutuichiran[".OwnerID"] = "";
	$tdatasateibutuichiran[".OriginalTable"] = "shouhin";

//	field labels
$fieldLabelssateibutuichiran = array();
$fieldToolTipssateibutuichiran = array();
$pageTitlessateibutuichiran = array();
$placeHolderssateibutuichiran = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelssateibutuichiran["Japanese"] = array();
	$fieldToolTipssateibutuichiran["Japanese"] = array();
	$placeHolderssateibutuichiran["Japanese"] = array();
	$pageTitlessateibutuichiran["Japanese"] = array();
	$fieldLabelssateibutuichiran["Japanese"]["product_id"] = "SEQ";
	$fieldToolTipssateibutuichiran["Japanese"]["product_id"] = "";
	$placeHolderssateibutuichiran["Japanese"]["product_id"] = "";
	$fieldLabelssateibutuichiran["Japanese"]["category_id"] = "大カテゴリー";
	$fieldToolTipssateibutuichiran["Japanese"]["category_id"] = "";
	$placeHolderssateibutuichiran["Japanese"]["category_id"] = "";
	$fieldLabelssateibutuichiran["Japanese"]["goods_title"] = "アイテム名";
	$fieldToolTipssateibutuichiran["Japanese"]["goods_title"] = "";
	$placeHolderssateibutuichiran["Japanese"]["goods_title"] = "";
	$fieldLabelssateibutuichiran["Japanese"]["title"] = "タイトル";
	$fieldToolTipssateibutuichiran["Japanese"]["title"] = "";
	$placeHolderssateibutuichiran["Japanese"]["title"] = "";
	$fieldLabelssateibutuichiran["Japanese"]["sub_category_id1"] = "中カテゴリー";
	$fieldToolTipssateibutuichiran["Japanese"]["sub_category_id1"] = "";
	$placeHolderssateibutuichiran["Japanese"]["sub_category_id1"] = "";
	$fieldLabelssateibutuichiran["Japanese"]["ecc_id"] = "Ecc Id";
	$fieldToolTipssateibutuichiran["Japanese"]["ecc_id"] = "";
	$placeHolderssateibutuichiran["Japanese"]["ecc_id"] = "";
	$fieldLabelssateibutuichiran["Japanese"]["price"] = "買取額";
	$fieldToolTipssateibutuichiran["Japanese"]["price"] = "";
	$placeHolderssateibutuichiran["Japanese"]["price"] = "";
	$fieldLabelssateibutuichiran["Japanese"]["yahoo"] = "Yahoo";
	$fieldToolTipssateibutuichiran["Japanese"]["yahoo"] = "";
	$placeHolderssateibutuichiran["Japanese"]["yahoo"] = "";
	$fieldLabelssateibutuichiran["Japanese"]["remark"] = "宝飾備考";
	$fieldToolTipssateibutuichiran["Japanese"]["remark"] = "";
	$placeHolderssateibutuichiran["Japanese"]["remark"] = "";
	$fieldLabelssateibutuichiran["Japanese"]["sales_price"] = "販売額";
	$fieldToolTipssateibutuichiran["Japanese"]["sales_price"] = "";
	$placeHolderssateibutuichiran["Japanese"]["sales_price"] = "";
	$fieldLabelssateibutuichiran["Japanese"]["description"] = "メモ";
	$fieldToolTipssateibutuichiran["Japanese"]["description"] = "";
	$placeHolderssateibutuichiran["Japanese"]["description"] = "";
	$fieldLabelssateibutuichiran["Japanese"]["status"] = "商品状態";
	$fieldToolTipssateibutuichiran["Japanese"]["status"] = "";
	$placeHolderssateibutuichiran["Japanese"]["status"] = "";
	$fieldLabelssateibutuichiran["Japanese"]["product_num"] = "HPブランドカテ";
	$fieldToolTipssateibutuichiran["Japanese"]["product_num"] = "";
	$placeHolderssateibutuichiran["Japanese"]["product_num"] = "";
	$fieldLabelssateibutuichiran["Japanese"]["updated_at"] = "更新日";
	$fieldToolTipssateibutuichiran["Japanese"]["updated_at"] = "";
	$placeHolderssateibutuichiran["Japanese"]["updated_at"] = "";
	$fieldLabelssateibutuichiran["Japanese"]["yahoo_size"] = "サイズ";
	$fieldToolTipssateibutuichiran["Japanese"]["yahoo_size"] = "";
	$placeHolderssateibutuichiran["Japanese"]["yahoo_size"] = "";
	$fieldLabelssateibutuichiran["Japanese"]["yahoo_title"] = "Yタイトル";
	$fieldToolTipssateibutuichiran["Japanese"]["yahoo_title"] = "";
	$placeHolderssateibutuichiran["Japanese"]["yahoo_title"] = "";
	$fieldLabelssateibutuichiran["Japanese"]["yahoo_junle"] = "ブランドジャンル";
	$fieldToolTipssateibutuichiran["Japanese"]["yahoo_junle"] = "";
	$placeHolderssateibutuichiran["Japanese"]["yahoo_junle"] = "";
	$fieldLabelssateibutuichiran["Japanese"]["yahoo_sankou_uwadai"] = "参考上代";
	$fieldToolTipssateibutuichiran["Japanese"]["yahoo_sankou_uwadai"] = "";
	$placeHolderssateibutuichiran["Japanese"]["yahoo_sankou_uwadai"] = "";
	$fieldLabelssateibutuichiran["Japanese"]["yahoo_sozai"] = "素材";
	$fieldToolTipssateibutuichiran["Japanese"]["yahoo_sozai"] = "";
	$placeHolderssateibutuichiran["Japanese"]["yahoo_sozai"] = "";
	$fieldLabelssateibutuichiran["Japanese"]["yahoo_color"] = "カラー";
	$fieldToolTipssateibutuichiran["Japanese"]["yahoo_color"] = "";
	$placeHolderssateibutuichiran["Japanese"]["yahoo_color"] = "";
	$fieldLabelssateibutuichiran["Japanese"]["yahoo_kataban"] = "型番";
	$fieldToolTipssateibutuichiran["Japanese"]["yahoo_kataban"] = "";
	$placeHolderssateibutuichiran["Japanese"]["yahoo_kataban"] = "";
	$fieldLabelssateibutuichiran["Japanese"]["yahoo_condition1"] = "コンディションの詳細";
	$fieldToolTipssateibutuichiran["Japanese"]["yahoo_condition1"] = "";
	$placeHolderssateibutuichiran["Japanese"]["yahoo_condition1"] = "";
	$fieldLabelssateibutuichiran["Japanese"]["yahoo_condition2"] = "コンディション";
	$fieldToolTipssateibutuichiran["Japanese"]["yahoo_condition2"] = "";
	$placeHolderssateibutuichiran["Japanese"]["yahoo_condition2"] = "";
	$fieldLabelssateibutuichiran["Japanese"]["yahoo_fuzokuhin"] = "付属品";
	$fieldToolTipssateibutuichiran["Japanese"]["yahoo_fuzokuhin"] = "";
	$placeHolderssateibutuichiran["Japanese"]["yahoo_fuzokuhin"] = "";
	$fieldLabelssateibutuichiran["Japanese"]["yahoo_sinaban"] = "品番";
	$fieldToolTipssateibutuichiran["Japanese"]["yahoo_sinaban"] = "";
	$placeHolderssateibutuichiran["Japanese"]["yahoo_sinaban"] = "";
	$fieldLabelssateibutuichiran["Japanese"]["yahoo_saisun_sha"] = "Yahoo Saisun Sha";
	$fieldToolTipssateibutuichiran["Japanese"]["yahoo_saisun_sha"] = "";
	$placeHolderssateibutuichiran["Japanese"]["yahoo_saisun_sha"] = "";
	$fieldLabelssateibutuichiran["Japanese"]["yahoo_sex"] = "性別";
	$fieldToolTipssateibutuichiran["Japanese"]["yahoo_sex"] = "";
	$placeHolderssateibutuichiran["Japanese"]["yahoo_sex"] = "";
	$fieldLabelssateibutuichiran["Japanese"]["box_id"] = "Box Id";
	$fieldToolTipssateibutuichiran["Japanese"]["box_id"] = "";
	$placeHolderssateibutuichiran["Japanese"]["box_id"] = "";
	$fieldLabelssateibutuichiran["Japanese"]["nyuukin_price"] = "Nyuukin Price";
	$fieldToolTipssateibutuichiran["Japanese"]["nyuukin_price"] = "";
	$placeHolderssateibutuichiran["Japanese"]["nyuukin_price"] = "";
	$fieldLabelssateibutuichiran["Japanese"]["updated_by"] = "Updated By";
	$fieldToolTipssateibutuichiran["Japanese"]["updated_by"] = "";
	$placeHolderssateibutuichiran["Japanese"]["updated_by"] = "";
	$fieldLabelssateibutuichiran["Japanese"]["raku_title"] = "楽天タイトル";
	$fieldToolTipssateibutuichiran["Japanese"]["raku_title"] = "";
	$placeHolderssateibutuichiran["Japanese"]["raku_title"] = "";
	$fieldLabelssateibutuichiran["Japanese"]["raku_hyoujisaki_category2"] = "楽ジャン（店舗内）2";
	$fieldToolTipssateibutuichiran["Japanese"]["raku_hyoujisaki_category2"] = "";
	$placeHolderssateibutuichiran["Japanese"]["raku_hyoujisaki_category2"] = "";
	$fieldLabelssateibutuichiran["Japanese"]["raku_hyoujisaki_category"] = "楽ジャン（店舗内）1";
	$fieldToolTipssateibutuichiran["Japanese"]["raku_hyoujisaki_category"] = "";
	$placeHolderssateibutuichiran["Japanese"]["raku_hyoujisaki_category"] = "";
	$fieldLabelssateibutuichiran["Japanese"]["raku_hyoujisaki_category3"] = "楽ジャン（店舗内）3";
	$fieldToolTipssateibutuichiran["Japanese"]["raku_hyoujisaki_category3"] = "";
	$placeHolderssateibutuichiran["Japanese"]["raku_hyoujisaki_category3"] = "";
	$fieldLabelssateibutuichiran["Japanese"]["timesta"] = "Timesta";
	$fieldToolTipssateibutuichiran["Japanese"]["timesta"] = "";
	$placeHolderssateibutuichiran["Japanese"]["timesta"] = "";
	$fieldLabelssateibutuichiran["Japanese"]["saisun_start"] = "Saisun Start";
	$fieldToolTipssateibutuichiran["Japanese"]["saisun_start"] = "";
	$placeHolderssateibutuichiran["Japanese"]["saisun_start"] = "";
	$fieldLabelssateibutuichiran["Japanese"]["saisun_end"] = "Saisun End";
	$fieldToolTipssateibutuichiran["Japanese"]["saisun_end"] = "";
	$placeHolderssateibutuichiran["Japanese"]["saisun_end"] = "";
	$fieldLabelssateibutuichiran["Japanese"]["label_output_flag"] = "ラベル出力";
	$fieldToolTipssateibutuichiran["Japanese"]["label_output_flag"] = "";
	$placeHolderssateibutuichiran["Japanese"]["label_output_flag"] = "";
	$fieldLabelssateibutuichiran["Japanese"]["season"] = "季節";
	$fieldToolTipssateibutuichiran["Japanese"]["season"] = "";
	$placeHolderssateibutuichiran["Japanese"]["season"] = "";
	$fieldLabelssateibutuichiran["Japanese"]["kanryou_henbi"] = "Kanryou Henbi";
	$fieldToolTipssateibutuichiran["Japanese"]["kanryou_henbi"] = "";
	$placeHolderssateibutuichiran["Japanese"]["kanryou_henbi"] = "";
	$fieldLabelssateibutuichiran["Japanese"]["box_sort"] = "Box Sort";
	$fieldToolTipssateibutuichiran["Japanese"]["box_sort"] = "";
	$placeHolderssateibutuichiran["Japanese"]["box_sort"] = "";
	$fieldLabelssateibutuichiran["Japanese"]["satei_by"] = "査定人";
	$fieldToolTipssateibutuichiran["Japanese"]["satei_by"] = "";
	$placeHolderssateibutuichiran["Japanese"]["satei_by"] = "";
	$fieldLabelssateibutuichiran["Japanese"]["kaitori_by"] = "Kaitori By";
	$fieldToolTipssateibutuichiran["Japanese"]["kaitori_by"] = "";
	$placeHolderssateibutuichiran["Japanese"]["kaitori_by"] = "";
	$fieldLabelssateibutuichiran["Japanese"]["comment"] = "コメント";
	$fieldToolTipssateibutuichiran["Japanese"]["comment"] = "";
	$placeHolderssateibutuichiran["Japanese"]["comment"] = "";
	$fieldLabelssateibutuichiran["Japanese"]["satei_hi"] = "査定日";
	$fieldToolTipssateibutuichiran["Japanese"]["satei_hi"] = "";
	$placeHolderssateibutuichiran["Japanese"]["satei_hi"] = "";
	$fieldLabelssateibutuichiran["Japanese"]["kaitory_hi"] = "Kaitory Hi";
	$fieldToolTipssateibutuichiran["Japanese"]["kaitory_hi"] = "";
	$placeHolderssateibutuichiran["Japanese"]["kaitory_hi"] = "";
	$fieldLabelssateibutuichiran["Japanese"]["REG_PHOTOGRAPHER"] = "REG PHOTOGRAPHER";
	$fieldToolTipssateibutuichiran["Japanese"]["REG_PHOTOGRAPHER"] = "";
	$placeHolderssateibutuichiran["Japanese"]["REG_PHOTOGRAPHER"] = "";
	$fieldLabelssateibutuichiran["Japanese"]["REG_AUTHOR"] = "REG AUTHOR";
	$fieldToolTipssateibutuichiran["Japanese"]["REG_AUTHOR"] = "";
	$placeHolderssateibutuichiran["Japanese"]["REG_AUTHOR"] = "";
	$fieldLabelssateibutuichiran["Japanese"]["REG_PACKINGS"] = "REG PACKINGS";
	$fieldToolTipssateibutuichiran["Japanese"]["REG_PACKINGS"] = "";
	$placeHolderssateibutuichiran["Japanese"]["REG_PACKINGS"] = "";
	$fieldLabelssateibutuichiran["Japanese"]["REG_KAKOU_DATE"] = "REG KAKOU DATE";
	$fieldToolTipssateibutuichiran["Japanese"]["REG_KAKOU_DATE"] = "";
	$placeHolderssateibutuichiran["Japanese"]["REG_KAKOU_DATE"] = "";
	$fieldLabelssateibutuichiran["Japanese"]["REG_KAKOU"] = "REG KAKOU";
	$fieldToolTipssateibutuichiran["Japanese"]["REG_KAKOU"] = "";
	$placeHolderssateibutuichiran["Japanese"]["REG_KAKOU"] = "";
	$fieldLabelssateibutuichiran["Japanese"]["REG_EXHIBITOR"] = "REG EXHIBITOR";
	$fieldToolTipssateibutuichiran["Japanese"]["REG_EXHIBITOR"] = "";
	$placeHolderssateibutuichiran["Japanese"]["REG_EXHIBITOR"] = "";
	$fieldLabelssateibutuichiran["Japanese"]["REG_PHOTOGRAPHER_DATE"] = "REG PHOTOGRAPHER DATE";
	$fieldToolTipssateibutuichiran["Japanese"]["REG_PHOTOGRAPHER_DATE"] = "";
	$placeHolderssateibutuichiran["Japanese"]["REG_PHOTOGRAPHER_DATE"] = "";
	$fieldLabelssateibutuichiran["Japanese"]["DT_PACKING_DATE"] = "DT PACKING DATE";
	$fieldToolTipssateibutuichiran["Japanese"]["DT_PACKING_DATE"] = "";
	$placeHolderssateibutuichiran["Japanese"]["DT_PACKING_DATE"] = "";
	$fieldLabelssateibutuichiran["Japanese"]["DT_UP_DATE"] = "DT UP DATE";
	$fieldToolTipssateibutuichiran["Japanese"]["DT_UP_DATE"] = "";
	$placeHolderssateibutuichiran["Japanese"]["DT_UP_DATE"] = "";
	$fieldLabelssateibutuichiran["Japanese"]["AWAZU_DATE"] = "AWAZU DATE";
	$fieldToolTipssateibutuichiran["Japanese"]["AWAZU_DATE"] = "";
	$placeHolderssateibutuichiran["Japanese"]["AWAZU_DATE"] = "";
	$fieldLabelssateibutuichiran["Japanese"]["AWAZU_NIN"] = "AWAZU NIN";
	$fieldToolTipssateibutuichiran["Japanese"]["AWAZU_NIN"] = "";
	$placeHolderssateibutuichiran["Japanese"]["AWAZU_NIN"] = "";
	$fieldLabelssateibutuichiran["Japanese"]["sabun_date"] = "Sabun Date";
	$fieldToolTipssateibutuichiran["Japanese"]["sabun_date"] = "";
	$placeHolderssateibutuichiran["Japanese"]["sabun_date"] = "";
	$fieldLabelssateibutuichiran["Japanese"]["browseid"] = "Browseid";
	$fieldToolTipssateibutuichiran["Japanese"]["browseid"] = "";
	$placeHolderssateibutuichiran["Japanese"]["browseid"] = "";
	$fieldLabelssateibutuichiran["Japanese"]["browsenode"] = "Browsenode";
	$fieldToolTipssateibutuichiran["Japanese"]["browsenode"] = "";
	$placeHolderssateibutuichiran["Japanese"]["browsenode"] = "";
	$fieldLabelssateibutuichiran["Japanese"]["gold_property"] = "金性";
	$fieldToolTipssateibutuichiran["Japanese"]["gold_property"] = "";
	$placeHolderssateibutuichiran["Japanese"]["gold_property"] = "";
	$fieldLabelssateibutuichiran["Japanese"]["ichiba_title"] = "帳票用品名";
	$fieldToolTipssateibutuichiran["Japanese"]["ichiba_title"] = "";
	$placeHolderssateibutuichiran["Japanese"]["ichiba_title"] = "";
	$fieldLabelssateibutuichiran["Japanese"]["Gram"] = "金性グラム";
	$fieldToolTipssateibutuichiran["Japanese"]["Gram"] = "";
	$placeHolderssateibutuichiran["Japanese"]["Gram"] = "";
	$fieldLabelssateibutuichiran["Japanese"]["Parent_stone"] = "親石";
	$fieldToolTipssateibutuichiran["Japanese"]["Parent_stone"] = "";
	$placeHolderssateibutuichiran["Japanese"]["Parent_stone"] = "";
	$fieldLabelssateibutuichiran["Japanese"]["Aside_stone"] = "脇石";
	$fieldToolTipssateibutuichiran["Japanese"]["Aside_stone"] = "";
	$placeHolderssateibutuichiran["Japanese"]["Aside_stone"] = "";
	$fieldLabelssateibutuichiran["Japanese"]["Appraiser"] = "鑑定機関";
	$fieldToolTipssateibutuichiran["Japanese"]["Appraiser"] = "";
	$placeHolderssateibutuichiran["Japanese"]["Appraiser"] = "";
	$fieldLabelssateibutuichiran["Japanese"]["Remarks"] = "宝飾備考";
	$fieldToolTipssateibutuichiran["Japanese"]["Remarks"] = "";
	$placeHolderssateibutuichiran["Japanese"]["Remarks"] = "";
	$fieldLabelssateibutuichiran["Japanese"]["Destination_selling"] = "Destination Selling";
	$fieldToolTipssateibutuichiran["Japanese"]["Destination_selling"] = "";
	$placeHolderssateibutuichiran["Japanese"]["Destination_selling"] = "";
	$fieldLabelssateibutuichiran["Japanese"]["Finish"] = "Finish";
	$fieldToolTipssateibutuichiran["Japanese"]["Finish"] = "";
	$placeHolderssateibutuichiran["Japanese"]["Finish"] = "";
	$fieldLabelssateibutuichiran["Japanese"]["Discrimination"] = "Discrimination";
	$fieldToolTipssateibutuichiran["Japanese"]["Discrimination"] = "";
	$placeHolderssateibutuichiran["Japanese"]["Discrimination"] = "";
	$fieldLabelssateibutuichiran["Japanese"]["accessories"] = "付属品";
	$fieldToolTipssateibutuichiran["Japanese"]["accessories"] = "";
	$placeHolderssateibutuichiran["Japanese"]["accessories"] = "";
	$fieldLabelssateibutuichiran["Japanese"]["priority"] = "優先";
	$fieldToolTipssateibutuichiran["Japanese"]["priority"] = "";
	$placeHolderssateibutuichiran["Japanese"]["priority"] = "";
	$fieldLabelssateibutuichiran["Japanese"]["A_storage"] = "A保管";
	$fieldToolTipssateibutuichiran["Japanese"]["A_storage"] = "";
	$placeHolderssateibutuichiran["Japanese"]["A_storage"] = "";
	$fieldLabelssateibutuichiran["Japanese"]["price_per_gram"] = "金性単価";
	$fieldToolTipssateibutuichiran["Japanese"]["price_per_gram"] = "";
	$placeHolderssateibutuichiran["Japanese"]["price_per_gram"] = "";
	$fieldLabelssateibutuichiran["Japanese"]["price_per_parent_stone"] = "親石単価";
	$fieldToolTipssateibutuichiran["Japanese"]["price_per_parent_stone"] = "";
	$placeHolderssateibutuichiran["Japanese"]["price_per_parent_stone"] = "";
	$fieldLabelssateibutuichiran["Japanese"]["price_per_aside_stone"] = "脇石単価";
	$fieldToolTipssateibutuichiran["Japanese"]["price_per_aside_stone"] = "";
	$placeHolderssateibutuichiran["Japanese"]["price_per_aside_stone"] = "";
	$fieldLabelssateibutuichiran["Japanese"]["price_secret"] = "買取額隠語";
	$fieldToolTipssateibutuichiran["Japanese"]["price_secret"] = "";
	$placeHolderssateibutuichiran["Japanese"]["price_secret"] = "";
	$fieldLabelssateibutuichiran["Japanese"]["sales_price_secret"] = "Sales Price Secret";
	$fieldToolTipssateibutuichiran["Japanese"]["sales_price_secret"] = "";
	$placeHolderssateibutuichiran["Japanese"]["sales_price_secret"] = "";
	$fieldLabelssateibutuichiran["Japanese"]["eq"] = "Eq";
	$fieldToolTipssateibutuichiran["Japanese"]["eq"] = "";
	$placeHolderssateibutuichiran["Japanese"]["eq"] = "";
	$fieldLabelssateibutuichiran["Japanese"]["en"] = "En";
	$fieldToolTipssateibutuichiran["Japanese"]["en"] = "";
	$placeHolderssateibutuichiran["Japanese"]["en"] = "";
	$fieldLabelssateibutuichiran["Japanese"]["line"] = "ライン";
	$fieldToolTipssateibutuichiran["Japanese"]["line"] = "";
	$placeHolderssateibutuichiran["Japanese"]["line"] = "";
	$fieldLabelssateibutuichiran["Japanese"]["item_name"] = "アイテム名";
	$fieldToolTipssateibutuichiran["Japanese"]["item_name"] = "";
	$placeHolderssateibutuichiran["Japanese"]["item_name"] = "";
	$fieldLabelssateibutuichiran["Japanese"]["handle"] = "Handle";
	$fieldToolTipssateibutuichiran["Japanese"]["handle"] = "";
	$placeHolderssateibutuichiran["Japanese"]["handle"] = "";
	$fieldLabelssateibutuichiran["Japanese"]["yahoo_color_id"] = "Yahoo Color Id";
	$fieldToolTipssateibutuichiran["Japanese"]["yahoo_color_id"] = "";
	$placeHolderssateibutuichiran["Japanese"]["yahoo_color_id"] = "";
	$fieldLabelssateibutuichiran["Japanese"]["raku_hyoujisaki_category4"] = "楽ジャン（店舗内）4";
	$fieldToolTipssateibutuichiran["Japanese"]["raku_hyoujisaki_category4"] = "";
	$placeHolderssateibutuichiran["Japanese"]["raku_hyoujisaki_category4"] = "";
	$fieldLabelssateibutuichiran["Japanese"]["raku_hyoujisaki_category5"] = "楽ジャン（店舗内）5";
	$fieldToolTipssateibutuichiran["Japanese"]["raku_hyoujisaki_category5"] = "";
	$placeHolderssateibutuichiran["Japanese"]["raku_hyoujisaki_category5"] = "";
	$fieldLabelssateibutuichiran["Japanese"]["raku_dir_1"] = "Raku Dir 1";
	$fieldToolTipssateibutuichiran["Japanese"]["raku_dir_1"] = "";
	$placeHolderssateibutuichiran["Japanese"]["raku_dir_1"] = "";
	$fieldLabelssateibutuichiran["Japanese"]["raku_dir_2"] = "Raku Dir 2";
	$fieldToolTipssateibutuichiran["Japanese"]["raku_dir_2"] = "";
	$placeHolderssateibutuichiran["Japanese"]["raku_dir_2"] = "";
	$fieldLabelssateibutuichiran["Japanese"]["raku_dir_3"] = "Raku Dir 3";
	$fieldToolTipssateibutuichiran["Japanese"]["raku_dir_3"] = "";
	$placeHolderssateibutuichiran["Japanese"]["raku_dir_3"] = "";
	$fieldLabelssateibutuichiran["Japanese"]["raku_dir_4"] = "Raku Dir 4";
	$fieldToolTipssateibutuichiran["Japanese"]["raku_dir_4"] = "";
	$placeHolderssateibutuichiran["Japanese"]["raku_dir_4"] = "";
	$fieldLabelssateibutuichiran["Japanese"]["raku_dir_5"] = "Raku Dir 5";
	$fieldToolTipssateibutuichiran["Japanese"]["raku_dir_5"] = "";
	$placeHolderssateibutuichiran["Japanese"]["raku_dir_5"] = "";
	$fieldLabelssateibutuichiran["Japanese"]["raku_dir_result"] = "Raku Dir Result";
	$fieldToolTipssateibutuichiran["Japanese"]["raku_dir_result"] = "";
	$placeHolderssateibutuichiran["Japanese"]["raku_dir_result"] = "";
	$fieldLabelssateibutuichiran["Japanese"]["raku_tag_result"] = "楽天タグID　Result";
	$fieldToolTipssateibutuichiran["Japanese"]["raku_tag_result"] = "";
	$placeHolderssateibutuichiran["Japanese"]["raku_tag_result"] = "";
	$fieldLabelssateibutuichiran["Japanese"]["serial_number"] = "製造番号";
	$fieldToolTipssateibutuichiran["Japanese"]["serial_number"] = "";
	$placeHolderssateibutuichiran["Japanese"]["serial_number"] = "";
	$fieldLabelssateibutuichiran["Japanese"]["Exhibition_Date"] = "Exhibition Date";
	$fieldToolTipssateibutuichiran["Japanese"]["Exhibition_Date"] = "";
	$placeHolderssateibutuichiran["Japanese"]["Exhibition_Date"] = "";
	$fieldLabelssateibutuichiran["Japanese"]["search_keyword"] = "ストア内検索キーワード";
	$fieldToolTipssateibutuichiran["Japanese"]["search_keyword"] = "";
	$placeHolderssateibutuichiran["Japanese"]["search_keyword"] = "";
	$fieldLabelssateibutuichiran["Japanese"]["stamp"] = "刻印";
	$fieldToolTipssateibutuichiran["Japanese"]["stamp"] = "";
	$placeHolderssateibutuichiran["Japanese"]["stamp"] = "";
	$fieldLabelssateibutuichiran["Japanese"]["motif"] = "モチーフ";
	$fieldToolTipssateibutuichiran["Japanese"]["motif"] = "";
	$placeHolderssateibutuichiran["Japanese"]["motif"] = "";
	$fieldLabelssateibutuichiran["Japanese"]["Setting"] = "セッティング";
	$fieldToolTipssateibutuichiran["Japanese"]["Setting"] = "";
	$placeHolderssateibutuichiran["Japanese"]["Setting"] = "";
	$fieldLabelssateibutuichiran["Japanese"]["processing"] = "処理";
	$fieldToolTipssateibutuichiran["Japanese"]["processing"] = "";
	$placeHolderssateibutuichiran["Japanese"]["processing"] = "";
	$fieldLabelssateibutuichiran["Japanese"]["Sleeve_Length"] = "袖丈";
	$fieldToolTipssateibutuichiran["Japanese"]["Sleeve_Length"] = "";
	$placeHolderssateibutuichiran["Japanese"]["Sleeve_Length"] = "";
	$fieldLabelssateibutuichiran["Japanese"]["length"] = "丈";
	$fieldToolTipssateibutuichiran["Japanese"]["length"] = "";
	$placeHolderssateibutuichiran["Japanese"]["length"] = "";
	$fieldLabelssateibutuichiran["Japanese"]["Ring_size"] = "Ring Size";
	$fieldToolTipssateibutuichiran["Japanese"]["Ring_size"] = "";
	$placeHolderssateibutuichiran["Japanese"]["Ring_size"] = "";
	$fieldLabelssateibutuichiran["Japanese"]["price_for_site"] = "Price For Site";
	$fieldToolTipssateibutuichiran["Japanese"]["price_for_site"] = "";
	$placeHolderssateibutuichiran["Japanese"]["price_for_site"] = "";
	$fieldLabelssateibutuichiran["Japanese"]["yahoo_category_id"] = "Yahoo Category Id";
	$fieldToolTipssateibutuichiran["Japanese"]["yahoo_category_id"] = "";
	$placeHolderssateibutuichiran["Japanese"]["yahoo_category_id"] = "";
	$fieldLabelssateibutuichiran["Japanese"]["Qty"] = "Qty";
	$fieldToolTipssateibutuichiran["Japanese"]["Qty"] = "";
	$placeHolderssateibutuichiran["Japanese"]["Qty"] = "";
	$fieldLabelssateibutuichiran["Japanese"]["sales_period"] = "Sales Period";
	$fieldToolTipssateibutuichiran["Japanese"]["sales_period"] = "";
	$placeHolderssateibutuichiran["Japanese"]["sales_period"] = "";
	$fieldLabelssateibutuichiran["Japanese"]["starting_price"] = "Starting Price";
	$fieldToolTipssateibutuichiran["Japanese"]["starting_price"] = "";
	$placeHolderssateibutuichiran["Japanese"]["starting_price"] = "";
	$fieldLabelssateibutuichiran["Japanese"]["ecc_seq"] = "顧客番号";
	$fieldToolTipssateibutuichiran["Japanese"]["ecc_seq"] = "";
	$placeHolderssateibutuichiran["Japanese"]["ecc_seq"] = "";
	if (count($fieldToolTipssateibutuichiran["Japanese"]))
		$tdatasateibutuichiran[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelssateibutuichiran[""] = array();
	$fieldToolTipssateibutuichiran[""] = array();
	$placeHolderssateibutuichiran[""] = array();
	$pageTitlessateibutuichiran[""] = array();
	$fieldLabelssateibutuichiran[""]["product_id"] = "Product Id";
	$fieldToolTipssateibutuichiran[""]["product_id"] = "";
	$placeHolderssateibutuichiran[""]["product_id"] = "";
	$fieldLabelssateibutuichiran[""]["category_id"] = "Category Id";
	$fieldToolTipssateibutuichiran[""]["category_id"] = "";
	$placeHolderssateibutuichiran[""]["category_id"] = "";
	$fieldLabelssateibutuichiran[""]["goods_title"] = "Goods Title";
	$fieldToolTipssateibutuichiran[""]["goods_title"] = "";
	$placeHolderssateibutuichiran[""]["goods_title"] = "";
	$fieldLabelssateibutuichiran[""]["title"] = "Title";
	$fieldToolTipssateibutuichiran[""]["title"] = "";
	$placeHolderssateibutuichiran[""]["title"] = "";
	$fieldLabelssateibutuichiran[""]["sub_category_id1"] = "Sub Category Id1";
	$fieldToolTipssateibutuichiran[""]["sub_category_id1"] = "";
	$placeHolderssateibutuichiran[""]["sub_category_id1"] = "";
	$fieldLabelssateibutuichiran[""]["ecc_id"] = "Ecc Id";
	$fieldToolTipssateibutuichiran[""]["ecc_id"] = "";
	$placeHolderssateibutuichiran[""]["ecc_id"] = "";
	$fieldLabelssateibutuichiran[""]["price"] = "Price";
	$fieldToolTipssateibutuichiran[""]["price"] = "";
	$placeHolderssateibutuichiran[""]["price"] = "";
	$fieldLabelssateibutuichiran[""]["yahoo"] = "Yahoo";
	$fieldToolTipssateibutuichiran[""]["yahoo"] = "";
	$placeHolderssateibutuichiran[""]["yahoo"] = "";
	$fieldLabelssateibutuichiran[""]["remark"] = "Remark";
	$fieldToolTipssateibutuichiran[""]["remark"] = "";
	$placeHolderssateibutuichiran[""]["remark"] = "";
	$fieldLabelssateibutuichiran[""]["sales_price"] = "Sales Price";
	$fieldToolTipssateibutuichiran[""]["sales_price"] = "";
	$placeHolderssateibutuichiran[""]["sales_price"] = "";
	$fieldLabelssateibutuichiran[""]["description"] = "Description";
	$fieldToolTipssateibutuichiran[""]["description"] = "";
	$placeHolderssateibutuichiran[""]["description"] = "";
	$fieldLabelssateibutuichiran[""]["status"] = "Status";
	$fieldToolTipssateibutuichiran[""]["status"] = "";
	$placeHolderssateibutuichiran[""]["status"] = "";
	$fieldLabelssateibutuichiran[""]["product_num"] = "Product Num";
	$fieldToolTipssateibutuichiran[""]["product_num"] = "";
	$placeHolderssateibutuichiran[""]["product_num"] = "";
	$fieldLabelssateibutuichiran[""]["updated_at"] = "Updated At";
	$fieldToolTipssateibutuichiran[""]["updated_at"] = "";
	$placeHolderssateibutuichiran[""]["updated_at"] = "";
	$fieldLabelssateibutuichiran[""]["yahoo_size"] = "Yahoo Size";
	$fieldToolTipssateibutuichiran[""]["yahoo_size"] = "";
	$placeHolderssateibutuichiran[""]["yahoo_size"] = "";
	$fieldLabelssateibutuichiran[""]["yahoo_title"] = "Yahoo Title";
	$fieldToolTipssateibutuichiran[""]["yahoo_title"] = "";
	$placeHolderssateibutuichiran[""]["yahoo_title"] = "";
	$fieldLabelssateibutuichiran[""]["yahoo_junle"] = "Yahoo Junle";
	$fieldToolTipssateibutuichiran[""]["yahoo_junle"] = "";
	$placeHolderssateibutuichiran[""]["yahoo_junle"] = "";
	$fieldLabelssateibutuichiran[""]["yahoo_sankou_uwadai"] = "Yahoo Sankou Uwadai";
	$fieldToolTipssateibutuichiran[""]["yahoo_sankou_uwadai"] = "";
	$placeHolderssateibutuichiran[""]["yahoo_sankou_uwadai"] = "";
	$fieldLabelssateibutuichiran[""]["yahoo_sozai"] = "Yahoo Sozai";
	$fieldToolTipssateibutuichiran[""]["yahoo_sozai"] = "";
	$placeHolderssateibutuichiran[""]["yahoo_sozai"] = "";
	$fieldLabelssateibutuichiran[""]["yahoo_color"] = "Yahoo Color";
	$fieldToolTipssateibutuichiran[""]["yahoo_color"] = "";
	$placeHolderssateibutuichiran[""]["yahoo_color"] = "";
	$fieldLabelssateibutuichiran[""]["yahoo_kataban"] = "Yahoo Kataban";
	$fieldToolTipssateibutuichiran[""]["yahoo_kataban"] = "";
	$placeHolderssateibutuichiran[""]["yahoo_kataban"] = "";
	$fieldLabelssateibutuichiran[""]["yahoo_condition1"] = "Yahoo Condition1";
	$fieldToolTipssateibutuichiran[""]["yahoo_condition1"] = "";
	$placeHolderssateibutuichiran[""]["yahoo_condition1"] = "";
	$fieldLabelssateibutuichiran[""]["yahoo_condition2"] = "Yahoo Condition2";
	$fieldToolTipssateibutuichiran[""]["yahoo_condition2"] = "";
	$placeHolderssateibutuichiran[""]["yahoo_condition2"] = "";
	$fieldLabelssateibutuichiran[""]["yahoo_fuzokuhin"] = "Yahoo Fuzokuhin";
	$fieldToolTipssateibutuichiran[""]["yahoo_fuzokuhin"] = "";
	$placeHolderssateibutuichiran[""]["yahoo_fuzokuhin"] = "";
	$fieldLabelssateibutuichiran[""]["yahoo_sinaban"] = "Yahoo Sinaban";
	$fieldToolTipssateibutuichiran[""]["yahoo_sinaban"] = "";
	$placeHolderssateibutuichiran[""]["yahoo_sinaban"] = "";
	$fieldLabelssateibutuichiran[""]["yahoo_saisun_sha"] = "Yahoo Saisun Sha";
	$fieldToolTipssateibutuichiran[""]["yahoo_saisun_sha"] = "";
	$placeHolderssateibutuichiran[""]["yahoo_saisun_sha"] = "";
	$fieldLabelssateibutuichiran[""]["yahoo_sex"] = "Yahoo Sex";
	$fieldToolTipssateibutuichiran[""]["yahoo_sex"] = "";
	$placeHolderssateibutuichiran[""]["yahoo_sex"] = "";
	$fieldLabelssateibutuichiran[""]["box_id"] = "Box Id";
	$fieldToolTipssateibutuichiran[""]["box_id"] = "";
	$placeHolderssateibutuichiran[""]["box_id"] = "";
	$fieldLabelssateibutuichiran[""]["nyuukin_price"] = "Nyuukin Price";
	$fieldToolTipssateibutuichiran[""]["nyuukin_price"] = "";
	$placeHolderssateibutuichiran[""]["nyuukin_price"] = "";
	$fieldLabelssateibutuichiran[""]["updated_by"] = "Updated By";
	$fieldToolTipssateibutuichiran[""]["updated_by"] = "";
	$placeHolderssateibutuichiran[""]["updated_by"] = "";
	$fieldLabelssateibutuichiran[""]["raku_title"] = "Raku Title";
	$fieldToolTipssateibutuichiran[""]["raku_title"] = "";
	$placeHolderssateibutuichiran[""]["raku_title"] = "";
	$fieldLabelssateibutuichiran[""]["raku_hyoujisaki_category2"] = "Raku Hyoujisaki Category2";
	$fieldToolTipssateibutuichiran[""]["raku_hyoujisaki_category2"] = "";
	$placeHolderssateibutuichiran[""]["raku_hyoujisaki_category2"] = "";
	$fieldLabelssateibutuichiran[""]["raku_hyoujisaki_category"] = "Raku Hyoujisaki Category";
	$fieldToolTipssateibutuichiran[""]["raku_hyoujisaki_category"] = "";
	$placeHolderssateibutuichiran[""]["raku_hyoujisaki_category"] = "";
	$fieldLabelssateibutuichiran[""]["raku_hyoujisaki_category3"] = "Raku Hyoujisaki Category3";
	$fieldToolTipssateibutuichiran[""]["raku_hyoujisaki_category3"] = "";
	$placeHolderssateibutuichiran[""]["raku_hyoujisaki_category3"] = "";
	$fieldLabelssateibutuichiran[""]["timesta"] = "Timesta";
	$fieldToolTipssateibutuichiran[""]["timesta"] = "";
	$placeHolderssateibutuichiran[""]["timesta"] = "";
	$fieldLabelssateibutuichiran[""]["saisun_start"] = "Saisun Start";
	$fieldToolTipssateibutuichiran[""]["saisun_start"] = "";
	$placeHolderssateibutuichiran[""]["saisun_start"] = "";
	$fieldLabelssateibutuichiran[""]["saisun_end"] = "Saisun End";
	$fieldToolTipssateibutuichiran[""]["saisun_end"] = "";
	$placeHolderssateibutuichiran[""]["saisun_end"] = "";
	$fieldLabelssateibutuichiran[""]["label_output_flag"] = "Label Output Flag";
	$fieldToolTipssateibutuichiran[""]["label_output_flag"] = "";
	$placeHolderssateibutuichiran[""]["label_output_flag"] = "";
	$fieldLabelssateibutuichiran[""]["season"] = "Season";
	$fieldToolTipssateibutuichiran[""]["season"] = "";
	$placeHolderssateibutuichiran[""]["season"] = "";
	$fieldLabelssateibutuichiran[""]["kanryou_henbi"] = "Kanryou Henbi";
	$fieldToolTipssateibutuichiran[""]["kanryou_henbi"] = "";
	$placeHolderssateibutuichiran[""]["kanryou_henbi"] = "";
	$fieldLabelssateibutuichiran[""]["box_sort"] = "Box Sort";
	$fieldToolTipssateibutuichiran[""]["box_sort"] = "";
	$placeHolderssateibutuichiran[""]["box_sort"] = "";
	$fieldLabelssateibutuichiran[""]["satei_by"] = "Satei By";
	$fieldToolTipssateibutuichiran[""]["satei_by"] = "";
	$placeHolderssateibutuichiran[""]["satei_by"] = "";
	$fieldLabelssateibutuichiran[""]["kaitori_by"] = "Kaitori By";
	$fieldToolTipssateibutuichiran[""]["kaitori_by"] = "";
	$placeHolderssateibutuichiran[""]["kaitori_by"] = "";
	$fieldLabelssateibutuichiran[""]["comment"] = "Comment";
	$fieldToolTipssateibutuichiran[""]["comment"] = "";
	$placeHolderssateibutuichiran[""]["comment"] = "";
	$fieldLabelssateibutuichiran[""]["satei_hi"] = "Satei Hi";
	$fieldToolTipssateibutuichiran[""]["satei_hi"] = "";
	$placeHolderssateibutuichiran[""]["satei_hi"] = "";
	$fieldLabelssateibutuichiran[""]["kaitory_hi"] = "Kaitory Hi";
	$fieldToolTipssateibutuichiran[""]["kaitory_hi"] = "";
	$placeHolderssateibutuichiran[""]["kaitory_hi"] = "";
	$fieldLabelssateibutuichiran[""]["REG_PHOTOGRAPHER"] = "REG PHOTOGRAPHER";
	$fieldToolTipssateibutuichiran[""]["REG_PHOTOGRAPHER"] = "";
	$placeHolderssateibutuichiran[""]["REG_PHOTOGRAPHER"] = "";
	$fieldLabelssateibutuichiran[""]["REG_AUTHOR"] = "REG AUTHOR";
	$fieldToolTipssateibutuichiran[""]["REG_AUTHOR"] = "";
	$placeHolderssateibutuichiran[""]["REG_AUTHOR"] = "";
	$fieldLabelssateibutuichiran[""]["REG_PACKINGS"] = "REG PACKINGS";
	$fieldToolTipssateibutuichiran[""]["REG_PACKINGS"] = "";
	$placeHolderssateibutuichiran[""]["REG_PACKINGS"] = "";
	$fieldLabelssateibutuichiran[""]["REG_KAKOU_DATE"] = "REG KAKOU DATE";
	$fieldToolTipssateibutuichiran[""]["REG_KAKOU_DATE"] = "";
	$placeHolderssateibutuichiran[""]["REG_KAKOU_DATE"] = "";
	$fieldLabelssateibutuichiran[""]["REG_KAKOU"] = "REG KAKOU";
	$fieldToolTipssateibutuichiran[""]["REG_KAKOU"] = "";
	$placeHolderssateibutuichiran[""]["REG_KAKOU"] = "";
	$fieldLabelssateibutuichiran[""]["REG_EXHIBITOR"] = "REG EXHIBITOR";
	$fieldToolTipssateibutuichiran[""]["REG_EXHIBITOR"] = "";
	$placeHolderssateibutuichiran[""]["REG_EXHIBITOR"] = "";
	$fieldLabelssateibutuichiran[""]["REG_PHOTOGRAPHER_DATE"] = "REG PHOTOGRAPHER DATE";
	$fieldToolTipssateibutuichiran[""]["REG_PHOTOGRAPHER_DATE"] = "";
	$placeHolderssateibutuichiran[""]["REG_PHOTOGRAPHER_DATE"] = "";
	$fieldLabelssateibutuichiran[""]["DT_PACKING_DATE"] = "DT PACKING DATE";
	$fieldToolTipssateibutuichiran[""]["DT_PACKING_DATE"] = "";
	$placeHolderssateibutuichiran[""]["DT_PACKING_DATE"] = "";
	$fieldLabelssateibutuichiran[""]["DT_UP_DATE"] = "DT UP DATE";
	$fieldToolTipssateibutuichiran[""]["DT_UP_DATE"] = "";
	$placeHolderssateibutuichiran[""]["DT_UP_DATE"] = "";
	$fieldLabelssateibutuichiran[""]["AWAZU_DATE"] = "AWAZU DATE";
	$fieldToolTipssateibutuichiran[""]["AWAZU_DATE"] = "";
	$placeHolderssateibutuichiran[""]["AWAZU_DATE"] = "";
	$fieldLabelssateibutuichiran[""]["AWAZU_NIN"] = "AWAZU NIN";
	$fieldToolTipssateibutuichiran[""]["AWAZU_NIN"] = "";
	$placeHolderssateibutuichiran[""]["AWAZU_NIN"] = "";
	$fieldLabelssateibutuichiran[""]["sabun_date"] = "Sabun Date";
	$fieldToolTipssateibutuichiran[""]["sabun_date"] = "";
	$placeHolderssateibutuichiran[""]["sabun_date"] = "";
	$fieldLabelssateibutuichiran[""]["browseid"] = "Browseid";
	$fieldToolTipssateibutuichiran[""]["browseid"] = "";
	$placeHolderssateibutuichiran[""]["browseid"] = "";
	$fieldLabelssateibutuichiran[""]["browsenode"] = "Browsenode";
	$fieldToolTipssateibutuichiran[""]["browsenode"] = "";
	$placeHolderssateibutuichiran[""]["browsenode"] = "";
	$fieldLabelssateibutuichiran[""]["gold_property"] = "Gold Property";
	$fieldToolTipssateibutuichiran[""]["gold_property"] = "";
	$placeHolderssateibutuichiran[""]["gold_property"] = "";
	$fieldLabelssateibutuichiran[""]["ichiba_title"] = "Ichiba Title";
	$fieldToolTipssateibutuichiran[""]["ichiba_title"] = "";
	$placeHolderssateibutuichiran[""]["ichiba_title"] = "";
	$fieldLabelssateibutuichiran[""]["Gram"] = "Gram";
	$fieldToolTipssateibutuichiran[""]["Gram"] = "";
	$placeHolderssateibutuichiran[""]["Gram"] = "";
	$fieldLabelssateibutuichiran[""]["Parent_stone"] = "Parent Stone";
	$fieldToolTipssateibutuichiran[""]["Parent_stone"] = "";
	$placeHolderssateibutuichiran[""]["Parent_stone"] = "";
	$fieldLabelssateibutuichiran[""]["Aside_stone"] = "Aside Stone";
	$fieldToolTipssateibutuichiran[""]["Aside_stone"] = "";
	$placeHolderssateibutuichiran[""]["Aside_stone"] = "";
	$fieldLabelssateibutuichiran[""]["Appraiser"] = "Appraiser";
	$fieldToolTipssateibutuichiran[""]["Appraiser"] = "";
	$placeHolderssateibutuichiran[""]["Appraiser"] = "";
	$fieldLabelssateibutuichiran[""]["Remarks"] = "Remarks";
	$fieldToolTipssateibutuichiran[""]["Remarks"] = "";
	$placeHolderssateibutuichiran[""]["Remarks"] = "";
	$fieldLabelssateibutuichiran[""]["Destination_selling"] = "Destination Selling";
	$fieldToolTipssateibutuichiran[""]["Destination_selling"] = "";
	$placeHolderssateibutuichiran[""]["Destination_selling"] = "";
	$fieldLabelssateibutuichiran[""]["Finish"] = "Finish";
	$fieldToolTipssateibutuichiran[""]["Finish"] = "";
	$placeHolderssateibutuichiran[""]["Finish"] = "";
	$fieldLabelssateibutuichiran[""]["Discrimination"] = "Discrimination";
	$fieldToolTipssateibutuichiran[""]["Discrimination"] = "";
	$placeHolderssateibutuichiran[""]["Discrimination"] = "";
	$fieldLabelssateibutuichiran[""]["accessories"] = "Accessories";
	$fieldToolTipssateibutuichiran[""]["accessories"] = "";
	$placeHolderssateibutuichiran[""]["accessories"] = "";
	$fieldLabelssateibutuichiran[""]["priority"] = "Priority";
	$fieldToolTipssateibutuichiran[""]["priority"] = "";
	$placeHolderssateibutuichiran[""]["priority"] = "";
	$fieldLabelssateibutuichiran[""]["A_storage"] = "A Storage";
	$fieldToolTipssateibutuichiran[""]["A_storage"] = "";
	$placeHolderssateibutuichiran[""]["A_storage"] = "";
	$fieldLabelssateibutuichiran[""]["price_per_gram"] = "Price Per Gram";
	$fieldToolTipssateibutuichiran[""]["price_per_gram"] = "";
	$placeHolderssateibutuichiran[""]["price_per_gram"] = "";
	$fieldLabelssateibutuichiran[""]["price_per_parent_stone"] = "Price Per Parent Stone";
	$fieldToolTipssateibutuichiran[""]["price_per_parent_stone"] = "";
	$placeHolderssateibutuichiran[""]["price_per_parent_stone"] = "";
	$fieldLabelssateibutuichiran[""]["price_per_aside_stone"] = "Price Per Aside Stone";
	$fieldToolTipssateibutuichiran[""]["price_per_aside_stone"] = "";
	$placeHolderssateibutuichiran[""]["price_per_aside_stone"] = "";
	$fieldLabelssateibutuichiran[""]["price_secret"] = "Price Secret";
	$fieldToolTipssateibutuichiran[""]["price_secret"] = "";
	$placeHolderssateibutuichiran[""]["price_secret"] = "";
	$fieldLabelssateibutuichiran[""]["sales_price_secret"] = "Sales Price Secret";
	$fieldToolTipssateibutuichiran[""]["sales_price_secret"] = "";
	$placeHolderssateibutuichiran[""]["sales_price_secret"] = "";
	$fieldLabelssateibutuichiran[""]["eq"] = "Eq";
	$fieldToolTipssateibutuichiran[""]["eq"] = "";
	$placeHolderssateibutuichiran[""]["eq"] = "";
	$fieldLabelssateibutuichiran[""]["en"] = "En";
	$fieldToolTipssateibutuichiran[""]["en"] = "";
	$placeHolderssateibutuichiran[""]["en"] = "";
	$fieldLabelssateibutuichiran[""]["line"] = "Line";
	$fieldToolTipssateibutuichiran[""]["line"] = "";
	$placeHolderssateibutuichiran[""]["line"] = "";
	$fieldLabelssateibutuichiran[""]["item_name"] = "Item Name";
	$fieldToolTipssateibutuichiran[""]["item_name"] = "";
	$placeHolderssateibutuichiran[""]["item_name"] = "";
	$fieldLabelssateibutuichiran[""]["handle"] = "Handle";
	$fieldToolTipssateibutuichiran[""]["handle"] = "";
	$placeHolderssateibutuichiran[""]["handle"] = "";
	$fieldLabelssateibutuichiran[""]["yahoo_color_id"] = "Yahoo Color Id";
	$fieldToolTipssateibutuichiran[""]["yahoo_color_id"] = "";
	$placeHolderssateibutuichiran[""]["yahoo_color_id"] = "";
	$fieldLabelssateibutuichiran[""]["raku_hyoujisaki_category4"] = "Raku Hyoujisaki Category4";
	$fieldToolTipssateibutuichiran[""]["raku_hyoujisaki_category4"] = "";
	$placeHolderssateibutuichiran[""]["raku_hyoujisaki_category4"] = "";
	$fieldLabelssateibutuichiran[""]["raku_hyoujisaki_category5"] = "Raku Hyoujisaki Category5";
	$fieldToolTipssateibutuichiran[""]["raku_hyoujisaki_category5"] = "";
	$placeHolderssateibutuichiran[""]["raku_hyoujisaki_category5"] = "";
	$fieldLabelssateibutuichiran[""]["raku_dir_1"] = "Raku Dir 1";
	$fieldToolTipssateibutuichiran[""]["raku_dir_1"] = "";
	$placeHolderssateibutuichiran[""]["raku_dir_1"] = "";
	$fieldLabelssateibutuichiran[""]["raku_dir_2"] = "Raku Dir 2";
	$fieldToolTipssateibutuichiran[""]["raku_dir_2"] = "";
	$placeHolderssateibutuichiran[""]["raku_dir_2"] = "";
	$fieldLabelssateibutuichiran[""]["raku_dir_3"] = "Raku Dir 3";
	$fieldToolTipssateibutuichiran[""]["raku_dir_3"] = "";
	$placeHolderssateibutuichiran[""]["raku_dir_3"] = "";
	$fieldLabelssateibutuichiran[""]["raku_dir_4"] = "Raku Dir 4";
	$fieldToolTipssateibutuichiran[""]["raku_dir_4"] = "";
	$placeHolderssateibutuichiran[""]["raku_dir_4"] = "";
	$fieldLabelssateibutuichiran[""]["raku_dir_5"] = "Raku Dir 5";
	$fieldToolTipssateibutuichiran[""]["raku_dir_5"] = "";
	$placeHolderssateibutuichiran[""]["raku_dir_5"] = "";
	$fieldLabelssateibutuichiran[""]["raku_dir_result"] = "Raku Dir Result";
	$fieldToolTipssateibutuichiran[""]["raku_dir_result"] = "";
	$placeHolderssateibutuichiran[""]["raku_dir_result"] = "";
	$fieldLabelssateibutuichiran[""]["raku_tag_result"] = "Raku Tag Result";
	$fieldToolTipssateibutuichiran[""]["raku_tag_result"] = "";
	$placeHolderssateibutuichiran[""]["raku_tag_result"] = "";
	$fieldLabelssateibutuichiran[""]["serial_number"] = "Serial Number";
	$fieldToolTipssateibutuichiran[""]["serial_number"] = "";
	$placeHolderssateibutuichiran[""]["serial_number"] = "";
	$fieldLabelssateibutuichiran[""]["Exhibition_Date"] = "Exhibition Date";
	$fieldToolTipssateibutuichiran[""]["Exhibition_Date"] = "";
	$placeHolderssateibutuichiran[""]["Exhibition_Date"] = "";
	$fieldLabelssateibutuichiran[""]["search_keyword"] = "Search Keyword";
	$fieldToolTipssateibutuichiran[""]["search_keyword"] = "";
	$placeHolderssateibutuichiran[""]["search_keyword"] = "";
	$fieldLabelssateibutuichiran[""]["stamp"] = "Stamp";
	$fieldToolTipssateibutuichiran[""]["stamp"] = "";
	$placeHolderssateibutuichiran[""]["stamp"] = "";
	$fieldLabelssateibutuichiran[""]["motif"] = "Motif";
	$fieldToolTipssateibutuichiran[""]["motif"] = "";
	$placeHolderssateibutuichiran[""]["motif"] = "";
	$fieldLabelssateibutuichiran[""]["Setting"] = "Setting";
	$fieldToolTipssateibutuichiran[""]["Setting"] = "";
	$placeHolderssateibutuichiran[""]["Setting"] = "";
	$fieldLabelssateibutuichiran[""]["processing"] = "Processing";
	$fieldToolTipssateibutuichiran[""]["processing"] = "";
	$placeHolderssateibutuichiran[""]["processing"] = "";
	$fieldLabelssateibutuichiran[""]["Sleeve_Length"] = "Sleeve Length";
	$fieldToolTipssateibutuichiran[""]["Sleeve_Length"] = "";
	$placeHolderssateibutuichiran[""]["Sleeve_Length"] = "";
	$fieldLabelssateibutuichiran[""]["length"] = "Length";
	$fieldToolTipssateibutuichiran[""]["length"] = "";
	$placeHolderssateibutuichiran[""]["length"] = "";
	$fieldLabelssateibutuichiran[""]["Ring_size"] = "Ring Size";
	$fieldToolTipssateibutuichiran[""]["Ring_size"] = "";
	$placeHolderssateibutuichiran[""]["Ring_size"] = "";
	$fieldLabelssateibutuichiran[""]["price_for_site"] = "Price For Site";
	$fieldToolTipssateibutuichiran[""]["price_for_site"] = "";
	$placeHolderssateibutuichiran[""]["price_for_site"] = "";
	$fieldLabelssateibutuichiran[""]["yahoo_category_id"] = "Yahoo Category Id";
	$fieldToolTipssateibutuichiran[""]["yahoo_category_id"] = "";
	$placeHolderssateibutuichiran[""]["yahoo_category_id"] = "";
	$fieldLabelssateibutuichiran[""]["Qty"] = "Qty";
	$fieldToolTipssateibutuichiran[""]["Qty"] = "";
	$placeHolderssateibutuichiran[""]["Qty"] = "";
	$fieldLabelssateibutuichiran[""]["sales_period"] = "Sales Period";
	$fieldToolTipssateibutuichiran[""]["sales_period"] = "";
	$placeHolderssateibutuichiran[""]["sales_period"] = "";
	$fieldLabelssateibutuichiran[""]["starting_price"] = "Starting Price";
	$fieldToolTipssateibutuichiran[""]["starting_price"] = "";
	$placeHolderssateibutuichiran[""]["starting_price"] = "";
	$fieldLabelssateibutuichiran[""]["ecc_seq"] = "Ecc Seq";
	$fieldToolTipssateibutuichiran[""]["ecc_seq"] = "";
	$placeHolderssateibutuichiran[""]["ecc_seq"] = "";
	if (count($fieldToolTipssateibutuichiran[""]))
		$tdatasateibutuichiran[".isUseToolTips"] = true;
}


	$tdatasateibutuichiran[".NCSearch"] = true;



$tdatasateibutuichiran[".shortTableName"] = "sateibutuichiran";
$tdatasateibutuichiran[".nSecOptions"] = 0;
$tdatasateibutuichiran[".recsPerRowPrint"] = 1;
$tdatasateibutuichiran[".mainTableOwnerID"] = "";
$tdatasateibutuichiran[".moveNext"] = 1;
$tdatasateibutuichiran[".entityType"] = 1;

$tdatasateibutuichiran[".strOriginalTableName"] = "shouhin";

	



$tdatasateibutuichiran[".showAddInPopup"] = false;

$tdatasateibutuichiran[".showEditInPopup"] = false;

$tdatasateibutuichiran[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatasateibutuichiran[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatasateibutuichiran[".fieldsForRegister"] = array();

$tdatasateibutuichiran[".listAjax"] = false;

	$tdatasateibutuichiran[".audit"] = false;

	$tdatasateibutuichiran[".locking"] = false;

$tdatasateibutuichiran[".edit"] = true;
$tdatasateibutuichiran[".afterEditAction"] = 1;
$tdatasateibutuichiran[".closePopupAfterEdit"] = 1;
$tdatasateibutuichiran[".afterEditActionDetTable"] = "";

$tdatasateibutuichiran[".add"] = true;
$tdatasateibutuichiran[".afterAddAction"] = 1;
$tdatasateibutuichiran[".closePopupAfterAdd"] = 1;
$tdatasateibutuichiran[".afterAddActionDetTable"] = "";

$tdatasateibutuichiran[".list"] = true;



$tdatasateibutuichiran[".reorderRecordsByHeader"] = true;



$tdatasateibutuichiran[".view"] = true;

$tdatasateibutuichiran[".import"] = true;

$tdatasateibutuichiran[".exportTo"] = true;

$tdatasateibutuichiran[".printFriendly"] = true;

$tdatasateibutuichiran[".delete"] = true;

$tdatasateibutuichiran[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatasateibutuichiran[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatasateibutuichiran[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatasateibutuichiran[".searchSaving"] = false;
//

$tdatasateibutuichiran[".showSearchPanel"] = true;
		$tdatasateibutuichiran[".flexibleSearch"] = true;

$tdatasateibutuichiran[".isUseAjaxSuggest"] = true;

$tdatasateibutuichiran[".rowHighlite"] = true;



																														

$tdatasateibutuichiran[".ajaxCodeSnippetAdded"] = false;

$tdatasateibutuichiran[".buttonsAdded"] = false;

$tdatasateibutuichiran[".addPageEvents"] = false;

// use timepicker for search panel
$tdatasateibutuichiran[".isUseTimeForSearch"] = false;



$tdatasateibutuichiran[".badgeColor"] = "DAA520";


$tdatasateibutuichiran[".allSearchFields"] = array();
$tdatasateibutuichiran[".filterFields"] = array();
$tdatasateibutuichiran[".requiredSearchFields"] = array();

$tdatasateibutuichiran[".allSearchFields"][] = "ecc_seq";
	$tdatasateibutuichiran[".allSearchFields"][] = "status";
	$tdatasateibutuichiran[".allSearchFields"][] = "satei_by";
	$tdatasateibutuichiran[".allSearchFields"][] = "category_id";
	$tdatasateibutuichiran[".allSearchFields"][] = "sub_category_id1";
	$tdatasateibutuichiran[".allSearchFields"][] = "product_id";
	$tdatasateibutuichiran[".allSearchFields"][] = "yahoo_sinaban";
	$tdatasateibutuichiran[".allSearchFields"][] = "price";
	$tdatasateibutuichiran[".allSearchFields"][] = "sales_price";
	$tdatasateibutuichiran[".allSearchFields"][] = "yahoo_sex";
	$tdatasateibutuichiran[".allSearchFields"][] = "yahoo_junle";
	$tdatasateibutuichiran[".allSearchFields"][] = "product_num";
	$tdatasateibutuichiran[".allSearchFields"][] = "description";
	$tdatasateibutuichiran[".allSearchFields"][] = "raku_hyoujisaki_category";
	$tdatasateibutuichiran[".allSearchFields"][] = "raku_hyoujisaki_category2";
	$tdatasateibutuichiran[".allSearchFields"][] = "raku_hyoujisaki_category3";
	$tdatasateibutuichiran[".allSearchFields"][] = "raku_hyoujisaki_category4";
	$tdatasateibutuichiran[".allSearchFields"][] = "raku_hyoujisaki_category5";
	$tdatasateibutuichiran[".allSearchFields"][] = "yahoo_kataban";
	$tdatasateibutuichiran[".allSearchFields"][] = "yahoo_sozai";
	$tdatasateibutuichiran[".allSearchFields"][] = "yahoo_color";
	$tdatasateibutuichiran[".allSearchFields"][] = "yahoo_size";
	$tdatasateibutuichiran[".allSearchFields"][] = "yahoo_condition1";
	$tdatasateibutuichiran[".allSearchFields"][] = "yahoo_condition2";
	$tdatasateibutuichiran[".allSearchFields"][] = "remark";
	$tdatasateibutuichiran[".allSearchFields"][] = "yahoo_fuzokuhin";
	$tdatasateibutuichiran[".allSearchFields"][] = "yahoo_sankou_uwadai";
	$tdatasateibutuichiran[".allSearchFields"][] = "season";
	$tdatasateibutuichiran[".allSearchFields"][] = "yahoo_title";
	$tdatasateibutuichiran[".allSearchFields"][] = "goods_title";
	$tdatasateibutuichiran[".allSearchFields"][] = "raku_title";
	$tdatasateibutuichiran[".allSearchFields"][] = "raku_tag_result";
	$tdatasateibutuichiran[".allSearchFields"][] = "search_keyword";
	$tdatasateibutuichiran[".allSearchFields"][] = "stamp";
	$tdatasateibutuichiran[".allSearchFields"][] = "processing";
	$tdatasateibutuichiran[".allSearchFields"][] = "Sleeve_Length";
	$tdatasateibutuichiran[".allSearchFields"][] = "length";
	$tdatasateibutuichiran[".allSearchFields"][] = "comment";
	$tdatasateibutuichiran[".allSearchFields"][] = "satei_hi";
	$tdatasateibutuichiran[".allSearchFields"][] = "gold_property";
	$tdatasateibutuichiran[".allSearchFields"][] = "ichiba_title";
	$tdatasateibutuichiran[".allSearchFields"][] = "Gram";
	$tdatasateibutuichiran[".allSearchFields"][] = "Parent_stone";
	$tdatasateibutuichiran[".allSearchFields"][] = "Aside_stone";
	$tdatasateibutuichiran[".allSearchFields"][] = "Appraiser";
	$tdatasateibutuichiran[".allSearchFields"][] = "accessories";
	$tdatasateibutuichiran[".allSearchFields"][] = "priority";
	$tdatasateibutuichiran[".allSearchFields"][] = "A_storage";
	$tdatasateibutuichiran[".allSearchFields"][] = "price_per_gram";
	$tdatasateibutuichiran[".allSearchFields"][] = "price_per_parent_stone";
	$tdatasateibutuichiran[".allSearchFields"][] = "price_per_aside_stone";
	$tdatasateibutuichiran[".allSearchFields"][] = "price_secret";
	$tdatasateibutuichiran[".allSearchFields"][] = "line";
	$tdatasateibutuichiran[".allSearchFields"][] = "item_name";
	$tdatasateibutuichiran[".allSearchFields"][] = "serial_number";
	$tdatasateibutuichiran[".allSearchFields"][] = "motif";
	$tdatasateibutuichiran[".allSearchFields"][] = "Setting";
	

$tdatasateibutuichiran[".googleLikeFields"] = array();
$tdatasateibutuichiran[".googleLikeFields"][] = "product_id";
$tdatasateibutuichiran[".googleLikeFields"][] = "category_id";
$tdatasateibutuichiran[".googleLikeFields"][] = "goods_title";
$tdatasateibutuichiran[".googleLikeFields"][] = "title";
$tdatasateibutuichiran[".googleLikeFields"][] = "sub_category_id1";
$tdatasateibutuichiran[".googleLikeFields"][] = "ecc_id";
$tdatasateibutuichiran[".googleLikeFields"][] = "price";
$tdatasateibutuichiran[".googleLikeFields"][] = "yahoo";
$tdatasateibutuichiran[".googleLikeFields"][] = "remark";
$tdatasateibutuichiran[".googleLikeFields"][] = "sales_price";
$tdatasateibutuichiran[".googleLikeFields"][] = "description";
$tdatasateibutuichiran[".googleLikeFields"][] = "status";
$tdatasateibutuichiran[".googleLikeFields"][] = "product_num";
$tdatasateibutuichiran[".googleLikeFields"][] = "updated_at";
$tdatasateibutuichiran[".googleLikeFields"][] = "yahoo_size";
$tdatasateibutuichiran[".googleLikeFields"][] = "yahoo_title";
$tdatasateibutuichiran[".googleLikeFields"][] = "yahoo_junle";
$tdatasateibutuichiran[".googleLikeFields"][] = "yahoo_sankou_uwadai";
$tdatasateibutuichiran[".googleLikeFields"][] = "yahoo_sozai";
$tdatasateibutuichiran[".googleLikeFields"][] = "yahoo_color";
$tdatasateibutuichiran[".googleLikeFields"][] = "yahoo_kataban";
$tdatasateibutuichiran[".googleLikeFields"][] = "yahoo_condition1";
$tdatasateibutuichiran[".googleLikeFields"][] = "yahoo_condition2";
$tdatasateibutuichiran[".googleLikeFields"][] = "yahoo_fuzokuhin";
$tdatasateibutuichiran[".googleLikeFields"][] = "yahoo_sinaban";
$tdatasateibutuichiran[".googleLikeFields"][] = "yahoo_saisun_sha";
$tdatasateibutuichiran[".googleLikeFields"][] = "yahoo_sex";
$tdatasateibutuichiran[".googleLikeFields"][] = "box_id";
$tdatasateibutuichiran[".googleLikeFields"][] = "nyuukin_price";
$tdatasateibutuichiran[".googleLikeFields"][] = "updated_by";
$tdatasateibutuichiran[".googleLikeFields"][] = "raku_title";
$tdatasateibutuichiran[".googleLikeFields"][] = "raku_hyoujisaki_category2";
$tdatasateibutuichiran[".googleLikeFields"][] = "raku_hyoujisaki_category";
$tdatasateibutuichiran[".googleLikeFields"][] = "raku_hyoujisaki_category3";
$tdatasateibutuichiran[".googleLikeFields"][] = "timesta";
$tdatasateibutuichiran[".googleLikeFields"][] = "saisun_start";
$tdatasateibutuichiran[".googleLikeFields"][] = "saisun_end";
$tdatasateibutuichiran[".googleLikeFields"][] = "label_output_flag";
$tdatasateibutuichiran[".googleLikeFields"][] = "season";
$tdatasateibutuichiran[".googleLikeFields"][] = "kanryou_henbi";
$tdatasateibutuichiran[".googleLikeFields"][] = "box_sort";
$tdatasateibutuichiran[".googleLikeFields"][] = "satei_by";
$tdatasateibutuichiran[".googleLikeFields"][] = "kaitori_by";
$tdatasateibutuichiran[".googleLikeFields"][] = "comment";
$tdatasateibutuichiran[".googleLikeFields"][] = "satei_hi";
$tdatasateibutuichiran[".googleLikeFields"][] = "kaitory_hi";
$tdatasateibutuichiran[".googleLikeFields"][] = "REG_PHOTOGRAPHER";
$tdatasateibutuichiran[".googleLikeFields"][] = "REG_AUTHOR";
$tdatasateibutuichiran[".googleLikeFields"][] = "REG_PACKINGS";
$tdatasateibutuichiran[".googleLikeFields"][] = "REG_KAKOU_DATE";
$tdatasateibutuichiran[".googleLikeFields"][] = "REG_KAKOU";
$tdatasateibutuichiran[".googleLikeFields"][] = "REG_EXHIBITOR";
$tdatasateibutuichiran[".googleLikeFields"][] = "REG_PHOTOGRAPHER_DATE";
$tdatasateibutuichiran[".googleLikeFields"][] = "DT_PACKING_DATE";
$tdatasateibutuichiran[".googleLikeFields"][] = "DT_UP_DATE";
$tdatasateibutuichiran[".googleLikeFields"][] = "AWAZU_DATE";
$tdatasateibutuichiran[".googleLikeFields"][] = "AWAZU_NIN";
$tdatasateibutuichiran[".googleLikeFields"][] = "sabun_date";
$tdatasateibutuichiran[".googleLikeFields"][] = "browseid";
$tdatasateibutuichiran[".googleLikeFields"][] = "browsenode";
$tdatasateibutuichiran[".googleLikeFields"][] = "gold_property";
$tdatasateibutuichiran[".googleLikeFields"][] = "ichiba_title";
$tdatasateibutuichiran[".googleLikeFields"][] = "Gram";
$tdatasateibutuichiran[".googleLikeFields"][] = "Parent_stone";
$tdatasateibutuichiran[".googleLikeFields"][] = "Aside_stone";
$tdatasateibutuichiran[".googleLikeFields"][] = "Appraiser";
$tdatasateibutuichiran[".googleLikeFields"][] = "Remarks";
$tdatasateibutuichiran[".googleLikeFields"][] = "Destination_selling";
$tdatasateibutuichiran[".googleLikeFields"][] = "Finish";
$tdatasateibutuichiran[".googleLikeFields"][] = "Discrimination";
$tdatasateibutuichiran[".googleLikeFields"][] = "accessories";
$tdatasateibutuichiran[".googleLikeFields"][] = "priority";
$tdatasateibutuichiran[".googleLikeFields"][] = "A_storage";
$tdatasateibutuichiran[".googleLikeFields"][] = "price_per_gram";
$tdatasateibutuichiran[".googleLikeFields"][] = "price_per_parent_stone";
$tdatasateibutuichiran[".googleLikeFields"][] = "price_per_aside_stone";
$tdatasateibutuichiran[".googleLikeFields"][] = "price_secret";
$tdatasateibutuichiran[".googleLikeFields"][] = "sales_price_secret";
$tdatasateibutuichiran[".googleLikeFields"][] = "eq";
$tdatasateibutuichiran[".googleLikeFields"][] = "en";
$tdatasateibutuichiran[".googleLikeFields"][] = "line";
$tdatasateibutuichiran[".googleLikeFields"][] = "item_name";
$tdatasateibutuichiran[".googleLikeFields"][] = "handle";
$tdatasateibutuichiran[".googleLikeFields"][] = "yahoo_color_id";
$tdatasateibutuichiran[".googleLikeFields"][] = "raku_hyoujisaki_category4";
$tdatasateibutuichiran[".googleLikeFields"][] = "raku_hyoujisaki_category5";
$tdatasateibutuichiran[".googleLikeFields"][] = "raku_dir_1";
$tdatasateibutuichiran[".googleLikeFields"][] = "raku_dir_2";
$tdatasateibutuichiran[".googleLikeFields"][] = "raku_dir_3";
$tdatasateibutuichiran[".googleLikeFields"][] = "raku_dir_4";
$tdatasateibutuichiran[".googleLikeFields"][] = "raku_dir_5";
$tdatasateibutuichiran[".googleLikeFields"][] = "raku_dir_result";
$tdatasateibutuichiran[".googleLikeFields"][] = "raku_tag_result";
$tdatasateibutuichiran[".googleLikeFields"][] = "serial_number";
$tdatasateibutuichiran[".googleLikeFields"][] = "Exhibition_Date";
$tdatasateibutuichiran[".googleLikeFields"][] = "search_keyword";
$tdatasateibutuichiran[".googleLikeFields"][] = "stamp";
$tdatasateibutuichiran[".googleLikeFields"][] = "motif";
$tdatasateibutuichiran[".googleLikeFields"][] = "Setting";
$tdatasateibutuichiran[".googleLikeFields"][] = "processing";
$tdatasateibutuichiran[".googleLikeFields"][] = "Sleeve_Length";
$tdatasateibutuichiran[".googleLikeFields"][] = "length";
$tdatasateibutuichiran[".googleLikeFields"][] = "Ring_size";
$tdatasateibutuichiran[".googleLikeFields"][] = "price_for_site";
$tdatasateibutuichiran[".googleLikeFields"][] = "yahoo_category_id";
$tdatasateibutuichiran[".googleLikeFields"][] = "Qty";
$tdatasateibutuichiran[".googleLikeFields"][] = "sales_period";
$tdatasateibutuichiran[".googleLikeFields"][] = "starting_price";
$tdatasateibutuichiran[".googleLikeFields"][] = "ecc_seq";


$tdatasateibutuichiran[".advSearchFields"] = array();
$tdatasateibutuichiran[".advSearchFields"][] = "ecc_seq";
$tdatasateibutuichiran[".advSearchFields"][] = "status";
$tdatasateibutuichiran[".advSearchFields"][] = "satei_by";
$tdatasateibutuichiran[".advSearchFields"][] = "category_id";
$tdatasateibutuichiran[".advSearchFields"][] = "sub_category_id1";
$tdatasateibutuichiran[".advSearchFields"][] = "product_id";
$tdatasateibutuichiran[".advSearchFields"][] = "yahoo_sinaban";
$tdatasateibutuichiran[".advSearchFields"][] = "price";
$tdatasateibutuichiran[".advSearchFields"][] = "sales_price";
$tdatasateibutuichiran[".advSearchFields"][] = "yahoo_sex";
$tdatasateibutuichiran[".advSearchFields"][] = "yahoo_junle";
$tdatasateibutuichiran[".advSearchFields"][] = "product_num";
$tdatasateibutuichiran[".advSearchFields"][] = "description";
$tdatasateibutuichiran[".advSearchFields"][] = "raku_hyoujisaki_category";
$tdatasateibutuichiran[".advSearchFields"][] = "raku_hyoujisaki_category2";
$tdatasateibutuichiran[".advSearchFields"][] = "raku_hyoujisaki_category3";
$tdatasateibutuichiran[".advSearchFields"][] = "raku_hyoujisaki_category4";
$tdatasateibutuichiran[".advSearchFields"][] = "raku_hyoujisaki_category5";
$tdatasateibutuichiran[".advSearchFields"][] = "yahoo_kataban";
$tdatasateibutuichiran[".advSearchFields"][] = "yahoo_sozai";
$tdatasateibutuichiran[".advSearchFields"][] = "yahoo_color";
$tdatasateibutuichiran[".advSearchFields"][] = "yahoo_size";
$tdatasateibutuichiran[".advSearchFields"][] = "yahoo_condition1";
$tdatasateibutuichiran[".advSearchFields"][] = "yahoo_condition2";
$tdatasateibutuichiran[".advSearchFields"][] = "remark";
$tdatasateibutuichiran[".advSearchFields"][] = "yahoo_fuzokuhin";
$tdatasateibutuichiran[".advSearchFields"][] = "yahoo_sankou_uwadai";
$tdatasateibutuichiran[".advSearchFields"][] = "season";
$tdatasateibutuichiran[".advSearchFields"][] = "yahoo_title";
$tdatasateibutuichiran[".advSearchFields"][] = "goods_title";
$tdatasateibutuichiran[".advSearchFields"][] = "raku_title";
$tdatasateibutuichiran[".advSearchFields"][] = "raku_tag_result";
$tdatasateibutuichiran[".advSearchFields"][] = "search_keyword";
$tdatasateibutuichiran[".advSearchFields"][] = "stamp";
$tdatasateibutuichiran[".advSearchFields"][] = "processing";
$tdatasateibutuichiran[".advSearchFields"][] = "Sleeve_Length";
$tdatasateibutuichiran[".advSearchFields"][] = "length";
$tdatasateibutuichiran[".advSearchFields"][] = "comment";
$tdatasateibutuichiran[".advSearchFields"][] = "satei_hi";
$tdatasateibutuichiran[".advSearchFields"][] = "gold_property";
$tdatasateibutuichiran[".advSearchFields"][] = "ichiba_title";
$tdatasateibutuichiran[".advSearchFields"][] = "Gram";
$tdatasateibutuichiran[".advSearchFields"][] = "Parent_stone";
$tdatasateibutuichiran[".advSearchFields"][] = "Aside_stone";
$tdatasateibutuichiran[".advSearchFields"][] = "Appraiser";
$tdatasateibutuichiran[".advSearchFields"][] = "accessories";
$tdatasateibutuichiran[".advSearchFields"][] = "priority";
$tdatasateibutuichiran[".advSearchFields"][] = "A_storage";
$tdatasateibutuichiran[".advSearchFields"][] = "price_per_gram";
$tdatasateibutuichiran[".advSearchFields"][] = "price_per_parent_stone";
$tdatasateibutuichiran[".advSearchFields"][] = "price_per_aside_stone";
$tdatasateibutuichiran[".advSearchFields"][] = "price_secret";
$tdatasateibutuichiran[".advSearchFields"][] = "line";
$tdatasateibutuichiran[".advSearchFields"][] = "item_name";
$tdatasateibutuichiran[".advSearchFields"][] = "serial_number";
$tdatasateibutuichiran[".advSearchFields"][] = "motif";
$tdatasateibutuichiran[".advSearchFields"][] = "Setting";

$tdatasateibutuichiran[".tableType"] = "list";

$tdatasateibutuichiran[".printerPageOrientation"] = 0;
$tdatasateibutuichiran[".nPrinterPageScale"] = 100;

$tdatasateibutuichiran[".nPrinterSplitRecords"] = 40;

$tdatasateibutuichiran[".nPrinterPDFSplitRecords"] = 40;



$tdatasateibutuichiran[".geocodingEnabled"] = false;





$tdatasateibutuichiran[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatasateibutuichiran[".pageSize"] = 20;

$tdatasateibutuichiran[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatasateibutuichiran[".strOrderBy"] = $tstrOrderBy;

$tdatasateibutuichiran[".orderindexes"] = array();

$tdatasateibutuichiran[".sqlHead"] = "SELECT shouhin.product_id,  shouhin.category_id,  shouhin.goods_title,  shouhin.title,  shouhin.sub_category_id1,  shouhin.ecc_id,  shouhin.price,  shouhin.yahoo,  shouhin.remark,  shouhin.sales_price,  shouhin.description,  shouhin.status,  shouhin.product_num,  shouhin.updated_at,  shouhin.yahoo_size,  shouhin.yahoo_title,  shouhin.yahoo_junle,  shouhin.yahoo_sankou_uwadai,  shouhin.yahoo_sozai,  shouhin.yahoo_color,  shouhin.yahoo_kataban,  shouhin.yahoo_condition1,  shouhin.yahoo_condition2,  shouhin.yahoo_fuzokuhin,  shouhin.yahoo_sinaban,  shouhin.yahoo_saisun_sha,  shouhin.yahoo_sex,  shouhin.box_id,  shouhin.nyuukin_price,  shouhin.updated_by,  shouhin.raku_title,  shouhin.raku_hyoujisaki_category2,  shouhin.raku_hyoujisaki_category,  shouhin.raku_hyoujisaki_category3,  shouhin.timesta,  shouhin.saisun_start,  shouhin.saisun_end,  shouhin.label_output_flag,  shouhin.season,  shouhin.kanryou_henbi,  shouhin.box_sort,  shouhin.satei_by,  shouhin.kaitori_by,  shouhin.`comment`,  shouhin.satei_hi,  shouhin.kaitory_hi,  shouhin.REG_PHOTOGRAPHER,  shouhin.REG_AUTHOR,  shouhin.REG_PACKINGS,  shouhin.REG_KAKOU_DATE,  shouhin.REG_KAKOU,  shouhin.REG_EXHIBITOR,  shouhin.REG_PHOTOGRAPHER_DATE,  shouhin.DT_PACKING_DATE,  shouhin.DT_UP_DATE,  shouhin.AWAZU_DATE,  shouhin.AWAZU_NIN,  shouhin.sabun_date,  shouhin.browseid,  shouhin.browsenode,  shouhin.gold_property,  shouhin.ichiba_title,  shouhin.Gram,  shouhin.Parent_stone,  shouhin.Aside_stone,  shouhin.Appraiser,  shouhin.Remarks,  shouhin.Destination_selling,  shouhin.Finish,  shouhin.Discrimination,  shouhin.accessories,  shouhin.priority,  shouhin.A_storage,  shouhin.price_per_gram,  shouhin.price_per_parent_stone,  shouhin.price_per_aside_stone,  shouhin.price_secret,  shouhin.sales_price_secret,  shouhin.eq,  shouhin.en,  shouhin.line,  shouhin.item_name,  shouhin.handle,  shouhin.yahoo_color_id,  shouhin.raku_hyoujisaki_category4,  shouhin.raku_hyoujisaki_category5,  shouhin.raku_dir_1,  shouhin.raku_dir_2,  shouhin.raku_dir_3,  shouhin.raku_dir_4,  shouhin.raku_dir_5,  shouhin.raku_dir_result,  shouhin.raku_tag_result,  shouhin.serial_number,  shouhin.Exhibition_Date,  shouhin.search_keyword,  shouhin.stamp,  shouhin.motif,  shouhin.Setting,  shouhin.processing,  shouhin.Sleeve_Length,  shouhin.length,  shouhin.Ring_size,  shouhin.price_for_site,  shouhin.yahoo_category_id,  shouhin.Qty,  shouhin.sales_period,  shouhin.starting_price,  Eoc.ecc_seq";
$tdatasateibutuichiran[".sqlFrom"] = "FROM shouhin  LEFT OUTER JOIN Eoc ON shouhin.ecc_id = Eoc.ecc_id";
$tdatasateibutuichiran[".sqlWhereExpr"] = "";
$tdatasateibutuichiran[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasateibutuichiran[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasateibutuichiran[".arrGroupsPerPage"] = $arrGPP;

$tdatasateibutuichiran[".highlightSearchResults"] = true;

$tableKeyssateibutuichiran = array();
$tableKeyssateibutuichiran[] = "product_id";
$tdatasateibutuichiran[".Keys"] = $tableKeyssateibutuichiran;

$tdatasateibutuichiran[".listFields"] = array();
$tdatasateibutuichiran[".listFields"][] = "label_output_flag";
$tdatasateibutuichiran[".listFields"][] = "ecc_seq";
$tdatasateibutuichiran[".listFields"][] = "product_id";
$tdatasateibutuichiran[".listFields"][] = "yahoo_sinaban";
$tdatasateibutuichiran[".listFields"][] = "yahoo_junle";
$tdatasateibutuichiran[".listFields"][] = "status";
$tdatasateibutuichiran[".listFields"][] = "title";
$tdatasateibutuichiran[".listFields"][] = "yahoo_sex";
$tdatasateibutuichiran[".listFields"][] = "category_id";
$tdatasateibutuichiran[".listFields"][] = "sub_category_id1";
$tdatasateibutuichiran[".listFields"][] = "description";
$tdatasateibutuichiran[".listFields"][] = "product_num";
$tdatasateibutuichiran[".listFields"][] = "yahoo_condition2";
$tdatasateibutuichiran[".listFields"][] = "price";
$tdatasateibutuichiran[".listFields"][] = "sales_price";
$tdatasateibutuichiran[".listFields"][] = "updated_at";
$tdatasateibutuichiran[".listFields"][] = "yahoo_sozai";
$tdatasateibutuichiran[".listFields"][] = "yahoo_color";
$tdatasateibutuichiran[".listFields"][] = "yahoo_sankou_uwadai";
$tdatasateibutuichiran[".listFields"][] = "stamp";
$tdatasateibutuichiran[".listFields"][] = "processing";
$tdatasateibutuichiran[".listFields"][] = "Sleeve_Length";
$tdatasateibutuichiran[".listFields"][] = "length";
$tdatasateibutuichiran[".listFields"][] = "comment";
$tdatasateibutuichiran[".listFields"][] = "satei_hi";
$tdatasateibutuichiran[".listFields"][] = "gold_property";
$tdatasateibutuichiran[".listFields"][] = "ichiba_title";
$tdatasateibutuichiran[".listFields"][] = "Gram";
$tdatasateibutuichiran[".listFields"][] = "Parent_stone";
$tdatasateibutuichiran[".listFields"][] = "Aside_stone";
$tdatasateibutuichiran[".listFields"][] = "Appraiser";
$tdatasateibutuichiran[".listFields"][] = "accessories";
$tdatasateibutuichiran[".listFields"][] = "priority";
$tdatasateibutuichiran[".listFields"][] = "A_storage";
$tdatasateibutuichiran[".listFields"][] = "price_per_gram";
$tdatasateibutuichiran[".listFields"][] = "price_per_parent_stone";
$tdatasateibutuichiran[".listFields"][] = "price_per_aside_stone";
$tdatasateibutuichiran[".listFields"][] = "price_secret";
$tdatasateibutuichiran[".listFields"][] = "line";
$tdatasateibutuichiran[".listFields"][] = "item_name";
$tdatasateibutuichiran[".listFields"][] = "serial_number";
$tdatasateibutuichiran[".listFields"][] = "motif";
$tdatasateibutuichiran[".listFields"][] = "Setting";

$tdatasateibutuichiran[".hideMobileList"] = array();


$tdatasateibutuichiran[".viewFields"] = array();
$tdatasateibutuichiran[".viewFields"][] = "ecc_seq";
$tdatasateibutuichiran[".viewFields"][] = "status";
$tdatasateibutuichiran[".viewFields"][] = "satei_by";
$tdatasateibutuichiran[".viewFields"][] = "category_id";
$tdatasateibutuichiran[".viewFields"][] = "sub_category_id1";
$tdatasateibutuichiran[".viewFields"][] = "product_id";
$tdatasateibutuichiran[".viewFields"][] = "yahoo_sinaban";
$tdatasateibutuichiran[".viewFields"][] = "price";
$tdatasateibutuichiran[".viewFields"][] = "sales_price";
$tdatasateibutuichiran[".viewFields"][] = "yahoo_sex";
$tdatasateibutuichiran[".viewFields"][] = "yahoo_junle";
$tdatasateibutuichiran[".viewFields"][] = "product_num";
$tdatasateibutuichiran[".viewFields"][] = "description";
$tdatasateibutuichiran[".viewFields"][] = "raku_hyoujisaki_category";
$tdatasateibutuichiran[".viewFields"][] = "raku_hyoujisaki_category2";
$tdatasateibutuichiran[".viewFields"][] = "raku_hyoujisaki_category3";
$tdatasateibutuichiran[".viewFields"][] = "raku_hyoujisaki_category4";
$tdatasateibutuichiran[".viewFields"][] = "raku_hyoujisaki_category5";
$tdatasateibutuichiran[".viewFields"][] = "yahoo_kataban";
$tdatasateibutuichiran[".viewFields"][] = "yahoo_sozai";
$tdatasateibutuichiran[".viewFields"][] = "yahoo_color";
$tdatasateibutuichiran[".viewFields"][] = "yahoo_size";
$tdatasateibutuichiran[".viewFields"][] = "yahoo_condition1";
$tdatasateibutuichiran[".viewFields"][] = "yahoo_condition2";
$tdatasateibutuichiran[".viewFields"][] = "remark";
$tdatasateibutuichiran[".viewFields"][] = "yahoo_fuzokuhin";
$tdatasateibutuichiran[".viewFields"][] = "yahoo_sankou_uwadai";
$tdatasateibutuichiran[".viewFields"][] = "season";
$tdatasateibutuichiran[".viewFields"][] = "yahoo_title";
$tdatasateibutuichiran[".viewFields"][] = "goods_title";
$tdatasateibutuichiran[".viewFields"][] = "raku_title";
$tdatasateibutuichiran[".viewFields"][] = "raku_tag_result";
$tdatasateibutuichiran[".viewFields"][] = "search_keyword";
$tdatasateibutuichiran[".viewFields"][] = "stamp";
$tdatasateibutuichiran[".viewFields"][] = "processing";
$tdatasateibutuichiran[".viewFields"][] = "Sleeve_Length";
$tdatasateibutuichiran[".viewFields"][] = "length";
$tdatasateibutuichiran[".viewFields"][] = "comment";
$tdatasateibutuichiran[".viewFields"][] = "satei_hi";
$tdatasateibutuichiran[".viewFields"][] = "gold_property";
$tdatasateibutuichiran[".viewFields"][] = "ichiba_title";
$tdatasateibutuichiran[".viewFields"][] = "Gram";
$tdatasateibutuichiran[".viewFields"][] = "Parent_stone";
$tdatasateibutuichiran[".viewFields"][] = "Aside_stone";
$tdatasateibutuichiran[".viewFields"][] = "Appraiser";
$tdatasateibutuichiran[".viewFields"][] = "accessories";
$tdatasateibutuichiran[".viewFields"][] = "priority";
$tdatasateibutuichiran[".viewFields"][] = "A_storage";
$tdatasateibutuichiran[".viewFields"][] = "price_per_gram";
$tdatasateibutuichiran[".viewFields"][] = "price_per_parent_stone";
$tdatasateibutuichiran[".viewFields"][] = "price_per_aside_stone";
$tdatasateibutuichiran[".viewFields"][] = "price_secret";
$tdatasateibutuichiran[".viewFields"][] = "line";
$tdatasateibutuichiran[".viewFields"][] = "item_name";
$tdatasateibutuichiran[".viewFields"][] = "serial_number";
$tdatasateibutuichiran[".viewFields"][] = "motif";
$tdatasateibutuichiran[".viewFields"][] = "Setting";

$tdatasateibutuichiran[".addFields"] = array();
$tdatasateibutuichiran[".addFields"][] = "status";
$tdatasateibutuichiran[".addFields"][] = "satei_by";
$tdatasateibutuichiran[".addFields"][] = "category_id";
$tdatasateibutuichiran[".addFields"][] = "sub_category_id1";
$tdatasateibutuichiran[".addFields"][] = "product_id";
$tdatasateibutuichiran[".addFields"][] = "yahoo_sinaban";
$tdatasateibutuichiran[".addFields"][] = "price";
$tdatasateibutuichiran[".addFields"][] = "sales_price";
$tdatasateibutuichiran[".addFields"][] = "yahoo_sex";
$tdatasateibutuichiran[".addFields"][] = "yahoo_junle";
$tdatasateibutuichiran[".addFields"][] = "product_num";
$tdatasateibutuichiran[".addFields"][] = "description";
$tdatasateibutuichiran[".addFields"][] = "raku_hyoujisaki_category";
$tdatasateibutuichiran[".addFields"][] = "raku_hyoujisaki_category2";
$tdatasateibutuichiran[".addFields"][] = "raku_hyoujisaki_category3";
$tdatasateibutuichiran[".addFields"][] = "raku_hyoujisaki_category4";
$tdatasateibutuichiran[".addFields"][] = "raku_hyoujisaki_category5";
$tdatasateibutuichiran[".addFields"][] = "yahoo_kataban";
$tdatasateibutuichiran[".addFields"][] = "yahoo_sozai";
$tdatasateibutuichiran[".addFields"][] = "yahoo_color";
$tdatasateibutuichiran[".addFields"][] = "yahoo_size";
$tdatasateibutuichiran[".addFields"][] = "yahoo_condition1";
$tdatasateibutuichiran[".addFields"][] = "yahoo_condition2";
$tdatasateibutuichiran[".addFields"][] = "remark";
$tdatasateibutuichiran[".addFields"][] = "yahoo_fuzokuhin";
$tdatasateibutuichiran[".addFields"][] = "yahoo_sankou_uwadai";
$tdatasateibutuichiran[".addFields"][] = "season";
$tdatasateibutuichiran[".addFields"][] = "yahoo_title";
$tdatasateibutuichiran[".addFields"][] = "goods_title";
$tdatasateibutuichiran[".addFields"][] = "raku_title";
$tdatasateibutuichiran[".addFields"][] = "raku_tag_result";
$tdatasateibutuichiran[".addFields"][] = "search_keyword";
$tdatasateibutuichiran[".addFields"][] = "stamp";
$tdatasateibutuichiran[".addFields"][] = "processing";
$tdatasateibutuichiran[".addFields"][] = "Sleeve_Length";
$tdatasateibutuichiran[".addFields"][] = "length";
$tdatasateibutuichiran[".addFields"][] = "comment";
$tdatasateibutuichiran[".addFields"][] = "satei_hi";
$tdatasateibutuichiran[".addFields"][] = "gold_property";
$tdatasateibutuichiran[".addFields"][] = "ichiba_title";
$tdatasateibutuichiran[".addFields"][] = "Gram";
$tdatasateibutuichiran[".addFields"][] = "Parent_stone";
$tdatasateibutuichiran[".addFields"][] = "Aside_stone";
$tdatasateibutuichiran[".addFields"][] = "Appraiser";
$tdatasateibutuichiran[".addFields"][] = "accessories";
$tdatasateibutuichiran[".addFields"][] = "priority";
$tdatasateibutuichiran[".addFields"][] = "A_storage";
$tdatasateibutuichiran[".addFields"][] = "price_per_gram";
$tdatasateibutuichiran[".addFields"][] = "price_per_parent_stone";
$tdatasateibutuichiran[".addFields"][] = "price_per_aside_stone";
$tdatasateibutuichiran[".addFields"][] = "price_secret";
$tdatasateibutuichiran[".addFields"][] = "line";
$tdatasateibutuichiran[".addFields"][] = "item_name";
$tdatasateibutuichiran[".addFields"][] = "serial_number";
$tdatasateibutuichiran[".addFields"][] = "motif";
$tdatasateibutuichiran[".addFields"][] = "Setting";

$tdatasateibutuichiran[".masterListFields"] = array();
$tdatasateibutuichiran[".masterListFields"][] = "ecc_seq";
$tdatasateibutuichiran[".masterListFields"][] = "status";
$tdatasateibutuichiran[".masterListFields"][] = "satei_by";
$tdatasateibutuichiran[".masterListFields"][] = "category_id";
$tdatasateibutuichiran[".masterListFields"][] = "title";
$tdatasateibutuichiran[".masterListFields"][] = "sub_category_id1";
$tdatasateibutuichiran[".masterListFields"][] = "product_id";
$tdatasateibutuichiran[".masterListFields"][] = "ecc_id";
$tdatasateibutuichiran[".masterListFields"][] = "yahoo";
$tdatasateibutuichiran[".masterListFields"][] = "yahoo_sinaban";
$tdatasateibutuichiran[".masterListFields"][] = "price";
$tdatasateibutuichiran[".masterListFields"][] = "sales_price";
$tdatasateibutuichiran[".masterListFields"][] = "yahoo_sex";
$tdatasateibutuichiran[".masterListFields"][] = "yahoo_junle";
$tdatasateibutuichiran[".masterListFields"][] = "product_num";
$tdatasateibutuichiran[".masterListFields"][] = "description";
$tdatasateibutuichiran[".masterListFields"][] = "updated_at";
$tdatasateibutuichiran[".masterListFields"][] = "raku_hyoujisaki_category";
$tdatasateibutuichiran[".masterListFields"][] = "raku_hyoujisaki_category2";
$tdatasateibutuichiran[".masterListFields"][] = "raku_hyoujisaki_category3";
$tdatasateibutuichiran[".masterListFields"][] = "raku_hyoujisaki_category4";
$tdatasateibutuichiran[".masterListFields"][] = "raku_hyoujisaki_category5";
$tdatasateibutuichiran[".masterListFields"][] = "yahoo_kataban";
$tdatasateibutuichiran[".masterListFields"][] = "yahoo_sozai";
$tdatasateibutuichiran[".masterListFields"][] = "yahoo_color";
$tdatasateibutuichiran[".masterListFields"][] = "yahoo_size";
$tdatasateibutuichiran[".masterListFields"][] = "yahoo_condition1";
$tdatasateibutuichiran[".masterListFields"][] = "yahoo_condition2";
$tdatasateibutuichiran[".masterListFields"][] = "remark";
$tdatasateibutuichiran[".masterListFields"][] = "yahoo_fuzokuhin";
$tdatasateibutuichiran[".masterListFields"][] = "yahoo_sankou_uwadai";
$tdatasateibutuichiran[".masterListFields"][] = "yahoo_saisun_sha";
$tdatasateibutuichiran[".masterListFields"][] = "season";
$tdatasateibutuichiran[".masterListFields"][] = "yahoo_title";
$tdatasateibutuichiran[".masterListFields"][] = "box_id";
$tdatasateibutuichiran[".masterListFields"][] = "goods_title";
$tdatasateibutuichiran[".masterListFields"][] = "nyuukin_price";
$tdatasateibutuichiran[".masterListFields"][] = "updated_by";
$tdatasateibutuichiran[".masterListFields"][] = "raku_title";
$tdatasateibutuichiran[".masterListFields"][] = "raku_tag_result";
$tdatasateibutuichiran[".masterListFields"][] = "search_keyword";
$tdatasateibutuichiran[".masterListFields"][] = "stamp";
$tdatasateibutuichiran[".masterListFields"][] = "timesta";
$tdatasateibutuichiran[".masterListFields"][] = "processing";
$tdatasateibutuichiran[".masterListFields"][] = "saisun_start";
$tdatasateibutuichiran[".masterListFields"][] = "Sleeve_Length";
$tdatasateibutuichiran[".masterListFields"][] = "saisun_end";
$tdatasateibutuichiran[".masterListFields"][] = "length";
$tdatasateibutuichiran[".masterListFields"][] = "label_output_flag";
$tdatasateibutuichiran[".masterListFields"][] = "Ring_size";
$tdatasateibutuichiran[".masterListFields"][] = "price_for_site";
$tdatasateibutuichiran[".masterListFields"][] = "kanryou_henbi";
$tdatasateibutuichiran[".masterListFields"][] = "yahoo_category_id";
$tdatasateibutuichiran[".masterListFields"][] = "box_sort";
$tdatasateibutuichiran[".masterListFields"][] = "Qty";
$tdatasateibutuichiran[".masterListFields"][] = "sales_period";
$tdatasateibutuichiran[".masterListFields"][] = "kaitori_by";
$tdatasateibutuichiran[".masterListFields"][] = "starting_price";
$tdatasateibutuichiran[".masterListFields"][] = "comment";
$tdatasateibutuichiran[".masterListFields"][] = "satei_hi";
$tdatasateibutuichiran[".masterListFields"][] = "kaitory_hi";
$tdatasateibutuichiran[".masterListFields"][] = "REG_PHOTOGRAPHER";
$tdatasateibutuichiran[".masterListFields"][] = "REG_AUTHOR";
$tdatasateibutuichiran[".masterListFields"][] = "REG_PACKINGS";
$tdatasateibutuichiran[".masterListFields"][] = "REG_KAKOU_DATE";
$tdatasateibutuichiran[".masterListFields"][] = "REG_KAKOU";
$tdatasateibutuichiran[".masterListFields"][] = "REG_EXHIBITOR";
$tdatasateibutuichiran[".masterListFields"][] = "REG_PHOTOGRAPHER_DATE";
$tdatasateibutuichiran[".masterListFields"][] = "DT_PACKING_DATE";
$tdatasateibutuichiran[".masterListFields"][] = "DT_UP_DATE";
$tdatasateibutuichiran[".masterListFields"][] = "AWAZU_DATE";
$tdatasateibutuichiran[".masterListFields"][] = "AWAZU_NIN";
$tdatasateibutuichiran[".masterListFields"][] = "sabun_date";
$tdatasateibutuichiran[".masterListFields"][] = "browseid";
$tdatasateibutuichiran[".masterListFields"][] = "browsenode";
$tdatasateibutuichiran[".masterListFields"][] = "gold_property";
$tdatasateibutuichiran[".masterListFields"][] = "ichiba_title";
$tdatasateibutuichiran[".masterListFields"][] = "Gram";
$tdatasateibutuichiran[".masterListFields"][] = "Parent_stone";
$tdatasateibutuichiran[".masterListFields"][] = "Aside_stone";
$tdatasateibutuichiran[".masterListFields"][] = "Appraiser";
$tdatasateibutuichiran[".masterListFields"][] = "Remarks";
$tdatasateibutuichiran[".masterListFields"][] = "Destination_selling";
$tdatasateibutuichiran[".masterListFields"][] = "Finish";
$tdatasateibutuichiran[".masterListFields"][] = "Discrimination";
$tdatasateibutuichiran[".masterListFields"][] = "accessories";
$tdatasateibutuichiran[".masterListFields"][] = "priority";
$tdatasateibutuichiran[".masterListFields"][] = "A_storage";
$tdatasateibutuichiran[".masterListFields"][] = "price_per_gram";
$tdatasateibutuichiran[".masterListFields"][] = "price_per_parent_stone";
$tdatasateibutuichiran[".masterListFields"][] = "price_per_aside_stone";
$tdatasateibutuichiran[".masterListFields"][] = "price_secret";
$tdatasateibutuichiran[".masterListFields"][] = "sales_price_secret";
$tdatasateibutuichiran[".masterListFields"][] = "eq";
$tdatasateibutuichiran[".masterListFields"][] = "en";
$tdatasateibutuichiran[".masterListFields"][] = "line";
$tdatasateibutuichiran[".masterListFields"][] = "item_name";
$tdatasateibutuichiran[".masterListFields"][] = "handle";
$tdatasateibutuichiran[".masterListFields"][] = "yahoo_color_id";
$tdatasateibutuichiran[".masterListFields"][] = "raku_dir_1";
$tdatasateibutuichiran[".masterListFields"][] = "raku_dir_2";
$tdatasateibutuichiran[".masterListFields"][] = "raku_dir_3";
$tdatasateibutuichiran[".masterListFields"][] = "raku_dir_4";
$tdatasateibutuichiran[".masterListFields"][] = "raku_dir_5";
$tdatasateibutuichiran[".masterListFields"][] = "raku_dir_result";
$tdatasateibutuichiran[".masterListFields"][] = "serial_number";
$tdatasateibutuichiran[".masterListFields"][] = "Exhibition_Date";
$tdatasateibutuichiran[".masterListFields"][] = "motif";
$tdatasateibutuichiran[".masterListFields"][] = "Setting";

$tdatasateibutuichiran[".inlineAddFields"] = array();

$tdatasateibutuichiran[".editFields"] = array();
$tdatasateibutuichiran[".editFields"][] = "status";
$tdatasateibutuichiran[".editFields"][] = "satei_by";
$tdatasateibutuichiran[".editFields"][] = "category_id";
$tdatasateibutuichiran[".editFields"][] = "sub_category_id1";
$tdatasateibutuichiran[".editFields"][] = "product_id";
$tdatasateibutuichiran[".editFields"][] = "yahoo_sinaban";
$tdatasateibutuichiran[".editFields"][] = "price";
$tdatasateibutuichiran[".editFields"][] = "sales_price";
$tdatasateibutuichiran[".editFields"][] = "yahoo_sex";
$tdatasateibutuichiran[".editFields"][] = "yahoo_junle";
$tdatasateibutuichiran[".editFields"][] = "product_num";
$tdatasateibutuichiran[".editFields"][] = "description";
$tdatasateibutuichiran[".editFields"][] = "raku_hyoujisaki_category";
$tdatasateibutuichiran[".editFields"][] = "raku_hyoujisaki_category2";
$tdatasateibutuichiran[".editFields"][] = "raku_hyoujisaki_category3";
$tdatasateibutuichiran[".editFields"][] = "raku_hyoujisaki_category4";
$tdatasateibutuichiran[".editFields"][] = "raku_hyoujisaki_category5";
$tdatasateibutuichiran[".editFields"][] = "yahoo_kataban";
$tdatasateibutuichiran[".editFields"][] = "yahoo_sozai";
$tdatasateibutuichiran[".editFields"][] = "yahoo_color";
$tdatasateibutuichiran[".editFields"][] = "yahoo_size";
$tdatasateibutuichiran[".editFields"][] = "yahoo_condition1";
$tdatasateibutuichiran[".editFields"][] = "yahoo_condition2";
$tdatasateibutuichiran[".editFields"][] = "remark";
$tdatasateibutuichiran[".editFields"][] = "yahoo_fuzokuhin";
$tdatasateibutuichiran[".editFields"][] = "yahoo_sankou_uwadai";
$tdatasateibutuichiran[".editFields"][] = "season";
$tdatasateibutuichiran[".editFields"][] = "yahoo_title";
$tdatasateibutuichiran[".editFields"][] = "goods_title";
$tdatasateibutuichiran[".editFields"][] = "raku_title";
$tdatasateibutuichiran[".editFields"][] = "raku_tag_result";
$tdatasateibutuichiran[".editFields"][] = "search_keyword";
$tdatasateibutuichiran[".editFields"][] = "stamp";
$tdatasateibutuichiran[".editFields"][] = "processing";
$tdatasateibutuichiran[".editFields"][] = "Sleeve_Length";
$tdatasateibutuichiran[".editFields"][] = "length";
$tdatasateibutuichiran[".editFields"][] = "comment";
$tdatasateibutuichiran[".editFields"][] = "satei_hi";
$tdatasateibutuichiran[".editFields"][] = "gold_property";
$tdatasateibutuichiran[".editFields"][] = "ichiba_title";
$tdatasateibutuichiran[".editFields"][] = "Gram";
$tdatasateibutuichiran[".editFields"][] = "Parent_stone";
$tdatasateibutuichiran[".editFields"][] = "Aside_stone";
$tdatasateibutuichiran[".editFields"][] = "Appraiser";
$tdatasateibutuichiran[".editFields"][] = "accessories";
$tdatasateibutuichiran[".editFields"][] = "priority";
$tdatasateibutuichiran[".editFields"][] = "A_storage";
$tdatasateibutuichiran[".editFields"][] = "price_per_gram";
$tdatasateibutuichiran[".editFields"][] = "price_per_parent_stone";
$tdatasateibutuichiran[".editFields"][] = "price_per_aside_stone";
$tdatasateibutuichiran[".editFields"][] = "price_secret";
$tdatasateibutuichiran[".editFields"][] = "line";
$tdatasateibutuichiran[".editFields"][] = "item_name";
$tdatasateibutuichiran[".editFields"][] = "serial_number";
$tdatasateibutuichiran[".editFields"][] = "motif";
$tdatasateibutuichiran[".editFields"][] = "Setting";

$tdatasateibutuichiran[".inlineEditFields"] = array();

$tdatasateibutuichiran[".updateSelectedFields"] = array();
$tdatasateibutuichiran[".updateSelectedFields"][] = "status";
$tdatasateibutuichiran[".updateSelectedFields"][] = "satei_by";
$tdatasateibutuichiran[".updateSelectedFields"][] = "category_id";
$tdatasateibutuichiran[".updateSelectedFields"][] = "sub_category_id1";
$tdatasateibutuichiran[".updateSelectedFields"][] = "product_id";
$tdatasateibutuichiran[".updateSelectedFields"][] = "yahoo_sinaban";
$tdatasateibutuichiran[".updateSelectedFields"][] = "price";
$tdatasateibutuichiran[".updateSelectedFields"][] = "sales_price";
$tdatasateibutuichiran[".updateSelectedFields"][] = "yahoo_sex";
$tdatasateibutuichiran[".updateSelectedFields"][] = "yahoo_junle";
$tdatasateibutuichiran[".updateSelectedFields"][] = "product_num";
$tdatasateibutuichiran[".updateSelectedFields"][] = "description";
$tdatasateibutuichiran[".updateSelectedFields"][] = "raku_hyoujisaki_category";
$tdatasateibutuichiran[".updateSelectedFields"][] = "raku_hyoujisaki_category2";
$tdatasateibutuichiran[".updateSelectedFields"][] = "raku_hyoujisaki_category3";
$tdatasateibutuichiran[".updateSelectedFields"][] = "raku_hyoujisaki_category4";
$tdatasateibutuichiran[".updateSelectedFields"][] = "raku_hyoujisaki_category5";
$tdatasateibutuichiran[".updateSelectedFields"][] = "yahoo_kataban";
$tdatasateibutuichiran[".updateSelectedFields"][] = "yahoo_sozai";
$tdatasateibutuichiran[".updateSelectedFields"][] = "yahoo_color";
$tdatasateibutuichiran[".updateSelectedFields"][] = "yahoo_size";
$tdatasateibutuichiran[".updateSelectedFields"][] = "yahoo_condition1";
$tdatasateibutuichiran[".updateSelectedFields"][] = "yahoo_condition2";
$tdatasateibutuichiran[".updateSelectedFields"][] = "remark";
$tdatasateibutuichiran[".updateSelectedFields"][] = "yahoo_fuzokuhin";
$tdatasateibutuichiran[".updateSelectedFields"][] = "yahoo_sankou_uwadai";
$tdatasateibutuichiran[".updateSelectedFields"][] = "season";
$tdatasateibutuichiran[".updateSelectedFields"][] = "yahoo_title";
$tdatasateibutuichiran[".updateSelectedFields"][] = "goods_title";
$tdatasateibutuichiran[".updateSelectedFields"][] = "raku_title";
$tdatasateibutuichiran[".updateSelectedFields"][] = "raku_tag_result";
$tdatasateibutuichiran[".updateSelectedFields"][] = "search_keyword";
$tdatasateibutuichiran[".updateSelectedFields"][] = "stamp";
$tdatasateibutuichiran[".updateSelectedFields"][] = "processing";
$tdatasateibutuichiran[".updateSelectedFields"][] = "Sleeve_Length";
$tdatasateibutuichiran[".updateSelectedFields"][] = "length";
$tdatasateibutuichiran[".updateSelectedFields"][] = "comment";
$tdatasateibutuichiran[".updateSelectedFields"][] = "satei_hi";
$tdatasateibutuichiran[".updateSelectedFields"][] = "gold_property";
$tdatasateibutuichiran[".updateSelectedFields"][] = "ichiba_title";
$tdatasateibutuichiran[".updateSelectedFields"][] = "Gram";
$tdatasateibutuichiran[".updateSelectedFields"][] = "Parent_stone";
$tdatasateibutuichiran[".updateSelectedFields"][] = "Aside_stone";
$tdatasateibutuichiran[".updateSelectedFields"][] = "Appraiser";
$tdatasateibutuichiran[".updateSelectedFields"][] = "accessories";
$tdatasateibutuichiran[".updateSelectedFields"][] = "priority";
$tdatasateibutuichiran[".updateSelectedFields"][] = "A_storage";
$tdatasateibutuichiran[".updateSelectedFields"][] = "price_per_gram";
$tdatasateibutuichiran[".updateSelectedFields"][] = "price_per_parent_stone";
$tdatasateibutuichiran[".updateSelectedFields"][] = "price_per_aside_stone";
$tdatasateibutuichiran[".updateSelectedFields"][] = "price_secret";
$tdatasateibutuichiran[".updateSelectedFields"][] = "line";
$tdatasateibutuichiran[".updateSelectedFields"][] = "item_name";
$tdatasateibutuichiran[".updateSelectedFields"][] = "serial_number";
$tdatasateibutuichiran[".updateSelectedFields"][] = "motif";
$tdatasateibutuichiran[".updateSelectedFields"][] = "Setting";


$tdatasateibutuichiran[".exportFields"] = array();
$tdatasateibutuichiran[".exportFields"][] = "ecc_seq";
$tdatasateibutuichiran[".exportFields"][] = "status";
$tdatasateibutuichiran[".exportFields"][] = "satei_by";
$tdatasateibutuichiran[".exportFields"][] = "category_id";
$tdatasateibutuichiran[".exportFields"][] = "sub_category_id1";
$tdatasateibutuichiran[".exportFields"][] = "product_id";
$tdatasateibutuichiran[".exportFields"][] = "yahoo_sinaban";
$tdatasateibutuichiran[".exportFields"][] = "price";
$tdatasateibutuichiran[".exportFields"][] = "sales_price";
$tdatasateibutuichiran[".exportFields"][] = "yahoo_sex";
$tdatasateibutuichiran[".exportFields"][] = "yahoo_junle";
$tdatasateibutuichiran[".exportFields"][] = "product_num";
$tdatasateibutuichiran[".exportFields"][] = "description";
$tdatasateibutuichiran[".exportFields"][] = "raku_hyoujisaki_category";
$tdatasateibutuichiran[".exportFields"][] = "raku_hyoujisaki_category2";
$tdatasateibutuichiran[".exportFields"][] = "raku_hyoujisaki_category3";
$tdatasateibutuichiran[".exportFields"][] = "raku_hyoujisaki_category4";
$tdatasateibutuichiran[".exportFields"][] = "raku_hyoujisaki_category5";
$tdatasateibutuichiran[".exportFields"][] = "yahoo_kataban";
$tdatasateibutuichiran[".exportFields"][] = "yahoo_sozai";
$tdatasateibutuichiran[".exportFields"][] = "yahoo_color";
$tdatasateibutuichiran[".exportFields"][] = "yahoo_size";
$tdatasateibutuichiran[".exportFields"][] = "yahoo_condition1";
$tdatasateibutuichiran[".exportFields"][] = "yahoo_condition2";
$tdatasateibutuichiran[".exportFields"][] = "remark";
$tdatasateibutuichiran[".exportFields"][] = "yahoo_fuzokuhin";
$tdatasateibutuichiran[".exportFields"][] = "yahoo_sankou_uwadai";
$tdatasateibutuichiran[".exportFields"][] = "season";
$tdatasateibutuichiran[".exportFields"][] = "yahoo_title";
$tdatasateibutuichiran[".exportFields"][] = "goods_title";
$tdatasateibutuichiran[".exportFields"][] = "raku_title";
$tdatasateibutuichiran[".exportFields"][] = "raku_tag_result";
$tdatasateibutuichiran[".exportFields"][] = "search_keyword";
$tdatasateibutuichiran[".exportFields"][] = "stamp";
$tdatasateibutuichiran[".exportFields"][] = "processing";
$tdatasateibutuichiran[".exportFields"][] = "Sleeve_Length";
$tdatasateibutuichiran[".exportFields"][] = "length";
$tdatasateibutuichiran[".exportFields"][] = "comment";
$tdatasateibutuichiran[".exportFields"][] = "satei_hi";
$tdatasateibutuichiran[".exportFields"][] = "gold_property";
$tdatasateibutuichiran[".exportFields"][] = "ichiba_title";
$tdatasateibutuichiran[".exportFields"][] = "Gram";
$tdatasateibutuichiran[".exportFields"][] = "Parent_stone";
$tdatasateibutuichiran[".exportFields"][] = "Aside_stone";
$tdatasateibutuichiran[".exportFields"][] = "Appraiser";
$tdatasateibutuichiran[".exportFields"][] = "accessories";
$tdatasateibutuichiran[".exportFields"][] = "priority";
$tdatasateibutuichiran[".exportFields"][] = "A_storage";
$tdatasateibutuichiran[".exportFields"][] = "price_per_gram";
$tdatasateibutuichiran[".exportFields"][] = "price_per_parent_stone";
$tdatasateibutuichiran[".exportFields"][] = "price_per_aside_stone";
$tdatasateibutuichiran[".exportFields"][] = "price_secret";
$tdatasateibutuichiran[".exportFields"][] = "line";
$tdatasateibutuichiran[".exportFields"][] = "item_name";
$tdatasateibutuichiran[".exportFields"][] = "serial_number";
$tdatasateibutuichiran[".exportFields"][] = "motif";
$tdatasateibutuichiran[".exportFields"][] = "Setting";

$tdatasateibutuichiran[".importFields"] = array();
$tdatasateibutuichiran[".importFields"][] = "product_id";
$tdatasateibutuichiran[".importFields"][] = "category_id";
$tdatasateibutuichiran[".importFields"][] = "goods_title";
$tdatasateibutuichiran[".importFields"][] = "sub_category_id1";
$tdatasateibutuichiran[".importFields"][] = "price";
$tdatasateibutuichiran[".importFields"][] = "remark";
$tdatasateibutuichiran[".importFields"][] = "sales_price";
$tdatasateibutuichiran[".importFields"][] = "description";
$tdatasateibutuichiran[".importFields"][] = "status";
$tdatasateibutuichiran[".importFields"][] = "product_num";
$tdatasateibutuichiran[".importFields"][] = "yahoo_size";
$tdatasateibutuichiran[".importFields"][] = "yahoo_title";
$tdatasateibutuichiran[".importFields"][] = "yahoo_junle";
$tdatasateibutuichiran[".importFields"][] = "yahoo_sankou_uwadai";
$tdatasateibutuichiran[".importFields"][] = "yahoo_sozai";
$tdatasateibutuichiran[".importFields"][] = "yahoo_color";
$tdatasateibutuichiran[".importFields"][] = "yahoo_kataban";
$tdatasateibutuichiran[".importFields"][] = "yahoo_condition1";
$tdatasateibutuichiran[".importFields"][] = "yahoo_condition2";
$tdatasateibutuichiran[".importFields"][] = "yahoo_fuzokuhin";
$tdatasateibutuichiran[".importFields"][] = "yahoo_sinaban";
$tdatasateibutuichiran[".importFields"][] = "yahoo_sex";
$tdatasateibutuichiran[".importFields"][] = "raku_title";
$tdatasateibutuichiran[".importFields"][] = "raku_hyoujisaki_category2";
$tdatasateibutuichiran[".importFields"][] = "raku_hyoujisaki_category";
$tdatasateibutuichiran[".importFields"][] = "raku_hyoujisaki_category3";
$tdatasateibutuichiran[".importFields"][] = "season";
$tdatasateibutuichiran[".importFields"][] = "satei_by";
$tdatasateibutuichiran[".importFields"][] = "comment";
$tdatasateibutuichiran[".importFields"][] = "satei_hi";
$tdatasateibutuichiran[".importFields"][] = "gold_property";
$tdatasateibutuichiran[".importFields"][] = "ichiba_title";
$tdatasateibutuichiran[".importFields"][] = "Gram";
$tdatasateibutuichiran[".importFields"][] = "Parent_stone";
$tdatasateibutuichiran[".importFields"][] = "Aside_stone";
$tdatasateibutuichiran[".importFields"][] = "Appraiser";
$tdatasateibutuichiran[".importFields"][] = "accessories";
$tdatasateibutuichiran[".importFields"][] = "priority";
$tdatasateibutuichiran[".importFields"][] = "A_storage";
$tdatasateibutuichiran[".importFields"][] = "price_per_gram";
$tdatasateibutuichiran[".importFields"][] = "price_per_parent_stone";
$tdatasateibutuichiran[".importFields"][] = "price_per_aside_stone";
$tdatasateibutuichiran[".importFields"][] = "price_secret";
$tdatasateibutuichiran[".importFields"][] = "line";
$tdatasateibutuichiran[".importFields"][] = "item_name";
$tdatasateibutuichiran[".importFields"][] = "raku_hyoujisaki_category4";
$tdatasateibutuichiran[".importFields"][] = "raku_hyoujisaki_category5";
$tdatasateibutuichiran[".importFields"][] = "raku_tag_result";
$tdatasateibutuichiran[".importFields"][] = "serial_number";
$tdatasateibutuichiran[".importFields"][] = "search_keyword";
$tdatasateibutuichiran[".importFields"][] = "stamp";
$tdatasateibutuichiran[".importFields"][] = "motif";
$tdatasateibutuichiran[".importFields"][] = "Setting";
$tdatasateibutuichiran[".importFields"][] = "processing";
$tdatasateibutuichiran[".importFields"][] = "Sleeve_Length";
$tdatasateibutuichiran[".importFields"][] = "length";
$tdatasateibutuichiran[".importFields"][] = "ecc_seq";

$tdatasateibutuichiran[".printFields"] = array();
$tdatasateibutuichiran[".printFields"][] = "ecc_seq";
$tdatasateibutuichiran[".printFields"][] = "status";
$tdatasateibutuichiran[".printFields"][] = "satei_by";
$tdatasateibutuichiran[".printFields"][] = "category_id";
$tdatasateibutuichiran[".printFields"][] = "sub_category_id1";
$tdatasateibutuichiran[".printFields"][] = "product_id";
$tdatasateibutuichiran[".printFields"][] = "yahoo_sinaban";
$tdatasateibutuichiran[".printFields"][] = "price";
$tdatasateibutuichiran[".printFields"][] = "sales_price";
$tdatasateibutuichiran[".printFields"][] = "yahoo_sex";
$tdatasateibutuichiran[".printFields"][] = "yahoo_junle";
$tdatasateibutuichiran[".printFields"][] = "product_num";
$tdatasateibutuichiran[".printFields"][] = "description";
$tdatasateibutuichiran[".printFields"][] = "raku_hyoujisaki_category";
$tdatasateibutuichiran[".printFields"][] = "raku_hyoujisaki_category2";
$tdatasateibutuichiran[".printFields"][] = "raku_hyoujisaki_category3";
$tdatasateibutuichiran[".printFields"][] = "raku_hyoujisaki_category4";
$tdatasateibutuichiran[".printFields"][] = "raku_hyoujisaki_category5";
$tdatasateibutuichiran[".printFields"][] = "yahoo_kataban";
$tdatasateibutuichiran[".printFields"][] = "yahoo_sozai";
$tdatasateibutuichiran[".printFields"][] = "yahoo_color";
$tdatasateibutuichiran[".printFields"][] = "yahoo_size";
$tdatasateibutuichiran[".printFields"][] = "yahoo_condition1";
$tdatasateibutuichiran[".printFields"][] = "yahoo_condition2";
$tdatasateibutuichiran[".printFields"][] = "remark";
$tdatasateibutuichiran[".printFields"][] = "yahoo_fuzokuhin";
$tdatasateibutuichiran[".printFields"][] = "yahoo_sankou_uwadai";
$tdatasateibutuichiran[".printFields"][] = "season";
$tdatasateibutuichiran[".printFields"][] = "yahoo_title";
$tdatasateibutuichiran[".printFields"][] = "goods_title";
$tdatasateibutuichiran[".printFields"][] = "raku_title";
$tdatasateibutuichiran[".printFields"][] = "raku_tag_result";
$tdatasateibutuichiran[".printFields"][] = "search_keyword";
$tdatasateibutuichiran[".printFields"][] = "stamp";
$tdatasateibutuichiran[".printFields"][] = "processing";
$tdatasateibutuichiran[".printFields"][] = "Sleeve_Length";
$tdatasateibutuichiran[".printFields"][] = "length";
$tdatasateibutuichiran[".printFields"][] = "comment";
$tdatasateibutuichiran[".printFields"][] = "satei_hi";
$tdatasateibutuichiran[".printFields"][] = "gold_property";
$tdatasateibutuichiran[".printFields"][] = "ichiba_title";
$tdatasateibutuichiran[".printFields"][] = "Gram";
$tdatasateibutuichiran[".printFields"][] = "Parent_stone";
$tdatasateibutuichiran[".printFields"][] = "Aside_stone";
$tdatasateibutuichiran[".printFields"][] = "Appraiser";
$tdatasateibutuichiran[".printFields"][] = "accessories";
$tdatasateibutuichiran[".printFields"][] = "priority";
$tdatasateibutuichiran[".printFields"][] = "A_storage";
$tdatasateibutuichiran[".printFields"][] = "price_per_gram";
$tdatasateibutuichiran[".printFields"][] = "price_per_parent_stone";
$tdatasateibutuichiran[".printFields"][] = "price_per_aside_stone";
$tdatasateibutuichiran[".printFields"][] = "price_secret";
$tdatasateibutuichiran[".printFields"][] = "line";
$tdatasateibutuichiran[".printFields"][] = "item_name";
$tdatasateibutuichiran[".printFields"][] = "serial_number";
$tdatasateibutuichiran[".printFields"][] = "motif";
$tdatasateibutuichiran[".printFields"][] = "Setting";

//	product_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "product_id";
	$fdata["GoodName"] = "product_id";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sateibutuichiran","product_id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "product_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "shouhin.product_id";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

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




	$tdatasateibutuichiran["product_id"] = $fdata;
//	category_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "category_id";
	$fdata["GoodName"] = "category_id";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sateibutuichiran","category_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "category_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "shouhin.category_id";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdatasateibutuichiran["category_id"] = $fdata;
//	goods_title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "goods_title";
	$fdata["GoodName"] = "goods_title";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sateibutuichiran","goods_title");
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
	$fdata["FullName"] = "shouhin.goods_title";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatasateibutuichiran["goods_title"] = $fdata;
//	title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "title";
	$fdata["GoodName"] = "title";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sateibutuichiran","title");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "title";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "shouhin.title";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatasateibutuichiran["title"] = $fdata;
//	sub_category_id1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "sub_category_id1";
	$fdata["GoodName"] = "sub_category_id1";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sateibutuichiran","sub_category_id1");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "sub_category_id1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "shouhin.sub_category_id1";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdatasateibutuichiran["sub_category_id1"] = $fdata;
//	ecc_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "ecc_id";
	$fdata["GoodName"] = "ecc_id";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sateibutuichiran","ecc_id");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "ecc_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "shouhin.ecc_id";

	
	
			
				$fdata["UploadFolder"] = "files";

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








	$tdatasateibutuichiran["ecc_id"] = $fdata;
//	price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "price";
	$fdata["GoodName"] = "price";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sateibutuichiran","price");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "price";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "shouhin.price";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatasateibutuichiran["price"] = $fdata;
//	yahoo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "yahoo";
	$fdata["GoodName"] = "yahoo";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sateibutuichiran","yahoo");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "yahoo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "shouhin.yahoo";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatasateibutuichiran["yahoo"] = $fdata;
//	remark
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "remark";
	$fdata["GoodName"] = "remark";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sateibutuichiran","remark");
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
	$fdata["FullName"] = "shouhin.remark";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdatasateibutuichiran["remark"] = $fdata;
//	sales_price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "sales_price";
	$fdata["GoodName"] = "sales_price";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sateibutuichiran","sales_price");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "sales_price";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "shouhin.sales_price";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatasateibutuichiran["sales_price"] = $fdata;
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sateibutuichiran","description");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "description";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "shouhin.description";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdatasateibutuichiran["description"] = $fdata;
//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sateibutuichiran","status");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "status";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "shouhin.status";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdatasateibutuichiran["status"] = $fdata;
//	product_num
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "product_num";
	$fdata["GoodName"] = "product_num";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sateibutuichiran","product_num");
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
	$fdata["FullName"] = "shouhin.product_num";

	
	
				$fdata["FieldPermissions"] = true;

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
	$edata["LookupTable"] = "mst_brand";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "name";

	
	$edata["LookupOrderBy"] = "app_name";

	
	
	
	

	
	
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




	$tdatasateibutuichiran["product_num"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sateibutuichiran","updated_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "updated_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "shouhin.updated_at";

	
	
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








	$tdatasateibutuichiran["updated_at"] = $fdata;
//	yahoo_size
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "yahoo_size";
	$fdata["GoodName"] = "yahoo_size";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sateibutuichiran","yahoo_size");
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
	$fdata["FullName"] = "shouhin.yahoo_size";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdatasateibutuichiran["yahoo_size"] = $fdata;
//	yahoo_title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "yahoo_title";
	$fdata["GoodName"] = "yahoo_title";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sateibutuichiran","yahoo_title");
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
	$fdata["FullName"] = "shouhin.yahoo_title";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatasateibutuichiran["yahoo_title"] = $fdata;
//	yahoo_junle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "yahoo_junle";
	$fdata["GoodName"] = "yahoo_junle";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sateibutuichiran","yahoo_junle");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "yahoo_junle";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "shouhin.yahoo_junle";

	
	
				$fdata["FieldPermissions"] = true;

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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatasateibutuichiran["yahoo_junle"] = $fdata;
//	yahoo_sankou_uwadai
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "yahoo_sankou_uwadai";
	$fdata["GoodName"] = "yahoo_sankou_uwadai";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sateibutuichiran","yahoo_sankou_uwadai");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "yahoo_sankou_uwadai";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "shouhin.yahoo_sankou_uwadai";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatasateibutuichiran["yahoo_sankou_uwadai"] = $fdata;
//	yahoo_sozai
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "yahoo_sozai";
	$fdata["GoodName"] = "yahoo_sozai";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sateibutuichiran","yahoo_sozai");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "yahoo_sozai";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "shouhin.yahoo_sozai";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdatasateibutuichiran["yahoo_sozai"] = $fdata;
//	yahoo_color
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "yahoo_color";
	$fdata["GoodName"] = "yahoo_color";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sateibutuichiran","yahoo_color");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "yahoo_color";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "shouhin.yahoo_color";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdatasateibutuichiran["yahoo_color"] = $fdata;
//	yahoo_kataban
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "yahoo_kataban";
	$fdata["GoodName"] = "yahoo_kataban";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sateibutuichiran","yahoo_kataban");
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
	$fdata["FullName"] = "shouhin.yahoo_kataban";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatasateibutuichiran["yahoo_kataban"] = $fdata;
//	yahoo_condition1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "yahoo_condition1";
	$fdata["GoodName"] = "yahoo_condition1";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sateibutuichiran","yahoo_condition1");
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
	$fdata["FullName"] = "shouhin.yahoo_condition1";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdatasateibutuichiran["yahoo_condition1"] = $fdata;
//	yahoo_condition2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "yahoo_condition2";
	$fdata["GoodName"] = "yahoo_condition2";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sateibutuichiran","yahoo_condition2");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "yahoo_condition2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "shouhin.yahoo_condition2";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdatasateibutuichiran["yahoo_condition2"] = $fdata;
//	yahoo_fuzokuhin
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "yahoo_fuzokuhin";
	$fdata["GoodName"] = "yahoo_fuzokuhin";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sateibutuichiran","yahoo_fuzokuhin");
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
	$fdata["FullName"] = "shouhin.yahoo_fuzokuhin";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatasateibutuichiran["yahoo_fuzokuhin"] = $fdata;
//	yahoo_sinaban
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "yahoo_sinaban";
	$fdata["GoodName"] = "yahoo_sinaban";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sateibutuichiran","yahoo_sinaban");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "yahoo_sinaban";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "shouhin.yahoo_sinaban";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatasateibutuichiran["yahoo_sinaban"] = $fdata;
//	yahoo_saisun_sha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "yahoo_saisun_sha";
	$fdata["GoodName"] = "yahoo_saisun_sha";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sateibutuichiran","yahoo_saisun_sha");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "yahoo_saisun_sha";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "shouhin.yahoo_saisun_sha";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatasateibutuichiran["yahoo_saisun_sha"] = $fdata;
//	yahoo_sex
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "yahoo_sex";
	$fdata["GoodName"] = "yahoo_sex";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sateibutuichiran","yahoo_sex");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "yahoo_sex";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "shouhin.yahoo_sex";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdatasateibutuichiran["yahoo_sex"] = $fdata;
//	box_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "box_id";
	$fdata["GoodName"] = "box_id";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sateibutuichiran","box_id");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "box_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "shouhin.box_id";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatasateibutuichiran["box_id"] = $fdata;
//	nyuukin_price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "nyuukin_price";
	$fdata["GoodName"] = "nyuukin_price";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sateibutuichiran","nyuukin_price");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "nyuukin_price";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "shouhin.nyuukin_price";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatasateibutuichiran["nyuukin_price"] = $fdata;
//	updated_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "updated_by";
	$fdata["GoodName"] = "updated_by";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sateibutuichiran","updated_by");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "updated_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "shouhin.updated_by";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatasateibutuichiran["updated_by"] = $fdata;
//	raku_title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "raku_title";
	$fdata["GoodName"] = "raku_title";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sateibutuichiran","raku_title");
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
	$fdata["FullName"] = "shouhin.raku_title";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatasateibutuichiran["raku_title"] = $fdata;
//	raku_hyoujisaki_category2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "raku_hyoujisaki_category2";
	$fdata["GoodName"] = "raku_hyoujisaki_category2";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sateibutuichiran","raku_hyoujisaki_category2");
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
	$fdata["FullName"] = "shouhin.raku_hyoujisaki_category2";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatasateibutuichiran["raku_hyoujisaki_category2"] = $fdata;
//	raku_hyoujisaki_category
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "raku_hyoujisaki_category";
	$fdata["GoodName"] = "raku_hyoujisaki_category";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sateibutuichiran","raku_hyoujisaki_category");
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
	$fdata["FullName"] = "shouhin.raku_hyoujisaki_category";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatasateibutuichiran["raku_hyoujisaki_category"] = $fdata;
//	raku_hyoujisaki_category3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "raku_hyoujisaki_category3";
	$fdata["GoodName"] = "raku_hyoujisaki_category3";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sateibutuichiran","raku_hyoujisaki_category3");
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
	$fdata["FullName"] = "shouhin.raku_hyoujisaki_category3";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatasateibutuichiran["raku_hyoujisaki_category3"] = $fdata;
//	timesta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "timesta";
	$fdata["GoodName"] = "timesta";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sateibutuichiran","timesta");
	$fdata["FieldType"] = 135;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "timesta";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "shouhin.timesta";

	
	
			
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








	$tdatasateibutuichiran["timesta"] = $fdata;
//	saisun_start
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "saisun_start";
	$fdata["GoodName"] = "saisun_start";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sateibutuichiran","saisun_start");
	$fdata["FieldType"] = 135;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "saisun_start";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "shouhin.saisun_start";

	
	
			
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








	$tdatasateibutuichiran["saisun_start"] = $fdata;
//	saisun_end
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "saisun_end";
	$fdata["GoodName"] = "saisun_end";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sateibutuichiran","saisun_end");
	$fdata["FieldType"] = 135;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "saisun_end";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "shouhin.saisun_end";

	
	
			
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








	$tdatasateibutuichiran["saisun_end"] = $fdata;
//	label_output_flag
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "label_output_flag";
	$fdata["GoodName"] = "label_output_flag";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sateibutuichiran","label_output_flag");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "label_output_flag";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "shouhin.label_output_flag";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatasateibutuichiran["label_output_flag"] = $fdata;
//	season
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "season";
	$fdata["GoodName"] = "season";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sateibutuichiran","season");
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
	$fdata["FullName"] = "shouhin.season";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatasateibutuichiran["season"] = $fdata;
//	kanryou_henbi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "kanryou_henbi";
	$fdata["GoodName"] = "kanryou_henbi";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sateibutuichiran","kanryou_henbi");
	$fdata["FieldType"] = 135;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "kanryou_henbi";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "shouhin.kanryou_henbi";

	
	
			
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








	$tdatasateibutuichiran["kanryou_henbi"] = $fdata;
//	box_sort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "box_sort";
	$fdata["GoodName"] = "box_sort";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sateibutuichiran","box_sort");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "box_sort";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "shouhin.box_sort";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatasateibutuichiran["box_sort"] = $fdata;
//	satei_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "satei_by";
	$fdata["GoodName"] = "satei_by";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sateibutuichiran","satei_by");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "satei_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "shouhin.satei_by";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdatasateibutuichiran["satei_by"] = $fdata;
//	kaitori_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "kaitori_by";
	$fdata["GoodName"] = "kaitori_by";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sateibutuichiran","kaitori_by");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "kaitori_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "shouhin.kaitori_by";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatasateibutuichiran["kaitori_by"] = $fdata;
//	comment
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "comment";
	$fdata["GoodName"] = "comment";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sateibutuichiran","comment");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "comment";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "shouhin.`comment`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatasateibutuichiran["comment"] = $fdata;
//	satei_hi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "satei_hi";
	$fdata["GoodName"] = "satei_hi";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sateibutuichiran","satei_hi");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "satei_hi";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "shouhin.satei_hi";

	
	
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




	$tdatasateibutuichiran["satei_hi"] = $fdata;
//	kaitory_hi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "kaitory_hi";
	$fdata["GoodName"] = "kaitory_hi";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sateibutuichiran","kaitory_hi");
	$fdata["FieldType"] = 135;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "kaitory_hi";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "shouhin.kaitory_hi";

	
	
			
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








	$tdatasateibutuichiran["kaitory_hi"] = $fdata;
//	REG_PHOTOGRAPHER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 47;
	$fdata["strName"] = "REG_PHOTOGRAPHER";
	$fdata["GoodName"] = "REG_PHOTOGRAPHER";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sateibutuichiran","REG_PHOTOGRAPHER");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "REG_PHOTOGRAPHER";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "shouhin.REG_PHOTOGRAPHER";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatasateibutuichiran["REG_PHOTOGRAPHER"] = $fdata;
//	REG_AUTHOR
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 48;
	$fdata["strName"] = "REG_AUTHOR";
	$fdata["GoodName"] = "REG_AUTHOR";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sateibutuichiran","REG_AUTHOR");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "REG_AUTHOR";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "shouhin.REG_AUTHOR";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatasateibutuichiran["REG_AUTHOR"] = $fdata;
//	REG_PACKINGS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 49;
	$fdata["strName"] = "REG_PACKINGS";
	$fdata["GoodName"] = "REG_PACKINGS";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sateibutuichiran","REG_PACKINGS");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "REG_PACKINGS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "shouhin.REG_PACKINGS";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatasateibutuichiran["REG_PACKINGS"] = $fdata;
//	REG_KAKOU_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 50;
	$fdata["strName"] = "REG_KAKOU_DATE";
	$fdata["GoodName"] = "REG_KAKOU_DATE";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sateibutuichiran","REG_KAKOU_DATE");
	$fdata["FieldType"] = 135;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "REG_KAKOU_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "shouhin.REG_KAKOU_DATE";

	
	
			
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








	$tdatasateibutuichiran["REG_KAKOU_DATE"] = $fdata;
//	REG_KAKOU
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 51;
	$fdata["strName"] = "REG_KAKOU";
	$fdata["GoodName"] = "REG_KAKOU";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sateibutuichiran","REG_KAKOU");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "REG_KAKOU";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "shouhin.REG_KAKOU";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatasateibutuichiran["REG_KAKOU"] = $fdata;
//	REG_EXHIBITOR
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 52;
	$fdata["strName"] = "REG_EXHIBITOR";
	$fdata["GoodName"] = "REG_EXHIBITOR";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sateibutuichiran","REG_EXHIBITOR");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "REG_EXHIBITOR";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "shouhin.REG_EXHIBITOR";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatasateibutuichiran["REG_EXHIBITOR"] = $fdata;
//	REG_PHOTOGRAPHER_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 53;
	$fdata["strName"] = "REG_PHOTOGRAPHER_DATE";
	$fdata["GoodName"] = "REG_PHOTOGRAPHER_DATE";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sateibutuichiran","REG_PHOTOGRAPHER_DATE");
	$fdata["FieldType"] = 135;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "REG_PHOTOGRAPHER_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "shouhin.REG_PHOTOGRAPHER_DATE";

	
	
			
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








	$tdatasateibutuichiran["REG_PHOTOGRAPHER_DATE"] = $fdata;
//	DT_PACKING_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 54;
	$fdata["strName"] = "DT_PACKING_DATE";
	$fdata["GoodName"] = "DT_PACKING_DATE";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sateibutuichiran","DT_PACKING_DATE");
	$fdata["FieldType"] = 135;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "DT_PACKING_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "shouhin.DT_PACKING_DATE";

	
	
			
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








	$tdatasateibutuichiran["DT_PACKING_DATE"] = $fdata;
//	DT_UP_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 55;
	$fdata["strName"] = "DT_UP_DATE";
	$fdata["GoodName"] = "DT_UP_DATE";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sateibutuichiran","DT_UP_DATE");
	$fdata["FieldType"] = 135;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "DT_UP_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "shouhin.DT_UP_DATE";

	
	
			
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








	$tdatasateibutuichiran["DT_UP_DATE"] = $fdata;
//	AWAZU_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 56;
	$fdata["strName"] = "AWAZU_DATE";
	$fdata["GoodName"] = "AWAZU_DATE";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sateibutuichiran","AWAZU_DATE");
	$fdata["FieldType"] = 135;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "AWAZU_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "shouhin.AWAZU_DATE";

	
	
			
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








	$tdatasateibutuichiran["AWAZU_DATE"] = $fdata;
//	AWAZU_NIN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 57;
	$fdata["strName"] = "AWAZU_NIN";
	$fdata["GoodName"] = "AWAZU_NIN";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sateibutuichiran","AWAZU_NIN");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "AWAZU_NIN";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "shouhin.AWAZU_NIN";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatasateibutuichiran["AWAZU_NIN"] = $fdata;
//	sabun_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 58;
	$fdata["strName"] = "sabun_date";
	$fdata["GoodName"] = "sabun_date";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sateibutuichiran","sabun_date");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "sabun_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "shouhin.sabun_date";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatasateibutuichiran["sabun_date"] = $fdata;
//	browseid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 59;
	$fdata["strName"] = "browseid";
	$fdata["GoodName"] = "browseid";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sateibutuichiran","browseid");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "browseid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "shouhin.browseid";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatasateibutuichiran["browseid"] = $fdata;
//	browsenode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 60;
	$fdata["strName"] = "browsenode";
	$fdata["GoodName"] = "browsenode";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sateibutuichiran","browsenode");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "browsenode";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "shouhin.browsenode";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatasateibutuichiran["browsenode"] = $fdata;
//	gold_property
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 61;
	$fdata["strName"] = "gold_property";
	$fdata["GoodName"] = "gold_property";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sateibutuichiran","gold_property");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "gold_property";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "shouhin.gold_property";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatasateibutuichiran["gold_property"] = $fdata;
//	ichiba_title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 62;
	$fdata["strName"] = "ichiba_title";
	$fdata["GoodName"] = "ichiba_title";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sateibutuichiran","ichiba_title");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ichiba_title";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "shouhin.ichiba_title";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatasateibutuichiran["ichiba_title"] = $fdata;
//	Gram
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 63;
	$fdata["strName"] = "Gram";
	$fdata["GoodName"] = "Gram";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sateibutuichiran","Gram");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Gram";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "shouhin.Gram";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatasateibutuichiran["Gram"] = $fdata;
//	Parent_stone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 64;
	$fdata["strName"] = "Parent_stone";
	$fdata["GoodName"] = "Parent_stone";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sateibutuichiran","Parent_stone");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Parent_stone";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "shouhin.Parent_stone";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatasateibutuichiran["Parent_stone"] = $fdata;
//	Aside_stone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 65;
	$fdata["strName"] = "Aside_stone";
	$fdata["GoodName"] = "Aside_stone";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sateibutuichiran","Aside_stone");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Aside_stone";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "shouhin.Aside_stone";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatasateibutuichiran["Aside_stone"] = $fdata;
//	Appraiser
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 66;
	$fdata["strName"] = "Appraiser";
	$fdata["GoodName"] = "Appraiser";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sateibutuichiran","Appraiser");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Appraiser";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "shouhin.Appraiser";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatasateibutuichiran["Appraiser"] = $fdata;
//	Remarks
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 67;
	$fdata["strName"] = "Remarks";
	$fdata["GoodName"] = "Remarks";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sateibutuichiran","Remarks");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "Remarks";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "shouhin.Remarks";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatasateibutuichiran["Remarks"] = $fdata;
//	Destination_selling
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 68;
	$fdata["strName"] = "Destination_selling";
	$fdata["GoodName"] = "Destination_selling";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sateibutuichiran","Destination_selling");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "Destination_selling";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "shouhin.Destination_selling";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatasateibutuichiran["Destination_selling"] = $fdata;
//	Finish
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 69;
	$fdata["strName"] = "Finish";
	$fdata["GoodName"] = "Finish";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sateibutuichiran","Finish");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "Finish";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "shouhin.Finish";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatasateibutuichiran["Finish"] = $fdata;
//	Discrimination
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 70;
	$fdata["strName"] = "Discrimination";
	$fdata["GoodName"] = "Discrimination";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sateibutuichiran","Discrimination");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "Discrimination";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "shouhin.Discrimination";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatasateibutuichiran["Discrimination"] = $fdata;
//	accessories
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 71;
	$fdata["strName"] = "accessories";
	$fdata["GoodName"] = "accessories";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sateibutuichiran","accessories");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "accessories";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "shouhin.accessories";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatasateibutuichiran["accessories"] = $fdata;
//	priority
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 72;
	$fdata["strName"] = "priority";
	$fdata["GoodName"] = "priority";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sateibutuichiran","priority");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "priority";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "shouhin.priority";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatasateibutuichiran["priority"] = $fdata;
//	A_storage
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 73;
	$fdata["strName"] = "A_storage";
	$fdata["GoodName"] = "A_storage";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sateibutuichiran","A_storage");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "A_storage";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "shouhin.A_storage";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatasateibutuichiran["A_storage"] = $fdata;
//	price_per_gram
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 74;
	$fdata["strName"] = "price_per_gram";
	$fdata["GoodName"] = "price_per_gram";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sateibutuichiran","price_per_gram");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "price_per_gram";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "shouhin.price_per_gram";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatasateibutuichiran["price_per_gram"] = $fdata;
//	price_per_parent_stone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 75;
	$fdata["strName"] = "price_per_parent_stone";
	$fdata["GoodName"] = "price_per_parent_stone";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sateibutuichiran","price_per_parent_stone");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "price_per_parent_stone";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "shouhin.price_per_parent_stone";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatasateibutuichiran["price_per_parent_stone"] = $fdata;
//	price_per_aside_stone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 76;
	$fdata["strName"] = "price_per_aside_stone";
	$fdata["GoodName"] = "price_per_aside_stone";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sateibutuichiran","price_per_aside_stone");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "price_per_aside_stone";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "shouhin.price_per_aside_stone";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatasateibutuichiran["price_per_aside_stone"] = $fdata;
//	price_secret
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 77;
	$fdata["strName"] = "price_secret";
	$fdata["GoodName"] = "price_secret";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sateibutuichiran","price_secret");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "price_secret";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "shouhin.price_secret";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatasateibutuichiran["price_secret"] = $fdata;
//	sales_price_secret
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 78;
	$fdata["strName"] = "sales_price_secret";
	$fdata["GoodName"] = "sales_price_secret";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sateibutuichiran","sales_price_secret");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "sales_price_secret";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "shouhin.sales_price_secret";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatasateibutuichiran["sales_price_secret"] = $fdata;
//	eq
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 79;
	$fdata["strName"] = "eq";
	$fdata["GoodName"] = "eq";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sateibutuichiran","eq");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "eq";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "shouhin.eq";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatasateibutuichiran["eq"] = $fdata;
//	en
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 80;
	$fdata["strName"] = "en";
	$fdata["GoodName"] = "en";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sateibutuichiran","en");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "en";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "shouhin.en";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatasateibutuichiran["en"] = $fdata;
//	line
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 81;
	$fdata["strName"] = "line";
	$fdata["GoodName"] = "line";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sateibutuichiran","line");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "line";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "shouhin.line";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatasateibutuichiran["line"] = $fdata;
//	item_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 82;
	$fdata["strName"] = "item_name";
	$fdata["GoodName"] = "item_name";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sateibutuichiran","item_name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "item_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "shouhin.item_name";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatasateibutuichiran["item_name"] = $fdata;
//	handle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 83;
	$fdata["strName"] = "handle";
	$fdata["GoodName"] = "handle";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sateibutuichiran","handle");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "handle";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "shouhin.handle";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatasateibutuichiran["handle"] = $fdata;
//	yahoo_color_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 84;
	$fdata["strName"] = "yahoo_color_id";
	$fdata["GoodName"] = "yahoo_color_id";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sateibutuichiran","yahoo_color_id");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "yahoo_color_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "shouhin.yahoo_color_id";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatasateibutuichiran["yahoo_color_id"] = $fdata;
//	raku_hyoujisaki_category4
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 85;
	$fdata["strName"] = "raku_hyoujisaki_category4";
	$fdata["GoodName"] = "raku_hyoujisaki_category4";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sateibutuichiran","raku_hyoujisaki_category4");
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
	$fdata["FullName"] = "shouhin.raku_hyoujisaki_category4";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=60";

		$edata["controlWidth"] = 200;

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




	$tdatasateibutuichiran["raku_hyoujisaki_category4"] = $fdata;
//	raku_hyoujisaki_category5
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 86;
	$fdata["strName"] = "raku_hyoujisaki_category5";
	$fdata["GoodName"] = "raku_hyoujisaki_category5";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sateibutuichiran","raku_hyoujisaki_category5");
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
	$fdata["FullName"] = "shouhin.raku_hyoujisaki_category5";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=60";

		$edata["controlWidth"] = 200;

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




	$tdatasateibutuichiran["raku_hyoujisaki_category5"] = $fdata;
//	raku_dir_1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 87;
	$fdata["strName"] = "raku_dir_1";
	$fdata["GoodName"] = "raku_dir_1";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sateibutuichiran","raku_dir_1");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "raku_dir_1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "shouhin.raku_dir_1";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatasateibutuichiran["raku_dir_1"] = $fdata;
//	raku_dir_2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 88;
	$fdata["strName"] = "raku_dir_2";
	$fdata["GoodName"] = "raku_dir_2";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sateibutuichiran","raku_dir_2");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "raku_dir_2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "shouhin.raku_dir_2";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatasateibutuichiran["raku_dir_2"] = $fdata;
//	raku_dir_3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 89;
	$fdata["strName"] = "raku_dir_3";
	$fdata["GoodName"] = "raku_dir_3";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sateibutuichiran","raku_dir_3");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "raku_dir_3";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "shouhin.raku_dir_3";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatasateibutuichiran["raku_dir_3"] = $fdata;
//	raku_dir_4
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 90;
	$fdata["strName"] = "raku_dir_4";
	$fdata["GoodName"] = "raku_dir_4";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sateibutuichiran","raku_dir_4");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "raku_dir_4";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "shouhin.raku_dir_4";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatasateibutuichiran["raku_dir_4"] = $fdata;
//	raku_dir_5
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 91;
	$fdata["strName"] = "raku_dir_5";
	$fdata["GoodName"] = "raku_dir_5";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sateibutuichiran","raku_dir_5");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "raku_dir_5";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "shouhin.raku_dir_5";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatasateibutuichiran["raku_dir_5"] = $fdata;
//	raku_dir_result
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 92;
	$fdata["strName"] = "raku_dir_result";
	$fdata["GoodName"] = "raku_dir_result";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sateibutuichiran","raku_dir_result");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "raku_dir_result";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "shouhin.raku_dir_result";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatasateibutuichiran["raku_dir_result"] = $fdata;
//	raku_tag_result
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 93;
	$fdata["strName"] = "raku_tag_result";
	$fdata["GoodName"] = "raku_tag_result";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sateibutuichiran","raku_tag_result");
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
	$fdata["FullName"] = "shouhin.raku_tag_result";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdatasateibutuichiran["raku_tag_result"] = $fdata;
//	serial_number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 94;
	$fdata["strName"] = "serial_number";
	$fdata["GoodName"] = "serial_number";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sateibutuichiran","serial_number");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "serial_number";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "shouhin.serial_number";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatasateibutuichiran["serial_number"] = $fdata;
//	Exhibition_Date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 95;
	$fdata["strName"] = "Exhibition_Date";
	$fdata["GoodName"] = "Exhibition_Date";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sateibutuichiran","Exhibition_Date");
	$fdata["FieldType"] = 135;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "Exhibition_Date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "shouhin.Exhibition_Date";

	
	
			
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








	$tdatasateibutuichiran["Exhibition_Date"] = $fdata;
//	search_keyword
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 96;
	$fdata["strName"] = "search_keyword";
	$fdata["GoodName"] = "search_keyword";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sateibutuichiran","search_keyword");
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
	$fdata["FullName"] = "shouhin.search_keyword";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatasateibutuichiran["search_keyword"] = $fdata;
//	stamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 97;
	$fdata["strName"] = "stamp";
	$fdata["GoodName"] = "stamp";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sateibutuichiran","stamp");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "stamp";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "shouhin.stamp";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatasateibutuichiran["stamp"] = $fdata;
//	motif
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 98;
	$fdata["strName"] = "motif";
	$fdata["GoodName"] = "motif";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sateibutuichiran","motif");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "motif";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "shouhin.motif";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatasateibutuichiran["motif"] = $fdata;
//	Setting
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 99;
	$fdata["strName"] = "Setting";
	$fdata["GoodName"] = "Setting";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sateibutuichiran","Setting");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Setting";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "shouhin.Setting";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatasateibutuichiran["Setting"] = $fdata;
//	processing
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 100;
	$fdata["strName"] = "processing";
	$fdata["GoodName"] = "processing";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sateibutuichiran","processing");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "processing";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "shouhin.processing";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatasateibutuichiran["processing"] = $fdata;
//	Sleeve_Length
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 101;
	$fdata["strName"] = "Sleeve_Length";
	$fdata["GoodName"] = "Sleeve_Length";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sateibutuichiran","Sleeve_Length");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Sleeve_Length";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "shouhin.Sleeve_Length";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatasateibutuichiran["Sleeve_Length"] = $fdata;
//	length
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 102;
	$fdata["strName"] = "length";
	$fdata["GoodName"] = "length";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sateibutuichiran","length");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "length";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "shouhin.length";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatasateibutuichiran["length"] = $fdata;
//	Ring_size
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 103;
	$fdata["strName"] = "Ring_size";
	$fdata["GoodName"] = "Ring_size";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sateibutuichiran","Ring_size");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "Ring_size";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "shouhin.Ring_size";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatasateibutuichiran["Ring_size"] = $fdata;
//	price_for_site
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 104;
	$fdata["strName"] = "price_for_site";
	$fdata["GoodName"] = "price_for_site";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sateibutuichiran","price_for_site");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "price_for_site";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "shouhin.price_for_site";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatasateibutuichiran["price_for_site"] = $fdata;
//	yahoo_category_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 105;
	$fdata["strName"] = "yahoo_category_id";
	$fdata["GoodName"] = "yahoo_category_id";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sateibutuichiran","yahoo_category_id");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "yahoo_category_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "shouhin.yahoo_category_id";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatasateibutuichiran["yahoo_category_id"] = $fdata;
//	Qty
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 106;
	$fdata["strName"] = "Qty";
	$fdata["GoodName"] = "Qty";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sateibutuichiran","Qty");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "Qty";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "shouhin.Qty";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatasateibutuichiran["Qty"] = $fdata;
//	sales_period
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 107;
	$fdata["strName"] = "sales_period";
	$fdata["GoodName"] = "sales_period";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sateibutuichiran","sales_period");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "sales_period";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "shouhin.sales_period";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatasateibutuichiran["sales_period"] = $fdata;
//	starting_price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 108;
	$fdata["strName"] = "starting_price";
	$fdata["GoodName"] = "starting_price";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sateibutuichiran","starting_price");
	$fdata["FieldType"] = 5;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "starting_price";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "shouhin.starting_price";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatasateibutuichiran["starting_price"] = $fdata;
//	ecc_seq
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 109;
	$fdata["strName"] = "ecc_seq";
	$fdata["GoodName"] = "ecc_seq";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("sateibutuichiran","ecc_seq");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ecc_seq";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Eoc.ecc_seq";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatasateibutuichiran["ecc_seq"] = $fdata;


$tables_data["sateibutuichiran"]=&$tdatasateibutuichiran;
$field_labels["sateibutuichiran"] = &$fieldLabelssateibutuichiran;
$fieldToolTips["sateibutuichiran"] = &$fieldToolTipssateibutuichiran;
$placeHolders["sateibutuichiran"] = &$placeHolderssateibutuichiran;
$page_titles["sateibutuichiran"] = &$pageTitlessateibutuichiran;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["sateibutuichiran"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["sateibutuichiran"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_sateibutuichiran()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "shouhin.product_id,  shouhin.category_id,  shouhin.goods_title,  shouhin.title,  shouhin.sub_category_id1,  shouhin.ecc_id,  shouhin.price,  shouhin.yahoo,  shouhin.remark,  shouhin.sales_price,  shouhin.description,  shouhin.status,  shouhin.product_num,  shouhin.updated_at,  shouhin.yahoo_size,  shouhin.yahoo_title,  shouhin.yahoo_junle,  shouhin.yahoo_sankou_uwadai,  shouhin.yahoo_sozai,  shouhin.yahoo_color,  shouhin.yahoo_kataban,  shouhin.yahoo_condition1,  shouhin.yahoo_condition2,  shouhin.yahoo_fuzokuhin,  shouhin.yahoo_sinaban,  shouhin.yahoo_saisun_sha,  shouhin.yahoo_sex,  shouhin.box_id,  shouhin.nyuukin_price,  shouhin.updated_by,  shouhin.raku_title,  shouhin.raku_hyoujisaki_category2,  shouhin.raku_hyoujisaki_category,  shouhin.raku_hyoujisaki_category3,  shouhin.timesta,  shouhin.saisun_start,  shouhin.saisun_end,  shouhin.label_output_flag,  shouhin.season,  shouhin.kanryou_henbi,  shouhin.box_sort,  shouhin.satei_by,  shouhin.kaitori_by,  shouhin.`comment`,  shouhin.satei_hi,  shouhin.kaitory_hi,  shouhin.REG_PHOTOGRAPHER,  shouhin.REG_AUTHOR,  shouhin.REG_PACKINGS,  shouhin.REG_KAKOU_DATE,  shouhin.REG_KAKOU,  shouhin.REG_EXHIBITOR,  shouhin.REG_PHOTOGRAPHER_DATE,  shouhin.DT_PACKING_DATE,  shouhin.DT_UP_DATE,  shouhin.AWAZU_DATE,  shouhin.AWAZU_NIN,  shouhin.sabun_date,  shouhin.browseid,  shouhin.browsenode,  shouhin.gold_property,  shouhin.ichiba_title,  shouhin.Gram,  shouhin.Parent_stone,  shouhin.Aside_stone,  shouhin.Appraiser,  shouhin.Remarks,  shouhin.Destination_selling,  shouhin.Finish,  shouhin.Discrimination,  shouhin.accessories,  shouhin.priority,  shouhin.A_storage,  shouhin.price_per_gram,  shouhin.price_per_parent_stone,  shouhin.price_per_aside_stone,  shouhin.price_secret,  shouhin.sales_price_secret,  shouhin.eq,  shouhin.en,  shouhin.line,  shouhin.item_name,  shouhin.handle,  shouhin.yahoo_color_id,  shouhin.raku_hyoujisaki_category4,  shouhin.raku_hyoujisaki_category5,  shouhin.raku_dir_1,  shouhin.raku_dir_2,  shouhin.raku_dir_3,  shouhin.raku_dir_4,  shouhin.raku_dir_5,  shouhin.raku_dir_result,  shouhin.raku_tag_result,  shouhin.serial_number,  shouhin.Exhibition_Date,  shouhin.search_keyword,  shouhin.stamp,  shouhin.motif,  shouhin.Setting,  shouhin.processing,  shouhin.Sleeve_Length,  shouhin.length,  shouhin.Ring_size,  shouhin.price_for_site,  shouhin.yahoo_category_id,  shouhin.Qty,  shouhin.sales_period,  shouhin.starting_price,  Eoc.ecc_seq";
$proto0["m_strFrom"] = "FROM shouhin  LEFT OUTER JOIN Eoc ON shouhin.ecc_id = Eoc.ecc_id";
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
	"m_strName" => "product_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sateibutuichiran"
));

$proto6["m_sql"] = "shouhin.product_id";
$proto6["m_srcTableName"] = "sateibutuichiran";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "category_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sateibutuichiran"
));

$proto8["m_sql"] = "shouhin.category_id";
$proto8["m_srcTableName"] = "sateibutuichiran";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "goods_title",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sateibutuichiran"
));

$proto10["m_sql"] = "shouhin.goods_title";
$proto10["m_srcTableName"] = "sateibutuichiran";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "title",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sateibutuichiran"
));

$proto12["m_sql"] = "shouhin.title";
$proto12["m_srcTableName"] = "sateibutuichiran";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "sub_category_id1",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sateibutuichiran"
));

$proto14["m_sql"] = "shouhin.sub_category_id1";
$proto14["m_srcTableName"] = "sateibutuichiran";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "ecc_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sateibutuichiran"
));

$proto16["m_sql"] = "shouhin.ecc_id";
$proto16["m_srcTableName"] = "sateibutuichiran";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "price",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sateibutuichiran"
));

$proto18["m_sql"] = "shouhin.price";
$proto18["m_srcTableName"] = "sateibutuichiran";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sateibutuichiran"
));

$proto20["m_sql"] = "shouhin.yahoo";
$proto20["m_srcTableName"] = "sateibutuichiran";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "remark",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sateibutuichiran"
));

$proto22["m_sql"] = "shouhin.remark";
$proto22["m_srcTableName"] = "sateibutuichiran";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "sales_price",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sateibutuichiran"
));

$proto24["m_sql"] = "shouhin.sales_price";
$proto24["m_srcTableName"] = "sateibutuichiran";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sateibutuichiran"
));

$proto26["m_sql"] = "shouhin.description";
$proto26["m_srcTableName"] = "sateibutuichiran";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sateibutuichiran"
));

$proto28["m_sql"] = "shouhin.status";
$proto28["m_srcTableName"] = "sateibutuichiran";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "product_num",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sateibutuichiran"
));

$proto30["m_sql"] = "shouhin.product_num";
$proto30["m_srcTableName"] = "sateibutuichiran";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sateibutuichiran"
));

$proto32["m_sql"] = "shouhin.updated_at";
$proto32["m_srcTableName"] = "sateibutuichiran";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_size",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sateibutuichiran"
));

$proto34["m_sql"] = "shouhin.yahoo_size";
$proto34["m_srcTableName"] = "sateibutuichiran";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_title",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sateibutuichiran"
));

$proto36["m_sql"] = "shouhin.yahoo_title";
$proto36["m_srcTableName"] = "sateibutuichiran";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_junle",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sateibutuichiran"
));

$proto38["m_sql"] = "shouhin.yahoo_junle";
$proto38["m_srcTableName"] = "sateibutuichiran";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_sankou_uwadai",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sateibutuichiran"
));

$proto40["m_sql"] = "shouhin.yahoo_sankou_uwadai";
$proto40["m_srcTableName"] = "sateibutuichiran";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_sozai",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sateibutuichiran"
));

$proto42["m_sql"] = "shouhin.yahoo_sozai";
$proto42["m_srcTableName"] = "sateibutuichiran";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_color",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sateibutuichiran"
));

$proto44["m_sql"] = "shouhin.yahoo_color";
$proto44["m_srcTableName"] = "sateibutuichiran";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_kataban",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sateibutuichiran"
));

$proto46["m_sql"] = "shouhin.yahoo_kataban";
$proto46["m_srcTableName"] = "sateibutuichiran";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_condition1",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sateibutuichiran"
));

$proto48["m_sql"] = "shouhin.yahoo_condition1";
$proto48["m_srcTableName"] = "sateibutuichiran";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_condition2",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sateibutuichiran"
));

$proto50["m_sql"] = "shouhin.yahoo_condition2";
$proto50["m_srcTableName"] = "sateibutuichiran";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_fuzokuhin",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sateibutuichiran"
));

$proto52["m_sql"] = "shouhin.yahoo_fuzokuhin";
$proto52["m_srcTableName"] = "sateibutuichiran";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_sinaban",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sateibutuichiran"
));

$proto54["m_sql"] = "shouhin.yahoo_sinaban";
$proto54["m_srcTableName"] = "sateibutuichiran";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_saisun_sha",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sateibutuichiran"
));

$proto56["m_sql"] = "shouhin.yahoo_saisun_sha";
$proto56["m_srcTableName"] = "sateibutuichiran";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_sex",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sateibutuichiran"
));

$proto58["m_sql"] = "shouhin.yahoo_sex";
$proto58["m_srcTableName"] = "sateibutuichiran";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "box_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sateibutuichiran"
));

$proto60["m_sql"] = "shouhin.box_id";
$proto60["m_srcTableName"] = "sateibutuichiran";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "nyuukin_price",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sateibutuichiran"
));

$proto62["m_sql"] = "shouhin.nyuukin_price";
$proto62["m_srcTableName"] = "sateibutuichiran";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sateibutuichiran"
));

$proto64["m_sql"] = "shouhin.updated_by";
$proto64["m_srcTableName"] = "sateibutuichiran";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "raku_title",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sateibutuichiran"
));

$proto66["m_sql"] = "shouhin.raku_title";
$proto66["m_srcTableName"] = "sateibutuichiran";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "raku_hyoujisaki_category2",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sateibutuichiran"
));

$proto68["m_sql"] = "shouhin.raku_hyoujisaki_category2";
$proto68["m_srcTableName"] = "sateibutuichiran";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "raku_hyoujisaki_category",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sateibutuichiran"
));

$proto70["m_sql"] = "shouhin.raku_hyoujisaki_category";
$proto70["m_srcTableName"] = "sateibutuichiran";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "raku_hyoujisaki_category3",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sateibutuichiran"
));

$proto72["m_sql"] = "shouhin.raku_hyoujisaki_category3";
$proto72["m_srcTableName"] = "sateibutuichiran";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "timesta",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sateibutuichiran"
));

$proto74["m_sql"] = "shouhin.timesta";
$proto74["m_srcTableName"] = "sateibutuichiran";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "saisun_start",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sateibutuichiran"
));

$proto76["m_sql"] = "shouhin.saisun_start";
$proto76["m_srcTableName"] = "sateibutuichiran";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "saisun_end",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sateibutuichiran"
));

$proto78["m_sql"] = "shouhin.saisun_end";
$proto78["m_srcTableName"] = "sateibutuichiran";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "label_output_flag",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sateibutuichiran"
));

$proto80["m_sql"] = "shouhin.label_output_flag";
$proto80["m_srcTableName"] = "sateibutuichiran";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "season",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sateibutuichiran"
));

$proto82["m_sql"] = "shouhin.season";
$proto82["m_srcTableName"] = "sateibutuichiran";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "kanryou_henbi",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sateibutuichiran"
));

$proto84["m_sql"] = "shouhin.kanryou_henbi";
$proto84["m_srcTableName"] = "sateibutuichiran";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "box_sort",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sateibutuichiran"
));

$proto86["m_sql"] = "shouhin.box_sort";
$proto86["m_srcTableName"] = "sateibutuichiran";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "satei_by",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sateibutuichiran"
));

$proto88["m_sql"] = "shouhin.satei_by";
$proto88["m_srcTableName"] = "sateibutuichiran";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "kaitori_by",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sateibutuichiran"
));

$proto90["m_sql"] = "shouhin.kaitori_by";
$proto90["m_srcTableName"] = "sateibutuichiran";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLField(array(
	"m_strName" => "comment",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sateibutuichiran"
));

$proto92["m_sql"] = "shouhin.`comment`";
$proto92["m_srcTableName"] = "sateibutuichiran";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "";
$obj = new SQLFieldListItem($proto92);

$proto0["m_fieldlist"][]=$obj;
						$proto94=array();
			$obj = new SQLField(array(
	"m_strName" => "satei_hi",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sateibutuichiran"
));

$proto94["m_sql"] = "shouhin.satei_hi";
$proto94["m_srcTableName"] = "sateibutuichiran";
$proto94["m_expr"]=$obj;
$proto94["m_alias"] = "";
$obj = new SQLFieldListItem($proto94);

$proto0["m_fieldlist"][]=$obj;
						$proto96=array();
			$obj = new SQLField(array(
	"m_strName" => "kaitory_hi",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sateibutuichiran"
));

$proto96["m_sql"] = "shouhin.kaitory_hi";
$proto96["m_srcTableName"] = "sateibutuichiran";
$proto96["m_expr"]=$obj;
$proto96["m_alias"] = "";
$obj = new SQLFieldListItem($proto96);

$proto0["m_fieldlist"][]=$obj;
						$proto98=array();
			$obj = new SQLField(array(
	"m_strName" => "REG_PHOTOGRAPHER",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sateibutuichiran"
));

$proto98["m_sql"] = "shouhin.REG_PHOTOGRAPHER";
$proto98["m_srcTableName"] = "sateibutuichiran";
$proto98["m_expr"]=$obj;
$proto98["m_alias"] = "";
$obj = new SQLFieldListItem($proto98);

$proto0["m_fieldlist"][]=$obj;
						$proto100=array();
			$obj = new SQLField(array(
	"m_strName" => "REG_AUTHOR",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sateibutuichiran"
));

$proto100["m_sql"] = "shouhin.REG_AUTHOR";
$proto100["m_srcTableName"] = "sateibutuichiran";
$proto100["m_expr"]=$obj;
$proto100["m_alias"] = "";
$obj = new SQLFieldListItem($proto100);

$proto0["m_fieldlist"][]=$obj;
						$proto102=array();
			$obj = new SQLField(array(
	"m_strName" => "REG_PACKINGS",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sateibutuichiran"
));

$proto102["m_sql"] = "shouhin.REG_PACKINGS";
$proto102["m_srcTableName"] = "sateibutuichiran";
$proto102["m_expr"]=$obj;
$proto102["m_alias"] = "";
$obj = new SQLFieldListItem($proto102);

$proto0["m_fieldlist"][]=$obj;
						$proto104=array();
			$obj = new SQLField(array(
	"m_strName" => "REG_KAKOU_DATE",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sateibutuichiran"
));

$proto104["m_sql"] = "shouhin.REG_KAKOU_DATE";
$proto104["m_srcTableName"] = "sateibutuichiran";
$proto104["m_expr"]=$obj;
$proto104["m_alias"] = "";
$obj = new SQLFieldListItem($proto104);

$proto0["m_fieldlist"][]=$obj;
						$proto106=array();
			$obj = new SQLField(array(
	"m_strName" => "REG_KAKOU",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sateibutuichiran"
));

$proto106["m_sql"] = "shouhin.REG_KAKOU";
$proto106["m_srcTableName"] = "sateibutuichiran";
$proto106["m_expr"]=$obj;
$proto106["m_alias"] = "";
$obj = new SQLFieldListItem($proto106);

$proto0["m_fieldlist"][]=$obj;
						$proto108=array();
			$obj = new SQLField(array(
	"m_strName" => "REG_EXHIBITOR",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sateibutuichiran"
));

$proto108["m_sql"] = "shouhin.REG_EXHIBITOR";
$proto108["m_srcTableName"] = "sateibutuichiran";
$proto108["m_expr"]=$obj;
$proto108["m_alias"] = "";
$obj = new SQLFieldListItem($proto108);

$proto0["m_fieldlist"][]=$obj;
						$proto110=array();
			$obj = new SQLField(array(
	"m_strName" => "REG_PHOTOGRAPHER_DATE",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sateibutuichiran"
));

$proto110["m_sql"] = "shouhin.REG_PHOTOGRAPHER_DATE";
$proto110["m_srcTableName"] = "sateibutuichiran";
$proto110["m_expr"]=$obj;
$proto110["m_alias"] = "";
$obj = new SQLFieldListItem($proto110);

$proto0["m_fieldlist"][]=$obj;
						$proto112=array();
			$obj = new SQLField(array(
	"m_strName" => "DT_PACKING_DATE",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sateibutuichiran"
));

$proto112["m_sql"] = "shouhin.DT_PACKING_DATE";
$proto112["m_srcTableName"] = "sateibutuichiran";
$proto112["m_expr"]=$obj;
$proto112["m_alias"] = "";
$obj = new SQLFieldListItem($proto112);

$proto0["m_fieldlist"][]=$obj;
						$proto114=array();
			$obj = new SQLField(array(
	"m_strName" => "DT_UP_DATE",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sateibutuichiran"
));

$proto114["m_sql"] = "shouhin.DT_UP_DATE";
$proto114["m_srcTableName"] = "sateibutuichiran";
$proto114["m_expr"]=$obj;
$proto114["m_alias"] = "";
$obj = new SQLFieldListItem($proto114);

$proto0["m_fieldlist"][]=$obj;
						$proto116=array();
			$obj = new SQLField(array(
	"m_strName" => "AWAZU_DATE",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sateibutuichiran"
));

$proto116["m_sql"] = "shouhin.AWAZU_DATE";
$proto116["m_srcTableName"] = "sateibutuichiran";
$proto116["m_expr"]=$obj;
$proto116["m_alias"] = "";
$obj = new SQLFieldListItem($proto116);

$proto0["m_fieldlist"][]=$obj;
						$proto118=array();
			$obj = new SQLField(array(
	"m_strName" => "AWAZU_NIN",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sateibutuichiran"
));

$proto118["m_sql"] = "shouhin.AWAZU_NIN";
$proto118["m_srcTableName"] = "sateibutuichiran";
$proto118["m_expr"]=$obj;
$proto118["m_alias"] = "";
$obj = new SQLFieldListItem($proto118);

$proto0["m_fieldlist"][]=$obj;
						$proto120=array();
			$obj = new SQLField(array(
	"m_strName" => "sabun_date",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sateibutuichiran"
));

$proto120["m_sql"] = "shouhin.sabun_date";
$proto120["m_srcTableName"] = "sateibutuichiran";
$proto120["m_expr"]=$obj;
$proto120["m_alias"] = "";
$obj = new SQLFieldListItem($proto120);

$proto0["m_fieldlist"][]=$obj;
						$proto122=array();
			$obj = new SQLField(array(
	"m_strName" => "browseid",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sateibutuichiran"
));

$proto122["m_sql"] = "shouhin.browseid";
$proto122["m_srcTableName"] = "sateibutuichiran";
$proto122["m_expr"]=$obj;
$proto122["m_alias"] = "";
$obj = new SQLFieldListItem($proto122);

$proto0["m_fieldlist"][]=$obj;
						$proto124=array();
			$obj = new SQLField(array(
	"m_strName" => "browsenode",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sateibutuichiran"
));

$proto124["m_sql"] = "shouhin.browsenode";
$proto124["m_srcTableName"] = "sateibutuichiran";
$proto124["m_expr"]=$obj;
$proto124["m_alias"] = "";
$obj = new SQLFieldListItem($proto124);

$proto0["m_fieldlist"][]=$obj;
						$proto126=array();
			$obj = new SQLField(array(
	"m_strName" => "gold_property",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sateibutuichiran"
));

$proto126["m_sql"] = "shouhin.gold_property";
$proto126["m_srcTableName"] = "sateibutuichiran";
$proto126["m_expr"]=$obj;
$proto126["m_alias"] = "";
$obj = new SQLFieldListItem($proto126);

$proto0["m_fieldlist"][]=$obj;
						$proto128=array();
			$obj = new SQLField(array(
	"m_strName" => "ichiba_title",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sateibutuichiran"
));

$proto128["m_sql"] = "shouhin.ichiba_title";
$proto128["m_srcTableName"] = "sateibutuichiran";
$proto128["m_expr"]=$obj;
$proto128["m_alias"] = "";
$obj = new SQLFieldListItem($proto128);

$proto0["m_fieldlist"][]=$obj;
						$proto130=array();
			$obj = new SQLField(array(
	"m_strName" => "Gram",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sateibutuichiran"
));

$proto130["m_sql"] = "shouhin.Gram";
$proto130["m_srcTableName"] = "sateibutuichiran";
$proto130["m_expr"]=$obj;
$proto130["m_alias"] = "";
$obj = new SQLFieldListItem($proto130);

$proto0["m_fieldlist"][]=$obj;
						$proto132=array();
			$obj = new SQLField(array(
	"m_strName" => "Parent_stone",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sateibutuichiran"
));

$proto132["m_sql"] = "shouhin.Parent_stone";
$proto132["m_srcTableName"] = "sateibutuichiran";
$proto132["m_expr"]=$obj;
$proto132["m_alias"] = "";
$obj = new SQLFieldListItem($proto132);

$proto0["m_fieldlist"][]=$obj;
						$proto134=array();
			$obj = new SQLField(array(
	"m_strName" => "Aside_stone",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sateibutuichiran"
));

$proto134["m_sql"] = "shouhin.Aside_stone";
$proto134["m_srcTableName"] = "sateibutuichiran";
$proto134["m_expr"]=$obj;
$proto134["m_alias"] = "";
$obj = new SQLFieldListItem($proto134);

$proto0["m_fieldlist"][]=$obj;
						$proto136=array();
			$obj = new SQLField(array(
	"m_strName" => "Appraiser",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sateibutuichiran"
));

$proto136["m_sql"] = "shouhin.Appraiser";
$proto136["m_srcTableName"] = "sateibutuichiran";
$proto136["m_expr"]=$obj;
$proto136["m_alias"] = "";
$obj = new SQLFieldListItem($proto136);

$proto0["m_fieldlist"][]=$obj;
						$proto138=array();
			$obj = new SQLField(array(
	"m_strName" => "Remarks",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sateibutuichiran"
));

$proto138["m_sql"] = "shouhin.Remarks";
$proto138["m_srcTableName"] = "sateibutuichiran";
$proto138["m_expr"]=$obj;
$proto138["m_alias"] = "";
$obj = new SQLFieldListItem($proto138);

$proto0["m_fieldlist"][]=$obj;
						$proto140=array();
			$obj = new SQLField(array(
	"m_strName" => "Destination_selling",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sateibutuichiran"
));

$proto140["m_sql"] = "shouhin.Destination_selling";
$proto140["m_srcTableName"] = "sateibutuichiran";
$proto140["m_expr"]=$obj;
$proto140["m_alias"] = "";
$obj = new SQLFieldListItem($proto140);

$proto0["m_fieldlist"][]=$obj;
						$proto142=array();
			$obj = new SQLField(array(
	"m_strName" => "Finish",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sateibutuichiran"
));

$proto142["m_sql"] = "shouhin.Finish";
$proto142["m_srcTableName"] = "sateibutuichiran";
$proto142["m_expr"]=$obj;
$proto142["m_alias"] = "";
$obj = new SQLFieldListItem($proto142);

$proto0["m_fieldlist"][]=$obj;
						$proto144=array();
			$obj = new SQLField(array(
	"m_strName" => "Discrimination",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sateibutuichiran"
));

$proto144["m_sql"] = "shouhin.Discrimination";
$proto144["m_srcTableName"] = "sateibutuichiran";
$proto144["m_expr"]=$obj;
$proto144["m_alias"] = "";
$obj = new SQLFieldListItem($proto144);

$proto0["m_fieldlist"][]=$obj;
						$proto146=array();
			$obj = new SQLField(array(
	"m_strName" => "accessories",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sateibutuichiran"
));

$proto146["m_sql"] = "shouhin.accessories";
$proto146["m_srcTableName"] = "sateibutuichiran";
$proto146["m_expr"]=$obj;
$proto146["m_alias"] = "";
$obj = new SQLFieldListItem($proto146);

$proto0["m_fieldlist"][]=$obj;
						$proto148=array();
			$obj = new SQLField(array(
	"m_strName" => "priority",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sateibutuichiran"
));

$proto148["m_sql"] = "shouhin.priority";
$proto148["m_srcTableName"] = "sateibutuichiran";
$proto148["m_expr"]=$obj;
$proto148["m_alias"] = "";
$obj = new SQLFieldListItem($proto148);

$proto0["m_fieldlist"][]=$obj;
						$proto150=array();
			$obj = new SQLField(array(
	"m_strName" => "A_storage",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sateibutuichiran"
));

$proto150["m_sql"] = "shouhin.A_storage";
$proto150["m_srcTableName"] = "sateibutuichiran";
$proto150["m_expr"]=$obj;
$proto150["m_alias"] = "";
$obj = new SQLFieldListItem($proto150);

$proto0["m_fieldlist"][]=$obj;
						$proto152=array();
			$obj = new SQLField(array(
	"m_strName" => "price_per_gram",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sateibutuichiran"
));

$proto152["m_sql"] = "shouhin.price_per_gram";
$proto152["m_srcTableName"] = "sateibutuichiran";
$proto152["m_expr"]=$obj;
$proto152["m_alias"] = "";
$obj = new SQLFieldListItem($proto152);

$proto0["m_fieldlist"][]=$obj;
						$proto154=array();
			$obj = new SQLField(array(
	"m_strName" => "price_per_parent_stone",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sateibutuichiran"
));

$proto154["m_sql"] = "shouhin.price_per_parent_stone";
$proto154["m_srcTableName"] = "sateibutuichiran";
$proto154["m_expr"]=$obj;
$proto154["m_alias"] = "";
$obj = new SQLFieldListItem($proto154);

$proto0["m_fieldlist"][]=$obj;
						$proto156=array();
			$obj = new SQLField(array(
	"m_strName" => "price_per_aside_stone",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sateibutuichiran"
));

$proto156["m_sql"] = "shouhin.price_per_aside_stone";
$proto156["m_srcTableName"] = "sateibutuichiran";
$proto156["m_expr"]=$obj;
$proto156["m_alias"] = "";
$obj = new SQLFieldListItem($proto156);

$proto0["m_fieldlist"][]=$obj;
						$proto158=array();
			$obj = new SQLField(array(
	"m_strName" => "price_secret",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sateibutuichiran"
));

$proto158["m_sql"] = "shouhin.price_secret";
$proto158["m_srcTableName"] = "sateibutuichiran";
$proto158["m_expr"]=$obj;
$proto158["m_alias"] = "";
$obj = new SQLFieldListItem($proto158);

$proto0["m_fieldlist"][]=$obj;
						$proto160=array();
			$obj = new SQLField(array(
	"m_strName" => "sales_price_secret",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sateibutuichiran"
));

$proto160["m_sql"] = "shouhin.sales_price_secret";
$proto160["m_srcTableName"] = "sateibutuichiran";
$proto160["m_expr"]=$obj;
$proto160["m_alias"] = "";
$obj = new SQLFieldListItem($proto160);

$proto0["m_fieldlist"][]=$obj;
						$proto162=array();
			$obj = new SQLField(array(
	"m_strName" => "eq",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sateibutuichiran"
));

$proto162["m_sql"] = "shouhin.eq";
$proto162["m_srcTableName"] = "sateibutuichiran";
$proto162["m_expr"]=$obj;
$proto162["m_alias"] = "";
$obj = new SQLFieldListItem($proto162);

$proto0["m_fieldlist"][]=$obj;
						$proto164=array();
			$obj = new SQLField(array(
	"m_strName" => "en",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sateibutuichiran"
));

$proto164["m_sql"] = "shouhin.en";
$proto164["m_srcTableName"] = "sateibutuichiran";
$proto164["m_expr"]=$obj;
$proto164["m_alias"] = "";
$obj = new SQLFieldListItem($proto164);

$proto0["m_fieldlist"][]=$obj;
						$proto166=array();
			$obj = new SQLField(array(
	"m_strName" => "line",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sateibutuichiran"
));

$proto166["m_sql"] = "shouhin.line";
$proto166["m_srcTableName"] = "sateibutuichiran";
$proto166["m_expr"]=$obj;
$proto166["m_alias"] = "";
$obj = new SQLFieldListItem($proto166);

$proto0["m_fieldlist"][]=$obj;
						$proto168=array();
			$obj = new SQLField(array(
	"m_strName" => "item_name",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sateibutuichiran"
));

$proto168["m_sql"] = "shouhin.item_name";
$proto168["m_srcTableName"] = "sateibutuichiran";
$proto168["m_expr"]=$obj;
$proto168["m_alias"] = "";
$obj = new SQLFieldListItem($proto168);

$proto0["m_fieldlist"][]=$obj;
						$proto170=array();
			$obj = new SQLField(array(
	"m_strName" => "handle",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sateibutuichiran"
));

$proto170["m_sql"] = "shouhin.handle";
$proto170["m_srcTableName"] = "sateibutuichiran";
$proto170["m_expr"]=$obj;
$proto170["m_alias"] = "";
$obj = new SQLFieldListItem($proto170);

$proto0["m_fieldlist"][]=$obj;
						$proto172=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_color_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sateibutuichiran"
));

$proto172["m_sql"] = "shouhin.yahoo_color_id";
$proto172["m_srcTableName"] = "sateibutuichiran";
$proto172["m_expr"]=$obj;
$proto172["m_alias"] = "";
$obj = new SQLFieldListItem($proto172);

$proto0["m_fieldlist"][]=$obj;
						$proto174=array();
			$obj = new SQLField(array(
	"m_strName" => "raku_hyoujisaki_category4",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sateibutuichiran"
));

$proto174["m_sql"] = "shouhin.raku_hyoujisaki_category4";
$proto174["m_srcTableName"] = "sateibutuichiran";
$proto174["m_expr"]=$obj;
$proto174["m_alias"] = "";
$obj = new SQLFieldListItem($proto174);

$proto0["m_fieldlist"][]=$obj;
						$proto176=array();
			$obj = new SQLField(array(
	"m_strName" => "raku_hyoujisaki_category5",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sateibutuichiran"
));

$proto176["m_sql"] = "shouhin.raku_hyoujisaki_category5";
$proto176["m_srcTableName"] = "sateibutuichiran";
$proto176["m_expr"]=$obj;
$proto176["m_alias"] = "";
$obj = new SQLFieldListItem($proto176);

$proto0["m_fieldlist"][]=$obj;
						$proto178=array();
			$obj = new SQLField(array(
	"m_strName" => "raku_dir_1",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sateibutuichiran"
));

$proto178["m_sql"] = "shouhin.raku_dir_1";
$proto178["m_srcTableName"] = "sateibutuichiran";
$proto178["m_expr"]=$obj;
$proto178["m_alias"] = "";
$obj = new SQLFieldListItem($proto178);

$proto0["m_fieldlist"][]=$obj;
						$proto180=array();
			$obj = new SQLField(array(
	"m_strName" => "raku_dir_2",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sateibutuichiran"
));

$proto180["m_sql"] = "shouhin.raku_dir_2";
$proto180["m_srcTableName"] = "sateibutuichiran";
$proto180["m_expr"]=$obj;
$proto180["m_alias"] = "";
$obj = new SQLFieldListItem($proto180);

$proto0["m_fieldlist"][]=$obj;
						$proto182=array();
			$obj = new SQLField(array(
	"m_strName" => "raku_dir_3",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sateibutuichiran"
));

$proto182["m_sql"] = "shouhin.raku_dir_3";
$proto182["m_srcTableName"] = "sateibutuichiran";
$proto182["m_expr"]=$obj;
$proto182["m_alias"] = "";
$obj = new SQLFieldListItem($proto182);

$proto0["m_fieldlist"][]=$obj;
						$proto184=array();
			$obj = new SQLField(array(
	"m_strName" => "raku_dir_4",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sateibutuichiran"
));

$proto184["m_sql"] = "shouhin.raku_dir_4";
$proto184["m_srcTableName"] = "sateibutuichiran";
$proto184["m_expr"]=$obj;
$proto184["m_alias"] = "";
$obj = new SQLFieldListItem($proto184);

$proto0["m_fieldlist"][]=$obj;
						$proto186=array();
			$obj = new SQLField(array(
	"m_strName" => "raku_dir_5",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sateibutuichiran"
));

$proto186["m_sql"] = "shouhin.raku_dir_5";
$proto186["m_srcTableName"] = "sateibutuichiran";
$proto186["m_expr"]=$obj;
$proto186["m_alias"] = "";
$obj = new SQLFieldListItem($proto186);

$proto0["m_fieldlist"][]=$obj;
						$proto188=array();
			$obj = new SQLField(array(
	"m_strName" => "raku_dir_result",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sateibutuichiran"
));

$proto188["m_sql"] = "shouhin.raku_dir_result";
$proto188["m_srcTableName"] = "sateibutuichiran";
$proto188["m_expr"]=$obj;
$proto188["m_alias"] = "";
$obj = new SQLFieldListItem($proto188);

$proto0["m_fieldlist"][]=$obj;
						$proto190=array();
			$obj = new SQLField(array(
	"m_strName" => "raku_tag_result",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sateibutuichiran"
));

$proto190["m_sql"] = "shouhin.raku_tag_result";
$proto190["m_srcTableName"] = "sateibutuichiran";
$proto190["m_expr"]=$obj;
$proto190["m_alias"] = "";
$obj = new SQLFieldListItem($proto190);

$proto0["m_fieldlist"][]=$obj;
						$proto192=array();
			$obj = new SQLField(array(
	"m_strName" => "serial_number",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sateibutuichiran"
));

$proto192["m_sql"] = "shouhin.serial_number";
$proto192["m_srcTableName"] = "sateibutuichiran";
$proto192["m_expr"]=$obj;
$proto192["m_alias"] = "";
$obj = new SQLFieldListItem($proto192);

$proto0["m_fieldlist"][]=$obj;
						$proto194=array();
			$obj = new SQLField(array(
	"m_strName" => "Exhibition_Date",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sateibutuichiran"
));

$proto194["m_sql"] = "shouhin.Exhibition_Date";
$proto194["m_srcTableName"] = "sateibutuichiran";
$proto194["m_expr"]=$obj;
$proto194["m_alias"] = "";
$obj = new SQLFieldListItem($proto194);

$proto0["m_fieldlist"][]=$obj;
						$proto196=array();
			$obj = new SQLField(array(
	"m_strName" => "search_keyword",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sateibutuichiran"
));

$proto196["m_sql"] = "shouhin.search_keyword";
$proto196["m_srcTableName"] = "sateibutuichiran";
$proto196["m_expr"]=$obj;
$proto196["m_alias"] = "";
$obj = new SQLFieldListItem($proto196);

$proto0["m_fieldlist"][]=$obj;
						$proto198=array();
			$obj = new SQLField(array(
	"m_strName" => "stamp",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sateibutuichiran"
));

$proto198["m_sql"] = "shouhin.stamp";
$proto198["m_srcTableName"] = "sateibutuichiran";
$proto198["m_expr"]=$obj;
$proto198["m_alias"] = "";
$obj = new SQLFieldListItem($proto198);

$proto0["m_fieldlist"][]=$obj;
						$proto200=array();
			$obj = new SQLField(array(
	"m_strName" => "motif",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sateibutuichiran"
));

$proto200["m_sql"] = "shouhin.motif";
$proto200["m_srcTableName"] = "sateibutuichiran";
$proto200["m_expr"]=$obj;
$proto200["m_alias"] = "";
$obj = new SQLFieldListItem($proto200);

$proto0["m_fieldlist"][]=$obj;
						$proto202=array();
			$obj = new SQLField(array(
	"m_strName" => "Setting",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sateibutuichiran"
));

$proto202["m_sql"] = "shouhin.Setting";
$proto202["m_srcTableName"] = "sateibutuichiran";
$proto202["m_expr"]=$obj;
$proto202["m_alias"] = "";
$obj = new SQLFieldListItem($proto202);

$proto0["m_fieldlist"][]=$obj;
						$proto204=array();
			$obj = new SQLField(array(
	"m_strName" => "processing",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sateibutuichiran"
));

$proto204["m_sql"] = "shouhin.processing";
$proto204["m_srcTableName"] = "sateibutuichiran";
$proto204["m_expr"]=$obj;
$proto204["m_alias"] = "";
$obj = new SQLFieldListItem($proto204);

$proto0["m_fieldlist"][]=$obj;
						$proto206=array();
			$obj = new SQLField(array(
	"m_strName" => "Sleeve_Length",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sateibutuichiran"
));

$proto206["m_sql"] = "shouhin.Sleeve_Length";
$proto206["m_srcTableName"] = "sateibutuichiran";
$proto206["m_expr"]=$obj;
$proto206["m_alias"] = "";
$obj = new SQLFieldListItem($proto206);

$proto0["m_fieldlist"][]=$obj;
						$proto208=array();
			$obj = new SQLField(array(
	"m_strName" => "length",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sateibutuichiran"
));

$proto208["m_sql"] = "shouhin.length";
$proto208["m_srcTableName"] = "sateibutuichiran";
$proto208["m_expr"]=$obj;
$proto208["m_alias"] = "";
$obj = new SQLFieldListItem($proto208);

$proto0["m_fieldlist"][]=$obj;
						$proto210=array();
			$obj = new SQLField(array(
	"m_strName" => "Ring_size",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sateibutuichiran"
));

$proto210["m_sql"] = "shouhin.Ring_size";
$proto210["m_srcTableName"] = "sateibutuichiran";
$proto210["m_expr"]=$obj;
$proto210["m_alias"] = "";
$obj = new SQLFieldListItem($proto210);

$proto0["m_fieldlist"][]=$obj;
						$proto212=array();
			$obj = new SQLField(array(
	"m_strName" => "price_for_site",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sateibutuichiran"
));

$proto212["m_sql"] = "shouhin.price_for_site";
$proto212["m_srcTableName"] = "sateibutuichiran";
$proto212["m_expr"]=$obj;
$proto212["m_alias"] = "";
$obj = new SQLFieldListItem($proto212);

$proto0["m_fieldlist"][]=$obj;
						$proto214=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_category_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sateibutuichiran"
));

$proto214["m_sql"] = "shouhin.yahoo_category_id";
$proto214["m_srcTableName"] = "sateibutuichiran";
$proto214["m_expr"]=$obj;
$proto214["m_alias"] = "";
$obj = new SQLFieldListItem($proto214);

$proto0["m_fieldlist"][]=$obj;
						$proto216=array();
			$obj = new SQLField(array(
	"m_strName" => "Qty",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sateibutuichiran"
));

$proto216["m_sql"] = "shouhin.Qty";
$proto216["m_srcTableName"] = "sateibutuichiran";
$proto216["m_expr"]=$obj;
$proto216["m_alias"] = "";
$obj = new SQLFieldListItem($proto216);

$proto0["m_fieldlist"][]=$obj;
						$proto218=array();
			$obj = new SQLField(array(
	"m_strName" => "sales_period",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sateibutuichiran"
));

$proto218["m_sql"] = "shouhin.sales_period";
$proto218["m_srcTableName"] = "sateibutuichiran";
$proto218["m_expr"]=$obj;
$proto218["m_alias"] = "";
$obj = new SQLFieldListItem($proto218);

$proto0["m_fieldlist"][]=$obj;
						$proto220=array();
			$obj = new SQLField(array(
	"m_strName" => "starting_price",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sateibutuichiran"
));

$proto220["m_sql"] = "shouhin.starting_price";
$proto220["m_srcTableName"] = "sateibutuichiran";
$proto220["m_expr"]=$obj;
$proto220["m_alias"] = "";
$obj = new SQLFieldListItem($proto220);

$proto0["m_fieldlist"][]=$obj;
						$proto222=array();
			$obj = new SQLField(array(
	"m_strName" => "ecc_seq",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "sateibutuichiran"
));

$proto222["m_sql"] = "Eoc.ecc_seq";
$proto222["m_srcTableName"] = "sateibutuichiran";
$proto222["m_expr"]=$obj;
$proto222["m_alias"] = "";
$obj = new SQLFieldListItem($proto222);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto224=array();
$proto224["m_link"] = "SQLL_MAIN";
			$proto225=array();
$proto225["m_strName"] = "shouhin";
$proto225["m_srcTableName"] = "sateibutuichiran";
$proto225["m_columns"] = array();
$proto225["m_columns"][] = "product_id";
$proto225["m_columns"][] = "category_id";
$proto225["m_columns"][] = "goods_title";
$proto225["m_columns"][] = "title";
$proto225["m_columns"][] = "sub_category_id1";
$proto225["m_columns"][] = "ecc_id";
$proto225["m_columns"][] = "price";
$proto225["m_columns"][] = "yahoo";
$proto225["m_columns"][] = "remark";
$proto225["m_columns"][] = "sales_price";
$proto225["m_columns"][] = "description";
$proto225["m_columns"][] = "status";
$proto225["m_columns"][] = "product_num";
$proto225["m_columns"][] = "updated_at";
$proto225["m_columns"][] = "yahoo_size";
$proto225["m_columns"][] = "yahoo_title";
$proto225["m_columns"][] = "yahoo_junle";
$proto225["m_columns"][] = "yahoo_sankou_uwadai";
$proto225["m_columns"][] = "yahoo_sozai";
$proto225["m_columns"][] = "yahoo_color";
$proto225["m_columns"][] = "yahoo_kataban";
$proto225["m_columns"][] = "yahoo_condition1";
$proto225["m_columns"][] = "yahoo_condition2";
$proto225["m_columns"][] = "yahoo_fuzokuhin";
$proto225["m_columns"][] = "yahoo_sinaban";
$proto225["m_columns"][] = "yahoo_saisun_sha";
$proto225["m_columns"][] = "yahoo_sex";
$proto225["m_columns"][] = "box_id";
$proto225["m_columns"][] = "nyuukin_price";
$proto225["m_columns"][] = "updated_by";
$proto225["m_columns"][] = "raku_title";
$proto225["m_columns"][] = "raku_hyoujisaki_category2";
$proto225["m_columns"][] = "raku_hyoujisaki_category";
$proto225["m_columns"][] = "raku_hyoujisaki_category3";
$proto225["m_columns"][] = "timesta";
$proto225["m_columns"][] = "saisun_start";
$proto225["m_columns"][] = "saisun_end";
$proto225["m_columns"][] = "label_output_flag";
$proto225["m_columns"][] = "season";
$proto225["m_columns"][] = "kanryou_henbi";
$proto225["m_columns"][] = "box_sort";
$proto225["m_columns"][] = "satei_by";
$proto225["m_columns"][] = "kaitori_by";
$proto225["m_columns"][] = "comment";
$proto225["m_columns"][] = "satei_hi";
$proto225["m_columns"][] = "kaitory_hi";
$proto225["m_columns"][] = "REG_PHOTOGRAPHER";
$proto225["m_columns"][] = "REG_AUTHOR";
$proto225["m_columns"][] = "REG_PACKINGS";
$proto225["m_columns"][] = "REG_KAKOU_DATE";
$proto225["m_columns"][] = "REG_KAKOU";
$proto225["m_columns"][] = "REG_EXHIBITOR";
$proto225["m_columns"][] = "REG_PHOTOGRAPHER_DATE";
$proto225["m_columns"][] = "DT_PACKING_DATE";
$proto225["m_columns"][] = "DT_UP_DATE";
$proto225["m_columns"][] = "AWAZU_DATE";
$proto225["m_columns"][] = "AWAZU_NIN";
$proto225["m_columns"][] = "sabun_date";
$proto225["m_columns"][] = "browseid";
$proto225["m_columns"][] = "browsenode";
$proto225["m_columns"][] = "gold_property";
$proto225["m_columns"][] = "ichiba_title";
$proto225["m_columns"][] = "Gram";
$proto225["m_columns"][] = "Parent_stone";
$proto225["m_columns"][] = "Aside_stone";
$proto225["m_columns"][] = "Appraiser";
$proto225["m_columns"][] = "Remarks";
$proto225["m_columns"][] = "Destination_selling";
$proto225["m_columns"][] = "Finish";
$proto225["m_columns"][] = "Discrimination";
$proto225["m_columns"][] = "accessories";
$proto225["m_columns"][] = "priority";
$proto225["m_columns"][] = "A_storage";
$proto225["m_columns"][] = "price_per_gram";
$proto225["m_columns"][] = "price_per_parent_stone";
$proto225["m_columns"][] = "price_per_aside_stone";
$proto225["m_columns"][] = "price_secret";
$proto225["m_columns"][] = "sales_price_secret";
$proto225["m_columns"][] = "eq";
$proto225["m_columns"][] = "en";
$proto225["m_columns"][] = "line";
$proto225["m_columns"][] = "item_name";
$proto225["m_columns"][] = "handle";
$proto225["m_columns"][] = "yahoo_color_id";
$proto225["m_columns"][] = "raku_hyoujisaki_category4";
$proto225["m_columns"][] = "raku_hyoujisaki_category5";
$proto225["m_columns"][] = "raku_dir_1";
$proto225["m_columns"][] = "raku_dir_2";
$proto225["m_columns"][] = "raku_dir_3";
$proto225["m_columns"][] = "raku_dir_4";
$proto225["m_columns"][] = "raku_dir_5";
$proto225["m_columns"][] = "raku_dir_result";
$proto225["m_columns"][] = "raku_tag_result";
$proto225["m_columns"][] = "serial_number";
$proto225["m_columns"][] = "Exhibition_Date";
$proto225["m_columns"][] = "search_keyword";
$proto225["m_columns"][] = "stamp";
$proto225["m_columns"][] = "motif";
$proto225["m_columns"][] = "Setting";
$proto225["m_columns"][] = "processing";
$proto225["m_columns"][] = "Sleeve_Length";
$proto225["m_columns"][] = "length";
$proto225["m_columns"][] = "Ring_size";
$proto225["m_columns"][] = "price_for_site";
$proto225["m_columns"][] = "yahoo_category_id";
$proto225["m_columns"][] = "Qty";
$proto225["m_columns"][] = "sales_period";
$proto225["m_columns"][] = "starting_price";
$obj = new SQLTable($proto225);

$proto224["m_table"] = $obj;
$proto224["m_sql"] = "shouhin";
$proto224["m_alias"] = "";
$proto224["m_srcTableName"] = "sateibutuichiran";
$proto226=array();
$proto226["m_sql"] = "";
$proto226["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto226["m_column"]=$obj;
$proto226["m_contained"] = array();
$proto226["m_strCase"] = "";
$proto226["m_havingmode"] = false;
$proto226["m_inBrackets"] = false;
$proto226["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto226);

$proto224["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto224);

$proto0["m_fromlist"][]=$obj;
												$proto228=array();
$proto228["m_link"] = "SQLL_LEFTJOIN";
			$proto229=array();
$proto229["m_strName"] = "Eoc";
$proto229["m_srcTableName"] = "sateibutuichiran";
$proto229["m_columns"] = array();
$proto229["m_columns"][] = "ecc_id";
$proto229["m_columns"][] = "ecc_seq";
$proto229["m_columns"][] = "name1";
$proto229["m_columns"][] = "created_t";
$proto229["m_columns"][] = "registerd_id";
$proto229["m_columns"][] = "kaitori_staff_id";
$proto229["m_columns"][] = "name2";
$proto229["m_columns"][] = "wareki";
$proto229["m_columns"][] = "b1";
$proto229["m_columns"][] = "b2";
$proto229["m_columns"][] = "b3";
$proto229["m_columns"][] = "birth_day";
$proto229["m_columns"][] = "age";
$proto229["m_columns"][] = "zip";
$proto229["m_columns"][] = "zip1";
$proto229["m_columns"][] = "zip2";
$proto229["m_columns"][] = "address1";
$proto229["m_columns"][] = "address2";
$proto229["m_columns"][] = "address3";
$proto229["m_columns"][] = "tel";
$proto229["m_columns"][] = "tel2";
$proto229["m_columns"][] = "mail1";
$proto229["m_columns"][] = "mail2";
$proto229["m_columns"][] = "address_code";
$proto229["m_columns"][] = "bank_name";
$proto229["m_columns"][] = "bank_blunch_code";
$proto229["m_columns"][] = "bank_yokin_shubetu";
$proto229["m_columns"][] = "bank_account";
$proto229["m_columns"][] = "bank_acoount_name";
$proto229["m_columns"][] = "haisou_bangou";
$proto229["m_columns"][] = "sise_houhou";
$proto229["m_columns"][] = "hentou_houhou";
$proto229["m_columns"][] = "hentou_houhou_time";
$proto229["m_columns"][] = "mousikomi_id";
$proto229["m_columns"][] = "hituyou_shorui";
$proto229["m_columns"][] = "seiyaku_fuseiritu";
$proto229["m_columns"][] = "mitumori_taku";
$proto229["m_columns"][] = "seacanse";
$proto229["m_columns"][] = "remark";
$proto229["m_columns"][] = "type";
$proto229["m_columns"][] = "sales_flag";
$proto229["m_columns"][] = "src_type";
$proto229["m_columns"][] = "liquidation_shop_code";
$proto229["m_columns"][] = "insurance_amount_print";
$proto229["m_columns"][] = "jis_code";
$proto229["m_columns"][] = "updated_at";
$proto229["m_columns"][] = "_registerd_id";
$proto229["m_columns"][] = "mail_check_type";
$proto229["m_columns"][] = "purchase_type";
$proto229["m_columns"][] = "sex";
$proto229["m_columns"][] = "m_tel";
$proto229["m_columns"][] = "fax";
$proto229["m_columns"][] = "chigin_kaitori";
$proto229["m_columns"][] = "option1";
$proto229["m_columns"][] = "option2";
$proto229["m_columns"][] = "option3";
$proto229["m_columns"][] = "option4";
$proto229["m_columns"][] = "option5";
$proto229["m_columns"][] = "option6";
$proto229["m_columns"][] = "option7";
$proto229["m_columns"][] = "option8";
$proto229["m_columns"][] = "option9";
$proto229["m_columns"][] = "option10";
$proto229["m_columns"][] = "option11";
$proto229["m_columns"][] = "option12";
$proto229["m_columns"][] = "option13";
$proto229["m_columns"][] = "rakuda_csv_flag";
$proto229["m_columns"][] = "EOC_COURIER_CHECK";
$proto229["m_columns"][] = "EOC_SIZE";
$proto229["m_columns"][] = "EOC_NUMBER";
$proto229["m_columns"][] = "EOC_REUSE";
$proto229["m_columns"][] = "EOC__DELIVERY_DATES";
$proto229["m_columns"][] = "EOC_SPECIFIED_TIME";
$proto229["m_columns"][] = "FIRST_NAME2";
$proto229["m_columns"][] = "LAST_NAME2";
$proto229["m_columns"][] = "EOC__DATE_AND_TIME_2";
$proto229["m_columns"][] = "EOC__BOX_NUMBER";
$proto229["m_columns"][] = "FIRST_NAME_KANA";
$proto229["m_columns"][] = "LAST_NAME_KANA";
$proto229["m_columns"][] = "FLAG_SPEED";
$proto229["m_columns"][] = "SEARCH_MEDIA";
$proto229["m_columns"][] = "SEARCH_SITE";
$proto229["m_columns"][] = "UN_REACHABLE";
$proto229["m_columns"][] = "FLG_MAIL_SAGAWA";
$proto229["m_columns"][] = "FLG_MAIL_OTHER";
$proto229["m_columns"][] = "ALLSEIYAKU";
$proto229["m_columns"][] = "ICHIBUSEIYAKU";
$proto229["m_columns"][] = "seiyakukin";
$proto229["m_columns"][] = "kaitorihuka";
$proto229["m_columns"][] = "awazu_date";
$proto229["m_columns"][] = "seiyaku_price";
$proto229["m_columns"][] = "eoc_search_keyword";
$proto229["m_columns"][] = "sonota";
$proto229["m_columns"][] = "size_kosuu";
$proto229["m_columns"][] = "sagawa_shuuka_flag";
$obj = new SQLTable($proto229);

$proto228["m_table"] = $obj;
$proto228["m_sql"] = "LEFT OUTER JOIN Eoc ON shouhin.ecc_id = Eoc.ecc_id";
$proto228["m_alias"] = "";
$proto228["m_srcTableName"] = "sateibutuichiran";
$proto230=array();
$proto230["m_sql"] = "shouhin.ecc_id = Eoc.ecc_id";
$proto230["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "ecc_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sateibutuichiran"
));

$proto230["m_column"]=$obj;
$proto230["m_contained"] = array();
$proto230["m_strCase"] = "= Eoc.ecc_id";
$proto230["m_havingmode"] = false;
$proto230["m_inBrackets"] = false;
$proto230["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto230);

$proto228["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto228);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="sateibutuichiran";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_sateibutuichiran = createSqlQuery_sateibutuichiran();


	
		;

																																																																																																													

$tdatasateibutuichiran[".sqlquery"] = $queryData_sateibutuichiran;

include_once(getabspath("include/sateibutuichiran_events.php"));
$tableEvents["sateibutuichiran"] = new eventclass_sateibutuichiran;
$tdatasateibutuichiran[".hasEvents"] = true;

?>