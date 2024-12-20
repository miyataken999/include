<?php
require_once(getabspath("classes/cipherer.php"));




$tdatasaisunn = array();
	$tdatasaisunn[".truncateText"] = true;
	$tdatasaisunn[".NumberOfChars"] = 80;
	$tdatasaisunn[".ShortName"] = "saisunn";
	$tdatasaisunn[".OwnerID"] = "";
	$tdatasaisunn[".OriginalTable"] = "shouhin";

//	field labels
$fieldLabelssaisunn = array();
$fieldToolTipssaisunn = array();
$pageTitlessaisunn = array();
$placeHolderssaisunn = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelssaisunn["Japanese"] = array();
	$fieldToolTipssaisunn["Japanese"] = array();
	$placeHolderssaisunn["Japanese"] = array();
	$pageTitlessaisunn["Japanese"] = array();
	$fieldLabelssaisunn["Japanese"]["product_id"] = "SEQ";
	$fieldToolTipssaisunn["Japanese"]["product_id"] = "";
	$placeHolderssaisunn["Japanese"]["product_id"] = "";
	$fieldLabelssaisunn["Japanese"]["category_id"] = "大カテゴリー";
	$fieldToolTipssaisunn["Japanese"]["category_id"] = "";
	$placeHolderssaisunn["Japanese"]["category_id"] = "";
	$fieldLabelssaisunn["Japanese"]["goods_title"] = "Yアイテム名";
	$fieldToolTipssaisunn["Japanese"]["goods_title"] = "";
	$placeHolderssaisunn["Japanese"]["goods_title"] = "";
	$fieldLabelssaisunn["Japanese"]["title"] = "タイトル";
	$fieldToolTipssaisunn["Japanese"]["title"] = "";
	$placeHolderssaisunn["Japanese"]["title"] = "";
	$fieldLabelssaisunn["Japanese"]["sub_category_id1"] = "中カテゴリー";
	$fieldToolTipssaisunn["Japanese"]["sub_category_id1"] = "";
	$placeHolderssaisunn["Japanese"]["sub_category_id1"] = "";
	$fieldLabelssaisunn["Japanese"]["ecc_id"] = "Ecc Id";
	$fieldToolTipssaisunn["Japanese"]["ecc_id"] = "";
	$placeHolderssaisunn["Japanese"]["ecc_id"] = "";
	$fieldLabelssaisunn["Japanese"]["price"] = "買取額";
	$fieldToolTipssaisunn["Japanese"]["price"] = "";
	$placeHolderssaisunn["Japanese"]["price"] = "";
	$fieldLabelssaisunn["Japanese"]["yahoo"] = "Yahoo";
	$fieldToolTipssaisunn["Japanese"]["yahoo"] = "";
	$placeHolderssaisunn["Japanese"]["yahoo"] = "";
	$fieldLabelssaisunn["Japanese"]["remark"] = "詳細説明";
	$fieldToolTipssaisunn["Japanese"]["remark"] = "";
	$placeHolderssaisunn["Japanese"]["remark"] = "";
	$fieldLabelssaisunn["Japanese"]["sales_price"] = "販売額";
	$fieldToolTipssaisunn["Japanese"]["sales_price"] = "";
	$placeHolderssaisunn["Japanese"]["sales_price"] = "";
	$fieldLabelssaisunn["Japanese"]["description"] = "メモ";
	$fieldToolTipssaisunn["Japanese"]["description"] = "";
	$placeHolderssaisunn["Japanese"]["description"] = "";
	$fieldLabelssaisunn["Japanese"]["status"] = "商品状態";
	$fieldToolTipssaisunn["Japanese"]["status"] = "";
	$placeHolderssaisunn["Japanese"]["status"] = "";
	$fieldLabelssaisunn["Japanese"]["product_num"] = "ブランドID";
	$fieldToolTipssaisunn["Japanese"]["product_num"] = "";
	$placeHolderssaisunn["Japanese"]["product_num"] = "";
	$fieldLabelssaisunn["Japanese"]["updated_at"] = "更新日";
	$fieldToolTipssaisunn["Japanese"]["updated_at"] = "";
	$placeHolderssaisunn["Japanese"]["updated_at"] = "";
	$fieldLabelssaisunn["Japanese"]["yahoo_size"] = "サイズ結果欄";
	$fieldToolTipssaisunn["Japanese"]["yahoo_size"] = "";
	$placeHolderssaisunn["Japanese"]["yahoo_size"] = "";
	$fieldLabelssaisunn["Japanese"]["yahoo_title"] = "Yタイトル";
	$fieldToolTipssaisunn["Japanese"]["yahoo_title"] = "";
	$placeHolderssaisunn["Japanese"]["yahoo_title"] = "";
	$fieldLabelssaisunn["Japanese"]["yahoo_sankou_uwadai"] = "参考上代";
	$fieldToolTipssaisunn["Japanese"]["yahoo_sankou_uwadai"] = "";
	$placeHolderssaisunn["Japanese"]["yahoo_sankou_uwadai"] = "";
	$fieldLabelssaisunn["Japanese"]["yahoo_sozai"] = "素材";
	$fieldToolTipssaisunn["Japanese"]["yahoo_sozai"] = "";
	$placeHolderssaisunn["Japanese"]["yahoo_sozai"] = "";
	$fieldLabelssaisunn["Japanese"]["yahoo_color"] = "カラー";
	$fieldToolTipssaisunn["Japanese"]["yahoo_color"] = "";
	$placeHolderssaisunn["Japanese"]["yahoo_color"] = "";
	$fieldLabelssaisunn["Japanese"]["yahoo_kataban"] = "型番";
	$fieldToolTipssaisunn["Japanese"]["yahoo_kataban"] = "";
	$placeHolderssaisunn["Japanese"]["yahoo_kataban"] = "";
	$fieldLabelssaisunn["Japanese"]["yahoo_condition1"] = "コンディションの詳細";
	$fieldToolTipssaisunn["Japanese"]["yahoo_condition1"] = "";
	$placeHolderssaisunn["Japanese"]["yahoo_condition1"] = "";
	$fieldLabelssaisunn["Japanese"]["yahoo_condition2"] = "コンディションランク";
	$fieldToolTipssaisunn["Japanese"]["yahoo_condition2"] = "";
	$placeHolderssaisunn["Japanese"]["yahoo_condition2"] = "";
	$fieldLabelssaisunn["Japanese"]["yahoo_fuzokuhin"] = "付属品";
	$fieldToolTipssaisunn["Japanese"]["yahoo_fuzokuhin"] = "";
	$placeHolderssaisunn["Japanese"]["yahoo_fuzokuhin"] = "";
	$fieldLabelssaisunn["Japanese"]["yahoo_sinaban"] = "品番";
	$fieldToolTipssaisunn["Japanese"]["yahoo_sinaban"] = "";
	$placeHolderssaisunn["Japanese"]["yahoo_sinaban"] = "";
	$fieldLabelssaisunn["Japanese"]["yahoo_saisun_sha"] = "Y採寸者";
	$fieldToolTipssaisunn["Japanese"]["yahoo_saisun_sha"] = "";
	$placeHolderssaisunn["Japanese"]["yahoo_saisun_sha"] = "";
	$fieldLabelssaisunn["Japanese"]["box_id"] = "Box Id";
	$fieldToolTipssaisunn["Japanese"]["box_id"] = "";
	$placeHolderssaisunn["Japanese"]["box_id"] = "";
	$fieldLabelssaisunn["Japanese"]["nyuukin_price"] = "Nyuukin Price";
	$fieldToolTipssaisunn["Japanese"]["nyuukin_price"] = "";
	$placeHolderssaisunn["Japanese"]["nyuukin_price"] = "";
	$fieldLabelssaisunn["Japanese"]["updated_by"] = "Updated By";
	$fieldToolTipssaisunn["Japanese"]["updated_by"] = "";
	$placeHolderssaisunn["Japanese"]["updated_by"] = "";
	$fieldLabelssaisunn["Japanese"]["raku_title"] = "楽天タイトル";
	$fieldToolTipssaisunn["Japanese"]["raku_title"] = "";
	$placeHolderssaisunn["Japanese"]["raku_title"] = "";
	$fieldLabelssaisunn["Japanese"]["raku_hyoujisaki_category2"] = "楽ジャン（店舗内）2";
	$fieldToolTipssaisunn["Japanese"]["raku_hyoujisaki_category2"] = "";
	$placeHolderssaisunn["Japanese"]["raku_hyoujisaki_category2"] = "";
	$fieldLabelssaisunn["Japanese"]["raku_hyoujisaki_category"] = "楽ジャン（店舗内）1";
	$fieldToolTipssaisunn["Japanese"]["raku_hyoujisaki_category"] = "";
	$placeHolderssaisunn["Japanese"]["raku_hyoujisaki_category"] = "";
	$fieldLabelssaisunn["Japanese"]["raku_hyoujisaki_category3"] = "楽ジャン（店舗内）3";
	$fieldToolTipssaisunn["Japanese"]["raku_hyoujisaki_category3"] = "";
	$placeHolderssaisunn["Japanese"]["raku_hyoujisaki_category3"] = "";
	$fieldLabelssaisunn["Japanese"]["timesta"] = "Timesta";
	$fieldToolTipssaisunn["Japanese"]["timesta"] = "";
	$placeHolderssaisunn["Japanese"]["timesta"] = "";
	$fieldLabelssaisunn["Japanese"]["saisun_end"] = "Saisun End";
	$fieldToolTipssaisunn["Japanese"]["saisun_end"] = "";
	$placeHolderssaisunn["Japanese"]["saisun_end"] = "";
	$fieldLabelssaisunn["Japanese"]["label_output_flag"] = "ラベル出力";
	$fieldToolTipssaisunn["Japanese"]["label_output_flag"] = "";
	$placeHolderssaisunn["Japanese"]["label_output_flag"] = "";
	$fieldLabelssaisunn["Japanese"]["season"] = "季節";
	$fieldToolTipssaisunn["Japanese"]["season"] = "";
	$placeHolderssaisunn["Japanese"]["season"] = "";
	$fieldLabelssaisunn["Japanese"]["kanryou_henbi"] = "Kanryou Henbi";
	$fieldToolTipssaisunn["Japanese"]["kanryou_henbi"] = "";
	$placeHolderssaisunn["Japanese"]["kanryou_henbi"] = "";
	$fieldLabelssaisunn["Japanese"]["box_sort"] = "Box Sort";
	$fieldToolTipssaisunn["Japanese"]["box_sort"] = "";
	$placeHolderssaisunn["Japanese"]["box_sort"] = "";
	$fieldLabelssaisunn["Japanese"]["satei_by"] = "査定人";
	$fieldToolTipssaisunn["Japanese"]["satei_by"] = "";
	$placeHolderssaisunn["Japanese"]["satei_by"] = "";
	$fieldLabelssaisunn["Japanese"]["kaitori_by"] = "登録人";
	$fieldToolTipssaisunn["Japanese"]["kaitori_by"] = "";
	$placeHolderssaisunn["Japanese"]["kaitori_by"] = "";
	$fieldLabelssaisunn["Japanese"]["comment"] = "Comment";
	$fieldToolTipssaisunn["Japanese"]["comment"] = "";
	$placeHolderssaisunn["Japanese"]["comment"] = "";
	$fieldLabelssaisunn["Japanese"]["satei_hi"] = "Satei Hi";
	$fieldToolTipssaisunn["Japanese"]["satei_hi"] = "";
	$placeHolderssaisunn["Japanese"]["satei_hi"] = "";
	$fieldLabelssaisunn["Japanese"]["kaitory_hi"] = "買取日";
	$fieldToolTipssaisunn["Japanese"]["kaitory_hi"] = "";
	$placeHolderssaisunn["Japanese"]["kaitory_hi"] = "";
	$fieldLabelssaisunn["Japanese"]["REG_PHOTOGRAPHER"] = "REG PHOTOGRAPHER";
	$fieldToolTipssaisunn["Japanese"]["REG_PHOTOGRAPHER"] = "";
	$placeHolderssaisunn["Japanese"]["REG_PHOTOGRAPHER"] = "";
	$fieldLabelssaisunn["Japanese"]["REG_AUTHOR"] = "REG AUTHOR";
	$fieldToolTipssaisunn["Japanese"]["REG_AUTHOR"] = "";
	$placeHolderssaisunn["Japanese"]["REG_AUTHOR"] = "";
	$fieldLabelssaisunn["Japanese"]["REG_PACKINGS"] = "REG PACKINGS";
	$fieldToolTipssaisunn["Japanese"]["REG_PACKINGS"] = "";
	$placeHolderssaisunn["Japanese"]["REG_PACKINGS"] = "";
	$fieldLabelssaisunn["Japanese"]["REG_KAKOU_DATE"] = "REG KAKOU DATE";
	$fieldToolTipssaisunn["Japanese"]["REG_KAKOU_DATE"] = "";
	$placeHolderssaisunn["Japanese"]["REG_KAKOU_DATE"] = "";
	$fieldLabelssaisunn["Japanese"]["REG_KAKOU"] = "REG KAKOU";
	$fieldToolTipssaisunn["Japanese"]["REG_KAKOU"] = "";
	$placeHolderssaisunn["Japanese"]["REG_KAKOU"] = "";
	$fieldLabelssaisunn["Japanese"]["REG_EXHIBITOR"] = "REG EXHIBITOR";
	$fieldToolTipssaisunn["Japanese"]["REG_EXHIBITOR"] = "";
	$placeHolderssaisunn["Japanese"]["REG_EXHIBITOR"] = "";
	$fieldLabelssaisunn["Japanese"]["REG_PHOTOGRAPHER_DATE"] = "REG PHOTOGRAPHER DATE";
	$fieldToolTipssaisunn["Japanese"]["REG_PHOTOGRAPHER_DATE"] = "";
	$placeHolderssaisunn["Japanese"]["REG_PHOTOGRAPHER_DATE"] = "";
	$fieldLabelssaisunn["Japanese"]["DT_PACKING_DATE"] = "DT PACKING DATE";
	$fieldToolTipssaisunn["Japanese"]["DT_PACKING_DATE"] = "";
	$placeHolderssaisunn["Japanese"]["DT_PACKING_DATE"] = "";
	$fieldLabelssaisunn["Japanese"]["DT_UP_DATE"] = "DT UP DATE";
	$fieldToolTipssaisunn["Japanese"]["DT_UP_DATE"] = "";
	$placeHolderssaisunn["Japanese"]["DT_UP_DATE"] = "";
	$fieldLabelssaisunn["Japanese"]["AWAZU_DATE"] = "AWAZU DATE";
	$fieldToolTipssaisunn["Japanese"]["AWAZU_DATE"] = "";
	$placeHolderssaisunn["Japanese"]["AWAZU_DATE"] = "";
	$fieldLabelssaisunn["Japanese"]["AWAZU_NIN"] = "AWAZU NIN";
	$fieldToolTipssaisunn["Japanese"]["AWAZU_NIN"] = "";
	$placeHolderssaisunn["Japanese"]["AWAZU_NIN"] = "";
	$fieldLabelssaisunn["Japanese"]["sabun_date"] = "Sabun Date";
	$fieldToolTipssaisunn["Japanese"]["sabun_date"] = "";
	$placeHolderssaisunn["Japanese"]["sabun_date"] = "";
	$fieldLabelssaisunn["Japanese"]["browseid"] = "Browseid";
	$fieldToolTipssaisunn["Japanese"]["browseid"] = "";
	$placeHolderssaisunn["Japanese"]["browseid"] = "";
	$fieldLabelssaisunn["Japanese"]["browsenode"] = "Browsenode";
	$fieldToolTipssaisunn["Japanese"]["browsenode"] = "";
	$placeHolderssaisunn["Japanese"]["browsenode"] = "";
	$fieldLabelssaisunn["Japanese"]["gold_property"] = "Gold Property";
	$fieldToolTipssaisunn["Japanese"]["gold_property"] = "";
	$placeHolderssaisunn["Japanese"]["gold_property"] = "";
	$fieldLabelssaisunn["Japanese"]["ichiba_title"] = "Ichiba Title";
	$fieldToolTipssaisunn["Japanese"]["ichiba_title"] = "";
	$placeHolderssaisunn["Japanese"]["ichiba_title"] = "";
	$fieldLabelssaisunn["Japanese"]["Gram"] = "Gram";
	$fieldToolTipssaisunn["Japanese"]["Gram"] = "";
	$placeHolderssaisunn["Japanese"]["Gram"] = "";
	$fieldLabelssaisunn["Japanese"]["Parent_stone"] = "Parent Stone";
	$fieldToolTipssaisunn["Japanese"]["Parent_stone"] = "";
	$placeHolderssaisunn["Japanese"]["Parent_stone"] = "";
	$fieldLabelssaisunn["Japanese"]["Aside_stone"] = "Aside Stone";
	$fieldToolTipssaisunn["Japanese"]["Aside_stone"] = "";
	$placeHolderssaisunn["Japanese"]["Aside_stone"] = "";
	$fieldLabelssaisunn["Japanese"]["Appraiser"] = "Appraiser";
	$fieldToolTipssaisunn["Japanese"]["Appraiser"] = "";
	$placeHolderssaisunn["Japanese"]["Appraiser"] = "";
	$fieldLabelssaisunn["Japanese"]["Remarks"] = "Remarks";
	$fieldToolTipssaisunn["Japanese"]["Remarks"] = "";
	$placeHolderssaisunn["Japanese"]["Remarks"] = "";
	$fieldLabelssaisunn["Japanese"]["Destination_selling"] = "Destination Selling";
	$fieldToolTipssaisunn["Japanese"]["Destination_selling"] = "";
	$placeHolderssaisunn["Japanese"]["Destination_selling"] = "";
	$fieldLabelssaisunn["Japanese"]["Finish"] = "Finish";
	$fieldToolTipssaisunn["Japanese"]["Finish"] = "";
	$placeHolderssaisunn["Japanese"]["Finish"] = "";
	$fieldLabelssaisunn["Japanese"]["Discrimination"] = "Discrimination";
	$fieldToolTipssaisunn["Japanese"]["Discrimination"] = "";
	$placeHolderssaisunn["Japanese"]["Discrimination"] = "";
	$fieldLabelssaisunn["Japanese"]["accessories"] = "Accessories";
	$fieldToolTipssaisunn["Japanese"]["accessories"] = "";
	$placeHolderssaisunn["Japanese"]["accessories"] = "";
	$fieldLabelssaisunn["Japanese"]["priority"] = "Priority";
	$fieldToolTipssaisunn["Japanese"]["priority"] = "";
	$placeHolderssaisunn["Japanese"]["priority"] = "";
	$fieldLabelssaisunn["Japanese"]["A_storage"] = "A Storage";
	$fieldToolTipssaisunn["Japanese"]["A_storage"] = "";
	$placeHolderssaisunn["Japanese"]["A_storage"] = "";
	$fieldLabelssaisunn["Japanese"]["price_per_gram"] = "Price Per Gram";
	$fieldToolTipssaisunn["Japanese"]["price_per_gram"] = "";
	$placeHolderssaisunn["Japanese"]["price_per_gram"] = "";
	$fieldLabelssaisunn["Japanese"]["price_per_parent_stone"] = "Price Per Parent Stone";
	$fieldToolTipssaisunn["Japanese"]["price_per_parent_stone"] = "";
	$placeHolderssaisunn["Japanese"]["price_per_parent_stone"] = "";
	$fieldLabelssaisunn["Japanese"]["price_per_aside_stone"] = "Price Per Aside Stone";
	$fieldToolTipssaisunn["Japanese"]["price_per_aside_stone"] = "";
	$placeHolderssaisunn["Japanese"]["price_per_aside_stone"] = "";
	$fieldLabelssaisunn["Japanese"]["price_secret"] = "Price Secret";
	$fieldToolTipssaisunn["Japanese"]["price_secret"] = "";
	$placeHolderssaisunn["Japanese"]["price_secret"] = "";
	$fieldLabelssaisunn["Japanese"]["sales_price_secret"] = "Sales Price Secret";
	$fieldToolTipssaisunn["Japanese"]["sales_price_secret"] = "";
	$placeHolderssaisunn["Japanese"]["sales_price_secret"] = "";
	$fieldLabelssaisunn["Japanese"]["eq"] = "Eq";
	$fieldToolTipssaisunn["Japanese"]["eq"] = "";
	$placeHolderssaisunn["Japanese"]["eq"] = "";
	$fieldLabelssaisunn["Japanese"]["en"] = "En";
	$fieldToolTipssaisunn["Japanese"]["en"] = "";
	$placeHolderssaisunn["Japanese"]["en"] = "";
	$fieldLabelssaisunn["Japanese"]["line"] = "Line";
	$fieldToolTipssaisunn["Japanese"]["line"] = "";
	$placeHolderssaisunn["Japanese"]["line"] = "";
	$fieldLabelssaisunn["Japanese"]["item_name"] = "Item Name";
	$fieldToolTipssaisunn["Japanese"]["item_name"] = "";
	$placeHolderssaisunn["Japanese"]["item_name"] = "";
	$fieldLabelssaisunn["Japanese"]["handle"] = "Handle";
	$fieldToolTipssaisunn["Japanese"]["handle"] = "";
	$placeHolderssaisunn["Japanese"]["handle"] = "";
	$fieldLabelssaisunn["Japanese"]["yahoo_color_id"] = "Yahoo Color Id";
	$fieldToolTipssaisunn["Japanese"]["yahoo_color_id"] = "";
	$placeHolderssaisunn["Japanese"]["yahoo_color_id"] = "";
	$fieldLabelssaisunn["Japanese"]["raku_hyoujisaki_category4"] = "楽ジャン（店舗内）4";
	$fieldToolTipssaisunn["Japanese"]["raku_hyoujisaki_category4"] = "";
	$placeHolderssaisunn["Japanese"]["raku_hyoujisaki_category4"] = "";
	$fieldLabelssaisunn["Japanese"]["raku_hyoujisaki_category5"] = "楽ジャン（店舗内）5";
	$fieldToolTipssaisunn["Japanese"]["raku_hyoujisaki_category5"] = "";
	$placeHolderssaisunn["Japanese"]["raku_hyoujisaki_category5"] = "";
	$fieldLabelssaisunn["Japanese"]["raku_dir_1"] = "Raku Dir 1";
	$fieldToolTipssaisunn["Japanese"]["raku_dir_1"] = "";
	$placeHolderssaisunn["Japanese"]["raku_dir_1"] = "";
	$fieldLabelssaisunn["Japanese"]["raku_dir_2"] = "Raku Dir 2";
	$fieldToolTipssaisunn["Japanese"]["raku_dir_2"] = "";
	$placeHolderssaisunn["Japanese"]["raku_dir_2"] = "";
	$fieldLabelssaisunn["Japanese"]["raku_dir_3"] = "Raku Dir 3";
	$fieldToolTipssaisunn["Japanese"]["raku_dir_3"] = "";
	$placeHolderssaisunn["Japanese"]["raku_dir_3"] = "";
	$fieldLabelssaisunn["Japanese"]["raku_dir_4"] = "Raku Dir 4";
	$fieldToolTipssaisunn["Japanese"]["raku_dir_4"] = "";
	$placeHolderssaisunn["Japanese"]["raku_dir_4"] = "";
	$fieldLabelssaisunn["Japanese"]["raku_dir_5"] = "Raku Dir 5";
	$fieldToolTipssaisunn["Japanese"]["raku_dir_5"] = "";
	$placeHolderssaisunn["Japanese"]["raku_dir_5"] = "";
	$fieldLabelssaisunn["Japanese"]["raku_dir_result"] = "Raku Dir Result";
	$fieldToolTipssaisunn["Japanese"]["raku_dir_result"] = "";
	$placeHolderssaisunn["Japanese"]["raku_dir_result"] = "";
	$fieldLabelssaisunn["Japanese"]["raku_tag_result"] = "楽天タグID　Result";
	$fieldToolTipssaisunn["Japanese"]["raku_tag_result"] = "";
	$placeHolderssaisunn["Japanese"]["raku_tag_result"] = "";
	$fieldLabelssaisunn["Japanese"]["Exhibition_Date"] = "Exhibition Date";
	$fieldToolTipssaisunn["Japanese"]["Exhibition_Date"] = "";
	$placeHolderssaisunn["Japanese"]["Exhibition_Date"] = "";
	$fieldLabelssaisunn["Japanese"]["search_keyword"] = "ストア内検索キーワード";
	$fieldToolTipssaisunn["Japanese"]["search_keyword"] = "";
	$placeHolderssaisunn["Japanese"]["search_keyword"] = "";
	$fieldLabelssaisunn["Japanese"]["stamp"] = "刻印";
	$fieldToolTipssaisunn["Japanese"]["stamp"] = "";
	$placeHolderssaisunn["Japanese"]["stamp"] = "";
	$fieldLabelssaisunn["Japanese"]["motif"] = "Motif";
	$fieldToolTipssaisunn["Japanese"]["motif"] = "";
	$placeHolderssaisunn["Japanese"]["motif"] = "";
	$fieldLabelssaisunn["Japanese"]["Setting"] = "Setting";
	$fieldToolTipssaisunn["Japanese"]["Setting"] = "";
	$placeHolderssaisunn["Japanese"]["Setting"] = "";
	$fieldLabelssaisunn["Japanese"]["processing"] = "Processing";
	$fieldToolTipssaisunn["Japanese"]["processing"] = "";
	$placeHolderssaisunn["Japanese"]["processing"] = "";
	$fieldLabelssaisunn["Japanese"]["Sleeve_Length"] = "Sleeve Length";
	$fieldToolTipssaisunn["Japanese"]["Sleeve_Length"] = "";
	$placeHolderssaisunn["Japanese"]["Sleeve_Length"] = "";
	$fieldLabelssaisunn["Japanese"]["length"] = "Length";
	$fieldToolTipssaisunn["Japanese"]["length"] = "";
	$placeHolderssaisunn["Japanese"]["length"] = "";
	$fieldLabelssaisunn["Japanese"]["Ring_size"] = "Ring Size";
	$fieldToolTipssaisunn["Japanese"]["Ring_size"] = "";
	$placeHolderssaisunn["Japanese"]["Ring_size"] = "";
	$fieldLabelssaisunn["Japanese"]["price_for_site"] = "Price For Site";
	$fieldToolTipssaisunn["Japanese"]["price_for_site"] = "";
	$placeHolderssaisunn["Japanese"]["price_for_site"] = "";
	$fieldLabelssaisunn["Japanese"]["yahoo_category_id"] = "Yahoo Category Id";
	$fieldToolTipssaisunn["Japanese"]["yahoo_category_id"] = "";
	$placeHolderssaisunn["Japanese"]["yahoo_category_id"] = "";
	$fieldLabelssaisunn["Japanese"]["Qty"] = "Qty";
	$fieldToolTipssaisunn["Japanese"]["Qty"] = "";
	$placeHolderssaisunn["Japanese"]["Qty"] = "";
	$fieldLabelssaisunn["Japanese"]["sales_period"] = "Sales Period";
	$fieldToolTipssaisunn["Japanese"]["sales_period"] = "";
	$placeHolderssaisunn["Japanese"]["sales_period"] = "";
	$fieldLabelssaisunn["Japanese"]["starting_price"] = "Starting Price";
	$fieldToolTipssaisunn["Japanese"]["starting_price"] = "";
	$placeHolderssaisunn["Japanese"]["starting_price"] = "";
	$fieldLabelssaisunn["Japanese"]["ecc_seq"] = "顧客番号";
	$fieldToolTipssaisunn["Japanese"]["ecc_seq"] = "";
	$placeHolderssaisunn["Japanese"]["ecc_seq"] = "";
	$fieldLabelssaisunn["Japanese"]["yahoo_sex"] = "性別";
	$fieldToolTipssaisunn["Japanese"]["yahoo_sex"] = "";
	$placeHolderssaisunn["Japanese"]["yahoo_sex"] = "";
	$fieldLabelssaisunn["Japanese"]["saisun_start"] = "採開";
	$fieldToolTipssaisunn["Japanese"]["saisun_start"] = "";
	$placeHolderssaisunn["Japanese"]["saisun_start"] = "";
	if (count($fieldToolTipssaisunn["Japanese"]))
		$tdatasaisunn[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelssaisunn[""] = array();
	$fieldToolTipssaisunn[""] = array();
	$placeHolderssaisunn[""] = array();
	$pageTitlessaisunn[""] = array();
	$fieldLabelssaisunn[""]["yahoo_sex"] = "Yahoo Sex";
	$fieldToolTipssaisunn[""]["yahoo_sex"] = "";
	$placeHolderssaisunn[""]["yahoo_sex"] = "";
	$fieldLabelssaisunn[""]["saisun_start"] = "Saisun Start";
	$fieldToolTipssaisunn[""]["saisun_start"] = "";
	$placeHolderssaisunn[""]["saisun_start"] = "";
	if (count($fieldToolTipssaisunn[""]))
		$tdatasaisunn[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelssaisunn["English"] = array();
	$fieldToolTipssaisunn["English"] = array();
	$placeHolderssaisunn["English"] = array();
	$pageTitlessaisunn["English"] = array();
	$fieldLabelssaisunn["English"]["saisun_start"] = "Saisun Start";
	$fieldToolTipssaisunn["English"]["saisun_start"] = "";
	$placeHolderssaisunn["English"]["saisun_start"] = "";
	if (count($fieldToolTipssaisunn["English"]))
		$tdatasaisunn[".isUseToolTips"] = true;
}


	$tdatasaisunn[".NCSearch"] = true;



$tdatasaisunn[".shortTableName"] = "saisunn";
$tdatasaisunn[".nSecOptions"] = 0;
$tdatasaisunn[".recsPerRowPrint"] = 1;
$tdatasaisunn[".mainTableOwnerID"] = "";
$tdatasaisunn[".moveNext"] = 1;
$tdatasaisunn[".entityType"] = 1;

$tdatasaisunn[".strOriginalTableName"] = "shouhin";

	



$tdatasaisunn[".showAddInPopup"] = false;

$tdatasaisunn[".showEditInPopup"] = false;

$tdatasaisunn[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatasaisunn[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatasaisunn[".fieldsForRegister"] = array();

$tdatasaisunn[".listAjax"] = false;

	$tdatasaisunn[".audit"] = false;

	$tdatasaisunn[".locking"] = false;

$tdatasaisunn[".edit"] = true;
$tdatasaisunn[".afterEditAction"] = 1;
$tdatasaisunn[".closePopupAfterEdit"] = 1;
$tdatasaisunn[".afterEditActionDetTable"] = "";

$tdatasaisunn[".add"] = true;
$tdatasaisunn[".afterAddAction"] = 1;
$tdatasaisunn[".closePopupAfterAdd"] = 1;
$tdatasaisunn[".afterAddActionDetTable"] = "";

$tdatasaisunn[".list"] = true;

$tdatasaisunn[".inlineEdit"] = true;

$tdatasaisunn[".updateSelected"] = true;

$tdatasaisunn[".reorderRecordsByHeader"] = true;



$tdatasaisunn[".inlineAdd"] = true;
$tdatasaisunn[".copy"] = true;
$tdatasaisunn[".view"] = true;

$tdatasaisunn[".import"] = true;

$tdatasaisunn[".exportTo"] = true;

$tdatasaisunn[".printFriendly"] = true;

$tdatasaisunn[".delete"] = true;

$tdatasaisunn[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatasaisunn[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatasaisunn[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatasaisunn[".searchSaving"] = false;
//

$tdatasaisunn[".showSearchPanel"] = true;
		$tdatasaisunn[".flexibleSearch"] = true;

$tdatasaisunn[".isUseAjaxSuggest"] = true;

$tdatasaisunn[".rowHighlite"] = true;



																																		
		

$tdatasaisunn[".ajaxCodeSnippetAdded"] = false;

$tdatasaisunn[".buttonsAdded"] = true;

$tdatasaisunn[".addPageEvents"] = true;

// use timepicker for search panel
$tdatasaisunn[".isUseTimeForSearch"] = false;



$tdatasaisunn[".badgeColor"] = "DAA520";


$tdatasaisunn[".allSearchFields"] = array();
$tdatasaisunn[".filterFields"] = array();
$tdatasaisunn[".requiredSearchFields"] = array();

$tdatasaisunn[".allSearchFields"][] = "ecc_seq";
	$tdatasaisunn[".allSearchFields"][] = "product_id";
	$tdatasaisunn[".allSearchFields"][] = "category_id";
	$tdatasaisunn[".allSearchFields"][] = "yahoo_sex";
	$tdatasaisunn[".allSearchFields"][] = "title";
	$tdatasaisunn[".allSearchFields"][] = "status";
	$tdatasaisunn[".allSearchFields"][] = "label_output_flag";
	$tdatasaisunn[".allSearchFields"][] = "satei_by";
	$tdatasaisunn[".allSearchFields"][] = "sub_category_id1";
	$tdatasaisunn[".allSearchFields"][] = "yahoo_sinaban";
	$tdatasaisunn[".allSearchFields"][] = "price";
	$tdatasaisunn[".allSearchFields"][] = "sales_price";
	$tdatasaisunn[".allSearchFields"][] = "product_num";
	$tdatasaisunn[".allSearchFields"][] = "description";
	$tdatasaisunn[".allSearchFields"][] = "raku_hyoujisaki_category";
	$tdatasaisunn[".allSearchFields"][] = "raku_hyoujisaki_category2";
	$tdatasaisunn[".allSearchFields"][] = "raku_hyoujisaki_category3";
	$tdatasaisunn[".allSearchFields"][] = "raku_hyoujisaki_category4";
	$tdatasaisunn[".allSearchFields"][] = "raku_hyoujisaki_category5";
	$tdatasaisunn[".allSearchFields"][] = "raku_tag_result";
	$tdatasaisunn[".allSearchFields"][] = "stamp";
	$tdatasaisunn[".allSearchFields"][] = "yahoo_kataban";
	$tdatasaisunn[".allSearchFields"][] = "yahoo_sozai";
	$tdatasaisunn[".allSearchFields"][] = "yahoo_color";
	$tdatasaisunn[".allSearchFields"][] = "yahoo_size";
	$tdatasaisunn[".allSearchFields"][] = "yahoo_condition1";
	$tdatasaisunn[".allSearchFields"][] = "yahoo_saisun_sha";
	$tdatasaisunn[".allSearchFields"][] = "yahoo_condition2";
	$tdatasaisunn[".allSearchFields"][] = "remark";
	$tdatasaisunn[".allSearchFields"][] = "yahoo_fuzokuhin";
	$tdatasaisunn[".allSearchFields"][] = "yahoo_sankou_uwadai";
	$tdatasaisunn[".allSearchFields"][] = "season";
	$tdatasaisunn[".allSearchFields"][] = "yahoo_title";
	$tdatasaisunn[".allSearchFields"][] = "goods_title";
	$tdatasaisunn[".allSearchFields"][] = "raku_title";
	$tdatasaisunn[".allSearchFields"][] = "search_keyword";
	$tdatasaisunn[".allSearchFields"][] = "kaitori_by";
	$tdatasaisunn[".allSearchFields"][] = "kaitory_hi";
	

$tdatasaisunn[".googleLikeFields"] = array();
$tdatasaisunn[".googleLikeFields"][] = "product_id";
$tdatasaisunn[".googleLikeFields"][] = "category_id";
$tdatasaisunn[".googleLikeFields"][] = "goods_title";
$tdatasaisunn[".googleLikeFields"][] = "sub_category_id1";
$tdatasaisunn[".googleLikeFields"][] = "price";
$tdatasaisunn[".googleLikeFields"][] = "remark";
$tdatasaisunn[".googleLikeFields"][] = "sales_price";
$tdatasaisunn[".googleLikeFields"][] = "description";
$tdatasaisunn[".googleLikeFields"][] = "status";
$tdatasaisunn[".googleLikeFields"][] = "product_num";
$tdatasaisunn[".googleLikeFields"][] = "yahoo_size";
$tdatasaisunn[".googleLikeFields"][] = "yahoo_title";
$tdatasaisunn[".googleLikeFields"][] = "yahoo_sankou_uwadai";
$tdatasaisunn[".googleLikeFields"][] = "yahoo_sozai";
$tdatasaisunn[".googleLikeFields"][] = "yahoo_color";
$tdatasaisunn[".googleLikeFields"][] = "yahoo_kataban";
$tdatasaisunn[".googleLikeFields"][] = "yahoo_condition1";
$tdatasaisunn[".googleLikeFields"][] = "yahoo_condition2";
$tdatasaisunn[".googleLikeFields"][] = "yahoo_fuzokuhin";
$tdatasaisunn[".googleLikeFields"][] = "yahoo_sinaban";
$tdatasaisunn[".googleLikeFields"][] = "yahoo_saisun_sha";
$tdatasaisunn[".googleLikeFields"][] = "raku_title";
$tdatasaisunn[".googleLikeFields"][] = "raku_hyoujisaki_category2";
$tdatasaisunn[".googleLikeFields"][] = "raku_hyoujisaki_category";
$tdatasaisunn[".googleLikeFields"][] = "raku_hyoujisaki_category3";
$tdatasaisunn[".googleLikeFields"][] = "season";
$tdatasaisunn[".googleLikeFields"][] = "satei_by";
$tdatasaisunn[".googleLikeFields"][] = "kaitori_by";
$tdatasaisunn[".googleLikeFields"][] = "kaitory_hi";
$tdatasaisunn[".googleLikeFields"][] = "raku_hyoujisaki_category4";
$tdatasaisunn[".googleLikeFields"][] = "raku_hyoujisaki_category5";
$tdatasaisunn[".googleLikeFields"][] = "raku_tag_result";
$tdatasaisunn[".googleLikeFields"][] = "search_keyword";
$tdatasaisunn[".googleLikeFields"][] = "stamp";
$tdatasaisunn[".googleLikeFields"][] = "yahoo_sex";
$tdatasaisunn[".googleLikeFields"][] = "saisun_start";
$tdatasaisunn[".googleLikeFields"][] = "ecc_seq";

$tdatasaisunn[".panelSearchFields"] = array();
$tdatasaisunn[".searchPanelOptions"] = array();
$tdatasaisunn[".panelSearchFields"][] = "ecc_seq";
	$tdatasaisunn[".panelSearchFields"][] = "product_id";
	$tdatasaisunn[".panelSearchFields"][] = "category_id";
	$tdatasaisunn[".panelSearchFields"][] = "yahoo_sex";
	$tdatasaisunn[".panelSearchFields"][] = "title";
	$tdatasaisunn[".panelSearchFields"][] = "status";
	$tdatasaisunn[".panelSearchFields"][] = "label_output_flag";
	
$tdatasaisunn[".advSearchFields"] = array();
$tdatasaisunn[".advSearchFields"][] = "ecc_seq";
$tdatasaisunn[".advSearchFields"][] = "product_id";
$tdatasaisunn[".advSearchFields"][] = "category_id";
$tdatasaisunn[".advSearchFields"][] = "yahoo_sex";
$tdatasaisunn[".advSearchFields"][] = "title";
$tdatasaisunn[".advSearchFields"][] = "status";
$tdatasaisunn[".advSearchFields"][] = "label_output_flag";
$tdatasaisunn[".advSearchFields"][] = "satei_by";
$tdatasaisunn[".advSearchFields"][] = "sub_category_id1";
$tdatasaisunn[".advSearchFields"][] = "yahoo_sinaban";
$tdatasaisunn[".advSearchFields"][] = "price";
$tdatasaisunn[".advSearchFields"][] = "sales_price";
$tdatasaisunn[".advSearchFields"][] = "product_num";
$tdatasaisunn[".advSearchFields"][] = "description";
$tdatasaisunn[".advSearchFields"][] = "raku_hyoujisaki_category";
$tdatasaisunn[".advSearchFields"][] = "raku_hyoujisaki_category2";
$tdatasaisunn[".advSearchFields"][] = "raku_hyoujisaki_category3";
$tdatasaisunn[".advSearchFields"][] = "raku_hyoujisaki_category4";
$tdatasaisunn[".advSearchFields"][] = "raku_hyoujisaki_category5";
$tdatasaisunn[".advSearchFields"][] = "raku_tag_result";
$tdatasaisunn[".advSearchFields"][] = "stamp";
$tdatasaisunn[".advSearchFields"][] = "yahoo_kataban";
$tdatasaisunn[".advSearchFields"][] = "yahoo_sozai";
$tdatasaisunn[".advSearchFields"][] = "yahoo_color";
$tdatasaisunn[".advSearchFields"][] = "yahoo_size";
$tdatasaisunn[".advSearchFields"][] = "yahoo_condition1";
$tdatasaisunn[".advSearchFields"][] = "yahoo_saisun_sha";
$tdatasaisunn[".advSearchFields"][] = "yahoo_condition2";
$tdatasaisunn[".advSearchFields"][] = "remark";
$tdatasaisunn[".advSearchFields"][] = "yahoo_fuzokuhin";
$tdatasaisunn[".advSearchFields"][] = "yahoo_sankou_uwadai";
$tdatasaisunn[".advSearchFields"][] = "season";
$tdatasaisunn[".advSearchFields"][] = "yahoo_title";
$tdatasaisunn[".advSearchFields"][] = "goods_title";
$tdatasaisunn[".advSearchFields"][] = "raku_title";
$tdatasaisunn[".advSearchFields"][] = "search_keyword";
$tdatasaisunn[".advSearchFields"][] = "kaitori_by";
$tdatasaisunn[".advSearchFields"][] = "kaitory_hi";

$tdatasaisunn[".tableType"] = "list";

$tdatasaisunn[".printerPageOrientation"] = 0;
$tdatasaisunn[".nPrinterPageScale"] = 100;

$tdatasaisunn[".nPrinterSplitRecords"] = 40;

$tdatasaisunn[".nPrinterPDFSplitRecords"] = 40;



$tdatasaisunn[".geocodingEnabled"] = false;





$tdatasaisunn[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatasaisunn[".pageSize"] = 20;

$tdatasaisunn[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY shouhin.product_id DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatasaisunn[".strOrderBy"] = $tstrOrderBy;

$tdatasaisunn[".orderindexes"] = array();
$tdatasaisunn[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "shouhin.product_id");

$tdatasaisunn[".sqlHead"] = "SELECT shouhin.product_id,  shouhin.category_id,  shouhin.goods_title,  shouhin.title,  shouhin.sub_category_id1,  shouhin.ecc_id,  shouhin.price,  shouhin.yahoo,  shouhin.remark,  shouhin.sales_price,  shouhin.description,  shouhin.status,  shouhin.product_num,  shouhin.updated_at,  shouhin.yahoo_size,  shouhin.yahoo_title,  shouhin.yahoo_sankou_uwadai,  shouhin.yahoo_sozai,  shouhin.yahoo_color,  shouhin.yahoo_kataban,  shouhin.yahoo_condition1,  shouhin.yahoo_condition2,  shouhin.yahoo_fuzokuhin,  shouhin.yahoo_sinaban,  shouhin.yahoo_saisun_sha,  shouhin.box_id,  shouhin.nyuukin_price,  shouhin.updated_by,  shouhin.raku_title,  shouhin.raku_hyoujisaki_category2,  shouhin.raku_hyoujisaki_category,  shouhin.raku_hyoujisaki_category3,  shouhin.timesta,  shouhin.saisun_end,  shouhin.label_output_flag,  shouhin.season,  shouhin.kanryou_henbi,  shouhin.box_sort,  shouhin.satei_by,  shouhin.kaitori_by,  shouhin.`comment`,  shouhin.satei_hi,  shouhin.kaitory_hi,  shouhin.REG_PHOTOGRAPHER,  shouhin.REG_AUTHOR,  shouhin.REG_PACKINGS,  shouhin.REG_KAKOU_DATE,  shouhin.REG_KAKOU,  shouhin.REG_EXHIBITOR,  shouhin.REG_PHOTOGRAPHER_DATE,  shouhin.DT_PACKING_DATE,  shouhin.DT_UP_DATE,  shouhin.AWAZU_DATE,  shouhin.AWAZU_NIN,  shouhin.sabun_date,  shouhin.browseid,  shouhin.browsenode,  shouhin.gold_property,  shouhin.ichiba_title,  shouhin.Gram,  shouhin.Parent_stone,  shouhin.Aside_stone,  shouhin.Appraiser,  shouhin.Remarks,  shouhin.Destination_selling,  shouhin.Finish,  shouhin.Discrimination,  shouhin.accessories,  shouhin.priority,  shouhin.A_storage,  shouhin.price_per_gram,  shouhin.price_per_parent_stone,  shouhin.price_per_aside_stone,  shouhin.price_secret,  shouhin.sales_price_secret,  shouhin.eq,  shouhin.en,  shouhin.line,  shouhin.item_name,  shouhin.handle,  shouhin.yahoo_color_id,  shouhin.raku_hyoujisaki_category4,  shouhin.raku_hyoujisaki_category5,  shouhin.raku_dir_1,  shouhin.raku_dir_2,  shouhin.raku_dir_3,  shouhin.raku_dir_4,  shouhin.raku_dir_5,  shouhin.raku_dir_result,  shouhin.raku_tag_result,  shouhin.Exhibition_Date,  shouhin.search_keyword,  shouhin.stamp,  shouhin.motif,  shouhin.Setting,  shouhin.processing,  shouhin.Sleeve_Length,  shouhin.length,  shouhin.Ring_size,  shouhin.price_for_site,  shouhin.yahoo_category_id,  shouhin.Qty,  shouhin.sales_period,  shouhin.starting_price,  shouhin.yahoo_sex,  shouhin.saisun_start,  Eoc.ecc_seq";
$tdatasaisunn[".sqlFrom"] = "FROM shouhin  LEFT OUTER JOIN Eoc ON shouhin.ecc_id = Eoc.ecc_id";
$tdatasaisunn[".sqlWhereExpr"] = "(shouhin.status = 29) OR (shouhin.status = 110) OR (shouhin.status = 33) OR (shouhin.status = 125) OR (shouhin.status = 7)";
$tdatasaisunn[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasaisunn[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasaisunn[".arrGroupsPerPage"] = $arrGPP;

$tdatasaisunn[".highlightSearchResults"] = true;

$tableKeyssaisunn = array();
$tableKeyssaisunn[] = "product_id";
$tdatasaisunn[".Keys"] = $tableKeyssaisunn;

$tdatasaisunn[".listFields"] = array();
$tdatasaisunn[".listFields"][] = "label_output_flag";
$tdatasaisunn[".listFields"][] = "ecc_seq";
$tdatasaisunn[".listFields"][] = "product_id";
$tdatasaisunn[".listFields"][] = "yahoo_sinaban";
$tdatasaisunn[".listFields"][] = "product_num";
$tdatasaisunn[".listFields"][] = "status";
$tdatasaisunn[".listFields"][] = "title";
$tdatasaisunn[".listFields"][] = "category_id";
$tdatasaisunn[".listFields"][] = "sub_category_id1";
$tdatasaisunn[".listFields"][] = "description";
$tdatasaisunn[".listFields"][] = "yahoo_condition2";
$tdatasaisunn[".listFields"][] = "yahoo_saisun_sha";
$tdatasaisunn[".listFields"][] = "price";
$tdatasaisunn[".listFields"][] = "sales_price";
$tdatasaisunn[".listFields"][] = "kaitori_by";
$tdatasaisunn[".listFields"][] = "updated_at";

$tdatasaisunn[".hideMobileList"] = array();


$tdatasaisunn[".viewFields"] = array();
$tdatasaisunn[".viewFields"][] = "ecc_seq";
$tdatasaisunn[".viewFields"][] = "status";
$tdatasaisunn[".viewFields"][] = "satei_by";
$tdatasaisunn[".viewFields"][] = "category_id";
$tdatasaisunn[".viewFields"][] = "sub_category_id1";
$tdatasaisunn[".viewFields"][] = "product_id";
$tdatasaisunn[".viewFields"][] = "yahoo_sinaban";
$tdatasaisunn[".viewFields"][] = "price";
$tdatasaisunn[".viewFields"][] = "sales_price";
$tdatasaisunn[".viewFields"][] = "product_num";
$tdatasaisunn[".viewFields"][] = "description";
$tdatasaisunn[".viewFields"][] = "raku_hyoujisaki_category";
$tdatasaisunn[".viewFields"][] = "raku_hyoujisaki_category2";
$tdatasaisunn[".viewFields"][] = "raku_hyoujisaki_category3";
$tdatasaisunn[".viewFields"][] = "raku_hyoujisaki_category4";
$tdatasaisunn[".viewFields"][] = "raku_hyoujisaki_category5";
$tdatasaisunn[".viewFields"][] = "raku_tag_result";
$tdatasaisunn[".viewFields"][] = "stamp";
$tdatasaisunn[".viewFields"][] = "yahoo_kataban";
$tdatasaisunn[".viewFields"][] = "yahoo_sozai";
$tdatasaisunn[".viewFields"][] = "yahoo_color";
$tdatasaisunn[".viewFields"][] = "yahoo_size";
$tdatasaisunn[".viewFields"][] = "yahoo_condition1";
$tdatasaisunn[".viewFields"][] = "yahoo_saisun_sha";
$tdatasaisunn[".viewFields"][] = "yahoo_condition2";
$tdatasaisunn[".viewFields"][] = "remark";
$tdatasaisunn[".viewFields"][] = "yahoo_fuzokuhin";
$tdatasaisunn[".viewFields"][] = "yahoo_sankou_uwadai";
$tdatasaisunn[".viewFields"][] = "season";
$tdatasaisunn[".viewFields"][] = "yahoo_title";
$tdatasaisunn[".viewFields"][] = "goods_title";
$tdatasaisunn[".viewFields"][] = "raku_title";
$tdatasaisunn[".viewFields"][] = "search_keyword";
$tdatasaisunn[".viewFields"][] = "kaitori_by";
$tdatasaisunn[".viewFields"][] = "kaitory_hi";

$tdatasaisunn[".addFields"] = array();
$tdatasaisunn[".addFields"][] = "status";
$tdatasaisunn[".addFields"][] = "satei_by";
$tdatasaisunn[".addFields"][] = "category_id";
$tdatasaisunn[".addFields"][] = "sub_category_id1";
$tdatasaisunn[".addFields"][] = "product_id";
$tdatasaisunn[".addFields"][] = "yahoo_sinaban";
$tdatasaisunn[".addFields"][] = "price";
$tdatasaisunn[".addFields"][] = "sales_price";
$tdatasaisunn[".addFields"][] = "product_num";
$tdatasaisunn[".addFields"][] = "description";
$tdatasaisunn[".addFields"][] = "raku_hyoujisaki_category";
$tdatasaisunn[".addFields"][] = "raku_hyoujisaki_category2";
$tdatasaisunn[".addFields"][] = "raku_hyoujisaki_category3";
$tdatasaisunn[".addFields"][] = "raku_hyoujisaki_category4";
$tdatasaisunn[".addFields"][] = "raku_hyoujisaki_category5";
$tdatasaisunn[".addFields"][] = "raku_tag_result";
$tdatasaisunn[".addFields"][] = "stamp";
$tdatasaisunn[".addFields"][] = "yahoo_kataban";
$tdatasaisunn[".addFields"][] = "yahoo_sozai";
$tdatasaisunn[".addFields"][] = "yahoo_color";
$tdatasaisunn[".addFields"][] = "yahoo_size";
$tdatasaisunn[".addFields"][] = "yahoo_condition1";
$tdatasaisunn[".addFields"][] = "yahoo_saisun_sha";
$tdatasaisunn[".addFields"][] = "yahoo_condition2";
$tdatasaisunn[".addFields"][] = "remark";
$tdatasaisunn[".addFields"][] = "yahoo_fuzokuhin";
$tdatasaisunn[".addFields"][] = "yahoo_sankou_uwadai";
$tdatasaisunn[".addFields"][] = "season";
$tdatasaisunn[".addFields"][] = "yahoo_title";
$tdatasaisunn[".addFields"][] = "goods_title";
$tdatasaisunn[".addFields"][] = "raku_title";
$tdatasaisunn[".addFields"][] = "search_keyword";
$tdatasaisunn[".addFields"][] = "kaitory_hi";
$tdatasaisunn[".addFields"][] = "label_output_flag";
$tdatasaisunn[".addFields"][] = "kaitori_by";

$tdatasaisunn[".masterListFields"] = array();
$tdatasaisunn[".masterListFields"][] = "yahoo_sex";
$tdatasaisunn[".masterListFields"][] = "saisun_start";
$tdatasaisunn[".masterListFields"][] = "ecc_seq";
$tdatasaisunn[".masterListFields"][] = "status";
$tdatasaisunn[".masterListFields"][] = "satei_by";
$tdatasaisunn[".masterListFields"][] = "category_id";
$tdatasaisunn[".masterListFields"][] = "title";
$tdatasaisunn[".masterListFields"][] = "sub_category_id1";
$tdatasaisunn[".masterListFields"][] = "product_id";
$tdatasaisunn[".masterListFields"][] = "ecc_id";
$tdatasaisunn[".masterListFields"][] = "yahoo";
$tdatasaisunn[".masterListFields"][] = "yahoo_sinaban";
$tdatasaisunn[".masterListFields"][] = "price";
$tdatasaisunn[".masterListFields"][] = "sales_price";
$tdatasaisunn[".masterListFields"][] = "product_num";
$tdatasaisunn[".masterListFields"][] = "description";
$tdatasaisunn[".masterListFields"][] = "updated_at";
$tdatasaisunn[".masterListFields"][] = "raku_hyoujisaki_category";
$tdatasaisunn[".masterListFields"][] = "raku_hyoujisaki_category2";
$tdatasaisunn[".masterListFields"][] = "raku_hyoujisaki_category3";
$tdatasaisunn[".masterListFields"][] = "raku_hyoujisaki_category4";
$tdatasaisunn[".masterListFields"][] = "raku_hyoujisaki_category5";
$tdatasaisunn[".masterListFields"][] = "raku_tag_result";
$tdatasaisunn[".masterListFields"][] = "stamp";
$tdatasaisunn[".masterListFields"][] = "yahoo_kataban";
$tdatasaisunn[".masterListFields"][] = "yahoo_sozai";
$tdatasaisunn[".masterListFields"][] = "yahoo_color";
$tdatasaisunn[".masterListFields"][] = "yahoo_size";
$tdatasaisunn[".masterListFields"][] = "yahoo_condition1";
$tdatasaisunn[".masterListFields"][] = "yahoo_condition2";
$tdatasaisunn[".masterListFields"][] = "yahoo_saisun_sha";
$tdatasaisunn[".masterListFields"][] = "remark";
$tdatasaisunn[".masterListFields"][] = "yahoo_fuzokuhin";
$tdatasaisunn[".masterListFields"][] = "box_id";
$tdatasaisunn[".masterListFields"][] = "yahoo_sankou_uwadai";
$tdatasaisunn[".masterListFields"][] = "nyuukin_price";
$tdatasaisunn[".masterListFields"][] = "updated_by";
$tdatasaisunn[".masterListFields"][] = "season";
$tdatasaisunn[".masterListFields"][] = "yahoo_title";
$tdatasaisunn[".masterListFields"][] = "goods_title";
$tdatasaisunn[".masterListFields"][] = "raku_title";
$tdatasaisunn[".masterListFields"][] = "search_keyword";
$tdatasaisunn[".masterListFields"][] = "timesta";
$tdatasaisunn[".masterListFields"][] = "processing";
$tdatasaisunn[".masterListFields"][] = "Sleeve_Length";
$tdatasaisunn[".masterListFields"][] = "saisun_end";
$tdatasaisunn[".masterListFields"][] = "length";
$tdatasaisunn[".masterListFields"][] = "label_output_flag";
$tdatasaisunn[".masterListFields"][] = "Ring_size";
$tdatasaisunn[".masterListFields"][] = "price_for_site";
$tdatasaisunn[".masterListFields"][] = "kanryou_henbi";
$tdatasaisunn[".masterListFields"][] = "yahoo_category_id";
$tdatasaisunn[".masterListFields"][] = "box_sort";
$tdatasaisunn[".masterListFields"][] = "Qty";
$tdatasaisunn[".masterListFields"][] = "sales_period";
$tdatasaisunn[".masterListFields"][] = "kaitori_by";
$tdatasaisunn[".masterListFields"][] = "starting_price";
$tdatasaisunn[".masterListFields"][] = "comment";
$tdatasaisunn[".masterListFields"][] = "satei_hi";
$tdatasaisunn[".masterListFields"][] = "kaitory_hi";
$tdatasaisunn[".masterListFields"][] = "REG_PHOTOGRAPHER";
$tdatasaisunn[".masterListFields"][] = "REG_AUTHOR";
$tdatasaisunn[".masterListFields"][] = "REG_PACKINGS";
$tdatasaisunn[".masterListFields"][] = "REG_KAKOU_DATE";
$tdatasaisunn[".masterListFields"][] = "REG_KAKOU";
$tdatasaisunn[".masterListFields"][] = "REG_EXHIBITOR";
$tdatasaisunn[".masterListFields"][] = "REG_PHOTOGRAPHER_DATE";
$tdatasaisunn[".masterListFields"][] = "DT_PACKING_DATE";
$tdatasaisunn[".masterListFields"][] = "DT_UP_DATE";
$tdatasaisunn[".masterListFields"][] = "AWAZU_DATE";
$tdatasaisunn[".masterListFields"][] = "AWAZU_NIN";
$tdatasaisunn[".masterListFields"][] = "sabun_date";
$tdatasaisunn[".masterListFields"][] = "browseid";
$tdatasaisunn[".masterListFields"][] = "browsenode";
$tdatasaisunn[".masterListFields"][] = "gold_property";
$tdatasaisunn[".masterListFields"][] = "ichiba_title";
$tdatasaisunn[".masterListFields"][] = "Gram";
$tdatasaisunn[".masterListFields"][] = "Parent_stone";
$tdatasaisunn[".masterListFields"][] = "Aside_stone";
$tdatasaisunn[".masterListFields"][] = "Appraiser";
$tdatasaisunn[".masterListFields"][] = "Remarks";
$tdatasaisunn[".masterListFields"][] = "Destination_selling";
$tdatasaisunn[".masterListFields"][] = "Finish";
$tdatasaisunn[".masterListFields"][] = "Discrimination";
$tdatasaisunn[".masterListFields"][] = "accessories";
$tdatasaisunn[".masterListFields"][] = "priority";
$tdatasaisunn[".masterListFields"][] = "A_storage";
$tdatasaisunn[".masterListFields"][] = "price_per_gram";
$tdatasaisunn[".masterListFields"][] = "price_per_parent_stone";
$tdatasaisunn[".masterListFields"][] = "price_per_aside_stone";
$tdatasaisunn[".masterListFields"][] = "price_secret";
$tdatasaisunn[".masterListFields"][] = "sales_price_secret";
$tdatasaisunn[".masterListFields"][] = "eq";
$tdatasaisunn[".masterListFields"][] = "en";
$tdatasaisunn[".masterListFields"][] = "line";
$tdatasaisunn[".masterListFields"][] = "item_name";
$tdatasaisunn[".masterListFields"][] = "handle";
$tdatasaisunn[".masterListFields"][] = "yahoo_color_id";
$tdatasaisunn[".masterListFields"][] = "raku_dir_1";
$tdatasaisunn[".masterListFields"][] = "raku_dir_2";
$tdatasaisunn[".masterListFields"][] = "raku_dir_3";
$tdatasaisunn[".masterListFields"][] = "raku_dir_4";
$tdatasaisunn[".masterListFields"][] = "raku_dir_5";
$tdatasaisunn[".masterListFields"][] = "raku_dir_result";
$tdatasaisunn[".masterListFields"][] = "Exhibition_Date";
$tdatasaisunn[".masterListFields"][] = "motif";
$tdatasaisunn[".masterListFields"][] = "Setting";

$tdatasaisunn[".inlineAddFields"] = array();
$tdatasaisunn[".inlineAddFields"][] = "label_output_flag";
$tdatasaisunn[".inlineAddFields"][] = "product_id";
$tdatasaisunn[".inlineAddFields"][] = "yahoo_sinaban";
$tdatasaisunn[".inlineAddFields"][] = "status";
$tdatasaisunn[".inlineAddFields"][] = "category_id";
$tdatasaisunn[".inlineAddFields"][] = "sub_category_id1";
$tdatasaisunn[".inlineAddFields"][] = "description";
$tdatasaisunn[".inlineAddFields"][] = "yahoo_condition2";
$tdatasaisunn[".inlineAddFields"][] = "yahoo_saisun_sha";
$tdatasaisunn[".inlineAddFields"][] = "price";
$tdatasaisunn[".inlineAddFields"][] = "sales_price";
$tdatasaisunn[".inlineAddFields"][] = "kaitori_by";

$tdatasaisunn[".editFields"] = array();
$tdatasaisunn[".editFields"][] = "status";
$tdatasaisunn[".editFields"][] = "satei_by";
$tdatasaisunn[".editFields"][] = "category_id";
$tdatasaisunn[".editFields"][] = "sub_category_id1";
$tdatasaisunn[".editFields"][] = "product_id";
$tdatasaisunn[".editFields"][] = "yahoo_sinaban";
$tdatasaisunn[".editFields"][] = "price";
$tdatasaisunn[".editFields"][] = "sales_price";
$tdatasaisunn[".editFields"][] = "yahoo_sex";
$tdatasaisunn[".editFields"][] = "saisun_start";
$tdatasaisunn[".editFields"][] = "product_num";
$tdatasaisunn[".editFields"][] = "description";
$tdatasaisunn[".editFields"][] = "raku_hyoujisaki_category";
$tdatasaisunn[".editFields"][] = "raku_hyoujisaki_category2";
$tdatasaisunn[".editFields"][] = "raku_hyoujisaki_category3";
$tdatasaisunn[".editFields"][] = "raku_hyoujisaki_category4";
$tdatasaisunn[".editFields"][] = "raku_hyoujisaki_category5";
$tdatasaisunn[".editFields"][] = "raku_tag_result";
$tdatasaisunn[".editFields"][] = "stamp";
$tdatasaisunn[".editFields"][] = "yahoo_kataban";
$tdatasaisunn[".editFields"][] = "yahoo_sozai";
$tdatasaisunn[".editFields"][] = "yahoo_color";
$tdatasaisunn[".editFields"][] = "yahoo_size";
$tdatasaisunn[".editFields"][] = "yahoo_condition1";
$tdatasaisunn[".editFields"][] = "yahoo_condition2";
$tdatasaisunn[".editFields"][] = "yahoo_saisun_sha";
$tdatasaisunn[".editFields"][] = "remark";
$tdatasaisunn[".editFields"][] = "yahoo_fuzokuhin";
$tdatasaisunn[".editFields"][] = "yahoo_sankou_uwadai";
$tdatasaisunn[".editFields"][] = "season";
$tdatasaisunn[".editFields"][] = "yahoo_title";
$tdatasaisunn[".editFields"][] = "raku_title";
$tdatasaisunn[".editFields"][] = "goods_title";
$tdatasaisunn[".editFields"][] = "search_keyword";

$tdatasaisunn[".inlineEditFields"] = array();
$tdatasaisunn[".inlineEditFields"][] = "label_output_flag";
$tdatasaisunn[".inlineEditFields"][] = "product_id";
$tdatasaisunn[".inlineEditFields"][] = "yahoo_sinaban";
$tdatasaisunn[".inlineEditFields"][] = "status";
$tdatasaisunn[".inlineEditFields"][] = "category_id";
$tdatasaisunn[".inlineEditFields"][] = "sub_category_id1";
$tdatasaisunn[".inlineEditFields"][] = "description";
$tdatasaisunn[".inlineEditFields"][] = "yahoo_condition2";
$tdatasaisunn[".inlineEditFields"][] = "yahoo_saisun_sha";
$tdatasaisunn[".inlineEditFields"][] = "price";
$tdatasaisunn[".inlineEditFields"][] = "sales_price";
$tdatasaisunn[".inlineEditFields"][] = "kaitori_by";

$tdatasaisunn[".updateSelectedFields"] = array();
$tdatasaisunn[".updateSelectedFields"][] = "status";
$tdatasaisunn[".updateSelectedFields"][] = "satei_by";
$tdatasaisunn[".updateSelectedFields"][] = "category_id";
$tdatasaisunn[".updateSelectedFields"][] = "sub_category_id1";
$tdatasaisunn[".updateSelectedFields"][] = "product_id";
$tdatasaisunn[".updateSelectedFields"][] = "yahoo_sinaban";
$tdatasaisunn[".updateSelectedFields"][] = "price";
$tdatasaisunn[".updateSelectedFields"][] = "sales_price";
$tdatasaisunn[".updateSelectedFields"][] = "product_num";
$tdatasaisunn[".updateSelectedFields"][] = "description";
$tdatasaisunn[".updateSelectedFields"][] = "raku_hyoujisaki_category";
$tdatasaisunn[".updateSelectedFields"][] = "raku_hyoujisaki_category2";
$tdatasaisunn[".updateSelectedFields"][] = "raku_hyoujisaki_category3";
$tdatasaisunn[".updateSelectedFields"][] = "raku_hyoujisaki_category4";
$tdatasaisunn[".updateSelectedFields"][] = "raku_hyoujisaki_category5";
$tdatasaisunn[".updateSelectedFields"][] = "raku_tag_result";
$tdatasaisunn[".updateSelectedFields"][] = "stamp";
$tdatasaisunn[".updateSelectedFields"][] = "yahoo_kataban";
$tdatasaisunn[".updateSelectedFields"][] = "yahoo_sozai";
$tdatasaisunn[".updateSelectedFields"][] = "yahoo_color";
$tdatasaisunn[".updateSelectedFields"][] = "yahoo_size";
$tdatasaisunn[".updateSelectedFields"][] = "yahoo_condition1";
$tdatasaisunn[".updateSelectedFields"][] = "yahoo_condition2";
$tdatasaisunn[".updateSelectedFields"][] = "yahoo_saisun_sha";
$tdatasaisunn[".updateSelectedFields"][] = "remark";
$tdatasaisunn[".updateSelectedFields"][] = "yahoo_fuzokuhin";
$tdatasaisunn[".updateSelectedFields"][] = "yahoo_sankou_uwadai";
$tdatasaisunn[".updateSelectedFields"][] = "season";
$tdatasaisunn[".updateSelectedFields"][] = "yahoo_title";
$tdatasaisunn[".updateSelectedFields"][] = "raku_title";
$tdatasaisunn[".updateSelectedFields"][] = "goods_title";
$tdatasaisunn[".updateSelectedFields"][] = "search_keyword";


$tdatasaisunn[".exportFields"] = array();
$tdatasaisunn[".exportFields"][] = "ecc_seq";
$tdatasaisunn[".exportFields"][] = "status";
$tdatasaisunn[".exportFields"][] = "satei_by";
$tdatasaisunn[".exportFields"][] = "category_id";
$tdatasaisunn[".exportFields"][] = "sub_category_id1";
$tdatasaisunn[".exportFields"][] = "product_id";
$tdatasaisunn[".exportFields"][] = "yahoo_sinaban";
$tdatasaisunn[".exportFields"][] = "price";
$tdatasaisunn[".exportFields"][] = "sales_price";
$tdatasaisunn[".exportFields"][] = "product_num";
$tdatasaisunn[".exportFields"][] = "description";
$tdatasaisunn[".exportFields"][] = "raku_hyoujisaki_category";
$tdatasaisunn[".exportFields"][] = "raku_hyoujisaki_category2";
$tdatasaisunn[".exportFields"][] = "raku_hyoujisaki_category3";
$tdatasaisunn[".exportFields"][] = "raku_hyoujisaki_category4";
$tdatasaisunn[".exportFields"][] = "raku_hyoujisaki_category5";
$tdatasaisunn[".exportFields"][] = "raku_tag_result";
$tdatasaisunn[".exportFields"][] = "stamp";
$tdatasaisunn[".exportFields"][] = "yahoo_kataban";
$tdatasaisunn[".exportFields"][] = "yahoo_sozai";
$tdatasaisunn[".exportFields"][] = "yahoo_color";
$tdatasaisunn[".exportFields"][] = "yahoo_size";
$tdatasaisunn[".exportFields"][] = "yahoo_condition1";
$tdatasaisunn[".exportFields"][] = "yahoo_saisun_sha";
$tdatasaisunn[".exportFields"][] = "yahoo_condition2";
$tdatasaisunn[".exportFields"][] = "remark";
$tdatasaisunn[".exportFields"][] = "yahoo_fuzokuhin";
$tdatasaisunn[".exportFields"][] = "yahoo_sankou_uwadai";
$tdatasaisunn[".exportFields"][] = "season";
$tdatasaisunn[".exportFields"][] = "yahoo_title";
$tdatasaisunn[".exportFields"][] = "goods_title";
$tdatasaisunn[".exportFields"][] = "raku_title";
$tdatasaisunn[".exportFields"][] = "search_keyword";
$tdatasaisunn[".exportFields"][] = "kaitori_by";
$tdatasaisunn[".exportFields"][] = "kaitory_hi";

$tdatasaisunn[".importFields"] = array();
$tdatasaisunn[".importFields"][] = "product_id";
$tdatasaisunn[".importFields"][] = "category_id";
$tdatasaisunn[".importFields"][] = "goods_title";
$tdatasaisunn[".importFields"][] = "sub_category_id1";
$tdatasaisunn[".importFields"][] = "price";
$tdatasaisunn[".importFields"][] = "remark";
$tdatasaisunn[".importFields"][] = "sales_price";
$tdatasaisunn[".importFields"][] = "description";
$tdatasaisunn[".importFields"][] = "status";
$tdatasaisunn[".importFields"][] = "product_num";
$tdatasaisunn[".importFields"][] = "yahoo_size";
$tdatasaisunn[".importFields"][] = "yahoo_title";
$tdatasaisunn[".importFields"][] = "yahoo_sankou_uwadai";
$tdatasaisunn[".importFields"][] = "yahoo_sozai";
$tdatasaisunn[".importFields"][] = "yahoo_color";
$tdatasaisunn[".importFields"][] = "yahoo_kataban";
$tdatasaisunn[".importFields"][] = "yahoo_condition1";
$tdatasaisunn[".importFields"][] = "yahoo_condition2";
$tdatasaisunn[".importFields"][] = "yahoo_fuzokuhin";
$tdatasaisunn[".importFields"][] = "yahoo_sinaban";
$tdatasaisunn[".importFields"][] = "yahoo_saisun_sha";
$tdatasaisunn[".importFields"][] = "raku_title";
$tdatasaisunn[".importFields"][] = "raku_hyoujisaki_category2";
$tdatasaisunn[".importFields"][] = "raku_hyoujisaki_category";
$tdatasaisunn[".importFields"][] = "raku_hyoujisaki_category3";
$tdatasaisunn[".importFields"][] = "season";
$tdatasaisunn[".importFields"][] = "satei_by";
$tdatasaisunn[".importFields"][] = "kaitori_by";
$tdatasaisunn[".importFields"][] = "kaitory_hi";
$tdatasaisunn[".importFields"][] = "raku_hyoujisaki_category4";
$tdatasaisunn[".importFields"][] = "raku_hyoujisaki_category5";
$tdatasaisunn[".importFields"][] = "raku_tag_result";
$tdatasaisunn[".importFields"][] = "search_keyword";
$tdatasaisunn[".importFields"][] = "stamp";
$tdatasaisunn[".importFields"][] = "ecc_seq";

$tdatasaisunn[".printFields"] = array();
$tdatasaisunn[".printFields"][] = "ecc_seq";
$tdatasaisunn[".printFields"][] = "status";
$tdatasaisunn[".printFields"][] = "satei_by";
$tdatasaisunn[".printFields"][] = "category_id";
$tdatasaisunn[".printFields"][] = "sub_category_id1";
$tdatasaisunn[".printFields"][] = "product_id";
$tdatasaisunn[".printFields"][] = "yahoo_sinaban";
$tdatasaisunn[".printFields"][] = "price";
$tdatasaisunn[".printFields"][] = "sales_price";
$tdatasaisunn[".printFields"][] = "product_num";
$tdatasaisunn[".printFields"][] = "description";
$tdatasaisunn[".printFields"][] = "raku_hyoujisaki_category";
$tdatasaisunn[".printFields"][] = "raku_hyoujisaki_category2";
$tdatasaisunn[".printFields"][] = "raku_hyoujisaki_category3";
$tdatasaisunn[".printFields"][] = "raku_hyoujisaki_category4";
$tdatasaisunn[".printFields"][] = "raku_hyoujisaki_category5";
$tdatasaisunn[".printFields"][] = "raku_tag_result";
$tdatasaisunn[".printFields"][] = "stamp";
$tdatasaisunn[".printFields"][] = "yahoo_kataban";
$tdatasaisunn[".printFields"][] = "yahoo_sozai";
$tdatasaisunn[".printFields"][] = "yahoo_color";
$tdatasaisunn[".printFields"][] = "yahoo_size";
$tdatasaisunn[".printFields"][] = "yahoo_condition1";
$tdatasaisunn[".printFields"][] = "yahoo_saisun_sha";
$tdatasaisunn[".printFields"][] = "yahoo_condition2";
$tdatasaisunn[".printFields"][] = "remark";
$tdatasaisunn[".printFields"][] = "yahoo_fuzokuhin";
$tdatasaisunn[".printFields"][] = "yahoo_sankou_uwadai";
$tdatasaisunn[".printFields"][] = "season";
$tdatasaisunn[".printFields"][] = "yahoo_title";
$tdatasaisunn[".printFields"][] = "goods_title";
$tdatasaisunn[".printFields"][] = "raku_title";
$tdatasaisunn[".printFields"][] = "search_keyword";
$tdatasaisunn[".printFields"][] = "kaitori_by";
$tdatasaisunn[".printFields"][] = "kaitory_hi";

//	product_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "product_id";
	$fdata["GoodName"] = "product_id";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisunn","product_id");
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




	$tdatasaisunn["product_id"] = $fdata;
//	category_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "category_id";
	$fdata["GoodName"] = "category_id";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisunn","category_id");
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




	$tdatasaisunn["category_id"] = $fdata;
//	goods_title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "goods_title";
	$fdata["GoodName"] = "goods_title";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisunn","goods_title");
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




	$tdatasaisunn["goods_title"] = $fdata;
//	title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "title";
	$fdata["GoodName"] = "title";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisunn","title");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatasaisunn["title"] = $fdata;
//	sub_category_id1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "sub_category_id1";
	$fdata["GoodName"] = "sub_category_id1";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisunn","sub_category_id1");
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




	$tdatasaisunn["sub_category_id1"] = $fdata;
//	ecc_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "ecc_id";
	$fdata["GoodName"] = "ecc_id";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisunn","ecc_id");
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








	$tdatasaisunn["ecc_id"] = $fdata;
//	price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "price";
	$fdata["GoodName"] = "price";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisunn","price");
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
	$fdata["FullName"] = "shouhin.price";

	
	
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




	$tdatasaisunn["price"] = $fdata;
//	yahoo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "yahoo";
	$fdata["GoodName"] = "yahoo";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisunn","yahoo");
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








	$tdatasaisunn["yahoo"] = $fdata;
//	remark
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "remark";
	$fdata["GoodName"] = "remark";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisunn","remark");
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




	$tdatasaisunn["remark"] = $fdata;
//	sales_price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "sales_price";
	$fdata["GoodName"] = "sales_price";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisunn","sales_price");
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
	$fdata["FullName"] = "shouhin.sales_price";

	
	
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




	$tdatasaisunn["sales_price"] = $fdata;
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisunn","description");
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




	$tdatasaisunn["description"] = $fdata;
//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisunn","status");
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




	$tdatasaisunn["status"] = $fdata;
//	product_num
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "product_num";
	$fdata["GoodName"] = "product_num";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisunn","product_num");
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
				$edata["LookupType"] = 1;
	$edata["LookupTable"] = "mst_brand2";
	$edata["LookupConnId"] = "internet_at_urlounge_co_jp";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 1;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "name";

	
	$edata["LookupOrderBy"] = "";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "yahoo_junle", "lookup" => "name" );

	
		$edata["SimpleAdd"] = true;


	
	
	
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




	$tdatasaisunn["product_num"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisunn","updated_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "updated_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "shouhin.updated_at";

	
	
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








	$tdatasaisunn["updated_at"] = $fdata;
//	yahoo_size
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "yahoo_size";
	$fdata["GoodName"] = "yahoo_size";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisunn","yahoo_size");
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




	$tdatasaisunn["yahoo_size"] = $fdata;
//	yahoo_title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "yahoo_title";
	$fdata["GoodName"] = "yahoo_title";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisunn","yahoo_title");
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




	$tdatasaisunn["yahoo_title"] = $fdata;
//	yahoo_sankou_uwadai
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "yahoo_sankou_uwadai";
	$fdata["GoodName"] = "yahoo_sankou_uwadai";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisunn","yahoo_sankou_uwadai");
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




	$tdatasaisunn["yahoo_sankou_uwadai"] = $fdata;
//	yahoo_sozai
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "yahoo_sozai";
	$fdata["GoodName"] = "yahoo_sozai";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisunn","yahoo_sozai");
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




	$tdatasaisunn["yahoo_sozai"] = $fdata;
//	yahoo_color
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "yahoo_color";
	$fdata["GoodName"] = "yahoo_color";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisunn","yahoo_color");
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




	$tdatasaisunn["yahoo_color"] = $fdata;
//	yahoo_kataban
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "yahoo_kataban";
	$fdata["GoodName"] = "yahoo_kataban";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisunn","yahoo_kataban");
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




	$tdatasaisunn["yahoo_kataban"] = $fdata;
//	yahoo_condition1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "yahoo_condition1";
	$fdata["GoodName"] = "yahoo_condition1";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisunn","yahoo_condition1");
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




	$tdatasaisunn["yahoo_condition1"] = $fdata;
//	yahoo_condition2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "yahoo_condition2";
	$fdata["GoodName"] = "yahoo_condition2";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisunn","yahoo_condition2");
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




	$tdatasaisunn["yahoo_condition2"] = $fdata;
//	yahoo_fuzokuhin
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "yahoo_fuzokuhin";
	$fdata["GoodName"] = "yahoo_fuzokuhin";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisunn","yahoo_fuzokuhin");
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




	$tdatasaisunn["yahoo_fuzokuhin"] = $fdata;
//	yahoo_sinaban
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "yahoo_sinaban";
	$fdata["GoodName"] = "yahoo_sinaban";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisunn","yahoo_sinaban");
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




	$tdatasaisunn["yahoo_sinaban"] = $fdata;
//	yahoo_saisun_sha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "yahoo_saisun_sha";
	$fdata["GoodName"] = "yahoo_saisun_sha";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisunn","yahoo_saisun_sha");
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

		$fdata["strField"] = "yahoo_saisun_sha";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "shouhin.yahoo_saisun_sha";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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
	$edata["LookupTable"] = "users";
	$edata["LookupConnId"] = "internet_at_urlounge_co_jp";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "user_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "first_name";

	
	$edata["LookupOrderBy"] = "income_id";

	
	
	
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




	$tdatasaisunn["yahoo_saisun_sha"] = $fdata;
//	box_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "box_id";
	$fdata["GoodName"] = "box_id";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisunn","box_id");
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








	$tdatasaisunn["box_id"] = $fdata;
//	nyuukin_price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "nyuukin_price";
	$fdata["GoodName"] = "nyuukin_price";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisunn","nyuukin_price");
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








	$tdatasaisunn["nyuukin_price"] = $fdata;
//	updated_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "updated_by";
	$fdata["GoodName"] = "updated_by";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisunn","updated_by");
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








	$tdatasaisunn["updated_by"] = $fdata;
//	raku_title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "raku_title";
	$fdata["GoodName"] = "raku_title";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisunn","raku_title");
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




	$tdatasaisunn["raku_title"] = $fdata;
//	raku_hyoujisaki_category2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "raku_hyoujisaki_category2";
	$fdata["GoodName"] = "raku_hyoujisaki_category2";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisunn","raku_hyoujisaki_category2");
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




	$tdatasaisunn["raku_hyoujisaki_category2"] = $fdata;
//	raku_hyoujisaki_category
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "raku_hyoujisaki_category";
	$fdata["GoodName"] = "raku_hyoujisaki_category";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisunn","raku_hyoujisaki_category");
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




	$tdatasaisunn["raku_hyoujisaki_category"] = $fdata;
//	raku_hyoujisaki_category3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "raku_hyoujisaki_category3";
	$fdata["GoodName"] = "raku_hyoujisaki_category3";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisunn","raku_hyoujisaki_category3");
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




	$tdatasaisunn["raku_hyoujisaki_category3"] = $fdata;
//	timesta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "timesta";
	$fdata["GoodName"] = "timesta";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisunn","timesta");
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








	$tdatasaisunn["timesta"] = $fdata;
//	saisun_end
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "saisun_end";
	$fdata["GoodName"] = "saisun_end";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisunn","saisun_end");
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








	$tdatasaisunn["saisun_end"] = $fdata;
//	label_output_flag
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "label_output_flag";
	$fdata["GoodName"] = "label_output_flag";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisunn","label_output_flag");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "label_output_flag";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "shouhin.label_output_flag";

	
	
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




	$tdatasaisunn["label_output_flag"] = $fdata;
//	season
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "season";
	$fdata["GoodName"] = "season";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisunn","season");
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




	$tdatasaisunn["season"] = $fdata;
//	kanryou_henbi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "kanryou_henbi";
	$fdata["GoodName"] = "kanryou_henbi";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisunn","kanryou_henbi");
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








	$tdatasaisunn["kanryou_henbi"] = $fdata;
//	box_sort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "box_sort";
	$fdata["GoodName"] = "box_sort";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisunn","box_sort");
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








	$tdatasaisunn["box_sort"] = $fdata;
//	satei_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "satei_by";
	$fdata["GoodName"] = "satei_by";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisunn","satei_by");
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
				$edata["LookupType"] = 1;
	$edata["LookupTable"] = "users1";
	$edata["LookupConnId"] = "";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "user_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "first_name";

	
	$edata["LookupOrderBy"] = "income_id";

	
	
	
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




	$tdatasaisunn["satei_by"] = $fdata;
//	kaitori_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "kaitori_by";
	$fdata["GoodName"] = "kaitori_by";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisunn","kaitori_by");
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
	$fdata["FullName"] = "shouhin.kaitori_by";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatasaisunn["kaitori_by"] = $fdata;
//	comment
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "comment";
	$fdata["GoodName"] = "comment";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisunn","comment");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "comment";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "shouhin.`comment`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatasaisunn["comment"] = $fdata;
//	satei_hi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "satei_hi";
	$fdata["GoodName"] = "satei_hi";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisunn","satei_hi");
	$fdata["FieldType"] = 135;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "satei_hi";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "shouhin.satei_hi";

	
	
			
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








	$tdatasaisunn["satei_hi"] = $fdata;
//	kaitory_hi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "kaitory_hi";
	$fdata["GoodName"] = "kaitory_hi";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisunn","kaitory_hi");
	$fdata["FieldType"] = 135;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "kaitory_hi";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "shouhin.kaitory_hi";

	
	
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




	$tdatasaisunn["kaitory_hi"] = $fdata;
//	REG_PHOTOGRAPHER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "REG_PHOTOGRAPHER";
	$fdata["GoodName"] = "REG_PHOTOGRAPHER";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisunn","REG_PHOTOGRAPHER");
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








	$tdatasaisunn["REG_PHOTOGRAPHER"] = $fdata;
//	REG_AUTHOR
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "REG_AUTHOR";
	$fdata["GoodName"] = "REG_AUTHOR";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisunn","REG_AUTHOR");
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








	$tdatasaisunn["REG_AUTHOR"] = $fdata;
//	REG_PACKINGS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "REG_PACKINGS";
	$fdata["GoodName"] = "REG_PACKINGS";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisunn","REG_PACKINGS");
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








	$tdatasaisunn["REG_PACKINGS"] = $fdata;
//	REG_KAKOU_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 47;
	$fdata["strName"] = "REG_KAKOU_DATE";
	$fdata["GoodName"] = "REG_KAKOU_DATE";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisunn","REG_KAKOU_DATE");
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








	$tdatasaisunn["REG_KAKOU_DATE"] = $fdata;
//	REG_KAKOU
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 48;
	$fdata["strName"] = "REG_KAKOU";
	$fdata["GoodName"] = "REG_KAKOU";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisunn","REG_KAKOU");
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








	$tdatasaisunn["REG_KAKOU"] = $fdata;
//	REG_EXHIBITOR
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 49;
	$fdata["strName"] = "REG_EXHIBITOR";
	$fdata["GoodName"] = "REG_EXHIBITOR";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisunn","REG_EXHIBITOR");
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








	$tdatasaisunn["REG_EXHIBITOR"] = $fdata;
//	REG_PHOTOGRAPHER_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 50;
	$fdata["strName"] = "REG_PHOTOGRAPHER_DATE";
	$fdata["GoodName"] = "REG_PHOTOGRAPHER_DATE";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisunn","REG_PHOTOGRAPHER_DATE");
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








	$tdatasaisunn["REG_PHOTOGRAPHER_DATE"] = $fdata;
//	DT_PACKING_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 51;
	$fdata["strName"] = "DT_PACKING_DATE";
	$fdata["GoodName"] = "DT_PACKING_DATE";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisunn","DT_PACKING_DATE");
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








	$tdatasaisunn["DT_PACKING_DATE"] = $fdata;
//	DT_UP_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 52;
	$fdata["strName"] = "DT_UP_DATE";
	$fdata["GoodName"] = "DT_UP_DATE";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisunn","DT_UP_DATE");
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








	$tdatasaisunn["DT_UP_DATE"] = $fdata;
//	AWAZU_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 53;
	$fdata["strName"] = "AWAZU_DATE";
	$fdata["GoodName"] = "AWAZU_DATE";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisunn","AWAZU_DATE");
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








	$tdatasaisunn["AWAZU_DATE"] = $fdata;
//	AWAZU_NIN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 54;
	$fdata["strName"] = "AWAZU_NIN";
	$fdata["GoodName"] = "AWAZU_NIN";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisunn","AWAZU_NIN");
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








	$tdatasaisunn["AWAZU_NIN"] = $fdata;
//	sabun_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 55;
	$fdata["strName"] = "sabun_date";
	$fdata["GoodName"] = "sabun_date";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisunn","sabun_date");
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








	$tdatasaisunn["sabun_date"] = $fdata;
//	browseid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 56;
	$fdata["strName"] = "browseid";
	$fdata["GoodName"] = "browseid";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisunn","browseid");
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








	$tdatasaisunn["browseid"] = $fdata;
//	browsenode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 57;
	$fdata["strName"] = "browsenode";
	$fdata["GoodName"] = "browsenode";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisunn","browsenode");
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








	$tdatasaisunn["browsenode"] = $fdata;
//	gold_property
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 58;
	$fdata["strName"] = "gold_property";
	$fdata["GoodName"] = "gold_property";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisunn","gold_property");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "gold_property";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "shouhin.gold_property";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatasaisunn["gold_property"] = $fdata;
//	ichiba_title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 59;
	$fdata["strName"] = "ichiba_title";
	$fdata["GoodName"] = "ichiba_title";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisunn","ichiba_title");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "ichiba_title";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "shouhin.ichiba_title";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatasaisunn["ichiba_title"] = $fdata;
//	Gram
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 60;
	$fdata["strName"] = "Gram";
	$fdata["GoodName"] = "Gram";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisunn","Gram");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "Gram";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "shouhin.Gram";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatasaisunn["Gram"] = $fdata;
//	Parent_stone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 61;
	$fdata["strName"] = "Parent_stone";
	$fdata["GoodName"] = "Parent_stone";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisunn","Parent_stone");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "Parent_stone";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "shouhin.Parent_stone";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatasaisunn["Parent_stone"] = $fdata;
//	Aside_stone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 62;
	$fdata["strName"] = "Aside_stone";
	$fdata["GoodName"] = "Aside_stone";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisunn","Aside_stone");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "Aside_stone";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "shouhin.Aside_stone";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatasaisunn["Aside_stone"] = $fdata;
//	Appraiser
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 63;
	$fdata["strName"] = "Appraiser";
	$fdata["GoodName"] = "Appraiser";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisunn","Appraiser");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "Appraiser";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "shouhin.Appraiser";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatasaisunn["Appraiser"] = $fdata;
//	Remarks
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 64;
	$fdata["strName"] = "Remarks";
	$fdata["GoodName"] = "Remarks";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisunn","Remarks");
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








	$tdatasaisunn["Remarks"] = $fdata;
//	Destination_selling
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 65;
	$fdata["strName"] = "Destination_selling";
	$fdata["GoodName"] = "Destination_selling";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisunn","Destination_selling");
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








	$tdatasaisunn["Destination_selling"] = $fdata;
//	Finish
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 66;
	$fdata["strName"] = "Finish";
	$fdata["GoodName"] = "Finish";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisunn","Finish");
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








	$tdatasaisunn["Finish"] = $fdata;
//	Discrimination
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 67;
	$fdata["strName"] = "Discrimination";
	$fdata["GoodName"] = "Discrimination";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisunn","Discrimination");
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








	$tdatasaisunn["Discrimination"] = $fdata;
//	accessories
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 68;
	$fdata["strName"] = "accessories";
	$fdata["GoodName"] = "accessories";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisunn","accessories");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "accessories";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "shouhin.accessories";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatasaisunn["accessories"] = $fdata;
//	priority
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 69;
	$fdata["strName"] = "priority";
	$fdata["GoodName"] = "priority";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisunn","priority");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "priority";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "shouhin.priority";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatasaisunn["priority"] = $fdata;
//	A_storage
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 70;
	$fdata["strName"] = "A_storage";
	$fdata["GoodName"] = "A_storage";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisunn","A_storage");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "A_storage";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "shouhin.A_storage";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatasaisunn["A_storage"] = $fdata;
//	price_per_gram
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 71;
	$fdata["strName"] = "price_per_gram";
	$fdata["GoodName"] = "price_per_gram";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisunn","price_per_gram");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "price_per_gram";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "shouhin.price_per_gram";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatasaisunn["price_per_gram"] = $fdata;
//	price_per_parent_stone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 72;
	$fdata["strName"] = "price_per_parent_stone";
	$fdata["GoodName"] = "price_per_parent_stone";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisunn","price_per_parent_stone");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "price_per_parent_stone";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "shouhin.price_per_parent_stone";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatasaisunn["price_per_parent_stone"] = $fdata;
//	price_per_aside_stone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 73;
	$fdata["strName"] = "price_per_aside_stone";
	$fdata["GoodName"] = "price_per_aside_stone";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisunn","price_per_aside_stone");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "price_per_aside_stone";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "shouhin.price_per_aside_stone";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatasaisunn["price_per_aside_stone"] = $fdata;
//	price_secret
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 74;
	$fdata["strName"] = "price_secret";
	$fdata["GoodName"] = "price_secret";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisunn","price_secret");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "price_secret";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "shouhin.price_secret";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatasaisunn["price_secret"] = $fdata;
//	sales_price_secret
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 75;
	$fdata["strName"] = "sales_price_secret";
	$fdata["GoodName"] = "sales_price_secret";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisunn","sales_price_secret");
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








	$tdatasaisunn["sales_price_secret"] = $fdata;
//	eq
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 76;
	$fdata["strName"] = "eq";
	$fdata["GoodName"] = "eq";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisunn","eq");
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








	$tdatasaisunn["eq"] = $fdata;
//	en
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 77;
	$fdata["strName"] = "en";
	$fdata["GoodName"] = "en";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisunn","en");
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








	$tdatasaisunn["en"] = $fdata;
//	line
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 78;
	$fdata["strName"] = "line";
	$fdata["GoodName"] = "line";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisunn","line");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "line";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "shouhin.line";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatasaisunn["line"] = $fdata;
//	item_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 79;
	$fdata["strName"] = "item_name";
	$fdata["GoodName"] = "item_name";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisunn","item_name");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "item_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "shouhin.item_name";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatasaisunn["item_name"] = $fdata;
//	handle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 80;
	$fdata["strName"] = "handle";
	$fdata["GoodName"] = "handle";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisunn","handle");
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








	$tdatasaisunn["handle"] = $fdata;
//	yahoo_color_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 81;
	$fdata["strName"] = "yahoo_color_id";
	$fdata["GoodName"] = "yahoo_color_id";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisunn","yahoo_color_id");
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








	$tdatasaisunn["yahoo_color_id"] = $fdata;
//	raku_hyoujisaki_category4
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 82;
	$fdata["strName"] = "raku_hyoujisaki_category4";
	$fdata["GoodName"] = "raku_hyoujisaki_category4";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisunn","raku_hyoujisaki_category4");
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




	$tdatasaisunn["raku_hyoujisaki_category4"] = $fdata;
//	raku_hyoujisaki_category5
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 83;
	$fdata["strName"] = "raku_hyoujisaki_category5";
	$fdata["GoodName"] = "raku_hyoujisaki_category5";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisunn","raku_hyoujisaki_category5");
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




	$tdatasaisunn["raku_hyoujisaki_category5"] = $fdata;
//	raku_dir_1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 84;
	$fdata["strName"] = "raku_dir_1";
	$fdata["GoodName"] = "raku_dir_1";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisunn","raku_dir_1");
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








	$tdatasaisunn["raku_dir_1"] = $fdata;
//	raku_dir_2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 85;
	$fdata["strName"] = "raku_dir_2";
	$fdata["GoodName"] = "raku_dir_2";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisunn","raku_dir_2");
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








	$tdatasaisunn["raku_dir_2"] = $fdata;
//	raku_dir_3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 86;
	$fdata["strName"] = "raku_dir_3";
	$fdata["GoodName"] = "raku_dir_3";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisunn","raku_dir_3");
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








	$tdatasaisunn["raku_dir_3"] = $fdata;
//	raku_dir_4
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 87;
	$fdata["strName"] = "raku_dir_4";
	$fdata["GoodName"] = "raku_dir_4";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisunn","raku_dir_4");
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








	$tdatasaisunn["raku_dir_4"] = $fdata;
//	raku_dir_5
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 88;
	$fdata["strName"] = "raku_dir_5";
	$fdata["GoodName"] = "raku_dir_5";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisunn","raku_dir_5");
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








	$tdatasaisunn["raku_dir_5"] = $fdata;
//	raku_dir_result
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 89;
	$fdata["strName"] = "raku_dir_result";
	$fdata["GoodName"] = "raku_dir_result";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisunn","raku_dir_result");
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








	$tdatasaisunn["raku_dir_result"] = $fdata;
//	raku_tag_result
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 90;
	$fdata["strName"] = "raku_tag_result";
	$fdata["GoodName"] = "raku_tag_result";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisunn","raku_tag_result");
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




	$tdatasaisunn["raku_tag_result"] = $fdata;
//	Exhibition_Date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 91;
	$fdata["strName"] = "Exhibition_Date";
	$fdata["GoodName"] = "Exhibition_Date";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisunn","Exhibition_Date");
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








	$tdatasaisunn["Exhibition_Date"] = $fdata;
//	search_keyword
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 92;
	$fdata["strName"] = "search_keyword";
	$fdata["GoodName"] = "search_keyword";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisunn","search_keyword");
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




	$tdatasaisunn["search_keyword"] = $fdata;
//	stamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 93;
	$fdata["strName"] = "stamp";
	$fdata["GoodName"] = "stamp";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisunn","stamp");
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




	$tdatasaisunn["stamp"] = $fdata;
//	motif
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 94;
	$fdata["strName"] = "motif";
	$fdata["GoodName"] = "motif";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisunn","motif");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "motif";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "shouhin.motif";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatasaisunn["motif"] = $fdata;
//	Setting
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 95;
	$fdata["strName"] = "Setting";
	$fdata["GoodName"] = "Setting";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisunn","Setting");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "Setting";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "shouhin.Setting";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatasaisunn["Setting"] = $fdata;
//	processing
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 96;
	$fdata["strName"] = "processing";
	$fdata["GoodName"] = "processing";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisunn","processing");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "processing";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "shouhin.processing";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatasaisunn["processing"] = $fdata;
//	Sleeve_Length
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 97;
	$fdata["strName"] = "Sleeve_Length";
	$fdata["GoodName"] = "Sleeve_Length";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisunn","Sleeve_Length");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "Sleeve_Length";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "shouhin.Sleeve_Length";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatasaisunn["Sleeve_Length"] = $fdata;
//	length
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 98;
	$fdata["strName"] = "length";
	$fdata["GoodName"] = "length";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisunn","length");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "length";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "shouhin.length";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatasaisunn["length"] = $fdata;
//	Ring_size
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 99;
	$fdata["strName"] = "Ring_size";
	$fdata["GoodName"] = "Ring_size";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisunn","Ring_size");
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








	$tdatasaisunn["Ring_size"] = $fdata;
//	price_for_site
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 100;
	$fdata["strName"] = "price_for_site";
	$fdata["GoodName"] = "price_for_site";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisunn","price_for_site");
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








	$tdatasaisunn["price_for_site"] = $fdata;
//	yahoo_category_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 101;
	$fdata["strName"] = "yahoo_category_id";
	$fdata["GoodName"] = "yahoo_category_id";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisunn","yahoo_category_id");
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








	$tdatasaisunn["yahoo_category_id"] = $fdata;
//	Qty
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 102;
	$fdata["strName"] = "Qty";
	$fdata["GoodName"] = "Qty";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisunn","Qty");
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








	$tdatasaisunn["Qty"] = $fdata;
//	sales_period
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 103;
	$fdata["strName"] = "sales_period";
	$fdata["GoodName"] = "sales_period";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisunn","sales_period");
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








	$tdatasaisunn["sales_period"] = $fdata;
//	starting_price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 104;
	$fdata["strName"] = "starting_price";
	$fdata["GoodName"] = "starting_price";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisunn","starting_price");
	$fdata["FieldType"] = 5;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "starting_price";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "shouhin.starting_price";

	
	
			
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








	$tdatasaisunn["starting_price"] = $fdata;
//	yahoo_sex
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 105;
	$fdata["strName"] = "yahoo_sex";
	$fdata["GoodName"] = "yahoo_sex";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisunn","yahoo_sex");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
		$fdata["bEditPage"] = true;

	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
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
				$edata["LookupType"] = 1;
	$edata["LookupTable"] = "_sex";
	$edata["LookupConnId"] = "internet_at_urlounge_co_jp";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "sex_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "sex_name";

	
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




	$tdatasaisunn["yahoo_sex"] = $fdata;
//	saisun_start
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 106;
	$fdata["strName"] = "saisun_start";
	$fdata["GoodName"] = "saisun_start";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("saisunn","saisun_start");
	$fdata["FieldType"] = 135;

	
	
	
			
	
	
	
		$fdata["bEditPage"] = true;

	
	

	
	
	
	
		$fdata["strField"] = "saisun_start";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "shouhin.saisun_start";

	
	
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








	$tdatasaisunn["saisun_start"] = $fdata;
//	ecc_seq
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 107;
	$fdata["strName"] = "ecc_seq";
	$fdata["GoodName"] = "ecc_seq";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("saisunn","ecc_seq");
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




	$tdatasaisunn["ecc_seq"] = $fdata;


$tables_data["saisunn"]=&$tdatasaisunn;
$field_labels["saisunn"] = &$fieldLabelssaisunn;
$fieldToolTips["saisunn"] = &$fieldToolTipssaisunn;
$placeHolders["saisunn"] = &$placeHolderssaisunn;
$page_titles["saisunn"] = &$pageTitlessaisunn;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["saisunn"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["saisunn"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_saisunn()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "shouhin.product_id,  shouhin.category_id,  shouhin.goods_title,  shouhin.title,  shouhin.sub_category_id1,  shouhin.ecc_id,  shouhin.price,  shouhin.yahoo,  shouhin.remark,  shouhin.sales_price,  shouhin.description,  shouhin.status,  shouhin.product_num,  shouhin.updated_at,  shouhin.yahoo_size,  shouhin.yahoo_title,  shouhin.yahoo_sankou_uwadai,  shouhin.yahoo_sozai,  shouhin.yahoo_color,  shouhin.yahoo_kataban,  shouhin.yahoo_condition1,  shouhin.yahoo_condition2,  shouhin.yahoo_fuzokuhin,  shouhin.yahoo_sinaban,  shouhin.yahoo_saisun_sha,  shouhin.box_id,  shouhin.nyuukin_price,  shouhin.updated_by,  shouhin.raku_title,  shouhin.raku_hyoujisaki_category2,  shouhin.raku_hyoujisaki_category,  shouhin.raku_hyoujisaki_category3,  shouhin.timesta,  shouhin.saisun_end,  shouhin.label_output_flag,  shouhin.season,  shouhin.kanryou_henbi,  shouhin.box_sort,  shouhin.satei_by,  shouhin.kaitori_by,  shouhin.`comment`,  shouhin.satei_hi,  shouhin.kaitory_hi,  shouhin.REG_PHOTOGRAPHER,  shouhin.REG_AUTHOR,  shouhin.REG_PACKINGS,  shouhin.REG_KAKOU_DATE,  shouhin.REG_KAKOU,  shouhin.REG_EXHIBITOR,  shouhin.REG_PHOTOGRAPHER_DATE,  shouhin.DT_PACKING_DATE,  shouhin.DT_UP_DATE,  shouhin.AWAZU_DATE,  shouhin.AWAZU_NIN,  shouhin.sabun_date,  shouhin.browseid,  shouhin.browsenode,  shouhin.gold_property,  shouhin.ichiba_title,  shouhin.Gram,  shouhin.Parent_stone,  shouhin.Aside_stone,  shouhin.Appraiser,  shouhin.Remarks,  shouhin.Destination_selling,  shouhin.Finish,  shouhin.Discrimination,  shouhin.accessories,  shouhin.priority,  shouhin.A_storage,  shouhin.price_per_gram,  shouhin.price_per_parent_stone,  shouhin.price_per_aside_stone,  shouhin.price_secret,  shouhin.sales_price_secret,  shouhin.eq,  shouhin.en,  shouhin.line,  shouhin.item_name,  shouhin.handle,  shouhin.yahoo_color_id,  shouhin.raku_hyoujisaki_category4,  shouhin.raku_hyoujisaki_category5,  shouhin.raku_dir_1,  shouhin.raku_dir_2,  shouhin.raku_dir_3,  shouhin.raku_dir_4,  shouhin.raku_dir_5,  shouhin.raku_dir_result,  shouhin.raku_tag_result,  shouhin.Exhibition_Date,  shouhin.search_keyword,  shouhin.stamp,  shouhin.motif,  shouhin.Setting,  shouhin.processing,  shouhin.Sleeve_Length,  shouhin.length,  shouhin.Ring_size,  shouhin.price_for_site,  shouhin.yahoo_category_id,  shouhin.Qty,  shouhin.sales_period,  shouhin.starting_price,  shouhin.yahoo_sex,  shouhin.saisun_start,  Eoc.ecc_seq";
$proto0["m_strFrom"] = "FROM shouhin  LEFT OUTER JOIN Eoc ON shouhin.ecc_id = Eoc.ecc_id";
$proto0["m_strWhere"] = "(shouhin.status = 29) OR (shouhin.status = 110) OR (shouhin.status = 33) OR (shouhin.status = 125) OR (shouhin.status = 7)";
$proto0["m_strOrderBy"] = "ORDER BY shouhin.product_id DESC";
$proto0["m_strTail"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "(shouhin.status = 29) OR (shouhin.status = 110) OR (shouhin.status = 33) OR (shouhin.status = 125) OR (shouhin.status = 7)";
$proto2["m_uniontype"] = "SQLL_OR";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(shouhin.status = 29) OR (shouhin.status = 110) OR (shouhin.status = 33) OR (shouhin.status = 125) OR (shouhin.status = 7)"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
						$proto4=array();
$proto4["m_sql"] = "shouhin.status = 29";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisunn"
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "= 29";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = true;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

			$proto2["m_contained"][]=$obj;
						$proto6=array();
$proto6["m_sql"] = "shouhin.status = 110";
$proto6["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisunn"
));

$proto6["m_column"]=$obj;
$proto6["m_contained"] = array();
$proto6["m_strCase"] = "= 110";
$proto6["m_havingmode"] = false;
$proto6["m_inBrackets"] = true;
$proto6["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto6);

			$proto2["m_contained"][]=$obj;
						$proto8=array();
$proto8["m_sql"] = "shouhin.status = 33";
$proto8["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisunn"
));

$proto8["m_column"]=$obj;
$proto8["m_contained"] = array();
$proto8["m_strCase"] = "= 33";
$proto8["m_havingmode"] = false;
$proto8["m_inBrackets"] = true;
$proto8["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto8);

			$proto2["m_contained"][]=$obj;
						$proto10=array();
$proto10["m_sql"] = "shouhin.status = 125";
$proto10["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisunn"
));

$proto10["m_column"]=$obj;
$proto10["m_contained"] = array();
$proto10["m_strCase"] = "= 125";
$proto10["m_havingmode"] = false;
$proto10["m_inBrackets"] = true;
$proto10["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto10);

			$proto2["m_contained"][]=$obj;
						$proto12=array();
$proto12["m_sql"] = "shouhin.status = 7";
$proto12["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisunn"
));

$proto12["m_column"]=$obj;
$proto12["m_contained"] = array();
$proto12["m_strCase"] = "= 7";
$proto12["m_havingmode"] = false;
$proto12["m_inBrackets"] = true;
$proto12["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto12);

			$proto2["m_contained"][]=$obj;
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto14=array();
$proto14["m_sql"] = "";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = false;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "product_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisunn"
));

$proto16["m_sql"] = "shouhin.product_id";
$proto16["m_srcTableName"] = "saisunn";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "category_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisunn"
));

$proto18["m_sql"] = "shouhin.category_id";
$proto18["m_srcTableName"] = "saisunn";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "goods_title",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisunn"
));

$proto20["m_sql"] = "shouhin.goods_title";
$proto20["m_srcTableName"] = "saisunn";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "title",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisunn"
));

$proto22["m_sql"] = "shouhin.title";
$proto22["m_srcTableName"] = "saisunn";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "sub_category_id1",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisunn"
));

$proto24["m_sql"] = "shouhin.sub_category_id1";
$proto24["m_srcTableName"] = "saisunn";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "ecc_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisunn"
));

$proto26["m_sql"] = "shouhin.ecc_id";
$proto26["m_srcTableName"] = "saisunn";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "price",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisunn"
));

$proto28["m_sql"] = "shouhin.price";
$proto28["m_srcTableName"] = "saisunn";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisunn"
));

$proto30["m_sql"] = "shouhin.yahoo";
$proto30["m_srcTableName"] = "saisunn";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "remark",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisunn"
));

$proto32["m_sql"] = "shouhin.remark";
$proto32["m_srcTableName"] = "saisunn";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "sales_price",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisunn"
));

$proto34["m_sql"] = "shouhin.sales_price";
$proto34["m_srcTableName"] = "saisunn";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisunn"
));

$proto36["m_sql"] = "shouhin.description";
$proto36["m_srcTableName"] = "saisunn";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisunn"
));

$proto38["m_sql"] = "shouhin.status";
$proto38["m_srcTableName"] = "saisunn";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "product_num",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisunn"
));

$proto40["m_sql"] = "shouhin.product_num";
$proto40["m_srcTableName"] = "saisunn";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisunn"
));

$proto42["m_sql"] = "shouhin.updated_at";
$proto42["m_srcTableName"] = "saisunn";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_size",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisunn"
));

$proto44["m_sql"] = "shouhin.yahoo_size";
$proto44["m_srcTableName"] = "saisunn";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_title",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisunn"
));

$proto46["m_sql"] = "shouhin.yahoo_title";
$proto46["m_srcTableName"] = "saisunn";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_sankou_uwadai",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisunn"
));

$proto48["m_sql"] = "shouhin.yahoo_sankou_uwadai";
$proto48["m_srcTableName"] = "saisunn";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_sozai",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisunn"
));

$proto50["m_sql"] = "shouhin.yahoo_sozai";
$proto50["m_srcTableName"] = "saisunn";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_color",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisunn"
));

$proto52["m_sql"] = "shouhin.yahoo_color";
$proto52["m_srcTableName"] = "saisunn";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_kataban",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisunn"
));

$proto54["m_sql"] = "shouhin.yahoo_kataban";
$proto54["m_srcTableName"] = "saisunn";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_condition1",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisunn"
));

$proto56["m_sql"] = "shouhin.yahoo_condition1";
$proto56["m_srcTableName"] = "saisunn";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_condition2",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisunn"
));

$proto58["m_sql"] = "shouhin.yahoo_condition2";
$proto58["m_srcTableName"] = "saisunn";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_fuzokuhin",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisunn"
));

$proto60["m_sql"] = "shouhin.yahoo_fuzokuhin";
$proto60["m_srcTableName"] = "saisunn";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_sinaban",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisunn"
));

$proto62["m_sql"] = "shouhin.yahoo_sinaban";
$proto62["m_srcTableName"] = "saisunn";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_saisun_sha",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisunn"
));

$proto64["m_sql"] = "shouhin.yahoo_saisun_sha";
$proto64["m_srcTableName"] = "saisunn";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "box_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisunn"
));

$proto66["m_sql"] = "shouhin.box_id";
$proto66["m_srcTableName"] = "saisunn";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "nyuukin_price",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisunn"
));

$proto68["m_sql"] = "shouhin.nyuukin_price";
$proto68["m_srcTableName"] = "saisunn";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisunn"
));

$proto70["m_sql"] = "shouhin.updated_by";
$proto70["m_srcTableName"] = "saisunn";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "raku_title",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisunn"
));

$proto72["m_sql"] = "shouhin.raku_title";
$proto72["m_srcTableName"] = "saisunn";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "raku_hyoujisaki_category2",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisunn"
));

$proto74["m_sql"] = "shouhin.raku_hyoujisaki_category2";
$proto74["m_srcTableName"] = "saisunn";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "raku_hyoujisaki_category",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisunn"
));

$proto76["m_sql"] = "shouhin.raku_hyoujisaki_category";
$proto76["m_srcTableName"] = "saisunn";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "raku_hyoujisaki_category3",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisunn"
));

$proto78["m_sql"] = "shouhin.raku_hyoujisaki_category3";
$proto78["m_srcTableName"] = "saisunn";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "timesta",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisunn"
));

$proto80["m_sql"] = "shouhin.timesta";
$proto80["m_srcTableName"] = "saisunn";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "saisun_end",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisunn"
));

$proto82["m_sql"] = "shouhin.saisun_end";
$proto82["m_srcTableName"] = "saisunn";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "label_output_flag",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisunn"
));

$proto84["m_sql"] = "shouhin.label_output_flag";
$proto84["m_srcTableName"] = "saisunn";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "season",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisunn"
));

$proto86["m_sql"] = "shouhin.season";
$proto86["m_srcTableName"] = "saisunn";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "kanryou_henbi",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisunn"
));

$proto88["m_sql"] = "shouhin.kanryou_henbi";
$proto88["m_srcTableName"] = "saisunn";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "box_sort",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisunn"
));

$proto90["m_sql"] = "shouhin.box_sort";
$proto90["m_srcTableName"] = "saisunn";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLField(array(
	"m_strName" => "satei_by",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisunn"
));

$proto92["m_sql"] = "shouhin.satei_by";
$proto92["m_srcTableName"] = "saisunn";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "";
$obj = new SQLFieldListItem($proto92);

$proto0["m_fieldlist"][]=$obj;
						$proto94=array();
			$obj = new SQLField(array(
	"m_strName" => "kaitori_by",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisunn"
));

$proto94["m_sql"] = "shouhin.kaitori_by";
$proto94["m_srcTableName"] = "saisunn";
$proto94["m_expr"]=$obj;
$proto94["m_alias"] = "";
$obj = new SQLFieldListItem($proto94);

$proto0["m_fieldlist"][]=$obj;
						$proto96=array();
			$obj = new SQLField(array(
	"m_strName" => "comment",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisunn"
));

$proto96["m_sql"] = "shouhin.`comment`";
$proto96["m_srcTableName"] = "saisunn";
$proto96["m_expr"]=$obj;
$proto96["m_alias"] = "";
$obj = new SQLFieldListItem($proto96);

$proto0["m_fieldlist"][]=$obj;
						$proto98=array();
			$obj = new SQLField(array(
	"m_strName" => "satei_hi",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisunn"
));

$proto98["m_sql"] = "shouhin.satei_hi";
$proto98["m_srcTableName"] = "saisunn";
$proto98["m_expr"]=$obj;
$proto98["m_alias"] = "";
$obj = new SQLFieldListItem($proto98);

$proto0["m_fieldlist"][]=$obj;
						$proto100=array();
			$obj = new SQLField(array(
	"m_strName" => "kaitory_hi",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisunn"
));

$proto100["m_sql"] = "shouhin.kaitory_hi";
$proto100["m_srcTableName"] = "saisunn";
$proto100["m_expr"]=$obj;
$proto100["m_alias"] = "";
$obj = new SQLFieldListItem($proto100);

$proto0["m_fieldlist"][]=$obj;
						$proto102=array();
			$obj = new SQLField(array(
	"m_strName" => "REG_PHOTOGRAPHER",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisunn"
));

$proto102["m_sql"] = "shouhin.REG_PHOTOGRAPHER";
$proto102["m_srcTableName"] = "saisunn";
$proto102["m_expr"]=$obj;
$proto102["m_alias"] = "";
$obj = new SQLFieldListItem($proto102);

$proto0["m_fieldlist"][]=$obj;
						$proto104=array();
			$obj = new SQLField(array(
	"m_strName" => "REG_AUTHOR",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisunn"
));

$proto104["m_sql"] = "shouhin.REG_AUTHOR";
$proto104["m_srcTableName"] = "saisunn";
$proto104["m_expr"]=$obj;
$proto104["m_alias"] = "";
$obj = new SQLFieldListItem($proto104);

$proto0["m_fieldlist"][]=$obj;
						$proto106=array();
			$obj = new SQLField(array(
	"m_strName" => "REG_PACKINGS",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisunn"
));

$proto106["m_sql"] = "shouhin.REG_PACKINGS";
$proto106["m_srcTableName"] = "saisunn";
$proto106["m_expr"]=$obj;
$proto106["m_alias"] = "";
$obj = new SQLFieldListItem($proto106);

$proto0["m_fieldlist"][]=$obj;
						$proto108=array();
			$obj = new SQLField(array(
	"m_strName" => "REG_KAKOU_DATE",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisunn"
));

$proto108["m_sql"] = "shouhin.REG_KAKOU_DATE";
$proto108["m_srcTableName"] = "saisunn";
$proto108["m_expr"]=$obj;
$proto108["m_alias"] = "";
$obj = new SQLFieldListItem($proto108);

$proto0["m_fieldlist"][]=$obj;
						$proto110=array();
			$obj = new SQLField(array(
	"m_strName" => "REG_KAKOU",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisunn"
));

$proto110["m_sql"] = "shouhin.REG_KAKOU";
$proto110["m_srcTableName"] = "saisunn";
$proto110["m_expr"]=$obj;
$proto110["m_alias"] = "";
$obj = new SQLFieldListItem($proto110);

$proto0["m_fieldlist"][]=$obj;
						$proto112=array();
			$obj = new SQLField(array(
	"m_strName" => "REG_EXHIBITOR",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisunn"
));

$proto112["m_sql"] = "shouhin.REG_EXHIBITOR";
$proto112["m_srcTableName"] = "saisunn";
$proto112["m_expr"]=$obj;
$proto112["m_alias"] = "";
$obj = new SQLFieldListItem($proto112);

$proto0["m_fieldlist"][]=$obj;
						$proto114=array();
			$obj = new SQLField(array(
	"m_strName" => "REG_PHOTOGRAPHER_DATE",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisunn"
));

$proto114["m_sql"] = "shouhin.REG_PHOTOGRAPHER_DATE";
$proto114["m_srcTableName"] = "saisunn";
$proto114["m_expr"]=$obj;
$proto114["m_alias"] = "";
$obj = new SQLFieldListItem($proto114);

$proto0["m_fieldlist"][]=$obj;
						$proto116=array();
			$obj = new SQLField(array(
	"m_strName" => "DT_PACKING_DATE",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisunn"
));

$proto116["m_sql"] = "shouhin.DT_PACKING_DATE";
$proto116["m_srcTableName"] = "saisunn";
$proto116["m_expr"]=$obj;
$proto116["m_alias"] = "";
$obj = new SQLFieldListItem($proto116);

$proto0["m_fieldlist"][]=$obj;
						$proto118=array();
			$obj = new SQLField(array(
	"m_strName" => "DT_UP_DATE",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisunn"
));

$proto118["m_sql"] = "shouhin.DT_UP_DATE";
$proto118["m_srcTableName"] = "saisunn";
$proto118["m_expr"]=$obj;
$proto118["m_alias"] = "";
$obj = new SQLFieldListItem($proto118);

$proto0["m_fieldlist"][]=$obj;
						$proto120=array();
			$obj = new SQLField(array(
	"m_strName" => "AWAZU_DATE",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisunn"
));

$proto120["m_sql"] = "shouhin.AWAZU_DATE";
$proto120["m_srcTableName"] = "saisunn";
$proto120["m_expr"]=$obj;
$proto120["m_alias"] = "";
$obj = new SQLFieldListItem($proto120);

$proto0["m_fieldlist"][]=$obj;
						$proto122=array();
			$obj = new SQLField(array(
	"m_strName" => "AWAZU_NIN",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisunn"
));

$proto122["m_sql"] = "shouhin.AWAZU_NIN";
$proto122["m_srcTableName"] = "saisunn";
$proto122["m_expr"]=$obj;
$proto122["m_alias"] = "";
$obj = new SQLFieldListItem($proto122);

$proto0["m_fieldlist"][]=$obj;
						$proto124=array();
			$obj = new SQLField(array(
	"m_strName" => "sabun_date",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisunn"
));

$proto124["m_sql"] = "shouhin.sabun_date";
$proto124["m_srcTableName"] = "saisunn";
$proto124["m_expr"]=$obj;
$proto124["m_alias"] = "";
$obj = new SQLFieldListItem($proto124);

$proto0["m_fieldlist"][]=$obj;
						$proto126=array();
			$obj = new SQLField(array(
	"m_strName" => "browseid",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisunn"
));

$proto126["m_sql"] = "shouhin.browseid";
$proto126["m_srcTableName"] = "saisunn";
$proto126["m_expr"]=$obj;
$proto126["m_alias"] = "";
$obj = new SQLFieldListItem($proto126);

$proto0["m_fieldlist"][]=$obj;
						$proto128=array();
			$obj = new SQLField(array(
	"m_strName" => "browsenode",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisunn"
));

$proto128["m_sql"] = "shouhin.browsenode";
$proto128["m_srcTableName"] = "saisunn";
$proto128["m_expr"]=$obj;
$proto128["m_alias"] = "";
$obj = new SQLFieldListItem($proto128);

$proto0["m_fieldlist"][]=$obj;
						$proto130=array();
			$obj = new SQLField(array(
	"m_strName" => "gold_property",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisunn"
));

$proto130["m_sql"] = "shouhin.gold_property";
$proto130["m_srcTableName"] = "saisunn";
$proto130["m_expr"]=$obj;
$proto130["m_alias"] = "";
$obj = new SQLFieldListItem($proto130);

$proto0["m_fieldlist"][]=$obj;
						$proto132=array();
			$obj = new SQLField(array(
	"m_strName" => "ichiba_title",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisunn"
));

$proto132["m_sql"] = "shouhin.ichiba_title";
$proto132["m_srcTableName"] = "saisunn";
$proto132["m_expr"]=$obj;
$proto132["m_alias"] = "";
$obj = new SQLFieldListItem($proto132);

$proto0["m_fieldlist"][]=$obj;
						$proto134=array();
			$obj = new SQLField(array(
	"m_strName" => "Gram",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisunn"
));

$proto134["m_sql"] = "shouhin.Gram";
$proto134["m_srcTableName"] = "saisunn";
$proto134["m_expr"]=$obj;
$proto134["m_alias"] = "";
$obj = new SQLFieldListItem($proto134);

$proto0["m_fieldlist"][]=$obj;
						$proto136=array();
			$obj = new SQLField(array(
	"m_strName" => "Parent_stone",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisunn"
));

$proto136["m_sql"] = "shouhin.Parent_stone";
$proto136["m_srcTableName"] = "saisunn";
$proto136["m_expr"]=$obj;
$proto136["m_alias"] = "";
$obj = new SQLFieldListItem($proto136);

$proto0["m_fieldlist"][]=$obj;
						$proto138=array();
			$obj = new SQLField(array(
	"m_strName" => "Aside_stone",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisunn"
));

$proto138["m_sql"] = "shouhin.Aside_stone";
$proto138["m_srcTableName"] = "saisunn";
$proto138["m_expr"]=$obj;
$proto138["m_alias"] = "";
$obj = new SQLFieldListItem($proto138);

$proto0["m_fieldlist"][]=$obj;
						$proto140=array();
			$obj = new SQLField(array(
	"m_strName" => "Appraiser",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisunn"
));

$proto140["m_sql"] = "shouhin.Appraiser";
$proto140["m_srcTableName"] = "saisunn";
$proto140["m_expr"]=$obj;
$proto140["m_alias"] = "";
$obj = new SQLFieldListItem($proto140);

$proto0["m_fieldlist"][]=$obj;
						$proto142=array();
			$obj = new SQLField(array(
	"m_strName" => "Remarks",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisunn"
));

$proto142["m_sql"] = "shouhin.Remarks";
$proto142["m_srcTableName"] = "saisunn";
$proto142["m_expr"]=$obj;
$proto142["m_alias"] = "";
$obj = new SQLFieldListItem($proto142);

$proto0["m_fieldlist"][]=$obj;
						$proto144=array();
			$obj = new SQLField(array(
	"m_strName" => "Destination_selling",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisunn"
));

$proto144["m_sql"] = "shouhin.Destination_selling";
$proto144["m_srcTableName"] = "saisunn";
$proto144["m_expr"]=$obj;
$proto144["m_alias"] = "";
$obj = new SQLFieldListItem($proto144);

$proto0["m_fieldlist"][]=$obj;
						$proto146=array();
			$obj = new SQLField(array(
	"m_strName" => "Finish",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisunn"
));

$proto146["m_sql"] = "shouhin.Finish";
$proto146["m_srcTableName"] = "saisunn";
$proto146["m_expr"]=$obj;
$proto146["m_alias"] = "";
$obj = new SQLFieldListItem($proto146);

$proto0["m_fieldlist"][]=$obj;
						$proto148=array();
			$obj = new SQLField(array(
	"m_strName" => "Discrimination",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisunn"
));

$proto148["m_sql"] = "shouhin.Discrimination";
$proto148["m_srcTableName"] = "saisunn";
$proto148["m_expr"]=$obj;
$proto148["m_alias"] = "";
$obj = new SQLFieldListItem($proto148);

$proto0["m_fieldlist"][]=$obj;
						$proto150=array();
			$obj = new SQLField(array(
	"m_strName" => "accessories",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisunn"
));

$proto150["m_sql"] = "shouhin.accessories";
$proto150["m_srcTableName"] = "saisunn";
$proto150["m_expr"]=$obj;
$proto150["m_alias"] = "";
$obj = new SQLFieldListItem($proto150);

$proto0["m_fieldlist"][]=$obj;
						$proto152=array();
			$obj = new SQLField(array(
	"m_strName" => "priority",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisunn"
));

$proto152["m_sql"] = "shouhin.priority";
$proto152["m_srcTableName"] = "saisunn";
$proto152["m_expr"]=$obj;
$proto152["m_alias"] = "";
$obj = new SQLFieldListItem($proto152);

$proto0["m_fieldlist"][]=$obj;
						$proto154=array();
			$obj = new SQLField(array(
	"m_strName" => "A_storage",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisunn"
));

$proto154["m_sql"] = "shouhin.A_storage";
$proto154["m_srcTableName"] = "saisunn";
$proto154["m_expr"]=$obj;
$proto154["m_alias"] = "";
$obj = new SQLFieldListItem($proto154);

$proto0["m_fieldlist"][]=$obj;
						$proto156=array();
			$obj = new SQLField(array(
	"m_strName" => "price_per_gram",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisunn"
));

$proto156["m_sql"] = "shouhin.price_per_gram";
$proto156["m_srcTableName"] = "saisunn";
$proto156["m_expr"]=$obj;
$proto156["m_alias"] = "";
$obj = new SQLFieldListItem($proto156);

$proto0["m_fieldlist"][]=$obj;
						$proto158=array();
			$obj = new SQLField(array(
	"m_strName" => "price_per_parent_stone",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisunn"
));

$proto158["m_sql"] = "shouhin.price_per_parent_stone";
$proto158["m_srcTableName"] = "saisunn";
$proto158["m_expr"]=$obj;
$proto158["m_alias"] = "";
$obj = new SQLFieldListItem($proto158);

$proto0["m_fieldlist"][]=$obj;
						$proto160=array();
			$obj = new SQLField(array(
	"m_strName" => "price_per_aside_stone",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisunn"
));

$proto160["m_sql"] = "shouhin.price_per_aside_stone";
$proto160["m_srcTableName"] = "saisunn";
$proto160["m_expr"]=$obj;
$proto160["m_alias"] = "";
$obj = new SQLFieldListItem($proto160);

$proto0["m_fieldlist"][]=$obj;
						$proto162=array();
			$obj = new SQLField(array(
	"m_strName" => "price_secret",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisunn"
));

$proto162["m_sql"] = "shouhin.price_secret";
$proto162["m_srcTableName"] = "saisunn";
$proto162["m_expr"]=$obj;
$proto162["m_alias"] = "";
$obj = new SQLFieldListItem($proto162);

$proto0["m_fieldlist"][]=$obj;
						$proto164=array();
			$obj = new SQLField(array(
	"m_strName" => "sales_price_secret",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisunn"
));

$proto164["m_sql"] = "shouhin.sales_price_secret";
$proto164["m_srcTableName"] = "saisunn";
$proto164["m_expr"]=$obj;
$proto164["m_alias"] = "";
$obj = new SQLFieldListItem($proto164);

$proto0["m_fieldlist"][]=$obj;
						$proto166=array();
			$obj = new SQLField(array(
	"m_strName" => "eq",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisunn"
));

$proto166["m_sql"] = "shouhin.eq";
$proto166["m_srcTableName"] = "saisunn";
$proto166["m_expr"]=$obj;
$proto166["m_alias"] = "";
$obj = new SQLFieldListItem($proto166);

$proto0["m_fieldlist"][]=$obj;
						$proto168=array();
			$obj = new SQLField(array(
	"m_strName" => "en",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisunn"
));

$proto168["m_sql"] = "shouhin.en";
$proto168["m_srcTableName"] = "saisunn";
$proto168["m_expr"]=$obj;
$proto168["m_alias"] = "";
$obj = new SQLFieldListItem($proto168);

$proto0["m_fieldlist"][]=$obj;
						$proto170=array();
			$obj = new SQLField(array(
	"m_strName" => "line",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisunn"
));

$proto170["m_sql"] = "shouhin.line";
$proto170["m_srcTableName"] = "saisunn";
$proto170["m_expr"]=$obj;
$proto170["m_alias"] = "";
$obj = new SQLFieldListItem($proto170);

$proto0["m_fieldlist"][]=$obj;
						$proto172=array();
			$obj = new SQLField(array(
	"m_strName" => "item_name",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisunn"
));

$proto172["m_sql"] = "shouhin.item_name";
$proto172["m_srcTableName"] = "saisunn";
$proto172["m_expr"]=$obj;
$proto172["m_alias"] = "";
$obj = new SQLFieldListItem($proto172);

$proto0["m_fieldlist"][]=$obj;
						$proto174=array();
			$obj = new SQLField(array(
	"m_strName" => "handle",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisunn"
));

$proto174["m_sql"] = "shouhin.handle";
$proto174["m_srcTableName"] = "saisunn";
$proto174["m_expr"]=$obj;
$proto174["m_alias"] = "";
$obj = new SQLFieldListItem($proto174);

$proto0["m_fieldlist"][]=$obj;
						$proto176=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_color_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisunn"
));

$proto176["m_sql"] = "shouhin.yahoo_color_id";
$proto176["m_srcTableName"] = "saisunn";
$proto176["m_expr"]=$obj;
$proto176["m_alias"] = "";
$obj = new SQLFieldListItem($proto176);

$proto0["m_fieldlist"][]=$obj;
						$proto178=array();
			$obj = new SQLField(array(
	"m_strName" => "raku_hyoujisaki_category4",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisunn"
));

$proto178["m_sql"] = "shouhin.raku_hyoujisaki_category4";
$proto178["m_srcTableName"] = "saisunn";
$proto178["m_expr"]=$obj;
$proto178["m_alias"] = "";
$obj = new SQLFieldListItem($proto178);

$proto0["m_fieldlist"][]=$obj;
						$proto180=array();
			$obj = new SQLField(array(
	"m_strName" => "raku_hyoujisaki_category5",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisunn"
));

$proto180["m_sql"] = "shouhin.raku_hyoujisaki_category5";
$proto180["m_srcTableName"] = "saisunn";
$proto180["m_expr"]=$obj;
$proto180["m_alias"] = "";
$obj = new SQLFieldListItem($proto180);

$proto0["m_fieldlist"][]=$obj;
						$proto182=array();
			$obj = new SQLField(array(
	"m_strName" => "raku_dir_1",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisunn"
));

$proto182["m_sql"] = "shouhin.raku_dir_1";
$proto182["m_srcTableName"] = "saisunn";
$proto182["m_expr"]=$obj;
$proto182["m_alias"] = "";
$obj = new SQLFieldListItem($proto182);

$proto0["m_fieldlist"][]=$obj;
						$proto184=array();
			$obj = new SQLField(array(
	"m_strName" => "raku_dir_2",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisunn"
));

$proto184["m_sql"] = "shouhin.raku_dir_2";
$proto184["m_srcTableName"] = "saisunn";
$proto184["m_expr"]=$obj;
$proto184["m_alias"] = "";
$obj = new SQLFieldListItem($proto184);

$proto0["m_fieldlist"][]=$obj;
						$proto186=array();
			$obj = new SQLField(array(
	"m_strName" => "raku_dir_3",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisunn"
));

$proto186["m_sql"] = "shouhin.raku_dir_3";
$proto186["m_srcTableName"] = "saisunn";
$proto186["m_expr"]=$obj;
$proto186["m_alias"] = "";
$obj = new SQLFieldListItem($proto186);

$proto0["m_fieldlist"][]=$obj;
						$proto188=array();
			$obj = new SQLField(array(
	"m_strName" => "raku_dir_4",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisunn"
));

$proto188["m_sql"] = "shouhin.raku_dir_4";
$proto188["m_srcTableName"] = "saisunn";
$proto188["m_expr"]=$obj;
$proto188["m_alias"] = "";
$obj = new SQLFieldListItem($proto188);

$proto0["m_fieldlist"][]=$obj;
						$proto190=array();
			$obj = new SQLField(array(
	"m_strName" => "raku_dir_5",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisunn"
));

$proto190["m_sql"] = "shouhin.raku_dir_5";
$proto190["m_srcTableName"] = "saisunn";
$proto190["m_expr"]=$obj;
$proto190["m_alias"] = "";
$obj = new SQLFieldListItem($proto190);

$proto0["m_fieldlist"][]=$obj;
						$proto192=array();
			$obj = new SQLField(array(
	"m_strName" => "raku_dir_result",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisunn"
));

$proto192["m_sql"] = "shouhin.raku_dir_result";
$proto192["m_srcTableName"] = "saisunn";
$proto192["m_expr"]=$obj;
$proto192["m_alias"] = "";
$obj = new SQLFieldListItem($proto192);

$proto0["m_fieldlist"][]=$obj;
						$proto194=array();
			$obj = new SQLField(array(
	"m_strName" => "raku_tag_result",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisunn"
));

$proto194["m_sql"] = "shouhin.raku_tag_result";
$proto194["m_srcTableName"] = "saisunn";
$proto194["m_expr"]=$obj;
$proto194["m_alias"] = "";
$obj = new SQLFieldListItem($proto194);

$proto0["m_fieldlist"][]=$obj;
						$proto196=array();
			$obj = new SQLField(array(
	"m_strName" => "Exhibition_Date",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisunn"
));

$proto196["m_sql"] = "shouhin.Exhibition_Date";
$proto196["m_srcTableName"] = "saisunn";
$proto196["m_expr"]=$obj;
$proto196["m_alias"] = "";
$obj = new SQLFieldListItem($proto196);

$proto0["m_fieldlist"][]=$obj;
						$proto198=array();
			$obj = new SQLField(array(
	"m_strName" => "search_keyword",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisunn"
));

$proto198["m_sql"] = "shouhin.search_keyword";
$proto198["m_srcTableName"] = "saisunn";
$proto198["m_expr"]=$obj;
$proto198["m_alias"] = "";
$obj = new SQLFieldListItem($proto198);

$proto0["m_fieldlist"][]=$obj;
						$proto200=array();
			$obj = new SQLField(array(
	"m_strName" => "stamp",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisunn"
));

$proto200["m_sql"] = "shouhin.stamp";
$proto200["m_srcTableName"] = "saisunn";
$proto200["m_expr"]=$obj;
$proto200["m_alias"] = "";
$obj = new SQLFieldListItem($proto200);

$proto0["m_fieldlist"][]=$obj;
						$proto202=array();
			$obj = new SQLField(array(
	"m_strName" => "motif",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisunn"
));

$proto202["m_sql"] = "shouhin.motif";
$proto202["m_srcTableName"] = "saisunn";
$proto202["m_expr"]=$obj;
$proto202["m_alias"] = "";
$obj = new SQLFieldListItem($proto202);

$proto0["m_fieldlist"][]=$obj;
						$proto204=array();
			$obj = new SQLField(array(
	"m_strName" => "Setting",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisunn"
));

$proto204["m_sql"] = "shouhin.Setting";
$proto204["m_srcTableName"] = "saisunn";
$proto204["m_expr"]=$obj;
$proto204["m_alias"] = "";
$obj = new SQLFieldListItem($proto204);

$proto0["m_fieldlist"][]=$obj;
						$proto206=array();
			$obj = new SQLField(array(
	"m_strName" => "processing",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisunn"
));

$proto206["m_sql"] = "shouhin.processing";
$proto206["m_srcTableName"] = "saisunn";
$proto206["m_expr"]=$obj;
$proto206["m_alias"] = "";
$obj = new SQLFieldListItem($proto206);

$proto0["m_fieldlist"][]=$obj;
						$proto208=array();
			$obj = new SQLField(array(
	"m_strName" => "Sleeve_Length",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisunn"
));

$proto208["m_sql"] = "shouhin.Sleeve_Length";
$proto208["m_srcTableName"] = "saisunn";
$proto208["m_expr"]=$obj;
$proto208["m_alias"] = "";
$obj = new SQLFieldListItem($proto208);

$proto0["m_fieldlist"][]=$obj;
						$proto210=array();
			$obj = new SQLField(array(
	"m_strName" => "length",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisunn"
));

$proto210["m_sql"] = "shouhin.length";
$proto210["m_srcTableName"] = "saisunn";
$proto210["m_expr"]=$obj;
$proto210["m_alias"] = "";
$obj = new SQLFieldListItem($proto210);

$proto0["m_fieldlist"][]=$obj;
						$proto212=array();
			$obj = new SQLField(array(
	"m_strName" => "Ring_size",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisunn"
));

$proto212["m_sql"] = "shouhin.Ring_size";
$proto212["m_srcTableName"] = "saisunn";
$proto212["m_expr"]=$obj;
$proto212["m_alias"] = "";
$obj = new SQLFieldListItem($proto212);

$proto0["m_fieldlist"][]=$obj;
						$proto214=array();
			$obj = new SQLField(array(
	"m_strName" => "price_for_site",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisunn"
));

$proto214["m_sql"] = "shouhin.price_for_site";
$proto214["m_srcTableName"] = "saisunn";
$proto214["m_expr"]=$obj;
$proto214["m_alias"] = "";
$obj = new SQLFieldListItem($proto214);

$proto0["m_fieldlist"][]=$obj;
						$proto216=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_category_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisunn"
));

$proto216["m_sql"] = "shouhin.yahoo_category_id";
$proto216["m_srcTableName"] = "saisunn";
$proto216["m_expr"]=$obj;
$proto216["m_alias"] = "";
$obj = new SQLFieldListItem($proto216);

$proto0["m_fieldlist"][]=$obj;
						$proto218=array();
			$obj = new SQLField(array(
	"m_strName" => "Qty",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisunn"
));

$proto218["m_sql"] = "shouhin.Qty";
$proto218["m_srcTableName"] = "saisunn";
$proto218["m_expr"]=$obj;
$proto218["m_alias"] = "";
$obj = new SQLFieldListItem($proto218);

$proto0["m_fieldlist"][]=$obj;
						$proto220=array();
			$obj = new SQLField(array(
	"m_strName" => "sales_period",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisunn"
));

$proto220["m_sql"] = "shouhin.sales_period";
$proto220["m_srcTableName"] = "saisunn";
$proto220["m_expr"]=$obj;
$proto220["m_alias"] = "";
$obj = new SQLFieldListItem($proto220);

$proto0["m_fieldlist"][]=$obj;
						$proto222=array();
			$obj = new SQLField(array(
	"m_strName" => "starting_price",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisunn"
));

$proto222["m_sql"] = "shouhin.starting_price";
$proto222["m_srcTableName"] = "saisunn";
$proto222["m_expr"]=$obj;
$proto222["m_alias"] = "";
$obj = new SQLFieldListItem($proto222);

$proto0["m_fieldlist"][]=$obj;
						$proto224=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_sex",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisunn"
));

$proto224["m_sql"] = "shouhin.yahoo_sex";
$proto224["m_srcTableName"] = "saisunn";
$proto224["m_expr"]=$obj;
$proto224["m_alias"] = "";
$obj = new SQLFieldListItem($proto224);

$proto0["m_fieldlist"][]=$obj;
						$proto226=array();
			$obj = new SQLField(array(
	"m_strName" => "saisun_start",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisunn"
));

$proto226["m_sql"] = "shouhin.saisun_start";
$proto226["m_srcTableName"] = "saisunn";
$proto226["m_expr"]=$obj;
$proto226["m_alias"] = "";
$obj = new SQLFieldListItem($proto226);

$proto0["m_fieldlist"][]=$obj;
						$proto228=array();
			$obj = new SQLField(array(
	"m_strName" => "ecc_seq",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "saisunn"
));

$proto228["m_sql"] = "Eoc.ecc_seq";
$proto228["m_srcTableName"] = "saisunn";
$proto228["m_expr"]=$obj;
$proto228["m_alias"] = "";
$obj = new SQLFieldListItem($proto228);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto230=array();
$proto230["m_link"] = "SQLL_MAIN";
			$proto231=array();
$proto231["m_strName"] = "shouhin";
$proto231["m_srcTableName"] = "saisunn";
$proto231["m_columns"] = array();
$proto231["m_columns"][] = "product_id";
$proto231["m_columns"][] = "category_id";
$proto231["m_columns"][] = "goods_title";
$proto231["m_columns"][] = "title";
$proto231["m_columns"][] = "sub_category_id1";
$proto231["m_columns"][] = "ecc_id";
$proto231["m_columns"][] = "price";
$proto231["m_columns"][] = "yahoo";
$proto231["m_columns"][] = "remark";
$proto231["m_columns"][] = "sales_price";
$proto231["m_columns"][] = "description";
$proto231["m_columns"][] = "status";
$proto231["m_columns"][] = "product_num";
$proto231["m_columns"][] = "updated_at";
$proto231["m_columns"][] = "yahoo_size";
$proto231["m_columns"][] = "yahoo_title";
$proto231["m_columns"][] = "yahoo_junle";
$proto231["m_columns"][] = "yahoo_sankou_uwadai";
$proto231["m_columns"][] = "yahoo_sozai";
$proto231["m_columns"][] = "yahoo_color";
$proto231["m_columns"][] = "yahoo_kataban";
$proto231["m_columns"][] = "yahoo_condition1";
$proto231["m_columns"][] = "yahoo_condition2";
$proto231["m_columns"][] = "yahoo_fuzokuhin";
$proto231["m_columns"][] = "yahoo_sinaban";
$proto231["m_columns"][] = "yahoo_saisun_sha";
$proto231["m_columns"][] = "yahoo_sex";
$proto231["m_columns"][] = "box_id";
$proto231["m_columns"][] = "nyuukin_price";
$proto231["m_columns"][] = "updated_by";
$proto231["m_columns"][] = "raku_title";
$proto231["m_columns"][] = "raku_hyoujisaki_category2";
$proto231["m_columns"][] = "raku_hyoujisaki_category";
$proto231["m_columns"][] = "raku_hyoujisaki_category3";
$proto231["m_columns"][] = "timesta";
$proto231["m_columns"][] = "saisun_start";
$proto231["m_columns"][] = "saisun_end";
$proto231["m_columns"][] = "label_output_flag";
$proto231["m_columns"][] = "season";
$proto231["m_columns"][] = "kanryou_henbi";
$proto231["m_columns"][] = "box_sort";
$proto231["m_columns"][] = "satei_by";
$proto231["m_columns"][] = "kaitori_by";
$proto231["m_columns"][] = "comment";
$proto231["m_columns"][] = "satei_hi";
$proto231["m_columns"][] = "kaitory_hi";
$proto231["m_columns"][] = "REG_PHOTOGRAPHER";
$proto231["m_columns"][] = "REG_AUTHOR";
$proto231["m_columns"][] = "REG_PACKINGS";
$proto231["m_columns"][] = "REG_KAKOU_DATE";
$proto231["m_columns"][] = "REG_KAKOU";
$proto231["m_columns"][] = "REG_EXHIBITOR";
$proto231["m_columns"][] = "REG_PHOTOGRAPHER_DATE";
$proto231["m_columns"][] = "DT_PACKING_DATE";
$proto231["m_columns"][] = "DT_UP_DATE";
$proto231["m_columns"][] = "AWAZU_DATE";
$proto231["m_columns"][] = "AWAZU_NIN";
$proto231["m_columns"][] = "sabun_date";
$proto231["m_columns"][] = "browseid";
$proto231["m_columns"][] = "browsenode";
$proto231["m_columns"][] = "gold_property";
$proto231["m_columns"][] = "ichiba_title";
$proto231["m_columns"][] = "Gram";
$proto231["m_columns"][] = "Parent_stone";
$proto231["m_columns"][] = "Aside_stone";
$proto231["m_columns"][] = "Appraiser";
$proto231["m_columns"][] = "Remarks";
$proto231["m_columns"][] = "Destination_selling";
$proto231["m_columns"][] = "Finish";
$proto231["m_columns"][] = "Discrimination";
$proto231["m_columns"][] = "accessories";
$proto231["m_columns"][] = "priority";
$proto231["m_columns"][] = "A_storage";
$proto231["m_columns"][] = "price_per_gram";
$proto231["m_columns"][] = "price_per_parent_stone";
$proto231["m_columns"][] = "price_per_aside_stone";
$proto231["m_columns"][] = "price_secret";
$proto231["m_columns"][] = "sales_price_secret";
$proto231["m_columns"][] = "eq";
$proto231["m_columns"][] = "en";
$proto231["m_columns"][] = "line";
$proto231["m_columns"][] = "item_name";
$proto231["m_columns"][] = "handle";
$proto231["m_columns"][] = "yahoo_color_id";
$proto231["m_columns"][] = "raku_hyoujisaki_category4";
$proto231["m_columns"][] = "raku_hyoujisaki_category5";
$proto231["m_columns"][] = "raku_dir_1";
$proto231["m_columns"][] = "raku_dir_2";
$proto231["m_columns"][] = "raku_dir_3";
$proto231["m_columns"][] = "raku_dir_4";
$proto231["m_columns"][] = "raku_dir_5";
$proto231["m_columns"][] = "raku_dir_result";
$proto231["m_columns"][] = "raku_tag_result";
$proto231["m_columns"][] = "serial_number";
$proto231["m_columns"][] = "Exhibition_Date";
$proto231["m_columns"][] = "search_keyword";
$proto231["m_columns"][] = "stamp";
$proto231["m_columns"][] = "motif";
$proto231["m_columns"][] = "Setting";
$proto231["m_columns"][] = "processing";
$proto231["m_columns"][] = "Sleeve_Length";
$proto231["m_columns"][] = "length";
$proto231["m_columns"][] = "Ring_size";
$proto231["m_columns"][] = "price_for_site";
$proto231["m_columns"][] = "yahoo_category_id";
$proto231["m_columns"][] = "Qty";
$proto231["m_columns"][] = "sales_period";
$proto231["m_columns"][] = "starting_price";
$proto231["m_columns"][] = "FLAG_NO_ARRIVAL";
$obj = new SQLTable($proto231);

$proto230["m_table"] = $obj;
$proto230["m_sql"] = "shouhin";
$proto230["m_alias"] = "";
$proto230["m_srcTableName"] = "saisunn";
$proto232=array();
$proto232["m_sql"] = "";
$proto232["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto232["m_column"]=$obj;
$proto232["m_contained"] = array();
$proto232["m_strCase"] = "";
$proto232["m_havingmode"] = false;
$proto232["m_inBrackets"] = false;
$proto232["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto232);

$proto230["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto230);

$proto0["m_fromlist"][]=$obj;
												$proto234=array();
$proto234["m_link"] = "SQLL_LEFTJOIN";
			$proto235=array();
$proto235["m_strName"] = "Eoc";
$proto235["m_srcTableName"] = "saisunn";
$proto235["m_columns"] = array();
$proto235["m_columns"][] = "ecc_id";
$proto235["m_columns"][] = "ecc_seq";
$proto235["m_columns"][] = "name1";
$proto235["m_columns"][] = "created_t";
$proto235["m_columns"][] = "registerd_id";
$proto235["m_columns"][] = "kaitori_staff_id";
$proto235["m_columns"][] = "name2";
$proto235["m_columns"][] = "wareki";
$proto235["m_columns"][] = "b1";
$proto235["m_columns"][] = "b2";
$proto235["m_columns"][] = "b3";
$proto235["m_columns"][] = "birth_day";
$proto235["m_columns"][] = "age";
$proto235["m_columns"][] = "zip";
$proto235["m_columns"][] = "zip1";
$proto235["m_columns"][] = "zip2";
$proto235["m_columns"][] = "address1";
$proto235["m_columns"][] = "address2";
$proto235["m_columns"][] = "address3";
$proto235["m_columns"][] = "tel";
$proto235["m_columns"][] = "tel2";
$proto235["m_columns"][] = "mail1";
$proto235["m_columns"][] = "mail2";
$proto235["m_columns"][] = "address_code";
$proto235["m_columns"][] = "bank_name";
$proto235["m_columns"][] = "bank_blunch_code";
$proto235["m_columns"][] = "bank_yokin_shubetu";
$proto235["m_columns"][] = "bank_account";
$proto235["m_columns"][] = "bank_acoount_name";
$proto235["m_columns"][] = "haisou_bangou";
$proto235["m_columns"][] = "sise_houhou";
$proto235["m_columns"][] = "hentou_houhou";
$proto235["m_columns"][] = "hentou_houhou_time";
$proto235["m_columns"][] = "mousikomi_id";
$proto235["m_columns"][] = "hituyou_shorui";
$proto235["m_columns"][] = "seiyaku_fuseiritu";
$proto235["m_columns"][] = "mitumori_taku";
$proto235["m_columns"][] = "seacanse";
$proto235["m_columns"][] = "remark";
$proto235["m_columns"][] = "type";
$proto235["m_columns"][] = "sales_flag";
$proto235["m_columns"][] = "src_type";
$proto235["m_columns"][] = "liquidation_shop_code";
$proto235["m_columns"][] = "insurance_amount_print";
$proto235["m_columns"][] = "jis_code";
$proto235["m_columns"][] = "updated_at";
$proto235["m_columns"][] = "_registerd_id";
$proto235["m_columns"][] = "mail_check_type";
$proto235["m_columns"][] = "purchase_type";
$proto235["m_columns"][] = "sex";
$proto235["m_columns"][] = "m_tel";
$proto235["m_columns"][] = "fax";
$proto235["m_columns"][] = "chigin_kaitori";
$proto235["m_columns"][] = "option1";
$proto235["m_columns"][] = "option2";
$proto235["m_columns"][] = "option3";
$proto235["m_columns"][] = "option4";
$proto235["m_columns"][] = "option5";
$proto235["m_columns"][] = "option6";
$proto235["m_columns"][] = "option7";
$proto235["m_columns"][] = "option8";
$proto235["m_columns"][] = "option9";
$proto235["m_columns"][] = "option10";
$proto235["m_columns"][] = "option11";
$proto235["m_columns"][] = "option12";
$proto235["m_columns"][] = "option13";
$proto235["m_columns"][] = "rakuda_csv_flag";
$proto235["m_columns"][] = "EOC_COURIER_CHECK";
$proto235["m_columns"][] = "EOC_SIZE";
$proto235["m_columns"][] = "EOC_NUMBER";
$proto235["m_columns"][] = "EOC_REUSE";
$proto235["m_columns"][] = "EOC__DELIVERY_DATES";
$proto235["m_columns"][] = "EOC_SPECIFIED_TIME";
$proto235["m_columns"][] = "FIRST_NAME2";
$proto235["m_columns"][] = "LAST_NAME2";
$proto235["m_columns"][] = "EOC__DATE_AND_TIME_2";
$proto235["m_columns"][] = "EOC__BOX_NUMBER";
$proto235["m_columns"][] = "FIRST_NAME_KANA";
$proto235["m_columns"][] = "LAST_NAME_KANA";
$proto235["m_columns"][] = "FLAG_SPEED";
$proto235["m_columns"][] = "SEARCH_MEDIA";
$proto235["m_columns"][] = "SEARCH_SITE";
$proto235["m_columns"][] = "UN_REACHABLE";
$proto235["m_columns"][] = "FLG_MAIL_SAGAWA";
$proto235["m_columns"][] = "FLG_MAIL_OTHER";
$proto235["m_columns"][] = "ALLSEIYAKU";
$proto235["m_columns"][] = "ICHIBUSEIYAKU";
$proto235["m_columns"][] = "seiyakukin";
$proto235["m_columns"][] = "kaitorihuka";
$proto235["m_columns"][] = "awazu_date";
$proto235["m_columns"][] = "seiyaku_price";
$proto235["m_columns"][] = "eoc_search_keyword";
$proto235["m_columns"][] = "sonota";
$proto235["m_columns"][] = "size_kosuu";
$proto235["m_columns"][] = "sagawa_shuuka_flag";
$obj = new SQLTable($proto235);

$proto234["m_table"] = $obj;
$proto234["m_sql"] = "LEFT OUTER JOIN Eoc ON shouhin.ecc_id = Eoc.ecc_id";
$proto234["m_alias"] = "";
$proto234["m_srcTableName"] = "saisunn";
$proto236=array();
$proto236["m_sql"] = "shouhin.ecc_id = Eoc.ecc_id";
$proto236["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "ecc_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisunn"
));

$proto236["m_column"]=$obj;
$proto236["m_contained"] = array();
$proto236["m_strCase"] = "= Eoc.ecc_id";
$proto236["m_havingmode"] = false;
$proto236["m_inBrackets"] = false;
$proto236["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto236);

$proto234["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto234);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto238=array();
						$obj = new SQLField(array(
	"m_strName" => "product_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "saisunn"
));

$proto238["m_column"]=$obj;
$proto238["m_bAsc"] = 0;
$proto238["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto238);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="saisunn";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_saisunn = createSqlQuery_saisunn();


	
		;

																																																																																																											

$tdatasaisunn[".sqlquery"] = $queryData_saisunn;

include_once(getabspath("include/saisunn_events.php"));
$tableEvents["saisunn"] = new eventclass_saisunn;
$tdatasaisunn[".hasEvents"] = true;

?>