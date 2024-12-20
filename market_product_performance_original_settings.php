<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamarket_product_performance_original = array();
	$tdatamarket_product_performance_original[".truncateText"] = true;
	$tdatamarket_product_performance_original[".NumberOfChars"] = 80;
	$tdatamarket_product_performance_original[".ShortName"] = "market_product_performance_original";
	$tdatamarket_product_performance_original[".OwnerID"] = "";
	$tdatamarket_product_performance_original[".OriginalTable"] = "market_product_performance_original";

//	field labels
$fieldLabelsmarket_product_performance_original = array();
$fieldToolTipsmarket_product_performance_original = array();
$pageTitlesmarket_product_performance_original = array();
$placeHoldersmarket_product_performance_original = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmarket_product_performance_original["Japanese"] = array();
	$fieldToolTipsmarket_product_performance_original["Japanese"] = array();
	$placeHoldersmarket_product_performance_original["Japanese"] = array();
	$pageTitlesmarket_product_performance_original["Japanese"] = array();
	$fieldLabelsmarket_product_performance_original["Japanese"]["id"] = "Id";
	$fieldToolTipsmarket_product_performance_original["Japanese"]["id"] = "";
	$placeHoldersmarket_product_performance_original["Japanese"]["id"] = "";
	$fieldLabelsmarket_product_performance_original["Japanese"]["ichiba_meeting_month"] = "年月";
	$fieldToolTipsmarket_product_performance_original["Japanese"]["ichiba_meeting_month"] = "";
	$placeHoldersmarket_product_performance_original["Japanese"]["ichiba_meeting_month"] = "";
	$fieldLabelsmarket_product_performance_original["Japanese"]["ichiba_meeting_name"] = "会";
	$fieldToolTipsmarket_product_performance_original["Japanese"]["ichiba_meeting_name"] = "";
	$placeHoldersmarket_product_performance_original["Japanese"]["ichiba_meeting_name"] = "";
	$fieldLabelsmarket_product_performance_original["Japanese"]["shape"] = "shape";
	$fieldToolTipsmarket_product_performance_original["Japanese"]["shape"] = "";
	$placeHoldersmarket_product_performance_original["Japanese"]["shape"] = "";
	$fieldLabelsmarket_product_performance_original["Japanese"]["color_quality"] = "色品質";
	$fieldToolTipsmarket_product_performance_original["Japanese"]["color_quality"] = "";
	$placeHoldersmarket_product_performance_original["Japanese"]["color_quality"] = "";
	$fieldLabelsmarket_product_performance_original["Japanese"]["defect_quality"] = "疵品質";
	$fieldToolTipsmarket_product_performance_original["Japanese"]["defect_quality"] = "";
	$placeHoldersmarket_product_performance_original["Japanese"]["defect_quality"] = "";
	$fieldLabelsmarket_product_performance_original["Japanese"]["category_id"] = "大カテゴリ";
	$fieldToolTipsmarket_product_performance_original["Japanese"]["category_id"] = "";
	$placeHoldersmarket_product_performance_original["Japanese"]["category_id"] = "";
	$fieldLabelsmarket_product_performance_original["Japanese"]["ichiba_detail"] = "詳細";
	$fieldToolTipsmarket_product_performance_original["Japanese"]["ichiba_detail"] = "";
	$placeHoldersmarket_product_performance_original["Japanese"]["ichiba_detail"] = "";
	$fieldLabelsmarket_product_performance_original["Japanese"]["gold_property"] = "金性";
	$fieldToolTipsmarket_product_performance_original["Japanese"]["gold_property"] = "";
	$placeHoldersmarket_product_performance_original["Japanese"]["gold_property"] = "";
	$fieldLabelsmarket_product_performance_original["Japanese"]["price_per_gram"] = "単価";
	$fieldToolTipsmarket_product_performance_original["Japanese"]["price_per_gram"] = "";
	$placeHoldersmarket_product_performance_original["Japanese"]["price_per_gram"] = "";
	$fieldLabelsmarket_product_performance_original["Japanese"]["Gram"] = "Gram";
	$fieldToolTipsmarket_product_performance_original["Japanese"]["Gram"] = "";
	$placeHoldersmarket_product_performance_original["Japanese"]["Gram"] = "";
	$fieldLabelsmarket_product_performance_original["Japanese"]["Parent_stone"] = "親石";
	$fieldToolTipsmarket_product_performance_original["Japanese"]["Parent_stone"] = "";
	$placeHoldersmarket_product_performance_original["Japanese"]["Parent_stone"] = "";
	$fieldLabelsmarket_product_performance_original["Japanese"]["Aside_stone"] = "脇石";
	$fieldToolTipsmarket_product_performance_original["Japanese"]["Aside_stone"] = "";
	$placeHoldersmarket_product_performance_original["Japanese"]["Aside_stone"] = "";
	$fieldLabelsmarket_product_performance_original["Japanese"]["ichiba_melee_gai"] = "メレガイ";
	$fieldToolTipsmarket_product_performance_original["Japanese"]["ichiba_melee_gai"] = "";
	$placeHoldersmarket_product_performance_original["Japanese"]["ichiba_melee_gai"] = "";
	$fieldLabelsmarket_product_performance_original["Japanese"]["Apparaiser"] = "鑑定";
	$fieldToolTipsmarket_product_performance_original["Japanese"]["Apparaiser"] = "";
	$placeHoldersmarket_product_performance_original["Japanese"]["Apparaiser"] = "";
	$fieldLabelsmarket_product_performance_original["Japanese"]["zeinuki"] = "代金（税抜）";
	$fieldToolTipsmarket_product_performance_original["Japanese"]["zeinuki"] = "";
	$placeHoldersmarket_product_performance_original["Japanese"]["zeinuki"] = "";
	$fieldLabelsmarket_product_performance_original["Japanese"]["nyuukin_price"] = "入金額";
	$fieldToolTipsmarket_product_performance_original["Japanese"]["nyuukin_price"] = "";
	$placeHoldersmarket_product_performance_original["Japanese"]["nyuukin_price"] = "";
	$fieldLabelsmarket_product_performance_original["Japanese"]["ichiba_lot_pieces"] = "lots_pieces";
	$fieldToolTipsmarket_product_performance_original["Japanese"]["ichiba_lot_pieces"] = "";
	$placeHoldersmarket_product_performance_original["Japanese"]["ichiba_lot_pieces"] = "";
	$fieldLabelsmarket_product_performance_original["Japanese"]["avg"] = "Avg";
	$fieldToolTipsmarket_product_performance_original["Japanese"]["avg"] = "";
	$placeHoldersmarket_product_performance_original["Japanese"]["avg"] = "";
	$fieldLabelsmarket_product_performance_original["Japanese"]["comment"] = "実績表示内容";
	$fieldToolTipsmarket_product_performance_original["Japanese"]["comment"] = "";
	$placeHoldersmarket_product_performance_original["Japanese"]["comment"] = "";
	$fieldLabelsmarket_product_performance_original["Japanese"]["syuppinsya"] = "出品者";
	$fieldToolTipsmarket_product_performance_original["Japanese"]["syuppinsya"] = "";
	$placeHoldersmarket_product_performance_original["Japanese"]["syuppinsya"] = "";
	$fieldLabelsmarket_product_performance_original["Japanese"]["DA_YOURNAME"] = "芳名";
	$fieldToolTipsmarket_product_performance_original["Japanese"]["DA_YOURNAME"] = "";
	$placeHoldersmarket_product_performance_original["Japanese"]["DA_YOURNAME"] = "";
	$fieldLabelsmarket_product_performance_original["Japanese"]["ichiba_img"] = "画像";
	$fieldToolTipsmarket_product_performance_original["Japanese"]["ichiba_img"] = "";
	$placeHoldersmarket_product_performance_original["Japanese"]["ichiba_img"] = "";
	$fieldLabelsmarket_product_performance_original["Japanese"]["charagai"] = "ガイ";
	$fieldToolTipsmarket_product_performance_original["Japanese"]["charagai"] = "";
	$placeHoldersmarket_product_performance_original["Japanese"]["charagai"] = "";
	$fieldLabelsmarket_product_performance_original["Japanese"]["price_without_tax"] = "仕入額（税抜）";
	$fieldToolTipsmarket_product_performance_original["Japanese"]["price_without_tax"] = "";
	$placeHoldersmarket_product_performance_original["Japanese"]["price_without_tax"] = "";
	$fieldLabelsmarket_product_performance_original["Japanese"]["price"] = "仕入額（税込）";
	$fieldToolTipsmarket_product_performance_original["Japanese"]["price"] = "";
	$placeHoldersmarket_product_performance_original["Japanese"]["price"] = "";
	$fieldLabelsmarket_product_performance_original["Japanese"]["sagaku"] = "差額";
	$fieldToolTipsmarket_product_performance_original["Japanese"]["sagaku"] = "";
	$placeHoldersmarket_product_performance_original["Japanese"]["sagaku"] = "";
	$fieldLabelsmarket_product_performance_original["Japanese"]["arari"] = "粗利";
	$fieldToolTipsmarket_product_performance_original["Japanese"]["arari"] = "";
	$placeHoldersmarket_product_performance_original["Japanese"]["arari"] = "";
	$fieldLabelsmarket_product_performance_original["Japanese"]["ichiba_detail_dev"] = "Ichiba Detail Dev";
	$fieldToolTipsmarket_product_performance_original["Japanese"]["ichiba_detail_dev"] = "";
	$placeHoldersmarket_product_performance_original["Japanese"]["ichiba_detail_dev"] = "";
	$fieldLabelsmarket_product_performance_original["Japanese"]["updated_at"] = "更新日";
	$fieldToolTipsmarket_product_performance_original["Japanese"]["updated_at"] = "";
	$placeHoldersmarket_product_performance_original["Japanese"]["updated_at"] = "";
	$fieldLabelsmarket_product_performance_original["Japanese"]["updated_by"] = "更新者";
	$fieldToolTipsmarket_product_performance_original["Japanese"]["updated_by"] = "";
	$placeHoldersmarket_product_performance_original["Japanese"]["updated_by"] = "";
	$fieldLabelsmarket_product_performance_original["Japanese"]["created_at"] = "作成日";
	$fieldToolTipsmarket_product_performance_original["Japanese"]["created_at"] = "";
	$placeHoldersmarket_product_performance_original["Japanese"]["created_at"] = "";
	$fieldLabelsmarket_product_performance_original["Japanese"]["created_by"] = "作成者";
	$fieldToolTipsmarket_product_performance_original["Japanese"]["created_by"] = "";
	$placeHoldersmarket_product_performance_original["Japanese"]["created_by"] = "";
	$fieldLabelsmarket_product_performance_original["Japanese"]["front_hidden_flg"] = "サイト非表示";
	$fieldToolTipsmarket_product_performance_original["Japanese"]["front_hidden_flg"] = "";
	$placeHoldersmarket_product_performance_original["Japanese"]["front_hidden_flg"] = "";
	$fieldLabelsmarket_product_performance_original["Japanese"]["price_for_site"] = "サイト用価格";
	$fieldToolTipsmarket_product_performance_original["Japanese"]["price_for_site"] = "";
	$placeHoldersmarket_product_performance_original["Japanese"]["price_for_site"] = "";
	$fieldLabelsmarket_product_performance_original["Japanese"]["disp_ichiba_img"] = "確認用画像";
	$fieldToolTipsmarket_product_performance_original["Japanese"]["disp_ichiba_img"] = "";
	$placeHoldersmarket_product_performance_original["Japanese"]["disp_ichiba_img"] = "";
	$fieldLabelsmarket_product_performance_original["Japanese"]["sub_category_id"] = "中カテゴリ";
	$fieldToolTipsmarket_product_performance_original["Japanese"]["sub_category_id"] = "";
	$placeHoldersmarket_product_performance_original["Japanese"]["sub_category_id"] = "";
	$fieldLabelsmarket_product_performance_original["Japanese"]["product_num"] = "ブランドID";
	$fieldToolTipsmarket_product_performance_original["Japanese"]["product_num"] = "";
	$placeHoldersmarket_product_performance_original["Japanese"]["product_num"] = "";
	$fieldLabelsmarket_product_performance_original["Japanese"]["product_id"] = "SEQ";
	$fieldToolTipsmarket_product_performance_original["Japanese"]["product_id"] = "";
	$placeHoldersmarket_product_performance_original["Japanese"]["product_id"] = "";
	$fieldLabelsmarket_product_performance_original["Japanese"]["shouhin_comment"] = "コメント";
	$fieldToolTipsmarket_product_performance_original["Japanese"]["shouhin_comment"] = "";
	$placeHoldersmarket_product_performance_original["Japanese"]["shouhin_comment"] = "";
	$fieldLabelsmarket_product_performance_original["Japanese"]["use_satei"] = "査定使用";
	$fieldToolTipsmarket_product_performance_original["Japanese"]["use_satei"] = "";
	$placeHoldersmarket_product_performance_original["Japanese"]["use_satei"] = "";
	$fieldLabelsmarket_product_performance_original["Japanese"]["ichiba_exhibition_id"] = "出品表ID";
	$fieldToolTipsmarket_product_performance_original["Japanese"]["ichiba_exhibition_id"] = "";
	$placeHoldersmarket_product_performance_original["Japanese"]["ichiba_exhibition_id"] = "";
	$fieldLabelsmarket_product_performance_original["Japanese"]["box_id"] = "ボックスID";
	$fieldToolTipsmarket_product_performance_original["Japanese"]["box_id"] = "";
	$placeHoldersmarket_product_performance_original["Japanese"]["box_id"] = "";
	$fieldLabelsmarket_product_performance_original["Japanese"]["item_name"] = "アイテム名";
	$fieldToolTipsmarket_product_performance_original["Japanese"]["item_name"] = "";
	$placeHoldersmarket_product_performance_original["Japanese"]["item_name"] = "";
	$fieldLabelsmarket_product_performance_original["Japanese"]["yahoo_kataban"] = "型番";
	$fieldToolTipsmarket_product_performance_original["Japanese"]["yahoo_kataban"] = "";
	$placeHoldersmarket_product_performance_original["Japanese"]["yahoo_kataban"] = "";
	$fieldLabelsmarket_product_performance_original["Japanese"]["yahoo_condition2"] = "コンディション";
	$fieldToolTipsmarket_product_performance_original["Japanese"]["yahoo_condition2"] = "";
	$placeHoldersmarket_product_performance_original["Japanese"]["yahoo_condition2"] = "";
	$fieldLabelsmarket_product_performance_original["Japanese"]["market_shape"] = "市場shape";
	$fieldToolTipsmarket_product_performance_original["Japanese"]["market_shape"] = "";
	$placeHoldersmarket_product_performance_original["Japanese"]["market_shape"] = "";
	$fieldLabelsmarket_product_performance_original["Japanese"]["market_category_id"] = "市場大カテゴリー";
	$fieldToolTipsmarket_product_performance_original["Japanese"]["market_category_id"] = "";
	$placeHoldersmarket_product_performance_original["Japanese"]["market_category_id"] = "";
	$fieldLabelsmarket_product_performance_original["Japanese"]["market_gold_property"] = "市場金性";
	$fieldToolTipsmarket_product_performance_original["Japanese"]["market_gold_property"] = "";
	$placeHoldersmarket_product_performance_original["Japanese"]["market_gold_property"] = "";
	$fieldLabelsmarket_product_performance_original["Japanese"]["market_sub_category_id1"] = "市場中カテゴリー";
	$fieldToolTipsmarket_product_performance_original["Japanese"]["market_sub_category_id1"] = "";
	$placeHoldersmarket_product_performance_original["Japanese"]["market_sub_category_id1"] = "";
	$fieldLabelsmarket_product_performance_original["Japanese"]["price_per_parent_stone"] = "親石単価";
	$fieldToolTipsmarket_product_performance_original["Japanese"]["price_per_parent_stone"] = "";
	$placeHoldersmarket_product_performance_original["Japanese"]["price_per_parent_stone"] = "";
	$fieldLabelsmarket_product_performance_original["Japanese"]["price_per_aside_stone"] = "脇石単価";
	$fieldToolTipsmarket_product_performance_original["Japanese"]["price_per_aside_stone"] = "";
	$placeHoldersmarket_product_performance_original["Japanese"]["price_per_aside_stone"] = "";
	$fieldLabelsmarket_product_performance_original["Japanese"]["gramgai"] = "グラムガイ";
	$fieldToolTipsmarket_product_performance_original["Japanese"]["gramgai"] = "";
	$placeHoldersmarket_product_performance_original["Japanese"]["gramgai"] = "";
	$fieldLabelsmarket_product_performance_original["Japanese"]["colorstone_id"] = "色石";
	$fieldToolTipsmarket_product_performance_original["Japanese"]["colorstone_id"] = "";
	$placeHoldersmarket_product_performance_original["Japanese"]["colorstone_id"] = "";
	$fieldLabelsmarket_product_performance_original["Japanese"]["category_class"] = "部門";
	$fieldToolTipsmarket_product_performance_original["Japanese"]["category_class"] = "";
	$placeHoldersmarket_product_performance_original["Japanese"]["category_class"] = "";
	$fieldLabelsmarket_product_performance_original["Japanese"]["search_word"] = "フリーワード検索";
	$fieldToolTipsmarket_product_performance_original["Japanese"]["search_word"] = "";
	$placeHoldersmarket_product_performance_original["Japanese"]["search_word"] = "";
	$fieldLabelsmarket_product_performance_original["Japanese"]["sales_date"] = "販売日";
	$fieldToolTipsmarket_product_performance_original["Japanese"]["sales_date"] = "";
	$placeHoldersmarket_product_performance_original["Japanese"]["sales_date"] = "";
	if (count($fieldToolTipsmarket_product_performance_original["Japanese"]))
		$tdatamarket_product_performance_original[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmarket_product_performance_original[""] = array();
	$fieldToolTipsmarket_product_performance_original[""] = array();
	$placeHoldersmarket_product_performance_original[""] = array();
	$pageTitlesmarket_product_performance_original[""] = array();
	$fieldLabelsmarket_product_performance_original[""]["id"] = "Id";
	$fieldToolTipsmarket_product_performance_original[""]["id"] = "";
	$placeHoldersmarket_product_performance_original[""]["id"] = "";
	$fieldLabelsmarket_product_performance_original[""]["ichiba_meeting_month"] = "Ichiba Meeting Month";
	$fieldToolTipsmarket_product_performance_original[""]["ichiba_meeting_month"] = "";
	$placeHoldersmarket_product_performance_original[""]["ichiba_meeting_month"] = "";
	$fieldLabelsmarket_product_performance_original[""]["ichiba_meeting_name"] = "Ichiba Meeting Name";
	$fieldToolTipsmarket_product_performance_original[""]["ichiba_meeting_name"] = "";
	$placeHoldersmarket_product_performance_original[""]["ichiba_meeting_name"] = "";
	$fieldLabelsmarket_product_performance_original[""]["shape"] = "Shape";
	$fieldToolTipsmarket_product_performance_original[""]["shape"] = "";
	$placeHoldersmarket_product_performance_original[""]["shape"] = "";
	$fieldLabelsmarket_product_performance_original[""]["color_quality"] = "Color Quality";
	$fieldToolTipsmarket_product_performance_original[""]["color_quality"] = "";
	$placeHoldersmarket_product_performance_original[""]["color_quality"] = "";
	$fieldLabelsmarket_product_performance_original[""]["defect_quality"] = "Defect Quality";
	$fieldToolTipsmarket_product_performance_original[""]["defect_quality"] = "";
	$placeHoldersmarket_product_performance_original[""]["defect_quality"] = "";
	$fieldLabelsmarket_product_performance_original[""]["category_id"] = "Category Id";
	$fieldToolTipsmarket_product_performance_original[""]["category_id"] = "";
	$placeHoldersmarket_product_performance_original[""]["category_id"] = "";
	$fieldLabelsmarket_product_performance_original[""]["ichiba_detail"] = "Ichiba Detail";
	$fieldToolTipsmarket_product_performance_original[""]["ichiba_detail"] = "";
	$placeHoldersmarket_product_performance_original[""]["ichiba_detail"] = "";
	$fieldLabelsmarket_product_performance_original[""]["gold_property"] = "Gold Property";
	$fieldToolTipsmarket_product_performance_original[""]["gold_property"] = "";
	$placeHoldersmarket_product_performance_original[""]["gold_property"] = "";
	$fieldLabelsmarket_product_performance_original[""]["price_per_gram"] = "Price Per Gram";
	$fieldToolTipsmarket_product_performance_original[""]["price_per_gram"] = "";
	$placeHoldersmarket_product_performance_original[""]["price_per_gram"] = "";
	$fieldLabelsmarket_product_performance_original[""]["Gram"] = "Gram";
	$fieldToolTipsmarket_product_performance_original[""]["Gram"] = "";
	$placeHoldersmarket_product_performance_original[""]["Gram"] = "";
	$fieldLabelsmarket_product_performance_original[""]["Parent_stone"] = "Parent Stone";
	$fieldToolTipsmarket_product_performance_original[""]["Parent_stone"] = "";
	$placeHoldersmarket_product_performance_original[""]["Parent_stone"] = "";
	$fieldLabelsmarket_product_performance_original[""]["Aside_stone"] = "Aside Stone";
	$fieldToolTipsmarket_product_performance_original[""]["Aside_stone"] = "";
	$placeHoldersmarket_product_performance_original[""]["Aside_stone"] = "";
	$fieldLabelsmarket_product_performance_original[""]["ichiba_melee_gai"] = "Ichiba Melee Gai";
	$fieldToolTipsmarket_product_performance_original[""]["ichiba_melee_gai"] = "";
	$placeHoldersmarket_product_performance_original[""]["ichiba_melee_gai"] = "";
	$fieldLabelsmarket_product_performance_original[""]["Apparaiser"] = "Apparaiser";
	$fieldToolTipsmarket_product_performance_original[""]["Apparaiser"] = "";
	$placeHoldersmarket_product_performance_original[""]["Apparaiser"] = "";
	$fieldLabelsmarket_product_performance_original[""]["zeinuki"] = "Zeinuki";
	$fieldToolTipsmarket_product_performance_original[""]["zeinuki"] = "";
	$placeHoldersmarket_product_performance_original[""]["zeinuki"] = "";
	$fieldLabelsmarket_product_performance_original[""]["nyuukin_price"] = "Nyuukin Price";
	$fieldToolTipsmarket_product_performance_original[""]["nyuukin_price"] = "";
	$placeHoldersmarket_product_performance_original[""]["nyuukin_price"] = "";
	$fieldLabelsmarket_product_performance_original[""]["ichiba_lot_pieces"] = "Ichiba Lot Pieces";
	$fieldToolTipsmarket_product_performance_original[""]["ichiba_lot_pieces"] = "";
	$placeHoldersmarket_product_performance_original[""]["ichiba_lot_pieces"] = "";
	$fieldLabelsmarket_product_performance_original[""]["avg"] = "Avg";
	$fieldToolTipsmarket_product_performance_original[""]["avg"] = "";
	$placeHoldersmarket_product_performance_original[""]["avg"] = "";
	$fieldLabelsmarket_product_performance_original[""]["comment"] = "Comment";
	$fieldToolTipsmarket_product_performance_original[""]["comment"] = "";
	$placeHoldersmarket_product_performance_original[""]["comment"] = "";
	$fieldLabelsmarket_product_performance_original[""]["syuppinsya"] = "Syuppinsya";
	$fieldToolTipsmarket_product_performance_original[""]["syuppinsya"] = "";
	$placeHoldersmarket_product_performance_original[""]["syuppinsya"] = "";
	$fieldLabelsmarket_product_performance_original[""]["DA_YOURNAME"] = "DA YOURNAME";
	$fieldToolTipsmarket_product_performance_original[""]["DA_YOURNAME"] = "";
	$placeHoldersmarket_product_performance_original[""]["DA_YOURNAME"] = "";
	$fieldLabelsmarket_product_performance_original[""]["ichiba_img"] = "Ichiba Img";
	$fieldToolTipsmarket_product_performance_original[""]["ichiba_img"] = "";
	$placeHoldersmarket_product_performance_original[""]["ichiba_img"] = "";
	$fieldLabelsmarket_product_performance_original[""]["charagai"] = "Charagai";
	$fieldToolTipsmarket_product_performance_original[""]["charagai"] = "";
	$placeHoldersmarket_product_performance_original[""]["charagai"] = "";
	$fieldLabelsmarket_product_performance_original[""]["price_without_tax"] = "Price Without Tax";
	$fieldToolTipsmarket_product_performance_original[""]["price_without_tax"] = "";
	$placeHoldersmarket_product_performance_original[""]["price_without_tax"] = "";
	$fieldLabelsmarket_product_performance_original[""]["price"] = "Price";
	$fieldToolTipsmarket_product_performance_original[""]["price"] = "";
	$placeHoldersmarket_product_performance_original[""]["price"] = "";
	$fieldLabelsmarket_product_performance_original[""]["sagaku"] = "Sagaku";
	$fieldToolTipsmarket_product_performance_original[""]["sagaku"] = "";
	$placeHoldersmarket_product_performance_original[""]["sagaku"] = "";
	$fieldLabelsmarket_product_performance_original[""]["arari"] = "Arari";
	$fieldToolTipsmarket_product_performance_original[""]["arari"] = "";
	$placeHoldersmarket_product_performance_original[""]["arari"] = "";
	$fieldLabelsmarket_product_performance_original[""]["ichiba_detail_dev"] = "Ichiba Detail Dev";
	$fieldToolTipsmarket_product_performance_original[""]["ichiba_detail_dev"] = "";
	$placeHoldersmarket_product_performance_original[""]["ichiba_detail_dev"] = "";
	$fieldLabelsmarket_product_performance_original[""]["updated_at"] = "Updated At";
	$fieldToolTipsmarket_product_performance_original[""]["updated_at"] = "";
	$placeHoldersmarket_product_performance_original[""]["updated_at"] = "";
	$fieldLabelsmarket_product_performance_original[""]["updated_by"] = "Updated By";
	$fieldToolTipsmarket_product_performance_original[""]["updated_by"] = "";
	$placeHoldersmarket_product_performance_original[""]["updated_by"] = "";
	$fieldLabelsmarket_product_performance_original[""]["created_at"] = "Created At";
	$fieldToolTipsmarket_product_performance_original[""]["created_at"] = "";
	$placeHoldersmarket_product_performance_original[""]["created_at"] = "";
	$fieldLabelsmarket_product_performance_original[""]["created_by"] = "Created By";
	$fieldToolTipsmarket_product_performance_original[""]["created_by"] = "";
	$placeHoldersmarket_product_performance_original[""]["created_by"] = "";
	$fieldLabelsmarket_product_performance_original[""]["front_hidden_flg"] = "Front Hidden Flg";
	$fieldToolTipsmarket_product_performance_original[""]["front_hidden_flg"] = "";
	$placeHoldersmarket_product_performance_original[""]["front_hidden_flg"] = "";
	$fieldLabelsmarket_product_performance_original[""]["price_for_site"] = "Price For Site";
	$fieldToolTipsmarket_product_performance_original[""]["price_for_site"] = "";
	$placeHoldersmarket_product_performance_original[""]["price_for_site"] = "";
	$fieldLabelsmarket_product_performance_original[""]["disp_ichiba_img"] = "Disp Ichiba Img";
	$fieldToolTipsmarket_product_performance_original[""]["disp_ichiba_img"] = "";
	$placeHoldersmarket_product_performance_original[""]["disp_ichiba_img"] = "";
	$fieldLabelsmarket_product_performance_original[""]["sub_category_id"] = "Sub Category Id";
	$fieldToolTipsmarket_product_performance_original[""]["sub_category_id"] = "";
	$placeHoldersmarket_product_performance_original[""]["sub_category_id"] = "";
	$fieldLabelsmarket_product_performance_original[""]["product_num"] = "Product Num";
	$fieldToolTipsmarket_product_performance_original[""]["product_num"] = "";
	$placeHoldersmarket_product_performance_original[""]["product_num"] = "";
	$fieldLabelsmarket_product_performance_original[""]["product_id"] = "Product Id";
	$fieldToolTipsmarket_product_performance_original[""]["product_id"] = "";
	$placeHoldersmarket_product_performance_original[""]["product_id"] = "";
	$fieldLabelsmarket_product_performance_original[""]["shouhin_comment"] = "Shouhin Comment";
	$fieldToolTipsmarket_product_performance_original[""]["shouhin_comment"] = "";
	$placeHoldersmarket_product_performance_original[""]["shouhin_comment"] = "";
	$fieldLabelsmarket_product_performance_original[""]["use_satei"] = "Use Satei";
	$fieldToolTipsmarket_product_performance_original[""]["use_satei"] = "";
	$placeHoldersmarket_product_performance_original[""]["use_satei"] = "";
	$fieldLabelsmarket_product_performance_original[""]["ichiba_exhibition_id"] = "Ichiba Exhibition Id";
	$fieldToolTipsmarket_product_performance_original[""]["ichiba_exhibition_id"] = "";
	$placeHoldersmarket_product_performance_original[""]["ichiba_exhibition_id"] = "";
	$fieldLabelsmarket_product_performance_original[""]["box_id"] = "Box Id";
	$fieldToolTipsmarket_product_performance_original[""]["box_id"] = "";
	$placeHoldersmarket_product_performance_original[""]["box_id"] = "";
	$fieldLabelsmarket_product_performance_original[""]["item_name"] = "Item Name";
	$fieldToolTipsmarket_product_performance_original[""]["item_name"] = "";
	$placeHoldersmarket_product_performance_original[""]["item_name"] = "";
	$fieldLabelsmarket_product_performance_original[""]["yahoo_kataban"] = "Yahoo Kataban";
	$fieldToolTipsmarket_product_performance_original[""]["yahoo_kataban"] = "";
	$placeHoldersmarket_product_performance_original[""]["yahoo_kataban"] = "";
	$fieldLabelsmarket_product_performance_original[""]["yahoo_condition2"] = "Yahoo Condition2";
	$fieldToolTipsmarket_product_performance_original[""]["yahoo_condition2"] = "";
	$placeHoldersmarket_product_performance_original[""]["yahoo_condition2"] = "";
	$fieldLabelsmarket_product_performance_original[""]["market_shape"] = "Market Shape";
	$fieldToolTipsmarket_product_performance_original[""]["market_shape"] = "";
	$placeHoldersmarket_product_performance_original[""]["market_shape"] = "";
	$fieldLabelsmarket_product_performance_original[""]["market_category_id"] = "Market Category Id";
	$fieldToolTipsmarket_product_performance_original[""]["market_category_id"] = "";
	$placeHoldersmarket_product_performance_original[""]["market_category_id"] = "";
	$fieldLabelsmarket_product_performance_original[""]["market_gold_property"] = "Market Gold Property";
	$fieldToolTipsmarket_product_performance_original[""]["market_gold_property"] = "";
	$placeHoldersmarket_product_performance_original[""]["market_gold_property"] = "";
	$fieldLabelsmarket_product_performance_original[""]["market_sub_category_id1"] = "Market Sub Category Id1";
	$fieldToolTipsmarket_product_performance_original[""]["market_sub_category_id1"] = "";
	$placeHoldersmarket_product_performance_original[""]["market_sub_category_id1"] = "";
	$fieldLabelsmarket_product_performance_original[""]["price_per_parent_stone"] = "Price Per Parent Stone";
	$fieldToolTipsmarket_product_performance_original[""]["price_per_parent_stone"] = "";
	$placeHoldersmarket_product_performance_original[""]["price_per_parent_stone"] = "";
	$fieldLabelsmarket_product_performance_original[""]["price_per_aside_stone"] = "Price Per Aside Stone";
	$fieldToolTipsmarket_product_performance_original[""]["price_per_aside_stone"] = "";
	$placeHoldersmarket_product_performance_original[""]["price_per_aside_stone"] = "";
	$fieldLabelsmarket_product_performance_original[""]["gramgai"] = "Gramgai";
	$fieldToolTipsmarket_product_performance_original[""]["gramgai"] = "";
	$placeHoldersmarket_product_performance_original[""]["gramgai"] = "";
	$fieldLabelsmarket_product_performance_original[""]["colorstone_id"] = "Colorstone Id";
	$fieldToolTipsmarket_product_performance_original[""]["colorstone_id"] = "";
	$placeHoldersmarket_product_performance_original[""]["colorstone_id"] = "";
	$fieldLabelsmarket_product_performance_original[""]["category_class"] = "Category Class";
	$fieldToolTipsmarket_product_performance_original[""]["category_class"] = "";
	$placeHoldersmarket_product_performance_original[""]["category_class"] = "";
	$fieldLabelsmarket_product_performance_original[""]["search_word"] = "Search Word";
	$fieldToolTipsmarket_product_performance_original[""]["search_word"] = "";
	$placeHoldersmarket_product_performance_original[""]["search_word"] = "";
	$fieldLabelsmarket_product_performance_original[""]["sales_date"] = "Sales Date";
	$fieldToolTipsmarket_product_performance_original[""]["sales_date"] = "";
	$placeHoldersmarket_product_performance_original[""]["sales_date"] = "";
	if (count($fieldToolTipsmarket_product_performance_original[""]))
		$tdatamarket_product_performance_original[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmarket_product_performance_original["English"] = array();
	$fieldToolTipsmarket_product_performance_original["English"] = array();
	$placeHoldersmarket_product_performance_original["English"] = array();
	$pageTitlesmarket_product_performance_original["English"] = array();
	$fieldLabelsmarket_product_performance_original["English"]["id"] = "Id";
	$fieldToolTipsmarket_product_performance_original["English"]["id"] = "";
	$placeHoldersmarket_product_performance_original["English"]["id"] = "";
	$fieldLabelsmarket_product_performance_original["English"]["ichiba_meeting_month"] = "Ichiba Meeting Month";
	$fieldToolTipsmarket_product_performance_original["English"]["ichiba_meeting_month"] = "";
	$placeHoldersmarket_product_performance_original["English"]["ichiba_meeting_month"] = "";
	$fieldLabelsmarket_product_performance_original["English"]["ichiba_meeting_name"] = "Ichiba Meeting Name";
	$fieldToolTipsmarket_product_performance_original["English"]["ichiba_meeting_name"] = "";
	$placeHoldersmarket_product_performance_original["English"]["ichiba_meeting_name"] = "";
	$fieldLabelsmarket_product_performance_original["English"]["shape"] = "Shape";
	$fieldToolTipsmarket_product_performance_original["English"]["shape"] = "";
	$placeHoldersmarket_product_performance_original["English"]["shape"] = "";
	$fieldLabelsmarket_product_performance_original["English"]["color_quality"] = "Color Quality";
	$fieldToolTipsmarket_product_performance_original["English"]["color_quality"] = "";
	$placeHoldersmarket_product_performance_original["English"]["color_quality"] = "";
	$fieldLabelsmarket_product_performance_original["English"]["defect_quality"] = "Defect Quality";
	$fieldToolTipsmarket_product_performance_original["English"]["defect_quality"] = "";
	$placeHoldersmarket_product_performance_original["English"]["defect_quality"] = "";
	$fieldLabelsmarket_product_performance_original["English"]["category_id"] = "Category Id";
	$fieldToolTipsmarket_product_performance_original["English"]["category_id"] = "";
	$placeHoldersmarket_product_performance_original["English"]["category_id"] = "";
	$fieldLabelsmarket_product_performance_original["English"]["ichiba_detail"] = "Ichiba Detail";
	$fieldToolTipsmarket_product_performance_original["English"]["ichiba_detail"] = "";
	$placeHoldersmarket_product_performance_original["English"]["ichiba_detail"] = "";
	$fieldLabelsmarket_product_performance_original["English"]["gold_property"] = "Gold Property";
	$fieldToolTipsmarket_product_performance_original["English"]["gold_property"] = "";
	$placeHoldersmarket_product_performance_original["English"]["gold_property"] = "";
	$fieldLabelsmarket_product_performance_original["English"]["price_per_gram"] = "Price Per Gram";
	$fieldToolTipsmarket_product_performance_original["English"]["price_per_gram"] = "";
	$placeHoldersmarket_product_performance_original["English"]["price_per_gram"] = "";
	$fieldLabelsmarket_product_performance_original["English"]["Gram"] = "Gram";
	$fieldToolTipsmarket_product_performance_original["English"]["Gram"] = "";
	$placeHoldersmarket_product_performance_original["English"]["Gram"] = "";
	$fieldLabelsmarket_product_performance_original["English"]["Parent_stone"] = "Parent Stone";
	$fieldToolTipsmarket_product_performance_original["English"]["Parent_stone"] = "";
	$placeHoldersmarket_product_performance_original["English"]["Parent_stone"] = "";
	$fieldLabelsmarket_product_performance_original["English"]["Aside_stone"] = "Aside Stone";
	$fieldToolTipsmarket_product_performance_original["English"]["Aside_stone"] = "";
	$placeHoldersmarket_product_performance_original["English"]["Aside_stone"] = "";
	$fieldLabelsmarket_product_performance_original["English"]["ichiba_melee_gai"] = "Ichiba Melee Gai";
	$fieldToolTipsmarket_product_performance_original["English"]["ichiba_melee_gai"] = "";
	$placeHoldersmarket_product_performance_original["English"]["ichiba_melee_gai"] = "";
	$fieldLabelsmarket_product_performance_original["English"]["Apparaiser"] = "Apparaiser";
	$fieldToolTipsmarket_product_performance_original["English"]["Apparaiser"] = "";
	$placeHoldersmarket_product_performance_original["English"]["Apparaiser"] = "";
	$fieldLabelsmarket_product_performance_original["English"]["zeinuki"] = "Zeinuki";
	$fieldToolTipsmarket_product_performance_original["English"]["zeinuki"] = "";
	$placeHoldersmarket_product_performance_original["English"]["zeinuki"] = "";
	$fieldLabelsmarket_product_performance_original["English"]["nyuukin_price"] = "Nyuukin Price";
	$fieldToolTipsmarket_product_performance_original["English"]["nyuukin_price"] = "";
	$placeHoldersmarket_product_performance_original["English"]["nyuukin_price"] = "";
	$fieldLabelsmarket_product_performance_original["English"]["ichiba_lot_pieces"] = "Ichiba Lot Pieces";
	$fieldToolTipsmarket_product_performance_original["English"]["ichiba_lot_pieces"] = "";
	$placeHoldersmarket_product_performance_original["English"]["ichiba_lot_pieces"] = "";
	$fieldLabelsmarket_product_performance_original["English"]["avg"] = "Avg";
	$fieldToolTipsmarket_product_performance_original["English"]["avg"] = "";
	$placeHoldersmarket_product_performance_original["English"]["avg"] = "";
	$fieldLabelsmarket_product_performance_original["English"]["comment"] = "Comment";
	$fieldToolTipsmarket_product_performance_original["English"]["comment"] = "";
	$placeHoldersmarket_product_performance_original["English"]["comment"] = "";
	$fieldLabelsmarket_product_performance_original["English"]["syuppinsya"] = "Syuppinsya";
	$fieldToolTipsmarket_product_performance_original["English"]["syuppinsya"] = "";
	$placeHoldersmarket_product_performance_original["English"]["syuppinsya"] = "";
	$fieldLabelsmarket_product_performance_original["English"]["DA_YOURNAME"] = "DA YOURNAME";
	$fieldToolTipsmarket_product_performance_original["English"]["DA_YOURNAME"] = "";
	$placeHoldersmarket_product_performance_original["English"]["DA_YOURNAME"] = "";
	$fieldLabelsmarket_product_performance_original["English"]["ichiba_img"] = "Ichiba Img";
	$fieldToolTipsmarket_product_performance_original["English"]["ichiba_img"] = "";
	$placeHoldersmarket_product_performance_original["English"]["ichiba_img"] = "";
	$fieldLabelsmarket_product_performance_original["English"]["charagai"] = "Charagai";
	$fieldToolTipsmarket_product_performance_original["English"]["charagai"] = "";
	$placeHoldersmarket_product_performance_original["English"]["charagai"] = "";
	$fieldLabelsmarket_product_performance_original["English"]["price_without_tax"] = "Price Without Tax";
	$fieldToolTipsmarket_product_performance_original["English"]["price_without_tax"] = "";
	$placeHoldersmarket_product_performance_original["English"]["price_without_tax"] = "";
	$fieldLabelsmarket_product_performance_original["English"]["price"] = "Price";
	$fieldToolTipsmarket_product_performance_original["English"]["price"] = "";
	$placeHoldersmarket_product_performance_original["English"]["price"] = "";
	$fieldLabelsmarket_product_performance_original["English"]["sagaku"] = "Sagaku";
	$fieldToolTipsmarket_product_performance_original["English"]["sagaku"] = "";
	$placeHoldersmarket_product_performance_original["English"]["sagaku"] = "";
	$fieldLabelsmarket_product_performance_original["English"]["arari"] = "Arari";
	$fieldToolTipsmarket_product_performance_original["English"]["arari"] = "";
	$placeHoldersmarket_product_performance_original["English"]["arari"] = "";
	$fieldLabelsmarket_product_performance_original["English"]["ichiba_detail_dev"] = "Ichiba Detail Dev";
	$fieldToolTipsmarket_product_performance_original["English"]["ichiba_detail_dev"] = "";
	$placeHoldersmarket_product_performance_original["English"]["ichiba_detail_dev"] = "";
	$fieldLabelsmarket_product_performance_original["English"]["updated_at"] = "Updated At";
	$fieldToolTipsmarket_product_performance_original["English"]["updated_at"] = "";
	$placeHoldersmarket_product_performance_original["English"]["updated_at"] = "";
	$fieldLabelsmarket_product_performance_original["English"]["updated_by"] = "Updated By";
	$fieldToolTipsmarket_product_performance_original["English"]["updated_by"] = "";
	$placeHoldersmarket_product_performance_original["English"]["updated_by"] = "";
	$fieldLabelsmarket_product_performance_original["English"]["created_at"] = "Created At";
	$fieldToolTipsmarket_product_performance_original["English"]["created_at"] = "";
	$placeHoldersmarket_product_performance_original["English"]["created_at"] = "";
	$fieldLabelsmarket_product_performance_original["English"]["created_by"] = "Created By";
	$fieldToolTipsmarket_product_performance_original["English"]["created_by"] = "";
	$placeHoldersmarket_product_performance_original["English"]["created_by"] = "";
	$fieldLabelsmarket_product_performance_original["English"]["front_hidden_flg"] = "Front Hidden Flg";
	$fieldToolTipsmarket_product_performance_original["English"]["front_hidden_flg"] = "";
	$placeHoldersmarket_product_performance_original["English"]["front_hidden_flg"] = "";
	$fieldLabelsmarket_product_performance_original["English"]["price_for_site"] = "Price For Site";
	$fieldToolTipsmarket_product_performance_original["English"]["price_for_site"] = "";
	$placeHoldersmarket_product_performance_original["English"]["price_for_site"] = "";
	$fieldLabelsmarket_product_performance_original["English"]["disp_ichiba_img"] = "Disp Ichiba Img";
	$fieldToolTipsmarket_product_performance_original["English"]["disp_ichiba_img"] = "";
	$placeHoldersmarket_product_performance_original["English"]["disp_ichiba_img"] = "";
	$fieldLabelsmarket_product_performance_original["English"]["sub_category_id"] = "Sub Category Id";
	$fieldToolTipsmarket_product_performance_original["English"]["sub_category_id"] = "";
	$placeHoldersmarket_product_performance_original["English"]["sub_category_id"] = "";
	$fieldLabelsmarket_product_performance_original["English"]["product_num"] = "Product Num";
	$fieldToolTipsmarket_product_performance_original["English"]["product_num"] = "";
	$placeHoldersmarket_product_performance_original["English"]["product_num"] = "";
	$fieldLabelsmarket_product_performance_original["English"]["product_id"] = "Product Id";
	$fieldToolTipsmarket_product_performance_original["English"]["product_id"] = "";
	$placeHoldersmarket_product_performance_original["English"]["product_id"] = "";
	$fieldLabelsmarket_product_performance_original["English"]["shouhin_comment"] = "Shouhin Comment";
	$fieldToolTipsmarket_product_performance_original["English"]["shouhin_comment"] = "";
	$placeHoldersmarket_product_performance_original["English"]["shouhin_comment"] = "";
	$fieldLabelsmarket_product_performance_original["English"]["use_satei"] = "Use Satei";
	$fieldToolTipsmarket_product_performance_original["English"]["use_satei"] = "";
	$placeHoldersmarket_product_performance_original["English"]["use_satei"] = "";
	$fieldLabelsmarket_product_performance_original["English"]["ichiba_exhibition_id"] = "Ichiba Exhibition Id";
	$fieldToolTipsmarket_product_performance_original["English"]["ichiba_exhibition_id"] = "";
	$placeHoldersmarket_product_performance_original["English"]["ichiba_exhibition_id"] = "";
	$fieldLabelsmarket_product_performance_original["English"]["box_id"] = "Box Id";
	$fieldToolTipsmarket_product_performance_original["English"]["box_id"] = "";
	$placeHoldersmarket_product_performance_original["English"]["box_id"] = "";
	$fieldLabelsmarket_product_performance_original["English"]["item_name"] = "Item Name";
	$fieldToolTipsmarket_product_performance_original["English"]["item_name"] = "";
	$placeHoldersmarket_product_performance_original["English"]["item_name"] = "";
	$fieldLabelsmarket_product_performance_original["English"]["yahoo_kataban"] = "Yahoo Kataban";
	$fieldToolTipsmarket_product_performance_original["English"]["yahoo_kataban"] = "";
	$placeHoldersmarket_product_performance_original["English"]["yahoo_kataban"] = "";
	$fieldLabelsmarket_product_performance_original["English"]["yahoo_condition2"] = "Yahoo Condition2";
	$fieldToolTipsmarket_product_performance_original["English"]["yahoo_condition2"] = "";
	$placeHoldersmarket_product_performance_original["English"]["yahoo_condition2"] = "";
	$fieldLabelsmarket_product_performance_original["English"]["market_shape"] = "Market Shape";
	$fieldToolTipsmarket_product_performance_original["English"]["market_shape"] = "";
	$placeHoldersmarket_product_performance_original["English"]["market_shape"] = "";
	$fieldLabelsmarket_product_performance_original["English"]["market_category_id"] = "Market Category Id";
	$fieldToolTipsmarket_product_performance_original["English"]["market_category_id"] = "";
	$placeHoldersmarket_product_performance_original["English"]["market_category_id"] = "";
	$fieldLabelsmarket_product_performance_original["English"]["market_gold_property"] = "Market Gold Property";
	$fieldToolTipsmarket_product_performance_original["English"]["market_gold_property"] = "";
	$placeHoldersmarket_product_performance_original["English"]["market_gold_property"] = "";
	$fieldLabelsmarket_product_performance_original["English"]["market_sub_category_id1"] = "Market Sub Category Id1";
	$fieldToolTipsmarket_product_performance_original["English"]["market_sub_category_id1"] = "";
	$placeHoldersmarket_product_performance_original["English"]["market_sub_category_id1"] = "";
	$fieldLabelsmarket_product_performance_original["English"]["price_per_parent_stone"] = "Price Per Parent Stone";
	$fieldToolTipsmarket_product_performance_original["English"]["price_per_parent_stone"] = "";
	$placeHoldersmarket_product_performance_original["English"]["price_per_parent_stone"] = "";
	$fieldLabelsmarket_product_performance_original["English"]["price_per_aside_stone"] = "Price Per Aside Stone";
	$fieldToolTipsmarket_product_performance_original["English"]["price_per_aside_stone"] = "";
	$placeHoldersmarket_product_performance_original["English"]["price_per_aside_stone"] = "";
	$fieldLabelsmarket_product_performance_original["English"]["gramgai"] = "Gramgai";
	$fieldToolTipsmarket_product_performance_original["English"]["gramgai"] = "";
	$placeHoldersmarket_product_performance_original["English"]["gramgai"] = "";
	$fieldLabelsmarket_product_performance_original["English"]["colorstone_id"] = "Colorstone Id";
	$fieldToolTipsmarket_product_performance_original["English"]["colorstone_id"] = "";
	$placeHoldersmarket_product_performance_original["English"]["colorstone_id"] = "";
	$fieldLabelsmarket_product_performance_original["English"]["category_class"] = "Category Class";
	$fieldToolTipsmarket_product_performance_original["English"]["category_class"] = "";
	$placeHoldersmarket_product_performance_original["English"]["category_class"] = "";
	$fieldLabelsmarket_product_performance_original["English"]["search_word"] = "Search Word";
	$fieldToolTipsmarket_product_performance_original["English"]["search_word"] = "";
	$placeHoldersmarket_product_performance_original["English"]["search_word"] = "";
	$fieldLabelsmarket_product_performance_original["English"]["sales_date"] = "Sales Date";
	$fieldToolTipsmarket_product_performance_original["English"]["sales_date"] = "";
	$placeHoldersmarket_product_performance_original["English"]["sales_date"] = "";
	if (count($fieldToolTipsmarket_product_performance_original["English"]))
		$tdatamarket_product_performance_original[".isUseToolTips"] = true;
}


	$tdatamarket_product_performance_original[".NCSearch"] = true;



$tdatamarket_product_performance_original[".shortTableName"] = "market_product_performance_original";
$tdatamarket_product_performance_original[".nSecOptions"] = 0;
$tdatamarket_product_performance_original[".recsPerRowPrint"] = 1;
$tdatamarket_product_performance_original[".mainTableOwnerID"] = "";
$tdatamarket_product_performance_original[".moveNext"] = 1;
$tdatamarket_product_performance_original[".entityType"] = 0;

$tdatamarket_product_performance_original[".strOriginalTableName"] = "market_product_performance_original";

	



$tdatamarket_product_performance_original[".showAddInPopup"] = false;

$tdatamarket_product_performance_original[".showEditInPopup"] = false;

$tdatamarket_product_performance_original[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamarket_product_performance_original[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamarket_product_performance_original[".fieldsForRegister"] = array();

$tdatamarket_product_performance_original[".listAjax"] = false;

	$tdatamarket_product_performance_original[".audit"] = true;

	$tdatamarket_product_performance_original[".locking"] = false;



$tdatamarket_product_performance_original[".list"] = true;

$tdatamarket_product_performance_original[".inlineEdit"] = true;


$tdatamarket_product_performance_original[".reorderRecordsByHeader"] = true;



$tdatamarket_product_performance_original[".inlineAdd"] = true;

$tdatamarket_product_performance_original[".import"] = true;

$tdatamarket_product_performance_original[".exportTo"] = true;


$tdatamarket_product_performance_original[".delete"] = true;

$tdatamarket_product_performance_original[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamarket_product_performance_original[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamarket_product_performance_original[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamarket_product_performance_original[".searchSaving"] = false;
//

$tdatamarket_product_performance_original[".showSearchPanel"] = true;
		$tdatamarket_product_performance_original[".flexibleSearch"] = true;

$tdatamarket_product_performance_original[".isUseAjaxSuggest"] = true;

$tdatamarket_product_performance_original[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatamarket_product_performance_original[".ajaxCodeSnippetAdded"] = false;

$tdatamarket_product_performance_original[".buttonsAdded"] = false;

$tdatamarket_product_performance_original[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamarket_product_performance_original[".isUseTimeForSearch"] = false;





$tdatamarket_product_performance_original[".allSearchFields"] = array();
$tdatamarket_product_performance_original[".filterFields"] = array();
$tdatamarket_product_performance_original[".requiredSearchFields"] = array();

$tdatamarket_product_performance_original[".allSearchFields"][] = "search_word";
	$tdatamarket_product_performance_original[".allSearchFields"][] = "colorstone_id";
	$tdatamarket_product_performance_original[".allSearchFields"][] = "sales_date";
	$tdatamarket_product_performance_original[".allSearchFields"][] = "use_satei";
	$tdatamarket_product_performance_original[".allSearchFields"][] = "front_hidden_flg";
	$tdatamarket_product_performance_original[".allSearchFields"][] = "Gram";
	$tdatamarket_product_performance_original[".allSearchFields"][] = "Parent_stone";
	$tdatamarket_product_performance_original[".allSearchFields"][] = "Aside_stone";
	$tdatamarket_product_performance_original[".allSearchFields"][] = "charagai";
	$tdatamarket_product_performance_original[".allSearchFields"][] = "gramgai";
	$tdatamarket_product_performance_original[".allSearchFields"][] = "disp_ichiba_img";
	$tdatamarket_product_performance_original[".allSearchFields"][] = "id";
	$tdatamarket_product_performance_original[".allSearchFields"][] = "product_id";
	$tdatamarket_product_performance_original[".allSearchFields"][] = "box_id";
	$tdatamarket_product_performance_original[".allSearchFields"][] = "ichiba_exhibition_id";
	$tdatamarket_product_performance_original[".allSearchFields"][] = "ichiba_meeting_month";
	$tdatamarket_product_performance_original[".allSearchFields"][] = "ichiba_meeting_name";
	$tdatamarket_product_performance_original[".allSearchFields"][] = "shouhin_comment";
	$tdatamarket_product_performance_original[".allSearchFields"][] = "ichiba_detail";
	$tdatamarket_product_performance_original[".allSearchFields"][] = "comment";
	$tdatamarket_product_performance_original[".allSearchFields"][] = "price_for_site";
	$tdatamarket_product_performance_original[".allSearchFields"][] = "zeinuki";
	$tdatamarket_product_performance_original[".allSearchFields"][] = "ichiba_melee_gai";
	$tdatamarket_product_performance_original[".allSearchFields"][] = "ichiba_img";
	$tdatamarket_product_performance_original[".allSearchFields"][] = "item_name";
	$tdatamarket_product_performance_original[".allSearchFields"][] = "yahoo_kataban";
	$tdatamarket_product_performance_original[".allSearchFields"][] = "yahoo_condition2";
	$tdatamarket_product_performance_original[".allSearchFields"][] = "product_num";
	$tdatamarket_product_performance_original[".allSearchFields"][] = "category_class";
	$tdatamarket_product_performance_original[".allSearchFields"][] = "category_id";
	$tdatamarket_product_performance_original[".allSearchFields"][] = "market_category_id";
	$tdatamarket_product_performance_original[".allSearchFields"][] = "sub_category_id";
	$tdatamarket_product_performance_original[".allSearchFields"][] = "market_sub_category_id1";
	$tdatamarket_product_performance_original[".allSearchFields"][] = "gold_property";
	$tdatamarket_product_performance_original[".allSearchFields"][] = "market_gold_property";
	$tdatamarket_product_performance_original[".allSearchFields"][] = "shape";
	$tdatamarket_product_performance_original[".allSearchFields"][] = "market_shape";
	$tdatamarket_product_performance_original[".allSearchFields"][] = "color_quality";
	$tdatamarket_product_performance_original[".allSearchFields"][] = "defect_quality";
	$tdatamarket_product_performance_original[".allSearchFields"][] = "price_per_aside_stone";
	$tdatamarket_product_performance_original[".allSearchFields"][] = "price_per_parent_stone";
	$tdatamarket_product_performance_original[".allSearchFields"][] = "price_per_gram";
	$tdatamarket_product_performance_original[".allSearchFields"][] = "Apparaiser";
	$tdatamarket_product_performance_original[".allSearchFields"][] = "ichiba_lot_pieces";
	$tdatamarket_product_performance_original[".allSearchFields"][] = "avg";
	$tdatamarket_product_performance_original[".allSearchFields"][] = "price";
	$tdatamarket_product_performance_original[".allSearchFields"][] = "price_without_tax";
	$tdatamarket_product_performance_original[".allSearchFields"][] = "sagaku";
	$tdatamarket_product_performance_original[".allSearchFields"][] = "arari";
	$tdatamarket_product_performance_original[".allSearchFields"][] = "syuppinsya";
	$tdatamarket_product_performance_original[".allSearchFields"][] = "DA_YOURNAME";
	$tdatamarket_product_performance_original[".allSearchFields"][] = "updated_at";
	$tdatamarket_product_performance_original[".allSearchFields"][] = "updated_by";
	$tdatamarket_product_performance_original[".allSearchFields"][] = "created_at";
	$tdatamarket_product_performance_original[".allSearchFields"][] = "created_by";
	

$tdatamarket_product_performance_original[".googleLikeFields"] = array();
$tdatamarket_product_performance_original[".googleLikeFields"][] = "id";
$tdatamarket_product_performance_original[".googleLikeFields"][] = "product_id";
$tdatamarket_product_performance_original[".googleLikeFields"][] = "gold_property";
$tdatamarket_product_performance_original[".googleLikeFields"][] = "category_id";
$tdatamarket_product_performance_original[".googleLikeFields"][] = "sub_category_id";
$tdatamarket_product_performance_original[".googleLikeFields"][] = "shape";
$tdatamarket_product_performance_original[".googleLikeFields"][] = "Gram";
$tdatamarket_product_performance_original[".googleLikeFields"][] = "Parent_stone";
$tdatamarket_product_performance_original[".googleLikeFields"][] = "Aside_stone";
$tdatamarket_product_performance_original[".googleLikeFields"][] = "shouhin_comment";
$tdatamarket_product_performance_original[".googleLikeFields"][] = "product_num";
$tdatamarket_product_performance_original[".googleLikeFields"][] = "ichiba_exhibition_id";
$tdatamarket_product_performance_original[".googleLikeFields"][] = "box_id";
$tdatamarket_product_performance_original[".googleLikeFields"][] = "item_name";
$tdatamarket_product_performance_original[".googleLikeFields"][] = "yahoo_kataban";
$tdatamarket_product_performance_original[".googleLikeFields"][] = "yahoo_condition2";
$tdatamarket_product_performance_original[".googleLikeFields"][] = "ichiba_meeting_month";
$tdatamarket_product_performance_original[".googleLikeFields"][] = "ichiba_meeting_name";
$tdatamarket_product_performance_original[".googleLikeFields"][] = "color_quality";
$tdatamarket_product_performance_original[".googleLikeFields"][] = "defect_quality";
$tdatamarket_product_performance_original[".googleLikeFields"][] = "ichiba_detail";
$tdatamarket_product_performance_original[".googleLikeFields"][] = "ichiba_melee_gai";
$tdatamarket_product_performance_original[".googleLikeFields"][] = "Apparaiser";
$tdatamarket_product_performance_original[".googleLikeFields"][] = "zeinuki";
$tdatamarket_product_performance_original[".googleLikeFields"][] = "ichiba_lot_pieces";
$tdatamarket_product_performance_original[".googleLikeFields"][] = "avg";
$tdatamarket_product_performance_original[".googleLikeFields"][] = "syuppinsya";
$tdatamarket_product_performance_original[".googleLikeFields"][] = "DA_YOURNAME";
$tdatamarket_product_performance_original[".googleLikeFields"][] = "ichiba_img";
$tdatamarket_product_performance_original[".googleLikeFields"][] = "charagai";
$tdatamarket_product_performance_original[".googleLikeFields"][] = "price_without_tax";
$tdatamarket_product_performance_original[".googleLikeFields"][] = "price";
$tdatamarket_product_performance_original[".googleLikeFields"][] = "sagaku";
$tdatamarket_product_performance_original[".googleLikeFields"][] = "arari";
$tdatamarket_product_performance_original[".googleLikeFields"][] = "updated_at";
$tdatamarket_product_performance_original[".googleLikeFields"][] = "updated_by";
$tdatamarket_product_performance_original[".googleLikeFields"][] = "created_at";
$tdatamarket_product_performance_original[".googleLikeFields"][] = "created_by";
$tdatamarket_product_performance_original[".googleLikeFields"][] = "front_hidden_flg";
$tdatamarket_product_performance_original[".googleLikeFields"][] = "price_for_site";
$tdatamarket_product_performance_original[".googleLikeFields"][] = "disp_ichiba_img";
$tdatamarket_product_performance_original[".googleLikeFields"][] = "use_satei";
$tdatamarket_product_performance_original[".googleLikeFields"][] = "market_shape";
$tdatamarket_product_performance_original[".googleLikeFields"][] = "market_category_id";
$tdatamarket_product_performance_original[".googleLikeFields"][] = "market_gold_property";
$tdatamarket_product_performance_original[".googleLikeFields"][] = "market_sub_category_id1";
$tdatamarket_product_performance_original[".googleLikeFields"][] = "price_per_parent_stone";
$tdatamarket_product_performance_original[".googleLikeFields"][] = "price_per_aside_stone";
$tdatamarket_product_performance_original[".googleLikeFields"][] = "price_per_gram";
$tdatamarket_product_performance_original[".googleLikeFields"][] = "gramgai";
$tdatamarket_product_performance_original[".googleLikeFields"][] = "colorstone_id";
$tdatamarket_product_performance_original[".googleLikeFields"][] = "category_class";
$tdatamarket_product_performance_original[".googleLikeFields"][] = "search_word";
$tdatamarket_product_performance_original[".googleLikeFields"][] = "sales_date";

$tdatamarket_product_performance_original[".panelSearchFields"] = array();
$tdatamarket_product_performance_original[".searchPanelOptions"] = array();
$tdatamarket_product_performance_original[".panelSearchFields"][] = "search_word";
	$tdatamarket_product_performance_original[".panelSearchFields"][] = "colorstone_id";
	$tdatamarket_product_performance_original[".panelSearchFields"][] = "Parent_stone";
	$tdatamarket_product_performance_original[".panelSearchFields"][] = "Aside_stone";
	$tdatamarket_product_performance_original[".panelSearchFields"][] = "product_id";
	$tdatamarket_product_performance_original[".panelSearchFields"][] = "box_id";
	$tdatamarket_product_performance_original[".panelSearchFields"][] = "shouhin_comment";
	$tdatamarket_product_performance_original[".panelSearchFields"][] = "ichiba_detail";
	$tdatamarket_product_performance_original[".panelSearchFields"][] = "item_name";
	$tdatamarket_product_performance_original[".panelSearchFields"][] = "yahoo_kataban";
	$tdatamarket_product_performance_original[".panelSearchFields"][] = "product_num";
	$tdatamarket_product_performance_original[".panelSearchFields"][] = "category_id";
	$tdatamarket_product_performance_original[".panelSearchFields"][] = "sub_category_id";
	$tdatamarket_product_performance_original[".panelSearchFields"][] = "gold_property";
	
$tdatamarket_product_performance_original[".advSearchFields"] = array();
$tdatamarket_product_performance_original[".advSearchFields"][] = "search_word";
$tdatamarket_product_performance_original[".advSearchFields"][] = "colorstone_id";
$tdatamarket_product_performance_original[".advSearchFields"][] = "sales_date";
$tdatamarket_product_performance_original[".advSearchFields"][] = "use_satei";
$tdatamarket_product_performance_original[".advSearchFields"][] = "front_hidden_flg";
$tdatamarket_product_performance_original[".advSearchFields"][] = "Gram";
$tdatamarket_product_performance_original[".advSearchFields"][] = "Parent_stone";
$tdatamarket_product_performance_original[".advSearchFields"][] = "Aside_stone";
$tdatamarket_product_performance_original[".advSearchFields"][] = "charagai";
$tdatamarket_product_performance_original[".advSearchFields"][] = "gramgai";
$tdatamarket_product_performance_original[".advSearchFields"][] = "disp_ichiba_img";
$tdatamarket_product_performance_original[".advSearchFields"][] = "id";
$tdatamarket_product_performance_original[".advSearchFields"][] = "product_id";
$tdatamarket_product_performance_original[".advSearchFields"][] = "box_id";
$tdatamarket_product_performance_original[".advSearchFields"][] = "ichiba_exhibition_id";
$tdatamarket_product_performance_original[".advSearchFields"][] = "ichiba_meeting_month";
$tdatamarket_product_performance_original[".advSearchFields"][] = "ichiba_meeting_name";
$tdatamarket_product_performance_original[".advSearchFields"][] = "shouhin_comment";
$tdatamarket_product_performance_original[".advSearchFields"][] = "ichiba_detail";
$tdatamarket_product_performance_original[".advSearchFields"][] = "comment";
$tdatamarket_product_performance_original[".advSearchFields"][] = "price_for_site";
$tdatamarket_product_performance_original[".advSearchFields"][] = "zeinuki";
$tdatamarket_product_performance_original[".advSearchFields"][] = "ichiba_melee_gai";
$tdatamarket_product_performance_original[".advSearchFields"][] = "ichiba_img";
$tdatamarket_product_performance_original[".advSearchFields"][] = "item_name";
$tdatamarket_product_performance_original[".advSearchFields"][] = "yahoo_kataban";
$tdatamarket_product_performance_original[".advSearchFields"][] = "yahoo_condition2";
$tdatamarket_product_performance_original[".advSearchFields"][] = "product_num";
$tdatamarket_product_performance_original[".advSearchFields"][] = "category_class";
$tdatamarket_product_performance_original[".advSearchFields"][] = "category_id";
$tdatamarket_product_performance_original[".advSearchFields"][] = "market_category_id";
$tdatamarket_product_performance_original[".advSearchFields"][] = "sub_category_id";
$tdatamarket_product_performance_original[".advSearchFields"][] = "market_sub_category_id1";
$tdatamarket_product_performance_original[".advSearchFields"][] = "gold_property";
$tdatamarket_product_performance_original[".advSearchFields"][] = "market_gold_property";
$tdatamarket_product_performance_original[".advSearchFields"][] = "shape";
$tdatamarket_product_performance_original[".advSearchFields"][] = "market_shape";
$tdatamarket_product_performance_original[".advSearchFields"][] = "color_quality";
$tdatamarket_product_performance_original[".advSearchFields"][] = "defect_quality";
$tdatamarket_product_performance_original[".advSearchFields"][] = "price_per_aside_stone";
$tdatamarket_product_performance_original[".advSearchFields"][] = "price_per_parent_stone";
$tdatamarket_product_performance_original[".advSearchFields"][] = "price_per_gram";
$tdatamarket_product_performance_original[".advSearchFields"][] = "Apparaiser";
$tdatamarket_product_performance_original[".advSearchFields"][] = "ichiba_lot_pieces";
$tdatamarket_product_performance_original[".advSearchFields"][] = "avg";
$tdatamarket_product_performance_original[".advSearchFields"][] = "price";
$tdatamarket_product_performance_original[".advSearchFields"][] = "price_without_tax";
$tdatamarket_product_performance_original[".advSearchFields"][] = "sagaku";
$tdatamarket_product_performance_original[".advSearchFields"][] = "arari";
$tdatamarket_product_performance_original[".advSearchFields"][] = "syuppinsya";
$tdatamarket_product_performance_original[".advSearchFields"][] = "DA_YOURNAME";
$tdatamarket_product_performance_original[".advSearchFields"][] = "updated_at";
$tdatamarket_product_performance_original[".advSearchFields"][] = "updated_by";
$tdatamarket_product_performance_original[".advSearchFields"][] = "created_at";
$tdatamarket_product_performance_original[".advSearchFields"][] = "created_by";

$tdatamarket_product_performance_original[".tableType"] = "list";

$tdatamarket_product_performance_original[".printerPageOrientation"] = 0;
$tdatamarket_product_performance_original[".nPrinterPageScale"] = 100;

$tdatamarket_product_performance_original[".nPrinterSplitRecords"] = 40;

$tdatamarket_product_performance_original[".nPrinterPDFSplitRecords"] = 40;



$tdatamarket_product_performance_original[".geocodingEnabled"] = false;





$tdatamarket_product_performance_original[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamarket_product_performance_original[".pageSize"] = 20;

$tdatamarket_product_performance_original[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `market_product_performance_original`.`id` DESC, `market_product_performance_original`.`color_quality` DESC, `market_product_performance_original`.`defect_quality` DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamarket_product_performance_original[".strOrderBy"] = $tstrOrderBy;

$tdatamarket_product_performance_original[".orderindexes"] = array();
$tdatamarket_product_performance_original[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "`market_product_performance_original`.`id`");
$tdatamarket_product_performance_original[".orderindexes"][] = array(19, (0 ? "ASC" : "DESC"), "`market_product_performance_original`.`color_quality`");
$tdatamarket_product_performance_original[".orderindexes"][] = array(20, (0 ? "ASC" : "DESC"), "`market_product_performance_original`.`defect_quality`");

$tdatamarket_product_performance_original[".sqlHead"] = "SELECT `market_product_performance_original`.`id`,  `market_product_performance_original`.`product_id`,  case when `shouhin`.`product_id` > 0 then `shouhin`.`gold_property`  else `market_product_performance_original`.`gold_property`  end AS `gold_property`,  case when `shouhin`.`product_id` > 0 then `shouhin`.`category_id`  else `market_product_performance_original`.`category_id`  end AS `category_id`,  case when `shouhin`.`product_id` > 0 then `shouhin`.`sub_category_id1`  else `market_product_performance_original`.`sub_category_id`  end AS `sub_category_id`,  case when `shouhin`.`product_id` > 0 then `shouhin`.`shape`  else `market_product_performance_original`.`shape`  end AS `shape`,  case when `shouhin`.`product_id` > 0 then `shouhin`.`Gram`  else `market_product_performance_original`.`Gram`  end AS `Gram`,  case when `shouhin`.`product_id` > 0 then `shouhin`.`Parent_stone`  else `market_product_performance_original`.`Parent_stone`  end AS `Parent_stone`,  case when `shouhin`.`product_id` > 0 then `shouhin`.`Aside_stone`  else `market_product_performance_original`.`Aside_stone`  end AS `Aside_stone`,  `shouhin`.`comment` AS `shouhin_comment`,  `shouhin`.`product_num`,  `shouhin`.`ichiba_exhibition_id`,  `shouhin`.`box_id`,  `shouhin`.`item_name`,  `shouhin`.`yahoo_kataban`,  `shouhin`.`yahoo_condition2`,  `market_product_performance_original`.`ichiba_meeting_month`,  `market_product_performance_original`.`ichiba_meeting_name`,  `market_product_performance_original`.`color_quality`,  `market_product_performance_original`.`defect_quality`,  `market_product_performance_original`.`ichiba_detail`,  `market_product_performance_original`.`ichiba_melee_gai`,  `market_product_performance_original`.`Apparaiser`,  `market_product_performance_original`.`zeinuki`,  `market_product_performance_original`.`nyuukin_price`,  `market_product_performance_original`.`ichiba_lot_pieces`,  `market_product_performance_original`.`avg`,  `market_product_performance_original`.`comment`,  `market_product_performance_original`.`syuppinsya`,  `market_product_performance_original`.`DA_YOURNAME`,  `market_product_performance_original`.`ichiba_img`,  `market_product_performance_original`.`charagai`,  `market_product_performance_original`.`price_without_tax`,  `market_product_performance_original`.`price`,  `market_product_performance_original`.`sagaku`,  `market_product_performance_original`.`arari`,  `market_product_performance_original`.`ichiba_detail_dev`,  `market_product_performance_original`.`updated_at`,  `market_product_performance_original`.`updated_by`,  `market_product_performance_original`.`created_at`,  `market_product_performance_original`.`created_by`,  `market_product_performance_original`.`front_hidden_flg`,  `market_product_performance_original`.`price_for_site`,  `market_product_performance_original`.`ichiba_img` AS `disp_ichiba_img`,  `market_product_performance_original`.`use_satei`,  `market_product_performance_original`.`shape` AS `market_shape`,  `market_product_performance_original`.`category_id` AS `market_category_id`,  `market_product_performance_original`.`gold_property` AS `market_gold_property`,  `market_product_performance_original`.`sub_category_id` AS `market_sub_category_id1`,  `shouhin`.`price_per_parent_stone`,  `shouhin`.`price_per_aside_stone`,  `shouhin`.`price_per_gram`,  `market_product_performance_original`.`gramgai`,  `store_sub_categories`.`colorstone_id`,  case   	when `shouhin`.`product_id` > 0 then `store_sub_categories`.`category_class`  	when `shouhin`.`sub_category_id1` > 0 then `store_sub_categories`.`category_class`  	else '1'  end AS `category_class`,  CONCAT(IFNULL(`store_sub_categories`.`name`,''), IFNULL(`shouhin`.`comment`,''), IFNULL(`market_product_performance_original`.`comment`,''), IFNULL(`market_product_performance_original`.`ichiba_detail`,'')) as `search_word`,  `sales_report`.`sales_date`";
$tdatamarket_product_performance_original[".sqlFrom"] = "FROM `market_product_performance_original`  LEFT OUTER JOIN `shouhin` ON `market_product_performance_original`.`product_id` = `shouhin`.`product_id`  LEFT OUTER JOIN `store_sub_categories` ON `shouhin`.`sub_category_id1` = `store_sub_categories`.`id`  LEFT OUTER JOIN `sales_report` ON `shouhin`.`product_id` = `sales_report`.`product_id`";
$tdatamarket_product_performance_original[".sqlWhereExpr"] = "((`shouhin`.`sub_category_id1` != 839) AND (`shouhin`.`sub_category_id1` != 840)) OR (`shouhin`.`sub_category_id1` is null)";
$tdatamarket_product_performance_original[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamarket_product_performance_original[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamarket_product_performance_original[".arrGroupsPerPage"] = $arrGPP;

$tdatamarket_product_performance_original[".highlightSearchResults"] = true;

$tableKeysmarket_product_performance_original = array();
$tableKeysmarket_product_performance_original[] = "id";
$tdatamarket_product_performance_original[".Keys"] = $tableKeysmarket_product_performance_original;

$tdatamarket_product_performance_original[".listFields"] = array();
$tdatamarket_product_performance_original[".listFields"][] = "use_satei";
$tdatamarket_product_performance_original[".listFields"][] = "front_hidden_flg";
$tdatamarket_product_performance_original[".listFields"][] = "charagai";
$tdatamarket_product_performance_original[".listFields"][] = "gramgai";
$tdatamarket_product_performance_original[".listFields"][] = "id";
$tdatamarket_product_performance_original[".listFields"][] = "product_id";
$tdatamarket_product_performance_original[".listFields"][] = "box_id";
$tdatamarket_product_performance_original[".listFields"][] = "ichiba_exhibition_id";
$tdatamarket_product_performance_original[".listFields"][] = "ichiba_img";
$tdatamarket_product_performance_original[".listFields"][] = "disp_ichiba_img";
$tdatamarket_product_performance_original[".listFields"][] = "sales_date";
$tdatamarket_product_performance_original[".listFields"][] = "ichiba_meeting_month";
$tdatamarket_product_performance_original[".listFields"][] = "ichiba_meeting_name";
$tdatamarket_product_performance_original[".listFields"][] = "ichiba_detail";
$tdatamarket_product_performance_original[".listFields"][] = "price_for_site";
$tdatamarket_product_performance_original[".listFields"][] = "zeinuki";
$tdatamarket_product_performance_original[".listFields"][] = "ichiba_melee_gai";
$tdatamarket_product_performance_original[".listFields"][] = "item_name";
$tdatamarket_product_performance_original[".listFields"][] = "yahoo_kataban";
$tdatamarket_product_performance_original[".listFields"][] = "yahoo_condition2";
$tdatamarket_product_performance_original[".listFields"][] = "product_num";
$tdatamarket_product_performance_original[".listFields"][] = "category_class";
$tdatamarket_product_performance_original[".listFields"][] = "category_id";
$tdatamarket_product_performance_original[".listFields"][] = "market_category_id";
$tdatamarket_product_performance_original[".listFields"][] = "sub_category_id";
$tdatamarket_product_performance_original[".listFields"][] = "market_sub_category_id1";
$tdatamarket_product_performance_original[".listFields"][] = "gold_property";
$tdatamarket_product_performance_original[".listFields"][] = "market_gold_property";
$tdatamarket_product_performance_original[".listFields"][] = "shape";
$tdatamarket_product_performance_original[".listFields"][] = "market_shape";
$tdatamarket_product_performance_original[".listFields"][] = "color_quality";
$tdatamarket_product_performance_original[".listFields"][] = "defect_quality";
$tdatamarket_product_performance_original[".listFields"][] = "price_per_aside_stone";
$tdatamarket_product_performance_original[".listFields"][] = "price_per_parent_stone";
$tdatamarket_product_performance_original[".listFields"][] = "price_per_gram";
$tdatamarket_product_performance_original[".listFields"][] = "Gram";
$tdatamarket_product_performance_original[".listFields"][] = "Parent_stone";
$tdatamarket_product_performance_original[".listFields"][] = "Aside_stone";
$tdatamarket_product_performance_original[".listFields"][] = "Apparaiser";
$tdatamarket_product_performance_original[".listFields"][] = "ichiba_lot_pieces";
$tdatamarket_product_performance_original[".listFields"][] = "avg";
$tdatamarket_product_performance_original[".listFields"][] = "price";
$tdatamarket_product_performance_original[".listFields"][] = "price_without_tax";
$tdatamarket_product_performance_original[".listFields"][] = "shouhin_comment";
$tdatamarket_product_performance_original[".listFields"][] = "comment";
$tdatamarket_product_performance_original[".listFields"][] = "sagaku";
$tdatamarket_product_performance_original[".listFields"][] = "arari";
$tdatamarket_product_performance_original[".listFields"][] = "syuppinsya";
$tdatamarket_product_performance_original[".listFields"][] = "DA_YOURNAME";
$tdatamarket_product_performance_original[".listFields"][] = "updated_at";
$tdatamarket_product_performance_original[".listFields"][] = "updated_by";
$tdatamarket_product_performance_original[".listFields"][] = "created_at";
$tdatamarket_product_performance_original[".listFields"][] = "created_by";

$tdatamarket_product_performance_original[".hideMobileList"] = array();


$tdatamarket_product_performance_original[".viewFields"] = array();

$tdatamarket_product_performance_original[".addFields"] = array();

$tdatamarket_product_performance_original[".masterListFields"] = array();
$tdatamarket_product_performance_original[".masterListFields"][] = "search_word";
$tdatamarket_product_performance_original[".masterListFields"][] = "sales_date";
$tdatamarket_product_performance_original[".masterListFields"][] = "use_satei";
$tdatamarket_product_performance_original[".masterListFields"][] = "front_hidden_flg";
$tdatamarket_product_performance_original[".masterListFields"][] = "charagai";
$tdatamarket_product_performance_original[".masterListFields"][] = "gramgai";
$tdatamarket_product_performance_original[".masterListFields"][] = "disp_ichiba_img";
$tdatamarket_product_performance_original[".masterListFields"][] = "id";
$tdatamarket_product_performance_original[".masterListFields"][] = "product_id";
$tdatamarket_product_performance_original[".masterListFields"][] = "box_id";
$tdatamarket_product_performance_original[".masterListFields"][] = "ichiba_exhibition_id";
$tdatamarket_product_performance_original[".masterListFields"][] = "ichiba_meeting_month";
$tdatamarket_product_performance_original[".masterListFields"][] = "ichiba_meeting_name";
$tdatamarket_product_performance_original[".masterListFields"][] = "shouhin_comment";
$tdatamarket_product_performance_original[".masterListFields"][] = "ichiba_detail";
$tdatamarket_product_performance_original[".masterListFields"][] = "comment";
$tdatamarket_product_performance_original[".masterListFields"][] = "price_for_site";
$tdatamarket_product_performance_original[".masterListFields"][] = "zeinuki";
$tdatamarket_product_performance_original[".masterListFields"][] = "ichiba_melee_gai";
$tdatamarket_product_performance_original[".masterListFields"][] = "ichiba_img";
$tdatamarket_product_performance_original[".masterListFields"][] = "item_name";
$tdatamarket_product_performance_original[".masterListFields"][] = "yahoo_kataban";
$tdatamarket_product_performance_original[".masterListFields"][] = "yahoo_condition2";
$tdatamarket_product_performance_original[".masterListFields"][] = "product_num";
$tdatamarket_product_performance_original[".masterListFields"][] = "nyuukin_price";
$tdatamarket_product_performance_original[".masterListFields"][] = "category_class";
$tdatamarket_product_performance_original[".masterListFields"][] = "colorstone_id";
$tdatamarket_product_performance_original[".masterListFields"][] = "category_id";
$tdatamarket_product_performance_original[".masterListFields"][] = "market_category_id";
$tdatamarket_product_performance_original[".masterListFields"][] = "sub_category_id";
$tdatamarket_product_performance_original[".masterListFields"][] = "market_sub_category_id1";
$tdatamarket_product_performance_original[".masterListFields"][] = "gold_property";
$tdatamarket_product_performance_original[".masterListFields"][] = "ichiba_detail_dev";
$tdatamarket_product_performance_original[".masterListFields"][] = "market_gold_property";
$tdatamarket_product_performance_original[".masterListFields"][] = "shape";
$tdatamarket_product_performance_original[".masterListFields"][] = "market_shape";
$tdatamarket_product_performance_original[".masterListFields"][] = "color_quality";
$tdatamarket_product_performance_original[".masterListFields"][] = "defect_quality";
$tdatamarket_product_performance_original[".masterListFields"][] = "price_per_aside_stone";
$tdatamarket_product_performance_original[".masterListFields"][] = "price_per_parent_stone";
$tdatamarket_product_performance_original[".masterListFields"][] = "price_per_gram";
$tdatamarket_product_performance_original[".masterListFields"][] = "Gram";
$tdatamarket_product_performance_original[".masterListFields"][] = "Parent_stone";
$tdatamarket_product_performance_original[".masterListFields"][] = "Aside_stone";
$tdatamarket_product_performance_original[".masterListFields"][] = "Apparaiser";
$tdatamarket_product_performance_original[".masterListFields"][] = "ichiba_lot_pieces";
$tdatamarket_product_performance_original[".masterListFields"][] = "avg";
$tdatamarket_product_performance_original[".masterListFields"][] = "price";
$tdatamarket_product_performance_original[".masterListFields"][] = "price_without_tax";
$tdatamarket_product_performance_original[".masterListFields"][] = "sagaku";
$tdatamarket_product_performance_original[".masterListFields"][] = "arari";
$tdatamarket_product_performance_original[".masterListFields"][] = "syuppinsya";
$tdatamarket_product_performance_original[".masterListFields"][] = "DA_YOURNAME";
$tdatamarket_product_performance_original[".masterListFields"][] = "updated_at";
$tdatamarket_product_performance_original[".masterListFields"][] = "updated_by";
$tdatamarket_product_performance_original[".masterListFields"][] = "created_at";
$tdatamarket_product_performance_original[".masterListFields"][] = "created_by";

$tdatamarket_product_performance_original[".inlineAddFields"] = array();
$tdatamarket_product_performance_original[".inlineAddFields"][] = "use_satei";
$tdatamarket_product_performance_original[".inlineAddFields"][] = "front_hidden_flg";
$tdatamarket_product_performance_original[".inlineAddFields"][] = "charagai";
$tdatamarket_product_performance_original[".inlineAddFields"][] = "gramgai";
$tdatamarket_product_performance_original[".inlineAddFields"][] = "ichiba_img";
$tdatamarket_product_performance_original[".inlineAddFields"][] = "ichiba_meeting_month";
$tdatamarket_product_performance_original[".inlineAddFields"][] = "ichiba_meeting_name";
$tdatamarket_product_performance_original[".inlineAddFields"][] = "ichiba_detail";
$tdatamarket_product_performance_original[".inlineAddFields"][] = "price_for_site";
$tdatamarket_product_performance_original[".inlineAddFields"][] = "zeinuki";
$tdatamarket_product_performance_original[".inlineAddFields"][] = "ichiba_melee_gai";
$tdatamarket_product_performance_original[".inlineAddFields"][] = "market_category_id";
$tdatamarket_product_performance_original[".inlineAddFields"][] = "market_sub_category_id1";
$tdatamarket_product_performance_original[".inlineAddFields"][] = "market_gold_property";
$tdatamarket_product_performance_original[".inlineAddFields"][] = "market_shape";
$tdatamarket_product_performance_original[".inlineAddFields"][] = "color_quality";
$tdatamarket_product_performance_original[".inlineAddFields"][] = "defect_quality";
$tdatamarket_product_performance_original[".inlineAddFields"][] = "Apparaiser";
$tdatamarket_product_performance_original[".inlineAddFields"][] = "ichiba_lot_pieces";
$tdatamarket_product_performance_original[".inlineAddFields"][] = "price";
$tdatamarket_product_performance_original[".inlineAddFields"][] = "comment";
$tdatamarket_product_performance_original[".inlineAddFields"][] = "syuppinsya";
$tdatamarket_product_performance_original[".inlineAddFields"][] = "DA_YOURNAME";

$tdatamarket_product_performance_original[".editFields"] = array();

$tdatamarket_product_performance_original[".inlineEditFields"] = array();
$tdatamarket_product_performance_original[".inlineEditFields"][] = "use_satei";
$tdatamarket_product_performance_original[".inlineEditFields"][] = "front_hidden_flg";
$tdatamarket_product_performance_original[".inlineEditFields"][] = "charagai";
$tdatamarket_product_performance_original[".inlineEditFields"][] = "gramgai";
$tdatamarket_product_performance_original[".inlineEditFields"][] = "ichiba_img";
$tdatamarket_product_performance_original[".inlineEditFields"][] = "ichiba_meeting_month";
$tdatamarket_product_performance_original[".inlineEditFields"][] = "ichiba_meeting_name";
$tdatamarket_product_performance_original[".inlineEditFields"][] = "ichiba_detail";
$tdatamarket_product_performance_original[".inlineEditFields"][] = "price_for_site";
$tdatamarket_product_performance_original[".inlineEditFields"][] = "zeinuki";
$tdatamarket_product_performance_original[".inlineEditFields"][] = "ichiba_melee_gai";
$tdatamarket_product_performance_original[".inlineEditFields"][] = "market_category_id";
$tdatamarket_product_performance_original[".inlineEditFields"][] = "market_sub_category_id1";
$tdatamarket_product_performance_original[".inlineEditFields"][] = "market_gold_property";
$tdatamarket_product_performance_original[".inlineEditFields"][] = "market_shape";
$tdatamarket_product_performance_original[".inlineEditFields"][] = "color_quality";
$tdatamarket_product_performance_original[".inlineEditFields"][] = "defect_quality";
$tdatamarket_product_performance_original[".inlineEditFields"][] = "Apparaiser";
$tdatamarket_product_performance_original[".inlineEditFields"][] = "ichiba_lot_pieces";
$tdatamarket_product_performance_original[".inlineEditFields"][] = "price";
$tdatamarket_product_performance_original[".inlineEditFields"][] = "comment";
$tdatamarket_product_performance_original[".inlineEditFields"][] = "syuppinsya";
$tdatamarket_product_performance_original[".inlineEditFields"][] = "DA_YOURNAME";

$tdatamarket_product_performance_original[".updateSelectedFields"] = array();


$tdatamarket_product_performance_original[".exportFields"] = array();
$tdatamarket_product_performance_original[".exportFields"][] = "search_word";
$tdatamarket_product_performance_original[".exportFields"][] = "sales_date";
$tdatamarket_product_performance_original[".exportFields"][] = "use_satei";
$tdatamarket_product_performance_original[".exportFields"][] = "front_hidden_flg";
$tdatamarket_product_performance_original[".exportFields"][] = "charagai";
$tdatamarket_product_performance_original[".exportFields"][] = "gramgai";
$tdatamarket_product_performance_original[".exportFields"][] = "disp_ichiba_img";
$tdatamarket_product_performance_original[".exportFields"][] = "id";
$tdatamarket_product_performance_original[".exportFields"][] = "product_id";
$tdatamarket_product_performance_original[".exportFields"][] = "box_id";
$tdatamarket_product_performance_original[".exportFields"][] = "ichiba_exhibition_id";
$tdatamarket_product_performance_original[".exportFields"][] = "ichiba_meeting_month";
$tdatamarket_product_performance_original[".exportFields"][] = "ichiba_meeting_name";
$tdatamarket_product_performance_original[".exportFields"][] = "shouhin_comment";
$tdatamarket_product_performance_original[".exportFields"][] = "ichiba_detail";
$tdatamarket_product_performance_original[".exportFields"][] = "comment";
$tdatamarket_product_performance_original[".exportFields"][] = "price_for_site";
$tdatamarket_product_performance_original[".exportFields"][] = "zeinuki";
$tdatamarket_product_performance_original[".exportFields"][] = "ichiba_melee_gai";
$tdatamarket_product_performance_original[".exportFields"][] = "ichiba_img";
$tdatamarket_product_performance_original[".exportFields"][] = "item_name";
$tdatamarket_product_performance_original[".exportFields"][] = "yahoo_kataban";
$tdatamarket_product_performance_original[".exportFields"][] = "yahoo_condition2";
$tdatamarket_product_performance_original[".exportFields"][] = "product_num";
$tdatamarket_product_performance_original[".exportFields"][] = "category_class";
$tdatamarket_product_performance_original[".exportFields"][] = "colorstone_id";
$tdatamarket_product_performance_original[".exportFields"][] = "category_id";
$tdatamarket_product_performance_original[".exportFields"][] = "market_category_id";
$tdatamarket_product_performance_original[".exportFields"][] = "sub_category_id";
$tdatamarket_product_performance_original[".exportFields"][] = "market_sub_category_id1";
$tdatamarket_product_performance_original[".exportFields"][] = "gold_property";
$tdatamarket_product_performance_original[".exportFields"][] = "market_gold_property";
$tdatamarket_product_performance_original[".exportFields"][] = "shape";
$tdatamarket_product_performance_original[".exportFields"][] = "market_shape";
$tdatamarket_product_performance_original[".exportFields"][] = "color_quality";
$tdatamarket_product_performance_original[".exportFields"][] = "defect_quality";
$tdatamarket_product_performance_original[".exportFields"][] = "price_per_aside_stone";
$tdatamarket_product_performance_original[".exportFields"][] = "price_per_parent_stone";
$tdatamarket_product_performance_original[".exportFields"][] = "price_per_gram";
$tdatamarket_product_performance_original[".exportFields"][] = "Gram";
$tdatamarket_product_performance_original[".exportFields"][] = "Parent_stone";
$tdatamarket_product_performance_original[".exportFields"][] = "Aside_stone";
$tdatamarket_product_performance_original[".exportFields"][] = "Apparaiser";
$tdatamarket_product_performance_original[".exportFields"][] = "ichiba_lot_pieces";
$tdatamarket_product_performance_original[".exportFields"][] = "avg";
$tdatamarket_product_performance_original[".exportFields"][] = "price";
$tdatamarket_product_performance_original[".exportFields"][] = "price_without_tax";
$tdatamarket_product_performance_original[".exportFields"][] = "sagaku";
$tdatamarket_product_performance_original[".exportFields"][] = "arari";
$tdatamarket_product_performance_original[".exportFields"][] = "syuppinsya";
$tdatamarket_product_performance_original[".exportFields"][] = "DA_YOURNAME";
$tdatamarket_product_performance_original[".exportFields"][] = "updated_at";
$tdatamarket_product_performance_original[".exportFields"][] = "updated_by";
$tdatamarket_product_performance_original[".exportFields"][] = "created_at";
$tdatamarket_product_performance_original[".exportFields"][] = "created_by";

$tdatamarket_product_performance_original[".importFields"] = array();
$tdatamarket_product_performance_original[".importFields"][] = "id";
$tdatamarket_product_performance_original[".importFields"][] = "product_id";
$tdatamarket_product_performance_original[".importFields"][] = "gold_property";
$tdatamarket_product_performance_original[".importFields"][] = "category_id";
$tdatamarket_product_performance_original[".importFields"][] = "sub_category_id";
$tdatamarket_product_performance_original[".importFields"][] = "shape";
$tdatamarket_product_performance_original[".importFields"][] = "Gram";
$tdatamarket_product_performance_original[".importFields"][] = "Parent_stone";
$tdatamarket_product_performance_original[".importFields"][] = "Aside_stone";
$tdatamarket_product_performance_original[".importFields"][] = "shouhin_comment";
$tdatamarket_product_performance_original[".importFields"][] = "product_num";
$tdatamarket_product_performance_original[".importFields"][] = "ichiba_exhibition_id";
$tdatamarket_product_performance_original[".importFields"][] = "box_id";
$tdatamarket_product_performance_original[".importFields"][] = "item_name";
$tdatamarket_product_performance_original[".importFields"][] = "yahoo_kataban";
$tdatamarket_product_performance_original[".importFields"][] = "yahoo_condition2";
$tdatamarket_product_performance_original[".importFields"][] = "ichiba_meeting_month";
$tdatamarket_product_performance_original[".importFields"][] = "ichiba_meeting_name";
$tdatamarket_product_performance_original[".importFields"][] = "color_quality";
$tdatamarket_product_performance_original[".importFields"][] = "defect_quality";
$tdatamarket_product_performance_original[".importFields"][] = "ichiba_detail";
$tdatamarket_product_performance_original[".importFields"][] = "ichiba_melee_gai";
$tdatamarket_product_performance_original[".importFields"][] = "Apparaiser";
$tdatamarket_product_performance_original[".importFields"][] = "zeinuki";
$tdatamarket_product_performance_original[".importFields"][] = "ichiba_lot_pieces";
$tdatamarket_product_performance_original[".importFields"][] = "avg";
$tdatamarket_product_performance_original[".importFields"][] = "comment";
$tdatamarket_product_performance_original[".importFields"][] = "syuppinsya";
$tdatamarket_product_performance_original[".importFields"][] = "DA_YOURNAME";
$tdatamarket_product_performance_original[".importFields"][] = "ichiba_img";
$tdatamarket_product_performance_original[".importFields"][] = "charagai";
$tdatamarket_product_performance_original[".importFields"][] = "price_without_tax";
$tdatamarket_product_performance_original[".importFields"][] = "price";
$tdatamarket_product_performance_original[".importFields"][] = "sagaku";
$tdatamarket_product_performance_original[".importFields"][] = "arari";
$tdatamarket_product_performance_original[".importFields"][] = "updated_at";
$tdatamarket_product_performance_original[".importFields"][] = "updated_by";
$tdatamarket_product_performance_original[".importFields"][] = "created_at";
$tdatamarket_product_performance_original[".importFields"][] = "created_by";
$tdatamarket_product_performance_original[".importFields"][] = "front_hidden_flg";
$tdatamarket_product_performance_original[".importFields"][] = "price_for_site";
$tdatamarket_product_performance_original[".importFields"][] = "disp_ichiba_img";
$tdatamarket_product_performance_original[".importFields"][] = "use_satei";
$tdatamarket_product_performance_original[".importFields"][] = "market_shape";
$tdatamarket_product_performance_original[".importFields"][] = "market_category_id";
$tdatamarket_product_performance_original[".importFields"][] = "market_gold_property";
$tdatamarket_product_performance_original[".importFields"][] = "market_sub_category_id1";
$tdatamarket_product_performance_original[".importFields"][] = "price_per_parent_stone";
$tdatamarket_product_performance_original[".importFields"][] = "price_per_aside_stone";
$tdatamarket_product_performance_original[".importFields"][] = "price_per_gram";
$tdatamarket_product_performance_original[".importFields"][] = "gramgai";
$tdatamarket_product_performance_original[".importFields"][] = "colorstone_id";
$tdatamarket_product_performance_original[".importFields"][] = "category_class";
$tdatamarket_product_performance_original[".importFields"][] = "search_word";
$tdatamarket_product_performance_original[".importFields"][] = "sales_date";

$tdatamarket_product_performance_original[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "market_product_performance_original";
	$fdata["Label"] = GetFieldLabel("market_product_performance_original","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`market_product_performance_original`.`id`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

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




	$tdatamarket_product_performance_original["id"] = $fdata;
//	product_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "product_id";
	$fdata["GoodName"] = "product_id";
	$fdata["ownerTable"] = "market_product_performance_original";
	$fdata["Label"] = GetFieldLabel("market_product_performance_original","product_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "product_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`market_product_performance_original`.`product_id`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatamarket_product_performance_original["product_id"] = $fdata;
//	gold_property
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "gold_property";
	$fdata["GoodName"] = "gold_property";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("market_product_performance_original","gold_property");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "gold_property";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "case when `shouhin`.`product_id` > 0 then `shouhin`.`gold_property`  else `market_product_performance_original`.`gold_property`  end";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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
	$edata["LinkFieldType"] = 0;
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




	$tdatamarket_product_performance_original["gold_property"] = $fdata;
//	category_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "category_id";
	$fdata["GoodName"] = "category_id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("market_product_performance_original","category_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "category_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "case when `shouhin`.`product_id` > 0 then `shouhin`.`category_id`  else `market_product_performance_original`.`category_id`  end";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "category_name";

	
	$edata["LookupOrderBy"] = "sort";

	
	
	
	
				//dependent dropdowns
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "sub_category_id";
				//dependent dropdowns
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "market_sub_category_id1";

	
	
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




	$tdatamarket_product_performance_original["category_id"] = $fdata;
//	sub_category_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "sub_category_id";
	$fdata["GoodName"] = "sub_category_id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("market_product_performance_original","sub_category_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "sub_category_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "case when `shouhin`.`product_id` > 0 then `shouhin`.`sub_category_id1`  else `market_product_performance_original`.`sub_category_id`  end";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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
	$edata["LinkFieldType"] = 0;
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




	$tdatamarket_product_performance_original["sub_category_id"] = $fdata;
//	shape
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "shape";
	$fdata["GoodName"] = "shape";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("market_product_performance_original","shape");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "shape";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "case when `shouhin`.`product_id` > 0 then `shouhin`.`shape`  else `market_product_performance_original`.`shape`  end";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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




	$tdatamarket_product_performance_original["shape"] = $fdata;
//	Gram
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Gram";
	$fdata["GoodName"] = "Gram";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("market_product_performance_original","Gram");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Gram";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "case when `shouhin`.`product_id` > 0 then `shouhin`.`Gram`  else `market_product_performance_original`.`Gram`  end";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 1;

	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatamarket_product_performance_original["Gram"] = $fdata;
//	Parent_stone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Parent_stone";
	$fdata["GoodName"] = "Parent_stone";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("market_product_performance_original","Parent_stone");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Parent_stone";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "case when `shouhin`.`product_id` > 0 then `shouhin`.`Parent_stone`  else `market_product_performance_original`.`Parent_stone`  end";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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
		$fdata["defaultSearchOption"] = "More than";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatamarket_product_performance_original["Parent_stone"] = $fdata;
//	Aside_stone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Aside_stone";
	$fdata["GoodName"] = "Aside_stone";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("market_product_performance_original","Aside_stone");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Aside_stone";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "case when `shouhin`.`product_id` > 0 then `shouhin`.`Aside_stone`  else `market_product_performance_original`.`Aside_stone`  end";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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
		$fdata["defaultSearchOption"] = "More than";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatamarket_product_performance_original["Aside_stone"] = $fdata;
//	shouhin_comment
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "shouhin_comment";
	$fdata["GoodName"] = "shouhin_comment";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("market_product_performance_original","shouhin_comment");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdatamarket_product_performance_original["shouhin_comment"] = $fdata;
//	product_num
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "product_num";
	$fdata["GoodName"] = "product_num";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("market_product_performance_original","product_num");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "name";

	
	$edata["LookupOrderBy"] = "mst_band_title";

	
	
	
	

	
	
	
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




	$tdatamarket_product_performance_original["product_num"] = $fdata;
//	ichiba_exhibition_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "ichiba_exhibition_id";
	$fdata["GoodName"] = "ichiba_exhibition_id";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("market_product_performance_original","ichiba_exhibition_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ichiba_exhibition_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`ichiba_exhibition_id`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

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




	$tdatamarket_product_performance_original["ichiba_exhibition_id"] = $fdata;
//	box_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "box_id";
	$fdata["GoodName"] = "box_id";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("market_product_performance_original","box_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

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




	$tdatamarket_product_performance_original["box_id"] = $fdata;
//	item_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "item_name";
	$fdata["GoodName"] = "item_name";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("market_product_performance_original","item_name");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdatamarket_product_performance_original["item_name"] = $fdata;
//	yahoo_kataban
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "yahoo_kataban";
	$fdata["GoodName"] = "yahoo_kataban";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("market_product_performance_original","yahoo_kataban");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatamarket_product_performance_original["yahoo_kataban"] = $fdata;
//	yahoo_condition2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "yahoo_condition2";
	$fdata["GoodName"] = "yahoo_condition2";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("market_product_performance_original","yahoo_condition2");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdatamarket_product_performance_original["yahoo_condition2"] = $fdata;
//	ichiba_meeting_month
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "ichiba_meeting_month";
	$fdata["GoodName"] = "ichiba_meeting_month";
	$fdata["ownerTable"] = "market_product_performance_original";
	$fdata["Label"] = GetFieldLabel("market_product_performance_original","ichiba_meeting_month");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ichiba_meeting_month";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`market_product_performance_original`.`ichiba_meeting_month`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatamarket_product_performance_original["ichiba_meeting_month"] = $fdata;
//	ichiba_meeting_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "ichiba_meeting_name";
	$fdata["GoodName"] = "ichiba_meeting_name";
	$fdata["ownerTable"] = "market_product_performance_original";
	$fdata["Label"] = GetFieldLabel("market_product_performance_original","ichiba_meeting_name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ichiba_meeting_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`market_product_performance_original`.`ichiba_meeting_name`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatamarket_product_performance_original["ichiba_meeting_name"] = $fdata;
//	color_quality
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "color_quality";
	$fdata["GoodName"] = "color_quality";
	$fdata["ownerTable"] = "market_product_performance_original";
	$fdata["Label"] = GetFieldLabel("market_product_performance_original","color_quality");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "color_quality";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`market_product_performance_original`.`color_quality`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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
	$edata["LookupTable"] = "mst_quality";
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




	$tdatamarket_product_performance_original["color_quality"] = $fdata;
//	defect_quality
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "defect_quality";
	$fdata["GoodName"] = "defect_quality";
	$fdata["ownerTable"] = "market_product_performance_original";
	$fdata["Label"] = GetFieldLabel("market_product_performance_original","defect_quality");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "defect_quality";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`market_product_performance_original`.`defect_quality`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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
	$edata["LookupTable"] = "mst_quality";
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




	$tdatamarket_product_performance_original["defect_quality"] = $fdata;
//	ichiba_detail
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "ichiba_detail";
	$fdata["GoodName"] = "ichiba_detail";
	$fdata["ownerTable"] = "market_product_performance_original";
	$fdata["Label"] = GetFieldLabel("market_product_performance_original","ichiba_detail");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ichiba_detail";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`market_product_performance_original`.`ichiba_detail`";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdatamarket_product_performance_original["ichiba_detail"] = $fdata;
//	ichiba_melee_gai
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "ichiba_melee_gai";
	$fdata["GoodName"] = "ichiba_melee_gai";
	$fdata["ownerTable"] = "market_product_performance_original";
	$fdata["Label"] = GetFieldLabel("market_product_performance_original","ichiba_melee_gai");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ichiba_melee_gai";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`market_product_performance_original`.`ichiba_melee_gai`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatamarket_product_performance_original["ichiba_melee_gai"] = $fdata;
//	Apparaiser
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "Apparaiser";
	$fdata["GoodName"] = "Apparaiser";
	$fdata["ownerTable"] = "market_product_performance_original";
	$fdata["Label"] = GetFieldLabel("market_product_performance_original","Apparaiser");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Apparaiser";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`market_product_performance_original`.`Apparaiser`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
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




	$tdatamarket_product_performance_original["Apparaiser"] = $fdata;
//	zeinuki
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "zeinuki";
	$fdata["GoodName"] = "zeinuki";
	$fdata["ownerTable"] = "market_product_performance_original";
	$fdata["Label"] = GetFieldLabel("market_product_performance_original","zeinuki");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "zeinuki";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`market_product_performance_original`.`zeinuki`";

	
	
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




	$tdatamarket_product_performance_original["zeinuki"] = $fdata;
//	nyuukin_price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "nyuukin_price";
	$fdata["GoodName"] = "nyuukin_price";
	$fdata["ownerTable"] = "market_product_performance_original";
	$fdata["Label"] = GetFieldLabel("market_product_performance_original","nyuukin_price");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "nyuukin_price";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`market_product_performance_original`.`nyuukin_price`";

	
	
			
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








	$tdatamarket_product_performance_original["nyuukin_price"] = $fdata;
//	ichiba_lot_pieces
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "ichiba_lot_pieces";
	$fdata["GoodName"] = "ichiba_lot_pieces";
	$fdata["ownerTable"] = "market_product_performance_original";
	$fdata["Label"] = GetFieldLabel("market_product_performance_original","ichiba_lot_pieces");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ichiba_lot_pieces";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`market_product_performance_original`.`ichiba_lot_pieces`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatamarket_product_performance_original["ichiba_lot_pieces"] = $fdata;
//	avg
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "avg";
	$fdata["GoodName"] = "avg";
	$fdata["ownerTable"] = "market_product_performance_original";
	$fdata["Label"] = GetFieldLabel("market_product_performance_original","avg");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "avg";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`market_product_performance_original`.`avg`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatamarket_product_performance_original["avg"] = $fdata;
//	comment
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "comment";
	$fdata["GoodName"] = "comment";
	$fdata["ownerTable"] = "market_product_performance_original";
	$fdata["Label"] = GetFieldLabel("market_product_performance_original","comment");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "comment";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`market_product_performance_original`.`comment`";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdatamarket_product_performance_original["comment"] = $fdata;
//	syuppinsya
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "syuppinsya";
	$fdata["GoodName"] = "syuppinsya";
	$fdata["ownerTable"] = "market_product_performance_original";
	$fdata["Label"] = GetFieldLabel("market_product_performance_original","syuppinsya");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "syuppinsya";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`market_product_performance_original`.`syuppinsya`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatamarket_product_performance_original["syuppinsya"] = $fdata;
//	DA_YOURNAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "DA_YOURNAME";
	$fdata["GoodName"] = "DA_YOURNAME";
	$fdata["ownerTable"] = "market_product_performance_original";
	$fdata["Label"] = GetFieldLabel("market_product_performance_original","DA_YOURNAME");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DA_YOURNAME";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`market_product_performance_original`.`DA_YOURNAME`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatamarket_product_performance_original["DA_YOURNAME"] = $fdata;
//	ichiba_img
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "ichiba_img";
	$fdata["GoodName"] = "ichiba_img";
	$fdata["ownerTable"] = "market_product_performance_original";
	$fdata["Label"] = GetFieldLabel("market_product_performance_original","ichiba_img");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ichiba_img";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`market_product_performance_original`.`ichiba_img`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Document upload");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatamarket_product_performance_original["ichiba_img"] = $fdata;
//	charagai
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "charagai";
	$fdata["GoodName"] = "charagai";
	$fdata["ownerTable"] = "market_product_performance_original";
	$fdata["Label"] = GetFieldLabel("market_product_performance_original","charagai");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "charagai";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`market_product_performance_original`.`charagai`";

	
	
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




	$tdatamarket_product_performance_original["charagai"] = $fdata;
//	price_without_tax
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "price_without_tax";
	$fdata["GoodName"] = "price_without_tax";
	$fdata["ownerTable"] = "market_product_performance_original";
	$fdata["Label"] = GetFieldLabel("market_product_performance_original","price_without_tax");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "price_without_tax";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`market_product_performance_original`.`price_without_tax`";

	
	
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




	$tdatamarket_product_performance_original["price_without_tax"] = $fdata;
//	price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "price";
	$fdata["GoodName"] = "price";
	$fdata["ownerTable"] = "market_product_performance_original";
	$fdata["Label"] = GetFieldLabel("market_product_performance_original","price");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "price";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`market_product_performance_original`.`price`";

	
	
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




	$tdatamarket_product_performance_original["price"] = $fdata;
//	sagaku
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "sagaku";
	$fdata["GoodName"] = "sagaku";
	$fdata["ownerTable"] = "market_product_performance_original";
	$fdata["Label"] = GetFieldLabel("market_product_performance_original","sagaku");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "sagaku";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`market_product_performance_original`.`sagaku`";

	
	
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




	$tdatamarket_product_performance_original["sagaku"] = $fdata;
//	arari
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "arari";
	$fdata["GoodName"] = "arari";
	$fdata["ownerTable"] = "market_product_performance_original";
	$fdata["Label"] = GetFieldLabel("market_product_performance_original","arari");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "arari";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`market_product_performance_original`.`arari`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatamarket_product_performance_original["arari"] = $fdata;
//	ichiba_detail_dev
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "ichiba_detail_dev";
	$fdata["GoodName"] = "ichiba_detail_dev";
	$fdata["ownerTable"] = "market_product_performance_original";
	$fdata["Label"] = GetFieldLabel("market_product_performance_original","ichiba_detail_dev");
	$fdata["FieldType"] = 201;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "ichiba_detail_dev";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`market_product_performance_original`.`ichiba_detail_dev`";

	
	
			
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








	$tdatamarket_product_performance_original["ichiba_detail_dev"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "market_product_performance_original";
	$fdata["Label"] = GetFieldLabel("market_product_performance_original","updated_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "updated_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`market_product_performance_original`.`updated_at`";

	
	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdatamarket_product_performance_original["updated_at"] = $fdata;
//	updated_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "updated_by";
	$fdata["GoodName"] = "updated_by";
	$fdata["ownerTable"] = "market_product_performance_original";
	$fdata["Label"] = GetFieldLabel("market_product_performance_original","updated_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "updated_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`market_product_performance_original`.`updated_by`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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




	$tdatamarket_product_performance_original["updated_by"] = $fdata;
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "market_product_performance_original";
	$fdata["Label"] = GetFieldLabel("market_product_performance_original","created_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "created_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`market_product_performance_original`.`created_at`";

	
	
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




	$tdatamarket_product_performance_original["created_at"] = $fdata;
//	created_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "created_by";
	$fdata["GoodName"] = "created_by";
	$fdata["ownerTable"] = "market_product_performance_original";
	$fdata["Label"] = GetFieldLabel("market_product_performance_original","created_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "created_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`market_product_performance_original`.`created_by`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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




	$tdatamarket_product_performance_original["created_by"] = $fdata;
//	front_hidden_flg
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "front_hidden_flg";
	$fdata["GoodName"] = "front_hidden_flg";
	$fdata["ownerTable"] = "market_product_performance_original";
	$fdata["Label"] = GetFieldLabel("market_product_performance_original","front_hidden_flg");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "front_hidden_flg";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`market_product_performance_original`.`front_hidden_flg`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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
	$edata["LookupValues"][] = "True";
	$edata["LookupValues"][] = "False";

	
	
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




	$tdatamarket_product_performance_original["front_hidden_flg"] = $fdata;
//	price_for_site
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "price_for_site";
	$fdata["GoodName"] = "price_for_site";
	$fdata["ownerTable"] = "market_product_performance_original";
	$fdata["Label"] = GetFieldLabel("market_product_performance_original","price_for_site");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "price_for_site";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`market_product_performance_original`.`price_for_site`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatamarket_product_performance_original["price_for_site"] = $fdata;
//	disp_ichiba_img
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "disp_ichiba_img";
	$fdata["GoodName"] = "disp_ichiba_img";
	$fdata["ownerTable"] = "market_product_performance_original";
	$fdata["Label"] = GetFieldLabel("market_product_performance_original","disp_ichiba_img");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ichiba_img";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`market_product_performance_original`.`ichiba_img`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
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




	$tdatamarket_product_performance_original["disp_ichiba_img"] = $fdata;
//	use_satei
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "use_satei";
	$fdata["GoodName"] = "use_satei";
	$fdata["ownerTable"] = "market_product_performance_original";
	$fdata["Label"] = GetFieldLabel("market_product_performance_original","use_satei");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "use_satei";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`market_product_performance_original`.`use_satei`";

	
	
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




	$tdatamarket_product_performance_original["use_satei"] = $fdata;
//	market_shape
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "market_shape";
	$fdata["GoodName"] = "market_shape";
	$fdata["ownerTable"] = "market_product_performance_original";
	$fdata["Label"] = GetFieldLabel("market_product_performance_original","market_shape");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "shape";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`market_product_performance_original`.`shape`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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




	$tdatamarket_product_performance_original["market_shape"] = $fdata;
//	market_category_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 47;
	$fdata["strName"] = "market_category_id";
	$fdata["GoodName"] = "market_category_id";
	$fdata["ownerTable"] = "market_product_performance_original";
	$fdata["Label"] = GetFieldLabel("market_product_performance_original","market_category_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "category_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`market_product_performance_original`.`category_id`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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
	$edata["LinkFieldType"] = 0;
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




	$tdatamarket_product_performance_original["market_category_id"] = $fdata;
//	market_gold_property
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 48;
	$fdata["strName"] = "market_gold_property";
	$fdata["GoodName"] = "market_gold_property";
	$fdata["ownerTable"] = "market_product_performance_original";
	$fdata["Label"] = GetFieldLabel("market_product_performance_original","market_gold_property");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "gold_property";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`market_product_performance_original`.`gold_property`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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
	$edata["LinkFieldType"] = 0;
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




	$tdatamarket_product_performance_original["market_gold_property"] = $fdata;
//	market_sub_category_id1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 49;
	$fdata["strName"] = "market_sub_category_id1";
	$fdata["GoodName"] = "market_sub_category_id1";
	$fdata["ownerTable"] = "market_product_performance_original";
	$fdata["Label"] = GetFieldLabel("market_product_performance_original","market_sub_category_id1");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "sub_category_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`market_product_performance_original`.`sub_category_id`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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
	$edata["LinkFieldType"] = 0;
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




	$tdatamarket_product_performance_original["market_sub_category_id1"] = $fdata;
//	price_per_parent_stone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 50;
	$fdata["strName"] = "price_per_parent_stone";
	$fdata["GoodName"] = "price_per_parent_stone";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("market_product_performance_original","price_per_parent_stone");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdatamarket_product_performance_original["price_per_parent_stone"] = $fdata;
//	price_per_aside_stone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 51;
	$fdata["strName"] = "price_per_aside_stone";
	$fdata["GoodName"] = "price_per_aside_stone";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("market_product_performance_original","price_per_aside_stone");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdatamarket_product_performance_original["price_per_aside_stone"] = $fdata;
//	price_per_gram
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 52;
	$fdata["strName"] = "price_per_gram";
	$fdata["GoodName"] = "price_per_gram";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("market_product_performance_original","price_per_gram");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "price_per_gram";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`price_per_gram`";

	
	
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




	$tdatamarket_product_performance_original["price_per_gram"] = $fdata;
//	gramgai
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 53;
	$fdata["strName"] = "gramgai";
	$fdata["GoodName"] = "gramgai";
	$fdata["ownerTable"] = "market_product_performance_original";
	$fdata["Label"] = GetFieldLabel("market_product_performance_original","gramgai");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "gramgai";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`market_product_performance_original`.`gramgai`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatamarket_product_performance_original["gramgai"] = $fdata;
//	colorstone_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 54;
	$fdata["strName"] = "colorstone_id";
	$fdata["GoodName"] = "colorstone_id";
	$fdata["ownerTable"] = "store_sub_categories";
	$fdata["Label"] = GetFieldLabel("market_product_performance_original","colorstone_id");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "colorstone_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`store_sub_categories`.`colorstone_id`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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
	$edata["LookupTable"] = "mst_colorstone";
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




	$tdatamarket_product_performance_original["colorstone_id"] = $fdata;
//	category_class
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 55;
	$fdata["strName"] = "category_class";
	$fdata["GoodName"] = "category_class";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("market_product_performance_original","category_class");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "category_class";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "case   	when `shouhin`.`product_id` > 0 then `store_sub_categories`.`category_class`  	when `shouhin`.`sub_category_id1` > 0 then `store_sub_categories`.`category_class`  	else '1'  end";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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




	$tdatamarket_product_performance_original["category_class"] = $fdata;
//	search_word
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 56;
	$fdata["strName"] = "search_word";
	$fdata["GoodName"] = "search_word";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("market_product_performance_original","search_word");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "search_word";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CONCAT(IFNULL(`store_sub_categories`.`name`,''), IFNULL(`shouhin`.`comment`,''), IFNULL(`market_product_performance_original`.`comment`,''), IFNULL(`market_product_performance_original`.`ichiba_detail`,''))";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatamarket_product_performance_original["search_word"] = $fdata;
//	sales_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 57;
	$fdata["strName"] = "sales_date";
	$fdata["GoodName"] = "sales_date";
	$fdata["ownerTable"] = "sales_report";
	$fdata["Label"] = GetFieldLabel("market_product_performance_original","sales_date");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "sales_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`sales_report`.`sales_date`";

	
	
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




	$tdatamarket_product_performance_original["sales_date"] = $fdata;


$tables_data["market_product_performance_original"]=&$tdatamarket_product_performance_original;
$field_labels["market_product_performance_original"] = &$fieldLabelsmarket_product_performance_original;
$fieldToolTips["market_product_performance_original"] = &$fieldToolTipsmarket_product_performance_original;
$placeHolders["market_product_performance_original"] = &$placeHoldersmarket_product_performance_original;
$page_titles["market_product_performance_original"] = &$pageTitlesmarket_product_performance_original;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["market_product_performance_original"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["market_product_performance_original"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_market_product_performance_original()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`market_product_performance_original`.`id`,  `market_product_performance_original`.`product_id`,  case when `shouhin`.`product_id` > 0 then `shouhin`.`gold_property`  else `market_product_performance_original`.`gold_property`  end AS `gold_property`,  case when `shouhin`.`product_id` > 0 then `shouhin`.`category_id`  else `market_product_performance_original`.`category_id`  end AS `category_id`,  case when `shouhin`.`product_id` > 0 then `shouhin`.`sub_category_id1`  else `market_product_performance_original`.`sub_category_id`  end AS `sub_category_id`,  case when `shouhin`.`product_id` > 0 then `shouhin`.`shape`  else `market_product_performance_original`.`shape`  end AS `shape`,  case when `shouhin`.`product_id` > 0 then `shouhin`.`Gram`  else `market_product_performance_original`.`Gram`  end AS `Gram`,  case when `shouhin`.`product_id` > 0 then `shouhin`.`Parent_stone`  else `market_product_performance_original`.`Parent_stone`  end AS `Parent_stone`,  case when `shouhin`.`product_id` > 0 then `shouhin`.`Aside_stone`  else `market_product_performance_original`.`Aside_stone`  end AS `Aside_stone`,  `shouhin`.`comment` AS `shouhin_comment`,  `shouhin`.`product_num`,  `shouhin`.`ichiba_exhibition_id`,  `shouhin`.`box_id`,  `shouhin`.`item_name`,  `shouhin`.`yahoo_kataban`,  `shouhin`.`yahoo_condition2`,  `market_product_performance_original`.`ichiba_meeting_month`,  `market_product_performance_original`.`ichiba_meeting_name`,  `market_product_performance_original`.`color_quality`,  `market_product_performance_original`.`defect_quality`,  `market_product_performance_original`.`ichiba_detail`,  `market_product_performance_original`.`ichiba_melee_gai`,  `market_product_performance_original`.`Apparaiser`,  `market_product_performance_original`.`zeinuki`,  `market_product_performance_original`.`nyuukin_price`,  `market_product_performance_original`.`ichiba_lot_pieces`,  `market_product_performance_original`.`avg`,  `market_product_performance_original`.`comment`,  `market_product_performance_original`.`syuppinsya`,  `market_product_performance_original`.`DA_YOURNAME`,  `market_product_performance_original`.`ichiba_img`,  `market_product_performance_original`.`charagai`,  `market_product_performance_original`.`price_without_tax`,  `market_product_performance_original`.`price`,  `market_product_performance_original`.`sagaku`,  `market_product_performance_original`.`arari`,  `market_product_performance_original`.`ichiba_detail_dev`,  `market_product_performance_original`.`updated_at`,  `market_product_performance_original`.`updated_by`,  `market_product_performance_original`.`created_at`,  `market_product_performance_original`.`created_by`,  `market_product_performance_original`.`front_hidden_flg`,  `market_product_performance_original`.`price_for_site`,  `market_product_performance_original`.`ichiba_img` AS `disp_ichiba_img`,  `market_product_performance_original`.`use_satei`,  `market_product_performance_original`.`shape` AS `market_shape`,  `market_product_performance_original`.`category_id` AS `market_category_id`,  `market_product_performance_original`.`gold_property` AS `market_gold_property`,  `market_product_performance_original`.`sub_category_id` AS `market_sub_category_id1`,  `shouhin`.`price_per_parent_stone`,  `shouhin`.`price_per_aside_stone`,  `shouhin`.`price_per_gram`,  `market_product_performance_original`.`gramgai`,  `store_sub_categories`.`colorstone_id`,  case   	when `shouhin`.`product_id` > 0 then `store_sub_categories`.`category_class`  	when `shouhin`.`sub_category_id1` > 0 then `store_sub_categories`.`category_class`  	else '1'  end AS `category_class`,  CONCAT(IFNULL(`store_sub_categories`.`name`,''), IFNULL(`shouhin`.`comment`,''), IFNULL(`market_product_performance_original`.`comment`,''), IFNULL(`market_product_performance_original`.`ichiba_detail`,'')) as `search_word`,  `sales_report`.`sales_date`";
$proto0["m_strFrom"] = "FROM `market_product_performance_original`  LEFT OUTER JOIN `shouhin` ON `market_product_performance_original`.`product_id` = `shouhin`.`product_id`  LEFT OUTER JOIN `store_sub_categories` ON `shouhin`.`sub_category_id1` = `store_sub_categories`.`id`  LEFT OUTER JOIN `sales_report` ON `shouhin`.`product_id` = `sales_report`.`product_id`";
$proto0["m_strWhere"] = "((`shouhin`.`sub_category_id1` != 839) AND (`shouhin`.`sub_category_id1` != 840)) OR (`shouhin`.`sub_category_id1` is null)";
$proto0["m_strOrderBy"] = "ORDER BY `market_product_performance_original`.`id` DESC, `market_product_performance_original`.`color_quality` DESC, `market_product_performance_original`.`defect_quality` DESC";
$proto0["m_strTail"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "((`shouhin`.`sub_category_id1` != 839) AND (`shouhin`.`sub_category_id1` != 840)) OR (`shouhin`.`sub_category_id1` is null)";
$proto2["m_uniontype"] = "SQLL_OR";
	$obj = new SQLNonParsed(array(
	"m_sql" => "((`shouhin`.`sub_category_id1` != 839) AND (`shouhin`.`sub_category_id1` != 840)) OR (`shouhin`.`sub_category_id1` is null)"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
						$proto4=array();
$proto4["m_sql"] = "(`shouhin`.`sub_category_id1` != 839) AND (`shouhin`.`sub_category_id1` != 840)";
$proto4["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(`shouhin`.`sub_category_id1` != 839) AND (`shouhin`.`sub_category_id1` != 840)"
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
						$proto6=array();
$proto6["m_sql"] = "`shouhin`.`sub_category_id1` != 839";
$proto6["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "sub_category_id1",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "market_product_performance_original"
));

$proto6["m_column"]=$obj;
$proto6["m_contained"] = array();
$proto6["m_strCase"] = "!= 839";
$proto6["m_havingmode"] = false;
$proto6["m_inBrackets"] = true;
$proto6["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto6);

			$proto4["m_contained"][]=$obj;
						$proto8=array();
$proto8["m_sql"] = "`shouhin`.`sub_category_id1` != 840";
$proto8["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "sub_category_id1",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "market_product_performance_original"
));

$proto8["m_column"]=$obj;
$proto8["m_contained"] = array();
$proto8["m_strCase"] = "!= 840";
$proto8["m_havingmode"] = false;
$proto8["m_inBrackets"] = true;
$proto8["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto8);

			$proto4["m_contained"][]=$obj;
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = true;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

			$proto2["m_contained"][]=$obj;
						$proto10=array();
$proto10["m_sql"] = "`shouhin`.`sub_category_id1` is null";
$proto10["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "sub_category_id1",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "market_product_performance_original"
));

$proto10["m_column"]=$obj;
$proto10["m_contained"] = array();
$proto10["m_strCase"] = "is null";
$proto10["m_havingmode"] = false;
$proto10["m_inBrackets"] = true;
$proto10["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto10);

			$proto2["m_contained"][]=$obj;
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto12=array();
$proto12["m_sql"] = "";
$proto12["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto12["m_column"]=$obj;
$proto12["m_contained"] = array();
$proto12["m_strCase"] = "";
$proto12["m_havingmode"] = false;
$proto12["m_inBrackets"] = false;
$proto12["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto12);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "market_product_performance_original",
	"m_srcTableName" => "market_product_performance_original"
));

$proto14["m_sql"] = "`market_product_performance_original`.`id`";
$proto14["m_srcTableName"] = "market_product_performance_original";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "product_id",
	"m_strTable" => "market_product_performance_original",
	"m_srcTableName" => "market_product_performance_original"
));

$proto16["m_sql"] = "`market_product_performance_original`.`product_id`";
$proto16["m_srcTableName"] = "market_product_performance_original";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "case when `shouhin`.`product_id` > 0 then `shouhin`.`gold_property`  else `market_product_performance_original`.`gold_property`  end"
));

$proto18["m_sql"] = "case when `shouhin`.`product_id` > 0 then `shouhin`.`gold_property`  else `market_product_performance_original`.`gold_property`  end";
$proto18["m_srcTableName"] = "market_product_performance_original";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "gold_property";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "case when `shouhin`.`product_id` > 0 then `shouhin`.`category_id`  else `market_product_performance_original`.`category_id`  end"
));

$proto20["m_sql"] = "case when `shouhin`.`product_id` > 0 then `shouhin`.`category_id`  else `market_product_performance_original`.`category_id`  end";
$proto20["m_srcTableName"] = "market_product_performance_original";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "category_id";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "case when `shouhin`.`product_id` > 0 then `shouhin`.`sub_category_id1`  else `market_product_performance_original`.`sub_category_id`  end"
));

$proto22["m_sql"] = "case when `shouhin`.`product_id` > 0 then `shouhin`.`sub_category_id1`  else `market_product_performance_original`.`sub_category_id`  end";
$proto22["m_srcTableName"] = "market_product_performance_original";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "sub_category_id";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "case when `shouhin`.`product_id` > 0 then `shouhin`.`shape`  else `market_product_performance_original`.`shape`  end"
));

$proto24["m_sql"] = "case when `shouhin`.`product_id` > 0 then `shouhin`.`shape`  else `market_product_performance_original`.`shape`  end";
$proto24["m_srcTableName"] = "market_product_performance_original";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "shape";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "case when `shouhin`.`product_id` > 0 then `shouhin`.`Gram`  else `market_product_performance_original`.`Gram`  end"
));

$proto26["m_sql"] = "case when `shouhin`.`product_id` > 0 then `shouhin`.`Gram`  else `market_product_performance_original`.`Gram`  end";
$proto26["m_srcTableName"] = "market_product_performance_original";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "Gram";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "case when `shouhin`.`product_id` > 0 then `shouhin`.`Parent_stone`  else `market_product_performance_original`.`Parent_stone`  end"
));

$proto28["m_sql"] = "case when `shouhin`.`product_id` > 0 then `shouhin`.`Parent_stone`  else `market_product_performance_original`.`Parent_stone`  end";
$proto28["m_srcTableName"] = "market_product_performance_original";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "Parent_stone";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "case when `shouhin`.`product_id` > 0 then `shouhin`.`Aside_stone`  else `market_product_performance_original`.`Aside_stone`  end"
));

$proto30["m_sql"] = "case when `shouhin`.`product_id` > 0 then `shouhin`.`Aside_stone`  else `market_product_performance_original`.`Aside_stone`  end";
$proto30["m_srcTableName"] = "market_product_performance_original";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "Aside_stone";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "comment",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "market_product_performance_original"
));

$proto32["m_sql"] = "`shouhin`.`comment`";
$proto32["m_srcTableName"] = "market_product_performance_original";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "shouhin_comment";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "product_num",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "market_product_performance_original"
));

$proto34["m_sql"] = "`shouhin`.`product_num`";
$proto34["m_srcTableName"] = "market_product_performance_original";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "ichiba_exhibition_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "market_product_performance_original"
));

$proto36["m_sql"] = "`shouhin`.`ichiba_exhibition_id`";
$proto36["m_srcTableName"] = "market_product_performance_original";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "box_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "market_product_performance_original"
));

$proto38["m_sql"] = "`shouhin`.`box_id`";
$proto38["m_srcTableName"] = "market_product_performance_original";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "item_name",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "market_product_performance_original"
));

$proto40["m_sql"] = "`shouhin`.`item_name`";
$proto40["m_srcTableName"] = "market_product_performance_original";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_kataban",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "market_product_performance_original"
));

$proto42["m_sql"] = "`shouhin`.`yahoo_kataban`";
$proto42["m_srcTableName"] = "market_product_performance_original";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_condition2",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "market_product_performance_original"
));

$proto44["m_sql"] = "`shouhin`.`yahoo_condition2`";
$proto44["m_srcTableName"] = "market_product_performance_original";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "ichiba_meeting_month",
	"m_strTable" => "market_product_performance_original",
	"m_srcTableName" => "market_product_performance_original"
));

$proto46["m_sql"] = "`market_product_performance_original`.`ichiba_meeting_month`";
$proto46["m_srcTableName"] = "market_product_performance_original";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "ichiba_meeting_name",
	"m_strTable" => "market_product_performance_original",
	"m_srcTableName" => "market_product_performance_original"
));

$proto48["m_sql"] = "`market_product_performance_original`.`ichiba_meeting_name`";
$proto48["m_srcTableName"] = "market_product_performance_original";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "color_quality",
	"m_strTable" => "market_product_performance_original",
	"m_srcTableName" => "market_product_performance_original"
));

$proto50["m_sql"] = "`market_product_performance_original`.`color_quality`";
$proto50["m_srcTableName"] = "market_product_performance_original";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "defect_quality",
	"m_strTable" => "market_product_performance_original",
	"m_srcTableName" => "market_product_performance_original"
));

$proto52["m_sql"] = "`market_product_performance_original`.`defect_quality`";
$proto52["m_srcTableName"] = "market_product_performance_original";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "ichiba_detail",
	"m_strTable" => "market_product_performance_original",
	"m_srcTableName" => "market_product_performance_original"
));

$proto54["m_sql"] = "`market_product_performance_original`.`ichiba_detail`";
$proto54["m_srcTableName"] = "market_product_performance_original";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "ichiba_melee_gai",
	"m_strTable" => "market_product_performance_original",
	"m_srcTableName" => "market_product_performance_original"
));

$proto56["m_sql"] = "`market_product_performance_original`.`ichiba_melee_gai`";
$proto56["m_srcTableName"] = "market_product_performance_original";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "Apparaiser",
	"m_strTable" => "market_product_performance_original",
	"m_srcTableName" => "market_product_performance_original"
));

$proto58["m_sql"] = "`market_product_performance_original`.`Apparaiser`";
$proto58["m_srcTableName"] = "market_product_performance_original";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "zeinuki",
	"m_strTable" => "market_product_performance_original",
	"m_srcTableName" => "market_product_performance_original"
));

$proto60["m_sql"] = "`market_product_performance_original`.`zeinuki`";
$proto60["m_srcTableName"] = "market_product_performance_original";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "nyuukin_price",
	"m_strTable" => "market_product_performance_original",
	"m_srcTableName" => "market_product_performance_original"
));

$proto62["m_sql"] = "`market_product_performance_original`.`nyuukin_price`";
$proto62["m_srcTableName"] = "market_product_performance_original";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "ichiba_lot_pieces",
	"m_strTable" => "market_product_performance_original",
	"m_srcTableName" => "market_product_performance_original"
));

$proto64["m_sql"] = "`market_product_performance_original`.`ichiba_lot_pieces`";
$proto64["m_srcTableName"] = "market_product_performance_original";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "avg",
	"m_strTable" => "market_product_performance_original",
	"m_srcTableName" => "market_product_performance_original"
));

$proto66["m_sql"] = "`market_product_performance_original`.`avg`";
$proto66["m_srcTableName"] = "market_product_performance_original";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "comment",
	"m_strTable" => "market_product_performance_original",
	"m_srcTableName" => "market_product_performance_original"
));

$proto68["m_sql"] = "`market_product_performance_original`.`comment`";
$proto68["m_srcTableName"] = "market_product_performance_original";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "syuppinsya",
	"m_strTable" => "market_product_performance_original",
	"m_srcTableName" => "market_product_performance_original"
));

$proto70["m_sql"] = "`market_product_performance_original`.`syuppinsya`";
$proto70["m_srcTableName"] = "market_product_performance_original";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "DA_YOURNAME",
	"m_strTable" => "market_product_performance_original",
	"m_srcTableName" => "market_product_performance_original"
));

$proto72["m_sql"] = "`market_product_performance_original`.`DA_YOURNAME`";
$proto72["m_srcTableName"] = "market_product_performance_original";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "ichiba_img",
	"m_strTable" => "market_product_performance_original",
	"m_srcTableName" => "market_product_performance_original"
));

$proto74["m_sql"] = "`market_product_performance_original`.`ichiba_img`";
$proto74["m_srcTableName"] = "market_product_performance_original";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "charagai",
	"m_strTable" => "market_product_performance_original",
	"m_srcTableName" => "market_product_performance_original"
));

$proto76["m_sql"] = "`market_product_performance_original`.`charagai`";
$proto76["m_srcTableName"] = "market_product_performance_original";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "price_without_tax",
	"m_strTable" => "market_product_performance_original",
	"m_srcTableName" => "market_product_performance_original"
));

$proto78["m_sql"] = "`market_product_performance_original`.`price_without_tax`";
$proto78["m_srcTableName"] = "market_product_performance_original";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "price",
	"m_strTable" => "market_product_performance_original",
	"m_srcTableName" => "market_product_performance_original"
));

$proto80["m_sql"] = "`market_product_performance_original`.`price`";
$proto80["m_srcTableName"] = "market_product_performance_original";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "sagaku",
	"m_strTable" => "market_product_performance_original",
	"m_srcTableName" => "market_product_performance_original"
));

$proto82["m_sql"] = "`market_product_performance_original`.`sagaku`";
$proto82["m_srcTableName"] = "market_product_performance_original";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "arari",
	"m_strTable" => "market_product_performance_original",
	"m_srcTableName" => "market_product_performance_original"
));

$proto84["m_sql"] = "`market_product_performance_original`.`arari`";
$proto84["m_srcTableName"] = "market_product_performance_original";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "ichiba_detail_dev",
	"m_strTable" => "market_product_performance_original",
	"m_srcTableName" => "market_product_performance_original"
));

$proto86["m_sql"] = "`market_product_performance_original`.`ichiba_detail_dev`";
$proto86["m_srcTableName"] = "market_product_performance_original";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "market_product_performance_original",
	"m_srcTableName" => "market_product_performance_original"
));

$proto88["m_sql"] = "`market_product_performance_original`.`updated_at`";
$proto88["m_srcTableName"] = "market_product_performance_original";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by",
	"m_strTable" => "market_product_performance_original",
	"m_srcTableName" => "market_product_performance_original"
));

$proto90["m_sql"] = "`market_product_performance_original`.`updated_by`";
$proto90["m_srcTableName"] = "market_product_performance_original";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "market_product_performance_original",
	"m_srcTableName" => "market_product_performance_original"
));

$proto92["m_sql"] = "`market_product_performance_original`.`created_at`";
$proto92["m_srcTableName"] = "market_product_performance_original";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "";
$obj = new SQLFieldListItem($proto92);

$proto0["m_fieldlist"][]=$obj;
						$proto94=array();
			$obj = new SQLField(array(
	"m_strName" => "created_by",
	"m_strTable" => "market_product_performance_original",
	"m_srcTableName" => "market_product_performance_original"
));

$proto94["m_sql"] = "`market_product_performance_original`.`created_by`";
$proto94["m_srcTableName"] = "market_product_performance_original";
$proto94["m_expr"]=$obj;
$proto94["m_alias"] = "";
$obj = new SQLFieldListItem($proto94);

$proto0["m_fieldlist"][]=$obj;
						$proto96=array();
			$obj = new SQLField(array(
	"m_strName" => "front_hidden_flg",
	"m_strTable" => "market_product_performance_original",
	"m_srcTableName" => "market_product_performance_original"
));

$proto96["m_sql"] = "`market_product_performance_original`.`front_hidden_flg`";
$proto96["m_srcTableName"] = "market_product_performance_original";
$proto96["m_expr"]=$obj;
$proto96["m_alias"] = "";
$obj = new SQLFieldListItem($proto96);

$proto0["m_fieldlist"][]=$obj;
						$proto98=array();
			$obj = new SQLField(array(
	"m_strName" => "price_for_site",
	"m_strTable" => "market_product_performance_original",
	"m_srcTableName" => "market_product_performance_original"
));

$proto98["m_sql"] = "`market_product_performance_original`.`price_for_site`";
$proto98["m_srcTableName"] = "market_product_performance_original";
$proto98["m_expr"]=$obj;
$proto98["m_alias"] = "";
$obj = new SQLFieldListItem($proto98);

$proto0["m_fieldlist"][]=$obj;
						$proto100=array();
			$obj = new SQLField(array(
	"m_strName" => "ichiba_img",
	"m_strTable" => "market_product_performance_original",
	"m_srcTableName" => "market_product_performance_original"
));

$proto100["m_sql"] = "`market_product_performance_original`.`ichiba_img`";
$proto100["m_srcTableName"] = "market_product_performance_original";
$proto100["m_expr"]=$obj;
$proto100["m_alias"] = "disp_ichiba_img";
$obj = new SQLFieldListItem($proto100);

$proto0["m_fieldlist"][]=$obj;
						$proto102=array();
			$obj = new SQLField(array(
	"m_strName" => "use_satei",
	"m_strTable" => "market_product_performance_original",
	"m_srcTableName" => "market_product_performance_original"
));

$proto102["m_sql"] = "`market_product_performance_original`.`use_satei`";
$proto102["m_srcTableName"] = "market_product_performance_original";
$proto102["m_expr"]=$obj;
$proto102["m_alias"] = "";
$obj = new SQLFieldListItem($proto102);

$proto0["m_fieldlist"][]=$obj;
						$proto104=array();
			$obj = new SQLField(array(
	"m_strName" => "shape",
	"m_strTable" => "market_product_performance_original",
	"m_srcTableName" => "market_product_performance_original"
));

$proto104["m_sql"] = "`market_product_performance_original`.`shape`";
$proto104["m_srcTableName"] = "market_product_performance_original";
$proto104["m_expr"]=$obj;
$proto104["m_alias"] = "market_shape";
$obj = new SQLFieldListItem($proto104);

$proto0["m_fieldlist"][]=$obj;
						$proto106=array();
			$obj = new SQLField(array(
	"m_strName" => "category_id",
	"m_strTable" => "market_product_performance_original",
	"m_srcTableName" => "market_product_performance_original"
));

$proto106["m_sql"] = "`market_product_performance_original`.`category_id`";
$proto106["m_srcTableName"] = "market_product_performance_original";
$proto106["m_expr"]=$obj;
$proto106["m_alias"] = "market_category_id";
$obj = new SQLFieldListItem($proto106);

$proto0["m_fieldlist"][]=$obj;
						$proto108=array();
			$obj = new SQLField(array(
	"m_strName" => "gold_property",
	"m_strTable" => "market_product_performance_original",
	"m_srcTableName" => "market_product_performance_original"
));

$proto108["m_sql"] = "`market_product_performance_original`.`gold_property`";
$proto108["m_srcTableName"] = "market_product_performance_original";
$proto108["m_expr"]=$obj;
$proto108["m_alias"] = "market_gold_property";
$obj = new SQLFieldListItem($proto108);

$proto0["m_fieldlist"][]=$obj;
						$proto110=array();
			$obj = new SQLField(array(
	"m_strName" => "sub_category_id",
	"m_strTable" => "market_product_performance_original",
	"m_srcTableName" => "market_product_performance_original"
));

$proto110["m_sql"] = "`market_product_performance_original`.`sub_category_id`";
$proto110["m_srcTableName"] = "market_product_performance_original";
$proto110["m_expr"]=$obj;
$proto110["m_alias"] = "market_sub_category_id1";
$obj = new SQLFieldListItem($proto110);

$proto0["m_fieldlist"][]=$obj;
						$proto112=array();
			$obj = new SQLField(array(
	"m_strName" => "price_per_parent_stone",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "market_product_performance_original"
));

$proto112["m_sql"] = "`shouhin`.`price_per_parent_stone`";
$proto112["m_srcTableName"] = "market_product_performance_original";
$proto112["m_expr"]=$obj;
$proto112["m_alias"] = "";
$obj = new SQLFieldListItem($proto112);

$proto0["m_fieldlist"][]=$obj;
						$proto114=array();
			$obj = new SQLField(array(
	"m_strName" => "price_per_aside_stone",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "market_product_performance_original"
));

$proto114["m_sql"] = "`shouhin`.`price_per_aside_stone`";
$proto114["m_srcTableName"] = "market_product_performance_original";
$proto114["m_expr"]=$obj;
$proto114["m_alias"] = "";
$obj = new SQLFieldListItem($proto114);

$proto0["m_fieldlist"][]=$obj;
						$proto116=array();
			$obj = new SQLField(array(
	"m_strName" => "price_per_gram",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "market_product_performance_original"
));

$proto116["m_sql"] = "`shouhin`.`price_per_gram`";
$proto116["m_srcTableName"] = "market_product_performance_original";
$proto116["m_expr"]=$obj;
$proto116["m_alias"] = "";
$obj = new SQLFieldListItem($proto116);

$proto0["m_fieldlist"][]=$obj;
						$proto118=array();
			$obj = new SQLField(array(
	"m_strName" => "gramgai",
	"m_strTable" => "market_product_performance_original",
	"m_srcTableName" => "market_product_performance_original"
));

$proto118["m_sql"] = "`market_product_performance_original`.`gramgai`";
$proto118["m_srcTableName"] = "market_product_performance_original";
$proto118["m_expr"]=$obj;
$proto118["m_alias"] = "";
$obj = new SQLFieldListItem($proto118);

$proto0["m_fieldlist"][]=$obj;
						$proto120=array();
			$obj = new SQLField(array(
	"m_strName" => "colorstone_id",
	"m_strTable" => "store_sub_categories",
	"m_srcTableName" => "market_product_performance_original"
));

$proto120["m_sql"] = "`store_sub_categories`.`colorstone_id`";
$proto120["m_srcTableName"] = "market_product_performance_original";
$proto120["m_expr"]=$obj;
$proto120["m_alias"] = "";
$obj = new SQLFieldListItem($proto120);

$proto0["m_fieldlist"][]=$obj;
						$proto122=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "case   	when `shouhin`.`product_id` > 0 then `store_sub_categories`.`category_class`  	when `shouhin`.`sub_category_id1` > 0 then `store_sub_categories`.`category_class`  	else '1'  end"
));

$proto122["m_sql"] = "case   	when `shouhin`.`product_id` > 0 then `store_sub_categories`.`category_class`  	when `shouhin`.`sub_category_id1` > 0 then `store_sub_categories`.`category_class`  	else '1'  end";
$proto122["m_srcTableName"] = "market_product_performance_original";
$proto122["m_expr"]=$obj;
$proto122["m_alias"] = "category_class";
$obj = new SQLFieldListItem($proto122);

$proto0["m_fieldlist"][]=$obj;
						$proto124=array();
			$proto125=array();
$proto125["m_functiontype"] = "SQLF_CUSTOM";
$proto125["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "IFNULL(`store_sub_categories`.`name`,'')"
));

$proto125["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "IFNULL(`shouhin`.`comment`,'')"
));

$proto125["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "IFNULL(`market_product_performance_original`.`comment`,'')"
));

$proto125["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "IFNULL(`market_product_performance_original`.`ichiba_detail`,'')"
));

$proto125["m_arguments"][]=$obj;
$proto125["m_strFunctionName"] = "CONCAT";
$obj = new SQLFunctionCall($proto125);

$proto124["m_sql"] = "CONCAT(IFNULL(`store_sub_categories`.`name`,''), IFNULL(`shouhin`.`comment`,''), IFNULL(`market_product_performance_original`.`comment`,''), IFNULL(`market_product_performance_original`.`ichiba_detail`,''))";
$proto124["m_srcTableName"] = "market_product_performance_original";
$proto124["m_expr"]=$obj;
$proto124["m_alias"] = "search_word";
$obj = new SQLFieldListItem($proto124);

$proto0["m_fieldlist"][]=$obj;
						$proto130=array();
			$obj = new SQLField(array(
	"m_strName" => "sales_date",
	"m_strTable" => "sales_report",
	"m_srcTableName" => "market_product_performance_original"
));

$proto130["m_sql"] = "`sales_report`.`sales_date`";
$proto130["m_srcTableName"] = "market_product_performance_original";
$proto130["m_expr"]=$obj;
$proto130["m_alias"] = "";
$obj = new SQLFieldListItem($proto130);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto132=array();
$proto132["m_link"] = "SQLL_MAIN";
			$proto133=array();
$proto133["m_strName"] = "market_product_performance_original";
$proto133["m_srcTableName"] = "market_product_performance_original";
$proto133["m_columns"] = array();
$proto133["m_columns"][] = "id";
$proto133["m_columns"][] = "ichiba_meeting_month";
$proto133["m_columns"][] = "ichiba_meeting_name";
$proto133["m_columns"][] = "colorstone_id";
$proto133["m_columns"][] = "shape";
$proto133["m_columns"][] = "color_quality";
$proto133["m_columns"][] = "defect_quality";
$proto133["m_columns"][] = "category_id";
$proto133["m_columns"][] = "ichiba_detail";
$proto133["m_columns"][] = "gold_property";
$proto133["m_columns"][] = "price_per_gram";
$proto133["m_columns"][] = "Gram";
$proto133["m_columns"][] = "Parent_stone";
$proto133["m_columns"][] = "Aside_stone";
$proto133["m_columns"][] = "ichiba_melee_gai";
$proto133["m_columns"][] = "Apparaiser";
$proto133["m_columns"][] = "zeinuki";
$proto133["m_columns"][] = "nyuukin_price";
$proto133["m_columns"][] = "ichiba_lot_pieces";
$proto133["m_columns"][] = "avg";
$proto133["m_columns"][] = "comment";
$proto133["m_columns"][] = "syuppinsya";
$proto133["m_columns"][] = "DA_YOURNAME";
$proto133["m_columns"][] = "ichiba_img";
$proto133["m_columns"][] = "charagai";
$proto133["m_columns"][] = "price_without_tax";
$proto133["m_columns"][] = "price";
$proto133["m_columns"][] = "sagaku";
$proto133["m_columns"][] = "arari";
$proto133["m_columns"][] = "ichiba_detail_dev";
$proto133["m_columns"][] = "updated_at";
$proto133["m_columns"][] = "updated_by";
$proto133["m_columns"][] = "created_at";
$proto133["m_columns"][] = "created_by";
$proto133["m_columns"][] = "price_for_site";
$proto133["m_columns"][] = "resize_flg";
$proto133["m_columns"][] = "title_for_site";
$proto133["m_columns"][] = "img_binary";
$proto133["m_columns"][] = "relation_id";
$proto133["m_columns"][] = "voice_sub_id";
$proto133["m_columns"][] = "is_ok";
$proto133["m_columns"][] = "front_hidden_flg";
$proto133["m_columns"][] = "sub_category_id";
$proto133["m_columns"][] = "product_num";
$proto133["m_columns"][] = "product_id";
$proto133["m_columns"][] = "use_satei";
$proto133["m_columns"][] = "gramgai";
$obj = new SQLTable($proto133);

$proto132["m_table"] = $obj;
$proto132["m_sql"] = "`market_product_performance_original`";
$proto132["m_alias"] = "";
$proto132["m_srcTableName"] = "market_product_performance_original";
$proto134=array();
$proto134["m_sql"] = "";
$proto134["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto134["m_column"]=$obj;
$proto134["m_contained"] = array();
$proto134["m_strCase"] = "";
$proto134["m_havingmode"] = false;
$proto134["m_inBrackets"] = false;
$proto134["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto134);

$proto132["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto132);

$proto0["m_fromlist"][]=$obj;
												$proto136=array();
$proto136["m_link"] = "SQLL_LEFTJOIN";
			$proto137=array();
$proto137["m_strName"] = "shouhin";
$proto137["m_srcTableName"] = "market_product_performance_original";
$proto137["m_columns"] = array();
$proto137["m_columns"][] = "product_id";
$proto137["m_columns"][] = "category_id";
$proto137["m_columns"][] = "goods_title";
$proto137["m_columns"][] = "title";
$proto137["m_columns"][] = "sub_category_id1";
$proto137["m_columns"][] = "ecc_id";
$proto137["m_columns"][] = "price";
$proto137["m_columns"][] = "yahoo";
$proto137["m_columns"][] = "remark";
$proto137["m_columns"][] = "sales_price";
$proto137["m_columns"][] = "description";
$proto137["m_columns"][] = "status";
$proto137["m_columns"][] = "product_num";
$proto137["m_columns"][] = "updated_at";
$proto137["m_columns"][] = "yahoo_size";
$proto137["m_columns"][] = "yahoo_title";
$proto137["m_columns"][] = "yahoo_junle";
$proto137["m_columns"][] = "yahoo_sankou_uwadai";
$proto137["m_columns"][] = "yahoo_sozai";
$proto137["m_columns"][] = "yahoo_color";
$proto137["m_columns"][] = "yahoo_kataban";
$proto137["m_columns"][] = "yahoo_condition1";
$proto137["m_columns"][] = "yahoo_condition2";
$proto137["m_columns"][] = "yahoo_fuzokuhin";
$proto137["m_columns"][] = "yahoo_sinaban";
$proto137["m_columns"][] = "yahoo_saisun_sha";
$proto137["m_columns"][] = "yahoo_sex";
$proto137["m_columns"][] = "box_id";
$proto137["m_columns"][] = "nyuukin_price";
$proto137["m_columns"][] = "updated_by";
$proto137["m_columns"][] = "raku_title";
$proto137["m_columns"][] = "raku_hyoujisaki_category2";
$proto137["m_columns"][] = "raku_hyoujisaki_category";
$proto137["m_columns"][] = "raku_hyoujisaki_category3";
$proto137["m_columns"][] = "timesta";
$proto137["m_columns"][] = "saisun_start";
$proto137["m_columns"][] = "saisun_end";
$proto137["m_columns"][] = "label_output_flag";
$proto137["m_columns"][] = "season";
$proto137["m_columns"][] = "kanryou_henbi";
$proto137["m_columns"][] = "box_sort";
$proto137["m_columns"][] = "satei_by";
$proto137["m_columns"][] = "kaitori_by";
$proto137["m_columns"][] = "comment";
$proto137["m_columns"][] = "satei_hi";
$proto137["m_columns"][] = "kaitory_hi";
$proto137["m_columns"][] = "REG_PHOTOGRAPHER";
$proto137["m_columns"][] = "REG_AUTHOR";
$proto137["m_columns"][] = "REG_PACKINGS";
$proto137["m_columns"][] = "REG_KAKOU_DATE";
$proto137["m_columns"][] = "REG_KAKOU";
$proto137["m_columns"][] = "REG_EXHIBITOR";
$proto137["m_columns"][] = "REG_PHOTOGRAPHER_DATE";
$proto137["m_columns"][] = "DT_PACKING_DATE";
$proto137["m_columns"][] = "DT_UP_DATE";
$proto137["m_columns"][] = "AWAZU_DATE";
$proto137["m_columns"][] = "AWAZU_NIN";
$proto137["m_columns"][] = "sabun_date";
$proto137["m_columns"][] = "browseid";
$proto137["m_columns"][] = "browsenode";
$proto137["m_columns"][] = "gold_property";
$proto137["m_columns"][] = "ichiba_title";
$proto137["m_columns"][] = "Gram";
$proto137["m_columns"][] = "Parent_stone";
$proto137["m_columns"][] = "Aside_stone";
$proto137["m_columns"][] = "Appraiser";
$proto137["m_columns"][] = "Remarks";
$proto137["m_columns"][] = "Destination_selling";
$proto137["m_columns"][] = "Finish";
$proto137["m_columns"][] = "Discrimination";
$proto137["m_columns"][] = "accessories";
$proto137["m_columns"][] = "priority";
$proto137["m_columns"][] = "A_storage";
$proto137["m_columns"][] = "price_per_gram";
$proto137["m_columns"][] = "price_per_parent_stone";
$proto137["m_columns"][] = "price_per_aside_stone";
$proto137["m_columns"][] = "price_secret";
$proto137["m_columns"][] = "sales_price_secret";
$proto137["m_columns"][] = "eq";
$proto137["m_columns"][] = "en";
$proto137["m_columns"][] = "line";
$proto137["m_columns"][] = "item_name";
$proto137["m_columns"][] = "handle";
$proto137["m_columns"][] = "yahoo_color_id";
$proto137["m_columns"][] = "raku_hyoujisaki_category4";
$proto137["m_columns"][] = "raku_hyoujisaki_category5";
$proto137["m_columns"][] = "raku_dir_1";
$proto137["m_columns"][] = "raku_dir_2";
$proto137["m_columns"][] = "raku_dir_3";
$proto137["m_columns"][] = "raku_dir_4";
$proto137["m_columns"][] = "raku_dir_5";
$proto137["m_columns"][] = "raku_dir_result";
$proto137["m_columns"][] = "raku_tag_result";
$proto137["m_columns"][] = "serial_number";
$proto137["m_columns"][] = "Exhibition_Date";
$proto137["m_columns"][] = "search_keyword";
$proto137["m_columns"][] = "stamp";
$proto137["m_columns"][] = "motif";
$proto137["m_columns"][] = "Setting";
$proto137["m_columns"][] = "processing";
$proto137["m_columns"][] = "Sleeve_Length";
$proto137["m_columns"][] = "length";
$proto137["m_columns"][] = "Ring_size";
$proto137["m_columns"][] = "price_for_site";
$proto137["m_columns"][] = "yahoo_category_id";
$proto137["m_columns"][] = "Qty";
$proto137["m_columns"][] = "sales_period";
$proto137["m_columns"][] = "starting_price";
$proto137["m_columns"][] = "FLAG_NO_ARRIVAL";
$proto137["m_columns"][] = "amount_of_image";
$proto137["m_columns"][] = "csv";
$proto137["m_columns"][] = "return_output_flag";
$proto137["m_columns"][] = "wasabi_flag";
$proto137["m_columns"][] = "ws_import_date";
$proto137["m_columns"][] = "logo";
$proto137["m_columns"][] = "parts";
$proto137["m_columns"][] = "country_of_origin";
$proto137["m_columns"][] = "zipper";
$proto137["m_columns"][] = "guarantee";
$proto137["m_columns"][] = "errors";
$proto137["m_columns"][] = "designer";
$proto137["m_columns"][] = "hahakai";
$proto137["m_columns"][] = "effect";
$proto137["m_columns"][] = "shape";
$proto137["m_columns"][] = "cutting_style";
$proto137["m_columns"][] = "chain_type";
$proto137["m_columns"][] = "number_of_stones";
$proto137["m_columns"][] = "amount";
$proto137["m_columns"][] = "satei_error";
$proto137["m_columns"][] = "producing_area";
$proto137["m_columns"][] = "shape_supplement";
$proto137["m_columns"][] = "side_gem";
$proto137["m_columns"][] = "product_style";
$proto137["m_columns"][] = "collar_neck_line";
$proto137["m_columns"][] = "breast";
$proto137["m_columns"][] = "silhouette";
$proto137["m_columns"][] = "sleeve";
$proto137["m_columns"][] = "unit";
$proto137["m_columns"][] = "hall_mark";
$proto137["m_columns"][] = "plate";
$proto137["m_columns"][] = "toe";
$proto137["m_columns"][] = "heel";
$proto137["m_columns"][] = "cloth";
$proto137["m_columns"][] = "serial_number_for_storage";
$proto137["m_columns"][] = "official_url";
$proto137["m_columns"][] = "main_details";
$proto137["m_columns"][] = "notation_size";
$proto137["m_columns"][] = "shoe_size_jp";
$proto137["m_columns"][] = "Eoc_chigins2_id";
$proto137["m_columns"][] = "country_of_origin_name";
$proto137["m_columns"][] = "mailingkit_id";
$proto137["m_columns"][] = "DA_COMMENTSANDTOTAL";
$proto137["m_columns"][] = "DA_WEIGHT";
$proto137["m_columns"][] = "DA_PER_CARAT";
$proto137["m_columns"][] = "DA_SHAPE";
$proto137["m_columns"][] = "DA_SELFGRES";
$proto137["m_columns"][] = "DA_ORIGINALGRADEMLIKENED";
$proto137["m_columns"][] = "DA_SUGARCANE";
$proto137["m_columns"][] = "DA_RAPA";
$proto137["m_columns"][] = "DA_INTENSITY";
$proto137["m_columns"][] = "DA_OVERTONE";
$proto137["m_columns"][] = "DA_COLOR";
$proto137["m_columns"][] = "DA_CLARITY";
$proto137["m_columns"][] = "DA_CUT";
$proto137["m_columns"][] = "DA_POLISH";
$proto137["m_columns"][] = "DA_SYMMETRY";
$proto137["m_columns"][] = "DA_FLUO";
$proto137["m_columns"][] = "DA_COLOR_FLUO";
$proto137["m_columns"][] = "DA_WIDE";
$proto137["m_columns"][] = "DA_HIGH";
$proto137["m_columns"][] = "DA_DEPTH";
$proto137["m_columns"][] = "DA_APPRAISER";
$proto137["m_columns"][] = "DA_FRAPA";
$proto137["m_columns"][] = "DA_RATE";
$proto137["m_columns"][] = "DA_UNIT_PRICE_UNPLUG";
$proto137["m_columns"][] = "DA_YOURNAME";
$proto137["m_columns"][] = "DA_RAPAB";
$proto137["m_columns"][] = "DA_GROSSPROFIT";
$proto137["m_columns"][] = "DA_INTEREST_1";
$proto137["m_columns"][] = "DA_no";
$proto137["m_columns"][] = "kinsa_flag";
$proto137["m_columns"][] = "price_for_site_flag";
$proto137["m_columns"][] = "Eoc_takuhai_id";
$proto137["m_columns"][] = "Eoc_unfinished_id";
$proto137["m_columns"][] = "Eoc_chigins_unfinished_id";
$proto137["m_columns"][] = "chohyo_id";
$proto137["m_columns"][] = "location";
$proto137["m_columns"][] = "special_instructions_1";
$proto137["m_columns"][] = "special_instructions_2";
$proto137["m_columns"][] = "special_instructions_3";
$proto137["m_columns"][] = "chohyo_seihin_flag";
$proto137["m_columns"][] = "chohyo_dia_flag";
$proto137["m_columns"][] = "chohyo_type";
$proto137["m_columns"][] = "ichiyen_flag";
$proto137["m_columns"][] = "asuraku_fuka_flag";
$proto137["m_columns"][] = "parallel_import_flag";
$proto137["m_columns"][] = "meisai_number";
$proto137["m_columns"][] = "days_keep_price";
$proto137["m_columns"][] = "initial_included";
$proto137["m_columns"][] = "novelty";
$proto137["m_columns"][] = "tentou_label_output_flag";
$proto137["m_columns"][] = "itaku_flag";
$proto137["m_columns"][] = "including_catch";
$proto137["m_columns"][] = "ichiba_meeting_month";
$proto137["m_columns"][] = "ichiba_meeting_name";
$proto137["m_columns"][] = "ichiba_color";
$proto137["m_columns"][] = "ichiba_clarity";
$proto137["m_columns"][] = "ichiba_melee_gai";
$proto137["m_columns"][] = "ichiba_lot_pieces";
$proto137["m_columns"][] = "ichiba_image";
$proto137["m_columns"][] = "ichiba_img";
$proto137["m_columns"][] = "gold_check_id";
$proto137["m_columns"][] = "ichiba_exhibition_id";
$proto137["m_columns"][] = "ichiba_exhibition_sort";
$proto137["m_columns"][] = "cost";
$proto137["m_columns"][] = "auto_price_cut_prohibited";
$proto137["m_columns"][] = "event_price";
$proto137["m_columns"][] = "identification_cost";
$proto137["m_columns"][] = "other_cost";
$proto137["m_columns"][] = "stock_quantity";
$proto137["m_columns"][] = "Eoc_trader_id_for_buy";
$proto137["m_columns"][] = "Eoc_trader_id_for_sell";
$proto137["m_columns"][] = "multiplication_rate";
$proto137["m_columns"][] = "many_product_group_id";
$proto137["m_columns"][] = "trading_sort_id";
$proto137["m_columns"][] = "many_product_group_saiban";
$proto137["m_columns"][] = "purchase_category";
$proto137["m_columns"][] = "created_at";
$proto137["m_columns"][] = "created_by";
$proto137["m_columns"][] = "manual_input_price_per_gram";
$proto137["m_columns"][] = "satei_start";
$proto137["m_columns"][] = "self_DA_INTENSITY";
$proto137["m_columns"][] = "self_DA_OVERTONE";
$proto137["m_columns"][] = "self_DA_COLOR";
$proto137["m_columns"][] = "self_DA_CLARITY";
$proto137["m_columns"][] = "self_DA_CUT";
$proto137["m_columns"][] = "self_DA_POLISH";
$proto137["m_columns"][] = "self_DA_SYMMETRY";
$proto137["m_columns"][] = "self_DA_FLUO";
$proto137["m_columns"][] = "self_DA_COLOR_FLUO";
$proto137["m_columns"][] = "self_DA_FRAPA";
$proto137["m_columns"][] = "self_DA_RATE";
$proto137["m_columns"][] = "self_multiplication_rate";
$proto137["m_columns"][] = "is_seiyaku";
$proto137["m_columns"][] = "destination_sold_out";
$proto137["m_columns"][] = "mypage_update_prohibited";
$proto137["m_columns"][] = "gold_check_scan_id";
$proto137["m_columns"][] = "buy_campaign_data_id";
$proto137["m_columns"][] = "REG_PHOTOGRAPHER_DATE_start";
$proto137["m_columns"][] = "commission";
$proto137["m_columns"][] = "addtime_gold_check_id";
$proto137["m_columns"][] = "is_recovery";
$proto137["m_columns"][] = "sales_cost";
$proto137["m_columns"][] = "mst_business_partner_id";
$proto137["m_columns"][] = "DA_GROSSPROFIT_2";
$proto137["m_columns"][] = "DA_INTEREST_2";
$proto137["m_columns"][] = "minus_weight";
$proto137["m_columns"][] = "diameter_size";
$proto137["m_columns"][] = "metal_rate_date";
$obj = new SQLTable($proto137);

$proto136["m_table"] = $obj;
$proto136["m_sql"] = "LEFT OUTER JOIN `shouhin` ON `market_product_performance_original`.`product_id` = `shouhin`.`product_id`";
$proto136["m_alias"] = "";
$proto136["m_srcTableName"] = "market_product_performance_original";
$proto138=array();
$proto138["m_sql"] = "`market_product_performance_original`.`product_id` = `shouhin`.`product_id`";
$proto138["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "product_id",
	"m_strTable" => "market_product_performance_original",
	"m_srcTableName" => "market_product_performance_original"
));

$proto138["m_column"]=$obj;
$proto138["m_contained"] = array();
$proto138["m_strCase"] = "= `shouhin`.`product_id`";
$proto138["m_havingmode"] = false;
$proto138["m_inBrackets"] = false;
$proto138["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto138);

$proto136["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto136);

$proto0["m_fromlist"][]=$obj;
												$proto140=array();
$proto140["m_link"] = "SQLL_LEFTJOIN";
			$proto141=array();
$proto141["m_strName"] = "store_sub_categories";
$proto141["m_srcTableName"] = "market_product_performance_original";
$proto141["m_columns"] = array();
$proto141["m_columns"][] = "id";
$proto141["m_columns"][] = "category_id";
$proto141["m_columns"][] = "name";
$proto141["m_columns"][] = "template_id";
$proto141["m_columns"][] = "initial_name";
$proto141["m_columns"][] = "view1";
$proto141["m_columns"][] = "view2";
$proto141["m_columns"][] = "view3";
$proto141["m_columns"][] = "size1";
$proto141["m_columns"][] = "size2";
$proto141["m_columns"][] = "size3";
$proto141["m_columns"][] = "size4";
$proto141["m_columns"][] = "size5";
$proto141["m_columns"][] = "size6";
$proto141["m_columns"][] = "sort";
$proto141["m_columns"][] = "brawseid";
$proto141["m_columns"][] = "brandnode";
$proto141["m_columns"][] = "brandidwomen";
$proto141["m_columns"][] = "condition_id";
$proto141["m_columns"][] = "condition_tmp";
$proto141["m_columns"][] = "rakuten_koumoku";
$proto141["m_columns"][] = "saisun_priority_check";
$proto141["m_columns"][] = "condition_details";
$proto141["m_columns"][] = "updated_at";
$proto141["m_columns"][] = "updated_by";
$proto141["m_columns"][] = "created_at";
$proto141["m_columns"][] = "created_by";
$proto141["m_columns"][] = "output_template";
$proto141["m_columns"][] = "saisun_model_id";
$proto141["m_columns"][] = "related_words";
$proto141["m_columns"][] = "hansokuhi_flag";
$proto141["m_columns"][] = "category_class";
$proto141["m_columns"][] = "sales_category";
$proto141["m_columns"][] = "colorstone_id";
$obj = new SQLTable($proto141);

$proto140["m_table"] = $obj;
$proto140["m_sql"] = "LEFT OUTER JOIN `store_sub_categories` ON `shouhin`.`sub_category_id1` = `store_sub_categories`.`id`";
$proto140["m_alias"] = "";
$proto140["m_srcTableName"] = "market_product_performance_original";
$proto142=array();
$proto142["m_sql"] = "`shouhin`.`sub_category_id1` = `store_sub_categories`.`id`";
$proto142["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "sub_category_id1",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "market_product_performance_original"
));

$proto142["m_column"]=$obj;
$proto142["m_contained"] = array();
$proto142["m_strCase"] = "= `store_sub_categories`.`id`";
$proto142["m_havingmode"] = false;
$proto142["m_inBrackets"] = false;
$proto142["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto142);

$proto140["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto140);

$proto0["m_fromlist"][]=$obj;
												$proto144=array();
$proto144["m_link"] = "SQLL_LEFTJOIN";
			$proto145=array();
$proto145["m_strName"] = "sales_report";
$proto145["m_srcTableName"] = "market_product_performance_original";
$proto145["m_columns"] = array();
$proto145["m_columns"][] = "id";
$proto145["m_columns"][] = "product_id";
$proto145["m_columns"][] = "sales_date";
$proto145["m_columns"][] = "contract_date";
$proto145["m_columns"][] = "exhibition_date";
$proto145["m_columns"][] = "created_at";
$proto145["m_columns"][] = "updated_at";
$proto145["m_columns"][] = "memo";
$proto145["m_columns"][] = "repo_type";
$proto145["m_columns"][] = "mst_business_partner_id";
$obj = new SQLTable($proto145);

$proto144["m_table"] = $obj;
$proto144["m_sql"] = "LEFT OUTER JOIN `sales_report` ON `shouhin`.`product_id` = `sales_report`.`product_id`";
$proto144["m_alias"] = "";
$proto144["m_srcTableName"] = "market_product_performance_original";
$proto146=array();
$proto146["m_sql"] = "`shouhin`.`product_id` = `sales_report`.`product_id`";
$proto146["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "product_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "market_product_performance_original"
));

$proto146["m_column"]=$obj;
$proto146["m_contained"] = array();
$proto146["m_strCase"] = "= `sales_report`.`product_id`";
$proto146["m_havingmode"] = false;
$proto146["m_inBrackets"] = false;
$proto146["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto146);

$proto144["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto144);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto148=array();
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "market_product_performance_original",
	"m_srcTableName" => "market_product_performance_original"
));

$proto148["m_column"]=$obj;
$proto148["m_bAsc"] = 0;
$proto148["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto148);

$proto0["m_orderby"][]=$obj;					
												$proto150=array();
						$obj = new SQLField(array(
	"m_strName" => "color_quality",
	"m_strTable" => "market_product_performance_original",
	"m_srcTableName" => "market_product_performance_original"
));

$proto150["m_column"]=$obj;
$proto150["m_bAsc"] = 0;
$proto150["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto150);

$proto0["m_orderby"][]=$obj;					
												$proto152=array();
						$obj = new SQLField(array(
	"m_strName" => "defect_quality",
	"m_strTable" => "market_product_performance_original",
	"m_srcTableName" => "market_product_performance_original"
));

$proto152["m_column"]=$obj;
$proto152["m_bAsc"] = 0;
$proto152["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto152);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="market_product_performance_original";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_market_product_performance_original = createSqlQuery_market_product_performance_original();


	
		;

																																																									

$tdatamarket_product_performance_original[".sqlquery"] = $queryData_market_product_performance_original;

include_once(getabspath("include/market_product_performance_original_events.php"));
$tableEvents["market_product_performance_original"] = new eventclass_market_product_performance_original;
$tdatamarket_product_performance_original[".hasEvents"] = true;

?>