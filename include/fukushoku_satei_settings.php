<?php
require_once(getabspath("classes/cipherer.php"));




$tdatafukushoku_satei = array();
	$tdatafukushoku_satei[".truncateText"] = true;
	$tdatafukushoku_satei[".NumberOfChars"] = 80;
	$tdatafukushoku_satei[".ShortName"] = "fukushoku_satei";
	$tdatafukushoku_satei[".OwnerID"] = "";
	$tdatafukushoku_satei[".OriginalTable"] = "shouhin";

//	field labels
$fieldLabelsfukushoku_satei = array();
$fieldToolTipsfukushoku_satei = array();
$pageTitlesfukushoku_satei = array();
$placeHoldersfukushoku_satei = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsfukushoku_satei["Japanese"] = array();
	$fieldToolTipsfukushoku_satei["Japanese"] = array();
	$placeHoldersfukushoku_satei["Japanese"] = array();
	$pageTitlesfukushoku_satei["Japanese"] = array();
	$fieldLabelsfukushoku_satei["Japanese"]["product_id"] = "SEQ";
	$fieldToolTipsfukushoku_satei["Japanese"]["product_id"] = "";
	$placeHoldersfukushoku_satei["Japanese"]["product_id"] = "";
	$fieldLabelsfukushoku_satei["Japanese"]["category_id"] = "大カテゴリー";
	$fieldToolTipsfukushoku_satei["Japanese"]["category_id"] = "";
	$placeHoldersfukushoku_satei["Japanese"]["category_id"] = "";
	$fieldLabelsfukushoku_satei["Japanese"]["goods_title"] = "アイテム名";
	$fieldToolTipsfukushoku_satei["Japanese"]["goods_title"] = "";
	$placeHoldersfukushoku_satei["Japanese"]["goods_title"] = "";
	$fieldLabelsfukushoku_satei["Japanese"]["title"] = "タイトル";
	$fieldToolTipsfukushoku_satei["Japanese"]["title"] = "";
	$placeHoldersfukushoku_satei["Japanese"]["title"] = "";
	$fieldLabelsfukushoku_satei["Japanese"]["sub_category_id1"] = "中カテゴリー";
	$fieldToolTipsfukushoku_satei["Japanese"]["sub_category_id1"] = "";
	$placeHoldersfukushoku_satei["Japanese"]["sub_category_id1"] = "";
	$fieldLabelsfukushoku_satei["Japanese"]["ecc_id"] = "Ecc Id";
	$fieldToolTipsfukushoku_satei["Japanese"]["ecc_id"] = "";
	$placeHoldersfukushoku_satei["Japanese"]["ecc_id"] = "";
	$fieldLabelsfukushoku_satei["Japanese"]["price"] = "買取額";
	$fieldToolTipsfukushoku_satei["Japanese"]["price"] = "";
	$placeHoldersfukushoku_satei["Japanese"]["price"] = "";
	$fieldLabelsfukushoku_satei["Japanese"]["yahoo"] = "Yahoo";
	$fieldToolTipsfukushoku_satei["Japanese"]["yahoo"] = "";
	$placeHoldersfukushoku_satei["Japanese"]["yahoo"] = "";
	$fieldLabelsfukushoku_satei["Japanese"]["remark"] = "宝飾備考";
	$fieldToolTipsfukushoku_satei["Japanese"]["remark"] = "";
	$placeHoldersfukushoku_satei["Japanese"]["remark"] = "";
	$fieldLabelsfukushoku_satei["Japanese"]["sales_price"] = "販売額";
	$fieldToolTipsfukushoku_satei["Japanese"]["sales_price"] = "";
	$placeHoldersfukushoku_satei["Japanese"]["sales_price"] = "";
	$fieldLabelsfukushoku_satei["Japanese"]["description"] = "メモ";
	$fieldToolTipsfukushoku_satei["Japanese"]["description"] = "";
	$placeHoldersfukushoku_satei["Japanese"]["description"] = "";
	$fieldLabelsfukushoku_satei["Japanese"]["status"] = "商品状態";
	$fieldToolTipsfukushoku_satei["Japanese"]["status"] = "";
	$placeHoldersfukushoku_satei["Japanese"]["status"] = "";
	$fieldLabelsfukushoku_satei["Japanese"]["product_num"] = "ブランドID";
	$fieldToolTipsfukushoku_satei["Japanese"]["product_num"] = "";
	$placeHoldersfukushoku_satei["Japanese"]["product_num"] = "";
	$fieldLabelsfukushoku_satei["Japanese"]["yahoo_size"] = "サイズ";
	$fieldToolTipsfukushoku_satei["Japanese"]["yahoo_size"] = "";
	$placeHoldersfukushoku_satei["Japanese"]["yahoo_size"] = "";
	$fieldLabelsfukushoku_satei["Japanese"]["yahoo_title"] = "Yタイトル";
	$fieldToolTipsfukushoku_satei["Japanese"]["yahoo_title"] = "";
	$placeHoldersfukushoku_satei["Japanese"]["yahoo_title"] = "";
	$fieldLabelsfukushoku_satei["Japanese"]["yahoo_sankou_uwadai"] = "参考上代";
	$fieldToolTipsfukushoku_satei["Japanese"]["yahoo_sankou_uwadai"] = "";
	$placeHoldersfukushoku_satei["Japanese"]["yahoo_sankou_uwadai"] = "";
	$fieldLabelsfukushoku_satei["Japanese"]["yahoo_sozai"] = "素材";
	$fieldToolTipsfukushoku_satei["Japanese"]["yahoo_sozai"] = "";
	$placeHoldersfukushoku_satei["Japanese"]["yahoo_sozai"] = "";
	$fieldLabelsfukushoku_satei["Japanese"]["yahoo_color"] = "カラー";
	$fieldToolTipsfukushoku_satei["Japanese"]["yahoo_color"] = "";
	$placeHoldersfukushoku_satei["Japanese"]["yahoo_color"] = "";
	$fieldLabelsfukushoku_satei["Japanese"]["yahoo_kataban"] = "型番";
	$fieldToolTipsfukushoku_satei["Japanese"]["yahoo_kataban"] = "";
	$placeHoldersfukushoku_satei["Japanese"]["yahoo_kataban"] = "";
	$fieldLabelsfukushoku_satei["Japanese"]["yahoo_condition1"] = "コンディションの詳細";
	$fieldToolTipsfukushoku_satei["Japanese"]["yahoo_condition1"] = "";
	$placeHoldersfukushoku_satei["Japanese"]["yahoo_condition1"] = "";
	$fieldLabelsfukushoku_satei["Japanese"]["yahoo_condition2"] = "コンディション";
	$fieldToolTipsfukushoku_satei["Japanese"]["yahoo_condition2"] = "";
	$placeHoldersfukushoku_satei["Japanese"]["yahoo_condition2"] = "";
	$fieldLabelsfukushoku_satei["Japanese"]["yahoo_fuzokuhin"] = "付属品";
	$fieldToolTipsfukushoku_satei["Japanese"]["yahoo_fuzokuhin"] = "";
	$placeHoldersfukushoku_satei["Japanese"]["yahoo_fuzokuhin"] = "";
	$fieldLabelsfukushoku_satei["Japanese"]["yahoo_sinaban"] = "品番";
	$fieldToolTipsfukushoku_satei["Japanese"]["yahoo_sinaban"] = "";
	$placeHoldersfukushoku_satei["Japanese"]["yahoo_sinaban"] = "";
	$fieldLabelsfukushoku_satei["Japanese"]["yahoo_saisun_sha"] = "Yahoo Saisun Sha";
	$fieldToolTipsfukushoku_satei["Japanese"]["yahoo_saisun_sha"] = "";
	$placeHoldersfukushoku_satei["Japanese"]["yahoo_saisun_sha"] = "";
	$fieldLabelsfukushoku_satei["Japanese"]["yahoo_sex"] = "性別";
	$fieldToolTipsfukushoku_satei["Japanese"]["yahoo_sex"] = "";
	$placeHoldersfukushoku_satei["Japanese"]["yahoo_sex"] = "";
	$fieldLabelsfukushoku_satei["Japanese"]["box_id"] = "Box Id";
	$fieldToolTipsfukushoku_satei["Japanese"]["box_id"] = "";
	$placeHoldersfukushoku_satei["Japanese"]["box_id"] = "";
	$fieldLabelsfukushoku_satei["Japanese"]["nyuukin_price"] = "Nyuukin Price";
	$fieldToolTipsfukushoku_satei["Japanese"]["nyuukin_price"] = "";
	$placeHoldersfukushoku_satei["Japanese"]["nyuukin_price"] = "";
	$fieldLabelsfukushoku_satei["Japanese"]["updated_by"] = "Updated By";
	$fieldToolTipsfukushoku_satei["Japanese"]["updated_by"] = "";
	$placeHoldersfukushoku_satei["Japanese"]["updated_by"] = "";
	$fieldLabelsfukushoku_satei["Japanese"]["raku_title"] = "楽天タイトル";
	$fieldToolTipsfukushoku_satei["Japanese"]["raku_title"] = "";
	$placeHoldersfukushoku_satei["Japanese"]["raku_title"] = "";
	$fieldLabelsfukushoku_satei["Japanese"]["raku_hyoujisaki_category2"] = "楽ジャン（店舗内）2";
	$fieldToolTipsfukushoku_satei["Japanese"]["raku_hyoujisaki_category2"] = "";
	$placeHoldersfukushoku_satei["Japanese"]["raku_hyoujisaki_category2"] = "";
	$fieldLabelsfukushoku_satei["Japanese"]["raku_hyoujisaki_category"] = "楽ジャン（店舗内）1";
	$fieldToolTipsfukushoku_satei["Japanese"]["raku_hyoujisaki_category"] = "";
	$placeHoldersfukushoku_satei["Japanese"]["raku_hyoujisaki_category"] = "";
	$fieldLabelsfukushoku_satei["Japanese"]["raku_hyoujisaki_category3"] = "楽ジャン（店舗内）3";
	$fieldToolTipsfukushoku_satei["Japanese"]["raku_hyoujisaki_category3"] = "";
	$placeHoldersfukushoku_satei["Japanese"]["raku_hyoujisaki_category3"] = "";
	$fieldLabelsfukushoku_satei["Japanese"]["timesta"] = "Timesta";
	$fieldToolTipsfukushoku_satei["Japanese"]["timesta"] = "";
	$placeHoldersfukushoku_satei["Japanese"]["timesta"] = "";
	$fieldLabelsfukushoku_satei["Japanese"]["saisun_start"] = "Saisun Start";
	$fieldToolTipsfukushoku_satei["Japanese"]["saisun_start"] = "";
	$placeHoldersfukushoku_satei["Japanese"]["saisun_start"] = "";
	$fieldLabelsfukushoku_satei["Japanese"]["saisun_end"] = "Saisun End";
	$fieldToolTipsfukushoku_satei["Japanese"]["saisun_end"] = "";
	$placeHoldersfukushoku_satei["Japanese"]["saisun_end"] = "";
	$fieldLabelsfukushoku_satei["Japanese"]["label_output_flag"] = "ラベル出力";
	$fieldToolTipsfukushoku_satei["Japanese"]["label_output_flag"] = "";
	$placeHoldersfukushoku_satei["Japanese"]["label_output_flag"] = "";
	$fieldLabelsfukushoku_satei["Japanese"]["season"] = "季節";
	$fieldToolTipsfukushoku_satei["Japanese"]["season"] = "";
	$placeHoldersfukushoku_satei["Japanese"]["season"] = "";
	$fieldLabelsfukushoku_satei["Japanese"]["kanryou_henbi"] = "Kanryou Henbi";
	$fieldToolTipsfukushoku_satei["Japanese"]["kanryou_henbi"] = "";
	$placeHoldersfukushoku_satei["Japanese"]["kanryou_henbi"] = "";
	$fieldLabelsfukushoku_satei["Japanese"]["box_sort"] = "Box Sort";
	$fieldToolTipsfukushoku_satei["Japanese"]["box_sort"] = "";
	$placeHoldersfukushoku_satei["Japanese"]["box_sort"] = "";
	$fieldLabelsfukushoku_satei["Japanese"]["satei_by"] = "査定人";
	$fieldToolTipsfukushoku_satei["Japanese"]["satei_by"] = "";
	$placeHoldersfukushoku_satei["Japanese"]["satei_by"] = "";
	$fieldLabelsfukushoku_satei["Japanese"]["kaitori_by"] = "Kaitori By";
	$fieldToolTipsfukushoku_satei["Japanese"]["kaitori_by"] = "";
	$placeHoldersfukushoku_satei["Japanese"]["kaitori_by"] = "";
	$fieldLabelsfukushoku_satei["Japanese"]["comment"] = "コメント";
	$fieldToolTipsfukushoku_satei["Japanese"]["comment"] = "";
	$placeHoldersfukushoku_satei["Japanese"]["comment"] = "";
	$fieldLabelsfukushoku_satei["Japanese"]["satei_hi"] = "査定日";
	$fieldToolTipsfukushoku_satei["Japanese"]["satei_hi"] = "";
	$placeHoldersfukushoku_satei["Japanese"]["satei_hi"] = "";
	$fieldLabelsfukushoku_satei["Japanese"]["kaitory_hi"] = "Kaitory Hi";
	$fieldToolTipsfukushoku_satei["Japanese"]["kaitory_hi"] = "";
	$placeHoldersfukushoku_satei["Japanese"]["kaitory_hi"] = "";
	$fieldLabelsfukushoku_satei["Japanese"]["REG_PHOTOGRAPHER"] = "REG PHOTOGRAPHER";
	$fieldToolTipsfukushoku_satei["Japanese"]["REG_PHOTOGRAPHER"] = "";
	$placeHoldersfukushoku_satei["Japanese"]["REG_PHOTOGRAPHER"] = "";
	$fieldLabelsfukushoku_satei["Japanese"]["REG_PACKINGS"] = "REG PACKINGS";
	$fieldToolTipsfukushoku_satei["Japanese"]["REG_PACKINGS"] = "";
	$placeHoldersfukushoku_satei["Japanese"]["REG_PACKINGS"] = "";
	$fieldLabelsfukushoku_satei["Japanese"]["REG_KAKOU_DATE"] = "REG KAKOU DATE";
	$fieldToolTipsfukushoku_satei["Japanese"]["REG_KAKOU_DATE"] = "";
	$placeHoldersfukushoku_satei["Japanese"]["REG_KAKOU_DATE"] = "";
	$fieldLabelsfukushoku_satei["Japanese"]["REG_KAKOU"] = "REG KAKOU";
	$fieldToolTipsfukushoku_satei["Japanese"]["REG_KAKOU"] = "";
	$placeHoldersfukushoku_satei["Japanese"]["REG_KAKOU"] = "";
	$fieldLabelsfukushoku_satei["Japanese"]["REG_EXHIBITOR"] = "REG EXHIBITOR";
	$fieldToolTipsfukushoku_satei["Japanese"]["REG_EXHIBITOR"] = "";
	$placeHoldersfukushoku_satei["Japanese"]["REG_EXHIBITOR"] = "";
	$fieldLabelsfukushoku_satei["Japanese"]["REG_PHOTOGRAPHER_DATE"] = "REG PHOTOGRAPHER DATE";
	$fieldToolTipsfukushoku_satei["Japanese"]["REG_PHOTOGRAPHER_DATE"] = "";
	$placeHoldersfukushoku_satei["Japanese"]["REG_PHOTOGRAPHER_DATE"] = "";
	$fieldLabelsfukushoku_satei["Japanese"]["DT_PACKING_DATE"] = "DT PACKING DATE";
	$fieldToolTipsfukushoku_satei["Japanese"]["DT_PACKING_DATE"] = "";
	$placeHoldersfukushoku_satei["Japanese"]["DT_PACKING_DATE"] = "";
	$fieldLabelsfukushoku_satei["Japanese"]["DT_UP_DATE"] = "DT UP DATE";
	$fieldToolTipsfukushoku_satei["Japanese"]["DT_UP_DATE"] = "";
	$placeHoldersfukushoku_satei["Japanese"]["DT_UP_DATE"] = "";
	$fieldLabelsfukushoku_satei["Japanese"]["AWAZU_DATE"] = "AWAZU DATE";
	$fieldToolTipsfukushoku_satei["Japanese"]["AWAZU_DATE"] = "";
	$placeHoldersfukushoku_satei["Japanese"]["AWAZU_DATE"] = "";
	$fieldLabelsfukushoku_satei["Japanese"]["AWAZU_NIN"] = "AWAZU NIN";
	$fieldToolTipsfukushoku_satei["Japanese"]["AWAZU_NIN"] = "";
	$placeHoldersfukushoku_satei["Japanese"]["AWAZU_NIN"] = "";
	$fieldLabelsfukushoku_satei["Japanese"]["sabun_date"] = "Sabun Date";
	$fieldToolTipsfukushoku_satei["Japanese"]["sabun_date"] = "";
	$placeHoldersfukushoku_satei["Japanese"]["sabun_date"] = "";
	$fieldLabelsfukushoku_satei["Japanese"]["browseid"] = "Browseid";
	$fieldToolTipsfukushoku_satei["Japanese"]["browseid"] = "";
	$placeHoldersfukushoku_satei["Japanese"]["browseid"] = "";
	$fieldLabelsfukushoku_satei["Japanese"]["browsenode"] = "Browsenode";
	$fieldToolTipsfukushoku_satei["Japanese"]["browsenode"] = "";
	$placeHoldersfukushoku_satei["Japanese"]["browsenode"] = "";
	$fieldLabelsfukushoku_satei["Japanese"]["Destination_selling"] = "売り先";
	$fieldToolTipsfukushoku_satei["Japanese"]["Destination_selling"] = "";
	$placeHoldersfukushoku_satei["Japanese"]["Destination_selling"] = "";
	$fieldLabelsfukushoku_satei["Japanese"]["Finish"] = "仕上";
	$fieldToolTipsfukushoku_satei["Japanese"]["Finish"] = "";
	$placeHoldersfukushoku_satei["Japanese"]["Finish"] = "";
	$fieldLabelsfukushoku_satei["Japanese"]["Discrimination"] = "鑑別";
	$fieldToolTipsfukushoku_satei["Japanese"]["Discrimination"] = "";
	$placeHoldersfukushoku_satei["Japanese"]["Discrimination"] = "";
	$fieldLabelsfukushoku_satei["Japanese"]["accessories"] = "付属品";
	$fieldToolTipsfukushoku_satei["Japanese"]["accessories"] = "";
	$placeHoldersfukushoku_satei["Japanese"]["accessories"] = "";
	$fieldLabelsfukushoku_satei["Japanese"]["priority"] = "優先";
	$fieldToolTipsfukushoku_satei["Japanese"]["priority"] = "";
	$placeHoldersfukushoku_satei["Japanese"]["priority"] = "";
	$fieldLabelsfukushoku_satei["Japanese"]["A_storage"] = "A保管";
	$fieldToolTipsfukushoku_satei["Japanese"]["A_storage"] = "";
	$placeHoldersfukushoku_satei["Japanese"]["A_storage"] = "";
	$fieldLabelsfukushoku_satei["Japanese"]["price_secret"] = "買取額隠語";
	$fieldToolTipsfukushoku_satei["Japanese"]["price_secret"] = "";
	$placeHoldersfukushoku_satei["Japanese"]["price_secret"] = "";
	$fieldLabelsfukushoku_satei["Japanese"]["sales_price_secret"] = "販売額隠語";
	$fieldToolTipsfukushoku_satei["Japanese"]["sales_price_secret"] = "";
	$placeHoldersfukushoku_satei["Japanese"]["sales_price_secret"] = "";
	$fieldLabelsfukushoku_satei["Japanese"]["eq"] = "=";
	$fieldToolTipsfukushoku_satei["Japanese"]["eq"] = "";
	$placeHoldersfukushoku_satei["Japanese"]["eq"] = "";
	$fieldLabelsfukushoku_satei["Japanese"]["en"] = "円";
	$fieldToolTipsfukushoku_satei["Japanese"]["en"] = "";
	$placeHoldersfukushoku_satei["Japanese"]["en"] = "";
	$fieldLabelsfukushoku_satei["Japanese"]["line"] = "ライン";
	$fieldToolTipsfukushoku_satei["Japanese"]["line"] = "";
	$placeHoldersfukushoku_satei["Japanese"]["line"] = "";
	$fieldLabelsfukushoku_satei["Japanese"]["item_name"] = "アイテム名";
	$fieldToolTipsfukushoku_satei["Japanese"]["item_name"] = "";
	$placeHoldersfukushoku_satei["Japanese"]["item_name"] = "";
	$fieldLabelsfukushoku_satei["Japanese"]["handle"] = "柄";
	$fieldToolTipsfukushoku_satei["Japanese"]["handle"] = "";
	$placeHoldersfukushoku_satei["Japanese"]["handle"] = "";
	$fieldLabelsfukushoku_satei["Japanese"]["yahoo_color_id"] = "WS用カラー";
	$fieldToolTipsfukushoku_satei["Japanese"]["yahoo_color_id"] = "";
	$placeHoldersfukushoku_satei["Japanese"]["yahoo_color_id"] = "";
	$fieldLabelsfukushoku_satei["Japanese"]["raku_hyoujisaki_category4"] = "楽ジャン（店舗内）4";
	$fieldToolTipsfukushoku_satei["Japanese"]["raku_hyoujisaki_category4"] = "";
	$placeHoldersfukushoku_satei["Japanese"]["raku_hyoujisaki_category4"] = "";
	$fieldLabelsfukushoku_satei["Japanese"]["raku_hyoujisaki_category5"] = "楽ジャン（店舗内）5";
	$fieldToolTipsfukushoku_satei["Japanese"]["raku_hyoujisaki_category5"] = "";
	$placeHoldersfukushoku_satei["Japanese"]["raku_hyoujisaki_category5"] = "";
	$fieldLabelsfukushoku_satei["Japanese"]["raku_dir_1"] = "Raku Dir 1";
	$fieldToolTipsfukushoku_satei["Japanese"]["raku_dir_1"] = "";
	$placeHoldersfukushoku_satei["Japanese"]["raku_dir_1"] = "";
	$fieldLabelsfukushoku_satei["Japanese"]["raku_dir_2"] = "Raku Dir 2";
	$fieldToolTipsfukushoku_satei["Japanese"]["raku_dir_2"] = "";
	$placeHoldersfukushoku_satei["Japanese"]["raku_dir_2"] = "";
	$fieldLabelsfukushoku_satei["Japanese"]["raku_dir_3"] = "Raku Dir 3";
	$fieldToolTipsfukushoku_satei["Japanese"]["raku_dir_3"] = "";
	$placeHoldersfukushoku_satei["Japanese"]["raku_dir_3"] = "";
	$fieldLabelsfukushoku_satei["Japanese"]["raku_dir_4"] = "Raku Dir 4";
	$fieldToolTipsfukushoku_satei["Japanese"]["raku_dir_4"] = "";
	$placeHoldersfukushoku_satei["Japanese"]["raku_dir_4"] = "";
	$fieldLabelsfukushoku_satei["Japanese"]["raku_dir_5"] = "Raku Dir 5";
	$fieldToolTipsfukushoku_satei["Japanese"]["raku_dir_5"] = "";
	$placeHoldersfukushoku_satei["Japanese"]["raku_dir_5"] = "";
	$fieldLabelsfukushoku_satei["Japanese"]["raku_dir_result"] = "Raku Dir Result";
	$fieldToolTipsfukushoku_satei["Japanese"]["raku_dir_result"] = "";
	$placeHoldersfukushoku_satei["Japanese"]["raku_dir_result"] = "";
	$fieldLabelsfukushoku_satei["Japanese"]["raku_tag_result"] = "楽天タグID　Result";
	$fieldToolTipsfukushoku_satei["Japanese"]["raku_tag_result"] = "";
	$placeHoldersfukushoku_satei["Japanese"]["raku_tag_result"] = "";
	$fieldLabelsfukushoku_satei["Japanese"]["serial_number"] = "機番";
	$fieldToolTipsfukushoku_satei["Japanese"]["serial_number"] = "";
	$placeHoldersfukushoku_satei["Japanese"]["serial_number"] = "";
	$fieldLabelsfukushoku_satei["Japanese"]["Exhibition_Date"] = "Exhibition Date";
	$fieldToolTipsfukushoku_satei["Japanese"]["Exhibition_Date"] = "";
	$placeHoldersfukushoku_satei["Japanese"]["Exhibition_Date"] = "";
	$fieldLabelsfukushoku_satei["Japanese"]["search_keyword"] = "ストア内検索キーワード";
	$fieldToolTipsfukushoku_satei["Japanese"]["search_keyword"] = "";
	$placeHoldersfukushoku_satei["Japanese"]["search_keyword"] = "";
	$fieldLabelsfukushoku_satei["Japanese"]["stamp"] = "刻印";
	$fieldToolTipsfukushoku_satei["Japanese"]["stamp"] = "";
	$placeHoldersfukushoku_satei["Japanese"]["stamp"] = "";
	$fieldLabelsfukushoku_satei["Japanese"]["Sleeve_Length"] = "袖丈";
	$fieldToolTipsfukushoku_satei["Japanese"]["Sleeve_Length"] = "";
	$placeHoldersfukushoku_satei["Japanese"]["Sleeve_Length"] = "";
	$fieldLabelsfukushoku_satei["Japanese"]["length"] = "着丈";
	$fieldToolTipsfukushoku_satei["Japanese"]["length"] = "";
	$placeHoldersfukushoku_satei["Japanese"]["length"] = "";
	$fieldLabelsfukushoku_satei["Japanese"]["price_for_site"] = "Price For Site";
	$fieldToolTipsfukushoku_satei["Japanese"]["price_for_site"] = "";
	$placeHoldersfukushoku_satei["Japanese"]["price_for_site"] = "";
	$fieldLabelsfukushoku_satei["Japanese"]["yahoo_category_id"] = "Yahoo Category Id";
	$fieldToolTipsfukushoku_satei["Japanese"]["yahoo_category_id"] = "";
	$placeHoldersfukushoku_satei["Japanese"]["yahoo_category_id"] = "";
	$fieldLabelsfukushoku_satei["Japanese"]["Qty"] = "Qty";
	$fieldToolTipsfukushoku_satei["Japanese"]["Qty"] = "";
	$placeHoldersfukushoku_satei["Japanese"]["Qty"] = "";
	$fieldLabelsfukushoku_satei["Japanese"]["sales_period"] = "Sales Period";
	$fieldToolTipsfukushoku_satei["Japanese"]["sales_period"] = "";
	$placeHoldersfukushoku_satei["Japanese"]["sales_period"] = "";
	$fieldLabelsfukushoku_satei["Japanese"]["starting_price"] = "Starting Price";
	$fieldToolTipsfukushoku_satei["Japanese"]["starting_price"] = "";
	$placeHoldersfukushoku_satei["Japanese"]["starting_price"] = "";
	$fieldLabelsfukushoku_satei["Japanese"]["ecc_seq"] = "顧客番号";
	$fieldToolTipsfukushoku_satei["Japanese"]["ecc_seq"] = "";
	$placeHoldersfukushoku_satei["Japanese"]["ecc_seq"] = "";
	$fieldLabelsfukushoku_satei["Japanese"]["yahoo_junle"] = "ブランドジャンル";
	$fieldToolTipsfukushoku_satei["Japanese"]["yahoo_junle"] = "";
	$placeHoldersfukushoku_satei["Japanese"]["yahoo_junle"] = "";
	$fieldLabelsfukushoku_satei["Japanese"]["logo"] = "ロゴ";
	$fieldToolTipsfukushoku_satei["Japanese"]["logo"] = "";
	$placeHoldersfukushoku_satei["Japanese"]["logo"] = "";
	$fieldLabelsfukushoku_satei["Japanese"]["parts"] = "金具（パーツ）";
	$fieldToolTipsfukushoku_satei["Japanese"]["parts"] = "";
	$placeHoldersfukushoku_satei["Japanese"]["parts"] = "";
	$fieldLabelsfukushoku_satei["Japanese"]["country_of_origin"] = "原産国";
	$fieldToolTipsfukushoku_satei["Japanese"]["country_of_origin"] = "";
	$placeHoldersfukushoku_satei["Japanese"]["country_of_origin"] = "";
	$fieldLabelsfukushoku_satei["Japanese"]["zipper"] = "金具（ファスナー）";
	$fieldToolTipsfukushoku_satei["Japanese"]["zipper"] = "";
	$placeHoldersfukushoku_satei["Japanese"]["zipper"] = "";
	$fieldLabelsfukushoku_satei["Japanese"]["guarantee"] = "ギャランティ";
	$fieldToolTipsfukushoku_satei["Japanese"]["guarantee"] = "";
	$placeHoldersfukushoku_satei["Japanese"]["guarantee"] = "";
	$fieldLabelsfukushoku_satei["Japanese"]["errors"] = "真贋チェックエラー";
	$fieldToolTipsfukushoku_satei["Japanese"]["errors"] = "";
	$placeHoldersfukushoku_satei["Japanese"]["errors"] = "";
	$fieldLabelsfukushoku_satei["Japanese"]["amount"] = "内容量";
	$fieldToolTipsfukushoku_satei["Japanese"]["amount"] = "";
	$placeHoldersfukushoku_satei["Japanese"]["amount"] = "";
	$fieldLabelsfukushoku_satei["Japanese"]["satei_error"] = "査定抜けエラー";
	$fieldToolTipsfukushoku_satei["Japanese"]["satei_error"] = "";
	$placeHoldersfukushoku_satei["Japanese"]["satei_error"] = "";
	$fieldLabelsfukushoku_satei["Japanese"]["shape_supplement"] = "形状補足";
	$fieldToolTipsfukushoku_satei["Japanese"]["shape_supplement"] = "";
	$placeHoldersfukushoku_satei["Japanese"]["shape_supplement"] = "";
	$fieldLabelsfukushoku_satei["Japanese"]["product_style"] = "形状名";
	$fieldToolTipsfukushoku_satei["Japanese"]["product_style"] = "";
	$placeHoldersfukushoku_satei["Japanese"]["product_style"] = "";
	$fieldLabelsfukushoku_satei["Japanese"]["collar_neck_line"] = "襟・ネックライン";
	$fieldToolTipsfukushoku_satei["Japanese"]["collar_neck_line"] = "";
	$placeHoldersfukushoku_satei["Japanese"]["collar_neck_line"] = "";
	$fieldLabelsfukushoku_satei["Japanese"]["breast"] = "ブレスト";
	$fieldToolTipsfukushoku_satei["Japanese"]["breast"] = "";
	$placeHoldersfukushoku_satei["Japanese"]["breast"] = "";
	$fieldLabelsfukushoku_satei["Japanese"]["silhouette"] = "シルエット";
	$fieldToolTipsfukushoku_satei["Japanese"]["silhouette"] = "";
	$placeHoldersfukushoku_satei["Japanese"]["silhouette"] = "";
	$fieldLabelsfukushoku_satei["Japanese"]["sleeve"] = "スリーブ";
	$fieldToolTipsfukushoku_satei["Japanese"]["sleeve"] = "";
	$placeHoldersfukushoku_satei["Japanese"]["sleeve"] = "";
	$fieldLabelsfukushoku_satei["Japanese"]["hall_mark"] = "ホールマーク";
	$fieldToolTipsfukushoku_satei["Japanese"]["hall_mark"] = "";
	$placeHoldersfukushoku_satei["Japanese"]["hall_mark"] = "";
	$fieldLabelsfukushoku_satei["Japanese"]["plate"] = "プレート";
	$fieldToolTipsfukushoku_satei["Japanese"]["plate"] = "";
	$placeHoldersfukushoku_satei["Japanese"]["plate"] = "";
	$fieldLabelsfukushoku_satei["Japanese"]["toe"] = "トウ";
	$fieldToolTipsfukushoku_satei["Japanese"]["toe"] = "";
	$placeHoldersfukushoku_satei["Japanese"]["toe"] = "";
	$fieldLabelsfukushoku_satei["Japanese"]["heel"] = "ソール/ヒール";
	$fieldToolTipsfukushoku_satei["Japanese"]["heel"] = "";
	$placeHoldersfukushoku_satei["Japanese"]["heel"] = "";
	$fieldLabelsfukushoku_satei["Japanese"]["cloth"] = "生地";
	$fieldToolTipsfukushoku_satei["Japanese"]["cloth"] = "";
	$placeHoldersfukushoku_satei["Japanese"]["cloth"] = "";
	$fieldLabelsfukushoku_satei["Japanese"]["official_url"] = "オフィシャルURL";
	$fieldToolTipsfukushoku_satei["Japanese"]["official_url"] = "";
	$placeHoldersfukushoku_satei["Japanese"]["official_url"] = "";
	if (count($fieldToolTipsfukushoku_satei["Japanese"]))
		$tdatafukushoku_satei[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsfukushoku_satei[""] = array();
	$fieldToolTipsfukushoku_satei[""] = array();
	$placeHoldersfukushoku_satei[""] = array();
	$pageTitlesfukushoku_satei[""] = array();
	$fieldLabelsfukushoku_satei[""]["logo"] = "Logo";
	$fieldToolTipsfukushoku_satei[""]["logo"] = "";
	$placeHoldersfukushoku_satei[""]["logo"] = "";
	$fieldLabelsfukushoku_satei[""]["parts"] = "Parts";
	$fieldToolTipsfukushoku_satei[""]["parts"] = "";
	$placeHoldersfukushoku_satei[""]["parts"] = "";
	$fieldLabelsfukushoku_satei[""]["country_of_origin"] = "Country Of Origin";
	$fieldToolTipsfukushoku_satei[""]["country_of_origin"] = "";
	$placeHoldersfukushoku_satei[""]["country_of_origin"] = "";
	$fieldLabelsfukushoku_satei[""]["zipper"] = "Zipper";
	$fieldToolTipsfukushoku_satei[""]["zipper"] = "";
	$placeHoldersfukushoku_satei[""]["zipper"] = "";
	$fieldLabelsfukushoku_satei[""]["guarantee"] = "Guarantee";
	$fieldToolTipsfukushoku_satei[""]["guarantee"] = "";
	$placeHoldersfukushoku_satei[""]["guarantee"] = "";
	$fieldLabelsfukushoku_satei[""]["errors"] = "Errors";
	$fieldToolTipsfukushoku_satei[""]["errors"] = "";
	$placeHoldersfukushoku_satei[""]["errors"] = "";
	$fieldLabelsfukushoku_satei[""]["amount"] = "Amount";
	$fieldToolTipsfukushoku_satei[""]["amount"] = "";
	$placeHoldersfukushoku_satei[""]["amount"] = "";
	$fieldLabelsfukushoku_satei[""]["satei_error"] = "Satei Error";
	$fieldToolTipsfukushoku_satei[""]["satei_error"] = "";
	$placeHoldersfukushoku_satei[""]["satei_error"] = "";
	$fieldLabelsfukushoku_satei[""]["shape_supplement"] = "Shape Supplement";
	$fieldToolTipsfukushoku_satei[""]["shape_supplement"] = "";
	$placeHoldersfukushoku_satei[""]["shape_supplement"] = "";
	$fieldLabelsfukushoku_satei[""]["product_style"] = "Product Style";
	$fieldToolTipsfukushoku_satei[""]["product_style"] = "";
	$placeHoldersfukushoku_satei[""]["product_style"] = "";
	$fieldLabelsfukushoku_satei[""]["collar_neck_line"] = "Collar Neck Line";
	$fieldToolTipsfukushoku_satei[""]["collar_neck_line"] = "";
	$placeHoldersfukushoku_satei[""]["collar_neck_line"] = "";
	$fieldLabelsfukushoku_satei[""]["breast"] = "Breast";
	$fieldToolTipsfukushoku_satei[""]["breast"] = "";
	$placeHoldersfukushoku_satei[""]["breast"] = "";
	$fieldLabelsfukushoku_satei[""]["silhouette"] = "Silhouette";
	$fieldToolTipsfukushoku_satei[""]["silhouette"] = "";
	$placeHoldersfukushoku_satei[""]["silhouette"] = "";
	$fieldLabelsfukushoku_satei[""]["sleeve"] = "Sleeve";
	$fieldToolTipsfukushoku_satei[""]["sleeve"] = "";
	$placeHoldersfukushoku_satei[""]["sleeve"] = "";
	$fieldLabelsfukushoku_satei[""]["hall_mark"] = "Hall Mark";
	$fieldToolTipsfukushoku_satei[""]["hall_mark"] = "";
	$placeHoldersfukushoku_satei[""]["hall_mark"] = "";
	$fieldLabelsfukushoku_satei[""]["plate"] = "Plate";
	$fieldToolTipsfukushoku_satei[""]["plate"] = "";
	$placeHoldersfukushoku_satei[""]["plate"] = "";
	$fieldLabelsfukushoku_satei[""]["toe"] = "Toe";
	$fieldToolTipsfukushoku_satei[""]["toe"] = "";
	$placeHoldersfukushoku_satei[""]["toe"] = "";
	$fieldLabelsfukushoku_satei[""]["heel"] = "Heel";
	$fieldToolTipsfukushoku_satei[""]["heel"] = "";
	$placeHoldersfukushoku_satei[""]["heel"] = "";
	$fieldLabelsfukushoku_satei[""]["cloth"] = "Cloth";
	$fieldToolTipsfukushoku_satei[""]["cloth"] = "";
	$placeHoldersfukushoku_satei[""]["cloth"] = "";
	$fieldLabelsfukushoku_satei[""]["official_url"] = "Official Url";
	$fieldToolTipsfukushoku_satei[""]["official_url"] = "";
	$placeHoldersfukushoku_satei[""]["official_url"] = "";
	if (count($fieldToolTipsfukushoku_satei[""]))
		$tdatafukushoku_satei[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsfukushoku_satei["English"] = array();
	$fieldToolTipsfukushoku_satei["English"] = array();
	$placeHoldersfukushoku_satei["English"] = array();
	$pageTitlesfukushoku_satei["English"] = array();
	if (count($fieldToolTipsfukushoku_satei["English"]))
		$tdatafukushoku_satei[".isUseToolTips"] = true;
}


	$tdatafukushoku_satei[".NCSearch"] = true;



$tdatafukushoku_satei[".shortTableName"] = "fukushoku_satei";
$tdatafukushoku_satei[".nSecOptions"] = 0;
$tdatafukushoku_satei[".recsPerRowPrint"] = 1;
$tdatafukushoku_satei[".mainTableOwnerID"] = "";
$tdatafukushoku_satei[".moveNext"] = 1;
$tdatafukushoku_satei[".entityType"] = 1;

$tdatafukushoku_satei[".strOriginalTableName"] = "shouhin";

	



$tdatafukushoku_satei[".showAddInPopup"] = false;

$tdatafukushoku_satei[".showEditInPopup"] = false;

$tdatafukushoku_satei[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatafukushoku_satei[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatafukushoku_satei[".fieldsForRegister"] = array();

$tdatafukushoku_satei[".listAjax"] = false;

	$tdatafukushoku_satei[".audit"] = true;

	$tdatafukushoku_satei[".locking"] = false;



$tdatafukushoku_satei[".list"] = true;

$tdatafukushoku_satei[".inlineEdit"] = true;


$tdatafukushoku_satei[".reorderRecordsByHeader"] = true;
$tdatafukushoku_satei[".createSortByDropdown"] = true;
$tdatafukushoku_satei[".strSortControlSettingsJSON"] = "";



$tdatafukushoku_satei[".inlineAdd"] = true;

$tdatafukushoku_satei[".import"] = true;

$tdatafukushoku_satei[".exportTo"] = true;


$tdatafukushoku_satei[".delete"] = true;

$tdatafukushoku_satei[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatafukushoku_satei[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatafukushoku_satei[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatafukushoku_satei[".searchSaving"] = false;
//

$tdatafukushoku_satei[".showSearchPanel"] = true;
		$tdatafukushoku_satei[".flexibleSearch"] = true;

$tdatafukushoku_satei[".isUseAjaxSuggest"] = true;

$tdatafukushoku_satei[".rowHighlite"] = true;



																																																																																																					
					
					
					
					
					
															

$tdatafukushoku_satei[".ajaxCodeSnippetAdded"] = false;

$tdatafukushoku_satei[".buttonsAdded"] = true;

$tdatafukushoku_satei[".addPageEvents"] = true;

// use timepicker for search panel
$tdatafukushoku_satei[".isUseTimeForSearch"] = false;



$tdatafukushoku_satei[".badgeColor"] = "daa520";


$tdatafukushoku_satei[".allSearchFields"] = array();
$tdatafukushoku_satei[".filterFields"] = array();
$tdatafukushoku_satei[".requiredSearchFields"] = array();

$tdatafukushoku_satei[".allSearchFields"][] = "product_num";
	$tdatafukushoku_satei[".allSearchFields"][] = "category_id";
	$tdatafukushoku_satei[".allSearchFields"][] = "sub_category_id1";
	$tdatafukushoku_satei[".allSearchFields"][] = "yahoo_sex";
	$tdatafukushoku_satei[".allSearchFields"][] = "yahoo_condition2";
	$tdatafukushoku_satei[".allSearchFields"][] = "ecc_seq";
	$tdatafukushoku_satei[".allSearchFields"][] = "status";
	$tdatafukushoku_satei[".allSearchFields"][] = "satei_by";
	$tdatafukushoku_satei[".allSearchFields"][] = "title";
	$tdatafukushoku_satei[".allSearchFields"][] = "product_id";
	$tdatafukushoku_satei[".allSearchFields"][] = "yahoo_sinaban";
	$tdatafukushoku_satei[".allSearchFields"][] = "price";
	$tdatafukushoku_satei[".allSearchFields"][] = "sales_price";
	$tdatafukushoku_satei[".allSearchFields"][] = "description";
	$tdatafukushoku_satei[".allSearchFields"][] = "raku_hyoujisaki_category";
	$tdatafukushoku_satei[".allSearchFields"][] = "raku_hyoujisaki_category2";
	$tdatafukushoku_satei[".allSearchFields"][] = "raku_hyoujisaki_category3";
	$tdatafukushoku_satei[".allSearchFields"][] = "raku_hyoujisaki_category4";
	$tdatafukushoku_satei[".allSearchFields"][] = "raku_hyoujisaki_category5";
	$tdatafukushoku_satei[".allSearchFields"][] = "yahoo_kataban";
	$tdatafukushoku_satei[".allSearchFields"][] = "yahoo_sozai";
	$tdatafukushoku_satei[".allSearchFields"][] = "yahoo_color";
	$tdatafukushoku_satei[".allSearchFields"][] = "yahoo_size";
	$tdatafukushoku_satei[".allSearchFields"][] = "yahoo_condition1";
	$tdatafukushoku_satei[".allSearchFields"][] = "remark";
	$tdatafukushoku_satei[".allSearchFields"][] = "yahoo_fuzokuhin";
	$tdatafukushoku_satei[".allSearchFields"][] = "yahoo_sankou_uwadai";
	$tdatafukushoku_satei[".allSearchFields"][] = "season";
	$tdatafukushoku_satei[".allSearchFields"][] = "yahoo_title";
	$tdatafukushoku_satei[".allSearchFields"][] = "goods_title";
	$tdatafukushoku_satei[".allSearchFields"][] = "raku_title";
	$tdatafukushoku_satei[".allSearchFields"][] = "raku_tag_result";
	$tdatafukushoku_satei[".allSearchFields"][] = "search_keyword";
	$tdatafukushoku_satei[".allSearchFields"][] = "stamp";
	$tdatafukushoku_satei[".allSearchFields"][] = "Sleeve_Length";
	$tdatafukushoku_satei[".allSearchFields"][] = "length";
	$tdatafukushoku_satei[".allSearchFields"][] = "label_output_flag";
	$tdatafukushoku_satei[".allSearchFields"][] = "comment";
	$tdatafukushoku_satei[".allSearchFields"][] = "satei_hi";
	$tdatafukushoku_satei[".allSearchFields"][] = "Destination_selling";
	$tdatafukushoku_satei[".allSearchFields"][] = "Finish";
	$tdatafukushoku_satei[".allSearchFields"][] = "Discrimination";
	$tdatafukushoku_satei[".allSearchFields"][] = "accessories";
	$tdatafukushoku_satei[".allSearchFields"][] = "priority";
	$tdatafukushoku_satei[".allSearchFields"][] = "A_storage";
	$tdatafukushoku_satei[".allSearchFields"][] = "price_secret";
	$tdatafukushoku_satei[".allSearchFields"][] = "sales_price_secret";
	$tdatafukushoku_satei[".allSearchFields"][] = "line";
	$tdatafukushoku_satei[".allSearchFields"][] = "item_name";
	$tdatafukushoku_satei[".allSearchFields"][] = "handle";
	$tdatafukushoku_satei[".allSearchFields"][] = "serial_number";
	$tdatafukushoku_satei[".allSearchFields"][] = "logo";
	$tdatafukushoku_satei[".allSearchFields"][] = "parts";
	$tdatafukushoku_satei[".allSearchFields"][] = "country_of_origin";
	$tdatafukushoku_satei[".allSearchFields"][] = "zipper";
	$tdatafukushoku_satei[".allSearchFields"][] = "guarantee";
	$tdatafukushoku_satei[".allSearchFields"][] = "errors";
	$tdatafukushoku_satei[".allSearchFields"][] = "collar_neck_line";
	$tdatafukushoku_satei[".allSearchFields"][] = "product_style";
	$tdatafukushoku_satei[".allSearchFields"][] = "sleeve";
	$tdatafukushoku_satei[".allSearchFields"][] = "amount";
	$tdatafukushoku_satei[".allSearchFields"][] = "satei_error";
	$tdatafukushoku_satei[".allSearchFields"][] = "silhouette";
	$tdatafukushoku_satei[".allSearchFields"][] = "shape_supplement";
	$tdatafukushoku_satei[".allSearchFields"][] = "breast";
	$tdatafukushoku_satei[".allSearchFields"][] = "plate";
	$tdatafukushoku_satei[".allSearchFields"][] = "hall_mark";
	$tdatafukushoku_satei[".allSearchFields"][] = "toe";
	$tdatafukushoku_satei[".allSearchFields"][] = "cloth";
	$tdatafukushoku_satei[".allSearchFields"][] = "heel";
	

$tdatafukushoku_satei[".googleLikeFields"] = array();
$tdatafukushoku_satei[".googleLikeFields"][] = "product_id";
$tdatafukushoku_satei[".googleLikeFields"][] = "category_id";
$tdatafukushoku_satei[".googleLikeFields"][] = "goods_title";
$tdatafukushoku_satei[".googleLikeFields"][] = "title";
$tdatafukushoku_satei[".googleLikeFields"][] = "sub_category_id1";
$tdatafukushoku_satei[".googleLikeFields"][] = "price";
$tdatafukushoku_satei[".googleLikeFields"][] = "remark";
$tdatafukushoku_satei[".googleLikeFields"][] = "sales_price";
$tdatafukushoku_satei[".googleLikeFields"][] = "description";
$tdatafukushoku_satei[".googleLikeFields"][] = "status";
$tdatafukushoku_satei[".googleLikeFields"][] = "product_num";
$tdatafukushoku_satei[".googleLikeFields"][] = "yahoo_size";
$tdatafukushoku_satei[".googleLikeFields"][] = "yahoo_title";
$tdatafukushoku_satei[".googleLikeFields"][] = "yahoo_sankou_uwadai";
$tdatafukushoku_satei[".googleLikeFields"][] = "yahoo_sozai";
$tdatafukushoku_satei[".googleLikeFields"][] = "yahoo_color";
$tdatafukushoku_satei[".googleLikeFields"][] = "yahoo_kataban";
$tdatafukushoku_satei[".googleLikeFields"][] = "yahoo_condition1";
$tdatafukushoku_satei[".googleLikeFields"][] = "yahoo_condition2";
$tdatafukushoku_satei[".googleLikeFields"][] = "yahoo_fuzokuhin";
$tdatafukushoku_satei[".googleLikeFields"][] = "yahoo_sinaban";
$tdatafukushoku_satei[".googleLikeFields"][] = "yahoo_sex";
$tdatafukushoku_satei[".googleLikeFields"][] = "raku_title";
$tdatafukushoku_satei[".googleLikeFields"][] = "raku_hyoujisaki_category2";
$tdatafukushoku_satei[".googleLikeFields"][] = "raku_hyoujisaki_category";
$tdatafukushoku_satei[".googleLikeFields"][] = "raku_hyoujisaki_category3";
$tdatafukushoku_satei[".googleLikeFields"][] = "label_output_flag";
$tdatafukushoku_satei[".googleLikeFields"][] = "season";
$tdatafukushoku_satei[".googleLikeFields"][] = "satei_by";
$tdatafukushoku_satei[".googleLikeFields"][] = "comment";
$tdatafukushoku_satei[".googleLikeFields"][] = "satei_hi";
$tdatafukushoku_satei[".googleLikeFields"][] = "Destination_selling";
$tdatafukushoku_satei[".googleLikeFields"][] = "Finish";
$tdatafukushoku_satei[".googleLikeFields"][] = "Discrimination";
$tdatafukushoku_satei[".googleLikeFields"][] = "accessories";
$tdatafukushoku_satei[".googleLikeFields"][] = "priority";
$tdatafukushoku_satei[".googleLikeFields"][] = "A_storage";
$tdatafukushoku_satei[".googleLikeFields"][] = "price_secret";
$tdatafukushoku_satei[".googleLikeFields"][] = "sales_price_secret";
$tdatafukushoku_satei[".googleLikeFields"][] = "line";
$tdatafukushoku_satei[".googleLikeFields"][] = "item_name";
$tdatafukushoku_satei[".googleLikeFields"][] = "handle";
$tdatafukushoku_satei[".googleLikeFields"][] = "yahoo_color_id";
$tdatafukushoku_satei[".googleLikeFields"][] = "raku_hyoujisaki_category4";
$tdatafukushoku_satei[".googleLikeFields"][] = "raku_hyoujisaki_category5";
$tdatafukushoku_satei[".googleLikeFields"][] = "raku_tag_result";
$tdatafukushoku_satei[".googleLikeFields"][] = "serial_number";
$tdatafukushoku_satei[".googleLikeFields"][] = "search_keyword";
$tdatafukushoku_satei[".googleLikeFields"][] = "stamp";
$tdatafukushoku_satei[".googleLikeFields"][] = "Sleeve_Length";
$tdatafukushoku_satei[".googleLikeFields"][] = "length";
$tdatafukushoku_satei[".googleLikeFields"][] = "ecc_seq";
$tdatafukushoku_satei[".googleLikeFields"][] = "yahoo_junle";
$tdatafukushoku_satei[".googleLikeFields"][] = "logo";
$tdatafukushoku_satei[".googleLikeFields"][] = "parts";
$tdatafukushoku_satei[".googleLikeFields"][] = "country_of_origin";
$tdatafukushoku_satei[".googleLikeFields"][] = "zipper";
$tdatafukushoku_satei[".googleLikeFields"][] = "guarantee";
$tdatafukushoku_satei[".googleLikeFields"][] = "errors";
$tdatafukushoku_satei[".googleLikeFields"][] = "amount";
$tdatafukushoku_satei[".googleLikeFields"][] = "satei_error";
$tdatafukushoku_satei[".googleLikeFields"][] = "shape_supplement";
$tdatafukushoku_satei[".googleLikeFields"][] = "product_style";
$tdatafukushoku_satei[".googleLikeFields"][] = "collar_neck_line";
$tdatafukushoku_satei[".googleLikeFields"][] = "breast";
$tdatafukushoku_satei[".googleLikeFields"][] = "silhouette";
$tdatafukushoku_satei[".googleLikeFields"][] = "sleeve";
$tdatafukushoku_satei[".googleLikeFields"][] = "hall_mark";
$tdatafukushoku_satei[".googleLikeFields"][] = "plate";
$tdatafukushoku_satei[".googleLikeFields"][] = "toe";
$tdatafukushoku_satei[".googleLikeFields"][] = "heel";
$tdatafukushoku_satei[".googleLikeFields"][] = "cloth";
$tdatafukushoku_satei[".googleLikeFields"][] = "official_url";

$tdatafukushoku_satei[".panelSearchFields"] = array();
$tdatafukushoku_satei[".searchPanelOptions"] = array();
$tdatafukushoku_satei[".panelSearchFields"][] = "product_num";
	$tdatafukushoku_satei[".panelSearchFields"][] = "category_id";
	$tdatafukushoku_satei[".panelSearchFields"][] = "sub_category_id1";
	$tdatafukushoku_satei[".panelSearchFields"][] = "yahoo_sex";
	$tdatafukushoku_satei[".panelSearchFields"][] = "yahoo_condition2";
	
$tdatafukushoku_satei[".advSearchFields"] = array();
$tdatafukushoku_satei[".advSearchFields"][] = "product_num";
$tdatafukushoku_satei[".advSearchFields"][] = "category_id";
$tdatafukushoku_satei[".advSearchFields"][] = "sub_category_id1";
$tdatafukushoku_satei[".advSearchFields"][] = "yahoo_sex";
$tdatafukushoku_satei[".advSearchFields"][] = "yahoo_condition2";
$tdatafukushoku_satei[".advSearchFields"][] = "ecc_seq";
$tdatafukushoku_satei[".advSearchFields"][] = "status";
$tdatafukushoku_satei[".advSearchFields"][] = "satei_by";
$tdatafukushoku_satei[".advSearchFields"][] = "title";
$tdatafukushoku_satei[".advSearchFields"][] = "product_id";
$tdatafukushoku_satei[".advSearchFields"][] = "yahoo_sinaban";
$tdatafukushoku_satei[".advSearchFields"][] = "price";
$tdatafukushoku_satei[".advSearchFields"][] = "sales_price";
$tdatafukushoku_satei[".advSearchFields"][] = "description";
$tdatafukushoku_satei[".advSearchFields"][] = "raku_hyoujisaki_category";
$tdatafukushoku_satei[".advSearchFields"][] = "raku_hyoujisaki_category2";
$tdatafukushoku_satei[".advSearchFields"][] = "raku_hyoujisaki_category3";
$tdatafukushoku_satei[".advSearchFields"][] = "raku_hyoujisaki_category4";
$tdatafukushoku_satei[".advSearchFields"][] = "raku_hyoujisaki_category5";
$tdatafukushoku_satei[".advSearchFields"][] = "yahoo_kataban";
$tdatafukushoku_satei[".advSearchFields"][] = "yahoo_sozai";
$tdatafukushoku_satei[".advSearchFields"][] = "yahoo_color";
$tdatafukushoku_satei[".advSearchFields"][] = "yahoo_size";
$tdatafukushoku_satei[".advSearchFields"][] = "yahoo_condition1";
$tdatafukushoku_satei[".advSearchFields"][] = "remark";
$tdatafukushoku_satei[".advSearchFields"][] = "yahoo_fuzokuhin";
$tdatafukushoku_satei[".advSearchFields"][] = "yahoo_sankou_uwadai";
$tdatafukushoku_satei[".advSearchFields"][] = "season";
$tdatafukushoku_satei[".advSearchFields"][] = "yahoo_title";
$tdatafukushoku_satei[".advSearchFields"][] = "goods_title";
$tdatafukushoku_satei[".advSearchFields"][] = "raku_title";
$tdatafukushoku_satei[".advSearchFields"][] = "raku_tag_result";
$tdatafukushoku_satei[".advSearchFields"][] = "search_keyword";
$tdatafukushoku_satei[".advSearchFields"][] = "stamp";
$tdatafukushoku_satei[".advSearchFields"][] = "Sleeve_Length";
$tdatafukushoku_satei[".advSearchFields"][] = "length";
$tdatafukushoku_satei[".advSearchFields"][] = "label_output_flag";
$tdatafukushoku_satei[".advSearchFields"][] = "comment";
$tdatafukushoku_satei[".advSearchFields"][] = "satei_hi";
$tdatafukushoku_satei[".advSearchFields"][] = "Destination_selling";
$tdatafukushoku_satei[".advSearchFields"][] = "Finish";
$tdatafukushoku_satei[".advSearchFields"][] = "Discrimination";
$tdatafukushoku_satei[".advSearchFields"][] = "accessories";
$tdatafukushoku_satei[".advSearchFields"][] = "priority";
$tdatafukushoku_satei[".advSearchFields"][] = "A_storage";
$tdatafukushoku_satei[".advSearchFields"][] = "price_secret";
$tdatafukushoku_satei[".advSearchFields"][] = "sales_price_secret";
$tdatafukushoku_satei[".advSearchFields"][] = "line";
$tdatafukushoku_satei[".advSearchFields"][] = "item_name";
$tdatafukushoku_satei[".advSearchFields"][] = "handle";
$tdatafukushoku_satei[".advSearchFields"][] = "serial_number";
$tdatafukushoku_satei[".advSearchFields"][] = "logo";
$tdatafukushoku_satei[".advSearchFields"][] = "parts";
$tdatafukushoku_satei[".advSearchFields"][] = "country_of_origin";
$tdatafukushoku_satei[".advSearchFields"][] = "zipper";
$tdatafukushoku_satei[".advSearchFields"][] = "guarantee";
$tdatafukushoku_satei[".advSearchFields"][] = "errors";
$tdatafukushoku_satei[".advSearchFields"][] = "collar_neck_line";
$tdatafukushoku_satei[".advSearchFields"][] = "product_style";
$tdatafukushoku_satei[".advSearchFields"][] = "sleeve";
$tdatafukushoku_satei[".advSearchFields"][] = "amount";
$tdatafukushoku_satei[".advSearchFields"][] = "satei_error";
$tdatafukushoku_satei[".advSearchFields"][] = "silhouette";
$tdatafukushoku_satei[".advSearchFields"][] = "shape_supplement";
$tdatafukushoku_satei[".advSearchFields"][] = "breast";
$tdatafukushoku_satei[".advSearchFields"][] = "plate";
$tdatafukushoku_satei[".advSearchFields"][] = "hall_mark";
$tdatafukushoku_satei[".advSearchFields"][] = "toe";
$tdatafukushoku_satei[".advSearchFields"][] = "cloth";
$tdatafukushoku_satei[".advSearchFields"][] = "heel";

$tdatafukushoku_satei[".tableType"] = "list";

$tdatafukushoku_satei[".printerPageOrientation"] = 0;
$tdatafukushoku_satei[".nPrinterPageScale"] = 100;

$tdatafukushoku_satei[".nPrinterSplitRecords"] = 40;

$tdatafukushoku_satei[".nPrinterPDFSplitRecords"] = 40;



$tdatafukushoku_satei[".geocodingEnabled"] = false;





$tdatafukushoku_satei[".listGridLayout"] = 3;





// view page pdf

// print page pdf

$tdatafukushoku_satei[".totalsFields"] = array();
$tdatafukushoku_satei[".totalsFields"][] = array(
	"fName" => "price",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');

$tdatafukushoku_satei[".pageSize"] = 20;

$tdatafukushoku_satei[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `shouhin`.`product_id` DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatafukushoku_satei[".strOrderBy"] = $tstrOrderBy;

$tdatafukushoku_satei[".orderindexes"] = array();
$tdatafukushoku_satei[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "`shouhin`.`product_id`");

$tdatafukushoku_satei[".sqlHead"] = "SELECT `shouhin`.`product_id`,  `shouhin`.`category_id`,  `shouhin`.`goods_title`,  `shouhin`.`title`,  `shouhin`.`sub_category_id1`,  `shouhin`.`ecc_id`,  `shouhin`.`price`,  `shouhin`.`yahoo`,  `shouhin`.`remark`,  `shouhin`.`sales_price`,  `shouhin`.`description`,  `shouhin`.`status`,  `shouhin`.`product_num`,  `shouhin`.`yahoo_size`,  `shouhin`.`yahoo_title`,  `shouhin`.`yahoo_sankou_uwadai`,  `shouhin`.`yahoo_sozai`,  `shouhin`.`yahoo_color`,  `shouhin`.`yahoo_kataban`,  `shouhin`.`yahoo_condition1`,  `shouhin`.`yahoo_condition2`,  `shouhin`.`yahoo_fuzokuhin`,  `shouhin`.`yahoo_sinaban`,  `shouhin`.`yahoo_saisun_sha`,  `shouhin`.`yahoo_sex`,  `shouhin`.`box_id`,  `shouhin`.`nyuukin_price`,  `shouhin`.`updated_by`,  `shouhin`.`raku_title`,  `shouhin`.`raku_hyoujisaki_category2`,  `shouhin`.`raku_hyoujisaki_category`,  `shouhin`.`raku_hyoujisaki_category3`,  `shouhin`.`timesta`,  `shouhin`.`saisun_start`,  `shouhin`.`saisun_end`,  `shouhin`.`label_output_flag`,  `shouhin`.`season`,  `shouhin`.`kanryou_henbi`,  `shouhin`.`box_sort`,  `shouhin`.`satei_by`,  `shouhin`.`kaitori_by`,  `shouhin`.`comment`,  `shouhin`.`satei_hi`,  `shouhin`.`kaitory_hi`,  `shouhin`.`REG_PHOTOGRAPHER`,  `shouhin`.`REG_PACKINGS`,  `shouhin`.`REG_KAKOU_DATE`,  `shouhin`.`REG_KAKOU`,  `shouhin`.`REG_EXHIBITOR`,  `shouhin`.`REG_PHOTOGRAPHER_DATE`,  `shouhin`.`DT_PACKING_DATE`,  `shouhin`.`DT_UP_DATE`,  `shouhin`.`AWAZU_DATE`,  `shouhin`.`AWAZU_NIN`,  `shouhin`.`sabun_date`,  `shouhin`.`browseid`,  `shouhin`.`browsenode`,  `shouhin`.`Destination_selling`,  `shouhin`.`Finish`,  `shouhin`.`Discrimination`,  `shouhin`.`accessories`,  `shouhin`.`priority`,  `shouhin`.`A_storage`,  `shouhin`.`price_secret`,  `shouhin`.`sales_price_secret`,  `shouhin`.`eq`,  `shouhin`.`en`,  `shouhin`.`line`,  `shouhin`.`item_name`,  `shouhin`.`handle`,  `shouhin`.`yahoo_color_id`,  `shouhin`.`raku_hyoujisaki_category4`,  `shouhin`.`raku_hyoujisaki_category5`,  `shouhin`.`raku_dir_1`,  `shouhin`.`raku_dir_2`,  `shouhin`.`raku_dir_3`,  `shouhin`.`raku_dir_4`,  `shouhin`.`raku_dir_5`,  `shouhin`.`raku_dir_result`,  `shouhin`.`raku_tag_result`,  `shouhin`.`serial_number`,  `shouhin`.`Exhibition_Date`,  `shouhin`.`search_keyword`,  `shouhin`.`stamp`,  `shouhin`.`Sleeve_Length`,  `shouhin`.`length`,  `shouhin`.`price_for_site`,  `shouhin`.`yahoo_category_id`,  `shouhin`.`Qty`,  `shouhin`.`sales_period`,  `shouhin`.`starting_price`,  `Eoc`.`ecc_seq`,  `shouhin`.`yahoo_junle`,  `shouhin`.`logo`,  `shouhin`.`parts`,  `shouhin`.`country_of_origin`,  `shouhin`.`zipper`,  `shouhin`.`guarantee`,  `shouhin`.`errors`,  `shouhin`.`amount`,  `shouhin`.`satei_error`,  `shouhin`.`shape_supplement`,  `shouhin`.`product_style`,  `shouhin`.`collar_neck_line`,  `shouhin`.`breast`,  `shouhin`.`silhouette`,  `shouhin`.`sleeve`,  `shouhin`.`hall_mark`,  `shouhin`.`plate`,  `shouhin`.`toe`,  `shouhin`.`heel`,  `shouhin`.`cloth`,  `shouhin`.`official_url`";
$tdatafukushoku_satei[".sqlFrom"] = "FROM `shouhin`  LEFT OUTER JOIN `Eoc` ON `shouhin`.`ecc_id` = `Eoc`.`ecc_id`";
$tdatafukushoku_satei[".sqlWhereExpr"] = "(`shouhin`.`status` =32)";
$tdatafukushoku_satei[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatafukushoku_satei[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatafukushoku_satei[".arrGroupsPerPage"] = $arrGPP;

$tdatafukushoku_satei[".highlightSearchResults"] = true;

$tableKeysfukushoku_satei = array();
$tableKeysfukushoku_satei[] = "product_id";
$tdatafukushoku_satei[".Keys"] = $tableKeysfukushoku_satei;

$tdatafukushoku_satei[".listFields"] = array();
$tdatafukushoku_satei[".listFields"][] = "label_output_flag";
$tdatafukushoku_satei[".listFields"][] = "status";
$tdatafukushoku_satei[".listFields"][] = "product_id";
$tdatafukushoku_satei[".listFields"][] = "product_num";
$tdatafukushoku_satei[".listFields"][] = "category_id";
$tdatafukushoku_satei[".listFields"][] = "sub_category_id1";
$tdatafukushoku_satei[".listFields"][] = "yahoo_sex";
$tdatafukushoku_satei[".listFields"][] = "yahoo_condition2";
$tdatafukushoku_satei[".listFields"][] = "logo";
$tdatafukushoku_satei[".listFields"][] = "parts";
$tdatafukushoku_satei[".listFields"][] = "guarantee";
$tdatafukushoku_satei[".listFields"][] = "country_of_origin";
$tdatafukushoku_satei[".listFields"][] = "serial_number";
$tdatafukushoku_satei[".listFields"][] = "zipper";
$tdatafukushoku_satei[".listFields"][] = "line";
$tdatafukushoku_satei[".listFields"][] = "item_name";
$tdatafukushoku_satei[".listFields"][] = "shape_supplement";
$tdatafukushoku_satei[".listFields"][] = "product_style";
$tdatafukushoku_satei[".listFields"][] = "yahoo_sozai";
$tdatafukushoku_satei[".listFields"][] = "toe";
$tdatafukushoku_satei[".listFields"][] = "heel";
$tdatafukushoku_satei[".listFields"][] = "cloth";
$tdatafukushoku_satei[".listFields"][] = "Sleeve_Length";
$tdatafukushoku_satei[".listFields"][] = "collar_neck_line";
$tdatafukushoku_satei[".listFields"][] = "breast";
$tdatafukushoku_satei[".listFields"][] = "handle";
$tdatafukushoku_satei[".listFields"][] = "silhouette";
$tdatafukushoku_satei[".listFields"][] = "sleeve";
$tdatafukushoku_satei[".listFields"][] = "length";
$tdatafukushoku_satei[".listFields"][] = "amount";
$tdatafukushoku_satei[".listFields"][] = "hall_mark";
$tdatafukushoku_satei[".listFields"][] = "plate";
$tdatafukushoku_satei[".listFields"][] = "yahoo_color";
$tdatafukushoku_satei[".listFields"][] = "yahoo_kataban";
$tdatafukushoku_satei[".listFields"][] = "stamp";
$tdatafukushoku_satei[".listFields"][] = "price";
$tdatafukushoku_satei[".listFields"][] = "comment";
$tdatafukushoku_satei[".listFields"][] = "sales_price";
$tdatafukushoku_satei[".listFields"][] = "yahoo_sankou_uwadai";
$tdatafukushoku_satei[".listFields"][] = "description";
$tdatafukushoku_satei[".listFields"][] = "Destination_selling";
$tdatafukushoku_satei[".listFields"][] = "Finish";
$tdatafukushoku_satei[".listFields"][] = "Discrimination";
$tdatafukushoku_satei[".listFields"][] = "accessories";
$tdatafukushoku_satei[".listFields"][] = "priority";
$tdatafukushoku_satei[".listFields"][] = "A_storage";
$tdatafukushoku_satei[".listFields"][] = "satei_by";
$tdatafukushoku_satei[".listFields"][] = "satei_hi";
$tdatafukushoku_satei[".listFields"][] = "price_secret";
$tdatafukushoku_satei[".listFields"][] = "sales_price_secret";
$tdatafukushoku_satei[".listFields"][] = "errors";
$tdatafukushoku_satei[".listFields"][] = "satei_error";

$tdatafukushoku_satei[".hideMobileList"] = array();


$tdatafukushoku_satei[".viewFields"] = array();

$tdatafukushoku_satei[".addFields"] = array();

$tdatafukushoku_satei[".masterListFields"] = array();
$tdatafukushoku_satei[".masterListFields"][] = "ecc_seq";
$tdatafukushoku_satei[".masterListFields"][] = "yahoo_junle";
$tdatafukushoku_satei[".masterListFields"][] = "logo";
$tdatafukushoku_satei[".masterListFields"][] = "parts";
$tdatafukushoku_satei[".masterListFields"][] = "country_of_origin";
$tdatafukushoku_satei[".masterListFields"][] = "zipper";
$tdatafukushoku_satei[".masterListFields"][] = "guarantee";
$tdatafukushoku_satei[".masterListFields"][] = "errors";
$tdatafukushoku_satei[".masterListFields"][] = "amount";
$tdatafukushoku_satei[".masterListFields"][] = "satei_error";
$tdatafukushoku_satei[".masterListFields"][] = "shape_supplement";
$tdatafukushoku_satei[".masterListFields"][] = "product_style";
$tdatafukushoku_satei[".masterListFields"][] = "collar_neck_line";
$tdatafukushoku_satei[".masterListFields"][] = "breast";
$tdatafukushoku_satei[".masterListFields"][] = "silhouette";
$tdatafukushoku_satei[".masterListFields"][] = "sleeve";
$tdatafukushoku_satei[".masterListFields"][] = "hall_mark";
$tdatafukushoku_satei[".masterListFields"][] = "plate";
$tdatafukushoku_satei[".masterListFields"][] = "toe";
$tdatafukushoku_satei[".masterListFields"][] = "heel";
$tdatafukushoku_satei[".masterListFields"][] = "cloth";
$tdatafukushoku_satei[".masterListFields"][] = "official_url";
$tdatafukushoku_satei[".masterListFields"][] = "status";
$tdatafukushoku_satei[".masterListFields"][] = "satei_by";
$tdatafukushoku_satei[".masterListFields"][] = "category_id";
$tdatafukushoku_satei[".masterListFields"][] = "title";
$tdatafukushoku_satei[".masterListFields"][] = "sub_category_id1";
$tdatafukushoku_satei[".masterListFields"][] = "product_id";
$tdatafukushoku_satei[".masterListFields"][] = "ecc_id";
$tdatafukushoku_satei[".masterListFields"][] = "yahoo";
$tdatafukushoku_satei[".masterListFields"][] = "yahoo_sinaban";
$tdatafukushoku_satei[".masterListFields"][] = "price";
$tdatafukushoku_satei[".masterListFields"][] = "sales_price";
$tdatafukushoku_satei[".masterListFields"][] = "yahoo_sex";
$tdatafukushoku_satei[".masterListFields"][] = "product_num";
$tdatafukushoku_satei[".masterListFields"][] = "description";
$tdatafukushoku_satei[".masterListFields"][] = "raku_hyoujisaki_category";
$tdatafukushoku_satei[".masterListFields"][] = "raku_hyoujisaki_category2";
$tdatafukushoku_satei[".masterListFields"][] = "raku_hyoujisaki_category3";
$tdatafukushoku_satei[".masterListFields"][] = "raku_hyoujisaki_category4";
$tdatafukushoku_satei[".masterListFields"][] = "raku_hyoujisaki_category5";
$tdatafukushoku_satei[".masterListFields"][] = "yahoo_kataban";
$tdatafukushoku_satei[".masterListFields"][] = "yahoo_sozai";
$tdatafukushoku_satei[".masterListFields"][] = "yahoo_color";
$tdatafukushoku_satei[".masterListFields"][] = "yahoo_size";
$tdatafukushoku_satei[".masterListFields"][] = "yahoo_condition1";
$tdatafukushoku_satei[".masterListFields"][] = "yahoo_condition2";
$tdatafukushoku_satei[".masterListFields"][] = "remark";
$tdatafukushoku_satei[".masterListFields"][] = "yahoo_fuzokuhin";
$tdatafukushoku_satei[".masterListFields"][] = "yahoo_sankou_uwadai";
$tdatafukushoku_satei[".masterListFields"][] = "yahoo_saisun_sha";
$tdatafukushoku_satei[".masterListFields"][] = "season";
$tdatafukushoku_satei[".masterListFields"][] = "yahoo_title";
$tdatafukushoku_satei[".masterListFields"][] = "box_id";
$tdatafukushoku_satei[".masterListFields"][] = "goods_title";
$tdatafukushoku_satei[".masterListFields"][] = "nyuukin_price";
$tdatafukushoku_satei[".masterListFields"][] = "updated_by";
$tdatafukushoku_satei[".masterListFields"][] = "raku_title";
$tdatafukushoku_satei[".masterListFields"][] = "raku_tag_result";
$tdatafukushoku_satei[".masterListFields"][] = "search_keyword";
$tdatafukushoku_satei[".masterListFields"][] = "stamp";
$tdatafukushoku_satei[".masterListFields"][] = "timesta";
$tdatafukushoku_satei[".masterListFields"][] = "saisun_start";
$tdatafukushoku_satei[".masterListFields"][] = "Sleeve_Length";
$tdatafukushoku_satei[".masterListFields"][] = "saisun_end";
$tdatafukushoku_satei[".masterListFields"][] = "length";
$tdatafukushoku_satei[".masterListFields"][] = "label_output_flag";
$tdatafukushoku_satei[".masterListFields"][] = "price_for_site";
$tdatafukushoku_satei[".masterListFields"][] = "kanryou_henbi";
$tdatafukushoku_satei[".masterListFields"][] = "yahoo_category_id";
$tdatafukushoku_satei[".masterListFields"][] = "box_sort";
$tdatafukushoku_satei[".masterListFields"][] = "Qty";
$tdatafukushoku_satei[".masterListFields"][] = "sales_period";
$tdatafukushoku_satei[".masterListFields"][] = "kaitori_by";
$tdatafukushoku_satei[".masterListFields"][] = "starting_price";
$tdatafukushoku_satei[".masterListFields"][] = "comment";
$tdatafukushoku_satei[".masterListFields"][] = "satei_hi";
$tdatafukushoku_satei[".masterListFields"][] = "kaitory_hi";
$tdatafukushoku_satei[".masterListFields"][] = "REG_PHOTOGRAPHER";
$tdatafukushoku_satei[".masterListFields"][] = "REG_PACKINGS";
$tdatafukushoku_satei[".masterListFields"][] = "REG_KAKOU_DATE";
$tdatafukushoku_satei[".masterListFields"][] = "REG_KAKOU";
$tdatafukushoku_satei[".masterListFields"][] = "REG_EXHIBITOR";
$tdatafukushoku_satei[".masterListFields"][] = "REG_PHOTOGRAPHER_DATE";
$tdatafukushoku_satei[".masterListFields"][] = "DT_PACKING_DATE";
$tdatafukushoku_satei[".masterListFields"][] = "DT_UP_DATE";
$tdatafukushoku_satei[".masterListFields"][] = "AWAZU_DATE";
$tdatafukushoku_satei[".masterListFields"][] = "AWAZU_NIN";
$tdatafukushoku_satei[".masterListFields"][] = "sabun_date";
$tdatafukushoku_satei[".masterListFields"][] = "browseid";
$tdatafukushoku_satei[".masterListFields"][] = "browsenode";
$tdatafukushoku_satei[".masterListFields"][] = "Destination_selling";
$tdatafukushoku_satei[".masterListFields"][] = "Finish";
$tdatafukushoku_satei[".masterListFields"][] = "Discrimination";
$tdatafukushoku_satei[".masterListFields"][] = "accessories";
$tdatafukushoku_satei[".masterListFields"][] = "priority";
$tdatafukushoku_satei[".masterListFields"][] = "A_storage";
$tdatafukushoku_satei[".masterListFields"][] = "price_secret";
$tdatafukushoku_satei[".masterListFields"][] = "sales_price_secret";
$tdatafukushoku_satei[".masterListFields"][] = "eq";
$tdatafukushoku_satei[".masterListFields"][] = "en";
$tdatafukushoku_satei[".masterListFields"][] = "line";
$tdatafukushoku_satei[".masterListFields"][] = "item_name";
$tdatafukushoku_satei[".masterListFields"][] = "handle";
$tdatafukushoku_satei[".masterListFields"][] = "yahoo_color_id";
$tdatafukushoku_satei[".masterListFields"][] = "raku_dir_1";
$tdatafukushoku_satei[".masterListFields"][] = "raku_dir_2";
$tdatafukushoku_satei[".masterListFields"][] = "raku_dir_3";
$tdatafukushoku_satei[".masterListFields"][] = "raku_dir_4";
$tdatafukushoku_satei[".masterListFields"][] = "raku_dir_5";
$tdatafukushoku_satei[".masterListFields"][] = "raku_dir_result";
$tdatafukushoku_satei[".masterListFields"][] = "serial_number";
$tdatafukushoku_satei[".masterListFields"][] = "Exhibition_Date";

$tdatafukushoku_satei[".inlineAddFields"] = array();
$tdatafukushoku_satei[".inlineAddFields"][] = "label_output_flag";
$tdatafukushoku_satei[".inlineAddFields"][] = "status";
$tdatafukushoku_satei[".inlineAddFields"][] = "product_num";
$tdatafukushoku_satei[".inlineAddFields"][] = "category_id";
$tdatafukushoku_satei[".inlineAddFields"][] = "sub_category_id1";
$tdatafukushoku_satei[".inlineAddFields"][] = "yahoo_sex";
$tdatafukushoku_satei[".inlineAddFields"][] = "yahoo_condition2";
$tdatafukushoku_satei[".inlineAddFields"][] = "logo";
$tdatafukushoku_satei[".inlineAddFields"][] = "parts";
$tdatafukushoku_satei[".inlineAddFields"][] = "guarantee";
$tdatafukushoku_satei[".inlineAddFields"][] = "country_of_origin";
$tdatafukushoku_satei[".inlineAddFields"][] = "serial_number";
$tdatafukushoku_satei[".inlineAddFields"][] = "zipper";
$tdatafukushoku_satei[".inlineAddFields"][] = "line";
$tdatafukushoku_satei[".inlineAddFields"][] = "item_name";
$tdatafukushoku_satei[".inlineAddFields"][] = "shape_supplement";
$tdatafukushoku_satei[".inlineAddFields"][] = "product_style";
$tdatafukushoku_satei[".inlineAddFields"][] = "yahoo_sozai";
$tdatafukushoku_satei[".inlineAddFields"][] = "toe";
$tdatafukushoku_satei[".inlineAddFields"][] = "heel";
$tdatafukushoku_satei[".inlineAddFields"][] = "cloth";
$tdatafukushoku_satei[".inlineAddFields"][] = "Sleeve_Length";
$tdatafukushoku_satei[".inlineAddFields"][] = "collar_neck_line";
$tdatafukushoku_satei[".inlineAddFields"][] = "breast";
$tdatafukushoku_satei[".inlineAddFields"][] = "handle";
$tdatafukushoku_satei[".inlineAddFields"][] = "silhouette";
$tdatafukushoku_satei[".inlineAddFields"][] = "sleeve";
$tdatafukushoku_satei[".inlineAddFields"][] = "length";
$tdatafukushoku_satei[".inlineAddFields"][] = "amount";
$tdatafukushoku_satei[".inlineAddFields"][] = "hall_mark";
$tdatafukushoku_satei[".inlineAddFields"][] = "plate";
$tdatafukushoku_satei[".inlineAddFields"][] = "yahoo_color";
$tdatafukushoku_satei[".inlineAddFields"][] = "yahoo_kataban";
$tdatafukushoku_satei[".inlineAddFields"][] = "stamp";
$tdatafukushoku_satei[".inlineAddFields"][] = "price";
$tdatafukushoku_satei[".inlineAddFields"][] = "comment";
$tdatafukushoku_satei[".inlineAddFields"][] = "sales_price";
$tdatafukushoku_satei[".inlineAddFields"][] = "yahoo_sankou_uwadai";
$tdatafukushoku_satei[".inlineAddFields"][] = "description";
$tdatafukushoku_satei[".inlineAddFields"][] = "Destination_selling";
$tdatafukushoku_satei[".inlineAddFields"][] = "Finish";
$tdatafukushoku_satei[".inlineAddFields"][] = "Discrimination";
$tdatafukushoku_satei[".inlineAddFields"][] = "accessories";
$tdatafukushoku_satei[".inlineAddFields"][] = "priority";
$tdatafukushoku_satei[".inlineAddFields"][] = "A_storage";
$tdatafukushoku_satei[".inlineAddFields"][] = "price_secret";
$tdatafukushoku_satei[".inlineAddFields"][] = "sales_price_secret";
$tdatafukushoku_satei[".inlineAddFields"][] = "errors";

$tdatafukushoku_satei[".editFields"] = array();

$tdatafukushoku_satei[".inlineEditFields"] = array();
$tdatafukushoku_satei[".inlineEditFields"][] = "label_output_flag";
$tdatafukushoku_satei[".inlineEditFields"][] = "status";
$tdatafukushoku_satei[".inlineEditFields"][] = "product_num";
$tdatafukushoku_satei[".inlineEditFields"][] = "category_id";
$tdatafukushoku_satei[".inlineEditFields"][] = "sub_category_id1";
$tdatafukushoku_satei[".inlineEditFields"][] = "yahoo_sex";
$tdatafukushoku_satei[".inlineEditFields"][] = "yahoo_condition2";
$tdatafukushoku_satei[".inlineEditFields"][] = "logo";
$tdatafukushoku_satei[".inlineEditFields"][] = "parts";
$tdatafukushoku_satei[".inlineEditFields"][] = "guarantee";
$tdatafukushoku_satei[".inlineEditFields"][] = "country_of_origin";
$tdatafukushoku_satei[".inlineEditFields"][] = "serial_number";
$tdatafukushoku_satei[".inlineEditFields"][] = "zipper";
$tdatafukushoku_satei[".inlineEditFields"][] = "line";
$tdatafukushoku_satei[".inlineEditFields"][] = "item_name";
$tdatafukushoku_satei[".inlineEditFields"][] = "shape_supplement";
$tdatafukushoku_satei[".inlineEditFields"][] = "product_style";
$tdatafukushoku_satei[".inlineEditFields"][] = "yahoo_sozai";
$tdatafukushoku_satei[".inlineEditFields"][] = "toe";
$tdatafukushoku_satei[".inlineEditFields"][] = "heel";
$tdatafukushoku_satei[".inlineEditFields"][] = "cloth";
$tdatafukushoku_satei[".inlineEditFields"][] = "Sleeve_Length";
$tdatafukushoku_satei[".inlineEditFields"][] = "collar_neck_line";
$tdatafukushoku_satei[".inlineEditFields"][] = "breast";
$tdatafukushoku_satei[".inlineEditFields"][] = "handle";
$tdatafukushoku_satei[".inlineEditFields"][] = "silhouette";
$tdatafukushoku_satei[".inlineEditFields"][] = "sleeve";
$tdatafukushoku_satei[".inlineEditFields"][] = "length";
$tdatafukushoku_satei[".inlineEditFields"][] = "amount";
$tdatafukushoku_satei[".inlineEditFields"][] = "hall_mark";
$tdatafukushoku_satei[".inlineEditFields"][] = "plate";
$tdatafukushoku_satei[".inlineEditFields"][] = "yahoo_color";
$tdatafukushoku_satei[".inlineEditFields"][] = "yahoo_kataban";
$tdatafukushoku_satei[".inlineEditFields"][] = "stamp";
$tdatafukushoku_satei[".inlineEditFields"][] = "price";
$tdatafukushoku_satei[".inlineEditFields"][] = "comment";
$tdatafukushoku_satei[".inlineEditFields"][] = "sales_price";
$tdatafukushoku_satei[".inlineEditFields"][] = "yahoo_sankou_uwadai";
$tdatafukushoku_satei[".inlineEditFields"][] = "description";
$tdatafukushoku_satei[".inlineEditFields"][] = "Destination_selling";
$tdatafukushoku_satei[".inlineEditFields"][] = "Finish";
$tdatafukushoku_satei[".inlineEditFields"][] = "Discrimination";
$tdatafukushoku_satei[".inlineEditFields"][] = "accessories";
$tdatafukushoku_satei[".inlineEditFields"][] = "priority";
$tdatafukushoku_satei[".inlineEditFields"][] = "A_storage";
$tdatafukushoku_satei[".inlineEditFields"][] = "price_secret";
$tdatafukushoku_satei[".inlineEditFields"][] = "sales_price_secret";
$tdatafukushoku_satei[".inlineEditFields"][] = "errors";

$tdatafukushoku_satei[".updateSelectedFields"] = array();


$tdatafukushoku_satei[".exportFields"] = array();
$tdatafukushoku_satei[".exportFields"][] = "label_output_flag";
$tdatafukushoku_satei[".exportFields"][] = "status";
$tdatafukushoku_satei[".exportFields"][] = "product_id";
$tdatafukushoku_satei[".exportFields"][] = "yahoo_junle";
$tdatafukushoku_satei[".exportFields"][] = "category_id";
$tdatafukushoku_satei[".exportFields"][] = "sub_category_id1";
$tdatafukushoku_satei[".exportFields"][] = "yahoo_sex";
$tdatafukushoku_satei[".exportFields"][] = "yahoo_condition2";
$tdatafukushoku_satei[".exportFields"][] = "logo";
$tdatafukushoku_satei[".exportFields"][] = "parts";
$tdatafukushoku_satei[".exportFields"][] = "country_of_origin";
$tdatafukushoku_satei[".exportFields"][] = "serial_number";
$tdatafukushoku_satei[".exportFields"][] = "zipper";
$tdatafukushoku_satei[".exportFields"][] = "guarantee";
$tdatafukushoku_satei[".exportFields"][] = "line";
$tdatafukushoku_satei[".exportFields"][] = "item_name";
$tdatafukushoku_satei[".exportFields"][] = "shape_supplement";
$tdatafukushoku_satei[".exportFields"][] = "product_style";
$tdatafukushoku_satei[".exportFields"][] = "yahoo_sozai";
$tdatafukushoku_satei[".exportFields"][] = "toe";
$tdatafukushoku_satei[".exportFields"][] = "heel";
$tdatafukushoku_satei[".exportFields"][] = "cloth";
$tdatafukushoku_satei[".exportFields"][] = "Sleeve_Length";
$tdatafukushoku_satei[".exportFields"][] = "collar_neck_line";
$tdatafukushoku_satei[".exportFields"][] = "breast";
$tdatafukushoku_satei[".exportFields"][] = "handle";
$tdatafukushoku_satei[".exportFields"][] = "silhouette";
$tdatafukushoku_satei[".exportFields"][] = "sleeve";
$tdatafukushoku_satei[".exportFields"][] = "length";
$tdatafukushoku_satei[".exportFields"][] = "amount";
$tdatafukushoku_satei[".exportFields"][] = "hall_mark";
$tdatafukushoku_satei[".exportFields"][] = "plate";
$tdatafukushoku_satei[".exportFields"][] = "yahoo_color";
$tdatafukushoku_satei[".exportFields"][] = "yahoo_kataban";
$tdatafukushoku_satei[".exportFields"][] = "stamp";
$tdatafukushoku_satei[".exportFields"][] = "eq";
$tdatafukushoku_satei[".exportFields"][] = "price";
$tdatafukushoku_satei[".exportFields"][] = "en";
$tdatafukushoku_satei[".exportFields"][] = "comment";
$tdatafukushoku_satei[".exportFields"][] = "sales_price";
$tdatafukushoku_satei[".exportFields"][] = "yahoo_sankou_uwadai";
$tdatafukushoku_satei[".exportFields"][] = "description";
$tdatafukushoku_satei[".exportFields"][] = "Destination_selling";
$tdatafukushoku_satei[".exportFields"][] = "Finish";
$tdatafukushoku_satei[".exportFields"][] = "Discrimination";
$tdatafukushoku_satei[".exportFields"][] = "accessories";
$tdatafukushoku_satei[".exportFields"][] = "priority";
$tdatafukushoku_satei[".exportFields"][] = "A_storage";
$tdatafukushoku_satei[".exportFields"][] = "satei_by";
$tdatafukushoku_satei[".exportFields"][] = "satei_hi";
$tdatafukushoku_satei[".exportFields"][] = "price_secret";
$tdatafukushoku_satei[".exportFields"][] = "sales_price_secret";
$tdatafukushoku_satei[".exportFields"][] = "product_num";
$tdatafukushoku_satei[".exportFields"][] = "errors";
$tdatafukushoku_satei[".exportFields"][] = "satei_error";

$tdatafukushoku_satei[".importFields"] = array();
$tdatafukushoku_satei[".importFields"][] = "product_id";
$tdatafukushoku_satei[".importFields"][] = "category_id";
$tdatafukushoku_satei[".importFields"][] = "sub_category_id1";
$tdatafukushoku_satei[".importFields"][] = "price";
$tdatafukushoku_satei[".importFields"][] = "sales_price";
$tdatafukushoku_satei[".importFields"][] = "description";
$tdatafukushoku_satei[".importFields"][] = "status";
$tdatafukushoku_satei[".importFields"][] = "product_num";
$tdatafukushoku_satei[".importFields"][] = "yahoo_sankou_uwadai";
$tdatafukushoku_satei[".importFields"][] = "yahoo_sozai";
$tdatafukushoku_satei[".importFields"][] = "yahoo_color";
$tdatafukushoku_satei[".importFields"][] = "yahoo_kataban";
$tdatafukushoku_satei[".importFields"][] = "yahoo_condition2";
$tdatafukushoku_satei[".importFields"][] = "yahoo_sex";
$tdatafukushoku_satei[".importFields"][] = "label_output_flag";
$tdatafukushoku_satei[".importFields"][] = "satei_by";
$tdatafukushoku_satei[".importFields"][] = "comment";
$tdatafukushoku_satei[".importFields"][] = "satei_hi";
$tdatafukushoku_satei[".importFields"][] = "Destination_selling";
$tdatafukushoku_satei[".importFields"][] = "Finish";
$tdatafukushoku_satei[".importFields"][] = "Discrimination";
$tdatafukushoku_satei[".importFields"][] = "accessories";
$tdatafukushoku_satei[".importFields"][] = "priority";
$tdatafukushoku_satei[".importFields"][] = "A_storage";
$tdatafukushoku_satei[".importFields"][] = "price_secret";
$tdatafukushoku_satei[".importFields"][] = "sales_price_secret";
$tdatafukushoku_satei[".importFields"][] = "line";
$tdatafukushoku_satei[".importFields"][] = "item_name";
$tdatafukushoku_satei[".importFields"][] = "handle";
$tdatafukushoku_satei[".importFields"][] = "serial_number";
$tdatafukushoku_satei[".importFields"][] = "stamp";
$tdatafukushoku_satei[".importFields"][] = "Sleeve_Length";
$tdatafukushoku_satei[".importFields"][] = "length";
$tdatafukushoku_satei[".importFields"][] = "yahoo_junle";
$tdatafukushoku_satei[".importFields"][] = "logo";
$tdatafukushoku_satei[".importFields"][] = "parts";
$tdatafukushoku_satei[".importFields"][] = "country_of_origin";
$tdatafukushoku_satei[".importFields"][] = "zipper";
$tdatafukushoku_satei[".importFields"][] = "guarantee";
$tdatafukushoku_satei[".importFields"][] = "errors";
$tdatafukushoku_satei[".importFields"][] = "amount";
$tdatafukushoku_satei[".importFields"][] = "satei_error";
$tdatafukushoku_satei[".importFields"][] = "shape_supplement";
$tdatafukushoku_satei[".importFields"][] = "product_style";
$tdatafukushoku_satei[".importFields"][] = "collar_neck_line";
$tdatafukushoku_satei[".importFields"][] = "breast";
$tdatafukushoku_satei[".importFields"][] = "silhouette";
$tdatafukushoku_satei[".importFields"][] = "sleeve";
$tdatafukushoku_satei[".importFields"][] = "hall_mark";
$tdatafukushoku_satei[".importFields"][] = "plate";
$tdatafukushoku_satei[".importFields"][] = "toe";
$tdatafukushoku_satei[".importFields"][] = "heel";
$tdatafukushoku_satei[".importFields"][] = "cloth";

$tdatafukushoku_satei[".printFields"] = array();

//	product_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "product_id";
	$fdata["GoodName"] = "product_id";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("fukushoku_satei","product_id");
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




	$tdatafukushoku_satei["product_id"] = $fdata;
//	category_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "category_id";
	$fdata["GoodName"] = "category_id";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("fukushoku_satei","category_id");
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




	$tdatafukushoku_satei["category_id"] = $fdata;
//	goods_title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "goods_title";
	$fdata["GoodName"] = "goods_title";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("fukushoku_satei","goods_title");
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




	$tdatafukushoku_satei["goods_title"] = $fdata;
//	title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "title";
	$fdata["GoodName"] = "title";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("fukushoku_satei","title");
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




	$tdatafukushoku_satei["title"] = $fdata;
//	sub_category_id1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "sub_category_id1";
	$fdata["GoodName"] = "sub_category_id1";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("fukushoku_satei","sub_category_id1");
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




	$tdatafukushoku_satei["sub_category_id1"] = $fdata;
//	ecc_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "ecc_id";
	$fdata["GoodName"] = "ecc_id";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("fukushoku_satei","ecc_id");
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








	$tdatafukushoku_satei["ecc_id"] = $fdata;
//	price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "price";
	$fdata["GoodName"] = "price";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("fukushoku_satei","price");
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




	$tdatafukushoku_satei["price"] = $fdata;
//	yahoo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "yahoo";
	$fdata["GoodName"] = "yahoo";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("fukushoku_satei","yahoo");
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








	$tdatafukushoku_satei["yahoo"] = $fdata;
//	remark
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "remark";
	$fdata["GoodName"] = "remark";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("fukushoku_satei","remark");
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




	$tdatafukushoku_satei["remark"] = $fdata;
//	sales_price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "sales_price";
	$fdata["GoodName"] = "sales_price";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("fukushoku_satei","sales_price");
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




	$tdatafukushoku_satei["sales_price"] = $fdata;
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("fukushoku_satei","description");
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




	$tdatafukushoku_satei["description"] = $fdata;
//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("fukushoku_satei","status");
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




	$tdatafukushoku_satei["status"] = $fdata;
//	product_num
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "product_num";
	$fdata["GoodName"] = "product_num";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("fukushoku_satei","product_num");
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




	$tdatafukushoku_satei["product_num"] = $fdata;
//	yahoo_size
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "yahoo_size";
	$fdata["GoodName"] = "yahoo_size";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("fukushoku_satei","yahoo_size");
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




	$tdatafukushoku_satei["yahoo_size"] = $fdata;
//	yahoo_title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "yahoo_title";
	$fdata["GoodName"] = "yahoo_title";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("fukushoku_satei","yahoo_title");
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




	$tdatafukushoku_satei["yahoo_title"] = $fdata;
//	yahoo_sankou_uwadai
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "yahoo_sankou_uwadai";
	$fdata["GoodName"] = "yahoo_sankou_uwadai";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("fukushoku_satei","yahoo_sankou_uwadai");
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




	$tdatafukushoku_satei["yahoo_sankou_uwadai"] = $fdata;
//	yahoo_sozai
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "yahoo_sozai";
	$fdata["GoodName"] = "yahoo_sozai";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("fukushoku_satei","yahoo_sozai");
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




	$tdatafukushoku_satei["yahoo_sozai"] = $fdata;
//	yahoo_color
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "yahoo_color";
	$fdata["GoodName"] = "yahoo_color";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("fukushoku_satei","yahoo_color");
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




	$tdatafukushoku_satei["yahoo_color"] = $fdata;
//	yahoo_kataban
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "yahoo_kataban";
	$fdata["GoodName"] = "yahoo_kataban";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("fukushoku_satei","yahoo_kataban");
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




	$tdatafukushoku_satei["yahoo_kataban"] = $fdata;
//	yahoo_condition1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "yahoo_condition1";
	$fdata["GoodName"] = "yahoo_condition1";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("fukushoku_satei","yahoo_condition1");
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




	$tdatafukushoku_satei["yahoo_condition1"] = $fdata;
//	yahoo_condition2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "yahoo_condition2";
	$fdata["GoodName"] = "yahoo_condition2";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("fukushoku_satei","yahoo_condition2");
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




	$tdatafukushoku_satei["yahoo_condition2"] = $fdata;
//	yahoo_fuzokuhin
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "yahoo_fuzokuhin";
	$fdata["GoodName"] = "yahoo_fuzokuhin";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("fukushoku_satei","yahoo_fuzokuhin");
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




	$tdatafukushoku_satei["yahoo_fuzokuhin"] = $fdata;
//	yahoo_sinaban
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "yahoo_sinaban";
	$fdata["GoodName"] = "yahoo_sinaban";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("fukushoku_satei","yahoo_sinaban");
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




	$tdatafukushoku_satei["yahoo_sinaban"] = $fdata;
//	yahoo_saisun_sha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "yahoo_saisun_sha";
	$fdata["GoodName"] = "yahoo_saisun_sha";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("fukushoku_satei","yahoo_saisun_sha");
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








	$tdatafukushoku_satei["yahoo_saisun_sha"] = $fdata;
//	yahoo_sex
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "yahoo_sex";
	$fdata["GoodName"] = "yahoo_sex";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("fukushoku_satei","yahoo_sex");
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




	$tdatafukushoku_satei["yahoo_sex"] = $fdata;
//	box_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "box_id";
	$fdata["GoodName"] = "box_id";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("fukushoku_satei","box_id");
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








	$tdatafukushoku_satei["box_id"] = $fdata;
//	nyuukin_price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "nyuukin_price";
	$fdata["GoodName"] = "nyuukin_price";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("fukushoku_satei","nyuukin_price");
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








	$tdatafukushoku_satei["nyuukin_price"] = $fdata;
//	updated_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "updated_by";
	$fdata["GoodName"] = "updated_by";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("fukushoku_satei","updated_by");
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








	$tdatafukushoku_satei["updated_by"] = $fdata;
//	raku_title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "raku_title";
	$fdata["GoodName"] = "raku_title";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("fukushoku_satei","raku_title");
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




	$tdatafukushoku_satei["raku_title"] = $fdata;
//	raku_hyoujisaki_category2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "raku_hyoujisaki_category2";
	$fdata["GoodName"] = "raku_hyoujisaki_category2";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("fukushoku_satei","raku_hyoujisaki_category2");
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




	$tdatafukushoku_satei["raku_hyoujisaki_category2"] = $fdata;
//	raku_hyoujisaki_category
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "raku_hyoujisaki_category";
	$fdata["GoodName"] = "raku_hyoujisaki_category";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("fukushoku_satei","raku_hyoujisaki_category");
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




	$tdatafukushoku_satei["raku_hyoujisaki_category"] = $fdata;
//	raku_hyoujisaki_category3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "raku_hyoujisaki_category3";
	$fdata["GoodName"] = "raku_hyoujisaki_category3";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("fukushoku_satei","raku_hyoujisaki_category3");
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




	$tdatafukushoku_satei["raku_hyoujisaki_category3"] = $fdata;
//	timesta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "timesta";
	$fdata["GoodName"] = "timesta";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("fukushoku_satei","timesta");
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








	$tdatafukushoku_satei["timesta"] = $fdata;
//	saisun_start
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "saisun_start";
	$fdata["GoodName"] = "saisun_start";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("fukushoku_satei","saisun_start");
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








	$tdatafukushoku_satei["saisun_start"] = $fdata;
//	saisun_end
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "saisun_end";
	$fdata["GoodName"] = "saisun_end";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("fukushoku_satei","saisun_end");
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








	$tdatafukushoku_satei["saisun_end"] = $fdata;
//	label_output_flag
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "label_output_flag";
	$fdata["GoodName"] = "label_output_flag";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("fukushoku_satei","label_output_flag");
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




	$tdatafukushoku_satei["label_output_flag"] = $fdata;
//	season
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "season";
	$fdata["GoodName"] = "season";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("fukushoku_satei","season");
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




	$tdatafukushoku_satei["season"] = $fdata;
//	kanryou_henbi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "kanryou_henbi";
	$fdata["GoodName"] = "kanryou_henbi";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("fukushoku_satei","kanryou_henbi");
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








	$tdatafukushoku_satei["kanryou_henbi"] = $fdata;
//	box_sort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "box_sort";
	$fdata["GoodName"] = "box_sort";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("fukushoku_satei","box_sort");
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








	$tdatafukushoku_satei["box_sort"] = $fdata;
//	satei_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "satei_by";
	$fdata["GoodName"] = "satei_by";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("fukushoku_satei","satei_by");
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




	$tdatafukushoku_satei["satei_by"] = $fdata;
//	kaitori_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "kaitori_by";
	$fdata["GoodName"] = "kaitori_by";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("fukushoku_satei","kaitori_by");
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








	$tdatafukushoku_satei["kaitori_by"] = $fdata;
//	comment
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "comment";
	$fdata["GoodName"] = "comment";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("fukushoku_satei","comment");
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




	$tdatafukushoku_satei["comment"] = $fdata;
//	satei_hi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "satei_hi";
	$fdata["GoodName"] = "satei_hi";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("fukushoku_satei","satei_hi");
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




	$tdatafukushoku_satei["satei_hi"] = $fdata;
//	kaitory_hi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "kaitory_hi";
	$fdata["GoodName"] = "kaitory_hi";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("fukushoku_satei","kaitory_hi");
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








	$tdatafukushoku_satei["kaitory_hi"] = $fdata;
//	REG_PHOTOGRAPHER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "REG_PHOTOGRAPHER";
	$fdata["GoodName"] = "REG_PHOTOGRAPHER";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("fukushoku_satei","REG_PHOTOGRAPHER");
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








	$tdatafukushoku_satei["REG_PHOTOGRAPHER"] = $fdata;
//	REG_PACKINGS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "REG_PACKINGS";
	$fdata["GoodName"] = "REG_PACKINGS";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("fukushoku_satei","REG_PACKINGS");
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








	$tdatafukushoku_satei["REG_PACKINGS"] = $fdata;
//	REG_KAKOU_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 47;
	$fdata["strName"] = "REG_KAKOU_DATE";
	$fdata["GoodName"] = "REG_KAKOU_DATE";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("fukushoku_satei","REG_KAKOU_DATE");
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








	$tdatafukushoku_satei["REG_KAKOU_DATE"] = $fdata;
//	REG_KAKOU
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 48;
	$fdata["strName"] = "REG_KAKOU";
	$fdata["GoodName"] = "REG_KAKOU";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("fukushoku_satei","REG_KAKOU");
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








	$tdatafukushoku_satei["REG_KAKOU"] = $fdata;
//	REG_EXHIBITOR
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 49;
	$fdata["strName"] = "REG_EXHIBITOR";
	$fdata["GoodName"] = "REG_EXHIBITOR";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("fukushoku_satei","REG_EXHIBITOR");
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








	$tdatafukushoku_satei["REG_EXHIBITOR"] = $fdata;
//	REG_PHOTOGRAPHER_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 50;
	$fdata["strName"] = "REG_PHOTOGRAPHER_DATE";
	$fdata["GoodName"] = "REG_PHOTOGRAPHER_DATE";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("fukushoku_satei","REG_PHOTOGRAPHER_DATE");
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








	$tdatafukushoku_satei["REG_PHOTOGRAPHER_DATE"] = $fdata;
//	DT_PACKING_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 51;
	$fdata["strName"] = "DT_PACKING_DATE";
	$fdata["GoodName"] = "DT_PACKING_DATE";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("fukushoku_satei","DT_PACKING_DATE");
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








	$tdatafukushoku_satei["DT_PACKING_DATE"] = $fdata;
//	DT_UP_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 52;
	$fdata["strName"] = "DT_UP_DATE";
	$fdata["GoodName"] = "DT_UP_DATE";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("fukushoku_satei","DT_UP_DATE");
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








	$tdatafukushoku_satei["DT_UP_DATE"] = $fdata;
//	AWAZU_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 53;
	$fdata["strName"] = "AWAZU_DATE";
	$fdata["GoodName"] = "AWAZU_DATE";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("fukushoku_satei","AWAZU_DATE");
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








	$tdatafukushoku_satei["AWAZU_DATE"] = $fdata;
//	AWAZU_NIN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 54;
	$fdata["strName"] = "AWAZU_NIN";
	$fdata["GoodName"] = "AWAZU_NIN";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("fukushoku_satei","AWAZU_NIN");
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








	$tdatafukushoku_satei["AWAZU_NIN"] = $fdata;
//	sabun_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 55;
	$fdata["strName"] = "sabun_date";
	$fdata["GoodName"] = "sabun_date";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("fukushoku_satei","sabun_date");
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








	$tdatafukushoku_satei["sabun_date"] = $fdata;
//	browseid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 56;
	$fdata["strName"] = "browseid";
	$fdata["GoodName"] = "browseid";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("fukushoku_satei","browseid");
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








	$tdatafukushoku_satei["browseid"] = $fdata;
//	browsenode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 57;
	$fdata["strName"] = "browsenode";
	$fdata["GoodName"] = "browsenode";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("fukushoku_satei","browsenode");
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








	$tdatafukushoku_satei["browsenode"] = $fdata;
//	Destination_selling
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 58;
	$fdata["strName"] = "Destination_selling";
	$fdata["GoodName"] = "Destination_selling";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("fukushoku_satei","Destination_selling");
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




	$tdatafukushoku_satei["Destination_selling"] = $fdata;
//	Finish
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 59;
	$fdata["strName"] = "Finish";
	$fdata["GoodName"] = "Finish";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("fukushoku_satei","Finish");
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




	$tdatafukushoku_satei["Finish"] = $fdata;
//	Discrimination
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 60;
	$fdata["strName"] = "Discrimination";
	$fdata["GoodName"] = "Discrimination";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("fukushoku_satei","Discrimination");
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




	$tdatafukushoku_satei["Discrimination"] = $fdata;
//	accessories
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 61;
	$fdata["strName"] = "accessories";
	$fdata["GoodName"] = "accessories";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("fukushoku_satei","accessories");
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




	$tdatafukushoku_satei["accessories"] = $fdata;
//	priority
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 62;
	$fdata["strName"] = "priority";
	$fdata["GoodName"] = "priority";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("fukushoku_satei","priority");
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




	$tdatafukushoku_satei["priority"] = $fdata;
//	A_storage
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 63;
	$fdata["strName"] = "A_storage";
	$fdata["GoodName"] = "A_storage";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("fukushoku_satei","A_storage");
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




	$tdatafukushoku_satei["A_storage"] = $fdata;
//	price_secret
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 64;
	$fdata["strName"] = "price_secret";
	$fdata["GoodName"] = "price_secret";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("fukushoku_satei","price_secret");
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




	$tdatafukushoku_satei["price_secret"] = $fdata;
//	sales_price_secret
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 65;
	$fdata["strName"] = "sales_price_secret";
	$fdata["GoodName"] = "sales_price_secret";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("fukushoku_satei","sales_price_secret");
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




	$tdatafukushoku_satei["sales_price_secret"] = $fdata;
//	eq
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 66;
	$fdata["strName"] = "eq";
	$fdata["GoodName"] = "eq";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("fukushoku_satei","eq");
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








	$tdatafukushoku_satei["eq"] = $fdata;
//	en
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 67;
	$fdata["strName"] = "en";
	$fdata["GoodName"] = "en";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("fukushoku_satei","en");
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








	$tdatafukushoku_satei["en"] = $fdata;
//	line
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 68;
	$fdata["strName"] = "line";
	$fdata["GoodName"] = "line";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("fukushoku_satei","line");
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




	$tdatafukushoku_satei["line"] = $fdata;
//	item_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 69;
	$fdata["strName"] = "item_name";
	$fdata["GoodName"] = "item_name";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("fukushoku_satei","item_name");
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




	$tdatafukushoku_satei["item_name"] = $fdata;
//	handle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 70;
	$fdata["strName"] = "handle";
	$fdata["GoodName"] = "handle";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("fukushoku_satei","handle");
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




	$tdatafukushoku_satei["handle"] = $fdata;
//	yahoo_color_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 71;
	$fdata["strName"] = "yahoo_color_id";
	$fdata["GoodName"] = "yahoo_color_id";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("fukushoku_satei","yahoo_color_id");
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








	$tdatafukushoku_satei["yahoo_color_id"] = $fdata;
//	raku_hyoujisaki_category4
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 72;
	$fdata["strName"] = "raku_hyoujisaki_category4";
	$fdata["GoodName"] = "raku_hyoujisaki_category4";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("fukushoku_satei","raku_hyoujisaki_category4");
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




	$tdatafukushoku_satei["raku_hyoujisaki_category4"] = $fdata;
//	raku_hyoujisaki_category5
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 73;
	$fdata["strName"] = "raku_hyoujisaki_category5";
	$fdata["GoodName"] = "raku_hyoujisaki_category5";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("fukushoku_satei","raku_hyoujisaki_category5");
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




	$tdatafukushoku_satei["raku_hyoujisaki_category5"] = $fdata;
//	raku_dir_1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 74;
	$fdata["strName"] = "raku_dir_1";
	$fdata["GoodName"] = "raku_dir_1";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("fukushoku_satei","raku_dir_1");
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








	$tdatafukushoku_satei["raku_dir_1"] = $fdata;
//	raku_dir_2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 75;
	$fdata["strName"] = "raku_dir_2";
	$fdata["GoodName"] = "raku_dir_2";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("fukushoku_satei","raku_dir_2");
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








	$tdatafukushoku_satei["raku_dir_2"] = $fdata;
//	raku_dir_3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 76;
	$fdata["strName"] = "raku_dir_3";
	$fdata["GoodName"] = "raku_dir_3";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("fukushoku_satei","raku_dir_3");
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








	$tdatafukushoku_satei["raku_dir_3"] = $fdata;
//	raku_dir_4
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 77;
	$fdata["strName"] = "raku_dir_4";
	$fdata["GoodName"] = "raku_dir_4";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("fukushoku_satei","raku_dir_4");
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








	$tdatafukushoku_satei["raku_dir_4"] = $fdata;
//	raku_dir_5
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 78;
	$fdata["strName"] = "raku_dir_5";
	$fdata["GoodName"] = "raku_dir_5";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("fukushoku_satei","raku_dir_5");
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








	$tdatafukushoku_satei["raku_dir_5"] = $fdata;
//	raku_dir_result
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 79;
	$fdata["strName"] = "raku_dir_result";
	$fdata["GoodName"] = "raku_dir_result";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("fukushoku_satei","raku_dir_result");
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








	$tdatafukushoku_satei["raku_dir_result"] = $fdata;
//	raku_tag_result
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 80;
	$fdata["strName"] = "raku_tag_result";
	$fdata["GoodName"] = "raku_tag_result";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("fukushoku_satei","raku_tag_result");
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




	$tdatafukushoku_satei["raku_tag_result"] = $fdata;
//	serial_number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 81;
	$fdata["strName"] = "serial_number";
	$fdata["GoodName"] = "serial_number";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("fukushoku_satei","serial_number");
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




	$tdatafukushoku_satei["serial_number"] = $fdata;
//	Exhibition_Date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 82;
	$fdata["strName"] = "Exhibition_Date";
	$fdata["GoodName"] = "Exhibition_Date";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("fukushoku_satei","Exhibition_Date");
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








	$tdatafukushoku_satei["Exhibition_Date"] = $fdata;
//	search_keyword
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 83;
	$fdata["strName"] = "search_keyword";
	$fdata["GoodName"] = "search_keyword";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("fukushoku_satei","search_keyword");
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




	$tdatafukushoku_satei["search_keyword"] = $fdata;
//	stamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 84;
	$fdata["strName"] = "stamp";
	$fdata["GoodName"] = "stamp";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("fukushoku_satei","stamp");
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




	$tdatafukushoku_satei["stamp"] = $fdata;
//	Sleeve_Length
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 85;
	$fdata["strName"] = "Sleeve_Length";
	$fdata["GoodName"] = "Sleeve_Length";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("fukushoku_satei","Sleeve_Length");
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




	$tdatafukushoku_satei["Sleeve_Length"] = $fdata;
//	length
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 86;
	$fdata["strName"] = "length";
	$fdata["GoodName"] = "length";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("fukushoku_satei","length");
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




	$tdatafukushoku_satei["length"] = $fdata;
//	price_for_site
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 87;
	$fdata["strName"] = "price_for_site";
	$fdata["GoodName"] = "price_for_site";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("fukushoku_satei","price_for_site");
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








	$tdatafukushoku_satei["price_for_site"] = $fdata;
//	yahoo_category_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 88;
	$fdata["strName"] = "yahoo_category_id";
	$fdata["GoodName"] = "yahoo_category_id";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("fukushoku_satei","yahoo_category_id");
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








	$tdatafukushoku_satei["yahoo_category_id"] = $fdata;
//	Qty
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 89;
	$fdata["strName"] = "Qty";
	$fdata["GoodName"] = "Qty";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("fukushoku_satei","Qty");
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








	$tdatafukushoku_satei["Qty"] = $fdata;
//	sales_period
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 90;
	$fdata["strName"] = "sales_period";
	$fdata["GoodName"] = "sales_period";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("fukushoku_satei","sales_period");
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








	$tdatafukushoku_satei["sales_period"] = $fdata;
//	starting_price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 91;
	$fdata["strName"] = "starting_price";
	$fdata["GoodName"] = "starting_price";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("fukushoku_satei","starting_price");
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








	$tdatafukushoku_satei["starting_price"] = $fdata;
//	ecc_seq
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 92;
	$fdata["strName"] = "ecc_seq";
	$fdata["GoodName"] = "ecc_seq";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("fukushoku_satei","ecc_seq");
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




	$tdatafukushoku_satei["ecc_seq"] = $fdata;
//	yahoo_junle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 93;
	$fdata["strName"] = "yahoo_junle";
	$fdata["GoodName"] = "yahoo_junle";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("fukushoku_satei","yahoo_junle");
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








	$tdatafukushoku_satei["yahoo_junle"] = $fdata;
//	logo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 94;
	$fdata["strName"] = "logo";
	$fdata["GoodName"] = "logo";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("fukushoku_satei","logo");
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




	$tdatafukushoku_satei["logo"] = $fdata;
//	parts
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 95;
	$fdata["strName"] = "parts";
	$fdata["GoodName"] = "parts";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("fukushoku_satei","parts");
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




	$tdatafukushoku_satei["parts"] = $fdata;
//	country_of_origin
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 96;
	$fdata["strName"] = "country_of_origin";
	$fdata["GoodName"] = "country_of_origin";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("fukushoku_satei","country_of_origin");
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




	$tdatafukushoku_satei["country_of_origin"] = $fdata;
//	zipper
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 97;
	$fdata["strName"] = "zipper";
	$fdata["GoodName"] = "zipper";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("fukushoku_satei","zipper");
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




	$tdatafukushoku_satei["zipper"] = $fdata;
//	guarantee
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 98;
	$fdata["strName"] = "guarantee";
	$fdata["GoodName"] = "guarantee";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("fukushoku_satei","guarantee");
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




	$tdatafukushoku_satei["guarantee"] = $fdata;
//	errors
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 99;
	$fdata["strName"] = "errors";
	$fdata["GoodName"] = "errors";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("fukushoku_satei","errors");
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




	$tdatafukushoku_satei["errors"] = $fdata;
//	amount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 100;
	$fdata["strName"] = "amount";
	$fdata["GoodName"] = "amount";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("fukushoku_satei","amount");
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




	$tdatafukushoku_satei["amount"] = $fdata;
//	satei_error
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 101;
	$fdata["strName"] = "satei_error";
	$fdata["GoodName"] = "satei_error";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("fukushoku_satei","satei_error");
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




	$tdatafukushoku_satei["satei_error"] = $fdata;
//	shape_supplement
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 102;
	$fdata["strName"] = "shape_supplement";
	$fdata["GoodName"] = "shape_supplement";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("fukushoku_satei","shape_supplement");
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




	$tdatafukushoku_satei["shape_supplement"] = $fdata;
//	product_style
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 103;
	$fdata["strName"] = "product_style";
	$fdata["GoodName"] = "product_style";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("fukushoku_satei","product_style");
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




	$tdatafukushoku_satei["product_style"] = $fdata;
//	collar_neck_line
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 104;
	$fdata["strName"] = "collar_neck_line";
	$fdata["GoodName"] = "collar_neck_line";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("fukushoku_satei","collar_neck_line");
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




	$tdatafukushoku_satei["collar_neck_line"] = $fdata;
//	breast
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 105;
	$fdata["strName"] = "breast";
	$fdata["GoodName"] = "breast";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("fukushoku_satei","breast");
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




	$tdatafukushoku_satei["breast"] = $fdata;
//	silhouette
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 106;
	$fdata["strName"] = "silhouette";
	$fdata["GoodName"] = "silhouette";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("fukushoku_satei","silhouette");
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




	$tdatafukushoku_satei["silhouette"] = $fdata;
//	sleeve
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 107;
	$fdata["strName"] = "sleeve";
	$fdata["GoodName"] = "sleeve";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("fukushoku_satei","sleeve");
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




	$tdatafukushoku_satei["sleeve"] = $fdata;
//	hall_mark
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 108;
	$fdata["strName"] = "hall_mark";
	$fdata["GoodName"] = "hall_mark";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("fukushoku_satei","hall_mark");
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




	$tdatafukushoku_satei["hall_mark"] = $fdata;
//	plate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 109;
	$fdata["strName"] = "plate";
	$fdata["GoodName"] = "plate";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("fukushoku_satei","plate");
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




	$tdatafukushoku_satei["plate"] = $fdata;
//	toe
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 110;
	$fdata["strName"] = "toe";
	$fdata["GoodName"] = "toe";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("fukushoku_satei","toe");
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




	$tdatafukushoku_satei["toe"] = $fdata;
//	heel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 111;
	$fdata["strName"] = "heel";
	$fdata["GoodName"] = "heel";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("fukushoku_satei","heel");
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




	$tdatafukushoku_satei["heel"] = $fdata;
//	cloth
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 112;
	$fdata["strName"] = "cloth";
	$fdata["GoodName"] = "cloth";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("fukushoku_satei","cloth");
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




	$tdatafukushoku_satei["cloth"] = $fdata;
//	official_url
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 113;
	$fdata["strName"] = "official_url";
	$fdata["GoodName"] = "official_url";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("fukushoku_satei","official_url");
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








	$tdatafukushoku_satei["official_url"] = $fdata;


$tables_data["fukushoku_satei"]=&$tdatafukushoku_satei;
$field_labels["fukushoku_satei"] = &$fieldLabelsfukushoku_satei;
$fieldToolTips["fukushoku_satei"] = &$fieldToolTipsfukushoku_satei;
$placeHolders["fukushoku_satei"] = &$placeHoldersfukushoku_satei;
$page_titles["fukushoku_satei"] = &$pageTitlesfukushoku_satei;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["fukushoku_satei"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["fukushoku_satei"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_fukushoku_satei()
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
	"m_srcTableName" => "fukushoku_satei"
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
	"m_srcTableName" => "fukushoku_satei"
));

$proto6["m_sql"] = "`shouhin`.`product_id`";
$proto6["m_srcTableName"] = "fukushoku_satei";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "category_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "fukushoku_satei"
));

$proto8["m_sql"] = "`shouhin`.`category_id`";
$proto8["m_srcTableName"] = "fukushoku_satei";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "goods_title",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "fukushoku_satei"
));

$proto10["m_sql"] = "`shouhin`.`goods_title`";
$proto10["m_srcTableName"] = "fukushoku_satei";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "title",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "fukushoku_satei"
));

$proto12["m_sql"] = "`shouhin`.`title`";
$proto12["m_srcTableName"] = "fukushoku_satei";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "sub_category_id1",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "fukushoku_satei"
));

$proto14["m_sql"] = "`shouhin`.`sub_category_id1`";
$proto14["m_srcTableName"] = "fukushoku_satei";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "ecc_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "fukushoku_satei"
));

$proto16["m_sql"] = "`shouhin`.`ecc_id`";
$proto16["m_srcTableName"] = "fukushoku_satei";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "price",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "fukushoku_satei"
));

$proto18["m_sql"] = "`shouhin`.`price`";
$proto18["m_srcTableName"] = "fukushoku_satei";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "fukushoku_satei"
));

$proto20["m_sql"] = "`shouhin`.`yahoo`";
$proto20["m_srcTableName"] = "fukushoku_satei";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "remark",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "fukushoku_satei"
));

$proto22["m_sql"] = "`shouhin`.`remark`";
$proto22["m_srcTableName"] = "fukushoku_satei";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "sales_price",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "fukushoku_satei"
));

$proto24["m_sql"] = "`shouhin`.`sales_price`";
$proto24["m_srcTableName"] = "fukushoku_satei";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "fukushoku_satei"
));

$proto26["m_sql"] = "`shouhin`.`description`";
$proto26["m_srcTableName"] = "fukushoku_satei";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "fukushoku_satei"
));

$proto28["m_sql"] = "`shouhin`.`status`";
$proto28["m_srcTableName"] = "fukushoku_satei";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "product_num",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "fukushoku_satei"
));

$proto30["m_sql"] = "`shouhin`.`product_num`";
$proto30["m_srcTableName"] = "fukushoku_satei";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_size",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "fukushoku_satei"
));

$proto32["m_sql"] = "`shouhin`.`yahoo_size`";
$proto32["m_srcTableName"] = "fukushoku_satei";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_title",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "fukushoku_satei"
));

$proto34["m_sql"] = "`shouhin`.`yahoo_title`";
$proto34["m_srcTableName"] = "fukushoku_satei";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_sankou_uwadai",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "fukushoku_satei"
));

$proto36["m_sql"] = "`shouhin`.`yahoo_sankou_uwadai`";
$proto36["m_srcTableName"] = "fukushoku_satei";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_sozai",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "fukushoku_satei"
));

$proto38["m_sql"] = "`shouhin`.`yahoo_sozai`";
$proto38["m_srcTableName"] = "fukushoku_satei";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_color",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "fukushoku_satei"
));

$proto40["m_sql"] = "`shouhin`.`yahoo_color`";
$proto40["m_srcTableName"] = "fukushoku_satei";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_kataban",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "fukushoku_satei"
));

$proto42["m_sql"] = "`shouhin`.`yahoo_kataban`";
$proto42["m_srcTableName"] = "fukushoku_satei";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_condition1",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "fukushoku_satei"
));

$proto44["m_sql"] = "`shouhin`.`yahoo_condition1`";
$proto44["m_srcTableName"] = "fukushoku_satei";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_condition2",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "fukushoku_satei"
));

$proto46["m_sql"] = "`shouhin`.`yahoo_condition2`";
$proto46["m_srcTableName"] = "fukushoku_satei";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_fuzokuhin",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "fukushoku_satei"
));

$proto48["m_sql"] = "`shouhin`.`yahoo_fuzokuhin`";
$proto48["m_srcTableName"] = "fukushoku_satei";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_sinaban",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "fukushoku_satei"
));

$proto50["m_sql"] = "`shouhin`.`yahoo_sinaban`";
$proto50["m_srcTableName"] = "fukushoku_satei";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_saisun_sha",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "fukushoku_satei"
));

$proto52["m_sql"] = "`shouhin`.`yahoo_saisun_sha`";
$proto52["m_srcTableName"] = "fukushoku_satei";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_sex",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "fukushoku_satei"
));

$proto54["m_sql"] = "`shouhin`.`yahoo_sex`";
$proto54["m_srcTableName"] = "fukushoku_satei";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "box_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "fukushoku_satei"
));

$proto56["m_sql"] = "`shouhin`.`box_id`";
$proto56["m_srcTableName"] = "fukushoku_satei";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "nyuukin_price",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "fukushoku_satei"
));

$proto58["m_sql"] = "`shouhin`.`nyuukin_price`";
$proto58["m_srcTableName"] = "fukushoku_satei";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "fukushoku_satei"
));

$proto60["m_sql"] = "`shouhin`.`updated_by`";
$proto60["m_srcTableName"] = "fukushoku_satei";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "raku_title",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "fukushoku_satei"
));

$proto62["m_sql"] = "`shouhin`.`raku_title`";
$proto62["m_srcTableName"] = "fukushoku_satei";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "raku_hyoujisaki_category2",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "fukushoku_satei"
));

$proto64["m_sql"] = "`shouhin`.`raku_hyoujisaki_category2`";
$proto64["m_srcTableName"] = "fukushoku_satei";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "raku_hyoujisaki_category",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "fukushoku_satei"
));

$proto66["m_sql"] = "`shouhin`.`raku_hyoujisaki_category`";
$proto66["m_srcTableName"] = "fukushoku_satei";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "raku_hyoujisaki_category3",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "fukushoku_satei"
));

$proto68["m_sql"] = "`shouhin`.`raku_hyoujisaki_category3`";
$proto68["m_srcTableName"] = "fukushoku_satei";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "timesta",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "fukushoku_satei"
));

$proto70["m_sql"] = "`shouhin`.`timesta`";
$proto70["m_srcTableName"] = "fukushoku_satei";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "saisun_start",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "fukushoku_satei"
));

$proto72["m_sql"] = "`shouhin`.`saisun_start`";
$proto72["m_srcTableName"] = "fukushoku_satei";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "saisun_end",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "fukushoku_satei"
));

$proto74["m_sql"] = "`shouhin`.`saisun_end`";
$proto74["m_srcTableName"] = "fukushoku_satei";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "label_output_flag",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "fukushoku_satei"
));

$proto76["m_sql"] = "`shouhin`.`label_output_flag`";
$proto76["m_srcTableName"] = "fukushoku_satei";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "season",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "fukushoku_satei"
));

$proto78["m_sql"] = "`shouhin`.`season`";
$proto78["m_srcTableName"] = "fukushoku_satei";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "kanryou_henbi",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "fukushoku_satei"
));

$proto80["m_sql"] = "`shouhin`.`kanryou_henbi`";
$proto80["m_srcTableName"] = "fukushoku_satei";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "box_sort",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "fukushoku_satei"
));

$proto82["m_sql"] = "`shouhin`.`box_sort`";
$proto82["m_srcTableName"] = "fukushoku_satei";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "satei_by",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "fukushoku_satei"
));

$proto84["m_sql"] = "`shouhin`.`satei_by`";
$proto84["m_srcTableName"] = "fukushoku_satei";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "kaitori_by",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "fukushoku_satei"
));

$proto86["m_sql"] = "`shouhin`.`kaitori_by`";
$proto86["m_srcTableName"] = "fukushoku_satei";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "comment",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "fukushoku_satei"
));

$proto88["m_sql"] = "`shouhin`.`comment`";
$proto88["m_srcTableName"] = "fukushoku_satei";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "satei_hi",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "fukushoku_satei"
));

$proto90["m_sql"] = "`shouhin`.`satei_hi`";
$proto90["m_srcTableName"] = "fukushoku_satei";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLField(array(
	"m_strName" => "kaitory_hi",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "fukushoku_satei"
));

$proto92["m_sql"] = "`shouhin`.`kaitory_hi`";
$proto92["m_srcTableName"] = "fukushoku_satei";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "";
$obj = new SQLFieldListItem($proto92);

$proto0["m_fieldlist"][]=$obj;
						$proto94=array();
			$obj = new SQLField(array(
	"m_strName" => "REG_PHOTOGRAPHER",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "fukushoku_satei"
));

$proto94["m_sql"] = "`shouhin`.`REG_PHOTOGRAPHER`";
$proto94["m_srcTableName"] = "fukushoku_satei";
$proto94["m_expr"]=$obj;
$proto94["m_alias"] = "";
$obj = new SQLFieldListItem($proto94);

$proto0["m_fieldlist"][]=$obj;
						$proto96=array();
			$obj = new SQLField(array(
	"m_strName" => "REG_PACKINGS",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "fukushoku_satei"
));

$proto96["m_sql"] = "`shouhin`.`REG_PACKINGS`";
$proto96["m_srcTableName"] = "fukushoku_satei";
$proto96["m_expr"]=$obj;
$proto96["m_alias"] = "";
$obj = new SQLFieldListItem($proto96);

$proto0["m_fieldlist"][]=$obj;
						$proto98=array();
			$obj = new SQLField(array(
	"m_strName" => "REG_KAKOU_DATE",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "fukushoku_satei"
));

$proto98["m_sql"] = "`shouhin`.`REG_KAKOU_DATE`";
$proto98["m_srcTableName"] = "fukushoku_satei";
$proto98["m_expr"]=$obj;
$proto98["m_alias"] = "";
$obj = new SQLFieldListItem($proto98);

$proto0["m_fieldlist"][]=$obj;
						$proto100=array();
			$obj = new SQLField(array(
	"m_strName" => "REG_KAKOU",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "fukushoku_satei"
));

$proto100["m_sql"] = "`shouhin`.`REG_KAKOU`";
$proto100["m_srcTableName"] = "fukushoku_satei";
$proto100["m_expr"]=$obj;
$proto100["m_alias"] = "";
$obj = new SQLFieldListItem($proto100);

$proto0["m_fieldlist"][]=$obj;
						$proto102=array();
			$obj = new SQLField(array(
	"m_strName" => "REG_EXHIBITOR",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "fukushoku_satei"
));

$proto102["m_sql"] = "`shouhin`.`REG_EXHIBITOR`";
$proto102["m_srcTableName"] = "fukushoku_satei";
$proto102["m_expr"]=$obj;
$proto102["m_alias"] = "";
$obj = new SQLFieldListItem($proto102);

$proto0["m_fieldlist"][]=$obj;
						$proto104=array();
			$obj = new SQLField(array(
	"m_strName" => "REG_PHOTOGRAPHER_DATE",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "fukushoku_satei"
));

$proto104["m_sql"] = "`shouhin`.`REG_PHOTOGRAPHER_DATE`";
$proto104["m_srcTableName"] = "fukushoku_satei";
$proto104["m_expr"]=$obj;
$proto104["m_alias"] = "";
$obj = new SQLFieldListItem($proto104);

$proto0["m_fieldlist"][]=$obj;
						$proto106=array();
			$obj = new SQLField(array(
	"m_strName" => "DT_PACKING_DATE",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "fukushoku_satei"
));

$proto106["m_sql"] = "`shouhin`.`DT_PACKING_DATE`";
$proto106["m_srcTableName"] = "fukushoku_satei";
$proto106["m_expr"]=$obj;
$proto106["m_alias"] = "";
$obj = new SQLFieldListItem($proto106);

$proto0["m_fieldlist"][]=$obj;
						$proto108=array();
			$obj = new SQLField(array(
	"m_strName" => "DT_UP_DATE",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "fukushoku_satei"
));

$proto108["m_sql"] = "`shouhin`.`DT_UP_DATE`";
$proto108["m_srcTableName"] = "fukushoku_satei";
$proto108["m_expr"]=$obj;
$proto108["m_alias"] = "";
$obj = new SQLFieldListItem($proto108);

$proto0["m_fieldlist"][]=$obj;
						$proto110=array();
			$obj = new SQLField(array(
	"m_strName" => "AWAZU_DATE",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "fukushoku_satei"
));

$proto110["m_sql"] = "`shouhin`.`AWAZU_DATE`";
$proto110["m_srcTableName"] = "fukushoku_satei";
$proto110["m_expr"]=$obj;
$proto110["m_alias"] = "";
$obj = new SQLFieldListItem($proto110);

$proto0["m_fieldlist"][]=$obj;
						$proto112=array();
			$obj = new SQLField(array(
	"m_strName" => "AWAZU_NIN",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "fukushoku_satei"
));

$proto112["m_sql"] = "`shouhin`.`AWAZU_NIN`";
$proto112["m_srcTableName"] = "fukushoku_satei";
$proto112["m_expr"]=$obj;
$proto112["m_alias"] = "";
$obj = new SQLFieldListItem($proto112);

$proto0["m_fieldlist"][]=$obj;
						$proto114=array();
			$obj = new SQLField(array(
	"m_strName" => "sabun_date",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "fukushoku_satei"
));

$proto114["m_sql"] = "`shouhin`.`sabun_date`";
$proto114["m_srcTableName"] = "fukushoku_satei";
$proto114["m_expr"]=$obj;
$proto114["m_alias"] = "";
$obj = new SQLFieldListItem($proto114);

$proto0["m_fieldlist"][]=$obj;
						$proto116=array();
			$obj = new SQLField(array(
	"m_strName" => "browseid",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "fukushoku_satei"
));

$proto116["m_sql"] = "`shouhin`.`browseid`";
$proto116["m_srcTableName"] = "fukushoku_satei";
$proto116["m_expr"]=$obj;
$proto116["m_alias"] = "";
$obj = new SQLFieldListItem($proto116);

$proto0["m_fieldlist"][]=$obj;
						$proto118=array();
			$obj = new SQLField(array(
	"m_strName" => "browsenode",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "fukushoku_satei"
));

$proto118["m_sql"] = "`shouhin`.`browsenode`";
$proto118["m_srcTableName"] = "fukushoku_satei";
$proto118["m_expr"]=$obj;
$proto118["m_alias"] = "";
$obj = new SQLFieldListItem($proto118);

$proto0["m_fieldlist"][]=$obj;
						$proto120=array();
			$obj = new SQLField(array(
	"m_strName" => "Destination_selling",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "fukushoku_satei"
));

$proto120["m_sql"] = "`shouhin`.`Destination_selling`";
$proto120["m_srcTableName"] = "fukushoku_satei";
$proto120["m_expr"]=$obj;
$proto120["m_alias"] = "";
$obj = new SQLFieldListItem($proto120);

$proto0["m_fieldlist"][]=$obj;
						$proto122=array();
			$obj = new SQLField(array(
	"m_strName" => "Finish",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "fukushoku_satei"
));

$proto122["m_sql"] = "`shouhin`.`Finish`";
$proto122["m_srcTableName"] = "fukushoku_satei";
$proto122["m_expr"]=$obj;
$proto122["m_alias"] = "";
$obj = new SQLFieldListItem($proto122);

$proto0["m_fieldlist"][]=$obj;
						$proto124=array();
			$obj = new SQLField(array(
	"m_strName" => "Discrimination",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "fukushoku_satei"
));

$proto124["m_sql"] = "`shouhin`.`Discrimination`";
$proto124["m_srcTableName"] = "fukushoku_satei";
$proto124["m_expr"]=$obj;
$proto124["m_alias"] = "";
$obj = new SQLFieldListItem($proto124);

$proto0["m_fieldlist"][]=$obj;
						$proto126=array();
			$obj = new SQLField(array(
	"m_strName" => "accessories",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "fukushoku_satei"
));

$proto126["m_sql"] = "`shouhin`.`accessories`";
$proto126["m_srcTableName"] = "fukushoku_satei";
$proto126["m_expr"]=$obj;
$proto126["m_alias"] = "";
$obj = new SQLFieldListItem($proto126);

$proto0["m_fieldlist"][]=$obj;
						$proto128=array();
			$obj = new SQLField(array(
	"m_strName" => "priority",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "fukushoku_satei"
));

$proto128["m_sql"] = "`shouhin`.`priority`";
$proto128["m_srcTableName"] = "fukushoku_satei";
$proto128["m_expr"]=$obj;
$proto128["m_alias"] = "";
$obj = new SQLFieldListItem($proto128);

$proto0["m_fieldlist"][]=$obj;
						$proto130=array();
			$obj = new SQLField(array(
	"m_strName" => "A_storage",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "fukushoku_satei"
));

$proto130["m_sql"] = "`shouhin`.`A_storage`";
$proto130["m_srcTableName"] = "fukushoku_satei";
$proto130["m_expr"]=$obj;
$proto130["m_alias"] = "";
$obj = new SQLFieldListItem($proto130);

$proto0["m_fieldlist"][]=$obj;
						$proto132=array();
			$obj = new SQLField(array(
	"m_strName" => "price_secret",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "fukushoku_satei"
));

$proto132["m_sql"] = "`shouhin`.`price_secret`";
$proto132["m_srcTableName"] = "fukushoku_satei";
$proto132["m_expr"]=$obj;
$proto132["m_alias"] = "";
$obj = new SQLFieldListItem($proto132);

$proto0["m_fieldlist"][]=$obj;
						$proto134=array();
			$obj = new SQLField(array(
	"m_strName" => "sales_price_secret",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "fukushoku_satei"
));

$proto134["m_sql"] = "`shouhin`.`sales_price_secret`";
$proto134["m_srcTableName"] = "fukushoku_satei";
$proto134["m_expr"]=$obj;
$proto134["m_alias"] = "";
$obj = new SQLFieldListItem($proto134);

$proto0["m_fieldlist"][]=$obj;
						$proto136=array();
			$obj = new SQLField(array(
	"m_strName" => "eq",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "fukushoku_satei"
));

$proto136["m_sql"] = "`shouhin`.`eq`";
$proto136["m_srcTableName"] = "fukushoku_satei";
$proto136["m_expr"]=$obj;
$proto136["m_alias"] = "";
$obj = new SQLFieldListItem($proto136);

$proto0["m_fieldlist"][]=$obj;
						$proto138=array();
			$obj = new SQLField(array(
	"m_strName" => "en",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "fukushoku_satei"
));

$proto138["m_sql"] = "`shouhin`.`en`";
$proto138["m_srcTableName"] = "fukushoku_satei";
$proto138["m_expr"]=$obj;
$proto138["m_alias"] = "";
$obj = new SQLFieldListItem($proto138);

$proto0["m_fieldlist"][]=$obj;
						$proto140=array();
			$obj = new SQLField(array(
	"m_strName" => "line",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "fukushoku_satei"
));

$proto140["m_sql"] = "`shouhin`.`line`";
$proto140["m_srcTableName"] = "fukushoku_satei";
$proto140["m_expr"]=$obj;
$proto140["m_alias"] = "";
$obj = new SQLFieldListItem($proto140);

$proto0["m_fieldlist"][]=$obj;
						$proto142=array();
			$obj = new SQLField(array(
	"m_strName" => "item_name",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "fukushoku_satei"
));

$proto142["m_sql"] = "`shouhin`.`item_name`";
$proto142["m_srcTableName"] = "fukushoku_satei";
$proto142["m_expr"]=$obj;
$proto142["m_alias"] = "";
$obj = new SQLFieldListItem($proto142);

$proto0["m_fieldlist"][]=$obj;
						$proto144=array();
			$obj = new SQLField(array(
	"m_strName" => "handle",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "fukushoku_satei"
));

$proto144["m_sql"] = "`shouhin`.`handle`";
$proto144["m_srcTableName"] = "fukushoku_satei";
$proto144["m_expr"]=$obj;
$proto144["m_alias"] = "";
$obj = new SQLFieldListItem($proto144);

$proto0["m_fieldlist"][]=$obj;
						$proto146=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_color_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "fukushoku_satei"
));

$proto146["m_sql"] = "`shouhin`.`yahoo_color_id`";
$proto146["m_srcTableName"] = "fukushoku_satei";
$proto146["m_expr"]=$obj;
$proto146["m_alias"] = "";
$obj = new SQLFieldListItem($proto146);

$proto0["m_fieldlist"][]=$obj;
						$proto148=array();
			$obj = new SQLField(array(
	"m_strName" => "raku_hyoujisaki_category4",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "fukushoku_satei"
));

$proto148["m_sql"] = "`shouhin`.`raku_hyoujisaki_category4`";
$proto148["m_srcTableName"] = "fukushoku_satei";
$proto148["m_expr"]=$obj;
$proto148["m_alias"] = "";
$obj = new SQLFieldListItem($proto148);

$proto0["m_fieldlist"][]=$obj;
						$proto150=array();
			$obj = new SQLField(array(
	"m_strName" => "raku_hyoujisaki_category5",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "fukushoku_satei"
));

$proto150["m_sql"] = "`shouhin`.`raku_hyoujisaki_category5`";
$proto150["m_srcTableName"] = "fukushoku_satei";
$proto150["m_expr"]=$obj;
$proto150["m_alias"] = "";
$obj = new SQLFieldListItem($proto150);

$proto0["m_fieldlist"][]=$obj;
						$proto152=array();
			$obj = new SQLField(array(
	"m_strName" => "raku_dir_1",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "fukushoku_satei"
));

$proto152["m_sql"] = "`shouhin`.`raku_dir_1`";
$proto152["m_srcTableName"] = "fukushoku_satei";
$proto152["m_expr"]=$obj;
$proto152["m_alias"] = "";
$obj = new SQLFieldListItem($proto152);

$proto0["m_fieldlist"][]=$obj;
						$proto154=array();
			$obj = new SQLField(array(
	"m_strName" => "raku_dir_2",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "fukushoku_satei"
));

$proto154["m_sql"] = "`shouhin`.`raku_dir_2`";
$proto154["m_srcTableName"] = "fukushoku_satei";
$proto154["m_expr"]=$obj;
$proto154["m_alias"] = "";
$obj = new SQLFieldListItem($proto154);

$proto0["m_fieldlist"][]=$obj;
						$proto156=array();
			$obj = new SQLField(array(
	"m_strName" => "raku_dir_3",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "fukushoku_satei"
));

$proto156["m_sql"] = "`shouhin`.`raku_dir_3`";
$proto156["m_srcTableName"] = "fukushoku_satei";
$proto156["m_expr"]=$obj;
$proto156["m_alias"] = "";
$obj = new SQLFieldListItem($proto156);

$proto0["m_fieldlist"][]=$obj;
						$proto158=array();
			$obj = new SQLField(array(
	"m_strName" => "raku_dir_4",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "fukushoku_satei"
));

$proto158["m_sql"] = "`shouhin`.`raku_dir_4`";
$proto158["m_srcTableName"] = "fukushoku_satei";
$proto158["m_expr"]=$obj;
$proto158["m_alias"] = "";
$obj = new SQLFieldListItem($proto158);

$proto0["m_fieldlist"][]=$obj;
						$proto160=array();
			$obj = new SQLField(array(
	"m_strName" => "raku_dir_5",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "fukushoku_satei"
));

$proto160["m_sql"] = "`shouhin`.`raku_dir_5`";
$proto160["m_srcTableName"] = "fukushoku_satei";
$proto160["m_expr"]=$obj;
$proto160["m_alias"] = "";
$obj = new SQLFieldListItem($proto160);

$proto0["m_fieldlist"][]=$obj;
						$proto162=array();
			$obj = new SQLField(array(
	"m_strName" => "raku_dir_result",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "fukushoku_satei"
));

$proto162["m_sql"] = "`shouhin`.`raku_dir_result`";
$proto162["m_srcTableName"] = "fukushoku_satei";
$proto162["m_expr"]=$obj;
$proto162["m_alias"] = "";
$obj = new SQLFieldListItem($proto162);

$proto0["m_fieldlist"][]=$obj;
						$proto164=array();
			$obj = new SQLField(array(
	"m_strName" => "raku_tag_result",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "fukushoku_satei"
));

$proto164["m_sql"] = "`shouhin`.`raku_tag_result`";
$proto164["m_srcTableName"] = "fukushoku_satei";
$proto164["m_expr"]=$obj;
$proto164["m_alias"] = "";
$obj = new SQLFieldListItem($proto164);

$proto0["m_fieldlist"][]=$obj;
						$proto166=array();
			$obj = new SQLField(array(
	"m_strName" => "serial_number",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "fukushoku_satei"
));

$proto166["m_sql"] = "`shouhin`.`serial_number`";
$proto166["m_srcTableName"] = "fukushoku_satei";
$proto166["m_expr"]=$obj;
$proto166["m_alias"] = "";
$obj = new SQLFieldListItem($proto166);

$proto0["m_fieldlist"][]=$obj;
						$proto168=array();
			$obj = new SQLField(array(
	"m_strName" => "Exhibition_Date",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "fukushoku_satei"
));

$proto168["m_sql"] = "`shouhin`.`Exhibition_Date`";
$proto168["m_srcTableName"] = "fukushoku_satei";
$proto168["m_expr"]=$obj;
$proto168["m_alias"] = "";
$obj = new SQLFieldListItem($proto168);

$proto0["m_fieldlist"][]=$obj;
						$proto170=array();
			$obj = new SQLField(array(
	"m_strName" => "search_keyword",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "fukushoku_satei"
));

$proto170["m_sql"] = "`shouhin`.`search_keyword`";
$proto170["m_srcTableName"] = "fukushoku_satei";
$proto170["m_expr"]=$obj;
$proto170["m_alias"] = "";
$obj = new SQLFieldListItem($proto170);

$proto0["m_fieldlist"][]=$obj;
						$proto172=array();
			$obj = new SQLField(array(
	"m_strName" => "stamp",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "fukushoku_satei"
));

$proto172["m_sql"] = "`shouhin`.`stamp`";
$proto172["m_srcTableName"] = "fukushoku_satei";
$proto172["m_expr"]=$obj;
$proto172["m_alias"] = "";
$obj = new SQLFieldListItem($proto172);

$proto0["m_fieldlist"][]=$obj;
						$proto174=array();
			$obj = new SQLField(array(
	"m_strName" => "Sleeve_Length",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "fukushoku_satei"
));

$proto174["m_sql"] = "`shouhin`.`Sleeve_Length`";
$proto174["m_srcTableName"] = "fukushoku_satei";
$proto174["m_expr"]=$obj;
$proto174["m_alias"] = "";
$obj = new SQLFieldListItem($proto174);

$proto0["m_fieldlist"][]=$obj;
						$proto176=array();
			$obj = new SQLField(array(
	"m_strName" => "length",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "fukushoku_satei"
));

$proto176["m_sql"] = "`shouhin`.`length`";
$proto176["m_srcTableName"] = "fukushoku_satei";
$proto176["m_expr"]=$obj;
$proto176["m_alias"] = "";
$obj = new SQLFieldListItem($proto176);

$proto0["m_fieldlist"][]=$obj;
						$proto178=array();
			$obj = new SQLField(array(
	"m_strName" => "price_for_site",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "fukushoku_satei"
));

$proto178["m_sql"] = "`shouhin`.`price_for_site`";
$proto178["m_srcTableName"] = "fukushoku_satei";
$proto178["m_expr"]=$obj;
$proto178["m_alias"] = "";
$obj = new SQLFieldListItem($proto178);

$proto0["m_fieldlist"][]=$obj;
						$proto180=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_category_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "fukushoku_satei"
));

$proto180["m_sql"] = "`shouhin`.`yahoo_category_id`";
$proto180["m_srcTableName"] = "fukushoku_satei";
$proto180["m_expr"]=$obj;
$proto180["m_alias"] = "";
$obj = new SQLFieldListItem($proto180);

$proto0["m_fieldlist"][]=$obj;
						$proto182=array();
			$obj = new SQLField(array(
	"m_strName" => "Qty",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "fukushoku_satei"
));

$proto182["m_sql"] = "`shouhin`.`Qty`";
$proto182["m_srcTableName"] = "fukushoku_satei";
$proto182["m_expr"]=$obj;
$proto182["m_alias"] = "";
$obj = new SQLFieldListItem($proto182);

$proto0["m_fieldlist"][]=$obj;
						$proto184=array();
			$obj = new SQLField(array(
	"m_strName" => "sales_period",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "fukushoku_satei"
));

$proto184["m_sql"] = "`shouhin`.`sales_period`";
$proto184["m_srcTableName"] = "fukushoku_satei";
$proto184["m_expr"]=$obj;
$proto184["m_alias"] = "";
$obj = new SQLFieldListItem($proto184);

$proto0["m_fieldlist"][]=$obj;
						$proto186=array();
			$obj = new SQLField(array(
	"m_strName" => "starting_price",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "fukushoku_satei"
));

$proto186["m_sql"] = "`shouhin`.`starting_price`";
$proto186["m_srcTableName"] = "fukushoku_satei";
$proto186["m_expr"]=$obj;
$proto186["m_alias"] = "";
$obj = new SQLFieldListItem($proto186);

$proto0["m_fieldlist"][]=$obj;
						$proto188=array();
			$obj = new SQLField(array(
	"m_strName" => "ecc_seq",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "fukushoku_satei"
));

$proto188["m_sql"] = "`Eoc`.`ecc_seq`";
$proto188["m_srcTableName"] = "fukushoku_satei";
$proto188["m_expr"]=$obj;
$proto188["m_alias"] = "";
$obj = new SQLFieldListItem($proto188);

$proto0["m_fieldlist"][]=$obj;
						$proto190=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_junle",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "fukushoku_satei"
));

$proto190["m_sql"] = "`shouhin`.`yahoo_junle`";
$proto190["m_srcTableName"] = "fukushoku_satei";
$proto190["m_expr"]=$obj;
$proto190["m_alias"] = "";
$obj = new SQLFieldListItem($proto190);

$proto0["m_fieldlist"][]=$obj;
						$proto192=array();
			$obj = new SQLField(array(
	"m_strName" => "logo",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "fukushoku_satei"
));

$proto192["m_sql"] = "`shouhin`.`logo`";
$proto192["m_srcTableName"] = "fukushoku_satei";
$proto192["m_expr"]=$obj;
$proto192["m_alias"] = "";
$obj = new SQLFieldListItem($proto192);

$proto0["m_fieldlist"][]=$obj;
						$proto194=array();
			$obj = new SQLField(array(
	"m_strName" => "parts",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "fukushoku_satei"
));

$proto194["m_sql"] = "`shouhin`.`parts`";
$proto194["m_srcTableName"] = "fukushoku_satei";
$proto194["m_expr"]=$obj;
$proto194["m_alias"] = "";
$obj = new SQLFieldListItem($proto194);

$proto0["m_fieldlist"][]=$obj;
						$proto196=array();
			$obj = new SQLField(array(
	"m_strName" => "country_of_origin",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "fukushoku_satei"
));

$proto196["m_sql"] = "`shouhin`.`country_of_origin`";
$proto196["m_srcTableName"] = "fukushoku_satei";
$proto196["m_expr"]=$obj;
$proto196["m_alias"] = "";
$obj = new SQLFieldListItem($proto196);

$proto0["m_fieldlist"][]=$obj;
						$proto198=array();
			$obj = new SQLField(array(
	"m_strName" => "zipper",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "fukushoku_satei"
));

$proto198["m_sql"] = "`shouhin`.`zipper`";
$proto198["m_srcTableName"] = "fukushoku_satei";
$proto198["m_expr"]=$obj;
$proto198["m_alias"] = "";
$obj = new SQLFieldListItem($proto198);

$proto0["m_fieldlist"][]=$obj;
						$proto200=array();
			$obj = new SQLField(array(
	"m_strName" => "guarantee",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "fukushoku_satei"
));

$proto200["m_sql"] = "`shouhin`.`guarantee`";
$proto200["m_srcTableName"] = "fukushoku_satei";
$proto200["m_expr"]=$obj;
$proto200["m_alias"] = "";
$obj = new SQLFieldListItem($proto200);

$proto0["m_fieldlist"][]=$obj;
						$proto202=array();
			$obj = new SQLField(array(
	"m_strName" => "errors",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "fukushoku_satei"
));

$proto202["m_sql"] = "`shouhin`.`errors`";
$proto202["m_srcTableName"] = "fukushoku_satei";
$proto202["m_expr"]=$obj;
$proto202["m_alias"] = "";
$obj = new SQLFieldListItem($proto202);

$proto0["m_fieldlist"][]=$obj;
						$proto204=array();
			$obj = new SQLField(array(
	"m_strName" => "amount",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "fukushoku_satei"
));

$proto204["m_sql"] = "`shouhin`.`amount`";
$proto204["m_srcTableName"] = "fukushoku_satei";
$proto204["m_expr"]=$obj;
$proto204["m_alias"] = "";
$obj = new SQLFieldListItem($proto204);

$proto0["m_fieldlist"][]=$obj;
						$proto206=array();
			$obj = new SQLField(array(
	"m_strName" => "satei_error",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "fukushoku_satei"
));

$proto206["m_sql"] = "`shouhin`.`satei_error`";
$proto206["m_srcTableName"] = "fukushoku_satei";
$proto206["m_expr"]=$obj;
$proto206["m_alias"] = "";
$obj = new SQLFieldListItem($proto206);

$proto0["m_fieldlist"][]=$obj;
						$proto208=array();
			$obj = new SQLField(array(
	"m_strName" => "shape_supplement",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "fukushoku_satei"
));

$proto208["m_sql"] = "`shouhin`.`shape_supplement`";
$proto208["m_srcTableName"] = "fukushoku_satei";
$proto208["m_expr"]=$obj;
$proto208["m_alias"] = "";
$obj = new SQLFieldListItem($proto208);

$proto0["m_fieldlist"][]=$obj;
						$proto210=array();
			$obj = new SQLField(array(
	"m_strName" => "product_style",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "fukushoku_satei"
));

$proto210["m_sql"] = "`shouhin`.`product_style`";
$proto210["m_srcTableName"] = "fukushoku_satei";
$proto210["m_expr"]=$obj;
$proto210["m_alias"] = "";
$obj = new SQLFieldListItem($proto210);

$proto0["m_fieldlist"][]=$obj;
						$proto212=array();
			$obj = new SQLField(array(
	"m_strName" => "collar_neck_line",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "fukushoku_satei"
));

$proto212["m_sql"] = "`shouhin`.`collar_neck_line`";
$proto212["m_srcTableName"] = "fukushoku_satei";
$proto212["m_expr"]=$obj;
$proto212["m_alias"] = "";
$obj = new SQLFieldListItem($proto212);

$proto0["m_fieldlist"][]=$obj;
						$proto214=array();
			$obj = new SQLField(array(
	"m_strName" => "breast",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "fukushoku_satei"
));

$proto214["m_sql"] = "`shouhin`.`breast`";
$proto214["m_srcTableName"] = "fukushoku_satei";
$proto214["m_expr"]=$obj;
$proto214["m_alias"] = "";
$obj = new SQLFieldListItem($proto214);

$proto0["m_fieldlist"][]=$obj;
						$proto216=array();
			$obj = new SQLField(array(
	"m_strName" => "silhouette",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "fukushoku_satei"
));

$proto216["m_sql"] = "`shouhin`.`silhouette`";
$proto216["m_srcTableName"] = "fukushoku_satei";
$proto216["m_expr"]=$obj;
$proto216["m_alias"] = "";
$obj = new SQLFieldListItem($proto216);

$proto0["m_fieldlist"][]=$obj;
						$proto218=array();
			$obj = new SQLField(array(
	"m_strName" => "sleeve",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "fukushoku_satei"
));

$proto218["m_sql"] = "`shouhin`.`sleeve`";
$proto218["m_srcTableName"] = "fukushoku_satei";
$proto218["m_expr"]=$obj;
$proto218["m_alias"] = "";
$obj = new SQLFieldListItem($proto218);

$proto0["m_fieldlist"][]=$obj;
						$proto220=array();
			$obj = new SQLField(array(
	"m_strName" => "hall_mark",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "fukushoku_satei"
));

$proto220["m_sql"] = "`shouhin`.`hall_mark`";
$proto220["m_srcTableName"] = "fukushoku_satei";
$proto220["m_expr"]=$obj;
$proto220["m_alias"] = "";
$obj = new SQLFieldListItem($proto220);

$proto0["m_fieldlist"][]=$obj;
						$proto222=array();
			$obj = new SQLField(array(
	"m_strName" => "plate",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "fukushoku_satei"
));

$proto222["m_sql"] = "`shouhin`.`plate`";
$proto222["m_srcTableName"] = "fukushoku_satei";
$proto222["m_expr"]=$obj;
$proto222["m_alias"] = "";
$obj = new SQLFieldListItem($proto222);

$proto0["m_fieldlist"][]=$obj;
						$proto224=array();
			$obj = new SQLField(array(
	"m_strName" => "toe",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "fukushoku_satei"
));

$proto224["m_sql"] = "`shouhin`.`toe`";
$proto224["m_srcTableName"] = "fukushoku_satei";
$proto224["m_expr"]=$obj;
$proto224["m_alias"] = "";
$obj = new SQLFieldListItem($proto224);

$proto0["m_fieldlist"][]=$obj;
						$proto226=array();
			$obj = new SQLField(array(
	"m_strName" => "heel",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "fukushoku_satei"
));

$proto226["m_sql"] = "`shouhin`.`heel`";
$proto226["m_srcTableName"] = "fukushoku_satei";
$proto226["m_expr"]=$obj;
$proto226["m_alias"] = "";
$obj = new SQLFieldListItem($proto226);

$proto0["m_fieldlist"][]=$obj;
						$proto228=array();
			$obj = new SQLField(array(
	"m_strName" => "cloth",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "fukushoku_satei"
));

$proto228["m_sql"] = "`shouhin`.`cloth`";
$proto228["m_srcTableName"] = "fukushoku_satei";
$proto228["m_expr"]=$obj;
$proto228["m_alias"] = "";
$obj = new SQLFieldListItem($proto228);

$proto0["m_fieldlist"][]=$obj;
						$proto230=array();
			$obj = new SQLField(array(
	"m_strName" => "official_url",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "fukushoku_satei"
));

$proto230["m_sql"] = "`shouhin`.`official_url`";
$proto230["m_srcTableName"] = "fukushoku_satei";
$proto230["m_expr"]=$obj;
$proto230["m_alias"] = "";
$obj = new SQLFieldListItem($proto230);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto232=array();
$proto232["m_link"] = "SQLL_MAIN";
			$proto233=array();
$proto233["m_strName"] = "shouhin";
$proto233["m_srcTableName"] = "fukushoku_satei";
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
$proto232["m_srcTableName"] = "fukushoku_satei";
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
$proto237["m_srcTableName"] = "fukushoku_satei";
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
$proto236["m_srcTableName"] = "fukushoku_satei";
$proto238=array();
$proto238["m_sql"] = "`shouhin`.`ecc_id` = `Eoc`.`ecc_id`";
$proto238["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "ecc_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "fukushoku_satei"
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
	"m_srcTableName" => "fukushoku_satei"
));

$proto240["m_column"]=$obj;
$proto240["m_bAsc"] = 0;
$proto240["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto240);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="fukushoku_satei";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_fukushoku_satei = createSqlQuery_fukushoku_satei();


	
		;

																																																																																																																	

$tdatafukushoku_satei[".sqlquery"] = $queryData_fukushoku_satei;

include_once(getabspath("include/fukushoku_satei_events.php"));
$tableEvents["fukushoku_satei"] = new eventclass_fukushoku_satei;
$tdatafukushoku_satei[".hasEvents"] = true;

?>