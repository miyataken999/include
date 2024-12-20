<?php
require_once(getabspath("classes/cipherer.php"));




$tdataawazu = array();
	$tdataawazu[".truncateText"] = true;
	$tdataawazu[".NumberOfChars"] = 80;
	$tdataawazu[".ShortName"] = "awazu";
	$tdataawazu[".OwnerID"] = "";
	$tdataawazu[".OriginalTable"] = "shouhin";

//	field labels
$fieldLabelsawazu = array();
$fieldToolTipsawazu = array();
$pageTitlesawazu = array();
$placeHoldersawazu = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsawazu["Japanese"] = array();
	$fieldToolTipsawazu["Japanese"] = array();
	$placeHoldersawazu["Japanese"] = array();
	$pageTitlesawazu["Japanese"] = array();
	$fieldLabelsawazu["Japanese"]["product_id"] = "SEQ";
	$fieldToolTipsawazu["Japanese"]["product_id"] = "";
	$placeHoldersawazu["Japanese"]["product_id"] = "";
	$fieldLabelsawazu["Japanese"]["category_id"] = "大カテゴリー";
	$fieldToolTipsawazu["Japanese"]["category_id"] = "";
	$placeHoldersawazu["Japanese"]["category_id"] = "";
	$fieldLabelsawazu["Japanese"]["goods_title"] = "アイテム名";
	$fieldToolTipsawazu["Japanese"]["goods_title"] = "";
	$placeHoldersawazu["Japanese"]["goods_title"] = "";
	$fieldLabelsawazu["Japanese"]["title"] = "タイトル";
	$fieldToolTipsawazu["Japanese"]["title"] = "";
	$placeHoldersawazu["Japanese"]["title"] = "";
	$fieldLabelsawazu["Japanese"]["sub_category_id1"] = "中カテゴリー";
	$fieldToolTipsawazu["Japanese"]["sub_category_id1"] = "";
	$placeHoldersawazu["Japanese"]["sub_category_id1"] = "";
	$fieldLabelsawazu["Japanese"]["ecc_id"] = "Ecc Id";
	$fieldToolTipsawazu["Japanese"]["ecc_id"] = "";
	$placeHoldersawazu["Japanese"]["ecc_id"] = "";
	$fieldLabelsawazu["Japanese"]["price"] = "買取額";
	$fieldToolTipsawazu["Japanese"]["price"] = "";
	$placeHoldersawazu["Japanese"]["price"] = "";
	$fieldLabelsawazu["Japanese"]["yahoo"] = "Yahoo";
	$fieldToolTipsawazu["Japanese"]["yahoo"] = "";
	$placeHoldersawazu["Japanese"]["yahoo"] = "";
	$fieldLabelsawazu["Japanese"]["remark"] = "宝飾備考";
	$fieldToolTipsawazu["Japanese"]["remark"] = "";
	$placeHoldersawazu["Japanese"]["remark"] = "";
	$fieldLabelsawazu["Japanese"]["sales_price"] = "販売額";
	$fieldToolTipsawazu["Japanese"]["sales_price"] = "";
	$placeHoldersawazu["Japanese"]["sales_price"] = "";
	$fieldLabelsawazu["Japanese"]["description"] = "メモ";
	$fieldToolTipsawazu["Japanese"]["description"] = "";
	$placeHoldersawazu["Japanese"]["description"] = "";
	$fieldLabelsawazu["Japanese"]["status"] = "商品状態";
	$fieldToolTipsawazu["Japanese"]["status"] = "";
	$placeHoldersawazu["Japanese"]["status"] = "";
	$fieldLabelsawazu["Japanese"]["product_num"] = "ブランドID";
	$fieldToolTipsawazu["Japanese"]["product_num"] = "";
	$placeHoldersawazu["Japanese"]["product_num"] = "";
	$fieldLabelsawazu["Japanese"]["yahoo_size"] = "サイズ";
	$fieldToolTipsawazu["Japanese"]["yahoo_size"] = "";
	$placeHoldersawazu["Japanese"]["yahoo_size"] = "";
	$fieldLabelsawazu["Japanese"]["yahoo_title"] = "Yタイトル";
	$fieldToolTipsawazu["Japanese"]["yahoo_title"] = "";
	$placeHoldersawazu["Japanese"]["yahoo_title"] = "";
	$fieldLabelsawazu["Japanese"]["yahoo_sankou_uwadai"] = "参考上代";
	$fieldToolTipsawazu["Japanese"]["yahoo_sankou_uwadai"] = "";
	$placeHoldersawazu["Japanese"]["yahoo_sankou_uwadai"] = "";
	$fieldLabelsawazu["Japanese"]["yahoo_sozai"] = "素材";
	$fieldToolTipsawazu["Japanese"]["yahoo_sozai"] = "";
	$placeHoldersawazu["Japanese"]["yahoo_sozai"] = "";
	$fieldLabelsawazu["Japanese"]["yahoo_color"] = "カラー";
	$fieldToolTipsawazu["Japanese"]["yahoo_color"] = "";
	$placeHoldersawazu["Japanese"]["yahoo_color"] = "";
	$fieldLabelsawazu["Japanese"]["yahoo_kataban"] = "型番";
	$fieldToolTipsawazu["Japanese"]["yahoo_kataban"] = "";
	$placeHoldersawazu["Japanese"]["yahoo_kataban"] = "";
	$fieldLabelsawazu["Japanese"]["yahoo_condition1"] = "コンディションの詳細";
	$fieldToolTipsawazu["Japanese"]["yahoo_condition1"] = "";
	$placeHoldersawazu["Japanese"]["yahoo_condition1"] = "";
	$fieldLabelsawazu["Japanese"]["yahoo_condition2"] = "コンディション";
	$fieldToolTipsawazu["Japanese"]["yahoo_condition2"] = "";
	$placeHoldersawazu["Japanese"]["yahoo_condition2"] = "";
	$fieldLabelsawazu["Japanese"]["yahoo_fuzokuhin"] = "付属品";
	$fieldToolTipsawazu["Japanese"]["yahoo_fuzokuhin"] = "";
	$placeHoldersawazu["Japanese"]["yahoo_fuzokuhin"] = "";
	$fieldLabelsawazu["Japanese"]["yahoo_sinaban"] = "品番";
	$fieldToolTipsawazu["Japanese"]["yahoo_sinaban"] = "";
	$placeHoldersawazu["Japanese"]["yahoo_sinaban"] = "";
	$fieldLabelsawazu["Japanese"]["yahoo_saisun_sha"] = "Yahoo Saisun Sha";
	$fieldToolTipsawazu["Japanese"]["yahoo_saisun_sha"] = "";
	$placeHoldersawazu["Japanese"]["yahoo_saisun_sha"] = "";
	$fieldLabelsawazu["Japanese"]["yahoo_sex"] = "性別";
	$fieldToolTipsawazu["Japanese"]["yahoo_sex"] = "";
	$placeHoldersawazu["Japanese"]["yahoo_sex"] = "";
	$fieldLabelsawazu["Japanese"]["box_id"] = "Box Id";
	$fieldToolTipsawazu["Japanese"]["box_id"] = "";
	$placeHoldersawazu["Japanese"]["box_id"] = "";
	$fieldLabelsawazu["Japanese"]["nyuukin_price"] = "Nyuukin Price";
	$fieldToolTipsawazu["Japanese"]["nyuukin_price"] = "";
	$placeHoldersawazu["Japanese"]["nyuukin_price"] = "";
	$fieldLabelsawazu["Japanese"]["updated_by"] = "更新者";
	$fieldToolTipsawazu["Japanese"]["updated_by"] = "";
	$placeHoldersawazu["Japanese"]["updated_by"] = "";
	$fieldLabelsawazu["Japanese"]["raku_title"] = "楽天タイトル";
	$fieldToolTipsawazu["Japanese"]["raku_title"] = "";
	$placeHoldersawazu["Japanese"]["raku_title"] = "";
	$fieldLabelsawazu["Japanese"]["raku_hyoujisaki_category2"] = "楽ジャン（店舗内）2";
	$fieldToolTipsawazu["Japanese"]["raku_hyoujisaki_category2"] = "";
	$placeHoldersawazu["Japanese"]["raku_hyoujisaki_category2"] = "";
	$fieldLabelsawazu["Japanese"]["raku_hyoujisaki_category"] = "楽ジャン（店舗内）1";
	$fieldToolTipsawazu["Japanese"]["raku_hyoujisaki_category"] = "";
	$placeHoldersawazu["Japanese"]["raku_hyoujisaki_category"] = "";
	$fieldLabelsawazu["Japanese"]["raku_hyoujisaki_category3"] = "楽ジャン（店舗内）3";
	$fieldToolTipsawazu["Japanese"]["raku_hyoujisaki_category3"] = "";
	$placeHoldersawazu["Japanese"]["raku_hyoujisaki_category3"] = "";
	$fieldLabelsawazu["Japanese"]["timesta"] = "Timesta";
	$fieldToolTipsawazu["Japanese"]["timesta"] = "";
	$placeHoldersawazu["Japanese"]["timesta"] = "";
	$fieldLabelsawazu["Japanese"]["saisun_start"] = "Saisun Start";
	$fieldToolTipsawazu["Japanese"]["saisun_start"] = "";
	$placeHoldersawazu["Japanese"]["saisun_start"] = "";
	$fieldLabelsawazu["Japanese"]["saisun_end"] = "Saisun End";
	$fieldToolTipsawazu["Japanese"]["saisun_end"] = "";
	$placeHoldersawazu["Japanese"]["saisun_end"] = "";
	$fieldLabelsawazu["Japanese"]["label_output_flag"] = "ラベル出力";
	$fieldToolTipsawazu["Japanese"]["label_output_flag"] = "";
	$placeHoldersawazu["Japanese"]["label_output_flag"] = "";
	$fieldLabelsawazu["Japanese"]["season"] = "季節";
	$fieldToolTipsawazu["Japanese"]["season"] = "";
	$placeHoldersawazu["Japanese"]["season"] = "";
	$fieldLabelsawazu["Japanese"]["kanryou_henbi"] = "Kanryou Henbi";
	$fieldToolTipsawazu["Japanese"]["kanryou_henbi"] = "";
	$placeHoldersawazu["Japanese"]["kanryou_henbi"] = "";
	$fieldLabelsawazu["Japanese"]["box_sort"] = "Box Sort";
	$fieldToolTipsawazu["Japanese"]["box_sort"] = "";
	$placeHoldersawazu["Japanese"]["box_sort"] = "";
	$fieldLabelsawazu["Japanese"]["satei_by"] = "査定人";
	$fieldToolTipsawazu["Japanese"]["satei_by"] = "";
	$placeHoldersawazu["Japanese"]["satei_by"] = "";
	$fieldLabelsawazu["Japanese"]["kaitori_by"] = "Kaitori By";
	$fieldToolTipsawazu["Japanese"]["kaitori_by"] = "";
	$placeHoldersawazu["Japanese"]["kaitori_by"] = "";
	$fieldLabelsawazu["Japanese"]["comment"] = "コメント";
	$fieldToolTipsawazu["Japanese"]["comment"] = "";
	$placeHoldersawazu["Japanese"]["comment"] = "";
	$fieldLabelsawazu["Japanese"]["satei_hi"] = "査定日";
	$fieldToolTipsawazu["Japanese"]["satei_hi"] = "";
	$placeHoldersawazu["Japanese"]["satei_hi"] = "";
	$fieldLabelsawazu["Japanese"]["kaitory_hi"] = "Kaitory Hi";
	$fieldToolTipsawazu["Japanese"]["kaitory_hi"] = "";
	$placeHoldersawazu["Japanese"]["kaitory_hi"] = "";
	$fieldLabelsawazu["Japanese"]["REG_PHOTOGRAPHER"] = "REG PHOTOGRAPHER";
	$fieldToolTipsawazu["Japanese"]["REG_PHOTOGRAPHER"] = "";
	$placeHoldersawazu["Japanese"]["REG_PHOTOGRAPHER"] = "";
	$fieldLabelsawazu["Japanese"]["REG_PACKINGS"] = "REG PACKINGS";
	$fieldToolTipsawazu["Japanese"]["REG_PACKINGS"] = "";
	$placeHoldersawazu["Japanese"]["REG_PACKINGS"] = "";
	$fieldLabelsawazu["Japanese"]["REG_KAKOU_DATE"] = "REG KAKOU DATE";
	$fieldToolTipsawazu["Japanese"]["REG_KAKOU_DATE"] = "";
	$placeHoldersawazu["Japanese"]["REG_KAKOU_DATE"] = "";
	$fieldLabelsawazu["Japanese"]["REG_KAKOU"] = "REG KAKOU";
	$fieldToolTipsawazu["Japanese"]["REG_KAKOU"] = "";
	$placeHoldersawazu["Japanese"]["REG_KAKOU"] = "";
	$fieldLabelsawazu["Japanese"]["REG_EXHIBITOR"] = "REG EXHIBITOR";
	$fieldToolTipsawazu["Japanese"]["REG_EXHIBITOR"] = "";
	$placeHoldersawazu["Japanese"]["REG_EXHIBITOR"] = "";
	$fieldLabelsawazu["Japanese"]["REG_PHOTOGRAPHER_DATE"] = "REG PHOTOGRAPHER DATE";
	$fieldToolTipsawazu["Japanese"]["REG_PHOTOGRAPHER_DATE"] = "";
	$placeHoldersawazu["Japanese"]["REG_PHOTOGRAPHER_DATE"] = "";
	$fieldLabelsawazu["Japanese"]["DT_PACKING_DATE"] = "DT PACKING DATE";
	$fieldToolTipsawazu["Japanese"]["DT_PACKING_DATE"] = "";
	$placeHoldersawazu["Japanese"]["DT_PACKING_DATE"] = "";
	$fieldLabelsawazu["Japanese"]["DT_UP_DATE"] = "DT UP DATE";
	$fieldToolTipsawazu["Japanese"]["DT_UP_DATE"] = "";
	$placeHoldersawazu["Japanese"]["DT_UP_DATE"] = "";
	$fieldLabelsawazu["Japanese"]["AWAZU_DATE"] = "返却日";
	$fieldToolTipsawazu["Japanese"]["AWAZU_DATE"] = "";
	$placeHoldersawazu["Japanese"]["AWAZU_DATE"] = "";
	$fieldLabelsawazu["Japanese"]["AWAZU_NIN"] = "返却人";
	$fieldToolTipsawazu["Japanese"]["AWAZU_NIN"] = "";
	$placeHoldersawazu["Japanese"]["AWAZU_NIN"] = "";
	$fieldLabelsawazu["Japanese"]["sabun_date"] = "Sabun Date";
	$fieldToolTipsawazu["Japanese"]["sabun_date"] = "";
	$placeHoldersawazu["Japanese"]["sabun_date"] = "";
	$fieldLabelsawazu["Japanese"]["browseid"] = "Browseid";
	$fieldToolTipsawazu["Japanese"]["browseid"] = "";
	$placeHoldersawazu["Japanese"]["browseid"] = "";
	$fieldLabelsawazu["Japanese"]["browsenode"] = "Browsenode";
	$fieldToolTipsawazu["Japanese"]["browsenode"] = "";
	$placeHoldersawazu["Japanese"]["browsenode"] = "";
	$fieldLabelsawazu["Japanese"]["gold_property"] = "金性";
	$fieldToolTipsawazu["Japanese"]["gold_property"] = "";
	$placeHoldersawazu["Japanese"]["gold_property"] = "";
	$fieldLabelsawazu["Japanese"]["ichiba_title"] = "帳票用品名";
	$fieldToolTipsawazu["Japanese"]["ichiba_title"] = "";
	$placeHoldersawazu["Japanese"]["ichiba_title"] = "";
	$fieldLabelsawazu["Japanese"]["Gram"] = "金性グラム";
	$fieldToolTipsawazu["Japanese"]["Gram"] = "";
	$placeHoldersawazu["Japanese"]["Gram"] = "";
	$fieldLabelsawazu["Japanese"]["Parent_stone"] = "親石";
	$fieldToolTipsawazu["Japanese"]["Parent_stone"] = "";
	$placeHoldersawazu["Japanese"]["Parent_stone"] = "";
	$fieldLabelsawazu["Japanese"]["Aside_stone"] = "脇石";
	$fieldToolTipsawazu["Japanese"]["Aside_stone"] = "";
	$placeHoldersawazu["Japanese"]["Aside_stone"] = "";
	$fieldLabelsawazu["Japanese"]["Appraiser"] = "鑑定機関";
	$fieldToolTipsawazu["Japanese"]["Appraiser"] = "";
	$placeHoldersawazu["Japanese"]["Appraiser"] = "";
	$fieldLabelsawazu["Japanese"]["Remarks"] = "宝飾備考";
	$fieldToolTipsawazu["Japanese"]["Remarks"] = "";
	$placeHoldersawazu["Japanese"]["Remarks"] = "";
	$fieldLabelsawazu["Japanese"]["Destination_selling"] = "売り先";
	$fieldToolTipsawazu["Japanese"]["Destination_selling"] = "";
	$placeHoldersawazu["Japanese"]["Destination_selling"] = "";
	$fieldLabelsawazu["Japanese"]["Finish"] = "仕上";
	$fieldToolTipsawazu["Japanese"]["Finish"] = "";
	$placeHoldersawazu["Japanese"]["Finish"] = "";
	$fieldLabelsawazu["Japanese"]["Discrimination"] = "鑑別";
	$fieldToolTipsawazu["Japanese"]["Discrimination"] = "";
	$placeHoldersawazu["Japanese"]["Discrimination"] = "";
	$fieldLabelsawazu["Japanese"]["accessories"] = "付属品";
	$fieldToolTipsawazu["Japanese"]["accessories"] = "";
	$placeHoldersawazu["Japanese"]["accessories"] = "";
	$fieldLabelsawazu["Japanese"]["priority"] = "優先";
	$fieldToolTipsawazu["Japanese"]["priority"] = "";
	$placeHoldersawazu["Japanese"]["priority"] = "";
	$fieldLabelsawazu["Japanese"]["A_storage"] = "A保管";
	$fieldToolTipsawazu["Japanese"]["A_storage"] = "";
	$placeHoldersawazu["Japanese"]["A_storage"] = "";
	$fieldLabelsawazu["Japanese"]["price_per_gram"] = "金性単価";
	$fieldToolTipsawazu["Japanese"]["price_per_gram"] = "";
	$placeHoldersawazu["Japanese"]["price_per_gram"] = "";
	$fieldLabelsawazu["Japanese"]["price_per_parent_stone"] = "親石単価";
	$fieldToolTipsawazu["Japanese"]["price_per_parent_stone"] = "";
	$placeHoldersawazu["Japanese"]["price_per_parent_stone"] = "";
	$fieldLabelsawazu["Japanese"]["price_per_aside_stone"] = "脇石単価";
	$fieldToolTipsawazu["Japanese"]["price_per_aside_stone"] = "";
	$placeHoldersawazu["Japanese"]["price_per_aside_stone"] = "";
	$fieldLabelsawazu["Japanese"]["price_secret"] = "買取額隠語";
	$fieldToolTipsawazu["Japanese"]["price_secret"] = "";
	$placeHoldersawazu["Japanese"]["price_secret"] = "";
	$fieldLabelsawazu["Japanese"]["sales_price_secret"] = "販売額隠語";
	$fieldToolTipsawazu["Japanese"]["sales_price_secret"] = "";
	$placeHoldersawazu["Japanese"]["sales_price_secret"] = "";
	$fieldLabelsawazu["Japanese"]["eq"] = "=";
	$fieldToolTipsawazu["Japanese"]["eq"] = "";
	$placeHoldersawazu["Japanese"]["eq"] = "";
	$fieldLabelsawazu["Japanese"]["en"] = "円";
	$fieldToolTipsawazu["Japanese"]["en"] = "";
	$placeHoldersawazu["Japanese"]["en"] = "";
	$fieldLabelsawazu["Japanese"]["line"] = "ライン";
	$fieldToolTipsawazu["Japanese"]["line"] = "";
	$placeHoldersawazu["Japanese"]["line"] = "";
	$fieldLabelsawazu["Japanese"]["item_name"] = "アイテム名";
	$fieldToolTipsawazu["Japanese"]["item_name"] = "";
	$placeHoldersawazu["Japanese"]["item_name"] = "";
	$fieldLabelsawazu["Japanese"]["handle"] = "柄";
	$fieldToolTipsawazu["Japanese"]["handle"] = "";
	$placeHoldersawazu["Japanese"]["handle"] = "";
	$fieldLabelsawazu["Japanese"]["yahoo_color_id"] = "カラーid";
	$fieldToolTipsawazu["Japanese"]["yahoo_color_id"] = "";
	$placeHoldersawazu["Japanese"]["yahoo_color_id"] = "";
	$fieldLabelsawazu["Japanese"]["raku_hyoujisaki_category4"] = "楽ジャン（店舗内）4";
	$fieldToolTipsawazu["Japanese"]["raku_hyoujisaki_category4"] = "";
	$placeHoldersawazu["Japanese"]["raku_hyoujisaki_category4"] = "";
	$fieldLabelsawazu["Japanese"]["raku_hyoujisaki_category5"] = "楽ジャン（店舗内）5";
	$fieldToolTipsawazu["Japanese"]["raku_hyoujisaki_category5"] = "";
	$placeHoldersawazu["Japanese"]["raku_hyoujisaki_category5"] = "";
	$fieldLabelsawazu["Japanese"]["raku_dir_1"] = "Raku Dir 1";
	$fieldToolTipsawazu["Japanese"]["raku_dir_1"] = "";
	$placeHoldersawazu["Japanese"]["raku_dir_1"] = "";
	$fieldLabelsawazu["Japanese"]["raku_dir_2"] = "Raku Dir 2";
	$fieldToolTipsawazu["Japanese"]["raku_dir_2"] = "";
	$placeHoldersawazu["Japanese"]["raku_dir_2"] = "";
	$fieldLabelsawazu["Japanese"]["raku_dir_3"] = "Raku Dir 3";
	$fieldToolTipsawazu["Japanese"]["raku_dir_3"] = "";
	$placeHoldersawazu["Japanese"]["raku_dir_3"] = "";
	$fieldLabelsawazu["Japanese"]["raku_dir_4"] = "Raku Dir 4";
	$fieldToolTipsawazu["Japanese"]["raku_dir_4"] = "";
	$placeHoldersawazu["Japanese"]["raku_dir_4"] = "";
	$fieldLabelsawazu["Japanese"]["raku_dir_5"] = "Raku Dir 5";
	$fieldToolTipsawazu["Japanese"]["raku_dir_5"] = "";
	$placeHoldersawazu["Japanese"]["raku_dir_5"] = "";
	$fieldLabelsawazu["Japanese"]["raku_dir_result"] = "Raku Dir Result";
	$fieldToolTipsawazu["Japanese"]["raku_dir_result"] = "";
	$placeHoldersawazu["Japanese"]["raku_dir_result"] = "";
	$fieldLabelsawazu["Japanese"]["raku_tag_result"] = "楽天タグID　Result";
	$fieldToolTipsawazu["Japanese"]["raku_tag_result"] = "";
	$placeHoldersawazu["Japanese"]["raku_tag_result"] = "";
	$fieldLabelsawazu["Japanese"]["serial_number"] = "機番";
	$fieldToolTipsawazu["Japanese"]["serial_number"] = "";
	$placeHoldersawazu["Japanese"]["serial_number"] = "";
	$fieldLabelsawazu["Japanese"]["Exhibition_Date"] = "Exhibition Date";
	$fieldToolTipsawazu["Japanese"]["Exhibition_Date"] = "";
	$placeHoldersawazu["Japanese"]["Exhibition_Date"] = "";
	$fieldLabelsawazu["Japanese"]["search_keyword"] = "ストア内検索キーワード";
	$fieldToolTipsawazu["Japanese"]["search_keyword"] = "";
	$placeHoldersawazu["Japanese"]["search_keyword"] = "";
	$fieldLabelsawazu["Japanese"]["stamp"] = "刻印";
	$fieldToolTipsawazu["Japanese"]["stamp"] = "";
	$placeHoldersawazu["Japanese"]["stamp"] = "";
	$fieldLabelsawazu["Japanese"]["motif"] = "モチーフ";
	$fieldToolTipsawazu["Japanese"]["motif"] = "";
	$placeHoldersawazu["Japanese"]["motif"] = "";
	$fieldLabelsawazu["Japanese"]["Setting"] = "セッティング";
	$fieldToolTipsawazu["Japanese"]["Setting"] = "";
	$placeHoldersawazu["Japanese"]["Setting"] = "";
	$fieldLabelsawazu["Japanese"]["processing"] = "処理";
	$fieldToolTipsawazu["Japanese"]["processing"] = "";
	$placeHoldersawazu["Japanese"]["processing"] = "";
	$fieldLabelsawazu["Japanese"]["Sleeve_Length"] = "袖丈";
	$fieldToolTipsawazu["Japanese"]["Sleeve_Length"] = "";
	$placeHoldersawazu["Japanese"]["Sleeve_Length"] = "";
	$fieldLabelsawazu["Japanese"]["length"] = "丈";
	$fieldToolTipsawazu["Japanese"]["length"] = "";
	$placeHoldersawazu["Japanese"]["length"] = "";
	$fieldLabelsawazu["Japanese"]["Ring_size"] = "リングサイズ";
	$fieldToolTipsawazu["Japanese"]["Ring_size"] = "";
	$placeHoldersawazu["Japanese"]["Ring_size"] = "";
	$fieldLabelsawazu["Japanese"]["price_for_site"] = "Price For Site";
	$fieldToolTipsawazu["Japanese"]["price_for_site"] = "";
	$placeHoldersawazu["Japanese"]["price_for_site"] = "";
	$fieldLabelsawazu["Japanese"]["yahoo_category_id"] = "Yahoo Category Id";
	$fieldToolTipsawazu["Japanese"]["yahoo_category_id"] = "";
	$placeHoldersawazu["Japanese"]["yahoo_category_id"] = "";
	$fieldLabelsawazu["Japanese"]["Qty"] = "Qty";
	$fieldToolTipsawazu["Japanese"]["Qty"] = "";
	$placeHoldersawazu["Japanese"]["Qty"] = "";
	$fieldLabelsawazu["Japanese"]["sales_period"] = "Sales Period";
	$fieldToolTipsawazu["Japanese"]["sales_period"] = "";
	$placeHoldersawazu["Japanese"]["sales_period"] = "";
	$fieldLabelsawazu["Japanese"]["starting_price"] = "Starting Price";
	$fieldToolTipsawazu["Japanese"]["starting_price"] = "";
	$placeHoldersawazu["Japanese"]["starting_price"] = "";
	$fieldLabelsawazu["Japanese"]["ecc_seq"] = "顧客番号";
	$fieldToolTipsawazu["Japanese"]["ecc_seq"] = "";
	$placeHoldersawazu["Japanese"]["ecc_seq"] = "";
	$fieldLabelsawazu["Japanese"]["yahoo_junle"] = "ブランドジャンル";
	$fieldToolTipsawazu["Japanese"]["yahoo_junle"] = "";
	$placeHoldersawazu["Japanese"]["yahoo_junle"] = "";
	$fieldLabelsawazu["Japanese"]["updated_at"] = "更新日";
	$fieldToolTipsawazu["Japanese"]["updated_at"] = "";
	$placeHoldersawazu["Japanese"]["updated_at"] = "";
	if (count($fieldToolTipsawazu["Japanese"]))
		$tdataawazu[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsawazu[""] = array();
	$fieldToolTipsawazu[""] = array();
	$placeHoldersawazu[""] = array();
	$pageTitlesawazu[""] = array();
	$fieldLabelsawazu[""]["updated_at"] = "Updated At";
	$fieldToolTipsawazu[""]["updated_at"] = "";
	$placeHoldersawazu[""]["updated_at"] = "";
	if (count($fieldToolTipsawazu[""]))
		$tdataawazu[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsawazu["English"] = array();
	$fieldToolTipsawazu["English"] = array();
	$placeHoldersawazu["English"] = array();
	$pageTitlesawazu["English"] = array();
	if (count($fieldToolTipsawazu["English"]))
		$tdataawazu[".isUseToolTips"] = true;
}


	$tdataawazu[".NCSearch"] = true;



$tdataawazu[".shortTableName"] = "awazu";
$tdataawazu[".nSecOptions"] = 0;
$tdataawazu[".recsPerRowPrint"] = 1;
$tdataawazu[".mainTableOwnerID"] = "";
$tdataawazu[".moveNext"] = 1;
$tdataawazu[".entityType"] = 1;

$tdataawazu[".strOriginalTableName"] = "shouhin";

	



$tdataawazu[".showAddInPopup"] = false;

$tdataawazu[".showEditInPopup"] = false;

$tdataawazu[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataawazu[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataawazu[".fieldsForRegister"] = array();

$tdataawazu[".listAjax"] = false;

	$tdataawazu[".audit"] = true;

	$tdataawazu[".locking"] = false;

$tdataawazu[".edit"] = true;
$tdataawazu[".afterEditAction"] = 1;
$tdataawazu[".closePopupAfterEdit"] = 1;
$tdataawazu[".afterEditActionDetTable"] = "";

$tdataawazu[".add"] = true;
$tdataawazu[".afterAddAction"] = 1;
$tdataawazu[".closePopupAfterAdd"] = 1;
$tdataawazu[".afterAddActionDetTable"] = "";

$tdataawazu[".list"] = true;

$tdataawazu[".inlineEdit"] = true;

$tdataawazu[".updateSelected"] = true;

$tdataawazu[".reorderRecordsByHeader"] = true;
$tdataawazu[".createSortByDropdown"] = true;
$tdataawazu[".strSortControlSettingsJSON"] = "";



$tdataawazu[".inlineAdd"] = true;
$tdataawazu[".copy"] = true;
$tdataawazu[".view"] = true;

$tdataawazu[".import"] = true;

$tdataawazu[".exportTo"] = true;

$tdataawazu[".printFriendly"] = true;

$tdataawazu[".delete"] = true;

$tdataawazu[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataawazu[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataawazu[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataawazu[".searchSaving"] = false;
//

$tdataawazu[".showSearchPanel"] = true;
		$tdataawazu[".flexibleSearch"] = true;

$tdataawazu[".isUseAjaxSuggest"] = true;

$tdataawazu[".rowHighlite"] = true;



																																																																																																							
					
																																													
					
																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																														

$tdataawazu[".ajaxCodeSnippetAdded"] = false;

$tdataawazu[".buttonsAdded"] = true;

$tdataawazu[".addPageEvents"] = true;

// use timepicker for search panel
$tdataawazu[".isUseTimeForSearch"] = false;



$tdataawazu[".badgeColor"] = "daa520";


$tdataawazu[".allSearchFields"] = array();
$tdataawazu[".filterFields"] = array();
$tdataawazu[".requiredSearchFields"] = array();

$tdataawazu[".allSearchFields"][] = "updated_at";
	$tdataawazu[".allSearchFields"][] = "product_num";
	$tdataawazu[".allSearchFields"][] = "category_id";
	$tdataawazu[".allSearchFields"][] = "sub_category_id1";
	$tdataawazu[".allSearchFields"][] = "yahoo_sex";
	$tdataawazu[".allSearchFields"][] = "yahoo_condition2";
	$tdataawazu[".allSearchFields"][] = "ecc_seq";
	$tdataawazu[".allSearchFields"][] = "status";
	$tdataawazu[".allSearchFields"][] = "satei_by";
	$tdataawazu[".allSearchFields"][] = "title";
	$tdataawazu[".allSearchFields"][] = "product_id";
	$tdataawazu[".allSearchFields"][] = "yahoo_sinaban";
	$tdataawazu[".allSearchFields"][] = "price";
	$tdataawazu[".allSearchFields"][] = "sales_price";
	$tdataawazu[".allSearchFields"][] = "description";
	$tdataawazu[".allSearchFields"][] = "raku_hyoujisaki_category";
	$tdataawazu[".allSearchFields"][] = "raku_hyoujisaki_category2";
	$tdataawazu[".allSearchFields"][] = "raku_hyoujisaki_category3";
	$tdataawazu[".allSearchFields"][] = "raku_hyoujisaki_category4";
	$tdataawazu[".allSearchFields"][] = "raku_hyoujisaki_category5";
	$tdataawazu[".allSearchFields"][] = "yahoo_kataban";
	$tdataawazu[".allSearchFields"][] = "yahoo_sozai";
	$tdataawazu[".allSearchFields"][] = "yahoo_color";
	$tdataawazu[".allSearchFields"][] = "yahoo_size";
	$tdataawazu[".allSearchFields"][] = "yahoo_condition1";
	$tdataawazu[".allSearchFields"][] = "remark";
	$tdataawazu[".allSearchFields"][] = "yahoo_fuzokuhin";
	$tdataawazu[".allSearchFields"][] = "yahoo_sankou_uwadai";
	$tdataawazu[".allSearchFields"][] = "season";
	$tdataawazu[".allSearchFields"][] = "yahoo_title";
	$tdataawazu[".allSearchFields"][] = "goods_title";
	$tdataawazu[".allSearchFields"][] = "updated_by";
	$tdataawazu[".allSearchFields"][] = "raku_title";
	$tdataawazu[".allSearchFields"][] = "raku_tag_result";
	$tdataawazu[".allSearchFields"][] = "search_keyword";
	$tdataawazu[".allSearchFields"][] = "stamp";
	$tdataawazu[".allSearchFields"][] = "processing";
	$tdataawazu[".allSearchFields"][] = "Sleeve_Length";
	$tdataawazu[".allSearchFields"][] = "length";
	$tdataawazu[".allSearchFields"][] = "label_output_flag";
	$tdataawazu[".allSearchFields"][] = "Ring_size";
	$tdataawazu[".allSearchFields"][] = "comment";
	$tdataawazu[".allSearchFields"][] = "satei_hi";
	$tdataawazu[".allSearchFields"][] = "gold_property";
	$tdataawazu[".allSearchFields"][] = "ichiba_title";
	$tdataawazu[".allSearchFields"][] = "Gram";
	$tdataawazu[".allSearchFields"][] = "Parent_stone";
	$tdataawazu[".allSearchFields"][] = "Aside_stone";
	$tdataawazu[".allSearchFields"][] = "Appraiser";
	$tdataawazu[".allSearchFields"][] = "Remarks";
	$tdataawazu[".allSearchFields"][] = "Destination_selling";
	$tdataawazu[".allSearchFields"][] = "Finish";
	$tdataawazu[".allSearchFields"][] = "Discrimination";
	$tdataawazu[".allSearchFields"][] = "accessories";
	$tdataawazu[".allSearchFields"][] = "priority";
	$tdataawazu[".allSearchFields"][] = "A_storage";
	$tdataawazu[".allSearchFields"][] = "price_per_gram";
	$tdataawazu[".allSearchFields"][] = "AWAZU_DATE";
	$tdataawazu[".allSearchFields"][] = "price_per_parent_stone";
	$tdataawazu[".allSearchFields"][] = "AWAZU_NIN";
	$tdataawazu[".allSearchFields"][] = "price_per_aside_stone";
	$tdataawazu[".allSearchFields"][] = "price_secret";
	$tdataawazu[".allSearchFields"][] = "sales_price_secret";
	$tdataawazu[".allSearchFields"][] = "line";
	$tdataawazu[".allSearchFields"][] = "item_name";
	$tdataawazu[".allSearchFields"][] = "handle";
	$tdataawazu[".allSearchFields"][] = "yahoo_color_id";
	$tdataawazu[".allSearchFields"][] = "serial_number";
	$tdataawazu[".allSearchFields"][] = "motif";
	$tdataawazu[".allSearchFields"][] = "Setting";
	

$tdataawazu[".googleLikeFields"] = array();
$tdataawazu[".googleLikeFields"][] = "product_id";
$tdataawazu[".googleLikeFields"][] = "category_id";
$tdataawazu[".googleLikeFields"][] = "goods_title";
$tdataawazu[".googleLikeFields"][] = "title";
$tdataawazu[".googleLikeFields"][] = "sub_category_id1";
$tdataawazu[".googleLikeFields"][] = "price";
$tdataawazu[".googleLikeFields"][] = "remark";
$tdataawazu[".googleLikeFields"][] = "sales_price";
$tdataawazu[".googleLikeFields"][] = "description";
$tdataawazu[".googleLikeFields"][] = "status";
$tdataawazu[".googleLikeFields"][] = "product_num";
$tdataawazu[".googleLikeFields"][] = "yahoo_size";
$tdataawazu[".googleLikeFields"][] = "yahoo_title";
$tdataawazu[".googleLikeFields"][] = "yahoo_sankou_uwadai";
$tdataawazu[".googleLikeFields"][] = "yahoo_sozai";
$tdataawazu[".googleLikeFields"][] = "yahoo_color";
$tdataawazu[".googleLikeFields"][] = "yahoo_kataban";
$tdataawazu[".googleLikeFields"][] = "yahoo_condition1";
$tdataawazu[".googleLikeFields"][] = "yahoo_condition2";
$tdataawazu[".googleLikeFields"][] = "yahoo_fuzokuhin";
$tdataawazu[".googleLikeFields"][] = "yahoo_sinaban";
$tdataawazu[".googleLikeFields"][] = "yahoo_sex";
$tdataawazu[".googleLikeFields"][] = "raku_title";
$tdataawazu[".googleLikeFields"][] = "raku_hyoujisaki_category2";
$tdataawazu[".googleLikeFields"][] = "raku_hyoujisaki_category";
$tdataawazu[".googleLikeFields"][] = "raku_hyoujisaki_category3";
$tdataawazu[".googleLikeFields"][] = "label_output_flag";
$tdataawazu[".googleLikeFields"][] = "season";
$tdataawazu[".googleLikeFields"][] = "satei_by";
$tdataawazu[".googleLikeFields"][] = "comment";
$tdataawazu[".googleLikeFields"][] = "satei_hi";
$tdataawazu[".googleLikeFields"][] = "gold_property";
$tdataawazu[".googleLikeFields"][] = "ichiba_title";
$tdataawazu[".googleLikeFields"][] = "Gram";
$tdataawazu[".googleLikeFields"][] = "Parent_stone";
$tdataawazu[".googleLikeFields"][] = "Aside_stone";
$tdataawazu[".googleLikeFields"][] = "Appraiser";
$tdataawazu[".googleLikeFields"][] = "Remarks";
$tdataawazu[".googleLikeFields"][] = "Destination_selling";
$tdataawazu[".googleLikeFields"][] = "Finish";
$tdataawazu[".googleLikeFields"][] = "Discrimination";
$tdataawazu[".googleLikeFields"][] = "accessories";
$tdataawazu[".googleLikeFields"][] = "priority";
$tdataawazu[".googleLikeFields"][] = "A_storage";
$tdataawazu[".googleLikeFields"][] = "price_per_gram";
$tdataawazu[".googleLikeFields"][] = "price_per_parent_stone";
$tdataawazu[".googleLikeFields"][] = "price_per_aside_stone";
$tdataawazu[".googleLikeFields"][] = "price_secret";
$tdataawazu[".googleLikeFields"][] = "sales_price_secret";
$tdataawazu[".googleLikeFields"][] = "line";
$tdataawazu[".googleLikeFields"][] = "item_name";
$tdataawazu[".googleLikeFields"][] = "handle";
$tdataawazu[".googleLikeFields"][] = "yahoo_color_id";
$tdataawazu[".googleLikeFields"][] = "raku_hyoujisaki_category4";
$tdataawazu[".googleLikeFields"][] = "raku_hyoujisaki_category5";
$tdataawazu[".googleLikeFields"][] = "raku_tag_result";
$tdataawazu[".googleLikeFields"][] = "serial_number";
$tdataawazu[".googleLikeFields"][] = "search_keyword";
$tdataawazu[".googleLikeFields"][] = "stamp";
$tdataawazu[".googleLikeFields"][] = "motif";
$tdataawazu[".googleLikeFields"][] = "Setting";
$tdataawazu[".googleLikeFields"][] = "processing";
$tdataawazu[".googleLikeFields"][] = "Sleeve_Length";
$tdataawazu[".googleLikeFields"][] = "length";
$tdataawazu[".googleLikeFields"][] = "Ring_size";
$tdataawazu[".googleLikeFields"][] = "ecc_seq";
$tdataawazu[".googleLikeFields"][] = "yahoo_junle";
$tdataawazu[".googleLikeFields"][] = "updated_at";

$tdataawazu[".panelSearchFields"] = array();
$tdataawazu[".searchPanelOptions"] = array();
$tdataawazu[".panelSearchFields"][] = "product_num";
	$tdataawazu[".panelSearchFields"][] = "category_id";
	$tdataawazu[".panelSearchFields"][] = "sub_category_id1";
	$tdataawazu[".panelSearchFields"][] = "yahoo_sex";
	$tdataawazu[".panelSearchFields"][] = "yahoo_condition2";
	
$tdataawazu[".advSearchFields"] = array();
$tdataawazu[".advSearchFields"][] = "updated_at";
$tdataawazu[".advSearchFields"][] = "product_num";
$tdataawazu[".advSearchFields"][] = "category_id";
$tdataawazu[".advSearchFields"][] = "sub_category_id1";
$tdataawazu[".advSearchFields"][] = "yahoo_sex";
$tdataawazu[".advSearchFields"][] = "yahoo_condition2";
$tdataawazu[".advSearchFields"][] = "ecc_seq";
$tdataawazu[".advSearchFields"][] = "status";
$tdataawazu[".advSearchFields"][] = "satei_by";
$tdataawazu[".advSearchFields"][] = "title";
$tdataawazu[".advSearchFields"][] = "product_id";
$tdataawazu[".advSearchFields"][] = "yahoo_sinaban";
$tdataawazu[".advSearchFields"][] = "price";
$tdataawazu[".advSearchFields"][] = "sales_price";
$tdataawazu[".advSearchFields"][] = "description";
$tdataawazu[".advSearchFields"][] = "raku_hyoujisaki_category";
$tdataawazu[".advSearchFields"][] = "raku_hyoujisaki_category2";
$tdataawazu[".advSearchFields"][] = "raku_hyoujisaki_category3";
$tdataawazu[".advSearchFields"][] = "raku_hyoujisaki_category4";
$tdataawazu[".advSearchFields"][] = "raku_hyoujisaki_category5";
$tdataawazu[".advSearchFields"][] = "yahoo_kataban";
$tdataawazu[".advSearchFields"][] = "yahoo_sozai";
$tdataawazu[".advSearchFields"][] = "yahoo_color";
$tdataawazu[".advSearchFields"][] = "yahoo_size";
$tdataawazu[".advSearchFields"][] = "yahoo_condition1";
$tdataawazu[".advSearchFields"][] = "remark";
$tdataawazu[".advSearchFields"][] = "yahoo_fuzokuhin";
$tdataawazu[".advSearchFields"][] = "yahoo_sankou_uwadai";
$tdataawazu[".advSearchFields"][] = "season";
$tdataawazu[".advSearchFields"][] = "yahoo_title";
$tdataawazu[".advSearchFields"][] = "goods_title";
$tdataawazu[".advSearchFields"][] = "updated_by";
$tdataawazu[".advSearchFields"][] = "raku_title";
$tdataawazu[".advSearchFields"][] = "raku_tag_result";
$tdataawazu[".advSearchFields"][] = "search_keyword";
$tdataawazu[".advSearchFields"][] = "stamp";
$tdataawazu[".advSearchFields"][] = "processing";
$tdataawazu[".advSearchFields"][] = "Sleeve_Length";
$tdataawazu[".advSearchFields"][] = "length";
$tdataawazu[".advSearchFields"][] = "label_output_flag";
$tdataawazu[".advSearchFields"][] = "Ring_size";
$tdataawazu[".advSearchFields"][] = "comment";
$tdataawazu[".advSearchFields"][] = "satei_hi";
$tdataawazu[".advSearchFields"][] = "gold_property";
$tdataawazu[".advSearchFields"][] = "ichiba_title";
$tdataawazu[".advSearchFields"][] = "Gram";
$tdataawazu[".advSearchFields"][] = "Parent_stone";
$tdataawazu[".advSearchFields"][] = "Aside_stone";
$tdataawazu[".advSearchFields"][] = "Appraiser";
$tdataawazu[".advSearchFields"][] = "Remarks";
$tdataawazu[".advSearchFields"][] = "Destination_selling";
$tdataawazu[".advSearchFields"][] = "Finish";
$tdataawazu[".advSearchFields"][] = "Discrimination";
$tdataawazu[".advSearchFields"][] = "accessories";
$tdataawazu[".advSearchFields"][] = "priority";
$tdataawazu[".advSearchFields"][] = "A_storage";
$tdataawazu[".advSearchFields"][] = "price_per_gram";
$tdataawazu[".advSearchFields"][] = "AWAZU_DATE";
$tdataawazu[".advSearchFields"][] = "price_per_parent_stone";
$tdataawazu[".advSearchFields"][] = "AWAZU_NIN";
$tdataawazu[".advSearchFields"][] = "price_per_aside_stone";
$tdataawazu[".advSearchFields"][] = "price_secret";
$tdataawazu[".advSearchFields"][] = "sales_price_secret";
$tdataawazu[".advSearchFields"][] = "line";
$tdataawazu[".advSearchFields"][] = "item_name";
$tdataawazu[".advSearchFields"][] = "handle";
$tdataawazu[".advSearchFields"][] = "yahoo_color_id";
$tdataawazu[".advSearchFields"][] = "serial_number";
$tdataawazu[".advSearchFields"][] = "motif";
$tdataawazu[".advSearchFields"][] = "Setting";

$tdataawazu[".tableType"] = "list";

$tdataawazu[".printerPageOrientation"] = 0;
$tdataawazu[".nPrinterPageScale"] = 100;

$tdataawazu[".nPrinterSplitRecords"] = 40;

$tdataawazu[".nPrinterPDFSplitRecords"] = 40;



$tdataawazu[".geocodingEnabled"] = false;





$tdataawazu[".listGridLayout"] = 3;





// view page pdf
$tdataawazu[".isViewPagePDF"] = true;
$tdataawazu[".nViewPagePDFScale"] = 100;

// print page pdf
$tdataawazu[".isPrinterPagePDF"] = true;
$tdataawazu[".nPrinterPagePDFScale"] = 100;


$tdataawazu[".pageSize"] = 20;

$tdataawazu[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `shouhin`.`product_id` DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataawazu[".strOrderBy"] = $tstrOrderBy;

$tdataawazu[".orderindexes"] = array();
$tdataawazu[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "`shouhin`.`product_id`");

$tdataawazu[".sqlHead"] = "SELECT `shouhin`.`product_id`,  `shouhin`.`category_id`,  `shouhin`.`goods_title`,  `shouhin`.`title`,  `shouhin`.`sub_category_id1`,  `shouhin`.`ecc_id`,  `shouhin`.`price`,  `shouhin`.`yahoo`,  `shouhin`.`remark`,  `shouhin`.`sales_price`,  `shouhin`.`description`,  `shouhin`.`status`,  `shouhin`.`product_num`,  `shouhin`.`yahoo_size`,  `shouhin`.`yahoo_title`,  `shouhin`.`yahoo_sankou_uwadai`,  `shouhin`.`yahoo_sozai`,  `shouhin`.`yahoo_color`,  `shouhin`.`yahoo_kataban`,  `shouhin`.`yahoo_condition1`,  `shouhin`.`yahoo_condition2`,  `shouhin`.`yahoo_fuzokuhin`,  `shouhin`.`yahoo_sinaban`,  `shouhin`.`yahoo_saisun_sha`,  `shouhin`.`yahoo_sex`,  `shouhin`.`box_id`,  `shouhin`.`nyuukin_price`,  `shouhin`.`updated_by`,  `shouhin`.`raku_title`,  `shouhin`.`raku_hyoujisaki_category2`,  `shouhin`.`raku_hyoujisaki_category`,  `shouhin`.`raku_hyoujisaki_category3`,  `shouhin`.`timesta`,  `shouhin`.`saisun_start`,  `shouhin`.`saisun_end`,  `shouhin`.`label_output_flag`,  `shouhin`.`season`,  `shouhin`.`kanryou_henbi`,  `shouhin`.`box_sort`,  `shouhin`.`satei_by`,  `shouhin`.`kaitori_by`,  `shouhin`.`comment`,  `shouhin`.`satei_hi`,  `shouhin`.`kaitory_hi`,  `shouhin`.`REG_PHOTOGRAPHER`,  `shouhin`.`REG_PACKINGS`,  `shouhin`.`REG_KAKOU_DATE`,  `shouhin`.`REG_KAKOU`,  `shouhin`.`REG_EXHIBITOR`,  `shouhin`.`REG_PHOTOGRAPHER_DATE`,  `shouhin`.`DT_PACKING_DATE`,  `shouhin`.`DT_UP_DATE`,  `shouhin`.`AWAZU_DATE`,  `shouhin`.`AWAZU_NIN`,  `shouhin`.`sabun_date`,  `shouhin`.`browseid`,  `shouhin`.`browsenode`,  `shouhin`.`gold_property`,  `shouhin`.`ichiba_title`,  `shouhin`.`Gram`,  `shouhin`.`Parent_stone`,  `shouhin`.`Aside_stone`,  `shouhin`.`Appraiser`,  `shouhin`.`Remarks`,  `shouhin`.`Destination_selling`,  `shouhin`.`Finish`,  `shouhin`.`Discrimination`,  `shouhin`.`accessories`,  `shouhin`.`priority`,  `shouhin`.`A_storage`,  `shouhin`.`price_per_gram`,  `shouhin`.`price_per_parent_stone`,  `shouhin`.`price_per_aside_stone`,  `shouhin`.`price_secret`,  `shouhin`.`sales_price_secret`,  `shouhin`.`eq`,  `shouhin`.`en`,  `shouhin`.`line`,  `shouhin`.`item_name`,  `shouhin`.`handle`,  `shouhin`.`yahoo_color_id`,  `shouhin`.`raku_hyoujisaki_category4`,  `shouhin`.`raku_hyoujisaki_category5`,  `shouhin`.`raku_dir_1`,  `shouhin`.`raku_dir_2`,  `shouhin`.`raku_dir_3`,  `shouhin`.`raku_dir_4`,  `shouhin`.`raku_dir_5`,  `shouhin`.`raku_dir_result`,  `shouhin`.`raku_tag_result`,  `shouhin`.`serial_number`,  `shouhin`.`Exhibition_Date`,  `shouhin`.`search_keyword`,  `shouhin`.`stamp`,  `shouhin`.`motif`,  `shouhin`.`Setting`,  `shouhin`.`processing`,  `shouhin`.`Sleeve_Length`,  `shouhin`.`length`,  `shouhin`.`Ring_size`,  `shouhin`.`price_for_site`,  `shouhin`.`yahoo_category_id`,  `shouhin`.`Qty`,  `shouhin`.`sales_period`,  `shouhin`.`starting_price`,  `Eoc`.`ecc_seq`,  `shouhin`.`yahoo_junle`,  `shouhin`.`updated_at`";
$tdataawazu[".sqlFrom"] = "FROM `shouhin`  LEFT OUTER JOIN `Eoc` ON `shouhin`.`ecc_id` = `Eoc`.`ecc_id`";
$tdataawazu[".sqlWhereExpr"] = "(`shouhin`.`status` =34)";
$tdataawazu[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataawazu[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataawazu[".arrGroupsPerPage"] = $arrGPP;

$tdataawazu[".highlightSearchResults"] = true;

$tableKeysawazu = array();
$tableKeysawazu[] = "product_id";
$tdataawazu[".Keys"] = $tableKeysawazu;

$tdataawazu[".listFields"] = array();
$tdataawazu[".listFields"][] = "label_output_flag";
$tdataawazu[".listFields"][] = "status";
$tdataawazu[".listFields"][] = "product_id";
$tdataawazu[".listFields"][] = "product_num";
$tdataawazu[".listFields"][] = "category_id";
$tdataawazu[".listFields"][] = "sub_category_id1";
$tdataawazu[".listFields"][] = "yahoo_sex";
$tdataawazu[".listFields"][] = "yahoo_condition2";
$tdataawazu[".listFields"][] = "line";
$tdataawazu[".listFields"][] = "item_name";
$tdataawazu[".listFields"][] = "yahoo_sozai";
$tdataawazu[".listFields"][] = "motif";
$tdataawazu[".listFields"][] = "Setting";
$tdataawazu[".listFields"][] = "processing";
$tdataawazu[".listFields"][] = "Sleeve_Length";
$tdataawazu[".listFields"][] = "length";
$tdataawazu[".listFields"][] = "ichiba_title";
$tdataawazu[".listFields"][] = "gold_property";
$tdataawazu[".listFields"][] = "Gram";
$tdataawazu[".listFields"][] = "price_per_gram";
$tdataawazu[".listFields"][] = "Parent_stone";
$tdataawazu[".listFields"][] = "price_per_parent_stone";
$tdataawazu[".listFields"][] = "Aside_stone";
$tdataawazu[".listFields"][] = "price_per_aside_stone";
$tdataawazu[".listFields"][] = "Appraiser";
$tdataawazu[".listFields"][] = "Ring_size";
$tdataawazu[".listFields"][] = "Remarks";
$tdataawazu[".listFields"][] = "title";
$tdataawazu[".listFields"][] = "yahoo_color";
$tdataawazu[".listFields"][] = "yahoo_color_id";
$tdataawazu[".listFields"][] = "yahoo_kataban";
$tdataawazu[".listFields"][] = "handle";
$tdataawazu[".listFields"][] = "serial_number";
$tdataawazu[".listFields"][] = "stamp";
$tdataawazu[".listFields"][] = "price";
$tdataawazu[".listFields"][] = "comment";
$tdataawazu[".listFields"][] = "sales_price";
$tdataawazu[".listFields"][] = "yahoo_sankou_uwadai";
$tdataawazu[".listFields"][] = "description";
$tdataawazu[".listFields"][] = "Destination_selling";
$tdataawazu[".listFields"][] = "Finish";
$tdataawazu[".listFields"][] = "Discrimination";
$tdataawazu[".listFields"][] = "accessories";
$tdataawazu[".listFields"][] = "priority";
$tdataawazu[".listFields"][] = "A_storage";
$tdataawazu[".listFields"][] = "satei_by";
$tdataawazu[".listFields"][] = "satei_hi";
$tdataawazu[".listFields"][] = "AWAZU_NIN";
$tdataawazu[".listFields"][] = "AWAZU_DATE";
$tdataawazu[".listFields"][] = "updated_by";
$tdataawazu[".listFields"][] = "updated_at";
$tdataawazu[".listFields"][] = "price_secret";
$tdataawazu[".listFields"][] = "sales_price_secret";

$tdataawazu[".hideMobileList"] = array();


$tdataawazu[".viewFields"] = array();
$tdataawazu[".viewFields"][] = "ecc_seq";
$tdataawazu[".viewFields"][] = "updated_at";
$tdataawazu[".viewFields"][] = "status";
$tdataawazu[".viewFields"][] = "satei_by";
$tdataawazu[".viewFields"][] = "category_id";
$tdataawazu[".viewFields"][] = "title";
$tdataawazu[".viewFields"][] = "sub_category_id1";
$tdataawazu[".viewFields"][] = "product_id";
$tdataawazu[".viewFields"][] = "yahoo_sinaban";
$tdataawazu[".viewFields"][] = "price";
$tdataawazu[".viewFields"][] = "sales_price";
$tdataawazu[".viewFields"][] = "yahoo_sex";
$tdataawazu[".viewFields"][] = "product_num";
$tdataawazu[".viewFields"][] = "description";
$tdataawazu[".viewFields"][] = "raku_hyoujisaki_category";
$tdataawazu[".viewFields"][] = "raku_hyoujisaki_category2";
$tdataawazu[".viewFields"][] = "raku_hyoujisaki_category3";
$tdataawazu[".viewFields"][] = "raku_hyoujisaki_category4";
$tdataawazu[".viewFields"][] = "raku_hyoujisaki_category5";
$tdataawazu[".viewFields"][] = "yahoo_kataban";
$tdataawazu[".viewFields"][] = "yahoo_sozai";
$tdataawazu[".viewFields"][] = "yahoo_color";
$tdataawazu[".viewFields"][] = "yahoo_size";
$tdataawazu[".viewFields"][] = "yahoo_condition1";
$tdataawazu[".viewFields"][] = "yahoo_condition2";
$tdataawazu[".viewFields"][] = "remark";
$tdataawazu[".viewFields"][] = "yahoo_fuzokuhin";
$tdataawazu[".viewFields"][] = "yahoo_sankou_uwadai";
$tdataawazu[".viewFields"][] = "season";
$tdataawazu[".viewFields"][] = "yahoo_title";
$tdataawazu[".viewFields"][] = "goods_title";
$tdataawazu[".viewFields"][] = "updated_by";
$tdataawazu[".viewFields"][] = "raku_title";
$tdataawazu[".viewFields"][] = "raku_tag_result";
$tdataawazu[".viewFields"][] = "search_keyword";
$tdataawazu[".viewFields"][] = "stamp";
$tdataawazu[".viewFields"][] = "processing";
$tdataawazu[".viewFields"][] = "Sleeve_Length";
$tdataawazu[".viewFields"][] = "length";
$tdataawazu[".viewFields"][] = "label_output_flag";
$tdataawazu[".viewFields"][] = "Ring_size";
$tdataawazu[".viewFields"][] = "comment";
$tdataawazu[".viewFields"][] = "satei_hi";
$tdataawazu[".viewFields"][] = "AWAZU_DATE";
$tdataawazu[".viewFields"][] = "AWAZU_NIN";
$tdataawazu[".viewFields"][] = "gold_property";
$tdataawazu[".viewFields"][] = "ichiba_title";
$tdataawazu[".viewFields"][] = "Gram";
$tdataawazu[".viewFields"][] = "Parent_stone";
$tdataawazu[".viewFields"][] = "Aside_stone";
$tdataawazu[".viewFields"][] = "Appraiser";
$tdataawazu[".viewFields"][] = "Remarks";
$tdataawazu[".viewFields"][] = "Destination_selling";
$tdataawazu[".viewFields"][] = "Finish";
$tdataawazu[".viewFields"][] = "Discrimination";
$tdataawazu[".viewFields"][] = "accessories";
$tdataawazu[".viewFields"][] = "priority";
$tdataawazu[".viewFields"][] = "A_storage";
$tdataawazu[".viewFields"][] = "price_per_gram";
$tdataawazu[".viewFields"][] = "price_per_parent_stone";
$tdataawazu[".viewFields"][] = "price_per_aside_stone";
$tdataawazu[".viewFields"][] = "price_secret";
$tdataawazu[".viewFields"][] = "sales_price_secret";
$tdataawazu[".viewFields"][] = "line";
$tdataawazu[".viewFields"][] = "item_name";
$tdataawazu[".viewFields"][] = "handle";
$tdataawazu[".viewFields"][] = "yahoo_color_id";
$tdataawazu[".viewFields"][] = "serial_number";
$tdataawazu[".viewFields"][] = "motif";
$tdataawazu[".viewFields"][] = "Setting";

$tdataawazu[".addFields"] = array();
$tdataawazu[".addFields"][] = "updated_at";
$tdataawazu[".addFields"][] = "status";
$tdataawazu[".addFields"][] = "satei_by";
$tdataawazu[".addFields"][] = "category_id";
$tdataawazu[".addFields"][] = "title";
$tdataawazu[".addFields"][] = "sub_category_id1";
$tdataawazu[".addFields"][] = "yahoo_sinaban";
$tdataawazu[".addFields"][] = "price";
$tdataawazu[".addFields"][] = "sales_price";
$tdataawazu[".addFields"][] = "yahoo_sex";
$tdataawazu[".addFields"][] = "product_num";
$tdataawazu[".addFields"][] = "description";
$tdataawazu[".addFields"][] = "raku_hyoujisaki_category";
$tdataawazu[".addFields"][] = "raku_hyoujisaki_category2";
$tdataawazu[".addFields"][] = "raku_hyoujisaki_category3";
$tdataawazu[".addFields"][] = "raku_hyoujisaki_category4";
$tdataawazu[".addFields"][] = "raku_hyoujisaki_category5";
$tdataawazu[".addFields"][] = "yahoo_kataban";
$tdataawazu[".addFields"][] = "yahoo_sozai";
$tdataawazu[".addFields"][] = "yahoo_color";
$tdataawazu[".addFields"][] = "yahoo_size";
$tdataawazu[".addFields"][] = "yahoo_condition1";
$tdataawazu[".addFields"][] = "yahoo_condition2";
$tdataawazu[".addFields"][] = "remark";
$tdataawazu[".addFields"][] = "yahoo_fuzokuhin";
$tdataawazu[".addFields"][] = "yahoo_sankou_uwadai";
$tdataawazu[".addFields"][] = "season";
$tdataawazu[".addFields"][] = "yahoo_title";
$tdataawazu[".addFields"][] = "goods_title";
$tdataawazu[".addFields"][] = "updated_by";
$tdataawazu[".addFields"][] = "raku_title";
$tdataawazu[".addFields"][] = "raku_tag_result";
$tdataawazu[".addFields"][] = "search_keyword";
$tdataawazu[".addFields"][] = "stamp";
$tdataawazu[".addFields"][] = "processing";
$tdataawazu[".addFields"][] = "Sleeve_Length";
$tdataawazu[".addFields"][] = "length";
$tdataawazu[".addFields"][] = "label_output_flag";
$tdataawazu[".addFields"][] = "Ring_size";
$tdataawazu[".addFields"][] = "comment";
$tdataawazu[".addFields"][] = "satei_hi";
$tdataawazu[".addFields"][] = "AWAZU_DATE";
$tdataawazu[".addFields"][] = "AWAZU_NIN";
$tdataawazu[".addFields"][] = "gold_property";
$tdataawazu[".addFields"][] = "ichiba_title";
$tdataawazu[".addFields"][] = "Gram";
$tdataawazu[".addFields"][] = "Parent_stone";
$tdataawazu[".addFields"][] = "Aside_stone";
$tdataawazu[".addFields"][] = "Appraiser";
$tdataawazu[".addFields"][] = "Remarks";
$tdataawazu[".addFields"][] = "Destination_selling";
$tdataawazu[".addFields"][] = "Finish";
$tdataawazu[".addFields"][] = "Discrimination";
$tdataawazu[".addFields"][] = "accessories";
$tdataawazu[".addFields"][] = "priority";
$tdataawazu[".addFields"][] = "A_storage";
$tdataawazu[".addFields"][] = "price_per_gram";
$tdataawazu[".addFields"][] = "price_per_parent_stone";
$tdataawazu[".addFields"][] = "price_per_aside_stone";
$tdataawazu[".addFields"][] = "price_secret";
$tdataawazu[".addFields"][] = "sales_price_secret";
$tdataawazu[".addFields"][] = "line";
$tdataawazu[".addFields"][] = "item_name";
$tdataawazu[".addFields"][] = "handle";
$tdataawazu[".addFields"][] = "yahoo_color_id";
$tdataawazu[".addFields"][] = "serial_number";
$tdataawazu[".addFields"][] = "motif";
$tdataawazu[".addFields"][] = "Setting";

$tdataawazu[".masterListFields"] = array();
$tdataawazu[".masterListFields"][] = "ecc_seq";
$tdataawazu[".masterListFields"][] = "yahoo_junle";
$tdataawazu[".masterListFields"][] = "updated_at";
$tdataawazu[".masterListFields"][] = "status";
$tdataawazu[".masterListFields"][] = "satei_by";
$tdataawazu[".masterListFields"][] = "category_id";
$tdataawazu[".masterListFields"][] = "title";
$tdataawazu[".masterListFields"][] = "sub_category_id1";
$tdataawazu[".masterListFields"][] = "product_id";
$tdataawazu[".masterListFields"][] = "ecc_id";
$tdataawazu[".masterListFields"][] = "yahoo";
$tdataawazu[".masterListFields"][] = "yahoo_sinaban";
$tdataawazu[".masterListFields"][] = "price";
$tdataawazu[".masterListFields"][] = "sales_price";
$tdataawazu[".masterListFields"][] = "yahoo_sex";
$tdataawazu[".masterListFields"][] = "product_num";
$tdataawazu[".masterListFields"][] = "description";
$tdataawazu[".masterListFields"][] = "raku_hyoujisaki_category";
$tdataawazu[".masterListFields"][] = "raku_hyoujisaki_category2";
$tdataawazu[".masterListFields"][] = "raku_hyoujisaki_category3";
$tdataawazu[".masterListFields"][] = "raku_hyoujisaki_category4";
$tdataawazu[".masterListFields"][] = "raku_hyoujisaki_category5";
$tdataawazu[".masterListFields"][] = "yahoo_kataban";
$tdataawazu[".masterListFields"][] = "yahoo_sozai";
$tdataawazu[".masterListFields"][] = "yahoo_color";
$tdataawazu[".masterListFields"][] = "yahoo_size";
$tdataawazu[".masterListFields"][] = "yahoo_condition1";
$tdataawazu[".masterListFields"][] = "yahoo_condition2";
$tdataawazu[".masterListFields"][] = "remark";
$tdataawazu[".masterListFields"][] = "yahoo_fuzokuhin";
$tdataawazu[".masterListFields"][] = "yahoo_sankou_uwadai";
$tdataawazu[".masterListFields"][] = "yahoo_saisun_sha";
$tdataawazu[".masterListFields"][] = "season";
$tdataawazu[".masterListFields"][] = "yahoo_title";
$tdataawazu[".masterListFields"][] = "box_id";
$tdataawazu[".masterListFields"][] = "goods_title";
$tdataawazu[".masterListFields"][] = "nyuukin_price";
$tdataawazu[".masterListFields"][] = "updated_by";
$tdataawazu[".masterListFields"][] = "raku_title";
$tdataawazu[".masterListFields"][] = "raku_tag_result";
$tdataawazu[".masterListFields"][] = "search_keyword";
$tdataawazu[".masterListFields"][] = "stamp";
$tdataawazu[".masterListFields"][] = "timesta";
$tdataawazu[".masterListFields"][] = "processing";
$tdataawazu[".masterListFields"][] = "saisun_start";
$tdataawazu[".masterListFields"][] = "Sleeve_Length";
$tdataawazu[".masterListFields"][] = "saisun_end";
$tdataawazu[".masterListFields"][] = "length";
$tdataawazu[".masterListFields"][] = "label_output_flag";
$tdataawazu[".masterListFields"][] = "Ring_size";
$tdataawazu[".masterListFields"][] = "price_for_site";
$tdataawazu[".masterListFields"][] = "kanryou_henbi";
$tdataawazu[".masterListFields"][] = "yahoo_category_id";
$tdataawazu[".masterListFields"][] = "box_sort";
$tdataawazu[".masterListFields"][] = "Qty";
$tdataawazu[".masterListFields"][] = "sales_period";
$tdataawazu[".masterListFields"][] = "kaitori_by";
$tdataawazu[".masterListFields"][] = "starting_price";
$tdataawazu[".masterListFields"][] = "comment";
$tdataawazu[".masterListFields"][] = "satei_hi";
$tdataawazu[".masterListFields"][] = "kaitory_hi";
$tdataawazu[".masterListFields"][] = "REG_PHOTOGRAPHER";
$tdataawazu[".masterListFields"][] = "REG_PACKINGS";
$tdataawazu[".masterListFields"][] = "REG_KAKOU_DATE";
$tdataawazu[".masterListFields"][] = "REG_KAKOU";
$tdataawazu[".masterListFields"][] = "REG_EXHIBITOR";
$tdataawazu[".masterListFields"][] = "REG_PHOTOGRAPHER_DATE";
$tdataawazu[".masterListFields"][] = "DT_PACKING_DATE";
$tdataawazu[".masterListFields"][] = "DT_UP_DATE";
$tdataawazu[".masterListFields"][] = "AWAZU_DATE";
$tdataawazu[".masterListFields"][] = "AWAZU_NIN";
$tdataawazu[".masterListFields"][] = "sabun_date";
$tdataawazu[".masterListFields"][] = "browseid";
$tdataawazu[".masterListFields"][] = "browsenode";
$tdataawazu[".masterListFields"][] = "gold_property";
$tdataawazu[".masterListFields"][] = "ichiba_title";
$tdataawazu[".masterListFields"][] = "Gram";
$tdataawazu[".masterListFields"][] = "Parent_stone";
$tdataawazu[".masterListFields"][] = "Aside_stone";
$tdataawazu[".masterListFields"][] = "Appraiser";
$tdataawazu[".masterListFields"][] = "Remarks";
$tdataawazu[".masterListFields"][] = "Destination_selling";
$tdataawazu[".masterListFields"][] = "Finish";
$tdataawazu[".masterListFields"][] = "Discrimination";
$tdataawazu[".masterListFields"][] = "accessories";
$tdataawazu[".masterListFields"][] = "priority";
$tdataawazu[".masterListFields"][] = "A_storage";
$tdataawazu[".masterListFields"][] = "price_per_gram";
$tdataawazu[".masterListFields"][] = "price_per_parent_stone";
$tdataawazu[".masterListFields"][] = "price_per_aside_stone";
$tdataawazu[".masterListFields"][] = "price_secret";
$tdataawazu[".masterListFields"][] = "sales_price_secret";
$tdataawazu[".masterListFields"][] = "eq";
$tdataawazu[".masterListFields"][] = "en";
$tdataawazu[".masterListFields"][] = "line";
$tdataawazu[".masterListFields"][] = "item_name";
$tdataawazu[".masterListFields"][] = "handle";
$tdataawazu[".masterListFields"][] = "yahoo_color_id";
$tdataawazu[".masterListFields"][] = "raku_dir_1";
$tdataawazu[".masterListFields"][] = "raku_dir_2";
$tdataawazu[".masterListFields"][] = "raku_dir_3";
$tdataawazu[".masterListFields"][] = "raku_dir_4";
$tdataawazu[".masterListFields"][] = "raku_dir_5";
$tdataawazu[".masterListFields"][] = "raku_dir_result";
$tdataawazu[".masterListFields"][] = "serial_number";
$tdataawazu[".masterListFields"][] = "Exhibition_Date";
$tdataawazu[".masterListFields"][] = "motif";
$tdataawazu[".masterListFields"][] = "Setting";

$tdataawazu[".inlineAddFields"] = array();
$tdataawazu[".inlineAddFields"][] = "label_output_flag";
$tdataawazu[".inlineAddFields"][] = "status";
$tdataawazu[".inlineAddFields"][] = "product_num";
$tdataawazu[".inlineAddFields"][] = "category_id";
$tdataawazu[".inlineAddFields"][] = "sub_category_id1";
$tdataawazu[".inlineAddFields"][] = "yahoo_sex";
$tdataawazu[".inlineAddFields"][] = "yahoo_condition2";
$tdataawazu[".inlineAddFields"][] = "line";
$tdataawazu[".inlineAddFields"][] = "item_name";
$tdataawazu[".inlineAddFields"][] = "yahoo_sozai";
$tdataawazu[".inlineAddFields"][] = "motif";
$tdataawazu[".inlineAddFields"][] = "Setting";
$tdataawazu[".inlineAddFields"][] = "processing";
$tdataawazu[".inlineAddFields"][] = "Sleeve_Length";
$tdataawazu[".inlineAddFields"][] = "length";
$tdataawazu[".inlineAddFields"][] = "ichiba_title";
$tdataawazu[".inlineAddFields"][] = "gold_property";
$tdataawazu[".inlineAddFields"][] = "Gram";
$tdataawazu[".inlineAddFields"][] = "price_per_gram";
$tdataawazu[".inlineAddFields"][] = "Parent_stone";
$tdataawazu[".inlineAddFields"][] = "price_per_parent_stone";
$tdataawazu[".inlineAddFields"][] = "Aside_stone";
$tdataawazu[".inlineAddFields"][] = "price_per_aside_stone";
$tdataawazu[".inlineAddFields"][] = "Appraiser";
$tdataawazu[".inlineAddFields"][] = "Ring_size";
$tdataawazu[".inlineAddFields"][] = "Remarks";
$tdataawazu[".inlineAddFields"][] = "title";
$tdataawazu[".inlineAddFields"][] = "yahoo_color";
$tdataawazu[".inlineAddFields"][] = "yahoo_color_id";
$tdataawazu[".inlineAddFields"][] = "yahoo_kataban";
$tdataawazu[".inlineAddFields"][] = "handle";
$tdataawazu[".inlineAddFields"][] = "serial_number";
$tdataawazu[".inlineAddFields"][] = "stamp";
$tdataawazu[".inlineAddFields"][] = "price";
$tdataawazu[".inlineAddFields"][] = "comment";
$tdataawazu[".inlineAddFields"][] = "sales_price";
$tdataawazu[".inlineAddFields"][] = "yahoo_sankou_uwadai";
$tdataawazu[".inlineAddFields"][] = "description";
$tdataawazu[".inlineAddFields"][] = "Destination_selling";
$tdataawazu[".inlineAddFields"][] = "Finish";
$tdataawazu[".inlineAddFields"][] = "Discrimination";
$tdataawazu[".inlineAddFields"][] = "accessories";
$tdataawazu[".inlineAddFields"][] = "priority";
$tdataawazu[".inlineAddFields"][] = "A_storage";
$tdataawazu[".inlineAddFields"][] = "satei_by";
$tdataawazu[".inlineAddFields"][] = "satei_hi";
$tdataawazu[".inlineAddFields"][] = "AWAZU_NIN";
$tdataawazu[".inlineAddFields"][] = "AWAZU_DATE";
$tdataawazu[".inlineAddFields"][] = "updated_by";
$tdataawazu[".inlineAddFields"][] = "updated_at";
$tdataawazu[".inlineAddFields"][] = "price_secret";
$tdataawazu[".inlineAddFields"][] = "sales_price_secret";

$tdataawazu[".editFields"] = array();
$tdataawazu[".editFields"][] = "updated_at";
$tdataawazu[".editFields"][] = "status";
$tdataawazu[".editFields"][] = "satei_by";
$tdataawazu[".editFields"][] = "category_id";
$tdataawazu[".editFields"][] = "title";
$tdataawazu[".editFields"][] = "sub_category_id1";
$tdataawazu[".editFields"][] = "yahoo_sinaban";
$tdataawazu[".editFields"][] = "price";
$tdataawazu[".editFields"][] = "sales_price";
$tdataawazu[".editFields"][] = "yahoo_sex";
$tdataawazu[".editFields"][] = "product_num";
$tdataawazu[".editFields"][] = "description";
$tdataawazu[".editFields"][] = "raku_hyoujisaki_category";
$tdataawazu[".editFields"][] = "raku_hyoujisaki_category2";
$tdataawazu[".editFields"][] = "raku_hyoujisaki_category3";
$tdataawazu[".editFields"][] = "raku_hyoujisaki_category4";
$tdataawazu[".editFields"][] = "raku_hyoujisaki_category5";
$tdataawazu[".editFields"][] = "yahoo_kataban";
$tdataawazu[".editFields"][] = "yahoo_sozai";
$tdataawazu[".editFields"][] = "yahoo_color";
$tdataawazu[".editFields"][] = "yahoo_size";
$tdataawazu[".editFields"][] = "yahoo_condition1";
$tdataawazu[".editFields"][] = "yahoo_condition2";
$tdataawazu[".editFields"][] = "remark";
$tdataawazu[".editFields"][] = "yahoo_fuzokuhin";
$tdataawazu[".editFields"][] = "yahoo_sankou_uwadai";
$tdataawazu[".editFields"][] = "season";
$tdataawazu[".editFields"][] = "yahoo_title";
$tdataawazu[".editFields"][] = "goods_title";
$tdataawazu[".editFields"][] = "raku_title";
$tdataawazu[".editFields"][] = "updated_by";
$tdataawazu[".editFields"][] = "raku_tag_result";
$tdataawazu[".editFields"][] = "search_keyword";
$tdataawazu[".editFields"][] = "stamp";
$tdataawazu[".editFields"][] = "processing";
$tdataawazu[".editFields"][] = "Sleeve_Length";
$tdataawazu[".editFields"][] = "length";
$tdataawazu[".editFields"][] = "comment";
$tdataawazu[".editFields"][] = "Ring_size";
$tdataawazu[".editFields"][] = "label_output_flag";
$tdataawazu[".editFields"][] = "satei_hi";
$tdataawazu[".editFields"][] = "gold_property";
$tdataawazu[".editFields"][] = "ichiba_title";
$tdataawazu[".editFields"][] = "Gram";
$tdataawazu[".editFields"][] = "Parent_stone";
$tdataawazu[".editFields"][] = "Aside_stone";
$tdataawazu[".editFields"][] = "Appraiser";
$tdataawazu[".editFields"][] = "accessories";
$tdataawazu[".editFields"][] = "priority";
$tdataawazu[".editFields"][] = "A_storage";
$tdataawazu[".editFields"][] = "price_per_gram";
$tdataawazu[".editFields"][] = "price_per_parent_stone";
$tdataawazu[".editFields"][] = "price_per_aside_stone";
$tdataawazu[".editFields"][] = "price_secret";
$tdataawazu[".editFields"][] = "line";
$tdataawazu[".editFields"][] = "item_name";
$tdataawazu[".editFields"][] = "serial_number";
$tdataawazu[".editFields"][] = "AWAZU_DATE";
$tdataawazu[".editFields"][] = "motif";
$tdataawazu[".editFields"][] = "AWAZU_NIN";
$tdataawazu[".editFields"][] = "Setting";
$tdataawazu[".editFields"][] = "Remarks";
$tdataawazu[".editFields"][] = "Destination_selling";
$tdataawazu[".editFields"][] = "Finish";
$tdataawazu[".editFields"][] = "Discrimination";
$tdataawazu[".editFields"][] = "sales_price_secret";
$tdataawazu[".editFields"][] = "handle";
$tdataawazu[".editFields"][] = "yahoo_color_id";

$tdataawazu[".inlineEditFields"] = array();
$tdataawazu[".inlineEditFields"][] = "status";
$tdataawazu[".inlineEditFields"][] = "product_num";
$tdataawazu[".inlineEditFields"][] = "category_id";
$tdataawazu[".inlineEditFields"][] = "sub_category_id1";
$tdataawazu[".inlineEditFields"][] = "yahoo_sex";
$tdataawazu[".inlineEditFields"][] = "yahoo_condition2";
$tdataawazu[".inlineEditFields"][] = "line";
$tdataawazu[".inlineEditFields"][] = "item_name";
$tdataawazu[".inlineEditFields"][] = "yahoo_sozai";
$tdataawazu[".inlineEditFields"][] = "motif";
$tdataawazu[".inlineEditFields"][] = "Setting";
$tdataawazu[".inlineEditFields"][] = "processing";
$tdataawazu[".inlineEditFields"][] = "Sleeve_Length";
$tdataawazu[".inlineEditFields"][] = "length";
$tdataawazu[".inlineEditFields"][] = "ichiba_title";
$tdataawazu[".inlineEditFields"][] = "gold_property";
$tdataawazu[".inlineEditFields"][] = "Gram";
$tdataawazu[".inlineEditFields"][] = "price_per_gram";
$tdataawazu[".inlineEditFields"][] = "Parent_stone";
$tdataawazu[".inlineEditFields"][] = "price_per_parent_stone";
$tdataawazu[".inlineEditFields"][] = "Aside_stone";
$tdataawazu[".inlineEditFields"][] = "price_per_aside_stone";
$tdataawazu[".inlineEditFields"][] = "Appraiser";
$tdataawazu[".inlineEditFields"][] = "Ring_size";
$tdataawazu[".inlineEditFields"][] = "Remarks";
$tdataawazu[".inlineEditFields"][] = "title";
$tdataawazu[".inlineEditFields"][] = "yahoo_color";
$tdataawazu[".inlineEditFields"][] = "yahoo_color_id";
$tdataawazu[".inlineEditFields"][] = "yahoo_kataban";
$tdataawazu[".inlineEditFields"][] = "handle";
$tdataawazu[".inlineEditFields"][] = "serial_number";
$tdataawazu[".inlineEditFields"][] = "stamp";
$tdataawazu[".inlineEditFields"][] = "price";
$tdataawazu[".inlineEditFields"][] = "comment";
$tdataawazu[".inlineEditFields"][] = "sales_price";
$tdataawazu[".inlineEditFields"][] = "yahoo_sankou_uwadai";
$tdataawazu[".inlineEditFields"][] = "description";
$tdataawazu[".inlineEditFields"][] = "Destination_selling";
$tdataawazu[".inlineEditFields"][] = "Finish";
$tdataawazu[".inlineEditFields"][] = "Discrimination";
$tdataawazu[".inlineEditFields"][] = "accessories";
$tdataawazu[".inlineEditFields"][] = "priority";
$tdataawazu[".inlineEditFields"][] = "A_storage";
$tdataawazu[".inlineEditFields"][] = "satei_by";
$tdataawazu[".inlineEditFields"][] = "satei_hi";
$tdataawazu[".inlineEditFields"][] = "AWAZU_NIN";
$tdataawazu[".inlineEditFields"][] = "AWAZU_DATE";
$tdataawazu[".inlineEditFields"][] = "updated_by";
$tdataawazu[".inlineEditFields"][] = "updated_at";
$tdataawazu[".inlineEditFields"][] = "price_secret";
$tdataawazu[".inlineEditFields"][] = "sales_price_secret";

$tdataawazu[".updateSelectedFields"] = array();
$tdataawazu[".updateSelectedFields"][] = "updated_at";
$tdataawazu[".updateSelectedFields"][] = "status";
$tdataawazu[".updateSelectedFields"][] = "satei_by";
$tdataawazu[".updateSelectedFields"][] = "category_id";
$tdataawazu[".updateSelectedFields"][] = "title";
$tdataawazu[".updateSelectedFields"][] = "sub_category_id1";
$tdataawazu[".updateSelectedFields"][] = "yahoo_sinaban";
$tdataawazu[".updateSelectedFields"][] = "price";
$tdataawazu[".updateSelectedFields"][] = "sales_price";
$tdataawazu[".updateSelectedFields"][] = "yahoo_sex";
$tdataawazu[".updateSelectedFields"][] = "product_num";
$tdataawazu[".updateSelectedFields"][] = "description";
$tdataawazu[".updateSelectedFields"][] = "raku_hyoujisaki_category";
$tdataawazu[".updateSelectedFields"][] = "raku_hyoujisaki_category2";
$tdataawazu[".updateSelectedFields"][] = "raku_hyoujisaki_category3";
$tdataawazu[".updateSelectedFields"][] = "raku_hyoujisaki_category4";
$tdataawazu[".updateSelectedFields"][] = "raku_hyoujisaki_category5";
$tdataawazu[".updateSelectedFields"][] = "yahoo_kataban";
$tdataawazu[".updateSelectedFields"][] = "yahoo_sozai";
$tdataawazu[".updateSelectedFields"][] = "yahoo_color";
$tdataawazu[".updateSelectedFields"][] = "yahoo_size";
$tdataawazu[".updateSelectedFields"][] = "yahoo_condition1";
$tdataawazu[".updateSelectedFields"][] = "yahoo_condition2";
$tdataawazu[".updateSelectedFields"][] = "remark";
$tdataawazu[".updateSelectedFields"][] = "yahoo_fuzokuhin";
$tdataawazu[".updateSelectedFields"][] = "yahoo_sankou_uwadai";
$tdataawazu[".updateSelectedFields"][] = "season";
$tdataawazu[".updateSelectedFields"][] = "yahoo_title";
$tdataawazu[".updateSelectedFields"][] = "goods_title";
$tdataawazu[".updateSelectedFields"][] = "raku_title";
$tdataawazu[".updateSelectedFields"][] = "updated_by";
$tdataawazu[".updateSelectedFields"][] = "raku_tag_result";
$tdataawazu[".updateSelectedFields"][] = "search_keyword";
$tdataawazu[".updateSelectedFields"][] = "stamp";
$tdataawazu[".updateSelectedFields"][] = "processing";
$tdataawazu[".updateSelectedFields"][] = "Sleeve_Length";
$tdataawazu[".updateSelectedFields"][] = "length";
$tdataawazu[".updateSelectedFields"][] = "comment";
$tdataawazu[".updateSelectedFields"][] = "Ring_size";
$tdataawazu[".updateSelectedFields"][] = "label_output_flag";
$tdataawazu[".updateSelectedFields"][] = "satei_hi";
$tdataawazu[".updateSelectedFields"][] = "gold_property";
$tdataawazu[".updateSelectedFields"][] = "ichiba_title";
$tdataawazu[".updateSelectedFields"][] = "Gram";
$tdataawazu[".updateSelectedFields"][] = "Parent_stone";
$tdataawazu[".updateSelectedFields"][] = "Aside_stone";
$tdataawazu[".updateSelectedFields"][] = "Appraiser";
$tdataawazu[".updateSelectedFields"][] = "accessories";
$tdataawazu[".updateSelectedFields"][] = "priority";
$tdataawazu[".updateSelectedFields"][] = "A_storage";
$tdataawazu[".updateSelectedFields"][] = "price_per_parent_stone";
$tdataawazu[".updateSelectedFields"][] = "price_per_aside_stone";
$tdataawazu[".updateSelectedFields"][] = "price_secret";
$tdataawazu[".updateSelectedFields"][] = "line";
$tdataawazu[".updateSelectedFields"][] = "item_name";
$tdataawazu[".updateSelectedFields"][] = "serial_number";
$tdataawazu[".updateSelectedFields"][] = "AWAZU_DATE";
$tdataawazu[".updateSelectedFields"][] = "motif";
$tdataawazu[".updateSelectedFields"][] = "AWAZU_NIN";
$tdataawazu[".updateSelectedFields"][] = "Setting";
$tdataawazu[".updateSelectedFields"][] = "Remarks";
$tdataawazu[".updateSelectedFields"][] = "Destination_selling";
$tdataawazu[".updateSelectedFields"][] = "Finish";
$tdataawazu[".updateSelectedFields"][] = "Discrimination";
$tdataawazu[".updateSelectedFields"][] = "sales_price_secret";
$tdataawazu[".updateSelectedFields"][] = "handle";
$tdataawazu[".updateSelectedFields"][] = "yahoo_color_id";


$tdataawazu[".exportFields"] = array();
$tdataawazu[".exportFields"][] = "updated_at";
$tdataawazu[".exportFields"][] = "label_output_flag";
$tdataawazu[".exportFields"][] = "status";
$tdataawazu[".exportFields"][] = "product_id";
$tdataawazu[".exportFields"][] = "yahoo_junle";
$tdataawazu[".exportFields"][] = "category_id";
$tdataawazu[".exportFields"][] = "sub_category_id1";
$tdataawazu[".exportFields"][] = "yahoo_sex";
$tdataawazu[".exportFields"][] = "yahoo_condition2";
$tdataawazu[".exportFields"][] = "line";
$tdataawazu[".exportFields"][] = "item_name";
$tdataawazu[".exportFields"][] = "yahoo_sozai";
$tdataawazu[".exportFields"][] = "motif";
$tdataawazu[".exportFields"][] = "Setting";
$tdataawazu[".exportFields"][] = "processing";
$tdataawazu[".exportFields"][] = "Sleeve_Length";
$tdataawazu[".exportFields"][] = "length";
$tdataawazu[".exportFields"][] = "ichiba_title";
$tdataawazu[".exportFields"][] = "gold_property";
$tdataawazu[".exportFields"][] = "Gram";
$tdataawazu[".exportFields"][] = "price_per_gram";
$tdataawazu[".exportFields"][] = "Parent_stone";
$tdataawazu[".exportFields"][] = "price_per_parent_stone";
$tdataawazu[".exportFields"][] = "Aside_stone";
$tdataawazu[".exportFields"][] = "price_per_aside_stone";
$tdataawazu[".exportFields"][] = "Appraiser";
$tdataawazu[".exportFields"][] = "Ring_size";
$tdataawazu[".exportFields"][] = "Remarks";
$tdataawazu[".exportFields"][] = "title";
$tdataawazu[".exportFields"][] = "yahoo_color";
$tdataawazu[".exportFields"][] = "updated_by";
$tdataawazu[".exportFields"][] = "yahoo_color_id";
$tdataawazu[".exportFields"][] = "handle";
$tdataawazu[".exportFields"][] = "yahoo_kataban";
$tdataawazu[".exportFields"][] = "serial_number";
$tdataawazu[".exportFields"][] = "stamp";
$tdataawazu[".exportFields"][] = "eq";
$tdataawazu[".exportFields"][] = "price";
$tdataawazu[".exportFields"][] = "en";
$tdataawazu[".exportFields"][] = "comment";
$tdataawazu[".exportFields"][] = "sales_price";
$tdataawazu[".exportFields"][] = "yahoo_sankou_uwadai";
$tdataawazu[".exportFields"][] = "description";
$tdataawazu[".exportFields"][] = "Destination_selling";
$tdataawazu[".exportFields"][] = "Finish";
$tdataawazu[".exportFields"][] = "Discrimination";
$tdataawazu[".exportFields"][] = "accessories";
$tdataawazu[".exportFields"][] = "priority";
$tdataawazu[".exportFields"][] = "A_storage";
$tdataawazu[".exportFields"][] = "satei_by";
$tdataawazu[".exportFields"][] = "satei_hi";
$tdataawazu[".exportFields"][] = "price_secret";
$tdataawazu[".exportFields"][] = "sales_price_secret";
$tdataawazu[".exportFields"][] = "product_num";
$tdataawazu[".exportFields"][] = "AWAZU_DATE";
$tdataawazu[".exportFields"][] = "AWAZU_NIN";

$tdataawazu[".importFields"] = array();
$tdataawazu[".importFields"][] = "product_id";
$tdataawazu[".importFields"][] = "category_id";
$tdataawazu[".importFields"][] = "title";
$tdataawazu[".importFields"][] = "sub_category_id1";
$tdataawazu[".importFields"][] = "price";
$tdataawazu[".importFields"][] = "sales_price";
$tdataawazu[".importFields"][] = "description";
$tdataawazu[".importFields"][] = "status";
$tdataawazu[".importFields"][] = "product_num";
$tdataawazu[".importFields"][] = "yahoo_sankou_uwadai";
$tdataawazu[".importFields"][] = "yahoo_sozai";
$tdataawazu[".importFields"][] = "yahoo_color";
$tdataawazu[".importFields"][] = "yahoo_kataban";
$tdataawazu[".importFields"][] = "yahoo_condition2";
$tdataawazu[".importFields"][] = "yahoo_sex";
$tdataawazu[".importFields"][] = "updated_by";
$tdataawazu[".importFields"][] = "label_output_flag";
$tdataawazu[".importFields"][] = "satei_by";
$tdataawazu[".importFields"][] = "comment";
$tdataawazu[".importFields"][] = "satei_hi";
$tdataawazu[".importFields"][] = "AWAZU_DATE";
$tdataawazu[".importFields"][] = "AWAZU_NIN";
$tdataawazu[".importFields"][] = "gold_property";
$tdataawazu[".importFields"][] = "ichiba_title";
$tdataawazu[".importFields"][] = "Gram";
$tdataawazu[".importFields"][] = "Parent_stone";
$tdataawazu[".importFields"][] = "Aside_stone";
$tdataawazu[".importFields"][] = "Appraiser";
$tdataawazu[".importFields"][] = "Remarks";
$tdataawazu[".importFields"][] = "Destination_selling";
$tdataawazu[".importFields"][] = "Finish";
$tdataawazu[".importFields"][] = "Discrimination";
$tdataawazu[".importFields"][] = "accessories";
$tdataawazu[".importFields"][] = "priority";
$tdataawazu[".importFields"][] = "A_storage";
$tdataawazu[".importFields"][] = "price_per_gram";
$tdataawazu[".importFields"][] = "price_per_parent_stone";
$tdataawazu[".importFields"][] = "price_per_aside_stone";
$tdataawazu[".importFields"][] = "price_secret";
$tdataawazu[".importFields"][] = "sales_price_secret";
$tdataawazu[".importFields"][] = "line";
$tdataawazu[".importFields"][] = "item_name";
$tdataawazu[".importFields"][] = "handle";
$tdataawazu[".importFields"][] = "yahoo_color_id";
$tdataawazu[".importFields"][] = "serial_number";
$tdataawazu[".importFields"][] = "stamp";
$tdataawazu[".importFields"][] = "motif";
$tdataawazu[".importFields"][] = "Setting";
$tdataawazu[".importFields"][] = "processing";
$tdataawazu[".importFields"][] = "Sleeve_Length";
$tdataawazu[".importFields"][] = "length";
$tdataawazu[".importFields"][] = "Ring_size";
$tdataawazu[".importFields"][] = "yahoo_junle";
$tdataawazu[".importFields"][] = "updated_at";

$tdataawazu[".printFields"] = array();
$tdataawazu[".printFields"][] = "ecc_seq";
$tdataawazu[".printFields"][] = "updated_at";
$tdataawazu[".printFields"][] = "status";
$tdataawazu[".printFields"][] = "satei_by";
$tdataawazu[".printFields"][] = "category_id";
$tdataawazu[".printFields"][] = "title";
$tdataawazu[".printFields"][] = "sub_category_id1";
$tdataawazu[".printFields"][] = "product_id";
$tdataawazu[".printFields"][] = "yahoo_sinaban";
$tdataawazu[".printFields"][] = "price";
$tdataawazu[".printFields"][] = "sales_price";
$tdataawazu[".printFields"][] = "yahoo_sex";
$tdataawazu[".printFields"][] = "product_num";
$tdataawazu[".printFields"][] = "description";
$tdataawazu[".printFields"][] = "raku_hyoujisaki_category";
$tdataawazu[".printFields"][] = "raku_hyoujisaki_category2";
$tdataawazu[".printFields"][] = "raku_hyoujisaki_category3";
$tdataawazu[".printFields"][] = "raku_hyoujisaki_category4";
$tdataawazu[".printFields"][] = "raku_hyoujisaki_category5";
$tdataawazu[".printFields"][] = "yahoo_kataban";
$tdataawazu[".printFields"][] = "yahoo_sozai";
$tdataawazu[".printFields"][] = "yahoo_color";
$tdataawazu[".printFields"][] = "yahoo_size";
$tdataawazu[".printFields"][] = "yahoo_condition1";
$tdataawazu[".printFields"][] = "yahoo_condition2";
$tdataawazu[".printFields"][] = "remark";
$tdataawazu[".printFields"][] = "yahoo_fuzokuhin";
$tdataawazu[".printFields"][] = "yahoo_sankou_uwadai";
$tdataawazu[".printFields"][] = "season";
$tdataawazu[".printFields"][] = "yahoo_title";
$tdataawazu[".printFields"][] = "goods_title";
$tdataawazu[".printFields"][] = "updated_by";
$tdataawazu[".printFields"][] = "raku_title";
$tdataawazu[".printFields"][] = "raku_tag_result";
$tdataawazu[".printFields"][] = "search_keyword";
$tdataawazu[".printFields"][] = "stamp";
$tdataawazu[".printFields"][] = "processing";
$tdataawazu[".printFields"][] = "Sleeve_Length";
$tdataawazu[".printFields"][] = "length";
$tdataawazu[".printFields"][] = "label_output_flag";
$tdataawazu[".printFields"][] = "Ring_size";
$tdataawazu[".printFields"][] = "comment";
$tdataawazu[".printFields"][] = "satei_hi";
$tdataawazu[".printFields"][] = "AWAZU_DATE";
$tdataawazu[".printFields"][] = "AWAZU_NIN";
$tdataawazu[".printFields"][] = "gold_property";
$tdataawazu[".printFields"][] = "ichiba_title";
$tdataawazu[".printFields"][] = "Gram";
$tdataawazu[".printFields"][] = "Parent_stone";
$tdataawazu[".printFields"][] = "Aside_stone";
$tdataawazu[".printFields"][] = "Appraiser";
$tdataawazu[".printFields"][] = "Remarks";
$tdataawazu[".printFields"][] = "Destination_selling";
$tdataawazu[".printFields"][] = "Finish";
$tdataawazu[".printFields"][] = "Discrimination";
$tdataawazu[".printFields"][] = "accessories";
$tdataawazu[".printFields"][] = "priority";
$tdataawazu[".printFields"][] = "A_storage";
$tdataawazu[".printFields"][] = "price_per_gram";
$tdataawazu[".printFields"][] = "price_per_parent_stone";
$tdataawazu[".printFields"][] = "price_per_aside_stone";
$tdataawazu[".printFields"][] = "price_secret";
$tdataawazu[".printFields"][] = "sales_price_secret";
$tdataawazu[".printFields"][] = "line";
$tdataawazu[".printFields"][] = "item_name";
$tdataawazu[".printFields"][] = "handle";
$tdataawazu[".printFields"][] = "yahoo_color_id";
$tdataawazu[".printFields"][] = "serial_number";
$tdataawazu[".printFields"][] = "motif";
$tdataawazu[".printFields"][] = "Setting";

//	product_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "product_id";
	$fdata["GoodName"] = "product_id";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("awazu","product_id");
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




	$tdataawazu["product_id"] = $fdata;
//	category_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "category_id";
	$fdata["GoodName"] = "category_id";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("awazu","category_id");
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




	$tdataawazu["category_id"] = $fdata;
//	goods_title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "goods_title";
	$fdata["GoodName"] = "goods_title";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("awazu","goods_title");
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




	$tdataawazu["goods_title"] = $fdata;
//	title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "title";
	$fdata["GoodName"] = "title";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("awazu","title");
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




	$tdataawazu["title"] = $fdata;
//	sub_category_id1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "sub_category_id1";
	$fdata["GoodName"] = "sub_category_id1";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("awazu","sub_category_id1");
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




	$tdataawazu["sub_category_id1"] = $fdata;
//	ecc_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "ecc_id";
	$fdata["GoodName"] = "ecc_id";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("awazu","ecc_id");
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








	$tdataawazu["ecc_id"] = $fdata;
//	price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "price";
	$fdata["GoodName"] = "price";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("awazu","price");
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




	$tdataawazu["price"] = $fdata;
//	yahoo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "yahoo";
	$fdata["GoodName"] = "yahoo";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("awazu","yahoo");
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








	$tdataawazu["yahoo"] = $fdata;
//	remark
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "remark";
	$fdata["GoodName"] = "remark";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("awazu","remark");
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




	$tdataawazu["remark"] = $fdata;
//	sales_price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "sales_price";
	$fdata["GoodName"] = "sales_price";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("awazu","sales_price");
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




	$tdataawazu["sales_price"] = $fdata;
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("awazu","description");
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




	$tdataawazu["description"] = $fdata;
//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("awazu","status");
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




	$tdataawazu["status"] = $fdata;
//	product_num
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "product_num";
	$fdata["GoodName"] = "product_num";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("awazu","product_num");
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




	$tdataawazu["product_num"] = $fdata;
//	yahoo_size
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "yahoo_size";
	$fdata["GoodName"] = "yahoo_size";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("awazu","yahoo_size");
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




	$tdataawazu["yahoo_size"] = $fdata;
//	yahoo_title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "yahoo_title";
	$fdata["GoodName"] = "yahoo_title";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("awazu","yahoo_title");
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




	$tdataawazu["yahoo_title"] = $fdata;
//	yahoo_sankou_uwadai
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "yahoo_sankou_uwadai";
	$fdata["GoodName"] = "yahoo_sankou_uwadai";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("awazu","yahoo_sankou_uwadai");
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




	$tdataawazu["yahoo_sankou_uwadai"] = $fdata;
//	yahoo_sozai
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "yahoo_sozai";
	$fdata["GoodName"] = "yahoo_sozai";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("awazu","yahoo_sozai");
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




	$tdataawazu["yahoo_sozai"] = $fdata;
//	yahoo_color
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "yahoo_color";
	$fdata["GoodName"] = "yahoo_color";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("awazu","yahoo_color");
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




	$tdataawazu["yahoo_color"] = $fdata;
//	yahoo_kataban
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "yahoo_kataban";
	$fdata["GoodName"] = "yahoo_kataban";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("awazu","yahoo_kataban");
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




	$tdataawazu["yahoo_kataban"] = $fdata;
//	yahoo_condition1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "yahoo_condition1";
	$fdata["GoodName"] = "yahoo_condition1";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("awazu","yahoo_condition1");
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




	$tdataawazu["yahoo_condition1"] = $fdata;
//	yahoo_condition2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "yahoo_condition2";
	$fdata["GoodName"] = "yahoo_condition2";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("awazu","yahoo_condition2");
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




	$tdataawazu["yahoo_condition2"] = $fdata;
//	yahoo_fuzokuhin
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "yahoo_fuzokuhin";
	$fdata["GoodName"] = "yahoo_fuzokuhin";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("awazu","yahoo_fuzokuhin");
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




	$tdataawazu["yahoo_fuzokuhin"] = $fdata;
//	yahoo_sinaban
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "yahoo_sinaban";
	$fdata["GoodName"] = "yahoo_sinaban";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("awazu","yahoo_sinaban");
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




	$tdataawazu["yahoo_sinaban"] = $fdata;
//	yahoo_saisun_sha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "yahoo_saisun_sha";
	$fdata["GoodName"] = "yahoo_saisun_sha";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("awazu","yahoo_saisun_sha");
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








	$tdataawazu["yahoo_saisun_sha"] = $fdata;
//	yahoo_sex
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "yahoo_sex";
	$fdata["GoodName"] = "yahoo_sex";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("awazu","yahoo_sex");
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




	$tdataawazu["yahoo_sex"] = $fdata;
//	box_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "box_id";
	$fdata["GoodName"] = "box_id";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("awazu","box_id");
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








	$tdataawazu["box_id"] = $fdata;
//	nyuukin_price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "nyuukin_price";
	$fdata["GoodName"] = "nyuukin_price";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("awazu","nyuukin_price");
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








	$tdataawazu["nyuukin_price"] = $fdata;
//	updated_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "updated_by";
	$fdata["GoodName"] = "updated_by";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("awazu","updated_by");
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




	$tdataawazu["updated_by"] = $fdata;
//	raku_title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "raku_title";
	$fdata["GoodName"] = "raku_title";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("awazu","raku_title");
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




	$tdataawazu["raku_title"] = $fdata;
//	raku_hyoujisaki_category2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "raku_hyoujisaki_category2";
	$fdata["GoodName"] = "raku_hyoujisaki_category2";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("awazu","raku_hyoujisaki_category2");
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




	$tdataawazu["raku_hyoujisaki_category2"] = $fdata;
//	raku_hyoujisaki_category
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "raku_hyoujisaki_category";
	$fdata["GoodName"] = "raku_hyoujisaki_category";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("awazu","raku_hyoujisaki_category");
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




	$tdataawazu["raku_hyoujisaki_category"] = $fdata;
//	raku_hyoujisaki_category3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "raku_hyoujisaki_category3";
	$fdata["GoodName"] = "raku_hyoujisaki_category3";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("awazu","raku_hyoujisaki_category3");
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




	$tdataawazu["raku_hyoujisaki_category3"] = $fdata;
//	timesta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "timesta";
	$fdata["GoodName"] = "timesta";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("awazu","timesta");
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








	$tdataawazu["timesta"] = $fdata;
//	saisun_start
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "saisun_start";
	$fdata["GoodName"] = "saisun_start";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("awazu","saisun_start");
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








	$tdataawazu["saisun_start"] = $fdata;
//	saisun_end
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "saisun_end";
	$fdata["GoodName"] = "saisun_end";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("awazu","saisun_end");
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








	$tdataawazu["saisun_end"] = $fdata;
//	label_output_flag
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "label_output_flag";
	$fdata["GoodName"] = "label_output_flag";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("awazu","label_output_flag");
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




	$tdataawazu["label_output_flag"] = $fdata;
//	season
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "season";
	$fdata["GoodName"] = "season";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("awazu","season");
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




	$tdataawazu["season"] = $fdata;
//	kanryou_henbi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "kanryou_henbi";
	$fdata["GoodName"] = "kanryou_henbi";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("awazu","kanryou_henbi");
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








	$tdataawazu["kanryou_henbi"] = $fdata;
//	box_sort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "box_sort";
	$fdata["GoodName"] = "box_sort";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("awazu","box_sort");
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








	$tdataawazu["box_sort"] = $fdata;
//	satei_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "satei_by";
	$fdata["GoodName"] = "satei_by";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("awazu","satei_by");
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




	$tdataawazu["satei_by"] = $fdata;
//	kaitori_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "kaitori_by";
	$fdata["GoodName"] = "kaitori_by";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("awazu","kaitori_by");
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








	$tdataawazu["kaitori_by"] = $fdata;
//	comment
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "comment";
	$fdata["GoodName"] = "comment";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("awazu","comment");
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




	$tdataawazu["comment"] = $fdata;
//	satei_hi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "satei_hi";
	$fdata["GoodName"] = "satei_hi";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("awazu","satei_hi");
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




	$tdataawazu["satei_hi"] = $fdata;
//	kaitory_hi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "kaitory_hi";
	$fdata["GoodName"] = "kaitory_hi";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("awazu","kaitory_hi");
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








	$tdataawazu["kaitory_hi"] = $fdata;
//	REG_PHOTOGRAPHER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "REG_PHOTOGRAPHER";
	$fdata["GoodName"] = "REG_PHOTOGRAPHER";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("awazu","REG_PHOTOGRAPHER");
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








	$tdataawazu["REG_PHOTOGRAPHER"] = $fdata;
//	REG_PACKINGS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "REG_PACKINGS";
	$fdata["GoodName"] = "REG_PACKINGS";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("awazu","REG_PACKINGS");
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








	$tdataawazu["REG_PACKINGS"] = $fdata;
//	REG_KAKOU_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 47;
	$fdata["strName"] = "REG_KAKOU_DATE";
	$fdata["GoodName"] = "REG_KAKOU_DATE";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("awazu","REG_KAKOU_DATE");
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








	$tdataawazu["REG_KAKOU_DATE"] = $fdata;
//	REG_KAKOU
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 48;
	$fdata["strName"] = "REG_KAKOU";
	$fdata["GoodName"] = "REG_KAKOU";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("awazu","REG_KAKOU");
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








	$tdataawazu["REG_KAKOU"] = $fdata;
//	REG_EXHIBITOR
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 49;
	$fdata["strName"] = "REG_EXHIBITOR";
	$fdata["GoodName"] = "REG_EXHIBITOR";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("awazu","REG_EXHIBITOR");
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








	$tdataawazu["REG_EXHIBITOR"] = $fdata;
//	REG_PHOTOGRAPHER_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 50;
	$fdata["strName"] = "REG_PHOTOGRAPHER_DATE";
	$fdata["GoodName"] = "REG_PHOTOGRAPHER_DATE";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("awazu","REG_PHOTOGRAPHER_DATE");
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








	$tdataawazu["REG_PHOTOGRAPHER_DATE"] = $fdata;
//	DT_PACKING_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 51;
	$fdata["strName"] = "DT_PACKING_DATE";
	$fdata["GoodName"] = "DT_PACKING_DATE";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("awazu","DT_PACKING_DATE");
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








	$tdataawazu["DT_PACKING_DATE"] = $fdata;
//	DT_UP_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 52;
	$fdata["strName"] = "DT_UP_DATE";
	$fdata["GoodName"] = "DT_UP_DATE";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("awazu","DT_UP_DATE");
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








	$tdataawazu["DT_UP_DATE"] = $fdata;
//	AWAZU_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 53;
	$fdata["strName"] = "AWAZU_DATE";
	$fdata["GoodName"] = "AWAZU_DATE";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("awazu","AWAZU_DATE");
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




	$tdataawazu["AWAZU_DATE"] = $fdata;
//	AWAZU_NIN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 54;
	$fdata["strName"] = "AWAZU_NIN";
	$fdata["GoodName"] = "AWAZU_NIN";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("awazu","AWAZU_NIN");
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




	$tdataawazu["AWAZU_NIN"] = $fdata;
//	sabun_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 55;
	$fdata["strName"] = "sabun_date";
	$fdata["GoodName"] = "sabun_date";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("awazu","sabun_date");
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








	$tdataawazu["sabun_date"] = $fdata;
//	browseid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 56;
	$fdata["strName"] = "browseid";
	$fdata["GoodName"] = "browseid";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("awazu","browseid");
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








	$tdataawazu["browseid"] = $fdata;
//	browsenode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 57;
	$fdata["strName"] = "browsenode";
	$fdata["GoodName"] = "browsenode";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("awazu","browsenode");
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








	$tdataawazu["browsenode"] = $fdata;
//	gold_property
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 58;
	$fdata["strName"] = "gold_property";
	$fdata["GoodName"] = "gold_property";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("awazu","gold_property");
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




	$tdataawazu["gold_property"] = $fdata;
//	ichiba_title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 59;
	$fdata["strName"] = "ichiba_title";
	$fdata["GoodName"] = "ichiba_title";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("awazu","ichiba_title");
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




	$tdataawazu["ichiba_title"] = $fdata;
//	Gram
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 60;
	$fdata["strName"] = "Gram";
	$fdata["GoodName"] = "Gram";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("awazu","Gram");
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




	$tdataawazu["Gram"] = $fdata;
//	Parent_stone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 61;
	$fdata["strName"] = "Parent_stone";
	$fdata["GoodName"] = "Parent_stone";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("awazu","Parent_stone");
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




	$tdataawazu["Parent_stone"] = $fdata;
//	Aside_stone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 62;
	$fdata["strName"] = "Aside_stone";
	$fdata["GoodName"] = "Aside_stone";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("awazu","Aside_stone");
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




	$tdataawazu["Aside_stone"] = $fdata;
//	Appraiser
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 63;
	$fdata["strName"] = "Appraiser";
	$fdata["GoodName"] = "Appraiser";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("awazu","Appraiser");
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




	$tdataawazu["Appraiser"] = $fdata;
//	Remarks
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 64;
	$fdata["strName"] = "Remarks";
	$fdata["GoodName"] = "Remarks";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("awazu","Remarks");
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




	$tdataawazu["Remarks"] = $fdata;
//	Destination_selling
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 65;
	$fdata["strName"] = "Destination_selling";
	$fdata["GoodName"] = "Destination_selling";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("awazu","Destination_selling");
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




	$tdataawazu["Destination_selling"] = $fdata;
//	Finish
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 66;
	$fdata["strName"] = "Finish";
	$fdata["GoodName"] = "Finish";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("awazu","Finish");
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




	$tdataawazu["Finish"] = $fdata;
//	Discrimination
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 67;
	$fdata["strName"] = "Discrimination";
	$fdata["GoodName"] = "Discrimination";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("awazu","Discrimination");
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




	$tdataawazu["Discrimination"] = $fdata;
//	accessories
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 68;
	$fdata["strName"] = "accessories";
	$fdata["GoodName"] = "accessories";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("awazu","accessories");
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




	$tdataawazu["accessories"] = $fdata;
//	priority
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 69;
	$fdata["strName"] = "priority";
	$fdata["GoodName"] = "priority";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("awazu","priority");
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




	$tdataawazu["priority"] = $fdata;
//	A_storage
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 70;
	$fdata["strName"] = "A_storage";
	$fdata["GoodName"] = "A_storage";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("awazu","A_storage");
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




	$tdataawazu["A_storage"] = $fdata;
//	price_per_gram
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 71;
	$fdata["strName"] = "price_per_gram";
	$fdata["GoodName"] = "price_per_gram";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("awazu","price_per_gram");
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




	$tdataawazu["price_per_gram"] = $fdata;
//	price_per_parent_stone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 72;
	$fdata["strName"] = "price_per_parent_stone";
	$fdata["GoodName"] = "price_per_parent_stone";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("awazu","price_per_parent_stone");
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




	$tdataawazu["price_per_parent_stone"] = $fdata;
//	price_per_aside_stone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 73;
	$fdata["strName"] = "price_per_aside_stone";
	$fdata["GoodName"] = "price_per_aside_stone";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("awazu","price_per_aside_stone");
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




	$tdataawazu["price_per_aside_stone"] = $fdata;
//	price_secret
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 74;
	$fdata["strName"] = "price_secret";
	$fdata["GoodName"] = "price_secret";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("awazu","price_secret");
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

	
	



		$edata["IsRequired"] = true;

	
	
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




	$tdataawazu["price_secret"] = $fdata;
//	sales_price_secret
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 75;
	$fdata["strName"] = "sales_price_secret";
	$fdata["GoodName"] = "sales_price_secret";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("awazu","sales_price_secret");
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




	$tdataawazu["sales_price_secret"] = $fdata;
//	eq
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 76;
	$fdata["strName"] = "eq";
	$fdata["GoodName"] = "eq";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("awazu","eq");
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








	$tdataawazu["eq"] = $fdata;
//	en
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 77;
	$fdata["strName"] = "en";
	$fdata["GoodName"] = "en";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("awazu","en");
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








	$tdataawazu["en"] = $fdata;
//	line
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 78;
	$fdata["strName"] = "line";
	$fdata["GoodName"] = "line";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("awazu","line");
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




	$tdataawazu["line"] = $fdata;
//	item_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 79;
	$fdata["strName"] = "item_name";
	$fdata["GoodName"] = "item_name";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("awazu","item_name");
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




	$tdataawazu["item_name"] = $fdata;
//	handle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 80;
	$fdata["strName"] = "handle";
	$fdata["GoodName"] = "handle";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("awazu","handle");
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




	$tdataawazu["handle"] = $fdata;
//	yahoo_color_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 81;
	$fdata["strName"] = "yahoo_color_id";
	$fdata["GoodName"] = "yahoo_color_id";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("awazu","yahoo_color_id");
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




	$tdataawazu["yahoo_color_id"] = $fdata;
//	raku_hyoujisaki_category4
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 82;
	$fdata["strName"] = "raku_hyoujisaki_category4";
	$fdata["GoodName"] = "raku_hyoujisaki_category4";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("awazu","raku_hyoujisaki_category4");
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




	$tdataawazu["raku_hyoujisaki_category4"] = $fdata;
//	raku_hyoujisaki_category5
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 83;
	$fdata["strName"] = "raku_hyoujisaki_category5";
	$fdata["GoodName"] = "raku_hyoujisaki_category5";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("awazu","raku_hyoujisaki_category5");
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




	$tdataawazu["raku_hyoujisaki_category5"] = $fdata;
//	raku_dir_1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 84;
	$fdata["strName"] = "raku_dir_1";
	$fdata["GoodName"] = "raku_dir_1";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("awazu","raku_dir_1");
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








	$tdataawazu["raku_dir_1"] = $fdata;
//	raku_dir_2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 85;
	$fdata["strName"] = "raku_dir_2";
	$fdata["GoodName"] = "raku_dir_2";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("awazu","raku_dir_2");
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








	$tdataawazu["raku_dir_2"] = $fdata;
//	raku_dir_3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 86;
	$fdata["strName"] = "raku_dir_3";
	$fdata["GoodName"] = "raku_dir_3";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("awazu","raku_dir_3");
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








	$tdataawazu["raku_dir_3"] = $fdata;
//	raku_dir_4
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 87;
	$fdata["strName"] = "raku_dir_4";
	$fdata["GoodName"] = "raku_dir_4";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("awazu","raku_dir_4");
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








	$tdataawazu["raku_dir_4"] = $fdata;
//	raku_dir_5
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 88;
	$fdata["strName"] = "raku_dir_5";
	$fdata["GoodName"] = "raku_dir_5";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("awazu","raku_dir_5");
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








	$tdataawazu["raku_dir_5"] = $fdata;
//	raku_dir_result
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 89;
	$fdata["strName"] = "raku_dir_result";
	$fdata["GoodName"] = "raku_dir_result";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("awazu","raku_dir_result");
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








	$tdataawazu["raku_dir_result"] = $fdata;
//	raku_tag_result
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 90;
	$fdata["strName"] = "raku_tag_result";
	$fdata["GoodName"] = "raku_tag_result";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("awazu","raku_tag_result");
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




	$tdataawazu["raku_tag_result"] = $fdata;
//	serial_number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 91;
	$fdata["strName"] = "serial_number";
	$fdata["GoodName"] = "serial_number";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("awazu","serial_number");
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




	$tdataawazu["serial_number"] = $fdata;
//	Exhibition_Date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 92;
	$fdata["strName"] = "Exhibition_Date";
	$fdata["GoodName"] = "Exhibition_Date";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("awazu","Exhibition_Date");
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








	$tdataawazu["Exhibition_Date"] = $fdata;
//	search_keyword
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 93;
	$fdata["strName"] = "search_keyword";
	$fdata["GoodName"] = "search_keyword";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("awazu","search_keyword");
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




	$tdataawazu["search_keyword"] = $fdata;
//	stamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 94;
	$fdata["strName"] = "stamp";
	$fdata["GoodName"] = "stamp";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("awazu","stamp");
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




	$tdataawazu["stamp"] = $fdata;
//	motif
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 95;
	$fdata["strName"] = "motif";
	$fdata["GoodName"] = "motif";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("awazu","motif");
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




	$tdataawazu["motif"] = $fdata;
//	Setting
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 96;
	$fdata["strName"] = "Setting";
	$fdata["GoodName"] = "Setting";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("awazu","Setting");
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




	$tdataawazu["Setting"] = $fdata;
//	processing
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 97;
	$fdata["strName"] = "processing";
	$fdata["GoodName"] = "processing";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("awazu","processing");
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




	$tdataawazu["processing"] = $fdata;
//	Sleeve_Length
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 98;
	$fdata["strName"] = "Sleeve_Length";
	$fdata["GoodName"] = "Sleeve_Length";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("awazu","Sleeve_Length");
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




	$tdataawazu["Sleeve_Length"] = $fdata;
//	length
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 99;
	$fdata["strName"] = "length";
	$fdata["GoodName"] = "length";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("awazu","length");
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




	$tdataawazu["length"] = $fdata;
//	Ring_size
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 100;
	$fdata["strName"] = "Ring_size";
	$fdata["GoodName"] = "Ring_size";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("awazu","Ring_size");
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




	$tdataawazu["Ring_size"] = $fdata;
//	price_for_site
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 101;
	$fdata["strName"] = "price_for_site";
	$fdata["GoodName"] = "price_for_site";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("awazu","price_for_site");
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








	$tdataawazu["price_for_site"] = $fdata;
//	yahoo_category_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 102;
	$fdata["strName"] = "yahoo_category_id";
	$fdata["GoodName"] = "yahoo_category_id";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("awazu","yahoo_category_id");
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








	$tdataawazu["yahoo_category_id"] = $fdata;
//	Qty
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 103;
	$fdata["strName"] = "Qty";
	$fdata["GoodName"] = "Qty";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("awazu","Qty");
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








	$tdataawazu["Qty"] = $fdata;
//	sales_period
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 104;
	$fdata["strName"] = "sales_period";
	$fdata["GoodName"] = "sales_period";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("awazu","sales_period");
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








	$tdataawazu["sales_period"] = $fdata;
//	starting_price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 105;
	$fdata["strName"] = "starting_price";
	$fdata["GoodName"] = "starting_price";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("awazu","starting_price");
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








	$tdataawazu["starting_price"] = $fdata;
//	ecc_seq
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 106;
	$fdata["strName"] = "ecc_seq";
	$fdata["GoodName"] = "ecc_seq";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("awazu","ecc_seq");
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




	$tdataawazu["ecc_seq"] = $fdata;
//	yahoo_junle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 107;
	$fdata["strName"] = "yahoo_junle";
	$fdata["GoodName"] = "yahoo_junle";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("awazu","yahoo_junle");
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








	$tdataawazu["yahoo_junle"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 108;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("awazu","updated_at");
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




	$tdataawazu["updated_at"] = $fdata;


$tables_data["awazu"]=&$tdataawazu;
$field_labels["awazu"] = &$fieldLabelsawazu;
$fieldToolTips["awazu"] = &$fieldToolTipsawazu;
$placeHolders["awazu"] = &$placeHoldersawazu;
$page_titles["awazu"] = &$pageTitlesawazu;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["awazu"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["awazu"] = array();


	
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
					$masterTablesData["awazu"][0] = $masterParams;
				$masterTablesData["awazu"][0]["masterKeys"] = array();
	$masterTablesData["awazu"][0]["masterKeys"][]="ecc_id";
				$masterTablesData["awazu"][0]["detailKeys"] = array();
	$masterTablesData["awazu"][0]["detailKeys"][]="ecc_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_awazu()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`shouhin`.`product_id`,  `shouhin`.`category_id`,  `shouhin`.`goods_title`,  `shouhin`.`title`,  `shouhin`.`sub_category_id1`,  `shouhin`.`ecc_id`,  `shouhin`.`price`,  `shouhin`.`yahoo`,  `shouhin`.`remark`,  `shouhin`.`sales_price`,  `shouhin`.`description`,  `shouhin`.`status`,  `shouhin`.`product_num`,  `shouhin`.`yahoo_size`,  `shouhin`.`yahoo_title`,  `shouhin`.`yahoo_sankou_uwadai`,  `shouhin`.`yahoo_sozai`,  `shouhin`.`yahoo_color`,  `shouhin`.`yahoo_kataban`,  `shouhin`.`yahoo_condition1`,  `shouhin`.`yahoo_condition2`,  `shouhin`.`yahoo_fuzokuhin`,  `shouhin`.`yahoo_sinaban`,  `shouhin`.`yahoo_saisun_sha`,  `shouhin`.`yahoo_sex`,  `shouhin`.`box_id`,  `shouhin`.`nyuukin_price`,  `shouhin`.`updated_by`,  `shouhin`.`raku_title`,  `shouhin`.`raku_hyoujisaki_category2`,  `shouhin`.`raku_hyoujisaki_category`,  `shouhin`.`raku_hyoujisaki_category3`,  `shouhin`.`timesta`,  `shouhin`.`saisun_start`,  `shouhin`.`saisun_end`,  `shouhin`.`label_output_flag`,  `shouhin`.`season`,  `shouhin`.`kanryou_henbi`,  `shouhin`.`box_sort`,  `shouhin`.`satei_by`,  `shouhin`.`kaitori_by`,  `shouhin`.`comment`,  `shouhin`.`satei_hi`,  `shouhin`.`kaitory_hi`,  `shouhin`.`REG_PHOTOGRAPHER`,  `shouhin`.`REG_PACKINGS`,  `shouhin`.`REG_KAKOU_DATE`,  `shouhin`.`REG_KAKOU`,  `shouhin`.`REG_EXHIBITOR`,  `shouhin`.`REG_PHOTOGRAPHER_DATE`,  `shouhin`.`DT_PACKING_DATE`,  `shouhin`.`DT_UP_DATE`,  `shouhin`.`AWAZU_DATE`,  `shouhin`.`AWAZU_NIN`,  `shouhin`.`sabun_date`,  `shouhin`.`browseid`,  `shouhin`.`browsenode`,  `shouhin`.`gold_property`,  `shouhin`.`ichiba_title`,  `shouhin`.`Gram`,  `shouhin`.`Parent_stone`,  `shouhin`.`Aside_stone`,  `shouhin`.`Appraiser`,  `shouhin`.`Remarks`,  `shouhin`.`Destination_selling`,  `shouhin`.`Finish`,  `shouhin`.`Discrimination`,  `shouhin`.`accessories`,  `shouhin`.`priority`,  `shouhin`.`A_storage`,  `shouhin`.`price_per_gram`,  `shouhin`.`price_per_parent_stone`,  `shouhin`.`price_per_aside_stone`,  `shouhin`.`price_secret`,  `shouhin`.`sales_price_secret`,  `shouhin`.`eq`,  `shouhin`.`en`,  `shouhin`.`line`,  `shouhin`.`item_name`,  `shouhin`.`handle`,  `shouhin`.`yahoo_color_id`,  `shouhin`.`raku_hyoujisaki_category4`,  `shouhin`.`raku_hyoujisaki_category5`,  `shouhin`.`raku_dir_1`,  `shouhin`.`raku_dir_2`,  `shouhin`.`raku_dir_3`,  `shouhin`.`raku_dir_4`,  `shouhin`.`raku_dir_5`,  `shouhin`.`raku_dir_result`,  `shouhin`.`raku_tag_result`,  `shouhin`.`serial_number`,  `shouhin`.`Exhibition_Date`,  `shouhin`.`search_keyword`,  `shouhin`.`stamp`,  `shouhin`.`motif`,  `shouhin`.`Setting`,  `shouhin`.`processing`,  `shouhin`.`Sleeve_Length`,  `shouhin`.`length`,  `shouhin`.`Ring_size`,  `shouhin`.`price_for_site`,  `shouhin`.`yahoo_category_id`,  `shouhin`.`Qty`,  `shouhin`.`sales_period`,  `shouhin`.`starting_price`,  `Eoc`.`ecc_seq`,  `shouhin`.`yahoo_junle`,  `shouhin`.`updated_at`";
$proto0["m_strFrom"] = "FROM `shouhin`  LEFT OUTER JOIN `Eoc` ON `shouhin`.`ecc_id` = `Eoc`.`ecc_id`";
$proto0["m_strWhere"] = "(`shouhin`.`status` =34)";
$proto0["m_strOrderBy"] = "ORDER BY `shouhin`.`product_id` DESC";
$proto0["m_strTail"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "`shouhin`.`status` =34";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "awazu"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "=34";
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
	"m_srcTableName" => "awazu"
));

$proto6["m_sql"] = "`shouhin`.`product_id`";
$proto6["m_srcTableName"] = "awazu";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "category_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "awazu"
));

$proto8["m_sql"] = "`shouhin`.`category_id`";
$proto8["m_srcTableName"] = "awazu";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "goods_title",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "awazu"
));

$proto10["m_sql"] = "`shouhin`.`goods_title`";
$proto10["m_srcTableName"] = "awazu";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "title",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "awazu"
));

$proto12["m_sql"] = "`shouhin`.`title`";
$proto12["m_srcTableName"] = "awazu";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "sub_category_id1",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "awazu"
));

$proto14["m_sql"] = "`shouhin`.`sub_category_id1`";
$proto14["m_srcTableName"] = "awazu";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "ecc_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "awazu"
));

$proto16["m_sql"] = "`shouhin`.`ecc_id`";
$proto16["m_srcTableName"] = "awazu";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "price",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "awazu"
));

$proto18["m_sql"] = "`shouhin`.`price`";
$proto18["m_srcTableName"] = "awazu";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "awazu"
));

$proto20["m_sql"] = "`shouhin`.`yahoo`";
$proto20["m_srcTableName"] = "awazu";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "remark",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "awazu"
));

$proto22["m_sql"] = "`shouhin`.`remark`";
$proto22["m_srcTableName"] = "awazu";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "sales_price",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "awazu"
));

$proto24["m_sql"] = "`shouhin`.`sales_price`";
$proto24["m_srcTableName"] = "awazu";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "awazu"
));

$proto26["m_sql"] = "`shouhin`.`description`";
$proto26["m_srcTableName"] = "awazu";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "awazu"
));

$proto28["m_sql"] = "`shouhin`.`status`";
$proto28["m_srcTableName"] = "awazu";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "product_num",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "awazu"
));

$proto30["m_sql"] = "`shouhin`.`product_num`";
$proto30["m_srcTableName"] = "awazu";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_size",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "awazu"
));

$proto32["m_sql"] = "`shouhin`.`yahoo_size`";
$proto32["m_srcTableName"] = "awazu";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_title",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "awazu"
));

$proto34["m_sql"] = "`shouhin`.`yahoo_title`";
$proto34["m_srcTableName"] = "awazu";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_sankou_uwadai",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "awazu"
));

$proto36["m_sql"] = "`shouhin`.`yahoo_sankou_uwadai`";
$proto36["m_srcTableName"] = "awazu";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_sozai",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "awazu"
));

$proto38["m_sql"] = "`shouhin`.`yahoo_sozai`";
$proto38["m_srcTableName"] = "awazu";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_color",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "awazu"
));

$proto40["m_sql"] = "`shouhin`.`yahoo_color`";
$proto40["m_srcTableName"] = "awazu";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_kataban",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "awazu"
));

$proto42["m_sql"] = "`shouhin`.`yahoo_kataban`";
$proto42["m_srcTableName"] = "awazu";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_condition1",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "awazu"
));

$proto44["m_sql"] = "`shouhin`.`yahoo_condition1`";
$proto44["m_srcTableName"] = "awazu";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_condition2",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "awazu"
));

$proto46["m_sql"] = "`shouhin`.`yahoo_condition2`";
$proto46["m_srcTableName"] = "awazu";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_fuzokuhin",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "awazu"
));

$proto48["m_sql"] = "`shouhin`.`yahoo_fuzokuhin`";
$proto48["m_srcTableName"] = "awazu";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_sinaban",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "awazu"
));

$proto50["m_sql"] = "`shouhin`.`yahoo_sinaban`";
$proto50["m_srcTableName"] = "awazu";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_saisun_sha",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "awazu"
));

$proto52["m_sql"] = "`shouhin`.`yahoo_saisun_sha`";
$proto52["m_srcTableName"] = "awazu";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_sex",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "awazu"
));

$proto54["m_sql"] = "`shouhin`.`yahoo_sex`";
$proto54["m_srcTableName"] = "awazu";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "box_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "awazu"
));

$proto56["m_sql"] = "`shouhin`.`box_id`";
$proto56["m_srcTableName"] = "awazu";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "nyuukin_price",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "awazu"
));

$proto58["m_sql"] = "`shouhin`.`nyuukin_price`";
$proto58["m_srcTableName"] = "awazu";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "awazu"
));

$proto60["m_sql"] = "`shouhin`.`updated_by`";
$proto60["m_srcTableName"] = "awazu";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "raku_title",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "awazu"
));

$proto62["m_sql"] = "`shouhin`.`raku_title`";
$proto62["m_srcTableName"] = "awazu";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "raku_hyoujisaki_category2",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "awazu"
));

$proto64["m_sql"] = "`shouhin`.`raku_hyoujisaki_category2`";
$proto64["m_srcTableName"] = "awazu";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "raku_hyoujisaki_category",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "awazu"
));

$proto66["m_sql"] = "`shouhin`.`raku_hyoujisaki_category`";
$proto66["m_srcTableName"] = "awazu";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "raku_hyoujisaki_category3",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "awazu"
));

$proto68["m_sql"] = "`shouhin`.`raku_hyoujisaki_category3`";
$proto68["m_srcTableName"] = "awazu";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "timesta",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "awazu"
));

$proto70["m_sql"] = "`shouhin`.`timesta`";
$proto70["m_srcTableName"] = "awazu";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "saisun_start",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "awazu"
));

$proto72["m_sql"] = "`shouhin`.`saisun_start`";
$proto72["m_srcTableName"] = "awazu";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "saisun_end",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "awazu"
));

$proto74["m_sql"] = "`shouhin`.`saisun_end`";
$proto74["m_srcTableName"] = "awazu";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "label_output_flag",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "awazu"
));

$proto76["m_sql"] = "`shouhin`.`label_output_flag`";
$proto76["m_srcTableName"] = "awazu";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "season",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "awazu"
));

$proto78["m_sql"] = "`shouhin`.`season`";
$proto78["m_srcTableName"] = "awazu";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "kanryou_henbi",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "awazu"
));

$proto80["m_sql"] = "`shouhin`.`kanryou_henbi`";
$proto80["m_srcTableName"] = "awazu";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "box_sort",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "awazu"
));

$proto82["m_sql"] = "`shouhin`.`box_sort`";
$proto82["m_srcTableName"] = "awazu";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "satei_by",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "awazu"
));

$proto84["m_sql"] = "`shouhin`.`satei_by`";
$proto84["m_srcTableName"] = "awazu";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "kaitori_by",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "awazu"
));

$proto86["m_sql"] = "`shouhin`.`kaitori_by`";
$proto86["m_srcTableName"] = "awazu";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "comment",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "awazu"
));

$proto88["m_sql"] = "`shouhin`.`comment`";
$proto88["m_srcTableName"] = "awazu";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "satei_hi",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "awazu"
));

$proto90["m_sql"] = "`shouhin`.`satei_hi`";
$proto90["m_srcTableName"] = "awazu";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLField(array(
	"m_strName" => "kaitory_hi",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "awazu"
));

$proto92["m_sql"] = "`shouhin`.`kaitory_hi`";
$proto92["m_srcTableName"] = "awazu";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "";
$obj = new SQLFieldListItem($proto92);

$proto0["m_fieldlist"][]=$obj;
						$proto94=array();
			$obj = new SQLField(array(
	"m_strName" => "REG_PHOTOGRAPHER",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "awazu"
));

$proto94["m_sql"] = "`shouhin`.`REG_PHOTOGRAPHER`";
$proto94["m_srcTableName"] = "awazu";
$proto94["m_expr"]=$obj;
$proto94["m_alias"] = "";
$obj = new SQLFieldListItem($proto94);

$proto0["m_fieldlist"][]=$obj;
						$proto96=array();
			$obj = new SQLField(array(
	"m_strName" => "REG_PACKINGS",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "awazu"
));

$proto96["m_sql"] = "`shouhin`.`REG_PACKINGS`";
$proto96["m_srcTableName"] = "awazu";
$proto96["m_expr"]=$obj;
$proto96["m_alias"] = "";
$obj = new SQLFieldListItem($proto96);

$proto0["m_fieldlist"][]=$obj;
						$proto98=array();
			$obj = new SQLField(array(
	"m_strName" => "REG_KAKOU_DATE",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "awazu"
));

$proto98["m_sql"] = "`shouhin`.`REG_KAKOU_DATE`";
$proto98["m_srcTableName"] = "awazu";
$proto98["m_expr"]=$obj;
$proto98["m_alias"] = "";
$obj = new SQLFieldListItem($proto98);

$proto0["m_fieldlist"][]=$obj;
						$proto100=array();
			$obj = new SQLField(array(
	"m_strName" => "REG_KAKOU",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "awazu"
));

$proto100["m_sql"] = "`shouhin`.`REG_KAKOU`";
$proto100["m_srcTableName"] = "awazu";
$proto100["m_expr"]=$obj;
$proto100["m_alias"] = "";
$obj = new SQLFieldListItem($proto100);

$proto0["m_fieldlist"][]=$obj;
						$proto102=array();
			$obj = new SQLField(array(
	"m_strName" => "REG_EXHIBITOR",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "awazu"
));

$proto102["m_sql"] = "`shouhin`.`REG_EXHIBITOR`";
$proto102["m_srcTableName"] = "awazu";
$proto102["m_expr"]=$obj;
$proto102["m_alias"] = "";
$obj = new SQLFieldListItem($proto102);

$proto0["m_fieldlist"][]=$obj;
						$proto104=array();
			$obj = new SQLField(array(
	"m_strName" => "REG_PHOTOGRAPHER_DATE",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "awazu"
));

$proto104["m_sql"] = "`shouhin`.`REG_PHOTOGRAPHER_DATE`";
$proto104["m_srcTableName"] = "awazu";
$proto104["m_expr"]=$obj;
$proto104["m_alias"] = "";
$obj = new SQLFieldListItem($proto104);

$proto0["m_fieldlist"][]=$obj;
						$proto106=array();
			$obj = new SQLField(array(
	"m_strName" => "DT_PACKING_DATE",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "awazu"
));

$proto106["m_sql"] = "`shouhin`.`DT_PACKING_DATE`";
$proto106["m_srcTableName"] = "awazu";
$proto106["m_expr"]=$obj;
$proto106["m_alias"] = "";
$obj = new SQLFieldListItem($proto106);

$proto0["m_fieldlist"][]=$obj;
						$proto108=array();
			$obj = new SQLField(array(
	"m_strName" => "DT_UP_DATE",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "awazu"
));

$proto108["m_sql"] = "`shouhin`.`DT_UP_DATE`";
$proto108["m_srcTableName"] = "awazu";
$proto108["m_expr"]=$obj;
$proto108["m_alias"] = "";
$obj = new SQLFieldListItem($proto108);

$proto0["m_fieldlist"][]=$obj;
						$proto110=array();
			$obj = new SQLField(array(
	"m_strName" => "AWAZU_DATE",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "awazu"
));

$proto110["m_sql"] = "`shouhin`.`AWAZU_DATE`";
$proto110["m_srcTableName"] = "awazu";
$proto110["m_expr"]=$obj;
$proto110["m_alias"] = "";
$obj = new SQLFieldListItem($proto110);

$proto0["m_fieldlist"][]=$obj;
						$proto112=array();
			$obj = new SQLField(array(
	"m_strName" => "AWAZU_NIN",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "awazu"
));

$proto112["m_sql"] = "`shouhin`.`AWAZU_NIN`";
$proto112["m_srcTableName"] = "awazu";
$proto112["m_expr"]=$obj;
$proto112["m_alias"] = "";
$obj = new SQLFieldListItem($proto112);

$proto0["m_fieldlist"][]=$obj;
						$proto114=array();
			$obj = new SQLField(array(
	"m_strName" => "sabun_date",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "awazu"
));

$proto114["m_sql"] = "`shouhin`.`sabun_date`";
$proto114["m_srcTableName"] = "awazu";
$proto114["m_expr"]=$obj;
$proto114["m_alias"] = "";
$obj = new SQLFieldListItem($proto114);

$proto0["m_fieldlist"][]=$obj;
						$proto116=array();
			$obj = new SQLField(array(
	"m_strName" => "browseid",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "awazu"
));

$proto116["m_sql"] = "`shouhin`.`browseid`";
$proto116["m_srcTableName"] = "awazu";
$proto116["m_expr"]=$obj;
$proto116["m_alias"] = "";
$obj = new SQLFieldListItem($proto116);

$proto0["m_fieldlist"][]=$obj;
						$proto118=array();
			$obj = new SQLField(array(
	"m_strName" => "browsenode",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "awazu"
));

$proto118["m_sql"] = "`shouhin`.`browsenode`";
$proto118["m_srcTableName"] = "awazu";
$proto118["m_expr"]=$obj;
$proto118["m_alias"] = "";
$obj = new SQLFieldListItem($proto118);

$proto0["m_fieldlist"][]=$obj;
						$proto120=array();
			$obj = new SQLField(array(
	"m_strName" => "gold_property",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "awazu"
));

$proto120["m_sql"] = "`shouhin`.`gold_property`";
$proto120["m_srcTableName"] = "awazu";
$proto120["m_expr"]=$obj;
$proto120["m_alias"] = "";
$obj = new SQLFieldListItem($proto120);

$proto0["m_fieldlist"][]=$obj;
						$proto122=array();
			$obj = new SQLField(array(
	"m_strName" => "ichiba_title",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "awazu"
));

$proto122["m_sql"] = "`shouhin`.`ichiba_title`";
$proto122["m_srcTableName"] = "awazu";
$proto122["m_expr"]=$obj;
$proto122["m_alias"] = "";
$obj = new SQLFieldListItem($proto122);

$proto0["m_fieldlist"][]=$obj;
						$proto124=array();
			$obj = new SQLField(array(
	"m_strName" => "Gram",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "awazu"
));

$proto124["m_sql"] = "`shouhin`.`Gram`";
$proto124["m_srcTableName"] = "awazu";
$proto124["m_expr"]=$obj;
$proto124["m_alias"] = "";
$obj = new SQLFieldListItem($proto124);

$proto0["m_fieldlist"][]=$obj;
						$proto126=array();
			$obj = new SQLField(array(
	"m_strName" => "Parent_stone",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "awazu"
));

$proto126["m_sql"] = "`shouhin`.`Parent_stone`";
$proto126["m_srcTableName"] = "awazu";
$proto126["m_expr"]=$obj;
$proto126["m_alias"] = "";
$obj = new SQLFieldListItem($proto126);

$proto0["m_fieldlist"][]=$obj;
						$proto128=array();
			$obj = new SQLField(array(
	"m_strName" => "Aside_stone",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "awazu"
));

$proto128["m_sql"] = "`shouhin`.`Aside_stone`";
$proto128["m_srcTableName"] = "awazu";
$proto128["m_expr"]=$obj;
$proto128["m_alias"] = "";
$obj = new SQLFieldListItem($proto128);

$proto0["m_fieldlist"][]=$obj;
						$proto130=array();
			$obj = new SQLField(array(
	"m_strName" => "Appraiser",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "awazu"
));

$proto130["m_sql"] = "`shouhin`.`Appraiser`";
$proto130["m_srcTableName"] = "awazu";
$proto130["m_expr"]=$obj;
$proto130["m_alias"] = "";
$obj = new SQLFieldListItem($proto130);

$proto0["m_fieldlist"][]=$obj;
						$proto132=array();
			$obj = new SQLField(array(
	"m_strName" => "Remarks",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "awazu"
));

$proto132["m_sql"] = "`shouhin`.`Remarks`";
$proto132["m_srcTableName"] = "awazu";
$proto132["m_expr"]=$obj;
$proto132["m_alias"] = "";
$obj = new SQLFieldListItem($proto132);

$proto0["m_fieldlist"][]=$obj;
						$proto134=array();
			$obj = new SQLField(array(
	"m_strName" => "Destination_selling",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "awazu"
));

$proto134["m_sql"] = "`shouhin`.`Destination_selling`";
$proto134["m_srcTableName"] = "awazu";
$proto134["m_expr"]=$obj;
$proto134["m_alias"] = "";
$obj = new SQLFieldListItem($proto134);

$proto0["m_fieldlist"][]=$obj;
						$proto136=array();
			$obj = new SQLField(array(
	"m_strName" => "Finish",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "awazu"
));

$proto136["m_sql"] = "`shouhin`.`Finish`";
$proto136["m_srcTableName"] = "awazu";
$proto136["m_expr"]=$obj;
$proto136["m_alias"] = "";
$obj = new SQLFieldListItem($proto136);

$proto0["m_fieldlist"][]=$obj;
						$proto138=array();
			$obj = new SQLField(array(
	"m_strName" => "Discrimination",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "awazu"
));

$proto138["m_sql"] = "`shouhin`.`Discrimination`";
$proto138["m_srcTableName"] = "awazu";
$proto138["m_expr"]=$obj;
$proto138["m_alias"] = "";
$obj = new SQLFieldListItem($proto138);

$proto0["m_fieldlist"][]=$obj;
						$proto140=array();
			$obj = new SQLField(array(
	"m_strName" => "accessories",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "awazu"
));

$proto140["m_sql"] = "`shouhin`.`accessories`";
$proto140["m_srcTableName"] = "awazu";
$proto140["m_expr"]=$obj;
$proto140["m_alias"] = "";
$obj = new SQLFieldListItem($proto140);

$proto0["m_fieldlist"][]=$obj;
						$proto142=array();
			$obj = new SQLField(array(
	"m_strName" => "priority",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "awazu"
));

$proto142["m_sql"] = "`shouhin`.`priority`";
$proto142["m_srcTableName"] = "awazu";
$proto142["m_expr"]=$obj;
$proto142["m_alias"] = "";
$obj = new SQLFieldListItem($proto142);

$proto0["m_fieldlist"][]=$obj;
						$proto144=array();
			$obj = new SQLField(array(
	"m_strName" => "A_storage",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "awazu"
));

$proto144["m_sql"] = "`shouhin`.`A_storage`";
$proto144["m_srcTableName"] = "awazu";
$proto144["m_expr"]=$obj;
$proto144["m_alias"] = "";
$obj = new SQLFieldListItem($proto144);

$proto0["m_fieldlist"][]=$obj;
						$proto146=array();
			$obj = new SQLField(array(
	"m_strName" => "price_per_gram",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "awazu"
));

$proto146["m_sql"] = "`shouhin`.`price_per_gram`";
$proto146["m_srcTableName"] = "awazu";
$proto146["m_expr"]=$obj;
$proto146["m_alias"] = "";
$obj = new SQLFieldListItem($proto146);

$proto0["m_fieldlist"][]=$obj;
						$proto148=array();
			$obj = new SQLField(array(
	"m_strName" => "price_per_parent_stone",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "awazu"
));

$proto148["m_sql"] = "`shouhin`.`price_per_parent_stone`";
$proto148["m_srcTableName"] = "awazu";
$proto148["m_expr"]=$obj;
$proto148["m_alias"] = "";
$obj = new SQLFieldListItem($proto148);

$proto0["m_fieldlist"][]=$obj;
						$proto150=array();
			$obj = new SQLField(array(
	"m_strName" => "price_per_aside_stone",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "awazu"
));

$proto150["m_sql"] = "`shouhin`.`price_per_aside_stone`";
$proto150["m_srcTableName"] = "awazu";
$proto150["m_expr"]=$obj;
$proto150["m_alias"] = "";
$obj = new SQLFieldListItem($proto150);

$proto0["m_fieldlist"][]=$obj;
						$proto152=array();
			$obj = new SQLField(array(
	"m_strName" => "price_secret",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "awazu"
));

$proto152["m_sql"] = "`shouhin`.`price_secret`";
$proto152["m_srcTableName"] = "awazu";
$proto152["m_expr"]=$obj;
$proto152["m_alias"] = "";
$obj = new SQLFieldListItem($proto152);

$proto0["m_fieldlist"][]=$obj;
						$proto154=array();
			$obj = new SQLField(array(
	"m_strName" => "sales_price_secret",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "awazu"
));

$proto154["m_sql"] = "`shouhin`.`sales_price_secret`";
$proto154["m_srcTableName"] = "awazu";
$proto154["m_expr"]=$obj;
$proto154["m_alias"] = "";
$obj = new SQLFieldListItem($proto154);

$proto0["m_fieldlist"][]=$obj;
						$proto156=array();
			$obj = new SQLField(array(
	"m_strName" => "eq",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "awazu"
));

$proto156["m_sql"] = "`shouhin`.`eq`";
$proto156["m_srcTableName"] = "awazu";
$proto156["m_expr"]=$obj;
$proto156["m_alias"] = "";
$obj = new SQLFieldListItem($proto156);

$proto0["m_fieldlist"][]=$obj;
						$proto158=array();
			$obj = new SQLField(array(
	"m_strName" => "en",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "awazu"
));

$proto158["m_sql"] = "`shouhin`.`en`";
$proto158["m_srcTableName"] = "awazu";
$proto158["m_expr"]=$obj;
$proto158["m_alias"] = "";
$obj = new SQLFieldListItem($proto158);

$proto0["m_fieldlist"][]=$obj;
						$proto160=array();
			$obj = new SQLField(array(
	"m_strName" => "line",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "awazu"
));

$proto160["m_sql"] = "`shouhin`.`line`";
$proto160["m_srcTableName"] = "awazu";
$proto160["m_expr"]=$obj;
$proto160["m_alias"] = "";
$obj = new SQLFieldListItem($proto160);

$proto0["m_fieldlist"][]=$obj;
						$proto162=array();
			$obj = new SQLField(array(
	"m_strName" => "item_name",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "awazu"
));

$proto162["m_sql"] = "`shouhin`.`item_name`";
$proto162["m_srcTableName"] = "awazu";
$proto162["m_expr"]=$obj;
$proto162["m_alias"] = "";
$obj = new SQLFieldListItem($proto162);

$proto0["m_fieldlist"][]=$obj;
						$proto164=array();
			$obj = new SQLField(array(
	"m_strName" => "handle",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "awazu"
));

$proto164["m_sql"] = "`shouhin`.`handle`";
$proto164["m_srcTableName"] = "awazu";
$proto164["m_expr"]=$obj;
$proto164["m_alias"] = "";
$obj = new SQLFieldListItem($proto164);

$proto0["m_fieldlist"][]=$obj;
						$proto166=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_color_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "awazu"
));

$proto166["m_sql"] = "`shouhin`.`yahoo_color_id`";
$proto166["m_srcTableName"] = "awazu";
$proto166["m_expr"]=$obj;
$proto166["m_alias"] = "";
$obj = new SQLFieldListItem($proto166);

$proto0["m_fieldlist"][]=$obj;
						$proto168=array();
			$obj = new SQLField(array(
	"m_strName" => "raku_hyoujisaki_category4",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "awazu"
));

$proto168["m_sql"] = "`shouhin`.`raku_hyoujisaki_category4`";
$proto168["m_srcTableName"] = "awazu";
$proto168["m_expr"]=$obj;
$proto168["m_alias"] = "";
$obj = new SQLFieldListItem($proto168);

$proto0["m_fieldlist"][]=$obj;
						$proto170=array();
			$obj = new SQLField(array(
	"m_strName" => "raku_hyoujisaki_category5",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "awazu"
));

$proto170["m_sql"] = "`shouhin`.`raku_hyoujisaki_category5`";
$proto170["m_srcTableName"] = "awazu";
$proto170["m_expr"]=$obj;
$proto170["m_alias"] = "";
$obj = new SQLFieldListItem($proto170);

$proto0["m_fieldlist"][]=$obj;
						$proto172=array();
			$obj = new SQLField(array(
	"m_strName" => "raku_dir_1",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "awazu"
));

$proto172["m_sql"] = "`shouhin`.`raku_dir_1`";
$proto172["m_srcTableName"] = "awazu";
$proto172["m_expr"]=$obj;
$proto172["m_alias"] = "";
$obj = new SQLFieldListItem($proto172);

$proto0["m_fieldlist"][]=$obj;
						$proto174=array();
			$obj = new SQLField(array(
	"m_strName" => "raku_dir_2",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "awazu"
));

$proto174["m_sql"] = "`shouhin`.`raku_dir_2`";
$proto174["m_srcTableName"] = "awazu";
$proto174["m_expr"]=$obj;
$proto174["m_alias"] = "";
$obj = new SQLFieldListItem($proto174);

$proto0["m_fieldlist"][]=$obj;
						$proto176=array();
			$obj = new SQLField(array(
	"m_strName" => "raku_dir_3",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "awazu"
));

$proto176["m_sql"] = "`shouhin`.`raku_dir_3`";
$proto176["m_srcTableName"] = "awazu";
$proto176["m_expr"]=$obj;
$proto176["m_alias"] = "";
$obj = new SQLFieldListItem($proto176);

$proto0["m_fieldlist"][]=$obj;
						$proto178=array();
			$obj = new SQLField(array(
	"m_strName" => "raku_dir_4",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "awazu"
));

$proto178["m_sql"] = "`shouhin`.`raku_dir_4`";
$proto178["m_srcTableName"] = "awazu";
$proto178["m_expr"]=$obj;
$proto178["m_alias"] = "";
$obj = new SQLFieldListItem($proto178);

$proto0["m_fieldlist"][]=$obj;
						$proto180=array();
			$obj = new SQLField(array(
	"m_strName" => "raku_dir_5",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "awazu"
));

$proto180["m_sql"] = "`shouhin`.`raku_dir_5`";
$proto180["m_srcTableName"] = "awazu";
$proto180["m_expr"]=$obj;
$proto180["m_alias"] = "";
$obj = new SQLFieldListItem($proto180);

$proto0["m_fieldlist"][]=$obj;
						$proto182=array();
			$obj = new SQLField(array(
	"m_strName" => "raku_dir_result",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "awazu"
));

$proto182["m_sql"] = "`shouhin`.`raku_dir_result`";
$proto182["m_srcTableName"] = "awazu";
$proto182["m_expr"]=$obj;
$proto182["m_alias"] = "";
$obj = new SQLFieldListItem($proto182);

$proto0["m_fieldlist"][]=$obj;
						$proto184=array();
			$obj = new SQLField(array(
	"m_strName" => "raku_tag_result",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "awazu"
));

$proto184["m_sql"] = "`shouhin`.`raku_tag_result`";
$proto184["m_srcTableName"] = "awazu";
$proto184["m_expr"]=$obj;
$proto184["m_alias"] = "";
$obj = new SQLFieldListItem($proto184);

$proto0["m_fieldlist"][]=$obj;
						$proto186=array();
			$obj = new SQLField(array(
	"m_strName" => "serial_number",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "awazu"
));

$proto186["m_sql"] = "`shouhin`.`serial_number`";
$proto186["m_srcTableName"] = "awazu";
$proto186["m_expr"]=$obj;
$proto186["m_alias"] = "";
$obj = new SQLFieldListItem($proto186);

$proto0["m_fieldlist"][]=$obj;
						$proto188=array();
			$obj = new SQLField(array(
	"m_strName" => "Exhibition_Date",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "awazu"
));

$proto188["m_sql"] = "`shouhin`.`Exhibition_Date`";
$proto188["m_srcTableName"] = "awazu";
$proto188["m_expr"]=$obj;
$proto188["m_alias"] = "";
$obj = new SQLFieldListItem($proto188);

$proto0["m_fieldlist"][]=$obj;
						$proto190=array();
			$obj = new SQLField(array(
	"m_strName" => "search_keyword",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "awazu"
));

$proto190["m_sql"] = "`shouhin`.`search_keyword`";
$proto190["m_srcTableName"] = "awazu";
$proto190["m_expr"]=$obj;
$proto190["m_alias"] = "";
$obj = new SQLFieldListItem($proto190);

$proto0["m_fieldlist"][]=$obj;
						$proto192=array();
			$obj = new SQLField(array(
	"m_strName" => "stamp",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "awazu"
));

$proto192["m_sql"] = "`shouhin`.`stamp`";
$proto192["m_srcTableName"] = "awazu";
$proto192["m_expr"]=$obj;
$proto192["m_alias"] = "";
$obj = new SQLFieldListItem($proto192);

$proto0["m_fieldlist"][]=$obj;
						$proto194=array();
			$obj = new SQLField(array(
	"m_strName" => "motif",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "awazu"
));

$proto194["m_sql"] = "`shouhin`.`motif`";
$proto194["m_srcTableName"] = "awazu";
$proto194["m_expr"]=$obj;
$proto194["m_alias"] = "";
$obj = new SQLFieldListItem($proto194);

$proto0["m_fieldlist"][]=$obj;
						$proto196=array();
			$obj = new SQLField(array(
	"m_strName" => "Setting",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "awazu"
));

$proto196["m_sql"] = "`shouhin`.`Setting`";
$proto196["m_srcTableName"] = "awazu";
$proto196["m_expr"]=$obj;
$proto196["m_alias"] = "";
$obj = new SQLFieldListItem($proto196);

$proto0["m_fieldlist"][]=$obj;
						$proto198=array();
			$obj = new SQLField(array(
	"m_strName" => "processing",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "awazu"
));

$proto198["m_sql"] = "`shouhin`.`processing`";
$proto198["m_srcTableName"] = "awazu";
$proto198["m_expr"]=$obj;
$proto198["m_alias"] = "";
$obj = new SQLFieldListItem($proto198);

$proto0["m_fieldlist"][]=$obj;
						$proto200=array();
			$obj = new SQLField(array(
	"m_strName" => "Sleeve_Length",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "awazu"
));

$proto200["m_sql"] = "`shouhin`.`Sleeve_Length`";
$proto200["m_srcTableName"] = "awazu";
$proto200["m_expr"]=$obj;
$proto200["m_alias"] = "";
$obj = new SQLFieldListItem($proto200);

$proto0["m_fieldlist"][]=$obj;
						$proto202=array();
			$obj = new SQLField(array(
	"m_strName" => "length",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "awazu"
));

$proto202["m_sql"] = "`shouhin`.`length`";
$proto202["m_srcTableName"] = "awazu";
$proto202["m_expr"]=$obj;
$proto202["m_alias"] = "";
$obj = new SQLFieldListItem($proto202);

$proto0["m_fieldlist"][]=$obj;
						$proto204=array();
			$obj = new SQLField(array(
	"m_strName" => "Ring_size",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "awazu"
));

$proto204["m_sql"] = "`shouhin`.`Ring_size`";
$proto204["m_srcTableName"] = "awazu";
$proto204["m_expr"]=$obj;
$proto204["m_alias"] = "";
$obj = new SQLFieldListItem($proto204);

$proto0["m_fieldlist"][]=$obj;
						$proto206=array();
			$obj = new SQLField(array(
	"m_strName" => "price_for_site",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "awazu"
));

$proto206["m_sql"] = "`shouhin`.`price_for_site`";
$proto206["m_srcTableName"] = "awazu";
$proto206["m_expr"]=$obj;
$proto206["m_alias"] = "";
$obj = new SQLFieldListItem($proto206);

$proto0["m_fieldlist"][]=$obj;
						$proto208=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_category_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "awazu"
));

$proto208["m_sql"] = "`shouhin`.`yahoo_category_id`";
$proto208["m_srcTableName"] = "awazu";
$proto208["m_expr"]=$obj;
$proto208["m_alias"] = "";
$obj = new SQLFieldListItem($proto208);

$proto0["m_fieldlist"][]=$obj;
						$proto210=array();
			$obj = new SQLField(array(
	"m_strName" => "Qty",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "awazu"
));

$proto210["m_sql"] = "`shouhin`.`Qty`";
$proto210["m_srcTableName"] = "awazu";
$proto210["m_expr"]=$obj;
$proto210["m_alias"] = "";
$obj = new SQLFieldListItem($proto210);

$proto0["m_fieldlist"][]=$obj;
						$proto212=array();
			$obj = new SQLField(array(
	"m_strName" => "sales_period",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "awazu"
));

$proto212["m_sql"] = "`shouhin`.`sales_period`";
$proto212["m_srcTableName"] = "awazu";
$proto212["m_expr"]=$obj;
$proto212["m_alias"] = "";
$obj = new SQLFieldListItem($proto212);

$proto0["m_fieldlist"][]=$obj;
						$proto214=array();
			$obj = new SQLField(array(
	"m_strName" => "starting_price",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "awazu"
));

$proto214["m_sql"] = "`shouhin`.`starting_price`";
$proto214["m_srcTableName"] = "awazu";
$proto214["m_expr"]=$obj;
$proto214["m_alias"] = "";
$obj = new SQLFieldListItem($proto214);

$proto0["m_fieldlist"][]=$obj;
						$proto216=array();
			$obj = new SQLField(array(
	"m_strName" => "ecc_seq",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "awazu"
));

$proto216["m_sql"] = "`Eoc`.`ecc_seq`";
$proto216["m_srcTableName"] = "awazu";
$proto216["m_expr"]=$obj;
$proto216["m_alias"] = "";
$obj = new SQLFieldListItem($proto216);

$proto0["m_fieldlist"][]=$obj;
						$proto218=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_junle",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "awazu"
));

$proto218["m_sql"] = "`shouhin`.`yahoo_junle`";
$proto218["m_srcTableName"] = "awazu";
$proto218["m_expr"]=$obj;
$proto218["m_alias"] = "";
$obj = new SQLFieldListItem($proto218);

$proto0["m_fieldlist"][]=$obj;
						$proto220=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "awazu"
));

$proto220["m_sql"] = "`shouhin`.`updated_at`";
$proto220["m_srcTableName"] = "awazu";
$proto220["m_expr"]=$obj;
$proto220["m_alias"] = "";
$obj = new SQLFieldListItem($proto220);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto222=array();
$proto222["m_link"] = "SQLL_MAIN";
			$proto223=array();
$proto223["m_strName"] = "shouhin";
$proto223["m_srcTableName"] = "awazu";
$proto223["m_columns"] = array();
$proto223["m_columns"][] = "product_id";
$proto223["m_columns"][] = "category_id";
$proto223["m_columns"][] = "goods_title";
$proto223["m_columns"][] = "title";
$proto223["m_columns"][] = "sub_category_id1";
$proto223["m_columns"][] = "ecc_id";
$proto223["m_columns"][] = "price";
$proto223["m_columns"][] = "yahoo";
$proto223["m_columns"][] = "remark";
$proto223["m_columns"][] = "sales_price";
$proto223["m_columns"][] = "description";
$proto223["m_columns"][] = "status";
$proto223["m_columns"][] = "product_num";
$proto223["m_columns"][] = "updated_at";
$proto223["m_columns"][] = "yahoo_size";
$proto223["m_columns"][] = "yahoo_title";
$proto223["m_columns"][] = "yahoo_junle";
$proto223["m_columns"][] = "yahoo_sankou_uwadai";
$proto223["m_columns"][] = "yahoo_sozai";
$proto223["m_columns"][] = "yahoo_color";
$proto223["m_columns"][] = "yahoo_kataban";
$proto223["m_columns"][] = "yahoo_condition1";
$proto223["m_columns"][] = "yahoo_condition2";
$proto223["m_columns"][] = "yahoo_fuzokuhin";
$proto223["m_columns"][] = "yahoo_sinaban";
$proto223["m_columns"][] = "yahoo_saisun_sha";
$proto223["m_columns"][] = "yahoo_sex";
$proto223["m_columns"][] = "box_id";
$proto223["m_columns"][] = "nyuukin_price";
$proto223["m_columns"][] = "updated_by";
$proto223["m_columns"][] = "raku_title";
$proto223["m_columns"][] = "raku_hyoujisaki_category2";
$proto223["m_columns"][] = "raku_hyoujisaki_category";
$proto223["m_columns"][] = "raku_hyoujisaki_category3";
$proto223["m_columns"][] = "timesta";
$proto223["m_columns"][] = "saisun_start";
$proto223["m_columns"][] = "saisun_end";
$proto223["m_columns"][] = "label_output_flag";
$proto223["m_columns"][] = "season";
$proto223["m_columns"][] = "kanryou_henbi";
$proto223["m_columns"][] = "box_sort";
$proto223["m_columns"][] = "satei_by";
$proto223["m_columns"][] = "kaitori_by";
$proto223["m_columns"][] = "comment";
$proto223["m_columns"][] = "satei_hi";
$proto223["m_columns"][] = "kaitory_hi";
$proto223["m_columns"][] = "REG_PHOTOGRAPHER";
$proto223["m_columns"][] = "REG_AUTHOR";
$proto223["m_columns"][] = "REG_PACKINGS";
$proto223["m_columns"][] = "REG_KAKOU_DATE";
$proto223["m_columns"][] = "REG_KAKOU";
$proto223["m_columns"][] = "REG_EXHIBITOR";
$proto223["m_columns"][] = "REG_PHOTOGRAPHER_DATE";
$proto223["m_columns"][] = "DT_PACKING_DATE";
$proto223["m_columns"][] = "DT_UP_DATE";
$proto223["m_columns"][] = "AWAZU_DATE";
$proto223["m_columns"][] = "AWAZU_NIN";
$proto223["m_columns"][] = "sabun_date";
$proto223["m_columns"][] = "browseid";
$proto223["m_columns"][] = "browsenode";
$proto223["m_columns"][] = "gold_property";
$proto223["m_columns"][] = "ichiba_title";
$proto223["m_columns"][] = "Gram";
$proto223["m_columns"][] = "Parent_stone";
$proto223["m_columns"][] = "Aside_stone";
$proto223["m_columns"][] = "Appraiser";
$proto223["m_columns"][] = "Remarks";
$proto223["m_columns"][] = "Destination_selling";
$proto223["m_columns"][] = "Finish";
$proto223["m_columns"][] = "Discrimination";
$proto223["m_columns"][] = "accessories";
$proto223["m_columns"][] = "priority";
$proto223["m_columns"][] = "A_storage";
$proto223["m_columns"][] = "price_per_gram";
$proto223["m_columns"][] = "price_per_parent_stone";
$proto223["m_columns"][] = "price_per_aside_stone";
$proto223["m_columns"][] = "price_secret";
$proto223["m_columns"][] = "sales_price_secret";
$proto223["m_columns"][] = "eq";
$proto223["m_columns"][] = "en";
$proto223["m_columns"][] = "line";
$proto223["m_columns"][] = "item_name";
$proto223["m_columns"][] = "handle";
$proto223["m_columns"][] = "yahoo_color_id";
$proto223["m_columns"][] = "raku_hyoujisaki_category4";
$proto223["m_columns"][] = "raku_hyoujisaki_category5";
$proto223["m_columns"][] = "raku_dir_1";
$proto223["m_columns"][] = "raku_dir_2";
$proto223["m_columns"][] = "raku_dir_3";
$proto223["m_columns"][] = "raku_dir_4";
$proto223["m_columns"][] = "raku_dir_5";
$proto223["m_columns"][] = "raku_dir_result";
$proto223["m_columns"][] = "raku_tag_result";
$proto223["m_columns"][] = "serial_number";
$proto223["m_columns"][] = "Exhibition_Date";
$proto223["m_columns"][] = "search_keyword";
$proto223["m_columns"][] = "stamp";
$proto223["m_columns"][] = "motif";
$proto223["m_columns"][] = "Setting";
$proto223["m_columns"][] = "processing";
$proto223["m_columns"][] = "Sleeve_Length";
$proto223["m_columns"][] = "length";
$proto223["m_columns"][] = "Ring_size";
$proto223["m_columns"][] = "price_for_site";
$proto223["m_columns"][] = "yahoo_category_id";
$proto223["m_columns"][] = "Qty";
$proto223["m_columns"][] = "sales_period";
$proto223["m_columns"][] = "starting_price";
$proto223["m_columns"][] = "FLAG_NO_ARRIVAL";
$proto223["m_columns"][] = "amount_of_image";
$proto223["m_columns"][] = "csv";
$proto223["m_columns"][] = "return_output_flag";
$proto223["m_columns"][] = "wasabi_flag";
$proto223["m_columns"][] = "ws_import_date";
$proto223["m_columns"][] = "logo";
$proto223["m_columns"][] = "parts";
$proto223["m_columns"][] = "country_of_origin";
$proto223["m_columns"][] = "zipper";
$proto223["m_columns"][] = "guarantee";
$proto223["m_columns"][] = "errors";
$proto223["m_columns"][] = "designer";
$proto223["m_columns"][] = "hahakai";
$proto223["m_columns"][] = "effect";
$proto223["m_columns"][] = "shape";
$proto223["m_columns"][] = "cutting_style";
$proto223["m_columns"][] = "chain_type";
$proto223["m_columns"][] = "number_of_stones";
$proto223["m_columns"][] = "amount";
$proto223["m_columns"][] = "satei_error";
$proto223["m_columns"][] = "producing_area";
$proto223["m_columns"][] = "shape_supplement";
$proto223["m_columns"][] = "side_gem";
$proto223["m_columns"][] = "product_style";
$proto223["m_columns"][] = "collar_neck_line";
$proto223["m_columns"][] = "breast";
$proto223["m_columns"][] = "silhouette";
$proto223["m_columns"][] = "sleeve";
$proto223["m_columns"][] = "unit";
$proto223["m_columns"][] = "hall_mark";
$proto223["m_columns"][] = "plate";
$proto223["m_columns"][] = "toe";
$proto223["m_columns"][] = "heel";
$proto223["m_columns"][] = "cloth";
$proto223["m_columns"][] = "serial_number_for_storage";
$proto223["m_columns"][] = "official_url";
$proto223["m_columns"][] = "main_details";
$proto223["m_columns"][] = "notation_size";
$proto223["m_columns"][] = "shoe_size_jp";
$proto223["m_columns"][] = "Eoc_chigins2_id";
$proto223["m_columns"][] = "country_of_origin_name";
$proto223["m_columns"][] = "mailingkit_id";
$proto223["m_columns"][] = "DA_COMMENTSANDTOTAL";
$proto223["m_columns"][] = "DA_WEIGHT";
$proto223["m_columns"][] = "DA_PER_CARAT";
$proto223["m_columns"][] = "DA_SHAPE";
$proto223["m_columns"][] = "DA_SELFGRES";
$proto223["m_columns"][] = "DA_ORIGINALGRADEMLIKENED";
$proto223["m_columns"][] = "DA_SUGARCANE";
$proto223["m_columns"][] = "DA_RAPA";
$proto223["m_columns"][] = "DA_INTENSITY";
$proto223["m_columns"][] = "DA_OVERTONE";
$proto223["m_columns"][] = "DA_COLOR";
$proto223["m_columns"][] = "DA_CLARITY";
$proto223["m_columns"][] = "DA_CUT";
$proto223["m_columns"][] = "DA_POLISH";
$proto223["m_columns"][] = "DA_SYMMETRY";
$proto223["m_columns"][] = "DA_FLUO";
$proto223["m_columns"][] = "DA_COLOR_FLUO";
$proto223["m_columns"][] = "DA_WIDE";
$proto223["m_columns"][] = "DA_HIGH";
$proto223["m_columns"][] = "DA_DEPTH";
$proto223["m_columns"][] = "DA_APPRAISER";
$proto223["m_columns"][] = "DA_FRAPA";
$proto223["m_columns"][] = "DA_RATE";
$proto223["m_columns"][] = "DA_UNIT_PRICE_UNPLUG";
$proto223["m_columns"][] = "DA_YOURNAME";
$proto223["m_columns"][] = "DA_RAPAB";
$proto223["m_columns"][] = "DA_GROSSPROFIT";
$proto223["m_columns"][] = "DA_INTEREST_1";
$proto223["m_columns"][] = "DA_no";
$proto223["m_columns"][] = "kinsa_flag";
$proto223["m_columns"][] = "price_for_site_flag";
$proto223["m_columns"][] = "Eoc_takuhai_id";
$proto223["m_columns"][] = "Eoc_unfinished_id";
$proto223["m_columns"][] = "Eoc_chigins_unfinished_id";
$proto223["m_columns"][] = "chohyo_id";
$proto223["m_columns"][] = "location";
$proto223["m_columns"][] = "special_instructions_1";
$proto223["m_columns"][] = "special_instructions_2";
$proto223["m_columns"][] = "special_instructions_3";
$proto223["m_columns"][] = "chohyo_seihin_flag";
$proto223["m_columns"][] = "chohyo_dia_flag";
$proto223["m_columns"][] = "chohyo_type";
$proto223["m_columns"][] = "ichiyen_flag";
$proto223["m_columns"][] = "asuraku_fuka_flag";
$proto223["m_columns"][] = "parallel_import_flag";
$proto223["m_columns"][] = "meisai_number";
$proto223["m_columns"][] = "days_keep_price";
$proto223["m_columns"][] = "initial_included";
$proto223["m_columns"][] = "novelty";
$proto223["m_columns"][] = "tentou_label_output_flag";
$proto223["m_columns"][] = "itaku_flag";
$proto223["m_columns"][] = "including_catch";
$proto223["m_columns"][] = "ichiba_meeting_month";
$proto223["m_columns"][] = "ichiba_meeting_name";
$proto223["m_columns"][] = "ichiba_color";
$proto223["m_columns"][] = "ichiba_clarity";
$proto223["m_columns"][] = "ichiba_melee_gai";
$proto223["m_columns"][] = "ichiba_lot_pieces";
$proto223["m_columns"][] = "ichiba_image";
$proto223["m_columns"][] = "ichiba_img";
$proto223["m_columns"][] = "gold_check_id";
$proto223["m_columns"][] = "ichiba_exhibition_id";
$proto223["m_columns"][] = "ichiba_exhibition_sort";
$proto223["m_columns"][] = "cost";
$proto223["m_columns"][] = "auto_price_cut_prohibited";
$proto223["m_columns"][] = "event_price";
$proto223["m_columns"][] = "identification_cost";
$proto223["m_columns"][] = "other_cost";
$proto223["m_columns"][] = "stock_quantity";
$proto223["m_columns"][] = "Eoc_trader_id_for_buy";
$proto223["m_columns"][] = "Eoc_trader_id_for_sell";
$proto223["m_columns"][] = "multiplication_rate";
$proto223["m_columns"][] = "many_product_group_id";
$proto223["m_columns"][] = "trading_sort_id";
$proto223["m_columns"][] = "many_product_group_saiban";
$proto223["m_columns"][] = "purchase_category";
$proto223["m_columns"][] = "created_at";
$proto223["m_columns"][] = "created_by";
$proto223["m_columns"][] = "manual_input_price_per_gram";
$proto223["m_columns"][] = "satei_start";
$proto223["m_columns"][] = "self_DA_INTENSITY";
$proto223["m_columns"][] = "self_DA_OVERTONE";
$proto223["m_columns"][] = "self_DA_COLOR";
$proto223["m_columns"][] = "self_DA_CLARITY";
$proto223["m_columns"][] = "self_DA_CUT";
$proto223["m_columns"][] = "self_DA_POLISH";
$proto223["m_columns"][] = "self_DA_SYMMETRY";
$proto223["m_columns"][] = "self_DA_FLUO";
$proto223["m_columns"][] = "self_DA_COLOR_FLUO";
$proto223["m_columns"][] = "self_DA_FRAPA";
$proto223["m_columns"][] = "self_DA_RATE";
$proto223["m_columns"][] = "self_multiplication_rate";
$proto223["m_columns"][] = "is_seiyaku";
$proto223["m_columns"][] = "destination_sold_out";
$proto223["m_columns"][] = "mypage_update_prohibited";
$proto223["m_columns"][] = "gold_check_scan_id";
$proto223["m_columns"][] = "buy_campaign_data_id";
$proto223["m_columns"][] = "REG_PHOTOGRAPHER_DATE_start";
$proto223["m_columns"][] = "commission";
$proto223["m_columns"][] = "addtime_gold_check_id";
$proto223["m_columns"][] = "is_recovery";
$proto223["m_columns"][] = "sales_cost";
$proto223["m_columns"][] = "mst_business_partner_id";
$proto223["m_columns"][] = "DA_GROSSPROFIT_2";
$proto223["m_columns"][] = "DA_INTEREST_2";
$proto223["m_columns"][] = "minus_weight";
$proto223["m_columns"][] = "diameter_size";
$proto223["m_columns"][] = "metal_rate_date";
$obj = new SQLTable($proto223);

$proto222["m_table"] = $obj;
$proto222["m_sql"] = "`shouhin`";
$proto222["m_alias"] = "";
$proto222["m_srcTableName"] = "awazu";
$proto224=array();
$proto224["m_sql"] = "";
$proto224["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto224["m_column"]=$obj;
$proto224["m_contained"] = array();
$proto224["m_strCase"] = "";
$proto224["m_havingmode"] = false;
$proto224["m_inBrackets"] = false;
$proto224["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto224);

$proto222["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto222);

$proto0["m_fromlist"][]=$obj;
												$proto226=array();
$proto226["m_link"] = "SQLL_LEFTJOIN";
			$proto227=array();
$proto227["m_strName"] = "Eoc";
$proto227["m_srcTableName"] = "awazu";
$proto227["m_columns"] = array();
$proto227["m_columns"][] = "ecc_id";
$proto227["m_columns"][] = "ecc_seq";
$proto227["m_columns"][] = "name1";
$proto227["m_columns"][] = "created_t";
$proto227["m_columns"][] = "registerd_id";
$proto227["m_columns"][] = "kaitori_staff_id";
$proto227["m_columns"][] = "name2";
$proto227["m_columns"][] = "wareki";
$proto227["m_columns"][] = "b1";
$proto227["m_columns"][] = "b2";
$proto227["m_columns"][] = "b3";
$proto227["m_columns"][] = "birth_day";
$proto227["m_columns"][] = "age";
$proto227["m_columns"][] = "zip";
$proto227["m_columns"][] = "zip1";
$proto227["m_columns"][] = "zip2";
$proto227["m_columns"][] = "address1";
$proto227["m_columns"][] = "address2";
$proto227["m_columns"][] = "address3";
$proto227["m_columns"][] = "tel";
$proto227["m_columns"][] = "tel2";
$proto227["m_columns"][] = "mail1";
$proto227["m_columns"][] = "mail2";
$proto227["m_columns"][] = "address_code";
$proto227["m_columns"][] = "bank_name";
$proto227["m_columns"][] = "bank_blunch_code";
$proto227["m_columns"][] = "bank_yokin_shubetu";
$proto227["m_columns"][] = "bank_account";
$proto227["m_columns"][] = "bank_acoount_name";
$proto227["m_columns"][] = "haisou_bangou";
$proto227["m_columns"][] = "sise_houhou";
$proto227["m_columns"][] = "hentou_houhou";
$proto227["m_columns"][] = "hentou_houhou_time";
$proto227["m_columns"][] = "mousikomi_id";
$proto227["m_columns"][] = "hituyou_shorui";
$proto227["m_columns"][] = "seiyaku_fuseiritu";
$proto227["m_columns"][] = "mitumori_taku";
$proto227["m_columns"][] = "seacanse";
$proto227["m_columns"][] = "remark";
$proto227["m_columns"][] = "type";
$proto227["m_columns"][] = "sales_flag";
$proto227["m_columns"][] = "src_type";
$proto227["m_columns"][] = "liquidation_shop_code";
$proto227["m_columns"][] = "insurance_amount_print";
$proto227["m_columns"][] = "jis_code";
$proto227["m_columns"][] = "updated_at";
$proto227["m_columns"][] = "_registerd_id";
$proto227["m_columns"][] = "mail_check_type";
$proto227["m_columns"][] = "purchase_type";
$proto227["m_columns"][] = "sex";
$proto227["m_columns"][] = "m_tel";
$proto227["m_columns"][] = "fax";
$proto227["m_columns"][] = "chigin_kaitori";
$proto227["m_columns"][] = "option1";
$proto227["m_columns"][] = "option2";
$proto227["m_columns"][] = "option3";
$proto227["m_columns"][] = "option4";
$proto227["m_columns"][] = "option5";
$proto227["m_columns"][] = "option6";
$proto227["m_columns"][] = "option7";
$proto227["m_columns"][] = "option8";
$proto227["m_columns"][] = "option9";
$proto227["m_columns"][] = "option10";
$proto227["m_columns"][] = "option11";
$proto227["m_columns"][] = "option12";
$proto227["m_columns"][] = "option13";
$proto227["m_columns"][] = "rakuda_csv_flag";
$proto227["m_columns"][] = "EOC_COURIER_CHECK";
$proto227["m_columns"][] = "EOC_SIZE";
$proto227["m_columns"][] = "EOC_NUMBER";
$proto227["m_columns"][] = "EOC_REUSE";
$proto227["m_columns"][] = "EOC__DELIVERY_DATES";
$proto227["m_columns"][] = "EOC_SPECIFIED_TIME";
$proto227["m_columns"][] = "FIRST_NAME2";
$proto227["m_columns"][] = "LAST_NAME2";
$proto227["m_columns"][] = "EOC__DATE_AND_TIME_2";
$proto227["m_columns"][] = "EOC__BOX_NUMBER";
$proto227["m_columns"][] = "FIRST_NAME_KANA";
$proto227["m_columns"][] = "LAST_NAME_KANA";
$proto227["m_columns"][] = "FLAG_SPEED";
$proto227["m_columns"][] = "SEARCH_MEDIA";
$proto227["m_columns"][] = "SEARCH_SITE";
$proto227["m_columns"][] = "UN_REACHABLE";
$proto227["m_columns"][] = "FLG_MAIL_SAGAWA";
$proto227["m_columns"][] = "FLG_MAIL_OTHER";
$proto227["m_columns"][] = "ALLSEIYAKU";
$proto227["m_columns"][] = "ICHIBUSEIYAKU";
$proto227["m_columns"][] = "seiyakukin";
$proto227["m_columns"][] = "kaitorihuka";
$proto227["m_columns"][] = "awazu_date";
$proto227["m_columns"][] = "seiyaku_price";
$proto227["m_columns"][] = "eoc_search_keyword";
$proto227["m_columns"][] = "sonota";
$proto227["m_columns"][] = "size_kosuu";
$proto227["m_columns"][] = "sagawa_shuuka_flag";
$proto227["m_columns"][] = "line_check";
$proto227["m_columns"][] = "sagawa_shuukairai_denwabangou";
$proto227["m_columns"][] = "kaitori_sougak";
$proto227["m_columns"][] = "flag";
$proto227["m_columns"][] = "key_code";
$proto227["m_columns"][] = "dm_check_type";
$proto227["m_columns"][] = "kit_flag";
$proto227["m_columns"][] = "kit_done_flag";
$proto227["m_columns"][] = "bank_details_code";
$proto227["m_columns"][] = "bank_details_blunch_name";
$proto227["m_columns"][] = "bank_details_blunch_code";
$proto227["m_columns"][] = "bank_details_account_number";
$proto227["m_columns"][] = "bank_details_symbol";
$proto227["m_columns"][] = "bank_details_number";
$proto227["m_columns"][] = "bank_details_account_name";
$proto227["m_columns"][] = "bank_details_deposit_type";
$proto227["m_columns"][] = "mypage_id";
$proto227["m_columns"][] = "UN_REACHABLE_brand";
$proto227["m_columns"][] = "sagawa_haisou_hoken";
$proto227["m_columns"][] = "transfer_confirm";
$proto227["m_columns"][] = "outside_bank";
$proto227["m_columns"][] = "new_name";
$proto227["m_columns"][] = "letterpack";
$proto227["m_columns"][] = "satei_saisoku_2_days";
$proto227["m_columns"][] = "satei_saisoku_7_days";
$proto227["m_columns"][] = "accept_flag";
$proto227["m_columns"][] = "delivery_flag";
$proto227["m_columns"][] = "refining_weight";
$proto227["m_columns"][] = "line_chat_url";
$proto227["m_columns"][] = "royal_customer_status";
$proto227["m_columns"][] = "is_business_customer";
$proto227["m_columns"][] = "is_exist_haisouhosyo";
$proto227["m_columns"][] = "meigi_hankaku_kana";
$proto227["m_columns"][] = "building_types";
$proto227["m_columns"][] = "dwelling_types";
$proto227["m_columns"][] = "is_yamato_csv";
$proto227["m_columns"][] = "is_seiren_csv";
$obj = new SQLTable($proto227);

$proto226["m_table"] = $obj;
$proto226["m_sql"] = "LEFT OUTER JOIN `Eoc` ON `shouhin`.`ecc_id` = `Eoc`.`ecc_id`";
$proto226["m_alias"] = "";
$proto226["m_srcTableName"] = "awazu";
$proto228=array();
$proto228["m_sql"] = "`shouhin`.`ecc_id` = `Eoc`.`ecc_id`";
$proto228["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "ecc_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "awazu"
));

$proto228["m_column"]=$obj;
$proto228["m_contained"] = array();
$proto228["m_strCase"] = "= `Eoc`.`ecc_id`";
$proto228["m_havingmode"] = false;
$proto228["m_inBrackets"] = false;
$proto228["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto228);

$proto226["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto226);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto230=array();
						$obj = new SQLField(array(
	"m_strName" => "product_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "awazu"
));

$proto230["m_column"]=$obj;
$proto230["m_bAsc"] = 0;
$proto230["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto230);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="awazu";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_awazu = createSqlQuery_awazu();


	
		;

																																																																																																												

$tdataawazu[".sqlquery"] = $queryData_awazu;

include_once(getabspath("include/awazu_events.php"));
$tableEvents["awazu"] = new eventclass_awazu;
$tdataawazu[".hasEvents"] = true;

?>