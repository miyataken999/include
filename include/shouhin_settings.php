<?php
require_once(getabspath("classes/cipherer.php"));




$tdatashouhin = array();
	$tdatashouhin[".truncateText"] = true;
	$tdatashouhin[".NumberOfChars"] = 80;
	$tdatashouhin[".ShortName"] = "shouhin";
	$tdatashouhin[".OwnerID"] = "";
	$tdatashouhin[".OriginalTable"] = "shouhin";

//	field labels
$fieldLabelsshouhin = array();
$fieldToolTipsshouhin = array();
$pageTitlesshouhin = array();
$placeHoldersshouhin = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsshouhin["Japanese"] = array();
	$fieldToolTipsshouhin["Japanese"] = array();
	$placeHoldersshouhin["Japanese"] = array();
	$pageTitlesshouhin["Japanese"] = array();
	$fieldLabelsshouhin["Japanese"]["product_id"] = "SEQ";
	$fieldToolTipsshouhin["Japanese"]["product_id"] = "";
	$placeHoldersshouhin["Japanese"]["product_id"] = "";
	$fieldLabelsshouhin["Japanese"]["category_id"] = "大カテゴリー";
	$fieldToolTipsshouhin["Japanese"]["category_id"] = "";
	$placeHoldersshouhin["Japanese"]["category_id"] = "";
	$fieldLabelsshouhin["Japanese"]["title"] = "タイトル";
	$fieldToolTipsshouhin["Japanese"]["title"] = "";
	$placeHoldersshouhin["Japanese"]["title"] = "";
	$fieldLabelsshouhin["Japanese"]["sub_category_id1"] = "中カテゴリー";
	$fieldToolTipsshouhin["Japanese"]["sub_category_id1"] = "";
	$placeHoldersshouhin["Japanese"]["sub_category_id1"] = "";
	$fieldLabelsshouhin["Japanese"]["ecc_id"] = "顧客SEQ";
	$fieldToolTipsshouhin["Japanese"]["ecc_id"] = "";
	$placeHoldersshouhin["Japanese"]["ecc_id"] = "";
	$fieldLabelsshouhin["Japanese"]["price"] = "買取額込";
	$fieldToolTipsshouhin["Japanese"]["price"] = "";
	$placeHoldersshouhin["Japanese"]["price"] = "";
	$fieldLabelsshouhin["Japanese"]["sales_price"] = "販売額";
	$fieldToolTipsshouhin["Japanese"]["sales_price"] = "";
	$placeHoldersshouhin["Japanese"]["sales_price"] = "";
	$fieldLabelsshouhin["Japanese"]["description"] = "メモ";
	$fieldToolTipsshouhin["Japanese"]["description"] = "";
	$placeHoldersshouhin["Japanese"]["description"] = "";
	$fieldLabelsshouhin["Japanese"]["status"] = "商品状態";
	$fieldToolTipsshouhin["Japanese"]["status"] = "";
	$placeHoldersshouhin["Japanese"]["status"] = "";
	$fieldLabelsshouhin["Japanese"]["product_num"] = "ブランド名";
	$fieldToolTipsshouhin["Japanese"]["product_num"] = "";
	$placeHoldersshouhin["Japanese"]["product_num"] = "";
	$fieldLabelsshouhin["Japanese"]["updated_at"] = "最終更新日";
	$fieldToolTipsshouhin["Japanese"]["updated_at"] = "";
	$placeHoldersshouhin["Japanese"]["updated_at"] = "";
	$fieldLabelsshouhin["Japanese"]["yahoo_sozai"] = "素材";
	$fieldToolTipsshouhin["Japanese"]["yahoo_sozai"] = "";
	$placeHoldersshouhin["Japanese"]["yahoo_sozai"] = "";
	$fieldLabelsshouhin["Japanese"]["yahoo_kataban"] = "型番";
	$fieldToolTipsshouhin["Japanese"]["yahoo_kataban"] = "";
	$placeHoldersshouhin["Japanese"]["yahoo_kataban"] = "";
	$fieldLabelsshouhin["Japanese"]["yahoo_condition2"] = "コンディション";
	$fieldToolTipsshouhin["Japanese"]["yahoo_condition2"] = "";
	$placeHoldersshouhin["Japanese"]["yahoo_condition2"] = "";
	$fieldLabelsshouhin["Japanese"]["yahoo_sinaban"] = "品番";
	$fieldToolTipsshouhin["Japanese"]["yahoo_sinaban"] = "";
	$placeHoldersshouhin["Japanese"]["yahoo_sinaban"] = "";
	$fieldLabelsshouhin["Japanese"]["yahoo_saisun_sha"] = "採寸者";
	$fieldToolTipsshouhin["Japanese"]["yahoo_saisun_sha"] = "";
	$placeHoldersshouhin["Japanese"]["yahoo_saisun_sha"] = "";
	$fieldLabelsshouhin["Japanese"]["yahoo_sex"] = "性別";
	$fieldToolTipsshouhin["Japanese"]["yahoo_sex"] = "";
	$placeHoldersshouhin["Japanese"]["yahoo_sex"] = "";
	$fieldLabelsshouhin["Japanese"]["box_id"] = "ボックスID";
	$fieldToolTipsshouhin["Japanese"]["box_id"] = "";
	$placeHoldersshouhin["Japanese"]["box_id"] = "";
	$fieldLabelsshouhin["Japanese"]["nyuukin_price"] = "入金額";
	$fieldToolTipsshouhin["Japanese"]["nyuukin_price"] = "";
	$placeHoldersshouhin["Japanese"]["nyuukin_price"] = "";
	$fieldLabelsshouhin["Japanese"]["updated_by"] = "最終更新者";
	$fieldToolTipsshouhin["Japanese"]["updated_by"] = "";
	$placeHoldersshouhin["Japanese"]["updated_by"] = "";
	$fieldLabelsshouhin["Japanese"]["saisun_start"] = "採寸開始";
	$fieldToolTipsshouhin["Japanese"]["saisun_start"] = "";
	$placeHoldersshouhin["Japanese"]["saisun_start"] = "";
	$fieldLabelsshouhin["Japanese"]["saisun_end"] = "採寸終了";
	$fieldToolTipsshouhin["Japanese"]["saisun_end"] = "";
	$placeHoldersshouhin["Japanese"]["saisun_end"] = "";
	$fieldLabelsshouhin["Japanese"]["kanryou_henbi"] = "完了変更日";
	$fieldToolTipsshouhin["Japanese"]["kanryou_henbi"] = "";
	$placeHoldersshouhin["Japanese"]["kanryou_henbi"] = "";
	$fieldLabelsshouhin["Japanese"]["satei_by"] = "査定人";
	$fieldToolTipsshouhin["Japanese"]["satei_by"] = "";
	$placeHoldersshouhin["Japanese"]["satei_by"] = "";
	$fieldLabelsshouhin["Japanese"]["kaitori_by"] = "登録人";
	$fieldToolTipsshouhin["Japanese"]["kaitori_by"] = "";
	$placeHoldersshouhin["Japanese"]["kaitori_by"] = "";
	$fieldLabelsshouhin["Japanese"]["comment"] = "コメント";
	$fieldToolTipsshouhin["Japanese"]["comment"] = "";
	$placeHoldersshouhin["Japanese"]["comment"] = "";
	$fieldLabelsshouhin["Japanese"]["satei_hi"] = "査定日";
	$fieldToolTipsshouhin["Japanese"]["satei_hi"] = "";
	$placeHoldersshouhin["Japanese"]["satei_hi"] = "";
	$fieldLabelsshouhin["Japanese"]["kaitory_hi"] = "登録日";
	$fieldToolTipsshouhin["Japanese"]["kaitory_hi"] = "";
	$placeHoldersshouhin["Japanese"]["kaitory_hi"] = "";
	$fieldLabelsshouhin["Japanese"]["REG_PHOTOGRAPHER"] = "撮影者";
	$fieldToolTipsshouhin["Japanese"]["REG_PHOTOGRAPHER"] = "";
	$placeHoldersshouhin["Japanese"]["REG_PHOTOGRAPHER"] = "";
	$fieldLabelsshouhin["Japanese"]["REG_AUTHOR"] = "成約人";
	$fieldToolTipsshouhin["Japanese"]["REG_AUTHOR"] = "";
	$placeHoldersshouhin["Japanese"]["REG_AUTHOR"] = "";
	$fieldLabelsshouhin["Japanese"]["REG_PACKINGS"] = "梱包者";
	$fieldToolTipsshouhin["Japanese"]["REG_PACKINGS"] = "";
	$placeHoldersshouhin["Japanese"]["REG_PACKINGS"] = "";
	$fieldLabelsshouhin["Japanese"]["REG_KAKOU_DATE"] = "画像加工日";
	$fieldToolTipsshouhin["Japanese"]["REG_KAKOU_DATE"] = "";
	$placeHoldersshouhin["Japanese"]["REG_KAKOU_DATE"] = "";
	$fieldLabelsshouhin["Japanese"]["REG_KAKOU"] = "画像加工者";
	$fieldToolTipsshouhin["Japanese"]["REG_KAKOU"] = "";
	$placeHoldersshouhin["Japanese"]["REG_KAKOU"] = "";
	$fieldLabelsshouhin["Japanese"]["REG_EXHIBITOR"] = "出品者";
	$fieldToolTipsshouhin["Japanese"]["REG_EXHIBITOR"] = "";
	$placeHoldersshouhin["Japanese"]["REG_EXHIBITOR"] = "";
	$fieldLabelsshouhin["Japanese"]["REG_PHOTOGRAPHER_DATE"] = "撮影日";
	$fieldToolTipsshouhin["Japanese"]["REG_PHOTOGRAPHER_DATE"] = "";
	$placeHoldersshouhin["Japanese"]["REG_PHOTOGRAPHER_DATE"] = "";
	$fieldLabelsshouhin["Japanese"]["DT_PACKING_DATE"] = "梱包日";
	$fieldToolTipsshouhin["Japanese"]["DT_PACKING_DATE"] = "";
	$placeHoldersshouhin["Japanese"]["DT_PACKING_DATE"] = "";
	$fieldLabelsshouhin["Japanese"]["DT_UP_DATE"] = "成約日";
	$fieldToolTipsshouhin["Japanese"]["DT_UP_DATE"] = "";
	$placeHoldersshouhin["Japanese"]["DT_UP_DATE"] = "";
	$fieldLabelsshouhin["Japanese"]["AWAZU_DATE"] = "返却日";
	$fieldToolTipsshouhin["Japanese"]["AWAZU_DATE"] = "";
	$placeHoldersshouhin["Japanese"]["AWAZU_DATE"] = "";
	$fieldLabelsshouhin["Japanese"]["AWAZU_NIN"] = "返却人";
	$fieldToolTipsshouhin["Japanese"]["AWAZU_NIN"] = "";
	$placeHoldersshouhin["Japanese"]["AWAZU_NIN"] = "";
	$fieldLabelsshouhin["Japanese"]["sabun_date"] = "販売日数";
	$fieldToolTipsshouhin["Japanese"]["sabun_date"] = "";
	$placeHoldersshouhin["Japanese"]["sabun_date"] = "";
	$fieldLabelsshouhin["Japanese"]["browseid"] = "ブラウズID";
	$fieldToolTipsshouhin["Japanese"]["browseid"] = "";
	$placeHoldersshouhin["Japanese"]["browseid"] = "";
	$fieldLabelsshouhin["Japanese"]["browsenode"] = "ブラウズノード";
	$fieldToolTipsshouhin["Japanese"]["browsenode"] = "";
	$placeHoldersshouhin["Japanese"]["browsenode"] = "";
	$fieldLabelsshouhin["Japanese"]["gold_property"] = "金性";
	$fieldToolTipsshouhin["Japanese"]["gold_property"] = "";
	$placeHoldersshouhin["Japanese"]["gold_property"] = "";
	$fieldLabelsshouhin["Japanese"]["ichiba_title"] = "帳票用品名";
	$fieldToolTipsshouhin["Japanese"]["ichiba_title"] = "";
	$placeHoldersshouhin["Japanese"]["ichiba_title"] = "";
	$fieldLabelsshouhin["Japanese"]["Gram"] = "金性グラム";
	$fieldToolTipsshouhin["Japanese"]["Gram"] = "";
	$placeHoldersshouhin["Japanese"]["Gram"] = "";
	$fieldLabelsshouhin["Japanese"]["Parent_stone"] = "親石";
	$fieldToolTipsshouhin["Japanese"]["Parent_stone"] = "";
	$placeHoldersshouhin["Japanese"]["Parent_stone"] = "";
	$fieldLabelsshouhin["Japanese"]["Aside_stone"] = "脇石";
	$fieldToolTipsshouhin["Japanese"]["Aside_stone"] = "";
	$placeHoldersshouhin["Japanese"]["Aside_stone"] = "";
	$fieldLabelsshouhin["Japanese"]["Appraiser"] = "鑑定機関";
	$fieldToolTipsshouhin["Japanese"]["Appraiser"] = "";
	$placeHoldersshouhin["Japanese"]["Appraiser"] = "";
	$fieldLabelsshouhin["Japanese"]["Remarks"] = "宝飾備考";
	$fieldToolTipsshouhin["Japanese"]["Remarks"] = "";
	$placeHoldersshouhin["Japanese"]["Remarks"] = "";
	$fieldLabelsshouhin["Japanese"]["Destination_selling"] = "売り先";
	$fieldToolTipsshouhin["Japanese"]["Destination_selling"] = "";
	$placeHoldersshouhin["Japanese"]["Destination_selling"] = "";
	$fieldLabelsshouhin["Japanese"]["Finish"] = "仕上";
	$fieldToolTipsshouhin["Japanese"]["Finish"] = "";
	$placeHoldersshouhin["Japanese"]["Finish"] = "";
	$fieldLabelsshouhin["Japanese"]["Discrimination"] = "鑑別";
	$fieldToolTipsshouhin["Japanese"]["Discrimination"] = "";
	$placeHoldersshouhin["Japanese"]["Discrimination"] = "";
	$fieldLabelsshouhin["Japanese"]["accessories"] = "付属品";
	$fieldToolTipsshouhin["Japanese"]["accessories"] = "";
	$placeHoldersshouhin["Japanese"]["accessories"] = "";
	$fieldLabelsshouhin["Japanese"]["priority"] = "優先";
	$fieldToolTipsshouhin["Japanese"]["priority"] = "";
	$placeHoldersshouhin["Japanese"]["priority"] = "";
	$fieldLabelsshouhin["Japanese"]["A_storage"] = "A保管";
	$fieldToolTipsshouhin["Japanese"]["A_storage"] = "";
	$placeHoldersshouhin["Japanese"]["A_storage"] = "";
	$fieldLabelsshouhin["Japanese"]["price_per_gram"] = "金性単価";
	$fieldToolTipsshouhin["Japanese"]["price_per_gram"] = "";
	$placeHoldersshouhin["Japanese"]["price_per_gram"] = "";
	$fieldLabelsshouhin["Japanese"]["price_per_parent_stone"] = "親石単価";
	$fieldToolTipsshouhin["Japanese"]["price_per_parent_stone"] = "";
	$placeHoldersshouhin["Japanese"]["price_per_parent_stone"] = "";
	$fieldLabelsshouhin["Japanese"]["price_per_aside_stone"] = "脇石単価";
	$fieldToolTipsshouhin["Japanese"]["price_per_aside_stone"] = "";
	$placeHoldersshouhin["Japanese"]["price_per_aside_stone"] = "";
	$fieldLabelsshouhin["Japanese"]["line"] = "ライン";
	$fieldToolTipsshouhin["Japanese"]["line"] = "";
	$placeHoldersshouhin["Japanese"]["line"] = "";
	$fieldLabelsshouhin["Japanese"]["item_name"] = "アイテム名";
	$fieldToolTipsshouhin["Japanese"]["item_name"] = "";
	$placeHoldersshouhin["Japanese"]["item_name"] = "";
	$fieldLabelsshouhin["Japanese"]["serial_number"] = "機番";
	$fieldToolTipsshouhin["Japanese"]["serial_number"] = "";
	$placeHoldersshouhin["Japanese"]["serial_number"] = "";
	$fieldLabelsshouhin["Japanese"]["Exhibition_Date"] = "出品日";
	$fieldToolTipsshouhin["Japanese"]["Exhibition_Date"] = "";
	$placeHoldersshouhin["Japanese"]["Exhibition_Date"] = "";
	$fieldLabelsshouhin["Japanese"]["stamp"] = "刻印";
	$fieldToolTipsshouhin["Japanese"]["stamp"] = "";
	$placeHoldersshouhin["Japanese"]["stamp"] = "";
	$fieldLabelsshouhin["Japanese"]["motif"] = "モチーフ";
	$fieldToolTipsshouhin["Japanese"]["motif"] = "";
	$placeHoldersshouhin["Japanese"]["motif"] = "";
	$fieldLabelsshouhin["Japanese"]["Setting"] = "セッティング";
	$fieldToolTipsshouhin["Japanese"]["Setting"] = "";
	$placeHoldersshouhin["Japanese"]["Setting"] = "";
	$fieldLabelsshouhin["Japanese"]["processing"] = "処理";
	$fieldToolTipsshouhin["Japanese"]["processing"] = "";
	$placeHoldersshouhin["Japanese"]["processing"] = "";
	$fieldLabelsshouhin["Japanese"]["Sleeve_Length"] = "袖丈";
	$fieldToolTipsshouhin["Japanese"]["Sleeve_Length"] = "";
	$placeHoldersshouhin["Japanese"]["Sleeve_Length"] = "";
	$fieldLabelsshouhin["Japanese"]["length"] = "丈";
	$fieldToolTipsshouhin["Japanese"]["length"] = "";
	$placeHoldersshouhin["Japanese"]["length"] = "";
	$fieldLabelsshouhin["Japanese"]["Ring_size"] = "リングサイズ";
	$fieldToolTipsshouhin["Japanese"]["Ring_size"] = "";
	$placeHoldersshouhin["Japanese"]["Ring_size"] = "";
	$fieldLabelsshouhin["Japanese"]["price_for_site"] = "サイト用入金額";
	$fieldToolTipsshouhin["Japanese"]["price_for_site"] = "";
	$placeHoldersshouhin["Japanese"]["price_for_site"] = "";
	$fieldLabelsshouhin["Japanese"]["ecc_seq"] = "顧客番号";
	$fieldToolTipsshouhin["Japanese"]["ecc_seq"] = "";
	$placeHoldersshouhin["Japanese"]["ecc_seq"] = "";
	$fieldLabelsshouhin["Japanese"]["y_preview"] = "Y Preview";
	$fieldToolTipsshouhin["Japanese"]["y_preview"] = "";
	$placeHoldersshouhin["Japanese"]["y_preview"] = "";
	$fieldLabelsshouhin["Japanese"]["goods_title"] = "Yアイテム名";
	$fieldToolTipsshouhin["Japanese"]["goods_title"] = "";
	$placeHoldersshouhin["Japanese"]["goods_title"] = "";
	$fieldLabelsshouhin["Japanese"]["registerd_id"] = "顧客登録者";
	$fieldToolTipsshouhin["Japanese"]["registerd_id"] = "";
	$placeHoldersshouhin["Japanese"]["registerd_id"] = "";
	$fieldLabelsshouhin["Japanese"]["yahoo_sankou_uwadai"] = "参考上代";
	$fieldToolTipsshouhin["Japanese"]["yahoo_sankou_uwadai"] = "";
	$placeHoldersshouhin["Japanese"]["yahoo_sankou_uwadai"] = "";
	$fieldLabelsshouhin["Japanese"]["FLAG_NO_ARRIVAL"] = "未到着";
	$fieldToolTipsshouhin["Japanese"]["FLAG_NO_ARRIVAL"] = "";
	$placeHoldersshouhin["Japanese"]["FLAG_NO_ARRIVAL"] = "";
	$fieldLabelsshouhin["Japanese"]["sagaku_price"] = "買取-販売";
	$fieldToolTipsshouhin["Japanese"]["sagaku_price"] = "";
	$placeHoldersshouhin["Japanese"]["sagaku_price"] = "";
	$fieldLabelsshouhin["Japanese"]["link_id"] = "出品ZIPリンク";
	$fieldToolTipsshouhin["Japanese"]["link_id"] = "";
	$placeHoldersshouhin["Japanese"]["link_id"] = "";
	$fieldLabelsshouhin["Japanese"]["title2"] = "タイトル";
	$fieldToolTipsshouhin["Japanese"]["title2"] = "";
	$placeHoldersshouhin["Japanese"]["title2"] = "";
	$fieldLabelsshouhin["Japanese"]["title3"] = "タイトル";
	$fieldToolTipsshouhin["Japanese"]["title3"] = "";
	$placeHoldersshouhin["Japanese"]["title3"] = "";
	$fieldLabelsshouhin["Japanese"]["logo"] = "ロゴ";
	$fieldToolTipsshouhin["Japanese"]["logo"] = "";
	$placeHoldersshouhin["Japanese"]["logo"] = "";
	$fieldLabelsshouhin["Japanese"]["parts"] = "金具（パーツ）";
	$fieldToolTipsshouhin["Japanese"]["parts"] = "";
	$placeHoldersshouhin["Japanese"]["parts"] = "";
	$fieldLabelsshouhin["Japanese"]["country_of_origin"] = "原産国";
	$fieldToolTipsshouhin["Japanese"]["country_of_origin"] = "";
	$placeHoldersshouhin["Japanese"]["country_of_origin"] = "";
	$fieldLabelsshouhin["Japanese"]["zipper"] = "金具（ファスナー）";
	$fieldToolTipsshouhin["Japanese"]["zipper"] = "";
	$placeHoldersshouhin["Japanese"]["zipper"] = "";
	$fieldLabelsshouhin["Japanese"]["guarantee"] = "ギャランティ";
	$fieldToolTipsshouhin["Japanese"]["guarantee"] = "";
	$placeHoldersshouhin["Japanese"]["guarantee"] = "";
	$fieldLabelsshouhin["Japanese"]["errors"] = "真贋チェックエラー";
	$fieldToolTipsshouhin["Japanese"]["errors"] = "";
	$placeHoldersshouhin["Japanese"]["errors"] = "";
	$fieldLabelsshouhin["Japanese"]["designer"] = "デザイナー";
	$fieldToolTipsshouhin["Japanese"]["designer"] = "";
	$placeHoldersshouhin["Japanese"]["designer"] = "";
	$fieldLabelsshouhin["Japanese"]["hahakai"] = "母貝";
	$fieldToolTipsshouhin["Japanese"]["hahakai"] = "";
	$placeHoldersshouhin["Japanese"]["hahakai"] = "";
	$fieldLabelsshouhin["Japanese"]["effect"] = "効果";
	$fieldToolTipsshouhin["Japanese"]["effect"] = "";
	$placeHoldersshouhin["Japanese"]["effect"] = "";
	$fieldLabelsshouhin["Japanese"]["shape"] = "シェイプ";
	$fieldToolTipsshouhin["Japanese"]["shape"] = "";
	$placeHoldersshouhin["Japanese"]["shape"] = "";
	$fieldLabelsshouhin["Japanese"]["cutting_style"] = "カッティングスタイル";
	$fieldToolTipsshouhin["Japanese"]["cutting_style"] = "";
	$placeHoldersshouhin["Japanese"]["cutting_style"] = "";
	$fieldLabelsshouhin["Japanese"]["chain_type"] = "チェーン種類";
	$fieldToolTipsshouhin["Japanese"]["chain_type"] = "";
	$placeHoldersshouhin["Japanese"]["chain_type"] = "";
	$fieldLabelsshouhin["Japanese"]["number_of_stones"] = "石の個数";
	$fieldToolTipsshouhin["Japanese"]["number_of_stones"] = "";
	$placeHoldersshouhin["Japanese"]["number_of_stones"] = "";
	$fieldLabelsshouhin["Japanese"]["amount"] = "内容量";
	$fieldToolTipsshouhin["Japanese"]["amount"] = "";
	$placeHoldersshouhin["Japanese"]["amount"] = "";
	$fieldLabelsshouhin["Japanese"]["producing_area"] = "産地";
	$fieldToolTipsshouhin["Japanese"]["producing_area"] = "";
	$placeHoldersshouhin["Japanese"]["producing_area"] = "";
	$fieldLabelsshouhin["Japanese"]["satei_error"] = "査定抜けエラー";
	$fieldToolTipsshouhin["Japanese"]["satei_error"] = "";
	$placeHoldersshouhin["Japanese"]["satei_error"] = "";
	$fieldLabelsshouhin["Japanese"]["serial_number_for_storage"] = "機番（保管用）";
	$fieldToolTipsshouhin["Japanese"]["serial_number_for_storage"] = "";
	$placeHoldersshouhin["Japanese"]["serial_number_for_storage"] = "";
	$fieldLabelsshouhin["Japanese"]["price_for_site_flag"] = "サイト用入金額【買取額】";
	$fieldToolTipsshouhin["Japanese"]["price_for_site_flag"] = "";
	$placeHoldersshouhin["Japanese"]["price_for_site_flag"] = "";
	$fieldLabelsshouhin["Japanese"]["Eoc_takuhai_id"] = "宅配取引Id";
	$fieldToolTipsshouhin["Japanese"]["Eoc_takuhai_id"] = "";
	$placeHoldersshouhin["Japanese"]["Eoc_takuhai_id"] = "";
	$fieldLabelsshouhin["Japanese"]["Eoc_unfinished_id"] = "店頭取引Id";
	$fieldToolTipsshouhin["Japanese"]["Eoc_unfinished_id"] = "";
	$placeHoldersshouhin["Japanese"]["Eoc_unfinished_id"] = "";
	$fieldLabelsshouhin["Japanese"]["Eoc_chigins_unfinished_id"] = "店頭詳細Id";
	$fieldToolTipsshouhin["Japanese"]["Eoc_chigins_unfinished_id"] = "";
	$placeHoldersshouhin["Japanese"]["Eoc_chigins_unfinished_id"] = "";
	$fieldLabelsshouhin["Japanese"]["product_style"] = "形状名";
	$fieldToolTipsshouhin["Japanese"]["product_style"] = "";
	$placeHoldersshouhin["Japanese"]["product_style"] = "";
	$fieldLabelsshouhin["Japanese"]["shape_supplement"] = "形状補足";
	$fieldToolTipsshouhin["Japanese"]["shape_supplement"] = "";
	$placeHoldersshouhin["Japanese"]["shape_supplement"] = "";
	$fieldLabelsshouhin["Japanese"]["unit"] = "単位";
	$fieldToolTipsshouhin["Japanese"]["unit"] = "";
	$placeHoldersshouhin["Japanese"]["unit"] = "";
	$fieldLabelsshouhin["Japanese"]["chohyo_id"] = "帳票Id";
	$fieldToolTipsshouhin["Japanese"]["chohyo_id"] = "";
	$placeHoldersshouhin["Japanese"]["chohyo_id"] = "";
	$fieldLabelsshouhin["Japanese"]["meisai_number"] = "明細No.";
	$fieldToolTipsshouhin["Japanese"]["meisai_number"] = "";
	$placeHoldersshouhin["Japanese"]["meisai_number"] = "";
	$fieldLabelsshouhin["Japanese"]["days_keep_price"] = "値下げ禁止日数";
	$fieldToolTipsshouhin["Japanese"]["days_keep_price"] = "";
	$placeHoldersshouhin["Japanese"]["days_keep_price"] = "";
	$fieldLabelsshouhin["Japanese"]["label_output_flag"] = "ラベル出力";
	$fieldToolTipsshouhin["Japanese"]["label_output_flag"] = "";
	$placeHoldersshouhin["Japanese"]["label_output_flag"] = "";
	$fieldLabelsshouhin["Japanese"]["zaiko"] = "現在庫";
	$fieldToolTipsshouhin["Japanese"]["zaiko"] = "";
	$placeHoldersshouhin["Japanese"]["zaiko"] = "";
	$fieldLabelsshouhin["Japanese"]["itaku_flag"] = "委託チェック";
	$fieldToolTipsshouhin["Japanese"]["itaku_flag"] = "";
	$placeHoldersshouhin["Japanese"]["itaku_flag"] = "";
	$fieldLabelsshouhin["Japanese"]["category_class"] = "部門";
	$fieldToolTipsshouhin["Japanese"]["category_class"] = "";
	$placeHoldersshouhin["Japanese"]["category_class"] = "";
	$fieldLabelsshouhin["Japanese"]["tentou_label_output_flag"] = "ST不変ラベル出力";
	$fieldToolTipsshouhin["Japanese"]["tentou_label_output_flag"] = "";
	$placeHoldersshouhin["Japanese"]["tentou_label_output_flag"] = "";
	$fieldLabelsshouhin["Japanese"]["gold_check_id"] = "地金チェックId";
	$fieldToolTipsshouhin["Japanese"]["gold_check_id"] = "";
	$placeHoldersshouhin["Japanese"]["gold_check_id"] = "";
	$fieldLabelsshouhin["Japanese"]["cost"] = "仕上げコスト";
	$fieldToolTipsshouhin["Japanese"]["cost"] = "";
	$placeHoldersshouhin["Japanese"]["cost"] = "";
	$fieldLabelsshouhin["Japanese"]["other_cost"] = "その他コスト";
	$fieldToolTipsshouhin["Japanese"]["other_cost"] = "";
	$placeHoldersshouhin["Japanese"]["other_cost"] = "";
	$fieldLabelsshouhin["Japanese"]["identification_cost"] = "鑑別コスト";
	$fieldToolTipsshouhin["Japanese"]["identification_cost"] = "";
	$placeHoldersshouhin["Japanese"]["identification_cost"] = "";
	$fieldLabelsshouhin["Japanese"]["price_without_tax"] = "買取額抜";
	$fieldToolTipsshouhin["Japanese"]["price_without_tax"] = "";
	$placeHoldersshouhin["Japanese"]["price_without_tax"] = "";
	$fieldLabelsshouhin["Japanese"]["kinsa_flag"] = "金査フラグ";
	$fieldToolTipsshouhin["Japanese"]["kinsa_flag"] = "";
	$placeHoldersshouhin["Japanese"]["kinsa_flag"] = "";
	$fieldLabelsshouhin["Japanese"]["slip_type"] = "地金伝票種別";
	$fieldToolTipsshouhin["Japanese"]["slip_type"] = "";
	$placeHoldersshouhin["Japanese"]["slip_type"] = "";
	$fieldLabelsshouhin["Japanese"]["Eoc_trader_id_for_buy"] = "業者仕入ID";
	$fieldToolTipsshouhin["Japanese"]["Eoc_trader_id_for_buy"] = "";
	$placeHoldersshouhin["Japanese"]["Eoc_trader_id_for_buy"] = "";
	$fieldLabelsshouhin["Japanese"]["Eoc_trader_id_for_sell"] = "業者販売ID";
	$fieldToolTipsshouhin["Japanese"]["Eoc_trader_id_for_sell"] = "";
	$placeHoldersshouhin["Japanese"]["Eoc_trader_id_for_sell"] = "";
	$fieldLabelsshouhin["Japanese"]["slip_number_for_buy"] = "業者仕入伝票番号";
	$fieldToolTipsshouhin["Japanese"]["slip_number_for_buy"] = "";
	$placeHoldersshouhin["Japanese"]["slip_number_for_buy"] = "";
	$fieldLabelsshouhin["Japanese"]["market_for_buy"] = "業者仕入先";
	$fieldToolTipsshouhin["Japanese"]["market_for_buy"] = "";
	$placeHoldersshouhin["Japanese"]["market_for_buy"] = "";
	$fieldLabelsshouhin["Japanese"]["date_for_buy"] = "業者仕入日";
	$fieldToolTipsshouhin["Japanese"]["date_for_buy"] = "";
	$placeHoldersshouhin["Japanese"]["date_for_buy"] = "";
	$fieldLabelsshouhin["Japanese"]["slip_number_for_sell"] = "業者販売伝票番号";
	$fieldToolTipsshouhin["Japanese"]["slip_number_for_sell"] = "";
	$placeHoldersshouhin["Japanese"]["slip_number_for_sell"] = "";
	$fieldLabelsshouhin["Japanese"]["market_for_sell"] = "業者販売先";
	$fieldToolTipsshouhin["Japanese"]["market_for_sell"] = "";
	$placeHoldersshouhin["Japanese"]["market_for_sell"] = "";
	$fieldLabelsshouhin["Japanese"]["date_for_sell"] = "業者販売日";
	$fieldToolTipsshouhin["Japanese"]["date_for_sell"] = "";
	$placeHoldersshouhin["Japanese"]["date_for_sell"] = "";
	$fieldLabelsshouhin["Japanese"]["trading_sort_id"] = "大量査定ソート";
	$fieldToolTipsshouhin["Japanese"]["trading_sort_id"] = "";
	$placeHoldersshouhin["Japanese"]["trading_sort_id"] = "";
	$fieldLabelsshouhin["Japanese"]["many_product_group_id"] = "[大量査定]風袋ID";
	$fieldToolTipsshouhin["Japanese"]["many_product_group_id"] = "";
	$placeHoldersshouhin["Japanese"]["many_product_group_id"] = "";
	$fieldLabelsshouhin["Japanese"]["destination_sold_out"] = "販売先";
	$fieldToolTipsshouhin["Japanese"]["destination_sold_out"] = "";
	$placeHoldersshouhin["Japanese"]["destination_sold_out"] = "";
	$fieldLabelsshouhin["Japanese"]["sales_date"] = "販売日";
	$fieldToolTipsshouhin["Japanese"]["sales_date"] = "";
	$placeHoldersshouhin["Japanese"]["sales_date"] = "";
	$fieldLabelsshouhin["Japanese"]["mst_business_partner_id"] = "販売先";
	$fieldToolTipsshouhin["Japanese"]["mst_business_partner_id"] = "";
	$placeHoldersshouhin["Japanese"]["mst_business_partner_id"] = "";
	$fieldLabelsshouhin["Japanese"]["purchase_category"] = "買取種別";
	$fieldToolTipsshouhin["Japanese"]["purchase_category"] = "";
	$placeHoldersshouhin["Japanese"]["purchase_category"] = "";
	$fieldLabelsshouhin["Japanese"]["commission"] = "手数料";
	$fieldToolTipsshouhin["Japanese"]["commission"] = "";
	$placeHoldersshouhin["Japanese"]["commission"] = "";
	$fieldLabelsshouhin["Japanese"]["is_recovery"] = "リカバリー";
	$fieldToolTipsshouhin["Japanese"]["is_recovery"] = "";
	$placeHoldersshouhin["Japanese"]["is_recovery"] = "";
	$fieldLabelsshouhin["Japanese"]["saisun_time"] = "採寸時間";
	$fieldToolTipsshouhin["Japanese"]["saisun_time"] = "";
	$placeHoldersshouhin["Japanese"]["saisun_time"] = "";
	$fieldLabelsshouhin["Japanese"]["sales_cost"] = "販売口銭";
	$fieldToolTipsshouhin["Japanese"]["sales_cost"] = "";
	$placeHoldersshouhin["Japanese"]["sales_cost"] = "";
	if (count($fieldToolTipsshouhin["Japanese"]))
		$tdatashouhin[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsshouhin[""] = array();
	$fieldToolTipsshouhin[""] = array();
	$placeHoldersshouhin[""] = array();
	$pageTitlesshouhin[""] = array();
	$fieldLabelsshouhin[""]["logo"] = "Logo";
	$fieldToolTipsshouhin[""]["logo"] = "";
	$placeHoldersshouhin[""]["logo"] = "";
	$fieldLabelsshouhin[""]["parts"] = "Parts";
	$fieldToolTipsshouhin[""]["parts"] = "";
	$placeHoldersshouhin[""]["parts"] = "";
	$fieldLabelsshouhin[""]["country_of_origin"] = "Country Of Origin";
	$fieldToolTipsshouhin[""]["country_of_origin"] = "";
	$placeHoldersshouhin[""]["country_of_origin"] = "";
	$fieldLabelsshouhin[""]["zipper"] = "Zipper";
	$fieldToolTipsshouhin[""]["zipper"] = "";
	$placeHoldersshouhin[""]["zipper"] = "";
	$fieldLabelsshouhin[""]["guarantee"] = "Guarantee";
	$fieldToolTipsshouhin[""]["guarantee"] = "";
	$placeHoldersshouhin[""]["guarantee"] = "";
	$fieldLabelsshouhin[""]["errors"] = "Errors";
	$fieldToolTipsshouhin[""]["errors"] = "";
	$placeHoldersshouhin[""]["errors"] = "";
	$fieldLabelsshouhin[""]["designer"] = "Designer";
	$fieldToolTipsshouhin[""]["designer"] = "";
	$placeHoldersshouhin[""]["designer"] = "";
	$fieldLabelsshouhin[""]["hahakai"] = "Hahakai";
	$fieldToolTipsshouhin[""]["hahakai"] = "";
	$placeHoldersshouhin[""]["hahakai"] = "";
	$fieldLabelsshouhin[""]["effect"] = "Effect";
	$fieldToolTipsshouhin[""]["effect"] = "";
	$placeHoldersshouhin[""]["effect"] = "";
	$fieldLabelsshouhin[""]["shape"] = "Shape";
	$fieldToolTipsshouhin[""]["shape"] = "";
	$placeHoldersshouhin[""]["shape"] = "";
	$fieldLabelsshouhin[""]["cutting_style"] = "Cutting Style";
	$fieldToolTipsshouhin[""]["cutting_style"] = "";
	$placeHoldersshouhin[""]["cutting_style"] = "";
	$fieldLabelsshouhin[""]["chain_type"] = "Chain Type";
	$fieldToolTipsshouhin[""]["chain_type"] = "";
	$placeHoldersshouhin[""]["chain_type"] = "";
	$fieldLabelsshouhin[""]["number_of_stones"] = "Number Of Stones";
	$fieldToolTipsshouhin[""]["number_of_stones"] = "";
	$placeHoldersshouhin[""]["number_of_stones"] = "";
	$fieldLabelsshouhin[""]["amount"] = "Amount";
	$fieldToolTipsshouhin[""]["amount"] = "";
	$placeHoldersshouhin[""]["amount"] = "";
	$fieldLabelsshouhin[""]["producing_area"] = "Producing Area";
	$fieldToolTipsshouhin[""]["producing_area"] = "";
	$placeHoldersshouhin[""]["producing_area"] = "";
	$fieldLabelsshouhin[""]["satei_error"] = "Satei Error";
	$fieldToolTipsshouhin[""]["satei_error"] = "";
	$placeHoldersshouhin[""]["satei_error"] = "";
	$fieldLabelsshouhin[""]["serial_number_for_storage"] = "Serial Number For Storage";
	$fieldToolTipsshouhin[""]["serial_number_for_storage"] = "";
	$placeHoldersshouhin[""]["serial_number_for_storage"] = "";
	$fieldLabelsshouhin[""]["price_for_site_flag"] = "Price For Site Flag";
	$fieldToolTipsshouhin[""]["price_for_site_flag"] = "";
	$placeHoldersshouhin[""]["price_for_site_flag"] = "";
	$fieldLabelsshouhin[""]["Eoc_takuhai_id"] = "Eoc Takuhai Id";
	$fieldToolTipsshouhin[""]["Eoc_takuhai_id"] = "";
	$placeHoldersshouhin[""]["Eoc_takuhai_id"] = "";
	$fieldLabelsshouhin[""]["Eoc_unfinished_id"] = "Eoc Unfinished Id";
	$fieldToolTipsshouhin[""]["Eoc_unfinished_id"] = "";
	$placeHoldersshouhin[""]["Eoc_unfinished_id"] = "";
	$fieldLabelsshouhin[""]["Eoc_chigins_unfinished_id"] = "Eoc Chigins Unfinished Id";
	$fieldToolTipsshouhin[""]["Eoc_chigins_unfinished_id"] = "";
	$placeHoldersshouhin[""]["Eoc_chigins_unfinished_id"] = "";
	$fieldLabelsshouhin[""]["product_style"] = "Product Style";
	$fieldToolTipsshouhin[""]["product_style"] = "";
	$placeHoldersshouhin[""]["product_style"] = "";
	$fieldLabelsshouhin[""]["shape_supplement"] = "Shape Supplement";
	$fieldToolTipsshouhin[""]["shape_supplement"] = "";
	$placeHoldersshouhin[""]["shape_supplement"] = "";
	$fieldLabelsshouhin[""]["unit"] = "Unit";
	$fieldToolTipsshouhin[""]["unit"] = "";
	$placeHoldersshouhin[""]["unit"] = "";
	$fieldLabelsshouhin[""]["chohyo_id"] = "Chohyo Id";
	$fieldToolTipsshouhin[""]["chohyo_id"] = "";
	$placeHoldersshouhin[""]["chohyo_id"] = "";
	$fieldLabelsshouhin[""]["meisai_number"] = "Meisai Number";
	$fieldToolTipsshouhin[""]["meisai_number"] = "";
	$placeHoldersshouhin[""]["meisai_number"] = "";
	$fieldLabelsshouhin[""]["days_keep_price"] = "Days Keep Price";
	$fieldToolTipsshouhin[""]["days_keep_price"] = "";
	$placeHoldersshouhin[""]["days_keep_price"] = "";
	$fieldLabelsshouhin[""]["label_output_flag"] = "Label Output Flag";
	$fieldToolTipsshouhin[""]["label_output_flag"] = "";
	$placeHoldersshouhin[""]["label_output_flag"] = "";
	$fieldLabelsshouhin[""]["zaiko"] = "Zaiko";
	$fieldToolTipsshouhin[""]["zaiko"] = "";
	$placeHoldersshouhin[""]["zaiko"] = "";
	$fieldLabelsshouhin[""]["itaku_flag"] = "Itaku Flag";
	$fieldToolTipsshouhin[""]["itaku_flag"] = "";
	$placeHoldersshouhin[""]["itaku_flag"] = "";
	$fieldLabelsshouhin[""]["category_class"] = "Category Class";
	$fieldToolTipsshouhin[""]["category_class"] = "";
	$placeHoldersshouhin[""]["category_class"] = "";
	$fieldLabelsshouhin[""]["tentou_label_output_flag"] = "Tentou Label Output Flag";
	$fieldToolTipsshouhin[""]["tentou_label_output_flag"] = "";
	$placeHoldersshouhin[""]["tentou_label_output_flag"] = "";
	$fieldLabelsshouhin[""]["gold_check_id"] = "Gold Check Id";
	$fieldToolTipsshouhin[""]["gold_check_id"] = "";
	$placeHoldersshouhin[""]["gold_check_id"] = "";
	$fieldLabelsshouhin[""]["cost"] = "Cost";
	$fieldToolTipsshouhin[""]["cost"] = "";
	$placeHoldersshouhin[""]["cost"] = "";
	$fieldLabelsshouhin[""]["other_cost"] = "Other Cost";
	$fieldToolTipsshouhin[""]["other_cost"] = "";
	$placeHoldersshouhin[""]["other_cost"] = "";
	$fieldLabelsshouhin[""]["identification_cost"] = "Identification Cost";
	$fieldToolTipsshouhin[""]["identification_cost"] = "";
	$placeHoldersshouhin[""]["identification_cost"] = "";
	$fieldLabelsshouhin[""]["price_without_tax"] = "Price Without Tax";
	$fieldToolTipsshouhin[""]["price_without_tax"] = "";
	$placeHoldersshouhin[""]["price_without_tax"] = "";
	$fieldLabelsshouhin[""]["kinsa_flag"] = "Kinsa Flag";
	$fieldToolTipsshouhin[""]["kinsa_flag"] = "";
	$placeHoldersshouhin[""]["kinsa_flag"] = "";
	$fieldLabelsshouhin[""]["slip_type"] = "Slip Type";
	$fieldToolTipsshouhin[""]["slip_type"] = "";
	$placeHoldersshouhin[""]["slip_type"] = "";
	$fieldLabelsshouhin[""]["Eoc_trader_id_for_buy"] = "Eoc Trader Id For Buy";
	$fieldToolTipsshouhin[""]["Eoc_trader_id_for_buy"] = "";
	$placeHoldersshouhin[""]["Eoc_trader_id_for_buy"] = "";
	$fieldLabelsshouhin[""]["Eoc_trader_id_for_sell"] = "Eoc Trader Id For Sell";
	$fieldToolTipsshouhin[""]["Eoc_trader_id_for_sell"] = "";
	$placeHoldersshouhin[""]["Eoc_trader_id_for_sell"] = "";
	$fieldLabelsshouhin[""]["slip_number_for_buy"] = "Slip Number For Buy";
	$fieldToolTipsshouhin[""]["slip_number_for_buy"] = "";
	$placeHoldersshouhin[""]["slip_number_for_buy"] = "";
	$fieldLabelsshouhin[""]["market_for_buy"] = "Market For Buy";
	$fieldToolTipsshouhin[""]["market_for_buy"] = "";
	$placeHoldersshouhin[""]["market_for_buy"] = "";
	$fieldLabelsshouhin[""]["date_for_buy"] = "Date For Buy";
	$fieldToolTipsshouhin[""]["date_for_buy"] = "";
	$placeHoldersshouhin[""]["date_for_buy"] = "";
	$fieldLabelsshouhin[""]["slip_number_for_sell"] = "Slip Number For Sell";
	$fieldToolTipsshouhin[""]["slip_number_for_sell"] = "";
	$placeHoldersshouhin[""]["slip_number_for_sell"] = "";
	$fieldLabelsshouhin[""]["market_for_sell"] = "Market For Sell";
	$fieldToolTipsshouhin[""]["market_for_sell"] = "";
	$placeHoldersshouhin[""]["market_for_sell"] = "";
	$fieldLabelsshouhin[""]["date_for_sell"] = "Date For Sell";
	$fieldToolTipsshouhin[""]["date_for_sell"] = "";
	$placeHoldersshouhin[""]["date_for_sell"] = "";
	$fieldLabelsshouhin[""]["trading_sort_id"] = "Trading Sort Id";
	$fieldToolTipsshouhin[""]["trading_sort_id"] = "";
	$placeHoldersshouhin[""]["trading_sort_id"] = "";
	$fieldLabelsshouhin[""]["many_product_group_id"] = "Many Product Group Id";
	$fieldToolTipsshouhin[""]["many_product_group_id"] = "";
	$placeHoldersshouhin[""]["many_product_group_id"] = "";
	$fieldLabelsshouhin[""]["destination_sold_out"] = "Destination Sold Out";
	$fieldToolTipsshouhin[""]["destination_sold_out"] = "";
	$placeHoldersshouhin[""]["destination_sold_out"] = "";
	$fieldLabelsshouhin[""]["sales_date"] = "Sales Date";
	$fieldToolTipsshouhin[""]["sales_date"] = "";
	$placeHoldersshouhin[""]["sales_date"] = "";
	$fieldLabelsshouhin[""]["mst_business_partner_id"] = "Mst Business Partner Id";
	$fieldToolTipsshouhin[""]["mst_business_partner_id"] = "";
	$placeHoldersshouhin[""]["mst_business_partner_id"] = "";
	$fieldLabelsshouhin[""]["purchase_category"] = "Purchase Category";
	$fieldToolTipsshouhin[""]["purchase_category"] = "";
	$placeHoldersshouhin[""]["purchase_category"] = "";
	$fieldLabelsshouhin[""]["commission"] = "Commission";
	$fieldToolTipsshouhin[""]["commission"] = "";
	$placeHoldersshouhin[""]["commission"] = "";
	$fieldLabelsshouhin[""]["is_recovery"] = "Is Recovery";
	$fieldToolTipsshouhin[""]["is_recovery"] = "";
	$placeHoldersshouhin[""]["is_recovery"] = "";
	$fieldLabelsshouhin[""]["saisun_time"] = "Saisun Time";
	$fieldToolTipsshouhin[""]["saisun_time"] = "";
	$placeHoldersshouhin[""]["saisun_time"] = "";
	$fieldLabelsshouhin[""]["sales_cost"] = "Sales Cost";
	$fieldToolTipsshouhin[""]["sales_cost"] = "";
	$placeHoldersshouhin[""]["sales_cost"] = "";
	if (count($fieldToolTipsshouhin[""]))
		$tdatashouhin[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsshouhin["English"] = array();
	$fieldToolTipsshouhin["English"] = array();
	$placeHoldersshouhin["English"] = array();
	$pageTitlesshouhin["English"] = array();
	$fieldLabelsshouhin["English"]["serial_number_for_storage"] = "Serial Number For Storage";
	$fieldToolTipsshouhin["English"]["serial_number_for_storage"] = "";
	$placeHoldersshouhin["English"]["serial_number_for_storage"] = "";
	$fieldLabelsshouhin["English"]["price_for_site_flag"] = "Price For Site Flag";
	$fieldToolTipsshouhin["English"]["price_for_site_flag"] = "";
	$placeHoldersshouhin["English"]["price_for_site_flag"] = "";
	$fieldLabelsshouhin["English"]["Eoc_takuhai_id"] = "Eoc Takuhai Id";
	$fieldToolTipsshouhin["English"]["Eoc_takuhai_id"] = "";
	$placeHoldersshouhin["English"]["Eoc_takuhai_id"] = "";
	$fieldLabelsshouhin["English"]["Eoc_unfinished_id"] = "Eoc Unfinished Id";
	$fieldToolTipsshouhin["English"]["Eoc_unfinished_id"] = "";
	$placeHoldersshouhin["English"]["Eoc_unfinished_id"] = "";
	$fieldLabelsshouhin["English"]["Eoc_chigins_unfinished_id"] = "Eoc Chigins Unfinished Id";
	$fieldToolTipsshouhin["English"]["Eoc_chigins_unfinished_id"] = "";
	$placeHoldersshouhin["English"]["Eoc_chigins_unfinished_id"] = "";
	$fieldLabelsshouhin["English"]["product_style"] = "Product Style";
	$fieldToolTipsshouhin["English"]["product_style"] = "";
	$placeHoldersshouhin["English"]["product_style"] = "";
	$fieldLabelsshouhin["English"]["shape_supplement"] = "Shape Supplement";
	$fieldToolTipsshouhin["English"]["shape_supplement"] = "";
	$placeHoldersshouhin["English"]["shape_supplement"] = "";
	$fieldLabelsshouhin["English"]["unit"] = "Unit";
	$fieldToolTipsshouhin["English"]["unit"] = "";
	$placeHoldersshouhin["English"]["unit"] = "";
	$fieldLabelsshouhin["English"]["chohyo_id"] = "Chohyo Id";
	$fieldToolTipsshouhin["English"]["chohyo_id"] = "";
	$placeHoldersshouhin["English"]["chohyo_id"] = "";
	$fieldLabelsshouhin["English"]["meisai_number"] = "Meisai Number";
	$fieldToolTipsshouhin["English"]["meisai_number"] = "";
	$placeHoldersshouhin["English"]["meisai_number"] = "";
	$fieldLabelsshouhin["English"]["days_keep_price"] = "Days Keep Price";
	$fieldToolTipsshouhin["English"]["days_keep_price"] = "";
	$placeHoldersshouhin["English"]["days_keep_price"] = "";
	$fieldLabelsshouhin["English"]["label_output_flag"] = "Label Output Flag";
	$fieldToolTipsshouhin["English"]["label_output_flag"] = "";
	$placeHoldersshouhin["English"]["label_output_flag"] = "";
	$fieldLabelsshouhin["English"]["zaiko"] = "Zaiko";
	$fieldToolTipsshouhin["English"]["zaiko"] = "";
	$placeHoldersshouhin["English"]["zaiko"] = "";
	$fieldLabelsshouhin["English"]["itaku_flag"] = "Itaku Flag";
	$fieldToolTipsshouhin["English"]["itaku_flag"] = "";
	$placeHoldersshouhin["English"]["itaku_flag"] = "";
	$fieldLabelsshouhin["English"]["category_class"] = "Category Class";
	$fieldToolTipsshouhin["English"]["category_class"] = "";
	$placeHoldersshouhin["English"]["category_class"] = "";
	$fieldLabelsshouhin["English"]["tentou_label_output_flag"] = "Tentou Label Output Flag";
	$fieldToolTipsshouhin["English"]["tentou_label_output_flag"] = "";
	$placeHoldersshouhin["English"]["tentou_label_output_flag"] = "";
	$fieldLabelsshouhin["English"]["gold_check_id"] = "Gold Check Id";
	$fieldToolTipsshouhin["English"]["gold_check_id"] = "";
	$placeHoldersshouhin["English"]["gold_check_id"] = "";
	$fieldLabelsshouhin["English"]["cost"] = "Cost";
	$fieldToolTipsshouhin["English"]["cost"] = "";
	$placeHoldersshouhin["English"]["cost"] = "";
	$fieldLabelsshouhin["English"]["other_cost"] = "Other Cost";
	$fieldToolTipsshouhin["English"]["other_cost"] = "";
	$placeHoldersshouhin["English"]["other_cost"] = "";
	$fieldLabelsshouhin["English"]["identification_cost"] = "Identification Cost";
	$fieldToolTipsshouhin["English"]["identification_cost"] = "";
	$placeHoldersshouhin["English"]["identification_cost"] = "";
	$fieldLabelsshouhin["English"]["price_without_tax"] = "Price Without Tax";
	$fieldToolTipsshouhin["English"]["price_without_tax"] = "";
	$placeHoldersshouhin["English"]["price_without_tax"] = "";
	$fieldLabelsshouhin["English"]["kinsa_flag"] = "Kinsa Flag";
	$fieldToolTipsshouhin["English"]["kinsa_flag"] = "";
	$placeHoldersshouhin["English"]["kinsa_flag"] = "";
	$fieldLabelsshouhin["English"]["slip_type"] = "Slip Type";
	$fieldToolTipsshouhin["English"]["slip_type"] = "";
	$placeHoldersshouhin["English"]["slip_type"] = "";
	$fieldLabelsshouhin["English"]["Eoc_trader_id_for_buy"] = "Eoc Trader Id For Buy";
	$fieldToolTipsshouhin["English"]["Eoc_trader_id_for_buy"] = "";
	$placeHoldersshouhin["English"]["Eoc_trader_id_for_buy"] = "";
	$fieldLabelsshouhin["English"]["Eoc_trader_id_for_sell"] = "Eoc Trader Id For Sell";
	$fieldToolTipsshouhin["English"]["Eoc_trader_id_for_sell"] = "";
	$placeHoldersshouhin["English"]["Eoc_trader_id_for_sell"] = "";
	$fieldLabelsshouhin["English"]["slip_number_for_buy"] = "Slip Number For Buy";
	$fieldToolTipsshouhin["English"]["slip_number_for_buy"] = "";
	$placeHoldersshouhin["English"]["slip_number_for_buy"] = "";
	$fieldLabelsshouhin["English"]["market_for_buy"] = "Market For Buy";
	$fieldToolTipsshouhin["English"]["market_for_buy"] = "";
	$placeHoldersshouhin["English"]["market_for_buy"] = "";
	$fieldLabelsshouhin["English"]["date_for_buy"] = "Date For Buy";
	$fieldToolTipsshouhin["English"]["date_for_buy"] = "";
	$placeHoldersshouhin["English"]["date_for_buy"] = "";
	$fieldLabelsshouhin["English"]["slip_number_for_sell"] = "Slip Number For Sell";
	$fieldToolTipsshouhin["English"]["slip_number_for_sell"] = "";
	$placeHoldersshouhin["English"]["slip_number_for_sell"] = "";
	$fieldLabelsshouhin["English"]["market_for_sell"] = "Market For Sell";
	$fieldToolTipsshouhin["English"]["market_for_sell"] = "";
	$placeHoldersshouhin["English"]["market_for_sell"] = "";
	$fieldLabelsshouhin["English"]["date_for_sell"] = "Date For Sell";
	$fieldToolTipsshouhin["English"]["date_for_sell"] = "";
	$placeHoldersshouhin["English"]["date_for_sell"] = "";
	$fieldLabelsshouhin["English"]["trading_sort_id"] = "Trading Sort Id";
	$fieldToolTipsshouhin["English"]["trading_sort_id"] = "";
	$placeHoldersshouhin["English"]["trading_sort_id"] = "";
	$fieldLabelsshouhin["English"]["many_product_group_id"] = "Many Product Group Id";
	$fieldToolTipsshouhin["English"]["many_product_group_id"] = "";
	$placeHoldersshouhin["English"]["many_product_group_id"] = "";
	$fieldLabelsshouhin["English"]["destination_sold_out"] = "Destination Sold Out";
	$fieldToolTipsshouhin["English"]["destination_sold_out"] = "";
	$placeHoldersshouhin["English"]["destination_sold_out"] = "";
	$fieldLabelsshouhin["English"]["sales_date"] = "Sales Date";
	$fieldToolTipsshouhin["English"]["sales_date"] = "";
	$placeHoldersshouhin["English"]["sales_date"] = "";
	$fieldLabelsshouhin["English"]["mst_business_partner_id"] = "Mst Business Partner Id";
	$fieldToolTipsshouhin["English"]["mst_business_partner_id"] = "";
	$placeHoldersshouhin["English"]["mst_business_partner_id"] = "";
	$fieldLabelsshouhin["English"]["purchase_category"] = "Purchase Category";
	$fieldToolTipsshouhin["English"]["purchase_category"] = "";
	$placeHoldersshouhin["English"]["purchase_category"] = "";
	$fieldLabelsshouhin["English"]["commission"] = "Commission";
	$fieldToolTipsshouhin["English"]["commission"] = "";
	$placeHoldersshouhin["English"]["commission"] = "";
	$fieldLabelsshouhin["English"]["is_recovery"] = "Is Recovery";
	$fieldToolTipsshouhin["English"]["is_recovery"] = "";
	$placeHoldersshouhin["English"]["is_recovery"] = "";
	$fieldLabelsshouhin["English"]["saisun_time"] = "Saisun Time";
	$fieldToolTipsshouhin["English"]["saisun_time"] = "";
	$placeHoldersshouhin["English"]["saisun_time"] = "";
	$fieldLabelsshouhin["English"]["sales_cost"] = "Sales Cost";
	$fieldToolTipsshouhin["English"]["sales_cost"] = "";
	$placeHoldersshouhin["English"]["sales_cost"] = "";
	if (count($fieldToolTipsshouhin["English"]))
		$tdatashouhin[".isUseToolTips"] = true;
}


	$tdatashouhin[".NCSearch"] = true;



$tdatashouhin[".shortTableName"] = "shouhin";
$tdatashouhin[".nSecOptions"] = 0;
$tdatashouhin[".recsPerRowPrint"] = 1;
$tdatashouhin[".mainTableOwnerID"] = "";
$tdatashouhin[".moveNext"] = 1;
$tdatashouhin[".entityType"] = 0;

$tdatashouhin[".strOriginalTableName"] = "shouhin";

	



$tdatashouhin[".showAddInPopup"] = false;

$tdatashouhin[".showEditInPopup"] = false;

$tdatashouhin[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatashouhin[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatashouhin[".fieldsForRegister"] = array();

$tdatashouhin[".listAjax"] = false;

	$tdatashouhin[".audit"] = true;

	$tdatashouhin[".locking"] = false;

$tdatashouhin[".edit"] = true;
$tdatashouhin[".afterEditAction"] = 1;
$tdatashouhin[".closePopupAfterEdit"] = 1;
$tdatashouhin[".afterEditActionDetTable"] = "";

$tdatashouhin[".add"] = true;
$tdatashouhin[".afterAddAction"] = 1;
$tdatashouhin[".closePopupAfterAdd"] = 1;
$tdatashouhin[".afterAddActionDetTable"] = "";

$tdatashouhin[".list"] = true;

$tdatashouhin[".inlineEdit"] = true;

$tdatashouhin[".updateSelected"] = true;

$tdatashouhin[".reorderRecordsByHeader"] = true;
$tdatashouhin[".createSortByDropdown"] = true;
$tdatashouhin[".strSortControlSettingsJSON"] = "";



$tdatashouhin[".inlineAdd"] = true;
$tdatashouhin[".copy"] = true;
$tdatashouhin[".view"] = true;

$tdatashouhin[".import"] = true;

$tdatashouhin[".exportTo"] = true;

$tdatashouhin[".printFriendly"] = true;

$tdatashouhin[".delete"] = true;

$tdatashouhin[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatashouhin[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatashouhin[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatashouhin[".searchSaving"] = false;
//

$tdatashouhin[".showSearchPanel"] = true;
		$tdatashouhin[".flexibleSearch"] = true;

$tdatashouhin[".isUseAjaxSuggest"] = true;

$tdatashouhin[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																	
					
																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																													
																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																							
					
																																																																																																																			
																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																												

$tdatashouhin[".ajaxCodeSnippetAdded"] = false;

$tdatashouhin[".buttonsAdded"] = true;

$tdatashouhin[".addPageEvents"] = true;

// use timepicker for search panel
$tdatashouhin[".isUseTimeForSearch"] = false;



$tdatashouhin[".badgeColor"] = "9acd32";


$tdatashouhin[".allSearchFields"] = array();
$tdatashouhin[".filterFields"] = array();
$tdatashouhin[".requiredSearchFields"] = array();

$tdatashouhin[".allSearchFields"][] = "is_recovery";
	$tdatashouhin[".allSearchFields"][] = "commission";
	$tdatashouhin[".allSearchFields"][] = "mst_business_partner_id";
	$tdatashouhin[".allSearchFields"][] = "purchase_category";
	$tdatashouhin[".allSearchFields"][] = "slip_number_for_sell";
	$tdatashouhin[".allSearchFields"][] = "market_for_buy";
	$tdatashouhin[".allSearchFields"][] = "slip_number_for_buy";
	$tdatashouhin[".allSearchFields"][] = "Eoc_trader_id_for_sell";
	$tdatashouhin[".allSearchFields"][] = "many_product_group_id";
	$tdatashouhin[".allSearchFields"][] = "date_for_buy";
	$tdatashouhin[".allSearchFields"][] = "trading_sort_id";
	$tdatashouhin[".allSearchFields"][] = "date_for_sell";
	$tdatashouhin[".allSearchFields"][] = "Eoc_trader_id_for_buy";
	$tdatashouhin[".allSearchFields"][] = "market_for_sell";
	$tdatashouhin[".allSearchFields"][] = "sales_date";
	$tdatashouhin[".allSearchFields"][] = "kinsa_flag";
	$tdatashouhin[".allSearchFields"][] = "price_without_tax";
	$tdatashouhin[".allSearchFields"][] = "identification_cost";
	$tdatashouhin[".allSearchFields"][] = "other_cost";
	$tdatashouhin[".allSearchFields"][] = "sales_cost";
	$tdatashouhin[".allSearchFields"][] = "gold_check_id";
	$tdatashouhin[".allSearchFields"][] = "tentou_label_output_flag";
	$tdatashouhin[".allSearchFields"][] = "itaku_flag";
	$tdatashouhin[".allSearchFields"][] = "label_output_flag";
	$tdatashouhin[".allSearchFields"][] = "meisai_number";
	$tdatashouhin[".allSearchFields"][] = "shape_supplement";
	$tdatashouhin[".allSearchFields"][] = "product_style";
	$tdatashouhin[".allSearchFields"][] = "unit";
	$tdatashouhin[".allSearchFields"][] = "price_for_site_flag";
	$tdatashouhin[".allSearchFields"][] = "producing_area";
	$tdatashouhin[".allSearchFields"][] = "satei_error";
	$tdatashouhin[".allSearchFields"][] = "goods_title";
	$tdatashouhin[".allSearchFields"][] = "status";
	$tdatashouhin[".allSearchFields"][] = "product_num";
	$tdatashouhin[".allSearchFields"][] = "product_id";
	$tdatashouhin[".allSearchFields"][] = "yahoo_sinaban";
	$tdatashouhin[".allSearchFields"][] = "ecc_seq";
	$tdatashouhin[".allSearchFields"][] = "ecc_id";
	$tdatashouhin[".allSearchFields"][] = "Eoc_takuhai_id";
	$tdatashouhin[".allSearchFields"][] = "Eoc_unfinished_id";
	$tdatashouhin[".allSearchFields"][] = "chohyo_id";
	$tdatashouhin[".allSearchFields"][] = "line";
	$tdatashouhin[".allSearchFields"][] = "item_name";
	$tdatashouhin[".allSearchFields"][] = "yahoo_kataban";
	$tdatashouhin[".allSearchFields"][] = "serial_number";
	$tdatashouhin[".allSearchFields"][] = "serial_number_for_storage";
	$tdatashouhin[".allSearchFields"][] = "title";
	$tdatashouhin[".allSearchFields"][] = "title2";
	$tdatashouhin[".allSearchFields"][] = "title3";
	$tdatashouhin[".allSearchFields"][] = "description";
	$tdatashouhin[".allSearchFields"][] = "comment";
	$tdatashouhin[".allSearchFields"][] = "box_id";
	$tdatashouhin[".allSearchFields"][] = "category_id";
	$tdatashouhin[".allSearchFields"][] = "sub_category_id1";
	$tdatashouhin[".allSearchFields"][] = "yahoo_sex";
	$tdatashouhin[".allSearchFields"][] = "price";
	$tdatashouhin[".allSearchFields"][] = "cost";
	$tdatashouhin[".allSearchFields"][] = "sales_price";
	$tdatashouhin[".allSearchFields"][] = "nyuukin_price";
	$tdatashouhin[".allSearchFields"][] = "satei_by";
	$tdatashouhin[".allSearchFields"][] = "satei_hi";
	$tdatashouhin[".allSearchFields"][] = "REG_AUTHOR";
	$tdatashouhin[".allSearchFields"][] = "DT_UP_DATE";
	$tdatashouhin[".allSearchFields"][] = "kaitori_by";
	$tdatashouhin[".allSearchFields"][] = "kaitory_hi";
	$tdatashouhin[".allSearchFields"][] = "yahoo_saisun_sha";
	$tdatashouhin[".allSearchFields"][] = "saisun_start";
	$tdatashouhin[".allSearchFields"][] = "saisun_end";
	$tdatashouhin[".allSearchFields"][] = "REG_PHOTOGRAPHER";
	$tdatashouhin[".allSearchFields"][] = "REG_PHOTOGRAPHER_DATE";
	$tdatashouhin[".allSearchFields"][] = "REG_KAKOU";
	$tdatashouhin[".allSearchFields"][] = "REG_KAKOU_DATE";
	$tdatashouhin[".allSearchFields"][] = "REG_PACKINGS";
	$tdatashouhin[".allSearchFields"][] = "DT_PACKING_DATE";
	$tdatashouhin[".allSearchFields"][] = "REG_EXHIBITOR";
	$tdatashouhin[".allSearchFields"][] = "Exhibition_Date";
	$tdatashouhin[".allSearchFields"][] = "AWAZU_NIN";
	$tdatashouhin[".allSearchFields"][] = "AWAZU_DATE";
	$tdatashouhin[".allSearchFields"][] = "kanryou_henbi";
	$tdatashouhin[".allSearchFields"][] = "sabun_date";
	$tdatashouhin[".allSearchFields"][] = "updated_by";
	$tdatashouhin[".allSearchFields"][] = "updated_at";
	$tdatashouhin[".allSearchFields"][] = "ichiba_title";
	$tdatashouhin[".allSearchFields"][] = "gold_property";
	$tdatashouhin[".allSearchFields"][] = "Gram";
	$tdatashouhin[".allSearchFields"][] = "price_per_gram";
	$tdatashouhin[".allSearchFields"][] = "Parent_stone";
	$tdatashouhin[".allSearchFields"][] = "price_per_parent_stone";
	$tdatashouhin[".allSearchFields"][] = "Aside_stone";
	$tdatashouhin[".allSearchFields"][] = "price_per_aside_stone";
	$tdatashouhin[".allSearchFields"][] = "Appraiser";
	$tdatashouhin[".allSearchFields"][] = "Remarks";
	$tdatashouhin[".allSearchFields"][] = "stamp";
	$tdatashouhin[".allSearchFields"][] = "Destination_selling";
	$tdatashouhin[".allSearchFields"][] = "Finish";
	$tdatashouhin[".allSearchFields"][] = "Discrimination";
	$tdatashouhin[".allSearchFields"][] = "accessories";
	$tdatashouhin[".allSearchFields"][] = "priority";
	$tdatashouhin[".allSearchFields"][] = "A_storage";
	$tdatashouhin[".allSearchFields"][] = "yahoo_sozai";
	$tdatashouhin[".allSearchFields"][] = "motif";
	$tdatashouhin[".allSearchFields"][] = "Setting";
	$tdatashouhin[".allSearchFields"][] = "processing";
	$tdatashouhin[".allSearchFields"][] = "Sleeve_Length";
	$tdatashouhin[".allSearchFields"][] = "length";
	$tdatashouhin[".allSearchFields"][] = "Ring_size";
	$tdatashouhin[".allSearchFields"][] = "yahoo_condition2";
	$tdatashouhin[".allSearchFields"][] = "browseid";
	$tdatashouhin[".allSearchFields"][] = "browsenode";
	$tdatashouhin[".allSearchFields"][] = "price_for_site";
	$tdatashouhin[".allSearchFields"][] = "logo";
	$tdatashouhin[".allSearchFields"][] = "parts";
	$tdatashouhin[".allSearchFields"][] = "country_of_origin";
	$tdatashouhin[".allSearchFields"][] = "zipper";
	$tdatashouhin[".allSearchFields"][] = "guarantee";
	$tdatashouhin[".allSearchFields"][] = "designer";
	$tdatashouhin[".allSearchFields"][] = "chain_type";
	$tdatashouhin[".allSearchFields"][] = "cutting_style";
	$tdatashouhin[".allSearchFields"][] = "shape";
	$tdatashouhin[".allSearchFields"][] = "effect";
	$tdatashouhin[".allSearchFields"][] = "hahakai";
	$tdatashouhin[".allSearchFields"][] = "amount";
	$tdatashouhin[".allSearchFields"][] = "number_of_stones";
	$tdatashouhin[".allSearchFields"][] = "errors";
	$tdatashouhin[".allSearchFields"][] = "zaiko";
	$tdatashouhin[".allSearchFields"][] = "category_class";
	$tdatashouhin[".allSearchFields"][] = "slip_type";
	

$tdatashouhin[".googleLikeFields"] = array();
$tdatashouhin[".googleLikeFields"][] = "status";
$tdatashouhin[".googleLikeFields"][] = "box_id";
$tdatashouhin[".googleLikeFields"][] = "product_id";
$tdatashouhin[".googleLikeFields"][] = "ecc_id";
$tdatashouhin[".googleLikeFields"][] = "yahoo_sinaban";
$tdatashouhin[".googleLikeFields"][] = "sabun_date";
$tdatashouhin[".googleLikeFields"][] = "product_num";
$tdatashouhin[".googleLikeFields"][] = "title";
$tdatashouhin[".googleLikeFields"][] = "title2";
$tdatashouhin[".googleLikeFields"][] = "title3";
$tdatashouhin[".googleLikeFields"][] = "line";
$tdatashouhin[".googleLikeFields"][] = "item_name";
$tdatashouhin[".googleLikeFields"][] = "yahoo_sozai";
$tdatashouhin[".googleLikeFields"][] = "motif";
$tdatashouhin[".googleLikeFields"][] = "Setting";
$tdatashouhin[".googleLikeFields"][] = "processing";
$tdatashouhin[".googleLikeFields"][] = "Sleeve_Length";
$tdatashouhin[".googleLikeFields"][] = "length";
$tdatashouhin[".googleLikeFields"][] = "yahoo_kataban";
$tdatashouhin[".googleLikeFields"][] = "serial_number";
$tdatashouhin[".googleLikeFields"][] = "stamp";
$tdatashouhin[".googleLikeFields"][] = "category_id";
$tdatashouhin[".googleLikeFields"][] = "sub_category_id1";
$tdatashouhin[".googleLikeFields"][] = "yahoo_sex";
$tdatashouhin[".googleLikeFields"][] = "yahoo_condition2";
$tdatashouhin[".googleLikeFields"][] = "ichiba_title";
$tdatashouhin[".googleLikeFields"][] = "gold_property";
$tdatashouhin[".googleLikeFields"][] = "Gram";
$tdatashouhin[".googleLikeFields"][] = "price_per_gram";
$tdatashouhin[".googleLikeFields"][] = "Parent_stone";
$tdatashouhin[".googleLikeFields"][] = "price_per_parent_stone";
$tdatashouhin[".googleLikeFields"][] = "Aside_stone";
$tdatashouhin[".googleLikeFields"][] = "price_per_aside_stone";
$tdatashouhin[".googleLikeFields"][] = "Appraiser";
$tdatashouhin[".googleLikeFields"][] = "Ring_size";
$tdatashouhin[".googleLikeFields"][] = "Remarks";
$tdatashouhin[".googleLikeFields"][] = "Destination_selling";
$tdatashouhin[".googleLikeFields"][] = "Finish";
$tdatashouhin[".googleLikeFields"][] = "Discrimination";
$tdatashouhin[".googleLikeFields"][] = "accessories";
$tdatashouhin[".googleLikeFields"][] = "priority";
$tdatashouhin[".googleLikeFields"][] = "A_storage";
$tdatashouhin[".googleLikeFields"][] = "price";
$tdatashouhin[".googleLikeFields"][] = "sales_price";
$tdatashouhin[".googleLikeFields"][] = "comment";
$tdatashouhin[".googleLikeFields"][] = "description";
$tdatashouhin[".googleLikeFields"][] = "nyuukin_price";
$tdatashouhin[".googleLikeFields"][] = "satei_by";
$tdatashouhin[".googleLikeFields"][] = "satei_hi";
$tdatashouhin[".googleLikeFields"][] = "REG_AUTHOR";
$tdatashouhin[".googleLikeFields"][] = "DT_UP_DATE";
$tdatashouhin[".googleLikeFields"][] = "kaitori_by";
$tdatashouhin[".googleLikeFields"][] = "kaitory_hi";
$tdatashouhin[".googleLikeFields"][] = "yahoo_saisun_sha";
$tdatashouhin[".googleLikeFields"][] = "saisun_start";
$tdatashouhin[".googleLikeFields"][] = "saisun_end";
$tdatashouhin[".googleLikeFields"][] = "saisun_time";
$tdatashouhin[".googleLikeFields"][] = "REG_PHOTOGRAPHER";
$tdatashouhin[".googleLikeFields"][] = "REG_PHOTOGRAPHER_DATE";
$tdatashouhin[".googleLikeFields"][] = "REG_KAKOU";
$tdatashouhin[".googleLikeFields"][] = "REG_KAKOU_DATE";
$tdatashouhin[".googleLikeFields"][] = "REG_PACKINGS";
$tdatashouhin[".googleLikeFields"][] = "DT_PACKING_DATE";
$tdatashouhin[".googleLikeFields"][] = "AWAZU_NIN";
$tdatashouhin[".googleLikeFields"][] = "AWAZU_DATE";
$tdatashouhin[".googleLikeFields"][] = "REG_EXHIBITOR";
$tdatashouhin[".googleLikeFields"][] = "Exhibition_Date";
$tdatashouhin[".googleLikeFields"][] = "updated_by";
$tdatashouhin[".googleLikeFields"][] = "updated_at";
$tdatashouhin[".googleLikeFields"][] = "kanryou_henbi";
$tdatashouhin[".googleLikeFields"][] = "browseid";
$tdatashouhin[".googleLikeFields"][] = "browsenode";
$tdatashouhin[".googleLikeFields"][] = "price_for_site";
$tdatashouhin[".googleLikeFields"][] = "ecc_seq";
$tdatashouhin[".googleLikeFields"][] = "logo";
$tdatashouhin[".googleLikeFields"][] = "parts";
$tdatashouhin[".googleLikeFields"][] = "country_of_origin";
$tdatashouhin[".googleLikeFields"][] = "zipper";
$tdatashouhin[".googleLikeFields"][] = "guarantee";
$tdatashouhin[".googleLikeFields"][] = "errors";
$tdatashouhin[".googleLikeFields"][] = "designer";
$tdatashouhin[".googleLikeFields"][] = "hahakai";
$tdatashouhin[".googleLikeFields"][] = "effect";
$tdatashouhin[".googleLikeFields"][] = "shape";
$tdatashouhin[".googleLikeFields"][] = "cutting_style";
$tdatashouhin[".googleLikeFields"][] = "chain_type";
$tdatashouhin[".googleLikeFields"][] = "number_of_stones";
$tdatashouhin[".googleLikeFields"][] = "amount";
$tdatashouhin[".googleLikeFields"][] = "producing_area";
$tdatashouhin[".googleLikeFields"][] = "satei_error";
$tdatashouhin[".googleLikeFields"][] = "serial_number_for_storage";
$tdatashouhin[".googleLikeFields"][] = "price_for_site_flag";
$tdatashouhin[".googleLikeFields"][] = "product_style";
$tdatashouhin[".googleLikeFields"][] = "shape_supplement";
$tdatashouhin[".googleLikeFields"][] = "unit";
$tdatashouhin[".googleLikeFields"][] = "chohyo_id";
$tdatashouhin[".googleLikeFields"][] = "meisai_number";
$tdatashouhin[".googleLikeFields"][] = "label_output_flag";
$tdatashouhin[".googleLikeFields"][] = "zaiko";
$tdatashouhin[".googleLikeFields"][] = "itaku_flag";
$tdatashouhin[".googleLikeFields"][] = "category_class";
$tdatashouhin[".googleLikeFields"][] = "tentou_label_output_flag";
$tdatashouhin[".googleLikeFields"][] = "gold_check_id";
$tdatashouhin[".googleLikeFields"][] = "cost";
$tdatashouhin[".googleLikeFields"][] = "other_cost";
$tdatashouhin[".googleLikeFields"][] = "identification_cost";
$tdatashouhin[".googleLikeFields"][] = "kinsa_flag";
$tdatashouhin[".googleLikeFields"][] = "price_without_tax";
$tdatashouhin[".googleLikeFields"][] = "slip_type";
$tdatashouhin[".googleLikeFields"][] = "Eoc_trader_id_for_buy";
$tdatashouhin[".googleLikeFields"][] = "Eoc_trader_id_for_sell";
$tdatashouhin[".googleLikeFields"][] = "slip_number_for_buy";
$tdatashouhin[".googleLikeFields"][] = "market_for_buy";
$tdatashouhin[".googleLikeFields"][] = "date_for_buy";
$tdatashouhin[".googleLikeFields"][] = "slip_number_for_sell";
$tdatashouhin[".googleLikeFields"][] = "market_for_sell";
$tdatashouhin[".googleLikeFields"][] = "date_for_sell";
$tdatashouhin[".googleLikeFields"][] = "trading_sort_id";
$tdatashouhin[".googleLikeFields"][] = "many_product_group_id";
$tdatashouhin[".googleLikeFields"][] = "sales_date";
$tdatashouhin[".googleLikeFields"][] = "purchase_category";
$tdatashouhin[".googleLikeFields"][] = "mst_business_partner_id";
$tdatashouhin[".googleLikeFields"][] = "commission";
$tdatashouhin[".googleLikeFields"][] = "is_recovery";
$tdatashouhin[".googleLikeFields"][] = "sales_cost";

$tdatashouhin[".panelSearchFields"] = array();
$tdatashouhin[".searchPanelOptions"] = array();
$tdatashouhin[".panelSearchFields"][] = "status";
	$tdatashouhin[".panelSearchFields"][] = "product_num";
	$tdatashouhin[".panelSearchFields"][] = "product_id";
	$tdatashouhin[".panelSearchFields"][] = "yahoo_sinaban";
	$tdatashouhin[".panelSearchFields"][] = "ecc_seq";
	$tdatashouhin[".panelSearchFields"][] = "ecc_id";
	$tdatashouhin[".panelSearchFields"][] = "Eoc_takuhai_id";
	$tdatashouhin[".panelSearchFields"][] = "Eoc_unfinished_id";
	$tdatashouhin[".panelSearchFields"][] = "line";
	$tdatashouhin[".panelSearchFields"][] = "item_name";
	$tdatashouhin[".panelSearchFields"][] = "yahoo_kataban";
	$tdatashouhin[".panelSearchFields"][] = "serial_number";
	$tdatashouhin[".panelSearchFields"][] = "title";
	$tdatashouhin[".panelSearchFields"][] = "title2";
	$tdatashouhin[".panelSearchFields"][] = "title3";
	$tdatashouhin[".panelSearchFields"][] = "description";
	$tdatashouhin[".panelSearchFields"][] = "comment";
	$tdatashouhin[".panelSearchFields"][] = "box_id";
	$tdatashouhin[".panelSearchFields"][] = "category_id";
	$tdatashouhin[".panelSearchFields"][] = "sub_category_id1";
	$tdatashouhin[".panelSearchFields"][] = "yahoo_sex";
	$tdatashouhin[".panelSearchFields"][] = "price";
	$tdatashouhin[".panelSearchFields"][] = "sales_price";
	$tdatashouhin[".panelSearchFields"][] = "nyuukin_price";
	$tdatashouhin[".panelSearchFields"][] = "satei_by";
	$tdatashouhin[".panelSearchFields"][] = "satei_hi";
	$tdatashouhin[".panelSearchFields"][] = "REG_AUTHOR";
	$tdatashouhin[".panelSearchFields"][] = "DT_UP_DATE";
	$tdatashouhin[".panelSearchFields"][] = "kaitori_by";
	$tdatashouhin[".panelSearchFields"][] = "kaitory_hi";
	$tdatashouhin[".panelSearchFields"][] = "yahoo_saisun_sha";
	$tdatashouhin[".panelSearchFields"][] = "saisun_start";
	$tdatashouhin[".panelSearchFields"][] = "saisun_end";
	$tdatashouhin[".panelSearchFields"][] = "REG_PHOTOGRAPHER";
	$tdatashouhin[".panelSearchFields"][] = "REG_PHOTOGRAPHER_DATE";
	$tdatashouhin[".panelSearchFields"][] = "REG_KAKOU";
	$tdatashouhin[".panelSearchFields"][] = "REG_KAKOU_DATE";
	$tdatashouhin[".panelSearchFields"][] = "REG_PACKINGS";
	$tdatashouhin[".panelSearchFields"][] = "DT_PACKING_DATE";
	$tdatashouhin[".panelSearchFields"][] = "REG_EXHIBITOR";
	$tdatashouhin[".panelSearchFields"][] = "Exhibition_Date";
	$tdatashouhin[".panelSearchFields"][] = "AWAZU_NIN";
	$tdatashouhin[".panelSearchFields"][] = "AWAZU_DATE";
	$tdatashouhin[".panelSearchFields"][] = "kanryou_henbi";
	$tdatashouhin[".panelSearchFields"][] = "sabun_date";
	$tdatashouhin[".panelSearchFields"][] = "updated_by";
	$tdatashouhin[".panelSearchFields"][] = "updated_at";
	$tdatashouhin[".panelSearchFields"][] = "ichiba_title";
	$tdatashouhin[".panelSearchFields"][] = "gold_property";
	$tdatashouhin[".panelSearchFields"][] = "Gram";
	$tdatashouhin[".panelSearchFields"][] = "price_per_gram";
	$tdatashouhin[".panelSearchFields"][] = "Parent_stone";
	$tdatashouhin[".panelSearchFields"][] = "price_per_parent_stone";
	$tdatashouhin[".panelSearchFields"][] = "Aside_stone";
	$tdatashouhin[".panelSearchFields"][] = "price_per_aside_stone";
	$tdatashouhin[".panelSearchFields"][] = "Appraiser";
	$tdatashouhin[".panelSearchFields"][] = "Remarks";
	$tdatashouhin[".panelSearchFields"][] = "stamp";
	$tdatashouhin[".panelSearchFields"][] = "Destination_selling";
	$tdatashouhin[".panelSearchFields"][] = "Finish";
	$tdatashouhin[".panelSearchFields"][] = "Discrimination";
	$tdatashouhin[".panelSearchFields"][] = "accessories";
	$tdatashouhin[".panelSearchFields"][] = "priority";
	$tdatashouhin[".panelSearchFields"][] = "A_storage";
	$tdatashouhin[".panelSearchFields"][] = "yahoo_sozai";
	$tdatashouhin[".panelSearchFields"][] = "motif";
	$tdatashouhin[".panelSearchFields"][] = "Setting";
	$tdatashouhin[".panelSearchFields"][] = "processing";
	$tdatashouhin[".panelSearchFields"][] = "Sleeve_Length";
	$tdatashouhin[".panelSearchFields"][] = "length";
	$tdatashouhin[".panelSearchFields"][] = "Ring_size";
	$tdatashouhin[".panelSearchFields"][] = "zaiko";
	$tdatashouhin[".panelSearchFields"][] = "category_class";
	$tdatashouhin[".panelSearchFields"][] = "slip_type";
	
$tdatashouhin[".advSearchFields"] = array();
$tdatashouhin[".advSearchFields"][] = "is_recovery";
$tdatashouhin[".advSearchFields"][] = "commission";
$tdatashouhin[".advSearchFields"][] = "mst_business_partner_id";
$tdatashouhin[".advSearchFields"][] = "purchase_category";
$tdatashouhin[".advSearchFields"][] = "slip_number_for_sell";
$tdatashouhin[".advSearchFields"][] = "market_for_buy";
$tdatashouhin[".advSearchFields"][] = "slip_number_for_buy";
$tdatashouhin[".advSearchFields"][] = "Eoc_trader_id_for_sell";
$tdatashouhin[".advSearchFields"][] = "many_product_group_id";
$tdatashouhin[".advSearchFields"][] = "date_for_buy";
$tdatashouhin[".advSearchFields"][] = "trading_sort_id";
$tdatashouhin[".advSearchFields"][] = "date_for_sell";
$tdatashouhin[".advSearchFields"][] = "Eoc_trader_id_for_buy";
$tdatashouhin[".advSearchFields"][] = "market_for_sell";
$tdatashouhin[".advSearchFields"][] = "sales_date";
$tdatashouhin[".advSearchFields"][] = "kinsa_flag";
$tdatashouhin[".advSearchFields"][] = "price_without_tax";
$tdatashouhin[".advSearchFields"][] = "identification_cost";
$tdatashouhin[".advSearchFields"][] = "other_cost";
$tdatashouhin[".advSearchFields"][] = "sales_cost";
$tdatashouhin[".advSearchFields"][] = "gold_check_id";
$tdatashouhin[".advSearchFields"][] = "tentou_label_output_flag";
$tdatashouhin[".advSearchFields"][] = "itaku_flag";
$tdatashouhin[".advSearchFields"][] = "label_output_flag";
$tdatashouhin[".advSearchFields"][] = "meisai_number";
$tdatashouhin[".advSearchFields"][] = "shape_supplement";
$tdatashouhin[".advSearchFields"][] = "product_style";
$tdatashouhin[".advSearchFields"][] = "unit";
$tdatashouhin[".advSearchFields"][] = "price_for_site_flag";
$tdatashouhin[".advSearchFields"][] = "producing_area";
$tdatashouhin[".advSearchFields"][] = "satei_error";
$tdatashouhin[".advSearchFields"][] = "goods_title";
$tdatashouhin[".advSearchFields"][] = "status";
$tdatashouhin[".advSearchFields"][] = "product_num";
$tdatashouhin[".advSearchFields"][] = "product_id";
$tdatashouhin[".advSearchFields"][] = "yahoo_sinaban";
$tdatashouhin[".advSearchFields"][] = "ecc_seq";
$tdatashouhin[".advSearchFields"][] = "ecc_id";
$tdatashouhin[".advSearchFields"][] = "Eoc_takuhai_id";
$tdatashouhin[".advSearchFields"][] = "Eoc_unfinished_id";
$tdatashouhin[".advSearchFields"][] = "chohyo_id";
$tdatashouhin[".advSearchFields"][] = "line";
$tdatashouhin[".advSearchFields"][] = "item_name";
$tdatashouhin[".advSearchFields"][] = "yahoo_kataban";
$tdatashouhin[".advSearchFields"][] = "serial_number";
$tdatashouhin[".advSearchFields"][] = "serial_number_for_storage";
$tdatashouhin[".advSearchFields"][] = "title";
$tdatashouhin[".advSearchFields"][] = "title2";
$tdatashouhin[".advSearchFields"][] = "title3";
$tdatashouhin[".advSearchFields"][] = "description";
$tdatashouhin[".advSearchFields"][] = "comment";
$tdatashouhin[".advSearchFields"][] = "box_id";
$tdatashouhin[".advSearchFields"][] = "category_id";
$tdatashouhin[".advSearchFields"][] = "sub_category_id1";
$tdatashouhin[".advSearchFields"][] = "yahoo_sex";
$tdatashouhin[".advSearchFields"][] = "price";
$tdatashouhin[".advSearchFields"][] = "cost";
$tdatashouhin[".advSearchFields"][] = "sales_price";
$tdatashouhin[".advSearchFields"][] = "nyuukin_price";
$tdatashouhin[".advSearchFields"][] = "satei_by";
$tdatashouhin[".advSearchFields"][] = "satei_hi";
$tdatashouhin[".advSearchFields"][] = "REG_AUTHOR";
$tdatashouhin[".advSearchFields"][] = "DT_UP_DATE";
$tdatashouhin[".advSearchFields"][] = "kaitori_by";
$tdatashouhin[".advSearchFields"][] = "kaitory_hi";
$tdatashouhin[".advSearchFields"][] = "yahoo_saisun_sha";
$tdatashouhin[".advSearchFields"][] = "saisun_start";
$tdatashouhin[".advSearchFields"][] = "saisun_end";
$tdatashouhin[".advSearchFields"][] = "REG_PHOTOGRAPHER";
$tdatashouhin[".advSearchFields"][] = "REG_PHOTOGRAPHER_DATE";
$tdatashouhin[".advSearchFields"][] = "REG_KAKOU";
$tdatashouhin[".advSearchFields"][] = "REG_KAKOU_DATE";
$tdatashouhin[".advSearchFields"][] = "REG_PACKINGS";
$tdatashouhin[".advSearchFields"][] = "DT_PACKING_DATE";
$tdatashouhin[".advSearchFields"][] = "REG_EXHIBITOR";
$tdatashouhin[".advSearchFields"][] = "Exhibition_Date";
$tdatashouhin[".advSearchFields"][] = "AWAZU_NIN";
$tdatashouhin[".advSearchFields"][] = "AWAZU_DATE";
$tdatashouhin[".advSearchFields"][] = "kanryou_henbi";
$tdatashouhin[".advSearchFields"][] = "sabun_date";
$tdatashouhin[".advSearchFields"][] = "updated_by";
$tdatashouhin[".advSearchFields"][] = "updated_at";
$tdatashouhin[".advSearchFields"][] = "ichiba_title";
$tdatashouhin[".advSearchFields"][] = "gold_property";
$tdatashouhin[".advSearchFields"][] = "Gram";
$tdatashouhin[".advSearchFields"][] = "price_per_gram";
$tdatashouhin[".advSearchFields"][] = "Parent_stone";
$tdatashouhin[".advSearchFields"][] = "price_per_parent_stone";
$tdatashouhin[".advSearchFields"][] = "Aside_stone";
$tdatashouhin[".advSearchFields"][] = "price_per_aside_stone";
$tdatashouhin[".advSearchFields"][] = "Appraiser";
$tdatashouhin[".advSearchFields"][] = "Remarks";
$tdatashouhin[".advSearchFields"][] = "stamp";
$tdatashouhin[".advSearchFields"][] = "Destination_selling";
$tdatashouhin[".advSearchFields"][] = "Finish";
$tdatashouhin[".advSearchFields"][] = "Discrimination";
$tdatashouhin[".advSearchFields"][] = "accessories";
$tdatashouhin[".advSearchFields"][] = "priority";
$tdatashouhin[".advSearchFields"][] = "A_storage";
$tdatashouhin[".advSearchFields"][] = "yahoo_sozai";
$tdatashouhin[".advSearchFields"][] = "motif";
$tdatashouhin[".advSearchFields"][] = "Setting";
$tdatashouhin[".advSearchFields"][] = "processing";
$tdatashouhin[".advSearchFields"][] = "Sleeve_Length";
$tdatashouhin[".advSearchFields"][] = "length";
$tdatashouhin[".advSearchFields"][] = "Ring_size";
$tdatashouhin[".advSearchFields"][] = "yahoo_condition2";
$tdatashouhin[".advSearchFields"][] = "browseid";
$tdatashouhin[".advSearchFields"][] = "browsenode";
$tdatashouhin[".advSearchFields"][] = "price_for_site";
$tdatashouhin[".advSearchFields"][] = "logo";
$tdatashouhin[".advSearchFields"][] = "parts";
$tdatashouhin[".advSearchFields"][] = "country_of_origin";
$tdatashouhin[".advSearchFields"][] = "zipper";
$tdatashouhin[".advSearchFields"][] = "guarantee";
$tdatashouhin[".advSearchFields"][] = "designer";
$tdatashouhin[".advSearchFields"][] = "chain_type";
$tdatashouhin[".advSearchFields"][] = "cutting_style";
$tdatashouhin[".advSearchFields"][] = "shape";
$tdatashouhin[".advSearchFields"][] = "effect";
$tdatashouhin[".advSearchFields"][] = "hahakai";
$tdatashouhin[".advSearchFields"][] = "amount";
$tdatashouhin[".advSearchFields"][] = "number_of_stones";
$tdatashouhin[".advSearchFields"][] = "errors";
$tdatashouhin[".advSearchFields"][] = "zaiko";
$tdatashouhin[".advSearchFields"][] = "category_class";
$tdatashouhin[".advSearchFields"][] = "slip_type";

$tdatashouhin[".tableType"] = "list";

$tdatashouhin[".printerPageOrientation"] = 0;
$tdatashouhin[".nPrinterPageScale"] = 100;

$tdatashouhin[".nPrinterSplitRecords"] = 40;

$tdatashouhin[".nPrinterPDFSplitRecords"] = 40;



$tdatashouhin[".geocodingEnabled"] = false;





$tdatashouhin[".listGridLayout"] = 3;





// view page pdf

// print page pdf

$tdatashouhin[".totalsFields"] = array();
$tdatashouhin[".totalsFields"][] = array(
	"fName" => "price",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');
$tdatashouhin[".totalsFields"][] = array(
	"fName" => "sales_price",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');
$tdatashouhin[".totalsFields"][] = array(
	"fName" => "nyuukin_price",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');

$tdatashouhin[".pageSize"] = 20;

$tdatashouhin[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `shouhin`.`product_id` DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatashouhin[".strOrderBy"] = $tstrOrderBy;

$tdatashouhin[".orderindexes"] = array();
$tdatashouhin[".orderindexes"][] = array(5, (0 ? "ASC" : "DESC"), "`shouhin`.`product_id`");

$tdatashouhin[".sqlHead"] = "SELECT concat(\"/include/yahoo_template/temp.php?product_id=\", `shouhin`.product_id, \"\") AS `y_preview`,  `shouhin`.`status`,  `shouhin`.`box_id` AS `link_id`,  `shouhin`.`box_id`,  `shouhin`.`product_id`,  `shouhin`.`ecc_id`,  `shouhin`.`yahoo_sinaban`,  DATEDIFF(shouhin.kanryou_henbi, shouhin.DT_UP_DATE) AS `sabun_date`,  `shouhin`.`product_num`,  `shouhin`.`title`,  `shouhin`.`title` AS `title2`,  `shouhin`.`title` AS `title3`,  `shouhin`.`line`,  `shouhin`.`item_name`,  `shouhin`.`yahoo_sozai`,  `shouhin`.`motif`,  `shouhin`.`Setting`,  `shouhin`.`processing`,  `shouhin`.`Sleeve_Length`,  `shouhin`.`length`,  `shouhin`.`yahoo_kataban`,  `shouhin`.`serial_number`,  `shouhin`.`stamp`,  `shouhin`.`category_id`,  `shouhin`.`sub_category_id1`,  `shouhin`.`yahoo_sex`,  `shouhin`.`yahoo_condition2`,  `shouhin`.`ichiba_title`,  `shouhin`.`gold_property`,  `shouhin`.`Gram`,  `shouhin`.`price_per_gram`,  `shouhin`.`Parent_stone`,  `shouhin`.`price_per_parent_stone`,  `shouhin`.`Aside_stone`,  `shouhin`.`price_per_aside_stone`,  `shouhin`.`Appraiser`,  `shouhin`.`Ring_size`,  `shouhin`.`Remarks`,  `shouhin`.`Destination_selling`,  `shouhin`.`Finish`,  `shouhin`.`Discrimination`,  `shouhin`.`accessories`,  `shouhin`.`priority`,  `shouhin`.`A_storage`,  `shouhin`.`price`,  `shouhin`.`sales_price`,  (shouhin.sales_price - shouhin.price) AS `sagaku_price`,  `shouhin`.`comment`,  `shouhin`.`description`,  `shouhin`.`nyuukin_price`,  `shouhin`.`satei_by`,  `shouhin`.`satei_hi`,  `shouhin`.`REG_AUTHOR`,  `shouhin`.`DT_UP_DATE`,  `shouhin`.`kaitori_by`,  `shouhin`.`kaitory_hi`,  `shouhin`.`yahoo_saisun_sha`,  `shouhin`.`saisun_start`,  `shouhin`.`saisun_end`,  TIMEDIFF(shouhin.saisun_end, shouhin.saisun_start) AS `saisun_time`,  `shouhin`.`REG_PHOTOGRAPHER`,  `shouhin`.`REG_PHOTOGRAPHER_DATE`,  `shouhin`.`REG_KAKOU`,  `shouhin`.`REG_KAKOU_DATE`,  `shouhin`.`REG_PACKINGS`,  `shouhin`.`DT_PACKING_DATE`,  `shouhin`.`AWAZU_NIN`,  `shouhin`.`AWAZU_DATE`,  `shouhin`.`REG_EXHIBITOR`,  `shouhin`.`Exhibition_Date`,  `shouhin`.`updated_by`,  `shouhin`.`updated_at`,  `shouhin`.`kanryou_henbi`,  `shouhin`.`browseid`,  `shouhin`.`browsenode`,  `shouhin`.`price_for_site`,  `Eoc`.`ecc_seq`,  `shouhin`.`goods_title`,  `Eoc`.`registerd_id`,  `shouhin`.`yahoo_sankou_uwadai`,  `shouhin`.`FLAG_NO_ARRIVAL`,  `shouhin`.`logo`,  `shouhin`.`parts`,  `shouhin`.`country_of_origin`,  `shouhin`.`zipper`,  `shouhin`.`guarantee`,  `shouhin`.`errors`,  `shouhin`.`designer`,  `shouhin`.`hahakai`,  `shouhin`.`effect`,  `shouhin`.`shape`,  `shouhin`.`cutting_style`,  `shouhin`.`chain_type`,  `shouhin`.`number_of_stones`,  `shouhin`.`amount`,  `shouhin`.`producing_area`,  `shouhin`.`satei_error`,  `shouhin`.`serial_number_for_storage`,  `shouhin`.`price_for_site_flag`,  `shouhin`.`Eoc_takuhai_id`,  `shouhin`.`Eoc_unfinished_id`,  `shouhin`.`Eoc_chigins_unfinished_id`,  `shouhin`.`product_style`,  `shouhin`.`shape_supplement`,  `shouhin`.`unit`,  `shouhin`.`chohyo_id`,  `shouhin`.`meisai_number`,  `shouhin`.`days_keep_price`,  `shouhin`.`label_output_flag`,  `_goods_status2`.`zaiko`,  `shouhin`.`itaku_flag`,  `store_sub_categories`.`category_class`,  `shouhin`.`tentou_label_output_flag`,  `shouhin`.`gold_check_id`,  `shouhin`.`cost`,  `shouhin`.`other_cost`,  `shouhin`.`identification_cost`,  `shouhin`.`kinsa_flag`,  \"\" AS `price_without_tax`,  `gold_check`.`slip_type`,  `shouhin`.`Eoc_trader_id_for_buy`,  `shouhin`.`Eoc_trader_id_for_sell`,  `Eoc_trader`.`slip_number` AS `slip_number_for_buy`,  `Eoc_trader`.`market` AS `market_for_buy`,  `Eoc_trader`.`date` AS `date_for_buy`,  `Eoc_trader1`.`slip_number` AS `slip_number_for_sell`,  `Eoc_trader1`.`market` AS `market_for_sell`,  `Eoc_trader1`.`date` AS `date_for_sell`,  `shouhin`.`trading_sort_id`,  `shouhin`.`many_product_group_id`,  `shouhin`.`destination_sold_out`,  `sales_report`.`sales_date`,  `purchase_category_report`.`purchase_category` AS `purchase_category`,  `sales_report`.`mst_business_partner_id`,  `shouhin`.`commission`,  `shouhin`.`is_recovery`,  `shouhin`.`sales_cost`";
$tdatashouhin[".sqlFrom"] = "FROM `shouhin`  LEFT OUTER JOIN `Eoc` ON `shouhin`.`ecc_id` = `Eoc`.`ecc_id`  LEFT OUTER JOIN `_goods_status2` ON `shouhin`.`status` = `_goods_status2`.`goods_id`  LEFT OUTER JOIN `store_sub_categories` ON `shouhin`.`sub_category_id1` = `store_sub_categories`.`id`  LEFT OUTER JOIN `gold_check` ON `shouhin`.`gold_check_id` = `gold_check`.`id`  LEFT OUTER JOIN `Eoc_trader` ON `shouhin`.`Eoc_trader_id_for_buy` = `Eoc_trader`.`id`  LEFT OUTER JOIN `Eoc_trader` AS `Eoc_trader1` ON `shouhin`.`Eoc_trader_id_for_sell` = `Eoc_trader1`.`id`  LEFT OUTER JOIN `sales_report` ON `shouhin`.`product_id` = `sales_report`.`product_id`  LEFT OUTER JOIN `purchase_category_report` ON `shouhin`.`product_id` = `purchase_category_report`.`product_id`";
$tdatashouhin[".sqlWhereExpr"] = "";
$tdatashouhin[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatashouhin[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatashouhin[".arrGroupsPerPage"] = $arrGPP;

$tdatashouhin[".highlightSearchResults"] = true;

$tableKeysshouhin = array();
$tableKeysshouhin[] = "product_id";
$tdatashouhin[".Keys"] = $tableKeysshouhin;

$tdatashouhin[".listFields"] = array();
$tdatashouhin[".listFields"][] = "is_recovery";
$tdatashouhin[".listFields"][] = "purchase_category";
$tdatashouhin[".listFields"][] = "label_output_flag";
$tdatashouhin[".listFields"][] = "tentou_label_output_flag";
$tdatashouhin[".listFields"][] = "y_preview";
$tdatashouhin[".listFields"][] = "link_id";
$tdatashouhin[".listFields"][] = "meisai_number";
$tdatashouhin[".listFields"][] = "Eoc_takuhai_id";
$tdatashouhin[".listFields"][] = "Eoc_unfinished_id";
$tdatashouhin[".listFields"][] = "chohyo_id";
$tdatashouhin[".listFields"][] = "gold_check_id";
$tdatashouhin[".listFields"][] = "slip_type";
$tdatashouhin[".listFields"][] = "Eoc_trader_id_for_buy";
$tdatashouhin[".listFields"][] = "Eoc_trader_id_for_sell";
$tdatashouhin[".listFields"][] = "many_product_group_id";
$tdatashouhin[".listFields"][] = "trading_sort_id";
$tdatashouhin[".listFields"][] = "status";
$tdatashouhin[".listFields"][] = "box_id";
$tdatashouhin[".listFields"][] = "product_id";
$tdatashouhin[".listFields"][] = "ecc_id";
$tdatashouhin[".listFields"][] = "ecc_seq";
$tdatashouhin[".listFields"][] = "mst_business_partner_id";
$tdatashouhin[".listFields"][] = "sales_date";
$tdatashouhin[".listFields"][] = "yahoo_sinaban";
$tdatashouhin[".listFields"][] = "days_keep_price";
$tdatashouhin[".listFields"][] = "sabun_date";
$tdatashouhin[".listFields"][] = "product_num";
$tdatashouhin[".listFields"][] = "title";
$tdatashouhin[".listFields"][] = "category_id";
$tdatashouhin[".listFields"][] = "sub_category_id1";
$tdatashouhin[".listFields"][] = "line";
$tdatashouhin[".listFields"][] = "item_name";
$tdatashouhin[".listFields"][] = "logo";
$tdatashouhin[".listFields"][] = "shape_supplement";
$tdatashouhin[".listFields"][] = "product_style";
$tdatashouhin[".listFields"][] = "price";
$tdatashouhin[".listFields"][] = "price_without_tax";
$tdatashouhin[".listFields"][] = "commission";
$tdatashouhin[".listFields"][] = "cost";
$tdatashouhin[".listFields"][] = "identification_cost";
$tdatashouhin[".listFields"][] = "other_cost";
$tdatashouhin[".listFields"][] = "sales_cost";
$tdatashouhin[".listFields"][] = "sales_price";
$tdatashouhin[".listFields"][] = "yahoo_sankou_uwadai";
$tdatashouhin[".listFields"][] = "nyuukin_price";
$tdatashouhin[".listFields"][] = "description";
$tdatashouhin[".listFields"][] = "parts";
$tdatashouhin[".listFields"][] = "country_of_origin";
$tdatashouhin[".listFields"][] = "comment";
$tdatashouhin[".listFields"][] = "serial_number";
$tdatashouhin[".listFields"][] = "serial_number_for_storage";
$tdatashouhin[".listFields"][] = "zipper";
$tdatashouhin[".listFields"][] = "guarantee";
$tdatashouhin[".listFields"][] = "designer";
$tdatashouhin[".listFields"][] = "goods_title";
$tdatashouhin[".listFields"][] = "yahoo_sozai";
$tdatashouhin[".listFields"][] = "amount";
$tdatashouhin[".listFields"][] = "motif";
$tdatashouhin[".listFields"][] = "producing_area";
$tdatashouhin[".listFields"][] = "hahakai";
$tdatashouhin[".listFields"][] = "effect";
$tdatashouhin[".listFields"][] = "shape";
$tdatashouhin[".listFields"][] = "cutting_style";
$tdatashouhin[".listFields"][] = "Setting";
$tdatashouhin[".listFields"][] = "processing";
$tdatashouhin[".listFields"][] = "chain_type";
$tdatashouhin[".listFields"][] = "Sleeve_Length";
$tdatashouhin[".listFields"][] = "length";
$tdatashouhin[".listFields"][] = "yahoo_kataban";
$tdatashouhin[".listFields"][] = "stamp";
$tdatashouhin[".listFields"][] = "yahoo_sex";
$tdatashouhin[".listFields"][] = "yahoo_condition2";
$tdatashouhin[".listFields"][] = "ichiba_title";
$tdatashouhin[".listFields"][] = "gold_property";
$tdatashouhin[".listFields"][] = "Gram";
$tdatashouhin[".listFields"][] = "unit";
$tdatashouhin[".listFields"][] = "price_per_gram";
$tdatashouhin[".listFields"][] = "Parent_stone";
$tdatashouhin[".listFields"][] = "price_per_parent_stone";
$tdatashouhin[".listFields"][] = "Aside_stone";
$tdatashouhin[".listFields"][] = "price_per_aside_stone";
$tdatashouhin[".listFields"][] = "Appraiser";
$tdatashouhin[".listFields"][] = "number_of_stones";
$tdatashouhin[".listFields"][] = "Ring_size";
$tdatashouhin[".listFields"][] = "Remarks";
$tdatashouhin[".listFields"][] = "Destination_selling";
$tdatashouhin[".listFields"][] = "Finish";
$tdatashouhin[".listFields"][] = "Discrimination";
$tdatashouhin[".listFields"][] = "accessories";
$tdatashouhin[".listFields"][] = "priority";
$tdatashouhin[".listFields"][] = "A_storage";
$tdatashouhin[".listFields"][] = "itaku_flag";
$tdatashouhin[".listFields"][] = "slip_number_for_buy";
$tdatashouhin[".listFields"][] = "market_for_buy";
$tdatashouhin[".listFields"][] = "date_for_buy";
$tdatashouhin[".listFields"][] = "slip_number_for_sell";
$tdatashouhin[".listFields"][] = "market_for_sell";
$tdatashouhin[".listFields"][] = "date_for_sell";
$tdatashouhin[".listFields"][] = "satei_by";
$tdatashouhin[".listFields"][] = "satei_hi";
$tdatashouhin[".listFields"][] = "REG_AUTHOR";
$tdatashouhin[".listFields"][] = "DT_UP_DATE";
$tdatashouhin[".listFields"][] = "kaitori_by";
$tdatashouhin[".listFields"][] = "kaitory_hi";
$tdatashouhin[".listFields"][] = "yahoo_saisun_sha";
$tdatashouhin[".listFields"][] = "saisun_start";
$tdatashouhin[".listFields"][] = "saisun_end";
$tdatashouhin[".listFields"][] = "REG_PHOTOGRAPHER";
$tdatashouhin[".listFields"][] = "REG_PHOTOGRAPHER_DATE";
$tdatashouhin[".listFields"][] = "REG_KAKOU";
$tdatashouhin[".listFields"][] = "REG_KAKOU_DATE";
$tdatashouhin[".listFields"][] = "REG_PACKINGS";
$tdatashouhin[".listFields"][] = "DT_PACKING_DATE";
$tdatashouhin[".listFields"][] = "AWAZU_NIN";
$tdatashouhin[".listFields"][] = "AWAZU_DATE";
$tdatashouhin[".listFields"][] = "REG_EXHIBITOR";
$tdatashouhin[".listFields"][] = "Exhibition_Date";
$tdatashouhin[".listFields"][] = "updated_by";
$tdatashouhin[".listFields"][] = "updated_at";
$tdatashouhin[".listFields"][] = "kanryou_henbi";
$tdatashouhin[".listFields"][] = "browseid";
$tdatashouhin[".listFields"][] = "browsenode";
$tdatashouhin[".listFields"][] = "price_for_site";
$tdatashouhin[".listFields"][] = "price_for_site_flag";
$tdatashouhin[".listFields"][] = "errors";
$tdatashouhin[".listFields"][] = "satei_error";
$tdatashouhin[".listFields"][] = "kinsa_flag";

$tdatashouhin[".hideMobileList"] = array();


$tdatashouhin[".viewFields"] = array();
$tdatashouhin[".viewFields"][] = "purchase_category";
$tdatashouhin[".viewFields"][] = "mst_business_partner_id";
$tdatashouhin[".viewFields"][] = "commission";
$tdatashouhin[".viewFields"][] = "is_recovery";
$tdatashouhin[".viewFields"][] = "sales_cost";
$tdatashouhin[".viewFields"][] = "sales_date";
$tdatashouhin[".viewFields"][] = "many_product_group_id";
$tdatashouhin[".viewFields"][] = "trading_sort_id";
$tdatashouhin[".viewFields"][] = "market_for_sell";
$tdatashouhin[".viewFields"][] = "date_for_sell";
$tdatashouhin[".viewFields"][] = "slip_number_for_sell";
$tdatashouhin[".viewFields"][] = "date_for_buy";
$tdatashouhin[".viewFields"][] = "market_for_buy";
$tdatashouhin[".viewFields"][] = "slip_number_for_buy";
$tdatashouhin[".viewFields"][] = "Eoc_trader_id_for_sell";
$tdatashouhin[".viewFields"][] = "Eoc_trader_id_for_buy";
$tdatashouhin[".viewFields"][] = "slip_type";
$tdatashouhin[".viewFields"][] = "price_without_tax";
$tdatashouhin[".viewFields"][] = "kinsa_flag";
$tdatashouhin[".viewFields"][] = "identification_cost";
$tdatashouhin[".viewFields"][] = "other_cost";
$tdatashouhin[".viewFields"][] = "meisai_number";
$tdatashouhin[".viewFields"][] = "chohyo_id";
$tdatashouhin[".viewFields"][] = "itaku_flag";
$tdatashouhin[".viewFields"][] = "unit";
$tdatashouhin[".viewFields"][] = "shape_supplement";
$tdatashouhin[".viewFields"][] = "product_style";
$tdatashouhin[".viewFields"][] = "price_for_site_flag";
$tdatashouhin[".viewFields"][] = "satei_error";
$tdatashouhin[".viewFields"][] = "producing_area";
$tdatashouhin[".viewFields"][] = "amount";
$tdatashouhin[".viewFields"][] = "number_of_stones";
$tdatashouhin[".viewFields"][] = "chain_type";
$tdatashouhin[".viewFields"][] = "cutting_style";
$tdatashouhin[".viewFields"][] = "shape";
$tdatashouhin[".viewFields"][] = "effect";
$tdatashouhin[".viewFields"][] = "hahakai";
$tdatashouhin[".viewFields"][] = "designer";
$tdatashouhin[".viewFields"][] = "errors";
$tdatashouhin[".viewFields"][] = "guarantee";
$tdatashouhin[".viewFields"][] = "zipper";
$tdatashouhin[".viewFields"][] = "country_of_origin";
$tdatashouhin[".viewFields"][] = "parts";
$tdatashouhin[".viewFields"][] = "logo";
$tdatashouhin[".viewFields"][] = "goods_title";
$tdatashouhin[".viewFields"][] = "y_preview";
$tdatashouhin[".viewFields"][] = "price_for_site";
$tdatashouhin[".viewFields"][] = "ecc_seq";
$tdatashouhin[".viewFields"][] = "status";
$tdatashouhin[".viewFields"][] = "satei_by";
$tdatashouhin[".viewFields"][] = "category_id";
$tdatashouhin[".viewFields"][] = "sub_category_id1";
$tdatashouhin[".viewFields"][] = "product_id";
$tdatashouhin[".viewFields"][] = "yahoo_sinaban";
$tdatashouhin[".viewFields"][] = "price";
$tdatashouhin[".viewFields"][] = "sales_price";
$tdatashouhin[".viewFields"][] = "yahoo_sex";
$tdatashouhin[".viewFields"][] = "product_num";
$tdatashouhin[".viewFields"][] = "description";
$tdatashouhin[".viewFields"][] = "yahoo_kataban";
$tdatashouhin[".viewFields"][] = "serial_number";
$tdatashouhin[".viewFields"][] = "serial_number_for_storage";
$tdatashouhin[".viewFields"][] = "yahoo_sozai";
$tdatashouhin[".viewFields"][] = "yahoo_condition2";
$tdatashouhin[".viewFields"][] = "stamp";

$tdatashouhin[".addFields"] = array();
$tdatashouhin[".addFields"][] = "other_cost";
$tdatashouhin[".addFields"][] = "identification_cost";
$tdatashouhin[".addFields"][] = "kinsa_flag";
$tdatashouhin[".addFields"][] = "Eoc_trader_id_for_buy";
$tdatashouhin[".addFields"][] = "Eoc_trader_id_for_sell";
$tdatashouhin[".addFields"][] = "purchase_category";
$tdatashouhin[".addFields"][] = "commission";
$tdatashouhin[".addFields"][] = "sales_cost";
$tdatashouhin[".addFields"][] = "tentou_label_output_flag";
$tdatashouhin[".addFields"][] = "itaku_flag";
$tdatashouhin[".addFields"][] = "label_output_flag";
$tdatashouhin[".addFields"][] = "meisai_number";
$tdatashouhin[".addFields"][] = "chohyo_id";
$tdatashouhin[".addFields"][] = "unit";
$tdatashouhin[".addFields"][] = "shape_supplement";
$tdatashouhin[".addFields"][] = "product_style";
$tdatashouhin[".addFields"][] = "price_for_site_flag";
$tdatashouhin[".addFields"][] = "designer";
$tdatashouhin[".addFields"][] = "producing_area";
$tdatashouhin[".addFields"][] = "amount";
$tdatashouhin[".addFields"][] = "number_of_stones";
$tdatashouhin[".addFields"][] = "chain_type";
$tdatashouhin[".addFields"][] = "satei_error";
$tdatashouhin[".addFields"][] = "cutting_style";
$tdatashouhin[".addFields"][] = "shape";
$tdatashouhin[".addFields"][] = "effect";
$tdatashouhin[".addFields"][] = "hahakai";
$tdatashouhin[".addFields"][] = "goods_title";
$tdatashouhin[".addFields"][] = "yahoo_sankou_uwadai";
$tdatashouhin[".addFields"][] = "price_for_site";
$tdatashouhin[".addFields"][] = "status";
$tdatashouhin[".addFields"][] = "satei_by";
$tdatashouhin[".addFields"][] = "category_id";
$tdatashouhin[".addFields"][] = "title";
$tdatashouhin[".addFields"][] = "sub_category_id1";
$tdatashouhin[".addFields"][] = "price";
$tdatashouhin[".addFields"][] = "cost";
$tdatashouhin[".addFields"][] = "sales_price";
$tdatashouhin[".addFields"][] = "yahoo_sex";
$tdatashouhin[".addFields"][] = "product_num";
$tdatashouhin[".addFields"][] = "updated_at";
$tdatashouhin[".addFields"][] = "description";
$tdatashouhin[".addFields"][] = "yahoo_kataban";
$tdatashouhin[".addFields"][] = "serial_number";
$tdatashouhin[".addFields"][] = "yahoo_sozai";
$tdatashouhin[".addFields"][] = "yahoo_condition2";
$tdatashouhin[".addFields"][] = "yahoo_saisun_sha";
$tdatashouhin[".addFields"][] = "box_id";
$tdatashouhin[".addFields"][] = "nyuukin_price";
$tdatashouhin[".addFields"][] = "updated_by";
$tdatashouhin[".addFields"][] = "stamp";
$tdatashouhin[".addFields"][] = "processing";
$tdatashouhin[".addFields"][] = "Sleeve_Length";
$tdatashouhin[".addFields"][] = "saisun_start";
$tdatashouhin[".addFields"][] = "length";
$tdatashouhin[".addFields"][] = "saisun_end";
$tdatashouhin[".addFields"][] = "Ring_size";
$tdatashouhin[".addFields"][] = "kanryou_henbi";
$tdatashouhin[".addFields"][] = "kaitori_by";
$tdatashouhin[".addFields"][] = "comment";
$tdatashouhin[".addFields"][] = "satei_hi";
$tdatashouhin[".addFields"][] = "kaitory_hi";
$tdatashouhin[".addFields"][] = "DT_UP_DATE";
$tdatashouhin[".addFields"][] = "REG_PHOTOGRAPHER";
$tdatashouhin[".addFields"][] = "REG_AUTHOR";
$tdatashouhin[".addFields"][] = "REG_PACKINGS";
$tdatashouhin[".addFields"][] = "REG_KAKOU_DATE";
$tdatashouhin[".addFields"][] = "REG_KAKOU";
$tdatashouhin[".addFields"][] = "REG_PHOTOGRAPHER_DATE";
$tdatashouhin[".addFields"][] = "DT_PACKING_DATE";
$tdatashouhin[".addFields"][] = "AWAZU_DATE";
$tdatashouhin[".addFields"][] = "AWAZU_NIN";
$tdatashouhin[".addFields"][] = "sabun_date";
$tdatashouhin[".addFields"][] = "browseid";
$tdatashouhin[".addFields"][] = "browsenode";
$tdatashouhin[".addFields"][] = "gold_property";
$tdatashouhin[".addFields"][] = "ichiba_title";
$tdatashouhin[".addFields"][] = "Gram";
$tdatashouhin[".addFields"][] = "Parent_stone";
$tdatashouhin[".addFields"][] = "Aside_stone";
$tdatashouhin[".addFields"][] = "Appraiser";
$tdatashouhin[".addFields"][] = "Remarks";
$tdatashouhin[".addFields"][] = "Destination_selling";
$tdatashouhin[".addFields"][] = "Finish";
$tdatashouhin[".addFields"][] = "Discrimination";
$tdatashouhin[".addFields"][] = "accessories";
$tdatashouhin[".addFields"][] = "priority";
$tdatashouhin[".addFields"][] = "A_storage";
$tdatashouhin[".addFields"][] = "price_per_gram";
$tdatashouhin[".addFields"][] = "price_per_parent_stone";
$tdatashouhin[".addFields"][] = "price_per_aside_stone";
$tdatashouhin[".addFields"][] = "line";
$tdatashouhin[".addFields"][] = "item_name";
$tdatashouhin[".addFields"][] = "Exhibition_Date";
$tdatashouhin[".addFields"][] = "motif";
$tdatashouhin[".addFields"][] = "Setting";

$tdatashouhin[".masterListFields"] = array();
$tdatashouhin[".masterListFields"][] = "y_preview";
$tdatashouhin[".masterListFields"][] = "link_id";
$tdatashouhin[".masterListFields"][] = "title2";
$tdatashouhin[".masterListFields"][] = "title3";
$tdatashouhin[".masterListFields"][] = "sagaku_price";
$tdatashouhin[".masterListFields"][] = "saisun_time";
$tdatashouhin[".masterListFields"][] = "price_for_site";
$tdatashouhin[".masterListFields"][] = "ecc_seq";
$tdatashouhin[".masterListFields"][] = "goods_title";
$tdatashouhin[".masterListFields"][] = "registerd_id";
$tdatashouhin[".masterListFields"][] = "yahoo_sankou_uwadai";
$tdatashouhin[".masterListFields"][] = "FLAG_NO_ARRIVAL";
$tdatashouhin[".masterListFields"][] = "logo";
$tdatashouhin[".masterListFields"][] = "parts";
$tdatashouhin[".masterListFields"][] = "country_of_origin";
$tdatashouhin[".masterListFields"][] = "zipper";
$tdatashouhin[".masterListFields"][] = "guarantee";
$tdatashouhin[".masterListFields"][] = "errors";
$tdatashouhin[".masterListFields"][] = "designer";
$tdatashouhin[".masterListFields"][] = "hahakai";
$tdatashouhin[".masterListFields"][] = "effect";
$tdatashouhin[".masterListFields"][] = "shape";
$tdatashouhin[".masterListFields"][] = "cutting_style";
$tdatashouhin[".masterListFields"][] = "chain_type";
$tdatashouhin[".masterListFields"][] = "number_of_stones";
$tdatashouhin[".masterListFields"][] = "amount";
$tdatashouhin[".masterListFields"][] = "producing_area";
$tdatashouhin[".masterListFields"][] = "satei_error";
$tdatashouhin[".masterListFields"][] = "serial_number_for_storage";
$tdatashouhin[".masterListFields"][] = "price_for_site_flag";
$tdatashouhin[".masterListFields"][] = "Eoc_takuhai_id";
$tdatashouhin[".masterListFields"][] = "Eoc_unfinished_id";
$tdatashouhin[".masterListFields"][] = "Eoc_chigins_unfinished_id";
$tdatashouhin[".masterListFields"][] = "product_style";
$tdatashouhin[".masterListFields"][] = "shape_supplement";
$tdatashouhin[".masterListFields"][] = "unit";
$tdatashouhin[".masterListFields"][] = "chohyo_id";
$tdatashouhin[".masterListFields"][] = "meisai_number";
$tdatashouhin[".masterListFields"][] = "days_keep_price";
$tdatashouhin[".masterListFields"][] = "label_output_flag";
$tdatashouhin[".masterListFields"][] = "zaiko";
$tdatashouhin[".masterListFields"][] = "itaku_flag";
$tdatashouhin[".masterListFields"][] = "category_class";
$tdatashouhin[".masterListFields"][] = "tentou_label_output_flag";
$tdatashouhin[".masterListFields"][] = "gold_check_id";
$tdatashouhin[".masterListFields"][] = "cost";
$tdatashouhin[".masterListFields"][] = "other_cost";
$tdatashouhin[".masterListFields"][] = "identification_cost";
$tdatashouhin[".masterListFields"][] = "kinsa_flag";
$tdatashouhin[".masterListFields"][] = "price_without_tax";
$tdatashouhin[".masterListFields"][] = "slip_type";
$tdatashouhin[".masterListFields"][] = "Eoc_trader_id_for_buy";
$tdatashouhin[".masterListFields"][] = "Eoc_trader_id_for_sell";
$tdatashouhin[".masterListFields"][] = "slip_number_for_buy";
$tdatashouhin[".masterListFields"][] = "market_for_buy";
$tdatashouhin[".masterListFields"][] = "date_for_buy";
$tdatashouhin[".masterListFields"][] = "slip_number_for_sell";
$tdatashouhin[".masterListFields"][] = "market_for_sell";
$tdatashouhin[".masterListFields"][] = "date_for_sell";
$tdatashouhin[".masterListFields"][] = "trading_sort_id";
$tdatashouhin[".masterListFields"][] = "many_product_group_id";
$tdatashouhin[".masterListFields"][] = "destination_sold_out";
$tdatashouhin[".masterListFields"][] = "sales_date";
$tdatashouhin[".masterListFields"][] = "purchase_category";
$tdatashouhin[".masterListFields"][] = "mst_business_partner_id";
$tdatashouhin[".masterListFields"][] = "commission";
$tdatashouhin[".masterListFields"][] = "is_recovery";
$tdatashouhin[".masterListFields"][] = "sales_cost";
$tdatashouhin[".masterListFields"][] = "status";
$tdatashouhin[".masterListFields"][] = "satei_by";
$tdatashouhin[".masterListFields"][] = "category_id";
$tdatashouhin[".masterListFields"][] = "title";
$tdatashouhin[".masterListFields"][] = "sub_category_id1";
$tdatashouhin[".masterListFields"][] = "product_id";
$tdatashouhin[".masterListFields"][] = "ecc_id";
$tdatashouhin[".masterListFields"][] = "yahoo_sinaban";
$tdatashouhin[".masterListFields"][] = "price";
$tdatashouhin[".masterListFields"][] = "sales_price";
$tdatashouhin[".masterListFields"][] = "yahoo_sex";
$tdatashouhin[".masterListFields"][] = "product_num";
$tdatashouhin[".masterListFields"][] = "description";
$tdatashouhin[".masterListFields"][] = "updated_at";
$tdatashouhin[".masterListFields"][] = "yahoo_kataban";
$tdatashouhin[".masterListFields"][] = "serial_number";
$tdatashouhin[".masterListFields"][] = "yahoo_sozai";
$tdatashouhin[".masterListFields"][] = "yahoo_condition2";
$tdatashouhin[".masterListFields"][] = "yahoo_saisun_sha";
$tdatashouhin[".masterListFields"][] = "box_id";
$tdatashouhin[".masterListFields"][] = "nyuukin_price";
$tdatashouhin[".masterListFields"][] = "updated_by";
$tdatashouhin[".masterListFields"][] = "stamp";
$tdatashouhin[".masterListFields"][] = "processing";
$tdatashouhin[".masterListFields"][] = "Sleeve_Length";
$tdatashouhin[".masterListFields"][] = "saisun_start";
$tdatashouhin[".masterListFields"][] = "length";
$tdatashouhin[".masterListFields"][] = "saisun_end";
$tdatashouhin[".masterListFields"][] = "Ring_size";
$tdatashouhin[".masterListFields"][] = "kanryou_henbi";
$tdatashouhin[".masterListFields"][] = "kaitori_by";
$tdatashouhin[".masterListFields"][] = "comment";
$tdatashouhin[".masterListFields"][] = "satei_hi";
$tdatashouhin[".masterListFields"][] = "kaitory_hi";
$tdatashouhin[".masterListFields"][] = "REG_PHOTOGRAPHER";
$tdatashouhin[".masterListFields"][] = "REG_AUTHOR";
$tdatashouhin[".masterListFields"][] = "REG_PACKINGS";
$tdatashouhin[".masterListFields"][] = "REG_KAKOU_DATE";
$tdatashouhin[".masterListFields"][] = "REG_KAKOU";
$tdatashouhin[".masterListFields"][] = "REG_EXHIBITOR";
$tdatashouhin[".masterListFields"][] = "REG_PHOTOGRAPHER_DATE";
$tdatashouhin[".masterListFields"][] = "DT_PACKING_DATE";
$tdatashouhin[".masterListFields"][] = "DT_UP_DATE";
$tdatashouhin[".masterListFields"][] = "AWAZU_DATE";
$tdatashouhin[".masterListFields"][] = "AWAZU_NIN";
$tdatashouhin[".masterListFields"][] = "sabun_date";
$tdatashouhin[".masterListFields"][] = "browseid";
$tdatashouhin[".masterListFields"][] = "browsenode";
$tdatashouhin[".masterListFields"][] = "gold_property";
$tdatashouhin[".masterListFields"][] = "ichiba_title";
$tdatashouhin[".masterListFields"][] = "Gram";
$tdatashouhin[".masterListFields"][] = "Parent_stone";
$tdatashouhin[".masterListFields"][] = "Aside_stone";
$tdatashouhin[".masterListFields"][] = "Appraiser";
$tdatashouhin[".masterListFields"][] = "Remarks";
$tdatashouhin[".masterListFields"][] = "Destination_selling";
$tdatashouhin[".masterListFields"][] = "Finish";
$tdatashouhin[".masterListFields"][] = "Discrimination";
$tdatashouhin[".masterListFields"][] = "accessories";
$tdatashouhin[".masterListFields"][] = "priority";
$tdatashouhin[".masterListFields"][] = "A_storage";
$tdatashouhin[".masterListFields"][] = "price_per_gram";
$tdatashouhin[".masterListFields"][] = "price_per_parent_stone";
$tdatashouhin[".masterListFields"][] = "price_per_aside_stone";
$tdatashouhin[".masterListFields"][] = "line";
$tdatashouhin[".masterListFields"][] = "item_name";
$tdatashouhin[".masterListFields"][] = "Exhibition_Date";
$tdatashouhin[".masterListFields"][] = "motif";
$tdatashouhin[".masterListFields"][] = "Setting";

$tdatashouhin[".inlineAddFields"] = array();
$tdatashouhin[".inlineAddFields"][] = "purchase_category";
$tdatashouhin[".inlineAddFields"][] = "label_output_flag";
$tdatashouhin[".inlineAddFields"][] = "tentou_label_output_flag";
$tdatashouhin[".inlineAddFields"][] = "meisai_number";
$tdatashouhin[".inlineAddFields"][] = "chohyo_id";
$tdatashouhin[".inlineAddFields"][] = "Eoc_trader_id_for_sell";
$tdatashouhin[".inlineAddFields"][] = "status";
$tdatashouhin[".inlineAddFields"][] = "box_id";
$tdatashouhin[".inlineAddFields"][] = "ecc_id";
$tdatashouhin[".inlineAddFields"][] = "sabun_date";
$tdatashouhin[".inlineAddFields"][] = "product_num";
$tdatashouhin[".inlineAddFields"][] = "title";
$tdatashouhin[".inlineAddFields"][] = "category_id";
$tdatashouhin[".inlineAddFields"][] = "sub_category_id1";
$tdatashouhin[".inlineAddFields"][] = "line";
$tdatashouhin[".inlineAddFields"][] = "item_name";
$tdatashouhin[".inlineAddFields"][] = "shape_supplement";
$tdatashouhin[".inlineAddFields"][] = "product_style";
$tdatashouhin[".inlineAddFields"][] = "price";
$tdatashouhin[".inlineAddFields"][] = "commission";
$tdatashouhin[".inlineAddFields"][] = "cost";
$tdatashouhin[".inlineAddFields"][] = "identification_cost";
$tdatashouhin[".inlineAddFields"][] = "other_cost";
$tdatashouhin[".inlineAddFields"][] = "sales_cost";
$tdatashouhin[".inlineAddFields"][] = "sales_price";
$tdatashouhin[".inlineAddFields"][] = "yahoo_sankou_uwadai";
$tdatashouhin[".inlineAddFields"][] = "nyuukin_price";
$tdatashouhin[".inlineAddFields"][] = "description";
$tdatashouhin[".inlineAddFields"][] = "comment";
$tdatashouhin[".inlineAddFields"][] = "serial_number";
$tdatashouhin[".inlineAddFields"][] = "serial_number_for_storage";
$tdatashouhin[".inlineAddFields"][] = "designer";
$tdatashouhin[".inlineAddFields"][] = "goods_title";
$tdatashouhin[".inlineAddFields"][] = "yahoo_sozai";
$tdatashouhin[".inlineAddFields"][] = "amount";
$tdatashouhin[".inlineAddFields"][] = "motif";
$tdatashouhin[".inlineAddFields"][] = "producing_area";
$tdatashouhin[".inlineAddFields"][] = "hahakai";
$tdatashouhin[".inlineAddFields"][] = "effect";
$tdatashouhin[".inlineAddFields"][] = "shape";
$tdatashouhin[".inlineAddFields"][] = "cutting_style";
$tdatashouhin[".inlineAddFields"][] = "Setting";
$tdatashouhin[".inlineAddFields"][] = "processing";
$tdatashouhin[".inlineAddFields"][] = "chain_type";
$tdatashouhin[".inlineAddFields"][] = "Sleeve_Length";
$tdatashouhin[".inlineAddFields"][] = "length";
$tdatashouhin[".inlineAddFields"][] = "yahoo_kataban";
$tdatashouhin[".inlineAddFields"][] = "stamp";
$tdatashouhin[".inlineAddFields"][] = "yahoo_sex";
$tdatashouhin[".inlineAddFields"][] = "yahoo_condition2";
$tdatashouhin[".inlineAddFields"][] = "ichiba_title";
$tdatashouhin[".inlineAddFields"][] = "gold_property";
$tdatashouhin[".inlineAddFields"][] = "Gram";
$tdatashouhin[".inlineAddFields"][] = "unit";
$tdatashouhin[".inlineAddFields"][] = "price_per_gram";
$tdatashouhin[".inlineAddFields"][] = "Parent_stone";
$tdatashouhin[".inlineAddFields"][] = "price_per_parent_stone";
$tdatashouhin[".inlineAddFields"][] = "Aside_stone";
$tdatashouhin[".inlineAddFields"][] = "price_per_aside_stone";
$tdatashouhin[".inlineAddFields"][] = "Appraiser";
$tdatashouhin[".inlineAddFields"][] = "number_of_stones";
$tdatashouhin[".inlineAddFields"][] = "Ring_size";
$tdatashouhin[".inlineAddFields"][] = "Remarks";
$tdatashouhin[".inlineAddFields"][] = "Destination_selling";
$tdatashouhin[".inlineAddFields"][] = "Finish";
$tdatashouhin[".inlineAddFields"][] = "Discrimination";
$tdatashouhin[".inlineAddFields"][] = "accessories";
$tdatashouhin[".inlineAddFields"][] = "priority";
$tdatashouhin[".inlineAddFields"][] = "A_storage";
$tdatashouhin[".inlineAddFields"][] = "itaku_flag";
$tdatashouhin[".inlineAddFields"][] = "browseid";
$tdatashouhin[".inlineAddFields"][] = "browsenode";
$tdatashouhin[".inlineAddFields"][] = "price_for_site";
$tdatashouhin[".inlineAddFields"][] = "price_for_site_flag";
$tdatashouhin[".inlineAddFields"][] = "satei_error";
$tdatashouhin[".inlineAddFields"][] = "kinsa_flag";

$tdatashouhin[".editFields"] = array();
$tdatashouhin[".editFields"][] = "purchase_category";
$tdatashouhin[".editFields"][] = "commission";
$tdatashouhin[".editFields"][] = "sales_cost";
$tdatashouhin[".editFields"][] = "Eoc_trader_id_for_sell";
$tdatashouhin[".editFields"][] = "Eoc_trader_id_for_buy";
$tdatashouhin[".editFields"][] = "other_cost";
$tdatashouhin[".editFields"][] = "kinsa_flag";
$tdatashouhin[".editFields"][] = "identification_cost";
$tdatashouhin[".editFields"][] = "tentou_label_output_flag";
$tdatashouhin[".editFields"][] = "itaku_flag";
$tdatashouhin[".editFields"][] = "label_output_flag";
$tdatashouhin[".editFields"][] = "chohyo_id";
$tdatashouhin[".editFields"][] = "unit";
$tdatashouhin[".editFields"][] = "shape_supplement";
$tdatashouhin[".editFields"][] = "product_style";
$tdatashouhin[".editFields"][] = "meisai_number";
$tdatashouhin[".editFields"][] = "price_for_site_flag";
$tdatashouhin[".editFields"][] = "designer";
$tdatashouhin[".editFields"][] = "producing_area";
$tdatashouhin[".editFields"][] = "amount";
$tdatashouhin[".editFields"][] = "number_of_stones";
$tdatashouhin[".editFields"][] = "chain_type";
$tdatashouhin[".editFields"][] = "satei_error";
$tdatashouhin[".editFields"][] = "cutting_style";
$tdatashouhin[".editFields"][] = "shape";
$tdatashouhin[".editFields"][] = "effect";
$tdatashouhin[".editFields"][] = "hahakai";
$tdatashouhin[".editFields"][] = "goods_title";
$tdatashouhin[".editFields"][] = "yahoo_sankou_uwadai";
$tdatashouhin[".editFields"][] = "price_for_site";
$tdatashouhin[".editFields"][] = "status";
$tdatashouhin[".editFields"][] = "satei_by";
$tdatashouhin[".editFields"][] = "title";
$tdatashouhin[".editFields"][] = "category_id";
$tdatashouhin[".editFields"][] = "sub_category_id1";
$tdatashouhin[".editFields"][] = "price";
$tdatashouhin[".editFields"][] = "cost";
$tdatashouhin[".editFields"][] = "sales_price";
$tdatashouhin[".editFields"][] = "yahoo_sex";
$tdatashouhin[".editFields"][] = "product_num";
$tdatashouhin[".editFields"][] = "updated_at";
$tdatashouhin[".editFields"][] = "description";
$tdatashouhin[".editFields"][] = "yahoo_kataban";
$tdatashouhin[".editFields"][] = "serial_number";
$tdatashouhin[".editFields"][] = "yahoo_sozai";
$tdatashouhin[".editFields"][] = "yahoo_condition2";
$tdatashouhin[".editFields"][] = "stamp";
$tdatashouhin[".editFields"][] = "yahoo_saisun_sha";
$tdatashouhin[".editFields"][] = "box_id";
$tdatashouhin[".editFields"][] = "nyuukin_price";
$tdatashouhin[".editFields"][] = "updated_by";
$tdatashouhin[".editFields"][] = "processing";
$tdatashouhin[".editFields"][] = "Sleeve_Length";
$tdatashouhin[".editFields"][] = "saisun_start";
$tdatashouhin[".editFields"][] = "length";
$tdatashouhin[".editFields"][] = "saisun_end";
$tdatashouhin[".editFields"][] = "Ring_size";
$tdatashouhin[".editFields"][] = "kanryou_henbi";
$tdatashouhin[".editFields"][] = "kaitori_by";
$tdatashouhin[".editFields"][] = "comment";
$tdatashouhin[".editFields"][] = "satei_hi";
$tdatashouhin[".editFields"][] = "kaitory_hi";
$tdatashouhin[".editFields"][] = "REG_PHOTOGRAPHER";
$tdatashouhin[".editFields"][] = "DT_UP_DATE";
$tdatashouhin[".editFields"][] = "REG_AUTHOR";
$tdatashouhin[".editFields"][] = "REG_PACKINGS";
$tdatashouhin[".editFields"][] = "REG_KAKOU_DATE";
$tdatashouhin[".editFields"][] = "REG_KAKOU";
$tdatashouhin[".editFields"][] = "REG_PHOTOGRAPHER_DATE";
$tdatashouhin[".editFields"][] = "DT_PACKING_DATE";
$tdatashouhin[".editFields"][] = "AWAZU_DATE";
$tdatashouhin[".editFields"][] = "AWAZU_NIN";
$tdatashouhin[".editFields"][] = "sabun_date";
$tdatashouhin[".editFields"][] = "browseid";
$tdatashouhin[".editFields"][] = "browsenode";
$tdatashouhin[".editFields"][] = "gold_property";
$tdatashouhin[".editFields"][] = "ichiba_title";
$tdatashouhin[".editFields"][] = "Gram";
$tdatashouhin[".editFields"][] = "Parent_stone";
$tdatashouhin[".editFields"][] = "Aside_stone";
$tdatashouhin[".editFields"][] = "Appraiser";
$tdatashouhin[".editFields"][] = "Remarks";
$tdatashouhin[".editFields"][] = "Destination_selling";
$tdatashouhin[".editFields"][] = "Finish";
$tdatashouhin[".editFields"][] = "Discrimination";
$tdatashouhin[".editFields"][] = "accessories";
$tdatashouhin[".editFields"][] = "priority";
$tdatashouhin[".editFields"][] = "A_storage";
$tdatashouhin[".editFields"][] = "price_per_gram";
$tdatashouhin[".editFields"][] = "price_per_parent_stone";
$tdatashouhin[".editFields"][] = "price_per_aside_stone";
$tdatashouhin[".editFields"][] = "line";
$tdatashouhin[".editFields"][] = "item_name";
$tdatashouhin[".editFields"][] = "Exhibition_Date";
$tdatashouhin[".editFields"][] = "motif";
$tdatashouhin[".editFields"][] = "Setting";

$tdatashouhin[".inlineEditFields"] = array();
$tdatashouhin[".inlineEditFields"][] = "purchase_category";
$tdatashouhin[".inlineEditFields"][] = "label_output_flag";
$tdatashouhin[".inlineEditFields"][] = "tentou_label_output_flag";
$tdatashouhin[".inlineEditFields"][] = "meisai_number";
$tdatashouhin[".inlineEditFields"][] = "chohyo_id";
$tdatashouhin[".inlineEditFields"][] = "gold_check_id";
$tdatashouhin[".inlineEditFields"][] = "Eoc_trader_id_for_sell";
$tdatashouhin[".inlineEditFields"][] = "status";
$tdatashouhin[".inlineEditFields"][] = "box_id";
$tdatashouhin[".inlineEditFields"][] = "ecc_id";
$tdatashouhin[".inlineEditFields"][] = "sabun_date";
$tdatashouhin[".inlineEditFields"][] = "product_num";
$tdatashouhin[".inlineEditFields"][] = "title";
$tdatashouhin[".inlineEditFields"][] = "category_id";
$tdatashouhin[".inlineEditFields"][] = "sub_category_id1";
$tdatashouhin[".inlineEditFields"][] = "line";
$tdatashouhin[".inlineEditFields"][] = "item_name";
$tdatashouhin[".inlineEditFields"][] = "shape_supplement";
$tdatashouhin[".inlineEditFields"][] = "product_style";
$tdatashouhin[".inlineEditFields"][] = "price";
$tdatashouhin[".inlineEditFields"][] = "commission";
$tdatashouhin[".inlineEditFields"][] = "cost";
$tdatashouhin[".inlineEditFields"][] = "identification_cost";
$tdatashouhin[".inlineEditFields"][] = "other_cost";
$tdatashouhin[".inlineEditFields"][] = "sales_cost";
$tdatashouhin[".inlineEditFields"][] = "sales_price";
$tdatashouhin[".inlineEditFields"][] = "yahoo_sankou_uwadai";
$tdatashouhin[".inlineEditFields"][] = "nyuukin_price";
$tdatashouhin[".inlineEditFields"][] = "description";
$tdatashouhin[".inlineEditFields"][] = "comment";
$tdatashouhin[".inlineEditFields"][] = "serial_number";
$tdatashouhin[".inlineEditFields"][] = "serial_number_for_storage";
$tdatashouhin[".inlineEditFields"][] = "designer";
$tdatashouhin[".inlineEditFields"][] = "goods_title";
$tdatashouhin[".inlineEditFields"][] = "yahoo_sozai";
$tdatashouhin[".inlineEditFields"][] = "amount";
$tdatashouhin[".inlineEditFields"][] = "motif";
$tdatashouhin[".inlineEditFields"][] = "producing_area";
$tdatashouhin[".inlineEditFields"][] = "hahakai";
$tdatashouhin[".inlineEditFields"][] = "effect";
$tdatashouhin[".inlineEditFields"][] = "shape";
$tdatashouhin[".inlineEditFields"][] = "cutting_style";
$tdatashouhin[".inlineEditFields"][] = "Setting";
$tdatashouhin[".inlineEditFields"][] = "processing";
$tdatashouhin[".inlineEditFields"][] = "chain_type";
$tdatashouhin[".inlineEditFields"][] = "Sleeve_Length";
$tdatashouhin[".inlineEditFields"][] = "length";
$tdatashouhin[".inlineEditFields"][] = "yahoo_kataban";
$tdatashouhin[".inlineEditFields"][] = "stamp";
$tdatashouhin[".inlineEditFields"][] = "yahoo_sex";
$tdatashouhin[".inlineEditFields"][] = "yahoo_condition2";
$tdatashouhin[".inlineEditFields"][] = "ichiba_title";
$tdatashouhin[".inlineEditFields"][] = "gold_property";
$tdatashouhin[".inlineEditFields"][] = "Gram";
$tdatashouhin[".inlineEditFields"][] = "unit";
$tdatashouhin[".inlineEditFields"][] = "price_per_gram";
$tdatashouhin[".inlineEditFields"][] = "Parent_stone";
$tdatashouhin[".inlineEditFields"][] = "price_per_parent_stone";
$tdatashouhin[".inlineEditFields"][] = "Aside_stone";
$tdatashouhin[".inlineEditFields"][] = "price_per_aside_stone";
$tdatashouhin[".inlineEditFields"][] = "Appraiser";
$tdatashouhin[".inlineEditFields"][] = "number_of_stones";
$tdatashouhin[".inlineEditFields"][] = "Ring_size";
$tdatashouhin[".inlineEditFields"][] = "Remarks";
$tdatashouhin[".inlineEditFields"][] = "Destination_selling";
$tdatashouhin[".inlineEditFields"][] = "Finish";
$tdatashouhin[".inlineEditFields"][] = "Discrimination";
$tdatashouhin[".inlineEditFields"][] = "accessories";
$tdatashouhin[".inlineEditFields"][] = "priority";
$tdatashouhin[".inlineEditFields"][] = "A_storage";
$tdatashouhin[".inlineEditFields"][] = "itaku_flag";
$tdatashouhin[".inlineEditFields"][] = "browseid";
$tdatashouhin[".inlineEditFields"][] = "browsenode";
$tdatashouhin[".inlineEditFields"][] = "price_for_site";
$tdatashouhin[".inlineEditFields"][] = "price_for_site_flag";
$tdatashouhin[".inlineEditFields"][] = "satei_error";
$tdatashouhin[".inlineEditFields"][] = "kinsa_flag";

$tdatashouhin[".updateSelectedFields"] = array();
$tdatashouhin[".updateSelectedFields"][] = "goods_title";
$tdatashouhin[".updateSelectedFields"][] = "price_for_site";
$tdatashouhin[".updateSelectedFields"][] = "status";
$tdatashouhin[".updateSelectedFields"][] = "satei_by";
$tdatashouhin[".updateSelectedFields"][] = "title";
$tdatashouhin[".updateSelectedFields"][] = "category_id";
$tdatashouhin[".updateSelectedFields"][] = "sub_category_id1";
$tdatashouhin[".updateSelectedFields"][] = "price";
$tdatashouhin[".updateSelectedFields"][] = "sales_price";
$tdatashouhin[".updateSelectedFields"][] = "yahoo_sex";
$tdatashouhin[".updateSelectedFields"][] = "product_num";
$tdatashouhin[".updateSelectedFields"][] = "updated_at";
$tdatashouhin[".updateSelectedFields"][] = "description";
$tdatashouhin[".updateSelectedFields"][] = "yahoo_kataban";
$tdatashouhin[".updateSelectedFields"][] = "serial_number";
$tdatashouhin[".updateSelectedFields"][] = "yahoo_sozai";
$tdatashouhin[".updateSelectedFields"][] = "yahoo_condition2";
$tdatashouhin[".updateSelectedFields"][] = "stamp";
$tdatashouhin[".updateSelectedFields"][] = "yahoo_saisun_sha";
$tdatashouhin[".updateSelectedFields"][] = "box_id";
$tdatashouhin[".updateSelectedFields"][] = "nyuukin_price";
$tdatashouhin[".updateSelectedFields"][] = "updated_by";
$tdatashouhin[".updateSelectedFields"][] = "processing";
$tdatashouhin[".updateSelectedFields"][] = "Sleeve_Length";
$tdatashouhin[".updateSelectedFields"][] = "saisun_start";
$tdatashouhin[".updateSelectedFields"][] = "length";
$tdatashouhin[".updateSelectedFields"][] = "saisun_end";
$tdatashouhin[".updateSelectedFields"][] = "Ring_size";
$tdatashouhin[".updateSelectedFields"][] = "kanryou_henbi";
$tdatashouhin[".updateSelectedFields"][] = "kaitori_by";
$tdatashouhin[".updateSelectedFields"][] = "comment";
$tdatashouhin[".updateSelectedFields"][] = "satei_hi";
$tdatashouhin[".updateSelectedFields"][] = "kaitory_hi";
$tdatashouhin[".updateSelectedFields"][] = "REG_PHOTOGRAPHER";
$tdatashouhin[".updateSelectedFields"][] = "REG_AUTHOR";
$tdatashouhin[".updateSelectedFields"][] = "REG_PACKINGS";
$tdatashouhin[".updateSelectedFields"][] = "REG_KAKOU_DATE";
$tdatashouhin[".updateSelectedFields"][] = "REG_KAKOU";
$tdatashouhin[".updateSelectedFields"][] = "REG_PHOTOGRAPHER_DATE";
$tdatashouhin[".updateSelectedFields"][] = "DT_PACKING_DATE";
$tdatashouhin[".updateSelectedFields"][] = "AWAZU_DATE";
$tdatashouhin[".updateSelectedFields"][] = "AWAZU_NIN";
$tdatashouhin[".updateSelectedFields"][] = "sabun_date";
$tdatashouhin[".updateSelectedFields"][] = "browseid";
$tdatashouhin[".updateSelectedFields"][] = "browsenode";
$tdatashouhin[".updateSelectedFields"][] = "gold_property";
$tdatashouhin[".updateSelectedFields"][] = "ichiba_title";
$tdatashouhin[".updateSelectedFields"][] = "Gram";
$tdatashouhin[".updateSelectedFields"][] = "Parent_stone";
$tdatashouhin[".updateSelectedFields"][] = "Aside_stone";
$tdatashouhin[".updateSelectedFields"][] = "Appraiser";
$tdatashouhin[".updateSelectedFields"][] = "Remarks";
$tdatashouhin[".updateSelectedFields"][] = "Destination_selling";
$tdatashouhin[".updateSelectedFields"][] = "Finish";
$tdatashouhin[".updateSelectedFields"][] = "Discrimination";
$tdatashouhin[".updateSelectedFields"][] = "accessories";
$tdatashouhin[".updateSelectedFields"][] = "priority";
$tdatashouhin[".updateSelectedFields"][] = "A_storage";
$tdatashouhin[".updateSelectedFields"][] = "price_per_parent_stone";
$tdatashouhin[".updateSelectedFields"][] = "price_per_aside_stone";
$tdatashouhin[".updateSelectedFields"][] = "line";
$tdatashouhin[".updateSelectedFields"][] = "item_name";
$tdatashouhin[".updateSelectedFields"][] = "Exhibition_Date";
$tdatashouhin[".updateSelectedFields"][] = "motif";
$tdatashouhin[".updateSelectedFields"][] = "Setting";


$tdatashouhin[".exportFields"] = array();
$tdatashouhin[".exportFields"][] = "ecc_id";
$tdatashouhin[".exportFields"][] = "ecc_seq";
$tdatashouhin[".exportFields"][] = "Eoc_unfinished_id";
$tdatashouhin[".exportFields"][] = "Eoc_takuhai_id";
$tdatashouhin[".exportFields"][] = "mst_business_partner_id";
$tdatashouhin[".exportFields"][] = "category_class";
$tdatashouhin[".exportFields"][] = "product_id";
$tdatashouhin[".exportFields"][] = "status";
$tdatashouhin[".exportFields"][] = "product_num";
$tdatashouhin[".exportFields"][] = "category_id";
$tdatashouhin[".exportFields"][] = "sub_category_id1";
$tdatashouhin[".exportFields"][] = "satei_by";
$tdatashouhin[".exportFields"][] = "purchase_category";
$tdatashouhin[".exportFields"][] = "yahoo_sex";
$tdatashouhin[".exportFields"][] = "price";
$tdatashouhin[".exportFields"][] = "price_without_tax";
$tdatashouhin[".exportFields"][] = "commission";
$tdatashouhin[".exportFields"][] = "cost";
$tdatashouhin[".exportFields"][] = "identification_cost";
$tdatashouhin[".exportFields"][] = "other_cost";
$tdatashouhin[".exportFields"][] = "sales_cost";
$tdatashouhin[".exportFields"][] = "sales_price";
$tdatashouhin[".exportFields"][] = "nyuukin_price";
$tdatashouhin[".exportFields"][] = "price_for_site_flag";
$tdatashouhin[".exportFields"][] = "price_for_site";
$tdatashouhin[".exportFields"][] = "comment";
$tdatashouhin[".exportFields"][] = "description";
$tdatashouhin[".exportFields"][] = "satei_hi";
$tdatashouhin[".exportFields"][] = "REG_AUTHOR";
$tdatashouhin[".exportFields"][] = "DT_UP_DATE";
$tdatashouhin[".exportFields"][] = "kaitori_by";
$tdatashouhin[".exportFields"][] = "kaitory_hi";
$tdatashouhin[".exportFields"][] = "AWAZU_NIN";
$tdatashouhin[".exportFields"][] = "AWAZU_DATE";
$tdatashouhin[".exportFields"][] = "updated_by";
$tdatashouhin[".exportFields"][] = "updated_at";
$tdatashouhin[".exportFields"][] = "kanryou_henbi";
$tdatashouhin[".exportFields"][] = "many_product_group_id";
$tdatashouhin[".exportFields"][] = "date_for_buy";
$tdatashouhin[".exportFields"][] = "market_for_buy";
$tdatashouhin[".exportFields"][] = "slip_number_for_buy";
$tdatashouhin[".exportFields"][] = "Eoc_trader_id_for_sell";
$tdatashouhin[".exportFields"][] = "Eoc_trader_id_for_buy";
$tdatashouhin[".exportFields"][] = "sales_date";
$tdatashouhin[".exportFields"][] = "trading_sort_id";
$tdatashouhin[".exportFields"][] = "date_for_sell";
$tdatashouhin[".exportFields"][] = "market_for_sell";
$tdatashouhin[".exportFields"][] = "slip_number_for_sell";
$tdatashouhin[".exportFields"][] = "kinsa_flag";
$tdatashouhin[".exportFields"][] = "label_output_flag";
$tdatashouhin[".exportFields"][] = "tentou_label_output_flag";
$tdatashouhin[".exportFields"][] = "meisai_number";
$tdatashouhin[".exportFields"][] = "chohyo_id";
$tdatashouhin[".exportFields"][] = "gold_check_id";
$tdatashouhin[".exportFields"][] = "slip_type";
$tdatashouhin[".exportFields"][] = "yahoo_sinaban";
$tdatashouhin[".exportFields"][] = "title";
$tdatashouhin[".exportFields"][] = "sabun_date";
$tdatashouhin[".exportFields"][] = "logo";
$tdatashouhin[".exportFields"][] = "parts";
$tdatashouhin[".exportFields"][] = "country_of_origin";
$tdatashouhin[".exportFields"][] = "serial_number";
$tdatashouhin[".exportFields"][] = "serial_number_for_storage";
$tdatashouhin[".exportFields"][] = "zipper";
$tdatashouhin[".exportFields"][] = "guarantee";
$tdatashouhin[".exportFields"][] = "designer";
$tdatashouhin[".exportFields"][] = "line";
$tdatashouhin[".exportFields"][] = "item_name";
$tdatashouhin[".exportFields"][] = "shape_supplement";
$tdatashouhin[".exportFields"][] = "product_style";
$tdatashouhin[".exportFields"][] = "yahoo_sozai";
$tdatashouhin[".exportFields"][] = "amount";
$tdatashouhin[".exportFields"][] = "motif";
$tdatashouhin[".exportFields"][] = "producing_area";
$tdatashouhin[".exportFields"][] = "hahakai";
$tdatashouhin[".exportFields"][] = "effect";
$tdatashouhin[".exportFields"][] = "shape";
$tdatashouhin[".exportFields"][] = "cutting_style";
$tdatashouhin[".exportFields"][] = "Setting";
$tdatashouhin[".exportFields"][] = "processing";
$tdatashouhin[".exportFields"][] = "chain_type";
$tdatashouhin[".exportFields"][] = "Sleeve_Length";
$tdatashouhin[".exportFields"][] = "length";
$tdatashouhin[".exportFields"][] = "goods_title";
$tdatashouhin[".exportFields"][] = "yahoo_kataban";
$tdatashouhin[".exportFields"][] = "stamp";
$tdatashouhin[".exportFields"][] = "yahoo_condition2";
$tdatashouhin[".exportFields"][] = "ichiba_title";
$tdatashouhin[".exportFields"][] = "gold_property";
$tdatashouhin[".exportFields"][] = "Gram";
$tdatashouhin[".exportFields"][] = "unit";
$tdatashouhin[".exportFields"][] = "price_per_gram";
$tdatashouhin[".exportFields"][] = "Parent_stone";
$tdatashouhin[".exportFields"][] = "price_per_parent_stone";
$tdatashouhin[".exportFields"][] = "Aside_stone";
$tdatashouhin[".exportFields"][] = "price_per_aside_stone";
$tdatashouhin[".exportFields"][] = "Appraiser";
$tdatashouhin[".exportFields"][] = "number_of_stones";
$tdatashouhin[".exportFields"][] = "Ring_size";
$tdatashouhin[".exportFields"][] = "Remarks";
$tdatashouhin[".exportFields"][] = "Destination_selling";
$tdatashouhin[".exportFields"][] = "Finish";
$tdatashouhin[".exportFields"][] = "Discrimination";
$tdatashouhin[".exportFields"][] = "accessories";
$tdatashouhin[".exportFields"][] = "priority";
$tdatashouhin[".exportFields"][] = "A_storage";
$tdatashouhin[".exportFields"][] = "itaku_flag";
$tdatashouhin[".exportFields"][] = "FLAG_NO_ARRIVAL";
$tdatashouhin[".exportFields"][] = "registerd_id";
$tdatashouhin[".exportFields"][] = "sagaku_price";
$tdatashouhin[".exportFields"][] = "yahoo_sankou_uwadai";
$tdatashouhin[".exportFields"][] = "yahoo_saisun_sha";
$tdatashouhin[".exportFields"][] = "saisun_start";
$tdatashouhin[".exportFields"][] = "saisun_end";
$tdatashouhin[".exportFields"][] = "saisun_time";
$tdatashouhin[".exportFields"][] = "REG_PHOTOGRAPHER";
$tdatashouhin[".exportFields"][] = "REG_PHOTOGRAPHER_DATE";
$tdatashouhin[".exportFields"][] = "REG_KAKOU";
$tdatashouhin[".exportFields"][] = "REG_KAKOU_DATE";
$tdatashouhin[".exportFields"][] = "REG_PACKINGS";
$tdatashouhin[".exportFields"][] = "DT_PACKING_DATE";
$tdatashouhin[".exportFields"][] = "REG_EXHIBITOR";
$tdatashouhin[".exportFields"][] = "Exhibition_Date";
$tdatashouhin[".exportFields"][] = "browseid";
$tdatashouhin[".exportFields"][] = "browsenode";
$tdatashouhin[".exportFields"][] = "errors";
$tdatashouhin[".exportFields"][] = "satei_error";
$tdatashouhin[".exportFields"][] = "is_recovery";

$tdatashouhin[".importFields"] = array();
$tdatashouhin[".importFields"][] = "status";
$tdatashouhin[".importFields"][] = "product_id";
$tdatashouhin[".importFields"][] = "ecc_id";
$tdatashouhin[".importFields"][] = "yahoo_sinaban";
$tdatashouhin[".importFields"][] = "sabun_date";
$tdatashouhin[".importFields"][] = "product_num";
$tdatashouhin[".importFields"][] = "title";
$tdatashouhin[".importFields"][] = "line";
$tdatashouhin[".importFields"][] = "item_name";
$tdatashouhin[".importFields"][] = "yahoo_sozai";
$tdatashouhin[".importFields"][] = "motif";
$tdatashouhin[".importFields"][] = "Setting";
$tdatashouhin[".importFields"][] = "processing";
$tdatashouhin[".importFields"][] = "Sleeve_Length";
$tdatashouhin[".importFields"][] = "length";
$tdatashouhin[".importFields"][] = "yahoo_kataban";
$tdatashouhin[".importFields"][] = "serial_number";
$tdatashouhin[".importFields"][] = "stamp";
$tdatashouhin[".importFields"][] = "category_id";
$tdatashouhin[".importFields"][] = "sub_category_id1";
$tdatashouhin[".importFields"][] = "yahoo_sex";
$tdatashouhin[".importFields"][] = "yahoo_condition2";
$tdatashouhin[".importFields"][] = "ichiba_title";
$tdatashouhin[".importFields"][] = "gold_property";
$tdatashouhin[".importFields"][] = "Gram";
$tdatashouhin[".importFields"][] = "price_per_gram";
$tdatashouhin[".importFields"][] = "Parent_stone";
$tdatashouhin[".importFields"][] = "price_per_parent_stone";
$tdatashouhin[".importFields"][] = "Aside_stone";
$tdatashouhin[".importFields"][] = "price_per_aside_stone";
$tdatashouhin[".importFields"][] = "Appraiser";
$tdatashouhin[".importFields"][] = "Ring_size";
$tdatashouhin[".importFields"][] = "Remarks";
$tdatashouhin[".importFields"][] = "Destination_selling";
$tdatashouhin[".importFields"][] = "Finish";
$tdatashouhin[".importFields"][] = "Discrimination";
$tdatashouhin[".importFields"][] = "accessories";
$tdatashouhin[".importFields"][] = "priority";
$tdatashouhin[".importFields"][] = "A_storage";
$tdatashouhin[".importFields"][] = "price";
$tdatashouhin[".importFields"][] = "sales_price";
$tdatashouhin[".importFields"][] = "sagaku_price";
$tdatashouhin[".importFields"][] = "comment";
$tdatashouhin[".importFields"][] = "description";
$tdatashouhin[".importFields"][] = "nyuukin_price";
$tdatashouhin[".importFields"][] = "satei_by";
$tdatashouhin[".importFields"][] = "satei_hi";
$tdatashouhin[".importFields"][] = "REG_AUTHOR";
$tdatashouhin[".importFields"][] = "DT_UP_DATE";
$tdatashouhin[".importFields"][] = "kaitori_by";
$tdatashouhin[".importFields"][] = "kaitory_hi";
$tdatashouhin[".importFields"][] = "yahoo_saisun_sha";
$tdatashouhin[".importFields"][] = "saisun_start";
$tdatashouhin[".importFields"][] = "saisun_end";
$tdatashouhin[".importFields"][] = "REG_PHOTOGRAPHER";
$tdatashouhin[".importFields"][] = "REG_PHOTOGRAPHER_DATE";
$tdatashouhin[".importFields"][] = "REG_KAKOU";
$tdatashouhin[".importFields"][] = "REG_KAKOU_DATE";
$tdatashouhin[".importFields"][] = "REG_PACKINGS";
$tdatashouhin[".importFields"][] = "DT_PACKING_DATE";
$tdatashouhin[".importFields"][] = "AWAZU_NIN";
$tdatashouhin[".importFields"][] = "AWAZU_DATE";
$tdatashouhin[".importFields"][] = "REG_EXHIBITOR";
$tdatashouhin[".importFields"][] = "Exhibition_Date";
$tdatashouhin[".importFields"][] = "updated_by";
$tdatashouhin[".importFields"][] = "updated_at";
$tdatashouhin[".importFields"][] = "kanryou_henbi";
$tdatashouhin[".importFields"][] = "browseid";
$tdatashouhin[".importFields"][] = "browsenode";
$tdatashouhin[".importFields"][] = "price_for_site";
$tdatashouhin[".importFields"][] = "ecc_seq";
$tdatashouhin[".importFields"][] = "goods_title";
$tdatashouhin[".importFields"][] = "registerd_id";
$tdatashouhin[".importFields"][] = "yahoo_sankou_uwadai";
$tdatashouhin[".importFields"][] = "FLAG_NO_ARRIVAL";
$tdatashouhin[".importFields"][] = "logo";
$tdatashouhin[".importFields"][] = "parts";
$tdatashouhin[".importFields"][] = "country_of_origin";
$tdatashouhin[".importFields"][] = "zipper";
$tdatashouhin[".importFields"][] = "guarantee";
$tdatashouhin[".importFields"][] = "errors";
$tdatashouhin[".importFields"][] = "designer";
$tdatashouhin[".importFields"][] = "hahakai";
$tdatashouhin[".importFields"][] = "effect";
$tdatashouhin[".importFields"][] = "shape";
$tdatashouhin[".importFields"][] = "cutting_style";
$tdatashouhin[".importFields"][] = "chain_type";
$tdatashouhin[".importFields"][] = "number_of_stones";
$tdatashouhin[".importFields"][] = "amount";
$tdatashouhin[".importFields"][] = "producing_area";
$tdatashouhin[".importFields"][] = "satei_error";
$tdatashouhin[".importFields"][] = "serial_number_for_storage";
$tdatashouhin[".importFields"][] = "price_for_site_flag";
$tdatashouhin[".importFields"][] = "product_style";
$tdatashouhin[".importFields"][] = "shape_supplement";
$tdatashouhin[".importFields"][] = "unit";
$tdatashouhin[".importFields"][] = "chohyo_id";
$tdatashouhin[".importFields"][] = "meisai_number";
$tdatashouhin[".importFields"][] = "label_output_flag";
$tdatashouhin[".importFields"][] = "itaku_flag";
$tdatashouhin[".importFields"][] = "tentou_label_output_flag";
$tdatashouhin[".importFields"][] = "gold_check_id";
$tdatashouhin[".importFields"][] = "cost";
$tdatashouhin[".importFields"][] = "other_cost";
$tdatashouhin[".importFields"][] = "identification_cost";
$tdatashouhin[".importFields"][] = "kinsa_flag";
$tdatashouhin[".importFields"][] = "price_without_tax";
$tdatashouhin[".importFields"][] = "Eoc_trader_id_for_buy";
$tdatashouhin[".importFields"][] = "Eoc_trader_id_for_sell";
$tdatashouhin[".importFields"][] = "slip_number_for_buy";
$tdatashouhin[".importFields"][] = "market_for_buy";
$tdatashouhin[".importFields"][] = "date_for_buy";
$tdatashouhin[".importFields"][] = "slip_number_for_sell";
$tdatashouhin[".importFields"][] = "market_for_sell";
$tdatashouhin[".importFields"][] = "date_for_sell";
$tdatashouhin[".importFields"][] = "trading_sort_id";
$tdatashouhin[".importFields"][] = "many_product_group_id";
$tdatashouhin[".importFields"][] = "purchase_category";
$tdatashouhin[".importFields"][] = "mst_business_partner_id";
$tdatashouhin[".importFields"][] = "commission";
$tdatashouhin[".importFields"][] = "is_recovery";
$tdatashouhin[".importFields"][] = "sales_cost";

$tdatashouhin[".printFields"] = array();
$tdatashouhin[".printFields"][] = "purchase_category";
$tdatashouhin[".printFields"][] = "mst_business_partner_id";
$tdatashouhin[".printFields"][] = "commission";
$tdatashouhin[".printFields"][] = "is_recovery";
$tdatashouhin[".printFields"][] = "sales_cost";
$tdatashouhin[".printFields"][] = "sales_date";
$tdatashouhin[".printFields"][] = "many_product_group_id";
$tdatashouhin[".printFields"][] = "trading_sort_id";
$tdatashouhin[".printFields"][] = "market_for_sell";
$tdatashouhin[".printFields"][] = "date_for_sell";
$tdatashouhin[".printFields"][] = "slip_number_for_sell";
$tdatashouhin[".printFields"][] = "date_for_buy";
$tdatashouhin[".printFields"][] = "market_for_buy";
$tdatashouhin[".printFields"][] = "slip_number_for_buy";
$tdatashouhin[".printFields"][] = "Eoc_trader_id_for_sell";
$tdatashouhin[".printFields"][] = "Eoc_trader_id_for_buy";
$tdatashouhin[".printFields"][] = "slip_type";
$tdatashouhin[".printFields"][] = "price_without_tax";
$tdatashouhin[".printFields"][] = "kinsa_flag";
$tdatashouhin[".printFields"][] = "identification_cost";
$tdatashouhin[".printFields"][] = "other_cost";
$tdatashouhin[".printFields"][] = "meisai_number";
$tdatashouhin[".printFields"][] = "chohyo_id";
$tdatashouhin[".printFields"][] = "itaku_flag";
$tdatashouhin[".printFields"][] = "unit";
$tdatashouhin[".printFields"][] = "shape_supplement";
$tdatashouhin[".printFields"][] = "product_style";
$tdatashouhin[".printFields"][] = "price_for_site_flag";
$tdatashouhin[".printFields"][] = "satei_error";
$tdatashouhin[".printFields"][] = "producing_area";
$tdatashouhin[".printFields"][] = "amount";
$tdatashouhin[".printFields"][] = "number_of_stones";
$tdatashouhin[".printFields"][] = "chain_type";
$tdatashouhin[".printFields"][] = "cutting_style";
$tdatashouhin[".printFields"][] = "shape";
$tdatashouhin[".printFields"][] = "effect";
$tdatashouhin[".printFields"][] = "hahakai";
$tdatashouhin[".printFields"][] = "designer";
$tdatashouhin[".printFields"][] = "errors";
$tdatashouhin[".printFields"][] = "guarantee";
$tdatashouhin[".printFields"][] = "zipper";
$tdatashouhin[".printFields"][] = "country_of_origin";
$tdatashouhin[".printFields"][] = "parts";
$tdatashouhin[".printFields"][] = "logo";
$tdatashouhin[".printFields"][] = "goods_title";
$tdatashouhin[".printFields"][] = "y_preview";
$tdatashouhin[".printFields"][] = "price_for_site";
$tdatashouhin[".printFields"][] = "ecc_seq";
$tdatashouhin[".printFields"][] = "status";
$tdatashouhin[".printFields"][] = "satei_by";
$tdatashouhin[".printFields"][] = "category_id";
$tdatashouhin[".printFields"][] = "sub_category_id1";
$tdatashouhin[".printFields"][] = "product_id";
$tdatashouhin[".printFields"][] = "yahoo_sinaban";
$tdatashouhin[".printFields"][] = "price";
$tdatashouhin[".printFields"][] = "sales_price";
$tdatashouhin[".printFields"][] = "yahoo_sex";
$tdatashouhin[".printFields"][] = "product_num";
$tdatashouhin[".printFields"][] = "description";
$tdatashouhin[".printFields"][] = "yahoo_kataban";
$tdatashouhin[".printFields"][] = "serial_number";
$tdatashouhin[".printFields"][] = "serial_number_for_storage";
$tdatashouhin[".printFields"][] = "yahoo_sozai";
$tdatashouhin[".printFields"][] = "yahoo_condition2";
$tdatashouhin[".printFields"][] = "stamp";

//	y_preview
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "y_preview";
	$fdata["GoodName"] = "y_preview";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("shouhin","y_preview");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

	
		$fdata["strField"] = "y_preview";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "concat(\"/include/yahoo_template/temp.php?product_id=\", `shouhin`.product_id, \"\")";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Hyperlink");

	
	
	
	
				$vdata["hlNewWindow"] = true;
	$vdata["hlType"] = 1;
	$vdata["hlLinkWordNameType"] = "Text";
	$vdata["hlLinkWordText"] = "プレビュー";
	$vdata["hlTitleField"] = "";

	
	
	
	
	
	
	
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








	$tdatashouhin["y_preview"] = $fdata;
//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin","status");
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




	$tdatashouhin["status"] = $fdata;
//	link_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "link_id";
	$fdata["GoodName"] = "link_id";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin","link_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "box_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`box_id`";

	
	
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








	$tdatashouhin["link_id"] = $fdata;
//	box_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "box_id";
	$fdata["GoodName"] = "box_id";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin","box_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "box_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`box_id`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatashouhin["box_id"] = $fdata;
//	product_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "product_id";
	$fdata["GoodName"] = "product_id";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin","product_id");
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




	$tdatashouhin["product_id"] = $fdata;
//	ecc_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "ecc_id";
	$fdata["GoodName"] = "ecc_id";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin","ecc_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
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




	$tdatashouhin["ecc_id"] = $fdata;
//	yahoo_sinaban
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "yahoo_sinaban";
	$fdata["GoodName"] = "yahoo_sinaban";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin","yahoo_sinaban");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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




	$tdatashouhin["yahoo_sinaban"] = $fdata;
//	sabun_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "sabun_date";
	$fdata["GoodName"] = "sabun_date";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("shouhin","sabun_date");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "sabun_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DATEDIFF(shouhin.kanryou_henbi, shouhin.DT_UP_DATE)";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatashouhin["sabun_date"] = $fdata;
//	product_num
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "product_num";
	$fdata["GoodName"] = "product_num";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin","product_num");
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatashouhin["product_num"] = $fdata;
//	title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "title";
	$fdata["GoodName"] = "title";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin","title");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
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




	$tdatashouhin["title"] = $fdata;
//	title2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "title2";
	$fdata["GoodName"] = "title2";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin","title2");
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




	$tdatashouhin["title2"] = $fdata;
//	title3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "title3";
	$fdata["GoodName"] = "title3";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin","title3");
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




	$tdatashouhin["title3"] = $fdata;
//	line
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "line";
	$fdata["GoodName"] = "line";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin","line");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


	
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




	$tdatashouhin["line"] = $fdata;
//	item_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "item_name";
	$fdata["GoodName"] = "item_name";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin","item_name");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


	
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




	$tdatashouhin["item_name"] = $fdata;
//	yahoo_sozai
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "yahoo_sozai";
	$fdata["GoodName"] = "yahoo_sozai";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin","yahoo_sozai");
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




	$tdatashouhin["yahoo_sozai"] = $fdata;
//	motif
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "motif";
	$fdata["GoodName"] = "motif";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin","motif");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


	
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




	$tdatashouhin["motif"] = $fdata;
//	Setting
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "Setting";
	$fdata["GoodName"] = "Setting";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin","Setting");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


	
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




	$tdatashouhin["Setting"] = $fdata;
//	processing
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "processing";
	$fdata["GoodName"] = "processing";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin","processing");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


	
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




	$tdatashouhin["processing"] = $fdata;
//	Sleeve_Length
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "Sleeve_Length";
	$fdata["GoodName"] = "Sleeve_Length";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin","Sleeve_Length");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


	
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




	$tdatashouhin["Sleeve_Length"] = $fdata;
//	length
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "length";
	$fdata["GoodName"] = "length";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin","length");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


	
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




	$tdatashouhin["length"] = $fdata;
//	yahoo_kataban
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "yahoo_kataban";
	$fdata["GoodName"] = "yahoo_kataban";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin","yahoo_kataban");
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




	$tdatashouhin["yahoo_kataban"] = $fdata;
//	serial_number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "serial_number";
	$fdata["GoodName"] = "serial_number";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin","serial_number");
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




	$tdatashouhin["serial_number"] = $fdata;
//	stamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "stamp";
	$fdata["GoodName"] = "stamp";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin","stamp");
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




	$tdatashouhin["stamp"] = $fdata;
//	category_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "category_id";
	$fdata["GoodName"] = "category_id";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin","category_id");
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




	$tdatashouhin["category_id"] = $fdata;
//	sub_category_id1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "sub_category_id1";
	$fdata["GoodName"] = "sub_category_id1";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin","sub_category_id1");
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




	$tdatashouhin["sub_category_id1"] = $fdata;
//	yahoo_sex
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "yahoo_sex";
	$fdata["GoodName"] = "yahoo_sex";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin","yahoo_sex");
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




	$tdatashouhin["yahoo_sex"] = $fdata;
//	yahoo_condition2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "yahoo_condition2";
	$fdata["GoodName"] = "yahoo_condition2";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin","yahoo_condition2");
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




	$tdatashouhin["yahoo_condition2"] = $fdata;
//	ichiba_title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "ichiba_title";
	$fdata["GoodName"] = "ichiba_title";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin","ichiba_title");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


	
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




	$tdatashouhin["ichiba_title"] = $fdata;
//	gold_property
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "gold_property";
	$fdata["GoodName"] = "gold_property";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin","gold_property");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


	
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




	$tdatashouhin["gold_property"] = $fdata;
//	Gram
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "Gram";
	$fdata["GoodName"] = "Gram";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin","Gram");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


	
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




	$tdatashouhin["Gram"] = $fdata;
//	price_per_gram
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "price_per_gram";
	$fdata["GoodName"] = "price_per_gram";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin","price_per_gram");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

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




	$tdatashouhin["price_per_gram"] = $fdata;
//	Parent_stone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "Parent_stone";
	$fdata["GoodName"] = "Parent_stone";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin","Parent_stone");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatashouhin["Parent_stone"] = $fdata;
//	price_per_parent_stone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "price_per_parent_stone";
	$fdata["GoodName"] = "price_per_parent_stone";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin","price_per_parent_stone");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


	
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




	$tdatashouhin["price_per_parent_stone"] = $fdata;
//	Aside_stone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "Aside_stone";
	$fdata["GoodName"] = "Aside_stone";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin","Aside_stone");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


	
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




	$tdatashouhin["Aside_stone"] = $fdata;
//	price_per_aside_stone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "price_per_aside_stone";
	$fdata["GoodName"] = "price_per_aside_stone";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin","price_per_aside_stone");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


	
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




	$tdatashouhin["price_per_aside_stone"] = $fdata;
//	Appraiser
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "Appraiser";
	$fdata["GoodName"] = "Appraiser";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin","Appraiser");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


	
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




	$tdatashouhin["Appraiser"] = $fdata;
//	Ring_size
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "Ring_size";
	$fdata["GoodName"] = "Ring_size";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin","Ring_size");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


	
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




	$tdatashouhin["Ring_size"] = $fdata;
//	Remarks
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "Remarks";
	$fdata["GoodName"] = "Remarks";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin","Remarks");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


	
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




	$tdatashouhin["Remarks"] = $fdata;
//	Destination_selling
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "Destination_selling";
	$fdata["GoodName"] = "Destination_selling";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin","Destination_selling");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


	
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
	$edata["LinkFieldType"] = 3;
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




	$tdatashouhin["Destination_selling"] = $fdata;
//	Finish
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "Finish";
	$fdata["GoodName"] = "Finish";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin","Finish");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


	
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
	$edata["LinkFieldType"] = 3;
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




	$tdatashouhin["Finish"] = $fdata;
//	Discrimination
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "Discrimination";
	$fdata["GoodName"] = "Discrimination";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin","Discrimination");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


	
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




	$tdatashouhin["Discrimination"] = $fdata;
//	accessories
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "accessories";
	$fdata["GoodName"] = "accessories";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin","accessories");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


	
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
	$edata["LinkFieldType"] = 3;
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




	$tdatashouhin["accessories"] = $fdata;
//	priority
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "priority";
	$fdata["GoodName"] = "priority";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin","priority");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


	
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




	$tdatashouhin["priority"] = $fdata;
//	A_storage
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "A_storage";
	$fdata["GoodName"] = "A_storage";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin","A_storage");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


	
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




	$tdatashouhin["A_storage"] = $fdata;
//	price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "price";
	$fdata["GoodName"] = "price";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin","price");
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




	$tdatashouhin["price"] = $fdata;
//	sales_price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "sales_price";
	$fdata["GoodName"] = "sales_price";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin","sales_price");
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




	$tdatashouhin["sales_price"] = $fdata;
//	sagaku_price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 47;
	$fdata["strName"] = "sagaku_price";
	$fdata["GoodName"] = "sagaku_price";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("shouhin","sagaku_price");
	$fdata["FieldType"] = 5;

	
	
	
			
	
	
	
	
	
	

	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "sagaku_price";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(shouhin.sales_price - shouhin.price)";

	
	
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








	$tdatashouhin["sagaku_price"] = $fdata;
//	comment
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 48;
	$fdata["strName"] = "comment";
	$fdata["GoodName"] = "comment";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin","comment");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


	
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




	$tdatashouhin["comment"] = $fdata;
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 49;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin","description");
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




	$tdatashouhin["description"] = $fdata;
//	nyuukin_price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 50;
	$fdata["strName"] = "nyuukin_price";
	$fdata["GoodName"] = "nyuukin_price";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin","nyuukin_price");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


	
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




	$tdatashouhin["nyuukin_price"] = $fdata;
//	satei_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 51;
	$fdata["strName"] = "satei_by";
	$fdata["GoodName"] = "satei_by";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin","satei_by");
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




	$tdatashouhin["satei_by"] = $fdata;
//	satei_hi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 52;
	$fdata["strName"] = "satei_hi";
	$fdata["GoodName"] = "satei_hi";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin","satei_hi");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
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




	$tdatashouhin["satei_hi"] = $fdata;
//	REG_AUTHOR
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 53;
	$fdata["strName"] = "REG_AUTHOR";
	$fdata["GoodName"] = "REG_AUTHOR";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin","REG_AUTHOR");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "REG_AUTHOR";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`REG_AUTHOR`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

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




	$tdatashouhin["REG_AUTHOR"] = $fdata;
//	DT_UP_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 54;
	$fdata["strName"] = "DT_UP_DATE";
	$fdata["GoodName"] = "DT_UP_DATE";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin","DT_UP_DATE");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DT_UP_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`DT_UP_DATE`";

	
	
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




	$tdatashouhin["DT_UP_DATE"] = $fdata;
//	kaitori_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 55;
	$fdata["strName"] = "kaitori_by";
	$fdata["GoodName"] = "kaitori_by";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin","kaitori_by");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
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




	$tdatashouhin["kaitori_by"] = $fdata;
//	kaitory_hi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 56;
	$fdata["strName"] = "kaitory_hi";
	$fdata["GoodName"] = "kaitory_hi";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin","kaitory_hi");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "kaitory_hi";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`kaitory_hi`";

	
	
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




	$tdatashouhin["kaitory_hi"] = $fdata;
//	yahoo_saisun_sha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 57;
	$fdata["strName"] = "yahoo_saisun_sha";
	$fdata["GoodName"] = "yahoo_saisun_sha";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin","yahoo_saisun_sha");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
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




	$tdatashouhin["yahoo_saisun_sha"] = $fdata;
//	saisun_start
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 58;
	$fdata["strName"] = "saisun_start";
	$fdata["GoodName"] = "saisun_start";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin","saisun_start");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "saisun_start";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`saisun_start`";

	
	
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




	$tdatashouhin["saisun_start"] = $fdata;
//	saisun_end
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 59;
	$fdata["strName"] = "saisun_end";
	$fdata["GoodName"] = "saisun_end";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin","saisun_end");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "saisun_end";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`saisun_end`";

	
	
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




	$tdatashouhin["saisun_end"] = $fdata;
//	saisun_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 60;
	$fdata["strName"] = "saisun_time";
	$fdata["GoodName"] = "saisun_time";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("shouhin","saisun_time");
	$fdata["FieldType"] = 134;

	
	
	
			
	
	
	
	
	
	

	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "saisun_time";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TIMEDIFF(shouhin.saisun_end, shouhin.saisun_start)";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Time");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Time");

	
	



		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
				$hours = 24;
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 0,
									  "hours" => $hours,
									  "minutes" => 1,
									  "showSeconds" => 0);

	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatashouhin["saisun_time"] = $fdata;
//	REG_PHOTOGRAPHER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 61;
	$fdata["strName"] = "REG_PHOTOGRAPHER";
	$fdata["GoodName"] = "REG_PHOTOGRAPHER";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin","REG_PHOTOGRAPHER");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "REG_PHOTOGRAPHER";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`REG_PHOTOGRAPHER`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

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




	$tdatashouhin["REG_PHOTOGRAPHER"] = $fdata;
//	REG_PHOTOGRAPHER_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 62;
	$fdata["strName"] = "REG_PHOTOGRAPHER_DATE";
	$fdata["GoodName"] = "REG_PHOTOGRAPHER_DATE";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin","REG_PHOTOGRAPHER_DATE");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "REG_PHOTOGRAPHER_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`REG_PHOTOGRAPHER_DATE`";

	
	
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




	$tdatashouhin["REG_PHOTOGRAPHER_DATE"] = $fdata;
//	REG_KAKOU
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 63;
	$fdata["strName"] = "REG_KAKOU";
	$fdata["GoodName"] = "REG_KAKOU";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin","REG_KAKOU");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "REG_KAKOU";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`REG_KAKOU`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

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




	$tdatashouhin["REG_KAKOU"] = $fdata;
//	REG_KAKOU_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 64;
	$fdata["strName"] = "REG_KAKOU_DATE";
	$fdata["GoodName"] = "REG_KAKOU_DATE";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin","REG_KAKOU_DATE");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "REG_KAKOU_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`REG_KAKOU_DATE`";

	
	
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




	$tdatashouhin["REG_KAKOU_DATE"] = $fdata;
//	REG_PACKINGS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 65;
	$fdata["strName"] = "REG_PACKINGS";
	$fdata["GoodName"] = "REG_PACKINGS";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin","REG_PACKINGS");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "REG_PACKINGS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`REG_PACKINGS`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

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




	$tdatashouhin["REG_PACKINGS"] = $fdata;
//	DT_PACKING_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 66;
	$fdata["strName"] = "DT_PACKING_DATE";
	$fdata["GoodName"] = "DT_PACKING_DATE";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin","DT_PACKING_DATE");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DT_PACKING_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`DT_PACKING_DATE`";

	
	
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




	$tdatashouhin["DT_PACKING_DATE"] = $fdata;
//	AWAZU_NIN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 67;
	$fdata["strName"] = "AWAZU_NIN";
	$fdata["GoodName"] = "AWAZU_NIN";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin","AWAZU_NIN");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "AWAZU_NIN";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`AWAZU_NIN`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

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




	$tdatashouhin["AWAZU_NIN"] = $fdata;
//	AWAZU_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 68;
	$fdata["strName"] = "AWAZU_DATE";
	$fdata["GoodName"] = "AWAZU_DATE";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin","AWAZU_DATE");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "AWAZU_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`AWAZU_DATE`";

	
	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdatashouhin["AWAZU_DATE"] = $fdata;
//	REG_EXHIBITOR
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 69;
	$fdata["strName"] = "REG_EXHIBITOR";
	$fdata["GoodName"] = "REG_EXHIBITOR";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin","REG_EXHIBITOR");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "REG_EXHIBITOR";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`REG_EXHIBITOR`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

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




	$tdatashouhin["REG_EXHIBITOR"] = $fdata;
//	Exhibition_Date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 70;
	$fdata["strName"] = "Exhibition_Date";
	$fdata["GoodName"] = "Exhibition_Date";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin","Exhibition_Date");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Exhibition_Date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`Exhibition_Date`";

	
	
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




	$tdatashouhin["Exhibition_Date"] = $fdata;
//	updated_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 71;
	$fdata["strName"] = "updated_by";
	$fdata["GoodName"] = "updated_by";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin","updated_by");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
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




	$tdatashouhin["updated_by"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 72;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin","updated_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
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




	$tdatashouhin["updated_at"] = $fdata;
//	kanryou_henbi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 73;
	$fdata["strName"] = "kanryou_henbi";
	$fdata["GoodName"] = "kanryou_henbi";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin","kanryou_henbi");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
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




	$tdatashouhin["kanryou_henbi"] = $fdata;
//	browseid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 74;
	$fdata["strName"] = "browseid";
	$fdata["GoodName"] = "browseid";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin","browseid");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "browseid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`browseid`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatashouhin["browseid"] = $fdata;
//	browsenode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 75;
	$fdata["strName"] = "browsenode";
	$fdata["GoodName"] = "browsenode";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin","browsenode");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "browsenode";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`browsenode`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatashouhin["browsenode"] = $fdata;
//	price_for_site
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 76;
	$fdata["strName"] = "price_for_site";
	$fdata["GoodName"] = "price_for_site";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin","price_for_site");
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

		$fdata["strField"] = "price_for_site";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`price_for_site`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatashouhin["price_for_site"] = $fdata;
//	ecc_seq
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 77;
	$fdata["strName"] = "ecc_seq";
	$fdata["GoodName"] = "ecc_seq";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("shouhin","ecc_seq");
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




	$tdatashouhin["ecc_seq"] = $fdata;
//	goods_title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 78;
	$fdata["strName"] = "goods_title";
	$fdata["GoodName"] = "goods_title";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin","goods_title");
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




	$tdatashouhin["goods_title"] = $fdata;
//	registerd_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 79;
	$fdata["strName"] = "registerd_id";
	$fdata["GoodName"] = "registerd_id";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("shouhin","registerd_id");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "registerd_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc`.`registerd_id`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

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








	$tdatashouhin["registerd_id"] = $fdata;
//	yahoo_sankou_uwadai
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 80;
	$fdata["strName"] = "yahoo_sankou_uwadai";
	$fdata["GoodName"] = "yahoo_sankou_uwadai";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin","yahoo_sankou_uwadai");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

	
	
	
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








	$tdatashouhin["yahoo_sankou_uwadai"] = $fdata;
//	FLAG_NO_ARRIVAL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 81;
	$fdata["strName"] = "FLAG_NO_ARRIVAL";
	$fdata["GoodName"] = "FLAG_NO_ARRIVAL";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin","FLAG_NO_ARRIVAL");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "FLAG_NO_ARRIVAL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`FLAG_NO_ARRIVAL`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatashouhin["FLAG_NO_ARRIVAL"] = $fdata;
//	logo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 82;
	$fdata["strName"] = "logo";
	$fdata["GoodName"] = "logo";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin","logo");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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




	$tdatashouhin["logo"] = $fdata;
//	parts
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 83;
	$fdata["strName"] = "parts";
	$fdata["GoodName"] = "parts";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin","parts");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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




	$tdatashouhin["parts"] = $fdata;
//	country_of_origin
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 84;
	$fdata["strName"] = "country_of_origin";
	$fdata["GoodName"] = "country_of_origin";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin","country_of_origin");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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




	$tdatashouhin["country_of_origin"] = $fdata;
//	zipper
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 85;
	$fdata["strName"] = "zipper";
	$fdata["GoodName"] = "zipper";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin","zipper");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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




	$tdatashouhin["zipper"] = $fdata;
//	guarantee
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 86;
	$fdata["strName"] = "guarantee";
	$fdata["GoodName"] = "guarantee";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin","guarantee");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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




	$tdatashouhin["guarantee"] = $fdata;
//	errors
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 87;
	$fdata["strName"] = "errors";
	$fdata["GoodName"] = "errors";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin","errors");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

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




	$tdatashouhin["errors"] = $fdata;
//	designer
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 88;
	$fdata["strName"] = "designer";
	$fdata["GoodName"] = "designer";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin","designer");
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




	$tdatashouhin["designer"] = $fdata;
//	hahakai
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 89;
	$fdata["strName"] = "hahakai";
	$fdata["GoodName"] = "hahakai";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin","hahakai");
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




	$tdatashouhin["hahakai"] = $fdata;
//	effect
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 90;
	$fdata["strName"] = "effect";
	$fdata["GoodName"] = "effect";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin","effect");
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




	$tdatashouhin["effect"] = $fdata;
//	shape
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 91;
	$fdata["strName"] = "shape";
	$fdata["GoodName"] = "shape";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin","shape");
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




	$tdatashouhin["shape"] = $fdata;
//	cutting_style
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 92;
	$fdata["strName"] = "cutting_style";
	$fdata["GoodName"] = "cutting_style";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin","cutting_style");
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




	$tdatashouhin["cutting_style"] = $fdata;
//	chain_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 93;
	$fdata["strName"] = "chain_type";
	$fdata["GoodName"] = "chain_type";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin","chain_type");
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




	$tdatashouhin["chain_type"] = $fdata;
//	number_of_stones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 94;
	$fdata["strName"] = "number_of_stones";
	$fdata["GoodName"] = "number_of_stones";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin","number_of_stones");
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




	$tdatashouhin["number_of_stones"] = $fdata;
//	amount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 95;
	$fdata["strName"] = "amount";
	$fdata["GoodName"] = "amount";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin","amount");
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




	$tdatashouhin["amount"] = $fdata;
//	producing_area
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 96;
	$fdata["strName"] = "producing_area";
	$fdata["GoodName"] = "producing_area";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin","producing_area");
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




	$tdatashouhin["producing_area"] = $fdata;
//	satei_error
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 97;
	$fdata["strName"] = "satei_error";
	$fdata["GoodName"] = "satei_error";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin","satei_error");
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




	$tdatashouhin["satei_error"] = $fdata;
//	serial_number_for_storage
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 98;
	$fdata["strName"] = "serial_number_for_storage";
	$fdata["GoodName"] = "serial_number_for_storage";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin","serial_number_for_storage");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

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




	$tdatashouhin["serial_number_for_storage"] = $fdata;
//	price_for_site_flag
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 99;
	$fdata["strName"] = "price_for_site_flag";
	$fdata["GoodName"] = "price_for_site_flag";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin","price_for_site_flag");
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

		$fdata["strField"] = "price_for_site_flag";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`price_for_site_flag`";

	
	
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




	$tdatashouhin["price_for_site_flag"] = $fdata;
//	Eoc_takuhai_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 100;
	$fdata["strName"] = "Eoc_takuhai_id";
	$fdata["GoodName"] = "Eoc_takuhai_id";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin","Eoc_takuhai_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Eoc_takuhai_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`Eoc_takuhai_id`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatashouhin["Eoc_takuhai_id"] = $fdata;
//	Eoc_unfinished_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 101;
	$fdata["strName"] = "Eoc_unfinished_id";
	$fdata["GoodName"] = "Eoc_unfinished_id";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin","Eoc_unfinished_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Eoc_unfinished_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`Eoc_unfinished_id`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatashouhin["Eoc_unfinished_id"] = $fdata;
//	Eoc_chigins_unfinished_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 102;
	$fdata["strName"] = "Eoc_chigins_unfinished_id";
	$fdata["GoodName"] = "Eoc_chigins_unfinished_id";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin","Eoc_chigins_unfinished_id");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "Eoc_chigins_unfinished_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`Eoc_chigins_unfinished_id`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatashouhin["Eoc_chigins_unfinished_id"] = $fdata;
//	product_style
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 103;
	$fdata["strName"] = "product_style";
	$fdata["GoodName"] = "product_style";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin","product_style");
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




	$tdatashouhin["product_style"] = $fdata;
//	shape_supplement
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 104;
	$fdata["strName"] = "shape_supplement";
	$fdata["GoodName"] = "shape_supplement";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin","shape_supplement");
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




	$tdatashouhin["shape_supplement"] = $fdata;
//	unit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 105;
	$fdata["strName"] = "unit";
	$fdata["GoodName"] = "unit";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin","unit");
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




	$tdatashouhin["unit"] = $fdata;
//	chohyo_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 106;
	$fdata["strName"] = "chohyo_id";
	$fdata["GoodName"] = "chohyo_id";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin","chohyo_id");
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

		$fdata["strField"] = "chohyo_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`chohyo_id`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatashouhin["chohyo_id"] = $fdata;
//	meisai_number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 107;
	$fdata["strName"] = "meisai_number";
	$fdata["GoodName"] = "meisai_number";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin","meisai_number");
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




	$tdatashouhin["meisai_number"] = $fdata;
//	days_keep_price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 108;
	$fdata["strName"] = "days_keep_price";
	$fdata["GoodName"] = "days_keep_price";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin","days_keep_price");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "days_keep_price";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`days_keep_price`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatashouhin["days_keep_price"] = $fdata;
//	label_output_flag
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 109;
	$fdata["strName"] = "label_output_flag";
	$fdata["GoodName"] = "label_output_flag";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin","label_output_flag");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

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




	$tdatashouhin["label_output_flag"] = $fdata;
//	zaiko
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 110;
	$fdata["strName"] = "zaiko";
	$fdata["GoodName"] = "zaiko";
	$fdata["ownerTable"] = "_goods_status2";
	$fdata["Label"] = GetFieldLabel("shouhin","zaiko");
	$fdata["FieldType"] = 16;

	
	
	
			
	
	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "zaiko";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`_goods_status2`.`zaiko`";

	
	
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




	$tdatashouhin["zaiko"] = $fdata;
//	itaku_flag
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 111;
	$fdata["strName"] = "itaku_flag";
	$fdata["GoodName"] = "itaku_flag";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin","itaku_flag");
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




	$tdatashouhin["itaku_flag"] = $fdata;
//	category_class
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 112;
	$fdata["strName"] = "category_class";
	$fdata["GoodName"] = "category_class";
	$fdata["ownerTable"] = "store_sub_categories";
	$fdata["Label"] = GetFieldLabel("shouhin","category_class");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "category_class";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`store_sub_categories`.`category_class`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "mst_category_class";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
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




	$tdatashouhin["category_class"] = $fdata;
//	tentou_label_output_flag
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 113;
	$fdata["strName"] = "tentou_label_output_flag";
	$fdata["GoodName"] = "tentou_label_output_flag";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin","tentou_label_output_flag");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

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




	$tdatashouhin["tentou_label_output_flag"] = $fdata;
//	gold_check_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 114;
	$fdata["strName"] = "gold_check_id";
	$fdata["GoodName"] = "gold_check_id";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin","gold_check_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "gold_check_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`gold_check_id`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatashouhin["gold_check_id"] = $fdata;
//	cost
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 115;
	$fdata["strName"] = "cost";
	$fdata["GoodName"] = "cost";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin","cost");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
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




	$tdatashouhin["cost"] = $fdata;
//	other_cost
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 116;
	$fdata["strName"] = "other_cost";
	$fdata["GoodName"] = "other_cost";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin","other_cost");
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




	$tdatashouhin["other_cost"] = $fdata;
//	identification_cost
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 117;
	$fdata["strName"] = "identification_cost";
	$fdata["GoodName"] = "identification_cost";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin","identification_cost");
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




	$tdatashouhin["identification_cost"] = $fdata;
//	kinsa_flag
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 118;
	$fdata["strName"] = "kinsa_flag";
	$fdata["GoodName"] = "kinsa_flag";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin","kinsa_flag");
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

		$fdata["strField"] = "kinsa_flag";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`kinsa_flag`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatashouhin["kinsa_flag"] = $fdata;
//	price_without_tax
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 119;
	$fdata["strName"] = "price_without_tax";
	$fdata["GoodName"] = "price_without_tax";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("shouhin","price_without_tax");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "price_without_tax";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"\"";

	
	
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
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatashouhin["price_without_tax"] = $fdata;
//	slip_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 120;
	$fdata["strName"] = "slip_type";
	$fdata["GoodName"] = "slip_type";
	$fdata["ownerTable"] = "gold_check";
	$fdata["Label"] = GetFieldLabel("shouhin","slip_type");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "slip_type";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`gold_check`.`slip_type`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "mst_delivery_type";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
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




	$tdatashouhin["slip_type"] = $fdata;
//	Eoc_trader_id_for_buy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 121;
	$fdata["strName"] = "Eoc_trader_id_for_buy";
	$fdata["GoodName"] = "Eoc_trader_id_for_buy";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin","Eoc_trader_id_for_buy");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Eoc_trader_id_for_buy";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`Eoc_trader_id_for_buy`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatashouhin["Eoc_trader_id_for_buy"] = $fdata;
//	Eoc_trader_id_for_sell
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 122;
	$fdata["strName"] = "Eoc_trader_id_for_sell";
	$fdata["GoodName"] = "Eoc_trader_id_for_sell";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin","Eoc_trader_id_for_sell");
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

		$fdata["strField"] = "Eoc_trader_id_for_sell";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`Eoc_trader_id_for_sell`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatashouhin["Eoc_trader_id_for_sell"] = $fdata;
//	slip_number_for_buy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 123;
	$fdata["strName"] = "slip_number_for_buy";
	$fdata["GoodName"] = "slip_number_for_buy";
	$fdata["ownerTable"] = "Eoc_trader";
	$fdata["Label"] = GetFieldLabel("shouhin","slip_number_for_buy");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "slip_number";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_trader`.`slip_number`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatashouhin["slip_number_for_buy"] = $fdata;
//	market_for_buy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 124;
	$fdata["strName"] = "market_for_buy";
	$fdata["GoodName"] = "market_for_buy";
	$fdata["ownerTable"] = "Eoc_trader";
	$fdata["Label"] = GetFieldLabel("shouhin","market_for_buy");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "market";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_trader`.`market`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

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




	$tdatashouhin["market_for_buy"] = $fdata;
//	date_for_buy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 125;
	$fdata["strName"] = "date_for_buy";
	$fdata["GoodName"] = "date_for_buy";
	$fdata["ownerTable"] = "Eoc_trader";
	$fdata["Label"] = GetFieldLabel("shouhin","date_for_buy");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_trader`.`date`";

	
	
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




	$tdatashouhin["date_for_buy"] = $fdata;
//	slip_number_for_sell
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 126;
	$fdata["strName"] = "slip_number_for_sell";
	$fdata["GoodName"] = "slip_number_for_sell";
	$fdata["ownerTable"] = "Eoc_trader";
	$fdata["Label"] = GetFieldLabel("shouhin","slip_number_for_sell");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "slip_number";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_trader1`.`slip_number`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatashouhin["slip_number_for_sell"] = $fdata;
//	market_for_sell
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 127;
	$fdata["strName"] = "market_for_sell";
	$fdata["GoodName"] = "market_for_sell";
	$fdata["ownerTable"] = "Eoc_trader";
	$fdata["Label"] = GetFieldLabel("shouhin","market_for_sell");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "market";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_trader1`.`market`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

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




	$tdatashouhin["market_for_sell"] = $fdata;
//	date_for_sell
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 128;
	$fdata["strName"] = "date_for_sell";
	$fdata["GoodName"] = "date_for_sell";
	$fdata["ownerTable"] = "Eoc_trader";
	$fdata["Label"] = GetFieldLabel("shouhin","date_for_sell");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_trader1`.`date`";

	
	
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




	$tdatashouhin["date_for_sell"] = $fdata;
//	trading_sort_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 129;
	$fdata["strName"] = "trading_sort_id";
	$fdata["GoodName"] = "trading_sort_id";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin","trading_sort_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "trading_sort_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`trading_sort_id`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatashouhin["trading_sort_id"] = $fdata;
//	many_product_group_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 130;
	$fdata["strName"] = "many_product_group_id";
	$fdata["GoodName"] = "many_product_group_id";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin","many_product_group_id");
	$fdata["FieldType"] = 20;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "many_product_group_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`many_product_group_id`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatashouhin["many_product_group_id"] = $fdata;
//	destination_sold_out
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 131;
	$fdata["strName"] = "destination_sold_out";
	$fdata["GoodName"] = "destination_sold_out";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin","destination_sold_out");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "destination_sold_out";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`destination_sold_out`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

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








	$tdatashouhin["destination_sold_out"] = $fdata;
//	sales_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 132;
	$fdata["strName"] = "sales_date";
	$fdata["GoodName"] = "sales_date";
	$fdata["ownerTable"] = "sales_report";
	$fdata["Label"] = GetFieldLabel("shouhin","sales_date");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "sales_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`sales_report`.`sales_date`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
	



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




	$tdatashouhin["sales_date"] = $fdata;
//	purchase_category
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 133;
	$fdata["strName"] = "purchase_category";
	$fdata["GoodName"] = "purchase_category";
	$fdata["ownerTable"] = "purchase_category_report";
	$fdata["Label"] = GetFieldLabel("shouhin","purchase_category");
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

		$fdata["strField"] = "purchase_category";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`purchase_category_report`.`purchase_category`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "_chigin_type";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "initial";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "initial";

	
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatashouhin["purchase_category"] = $fdata;
//	mst_business_partner_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 134;
	$fdata["strName"] = "mst_business_partner_id";
	$fdata["GoodName"] = "mst_business_partner_id";
	$fdata["ownerTable"] = "sales_report";
	$fdata["Label"] = GetFieldLabel("shouhin","mst_business_partner_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "mst_business_partner_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`sales_report`.`mst_business_partner_id`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

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




	$tdatashouhin["mst_business_partner_id"] = $fdata;
//	commission
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 135;
	$fdata["strName"] = "commission";
	$fdata["GoodName"] = "commission";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin","commission");
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

		$fdata["strField"] = "commission";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`commission`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatashouhin["commission"] = $fdata;
//	is_recovery
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 136;
	$fdata["strName"] = "is_recovery";
	$fdata["GoodName"] = "is_recovery";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin","is_recovery");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "is_recovery";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`is_recovery`";

	
	
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




	$tdatashouhin["is_recovery"] = $fdata;
//	sales_cost
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 137;
	$fdata["strName"] = "sales_cost";
	$fdata["GoodName"] = "sales_cost";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin","sales_cost");
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




	$tdatashouhin["sales_cost"] = $fdata;


$tables_data["shouhin"]=&$tdatashouhin;
$field_labels["shouhin"] = &$fieldLabelsshouhin;
$fieldToolTips["shouhin"] = &$fieldToolTipsshouhin;
$placeHolders["shouhin"] = &$placeHoldersshouhin;
$page_titles["shouhin"] = &$pageTitlesshouhin;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["shouhin"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["shouhin"] = array();


	
				$strOriginalDetailsTable="Eoc_unfinished";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="Eoc_unfinished";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "Eoc_unfinished";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispMasterInfo"] = array();
				$masterParams["dispMasterInfo"][PAGE_LIST] = true;
			
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 1;
	$masterParams["proceedLink"]= 1;

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["shouhin"][0] = $masterParams;
				$masterTablesData["shouhin"][0]["masterKeys"] = array();
	$masterTablesData["shouhin"][0]["masterKeys"][]="id";
				$masterTablesData["shouhin"][0]["detailKeys"] = array();
	$masterTablesData["shouhin"][0]["detailKeys"][]="Eoc_unfinished_id";
		
	
				$strOriginalDetailsTable="Eoc_takuhai";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="Eoc_takuhai_for_catch_history";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "Eoc_takuhai_for_catch_history";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "1";
	$masterParams["dispMasterInfo"] = array();
				$masterParams["dispMasterInfo"][PAGE_LIST] = true;
			
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 1;
	$masterParams["proceedLink"]= 1;

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["shouhin"][1] = $masterParams;
				$masterTablesData["shouhin"][1]["masterKeys"] = array();
	$masterTablesData["shouhin"][1]["masterKeys"][]="id";
				$masterTablesData["shouhin"][1]["detailKeys"] = array();
	$masterTablesData["shouhin"][1]["detailKeys"][]="Eoc_takuhai_id";
		
	
				$strOriginalDetailsTable="Eoc_takuhai";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="Eoc_transfer_confirm";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "Eoc_transfer_confirm";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispMasterInfo"] = array();
				$masterParams["dispMasterInfo"][PAGE_LIST] = true;
			
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 1;
	$masterParams["proceedLink"]= 1;

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["shouhin"][2] = $masterParams;
				$masterTablesData["shouhin"][2]["masterKeys"] = array();
	$masterTablesData["shouhin"][2]["masterKeys"][]="id";
				$masterTablesData["shouhin"][2]["detailKeys"] = array();
	$masterTablesData["shouhin"][2]["detailKeys"][]="Eoc_takuhai_id";
		
	
				$strOriginalDetailsTable="Eoc_takuhai";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="Eoc_transfer_confirm_after";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "Eoc_transfer_confirm_after";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispMasterInfo"] = array();
				$masterParams["dispMasterInfo"][PAGE_LIST] = true;
			
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 1;
	$masterParams["proceedLink"]= 1;

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["shouhin"][3] = $masterParams;
				$masterTablesData["shouhin"][3]["masterKeys"] = array();
	$masterTablesData["shouhin"][3]["masterKeys"][]="id";
				$masterTablesData["shouhin"][3]["detailKeys"] = array();
	$masterTablesData["shouhin"][3]["detailKeys"][]="Eoc_takuhai_id";
		
	
				$strOriginalDetailsTable="vw_Eoc_returned_items";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="vw_Eoc_returned_items";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "vw_Eoc_returned_items";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispMasterInfo"] = array();
				$masterParams["dispMasterInfo"][PAGE_LIST] = true;
			
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 1;
	$masterParams["proceedLink"]= 1;

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["shouhin"][4] = $masterParams;
				$masterTablesData["shouhin"][4]["masterKeys"] = array();
	$masterTablesData["shouhin"][4]["masterKeys"][]="Eoc_takuhai_id";
				$masterTablesData["shouhin"][4]["detailKeys"] = array();
	$masterTablesData["shouhin"][4]["detailKeys"][]="Eoc_takuhai_id";
		
	
				$strOriginalDetailsTable="Eoc_takuhai";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="Eoc_takuhai";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "Eoc_takuhai";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "1";
	$masterParams["dispMasterInfo"] = array();
				$masterParams["dispMasterInfo"][PAGE_LIST] = true;
			
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 1;
	$masterParams["proceedLink"]= 1;

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["shouhin"][5] = $masterParams;
				$masterTablesData["shouhin"][5]["masterKeys"] = array();
	$masterTablesData["shouhin"][5]["masterKeys"][]="id";
				$masterTablesData["shouhin"][5]["detailKeys"] = array();
	$masterTablesData["shouhin"][5]["detailKeys"][]="Eoc_takuhai_id";
		
	
				$strOriginalDetailsTable="Eoc_takuhai";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="Eoc_takuhai_for_catch";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "Eoc_takuhai_for_catch";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "1";
	$masterParams["dispMasterInfo"] = array();
				$masterParams["dispMasterInfo"][PAGE_LIST] = true;
			
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 1;
	$masterParams["proceedLink"]= 1;

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["shouhin"][6] = $masterParams;
				$masterTablesData["shouhin"][6]["masterKeys"] = array();
	$masterTablesData["shouhin"][6]["masterKeys"][]="id";
				$masterTablesData["shouhin"][6]["detailKeys"] = array();
	$masterTablesData["shouhin"][6]["detailKeys"][]="Eoc_takuhai_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_shouhin()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "concat(\"/include/yahoo_template/temp.php?product_id=\", `shouhin`.product_id, \"\") AS `y_preview`,  `shouhin`.`status`,  `shouhin`.`box_id` AS `link_id`,  `shouhin`.`box_id`,  `shouhin`.`product_id`,  `shouhin`.`ecc_id`,  `shouhin`.`yahoo_sinaban`,  DATEDIFF(shouhin.kanryou_henbi, shouhin.DT_UP_DATE) AS `sabun_date`,  `shouhin`.`product_num`,  `shouhin`.`title`,  `shouhin`.`title` AS `title2`,  `shouhin`.`title` AS `title3`,  `shouhin`.`line`,  `shouhin`.`item_name`,  `shouhin`.`yahoo_sozai`,  `shouhin`.`motif`,  `shouhin`.`Setting`,  `shouhin`.`processing`,  `shouhin`.`Sleeve_Length`,  `shouhin`.`length`,  `shouhin`.`yahoo_kataban`,  `shouhin`.`serial_number`,  `shouhin`.`stamp`,  `shouhin`.`category_id`,  `shouhin`.`sub_category_id1`,  `shouhin`.`yahoo_sex`,  `shouhin`.`yahoo_condition2`,  `shouhin`.`ichiba_title`,  `shouhin`.`gold_property`,  `shouhin`.`Gram`,  `shouhin`.`price_per_gram`,  `shouhin`.`Parent_stone`,  `shouhin`.`price_per_parent_stone`,  `shouhin`.`Aside_stone`,  `shouhin`.`price_per_aside_stone`,  `shouhin`.`Appraiser`,  `shouhin`.`Ring_size`,  `shouhin`.`Remarks`,  `shouhin`.`Destination_selling`,  `shouhin`.`Finish`,  `shouhin`.`Discrimination`,  `shouhin`.`accessories`,  `shouhin`.`priority`,  `shouhin`.`A_storage`,  `shouhin`.`price`,  `shouhin`.`sales_price`,  (shouhin.sales_price - shouhin.price) AS `sagaku_price`,  `shouhin`.`comment`,  `shouhin`.`description`,  `shouhin`.`nyuukin_price`,  `shouhin`.`satei_by`,  `shouhin`.`satei_hi`,  `shouhin`.`REG_AUTHOR`,  `shouhin`.`DT_UP_DATE`,  `shouhin`.`kaitori_by`,  `shouhin`.`kaitory_hi`,  `shouhin`.`yahoo_saisun_sha`,  `shouhin`.`saisun_start`,  `shouhin`.`saisun_end`,  TIMEDIFF(shouhin.saisun_end, shouhin.saisun_start) AS `saisun_time`,  `shouhin`.`REG_PHOTOGRAPHER`,  `shouhin`.`REG_PHOTOGRAPHER_DATE`,  `shouhin`.`REG_KAKOU`,  `shouhin`.`REG_KAKOU_DATE`,  `shouhin`.`REG_PACKINGS`,  `shouhin`.`DT_PACKING_DATE`,  `shouhin`.`AWAZU_NIN`,  `shouhin`.`AWAZU_DATE`,  `shouhin`.`REG_EXHIBITOR`,  `shouhin`.`Exhibition_Date`,  `shouhin`.`updated_by`,  `shouhin`.`updated_at`,  `shouhin`.`kanryou_henbi`,  `shouhin`.`browseid`,  `shouhin`.`browsenode`,  `shouhin`.`price_for_site`,  `Eoc`.`ecc_seq`,  `shouhin`.`goods_title`,  `Eoc`.`registerd_id`,  `shouhin`.`yahoo_sankou_uwadai`,  `shouhin`.`FLAG_NO_ARRIVAL`,  `shouhin`.`logo`,  `shouhin`.`parts`,  `shouhin`.`country_of_origin`,  `shouhin`.`zipper`,  `shouhin`.`guarantee`,  `shouhin`.`errors`,  `shouhin`.`designer`,  `shouhin`.`hahakai`,  `shouhin`.`effect`,  `shouhin`.`shape`,  `shouhin`.`cutting_style`,  `shouhin`.`chain_type`,  `shouhin`.`number_of_stones`,  `shouhin`.`amount`,  `shouhin`.`producing_area`,  `shouhin`.`satei_error`,  `shouhin`.`serial_number_for_storage`,  `shouhin`.`price_for_site_flag`,  `shouhin`.`Eoc_takuhai_id`,  `shouhin`.`Eoc_unfinished_id`,  `shouhin`.`Eoc_chigins_unfinished_id`,  `shouhin`.`product_style`,  `shouhin`.`shape_supplement`,  `shouhin`.`unit`,  `shouhin`.`chohyo_id`,  `shouhin`.`meisai_number`,  `shouhin`.`days_keep_price`,  `shouhin`.`label_output_flag`,  `_goods_status2`.`zaiko`,  `shouhin`.`itaku_flag`,  `store_sub_categories`.`category_class`,  `shouhin`.`tentou_label_output_flag`,  `shouhin`.`gold_check_id`,  `shouhin`.`cost`,  `shouhin`.`other_cost`,  `shouhin`.`identification_cost`,  `shouhin`.`kinsa_flag`,  \"\" AS `price_without_tax`,  `gold_check`.`slip_type`,  `shouhin`.`Eoc_trader_id_for_buy`,  `shouhin`.`Eoc_trader_id_for_sell`,  `Eoc_trader`.`slip_number` AS `slip_number_for_buy`,  `Eoc_trader`.`market` AS `market_for_buy`,  `Eoc_trader`.`date` AS `date_for_buy`,  `Eoc_trader1`.`slip_number` AS `slip_number_for_sell`,  `Eoc_trader1`.`market` AS `market_for_sell`,  `Eoc_trader1`.`date` AS `date_for_sell`,  `shouhin`.`trading_sort_id`,  `shouhin`.`many_product_group_id`,  `shouhin`.`destination_sold_out`,  `sales_report`.`sales_date`,  `purchase_category_report`.`purchase_category` AS `purchase_category`,  `sales_report`.`mst_business_partner_id`,  `shouhin`.`commission`,  `shouhin`.`is_recovery`,  `shouhin`.`sales_cost`";
$proto0["m_strFrom"] = "FROM `shouhin`  LEFT OUTER JOIN `Eoc` ON `shouhin`.`ecc_id` = `Eoc`.`ecc_id`  LEFT OUTER JOIN `_goods_status2` ON `shouhin`.`status` = `_goods_status2`.`goods_id`  LEFT OUTER JOIN `store_sub_categories` ON `shouhin`.`sub_category_id1` = `store_sub_categories`.`id`  LEFT OUTER JOIN `gold_check` ON `shouhin`.`gold_check_id` = `gold_check`.`id`  LEFT OUTER JOIN `Eoc_trader` ON `shouhin`.`Eoc_trader_id_for_buy` = `Eoc_trader`.`id`  LEFT OUTER JOIN `Eoc_trader` AS `Eoc_trader1` ON `shouhin`.`Eoc_trader_id_for_sell` = `Eoc_trader1`.`id`  LEFT OUTER JOIN `sales_report` ON `shouhin`.`product_id` = `sales_report`.`product_id`  LEFT OUTER JOIN `purchase_category_report` ON `shouhin`.`product_id` = `purchase_category_report`.`product_id`";
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
			$proto7=array();
$proto7["m_functiontype"] = "SQLF_CUSTOM";
$proto7["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "\"/include/yahoo_template/temp.php?product_id=\""
));

$proto7["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "`shouhin`.product_id"
));

$proto7["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\"\""
));

$proto7["m_arguments"][]=$obj;
$proto7["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto7);

$proto6["m_sql"] = "concat(\"/include/yahoo_template/temp.php?product_id=\", `shouhin`.product_id, \"\")";
$proto6["m_srcTableName"] = "shouhin";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "y_preview";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin"
));

$proto11["m_sql"] = "`shouhin`.`status`";
$proto11["m_srcTableName"] = "shouhin";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "box_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin"
));

$proto13["m_sql"] = "`shouhin`.`box_id`";
$proto13["m_srcTableName"] = "shouhin";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "link_id";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "box_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin"
));

$proto15["m_sql"] = "`shouhin`.`box_id`";
$proto15["m_srcTableName"] = "shouhin";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "product_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin"
));

$proto17["m_sql"] = "`shouhin`.`product_id`";
$proto17["m_srcTableName"] = "shouhin";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "ecc_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin"
));

$proto19["m_sql"] = "`shouhin`.`ecc_id`";
$proto19["m_srcTableName"] = "shouhin";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_sinaban",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin"
));

$proto21["m_sql"] = "`shouhin`.`yahoo_sinaban`";
$proto21["m_srcTableName"] = "shouhin";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$proto24=array();
$proto24["m_functiontype"] = "SQLF_CUSTOM";
$proto24["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "shouhin.kanryou_henbi"
));

$proto24["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "shouhin.DT_UP_DATE"
));

$proto24["m_arguments"][]=$obj;
$proto24["m_strFunctionName"] = "DATEDIFF";
$obj = new SQLFunctionCall($proto24);

$proto23["m_sql"] = "DATEDIFF(shouhin.kanryou_henbi, shouhin.DT_UP_DATE)";
$proto23["m_srcTableName"] = "shouhin";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "sabun_date";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "product_num",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin"
));

$proto27["m_sql"] = "`shouhin`.`product_num`";
$proto27["m_srcTableName"] = "shouhin";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "title",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin"
));

$proto29["m_sql"] = "`shouhin`.`title`";
$proto29["m_srcTableName"] = "shouhin";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "title",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin"
));

$proto31["m_sql"] = "`shouhin`.`title`";
$proto31["m_srcTableName"] = "shouhin";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "title2";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "title",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin"
));

$proto33["m_sql"] = "`shouhin`.`title`";
$proto33["m_srcTableName"] = "shouhin";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "title3";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "line",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin"
));

$proto35["m_sql"] = "`shouhin`.`line`";
$proto35["m_srcTableName"] = "shouhin";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "item_name",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin"
));

$proto37["m_sql"] = "`shouhin`.`item_name`";
$proto37["m_srcTableName"] = "shouhin";
$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "";
$obj = new SQLFieldListItem($proto37);

$proto0["m_fieldlist"][]=$obj;
						$proto39=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_sozai",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin"
));

$proto39["m_sql"] = "`shouhin`.`yahoo_sozai`";
$proto39["m_srcTableName"] = "shouhin";
$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "";
$obj = new SQLFieldListItem($proto39);

$proto0["m_fieldlist"][]=$obj;
						$proto41=array();
			$obj = new SQLField(array(
	"m_strName" => "motif",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin"
));

$proto41["m_sql"] = "`shouhin`.`motif`";
$proto41["m_srcTableName"] = "shouhin";
$proto41["m_expr"]=$obj;
$proto41["m_alias"] = "";
$obj = new SQLFieldListItem($proto41);

$proto0["m_fieldlist"][]=$obj;
						$proto43=array();
			$obj = new SQLField(array(
	"m_strName" => "Setting",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin"
));

$proto43["m_sql"] = "`shouhin`.`Setting`";
$proto43["m_srcTableName"] = "shouhin";
$proto43["m_expr"]=$obj;
$proto43["m_alias"] = "";
$obj = new SQLFieldListItem($proto43);

$proto0["m_fieldlist"][]=$obj;
						$proto45=array();
			$obj = new SQLField(array(
	"m_strName" => "processing",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin"
));

$proto45["m_sql"] = "`shouhin`.`processing`";
$proto45["m_srcTableName"] = "shouhin";
$proto45["m_expr"]=$obj;
$proto45["m_alias"] = "";
$obj = new SQLFieldListItem($proto45);

$proto0["m_fieldlist"][]=$obj;
						$proto47=array();
			$obj = new SQLField(array(
	"m_strName" => "Sleeve_Length",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin"
));

$proto47["m_sql"] = "`shouhin`.`Sleeve_Length`";
$proto47["m_srcTableName"] = "shouhin";
$proto47["m_expr"]=$obj;
$proto47["m_alias"] = "";
$obj = new SQLFieldListItem($proto47);

$proto0["m_fieldlist"][]=$obj;
						$proto49=array();
			$obj = new SQLField(array(
	"m_strName" => "length",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin"
));

$proto49["m_sql"] = "`shouhin`.`length`";
$proto49["m_srcTableName"] = "shouhin";
$proto49["m_expr"]=$obj;
$proto49["m_alias"] = "";
$obj = new SQLFieldListItem($proto49);

$proto0["m_fieldlist"][]=$obj;
						$proto51=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_kataban",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin"
));

$proto51["m_sql"] = "`shouhin`.`yahoo_kataban`";
$proto51["m_srcTableName"] = "shouhin";
$proto51["m_expr"]=$obj;
$proto51["m_alias"] = "";
$obj = new SQLFieldListItem($proto51);

$proto0["m_fieldlist"][]=$obj;
						$proto53=array();
			$obj = new SQLField(array(
	"m_strName" => "serial_number",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin"
));

$proto53["m_sql"] = "`shouhin`.`serial_number`";
$proto53["m_srcTableName"] = "shouhin";
$proto53["m_expr"]=$obj;
$proto53["m_alias"] = "";
$obj = new SQLFieldListItem($proto53);

$proto0["m_fieldlist"][]=$obj;
						$proto55=array();
			$obj = new SQLField(array(
	"m_strName" => "stamp",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin"
));

$proto55["m_sql"] = "`shouhin`.`stamp`";
$proto55["m_srcTableName"] = "shouhin";
$proto55["m_expr"]=$obj;
$proto55["m_alias"] = "";
$obj = new SQLFieldListItem($proto55);

$proto0["m_fieldlist"][]=$obj;
						$proto57=array();
			$obj = new SQLField(array(
	"m_strName" => "category_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin"
));

$proto57["m_sql"] = "`shouhin`.`category_id`";
$proto57["m_srcTableName"] = "shouhin";
$proto57["m_expr"]=$obj;
$proto57["m_alias"] = "";
$obj = new SQLFieldListItem($proto57);

$proto0["m_fieldlist"][]=$obj;
						$proto59=array();
			$obj = new SQLField(array(
	"m_strName" => "sub_category_id1",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin"
));

$proto59["m_sql"] = "`shouhin`.`sub_category_id1`";
$proto59["m_srcTableName"] = "shouhin";
$proto59["m_expr"]=$obj;
$proto59["m_alias"] = "";
$obj = new SQLFieldListItem($proto59);

$proto0["m_fieldlist"][]=$obj;
						$proto61=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_sex",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin"
));

$proto61["m_sql"] = "`shouhin`.`yahoo_sex`";
$proto61["m_srcTableName"] = "shouhin";
$proto61["m_expr"]=$obj;
$proto61["m_alias"] = "";
$obj = new SQLFieldListItem($proto61);

$proto0["m_fieldlist"][]=$obj;
						$proto63=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_condition2",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin"
));

$proto63["m_sql"] = "`shouhin`.`yahoo_condition2`";
$proto63["m_srcTableName"] = "shouhin";
$proto63["m_expr"]=$obj;
$proto63["m_alias"] = "";
$obj = new SQLFieldListItem($proto63);

$proto0["m_fieldlist"][]=$obj;
						$proto65=array();
			$obj = new SQLField(array(
	"m_strName" => "ichiba_title",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin"
));

$proto65["m_sql"] = "`shouhin`.`ichiba_title`";
$proto65["m_srcTableName"] = "shouhin";
$proto65["m_expr"]=$obj;
$proto65["m_alias"] = "";
$obj = new SQLFieldListItem($proto65);

$proto0["m_fieldlist"][]=$obj;
						$proto67=array();
			$obj = new SQLField(array(
	"m_strName" => "gold_property",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin"
));

$proto67["m_sql"] = "`shouhin`.`gold_property`";
$proto67["m_srcTableName"] = "shouhin";
$proto67["m_expr"]=$obj;
$proto67["m_alias"] = "";
$obj = new SQLFieldListItem($proto67);

$proto0["m_fieldlist"][]=$obj;
						$proto69=array();
			$obj = new SQLField(array(
	"m_strName" => "Gram",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin"
));

$proto69["m_sql"] = "`shouhin`.`Gram`";
$proto69["m_srcTableName"] = "shouhin";
$proto69["m_expr"]=$obj;
$proto69["m_alias"] = "";
$obj = new SQLFieldListItem($proto69);

$proto0["m_fieldlist"][]=$obj;
						$proto71=array();
			$obj = new SQLField(array(
	"m_strName" => "price_per_gram",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin"
));

$proto71["m_sql"] = "`shouhin`.`price_per_gram`";
$proto71["m_srcTableName"] = "shouhin";
$proto71["m_expr"]=$obj;
$proto71["m_alias"] = "";
$obj = new SQLFieldListItem($proto71);

$proto0["m_fieldlist"][]=$obj;
						$proto73=array();
			$obj = new SQLField(array(
	"m_strName" => "Parent_stone",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin"
));

$proto73["m_sql"] = "`shouhin`.`Parent_stone`";
$proto73["m_srcTableName"] = "shouhin";
$proto73["m_expr"]=$obj;
$proto73["m_alias"] = "";
$obj = new SQLFieldListItem($proto73);

$proto0["m_fieldlist"][]=$obj;
						$proto75=array();
			$obj = new SQLField(array(
	"m_strName" => "price_per_parent_stone",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin"
));

$proto75["m_sql"] = "`shouhin`.`price_per_parent_stone`";
$proto75["m_srcTableName"] = "shouhin";
$proto75["m_expr"]=$obj;
$proto75["m_alias"] = "";
$obj = new SQLFieldListItem($proto75);

$proto0["m_fieldlist"][]=$obj;
						$proto77=array();
			$obj = new SQLField(array(
	"m_strName" => "Aside_stone",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin"
));

$proto77["m_sql"] = "`shouhin`.`Aside_stone`";
$proto77["m_srcTableName"] = "shouhin";
$proto77["m_expr"]=$obj;
$proto77["m_alias"] = "";
$obj = new SQLFieldListItem($proto77);

$proto0["m_fieldlist"][]=$obj;
						$proto79=array();
			$obj = new SQLField(array(
	"m_strName" => "price_per_aside_stone",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin"
));

$proto79["m_sql"] = "`shouhin`.`price_per_aside_stone`";
$proto79["m_srcTableName"] = "shouhin";
$proto79["m_expr"]=$obj;
$proto79["m_alias"] = "";
$obj = new SQLFieldListItem($proto79);

$proto0["m_fieldlist"][]=$obj;
						$proto81=array();
			$obj = new SQLField(array(
	"m_strName" => "Appraiser",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin"
));

$proto81["m_sql"] = "`shouhin`.`Appraiser`";
$proto81["m_srcTableName"] = "shouhin";
$proto81["m_expr"]=$obj;
$proto81["m_alias"] = "";
$obj = new SQLFieldListItem($proto81);

$proto0["m_fieldlist"][]=$obj;
						$proto83=array();
			$obj = new SQLField(array(
	"m_strName" => "Ring_size",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin"
));

$proto83["m_sql"] = "`shouhin`.`Ring_size`";
$proto83["m_srcTableName"] = "shouhin";
$proto83["m_expr"]=$obj;
$proto83["m_alias"] = "";
$obj = new SQLFieldListItem($proto83);

$proto0["m_fieldlist"][]=$obj;
						$proto85=array();
			$obj = new SQLField(array(
	"m_strName" => "Remarks",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin"
));

$proto85["m_sql"] = "`shouhin`.`Remarks`";
$proto85["m_srcTableName"] = "shouhin";
$proto85["m_expr"]=$obj;
$proto85["m_alias"] = "";
$obj = new SQLFieldListItem($proto85);

$proto0["m_fieldlist"][]=$obj;
						$proto87=array();
			$obj = new SQLField(array(
	"m_strName" => "Destination_selling",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin"
));

$proto87["m_sql"] = "`shouhin`.`Destination_selling`";
$proto87["m_srcTableName"] = "shouhin";
$proto87["m_expr"]=$obj;
$proto87["m_alias"] = "";
$obj = new SQLFieldListItem($proto87);

$proto0["m_fieldlist"][]=$obj;
						$proto89=array();
			$obj = new SQLField(array(
	"m_strName" => "Finish",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin"
));

$proto89["m_sql"] = "`shouhin`.`Finish`";
$proto89["m_srcTableName"] = "shouhin";
$proto89["m_expr"]=$obj;
$proto89["m_alias"] = "";
$obj = new SQLFieldListItem($proto89);

$proto0["m_fieldlist"][]=$obj;
						$proto91=array();
			$obj = new SQLField(array(
	"m_strName" => "Discrimination",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin"
));

$proto91["m_sql"] = "`shouhin`.`Discrimination`";
$proto91["m_srcTableName"] = "shouhin";
$proto91["m_expr"]=$obj;
$proto91["m_alias"] = "";
$obj = new SQLFieldListItem($proto91);

$proto0["m_fieldlist"][]=$obj;
						$proto93=array();
			$obj = new SQLField(array(
	"m_strName" => "accessories",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin"
));

$proto93["m_sql"] = "`shouhin`.`accessories`";
$proto93["m_srcTableName"] = "shouhin";
$proto93["m_expr"]=$obj;
$proto93["m_alias"] = "";
$obj = new SQLFieldListItem($proto93);

$proto0["m_fieldlist"][]=$obj;
						$proto95=array();
			$obj = new SQLField(array(
	"m_strName" => "priority",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin"
));

$proto95["m_sql"] = "`shouhin`.`priority`";
$proto95["m_srcTableName"] = "shouhin";
$proto95["m_expr"]=$obj;
$proto95["m_alias"] = "";
$obj = new SQLFieldListItem($proto95);

$proto0["m_fieldlist"][]=$obj;
						$proto97=array();
			$obj = new SQLField(array(
	"m_strName" => "A_storage",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin"
));

$proto97["m_sql"] = "`shouhin`.`A_storage`";
$proto97["m_srcTableName"] = "shouhin";
$proto97["m_expr"]=$obj;
$proto97["m_alias"] = "";
$obj = new SQLFieldListItem($proto97);

$proto0["m_fieldlist"][]=$obj;
						$proto99=array();
			$obj = new SQLField(array(
	"m_strName" => "price",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin"
));

$proto99["m_sql"] = "`shouhin`.`price`";
$proto99["m_srcTableName"] = "shouhin";
$proto99["m_expr"]=$obj;
$proto99["m_alias"] = "";
$obj = new SQLFieldListItem($proto99);

$proto0["m_fieldlist"][]=$obj;
						$proto101=array();
			$obj = new SQLField(array(
	"m_strName" => "sales_price",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin"
));

$proto101["m_sql"] = "`shouhin`.`sales_price`";
$proto101["m_srcTableName"] = "shouhin";
$proto101["m_expr"]=$obj;
$proto101["m_alias"] = "";
$obj = new SQLFieldListItem($proto101);

$proto0["m_fieldlist"][]=$obj;
						$proto103=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(shouhin.sales_price - shouhin.price)"
));

$proto103["m_sql"] = "(shouhin.sales_price - shouhin.price)";
$proto103["m_srcTableName"] = "shouhin";
$proto103["m_expr"]=$obj;
$proto103["m_alias"] = "sagaku_price";
$obj = new SQLFieldListItem($proto103);

$proto0["m_fieldlist"][]=$obj;
						$proto105=array();
			$obj = new SQLField(array(
	"m_strName" => "comment",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin"
));

$proto105["m_sql"] = "`shouhin`.`comment`";
$proto105["m_srcTableName"] = "shouhin";
$proto105["m_expr"]=$obj;
$proto105["m_alias"] = "";
$obj = new SQLFieldListItem($proto105);

$proto0["m_fieldlist"][]=$obj;
						$proto107=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin"
));

$proto107["m_sql"] = "`shouhin`.`description`";
$proto107["m_srcTableName"] = "shouhin";
$proto107["m_expr"]=$obj;
$proto107["m_alias"] = "";
$obj = new SQLFieldListItem($proto107);

$proto0["m_fieldlist"][]=$obj;
						$proto109=array();
			$obj = new SQLField(array(
	"m_strName" => "nyuukin_price",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin"
));

$proto109["m_sql"] = "`shouhin`.`nyuukin_price`";
$proto109["m_srcTableName"] = "shouhin";
$proto109["m_expr"]=$obj;
$proto109["m_alias"] = "";
$obj = new SQLFieldListItem($proto109);

$proto0["m_fieldlist"][]=$obj;
						$proto111=array();
			$obj = new SQLField(array(
	"m_strName" => "satei_by",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin"
));

$proto111["m_sql"] = "`shouhin`.`satei_by`";
$proto111["m_srcTableName"] = "shouhin";
$proto111["m_expr"]=$obj;
$proto111["m_alias"] = "";
$obj = new SQLFieldListItem($proto111);

$proto0["m_fieldlist"][]=$obj;
						$proto113=array();
			$obj = new SQLField(array(
	"m_strName" => "satei_hi",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin"
));

$proto113["m_sql"] = "`shouhin`.`satei_hi`";
$proto113["m_srcTableName"] = "shouhin";
$proto113["m_expr"]=$obj;
$proto113["m_alias"] = "";
$obj = new SQLFieldListItem($proto113);

$proto0["m_fieldlist"][]=$obj;
						$proto115=array();
			$obj = new SQLField(array(
	"m_strName" => "REG_AUTHOR",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin"
));

$proto115["m_sql"] = "`shouhin`.`REG_AUTHOR`";
$proto115["m_srcTableName"] = "shouhin";
$proto115["m_expr"]=$obj;
$proto115["m_alias"] = "";
$obj = new SQLFieldListItem($proto115);

$proto0["m_fieldlist"][]=$obj;
						$proto117=array();
			$obj = new SQLField(array(
	"m_strName" => "DT_UP_DATE",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin"
));

$proto117["m_sql"] = "`shouhin`.`DT_UP_DATE`";
$proto117["m_srcTableName"] = "shouhin";
$proto117["m_expr"]=$obj;
$proto117["m_alias"] = "";
$obj = new SQLFieldListItem($proto117);

$proto0["m_fieldlist"][]=$obj;
						$proto119=array();
			$obj = new SQLField(array(
	"m_strName" => "kaitori_by",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin"
));

$proto119["m_sql"] = "`shouhin`.`kaitori_by`";
$proto119["m_srcTableName"] = "shouhin";
$proto119["m_expr"]=$obj;
$proto119["m_alias"] = "";
$obj = new SQLFieldListItem($proto119);

$proto0["m_fieldlist"][]=$obj;
						$proto121=array();
			$obj = new SQLField(array(
	"m_strName" => "kaitory_hi",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin"
));

$proto121["m_sql"] = "`shouhin`.`kaitory_hi`";
$proto121["m_srcTableName"] = "shouhin";
$proto121["m_expr"]=$obj;
$proto121["m_alias"] = "";
$obj = new SQLFieldListItem($proto121);

$proto0["m_fieldlist"][]=$obj;
						$proto123=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_saisun_sha",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin"
));

$proto123["m_sql"] = "`shouhin`.`yahoo_saisun_sha`";
$proto123["m_srcTableName"] = "shouhin";
$proto123["m_expr"]=$obj;
$proto123["m_alias"] = "";
$obj = new SQLFieldListItem($proto123);

$proto0["m_fieldlist"][]=$obj;
						$proto125=array();
			$obj = new SQLField(array(
	"m_strName" => "saisun_start",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin"
));

$proto125["m_sql"] = "`shouhin`.`saisun_start`";
$proto125["m_srcTableName"] = "shouhin";
$proto125["m_expr"]=$obj;
$proto125["m_alias"] = "";
$obj = new SQLFieldListItem($proto125);

$proto0["m_fieldlist"][]=$obj;
						$proto127=array();
			$obj = new SQLField(array(
	"m_strName" => "saisun_end",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin"
));

$proto127["m_sql"] = "`shouhin`.`saisun_end`";
$proto127["m_srcTableName"] = "shouhin";
$proto127["m_expr"]=$obj;
$proto127["m_alias"] = "";
$obj = new SQLFieldListItem($proto127);

$proto0["m_fieldlist"][]=$obj;
						$proto129=array();
			$proto130=array();
$proto130["m_functiontype"] = "SQLF_CUSTOM";
$proto130["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "shouhin.saisun_end"
));

$proto130["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "shouhin.saisun_start"
));

$proto130["m_arguments"][]=$obj;
$proto130["m_strFunctionName"] = "TIMEDIFF";
$obj = new SQLFunctionCall($proto130);

$proto129["m_sql"] = "TIMEDIFF(shouhin.saisun_end, shouhin.saisun_start)";
$proto129["m_srcTableName"] = "shouhin";
$proto129["m_expr"]=$obj;
$proto129["m_alias"] = "saisun_time";
$obj = new SQLFieldListItem($proto129);

$proto0["m_fieldlist"][]=$obj;
						$proto133=array();
			$obj = new SQLField(array(
	"m_strName" => "REG_PHOTOGRAPHER",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin"
));

$proto133["m_sql"] = "`shouhin`.`REG_PHOTOGRAPHER`";
$proto133["m_srcTableName"] = "shouhin";
$proto133["m_expr"]=$obj;
$proto133["m_alias"] = "";
$obj = new SQLFieldListItem($proto133);

$proto0["m_fieldlist"][]=$obj;
						$proto135=array();
			$obj = new SQLField(array(
	"m_strName" => "REG_PHOTOGRAPHER_DATE",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin"
));

$proto135["m_sql"] = "`shouhin`.`REG_PHOTOGRAPHER_DATE`";
$proto135["m_srcTableName"] = "shouhin";
$proto135["m_expr"]=$obj;
$proto135["m_alias"] = "";
$obj = new SQLFieldListItem($proto135);

$proto0["m_fieldlist"][]=$obj;
						$proto137=array();
			$obj = new SQLField(array(
	"m_strName" => "REG_KAKOU",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin"
));

$proto137["m_sql"] = "`shouhin`.`REG_KAKOU`";
$proto137["m_srcTableName"] = "shouhin";
$proto137["m_expr"]=$obj;
$proto137["m_alias"] = "";
$obj = new SQLFieldListItem($proto137);

$proto0["m_fieldlist"][]=$obj;
						$proto139=array();
			$obj = new SQLField(array(
	"m_strName" => "REG_KAKOU_DATE",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin"
));

$proto139["m_sql"] = "`shouhin`.`REG_KAKOU_DATE`";
$proto139["m_srcTableName"] = "shouhin";
$proto139["m_expr"]=$obj;
$proto139["m_alias"] = "";
$obj = new SQLFieldListItem($proto139);

$proto0["m_fieldlist"][]=$obj;
						$proto141=array();
			$obj = new SQLField(array(
	"m_strName" => "REG_PACKINGS",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin"
));

$proto141["m_sql"] = "`shouhin`.`REG_PACKINGS`";
$proto141["m_srcTableName"] = "shouhin";
$proto141["m_expr"]=$obj;
$proto141["m_alias"] = "";
$obj = new SQLFieldListItem($proto141);

$proto0["m_fieldlist"][]=$obj;
						$proto143=array();
			$obj = new SQLField(array(
	"m_strName" => "DT_PACKING_DATE",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin"
));

$proto143["m_sql"] = "`shouhin`.`DT_PACKING_DATE`";
$proto143["m_srcTableName"] = "shouhin";
$proto143["m_expr"]=$obj;
$proto143["m_alias"] = "";
$obj = new SQLFieldListItem($proto143);

$proto0["m_fieldlist"][]=$obj;
						$proto145=array();
			$obj = new SQLField(array(
	"m_strName" => "AWAZU_NIN",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin"
));

$proto145["m_sql"] = "`shouhin`.`AWAZU_NIN`";
$proto145["m_srcTableName"] = "shouhin";
$proto145["m_expr"]=$obj;
$proto145["m_alias"] = "";
$obj = new SQLFieldListItem($proto145);

$proto0["m_fieldlist"][]=$obj;
						$proto147=array();
			$obj = new SQLField(array(
	"m_strName" => "AWAZU_DATE",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin"
));

$proto147["m_sql"] = "`shouhin`.`AWAZU_DATE`";
$proto147["m_srcTableName"] = "shouhin";
$proto147["m_expr"]=$obj;
$proto147["m_alias"] = "";
$obj = new SQLFieldListItem($proto147);

$proto0["m_fieldlist"][]=$obj;
						$proto149=array();
			$obj = new SQLField(array(
	"m_strName" => "REG_EXHIBITOR",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin"
));

$proto149["m_sql"] = "`shouhin`.`REG_EXHIBITOR`";
$proto149["m_srcTableName"] = "shouhin";
$proto149["m_expr"]=$obj;
$proto149["m_alias"] = "";
$obj = new SQLFieldListItem($proto149);

$proto0["m_fieldlist"][]=$obj;
						$proto151=array();
			$obj = new SQLField(array(
	"m_strName" => "Exhibition_Date",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin"
));

$proto151["m_sql"] = "`shouhin`.`Exhibition_Date`";
$proto151["m_srcTableName"] = "shouhin";
$proto151["m_expr"]=$obj;
$proto151["m_alias"] = "";
$obj = new SQLFieldListItem($proto151);

$proto0["m_fieldlist"][]=$obj;
						$proto153=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin"
));

$proto153["m_sql"] = "`shouhin`.`updated_by`";
$proto153["m_srcTableName"] = "shouhin";
$proto153["m_expr"]=$obj;
$proto153["m_alias"] = "";
$obj = new SQLFieldListItem($proto153);

$proto0["m_fieldlist"][]=$obj;
						$proto155=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin"
));

$proto155["m_sql"] = "`shouhin`.`updated_at`";
$proto155["m_srcTableName"] = "shouhin";
$proto155["m_expr"]=$obj;
$proto155["m_alias"] = "";
$obj = new SQLFieldListItem($proto155);

$proto0["m_fieldlist"][]=$obj;
						$proto157=array();
			$obj = new SQLField(array(
	"m_strName" => "kanryou_henbi",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin"
));

$proto157["m_sql"] = "`shouhin`.`kanryou_henbi`";
$proto157["m_srcTableName"] = "shouhin";
$proto157["m_expr"]=$obj;
$proto157["m_alias"] = "";
$obj = new SQLFieldListItem($proto157);

$proto0["m_fieldlist"][]=$obj;
						$proto159=array();
			$obj = new SQLField(array(
	"m_strName" => "browseid",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin"
));

$proto159["m_sql"] = "`shouhin`.`browseid`";
$proto159["m_srcTableName"] = "shouhin";
$proto159["m_expr"]=$obj;
$proto159["m_alias"] = "";
$obj = new SQLFieldListItem($proto159);

$proto0["m_fieldlist"][]=$obj;
						$proto161=array();
			$obj = new SQLField(array(
	"m_strName" => "browsenode",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin"
));

$proto161["m_sql"] = "`shouhin`.`browsenode`";
$proto161["m_srcTableName"] = "shouhin";
$proto161["m_expr"]=$obj;
$proto161["m_alias"] = "";
$obj = new SQLFieldListItem($proto161);

$proto0["m_fieldlist"][]=$obj;
						$proto163=array();
			$obj = new SQLField(array(
	"m_strName" => "price_for_site",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin"
));

$proto163["m_sql"] = "`shouhin`.`price_for_site`";
$proto163["m_srcTableName"] = "shouhin";
$proto163["m_expr"]=$obj;
$proto163["m_alias"] = "";
$obj = new SQLFieldListItem($proto163);

$proto0["m_fieldlist"][]=$obj;
						$proto165=array();
			$obj = new SQLField(array(
	"m_strName" => "ecc_seq",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "shouhin"
));

$proto165["m_sql"] = "`Eoc`.`ecc_seq`";
$proto165["m_srcTableName"] = "shouhin";
$proto165["m_expr"]=$obj;
$proto165["m_alias"] = "";
$obj = new SQLFieldListItem($proto165);

$proto0["m_fieldlist"][]=$obj;
						$proto167=array();
			$obj = new SQLField(array(
	"m_strName" => "goods_title",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin"
));

$proto167["m_sql"] = "`shouhin`.`goods_title`";
$proto167["m_srcTableName"] = "shouhin";
$proto167["m_expr"]=$obj;
$proto167["m_alias"] = "";
$obj = new SQLFieldListItem($proto167);

$proto0["m_fieldlist"][]=$obj;
						$proto169=array();
			$obj = new SQLField(array(
	"m_strName" => "registerd_id",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "shouhin"
));

$proto169["m_sql"] = "`Eoc`.`registerd_id`";
$proto169["m_srcTableName"] = "shouhin";
$proto169["m_expr"]=$obj;
$proto169["m_alias"] = "";
$obj = new SQLFieldListItem($proto169);

$proto0["m_fieldlist"][]=$obj;
						$proto171=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_sankou_uwadai",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin"
));

$proto171["m_sql"] = "`shouhin`.`yahoo_sankou_uwadai`";
$proto171["m_srcTableName"] = "shouhin";
$proto171["m_expr"]=$obj;
$proto171["m_alias"] = "";
$obj = new SQLFieldListItem($proto171);

$proto0["m_fieldlist"][]=$obj;
						$proto173=array();
			$obj = new SQLField(array(
	"m_strName" => "FLAG_NO_ARRIVAL",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin"
));

$proto173["m_sql"] = "`shouhin`.`FLAG_NO_ARRIVAL`";
$proto173["m_srcTableName"] = "shouhin";
$proto173["m_expr"]=$obj;
$proto173["m_alias"] = "";
$obj = new SQLFieldListItem($proto173);

$proto0["m_fieldlist"][]=$obj;
						$proto175=array();
			$obj = new SQLField(array(
	"m_strName" => "logo",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin"
));

$proto175["m_sql"] = "`shouhin`.`logo`";
$proto175["m_srcTableName"] = "shouhin";
$proto175["m_expr"]=$obj;
$proto175["m_alias"] = "";
$obj = new SQLFieldListItem($proto175);

$proto0["m_fieldlist"][]=$obj;
						$proto177=array();
			$obj = new SQLField(array(
	"m_strName" => "parts",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin"
));

$proto177["m_sql"] = "`shouhin`.`parts`";
$proto177["m_srcTableName"] = "shouhin";
$proto177["m_expr"]=$obj;
$proto177["m_alias"] = "";
$obj = new SQLFieldListItem($proto177);

$proto0["m_fieldlist"][]=$obj;
						$proto179=array();
			$obj = new SQLField(array(
	"m_strName" => "country_of_origin",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin"
));

$proto179["m_sql"] = "`shouhin`.`country_of_origin`";
$proto179["m_srcTableName"] = "shouhin";
$proto179["m_expr"]=$obj;
$proto179["m_alias"] = "";
$obj = new SQLFieldListItem($proto179);

$proto0["m_fieldlist"][]=$obj;
						$proto181=array();
			$obj = new SQLField(array(
	"m_strName" => "zipper",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin"
));

$proto181["m_sql"] = "`shouhin`.`zipper`";
$proto181["m_srcTableName"] = "shouhin";
$proto181["m_expr"]=$obj;
$proto181["m_alias"] = "";
$obj = new SQLFieldListItem($proto181);

$proto0["m_fieldlist"][]=$obj;
						$proto183=array();
			$obj = new SQLField(array(
	"m_strName" => "guarantee",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin"
));

$proto183["m_sql"] = "`shouhin`.`guarantee`";
$proto183["m_srcTableName"] = "shouhin";
$proto183["m_expr"]=$obj;
$proto183["m_alias"] = "";
$obj = new SQLFieldListItem($proto183);

$proto0["m_fieldlist"][]=$obj;
						$proto185=array();
			$obj = new SQLField(array(
	"m_strName" => "errors",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin"
));

$proto185["m_sql"] = "`shouhin`.`errors`";
$proto185["m_srcTableName"] = "shouhin";
$proto185["m_expr"]=$obj;
$proto185["m_alias"] = "";
$obj = new SQLFieldListItem($proto185);

$proto0["m_fieldlist"][]=$obj;
						$proto187=array();
			$obj = new SQLField(array(
	"m_strName" => "designer",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin"
));

$proto187["m_sql"] = "`shouhin`.`designer`";
$proto187["m_srcTableName"] = "shouhin";
$proto187["m_expr"]=$obj;
$proto187["m_alias"] = "";
$obj = new SQLFieldListItem($proto187);

$proto0["m_fieldlist"][]=$obj;
						$proto189=array();
			$obj = new SQLField(array(
	"m_strName" => "hahakai",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin"
));

$proto189["m_sql"] = "`shouhin`.`hahakai`";
$proto189["m_srcTableName"] = "shouhin";
$proto189["m_expr"]=$obj;
$proto189["m_alias"] = "";
$obj = new SQLFieldListItem($proto189);

$proto0["m_fieldlist"][]=$obj;
						$proto191=array();
			$obj = new SQLField(array(
	"m_strName" => "effect",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin"
));

$proto191["m_sql"] = "`shouhin`.`effect`";
$proto191["m_srcTableName"] = "shouhin";
$proto191["m_expr"]=$obj;
$proto191["m_alias"] = "";
$obj = new SQLFieldListItem($proto191);

$proto0["m_fieldlist"][]=$obj;
						$proto193=array();
			$obj = new SQLField(array(
	"m_strName" => "shape",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin"
));

$proto193["m_sql"] = "`shouhin`.`shape`";
$proto193["m_srcTableName"] = "shouhin";
$proto193["m_expr"]=$obj;
$proto193["m_alias"] = "";
$obj = new SQLFieldListItem($proto193);

$proto0["m_fieldlist"][]=$obj;
						$proto195=array();
			$obj = new SQLField(array(
	"m_strName" => "cutting_style",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin"
));

$proto195["m_sql"] = "`shouhin`.`cutting_style`";
$proto195["m_srcTableName"] = "shouhin";
$proto195["m_expr"]=$obj;
$proto195["m_alias"] = "";
$obj = new SQLFieldListItem($proto195);

$proto0["m_fieldlist"][]=$obj;
						$proto197=array();
			$obj = new SQLField(array(
	"m_strName" => "chain_type",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin"
));

$proto197["m_sql"] = "`shouhin`.`chain_type`";
$proto197["m_srcTableName"] = "shouhin";
$proto197["m_expr"]=$obj;
$proto197["m_alias"] = "";
$obj = new SQLFieldListItem($proto197);

$proto0["m_fieldlist"][]=$obj;
						$proto199=array();
			$obj = new SQLField(array(
	"m_strName" => "number_of_stones",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin"
));

$proto199["m_sql"] = "`shouhin`.`number_of_stones`";
$proto199["m_srcTableName"] = "shouhin";
$proto199["m_expr"]=$obj;
$proto199["m_alias"] = "";
$obj = new SQLFieldListItem($proto199);

$proto0["m_fieldlist"][]=$obj;
						$proto201=array();
			$obj = new SQLField(array(
	"m_strName" => "amount",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin"
));

$proto201["m_sql"] = "`shouhin`.`amount`";
$proto201["m_srcTableName"] = "shouhin";
$proto201["m_expr"]=$obj;
$proto201["m_alias"] = "";
$obj = new SQLFieldListItem($proto201);

$proto0["m_fieldlist"][]=$obj;
						$proto203=array();
			$obj = new SQLField(array(
	"m_strName" => "producing_area",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin"
));

$proto203["m_sql"] = "`shouhin`.`producing_area`";
$proto203["m_srcTableName"] = "shouhin";
$proto203["m_expr"]=$obj;
$proto203["m_alias"] = "";
$obj = new SQLFieldListItem($proto203);

$proto0["m_fieldlist"][]=$obj;
						$proto205=array();
			$obj = new SQLField(array(
	"m_strName" => "satei_error",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin"
));

$proto205["m_sql"] = "`shouhin`.`satei_error`";
$proto205["m_srcTableName"] = "shouhin";
$proto205["m_expr"]=$obj;
$proto205["m_alias"] = "";
$obj = new SQLFieldListItem($proto205);

$proto0["m_fieldlist"][]=$obj;
						$proto207=array();
			$obj = new SQLField(array(
	"m_strName" => "serial_number_for_storage",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin"
));

$proto207["m_sql"] = "`shouhin`.`serial_number_for_storage`";
$proto207["m_srcTableName"] = "shouhin";
$proto207["m_expr"]=$obj;
$proto207["m_alias"] = "";
$obj = new SQLFieldListItem($proto207);

$proto0["m_fieldlist"][]=$obj;
						$proto209=array();
			$obj = new SQLField(array(
	"m_strName" => "price_for_site_flag",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin"
));

$proto209["m_sql"] = "`shouhin`.`price_for_site_flag`";
$proto209["m_srcTableName"] = "shouhin";
$proto209["m_expr"]=$obj;
$proto209["m_alias"] = "";
$obj = new SQLFieldListItem($proto209);

$proto0["m_fieldlist"][]=$obj;
						$proto211=array();
			$obj = new SQLField(array(
	"m_strName" => "Eoc_takuhai_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin"
));

$proto211["m_sql"] = "`shouhin`.`Eoc_takuhai_id`";
$proto211["m_srcTableName"] = "shouhin";
$proto211["m_expr"]=$obj;
$proto211["m_alias"] = "";
$obj = new SQLFieldListItem($proto211);

$proto0["m_fieldlist"][]=$obj;
						$proto213=array();
			$obj = new SQLField(array(
	"m_strName" => "Eoc_unfinished_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin"
));

$proto213["m_sql"] = "`shouhin`.`Eoc_unfinished_id`";
$proto213["m_srcTableName"] = "shouhin";
$proto213["m_expr"]=$obj;
$proto213["m_alias"] = "";
$obj = new SQLFieldListItem($proto213);

$proto0["m_fieldlist"][]=$obj;
						$proto215=array();
			$obj = new SQLField(array(
	"m_strName" => "Eoc_chigins_unfinished_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin"
));

$proto215["m_sql"] = "`shouhin`.`Eoc_chigins_unfinished_id`";
$proto215["m_srcTableName"] = "shouhin";
$proto215["m_expr"]=$obj;
$proto215["m_alias"] = "";
$obj = new SQLFieldListItem($proto215);

$proto0["m_fieldlist"][]=$obj;
						$proto217=array();
			$obj = new SQLField(array(
	"m_strName" => "product_style",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin"
));

$proto217["m_sql"] = "`shouhin`.`product_style`";
$proto217["m_srcTableName"] = "shouhin";
$proto217["m_expr"]=$obj;
$proto217["m_alias"] = "";
$obj = new SQLFieldListItem($proto217);

$proto0["m_fieldlist"][]=$obj;
						$proto219=array();
			$obj = new SQLField(array(
	"m_strName" => "shape_supplement",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin"
));

$proto219["m_sql"] = "`shouhin`.`shape_supplement`";
$proto219["m_srcTableName"] = "shouhin";
$proto219["m_expr"]=$obj;
$proto219["m_alias"] = "";
$obj = new SQLFieldListItem($proto219);

$proto0["m_fieldlist"][]=$obj;
						$proto221=array();
			$obj = new SQLField(array(
	"m_strName" => "unit",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin"
));

$proto221["m_sql"] = "`shouhin`.`unit`";
$proto221["m_srcTableName"] = "shouhin";
$proto221["m_expr"]=$obj;
$proto221["m_alias"] = "";
$obj = new SQLFieldListItem($proto221);

$proto0["m_fieldlist"][]=$obj;
						$proto223=array();
			$obj = new SQLField(array(
	"m_strName" => "chohyo_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin"
));

$proto223["m_sql"] = "`shouhin`.`chohyo_id`";
$proto223["m_srcTableName"] = "shouhin";
$proto223["m_expr"]=$obj;
$proto223["m_alias"] = "";
$obj = new SQLFieldListItem($proto223);

$proto0["m_fieldlist"][]=$obj;
						$proto225=array();
			$obj = new SQLField(array(
	"m_strName" => "meisai_number",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin"
));

$proto225["m_sql"] = "`shouhin`.`meisai_number`";
$proto225["m_srcTableName"] = "shouhin";
$proto225["m_expr"]=$obj;
$proto225["m_alias"] = "";
$obj = new SQLFieldListItem($proto225);

$proto0["m_fieldlist"][]=$obj;
						$proto227=array();
			$obj = new SQLField(array(
	"m_strName" => "days_keep_price",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin"
));

$proto227["m_sql"] = "`shouhin`.`days_keep_price`";
$proto227["m_srcTableName"] = "shouhin";
$proto227["m_expr"]=$obj;
$proto227["m_alias"] = "";
$obj = new SQLFieldListItem($proto227);

$proto0["m_fieldlist"][]=$obj;
						$proto229=array();
			$obj = new SQLField(array(
	"m_strName" => "label_output_flag",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin"
));

$proto229["m_sql"] = "`shouhin`.`label_output_flag`";
$proto229["m_srcTableName"] = "shouhin";
$proto229["m_expr"]=$obj;
$proto229["m_alias"] = "";
$obj = new SQLFieldListItem($proto229);

$proto0["m_fieldlist"][]=$obj;
						$proto231=array();
			$obj = new SQLField(array(
	"m_strName" => "zaiko",
	"m_strTable" => "_goods_status2",
	"m_srcTableName" => "shouhin"
));

$proto231["m_sql"] = "`_goods_status2`.`zaiko`";
$proto231["m_srcTableName"] = "shouhin";
$proto231["m_expr"]=$obj;
$proto231["m_alias"] = "";
$obj = new SQLFieldListItem($proto231);

$proto0["m_fieldlist"][]=$obj;
						$proto233=array();
			$obj = new SQLField(array(
	"m_strName" => "itaku_flag",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin"
));

$proto233["m_sql"] = "`shouhin`.`itaku_flag`";
$proto233["m_srcTableName"] = "shouhin";
$proto233["m_expr"]=$obj;
$proto233["m_alias"] = "";
$obj = new SQLFieldListItem($proto233);

$proto0["m_fieldlist"][]=$obj;
						$proto235=array();
			$obj = new SQLField(array(
	"m_strName" => "category_class",
	"m_strTable" => "store_sub_categories",
	"m_srcTableName" => "shouhin"
));

$proto235["m_sql"] = "`store_sub_categories`.`category_class`";
$proto235["m_srcTableName"] = "shouhin";
$proto235["m_expr"]=$obj;
$proto235["m_alias"] = "";
$obj = new SQLFieldListItem($proto235);

$proto0["m_fieldlist"][]=$obj;
						$proto237=array();
			$obj = new SQLField(array(
	"m_strName" => "tentou_label_output_flag",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin"
));

$proto237["m_sql"] = "`shouhin`.`tentou_label_output_flag`";
$proto237["m_srcTableName"] = "shouhin";
$proto237["m_expr"]=$obj;
$proto237["m_alias"] = "";
$obj = new SQLFieldListItem($proto237);

$proto0["m_fieldlist"][]=$obj;
						$proto239=array();
			$obj = new SQLField(array(
	"m_strName" => "gold_check_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin"
));

$proto239["m_sql"] = "`shouhin`.`gold_check_id`";
$proto239["m_srcTableName"] = "shouhin";
$proto239["m_expr"]=$obj;
$proto239["m_alias"] = "";
$obj = new SQLFieldListItem($proto239);

$proto0["m_fieldlist"][]=$obj;
						$proto241=array();
			$obj = new SQLField(array(
	"m_strName" => "cost",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin"
));

$proto241["m_sql"] = "`shouhin`.`cost`";
$proto241["m_srcTableName"] = "shouhin";
$proto241["m_expr"]=$obj;
$proto241["m_alias"] = "";
$obj = new SQLFieldListItem($proto241);

$proto0["m_fieldlist"][]=$obj;
						$proto243=array();
			$obj = new SQLField(array(
	"m_strName" => "other_cost",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin"
));

$proto243["m_sql"] = "`shouhin`.`other_cost`";
$proto243["m_srcTableName"] = "shouhin";
$proto243["m_expr"]=$obj;
$proto243["m_alias"] = "";
$obj = new SQLFieldListItem($proto243);

$proto0["m_fieldlist"][]=$obj;
						$proto245=array();
			$obj = new SQLField(array(
	"m_strName" => "identification_cost",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin"
));

$proto245["m_sql"] = "`shouhin`.`identification_cost`";
$proto245["m_srcTableName"] = "shouhin";
$proto245["m_expr"]=$obj;
$proto245["m_alias"] = "";
$obj = new SQLFieldListItem($proto245);

$proto0["m_fieldlist"][]=$obj;
						$proto247=array();
			$obj = new SQLField(array(
	"m_strName" => "kinsa_flag",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin"
));

$proto247["m_sql"] = "`shouhin`.`kinsa_flag`";
$proto247["m_srcTableName"] = "shouhin";
$proto247["m_expr"]=$obj;
$proto247["m_alias"] = "";
$obj = new SQLFieldListItem($proto247);

$proto0["m_fieldlist"][]=$obj;
						$proto249=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "\"\""
));

$proto249["m_sql"] = "\"\"";
$proto249["m_srcTableName"] = "shouhin";
$proto249["m_expr"]=$obj;
$proto249["m_alias"] = "price_without_tax";
$obj = new SQLFieldListItem($proto249);

$proto0["m_fieldlist"][]=$obj;
						$proto251=array();
			$obj = new SQLField(array(
	"m_strName" => "slip_type",
	"m_strTable" => "gold_check",
	"m_srcTableName" => "shouhin"
));

$proto251["m_sql"] = "`gold_check`.`slip_type`";
$proto251["m_srcTableName"] = "shouhin";
$proto251["m_expr"]=$obj;
$proto251["m_alias"] = "";
$obj = new SQLFieldListItem($proto251);

$proto0["m_fieldlist"][]=$obj;
						$proto253=array();
			$obj = new SQLField(array(
	"m_strName" => "Eoc_trader_id_for_buy",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin"
));

$proto253["m_sql"] = "`shouhin`.`Eoc_trader_id_for_buy`";
$proto253["m_srcTableName"] = "shouhin";
$proto253["m_expr"]=$obj;
$proto253["m_alias"] = "";
$obj = new SQLFieldListItem($proto253);

$proto0["m_fieldlist"][]=$obj;
						$proto255=array();
			$obj = new SQLField(array(
	"m_strName" => "Eoc_trader_id_for_sell",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin"
));

$proto255["m_sql"] = "`shouhin`.`Eoc_trader_id_for_sell`";
$proto255["m_srcTableName"] = "shouhin";
$proto255["m_expr"]=$obj;
$proto255["m_alias"] = "";
$obj = new SQLFieldListItem($proto255);

$proto0["m_fieldlist"][]=$obj;
						$proto257=array();
			$obj = new SQLField(array(
	"m_strName" => "slip_number",
	"m_strTable" => "Eoc_trader",
	"m_srcTableName" => "shouhin"
));

$proto257["m_sql"] = "`Eoc_trader`.`slip_number`";
$proto257["m_srcTableName"] = "shouhin";
$proto257["m_expr"]=$obj;
$proto257["m_alias"] = "slip_number_for_buy";
$obj = new SQLFieldListItem($proto257);

$proto0["m_fieldlist"][]=$obj;
						$proto259=array();
			$obj = new SQLField(array(
	"m_strName" => "market",
	"m_strTable" => "Eoc_trader",
	"m_srcTableName" => "shouhin"
));

$proto259["m_sql"] = "`Eoc_trader`.`market`";
$proto259["m_srcTableName"] = "shouhin";
$proto259["m_expr"]=$obj;
$proto259["m_alias"] = "market_for_buy";
$obj = new SQLFieldListItem($proto259);

$proto0["m_fieldlist"][]=$obj;
						$proto261=array();
			$obj = new SQLField(array(
	"m_strName" => "date",
	"m_strTable" => "Eoc_trader",
	"m_srcTableName" => "shouhin"
));

$proto261["m_sql"] = "`Eoc_trader`.`date`";
$proto261["m_srcTableName"] = "shouhin";
$proto261["m_expr"]=$obj;
$proto261["m_alias"] = "date_for_buy";
$obj = new SQLFieldListItem($proto261);

$proto0["m_fieldlist"][]=$obj;
						$proto263=array();
			$obj = new SQLField(array(
	"m_strName" => "slip_number",
	"m_strTable" => "Eoc_trader1",
	"m_srcTableName" => "shouhin"
));

$proto263["m_sql"] = "`Eoc_trader1`.`slip_number`";
$proto263["m_srcTableName"] = "shouhin";
$proto263["m_expr"]=$obj;
$proto263["m_alias"] = "slip_number_for_sell";
$obj = new SQLFieldListItem($proto263);

$proto0["m_fieldlist"][]=$obj;
						$proto265=array();
			$obj = new SQLField(array(
	"m_strName" => "market",
	"m_strTable" => "Eoc_trader1",
	"m_srcTableName" => "shouhin"
));

$proto265["m_sql"] = "`Eoc_trader1`.`market`";
$proto265["m_srcTableName"] = "shouhin";
$proto265["m_expr"]=$obj;
$proto265["m_alias"] = "market_for_sell";
$obj = new SQLFieldListItem($proto265);

$proto0["m_fieldlist"][]=$obj;
						$proto267=array();
			$obj = new SQLField(array(
	"m_strName" => "date",
	"m_strTable" => "Eoc_trader1",
	"m_srcTableName" => "shouhin"
));

$proto267["m_sql"] = "`Eoc_trader1`.`date`";
$proto267["m_srcTableName"] = "shouhin";
$proto267["m_expr"]=$obj;
$proto267["m_alias"] = "date_for_sell";
$obj = new SQLFieldListItem($proto267);

$proto0["m_fieldlist"][]=$obj;
						$proto269=array();
			$obj = new SQLField(array(
	"m_strName" => "trading_sort_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin"
));

$proto269["m_sql"] = "`shouhin`.`trading_sort_id`";
$proto269["m_srcTableName"] = "shouhin";
$proto269["m_expr"]=$obj;
$proto269["m_alias"] = "";
$obj = new SQLFieldListItem($proto269);

$proto0["m_fieldlist"][]=$obj;
						$proto271=array();
			$obj = new SQLField(array(
	"m_strName" => "many_product_group_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin"
));

$proto271["m_sql"] = "`shouhin`.`many_product_group_id`";
$proto271["m_srcTableName"] = "shouhin";
$proto271["m_expr"]=$obj;
$proto271["m_alias"] = "";
$obj = new SQLFieldListItem($proto271);

$proto0["m_fieldlist"][]=$obj;
						$proto273=array();
			$obj = new SQLField(array(
	"m_strName" => "destination_sold_out",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin"
));

$proto273["m_sql"] = "`shouhin`.`destination_sold_out`";
$proto273["m_srcTableName"] = "shouhin";
$proto273["m_expr"]=$obj;
$proto273["m_alias"] = "";
$obj = new SQLFieldListItem($proto273);

$proto0["m_fieldlist"][]=$obj;
						$proto275=array();
			$obj = new SQLField(array(
	"m_strName" => "sales_date",
	"m_strTable" => "sales_report",
	"m_srcTableName" => "shouhin"
));

$proto275["m_sql"] = "`sales_report`.`sales_date`";
$proto275["m_srcTableName"] = "shouhin";
$proto275["m_expr"]=$obj;
$proto275["m_alias"] = "";
$obj = new SQLFieldListItem($proto275);

$proto0["m_fieldlist"][]=$obj;
						$proto277=array();
			$obj = new SQLField(array(
	"m_strName" => "purchase_category",
	"m_strTable" => "purchase_category_report",
	"m_srcTableName" => "shouhin"
));

$proto277["m_sql"] = "`purchase_category_report`.`purchase_category`";
$proto277["m_srcTableName"] = "shouhin";
$proto277["m_expr"]=$obj;
$proto277["m_alias"] = "purchase_category";
$obj = new SQLFieldListItem($proto277);

$proto0["m_fieldlist"][]=$obj;
						$proto279=array();
			$obj = new SQLField(array(
	"m_strName" => "mst_business_partner_id",
	"m_strTable" => "sales_report",
	"m_srcTableName" => "shouhin"
));

$proto279["m_sql"] = "`sales_report`.`mst_business_partner_id`";
$proto279["m_srcTableName"] = "shouhin";
$proto279["m_expr"]=$obj;
$proto279["m_alias"] = "";
$obj = new SQLFieldListItem($proto279);

$proto0["m_fieldlist"][]=$obj;
						$proto281=array();
			$obj = new SQLField(array(
	"m_strName" => "commission",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin"
));

$proto281["m_sql"] = "`shouhin`.`commission`";
$proto281["m_srcTableName"] = "shouhin";
$proto281["m_expr"]=$obj;
$proto281["m_alias"] = "";
$obj = new SQLFieldListItem($proto281);

$proto0["m_fieldlist"][]=$obj;
						$proto283=array();
			$obj = new SQLField(array(
	"m_strName" => "is_recovery",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin"
));

$proto283["m_sql"] = "`shouhin`.`is_recovery`";
$proto283["m_srcTableName"] = "shouhin";
$proto283["m_expr"]=$obj;
$proto283["m_alias"] = "";
$obj = new SQLFieldListItem($proto283);

$proto0["m_fieldlist"][]=$obj;
						$proto285=array();
			$obj = new SQLField(array(
	"m_strName" => "sales_cost",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin"
));

$proto285["m_sql"] = "`shouhin`.`sales_cost`";
$proto285["m_srcTableName"] = "shouhin";
$proto285["m_expr"]=$obj;
$proto285["m_alias"] = "";
$obj = new SQLFieldListItem($proto285);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto287=array();
$proto287["m_link"] = "SQLL_MAIN";
			$proto288=array();
$proto288["m_strName"] = "shouhin";
$proto288["m_srcTableName"] = "shouhin";
$proto288["m_columns"] = array();
$proto288["m_columns"][] = "product_id";
$proto288["m_columns"][] = "category_id";
$proto288["m_columns"][] = "goods_title";
$proto288["m_columns"][] = "title";
$proto288["m_columns"][] = "sub_category_id1";
$proto288["m_columns"][] = "ecc_id";
$proto288["m_columns"][] = "price";
$proto288["m_columns"][] = "yahoo";
$proto288["m_columns"][] = "remark";
$proto288["m_columns"][] = "sales_price";
$proto288["m_columns"][] = "description";
$proto288["m_columns"][] = "status";
$proto288["m_columns"][] = "product_num";
$proto288["m_columns"][] = "updated_at";
$proto288["m_columns"][] = "yahoo_size";
$proto288["m_columns"][] = "yahoo_title";
$proto288["m_columns"][] = "yahoo_junle";
$proto288["m_columns"][] = "yahoo_sankou_uwadai";
$proto288["m_columns"][] = "yahoo_sozai";
$proto288["m_columns"][] = "yahoo_color";
$proto288["m_columns"][] = "yahoo_kataban";
$proto288["m_columns"][] = "yahoo_condition1";
$proto288["m_columns"][] = "yahoo_condition2";
$proto288["m_columns"][] = "yahoo_fuzokuhin";
$proto288["m_columns"][] = "yahoo_sinaban";
$proto288["m_columns"][] = "yahoo_saisun_sha";
$proto288["m_columns"][] = "yahoo_sex";
$proto288["m_columns"][] = "box_id";
$proto288["m_columns"][] = "nyuukin_price";
$proto288["m_columns"][] = "updated_by";
$proto288["m_columns"][] = "raku_title";
$proto288["m_columns"][] = "raku_hyoujisaki_category2";
$proto288["m_columns"][] = "raku_hyoujisaki_category";
$proto288["m_columns"][] = "raku_hyoujisaki_category3";
$proto288["m_columns"][] = "timesta";
$proto288["m_columns"][] = "saisun_start";
$proto288["m_columns"][] = "saisun_end";
$proto288["m_columns"][] = "label_output_flag";
$proto288["m_columns"][] = "season";
$proto288["m_columns"][] = "kanryou_henbi";
$proto288["m_columns"][] = "box_sort";
$proto288["m_columns"][] = "satei_by";
$proto288["m_columns"][] = "kaitori_by";
$proto288["m_columns"][] = "comment";
$proto288["m_columns"][] = "satei_hi";
$proto288["m_columns"][] = "kaitory_hi";
$proto288["m_columns"][] = "REG_PHOTOGRAPHER";
$proto288["m_columns"][] = "REG_AUTHOR";
$proto288["m_columns"][] = "REG_PACKINGS";
$proto288["m_columns"][] = "REG_KAKOU_DATE";
$proto288["m_columns"][] = "REG_KAKOU";
$proto288["m_columns"][] = "REG_EXHIBITOR";
$proto288["m_columns"][] = "REG_PHOTOGRAPHER_DATE";
$proto288["m_columns"][] = "DT_PACKING_DATE";
$proto288["m_columns"][] = "DT_UP_DATE";
$proto288["m_columns"][] = "AWAZU_DATE";
$proto288["m_columns"][] = "AWAZU_NIN";
$proto288["m_columns"][] = "sabun_date";
$proto288["m_columns"][] = "browseid";
$proto288["m_columns"][] = "browsenode";
$proto288["m_columns"][] = "gold_property";
$proto288["m_columns"][] = "ichiba_title";
$proto288["m_columns"][] = "Gram";
$proto288["m_columns"][] = "Parent_stone";
$proto288["m_columns"][] = "Aside_stone";
$proto288["m_columns"][] = "Appraiser";
$proto288["m_columns"][] = "Remarks";
$proto288["m_columns"][] = "Destination_selling";
$proto288["m_columns"][] = "Finish";
$proto288["m_columns"][] = "Discrimination";
$proto288["m_columns"][] = "accessories";
$proto288["m_columns"][] = "priority";
$proto288["m_columns"][] = "A_storage";
$proto288["m_columns"][] = "price_per_gram";
$proto288["m_columns"][] = "price_per_parent_stone";
$proto288["m_columns"][] = "price_per_aside_stone";
$proto288["m_columns"][] = "price_secret";
$proto288["m_columns"][] = "sales_price_secret";
$proto288["m_columns"][] = "eq";
$proto288["m_columns"][] = "en";
$proto288["m_columns"][] = "line";
$proto288["m_columns"][] = "item_name";
$proto288["m_columns"][] = "handle";
$proto288["m_columns"][] = "yahoo_color_id";
$proto288["m_columns"][] = "raku_hyoujisaki_category4";
$proto288["m_columns"][] = "raku_hyoujisaki_category5";
$proto288["m_columns"][] = "raku_dir_1";
$proto288["m_columns"][] = "raku_dir_2";
$proto288["m_columns"][] = "raku_dir_3";
$proto288["m_columns"][] = "raku_dir_4";
$proto288["m_columns"][] = "raku_dir_5";
$proto288["m_columns"][] = "raku_dir_result";
$proto288["m_columns"][] = "raku_tag_result";
$proto288["m_columns"][] = "serial_number";
$proto288["m_columns"][] = "Exhibition_Date";
$proto288["m_columns"][] = "search_keyword";
$proto288["m_columns"][] = "stamp";
$proto288["m_columns"][] = "motif";
$proto288["m_columns"][] = "Setting";
$proto288["m_columns"][] = "processing";
$proto288["m_columns"][] = "Sleeve_Length";
$proto288["m_columns"][] = "length";
$proto288["m_columns"][] = "Ring_size";
$proto288["m_columns"][] = "price_for_site";
$proto288["m_columns"][] = "yahoo_category_id";
$proto288["m_columns"][] = "Qty";
$proto288["m_columns"][] = "sales_period";
$proto288["m_columns"][] = "starting_price";
$proto288["m_columns"][] = "FLAG_NO_ARRIVAL";
$proto288["m_columns"][] = "amount_of_image";
$proto288["m_columns"][] = "csv";
$proto288["m_columns"][] = "return_output_flag";
$proto288["m_columns"][] = "wasabi_flag";
$proto288["m_columns"][] = "ws_import_date";
$proto288["m_columns"][] = "logo";
$proto288["m_columns"][] = "parts";
$proto288["m_columns"][] = "country_of_origin";
$proto288["m_columns"][] = "zipper";
$proto288["m_columns"][] = "guarantee";
$proto288["m_columns"][] = "errors";
$proto288["m_columns"][] = "designer";
$proto288["m_columns"][] = "hahakai";
$proto288["m_columns"][] = "effect";
$proto288["m_columns"][] = "shape";
$proto288["m_columns"][] = "cutting_style";
$proto288["m_columns"][] = "chain_type";
$proto288["m_columns"][] = "number_of_stones";
$proto288["m_columns"][] = "amount";
$proto288["m_columns"][] = "satei_error";
$proto288["m_columns"][] = "producing_area";
$proto288["m_columns"][] = "shape_supplement";
$proto288["m_columns"][] = "side_gem";
$proto288["m_columns"][] = "product_style";
$proto288["m_columns"][] = "collar_neck_line";
$proto288["m_columns"][] = "breast";
$proto288["m_columns"][] = "silhouette";
$proto288["m_columns"][] = "sleeve";
$proto288["m_columns"][] = "unit";
$proto288["m_columns"][] = "hall_mark";
$proto288["m_columns"][] = "plate";
$proto288["m_columns"][] = "toe";
$proto288["m_columns"][] = "heel";
$proto288["m_columns"][] = "cloth";
$proto288["m_columns"][] = "serial_number_for_storage";
$proto288["m_columns"][] = "official_url";
$proto288["m_columns"][] = "main_details";
$proto288["m_columns"][] = "notation_size";
$proto288["m_columns"][] = "shoe_size_jp";
$proto288["m_columns"][] = "Eoc_chigins2_id";
$proto288["m_columns"][] = "country_of_origin_name";
$proto288["m_columns"][] = "mailingkit_id";
$proto288["m_columns"][] = "DA_COMMENTSANDTOTAL";
$proto288["m_columns"][] = "DA_WEIGHT";
$proto288["m_columns"][] = "DA_PER_CARAT";
$proto288["m_columns"][] = "DA_SHAPE";
$proto288["m_columns"][] = "DA_SELFGRES";
$proto288["m_columns"][] = "DA_ORIGINALGRADEMLIKENED";
$proto288["m_columns"][] = "DA_SUGARCANE";
$proto288["m_columns"][] = "DA_RAPA";
$proto288["m_columns"][] = "DA_INTENSITY";
$proto288["m_columns"][] = "DA_OVERTONE";
$proto288["m_columns"][] = "DA_COLOR";
$proto288["m_columns"][] = "DA_CLARITY";
$proto288["m_columns"][] = "DA_CUT";
$proto288["m_columns"][] = "DA_POLISH";
$proto288["m_columns"][] = "DA_SYMMETRY";
$proto288["m_columns"][] = "DA_FLUO";
$proto288["m_columns"][] = "DA_COLOR_FLUO";
$proto288["m_columns"][] = "DA_WIDE";
$proto288["m_columns"][] = "DA_HIGH";
$proto288["m_columns"][] = "DA_DEPTH";
$proto288["m_columns"][] = "DA_APPRAISER";
$proto288["m_columns"][] = "DA_FRAPA";
$proto288["m_columns"][] = "DA_RATE";
$proto288["m_columns"][] = "DA_UNIT_PRICE_UNPLUG";
$proto288["m_columns"][] = "DA_YOURNAME";
$proto288["m_columns"][] = "DA_RAPAB";
$proto288["m_columns"][] = "DA_GROSSPROFIT";
$proto288["m_columns"][] = "DA_INTEREST_1";
$proto288["m_columns"][] = "DA_no";
$proto288["m_columns"][] = "kinsa_flag";
$proto288["m_columns"][] = "price_for_site_flag";
$proto288["m_columns"][] = "Eoc_takuhai_id";
$proto288["m_columns"][] = "Eoc_unfinished_id";
$proto288["m_columns"][] = "Eoc_chigins_unfinished_id";
$proto288["m_columns"][] = "chohyo_id";
$proto288["m_columns"][] = "location";
$proto288["m_columns"][] = "special_instructions_1";
$proto288["m_columns"][] = "special_instructions_2";
$proto288["m_columns"][] = "special_instructions_3";
$proto288["m_columns"][] = "chohyo_seihin_flag";
$proto288["m_columns"][] = "chohyo_dia_flag";
$proto288["m_columns"][] = "chohyo_type";
$proto288["m_columns"][] = "ichiyen_flag";
$proto288["m_columns"][] = "asuraku_fuka_flag";
$proto288["m_columns"][] = "parallel_import_flag";
$proto288["m_columns"][] = "meisai_number";
$proto288["m_columns"][] = "days_keep_price";
$proto288["m_columns"][] = "initial_included";
$proto288["m_columns"][] = "novelty";
$proto288["m_columns"][] = "tentou_label_output_flag";
$proto288["m_columns"][] = "itaku_flag";
$proto288["m_columns"][] = "including_catch";
$proto288["m_columns"][] = "ichiba_meeting_month";
$proto288["m_columns"][] = "ichiba_meeting_name";
$proto288["m_columns"][] = "ichiba_color";
$proto288["m_columns"][] = "ichiba_clarity";
$proto288["m_columns"][] = "ichiba_melee_gai";
$proto288["m_columns"][] = "ichiba_lot_pieces";
$proto288["m_columns"][] = "ichiba_image";
$proto288["m_columns"][] = "ichiba_img";
$proto288["m_columns"][] = "gold_check_id";
$proto288["m_columns"][] = "ichiba_exhibition_id";
$proto288["m_columns"][] = "ichiba_exhibition_sort";
$proto288["m_columns"][] = "cost";
$proto288["m_columns"][] = "auto_price_cut_prohibited";
$proto288["m_columns"][] = "event_price";
$proto288["m_columns"][] = "identification_cost";
$proto288["m_columns"][] = "other_cost";
$proto288["m_columns"][] = "stock_quantity";
$proto288["m_columns"][] = "Eoc_trader_id_for_buy";
$proto288["m_columns"][] = "Eoc_trader_id_for_sell";
$proto288["m_columns"][] = "multiplication_rate";
$proto288["m_columns"][] = "many_product_group_id";
$proto288["m_columns"][] = "trading_sort_id";
$proto288["m_columns"][] = "many_product_group_saiban";
$proto288["m_columns"][] = "purchase_category";
$proto288["m_columns"][] = "created_at";
$proto288["m_columns"][] = "created_by";
$proto288["m_columns"][] = "manual_input_price_per_gram";
$proto288["m_columns"][] = "satei_start";
$proto288["m_columns"][] = "self_DA_INTENSITY";
$proto288["m_columns"][] = "self_DA_OVERTONE";
$proto288["m_columns"][] = "self_DA_COLOR";
$proto288["m_columns"][] = "self_DA_CLARITY";
$proto288["m_columns"][] = "self_DA_CUT";
$proto288["m_columns"][] = "self_DA_POLISH";
$proto288["m_columns"][] = "self_DA_SYMMETRY";
$proto288["m_columns"][] = "self_DA_FLUO";
$proto288["m_columns"][] = "self_DA_COLOR_FLUO";
$proto288["m_columns"][] = "self_DA_FRAPA";
$proto288["m_columns"][] = "self_DA_RATE";
$proto288["m_columns"][] = "self_multiplication_rate";
$proto288["m_columns"][] = "is_seiyaku";
$proto288["m_columns"][] = "destination_sold_out";
$proto288["m_columns"][] = "mypage_update_prohibited";
$proto288["m_columns"][] = "gold_check_scan_id";
$proto288["m_columns"][] = "buy_campaign_data_id";
$proto288["m_columns"][] = "REG_PHOTOGRAPHER_DATE_start";
$proto288["m_columns"][] = "commission";
$proto288["m_columns"][] = "addtime_gold_check_id";
$proto288["m_columns"][] = "is_recovery";
$proto288["m_columns"][] = "sales_cost";
$proto288["m_columns"][] = "mst_business_partner_id";
$proto288["m_columns"][] = "DA_GROSSPROFIT_2";
$proto288["m_columns"][] = "DA_INTEREST_2";
$proto288["m_columns"][] = "minus_weight";
$proto288["m_columns"][] = "diameter_size";
$proto288["m_columns"][] = "metal_rate_date";
$obj = new SQLTable($proto288);

$proto287["m_table"] = $obj;
$proto287["m_sql"] = "`shouhin`";
$proto287["m_alias"] = "";
$proto287["m_srcTableName"] = "shouhin";
$proto289=array();
$proto289["m_sql"] = "";
$proto289["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto289["m_column"]=$obj;
$proto289["m_contained"] = array();
$proto289["m_strCase"] = "";
$proto289["m_havingmode"] = false;
$proto289["m_inBrackets"] = false;
$proto289["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto289);

$proto287["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto287);

$proto0["m_fromlist"][]=$obj;
												$proto291=array();
$proto291["m_link"] = "SQLL_LEFTJOIN";
			$proto292=array();
$proto292["m_strName"] = "Eoc";
$proto292["m_srcTableName"] = "shouhin";
$proto292["m_columns"] = array();
$proto292["m_columns"][] = "ecc_id";
$proto292["m_columns"][] = "ecc_seq";
$proto292["m_columns"][] = "name1";
$proto292["m_columns"][] = "created_t";
$proto292["m_columns"][] = "registerd_id";
$proto292["m_columns"][] = "kaitori_staff_id";
$proto292["m_columns"][] = "name2";
$proto292["m_columns"][] = "wareki";
$proto292["m_columns"][] = "b1";
$proto292["m_columns"][] = "b2";
$proto292["m_columns"][] = "b3";
$proto292["m_columns"][] = "birth_day";
$proto292["m_columns"][] = "age";
$proto292["m_columns"][] = "zip";
$proto292["m_columns"][] = "zip1";
$proto292["m_columns"][] = "zip2";
$proto292["m_columns"][] = "address1";
$proto292["m_columns"][] = "address2";
$proto292["m_columns"][] = "address3";
$proto292["m_columns"][] = "tel";
$proto292["m_columns"][] = "tel2";
$proto292["m_columns"][] = "mail1";
$proto292["m_columns"][] = "mail2";
$proto292["m_columns"][] = "address_code";
$proto292["m_columns"][] = "bank_name";
$proto292["m_columns"][] = "bank_blunch_code";
$proto292["m_columns"][] = "bank_yokin_shubetu";
$proto292["m_columns"][] = "bank_account";
$proto292["m_columns"][] = "bank_acoount_name";
$proto292["m_columns"][] = "haisou_bangou";
$proto292["m_columns"][] = "sise_houhou";
$proto292["m_columns"][] = "hentou_houhou";
$proto292["m_columns"][] = "hentou_houhou_time";
$proto292["m_columns"][] = "mousikomi_id";
$proto292["m_columns"][] = "hituyou_shorui";
$proto292["m_columns"][] = "seiyaku_fuseiritu";
$proto292["m_columns"][] = "mitumori_taku";
$proto292["m_columns"][] = "seacanse";
$proto292["m_columns"][] = "remark";
$proto292["m_columns"][] = "type";
$proto292["m_columns"][] = "sales_flag";
$proto292["m_columns"][] = "src_type";
$proto292["m_columns"][] = "liquidation_shop_code";
$proto292["m_columns"][] = "insurance_amount_print";
$proto292["m_columns"][] = "jis_code";
$proto292["m_columns"][] = "updated_at";
$proto292["m_columns"][] = "_registerd_id";
$proto292["m_columns"][] = "mail_check_type";
$proto292["m_columns"][] = "purchase_type";
$proto292["m_columns"][] = "sex";
$proto292["m_columns"][] = "m_tel";
$proto292["m_columns"][] = "fax";
$proto292["m_columns"][] = "chigin_kaitori";
$proto292["m_columns"][] = "option1";
$proto292["m_columns"][] = "option2";
$proto292["m_columns"][] = "option3";
$proto292["m_columns"][] = "option4";
$proto292["m_columns"][] = "option5";
$proto292["m_columns"][] = "option6";
$proto292["m_columns"][] = "option7";
$proto292["m_columns"][] = "option8";
$proto292["m_columns"][] = "option9";
$proto292["m_columns"][] = "option10";
$proto292["m_columns"][] = "option11";
$proto292["m_columns"][] = "option12";
$proto292["m_columns"][] = "option13";
$proto292["m_columns"][] = "rakuda_csv_flag";
$proto292["m_columns"][] = "EOC_COURIER_CHECK";
$proto292["m_columns"][] = "EOC_SIZE";
$proto292["m_columns"][] = "EOC_NUMBER";
$proto292["m_columns"][] = "EOC_REUSE";
$proto292["m_columns"][] = "EOC__DELIVERY_DATES";
$proto292["m_columns"][] = "EOC_SPECIFIED_TIME";
$proto292["m_columns"][] = "FIRST_NAME2";
$proto292["m_columns"][] = "LAST_NAME2";
$proto292["m_columns"][] = "EOC__DATE_AND_TIME_2";
$proto292["m_columns"][] = "EOC__BOX_NUMBER";
$proto292["m_columns"][] = "FIRST_NAME_KANA";
$proto292["m_columns"][] = "LAST_NAME_KANA";
$proto292["m_columns"][] = "FLAG_SPEED";
$proto292["m_columns"][] = "SEARCH_MEDIA";
$proto292["m_columns"][] = "SEARCH_SITE";
$proto292["m_columns"][] = "UN_REACHABLE";
$proto292["m_columns"][] = "FLG_MAIL_SAGAWA";
$proto292["m_columns"][] = "FLG_MAIL_OTHER";
$proto292["m_columns"][] = "ALLSEIYAKU";
$proto292["m_columns"][] = "ICHIBUSEIYAKU";
$proto292["m_columns"][] = "seiyakukin";
$proto292["m_columns"][] = "kaitorihuka";
$proto292["m_columns"][] = "awazu_date";
$proto292["m_columns"][] = "seiyaku_price";
$proto292["m_columns"][] = "eoc_search_keyword";
$proto292["m_columns"][] = "sonota";
$proto292["m_columns"][] = "size_kosuu";
$proto292["m_columns"][] = "sagawa_shuuka_flag";
$proto292["m_columns"][] = "line_check";
$proto292["m_columns"][] = "sagawa_shuukairai_denwabangou";
$proto292["m_columns"][] = "kaitori_sougak";
$proto292["m_columns"][] = "flag";
$proto292["m_columns"][] = "key_code";
$proto292["m_columns"][] = "dm_check_type";
$proto292["m_columns"][] = "kit_flag";
$proto292["m_columns"][] = "kit_done_flag";
$proto292["m_columns"][] = "bank_details_code";
$proto292["m_columns"][] = "bank_details_blunch_name";
$proto292["m_columns"][] = "bank_details_blunch_code";
$proto292["m_columns"][] = "bank_details_account_number";
$proto292["m_columns"][] = "bank_details_symbol";
$proto292["m_columns"][] = "bank_details_number";
$proto292["m_columns"][] = "bank_details_account_name";
$proto292["m_columns"][] = "bank_details_deposit_type";
$proto292["m_columns"][] = "mypage_id";
$proto292["m_columns"][] = "UN_REACHABLE_brand";
$proto292["m_columns"][] = "sagawa_haisou_hoken";
$proto292["m_columns"][] = "transfer_confirm";
$proto292["m_columns"][] = "outside_bank";
$proto292["m_columns"][] = "new_name";
$proto292["m_columns"][] = "letterpack";
$proto292["m_columns"][] = "satei_saisoku_2_days";
$proto292["m_columns"][] = "satei_saisoku_7_days";
$proto292["m_columns"][] = "accept_flag";
$proto292["m_columns"][] = "delivery_flag";
$proto292["m_columns"][] = "refining_weight";
$proto292["m_columns"][] = "line_chat_url";
$proto292["m_columns"][] = "royal_customer_status";
$proto292["m_columns"][] = "is_business_customer";
$proto292["m_columns"][] = "is_exist_haisouhosyo";
$proto292["m_columns"][] = "meigi_hankaku_kana";
$proto292["m_columns"][] = "building_types";
$proto292["m_columns"][] = "dwelling_types";
$proto292["m_columns"][] = "is_yamato_csv";
$proto292["m_columns"][] = "is_seiren_csv";
$obj = new SQLTable($proto292);

$proto291["m_table"] = $obj;
$proto291["m_sql"] = "LEFT OUTER JOIN `Eoc` ON `shouhin`.`ecc_id` = `Eoc`.`ecc_id`";
$proto291["m_alias"] = "";
$proto291["m_srcTableName"] = "shouhin";
$proto293=array();
$proto293["m_sql"] = "`shouhin`.`ecc_id` = `Eoc`.`ecc_id`";
$proto293["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "ecc_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin"
));

$proto293["m_column"]=$obj;
$proto293["m_contained"] = array();
$proto293["m_strCase"] = "= `Eoc`.`ecc_id`";
$proto293["m_havingmode"] = false;
$proto293["m_inBrackets"] = false;
$proto293["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto293);

$proto291["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto291);

$proto0["m_fromlist"][]=$obj;
												$proto295=array();
$proto295["m_link"] = "SQLL_LEFTJOIN";
			$proto296=array();
$proto296["m_strName"] = "_goods_status2";
$proto296["m_srcTableName"] = "shouhin";
$proto296["m_columns"] = array();
$proto296["m_columns"][] = "goods_id";
$proto296["m_columns"][] = "goods_status";
$proto296["m_columns"][] = "id";
$proto296["m_columns"][] = "status_id";
$proto296["m_columns"][] = "sort";
$proto296["m_columns"][] = "sub_id";
$proto296["m_columns"][] = "kinsa";
$proto296["m_columns"][] = "dia";
$proto296["m_columns"][] = "zaiko";
$proto296["m_columns"][] = "detail";
$proto296["m_columns"][] = "batch_flag";
$proto296["m_columns"][] = "sales_destination";
$proto296["m_columns"][] = "create_at";
$proto296["m_columns"][] = "create_by";
$proto296["m_columns"][] = "update_at";
$proto296["m_columns"][] = "update_by";
$obj = new SQLTable($proto296);

$proto295["m_table"] = $obj;
$proto295["m_sql"] = "LEFT OUTER JOIN `_goods_status2` ON `shouhin`.`status` = `_goods_status2`.`goods_id`";
$proto295["m_alias"] = "";
$proto295["m_srcTableName"] = "shouhin";
$proto297=array();
$proto297["m_sql"] = "`shouhin`.`status` = `_goods_status2`.`goods_id`";
$proto297["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin"
));

$proto297["m_column"]=$obj;
$proto297["m_contained"] = array();
$proto297["m_strCase"] = "= `_goods_status2`.`goods_id`";
$proto297["m_havingmode"] = false;
$proto297["m_inBrackets"] = false;
$proto297["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto297);

$proto295["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto295);

$proto0["m_fromlist"][]=$obj;
												$proto299=array();
$proto299["m_link"] = "SQLL_LEFTJOIN";
			$proto300=array();
$proto300["m_strName"] = "store_sub_categories";
$proto300["m_srcTableName"] = "shouhin";
$proto300["m_columns"] = array();
$proto300["m_columns"][] = "id";
$proto300["m_columns"][] = "category_id";
$proto300["m_columns"][] = "name";
$proto300["m_columns"][] = "template_id";
$proto300["m_columns"][] = "initial_name";
$proto300["m_columns"][] = "view1";
$proto300["m_columns"][] = "view2";
$proto300["m_columns"][] = "view3";
$proto300["m_columns"][] = "size1";
$proto300["m_columns"][] = "size2";
$proto300["m_columns"][] = "size3";
$proto300["m_columns"][] = "size4";
$proto300["m_columns"][] = "size5";
$proto300["m_columns"][] = "size6";
$proto300["m_columns"][] = "sort";
$proto300["m_columns"][] = "brawseid";
$proto300["m_columns"][] = "brandnode";
$proto300["m_columns"][] = "brandidwomen";
$proto300["m_columns"][] = "condition_id";
$proto300["m_columns"][] = "condition_tmp";
$proto300["m_columns"][] = "rakuten_koumoku";
$proto300["m_columns"][] = "saisun_priority_check";
$proto300["m_columns"][] = "condition_details";
$proto300["m_columns"][] = "updated_at";
$proto300["m_columns"][] = "updated_by";
$proto300["m_columns"][] = "created_at";
$proto300["m_columns"][] = "created_by";
$proto300["m_columns"][] = "output_template";
$proto300["m_columns"][] = "saisun_model_id";
$proto300["m_columns"][] = "related_words";
$proto300["m_columns"][] = "hansokuhi_flag";
$proto300["m_columns"][] = "category_class";
$proto300["m_columns"][] = "sales_category";
$proto300["m_columns"][] = "colorstone_id";
$obj = new SQLTable($proto300);

$proto299["m_table"] = $obj;
$proto299["m_sql"] = "LEFT OUTER JOIN `store_sub_categories` ON `shouhin`.`sub_category_id1` = `store_sub_categories`.`id`";
$proto299["m_alias"] = "";
$proto299["m_srcTableName"] = "shouhin";
$proto301=array();
$proto301["m_sql"] = "`shouhin`.`sub_category_id1` = `store_sub_categories`.`id`";
$proto301["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "sub_category_id1",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin"
));

$proto301["m_column"]=$obj;
$proto301["m_contained"] = array();
$proto301["m_strCase"] = "= `store_sub_categories`.`id`";
$proto301["m_havingmode"] = false;
$proto301["m_inBrackets"] = false;
$proto301["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto301);

$proto299["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto299);

$proto0["m_fromlist"][]=$obj;
												$proto303=array();
$proto303["m_link"] = "SQLL_LEFTJOIN";
			$proto304=array();
$proto304["m_strName"] = "gold_check";
$proto304["m_srcTableName"] = "shouhin";
$proto304["m_columns"] = array();
$proto304["m_columns"][] = "id";
$proto304["m_columns"][] = "company";
$proto304["m_columns"][] = "delivery_num";
$proto304["m_columns"][] = "create_at";
$proto304["m_columns"][] = "create_by";
$proto304["m_columns"][] = "update_at";
$proto304["m_columns"][] = "update_by";
$proto304["m_columns"][] = "slip_type";
$proto304["m_columns"][] = "trade_day";
$proto304["m_columns"][] = "billing_amount";
$proto304["m_columns"][] = "file_link";
$proto304["m_columns"][] = "seiren_price";
$proto304["m_columns"][] = "kanryou_henbi";
$obj = new SQLTable($proto304);

$proto303["m_table"] = $obj;
$proto303["m_sql"] = "LEFT OUTER JOIN `gold_check` ON `shouhin`.`gold_check_id` = `gold_check`.`id`";
$proto303["m_alias"] = "";
$proto303["m_srcTableName"] = "shouhin";
$proto305=array();
$proto305["m_sql"] = "`shouhin`.`gold_check_id` = `gold_check`.`id`";
$proto305["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "gold_check_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin"
));

$proto305["m_column"]=$obj;
$proto305["m_contained"] = array();
$proto305["m_strCase"] = "= `gold_check`.`id`";
$proto305["m_havingmode"] = false;
$proto305["m_inBrackets"] = false;
$proto305["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto305);

$proto303["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto303);

$proto0["m_fromlist"][]=$obj;
												$proto307=array();
$proto307["m_link"] = "SQLL_LEFTJOIN";
			$proto308=array();
$proto308["m_strName"] = "Eoc_trader";
$proto308["m_srcTableName"] = "shouhin";
$proto308["m_columns"] = array();
$proto308["m_columns"][] = "id";
$proto308["m_columns"][] = "slip_number";
$proto308["m_columns"][] = "market";
$proto308["m_columns"][] = "date";
$proto308["m_columns"][] = "create_at";
$proto308["m_columns"][] = "create_by";
$proto308["m_columns"][] = "update_at";
$proto308["m_columns"][] = "update_by";
$obj = new SQLTable($proto308);

$proto307["m_table"] = $obj;
$proto307["m_sql"] = "LEFT OUTER JOIN `Eoc_trader` ON `shouhin`.`Eoc_trader_id_for_buy` = `Eoc_trader`.`id`";
$proto307["m_alias"] = "";
$proto307["m_srcTableName"] = "shouhin";
$proto309=array();
$proto309["m_sql"] = "`shouhin`.`Eoc_trader_id_for_buy` = `Eoc_trader`.`id`";
$proto309["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Eoc_trader_id_for_buy",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin"
));

$proto309["m_column"]=$obj;
$proto309["m_contained"] = array();
$proto309["m_strCase"] = "= `Eoc_trader`.`id`";
$proto309["m_havingmode"] = false;
$proto309["m_inBrackets"] = false;
$proto309["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto309);

$proto307["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto307);

$proto0["m_fromlist"][]=$obj;
												$proto311=array();
$proto311["m_link"] = "SQLL_LEFTJOIN";
			$proto312=array();
$proto312["m_strName"] = "Eoc_trader";
$proto312["m_srcTableName"] = "shouhin";
$proto312["m_columns"] = array();
$proto312["m_columns"][] = "id";
$proto312["m_columns"][] = "slip_number";
$proto312["m_columns"][] = "market";
$proto312["m_columns"][] = "date";
$proto312["m_columns"][] = "create_at";
$proto312["m_columns"][] = "create_by";
$proto312["m_columns"][] = "update_at";
$proto312["m_columns"][] = "update_by";
$obj = new SQLTable($proto312);

$proto311["m_table"] = $obj;
$proto311["m_sql"] = "LEFT OUTER JOIN `Eoc_trader` AS `Eoc_trader1` ON `shouhin`.`Eoc_trader_id_for_sell` = `Eoc_trader1`.`id`";
$proto311["m_alias"] = "Eoc_trader1";
$proto311["m_srcTableName"] = "shouhin";
$proto313=array();
$proto313["m_sql"] = "`shouhin`.`Eoc_trader_id_for_sell` = `Eoc_trader1`.`id`";
$proto313["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Eoc_trader_id_for_sell",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin"
));

$proto313["m_column"]=$obj;
$proto313["m_contained"] = array();
$proto313["m_strCase"] = "= `Eoc_trader1`.`id`";
$proto313["m_havingmode"] = false;
$proto313["m_inBrackets"] = false;
$proto313["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto313);

$proto311["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto311);

$proto0["m_fromlist"][]=$obj;
												$proto315=array();
$proto315["m_link"] = "SQLL_LEFTJOIN";
			$proto316=array();
$proto316["m_strName"] = "sales_report";
$proto316["m_srcTableName"] = "shouhin";
$proto316["m_columns"] = array();
$proto316["m_columns"][] = "id";
$proto316["m_columns"][] = "product_id";
$proto316["m_columns"][] = "sales_date";
$proto316["m_columns"][] = "contract_date";
$proto316["m_columns"][] = "exhibition_date";
$proto316["m_columns"][] = "created_at";
$proto316["m_columns"][] = "updated_at";
$proto316["m_columns"][] = "memo";
$proto316["m_columns"][] = "repo_type";
$proto316["m_columns"][] = "mst_business_partner_id";
$obj = new SQLTable($proto316);

$proto315["m_table"] = $obj;
$proto315["m_sql"] = "LEFT OUTER JOIN `sales_report` ON `shouhin`.`product_id` = `sales_report`.`product_id`";
$proto315["m_alias"] = "";
$proto315["m_srcTableName"] = "shouhin";
$proto317=array();
$proto317["m_sql"] = "`shouhin`.`product_id` = `sales_report`.`product_id`";
$proto317["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "product_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin"
));

$proto317["m_column"]=$obj;
$proto317["m_contained"] = array();
$proto317["m_strCase"] = "= `sales_report`.`product_id`";
$proto317["m_havingmode"] = false;
$proto317["m_inBrackets"] = false;
$proto317["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto317);

$proto315["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto315);

$proto0["m_fromlist"][]=$obj;
												$proto319=array();
$proto319["m_link"] = "SQLL_LEFTJOIN";
			$proto320=array();
$proto320["m_strName"] = "purchase_category_report";
$proto320["m_srcTableName"] = "shouhin";
$proto320["m_columns"] = array();
$proto320["m_columns"][] = "product_id";
$proto320["m_columns"][] = "purchase_category";
$proto320["m_columns"][] = "updated_at";
$proto320["m_columns"][] = "created_at";
$obj = new SQLTable($proto320);

$proto319["m_table"] = $obj;
$proto319["m_sql"] = "LEFT OUTER JOIN `purchase_category_report` ON `shouhin`.`product_id` = `purchase_category_report`.`product_id`";
$proto319["m_alias"] = "";
$proto319["m_srcTableName"] = "shouhin";
$proto321=array();
$proto321["m_sql"] = "`shouhin`.`product_id` = `purchase_category_report`.`product_id`";
$proto321["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "product_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin"
));

$proto321["m_column"]=$obj;
$proto321["m_contained"] = array();
$proto321["m_strCase"] = "= `purchase_category_report`.`product_id`";
$proto321["m_havingmode"] = false;
$proto321["m_inBrackets"] = false;
$proto321["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto321);

$proto319["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto319);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto323=array();
						$obj = new SQLField(array(
	"m_strName" => "product_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin"
));

$proto323["m_column"]=$obj;
$proto323["m_bAsc"] = 0;
$proto323["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto323);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="shouhin";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_shouhin = createSqlQuery_shouhin();


	
		;

																																																																																																																																									

$tdatashouhin[".sqlquery"] = $queryData_shouhin;

include_once(getabspath("include/shouhin_events.php"));
$tableEvents["shouhin"] = new eventclass_shouhin;
$tdatashouhin[".hasEvents"] = true;

?>