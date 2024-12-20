<?php
require_once(getabspath("classes/cipherer.php"));




$tdatasatei_of_brand1 = array();
	$tdatasatei_of_brand1[".truncateText"] = true;
	$tdatasatei_of_brand1[".NumberOfChars"] = 80;
	$tdatasatei_of_brand1[".ShortName"] = "satei_of_brand1";
	$tdatasatei_of_brand1[".OwnerID"] = "";
	$tdatasatei_of_brand1[".OriginalTable"] = "shouhin";

//	field labels
$fieldLabelssatei_of_brand1 = array();
$fieldToolTipssatei_of_brand1 = array();
$pageTitlessatei_of_brand1 = array();
$placeHolderssatei_of_brand1 = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelssatei_of_brand1["Japanese"] = array();
	$fieldToolTipssatei_of_brand1["Japanese"] = array();
	$placeHolderssatei_of_brand1["Japanese"] = array();
	$pageTitlessatei_of_brand1["Japanese"] = array();
	$fieldLabelssatei_of_brand1["Japanese"]["product_id"] = "SEQ";
	$fieldToolTipssatei_of_brand1["Japanese"]["product_id"] = "";
	$placeHolderssatei_of_brand1["Japanese"]["product_id"] = "";
	$fieldLabelssatei_of_brand1["Japanese"]["category_id"] = "大カテゴリー";
	$fieldToolTipssatei_of_brand1["Japanese"]["category_id"] = "";
	$placeHolderssatei_of_brand1["Japanese"]["category_id"] = "";
	$fieldLabelssatei_of_brand1["Japanese"]["goods_title"] = "アイテム名";
	$fieldToolTipssatei_of_brand1["Japanese"]["goods_title"] = "";
	$placeHolderssatei_of_brand1["Japanese"]["goods_title"] = "";
	$fieldLabelssatei_of_brand1["Japanese"]["title"] = "タイトル";
	$fieldToolTipssatei_of_brand1["Japanese"]["title"] = "";
	$placeHolderssatei_of_brand1["Japanese"]["title"] = "";
	$fieldLabelssatei_of_brand1["Japanese"]["sub_category_id1"] = "中カテゴリー";
	$fieldToolTipssatei_of_brand1["Japanese"]["sub_category_id1"] = "";
	$placeHolderssatei_of_brand1["Japanese"]["sub_category_id1"] = "";
	$fieldLabelssatei_of_brand1["Japanese"]["ecc_id"] = "Ecc Id";
	$fieldToolTipssatei_of_brand1["Japanese"]["ecc_id"] = "";
	$placeHolderssatei_of_brand1["Japanese"]["ecc_id"] = "";
	$fieldLabelssatei_of_brand1["Japanese"]["price"] = "買取額";
	$fieldToolTipssatei_of_brand1["Japanese"]["price"] = "";
	$placeHolderssatei_of_brand1["Japanese"]["price"] = "";
	$fieldLabelssatei_of_brand1["Japanese"]["sales_price"] = "販売額";
	$fieldToolTipssatei_of_brand1["Japanese"]["sales_price"] = "";
	$placeHolderssatei_of_brand1["Japanese"]["sales_price"] = "";
	$fieldLabelssatei_of_brand1["Japanese"]["description"] = "メモ";
	$fieldToolTipssatei_of_brand1["Japanese"]["description"] = "";
	$placeHolderssatei_of_brand1["Japanese"]["description"] = "";
	$fieldLabelssatei_of_brand1["Japanese"]["status"] = "商品状態";
	$fieldToolTipssatei_of_brand1["Japanese"]["status"] = "";
	$placeHolderssatei_of_brand1["Japanese"]["status"] = "";
	$fieldLabelssatei_of_brand1["Japanese"]["product_num"] = "ブランドID";
	$fieldToolTipssatei_of_brand1["Japanese"]["product_num"] = "";
	$placeHolderssatei_of_brand1["Japanese"]["product_num"] = "";
	$fieldLabelssatei_of_brand1["Japanese"]["yahoo_size"] = "サイズ";
	$fieldToolTipssatei_of_brand1["Japanese"]["yahoo_size"] = "";
	$placeHolderssatei_of_brand1["Japanese"]["yahoo_size"] = "";
	$fieldLabelssatei_of_brand1["Japanese"]["yahoo_title"] = "Yタイトル";
	$fieldToolTipssatei_of_brand1["Japanese"]["yahoo_title"] = "";
	$placeHolderssatei_of_brand1["Japanese"]["yahoo_title"] = "";
	$fieldLabelssatei_of_brand1["Japanese"]["yahoo_sankou_uwadai"] = "参考上代";
	$fieldToolTipssatei_of_brand1["Japanese"]["yahoo_sankou_uwadai"] = "";
	$placeHolderssatei_of_brand1["Japanese"]["yahoo_sankou_uwadai"] = "";
	$fieldLabelssatei_of_brand1["Japanese"]["yahoo_sozai"] = "素材";
	$fieldToolTipssatei_of_brand1["Japanese"]["yahoo_sozai"] = "";
	$placeHolderssatei_of_brand1["Japanese"]["yahoo_sozai"] = "";
	$fieldLabelssatei_of_brand1["Japanese"]["yahoo_color"] = "カラー";
	$fieldToolTipssatei_of_brand1["Japanese"]["yahoo_color"] = "";
	$placeHolderssatei_of_brand1["Japanese"]["yahoo_color"] = "";
	$fieldLabelssatei_of_brand1["Japanese"]["yahoo_kataban"] = "型番";
	$fieldToolTipssatei_of_brand1["Japanese"]["yahoo_kataban"] = "";
	$placeHolderssatei_of_brand1["Japanese"]["yahoo_kataban"] = "";
	$fieldLabelssatei_of_brand1["Japanese"]["yahoo_condition2"] = "コンディション";
	$fieldToolTipssatei_of_brand1["Japanese"]["yahoo_condition2"] = "";
	$placeHolderssatei_of_brand1["Japanese"]["yahoo_condition2"] = "";
	$fieldLabelssatei_of_brand1["Japanese"]["yahoo_sinaban"] = "品番";
	$fieldToolTipssatei_of_brand1["Japanese"]["yahoo_sinaban"] = "";
	$placeHolderssatei_of_brand1["Japanese"]["yahoo_sinaban"] = "";
	$fieldLabelssatei_of_brand1["Japanese"]["yahoo_sex"] = "性別";
	$fieldToolTipssatei_of_brand1["Japanese"]["yahoo_sex"] = "";
	$placeHolderssatei_of_brand1["Japanese"]["yahoo_sex"] = "";
	$fieldLabelssatei_of_brand1["Japanese"]["nyuukin_price"] = "Nyuukin Price";
	$fieldToolTipssatei_of_brand1["Japanese"]["nyuukin_price"] = "";
	$placeHolderssatei_of_brand1["Japanese"]["nyuukin_price"] = "";
	$fieldLabelssatei_of_brand1["Japanese"]["updated_by"] = "Updated By";
	$fieldToolTipssatei_of_brand1["Japanese"]["updated_by"] = "";
	$placeHolderssatei_of_brand1["Japanese"]["updated_by"] = "";
	$fieldLabelssatei_of_brand1["Japanese"]["raku_title"] = "楽天タイトル";
	$fieldToolTipssatei_of_brand1["Japanese"]["raku_title"] = "";
	$placeHolderssatei_of_brand1["Japanese"]["raku_title"] = "";
	$fieldLabelssatei_of_brand1["Japanese"]["label_output_flag"] = "ラベル出力";
	$fieldToolTipssatei_of_brand1["Japanese"]["label_output_flag"] = "";
	$placeHolderssatei_of_brand1["Japanese"]["label_output_flag"] = "";
	$fieldLabelssatei_of_brand1["Japanese"]["season"] = "季節";
	$fieldToolTipssatei_of_brand1["Japanese"]["season"] = "";
	$placeHolderssatei_of_brand1["Japanese"]["season"] = "";
	$fieldLabelssatei_of_brand1["Japanese"]["kanryou_henbi"] = "Kanryou Henbi";
	$fieldToolTipssatei_of_brand1["Japanese"]["kanryou_henbi"] = "";
	$placeHolderssatei_of_brand1["Japanese"]["kanryou_henbi"] = "";
	$fieldLabelssatei_of_brand1["Japanese"]["satei_by"] = "査定人";
	$fieldToolTipssatei_of_brand1["Japanese"]["satei_by"] = "";
	$placeHolderssatei_of_brand1["Japanese"]["satei_by"] = "";
	$fieldLabelssatei_of_brand1["Japanese"]["kaitori_by"] = "Kaitori By";
	$fieldToolTipssatei_of_brand1["Japanese"]["kaitori_by"] = "";
	$placeHolderssatei_of_brand1["Japanese"]["kaitori_by"] = "";
	$fieldLabelssatei_of_brand1["Japanese"]["comment"] = "コメント";
	$fieldToolTipssatei_of_brand1["Japanese"]["comment"] = "";
	$placeHolderssatei_of_brand1["Japanese"]["comment"] = "";
	$fieldLabelssatei_of_brand1["Japanese"]["satei_hi"] = "査定日";
	$fieldToolTipssatei_of_brand1["Japanese"]["satei_hi"] = "";
	$placeHolderssatei_of_brand1["Japanese"]["satei_hi"] = "";
	$fieldLabelssatei_of_brand1["Japanese"]["kaitory_hi"] = "Kaitory Hi";
	$fieldToolTipssatei_of_brand1["Japanese"]["kaitory_hi"] = "";
	$placeHolderssatei_of_brand1["Japanese"]["kaitory_hi"] = "";
	$fieldLabelssatei_of_brand1["Japanese"]["DT_UP_DATE"] = "DT UP DATE";
	$fieldToolTipssatei_of_brand1["Japanese"]["DT_UP_DATE"] = "";
	$placeHolderssatei_of_brand1["Japanese"]["DT_UP_DATE"] = "";
	$fieldLabelssatei_of_brand1["Japanese"]["AWAZU_DATE"] = "AWAZU DATE";
	$fieldToolTipssatei_of_brand1["Japanese"]["AWAZU_DATE"] = "";
	$placeHolderssatei_of_brand1["Japanese"]["AWAZU_DATE"] = "";
	$fieldLabelssatei_of_brand1["Japanese"]["AWAZU_NIN"] = "AWAZU NIN";
	$fieldToolTipssatei_of_brand1["Japanese"]["AWAZU_NIN"] = "";
	$placeHolderssatei_of_brand1["Japanese"]["AWAZU_NIN"] = "";
	$fieldLabelssatei_of_brand1["Japanese"]["Destination_selling"] = "売り先";
	$fieldToolTipssatei_of_brand1["Japanese"]["Destination_selling"] = "";
	$placeHolderssatei_of_brand1["Japanese"]["Destination_selling"] = "";
	$fieldLabelssatei_of_brand1["Japanese"]["Finish"] = "仕上";
	$fieldToolTipssatei_of_brand1["Japanese"]["Finish"] = "";
	$placeHolderssatei_of_brand1["Japanese"]["Finish"] = "";
	$fieldLabelssatei_of_brand1["Japanese"]["Discrimination"] = "鑑別";
	$fieldToolTipssatei_of_brand1["Japanese"]["Discrimination"] = "";
	$placeHolderssatei_of_brand1["Japanese"]["Discrimination"] = "";
	$fieldLabelssatei_of_brand1["Japanese"]["accessories"] = "付属品";
	$fieldToolTipssatei_of_brand1["Japanese"]["accessories"] = "";
	$placeHolderssatei_of_brand1["Japanese"]["accessories"] = "";
	$fieldLabelssatei_of_brand1["Japanese"]["priority"] = "優先";
	$fieldToolTipssatei_of_brand1["Japanese"]["priority"] = "";
	$placeHolderssatei_of_brand1["Japanese"]["priority"] = "";
	$fieldLabelssatei_of_brand1["Japanese"]["A_storage"] = "A保管";
	$fieldToolTipssatei_of_brand1["Japanese"]["A_storage"] = "";
	$placeHolderssatei_of_brand1["Japanese"]["A_storage"] = "";
	$fieldLabelssatei_of_brand1["Japanese"]["price_secret"] = "買取額隠語";
	$fieldToolTipssatei_of_brand1["Japanese"]["price_secret"] = "";
	$placeHolderssatei_of_brand1["Japanese"]["price_secret"] = "";
	$fieldLabelssatei_of_brand1["Japanese"]["sales_price_secret"] = "販売額隠語";
	$fieldToolTipssatei_of_brand1["Japanese"]["sales_price_secret"] = "";
	$placeHolderssatei_of_brand1["Japanese"]["sales_price_secret"] = "";
	$fieldLabelssatei_of_brand1["Japanese"]["eq"] = "=";
	$fieldToolTipssatei_of_brand1["Japanese"]["eq"] = "";
	$placeHolderssatei_of_brand1["Japanese"]["eq"] = "";
	$fieldLabelssatei_of_brand1["Japanese"]["en"] = "円";
	$fieldToolTipssatei_of_brand1["Japanese"]["en"] = "";
	$placeHolderssatei_of_brand1["Japanese"]["en"] = "";
	$fieldLabelssatei_of_brand1["Japanese"]["line"] = "ライン";
	$fieldToolTipssatei_of_brand1["Japanese"]["line"] = "";
	$placeHolderssatei_of_brand1["Japanese"]["line"] = "";
	$fieldLabelssatei_of_brand1["Japanese"]["item_name"] = "アイテム名";
	$fieldToolTipssatei_of_brand1["Japanese"]["item_name"] = "";
	$placeHolderssatei_of_brand1["Japanese"]["item_name"] = "";
	$fieldLabelssatei_of_brand1["Japanese"]["handle"] = "柄";
	$fieldToolTipssatei_of_brand1["Japanese"]["handle"] = "";
	$placeHolderssatei_of_brand1["Japanese"]["handle"] = "";
	$fieldLabelssatei_of_brand1["Japanese"]["serial_number"] = "機番";
	$fieldToolTipssatei_of_brand1["Japanese"]["serial_number"] = "";
	$placeHolderssatei_of_brand1["Japanese"]["serial_number"] = "";
	$fieldLabelssatei_of_brand1["Japanese"]["stamp"] = "刻印";
	$fieldToolTipssatei_of_brand1["Japanese"]["stamp"] = "";
	$placeHolderssatei_of_brand1["Japanese"]["stamp"] = "";
	$fieldLabelssatei_of_brand1["Japanese"]["Sleeve_Length"] = "袖丈";
	$fieldToolTipssatei_of_brand1["Japanese"]["Sleeve_Length"] = "";
	$placeHolderssatei_of_brand1["Japanese"]["Sleeve_Length"] = "";
	$fieldLabelssatei_of_brand1["Japanese"]["length"] = "着丈";
	$fieldToolTipssatei_of_brand1["Japanese"]["length"] = "";
	$placeHolderssatei_of_brand1["Japanese"]["length"] = "";
	$fieldLabelssatei_of_brand1["Japanese"]["ecc_seq"] = "顧客番号";
	$fieldToolTipssatei_of_brand1["Japanese"]["ecc_seq"] = "";
	$placeHolderssatei_of_brand1["Japanese"]["ecc_seq"] = "";
	$fieldLabelssatei_of_brand1["Japanese"]["yahoo_junle"] = "ブランドジャンル";
	$fieldToolTipssatei_of_brand1["Japanese"]["yahoo_junle"] = "";
	$placeHolderssatei_of_brand1["Japanese"]["yahoo_junle"] = "";
	$fieldLabelssatei_of_brand1["Japanese"]["logo"] = "ロゴ";
	$fieldToolTipssatei_of_brand1["Japanese"]["logo"] = "";
	$placeHolderssatei_of_brand1["Japanese"]["logo"] = "";
	$fieldLabelssatei_of_brand1["Japanese"]["parts"] = "金具（パーツ）";
	$fieldToolTipssatei_of_brand1["Japanese"]["parts"] = "";
	$placeHolderssatei_of_brand1["Japanese"]["parts"] = "";
	$fieldLabelssatei_of_brand1["Japanese"]["country_of_origin"] = "原産国";
	$fieldToolTipssatei_of_brand1["Japanese"]["country_of_origin"] = "";
	$placeHolderssatei_of_brand1["Japanese"]["country_of_origin"] = "";
	$fieldLabelssatei_of_brand1["Japanese"]["zipper"] = "金具（ファスナー）";
	$fieldToolTipssatei_of_brand1["Japanese"]["zipper"] = "";
	$placeHolderssatei_of_brand1["Japanese"]["zipper"] = "";
	$fieldLabelssatei_of_brand1["Japanese"]["guarantee"] = "ギャランティ";
	$fieldToolTipssatei_of_brand1["Japanese"]["guarantee"] = "";
	$placeHolderssatei_of_brand1["Japanese"]["guarantee"] = "";
	$fieldLabelssatei_of_brand1["Japanese"]["errors"] = "真贋チェックエラー";
	$fieldToolTipssatei_of_brand1["Japanese"]["errors"] = "";
	$placeHolderssatei_of_brand1["Japanese"]["errors"] = "";
	$fieldLabelssatei_of_brand1["Japanese"]["amount"] = "内容量";
	$fieldToolTipssatei_of_brand1["Japanese"]["amount"] = "";
	$placeHolderssatei_of_brand1["Japanese"]["amount"] = "";
	$fieldLabelssatei_of_brand1["Japanese"]["satei_error"] = "査定抜けエラー";
	$fieldToolTipssatei_of_brand1["Japanese"]["satei_error"] = "";
	$placeHolderssatei_of_brand1["Japanese"]["satei_error"] = "";
	$fieldLabelssatei_of_brand1["Japanese"]["shape_supplement"] = "形状補足";
	$fieldToolTipssatei_of_brand1["Japanese"]["shape_supplement"] = "";
	$placeHolderssatei_of_brand1["Japanese"]["shape_supplement"] = "";
	$fieldLabelssatei_of_brand1["Japanese"]["product_style"] = "形状名";
	$fieldToolTipssatei_of_brand1["Japanese"]["product_style"] = "";
	$placeHolderssatei_of_brand1["Japanese"]["product_style"] = "";
	$fieldLabelssatei_of_brand1["Japanese"]["collar_neck_line"] = "襟・ネックライン";
	$fieldToolTipssatei_of_brand1["Japanese"]["collar_neck_line"] = "";
	$placeHolderssatei_of_brand1["Japanese"]["collar_neck_line"] = "";
	$fieldLabelssatei_of_brand1["Japanese"]["breast"] = "ブレスト";
	$fieldToolTipssatei_of_brand1["Japanese"]["breast"] = "";
	$placeHolderssatei_of_brand1["Japanese"]["breast"] = "";
	$fieldLabelssatei_of_brand1["Japanese"]["silhouette"] = "シルエット";
	$fieldToolTipssatei_of_brand1["Japanese"]["silhouette"] = "";
	$placeHolderssatei_of_brand1["Japanese"]["silhouette"] = "";
	$fieldLabelssatei_of_brand1["Japanese"]["sleeve"] = "スリーブ";
	$fieldToolTipssatei_of_brand1["Japanese"]["sleeve"] = "";
	$placeHolderssatei_of_brand1["Japanese"]["sleeve"] = "";
	$fieldLabelssatei_of_brand1["Japanese"]["hall_mark"] = "ホールマーク";
	$fieldToolTipssatei_of_brand1["Japanese"]["hall_mark"] = "";
	$placeHolderssatei_of_brand1["Japanese"]["hall_mark"] = "";
	$fieldLabelssatei_of_brand1["Japanese"]["plate"] = "プレート";
	$fieldToolTipssatei_of_brand1["Japanese"]["plate"] = "";
	$placeHolderssatei_of_brand1["Japanese"]["plate"] = "";
	$fieldLabelssatei_of_brand1["Japanese"]["toe"] = "トウ";
	$fieldToolTipssatei_of_brand1["Japanese"]["toe"] = "";
	$placeHolderssatei_of_brand1["Japanese"]["toe"] = "";
	$fieldLabelssatei_of_brand1["Japanese"]["heel"] = "ソール/ヒール";
	$fieldToolTipssatei_of_brand1["Japanese"]["heel"] = "";
	$placeHolderssatei_of_brand1["Japanese"]["heel"] = "";
	$fieldLabelssatei_of_brand1["Japanese"]["cloth"] = "生地";
	$fieldToolTipssatei_of_brand1["Japanese"]["cloth"] = "";
	$placeHolderssatei_of_brand1["Japanese"]["cloth"] = "";
	$fieldLabelssatei_of_brand1["Japanese"]["parallel_import_flag"] = "並行輸入品";
	$fieldToolTipssatei_of_brand1["Japanese"]["parallel_import_flag"] = "";
	$placeHolderssatei_of_brand1["Japanese"]["parallel_import_flag"] = "";
	$fieldLabelssatei_of_brand1["Japanese"]["designer"] = "デザイナー";
	$fieldToolTipssatei_of_brand1["Japanese"]["designer"] = "";
	$placeHolderssatei_of_brand1["Japanese"]["designer"] = "";
	$fieldLabelssatei_of_brand1["Japanese"]["meisai_number"] = "明細No.";
	$fieldToolTipssatei_of_brand1["Japanese"]["meisai_number"] = "";
	$placeHolderssatei_of_brand1["Japanese"]["meisai_number"] = "";
	$fieldLabelssatei_of_brand1["Japanese"]["tentou_label_output_flag"] = "ST不変ラベル出力";
	$fieldToolTipssatei_of_brand1["Japanese"]["tentou_label_output_flag"] = "";
	$placeHolderssatei_of_brand1["Japanese"]["tentou_label_output_flag"] = "";
	$fieldLabelssatei_of_brand1["Japanese"]["novelty"] = "ノベルティ";
	$fieldToolTipssatei_of_brand1["Japanese"]["novelty"] = "";
	$placeHolderssatei_of_brand1["Japanese"]["novelty"] = "";
	$fieldLabelssatei_of_brand1["Japanese"]["initial_included"] = "イニシャル入り";
	$fieldToolTipssatei_of_brand1["Japanese"]["initial_included"] = "";
	$placeHolderssatei_of_brand1["Japanese"]["initial_included"] = "";
	$fieldLabelssatei_of_brand1["Japanese"]["motif"] = "モチーフ";
	$fieldToolTipssatei_of_brand1["Japanese"]["motif"] = "";
	$placeHolderssatei_of_brand1["Japanese"]["motif"] = "";
	$fieldLabelssatei_of_brand1["Japanese"]["auto_price_cut_prohibited"] = "自動値下げ禁止フラグ";
	$fieldToolTipssatei_of_brand1["Japanese"]["auto_price_cut_prohibited"] = "";
	$placeHolderssatei_of_brand1["Japanese"]["auto_price_cut_prohibited"] = "";
	$fieldLabelssatei_of_brand1["Japanese"]["Eoc_trader_id_for_buy"] = "Eoc Trader Id For Buy";
	$fieldToolTipssatei_of_brand1["Japanese"]["Eoc_trader_id_for_buy"] = "";
	$placeHolderssatei_of_brand1["Japanese"]["Eoc_trader_id_for_buy"] = "";
	$fieldLabelssatei_of_brand1["Japanese"]["other_cost"] = "その他コスト";
	$fieldToolTipssatei_of_brand1["Japanese"]["other_cost"] = "";
	$placeHolderssatei_of_brand1["Japanese"]["other_cost"] = "";
	$fieldLabelssatei_of_brand1["Japanese"]["yahoo_condition1"] = "コンディションの詳細";
	$fieldToolTipssatei_of_brand1["Japanese"]["yahoo_condition1"] = "";
	$placeHolderssatei_of_brand1["Japanese"]["yahoo_condition1"] = "";
	$fieldLabelssatei_of_brand1["Japanese"]["remark"] = "商品説明";
	$fieldToolTipssatei_of_brand1["Japanese"]["remark"] = "";
	$placeHolderssatei_of_brand1["Japanese"]["remark"] = "";
	if (count($fieldToolTipssatei_of_brand1["Japanese"]))
		$tdatasatei_of_brand1[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelssatei_of_brand1[""] = array();
	$fieldToolTipssatei_of_brand1[""] = array();
	$placeHolderssatei_of_brand1[""] = array();
	$pageTitlessatei_of_brand1[""] = array();
	$fieldLabelssatei_of_brand1[""]["logo"] = "Logo";
	$fieldToolTipssatei_of_brand1[""]["logo"] = "";
	$placeHolderssatei_of_brand1[""]["logo"] = "";
	$fieldLabelssatei_of_brand1[""]["parts"] = "Parts";
	$fieldToolTipssatei_of_brand1[""]["parts"] = "";
	$placeHolderssatei_of_brand1[""]["parts"] = "";
	$fieldLabelssatei_of_brand1[""]["country_of_origin"] = "Country Of Origin";
	$fieldToolTipssatei_of_brand1[""]["country_of_origin"] = "";
	$placeHolderssatei_of_brand1[""]["country_of_origin"] = "";
	$fieldLabelssatei_of_brand1[""]["zipper"] = "Zipper";
	$fieldToolTipssatei_of_brand1[""]["zipper"] = "";
	$placeHolderssatei_of_brand1[""]["zipper"] = "";
	$fieldLabelssatei_of_brand1[""]["guarantee"] = "Guarantee";
	$fieldToolTipssatei_of_brand1[""]["guarantee"] = "";
	$placeHolderssatei_of_brand1[""]["guarantee"] = "";
	$fieldLabelssatei_of_brand1[""]["errors"] = "Errors";
	$fieldToolTipssatei_of_brand1[""]["errors"] = "";
	$placeHolderssatei_of_brand1[""]["errors"] = "";
	$fieldLabelssatei_of_brand1[""]["amount"] = "Amount";
	$fieldToolTipssatei_of_brand1[""]["amount"] = "";
	$placeHolderssatei_of_brand1[""]["amount"] = "";
	$fieldLabelssatei_of_brand1[""]["satei_error"] = "Satei Error";
	$fieldToolTipssatei_of_brand1[""]["satei_error"] = "";
	$placeHolderssatei_of_brand1[""]["satei_error"] = "";
	$fieldLabelssatei_of_brand1[""]["shape_supplement"] = "Shape Supplement";
	$fieldToolTipssatei_of_brand1[""]["shape_supplement"] = "";
	$placeHolderssatei_of_brand1[""]["shape_supplement"] = "";
	$fieldLabelssatei_of_brand1[""]["product_style"] = "Product Style";
	$fieldToolTipssatei_of_brand1[""]["product_style"] = "";
	$placeHolderssatei_of_brand1[""]["product_style"] = "";
	$fieldLabelssatei_of_brand1[""]["collar_neck_line"] = "Collar Neck Line";
	$fieldToolTipssatei_of_brand1[""]["collar_neck_line"] = "";
	$placeHolderssatei_of_brand1[""]["collar_neck_line"] = "";
	$fieldLabelssatei_of_brand1[""]["breast"] = "Breast";
	$fieldToolTipssatei_of_brand1[""]["breast"] = "";
	$placeHolderssatei_of_brand1[""]["breast"] = "";
	$fieldLabelssatei_of_brand1[""]["silhouette"] = "Silhouette";
	$fieldToolTipssatei_of_brand1[""]["silhouette"] = "";
	$placeHolderssatei_of_brand1[""]["silhouette"] = "";
	$fieldLabelssatei_of_brand1[""]["sleeve"] = "Sleeve";
	$fieldToolTipssatei_of_brand1[""]["sleeve"] = "";
	$placeHolderssatei_of_brand1[""]["sleeve"] = "";
	$fieldLabelssatei_of_brand1[""]["hall_mark"] = "Hall Mark";
	$fieldToolTipssatei_of_brand1[""]["hall_mark"] = "";
	$placeHolderssatei_of_brand1[""]["hall_mark"] = "";
	$fieldLabelssatei_of_brand1[""]["plate"] = "Plate";
	$fieldToolTipssatei_of_brand1[""]["plate"] = "";
	$placeHolderssatei_of_brand1[""]["plate"] = "";
	$fieldLabelssatei_of_brand1[""]["toe"] = "Toe";
	$fieldToolTipssatei_of_brand1[""]["toe"] = "";
	$placeHolderssatei_of_brand1[""]["toe"] = "";
	$fieldLabelssatei_of_brand1[""]["heel"] = "Heel";
	$fieldToolTipssatei_of_brand1[""]["heel"] = "";
	$placeHolderssatei_of_brand1[""]["heel"] = "";
	$fieldLabelssatei_of_brand1[""]["cloth"] = "Cloth";
	$fieldToolTipssatei_of_brand1[""]["cloth"] = "";
	$placeHolderssatei_of_brand1[""]["cloth"] = "";
	$fieldLabelssatei_of_brand1[""]["parallel_import_flag"] = "Parallel Import Flag";
	$fieldToolTipssatei_of_brand1[""]["parallel_import_flag"] = "";
	$placeHolderssatei_of_brand1[""]["parallel_import_flag"] = "";
	$fieldLabelssatei_of_brand1[""]["designer"] = "Designer";
	$fieldToolTipssatei_of_brand1[""]["designer"] = "";
	$placeHolderssatei_of_brand1[""]["designer"] = "";
	$fieldLabelssatei_of_brand1[""]["meisai_number"] = "Meisai Number";
	$fieldToolTipssatei_of_brand1[""]["meisai_number"] = "";
	$placeHolderssatei_of_brand1[""]["meisai_number"] = "";
	$fieldLabelssatei_of_brand1[""]["tentou_label_output_flag"] = "Tentou Label Output Flag";
	$fieldToolTipssatei_of_brand1[""]["tentou_label_output_flag"] = "";
	$placeHolderssatei_of_brand1[""]["tentou_label_output_flag"] = "";
	$fieldLabelssatei_of_brand1[""]["novelty"] = "Novelty";
	$fieldToolTipssatei_of_brand1[""]["novelty"] = "";
	$placeHolderssatei_of_brand1[""]["novelty"] = "";
	$fieldLabelssatei_of_brand1[""]["initial_included"] = "Initial Included";
	$fieldToolTipssatei_of_brand1[""]["initial_included"] = "";
	$placeHolderssatei_of_brand1[""]["initial_included"] = "";
	$fieldLabelssatei_of_brand1[""]["motif"] = "Motif";
	$fieldToolTipssatei_of_brand1[""]["motif"] = "";
	$placeHolderssatei_of_brand1[""]["motif"] = "";
	$fieldLabelssatei_of_brand1[""]["auto_price_cut_prohibited"] = "Auto Price Cut Prohibited";
	$fieldToolTipssatei_of_brand1[""]["auto_price_cut_prohibited"] = "";
	$placeHolderssatei_of_brand1[""]["auto_price_cut_prohibited"] = "";
	$fieldLabelssatei_of_brand1[""]["Eoc_trader_id_for_buy"] = "Eoc Trader Id For Buy";
	$fieldToolTipssatei_of_brand1[""]["Eoc_trader_id_for_buy"] = "";
	$placeHolderssatei_of_brand1[""]["Eoc_trader_id_for_buy"] = "";
	$fieldLabelssatei_of_brand1[""]["other_cost"] = "Other Cost";
	$fieldToolTipssatei_of_brand1[""]["other_cost"] = "";
	$placeHolderssatei_of_brand1[""]["other_cost"] = "";
	$fieldLabelssatei_of_brand1[""]["yahoo_condition1"] = "Yahoo Condition1";
	$fieldToolTipssatei_of_brand1[""]["yahoo_condition1"] = "";
	$placeHolderssatei_of_brand1[""]["yahoo_condition1"] = "";
	$fieldLabelssatei_of_brand1[""]["remark"] = "Remark";
	$fieldToolTipssatei_of_brand1[""]["remark"] = "";
	$placeHolderssatei_of_brand1[""]["remark"] = "";
	if (count($fieldToolTipssatei_of_brand1[""]))
		$tdatasatei_of_brand1[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelssatei_of_brand1["English"] = array();
	$fieldToolTipssatei_of_brand1["English"] = array();
	$placeHolderssatei_of_brand1["English"] = array();
	$pageTitlessatei_of_brand1["English"] = array();
	$fieldLabelssatei_of_brand1["English"]["parallel_import_flag"] = "Parallel Import Flag";
	$fieldToolTipssatei_of_brand1["English"]["parallel_import_flag"] = "";
	$placeHolderssatei_of_brand1["English"]["parallel_import_flag"] = "";
	$fieldLabelssatei_of_brand1["English"]["designer"] = "Designer";
	$fieldToolTipssatei_of_brand1["English"]["designer"] = "";
	$placeHolderssatei_of_brand1["English"]["designer"] = "";
	$fieldLabelssatei_of_brand1["English"]["meisai_number"] = "Meisai Number";
	$fieldToolTipssatei_of_brand1["English"]["meisai_number"] = "";
	$placeHolderssatei_of_brand1["English"]["meisai_number"] = "";
	$fieldLabelssatei_of_brand1["English"]["tentou_label_output_flag"] = "Tentou Label Output Flag";
	$fieldToolTipssatei_of_brand1["English"]["tentou_label_output_flag"] = "";
	$placeHolderssatei_of_brand1["English"]["tentou_label_output_flag"] = "";
	$fieldLabelssatei_of_brand1["English"]["novelty"] = "Novelty";
	$fieldToolTipssatei_of_brand1["English"]["novelty"] = "";
	$placeHolderssatei_of_brand1["English"]["novelty"] = "";
	$fieldLabelssatei_of_brand1["English"]["initial_included"] = "Initial Included";
	$fieldToolTipssatei_of_brand1["English"]["initial_included"] = "";
	$placeHolderssatei_of_brand1["English"]["initial_included"] = "";
	$fieldLabelssatei_of_brand1["English"]["motif"] = "Motif";
	$fieldToolTipssatei_of_brand1["English"]["motif"] = "";
	$placeHolderssatei_of_brand1["English"]["motif"] = "";
	$fieldLabelssatei_of_brand1["English"]["auto_price_cut_prohibited"] = "Auto Price Cut Prohibited";
	$fieldToolTipssatei_of_brand1["English"]["auto_price_cut_prohibited"] = "";
	$placeHolderssatei_of_brand1["English"]["auto_price_cut_prohibited"] = "";
	$fieldLabelssatei_of_brand1["English"]["Eoc_trader_id_for_buy"] = "Eoc Trader Id For Buy";
	$fieldToolTipssatei_of_brand1["English"]["Eoc_trader_id_for_buy"] = "";
	$placeHolderssatei_of_brand1["English"]["Eoc_trader_id_for_buy"] = "";
	$fieldLabelssatei_of_brand1["English"]["other_cost"] = "Other Cost";
	$fieldToolTipssatei_of_brand1["English"]["other_cost"] = "";
	$placeHolderssatei_of_brand1["English"]["other_cost"] = "";
	$fieldLabelssatei_of_brand1["English"]["yahoo_condition1"] = "Yahoo Condition1";
	$fieldToolTipssatei_of_brand1["English"]["yahoo_condition1"] = "";
	$placeHolderssatei_of_brand1["English"]["yahoo_condition1"] = "";
	$fieldLabelssatei_of_brand1["English"]["remark"] = "Remark";
	$fieldToolTipssatei_of_brand1["English"]["remark"] = "";
	$placeHolderssatei_of_brand1["English"]["remark"] = "";
	if (count($fieldToolTipssatei_of_brand1["English"]))
		$tdatasatei_of_brand1[".isUseToolTips"] = true;
}


	$tdatasatei_of_brand1[".NCSearch"] = true;



$tdatasatei_of_brand1[".shortTableName"] = "satei_of_brand1";
$tdatasatei_of_brand1[".nSecOptions"] = 0;
$tdatasatei_of_brand1[".recsPerRowPrint"] = 1;
$tdatasatei_of_brand1[".mainTableOwnerID"] = "";
$tdatasatei_of_brand1[".moveNext"] = 1;
$tdatasatei_of_brand1[".entityType"] = 1;

$tdatasatei_of_brand1[".strOriginalTableName"] = "shouhin";

	



$tdatasatei_of_brand1[".showAddInPopup"] = false;

$tdatasatei_of_brand1[".showEditInPopup"] = false;

$tdatasatei_of_brand1[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatasatei_of_brand1[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatasatei_of_brand1[".fieldsForRegister"] = array();

$tdatasatei_of_brand1[".listAjax"] = false;

	$tdatasatei_of_brand1[".audit"] = true;

	$tdatasatei_of_brand1[".locking"] = false;



$tdatasatei_of_brand1[".list"] = true;

$tdatasatei_of_brand1[".inlineEdit"] = true;


$tdatasatei_of_brand1[".reorderRecordsByHeader"] = true;
$tdatasatei_of_brand1[".createSortByDropdown"] = true;
$tdatasatei_of_brand1[".strSortControlSettingsJSON"] = "";



$tdatasatei_of_brand1[".inlineAdd"] = true;

$tdatasatei_of_brand1[".import"] = true;

$tdatasatei_of_brand1[".exportTo"] = true;


$tdatasatei_of_brand1[".delete"] = true;

$tdatasatei_of_brand1[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatasatei_of_brand1[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatasatei_of_brand1[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatasatei_of_brand1[".searchSaving"] = false;
//

$tdatasatei_of_brand1[".showSearchPanel"] = true;
		$tdatasatei_of_brand1[".flexibleSearch"] = true;

$tdatasatei_of_brand1[".isUseAjaxSuggest"] = true;

$tdatasatei_of_brand1[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																			
					
					
					
					
					
																																																																																																																																																																																																																																																																																																																		
																																								
																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																												

$tdatasatei_of_brand1[".ajaxCodeSnippetAdded"] = false;

$tdatasatei_of_brand1[".buttonsAdded"] = true;

$tdatasatei_of_brand1[".addPageEvents"] = true;

// use timepicker for search panel
$tdatasatei_of_brand1[".isUseTimeForSearch"] = false;



$tdatasatei_of_brand1[".badgeColor"] = "daa520";


$tdatasatei_of_brand1[".allSearchFields"] = array();
$tdatasatei_of_brand1[".filterFields"] = array();
$tdatasatei_of_brand1[".requiredSearchFields"] = array();

$tdatasatei_of_brand1[".allSearchFields"][] = "auto_price_cut_prohibited";
	$tdatasatei_of_brand1[".allSearchFields"][] = "other_cost";
	$tdatasatei_of_brand1[".allSearchFields"][] = "yahoo_condition1";
	$tdatasatei_of_brand1[".allSearchFields"][] = "remark";
	$tdatasatei_of_brand1[".allSearchFields"][] = "initial_included";
	$tdatasatei_of_brand1[".allSearchFields"][] = "novelty";
	$tdatasatei_of_brand1[".allSearchFields"][] = "motif";
	$tdatasatei_of_brand1[".allSearchFields"][] = "meisai_number";
	$tdatasatei_of_brand1[".allSearchFields"][] = "tentou_label_output_flag";
	$tdatasatei_of_brand1[".allSearchFields"][] = "product_num";
	$tdatasatei_of_brand1[".allSearchFields"][] = "category_id";
	$tdatasatei_of_brand1[".allSearchFields"][] = "sub_category_id1";
	$tdatasatei_of_brand1[".allSearchFields"][] = "yahoo_sex";
	$tdatasatei_of_brand1[".allSearchFields"][] = "yahoo_condition2";
	$tdatasatei_of_brand1[".allSearchFields"][] = "ecc_seq";
	$tdatasatei_of_brand1[".allSearchFields"][] = "status";
	$tdatasatei_of_brand1[".allSearchFields"][] = "satei_by";
	$tdatasatei_of_brand1[".allSearchFields"][] = "title";
	$tdatasatei_of_brand1[".allSearchFields"][] = "product_id";
	$tdatasatei_of_brand1[".allSearchFields"][] = "yahoo_sinaban";
	$tdatasatei_of_brand1[".allSearchFields"][] = "price";
	$tdatasatei_of_brand1[".allSearchFields"][] = "sales_price";
	$tdatasatei_of_brand1[".allSearchFields"][] = "description";
	$tdatasatei_of_brand1[".allSearchFields"][] = "yahoo_kataban";
	$tdatasatei_of_brand1[".allSearchFields"][] = "yahoo_sozai";
	$tdatasatei_of_brand1[".allSearchFields"][] = "yahoo_color";
	$tdatasatei_of_brand1[".allSearchFields"][] = "yahoo_size";
	$tdatasatei_of_brand1[".allSearchFields"][] = "yahoo_sankou_uwadai";
	$tdatasatei_of_brand1[".allSearchFields"][] = "season";
	$tdatasatei_of_brand1[".allSearchFields"][] = "yahoo_title";
	$tdatasatei_of_brand1[".allSearchFields"][] = "goods_title";
	$tdatasatei_of_brand1[".allSearchFields"][] = "raku_title";
	$tdatasatei_of_brand1[".allSearchFields"][] = "stamp";
	$tdatasatei_of_brand1[".allSearchFields"][] = "Sleeve_Length";
	$tdatasatei_of_brand1[".allSearchFields"][] = "length";
	$tdatasatei_of_brand1[".allSearchFields"][] = "label_output_flag";
	$tdatasatei_of_brand1[".allSearchFields"][] = "comment";
	$tdatasatei_of_brand1[".allSearchFields"][] = "satei_hi";
	$tdatasatei_of_brand1[".allSearchFields"][] = "Destination_selling";
	$tdatasatei_of_brand1[".allSearchFields"][] = "accessories";
	$tdatasatei_of_brand1[".allSearchFields"][] = "priority";
	$tdatasatei_of_brand1[".allSearchFields"][] = "A_storage";
	$tdatasatei_of_brand1[".allSearchFields"][] = "price_secret";
	$tdatasatei_of_brand1[".allSearchFields"][] = "sales_price_secret";
	$tdatasatei_of_brand1[".allSearchFields"][] = "line";
	$tdatasatei_of_brand1[".allSearchFields"][] = "item_name";
	$tdatasatei_of_brand1[".allSearchFields"][] = "handle";
	$tdatasatei_of_brand1[".allSearchFields"][] = "serial_number";
	$tdatasatei_of_brand1[".allSearchFields"][] = "logo";
	$tdatasatei_of_brand1[".allSearchFields"][] = "parts";
	$tdatasatei_of_brand1[".allSearchFields"][] = "country_of_origin";
	$tdatasatei_of_brand1[".allSearchFields"][] = "zipper";
	$tdatasatei_of_brand1[".allSearchFields"][] = "guarantee";
	$tdatasatei_of_brand1[".allSearchFields"][] = "errors";
	$tdatasatei_of_brand1[".allSearchFields"][] = "collar_neck_line";
	$tdatasatei_of_brand1[".allSearchFields"][] = "product_style";
	$tdatasatei_of_brand1[".allSearchFields"][] = "sleeve";
	$tdatasatei_of_brand1[".allSearchFields"][] = "amount";
	$tdatasatei_of_brand1[".allSearchFields"][] = "satei_error";
	$tdatasatei_of_brand1[".allSearchFields"][] = "silhouette";
	$tdatasatei_of_brand1[".allSearchFields"][] = "shape_supplement";
	$tdatasatei_of_brand1[".allSearchFields"][] = "breast";
	$tdatasatei_of_brand1[".allSearchFields"][] = "plate";
	$tdatasatei_of_brand1[".allSearchFields"][] = "hall_mark";
	$tdatasatei_of_brand1[".allSearchFields"][] = "designer";
	$tdatasatei_of_brand1[".allSearchFields"][] = "toe";
	$tdatasatei_of_brand1[".allSearchFields"][] = "cloth";
	$tdatasatei_of_brand1[".allSearchFields"][] = "heel";
	

$tdatasatei_of_brand1[".googleLikeFields"] = array();
$tdatasatei_of_brand1[".googleLikeFields"][] = "product_id";
$tdatasatei_of_brand1[".googleLikeFields"][] = "category_id";
$tdatasatei_of_brand1[".googleLikeFields"][] = "goods_title";
$tdatasatei_of_brand1[".googleLikeFields"][] = "title";
$tdatasatei_of_brand1[".googleLikeFields"][] = "sub_category_id1";
$tdatasatei_of_brand1[".googleLikeFields"][] = "price";
$tdatasatei_of_brand1[".googleLikeFields"][] = "sales_price";
$tdatasatei_of_brand1[".googleLikeFields"][] = "description";
$tdatasatei_of_brand1[".googleLikeFields"][] = "status";
$tdatasatei_of_brand1[".googleLikeFields"][] = "product_num";
$tdatasatei_of_brand1[".googleLikeFields"][] = "yahoo_size";
$tdatasatei_of_brand1[".googleLikeFields"][] = "yahoo_title";
$tdatasatei_of_brand1[".googleLikeFields"][] = "yahoo_sankou_uwadai";
$tdatasatei_of_brand1[".googleLikeFields"][] = "yahoo_sozai";
$tdatasatei_of_brand1[".googleLikeFields"][] = "yahoo_color";
$tdatasatei_of_brand1[".googleLikeFields"][] = "yahoo_kataban";
$tdatasatei_of_brand1[".googleLikeFields"][] = "yahoo_condition2";
$tdatasatei_of_brand1[".googleLikeFields"][] = "yahoo_sinaban";
$tdatasatei_of_brand1[".googleLikeFields"][] = "yahoo_sex";
$tdatasatei_of_brand1[".googleLikeFields"][] = "raku_title";
$tdatasatei_of_brand1[".googleLikeFields"][] = "label_output_flag";
$tdatasatei_of_brand1[".googleLikeFields"][] = "season";
$tdatasatei_of_brand1[".googleLikeFields"][] = "satei_by";
$tdatasatei_of_brand1[".googleLikeFields"][] = "comment";
$tdatasatei_of_brand1[".googleLikeFields"][] = "satei_hi";
$tdatasatei_of_brand1[".googleLikeFields"][] = "Destination_selling";
$tdatasatei_of_brand1[".googleLikeFields"][] = "Finish";
$tdatasatei_of_brand1[".googleLikeFields"][] = "Discrimination";
$tdatasatei_of_brand1[".googleLikeFields"][] = "accessories";
$tdatasatei_of_brand1[".googleLikeFields"][] = "priority";
$tdatasatei_of_brand1[".googleLikeFields"][] = "A_storage";
$tdatasatei_of_brand1[".googleLikeFields"][] = "price_secret";
$tdatasatei_of_brand1[".googleLikeFields"][] = "sales_price_secret";
$tdatasatei_of_brand1[".googleLikeFields"][] = "line";
$tdatasatei_of_brand1[".googleLikeFields"][] = "item_name";
$tdatasatei_of_brand1[".googleLikeFields"][] = "handle";
$tdatasatei_of_brand1[".googleLikeFields"][] = "serial_number";
$tdatasatei_of_brand1[".googleLikeFields"][] = "stamp";
$tdatasatei_of_brand1[".googleLikeFields"][] = "Sleeve_Length";
$tdatasatei_of_brand1[".googleLikeFields"][] = "length";
$tdatasatei_of_brand1[".googleLikeFields"][] = "ecc_seq";
$tdatasatei_of_brand1[".googleLikeFields"][] = "yahoo_junle";
$tdatasatei_of_brand1[".googleLikeFields"][] = "logo";
$tdatasatei_of_brand1[".googleLikeFields"][] = "parts";
$tdatasatei_of_brand1[".googleLikeFields"][] = "country_of_origin";
$tdatasatei_of_brand1[".googleLikeFields"][] = "zipper";
$tdatasatei_of_brand1[".googleLikeFields"][] = "guarantee";
$tdatasatei_of_brand1[".googleLikeFields"][] = "errors";
$tdatasatei_of_brand1[".googleLikeFields"][] = "amount";
$tdatasatei_of_brand1[".googleLikeFields"][] = "satei_error";
$tdatasatei_of_brand1[".googleLikeFields"][] = "shape_supplement";
$tdatasatei_of_brand1[".googleLikeFields"][] = "product_style";
$tdatasatei_of_brand1[".googleLikeFields"][] = "collar_neck_line";
$tdatasatei_of_brand1[".googleLikeFields"][] = "breast";
$tdatasatei_of_brand1[".googleLikeFields"][] = "silhouette";
$tdatasatei_of_brand1[".googleLikeFields"][] = "sleeve";
$tdatasatei_of_brand1[".googleLikeFields"][] = "hall_mark";
$tdatasatei_of_brand1[".googleLikeFields"][] = "plate";
$tdatasatei_of_brand1[".googleLikeFields"][] = "toe";
$tdatasatei_of_brand1[".googleLikeFields"][] = "heel";
$tdatasatei_of_brand1[".googleLikeFields"][] = "cloth";
$tdatasatei_of_brand1[".googleLikeFields"][] = "parallel_import_flag";
$tdatasatei_of_brand1[".googleLikeFields"][] = "designer";
$tdatasatei_of_brand1[".googleLikeFields"][] = "meisai_number";
$tdatasatei_of_brand1[".googleLikeFields"][] = "tentou_label_output_flag";
$tdatasatei_of_brand1[".googleLikeFields"][] = "novelty";
$tdatasatei_of_brand1[".googleLikeFields"][] = "initial_included";
$tdatasatei_of_brand1[".googleLikeFields"][] = "motif";
$tdatasatei_of_brand1[".googleLikeFields"][] = "auto_price_cut_prohibited";
$tdatasatei_of_brand1[".googleLikeFields"][] = "Eoc_trader_id_for_buy";
$tdatasatei_of_brand1[".googleLikeFields"][] = "other_cost";
$tdatasatei_of_brand1[".googleLikeFields"][] = "yahoo_condition1";
$tdatasatei_of_brand1[".googleLikeFields"][] = "remark";

$tdatasatei_of_brand1[".panelSearchFields"] = array();
$tdatasatei_of_brand1[".searchPanelOptions"] = array();
$tdatasatei_of_brand1[".panelSearchFields"][] = "product_num";
	$tdatasatei_of_brand1[".panelSearchFields"][] = "category_id";
	$tdatasatei_of_brand1[".panelSearchFields"][] = "sub_category_id1";
	$tdatasatei_of_brand1[".panelSearchFields"][] = "yahoo_sex";
	$tdatasatei_of_brand1[".panelSearchFields"][] = "yahoo_condition2";
	
$tdatasatei_of_brand1[".advSearchFields"] = array();
$tdatasatei_of_brand1[".advSearchFields"][] = "auto_price_cut_prohibited";
$tdatasatei_of_brand1[".advSearchFields"][] = "other_cost";
$tdatasatei_of_brand1[".advSearchFields"][] = "yahoo_condition1";
$tdatasatei_of_brand1[".advSearchFields"][] = "remark";
$tdatasatei_of_brand1[".advSearchFields"][] = "initial_included";
$tdatasatei_of_brand1[".advSearchFields"][] = "novelty";
$tdatasatei_of_brand1[".advSearchFields"][] = "motif";
$tdatasatei_of_brand1[".advSearchFields"][] = "meisai_number";
$tdatasatei_of_brand1[".advSearchFields"][] = "tentou_label_output_flag";
$tdatasatei_of_brand1[".advSearchFields"][] = "product_num";
$tdatasatei_of_brand1[".advSearchFields"][] = "category_id";
$tdatasatei_of_brand1[".advSearchFields"][] = "sub_category_id1";
$tdatasatei_of_brand1[".advSearchFields"][] = "yahoo_sex";
$tdatasatei_of_brand1[".advSearchFields"][] = "yahoo_condition2";
$tdatasatei_of_brand1[".advSearchFields"][] = "ecc_seq";
$tdatasatei_of_brand1[".advSearchFields"][] = "status";
$tdatasatei_of_brand1[".advSearchFields"][] = "satei_by";
$tdatasatei_of_brand1[".advSearchFields"][] = "title";
$tdatasatei_of_brand1[".advSearchFields"][] = "product_id";
$tdatasatei_of_brand1[".advSearchFields"][] = "yahoo_sinaban";
$tdatasatei_of_brand1[".advSearchFields"][] = "price";
$tdatasatei_of_brand1[".advSearchFields"][] = "sales_price";
$tdatasatei_of_brand1[".advSearchFields"][] = "description";
$tdatasatei_of_brand1[".advSearchFields"][] = "yahoo_kataban";
$tdatasatei_of_brand1[".advSearchFields"][] = "yahoo_sozai";
$tdatasatei_of_brand1[".advSearchFields"][] = "yahoo_color";
$tdatasatei_of_brand1[".advSearchFields"][] = "yahoo_size";
$tdatasatei_of_brand1[".advSearchFields"][] = "yahoo_sankou_uwadai";
$tdatasatei_of_brand1[".advSearchFields"][] = "season";
$tdatasatei_of_brand1[".advSearchFields"][] = "yahoo_title";
$tdatasatei_of_brand1[".advSearchFields"][] = "goods_title";
$tdatasatei_of_brand1[".advSearchFields"][] = "raku_title";
$tdatasatei_of_brand1[".advSearchFields"][] = "stamp";
$tdatasatei_of_brand1[".advSearchFields"][] = "Sleeve_Length";
$tdatasatei_of_brand1[".advSearchFields"][] = "length";
$tdatasatei_of_brand1[".advSearchFields"][] = "label_output_flag";
$tdatasatei_of_brand1[".advSearchFields"][] = "comment";
$tdatasatei_of_brand1[".advSearchFields"][] = "satei_hi";
$tdatasatei_of_brand1[".advSearchFields"][] = "Destination_selling";
$tdatasatei_of_brand1[".advSearchFields"][] = "accessories";
$tdatasatei_of_brand1[".advSearchFields"][] = "priority";
$tdatasatei_of_brand1[".advSearchFields"][] = "A_storage";
$tdatasatei_of_brand1[".advSearchFields"][] = "price_secret";
$tdatasatei_of_brand1[".advSearchFields"][] = "sales_price_secret";
$tdatasatei_of_brand1[".advSearchFields"][] = "line";
$tdatasatei_of_brand1[".advSearchFields"][] = "item_name";
$tdatasatei_of_brand1[".advSearchFields"][] = "handle";
$tdatasatei_of_brand1[".advSearchFields"][] = "serial_number";
$tdatasatei_of_brand1[".advSearchFields"][] = "logo";
$tdatasatei_of_brand1[".advSearchFields"][] = "parts";
$tdatasatei_of_brand1[".advSearchFields"][] = "country_of_origin";
$tdatasatei_of_brand1[".advSearchFields"][] = "zipper";
$tdatasatei_of_brand1[".advSearchFields"][] = "guarantee";
$tdatasatei_of_brand1[".advSearchFields"][] = "errors";
$tdatasatei_of_brand1[".advSearchFields"][] = "collar_neck_line";
$tdatasatei_of_brand1[".advSearchFields"][] = "product_style";
$tdatasatei_of_brand1[".advSearchFields"][] = "sleeve";
$tdatasatei_of_brand1[".advSearchFields"][] = "amount";
$tdatasatei_of_brand1[".advSearchFields"][] = "satei_error";
$tdatasatei_of_brand1[".advSearchFields"][] = "silhouette";
$tdatasatei_of_brand1[".advSearchFields"][] = "shape_supplement";
$tdatasatei_of_brand1[".advSearchFields"][] = "breast";
$tdatasatei_of_brand1[".advSearchFields"][] = "plate";
$tdatasatei_of_brand1[".advSearchFields"][] = "hall_mark";
$tdatasatei_of_brand1[".advSearchFields"][] = "designer";
$tdatasatei_of_brand1[".advSearchFields"][] = "toe";
$tdatasatei_of_brand1[".advSearchFields"][] = "cloth";
$tdatasatei_of_brand1[".advSearchFields"][] = "heel";

$tdatasatei_of_brand1[".tableType"] = "list";

$tdatasatei_of_brand1[".printerPageOrientation"] = 0;
$tdatasatei_of_brand1[".nPrinterPageScale"] = 100;

$tdatasatei_of_brand1[".nPrinterSplitRecords"] = 40;

$tdatasatei_of_brand1[".nPrinterPDFSplitRecords"] = 40;



$tdatasatei_of_brand1[".geocodingEnabled"] = false;





$tdatasatei_of_brand1[".listGridLayout"] = 3;





// view page pdf

// print page pdf

$tdatasatei_of_brand1[".totalsFields"] = array();
$tdatasatei_of_brand1[".totalsFields"][] = array(
	"fName" => "price",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');

$tdatasatei_of_brand1[".pageSize"] = 20;

$tdatasatei_of_brand1[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `shouhin`.`product_id` DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatasatei_of_brand1[".strOrderBy"] = $tstrOrderBy;

$tdatasatei_of_brand1[".orderindexes"] = array();
$tdatasatei_of_brand1[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "`shouhin`.`product_id`");

$tdatasatei_of_brand1[".sqlHead"] = "SELECT `shouhin`.`product_id`,  `shouhin`.`category_id`,  `shouhin`.`goods_title`,  `shouhin`.`title`,  `shouhin`.`sub_category_id1`,  `shouhin`.`ecc_id`,  `shouhin`.`price`,  `shouhin`.`sales_price`,  `shouhin`.`description`,  `shouhin`.`status`,  `shouhin`.`product_num`,  `shouhin`.`yahoo_size`,  `shouhin`.`yahoo_title`,  `shouhin`.`yahoo_sankou_uwadai`,  `shouhin`.`yahoo_sozai`,  `shouhin`.`yahoo_color`,  `shouhin`.`yahoo_kataban`,  `shouhin`.`yahoo_condition2`,  `shouhin`.`yahoo_sinaban`,  `shouhin`.`yahoo_sex`,  `shouhin`.`nyuukin_price`,  `shouhin`.`updated_by`,  `shouhin`.`raku_title`,  `shouhin`.`label_output_flag`,  `shouhin`.`season`,  `shouhin`.`kanryou_henbi`,  `shouhin`.`satei_by`,  `shouhin`.`kaitori_by`,  `shouhin`.`comment`,  `shouhin`.`satei_hi`,  `shouhin`.`kaitory_hi`,  `shouhin`.`DT_UP_DATE`,  `shouhin`.`AWAZU_DATE`,  `shouhin`.`AWAZU_NIN`,  `shouhin`.`Destination_selling`,  `shouhin`.`Finish`,  `shouhin`.`Discrimination`,  `shouhin`.`accessories`,  `shouhin`.`priority`,  `shouhin`.`A_storage`,  `shouhin`.`price_secret`,  `shouhin`.`sales_price_secret`,  `shouhin`.`eq`,  `shouhin`.`en`,  `shouhin`.`line`,  `shouhin`.`item_name`,  `shouhin`.`handle`,  `shouhin`.`serial_number`,  `shouhin`.`stamp`,  `shouhin`.`Sleeve_Length`,  `shouhin`.`length`,  `Eoc`.`ecc_seq`,  `shouhin`.`yahoo_junle`,  `shouhin`.`logo`,  `shouhin`.`parts`,  `shouhin`.`country_of_origin`,  `shouhin`.`zipper`,  `shouhin`.`guarantee`,  `shouhin`.`errors`,  `shouhin`.`amount`,  `shouhin`.`satei_error`,  `shouhin`.`shape_supplement`,  `shouhin`.`product_style`,  `shouhin`.`collar_neck_line`,  `shouhin`.`breast`,  `shouhin`.`silhouette`,  `shouhin`.`sleeve`,  `shouhin`.`hall_mark`,  `shouhin`.`plate`,  `shouhin`.`toe`,  `shouhin`.`heel`,  `shouhin`.`cloth`,  `shouhin`.`parallel_import_flag`,  `shouhin`.`designer`,  `shouhin`.`meisai_number`,  `shouhin`.`tentou_label_output_flag`,  `shouhin`.`novelty`,  `shouhin`.`initial_included`,  `shouhin`.`motif`,  `shouhin`.`auto_price_cut_prohibited`,  `shouhin`.`Eoc_trader_id_for_buy`,  `shouhin`.`other_cost`,  `shouhin`.`yahoo_condition1`,  `shouhin`.`remark`";
$tdatasatei_of_brand1[".sqlFrom"] = "FROM `shouhin`  LEFT OUTER JOIN `Eoc` ON `shouhin`.`ecc_id` = `Eoc`.`ecc_id`";
$tdatasatei_of_brand1[".sqlWhereExpr"] = "(`shouhin`.`category_id` !=  10 AND `shouhin`.`category_id` !=  17 AND `shouhin`.`category_id` !=  18 AND `shouhin`.`category_id` !=  19 AND `shouhin`.`category_id` !=  50 AND `shouhin`.`category_id` !=  20 AND `shouhin`.`category_id` !=  51 AND `shouhin`.`category_id` !=  21 AND `shouhin`.`category_id` !=  22 AND `shouhin`.`category_id` !=  23 AND `shouhin`.`category_id` !=  69 AND `shouhin`.`category_id` !=  68 AND `shouhin`.`category_id` !=  67 AND `shouhin`.`category_id` !=  66 AND `shouhin`.`category_id` !=  65) AND (`shouhin`.`status` =32 OR `shouhin`.`status` =34)";
$tdatasatei_of_brand1[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasatei_of_brand1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasatei_of_brand1[".arrGroupsPerPage"] = $arrGPP;

$tdatasatei_of_brand1[".highlightSearchResults"] = true;

$tableKeyssatei_of_brand1 = array();
$tableKeyssatei_of_brand1[] = "product_id";
$tdatasatei_of_brand1[".Keys"] = $tableKeyssatei_of_brand1;

$tdatasatei_of_brand1[".listFields"] = array();
$tdatasatei_of_brand1[".listFields"][] = "label_output_flag";
$tdatasatei_of_brand1[".listFields"][] = "tentou_label_output_flag";
$tdatasatei_of_brand1[".listFields"][] = "meisai_number";
$tdatasatei_of_brand1[".listFields"][] = "status";
$tdatasatei_of_brand1[".listFields"][] = "product_id";
$tdatasatei_of_brand1[".listFields"][] = "product_num";
$tdatasatei_of_brand1[".listFields"][] = "category_id";
$tdatasatei_of_brand1[".listFields"][] = "sub_category_id1";
$tdatasatei_of_brand1[".listFields"][] = "yahoo_sex";
$tdatasatei_of_brand1[".listFields"][] = "yahoo_condition2";
$tdatasatei_of_brand1[".listFields"][] = "Destination_selling";
$tdatasatei_of_brand1[".listFields"][] = "accessories";
$tdatasatei_of_brand1[".listFields"][] = "logo";
$tdatasatei_of_brand1[".listFields"][] = "parts";
$tdatasatei_of_brand1[".listFields"][] = "guarantee";
$tdatasatei_of_brand1[".listFields"][] = "parallel_import_flag";
$tdatasatei_of_brand1[".listFields"][] = "novelty";
$tdatasatei_of_brand1[".listFields"][] = "initial_included";
$tdatasatei_of_brand1[".listFields"][] = "serial_number";
$tdatasatei_of_brand1[".listFields"][] = "yahoo_kataban";
$tdatasatei_of_brand1[".listFields"][] = "country_of_origin";
$tdatasatei_of_brand1[".listFields"][] = "hall_mark";
$tdatasatei_of_brand1[".listFields"][] = "designer";
$tdatasatei_of_brand1[".listFields"][] = "zipper";
$tdatasatei_of_brand1[".listFields"][] = "line";
$tdatasatei_of_brand1[".listFields"][] = "item_name";
$tdatasatei_of_brand1[".listFields"][] = "comment";
$tdatasatei_of_brand1[".listFields"][] = "motif";
$tdatasatei_of_brand1[".listFields"][] = "shape_supplement";
$tdatasatei_of_brand1[".listFields"][] = "product_style";
$tdatasatei_of_brand1[".listFields"][] = "yahoo_sozai";
$tdatasatei_of_brand1[".listFields"][] = "toe";
$tdatasatei_of_brand1[".listFields"][] = "heel";
$tdatasatei_of_brand1[".listFields"][] = "cloth";
$tdatasatei_of_brand1[".listFields"][] = "Sleeve_Length";
$tdatasatei_of_brand1[".listFields"][] = "collar_neck_line";
$tdatasatei_of_brand1[".listFields"][] = "breast";
$tdatasatei_of_brand1[".listFields"][] = "handle";
$tdatasatei_of_brand1[".listFields"][] = "silhouette";
$tdatasatei_of_brand1[".listFields"][] = "sleeve";
$tdatasatei_of_brand1[".listFields"][] = "length";
$tdatasatei_of_brand1[".listFields"][] = "amount";
$tdatasatei_of_brand1[".listFields"][] = "plate";
$tdatasatei_of_brand1[".listFields"][] = "yahoo_color";
$tdatasatei_of_brand1[".listFields"][] = "stamp";
$tdatasatei_of_brand1[".listFields"][] = "price";
$tdatasatei_of_brand1[".listFields"][] = "other_cost";
$tdatasatei_of_brand1[".listFields"][] = "sales_price";
$tdatasatei_of_brand1[".listFields"][] = "yahoo_sankou_uwadai";
$tdatasatei_of_brand1[".listFields"][] = "description";
$tdatasatei_of_brand1[".listFields"][] = "yahoo_condition1";
$tdatasatei_of_brand1[".listFields"][] = "remark";
$tdatasatei_of_brand1[".listFields"][] = "priority";
$tdatasatei_of_brand1[".listFields"][] = "A_storage";
$tdatasatei_of_brand1[".listFields"][] = "auto_price_cut_prohibited";
$tdatasatei_of_brand1[".listFields"][] = "satei_by";
$tdatasatei_of_brand1[".listFields"][] = "satei_hi";
$tdatasatei_of_brand1[".listFields"][] = "price_secret";
$tdatasatei_of_brand1[".listFields"][] = "sales_price_secret";
$tdatasatei_of_brand1[".listFields"][] = "errors";
$tdatasatei_of_brand1[".listFields"][] = "satei_error";

$tdatasatei_of_brand1[".hideMobileList"] = array();


$tdatasatei_of_brand1[".viewFields"] = array();

$tdatasatei_of_brand1[".addFields"] = array();

$tdatasatei_of_brand1[".masterListFields"] = array();
$tdatasatei_of_brand1[".masterListFields"][] = "ecc_seq";
$tdatasatei_of_brand1[".masterListFields"][] = "yahoo_junle";
$tdatasatei_of_brand1[".masterListFields"][] = "logo";
$tdatasatei_of_brand1[".masterListFields"][] = "parts";
$tdatasatei_of_brand1[".masterListFields"][] = "country_of_origin";
$tdatasatei_of_brand1[".masterListFields"][] = "zipper";
$tdatasatei_of_brand1[".masterListFields"][] = "guarantee";
$tdatasatei_of_brand1[".masterListFields"][] = "errors";
$tdatasatei_of_brand1[".masterListFields"][] = "amount";
$tdatasatei_of_brand1[".masterListFields"][] = "satei_error";
$tdatasatei_of_brand1[".masterListFields"][] = "shape_supplement";
$tdatasatei_of_brand1[".masterListFields"][] = "product_style";
$tdatasatei_of_brand1[".masterListFields"][] = "collar_neck_line";
$tdatasatei_of_brand1[".masterListFields"][] = "breast";
$tdatasatei_of_brand1[".masterListFields"][] = "silhouette";
$tdatasatei_of_brand1[".masterListFields"][] = "sleeve";
$tdatasatei_of_brand1[".masterListFields"][] = "hall_mark";
$tdatasatei_of_brand1[".masterListFields"][] = "plate";
$tdatasatei_of_brand1[".masterListFields"][] = "toe";
$tdatasatei_of_brand1[".masterListFields"][] = "heel";
$tdatasatei_of_brand1[".masterListFields"][] = "cloth";
$tdatasatei_of_brand1[".masterListFields"][] = "parallel_import_flag";
$tdatasatei_of_brand1[".masterListFields"][] = "designer";
$tdatasatei_of_brand1[".masterListFields"][] = "meisai_number";
$tdatasatei_of_brand1[".masterListFields"][] = "tentou_label_output_flag";
$tdatasatei_of_brand1[".masterListFields"][] = "novelty";
$tdatasatei_of_brand1[".masterListFields"][] = "initial_included";
$tdatasatei_of_brand1[".masterListFields"][] = "motif";
$tdatasatei_of_brand1[".masterListFields"][] = "auto_price_cut_prohibited";
$tdatasatei_of_brand1[".masterListFields"][] = "Eoc_trader_id_for_buy";
$tdatasatei_of_brand1[".masterListFields"][] = "other_cost";
$tdatasatei_of_brand1[".masterListFields"][] = "yahoo_condition1";
$tdatasatei_of_brand1[".masterListFields"][] = "remark";
$tdatasatei_of_brand1[".masterListFields"][] = "status";
$tdatasatei_of_brand1[".masterListFields"][] = "satei_by";
$tdatasatei_of_brand1[".masterListFields"][] = "category_id";
$tdatasatei_of_brand1[".masterListFields"][] = "title";
$tdatasatei_of_brand1[".masterListFields"][] = "sub_category_id1";
$tdatasatei_of_brand1[".masterListFields"][] = "product_id";
$tdatasatei_of_brand1[".masterListFields"][] = "ecc_id";
$tdatasatei_of_brand1[".masterListFields"][] = "yahoo_sinaban";
$tdatasatei_of_brand1[".masterListFields"][] = "price";
$tdatasatei_of_brand1[".masterListFields"][] = "sales_price";
$tdatasatei_of_brand1[".masterListFields"][] = "yahoo_sex";
$tdatasatei_of_brand1[".masterListFields"][] = "product_num";
$tdatasatei_of_brand1[".masterListFields"][] = "description";
$tdatasatei_of_brand1[".masterListFields"][] = "yahoo_kataban";
$tdatasatei_of_brand1[".masterListFields"][] = "yahoo_sozai";
$tdatasatei_of_brand1[".masterListFields"][] = "yahoo_color";
$tdatasatei_of_brand1[".masterListFields"][] = "yahoo_size";
$tdatasatei_of_brand1[".masterListFields"][] = "yahoo_condition2";
$tdatasatei_of_brand1[".masterListFields"][] = "yahoo_sankou_uwadai";
$tdatasatei_of_brand1[".masterListFields"][] = "season";
$tdatasatei_of_brand1[".masterListFields"][] = "yahoo_title";
$tdatasatei_of_brand1[".masterListFields"][] = "goods_title";
$tdatasatei_of_brand1[".masterListFields"][] = "nyuukin_price";
$tdatasatei_of_brand1[".masterListFields"][] = "updated_by";
$tdatasatei_of_brand1[".masterListFields"][] = "raku_title";
$tdatasatei_of_brand1[".masterListFields"][] = "stamp";
$tdatasatei_of_brand1[".masterListFields"][] = "Sleeve_Length";
$tdatasatei_of_brand1[".masterListFields"][] = "length";
$tdatasatei_of_brand1[".masterListFields"][] = "label_output_flag";
$tdatasatei_of_brand1[".masterListFields"][] = "kanryou_henbi";
$tdatasatei_of_brand1[".masterListFields"][] = "kaitori_by";
$tdatasatei_of_brand1[".masterListFields"][] = "comment";
$tdatasatei_of_brand1[".masterListFields"][] = "satei_hi";
$tdatasatei_of_brand1[".masterListFields"][] = "kaitory_hi";
$tdatasatei_of_brand1[".masterListFields"][] = "DT_UP_DATE";
$tdatasatei_of_brand1[".masterListFields"][] = "AWAZU_DATE";
$tdatasatei_of_brand1[".masterListFields"][] = "AWAZU_NIN";
$tdatasatei_of_brand1[".masterListFields"][] = "Destination_selling";
$tdatasatei_of_brand1[".masterListFields"][] = "Finish";
$tdatasatei_of_brand1[".masterListFields"][] = "Discrimination";
$tdatasatei_of_brand1[".masterListFields"][] = "accessories";
$tdatasatei_of_brand1[".masterListFields"][] = "priority";
$tdatasatei_of_brand1[".masterListFields"][] = "A_storage";
$tdatasatei_of_brand1[".masterListFields"][] = "price_secret";
$tdatasatei_of_brand1[".masterListFields"][] = "sales_price_secret";
$tdatasatei_of_brand1[".masterListFields"][] = "eq";
$tdatasatei_of_brand1[".masterListFields"][] = "en";
$tdatasatei_of_brand1[".masterListFields"][] = "line";
$tdatasatei_of_brand1[".masterListFields"][] = "item_name";
$tdatasatei_of_brand1[".masterListFields"][] = "handle";
$tdatasatei_of_brand1[".masterListFields"][] = "serial_number";

$tdatasatei_of_brand1[".inlineAddFields"] = array();
$tdatasatei_of_brand1[".inlineAddFields"][] = "label_output_flag";
$tdatasatei_of_brand1[".inlineAddFields"][] = "tentou_label_output_flag";
$tdatasatei_of_brand1[".inlineAddFields"][] = "meisai_number";
$tdatasatei_of_brand1[".inlineAddFields"][] = "status";
$tdatasatei_of_brand1[".inlineAddFields"][] = "product_num";
$tdatasatei_of_brand1[".inlineAddFields"][] = "category_id";
$tdatasatei_of_brand1[".inlineAddFields"][] = "sub_category_id1";
$tdatasatei_of_brand1[".inlineAddFields"][] = "yahoo_sex";
$tdatasatei_of_brand1[".inlineAddFields"][] = "yahoo_condition2";
$tdatasatei_of_brand1[".inlineAddFields"][] = "Destination_selling";
$tdatasatei_of_brand1[".inlineAddFields"][] = "accessories";
$tdatasatei_of_brand1[".inlineAddFields"][] = "logo";
$tdatasatei_of_brand1[".inlineAddFields"][] = "parts";
$tdatasatei_of_brand1[".inlineAddFields"][] = "guarantee";
$tdatasatei_of_brand1[".inlineAddFields"][] = "parallel_import_flag";
$tdatasatei_of_brand1[".inlineAddFields"][] = "novelty";
$tdatasatei_of_brand1[".inlineAddFields"][] = "initial_included";
$tdatasatei_of_brand1[".inlineAddFields"][] = "serial_number";
$tdatasatei_of_brand1[".inlineAddFields"][] = "yahoo_kataban";
$tdatasatei_of_brand1[".inlineAddFields"][] = "country_of_origin";
$tdatasatei_of_brand1[".inlineAddFields"][] = "hall_mark";
$tdatasatei_of_brand1[".inlineAddFields"][] = "designer";
$tdatasatei_of_brand1[".inlineAddFields"][] = "zipper";
$tdatasatei_of_brand1[".inlineAddFields"][] = "line";
$tdatasatei_of_brand1[".inlineAddFields"][] = "item_name";
$tdatasatei_of_brand1[".inlineAddFields"][] = "comment";
$tdatasatei_of_brand1[".inlineAddFields"][] = "motif";
$tdatasatei_of_brand1[".inlineAddFields"][] = "shape_supplement";
$tdatasatei_of_brand1[".inlineAddFields"][] = "product_style";
$tdatasatei_of_brand1[".inlineAddFields"][] = "yahoo_sozai";
$tdatasatei_of_brand1[".inlineAddFields"][] = "toe";
$tdatasatei_of_brand1[".inlineAddFields"][] = "heel";
$tdatasatei_of_brand1[".inlineAddFields"][] = "cloth";
$tdatasatei_of_brand1[".inlineAddFields"][] = "Sleeve_Length";
$tdatasatei_of_brand1[".inlineAddFields"][] = "collar_neck_line";
$tdatasatei_of_brand1[".inlineAddFields"][] = "breast";
$tdatasatei_of_brand1[".inlineAddFields"][] = "handle";
$tdatasatei_of_brand1[".inlineAddFields"][] = "silhouette";
$tdatasatei_of_brand1[".inlineAddFields"][] = "sleeve";
$tdatasatei_of_brand1[".inlineAddFields"][] = "length";
$tdatasatei_of_brand1[".inlineAddFields"][] = "amount";
$tdatasatei_of_brand1[".inlineAddFields"][] = "plate";
$tdatasatei_of_brand1[".inlineAddFields"][] = "yahoo_color";
$tdatasatei_of_brand1[".inlineAddFields"][] = "stamp";
$tdatasatei_of_brand1[".inlineAddFields"][] = "price";
$tdatasatei_of_brand1[".inlineAddFields"][] = "other_cost";
$tdatasatei_of_brand1[".inlineAddFields"][] = "sales_price";
$tdatasatei_of_brand1[".inlineAddFields"][] = "yahoo_sankou_uwadai";
$tdatasatei_of_brand1[".inlineAddFields"][] = "description";
$tdatasatei_of_brand1[".inlineAddFields"][] = "yahoo_condition1";
$tdatasatei_of_brand1[".inlineAddFields"][] = "remark";
$tdatasatei_of_brand1[".inlineAddFields"][] = "priority";
$tdatasatei_of_brand1[".inlineAddFields"][] = "A_storage";
$tdatasatei_of_brand1[".inlineAddFields"][] = "auto_price_cut_prohibited";
$tdatasatei_of_brand1[".inlineAddFields"][] = "price_secret";
$tdatasatei_of_brand1[".inlineAddFields"][] = "sales_price_secret";
$tdatasatei_of_brand1[".inlineAddFields"][] = "errors";

$tdatasatei_of_brand1[".editFields"] = array();

$tdatasatei_of_brand1[".inlineEditFields"] = array();
$tdatasatei_of_brand1[".inlineEditFields"][] = "label_output_flag";
$tdatasatei_of_brand1[".inlineEditFields"][] = "tentou_label_output_flag";
$tdatasatei_of_brand1[".inlineEditFields"][] = "meisai_number";
$tdatasatei_of_brand1[".inlineEditFields"][] = "status";
$tdatasatei_of_brand1[".inlineEditFields"][] = "product_num";
$tdatasatei_of_brand1[".inlineEditFields"][] = "category_id";
$tdatasatei_of_brand1[".inlineEditFields"][] = "sub_category_id1";
$tdatasatei_of_brand1[".inlineEditFields"][] = "yahoo_sex";
$tdatasatei_of_brand1[".inlineEditFields"][] = "yahoo_condition2";
$tdatasatei_of_brand1[".inlineEditFields"][] = "Destination_selling";
$tdatasatei_of_brand1[".inlineEditFields"][] = "accessories";
$tdatasatei_of_brand1[".inlineEditFields"][] = "logo";
$tdatasatei_of_brand1[".inlineEditFields"][] = "parts";
$tdatasatei_of_brand1[".inlineEditFields"][] = "guarantee";
$tdatasatei_of_brand1[".inlineEditFields"][] = "parallel_import_flag";
$tdatasatei_of_brand1[".inlineEditFields"][] = "novelty";
$tdatasatei_of_brand1[".inlineEditFields"][] = "initial_included";
$tdatasatei_of_brand1[".inlineEditFields"][] = "serial_number";
$tdatasatei_of_brand1[".inlineEditFields"][] = "yahoo_kataban";
$tdatasatei_of_brand1[".inlineEditFields"][] = "country_of_origin";
$tdatasatei_of_brand1[".inlineEditFields"][] = "hall_mark";
$tdatasatei_of_brand1[".inlineEditFields"][] = "designer";
$tdatasatei_of_brand1[".inlineEditFields"][] = "zipper";
$tdatasatei_of_brand1[".inlineEditFields"][] = "line";
$tdatasatei_of_brand1[".inlineEditFields"][] = "item_name";
$tdatasatei_of_brand1[".inlineEditFields"][] = "comment";
$tdatasatei_of_brand1[".inlineEditFields"][] = "motif";
$tdatasatei_of_brand1[".inlineEditFields"][] = "shape_supplement";
$tdatasatei_of_brand1[".inlineEditFields"][] = "product_style";
$tdatasatei_of_brand1[".inlineEditFields"][] = "yahoo_sozai";
$tdatasatei_of_brand1[".inlineEditFields"][] = "toe";
$tdatasatei_of_brand1[".inlineEditFields"][] = "heel";
$tdatasatei_of_brand1[".inlineEditFields"][] = "cloth";
$tdatasatei_of_brand1[".inlineEditFields"][] = "Sleeve_Length";
$tdatasatei_of_brand1[".inlineEditFields"][] = "collar_neck_line";
$tdatasatei_of_brand1[".inlineEditFields"][] = "breast";
$tdatasatei_of_brand1[".inlineEditFields"][] = "handle";
$tdatasatei_of_brand1[".inlineEditFields"][] = "silhouette";
$tdatasatei_of_brand1[".inlineEditFields"][] = "sleeve";
$tdatasatei_of_brand1[".inlineEditFields"][] = "length";
$tdatasatei_of_brand1[".inlineEditFields"][] = "amount";
$tdatasatei_of_brand1[".inlineEditFields"][] = "plate";
$tdatasatei_of_brand1[".inlineEditFields"][] = "yahoo_color";
$tdatasatei_of_brand1[".inlineEditFields"][] = "stamp";
$tdatasatei_of_brand1[".inlineEditFields"][] = "price";
$tdatasatei_of_brand1[".inlineEditFields"][] = "other_cost";
$tdatasatei_of_brand1[".inlineEditFields"][] = "sales_price";
$tdatasatei_of_brand1[".inlineEditFields"][] = "yahoo_sankou_uwadai";
$tdatasatei_of_brand1[".inlineEditFields"][] = "description";
$tdatasatei_of_brand1[".inlineEditFields"][] = "yahoo_condition1";
$tdatasatei_of_brand1[".inlineEditFields"][] = "remark";
$tdatasatei_of_brand1[".inlineEditFields"][] = "priority";
$tdatasatei_of_brand1[".inlineEditFields"][] = "A_storage";
$tdatasatei_of_brand1[".inlineEditFields"][] = "auto_price_cut_prohibited";
$tdatasatei_of_brand1[".inlineEditFields"][] = "price_secret";
$tdatasatei_of_brand1[".inlineEditFields"][] = "sales_price_secret";
$tdatasatei_of_brand1[".inlineEditFields"][] = "errors";

$tdatasatei_of_brand1[".updateSelectedFields"] = array();


$tdatasatei_of_brand1[".exportFields"] = array();
$tdatasatei_of_brand1[".exportFields"][] = "yahoo_condition1";
$tdatasatei_of_brand1[".exportFields"][] = "other_cost";
$tdatasatei_of_brand1[".exportFields"][] = "auto_price_cut_prohibited";
$tdatasatei_of_brand1[".exportFields"][] = "remark";
$tdatasatei_of_brand1[".exportFields"][] = "initial_included";
$tdatasatei_of_brand1[".exportFields"][] = "novelty";
$tdatasatei_of_brand1[".exportFields"][] = "meisai_number";
$tdatasatei_of_brand1[".exportFields"][] = "tentou_label_output_flag";
$tdatasatei_of_brand1[".exportFields"][] = "label_output_flag";
$tdatasatei_of_brand1[".exportFields"][] = "status";
$tdatasatei_of_brand1[".exportFields"][] = "product_id";
$tdatasatei_of_brand1[".exportFields"][] = "yahoo_junle";
$tdatasatei_of_brand1[".exportFields"][] = "category_id";
$tdatasatei_of_brand1[".exportFields"][] = "sub_category_id1";
$tdatasatei_of_brand1[".exportFields"][] = "yahoo_sex";
$tdatasatei_of_brand1[".exportFields"][] = "yahoo_condition2";
$tdatasatei_of_brand1[".exportFields"][] = "logo";
$tdatasatei_of_brand1[".exportFields"][] = "parts";
$tdatasatei_of_brand1[".exportFields"][] = "country_of_origin";
$tdatasatei_of_brand1[".exportFields"][] = "serial_number";
$tdatasatei_of_brand1[".exportFields"][] = "zipper";
$tdatasatei_of_brand1[".exportFields"][] = "guarantee";
$tdatasatei_of_brand1[".exportFields"][] = "line";
$tdatasatei_of_brand1[".exportFields"][] = "item_name";
$tdatasatei_of_brand1[".exportFields"][] = "motif";
$tdatasatei_of_brand1[".exportFields"][] = "shape_supplement";
$tdatasatei_of_brand1[".exportFields"][] = "product_style";
$tdatasatei_of_brand1[".exportFields"][] = "yahoo_sozai";
$tdatasatei_of_brand1[".exportFields"][] = "toe";
$tdatasatei_of_brand1[".exportFields"][] = "heel";
$tdatasatei_of_brand1[".exportFields"][] = "cloth";
$tdatasatei_of_brand1[".exportFields"][] = "Sleeve_Length";
$tdatasatei_of_brand1[".exportFields"][] = "collar_neck_line";
$tdatasatei_of_brand1[".exportFields"][] = "breast";
$tdatasatei_of_brand1[".exportFields"][] = "handle";
$tdatasatei_of_brand1[".exportFields"][] = "silhouette";
$tdatasatei_of_brand1[".exportFields"][] = "sleeve";
$tdatasatei_of_brand1[".exportFields"][] = "length";
$tdatasatei_of_brand1[".exportFields"][] = "amount";
$tdatasatei_of_brand1[".exportFields"][] = "hall_mark";
$tdatasatei_of_brand1[".exportFields"][] = "designer";
$tdatasatei_of_brand1[".exportFields"][] = "plate";
$tdatasatei_of_brand1[".exportFields"][] = "yahoo_color";
$tdatasatei_of_brand1[".exportFields"][] = "yahoo_kataban";
$tdatasatei_of_brand1[".exportFields"][] = "stamp";
$tdatasatei_of_brand1[".exportFields"][] = "eq";
$tdatasatei_of_brand1[".exportFields"][] = "price";
$tdatasatei_of_brand1[".exportFields"][] = "en";
$tdatasatei_of_brand1[".exportFields"][] = "comment";
$tdatasatei_of_brand1[".exportFields"][] = "sales_price";
$tdatasatei_of_brand1[".exportFields"][] = "yahoo_sankou_uwadai";
$tdatasatei_of_brand1[".exportFields"][] = "description";
$tdatasatei_of_brand1[".exportFields"][] = "Destination_selling";
$tdatasatei_of_brand1[".exportFields"][] = "accessories";
$tdatasatei_of_brand1[".exportFields"][] = "priority";
$tdatasatei_of_brand1[".exportFields"][] = "A_storage";
$tdatasatei_of_brand1[".exportFields"][] = "satei_by";
$tdatasatei_of_brand1[".exportFields"][] = "satei_hi";
$tdatasatei_of_brand1[".exportFields"][] = "price_secret";
$tdatasatei_of_brand1[".exportFields"][] = "sales_price_secret";
$tdatasatei_of_brand1[".exportFields"][] = "product_num";
$tdatasatei_of_brand1[".exportFields"][] = "errors";
$tdatasatei_of_brand1[".exportFields"][] = "satei_error";

$tdatasatei_of_brand1[".importFields"] = array();
$tdatasatei_of_brand1[".importFields"][] = "product_id";
$tdatasatei_of_brand1[".importFields"][] = "category_id";
$tdatasatei_of_brand1[".importFields"][] = "sub_category_id1";
$tdatasatei_of_brand1[".importFields"][] = "price";
$tdatasatei_of_brand1[".importFields"][] = "sales_price";
$tdatasatei_of_brand1[".importFields"][] = "description";
$tdatasatei_of_brand1[".importFields"][] = "status";
$tdatasatei_of_brand1[".importFields"][] = "product_num";
$tdatasatei_of_brand1[".importFields"][] = "yahoo_sankou_uwadai";
$tdatasatei_of_brand1[".importFields"][] = "yahoo_sozai";
$tdatasatei_of_brand1[".importFields"][] = "yahoo_color";
$tdatasatei_of_brand1[".importFields"][] = "yahoo_kataban";
$tdatasatei_of_brand1[".importFields"][] = "yahoo_condition2";
$tdatasatei_of_brand1[".importFields"][] = "yahoo_sex";
$tdatasatei_of_brand1[".importFields"][] = "label_output_flag";
$tdatasatei_of_brand1[".importFields"][] = "satei_by";
$tdatasatei_of_brand1[".importFields"][] = "comment";
$tdatasatei_of_brand1[".importFields"][] = "satei_hi";
$tdatasatei_of_brand1[".importFields"][] = "Destination_selling";
$tdatasatei_of_brand1[".importFields"][] = "accessories";
$tdatasatei_of_brand1[".importFields"][] = "priority";
$tdatasatei_of_brand1[".importFields"][] = "A_storage";
$tdatasatei_of_brand1[".importFields"][] = "price_secret";
$tdatasatei_of_brand1[".importFields"][] = "sales_price_secret";
$tdatasatei_of_brand1[".importFields"][] = "line";
$tdatasatei_of_brand1[".importFields"][] = "item_name";
$tdatasatei_of_brand1[".importFields"][] = "handle";
$tdatasatei_of_brand1[".importFields"][] = "serial_number";
$tdatasatei_of_brand1[".importFields"][] = "stamp";
$tdatasatei_of_brand1[".importFields"][] = "Sleeve_Length";
$tdatasatei_of_brand1[".importFields"][] = "length";
$tdatasatei_of_brand1[".importFields"][] = "yahoo_junle";
$tdatasatei_of_brand1[".importFields"][] = "logo";
$tdatasatei_of_brand1[".importFields"][] = "parts";
$tdatasatei_of_brand1[".importFields"][] = "country_of_origin";
$tdatasatei_of_brand1[".importFields"][] = "zipper";
$tdatasatei_of_brand1[".importFields"][] = "guarantee";
$tdatasatei_of_brand1[".importFields"][] = "errors";
$tdatasatei_of_brand1[".importFields"][] = "amount";
$tdatasatei_of_brand1[".importFields"][] = "satei_error";
$tdatasatei_of_brand1[".importFields"][] = "shape_supplement";
$tdatasatei_of_brand1[".importFields"][] = "product_style";
$tdatasatei_of_brand1[".importFields"][] = "collar_neck_line";
$tdatasatei_of_brand1[".importFields"][] = "breast";
$tdatasatei_of_brand1[".importFields"][] = "silhouette";
$tdatasatei_of_brand1[".importFields"][] = "sleeve";
$tdatasatei_of_brand1[".importFields"][] = "hall_mark";
$tdatasatei_of_brand1[".importFields"][] = "plate";
$tdatasatei_of_brand1[".importFields"][] = "toe";
$tdatasatei_of_brand1[".importFields"][] = "heel";
$tdatasatei_of_brand1[".importFields"][] = "cloth";
$tdatasatei_of_brand1[".importFields"][] = "designer";
$tdatasatei_of_brand1[".importFields"][] = "meisai_number";
$tdatasatei_of_brand1[".importFields"][] = "tentou_label_output_flag";
$tdatasatei_of_brand1[".importFields"][] = "novelty";
$tdatasatei_of_brand1[".importFields"][] = "initial_included";
$tdatasatei_of_brand1[".importFields"][] = "motif";
$tdatasatei_of_brand1[".importFields"][] = "auto_price_cut_prohibited";
$tdatasatei_of_brand1[".importFields"][] = "other_cost";
$tdatasatei_of_brand1[".importFields"][] = "yahoo_condition1";
$tdatasatei_of_brand1[".importFields"][] = "remark";

$tdatasatei_of_brand1[".printFields"] = array();

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




	$tdatasatei_of_brand1["product_id"] = $fdata;
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




	$tdatasatei_of_brand1["category_id"] = $fdata;
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




	$tdatasatei_of_brand1["goods_title"] = $fdata;
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




	$tdatasatei_of_brand1["title"] = $fdata;
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




	$tdatasatei_of_brand1["sub_category_id1"] = $fdata;
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








	$tdatasatei_of_brand1["ecc_id"] = $fdata;
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




	$tdatasatei_of_brand1["price"] = $fdata;
//	sales_price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
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




	$tdatasatei_of_brand1["sales_price"] = $fdata;
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
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




	$tdatasatei_of_brand1["description"] = $fdata;
//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
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




	$tdatasatei_of_brand1["status"] = $fdata;
//	product_num
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
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




	$tdatasatei_of_brand1["product_num"] = $fdata;
//	yahoo_size
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
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




	$tdatasatei_of_brand1["yahoo_size"] = $fdata;
//	yahoo_title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
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




	$tdatasatei_of_brand1["yahoo_title"] = $fdata;
//	yahoo_sankou_uwadai
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
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




	$tdatasatei_of_brand1["yahoo_sankou_uwadai"] = $fdata;
//	yahoo_sozai
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
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




	$tdatasatei_of_brand1["yahoo_sozai"] = $fdata;
//	yahoo_color
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
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




	$tdatasatei_of_brand1["yahoo_color"] = $fdata;
//	yahoo_kataban
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
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




	$tdatasatei_of_brand1["yahoo_kataban"] = $fdata;
//	yahoo_condition2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
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




	$tdatasatei_of_brand1["yahoo_condition2"] = $fdata;
//	yahoo_sinaban
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
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




	$tdatasatei_of_brand1["yahoo_sinaban"] = $fdata;
//	yahoo_sex
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
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




	$tdatasatei_of_brand1["yahoo_sex"] = $fdata;
//	nyuukin_price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
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








	$tdatasatei_of_brand1["nyuukin_price"] = $fdata;
//	updated_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
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








	$tdatasatei_of_brand1["updated_by"] = $fdata;
//	raku_title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
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




	$tdatasatei_of_brand1["raku_title"] = $fdata;
//	label_output_flag
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
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




	$tdatasatei_of_brand1["label_output_flag"] = $fdata;
//	season
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
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




	$tdatasatei_of_brand1["season"] = $fdata;
//	kanryou_henbi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
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








	$tdatasatei_of_brand1["kanryou_henbi"] = $fdata;
//	satei_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
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




	$tdatasatei_of_brand1["satei_by"] = $fdata;
//	kaitori_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
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








	$tdatasatei_of_brand1["kaitori_by"] = $fdata;
//	comment
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "comment";
	$fdata["GoodName"] = "comment";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","comment");
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




	$tdatasatei_of_brand1["comment"] = $fdata;
//	satei_hi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
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




	$tdatasatei_of_brand1["satei_hi"] = $fdata;
//	kaitory_hi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
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








	$tdatasatei_of_brand1["kaitory_hi"] = $fdata;
//	DT_UP_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
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








	$tdatasatei_of_brand1["DT_UP_DATE"] = $fdata;
//	AWAZU_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
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








	$tdatasatei_of_brand1["AWAZU_DATE"] = $fdata;
//	AWAZU_NIN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
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








	$tdatasatei_of_brand1["AWAZU_NIN"] = $fdata;
//	Destination_selling
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
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




	$tdatasatei_of_brand1["Destination_selling"] = $fdata;
//	Finish
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "Finish";
	$fdata["GoodName"] = "Finish";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","Finish");
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








	$tdatasatei_of_brand1["Finish"] = $fdata;
//	Discrimination
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "Discrimination";
	$fdata["GoodName"] = "Discrimination";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","Discrimination");
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








	$tdatasatei_of_brand1["Discrimination"] = $fdata;
//	accessories
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
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




	$tdatasatei_of_brand1["accessories"] = $fdata;
//	priority
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
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




	$tdatasatei_of_brand1["priority"] = $fdata;
//	A_storage
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
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




	$tdatasatei_of_brand1["A_storage"] = $fdata;
//	price_secret
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
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




	$tdatasatei_of_brand1["price_secret"] = $fdata;
//	sales_price_secret
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
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




	$tdatasatei_of_brand1["sales_price_secret"] = $fdata;
//	eq
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
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








	$tdatasatei_of_brand1["eq"] = $fdata;
//	en
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
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








	$tdatasatei_of_brand1["en"] = $fdata;
//	line
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
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




	$tdatasatei_of_brand1["line"] = $fdata;
//	item_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "item_name";
	$fdata["GoodName"] = "item_name";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","item_name");
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




	$tdatasatei_of_brand1["item_name"] = $fdata;
//	handle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 47;
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




	$tdatasatei_of_brand1["handle"] = $fdata;
//	serial_number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 48;
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




	$tdatasatei_of_brand1["serial_number"] = $fdata;
//	stamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 49;
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




	$tdatasatei_of_brand1["stamp"] = $fdata;
//	Sleeve_Length
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 50;
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




	$tdatasatei_of_brand1["Sleeve_Length"] = $fdata;
//	length
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 51;
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




	$tdatasatei_of_brand1["length"] = $fdata;
//	ecc_seq
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 52;
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




	$tdatasatei_of_brand1["ecc_seq"] = $fdata;
//	yahoo_junle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 53;
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








	$tdatasatei_of_brand1["yahoo_junle"] = $fdata;
//	logo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 54;
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




	$tdatasatei_of_brand1["logo"] = $fdata;
//	parts
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 55;
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




	$tdatasatei_of_brand1["parts"] = $fdata;
//	country_of_origin
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 56;
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




	$tdatasatei_of_brand1["country_of_origin"] = $fdata;
//	zipper
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 57;
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




	$tdatasatei_of_brand1["zipper"] = $fdata;
//	guarantee
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 58;
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




	$tdatasatei_of_brand1["guarantee"] = $fdata;
//	errors
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 59;
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




	$tdatasatei_of_brand1["errors"] = $fdata;
//	amount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 60;
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




	$tdatasatei_of_brand1["amount"] = $fdata;
//	satei_error
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 61;
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




	$tdatasatei_of_brand1["satei_error"] = $fdata;
//	shape_supplement
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 62;
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




	$tdatasatei_of_brand1["shape_supplement"] = $fdata;
//	product_style
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 63;
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




	$tdatasatei_of_brand1["product_style"] = $fdata;
//	collar_neck_line
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 64;
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




	$tdatasatei_of_brand1["collar_neck_line"] = $fdata;
//	breast
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 65;
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




	$tdatasatei_of_brand1["breast"] = $fdata;
//	silhouette
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 66;
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




	$tdatasatei_of_brand1["silhouette"] = $fdata;
//	sleeve
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 67;
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




	$tdatasatei_of_brand1["sleeve"] = $fdata;
//	hall_mark
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 68;
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




	$tdatasatei_of_brand1["hall_mark"] = $fdata;
//	plate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 69;
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




	$tdatasatei_of_brand1["plate"] = $fdata;
//	toe
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 70;
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




	$tdatasatei_of_brand1["toe"] = $fdata;
//	heel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 71;
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




	$tdatasatei_of_brand1["heel"] = $fdata;
//	cloth
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 72;
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




	$tdatasatei_of_brand1["cloth"] = $fdata;
//	parallel_import_flag
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 73;
	$fdata["strName"] = "parallel_import_flag";
	$fdata["GoodName"] = "parallel_import_flag";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","parallel_import_flag");
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








	$tdatasatei_of_brand1["parallel_import_flag"] = $fdata;
//	designer
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 74;
	$fdata["strName"] = "designer";
	$fdata["GoodName"] = "designer";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","designer");
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




	$tdatasatei_of_brand1["designer"] = $fdata;
//	meisai_number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 75;
	$fdata["strName"] = "meisai_number";
	$fdata["GoodName"] = "meisai_number";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","meisai_number");
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




	$tdatasatei_of_brand1["meisai_number"] = $fdata;
//	tentou_label_output_flag
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 76;
	$fdata["strName"] = "tentou_label_output_flag";
	$fdata["GoodName"] = "tentou_label_output_flag";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","tentou_label_output_flag");
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




	$tdatasatei_of_brand1["tentou_label_output_flag"] = $fdata;
//	novelty
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 77;
	$fdata["strName"] = "novelty";
	$fdata["GoodName"] = "novelty";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","novelty");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "novelty";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`novelty`";

	
	
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




	$tdatasatei_of_brand1["novelty"] = $fdata;
//	initial_included
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 78;
	$fdata["strName"] = "initial_included";
	$fdata["GoodName"] = "initial_included";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","initial_included");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "initial_included";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`initial_included`";

	
	
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




	$tdatasatei_of_brand1["initial_included"] = $fdata;
//	motif
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 79;
	$fdata["strName"] = "motif";
	$fdata["GoodName"] = "motif";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","motif");
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




	$tdatasatei_of_brand1["motif"] = $fdata;
//	auto_price_cut_prohibited
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 80;
	$fdata["strName"] = "auto_price_cut_prohibited";
	$fdata["GoodName"] = "auto_price_cut_prohibited";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","auto_price_cut_prohibited");
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




	$tdatasatei_of_brand1["auto_price_cut_prohibited"] = $fdata;
//	Eoc_trader_id_for_buy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 81;
	$fdata["strName"] = "Eoc_trader_id_for_buy";
	$fdata["GoodName"] = "Eoc_trader_id_for_buy";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","Eoc_trader_id_for_buy");
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








	$tdatasatei_of_brand1["Eoc_trader_id_for_buy"] = $fdata;
//	other_cost
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 82;
	$fdata["strName"] = "other_cost";
	$fdata["GoodName"] = "other_cost";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","other_cost");
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




	$tdatasatei_of_brand1["other_cost"] = $fdata;
//	yahoo_condition1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 83;
	$fdata["strName"] = "yahoo_condition1";
	$fdata["GoodName"] = "yahoo_condition1";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","yahoo_condition1");
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




	$tdatasatei_of_brand1["yahoo_condition1"] = $fdata;
//	remark
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 84;
	$fdata["strName"] = "remark";
	$fdata["GoodName"] = "remark";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("satei_of_brand","remark");
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




	$tdatasatei_of_brand1["remark"] = $fdata;


$tables_data["satei_of_brand"]=&$tdatasatei_of_brand1;
$field_labels["satei_of_brand"] = &$fieldLabelssatei_of_brand1;
$fieldToolTips["satei_of_brand"] = &$fieldToolTipssatei_of_brand1;
$placeHolders["satei_of_brand"] = &$placeHolderssatei_of_brand1;
$page_titles["satei_of_brand"] = &$pageTitlessatei_of_brand1;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["satei_of_brand"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["satei_of_brand"] = array();


	
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
					$masterTablesData["satei_of_brand"][0] = $masterParams;
				$masterTablesData["satei_of_brand"][0]["masterKeys"] = array();
	$masterTablesData["satei_of_brand"][0]["masterKeys"][]="ecc_id";
				$masterTablesData["satei_of_brand"][0]["detailKeys"] = array();
	$masterTablesData["satei_of_brand"][0]["detailKeys"][]="ecc_id";
		
	
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
					$masterTablesData["satei_of_brand"][1] = $masterParams;
				$masterTablesData["satei_of_brand"][1]["masterKeys"] = array();
	$masterTablesData["satei_of_brand"][1]["masterKeys"][]="id";
				$masterTablesData["satei_of_brand"][1]["detailKeys"] = array();
	$masterTablesData["satei_of_brand"][1]["detailKeys"][]="Eoc_trader_id_for_buy";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_satei_of_brand1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`shouhin`.`product_id`,  `shouhin`.`category_id`,  `shouhin`.`goods_title`,  `shouhin`.`title`,  `shouhin`.`sub_category_id1`,  `shouhin`.`ecc_id`,  `shouhin`.`price`,  `shouhin`.`sales_price`,  `shouhin`.`description`,  `shouhin`.`status`,  `shouhin`.`product_num`,  `shouhin`.`yahoo_size`,  `shouhin`.`yahoo_title`,  `shouhin`.`yahoo_sankou_uwadai`,  `shouhin`.`yahoo_sozai`,  `shouhin`.`yahoo_color`,  `shouhin`.`yahoo_kataban`,  `shouhin`.`yahoo_condition2`,  `shouhin`.`yahoo_sinaban`,  `shouhin`.`yahoo_sex`,  `shouhin`.`nyuukin_price`,  `shouhin`.`updated_by`,  `shouhin`.`raku_title`,  `shouhin`.`label_output_flag`,  `shouhin`.`season`,  `shouhin`.`kanryou_henbi`,  `shouhin`.`satei_by`,  `shouhin`.`kaitori_by`,  `shouhin`.`comment`,  `shouhin`.`satei_hi`,  `shouhin`.`kaitory_hi`,  `shouhin`.`DT_UP_DATE`,  `shouhin`.`AWAZU_DATE`,  `shouhin`.`AWAZU_NIN`,  `shouhin`.`Destination_selling`,  `shouhin`.`Finish`,  `shouhin`.`Discrimination`,  `shouhin`.`accessories`,  `shouhin`.`priority`,  `shouhin`.`A_storage`,  `shouhin`.`price_secret`,  `shouhin`.`sales_price_secret`,  `shouhin`.`eq`,  `shouhin`.`en`,  `shouhin`.`line`,  `shouhin`.`item_name`,  `shouhin`.`handle`,  `shouhin`.`serial_number`,  `shouhin`.`stamp`,  `shouhin`.`Sleeve_Length`,  `shouhin`.`length`,  `Eoc`.`ecc_seq`,  `shouhin`.`yahoo_junle`,  `shouhin`.`logo`,  `shouhin`.`parts`,  `shouhin`.`country_of_origin`,  `shouhin`.`zipper`,  `shouhin`.`guarantee`,  `shouhin`.`errors`,  `shouhin`.`amount`,  `shouhin`.`satei_error`,  `shouhin`.`shape_supplement`,  `shouhin`.`product_style`,  `shouhin`.`collar_neck_line`,  `shouhin`.`breast`,  `shouhin`.`silhouette`,  `shouhin`.`sleeve`,  `shouhin`.`hall_mark`,  `shouhin`.`plate`,  `shouhin`.`toe`,  `shouhin`.`heel`,  `shouhin`.`cloth`,  `shouhin`.`parallel_import_flag`,  `shouhin`.`designer`,  `shouhin`.`meisai_number`,  `shouhin`.`tentou_label_output_flag`,  `shouhin`.`novelty`,  `shouhin`.`initial_included`,  `shouhin`.`motif`,  `shouhin`.`auto_price_cut_prohibited`,  `shouhin`.`Eoc_trader_id_for_buy`,  `shouhin`.`other_cost`,  `shouhin`.`yahoo_condition1`,  `shouhin`.`remark`";
$proto0["m_strFrom"] = "FROM `shouhin`  LEFT OUTER JOIN `Eoc` ON `shouhin`.`ecc_id` = `Eoc`.`ecc_id`";
$proto0["m_strWhere"] = "(`shouhin`.`category_id` !=  10 AND `shouhin`.`category_id` !=  17 AND `shouhin`.`category_id` !=  18 AND `shouhin`.`category_id` !=  19 AND `shouhin`.`category_id` !=  50 AND `shouhin`.`category_id` !=  20 AND `shouhin`.`category_id` !=  51 AND `shouhin`.`category_id` !=  21 AND `shouhin`.`category_id` !=  22 AND `shouhin`.`category_id` !=  23 AND `shouhin`.`category_id` !=  69 AND `shouhin`.`category_id` !=  68 AND `shouhin`.`category_id` !=  67 AND `shouhin`.`category_id` !=  66 AND `shouhin`.`category_id` !=  65) AND (`shouhin`.`status` =32 OR `shouhin`.`status` =34)";
$proto0["m_strOrderBy"] = "ORDER BY `shouhin`.`product_id` DESC";
$proto0["m_strTail"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "(`shouhin`.`category_id` !=  10 AND `shouhin`.`category_id` !=  17 AND `shouhin`.`category_id` !=  18 AND `shouhin`.`category_id` !=  19 AND `shouhin`.`category_id` !=  50 AND `shouhin`.`category_id` !=  20 AND `shouhin`.`category_id` !=  51 AND `shouhin`.`category_id` !=  21 AND `shouhin`.`category_id` !=  22 AND `shouhin`.`category_id` !=  23 AND `shouhin`.`category_id` !=  69 AND `shouhin`.`category_id` !=  68 AND `shouhin`.`category_id` !=  67 AND `shouhin`.`category_id` !=  66 AND `shouhin`.`category_id` !=  65) AND (`shouhin`.`status` =32 OR `shouhin`.`status` =34)";
$proto2["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(`shouhin`.`category_id` !=  10 AND `shouhin`.`category_id` !=  17 AND `shouhin`.`category_id` !=  18 AND `shouhin`.`category_id` !=  19 AND `shouhin`.`category_id` !=  50 AND `shouhin`.`category_id` !=  20 AND `shouhin`.`category_id` !=  51 AND `shouhin`.`category_id` !=  21 AND `shouhin`.`category_id` !=  22 AND `shouhin`.`category_id` !=  23 AND `shouhin`.`category_id` !=  69 AND `shouhin`.`category_id` !=  68 AND `shouhin`.`category_id` !=  67 AND `shouhin`.`category_id` !=  66 AND `shouhin`.`category_id` !=  65) AND (`shouhin`.`status` =32 OR `shouhin`.`status` =34)"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
						$proto4=array();
$proto4["m_sql"] = "`shouhin`.`category_id` !=  10 AND `shouhin`.`category_id` !=  17 AND `shouhin`.`category_id` !=  18 AND `shouhin`.`category_id` !=  19 AND `shouhin`.`category_id` !=  50 AND `shouhin`.`category_id` !=  20 AND `shouhin`.`category_id` !=  51 AND `shouhin`.`category_id` !=  21 AND `shouhin`.`category_id` !=  22 AND `shouhin`.`category_id` !=  23 AND `shouhin`.`category_id` !=  69 AND `shouhin`.`category_id` !=  68 AND `shouhin`.`category_id` !=  67 AND `shouhin`.`category_id` !=  66 AND `shouhin`.`category_id` !=  65";
$proto4["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "`shouhin`.`category_id` !=  10 AND `shouhin`.`category_id` !=  17 AND `shouhin`.`category_id` !=  18 AND `shouhin`.`category_id` !=  19 AND `shouhin`.`category_id` !=  50 AND `shouhin`.`category_id` !=  20 AND `shouhin`.`category_id` !=  51 AND `shouhin`.`category_id` !=  21 AND `shouhin`.`category_id` !=  22 AND `shouhin`.`category_id` !=  23 AND `shouhin`.`category_id` !=  69 AND `shouhin`.`category_id` !=  68 AND `shouhin`.`category_id` !=  67 AND `shouhin`.`category_id` !=  66 AND `shouhin`.`category_id` !=  65"
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
						$proto6=array();
$proto6["m_sql"] = "`shouhin`.`category_id` !=  10";
$proto6["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "category_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto6["m_column"]=$obj;
$proto6["m_contained"] = array();
$proto6["m_strCase"] = "!=  10";
$proto6["m_havingmode"] = false;
$proto6["m_inBrackets"] = false;
$proto6["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto6);

			$proto4["m_contained"][]=$obj;
						$proto8=array();
$proto8["m_sql"] = "`shouhin`.`category_id` !=  17";
$proto8["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "category_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto8["m_column"]=$obj;
$proto8["m_contained"] = array();
$proto8["m_strCase"] = "!=  17";
$proto8["m_havingmode"] = false;
$proto8["m_inBrackets"] = false;
$proto8["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto8);

			$proto4["m_contained"][]=$obj;
						$proto10=array();
$proto10["m_sql"] = "`shouhin`.`category_id` !=  18";
$proto10["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "category_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto10["m_column"]=$obj;
$proto10["m_contained"] = array();
$proto10["m_strCase"] = "!=  18";
$proto10["m_havingmode"] = false;
$proto10["m_inBrackets"] = false;
$proto10["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto10);

			$proto4["m_contained"][]=$obj;
						$proto12=array();
$proto12["m_sql"] = "`shouhin`.`category_id` !=  19";
$proto12["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "category_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto12["m_column"]=$obj;
$proto12["m_contained"] = array();
$proto12["m_strCase"] = "!=  19";
$proto12["m_havingmode"] = false;
$proto12["m_inBrackets"] = false;
$proto12["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto12);

			$proto4["m_contained"][]=$obj;
						$proto14=array();
$proto14["m_sql"] = "`shouhin`.`category_id` !=  50";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "category_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "!=  50";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = false;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

			$proto4["m_contained"][]=$obj;
						$proto16=array();
$proto16["m_sql"] = "`shouhin`.`category_id` !=  20";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "category_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "!=  20";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = false;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

			$proto4["m_contained"][]=$obj;
						$proto18=array();
$proto18["m_sql"] = "`shouhin`.`category_id` !=  51";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "category_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "!=  51";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

			$proto4["m_contained"][]=$obj;
						$proto20=array();
$proto20["m_sql"] = "`shouhin`.`category_id` !=  21";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "category_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "!=  21";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

			$proto4["m_contained"][]=$obj;
						$proto22=array();
$proto22["m_sql"] = "`shouhin`.`category_id` !=  22";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "category_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "!=  22";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

			$proto4["m_contained"][]=$obj;
						$proto24=array();
$proto24["m_sql"] = "`shouhin`.`category_id` !=  23";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "category_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "!=  23";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

			$proto4["m_contained"][]=$obj;
						$proto26=array();
$proto26["m_sql"] = "`shouhin`.`category_id` !=  69";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "category_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "!=  69";
$proto26["m_havingmode"] = false;
$proto26["m_inBrackets"] = false;
$proto26["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto26);

			$proto4["m_contained"][]=$obj;
						$proto28=array();
$proto28["m_sql"] = "`shouhin`.`category_id` !=  68";
$proto28["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "category_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto28["m_column"]=$obj;
$proto28["m_contained"] = array();
$proto28["m_strCase"] = "!=  68";
$proto28["m_havingmode"] = false;
$proto28["m_inBrackets"] = false;
$proto28["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto28);

			$proto4["m_contained"][]=$obj;
						$proto30=array();
$proto30["m_sql"] = "`shouhin`.`category_id` !=  67";
$proto30["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "category_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto30["m_column"]=$obj;
$proto30["m_contained"] = array();
$proto30["m_strCase"] = "!=  67";
$proto30["m_havingmode"] = false;
$proto30["m_inBrackets"] = false;
$proto30["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto30);

			$proto4["m_contained"][]=$obj;
						$proto32=array();
$proto32["m_sql"] = "`shouhin`.`category_id` !=  66";
$proto32["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "category_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto32["m_column"]=$obj;
$proto32["m_contained"] = array();
$proto32["m_strCase"] = "!=  66";
$proto32["m_havingmode"] = false;
$proto32["m_inBrackets"] = false;
$proto32["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto32);

			$proto4["m_contained"][]=$obj;
						$proto34=array();
$proto34["m_sql"] = "`shouhin`.`category_id` !=  65";
$proto34["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "category_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto34["m_column"]=$obj;
$proto34["m_contained"] = array();
$proto34["m_strCase"] = "!=  65";
$proto34["m_havingmode"] = false;
$proto34["m_inBrackets"] = false;
$proto34["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto34);

			$proto4["m_contained"][]=$obj;
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = true;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

			$proto2["m_contained"][]=$obj;
						$proto36=array();
$proto36["m_sql"] = "`shouhin`.`status` =32 OR `shouhin`.`status` =34";
$proto36["m_uniontype"] = "SQLL_OR";
	$obj = new SQLNonParsed(array(
	"m_sql" => "`shouhin`.`status` =32 OR `shouhin`.`status` =34"
));

$proto36["m_column"]=$obj;
$proto36["m_contained"] = array();
						$proto38=array();
$proto38["m_sql"] = "`shouhin`.`status` =32";
$proto38["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto38["m_column"]=$obj;
$proto38["m_contained"] = array();
$proto38["m_strCase"] = "=32";
$proto38["m_havingmode"] = false;
$proto38["m_inBrackets"] = false;
$proto38["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto38);

			$proto36["m_contained"][]=$obj;
						$proto40=array();
$proto40["m_sql"] = "`shouhin`.`status` =34";
$proto40["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto40["m_column"]=$obj;
$proto40["m_contained"] = array();
$proto40["m_strCase"] = "=34";
$proto40["m_havingmode"] = false;
$proto40["m_inBrackets"] = false;
$proto40["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto40);

			$proto36["m_contained"][]=$obj;
$proto36["m_strCase"] = "";
$proto36["m_havingmode"] = false;
$proto36["m_inBrackets"] = true;
$proto36["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto36);

			$proto2["m_contained"][]=$obj;
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto42=array();
$proto42["m_sql"] = "";
$proto42["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto42["m_column"]=$obj;
$proto42["m_contained"] = array();
$proto42["m_strCase"] = "";
$proto42["m_havingmode"] = false;
$proto42["m_inBrackets"] = false;
$proto42["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto42);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "product_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto44["m_sql"] = "`shouhin`.`product_id`";
$proto44["m_srcTableName"] = "satei_of_brand";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "category_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto46["m_sql"] = "`shouhin`.`category_id`";
$proto46["m_srcTableName"] = "satei_of_brand";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "goods_title",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto48["m_sql"] = "`shouhin`.`goods_title`";
$proto48["m_srcTableName"] = "satei_of_brand";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "title",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto50["m_sql"] = "`shouhin`.`title`";
$proto50["m_srcTableName"] = "satei_of_brand";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "sub_category_id1",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto52["m_sql"] = "`shouhin`.`sub_category_id1`";
$proto52["m_srcTableName"] = "satei_of_brand";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "ecc_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto54["m_sql"] = "`shouhin`.`ecc_id`";
$proto54["m_srcTableName"] = "satei_of_brand";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "price",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto56["m_sql"] = "`shouhin`.`price`";
$proto56["m_srcTableName"] = "satei_of_brand";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "sales_price",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto58["m_sql"] = "`shouhin`.`sales_price`";
$proto58["m_srcTableName"] = "satei_of_brand";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto60["m_sql"] = "`shouhin`.`description`";
$proto60["m_srcTableName"] = "satei_of_brand";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto62["m_sql"] = "`shouhin`.`status`";
$proto62["m_srcTableName"] = "satei_of_brand";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "product_num",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto64["m_sql"] = "`shouhin`.`product_num`";
$proto64["m_srcTableName"] = "satei_of_brand";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_size",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto66["m_sql"] = "`shouhin`.`yahoo_size`";
$proto66["m_srcTableName"] = "satei_of_brand";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_title",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto68["m_sql"] = "`shouhin`.`yahoo_title`";
$proto68["m_srcTableName"] = "satei_of_brand";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_sankou_uwadai",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto70["m_sql"] = "`shouhin`.`yahoo_sankou_uwadai`";
$proto70["m_srcTableName"] = "satei_of_brand";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_sozai",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto72["m_sql"] = "`shouhin`.`yahoo_sozai`";
$proto72["m_srcTableName"] = "satei_of_brand";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_color",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto74["m_sql"] = "`shouhin`.`yahoo_color`";
$proto74["m_srcTableName"] = "satei_of_brand";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_kataban",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto76["m_sql"] = "`shouhin`.`yahoo_kataban`";
$proto76["m_srcTableName"] = "satei_of_brand";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_condition2",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto78["m_sql"] = "`shouhin`.`yahoo_condition2`";
$proto78["m_srcTableName"] = "satei_of_brand";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_sinaban",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto80["m_sql"] = "`shouhin`.`yahoo_sinaban`";
$proto80["m_srcTableName"] = "satei_of_brand";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_sex",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto82["m_sql"] = "`shouhin`.`yahoo_sex`";
$proto82["m_srcTableName"] = "satei_of_brand";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "nyuukin_price",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto84["m_sql"] = "`shouhin`.`nyuukin_price`";
$proto84["m_srcTableName"] = "satei_of_brand";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto86["m_sql"] = "`shouhin`.`updated_by`";
$proto86["m_srcTableName"] = "satei_of_brand";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "raku_title",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto88["m_sql"] = "`shouhin`.`raku_title`";
$proto88["m_srcTableName"] = "satei_of_brand";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "label_output_flag",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto90["m_sql"] = "`shouhin`.`label_output_flag`";
$proto90["m_srcTableName"] = "satei_of_brand";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLField(array(
	"m_strName" => "season",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto92["m_sql"] = "`shouhin`.`season`";
$proto92["m_srcTableName"] = "satei_of_brand";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "";
$obj = new SQLFieldListItem($proto92);

$proto0["m_fieldlist"][]=$obj;
						$proto94=array();
			$obj = new SQLField(array(
	"m_strName" => "kanryou_henbi",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto94["m_sql"] = "`shouhin`.`kanryou_henbi`";
$proto94["m_srcTableName"] = "satei_of_brand";
$proto94["m_expr"]=$obj;
$proto94["m_alias"] = "";
$obj = new SQLFieldListItem($proto94);

$proto0["m_fieldlist"][]=$obj;
						$proto96=array();
			$obj = new SQLField(array(
	"m_strName" => "satei_by",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto96["m_sql"] = "`shouhin`.`satei_by`";
$proto96["m_srcTableName"] = "satei_of_brand";
$proto96["m_expr"]=$obj;
$proto96["m_alias"] = "";
$obj = new SQLFieldListItem($proto96);

$proto0["m_fieldlist"][]=$obj;
						$proto98=array();
			$obj = new SQLField(array(
	"m_strName" => "kaitori_by",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto98["m_sql"] = "`shouhin`.`kaitori_by`";
$proto98["m_srcTableName"] = "satei_of_brand";
$proto98["m_expr"]=$obj;
$proto98["m_alias"] = "";
$obj = new SQLFieldListItem($proto98);

$proto0["m_fieldlist"][]=$obj;
						$proto100=array();
			$obj = new SQLField(array(
	"m_strName" => "comment",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto100["m_sql"] = "`shouhin`.`comment`";
$proto100["m_srcTableName"] = "satei_of_brand";
$proto100["m_expr"]=$obj;
$proto100["m_alias"] = "";
$obj = new SQLFieldListItem($proto100);

$proto0["m_fieldlist"][]=$obj;
						$proto102=array();
			$obj = new SQLField(array(
	"m_strName" => "satei_hi",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto102["m_sql"] = "`shouhin`.`satei_hi`";
$proto102["m_srcTableName"] = "satei_of_brand";
$proto102["m_expr"]=$obj;
$proto102["m_alias"] = "";
$obj = new SQLFieldListItem($proto102);

$proto0["m_fieldlist"][]=$obj;
						$proto104=array();
			$obj = new SQLField(array(
	"m_strName" => "kaitory_hi",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto104["m_sql"] = "`shouhin`.`kaitory_hi`";
$proto104["m_srcTableName"] = "satei_of_brand";
$proto104["m_expr"]=$obj;
$proto104["m_alias"] = "";
$obj = new SQLFieldListItem($proto104);

$proto0["m_fieldlist"][]=$obj;
						$proto106=array();
			$obj = new SQLField(array(
	"m_strName" => "DT_UP_DATE",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto106["m_sql"] = "`shouhin`.`DT_UP_DATE`";
$proto106["m_srcTableName"] = "satei_of_brand";
$proto106["m_expr"]=$obj;
$proto106["m_alias"] = "";
$obj = new SQLFieldListItem($proto106);

$proto0["m_fieldlist"][]=$obj;
						$proto108=array();
			$obj = new SQLField(array(
	"m_strName" => "AWAZU_DATE",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto108["m_sql"] = "`shouhin`.`AWAZU_DATE`";
$proto108["m_srcTableName"] = "satei_of_brand";
$proto108["m_expr"]=$obj;
$proto108["m_alias"] = "";
$obj = new SQLFieldListItem($proto108);

$proto0["m_fieldlist"][]=$obj;
						$proto110=array();
			$obj = new SQLField(array(
	"m_strName" => "AWAZU_NIN",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto110["m_sql"] = "`shouhin`.`AWAZU_NIN`";
$proto110["m_srcTableName"] = "satei_of_brand";
$proto110["m_expr"]=$obj;
$proto110["m_alias"] = "";
$obj = new SQLFieldListItem($proto110);

$proto0["m_fieldlist"][]=$obj;
						$proto112=array();
			$obj = new SQLField(array(
	"m_strName" => "Destination_selling",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto112["m_sql"] = "`shouhin`.`Destination_selling`";
$proto112["m_srcTableName"] = "satei_of_brand";
$proto112["m_expr"]=$obj;
$proto112["m_alias"] = "";
$obj = new SQLFieldListItem($proto112);

$proto0["m_fieldlist"][]=$obj;
						$proto114=array();
			$obj = new SQLField(array(
	"m_strName" => "Finish",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto114["m_sql"] = "`shouhin`.`Finish`";
$proto114["m_srcTableName"] = "satei_of_brand";
$proto114["m_expr"]=$obj;
$proto114["m_alias"] = "";
$obj = new SQLFieldListItem($proto114);

$proto0["m_fieldlist"][]=$obj;
						$proto116=array();
			$obj = new SQLField(array(
	"m_strName" => "Discrimination",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto116["m_sql"] = "`shouhin`.`Discrimination`";
$proto116["m_srcTableName"] = "satei_of_brand";
$proto116["m_expr"]=$obj;
$proto116["m_alias"] = "";
$obj = new SQLFieldListItem($proto116);

$proto0["m_fieldlist"][]=$obj;
						$proto118=array();
			$obj = new SQLField(array(
	"m_strName" => "accessories",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto118["m_sql"] = "`shouhin`.`accessories`";
$proto118["m_srcTableName"] = "satei_of_brand";
$proto118["m_expr"]=$obj;
$proto118["m_alias"] = "";
$obj = new SQLFieldListItem($proto118);

$proto0["m_fieldlist"][]=$obj;
						$proto120=array();
			$obj = new SQLField(array(
	"m_strName" => "priority",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto120["m_sql"] = "`shouhin`.`priority`";
$proto120["m_srcTableName"] = "satei_of_brand";
$proto120["m_expr"]=$obj;
$proto120["m_alias"] = "";
$obj = new SQLFieldListItem($proto120);

$proto0["m_fieldlist"][]=$obj;
						$proto122=array();
			$obj = new SQLField(array(
	"m_strName" => "A_storage",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto122["m_sql"] = "`shouhin`.`A_storage`";
$proto122["m_srcTableName"] = "satei_of_brand";
$proto122["m_expr"]=$obj;
$proto122["m_alias"] = "";
$obj = new SQLFieldListItem($proto122);

$proto0["m_fieldlist"][]=$obj;
						$proto124=array();
			$obj = new SQLField(array(
	"m_strName" => "price_secret",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto124["m_sql"] = "`shouhin`.`price_secret`";
$proto124["m_srcTableName"] = "satei_of_brand";
$proto124["m_expr"]=$obj;
$proto124["m_alias"] = "";
$obj = new SQLFieldListItem($proto124);

$proto0["m_fieldlist"][]=$obj;
						$proto126=array();
			$obj = new SQLField(array(
	"m_strName" => "sales_price_secret",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto126["m_sql"] = "`shouhin`.`sales_price_secret`";
$proto126["m_srcTableName"] = "satei_of_brand";
$proto126["m_expr"]=$obj;
$proto126["m_alias"] = "";
$obj = new SQLFieldListItem($proto126);

$proto0["m_fieldlist"][]=$obj;
						$proto128=array();
			$obj = new SQLField(array(
	"m_strName" => "eq",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto128["m_sql"] = "`shouhin`.`eq`";
$proto128["m_srcTableName"] = "satei_of_brand";
$proto128["m_expr"]=$obj;
$proto128["m_alias"] = "";
$obj = new SQLFieldListItem($proto128);

$proto0["m_fieldlist"][]=$obj;
						$proto130=array();
			$obj = new SQLField(array(
	"m_strName" => "en",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto130["m_sql"] = "`shouhin`.`en`";
$proto130["m_srcTableName"] = "satei_of_brand";
$proto130["m_expr"]=$obj;
$proto130["m_alias"] = "";
$obj = new SQLFieldListItem($proto130);

$proto0["m_fieldlist"][]=$obj;
						$proto132=array();
			$obj = new SQLField(array(
	"m_strName" => "line",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto132["m_sql"] = "`shouhin`.`line`";
$proto132["m_srcTableName"] = "satei_of_brand";
$proto132["m_expr"]=$obj;
$proto132["m_alias"] = "";
$obj = new SQLFieldListItem($proto132);

$proto0["m_fieldlist"][]=$obj;
						$proto134=array();
			$obj = new SQLField(array(
	"m_strName" => "item_name",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto134["m_sql"] = "`shouhin`.`item_name`";
$proto134["m_srcTableName"] = "satei_of_brand";
$proto134["m_expr"]=$obj;
$proto134["m_alias"] = "";
$obj = new SQLFieldListItem($proto134);

$proto0["m_fieldlist"][]=$obj;
						$proto136=array();
			$obj = new SQLField(array(
	"m_strName" => "handle",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto136["m_sql"] = "`shouhin`.`handle`";
$proto136["m_srcTableName"] = "satei_of_brand";
$proto136["m_expr"]=$obj;
$proto136["m_alias"] = "";
$obj = new SQLFieldListItem($proto136);

$proto0["m_fieldlist"][]=$obj;
						$proto138=array();
			$obj = new SQLField(array(
	"m_strName" => "serial_number",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto138["m_sql"] = "`shouhin`.`serial_number`";
$proto138["m_srcTableName"] = "satei_of_brand";
$proto138["m_expr"]=$obj;
$proto138["m_alias"] = "";
$obj = new SQLFieldListItem($proto138);

$proto0["m_fieldlist"][]=$obj;
						$proto140=array();
			$obj = new SQLField(array(
	"m_strName" => "stamp",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto140["m_sql"] = "`shouhin`.`stamp`";
$proto140["m_srcTableName"] = "satei_of_brand";
$proto140["m_expr"]=$obj;
$proto140["m_alias"] = "";
$obj = new SQLFieldListItem($proto140);

$proto0["m_fieldlist"][]=$obj;
						$proto142=array();
			$obj = new SQLField(array(
	"m_strName" => "Sleeve_Length",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto142["m_sql"] = "`shouhin`.`Sleeve_Length`";
$proto142["m_srcTableName"] = "satei_of_brand";
$proto142["m_expr"]=$obj;
$proto142["m_alias"] = "";
$obj = new SQLFieldListItem($proto142);

$proto0["m_fieldlist"][]=$obj;
						$proto144=array();
			$obj = new SQLField(array(
	"m_strName" => "length",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto144["m_sql"] = "`shouhin`.`length`";
$proto144["m_srcTableName"] = "satei_of_brand";
$proto144["m_expr"]=$obj;
$proto144["m_alias"] = "";
$obj = new SQLFieldListItem($proto144);

$proto0["m_fieldlist"][]=$obj;
						$proto146=array();
			$obj = new SQLField(array(
	"m_strName" => "ecc_seq",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "satei_of_brand"
));

$proto146["m_sql"] = "`Eoc`.`ecc_seq`";
$proto146["m_srcTableName"] = "satei_of_brand";
$proto146["m_expr"]=$obj;
$proto146["m_alias"] = "";
$obj = new SQLFieldListItem($proto146);

$proto0["m_fieldlist"][]=$obj;
						$proto148=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_junle",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto148["m_sql"] = "`shouhin`.`yahoo_junle`";
$proto148["m_srcTableName"] = "satei_of_brand";
$proto148["m_expr"]=$obj;
$proto148["m_alias"] = "";
$obj = new SQLFieldListItem($proto148);

$proto0["m_fieldlist"][]=$obj;
						$proto150=array();
			$obj = new SQLField(array(
	"m_strName" => "logo",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto150["m_sql"] = "`shouhin`.`logo`";
$proto150["m_srcTableName"] = "satei_of_brand";
$proto150["m_expr"]=$obj;
$proto150["m_alias"] = "";
$obj = new SQLFieldListItem($proto150);

$proto0["m_fieldlist"][]=$obj;
						$proto152=array();
			$obj = new SQLField(array(
	"m_strName" => "parts",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto152["m_sql"] = "`shouhin`.`parts`";
$proto152["m_srcTableName"] = "satei_of_brand";
$proto152["m_expr"]=$obj;
$proto152["m_alias"] = "";
$obj = new SQLFieldListItem($proto152);

$proto0["m_fieldlist"][]=$obj;
						$proto154=array();
			$obj = new SQLField(array(
	"m_strName" => "country_of_origin",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto154["m_sql"] = "`shouhin`.`country_of_origin`";
$proto154["m_srcTableName"] = "satei_of_brand";
$proto154["m_expr"]=$obj;
$proto154["m_alias"] = "";
$obj = new SQLFieldListItem($proto154);

$proto0["m_fieldlist"][]=$obj;
						$proto156=array();
			$obj = new SQLField(array(
	"m_strName" => "zipper",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto156["m_sql"] = "`shouhin`.`zipper`";
$proto156["m_srcTableName"] = "satei_of_brand";
$proto156["m_expr"]=$obj;
$proto156["m_alias"] = "";
$obj = new SQLFieldListItem($proto156);

$proto0["m_fieldlist"][]=$obj;
						$proto158=array();
			$obj = new SQLField(array(
	"m_strName" => "guarantee",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto158["m_sql"] = "`shouhin`.`guarantee`";
$proto158["m_srcTableName"] = "satei_of_brand";
$proto158["m_expr"]=$obj;
$proto158["m_alias"] = "";
$obj = new SQLFieldListItem($proto158);

$proto0["m_fieldlist"][]=$obj;
						$proto160=array();
			$obj = new SQLField(array(
	"m_strName" => "errors",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto160["m_sql"] = "`shouhin`.`errors`";
$proto160["m_srcTableName"] = "satei_of_brand";
$proto160["m_expr"]=$obj;
$proto160["m_alias"] = "";
$obj = new SQLFieldListItem($proto160);

$proto0["m_fieldlist"][]=$obj;
						$proto162=array();
			$obj = new SQLField(array(
	"m_strName" => "amount",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto162["m_sql"] = "`shouhin`.`amount`";
$proto162["m_srcTableName"] = "satei_of_brand";
$proto162["m_expr"]=$obj;
$proto162["m_alias"] = "";
$obj = new SQLFieldListItem($proto162);

$proto0["m_fieldlist"][]=$obj;
						$proto164=array();
			$obj = new SQLField(array(
	"m_strName" => "satei_error",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto164["m_sql"] = "`shouhin`.`satei_error`";
$proto164["m_srcTableName"] = "satei_of_brand";
$proto164["m_expr"]=$obj;
$proto164["m_alias"] = "";
$obj = new SQLFieldListItem($proto164);

$proto0["m_fieldlist"][]=$obj;
						$proto166=array();
			$obj = new SQLField(array(
	"m_strName" => "shape_supplement",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto166["m_sql"] = "`shouhin`.`shape_supplement`";
$proto166["m_srcTableName"] = "satei_of_brand";
$proto166["m_expr"]=$obj;
$proto166["m_alias"] = "";
$obj = new SQLFieldListItem($proto166);

$proto0["m_fieldlist"][]=$obj;
						$proto168=array();
			$obj = new SQLField(array(
	"m_strName" => "product_style",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto168["m_sql"] = "`shouhin`.`product_style`";
$proto168["m_srcTableName"] = "satei_of_brand";
$proto168["m_expr"]=$obj;
$proto168["m_alias"] = "";
$obj = new SQLFieldListItem($proto168);

$proto0["m_fieldlist"][]=$obj;
						$proto170=array();
			$obj = new SQLField(array(
	"m_strName" => "collar_neck_line",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto170["m_sql"] = "`shouhin`.`collar_neck_line`";
$proto170["m_srcTableName"] = "satei_of_brand";
$proto170["m_expr"]=$obj;
$proto170["m_alias"] = "";
$obj = new SQLFieldListItem($proto170);

$proto0["m_fieldlist"][]=$obj;
						$proto172=array();
			$obj = new SQLField(array(
	"m_strName" => "breast",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto172["m_sql"] = "`shouhin`.`breast`";
$proto172["m_srcTableName"] = "satei_of_brand";
$proto172["m_expr"]=$obj;
$proto172["m_alias"] = "";
$obj = new SQLFieldListItem($proto172);

$proto0["m_fieldlist"][]=$obj;
						$proto174=array();
			$obj = new SQLField(array(
	"m_strName" => "silhouette",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto174["m_sql"] = "`shouhin`.`silhouette`";
$proto174["m_srcTableName"] = "satei_of_brand";
$proto174["m_expr"]=$obj;
$proto174["m_alias"] = "";
$obj = new SQLFieldListItem($proto174);

$proto0["m_fieldlist"][]=$obj;
						$proto176=array();
			$obj = new SQLField(array(
	"m_strName" => "sleeve",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto176["m_sql"] = "`shouhin`.`sleeve`";
$proto176["m_srcTableName"] = "satei_of_brand";
$proto176["m_expr"]=$obj;
$proto176["m_alias"] = "";
$obj = new SQLFieldListItem($proto176);

$proto0["m_fieldlist"][]=$obj;
						$proto178=array();
			$obj = new SQLField(array(
	"m_strName" => "hall_mark",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto178["m_sql"] = "`shouhin`.`hall_mark`";
$proto178["m_srcTableName"] = "satei_of_brand";
$proto178["m_expr"]=$obj;
$proto178["m_alias"] = "";
$obj = new SQLFieldListItem($proto178);

$proto0["m_fieldlist"][]=$obj;
						$proto180=array();
			$obj = new SQLField(array(
	"m_strName" => "plate",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto180["m_sql"] = "`shouhin`.`plate`";
$proto180["m_srcTableName"] = "satei_of_brand";
$proto180["m_expr"]=$obj;
$proto180["m_alias"] = "";
$obj = new SQLFieldListItem($proto180);

$proto0["m_fieldlist"][]=$obj;
						$proto182=array();
			$obj = new SQLField(array(
	"m_strName" => "toe",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto182["m_sql"] = "`shouhin`.`toe`";
$proto182["m_srcTableName"] = "satei_of_brand";
$proto182["m_expr"]=$obj;
$proto182["m_alias"] = "";
$obj = new SQLFieldListItem($proto182);

$proto0["m_fieldlist"][]=$obj;
						$proto184=array();
			$obj = new SQLField(array(
	"m_strName" => "heel",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto184["m_sql"] = "`shouhin`.`heel`";
$proto184["m_srcTableName"] = "satei_of_brand";
$proto184["m_expr"]=$obj;
$proto184["m_alias"] = "";
$obj = new SQLFieldListItem($proto184);

$proto0["m_fieldlist"][]=$obj;
						$proto186=array();
			$obj = new SQLField(array(
	"m_strName" => "cloth",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto186["m_sql"] = "`shouhin`.`cloth`";
$proto186["m_srcTableName"] = "satei_of_brand";
$proto186["m_expr"]=$obj;
$proto186["m_alias"] = "";
$obj = new SQLFieldListItem($proto186);

$proto0["m_fieldlist"][]=$obj;
						$proto188=array();
			$obj = new SQLField(array(
	"m_strName" => "parallel_import_flag",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto188["m_sql"] = "`shouhin`.`parallel_import_flag`";
$proto188["m_srcTableName"] = "satei_of_brand";
$proto188["m_expr"]=$obj;
$proto188["m_alias"] = "";
$obj = new SQLFieldListItem($proto188);

$proto0["m_fieldlist"][]=$obj;
						$proto190=array();
			$obj = new SQLField(array(
	"m_strName" => "designer",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto190["m_sql"] = "`shouhin`.`designer`";
$proto190["m_srcTableName"] = "satei_of_brand";
$proto190["m_expr"]=$obj;
$proto190["m_alias"] = "";
$obj = new SQLFieldListItem($proto190);

$proto0["m_fieldlist"][]=$obj;
						$proto192=array();
			$obj = new SQLField(array(
	"m_strName" => "meisai_number",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto192["m_sql"] = "`shouhin`.`meisai_number`";
$proto192["m_srcTableName"] = "satei_of_brand";
$proto192["m_expr"]=$obj;
$proto192["m_alias"] = "";
$obj = new SQLFieldListItem($proto192);

$proto0["m_fieldlist"][]=$obj;
						$proto194=array();
			$obj = new SQLField(array(
	"m_strName" => "tentou_label_output_flag",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto194["m_sql"] = "`shouhin`.`tentou_label_output_flag`";
$proto194["m_srcTableName"] = "satei_of_brand";
$proto194["m_expr"]=$obj;
$proto194["m_alias"] = "";
$obj = new SQLFieldListItem($proto194);

$proto0["m_fieldlist"][]=$obj;
						$proto196=array();
			$obj = new SQLField(array(
	"m_strName" => "novelty",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto196["m_sql"] = "`shouhin`.`novelty`";
$proto196["m_srcTableName"] = "satei_of_brand";
$proto196["m_expr"]=$obj;
$proto196["m_alias"] = "";
$obj = new SQLFieldListItem($proto196);

$proto0["m_fieldlist"][]=$obj;
						$proto198=array();
			$obj = new SQLField(array(
	"m_strName" => "initial_included",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto198["m_sql"] = "`shouhin`.`initial_included`";
$proto198["m_srcTableName"] = "satei_of_brand";
$proto198["m_expr"]=$obj;
$proto198["m_alias"] = "";
$obj = new SQLFieldListItem($proto198);

$proto0["m_fieldlist"][]=$obj;
						$proto200=array();
			$obj = new SQLField(array(
	"m_strName" => "motif",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto200["m_sql"] = "`shouhin`.`motif`";
$proto200["m_srcTableName"] = "satei_of_brand";
$proto200["m_expr"]=$obj;
$proto200["m_alias"] = "";
$obj = new SQLFieldListItem($proto200);

$proto0["m_fieldlist"][]=$obj;
						$proto202=array();
			$obj = new SQLField(array(
	"m_strName" => "auto_price_cut_prohibited",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto202["m_sql"] = "`shouhin`.`auto_price_cut_prohibited`";
$proto202["m_srcTableName"] = "satei_of_brand";
$proto202["m_expr"]=$obj;
$proto202["m_alias"] = "";
$obj = new SQLFieldListItem($proto202);

$proto0["m_fieldlist"][]=$obj;
						$proto204=array();
			$obj = new SQLField(array(
	"m_strName" => "Eoc_trader_id_for_buy",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto204["m_sql"] = "`shouhin`.`Eoc_trader_id_for_buy`";
$proto204["m_srcTableName"] = "satei_of_brand";
$proto204["m_expr"]=$obj;
$proto204["m_alias"] = "";
$obj = new SQLFieldListItem($proto204);

$proto0["m_fieldlist"][]=$obj;
						$proto206=array();
			$obj = new SQLField(array(
	"m_strName" => "other_cost",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto206["m_sql"] = "`shouhin`.`other_cost`";
$proto206["m_srcTableName"] = "satei_of_brand";
$proto206["m_expr"]=$obj;
$proto206["m_alias"] = "";
$obj = new SQLFieldListItem($proto206);

$proto0["m_fieldlist"][]=$obj;
						$proto208=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_condition1",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto208["m_sql"] = "`shouhin`.`yahoo_condition1`";
$proto208["m_srcTableName"] = "satei_of_brand";
$proto208["m_expr"]=$obj;
$proto208["m_alias"] = "";
$obj = new SQLFieldListItem($proto208);

$proto0["m_fieldlist"][]=$obj;
						$proto210=array();
			$obj = new SQLField(array(
	"m_strName" => "remark",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto210["m_sql"] = "`shouhin`.`remark`";
$proto210["m_srcTableName"] = "satei_of_brand";
$proto210["m_expr"]=$obj;
$proto210["m_alias"] = "";
$obj = new SQLFieldListItem($proto210);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto212=array();
$proto212["m_link"] = "SQLL_MAIN";
			$proto213=array();
$proto213["m_strName"] = "shouhin";
$proto213["m_srcTableName"] = "satei_of_brand";
$proto213["m_columns"] = array();
$proto213["m_columns"][] = "product_id";
$proto213["m_columns"][] = "category_id";
$proto213["m_columns"][] = "goods_title";
$proto213["m_columns"][] = "title";
$proto213["m_columns"][] = "sub_category_id1";
$proto213["m_columns"][] = "ecc_id";
$proto213["m_columns"][] = "price";
$proto213["m_columns"][] = "yahoo";
$proto213["m_columns"][] = "remark";
$proto213["m_columns"][] = "sales_price";
$proto213["m_columns"][] = "description";
$proto213["m_columns"][] = "status";
$proto213["m_columns"][] = "product_num";
$proto213["m_columns"][] = "updated_at";
$proto213["m_columns"][] = "yahoo_size";
$proto213["m_columns"][] = "yahoo_title";
$proto213["m_columns"][] = "yahoo_junle";
$proto213["m_columns"][] = "yahoo_sankou_uwadai";
$proto213["m_columns"][] = "yahoo_sozai";
$proto213["m_columns"][] = "yahoo_color";
$proto213["m_columns"][] = "yahoo_kataban";
$proto213["m_columns"][] = "yahoo_condition1";
$proto213["m_columns"][] = "yahoo_condition2";
$proto213["m_columns"][] = "yahoo_fuzokuhin";
$proto213["m_columns"][] = "yahoo_sinaban";
$proto213["m_columns"][] = "yahoo_saisun_sha";
$proto213["m_columns"][] = "yahoo_sex";
$proto213["m_columns"][] = "box_id";
$proto213["m_columns"][] = "nyuukin_price";
$proto213["m_columns"][] = "updated_by";
$proto213["m_columns"][] = "raku_title";
$proto213["m_columns"][] = "raku_hyoujisaki_category2";
$proto213["m_columns"][] = "raku_hyoujisaki_category";
$proto213["m_columns"][] = "raku_hyoujisaki_category3";
$proto213["m_columns"][] = "timesta";
$proto213["m_columns"][] = "saisun_start";
$proto213["m_columns"][] = "saisun_end";
$proto213["m_columns"][] = "label_output_flag";
$proto213["m_columns"][] = "season";
$proto213["m_columns"][] = "kanryou_henbi";
$proto213["m_columns"][] = "box_sort";
$proto213["m_columns"][] = "satei_by";
$proto213["m_columns"][] = "kaitori_by";
$proto213["m_columns"][] = "comment";
$proto213["m_columns"][] = "satei_hi";
$proto213["m_columns"][] = "kaitory_hi";
$proto213["m_columns"][] = "REG_PHOTOGRAPHER";
$proto213["m_columns"][] = "REG_AUTHOR";
$proto213["m_columns"][] = "REG_PACKINGS";
$proto213["m_columns"][] = "REG_KAKOU_DATE";
$proto213["m_columns"][] = "REG_KAKOU";
$proto213["m_columns"][] = "REG_EXHIBITOR";
$proto213["m_columns"][] = "REG_PHOTOGRAPHER_DATE";
$proto213["m_columns"][] = "DT_PACKING_DATE";
$proto213["m_columns"][] = "DT_UP_DATE";
$proto213["m_columns"][] = "AWAZU_DATE";
$proto213["m_columns"][] = "AWAZU_NIN";
$proto213["m_columns"][] = "sabun_date";
$proto213["m_columns"][] = "browseid";
$proto213["m_columns"][] = "browsenode";
$proto213["m_columns"][] = "gold_property";
$proto213["m_columns"][] = "ichiba_title";
$proto213["m_columns"][] = "Gram";
$proto213["m_columns"][] = "Parent_stone";
$proto213["m_columns"][] = "Aside_stone";
$proto213["m_columns"][] = "Appraiser";
$proto213["m_columns"][] = "Remarks";
$proto213["m_columns"][] = "Destination_selling";
$proto213["m_columns"][] = "Finish";
$proto213["m_columns"][] = "Discrimination";
$proto213["m_columns"][] = "accessories";
$proto213["m_columns"][] = "priority";
$proto213["m_columns"][] = "A_storage";
$proto213["m_columns"][] = "price_per_gram";
$proto213["m_columns"][] = "price_per_parent_stone";
$proto213["m_columns"][] = "price_per_aside_stone";
$proto213["m_columns"][] = "price_secret";
$proto213["m_columns"][] = "sales_price_secret";
$proto213["m_columns"][] = "eq";
$proto213["m_columns"][] = "en";
$proto213["m_columns"][] = "line";
$proto213["m_columns"][] = "item_name";
$proto213["m_columns"][] = "handle";
$proto213["m_columns"][] = "yahoo_color_id";
$proto213["m_columns"][] = "raku_hyoujisaki_category4";
$proto213["m_columns"][] = "raku_hyoujisaki_category5";
$proto213["m_columns"][] = "raku_dir_1";
$proto213["m_columns"][] = "raku_dir_2";
$proto213["m_columns"][] = "raku_dir_3";
$proto213["m_columns"][] = "raku_dir_4";
$proto213["m_columns"][] = "raku_dir_5";
$proto213["m_columns"][] = "raku_dir_result";
$proto213["m_columns"][] = "raku_tag_result";
$proto213["m_columns"][] = "serial_number";
$proto213["m_columns"][] = "Exhibition_Date";
$proto213["m_columns"][] = "search_keyword";
$proto213["m_columns"][] = "stamp";
$proto213["m_columns"][] = "motif";
$proto213["m_columns"][] = "Setting";
$proto213["m_columns"][] = "processing";
$proto213["m_columns"][] = "Sleeve_Length";
$proto213["m_columns"][] = "length";
$proto213["m_columns"][] = "Ring_size";
$proto213["m_columns"][] = "price_for_site";
$proto213["m_columns"][] = "yahoo_category_id";
$proto213["m_columns"][] = "Qty";
$proto213["m_columns"][] = "sales_period";
$proto213["m_columns"][] = "starting_price";
$proto213["m_columns"][] = "FLAG_NO_ARRIVAL";
$proto213["m_columns"][] = "amount_of_image";
$proto213["m_columns"][] = "csv";
$proto213["m_columns"][] = "return_output_flag";
$proto213["m_columns"][] = "wasabi_flag";
$proto213["m_columns"][] = "ws_import_date";
$proto213["m_columns"][] = "logo";
$proto213["m_columns"][] = "parts";
$proto213["m_columns"][] = "country_of_origin";
$proto213["m_columns"][] = "zipper";
$proto213["m_columns"][] = "guarantee";
$proto213["m_columns"][] = "errors";
$proto213["m_columns"][] = "designer";
$proto213["m_columns"][] = "hahakai";
$proto213["m_columns"][] = "effect";
$proto213["m_columns"][] = "shape";
$proto213["m_columns"][] = "cutting_style";
$proto213["m_columns"][] = "chain_type";
$proto213["m_columns"][] = "number_of_stones";
$proto213["m_columns"][] = "amount";
$proto213["m_columns"][] = "satei_error";
$proto213["m_columns"][] = "producing_area";
$proto213["m_columns"][] = "shape_supplement";
$proto213["m_columns"][] = "side_gem";
$proto213["m_columns"][] = "product_style";
$proto213["m_columns"][] = "collar_neck_line";
$proto213["m_columns"][] = "breast";
$proto213["m_columns"][] = "silhouette";
$proto213["m_columns"][] = "sleeve";
$proto213["m_columns"][] = "unit";
$proto213["m_columns"][] = "hall_mark";
$proto213["m_columns"][] = "plate";
$proto213["m_columns"][] = "toe";
$proto213["m_columns"][] = "heel";
$proto213["m_columns"][] = "cloth";
$proto213["m_columns"][] = "serial_number_for_storage";
$proto213["m_columns"][] = "official_url";
$proto213["m_columns"][] = "main_details";
$proto213["m_columns"][] = "notation_size";
$proto213["m_columns"][] = "shoe_size_jp";
$proto213["m_columns"][] = "Eoc_chigins2_id";
$proto213["m_columns"][] = "country_of_origin_name";
$proto213["m_columns"][] = "mailingkit_id";
$proto213["m_columns"][] = "DA_COMMENTSANDTOTAL";
$proto213["m_columns"][] = "DA_WEIGHT";
$proto213["m_columns"][] = "DA_PER_CARAT";
$proto213["m_columns"][] = "DA_SHAPE";
$proto213["m_columns"][] = "DA_SELFGRES";
$proto213["m_columns"][] = "DA_ORIGINALGRADEMLIKENED";
$proto213["m_columns"][] = "DA_SUGARCANE";
$proto213["m_columns"][] = "DA_RAPA";
$proto213["m_columns"][] = "DA_INTENSITY";
$proto213["m_columns"][] = "DA_OVERTONE";
$proto213["m_columns"][] = "DA_COLOR";
$proto213["m_columns"][] = "DA_CLARITY";
$proto213["m_columns"][] = "DA_CUT";
$proto213["m_columns"][] = "DA_POLISH";
$proto213["m_columns"][] = "DA_SYMMETRY";
$proto213["m_columns"][] = "DA_FLUO";
$proto213["m_columns"][] = "DA_COLOR_FLUO";
$proto213["m_columns"][] = "DA_WIDE";
$proto213["m_columns"][] = "DA_HIGH";
$proto213["m_columns"][] = "DA_DEPTH";
$proto213["m_columns"][] = "DA_APPRAISER";
$proto213["m_columns"][] = "DA_FRAPA";
$proto213["m_columns"][] = "DA_RATE";
$proto213["m_columns"][] = "DA_UNIT_PRICE_UNPLUG";
$proto213["m_columns"][] = "DA_YOURNAME";
$proto213["m_columns"][] = "DA_RAPAB";
$proto213["m_columns"][] = "DA_GROSSPROFIT";
$proto213["m_columns"][] = "DA_INTEREST_1";
$proto213["m_columns"][] = "DA_no";
$proto213["m_columns"][] = "kinsa_flag";
$proto213["m_columns"][] = "price_for_site_flag";
$proto213["m_columns"][] = "Eoc_takuhai_id";
$proto213["m_columns"][] = "Eoc_unfinished_id";
$proto213["m_columns"][] = "Eoc_chigins_unfinished_id";
$proto213["m_columns"][] = "chohyo_id";
$proto213["m_columns"][] = "location";
$proto213["m_columns"][] = "special_instructions_1";
$proto213["m_columns"][] = "special_instructions_2";
$proto213["m_columns"][] = "special_instructions_3";
$proto213["m_columns"][] = "chohyo_seihin_flag";
$proto213["m_columns"][] = "chohyo_dia_flag";
$proto213["m_columns"][] = "chohyo_type";
$proto213["m_columns"][] = "ichiyen_flag";
$proto213["m_columns"][] = "asuraku_fuka_flag";
$proto213["m_columns"][] = "parallel_import_flag";
$proto213["m_columns"][] = "meisai_number";
$proto213["m_columns"][] = "days_keep_price";
$proto213["m_columns"][] = "initial_included";
$proto213["m_columns"][] = "novelty";
$proto213["m_columns"][] = "tentou_label_output_flag";
$proto213["m_columns"][] = "itaku_flag";
$proto213["m_columns"][] = "including_catch";
$proto213["m_columns"][] = "ichiba_meeting_month";
$proto213["m_columns"][] = "ichiba_meeting_name";
$proto213["m_columns"][] = "ichiba_color";
$proto213["m_columns"][] = "ichiba_clarity";
$proto213["m_columns"][] = "ichiba_melee_gai";
$proto213["m_columns"][] = "ichiba_lot_pieces";
$proto213["m_columns"][] = "ichiba_image";
$proto213["m_columns"][] = "ichiba_img";
$proto213["m_columns"][] = "gold_check_id";
$proto213["m_columns"][] = "ichiba_exhibition_id";
$proto213["m_columns"][] = "ichiba_exhibition_sort";
$proto213["m_columns"][] = "cost";
$proto213["m_columns"][] = "auto_price_cut_prohibited";
$proto213["m_columns"][] = "event_price";
$proto213["m_columns"][] = "identification_cost";
$proto213["m_columns"][] = "other_cost";
$proto213["m_columns"][] = "stock_quantity";
$proto213["m_columns"][] = "Eoc_trader_id_for_buy";
$proto213["m_columns"][] = "Eoc_trader_id_for_sell";
$proto213["m_columns"][] = "multiplication_rate";
$proto213["m_columns"][] = "many_product_group_id";
$proto213["m_columns"][] = "trading_sort_id";
$proto213["m_columns"][] = "many_product_group_saiban";
$proto213["m_columns"][] = "purchase_category";
$proto213["m_columns"][] = "created_at";
$proto213["m_columns"][] = "created_by";
$proto213["m_columns"][] = "manual_input_price_per_gram";
$proto213["m_columns"][] = "satei_start";
$proto213["m_columns"][] = "self_DA_INTENSITY";
$proto213["m_columns"][] = "self_DA_OVERTONE";
$proto213["m_columns"][] = "self_DA_COLOR";
$proto213["m_columns"][] = "self_DA_CLARITY";
$proto213["m_columns"][] = "self_DA_CUT";
$proto213["m_columns"][] = "self_DA_POLISH";
$proto213["m_columns"][] = "self_DA_SYMMETRY";
$proto213["m_columns"][] = "self_DA_FLUO";
$proto213["m_columns"][] = "self_DA_COLOR_FLUO";
$proto213["m_columns"][] = "self_DA_FRAPA";
$proto213["m_columns"][] = "self_DA_RATE";
$proto213["m_columns"][] = "self_multiplication_rate";
$proto213["m_columns"][] = "is_seiyaku";
$proto213["m_columns"][] = "destination_sold_out";
$proto213["m_columns"][] = "mypage_update_prohibited";
$proto213["m_columns"][] = "gold_check_scan_id";
$proto213["m_columns"][] = "buy_campaign_data_id";
$proto213["m_columns"][] = "REG_PHOTOGRAPHER_DATE_start";
$proto213["m_columns"][] = "commission";
$proto213["m_columns"][] = "addtime_gold_check_id";
$proto213["m_columns"][] = "is_recovery";
$proto213["m_columns"][] = "sales_cost";
$proto213["m_columns"][] = "mst_business_partner_id";
$proto213["m_columns"][] = "DA_GROSSPROFIT_2";
$proto213["m_columns"][] = "DA_INTEREST_2";
$proto213["m_columns"][] = "minus_weight";
$proto213["m_columns"][] = "diameter_size";
$proto213["m_columns"][] = "metal_rate_date";
$obj = new SQLTable($proto213);

$proto212["m_table"] = $obj;
$proto212["m_sql"] = "`shouhin`";
$proto212["m_alias"] = "";
$proto212["m_srcTableName"] = "satei_of_brand";
$proto214=array();
$proto214["m_sql"] = "";
$proto214["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto214["m_column"]=$obj;
$proto214["m_contained"] = array();
$proto214["m_strCase"] = "";
$proto214["m_havingmode"] = false;
$proto214["m_inBrackets"] = false;
$proto214["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto214);

$proto212["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto212);

$proto0["m_fromlist"][]=$obj;
												$proto216=array();
$proto216["m_link"] = "SQLL_LEFTJOIN";
			$proto217=array();
$proto217["m_strName"] = "Eoc";
$proto217["m_srcTableName"] = "satei_of_brand";
$proto217["m_columns"] = array();
$proto217["m_columns"][] = "ecc_id";
$proto217["m_columns"][] = "ecc_seq";
$proto217["m_columns"][] = "name1";
$proto217["m_columns"][] = "created_t";
$proto217["m_columns"][] = "registerd_id";
$proto217["m_columns"][] = "kaitori_staff_id";
$proto217["m_columns"][] = "name2";
$proto217["m_columns"][] = "wareki";
$proto217["m_columns"][] = "b1";
$proto217["m_columns"][] = "b2";
$proto217["m_columns"][] = "b3";
$proto217["m_columns"][] = "birth_day";
$proto217["m_columns"][] = "age";
$proto217["m_columns"][] = "zip";
$proto217["m_columns"][] = "zip1";
$proto217["m_columns"][] = "zip2";
$proto217["m_columns"][] = "address1";
$proto217["m_columns"][] = "address2";
$proto217["m_columns"][] = "address3";
$proto217["m_columns"][] = "tel";
$proto217["m_columns"][] = "tel2";
$proto217["m_columns"][] = "mail1";
$proto217["m_columns"][] = "mail2";
$proto217["m_columns"][] = "address_code";
$proto217["m_columns"][] = "bank_name";
$proto217["m_columns"][] = "bank_blunch_code";
$proto217["m_columns"][] = "bank_yokin_shubetu";
$proto217["m_columns"][] = "bank_account";
$proto217["m_columns"][] = "bank_acoount_name";
$proto217["m_columns"][] = "haisou_bangou";
$proto217["m_columns"][] = "sise_houhou";
$proto217["m_columns"][] = "hentou_houhou";
$proto217["m_columns"][] = "hentou_houhou_time";
$proto217["m_columns"][] = "mousikomi_id";
$proto217["m_columns"][] = "hituyou_shorui";
$proto217["m_columns"][] = "seiyaku_fuseiritu";
$proto217["m_columns"][] = "mitumori_taku";
$proto217["m_columns"][] = "seacanse";
$proto217["m_columns"][] = "remark";
$proto217["m_columns"][] = "type";
$proto217["m_columns"][] = "sales_flag";
$proto217["m_columns"][] = "src_type";
$proto217["m_columns"][] = "liquidation_shop_code";
$proto217["m_columns"][] = "insurance_amount_print";
$proto217["m_columns"][] = "jis_code";
$proto217["m_columns"][] = "updated_at";
$proto217["m_columns"][] = "_registerd_id";
$proto217["m_columns"][] = "mail_check_type";
$proto217["m_columns"][] = "purchase_type";
$proto217["m_columns"][] = "sex";
$proto217["m_columns"][] = "m_tel";
$proto217["m_columns"][] = "fax";
$proto217["m_columns"][] = "chigin_kaitori";
$proto217["m_columns"][] = "option1";
$proto217["m_columns"][] = "option2";
$proto217["m_columns"][] = "option3";
$proto217["m_columns"][] = "option4";
$proto217["m_columns"][] = "option5";
$proto217["m_columns"][] = "option6";
$proto217["m_columns"][] = "option7";
$proto217["m_columns"][] = "option8";
$proto217["m_columns"][] = "option9";
$proto217["m_columns"][] = "option10";
$proto217["m_columns"][] = "option11";
$proto217["m_columns"][] = "option12";
$proto217["m_columns"][] = "option13";
$proto217["m_columns"][] = "rakuda_csv_flag";
$proto217["m_columns"][] = "EOC_COURIER_CHECK";
$proto217["m_columns"][] = "EOC_SIZE";
$proto217["m_columns"][] = "EOC_NUMBER";
$proto217["m_columns"][] = "EOC_REUSE";
$proto217["m_columns"][] = "EOC__DELIVERY_DATES";
$proto217["m_columns"][] = "EOC_SPECIFIED_TIME";
$proto217["m_columns"][] = "FIRST_NAME2";
$proto217["m_columns"][] = "LAST_NAME2";
$proto217["m_columns"][] = "EOC__DATE_AND_TIME_2";
$proto217["m_columns"][] = "EOC__BOX_NUMBER";
$proto217["m_columns"][] = "FIRST_NAME_KANA";
$proto217["m_columns"][] = "LAST_NAME_KANA";
$proto217["m_columns"][] = "FLAG_SPEED";
$proto217["m_columns"][] = "SEARCH_MEDIA";
$proto217["m_columns"][] = "SEARCH_SITE";
$proto217["m_columns"][] = "UN_REACHABLE";
$proto217["m_columns"][] = "FLG_MAIL_SAGAWA";
$proto217["m_columns"][] = "FLG_MAIL_OTHER";
$proto217["m_columns"][] = "ALLSEIYAKU";
$proto217["m_columns"][] = "ICHIBUSEIYAKU";
$proto217["m_columns"][] = "seiyakukin";
$proto217["m_columns"][] = "kaitorihuka";
$proto217["m_columns"][] = "awazu_date";
$proto217["m_columns"][] = "seiyaku_price";
$proto217["m_columns"][] = "eoc_search_keyword";
$proto217["m_columns"][] = "sonota";
$proto217["m_columns"][] = "size_kosuu";
$proto217["m_columns"][] = "sagawa_shuuka_flag";
$proto217["m_columns"][] = "line_check";
$proto217["m_columns"][] = "sagawa_shuukairai_denwabangou";
$proto217["m_columns"][] = "kaitori_sougak";
$proto217["m_columns"][] = "flag";
$proto217["m_columns"][] = "key_code";
$proto217["m_columns"][] = "dm_check_type";
$proto217["m_columns"][] = "kit_flag";
$proto217["m_columns"][] = "kit_done_flag";
$proto217["m_columns"][] = "bank_details_code";
$proto217["m_columns"][] = "bank_details_blunch_name";
$proto217["m_columns"][] = "bank_details_blunch_code";
$proto217["m_columns"][] = "bank_details_account_number";
$proto217["m_columns"][] = "bank_details_symbol";
$proto217["m_columns"][] = "bank_details_number";
$proto217["m_columns"][] = "bank_details_account_name";
$proto217["m_columns"][] = "bank_details_deposit_type";
$proto217["m_columns"][] = "mypage_id";
$proto217["m_columns"][] = "UN_REACHABLE_brand";
$proto217["m_columns"][] = "sagawa_haisou_hoken";
$proto217["m_columns"][] = "transfer_confirm";
$proto217["m_columns"][] = "outside_bank";
$proto217["m_columns"][] = "new_name";
$proto217["m_columns"][] = "letterpack";
$proto217["m_columns"][] = "satei_saisoku_2_days";
$proto217["m_columns"][] = "satei_saisoku_7_days";
$proto217["m_columns"][] = "accept_flag";
$proto217["m_columns"][] = "delivery_flag";
$proto217["m_columns"][] = "refining_weight";
$proto217["m_columns"][] = "line_chat_url";
$proto217["m_columns"][] = "royal_customer_status";
$proto217["m_columns"][] = "is_business_customer";
$proto217["m_columns"][] = "is_exist_haisouhosyo";
$proto217["m_columns"][] = "meigi_hankaku_kana";
$proto217["m_columns"][] = "building_types";
$proto217["m_columns"][] = "dwelling_types";
$proto217["m_columns"][] = "is_yamato_csv";
$proto217["m_columns"][] = "is_seiren_csv";
$obj = new SQLTable($proto217);

$proto216["m_table"] = $obj;
$proto216["m_sql"] = "LEFT OUTER JOIN `Eoc` ON `shouhin`.`ecc_id` = `Eoc`.`ecc_id`";
$proto216["m_alias"] = "";
$proto216["m_srcTableName"] = "satei_of_brand";
$proto218=array();
$proto218["m_sql"] = "`shouhin`.`ecc_id` = `Eoc`.`ecc_id`";
$proto218["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "ecc_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto218["m_column"]=$obj;
$proto218["m_contained"] = array();
$proto218["m_strCase"] = "= `Eoc`.`ecc_id`";
$proto218["m_havingmode"] = false;
$proto218["m_inBrackets"] = false;
$proto218["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto218);

$proto216["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto216);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto220=array();
						$obj = new SQLField(array(
	"m_strName" => "product_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "satei_of_brand"
));

$proto220["m_column"]=$obj;
$proto220["m_bAsc"] = 0;
$proto220["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto220);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="satei_of_brand";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_satei_of_brand1 = createSqlQuery_satei_of_brand1();


	
		;

																																																																																				

$tdatasatei_of_brand1[".sqlquery"] = $queryData_satei_of_brand1;

include_once(getabspath("include/satei_of_brand1_events.php"));
$tableEvents["satei_of_brand"] = new eventclass_satei_of_brand1;
$tdatasatei_of_brand1[".hasEvents"] = true;

?>