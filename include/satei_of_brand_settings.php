<?php
require_once(getabspath("classes/cipherer.php"));




$tdatasatei_of_brand = array();
	$tdatasatei_of_brand[".truncateText"] = true;
	$tdatasatei_of_brand[".NumberOfChars"] = 80;
	$tdatasatei_of_brand[".ShortName"] = "satei_of_brand";
	$tdatasatei_of_brand[".OwnerID"] = "";
	$tdatasatei_of_brand[".OriginalTable"] = "shouhin";

//	field labels
$fieldLabelssatei_of_brand = array();
$fieldToolTipssatei_of_brand = array();
$pageTitlessatei_of_brand = array();
$placeHolderssatei_of_brand = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelssatei_of_brand["Japanese"] = array();
	$fieldToolTipssatei_of_brand["Japanese"] = array();
	$placeHolderssatei_of_brand["Japanese"] = array();
	$pageTitlessatei_of_brand["Japanese"] = array();
	$fieldLabelssatei_of_brand["Japanese"]["product_id"] = "SEQ";
	$fieldToolTipssatei_of_brand["Japanese"]["product_id"] = "";
	$placeHolderssatei_of_brand["Japanese"]["product_id"] = "";
	$fieldLabelssatei_of_brand["Japanese"]["category_id"] = "大カテゴリー";
	$fieldToolTipssatei_of_brand["Japanese"]["category_id"] = "";
	$placeHolderssatei_of_brand["Japanese"]["category_id"] = "";
	$fieldLabelssatei_of_brand["Japanese"]["goods_title"] = "アイテム名";
	$fieldToolTipssatei_of_brand["Japanese"]["goods_title"] = "";
	$placeHolderssatei_of_brand["Japanese"]["goods_title"] = "";
	$fieldLabelssatei_of_brand["Japanese"]["title"] = "タイトル";
	$fieldToolTipssatei_of_brand["Japanese"]["title"] = "";
	$placeHolderssatei_of_brand["Japanese"]["title"] = "";
	$fieldLabelssatei_of_brand["Japanese"]["sub_category_id1"] = "中カテゴリー";
	$fieldToolTipssatei_of_brand["Japanese"]["sub_category_id1"] = "";
	$placeHolderssatei_of_brand["Japanese"]["sub_category_id1"] = "";
	$fieldLabelssatei_of_brand["Japanese"]["ecc_id"] = "Ecc Id";
	$fieldToolTipssatei_of_brand["Japanese"]["ecc_id"] = "";
	$placeHolderssatei_of_brand["Japanese"]["ecc_id"] = "";
	$fieldLabelssatei_of_brand["Japanese"]["price"] = "買取額";
	$fieldToolTipssatei_of_brand["Japanese"]["price"] = "";
	$placeHolderssatei_of_brand["Japanese"]["price"] = "";
	$fieldLabelssatei_of_brand["Japanese"]["yahoo"] = "Yahoo";
	$fieldToolTipssatei_of_brand["Japanese"]["yahoo"] = "";
	$placeHolderssatei_of_brand["Japanese"]["yahoo"] = "";
	$fieldLabelssatei_of_brand["Japanese"]["remark"] = "宝飾備考";
	$fieldToolTipssatei_of_brand["Japanese"]["remark"] = "";
	$placeHolderssatei_of_brand["Japanese"]["remark"] = "";
	$fieldLabelssatei_of_brand["Japanese"]["sales_price"] = "販売額";
	$fieldToolTipssatei_of_brand["Japanese"]["sales_price"] = "";
	$placeHolderssatei_of_brand["Japanese"]["sales_price"] = "";
	$fieldLabelssatei_of_brand["Japanese"]["description"] = "メモ";
	$fieldToolTipssatei_of_brand["Japanese"]["description"] = "";
	$placeHolderssatei_of_brand["Japanese"]["description"] = "";
	$fieldLabelssatei_of_brand["Japanese"]["status"] = "商品状態";
	$fieldToolTipssatei_of_brand["Japanese"]["status"] = "";
	$placeHolderssatei_of_brand["Japanese"]["status"] = "";
	$fieldLabelssatei_of_brand["Japanese"]["product_num"] = "ブランドID";
	$fieldToolTipssatei_of_brand["Japanese"]["product_num"] = "";
	$placeHolderssatei_of_brand["Japanese"]["product_num"] = "";
	$fieldLabelssatei_of_brand["Japanese"]["yahoo_size"] = "サイズ";
	$fieldToolTipssatei_of_brand["Japanese"]["yahoo_size"] = "";
	$placeHolderssatei_of_brand["Japanese"]["yahoo_size"] = "";
	$fieldLabelssatei_of_brand["Japanese"]["yahoo_title"] = "Yタイトル";
	$fieldToolTipssatei_of_brand["Japanese"]["yahoo_title"] = "";
	$placeHolderssatei_of_brand["Japanese"]["yahoo_title"] = "";
	$fieldLabelssatei_of_brand["Japanese"]["yahoo_sankou_uwadai"] = "参考上代";
	$fieldToolTipssatei_of_brand["Japanese"]["yahoo_sankou_uwadai"] = "";
	$placeHolderssatei_of_brand["Japanese"]["yahoo_sankou_uwadai"] = "";
	$fieldLabelssatei_of_brand["Japanese"]["yahoo_sozai"] = "素材";
	$fieldToolTipssatei_of_brand["Japanese"]["yahoo_sozai"] = "";
	$placeHolderssatei_of_brand["Japanese"]["yahoo_sozai"] = "";
	$fieldLabelssatei_of_brand["Japanese"]["yahoo_color"] = "カラー";
	$fieldToolTipssatei_of_brand["Japanese"]["yahoo_color"] = "";
	$placeHolderssatei_of_brand["Japanese"]["yahoo_color"] = "";
	$fieldLabelssatei_of_brand["Japanese"]["yahoo_kataban"] = "型番";
	$fieldToolTipssatei_of_brand["Japanese"]["yahoo_kataban"] = "";
	$placeHolderssatei_of_brand["Japanese"]["yahoo_kataban"] = "";
	$fieldLabelssatei_of_brand["Japanese"]["yahoo_condition1"] = "コンディションの詳細";
	$fieldToolTipssatei_of_brand["Japanese"]["yahoo_condition1"] = "";
	$placeHolderssatei_of_brand["Japanese"]["yahoo_condition1"] = "";
	$fieldLabelssatei_of_brand["Japanese"]["yahoo_condition2"] = "コンディション";
	$fieldToolTipssatei_of_brand["Japanese"]["yahoo_condition2"] = "";
	$placeHolderssatei_of_brand["Japanese"]["yahoo_condition2"] = "";
	$fieldLabelssatei_of_brand["Japanese"]["yahoo_fuzokuhin"] = "付属品";
	$fieldToolTipssatei_of_brand["Japanese"]["yahoo_fuzokuhin"] = "";
	$placeHolderssatei_of_brand["Japanese"]["yahoo_fuzokuhin"] = "";
	$fieldLabelssatei_of_brand["Japanese"]["yahoo_sinaban"] = "品番";
	$fieldToolTipssatei_of_brand["Japanese"]["yahoo_sinaban"] = "";
	$placeHolderssatei_of_brand["Japanese"]["yahoo_sinaban"] = "";
	$fieldLabelssatei_of_brand["Japanese"]["yahoo_saisun_sha"] = "Yahoo Saisun Sha";
	$fieldToolTipssatei_of_brand["Japanese"]["yahoo_saisun_sha"] = "";
	$placeHolderssatei_of_brand["Japanese"]["yahoo_saisun_sha"] = "";
	$fieldLabelssatei_of_brand["Japanese"]["yahoo_sex"] = "性別";
	$fieldToolTipssatei_of_brand["Japanese"]["yahoo_sex"] = "";
	$placeHolderssatei_of_brand["Japanese"]["yahoo_sex"] = "";
	$fieldLabelssatei_of_brand["Japanese"]["box_id"] = "Box Id";
	$fieldToolTipssatei_of_brand["Japanese"]["box_id"] = "";
	$placeHolderssatei_of_brand["Japanese"]["box_id"] = "";
	$fieldLabelssatei_of_brand["Japanese"]["nyuukin_price"] = "Nyuukin Price";
	$fieldToolTipssatei_of_brand["Japanese"]["nyuukin_price"] = "";
	$placeHolderssatei_of_brand["Japanese"]["nyuukin_price"] = "";
	$fieldLabelssatei_of_brand["Japanese"]["updated_by"] = "Updated By";
	$fieldToolTipssatei_of_brand["Japanese"]["updated_by"] = "";
	$placeHolderssatei_of_brand["Japanese"]["updated_by"] = "";
	$fieldLabelssatei_of_brand["Japanese"]["raku_title"] = "楽天タイトル";
	$fieldToolTipssatei_of_brand["Japanese"]["raku_title"] = "";
	$placeHolderssatei_of_brand["Japanese"]["raku_title"] = "";
	$fieldLabelssatei_of_brand["Japanese"]["raku_hyoujisaki_category2"] = "楽ジャン（店舗内）2";
	$fieldToolTipssatei_of_brand["Japanese"]["raku_hyoujisaki_category2"] = "";
	$placeHolderssatei_of_brand["Japanese"]["raku_hyoujisaki_category2"] = "";
	$fieldLabelssatei_of_brand["Japanese"]["raku_hyoujisaki_category"] = "楽ジャン（店舗内）1";
	$fieldToolTipssatei_of_brand["Japanese"]["raku_hyoujisaki_category"] = "";
	$placeHolderssatei_of_brand["Japanese"]["raku_hyoujisaki_category"] = "";
	$fieldLabelssatei_of_brand["Japanese"]["raku_hyoujisaki_category3"] = "楽ジャン（店舗内）3";
	$fieldToolTipssatei_of_brand["Japanese"]["raku_hyoujisaki_category3"] = "";
	$placeHolderssatei_of_brand["Japanese"]["raku_hyoujisaki_category3"] = "";
	$fieldLabelssatei_of_brand["Japanese"]["timesta"] = "Timesta";
	$fieldToolTipssatei_of_brand["Japanese"]["timesta"] = "";
	$placeHolderssatei_of_brand["Japanese"]["timesta"] = "";
	$fieldLabelssatei_of_brand["Japanese"]["saisun_start"] = "Saisun Start";
	$fieldToolTipssatei_of_brand["Japanese"]["saisun_start"] = "";
	$placeHolderssatei_of_brand["Japanese"]["saisun_start"] = "";
	$fieldLabelssatei_of_brand["Japanese"]["saisun_end"] = "Saisun End";
	$fieldToolTipssatei_of_brand["Japanese"]["saisun_end"] = "";
	$placeHolderssatei_of_brand["Japanese"]["saisun_end"] = "";
	$fieldLabelssatei_of_brand["Japanese"]["label_output_flag"] = "ラベル出力";
	$fieldToolTipssatei_of_brand["Japanese"]["label_output_flag"] = "";
	$placeHolderssatei_of_brand["Japanese"]["label_output_flag"] = "";
	$fieldLabelssatei_of_brand["Japanese"]["season"] = "季節";
	$fieldToolTipssatei_of_brand["Japanese"]["season"] = "";
	$placeHolderssatei_of_brand["Japanese"]["season"] = "";
	$fieldLabelssatei_of_brand["Japanese"]["kanryou_henbi"] = "Kanryou Henbi";
	$fieldToolTipssatei_of_brand["Japanese"]["kanryou_henbi"] = "";
	$placeHolderssatei_of_brand["Japanese"]["kanryou_henbi"] = "";
	$fieldLabelssatei_of_brand["Japanese"]["box_sort"] = "Box Sort";
	$fieldToolTipssatei_of_brand["Japanese"]["box_sort"] = "";
	$placeHolderssatei_of_brand["Japanese"]["box_sort"] = "";
	$fieldLabelssatei_of_brand["Japanese"]["satei_by"] = "査定人";
	$fieldToolTipssatei_of_brand["Japanese"]["satei_by"] = "";
	$placeHolderssatei_of_brand["Japanese"]["satei_by"] = "";
	$fieldLabelssatei_of_brand["Japanese"]["kaitori_by"] = "Kaitori By";
	$fieldToolTipssatei_of_brand["Japanese"]["kaitori_by"] = "";
	$placeHolderssatei_of_brand["Japanese"]["kaitori_by"] = "";
	$fieldLabelssatei_of_brand["Japanese"]["comment"] = "コメント";
	$fieldToolTipssatei_of_brand["Japanese"]["comment"] = "";
	$placeHolderssatei_of_brand["Japanese"]["comment"] = "";
	$fieldLabelssatei_of_brand["Japanese"]["satei_hi"] = "査定日";
	$fieldToolTipssatei_of_brand["Japanese"]["satei_hi"] = "";
	$placeHolderssatei_of_brand["Japanese"]["satei_hi"] = "";
	$fieldLabelssatei_of_brand["Japanese"]["kaitory_hi"] = "Kaitory Hi";
	$fieldToolTipssatei_of_brand["Japanese"]["kaitory_hi"] = "";
	$placeHolderssatei_of_brand["Japanese"]["kaitory_hi"] = "";
	$fieldLabelssatei_of_brand["Japanese"]["REG_PHOTOGRAPHER"] = "REG PHOTOGRAPHER";
	$fieldToolTipssatei_of_brand["Japanese"]["REG_PHOTOGRAPHER"] = "";
	$placeHolderssatei_of_brand["Japanese"]["REG_PHOTOGRAPHER"] = "";
	$fieldLabelssatei_of_brand["Japanese"]["REG_PACKINGS"] = "REG PACKINGS";
	$fieldToolTipssatei_of_brand["Japanese"]["REG_PACKINGS"] = "";
	$placeHolderssatei_of_brand["Japanese"]["REG_PACKINGS"] = "";
	$fieldLabelssatei_of_brand["Japanese"]["REG_KAKOU_DATE"] = "REG KAKOU DATE";
	$fieldToolTipssatei_of_brand["Japanese"]["REG_KAKOU_DATE"] = "";
	$placeHolderssatei_of_brand["Japanese"]["REG_KAKOU_DATE"] = "";
	$fieldLabelssatei_of_brand["Japanese"]["REG_KAKOU"] = "REG KAKOU";
	$fieldToolTipssatei_of_brand["Japanese"]["REG_KAKOU"] = "";
	$placeHolderssatei_of_brand["Japanese"]["REG_KAKOU"] = "";
	$fieldLabelssatei_of_brand["Japanese"]["REG_EXHIBITOR"] = "REG EXHIBITOR";
	$fieldToolTipssatei_of_brand["Japanese"]["REG_EXHIBITOR"] = "";
	$placeHolderssatei_of_brand["Japanese"]["REG_EXHIBITOR"] = "";
	$fieldLabelssatei_of_brand["Japanese"]["REG_PHOTOGRAPHER_DATE"] = "REG PHOTOGRAPHER DATE";
	$fieldToolTipssatei_of_brand["Japanese"]["REG_PHOTOGRAPHER_DATE"] = "";
	$placeHolderssatei_of_brand["Japanese"]["REG_PHOTOGRAPHER_DATE"] = "";
	$fieldLabelssatei_of_brand["Japanese"]["DT_PACKING_DATE"] = "DT PACKING DATE";
	$fieldToolTipssatei_of_brand["Japanese"]["DT_PACKING_DATE"] = "";
	$placeHolderssatei_of_brand["Japanese"]["DT_PACKING_DATE"] = "";
	$fieldLabelssatei_of_brand["Japanese"]["DT_UP_DATE"] = "DT UP DATE";
	$fieldToolTipssatei_of_brand["Japanese"]["DT_UP_DATE"] = "";
	$placeHolderssatei_of_brand["Japanese"]["DT_UP_DATE"] = "";
	$fieldLabelssatei_of_brand["Japanese"]["AWAZU_DATE"] = "AWAZU DATE";
	$fieldToolTipssatei_of_brand["Japanese"]["AWAZU_DATE"] = "";
	$placeHolderssatei_of_brand["Japanese"]["AWAZU_DATE"] = "";
	$fieldLabelssatei_of_brand["Japanese"]["AWAZU_NIN"] = "AWAZU NIN";
	$fieldToolTipssatei_of_brand["Japanese"]["AWAZU_NIN"] = "";
	$placeHolderssatei_of_brand["Japanese"]["AWAZU_NIN"] = "";
	$fieldLabelssatei_of_brand["Japanese"]["sabun_date"] = "Sabun Date";
	$fieldToolTipssatei_of_brand["Japanese"]["sabun_date"] = "";
	$placeHolderssatei_of_brand["Japanese"]["sabun_date"] = "";
	$fieldLabelssatei_of_brand["Japanese"]["browseid"] = "Browseid";
	$fieldToolTipssatei_of_brand["Japanese"]["browseid"] = "";
	$placeHolderssatei_of_brand["Japanese"]["browseid"] = "";
	$fieldLabelssatei_of_brand["Japanese"]["browsenode"] = "Browsenode";
	$fieldToolTipssatei_of_brand["Japanese"]["browsenode"] = "";
	$placeHolderssatei_of_brand["Japanese"]["browsenode"] = "";
	$fieldLabelssatei_of_brand["Japanese"]["Destination_selling"] = "売り先";
	$fieldToolTipssatei_of_brand["Japanese"]["Destination_selling"] = "";
	$placeHolderssatei_of_brand["Japanese"]["Destination_selling"] = "";
	$fieldLabelssatei_of_brand["Japanese"]["Finish"] = "仕上";
	$fieldToolTipssatei_of_brand["Japanese"]["Finish"] = "";
	$placeHolderssatei_of_brand["Japanese"]["Finish"] = "";
	$fieldLabelssatei_of_brand["Japanese"]["Discrimination"] = "鑑別";
	$fieldToolTipssatei_of_brand["Japanese"]["Discrimination"] = "";
	$placeHolderssatei_of_brand["Japanese"]["Discrimination"] = "";
	$fieldLabelssatei_of_brand["Japanese"]["accessories"] = "付属品";
	$fieldToolTipssatei_of_brand["Japanese"]["accessories"] = "";
	$placeHolderssatei_of_brand["Japanese"]["accessories"] = "";
	$fieldLabelssatei_of_brand["Japanese"]["priority"] = "優先";
	$fieldToolTipssatei_of_brand["Japanese"]["priority"] = "";
	$placeHolderssatei_of_brand["Japanese"]["priority"] = "";
	$fieldLabelssatei_of_brand["Japanese"]["A_storage"] = "A保管";
	$fieldToolTipssatei_of_brand["Japanese"]["A_storage"] = "";
	$placeHolderssatei_of_brand["Japanese"]["A_storage"] = "";
	$fieldLabelssatei_of_brand["Japanese"]["price_secret"] = "買取額隠語";
	$fieldToolTipssatei_of_brand["Japanese"]["price_secret"] = "";
	$placeHolderssatei_of_brand["Japanese"]["price_secret"] = "";
	$fieldLabelssatei_of_brand["Japanese"]["sales_price_secret"] = "販売額隠語";
	$fieldToolTipssatei_of_brand["Japanese"]["sales_price_secret"] = "";
	$placeHolderssatei_of_brand["Japanese"]["sales_price_secret"] = "";
	$fieldLabelssatei_of_brand["Japanese"]["eq"] = "=";
	$fieldToolTipssatei_of_brand["Japanese"]["eq"] = "";
	$placeHolderssatei_of_brand["Japanese"]["eq"] = "";
	$fieldLabelssatei_of_brand["Japanese"]["en"] = "円";
	$fieldToolTipssatei_of_brand["Japanese"]["en"] = "";
	$placeHolderssatei_of_brand["Japanese"]["en"] = "";
	$fieldLabelssatei_of_brand["Japanese"]["line"] = "ライン";
	$fieldToolTipssatei_of_brand["Japanese"]["line"] = "";
	$placeHolderssatei_of_brand["Japanese"]["line"] = "";
	$fieldLabelssatei_of_brand["Japanese"]["item_name"] = "アイテム名";
	$fieldToolTipssatei_of_brand["Japanese"]["item_name"] = "";
	$placeHolderssatei_of_brand["Japanese"]["item_name"] = "";
	$fieldLabelssatei_of_brand["Japanese"]["handle"] = "柄";
	$fieldToolTipssatei_of_brand["Japanese"]["handle"] = "";
	$placeHolderssatei_of_brand["Japanese"]["handle"] = "";
	$fieldLabelssatei_of_brand["Japanese"]["yahoo_color_id"] = "WS用カラー";
	$fieldToolTipssatei_of_brand["Japanese"]["yahoo_color_id"] = "";
	$placeHolderssatei_of_brand["Japanese"]["yahoo_color_id"] = "";
	$fieldLabelssatei_of_brand["Japanese"]["raku_hyoujisaki_category4"] = "楽ジャン（店舗内）4";
	$fieldToolTipssatei_of_brand["Japanese"]["raku_hyoujisaki_category4"] = "";
	$placeHolderssatei_of_brand["Japanese"]["raku_hyoujisaki_category4"] = "";
	$fieldLabelssatei_of_brand["Japanese"]["raku_hyoujisaki_category5"] = "楽ジャン（店舗内）5";
	$fieldToolTipssatei_of_brand["Japanese"]["raku_hyoujisaki_category5"] = "";
	$placeHolderssatei_of_brand["Japanese"]["raku_hyoujisaki_category5"] = "";
	$fieldLabelssatei_of_brand["Japanese"]["raku_dir_1"] = "Raku Dir 1";
	$fieldToolTipssatei_of_brand["Japanese"]["raku_dir_1"] = "";
	$placeHolderssatei_of_brand["Japanese"]["raku_dir_1"] = "";
	$fieldLabelssatei_of_brand["Japanese"]["raku_dir_2"] = "Raku Dir 2";
	$fieldToolTipssatei_of_brand["Japanese"]["raku_dir_2"] = "";
	$placeHolderssatei_of_brand["Japanese"]["raku_dir_2"] = "";
	$fieldLabelssatei_of_brand["Japanese"]["raku_dir_3"] = "Raku Dir 3";
	$fieldToolTipssatei_of_brand["Japanese"]["raku_dir_3"] = "";
	$placeHolderssatei_of_brand["Japanese"]["raku_dir_3"] = "";
	$fieldLabelssatei_of_brand["Japanese"]["raku_dir_4"] = "Raku Dir 4";
	$fieldToolTipssatei_of_brand["Japanese"]["raku_dir_4"] = "";
	$placeHolderssatei_of_brand["Japanese"]["raku_dir_4"] = "";
	$fieldLabelssatei_of_brand["Japanese"]["raku_dir_5"] = "Raku Dir 5";
	$fieldToolTipssatei_of_brand["Japanese"]["raku_dir_5"] = "";
	$placeHolderssatei_of_brand["Japanese"]["raku_dir_5"] = "";
	$fieldLabelssatei_of_brand["Japanese"]["raku_dir_result"] = "Raku Dir Result";
	$fieldToolTipssatei_of_brand["Japanese"]["raku_dir_result"] = "";
	$placeHolderssatei_of_brand["Japanese"]["raku_dir_result"] = "";
	$fieldLabelssatei_of_brand["Japanese"]["raku_tag_result"] = "楽天タグID　Result";
	$fieldToolTipssatei_of_brand["Japanese"]["raku_tag_result"] = "";
	$placeHolderssatei_of_brand["Japanese"]["raku_tag_result"] = "";
	$fieldLabelssatei_of_brand["Japanese"]["serial_number"] = "機番";
	$fieldToolTipssatei_of_brand["Japanese"]["serial_number"] = "";
	$placeHolderssatei_of_brand["Japanese"]["serial_number"] = "";
	$fieldLabelssatei_of_brand["Japanese"]["Exhibition_Date"] = "Exhibition Date";
	$fieldToolTipssatei_of_brand["Japanese"]["Exhibition_Date"] = "";
	$placeHolderssatei_of_brand["Japanese"]["Exhibition_Date"] = "";
	$fieldLabelssatei_of_brand["Japanese"]["search_keyword"] = "ストア内検索キーワード";
	$fieldToolTipssatei_of_brand["Japanese"]["search_keyword"] = "";
	$placeHolderssatei_of_brand["Japanese"]["search_keyword"] = "";
	$fieldLabelssatei_of_brand["Japanese"]["stamp"] = "刻印";
	$fieldToolTipssatei_of_brand["Japanese"]["stamp"] = "";
	$placeHolderssatei_of_brand["Japanese"]["stamp"] = "";
	$fieldLabelssatei_of_brand["Japanese"]["Sleeve_Length"] = "袖丈";
	$fieldToolTipssatei_of_brand["Japanese"]["Sleeve_Length"] = "";
	$placeHolderssatei_of_brand["Japanese"]["Sleeve_Length"] = "";
	$fieldLabelssatei_of_brand["Japanese"]["length"] = "着丈";
	$fieldToolTipssatei_of_brand["Japanese"]["length"] = "";
	$placeHolderssatei_of_brand["Japanese"]["length"] = "";
	$fieldLabelssatei_of_brand["Japanese"]["price_for_site"] = "Price For Site";
	$fieldToolTipssatei_of_brand["Japanese"]["price_for_site"] = "";
	$placeHolderssatei_of_brand["Japanese"]["price_for_site"] = "";
	$fieldLabelssatei_of_brand["Japanese"]["yahoo_category_id"] = "Yahoo Category Id";
	$fieldToolTipssatei_of_brand["Japanese"]["yahoo_category_id"] = "";
	$placeHolderssatei_of_brand["Japanese"]["yahoo_category_id"] = "";
	$fieldLabelssatei_of_brand["Japanese"]["Qty"] = "Qty";
	$fieldToolTipssatei_of_brand["Japanese"]["Qty"] = "";
	$placeHolderssatei_of_brand["Japanese"]["Qty"] = "";
	$fieldLabelssatei_of_brand["Japanese"]["sales_period"] = "Sales Period";
	$fieldToolTipssatei_of_brand["Japanese"]["sales_period"] = "";
	$placeHolderssatei_of_brand["Japanese"]["sales_period"] = "";
	$fieldLabelssatei_of_brand["Japanese"]["starting_price"] = "Starting Price";
	$fieldToolTipssatei_of_brand["Japanese"]["starting_price"] = "";
	$placeHolderssatei_of_brand["Japanese"]["starting_price"] = "";
	$fieldLabelssatei_of_brand["Japanese"]["ecc_seq"] = "顧客番号";
	$fieldToolTipssatei_of_brand["Japanese"]["ecc_seq"] = "";
	$placeHolderssatei_of_brand["Japanese"]["ecc_seq"] = "";
	$fieldLabelssatei_of_brand["Japanese"]["yahoo_junle"] = "ブランドジャンル";
	$fieldToolTipssatei_of_brand["Japanese"]["yahoo_junle"] = "";
	$placeHolderssatei_of_brand["Japanese"]["yahoo_junle"] = "";
	$fieldLabelssatei_of_brand["Japanese"]["logo"] = "ロゴ";
	$fieldToolTipssatei_of_brand["Japanese"]["logo"] = "";
	$placeHolderssatei_of_brand["Japanese"]["logo"] = "";
	$fieldLabelssatei_of_brand["Japanese"]["parts"] = "金具（パーツ）";
	$fieldToolTipssatei_of_brand["Japanese"]["parts"] = "";
	$placeHolderssatei_of_brand["Japanese"]["parts"] = "";
	$fieldLabelssatei_of_brand["Japanese"]["country_of_origin"] = "原産国";
	$fieldToolTipssatei_of_brand["Japanese"]["country_of_origin"] = "";
	$placeHolderssatei_of_brand["Japanese"]["country_of_origin"] = "";
	$fieldLabelssatei_of_brand["Japanese"]["zipper"] = "金具（ファスナー）";
	$fieldToolTipssatei_of_brand["Japanese"]["zipper"] = "";
	$placeHolderssatei_of_brand["Japanese"]["zipper"] = "";
	$fieldLabelssatei_of_brand["Japanese"]["guarantee"] = "ギャランティ";
	$fieldToolTipssatei_of_brand["Japanese"]["guarantee"] = "";
	$placeHolderssatei_of_brand["Japanese"]["guarantee"] = "";
	$fieldLabelssatei_of_brand["Japanese"]["errors"] = "真贋チェックエラー";
	$fieldToolTipssatei_of_brand["Japanese"]["errors"] = "";
	$placeHolderssatei_of_brand["Japanese"]["errors"] = "";
	$fieldLabelssatei_of_brand["Japanese"]["amount"] = "内容量";
	$fieldToolTipssatei_of_brand["Japanese"]["amount"] = "";
	$placeHolderssatei_of_brand["Japanese"]["amount"] = "";
	$fieldLabelssatei_of_brand["Japanese"]["satei_error"] = "査定抜けエラー";
	$fieldToolTipssatei_of_brand["Japanese"]["satei_error"] = "";
	$placeHolderssatei_of_brand["Japanese"]["satei_error"] = "";
	$fieldLabelssatei_of_brand["Japanese"]["shape_supplement"] = "形状補足";
	$fieldToolTipssatei_of_brand["Japanese"]["shape_supplement"] = "";
	$placeHolderssatei_of_brand["Japanese"]["shape_supplement"] = "";
	$fieldLabelssatei_of_brand["Japanese"]["product_style"] = "形状名";
	$fieldToolTipssatei_of_brand["Japanese"]["product_style"] = "";
	$placeHolderssatei_of_brand["Japanese"]["product_style"] = "";
	$fieldLabelssatei_of_brand["Japanese"]["collar_neck_line"] = "襟・ネックライン";
	$fieldToolTipssatei_of_brand["Japanese"]["collar_neck_line"] = "";
	$placeHolderssatei_of_brand["Japanese"]["collar_neck_line"] = "";
	$fieldLabelssatei_of_brand["Japanese"]["breast"] = "ブレスト";
	$fieldToolTipssatei_of_brand["Japanese"]["breast"] = "";
	$placeHolderssatei_of_brand["Japanese"]["breast"] = "";
	$fieldLabelssatei_of_brand["Japanese"]["silhouette"] = "シルエット";
	$fieldToolTipssatei_of_brand["Japanese"]["silhouette"] = "";
	$placeHolderssatei_of_brand["Japanese"]["silhouette"] = "";
	$fieldLabelssatei_of_brand["Japanese"]["sleeve"] = "スリーブ";
	$fieldToolTipssatei_of_brand["Japanese"]["sleeve"] = "";
	$placeHolderssatei_of_brand["Japanese"]["sleeve"] = "";
	$fieldLabelssatei_of_brand["Japanese"]["hall_mark"] = "ホールマーク";
	$fieldToolTipssatei_of_brand["Japanese"]["hall_mark"] = "";
	$placeHolderssatei_of_brand["Japanese"]["hall_mark"] = "";
	$fieldLabelssatei_of_brand["Japanese"]["plate"] = "プレート";
	$fieldToolTipssatei_of_brand["Japanese"]["plate"] = "";
	$placeHolderssatei_of_brand["Japanese"]["plate"] = "";
	$fieldLabelssatei_of_brand["Japanese"]["toe"] = "トウ";
	$fieldToolTipssatei_of_brand["Japanese"]["toe"] = "";
	$placeHolderssatei_of_brand["Japanese"]["toe"] = "";
	$fieldLabelssatei_of_brand["Japanese"]["heel"] = "ソール/ヒール";
	$fieldToolTipssatei_of_brand["Japanese"]["heel"] = "";
	$placeHolderssatei_of_brand["Japanese"]["heel"] = "";
	$fieldLabelssatei_of_brand["Japanese"]["cloth"] = "生地";
	$fieldToolTipssatei_of_brand["Japanese"]["cloth"] = "";
	$placeHolderssatei_of_brand["Japanese"]["cloth"] = "";
	$fieldLabelssatei_of_brand["Japanese"]["official_url"] = "オフィシャルURL";
	$fieldToolTipssatei_of_brand["Japanese"]["official_url"] = "";
	$placeHolderssatei_of_brand["Japanese"]["official_url"] = "";
	if (count($fieldToolTipssatei_of_brand["Japanese"]))
		$tdatasatei_of_brand[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelssatei_of_brand[""] = array();
	$fieldToolTipssatei_of_brand[""] = array();
	$placeHolderssatei_of_brand[""] = array();
	$pageTitlessatei_of_brand[""] = array();
	$fieldLabelssatei_of_brand[""]["logo"] = "Logo";
	$fieldToolTipssatei_of_brand[""]["logo"] = "";
	$placeHolderssatei_of_brand[""]["logo"] = "";
	$fieldLabelssatei_of_brand[""]["parts"] = "Parts";
	$fieldToolTipssatei_of_brand[""]["parts"] = "";
	$placeHolderssatei_of_brand[""]["parts"] = "";
	$fieldLabelssatei_of_brand[""]["country_of_origin"] = "Country Of Origin";
	$fieldToolTipssatei_of_brand[""]["country_of_origin"] = "";
	$placeHolderssatei_of_brand[""]["country_of_origin"] = "";
	$fieldLabelssatei_of_brand[""]["zipper"] = "Zipper";
	$fieldToolTipssatei_of_brand[""]["zipper"] = "";
	$placeHolderssatei_of_brand[""]["zipper"] = "";
	$fieldLabelssatei_of_brand[""]["guarantee"] = "Guarantee";
	$fieldToolTipssatei_of_brand[""]["guarantee"] = "";
	$placeHolderssatei_of_brand[""]["guarantee"] = "";
	$fieldLabelssatei_of_brand[""]["errors"] = "Errors";
	$fieldToolTipssatei_of_brand[""]["errors"] = "";
	$placeHolderssatei_of_brand[""]["errors"] = "";
	$fieldLabelssatei_of_brand[""]["amount"] = "Amount";
	$fieldToolTipssatei_of_brand[""]["amount"] = "";
	$placeHolderssatei_of_brand[""]["amount"] = "";
	$fieldLabelssatei_of_brand[""]["satei_error"] = "Satei Error";
	$fieldToolTipssatei_of_brand[""]["satei_error"] = "";
	$placeHolderssatei_of_brand[""]["satei_error"] = "";
	$fieldLabelssatei_of_brand[""]["shape_supplement"] = "Shape Supplement";
	$fieldToolTipssatei_of_brand[""]["shape_supplement"] = "";
	$placeHolderssatei_of_brand[""]["shape_supplement"] = "";
	$fieldLabelssatei_of_brand[""]["product_style"] = "Product Style";
	$fieldToolTipssatei_of_brand[""]["product_style"] = "";
	$placeHolderssatei_of_brand[""]["product_style"] = "";
	$fieldLabelssatei_of_brand[""]["collar_neck_line"] = "Collar Neck Line";
	$fieldToolTipssatei_of_brand[""]["collar_neck_line"] = "";
	$placeHolderssatei_of_brand[""]["collar_neck_line"] = "";
	$fieldLabelssatei_of_brand[""]["breast"] = "Breast";
	$fieldToolTipssatei_of_brand[""]["breast"] = "";
	$placeHolderssatei_of_brand[""]["breast"] = "";
	$fieldLabelssatei_of_brand[""]["silhouette"] = "Silhouette";
	$fieldToolTipssatei_of_brand[""]["silhouette"] = "";
	$placeHolderssatei_of_brand[""]["silhouette"] = "";
	$fieldLabelssatei_of_brand[""]["sleeve"] = "Sleeve";
	$fieldToolTipssatei_of_brand[""]["sleeve"] = "";
	$placeHolderssatei_of_brand[""]["sleeve"] = "";
	$fieldLabelssatei_of_brand[""]["hall_mark"] = "Hall Mark";
	$fieldToolTipssatei_of_brand[""]["hall_mark"] = "";
	$placeHolderssatei_of_brand[""]["hall_mark"] = "";
	$fieldLabelssatei_of_brand[""]["plate"] = "Plate";
	$fieldToolTipssatei_of_brand[""]["plate"] = "";
	$placeHolderssatei_of_brand[""]["plate"] = "";
	$fieldLabelssatei_of_brand[""]["toe"] = "Toe";
	$fieldToolTipssatei_of_brand[""]["toe"] = "";
	$placeHolderssatei_of_brand[""]["toe"] = "";
	$fieldLabelssatei_of_brand[""]["heel"] = "Heel";
	$fieldToolTipssatei_of_brand[""]["heel"] = "";
	$placeHolderssatei_of_brand[""]["heel"] = "";
	$fieldLabelssatei_of_brand[""]["cloth"] = "Cloth";
	$fieldToolTipssatei_of_brand[""]["cloth"] = "";
	$placeHolderssatei_of_brand[""]["cloth"] = "";
	$fieldLabelssatei_of_brand[""]["official_url"] = "Official Url";
	$fieldToolTipssatei_of_brand[""]["official_url"] = "";
	$placeHolderssatei_of_brand[""]["official_url"] = "";
	if (count($fieldToolTipssatei_of_brand[""]))
		$tdatasatei_of_brand[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelssatei_of_brand["English"] = array();
	$fieldToolTipssatei_of_brand["English"] = array();
	$placeHolderssatei_of_brand["English"] = array();
	$pageTitlessatei_of_brand["English"] = array();
	if (count($fieldToolTipssatei_of_brand["English"]))
		$tdatasatei_of_brand[".isUseToolTips"] = true;
}


	$tdatasatei_of_brand[".NCSearch"] = true;



$tdatasatei_of_brand[".shortTableName"] = "satei_of_brand";
$tdatasatei_of_brand[".nSecOptions"] = 0;
$tdatasatei_of_brand[".recsPerRowPrint"] = 1;
$tdatasatei_of_brand[".mainTableOwnerID"] = "";
$tdatasatei_of_brand[".moveNext"] = 1;
$tdatasatei_of_brand[".entityType"] = 1;

$tdatasatei_of_brand[".strOriginalTableName"] = "shouhin";

	



$tdatasatei_of_brand[".showAddInPopup"] = false;

$tdatasatei_of_brand[".showEditInPopup"] = false;

$tdatasatei_of_brand[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatasatei_of_brand[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatasatei_of_brand[".fieldsForRegister"] = array();

$tdatasatei_of_brand[".listAjax"] = false;

	$tdatasatei_of_brand[".audit"] = true;

	$tdatasatei_of_brand[".locking"] = false;



$tdatasatei_of_brand[".list"] = true;

$tdatasatei_of_brand[".inlineEdit"] = true;


$tdatasatei_of_brand[".reorderRecordsByHeader"] = true;
$tdatasatei_of_brand[".createSortByDropdown"] = true;
$tdatasatei_of_brand[".strSortControlSettingsJSON"] = "";



$tdatasatei_of_brand[".inlineAdd"] = true;

$tdatasatei_of_brand[".import"] = true;

$tdatasatei_of_brand[".exportTo"] = true;


$tdatasatei_of_brand[".delete"] = true;

$tdatasatei_of_brand[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatasatei_of_brand[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatasatei_of_brand[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatasatei_of_brand[".searchSaving"] = false;
//

$tdatasatei_of_brand[".showSearchPanel"] = true;
		$tdatasatei_of_brand[".flexibleSearch"] = true;

$tdatasatei_of_brand[".isUseAjaxSuggest"] = true;

$tdatasatei_of_brand[".rowHighlite"] = true;



																																																																																																					
					
					
					
					
					
															

$tdatasatei_of_brand[".ajaxCodeSnippetAdded"] = false;

$tdatasatei_of_brand[".buttonsAdded"] = true;

$tdatasatei_of_brand[".addPageEvents"] = true;

// use timepicker for search panel
$tdatasatei_of_brand[".isUseTimeForSearch"] = false;



$tdatasatei_of_brand[".badgeColor"] = "daa520";


$tdatasatei_of_brand[".allSearchFields"] = array();
$tdatasatei_of_brand[".filterFields"] = array();
$tdatasatei_of_brand[".requiredSearchFields"] = array();

$tdatasatei_of_brand[".allSearchFields"][] = "product_num";
	$tdatasatei_of_brand[".allSearchFields"][] = "category_id";
	$tdatasatei_of_brand[".allSearchFields"][] = "sub_category_id1";
	$tdatasatei_of_brand[".allSearchFields"][] = "yahoo_sex";
	$tdatasatei_of_brand[".allSearchFields"][] = "yahoo_condition2";
	$tdatasatei_of_brand[".allSearchFields"][] = "ecc_seq";
	$tdatasatei_of_brand[".allSearchFields"][] = "status";
	$tdatasatei_of_brand[".allSearchFields"][] = "satei_by";
	$tdatasatei_of_brand[".allSearchFields"][] = "title";
	$tdatasatei_of_brand[".allSearchFields"][] = "product_id";
	$tdatasatei_of_brand[".allSearchFields"][] = "yahoo_sinaban";
	$tdatasatei_of_brand[".allSearchFields"][] = "price";
	$tdatasatei_of_brand[".allSearchFields"][] = "sales_price";
	$tdatasatei_of_brand[".allSearchFields"][] = "description";
	$tdatasatei_of_brand[".allSearchFields"][] = "raku_hyoujisaki_category";
	$tdatasatei_of_brand[".allSearchFields"][] = "raku_hyoujisaki_category2";
	$tdatasatei_of_brand[".allSearchFields"][] = "raku_hyoujisaki_category3";
	$tdatasatei_of_brand[".allSearchFields"][] = "raku_hyoujisaki_category4";
	$tdatasatei_of_brand[".allSearchFields"][] = "raku_hyoujisaki_category5";
	$tdatasatei_of_brand[".allSearchFields"][] = "yahoo_kataban";
	$tdatasatei_of_brand[".allSearchFields"][] = "yahoo_sozai";
	$tdatasatei_of_brand[".allSearchFields"][] = "yahoo_color";
	$tdatasatei_of_brand[".allSearchFields"][] = "yahoo_size";
	$tdatasatei_of_brand[".allSearchFields"][] = "yahoo_condition1";
	$tdatasatei_of_brand[".allSearchFields"][] = "remark";
	$tdatasatei_of_brand[".allSearchFields"][] = "yahoo_fuzokuhin";
	$tdatasatei_of_brand[".allSearchFields"][] = "yahoo_sankou_uwadai";
	$tdatasatei_of_brand[".allSearchFields"][] = "season";
	$tdatasatei_of_brand[".allSearchFields"][] = "yahoo_title";
	$tdatasatei_of_brand[".allSearchFields"][] = "goods_title";
	$tdatasatei_of_brand[".allSearchFields"][] = "raku_title";
	$tdatasatei_of_brand[".allSearchFields"][] = "raku_tag_result";
	$tdatasatei_of_brand[".allSearchFields"][] = "search_keyword";
	$tdatasatei_of_brand[".allSearchFields"][] = "stamp";
	$tdatasatei_of_brand[".allSearchFields"][] = "Sleeve_Length";
	$tdatasatei_of_brand[".allSearchFields"][] = "length";
	$tdatasatei_of_brand[".allSearchFields"][] = "label_output_flag";
	$tdatasatei_of_brand[".allSearchFields"][] = "comment";
	$tdatasatei_of_brand[".allSearchFields"][] = "satei_hi";
	$tdatasatei_of_brand[".allSearchFields"][] = "Destination_selling";
	$tdatasatei_of_brand[".allSearchFields"][] = "Finish";
	$tdatasatei_of_brand[".allSearchFields"][] = "Discrimination";
	$tdatasatei_of_brand[".allSearchFields"][] = "accessories";
	$tdatasatei_of_brand[".allSearchFields"][] = "priority";
	$tdatasatei_of_brand[".allSearchFields"][] = "A_storage";
	$tdatasatei_of_brand[".allSearchFields"][] = "price_secret";
	$tdatasatei_of_brand[".allSearchFields"][] = "sales_price_secret";
	$tdatasatei_of_brand[".allSearchFields"][] = "line";
	$tdatasatei_of_brand[".allSearchFields"][] = "item_name";
	$tdatasatei_of_brand[".allSearchFields"][] = "handle";
	$tdatasatei_of_brand[".allSearchFields"][] = "serial_number";
	$tdatasatei_of_brand[".allSearchFields"][] = "logo";
	$tdatasatei_of_brand[".allSearchFields"][] = "parts";
	$tdatasatei_of_brand[".allSearchFields"][] = "country_of_origin";
	$tdatasatei_of_brand[".allSearchFields"][] = "zipper";
	$tdatasatei_of_brand[".allSearchFields"][] = "guarantee";
	$tdatasatei_of_brand[".allSearchFields"][] = "errors";
	$tdatasatei_of_brand[".allSearchFields"][] = "collar_neck_line";
	$tdatasatei_of_brand[".allSearchFields"][] = "product_style";
	$tdatasatei_of_brand[".allSearchFields"][] = "sleeve";
	$tdatasatei_of_brand[".allSearchFields"][] = "amount";
	$tdatasatei_of_brand[".allSearchFields"][] = "satei_error";
	$tdatasatei_of_brand[".allSearchFields"][] = "silhouette";
	$tdatasatei_of_brand[".allSearchFields"][] = "shape_supplement";
	$tdatasatei_of_brand[".allSearchFields"][] = "breast";
	$tdatasatei_of_brand[".allSearchFields"][] = "plate";
	$tdatasatei_of_brand[".allSearchFields"][] = "hall_mark";
	$tdatasatei_of_brand[".allSearchFields"][] = "toe";
	$tdatasatei_of_brand[".allSearchFields"][] = "cloth";
	$tdatasatei_of_brand[".allSearchFields"][] = "heel";
	

$tdatasatei_of_brand[".googleLikeFields"] = array();
$tdatasatei_of_brand[".googleLikeFields"][] = "product_id";
$tdatasatei_of_brand[".googleLikeFields"][] = "category_id";
$tdatasatei_of_brand[".googleLikeFields"][] = "goods_title";
$tdatasatei_of_brand[".googleLikeFields"][] = "title";
$tdatasatei_of_brand[".googleLikeFields"][] = "sub_category_id1";
$tdatasatei_of_brand[".googleLikeFields"][] = "price";
$tdatasatei_of_brand[".googleLikeFields"][] = "remark";
$tdatasatei_of_brand[".googleLikeFields"][] = "sales_price";
$tdatasatei_of_brand[".googleLikeFields"][] = "description";
$tdatasatei_of_brand[".googleLikeFields"][] = "status";
$tdatasatei_of_brand[".googleLikeFields"][] = "product_num";
$tdatasatei_of_brand[".googleLikeFields"][] = "yahoo_size";
$tdatasatei_of_brand[".googleLikeFields"][] = "yahoo_title";
$tdatasatei_of_brand[".googleLikeFields"][] = "yahoo_sankou_uwadai";
$tdatasatei_of_brand[".googleLikeFields"][] = "yahoo_sozai";
$tdatasatei_of_brand[".googleLikeFields"][] = "yahoo_color";
$tdatasatei_of_brand[".googleLikeFields"][] = "yahoo_kataban";
$tdatasatei_of_brand[".googleLikeFields"][] = "yahoo_condition1";
$tdatasatei_of_brand[".googleLikeFields"][] = "yahoo_condition2";
$tdatasatei_of_brand[".googleLikeFields"][] = "yahoo_fuzokuhin";
$tdatasatei_of_brand[".googleLikeFields"][] = "yahoo_sinaban";
$tdatasatei_of_brand[".googleLikeFields"][] = "yahoo_sex";
$tdatasatei_of_brand[".googleLikeFields"][] = "raku_title";
$tdatasatei_of_brand[".googleLikeFields"][] = "raku_hyoujisaki_category2";
$tdatasatei_of_brand[".googleLikeFields"][] = "raku_hyoujisaki_category";
$tdatasatei_of_brand[".googleLikeFields"][] = "raku_hyoujisaki_category3";
$tdatasatei_of_brand[".googleLikeFields"][] = "label_output_flag";
$tdatasatei_of_brand[".googleLikeFields"][] = "season";
$tdatasatei_of_brand[".googleLikeFields"][] = "satei_by";
$tdatasatei_of_brand[".googleLikeFields"][] = "comment";
$tdatasatei_of_brand[".googleLikeFields"][] = "satei_hi";
$tdatasatei_of_brand[".googleLikeFields"][] = "Destination_selling";
$tdatasatei_of_brand[".googleLikeFields"][] = "Finish";
$tdatasatei_of_brand[".googleLikeFields"][] = "Discrimination";
$tdatasatei_of_brand[".googleLikeFields"][] = "accessories";
$tdatasatei_of_brand[".googleLikeFields"][] = "priority";
$tdatasatei_of_brand[".googleLikeFields"][] = "A_storage";
$tdatasatei_of_brand[".googleLikeFields"][] = "price_secret";
$tdatasatei_of_brand[".googleLikeFields"][] = "sales_price_secret";
$tdatasatei_of_brand[".googleLikeFields"][] = "line";
$tdatasatei_of_brand[".googleLikeFields"][] = "item_name";
$tdatasatei_of_brand[".googleLikeFields"][] = "handle";
$tdatasatei_of_brand[".googleLikeFields"][] = "yahoo_color_id";
$tdatasatei_of_brand[".googleLikeFields"][] = "raku_hyoujisaki_category4";
$tdatasatei_of_brand[".googleLikeFields"][] = "raku_hyoujisaki_category5";
$tdatasatei_of_brand[".googleLikeFields"][] = "raku_tag_result";
$tdatasatei_of_brand[".googleLikeFields"][] = "serial_number";
$tdatasatei_of_brand[".googleLikeFields"][] = "search_keyword";
$tdatasatei_of_brand[".googleLikeFields"][] = "stamp";
$tdatasatei_of_brand[".googleLikeFields"][] = "Sleeve_Length";
$tdatasatei_of_brand[".googleLikeFields"][] = "length";
$tdatasatei_of_brand[".googleLikeFields"][] = "ecc_seq";
$tdatasatei_of_brand[".googleLikeFields"][] = "yahoo_junle";
$tdatasatei_of_brand[".googleLikeFields"][] = "logo";
$tdatasatei_of_brand[".googleLikeFields"][] = "parts";
$tdatasatei_of_brand[".googleLikeFields"][] = "country_of_origin";
$tdatasatei_of_brand[".googleLikeFields"][] = "zipper";
$tdatasatei_of_brand[".googleLikeFields"][] = "guarantee";
$tdatasatei_of_brand[".googleLikeFields"][] = "errors";
$tdatasatei_of_brand[".googleLikeFields"][] = "amount";
$tdatasatei_of_brand[".googleLikeFields"][] = "satei_error";
$tdatasatei_of_brand[".googleLikeFields"][] = "shape_supplement";
$tdatasatei_of_brand[".googleLikeFields"][] = "product_style";
$tdatasatei_of_brand[".googleLikeFields"][] = "collar_neck_line";
$tdatasatei_of_brand[".googleLikeFields"][] = "breast";
$tdatasatei_of_brand[".googleLikeFields"][] = "silhouette";
$tdatasatei_of_brand[".googleLikeFields"][] = "sleeve";
$tdatasatei_of_brand[".googleLikeFields"][] = "hall_mark";
$tdatasatei_of_brand[".googleLikeFields"][] = "plate";
$tdatasatei_of_brand[".googleLikeFields"][] = "toe";
$tdatasatei_of_brand[".googleLikeFields"][] = "heel";
$tdatasatei_of_brand[".googleLikeFields"][] = "cloth";
$tdatasatei_of_brand[".googleLikeFields"][] = "official_url";

$tdatasatei_of_brand[".panelSearchFields"] = array();
$tdatasatei_of_brand[".searchPanelOptions"] = array();
$tdatasatei_of_brand[".panelSearchFields"][] = "product_num";
	$tdatasatei_of_brand[".panelSearchFields"][] = "category_id";
	$tdatasatei_of_brand[".panelSearchFields"][] = "sub_category_id1";
	$tdatasatei_of_brand[".panelSearchFields"][] = "yahoo_sex";
	$tdatasatei_of_brand[".panelSearchFields"][] = "yahoo_condition2";
	
$tdatasatei_of_brand[".advSearchFields"] = array();
$tdatasatei_of_brand[".advSearchFields"][] = "product_num";
$tdatasatei_of_brand[".advSearchFields"][] = "category_id";
$tdatasatei_of_brand[".advSearchFields"][] = "sub_category_id1";
$tdatasatei_of_brand[".advSearchFields"][] = "yahoo_sex";
$tdatasatei_of_brand[".advSearchFields"][] = "yahoo_condition2";
$tdatasatei_of_brand[".advSearchFields"][] = "ecc_seq";
$tdatasatei_of_brand[".advSearchFields"][] = "status";
$tdatasatei_of_brand[".advSearchFields"][] = "satei_by";
$tdatasatei_of_brand[".advSearchFields"][] = "title";
$tdatasatei_of_brand[".advSearchFields"][] = "product_id";
$tdatasatei_of_brand[".advSearchFields"][] = "yahoo_sinaban";
$tdatasatei_of_brand[".advSearchFields"][] = "price";
$tdatasatei_of_brand[".advSearchFields"][] = "sales_price";
$tdatasatei_of_brand[".advSearchFields"][] = "description";
$tdatasatei_of_brand[".advSearchFields"][] = "raku_hyoujisaki_category";
$tdatasatei_of_brand[".advSearchFields"][] = "raku_hyoujisaki_category2";
$tdatasatei_of_brand[".advSearchFields"][] = "raku_hyoujisaki_category3";
$tdatasatei_of_brand[".advSearchFields"][] = "raku_hyoujisaki_category4";
$tdatasatei_of_brand[".advSearchFields"][] = "raku_hyoujisaki_category5";
$tdatasatei_of_brand[".advSearchFields"][] = "yahoo_kataban";
$tdatasatei_of_brand[".advSearchFields"][] = "yahoo_sozai";
$tdatasatei_of_brand[".advSearchFields"][] = "yahoo_color";
$tdatasatei_of_brand[".advSearchFields"][] = "yahoo_size";
$tdatasatei_of_brand[".advSearchFields"][] = "yahoo_condition1";
$tdatasatei_of_brand[".advSearchFields"][] = "remark";
$tdatasatei_of_brand[".advSearchFields"][] = "yahoo_fuzokuhin";
$tdatasatei_of_brand[".advSearchFields"][] = "yahoo_sankou_uwadai";
$tdatasatei_of_brand[".advSearchFields"][] = "season";
$tdatasatei_of_brand[".advSearchFields"][] = "yahoo_title";
$tdatasatei_of_brand[".advSearchFields"][] = "goods_title";
$tdatasatei_of_brand[".advSearchFields"][] = "raku_title";
$tdatasatei_of_brand[".advSearchFields"][] = "raku_tag_result";
$tdatasatei_of_brand[".advSearchFields"][] = "search_keyword";
$tdatasatei_of_brand[".advSearchFields"][] = "stamp";
$tdatasatei_of_brand[".advSearchFields"][] = "Sleeve_Length";
$tdatasatei_of_brand[".advSearchFields"][] = "length";
$tdatasatei_of_brand[".advSearchFields"][] = "label_output_flag";
$tdatasatei_of_brand[".advSearchFields"][] = "comment";
$tdatasatei_of_brand[".advSearchFields"][] = "satei_hi";
$tdatasatei_of_brand[".advSearchFields"][] = "Destination_selling";
$tdatasatei_of_brand[".advSearchFields"][] = "Finish";
$tdatasatei_of_brand[".advSearchFields"][] = "Discrimination";
$tdatasatei_of_brand[".advSearchFields"][] = "accessories";
$tdatasatei_of_brand[".advSearchFields"][] = "priority";
$tdatasatei_of_brand[".advSearchFields"][] = "A_storage";
$tdatasatei_of_brand[".advSearchFields"][] = "price_secret";
$tdatasatei_of_brand[".advSearchFields"][] = "sales_price_secret";
$tdatasatei_of_brand[".advSearchFields"][] = "line";
$tdatasatei_of_brand[".advSearchFields"][] = "item_name";
$tdatasatei_of_brand[".advSearchFields"][] = "handle";
$tdatasatei_of_brand[".advSearchFields"][] = "serial_number";
$tdatasatei_of_brand[".advSearchFields"][] = "logo";
$tdatasatei_of_brand[".advSearchFields"][] = "parts";
$tdatasatei_of_brand[".advSearchFields"][] = "country_of_origin";
$tdatasatei_of_brand[".advSearchFields"][] = "zipper";
$tdatasatei_of_brand[".advSearchFields"][] = "guarantee";
$tdatasatei_of_brand[".advSearchFields"][] = "errors";
$tdatasatei_of_brand[".advSearchFields"][] = "collar_neck_line";
$tdatasatei_of_brand[".advSearchFields"][] = "product_style";
$tdatasatei_of_brand[".advSearchFields"][] = "sleeve";
$tdatasatei_of_brand[".advSearchFields"][] = "amount";
$tdatasatei_of_brand[".advSearchFields"][] = "satei_error";
$tdatasatei_of_brand[".advSearchFields"][] = "silhouette";
$tdatasatei_of_brand[".advSearchFields"][] = "shape_supplement";
$tdatasatei_of_brand[".advSearchFields"][] = "breast";
$tdatasatei_of_brand[".advSearchFields"][] = "plate";
$tdatasatei_of_brand[".advSearchFields"][] = "hall_mark";
$tdatasatei_of_brand[".advSearchFields"][] = "toe";
$tdatasatei_of_brand[".advSearchFields"][] = "cloth";
$tdatasatei_of_brand[".advSearchFields"][] = "heel";

$tdatasatei_of_brand[".tableType"] = "list";

$tdatasatei_of_brand[".printerPageOrientation"] = 0;
$tdatasatei_of_brand[".nPrinterPageScale"] = 100;

$tdatasatei_of_brand[".nPrinterSplitRecords"] = 40;

$tdatasatei_of_brand[".nPrinterPDFSplitRecords"] = 40;



$tdatasatei_of_brand[".geocodingEnabled"] = false;





$tdatasatei_of_brand[".listGridLayout"] = 3;





// view page pdf

// print page pdf

$tdatasatei_of_brand[".totalsFields"] = array();
$tdatasatei_of_brand[".totalsFields"][] = array(
	"fName" => "price",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');

$tdatasatei_of_brand[".pageSize"] = 20;

$tdatasatei_of_brand[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `shouhin`.`product_id` DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatasatei_of_brand[".strOrderBy"] = $tstrOrderBy;

$tdatasatei_of_brand[".orderindexes"] = array();
$tdatasatei_of_brand[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "`shouhin`.`product_id`");

$tdatasatei_of_brand[".sqlHead"] = "SELECT `shouhin`.`product_id`,  `shouhin`.`category_id`,  `shouhin`.`goods_title`,  `shouhin`.`title`,  `shouhin`.`sub_category_id1`,  `shouhin`.`ecc_id`,  `shouhin`.`price`,  `shouhin`.`yahoo`,  `shouhin`.`remark`,  `shouhin`.`sales_price`,  `shouhin`.`description`,  `shouhin`.`status`,  `shouhin`.`product_num`,  `shouhin`.`yahoo_size`,  `shouhin`.`yahoo_title`,  `shouhin`.`yahoo_sankou_uwadai`,  `shouhin`.`yahoo_sozai`,  `shouhin`.`yahoo_color`,  `shouhin`.`yahoo_kataban`,  `shouhin`.`yahoo_condition1`,  `shouhin`.`yahoo_condition2`,  `shouhin`.`yahoo_fuzokuhin`,  `shouhin`.`yahoo_sinaban`,  `shouhin`.`yahoo_saisun_sha`,  `shouhin`.`yahoo_sex`,  `shouhin`.`box_id`,  `shouhin`.`nyuukin_price`,  `shouhin`.`updated_by`,  `shouhin`.`raku_title`,  `shouhin`.`raku_hyoujisaki_category2`,  `shouhin`.`raku_hyoujisaki_category`,  `shouhin`.`raku_hyoujisaki_category3`,  `shouhin`.`timesta`,  `shouhin`.`saisun_start`,  `shouhin`.`saisun_end`,  `shouhin`.`label_output_flag`,  `shouhin`.`season`,  `shouhin`.`kanryou_henbi`,  `shouhin`.`box_sort`,  `shouhin`.`satei_by`,  `shouhin`.`kaitori_by`,  `shouhin`.`comment`,  `shouhin`.`satei_hi`,  `shouhin`.`kaitory_hi`,  `shouhin`.`REG_PHOTOGRAPHER`,  `shouhin`.`REG_PACKINGS`,  `shouhin`.`REG_KAKOU_DATE`,  `shouhin`.`REG_KAKOU`,  `shouhin`.`REG_EXHIBITOR`,  `shouhin`.`REG_PHOTOGRAPHER_DATE`,  `shouhin`.`DT_PACKING_DATE`,  `shouhin`.`DT_UP_DATE`,  `shouhin`.`AWAZU_DATE`,  `shouhin`.`AWAZU_NIN`,  `shouhin`.`sabun_date`,  `shouhin`.`browseid`,  `shouhin`.`browsenode`,  `shouhin`.`Destination_selling`,  `shouhin`.`Finish`,  `shouhin`.`Discrimination`,  `shouhin`.`accessories`,  `shouhin`.`priority`,  `shouhin`.`A_storage`,  `shouhin`.`price_secret`,  `shouhin`.`sales_price_secret`,  `shouhin`.`eq`,  `shouhin`.`en`,  `shouhin`.`line`,  `shouhin`.`item_name`,  `shouhin`.`handle`,  `shouhin`.`yahoo_color_id`,  `shouhin`.`raku_hyoujisaki_category4`,  `shouhin`.`raku_hyoujisaki_category5`,  `shouhin`.`raku_dir_1`,  `shouhin`.`raku_dir_2`,  `shouhin`.`raku_dir_3`,  `shouhin`.`raku_dir_4`,  `shouhin`.`raku_dir_5`,  `shouhin`.`raku_dir_result`,  `shouhin`.`raku_tag_result`,  `shouhin`.`serial_number`,  `shouhin`.`Exhibition_Date`,  `shouhin`.`search_keyword`,  `shouhin`.`stamp`,  `shouhin`.`Sleeve_Length`,  `shouhin`.`length`,  `shouhin`.`price_for_site`,  `shouhin`.`yahoo_category_id`,  `shouhin`.`Qty`,  `shouhin`.`sales_period`,  `shouhin`.`starting_price`,  `Eoc`.`ecc_seq`,  `shouhin`.`yahoo_junle`,  `shouhin`.`logo`,  `shouhin`.`parts`,  `shouhin`.`country_of_origin`,  `shouhin`.`zipper`,  `shouhin`.`guarantee`,  `shouhin`.`errors`,  `shouhin`.`amount`,  `shouhin`.`satei_error`,  `shouhin`.`shape_supplement`,  `shouhin`.`product_style`,  `shouhin`.`collar_neck_line`,  `shouhin`.`breast`,  `shouhin`.`silhouette`,  `shouhin`.`sleeve`,  `shouhin`.`hall_mark`,  `shouhin`.`plate`,  `shouhin`.`toe`,  `shouhin`.`heel`,  `shouhin`.`cloth`,  `shouhin`.`official_url`";
$tdatasatei_of_brand[".sqlFrom"] = "FROM `shouhin`  LEFT OUTER JOIN `Eoc` ON `shouhin`.`ecc_id` = `Eoc`.`ecc_id`";
$tdatasatei_of_brand[".sqlWhereExpr"] = "(`shouhin`.`status` =32)";
$tdatasatei_of_brand[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasatei_of_brand[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasatei_of_brand[".arrGroupsPerPage"] = $arrGPP;

$tdatasatei_of_brand[".highlightSearchResults"] = true;

$tableKeyssatei_of_brand = array();
$tableKeyssatei_of_brand[] = "product_id";
$tdatasatei_of_brand[".Keys"] = $tableKeyssatei_of_brand;

$tdatasatei_of_brand[".listFields"] = array();
$tdatasatei_of_brand[".listFields"][] = "label_output_flag";
$tdatasatei_of_brand[".listFields"][] = "status";
$tdatasatei_of_brand[".listFields"][] = "product_id";
$tdatasatei_of_brand[".listFields"][] = "product_num";
$tdatasatei_of_brand[".listFields"][] = "category_id";
$tdatasatei_of_brand[".listFields"][] = "sub_category_id1";
$tdatasatei_of_brand[".listFields"][] = "yahoo_sex";
$tdatasatei_of_brand[".listFields"][] = "yahoo_condition2";
$tdatasatei_of_brand[".listFields"][] = "logo";
$tdatasatei_of_brand[".listFields"][] = "parts";
$tdatasatei_of_brand[".listFields"][] = "guarantee";
$tdatasatei_of_brand[".listFields"][] = "country_of_origin";
$tdatasatei_of_brand[".listFields"][] = "serial_number";
$tdatasatei_of_brand[".listFields"][] = "zipper";
$tdatasatei_of_brand[".listFields"][] = "line";
$tdatasatei_of_brand[".listFields"][] = "item_name";
$tdatasatei_of_brand[".listFields"][] = "shape_supplement";
$tdatasatei_of_brand[".listFields"][] = "product_style";
$tdatasatei_of_brand[".listFields"][] = "yahoo_sozai";
$tdatasatei_of_brand[".listFields"][] = "toe";
$tdatasatei_of_brand[".listFields"][] = "heel";
$tdatasatei_of_brand[".listFields"][] = "cloth";
$tdatasatei_of_brand[".listFields"][] = "Sleeve_Length";
$tdatasatei_of_brand[".listFields"][] = "collar_neck_line";
$tdatasatei_of_brand[".listFields"][] = "breast";
$tdatasatei_of_brand[".listFields"][] = "handle";
$tdatasatei_of_brand[".listFields"][] = "silhouette";
$tdatasatei_of_brand[".listFields"][] = "sleeve";
$tdatasatei_of_brand[".listFields"][] = "length";
$tdatasatei_of_brand[".listFields"][] = "amount";
$tdatasatei_of_brand[".listFields"][] = "hall_mark";
$tdatasatei_of_brand[".listFields"][] = "plate";
$tdatasatei_of_brand[".listFields"][] = "yahoo_color";
$tdatasatei_of_brand[".listFields"][] = "yahoo_kataban";
$tdatasatei_of_brand[".listFields"][] = "stamp";
$tdatasatei_of_brand[".listFields"][] = "price";
$tdatasatei_of_brand[".listFields"][] = "comment";
$tdatasatei_of_brand[".listFields"][] = "sales_price";
$tdatasatei_of_brand[".listFields"][] = "yahoo_sankou_uwadai";
$tdatasatei_of_brand[".listFields"][] = "description";
$tdatasatei_of_brand[".listFields"][] = "Destination_selling";
$tdatasatei_of_brand[".listFields"][] = "Finish";
$tdatasatei_of_brand[".listFields"][] = "Discrimination";
$tdatasatei_of_brand[".listFields"][] = "accessories";
$tdatasatei_of_brand[".listFields"][] = "priority";
$tdatasatei_of_brand[".listFields"][] = "A_storage";
$tdatasatei_of_brand[".listFields"][] = "satei_by";
$tdatasatei_of_brand[".listFields"][] = "satei_hi";
$tdatasatei_of_brand[".listFields"][] = "price_secret";
$tdatasatei_of_brand[".listFields"][] = "sales_price_secret";
$tdatasatei_of_brand[".listFields"][] = "errors";
$tdatasatei_of_brand[".listFields"][] = "satei_error";

$tdatasatei_of_brand[".hideMobileList"] = array();


$tdatasatei_of_brand[".viewFields"] = array();

$tdatasatei_of_brand[".addFields"] = array();

$tdatasatei_of_brand[".masterListFields"] = array();
$tdatasatei_of_brand[".masterListFields"][] = "ecc_seq";
$tdatasatei_of_brand[".masterListFields"][] = "yahoo_junle";
$tdatasatei_of_brand[".masterListFields"][] = "logo";
$tdatasatei_of_brand[".masterListFields"][] = "parts";
$tdatasatei_of_brand[".masterListFields"][] = "country_of_origin";
$tdatasatei_of_brand[".masterListFields"][] = "zipper";
$tdatasatei_of_brand[".masterListFields"][] = "guarantee";
$tdatasatei_of_brand[".masterListFields"][] = "errors";
$tdatasatei_of_brand[".masterListFields"][] = "amount";
$tdatasatei_of_brand[".masterListFields"][] = "satei_error";
$tdatasatei_of_brand[".masterListFields"][] = "shape_supplement";
$tdatasatei_of_brand[".masterListFields"][] = "product_style";
$tdatasatei_of_brand[".masterListFields"][] = "collar_neck_line";
$tdatasatei_of_brand[".masterListFields"][] = "breast";
$tdatasatei_of_brand[".masterListFields"][] = "silhouette";
$tdatasatei_of_brand[".masterListFields"][] = "sleeve";
$tdatasatei_of_brand[".masterListFields"][] = "hall_mark";
$tdatasatei_of_brand[".masterListFields"][] = "plate";
$tdatasatei_of_brand[".masterListFields"][] = "toe";
$tdatasatei_of_brand[".masterListFields"][] = "heel";
$tdatasatei_of_brand[".masterListFields"][] = "cloth";
$tdatasatei_of_brand[".masterListFields"][] = "official_url";
$tdatasatei_of_brand[".masterListFields"][] = "status";
$tdatasatei_of_brand[".masterListFields"][] = "satei_by";
$tdatasatei_of_brand[".masterListFields"][] = "category_id";
$tdatasatei_of_brand[".masterListFields"][] = "title";
$tdatasatei_of_brand[".masterListFields"][] = "sub_category_id1";
$tdatasatei_of_brand[".masterListFields"][] = "product_id";
$tdatasatei_of_brand[".masterListFields"][] = "ecc_id";
$tdatasatei_of_brand[".masterListFields"][] = "yahoo";
$tdatasatei_of_brand[".masterListFields"][] = "yahoo_sinaban";
$tdatasatei_of_brand[".masterListFields"][] = "price";
$tdatasatei_of_brand[".masterListFields"][] = "sales_price";
$tdatasatei_of_brand[".masterListFields"][] = "yahoo_sex";
$tdatasatei_of_brand[".masterListFields"][] = "product_num";
$tdatasatei_of_brand[".masterListFields"][] = "description";
$tdatasatei_of_brand[".masterListFields"][] = "raku_hyoujisaki_category";
$tdatasatei_of_brand[".masterListFields"][] = "raku_hyoujisaki_category2";
$tdatasatei_of_brand[".masterListFields"][] = "raku_hyoujisaki_category3";
$tdatasatei_of_brand[".masterListFields"][] = "raku_hyoujisaki_category4";
$tdatasatei_of_brand[".masterListFields"][] = "raku_hyoujisaki_category5";
$tdatasatei_of_brand[".masterListFields"][] = "yahoo_kataban";
$tdatasatei_of_brand[".masterListFields"][] = "yahoo_sozai";
$tdatasatei_of_brand[".masterListFields"][] = "yahoo_color";
$tdatasatei_of_brand[".masterListFields"][] = "yahoo_size";
$tdatasatei_of_brand[".masterListFields"][] = "yahoo_condition1";
$tdatasatei_of_brand[".masterListFields"][] = "yahoo_condition2";
$tdatasatei_of_brand[".masterListFields"][] = "remark";
$tdatasatei_of_brand[".masterListFields"][] = "yahoo_fuzokuhin";
$tdatasatei_of_brand[".masterListFields"][] = "yahoo_sankou_uwadai";
$tdatasatei_of_brand[".masterListFields"][] = "yahoo_saisun_sha";
$tdatasatei_of_brand[".masterListFields"][] = "season";
$tdatasatei_of_brand[".masterListFields"][] = "yahoo_title";
$tdatasatei_of_brand[".masterListFields"][] = "box_id";
$tdatasatei_of_brand[".masterListFields"][] = "goods_title";
$tdatasatei_of_brand[".masterListFields"][] = "nyuukin_price";
$tdatasatei_of_brand[".masterListFields"][] = "updated_by";
$tdatasatei_of_brand[".masterListFields"][] = "raku_title";
$tdatasatei_of_brand[".masterListFields"][] = "raku_tag_result";
$tdatasatei_of_brand[".masterListFields"][] = "search_keyword";
$tdatasatei_of_brand[".masterListFields"][] = "stamp";
$tdatasatei_of_brand[".masterListFields"][] = "timesta";
$tdatasatei_of_brand[".masterListFields"][] = "saisun_start";
$tdatasatei_of_brand[".masterListFields"][] = "Sleeve_Length";
$tdatasatei_of_brand[".masterListFields"][] = "saisun_end";
$tdatasatei_of_brand[".masterListFields"][] = "length";
$tdatasatei_of_brand[".masterListFields"][] = "label_output_flag";
$tdatasatei_of_brand[".masterListFields"][] = "price_for_site";
$tdatasatei_of_brand[".masterListFields"][] = "kanryou_henbi";
$tdatasatei_of_brand[".masterListFields"][] = "yahoo_category_id";
$tdatasatei_of_brand[".masterListFields"][] = "box_sort";
$tdatasatei_of_brand[".masterListFields"][] = "Qty";
$tdatasatei_of_brand[".masterListFields"][] = "sales_period";
$tdatasatei_of_brand[".masterListFields"][] = "kaitori_by";
$tdatasatei_of_brand[".masterListFields"][] = "starting_price";
$tdatasatei_of_brand[".masterListFields"][] = "comment";
$tdatasatei_of_brand[".masterListFields"][] = "satei_hi";
$tdatasatei_of_brand[".masterListFields"][] = "kaitory_hi";
$tdatasatei_of_brand[".masterListFields"][] = "REG_PHOTOGRAPHER";
$tdatasatei_of_brand[".masterListFields"][] = "REG_PACKINGS";
$tdatasatei_of_brand[".masterListFields"][] = "REG_KAKOU_DATE";
$tdatasatei_of_brand[".masterListFields"][] = "REG_KAKOU";
$tdatasatei_of_brand[".masterListFields"][] = "REG_EXHIBITOR";
$tdatasatei_of_brand[".masterListFields"][] = "REG_PHOTOGRAPHER_DATE";
$tdatasatei_of_brand[".masterListFields"][] = "DT_PACKING_DATE";
$tdatasatei_of_brand[".masterListFields"][] = "DT_UP_DATE";
$tdatasatei_of_brand[".masterListFields"][] = "AWAZU_DATE";
$tdatasatei_of_brand[".masterListFields"][] = "AWAZU_NIN";
$tdatasatei_of_brand[".masterListFields"][] = "sabun_date";
$tdatasatei_of_brand[".masterListFields"][] = "browseid";
$tdatasatei_of_brand[".masterListFields"][] = "browsenode";
$tdatasatei_of_brand[".masterListFields"][] = "Destination_selling";
$tdatasatei_of_brand[".masterListFields"][] = "Finish";
$tdatasatei_of_brand[".masterListFields"][] = "Discrimination";
$tdatasatei_of_brand[".masterListFields"][] = "accessories";
$tdatasatei_of_brand[".masterListFields"][] = "priority";
$tdatasatei_of_brand[".masterListFields"][] = "A_storage";
$tdatasatei_of_brand[".masterListFields"][] = "price_secret";
$tdatasatei_of_brand[".masterListFields"][] = "sales_price_secret";
$tdatasatei_of_brand[".masterListFields"][] = "eq";
$tdatasatei_of_brand[".masterListFields"][] = "en";
$tdatasatei_of_brand[".masterListFields"][] = "line";
$tdatasatei_of_brand[".masterListFields"][] = "item_name";
$tdatasatei_of_brand[".masterListFields"][] = "handle";
$tdatasatei_of_brand[".masterListFields"][] = "yahoo_color_id";
$tdatasatei_of_brand[".masterListFields"][] = "raku_dir_1";
$tdatasatei_of_brand[".masterListFields"][] = "raku_dir_2";
$tdatasatei_of_brand[".masterListFields"][] = "raku_dir_3";
$tdatasatei_of_brand[".masterListFields"][] = "raku_dir_4";
$tdatasatei_of_brand[".masterListFields"][] = "raku_dir_5";
$tdatasatei_of_brand[".masterListFields"][] = "raku_dir_result";
$tdatasatei_of_brand[".masterListFields"][] = "serial_number";
$tdatasatei_of_brand[".masterListFields"][] = "Exhibition_Date";

$tdatasatei_of_brand[".inlineAddFields"] = array();
$tdatasatei_of_brand[".inlineAddFields"][] = "label_output_flag";
$tdatasatei_of_brand[".inlineAddFields"][] = "status";
$tdatasatei_of_brand[".inlineAddFields"][] = "product_num";
$tdatasatei_of_brand[".inlineAddFields"][] = "category_id";
$tdatasatei_of_brand[".inlineAddFields"][] = "sub_category_id1";
$tdatasatei_of_brand[".inlineAddFields"][] = "yahoo_sex";
$tdatasatei_of_brand[".inlineAddFields"][] = "yahoo_condition2";
$tdatasatei_of_brand[".inlineAddFields"][] = "logo";
$tdatasatei_of_brand[".inlineAddFields"][] = "parts";
$tdatasatei_of_brand[".inlineAddFields"][] = "guarantee";
$tdatasatei_of_brand[".inlineAddFields"][] = "country_of_origin";
$tdatasatei_of_brand[".inlineAddFields"][] = "serial_number";
$tdatasatei_of_brand[".inlineAddFields"][] = "zipper";
$tdatasatei_of_brand[".inlineAddFields"][] = "line";
$tdatasatei_of_brand[".inlineAddFields"][] = "item_name";
$tdatasatei_of_brand[".inlineAddFields"][] = "shape_supplement";
$tdatasatei_of_brand[".inlineAddFields"][] = "product_style";
$tdatasatei_of_brand[".inlineAddFields"][] = "yahoo_sozai";
$tdatasatei_of_brand[".inlineAddFields"][] = "toe";
$tdatasatei_of_brand[".inlineAddFields"][] = "heel";
$tdatasatei_of_brand[".inlineAddFields"][] = "cloth";
$tdatasatei_of_brand[".inlineAddFields"][] = "Sleeve_Length";
$tdatasatei_of_brand[".inlineAddFields"][] = "collar_neck_line";
$tdatasatei_of_brand[".inlineAddFields"][] = "breast";
$tdatasatei_of_brand[".inlineAddFields"][] = "handle";
$tdatasatei_of_brand[".inlineAddFields"][] = "silhouette";
$tdatasatei_of_brand[".inlineAddFields"][] = "sleeve";
$tdatasatei_of_brand[".inlineAddFields"][] = "length";
$tdatasatei_of_brand[".inlineAddFields"][] = "amount";
$tdatasatei_of_brand[".inlineAddFields"][] = "hall_mark";
$tdatasatei_of_brand[".inlineAddFields"][] = "plate";
$tdatasatei_of_brand[".inlineAddFields"][] = "yahoo_color";
$tdatasatei_of_brand[".inlineAddFields"][] = "yahoo_kataban";
$tdatasatei_of_brand[".inlineAddFields"][] = "stamp";
$tdatasatei_of_brand[".inlineAddFields"][] = "price";
$tdatasatei_of_brand[".inlineAddFields"][] = "comment";
$tdatasatei_of_brand[".inlineAddFields"][] = "sales_price";
$tdatasatei_of_brand[".inlineAddFields"][] = "yahoo_sankou_uwadai";
$tdatasatei_of_brand[".inlineAddFields"][] = "description";
$tdatasatei_of_brand[".inlineAddFields"][] = "Destination_selling";
$tdatasatei_of_brand[".inlineAddFields"][] = "Finish";
$tdatasatei_of_brand[".inlineAddFields"][] = "Discrimination";
$tdatasatei_of_brand[".inlineAddFields"][] = "accessories";
$tdatasatei_of_brand[".inlineAddFields"][] = "priority";
$tdatasatei_of_brand[".inlineAddFields"][] = "A_storage";
$tdatasatei_of_brand[".inlineAddFields"][] = "price_secret";
$tdatasatei_of_brand[".inlineAddFields"][] = "sales_price_secret";
$tdatasatei_of_brand[".inlineAddFields"][] = "errors";

$tdatasatei_of_brand[".editFields"] = array();

$tdatasatei_of_brand[".inlineEditFields"] = array();
$tdatasatei_of_brand[".inlineEditFields"][] = "label_output_flag";
$tdatasatei_of_brand[".inlineEditFields"][] = "status";
$tdatasatei_of_brand[".inlineEditFields"][] = "product_num";
$tdatasatei_of_brand[".inlineEditFields"][] = "category_id";
$tdatasatei_of_brand[".inlineEditFields"][] = "sub_category_id1";
$tdatasatei_of_brand[".inlineEditFields"][] = "yahoo_sex";
$tdatasatei_of_brand[".inlineEditFields"][] = "yahoo_condition2";
$tdatasatei_of_brand[".inlineEditFields"][] = "logo";
$tdatasatei_of_brand[".inlineEditFields"][] = "parts";
$tdatasatei_of_brand[".inlineEditFields"][] = "guarantee";
$tdatasatei_of_brand[".inlineEditFields"][] = "country_of_origin";
$tdatasatei_of_brand[".inlineEditFields"][] = "serial_number";
$tdatasatei_of_brand[".inlineEditFields"][] = "zipper";
$tdatasatei_of_brand[".inlineEditFields"][] = "line";
$tdatasatei_of_brand[".inlineEditFields"][] = "item_name";
$tdatasatei_of_brand[".inlineEditFields"][] = "shape_supplement";
$tdatasatei_of_brand[".inlineEditFields"][] = "product_style";
$tdatasatei_of_brand[".inlineEditFields"][] = "yahoo_sozai";
$tdatasatei_of_brand[".inlineEditFields"][] = "toe";
$tdatasatei_of_brand[".inlineEditFields"][] = "heel";
$tdatasatei_of_brand[".inlineEditFields"][] = "cloth";
$tdatasatei_of_brand[".inlineEditFields"][] = "Sleeve_Length";
$tdatasatei_of_brand[".inlineEditFields"][] = "collar_neck_line";
$tdatasatei_of_brand[".inlineEditFields"][] = "breast";
$tdatasatei_of_brand[".inlineEditFields"][] = "handle";
$tdatasatei_of_brand[".inlineEditFields"][] = "silhouette";
$tdatasatei_of_brand[".inlineEditFields"][] = "sleeve";
$tdatasatei_of_brand[".inlineEditFields"][] = "length";
$tdatasatei_of_brand[".inlineEditFields"][] = "amount";
$tdatasatei_of_brand[".inlineEditFields"][] = "hall_mark";
$tdatasatei_of_brand[".inlineEditFields"][] = "plate";
$tdatasatei_of_brand[".inlineEditFields"][] = "yahoo_color";
$tdatasatei_of_brand[".inlineEditFields"][] = "yahoo_kataban";
$tdatasatei_of_brand[".inlineEditFields"][] = "stamp";
$tdatasatei_of_brand[".inlineEditFields"][] = "price";
$tdatasatei_of_brand[".inlineEditFields"][] = "comment";
$tdatasatei_of_brand[".inlineEditFields"][] = "sales_price";
$tdatasatei_of_brand[".inlineEditFields"][] = "yahoo_sankou_uwadai";
$tdatasatei_of_brand[".inlineEditFields"][] = "description";
$tdatasatei_of_brand[".inlineEditFields"][] = "Destination_selling";
$tdatasatei_of_brand[".inlineEditFields"][] = "Finish";
$tdatasatei_of_brand[".inlineEditFields"][] = "Discrimination";
$tdatasatei_of_brand[".inlineEditFields"][] = "accessories";
$tdatasatei_of_brand[".inlineEditFields"][] = "priority";
$tdatasatei_of_brand[".inlineEditFields"][] = "A_storage";
$tdatasatei_of_brand[".inlineEditFields"][] = "price_secret";
$tdatasatei_of_brand[".inlineEditFields"][] = "sales_price_secret";
$tdatasatei_of_brand[".inlineEditFields"][] = "errors";

$tdatasatei_of_brand[".updateSelectedFields"] = array();


$tdatasatei_of_brand[".exportFields"] = array();
$tdatasatei_of_brand[".exportFields"][] = "label_output_flag";
$tdatasatei_of_brand[".exportFields"][] = "status";
$tdatasatei_of_brand[".exportFields"][] = "product_id";
$tdatasatei_of_brand[".exportFields"][] = "yahoo_junle";
$tdatasatei_of_brand[".exportFields"][] = "category_id";
$tdatasatei_of_brand[".exportFields"][] = "sub_category_id1";
$tdatasatei_of_brand[".exportFields"][] = "yahoo_sex";
$tdatasatei_of_brand[".exportFields"][] = "yahoo_condition2";
$tdatasatei_of_brand[".exportFields"][] = "logo";
$tdatasatei_of_brand[".exportFields"][] = "parts";
$tdatasatei_of_brand[".exportFields"][] = "country_of_origin";
$tdatasatei_of_brand[".exportFields"][] = "serial_number";
$tdatasatei_of_brand[".exportFields"][] = "zipper";
$tdatasatei_of_brand[".exportFields"][] = "guarantee";
$tdatasatei_of_brand[".exportFields"][] = "line";
$tdatasatei_of_brand[".exportFields"][] = "item_name";
$tdatasatei_of_brand[".exportFields"][] = "shape_supplement";
$tdatasatei_of_brand[".exportFields"][] = "product_style";
$tdatasatei_of_brand[".exportFields"][] = "yahoo_sozai";
$tdatasatei_of_brand[".exportFields"][] = "toe";
$tdatasatei_of_brand[".exportFields"][] = "heel";
$tdatasatei_of_brand[".exportFields"][] = "cloth";
$tdatasatei_of_brand[".exportFields"][] = "Sleeve_Length";
$tdatasatei_of_brand[".exportFields"][] = "collar_neck_line";
$tdatasatei_of_brand[".exportFields"][] = "breast";
$tdatasatei_of_brand[".exportFields"][] = "handle";
$tdatasatei_of_brand[".exportFields"][] = "silhouette";
$tdatasatei_of_brand[".exportFields"][] = "sleeve";
$tdatasatei_of_brand[".exportFields"][] = "length";
$tdatasatei_of_brand[".exportFields"][] = "amount";
$tdatasatei_of_brand[".exportFields"][] = "hall_mark";
$tdatasatei_of_brand[".exportFields"][] = "plate";
$tdatasatei_of_brand[".exportFields"][] = "yahoo_color";
$tdatasatei_of_brand[".exportFields"][] = "yahoo_kataban";
$tdatasatei_of_brand[".exportFields"][] = "stamp";
$tdatasatei_of_brand[".exportFields"][] = "eq";
$tdatasatei_of_brand[".exportFields"][] = "price";
$tdatasatei_of_brand[".exportFields"][] = "en";
$tdatasatei_of_brand[".exportFields"][] = "comment";
$tdatasatei_of_brand[".exportFields"][] = "sales_price";
$tdatasatei_of_brand[".exportFields"][] = "yahoo_sankou_uwadai";
$tdatasatei_of_brand[".exportFields"][] = "description";
$tdatasatei_of_brand[".exportFields"][] = "Destination_selling";
$tdatasatei_of_brand[".exportFields"][] = "Finish";
$tdatasatei_of_brand[".exportFields"][] = "Discrimination";
$tdatasatei_of_brand[".exportFields"][] = "accessories";
$tdatasatei_of_brand[".exportFields"][] = "priority";
$tdatasatei_of_brand[".exportFields"][] = "A_storage";
$tdatasatei_of_brand[".exportFields"][] = "satei_by";
$tdatasatei_of_brand[".exportFields"][] = "satei_hi";
$tdatasatei_of_brand[".exportFields"][] = "price_secret";
$tdatasatei_of_brand[".exportFields"][] = "sales_price_secret";
$tdatasatei_of_brand[".exportFields"][] = "product_num";
$tdatasatei_of_brand[".exportFields"][] = "errors";
$tdatasatei_of_brand[".exportFields"][] = "satei_error";

$tdatasatei_of_brand[".importFields"] = array();
$tdatasatei_of_brand[".importFields"][] = "product_id";
$tdatasatei_of_brand[".importFields"][] = "category_id";
$tdatasatei_of_brand[".importFields"][] = "sub_category_id1";
$tdatasatei_of_brand[".importFields"][] = "price";
$tdatasatei_of_brand[".importFields"][] = "sales_price";
$tdatasatei_of_brand[".importFields"][] = "description";
$tdatasatei_of_brand[".importFields"][] = "status";
$tdatasatei_of_brand[".importFields"][] = "product_num";
$tdatasatei_of_brand[".importFields"][] = "yahoo_sankou_uwadai";
$tdatasatei_of_brand[".importFields"][] = "yahoo_sozai";
$tdatasatei_of_brand[".importFields"][] = "yahoo_color";
$tdatasatei_of_brand[".importFields"][] = "yahoo_kataban";
$tdatasatei_of_brand[".importFields"][] = "yahoo_condition2";
$tdatasatei_of_brand[".importFields"][] = "yahoo_sex";
$tdatasatei_of_brand[".importFields"][] = "label_output_flag";
$tdatasatei_of_brand[".importFields"][] = "satei_by";
$tdatasatei_of_brand[".importFields"][] = "comment";
$tdatasatei_of_brand[".importFields"][] = "satei_hi";
$tdatasatei_of_brand[".importFields"][] = "Destination_selling";
$tdatasatei_of_brand[".importFields"][] = "Finish";
$tdatasatei_of_brand[".importFields"][] = "Discrimination";
$tdatasatei_of_brand[".importFields"][] = "accessories";
$tdatasatei_of_brand[".importFields"][] = "priority";
$tdatasatei_of_brand[".importFields"][] = "A_storage";
$tdatasatei_of_brand[".importFields"][] = "price_secret";
$tdatasatei_of_brand[".importFields"][] = "sales_price_secret";
$tdatasatei_of_brand[".importFields"][] = "line";
$tdatasatei_of_brand[".importFields"][] = "item_name";
$tdatasatei_of_brand[".importFields"][] = "handle";
$tdatasatei_of_brand[".importFields"][] = "serial_number";
$tdatasatei_of_brand[".importFields"][] = "stamp";
$tdatasatei_of_brand[".importFields"][] = "Sleeve_Length";
$tdatasatei_of_brand[".importFields"][] = "length";
$tdatasatei_of_brand[".importFields"][] = "yahoo_junle";
$tdatasatei_of_brand[".importFields"][] = "logo";
$tdatasatei_of_brand[".importFields"][] = "parts";
$tdatasatei_of_brand[".importFields"][] = "country_of_origin";
$tdatasatei_of_brand[".importFields"][] = "zipper";
$tdatasatei_of_brand[".importFields"][] = "guarantee";
$tdatasatei_of_brand[".importFields"][] = "errors";
$tdatasatei_of_brand[".importFields"][] = "amount";
$tdatasatei_of_brand[".importFields"][] = "satei_error";
$tdatasatei_of_brand[".importFields"][] = "shape_supplement";
$tdatasatei_of_brand[".importFields"][] = "product_style";
$tdatasatei_of_brand[".importFields"][] = "collar_neck_line";
$tdatasatei_of_brand[".importFields"][] = "breast";
$tdatasatei_of_brand[".importFields"][] = "silhouette";
$tdatasatei_of_brand[".importFields"][] = "sleeve";
$tdatasatei_of_brand[".importFields"][] = "hall_mark";
$tdatasatei_of_brand[".importFields"][] = "plate";
$tdatasatei_of_brand[".importFields"][] = "toe";
$tdatasatei_of_brand[".importFields"][] = "heel";
$tdatasatei_of_brand[".importFields"][] = "cloth";

$tdatasatei_of_brand[".printFields"] = array();

//	product_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "product_id";
	$fdata["GoodName"] = "product_id";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","product_id");
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




	$tdatasatei_of_brand["product_id"] = $fdata;
//	category_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "category_id";
	$fdata["GoodName"] = "category_id";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","category_id");
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




	$tdatasatei_of_brand["category_id"] = $fdata;
//	goods_title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "goods_title";
	$fdata["GoodName"] = "goods_title";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","goods_title");
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




	$tdatasatei_of_brand["goods_title"] = $fdata;
//	title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "title";
	$fdata["GoodName"] = "title";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","title");
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




	$tdatasatei_of_brand["title"] = $fdata;
//	sub_category_id1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "sub_category_id1";
	$fdata["GoodName"] = "sub_category_id1";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","sub_category_id1");
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




	$tdatasatei_of_brand["sub_category_id1"] = $fdata;
//	ecc_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "ecc_id";
	$fdata["GoodName"] = "ecc_id";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","ecc_id");
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








	$tdatasatei_of_brand["ecc_id"] = $fdata;
//	price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "price";
	$fdata["GoodName"] = "price";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","price");
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




	$tdatasatei_of_brand["price"] = $fdata;
//	yahoo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "yahoo";
	$fdata["GoodName"] = "yahoo";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","yahoo");
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








	$tdatasatei_of_brand["yahoo"] = $fdata;
//	remark
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "remark";
	$fdata["GoodName"] = "remark";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","remark");
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




	$tdatasatei_of_brand["remark"] = $fdata;
//	sales_price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "sales_price";
	$fdata["GoodName"] = "sales_price";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","sales_price");
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




	$tdatasatei_of_brand["sales_price"] = $fdata;
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","description");
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




	$tdatasatei_of_brand["description"] = $fdata;
//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","status");
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




	$tdatasatei_of_brand["status"] = $fdata;
//	product_num
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "product_num";
	$fdata["GoodName"] = "product_num";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","product_num");
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
	$edata["DependentLookups"][] = "country_of_origin";
				//dependent dropdowns
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "zipper";

	
	
	
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




	$tdatasatei_of_brand["product_num"] = $fdata;
//	yahoo_size
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "yahoo_size";
	$fdata["GoodName"] = "yahoo_size";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","yahoo_size");
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




	$tdatasatei_of_brand["yahoo_size"] = $fdata;
//	yahoo_title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "yahoo_title";
	$fdata["GoodName"] = "yahoo_title";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","yahoo_title");
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




	$tdatasatei_of_brand["yahoo_title"] = $fdata;
//	yahoo_sankou_uwadai
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "yahoo_sankou_uwadai";
	$fdata["GoodName"] = "yahoo_sankou_uwadai";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","yahoo_sankou_uwadai");
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




	$tdatasatei_of_brand["yahoo_sankou_uwadai"] = $fdata;
//	yahoo_sozai
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "yahoo_sozai";
	$fdata["GoodName"] = "yahoo_sozai";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","yahoo_sozai");
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




	$tdatasatei_of_brand["yahoo_sozai"] = $fdata;
//	yahoo_color
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "yahoo_color";
	$fdata["GoodName"] = "yahoo_color";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","yahoo_color");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
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




	$tdatasatei_of_brand["yahoo_color"] = $fdata;
//	yahoo_kataban
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "yahoo_kataban";
	$fdata["GoodName"] = "yahoo_kataban";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","yahoo_kataban");
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




	$tdatasatei_of_brand["yahoo_kataban"] = $fdata;
//	yahoo_condition1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "yahoo_condition1";
	$fdata["GoodName"] = "yahoo_condition1";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","yahoo_condition1");
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




	$tdatasatei_of_brand["yahoo_condition1"] = $fdata;
//	yahoo_condition2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "yahoo_condition2";
	$fdata["GoodName"] = "yahoo_condition2";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","yahoo_condition2");
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




	$tdatasatei_of_brand["yahoo_condition2"] = $fdata;
//	yahoo_fuzokuhin
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "yahoo_fuzokuhin";
	$fdata["GoodName"] = "yahoo_fuzokuhin";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","yahoo_fuzokuhin");
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




	$tdatasatei_of_brand["yahoo_fuzokuhin"] = $fdata;
//	yahoo_sinaban
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "yahoo_sinaban";
	$fdata["GoodName"] = "yahoo_sinaban";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","yahoo_sinaban");
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




	$tdatasatei_of_brand["yahoo_sinaban"] = $fdata;
//	yahoo_saisun_sha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "yahoo_saisun_sha";
	$fdata["GoodName"] = "yahoo_saisun_sha";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","yahoo_saisun_sha");
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








	$tdatasatei_of_brand["yahoo_saisun_sha"] = $fdata;
//	yahoo_sex
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "yahoo_sex";
	$fdata["GoodName"] = "yahoo_sex";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","yahoo_sex");
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




	$tdatasatei_of_brand["yahoo_sex"] = $fdata;
//	box_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "box_id";
	$fdata["GoodName"] = "box_id";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","box_id");
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








	$tdatasatei_of_brand["box_id"] = $fdata;
//	nyuukin_price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "nyuukin_price";
	$fdata["GoodName"] = "nyuukin_price";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","nyuukin_price");
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








	$tdatasatei_of_brand["nyuukin_price"] = $fdata;
//	updated_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "updated_by";
	$fdata["GoodName"] = "updated_by";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","updated_by");
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








	$tdatasatei_of_brand["updated_by"] = $fdata;
//	raku_title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "raku_title";
	$fdata["GoodName"] = "raku_title";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","raku_title");
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




	$tdatasatei_of_brand["raku_title"] = $fdata;
//	raku_hyoujisaki_category2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "raku_hyoujisaki_category2";
	$fdata["GoodName"] = "raku_hyoujisaki_category2";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","raku_hyoujisaki_category2");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdatasatei_of_brand["raku_hyoujisaki_category2"] = $fdata;
//	raku_hyoujisaki_category
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "raku_hyoujisaki_category";
	$fdata["GoodName"] = "raku_hyoujisaki_category";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","raku_hyoujisaki_category");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdatasatei_of_brand["raku_hyoujisaki_category"] = $fdata;
//	raku_hyoujisaki_category3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "raku_hyoujisaki_category3";
	$fdata["GoodName"] = "raku_hyoujisaki_category3";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","raku_hyoujisaki_category3");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdatasatei_of_brand["raku_hyoujisaki_category3"] = $fdata;
//	timesta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "timesta";
	$fdata["GoodName"] = "timesta";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","timesta");
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








	$tdatasatei_of_brand["timesta"] = $fdata;
//	saisun_start
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "saisun_start";
	$fdata["GoodName"] = "saisun_start";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","saisun_start");
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








	$tdatasatei_of_brand["saisun_start"] = $fdata;
//	saisun_end
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "saisun_end";
	$fdata["GoodName"] = "saisun_end";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","saisun_end");
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








	$tdatasatei_of_brand["saisun_end"] = $fdata;
//	label_output_flag
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "label_output_flag";
	$fdata["GoodName"] = "label_output_flag";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","label_output_flag");
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




	$tdatasatei_of_brand["label_output_flag"] = $fdata;
//	season
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "season";
	$fdata["GoodName"] = "season";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","season");
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




	$tdatasatei_of_brand["season"] = $fdata;
//	kanryou_henbi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "kanryou_henbi";
	$fdata["GoodName"] = "kanryou_henbi";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","kanryou_henbi");
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








	$tdatasatei_of_brand["kanryou_henbi"] = $fdata;
//	box_sort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "box_sort";
	$fdata["GoodName"] = "box_sort";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","box_sort");
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








	$tdatasatei_of_brand["box_sort"] = $fdata;
//	satei_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "satei_by";
	$fdata["GoodName"] = "satei_by";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","satei_by");
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




	$tdatasatei_of_brand["satei_by"] = $fdata;
//	kaitori_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "kaitori_by";
	$fdata["GoodName"] = "kaitori_by";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","kaitori_by");
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








	$tdatasatei_of_brand["kaitori_by"] = $fdata;
//	comment
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "comment";
	$fdata["GoodName"] = "comment";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","comment");
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




	$tdatasatei_of_brand["comment"] = $fdata;
//	satei_hi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "satei_hi";
	$fdata["GoodName"] = "satei_hi";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","satei_hi");
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




	$tdatasatei_of_brand["satei_hi"] = $fdata;
//	kaitory_hi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "kaitory_hi";
	$fdata["GoodName"] = "kaitory_hi";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","kaitory_hi");
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








	$tdatasatei_of_brand["kaitory_hi"] = $fdata;
//	REG_PHOTOGRAPHER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "REG_PHOTOGRAPHER";
	$fdata["GoodName"] = "REG_PHOTOGRAPHER";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","REG_PHOTOGRAPHER");
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








	$tdatasatei_of_brand["REG_PHOTOGRAPHER"] = $fdata;
//	REG_PACKINGS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "REG_PACKINGS";
	$fdata["GoodName"] = "REG_PACKINGS";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","REG_PACKINGS");
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








	$tdatasatei_of_brand["REG_PACKINGS"] = $fdata;
//	REG_KAKOU_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 47;
	$fdata["strName"] = "REG_KAKOU_DATE";
	$fdata["GoodName"] = "REG_KAKOU_DATE";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","REG_KAKOU_DATE");
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








	$tdatasatei_of_brand["REG_KAKOU_DATE"] = $fdata;
//	REG_KAKOU
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 48;
	$fdata["strName"] = "REG_KAKOU";
	$fdata["GoodName"] = "REG_KAKOU";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","REG_KAKOU");
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








	$tdatasatei_of_brand["REG_KAKOU"] = $fdata;
//	REG_EXHIBITOR
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 49;
	$fdata["strName"] = "REG_EXHIBITOR";
	$fdata["GoodName"] = "REG_EXHIBITOR";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","REG_EXHIBITOR");
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








	$tdatasatei_of_brand["REG_EXHIBITOR"] = $fdata;
//	REG_PHOTOGRAPHER_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 50;
	$fdata["strName"] = "REG_PHOTOGRAPHER_DATE";
	$fdata["GoodName"] = "REG_PHOTOGRAPHER_DATE";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","REG_PHOTOGRAPHER_DATE");
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








	$tdatasatei_of_brand["REG_PHOTOGRAPHER_DATE"] = $fdata;
//	DT_PACKING_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 51;
	$fdata["strName"] = "DT_PACKING_DATE";
	$fdata["GoodName"] = "DT_PACKING_DATE";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","DT_PACKING_DATE");
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








	$tdatasatei_of_brand["DT_PACKING_DATE"] = $fdata;
//	DT_UP_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 52;
	$fdata["strName"] = "DT_UP_DATE";
	$fdata["GoodName"] = "DT_UP_DATE";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","DT_UP_DATE");
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








	$tdatasatei_of_brand["DT_UP_DATE"] = $fdata;
//	AWAZU_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 53;
	$fdata["strName"] = "AWAZU_DATE";
	$fdata["GoodName"] = "AWAZU_DATE";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","AWAZU_DATE");
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








	$tdatasatei_of_brand["AWAZU_DATE"] = $fdata;
//	AWAZU_NIN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 54;
	$fdata["strName"] = "AWAZU_NIN";
	$fdata["GoodName"] = "AWAZU_NIN";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","AWAZU_NIN");
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








	$tdatasatei_of_brand["AWAZU_NIN"] = $fdata;
//	sabun_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 55;
	$fdata["strName"] = "sabun_date";
	$fdata["GoodName"] = "sabun_date";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","sabun_date");
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








	$tdatasatei_of_brand["sabun_date"] = $fdata;
//	browseid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 56;
	$fdata["strName"] = "browseid";
	$fdata["GoodName"] = "browseid";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","browseid");
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








	$tdatasatei_of_brand["browseid"] = $fdata;
//	browsenode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 57;
	$fdata["strName"] = "browsenode";
	$fdata["GoodName"] = "browsenode";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","browsenode");
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








	$tdatasatei_of_brand["browsenode"] = $fdata;
//	Destination_selling
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 58;
	$fdata["strName"] = "Destination_selling";
	$fdata["GoodName"] = "Destination_selling";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","Destination_selling");
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




	$tdatasatei_of_brand["Destination_selling"] = $fdata;
//	Finish
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 59;
	$fdata["strName"] = "Finish";
	$fdata["GoodName"] = "Finish";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","Finish");
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




	$tdatasatei_of_brand["Finish"] = $fdata;
//	Discrimination
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 60;
	$fdata["strName"] = "Discrimination";
	$fdata["GoodName"] = "Discrimination";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","Discrimination");
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




	$tdatasatei_of_brand["Discrimination"] = $fdata;
//	accessories
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 61;
	$fdata["strName"] = "accessories";
	$fdata["GoodName"] = "accessories";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","accessories");
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




	$tdatasatei_of_brand["accessories"] = $fdata;
//	priority
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 62;
	$fdata["strName"] = "priority";
	$fdata["GoodName"] = "priority";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","priority");
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




	$tdatasatei_of_brand["priority"] = $fdata;
//	A_storage
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 63;
	$fdata["strName"] = "A_storage";
	$fdata["GoodName"] = "A_storage";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","A_storage");
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




	$tdatasatei_of_brand["A_storage"] = $fdata;
//	price_secret
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 64;
	$fdata["strName"] = "price_secret";
	$fdata["GoodName"] = "price_secret";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","price_secret");
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




	$tdatasatei_of_brand["price_secret"] = $fdata;
//	sales_price_secret
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 65;
	$fdata["strName"] = "sales_price_secret";
	$fdata["GoodName"] = "sales_price_secret";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","sales_price_secret");
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




	$tdatasatei_of_brand["sales_price_secret"] = $fdata;
//	eq
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 66;
	$fdata["strName"] = "eq";
	$fdata["GoodName"] = "eq";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","eq");
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








	$tdatasatei_of_brand["eq"] = $fdata;
//	en
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 67;
	$fdata["strName"] = "en";
	$fdata["GoodName"] = "en";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","en");
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








	$tdatasatei_of_brand["en"] = $fdata;
//	line
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 68;
	$fdata["strName"] = "line";
	$fdata["GoodName"] = "line";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","line");
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




	$tdatasatei_of_brand["line"] = $fdata;
//	item_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 69;
	$fdata["strName"] = "item_name";
	$fdata["GoodName"] = "item_name";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","item_name");
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




	$tdatasatei_of_brand["item_name"] = $fdata;
//	handle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 70;
	$fdata["strName"] = "handle";
	$fdata["GoodName"] = "handle";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","handle");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
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




	$tdatasatei_of_brand["handle"] = $fdata;
//	yahoo_color_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 71;
	$fdata["strName"] = "yahoo_color_id";
	$fdata["GoodName"] = "yahoo_color_id";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","yahoo_color_id");
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








	$tdatasatei_of_brand["yahoo_color_id"] = $fdata;
//	raku_hyoujisaki_category4
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 72;
	$fdata["strName"] = "raku_hyoujisaki_category4";
	$fdata["GoodName"] = "raku_hyoujisaki_category4";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","raku_hyoujisaki_category4");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdatasatei_of_brand["raku_hyoujisaki_category4"] = $fdata;
//	raku_hyoujisaki_category5
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 73;
	$fdata["strName"] = "raku_hyoujisaki_category5";
	$fdata["GoodName"] = "raku_hyoujisaki_category5";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","raku_hyoujisaki_category5");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdatasatei_of_brand["raku_hyoujisaki_category5"] = $fdata;
//	raku_dir_1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 74;
	$fdata["strName"] = "raku_dir_1";
	$fdata["GoodName"] = "raku_dir_1";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","raku_dir_1");
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








	$tdatasatei_of_brand["raku_dir_1"] = $fdata;
//	raku_dir_2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 75;
	$fdata["strName"] = "raku_dir_2";
	$fdata["GoodName"] = "raku_dir_2";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","raku_dir_2");
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








	$tdatasatei_of_brand["raku_dir_2"] = $fdata;
//	raku_dir_3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 76;
	$fdata["strName"] = "raku_dir_3";
	$fdata["GoodName"] = "raku_dir_3";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","raku_dir_3");
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








	$tdatasatei_of_brand["raku_dir_3"] = $fdata;
//	raku_dir_4
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 77;
	$fdata["strName"] = "raku_dir_4";
	$fdata["GoodName"] = "raku_dir_4";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","raku_dir_4");
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








	$tdatasatei_of_brand["raku_dir_4"] = $fdata;
//	raku_dir_5
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 78;
	$fdata["strName"] = "raku_dir_5";
	$fdata["GoodName"] = "raku_dir_5";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","raku_dir_5");
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








	$tdatasatei_of_brand["raku_dir_5"] = $fdata;
//	raku_dir_result
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 79;
	$fdata["strName"] = "raku_dir_result";
	$fdata["GoodName"] = "raku_dir_result";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","raku_dir_result");
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








	$tdatasatei_of_brand["raku_dir_result"] = $fdata;
//	raku_tag_result
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 80;
	$fdata["strName"] = "raku_tag_result";
	$fdata["GoodName"] = "raku_tag_result";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","raku_tag_result");
	$fdata["FieldType"] = 201;

	
	
	
			
	
	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdatasatei_of_brand["raku_tag_result"] = $fdata;
//	serial_number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 81;
	$fdata["strName"] = "serial_number";
	$fdata["GoodName"] = "serial_number";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","serial_number");
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




	$tdatasatei_of_brand["serial_number"] = $fdata;
//	Exhibition_Date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 82;
	$fdata["strName"] = "Exhibition_Date";
	$fdata["GoodName"] = "Exhibition_Date";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","Exhibition_Date");
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








	$tdatasatei_of_brand["Exhibition_Date"] = $fdata;
//	search_keyword
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 83;
	$fdata["strName"] = "search_keyword";
	$fdata["GoodName"] = "search_keyword";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","search_keyword");
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




	$tdatasatei_of_brand["search_keyword"] = $fdata;
//	stamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 84;
	$fdata["strName"] = "stamp";
	$fdata["GoodName"] = "stamp";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","stamp");
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




	$tdatasatei_of_brand["stamp"] = $fdata;
//	Sleeve_Length
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 85;
	$fdata["strName"] = "Sleeve_Length";
	$fdata["GoodName"] = "Sleeve_Length";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","Sleeve_Length");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
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




	$tdatasatei_of_brand["Sleeve_Length"] = $fdata;
//	length
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 86;
	$fdata["strName"] = "length";
	$fdata["GoodName"] = "length";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","length");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
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




	$tdatasatei_of_brand["length"] = $fdata;
//	price_for_site
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 87;
	$fdata["strName"] = "price_for_site";
	$fdata["GoodName"] = "price_for_site";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","price_for_site");
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








	$tdatasatei_of_brand["price_for_site"] = $fdata;
//	yahoo_category_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 88;
	$fdata["strName"] = "yahoo_category_id";
	$fdata["GoodName"] = "yahoo_category_id";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","yahoo_category_id");
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








	$tdatasatei_of_brand["yahoo_category_id"] = $fdata;
//	Qty
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 89;
	$fdata["strName"] = "Qty";
	$fdata["GoodName"] = "Qty";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","Qty");
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








	$tdatasatei_of_brand["Qty"] = $fdata;
//	sales_period
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 90;
	$fdata["strName"] = "sales_period";
	$fdata["GoodName"] = "sales_period";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","sales_period");
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








	$tdatasatei_of_brand["sales_period"] = $fdata;
//	starting_price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 91;
	$fdata["strName"] = "starting_price";
	$fdata["GoodName"] = "starting_price";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","starting_price");
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








	$tdatasatei_of_brand["starting_price"] = $fdata;
//	ecc_seq
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 92;
	$fdata["strName"] = "ecc_seq";
	$fdata["GoodName"] = "ecc_seq";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","ecc_seq");
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




	$tdatasatei_of_brand["ecc_seq"] = $fdata;
//	yahoo_junle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 93;
	$fdata["strName"] = "yahoo_junle";
	$fdata["GoodName"] = "yahoo_junle";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","yahoo_junle");
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








	$tdatasatei_of_brand["yahoo_junle"] = $fdata;
//	logo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 94;
	$fdata["strName"] = "logo";
	$fdata["GoodName"] = "logo";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","logo");
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




	$tdatasatei_of_brand["logo"] = $fdata;
//	parts
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 95;
	$fdata["strName"] = "parts";
	$fdata["GoodName"] = "parts";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","parts");
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




	$tdatasatei_of_brand["parts"] = $fdata;
//	country_of_origin
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 96;
	$fdata["strName"] = "country_of_origin";
	$fdata["GoodName"] = "country_of_origin";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","country_of_origin");
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

	
	$edata["LookupOrderBy"] = "id";

		$edata["LookupDesc"] = true;

		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "product_num", "lookup" => "yahoo_junle" );
	$edata["categoryFields"][] = array( "main" => "category_id", "lookup" => "category_id" );

	
	
				//dependent dropdowns
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "hall_mark";

	
	
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




	$tdatasatei_of_brand["country_of_origin"] = $fdata;
//	zipper
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 97;
	$fdata["strName"] = "zipper";
	$fdata["GoodName"] = "zipper";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","zipper");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
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




	$tdatasatei_of_brand["zipper"] = $fdata;
//	guarantee
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 98;
	$fdata["strName"] = "guarantee";
	$fdata["GoodName"] = "guarantee";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","guarantee");
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




	$tdatasatei_of_brand["guarantee"] = $fdata;
//	errors
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 99;
	$fdata["strName"] = "errors";
	$fdata["GoodName"] = "errors";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","errors");
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




	$tdatasatei_of_brand["errors"] = $fdata;
//	amount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 100;
	$fdata["strName"] = "amount";
	$fdata["GoodName"] = "amount";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","amount");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
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




	$tdatasatei_of_brand["amount"] = $fdata;
//	satei_error
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 101;
	$fdata["strName"] = "satei_error";
	$fdata["GoodName"] = "satei_error";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","satei_error");
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




	$tdatasatei_of_brand["satei_error"] = $fdata;
//	shape_supplement
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 102;
	$fdata["strName"] = "shape_supplement";
	$fdata["GoodName"] = "shape_supplement";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","shape_supplement");
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




	$tdatasatei_of_brand["shape_supplement"] = $fdata;
//	product_style
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 103;
	$fdata["strName"] = "product_style";
	$fdata["GoodName"] = "product_style";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","product_style");
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




	$tdatasatei_of_brand["product_style"] = $fdata;
//	collar_neck_line
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 104;
	$fdata["strName"] = "collar_neck_line";
	$fdata["GoodName"] = "collar_neck_line";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","collar_neck_line");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
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




	$tdatasatei_of_brand["collar_neck_line"] = $fdata;
//	breast
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 105;
	$fdata["strName"] = "breast";
	$fdata["GoodName"] = "breast";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","breast");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
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




	$tdatasatei_of_brand["breast"] = $fdata;
//	silhouette
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 106;
	$fdata["strName"] = "silhouette";
	$fdata["GoodName"] = "silhouette";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","silhouette");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
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




	$tdatasatei_of_brand["silhouette"] = $fdata;
//	sleeve
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 107;
	$fdata["strName"] = "sleeve";
	$fdata["GoodName"] = "sleeve";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","sleeve");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
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




	$tdatasatei_of_brand["sleeve"] = $fdata;
//	hall_mark
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 108;
	$fdata["strName"] = "hall_mark";
	$fdata["GoodName"] = "hall_mark";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","hall_mark");
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




	$tdatasatei_of_brand["hall_mark"] = $fdata;
//	plate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 109;
	$fdata["strName"] = "plate";
	$fdata["GoodName"] = "plate";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","plate");
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




	$tdatasatei_of_brand["plate"] = $fdata;
//	toe
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 110;
	$fdata["strName"] = "toe";
	$fdata["GoodName"] = "toe";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","toe");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
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




	$tdatasatei_of_brand["toe"] = $fdata;
//	heel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 111;
	$fdata["strName"] = "heel";
	$fdata["GoodName"] = "heel";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","heel");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
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




	$tdatasatei_of_brand["heel"] = $fdata;
//	cloth
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 112;
	$fdata["strName"] = "cloth";
	$fdata["GoodName"] = "cloth";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","cloth");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
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




	$tdatasatei_of_brand["cloth"] = $fdata;
//	official_url
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 113;
	$fdata["strName"] = "official_url";
	$fdata["GoodName"] = "official_url";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","official_url");
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








	$tdatasatei_of_brand["official_url"] = $fdata;


$tables_data["satei_of_brand"]=&$tdatasatei_of_brand;
$field_labels["satei_of_brand"] = &$fieldLabelssatei_of_brand;
$fieldToolTips["satei_of_brand"] = &$fieldToolTipssatei_of_brand;
$placeHolders["satei_of_brand"] = &$placeHolderssatei_of_brand;
$page_titles["satei_of_brand"] = &$pageTitlessatei_of_brand;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["satei_of_brand"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["satei_of_brand"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_satei_of_brand()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`shouhin`.`product_id`,  `shouhin`.`category_id`,  `shouhin`.`goods_title`,  `shouhin`.`title`,  `shouhin`.`sub_category_id1`,  `shouhin`.`ecc_id`,  `shouhin`.`price`,  `shouhin`.`yahoo`,  `shouhin`.`remark`,  `shouhin`.`sales_price`,  `shouhin`.`description`,  `shouhin`.`status`,  `shouhin`.`product_num`,  `shouhin`.`yahoo_size`,  `shouhin`.`yahoo_title`,  `shouhin`.`yahoo_sankou_uwadai`,  `shouhin`.`yahoo_sozai`,  `shouhin`.`yahoo_color`,  `shouhin`.`yahoo_kataban`,  `shouhin`.`yahoo_condition1`,  `shouhin`.`yahoo_condition2`,  `shouhin`.`yahoo_fuzokuhin`,  `shouhin`.`yahoo_sinaban`,  `shouhin`.`yahoo_saisun_sha`,  `shouhin`.`yahoo_sex`,  `shouhin`.`box_id`,  `shouhin`.`nyuukin_price`,  `shouhin`.`updated_by`,  `shouhin`.`raku_title`,  `shouhin`.`raku_hyoujisaki_category2`,  `shouhin`.`raku_hyoujisaki_category`,  `shouhin`.`raku_hyoujisaki_category3`,  `shouhin`.`timesta`,  `shouhin`.`saisun_start`,  `shouhin`.`saisun_end`,  `shouhin`.`label_output_flag`,  `shouhin`.`season`,  `shouhin`.`kanryou_henbi`,  `shouhin`.`box_sort`,  `shouhin`.`satei_by`,  `shouhin`.`kaitori_by`,  `shouhin`.`comment`,  `shouhin`.`satei_hi`,  `shouhin`.`kaitory_hi`,  `shouhin`.`REG_PHOTOGRAPHER`,  `shouhin`.`REG_PACKINGS`,  `shouhin`.`REG_KAKOU_DATE`,  `shouhin`.`REG_KAKOU`,  `shouhin`.`REG_EXHIBITOR`,  `shouhin`.`REG_PHOTOGRAPHER_DATE`,  `shouhin`.`DT_PACKING_DATE`,  `shouhin`.`DT_UP_DATE`,  `shouhin`.`AWAZU_DATE`,  `shouhin`.`AWAZU_NIN`,  `shouhin`.`sabun_date`,  `shouhin`.`browseid`,  `shouhin`.`browsenode`,  `shouhin`.`Destination_selling`,  `shouhin`.`Finish`,  `shouhin`.`Discrimination`,  `shouhin`.`accessories`,  `shouhin`.`priority`,  `shouhin`.`A_storage`,  `shouhin`.`price_secret`,  `shouhin`.`sales_price_secret`,  `shouhin`.`eq`,  `shouhin`.`en`,  `shouhin`.`line`,  `shouhin`.`item_name`,  `shouhin`.`handle`,  `shouhin`.`yahoo_color_id`,  `shouhin`.`raku_hyoujisaki_category4`,  `shouhin`.`raku_hyoujisaki_category5`,  `shouhin`.`raku_dir_1`,  `shouhin`.`raku_dir_2`,  `shouhin`.`raku_dir_3`,  `shouhin`.`raku_dir_4`,  `shouhin`.`raku_dir_5`,  `shouhin`.`raku_dir_result`,  `shouhin`.`raku_tag_result`,  `shouhin`.`serial_number`,  `shouhin`.`Exhibition_Date`,  `shouhin`.`search_keyword`,  `shouhin`.`stamp`,  `shouhin`.`Sleeve_Length`,  `shouhin`.`length`,  `shouhin`.`price_for_site`,  `shouhin`.`yahoo_category_id`,  `shouhin`.`Qty`,  `shouhin`.`sales_period`,  `shouhin`.`starting_price`,  `Eoc`.`ecc_seq`,  `shouhin`.`yahoo_junle`,  `shouhin`.`logo`,  `shouhin`.`parts`,  `shouhin`.`country_of_origin`,  `shouhin`.`zipper`,  `shouhin`.`guarantee`,  `shouhin`.`errors`,  `shouhin`.`amount`,  `shouhin`.`satei_error`,  `shouhin`.`shape_supplement`,  `shouhin`.`product_style`,  `shouhin`.`collar_neck_line`,  `shouhin`.`breast`,  `shouhin`.`silhouette`,  `shouhin`.`sleeve`,  `shouhin`.`hall_mark`,  `shouhin`.`plate`,  `shouhin`.`toe`,  `shouhin`.`heel`,  `shouhin`.`cloth`,  `shouhin`.`official_url`";
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
	"m_srcTableName" => "satei_of_brand"
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
	"m_srcTableName" => "satei_of_brand"
));

$proto6["m_sql"] = "`shouhin`.`product_id`";
$proto6["m_srcTableName"] = "satei_of_brand";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "category_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto8["m_sql"] = "`shouhin`.`category_id`";
$proto8["m_srcTableName"] = "satei_of_brand";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "goods_title",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto10["m_sql"] = "`shouhin`.`goods_title`";
$proto10["m_srcTableName"] = "satei_of_brand";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "title",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto12["m_sql"] = "`shouhin`.`title`";
$proto12["m_srcTableName"] = "satei_of_brand";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "sub_category_id1",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto14["m_sql"] = "`shouhin`.`sub_category_id1`";
$proto14["m_srcTableName"] = "satei_of_brand";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "ecc_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto16["m_sql"] = "`shouhin`.`ecc_id`";
$proto16["m_srcTableName"] = "satei_of_brand";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "price",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto18["m_sql"] = "`shouhin`.`price`";
$proto18["m_srcTableName"] = "satei_of_brand";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto20["m_sql"] = "`shouhin`.`yahoo`";
$proto20["m_srcTableName"] = "satei_of_brand";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "remark",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto22["m_sql"] = "`shouhin`.`remark`";
$proto22["m_srcTableName"] = "satei_of_brand";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "sales_price",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto24["m_sql"] = "`shouhin`.`sales_price`";
$proto24["m_srcTableName"] = "satei_of_brand";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto26["m_sql"] = "`shouhin`.`description`";
$proto26["m_srcTableName"] = "satei_of_brand";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto28["m_sql"] = "`shouhin`.`status`";
$proto28["m_srcTableName"] = "satei_of_brand";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "product_num",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto30["m_sql"] = "`shouhin`.`product_num`";
$proto30["m_srcTableName"] = "satei_of_brand";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_size",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto32["m_sql"] = "`shouhin`.`yahoo_size`";
$proto32["m_srcTableName"] = "satei_of_brand";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_title",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto34["m_sql"] = "`shouhin`.`yahoo_title`";
$proto34["m_srcTableName"] = "satei_of_brand";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_sankou_uwadai",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto36["m_sql"] = "`shouhin`.`yahoo_sankou_uwadai`";
$proto36["m_srcTableName"] = "satei_of_brand";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_sozai",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto38["m_sql"] = "`shouhin`.`yahoo_sozai`";
$proto38["m_srcTableName"] = "satei_of_brand";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_color",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto40["m_sql"] = "`shouhin`.`yahoo_color`";
$proto40["m_srcTableName"] = "satei_of_brand";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_kataban",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto42["m_sql"] = "`shouhin`.`yahoo_kataban`";
$proto42["m_srcTableName"] = "satei_of_brand";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_condition1",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto44["m_sql"] = "`shouhin`.`yahoo_condition1`";
$proto44["m_srcTableName"] = "satei_of_brand";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_condition2",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto46["m_sql"] = "`shouhin`.`yahoo_condition2`";
$proto46["m_srcTableName"] = "satei_of_brand";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_fuzokuhin",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto48["m_sql"] = "`shouhin`.`yahoo_fuzokuhin`";
$proto48["m_srcTableName"] = "satei_of_brand";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_sinaban",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto50["m_sql"] = "`shouhin`.`yahoo_sinaban`";
$proto50["m_srcTableName"] = "satei_of_brand";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_saisun_sha",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto52["m_sql"] = "`shouhin`.`yahoo_saisun_sha`";
$proto52["m_srcTableName"] = "satei_of_brand";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_sex",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto54["m_sql"] = "`shouhin`.`yahoo_sex`";
$proto54["m_srcTableName"] = "satei_of_brand";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "box_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto56["m_sql"] = "`shouhin`.`box_id`";
$proto56["m_srcTableName"] = "satei_of_brand";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "nyuukin_price",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto58["m_sql"] = "`shouhin`.`nyuukin_price`";
$proto58["m_srcTableName"] = "satei_of_brand";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto60["m_sql"] = "`shouhin`.`updated_by`";
$proto60["m_srcTableName"] = "satei_of_brand";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "raku_title",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto62["m_sql"] = "`shouhin`.`raku_title`";
$proto62["m_srcTableName"] = "satei_of_brand";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "raku_hyoujisaki_category2",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto64["m_sql"] = "`shouhin`.`raku_hyoujisaki_category2`";
$proto64["m_srcTableName"] = "satei_of_brand";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "raku_hyoujisaki_category",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto66["m_sql"] = "`shouhin`.`raku_hyoujisaki_category`";
$proto66["m_srcTableName"] = "satei_of_brand";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "raku_hyoujisaki_category3",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto68["m_sql"] = "`shouhin`.`raku_hyoujisaki_category3`";
$proto68["m_srcTableName"] = "satei_of_brand";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "timesta",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto70["m_sql"] = "`shouhin`.`timesta`";
$proto70["m_srcTableName"] = "satei_of_brand";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "saisun_start",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto72["m_sql"] = "`shouhin`.`saisun_start`";
$proto72["m_srcTableName"] = "satei_of_brand";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "saisun_end",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto74["m_sql"] = "`shouhin`.`saisun_end`";
$proto74["m_srcTableName"] = "satei_of_brand";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "label_output_flag",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto76["m_sql"] = "`shouhin`.`label_output_flag`";
$proto76["m_srcTableName"] = "satei_of_brand";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "season",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto78["m_sql"] = "`shouhin`.`season`";
$proto78["m_srcTableName"] = "satei_of_brand";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "kanryou_henbi",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto80["m_sql"] = "`shouhin`.`kanryou_henbi`";
$proto80["m_srcTableName"] = "satei_of_brand";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "box_sort",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto82["m_sql"] = "`shouhin`.`box_sort`";
$proto82["m_srcTableName"] = "satei_of_brand";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "satei_by",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto84["m_sql"] = "`shouhin`.`satei_by`";
$proto84["m_srcTableName"] = "satei_of_brand";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "kaitori_by",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto86["m_sql"] = "`shouhin`.`kaitori_by`";
$proto86["m_srcTableName"] = "satei_of_brand";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "comment",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto88["m_sql"] = "`shouhin`.`comment`";
$proto88["m_srcTableName"] = "satei_of_brand";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "satei_hi",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto90["m_sql"] = "`shouhin`.`satei_hi`";
$proto90["m_srcTableName"] = "satei_of_brand";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLField(array(
	"m_strName" => "kaitory_hi",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto92["m_sql"] = "`shouhin`.`kaitory_hi`";
$proto92["m_srcTableName"] = "satei_of_brand";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "";
$obj = new SQLFieldListItem($proto92);

$proto0["m_fieldlist"][]=$obj;
						$proto94=array();
			$obj = new SQLField(array(
	"m_strName" => "REG_PHOTOGRAPHER",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto94["m_sql"] = "`shouhin`.`REG_PHOTOGRAPHER`";
$proto94["m_srcTableName"] = "satei_of_brand";
$proto94["m_expr"]=$obj;
$proto94["m_alias"] = "";
$obj = new SQLFieldListItem($proto94);

$proto0["m_fieldlist"][]=$obj;
						$proto96=array();
			$obj = new SQLField(array(
	"m_strName" => "REG_PACKINGS",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto96["m_sql"] = "`shouhin`.`REG_PACKINGS`";
$proto96["m_srcTableName"] = "satei_of_brand";
$proto96["m_expr"]=$obj;
$proto96["m_alias"] = "";
$obj = new SQLFieldListItem($proto96);

$proto0["m_fieldlist"][]=$obj;
						$proto98=array();
			$obj = new SQLField(array(
	"m_strName" => "REG_KAKOU_DATE",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto98["m_sql"] = "`shouhin`.`REG_KAKOU_DATE`";
$proto98["m_srcTableName"] = "satei_of_brand";
$proto98["m_expr"]=$obj;
$proto98["m_alias"] = "";
$obj = new SQLFieldListItem($proto98);

$proto0["m_fieldlist"][]=$obj;
						$proto100=array();
			$obj = new SQLField(array(
	"m_strName" => "REG_KAKOU",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto100["m_sql"] = "`shouhin`.`REG_KAKOU`";
$proto100["m_srcTableName"] = "satei_of_brand";
$proto100["m_expr"]=$obj;
$proto100["m_alias"] = "";
$obj = new SQLFieldListItem($proto100);

$proto0["m_fieldlist"][]=$obj;
						$proto102=array();
			$obj = new SQLField(array(
	"m_strName" => "REG_EXHIBITOR",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto102["m_sql"] = "`shouhin`.`REG_EXHIBITOR`";
$proto102["m_srcTableName"] = "satei_of_brand";
$proto102["m_expr"]=$obj;
$proto102["m_alias"] = "";
$obj = new SQLFieldListItem($proto102);

$proto0["m_fieldlist"][]=$obj;
						$proto104=array();
			$obj = new SQLField(array(
	"m_strName" => "REG_PHOTOGRAPHER_DATE",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto104["m_sql"] = "`shouhin`.`REG_PHOTOGRAPHER_DATE`";
$proto104["m_srcTableName"] = "satei_of_brand";
$proto104["m_expr"]=$obj;
$proto104["m_alias"] = "";
$obj = new SQLFieldListItem($proto104);

$proto0["m_fieldlist"][]=$obj;
						$proto106=array();
			$obj = new SQLField(array(
	"m_strName" => "DT_PACKING_DATE",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto106["m_sql"] = "`shouhin`.`DT_PACKING_DATE`";
$proto106["m_srcTableName"] = "satei_of_brand";
$proto106["m_expr"]=$obj;
$proto106["m_alias"] = "";
$obj = new SQLFieldListItem($proto106);

$proto0["m_fieldlist"][]=$obj;
						$proto108=array();
			$obj = new SQLField(array(
	"m_strName" => "DT_UP_DATE",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto108["m_sql"] = "`shouhin`.`DT_UP_DATE`";
$proto108["m_srcTableName"] = "satei_of_brand";
$proto108["m_expr"]=$obj;
$proto108["m_alias"] = "";
$obj = new SQLFieldListItem($proto108);

$proto0["m_fieldlist"][]=$obj;
						$proto110=array();
			$obj = new SQLField(array(
	"m_strName" => "AWAZU_DATE",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto110["m_sql"] = "`shouhin`.`AWAZU_DATE`";
$proto110["m_srcTableName"] = "satei_of_brand";
$proto110["m_expr"]=$obj;
$proto110["m_alias"] = "";
$obj = new SQLFieldListItem($proto110);

$proto0["m_fieldlist"][]=$obj;
						$proto112=array();
			$obj = new SQLField(array(
	"m_strName" => "AWAZU_NIN",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto112["m_sql"] = "`shouhin`.`AWAZU_NIN`";
$proto112["m_srcTableName"] = "satei_of_brand";
$proto112["m_expr"]=$obj;
$proto112["m_alias"] = "";
$obj = new SQLFieldListItem($proto112);

$proto0["m_fieldlist"][]=$obj;
						$proto114=array();
			$obj = new SQLField(array(
	"m_strName" => "sabun_date",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto114["m_sql"] = "`shouhin`.`sabun_date`";
$proto114["m_srcTableName"] = "satei_of_brand";
$proto114["m_expr"]=$obj;
$proto114["m_alias"] = "";
$obj = new SQLFieldListItem($proto114);

$proto0["m_fieldlist"][]=$obj;
						$proto116=array();
			$obj = new SQLField(array(
	"m_strName" => "browseid",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto116["m_sql"] = "`shouhin`.`browseid`";
$proto116["m_srcTableName"] = "satei_of_brand";
$proto116["m_expr"]=$obj;
$proto116["m_alias"] = "";
$obj = new SQLFieldListItem($proto116);

$proto0["m_fieldlist"][]=$obj;
						$proto118=array();
			$obj = new SQLField(array(
	"m_strName" => "browsenode",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto118["m_sql"] = "`shouhin`.`browsenode`";
$proto118["m_srcTableName"] = "satei_of_brand";
$proto118["m_expr"]=$obj;
$proto118["m_alias"] = "";
$obj = new SQLFieldListItem($proto118);

$proto0["m_fieldlist"][]=$obj;
						$proto120=array();
			$obj = new SQLField(array(
	"m_strName" => "Destination_selling",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto120["m_sql"] = "`shouhin`.`Destination_selling`";
$proto120["m_srcTableName"] = "satei_of_brand";
$proto120["m_expr"]=$obj;
$proto120["m_alias"] = "";
$obj = new SQLFieldListItem($proto120);

$proto0["m_fieldlist"][]=$obj;
						$proto122=array();
			$obj = new SQLField(array(
	"m_strName" => "Finish",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto122["m_sql"] = "`shouhin`.`Finish`";
$proto122["m_srcTableName"] = "satei_of_brand";
$proto122["m_expr"]=$obj;
$proto122["m_alias"] = "";
$obj = new SQLFieldListItem($proto122);

$proto0["m_fieldlist"][]=$obj;
						$proto124=array();
			$obj = new SQLField(array(
	"m_strName" => "Discrimination",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto124["m_sql"] = "`shouhin`.`Discrimination`";
$proto124["m_srcTableName"] = "satei_of_brand";
$proto124["m_expr"]=$obj;
$proto124["m_alias"] = "";
$obj = new SQLFieldListItem($proto124);

$proto0["m_fieldlist"][]=$obj;
						$proto126=array();
			$obj = new SQLField(array(
	"m_strName" => "accessories",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto126["m_sql"] = "`shouhin`.`accessories`";
$proto126["m_srcTableName"] = "satei_of_brand";
$proto126["m_expr"]=$obj;
$proto126["m_alias"] = "";
$obj = new SQLFieldListItem($proto126);

$proto0["m_fieldlist"][]=$obj;
						$proto128=array();
			$obj = new SQLField(array(
	"m_strName" => "priority",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto128["m_sql"] = "`shouhin`.`priority`";
$proto128["m_srcTableName"] = "satei_of_brand";
$proto128["m_expr"]=$obj;
$proto128["m_alias"] = "";
$obj = new SQLFieldListItem($proto128);

$proto0["m_fieldlist"][]=$obj;
						$proto130=array();
			$obj = new SQLField(array(
	"m_strName" => "A_storage",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto130["m_sql"] = "`shouhin`.`A_storage`";
$proto130["m_srcTableName"] = "satei_of_brand";
$proto130["m_expr"]=$obj;
$proto130["m_alias"] = "";
$obj = new SQLFieldListItem($proto130);

$proto0["m_fieldlist"][]=$obj;
						$proto132=array();
			$obj = new SQLField(array(
	"m_strName" => "price_secret",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto132["m_sql"] = "`shouhin`.`price_secret`";
$proto132["m_srcTableName"] = "satei_of_brand";
$proto132["m_expr"]=$obj;
$proto132["m_alias"] = "";
$obj = new SQLFieldListItem($proto132);

$proto0["m_fieldlist"][]=$obj;
						$proto134=array();
			$obj = new SQLField(array(
	"m_strName" => "sales_price_secret",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto134["m_sql"] = "`shouhin`.`sales_price_secret`";
$proto134["m_srcTableName"] = "satei_of_brand";
$proto134["m_expr"]=$obj;
$proto134["m_alias"] = "";
$obj = new SQLFieldListItem($proto134);

$proto0["m_fieldlist"][]=$obj;
						$proto136=array();
			$obj = new SQLField(array(
	"m_strName" => "eq",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto136["m_sql"] = "`shouhin`.`eq`";
$proto136["m_srcTableName"] = "satei_of_brand";
$proto136["m_expr"]=$obj;
$proto136["m_alias"] = "";
$obj = new SQLFieldListItem($proto136);

$proto0["m_fieldlist"][]=$obj;
						$proto138=array();
			$obj = new SQLField(array(
	"m_strName" => "en",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto138["m_sql"] = "`shouhin`.`en`";
$proto138["m_srcTableName"] = "satei_of_brand";
$proto138["m_expr"]=$obj;
$proto138["m_alias"] = "";
$obj = new SQLFieldListItem($proto138);

$proto0["m_fieldlist"][]=$obj;
						$proto140=array();
			$obj = new SQLField(array(
	"m_strName" => "line",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto140["m_sql"] = "`shouhin`.`line`";
$proto140["m_srcTableName"] = "satei_of_brand";
$proto140["m_expr"]=$obj;
$proto140["m_alias"] = "";
$obj = new SQLFieldListItem($proto140);

$proto0["m_fieldlist"][]=$obj;
						$proto142=array();
			$obj = new SQLField(array(
	"m_strName" => "item_name",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto142["m_sql"] = "`shouhin`.`item_name`";
$proto142["m_srcTableName"] = "satei_of_brand";
$proto142["m_expr"]=$obj;
$proto142["m_alias"] = "";
$obj = new SQLFieldListItem($proto142);

$proto0["m_fieldlist"][]=$obj;
						$proto144=array();
			$obj = new SQLField(array(
	"m_strName" => "handle",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto144["m_sql"] = "`shouhin`.`handle`";
$proto144["m_srcTableName"] = "satei_of_brand";
$proto144["m_expr"]=$obj;
$proto144["m_alias"] = "";
$obj = new SQLFieldListItem($proto144);

$proto0["m_fieldlist"][]=$obj;
						$proto146=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_color_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto146["m_sql"] = "`shouhin`.`yahoo_color_id`";
$proto146["m_srcTableName"] = "satei_of_brand";
$proto146["m_expr"]=$obj;
$proto146["m_alias"] = "";
$obj = new SQLFieldListItem($proto146);

$proto0["m_fieldlist"][]=$obj;
						$proto148=array();
			$obj = new SQLField(array(
	"m_strName" => "raku_hyoujisaki_category4",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto148["m_sql"] = "`shouhin`.`raku_hyoujisaki_category4`";
$proto148["m_srcTableName"] = "satei_of_brand";
$proto148["m_expr"]=$obj;
$proto148["m_alias"] = "";
$obj = new SQLFieldListItem($proto148);

$proto0["m_fieldlist"][]=$obj;
						$proto150=array();
			$obj = new SQLField(array(
	"m_strName" => "raku_hyoujisaki_category5",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto150["m_sql"] = "`shouhin`.`raku_hyoujisaki_category5`";
$proto150["m_srcTableName"] = "satei_of_brand";
$proto150["m_expr"]=$obj;
$proto150["m_alias"] = "";
$obj = new SQLFieldListItem($proto150);

$proto0["m_fieldlist"][]=$obj;
						$proto152=array();
			$obj = new SQLField(array(
	"m_strName" => "raku_dir_1",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto152["m_sql"] = "`shouhin`.`raku_dir_1`";
$proto152["m_srcTableName"] = "satei_of_brand";
$proto152["m_expr"]=$obj;
$proto152["m_alias"] = "";
$obj = new SQLFieldListItem($proto152);

$proto0["m_fieldlist"][]=$obj;
						$proto154=array();
			$obj = new SQLField(array(
	"m_strName" => "raku_dir_2",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto154["m_sql"] = "`shouhin`.`raku_dir_2`";
$proto154["m_srcTableName"] = "satei_of_brand";
$proto154["m_expr"]=$obj;
$proto154["m_alias"] = "";
$obj = new SQLFieldListItem($proto154);

$proto0["m_fieldlist"][]=$obj;
						$proto156=array();
			$obj = new SQLField(array(
	"m_strName" => "raku_dir_3",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto156["m_sql"] = "`shouhin`.`raku_dir_3`";
$proto156["m_srcTableName"] = "satei_of_brand";
$proto156["m_expr"]=$obj;
$proto156["m_alias"] = "";
$obj = new SQLFieldListItem($proto156);

$proto0["m_fieldlist"][]=$obj;
						$proto158=array();
			$obj = new SQLField(array(
	"m_strName" => "raku_dir_4",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto158["m_sql"] = "`shouhin`.`raku_dir_4`";
$proto158["m_srcTableName"] = "satei_of_brand";
$proto158["m_expr"]=$obj;
$proto158["m_alias"] = "";
$obj = new SQLFieldListItem($proto158);

$proto0["m_fieldlist"][]=$obj;
						$proto160=array();
			$obj = new SQLField(array(
	"m_strName" => "raku_dir_5",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto160["m_sql"] = "`shouhin`.`raku_dir_5`";
$proto160["m_srcTableName"] = "satei_of_brand";
$proto160["m_expr"]=$obj;
$proto160["m_alias"] = "";
$obj = new SQLFieldListItem($proto160);

$proto0["m_fieldlist"][]=$obj;
						$proto162=array();
			$obj = new SQLField(array(
	"m_strName" => "raku_dir_result",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto162["m_sql"] = "`shouhin`.`raku_dir_result`";
$proto162["m_srcTableName"] = "satei_of_brand";
$proto162["m_expr"]=$obj;
$proto162["m_alias"] = "";
$obj = new SQLFieldListItem($proto162);

$proto0["m_fieldlist"][]=$obj;
						$proto164=array();
			$obj = new SQLField(array(
	"m_strName" => "raku_tag_result",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto164["m_sql"] = "`shouhin`.`raku_tag_result`";
$proto164["m_srcTableName"] = "satei_of_brand";
$proto164["m_expr"]=$obj;
$proto164["m_alias"] = "";
$obj = new SQLFieldListItem($proto164);

$proto0["m_fieldlist"][]=$obj;
						$proto166=array();
			$obj = new SQLField(array(
	"m_strName" => "serial_number",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto166["m_sql"] = "`shouhin`.`serial_number`";
$proto166["m_srcTableName"] = "satei_of_brand";
$proto166["m_expr"]=$obj;
$proto166["m_alias"] = "";
$obj = new SQLFieldListItem($proto166);

$proto0["m_fieldlist"][]=$obj;
						$proto168=array();
			$obj = new SQLField(array(
	"m_strName" => "Exhibition_Date",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto168["m_sql"] = "`shouhin`.`Exhibition_Date`";
$proto168["m_srcTableName"] = "satei_of_brand";
$proto168["m_expr"]=$obj;
$proto168["m_alias"] = "";
$obj = new SQLFieldListItem($proto168);

$proto0["m_fieldlist"][]=$obj;
						$proto170=array();
			$obj = new SQLField(array(
	"m_strName" => "search_keyword",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto170["m_sql"] = "`shouhin`.`search_keyword`";
$proto170["m_srcTableName"] = "satei_of_brand";
$proto170["m_expr"]=$obj;
$proto170["m_alias"] = "";
$obj = new SQLFieldListItem($proto170);

$proto0["m_fieldlist"][]=$obj;
						$proto172=array();
			$obj = new SQLField(array(
	"m_strName" => "stamp",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto172["m_sql"] = "`shouhin`.`stamp`";
$proto172["m_srcTableName"] = "satei_of_brand";
$proto172["m_expr"]=$obj;
$proto172["m_alias"] = "";
$obj = new SQLFieldListItem($proto172);

$proto0["m_fieldlist"][]=$obj;
						$proto174=array();
			$obj = new SQLField(array(
	"m_strName" => "Sleeve_Length",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto174["m_sql"] = "`shouhin`.`Sleeve_Length`";
$proto174["m_srcTableName"] = "satei_of_brand";
$proto174["m_expr"]=$obj;
$proto174["m_alias"] = "";
$obj = new SQLFieldListItem($proto174);

$proto0["m_fieldlist"][]=$obj;
						$proto176=array();
			$obj = new SQLField(array(
	"m_strName" => "length",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto176["m_sql"] = "`shouhin`.`length`";
$proto176["m_srcTableName"] = "satei_of_brand";
$proto176["m_expr"]=$obj;
$proto176["m_alias"] = "";
$obj = new SQLFieldListItem($proto176);

$proto0["m_fieldlist"][]=$obj;
						$proto178=array();
			$obj = new SQLField(array(
	"m_strName" => "price_for_site",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto178["m_sql"] = "`shouhin`.`price_for_site`";
$proto178["m_srcTableName"] = "satei_of_brand";
$proto178["m_expr"]=$obj;
$proto178["m_alias"] = "";
$obj = new SQLFieldListItem($proto178);

$proto0["m_fieldlist"][]=$obj;
						$proto180=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_category_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto180["m_sql"] = "`shouhin`.`yahoo_category_id`";
$proto180["m_srcTableName"] = "satei_of_brand";
$proto180["m_expr"]=$obj;
$proto180["m_alias"] = "";
$obj = new SQLFieldListItem($proto180);

$proto0["m_fieldlist"][]=$obj;
						$proto182=array();
			$obj = new SQLField(array(
	"m_strName" => "Qty",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto182["m_sql"] = "`shouhin`.`Qty`";
$proto182["m_srcTableName"] = "satei_of_brand";
$proto182["m_expr"]=$obj;
$proto182["m_alias"] = "";
$obj = new SQLFieldListItem($proto182);

$proto0["m_fieldlist"][]=$obj;
						$proto184=array();
			$obj = new SQLField(array(
	"m_strName" => "sales_period",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto184["m_sql"] = "`shouhin`.`sales_period`";
$proto184["m_srcTableName"] = "satei_of_brand";
$proto184["m_expr"]=$obj;
$proto184["m_alias"] = "";
$obj = new SQLFieldListItem($proto184);

$proto0["m_fieldlist"][]=$obj;
						$proto186=array();
			$obj = new SQLField(array(
	"m_strName" => "starting_price",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto186["m_sql"] = "`shouhin`.`starting_price`";
$proto186["m_srcTableName"] = "satei_of_brand";
$proto186["m_expr"]=$obj;
$proto186["m_alias"] = "";
$obj = new SQLFieldListItem($proto186);

$proto0["m_fieldlist"][]=$obj;
						$proto188=array();
			$obj = new SQLField(array(
	"m_strName" => "ecc_seq",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "satei_of_brand"
));

$proto188["m_sql"] = "`Eoc`.`ecc_seq`";
$proto188["m_srcTableName"] = "satei_of_brand";
$proto188["m_expr"]=$obj;
$proto188["m_alias"] = "";
$obj = new SQLFieldListItem($proto188);

$proto0["m_fieldlist"][]=$obj;
						$proto190=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_junle",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto190["m_sql"] = "`shouhin`.`yahoo_junle`";
$proto190["m_srcTableName"] = "satei_of_brand";
$proto190["m_expr"]=$obj;
$proto190["m_alias"] = "";
$obj = new SQLFieldListItem($proto190);

$proto0["m_fieldlist"][]=$obj;
						$proto192=array();
			$obj = new SQLField(array(
	"m_strName" => "logo",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto192["m_sql"] = "`shouhin`.`logo`";
$proto192["m_srcTableName"] = "satei_of_brand";
$proto192["m_expr"]=$obj;
$proto192["m_alias"] = "";
$obj = new SQLFieldListItem($proto192);

$proto0["m_fieldlist"][]=$obj;
						$proto194=array();
			$obj = new SQLField(array(
	"m_strName" => "parts",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto194["m_sql"] = "`shouhin`.`parts`";
$proto194["m_srcTableName"] = "satei_of_brand";
$proto194["m_expr"]=$obj;
$proto194["m_alias"] = "";
$obj = new SQLFieldListItem($proto194);

$proto0["m_fieldlist"][]=$obj;
						$proto196=array();
			$obj = new SQLField(array(
	"m_strName" => "country_of_origin",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto196["m_sql"] = "`shouhin`.`country_of_origin`";
$proto196["m_srcTableName"] = "satei_of_brand";
$proto196["m_expr"]=$obj;
$proto196["m_alias"] = "";
$obj = new SQLFieldListItem($proto196);

$proto0["m_fieldlist"][]=$obj;
						$proto198=array();
			$obj = new SQLField(array(
	"m_strName" => "zipper",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto198["m_sql"] = "`shouhin`.`zipper`";
$proto198["m_srcTableName"] = "satei_of_brand";
$proto198["m_expr"]=$obj;
$proto198["m_alias"] = "";
$obj = new SQLFieldListItem($proto198);

$proto0["m_fieldlist"][]=$obj;
						$proto200=array();
			$obj = new SQLField(array(
	"m_strName" => "guarantee",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto200["m_sql"] = "`shouhin`.`guarantee`";
$proto200["m_srcTableName"] = "satei_of_brand";
$proto200["m_expr"]=$obj;
$proto200["m_alias"] = "";
$obj = new SQLFieldListItem($proto200);

$proto0["m_fieldlist"][]=$obj;
						$proto202=array();
			$obj = new SQLField(array(
	"m_strName" => "errors",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto202["m_sql"] = "`shouhin`.`errors`";
$proto202["m_srcTableName"] = "satei_of_brand";
$proto202["m_expr"]=$obj;
$proto202["m_alias"] = "";
$obj = new SQLFieldListItem($proto202);

$proto0["m_fieldlist"][]=$obj;
						$proto204=array();
			$obj = new SQLField(array(
	"m_strName" => "amount",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto204["m_sql"] = "`shouhin`.`amount`";
$proto204["m_srcTableName"] = "satei_of_brand";
$proto204["m_expr"]=$obj;
$proto204["m_alias"] = "";
$obj = new SQLFieldListItem($proto204);

$proto0["m_fieldlist"][]=$obj;
						$proto206=array();
			$obj = new SQLField(array(
	"m_strName" => "satei_error",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto206["m_sql"] = "`shouhin`.`satei_error`";
$proto206["m_srcTableName"] = "satei_of_brand";
$proto206["m_expr"]=$obj;
$proto206["m_alias"] = "";
$obj = new SQLFieldListItem($proto206);

$proto0["m_fieldlist"][]=$obj;
						$proto208=array();
			$obj = new SQLField(array(
	"m_strName" => "shape_supplement",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto208["m_sql"] = "`shouhin`.`shape_supplement`";
$proto208["m_srcTableName"] = "satei_of_brand";
$proto208["m_expr"]=$obj;
$proto208["m_alias"] = "";
$obj = new SQLFieldListItem($proto208);

$proto0["m_fieldlist"][]=$obj;
						$proto210=array();
			$obj = new SQLField(array(
	"m_strName" => "product_style",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto210["m_sql"] = "`shouhin`.`product_style`";
$proto210["m_srcTableName"] = "satei_of_brand";
$proto210["m_expr"]=$obj;
$proto210["m_alias"] = "";
$obj = new SQLFieldListItem($proto210);

$proto0["m_fieldlist"][]=$obj;
						$proto212=array();
			$obj = new SQLField(array(
	"m_strName" => "collar_neck_line",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto212["m_sql"] = "`shouhin`.`collar_neck_line`";
$proto212["m_srcTableName"] = "satei_of_brand";
$proto212["m_expr"]=$obj;
$proto212["m_alias"] = "";
$obj = new SQLFieldListItem($proto212);

$proto0["m_fieldlist"][]=$obj;
						$proto214=array();
			$obj = new SQLField(array(
	"m_strName" => "breast",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto214["m_sql"] = "`shouhin`.`breast`";
$proto214["m_srcTableName"] = "satei_of_brand";
$proto214["m_expr"]=$obj;
$proto214["m_alias"] = "";
$obj = new SQLFieldListItem($proto214);

$proto0["m_fieldlist"][]=$obj;
						$proto216=array();
			$obj = new SQLField(array(
	"m_strName" => "silhouette",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto216["m_sql"] = "`shouhin`.`silhouette`";
$proto216["m_srcTableName"] = "satei_of_brand";
$proto216["m_expr"]=$obj;
$proto216["m_alias"] = "";
$obj = new SQLFieldListItem($proto216);

$proto0["m_fieldlist"][]=$obj;
						$proto218=array();
			$obj = new SQLField(array(
	"m_strName" => "sleeve",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto218["m_sql"] = "`shouhin`.`sleeve`";
$proto218["m_srcTableName"] = "satei_of_brand";
$proto218["m_expr"]=$obj;
$proto218["m_alias"] = "";
$obj = new SQLFieldListItem($proto218);

$proto0["m_fieldlist"][]=$obj;
						$proto220=array();
			$obj = new SQLField(array(
	"m_strName" => "hall_mark",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto220["m_sql"] = "`shouhin`.`hall_mark`";
$proto220["m_srcTableName"] = "satei_of_brand";
$proto220["m_expr"]=$obj;
$proto220["m_alias"] = "";
$obj = new SQLFieldListItem($proto220);

$proto0["m_fieldlist"][]=$obj;
						$proto222=array();
			$obj = new SQLField(array(
	"m_strName" => "plate",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto222["m_sql"] = "`shouhin`.`plate`";
$proto222["m_srcTableName"] = "satei_of_brand";
$proto222["m_expr"]=$obj;
$proto222["m_alias"] = "";
$obj = new SQLFieldListItem($proto222);

$proto0["m_fieldlist"][]=$obj;
						$proto224=array();
			$obj = new SQLField(array(
	"m_strName" => "toe",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto224["m_sql"] = "`shouhin`.`toe`";
$proto224["m_srcTableName"] = "satei_of_brand";
$proto224["m_expr"]=$obj;
$proto224["m_alias"] = "";
$obj = new SQLFieldListItem($proto224);

$proto0["m_fieldlist"][]=$obj;
						$proto226=array();
			$obj = new SQLField(array(
	"m_strName" => "heel",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto226["m_sql"] = "`shouhin`.`heel`";
$proto226["m_srcTableName"] = "satei_of_brand";
$proto226["m_expr"]=$obj;
$proto226["m_alias"] = "";
$obj = new SQLFieldListItem($proto226);

$proto0["m_fieldlist"][]=$obj;
						$proto228=array();
			$obj = new SQLField(array(
	"m_strName" => "cloth",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto228["m_sql"] = "`shouhin`.`cloth`";
$proto228["m_srcTableName"] = "satei_of_brand";
$proto228["m_expr"]=$obj;
$proto228["m_alias"] = "";
$obj = new SQLFieldListItem($proto228);

$proto0["m_fieldlist"][]=$obj;
						$proto230=array();
			$obj = new SQLField(array(
	"m_strName" => "official_url",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto230["m_sql"] = "`shouhin`.`official_url`";
$proto230["m_srcTableName"] = "satei_of_brand";
$proto230["m_expr"]=$obj;
$proto230["m_alias"] = "";
$obj = new SQLFieldListItem($proto230);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto232=array();
$proto232["m_link"] = "SQLL_MAIN";
			$proto233=array();
$proto233["m_strName"] = "shouhin";
$proto233["m_srcTableName"] = "satei_of_brand";
$proto233["m_columns"] = array();
$proto233["m_columns"][] = "product_id";
$proto233["m_columns"][] = "category_id";
$proto233["m_columns"][] = "goods_title";
$proto233["m_columns"][] = "title";
$proto233["m_columns"][] = "sub_category_id1";
$proto233["m_columns"][] = "ecc_id";
$proto233["m_columns"][] = "price";
$proto233["m_columns"][] = "yahoo";
$proto233["m_columns"][] = "remark";
$proto233["m_columns"][] = "sales_price";
$proto233["m_columns"][] = "description";
$proto233["m_columns"][] = "status";
$proto233["m_columns"][] = "product_num";
$proto233["m_columns"][] = "updated_at";
$proto233["m_columns"][] = "yahoo_size";
$proto233["m_columns"][] = "yahoo_title";
$proto233["m_columns"][] = "yahoo_junle";
$proto233["m_columns"][] = "yahoo_sankou_uwadai";
$proto233["m_columns"][] = "yahoo_sozai";
$proto233["m_columns"][] = "yahoo_color";
$proto233["m_columns"][] = "yahoo_kataban";
$proto233["m_columns"][] = "yahoo_condition1";
$proto233["m_columns"][] = "yahoo_condition2";
$proto233["m_columns"][] = "yahoo_fuzokuhin";
$proto233["m_columns"][] = "yahoo_sinaban";
$proto233["m_columns"][] = "yahoo_saisun_sha";
$proto233["m_columns"][] = "yahoo_sex";
$proto233["m_columns"][] = "box_id";
$proto233["m_columns"][] = "nyuukin_price";
$proto233["m_columns"][] = "updated_by";
$proto233["m_columns"][] = "raku_title";
$proto233["m_columns"][] = "raku_hyoujisaki_category2";
$proto233["m_columns"][] = "raku_hyoujisaki_category";
$proto233["m_columns"][] = "raku_hyoujisaki_category3";
$proto233["m_columns"][] = "timesta";
$proto233["m_columns"][] = "saisun_start";
$proto233["m_columns"][] = "saisun_end";
$proto233["m_columns"][] = "label_output_flag";
$proto233["m_columns"][] = "season";
$proto233["m_columns"][] = "kanryou_henbi";
$proto233["m_columns"][] = "box_sort";
$proto233["m_columns"][] = "satei_by";
$proto233["m_columns"][] = "kaitori_by";
$proto233["m_columns"][] = "comment";
$proto233["m_columns"][] = "satei_hi";
$proto233["m_columns"][] = "kaitory_hi";
$proto233["m_columns"][] = "REG_PHOTOGRAPHER";
$proto233["m_columns"][] = "REG_AUTHOR";
$proto233["m_columns"][] = "REG_PACKINGS";
$proto233["m_columns"][] = "REG_KAKOU_DATE";
$proto233["m_columns"][] = "REG_KAKOU";
$proto233["m_columns"][] = "REG_EXHIBITOR";
$proto233["m_columns"][] = "REG_PHOTOGRAPHER_DATE";
$proto233["m_columns"][] = "DT_PACKING_DATE";
$proto233["m_columns"][] = "DT_UP_DATE";
$proto233["m_columns"][] = "AWAZU_DATE";
$proto233["m_columns"][] = "AWAZU_NIN";
$proto233["m_columns"][] = "sabun_date";
$proto233["m_columns"][] = "browseid";
$proto233["m_columns"][] = "browsenode";
$proto233["m_columns"][] = "gold_property";
$proto233["m_columns"][] = "ichiba_title";
$proto233["m_columns"][] = "Gram";
$proto233["m_columns"][] = "Parent_stone";
$proto233["m_columns"][] = "Aside_stone";
$proto233["m_columns"][] = "Appraiser";
$proto233["m_columns"][] = "Remarks";
$proto233["m_columns"][] = "Destination_selling";
$proto233["m_columns"][] = "Finish";
$proto233["m_columns"][] = "Discrimination";
$proto233["m_columns"][] = "accessories";
$proto233["m_columns"][] = "priority";
$proto233["m_columns"][] = "A_storage";
$proto233["m_columns"][] = "price_per_gram";
$proto233["m_columns"][] = "price_per_parent_stone";
$proto233["m_columns"][] = "price_per_aside_stone";
$proto233["m_columns"][] = "price_secret";
$proto233["m_columns"][] = "sales_price_secret";
$proto233["m_columns"][] = "eq";
$proto233["m_columns"][] = "en";
$proto233["m_columns"][] = "line";
$proto233["m_columns"][] = "item_name";
$proto233["m_columns"][] = "handle";
$proto233["m_columns"][] = "yahoo_color_id";
$proto233["m_columns"][] = "raku_hyoujisaki_category4";
$proto233["m_columns"][] = "raku_hyoujisaki_category5";
$proto233["m_columns"][] = "raku_dir_1";
$proto233["m_columns"][] = "raku_dir_2";
$proto233["m_columns"][] = "raku_dir_3";
$proto233["m_columns"][] = "raku_dir_4";
$proto233["m_columns"][] = "raku_dir_5";
$proto233["m_columns"][] = "raku_dir_result";
$proto233["m_columns"][] = "raku_tag_result";
$proto233["m_columns"][] = "serial_number";
$proto233["m_columns"][] = "Exhibition_Date";
$proto233["m_columns"][] = "search_keyword";
$proto233["m_columns"][] = "stamp";
$proto233["m_columns"][] = "motif";
$proto233["m_columns"][] = "Setting";
$proto233["m_columns"][] = "processing";
$proto233["m_columns"][] = "Sleeve_Length";
$proto233["m_columns"][] = "length";
$proto233["m_columns"][] = "Ring_size";
$proto233["m_columns"][] = "price_for_site";
$proto233["m_columns"][] = "yahoo_category_id";
$proto233["m_columns"][] = "Qty";
$proto233["m_columns"][] = "sales_period";
$proto233["m_columns"][] = "starting_price";
$proto233["m_columns"][] = "FLAG_NO_ARRIVAL";
$proto233["m_columns"][] = "amount_of_image";
$proto233["m_columns"][] = "csv";
$proto233["m_columns"][] = "return_output_flag";
$proto233["m_columns"][] = "wasabi_flag";
$proto233["m_columns"][] = "ws_import_date";
$proto233["m_columns"][] = "logo";
$proto233["m_columns"][] = "parts";
$proto233["m_columns"][] = "country_of_origin";
$proto233["m_columns"][] = "zipper";
$proto233["m_columns"][] = "guarantee";
$proto233["m_columns"][] = "errors";
$proto233["m_columns"][] = "designer";
$proto233["m_columns"][] = "hahakai";
$proto233["m_columns"][] = "effect";
$proto233["m_columns"][] = "shape";
$proto233["m_columns"][] = "cutting_style";
$proto233["m_columns"][] = "chain_type";
$proto233["m_columns"][] = "number_of_stones";
$proto233["m_columns"][] = "amount";
$proto233["m_columns"][] = "satei_error";
$proto233["m_columns"][] = "producing_area";
$proto233["m_columns"][] = "shape_supplement";
$proto233["m_columns"][] = "side_gem";
$proto233["m_columns"][] = "product_style";
$proto233["m_columns"][] = "collar_neck_line";
$proto233["m_columns"][] = "breast";
$proto233["m_columns"][] = "silhouette";
$proto233["m_columns"][] = "sleeve";
$proto233["m_columns"][] = "unit";
$proto233["m_columns"][] = "hall_mark";
$proto233["m_columns"][] = "plate";
$proto233["m_columns"][] = "toe";
$proto233["m_columns"][] = "heel";
$proto233["m_columns"][] = "cloth";
$proto233["m_columns"][] = "serial_number_for_storage";
$proto233["m_columns"][] = "official_url";
$proto233["m_columns"][] = "main_details";
$proto233["m_columns"][] = "notation_size";
$proto233["m_columns"][] = "shoe_size_jp";
$proto233["m_columns"][] = "Eoc_chigins2_id";
$proto233["m_columns"][] = "country_of_origin_name";
$proto233["m_columns"][] = "mailingkit_id";
$proto233["m_columns"][] = "DA_COMMENTSANDTOTAL";
$proto233["m_columns"][] = "DA_WEIGHT";
$proto233["m_columns"][] = "DA_PER_CARAT";
$proto233["m_columns"][] = "DA_SHAPE";
$proto233["m_columns"][] = "DA_SELFGRES";
$proto233["m_columns"][] = "DA_ORIGINALGRADEMLIKENED";
$proto233["m_columns"][] = "DA_SUGARCANE";
$proto233["m_columns"][] = "DA_RAPA";
$proto233["m_columns"][] = "DA_INTENSITY";
$proto233["m_columns"][] = "DA_OVERTONE";
$proto233["m_columns"][] = "DA_COLOR";
$proto233["m_columns"][] = "DA_CLARITY";
$proto233["m_columns"][] = "DA_CUT";
$proto233["m_columns"][] = "DA_POLISH";
$proto233["m_columns"][] = "DA_SYMMETRY";
$proto233["m_columns"][] = "DA_FLUO";
$proto233["m_columns"][] = "DA_COLOR_FLUO";
$proto233["m_columns"][] = "DA_WIDE";
$proto233["m_columns"][] = "DA_HIGH";
$proto233["m_columns"][] = "DA_DEPTH";
$proto233["m_columns"][] = "DA_APPRAISER";
$proto233["m_columns"][] = "DA_FRAPA";
$proto233["m_columns"][] = "DA_RATE";
$proto233["m_columns"][] = "DA_UNIT_PRICE_UNPLUG";
$proto233["m_columns"][] = "DA_YOURNAME";
$proto233["m_columns"][] = "DA_RAPAB";
$proto233["m_columns"][] = "DA_GROSSPROFIT";
$proto233["m_columns"][] = "DA_INTEREST_1";
$proto233["m_columns"][] = "DA_no";
$proto233["m_columns"][] = "kinsa_flag";
$proto233["m_columns"][] = "price_for_site_flag";
$proto233["m_columns"][] = "Eoc_takuhai_id";
$proto233["m_columns"][] = "Eoc_unfinished_id";
$proto233["m_columns"][] = "Eoc_chigins_unfinished_id";
$obj = new SQLTable($proto233);

$proto232["m_table"] = $obj;
$proto232["m_sql"] = "`shouhin`";
$proto232["m_alias"] = "";
$proto232["m_srcTableName"] = "satei_of_brand";
$proto234=array();
$proto234["m_sql"] = "";
$proto234["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto234["m_column"]=$obj;
$proto234["m_contained"] = array();
$proto234["m_strCase"] = "";
$proto234["m_havingmode"] = false;
$proto234["m_inBrackets"] = false;
$proto234["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto234);

$proto232["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto232);

$proto0["m_fromlist"][]=$obj;
												$proto236=array();
$proto236["m_link"] = "SQLL_LEFTJOIN";
			$proto237=array();
$proto237["m_strName"] = "Eoc";
$proto237["m_srcTableName"] = "satei_of_brand";
$proto237["m_columns"] = array();
$proto237["m_columns"][] = "ecc_id";
$proto237["m_columns"][] = "ecc_seq";
$proto237["m_columns"][] = "name1";
$proto237["m_columns"][] = "created_t";
$proto237["m_columns"][] = "registerd_id";
$proto237["m_columns"][] = "kaitori_staff_id";
$proto237["m_columns"][] = "name2";
$proto237["m_columns"][] = "wareki";
$proto237["m_columns"][] = "b1";
$proto237["m_columns"][] = "b2";
$proto237["m_columns"][] = "b3";
$proto237["m_columns"][] = "birth_day";
$proto237["m_columns"][] = "age";
$proto237["m_columns"][] = "zip";
$proto237["m_columns"][] = "zip1";
$proto237["m_columns"][] = "zip2";
$proto237["m_columns"][] = "address1";
$proto237["m_columns"][] = "address2";
$proto237["m_columns"][] = "address3";
$proto237["m_columns"][] = "tel";
$proto237["m_columns"][] = "tel2";
$proto237["m_columns"][] = "mail1";
$proto237["m_columns"][] = "mail2";
$proto237["m_columns"][] = "address_code";
$proto237["m_columns"][] = "bank_name";
$proto237["m_columns"][] = "bank_blunch_code";
$proto237["m_columns"][] = "bank_yokin_shubetu";
$proto237["m_columns"][] = "bank_account";
$proto237["m_columns"][] = "bank_acoount_name";
$proto237["m_columns"][] = "haisou_bangou";
$proto237["m_columns"][] = "sise_houhou";
$proto237["m_columns"][] = "hentou_houhou";
$proto237["m_columns"][] = "hentou_houhou_time";
$proto237["m_columns"][] = "mousikomi_id";
$proto237["m_columns"][] = "hituyou_shorui";
$proto237["m_columns"][] = "seiyaku_fuseiritu";
$proto237["m_columns"][] = "mitumori_taku";
$proto237["m_columns"][] = "seacanse";
$proto237["m_columns"][] = "remark";
$proto237["m_columns"][] = "type";
$proto237["m_columns"][] = "sales_flag";
$proto237["m_columns"][] = "src_type";
$proto237["m_columns"][] = "liquidation_shop_code";
$proto237["m_columns"][] = "insurance_amount_print";
$proto237["m_columns"][] = "jis_code";
$proto237["m_columns"][] = "updated_at";
$proto237["m_columns"][] = "_registerd_id";
$proto237["m_columns"][] = "mail_check_type";
$proto237["m_columns"][] = "purchase_type";
$proto237["m_columns"][] = "sex";
$proto237["m_columns"][] = "m_tel";
$proto237["m_columns"][] = "fax";
$proto237["m_columns"][] = "chigin_kaitori";
$proto237["m_columns"][] = "option1";
$proto237["m_columns"][] = "option2";
$proto237["m_columns"][] = "option3";
$proto237["m_columns"][] = "option4";
$proto237["m_columns"][] = "option5";
$proto237["m_columns"][] = "option6";
$proto237["m_columns"][] = "option7";
$proto237["m_columns"][] = "option8";
$proto237["m_columns"][] = "option9";
$proto237["m_columns"][] = "option10";
$proto237["m_columns"][] = "option11";
$proto237["m_columns"][] = "option12";
$proto237["m_columns"][] = "option13";
$proto237["m_columns"][] = "rakuda_csv_flag";
$proto237["m_columns"][] = "EOC_COURIER_CHECK";
$proto237["m_columns"][] = "EOC_SIZE";
$proto237["m_columns"][] = "EOC_NUMBER";
$proto237["m_columns"][] = "EOC_REUSE";
$proto237["m_columns"][] = "EOC__DELIVERY_DATES";
$proto237["m_columns"][] = "EOC_SPECIFIED_TIME";
$proto237["m_columns"][] = "FIRST_NAME2";
$proto237["m_columns"][] = "LAST_NAME2";
$proto237["m_columns"][] = "EOC__DATE_AND_TIME_2";
$proto237["m_columns"][] = "EOC__BOX_NUMBER";
$proto237["m_columns"][] = "FIRST_NAME_KANA";
$proto237["m_columns"][] = "LAST_NAME_KANA";
$proto237["m_columns"][] = "FLAG_SPEED";
$proto237["m_columns"][] = "SEARCH_MEDIA";
$proto237["m_columns"][] = "SEARCH_SITE";
$proto237["m_columns"][] = "UN_REACHABLE";
$proto237["m_columns"][] = "FLG_MAIL_SAGAWA";
$proto237["m_columns"][] = "FLG_MAIL_OTHER";
$proto237["m_columns"][] = "ALLSEIYAKU";
$proto237["m_columns"][] = "ICHIBUSEIYAKU";
$proto237["m_columns"][] = "seiyakukin";
$proto237["m_columns"][] = "kaitorihuka";
$proto237["m_columns"][] = "awazu_date";
$proto237["m_columns"][] = "seiyaku_price";
$proto237["m_columns"][] = "eoc_search_keyword";
$proto237["m_columns"][] = "sonota";
$proto237["m_columns"][] = "size_kosuu";
$proto237["m_columns"][] = "sagawa_shuuka_flag";
$proto237["m_columns"][] = "line_check";
$proto237["m_columns"][] = "sagawa_shuukairai_denwabangou";
$proto237["m_columns"][] = "kaitori_sougak";
$proto237["m_columns"][] = "flag";
$proto237["m_columns"][] = "key_code";
$proto237["m_columns"][] = "dm_check_type";
$proto237["m_columns"][] = "kit_flag";
$proto237["m_columns"][] = "kit_done_flag";
$proto237["m_columns"][] = "bank_details_code";
$proto237["m_columns"][] = "bank_details_blunch_name";
$proto237["m_columns"][] = "bank_details_blunch_code";
$proto237["m_columns"][] = "bank_details_account_number";
$proto237["m_columns"][] = "bank_details_symbol";
$proto237["m_columns"][] = "bank_details_number";
$proto237["m_columns"][] = "bank_details_account_name";
$proto237["m_columns"][] = "bank_details_deposit_type";
$proto237["m_columns"][] = "mypage_id";
$proto237["m_columns"][] = "UN_REACHABLE_brand";
$proto237["m_columns"][] = "sagawa_haisou_hoken";
$proto237["m_columns"][] = "transfer_confirm";
$obj = new SQLTable($proto237);

$proto236["m_table"] = $obj;
$proto236["m_sql"] = "LEFT OUTER JOIN `Eoc` ON `shouhin`.`ecc_id` = `Eoc`.`ecc_id`";
$proto236["m_alias"] = "";
$proto236["m_srcTableName"] = "satei_of_brand";
$proto238=array();
$proto238["m_sql"] = "`shouhin`.`ecc_id` = `Eoc`.`ecc_id`";
$proto238["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "ecc_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto238["m_column"]=$obj;
$proto238["m_contained"] = array();
$proto238["m_strCase"] = "= `Eoc`.`ecc_id`";
$proto238["m_havingmode"] = false;
$proto238["m_inBrackets"] = false;
$proto238["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto238);

$proto236["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto236);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto240=array();
						$obj = new SQLField(array(
	"m_strName" => "product_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto240["m_column"]=$obj;
$proto240["m_bAsc"] = 0;
$proto240["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto240);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="satei_of_brand";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_satei_of_brand = createSqlQuery_satei_of_brand();


	
		;

																																																																																																																	

$tdatasatei_of_brand[".sqlquery"] = $queryData_satei_of_brand;

include_once(getabspath("include/satei_of_brand_events.php"));
$tableEvents["satei_of_brand"] = new eventclass_satei_of_brand;
$tdatasatei_of_brand[".hasEvents"] = true;

?>