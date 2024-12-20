<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamst_brand = array();
	$tdatamst_brand[".truncateText"] = true;
	$tdatamst_brand[".NumberOfChars"] = 80;
	$tdatamst_brand[".ShortName"] = "mst_brand";
	$tdatamst_brand[".OwnerID"] = "";
	$tdatamst_brand[".OriginalTable"] = "mst_brand";

//	field labels
$fieldLabelsmst_brand = array();
$fieldToolTipsmst_brand = array();
$pageTitlesmst_brand = array();
$placeHoldersmst_brand = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmst_brand["Japanese"] = array();
	$fieldToolTipsmst_brand["Japanese"] = array();
	$placeHoldersmst_brand["Japanese"] = array();
	$pageTitlesmst_brand["Japanese"] = array();
	$fieldLabelsmst_brand["Japanese"]["id"] = "Id";
	$fieldToolTipsmst_brand["Japanese"]["id"] = "";
	$placeHoldersmst_brand["Japanese"]["id"] = "";
	$fieldLabelsmst_brand["Japanese"]["name"] = "日本語/英語";
	$fieldToolTipsmst_brand["Japanese"]["name"] = "";
	$placeHoldersmst_brand["Japanese"]["name"] = "";
	$fieldLabelsmst_brand["Japanese"]["eng_name"] = "Eng Name";
	$fieldToolTipsmst_brand["Japanese"]["eng_name"] = "";
	$placeHoldersmst_brand["Japanese"]["eng_name"] = "";
	$fieldLabelsmst_brand["Japanese"]["goods_id"] = "Goods Id";
	$fieldToolTipsmst_brand["Japanese"]["goods_id"] = "";
	$placeHoldersmst_brand["Japanese"]["goods_id"] = "";
	$fieldLabelsmst_brand["Japanese"]["japananese_name"] = "Japananese Name";
	$fieldToolTipsmst_brand["Japanese"]["japananese_name"] = "";
	$placeHoldersmst_brand["Japanese"]["japananese_name"] = "";
	$fieldLabelsmst_brand["Japanese"]["english_name"] = "English Name";
	$fieldToolTipsmst_brand["Japanese"]["english_name"] = "";
	$placeHoldersmst_brand["Japanese"]["english_name"] = "";
	$fieldLabelsmst_brand["Japanese"]["tag"] = "Tag";
	$fieldToolTipsmst_brand["Japanese"]["tag"] = "";
	$placeHoldersmst_brand["Japanese"]["tag"] = "";
	$fieldLabelsmst_brand["Japanese"]["tage"] = "Tage";
	$fieldToolTipsmst_brand["Japanese"]["tage"] = "";
	$placeHoldersmst_brand["Japanese"]["tage"] = "";
	$fieldLabelsmst_brand["Japanese"]["seach_j"] = "日本語検索名";
	$fieldToolTipsmst_brand["Japanese"]["seach_j"] = "";
	$placeHoldersmst_brand["Japanese"]["seach_j"] = "";
	$fieldLabelsmst_brand["Japanese"]["seach_e"] = "Seach E";
	$fieldToolTipsmst_brand["Japanese"]["seach_e"] = "";
	$placeHoldersmst_brand["Japanese"]["seach_e"] = "";
	$fieldLabelsmst_brand["Japanese"]["mst_band_title"] = "Mst Band Title";
	$fieldToolTipsmst_brand["Japanese"]["mst_band_title"] = "";
	$placeHoldersmst_brand["Japanese"]["mst_band_title"] = "";
	$fieldLabelsmst_brand["Japanese"]["register_at"] = "登録日";
	$fieldToolTipsmst_brand["Japanese"]["register_at"] = "";
	$placeHoldersmst_brand["Japanese"]["register_at"] = "";
	$fieldLabelsmst_brand["Japanese"]["update_at"] = "更新日";
	$fieldToolTipsmst_brand["Japanese"]["update_at"] = "";
	$placeHoldersmst_brand["Japanese"]["update_at"] = "";
	$fieldLabelsmst_brand["Japanese"]["register_by"] = "登録者";
	$fieldToolTipsmst_brand["Japanese"]["register_by"] = "";
	$placeHoldersmst_brand["Japanese"]["register_by"] = "";
	$fieldLabelsmst_brand["Japanese"]["update_by"] = "更新者";
	$fieldToolTipsmst_brand["Japanese"]["update_by"] = "";
	$placeHoldersmst_brand["Japanese"]["update_by"] = "";
	$fieldLabelsmst_brand["Japanese"]["preview"] = "表示";
	$fieldToolTipsmst_brand["Japanese"]["preview"] = "";
	$placeHoldersmst_brand["Japanese"]["preview"] = "";
	$fieldLabelsmst_brand["Japanese"]["app_name"] = "App Name";
	$fieldToolTipsmst_brand["Japanese"]["app_name"] = "";
	$placeHoldersmst_brand["Japanese"]["app_name"] = "";
	$fieldLabelsmst_brand["Japanese"]["bag"] = "バッグ";
	$fieldToolTipsmst_brand["Japanese"]["bag"] = "";
	$placeHoldersmst_brand["Japanese"]["bag"] = "";
	$fieldLabelsmst_brand["Japanese"]["wallet"] = "財布";
	$fieldToolTipsmst_brand["Japanese"]["wallet"] = "";
	$placeHoldersmst_brand["Japanese"]["wallet"] = "";
	$fieldLabelsmst_brand["Japanese"]["accessories"] = "アクセサリー";
	$fieldToolTipsmst_brand["Japanese"]["accessories"] = "";
	$placeHoldersmst_brand["Japanese"]["accessories"] = "";
	$fieldLabelsmst_brand["Japanese"]["catch"] = "時計";
	$fieldToolTipsmst_brand["Japanese"]["catch"] = "";
	$placeHoldersmst_brand["Japanese"]["catch"] = "";
	$fieldLabelsmst_brand["Japanese"]["shoes"] = "靴";
	$fieldToolTipsmst_brand["Japanese"]["shoes"] = "";
	$placeHoldersmst_brand["Japanese"]["shoes"] = "";
	$fieldLabelsmst_brand["Japanese"]["outer"] = "アウター";
	$fieldToolTipsmst_brand["Japanese"]["outer"] = "";
	$placeHoldersmst_brand["Japanese"]["outer"] = "";
	$fieldLabelsmst_brand["Japanese"]["tops"] = "トップス";
	$fieldToolTipsmst_brand["Japanese"]["tops"] = "";
	$placeHoldersmst_brand["Japanese"]["tops"] = "";
	$fieldLabelsmst_brand["Japanese"]["camisole"] = "キャミソール・タンクトップ";
	$fieldToolTipsmst_brand["Japanese"]["camisole"] = "";
	$placeHoldersmst_brand["Japanese"]["camisole"] = "";
	$fieldLabelsmst_brand["Japanese"]["bottoms"] = "ボトムス・ワンピース・オールインワン";
	$fieldToolTipsmst_brand["Japanese"]["bottoms"] = "";
	$placeHoldersmst_brand["Japanese"]["bottoms"] = "";
	$fieldLabelsmst_brand["Japanese"]["underwear"] = "アンダーウェア";
	$fieldToolTipsmst_brand["Japanese"]["underwear"] = "";
	$placeHoldersmst_brand["Japanese"]["underwear"] = "";
	$fieldLabelsmst_brand["Japanese"]["Legwear"] = "レッグウェア";
	$fieldToolTipsmst_brand["Japanese"]["Legwear"] = "";
	$placeHoldersmst_brand["Japanese"]["Legwear"] = "";
	$fieldLabelsmst_brand["Japanese"]["hat"] = "帽子";
	$fieldToolTipsmst_brand["Japanese"]["hat"] = "";
	$placeHoldersmst_brand["Japanese"]["hat"] = "";
	$fieldLabelsmst_brand["Japanese"]["other"] = "その他ファッション小物";
	$fieldToolTipsmst_brand["Japanese"]["other"] = "";
	$placeHoldersmst_brand["Japanese"]["other"] = "";
	$fieldLabelsmst_brand["Japanese"]["kids"] = "子供服";
	$fieldToolTipsmst_brand["Japanese"]["kids"] = "";
	$placeHoldersmst_brand["Japanese"]["kids"] = "";
	$fieldLabelsmst_brand["Japanese"]["cosmetics"] = "香水・コスメ";
	$fieldToolTipsmst_brand["Japanese"]["cosmetics"] = "";
	$placeHoldersmst_brand["Japanese"]["cosmetics"] = "";
	$fieldLabelsmst_brand["Japanese"]["gold"] = "金・プラチナ・シルバー製品";
	$fieldToolTipsmst_brand["Japanese"]["gold"] = "";
	$placeHoldersmst_brand["Japanese"]["gold"] = "";
	$fieldLabelsmst_brand["Japanese"]["tableware"] = "食器";
	$fieldToolTipsmst_brand["Japanese"]["tableware"] = "";
	$placeHoldersmst_brand["Japanese"]["tableware"] = "";
	$fieldLabelsmst_brand["Japanese"]["umbrella"] = "傘";
	$fieldToolTipsmst_brand["Japanese"]["umbrella"] = "";
	$placeHoldersmst_brand["Japanese"]["umbrella"] = "";
	$fieldLabelsmst_brand["Japanese"]["season"] = "今季～来シーズンアイテムのみ";
	$fieldToolTipsmst_brand["Japanese"]["season"] = "";
	$placeHoldersmst_brand["Japanese"]["season"] = "";
	$fieldLabelsmst_brand["Japanese"]["new"] = "発売より1年以内のみ";
	$fieldToolTipsmst_brand["Japanese"]["new"] = "";
	$placeHoldersmst_brand["Japanese"]["new"] = "";
	$fieldLabelsmst_brand["Japanese"]["kyouka"] = "強化";
	$fieldToolTipsmst_brand["Japanese"]["kyouka"] = "";
	$placeHoldersmst_brand["Japanese"]["kyouka"] = "";
	$fieldLabelsmst_brand["Japanese"]["timest"] = "timest";
	$fieldToolTipsmst_brand["Japanese"]["timest"] = "";
	$placeHoldersmst_brand["Japanese"]["timest"] = "";
	$fieldLabelsmst_brand["Japanese"]["luxury"] = "ラグジュアリー";
	$fieldToolTipsmst_brand["Japanese"]["luxury"] = "";
	$placeHoldersmst_brand["Japanese"]["luxury"] = "";
	$fieldLabelsmst_brand["Japanese"]["brand_details"] = "ブランド詳細";
	$fieldToolTipsmst_brand["Japanese"]["brand_details"] = "";
	$placeHoldersmst_brand["Japanese"]["brand_details"] = "";
	$fieldLabelsmst_brand["Japanese"]["create_by"] = "Create By";
	$fieldToolTipsmst_brand["Japanese"]["create_by"] = "";
	$placeHoldersmst_brand["Japanese"]["create_by"] = "";
	$fieldLabelsmst_brand["Japanese"]["create_at"] = "Create At";
	$fieldToolTipsmst_brand["Japanese"]["create_at"] = "";
	$placeHoldersmst_brand["Japanese"]["create_at"] = "";
	$fieldLabelsmst_brand["Japanese"]["expensive"] = "高価";
	$fieldToolTipsmst_brand["Japanese"]["expensive"] = "";
	$placeHoldersmst_brand["Japanese"]["expensive"] = "";
	$fieldLabelsmst_brand["Japanese"]["rakutag_id"] = "Rakutag Id";
	$fieldToolTipsmst_brand["Japanese"]["rakutag_id"] = "";
	$placeHoldersmst_brand["Japanese"]["rakutag_id"] = "";
	$fieldLabelsmst_brand["Japanese"]["gray_but_want_to_buy"] = "グレーだけど買いたい";
	$fieldToolTipsmst_brand["Japanese"]["gray_but_want_to_buy"] = "";
	$placeHoldersmst_brand["Japanese"]["gray_but_want_to_buy"] = "";
	$fieldLabelsmst_brand["Japanese"]["tag_img"] = "【年代判別】品質タグやブランドタグ";
	$fieldToolTipsmst_brand["Japanese"]["tag_img"] = "";
	$placeHoldersmst_brand["Japanese"]["tag_img"] = "";
	$fieldLabelsmst_brand["Japanese"]["satei_memo"] = "【年代判別】ポイント";
	$fieldToolTipsmst_brand["Japanese"]["satei_memo"] = "";
	$placeHoldersmst_brand["Japanese"]["satei_memo"] = "";
	$fieldLabelsmst_brand["Japanese"]["url"] = "公式Url";
	$fieldToolTipsmst_brand["Japanese"]["url"] = "";
	$placeHoldersmst_brand["Japanese"]["url"] = "";
	$fieldLabelsmst_brand["Japanese"]["bullion_dealer"] = "地金商";
	$fieldToolTipsmst_brand["Japanese"]["bullion_dealer"] = "";
	$placeHoldersmst_brand["Japanese"]["bullion_dealer"] = "";
	$fieldLabelsmst_brand["Japanese"]["is_satei_group"] = "査定グループ";
	$fieldToolTipsmst_brand["Japanese"]["is_satei_group"] = "";
	$placeHoldersmst_brand["Japanese"]["is_satei_group"] = "";
	$fieldLabelsmst_brand["Japanese"]["count"] = "商品件数";
	$fieldToolTipsmst_brand["Japanese"]["count"] = "";
	$placeHoldersmst_brand["Japanese"]["count"] = "";
	$fieldLabelsmst_brand["Japanese"]["sum_nyuukin_price"] = "入金総額";
	$fieldToolTipsmst_brand["Japanese"]["sum_nyuukin_price"] = "";
	$placeHoldersmst_brand["Japanese"]["sum_nyuukin_price"] = "";
	$fieldLabelsmst_brand["Japanese"]["profit_rate"] = "粗利率";
	$fieldToolTipsmst_brand["Japanese"]["profit_rate"] = "";
	$placeHoldersmst_brand["Japanese"]["profit_rate"] = "";
	$fieldLabelsmst_brand["Japanese"]["is_purchase_D"] = "買取種別【D】";
	$fieldToolTipsmst_brand["Japanese"]["is_purchase_D"] = "";
	$placeHoldersmst_brand["Japanese"]["is_purchase_D"] = "";
	$fieldLabelsmst_brand["Japanese"]["is_purchase_J"] = "買取種別【J】";
	$fieldToolTipsmst_brand["Japanese"]["is_purchase_J"] = "";
	$placeHoldersmst_brand["Japanese"]["is_purchase_J"] = "";
	$fieldLabelsmst_brand["Japanese"]["is_purchase_K"] = "買取種別【K】";
	$fieldToolTipsmst_brand["Japanese"]["is_purchase_K"] = "";
	$placeHoldersmst_brand["Japanese"]["is_purchase_K"] = "";
	$fieldLabelsmst_brand["Japanese"]["is_purchase_B"] = "買取種別【B】";
	$fieldToolTipsmst_brand["Japanese"]["is_purchase_B"] = "";
	$placeHoldersmst_brand["Japanese"]["is_purchase_B"] = "";
	$fieldLabelsmst_brand["Japanese"]["is_purchase_W"] = "買取種別【W】";
	$fieldToolTipsmst_brand["Japanese"]["is_purchase_W"] = "";
	$placeHoldersmst_brand["Japanese"]["is_purchase_W"] = "";
	$fieldLabelsmst_brand["Japanese"]["is_japanese_artist"] = "日本人作家";
	$fieldToolTipsmst_brand["Japanese"]["is_japanese_artist"] = "";
	$placeHoldersmst_brand["Japanese"]["is_japanese_artist"] = "";
	if (count($fieldToolTipsmst_brand["Japanese"]))
		$tdatamst_brand[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmst_brand[""] = array();
	$fieldToolTipsmst_brand[""] = array();
	$placeHoldersmst_brand[""] = array();
	$pageTitlesmst_brand[""] = array();
	$fieldLabelsmst_brand[""]["id"] = "Id";
	$fieldToolTipsmst_brand[""]["id"] = "";
	$placeHoldersmst_brand[""]["id"] = "";
	$fieldLabelsmst_brand[""]["name"] = "Name";
	$fieldToolTipsmst_brand[""]["name"] = "";
	$placeHoldersmst_brand[""]["name"] = "";
	$fieldLabelsmst_brand[""]["eng_name"] = "Eng Name";
	$fieldToolTipsmst_brand[""]["eng_name"] = "";
	$placeHoldersmst_brand[""]["eng_name"] = "";
	$fieldLabelsmst_brand[""]["goods_id"] = "Goods Id";
	$fieldToolTipsmst_brand[""]["goods_id"] = "";
	$placeHoldersmst_brand[""]["goods_id"] = "";
	$fieldLabelsmst_brand[""]["japananese_name"] = "Japananese Name";
	$fieldToolTipsmst_brand[""]["japananese_name"] = "";
	$placeHoldersmst_brand[""]["japananese_name"] = "";
	$fieldLabelsmst_brand[""]["english_name"] = "English Name";
	$fieldToolTipsmst_brand[""]["english_name"] = "";
	$placeHoldersmst_brand[""]["english_name"] = "";
	$fieldLabelsmst_brand[""]["tag"] = "Tag";
	$fieldToolTipsmst_brand[""]["tag"] = "";
	$placeHoldersmst_brand[""]["tag"] = "";
	$fieldLabelsmst_brand[""]["tage"] = "Tage";
	$fieldToolTipsmst_brand[""]["tage"] = "";
	$placeHoldersmst_brand[""]["tage"] = "";
	$fieldLabelsmst_brand[""]["seach_j"] = "Seach J";
	$fieldToolTipsmst_brand[""]["seach_j"] = "";
	$placeHoldersmst_brand[""]["seach_j"] = "";
	$fieldLabelsmst_brand[""]["seach_e"] = "Seach E";
	$fieldToolTipsmst_brand[""]["seach_e"] = "";
	$placeHoldersmst_brand[""]["seach_e"] = "";
	$fieldLabelsmst_brand[""]["mst_band_title"] = "Mst Band Title";
	$fieldToolTipsmst_brand[""]["mst_band_title"] = "";
	$placeHoldersmst_brand[""]["mst_band_title"] = "";
	$fieldLabelsmst_brand[""]["register_at"] = "Register At";
	$fieldToolTipsmst_brand[""]["register_at"] = "";
	$placeHoldersmst_brand[""]["register_at"] = "";
	$fieldLabelsmst_brand[""]["update_at"] = "Update At";
	$fieldToolTipsmst_brand[""]["update_at"] = "";
	$placeHoldersmst_brand[""]["update_at"] = "";
	$fieldLabelsmst_brand[""]["register_by"] = "Register By";
	$fieldToolTipsmst_brand[""]["register_by"] = "";
	$placeHoldersmst_brand[""]["register_by"] = "";
	$fieldLabelsmst_brand[""]["update_by"] = "Update By";
	$fieldToolTipsmst_brand[""]["update_by"] = "";
	$placeHoldersmst_brand[""]["update_by"] = "";
	$fieldLabelsmst_brand[""]["preview"] = "Preview";
	$fieldToolTipsmst_brand[""]["preview"] = "";
	$placeHoldersmst_brand[""]["preview"] = "";
	$fieldLabelsmst_brand[""]["app_name"] = "App Name";
	$fieldToolTipsmst_brand[""]["app_name"] = "";
	$placeHoldersmst_brand[""]["app_name"] = "";
	$fieldLabelsmst_brand[""]["bag"] = "Bag";
	$fieldToolTipsmst_brand[""]["bag"] = "";
	$placeHoldersmst_brand[""]["bag"] = "";
	$fieldLabelsmst_brand[""]["wallet"] = "Wallet";
	$fieldToolTipsmst_brand[""]["wallet"] = "";
	$placeHoldersmst_brand[""]["wallet"] = "";
	$fieldLabelsmst_brand[""]["accessories"] = "Accessories";
	$fieldToolTipsmst_brand[""]["accessories"] = "";
	$placeHoldersmst_brand[""]["accessories"] = "";
	$fieldLabelsmst_brand[""]["catch"] = "Catch";
	$fieldToolTipsmst_brand[""]["catch"] = "";
	$placeHoldersmst_brand[""]["catch"] = "";
	$fieldLabelsmst_brand[""]["shoes"] = "Shoes";
	$fieldToolTipsmst_brand[""]["shoes"] = "";
	$placeHoldersmst_brand[""]["shoes"] = "";
	$fieldLabelsmst_brand[""]["outer"] = "Outer";
	$fieldToolTipsmst_brand[""]["outer"] = "";
	$placeHoldersmst_brand[""]["outer"] = "";
	$fieldLabelsmst_brand[""]["tops"] = "Tops";
	$fieldToolTipsmst_brand[""]["tops"] = "";
	$placeHoldersmst_brand[""]["tops"] = "";
	$fieldLabelsmst_brand[""]["camisole"] = "Camisole";
	$fieldToolTipsmst_brand[""]["camisole"] = "";
	$placeHoldersmst_brand[""]["camisole"] = "";
	$fieldLabelsmst_brand[""]["bottoms"] = "Bottoms";
	$fieldToolTipsmst_brand[""]["bottoms"] = "";
	$placeHoldersmst_brand[""]["bottoms"] = "";
	$fieldLabelsmst_brand[""]["underwear"] = "Underwear";
	$fieldToolTipsmst_brand[""]["underwear"] = "";
	$placeHoldersmst_brand[""]["underwear"] = "";
	$fieldLabelsmst_brand[""]["Legwear"] = "Legwear";
	$fieldToolTipsmst_brand[""]["Legwear"] = "";
	$placeHoldersmst_brand[""]["Legwear"] = "";
	$fieldLabelsmst_brand[""]["hat"] = "Hat";
	$fieldToolTipsmst_brand[""]["hat"] = "";
	$placeHoldersmst_brand[""]["hat"] = "";
	$fieldLabelsmst_brand[""]["other"] = "Other";
	$fieldToolTipsmst_brand[""]["other"] = "";
	$placeHoldersmst_brand[""]["other"] = "";
	$fieldLabelsmst_brand[""]["kids"] = "Kids";
	$fieldToolTipsmst_brand[""]["kids"] = "";
	$placeHoldersmst_brand[""]["kids"] = "";
	$fieldLabelsmst_brand[""]["cosmetics"] = "Cosmetics";
	$fieldToolTipsmst_brand[""]["cosmetics"] = "";
	$placeHoldersmst_brand[""]["cosmetics"] = "";
	$fieldLabelsmst_brand[""]["gold"] = "Gold";
	$fieldToolTipsmst_brand[""]["gold"] = "";
	$placeHoldersmst_brand[""]["gold"] = "";
	$fieldLabelsmst_brand[""]["tableware"] = "Tableware";
	$fieldToolTipsmst_brand[""]["tableware"] = "";
	$placeHoldersmst_brand[""]["tableware"] = "";
	$fieldLabelsmst_brand[""]["umbrella"] = "Umbrella";
	$fieldToolTipsmst_brand[""]["umbrella"] = "";
	$placeHoldersmst_brand[""]["umbrella"] = "";
	$fieldLabelsmst_brand[""]["season"] = "Season";
	$fieldToolTipsmst_brand[""]["season"] = "";
	$placeHoldersmst_brand[""]["season"] = "";
	$fieldLabelsmst_brand[""]["new"] = "New";
	$fieldToolTipsmst_brand[""]["new"] = "";
	$placeHoldersmst_brand[""]["new"] = "";
	$fieldLabelsmst_brand[""]["kyouka"] = "Kyouka";
	$fieldToolTipsmst_brand[""]["kyouka"] = "";
	$placeHoldersmst_brand[""]["kyouka"] = "";
	$fieldLabelsmst_brand[""]["timest"] = "Timest";
	$fieldToolTipsmst_brand[""]["timest"] = "";
	$placeHoldersmst_brand[""]["timest"] = "";
	$fieldLabelsmst_brand[""]["luxury"] = "Luxury";
	$fieldToolTipsmst_brand[""]["luxury"] = "";
	$placeHoldersmst_brand[""]["luxury"] = "";
	$fieldLabelsmst_brand[""]["brand_details"] = "Brand Details";
	$fieldToolTipsmst_brand[""]["brand_details"] = "";
	$placeHoldersmst_brand[""]["brand_details"] = "";
	$fieldLabelsmst_brand[""]["create_by"] = "Create By";
	$fieldToolTipsmst_brand[""]["create_by"] = "";
	$placeHoldersmst_brand[""]["create_by"] = "";
	$fieldLabelsmst_brand[""]["create_at"] = "Create At";
	$fieldToolTipsmst_brand[""]["create_at"] = "";
	$placeHoldersmst_brand[""]["create_at"] = "";
	$fieldLabelsmst_brand[""]["expensive"] = "Expensive";
	$fieldToolTipsmst_brand[""]["expensive"] = "";
	$placeHoldersmst_brand[""]["expensive"] = "";
	$fieldLabelsmst_brand[""]["rakutag_id"] = "Rakutag Id";
	$fieldToolTipsmst_brand[""]["rakutag_id"] = "";
	$placeHoldersmst_brand[""]["rakutag_id"] = "";
	$fieldLabelsmst_brand[""]["gray_but_want_to_buy"] = "Gray But Want To Buy";
	$fieldToolTipsmst_brand[""]["gray_but_want_to_buy"] = "";
	$placeHoldersmst_brand[""]["gray_but_want_to_buy"] = "";
	$fieldLabelsmst_brand[""]["tag_img"] = "Tag Img";
	$fieldToolTipsmst_brand[""]["tag_img"] = "";
	$placeHoldersmst_brand[""]["tag_img"] = "";
	$fieldLabelsmst_brand[""]["satei_memo"] = "Satei Memo";
	$fieldToolTipsmst_brand[""]["satei_memo"] = "";
	$placeHoldersmst_brand[""]["satei_memo"] = "";
	$fieldLabelsmst_brand[""]["url"] = "Url";
	$fieldToolTipsmst_brand[""]["url"] = "";
	$placeHoldersmst_brand[""]["url"] = "";
	$fieldLabelsmst_brand[""]["bullion_dealer"] = "Bullion Dealer";
	$fieldToolTipsmst_brand[""]["bullion_dealer"] = "";
	$placeHoldersmst_brand[""]["bullion_dealer"] = "";
	$fieldLabelsmst_brand[""]["is_satei_group"] = "Is Satei Group";
	$fieldToolTipsmst_brand[""]["is_satei_group"] = "";
	$placeHoldersmst_brand[""]["is_satei_group"] = "";
	$fieldLabelsmst_brand[""]["count"] = "Count";
	$fieldToolTipsmst_brand[""]["count"] = "";
	$placeHoldersmst_brand[""]["count"] = "";
	$fieldLabelsmst_brand[""]["sum_nyuukin_price"] = "Sum Nyuukin Price";
	$fieldToolTipsmst_brand[""]["sum_nyuukin_price"] = "";
	$placeHoldersmst_brand[""]["sum_nyuukin_price"] = "";
	$fieldLabelsmst_brand[""]["profit_rate"] = "Profit Rate";
	$fieldToolTipsmst_brand[""]["profit_rate"] = "";
	$placeHoldersmst_brand[""]["profit_rate"] = "";
	$fieldLabelsmst_brand[""]["is_purchase_D"] = "Is Purchase D";
	$fieldToolTipsmst_brand[""]["is_purchase_D"] = "";
	$placeHoldersmst_brand[""]["is_purchase_D"] = "";
	$fieldLabelsmst_brand[""]["is_purchase_J"] = "Is Purchase J";
	$fieldToolTipsmst_brand[""]["is_purchase_J"] = "";
	$placeHoldersmst_brand[""]["is_purchase_J"] = "";
	$fieldLabelsmst_brand[""]["is_purchase_K"] = "Is Purchase K";
	$fieldToolTipsmst_brand[""]["is_purchase_K"] = "";
	$placeHoldersmst_brand[""]["is_purchase_K"] = "";
	$fieldLabelsmst_brand[""]["is_purchase_B"] = "Is Purchase B";
	$fieldToolTipsmst_brand[""]["is_purchase_B"] = "";
	$placeHoldersmst_brand[""]["is_purchase_B"] = "";
	$fieldLabelsmst_brand[""]["is_purchase_W"] = "Is Purchase W";
	$fieldToolTipsmst_brand[""]["is_purchase_W"] = "";
	$placeHoldersmst_brand[""]["is_purchase_W"] = "";
	$fieldLabelsmst_brand[""]["is_japanese_artist"] = "Is Japanese Artist";
	$fieldToolTipsmst_brand[""]["is_japanese_artist"] = "";
	$placeHoldersmst_brand[""]["is_japanese_artist"] = "";
	if (count($fieldToolTipsmst_brand[""]))
		$tdatamst_brand[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmst_brand["English"] = array();
	$fieldToolTipsmst_brand["English"] = array();
	$placeHoldersmst_brand["English"] = array();
	$pageTitlesmst_brand["English"] = array();
	$fieldLabelsmst_brand["English"]["id"] = "Id";
	$fieldToolTipsmst_brand["English"]["id"] = "";
	$placeHoldersmst_brand["English"]["id"] = "";
	$fieldLabelsmst_brand["English"]["name"] = "Name";
	$fieldToolTipsmst_brand["English"]["name"] = "";
	$placeHoldersmst_brand["English"]["name"] = "";
	$fieldLabelsmst_brand["English"]["eng_name"] = "Eng Name";
	$fieldToolTipsmst_brand["English"]["eng_name"] = "";
	$placeHoldersmst_brand["English"]["eng_name"] = "";
	$fieldLabelsmst_brand["English"]["goods_id"] = "Goods Id";
	$fieldToolTipsmst_brand["English"]["goods_id"] = "";
	$placeHoldersmst_brand["English"]["goods_id"] = "";
	$fieldLabelsmst_brand["English"]["japananese_name"] = "Japananese Name";
	$fieldToolTipsmst_brand["English"]["japananese_name"] = "";
	$placeHoldersmst_brand["English"]["japananese_name"] = "";
	$fieldLabelsmst_brand["English"]["english_name"] = "English Name";
	$fieldToolTipsmst_brand["English"]["english_name"] = "";
	$placeHoldersmst_brand["English"]["english_name"] = "";
	$fieldLabelsmst_brand["English"]["tag"] = "Tag";
	$fieldToolTipsmst_brand["English"]["tag"] = "";
	$placeHoldersmst_brand["English"]["tag"] = "";
	$fieldLabelsmst_brand["English"]["tage"] = "Tage";
	$fieldToolTipsmst_brand["English"]["tage"] = "";
	$placeHoldersmst_brand["English"]["tage"] = "";
	$fieldLabelsmst_brand["English"]["seach_j"] = "Seach J";
	$fieldToolTipsmst_brand["English"]["seach_j"] = "";
	$placeHoldersmst_brand["English"]["seach_j"] = "";
	$fieldLabelsmst_brand["English"]["seach_e"] = "Seach E";
	$fieldToolTipsmst_brand["English"]["seach_e"] = "";
	$placeHoldersmst_brand["English"]["seach_e"] = "";
	$fieldLabelsmst_brand["English"]["mst_band_title"] = "Mst Band Title";
	$fieldToolTipsmst_brand["English"]["mst_band_title"] = "";
	$placeHoldersmst_brand["English"]["mst_band_title"] = "";
	$fieldLabelsmst_brand["English"]["register_at"] = "Register At";
	$fieldToolTipsmst_brand["English"]["register_at"] = "";
	$placeHoldersmst_brand["English"]["register_at"] = "";
	$fieldLabelsmst_brand["English"]["update_at"] = "Update At";
	$fieldToolTipsmst_brand["English"]["update_at"] = "";
	$placeHoldersmst_brand["English"]["update_at"] = "";
	$fieldLabelsmst_brand["English"]["register_by"] = "Register By";
	$fieldToolTipsmst_brand["English"]["register_by"] = "";
	$placeHoldersmst_brand["English"]["register_by"] = "";
	$fieldLabelsmst_brand["English"]["update_by"] = "Update By";
	$fieldToolTipsmst_brand["English"]["update_by"] = "";
	$placeHoldersmst_brand["English"]["update_by"] = "";
	$fieldLabelsmst_brand["English"]["preview"] = "Preview";
	$fieldToolTipsmst_brand["English"]["preview"] = "";
	$placeHoldersmst_brand["English"]["preview"] = "";
	$fieldLabelsmst_brand["English"]["app_name"] = "App Name";
	$fieldToolTipsmst_brand["English"]["app_name"] = "";
	$placeHoldersmst_brand["English"]["app_name"] = "";
	$fieldLabelsmst_brand["English"]["bag"] = "Bag";
	$fieldToolTipsmst_brand["English"]["bag"] = "";
	$placeHoldersmst_brand["English"]["bag"] = "";
	$fieldLabelsmst_brand["English"]["wallet"] = "Wallet";
	$fieldToolTipsmst_brand["English"]["wallet"] = "";
	$placeHoldersmst_brand["English"]["wallet"] = "";
	$fieldLabelsmst_brand["English"]["accessories"] = "Accessories";
	$fieldToolTipsmst_brand["English"]["accessories"] = "";
	$placeHoldersmst_brand["English"]["accessories"] = "";
	$fieldLabelsmst_brand["English"]["catch"] = "Catch";
	$fieldToolTipsmst_brand["English"]["catch"] = "";
	$placeHoldersmst_brand["English"]["catch"] = "";
	$fieldLabelsmst_brand["English"]["shoes"] = "Shoes";
	$fieldToolTipsmst_brand["English"]["shoes"] = "";
	$placeHoldersmst_brand["English"]["shoes"] = "";
	$fieldLabelsmst_brand["English"]["outer"] = "Outer";
	$fieldToolTipsmst_brand["English"]["outer"] = "";
	$placeHoldersmst_brand["English"]["outer"] = "";
	$fieldLabelsmst_brand["English"]["tops"] = "Tops";
	$fieldToolTipsmst_brand["English"]["tops"] = "";
	$placeHoldersmst_brand["English"]["tops"] = "";
	$fieldLabelsmst_brand["English"]["camisole"] = "Camisole";
	$fieldToolTipsmst_brand["English"]["camisole"] = "";
	$placeHoldersmst_brand["English"]["camisole"] = "";
	$fieldLabelsmst_brand["English"]["bottoms"] = "Bottoms";
	$fieldToolTipsmst_brand["English"]["bottoms"] = "";
	$placeHoldersmst_brand["English"]["bottoms"] = "";
	$fieldLabelsmst_brand["English"]["underwear"] = "Underwear";
	$fieldToolTipsmst_brand["English"]["underwear"] = "";
	$placeHoldersmst_brand["English"]["underwear"] = "";
	$fieldLabelsmst_brand["English"]["Legwear"] = "Legwear";
	$fieldToolTipsmst_brand["English"]["Legwear"] = "";
	$placeHoldersmst_brand["English"]["Legwear"] = "";
	$fieldLabelsmst_brand["English"]["hat"] = "Hat";
	$fieldToolTipsmst_brand["English"]["hat"] = "";
	$placeHoldersmst_brand["English"]["hat"] = "";
	$fieldLabelsmst_brand["English"]["other"] = "Other";
	$fieldToolTipsmst_brand["English"]["other"] = "";
	$placeHoldersmst_brand["English"]["other"] = "";
	$fieldLabelsmst_brand["English"]["kids"] = "Kids";
	$fieldToolTipsmst_brand["English"]["kids"] = "";
	$placeHoldersmst_brand["English"]["kids"] = "";
	$fieldLabelsmst_brand["English"]["cosmetics"] = "Cosmetics";
	$fieldToolTipsmst_brand["English"]["cosmetics"] = "";
	$placeHoldersmst_brand["English"]["cosmetics"] = "";
	$fieldLabelsmst_brand["English"]["gold"] = "Gold";
	$fieldToolTipsmst_brand["English"]["gold"] = "";
	$placeHoldersmst_brand["English"]["gold"] = "";
	$fieldLabelsmst_brand["English"]["tableware"] = "Tableware";
	$fieldToolTipsmst_brand["English"]["tableware"] = "";
	$placeHoldersmst_brand["English"]["tableware"] = "";
	$fieldLabelsmst_brand["English"]["umbrella"] = "Umbrella";
	$fieldToolTipsmst_brand["English"]["umbrella"] = "";
	$placeHoldersmst_brand["English"]["umbrella"] = "";
	$fieldLabelsmst_brand["English"]["season"] = "Season";
	$fieldToolTipsmst_brand["English"]["season"] = "";
	$placeHoldersmst_brand["English"]["season"] = "";
	$fieldLabelsmst_brand["English"]["new"] = "New";
	$fieldToolTipsmst_brand["English"]["new"] = "";
	$placeHoldersmst_brand["English"]["new"] = "";
	$fieldLabelsmst_brand["English"]["kyouka"] = "Kyouka";
	$fieldToolTipsmst_brand["English"]["kyouka"] = "";
	$placeHoldersmst_brand["English"]["kyouka"] = "";
	$fieldLabelsmst_brand["English"]["timest"] = "Timest";
	$fieldToolTipsmst_brand["English"]["timest"] = "";
	$placeHoldersmst_brand["English"]["timest"] = "";
	$fieldLabelsmst_brand["English"]["luxury"] = "Luxury";
	$fieldToolTipsmst_brand["English"]["luxury"] = "";
	$placeHoldersmst_brand["English"]["luxury"] = "";
	$fieldLabelsmst_brand["English"]["brand_details"] = "Brand Details";
	$fieldToolTipsmst_brand["English"]["brand_details"] = "";
	$placeHoldersmst_brand["English"]["brand_details"] = "";
	$fieldLabelsmst_brand["English"]["create_by"] = "Create By";
	$fieldToolTipsmst_brand["English"]["create_by"] = "";
	$placeHoldersmst_brand["English"]["create_by"] = "";
	$fieldLabelsmst_brand["English"]["create_at"] = "Create At";
	$fieldToolTipsmst_brand["English"]["create_at"] = "";
	$placeHoldersmst_brand["English"]["create_at"] = "";
	$fieldLabelsmst_brand["English"]["expensive"] = "Expensive";
	$fieldToolTipsmst_brand["English"]["expensive"] = "";
	$placeHoldersmst_brand["English"]["expensive"] = "";
	$fieldLabelsmst_brand["English"]["rakutag_id"] = "Rakutag Id";
	$fieldToolTipsmst_brand["English"]["rakutag_id"] = "";
	$placeHoldersmst_brand["English"]["rakutag_id"] = "";
	$fieldLabelsmst_brand["English"]["gray_but_want_to_buy"] = "Gray But Want To Buy";
	$fieldToolTipsmst_brand["English"]["gray_but_want_to_buy"] = "";
	$placeHoldersmst_brand["English"]["gray_but_want_to_buy"] = "";
	$fieldLabelsmst_brand["English"]["tag_img"] = "Tag Img";
	$fieldToolTipsmst_brand["English"]["tag_img"] = "";
	$placeHoldersmst_brand["English"]["tag_img"] = "";
	$fieldLabelsmst_brand["English"]["satei_memo"] = "Satei Memo";
	$fieldToolTipsmst_brand["English"]["satei_memo"] = "";
	$placeHoldersmst_brand["English"]["satei_memo"] = "";
	$fieldLabelsmst_brand["English"]["url"] = "Url";
	$fieldToolTipsmst_brand["English"]["url"] = "";
	$placeHoldersmst_brand["English"]["url"] = "";
	$fieldLabelsmst_brand["English"]["bullion_dealer"] = "Bullion Dealer";
	$fieldToolTipsmst_brand["English"]["bullion_dealer"] = "";
	$placeHoldersmst_brand["English"]["bullion_dealer"] = "";
	$fieldLabelsmst_brand["English"]["is_satei_group"] = "Is Satei Group";
	$fieldToolTipsmst_brand["English"]["is_satei_group"] = "";
	$placeHoldersmst_brand["English"]["is_satei_group"] = "";
	$fieldLabelsmst_brand["English"]["count"] = "Count";
	$fieldToolTipsmst_brand["English"]["count"] = "";
	$placeHoldersmst_brand["English"]["count"] = "";
	$fieldLabelsmst_brand["English"]["sum_nyuukin_price"] = "Sum Nyuukin Price";
	$fieldToolTipsmst_brand["English"]["sum_nyuukin_price"] = "";
	$placeHoldersmst_brand["English"]["sum_nyuukin_price"] = "";
	$fieldLabelsmst_brand["English"]["profit_rate"] = "Profit Rate";
	$fieldToolTipsmst_brand["English"]["profit_rate"] = "";
	$placeHoldersmst_brand["English"]["profit_rate"] = "";
	$fieldLabelsmst_brand["English"]["is_purchase_D"] = "Is Purchase D";
	$fieldToolTipsmst_brand["English"]["is_purchase_D"] = "";
	$placeHoldersmst_brand["English"]["is_purchase_D"] = "";
	$fieldLabelsmst_brand["English"]["is_purchase_J"] = "Is Purchase J";
	$fieldToolTipsmst_brand["English"]["is_purchase_J"] = "";
	$placeHoldersmst_brand["English"]["is_purchase_J"] = "";
	$fieldLabelsmst_brand["English"]["is_purchase_K"] = "Is Purchase K";
	$fieldToolTipsmst_brand["English"]["is_purchase_K"] = "";
	$placeHoldersmst_brand["English"]["is_purchase_K"] = "";
	$fieldLabelsmst_brand["English"]["is_purchase_B"] = "Is Purchase B";
	$fieldToolTipsmst_brand["English"]["is_purchase_B"] = "";
	$placeHoldersmst_brand["English"]["is_purchase_B"] = "";
	$fieldLabelsmst_brand["English"]["is_purchase_W"] = "Is Purchase W";
	$fieldToolTipsmst_brand["English"]["is_purchase_W"] = "";
	$placeHoldersmst_brand["English"]["is_purchase_W"] = "";
	$fieldLabelsmst_brand["English"]["is_japanese_artist"] = "Is Japanese Artist";
	$fieldToolTipsmst_brand["English"]["is_japanese_artist"] = "";
	$placeHoldersmst_brand["English"]["is_japanese_artist"] = "";
	if (count($fieldToolTipsmst_brand["English"]))
		$tdatamst_brand[".isUseToolTips"] = true;
}


	$tdatamst_brand[".NCSearch"] = true;



$tdatamst_brand[".shortTableName"] = "mst_brand";
$tdatamst_brand[".nSecOptions"] = 0;
$tdatamst_brand[".recsPerRowPrint"] = 1;
$tdatamst_brand[".mainTableOwnerID"] = "";
$tdatamst_brand[".moveNext"] = 1;
$tdatamst_brand[".entityType"] = 0;

$tdatamst_brand[".strOriginalTableName"] = "mst_brand";

	



$tdatamst_brand[".showAddInPopup"] = false;

$tdatamst_brand[".showEditInPopup"] = false;

$tdatamst_brand[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamst_brand[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamst_brand[".fieldsForRegister"] = array();

$tdatamst_brand[".listAjax"] = false;

	$tdatamst_brand[".audit"] = true;

	$tdatamst_brand[".locking"] = false;



$tdatamst_brand[".list"] = true;

$tdatamst_brand[".inlineEdit"] = true;


$tdatamst_brand[".reorderRecordsByHeader"] = true;



$tdatamst_brand[".inlineAdd"] = true;

$tdatamst_brand[".import"] = true;

$tdatamst_brand[".exportTo"] = true;


$tdatamst_brand[".delete"] = true;

$tdatamst_brand[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamst_brand[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamst_brand[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamst_brand[".searchSaving"] = false;
//

$tdatamst_brand[".showSearchPanel"] = true;
		$tdatamst_brand[".flexibleSearch"] = true;

$tdatamst_brand[".isUseAjaxSuggest"] = true;

$tdatamst_brand[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatamst_brand[".ajaxCodeSnippetAdded"] = false;

$tdatamst_brand[".buttonsAdded"] = false;

$tdatamst_brand[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamst_brand[".isUseTimeForSearch"] = false;





$tdatamst_brand[".allSearchFields"] = array();
$tdatamst_brand[".filterFields"] = array();
$tdatamst_brand[".requiredSearchFields"] = array();

$tdatamst_brand[".allSearchFields"][] = "is_japanese_artist";
	$tdatamst_brand[".allSearchFields"][] = "is_satei_group";
	$tdatamst_brand[".allSearchFields"][] = "bullion_dealer";
	$tdatamst_brand[".allSearchFields"][] = "tag_img";
	$tdatamst_brand[".allSearchFields"][] = "satei_memo";
	$tdatamst_brand[".allSearchFields"][] = "url";
	$tdatamst_brand[".allSearchFields"][] = "id";
	$tdatamst_brand[".allSearchFields"][] = "name";
	$tdatamst_brand[".allSearchFields"][] = "seach_j";
	$tdatamst_brand[".allSearchFields"][] = "register_at";
	$tdatamst_brand[".allSearchFields"][] = "update_at";
	$tdatamst_brand[".allSearchFields"][] = "register_by";
	$tdatamst_brand[".allSearchFields"][] = "update_by";
	$tdatamst_brand[".allSearchFields"][] = "preview";
	$tdatamst_brand[".allSearchFields"][] = "count";
	$tdatamst_brand[".allSearchFields"][] = "sum_nyuukin_price";
	$tdatamst_brand[".allSearchFields"][] = "profit_rate";
	$tdatamst_brand[".allSearchFields"][] = "bag";
	$tdatamst_brand[".allSearchFields"][] = "wallet";
	$tdatamst_brand[".allSearchFields"][] = "accessories";
	$tdatamst_brand[".allSearchFields"][] = "catch";
	$tdatamst_brand[".allSearchFields"][] = "shoes";
	$tdatamst_brand[".allSearchFields"][] = "outer";
	$tdatamst_brand[".allSearchFields"][] = "tops";
	$tdatamst_brand[".allSearchFields"][] = "camisole";
	$tdatamst_brand[".allSearchFields"][] = "bottoms";
	$tdatamst_brand[".allSearchFields"][] = "underwear";
	$tdatamst_brand[".allSearchFields"][] = "Legwear";
	$tdatamst_brand[".allSearchFields"][] = "hat";
	$tdatamst_brand[".allSearchFields"][] = "other";
	$tdatamst_brand[".allSearchFields"][] = "kids";
	$tdatamst_brand[".allSearchFields"][] = "cosmetics";
	$tdatamst_brand[".allSearchFields"][] = "gold";
	$tdatamst_brand[".allSearchFields"][] = "tableware";
	$tdatamst_brand[".allSearchFields"][] = "umbrella";
	$tdatamst_brand[".allSearchFields"][] = "season";
	$tdatamst_brand[".allSearchFields"][] = "new";
	$tdatamst_brand[".allSearchFields"][] = "kyouka";
	$tdatamst_brand[".allSearchFields"][] = "luxury";
	$tdatamst_brand[".allSearchFields"][] = "brand_details";
	$tdatamst_brand[".allSearchFields"][] = "expensive";
	$tdatamst_brand[".allSearchFields"][] = "gray_but_want_to_buy";
	$tdatamst_brand[".allSearchFields"][] = "is_purchase_D";
	$tdatamst_brand[".allSearchFields"][] = "is_purchase_J";
	$tdatamst_brand[".allSearchFields"][] = "is_purchase_K";
	$tdatamst_brand[".allSearchFields"][] = "is_purchase_B";
	$tdatamst_brand[".allSearchFields"][] = "is_purchase_W";
	

$tdatamst_brand[".googleLikeFields"] = array();
$tdatamst_brand[".googleLikeFields"][] = "id";
$tdatamst_brand[".googleLikeFields"][] = "name";
$tdatamst_brand[".googleLikeFields"][] = "seach_j";
$tdatamst_brand[".googleLikeFields"][] = "register_at";
$tdatamst_brand[".googleLikeFields"][] = "update_at";
$tdatamst_brand[".googleLikeFields"][] = "register_by";
$tdatamst_brand[".googleLikeFields"][] = "update_by";
$tdatamst_brand[".googleLikeFields"][] = "preview";
$tdatamst_brand[".googleLikeFields"][] = "bag";
$tdatamst_brand[".googleLikeFields"][] = "wallet";
$tdatamst_brand[".googleLikeFields"][] = "accessories";
$tdatamst_brand[".googleLikeFields"][] = "catch";
$tdatamst_brand[".googleLikeFields"][] = "shoes";
$tdatamst_brand[".googleLikeFields"][] = "outer";
$tdatamst_brand[".googleLikeFields"][] = "tops";
$tdatamst_brand[".googleLikeFields"][] = "camisole";
$tdatamst_brand[".googleLikeFields"][] = "bottoms";
$tdatamst_brand[".googleLikeFields"][] = "underwear";
$tdatamst_brand[".googleLikeFields"][] = "Legwear";
$tdatamst_brand[".googleLikeFields"][] = "hat";
$tdatamst_brand[".googleLikeFields"][] = "other";
$tdatamst_brand[".googleLikeFields"][] = "kids";
$tdatamst_brand[".googleLikeFields"][] = "cosmetics";
$tdatamst_brand[".googleLikeFields"][] = "gold";
$tdatamst_brand[".googleLikeFields"][] = "tableware";
$tdatamst_brand[".googleLikeFields"][] = "umbrella";
$tdatamst_brand[".googleLikeFields"][] = "season";
$tdatamst_brand[".googleLikeFields"][] = "new";
$tdatamst_brand[".googleLikeFields"][] = "kyouka";
$tdatamst_brand[".googleLikeFields"][] = "luxury";
$tdatamst_brand[".googleLikeFields"][] = "brand_details";
$tdatamst_brand[".googleLikeFields"][] = "expensive";
$tdatamst_brand[".googleLikeFields"][] = "gray_but_want_to_buy";
$tdatamst_brand[".googleLikeFields"][] = "tag_img";
$tdatamst_brand[".googleLikeFields"][] = "satei_memo";
$tdatamst_brand[".googleLikeFields"][] = "url";
$tdatamst_brand[".googleLikeFields"][] = "bullion_dealer";
$tdatamst_brand[".googleLikeFields"][] = "is_satei_group";
$tdatamst_brand[".googleLikeFields"][] = "count";
$tdatamst_brand[".googleLikeFields"][] = "sum_nyuukin_price";
$tdatamst_brand[".googleLikeFields"][] = "profit_rate";
$tdatamst_brand[".googleLikeFields"][] = "is_purchase_D";
$tdatamst_brand[".googleLikeFields"][] = "is_purchase_J";
$tdatamst_brand[".googleLikeFields"][] = "is_purchase_K";
$tdatamst_brand[".googleLikeFields"][] = "is_purchase_B";
$tdatamst_brand[".googleLikeFields"][] = "is_purchase_W";
$tdatamst_brand[".googleLikeFields"][] = "is_japanese_artist";

$tdatamst_brand[".panelSearchFields"] = array();
$tdatamst_brand[".searchPanelOptions"] = array();
$tdatamst_brand[".panelSearchFields"][] = "bullion_dealer";
	$tdatamst_brand[".panelSearchFields"][] = "id";
	$tdatamst_brand[".panelSearchFields"][] = "name";
	$tdatamst_brand[".panelSearchFields"][] = "seach_j";
	$tdatamst_brand[".panelSearchFields"][] = "register_at";
	$tdatamst_brand[".panelSearchFields"][] = "update_at";
	$tdatamst_brand[".panelSearchFields"][] = "register_by";
	$tdatamst_brand[".panelSearchFields"][] = "update_by";
	$tdatamst_brand[".panelSearchFields"][] = "preview";
	$tdatamst_brand[".panelSearchFields"][] = "bag";
	$tdatamst_brand[".panelSearchFields"][] = "wallet";
	$tdatamst_brand[".panelSearchFields"][] = "accessories";
	$tdatamst_brand[".panelSearchFields"][] = "catch";
	$tdatamst_brand[".panelSearchFields"][] = "shoes";
	$tdatamst_brand[".panelSearchFields"][] = "outer";
	$tdatamst_brand[".panelSearchFields"][] = "tops";
	$tdatamst_brand[".panelSearchFields"][] = "camisole";
	$tdatamst_brand[".panelSearchFields"][] = "bottoms";
	$tdatamst_brand[".panelSearchFields"][] = "underwear";
	$tdatamst_brand[".panelSearchFields"][] = "Legwear";
	$tdatamst_brand[".panelSearchFields"][] = "hat";
	$tdatamst_brand[".panelSearchFields"][] = "other";
	$tdatamst_brand[".panelSearchFields"][] = "kids";
	$tdatamst_brand[".panelSearchFields"][] = "cosmetics";
	$tdatamst_brand[".panelSearchFields"][] = "gold";
	$tdatamst_brand[".panelSearchFields"][] = "tableware";
	$tdatamst_brand[".panelSearchFields"][] = "umbrella";
	$tdatamst_brand[".panelSearchFields"][] = "season";
	$tdatamst_brand[".panelSearchFields"][] = "new";
	$tdatamst_brand[".panelSearchFields"][] = "kyouka";
	$tdatamst_brand[".panelSearchFields"][] = "luxury";
	$tdatamst_brand[".panelSearchFields"][] = "brand_details";
	$tdatamst_brand[".panelSearchFields"][] = "expensive";
	
$tdatamst_brand[".advSearchFields"] = array();
$tdatamst_brand[".advSearchFields"][] = "is_japanese_artist";
$tdatamst_brand[".advSearchFields"][] = "is_satei_group";
$tdatamst_brand[".advSearchFields"][] = "bullion_dealer";
$tdatamst_brand[".advSearchFields"][] = "tag_img";
$tdatamst_brand[".advSearchFields"][] = "satei_memo";
$tdatamst_brand[".advSearchFields"][] = "url";
$tdatamst_brand[".advSearchFields"][] = "id";
$tdatamst_brand[".advSearchFields"][] = "name";
$tdatamst_brand[".advSearchFields"][] = "seach_j";
$tdatamst_brand[".advSearchFields"][] = "register_at";
$tdatamst_brand[".advSearchFields"][] = "update_at";
$tdatamst_brand[".advSearchFields"][] = "register_by";
$tdatamst_brand[".advSearchFields"][] = "update_by";
$tdatamst_brand[".advSearchFields"][] = "preview";
$tdatamst_brand[".advSearchFields"][] = "count";
$tdatamst_brand[".advSearchFields"][] = "sum_nyuukin_price";
$tdatamst_brand[".advSearchFields"][] = "profit_rate";
$tdatamst_brand[".advSearchFields"][] = "bag";
$tdatamst_brand[".advSearchFields"][] = "wallet";
$tdatamst_brand[".advSearchFields"][] = "accessories";
$tdatamst_brand[".advSearchFields"][] = "catch";
$tdatamst_brand[".advSearchFields"][] = "shoes";
$tdatamst_brand[".advSearchFields"][] = "outer";
$tdatamst_brand[".advSearchFields"][] = "tops";
$tdatamst_brand[".advSearchFields"][] = "camisole";
$tdatamst_brand[".advSearchFields"][] = "bottoms";
$tdatamst_brand[".advSearchFields"][] = "underwear";
$tdatamst_brand[".advSearchFields"][] = "Legwear";
$tdatamst_brand[".advSearchFields"][] = "hat";
$tdatamst_brand[".advSearchFields"][] = "other";
$tdatamst_brand[".advSearchFields"][] = "kids";
$tdatamst_brand[".advSearchFields"][] = "cosmetics";
$tdatamst_brand[".advSearchFields"][] = "gold";
$tdatamst_brand[".advSearchFields"][] = "tableware";
$tdatamst_brand[".advSearchFields"][] = "umbrella";
$tdatamst_brand[".advSearchFields"][] = "season";
$tdatamst_brand[".advSearchFields"][] = "new";
$tdatamst_brand[".advSearchFields"][] = "kyouka";
$tdatamst_brand[".advSearchFields"][] = "luxury";
$tdatamst_brand[".advSearchFields"][] = "brand_details";
$tdatamst_brand[".advSearchFields"][] = "expensive";
$tdatamst_brand[".advSearchFields"][] = "gray_but_want_to_buy";
$tdatamst_brand[".advSearchFields"][] = "is_purchase_D";
$tdatamst_brand[".advSearchFields"][] = "is_purchase_J";
$tdatamst_brand[".advSearchFields"][] = "is_purchase_K";
$tdatamst_brand[".advSearchFields"][] = "is_purchase_B";
$tdatamst_brand[".advSearchFields"][] = "is_purchase_W";

$tdatamst_brand[".tableType"] = "list";

$tdatamst_brand[".printerPageOrientation"] = 0;
$tdatamst_brand[".nPrinterPageScale"] = 100;

$tdatamst_brand[".nPrinterSplitRecords"] = 40;

$tdatamst_brand[".nPrinterPDFSplitRecords"] = 40;



$tdatamst_brand[".geocodingEnabled"] = false;





$tdatamst_brand[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamst_brand[".pageSize"] = 100;

$tdatamst_brand[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `mst_brand`.`id` DESC, `mst_brand`.`tag_img` DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamst_brand[".strOrderBy"] = $tstrOrderBy;

$tdatamst_brand[".orderindexes"] = array();
$tdatamst_brand[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "`mst_brand`.`id`");
$tdatamst_brand[".orderindexes"][] = array(47, (0 ? "ASC" : "DESC"), "`mst_brand`.`tag_img`");

$tdatamst_brand[".sqlHead"] = "SELECT `mst_brand`.`id`,  `mst_brand`.`name`,  `mst_brand`.`eng_name`,  `mst_brand`.`goods_id`,  `mst_brand`.`japananese_name`,  `mst_brand`.`english_name`,  `mst_brand`.`tag`,  `mst_brand`.`tage`,  `mst_brand`.`seach_j`,  `mst_brand`.`seach_e`,  `mst_brand`.`mst_band_title`,  `mst_brand`.`register_at`,  `mst_brand`.`update_at`,  `mst_brand`.`register_by`,  `mst_brand`.`update_by`,  `mst_brand`.`preview`,  `mst_brand`.`app_name`,  `mst_brand`.`bag`,  `mst_brand`.`wallet`,  `mst_brand`.`accessories`,  `mst_brand`.`catch`,  `mst_brand`.`shoes`,  `mst_brand`.`outer`,  `mst_brand`.`tops`,  `mst_brand`.`camisole`,  `mst_brand`.`bottoms`,  `mst_brand`.`underwear`,  `mst_brand`.`Legwear`,  `mst_brand`.`hat`,  `mst_brand`.`other`,  `mst_brand`.`kids`,  `mst_brand`.`cosmetics`,  `mst_brand`.`gold`,  `mst_brand`.`tableware`,  `mst_brand`.`umbrella`,  `mst_brand`.`season`,  `mst_brand`.`new`,  `mst_brand`.`kyouka`,  `mst_brand`.`timest`,  `mst_brand`.`luxury`,  `mst_brand`.`brand_details`,  `mst_brand`.`create_by`,  `mst_brand`.`create_at`,  `mst_brand`.`expensive`,  `mst_brand`.`rakutag_id`,  `mst_brand`.`gray_but_want_to_buy`,  `mst_brand`.`tag_img`,  `mst_brand`.`satei_memo`,  `mst_brand`.`url`,  `mst_brand`.`bullion_dealer`,  `mst_brand`.`is_satei_group`,  `mst_brand_report`.`count`,  `mst_brand_report`.`sum_nyuukin_price`,  `mst_brand_report`.`profit_rate`,  `mst_brand`.`is_purchase_D`,  `mst_brand`.`is_purchase_J`,  `mst_brand`.`is_purchase_K`,  `mst_brand`.`is_purchase_B`,  `mst_brand`.`is_purchase_W`,  `mst_brand`.`is_japanese_artist`";
$tdatamst_brand[".sqlFrom"] = "FROM `mst_brand`  LEFT OUTER JOIN `mst_brand_report` ON `mst_brand`.`id` = `mst_brand_report`.`product_num`";
$tdatamst_brand[".sqlWhereExpr"] = "";
$tdatamst_brand[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamst_brand[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamst_brand[".arrGroupsPerPage"] = $arrGPP;

$tdatamst_brand[".highlightSearchResults"] = true;

$tableKeysmst_brand = array();
$tableKeysmst_brand[] = "id";
$tdatamst_brand[".Keys"] = $tableKeysmst_brand;

$tdatamst_brand[".listFields"] = array();
$tdatamst_brand[".listFields"][] = "luxury";
$tdatamst_brand[".listFields"][] = "kyouka";
$tdatamst_brand[".listFields"][] = "preview";
$tdatamst_brand[".listFields"][] = "is_satei_group";
$tdatamst_brand[".listFields"][] = "id";
$tdatamst_brand[".listFields"][] = "name";
$tdatamst_brand[".listFields"][] = "count";
$tdatamst_brand[".listFields"][] = "sum_nyuukin_price";
$tdatamst_brand[".listFields"][] = "profit_rate";
$tdatamst_brand[".listFields"][] = "bag";
$tdatamst_brand[".listFields"][] = "wallet";
$tdatamst_brand[".listFields"][] = "accessories";
$tdatamst_brand[".listFields"][] = "catch";
$tdatamst_brand[".listFields"][] = "shoes";
$tdatamst_brand[".listFields"][] = "outer";
$tdatamst_brand[".listFields"][] = "tops";
$tdatamst_brand[".listFields"][] = "camisole";
$tdatamst_brand[".listFields"][] = "bottoms";
$tdatamst_brand[".listFields"][] = "underwear";
$tdatamst_brand[".listFields"][] = "Legwear";
$tdatamst_brand[".listFields"][] = "hat";
$tdatamst_brand[".listFields"][] = "other";
$tdatamst_brand[".listFields"][] = "kids";
$tdatamst_brand[".listFields"][] = "cosmetics";
$tdatamst_brand[".listFields"][] = "gold";
$tdatamst_brand[".listFields"][] = "tableware";
$tdatamst_brand[".listFields"][] = "umbrella";
$tdatamst_brand[".listFields"][] = "season";
$tdatamst_brand[".listFields"][] = "new";
$tdatamst_brand[".listFields"][] = "gray_but_want_to_buy";
$tdatamst_brand[".listFields"][] = "is_japanese_artist";
$tdatamst_brand[".listFields"][] = "bullion_dealer";
$tdatamst_brand[".listFields"][] = "seach_j";
$tdatamst_brand[".listFields"][] = "url";
$tdatamst_brand[".listFields"][] = "brand_details";
$tdatamst_brand[".listFields"][] = "expensive";
$tdatamst_brand[".listFields"][] = "tag_img";
$tdatamst_brand[".listFields"][] = "satei_memo";
$tdatamst_brand[".listFields"][] = "is_purchase_D";
$tdatamst_brand[".listFields"][] = "is_purchase_J";
$tdatamst_brand[".listFields"][] = "is_purchase_K";
$tdatamst_brand[".listFields"][] = "is_purchase_B";
$tdatamst_brand[".listFields"][] = "is_purchase_W";
$tdatamst_brand[".listFields"][] = "register_by";
$tdatamst_brand[".listFields"][] = "register_at";
$tdatamst_brand[".listFields"][] = "update_by";
$tdatamst_brand[".listFields"][] = "update_at";

$tdatamst_brand[".hideMobileList"] = array();


$tdatamst_brand[".viewFields"] = array();

$tdatamst_brand[".addFields"] = array();

$tdatamst_brand[".masterListFields"] = array();
$tdatamst_brand[".masterListFields"][] = "is_japanese_artist";
$tdatamst_brand[".masterListFields"][] = "luxury";
$tdatamst_brand[".masterListFields"][] = "kyouka";
$tdatamst_brand[".masterListFields"][] = "preview";
$tdatamst_brand[".masterListFields"][] = "is_satei_group";
$tdatamst_brand[".masterListFields"][] = "id";
$tdatamst_brand[".masterListFields"][] = "name";
$tdatamst_brand[".masterListFields"][] = "eng_name";
$tdatamst_brand[".masterListFields"][] = "goods_id";
$tdatamst_brand[".masterListFields"][] = "count";
$tdatamst_brand[".masterListFields"][] = "japananese_name";
$tdatamst_brand[".masterListFields"][] = "sum_nyuukin_price";
$tdatamst_brand[".masterListFields"][] = "english_name";
$tdatamst_brand[".masterListFields"][] = "profit_rate";
$tdatamst_brand[".masterListFields"][] = "tag";
$tdatamst_brand[".masterListFields"][] = "bag";
$tdatamst_brand[".masterListFields"][] = "tage";
$tdatamst_brand[".masterListFields"][] = "wallet";
$tdatamst_brand[".masterListFields"][] = "accessories";
$tdatamst_brand[".masterListFields"][] = "seach_e";
$tdatamst_brand[".masterListFields"][] = "catch";
$tdatamst_brand[".masterListFields"][] = "mst_band_title";
$tdatamst_brand[".masterListFields"][] = "shoes";
$tdatamst_brand[".masterListFields"][] = "outer";
$tdatamst_brand[".masterListFields"][] = "tops";
$tdatamst_brand[".masterListFields"][] = "camisole";
$tdatamst_brand[".masterListFields"][] = "bottoms";
$tdatamst_brand[".masterListFields"][] = "app_name";
$tdatamst_brand[".masterListFields"][] = "underwear";
$tdatamst_brand[".masterListFields"][] = "Legwear";
$tdatamst_brand[".masterListFields"][] = "hat";
$tdatamst_brand[".masterListFields"][] = "other";
$tdatamst_brand[".masterListFields"][] = "kids";
$tdatamst_brand[".masterListFields"][] = "cosmetics";
$tdatamst_brand[".masterListFields"][] = "gold";
$tdatamst_brand[".masterListFields"][] = "tableware";
$tdatamst_brand[".masterListFields"][] = "umbrella";
$tdatamst_brand[".masterListFields"][] = "season";
$tdatamst_brand[".masterListFields"][] = "new";
$tdatamst_brand[".masterListFields"][] = "gray_but_want_to_buy";
$tdatamst_brand[".masterListFields"][] = "bullion_dealer";
$tdatamst_brand[".masterListFields"][] = "seach_j";
$tdatamst_brand[".masterListFields"][] = "url";
$tdatamst_brand[".masterListFields"][] = "brand_details";
$tdatamst_brand[".masterListFields"][] = "expensive";
$tdatamst_brand[".masterListFields"][] = "tag_img";
$tdatamst_brand[".masterListFields"][] = "satei_memo";
$tdatamst_brand[".masterListFields"][] = "is_purchase_D";
$tdatamst_brand[".masterListFields"][] = "is_purchase_J";
$tdatamst_brand[".masterListFields"][] = "timest";
$tdatamst_brand[".masterListFields"][] = "is_purchase_K";
$tdatamst_brand[".masterListFields"][] = "is_purchase_B";
$tdatamst_brand[".masterListFields"][] = "create_by";
$tdatamst_brand[".masterListFields"][] = "is_purchase_W";
$tdatamst_brand[".masterListFields"][] = "register_by";
$tdatamst_brand[".masterListFields"][] = "create_at";
$tdatamst_brand[".masterListFields"][] = "register_at";
$tdatamst_brand[".masterListFields"][] = "update_by";
$tdatamst_brand[".masterListFields"][] = "rakutag_id";
$tdatamst_brand[".masterListFields"][] = "update_at";

$tdatamst_brand[".inlineAddFields"] = array();
$tdatamst_brand[".inlineAddFields"][] = "luxury";
$tdatamst_brand[".inlineAddFields"][] = "kyouka";
$tdatamst_brand[".inlineAddFields"][] = "preview";
$tdatamst_brand[".inlineAddFields"][] = "is_satei_group";
$tdatamst_brand[".inlineAddFields"][] = "name";
$tdatamst_brand[".inlineAddFields"][] = "bag";
$tdatamst_brand[".inlineAddFields"][] = "wallet";
$tdatamst_brand[".inlineAddFields"][] = "accessories";
$tdatamst_brand[".inlineAddFields"][] = "catch";
$tdatamst_brand[".inlineAddFields"][] = "shoes";
$tdatamst_brand[".inlineAddFields"][] = "outer";
$tdatamst_brand[".inlineAddFields"][] = "tops";
$tdatamst_brand[".inlineAddFields"][] = "camisole";
$tdatamst_brand[".inlineAddFields"][] = "bottoms";
$tdatamst_brand[".inlineAddFields"][] = "underwear";
$tdatamst_brand[".inlineAddFields"][] = "Legwear";
$tdatamst_brand[".inlineAddFields"][] = "hat";
$tdatamst_brand[".inlineAddFields"][] = "other";
$tdatamst_brand[".inlineAddFields"][] = "kids";
$tdatamst_brand[".inlineAddFields"][] = "cosmetics";
$tdatamst_brand[".inlineAddFields"][] = "gold";
$tdatamst_brand[".inlineAddFields"][] = "tableware";
$tdatamst_brand[".inlineAddFields"][] = "umbrella";
$tdatamst_brand[".inlineAddFields"][] = "season";
$tdatamst_brand[".inlineAddFields"][] = "new";
$tdatamst_brand[".inlineAddFields"][] = "gray_but_want_to_buy";
$tdatamst_brand[".inlineAddFields"][] = "is_japanese_artist";
$tdatamst_brand[".inlineAddFields"][] = "bullion_dealer";
$tdatamst_brand[".inlineAddFields"][] = "seach_j";
$tdatamst_brand[".inlineAddFields"][] = "url";
$tdatamst_brand[".inlineAddFields"][] = "brand_details";
$tdatamst_brand[".inlineAddFields"][] = "expensive";
$tdatamst_brand[".inlineAddFields"][] = "tag_img";
$tdatamst_brand[".inlineAddFields"][] = "satei_memo";
$tdatamst_brand[".inlineAddFields"][] = "is_purchase_D";
$tdatamst_brand[".inlineAddFields"][] = "is_purchase_J";
$tdatamst_brand[".inlineAddFields"][] = "is_purchase_K";
$tdatamst_brand[".inlineAddFields"][] = "is_purchase_B";
$tdatamst_brand[".inlineAddFields"][] = "is_purchase_W";

$tdatamst_brand[".editFields"] = array();

$tdatamst_brand[".inlineEditFields"] = array();
$tdatamst_brand[".inlineEditFields"][] = "luxury";
$tdatamst_brand[".inlineEditFields"][] = "kyouka";
$tdatamst_brand[".inlineEditFields"][] = "preview";
$tdatamst_brand[".inlineEditFields"][] = "is_satei_group";
$tdatamst_brand[".inlineEditFields"][] = "name";
$tdatamst_brand[".inlineEditFields"][] = "bag";
$tdatamst_brand[".inlineEditFields"][] = "wallet";
$tdatamst_brand[".inlineEditFields"][] = "accessories";
$tdatamst_brand[".inlineEditFields"][] = "catch";
$tdatamst_brand[".inlineEditFields"][] = "shoes";
$tdatamst_brand[".inlineEditFields"][] = "outer";
$tdatamst_brand[".inlineEditFields"][] = "tops";
$tdatamst_brand[".inlineEditFields"][] = "camisole";
$tdatamst_brand[".inlineEditFields"][] = "bottoms";
$tdatamst_brand[".inlineEditFields"][] = "underwear";
$tdatamst_brand[".inlineEditFields"][] = "Legwear";
$tdatamst_brand[".inlineEditFields"][] = "hat";
$tdatamst_brand[".inlineEditFields"][] = "other";
$tdatamst_brand[".inlineEditFields"][] = "kids";
$tdatamst_brand[".inlineEditFields"][] = "cosmetics";
$tdatamst_brand[".inlineEditFields"][] = "gold";
$tdatamst_brand[".inlineEditFields"][] = "tableware";
$tdatamst_brand[".inlineEditFields"][] = "umbrella";
$tdatamst_brand[".inlineEditFields"][] = "season";
$tdatamst_brand[".inlineEditFields"][] = "new";
$tdatamst_brand[".inlineEditFields"][] = "gray_but_want_to_buy";
$tdatamst_brand[".inlineEditFields"][] = "is_japanese_artist";
$tdatamst_brand[".inlineEditFields"][] = "bullion_dealer";
$tdatamst_brand[".inlineEditFields"][] = "seach_j";
$tdatamst_brand[".inlineEditFields"][] = "url";
$tdatamst_brand[".inlineEditFields"][] = "brand_details";
$tdatamst_brand[".inlineEditFields"][] = "expensive";
$tdatamst_brand[".inlineEditFields"][] = "tag_img";
$tdatamst_brand[".inlineEditFields"][] = "satei_memo";
$tdatamst_brand[".inlineEditFields"][] = "is_purchase_D";
$tdatamst_brand[".inlineEditFields"][] = "is_purchase_J";
$tdatamst_brand[".inlineEditFields"][] = "is_purchase_K";
$tdatamst_brand[".inlineEditFields"][] = "is_purchase_B";
$tdatamst_brand[".inlineEditFields"][] = "is_purchase_W";

$tdatamst_brand[".updateSelectedFields"] = array();


$tdatamst_brand[".exportFields"] = array();
$tdatamst_brand[".exportFields"][] = "is_japanese_artist";
$tdatamst_brand[".exportFields"][] = "is_satei_group";
$tdatamst_brand[".exportFields"][] = "url";
$tdatamst_brand[".exportFields"][] = "satei_memo";
$tdatamst_brand[".exportFields"][] = "tag_img";
$tdatamst_brand[".exportFields"][] = "luxury";
$tdatamst_brand[".exportFields"][] = "kyouka";
$tdatamst_brand[".exportFields"][] = "preview";
$tdatamst_brand[".exportFields"][] = "id";
$tdatamst_brand[".exportFields"][] = "name";
$tdatamst_brand[".exportFields"][] = "count";
$tdatamst_brand[".exportFields"][] = "sum_nyuukin_price";
$tdatamst_brand[".exportFields"][] = "profit_rate";
$tdatamst_brand[".exportFields"][] = "bag";
$tdatamst_brand[".exportFields"][] = "wallet";
$tdatamst_brand[".exportFields"][] = "accessories";
$tdatamst_brand[".exportFields"][] = "catch";
$tdatamst_brand[".exportFields"][] = "shoes";
$tdatamst_brand[".exportFields"][] = "outer";
$tdatamst_brand[".exportFields"][] = "tops";
$tdatamst_brand[".exportFields"][] = "camisole";
$tdatamst_brand[".exportFields"][] = "bottoms";
$tdatamst_brand[".exportFields"][] = "underwear";
$tdatamst_brand[".exportFields"][] = "Legwear";
$tdatamst_brand[".exportFields"][] = "hat";
$tdatamst_brand[".exportFields"][] = "other";
$tdatamst_brand[".exportFields"][] = "kids";
$tdatamst_brand[".exportFields"][] = "cosmetics";
$tdatamst_brand[".exportFields"][] = "gold";
$tdatamst_brand[".exportFields"][] = "tableware";
$tdatamst_brand[".exportFields"][] = "umbrella";
$tdatamst_brand[".exportFields"][] = "season";
$tdatamst_brand[".exportFields"][] = "new";
$tdatamst_brand[".exportFields"][] = "gray_but_want_to_buy";
$tdatamst_brand[".exportFields"][] = "bullion_dealer";
$tdatamst_brand[".exportFields"][] = "seach_j";
$tdatamst_brand[".exportFields"][] = "brand_details";
$tdatamst_brand[".exportFields"][] = "expensive";
$tdatamst_brand[".exportFields"][] = "update_by";
$tdatamst_brand[".exportFields"][] = "update_at";
$tdatamst_brand[".exportFields"][] = "register_by";
$tdatamst_brand[".exportFields"][] = "register_at";
$tdatamst_brand[".exportFields"][] = "is_purchase_D";
$tdatamst_brand[".exportFields"][] = "is_purchase_J";
$tdatamst_brand[".exportFields"][] = "is_purchase_K";
$tdatamst_brand[".exportFields"][] = "is_purchase_B";
$tdatamst_brand[".exportFields"][] = "is_purchase_W";

$tdatamst_brand[".importFields"] = array();
$tdatamst_brand[".importFields"][] = "id";
$tdatamst_brand[".importFields"][] = "name";
$tdatamst_brand[".importFields"][] = "seach_j";
$tdatamst_brand[".importFields"][] = "register_at";
$tdatamst_brand[".importFields"][] = "update_at";
$tdatamst_brand[".importFields"][] = "register_by";
$tdatamst_brand[".importFields"][] = "update_by";
$tdatamst_brand[".importFields"][] = "preview";
$tdatamst_brand[".importFields"][] = "bag";
$tdatamst_brand[".importFields"][] = "wallet";
$tdatamst_brand[".importFields"][] = "accessories";
$tdatamst_brand[".importFields"][] = "catch";
$tdatamst_brand[".importFields"][] = "shoes";
$tdatamst_brand[".importFields"][] = "outer";
$tdatamst_brand[".importFields"][] = "tops";
$tdatamst_brand[".importFields"][] = "camisole";
$tdatamst_brand[".importFields"][] = "bottoms";
$tdatamst_brand[".importFields"][] = "underwear";
$tdatamst_brand[".importFields"][] = "Legwear";
$tdatamst_brand[".importFields"][] = "hat";
$tdatamst_brand[".importFields"][] = "other";
$tdatamst_brand[".importFields"][] = "kids";
$tdatamst_brand[".importFields"][] = "cosmetics";
$tdatamst_brand[".importFields"][] = "gold";
$tdatamst_brand[".importFields"][] = "tableware";
$tdatamst_brand[".importFields"][] = "umbrella";
$tdatamst_brand[".importFields"][] = "season";
$tdatamst_brand[".importFields"][] = "new";
$tdatamst_brand[".importFields"][] = "kyouka";
$tdatamst_brand[".importFields"][] = "luxury";
$tdatamst_brand[".importFields"][] = "brand_details";
$tdatamst_brand[".importFields"][] = "expensive";
$tdatamst_brand[".importFields"][] = "gray_but_want_to_buy";
$tdatamst_brand[".importFields"][] = "tag_img";
$tdatamst_brand[".importFields"][] = "satei_memo";
$tdatamst_brand[".importFields"][] = "url";
$tdatamst_brand[".importFields"][] = "bullion_dealer";
$tdatamst_brand[".importFields"][] = "is_satei_group";
$tdatamst_brand[".importFields"][] = "is_purchase_D";
$tdatamst_brand[".importFields"][] = "is_purchase_J";
$tdatamst_brand[".importFields"][] = "is_purchase_K";
$tdatamst_brand[".importFields"][] = "is_purchase_B";
$tdatamst_brand[".importFields"][] = "is_purchase_W";
$tdatamst_brand[".importFields"][] = "is_japanese_artist";

$tdatamst_brand[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "mst_brand";
	$fdata["Label"] = GetFieldLabel("mst_brand","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mst_brand`.`id`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

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




	$tdatamst_brand["id"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "mst_brand";
	$fdata["Label"] = GetFieldLabel("mst_brand","name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mst_brand`.`name`";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdatamst_brand["name"] = $fdata;
//	eng_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "eng_name";
	$fdata["GoodName"] = "eng_name";
	$fdata["ownerTable"] = "mst_brand";
	$fdata["Label"] = GetFieldLabel("mst_brand","eng_name");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "eng_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mst_brand`.`eng_name`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatamst_brand["eng_name"] = $fdata;
//	goods_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "goods_id";
	$fdata["GoodName"] = "goods_id";
	$fdata["ownerTable"] = "mst_brand";
	$fdata["Label"] = GetFieldLabel("mst_brand","goods_id");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "goods_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mst_brand`.`goods_id`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatamst_brand["goods_id"] = $fdata;
//	japananese_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "japananese_name";
	$fdata["GoodName"] = "japananese_name";
	$fdata["ownerTable"] = "mst_brand";
	$fdata["Label"] = GetFieldLabel("mst_brand","japananese_name");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "japananese_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mst_brand`.`japananese_name`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatamst_brand["japananese_name"] = $fdata;
//	english_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "english_name";
	$fdata["GoodName"] = "english_name";
	$fdata["ownerTable"] = "mst_brand";
	$fdata["Label"] = GetFieldLabel("mst_brand","english_name");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "english_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mst_brand`.`english_name`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatamst_brand["english_name"] = $fdata;
//	tag
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "tag";
	$fdata["GoodName"] = "tag";
	$fdata["ownerTable"] = "mst_brand";
	$fdata["Label"] = GetFieldLabel("mst_brand","tag");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "tag";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mst_brand`.`tag`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatamst_brand["tag"] = $fdata;
//	tage
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "tage";
	$fdata["GoodName"] = "tage";
	$fdata["ownerTable"] = "mst_brand";
	$fdata["Label"] = GetFieldLabel("mst_brand","tage");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "tage";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mst_brand`.`tage`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatamst_brand["tage"] = $fdata;
//	seach_j
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "seach_j";
	$fdata["GoodName"] = "seach_j";
	$fdata["ownerTable"] = "mst_brand";
	$fdata["Label"] = GetFieldLabel("mst_brand","seach_j");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "seach_j";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mst_brand`.`seach_j`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

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
			$edata["EditParams"].= " maxlength=255";

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




	$tdatamst_brand["seach_j"] = $fdata;
//	seach_e
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "seach_e";
	$fdata["GoodName"] = "seach_e";
	$fdata["ownerTable"] = "mst_brand";
	$fdata["Label"] = GetFieldLabel("mst_brand","seach_e");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "seach_e";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mst_brand`.`seach_e`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatamst_brand["seach_e"] = $fdata;
//	mst_band_title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "mst_band_title";
	$fdata["GoodName"] = "mst_band_title";
	$fdata["ownerTable"] = "mst_brand";
	$fdata["Label"] = GetFieldLabel("mst_brand","mst_band_title");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "mst_band_title";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mst_brand`.`mst_band_title`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatamst_brand["mst_band_title"] = $fdata;
//	register_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "register_at";
	$fdata["GoodName"] = "register_at";
	$fdata["ownerTable"] = "mst_brand";
	$fdata["Label"] = GetFieldLabel("mst_brand","register_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "register_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mst_brand`.`register_at`";

	
	
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




	$tdatamst_brand["register_at"] = $fdata;
//	update_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "update_at";
	$fdata["GoodName"] = "update_at";
	$fdata["ownerTable"] = "mst_brand";
	$fdata["Label"] = GetFieldLabel("mst_brand","update_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "update_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mst_brand`.`update_at`";

	
	
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




	$tdatamst_brand["update_at"] = $fdata;
//	register_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "register_by";
	$fdata["GoodName"] = "register_by";
	$fdata["ownerTable"] = "mst_brand";
	$fdata["Label"] = GetFieldLabel("mst_brand","register_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "register_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mst_brand`.`register_by`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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




	$tdatamst_brand["register_by"] = $fdata;
//	update_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "update_by";
	$fdata["GoodName"] = "update_by";
	$fdata["ownerTable"] = "mst_brand";
	$fdata["Label"] = GetFieldLabel("mst_brand","update_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "update_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mst_brand`.`update_by`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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




	$tdatamst_brand["update_by"] = $fdata;
//	preview
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "preview";
	$fdata["GoodName"] = "preview";
	$fdata["ownerTable"] = "mst_brand";
	$fdata["Label"] = GetFieldLabel("mst_brand","preview");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "preview";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mst_brand`.`preview`";

	
	
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




	$tdatamst_brand["preview"] = $fdata;
//	app_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "app_name";
	$fdata["GoodName"] = "app_name";
	$fdata["ownerTable"] = "mst_brand";
	$fdata["Label"] = GetFieldLabel("mst_brand","app_name");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "app_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mst_brand`.`app_name`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatamst_brand["app_name"] = $fdata;
//	bag
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "bag";
	$fdata["GoodName"] = "bag";
	$fdata["ownerTable"] = "mst_brand";
	$fdata["Label"] = GetFieldLabel("mst_brand","bag");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "bag";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mst_brand`.`bag`";

	
	
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




	$tdatamst_brand["bag"] = $fdata;
//	wallet
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "wallet";
	$fdata["GoodName"] = "wallet";
	$fdata["ownerTable"] = "mst_brand";
	$fdata["Label"] = GetFieldLabel("mst_brand","wallet");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "wallet";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mst_brand`.`wallet`";

	
	
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




	$tdatamst_brand["wallet"] = $fdata;
//	accessories
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "accessories";
	$fdata["GoodName"] = "accessories";
	$fdata["ownerTable"] = "mst_brand";
	$fdata["Label"] = GetFieldLabel("mst_brand","accessories");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "accessories";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mst_brand`.`accessories`";

	
	
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




	$tdatamst_brand["accessories"] = $fdata;
//	catch
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "catch";
	$fdata["GoodName"] = "catch";
	$fdata["ownerTable"] = "mst_brand";
	$fdata["Label"] = GetFieldLabel("mst_brand","catch");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "catch";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mst_brand`.`catch`";

	
	
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




	$tdatamst_brand["catch"] = $fdata;
//	shoes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "shoes";
	$fdata["GoodName"] = "shoes";
	$fdata["ownerTable"] = "mst_brand";
	$fdata["Label"] = GetFieldLabel("mst_brand","shoes");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "shoes";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mst_brand`.`shoes`";

	
	
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




	$tdatamst_brand["shoes"] = $fdata;
//	outer
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "outer";
	$fdata["GoodName"] = "outer";
	$fdata["ownerTable"] = "mst_brand";
	$fdata["Label"] = GetFieldLabel("mst_brand","outer");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "outer";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mst_brand`.`outer`";

	
	
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




	$tdatamst_brand["outer"] = $fdata;
//	tops
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "tops";
	$fdata["GoodName"] = "tops";
	$fdata["ownerTable"] = "mst_brand";
	$fdata["Label"] = GetFieldLabel("mst_brand","tops");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "tops";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mst_brand`.`tops`";

	
	
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




	$tdatamst_brand["tops"] = $fdata;
//	camisole
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "camisole";
	$fdata["GoodName"] = "camisole";
	$fdata["ownerTable"] = "mst_brand";
	$fdata["Label"] = GetFieldLabel("mst_brand","camisole");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "camisole";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mst_brand`.`camisole`";

	
	
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




	$tdatamst_brand["camisole"] = $fdata;
//	bottoms
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "bottoms";
	$fdata["GoodName"] = "bottoms";
	$fdata["ownerTable"] = "mst_brand";
	$fdata["Label"] = GetFieldLabel("mst_brand","bottoms");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "bottoms";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mst_brand`.`bottoms`";

	
	
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




	$tdatamst_brand["bottoms"] = $fdata;
//	underwear
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "underwear";
	$fdata["GoodName"] = "underwear";
	$fdata["ownerTable"] = "mst_brand";
	$fdata["Label"] = GetFieldLabel("mst_brand","underwear");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "underwear";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mst_brand`.`underwear`";

	
	
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




	$tdatamst_brand["underwear"] = $fdata;
//	Legwear
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "Legwear";
	$fdata["GoodName"] = "Legwear";
	$fdata["ownerTable"] = "mst_brand";
	$fdata["Label"] = GetFieldLabel("mst_brand","Legwear");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Legwear";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mst_brand`.`Legwear`";

	
	
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




	$tdatamst_brand["Legwear"] = $fdata;
//	hat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "hat";
	$fdata["GoodName"] = "hat";
	$fdata["ownerTable"] = "mst_brand";
	$fdata["Label"] = GetFieldLabel("mst_brand","hat");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "hat";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mst_brand`.`hat`";

	
	
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




	$tdatamst_brand["hat"] = $fdata;
//	other
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "other";
	$fdata["GoodName"] = "other";
	$fdata["ownerTable"] = "mst_brand";
	$fdata["Label"] = GetFieldLabel("mst_brand","other");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "other";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mst_brand`.`other`";

	
	
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




	$tdatamst_brand["other"] = $fdata;
//	kids
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "kids";
	$fdata["GoodName"] = "kids";
	$fdata["ownerTable"] = "mst_brand";
	$fdata["Label"] = GetFieldLabel("mst_brand","kids");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "kids";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mst_brand`.`kids`";

	
	
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




	$tdatamst_brand["kids"] = $fdata;
//	cosmetics
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "cosmetics";
	$fdata["GoodName"] = "cosmetics";
	$fdata["ownerTable"] = "mst_brand";
	$fdata["Label"] = GetFieldLabel("mst_brand","cosmetics");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "cosmetics";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mst_brand`.`cosmetics`";

	
	
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




	$tdatamst_brand["cosmetics"] = $fdata;
//	gold
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "gold";
	$fdata["GoodName"] = "gold";
	$fdata["ownerTable"] = "mst_brand";
	$fdata["Label"] = GetFieldLabel("mst_brand","gold");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "gold";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mst_brand`.`gold`";

	
	
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




	$tdatamst_brand["gold"] = $fdata;
//	tableware
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "tableware";
	$fdata["GoodName"] = "tableware";
	$fdata["ownerTable"] = "mst_brand";
	$fdata["Label"] = GetFieldLabel("mst_brand","tableware");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "tableware";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mst_brand`.`tableware`";

	
	
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




	$tdatamst_brand["tableware"] = $fdata;
//	umbrella
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "umbrella";
	$fdata["GoodName"] = "umbrella";
	$fdata["ownerTable"] = "mst_brand";
	$fdata["Label"] = GetFieldLabel("mst_brand","umbrella");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "umbrella";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mst_brand`.`umbrella`";

	
	
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




	$tdatamst_brand["umbrella"] = $fdata;
//	season
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "season";
	$fdata["GoodName"] = "season";
	$fdata["ownerTable"] = "mst_brand";
	$fdata["Label"] = GetFieldLabel("mst_brand","season");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "season";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mst_brand`.`season`";

	
	
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




	$tdatamst_brand["season"] = $fdata;
//	new
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "new";
	$fdata["GoodName"] = "new";
	$fdata["ownerTable"] = "mst_brand";
	$fdata["Label"] = GetFieldLabel("mst_brand","new");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "new";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mst_brand`.`new`";

	
	
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




	$tdatamst_brand["new"] = $fdata;
//	kyouka
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "kyouka";
	$fdata["GoodName"] = "kyouka";
	$fdata["ownerTable"] = "mst_brand";
	$fdata["Label"] = GetFieldLabel("mst_brand","kyouka");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "kyouka";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mst_brand`.`kyouka`";

	
	
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




	$tdatamst_brand["kyouka"] = $fdata;
//	timest
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "timest";
	$fdata["GoodName"] = "timest";
	$fdata["ownerTable"] = "mst_brand";
	$fdata["Label"] = GetFieldLabel("mst_brand","timest");
	$fdata["FieldType"] = 135;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "timest";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mst_brand`.`timest`";

	
	
			
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








	$tdatamst_brand["timest"] = $fdata;
//	luxury
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "luxury";
	$fdata["GoodName"] = "luxury";
	$fdata["ownerTable"] = "mst_brand";
	$fdata["Label"] = GetFieldLabel("mst_brand","luxury");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "luxury";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mst_brand`.`luxury`";

	
	
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




	$tdatamst_brand["luxury"] = $fdata;
//	brand_details
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "brand_details";
	$fdata["GoodName"] = "brand_details";
	$fdata["ownerTable"] = "mst_brand";
	$fdata["Label"] = GetFieldLabel("mst_brand","brand_details");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "brand_details";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mst_brand`.`brand_details`";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdatamst_brand["brand_details"] = $fdata;
//	create_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "create_by";
	$fdata["GoodName"] = "create_by";
	$fdata["ownerTable"] = "mst_brand";
	$fdata["Label"] = GetFieldLabel("mst_brand","create_by");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "create_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mst_brand`.`create_by`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatamst_brand["create_by"] = $fdata;
//	create_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "create_at";
	$fdata["GoodName"] = "create_at";
	$fdata["ownerTable"] = "mst_brand";
	$fdata["Label"] = GetFieldLabel("mst_brand","create_at");
	$fdata["FieldType"] = 135;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "create_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mst_brand`.`create_at`";

	
	
			
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








	$tdatamst_brand["create_at"] = $fdata;
//	expensive
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "expensive";
	$fdata["GoodName"] = "expensive";
	$fdata["ownerTable"] = "mst_brand";
	$fdata["Label"] = GetFieldLabel("mst_brand","expensive");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "expensive";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mst_brand`.`expensive`";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdatamst_brand["expensive"] = $fdata;
//	rakutag_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "rakutag_id";
	$fdata["GoodName"] = "rakutag_id";
	$fdata["ownerTable"] = "mst_brand";
	$fdata["Label"] = GetFieldLabel("mst_brand","rakutag_id");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "rakutag_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mst_brand`.`rakutag_id`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatamst_brand["rakutag_id"] = $fdata;
//	gray_but_want_to_buy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "gray_but_want_to_buy";
	$fdata["GoodName"] = "gray_but_want_to_buy";
	$fdata["ownerTable"] = "mst_brand";
	$fdata["Label"] = GetFieldLabel("mst_brand","gray_but_want_to_buy");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "gray_but_want_to_buy";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mst_brand`.`gray_but_want_to_buy`";

	
	
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




	$tdatamst_brand["gray_but_want_to_buy"] = $fdata;
//	tag_img
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 47;
	$fdata["strName"] = "tag_img";
	$fdata["GoodName"] = "tag_img";
	$fdata["ownerTable"] = "mst_brand";
	$fdata["Label"] = GetFieldLabel("mst_brand","tag_img");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "tag_img";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mst_brand`.`tag_img`";

	
	
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




	$tdatamst_brand["tag_img"] = $fdata;
//	satei_memo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 48;
	$fdata["strName"] = "satei_memo";
	$fdata["GoodName"] = "satei_memo";
	$fdata["ownerTable"] = "mst_brand";
	$fdata["Label"] = GetFieldLabel("mst_brand","satei_memo");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "satei_memo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mst_brand`.`satei_memo`";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdatamst_brand["satei_memo"] = $fdata;
//	url
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 49;
	$fdata["strName"] = "url";
	$fdata["GoodName"] = "url";
	$fdata["ownerTable"] = "mst_brand";
	$fdata["Label"] = GetFieldLabel("mst_brand","url");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "url";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mst_brand`.`url`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Hyperlink");

	
	
	
	
				$vdata["hlNewWindow"] = true;
	$vdata["hlType"] = 0;
	$vdata["hlLinkWordNameType"] = "Text";
	$vdata["hlLinkWordText"] = "Link";
	$vdata["hlTitleField"] = "";

	
	
	
	
	
	
	
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




	$tdatamst_brand["url"] = $fdata;
//	bullion_dealer
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 50;
	$fdata["strName"] = "bullion_dealer";
	$fdata["GoodName"] = "bullion_dealer";
	$fdata["ownerTable"] = "mst_brand";
	$fdata["Label"] = GetFieldLabel("mst_brand","bullion_dealer");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "bullion_dealer";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mst_brand`.`bullion_dealer`";

	
	
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




	$tdatamst_brand["bullion_dealer"] = $fdata;
//	is_satei_group
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 51;
	$fdata["strName"] = "is_satei_group";
	$fdata["GoodName"] = "is_satei_group";
	$fdata["ownerTable"] = "mst_brand";
	$fdata["Label"] = GetFieldLabel("mst_brand","is_satei_group");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "is_satei_group";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mst_brand`.`is_satei_group`";

	
	
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




	$tdatamst_brand["is_satei_group"] = $fdata;
//	count
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 52;
	$fdata["strName"] = "count";
	$fdata["GoodName"] = "count";
	$fdata["ownerTable"] = "mst_brand_report";
	$fdata["Label"] = GetFieldLabel("mst_brand","count");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "count";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mst_brand_report`.`count`";

	
	
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




	$tdatamst_brand["count"] = $fdata;
//	sum_nyuukin_price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 53;
	$fdata["strName"] = "sum_nyuukin_price";
	$fdata["GoodName"] = "sum_nyuukin_price";
	$fdata["ownerTable"] = "mst_brand_report";
	$fdata["Label"] = GetFieldLabel("mst_brand","sum_nyuukin_price");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "sum_nyuukin_price";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mst_brand_report`.`sum_nyuukin_price`";

	
	
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




	$tdatamst_brand["sum_nyuukin_price"] = $fdata;
//	profit_rate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 54;
	$fdata["strName"] = "profit_rate";
	$fdata["GoodName"] = "profit_rate";
	$fdata["ownerTable"] = "mst_brand_report";
	$fdata["Label"] = GetFieldLabel("mst_brand","profit_rate");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "profit_rate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mst_brand_report`.`profit_rate`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Percent");

	
	
	
	
	
	
	
	
	
	
	
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




	$tdatamst_brand["profit_rate"] = $fdata;
//	is_purchase_D
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 55;
	$fdata["strName"] = "is_purchase_D";
	$fdata["GoodName"] = "is_purchase_D";
	$fdata["ownerTable"] = "mst_brand";
	$fdata["Label"] = GetFieldLabel("mst_brand","is_purchase_D");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "is_purchase_D";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mst_brand`.`is_purchase_D`";

	
	
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




	$tdatamst_brand["is_purchase_D"] = $fdata;
//	is_purchase_J
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 56;
	$fdata["strName"] = "is_purchase_J";
	$fdata["GoodName"] = "is_purchase_J";
	$fdata["ownerTable"] = "mst_brand";
	$fdata["Label"] = GetFieldLabel("mst_brand","is_purchase_J");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "is_purchase_J";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mst_brand`.`is_purchase_J`";

	
	
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




	$tdatamst_brand["is_purchase_J"] = $fdata;
//	is_purchase_K
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 57;
	$fdata["strName"] = "is_purchase_K";
	$fdata["GoodName"] = "is_purchase_K";
	$fdata["ownerTable"] = "mst_brand";
	$fdata["Label"] = GetFieldLabel("mst_brand","is_purchase_K");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "is_purchase_K";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mst_brand`.`is_purchase_K`";

	
	
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




	$tdatamst_brand["is_purchase_K"] = $fdata;
//	is_purchase_B
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 58;
	$fdata["strName"] = "is_purchase_B";
	$fdata["GoodName"] = "is_purchase_B";
	$fdata["ownerTable"] = "mst_brand";
	$fdata["Label"] = GetFieldLabel("mst_brand","is_purchase_B");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "is_purchase_B";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mst_brand`.`is_purchase_B`";

	
	
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




	$tdatamst_brand["is_purchase_B"] = $fdata;
//	is_purchase_W
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 59;
	$fdata["strName"] = "is_purchase_W";
	$fdata["GoodName"] = "is_purchase_W";
	$fdata["ownerTable"] = "mst_brand";
	$fdata["Label"] = GetFieldLabel("mst_brand","is_purchase_W");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "is_purchase_W";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mst_brand`.`is_purchase_W`";

	
	
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




	$tdatamst_brand["is_purchase_W"] = $fdata;
//	is_japanese_artist
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 60;
	$fdata["strName"] = "is_japanese_artist";
	$fdata["GoodName"] = "is_japanese_artist";
	$fdata["ownerTable"] = "mst_brand";
	$fdata["Label"] = GetFieldLabel("mst_brand","is_japanese_artist");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "is_japanese_artist";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mst_brand`.`is_japanese_artist`";

	
	
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




	$tdatamst_brand["is_japanese_artist"] = $fdata;


$tables_data["mst_brand"]=&$tdatamst_brand;
$field_labels["mst_brand"] = &$fieldLabelsmst_brand;
$fieldToolTips["mst_brand"] = &$fieldToolTipsmst_brand;
$placeHolders["mst_brand"] = &$placeHoldersmst_brand;
$page_titles["mst_brand"] = &$pageTitlesmst_brand;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mst_brand"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mst_brand"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mst_brand()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`mst_brand`.`id`,  `mst_brand`.`name`,  `mst_brand`.`eng_name`,  `mst_brand`.`goods_id`,  `mst_brand`.`japananese_name`,  `mst_brand`.`english_name`,  `mst_brand`.`tag`,  `mst_brand`.`tage`,  `mst_brand`.`seach_j`,  `mst_brand`.`seach_e`,  `mst_brand`.`mst_band_title`,  `mst_brand`.`register_at`,  `mst_brand`.`update_at`,  `mst_brand`.`register_by`,  `mst_brand`.`update_by`,  `mst_brand`.`preview`,  `mst_brand`.`app_name`,  `mst_brand`.`bag`,  `mst_brand`.`wallet`,  `mst_brand`.`accessories`,  `mst_brand`.`catch`,  `mst_brand`.`shoes`,  `mst_brand`.`outer`,  `mst_brand`.`tops`,  `mst_brand`.`camisole`,  `mst_brand`.`bottoms`,  `mst_brand`.`underwear`,  `mst_brand`.`Legwear`,  `mst_brand`.`hat`,  `mst_brand`.`other`,  `mst_brand`.`kids`,  `mst_brand`.`cosmetics`,  `mst_brand`.`gold`,  `mst_brand`.`tableware`,  `mst_brand`.`umbrella`,  `mst_brand`.`season`,  `mst_brand`.`new`,  `mst_brand`.`kyouka`,  `mst_brand`.`timest`,  `mst_brand`.`luxury`,  `mst_brand`.`brand_details`,  `mst_brand`.`create_by`,  `mst_brand`.`create_at`,  `mst_brand`.`expensive`,  `mst_brand`.`rakutag_id`,  `mst_brand`.`gray_but_want_to_buy`,  `mst_brand`.`tag_img`,  `mst_brand`.`satei_memo`,  `mst_brand`.`url`,  `mst_brand`.`bullion_dealer`,  `mst_brand`.`is_satei_group`,  `mst_brand_report`.`count`,  `mst_brand_report`.`sum_nyuukin_price`,  `mst_brand_report`.`profit_rate`,  `mst_brand`.`is_purchase_D`,  `mst_brand`.`is_purchase_J`,  `mst_brand`.`is_purchase_K`,  `mst_brand`.`is_purchase_B`,  `mst_brand`.`is_purchase_W`,  `mst_brand`.`is_japanese_artist`";
$proto0["m_strFrom"] = "FROM `mst_brand`  LEFT OUTER JOIN `mst_brand_report` ON `mst_brand`.`id` = `mst_brand_report`.`product_num`";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY `mst_brand`.`id` DESC, `mst_brand`.`tag_img` DESC";
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
	"m_strName" => "id",
	"m_strTable" => "mst_brand",
	"m_srcTableName" => "mst_brand"
));

$proto6["m_sql"] = "`mst_brand`.`id`";
$proto6["m_srcTableName"] = "mst_brand";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "mst_brand",
	"m_srcTableName" => "mst_brand"
));

$proto8["m_sql"] = "`mst_brand`.`name`";
$proto8["m_srcTableName"] = "mst_brand";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "eng_name",
	"m_strTable" => "mst_brand",
	"m_srcTableName" => "mst_brand"
));

$proto10["m_sql"] = "`mst_brand`.`eng_name`";
$proto10["m_srcTableName"] = "mst_brand";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "goods_id",
	"m_strTable" => "mst_brand",
	"m_srcTableName" => "mst_brand"
));

$proto12["m_sql"] = "`mst_brand`.`goods_id`";
$proto12["m_srcTableName"] = "mst_brand";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "japananese_name",
	"m_strTable" => "mst_brand",
	"m_srcTableName" => "mst_brand"
));

$proto14["m_sql"] = "`mst_brand`.`japananese_name`";
$proto14["m_srcTableName"] = "mst_brand";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "english_name",
	"m_strTable" => "mst_brand",
	"m_srcTableName" => "mst_brand"
));

$proto16["m_sql"] = "`mst_brand`.`english_name`";
$proto16["m_srcTableName"] = "mst_brand";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "tag",
	"m_strTable" => "mst_brand",
	"m_srcTableName" => "mst_brand"
));

$proto18["m_sql"] = "`mst_brand`.`tag`";
$proto18["m_srcTableName"] = "mst_brand";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "tage",
	"m_strTable" => "mst_brand",
	"m_srcTableName" => "mst_brand"
));

$proto20["m_sql"] = "`mst_brand`.`tage`";
$proto20["m_srcTableName"] = "mst_brand";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "seach_j",
	"m_strTable" => "mst_brand",
	"m_srcTableName" => "mst_brand"
));

$proto22["m_sql"] = "`mst_brand`.`seach_j`";
$proto22["m_srcTableName"] = "mst_brand";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "seach_e",
	"m_strTable" => "mst_brand",
	"m_srcTableName" => "mst_brand"
));

$proto24["m_sql"] = "`mst_brand`.`seach_e`";
$proto24["m_srcTableName"] = "mst_brand";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "mst_band_title",
	"m_strTable" => "mst_brand",
	"m_srcTableName" => "mst_brand"
));

$proto26["m_sql"] = "`mst_brand`.`mst_band_title`";
$proto26["m_srcTableName"] = "mst_brand";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "register_at",
	"m_strTable" => "mst_brand",
	"m_srcTableName" => "mst_brand"
));

$proto28["m_sql"] = "`mst_brand`.`register_at`";
$proto28["m_srcTableName"] = "mst_brand";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "update_at",
	"m_strTable" => "mst_brand",
	"m_srcTableName" => "mst_brand"
));

$proto30["m_sql"] = "`mst_brand`.`update_at`";
$proto30["m_srcTableName"] = "mst_brand";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "register_by",
	"m_strTable" => "mst_brand",
	"m_srcTableName" => "mst_brand"
));

$proto32["m_sql"] = "`mst_brand`.`register_by`";
$proto32["m_srcTableName"] = "mst_brand";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "update_by",
	"m_strTable" => "mst_brand",
	"m_srcTableName" => "mst_brand"
));

$proto34["m_sql"] = "`mst_brand`.`update_by`";
$proto34["m_srcTableName"] = "mst_brand";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "preview",
	"m_strTable" => "mst_brand",
	"m_srcTableName" => "mst_brand"
));

$proto36["m_sql"] = "`mst_brand`.`preview`";
$proto36["m_srcTableName"] = "mst_brand";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "app_name",
	"m_strTable" => "mst_brand",
	"m_srcTableName" => "mst_brand"
));

$proto38["m_sql"] = "`mst_brand`.`app_name`";
$proto38["m_srcTableName"] = "mst_brand";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "bag",
	"m_strTable" => "mst_brand",
	"m_srcTableName" => "mst_brand"
));

$proto40["m_sql"] = "`mst_brand`.`bag`";
$proto40["m_srcTableName"] = "mst_brand";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "wallet",
	"m_strTable" => "mst_brand",
	"m_srcTableName" => "mst_brand"
));

$proto42["m_sql"] = "`mst_brand`.`wallet`";
$proto42["m_srcTableName"] = "mst_brand";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "accessories",
	"m_strTable" => "mst_brand",
	"m_srcTableName" => "mst_brand"
));

$proto44["m_sql"] = "`mst_brand`.`accessories`";
$proto44["m_srcTableName"] = "mst_brand";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "catch",
	"m_strTable" => "mst_brand",
	"m_srcTableName" => "mst_brand"
));

$proto46["m_sql"] = "`mst_brand`.`catch`";
$proto46["m_srcTableName"] = "mst_brand";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "shoes",
	"m_strTable" => "mst_brand",
	"m_srcTableName" => "mst_brand"
));

$proto48["m_sql"] = "`mst_brand`.`shoes`";
$proto48["m_srcTableName"] = "mst_brand";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "outer",
	"m_strTable" => "mst_brand",
	"m_srcTableName" => "mst_brand"
));

$proto50["m_sql"] = "`mst_brand`.`outer`";
$proto50["m_srcTableName"] = "mst_brand";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "tops",
	"m_strTable" => "mst_brand",
	"m_srcTableName" => "mst_brand"
));

$proto52["m_sql"] = "`mst_brand`.`tops`";
$proto52["m_srcTableName"] = "mst_brand";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "camisole",
	"m_strTable" => "mst_brand",
	"m_srcTableName" => "mst_brand"
));

$proto54["m_sql"] = "`mst_brand`.`camisole`";
$proto54["m_srcTableName"] = "mst_brand";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "bottoms",
	"m_strTable" => "mst_brand",
	"m_srcTableName" => "mst_brand"
));

$proto56["m_sql"] = "`mst_brand`.`bottoms`";
$proto56["m_srcTableName"] = "mst_brand";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "underwear",
	"m_strTable" => "mst_brand",
	"m_srcTableName" => "mst_brand"
));

$proto58["m_sql"] = "`mst_brand`.`underwear`";
$proto58["m_srcTableName"] = "mst_brand";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "Legwear",
	"m_strTable" => "mst_brand",
	"m_srcTableName" => "mst_brand"
));

$proto60["m_sql"] = "`mst_brand`.`Legwear`";
$proto60["m_srcTableName"] = "mst_brand";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "hat",
	"m_strTable" => "mst_brand",
	"m_srcTableName" => "mst_brand"
));

$proto62["m_sql"] = "`mst_brand`.`hat`";
$proto62["m_srcTableName"] = "mst_brand";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "other",
	"m_strTable" => "mst_brand",
	"m_srcTableName" => "mst_brand"
));

$proto64["m_sql"] = "`mst_brand`.`other`";
$proto64["m_srcTableName"] = "mst_brand";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "kids",
	"m_strTable" => "mst_brand",
	"m_srcTableName" => "mst_brand"
));

$proto66["m_sql"] = "`mst_brand`.`kids`";
$proto66["m_srcTableName"] = "mst_brand";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "cosmetics",
	"m_strTable" => "mst_brand",
	"m_srcTableName" => "mst_brand"
));

$proto68["m_sql"] = "`mst_brand`.`cosmetics`";
$proto68["m_srcTableName"] = "mst_brand";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "gold",
	"m_strTable" => "mst_brand",
	"m_srcTableName" => "mst_brand"
));

$proto70["m_sql"] = "`mst_brand`.`gold`";
$proto70["m_srcTableName"] = "mst_brand";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "tableware",
	"m_strTable" => "mst_brand",
	"m_srcTableName" => "mst_brand"
));

$proto72["m_sql"] = "`mst_brand`.`tableware`";
$proto72["m_srcTableName"] = "mst_brand";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "umbrella",
	"m_strTable" => "mst_brand",
	"m_srcTableName" => "mst_brand"
));

$proto74["m_sql"] = "`mst_brand`.`umbrella`";
$proto74["m_srcTableName"] = "mst_brand";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "season",
	"m_strTable" => "mst_brand",
	"m_srcTableName" => "mst_brand"
));

$proto76["m_sql"] = "`mst_brand`.`season`";
$proto76["m_srcTableName"] = "mst_brand";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "new",
	"m_strTable" => "mst_brand",
	"m_srcTableName" => "mst_brand"
));

$proto78["m_sql"] = "`mst_brand`.`new`";
$proto78["m_srcTableName"] = "mst_brand";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "kyouka",
	"m_strTable" => "mst_brand",
	"m_srcTableName" => "mst_brand"
));

$proto80["m_sql"] = "`mst_brand`.`kyouka`";
$proto80["m_srcTableName"] = "mst_brand";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "timest",
	"m_strTable" => "mst_brand",
	"m_srcTableName" => "mst_brand"
));

$proto82["m_sql"] = "`mst_brand`.`timest`";
$proto82["m_srcTableName"] = "mst_brand";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "luxury",
	"m_strTable" => "mst_brand",
	"m_srcTableName" => "mst_brand"
));

$proto84["m_sql"] = "`mst_brand`.`luxury`";
$proto84["m_srcTableName"] = "mst_brand";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "brand_details",
	"m_strTable" => "mst_brand",
	"m_srcTableName" => "mst_brand"
));

$proto86["m_sql"] = "`mst_brand`.`brand_details`";
$proto86["m_srcTableName"] = "mst_brand";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "create_by",
	"m_strTable" => "mst_brand",
	"m_srcTableName" => "mst_brand"
));

$proto88["m_sql"] = "`mst_brand`.`create_by`";
$proto88["m_srcTableName"] = "mst_brand";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "create_at",
	"m_strTable" => "mst_brand",
	"m_srcTableName" => "mst_brand"
));

$proto90["m_sql"] = "`mst_brand`.`create_at`";
$proto90["m_srcTableName"] = "mst_brand";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLField(array(
	"m_strName" => "expensive",
	"m_strTable" => "mst_brand",
	"m_srcTableName" => "mst_brand"
));

$proto92["m_sql"] = "`mst_brand`.`expensive`";
$proto92["m_srcTableName"] = "mst_brand";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "";
$obj = new SQLFieldListItem($proto92);

$proto0["m_fieldlist"][]=$obj;
						$proto94=array();
			$obj = new SQLField(array(
	"m_strName" => "rakutag_id",
	"m_strTable" => "mst_brand",
	"m_srcTableName" => "mst_brand"
));

$proto94["m_sql"] = "`mst_brand`.`rakutag_id`";
$proto94["m_srcTableName"] = "mst_brand";
$proto94["m_expr"]=$obj;
$proto94["m_alias"] = "";
$obj = new SQLFieldListItem($proto94);

$proto0["m_fieldlist"][]=$obj;
						$proto96=array();
			$obj = new SQLField(array(
	"m_strName" => "gray_but_want_to_buy",
	"m_strTable" => "mst_brand",
	"m_srcTableName" => "mst_brand"
));

$proto96["m_sql"] = "`mst_brand`.`gray_but_want_to_buy`";
$proto96["m_srcTableName"] = "mst_brand";
$proto96["m_expr"]=$obj;
$proto96["m_alias"] = "";
$obj = new SQLFieldListItem($proto96);

$proto0["m_fieldlist"][]=$obj;
						$proto98=array();
			$obj = new SQLField(array(
	"m_strName" => "tag_img",
	"m_strTable" => "mst_brand",
	"m_srcTableName" => "mst_brand"
));

$proto98["m_sql"] = "`mst_brand`.`tag_img`";
$proto98["m_srcTableName"] = "mst_brand";
$proto98["m_expr"]=$obj;
$proto98["m_alias"] = "";
$obj = new SQLFieldListItem($proto98);

$proto0["m_fieldlist"][]=$obj;
						$proto100=array();
			$obj = new SQLField(array(
	"m_strName" => "satei_memo",
	"m_strTable" => "mst_brand",
	"m_srcTableName" => "mst_brand"
));

$proto100["m_sql"] = "`mst_brand`.`satei_memo`";
$proto100["m_srcTableName"] = "mst_brand";
$proto100["m_expr"]=$obj;
$proto100["m_alias"] = "";
$obj = new SQLFieldListItem($proto100);

$proto0["m_fieldlist"][]=$obj;
						$proto102=array();
			$obj = new SQLField(array(
	"m_strName" => "url",
	"m_strTable" => "mst_brand",
	"m_srcTableName" => "mst_brand"
));

$proto102["m_sql"] = "`mst_brand`.`url`";
$proto102["m_srcTableName"] = "mst_brand";
$proto102["m_expr"]=$obj;
$proto102["m_alias"] = "";
$obj = new SQLFieldListItem($proto102);

$proto0["m_fieldlist"][]=$obj;
						$proto104=array();
			$obj = new SQLField(array(
	"m_strName" => "bullion_dealer",
	"m_strTable" => "mst_brand",
	"m_srcTableName" => "mst_brand"
));

$proto104["m_sql"] = "`mst_brand`.`bullion_dealer`";
$proto104["m_srcTableName"] = "mst_brand";
$proto104["m_expr"]=$obj;
$proto104["m_alias"] = "";
$obj = new SQLFieldListItem($proto104);

$proto0["m_fieldlist"][]=$obj;
						$proto106=array();
			$obj = new SQLField(array(
	"m_strName" => "is_satei_group",
	"m_strTable" => "mst_brand",
	"m_srcTableName" => "mst_brand"
));

$proto106["m_sql"] = "`mst_brand`.`is_satei_group`";
$proto106["m_srcTableName"] = "mst_brand";
$proto106["m_expr"]=$obj;
$proto106["m_alias"] = "";
$obj = new SQLFieldListItem($proto106);

$proto0["m_fieldlist"][]=$obj;
						$proto108=array();
			$obj = new SQLField(array(
	"m_strName" => "count",
	"m_strTable" => "mst_brand_report",
	"m_srcTableName" => "mst_brand"
));

$proto108["m_sql"] = "`mst_brand_report`.`count`";
$proto108["m_srcTableName"] = "mst_brand";
$proto108["m_expr"]=$obj;
$proto108["m_alias"] = "";
$obj = new SQLFieldListItem($proto108);

$proto0["m_fieldlist"][]=$obj;
						$proto110=array();
			$obj = new SQLField(array(
	"m_strName" => "sum_nyuukin_price",
	"m_strTable" => "mst_brand_report",
	"m_srcTableName" => "mst_brand"
));

$proto110["m_sql"] = "`mst_brand_report`.`sum_nyuukin_price`";
$proto110["m_srcTableName"] = "mst_brand";
$proto110["m_expr"]=$obj;
$proto110["m_alias"] = "";
$obj = new SQLFieldListItem($proto110);

$proto0["m_fieldlist"][]=$obj;
						$proto112=array();
			$obj = new SQLField(array(
	"m_strName" => "profit_rate",
	"m_strTable" => "mst_brand_report",
	"m_srcTableName" => "mst_brand"
));

$proto112["m_sql"] = "`mst_brand_report`.`profit_rate`";
$proto112["m_srcTableName"] = "mst_brand";
$proto112["m_expr"]=$obj;
$proto112["m_alias"] = "";
$obj = new SQLFieldListItem($proto112);

$proto0["m_fieldlist"][]=$obj;
						$proto114=array();
			$obj = new SQLField(array(
	"m_strName" => "is_purchase_D",
	"m_strTable" => "mst_brand",
	"m_srcTableName" => "mst_brand"
));

$proto114["m_sql"] = "`mst_brand`.`is_purchase_D`";
$proto114["m_srcTableName"] = "mst_brand";
$proto114["m_expr"]=$obj;
$proto114["m_alias"] = "";
$obj = new SQLFieldListItem($proto114);

$proto0["m_fieldlist"][]=$obj;
						$proto116=array();
			$obj = new SQLField(array(
	"m_strName" => "is_purchase_J",
	"m_strTable" => "mst_brand",
	"m_srcTableName" => "mst_brand"
));

$proto116["m_sql"] = "`mst_brand`.`is_purchase_J`";
$proto116["m_srcTableName"] = "mst_brand";
$proto116["m_expr"]=$obj;
$proto116["m_alias"] = "";
$obj = new SQLFieldListItem($proto116);

$proto0["m_fieldlist"][]=$obj;
						$proto118=array();
			$obj = new SQLField(array(
	"m_strName" => "is_purchase_K",
	"m_strTable" => "mst_brand",
	"m_srcTableName" => "mst_brand"
));

$proto118["m_sql"] = "`mst_brand`.`is_purchase_K`";
$proto118["m_srcTableName"] = "mst_brand";
$proto118["m_expr"]=$obj;
$proto118["m_alias"] = "";
$obj = new SQLFieldListItem($proto118);

$proto0["m_fieldlist"][]=$obj;
						$proto120=array();
			$obj = new SQLField(array(
	"m_strName" => "is_purchase_B",
	"m_strTable" => "mst_brand",
	"m_srcTableName" => "mst_brand"
));

$proto120["m_sql"] = "`mst_brand`.`is_purchase_B`";
$proto120["m_srcTableName"] = "mst_brand";
$proto120["m_expr"]=$obj;
$proto120["m_alias"] = "";
$obj = new SQLFieldListItem($proto120);

$proto0["m_fieldlist"][]=$obj;
						$proto122=array();
			$obj = new SQLField(array(
	"m_strName" => "is_purchase_W",
	"m_strTable" => "mst_brand",
	"m_srcTableName" => "mst_brand"
));

$proto122["m_sql"] = "`mst_brand`.`is_purchase_W`";
$proto122["m_srcTableName"] = "mst_brand";
$proto122["m_expr"]=$obj;
$proto122["m_alias"] = "";
$obj = new SQLFieldListItem($proto122);

$proto0["m_fieldlist"][]=$obj;
						$proto124=array();
			$obj = new SQLField(array(
	"m_strName" => "is_japanese_artist",
	"m_strTable" => "mst_brand",
	"m_srcTableName" => "mst_brand"
));

$proto124["m_sql"] = "`mst_brand`.`is_japanese_artist`";
$proto124["m_srcTableName"] = "mst_brand";
$proto124["m_expr"]=$obj;
$proto124["m_alias"] = "";
$obj = new SQLFieldListItem($proto124);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto126=array();
$proto126["m_link"] = "SQLL_MAIN";
			$proto127=array();
$proto127["m_strName"] = "mst_brand";
$proto127["m_srcTableName"] = "mst_brand";
$proto127["m_columns"] = array();
$proto127["m_columns"][] = "id";
$proto127["m_columns"][] = "name";
$proto127["m_columns"][] = "eng_name";
$proto127["m_columns"][] = "goods_id";
$proto127["m_columns"][] = "japananese_name";
$proto127["m_columns"][] = "english_name";
$proto127["m_columns"][] = "tag";
$proto127["m_columns"][] = "tage";
$proto127["m_columns"][] = "seach_j";
$proto127["m_columns"][] = "seach_e";
$proto127["m_columns"][] = "mst_band_title";
$proto127["m_columns"][] = "register_at";
$proto127["m_columns"][] = "update_at";
$proto127["m_columns"][] = "register_by";
$proto127["m_columns"][] = "update_by";
$proto127["m_columns"][] = "preview";
$proto127["m_columns"][] = "app_name";
$proto127["m_columns"][] = "bag";
$proto127["m_columns"][] = "wallet";
$proto127["m_columns"][] = "accessories";
$proto127["m_columns"][] = "catch";
$proto127["m_columns"][] = "shoes";
$proto127["m_columns"][] = "outer";
$proto127["m_columns"][] = "tops";
$proto127["m_columns"][] = "camisole";
$proto127["m_columns"][] = "bottoms";
$proto127["m_columns"][] = "underwear";
$proto127["m_columns"][] = "Legwear";
$proto127["m_columns"][] = "hat";
$proto127["m_columns"][] = "other";
$proto127["m_columns"][] = "kids";
$proto127["m_columns"][] = "cosmetics";
$proto127["m_columns"][] = "gold";
$proto127["m_columns"][] = "tableware";
$proto127["m_columns"][] = "umbrella";
$proto127["m_columns"][] = "season";
$proto127["m_columns"][] = "new";
$proto127["m_columns"][] = "kyouka";
$proto127["m_columns"][] = "timest";
$proto127["m_columns"][] = "luxury";
$proto127["m_columns"][] = "brand_details";
$proto127["m_columns"][] = "create_by";
$proto127["m_columns"][] = "create_at";
$proto127["m_columns"][] = "expensive";
$proto127["m_columns"][] = "rakutag_id";
$proto127["m_columns"][] = "wasabi_name";
$proto127["m_columns"][] = "gray_but_want_to_buy";
$proto127["m_columns"][] = "tag_img";
$proto127["m_columns"][] = "satei_memo";
$proto127["m_columns"][] = "url";
$proto127["m_columns"][] = "bullion_dealer";
$proto127["m_columns"][] = "ranking_id";
$proto127["m_columns"][] = "is_satei_group";
$proto127["m_columns"][] = "is_satei_group_jewelry";
$proto127["m_columns"][] = "is_purchase_D";
$proto127["m_columns"][] = "is_purchase_J";
$proto127["m_columns"][] = "is_purchase_K";
$proto127["m_columns"][] = "is_purchase_B";
$proto127["m_columns"][] = "is_purchase_W";
$proto127["m_columns"][] = "is_japanese_artist";
$obj = new SQLTable($proto127);

$proto126["m_table"] = $obj;
$proto126["m_sql"] = "`mst_brand`";
$proto126["m_alias"] = "";
$proto126["m_srcTableName"] = "mst_brand";
$proto128=array();
$proto128["m_sql"] = "";
$proto128["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto128["m_column"]=$obj;
$proto128["m_contained"] = array();
$proto128["m_strCase"] = "";
$proto128["m_havingmode"] = false;
$proto128["m_inBrackets"] = false;
$proto128["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto128);

$proto126["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto126);

$proto0["m_fromlist"][]=$obj;
												$proto130=array();
$proto130["m_link"] = "SQLL_LEFTJOIN";
			$proto131=array();
$proto131["m_strName"] = "mst_brand_report";
$proto131["m_srcTableName"] = "mst_brand";
$proto131["m_columns"] = array();
$proto131["m_columns"][] = "product_num";
$proto131["m_columns"][] = "count";
$proto131["m_columns"][] = "sum_nyuukin_price";
$proto131["m_columns"][] = "profit_rate";
$proto131["m_columns"][] = "created_at";
$proto131["m_columns"][] = "updated_at";
$obj = new SQLTable($proto131);

$proto130["m_table"] = $obj;
$proto130["m_sql"] = "LEFT OUTER JOIN `mst_brand_report` ON `mst_brand`.`id` = `mst_brand_report`.`product_num`";
$proto130["m_alias"] = "";
$proto130["m_srcTableName"] = "mst_brand";
$proto132=array();
$proto132["m_sql"] = "`mst_brand`.`id` = `mst_brand_report`.`product_num`";
$proto132["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "mst_brand",
	"m_srcTableName" => "mst_brand"
));

$proto132["m_column"]=$obj;
$proto132["m_contained"] = array();
$proto132["m_strCase"] = "= `mst_brand_report`.`product_num`";
$proto132["m_havingmode"] = false;
$proto132["m_inBrackets"] = false;
$proto132["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto132);

$proto130["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto130);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto134=array();
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "mst_brand",
	"m_srcTableName" => "mst_brand"
));

$proto134["m_column"]=$obj;
$proto134["m_bAsc"] = 0;
$proto134["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto134);

$proto0["m_orderby"][]=$obj;					
												$proto136=array();
						$obj = new SQLField(array(
	"m_strName" => "tag_img",
	"m_strTable" => "mst_brand",
	"m_srcTableName" => "mst_brand"
));

$proto136["m_column"]=$obj;
$proto136["m_bAsc"] = 0;
$proto136["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto136);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="mst_brand";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mst_brand = createSqlQuery_mst_brand();


	
		;

																																																												

$tdatamst_brand[".sqlquery"] = $queryData_mst_brand;

include_once(getabspath("include/mst_brand_events.php"));
$tableEvents["mst_brand"] = new eventclass_mst_brand;
$tdatamst_brand[".hasEvents"] = true;

?>